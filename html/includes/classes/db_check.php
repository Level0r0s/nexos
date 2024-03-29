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
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/classes/db_check.php,v $
  $Revision: 10.1 $
  $Author: djmaze $
  $Date: 2010/11/07 14:50:57 $
**********************************************/

# The way these 4 definitions provide insertions to the database are different.
# DF_DATA_CHECK_ONLY handles SERIALs correctly across all DBs. The other
# definitions do not. Therefore, in the definition of the table data, another
# member must be defined. This new member MUST be called 'serial' and MUST
# contain the name of the SERIAL column. Check out the users and users_fields
# arrays in sql/data/core.php for examples.
define('DF_DATA_CHECK_ONLY', 0);   # table contains data do nothing
define('DF_DATA_MUST_BE_SAME', 1); # not the same then update
define('DF_DATA_EXIST_LEVEL1', 2); # only if not exist add record
define('DF_DATA_EXIST_LEVEL2', 3); # see DF_DATA_EXIST_LEVEL1
define('DF_DATA_CHECK_ONLY_MULTIPLE', 4); # see DF_DATA_CHECK_ONLY

abstract class db_check
{

	public static function table_structure(&$table, &$columns, &$indexes)
	{
		if (self::table_columns($table, $columns)) {
			self::table_indexes($table, $indexes);
		} else {
			# table doesn't exists so create it
			self::create_table($table, $columns, $indexes);
		}
	}

	# Function that compares the columns
	public static function table_columns(&$table, &$columns)
	{
		global $db, $installer, $tablelist, $optional, $table_ids;
		# check if table exists
		if (empty($tablelist[$table])) {
			return; # table doesn't exists
		}
		$querytable = $tablelist[$table];
		if ($result = $db->list_columns($querytable)) {
			# now check each existing column
			echo "<br />\n$table columns: ";
			foreach ($result as $field => $row) {
				# if column exists in dragonfly so we compare it
				if (isset($columns[$field])) {
					# Default must be checked on NULL
					$col =& $columns[$field];
					$varbinary = (false !== stripos($col['Type'], 'VARBINARY'));
					if (SQL_LAYER == 'postgresql' && $varbinary) $col['Type'] = 'VARBINARY';
					if ($row['type'] != $col['type'] ||
						$row['notnull'] == $col['Null'] ||
						(isset($row['default']) != isset($col['Default']) ||
						(isset($row['default']) && isset($col['Default']) && ($row['default'] != $col['Default']))))
					{
						# not the same so modify
						if ($varbinary && version_compare($version, '9.2', '<')) {
							# from any field type to binary including varbinary fields locked to 9.2
							self::iptobin($querytable, $table, $table_ids[$table], $field, $col, $row['type']);
						} else if (preg_match('#(DATETIME|TIMESTAMP)#i', $row['type'])) {
							self::dttotime($querytable, $table, $table_ids[$table], $field, array($field, $col['Type'], $col['Null'], $col['Default']));
						} else if (false === stripos($row['type'], 'INT')) {
							if (($table == 'users' || $table == 'users_temp') && $field == 'user_regdate') {
								self::rdtotime($querytable, $table, 'user_id', $field);
								$installer->add_query('CHANGE', $table, array($field, $col['Type'], $col['Null'], $col['Default']));
							} else if (false !== stripos($row['type'], 'ENUM') && false !== stripos($col['Type'], 'INT')) {
								$installer->add_query('CHANGE', $table, array($field, $col['Type'], $col['Null'], $col['Default']));
								self::enumtoint($querytable, $table, $table_ids[$table], $field);
							} else {
								// targeted conversions finished
								// row type _not_ int but different, then change it
								$installer->add_query('CHANGE', $table, array($field, $col['Type'], $col['Null'], $col['Default']));
							}
						} else {
							// row type int but different, then change it
							$installer->add_query('CHANGE', $table, array($field, $col['Type'], $col['Null'], $col['Default']));
						}
					}
					unset($columns[$field]); # free some memory since we don't need it anymore
				} else {
					# column not used in dragonfly so we delete it
					$optional[] = "ALTER TABLE $querytable DROP $field";
				}
				echo '. ';
				flush();
			}
			# add the not existing columns
			foreach ($columns as $field => $col) {
				$installer->add_query('ADD', $table, array($field, $col['Type'], $col['Null'], isset($col['Default'])?$col['Default']:null));
			}
			return true;
		}
		return false;
	}

