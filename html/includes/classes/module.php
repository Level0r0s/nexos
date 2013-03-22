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
  Copyright (c) 2011 by DragonflyCMS
  http://dragonflycms.org
  Released under GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/classes/module.php,v $
  $Revision: 1.5 $
  $Author: nanocaiordo $
  $Date: 2011/04/19 06:34:52 $
**********************************************/

class Module
{

	/* config */
	public static $file;
	public static $is_home = true;
	public static $path;
	public static $allow_access = array();
	/* end config */

	public $id;
	public $name;
	public $title;

	public $data = array();
	public $list = array();
	public $custom = array();
	

	public function __construct($name)
	{
		global $prefix, $db, $MAIN_CFG;
		$name = strtolower($name);
		if (!preg_match('#^[a-z0-9_\-]+$#', $name)) return false;
		if ('admin' === $name) {
			$this->mid = -1;
			$this->title = 'Administration';
			$this->custom_title = _ADMINISTRATION;
			$this->sides = Blocks::LEFT;
			$this->https = true;
		} else {
			$result = $db->sql_uquery("SELECT * FROM {$prefix}_modules WHERE title='$name'");
			while ($row = $db->sql_fetchrow($result)) {
				$this->name      = strtolower($row['title']); // lowercase name
				$this->path_name = $row['title']; // Real_Name
				$this->title     = self::set_title($row['title']); // display title
				$this->cat_id    = (int) $row['cat_id'];
				$this->mid       = (int)$row['mid'];
				$this->pos       = (int) $row['pos'];
				$this->view      = (int) $row['view'];
				$this->sides     = (int) $row['blocks'];
				$this->version   = (float) $row['version'];
				$this->active    = (bool) $row['active'];
				$this->inmenu    = (bool) $row['inmenu'];
				$this->uninstall = (bool) $row['uninstall'];
				$this->https     = $this->name === 'admin' || $this->name === 'your_account';
				$this->home      = $this->name === strtolower($MAIN_CFG['global']['main_module']);
			}
			$db->sql_freeresult($result);
		}
	}

	# Create a new object as, $Example = new Module('example'), tip use module name for new objects
	# Fatal error check: $Example->allow()
	# Skip fatal error with $Example->allow(true)
	public function allow($check=false)
	{
		if (self::$is_home || 'Your_Account' === $this->name || in_array($this->name, self::$allow_access)) { return true; }
		if (!$this->active && !can_admin($this->name)) {
			$error = sprintf(_MODULENOEXIST, '');
		} elseif (1 === $this->view && !is_user()) {
			global $MAIN_CFG;
			$error = _MODULEUSERS.($MAIN_CFG['member']['allowuserreg'] ? _MODULEUSERS2 : '' );
		} elseif (2 === $this->view && !can_admin($this->name)) {
			$error = _MODULESADMINS;
		} elseif (3 < $this->view && !in_group($this->view-3)) {
			global $db, $prefix;
			list($groupName) = $db->sql_ufetchrow('SELECT group_name FROM '.$prefix.'_bbgroups WHERE group_id='.($this->view-3));
			$error = '<i>'.$groupName.'</i> '._MODULESGROUPS;
		}
		if (isset($error)) {
			if ($check) { return $error; }
			cpg_error($error, E_USER_ERROR);
		}
		return true;
	}

	# $title: string to search by name
	# return bool
	public function is_active($name)
	{
		$name = strtolower($name);
		return isset($this->list[$name]) && $this->list[$name]['active'] ;
		//return is_array(page_data($name));
	}

	# $id: integer to search by id or string to search by name
	# return bool
	public function exist($title)
	{
			return isset($this->list[$title]);
	}

	private function push($data)
	{
		if (!preg_match('#^([a-zA-Z0-9_\-]+)$#', $data['name'])) {
			trigger_error(sprintf(_ERROR_BAD_CHAR, strtolower(_MODULES)), E_USER_ERROR);
		}
		if (isset($this->list[$data['name']])) {
			cpg_error($data['name'].': Module name already taken.');
		}
		$data['title'] = self::set_title($data['name']);
		$this->list[$data['name']] = $data;
	}

	public static function set_title($title)
	{
		if (defined('_'. $title))             { $title = constant('_'. $title); }
		elseif (defined('_'. $title. 'LANG')) { $title = constant('_'. $title. 'LANG'); }
		else                                  { $title = ucwords(str_replace('_', ' ', $title)); }
		return $title;
	}

}
