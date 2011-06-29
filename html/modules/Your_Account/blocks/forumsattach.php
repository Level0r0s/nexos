<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2009 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/modules/Your_Account/blocks/forumsattach.php,v $
  $Revision: 9.12 $
  $Author: estlane $
  $Date: 2009/10/14 18:56:07 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }

if (is_user()) {
	if (is_active('Forums') && $userinfo['user_id'] > 1) {
		if (!defined('IN_PHPBB') && !defined('PHPBB_INSTALLED')) {
			define('IN_PHPBB', true);
			define('PHPBB_INSTALLED', true);
			$phpbb_root_path = "./modules/Forums/";
			require_once($phpbb_root_path.'common.php');
		}
		$userdata = $userinfo;

		$user_id = intval($userinfo['user_id']);
		global $attach_config, $board_config, $phpbb_root_path, $lang, $db, $template, $profiledata, $bgcolor4;
		$board_config['privmsg_graphic_length'] = 175;

		if (!$owninfo && !can_admin('members')) { return; }

		$attachments = new attach_posting();
		$attachments->PAGE = PAGE_INDEX;

		// Get the assigned Quota Limit. For Groups, we are directly getting the value, because this Quota can change from user to user.
		if (is_array($profiledata)) {
			$attachments->get_quota_limits($profiledata, $user_id);
		} else {
			$attachments->get_quota_limits($userdata, $user_id);
		}

		if ( intval($attach_config['upload_filesize_limit']) == 0 ) {
			$upload_filesize_limit = intval($attach_config['attachment_quota']);
		} else {
			$upload_filesize_limit = intval($attach_config['upload_filesize_limit']);
		}
		$user_quota = ($upload_filesize_limit == 0) ? $lang['Unlimited'] : filesize_to_human($upload_filesize_limit);

		//
		// Get all attach_id's the specific user posted, but only uploads to the board and not Private Messages
		//
		$sql = "SELECT attach_id FROM " . ATTACHMENTS_TABLE . "
		WHERE (user_id_1 = " . $user_id . ") AND (privmsgs_id = 0)
		GROUP BY attach_id";

		$result = $db->sql_query($sql);

		$attach_ids = $db->sql_fetchrowset($result);
		$num_attach_ids = $db->sql_numrows($result);
		$attach_id = array();

		for ($j = 0; $j < $num_attach_ids; $j++) {
			$attach_id[] = intval($attach_ids[$j]['attach_id']);
		}

		$upload_filesize = (count($attach_id) > 0) ? get_total_attach_filesize(implode(',', $attach_id)) : 0;
		$user_uploaded = filesize_to_human($upload_filesize);

		$upload_limit_pct = ( $upload_filesize_limit > 0 ) ? round(( $upload_filesize / $upload_filesize_limit ) * 100) : 0;
		$upload_limit_img_length = ( $upload_filesize_limit > 0 ) ? round(( $upload_filesize / $upload_filesize_limit ) * $board_config['privmsg_graphic_length']) : 0;
		if ($upload_limit_pct > 100) {
			$upload_limit_img_length = $board_config['privmsg_graphic_length'];
		}
		$upload_limit_remain = ( $upload_filesize_limit > 0 ) ? $upload_filesize_limit - $upload_filesize : 100;

		$l_box_size_status = sprintf($lang['Upload_percent_profile'], $upload_limit_pct);

    $cpgtpl->assign_vars(array(
			'S_UPLOAD_QUOTA'				=> $lang['Upload_quota'],
			'BGCOLOR4'							=> $bgcolor4,
			'UPLOAD_LIMIT_WIDTH'		=> $upload_limit_img_length,
			'UPLOAD_LIMIT_PERCENT'	=> $upload_limit_pct,
			'S_UPLOADED'						=> sprintf($lang['User_uploaded_profile'], $user_uploaded),
			'S_QUOTA'								=> sprintf($lang['User_quota_profile'], $user_quota),
			'S_TOTAL'								=> $l_box_size_status,
			'ATTACHMENT_CP_URL'			=> URL::index('Forums&amp;file=uacp&amp;u='.$user_id),
			'S_ATTACHMENT_CP'				=> $lang['UACP'],
		));

    $cpgtpl->set_handle('ya_block', 'your_account/blocks/forumsattach.html');
		$cpgtpl->display('ya_block');
	}
}
