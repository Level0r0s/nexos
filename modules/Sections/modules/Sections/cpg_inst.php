<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Sections/modules/Sections/cpg_inst.php,v $
  $Revision: 9.4 $
  $Author: djmaze $
  $Date: 2005/04/07 22:18:20 $
**********************************************/
if (!defined('ADMIN_MOD_INSTALL')) { exit; }

class Sections {
	var $description;
	var $radmin;
	var $modname;
	var $version;
	var $author;
	var $website;
// class constructor
	var $dbtables;
	function Sections() {
		$this->radmin = true;
		$this->version = '2.0.1.0';
		$this->modname = 'Sections';
		$this->description = 'Create and manage multiple pages of categorized content';
		$this->author = 'CPG-Nuke';
		$this->website = 'www.cpgnuke.com';
		$this->dbtables = array('seccont', 'sections');
	}

// module installer
	function install() {
		global $db, $prefix;
		$queries = array();
		$queries[] = "CREATE TABLE IF NOT EXISTS ".$prefix."_seccont (
  artid int(11) NOT NULL auto_increment,
  secid int(11) NOT NULL default '0',
  title text NOT NULL,
  content text NOT NULL,
  counter int(11) NOT NULL default '0',
  slanguage varchar(30) NOT NULL default '',
  PRIMARY KEY  (artid),
  KEY artid (artid),
  KEY secid (secid)
)";
		$queries[] = "CREATE TABLE IF NOT EXISTS ".$prefix."_sections (
  secid int(11) NOT NULL auto_increment,
  secname varchar(40) NOT NULL default '',
  image varchar(50) NOT NULL default '',
  PRIMARY KEY  (secid),
  KEY secid (secid)
)";

		foreach($queries AS $query) {
			$result = $db->sql_query($query, true,false,__FILE__,__LINE__);
			if (!$result) {
				$this->description = '<b>MySQL Error</b> while executing:<br/>'.$query.'<br/><br/>' . mysql_error();
				return false;
			}
		}
		return true;
	}

// module uninstaller
	function uninstall($prev_version) {
		global $db, $prefix;
		$db->sql_query("DROP TABLE IF EXISTS ".$prefix."_seccont",false,__FILE__,__LINE__);
		$db->sql_query("DROP TABLE IF EXISTS ".$prefix."_sections",false,__FILE__,__LINE__);
		return true;
	}

// module upgrader
	function upgrade() {
		global $db, $prefix;
//		$db->sql_query('DELETE FROM '.$prefix.'_credits WHERE modname="Downloads v2"',false,__FILE__,__LINE__);
		return true;
	}
}