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
  */
/*********************************************
 *  CPG Dragonfly™ CMS
 *********************************************
	Copyright © since 2010 by CPG-Nuke Dev Team
	http://dragonflycms.org

	Dragonfly is released under the terms and conditions
	of the GNU GPL version 2 or any later version

	$Source: /cvs/html/includes/poodle/poodle.php,v $
	$Revision: 10.3 $
	$Author: djmaze $
	$Date: 2010/11/12 17:35:37 $
**********************************************/

if (!is_float($_SERVER['REQUEST_TIME'])) { $_SERVER['REQUEST_TIME'] = microtime(true); }

if (version_compare(phpversion(), '5.2', '<'))
{
	header($_SERVER['SERVER_PROTOCOL'].' 500 Internal Server Error');
	exit('This software needs atleast <a href="http://gophp5.org/">PHP 5.2</a>');
}

if (version_compare(phpversion(), '6', '<'))
{
	if (!defined('FILE_TEXT'))  { define('FILE_TEXT', 32); }
	if (!defined('FILE_BINARY')){ define('FILE_BINARY', 64); }
	if (!function_exists('is_binary'))  { function is_binary($v)  { return is_string($v) && preg_match('#[\x00-\x08\x11\x12\x14-\x1F\x7F]#',$v); } }
	if (!function_exists('is_unicode')) { function is_unicode($v) { return is_string($v) && preg_match('#^.*$#Du',$v); } }
}

if (!defined('POODLE_BACKEND'))  { define('POODLE_BACKEND',  false); }
if (!defined('POODLE_SETUP'))    { define('POODLE_SETUP',    false); }
if (!defined('POODLE_UNIT_TEST')){ define('POODLE_UNIT_TEST',false); }
define('POODLE_CLI', false !== stripos(php_sapi_name(), 'cli'));
define('XMLHTTPRequest', (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && 'XMLHttpRequest' === $_SERVER['HTTP_X_REQUESTED_WITH']));
define('WINDOWS_OS', '\\' === DIRECTORY_SEPARATOR);

if (!function_exists('class_alias')) { function class_alias($original, $alias) { eval("class {$alias} extends {$original}{}"); } }

set_include_path(str_replace('.'.PATH_SEPARATOR, '.'.PATH_SEPARATOR.dirname(dirname(__FILE__)).PATH_SEPARATOR, get_include_path()));

abstract class Poodle
{
	const VERSION    = '0.1.0.0';
	const DB_VERSION = 20100410;
	const CHARSET    = 'UTF-8';

	const DBG_ALL = 2147483647; # 64bit: 9223372036854775807
	const DBG_MEMORY      = 1;
	const DBG_PARSE_TIME  = 2;
	const DBG_TPL_TIME    = 4;
	const DBG_SQL         = 8;
	const DBG_SQL_QUERIES = 16;
	const DBG_JAVASCRIPT  = 32;
	const DBG_PHP         = 64;
	const DBG_AMF         = 128;
	const DBG_INCLUDED_FILES      = 268435456;
	const DBG_DECLARED_CLASSES    = 536870912;
	const DBG_DECLARED_INTERFACES = 1073741824;
	public static $DEBUG = 0;

	public static $JS_EXPIRE  = 8035200;      # 3 months
	public static $CSS_EXPIRE = 8035200;      # 3 months
	public static $CSS_MAX_EMBED_SIZE = 5800;

	public static $UMASK     = 0022; # octdec()?

	public static $DIR_BASE;
	public static $DIR_CACHE = 'poodle_sites/default/cache/';
	public static $DIR_COM   = 'poodle_resources/';
	public static $DIR_L10N  = 'poodle/l10n/';
	public static $DIR_MEDIA = 'media/';

	public static $URI_BASE;     # $_SERVER['POODLE_BASE_PATH']
	public static $URI_L10N;     # $_SERVER['POODLE_L10N_PATH']
	public static $URI_MEDIA;
	public static $UA_LANGUAGES; # $_SERVER['POODLE_UA_LANGUAGES']

//	private static $PROCESS_UID = 0;
//	private static $PROCESS_OWNER = 'nobody';

