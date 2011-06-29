<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Sections/blocks/block-Sections_Articles.php,v $
  $Revision: 9.2 $
  $Author: phoenix $
  $Date: 2007/09/20 09:36:25 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

$content = '';
if (!is_active('Sections')) {
    $content = 'ERROR';
    return trigger_error('Sections module is inactive', E_USER_WARNING);
}

global $db, $prefix;
$result = $db->sql_query("SELECT artid, title FROM ".$prefix."_seccont ORDER BY artid DESC LIMIT 0,10",false,__FILE__,__LINE__);
while (list($artid, $stitle) = $db->sql_fetchrow($result)) {
    $content .= "<b>&#8226;</b>\n"
        ."&nbsp;\n"
        ."<a href=\"".getlink("Sections&amp;op=viewarticle&amp;artid=$artid")."\">$stitle</a>\n"
        ."<br />\n";
}
$db->sql_freeresult($result);