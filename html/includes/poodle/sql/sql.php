<?php
/*********************************************
 *  CPG Dragonfly™ CMS
 *********************************************
	Copyright © since 2010 by CPG-Nuke Dev Team
	http://dragonflycms.org

	Dragonfly is released under the terms and conditions
	of the GNU GPL version 2 or any later version

	$Source: /cvs/html/includes/poodle/sql/sql.php,v $
	$Revision: 10.3 $
	$Author: djmaze $
	$Date: 2010/11/11 23:49:06 $
**********************************************/
# (binary) casting and b prefix forward support was added in PHP 5.2.1

class Poodle_SQL
{
	const STORE_RESULT = 0;
	const UNBUFFERED   = 1;
	const ADD_PREFIX   = 2;

	const ASSOC = 1;
	const NUM   = 2;
	const BOTH  = 3;

	public $total_queries = 0;
	public $total_time = 0;
	public $querylist = array();
	public $mngr;

	protected $transaction = false;
	protected $tbl_pattern = null;
	protected $tbl_replace = null;

	protected $TBL; # database tables
	protected $DBM = null; # master database
	protected $DBS = null; # slave database (optional)
	protected $XML;

	private static $path;

	function __construct($adapter, $master_config, $prefix, $slave_config=null)
	{
		if (!self::$path) { self::$path = realpath(dirname(__FILE__)).'/'; }
		if (!$adapter) { throw new Exception('Poodle SQL adapter not configured'); }
		$adapter_file = self::$path.'adapter/'.strtolower($adapter).'.php';
		if (!is_readable($adapter_file)) { throw new Exception('Poodle SQL adapter not found'); }
		include_once($adapter_file);
		$adapter = 'Poodle_SQL_Adapter_'.ucfirst($adapter);
		$this->DBM = new $adapter($master_config);
		if ($slave_config) { $this->DBS = new $adapter($slave_config); }
		$this->TBL = new Poodle_SQL_Tables($this, $prefix, constant(get_class($this->DBM).'::TBL_QUOTE'));
		$this->debug = Poodle::$DEBUG;
	}

	public function close() { return $this->DBM->close() && ($this->DBS ? $this->DBS->close() : true); }

	public function query($query, $options=0)
	{
		$qtime = microtime(true);
		$query = trim($query);
		$query[0] = strtoupper($query[0]);
		if ($this->DBS && strspn($query, 'SE', 0, 1)) {
			$result = $this->DBS->query($query, $options & self::UNBUFFERED);
		} else
		try {
			if ($options & self::ADD_PREFIX)
			{
				if (strspn($query, 'CA', 0, 1))
				{
					if (!$this->tbl_pattern) { require(self::$path.'convert/'.strtolower($this->engine).'.php'); }
					$query = preg_replace($this->tbl_pattern, $this->tbl_replace, $query);
					if (!$query) { return true; }
				}
				if ('I' === $query[0])
				{
					$query = preg_replace('#([\(,]\s*)0x(([0-9a-f]{2}?)+)(\s*)#e', '\'$1\'.$this->DBM->quote_binary(pack(\'H*\', \'$2\')).\'$4\'', $query);
				}
				$query = preg_replace('#{([a-z0-9_]+)}#', "{$this->TBL->prefix}\$1", $query);
/*
				$query = preg_replace(
					'#^(INSERT INTO|(?:CREATE|ALTER)[\w\s]+|DROP TABLE|UPDATE|COMMENT ON (?:COLUMN|TABLE)|\) REFERENCES|FROM|JOIN)\s+{([a-z0-9_]+)}#',
					"\$1 {$this->TBL->prefix}\$2", $query);
*/
			}
			$result = $this->DBM->query($query, $options & self::UNBUFFERED);
		} catch (Poodle_SQL_Exception $e) {
			$this->rollback();
			throw $e;
		}
		$this->log($query, microtime(true)-$qtime);
		return $result;
	}

	public function exec($query, $add_prefix=false)
	{
		$this->query($query, self::UNBUFFERED | ($add_prefix ? self::ADD_PREFIX : 0));
		return $this->DBM->affected_rows;
	}

	protected function log(&$query, $qtime)
	{
		++$this->total_queries;
		$this->total_time += $qtime;
		if ($this->DBM->debug || $qtime > 1)
		{
			$tmp = debug_backtrace();
			$file = ''; $line = 0;
			for ($i=0; $i<count($tmp); ++$i) {
				if (isset($tmp[$i]['file'], $tmp[$i]['line'])) {
					$file = $tmp[$i]['file'];
					$line = $tmp[$i]['line'];
					if (!strpos($file, '\\sql\\') && !strpos($file, '/sql/')) { break; }
				}
			}
			$file = Poodle::shorten_file_path($file);
			if ($qtime > 1) { Poodle_LOG::notice('Slow SQL', "Slow Query {$qtime} in {$file}#{$line}:\n\n".$query); }
			if ($this->DBM->debug & Poodle::DBG_SQL_QUERIES) { $this->querylist[$file][] = array('line'=>$line, 'query'=>$query, 'time'=>$qtime); }
		}
	}

