<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2006 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Wiki/modules/Wiki/cpg_inst.php,v $
  $Revision: 1.3 $
  $Author: phoenix $
  $Date: 2010/11/04 01:10:52 $
**********************************************/
if (!defined('ADMIN_MOD_INSTALL')) { exit; }

class Wiki {
	var $radmin;
	var $version;
	var $modname;
	var $description;
	var $author;
	var $website;
	var $prefix;
	var $dbtables;
// class constructor
	function Wiki() {
		$this->radmin = true;
		$this->version = '1.0.0.1';
		$this->modname = 'Wiki v1';
		$this->description = 'Manage nicely categorized documentation.';
		$this->author = 'DragonflyCMS Dev. Team';
		$this->website = 'dragonflycms.org';
		$this->prefix = strtolower(basename(dirname(__FILE__)));
		$this->dbtables = array($this->prefix.'_pages', $this->prefix.'_pages_wait');
	}

// module installer
	function install() {
		global $installer;
		$installer->add_query('CREATE', $this->prefix.'_pages', "
			id INT NOT NULL auto_increment,
			parent_id INT NOT NULL DEFAULT 0,
			active TINYINT NOT NULL DEFAULT 1,
			pos INT NOT NULL DEFAULT 1,
			title VARCHAR(80) NOT NULL DEFAULT '',
			version INT NOT NULL DEFAULT 1,
			time INT,
			supercede INT,
			user_id INT NOT NULL,
			author varchar(80) NOT NULL DEFAULT '',
			upd_user_id INT NOT NULL,
			upd_author varchar(80) NOT NULL DEFAULT '',
			comment varchar(255) NOT NULL DEFAULT '',
			body text,
			PRIMARY KEY (id),
			KEY p_order (parent_id, pos),
			KEY title (title)", $this->prefix.'_pages');
		$installer->add_query('CREATE', $this->prefix.'_pages_wait', "
			id INT NOT NULL auto_increment,
			page_id INT NOT NULL DEFAULT 0,
			parent_id INT NOT NULL DEFAULT 0,
			title VARCHAR(80) NOT NULL DEFAULT '',
			user_id INT,
			comment varchar(255) NOT NULL DEFAULT '',
			body text,
			PRIMARY KEY (id)", $this->prefix.'_pages_wait');
		return true;
	}

// module uninstaller
	function uninstall() {
		global $installer;
		foreach($this->dbtables as $table) {
			$installer->add_query('DROP', $table);
		}
		return true;
	}

// module upgrader
	function upgrade($prev_version) {
		global $db, $prefix;
//		$db->sql_query('DELETE FROM '.$prefix.'_credits WHERE modname="Downloads v2"');
		return true;
	}
}
