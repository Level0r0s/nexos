<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Blogs/modules/Blogs/sql/cpg_inst.php,v $
  $Revision: 1.2 $
  $Author: nanocaiordo $
  $Date: 2007/09/13 15:54:31 $
**********************************************/
if (!defined('ADMIN_MOD_INSTALL')) { exit; }

class Blogs {
	var $radmin;
	var $modname;
	var $version;
	var $author;
	var $website;
	var $description;
	var $dbtables;
# class constructor
	function Blogs() {
		$this->radmin = false;
		$this->modname = 'CPG-Blogs';
		$this->version = '2.0.2.1';
		$this->author = 'Trevor Eckart';
		$this->website = 'dragonflycms.org';
		$this->description = 'Allow your users to create their own blogs (online journals)';
		$this->dbtables = array('blogs', 'blogs_comments');
	}


# module installer
	function install() {
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

# module uninstaller
	function uninstall() {
		global $installer;
		foreach ($this->dbtables as $table) {
			$installer->add_query('DROP', $table);
		}
		return true;
	}

# module upgrader
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

