<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/modules/Your_Account/index.php,v $
  $Revision: 9.31 $
  $Author: nanocaiordo $
  $Date: 2008/08/26 11:39:49 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }
$pagetitle .= _Your_AccountLANG;
$filepath = 'modules/'.basename(dirname(__FILE__));
require_once("$filepath/functions.php");
extract($MAIN_CFG['member'], EXTR_OVERWRITE | EXTR_REFS);
$op = (isset($_POST['op']) && !empty($_POST['op'])) ? $_POST['op'] : ((isset($_GET['op']) && $_GET['op']!='') ? $_GET['op'] : '');

function account_login($error='') {
	if (is_user()) { return; }
	global $CPG_SESS, $MAIN_CFG, $cpgtpl, $pagetitle;
	$pagetitle .= ' '._BC_DELIM.' '._USERLOGIN;
	require_once('header.php');
	if (isset($_GET['redirect']) && !isset($CPG_SESS['user']['redirect'])) { $CPG_SESS['user']['redirect'] = $CPG_SESS['user']['uri']; }
	$cpgtpl->assign_vars(array(
		'U_LOGIN' => (isset($CPG_SESS['user']['redirect']) ? $CPG_SESS['user']['redirect'] : URL::index()),
		'U_REGISTER' => ($MAIN_CFG['member']['allowuserreg'] ? URL::index('&amp;file=register') : false),
		'U_LOSTPASS' => URL::index('&amp;op=pass_lost'),
		'S_LOGIN_ERROR' => $error,
		'S_SEC_IMG' => ($MAIN_CFG['global']['sec_code'] & 2) ? generate_secimg() : false,
	));
	$cpgtpl->set_filenames(array('body' => 'your_account/login.html'));
	$cpgtpl->display('body');
}

function pass_lost() {
	global $cpgtpl, $pagetitle;
	$pagetitle .= ' '._BC_DELIM.' '._PASSWORDLOST;
	require_once('header.php');
	$cpgtpl->assign_var('U_SUBMIT', URL::index());
	$cpgtpl->set_filenames(array('body' => 'your_account/pass_lost.html'));
	$cpgtpl->display('body');
}

function mail_password() {
	global $user_prefix, $db, $pagetitle, $userinfo;
	if ((!isset($_POST['lost_username']) || empty($_POST['lost_username'])) && (!isset($_POST['lost_email']) || empty($_POST['lost_email']))) { cpg_error('Please enter either a username or email address'); }
	if (isset($_POST['lost_username']) && (!isset($_POST['lost_email']) || empty($_POST['lost_email']))) {
		$username = Fix_Quotes($_POST['lost_username']);
		if (empty($username) || strtolower($username) == 'anonymous') { cpg_error('Invalid username'); }
		$sql = "username='$username'";
	} else {
		$sql = "user_email='".Fix_Quotes($_POST['lost_email'])."'";
	}
	$result = $db->sql_query('SELECT username, user_email, user_password, user_level FROM '.$user_prefix.'_users WHERE '.$sql);
	$pagetitle .= ' '._BC_DELIM.' '._PASSWORDLOST;
	if ($db->sql_numrows($result) != 1) {
		cpg_error(_SORRYNOUSERINFO);
	} else {
		$row = $db->sql_fetchrow($result);
		$username = $row['username'];
		if ($row['user_level'] > 0) {
			global $sitename, $MAIN_CFG;
			$code = $_POST['code'];
			$areyou = substr($row['user_password'], 0, 10);
			$from = 'noreply@'.str_replace('www.', '', $MAIN_CFG['server']['domain']);
			if ($areyou == $code) {
				$newpass = make_pass(8, 5);
				$message = _USERACCOUNT." '$username' "._AT." $sitename "._HASTHISEMAIL."  "._AWEBUSERFROM." ".decode_ip($userinfo["user_ip"])." "._HASREQUESTED."\n\n"._YOURNEWPASSWORD." $newpass\n\n "._YOUCANCHANGE." ".URL::index('Your_Account', true, true)."\n\n"._IFYOUDIDNOTASK;
				$subject = _USERPASSWORD4." $username";
				if (!send_mail($mailer_message,$message,0,$subject,$row['user_email'],$username,$from)) {
					cpg_error($mailer_message);
				}
				// Next step: add the new password to the database
				$cryptpass = md5($newpass);
				$query = "UPDATE ".$user_prefix."_users SET user_password='$cryptpass' WHERE username='$username'";
				if (!$db->sql_query($query)) { cpg_error(_UPDATEFAILED); }
				cpg_error(_PASSWORD4." $username "._MAILED, _TB_INFO, URL::index());
				// If no code, send it
			} else {
				$message = _USERACCOUNT." '$username' "._AT." $sitename "._HASTHISEMAIL." "._AWEBUSERFROM." ".decode_ip($userinfo["user_ip"])." "._CODEREQUESTED."\n\n"._YOURCODEIS." $areyou \n\n"._WITHTHISCODE." ".URL::index('&op=pass_lost', true, true)."\n"._IFYOUDIDNOTASK2;
				$subject = _CODEFOR." $username";
				if (!send_mail($mailer_message,$message,0,$subject,$row['user_email'],$username,$from)) {
					cpg_error($mailer_message);
				}
				cpg_error(_CODEFOR." $username "._MAILED, _TB_INFO, URL::index('&op=pass_lost'));
			}
		} elseif ($row['user_level'] == 0) {
			cpg_error(_ACCSUSPENDED);
		} elseif ($row['user_level'] == -1) {
			cpg_error(_ACCDELETED);
		}
	}
}

