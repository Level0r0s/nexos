<?php
/*
  $Id$ 
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 by Myndworx Asylum                          |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | block-Newsletter.php - NexOS Administration Backend file          |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org                                  |
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |
  +-------------------------------------------------------------------+
  | CPG Dragonfly™ CMS                                                |
  | Copyright © 2004 - 2005 by CPG-Nuke Dev Team                      |
  | http://www.dragonflycms.com                                       |
  | Dragonfly is released under the terms and conditions of the GNU   |
  | GPL version 2 or any later version                                |
  +-------------------------------------------------------------------+
   Last modification notes:
    $Author$
    $Date$
    $Rev$
*/

if (!defined('CPG_NUKE')) { exit; }

global $db, $user_prefix, $userinfo, $SESS;

if (is_user()) {
	$newsletter = $userinfo['newsletter'];
	$user_id = $userinfo['user_id'];
	if ($newsletter) {
		$message = _NEWSLETTERBLOCKSUBSCRIBED;
		$action = '<form action="'.URL::uri().'" method="post"><div><input type="submit" name="nb_unsubscribe" value="'._NEWSLETTERBLOCKUNSUBSCRIBE.'" /></div></form>';
		if (isset($_POST['nb_unsubscribe'])) {
			$db->sql_query("UPDATE ".$user_prefix."_users SET newsletter='0' WHERE user_id='$user_id'");
			unset($_SESSION['CPG_USER']);
			URL::redirect($uri);
		}
	} else {
		$message = _NEWSLETTERBLOCKNOTSUBSCRIBED;
		$action = '<form action="'.URL::uri().'" method="post"><div><input type="submit" name="nb_subscribe" value="'._NEWSLETTERBLOCKSUBSCRIBE.'" /></div></form>';
		if (isset($_POST['nb_subscribe'])) {
			$db->sql_query("UPDATE ".$user_prefix."_users SET newsletter='1' WHERE user_id='$user_id'");
			unset($_SESSION['CPG_USER']);
			URL::redirect($uri);
		}
	}
} else {
	$message = _NEWSLETTERBLOCKREGISTER;
	$action = '<a href="'.URL::index('Your_Account&amp;file=register').'" title="'._NEWSLETTERBLOCKREGISTERNOW.'">'._NEWSLETTERBLOCKREGISTERNOW.'</a>';
}

$content = '<div style="text-align:center;"><img src="images/blocks/newsletter.png" alt="'._NEWSLETTER.'" title="'._NEWSLETTER.'" /><br /><br />'.$message.'<br /><br />'.$action.'</div>';
