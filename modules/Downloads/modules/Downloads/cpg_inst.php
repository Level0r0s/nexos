<?php
/*********************************************
  CPG-Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Downloads/modules/Downloads/cpg_inst.php,v $
  $Revision: 9.5 $
  $Author: trevor $
  $Date: 2005/05/09 20:44:34 $
**********************************************/
if (!defined('ADMIN_MOD_INSTALL')) { exit; }

class Downloads {
    var $radmin;
    var $version;
    var $modname;
    var $description;
    var $author;
    var $website;
    var $prefix;
    var $dbtables;
// class constructor
    function Downloads() {
        $this->radmin = true;
        $this->version = '2.1.1.0';
        $this->modname = 'Downloads v2';
        $this->description = 'Manage nicely categorized downloads.';
        $this->author = 'CPG-Nuke Dev Team';
        $this->website = 'dragonflycms.org';
        $this->prefix = strtolower(basename(dirname(__FILE__)));
        $this->dbtables = array('downloads_categories', 'downloads_downloads', 'downloads_editorials',
                                'downloads_modrequest', 'downloads_newdownload', 'downloads_votedata');
    }

// module installer
    function install() {
        global $installer;
        $installer->add_query('CREATE', 'downloads_categories', "
  cid int(11) NOT NULL auto_increment,
  title varchar(50) NOT NULL default '',
  cdescription text NOT NULL,
  ldescription text,
  parentid int(11) NOT NULL default '0',
  PRIMARY KEY  (cid),
  KEY cid (cid),
  KEY title (title)", 'downloads_categories');
        $installer->add_query('CREATE', 'downloads_downloads', "
  lid int(11) NOT NULL auto_increment,
  cid int(11) NOT NULL default '0',
  sid int(11) NOT NULL default '0',
  title varchar(100) NOT NULL default '',
  url varchar(100) NOT NULL default '',
  description text NOT NULL,
  date date default NULL,
  name varchar(100) NOT NULL default '',
  email varchar(100) NOT NULL default '',
  hits int(11) NOT NULL default '0',
  submitter varchar(60) NOT NULL default '',
  downloadratingsummary double(6,4) NOT NULL default '0.0000',
  totalvotes int(11) NOT NULL default '0',
  totalcomments int(11) NOT NULL default '0',
  filesize int(11) NOT NULL default '0',
  version varchar(10) NOT NULL default '',
  homepage varchar(200) NOT NULL default '',
  PRIMARY KEY  (lid),
  KEY lid (lid),
  KEY cid (cid),
  KEY sid (sid),
  KEY title (title)", 'downloads_downloads');
        $installer->add_query('CREATE', 'downloads_editorials', "
  downloadid int(11) NOT NULL default '0',
  adminid varchar(60) NOT NULL default '',
  editorialtimestamp datetime NOT NULL default '0000-00-00 00:00:00',
  editorialtext text NOT NULL,
  editorialtitle varchar(100) NOT NULL default '',
  PRIMARY KEY  (downloadid),
  KEY downloadid (downloadid)", 'downloads_editorials');
        $installer->add_query('CREATE', 'downloads_modrequest', "
  requestid int(11) NOT NULL auto_increment,
  lid int(11) NOT NULL default '0',
  cid int(11) NOT NULL default '0',
  sid int(11) NOT NULL default '0',
  title varchar(100) NOT NULL default '',
  url varchar(100) NOT NULL default '',
  description text NOT NULL,
  modifysubmitter varchar(60) NOT NULL default '',
  brokendownload int(3) NOT NULL default '0',
  name varchar(100) NOT NULL default '',
  email varchar(100) NOT NULL default '',
  filesize int(11) NOT NULL default '0',
  version varchar(10) NOT NULL default '',
  homepage varchar(200) NOT NULL default '',
  PRIMARY KEY  (requestid),
  UNIQUE KEY requestid (requestid)", 'downloads_modrequest');
        $installer->add_query('CREATE', 'downloads_newdownload', "
  lid int(11) NOT NULL auto_increment,
  cid int(11) NOT NULL default '0',
  sid int(11) NOT NULL default '0',
  title varchar(100) NOT NULL default '',
  url varchar(100) NOT NULL default '',
  description text NOT NULL,
  name varchar(100) NOT NULL default '',
  email varchar(100) NOT NULL default '',
  submitter varchar(60) NOT NULL default '',
  filesize int(11) NOT NULL default '0',
  version varchar(10) NOT NULL default '',
  homepage varchar(200) NOT NULL default '',
  PRIMARY KEY  (lid),
  KEY lid (lid),
  KEY cid (cid),
  KEY sid (sid),
  KEY title (title)", 'downloads_newdownload');
        $installer->add_query('CREATE', 'downloads_votedata', "
  ratingdbid int(11) NOT NULL auto_increment,
  ratinglid int(11) NOT NULL default '0',
  ratinguser varchar(60) NOT NULL default '',
  rating int(11) NOT NULL default '0',
  ratinghostname varchar(60) NOT NULL default '',
  ratingcomments text NOT NULL,
  ratingtimestamp datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (ratingdbid),
  KEY ratingdbid (ratingdbid)", 'downloads_votedata');
        return true;
    }

// module uninstaller
    function uninstall() {
        global $installer;
        $installer->add_query('DROP', 'downloads_categories');
        $installer->add_query('DROP', 'downloads_downloads');
        $installer->add_query('DROP', 'downloads_editorials');
        $installer->add_query('DROP', 'downloads_modrequest');
        $installer->add_query('DROP', 'downloads_newdownload');
        $installer->add_query('DROP', 'downloads_votedata');
		return true;
    }

// module upgrader
    function upgrade($prev_version) {
        global $db, $prefix;
//        $db->sql_query('DELETE FROM '.$prefix.'_credits WHERE modname="Downloads v2"');
		return true;
    }
}
