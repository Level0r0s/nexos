<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Content/modules/Content/cpg_inst.php,v $
  $Revision: 9.6 $
  $Author: trevor $
  $Date: 2005/05/09 20:44:33 $
**********************************************/
if (!defined('ADMIN_MOD_INSTALL')) { exit; }

class Content {
	var $description;
	var $radmin;
	var $modname;
	var $version;
	var $author;
	var $website;
	var $dbtables;
// class constructor
	function Content() {
		$this->radmin = true;
		$this->version = '2.0.1.0';
		$this->modname = 'Content';
		$this->description = 'Create an organized collection of material';
		$this->author = 'CPG-Nuke Dev Team';
		$this->website = 'dragonflycms.org';
		$this->dbtables = array('pages', 'pages_categories');
	}

// module installer
	function install() {
		global $installer;
		$installer->add_query('CREATE', 'pages', "
  pid int(10) NOT NULL auto_increment,
  cid int(10) NOT NULL default '0',
  title varchar(255) NOT NULL,
  subtitle varchar(255) NOT NULL,
  active int(1) NOT NULL default '0',
  page_header text NOT NULL,
  text text NOT NULL,
  page_footer text NOT NULL,
  signature text NOT NULL,
  date datetime NOT NULL default '0000-00-00 00:00:00',
  counter int(10) NOT NULL default '0',
  language varchar(30) NOT NULL,
  PRIMARY KEY  (pid),
  KEY pid (pid),
  KEY cid (cid)", 'pages');
		$installer->add_query('CREATE', 'pages_categories', '
  cid int(10) NOT NULL auto_increment,
  title varchar(255) NOT NULL,
  description text NOT NULL,
  PRIMARY KEY  (cid),
  KEY cid (cid)', 'pages_categories');

		return true;
	}

// module uninstaller
	function uninstall() {
		global $installer;
		$installer->add_query('DROP', 'pages');
		$installer->add_query('DROP', 'pages_categories');
		return true;
	}

// module upgrader
	function upgrade($prev_version) {
		global $db, $prefix;
//		$db->sql_query('DELETE FROM '.$prefix.'_credits WHERE modname="Downloads v2"');
		return true;
	}
}
