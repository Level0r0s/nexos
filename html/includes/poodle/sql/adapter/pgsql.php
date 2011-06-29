<?php
/*********************************************
 *  CPG Dragonfly™ CMS
 *********************************************
	Copyright © since 2010 by CPG-Nuke Dev Team
	http://dragonflycms.org

	Dragonfly is released under the terms and conditions
	of the GNU GPL version 2 or any later version

	$Source: /cvs/html/includes/poodle/sql/adapter/pgsql.php,v $
	$Revision: 10.2 $
	$Author: djmaze $
	$Date: 2010/11/11 22:21:45 $
**********************************************/

class Poodle_SQL_Adapter_PgSQL implements Poodle_SQL_Interface_Adapter
{

	const ENGINE    = 'PostgreSQL';
	const TBL_QUOTE = '"';

	protected $affected_rows;
	protected $connection;
	protected $last_insert_table;
	protected $v81;
	protected $server_info;
	protected $server_version;

	private $client_info;
	private $client_version;
	private $last_result;

	# host , hostaddr , port , dbname , user , password , connect_timeout , options , sslmode, and service
	protected $cfg = array(
		'host' => null,
		'port' => null, # 5432
		'username' => null,
		'password' => null,
		'database' => null,
		'charset'  => 'utf8',
		# PostgreSQL advanced options http://www.postgresql.org/docs/8.3/static/libpq-connect.html
		'hostaddr' => null,
		'connect_timeout' => null,
		'options'  => null,
		'sslmode'  => null, # requiressl = 7.x
		'service'  => null,
	);

	function __construct($config)
	{
		if (!function_exists('pg_connect')) {
			throw new Poodle_SQL_Exception('PostgreSQL', 0, Poodle_SQL_Exception::NO_EXTENSION);
		}
		$this->cfg = array_merge($this->cfg, $config);
		# IPv4
		if (preg_match('#^((?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9]{1,2})\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9]{1,2}))(?::(\d+))?$#', $this->cfg['host'], $match)) {
			$this->cfg['hostaddr'] = $match[1];
			$this->cfg['port']     = (empty($match[2]) ? null : $match[2]);
		}
		# IPv6
		else if (preg_match('#^\[([a-z0-9:]+)\](?::(\d+))?$#', $this->cfg['host'], $match)) {
			$this->cfg['hostaddr'] = $match[1];
			$this->cfg['port']     = (empty($match[2]) ? null : $match[2]);
		}
		else if (preg_match('#^(.*)?:(\d+)?$#', $this->cfg['host'], $match)) {
			$this->cfg['host'] = (empty($match[1]) ? null : $match[1]);
			$this->cfg['port'] = (empty($match[2]) ? null : $match[2]);
		}
		$this->connect();
	}
	function __destruct()
	{
		$this->close();
	}
	function __get($key)
	{
		switch ($key) {
		case 'affected_rows': return $this->affected_rows;
		case 'client_info':   return $this->client_info;
		case 'client_version':return $this->client_version;
		case 'server_info':   return $this->server_info;
		case 'server_version':return $this->server_version;
		case 'host_info':     return pg_host($this->connection);
		case 'errno':         return 0;
		case 'error':         return pg_last_error($this->connection);
		case 'insert_id':     return $this->insert_id();
		default: return null;
		}
	}

	public function connect()
	{
		$connect_string = '';
		if ($this->cfg['host'])     { $connect_string .= ' host='.$this->cfg['host']; }
		if ($this->cfg['hostaddr']) { $connect_string .= ' hostaddr='.$this->cfg['hostaddr']; }
		if ($this->cfg['port'])     { $connect_string .= ' port='.$this->cfg['port']; }
		if ($this->cfg['username']) { $connect_string .= ' user='.$this->cfg['username']; }
		if ($this->cfg['password']) { $connect_string .= ' password='.$this->cfg['password']; }
		if ($this->cfg['database']) { $connect_string .= ' dbname='.$this->cfg['database']; }
		if (!($this->connection = pg_connect($connect_string))) {
			throw new Poodle_SQL_Exception(pg_last_error(), 0, Poodle_SQL_Exception::NO_CONNECTION);
		}

		$this->server_info = pg_parameter_status($this->connection, 'server_version');
		$v = explode('.', $this->server_info);
		$this->server_version = ($v[0]*10000) + ($v[1]*100) + min(99, $v[2]);

		$v = pg_version($this->connection);
		$this->client_info = $v['client'];
		$v = explode('.', $v['client']);
		$this->client_version = ($v[0]*10000) + ($v[1]*100) + min(99, $v[2]);

		$this->v81 = version_compare($this->server_info, '8.1', '>=');
		$this->set_charset();
	}