	# Function that compares the indexes
	public static function table_indexes(&$table, &$indexes)
	{
		global $db, $installer, $tablelist, $optional;
		$querytable = $tablelist[$table];
		# check each index
		if ($result = $db->list_indexes($querytable)) {
			echo "<br />\n$table indexes: ";
			$drop = array();
			foreach ($result as $key => $row) {
				if (isset($indexes[$key])) {
					if (!isset($drop[$key])) $drop[$key] = false;
					if ($row['unique'] != $indexes[$key]['unique'] || $row['type'] != $indexes[$key]['type']) {
						$drop[$key] = true;
					}

					foreach ($row['columns'] as $colindex => $data) {
						if ($data['name'] != $indexes[$key][$colindex]['name']) {
//							|| $data['Sub_part'] != $indexes[$key][$colindex]['Sub_part']
							$drop[$key] = true; break;
						}
					}
				} else {
					# index not used in Dragonfly so we delete it
					$optional[] = "ALTER TABLE $querytable DROP ".(($key == 'PRIMARY') ? "$key KEY" : "$key");
					$drop[$key] = true;
				}
				echo '. ';
				flush();
			}
			if (empty($indexes)) { return true; }
			# add or modify the indexes
			foreach ($indexes as $key => $idata) {
				if (isset($drop[$key]) && $drop[$key]) {
					$installer->add_query('DROP_INDEX', $table, $key);
				}
				if (!isset($drop[$key]) || $drop[$key]) {
					$type = 'INDEX';
					if ($idata['unique']) $type = 'UNIQUE';
					if ($idata['type'] == 'FULLTEXT') $type = 'FULLTEXT';
					$columns = array();
					$i = 0;
					while (isset($idata[$i])) {
						$field = $idata[$i]['name'];
						if (!empty($idata[$i]['Sub_part'])) $field .= '('.$idata[$i]['Sub_part'].')';
						$columns[] = $field;
						++$i;
					}
					$installer->add_query($type, $table, $key, implode(', ', $columns));
				}
			}
			return true;
		}
		return false;
	}

	# Function that checks the data of a table
	public static function table_data(&$table, &$content)
	{
		global $db, $installer, $prefix, $user_prefix, $tablelist;
		if (isset($tablelist[$table])) {
			$querytable = $tablelist[$table];
			if ($content['compare'] == DF_DATA_CHECK_ONLY || $content['compare'] == DF_DATA_CHECK_ONLY_MULTIPLE) {
				if ($db->count($table) > 0) return;
			} else {
				echo "<br />\n$table content: ";
				$result = $db->sql_query("SELECT ".$content['query']." FROM $querytable", true);
				# table exists now check each existing record
				while ($row = $db->sql_fetchrow($result, SQL_NUM)) {
					switch ($content['compare']) {

						case DF_DATA_MUST_BE_SAME:
							if (isset($content['content'][$row[0]])) {
								if ($row[1] == $content['content'][$row[0]][0]) {
									unset($content['content'][$row[0]]);
								} else if (isset($content['del'])) {
									$installer->add_query('DELETE', $table, $content['del']."='$row[0]'");
								}
							}
							break;

						case DF_DATA_EXIST_LEVEL1:
							if (isset($content['content'][$row[0]])) {
								unset($content['content'][$row[0]]);
							}
							break;

						case DF_DATA_EXIST_LEVEL2:
							if (isset($content['content'][$row[0]][$row[1]])) {
								unset($content['content'][$row[0]][$row[1]]);
							}
							break;

					}
					echo '. ';
					flush();
				}
			}
			$db->sql_freeresult($result);
		}
		self::insert_data($table, $content);
	}


	# Function to convert ips to binary and add right padding to existing binary ips
	public static function iptobin($querytable, $table, $table_id, $field, $col, $type) {
		global $db, $installer;
		if ($table == 'session') {
			$db->sql_query('DELETE FROM '.$querytable);
		} else if ($table == 'bbprivmsgs') {
			$installer->add_query('UPDATE', $table, "$field=''");
		}
		if (false === stripos($type, 'VARBINARY') && false === stripos($type, 'BYTEA')) {
			if (!isset($col['Default'])) {
				$installer->add_query('CHANGE', $table, array($field, $col['Type'], $col['Null']));
				return;
			}
			$installer->add_query('CHANGE', $table, array($field, $col['Type'], $col['Null'], $col['Default']));
		}
	}

	# Function to convert DATETIME & TIMESTAMP fields in records to INT
	public static function dttotime($querytable, $table, $id, $field, $column)
	{
		global $db, $installer;
		$result = $db->sql_query("SELECT $id, UNIX_TIMESTAMP($field) FROM $querytable");
		$installer->add_query('DEL', $table, $field);
		$installer->add_query('ADD', $table, $column);
		while ($row = $db->fetch_array($result, SQL_NUM)) {
			$installer->add_query('UPDATE', $table, "$field='".$db->escape_string($row[1])."' WHERE $id='$row[0]'");
		}
		$db->free_result($result);
	}

	# Function to convert regdate (string) field in records to INT
	public static function rdtotime($querytable, $table, $id, $field)
	{
		global $db, $installer;
		$result = $db->sql_query("SELECT $field FROM $querytable GROUP BY $field ORDER BY $id");
		while ($row = $db->fetch_array($result, SQL_NUM)) {
			# strtotime on failure returns: php<5.1.0  -1, php>5.1.0 false
			$time = strtotime($row[0]);
			# isset($failover)?: protects from 1st user_id regdate screwed
			$time = ($time>0) ? $time : (isset($failover) ? $failover : 0);
			$installer->add_query('UPDATE', $table, "$field='$time' WHERE $field='$row[0]'");
			$failover = $time;
		}
		$db->free_result($result);
	}

