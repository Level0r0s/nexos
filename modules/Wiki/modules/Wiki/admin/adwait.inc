<?php
/*********************************************
  CPG-Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2006 by CPG Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Wiki/modules/Wiki/admin/adwait.inc,v $
  $Revision: 1.3 $
  $Author: phoenix $
  $Date: 2010/11/04 01:24:06 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }

if (is_active($module) && can_admin($module)) {
    list($num) = $db->sql_ufetchrow("SELECT COUNT(*) FROM ".$prefix."_wiki_pages_wait", SQL_NUM);
    $content .= '<b>&#8226;</b>&nbsp;<a href="'.URL::admin($module.'&amp;mode=pending').'">Wiki Pages</a>: '.$num.'<br />';
}