	public function ping()  { return pg_ping($this->connection); }

	public function real_connect() { $this->connect(); }

	public function select_db()
	{
//		CREATE DATABASE poodle WITH ENCODING='UTF8' OWNER=poodle CONNECTION LIMIT=-1;
//		CREATE LANGUAGE plpgsql;
	}
	public function dbname() { return $this->cfg['database']; }

	public function set_charset()
	{
		# SET NAMES | SET CLIENT_ENCODING TO
		if (-1 == pg_set_client_encoding($this->connection, $this->cfg['charset'])
		 || -1 == pg_set_client_encoding($this->connection, str_replace('utf8','unicode',$this->cfg['charset'])))
		{
			return false;
		}
		return true;
	}
	public function character_set_name() { return pg_client_encoding($this->connection); }

	public function close() { return pg_close($this->connection); }

	public function get_charset()
	{
		$r = new stdClass;
		$r->charset = pg_client_encoding($this->connection); # pg_parameter_status($this->connection, 'server_encoding')
		$r->collation = null;
		$r->comment = 'UTF-8 Unicode';
		$r->dir = '';
		$r->min_length = 1;
		$r->max_length = 3;
		$r->number = 33;
		$r->state = 993;
		return $r;
	}

	protected function _query($query) { return $this->query($query); }
	public function query($query, $unbuffered=0)
	{
		$this->last_insert_table = false;
		if ('S' === $query[0]) { $query = preg_replace('#\s+(REGEXP|RLIKE)\s+#i', ' ~ ', $query); } # MySQL regular expression
//		if (!strspn($query, 'CI', 0, 1)) { $query = preg_replace('#FIND_IN_SET\s*\(([^,]+),\s*([^\(\)]+)\)#i', '$1 = ANY(STRING_TO_ARRAY($2, \',\'))', $query); }
		$result = pg_query($this->connection, $query);
		$this->last_result = $result;
		if (!$result) {
			throw new Poodle_SQL_Exception(pg_last_error($this->connection), 0, $query);
		}
		$this->affected_rows = pg_affected_rows($result);
//		if ($this->field_count = is_resource($result) ? max(0,pg_num_fields($result)) : 0) {
		if (is_resource($result)) {
			return $unbuffered ? $this->use_result() : $this->store_result();
		}
		if (!$this->v81 && preg_match('#^INSERT\s+INTO\s+([\w\-]+)\s+\(#i', $query, $tablename)) {
			$this->last_insert_table = $tablename[1];
		}
		return true;
	}
	public function store_result() { return new Poodle_PgSQL_Result($this->last_result); }
	public function use_result()   { return new Poodle_PgSQL_Result($this->last_result); }

	public function show_tables($prefix)
	{
//		$q = 'SELECT tablename FROM pg_tables WHERE tableowner = current_user ORDER BY tablename';
//		$q = 'SELECT relname FROM pg_class WHERE relname !~ \'^(pg_|sql_)\' AND relkind = \'r\'';
//		$q = 'SELECT table_name FROM information_schema.tables WHERE table_type = \'BASE TABLE\' AND table_schema NOT IN (\'pg_catalog\', \'information_schema\')';
		$q = 'SELECT table_name FROM information_schema.tables WHERE table_schema = \'public\'';
		if ($prefix) $q .= " AND table_name LIKE '{$prefix}%'";
		return $this->query($q);
	}

	public function quote_binary($str) { return '\''.pg_escape_bytea($str).'\''; }
	public function escape_binary($data) { return pg_escape_bytea($data); }
	public function unescape_binary($data) { return pg_unescape_bytea($data); }
	public function escape_string($data) { return pg_escape_string($data); }

	public function insert_id($idfield)
	{
		$query = 'SELECT lastval()';
		if (!$this->v81) {
			if (!$this->last_insert_table) { return 0; }
			if (!$idfield && $result = $this->_query('SELECT column_default FROM information_schema.columns WHERE table_name=\''.$this->last_insert_table.'\' AND column_default LIKE (\'nextval%\')'))
			{
				list($idfield) = $result->fetch_row();
				$query = 'SELECT currval('.preg_replace('#^.*(\'[\']+\').+$#D', '$1', $idfield).')';
				$result->free();
			}
			else if (!$idfield) { return null; }
			else {
				$query = 'SELECT currval(\''.$this->last_insert_table.'_'.$idfield.'_seq\')';
			}
		}
		$result = $this->query($query);
		if (!$result) { return 0; }
		list($insert_id) = $result->fetch_row();
		$result->free();
		return intval($insert_id);
	}
	public function stat() { return false; }
	public function optimize($table) { return $this->_query('VACUUM ANALYZE '.$table); }

