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
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG Dev Team

  Under the GNU General Public License version 2

  Last modification notes:

	$Id: functions_display.php,v 9.11 2010/06/21 11:34:33 nanocaiordo Exp $

*************************************************************/

if (!defined('IN_PHPBB')) {
	die('Hacking attempt');
}

function display_forums($parent=0, $display_moderators = TRUE) {
	global $db, $board_config, $lang, $images, $userdata, $CPG_SESS, $module_name;

	$tracking_topics = isset($CPG_SESS[$module_name]['track_topics']) ? $CPG_SESS[$module_name]['track_topics'] : array();
	$tracking_forums = isset($CPG_SESS[$module_name]['track_forums']) ? $CPG_SESS[$module_name]['track_forums'] : array();

	# Find which forums are visible for this user
	$tmp_forums = $db->sql_ufetchrowset('SELECT forum_id, auth_view FROM '. FORUMS_TABLE, SQL_ASSOC);
	$is_auth_ary = auth(AUTH_VIEW, AUTH_LIST_ALL, $userdata, $tmp_forums);
	$c = count($tmp_forums);
	$forums = array();
	for ($i=0; $i<$c; ++$i) {
		if ($is_auth_ary[$tmp_forums[$i]['forum_id']]['auth_view']) {
			$forums[] = $tmp_forums[$i]['forum_id'];
		}
	}
	if (0 === count($forums)) { return array(); }
	unset($tmp_forums);
	$forums = implode(',', $forums);

	# Define appropriate SQL
	//$where = $parent ? 'AND f.parent_id='.$parent : '';
	$where = '';
	switch(SQL_LAYER) {
		case 'oracle':
			$sql = 'SELECT f.*, p.post_time, p.post_username, u.username, u.user_id
					FROM '.FORUMS_TABLE.' f, '.POSTS_TABLE.' p, '.USERS_TABLE.' u
					WHERE p.post_id = f.forum_last_post_id(+)
						AND u.user_id = p.poster_id(+)
					ORDER BY f.cat_id, f.forum_order';
			break;

		default:
			$sql = 'SELECT f.*, p.post_time, p.post_username, u.username, u.user_id
					FROM (( '.FORUMS_TABLE.' f
					LEFT JOIN '.POSTS_TABLE.' p ON p.post_id = f.forum_last_post_id )
					LEFT JOIN '.USERS_TABLE.' u ON u.user_id = p.poster_id )
					WHERE f.forum_id IN ('.$forums.') '.$where.'
					ORDER BY f.cat_id, f.forum_order';
			break;
	}
	$result = $db->sql_query($sql);

	# Save a copy of child forums
	$forums = $childs = array();
	while ($row = $db->sql_fetchrow($result, SQL_ASSOC) ) {
		if (!$parent && 0 < $row['parent_id']) { $childs[$row['parent_id']][] = $row; }
		elseif ($parent && $row['parent_id'] != $parent) { $childs[$row['parent_id']][] = $row; }
		else { $forums[] = $row; }
/*	# Lanzer speedup
		if ($row['post_time'] > $userdata['user_lastvisit']) {
			$new_topic_data[$row['forum_id']][$row['topic_id']] = $row['post_time'];
		}	*/
	}
	$db->sql_freeresult($result);
	# Obtain a list of topic ids which contain posts made since user last visited
	if (is_user()) {
		$lastvisit = $userdata['user_lastvisit'];
		if ( isset($CPG_SESS[$module_name]['track_all']) ) {
			$lastvisit = $CPG_SESS[$module_name]['track_all'];
		}
		$result = $db->sql_query('SELECT t.forum_id, t.topic_id, p.post_time
				FROM '.TOPICS_TABLE.' t, '.POSTS_TABLE.' p
				WHERE p.post_id = t.topic_last_post_id
					AND p.post_time > '.$lastvisit.'
					AND t.topic_moved_id = 0
				ORDER BY p.post_time DESC');
		$new_topic_data = array();
		while ($topic_data = $db->sql_fetchrow($result, SQL_ASSOC)) {
			$forum_id = $topic_data['forum_id'];
			if (empty($new_topic_data[$forum_id])) {
				if (empty($tracking_topics[$topic_data['topic_id']])) {
					$new_topic_data[$forum_id] = true;
				} elseif ($tracking_topics[$topic_data['topic_id']] < $topic_data['post_time'] ) {
					$new_topic_data[$forum_id] = true;
				}
				if (!empty($tracking_forums[$forum_id])) {
					$new_topic_data[$forum_id] = ( $tracking_forums[$forum_id] < $topic_data['post_time'] );
				}
			}
		}
		$db->sql_freeresult($result);
	}

	$moderators = $display_moderators ? BoardCache::moderators() : array(); 

	$c = count($forums);
	for ($i=0; $i<$c; ++$i) {
		$forum_id = $forums[$i]['forum_id'];
		$forums[$i]['subforums'] = '';
		$forums[$i]['subforums_list'] = '';
		$forums[$i]['subforums_lang'] = '';
		$ftopics = $forums[$i]['forum_topics'];
		$fposts = $forums[$i]['forum_posts'];
		if ($forums[$i]['forum_type'] >= 2) {
			$folder_image = $images['forum_link'];
			$folder_alt = 'link';
		} else if ($forums[$i]['forum_status'] == FORUM_LOCKED) {
			$folder_image = $images['forum_locked'];
			$folder_alt = $lang['Forum_locked'];
		} else {
			$unread_topics = false;
			if (is_user()) {
				$unread_topics = !empty($new_topic_data[$forum_id]);
			}
			if (!empty($childs[$forum_id])) {
				$forums[$i]['subforums'] = $childs[$forum_id];
				$subforums = array();
				foreach ($childs[$forum_id] as $subforum) {
					$ftopics += $subforum['forum_topics'];
					$fposts += $subforum['forum_posts'];
					if ($subforum['parent_id'] == $forum_id) {
						if ($subforum['forum_type'] == 2) {
							$subforums[] = '<a href="'.URL::index($subforum['forum_link']).'">'.$subforum['forum_name'].'</a>';
						} elseif ($subforum['forum_type'] == 3) {
							$subforums[] = '<a href="'.$subforum['forum_link'].'">'.$subforum['forum_name'].'</a>';
						} else {
							$subforums[] = '<a href="'.URL::index($module_name.'&amp;viewforum&amp;f='.$subforum['forum_id']).'">'.$subforum['forum_name'].'</a>';
						}
					}
					if ($subforum['post_time'] > $forum_id['post_time'] && $subforum['post_time'] > $forums[$i]['post_time']) {
						$forums[$i]['post_time'] = $subforum['post_time'];
						$forums[$i]['username'] = $subforum['username'];
						$forums[$i]['user_id'] = $subforum['user_id'];
						$forums[$i]['forum_last_post_id'] = $subforum['forum_last_post_id'];
					}
				}
				$forums[$i]['subforums_list'] = implode(', ', $subforums);
				$forums[$i]['subforums_lang'] = (count($subforums) == 1) ? $lang['Subforum'] : $lang['Subforums'];

			}
			if ($forums[$i]['forum_type'] == 1) {
				$folder_image = ( $unread_topics ) ? $images['forum_new_sub'] : $images['forum_sub'];
			} else {
				$folder_image = ( $unread_topics ) ? $images['forum_new'] : $images['forum'];
			}
			$folder_alt = ( $unread_topics ) ? $lang['New_posts'] : $lang['No_new_posts'];
		}
		
		if (isset($moderators[$forum_id])) {
			$l_moderators = ( count($moderators[$forum_id]) === 1 ) ? $lang['Moderator'] : $lang['Moderators'];
			$moderator_list = implode(', ', $moderators[$forum_id]);
		} else {
			$l_moderators = '';
			$moderator_list = '';
		}
		$forums[$i]['post_username'] = ($forums[$i]['post_username']) ? $forums[$i]['post_username'] : $lang['Guest'];
		$forums[$i]['folder_image'] = $folder_image;
		$forums[$i]['folder_alt']	= $folder_alt;
		$forums[$i]['l_moderators']	  = $l_moderators;
		$forums[$i]['moderator_list'] = $moderator_list;
		$forums[$i]['forum_topics'] = $ftopics;
		$forums[$i]['forum_posts'] = $fposts;
	}
	return $forums;
}
