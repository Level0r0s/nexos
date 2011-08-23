<?php
/*********************************************
 *  CPG Dragonfly™ CMS
 *********************************************
	Copyright © since 2010 by CPG-Nuke Dev Team
	http://dragonflycms.org

	Dragonfly is released under the terms and conditions
	of the GNU GPL version 2 or any later version

	$Source: /cvs/html/includes/poodle/sql/dragonfly.php,v $
	$Revision: 10.4 $
	$Author: djmaze $
	$Date: 2010/11/12 00:12:06 $
**********************************************/

if (!defined('SQL_ASSOC')) {
	define('SQL_ASSOC', Poodle_SQL::ASSOC);
	define('SQL_NUM',   Poodle_SQL::NUM);
	define('SQL_BOTH',  Poodle_SQL::BOTH);
}

class Poodle_SQL_Dragonfly extends Poodle_SQL
{
	function __construct($server, $user, $password, $database, $persistent=false)
	{
		global $prefix;
		parent::__construct(
			('mysql'==DB_TYPE?'mysqli':DB_TYPE),
			array(
				'host'     => $server,
				'username' => $user,
				'password' => $password,
				'database' => $database,
				'charset'  => DB_CHARSET
			),
			$prefix.'_'
		);
		if (!defined('SQL_LAYER')) { define('SQL_LAYER',strtolower($this->engine)); }
	}

	/**
	 * Old methods
	 */

	function __get($k)
	{
		switch ($k)
		{
		case 'num_queries': return $this->total_queries;
		case 'time': return $this->total_time;
		}
		return parent::__get($k);
	}

	public function sql_close() { $this->close(); }
	public function sql_uquery($query, $bypass_error=FALSE)
	{
		return $this->u_query($query);
	}
	public function sql_query($query, $bypass_error=FALSE, $unbufferd=FALSE, $allow_union=FALSE)
	{
		return $this->query($query);
	}
	public function sql_numrows($result) { return $result->num_rows; }
	public function sql_affectedrows($qresult=0) { return $this->DBM->affected_rows; }
	public function sql_numfields($result) { return $result->field_count; }
	public function sql_fieldname($offset, $result) { return $result->fetch_field_direct($offset)->name; }
	public function sql_fieldtype($offset, $result) { return $result->fetch_field_direct($offset)->type; }
	public function sql_fetchrow($qresult, $result_type=SQL_BOTH)
	{
		$stime = microtime(true);
		$row = ($qresult ? $qresult->fetch_array($result_type) : NULL);
		$this->total_time += (microtime(true)-$stime);
		return $row;
	}
	public function sql_ufetchrow($query, $result_type=SQL_BOTH) {
		switch ($result_type)
		{
		case SQL_ASSOC:return $this->u_fetch_assoc($query);
		case SQL_NUM:  return $this->u_fetch_row($query);
		}
		return $this->u_fetch_array($query);
	}
	public function sql_fetchrowset($qresult, $result_type=SQL_BOTH)
	{
		$stime = microtime(true);
		$result = $qresult->fetch_all($result_type);
		$this->total_time += (microtime(true)-$stime);
		return isset($result) ? $result : NULL;
	}
	public function sql_ufetchrowset($query, $result_type=SQL_BOTH) { return $this->u_fetch_all($query, $result_type); }
	public function sql_fetchfield() { return false; }
	public function sql_rowseek($rownum, $result) { return $result->data_seek($rownum); }
	public function sql_freeresult($qresult) { $qresult->free(); }
	public function sql_nextid($idfield) { return $this->DBM->insert_id($idfield); }
	public function sql_error($qresult) { return $this->error($qresult); }
	public function sql_escape_string($string) { return $this->DBM->escape_string($string); }
	public function sql_insert($table, $fields,         $bypass_error=false) { return $this->insert(substr($table,strlen($this->TBL->prefix)), $fields); }
	public function sql_update($table, $fields, $where, $bypass_error=false) { return $this->update(substr($table,strlen($this->TBL->prefix)), $fields, $where); }
	public function sql_count($table, $where='') {
		if ($where != '') $where = "WHERE $where";
		list($count) = $this->u_fetch_row("SELECT COUNT(*) FROM $table $where");
		return $count;
	}

//	public function select_db($db) { return mysql_select_db($db, $this->connect_id); } // USE $db
	public function affected_rows()              { return $this->DBM->affected_rows; }
	public function data_seek($result, $rownum)  { return $result->data_seek($rownum); }
	public function fetch_array($result, $type)  { return $result->fetch_array($type); }
	public function field_name($result, $offset) { return $result->field_name($offset); }
	public function field_type($result, $offset) { return $result->field_type($offset); }
	public function free_result($result)         { return $result->free(); }
	public function num_fields($result)          { return $result->field_count; }
	public function num_rows($result)            { return $result->num_rows; }
	public function error()                      { return array('message' => $this->DBM->error, 'code' => $this->DBM->errno); }

	public function binary_safe($str)      { return $this->DBM->escape_binary($str); }


	protected $dfmngr;
	function __call($method, $args)
	{
		switch ($method)
		{
		case 'list_tables':
			global $prefix, $user_prefix;
			$result = parent::__call($method, $args);
			$tables = array();
			foreach ($result as $name) {
				$tables[preg_replace("#^($prefix|$user_prefix)_#",'',$name)] = $name;
			}
			return $tables;

		case 'list_columns':
			$return = parent::__call($method, $args);
			foreach ($return as $field => $row) {
				$row['Type'] = strtoupper($row['type']);
				if (!empty($args[1])) {
					$row['Type'] = str_replace('SERIAL','SERIAL4',str_replace('BIGSERIAL','SERIAL8',$row['Type']));
				}
				$return[$field]['Field'] = $field;
				$return[$field]['Type'] = $row['Type'];
				$return[$field]['Null'] = intval(!$row['notnull']);
				$return[$field]['Default'] = $row['default'];
				$return[$field]['Extra'] = $row['extra'];
				$return[$field]['Comment'] = $row['comment'];
			}
			return $return;

		case 'list_indexes':
			$return = parent::__call($method, $args);
			foreach ($return as $key => $row) {
				$return[$key]['name'] = $key;
				$return[$key]['unique'] = ('UNIQUE'==$row['type']);
			}
			return $return;

		case 'get_versions':
		case 'get_details':
		case 'create_table':
		case 'alter_table':
		case 'drop_table':
		case 'alter_field':
		case 'alter_index':
		case 'increment_serial':
		case 'optimize_table':
			if (empty($this->dfmngr)) {
				$class = 'Poodle_SQL_DfMngr_'.$this->engine;
				$this->dfmngr = new $class($this);
			}
			return call_user_func_array(array($this->dfmngr, $method), $args); # this is slow
		}

		return parent::__call($method, $args);
	}
}
