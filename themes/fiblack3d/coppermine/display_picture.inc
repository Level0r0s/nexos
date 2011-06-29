<?php
/***************************************************************************  
  CPG-Nuke News Theme is released under the terms and conditions 
  of the CPG Open Source License Agreement version 1
  (c) 2004 Akamu Akamai http://cpgnuke.com
  
  $Source: /cvs/themes/fiblack3d/coppermine/display_picture.inc,v $
  $Revision: 1.1 $
  $Author: akamu $
  $Date: 2005/04/05 01:55:59 $             
****************************************************************************/
$template_display_picture = '
    <tr>
        <td class="tableb" height="{CELL_HEIGHT}" style="float:none;text-align:center;white-space: nowrap; padding: 0px;">
            <table align="center" cellspacing="2" cellpadding="0" style="border:1px solid;border-color: #000000 #707070 #707070 #000000; background-color: #000000; margin-top: 30px; margin-bottom: 30px;">
                <tr>
                    <td valign="top"> {IMAGE} {ADMIN_MENU}</td>
                </tr>
            </table>
<!-- BEGIN img_desc -->
            <table width="100%" cellpadding="0" cellspacing="0" class="img_caption_table">
<!-- BEGIN title -->
                <tr>
                    <th>{TITLE}</th>
                </tr>
<!-- END title -->
<!-- BEGIN caption -->
                <tr>
                    <td>{CAPTION}</td>
                </tr>
<!-- END caption -->
            </table>
<!-- END img_desc -->
        </td>
    </tr>';
?>
