<?php
/**********************************************************************
  Dragonfly CMS, Copyright (c) 2004 by CPGNuke Dev Team
  http://dragonflycms.org
  Released under GNU GPL version 2 or any later version

  $Source: /cvs/html/index.php,v $
  $Revision: 10.2 $
  $Author: nanocaiordo $
  $Date: 2011/04/17 10:04:45 $

  A free program released under the terms and conditions
  of the GNU GPL version 2 or any later version

  Linking CPG Dragonfly™ CMS statically or dynamically with other modules is making a
  combined work based on CPG Dragonfly CMS.  Thus, the terms and conditions of the GNU
  General Public License cover the whole combination.

  As a special exception, the copyright holders of CPG Dragonfly CMS give you
  permission to link CPG Dragonfly CMS with independent modules that communicate with
  CPG Dragonfly CMS solely through the CPG-Core interface, regardless of the license
  terms of these independent modules, and to copy and distribute the
  resulting combined work under terms of your choice, provided that
  every copy of the combined work is accompanied by a complete copy of
  the source code of CPG Dragonfly CMS (the version of CPG Dragonfly CMS used to produce the
  combined work), being distributed under the terms of the GNU General
  Public License plus this exception.  An independent module is a module
  which is not derived from or based on CPG Dragonfly CMS.

  Note that people who make modified versions of CPG Dragonfly CMS are not obligated
  to grant this special exception for their modified versions; it is
  their choice whether to do so.  The GNU General Public License gives
  permission to release a modified version without this exception; this
  exception also makes it possible to release a modified version which
  carries forward this exception.
  http://gnu.org/licenses/gpl-faq.html#LinkingOverControlledInterface

***********************************************************************/
error_reporting(E_ALL | E_STRICT);

$start_mem = function_exists('memory_get_usage') ? memory_get_usage() : 0;
date_default_timezone_set('UTC');
if (function_exists('mb_language')) { mb_language('uni'); }
if (function_exists('mb_internal_encoding')) { mb_internal_encoding('UTF-8'); }
//mb_regex_encoding('UTF-8');

define('START_TIME', microtime(true));
define('DEVELOPER_MODE', false);

# Core properties
$tmp = dirname(__FILE__);
define('CPG_NUKE', '10.0.9');
define('BASEDIR', (strlen($tmp) > 2 ? $tmp : '.'). DIRECTORY_SEPARATOR);
define('CORE_PATH', BASEDIR. 'includes/');
define('CLASS_PATH', CORE_PATH. 'classes/');
define('CACHE_PATH', BASEDIR. 'cache/');
define('DF_EOL', "\r\n");

umask(0);
require_once(CORE_PATH.'classes/filter.php');
# Register shutdown function
//require_once(CORE_PATH.'classes/shutdown.php');
//$Shutdown->register(array($Shutdown, 'client'));

# Define our error handled asap to also catch early errors
require_once(CORE_PATH.'classes/cpg_debugger.php');
//$cpgdebugger->log_level = DEVELOPER_MODE ? (E_ALL | E_STRICT) : 0;
//$cpgdebugger->error_level = DEVELOPER_MODE ? (E_ALL | E_STRICT) : 0;
$cpgdebugger->log_level = E_ALL | E_STRICT;
$cpgdebugger->error_level = E_ALL | E_STRICT;

# Try to setup PHP with our favorite settings
require_once(CORE_PATH.'classes/php.php');

