<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | block-Sample.php - Example NexOS block file                       |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      |
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |
  +-------------------------------------------------------------------+
  */
/*********************************************
 *  CPG Dragonfly™ CMS
 *********************************************
	Copyright © since 2010 by CPG-Nuke Dev Team
	http://dragonflycms.org

	Dragonfly is released under the terms and conditions
	of the GNU GPL version 2 or any later version

	$Source: /cvs/html/includes/poodle/sql/manager/mysql.php,v $
	$Revision: 10.3 $
	$Author: djmaze $
	$Date: 2010/11/13 01:07:39 $
**********************************************/

class Poodle_SQL_Manager_Doctrine
{
	protected $SQL;

	function __construct($SQL) { $this->SQL = $SQL; }

	public function list_databases()
	{
		$result = $this->SQL->query('SHOW DATABASES');
		$databases = array();
		while (list($name) = $result->fetch_row()) { $databases[$name] = $name; }
		$result->free();
		return $databases;
	}

	public function list_tables($detailed=false)
	{
		$tables = array();
		if ($detailed) {
			# SELECT TABLE_NAME, TABLE_COMMENT, ENGINE FROM information_schema.TABLES WHERE TABLE_SCHEMA='poodle' AND TABLE_TYPE='BASE TABLE'
			$result = $this->SQL->query('SHOW TABLE STATUS'); // v5: WHERE Engine IS NOT NULL
			while ($row = $result->fetch_assoc()) {
				if ($row['Engine'])
				$tables[$row['Name']] = array(
					'comment' => $row['Comment'],
					'engine' => $row['Engine'],
				);
			}
		} else {
			$result = $this->SQL->query('SHOW'
				.(version_compare($this->SQL->server_info, '5.0.2', '>=') ? ' FULL' : '')
				.' TABLES');
			while ($row = $result->fetch_row()) {
				if (!isset($row[1]) || 'BASE TABLE' === $row[1]) { $tables[$row[0]] = $row[0]; }
			}
		}
		$result->free();
		return $tables;
	}

	public function list_columns($table, $uniform=true, $full=true)
	{
		$full = $full?'FULL':'';
		/*SELECT
			column_name,
			CASE WHEN 'auto_increment'=extra THEN REPLACE(data_type,'int','serial') ELSE data_type END AS type,
			character_maximum_length AS length,
			CASE WHEN collation_name LIKE '%_bin' THEN 1 ELSE 0 END AS 'binary',
			CASE WHEN is_nullable!='NO' THEN 1 ELSE 0 END AS notnull,
			column_default AS 'default',
			column_comment AS comment
		 FROM information_schema.columns WHERE table_schema='{$this->SQL->database}' AND table_name='{$table}' ORDER BY ordinal_position*/
		if ($result = $this->SQL->query("SHOW {$full} COLUMNS FROM {$table}"))
		{
			$return = array();
			while ($row = $result->fetch_assoc()) {
				$row['Type'] = preg_replace('#^([a-z\s]+)#e', 'strtoupper(\'$1\')', $row['Type']);
				$row['Type'] = str_replace(' unsigned', '', $row['Type']);
				if (strpos($row['Collation'], '_bin')) { $row['Type'] .= ' BINARY'; }
				if (false !== strpos($row['Type'], 'INT('))
				{
					$row['Type'] = preg_replace('#INT\(\d+\)#', 'INT', $row['Type']);
				}
				if ($uniform && 'auto_increment' === $row['Extra'])
				{
					$row['Type'] = (strpos($row['Type'], 'BIGINT') === false) ? 'SERIAL' : 'BIGSERIAL';
				}
				$return[$row['Field']] = array(
					'type'  => $row['Type'],
					'notnull' => $row['Null'] === 'NO',
					'default' => $row['Default'],
					'extra' => $uniform ? null : strtoupper($row['Extra']),
					'comment' => $full?$row['Comment']:null
				);
			}
			$result->free();
			return $return;
		}
		return false;
	}

