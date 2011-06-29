<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2007 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/blocks/block-Top10_Downloads.php,v $
  $Revision: 1.6 $
  $Author: phoenix $
  $Date: 2010/11/03 23:13:17 $
******************************************************/
if (!defined('CPG_NUKE')) { exit; }

global $db, $prefix;

$dl_mod = 'Downloads';
$dl_mod_prefix = $prefix.'_'.strtolower($dl_mod);
$content = '';
if (!is_active($dl_mod)) {
    $content = 'ERROR';
    return trigger_error($dl_mod.' module is inactive', E_USER_WARNING);
}

$a = 1;
$result = $db->sql_query("SELECT d.lid, d.title, SUM(s.hits) AS hits FROM ".$dl_mod_prefix."_downloads d
LEFT JOIN ".$dl_mod_prefix."_stats s ON (s.id = d.lid) WHERE d.active=1 GROUP BY s.id ORDER BY hits DESC LIMIT 0,10");
if ($db->sql_numrows($result) < 1) {
    $content = 'ERROR';
    return trigger_error('There are no downloads in '.$dl_mod, E_USER_WARNING);
}
while (list($lid, $dtitle) = $db->sql_fetchrow($result)) {
    $content .= '<b>&#8226;</b>&nbsp; '.$a.': <a href="'.URL::index($dl_mod.'&amp;file=details&amp;id='.$lid).'">'.$dtitle.'</a><br />';
    $a++;
}
$db->sql_freeresult($result);