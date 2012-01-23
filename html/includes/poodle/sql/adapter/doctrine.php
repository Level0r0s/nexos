<?php
/*********************************************
 *  CPG Dragonfly™ CMS
 *********************************************
	Copyright © since 2010 by CPG-Nuke Dev Team
	http://dragonflycms.org

	Dragonfly is released under the terms and conditions
	of the GNU GPL version 2 or any later version

	$Source: /cvs/html/includes/poodle/sql/adapter/mysqli.php,v $
	$Revision: 10.2 $
	$Author: djmaze $
	$Date: 2010/11/11 22:21:45 $
**********************************************/

class Poodle_SQL_Adapter_Doctrine implements Poodle_SQL_Interface_Adapter
{
	public $debug = false;

	const ENGINE    = 'MySQL';
	const TBL_QUOTE = '`';

	public $query_results;
	protected $db;
	protected $config;
	protected $cfg = array(
		'host' => null,
		'port' => null, # 3306
		'username' => null,
		'password' => null,
		'database' => null, # 1046 = no database selected / 1049 = unknown database
		'charset'  => 'utf8',  # dev.mysql.com/doc/refman/5.0/en/charset-connection.html
		# MySQLi advanced options
		'socket'  => null,
		'flags'   => null,
		'options' => array(), # php.net/mysqli_options
		'ssl'     => array(   # php.net/mysqli_ssl_set
			'key'  => null,
			'cert' => null,
			'ca'   => null,
			'capath' => null,
			'cipher' => null,
		),
		'storage_engine' => null,
	);
	protected $connectionParams = array(
		'dbname' => null,
		'user' => null,
		'password' => null,
		'host' => null,
		'port' => null,
		'driver' => 'pdo_mysql',
	);

	function __construct($config)
	{
#		mysqli_report(MYSQLI_REPORT_ERROR);

		$this->cfg = array_merge($this->cfg, $config);
		if (preg_match('#^(.*)?:(\d+)?$#D', $this->cfg['host'], $match)) {
			$this->cfg['host'] = (empty($match[1]) ? null : $match[1]);
			$this->cfg['port'] = (empty($match[2]) ? null : $match[2]);
		}
		if (!$this->cfg['socket']) { $this->cfg['socket'] = null; }
		if (!is_int($this->cfg['flags'])) { $this->cfg['flags'] = null; }
		if (!is_array($this->cfg['options'])) { $this->cfg['options'] = array(); }

#		parent::init();
#		foreach ($this->cfg['options'] as $option => $value)
#		{
#			if (!parent::options($option, $value)) { throw new Exception($this->error, $this->errno); }
#		}
#
#		$ssl = &$this->cfg['ssl'];
#		if ($ssl['key'] || $ssl['cert'] || $ssl['ca'] || $ssl['capath'] || $ssl['cipher']) {
#			# bugs.php.net/bug.php?id=51026 & bugs.php.net/bug.php?id=37620
#			if (version_compare(phpversion(), '5.3.0', '>=') && version_compare(phpversion(), '5.3.3', '<')) {
#				throw new Exception('MySQLi SSL not available due to PHP bug 51026');
#			}
#			parent::ssl_set($ssl['key'], $ssl['cert'], $ssl['ca'], $ssl['capath'], $ssl['cipher']);
#		}

		$this->config = new \Doctrine\DBAL\Configuration();
		$this->connectionParams['dbname'] = $this->cfg['database'];
		$this->connectionParams['user'] = $this->cfg['username'];
		$this->connectionParams['password'] = $this->cfg['password'];
		$this->connectionParams['host'] = $this->cfg['host'];
		$this->connectionParams['port'] = $this->cfg['port'];

		$this->connect();
	}
	function __destruct()
	{
//		mysqli_report(MYSQLI_REPORT_OFF);
#		parent::close();
	}

