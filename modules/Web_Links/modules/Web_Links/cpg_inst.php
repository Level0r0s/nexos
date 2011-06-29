<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Web_Links/modules/Web_Links/cpg_inst.php,v $
  $Revision: 9.14 $
  $Author: phoenix $
  $Date: 2010/11/04 22:04:26 $
**********************************************/
if (!defined('ADMIN_MOD_INSTALL')) { exit; }

class Web_Links {
	var $radmin;
	var $version;
	var $modname;
	var $description;
	var $author;
	var $website;
	var $prefix;
	var $dbtables;

// class constructor
	function Web_Links() {
		global $prefix;
		$this->radmin = true;
		$this->version = '2.1.1';
		$this->modname = 'Web Links';
		$this->description = 'Create nicely categorized links to other websites. ';
		$this->author = 'CPG-Nuke Dev Team';
		$this->website = 'dragonflycms.org';
		$this->prefix = 'links';
		$this->dbtables = array($this->prefix.'_categories', $this->prefix.'_config', $this->prefix.'_editorials', $this->prefix.'_links',
								$this->prefix.'_modrequest', $this->prefix.'_newlink', $this->prefix.'_votedata');
	}

// module installer
	function install() {
		global $installer;
		$installer->add_query('CREATE', $this->prefix.'_config', '
		config_name VARCHAR(255) NOT NULL,
		config_value TEXT NOT NULL', $this->prefix.'_config');

		$installer->add_query('INSERT', $this->prefix.'_config', "'maincats', '3'");
		$installer->add_query('INSERT', $this->prefix.'_config', "'subcats', '5'");
		$installer->add_query('INSERT', $this->prefix.'_config', "'mainlinks', '5'");
		$installer->add_query('INSERT', $this->prefix.'_config', "'perpage', '10'");
		$installer->add_query('INSERT', $this->prefix.'_config', "'popular', '5000'");
		$installer->add_query('INSERT', $this->prefix.'_config', "'newlinks', '10'");
		$installer->add_query('INSERT', $this->prefix.'_config', "'toplinks', '25'");
		$installer->add_query('INSERT', $this->prefix.'_config', "'linksresults', '10'");
		$installer->add_query('INSERT', $this->prefix.'_config', "'links_anonaddlinklock', '0'");
		$installer->add_query('INSERT', $this->prefix.'_config', "'anonwaitdays', '1'");
		$installer->add_query('INSERT', $this->prefix.'_config', "'outsidewaitdays', '1'");
		$installer->add_query('INSERT', $this->prefix.'_config', "'useoutsidevoting', '1'");
		$installer->add_query('INSERT', $this->prefix.'_config', "'anonweight', '10'");
		$installer->add_query('INSERT', $this->prefix.'_config', "'outsideweight', '20'");
		$installer->add_query('INSERT', $this->prefix.'_config', "'detailvotedecimal', '2'");
		$installer->add_query('INSERT', $this->prefix.'_config', "'mainvotedecimal', '1'");
		$installer->add_query('INSERT', $this->prefix.'_config', "'toplinkspercentrigger', '0'");
		$installer->add_query('INSERT', $this->prefix.'_config', "'toplinks', '25'");
		$installer->add_query('INSERT', $this->prefix.'_config', "'mostpoplinkspercentrigger', '0'");
		$installer->add_query('INSERT', $this->prefix.'_config', "'mostpoplinks', '25'");
		$installer->add_query('INSERT', $this->prefix.'_config', "'featurebox', '1'");
		$installer->add_query('INSERT', $this->prefix.'_config', "'linkvotemin', '5'");
		$installer->add_query('INSERT', $this->prefix.'_config', "'blockunregmodify', '0'");
		$installer->add_query('INSERT', $this->prefix.'_config', "'checkweblinks', '1'");

		$installer->add_query('CREATE', $this->prefix.'_categories', "
  cid int(11) NOT NULL auto_increment,
  title varchar(50) NOT NULL,
  cdescription text NOT NULL,
  parentid int(11) NOT NULL default '0',
  PRIMARY KEY  (cid)
  ", $this->prefix.'_categories');
		$installer->add_query('CREATE', $this->prefix.'_editorials', "
  linkid int(11) NOT NULL default '0',
  adminid varchar(60) NOT NULL default '',
  editorialtimestamp datetime NOT NULL default '0000-00-00 00:00:00',
  editorialtext text NOT NULL,
  editorialtitle varchar(100) NOT NULL default '',
  PRIMARY KEY  (linkid)
  ", $this->prefix.'_editorials');
		$installer->add_query('CREATE', $this->prefix.'_links', "
  lid int(11) NOT NULL auto_increment,
  cid int(11) NOT NULL default '0',
  title varchar(100) NOT NULL,
  url varchar(100) NOT NULL,
  description text NOT NULL,
  date date default NULL,
  name varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  hits int(11) NOT NULL default '0',
  submitter varchar(60) NOT NULL,
  linkratingsummary double(6,4) NOT NULL default '0.0000',
  totalvotes int(11) NOT NULL default '0',
  totalcomments int(11) NOT NULL default '0',
  feature TINYINT(1) NOT NULL default '0',
  PRIMARY KEY  (lid),
  KEY cid (cid)", $this->prefix.'_links');
		$installer->add_query('CREATE', $this->prefix.'_modrequest', "
  requestid int(11) NOT NULL auto_increment,
  lid int(11) NOT NULL default '0',
  cid int(11) NOT NULL default '0',
  sid int(11) NOT NULL default '0',
  title varchar(100) NOT NULL,
  url varchar(100) NOT NULL,
  description text NOT NULL,
  modifysubmitter varchar(60) NOT NULL,
  brokenlink int(3) NOT NULL default '0',
  PRIMARY KEY  (requestid)
  ", $this->prefix.'_modrequest');
		$installer->add_query('CREATE', $this->prefix.'_newlink', "
  lid int(11) NOT NULL auto_increment,
  cid int(11) NOT NULL default '0',
  sid int(11) NOT NULL default '0',
  title varchar(100) NOT NULL,
  url varchar(100) NOT NULL,
  description text NOT NULL,
  name varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  submitter varchar(60) NOT NULL,
  PRIMARY KEY (lid),
  KEY cid (cid),
  KEY sid (sid)", $this->prefix.'_newlink');
		$installer->add_query('CREATE', $this->prefix.'_votedata', "
  ratingdbid int(11) NOT NULL auto_increment,
  ratinglid int(11) NOT NULL default '0',
  ratinguser varchar(60) NOT NULL,
  rating int(11) NOT NULL default '0',
  ratinghostname varchar(60) NOT NULL,
  ratingcomments text NOT NULL,
  ratingtimestamp datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (ratingdbid)
  ", $this->prefix.'_votedata');
		return true;
	}

// module uninstaller
	function uninstall() {
		global $installer;
		foreach ($this->dbtables as $table) {
			$installer->add_query('DROP', $table);
		}
		return true;
	}

// module upgrader
	function upgrade($prev_version) {
		global $installer;
		if (version_compare($prev_version, '2.0.1.2', '<')) {
			$installer->add_query('DEL', $this->prefix.'_links', 'sid');
		}

		if (version_compare($prev_version, '2.1.0', '<')) {
			$installer->add_query('CREATE', $this->prefix.'_config', '
			config_name VARCHAR(255) NOT NULL,
			config_value TEXT NOT NULL', $this->prefix.'_config');

			$installer->add_query('INSERT', $this->prefix.'_config', "'subcats', '5'");
			$installer->add_query('INSERT', $this->prefix.'_config', "'perpage', '10'");
			$installer->add_query('INSERT', $this->prefix.'_config', "'popular', '5000'");
			$installer->add_query('INSERT', $this->prefix.'_config', "'newlinks', '10'");
			$installer->add_query('INSERT', $this->prefix.'_config', "'toplinks', '25'");
			$installer->add_query('INSERT', $this->prefix.'_config', "'linksresults', '10'");
			$installer->add_query('INSERT', $this->prefix.'_config', "'links_anonaddlinklock', '0'");
			$installer->add_query('INSERT', $this->prefix.'_config', "'anonwaitdays', '1'");
			$installer->add_query('INSERT', $this->prefix.'_config', "'outsidewaitdays', '1'");
			$installer->add_query('INSERT', $this->prefix.'_config', "'useoutsidevoting', '1'");
			$installer->add_query('INSERT', $this->prefix.'_config', "'anonweight', '10'");
			$installer->add_query('INSERT', $this->prefix.'_config', "'outsideweight', '20'");
			$installer->add_query('INSERT', $this->prefix.'_config', "'detailvotedecimal', '2'");
			$installer->add_query('INSERT', $this->prefix.'_config', "'mainvotedecimal', '1'");
			$installer->add_query('INSERT', $this->prefix.'_config', "'toplinkspercentrigger', '0'");
			$installer->add_query('INSERT', $this->prefix.'_config', "'toplinks', '25'");
			$installer->add_query('INSERT', $this->prefix.'_config', "'mostpoplinkspercentrigger', '0'");
			$installer->add_query('INSERT', $this->prefix.'_config', "'mostpoplinks', '25'");
			$installer->add_query('INSERT', $this->prefix.'_config', "'featurebox', '1'");
			$installer->add_query('INSERT', $this->prefix.'_config', "'linkvotemin', '5'");
			$installer->add_query('INSERT', $this->prefix.'_config', "'blockunregmodify', '0'");
			$installer->add_query('INSERT', $this->prefix.'_config', "'checkweblinks', '1'");
		}

		if (version_compare($prev_version, '2.1.1', '<')) {
			$installer->add_query('INSERT', $this->prefix.'_config', "'maincats', '3'");
			$installer->add_query('INSERT', $this->prefix.'_config', "'mainlinks', '5'");
			$installer->add_query('ADD', $this->prefix.'_links', 'feature TINYINT(1) DEFAULT 0 NOT NULL');
		}

		return true;
	}
}