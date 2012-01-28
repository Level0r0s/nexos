<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 by Myndworx Asylum                          |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |  
  +-------------------------------------------------------------------+
  | headlines.php - NexOS Administration Backend file                 |
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
if (!can_admin('headlines')) { die('Access Denied'); }
$pagetitle .= ' '._BC_DELIM.' '._HEADLINESADMIN;

if (isset($_POST['save'])) {
	$xsitename = str_replace(' ', '', Fix_Quotes($_POST['xsitename']));
	$headlinesurl = Fix_Quotes($_POST['headlinesurl']);
	$db->sql_query('UPDATE '.$prefix."_headlines SET sitename='$xsitename', headlinesurl='$headlinesurl' where hid=".intval($_POST['save']));
	URL::redirect(URL::admin());
} else if (isset($_POST['addHeadline'])) {
	$xsitename = str_replace(' ', '', Fix_Quotes($_POST['xsitename']));
	$headlinesurl = Fix_Quotes($_POST['headlinesurl']);
	$db->sql_query('INSERT INTO '.$prefix."_headlines (hid, sitename, headlinesurl) VALUES (DEFAULT, '$xsitename', '$headlinesurl')");
	URL::redirect(URL::admin());
} elseif (isset($_GET['edit'])) {
	$hid = intval($_GET['edit']);
	$pagetitle .= ' '._BC_DELIM.' '._EDITHEADLINE;
	require_once('header.php');
	GraphicAdmin('_AMENU6');
	list($xsitename, $headlinesurl) = $db->sql_ufetchrow("SELECT sitename, headlinesurl FROM ".$prefix."_headlines WHERE hid='$hid'",SQL_NUM);
	OpenTable();
	echo '<span class="genmed"><strong>'._HEADLINESADMIN.'</strong></span><br /><br />
	'.open_form(URL::admin(), false, _EDITHEADLINE).'
	<label class="ulog" for="xsitename">'._SITENAME.'</label>
	 <input type="text" name="xsitename" size="50" maxlength="30" value="'.htmlprepare($xsitename).'" /><br />
	<label class="ulog" for="headlinesurl">'._RSSFILE.'</label>
	 <input type="text" name="headlinesurl" size="50" maxlength="200" value="'.$headlinesurl.'" /><br /><br />
	<input type="hidden" name="save" value="'.$hid.'" />
	<input type="submit" value="'._SAVECHANGES.'" />
	'.close_form();
	CloseTable();
} else if (isset($_GET['del'])) {
	if (isset($_POST['cancel'])) { URL::redirect(URL::admin()); }
	if (isset($_POST['confirm'])) {
		$db->sql_query('DELETE FROM '.$prefix."_headlines WHERE hid='".intval($_GET['del'])."'");
		URL::redirect(URL::admin());
	}
	cpg_delete_msg(URL::admin('&amp;del='.intval($_GET['del'])), _SURE2DELHEADLINE);
} else {
	require_once('header.php');
	GraphicAdmin('_AMENU6');
	OpenTable();
	echo '<span class="genmed"><strong>'._HEADLINESADMIN.'</strong></span><br /><br />
	<table border="0" width="100%">
	 <tr bgcolor="'.$bgcolor2.'">
	   <td><strong>'._SITENAME.'</strong></td>
	   <td><strong>'._URL.'</strong></td>
	   <td><strong>'._FUNCTIONS.'</strong></td>
	 </tr>';
	$result = $db->sql_uquery("SELECT hid, sitename, headlinesurl FROM ".$prefix."_headlines ORDER BY hid");
	$bgcolor = $bgcolor3;
	while (list($hid, $sitename, $headlinesurl) = $db->sql_fetchrow($result)) {
		$bgcolor = ($bgcolor == '') ? ' bgcolor="'.$bgcolor3.'"' : '';
		echo '
	 <tr'.$bgcolor.'">
	   <td>'.$sitename.'</td>
	   <td><a href="'.$headlinesurl.'" target="new">'.$headlinesurl.'</a></td>
	   <td><a href="'.URL::admin('&amp;edit='.$hid).'">'._EDIT.'</a> / <a href="'.URL::admin('&amp;del='.$hid).'">'._DELETE.'</a></td>
	 </tr>';
	 }
	 echo '</table><br /><br />
	 '.open_form(URL::admin(), false, _ADDHEADLINE).'
	 <label class="ulog" for="xsitename">'._SITENAME.'</label>
	  <input type="text" name="xsitename" size="50" maxlength="30" /><br />
	 <label class="ulog" for="headlinesurl">'._RSSFILE.'</label>
	  <input type="text" name="headlinesurl" size="50" maxlength="200" /><br /><br />
	 <input type="submit" name="addHeadline" value="'._ADDHEADLINE.'" />'.
	 close_form();
	 CloseTable();
}