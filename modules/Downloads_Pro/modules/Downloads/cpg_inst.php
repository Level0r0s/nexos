<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2007 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/cpg_inst.php,v $
  $Revision: 1.23 $
  $Author: phoenix $
  $Date: 2010/11/03 23:13:17 $
******************************************************/
if (!defined('ADMIN_MOD_INSTALL')) { exit; }

class Downloads
{
	public $radmin;
	public $version;
	public $modname;
	public $description;
	public $author;
	public $website;
	public $prefix;
	public $dbtables;

	function __construct()
	{
		global $prefix;
		$this->radmin = true;
		$this->version = '3.0.0.15';
		$this->modname = 'Downloads Pro';
		$this->description = 'Manage a categorized collection of downloads with this innovative and full-scale addon';
		$this->author = 'Trevor Eckart and DJMaze';
		$this->website = 'dragonflycms.org';
		$this->prefix = strtolower(basename(dirname(__FILE__)));
		$this->dbtables = array($this->prefix.'_categories', $this->prefix.'_downloads', $this->prefix.'_mirrors',
		                        $this->prefix.'_screenshots', $this->prefix.'_broken', $this->prefix.'_ratings',
		                        $this->prefix.'_history', $this->prefix.'_stats', $this->prefix.'_fields');
	}