	# Function to convert ENUM field in records to INT
	public static function enumtoint($querytable, $table, $id, $field)
	{
		global $db, $installer;
		$no = array();
		$result = $db->sql_query("SELECT $id FROM $querytable WHERE $field='NO'");
		while ($tid = $db->fetch_array($result, SQL_NUM)) { $no[] = $tid[0]; }
		$db->free_result($result);
		if (count($no) > 0) {
			$no = implode(',', $no);
			$installer->add_query('UPDATE', $table, "$field=0 WHERE $id IN ($no)");
			$installer->add_query('UPDATE', $table, "$field=1 WHERE $id NOT IN ($no)");
		} else {
			$installer->add_query('UPDATE', $table, "$field=1");
		}
	}

	public static function create_table(&$table, &$columns, &$indexes)
	{
		global $installer;
		$struct = array();
		# process the fields
		foreach ($columns as $field => $col) {
			$add = "  $field $col[Type]";
			if (strpos($col['Type'], 'SERIAL') === FALSE) {
				if (SQL_LAYER != 'postgresql' && ($col['Type'] == 'TEXT' || $col['Type'] == 'BLOB')) {
					$add .= ($col['Null']) ? ' NULL' : ' NOT NULL';
				} else {
					if (!$col['Null']) $add .= ' NOT';
					$add .= ' NULL DEFAULT '.(isset($col['Default']) ? "'$col[Default]'" : 'NULL');
				}
			}
			$struct[] = $add;
		}
		# process the indexes
		if (!empty($indexes)) {
			foreach ($indexes as $index => $idata) {
				$type = '';
				if ($index == 'PRIMARY') {
					$type = ' PRIMARY';
					$index = '';
				}
				else if ($idata['unique']) $type = ' UNIQUE';
				else if ($idata['type'] == 'FULLTEXT') $type = ' FULLTEXT';
				$columns = array();
				$i = 0;
				while (isset($idata[$i])) {
					$field = $idata[$i]['name'];
					if (!empty($idata[$i]['Sub_part'])) $field .= '('.$idata[$i]['Sub_part'].')';
					$columns[] = $field;
					++$i;
				}
				$struct[] = " $type KEY $index (".implode(', ', $columns).')';
			}
		}
		$installer->add_query('CREATE', $table, "\n".implode(",\n", $struct)."\n", $table);
	}

	public static function insert_data(&$table, &$content)
	{
		global $installer;
		$multiple = array();
		foreach ($content['content'] as $main => $data) {
			switch ($content['compare']) {

				case DF_DATA_CHECK_ONLY:
					$tmp = array();
					foreach ($data as $val) { $tmp[] = ($val === NULL) ? 'DEFAULT' : "'$val'"; }
					$installer->add_query('INSERT', $table, 'DEFAULT, '.implode(', ', $tmp));
					break;

				case DF_DATA_CHECK_ONLY_MULTIPLE:
					$tmp = array();
					foreach ($data as $val) {
						$tmp[] = ($val === NULL) ? "DEFAULT" : "'$val'";
					}
					$multiple[] = '('.implode(', ', $tmp).')';
					break;

				case DF_DATA_MUST_BE_SAME:
					$tmp = array();
					foreach ($data as $val) { $tmp[] = ($val === NULL) ? 'DEFAULT' : "'$val'"; }
					$installer->add_query('INSERT', $table, "'$main', ".implode(', ', $tmp));
					break;

				case DF_DATA_EXIST_LEVEL1:
					if (is_array($data)) {
						$tmp = array();
						foreach ($data as $val) { $tmp[] = ($val === NULL) ? 'DEFAULT' : "'$val'"; }
						$installer->add_query('INSERT_MULTIPLE', $table, array($content['fields'], '('.implode(',', $tmp).')'));
					} else {
						$installer->add_query('INSERT', $table, "'$main', $data");
					}
					break;

				case DF_DATA_EXIST_LEVEL2:
					foreach ($data as $sub => $value) {
						$installer->add_query('INSERT', $table, "'$main', '$sub', '$value'");
					}
					break;

			}
		}
		if ($content['compare'] == DF_DATA_CHECK_ONLY_MULTIPLE && !empty($content['content'])) {
			$installer->add_query('INSERT_MULTIPLE', $table, array($content['fields'], implode(', ', $multiple)));
			#$installer->add_query('INSERT_VALUES', $table, array($content['fields'], implode(', ', $multiple)), $content['rollback']);
		}
		if (isset($content['serial'])) {
			$increment['field'] = $content['serial'];
			$increment['value'] = count($content['content']);
			$installer->add_query('INC_SERIAL', $table, $increment);
		}
	}
}