	public function connect($host='127.0.0.1', $username='', $passwd='', $dbname='', $port=3306, $socket='')
	{
		$this->db = \Doctrine\DBAL\DriverManager::getConnection($this->connectionParams, $this->config);
#		if (!parent::real_connect($this->cfg['host'], $this->cfg['username'], $this->cfg['password'], null, $this->cfg['port'], $this->cfg['socket'], $this->cfg['flags']))
#		{
#			throw new Poodle_SQL_Exception($this->connect_error, $this->connect_errno, Poodle_SQL_Exception::NO_CONNECTION);
#		}
#		$v41 = version_compare($this->server_version, '4.1', '>=');
#		if (!$v41) { $this->cfg['charset'] = 'latin1'; }
#		$this->select_db();
#		$this->set_charset();
#		# dev.mysql.com/doc/refman/5.1/en/time-zone-support.html
#		parent::query('SET time_zone = \'+0:00\'');
#		parent::query('SET SESSION sql_mode = \'TRADITIONAL,ONLY_FULL_GROUP_BY,NO_AUTO_VALUE_ON_ZERO,PIPES_AS_CONCAT\'');
#		if ($this->cfg['storage_engine']) { parent::query('SET '.($v41?'storage_engine':'table_type').'='.$this->cfg['storage_engine']); }
	}

	public function ping() { if (!$this->db->isConnected()) { $this->connect(); } }

	public function real_connect($h='',$u='',$pass='', $db='', $p=3306, $s='', $f=0) { $this->connect(); }

	public function select_db($dbname='')
	{
#		if (!parent::select_db($this->cfg['database']))
#		{
#			throw new Poodle_SQL_Exception($this->error, $this->errno, Poodle_SQL_Exception::NO_DATABASE);
#		}
//		if (POODLE_SETUP) parent::query("ALTER DATABASE `{$this->cfg['database']}` CHARACTER SET {$this->cfg['charset']} COLLATE {$this->cfg['charset']}_bin");
	}
	public function dbname() { return $this->cfg['database']; }

	public function set_charset($charset='utf8')
	{
#		return (parent::set_charset($this->cfg['charset']) && parent::query("SET collation_connection = {$this->cfg['charset']}_bin"));
	}