	public function begin() { return $this->_query('BEGIN'); } # START TRANSACTION
	public function commit() { return $this->_query('COMMIT'); }
	public function rollback() { return $this->_query('ROLLBACK'); }

//	public function searchQuery($term, $fulltext, $colname)
	public function search($fields, $text)
	{
		static $min_word_len = 0;
		/*
		# Short words are ignored, the default minimum length is 4 characters. You can change the min and max word length with the variables ft_min_word_len and ft_max_word_len
		# Words called stopwords are ignored, you can specify your own stopwords, but default words include the, have, some - see default stopwords list.
		# You can disable stopwords by setting the variable ft_stopword_file to an empty string.
		*/
		if (!$min_word_len)
		{
			$min_word_len = u_fetch_row('SHOW VARIABLES LIKE \'ft_min_word_len\'');
			$min_word_len = max(intval($min_word_len[0]), 3);
		}
		preg_match_all('#[^\s]{'.$min_word_len.',}#', $text, $text);
		return ' MATCH('.implode(',', $fields).') AGAINST('.$this->quote(implode(' ', $text[0])).') ';

		$text = Poodle_Unicode::as_search_txt($text);
		$prefix = $this->server_info < 8.3 ? "'default'," : '';
//		$searchstring = $this->parseQuery($text);
		# We need a separate query here so gin does not complain about empty searches
		$res = pg_query($this->connection, "SELECT to_tsquery($prefix $text)");
		if (!$res) { Poodle_Report::error('Sorry, that was not a valid search string. Please go back and try again'); }
		$top = pg_fetch_result($res,0,0);
 		# e.g. if only stopwords are used XXX return something better
		if (!$top) {
			$query = "SELECT page_id, page_namespace, page_title, 0 AS score ".
				"FROM page p, revision r, pagecontent c WHERE p.page_latest = r.rev_id " .
				"AND r.rev_text_id = c.old_id AND 1=0";
		} else {
			$m = array();
			if( preg_match_all("/'([^']+)'/", $top, $m, PREG_SET_ORDER ) ) {
				foreach( $m as $terms ) {
					$this->searchTerms[$terms[1]] = $terms[1];
				}
			}
			$score = $this->server_info > 8.2 ? 5 : 1;
			$rank  = $this->server_info < 8.3 ? 'rank' : 'ts_rank';
			$query = "SELECT page_id, page_namespace, page_title, ".
			"$rank($fulltext, to_tsquery($prefix $searchstring), $score) AS score ".
			"FROM page p, revision r, pagecontent c WHERE p.page_latest = r.rev_id " .
			"AND r.rev_text_id = c.old_id AND $fulltext @@ to_tsquery($prefix $searchstring)";
		}

		## Redirects
		if (! $this->showRedirects)
			$query .= ' AND page_is_redirect = 0';

		## Namespaces - defaults to 0
		if( !is_null($this->namespaces) ){ // null -> search all
			if ( count($this->namespaces) < 1)
				$query .= ' AND page_namespace = 0';
			else {
				$namespaces = implode( ',', $this->namespaces );
				$query .= " AND page_namespace IN ($namespaces)";
			}
		}
		$query .= " ORDER BY score DESC, page_id DESC";
		$query .= $this->db->limitResult( '', $this->limit, $this->offset );
		return $query;
	}
}

class Poodle_PgSQL_Result implements Poodle_SQL_Interface_Result
{
	/** TODO: fix slow type casting */
	static $ints = array(1=>1,2=>2,3=>3,8=>8,9=>9);
	static $floats = array(4=>4,5=>5,246=>246);
	private function type_cast($row)
	{
		static $fields;
		if (!$fields) $fields = $this->fetch_fields();
		foreach ($fields as $field) {
			if (isset($floats[$field->type])) { $row[$field->name] = (float)$row[$field->name]; }
			else if (isset($ints[$field->type])) { $row[$field->name] = (int)$row[$field->name]; }
		}
		return $row;
	}

	protected $i = 0;
	protected $row = null;

	private $result;
	private $field_offset = 0;
	private $field_count = 0;
	private $num_rows = 0;
	private static $field_types = array(
	'int2'      => 2,
	'int4'      => 3,
	'float4'    => 4,
	'float8'    => 5,
	'timestamp' => 7,
	'int8'      => 8,
	'date'      => 10,
	'time'      => 11,
	'datetime'  => 12,
	'bit'       => 16,
	'numeric'   => 246,
	'text'      => 252,
	'bytea'     => 252,
	'varchar'   => 253,
	'bpchar'    => 254,
	'char'      => 254,
	);

