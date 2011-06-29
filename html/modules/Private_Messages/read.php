<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/modules/Private_Messages/read.php,v $
  $Revision: 9.28 $
  $Author: nanocaiordo $
  $Date: 2010/07/08 10:44:52 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }

	// Read a PM
	if (!empty($_GET['p'])) {
		$privmsgs_id = intval($_GET['p']);
	} else {
		cpg_error($lang['No_post_id']);
	}

	//
	// SQL to pull appropriate message, prevents nosey people
	// reading other peoples messages ... hopefully!
	//
	switch( $folder ) {
		case 'inbox':
			$pm_sql_user = "AND pm.privmsgs_to_userid = ".$userinfo['user_id']."
				AND ( pm.privmsgs_type = ".PM_READ_MAIL."
					OR pm.privmsgs_type = ".PM_NEW_MAIL."
					OR pm.privmsgs_type = ".PM_UNREAD_MAIL." )";
			break;
		case 'outbox':
			$pm_sql_user = "AND pm.privmsgs_from_userid =  ".$userinfo['user_id']."
				AND ( pm.privmsgs_type = ".PM_NEW_MAIL."
					OR pm.privmsgs_type = ".PM_UNREAD_MAIL." ) ";
			break;
		case 'sentbox':
			$pm_sql_user = "AND pm.privmsgs_from_userid =  ".$userinfo['user_id']."
				AND pm.privmsgs_type = ".PM_SENT_MAIL;
			break;
		case 'savebox':
			$pm_sql_user = "AND ( ( pm.privmsgs_to_userid = ".$userinfo['user_id']."
					AND pm.privmsgs_type = ".PM_SAVED_IN_MAIL." )
				OR ( pm.privmsgs_from_userid = ".$userinfo['user_id']."
					AND pm.privmsgs_type = ".PM_SAVED_OUT_MAIL." )
				)";
			break;
		default:
			cpg_error($lang['No_such_folder']);
			break;
	}

	//
	// Major query obtains the message ...
	//
	$result = $db->sql_query("SELECT u.username AS username_1, u.user_id AS user_id_1, u2.username AS username_2, u2.user_id AS user_id_2, u.user_posts, u.user_from, u.user_website, u.user_email, u.user_icq, u.user_aim, u.user_yim, u.user_skype, u.user_regdate, u.user_msnm, u.user_viewemail, u.user_rank, u.user_sig, u.user_avatar, pm.*, pmt.privmsgs_text
		FROM ".$prefix."_bbprivmsgs pm, ".$prefix."_bbprivmsgs_text pmt, ".$user_prefix."_users u, ".$user_prefix."_users u2
		WHERE pm.privmsgs_id = $privmsgs_id
			AND pmt.privmsgs_text_id = pm.privmsgs_id
			$pm_sql_user
			AND u.user_id = pm.privmsgs_from_userid
			AND u2.user_id = pm.privmsgs_to_userid");

	//
	// Did the query return any data?
	//
	if (!($privmsg = $db->sql_fetchrow($result))) {
		URL::redirect(URL::index("&folder=$folder"));
	}
	$db->sql_freeresult($result);
	$privmsg_id = $privmsg['privmsgs_id'];

	//
	// Is this a new message in the inbox? If it is then save
	// a copy in the posters sent box
	//
	if (($privmsg['privmsgs_type'] == PM_NEW_MAIL || $privmsg['privmsgs_type'] == PM_UNREAD_MAIL) && $folder == 'inbox')
	{
		// Update appropriate counter
		switch ($privmsg['privmsgs_type'])
		{
			case PM_NEW_MAIL:
				$sql = "user_new_privmsg = user_new_privmsg - 1";
				break;
			case PM_UNREAD_MAIL:
				$sql = "user_unread_privmsg = user_unread_privmsg - 1";
				break;
		}
		$db->sql_query("UPDATE ".$user_prefix."_users SET $sql WHERE user_id = ".$userinfo['user_id']);
		unset($_SESSION['CPG_USER']);
		$db->sql_query("UPDATE ".$prefix."_bbprivmsgs SET privmsgs_type = ".PM_READ_MAIL." WHERE privmsgs_id = ".$privmsg['privmsgs_id']);
		// Check to see if the poster has a 'full' sent box
		$result = $db->sql_query("SELECT COUNT(privmsgs_id) AS sent_items, MIN(privmsgs_date) AS oldest_post_time
			FROM ".$prefix."_bbprivmsgs
			WHERE privmsgs_type = ".PM_SENT_MAIL."
				AND privmsgs_from_userid = ".$privmsg['privmsgs_from_userid']);

		$sql_priority = (0 === strpos(SQL_LAYER, 'mysql') ? 'LOW_PRIORITY' : '');

		if ( $sent_info = $db->sql_fetchrow($result) )
		{
			if ( $sent_info['sent_items'] >= $MAIN_CFG['private_messages']['sentbox_max'] )
			{
				$result = $db->sql_query("SELECT privmsgs_id FROM ".$prefix."_bbprivmsgs
					WHERE privmsgs_type = ".PM_SENT_MAIL."
						AND privmsgs_date = ".$sent_info['oldest_post_time']."
						AND privmsgs_from_userid = ".$privmsg['privmsgs_from_userid']);
				$old_privmsgs_id = $db->sql_fetchrow($result);
				$old_privmsgs_id = $old_privmsgs_id['privmsgs_id'];
				$db->sql_query("DELETE $sql_priority FROM ".$prefix."_bbprivmsgs WHERE privmsgs_id = $old_privmsgs_id");
				$db->sql_query("DELETE $sql_priority FROM ".$prefix."_bbprivmsgs_text WHERE privmsgs_text_id = $old_privmsgs_id");
			}
		}

		//
		// This makes a copy of the post and stores it as a SENT message from the sendee. Perhaps
		// not the most DB friendly way but a lot easier to manage, besides the admin will be able to
		// set limits on numbers of storable posts for users ... hopefully!
		//
		$subject = Fix_Quotes($privmsg['privmsgs_subject']);
		$message = Fix_Quotes($privmsg['privmsgs_text']);
		$db->sql_query("INSERT $sql_priority INTO ".$prefix."_bbprivmsgs (privmsgs_type, privmsgs_subject, privmsgs_from_userid, privmsgs_to_userid, privmsgs_date, privmsgs_ip, privmsgs_enable_html, privmsgs_enable_bbcode, privmsgs_enable_smilies, privmsgs_attach_sig)
			VALUES (".PM_SENT_MAIL.", '$subject', ".$privmsg['privmsgs_from_userid'].", ".$privmsg['privmsgs_to_userid'].", ".$privmsg['privmsgs_date'].", ".$db->escape_binary($privmsg['privmsgs_ip']).", ".$privmsg['privmsgs_enable_html'].", ".$privmsg['privmsgs_enable_bbcode'].", ".$privmsg['privmsgs_enable_smilies'].", ".$privmsg['privmsgs_attach_sig'].")");
		$privmsg_sent_id = $db->sql_nextid('privmsgs_id');
		unset($subject);
		$db->sql_query("INSERT $sql_priority INTO ".$prefix."_bbprivmsgs_text (privmsgs_text_id, privmsgs_text)
			VALUES ($privmsg_sent_id, '$message')");
		unset($message);
	}

	//
	// Pick a folder, any folder, so long as it's one below ...
	//
	$post_urls = array(
		'post' => URL::index('&amp;mode=post'),
		'reply' => URL::index('&amp;mode=reply&amp;p='.$privmsg_id),
		'quote' => URL::index('&amp;mode=quote&amp;p='.$privmsg_id),
		'edit' => URL::index('&amp;mode=edit&amp;p='.$privmsg_id)
	);

	$u_post = $post_urls['post'];
	$u_reply = '';
	$u_quote = '';
	$u_edit = '';
	if ( $folder == 'inbox' ) {
		$l_box_name = $lang['Inbox'];
		$u_reply = $post_urls['reply'];
		$u_quote = $post_urls['quote'];
	}	else if ( $folder == 'outbox' ) {
		$l_box_name = $lang['Outbox'];
		$u_edit = $post_urls['edit'];
	}	else if ( $folder == 'savebox' ) {
		if ( $privmsg['privmsgs_type'] == PM_SAVED_IN_MAIL ) {
		$l_box_name = $lang['Saved'];
			$u_reply = $post_urls['reply'];
			$u_quote = $post_urls['quote'];
		}
	} else if ( $folder == 'sentbox' ) {
		$l_box_name = $lang['Sent'];
	}

	$s_hidden_fields = '<input type="hidden" name="mark[]" value="'.$privmsgs_id.'" />';

	$pagetitle = $lang['Read_pm'];
	require_once('header.php');

	$template->assign_vars(array(
		'S_FOLDER' => $folder,
		'BOX_NAME' => $l_box_name,

		'S_PM_ACTION' => URL::index('&amp;folder='.$folder),
		'S_HIDDEN_FIELDS' => $s_hidden_fields,

		'U_POST' => $u_post,
		'U_REPLY' => $u_reply,
		'U_QUOTE' => $u_quote,
		'U_EDIT' => $u_edit)

	);

	//
	// Processing of post
	//
	$post_subject = $privmsg['privmsgs_subject'];
	$private_message = $privmsg['privmsgs_text'];

	if ( $MAIN_CFG['private_messages']['allow_sig'] ) {
		$user_sig = ( $privmsg['privmsgs_from_userid'] == $userinfo['user_id'] ) ? $userinfo['user_sig'] : $privmsg['user_sig'];
	} else {
		$user_sig = '';
	}

	//
	// If the board has HTML off but the post has HTML
	// on then we process it, else leave it alone
	//
	if (!$MAIN_CFG['private_messages']['allow_html'] || !$userinfo['user_allowhtml'])
	{
		if ($user_sig != '')
		{
			$user_sig = preg_replace('#(<)([\/]?.*?)(>)#is', "&lt;\\2&gt;", $user_sig);
		}

		if ( $privmsg['privmsgs_enable_html'] )
		{
			$private_message = preg_replace('#(<)([\/]?.*?)(>)#is', "&lt;\\2&gt;", $private_message);
		}
	}

	if ( $user_sig != '' && $privmsg['privmsgs_attach_sig'] )
	{
		require_once('includes/nbbcode.php');
		$user_sig = ( $MAIN_CFG['private_messages']['allow_bbcode'] ) ? decode_bbcode($user_sig, 1, false) : preg_replace('/\:[0-9a-z\:]+\]/si', ']', $user_sig);
	}

	$private_message = ( $MAIN_CFG['private_messages']['allow_bbcode'] ) ? decode_bbcode($private_message, 1, false) : preg_replace('/\:[0-9a-z\:]+\]/si', ']', $private_message);

	$private_message = make_clickable($private_message);

	if ( $privmsg['privmsgs_attach_sig'] && $user_sig != '' )
	{
		$private_message .= '<br /><br />_________________<br />'.make_clickable($user_sig);
	}

	if ( $MAIN_CFG['private_messages']['allow_smilies'] && $privmsg['privmsgs_enable_smilies'] )
	{
		$private_message = set_smilies($private_message);
	}

//	  $private_message = str_replace("\n", '<br />', $private_message);

	$template->assign_vars(array(
		'MESSAGE_FROM' => $privmsg['username_1'],
		'MESSAGE_TO' => $privmsg['username_2'],
		'POST_SUBJECT' => $post_subject,
		'POST_DATE' => L10NTime::date($MAIN_CFG['global']['dateformat'], $privmsg['privmsgs_date'], $userinfo['user_dst'], $userinfo['user_timezone']),
		'MESSAGE' => $private_message,
		
		'U_MESSAGE_FROM' => URL::index('Your_Account&amp;profile='.$privmsg['username_1']),
		'U_MESSAGE_TO' => URL::index('Your_Account&amp;profile='.$privmsg['username_2']),
		)
	);

	// PM QUICK REPLY
	//if ( $MAIN_CFG['private_messages']['ropm_quick_reply'] && $privmsg['privmsgs_from_userid'] != $userinfo['user_id'] )
	if ($folder == 'inbox' && $MAIN_CFG['private_messages']['quick_reply']) {
		require_once('includes/nbbcode.php');

		$last_msg = $privmsg['privmsgs_text'];
		$last_msg = '[quote="'.$privmsg['username_1'].'"]'.$last_msg.'[/quote]';
		$last_msg = str_replace('\\', '\\\\', $last_msg); //'
		$last_msg = str_replace('"', '&quot;', $last_msg);
		$last_msg = str_replace(chr(13), '', $last_msg);
		$s_hidden_fields = '
<input type="hidden" name="folder" value="'.$folder.'" />
<input type="hidden" name="mode" value="post" />
<input type="hidden" name="username" value="'.$privmsg['username_1'].'" />';

		$template->assign_block_vars('quickreply', array(
			'POST_ACTION' => URL::index(),
			'S_HIDDEN_FIELDS' => $s_hidden_fields,
			'SUBJECT' => ( ( !preg_match('/^Re:/', $privmsg['privmsgs_subject']) ) ? 'Re: ' : '' ).$privmsg['privmsgs_subject'],
			'HTML_ON' => $MAIN_CFG['private_messages']['allow_html'],
			'SMILIES_ON' => $MAIN_CFG['private_messages']['allow_smilies'] ? smilies_table('onerow', 'message', 'qreply') : '',
			'BBCODE_ON' => $MAIN_CFG['private_messages']['allow_bbcode'] ? bbcode_table('message', 'qreply', 1) : '',
			'SIG_ON' => $MAIN_CFG['private_messages']['allow_sig'] && $user_sig != '',


			'S_HTML_CHECKED' => ( !$userinfo['user_allowhtml'] ) ? ' checked="checked"' : '',
			'S_BBCODE_CHECKED' => ( !$userinfo['user_allowbbcode'] ) ? ' checked="checked"' : '',
			'S_SMILIES_CHECKED' => ( !$userinfo['user_allowsmile'] ) ? ' checked="checked"' : '',
			'S_QREPLY_MSG' => $last_msg,
			'S_SIG_CHECKED' => ($userinfo['user_sig'] != '' && $MAIN_CFG['private_messages']['allow_sig']) ? $userinfo['user_sig'] : ''

			));

		$template->assign_vars(array(
			'L_MESSAGE' => $lang['Message'],
			'L_OPTIONS' => $lang['Options'],
			'L_QUOTE_SELECTED' => $lang['PMQR_QuoteSelelected'],
			'L_NO_TEXT_SELECTED' => $lang['PMQR_QuoteSelelectedEmpty'],
			'L_ERROR' => $lang['Error'],
			'L_QUOTE_LAST_MESSAGE' => $lang['PMQR_Quick_quote'],
			'L_QUICK_REPLY' => $lang['PMQR_Quick_Reply'],
		));
	}
$template->set_filenames(array('body' => 'private_msgs/read_body.html'));
$template->display('body');
