<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 by Myndworx Asylum                          |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |  
  +-------------------------------------------------------------------+
  | users_cfg.php - NexOS Administration Backend file                 |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org                                  |  
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |  
  +-------------------------------------------------------------------+
  | CPG Dragonfly™ CMS                                                |
  | Copyright © 2004 - 2005 by CPG-Nuke Dev Team                      |
  | http://www.dragonflycms.com                                       |
  | Dragonfly is released under the terms and conditions of the GNU   |
  | GPL version 2 or any later version                                |  
  +-------------------------------------------------------------------+
*/

if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin('settings')) { cpg_error('Access Denied'); }
get_lang('Your_Account', __FILE__, __LINE__);
require_once(CORE_PATH.'nbbcode.php');

$mode = isset($_GET['mode']) ? $_GET['mode'] : '';
if (isset($_POST['addfield'])) $mode = 'addfield';
$save = (isset($_POST['save']) && $mode != 'addfield') ? $_POST['save'] : '';

if ($save == 'member') {
	foreach ($MAIN_CFG['member'] AS $key => $val) {
		if (isset($_POST[$key]))
			$db->sql_query('UPDATE '.$prefix."_config_custom SET cfg_value='".Fix_Quotes($_POST[$key])."' WHERE cfg_field='$key' AND cfg_name='member'");
	}
	Cache::array_delete('MAIN_CFG');
	URL::redirect(URL::admin('users_cfg'));
}
else if ($save == 'avatar') {
	foreach ($MAIN_CFG['avatar'] AS $key => $val) {
		if (isset($_POST[$key])) {
			$db->sql_query('UPDATE '.$prefix."_config_custom SET cfg_value='".Fix_Quotes($_POST[$key])."' WHERE cfg_field='$key' AND cfg_name='avatar'");
		}
	}
	Cache::array_delete('MAIN_CFG');
	URL::redirect(URL::admin('users_cfg&mode=avatar'));
}
else if ($save == 'add_field') {
	$fieldname = Fix_Quotes(str_replace(' ','_', $_POST['fieldname']), 1);
	if (!preg_match("#^[_0-9a-z-]+$#",$fieldname)) {
		cpg_error("Fieldname '$fieldname' not allowed");
	}
	$sql = '';
	$fieldtype = intval($_POST['fieldtype']);
	$fieldsize = intval($_POST['fieldsize']);
	$section = intval($_POST['section']);
	if ($fieldtype == 1) {
		if ($fieldsize > 1 || $fieldsize < 0) { $fieldsize = 1; }
		$sql .= 'INT1(1) NOT NULL';
	} else if ($fieldtype == 4) {
		$sql .= 'INT4('.$fieldsize.')';
	} else if ($fieldtype == 5) {
		$sql .= 'CHAR(1)';
	} else if ($fieldtype == 8) {
		$sql .= 'INT1 NOT NULL';
	} else {
		if ($fieldsize > 255 || $fieldsize < 1) {
			cpg_error("Fieldsize not allowed");
		}
		$sql .= 'VARCHAR('.$fieldsize.') NOT NULL';
	}
	$fieldlang = Fix_Quotes($_POST['fieldlang'], 1);
	$db->sql_query('ALTER TABLE '.$user_prefix."_users ADD $fieldname $sql");
	$db->sql_query('ALTER TABLE '.$user_prefix."_users_temp ADD $fieldname $sql");
	$db->sql_query('INSERT INTO '.$user_prefix."_users_fields (fid, field, section, visible, type, size, langdef) VALUES (DEFAULT, '$fieldname', '$section', 1, $fieldtype, $fieldsize, '$fieldlang')");
	URL::redirect(URL::admin('users_cfg&mode=fields'));
}
else if ($save == 'fields') {
	$result = $db->sql_query('SELECT field, visible FROM '.$user_prefix.'_users_fields');
	while (list($field, $visible) = $db->sql_fetchrow($result)) {
		$val = intval($_POST[$field]);
		if ($visible != $val) {
			$db->sql_query("UPDATE ".$user_prefix."_users_fields SET visible= '$val' WHERE field='$field'");
		}
	}
	$db->sql_freeresult($result);
	URL::redirect(URL::admin('users_cfg&mode=fields'));
}
else if (isset($_GET['delfield'])) {
	$fieldname = Fix_Quotes($_GET['delfield'], 1);
	$result = $db->sql_query('SELECT * FROM '.$user_prefix."_users_fields WHERE (section=2 OR section=3) AND field='$fieldname'");
	if ($db->sql_numrows($result) == 1) {
		$db->sql_query("DELETE FROM ".$user_prefix."_users_fields WHERE field='$fieldname'");
		$db->sql_query("ALTER TABLE ".$user_prefix."_users DROP $fieldname");
		$db->sql_query("ALTER TABLE ".$user_prefix."_users_temp DROP $fieldname");
	}
	$db->sql_freeresult($result);
	URL::redirect(URL::admin('users_cfg&mode=fields'));
}