	/***********************************
	 *     Special added functions
	 ***********************************/

	public function quote($str) { return '\''.$this->DBM->escape_string($str).'\''; }
	public function count($table, $where='')
	{
		if ($where) $where = ' WHERE '.$where;
		$result = $this->query('SELECT COUNT(*) FROM '.$this->TBL->$table.$where, self::UNBUFFERED);
		if (!$result) { return 0; }
		list($count) = $result->fetch_row();
		$result->free();
		return $count;
	}
	public function u_query($query) { return $this->query($query, self::UNBUFFERED); }
	public function u_fetch_array($query, $type_cast=false)
	{
		$result = $this->query($query.' LIMIT 1', self::UNBUFFERED);
		if (is_bool($result)) { return $result; }
		$row = $result->fetch_array($type_cast);
		$result->free();
		return $row;
	}
	public function u_fetch_assoc($query, $type_cast=false)
	{
		$result = $this->query($query.' LIMIT 1', self::UNBUFFERED);
		if (is_bool($result)) { return $result; }
		$row = $result->fetch_assoc($type_cast);
		$result->free();
		return $row;
	}
	public function u_fetch_row($query, $type_cast=false)
	{
		$result = $this->query($query.' LIMIT 1', self::UNBUFFERED);
		if (is_bool($result)) { return $result; }
		$row = $result->fetch_row($type_cast);
		$result->free();
		return $row;
	}
	public function u_fetch_all($query, $type=self::ASSOC)
	{
		$result = $this->query($query, self::UNBUFFERED);
		if (is_bool($result)) { return $result; }
		$rows = $result->fetch_all($type);
		$result->free();
		return $rows;
	}

	public function fetch_field_names($result)
	{
		$prefixes = func_get_args();
		array_shift($prefixes);
		$prefixes = '#^('.implode('|',$prefixes).')_#';
		$fields = array();
		$result->field_seek(0);
		$i = $result->field_count;
		while ($i>0 && $field = $result->fetch_field()) { $fields[preg_replace($prefixes, '', $field->name)] = $field->name; --$i; }
		return $fields;
	}

	public function insert($table, $array, $id='')
	{
		$this->escape_values($array);
		return $this->insert_prepared($table, $array, $id);
	}
	public function insert_prepared($table, &$array, $id='')
	{
		if (!is_array($array) || !$array) { return false; }
		$this->query('INSERT INTO '.$this->TBL->$table.' ('.implode(', ', array_keys($array)).') VALUES ('.implode(', ', $array).')');
		return ($id ? $this->insert_id($id) : true);
	}
	public function update($table, $array, $where)
	{
		if (!is_array($array) || !$array || !$where) { return false; }
		foreach ($array as $field => &$value) { $value = $field.'='.$this->fix_value($value); }
		return $this->query('UPDATE '.$this->TBL->$table.' SET '.implode(', ', $array).' WHERE '.$where);
	}
	public function update_prepared($table, $array, $where)
	{
		if (!is_array($array) || !$array || !$where) { return false; }
		foreach ($array as $field => &$value) { $value = $field.'='.$value; }
		return $this->query('UPDATE '.$this->TBL->$table.' SET '.implode(', ', $array).' WHERE '.$where);
	}
	public function escape_values(&$array)
	{
		if (!is_array($array) || !$array) { return false; }
		foreach ($array as $field => &$value) { $value = $this->fix_value($value); }
		return $array;
	}
	protected function fix_value(&$value)
	{
//		if (SQLDEFAULT===$value) { return 'DEFAULT'; }
		if (is_null($value))   { return 'NULL'; }
		if (is_bool($value))   { return ($value?1:0); }
		if (is_int($value))    { return $value; }
		if (is_binary($value)) { return $this->DBM->quote_binary($value); }
		if (is_float($value))  { return number_format($value, 14, '.', ''); }
		return $this->quote($value);
	}

	public function begin()
	{
		if ($this->transaction) { throw new Exception('SQL Transaction already started.'); }
		return $this->transaction = $this->DBM->begin();
	}
	public function commit()
	{
		if (!$this->transaction) { return true; }
		$this->transaction = false;
		return $this->DBM->commit();
	}
	public function rollback()
	{
		if (!$this->transaction) { return false; }
		$this->transaction = false;
		return $this->DBM->rollback();
	}

	public static function remove_prefix(&$array)
	{
		$newarray = array();
		$prefixes = func_get_args();
		array_shift($prefixes);
		$prefixes = '#^('.implode('|',$prefixes).')_#';
		foreach ($array as $key => $value) {
			$newarray[preg_replace($prefixes, '', $key)] = $value;
		}
		$array = $newarray;
	}

	public function search(array $fields, &$text) { return ($this->DBS ? $this->DBS->search($fields, $text) : $this->DBM->search($fields, $text)); }

