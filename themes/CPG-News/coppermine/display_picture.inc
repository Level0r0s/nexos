<?php
/***************************************************************************  
  CPG-Nuke News Theme is released under the terms and conditions 
  of the CPG Open Source License Agreement version 1
  (c) 2004 Akamu Akamai http://cpgnuke.com
  
  $Source: /cvs/themes/CPG-News/coppermine/display_picture.inc,v $
  $Revision: 1.3 $
  $Author: trevor $
  $Date: 2005/02/10 00:18:10 $             
****************************************************************************/
$template_display_picture = '
    <tr>
        <td class="tableb" height="{CELL_HEIGHT}" style="float:none;padding: 0px;">
            <table align="center" cellspacing="2" cellpadding="0" style="border: 1px solid #000000; background-color: #FFFFFF; margin-top: 30px; margin-bottom: 30px;">
                <tr>
                    <td valign="top"> {IMAGE} {ADMIN_MENU}</td>
                </tr>
            </table>
<!-- BEGIN img_desc -->
            <table cellpadding="0" cellspacing="0" class="img_caption_table">
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
