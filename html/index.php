<?php
/*
  $Id$ 
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | index.php - NexOS main entrance file                              |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      |
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |
  +-------------------------------------------------------------------+
  | CPG Dragonfly™ CMS                                                |
  | Copyright © 2004 - 2005 by CPG-Nuke Dev Team                      |
  | http://www.dragonflycms.com                                       |
  | Dragonfly is released under the terms and conditions of the GNU   |
  | GPL version 2 or any later version                                |
  +-------------------------------------------------------------------+
   Last modification notes:
    $Author$
    $Date$
    $Rev$
*/

if (!file_exists('./includes/config.php')) {
 header('Location: install/install.php');
 die;
 }

$start_mem = function_exists('memory_get_usage') ? memory_get_usage() : 0;
$_SERVER['REQUEST_TIME'] = microtime(true);
require_once('includes/cmsinit.inc');

$file = isset($_POST['file']) ? $_POST['file'] : (isset($_GET['file']) ? $_GET['file'] : 'index');
if (!preg_match('#^([a-zA-Z0-9_\-]+)$#', $file)) { cpg_error(sprintf(_ERROR_BAD_CHAR, strtolower(_BLOCKFILE2)), _SEC_ERROR); }

if (isset($_GET['name']) || isset($_POST['name'])) {
	$module_name = strtolower(isset($_POST['name']) ? $_POST['name'] : $_GET['name']);
	$home = 0;
	if (!preg_match('#^([a-z0-9_\-]+)$#', $module_name)) {
		cpg_error(sprintf(_ERROR_BAD_CHAR, strtolower(_MODULES)), _SEC_ERROR);
	}
	if ($SESS->new) update_referrer();
	if ($module_name == 'credits' || $module_name == 'privacy_policy') {
		require(CORE_PATH.'info.inc');
	} else if ($module_name == 'smilies') {
		require_once(CORE_PATH.'nbbcode.php');
		echo smilies_table('window', $_GET['field'], $_GET['form']);
		exit;
	}
	$module = $db->sql_ufetchrow('SELECT mid, title, custom_title, active, view, blocks, version FROM '.$prefix."_modules WHERE LOWER(title)='$module_name'", SQL_ASSOC);
	$modpath = isset($module['title']) ? 'modules/'.$module['title'].'/'.$file.'.php' : 'modules/'.(isset($_POST['name']) ? $_POST['name'] : $_GET['name']).'/'.$file.'.php';
	if (!file_exists($modpath)) {
		cpg_error(sprintf(_MODULENOEXIST, (is_admin() ? $modpath : '')), 404);
	}
	$module_name = $module['title'];
	require('includes/meta.php');
	if ($module_name == 'Your_Account' || $module_name == $MAIN_CFG['global']['main_module']) {
		$module['active'] = true;
		$view = 0;
	} else {
		$view = $module['view'];
	}
	if ($module['active'] || !$CLASS['member']->demo && (can_admin() || can_admin($module_name))) {
		get_lang($module_name, -1);
		$showblocks = $module['blocks'];
		if ($module['custom_title'] != '') {
			$module_title = /*defined($module['custom_title']) ? constant($module['custom_title']) :*/ $module['custom_title'];
		} else {
			$module_title = defined('_'.$module_name.'LANG') ? constant('_'.$module_name.'LANG') : str_replace('_', ' ', $module_name);
		}
		$module_version = $module['version'];
		$module_id = $module['mid'];
		unset($module, $error);
		if ($view > 0 && !is_admin()) {
			if ($view == 1 && !is_user()) {
				$error = _MODULEUSERS.($MAIN_CFG['member']['allowuserreg'] ? _MODULEUSERS2 : '' );
			} elseif ($view == 2) {
				$error = _MODULESADMINS;
			} elseif ($view > 3 && !in_group($view-3)) {
				list($groupName) = $db->sql_ufetchrow('SELECT group_name FROM '.$prefix.'_bbgroups WHERE group_id='.($view-3));
				$error = '<i>'.$groupName.'</i> '._MODULESGROUPS;
			}
		}
		if (isset($error)) {
			cpg_error('<br /><br /><strong>'._RESTRICTEDAREA.'</strong><br /><br />'.$error, 401);
		} else {
			include($modpath);
		}
	} else {
		cpg_error('<br /><br />'._MODULENOTACTIVE, 503);
	}
} else {
	// index.php
	if ($SESS->new) update_referrer();
	$module_name = $MAIN_CFG['global']['main_module'];
	$home = 1;
	$module = $db->sql_ufetchrow('SELECT mid, blocks, version FROM '.$prefix.'_modules WHERE title=\''.$module_name.'\'', SQL_ASSOC);
	$modpath = 'modules/'.$module_name.'/'.$file.'.php';
	if (file_exists($modpath)) {
		get_lang($module_name, -1);
		$showblocks = $module['blocks'];
		$module_title = '';
		$module_version = $module['version'];
		$module_id = $module['mid'];
		unset($module, $error);
		require('includes/meta.php');
		require($modpath);
	} else {
		cpg_error((is_admin() ? '<strong>'._HOMEPROBLEM.'</strong><br /><br />[ <a href="'.URL::admin('modules').'">'._ADDAHOME.'</a> ]' : _HOMEPROBLEMUSER), '');
	}
}
function update_referrer() {
	global $db, $prefix, $MAIN_CFG;
	if ($MAIN_CFG['global']['httpref'] && isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
		$referer = Fix_Quotes($_SERVER['HTTP_REFERER']);
		$httprefmax = (int)$MAIN_CFG['global']['httprefmax'];
		if (strpos($referer, '://') && !stripos($referer, $MAIN_CFG['server']['domain'])) {
			if (!$db->sql_query('UPDATE '.$prefix.'_referer SET lasttime='.time().' WHERE url=\''.htmlprepare($referer).'\'', true) || !$db->sql_affectedrows()) {
				$db->sql_query('INSERT INTO '.$prefix."_referer (url, lasttime) VALUES ('".htmlprepare($referer)."', ".time().")", true);
			}
			$numrows = $db->sql_count($prefix.'_referer');
			if ($numrows >= $httprefmax) {
				$db->sql_query('DELETE FROM '.$prefix.'_referer ORDER BY lasttime LIMIT '.($numrows-($httprefmax/2)));
			}
		}
	}
}
if (defined('HEADER_OPEN')) { require_once('footer.php'); }
