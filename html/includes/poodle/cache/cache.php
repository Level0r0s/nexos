<?php
/*********************************************
 *  CPG Dragonfly™ CMS
 *********************************************
	Copyright © since 2010 by CPG-Nuke Dev Team
	http://dragonflycms.org

	Dragonfly is released under the terms and conditions
	of the GNU GPL version 2 or any later version

	$Source: /cvs/html/includes/poodle/cache/cache.php,v $
	$Revision: 10.1 $
	$Author: djmaze $
	$Date: 2010/11/07 14:46:23 $
**********************************************/

abstract class Poodle_Cache_Object
{
	# PHP >= 5.2: Static function should not be abstract
//	abstract public static function __set_state($arr);
	protected static function import_from_cache($name)
	{
		return Poodle_Cache::fetch($name, 'C');
	}
	protected function export_to_cache($name=null)
	{
		if (!method_exists($this, '__set_state'))
		{
			Poodle_Report::error('Class missing method','Class '.get_class($this).' is missing public static function __set_state');
			return;
		}
		$path = Poodle::$DIR_CACHE;
		if (is_dir($path) && is_writable($path))
		{
			$file = "<?php\nif (!class_exists('".get_class($this)."', false)) { exit; }\nreturn ".var_export($this, true).';';
			return Poodle_Cache::file_write('C_'.($name?$name:get_class($this)).'.php', $file);
		}
		return false;
	}
	protected function remove_from_cache($name=null)
	{
		Poodle_Cache::remove(($name?$name:get_class($this)), 'C');
	}
}

class Poodle_Cache
{

	public static function safe_filename($filename)
	{
		# http://en.wikipedia.org/wiki/Filename#Reserved_characters_and_words
		return preg_replace('#\\<\\>\\:"/\\\\\\|\\?\\*#','-', $filename);
	}

	# completely empty the cache folder
	public static function clear()
	{
		$path = Poodle::$DIR_CACHE;
		$cache = new BrowseDir($path, BrowseDir::FILES);
		foreach ($cache as $key => $file) { unlink($path.$file); }
		clearstatcache();
	}

	# unlink the given file from the cache folder
	public static function remove($name, $com_name='')
	{
		$path = Poodle::$DIR_CACHE;
		$file = $path.$com_name.'_'.$name.'.php';
		if (is_dir($path) && is_file($file)) { unlink($file); }
		clearstatcache();
	}

	# Parse and save the given data into the cache folder
	public static function store($name, array &$data, $com_name='')
	{
		$path = Poodle::$DIR_CACHE;
		if (is_dir($path) && is_writable($path)) {
			$file = "<?php\nreturn ".var_export($data, true).';';
			return self::file_write($com_name.'_'.$name.'.php', $file);
		}
		return false;
	}

	# Load and return the content
	public static function fetch($name, $com_name='')
	{
		$file = Poodle::$DIR_CACHE.$com_name.'_'.$name.'.php';
		return (is_file($file) ? include($file) : null);
	}

	public static function file_write($file, &$content)
	{
		$file = Poodle::$DIR_CACHE.$file;
		if (!is_dir(dirname($file))) {
			Poodle_Debugger::trigger('Directory "'.dirname($file).'" doesn\'t exist', dirname(__FILE__));
			return false;
		}
		if (!$fp = fopen($file, 'wb')) { return false; }
		flock($fp, LOCK_EX);
		if (fwrite($fp, $content) === false) {
			flock($fp, LOCK_UN);
			return false;
		}
		flock($fp, LOCK_UN);
		if (!fclose($fp)) { return false; }
//		Poodle::chmod($file);
		return true;
	}

}
