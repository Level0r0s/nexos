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
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/phpBB/page_header.php,v $
  $Revision: 9.9 $
  $Author: phoenix $
  $Date: 2009/05/28 11:06:43 $
**********************************************/
if (!defined('CPG_NUKE')) { die('You do not have permission to access this file'); }

define('HEADER_INC', TRUE);

global $userdata, $cpgtpl, $modheader, $MAIN_CFG, $BASEHREF, $pagetitle;

if (empty($gen_simple_header) && empty($gen_print_header)) {

	$pagetitle .= $page_title;

	# Generate HTML required for Mozilla Navigation bar
	$nav_link_proto = '<link rel="%s" href="%s" title="%s" />' . "\n";
	if (isset($nav_links)) {
	while( list($nav_item, $nav_array) = each($nav_links) ) {
		if ( !empty($nav_array['url']) ) {
			$modheader .= sprintf($nav_link_proto, $nav_item, $nav_array['url'], $nav_array['title']);
		} else {
			# We have a nested array, used for items like <link rel='chapter'> that can occur more than once.
			while( list(,$nested_array) = each($nav_array) ) {
				$nested_array['url'] = str_ireplace('&amp;', '&', $nested_array['url']);
				$modheader .= sprintf($nav_link_proto, $nav_item, $nested_array['url'], $nested_array['title']);
			}
		}
	}
}

	require_once('header.php');
	OpenTable();

	# Generate logged in/logged out status
	if (is_user()) {
		$u_login_logout = URL::index("Your_Account&amp;op=logout&amp;redirect=1");
		$l_login_logout = _LOGOUT . ' [ ' . $userdata['username'] . ' ]';
	} else {
		$u_login_logout = URL::index("Your_Account&amp;redirect=1");
		$l_login_logout = _LOGIN;
	}

	$s_last_visit = (is_user() ? create_date($board_config['default_dateformat'], $userdata['user_lastvisit']) : '');

	# Get basic (usernames + totals) online situation
	$logged_visible_online = $logged_hidden_online = $guests_online = 0;
	$online_userlist = '';

	# Obtain number of new private messages if user is logged in
	if (is_user()) {
		if ( $userdata['user_new_privmsg'] ) {
			$l_message_new = ( $userdata['user_new_privmsg'] == 1 ) ? $lang['New_pm'] : $lang['New_pms'];
			$l_privmsgs_text = sprintf($l_message_new, $userdata['user_new_privmsg']);
			if ( $userdata['user_last_privmsg'] > $userdata['user_lastvisit'] ) {
				$db->sql_query('UPDATE '.USERS_TABLE.' SET user_last_privmsg = '.$userdata['user_lastvisit'].' WHERE user_id = '.$userdata['user_id']);
				$icon_pm = $images['pm_new_msg'];
			} else {
				$icon_pm = $images['pm_new_msg'];
			}
		} else {
			$l_privmsgs_text = $lang['No_new_pm'];
			$icon_pm = $images['pm_no_new_msg'];
		}
		if ( $userdata['user_unread_privmsg'] ) {
			$l_message_unread = ( $userdata['user_unread_privmsg'] == 1 ) ? $lang['Unread_pm'] : $lang['Unread_pms'];
			$l_privmsgs_text_unread = sprintf($l_message_unread, $userdata['user_unread_privmsg']);
		} else {
			$l_privmsgs_text_unread = $lang['No_unread_pm'];
		}
		$l_topic_watch = $lang['Topic_watch'];
	} else {
		$icon_pm = $images['pm_no_new_msg'];
		$l_privmsgs_text = $lang['Login_check_pm'];
		$l_privmsgs_text_unread = '';
		$l_topic_watch = '';
	}
}

# Format Timezone. We are unable to use array_pop here, because of PHP3 compatibility
$l_timezone = explode('.', $board_config['board_timezone']);
$l_timezone = (count($l_timezone) > 1 && $l_timezone[count($l_timezone)-1] != 0) ? $lang[sprintf('%.1f', $board_config['board_timezone'])] : $lang[number_format($board_config['board_timezone'])];