$pagetitle .= ' '._BC_DELIM.' '._USERSCONFIG;
include('header.php');
GraphicAdmin('_AMENU2');
OpenTable();

$cpgtpl->assign_vars(array(
	'S_ACTIVE_MLIST' => false,
	//'S_ACTIVE_MLIST' => is_active('Members_List'),
	'U_HLIGHT_MAIN' => empty($mode) ? false : URL::admin('users_cfg'),
	'U_HLIGHT_AVATAR' => $mode === 'avatar' ? false : URL::admin('users_cfg&amp;mode=avatar'),
	'U_HLIGHT_FIELDS' => $mode === 'fields' ? false : URL::admin('users_cfg&amp;mode=fields'),
	'U_HLIGHT_LIST' => $mode === 'mlist' && is_active('Members_List') ? false : URL::admin('users_cfg&amp;mode=mlist'),
	'U_USERS_CFG' => URL::admin('users_cfg')
));

if ($mode == 'avatar') {
	$cpgtpl->assign_vars(array(
		'S_USERS_CFG_SAVE' => 'avatar',
		'S_AV_ALLOW_LOCAL' => yesno_option('allow_local', $MAIN_CFG['avatar']['allow_local']),
		'S_AV_ALLOW_REMOTE' => yesno_option('allow_remote', $MAIN_CFG['avatar']['allow_remote']),
		'S_AV_ALLOW_UPLOAD' => yesno_option('allow_upload', $MAIN_CFG['avatar']['allow_upload']),
		'S_AV_ALLOW_ANIMATED' => yesno_option('animated', $MAIN_CFG['avatar']['animated']),
		'S_AV_MAX_FILESIZE' => $MAIN_CFG['avatar']['filesize'],
		'S_AV_MAX_HEIGHT' => $MAIN_CFG['avatar']['max_height'],
		'S_AV_MAX_WIDTH' => $MAIN_CFG['avatar']['max_width'],
		'S_AV_STORAGE_PATH' => $MAIN_CFG['avatar']['path'],
		'S_AV_GALLERY_PATH' => $MAIN_CFG['avatar']['gallery_path'],
		'S_AV_DEFAULT' => $MAIN_CFG['avatar']['default']
	));
} else if ($mode == 'fields') {
	$cpgtpl->assign_vars(array(
		'S_USERS_CFG_SAVE' => 'fields',
	));
	$section = 0;
	$result = $db->sql_query("SELECT * FROM ".$user_prefix."_users_fields ORDER BY section");
	while ($row = $db->sql_fetchrow($result)) {
		$options = array(0=>_MA_HIDDEN, 1=>_MA_VISIBLE);
		if ($row['type'] != 1 && $row['type'] != 3) { $options[2] = _MA_REQUIRED; }
		$cpgtpl->assign_block_vars('section', array(
			'S_SECTION' => $row['section'],
			'S_PROFILE' => $row['section'] == 1 && !$section,
			'S_ADDITIONAL' => $row['section'] == 2 && $section !== 2,
			'S_PRIVATE' => $row['section'] == 3 && $section !== 3,
			'S_PREFERENCES' => $row['section'] == 5 && $section !== 5,
			'S_INFO' => defined($row['langdef']) ? constant($row['langdef']) : $row['langdef'],
			'S_SELECT' => select_box($row['field'], $row['visible'], $options),

			'U_DELFIELD' => URL::admin('users_cfg&amp;delfield='.$row['field'])
		));
		$section = (int)$row['section'];
	}
	$db->sql_freeresult($result);
} else if ($mode == 'addfield') {
	$cpgtpl->assign_vars(array(
		'S_USERS_CFG_SAVE' => 'add_field',
	));
} else if ($mode == 'mlist') {
//$db->sql_ufetchrow('SELECT * FROM ');
} else {
	$cpgtpl->assign_vars(array(
		'S_USERS_CFG_SAVE' => 'member',
		'S_ADMIN_HELP' => 1 == $MAIN_CFG['global']['admin_help'],
		'S_HEADLINES_TIP' => show_tooltip('my_headlines'),
    'S_HEADLINES_CFG' => yesno_option('my_headlines', $MAIN_CFG['member']['my_headlines'], 3),
		'S_USER_NEWS_TIP' => show_tooltip('user_news'),
		'S_USER_NEWS_CFG' => yesno_option('user_news', $MAIN_CFG['member']['user_news']),
		'S_THEME_TIP' => show_tooltip('allowusertheme'),
		'S_THEME_CFG' => yesno_option('allowusertheme', $MAIN_CFG['member']['allowusertheme']),
		'S_MAILCHANGE_TIP' => show_tooltip('allowmailchange'),
		'S_MAILCHANGE_CFG' => yesno_option('allowmailchange', $MAIN_CFG['member']['allowmailchange']),
		'S_MINPASS_TIP' => show_tooltip('minpass'),
		'S_MINPASS_CFG' => select_option('minpass', $MAIN_CFG['member']['minpass'], array('3', '5', '8', '10')),
		'S_USERREG_TIP' => show_tooltip('allowuserreg'),
		'S_USERREG_CFG' => yesno_option('allowuserreg', $MAIN_CFG['member']['allowuserreg']),
		'S_USER_ACTIVATE_TIP' => show_tooltip('useactivate'),
		'S_USER_ACTIVATE_CFG' => yesno_option('useactivate', $MAIN_CFG['member']['useactivate']),
		'S_REQUIRE_ADMIN_TIP' => show_tooltip('requireadmin'),
		'S_REQUIRE_ADMIN_CFG' => yesno_option('requireadmin', $MAIN_CFG['member']['requireadmin']),
		'S_SENDMAIL_TIP' => show_tooltip('sendaddmail'),
		'S_SENDMAIL_CFG' => yesno_option('sendaddmail', $MAIN_CFG['member']['sendaddmail']),
		'S_SHOW_REGMSG_TIP' => show_tooltip('show_registermsg'),
		'S_SHOW_REGMSG_CFG' => yesno_option('show_registermsg', $MAIN_CFG['member']['show_registermsg']),
		'S_REGMSG_CFG' => $MAIN_CFG['member']['registermsg'],
		'S_WELCOME_PM_TIP' => show_tooltip('send_welcomepm'),
		'S_WELCOME_PM_CFG' => yesno_option('send_welcomepm', $MAIN_CFG['member']['send_welcomepm']),
		'S_WELCOME_MSG_BB' =>bbcode_table('welcomepm_msg', 'config', 1),
		'S_WELCOME_MSG_CFG' => $MAIN_CFG['member']['welcomepm_msg']
	));
}
$cpgtpl->set_handle('body', 'admin/users/index.html');
$cpgtpl->display('body');
CloseTable();
