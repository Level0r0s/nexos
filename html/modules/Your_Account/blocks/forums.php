<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2009 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/modules/Your_Account/blocks/forums.php,v $
  $Revision: 9.14 $
  $Author: djmaze $
  $Date: 2010/11/11 23:25:36 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }
if (is_user()) {
	// Last 10 Forum Topics
	if (is_active('Forums')) {
		if (!defined('IN_PHPBB') && !defined('PHPBB_INSTALLED')) {
			define('IN_PHPBB', true);
			define('PHPBB_INSTALLED', true);
			$phpbb_root_path = "./modules/Forums/";
			require_once($phpbb_root_path.'common.php');
		}
		get_lang('Forums');
		global $lang;
		$result = $db->sql_query('SELECT t.topic_id, t.topic_title, f.forum_name, t.forum_id FROM '.$prefix.'_bbtopics t, '.$prefix.'_bbforums f'
				." WHERE t.forum_id=f.forum_id AND t.topic_poster='$userinfo[user_id]' AND auth_read < 2 ORDER BY t.topic_time DESC LIMIT 10");

		if ($db->sql_numrows($result)) {

			$cpgtpl->assign_vars(array(
				'TOPICS_TITLE'		=> $username.'\'s '._LAST10BBTOPIC,
				'ALL_POSTS_URL'		=> URL::index('Forums&amp;file=search&amp;search_author='.$username),
				'ALL_POSTS'				=> sprintf($lang['Search_user_posts'], $username)
			));

			while (list($topic_id, $topic_title, $forum_name, $forum_id) = $db->sql_fetchrow($result)) {
        $cpgtpl->assign_block_vars('topic', array(
					'FORUM_URL'				=> URL::index('Forums&amp;file=viewforum&amp;f='.$forum_id),
					'FORUM_NAME'			=> $forum_name,
					'TOPIC_URL'				=> URL::index('Forums&amp;file=viewtopic&amp;t='.$topic_id),
					'TOPIC_TITLE'			=> $topic_title
				));
			}

      $cpgtpl->set_handle('ya_block', 'your_account/blocks/forums.html');
			$cpgtpl->display('ya_block');
		}
	}
}
