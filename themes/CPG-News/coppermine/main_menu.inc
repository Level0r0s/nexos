<?php
/***************************************************************************  
  CPG-Nuke News Theme is released under the terms and conditions 
  of the CPG Open Source License Agreement version 1
  (c) 2004 Akamu Akamai http://cpgnuke.com
  
  $Source: /cvs/themes/CPG-News/coppermine/main_menu.inc,v $
  $Revision: 1.3 $
  $Author: akamu $
  $Date: 2004/12/16 07:19:12 $             
****************************************************************************/
$template_main_menu = '
                <div class="topmenu" align="center">
<!-- BEGIN album_list -->
                        <a class="helplink"  href="'.getlink("&amp;file=help").'" title="'.HELP_TITLE.'">'.HELP_LNK.'</a>
                        &nbsp;&nbsp;&nbsp;<a class="admin_menu"  href="'.getlink("").'" title="'.ALB_LIST_TITLE.'">'._coppermineLANG.' '._HOME.'</a>
<!-- END album_list -->
<!-- BEGIN my_gallery -->
                        <a class="admin_menu" href="'. getlink("&amp;cat=$my_gallery_id").'" title="'.MY_GAL_TITLE.'">'.MY_GAL_LNK.'</a>
<!-- END my_gallery -->
<!-- BEGIN my_profile -->
                        <a class="admin_menu" href="'.USERPROF_URL.'" title="'.MY_PROF_LNK.'">'.MY_PROF_LNK.'</a>
<!-- END my_profile -->
<!-- BEGIN upload_pic -->
                        <a class="admin_menu" href="'. getlink("&amp;file=upload").'" title="'.UPLOAD_PIC_TITLE.'">'.UPLOAD_PIC_LNK.'</a>
<!-- END upload_pic -->
<!-- BEGIN register -->
                        <a class="admin_menu" href="'.NEWUSER_URL.'" title="'.REGISTER_TITLE.'">'.REGISTER_LNK.'</a>
<!-- END register -->
<!-- BEGIN login -->
                        <a class="admin_menu" href="'.LOGIN_URL.'">'.LOGIN_LNK.'</a>
<!-- END login -->
<!-- BEGIN logout -->
                        <a class="admin_menu" href="'.LOGOUT_URL.'">'.LOGOUT_LNK.'</a>
<!-- END logout -->
<!-- BEGIN meta_links -->
                        <a class="admin_menu" href="'.getlink("&amp;file=thumbnails&amp;meta=lastup".META_LNK).'">'.LASTUP_LNK.'</a>
                        <a class="admin_menu" href="'.getlink("&amp;file=thumbnails&amp;meta=lastcom".META_LNK).'">'.LASTCOM_LNK.'</a>
                        <a class="admin_menu" href="'.getlink("&amp;file=thumbnails&amp;meta=topn".META_LNK).'">'.TOPN_LNK.'</a>
                        <a class="admin_menu" href="'.getlink("&amp;file=thumbnails&amp;meta=toprated".META_LNK).'">'.TOPRATED_LNK.'</a>
                        <a class="admin_menu" href="'.getlink("&amp;file=thumbnails&amp;meta=favpics").'">'.FAV_LNK.'</a>
                        <a class="admin_menu" href="'.getlink("&amp;file=search").'">'.SEARCH_LNK.'</a> 
                        
<!-- END meta_links -->
                </div>';
?>
