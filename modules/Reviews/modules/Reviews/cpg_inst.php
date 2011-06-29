<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Reviews/modules/Reviews/cpg_inst.php,v $
  $Revision: 9.12 $
  $Author: phoenix $
  $Date: 2010/11/04 01:10:52 $
**********************************************/
if (!defined('ADMIN_MOD_INSTALL')) { exit; }

class Reviews {
	var $description;
	var $radmin;
	var $modname;
	var $version;
	var $author;
	var $website;
	var $dbtables;

	function Reviews() {
		$this->radmin = true;
		$this->version = '2.1.2';
		$this->modname = 'Reviews';
		$this->description = 'Create nicely categorized reviews of any kind, like games or toys';
		$this->author = 'CPG-Nuke Dev Team';
		$this->website = 'dragonflycms.org';
		$this->dbtables = array('reviews', 'reviews_add', 'reviews_comments');
	}

	function install() {
		global $installer;
		$installer->add_query('CREATE', 'reviews', "
  id int(10) NOT NULL auto_increment,
  date date NOT NULL default '0000-00-00',
  title varchar(150) NOT NULL,
  text text NOT NULL,
  reviewer varchar(20) default NULL,
  email varchar(60) default NULL,
  score int(10) NOT NULL default '0',
  cover varchar(100) NOT NULL,
  url varchar(100) NOT NULL,
  url_title varchar(50) NOT NULL,
  hits int(10) NOT NULL default '0',
  language varchar(30) NOT NULL,
  PRIMARY KEY  (id)
  ", 'reviews');
		$installer->add_query('CREATE', 'reviews_add', "
  id int(10) NOT NULL auto_increment,
  date date default NULL,
  title varchar(150) NOT NULL,
  text text NOT NULL,
  reviewer varchar(20) NOT NULL,
  email varchar(60) default NULL,
  score int(10) NOT NULL default '0',
  url varchar(100) NOT NULL,
  url_title varchar(50) NOT NULL,
  language varchar(30) NOT NULL,
  PRIMARY KEY  (id)
  ", 'reviews_add');
		$installer->add_query('CREATE', 'reviews_comments', "
  cid int(10) NOT NULL auto_increment,
  rid int(10) NOT NULL default '0',
  userid varchar(25) NOT NULL,
  date datetime default NULL,
  comments text,
  score int(10) NOT NULL default '0',
  PRIMARY KEY  (cid),
  KEY rid (rid),
  KEY userid (userid)
  ", 'reviews_comments');

		$installer->add_query('INSERT', 'config_custom', "'Reviews', 'title', ''");
		$installer->add_query('INSERT', 'config_custom', "'Reviews', 'description', ''");
		$installer->add_query('INSERT', 'config_custom', "'Reviews', 'anon_comments', '0'");
		$installer->add_query('INSERT', 'config_custom', "'Reviews', 'allow_bbcode', '1'");
        Cache::array_delete('MAIN_CFG');

		return true;
	}

	function uninstall() {
		global $installer;
		$installer->add_query('DROP', 'reviews');
		$installer->add_query('DROP', 'reviews_add');
		$installer->add_query('DROP', 'reviews_comments');
		$installer->add_query('DELETE', 'config_custom', "cfg_name='Reviews'");
        Cache::array_delete('MAIN_CFG');

		return true;
	}

	function upgrade($prev_version) {
		global $installer;
		if ($prev_version < 1.2) {
			$installer->add_query('DROP', 'reviews_main');
			$installer->add_query('INSERT', 'config_custom', "'Reviews', 'title', ''");
			$installer->add_query('INSERT', 'config_custom', "'Reviews', 'description', ''");
		}

		if (version_compare($prev_version, '2.1.0', '<')) {
		$installer->add_query('INSERT', 'config_custom', "'Reviews', 'anon_comments', '0'");
		}

		if (version_compare($prev_version, '2.1.1', '<')) {
		$installer->add_query('INSERT', 'config_custom', "'Reviews', 'allow_bbcode', '1'");
        Cache::array_delete('MAIN_CFG');
		}

		return true;
	}
}
