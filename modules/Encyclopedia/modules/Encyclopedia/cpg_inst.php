<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Encyclopedia/modules/Encyclopedia/cpg_inst.php,v $
  $Revision: 9.8 $
  $Author: nanocaiordo $
  $Date: 2006/12/08 22:18:27 $
**********************************************/
if (!defined('ADMIN_MOD_INSTALL')) { exit; }

class Encyclopedia {
	var $radmin;
	var $version;
	var $modname;
	var $description;
	var $author;
	var $website;
	var $dbtables;
// class constructor
	function Encyclopedia() {
		$this->radmin = true;
		$this->version = '2.0.1.0';
		$this->modname = 'Encyclopedia';
		$this->description = 'Create and manage a simple encyclopedia';
		$this->author = 'CPG-Nuke Dev Team';
		$this->website = 'dragonflycms.org';
		$this->dbtables = array('encyclopedia', 'encyclopedia_text');
	}

// module installer
	function install() {
		global $installer;
		$installer->add_query('CREATE', 'encyclopedia', "
  eid SERIAL4,
  title VARCHAR(255) NOT NULL default '',
  description TEXT NOT NULL,
  elanguage VARCHAR(30) NOT NULL default '',
  active INT1(1) NOT NULL default '0',
  PRIMARY KEY  (eid)", 'encyclopedia');
		$installer->add_query('CREATE', 'encyclopedia_text', "
  tid SERIAL4,
  eid INT4(10) NOT NULL default '0',
  title VARCHAR(255) NOT NULL default '',
  text TEXT NOT NULL,
  counter INT4(10) NOT NULL default '0',
  PRIMARY KEY  (tid),
  KEY eid (eid),
  KEY title (title)", 'encyclopedia_text');
		return true;
	}

// module uninstaller
	function uninstall() {
		global $installer;
		$installer->add_query('DROP', 'encyclopedia');
		$installer->add_query('DROP', 'encyclopedia_text');
		return true;
	}

// module upgrader
	function upgrade($prev_version) {
		global $installer;
		return true;
	}
}