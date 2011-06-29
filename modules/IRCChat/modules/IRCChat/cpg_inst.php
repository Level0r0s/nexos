<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/IRCChat/modules/IRCChat/cpg_inst.php,v $
  $Revision: 9.7 $
  $Author: trevor $
  $Date: 2005/08/19 19:47:57 $
**********************************************/
if (!defined('ADMIN_MOD_INSTALL')) { exit; }
class IRCChat {
	var $radmin;
	var $version;
	var $modname;
	var $description;
	var $author;
	var $website;
	var $dbtables;
	function IRCChat() {
		$this->radmin = true;
		$this->version = '2.0.1.0';
		$this->modname = 'IRC Chat';
		$this->description = 'Allow users to access your IRC chatroom through your site';
		$this->author = 'DJMaze';
		$this->website = 'dragonflycms.org';
		$this->dbtables = array('ircservers');
	}
	function install() {
		global $installer;
$installer->add_query('CREATE', 'ircservers', '
  server_id smallint(5) unsigned NOT NULL auto_increment,
  network varchar(40) NOT NULL default "",
  server varchar(40) NOT NULL default "",
  region varchar(25) NOT NULL default "",
  PRIMARY KEY  (server_id)', 'ircservers');
$installer->add_query('INSERT', 'ircservers', '"1", "ablenet.org", "irc.ablenet.org", "main"');
$installer->add_query('INSERT', 'ircservers', '"2", "afternet.org", "irc.afternet.org", "main"');
$installer->add_query('INSERT', 'ircservers', '"3", "beyondirc.net", "irc.beyondirc.net", "main"');
$installer->add_query('INSERT', 'ircservers', '"4", "freenode.net", "irc.freenode.net", "main"');
$installer->add_query('INSERT', 'ircservers', '"5", "flynode.net", "irc.flynode.net", "main"');
$installer->add_query('INSERT', 'ircservers', '"6", "icq.com", "irc.icq.com", "main"');
$installer->add_query('INSERT', 'ircservers', '"7", "undernet.org", "irc.undernet.org", "main"');

$installer->add_query('INSERT', 'config_custom', '"IRCChat", "network", "5"');
$installer->add_query('INSERT', 'config_custom', '"IRCChat", "channel", "dragonfly"');
$installer->add_query('INSERT', 'config_custom', '"IRCChat", "quitmessage", "Dragonfly rules! I am going to check my cool website!"');
$installer->add_query('INSERT', 'config_custom', '"IRCChat", "allow_anon", "1"');
		return true;
	}
	function uninstall() {
		global $installer;
		$installer->add_query('DROP', 'ircservers');
		$installer->add_query('DELETE', 'config_custom', "cfg_name='IRCChat'");
		return true;
	}
	function upgrade($prev_version) {
		return true;
	}
}