	protected $DETECT_CFG_FILE = 2; # 2=required, 1=optional, 0=none
	protected function load_config(array $cfg)
	{
		$cfg_file = empty($cfg['cfg_file']) ? null : mb_strtolower($cfg['cfg_file']);
		unset($cfg['cfg_file']);
		if ($this->DETECT_CFG_FILE && !$cfg_file) {
			$cfg_file = mb_strtolower($_SERVER['HTTP_HOST']);
			if (!is_file("poodle_sites/{$cfg_file}/config.php")) { $cfg_file = 'default'; }
		}
		if ($cfg_file) { $cfg_file = "poodle_sites/{$cfg_file}/config.php"; }
		if (2==$this->DETECT_CFG_FILE && !is_file($cfg_file))
		{
			Poodle_HTTP_Headers::set_status(503);
			exit('The URI that you requested, is temporarily unavailable due to maintenance on the server.');
		}
		if ($cfg_file && is_file($cfg_file)) { include($cfg_file); }

		foreach ($cfg as $k => $v) { $this->$k = $v; }
/*
		if (!Poodle::UMASK) {
			# Get the process information
			if (!WINDOWS_OS && function_exists('posix_getpwuid')) {
				# w32 get_current_user() returns process
				$pwuid = posix_getpwuid(posix_geteuid());
				self::$PROCESS_UID = posix_geteuid();
				self::$PROCESS_OWNER = array_shift($pwuid);
			}
			self::$UMASK = (preg_match('#(www-data|nobody|apache)#', self::$PROCESS_OWNER) || getmyuid() !== self::$PROCESS_UID) ? 0 : 0022;
		}
*/
	}

	public static function chmod($file, $mask=0666)
	{
		$m = umask(self::$UMASK);
		$r = chmod($file, $mask);
		umask($m);
		return $r;
	}

	public static function close_request($msg, $status_code=200, $uri=null, $box_msg=null)
	{
		if (POODLE_CLI) { echo $status_code.' '.$msg; exit; }
		if (XMLHTTPRequest)
		{
			header('Pragma: no-cache');
			header('Cache-Control: no-cache');
			Poodle_HTTP_Headers::set_status($status_code);
			switch ($status_code) {
			case 201: if ($uri) { header('Location: '.$uri); } break;
			case 204: exit;
			}
			if ($box_msg) { Poodle_Session::msg($box_msg); }
			exit($msg);
		}
		if ($status_code > 400) { Poodle_Report::error($status_code, $msg); }
		if ($msg) { Poodle_Session::msg($msg); }
		Poodle_URI::redirect($uri);
	}

	public static function is_file($name, array $paths=array())
	{
		$dirs = $paths ? $paths : explode(PATH_SEPARATOR, get_include_path());
		foreach ($dirs as $dir) {
			$file = $dir.DIRECTORY_SEPARATOR.$name;
			if (is_file($file)) { return $file; }
		}
	}

	public static function shorten_file_path($file)
	{
		static $paths;
		if (!$paths) { $paths = array_merge(array(Poodle::$DIR_BASE), explode(PATH_SEPARATOR, preg_replace('#\.+'.PATH_SEPARATOR.'#', '', get_include_path()))); }
		return str_replace($paths, '', $file);
//		if (!$paths) { $paths = '#^('.str_replace(PATH_SEPARATOR,'|',get_include_path()).')#'; }
//		if (!$paths) { $paths = '#^('.implode('|',array_merge(array(Poodle::$DIR_BASE), explode(PATH_SEPARATOR, preg_replace('#\.+'.PATH_SEPARATOR.'#', '', get_include_path())))).')#'; }
//		return preg_replace(self::$re_paths, '', $file);
	}

	public static function load_kernel($name=null, array $cfg=array())
	{
		if (!$name) {
			$name = 'Default';
			if ('/' !== $_SERVER['PATH_INFO']) {
				# Detect dir or output type
				if (preg_match('#^/(.+)(?:/|\.([a-z0-9]+))$#D', $_SERVER['PATH_INFO'], $path))
				{
					$_SERVER['PATH_INFO'] = '/'.$path[1];
					if (isset($path[2])) {
						$cfg['mlf'] = $path[2];
					} else {
						$_SERVER['PATH_INFO'] .= '/';
					}
					$cfg['PATH'] = explode('/', $path[1]);
				}
				else if (1 < strlen($_SERVER['PATH_INFO']))
				{
					$cfg['PATH'] = explode('/', substr($_SERVER['PATH_INFO'], 1));
				}
				if (isset($cfg['PATH'][0])) $name = $cfg['PATH'][0];
			}
		}
		$class = 'Poodle_Kernels_'.ucfirst($name);
		$level = error_reporting(error_reporting() & ~E_WARNING);
		include('poodle/kernels/'.strtolower($name).'.php');
		error_reporting($level);
		if (!class_exists($class, false)) { $class = 'Poodle_Kernels_Default'; }
		return $GLOBALS['POODLE'] = new $class($cfg);
	}

