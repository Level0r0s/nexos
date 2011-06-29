<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/modules/Private_Messages/save.php,v $
  $Revision: 9.12 $
  $Author: nanocaiordo $
  $Date: 2010/07/08 10:44:52 $
**********************************************/
if (!defined('CPG_NUKE') && !defined('IN_PHPBB')) { exit; }

// See if recipient is at their savebox limit
$sql = "SELECT COUNT(privmsgs_id) AS savebox_items, MIN(privmsgs_date) AS oldest_post_time
		FROM ".$prefix."_bbprivmsgs
		WHERE ((privmsgs_to_userid = ".$userinfo['user_id']."
				AND privmsgs_type = ".PM_SAVED_IN_MAIL.")
			OR (privmsgs_from_userid = ".$userinfo['user_id']."
				AND privmsgs_type = ".PM_SAVED_OUT_MAIL.") )";
$result = $db->sql_query($sql);
$sql_priority = (0 === strpos(SQL_LAYER, 'mysql') ? 'LOW_PRIORITY' : '');
if ($saved_info = $db->sql_fetchrow($result)) {
	if ($saved_info['savebox_items'] >= $MAIN_CFG['private_messages']['savebox_max']) {
		$result = $db->sql_query("SELECT privmsgs_id FROM ".$prefix."_bbprivmsgs
				WHERE ( ( privmsgs_to_userid = ".$userinfo['user_id']." AND privmsgs_type = ".PM_SAVED_IN_MAIL." )
						OR ( privmsgs_from_userid = ".$userinfo['user_id']." AND privmsgs_type = ".PM_SAVED_OUT_MAIL.") )
					AND privmsgs_date = ".$saved_info['oldest_post_time']);
		$old_privmsgs_id = $db->sql_fetchrow($result);
		$old_privmsgs_id = $old_privmsgs_id['privmsgs_id'];
		$db->sql_query("DELETE $sql_priority FROM ".$prefix."_bbprivmsgs 
		WHERE privmsgs_id = $old_privmsgs_id");
		$db->sql_query("DELETE $sql_priority FROM ".$prefix."_bbprivmsgs_text 
		WHERE privmsgs_text_id = $old_privmsgs_id");
	}
}
$saved_sql_id = '';
for ($i = 0; $i < sizeof($mark_list); $i++) {
	$saved_sql_id .= (($saved_sql_id != '') ? ', ' : '').intval($mark_list[$i]);
}
		// Process request
		$saved_sql = "UPDATE ".$prefix."_bbprivmsgs";
		// Decrement read/new counters if appropriate
		if ($folder == 'inbox' || $folder == 'outbox') {
			switch ($folder) {
				case 'inbox':
					$sql = 'privmsgs_to_userid = '.$userinfo['user_id'];
					break;
				case 'outbox':
					$sql = 'privmsgs_from_userid = '.$userinfo['user_id'];
					break;
			}

			// Get information relevant to new or unread mail
			// so we can adjust users counters appropriately
			$result = $db->sql_query("SELECT privmsgs_to_userid, privmsgs_type FROM ".$prefix."_bbprivmsgs
				WHERE privmsgs_id IN ($saved_sql_id)
					AND $sql
					AND privmsgs_type IN (".PM_NEW_MAIL.", ".PM_UNREAD_MAIL.")");
			if ( $row = $db->sql_fetchrow($result)) {
				$update_users = $update_list = array();
				do {
					switch ($row['privmsgs_type']) {
						case PM_NEW_MAIL:
							$update_users['new'][$row['privmsgs_to_userid']]++;
							break;

						case PM_UNREAD_MAIL:
							$update_users['unread'][$row['privmsgs_to_userid']]++;
							break;
					}
				}
				while ($row = $db->sql_fetchrow($result));
				if (sizeof($update_users)) {
					while (list($type, $users) = each($update_users)) {
						while (list($user_id, $dec) = each($users)) {
							$update_list[$type][$dec][] = $user_id;
						}
					}
					unset($update_users);
					while (list($type, $dec_ary) = each($update_list)) {
						switch ($type) {
							case 'new':
								$type = 'user_new_privmsg';
								break;

							case 'unread':
								$type = 'user_unread_privmsg';
								break;
						}
						while (list($dec, $user_ary) = each($dec_ary)) {
							$user_ids = implode(', ', $user_ary);
							$db->sql_query("UPDATE ".$user_prefix."_users 
							SET $type = $type - $dec 
							WHERE user_id IN ($user_ids)");
						}
					}
					unset($update_list);
					unset($_SESSION['CPG_USER']);
				}
			}
			$db->sql_freeresult($result);
		}
		switch ($folder) {
			case 'inbox':
				$saved_sql .= " SET privmsgs_type = ".PM_SAVED_IN_MAIL."
					WHERE privmsgs_to_userid = ".$userinfo['user_id']."
						AND ( privmsgs_type = ".PM_READ_MAIL."
						OR privmsgs_type = ".PM_NEW_MAIL."
						OR privmsgs_type = ".PM_UNREAD_MAIL.")";
				break;
			case 'outbox':
				$saved_sql .= " SET privmsgs_type = ".PM_SAVED_OUT_MAIL."
					WHERE privmsgs_from_userid = ".$userinfo['user_id']."
						AND ( privmsgs_type = ".PM_NEW_MAIL."
						OR privmsgs_type = ".PM_UNREAD_MAIL." ) ";
				break;
			case 'sentbox':
				$saved_sql .= " SET privmsgs_type = ".PM_SAVED_OUT_MAIL."
					WHERE privmsgs_from_userid = ".$userinfo['user_id']."
						AND privmsgs_type = ".PM_SENT_MAIL;
				break;
		}
		$db->sql_query($saved_sql." AND privmsgs_id IN ($saved_sql_id)");
		URL::redirect(URL::index('&amp;folder=savebox'));
