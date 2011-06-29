<?php
/*********************************************
  CPG-Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Web_Links/modules/Your_Account/blocks/links.php,v $
  $Revision: 9.4 $
  $Author: phoenix $
  $Date: 2010/11/04 01:19:25 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }

// Last 10 Weblinks Approved
if (is_active('Web_Links')) {
    $result = $db->sql_query("SELECT lid, title, cid FROM ".$prefix."_links_links where submitter='$username' order by date DESC limit 0,10");
    if ($db->sql_numrows($result) > 0) {
        echo '<br />';
        OpenTable();
        echo '<div style="text-align:left;"><b>'.$username.'\'s '._LAST10WEBLINK.':</b><ul>';
        while (list($lid, $title, $cid) = $db->sql_fetchrow($result)) {
            echo '<li><a href="'.URL::index('Web_Links&amp;l_op=viewlink&amp;cid='.$cid).'">'.$title.'</a></li>';
        }
        echo '</ul></div>';
        CloseTable();
    }
}