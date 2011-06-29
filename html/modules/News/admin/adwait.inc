<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/modules/News/admin/adwait.inc,v $
  $Revision: 9.7 $
  $Author: nanocaiordo $
  $Date: 2008/07/31 14:22:25 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }

if (is_active('News') && can_admin('news')) {
	$num = $db->sql_count($prefix.'_queue');
	$content .= '<b>&#8226;</b>&nbsp;<a href="'.URL::admin('News&amp;file=submissions').'">'._SUBMISSIONS.'</a>: '.$num[0].'<br />';
}
