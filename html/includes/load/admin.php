<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/load/admin.php,v $
  $Revision: 1.3 $
  $Author: nanocaiordo $
  $Date: 2011/04/18 05:26:05 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }
if (php_sapi_name() == 'cli' || empty($_SERVER['PHP_SELF'])) { die('This script cannot be accessed through the command line'); }
$start_mem = function_exists('memory_get_usage') ? memory_get_usage() : 0;
require('includes/cmsinit.inc');
header('Last-Modified: '.date('D, d M Y H:i:s', time()).' GMT');
header('X-Content-Type-Options: nosniff');
header('Expires: 0'); // should be moved to header.php
header('P3P: CP="'.$MAIN_CFG['header']['P3P'].'"'); # standard privacy header change to yours

/******************************************************************************
  Load the theme template system
*******************************************************************************/
$ThemeSel = get_theme();
# Load template handler
$template =& $cpgtpl;
$showblocks = 1;
$pagetitle = $modheader = '';
//$SESS->init_info();
JS::add('includes/javascript/poodle.js');
if ($MAIN_CFG['global']['admin_help']) {
	JS::add('includes/javascript/infobox.js');
}

// if (empty($_SERVER['HTTPS']) && $op != 'logout') { URL::redirect('https://'.$MAIN_CFG['server']['domain'].URL::uri()); }
$CPG_SESS['theme'] = 'default';
global $pagetitle, $SESS;
if (($MAIN_CFG['global']['maintenance'] && !is_admin()) || isset($_GET['hideallblocks'])) { $showblocks = 0; }

$pagetitle .= _ADMINMENU;

