<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Content/blocks/block-Content.php,v $
  $Revision: 9.2 $
  $Author: phoenix $
  $Date: 2007/09/20 09:34:58 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

$content = '';
if (!is_active('Content')) {
    $content = 'ERROR';
    return trigger_error('Content module is inactive', E_USER_WARNING);
}
global $db, $prefix;
$result = $db->sql_query('SELECT pid, title FROM '.$prefix.'_pages WHERE active=1', false, __FILE__, __LINE__);
while (list($pid, $ptitle) = $db->sql_fetchrow($result)) {
    $content .= '<b>&#8226;</b>&nbsp;<a href="'.getlink('Content&amp;pa=showpage&amp;pid='.$pid).'">'.$ptitle.'</a><br />';
}
$db->sql_freeresult($result);