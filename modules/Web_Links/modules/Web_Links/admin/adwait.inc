<?php
/*********************************************
  CPG-Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2006 by CPG Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Web_Links/modules/Web_Links/admin/adwait.inc,v $
  $Revision: 9.6 $
  $Author: phoenix $
  $Date: 2010/11/04 01:19:25 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }

$wlpre = strtolower($module);
if (is_active($module) && can_admin($wlpre)) {
    $num = $db->sql_ufetchrow("SELECT COUNT(*) FROM ".$prefix."_links_newlink");
    $brokenl = $db->sql_ufetchrow("SELECT COUNT(*) FROM ".$prefix."_links_modrequest WHERE brokenlink='1'");
    $modreql = $db->sql_ufetchrow("SELECT COUNT(*) FROM ".$prefix."_links_modrequest WHERE brokenlink='0'");
    $content .= '<b>&#8226;</b>&nbsp;<a href="'.URL::admin($module.'&amp;mode=Links').'">'._WLINKS.'</a>: '.$num[0].'<br />';
    $content .= '<b>&#8226;</b>&nbsp;<a href="'.URL::admin($module.'&amp;mode=linkslistmodrequests').'">'._MODREQLINKS.'</a>: '.$modreql[0].'<br />';
    $content .= '<b>&#8226;</b>&nbsp;<a href="'.URL::admin($module.'&amp;mode=linkslistbrokenlinks').'">'._BROKENLINKS.'</a>: '.$brokenl[0].'<br />';
}
