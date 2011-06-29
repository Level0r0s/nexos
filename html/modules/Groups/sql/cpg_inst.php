<?php
/*********************************************
  Dragonfly CMS, Copyright (c) 2004 by DragonflyCMS Dev. Team.
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/modules/Groups/sql/cpg_inst.php,v $
  $Revision: 1.1 $
  $Author: nanocaiordo $
  $Date: 2010/07/17 03:20:36 $
**********************************************/
if (!defined('ADMIN_MOD_INSTALL')) { exit; }
class Groups extends INSTALLER_MODULE {
	var $radmin;
	var $version;
	var $modname;
	var $description;
	var $author;
	var $website;
	var $dbtables;
	function Groups() {
		$this->radmin = true;
		$this->version = '1.1';
		$this->modname = 'Groups';
		$this->description = 'Manage user-based groups';
		$this->author = 'CPG-Nuke Dev Team';
		$this->website = 'dragonflycms.org';
		$this->dbtables = array('bbgroups', 'bbuser_group');
	}

	public function pre_install()	{ return true; }

	public function post_install()
	{
		global $installer;
		$installer->add_query('INSERT', 'bbgroups', '"1", "1", "Anonymous", "Personal User", "0", "1"');
		$installer->add_query('INSERT', 'bbuser_group', '"1", "-1", "0"');
		$installer->add_query('INSERT', 'bbuser_group', '"1", "1", "0"');
		return true;
	}

	public function pre_upgrade($prev_version) { return true; }

	public function post_upgrade($prev_version) {
		global $installer;
		if (version_compare($prev_version, '1.2', '<')) {
			//$installer->add_query('UPDATE', 'modules', 'uninstall=1 WHERE title="Groups"');
		}
		return true;
	}

	public function pre_uninstall() { return true; }

	public function post_uninstall() { return true; }
}