if (!is_admin()) {
	list($the_first) = $db->sql_count($prefix.'_admins');
	if ($the_first < 1) {
		if (!isset($_POST['name'])) {
			require('header.php');
			OpenTable();
			echo open_form($adminindex, false, _NOADMINYET).'
			<label class="set" for="name">'._NICKNAME.'</label><input class="set" type="text" name="name" id="name" size="30" maxlength="25" /><br />
			<label class="set" for="email">'._EMAIL.'</label><input class="set" type="text" name="email" id="email" size="30" maxlength="255" /><br />
			<label class="set" for="password">'._PASSWORD.'</label><input class="set" type="password" name="pwd" id="pwd" size="20" maxlength="40" /><br />
			<label class="set" for="user_new">'._CREATEUSERDATA.'</label>'.yesno_option('user_new', 1).'<br />
			<input type="hidden" name="fop" value="create_first" />
			<div style="text-align:center;"><input type="submit" class="sub" value="'._SUBMIT.'" /></div>'.
			close_form();
			CloseTable();
			require('footer.php');
		} else if (isset($_POST['fop']) && $_POST['fop'] == 'create_first') {
			if (preg_match('#^[0-9]#', $_POST['pwd']) && preg_match('#[a-z]#', $_POST['pwd']) && preg_match('#[A-Z]#', $_POST['pwd'])) {
				$name = Fix_Quotes($_POST['name']);
				$email = Fix_Quotes($_POST['email']);
				$pwd = md5($_POST['pwd']);
				$db->sql_query("INSERT INTO ".$prefix."_admins (aid, email, pwd, radminsuper) VALUES ('$name', '$email', '$pwd', '1')");
				if ($_POST['user_new'] == 1) {
					$db->sql_query('INSERT INTO '.$user_prefix."_users (user_id, username, user_email, user_avatar, user_regdate, user_password, theme, commentmax, user_level, user_lang, user_dateformat)
					VALUES (DEFAULT,'$name','$email','".$MAIN_CFG['avatar']['default']."','".time()."','$pwd','{$MAIN_CFG['global']['Default_Theme']}','4096', '2', 'english','D M d, Y g:i a')");
				}
				login();
			} else {
				cpg_error(_PASSWORD_MALFORMED);
			}
		}
		exit;
	}
}
function login() {
	global $MAIN_CFG, $pagetitle, $adminindex;
	$pagetitle .= ' '._BC_DELIM.' '._ADMINLOGIN;
	require('header.php');
	OpenTable();
	echo open_form($adminindex, 'login', _ADMINLOGIN).'
	<label for="alogin" class="ulog">'._ADMINID.'</label><input class="set" type="text" name="alogin" id="alogin" size="20" maxlength="25" /><br />
	<label for="pwd" class="ulog">'._PASSWORD.'</label><input class="set" type="password" name="pwd" id="pwd" size="20" maxlength="40" /><br />';
	if ($MAIN_CFG['global']['sec_code'] & 1) {
		echo '<label for="gfx_check" class="ulog">'._SECURITYCODE.':</label>'.generate_secimg(7).'<br />
		<label for="gfx_check" class="ulog">'._TYPESECCODE.':</label><input class="set" type="text" name="gfx_check" id="gfx_check" size="10" maxlength="8" /><br />';
	}
	echo '<label for="persistent" class="ulog">'._LOGIN_REMEMBERME.'</label><input type="checkbox" name="persistent" id="persistent" value="1" /><br />
	<div style="text-align:center;"><input type="submit" class="sub" value="'._LOGIN.'" /></div>'.
	close_form();
	echo '<script type="text/javascript">document.getElementById("alogin").focus();</script>';
	CloseTable();
	require('footer.php');
}
/***********************************************************************************
 Echo the big graphical menu, function called by the admin modules
	$cat: Which menucategory to show, default = all
************************************************************************************/
function GraphicAdmin($cat='all') {
	global $CLASS, $cpgtpl;
	require_once(CORE_PATH.'classes/cpg_adminmenu.php');
	if ($CLASS['adminmenu']->display($cat, 'graph')) {
		$cpgtpl->set_filenames(array('body' => 'admin/index_body.html'));
		$cpgtpl->display('body');
	}
}

$op = (!empty($_GET['op']) ? $_GET['op'] : (isset($_POST['op']) ? $_POST['op'] : 'index'));
if ($MAIN_CFG['global']['admingraphic'] >= '4' || strtolower($op) == 'forums') {
	JS::add('includes/javascript/JSCookMenu.js');
	JS::add('themes/default/javascript/cookmenu.js');
	CSS::add('themes/default/style/cookmenu.css');
}
global $CPG_SESS;
if ($op == 'logout') {
	unset($CPG_SESS['admin']);
	$redir = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $mainindex;
	cpg_error(_YOUARELOGGEDOUT, _ADMINMENU_LOGOUT, $redir);
}
else if ($CLASS['member']->admin_id) {
	if (!preg_match('#^([a-zA-Z0-9_\-]+)$#', $op)) { cpg_error(sprintf(_ERROR_BAD_CHAR, strtolower(_ADMIN)), _SEC_ERROR); }
		$Module = new Module('Admin');
		Blocks::$showblocks = $Module->sides;
		$Blocks = new Blocks(-1);
		require_once(CORE_PATH.'classes/cpg_adminmenu.php');
		$CLASS['adminmenu']->display();
	if (file_exists('modules/'.$op.'/admin/index.inc')) {
		$file = (isset($_GET['file']) ? $_GET['file'] : (isset($_POST['file']) ? $_POST['file'] : 'index'));
		if (!preg_match('#^([a-zA-Z0-9_\-]+)$#', $file)) { cpg_error(sprintf(_ERROR_BAD_CHAR, strtolower(_BLOCKFILE2)), _SEC_ERROR); }
		$module_name = $op;
		get_lang($op, -1);
		include('modules/'.$op.'/admin/'.$file.'.inc');
		if (defined('HEADER_OPEN')) { require_once('footer.php'); }
		else cpg_error('The requested file, modules/'.$op.'/admin/'.$file.'.inc, didn\'t output data correctly');
	} elseif (file_exists('admin/modules/'.$op.'.php')) {
		$module_name = $op;
		get_lang($op, -1);
		include('admin/modules/'.$op.'.php');
		if (defined('HEADER_OPEN')) { require_once('footer.php'); }
		else cpg_error('The requested file, admin/modules/'.$op.'.php, didn\'t output data correctly');
	} elseif (is_dir('admin/case')) {
		$casedir = dir('admin/case');
		while ($func=$casedir->read()) {
			if (substr($func, 0, 5) == 'case.') {
				include($casedir->path."/$func");
			}
		}
		closedir($casedir->handle);
	}
	cpg_error(sprintf(_MODULENOEXIST, ''), 404);
}
else {
	// WebTV hack
	if (!strstr($_SERVER['HTTP_USER_AGENT'], 'WebTV')) {
		header('HTTP/1.0 403 Forbidden');
	}
	login();
}
