<?php
/**********************************************************************
GameServers Version 2.0.2 for PHP-Nuke 7.5+
By Neil Myers http://www.voicesinmyhead.net
Powered by gameq by Tom Buskens http://gameq.sourceforge.net
Released under the GNU General Public License
***********************************************************************
Ported to CPG Dragonfly™ CMS by:
djdevon3, SCROFT, and DssTrainer

Special Thanks to "CPG-Nuke Dev Team" at dragonflycms.org,
dedicatednow.com who sponsors or CVS space, and DJMaze for teaching us;
give a man a fish, he will eat for a day...
Teach a man to fish, he will eat for life.
**********************************************************************/
if (!defined('ADMIN_MOD_INSTALL')) { exit; }

class GameServers {
	var $description;
	var $radmin;
	var $modname;
	var $version;
	var $author;
	var $website;
	var $dbtables;
// class constructor
	function GameServers() {
		$this->radmin = true;
		$this->version = '2.0.2';
		$this->modname = 'GameServers';
		$this->description = 'Shows the status and player stats for multiplayer games';
		$this->author = 'Neil Myers';
		$this->website = 'www.voicesinmyhead.net';
		$this->dbtables = array('gameservers', 'gameservers_config', 'gameservers_statcache');
	}

// module installer
	function install() {
		global $installer;
		$installer->add_query('CREATE', 'gameservers', "
			server_id int(11) NOT NULL auto_increment,
			weight int(11) NOT NULL default '1',
			game text NOT NULL,
			engine text NOT NULL,
			longname text NOT NULL,
			ip text NOT NULL,
			port text NOT NULL,
			active tinyint(1) NOT NULL default '0',
			failstring text NOT NULL,
			failcounts tinyint(1) NOT NULL default '1',
			PRIMARY KEY (server_id),
			KEY server_id (server_id)", 'gameservers');

			$installer->add_query('CREATE', 'gameservers_config', "
			GSdownloads tinyint(1) NOT NULL default '1',
			GScachetime tinyint(4) NOT NULL default '5',
			GSbcachetime tinyint(4) NOT NULL default '10',
			GSdebug tinyint(1) NOT NULL default '1',
			GSremotepath varchar(128) NOT NULL default '',
			GSremote tinyint(1) NOT NULL default '0',
			GScode varchar(64) NOT NULL default '',
			GSlistname tinyint(1) NOT NULL default '0',
			GSblistname tinyint(1) NOT NULL default '0',
			GSTags tinyint(1) NOT NULL default '1',
			GSfailtime tinyint(2) NOT NULL default '0',
			GSfailcount tinyint(4) NOT NULL default '0',
			GSemail varchar(128) NOT NULL default '',
			GSlisttype varchar(8) NOT NULL default '',
			GSblisttype varchar(8) NOT NULL default '',
			GSlistchg tinyint(1) NOT NULL default '0',
			PRIMARY KEY  (GSdownloads),
			KEY GSdownloads (GSdownloads)", 'gameservers_config');

			$installer->add_query('INSERT', 'gameservers_config', "'alist', 'alist', '0', '', '', '0', '1', '1', '0', '1', '0', '0', '', '0', '', ''");

			$installer->add_query('CREATE', 'gameservers_statcache', "
			server_id int(5) NOT NULL default '0',
			sname varchar(255) NOT NULL default '',
			numplayers char(2) NOT NULL default '',
			maxplayers char(2) NOT NULL default '',
			ping char(4) NOT NULL default '',
			map varchar(50) NOT NULL default '',
			stamp int(11) NOT NULL default '0',
			KEY server_id (server_id)", 'gameservers_statcache');
	return true;
    }

// module uninstaller
	function uninstall() {
		global $installer;
		$installer->add_query('DROP', 'gameservers');
		$installer->add_query('DROP', 'gameservers_config');
		$installer->add_query('DROP', 'gameservers_statcache');
	}
}
?>