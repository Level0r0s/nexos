<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 | 
  +-------------------------------------------------------------------+
  | history.php - NexOS Administration Backend file                   |
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
if (!can_admin('history')) { die('Access Denied'); }

$pagetitle .= ' '._BC_DELIM.' '._EPHEMADMIN;

if (isset($_POST['createEntry'])) {
	$day = intval($_POST['day']);
	$month = intval($_POST['month']);
	$year = Fix_Quotes($_POST['year'], 1);
	$content = Fix_Quotes($_POST['content']);
	$entry_language = $_POST['language'];
	$db->sql_query("INSERT INTO ".$prefix."_history (eid, did, mid, yid, content, language) VALUES (DEFAULT, '$day', '$month', '$year', '$content', '$entry_language')");
	URL::redirect(URL::admin());
} elseif (isset($_POST['saveEntry'])) {
	$id = intval($_POST['entry_id']);
	$year = Fix_Quotes($_POST['entry_year'], 1);
	$content = Fix_Quotes($_POST['entry_content']);
	$entry_language = $_POST['entry_lang'];
	$db->sql_query("UPDATE ".$prefix."_history SET yid='$year', content='$content', language='$entry_language' WHERE eid='$id'");
	URL::redirect(URL::admin('&edit='.$id));
} elseif (isset($_GET['delete'])) {
	if (isset($_POST['cancel'])) { URL::redirect(URL::admin()); }
	if (isset($_POST['confirm'])) {
		$db->sql_query("DELETE FROM ".$prefix."_history WHERE eid='".intval($_GET['delete'])."'");
		URL::redirect(URL::admin());
	}
	cpg_delete_msg(URL::admin('&amp;delete='.intval($_GET['delete'])), sprintf(_ERROR_DELETE_CONF, 'this entry'));
} elseif (isset($_POST['transferEntry'])) {
	$entry_day = intval($_POST['day']);
	$entry_month = intval($_POST['month']);
	URL::redirect(URL::admin('&mode=show&month='.$entry_month.'&day='.$entry_day));
} elseif (isset($_GET['mode']) && $_GET['mode'] == 'show') {
	$entry_day = intval($_GET['day']);
	$entry_month = intval($_GET['month']);
	if (strlen($_GET['day']) < 1 || strlen($_GET['month']) < 1) { cpg_error(sprintf(_ERROR_NOT_SET,'ID'), _SEC_ERROR); }
	$pagetitle .= ' '._BC_DELIM.' '._EPHEMMAINT;
	require_once('header.php');
	GraphicAdmin('_AMENU5');
	OpenTable();
	echo '<span class="genmed"><strong>'._EPHEMADMIN.'</strong></span><br /><br />';
	$result = $db->sql_query("SELECT eid, yid, content, language FROM ".$prefix."_history WHERE did='$entry_day' AND mid='$entry_month'");
	$i = 1;
	while (list($entry_id, $entry_year, $entry_content, $entry_lang) = $db->sql_fetchrow($result)) {
		echo '<strong>'.$entry_year.'</strong> '.(($MAIN_CFG['global']['multilingual'] && !empty($entry_lang)) ? '('.$entry_lang.') ' : '').'(<a href="'.URL::admin('&amp;edit='.$entry_id).'">'._EDIT.'</a> / <a href="'.URL::admin('&amp;delete='.$entry_id).'">'._DELETE.'</a>)<br />'.$entry_content;
		if ($i < $db->sql_numrows($result)) { echo '<hr size="1" noshade="noshade" />'; }
		$i++;
	}
	if ($db->sql_numrows($result) < 1) { echo sprintf(_ERROR_NONE_TO_DISPLAY,'entries'); }
	$db->sql_freeresult($result);
	CloseTable();
} elseif (isset($_GET['edit'])) {
	$entry_id = intval($_GET['edit']);
	if (strlen($_GET['edit'] < 1)) { cpg_error(sprintf(_ERROR_NOT_SET,'ID'), _SEC_ERROR); }
	list($entry_year, $entry_content, $entry_lang) = $db->sql_ufetchrow("SELECT yid, content, language FROM ".$prefix."_history WHERE eid='$entry_id'", SQL_NUM);
	$pagetitle .= ' '._BC_DELIM.' '._EPHEMEDIT;
	require_once('header.php');
	GraphicAdmin('_AMENU5');
	OpenTable();
	echo '<span class="genmed"><strong>'._EPHEMADMIN.'</strong></span><br /><br />'.
	open_form(URL::admin('history'), false, _EPHEMEDIT).
	_YEAR.': <input type="text" name="entry_year" value="'.$entry_year.'" size="5" maxlength="4" /><br /><br />';
	if ($MAIN_CFG['global']['multilingual']) {
		echo _LANGUAGE.': '.lang_selectbox($entry_lang, 'entry_lang').'<br /><br />';
	} else {
		echo '<input type="hidden" name="entry_lang" value="'.$entry_lang.'" />';
	}
	echo _EPHEMDESC.':<br />
	<textarea name="entry_content" cols="60" rows="10">'.$entry_content.'</textarea><br /><br />
	<input type="hidden" name="entry_id" value="'.$entry_id.'" />
	<input type="submit" name="saveEntry" value="'._SAVECHANGES.'" /> <a href="'.URL::admin('&amp;delete='.$entry_id).'"><input type="button" value="'._DELETE.'" onclick="parent.location=\''.URL::admin('&amp;delete='.$entry_id).'\'" /></a>'.
	close_form();
	CloseTable();
} else {
	require_once('header.php');
	GraphicAdmin('_AMENU5');
	OpenTable();
	echo '<span class="genmed"><strong>'._EPHEMADMIN.'</strong></span><br /><br />'.
	open_form(URL::admin(), false, _ADDEPHEM);
	$nmonth = array(1 => _JANUARY, _FEBRUARY, _MARCH, _APRIL, _MAY, _JUNE, _JULY, _AUGUST, _SEPTEMBER, _OCTOBER, _NOVEMBER, _DECEMBER);
	echo _UMONTH.': <select name="month">';
	while (list($nmonth_key, $nmonth_name) = each($nmonth)) {
		echo '<option value="'.$nmonth_key.'">'.$nmonth_name.'</option>';
	}
	echo '</select> &nbsp;';
	$nday = 1;
	echo _DAY.': <select name="day">';
	while ($nday <= 31) {
		echo '<option value="'.$nday.'">'.$nday.'</option>';
		$nday++;
	}
	echo '</select> &nbsp;'._YEAR.': <input type="text" name="year" size="5" maxlength="4" /><br /><br />';
	if ($MAIN_CFG['global']['multilingual']) {
		echo _LANGUAGE.': '.lang_selectbox($MAIN_CFG['global']['language'], 'language').'<br /><br />';
	} else {
		echo '<input type="hidden" name="language" value="'.$MAIN_CFG['global']['language'].'" />';
	}
	echo _EPHEMDESC.':<br />
	<textarea name="content" cols="60" rows="10"></textarea><br /><br />
	<input type="submit" name="createEntry" value="'._ADD.'" />'.
	close_form().'<br />'.
	open_form(URL::admin(), false, _EPHEMMAINT);
	$nmonth = array(1 => _JANUARY, _FEBRUARY, _MARCH, _APRIL, _MAY, _JUNE, _JULY, _AUGUST, _SEPTEMBER, _OCTOBER, _NOVEMBER, _DECEMBER);
	echo _UMONTH.': <select name="month">';
	while (list($nmonth_key, $nmonth_name) = each($nmonth)) {
		echo '<option value="'.$nmonth_key.'">'.$nmonth_name.'</option>';
	}
	echo '</select> &nbsp;';
	$nday = 1;
	echo _DAY.': <select name="day">';
	while ($nday <= 31) {
		echo '<option value="'.$nday.'">'.$nday.'</option>';
		$nday++;
	}
	echo '</select> &nbsp;
	<input type="submit" name="transferEntry" value="'._EDIT.'" />'.
	close_form();
	CloseTable();
}