	function __get($key)
	{
		switch ($key)
		{
		case 'database': return $this->DBM->dbname();
		case 'TBL':      return $this->TBL;
		case 'XML':
			if (!$this->XML) {
				include_once(self::$path.'xml.php');
				include_once(self::$path.'xml/'.strtolower($this->engine).'.php');
				$class = 'Poodle_SQL_XML_'.$this->engine;
				$this->XML = new $class($this);
			}
			return $this->XML;
		case 'engine':   return constant(get_class($this->DBM).'::ENGINE');
		case 'tbl_quote':return constant(get_class($this->DBM).'::TBL_QUOTE');
		case 'debug':
		case 'affected_rows':
		case 'client_info':
		case 'client_version':
//		case 'connect_errno';
//		case 'connect_error';
		case 'errno':
		case 'error':
//		case 'field_count':
		case 'host_info':
//		case 'protocol_version':
		case 'server_info':
		case 'server_version':
//		case 'info':
		case 'insert_id':
//		case 'sqlstate':
//		case 'thread_id':
//		case 'warning_count':
			return $this->DBM->$key;
		}
		return null;
	}
	function __set($key, $value)
	{
		if ('debug' === $key)
		{
			$this->DBM->debug = $value;
			if ($this->DBS) { $this->DBS->debug = $value; }
		} else {
			trigger_error("Undefined property '$key' set");
			$this->$key = $value;
		}
	}

	function __call($method, $args)
	{
		switch ($method)
		{
		# bugs.php.net/bug.php?id=49535
//		case 'get_client_info':
//		case 'get_client_version':
//			return $this->DBM->substr($method,4);

		case 'character_set_name':
		case 'dbname':
		case 'get_charset':
		case 'ping':
		case 'stat':
			return $this->DBM->$method();

		case 'autocommit':
		case 'change_user':
		case 'debug':
		case 'dump_debug_info':
		case 'get_cache_stats':      # 5.3.0 mysqlnd
		case 'get_client_stats':     # 5.3.0 mysqlnd
		case 'get_connection_stats': # 5.3.0 mysqlnd
		case 'get_warnings':
		case 'kill':
		case 'more_results':
		case 'multi_query':
		case 'next_result':
		case 'options':
		case 'poll':
		case 'prepare':
		case 'reap_async_query':
		# internal
		case 'init':
		case 'ssl_set':
		case 'store_result':
		case 'use_result':
			trigger_error('Call to unsupported method Poodle_SQL::'.$method.'()', E_USER_ERROR);

		case 'quote_binary':
		case 'escape_binary':
		case 'unescape_binary':
		case 'escape_string':
		case 'insert_id':
			return $this->DBM->$method($args[0]);
		case 'show_tables':
			return ($this->DBS ? $this->DBS->$method($args[0]) : $this->DBM->$method($args[0]));
		case 'optimize':
			return $this->DBM->optimize($this->TBL->$args[0]);
		}
		if (empty($this->mngr)) {
			include_once(self::$path.'manager/'.strtolower($this->engine).'.php');
			$mngr = 'Poodle_SQL_Manager_'.$this->engine;
			$this->mngr = new $mngr($this);
		}
		if ('load_manager' === $method) { return; }
		return call_user_func_array(array($this->mngr, $method), $args); # this is slow
	}

}

class Poodle_SQL_Tables implements ArrayAccess, Countable
{
	protected $prefix;
	protected $tables = array();
	function __construct($sql, $prefix, $tbl_quote)
	{
		$this->prefix = $prefix;
		try {
			if (class_exists('Poodle_CACHE')) { $this->tables = Poodle_CACHE::fetch($sql->database.'_tables'); }
		} catch (Exception $e) {}
		if (!$this->tables || POODLE_SETUP)
		{
			$result = $sql->show_tables($prefix);
			$pl = strlen($this->prefix);
			$this->tables = array();
			while ($name = $result->fetch_row())
			{
				if (substr($name[0],0,$pl) === $prefix)
				{
					$k = substr($name[0],$pl);
					if (!preg_match('#^[a-zA-Z0-9_]+$#D', $name[0])) { $name[0] = $tbl_quote.$name[0].$tbl_quote; }
					$this->tables[$k] = $name[0];
				}
			}
			$result->free();
			try { if (class_exists('Poodle_CACHE')) { Poodle_CACHE::store($sql->database.'_tables', $this->tables); } } catch (Exception $e) {}
		}
	}
	function __get($key)
	{
		if ('prefix' === $key) { return $this->prefix; }
		if (isset($this->tables[$key])) { return $this->tables[$key]; }
		if (class_exists('Poodle_Debugger', false)) {
			Poodle_Debugger::trigger('Unknown database table: '.$key, dirname(__FILE__));
		} else {
			trigger_error('Unknown database table: '.$key);
		}
		return $this->prefix.$key;
	}
	function __set($key, $v) { throw new Exception('Disallowed to set property: '.$key); }
	function __isset($key)   { return isset($this->tables[$key]); }
	public function prefix() { return $this->prefix; }
	# ArrayAccess
	public function offsetExists($k)  { return isset($this->tables[$k]); }
	public function offsetGet($k)     { return isset($this->tables[$k]) ? $this->tables[$k] : null; }
	public function offsetSet($k, $v) { return; }
	public function offsetUnset($k)   { return; }
	# Countable
	public function count() { return count($this->tables); }
}
