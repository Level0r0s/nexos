<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | block-Sample.php - Example NexOS block file                       |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      |
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |
  +-------------------------------------------------------------------+
/*********************************************
  Dragonfly CMS, Copyright (c) 2004 by DragonflyCMS Dev. Team.
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/classes/installer_module.php,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 01:03:15 $
**********************************************/
interface INSTALLER_MODULE_INTERFACE
{
		public function pre_install();
		public function post_install();
		public function pre_upgrade($prev_version);
		public function post_upgrade($prev_version);
		public function pre_uninstall();
		public function post_uninstall();
}

abstract class INSTALLER_MODULE implements INSTALLER_MODULE_INTERFACE
{
	protected $radmin;
	protected $version;
	protected $modname;
	protected $description;
	protected $author;
	protected $website;
	protected $dbtables;
	protected $config;

	public function install()
	{
		global $tablelist, $tables, $indexes, $records, $table_ids;
		if (!$this->pre_install()) { return false; }
		foreach ($tables AS $table => $columns) {
			if (isset($tablelist[$table])) { $db->sql_query('DROP TABLE '.$tablelist[$table]); }
			db_check::create_table($table, $columns, $indexes[$table]);
		}
		if (is_array($records) && !empty($records)) {
			foreach ($records AS $table => $content) {
				db_check::table_data($table, $content);
			}
		}
		if (!empty($this->config)) {
			global $installer;
			$mod = strtolower(get_class($this));
			foreach ($this->config as $key => $var) {
				$installer->add_query('INSERT', 'config_custom', '"'.$mod.'", "'.$key.'", "'.$var.'"');
			}
		}
		return $this->post_install();
	}

	public function upgrade($prev_version)
	{
		global $installer, $db, $tablelist, $tables, $indexes, $records, $table_ids;
		if (!$this->pre_upgrade($prev_version) || !$installer->install()) { return false; }
		$tablelist = $db->list_tables();
		foreach ($tables AS $table => $columns) {
			db_check::table_structure($table, $columns, $indexes[$table]);
		}
		if (is_array($records) && !empty($records)) {
			foreach ($records AS $table => $content) {
				db_check::table_data($table, $content);
			}
		}
		return $this->post_upgrade($prev_version);
	}

	public function uninstall()
	{
		global $installer;
		if (!$this->pre_uninstall()) { return false; }
		foreach ($this->dbtables as $table) {
			$installer->add_query('DROP', $table);
		}
		$installer->add_query('DELETE', 'config_custom', "cfg_name='".strtolower(get_class($this))."'");
		return $this->post_uninstall();
	}

	public function __get($key)
	{
		$allowed = array('radmin', 'version', 'modname', 'description', 'author', 'website');
		if (in_array($key, $allowed)) { return $this->$key; }

	}
}