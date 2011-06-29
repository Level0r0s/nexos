<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Your_Account/blocks/downloads.php,v $
  $Revision: 1.3 $
  $Author: phoenix $
  $Date: 2010/11/03 23:13:18 $
******************************************************/
if (!defined('CPG_NUKE')) { exit; }

$module = 'Downloads';

// Last 10 Download Links Approved
if (is_active($module)) {
    $result = $db->sql_query('SELECT lid, title FROM '.$prefix."_".strtolower($module)."_downloads WHERE submitter='$userinfo[user_id]' ORDER BY date DESC LIMIT 0,10");
    if ($db->sql_numrows($result)) {
        echo '<br />';
        OpenTable();
        echo '<div align="left"><strong>'.$username.'\'s '._LAST10DOWNLOAD.':</strong><ul>';
        while (list($lid, $title) = $db->sql_fetchrow($result)) {
            echo '<li><a href="'.URL::index($module.'&amp;file=details&amp;id='.$lid).'">'.$title.'</a></li>';
        }
        echo '</ul></div>';
        CloseTable();
    }
}