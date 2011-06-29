<?php
/***************************************************************************
 *								  index.php
 *							  -------------------
 *	 begin				  : Saturday, Feb 13, 2001
 *	 copyright			  : (C) 2001 The phpBB Group
 *	 email				  : support@phpbb.com
 *
  Last modification notes:
  $Source: /cvs/html/modules/Forums/index.php,v $
  $Revision: 9.16 $
  $Author: phoenix $
  $Date: 2009/05/28 11:07:15 $
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
if (!defined('CPG_NUKE')) { exit; }
require_once('modules/'.$module_name.'/nukebb.php');

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_INDEX);
init_userprefs($userdata);
//
// End session management
//

$viewcat = ( !empty($_GET[POST_CAT_URL]) ) ? $_GET[POST_CAT_URL] : -1;

//
// Handle marking posts
//
if( isset($_GET['mark']) || isset($_POST['mark']) ) {
	$mark_read = ( isset($_POST['mark']) ) ? $_POST['mark'] : $_GET['mark'];
	if ($mark_read == 'forums') {
		if (is_user()) {
			$CPG_SESS[$module_name]['track_all'] = time();
		}
		URL::refresh(URL::index());
		$message = $lang['Forums_marked_read'] . '<br /><br />' . sprintf($lang['Click_return_index'], '<a href="' . URL::index() . '">', '</a> ');
		message_die(GENERAL_MESSAGE, $message);
	}
}
//
// End handle marking posts
//

//
// If you don't use these stats on your index you may want to consider removing them
//
$l_total_post_s = $total_posts = 0;

//
// Start page proper
//
$category_rows = BoardCache::categories();

if (!($total_categories = count($category_rows))) {
	message_die(GENERAL_MESSAGE, $lang['No_forums']);
}

require_once('includes/phpBB/functions_display.php');
$forum_data = display_forums();
if ( !($total_forums = count($forum_data)) ) {
	message_die(GENERAL_MESSAGE, $lang['No_forums']);
}

# Start output of page
$page_title = _HOME; //$lang['Index'];
require_once('includes/phpBB/page_header.php');

$template->assign_vars(array(
	'FORUM_IMG' => $images['forum'],
	'FORUM_NEW_IMG' => $images['forum_new'],
	'FORUM_LOCKED_IMG' => $images['forum_locked'],
	'TOTAL_POSTS' => sprintf($l_total_post_s, $total_posts),
	'FORUM_SUB_IMG'			=> $images['forum_sub'],
	'FORUM_NEW_SUB_IMG'		=> $images['forum_new_sub'],
	'FORUM_LOCKED_SUB_IMG'	=> $images['forum_locked_sub'],
#	'L_ONLINE_EXPLAIN' => $lang['Online_explain'],
	'U_INDEX' => URL::index(),
	'L_INDEX'=> _ForumsLANG,
	'L_FORUM' => $lang['Forum'],
	'L_TOPICS' => $lang['Topics'],
	'L_REPLIES' => $lang['Replies'],
	'L_VIEWS' => $lang['Views'],
	'L_POSTS' => $lang['Posts'],
	'L_LAST_POST' => $lang['Last_Post'],
	'L_NO_POSTS' => $lang['No_Posts'],
	'L_NO_NEW_POSTS' => $lang['No_new_posts'],
	'L_NO_NEW_SUB_POSTS'	=> $lang['No_new_sub_posts'],
	'L_NEW_POSTS' => $lang['New_posts'],
	'L_NEW_SUB_POSTS'		=> $lang['New_sub_posts'],
	'L_NO_NEW_POSTS_LOCKED' => $lang['No_new_posts_locked'],
	'L_NEW_POSTS_LOCKED' => $lang['New_posts_locked'],
	'L_MODERATOR' => $lang['Moderators'],
	'L_ADMINISTRATOR'		=> $lang['Auth_Admin'],
	'L_FORUM_LOCKED' => $lang['Forum_is_locked'],
	'L_SUBFORUM_LOCKED'		=> $lang['Subforum_is_locked'],
	'L_MARK_FORUMS_READ' => $lang['Mark_all_forums'],

	'U_MARK_READ' => URL::index('&amp;mark=forums')
));

# Okay, let's build the index
for ($i = 0; $i < $total_categories; ++$i) {
	$cat_id = $category_rows[$i]['cat_id'];

	# Should we display this category/forum set?
	$display_forums = false;
	for($j = 0; $j < $total_forums; ++$j) {
		if ( $forum_data[$j]['cat_id'] == $cat_id ) {
			$display_forums = true;
			break;
		}
	}

	# Yes, we should, so first dump out the category title, then, if appropriate the forum list
	$bid = 1000 + $cat_id;
	if ($display_forums) {
		$cattpl = 'forumrow';
		$template->assign_block_vars($cattpl, array(
			'S_IS_CAT'	  => TRUE,
			'CAT_ID'	=> $cat_id,
			'CAT_DESC'	=> $category_rows[$i]['cat_title'],
			'S_NOT_FIRST'	=> ($i == 0) ? FALSE : TRUE,
			'S_BID'     => $bid,
			'S_VISIBLE' => $Blocks->hideblock($bid) ? 'style="display:none"' : '',
			'S_HIDDEN'  => $Blocks->hideblock($bid) ? '' : 'style="display:none"',
			'U_VIEWCAT' => URL::index('&amp;'. POST_CAT_URL. "=$cat_id"))
		);

		if ($viewcat == $cat_id || $viewcat == -1) {
			foreach ($forum_data as $forum) {
				if ($forum['cat_id'] == $cat_id) {
					if ($forum['forum_type'] == 2) {
						$forumlink = URL::index($forum['forum_link']);
					} else if ($forum['forum_type'] == 3) {
						$forumlink = $forum['forum_link'];
					} else {
						$forumlink = URL::index('&amp;file=viewforum&amp;'. POST_FORUM_URL. '='. $forum['forum_id']);
					}
					$template->assign_block_vars('forumrow', array(
						'S_IS_CAT'	=> false,
						'S_IS_LINK' => ($forum['forum_type'] >= 2),

						'LAST_POST_IMG'		 => $images['icon_latest_reply'],
						'FORUM_ID'			 => $forum['forum_id'],
						'FORUM_FOLDER_IMG'	 => $forum['folder_image'],
						'FORUM_NAME'		 => $forum['forum_name'],
						'FORUM_DESC'		 => $forum['forum_desc'],
						'POSTS'				 => $forum['forum_posts'],
						'TOPICS'			 => $forum['forum_topics'],
						'LAST_POST_TIME'	 => ($forum['forum_last_post_id'] ) ? create_date($board_config['default_dateformat'], $forum['post_time']) : '',
						'LAST_POSTER'		 => ($forum['username'] != 'Anonymous') ? $forum['username'] : $forum['post_username'],
						'MODERATORS'		 => $forum['moderator_list'],
						'SUB_FORUMS'		 => ($forum['forum_type'] == 1),
						'SUBFORUMS'			 => $forum['subforums_list'],
//						'SUBFORUMS'		   => $subforums_list,
//						'L_SUBFORUM_STR'	   => $l_subforums,
						'L_SUBFORUM_STR'	 => $forum['subforums_lang'],
						'L_MODERATOR_STR'	 => $forum['l_moderators'],
						'L_FORUM_FOLDER_ALT' => $forum['folder_alt'],

						'U_LAST_POSTER'		 => ($forum['user_id'] > ANONYMOUS) ? URL::index('Your_Account&amp;profile='.$forum['user_id']) : '',
						'U_LAST_POST'		 => ($forum['forum_last_post_id']) ? URL::index('&amp;file=viewtopic&amp;'. POST_POST_URL. '='. $forum_data[$j]['forum_last_post_id']). '#'. $forum['forum_last_post_id'] : '',
						'U_VIEWFORUM'		 => $forumlink
					));
				}
			}
		}
	}
} // for ... categories

# Generate the page
$template->set_filenames(array('body' => 'forums/index_body.html'));

require_once('includes/phpBB/page_tail.php');
