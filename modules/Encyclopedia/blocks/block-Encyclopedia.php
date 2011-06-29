<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Encyclopedia/blocks/block-Encyclopedia.php,v $
  $Revision: 9.2 $
  $Author: phoenix $
  $Date: 2007/09/20 09:35:48 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

global $db, $prefix;

$content = '';
if (!is_active('Encyclopedia')) {
    $content = 'ERROR';
    return trigger_error('Encyclopedia module is inactive', E_USER_WARNING);
}

$result = $db->sql_query('SELECT eid, title FROM '.$prefix.'_encyclopedia WHERE active=1', false, __FILE__, __LINE__);
while (list($eid, $etitle) = $db->sql_fetchrow($result)) {
    $content .= '<b>&#8226;</b>&nbsp;<a href="'.getlink("Encyclopedia&amp;op=list_content&amp;eid=$eid")."\">$etitle</a><br />\n";
}
$db->sql_freeresult($result);
