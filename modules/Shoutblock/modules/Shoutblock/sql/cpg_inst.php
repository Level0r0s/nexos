<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2008 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Shoutblock/modules/Shoutblock/sql/cpg_inst.php,v $
  $Revision: 1.3 $
  $Author: nanocaiordo $
  $Date: 2007/12/17 13:41:34 $
**********************************************/
if (!defined('ADMIN_MOD_INSTALL')) { exit; }

class Shoutblock {
	var $radmin;
	var $version;
	var $modname;
	var $description;
	var $author;
	var $website;
	var $dbtables;
// class constructor
	function Shoutblock() {
		$this->radmin = true;
		$this->version = '9.2';
		$this->modname = 'Shout Block';
		$this->description = 'Allow site users to shout to one another. Based on original Shoutblock by Quiecom';
		$this->author = 'CPG-Nuke Dev Team';
		$this->website = 'dragonflycms.org';
		$this->dbtables = array('shoutblock', 'shoutblock_ipblock', 'shoutblock_nameblock');
	}

// module installer
	function install() {
		global $installer;
		global $tablelist, $tables, $indexes, $records;
		foreach ($tables AS $table => $columns) {
			if (isset($tablelist[$table])) { $db->query('DROP TABLE '.$tablelist[$table]); }
			db_check::create_table($table, $columns, $indexes[$table]);
		}
		if (is_array($records) && !empty($records)) {
			foreach ($records AS $table => $content) {
				db_check::table_data($table, $content);
			}
		}
		return true;
	}

// module uninstaller
	function uninstall() {
		global $installer;
		foreach ($this->dbtables as $table) {
			$installer->add_query('DROP', $table);
		}
		$installer->add_query('DELETE', 'config_custom', "cfg_name='Shoutblock'");
		return true;
	}

// module upgrader
	function upgrade($prev_version) {
		global $tablelist, $tables, $indexes, $records;
		# add your staff here

		# do not touch belove here
		foreach ($tables AS $table => $columns) {
			db_check::table_structure($table, $columns, $indexes[$table]);
		}
		if (is_array($records) && !empty($records)) {
			foreach ($records AS $table => $content) {
				db_check::table_data($table, $content);
			}
		}
		return true;
	}
}
