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

  $Source: /cvs/html/includes/classes/installer.php,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 01:03:15 $
**********************************************/

define('_INST_NO_DB_CLASS', 'There\'s no database class defined !');
define('_INST_ERROR_EXECUTE', '<strong>MySQL Error</strong> while executing:<br />');

class cpg_installer
{
	public $error;
	private $tblexists; # bypass
	private $duplicate; # bypass
	private $queries = array();
	private $tables  = array();

	# Constructor
	function __construct($tblexists=false, $duplicate=false)
	{
		global $db;
		if (!$db) { return null; }
		$this->tblexists = $tblexists; # bypass table exists errors
		$this->duplicate = $duplicate; # bypass duplicate errors
		$this->tables    = $db->list_tables();
	}

	public function table_exists($table)
	{
		return isset($this->tables[$table]);
	}

	public function add_query($type, $table, $values='', $rollback='')
	{
		if ('CREATE' === $type && $this->table_exists($table))
		{
			return;
		}
		global $prefix, $user_prefix;
		if (preg_match('#^(users|users_temp|users_fields)$#', $table)) $table = $user_prefix.'_'.$table;
		else $table = $prefix.'_'.$table;
		$this->queries[] = array(
			$type,
			$table,
			$values,
			$rollback
		);
	}

	# module installer
	public function install($test=false, $echo=false)
	{
		global $db, $prefix;
		/**************************************
		   Execute each query
		**************************************/
		$count = count($this->queries);
		for ($i=0; $i<$count; $i++) {
			$query = $this->queries[$i];
			switch ($query[0]) {
				case 'CREATE':
					$sql = $db->create_table("$query[1] ($query[2])") ? true : false;
					break;

				case 'REN':
					$sql = 'ALTER TABLE '.$query[1].' RENAME TO '.$prefix.'_'.$query[2];
					break;

				case 'DROP':
					$sql = $db->drop_table($query[1]) ? true : false;
					break;

				case 'DELETE':
					$sql = 'DELETE FROM '.$query[1].' WHERE '.$query[2];
					break;

				case 'INSERT':
					$sql = 'INSERT INTO '.$query[1].' VALUES ('.$query[2].')';
					break;

				case 'INSERT_MULTIPLE':
					$sql = 'INSERT INTO '.$query[1].' ('.$query[2][0].') VALUES '.$query[2][1];
					break;

				case 'UPDATE':
					$sql = 'UPDATE '.$query[1].' SET '.$query[2];
					break;

				case 'ADD':
					if (!is_array($query[2])) {
						preg_match('/([a-z0-9\_]+)[\s\'"`]+([a-z0-9\(\)]+)(.*[\s]+DEFAULT[\s]+([0-9]+|NULL|[\'"](.*)[\'"]))?/is', $query[2], $match);
						$query[2] = array(
							$match[1],
							(false !== stripos($match[2],'INT') && false !== stripos($query[2], 'UNSIGNED')) ? trim($match[2]).' UNSIGNED' : $match[2],
							false === stripos($query[2], 'NOT NULL'),
							!empty($match[3]) ? (isset($match[5]) ? $match[5] : $match[4]) : false
						);
					}
					$sql = $db->alter_field('add', $query[1], $query[2][0], $query[2][1], $query[2][2], $query[2][3]) ? true : false;
					break;

				case 'DEL':
					$sql = $db->alter_field('drop', $query[1], $query[2]) ? true : false;
					break;

				case 'CHANGE':
					if (!is_array($query[2])) {
						preg_match('/([a-z0-9\_]+)[\s\'"`]+([a-z0-9\_]+)[\s\'"`]+([a-z0-9\(\)]+)(.*[\s]+DEFAULT[\s]+([0-9]+|NULL|[\'"].*[\'"]))?/is', $query[2], $match);
						$query[2] = array(
							array($match[1], $match[2]),
							$match[3],
							false === stripos($query[2], 'NOT NULL'),
							!empty($match[4]) ? (preg_match('#[\'"]#', $match[5][0]) ? substr($match[5],1, -1) : $match[5]) : false
						);
					}
					$sql = $db->alter_field('change', $query[1], $query[2][0], $query[2][1], $query[2][2], $query[2][3]) ? true : false;
					break;

				case 'INDEX':
				case 'UNIQUE':
				case 'FULLTEXT':
					$sql = $db->alter_index(strtolower($query[0]), $query[1], $query[2], $query[3]) ? true : false;
					break;

				case 'DROP_INDEX':
					$sql = $db->alter_index('drop', $query[1], $query[2]) ? true : false;
					break;

				case 'INC_SERIAL':
					# Don't necessarily have to run the query, but don't want to kill the install.
					$sql = true;
					if (SQL_LAYER == 'postgresql') {
						list($start) = $db->sql_ufetchrow("SELECT CASE WHEN is_called THEN last_value ELSE last_value-increment_by END FROM ".$query[1]."_".$query[2]['field']."_seq");
						if ($start <= $query[2]['value']) {
							$sql = $db->increment_serial($query[2]['value'], $query[1], $query[2]['field']) ? true : false;
						}
					}
					break;

			}
			if ($test) {
				echo $sql.'<br />';
			} elseif ($sql === false || ($sql !== true && !$db->sql_query($sql, true))) {
				$this->error = $db->sql_error();
				$this->error = $sql.'<br />'.$this->error['message'];
				if (($this->duplicate && (false !== stripos($this->error, 'duplicate') || false !== strpos($this->error, 'key defined'))) ||
				    ($this->tblexists && (false !== stripos($this->error, 'already exists') || false !== strpos($this->error, 'check that column/key exists')))
				) {
					$this->error = null;
				} else {
					break;
				}
			} elseif ($echo) {
				echo $echo;
				flush();
			}
		}

		/**************************************
		   A error occured so try a rollback
		**************************************/
		if ($this->error) {
			--$i;
			for ($i;$i>=0;--$i) {
//			while($query = prev($this->queries)) {
				$query = $this->queries[$i];
				$sql = '';
				if ($query[3] != '') {
					switch($query[0]) {
						case 'CREATE':
							$sql = $db->drop_table($query[1]) ? true : false;
							break;

						case 'DROP':
							$sql = $db->create_table("$query[1] ($query[3])") ? true : false;
							break;

						case 'INSERT':
						case 'INSERT_MULTIPLE':
							$sql = 'DELETE FROM '.$query[1].' WHERE '.$query[3];
							break;

						case 'DELETE':
							$sql = 'INSERT INTO '.$query[1].' VALUES ('.$query[3].')';
							break;

						case 'UPDATE':
							$sql = 'UPDATE '.$query[1].' SET '.$query[3];
							break;

						case 'ADD':
							$sql = $db->alter_field('drop', $query[1], $query[3]) ? true : false;
							break;

						case 'DEL':
							$sql = 'ALTER TABLE '.$query[1].' ADD '.$query[3];
							break;

						case 'CHANGE':
							$sql = 'ALTER TABLE '.$query[1].' CHANGE '.$query[3];
							break;

						case 'REN':
							$sql = 'ALTER TABLE '.$prefix.'_'.$query[2].' RENAME TO '.$query[1];
							break;

						case 'FULLTEXT':
						case 'UNIQUE':
						case 'INDEX':
							$sql = $db->alter_index('drop', $query[1], $query[2]) ? true : false;
							break;
					}
					if (is_string($sql)) $db->sql_query($sql, true);
				}
			}
			$this->queries = array();
			return false;
		}
		$this->queries = array();
		return true;
	}

}
