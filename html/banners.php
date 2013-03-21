<?php
/*
  $Id$ 
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | banners.php - NexOS banner display file                           |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      |
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
if (!defined('CPG_NUKE')) {
	define('XMLFEED', 1);
	require_once('includes/cmsinit.inc');
	$bid = intval($_GET['bid']);
	$row = $db->sql_ufetchrow('SELECT clickurl FROM '.$prefix."_banner WHERE bid='$bid'");
	$db->sql_query('UPDATE '.$prefix."_banner SET clicks=clicks+1 WHERE bid='$bid'");
	URL::redirect($row['clickurl']);
} else {
	echo viewbanner();
}