	# destroy output buffering
	public static function ob_clean()
	{
		$i = ob_get_level();
		if ($i) {
			# Clear buffers:
			for ($i; $i>0; --$i) { ob_end_clean(); }
			header('Content-Encoding: ');
		}
	}

	# autoload() ads a few milliseconds on each call
	public static function autoload($class_name)
	{
		//trigger_error('Autoload: '.$class_name);
		$class_name = explode('\\', $class_name);
		$namespace  = null;
		if (isset($class_name[1])) {
			$namespace  = $class_name[0];
			$class_name = $class_name[1];
		} else {
			$class_name = $class_name[0];
		}
		if (!preg_match('#^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*$#', $class_name)) { return; } # PEAR bug and such

		# split classname into segments where the
		# first segment is the library or component
		if (strpos($class_name, '_') && preg_match_all('#([A-Z][a-zA-Z0-9]*(?:_[a-z0-9_]+)?)#', $class_name, $dir))
		{
			$dir = array_map('strtolower', $dir[1]);
			$lib = array_shift($dir);
			switch ($lib)
			{
			case 'pear': return;

			case 'zend': include(str_replace('_','/',$class_name).'.php'); return;

			case 'poodle':
				if (!isset($dir[1])) { $dir[1] = $dir[0]; }
				if (!isset($dir[2]) && 'admin' === $dir[1]) { $dir[2] = 'index'; }
				$interface = 0;
				$level = error_reporting(error_reporting() & ~E_WARNING);
				include(str_replace('/interface/', '/interfaces/', 'poodle/'.implode('/',$dir), $interface).'.php');
				if (class_exists($class_name, false) || interface_exists($class_name, false))
				{
					error_reporting($level);
					return;
				}
				if ($dir[0] === $dir[1]) { array_shift($dir); }
				$file = implode('_',$dir);
				if ($interface || strpos($file, '_interface')) {
					$file = 'poodle/interfaces/'.str_replace('_interface','',$file);
				} else {
					$file = 'poodle/classes/'.$file;
				}
				include($file.'.php');
				error_reporting($level);
				if ($interface && !interface_exists($class_name, false)) {
					eval('interface '.$class_name.'{}');
					throw new Exception("Interface '$class_name' not found"); # as of PHP 5.3
				}
				if (!$interface && !class_exists($class_name, false)) {
					eval("class $class_name {
					static function kill(){ throw new Exception('$class_name',100); }
					function __construct(){self::kill();}
					static function __callStatic(\$m,\$a){self::kill();}
					}");
					throw new Exception("Class '$class_name' not found"); # as of PHP 5.3
				}
			}
		}
	}
}

if (POODLE_SETUP) Poodle::$DEBUG = Poodle::DBG_ALL;
Poodle::$DIR_BASE = dirname($_SERVER['SCRIPT_FILENAME']).DIRECTORY_SEPARATOR;
if (POODLE_BACKEND || POODLE_SETUP) {
	Poodle::$DIR_BASE = dirname(Poodle::$DIR_BASE).DIRECTORY_SEPARATOR;
	chdir(Poodle::$DIR_BASE);
}

spl_autoload_register('Poodle::autoload');

# Dragonfly config
Poodle::$DIR_CACHE = BASEDIR.'cache/';



class Poodle_Debugger
{
	public static function trigger($errmsg, $skip=0, $errno=E_USER_WARNING)
	{
		trigger_error($errmsg, $errno);
	}
}

class Poodle_LOG
{
	public static function notice($section, $msg)
	{
		trigger_error("$section: $msg", E_USER_WARNING);
	}
}
