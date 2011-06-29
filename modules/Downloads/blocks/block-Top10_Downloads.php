<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Downloads/blocks/block-Top10_Downloads.php,v $
  $Revision: 9.2 $
  $Author: phoenix $
  $Date: 2007/09/20 09:35:23 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

$content = '';
if (!is_active('Downloads')) {
    $content = 'ERROR';
    return trigger_error('Downloads module is inactive', E_USER_WARNING);
}

global $db, $prefix;
$a = 1;
$result = $db->sql_query("SELECT lid, title FROM ".$prefix."_downloads_downloads ORDER BY hits DESC LIMIT 0,10");
while (list($lid, $dtitle) = $db->sql_fetchrow($result)) {
    $title2 = ereg_replace('_', ' ', $dtitle);
    $content .= "<b>&#8226;</b>\n"
        ."&nbsp;\n"
        ."$a: <a href=\"".getlink("Downloads&amp;d_op=viewdownloaddetails&amp;lid=$lid&amp;title=$dtitle")."\">$title2</a>\n"
        ."<br />\n";
    $a++;
}
$db->sql_freeresult($result);