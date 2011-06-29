<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/modules/Forums/admin/index.inc,v $
  $Revision: 1.10 $
  $Author: phoenix $
  $Date: 2009/05/28 11:07:15 $
**********************************************/
if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin('forums')) { die('Access Denied'); }

global $db,$lang;

$showblocks = 0;

if (empty($_POST['send_file']) && !isset($_POST['cancel'])) {
	require('header.php');
	define('IN_PHPBB', 1);
	$module_name = ($op == 'forums') ? ucfirst($op) : $op;
	$phpbb_root_path = "modules/$module_name/";
	define('IN_ADMIN', true);
	require($phpbb_root_path.'common.php');
	$userdata = session_pagestart($user_ip, PAGE_INDEX);
	init_userprefs($userdata);
	//GraphicAdmin('_AMENU4');
	$newimage = file_exists("themes/$CPG_SESS[theme]/images/new.gif") ? $CPG_SESS['theme'] : 'default';
	OpenTable();
	echo '<table width="100%" cellpadding="0" cellspacing="0"><tr><td class="catbottom"><div id="forumsmenu"></div>
<script  type="text/javascript"><!--'."
var forumsMenu =
[
	[null, '"._BBFORUMS."', null, null, null,
		['<img src=\"themes/$newimage/images/new.gif\" alt=\"\" />', '".$lang['Manage']."', '".URL::admin('&do=forums')."', null, null],
		[null, '".$lang['Auth_Control_Forum']."', '".URL::admin('&do=forumauth')."', null, null],
		[null, '".$lang['Prune']."', '".URL::admin('&do=forum_prune')."', null, null],
		_cmSplit,
		[null, '".$lang['Configuration']."', '".URL::admin('&do=board&mode=config')."', null, null],
		_cmSplit,
		[null, '".$lang['Avatar_panel']."', '".URL::admin('&do=avatar')."', null, null],
		[null, '".$lang['Word_Censor']."', '".URL::admin('&do=words')."', null, null],
		[null, '".$lang['Topic_icons']."', '".URL::admin('&do=topic_icons')."', null, null]
	],
	[null, '"._BMEM."', null, null, null,
		[null, '".$lang['Ban_control']."', '".URL::admin('security')."', null, null],
		[null, '".$lang['Auth_Control_User']."', '".URL::admin('&do=ug_auth&mode=user')."', null, null],
		[null, '".$lang['Auth_Control_Group']."', '".URL::admin('&do=ug_auth&mode=group')."', null, null],
		[null, '".$lang['Usergroups']."', '".URL::admin('groups')."', null, null],
	],
	[null, '".$lang['Attachments']."', null, null, null,
		[null, '".$lang['Control_Panel']."', '".URL::admin('&do=attach_cp')."', null, null],
		_cmSplit,
		[null, '".$lang['Attach_settings']."', '".URL::admin('&do=attachments&mode=manage')."', null, null],
		[null, '".$lang['Shadow_attachments']."', '".URL::admin('&do=attachments&mode=shadow')."', null, null],
		[null, '".$lang['Special_categories']."', '".URL::admin('&do=attachments&mode=cats')."', null, null],
		[null, '".$lang['Sync_attachments']."', '".URL::admin('&do=attachments&mode=sync')."', null, null],
		[null, '".$lang['Quota_limits']."', '".URL::admin('&do=attachments&mode=quota')."', null, null],
		_cmSplit,
		[null, '".$lang['Group_quota']."', '".URL::admin('&do=groups')."', null, null],
		_cmSplit,
		[null, '".$lang['Extension_control']."', '".URL::admin('&do=extensions&mode=extensions')."', null, null],
		[null, '".$lang['Extension_group_manage']."', '".URL::admin('&do=extensions&mode=groups')."', null, null],
		[null, '".$lang['Forbidden_extensions']."', '".URL::admin('&do=extensions&mode=forbidden')."', null, null]
	]
];
cmDraw ('forumsmenu', forumsMenu, 'hbr', cmThemeOffice, 'ThemeOffice');
--></script>";
echo'<noscript>
&nbsp;<strong>'._BBFORUMS.'</strong>&nbsp;&nbsp;
<a href="'.URL::admin('&amp;do=forums').'">'.$lang['Manage'].'</a>&nbsp;
<a href="'.URL::admin('&amp;do=forumauth').'">'.$lang['Permissions'].'</a>&nbsp;
<a href="'.URL::admin('&amp;do=forum_prune').'">'.$lang['Prune'].'</a>&nbsp;
<a href="'.URL::admin('&amp;do=avatar').'">'.$lang['Avatar_panel'].'</a>&nbsp;
<a href="'.URL::admin('&amp;do=words').'">'.$lang['Word_Censor'].'</a>&nbsp;
<a href="'.URL::admin('&amp;do=topic_icons').'">'.$lang['Topic_icons'].'</a>&nbsp;
<a href="'.URL::admin('security').'">'.$lang['Ban_control'].'</a>&nbsp;
<a href="'.URL::admin('&amp;do=ug_auth&amp;mode=user').'">'.$lang['Ban_control'].'</a>&nbsp;
<a href="'.URL::admin('&amp;do=ug_auth&amp;mode=group').'">'.$lang['Ban_control'].'</a>&nbsp;
<br clear="all" />
&nbsp;<strong>Attachments</strong>&nbsp;&nbsp;
<a href="'.URL::admin('&amp;do=attach_cp').'">'.$lang['Control_Panel'].'</a>&nbsp;
<a href="'.URL::admin('&amp;do=attachments&amp;mode=manage').'">'.$lang['Attach_settings'].'</a>&nbsp;
<a href="'.URL::admin('&amp;do=attachments&amp;mode=shadow').'">'.$lang['Shadow_attachments'].'</a>&nbsp;
<a href="'.URL::admin('&amp;do=attachments&amp;mode=cats').'">'.$lang['Special_categories'].'</a>&nbsp;
<a href="'.URL::admin('&amp;do=attachments&amp;mode=sync').'">'.$lang['Sync_attachments'].'</a>&nbsp;
<br clear="all" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="'.URL::admin('&amp;do=attachments&amp;mode=quota').'">'.$lang['Quota_limits'].'</a>&nbsp;
<a href="'.URL::admin('&amp;do=groups').'">Group quota</a>&nbsp;
<a href="'.URL::admin('&amp;do=extensions&amp;mode=extensions').'">'.$lang['Extension_control'].'</a>&nbsp;
<a href="'.URL::admin('&amp;do=extensions&amp;mode=groups').'">Extension group manage</a>&nbsp;
<a href="'.URL::admin('&amp;do=extensions&amp;mode=forbidden').'">'.$lang['Forbidden_extensions'].'</a>&nbsp;
</noscript></td></tr></table>';
}
$file = (isset($_GET['do']) ? $_GET['do'] : (isset($_POST['do']) ? $_POST['do'] : false));
if (!$file) $file = 'index';
else $file = "admin_$file";
if (!preg_match('#^([a-zA-Z0-9_\-]+)$#', $file)) { cpg_error(sprintf(_ERROR_BAD_CHAR, strtolower(_BBFORUMS)), _SEC_ERROR); }

if ($CLASS['member']->demo && $file == 'admin_users') $file = 'index';

require_once("admin/modules/forums/$file.php");

if (empty($_POST['send_file']) && !isset($_POST['cancel'])) {
	$template->display('body');
	CloseTable();
}
