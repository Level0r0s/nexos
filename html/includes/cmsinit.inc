<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 2013 by Myndworx Asylum                   |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | NexOS CMS PH2 Blueprint                                           |
  | This is the default blueprint for a stock NexOS installation and  |
  | the one that is used on the NexOS home website.                   |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      |
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |  
  +-------------------------------------------------------------------+
  | CPG Dragonfly CMS                                                 |
  | Copyright © 2004 - 2005 by CPG-Nuke Dev Team                      |
  | http://www.dragonflycms.com                                       |
  | Dragonfly is released under the terms and conditions of the GNU   |
  | GPL version 2 or any later version                                |  
  +-------------------------------------------------------------------+
*/
# Disable DOS Attacks and any other strange behavior
if (((empty($_SERVER['HTTP_USER_AGENT']) || $_SERVER['HTTP_USER_AGENT'] == '-') && !defined('XMLFEED')) || defined('CORE_PATH')) { exit; }

#
# Create constants
#

define('START_TIME', microtime(true));
define('CPG_NUKE', '10.0.8');
define('IN_NEXOS', 1);
define('NEXOS_VERSION', '0.0.0.2');
define('GZIPSUPPORT', extension_loaded('zlib'));
define('WINDOWS', (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN'));
$phpver = explode('.', phpversion());
define('PHPVERS', intval($phpver[0].$phpver[1]));
if (PHPVERS < 52) { exit('You need atleast PHP 5.2 for this release. http://dragonflycms.org/News/article/sid=254.html'); }
# Are we allowed to modify php.ini on the fly ?
define('CAN_MOD_INI', false === stripos(ini_get('disable_functions'), 'ini_set'));
define('MAGICQUOTES', (PHPVERS < 60 ? get_magic_quotes_gpc()||ini_get('magic_quotes_sybase') : false));
# http://bugs.php.net/bug.php?id=31849
if (WINDOWS || !function_exists('posix_getpwuid')) {
	define('NEXOS_OWNER', 'N/A');
	define('_PROCESS_UID', '0');
	define('_PROCESS_OWNER', 'nobody');
} else {
	define('_NEXOS_OWNER',  get_current_user());
	define('_PROCESS_UID', posix_geteuid());
	$processUser = posix_getpwuid(_PROCESS_UID);
	define('_PROCESS_OWNER', $processUser['name']);
}

# Store the path of our (shared) core files
$root_path = dirname(__FILE__);
if (WINDOWS) { $root_path = str_replace('\\', '/', $root_path); }
define('CORE_PATH', ((strlen($root_path) > 2) ? $root_path : './includes').'/');
if (!defined('BASEDIR')) { define('BASEDIR', dirname(CORE_PATH).'/'); }

unset($root_path, $phpver);

# IE8 google.com/search?q=X-Content-Type-Options
header('X-Content-Type-Options: nosniff');

#
# Set UTF-8 encoding
#
if (function_exists('mb_language')) { mb_language('uni'); }
if (function_exists('mb_internal_encoding')) { mb_internal_encoding('UTF-8'); }
//mb_regex_encoding('UTF-8');

#
# Change behaviour for specific PHP versions
#
date_default_timezone_set('UTC');

#
# Set default settings
#

header('X-Powered-By: The NexOS CMS website engine');

# Is this still valid?  The bug appears to be open still but it's from 2002
# http://bugs.php.net/bug.php?id=15693
if ($_SERVER['REQUEST_METHOD'] == 'HEAD') { exit; }

if (PHPVERS < 53) {
	# Disable magic_quotes
	set_magic_quotes_runtime(0);
}
if (PHPVERS < 60) {
	if (CAN_MOD_INI) { ini_set('magic_quotes_sybase', 0); }
}
umask(0);

if (CAN_MOD_INI) {
	ini_set('magic_quotes_runtime', 0);
	ini_set('zlib.output_compression', 0);
}

# Compress output if server/php config allows
if (ini_get('output_buffering')) {
	ob_end_clean();
	header('Content-Encoding: ');
}
if (!defined('INSTALL')) {
	if (GZIPSUPPORT && !ini_get('zlib.output_compression') && isset($_SERVER['HTTP_ACCEPT_ENCODING']) && false !== stripos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {
		ob_start('ob_gzhandler');
	} else {
		# Some stupid firewalls don't send the HTTP_ACCEPT_ENCODING
		# So we still compress in memory for fast page generations
		# But it will take longer for the visitor to see the page.
		ob_start();
		ob_implicit_flush(0);
	}
}

#
# Check input variables
#

# Destroy GET/POST/Cookie variables from the global scope since IIS can't
# turn off register_globals as Apache can thru .ht*
if (intval(ini_get('register_globals')) != 0) {
	foreach ($_REQUEST AS $key => $val) { if (isset($$key)) unset($$key); }
}
if (is_array($_POST)) { array_walk($_POST, 'Prepare_INPUT'); }
if (is_array($_GET)) { array_walk($_GET, 'Prepare_INPUT'); }

if (!file_exists(CORE_PATH.'config.php')) {
	if (!defined('INSTALL')) { cpg_error('You must install NexOS CMS first before you can use it'); }
} else {
	require_once(CORE_PATH.'classes/nexos_debugger.php'); # we define our own error handler
	require_once(CORE_PATH.'config.php');
}

// Doctrine DBAL
use Doctrine\Common\ClassLoader;
require_once(CORE_PATH.'lib/Doctrine/Common/ClassLoader.php');
$classLoader = new ClassLoader('Doctrine', CORE_PATH.'lib');
$classLoader->register();
require_once(CORE_PATH.'db/doctrine.php');

// DragonFly 9 DB layer
require_once(CORE_PATH.'db/db.php');

// DragonFly 10 DB layer
require_once(CORE_PATH.'poodle/poodle.php');
Poodle::$DEBUG = Poodle::DBG_ALL;
if (!defined('SQL_ASSOC')) { define('SQL_ASSOC', Poodle_SQL::ASSOC); }
if (!defined('SQL_NUM')) { define('SQL_NUM',   Poodle_SQL::NUM); }
if (!defined('SQL_BOTH')) { define('SQL_BOTH',  Poodle_SQL::BOTH); }
if (!defined('INSTALL')) {
	try {
		$db2 = new Poodle_SQL_Dragonfly($dbhost, $dbuname, $dbpass, $dbname);
	} catch (Exception $e) {
		cpg_error('<b>'.NO_DB.', sorry for the inconvenience<br /><br />We should be back shortly</b>');
	}
//	$db->debug = Poodle::DBG_SQL | Poodle::DBG_SQL_QUERIES;
//	$db->debug = Poodle::$DEBUG & Poodle::DBG_SQL | Poodle::$DEBUG & Poodle::DBG_SQL_QUERIES;
}

require_once(CORE_PATH.'classes/nxs_cache.php');
require_once(CORE_PATH.'functions/linking.php');

//Very basic __autoload from Dragonfly
function NexOSCMS__autoload($class_name) {
	if (!preg_match('#^[a-z0-9\-_]+$#i', $class_name)) { return; }
	$class_name = strtolower($class_name);
	if (is_file(CORE_PATH."classes/{$class_name}.php")) {
		require_once(CORE_PATH."classes/{$class_name}.php");
	} else {
		cpg_error("The class $class_name could not be found");
	}
}
spl_autoload_register('NexOSCMS__autoload');

//If we are in the installation routine we exit and return
if (defined('INSTALL')) return;

require_once(CORE_PATH.'classes/time.php');
if (!defined('XMLFEED')) {
	require_once(CORE_PATH.'functions/display.php');
	require_once(CORE_PATH.'classes/cpg_member.php');
	require_once(CORE_PATH.'classes/multibyte.php');
	require_once(CORE_PATH.'classes/session.php');
	require_once(CORE_PATH.'classes/template.php');
}

if (!Cache::array_load('MAIN_CFG')) {
	$result = $db->sql_query('SELECT * FROM '.$prefix.'_config_custom', true);
	if (!$result) { URL::redirect('install.php'); }
	while ($row = $db->sql_fetchrow($result)) {
		$MAIN_CFG[$row['cfg_name']][$row['cfg_field']] = $row['cfg_value'];
	}
	$MAIN_CFG['global']['timezone'] = 0;
	$MAIN_CFG['global']['dateformat'] = 'D M d, Y g:i a';
	$MAIN_CFG['private_messages']['per_page'] = 50;
	$MAIN_CFG['private_messages']['inbox_max'] = 100;
	$MAIN_CFG['private_messages']['outbox_max'] = 100;
	$MAIN_CFG['private_messages']['sentbox_max'] = 4;
	$MAIN_CFG['private_messages']['savebox_max'] = 100;
	$MAIN_CFG['private_messages']['graphic_length'] = 200;
	$MAIN_CFG['private_messages']['allow_html'] = 1;
	$MAIN_CFG['private_messages']['allow_bbcode'] = 1;
	$MAIN_CFG['private_messages']['allow_smilies'] = 1;
	$MAIN_CFG['private_messages']['allow_sig'] = 1;
	$MAIN_CFG['private_messages']['flood_interval'] = 15;
	$MAIN_CFG['private_messages']['email_sig'] = '';
	$MAIN_CFG['private_messages']['quick_reply'] = 1;

	Cache::array_save('MAIN_CFG');
	$db->sql_freeresult($result);
}
if (version_compare($MAIN_CFG['global']['Version_Num'], CPG_NUKE, '<')) {
	cpg_error('<strong>We are currently upgrading our website.<br />Please be patient; we should be back shortly.</strong>', 'Maintenance');
}
$cpgdebugger->error_level = $MAIN_CFG['debug']['error_level'];
$cpgdebugger->log_level = 0; /* $cpgdebugger->log_level = $MAIN_CFG['debug']['log_level']; */
if (CAN_MOD_INI) ini_set('sendmail_from', $MAIN_CFG['global']['adminmail']);
if (NEXOS_DEBUG) { trigger_error('sendmail_from: '.ini_get('sendmail_from'),E_USER_NOTICE); }
if (preg_match('#^(localhost|127.0.0.1|192.168|10.|172.(1[6-9]|2[0-9]|3[0-1]).)#', $_SERVER['HTTP_HOST'])) $MAIN_CFG['cookie']['domain'] = NULL;
else if ($MAIN_CFG['cookie']['server']) {
	$MAIN_CFG['cookie']['domain'] = $MAIN_CFG['server']['domain'] = str_replace('www.', '', $_SERVER['SERVER_NAME']);
}
$MAIN_CFG['global']['nukeurl'] = 'http://'.$MAIN_CFG['server']['domain'].substr($MAIN_CFG['server']['path'], 0, -1);
$MAIN_CFG['server']['domain'] = preg_replace('#[a-z]+://#i', '', $MAIN_CFG['server']['domain']);

if (!extension_loaded('gd')) { $MAIN_CFG['global']['sec_code'] = 0; }
if ($MAIN_CFG['global']['admingraphic'] < 1) $MAIN_CFG['global']['admingraphic'] = 3;
if (empty($MAIN_CFG['cookie']['member'])) $MAIN_CFG['cookie']['member'] = 'member';
if (empty($MAIN_CFG['cookie']['admin'])) $MAIN_CFG['cookie']['admin'] = 'admin';
$BASEHREF = ($_SERVER['SERVER_PORT'] != 443 ? 'http' : 'https') . '://';
$BASEHREF .= (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $MAIN_CFG['server']['domain']);
$BASEHREF .= $MAIN_CFG['server']['path'];
extract($MAIN_CFG['global'], EXTR_OVERWRITE | EXTR_REFS);

if (defined('XMLFEED')) return; # no need to load everything if it's a feed

if (!ini_get('allow_url_fopen') || ini_get('allow_url_include'))
{
	# Force allow_url_fopen=on and allow_url_include=off
	stream_wrapper_unregister('http');
	//stream_wrapper_unregister('https');
	require(CORE_PATH.'classes/http_wrapper.php');
	stream_wrapper_register('http', 'moo_stream_wrapper_http');
}

/******************************************************************************
  Set default metatags
*******************************************************************************/
$METATAGS['description']   = $slogan;
$METATAGS['keywords']      = '';
$METATAGS['resource-type'] = 'document';
$METATAGS['distribution']  = 'global';
$METATAGS['author']        = $sitename;
$METATAGS['copyright']     = 'Copyright (c) '.date('Y').' by '.$sitename;
$METATAGS['robots']        = 'index, follow';
$METATAGS['rating']        = 'general';
$METATAGS['generator']     = 'CPG Dragonfly CMS: Copyright (c) 2003-'.date('Y').' by CPG-Nuke Development Team, http://dragonflycms.org';
//$METATAGS['revisit-after'] = '1 days';

/******************************************************************************
  Start the session
*******************************************************************************/
$CPG_SESS = array();
$SESS = new cpg_session();

/******************************************************************************
  Are we requesting the security code ?
*******************************************************************************/
if (isset($_GET['name']) && ($_GET['name'] == 'gfx' || (isset($_GET['op']) && $_GET['name'] == 'Your_Account' && $_GET['op'] == 'gfx'))) {
	require(BASEDIR.'includes/gfxchk.php');
}

/******************************************************************************
  Include language to detect languages from browser setting and user preferences
  Join our language initiative (NLI) http://dragonflycms.org
*******************************************************************************/
define('_JS_ALERT', '<script type="text/javascript">alert("%s");</script>');
require_once(CORE_PATH.'functions/language.php');
require_once(CORE_PATH.'classes/security.php');
Security::init();

/******************************************************************************
  Load member/visitor details
*******************************************************************************/
print_r($dbal->getConfiguration()->getSQLLogger()->query_list);
$CLASS['member'] = new cpg_member();
print_r($dbal->getConfiguration()->getSQLLogger()->query_list);
$userinfo =& $_SESSION['CPG_USER'];

/******************************************************************************
  Load the administrator and if no admin turn of error reports
*******************************************************************************/
if (!$CLASS['member']->loadadmin()) error_reporting(0);

/******************************************************************************
 Do second security check with session/member related settings
*******************************************************************************/
if (!is_admin()) Security::check();

/******************************************************************************
  Check if the <form> POST is comming from this server
*******************************************************************************/
if (!is_user() && $_SERVER['REQUEST_METHOD'] == 'POST' && empty($CPG_SESS['user']['uri'])) {
	trigger_error('<pre>'.print_r($CPG_SESS, true).'</pre>', E_USER_WARNING);
	cpg_error('Please enable cookies to post on this site. If you feel that you have reached this message in error please go back to the preceding page and post again');
}

/******************************************************************************
  Check if maintenance is turned on
*******************************************************************************/
if ($MAIN_CFG['global']['maintenance'] && !is_admin() && !defined('ADMIN_PAGES') && !defined('INSTALL')) {
	cpg_error('<strong>'.$MAIN_CFG['global']['maintenance_text'].'</strong>', 'Maintenance');
}

/******************************************************************************
  Load the theme template system
*******************************************************************************/
$ThemeSel = get_theme();
# Load template handler
$cpgtpl = new cpg_template();
$template =& $cpgtpl;

$showblocks = 1;
$pagetitle = $modheader = '';


$SESS->init_info();
require_once(CORE_PATH.'classes/blocks.php');
require_once(CORE_PATH.'classes/menu.php');

//header('Content-Type: text/html;charset=utf-8');
//header('Content-language: '._LANGCODE);
# standard privacy header change to yours
header('P3P: CP="'.$MAIN_CFG['header']['P3P'].'"');
//header("P3P: CP=\"ALL DSP COR NID CURa OUR STP PUR\"");
# Notify server time
header('Date: '.date('D, d M Y H:i:s', time()).' GMT');
header('Last-Modified: '.date('D, d M Y H:i:s', time()).' GMT');
header('Expires: 0');
//header('Expires: '.date('D, d M Y H:i:s \G\M\T', time() + 10800));
define('USERS', 'YToxOntzOjQ6Im51a2UiO3M6MzMwOiIkY29wcGVybWluZT0nVGhpcyB3ZWJzaXRlIGVuZ2luZSBDb3B5cmlnaHQgJmNvcHk7IDIwMDMgLSAnLmRhdGUoJ1knKS4nIGJ5IENQRy1OdWtlIERldiBUZWFtPGJyIC8+RnJlZSBTb2Z0d2FyZSByZWxlYXNlZCB1bmRlciB0aGUgPGEgaHJlZj0iaHR0cDovL2RyYW'
.'dvbmZseWNtcy5vcmcvR05VR1BMLmh0bWwiIHRhcmdldD0iX2JsYW5rIj5HTlUgR1BMPC9hPjsgZWl0aGVyIHZlcnNpb24gMiBvZiB0aGUgTGljZW5zZSwgb3IgKGF0IHlvdXIgb3B0aW9uKSBhbnkgbGF0ZXIgdmVyc2lvbi4gTm8gd2FycmFudHkgaXMgZ2l2ZW4gb3IgaW1wbGllZC4nO3JldHVybiAkY29wcGVybWluZTsiO30=', true);



//$dbal->getConfiguration()->getSQLLogger()->startQuery();
//$stmt = $dbal->query("select * from cms_admins");
//while ($row = $stmt->fetch()) {
//	print_r($row);
//}
//$stmt = $dbal->query("select * from cms_admins");
//while ($row = $stmt->fetch()) {
//	print_r($row);
//}
//print_r($dbal->getConfiguration()->getSQLLogger()->query_list);





// Always return microtime as a float (true parameter)
function get_microtime() { return microtime(true); }

# Function which removes \015\012 which causes linebreaks in SMTP email
function removecrlf($str) { return strtr($str, "\015\012", ' '); }

/******************************************************************************

  Sends a email thru PHP or SMTP using plain text or html formatted
  bool send_mail(
	&$mailer_message: returns info about the send mail or the error message
	$message  : the message that you want to send
	$html     : send message as html or text 1 = html, 0 = text(default)
	$subject  : the subject of the message, default = _FEEDBACK
	$to       : emailaddress of person to send to, default = admin mailaddress
	$to_name  : name of person to send to, default = sitename
	$from     : emailaddress of person who sends the message, default = admin mailaddress
	$from_name: name of person who sends the message, default = sitename
	$custom_headers: array of custom mail headers
  )

*******************************************************************************/
function send_mail(&$mailer_message, $message, $html=0, $subject='', $to='', $to_name='', $from='', $from_name='', $custom_headers=false) {
	global $MAIN_CFG, $module_name, $PHPMAILER_LANG, $CLASS;

	if ($module_name != 'Contact' && function_exists('get_lang')) { get_lang('Contact'); }
	if (empty($to)) $to = $MAIN_CFG['global']['adminmail'];
	if ($from == '') $from = $MAIN_CFG['global']['adminmail'];
	if (isset($CLASS['member']) && $CLASS['member']->demo && $to != $MAIN_CFG['global']['adminmail']) {
		$mailer_message = 'The mail system has been disabled in the administration demo';
		return false;
	}
	if (is_email($from) < 1) {
		$mailer_message = $PHPMAILER_LANG['from_failed'].$from;
		return false;
	}
	if (!function_exists('get_lang')) {
		global $PHPMAILER_LANG;
		include_once(BASEDIR.'language/english/main.php');
	}
	require_once(CORE_PATH.'classes/phpmailer.php');
	$CLASS['mail']->ClearAll();
	$CLASS['mail']->SetLanguage();
	if ($MAIN_CFG['email']['smtp_on']) {
		$CLASS['mail']->IsSMTP(); # set mailer to use SMTP
		$CLASS['mail']->Host = $MAIN_CFG['email']['smtphost'];
		if ($MAIN_CFG['email']['smtp_auth']) {
			$CLASS['mail']->SMTPAuth = true; # turn on SMTP authentication
			$CLASS['mail']->Username = $MAIN_CFG['email']['smtp_uname']; # SMTP username
			$CLASS['mail']->Password = $MAIN_CFG['email']['smtp_pass']; # SMTP password
		}
	} else {
		$CLASS['mail']->IsMail();
	}
	$CLASS['mail']->From = removecrlf($from);
	$CLASS['mail']->FromName = ($from_name!='') ? removecrlf($from_name) : $MAIN_CFG['global']['sitename'];
	if (is_array($to)) {
		foreach ($to as $to_email => $to_name) {
			if (is_email($to_email) < 1) {
				trigger_error($PHPMAILER_LANG['recipients_failed'].$to, E_USER_WARNING);
				unset($to[$to_email]);
				continue;
			} else {
				$CLASS['mail']->AddBCC(removecrlf($to_email), removecrlf($to_name));
			}
		}
		if (empty($to)) {
			$CLASS['mail']->ClearAll();
			return false;
		}
	} elseif (is_email($to) < 1) {
		$mailer_message = $PHPMAILER_LANG['recipients_failed'].$to;
		return false;
	} elseif ($to_name != '') {
		$CLASS['mail']->AddAddress(removecrlf($to), removecrlf($to_name));
	} else {
		$CLASS['mail']->AddAddress(removecrlf($to));
	}

	if (is_array($custom_headers) && count($custom_headers)) {
		foreach ($custom_headers as $header) {
			$CLASS['mail']->AddCustomHeader($header);
		}
	}

	$CLASS['mail']->Priority = 3;
	$CLASS['mail']->Encoding = '8bit';
	$CLASS['mail']->CharSet = 'utf-8';
	$CLASS['mail']->Subject = ($subject!='') ? removecrlf($subject) : _FEEDBACK;
	if (false === stripos($message, '<br')) $message = nl2br($message);
	if ($html && ($MAIN_CFG['email']['allow_html_email'] || is_admin())) {
		if (function_exists('get_lang')) {
			require_once(BASEDIR.'includes/nbbcode.php');
			$message = decode_bbcode($message, 0, true);
		}
		$CLASS['mail']->IsHTML(true);
		$CLASS['mail']->AltBody = strip_tags($message);
		$CLASS['mail']->Body	= $message;
	} else {
		$CLASS['mail']->IsHTML(false);
		$CLASS['mail']->Body = strip_tags($message);
	}
	$mailer_message = '';
	if (!$CLASS['mail']->Send()) {
		$mailer_message .= 'Message could not be sent.<p>';
		$mailer_message .= 'Mailer Error: ' . $CLASS['mail']->ErrorInfo;
		return false;
	} else {
		$mailer_message .= '<p style="text-align:center;">'._SUCCESS_MESSAGE_SENT.'<br />';
		$mailer_message .= "<code>$message</code><br />";
		$mailer_message .= '<p style="text-align:center;">'._MAHALO.'</p>';
		return true;
	}
	//return $mailer_message;
}

/******************************************************************************
  Returns if the emailaddress is valid or not
*******************************************************************************/
function is_email(&$email) {
	$ret = Security::check_email($email);
	if ($ret == -2) { $email = $email[0]; }
	return $ret;
}

/******************************************************************************
  Returns admin name if the user is an administrator, otherwise false
*******************************************************************************/
function is_admin() {
	global $CLASS;
	return (isset($CLASS['member']) && is_object($CLASS['member'])) ? $CLASS['member']->admin_id : false;
}
function can_admin($module='super') {
	global $CLASS;
	$module = strtolower($module);
	$adminfo =& $CLASS['member']->admin;
	return (is_array($adminfo) && isset($adminfo['radmin'.$module]) && ($adminfo['radminsuper'] || $adminfo['radmin'.$module])) ? true : false;
}
/******************************************************************************
  Returns member ID if the user is an registered member, otherwise false
*******************************************************************************/
function is_user() {
	global $CLASS;
	return ($CLASS['member']->user_id > 1) ? $CLASS['member']->user_id : false;
}
/******************************************************************************
  Returns groupname if visitor is in the group, otherwise false
*******************************************************************************/
function in_group($id) {
	global $userinfo;
	if (isset($userinfo['_mem_of_groups'][$id])) {
		return $userinfo['_mem_of_groups'][$id];
	} else {
		return false;
	}
}
/******************************************************************************
  See includes/classes/cpg_member -> getmemdata() for details
*******************************************************************************/
function getusrdata($user, $data='*') {
	global $CLASS;
	return $CLASS['member']->getmemdata($user, $data);
}

function is_active($module) {
	global $prefix, $db, $active_modules;
	static $save; # Added by steven111
	if (is_array($save)) {
		if (isset($save[$module])) return ($save[$module]);
		return 0;
	}
	if (!Cache::array_load('active_modules')) {
		$result = $db->sql_query('SELECT title, version FROM '.$prefix.'_modules WHERE active=1');
		while ($row = $db->sql_fetchrow($result, SQL_NUM)) {
			$active_modules[$row[0]] = (intval($row[1]) > 0) ? $row[1] : 1;
		}
		$db->sql_freeresult($result);
		Cache::array_save('active_modules');
	}
	$save = $active_modules;
	if (isset($save[$module])) return ($save[$module]);
	return 0;
}

function blocks_list($module=null) {
	global $prefix, $db, $blocks_list;
	static $blocks_save;
	if (is_array($blocks_save)) {
		if ($module) return $blocks_save[$module];
		else return $blocks_save;
	}
	if (!Cache::array_load('blocks_list')) {
		// we want to get even NULL values in case of modules with no blocks

		$blocks_list = array();
		$blocks_list['Admin']['mid'] = -1;
		$blocks_list['Admin']['title'] = _ADMINISTRATION;
		$blocks_list['Admin']['blocks'] = 1;
		$module[-1] = 'Admin';

		$result = $db->sql_uquery('SELECT mid, title, blocks FROM '.$prefix.'_modules');
		while ($row = $db->sql_fetchrow($result, SQL_ASSOC)) {
			$title = defined('_'.$row['title'].'LANG') ? '_'.$row['title'].'LANG' : (defined('_'.strtoupper($row['title'])) ? '_'.strtoupper($row['title']) : $row['title']);
			$blocks_list[$row['title']]['mid'] = (int)$row['mid'];
			$blocks_list[$row['title']]['title'] = $title;
			$blocks_list[$row['title']]['blocks'] = (int)$row['blocks'];
			$module[$row['mid']] = $row['title'];
		}
		$db->sql_freeresult($result);
		$result = $db->sql_query('SELECT bid, mid, side FROM '.$prefix.'_blocks_custom ORDER BY mid, weight');
		while ($row = $db->sql_fetchrow($result, SQL_ASSOC)) {
			if (!isset($module[$row['mid']])) {
				$db->sql_query('DELETE FROM '.$prefix."_blocks_custom WHERE bid='$row[bid]' AND mid='$row[mid]'");
				continue;
			}
			$blocks_list[$module[$row['mid']]][$row['bid']] = ($row['mid'] == -1) ? 'l' : $row['side'];
		}
		ksort($blocks_list);
		$db->sql_freeresult($result);
		Cache::array_save('blocks_list');
	}
	$blocks_save = $blocks_list;
	if (is_array($blocks_save)) return $blocks_save;
	return;
}

# Strip slashes from GET/POST/Cookie variables because we add them back later
function Prepare_INPUT(&$value, $key, $set=true) {
	if (is_array($value)) { array_walk($value, 'Prepare_INPUT', false); }
	else {
		// php[0] <= 5
		if (MAGICQUOTES) { $value = stripslashes($value); }
/*
 http://php.net/manual/en/regexp.reference.php#regexp.reference.internal-options
 Since PHP 4.4.0 and 5.1.0, three additional escape sequences to match generic character types are available
 when UTF-8 mode is selected.
 \p{xx} a character with the {Space separator} property, same as \P{^xx}
 \P{xx} a character without the xx property
 \X an extended Unicode sequence
 preg_replace('#\p{Zs}#u', ' ', $value);
*/
		# replace NO-BREAK and other types of utf8 spacings
		$value = preg_replace(array(
			// UTF8                         UNICODE
			'#[\xC2][\xA0]#',            // 00A0
			'#[\xE2][\x80][\x80-\x8D]#', // 2000-200D
			'#[\xE2][\x80][\xAF]#',      // 202F
			'#[\xE2][\x81][\x9F]#',      // 205F
			'#[\xE3][\x80][\x80]#'       // 3000
		), ' ', $value);
	}
	if ($set) $_REQUEST[$key] =& $value;
}

function strip_javascript($text, $events=true) {
	$patterns[] = '/<\s*script[^>]*?>.*?<\/\s*script\s*>/i';
	$patterns[] = '/href\s*=\s*\'\s*javascript.*\'/i';
	$patterns[] = '/href\s*=\s*"\s*javascript.*"/i';
	if ($events) {
		$events = 'blur|click|dblclick|focus|load|unload|select|change'
		.'|submit|abort|error|reset|dragdrop|keydown|keypress|keyup'
		.'|mouseout|mouseover|mousedown|mousemove|mouseup|move|resize';
		$patterns[] = '/on('.$events.')\s*=\s*\'.*?\'/i';
		$patterns[] = '/on('.$events.')\s*=\s*".*?"/i';
	}
	return preg_replace($patterns,'',$text);
}

function htmlprepare($str, $nl2br=false, $spchar=ENT_QUOTES, $nohtml=false) {
	if ($nohtml) { $str = strip_tags($str, $nohtml); } # $nohtml : <a><br><b><i><img><li><ol><p><strong><u><ul>
	$str = htmlspecialchars($str,$spchar,'UTF-8'); # htmlentities sucks cos it converts all chars
	if ($nl2br) { $str = nl2br($str); }
	return trim($str);
}
function htmlunprepare($str, $nl2br=false) {
	$unhtml_specialchars_match = array('#&gt;#', '#&lt;#', '#&quot;#', '#&\#039;#', '#&amp;#');
	$unhtml_specialchars_replace = array('>', '<', '"', '\'', '&');
	if ($nl2br) {
		$unhtml_specialchars_match[] = "#<br />\n#";
		$unhtml_specialchars_replace[] = "\n";
	}
	return preg_replace($unhtml_specialchars_match, $unhtml_specialchars_replace, $str);
}
function html2bb($text) {
	$text = str_replace('<', ' <', $text);
	$text = preg_replace('/<ol type="([a1])">/si', '/\[list=\\1\]', $text);
	$text = preg_replace('/<(b|u|i|hr)>/sie', "'['.strtolower(\\1).']'", $text);
	$text = preg_replace('/<\/(b|u|i|hr)>/sie', "'[/'.strtolower(\\1).']'", $text);
	$text = preg_replace('#<img(.*?)src="(.*?)\.(gif|png|jpg|jpeg)"(.*?)>#si', '[img]\\2.\\3[/img]', $text);
	$text = str_replace('<ul>', '[list]', $text);
	$text = str_replace('<li>', '[*]', $text);
	$text = str_replace('</ul>', '[/list:u]', $text);
	$text = str_replace('</ol>', '[/list:o]', $text);
	$text = strip_tags($text, '<br><p><strong>');
	return trim($text);
}

function Fix_Quotes($str, $nohtml=false, $spchar=false) {
	global $db;
	if ($nohtml) { $str = strip_tags($str); }
	if ($spchar) { $str = htmlspecialchars($str,ENT_NOQUOTES,'UTF-8'); }
	return $db->sql_escape_string(trim($str));
}

# Text Filtering
function check_words(&$Message) {
	global $CensorList, $CensorReplace, $CensorMode;
	if (is_array($CensorList)) {
		switch($CensorMode)
		{
		case 1:
			return preg_replace('#('.implode('|', $CensorList).')([^a-zA-Z0-9])#i', "$CensorReplace\$2", $Message);
		case 2:
			return preg_replace('#(^|[^[:alnum:]])('.implode('|', $CensorList).')#i', "\$1$CensorReplace", $Message);
		case 3:
			return preg_replace('#'.implode('|', $CensorList).'#i', $CensorReplace, $Message);
		}
	}
	return $Message;
}

# Deprecated Functions
if (NEXOS_DEBUG) { include(CORE_PATH.'removed.php'); }
function gmtime() {
	$backtrace = debug_backtrace();
	trigger_error("DEPRECATED call to <a href=\"http://dragonflycms.org/gmtime\">gmtime</a>() by {$backtrace[0]['file']} on line {$backtrace[0]['line']}.", E_USER_WARNING);
	return time();
}
function encode_ip($ip) {
	$backtrace = debug_backtrace();
	trigger_error("DEPRECATED call to <a href=\"http://dragonflycms.org/encode_ip\">encode_ip</a>() by {$backtrace[0]['file']} on line {$backtrace[0]['line']}.", E_USER_WARNING);
	return inet_pton($ip);
}

# Time Formatting
function formatDateTime($time, $format) {
	global $userinfo;
	return L10NTime::strftime($format, $time, $userinfo['user_dst'], $userinfo['user_timezone']);
}

# IP Handling
function ip2long32($ip, $unsigned=false) {
	$backtrace = debug_backtrace();
	trigger_error("DEPRECATED call to ip2long32() by {$backtrace[0]['file']} on line {$backtrace[0]['line']}.", E_USER_WARNING);
	return NET::ip2long($ip);
}

function decode_ip($ip) {
	$backtrace = debug_backtrace();
	trigger_error("DEPRECATED call to ip2long32() by {$backtrace[0]['file']} on line {$backtrace[0]['line']}.", E_USER_WARNING);
	return NET::decode_ip($ip);
}

# Caching
function cache_save_array($name, $module_name='config', $array=false) {
	Cache::array_save($name, $module_name, $array);
}
function cache_load_array($name, $module_name='config', $global=true) {
	return Cache::array_load($name, $module_name, $global);
}
function cache_delete_array($name, $module_name='config') {
	Cache::array_delete($name, $module_name);
}
function file_write($filename, &$content, $mode='wb') {
	if (!$fp = fopen($filename, $mode)) {
		trigger_error("Cannot open file ($filename)", E_USER_WARNING);
		return false;
	}
	flock($fp, LOCK_EX);
	$bytes_written = fwrite($fp, $content);
	flock($fp, LOCK_UN);
	fclose($fp);
	if ($bytes_written === FALSE) {
		trigger_error("Couldn't write to file ($filename)", E_USER_WARNING);
		return false;
	}
	if (!defined('PHP_AS_NOBODY')) { define_nobody($filename); }
	chmod($filename, (PHP_AS_NOBODY ? 0666 : 0644));
	return true;
}

function filesize_to_human($size, $precision=2) {
	if ($size<1) return '0 Bytes';
	$sizename = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
	$i = floor(log($size, 1024));
	if ($i>0) { $size /= pow(1024, $i); }
	return round($size, $precision).' '.$sizename[$i];
}

function define_nobody($file) {
	if (!defined('PHP_AS_NOBODY')) {
		define('PHP_AS_NOBODY', (_PROCESS_OWNER == 'nobody' || getmyuid() != fileowner($file)));
	}
}

# stops the page creation and shows an error page
function cpg_error($message, $title='ERROR', $redirect=false) {
	global $userinfo, $cpgtpl, $SESS, $MAIN_CFG, $LNG, $db;
	if ($redirect) { URL::refresh($redirect); }
	if ($title == 301 || ($title >= 400 && $title <= 503) || ($title >= 800 && $title <= 803)) {
		$status = array(
			301 => 'Moved Permanently',
			400 => 'Bad Request',
			401 => 'Unauthorized',
			403 => 'Forbidden',
			404 => 'Not Found',
			500 => 'Internal Server Error',
			503 => 'Service Unavailable' # may have Retry-After header
		);
		$code = $title;
		if ($code >= 800) { $code = 403; }
		header("$_SERVER[SERVER_PROTOCOL] $code ".$status[$code]);
		if (function_exists('get_lang')) { get_lang('errors'); }
		else { include('language/english/errors.php'); }
		$message = $LNG['_SECURITY_MSG'][$title].$message;
		$title = $LNG['_SECURITY_STATUS'][$title];
	}
	if (is_object($cpgtpl)) {
		global $pagetitle, $showblocks, $home, $modheader, $mainindex, $CPG_SESS, $Blocks;
		if (is_object($Blocks)) $Blocks->showblocks = 0;
		$home = $showblocks = 0;
		$pagetitle = $title;
		$modheader .= '<meta name="robots" content="noindex,follow" />
		<meta name="robots" content="noarchive" />';
		if (!defined('HEADER_OPEN')) { require_once(BASEDIR.'header.php'); }
		OpenTable();
		echo '<center>'.$message.'<br /><br />';
		$link = ($redirect) ? '<a href="'.$redirect.'">'._GO.'</a>' : '[ <a href="'.$mainindex.'">'._HOME.'</a> ] '._GOBACK.'</center>';
		echo $link;
		CloseTable();
		if (is_admin() && $MAIN_CFG['debug']['session'] && !empty($CPG_SESS)) {
			OpenTable();
			echo '<pre>'.print_r($CPG_SESS, true).'</pre>';
			CloseTable();
		}
		require_once(BASEDIR.'footer.php');
	} else {
		require_once(BASEDIR.'includes/nexos_page.php');
		$errorpage = nexos_header($title);
		$errorpage .= "<center>$message</center>";
		if (is_admin() || (defined('NEXOS_DEBUG') && NEXOS_DEBUG)) {
			global $cpgdebugger, $CPG_SESS;
			$errorpage .= '<div style="text-align:left"';
			if (is_object($cpgdebugger)) {
				if ($MAIN_CFG['debug']['database']) {
					$errorpage .= $cpgdebugger->get_report('sql');
				}
				$errorpage .= $cpgdebugger->get_report('php');
			}
			if (is_admin() && $MAIN_CFG['debug']['session'] && !empty($CPG_SESS)) {
				$errorpage .= '<br /><strong>Session debug:</strong><pre>'.print_r($CPG_SESS, true).'</pre>';
			}
			$errorpage .= '</div>';
		}
		$errorpage .= cpg_footer();
		//if ($MAIN_CFG['debug']['log']) { LOG::write($MAIN_CFG['debug']['log']); }
		if (isset($SESS)) $SESS->write_close();
		if (is_object($db)) $db->sql_close();
		die($errorpage);
	}
}
