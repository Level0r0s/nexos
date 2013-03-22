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
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/classes/cpg_cache.php,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 01:03:14 $
**********************************************/

abstract class Cache {

	public static function clear()
	{
		$cache_dir = BASEDIR.'cache';
		$cache = dir($cache_dir);
		while($file = $cache->read()) {
			if (!is_dir("$cache_dir/$file") && $file != '.htaccess' && $file != '.cvsignore') {
				unlink("$cache_dir/$file");
			}
		}
		$cache->close();
	}

	public static function clear_conf()
	{
		$cache_dir = BASEDIR.'cache';
		$cache = dir($cache_dir);
		while($file = $cache->read()) {
			if (!is_dir("$cache_dir/$file") && 0 === strpos($file, 'config_')) {
				unlink("$cache_dir/$file");
			}
		}
		$cache->close();
	}

	private static function array_parse($array, $space='  ')
	{
		$return = '';
		foreach($array as $key => $value) {
			$key = is_int($key) ? $key : "'$key'";
			$return .= "$space$key => ";
			if (is_array($value)) {
				$return .= "array(\n".Cache::array_parse($value, "$space  ")."$space),\n";
			} else {
				if (!is_int($value)) {
					$value = str_replace('\\', "\\\\", trim($value));
					$value = "'".str_replace("'", "\\'", $value)."'";
				}
				$return .= $value.",\n";
			}
		}
		return $return;
	}

	public static function array_save($name, $module_name='config', $array=false)
	{
		$cache_dir = BASEDIR.'cache';
		$filename = $cache_dir.'/'.$module_name."_$name.php";
		if (is_dir($cache_dir) && is_writable($cache_dir)) {
			$data = "<?php\nif (!defined('CPG_NUKE')) { exit; }\n";
			if (is_array($array)) {
				$data .= "\$$name = array(\n".Cache::array_parse($array).");";
			} else {
				global $$name;
				if (is_array($$name)) { $data .= "\$$name = array(\n".Cache::array_parse($$name).");"; }
			}
			file_write($filename, $data);
		}
	}

	public static function array_load($name, $module_name='config', $global=true)
	{
		if ($global) global $$name;
		$filename = BASEDIR.'cache/'.$module_name."_$name.php";
		if (file_exists($filename)) {
			include($filename);
			if (!defined('PHP_AS_NOBODY')) { define_nobody($filename); }
			return $$name;
		}
		return false;
	}

	public static function array_delete($name, $module_name='config') {
		Cache::remove($name, $module_name);
	}

	public static function remove($name, $module_name='config')
	{
		$cache_dir = BASEDIR.'cache';
		$filename = "$cache_dir/$module_name"."_$name.php";
		if (is_dir($cache_dir) && is_writable($cache_dir) && file_exists($filename)) {
			unlink($filename);
		}
		clearstatcache();
	}

	public static function defines_save($name, $module_name, $defines)
	{
		$cache_dir = BASEDIR.'cache';
		$filename = $cache_dir.'/'.$module_name."_$name.php";
		if (is_dir($cache_dir) && is_writable($cache_dir)) {
			$data = "<?php\nif (!defined('CPG_NUKE')) { exit; }\n";
			foreach ($defines as $name => $value) {
				if (!is_int($value)) {
					$value = str_replace('\\', '\\\\', trim($value));
					$value = "'".str_replace("'", "\\'", $value)."'";
				}
				$data .= "define('$name', $value);\n";
			}
			file_write($filename, $data);
		}
	}

	public static function defines_load($name, $module_name)
	{
		$filename = BASEDIR.'cache/'.$module_name."_$name.php";
		if (file_exists($filename)) {
			include_once($filename);
			return true;
		}
		return false;
	}

}
