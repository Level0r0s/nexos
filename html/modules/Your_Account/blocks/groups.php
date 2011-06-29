<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2009 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/modules/Your_Account/blocks/groups.php,v $
  $Revision: 9.10 $
  $Author: estlane $
  $Date: 2009/10/14 18:56:07 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }
if (is_user()) {
// Group Memberships
$result = $db->sql_query('SELECT ug.group_id, g.group_name, g.group_type FROM '.$prefix.'_bbuser_group ug INNER JOIN '.$prefix.'_bbgroups g ON (g.group_id = ug.group_id AND g.group_single_user = 0) WHERE ug.user_pending = 0 AND ug.user_id = '.intval($userinfo['user_id']));
if ($db->sql_numrows($result)) {
	$g = array();
	while ($row = $db->sql_fetchrow($result, SQL_NUM)) {
		if ($row[2] == 2 && (!in_group($row[0]) && !can_admin()))  {
			continue;
		} else {
			$g[$row[0]] = $row[1];
		}
	}
	if (count($g)) {

    $cpgtpl->assign_vars(array(
			'GROUPS_TITLE'		=> $userinfo['username'].'\'s '._MEMBERGROUPS,
		));


		foreach ($g as $gid => $gname) {
      $cpgtpl->assign_block_vars('group', array(
				'URL'			=> URL::index('Groups&amp;g='.$gid),
				'NAME'		=> $gname
			));
		}

    $cpgtpl->set_handle('ya_block', 'your_account/blocks/groups.html');
		$cpgtpl->display('ya_block');
	}
}
}
