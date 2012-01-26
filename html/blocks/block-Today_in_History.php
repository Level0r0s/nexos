<?php
/*
  $Id$ 
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 by Myndworx Asylum                          |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | block-Today_in_History.php - NexOS Administration Backend file    |
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
   Last modification notes:
    $Author$
    $Date$
    $Rev$
*/

if (!defined('CPG_NUKE')) { exit; }

global $db, $currentlang, $MAIN_CFG, $prefix, $userinfo;

$querylang = ($MAIN_CFG['global']['multilingual']) ? "AND (language='$currentlang' OR language='')" : '';

$time = time();
if (is_user() && intval($userinfo['user_timezone']) != 0) {
	$time = $time+(3600*intval($userinfo['user_timezone']));
}
$today = getdate($time);
$eday = $today['mday'];
$emonth = $today['mon'];
$content = $cnt = '';

$result = $db->sql_query("SELECT yid, content FROM ".$prefix."_history WHERE did='$eday' AND mid='$emonth' $querylang");
if ($db->sql_numrows($result) < 1) {
	$content = 'ERROR';
	return trigger_error('There are no entries for today', E_USER_NOTICE);
} else {
	$content = '<strong>'._ONEDAY.'</strong><br />';
	while (list($entry_yid, $entry_content) = $db->sql_fetchrow($result)) {
		if ($cnt == 1) { $content .= '<br /><br />'; }
		$content .= '<strong>'.$entry_yid.'</strong><br />'.$entry_content;
		$cnt = 1;
	}
}
