<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/cmsinit.inc,v $
  $Revision: 10.8 $
  $Author: nanocaiordo $
  $Date: 2011/04/19 06:29:53 $
**********************************************/
# Disable DOS Attacks and any other strange behavior
if (!defined('CPG_NUKE')) { exit; }
//if (((empty($_SERVER['HTTP_USER_AGENT']) || $_SERVER['HTTP_USER_AGENT'] == '-') && !defined('XMLFEED')) || defined('CORE_PATH')) { exit; }

if (!defined('SKIP_GZIP')) define('SKIP_GZIP', 0);
if (!defined('SKIP_BUFFERING')) define('SKIP_BUFFERING', 0);
if (!defined('STOP_AT')) define('STOP_AT', 0);

if (PHPVERS < 52) { exit('You need atleast PHP 5.2 for this release. http://dragonflycms.org/News/article/sid=254.html'); }
# Are we allowed to modify php.ini on the fly ?
define('CAN_MOD_INI', PHP::$can_set);
# http://bugs.php.net/bug.php?id=31849
if (WINDOWS || !function_exists('posix_getpwuid')) {
	define('_DRAGONLY_OWNER', 'N/A');
	define('_PROCESS_UID', '0');
	define('_PROCESS_OWNER', 'nobody');
} else {
	define('_DRAGONLY_OWNER',  get_current_user());
	define('_PROCESS_UID', posix_geteuid());
	$processUser = posix_getpwuid(_PROCESS_UID);
	define('_PROCESS_OWNER', $processUser['name']);
}

//header('Content-Type: text/html;charset=utf-8');
//header('Content-language: '._LANGCODE);

define('GZIP_ACTIVE', (ini_get('zlib.output_compression') && ob_start()) || !SKIP_GZIP && GZIP_OUT && ob_start('ob_gzhandler'));

# we will always try to buffer the output
# note: defining SKIP_BUFFERING within your application will also turn on implicit flushings
#       ONLY if no output bufferings are active, eg: ini_set(zlib.output_compression, 0) fails
ob_implicit_flush(SKIP_BUFFERING && !GZIP_ACTIVE);

//require_once(CORE_PATH.'db/db.php');
require_once(CORE_PATH.'poodle/poodle.php');
Poodle::$DEBUG = Poodle::DBG_ALL;
define('SQL_ASSOC', Poodle_SQL::ASSOC);
define('SQL_NUM',   Poodle_SQL::NUM);
define('SQL_BOTH',  Poodle_SQL::BOTH);
if (!defined('INSTALL')) {
	try {
		$db = new Poodle_SQL_Dragonfly($dbhost, $dbuname, $dbpass, $dbname);
	} catch (Exception $e) {
		cpg_error('<b>'.NO_DB.', sorry for the inconvenience<br /><br />We should be back shortly</b>');
	}
//	$db->debug = Poodle::DBG_SQL | Poodle::DBG_SQL_QUERIES;
//	$db->debug = Poodle::$DEBUG & Poodle::DBG_SQL | Poodle::$DEBUG & Poodle::DBG_SQL_QUERIES;
}

require_once(CORE_PATH.'classes/cpg_cache.php');
require_once(CORE_PATH.'functions/linking.php');

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

$cpgdebugger->error_level = (int)$MAIN_CFG['debug']['error_level'];
$cpgdebugger->log_level   = (int)$MAIN_CFG['debug']['log_level'];
if (CAN_MOD_INI) ini_set('sendmail_from', $MAIN_CFG['global']['adminmail']);
if (CPG_DEBUG) { trigger_error('sendmail_from: '.ini_get('sendmail_from'),E_USER_NOTICE); }
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
//if (isset($_GET['name']) && ($_GET['name'] == 'gfx' || (isset($_GET['op']) && $_GET['name'] == 'Your_Account' && $_GET['op'] == 'gfx'))) {
//	require(BASEDIR.'includes/gfxchk.php');
//}
if (STOP_AT) return;
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
$CLASS['member'] = new cpg_member();
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

define('USERS', 'YToxOntzOjQ6Im51a2UiO3M6MzMwOiIkY29wcGVybWluZT0nVGhpcyB3ZWJzaXRlIGVuZ2luZSBDb3B5cmlnaHQgJmNvcHk7IDIwMDMgLSAnLmRhdGUoJ1knKS4nIGJ5IENQRy1OdWtlIERldiBUZWFtPGJyIC8+RnJlZSBTb2Z0d2FyZSByZWxlYXNlZCB1bmRlciB0aGUgPGEgaHJlZj0iaHR0cDovL2RyYW'
.'dvbmZseWNtcy5vcmcvR05VR1BMLmh0bWwiIHRhcmdldD0iX2JsYW5rIj5HTlUgR1BMPC9hPjsgZWl0aGVyIHZlcnNpb24gMiBvZiB0aGUgTGljZW5zZSwgb3IgKGF0IHlvdXIgb3B0aW9uKSBhbnkgbGF0ZXIgdmVyc2lvbi4gTm8gd2FycmFudHkgaXMgZ2l2ZW4gb3IgaW1wbGllZC4nO3JldHVybiAkY29wcGVybWluZTsiO30=', true);

function get_microtime() {return microtime(true);}

# Function which removes \015\012 which causes linebreaks in SMTP email
function removecrlf($str) {
	return strtr($str, "\015\012", ' ');
}
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
	$backtrace = debug_backtrace();
	trigger_error("DEPRECATED call to blocks_list() by {$backtrace[0]['file']} on line {$backtrace[0]['line']}.", E_USER_WARNING);
	global $Blocks;
	return $Blocks->list_all($module);
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
if (CPG_DEBUG) { include(CORE_PATH.'removed.php'); }
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
	return Net::ip2long($ip);
}

function decode_ip($ip) {
	$backtrace = debug_backtrace();
	trigger_error("DEPRECATED call to ip2long32() by {$backtrace[0]['file']} on line {$backtrace[0]['line']}.", E_USER_WARNING);
	return Net::decode_ip($ip);
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
		global $pagetitle, $showblocks, $home, $modheader, $mainindex, $CPG_SESS;
		$home = $showblocks = Blocks::$showblocks = 0;
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
		require_once(BASEDIR.'includes/cpg_page.php');
		$errorpage = cpg_header($title);
		$errorpage .= "<center>$message</center>";
		if (is_admin() || (defined('CPG_DEBUG') && CPG_DEBUG)) {
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