	public function install()
	{
		global $installer;
		$installer->add_query('CREATE', $this->prefix.'_categories', "
			cid INT NOT NULL auto_increment,
			title varchar(50) NOT NULL,
			cdescription text NOT NULL,
			parentid INT NOT NULL DEFAULT 0,
			PRIMARY KEY (cid),
			KEY title (title)", $this->prefix.'_categories');
		$installer->add_query('CREATE', $this->prefix.'_downloads', "
			lid INT NOT NULL auto_increment,
			cid INT NOT NULL DEFAULT 0,
			active TINYINT NOT NULL DEFAULT 1,
			access TINYINT NOT NULL DEFAULT 0,
			title varchar(100) NOT NULL,
			screen INT NOT NULL DEFAULT 0,
			desc_short varchar(255) NOT NULL,
			desc_long text NOT NULL,
			notes text NOT NULL,
			date int(10) UNSIGNED NOT NULL DEFAULT ".time().",
			updated int(10) UNSIGNED NOT NULL DEFAULT 0,
			name varchar(100) NOT NULL,
			email varchar(100) NOT NULL,
			submitter varchar(60) NOT NULL,
			filesize INT NOT NULL DEFAULT 0,
			version varchar(10) NOT NULL,
			homepage varchar(200) NOT NULL,
			compat varchar(255) NOT NULL,
			pick int(1) NOT NULL DEFAULT 0,
			PRIMARY KEY (lid),
			KEY active (active),
			KEY cid (cid)", $this->prefix.'_downloads');
		$this->new_tables();
		$this->new_config();
		return true;
	}

	private function new_tables()
	{
		global $installer;
		$installer->add_query('CREATE', $this->prefix.'_broken', "
			id INT NOT NULL auto_increment,
			lid INT NOT NULL DEFAULT 0,
			mid INT NOT NULL DEFAULT 0,
			uid mediumint(8) UNSIGNED NOT NULL DEFAULT 0,
			report varchar(255),
			date int(10) UNSIGNED NOT NULL DEFAULT ".time().",
			ip varchar(8) NOT NULL DEFAULT 0,
			PRIMARY KEY (id)", $this->prefix.'_broken');
		// visible: 0 = hidden; 1 = visible; 2 = required; 3 = admin only
		// type: 0 = text; 1 = yes/no; 2 = textarea; 3 = image
		$installer->add_query('CREATE', $this->prefix.'_fields', "
			id TINYINT unsigned NOT NULL auto_increment,
			field varchar(25) NOT NULL,
			title varchar(255) NOT NULL,
			visible TINYINT unsigned NOT NULL DEFAULT 0,
			type TINYINT unsigned NOT NULL DEFAULT 0,
			size SMALLINT unsigned NOT NULL DEFAULT 10,
			img_path varchar(255) NOT NULL,
			img_alt varchar(255) NOT NULL,
			del TINYINT unsigned NOT NULL DEFAULT 1,
			PRIMARY KEY (id)", $this->prefix.'_fields');
		$installer->add_query('CREATE', $this->prefix.'_history', "
			id INT NOT NULL DEFAULT 0,
			vers varchar(10) NOT NULL,
			author varchar(60) NOT NULL,
			date int(10) NOT NULL default ".time().",
			comment text NOT NULL", $this->prefix.'_history');
		$installer->add_query('CREATE', $this->prefix.'_mirrors', "
			id INT NOT NULL auto_increment,
			did INT NOT NULL DEFAULT 0,
			uid mediumint(8) UNSIGNED NOT NULL DEFAULT 0,
			url varchar(255) NOT NULL,
			filename varchar(255),
			filesize INT NOT NULL DEFAULT 0,
			md5 varchar(40),
			uploaded TINYINT NOT NULL DEFAULT 0,
			active TINYINT NOT NULL DEFAULT 1,
			PRIMARY KEY (id)", $this->prefix.'_mirrors');
		$installer->add_query('CREATE', $this->prefix.'_ratings', "
			id INT NOT NULL auto_increment,
			lid INT NOT NULL,
			uid mediumint(8) UNSIGNED NOT NULL DEFAULT 0,
			active TINYINT NOT NULL DEFAULT 1,
			ip varchar(8) NOT NULL DEFAULT 0,
			title varchar(50) NOT NULL,
			comment text NOT NULL,
			score varchar(3) NOT NULL DEFAULT 0,
			timestamp int(10) NOT NULL DEFAULT ".time().",
			PRIMARY KEY (id),
			KEY lid (lid)", $this->prefix.'_ratings');
		$installer->add_query('CREATE', $this->prefix.'_stats', "
			id INT NOT NULL DEFAULT 0,
			year SMALLINT NOT NULL DEFAULT 0,
			month TINYINT NOT NULL DEFAULT 0,
			hits INT NOT NULL DEFAULT 0,
			views INT NOT NULL DEFAULT 0,
			KEY id (id)", $this->prefix.'_stats');
		$installer->add_query('CREATE', $this->prefix.'_screenshots', "
			id int(11) NOT NULL auto_increment,
			did int(11) DEFAULT '0' NOT NULL,
			url varchar(255) NOT NULL,
			uploaded tinyint(4) DEFAULT '0' NOT NULL,
			PRIMARY KEY (id)", $this->prefix.'_screenshots');
	}

	private function new_config()
	{
		global $installer;
		$installer->add_query('INSERT', $this->prefix.'_fields', 'NULL, "homepage", "_HOMEPAGE", 1, 0, 100, "", "", 0');
		$installer->add_query('INSERT', $this->prefix.'_fields', 'NULL, "version", "_VERSION", 1, 0, 100, "", "", 0');
		$installer->add_query('INSERT', $this->prefix.'_fields', 'NULL, "compat", "Compatibility", 1, 0, 255, "", "", 1');

		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "anon_dl", 1');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "anon_dl_remote", 1');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "user_catparent", 1');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "def_sort", 1');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "dimension", 800');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "dimension_thumb", 200');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "ext_file", "ace doc gtar gz pdf rar tar zip"');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "ext_image", "gif jpg jpeg png tif"');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "front_rank", 5');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "im_spam_protect", '.(extension_loaded('gd') ? 1 : 0));
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "leech_local", 1');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "leech_remote", 0');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "path_file", "uploads/downloads"');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "path_image", "uploads/downloads/images"');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "perpage", 10');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "quality", 80');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "r_perpage", 5');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "r_active", 1');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "r_queue", 0');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "screen_active", 1');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "screen_max", 10');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "size_file", 2097152');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "size_image", 1048576');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "upl_file", 0');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "upl_image", 0');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "use_fetch", 0');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "use_fetch_remote", 1');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "watermark", 1');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "md5_local", 1');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "md5_remote", 1');
		$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "pub_mirror", 1');
	}

	public function uninstall()
	{
		global $installer;
		foreach ($this->dbtables as $table) {
			$installer->add_query('DROP', $table);
		}
		$installer->add_query('DELETE', 'config_custom', "cfg_name='".$this->prefix."'");
		Cache::array_delete('categories', basename(dirname(__FILE__)));
		return true;
	}

	public function upgrade($prev_version)
	{
		global $db, $prefix, $installer, $userinfo;
		if (version_compare($prev_version, '3', '<')) {
			$this->new_tables();

			$installer->add_query('DROP', $this->prefix.'_modrequest');
			$installer->add_query('DROP', $this->prefix.'_newdownload');
			$installer->add_query('DROP', $this->prefix.'_editorials');
			$installer->add_query('DROP', $this->prefix.'_votedata');

			$installer->add_query('DEL', $this->prefix.'_categories', 'ldescription');

//			$installer->add_query('DEL', $this->prefix.'_downloads', 'FOREIGN KEY sid');
			$installer->add_query('DEL', $this->prefix.'_downloads', 'INDEX sid');
			$installer->add_query('DEL', $this->prefix.'_downloads', 'INDEX title');
			$installer->add_query('DEL', $this->prefix.'_downloads', 'COLUMN sid, DROP COLUMN downloadratingsummary, DROP COLUMN totalvotes, DROP COLUMN totalcomments');
			$installer->add_query('CHANGE', $this->prefix.'_downloads', 'description desc_long TEXT');
			$installer->add_query('CHANGE', $this->prefix.'_downloads', 'date date int UNSIGNED NOT NULL default '.time());
			$installer->add_query('ADD', $this->prefix.'_downloads', 'screen INT NOT NULL DEFAULT 0 AFTER url');
			$installer->add_query('ADD', $this->prefix.'_downloads', 'desc_short varchar(255) NOT NULL AFTER screen');
			$installer->add_query('ADD', $this->prefix.'_downloads', 'notes text NOT NULL AFTER desc_long');
			$installer->add_query('ADD', $this->prefix.'_downloads', 'active TINYINT NOT NULL DEFAULT 1 AFTER cid');
			$installer->add_query('ADD', $this->prefix.'_downloads', 'updated int UNSIGNED NOT NULL DEFAULT 0 AFTER date');
			$installer->add_query('ADD', $this->prefix.'_downloads', 'compat varchar(255) NOT NULL AFTER homepage');
			$installer->add_query('ADD', $this->prefix.'_downloads', 'pick TINYINT NOT NULL DEFAULT 0');
			$installer->add_query('ADD', $this->prefix.'_downloads', 'access TINYINT NOT NULL DEFAULT 0 AFTER active');

			$time = time();
			$time_year = intval(L10NTime::date('Y', $time, $userinfo['user_dst'], $userinfo['user_timezone']));
			$time_month = intval(L10NTime::date('m', $time, $userinfo['user_dst'], $userinfo['user_timezone']))-1;
			if ($time_month < 1) {
				$time_month = 12;
				$time_year -= 1;
			}
			$result = $db->sql_uquery("SELECT lid, UNIX_TIMESTAMP(date), hits FROM ".$prefix.'_'.$this->prefix."_downloads");
			while ($row = $db->sql_fetchrow($result)) {
				$installer->add_query('UPDATE', $this->prefix.'_downloads', "date='".Fix_Quotes($row[1])."' WHERE lid='".$row[0]."'");
				$installer->add_query('INSERT', $this->prefix.'_stats', "'".$row[0]."', '$time_year', '$time_month', '".$row[3]."', 0");
			}
			$installer->add_query('DEL', $this->prefix.'_downloads', 'hits');

			$this->new_config();

			$result = $db->sql_uquery("SELECT lid, url, filesize FROM ".$prefix.'_'.$this->prefix."_downloads");
			while ($row = $db->sql_fetchrow($result, SQL_NUM)) {
				if (ereg('://', $row[1])) {
					$row[2] = intval($row[2]);
					$row[3] = 'N/A';
				} else {
					$row[2] = intval(filesize($row[2]));
					$row[3] = md5_file($row[2]);
					clearstatcache();
				}
				$installer->add_query('INSERT', $this->prefix.'_mirrors', "'NULL', '".$row[0]."', '".Fix_Quotes($row[1])."', '', ".$row[2].", '".$row[3]."', 0");
			}
			$installer->add_query('DEL', $this->prefix.'_downloads', 'url');
		} // end upgrade < 3.0.0.0
		// 3.0.0.0 upgrade SPECIAL for multi-screenshot system
		if (version_compare($prev_version, '3.0.0.1', '<')) {
			$installer->add_query('CHANGE', $this->prefix.'_downloads', 'screen screen INT NOT NULL DEFAULT 0');
			$db->sql_query('CREATE TABLE '.$prefix.'_'.$this->prefix.'_screenshots (
				id int(11) NOT NULL auto_increment,
				did int(11) DEFAULT 0 NOT NULL,
				url varchar(255) NOT NULL,
				uploaded tinyint(4) DEFAULT 0 NOT NULL,
				PRIMARY KEY (id))');
			$result = $db->sql_query("SELECT lid, screen FROM ".$prefix.'_'.$this->prefix."_downloads");
			while ($row = $db->sql_fetchrow($result, SQL_NUM)) {
				if (!empty($row[1])) {
					$db->sql_query('INSERT INTO '.$prefix.'_'.$this->prefix."_screenshots VALUES (NULL, '".$row[0]."', '".$row[1]."', 0)");
					$installer->add_query('UPDATE', $this->prefix.'_downloads', "screen='".$db->sql_nextid('id')."' WHERE lid='".$row[0]."'");
				}
			}
		}
		if (version_compare($prev_version, '3.0.0.2', '<')) {
			$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "anon_dl_remote", 1');
			$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "use_fetch_remote", 1');
		}
		if (version_compare($prev_version, '3.0.0.3', '<')) {
			$installer->add_query('ADD', $this->prefix.'_ratings', 'active TINYINT NOT NULL DEFAULT 1 AFTER uid');
			$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "r_active", 1');
			$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "r_queue", 0');
		}
		if (version_compare($prev_version, '3.0.0.4', '<')) {
			$installer->add_query('ADD', $this->prefix.'_broken', 'mid INT NOT NULL DEFAULT 0 AFTER lid');
		}
		if (version_compare($prev_version, '3.0.0.5', '<')) {
			$installer->add_query('INDEX', $this->prefix.'_downloads', 'active', 'active');
			$installer->add_query('INDEX', $this->prefix.'_stats', 'id', 'id');
		}
		if (version_compare($prev_version, '3.0.0.6', '<')) {
			$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "md5_local", 1');
			$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "md5_remote", 1');
		}
		if (version_compare($prev_version, '3.0.0.7', '<')) {
			$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "screen_max", 10');
		}
		if (version_compare($prev_version, '3.0.0.8', '<')) {
			$installer->add_query('INSERT', 'config_custom', '"'.$this->prefix.'", "pub_mirror", 1');
			$installer->add_query('ADD', $this->prefix.'_mirrors', 'uid mediumint(8) UNSIGNED NOT NULL DEFAULT 0 AFTER did');
			$installer->add_query('ADD', $this->prefix.'_mirrors', 'active TINYINT NOT NULL DEFAULT 1');
			$result = $db->sql_query("SELECT lid, submitter FROM ".$prefix.'_'.$this->prefix."_downloads");
			while ($row = $db->sql_fetchrow($result, SQL_NUM)) {
				$installer->add_query('UPDATE', $this->prefix.'_mirrors', "uid='".$row[1]."' WHERE did='".$row[0]."'");
			}
		}
		if (version_compare($prev_version, '3.0.0.9', '<')) {
			$installer->add_query('DELETE', 'config_custom', 'cfg_name="'.$this->prefix.'" AND cfg_field="outside"');
		}

		return true;
	}
}
