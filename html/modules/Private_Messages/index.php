<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  Original copyright : (C) 2001 The phpBB Group

  $Source: /cvs/html/modules/Private_Messages/index.php,v $
  $Revision: 9.33 $
  $Author: nanocaiordo $
  $Date: 2010/07/08 10:44:52 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }
require_once('modules/'.$module_name.'/init.inc');
global $SESS;
$folders = array(
	'inbox'   => $lang['Inbox'],
	'sentbox' => $lang['Sentbox'],
	'outbox'  => $lang['Outbox'],
	'savebox' => $lang['Savebox']
);
if (isset($_GET['folder']) && isset($folders[$_GET['folder']])) { $pagetitle = $folders[$_GET['folder']]; }
$user_sig = '';
$html_on = $bbcode_on = $smilies_on = $attach_sig = 0;

// Start main
//
if ( $mode == 'newpm' ) {
	// PM popup
	if (is_user()) {
		if ($userinfo['user_new_privmsg']) {
			$l_new_message = ( $userinfo['user_new_privmsg'] == 1 ) ? $lang['You_new_pm'] : $lang['You_new_pms'];
		} else {
			$l_new_message = $lang['You_no_new_pm'];
		}
		$l_new_message .= '<br /><br />'.sprintf($lang['Click_view_privmsg'], '<a href="'.URL::index('Private_Messages&amp;folder=inbox').'" onclick="jump_to_inbox();return false;" target="_blank">', '</a>');
	} else {
		$l_new_message = $lang['Login_check_pm'];
	}
	$template->assign_vars(array(
		'L_CLOSE_WINDOW' => $lang['Close_window'],
		'L_MESSAGE' => $l_new_message)
	);
	$template->set_handle('body', 'private_msgs/popup.html');
	$template->display('body');

} else if ( $mode == 'read' ) {
	require_once('modules/'.$module_name.'/read.php');
} else if ( ( $delete && $mark_list ) || $delete_all ) {
	require_once('modules/'.$module_name.'/delete.php');
} else if ( $save && $mark_list && $folder != 'savebox' && $folder != 'outbox' ) {
	if (sizeof($mark_list)) {
		require_once('modules/'.$module_name.'/save.php');
	}
} else if ($submit || $refresh || $mode != '') {
	/*if ($MAIN_CFG['private_messages']['allow_html']) {
		$html_on = intval(($submit || $refresh) ? empty($_POST['disable_html']) : $userinfo['user_allowhtml']);
	}*/
	if ($MAIN_CFG['private_messages']['allow_bbcode']) {
		$bbcode_on = intval(($submit || $refresh) ? empty($_POST['disable_bbcode']) : $userinfo['user_allowbbcode']);
	}
	if ($MAIN_CFG['private_messages']['allow_smilies']) {
		$smilies_on = intval(($submit || $refresh) ? empty($_POST['disable_smilies']) : $userinfo['user_allowsmile']);
	}
	/*if ($MAIN_CFG['private_messages']['allow_sig']) {
		$attach_sig = ($submit || $refresh) ? intval(!empty($_POST['attach_sig'])) : $userinfo['user_attachsig'];
		$user_sig = $userinfo['user_sig'];
	}*/
	if ( $submit && $mode != 'edit' ) {
		// Flood control
		list($last_post_time) = $db->sql_ufetchrow("SELECT MAX(privmsgs_date) FROM ".$prefix."_bbprivmsgs
		WHERE privmsgs_from_userid=".$userinfo['user_id'], SQL_NUM);
		if ((time() - $last_post_time) < $MAIN_CFG['private_messages']['flood_interval']) {
			cpg_error($lang['Flood_Error']);
		}
	}

	if ($submit) {
		if ( !empty($_POST['username']) ) {
			$to_username = $_POST['username'];
			$sql = "SELECT user_id, user_notify_pm, user_email, user_lang, user_active FROM ".$user_prefix."_users
				WHERE username = '".Fix_Quotes($to_username)."' AND user_id > 1";
			$result = $db->sql_query($sql);
			if ($db->sql_numrows($result)<1) {
				$error = TRUE;
				$error_msg = $lang['No_such_user'];
			}
			$to_userinfo = $db->sql_fetchrow($result);
		} else {
			$error = TRUE;
			$error_msg .= ( ( !empty($error_msg) ) ? '<br />' : '' ).$lang['No_to_user'];
		}
		$privmsg_subject = trim(strip_tags($_POST['subject']));
		if ( empty($privmsg_subject) ) {
			$error = TRUE;
			$error_msg .= ( ( !empty($error_msg) ) ? '<br />' : '' ).$lang['Empty_subject'];
		}
		if ( !empty($_POST['message']) ) {
			if ( !$error ) {
				$privmsg_message = message_prepare(((isset($_POST['quick_quote']) && !empty($_POST['quick_quote'])) ? $_POST['quick_quote'] : '').$_POST['message'], $html_on, $bbcode_on);
			}
		} else {
			$error = TRUE;
			$error_msg .= ( ( !empty($error_msg) ) ? '<br />' : '' ).$lang['Empty_message'];
		}
	}

	if ($submit && !$error)
	{
		//
		// Has admin prevented user from sending PM's?
		//
		if (!$userinfo['user_allow_pm']) {
			$message = $lang['Cannot_send_privmsg'];
			cpg_error($message);
		}
		$msg_time = time();
		if ($mode != 'edit') {
			//
			// See if recipient is at their inbox limit
			//
			$sql = "SELECT COUNT(privmsgs_id) AS inbox_items, MIN(privmsgs_date) AS oldest_post_time
				FROM ".$prefix."_bbprivmsgs
				WHERE ( privmsgs_type = ".PM_NEW_MAIL."
					 OR privmsgs_type = ".PM_READ_MAIL."
					 OR privmsgs_type = ".PM_UNREAD_MAIL." )
					AND privmsgs_to_userid = ".$to_userinfo['user_id'];
			$result = $db->sql_query($sql);
			$sql_priority = (0 === strpos(SQL_LAYER, 'mysql') ? 'LOW_PRIORITY' : '');
			if ( $inbox_info = $db->sql_fetchrow($result) ) {
				if ( $inbox_info['inbox_items'] >= $MAIN_CFG['private_messages']['inbox_max'] ) {
					$sql = "SELECT privmsgs_id FROM ".$prefix."_bbprivmsgs
						WHERE ( privmsgs_type = ".PM_NEW_MAIL."
							 OR privmsgs_type = ".PM_READ_MAIL."
							 OR privmsgs_type = ".PM_UNREAD_MAIL."  )
							AND privmsgs_date = ".$inbox_info['oldest_post_time']."
							AND privmsgs_to_userid = ".$to_userinfo['user_id'];
					$result = $db->sql_query($sql);
					$old_privmsgs_id = $db->sql_fetchrow($result);
					$old_privmsgs_id = $old_privmsgs_id['privmsgs_id'];
					$db->sql_query("DELETE $sql_priority FROM ".$prefix."_bbprivmsgs
					WHERE privmsgs_id = $old_privmsgs_id");
					$db->sql_query("DELETE $sql_priority FROM ".$prefix."_bbprivmsgs_text
					WHERE privmsgs_text_id = $old_privmsgs_id");
				}
			}

			$db->sql_query("INSERT INTO ".$prefix."_bbprivmsgs (privmsgs_type, privmsgs_subject, privmsgs_from_userid, privmsgs_to_userid, privmsgs_date, privmsgs_ip, privmsgs_enable_html, privmsgs_enable_bbcode, privmsgs_enable_smilies, privmsgs_attach_sig)
				VALUES (".PM_NEW_MAIL.", '".Fix_Quotes($privmsg_subject)."', ".$userinfo['user_id'].", ".$to_userinfo['user_id'].", $msg_time, ".$userinfo['user_ip'].", $html_on, $bbcode_on, $smilies_on, $attach_sig)");
			$privmsg_sent_id = $db->sql_nextid('privmsgs_id');
			$db->sql_query("INSERT INTO ".$prefix."_bbprivmsgs_text (privmsgs_text_id, privmsgs_text)
			VALUES ($privmsg_sent_id, '".Fix_Quotes($privmsg_message)."')");
		} else {
			$db->sql_query("UPDATE ".$prefix."_bbprivmsgs
				SET privmsgs_type = ".PM_NEW_MAIL.", privmsgs_subject = '".Fix_Quotes($privmsg_subject)."', privmsgs_from_userid = ".$userinfo['user_id'].", privmsgs_to_userid = ".$to_userinfo['user_id'].", privmsgs_date = $msg_time, privmsgs_ip = '".$userinfo['user_ip']."', privmsgs_enable_html = $html_on, privmsgs_enable_bbcode = $bbcode_on, privmsgs_enable_smilies = $smilies_on, privmsgs_attach_sig = $attach_sig
				WHERE privmsgs_id = $privmsg_id");
			$db->sql_query("UPDATE ".$prefix."_bbprivmsgs_text
			SET privmsgs_text = '".Fix_Quotes($privmsg_message)."'
			WHERE privmsgs_text_id = $privmsg_id");
		}

		if ( $mode != 'edit' )
		{
			//
			// Add to the users new pm counter
			//
			$sql = "UPDATE ".$user_prefix."_users
				SET user_new_privmsg = user_new_privmsg + 1, user_last_privmsg = ".time()."
				WHERE user_id = ".$to_userinfo['user_id'];
			$status = $db->sql_query($sql);
			unset($_SESSION['CPG_USER']);

			if ( $to_userinfo['user_notify_pm'] && !empty($to_userinfo['user_email']) && $to_userinfo['user_active'] )
			{
				require_once('includes/phpBB/emailer.php');
				$emailer = new emailer();

				$emailer->from($MAIN_CFG['global']['notify_from']);
				$emailer->replyto($MAIN_CFG['global']['notify_email']);

				$emailer->use_template('privmsg_notify', $to_userinfo['user_lang']);
				$emailer->email_address($to_userinfo['user_email']);
				$emailer->set_subject($lang['Notification_subject']);

				$emailer->assign_vars(array(
					'USERNAME' => $to_username,
					'SITENAME' => $MAIN_CFG['global']['sitename'],
					'EMAIL_SIG' => (!empty($MAIN_CFG['private_messages']['email_sig'])) ? str_replace('<br />', "\n", "-- \n".$MAIN_CFG['private_messages']['email_sig']) : '',

					'U_INBOX' => URL::index('&amp;folder=inbox', true, true)
					)
				);

				$emailer->send();
				$emailer->reset();
			}
		}
		URL::refresh(URL::index('&folder=inbox'));
		$msg = $lang['Message_sent'].'<br /><br />'.sprintf($lang['Click_return_inbox'], '<a href="'.URL::index('&amp;folder=inbox').'">', '</a> ').'<br /><br />'.sprintf($lang['Click_return_index'], '<a href="'.$mainindex.'">', '</a>');
		cpg_error($msg);
	}
	else if ($preview || $refresh || $error)
	{
		//
		// If we're previewing or refreshing then obtain the data
		// passed to the script, process it a little, do some checks
		// where neccessary, etc.
		//
		$to_username = ( isset($_POST['username']) ) ? trim(strip_tags($_POST['username'])) : '';
		$privmsg_subject = ( isset($_POST['subject']) ) ? trim(strip_tags($_POST['subject'])) : '';
		$privmsg_message = ( isset($_POST['message']) ) ? trim($_POST['message']) : '';
		$privmsg_message = preg_replace('#<textarea>#si', '&lt;textarea&gt;', $privmsg_message);

		//
		// Do mode specific things
		//
		if ($mode == 'post') {
			$page_title = $lang['Post_new_pm'];
			/*$user_sig = ( $userinfo['user_sig'] != '' && $MAIN_CFG['private_messages']['allow_sig'] ) ? $userinfo['user_sig'] : '';*/
		}
		else if ($mode == 'reply') {
			$page_title = $lang['Post_reply_pm'];
			/*$user_sig = ( $userinfo['user_sig'] != '' && $MAIN_CFG['private_messages']['allow_sig'] ) ? $userinfo['user_sig'] : '';*/
		}
		else if ($mode == 'edit') {
			$page_title = $lang['Edit_pm'];
			$sql = "SELECT u.user_id, u.user_sig
				FROM ".$prefix."_bbprivmsgs pm, ".$user_prefix."_users u
				WHERE pm.privmsgs_id = $privmsg_id
					AND u.user_id = pm.privmsgs_from_userid";
			$result = $db->sql_query($sql);
			if ($postrow = $db->sql_fetchrow($result) ) {
				if ( $userinfo['user_id'] != $postrow['user_id'] ) {
					cpg_error($lang['Edit_own_posts']);
				}
				/*$user_sig = ( $postrow['user_sig'] != '' && $MAIN_CFG['private_messages']['allow_sig'] ) ? $postrow['user_sig'] : '';*/
			}
		}
	}
	else
	{
		if ( !$privmsg_id && ( $mode == 'reply' || $mode == 'edit' || $mode == 'quote' ) ) {
			cpg_error($lang['No_post_id']);
		}

		if ( !empty($_GET['u']) )
		{
			$user_id = intval($_GET['u']);
			$result = $db->sql_query("SELECT username FROM ".$user_prefix."_users
			WHERE user_id = $user_id AND user_id > 1");
			if ( $row = $db->sql_fetchrow($result) ) {
				$to_username = $row['username'];
			} else {
				$error = TRUE;
				$error_msg = $lang['No_such_user'];
			}
		}

		if ( $mode == 'edit' )
		{
			$result = $db->sql_query("SELECT pm.*, pmt.privmsgs_text, u.username, u.user_id, u.user_sig
				FROM ".$prefix."_bbprivmsgs pm, ".$prefix."_bbprivmsgs_text pmt, ".$user_prefix."_users u
				WHERE pm.privmsgs_id = $privmsg_id
					AND pmt.privmsgs_text_id = pm.privmsgs_id
					AND pm.privmsgs_from_userid = ".$userinfo['user_id']."
					AND ( pm.privmsgs_type = ".PM_NEW_MAIL."
						OR pm.privmsgs_type = ".PM_UNREAD_MAIL." )
					AND u.user_id = pm.privmsgs_to_userid");
			if (!($privmsg = $db->sql_fetchrow($result))) {
				URL::redirect(URL::index('&amp;folder='.$folder, true));
			}
			$privmsg_subject = $privmsg['privmsgs_subject'];
			$privmsg_message = $privmsg['privmsgs_text'];
			$privmsg_message = str_replace('<br />', "\n", $privmsg_message);
			$privmsg_message = preg_replace('#</textarea>#si', '&lt;/textarea&gt;', $privmsg_message);
			/*$user_sig = ( $MAIN_CFG['private_messages']['allow_sig'] ) ? (($privmsg['privmsgs_type'] == PM_NEW_MAIL) ? $user_sig : $privmsg['user_sig']) : '';*/
			$to_username = $privmsg['username'];
			$to_userid = $privmsg['user_id'];
		}
		else if ( $mode == 'reply' || $mode == 'quote' )
		{
			$result = $db->sql_query("SELECT pm.privmsgs_subject, pm.privmsgs_date, pmt.privmsgs_text, u.username, u.user_id
				FROM ".$prefix."_bbprivmsgs pm, ".$prefix."_bbprivmsgs_text pmt, ".$user_prefix."_users u
				WHERE pm.privmsgs_id = $privmsg_id
					AND pmt.privmsgs_text_id = pm.privmsgs_id
					AND pm.privmsgs_to_userid = ".$userinfo['user_id']."
					AND u.user_id = pm.privmsgs_from_userid");

			if (!($privmsg = $db->sql_fetchrow($result))) {
				URL::redirect(URL::index('&amp;folder='.$folder, true));
			}

			$privmsg_subject = ( ( !preg_match('/^Re:/', $privmsg['privmsgs_subject']) ) ? 'Re: ' : '' ).$privmsg['privmsgs_subject'];

			$to_username = $privmsg['username'];
			$to_userid = $privmsg['user_id'];

			if ( $mode == 'quote' )
			{
				$privmsg_message = $privmsg['privmsgs_text'];
				$privmsg_message = str_replace('<br />', "\n", $privmsg_message);
				$privmsg_message = preg_replace('#</textarea>#si', '&lt;/textarea&gt;', $privmsg_message);
				$msg_date =	 formatDateTime($privmsg['privmsgs_date'], $MAIN_CFG['global']['dateformat']);
				$privmsg_message = '[quote="'.$to_username.'"]'.$privmsg_message.'[/quote]';
				$mode = 'reply';
			}
		}
	}

	//
	// Has admin prevented user from sending PM's?
	//
	if ( !$userinfo['user_allow_pm'] && $mode != 'edit' ) {
		$message = $lang['Cannot_send_privmsg'];
		cpg_error($message);
	}

	//
	// Start output, first preview, then errors then post form
	//
	if ( $mode == 'post' ) {
		$pagetitle = $lang['Send_a_new_message'];
	} else if ( $mode == 'reply' ) {
		$pagetitle = $lang['Send_a_reply'];
	} else if ( $mode == 'edit' ) {
		$pagetitle = $lang['Edit_message'];
	}
	require_once('header.php');

	if ($preview && !$error) {

		$preview_message = message_prepare($privmsg_message, $html_on, $bbcode_on);
		$privmsg_message = preg_replace($html_entities_match, $html_entities_replace, $privmsg_message);

		//
		// Finalise processing as per viewtopic
		//
		/*if (!$html_on || ($html_on && !$userinfo['user_allowhtml'])) {
			if ($user_sig) {
				$user_sig = htmlprepare($user_sig);
			}
		}
		if ($attach_sig && $user_sig) {
			$user_sig = decode_bbcode($user_sig, 1, false);
		}
		*/

		if ($bbcode_on) {
			$preview_message = decode_bbcode($preview_message, 1);
		}
/*
		if ( $attach_sig && $user_sig != '' ) {
			$preview_message = $preview_message.'<br /><br />_________________<br />'.$user_sig;
		}
*/
		$preview_subject = $privmsg_subject;

		if ( $smilies_on ) {
			$preview_message = set_smilies($preview_message);
		}

		$preview_message = make_clickable($preview_message);

		$s_hidden_fields = '<input type="hidden" name="folder" value="'.$folder.'" />';
		$s_hidden_fields .= '<input type="hidden" name="mode" value="'.$mode.'" />';

		if ( isset($privmsg_id) ) {
			$s_hidden_fields .= '<input type="hidden" name="p" value="'.$privmsg_id.'" />';
		}

		$template->assign_vars(array(
			'TOPIC_TITLE' => $preview_subject,
			'POST_SUBJECT' => $preview_subject,
			'MESSAGE_TO' => $to_username,
			'MESSAGE_FROM' => $userinfo['username'],
			'POST_DATE' => L10NTime::date($MAIN_CFG['global']['dateformat'], time(), $userinfo['user_dst'], $userinfo['user_timezone']),
			'PREVIEW_MESSAGE' => $preview_message,
			'MESSAGE' => $preview_message, // for old template system

			'S_HIDDEN_FIELDS' => $s_hidden_fields)
		);
	}

	//
	// Start error handling
	//
	if ($error) {
		$template->assign_vars(array('ERROR_MESSAGE' => $error_msg));
	} else {
		$template->assign_vars(array('ERROR_MESSAGE' => ''));
	}

	//
	// Enable extensions in posting_body
	//
	$template->assign_block_vars('switch_privmsg', array());

	//
	// BBCode toggle selection
	//
	if ( $MAIN_CFG['private_messages']['allow_bbcode'] ) {
		$bbcode_status = $lang['BBCode_is_ON'];
		$template->assign_block_vars('switch_bbcode_checkbox', array());
	} else {
		$bbcode_status = $lang['BBCode_is_OFF'];
	}

	if ( $mode == 'reply' ) { $mode = 'post'; }

	$s_hidden_fields = '<input type="hidden" name="folder" value="'.$folder.'" />';
	$s_hidden_fields .= '<input type="hidden" name="mode" value="'.$mode.'" />';
	if ( $mode == 'edit' ) {
		$s_hidden_fields .= '<input type="hidden" name="p" value="'.$privmsg_id.'" />';
	}

	if (!empty($privmsg_subject)) {
		$privmsg_subject = htmlprepare($privmsg_subject);
	}

	$template->assign_vars(array(
		'S_FOLDER' => $folder,
		'S_PREVIEW_BOX' => ($preview && !$error),
		'SUBJECT' => $privmsg_subject,
		'USERNAME' => !empty($to_username) ? htmlprepare($to_username) : '',
		'MESSAGE' => isset($privmsg_message) ? $privmsg_message : '',
		'HTML_ON' => false /*$MAIN_CFG['private_messages']['allow_html']*/,
		'BBCODE_ON' => $MAIN_CFG['private_messages']['allow_bbcode'] ? bbcode_table('message', 'post', 1) : '',
		'SMILIES_ON' => $MAIN_CFG['private_messages']['allow_smilies'] ? smilies_table('inline', 'message', 'post') : '',
		'SIG_ON' => $MAIN_CFG['private_messages']['allow_sig'] && $user_sig != '', /* always false */
		'BBCODE_STATUS' => sprintf($bbcode_status, '<a href="'.URL::index('Forums&amp;file=faq&amp;mode=bbcode').'" target="_phpbbcode">', '</a>'),

		'L_SPELLCHECK' => $lang['Spellcheck'],
		'L_CANCEL' => $lang['Cancel'],
		'L_POST_A' => $pagetitle,
		'L_FIND' => $lang['Find'],

		'L_EMPTY_MESSAGE' => $lang['Empty_message'],
		'S_HTML_CHECKED' => ( !$html_on ) ? ' checked="checked"' : '',
		'S_BBCODE_CHECKED' => ( !$bbcode_on ) ? ' checked="checked"' : '',
		'S_SMILIES_CHECKED' => ( !$smilies_on ) ? ' checked="checked"' : '',
		'S_SIGNATURE_CHECKED' => ( $attach_sig ) ? ' checked="checked"' : '',
		'S_HIDDEN_FORM_FIELDS' => $s_hidden_fields,

		'U_SEARCH_USER' => URL::index('Forums&amp;file=search&amp;mode=searchuser&amp;popup=1', true, true),
		'U_VIEW_FORUM' => URL::index())
	);

	$template->set_handle('body', 'private_msgs/posting_body.html');
	$template->display('body');

	return;
}

//
// Update unread status
//
$db->sql_query("UPDATE ".$user_prefix."_users
	SET user_unread_privmsg = user_unread_privmsg + user_new_privmsg, user_new_privmsg = 0, user_last_privmsg = ".$CPG_SESS['session_start']."
	WHERE user_id = ".$userinfo['user_id']);

$db->sql_query("UPDATE ".$prefix."_bbprivmsgs
	SET privmsgs_type = ".PM_UNREAD_MAIL."
	WHERE privmsgs_type = ".PM_NEW_MAIL."
		AND privmsgs_to_userid = ".$userinfo['user_id']);

//
// Reset PM counters
//
$userinfo['user_new_privmsg'] = 0;
$userinfo['user_unread_privmsg'] = ( $userinfo['user_new_privmsg'] + $userinfo['user_unread_privmsg'] );
unset($_SESSION['CPG_USER']);

//
// Generate page
//

if ($mode == '') {
	define('HEADER_INC', TRUE);
	require_once('header.php');
}

//
// New message
//
$post_new_mesg_url = '<a href="'.URL::index('&amp;mode=post').'"></a>';

//
// General SQL to obtain messages
//
$sql_tot = "SELECT COUNT(privmsgs_id) AS total FROM ".$prefix."_bbprivmsgs ";
$sql = "SELECT pm.privmsgs_type, pm.privmsgs_id, pm.privmsgs_date, pm.privmsgs_subject, u.user_id, u.username
	FROM ".$prefix."_bbprivmsgs pm, ".$user_prefix."_users u ";
switch ($folder)
{
	case 'inbox':
		$sql_tot .= 'WHERE privmsgs_to_userid = '.$userinfo['user_id'].'
			AND ( privmsgs_type =  '.PM_NEW_MAIL.'
				OR privmsgs_type = '.PM_READ_MAIL.'
				OR privmsgs_type = '.PM_UNREAD_MAIL.' )';

		$sql .= 'WHERE pm.privmsgs_to_userid = '.$userinfo['user_id'].'
			AND u.user_id = pm.privmsgs_from_userid
			AND ( pm.privmsgs_type =  '.PM_NEW_MAIL.'
				OR pm.privmsgs_type = '.PM_READ_MAIL.'
				OR privmsgs_type = '.PM_UNREAD_MAIL.' )';
		break;

	case 'outbox':
		$sql_tot .= 'WHERE privmsgs_from_userid = '.$userinfo['user_id'].'
			AND ( privmsgs_type =  '.PM_NEW_MAIL.'
				OR privmsgs_type = '.PM_UNREAD_MAIL.' )';

		$sql .= 'WHERE pm.privmsgs_from_userid = '.$userinfo['user_id'].'
			AND u.user_id = pm.privmsgs_to_userid
			AND ( pm.privmsgs_type =  '.PM_NEW_MAIL.'
				OR privmsgs_type = '.PM_UNREAD_MAIL.' )';
		break;

	case 'sentbox':
		$sql_tot .= 'WHERE privmsgs_from_userid = '.$userinfo['user_id'].'
			AND privmsgs_type =	 '.PM_SENT_MAIL;

		$sql .= 'WHERE pm.privmsgs_from_userid = '.$userinfo['user_id'].'
			AND u.user_id = pm.privmsgs_to_userid
			AND pm.privmsgs_type =	'.PM_SENT_MAIL;
		break;

	case 'savebox':
		$sql_tot .= 'WHERE ( ( privmsgs_to_userid = '.$userinfo['user_id'].'
				AND privmsgs_type = '.PM_SAVED_IN_MAIL.' )
			OR ( privmsgs_from_userid = '.$userinfo['user_id'].'
				AND privmsgs_type = '.PM_SAVED_OUT_MAIL.') )';

		$sql .= 'WHERE u.user_id = pm.privmsgs_from_userid
			AND ( ( pm.privmsgs_to_userid = '.$userinfo['user_id'].'
				AND pm.privmsgs_type = '.PM_SAVED_IN_MAIL.' )
			OR ( pm.privmsgs_from_userid = '.$userinfo['user_id'].'
				AND pm.privmsgs_type = '.PM_SAVED_OUT_MAIL.' ) )';
		break;

	default:
		cpg_error($lang['No_such_folder']);
		break;
}

//
// Show messages over previous x days/months
//
$msg_days = 0;
if ($submit_msgdays && (!empty($_POST['msgdays']) || !empty($_GET['msgdays']))) {
	$msg_days = (!empty($_POST['msgdays'])) ? intval($_POST['msgdays']) : intval($_GET['msgdays']);
	$min_msg_time = time() - ($msg_days * 86400);

	$limit_msg_time_total = " AND privmsgs_date > $min_msg_time";
	$limit_msg_time = " AND pm.privmsgs_date > $min_msg_time ";

	if (!empty($_POST['msgdays'])) {
		$start = 0;
	}
} else {
	$limit_msg_time_total = $limit_msg_time = '';
	$post_days = 0;
}

$sql .= $limit_msg_time." ORDER BY pm.privmsgs_date DESC
LIMIT $start, ".$MAIN_CFG['private_messages']['per_page'];
$sql_all_tot = $sql_tot;
$sql_tot .= $limit_msg_time_total;

//
// Get messages
//
$result = $db->sql_query($sql_tot);
$pm_total = ($row = $db->sql_fetchrow($result)) ? $row['total'] : 0;

$result = $db->sql_query($sql_all_tot);
$pm_all_total = ($row = $db->sql_fetchrow($result)) ? $row['total'] : 0;

//
// Build select box
//
$previous_days = array(0, 1, 7, 14, 30, 90, 180, 364);
$previous_days_text = array($lang['All_Posts'], $lang['1_Day'], $lang['7_Days'], $lang['2_Weeks'], $lang['1_Month'], $lang['3_Months'], $lang['6_Months'], $lang['1_Year']);

$select_msg_days = '';
for ($i = 0; $i < count($previous_days); ++$i) {
	$selected = ( $msg_days == $previous_days[$i] ) ? ' selected="selected"' : '';
	$select_msg_days .= '<option value="'.$previous_days[$i].'"'.$selected.'>'.$previous_days_text[$i].'</option>';
}

//
// Define correct icons
//
switch ($folder)
{
	case 'inbox':
		$l_box_name = $lang['Inbox'];
		break;
	case 'outbox':
		$l_box_name = $lang['Outbox'];
		break;
	case 'savebox':
		$l_box_name = $lang['Savebox'];
		break;
	case 'sentbox':
		$l_box_name = $lang['Sentbox'];
		break;
}

//
// Output data for inbox status
//
$l_box_size_status = $inbox_limit_img_length = $inbox_limit_pct = '';
if ($folder != 'outbox') {
	$inbox_limit_pct = ( $MAIN_CFG['private_messages'][$folder.'_max'] > 0 ) ? round(( $pm_all_total / $MAIN_CFG['private_messages'][$folder.'_max'] ) * 100) : 100;
	$inbox_limit_img_length = ( $MAIN_CFG['private_messages'][$folder.'_max'] > 0 ) ? round(( $pm_all_total / $MAIN_CFG['private_messages'][$folder.'_max'] ) * $MAIN_CFG['private_messages']['graphic_length']) : $MAIN_CFG['private_messages']['graphic_length'];
	$inbox_limit_remain = ( $MAIN_CFG['private_messages'][$folder.'_max'] > 0 ) ? $MAIN_CFG['private_messages'][$folder.'_max'] - $pm_all_total : 0;
	$template->assign_block_vars('switch_box_size_notice', array());
	switch ($folder) {
		case 'inbox':
			$l_box_size_status = sprintf($lang['Inbox_size'], $inbox_limit_pct);
			break;
		case 'sentbox':
			$l_box_size_status = sprintf($lang['Sentbox_size'], $inbox_limit_pct);
			break;
		case 'savebox':
			$l_box_size_status = sprintf($lang['Savebox_size'], $inbox_limit_pct);
			break;
	}
}

//
// Dump vars to template
//
$template->assign_vars(array(
	'FORM_ACTION' => URL::index('&amp;folder='.$folder),
	'BOX_NAME' => $l_box_name,
	'INBOX_LIMIT_IMG_WIDTH' => $inbox_limit_img_length,
	'INBOX_LIMIT_PERCENT' => $inbox_limit_pct,
	'BOX_SIZE_STATUS' => $l_box_size_status,
	'T_TD_COLOR2' => $bgcolor4,

	'S_FOLDER' => $folder,
	'S_HIDDEN_FIELDS' => '',
	'S_POST_NEW_MSG' => $post_new_mesg_url,
	'S_SELECT_MSG_DAYS' => $select_msg_days
	)
);

//
// Okay, let's build the correct folder
//
$result = $db->sql_query($sql);
if ($row = $db->sql_fetchrow($result)) {
	$i = 0;
	do {

		$row_color = ( !($i % 2) ) ? $bgcolor2 : $bgcolor1;
		$row_class = ( !($i % 2) ) ? 'row1' : 'row2';
		++$i;

		$template->assign_block_vars('listrow', array(
			'ROW_COLOR' => $row_color,
			'ROW_CLASS' => $row_class,
			'FROM' => $row['username'],
			'SUBJECT' => $row['privmsgs_subject'],

			'DATE' => L10NTime::date($MAIN_CFG['global']['dateformat'], $row['privmsgs_date'], $userinfo['user_dst'], $userinfo['user_timezone']),
			'PM_NEW_MAIL' => ($row['privmsgs_type'] == PM_UNREAD_MAIL),
			'MSG_ID' => $row['privmsgs_id'],

			'U_READ' => URL::index('&amp;folder='.$folder.'&amp;mode=read&amp;p='.$row['privmsgs_id']),
			'U_FROM_USER_PROFILE' => URL::index('Your_Account&amp;profile='.$row['user_id']))
		);
	}
	while ($row = $db->sql_fetchrow($result));
	pagination("Private_Messages&amp;folder={$folder}&amp;start=", $pm_total, $MAIN_CFG['private_messages']['per_page'], $start);

} else {
	$template->assign_block_vars('switch_no_messages', array() );
}
if ($mode == '') {
	$template->set_handle('body',  'private_msgs/index_body.html');
	$template->display('body');
}
