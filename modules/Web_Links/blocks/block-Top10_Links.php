<?php
/*********************************************
  CPG-Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2006 by CPG Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Web_Links/blocks/block-Top10_Links.php,v $
  $Revision: 9.4 $
  $Author: phoenix $
  $Date: 2010/11/04 01:19:24 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }

$content = '';
if (!is_active('Web_Links')) {
    $content = 'ERROR';
    return trigger_error('Web_Links module is inactive', E_USER_WARNING);
}

global $prefix, $db;

$a = 1;
$result = $db->sql_query("SELECT lid, title FROM ".$prefix."_links_links ORDER BY hits DESC LIMIT 0,10");
while (list($lid, $ltitle) = $db->sql_fetchrow($result)) {
    $title2 = ereg_replace('_', ' ', $ltitle);
    $content .= "<b>&#8226;</b>\n"
              ."&nbsp;\n"
              ."$a: <a href=\"".URL::index("Web_Links&amp;l_op=viewlinkdetails&amp;lid=$lid&amp;ttitle=$ltitle")."\">$title2</a>\n"
              ."<br />\n";
    $a++;
}
$db->sql_freeresult($result);