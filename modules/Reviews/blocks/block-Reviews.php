<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Reviews/blocks/block-Reviews.php,v $
  $Revision: 9.3 $
  $Author: phoenix $
  $Date: 2010/11/04 01:10:51 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

$content = '';
if (!is_active('Reviews')) {
    $content = 'ERROR';
    return trigger_error('Reviews module is inactive', E_USER_WARNING);
}

global $db, $prefix;
$result = $db->sql_query("SELECT id, title FROM ".$prefix."_reviews ORDER BY id DESC LIMIT 0,10", false, __FILE__, __LINE__);
while (list($id, $rtitle) = $db->sql_fetchrow($result)) {
    $content .= "<b>&#8226;</b>\n"
        ."&nbsp;\n"
        ."<a href=\"".URL::index("Reviews&amp;rop=showcontent&amp;id=$id")."\">$rtitle</a>\n"
        ."<br />\n";
}
$db->sql_freeresult($result);