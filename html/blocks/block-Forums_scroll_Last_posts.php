<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | blcok-Forums_scroll_Last_posts.php                                |
  |            - NexOS Administration Backend file                    |
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

global $prefix, $user_prefix, $db, $group_id, $CPG_SESS, $userinfo;

if (file_exists("themes/$CPG_SESS[theme]/images/forums/icon_mini_message.gif")) {
	$iconpath = "themes/$CPG_SESS[theme]/images/forums";
} else {
	$iconpath = "themes/default/images/forums";
}

$view = ' AND f.auth_view=0';
if (can_admin('forums')) {
	$view = '';
} else if (is_user() && count($userinfo['_mem_of_groups'])) {
	foreach ($userinfo['_mem_of_groups'] as $id => $name) {
		$groups[] = $id;
	}
	$result = $db->sql_uquery("SELECT forum_id FROM ".$prefix."_bbauth_access WHERE group_id IN (".implode(',', $groups).") AND (auth_mod = 1 OR auth_view = 1) GROUP BY forum_id");
	while ($row = $db->sql_fetchrow($result)) {
		$forums[] = $row[0];
	}
	if (count($forums)) {
		$view = ' AND (f.auth_view=0 OR f.forum_id IN ('.implode(',', $forums).'))';
	}
}
$result = $db->sql_query('SELECT
 t.topic_id, t.topic_last_post_id, t.topic_title,
 f.forum_name, f.forum_id,
 u.username, u.user_id,
 p.poster_id, p.post_time
 FROM ('.$prefix.'_bbtopics t, '.$prefix.'_bbforums f)
 LEFT JOIN '.$prefix.'_bbposts p ON (p.post_id = t.topic_last_post_id)
 LEFT JOIN '.$user_prefix.'_users u ON (u.user_id = p.poster_id)
 WHERE t.forum_id=f.forum_id '.$view.'
 ORDER BY t.topic_last_post_id DESC
 LIMIT 10');
//f.auth_view = 0); // everyone
//f.auth_view = 1); // member
//f.auth_view = 2); // private
//f.auth_view = 3); // moderator
//f.auth_view = 5); // admin

if ($db->sql_numrows($result) < 1) {
	$content = 'ERROR';
	return trigger_error('There are no forum posts', E_USER_NOTICE);
} else {
	$content = '<div style="text-align:center"><b>'.sprintf(_LASTMSGS, 10).'</b></div><marquee align="center" direction="up" scrollamount="2" scrolldelay="70" onmouseover=\'this.stop()\' onmouseout=\'this.start()\'><br /><div>';
	while (list($topic_id, $topic_last_post_id, $topic_title, $forum_name, $forum_id, $username, $user_id, $poster_id, $post_time) = $db->sql_fetchrow($result)) {
		$post_time = formatDateTime($post_time, '%b %d, %Y '._AT.' %T');
		$topic_title = check_words($topic_title);
		$content .= '<img src="'.$iconpath.'/icon_mini_message.gif" alt="" />
		<a href="'.URL::index('Forums&amp;file=viewtopic&amp;p='.$topic_last_post_id.'#'.$topic_last_post_id).'"><strong>'.$topic_title.'</strong></a><br />
		<i>'.sprintf(_LASTPOSTBY, '<a href="'.URL::index('Your_Account&amp;profile='.$username).'">'.$username.'</a>', '<a href="'.URL::index('Forums&amp;file=viewforum&amp;f='.$forum_id).'">'.$forum_name.'</a>', $post_time).'</i><br /><br />';
	}
	$content .= '</div></marquee>';
}
