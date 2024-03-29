<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | block-Sample.php - Example NexOS block file                       |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      |
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |
  +-------------------------------------------------------------------+
  */
/***************************************************************************
*				 prune.php
*				-------------------
*	begin		: Thursday, June 14, 2001
*	copyright		: (C) 2001 The phpBB Group
*	email		: support@phpbb.com
*
 *	 Modifications made by CPG Dev Team http://cpgnuke.com
 *	 Last modification notes:
 *
*	$Id: prune.php,v 9.6 2008/04/19 12:22:23 nanocaiordo Exp $
*
*
***************************************************************************/

/***************************************************************************
 *
 *	 This program is free software; you can redistribute it and/or modify
 *	 it under the terms of the GNU General Public License as published by
 *	 the Free Software Foundation; either version 2 of the License, or
 *	 (at your option) any later version.
 *
 ***************************************************************************/

if (!defined('IN_PHPBB')) { exit; }

require_once("includes/phpBB/functions_search.php");

function prune($forum_id, $prune_date, $prune_all = false)
{
	global $db, $lang;

	$prune_all = ($prune_all) ? '' : 'AND t.topic_vote = 0 AND t.topic_type <> ' . POST_ANNOUNCE;
	//
	// Those without polls and announcements ... unless told otherwise!
	//
	$sql = "SELECT t.topic_id FROM " . POSTS_TABLE . " p, " . TOPICS_TABLE . " t
		WHERE t.forum_id = $forum_id
			$prune_all
			AND ( p.post_id = t.topic_last_post_id OR t.topic_last_post_id = 0 )";
	if ($prune_date != '') {
		$sql .= " AND p.post_time < $prune_date";
	}
	$result = $db->sql_query($sql);

	$sql_topics = '';
	while ($row = $db->sql_fetchrow($result)) {
		$sql_topics .= ( ( $sql_topics != '' ) ? ', ' : '' ) . $row['topic_id'];
	}
	$db->sql_freeresult($result);

	if ($sql_topics != '') {
		$sql = "SELECT post_id FROM " . POSTS_TABLE . "
			WHERE forum_id = $forum_id AND topic_id IN ($sql_topics)";
		$result = $db->sql_query($sql);
		$sql_post = '';
		while ($row = $db->sql_fetchrow($result)) {
			$sql_post .= (($sql_post != '') ? ', ' : '') . $row['post_id'];
		}
		$db->sql_freeresult($result);
		if ($sql_post != '') {
			$db->sql_query("DELETE FROM " . TOPICS_WATCH_TABLE . " WHERE topic_id IN ($sql_topics)");
			$db->sql_query("DELETE FROM " . TOPICS_TABLE . " WHERE topic_id IN ($sql_topics)");
			$pruned_topics = $db->sql_affectedrows();
			$db->sql_query("DELETE FROM " . POSTS_TABLE . " WHERE post_id IN ($sql_post)");
			$pruned_posts = $db->sql_affectedrows();
			$db->sql_query("DELETE FROM " . POSTS_TEXT_TABLE . " WHERE post_id IN ($sql_post)");
			remove_search_post($sql_post);
//			if (defined('BBAttach_mod')) {
			delete_attachment($sql_post);
			return array ('topics' => $pruned_topics, 'posts' => $pruned_posts);
		}
	}
	return array('topics' => 0, 'posts' => 0);
}

//
// Function auto_prune(), this function will read the configuration data from
// the auto_prune table and call the prune function with the necessary info.
//
function auto_prune($forum_id = 0)
{
	global $db, $lang;
	$result = $db->sql_query("SELECT * FROM " . PRUNE_TABLE . " WHERE forum_id = $forum_id");
	if ($row = $db->sql_fetchrow($result)) {
		if ($row['prune_freq'] && $row['prune_days']) {
			$prune_date = time() - ( $row['prune_days'] * 86400 );
			$next_prune = time() + ( $row['prune_freq'] * 86400 );
			prune($forum_id, $prune_date);
			sync('forum', $forum_id);
			$db->sql_query("UPDATE " . FORUMS_TABLE . " SET prune_next = $next_prune WHERE forum_id = $forum_id");
		}
	}
	return;
}
