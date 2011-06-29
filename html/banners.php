<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/banners.php,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 00:56:52 $
**********************************************/
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