function date_short($raw_date) {
	if ($raw_date == '0000-00-00' || empty($raw_date)) return '';
	$year = substr($raw_date, 0, 4);
	$month = (int)substr($raw_date, 5, 2);
	$day = (int)substr($raw_date, 8, 2);
	if (date('Y', mktime(0, 0, 0, $month, $day, $year)) == $year) {
		return date('m/d/Y', mktime(0, 0, 0, $month, $day, $year));
	} else {
		return str_replace('2037', $year, date('m/d/Y', mktime(0, 0, 0, $month, $day, 2037)));
	}
}

function date_raw($date) {
	return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
}

function edithome() {
	global $userinfo, $pagetitle, $MAIN_CFG, $Blocks;
	$block = array(
		'bid' => 10000,
		'view' => 1,
		'side' => 'l',
		'title' => _TB_BLOCK,
		'content' => member_block()
	);
	$Blocks->custom($block);
	$block = NULL;
	$pagetitle .= ' '._BC_DELIM.' '._MA_HOMECONFIG;
	require_once('header.php');
	require_once(CORE_PATH.'nbbcode.php');
	$cpgtpl->assign_vars(array(
		'U_SAVEHOME'  => URL::index('&amp;op=savehome'),
		'S_USER_NEWS' => ($MAIN_CFG['member']['user_news'] ? select_option('storynum', $userinfo['storynum'], array('4','6','8','10','12','14','16','18','20')) : false),
		'S_STORY_NUM' => $MAIN_CFG['global']['storyhome'],
		'S_UBLOCKON'  => yesno_option('ublockon', $userinfo['ublockon']),
		'S_CONT_SIZE' => sprintf(_M_CHARS, 255),
		'S_BBCODETBL' => bbcode_table('ublock', 'edit_home', 1),
		'S_UBLOCK'    => $userinfo['ublock'],
	));
	$cpgtpl->set_filenames(array('body' => 'your_account/edit_home.html'));
	$cpgtpl->display('body');
}