	function __construct(&$result)
	{
		$this->result = &$result;
		$this->field_count = pg_num_fields($result);
		$this->num_rows    = pg_num_rows($result);
	}
	function __destruct() { $this->free(); }
	function __get($key)
	{
		switch ($key) {
		case 'current_field': return $this->field_offset;
		case 'field_count':   return $this->field_count;
		case 'lengths':       return null;
		case 'num_rows':      return $this->num_rows;
		default: return null;
		}
	}
	public function data_seek($offset) { return pg_result_seek($this->result, $offset); }
	public function fetch_all($resulttype=Poodle_SQL::ASSOC)
	{
		$rows = array();
		if ($resulttype === Poodle_SQL::BOTH) { $resulttype = PGSQL_BOTH; }
		else if ($resulttype === Poodle_SQL::NUM) { $resulttype = PGSQL_NUM; }
		else { $resulttype = PGSQL_ASSOC; }
		while ($row = pg_fetch_array($this->result, null, $resulttype)) $rows[] = $row;
		return $rows;
	}
	public function fetch_array($type_cast=false)
	{
		return $type_cast ? $this->type_cast(pg_fetch_array($this->result, null, PGSQL_BOTH)) : pg_fetch_array($this->result, null, PGSQL_BOTH); # PGSQL_ASSOC | PGSQL_NUM;
	}
	public function fetch_assoc($type_cast=false)
	{
		return $type_cast ? $this->type_cast(pg_fetch_assoc($this->result)) : pg_fetch_assoc($this->result);
	}
	public function fetch_object() { return pg_fetch_object($this->result); }
	public function fetch_row($type_cast=false)
	{
		return $type_cast ? $this->type_cast(pg_fetch_row($this->result)) : pg_fetch_row($this->result);
	}

	public function fetch_field()  { return $this->fetch_field_direct($this->field_offset++); }
	public function fetch_fields()
	{
		$fields = array();
		$i = 0;
		while ($field = $this->fetch_field_direct($i++)) { $fields[] = $field; }
		return $fields;
	}
	public function fetch_field_direct($offset)
	{
		if ($this->field_count <= $offset || 0 > $offset) { return false; }
		$type = pg_field_type($this->result, $offset);
		$info = new stdClass();
		$info->name  = pg_field_name($this->result, $offset);
		$info->table = pg_field_table($this->result, $offset);
		$info->type  = self::$field_types[$type];
		$info->def   = null;
		$info->flags = 0;
		if ('bytea' === $type) { $field->flags |= 16; } # BLOB
/*
		NOT_NULL_FLAG = 1
		PRI_KEY_FLAG = 2
		UNIQUE_KEY_FLAG = 4
		BLOB_FLAG = 16
		UNSIGNED_FLAG = 32
		ZEROFILL_FLAG = 64
		BINARY_FLAG = 128
		ENUM_FLAG = 256
		AUTO_INCREMENT_FLAG = 512
		TIMESTAMP_FLAG = 1024
		SET_FLAG = 2048
		NUM_FLAG = 32768
		PART_KEY_FLAG = 16384
		GROUP_FLAG = 32768
		UNIQUE_FLAG = 65536
*/
//		$info->orgname  = $info->name;
//		$info->orgtable = $info->table;
		return $info;
/*
		$info->max_length = pg_field_size($this->result, $offset);
		$info->max_length = pg_field_prtlen($this->result, $offset);
		decimals   The number of decimals used
*/
	}
	public function field_seek($offset)
	{
		return ($offset >= 0 && $this->field_count <= $offset && $this->field_offset = $offset);
	}
	public function free()
	{
		if (!$this->result) return;
		$ret = pg_free_result($this->result);
		unset($this->result);
		return $ret;
	}
	# ArrayAccess
	public function offsetExists($k)  { return ($k >= 0 && $k < $this->num_rows); }
	public function offsetGet($k)     { return $this->row = ($this->data_seek($this->i = $k) ? $this->fetch_assoc() : null); }
	public function offsetSet($k, $v) { return; }
	public function offsetUnset($k)   { return; }
	# Countable
	public function count()   { return $this->num_rows; }
	# Iterator steps: rewind() valid() current() key() next() valid() current() key()
	public function key()     { return $this->i; }
	public function current() { return $this->row; }
	public function next()    { $this->row = $this->fetch_assoc(); ++$this->i; }
	public function rewind()  { $this->data_seek($this->i = 0); $this->row = $this->fetch_assoc(); }
	public function valid()   { return $this->i < $this->num_rows; }
}