	protected function _query($query) { return $this->real_query($query); }
	public function query($query, $unbuffered=0)
	{
		try {
	//		$query = preg_replace('#([^\s,]+)\s*=\s*ANY\s*\(\s*STRING_TO_ARRAY\s*\((.+),\s*\',\'\)\)#i', 'FIND_IN_SET($1, $2)', $query);
			if ($this->debug)
			{
				if ('S' === $query[0] && preg_match('#\s+LIMIT\s+(\d+)\s*,\s*(\d+)#i', $query))
					throw new Poodle_SQL_Exception('MySQL LIMIT syntax not allowed, use ISO syntax "LIMIT x OFFSET y"');
				if (preg_match('#`[a-z0-9_]+`#i', $query))
					throw new Poodle_SQL_Exception('MySQL backtick syntax not allowed, use the ISO syntax');
				mysqli_report(preg_match('#\s+WHERE\s+#', $query) ? MYSQLI_REPORT_ALL : MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
			}
			if ('S' === $query[0]) {
				$query = preg_replace('#\s+~\s+#', ' REGEXP ', $query); # ANSI regular expression
			}
			$result = $this->real_query($query, $unbuffered);
		} catch (mysqli_sql_exception $e) {
			if (!$this->debug || strpos($e->getMessage(), 'index used') === false) {
				throw new Poodle_SQL_Exception($e->getMessage(), $e->getCode(), $query);
			}
			if (strpos($e->getMessage(), 'index used') === false || preg_match('#\s+WHERE\s+#', $query)) {
				Poodle_Debugger::trigger(htmlspecialchars($e->getMessage()), dirname(dirname(__FILE__)));
			}
			mysqli_report(MYSQLI_REPORT_OFF);
			$result = $this->real_query($query, $unbuffered);
			mysqli_report(MYSQLI_REPORT_ERROR);
		}
		return $result;
	}
	public function real_query($query, $unbuffered=0)
	{
echo 'Query: ';
print_r($query);
echo '<br/>';
		$this->query_results = $this->db->query($query);
#		if (!parent::real_query($query)) { throw new Poodle_SQL_Exception($this->error, $this->errno, $query); }
echo 'Results: ';
print_r($this->query_results);
echo '<br/>';
		if ($this->query_results->columnCount()) {
			# SELECT, SHOW, DESCRIBE
			return $unbuffered ? $this->use_result() : $this->store_result();
		}
		# INSERT, UPDATE, DELETE
		return true;
	}
	public function store_result() { return new Poodle_Doctrine_Result($this); }
	public function use_result()   { return new Poodle_Doctrine_UseResult($this); }

	public function show_tables($prefix)
	{
		$q = 'SHOW TABLES';
		if ($prefix) $q .= " LIKE '{$prefix}%'";
		return $this->query($q);
	}

	public function quote_binary($str)     { return $this->escape_binary($str); }
	public function escape_binary($data)   { return (isset($data[0]) && is_string($data)) ? '0x'.bin2hex($data) : "''"; }
	public function escape_string($data)   { return parent::real_escape_string($data); }
	public function unescape_binary($data) { return $data; }
	public function insert_id($idfield)    { return $this->insert_id; }
	public function optimize($table)       { return $this->_query('OPTIMIZE TABLE '.$table); }

	public function begin() { return $this->_query('BEGIN'); } # START TRANSACTION

	public function search(array $fields, &$text)
	{
		static $min_word_len = 0;
		/*
		 * Short words are ignored, the default minimum length is 4 characters. You can change the min and max word length with the variables ft_min_word_len and ft_max_word_len
		 * Words called stopwords are ignored, you can specify your own stopwords, but default words include the, have, some - see default stopwords list.
		 * You can disable stopwords by setting the variable ft_stopword_file to an empty string.
		 * http://dev.mysql.com/doc/refman/5.1/en/fulltext-stopwords.html
		 */
		if (!$min_word_len)
		{
			mysqli_report(MYSQLI_REPORT_OFF);
			if ($res = parent::query('SHOW VARIABLES LIKE \'ft_min_word_len\''))
			{
				$min_word_len = $res->fetch_row();
				$min_word_len = intval($min_word_len[1]);
				$res->free();
			}
			mysqli_report(MYSQLI_REPORT_ERROR);
			$min_word_len = max($min_word_len, 3);
		}
		$text = Poodle_Unicode::as_search_txt($text);
		if (preg_match_all('#[^\s]{'.$min_word_len.',}#', $text, $match)) { $text = $match[0]; }
		return ' MATCH ('.implode(',', $fields).') AGAINST (\''.parent::escape_string(implode(' ', $text)).'\') ';
	}

	public function character_set_name() {}
	public function close() {}
	public function commit() {}
	public function get_charset() {}
	public function rollback() {}
	public function stat() {}
}

class Poodle_Doctrine_UseResult
{
	protected $query_results;
	function __construct(Poodle_SQL_Adapter_Doctrine $obj)
	{
		$this->query_results = $obj->query_results;
echo 'Use result<br/>';
	}
	static $ints = array(1=>1,2=>2,3=>3,8=>8,9=>9);
	static $floats = array(4=>4,5=>5,246=>246);
	private function type_cast($row)
	{
		static $fields;
#		if (!$fields) $fields = $this->fetch_fields();
		if (!$fields) $fields = $this->query_results->getColumnMeta();
		foreach ($fields as $field) {
#			if (isset($floats[$field->type])) { $row[$field->name] = (float)$row[$field->name]; }
#			else if (isset($ints[$field->type])) { $row[$field->name] = (int)$row[$field->name]; }
			if ($field->pdo_type == PDO::PARAM_INT) { $row[$field->name] = (int)$row[$field->name]; }
		}
		return $row;
	}
	public function fetch_array($type_cast=false)
	{
#		return $type_cast ? $this->type_cast(parent::fetch_array(MYSQLI_BOTH)) : parent::fetch_array(MYSQLI_BOTH);
echo 'Use result, fetch array<br/>';
print_r($this->query_results->fetchAll());
echo '<p>';
		return $type_cast ? $this->type_cast($this->query_results->fetchAll()) : $this->query_results->fetchAll();
	}
	public function fetch_assoc($type_cast=false)
	{
#		return $type_cast ? $this->type_cast(parent::fetch_assoc()) : parent::fetch_assoc();
echo 'Use result, fetch assoc<br/>';
print_r($this->query_results->fetchAll());
echo '<p>';
		return $type_cast ? $this->type_cast($this->query_results->fetchAll()) : $this->query_results->fetchAll();
	}
	public function fetch_row($type_cast=false)
	{
#		return $type_cast ? $this->type_cast(parent::fetch_row()) : parent::fetch_row();
echo 'Use result, fetch row<br/>';
print_r($this->query_results->fetchAll());
echo '<p>';
		return $type_cast ? $this->type_cast($this->query_results->fetchArray()) : $this->query_results->fetchArray();
	}
	public function fetch_all($resulttype=Poodle_SQL::ASSOC, $type_cast=false)
	{
//		if (!$type_cast && method_exists('MySQLi_Result', 'fetch_all')) { return parent::fetch_all($resulttype); } # MYSQLI_NUM | MYSQLI_ASSOC | MYSQLI_BOTH
echo 'Use result, fetch all<br/>';
		$rows = array();
		if ($resulttype === Poodle_SQL::BOTH) { while ($row = $this->fetch_array($type_cast)) $rows[] = $row; }
		else if ($resulttype === Poodle_SQL::NUM) { while ($row = $this->fetch_row($type_cast)) $rows[] = $row; }
		else { while ($row = $this->fetch_assoc($type_cast)) $rows[] = $row; }
print_r($rows);
echo '<p>';
		return $rows;
	}
	public function free() { $this->query_results = null; }
}

class Poodle_Doctrine_Result extends Poodle_Doctrine_UseResult implements Poodle_SQL_Interface_Result
{
	protected $i = 0;
	protected $row = null;
	function __construct(Poodle_SQL_Adapter_Doctrine $obj)
	{
		parent::__construct($obj);
echo 'Store result<br/>';
	}
#	public function data_seek($offset) { return parent::data_seek($this->i = $offset); }
	public function data_seek($offset)
	{
echo 'data seek<br/>';
	}
#	public function fetch_field_direct($offset) { return parent::fetch_field_direct($offset); }
	public function fetch_field_direct($offset)
	{
echo 'fetch field direct<br/>';
	}
#	public function field_seek($offset) { return parent::field_seek($offset); }
	public function field_seek($offset)
	{
echo 'field seek<br/>';
	}
	# ArrayAccess
	public function offsetExists($k)
	{
echo 'offset exists<br/>';
		return ($k >= 0 && $k < $this->num_rows);
	}
	public function offsetGet($k)
	{
echo 'offset get<br/>';
		return $this->row = ($this->data_seek($k) ? $this->fetch_assoc() : null);
	}
	public function offsetSet($k, $v)
	{
echo 'offset set<br/>';
		return;
       	}
	public function offsetUnset($k)
	{
echo 'offset unset<br/>';
		return;
	}
	# Countable
	public function count()
	{
echo 'count<br/>';
		return $this->num_rows;
	}
	# Iterator steps: rewind() valid() current() key() next() valid() current() key()
	public function key()
	{
echo 'key<br/>';
		return $this->i;
	}
	public function current()
	{
echo 'current<br/>';
		return $this->row;
	}
	public function next()
	{
echo 'next<br/>';
		$this->row = $this->fetch_assoc(); ++$this->i;
	}
	public function rewind()
	{
echo 'rewind<br/>';
		$this->data_seek(0);
		$this->row = $this->fetch_assoc();
	}
	public function valid()
	{
echo 'valid<br/>';
		return $this->i < $this->num_rows;
	}

	public function fetch_field()
	{
echo 'fetch field<br/>';
	}
	public function fetch_fields()
	{
echo 'fetch fields<br/>';
	}
	public function fetch_object()
	{
echo 'fetch object<br/>';
	}
	public function free()
	{
	}
}
