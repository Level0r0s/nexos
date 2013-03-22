<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | block-Forums.php - NexOS Administration Backend file              |
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

if (!defined('CPG_NUKE')) { exit; }

if (!is_active('Forums')) {
	$content = 'ERROR';
	return trigger_error('Forums module is inactive', E_USER_WARNING);
}

global $db, $prefix;
$content = '';
$result = $db->sql_query("SELECT t.forum_id, topic_id, topic_title, auth_view, auth_read FROM (".$prefix."_bbtopics AS t, ".$prefix."_bbforums AS f) WHERE f.forum_id=t.forum_id ORDER BY topic_time DESC LIMIT 10");
if ($db->sql_numrows($result) < 1) {
	$content = 'ERROR';
	return trigger_error('There are no forum posts', E_USER_NOTICE);
} else {
	while (list($forum_id, $topic_id, $topic_title, $auth_view, $auth_read) = $db->sql_fetchrow($result)) {
		if ($auth_view < 2 || $auth_read < 2) {
			$topic_title = check_words($topic_title);
			$content .= '<b>&#8226;</b>&nbsp;
			<a href="'.URL::index('Forums&amp;file=viewtopic&amp;t='.$topic_id).'">'.$topic_title.'</a><br />';
		}
	}
	$content .= '<div style="text-align:center;"><br /><a href="'.URL::index('Forums').'"><strong>'.$MAIN_CFG['global']['sitename'].' '._BBFORUMS.'</strong></a></div>';
}