# The following assigns all _common_ variables that may be used at any point
# in a template.
$template->assign_vars(array(
	'PAGE_TITLE' => $pagetitle,
	'LAST_VISIT_DATE' => sprintf($lang['You_last_visit'], $s_last_visit),
	'CURRENT_TIME' => sprintf($lang['Current_time'], create_date($board_config['default_dateformat'], time())),
	'LOGGED_IN_USER_LIST' => $online_userlist,
	#'RECORD_USERS' => sprintf($lang['Record_online_users'], $board_config['record_online_users'], create_date($board_config['default_dateformat'], $board_config['record_online_date'])),
	'PRIVATE_MESSAGE_INFO' => $l_privmsgs_text,
	'PRIVATE_MESSAGE_INFO_UNREAD' => $l_privmsgs_text_unread,
	'PRIVMSG_IMG' => $icon_pm,

	'L_USERNAME' => $lang['Username'],
	'L_PASSWORD' => $lang['Password'],
	'L_LOGIN_LOGOUT' => $l_login_logout,
	'L_LOGIN' => $lang['Login'],
	'L_LOG_ME_IN' => $lang['Log_me_in'],
	'L_AUTO_LOGIN' => $lang['Log_me_in'],
	'L_INDEX' => sprintf($lang['Forum_Index'], ''),
	'L_REGISTER' => $lang['Register'],
	'L_PROFILE' => _Your_AccountLANG,
	'L_SEARCH' => $lang['Search'],
	'L_PRIVATEMSGS' => $lang['Private_Messages'],
	'L_MEMBERLIST' => _Members_ListLANG,
	'L_FAQ' => $lang['FAQ'],
	'L_USERGROUPS' => $lang['Usergroups'],
	'L_SEARCH_NEW' => $lang['Search_new'],
	'L_SEARCH_24' => $lang['Search_last_24'],
	'L_SEARCH_UNANSWERED' => $lang['Search_unanswered'],
	'L_SEARCH_SELF' => $lang['Search_your_posts'],
	'L_WATCH_TOPIC' => $l_topic_watch,

	'U_SEARCH_UNANSWERED' => URL::index('&amp;file=search&amp;search_id=unanswered'),
	'U_SEARCH_SELF' => URL::index('&amp;file=search&amp;search_id=egosearch'),
	'U_SEARCH_NEW' => URL::index('&amp;file=search&amp;search_id=newposts'),
	'U_SEARCH_24' => URL::index('&amp;file=search&amp;search_id=last'),
	'U_INDEX' => URL::index(),
	'U_REGISTER' => URL::index('Your_Account&amp;file=register'),
	'U_PROFILE' => URL::index('Your_Account'),
	'U_PRIVATEMSGS' => URL::index('Private_Messages'),
	'U_SEARCH' => URL::index('&amp;file=search'),
	'U_MEMBERLIST' => URL::index('Members_List'),
	'U_MODCP' => URL::index('&amp;file=modcp'),
	'U_FAQ' => URL::index('&amp;file=faq'),
	'U_LOGIN_LOGOUT' => $u_login_logout,
	'U_MEMBERSLIST' => URL::index('Members_List'),
	'U_GROUP_CP' => URL::index('Groups'),
	'U_WATCH_TOPIC' => URL::index('&amp;file=search&amp;search_id=watch'),

	'S_CONTENT_DIRECTION' => $lang['DIRECTION'],
	'S_CONTENT_BASE'	 => $BASEHREF,
	'S_CONTENT_ENCODING' => $lang['ENCODING'],
	'S_CONTENT_DIR_LEFT' => $lang['LEFT'],
	'S_CONTENT_DIR_RIGHT' => $lang['RIGHT'],
	'S_TIMEZONE' => sprintf($lang['All_times'], $l_timezone),
	'S_LOGGED_IN' => is_user(),
	'S_LOGIN_ACTION' => URL::index('&amp;file=login'),
	'S_SIMPLE_HEADER'=> !empty($gen_simple_header),
	'S_PRINT_HEADER' => !empty($gen_print_header)
	)
);
