<?php
/***************************************************************************  
  CPG-Nuke News Theme is released under the terms and conditions 
  of the CPG Open Source License Agreement version 1
  (c) 2004 Akamu Akamai http://cpgnuke.com
  
  $Source: /cvs/themes/CPG-News/coppermine/admin_menu.inc,v $
  $Revision: 1.2 $
  $Author: akamu $
  $Date: 2004/11/18 06:49:30 $             
****************************************************************************/
$html = '
<table cellpadding="0" cellspacing="1" width="100%">
     <tr valign="middle" align="center">
          <td>
            <a class="admin_menu" href="'.getlink("&amp;file=editpics&amp;mode=upload_approval").'">'.UPL_APP_LNK.'</a>
            <a class="admin_menu" href="'.$CPG_URL.'&file=searchnew">'.SEARCHNEW_LNK.'</a>
            <a class="admin_menu" href="'.$CPG_URL.'&file=reviewcom">'.COMMENTS_LNK.'</a>
            <a class="admin_menu" href="'.$CPG_URL.'&file=groupmgr">'.GROUPS_LNK.'</a>
            <a class="admin_menu" href="'.$CPG_URL.'&file=usermgr">'.USERS_LNK.'</a>
            <a class="admin_menu" href="'.$CPG_URL.'&file=albmgr'.$cat_l.'">'.ALBUMS_LNK.'</a>         
            <a class="admin_menu" href="'.$CPG_URL.'&file=catmgr">'.CATEGORIES_LNK.'</a>';
            if(is_admin() && CPG_NUKE){
                $html .= '<a class="admin_menu" href="'.$CPG_URL.'&file=config">'.CONFIG_LNK.'</a>';
            }
$html .= '<td></tr>
</table>';
?>
