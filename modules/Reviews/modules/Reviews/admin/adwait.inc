<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Reviews/modules/Reviews/admin/adwait.inc,v $
  $Revision: 9.7 $
  $Author: phoenix $
  $Date: 2010/11/04 01:10:52 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

if (is_active('Reviews') && can_admin('reviews')) {
    list($num) = $db->sql_ufetchrow("SELECT COUNT(*) FROM ".$prefix."_reviews_add", SQL_NUM);
    $content .= '<b>&#8226;</b>&nbsp;<a href="'.URL::admin('Reviews').'">'._WREVIEWS.'</a>: '.$num.'<br />';
}
