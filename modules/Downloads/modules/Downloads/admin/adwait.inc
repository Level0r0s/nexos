<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Downloads/modules/Downloads/admin/adwait.inc,v $
  $Revision: 9.4 $
  $Author: phoenix $
  $Date: 2007/09/12 02:31:30 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

$dlpre = strtolower($module);
if (is_active($module) && can_admin($dlpre)) {
    $num = $db->sql_ufetchrow("SELECT COUNT(*) FROM $prefix"."_$dlpre"."_newdownload");
    $brokend = $db->sql_ufetchrow("SELECT COUNT(*) FROM $prefix"."_$dlpre"."_modrequest WHERE brokendownload=1");
    $modreqd = $db->sql_ufetchrow("SELECT COUNT(*) FROM $prefix"."_$dlpre"."_modrequest WHERE brokendownload=0");
    $content .= '<b>&#8226;</b>&nbsp;<a href="'.adminlink($module).'">'._UDOWNLOADS.'</a>: '.$num[0].'<br />
    <b>&#8226;</b>&nbsp;<a href="'.adminlink($module.'&amp;mode=DownloadsListModRequests').'">'._MODREQDOWN.'</a>: '.$modreqd[0].'<br />
    <<b>&#8226;</b>&nbsp;<a href="'.adminlink($module.'&amp;mode=DownloadsListBrokenDownloads').'">'._BROKENDOWN.'</a>: '.$brokend[0].'<br />';
}
