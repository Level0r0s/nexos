<?php
/***************************************************************************  
  CPG-Nuke News Theme is released under the terms and conditions 
  of the CPG Open Source License Agreement version 1
  (c) 2004 Akamu Akamai http://cpgnuke.com
  
  $Source: /cvs/themes/CPG-News/coppermine/album_admin_menu.inc,v $
  $Revision: 1.2 $
  $Author: akamu $
  $Date: 2004/11/18 06:49:30 $             
****************************************************************************/
$template_album_admin_menu = '
    <table border="0" cellpadding="0" cellspacing="1">
        <tr>    
            <td align="center" valign="middle">
                <form method="post" action="'.getlink("&amp;file=delete").'">
                    <input type="hidden" name="what" value="album" />
                    <input type="hidden" name="id" value="{ALBUM_ID}" />
                    <input type="submit" name="submit" class="button"  value="'.DELETE.'" />
                </form>
            </td>
            <td align="center" valign="middle">
                <form method="post" action="'.getlink("&amp;file=modifyalb").'">
                    <input type="hidden" name="album" value="{ALBUM_ID}" />
                    <input type="submit" name="submit" class="button"  value="'.MODIFY.'" />
                </form>
            </td>
            <td align="center" valign="middle">
                <form method="post" action="'.getlink("&amp;file=editpics").'">
                    <input type="hidden" name="album" value="{ALBUM_ID}" />
                    <input type="submit" name="submit" class="button"  value="'.EDIT_PICS.'" />
                </form>
            </td>
        </tr>
    </table>';
?>