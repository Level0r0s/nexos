<?php
/***************************************************************************  
  CPG-Nuke News Theme is released under the terms and conditions 
  of the CPG Open Source License Agreement version 1
  (c) 2004 Akamu Akamai http://cpgnuke.com
  
  $Source: /cvs/themes/CPG-News/coppermine/user_list_info_box.inc,v $
  $Revision: 1.2 $
  $Author: akamu $
  $Date: 2004/11/18 06:49:30 $             
****************************************************************************/
$template_user_list_info_box = '
    <table cellspacing="1" cellpadding="0" border="0" width="100%" class="user_thumb_infobox">
        <tr class="user_thumb_infobox">
            <td><a class="user_thumb_infobox" href="{USER_PROFILE_LINK}">{username}</a></td>
        </tr>
        <tr>
            <td>{ALBUMS}</td>
        </tr>
        <tr>
            <td>{PICTURES}</td>
        </tr>
    </table>';
?>