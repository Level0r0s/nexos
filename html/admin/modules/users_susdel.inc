<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 | 
  +-------------------------------------------------------------------+
  | users_susdel.inc - NexOS Administration Backend file              |
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
*/

if (!defined('ADMIN_PAGES')) { exit; }

if ($CPG_SESS['admin']['page'] != 'users') {
	cpg_error(_ERROR_BAD_LINK, _SEC_ERROR);
}
$susdel = $_POST['susdel'];
if (empty($susdel) || !isset($_POST['members'])) {
	cpg_error(sprintf(_ERROR_NOT_SET, 'Member'), _SEC_ERROR);
}

/* Begin Suspended Users */
if ($susdel == 'restoreUser') {
	$pagetitle .= ' '._BC_DELIM.' '._RESTOREUSER;
	$members = implode(',', $_POST['members']);
	$result = $db->sql_query('SELECT username FROM '.$user_prefix."_users WHERE user_id IN ($members)");
	showheader();
	echo '<center><table border="0">
	<form method="post" action="'.URL::admin().'" enctype="multipart/form-data" accept-charset="utf-8">
	<input type="hidden" name="susdel" value="restoreUserConf" />
	<input type="hidden" name="members" value="'.$members.'" />
	<tr><td>'._SURE2RESTORE.':<br />';
	while ($row = $db->sql_fetchrow($result)) {
		echo $row['username'].'<br />';
	}
	echo '</td></tr>
	<tr><td align="center"><input type="submit" value="'._RESTOREUSER.'" /></td><tr>
	<tr><td align="center">'._GOBACK.'</td><tr>
	</form></table></center>';
	showfooter();
}
else if ($susdel == 'restoreUserConf') {
	$result = $db->sql_query('SELECT user_email FROM '.$user_prefix."_users WHERE user_id IN ($_POST[members])");
	while ($newuser = $db->sql_fetchrow($result)) {
		send_mail($dummy, _SORRYTO." {$MAIN_CFG['global']['sitename']} "._HASRESTORE, 0, _ACCTRESTORE, $newuser['user_email']);
	}
	$db->sql_query('UPDATE '.$user_prefix."_users SET user_level=1 WHERE user_id IN ($_POST[members])");
	URL::redirect(URL::admin());
}
/* End Suspended Users */