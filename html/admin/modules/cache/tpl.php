<?php
/*********************************************
	CPG Dragonfly™ CMS
	********************************************
	Copyright © 2004 - 2007 by CPG-Nuke Dev Team
	http://dragonflycms.org

	Dragonfly is released under the terms and conditions
	of the GNU GPL version 2 or any later version

	$Source: /cvs/html/admin/modules/cache/tpl.php,v $
	$Revision: 10.0 $
	$Author: djmaze $
	$Date: 2010/11/05 00:56:56 $
**********************************************/
if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin('cache')) { die('Access Denied'); }

//$keys = array_keys($_POST);
//if (!preg_match('#^[a-z]+$#', $keys[0])) { cpg_error(); }
//if (function_exists("df_$keys[1]_cache")) { $func = "df_$keys[1]_cache"; $func(); }
//else { cpg_error('Unknown function to run'); }

function df_browse_cache() {
	global $db, $prefix /*, $Module*/;
	$cached = array('config' => array(), 'themes' => array(), 'modules' => array());
	$dir = str_replace(BASEDIR.'cache/', '', glob(BASEDIR.'cache/*.{php,inc}', GLOB_BRACE));

	# get all configuration files
	# core files should have its own formatting
	# all cached files should be lower case
	# modules configuration files should go under the module files list, not under core config list
	$pattern = array('/^(a_|bb_|config_|installer)([a-z\-_]+[^\.])\.php/i');
	$replace = array('$1$2');
	$tmp = preg_replace($pattern, $replace, preg_grep('/^(a_|bb_|config_|installer_)/i', $dir));
	foreach ($tmp as $key => $file) {
		$GLOBALS['cpgtpl']->assign_block_vars('config', array('S_FILE' => $file));
	}

	$tmp = array_unique(preg_replace('/^tpl_([a-z0-9\-_]+)_[a-z0-9\-_].*+/i', '$1', preg_grep('/^tpl_/i', $dir)));
	foreach ($tmp as $key => $file) {
		$GLOBALS['cpgtpl']->assign_block_vars('themes', array('S_FILE' => $file));
	}

//$Module = new Module;
//$modules = implode('|', arrayRebuild($Module->list, array('title')));
	$modules = array();
	$result = $db->sql_query('SELECT title FROM '.$prefix.'_modules');
	while ($row = $db->sql_fetchrow($result, SQL_NUM)) {
		$modules[] = $row[0];
	}
	$db->free_result($result);
	$modules = implode('|', $modules);
	$tmp = array_unique(preg_replace('/^('.$modules.')_.*/i', '$1', preg_grep('/^('.$modules.')/i', $dir)));
	foreach ($tmp as $key => $file) {
		$GLOBALS['cpgtpl']->assign_block_vars('modules', array('S_FILE' => $file, 'U_DEL' => URL::admin("cache&amp;module=$file&amp;delete")));
	}
	unset($dir, $modules, $tmp);
}

function df_clear_cache() {
	$files = glob(BASEDIR.'cache/*.{php,inc}', GLOB_BRACE);
	$msg = array('Cache Manager', 'Cache cleared');
	foreach ( $files as $file ) {
		if (is_file($file) && !unlink($file)) { $msg[] = str_replace(BASEDIR.'/cache/', '', $file). ' not been deleted'; }
	}
	// unlink() clears the cache automatically
	$title = array_shift($msg);
	$msg = implode('<br />', $msg);
	cpg_error($msg, $title, URL::admin('cache'));
}

function df_show_cache() {
	if (!preg_match('#^[a-z0-9\-_]+$#i', $GLOBALS['AdminCache']->file) || !is_file(BASEDIR. 'cache/'. $GLOBALS['AdminCache']->file. '.php')) { return; }
	ob_start();
	highlight_string(file_get_contents(BASEDIR. 'cache/'. $GLOBALS['AdminCache']->file. '.php'));
	$GLOBALS['cpgtpl']->assign_var('S_FILE_CONTENT', ob_get_clean());
}

function df_delete_cache() {
	if (preg_match('#^(a_|bb_|config_)[a-z]+$#i', $GLOBALS['AdminCache']->file) && unlink(BASEDIR. 'cache/'. $GLOBALS['AdminCache']->file. '.php')) {
		cpg_error($GLOBALS['AdminCache']->file. '.php gone.', _DELETE, URL::admin('cache'));
	}
	else if ($tpl = glob(BASEDIR.'cache/tpl_'.$GLOBALS['AdminCache']->file.'*.html.inc')) {
		while ($file = array_shift($tpl)) {
			if (!unlink($file)) { trigger_error(str_replace(BASEDIR. 'cache/', '', $file). ' couldn\'t be deleted.', E_USER_WARNING); }
		}
	}
	else if ($tpl = glob(BASEDIR.'cache/'.$GLOBALS['AdminCache']->file.'*.php')) {
		while ($file = array_shift($tpl)) {
			if (!unlink($file)) { trigger_error(str_replace(BASEDIR. 'cache/', '', $file). ' couldn\'t be deleted.', E_USER_WARNING); }
		}
	}
	global $pagetitle;
	cpg_error(_TASK_COMPLETED, $pagetitle, URL::admin('cache'));
}