# Continue creating constants
define('GZIPSUPPORT', extension_loaded('zlib'));
define('GZIP_OUT', GZIPSUPPORT && !ini_get('zlib.output_compression') && isset($_SERVER['HTTP_ACCEPT_ENCODING']) && false !== strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'));
define('MAGICQUOTES', (PHP::$version < 60 ? get_magic_quotes_gpc()||ini_get('magic_quotes_sybase') : false));
define('WINDOWS', (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN'));
define('PHPVERS', PHP::$version);

# clear any previous buffering
for ($i=0, $c=ob_get_level(); $i<$c; ++$i) { ob_end_clean(); }

# Destroy GET/POST/Cookie variables from the global scope since IIS can't
# turn off register_globals as Apache can thru .ht*
if (intval(ini_get('register_globals')) != 0) {
	foreach ($_REQUEST AS $key => $val) { if (isset($$key)) unset($$key); }
}
$_REQUEST = null;

# Strip slashes from GET/POST/Cookie variables because we add them back later
if (is_array($_POST)) { array_walk($_POST, 'Prepare_INPUT'); }
if (is_array($_GET)) { array_walk($_GET, 'Prepare_INPUT'); }
//if (is_array($_COOKIE)) { array_walk($_COOKIE, 'Prepare_INPUT'); }
function Prepare_INPUT(&$value, $key) {
	if (is_array($value)) { array_walk($value, 'Prepare_INPUT', false); }
	else {
		if (MAGICQUOTES) { $value = stripslashes($value); }
		$value = preg_replace('#\p{Zs}#u', ' ', $value);
	}
}

function DragonflyCMS__autoload($class_name) {
	/*if (!preg_match('#^[a-z0-9\-_\\\]+$#i', $class_name)) { return; }*/
	if (!preg_match('#^[a-z0-9_]+$#i', $class_name)) { return; }
	$name = strtolower($class_name);
	/*$class_name = str_replace('core\\', '', $name);*/
	if (is_file(CORE_PATH."classes/{$name}.php")) {
		require_once(CORE_PATH."classes/{$name}.php");
		trigger_error('Autoloading class: '. $class_name, E_USER_NOTICE);
	/*} else if (false !== strpos($name, '\\') && is_file(BASEDIR. str_replace('\\', '/', $name). '.php')) {
		require_once(BASEDIR. str_replace('\\', '/', $name). '.php');
		trigger_error('Autoloading namespaced class: '. $class_name, E_USER_NOTICE);*/
	} else {
		// Compatibility
		/*switch ($name) {
			case 'cpg_template' :
				global $TPL;
				if (is_object($TPL)) { $cpgtpl =& $TPL; }
				else { require_once(CORE_PATH."classes/template.php"); $cpgtpl = new cpg_template(); }
				depreciated_warning();
			break;
			default: cpg_error("The class $class_name could not be found");
		}*/
		if (!isset(Poodle::$DIR_BASE)) {
			cpg_error("The class $class_name could not be found");
		}
	}
}
spl_autoload_register('DragonflyCMS__autoload');

#
# HTTP stuff
#
if (!Filter::ipv4($_SERVER['SERVER_NAME'], true) && !Filter::ipv6($_SERVER['SERVER_NAME'], true)
 && !Filter::ipv4($_SERVER['HTTP_HOST']) && !Filter::ipv6($_SERVER['HTTP_HOST'], true)
 && !Filter::domain($_SERVER['SERVER_NAME']) && !Filter::domain($_SERVER['HTTP_HOST']))
 { HttpHeaders::flush(500); }

define('START_REQUEST_TIME', $_SERVER['REQUEST_TIME']);
define('DOMAIN_PROTOCOL', $_SERVER['SERVER_PORT'] != 443 ? 'http' : 'https');
define('DOMAIN_NAME', isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : str_replace('www.', '', $_SERVER['SERVER_NAME']));
//define('DOMAIN_NAME', isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $MAIN_CFG['server']['domain']);
define('DOMAIN_PATH', dirname($_SERVER['SCRIPT_NAME']). '/');

$tmp = file_exists(CORE_PATH. 'config_'. DOMAIN_NAME. '.php') ? CORE_PATH. 'config_'. DOMAIN_NAME. '.php' :
			(file_exists(CORE_PATH. 'config.php') ? CORE_PATH. 'config.php' : false);
if ($tmp) {
	require_once($tmp);
} else {
	trigger_error('You must install Dragonfly first before you can use it', E_USER_ERROR);
}
define('DOMAIN_INDEX', $mainindex);
define('DOMAIN_ADMIN', DOMAIN_INDEX. '?'. str_replace('.php', '', $adminindex));
define('BASEHREF', DOMAIN_PROTOCOL. '://'. DOMAIN_NAME. DOMAIN_PATH);
$adminindex = DOMAIN_ADMIN;
if ('cli' === PHP::$run_as) {
	//require(CORE_PATH. 'load/cli.php');
	exit;
}

require_once(CORE_PATH. 'classes/httputils.php');
require_once(CORE_PATH. 'classes/httpheaders.php');
header('Date: '. date('D, d M Y H:i:s', time()). ' GMT');
header('X-Powered-By: Dragonfly CMS using PHP engine');

if (PHP::$version < 52) {
	HttpHeaders::flush(500,'PHP 5.2 is required to run this release. http://dragonflycms.org/News/article/sid=254.html');
}

if (empty($_SERVER['REQUEST_METHOD']) || 0 === preg_match('#^(HEAD|GET|POST)$#', $_SERVER['REQUEST_METHOD']) ) {
	HttpHeaders::add(405);
	HttpHeaders::flush('Allow: HEAD, GET, POST');
}
//if ( $_SERVER['HTTP_USER_AGENT'] === '-' || (empty($_SERVER['HTTP_USER_AGENT']) && $key !== 'paypal') ) {
//	HttpHeaders::add(403);
//	trigger_error('Invalid user agent', E_USER_ERROR);
//}




//$tmp = !empty($_POST) ? (string) key($_POST) : ( !empty($_GET) ? (string) key($_GET) : 'name' );
$tmp = !empty($_GET) ? (string) key($_GET) : 'name';
$_SERVER['QUERY_STRING'] = urldecode($_SERVER['QUERY_STRING']);
if (!preg_match('#^[a-z0-9_\-;]+$#', $tmp) ||
   (!empty($_SERVER['QUERY_STRING']) && strpos($_SERVER['QUERY_STRING'], '://'))) {
	HttpHeaders::flush(500, 'One or more characters included in the URL are not allowed.');
}

if (!defined('INSTALL')) {
	if ( !is_file(CORE_PATH. 'load/'. $tmp. '.php') ) {
		HttpHeaders::flush(404, "The loader '{$tmp}' could not be found.");
	}
	//define('ADMIN_PAGES', $tmp === 'admin');
	if ($tmp === 'admin') define('ADMIN_PAGES', true);
	# load core file
	require_once(CORE_PATH. 'load/'. $tmp. '.php');
	exit;
}