	public function list_indexes($table)
	{
		$return = array();
/*		SELECT constraint_name, column_name, constraint_type
		FROM information_schema.key_column_usage
		LEFT JOIN information_schema.table_constraints USING (constraint_name, table_schema, table_name)
		WHERE table_schema='{$this->SQL->database}' AND table_name='{$table}' ORDER BY ordinal_position*/
		if ($result = $this->SQL->query('SHOW INDEX FROM '.$table)) {
			while ($row = $result->fetch_assoc()) {
				$key = $row['Key_name'];
				if ('PRIMARY' == $key) {
					$return[$key]['type'] = 'PRIMARY';
				} else if (empty($row['Non_unique'])) {
					$return[$key]['type'] = 'UNIQUE';
				} else {
					$return[$key]['type'] = ('FULLTEXT'==$row['Index_type']?'FULLTEXT':''); # BTREE or FULLTEXT
				}
				$col = $row['Column_name']/*intval($row['Seq_in_index'])-1*/;
				$return[$key]['columns'][$col] = $col.($row['Sub_part']?'('.$row['Sub_part'].')':'');
			}
			$result->free();
		}
		return $return;
	}

	public function list_foreign_keys($table)
	{
		$return = array();
		try {
/*
			if ($result = $this->SQL->query("SHOW CREATE TABLE {$table}"))
			{
				$row = $result->fetch_row();
				preg_match_all('#CONSTRAINT ([^\s]+) FOREIGN KEY \(([^\(\)]+)\) REFERENCES ([^\s]+) \(([^\(\)]+)\) ON DELETE (CASCADE|NO ACTION|RESTRICT|SET DEFAULT|SET NULL) ON UPDATE (CASCADE|NO ACTION|RESTRICT|SET DEFAULT|SET NULL)#s', str_replace('`','',$row[1]), $m, PREG_SET_ORDER);
				foreach ($m as $row) {
					$row[2] = explode(',',$row[2]);
					$row[4] = explode(',',$row[4]);
					$key = $row[1];
					$return[$key]['references'] = $row[3];
					$return[$key]['ondelete']   = $row[5];
					$return[$key]['onupdate']   = $row[6];
					foreach ($row[2] as $i => $v)
					$return[$key]['columns'][trim($v)] = trim($row[4][$i]);
				}
			}
*/
			// This is very slow
			if ($result = $this->SQL->query("SELECT constraint_name, referenced_table_name, delete_rule, update_rule, column_name, referenced_column_name
			FROM information_schema.referential_constraints
			INNER JOIN information_schema.key_column_usage USING (constraint_name, constraint_schema, referenced_table_name, table_name)
			WHERE constraint_schema='{$this->SQL->database}' AND table_name='{$table}' ORDER BY ordinal_position"))
			{
				while ($row = $result->fetch_row()) {
					$key = $row[0];
					$return[$key]['references'] = $row[1];
					$return[$key]['ondelete']   = $row[2];
					$return[$key]['onupdate']   = $row[3];
					$return[$key]['columns'][$row[4]] = $row[5];
				}
				$result->free();
			}
		} catch (Poodle_SQL_Exception $e) {}
		return $return;
	}

	public function list_triggers($table)
	{
		if ($result = $this->SQL->query("SELECT trigger_name, action_timing, event_manipulation, action_statement FROM information_schema.triggers
		WHERE event_object_schema='{$this->SQL->database}' AND event_object_table='{$table}'")) {
			$return = array();
			while ($row = $result->fetch_row()) {
				$return[$row[0]] = array(
					'name'  =>$row[0],
					'timing'=>$row[1],
					'event' =>$row[2],
					'statement'=>$row[3],
				);
			}
			$result->free();
			return $return;
		}
		return false;
	}

	public function list_views()
	{
		try {
			if ($result = $this->SQL->query("SELECT table_name, view_definition FROM information_schema.views WHERE table_schema='{$this->SQL->database}'")) {
				$return = array();
				while ($row = $result->fetch_row()) { $return[$row[0]] = $row[0]; }
				$result->free();
				return $return;
			}
		} catch (Poodle_SQL_Exception $e) {}
		return false;
	}

	public function list_functions()  { return $this->list_definition('FUNCTION'); }
	public function list_procedures() { return $this->list_definition('PROCEDURE'); }
	private function list_definition($type/*FUNCTION|PROCEDURE*/)
	{
		# SELECT routine_name FROM information_schema.routines WHERE routine_schema='{$this->SQL->database}' AND routine_type='{$type}'
		if ($result = $this->SQL->query("SHOW {$type} STATUS WHERE Db='{$this->SQL->database}'")) {
			$return = array();
			while ($row = $result->fetch_assoc()) { $return[$row['Name']] = $row['Name']; }
			$result->free();
			return $return;
		}
		return false;
	}
/*
	public function get_view($name)
	{
		if ($result = $this->SQL->query("SELECT VIEW_DEFINITION FROM information_schema.VIEWS WHERE TABLE_SCHEMA='{$this->SQL->database}' AND TABLE_NAME='{$name}'")) {
			if ($row = $result->fetch_row()) {
				return array('definition' => trim(str_replace('`','',$row[0])));
			}
		}
		return false;
	}
*/
	public function get_view     ($name) { return $this->get_definition($name, 'VIEW'); }
	public function get_function ($name) { return $this->get_definition($name, 'FUNCTION'); }
	public function get_procedure($name) { return $this->get_definition($name, 'PROCEDURE'); }
	private function get_definition($name, $type/*FUNCTION|PROCEDURE|VIEW*/)
	{
		# CREATE DEFINER=`root`@`localhost` $type `$name`(dtstart DATETIME, dtend DATETIME) RETURNS double(5,1)
		$value = false;
 		if ($result = $this->SQL->query("SHOW CREATE {$type} {$name}")) {
			if ($row = $result->fetch_assoc()) {
				$row = str_replace('`','',$row);
				# CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_*` AS select
				if (preg_match('#^CREATE[^\r\n]+?(\([^\r\n]*\)| AS )(?:\s+RETURNS\s+([^\s]+)\s+)?(.*)$#Ds', $row['Create '.ucfirst(strtolower($type))], $match)) {
					$params = array();
					if ($match[1] && preg_match_all('#[\(,]\s*(IN|OUT|INOUT)?\s*([a-zA-Z0-9_]+)\s+([a-zA-Z0-9]+)(?:\(([^\(\)]+)\))?#s', $match[1], $m, PREG_SET_ORDER)) {
						foreach ($m as $p) $params[] = array(
							'dir' =>$p[1],
							'name'=>$p[2],
							'type'=>$p[3],
							'length'=>$p[4],
						);
					}
					return array(
						'parameters' => $params,
						'returns'    => strtoupper($match[2]),
						'definition' => trim(preg_replace('#^BEGIN(.+)END$#Dsi','$1',preg_replace('#(\s|[^\s]+\.)([^\s\.]+)\s+AS\s+\\2#','$1$2',preg_replace('#\s+AS\s+[a-z_]+\(.*?\)#i', '$1', trim($match[3])))))
					);
				}
			}
			$result->free();
		}
		return $value;
	}

	public function analyze($tables)  { return $this->SQL->query('ANALYZE TABLE '.implode(', ', $tables)); }
	public function check($tables)    { return $this->SQL->query('CHECK TABLE '.implode(', ', $tables)); }
	public function optimize($tables) { return $this->SQL->query('OPTIMIZE TABLE '.implode(', ', $tables)); }
	public function repair($tables)   { return $this->SQL->query('REPAIR TABLE '.implode(', ', $tables)); }
	public function status()          { return $this->SQL->query('SHOW TABLE STATUS'); }

	public function server_status()   { return $this->SQL->u_fetch_all('SHOW STATUS', Poodle_SQL::NUM); }
	public function server_processes(){ return $this->SQL->u_fetch_all('SHOW PROCESSLIST'); }
}