function editcomm() {
	global $userinfo, $pagetitle, $Blocks;
	$block = array(
		'bid' => 10000,
		'view' => 1,
		'side' => 'l',
		'title' => _TB_BLOCK,
		'content' => member_block()
	);
	$Blocks->custom($block);
	$block = NULL;
	$pagetitle .= ' '._BC_DELIM.' '._COMMENTSCONFIG;
	require_once('header.php');
	$cpgtpl->assign_vars(array(
		'U_SAVECOMM'  => URL::index('&amp;op=savecomm'),
		'S_UMODE' => select_box('umode', $userinfo['umode'], array('nocomments'=>_NOCOMMENTS,'nested'=>_NESTED,'flat'=>_FLAT,'thread'=>_THREAD)),
		'S_UORDER' => select_box('uorder', $userinfo['uorder'], array('0'=>_OLDEST,'1'=>_NEWEST,'2'=>_HIGHEST)),
		'S_THOLD' => select_box('thold', $userinfo['thold'], array('-1'=>_UNCUT,'0'=>_EVERYTHING,'1'=>_FILTERMOSTANON,'2'=>_USCORE.' +2','3'=>_USCORE.' +3','4'=>_USCORE.' +4','5'=>_USCORE.' +5')),
		'S_NOSCORE' => yesno_option('noscore', $userinfo['noscore']),
		'S_COMMENTMAX'  => $userinfo['commentmax'],
	));
	$cpgtpl->set_handle('body', 'your_account/edit_comm.html');
	$cpgtpl->display('body');
}

function my_headlines() {
	if (!is_user()) { return; }
	global $prefix, $db;
	list($url) = $db->sql_ufetchrow("SELECT headlinesurl FROM ".$prefix."_headlines WHERE hid='".intval($_POST['hid'])."'", SQL_NUM);
	$content = '<div class="content">';
	if (!($content = rss_content($url))) { $content = _RSSPROBLEM; }
	echo $content.'</div>';
}

if (isset($_GET['error'])) {
	if ($_GET['error'] == 1) {
		account_login('Our records do not indicate an existing user named <i>'.htmlspecialchars(base64_decode($_GET['uname'])).'</i>');
	} else {
		account_login(_LOGININCOR);
	}
}
elseif (isset($_GET['profile']) && !empty($_GET['profile'])) {
	require_once("$filepath/userinfo.php");
	userinfo($_GET['profile']);
}
elseif ($op == 'userinfo' && isset($_GET['username']) && !empty($_GET['username'])) {
	require_once("$filepath/userinfo.php");
	userinfo($_GET['username']);
}
elseif ($op == 'logout') {
	$pagetitle .= ' '._BC_DELIM.' '._LOGOUT;
	$redir = (isset($_GET['redirect']) ? $CPG_SESS['user']['uri'] : $mainindex);
	cpg_error(_YOUARELOGGEDOUT, _YOUARELOGGEDOUT, $redir);
}
elseif (is_user()) {
	if (isset($_POST['avatargallery']) || isset($_GET['avatargallery'])) {
		require_once("$filepath/avatars.php");
		display_avatar_gallery($userinfo);
	} elseif (isset($_GET['edit'])) {
		require_once("$filepath/edit_profile.php");
		edituser($userinfo);
	} elseif (isset($_POST['save'])) {
		require_once("$filepath/edit_profile.php");
		saveuser($userinfo);
	} else switch($op) {
		case 'edithome':  edithome(); break;
		case 'editcomm':  editcomm(); break;
		case 'savehome':
			$db->sql_query('UPDATE '.$user_prefix.'_users SET storynum='.intval($_POST['storynum']).', ublockon='.intval($_POST['ublockon']).', ublock=\''.Fix_Quotes($_POST['ublock']).'\' WHERE user_id='.$userinfo['user_id']);
			$_SESSION['CPG_USER'] = false;
			unset($_SESSION['CPG_USER']);
			URL::redirect(URL::index());
			break;
		case 'savecomm':
			$db->sql_query("UPDATE ".$user_prefix."_users SET umode='".Fix_Quotes($_POST['umode'])."', uorder='".intval($_POST['uorder'])."', thold='".intval($_POST['thold'])."', noscore='".(isset($_POST['noscore']) ? $_POST['noscore'] : 0)."', commentmax='".intval($_POST['commentmax'])."' WHERE user_id='".$userinfo['user_id']."'");
			$_SESSION['CPG_USER'] = false;
			unset($_SESSION['CPG_USER']);
			URL::redirect(URL::index());
			break;
		case 'my_headlines': my_headlines(); break;
		default:
			require_once("$filepath/userinfo.php");
			userinfo(is_user());
			break;
	}
} else {
	switch($op) {
		case 'mailpasswd': mail_password(); break;
		case 'pass_lost':  pass_lost();	 break;
		default: account_login(); break;
	}
}
