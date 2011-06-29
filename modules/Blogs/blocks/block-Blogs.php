<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Blogs/blocks/block-Blogs.php,v $
  $Revision: 1.3 $
  $Author: phoenix $
  $Date: 2007/09/20 09:34:46 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }
get_lang('blogs');
global $db, $prefix, $userinfo;
$entries = 7; //entries to show
$content='';
$result = $db->sql_query("SELECT id, aid, title, timestamp FROM ".$prefix."_blogs WHERE private='0' OR aid='".$userinfo['username']."' ORDER BY timestamp DESC LIMIT $entries");
if ($db->sql_numrows($result)) {    
    $content .= '<div style="text-align:left;">'._B_FRESH.'<br />';
    while (list($blog_id, $blog_author, $blog_title, $blog_timestamp) = $db->sql_fetchrow($result)) {
        $content .= '<a title="'.formatDateTime($blog_timestamp, _DATESTRING2).'" href="'.getlink('Blogs&amp;mode=display&amp;id='.$blog_id).'"><b>&#8226;</b>&nbsp;'.$blog_title.'</a><br />';
    }
    $content .= '</div>';
}
$db->sql_freeresult($result);
$content .= '<p style="text-align:center;"><a href="'.getlink('Blogs&amp;mode=add').'">'._B_STARTBLOGGING.'</a></p>';