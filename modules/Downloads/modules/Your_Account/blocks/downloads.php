<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Downloads/modules/Your_Account/blocks/downloads.php,v $
  $Revision: 9.1 $
  $Author: djmaze $
  $Date: 2005/01/13 04:02:52 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

// Last 10 Download Links Approved
if (is_active('Downloads')) {
    $result = $db->sql_query('SELECT lid, title FROM '.$prefix."_downloads_downloads where submitter='$username' order by date DESC limit 0,10");
    if ($db->sql_numrows($result) > 0) {
        echo '<br />';
        OpenTable();
        echo '<div align="left"><b>'.$username.'\'s '._LAST10DOWNLOAD.':</b><ul>';
        while (list($lid, $title) = $db->sql_fetchrow($result)) {
            echo '<li><a href="'.getlink('Downloads&amp;d_op=viewdownloaddetails&amp;lid='.$lid).'">'.$title.'</a></li>';
        }
        echo '</ul></div>';
        CloseTable();
    }
}
