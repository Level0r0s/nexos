<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | block-Random_Headlines.php - NexOS Administration Backend file    |
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

if (!is_active('News')) {
	$content = 'ERROR';
	return trigger_error('News module is inactive', E_USER_WARNING);
}

global $currentlang, $db, $MAIN_CFG, $prefix, $userinfo;

$content = $topic_array = $r_topic = $topic = '';
$querylang = ($MAIN_CFG['global']['multilingual']) ? "AND (alanguage='$currentlang' OR alanguage='')" : '';

$result = $db->sql_query("SELECT topicid FROM ".$prefix."_topics");
list($numrows) = $db->sql_numrows($result);
if ($numrows > 1) {
	while (list($topicid) = $db->sql_fetchrow($result)) {
		$topic_array .= "$topicid-";
	}
	$r_topic = explode('-', $topic_array);
	mt_srand((double)microtime()*1000000);
	$numrows = $numrows-1;
	$topic = mt_rand(0, $numrows);
	$topic = $r_topic[$topic];
} else {
	$topic = 1;
}
$db->sql_freeresult($result);

list($topicimage, $topictext) = $db->sql_ufetchrow("SELECT topicimage, topictext FROM ".$prefix."_topics WHERE topicid='$topic'",SQL_NUM);

$content = '<div style="text-align:center;">
<a href="'.URL::index('News&amp;topic='.$topic).'"><img src="images/topics/'.$topicimage.'" alt="'.$topictext.'" title="'.$topictext.'" /></a><br />
[ <a href="'.URL::index('Search&amp;topic='.$topic).'">'.$topictext.'</a> ]
<br /></div>
<div>';

$result = $db->sql_query("SELECT sid, title FROM ".$prefix."_stories WHERE topic='$topic' $querylang ORDER BY sid DESC LIMIT 9");
while (list($sid, $s_title) = $db->sql_fetchrow($result)) {
	$content .= '<b>&#8226;</b>&nbsp;
	<a href="'.URL::index('News&amp;file=article&amp;sid='.$sid).'">'.$s_title.'</a>';
}
$db->sql_freeresult($result);

$content .= '</div>';
