<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 by Myndworx Asylum                          |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |  +-------------------------------------------------------------------+
  | index.php - NexOS mysqli driver file                              |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org                                  |  +-------------------------------------------------------------------+
  |Original Copyright below                                           |  +-------------------------------------------------------------------+
  | CPG Dragonfly™ CMS                                                |
  | Copyright © 2004 - 2005 by CPG-Nuke Dev Team                      |
  | http://www.dragonflycms.com                                       |
  | Dragonfly is released under the terms and conditions of the GNU   |
  | GPL version 2 or any later version                                |  +-------------------------------------------------------------------+
   Last modification notes:
    $Author$
    $Date$
    $Rev$
*/

if (!defined('CPG_NUKE')) { exit; }

class SQLCtrl extends DBCtrl {

	public static function backup($database, $tables, $filename, $structure=true, $data=true, $drop=true, $compress=true, $full=false)
	{
		if (!is_array($tables) || empty($tables)) {
			trigger_error('No tables to backup', E_USER_WARNING);
			return false;
		}
		$crlf = "\n";
		$esc = ((SQL_LAYER == 'postgresql') ? '--': '#');
		# doing some DOS-CRLF magic...
		# this looks better under WinX
		if (preg_match('#[^(]*\((.*)\)[^)]*#',$_SERVER['HTTP_USER_AGENT'],$regs)) {
			if (false !== stripos($regs[1], 'Win')) { $crlf = "\r\n"; }
		}

		if (GZIPSUPPORT) {
			while (ob_end_clean());
			header('Content-Encoding: ');
		} else {
			$compress = false;
		}
		if ($compress) {
			$filename .= '.gz';
			header("Content-Type: application/x-gzip; name=\"$filename\"");
		} else {
			header("Content-Type: text/x-delimtext; name=\"$filename\"");
		}
		header("Content-disposition: attachment; filename=$filename");

		DBCtrl::output("$esc ========================================================$crlf"
			."$esc$crlf"
			."$esc Database : $database$crlf"
			."$esc "._ON." ".formatDateTime(time(), _DATESTRING)." !$crlf"
			."$esc$crlf"
			."$esc ========================================================$crlf"
			."$crlf", $compress);
		set_time_limit(0);
		if (SQL_LAYER == 'mysql') $database = "`$database`";
		foreach ($tables AS $table) {
			if ($structure) {
				DBCtrl::output("$crlf$esc$crlf"."$esc Table structure for table '$table'$crlf"."$esc$crlf$crlf", $compress);
				DBCtrl::output(SQLCtrl::get_table_struct($database, $table, $crlf, $drop).";$crlf$crlf", $compress);
			}
			if ($data) {
				DBCtrl::output("$crlf$esc$crlf"."$esc Dumping data for table '$table'$crlf"."$esc$crlf$crlf", $compress);
				SQLCtrl::get_table_content($database, $table, $crlf, false, true, $compress);
			}
		}
		if ($compress) { DBCtrl::output('', true, true); }
		exit;
	}

	// Return $table's CREATE definition
	// Returns a string containing the CREATE statement on success
	public static function get_table_struct($database, $table, $crlf, $drop)
	{
		global $db;
		$schema_create = '';
		if ($drop) { $schema_create .= "DROP TABLE IF EXISTS $table;$crlf"; }
		$schema_create .= "CREATE TABLE $table ($crlf";

		$result = $db->list_columns("$database.$table", false);
		foreach ($result as $name => $row) {
			$schema_create .= "	{$name} {$row['Type']}";
			if (!empty($row['default']) || $row['default'] == '0')
				$schema_create .= " DEFAULT '{$row['default']}'";
			if ($row['notnull']) $schema_create .= ' NOT NULL';
			if (!empty($row['extra'])) $schema_create .= " {$row['extra']}";
			$schema_create .= ",$crlf";
		}
		$schema_create = substr($schema_create, 0, -strlen(",$crlf"));

		$result = $db->list_indexes("$database.$table");
		foreach ($result as $key => $row) {
			$schema_create .= ",$crlf\t";
			if ($row['type']) {
				$schema_create .= "{$row['type']} {$key}";
			} else {
				$schema_create .= "KEY $key";
			}
			$columns = array();
			foreach ($row['columns'] as $field) { $columns[] = $field['name']; }
			$schema_create .= ' ('.implode(', ', $columns).')';
		}

		return $schema_create."$crlf)";
	}

	// Get the content of $table as a series of INSERT statements.
	public static function get_table_content($database, $table, $crlf, $complete=false, $echo=false, $compress=false)
	{
		global $db;
		$str = $fields = '';
		$result = $db->sql_query("SELECT * FROM $database.$table");
		$fieldcount = $db->sql_numfields($result);
		if ($complete) {
			$fields = array();
			for ($j=0; $j<$fieldcount;$j++) {
				$fields[] = $db->sql_fieldname($j, $result);
			}
			$fields = '('.implode(', ', $fields).') ';
		}
		while ($row = $db->sql_fetchrow($result, SQL_NUM)) {
			$str .= "INSERT INTO $table $fields VALUES (";
			for ($j=0; $j<$fieldcount;$j++) {
				if ($j > 0) $str .= ', ';
				# Can't use addslashes() as we don't know the value of magic_quotes_sybase.
				if (!isset($row[$j])) { $str .= 'NULL'; }
				elseif ($row[$j] != '') { $str .= "'".$db->escape_string($row[$j])."'"; }
				else { $str .= "''"; }
			}
			$str .= ");$crlf";
			if ($echo) {
				DBCtrl::output($str, $compress);
				$str = '';
			}
		}
		$db->sql_freeresult($result);
		return $str;
	}
}
