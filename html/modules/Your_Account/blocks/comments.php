<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2009 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/modules/Your_Account/blocks/comments.php,v $
  $Revision: 9.9 $
  $Author: djmaze $
  $Date: 2010/11/11 23:24:17 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }
if (is_user()) {
	// Last 10 Comments
	$result = $db->sql_query('SELECT tid, sid, subject FROM '.$prefix.'_comments WHERE name="'.$username.'" ORDER BY tid DESC LIMIT 10');
	if ($db->sql_numrows($result)) {

		$cpgtpl->assign_vars(array(
			'COMMENTS_TITLE'		=> $username.'\'s '._LAST10COMMENT,
		));

		while (list($tid, $sid, $subject) = $db->sql_fetchrow($result)) {
	    $cpgtpl->assign_block_vars('comment', array(
				'URL'				=> URL::index('News&amp;file=article&amp;sid='.$sid.'#'.$tid),
				'SUBJECT'		=> $subject
			));
		}

	  $cpgtpl->set_handle('ya_block', 'your_account/blocks/comments.html');
		$cpgtpl->display('ya_block');

	}
}
