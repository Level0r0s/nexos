<?php
/***************************************************************************  
  CPG-Nuke News Theme is released under the terms and conditions 
  of the CPG Open Source License Agreement version 1
  (c) 2004 Akamu Akamai http://cpgnuke.com
  
  $Source: /cvs/themes/fiblack3d/coppermine/thumb_view_title_row.inc,v $
  $Revision: 1.1 $
  $Author: akamu $
  $Date: 2005/04/05 01:55:59 $             
****************************************************************************/
global $module_name;
$template_thumb_view_title_row = '
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td align="right">
            <form action="index.php" method="get">
                <input type="hidden" name="name" value="'.$module_name.'" />
                <input type="hidden" name="file" value="thumbnails" />
                <input type="hidden" name="album" value="'.$_GET['album'].'" />
                <input type="hidden" name="page" value="'.$page.'" />
                <select name="sort" class="sortorder_options" onChange="submit();">
                    <option value="ta"'.(($_GET['sort']=='ta')?' SELECTED>':'>').SORT_TA.'</option>
                    <option value="td"'.(($_GET['sort']=='td')?' SELECTED>':'>').SORT_TD.'</option>
                    <option value="na"'.(($_GET['sort']=='na')?' SELECTED>':'>').SORT_NA.'</option>
                    <option value="nd"'.(($_GET['sort']=='nd')?' SELECTED>':'>').SORT_ND.'</option>
                    <option value="da"'.(($_GET['sort']=='da')?' SELECTED>':'>').SORT_DA.'</option>
                    <option value="dd"'.(($_GET['sort']=='dd')?' SELECTED>':'>').SORT_DD.'</option>
                    <option value="ra"'.(($_GET['sort']=='ra')?' SELECTED>':'>').SORT_RA.'</option>
                    <option value="rd"'.(($_GET['sort']=='rd')?' SELECTED>':'>').SORT_RD.'</option>
                </select>
                <noscript>
                    <input type="submit" value="'._GO.'" />
                </noscript>
        </td>
        </form>
 </tr>
</table>';
?>
