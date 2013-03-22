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
  Dragonfly CMS, Copyright (c) 2004 by CPGNuke Dev Team
  http://dragonflycms.org
  Released under GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/load/name.php,v $
  $Revision: 1.3 $
  $Author: nanocaiordo $
  $Date: 2011/04/19 06:40:16 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }

# user configs, temporary here
# force HTTPS when $Module->https is active
define('HTTPS_REQUIRED', false);

require('includes/cmsinit.inc');
//foreach (HOOKS::get('loader.name', 'cache')) {}
header('Last-Modified: '.date('D, d M Y H:i:s', time()).' GMT');
header('X-Content-Type-Options: nosniff');
header('Expires: 0'); // should be moved to header.php
header('P3P: CP="'.$MAIN_CFG['header']['P3P'].'"'); # standard privacy header change to yours

if ($SESS->new && $MAIN_CFG['global']['httpref'] && isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
	$referer = Fix_Quotes($_SERVER['HTTP_REFERER']);
	if (strpos($referer, '://') && !stripos($referer, $MAIN_CFG['server']['domain'])) {
		if (!$db->sql_query('UPDATE '.$prefix.'_referer SET lasttime='.time().' WHERE url=\''.htmlprepare($referer).'\'', true) || !$db->sql_affectedrows()) {
			$db->sql_query('INSERT INTO '.$prefix."_referer (url, lasttime) VALUES ('".htmlprepare($referer)."', ".time().")", true);
		}
		$numrows = $db->sql_count($prefix.'_referer');
		$httprefmax = (int)$MAIN_CFG['global']['httprefmax'];
		if ($numrows >= $httprefmax) {
			$db->sql_query('DELETE FROM '.$prefix.'_referer ORDER BY lasttime LIMIT '.($numrows-($httprefmax/2)));
		}
	}
}

/* acp insert new virtual modules, chroot example.php to /includes/load */
//Module::$custom[-2] = array('mid' => -2, 'name' => 'credits', 'file' => CORE_PATH.'info.inc', 'view' => 0);
//Module::$custom[-3] = array('mid' => -3, 'name' => 'privacy_policy', 'file' => CORE_PATH.'info.inc', 'view' => 0);
//Module::$custom[-4] = array('mid' => -4, 'name' => 'smilies', 'file' => CORE_PATH.'nbbcode.php', 'view' => 1);
//Module::$custom[-5] = array('mid' => -5, 'name' => 'user_search', 'file' => CORE_PATH.'user_search.php', 'view' => 1);
$name = !empty($_POST['name']) ? $_POST['name'] : ( !empty($_GET['name']) ? $_GET['name'] : $MAIN_CFG['global']['main_module']);
if (!preg_match('#^[a-zA-Z0-9_\-]+$#', $name)) {
	trigger_error(sprintf(_ERROR_BAD_CHAR, strtolower(_MODULES)), E_USER_ERROR);
}
$file = isset($_POST['file']) ? $_POST['file'] : (isset($_GET['file']) ? $_GET['file'] : 'index');
if (!preg_match('#^[a-zA-Z0-9_\-]+$#', $file)) {
	trigger_error(sprintf(_ERROR_BAD_CHAR, strtolower(_BLOCKFILE2)), E_USER_ERROR);
}

$Module = new Module($name);
if (!is_file(BASEDIR. "modules/{$Module->name}/{$file}.php")) {
	trigger_error("Failed: is_file(modules/{$Module->name}/{$file}.php)", E_USER_WARNING);
	trigger_error(sprintf(_MODULENOEXIST, ''), E_USER_ERROR);
}
if (HTTPS_REQUIRED && 'https' !== DOMAIN_PROTOCOL && $Module->https) {
	URL::redirect('https://'. DOMAIN_NAME. URL::uri());
}
/* class setup */
Module::$file = $file; // optional
Module::$path = BASEDIR. "modules/{$Module->path_name}/"; // optional
Module::$is_home = $Module->name === $MAIN_CFG['global']['main_module'];
/* finished instructing class */

# check for permissions
$Module->allow();
# get module custom language
get_lang($Module->name, -1);
# setup blocks, showblocks may be depreciated in the near future
Blocks::$showblocks = $Module->sides;

/* compatibility */
$home = Module::$is_home;
$module_name = $Module->name;
$showblocks = $Module->sides;
$module_title = $Module->title;
/* end compatibility */

JS::add('includes/javascript/poodle.js');
if ($MAIN_CFG['global']['admin_help']) {
	JS::add('includes/javascript/infobox.js');
}
//MetaTag::add(Module::$metatag); // must include Page data already
require('includes/meta.php');
require(Module::$path. Module::$file. '.php');
if ($Module->name === 'smilies') {
	echo smilies_table('window', $_GET['field'], $_GET['form']);
	exit;
}

if (defined('HEADER_OPEN')) { require_once('footer.php'); }
