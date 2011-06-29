<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2009 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/modules/Your_Account/blocks/news.php,v $
  $Revision: 9.8 $
  $Author: djmaze $
  $Date: 2010/11/11 23:24:17 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }
if (is_user()) {
	// Last 10 Submissions
	$result = $db->sql_query("SELECT sid, title FROM ".$prefix."_stories WHERE informant='$username' ORDER BY sid DESC LIMIT 10");
	if ($db->sql_numrows($result) > 0) {

	  $cpgtpl->assign_vars(array(
			'NEWS_TITLE'		=> $username.'\'s '._LAST10SUBMISSION,
		));


		while (list($sid, $title) = $db->sql_fetchrow($result)) {
		$cpgtpl->assign_block_vars('article', array(
				'URL'			=> URL::index('News&amp;file=article&amp;sid='.$sid),
				'TITLE'		=> $title
			));
		}

	  $cpgtpl->set_handle('ya_block', 'your_account/blocks/news.html');
		$cpgtpl->display('ya_block');

	}
}
