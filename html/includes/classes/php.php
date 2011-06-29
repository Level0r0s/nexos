<?php
/*********************************************
  Copyright (c) 2011 by DragonflyCMS
  http://dragonflycms.org
  Released under GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/classes/php.php,v $
  $Revision: 1.7 $
  $Author: nanocaiordo $
  $Date: 2011/04/19 04:48:23 $
**********************************************/

abstract class PHP
{

	public static $version;
	public static $sapi;
	public static $run_as;
	public static $can_set;
	public static $error_log = 'debug.log';
	public static $safe_mode;

	private static $rollback = array();

	public static function init()
	{
		if (0 !== strpos(self::$error_log, BASEDIR)) self::$error_log = BASEDIR. self::$error_log;
		self::runAs();
		self::$version = (int) preg_replace('#^(\d)\.(\d).*#', '$1$2', phpversion());
		if ($disabled = ini_get('disable_functions')) {
			trigger_error('Host provider disabled the following functions: '. $disabled , E_USER_NOTICE);
		}
		self::$can_set = false === strpos($disabled, 'ini_set');
		if (self::$can_set) { self::defaults(); }
		else if (self::$version < 53) { set_magic_quotes_runtime(0); } // even if ini_set is disabled calling the function still works
	}

	# return false on failure as per ini_set
	public static function set($cfg, $val)
	{
		if (!self::$can_set) { return false; }
		self::$rollback[] = $cfg;
		return ini_set($cfg, $val);
	}

	# saves data to rollback
	public static function get($cfg)
	{
		$val = ini_get($cfg);
		# "", "0", null (option doesn't exists?) || "Off" values
		if (!$val || 'off' === strtolower($val)) return 0;
		# "1", true || "On" values
		else if (1 == $val || 'on' === strtolower($val)) return 1;
		# only digits
		else if (ctype_digit($val)) return intval($val);
		# a string
		return $val;
	}

	public static function restore()
	{
		while ($cfg = array_shift(self::$rollback)) { ini_restore($cfg); }
		return true;
	}

	private static function defaults()
	{
		global $Shutdown;
		$Shutdown->register('PHP::restore');
		$http = array(
		'display_errors' => 0,
		'display_startup_errors' => (int) DEVELOPER_MODE,
		'url_rewriter.tags' => 'nourlrewrite',
		//'user_agent' => 'DragonflyCMS ('.CPG_NUKE.')',
		'zend.enable_gc' => 1, // PHP53
		'zlib.output_compression' => 0,
		'max_execution_time' => 7
		);
		$cli = array(
		'display_errors' => 'stderr',
		//'user_agent' => 'DragonflyCMS ('.CPG_NUKE.')',
		'zlib.output_compression' => 0
		);
		foreach (${self::$run_as} as $cfg => $val) {
			// ini_set($cfg, $val);
			if ($val != self::get($cfg)) { self::set($cfg, $val); } // is it worth
		}
		if (empty(self::$error_log)) {
			self::set('log_errors', 0);
		} else {
			self::set('error_log', self::$error_log); // should it check if file is writable
			self::set('ignore_repeated_errors', 1);
			self::set('log_errors', 1);
			self::set('log_errors_max_len', 255);
		}
		//$version > 53 ini_set('mail.log', ''); // very cool, also verifing mailing lists?
		if (self::$version < 53) {
			self::set('magic_quotes_runtime', 0);
			self::set('magic_quotes_sybase', 0);
		}
		//self::set('default_socket_timeout', 7);
		//self::set('mysql.connect_timeout', 7); // before db connection gets opened?
	}

	private static function runAs()
	{
	/* aolserver apache apache2filter apache2handler caudium cgi cgi-fcgi cli continuity
   embed isapi milter nsapi phttpd pi3web roxen thttpd tux webjames */
		if     ( defined('STDIN') && stripos(php_sapi_name(), 'cgi') ) self::$sapi = 'cli-cgi'; //cgi-fcgi
		elseif ( defined('STDIN') )                                    self::$sapi = 'cli';
		elseif ( false !== stripos(php_sapi_name(), 'cgi') )           self::$sapi = 'http-cgi'; //cgi
		else                                                           self::$sapi = 'http';
		self::$run_as = (0 === strpos(self::$sapi, 'cli') && !isset($_SERVER['REQUEST_METHOD'])) ? 'cli' : 'http';
		self::$safe_mode = ini_get('safe_mode');
	}

}

PHP::init();
