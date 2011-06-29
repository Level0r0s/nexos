<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
 of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Downloads/modules/Downloads/theme.php,v $
  $Revision: 9.1 $
  $Author: djmaze $
  $Date: 2005/01/13 04:02:51 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

function downl_menu_tpl($maindownload) {
    global $user_adddownload, $module_name;
    OpenTable();
    $ThemeSel = get_theme();
    if (file_exists("themes/$ThemeSel/images/down-logo.gif")) {
        echo "<br /><div align=\"center\"><a href=\"".getlink()."\"><img src=\"themes/$ThemeSel/images/down-logo.gif\" border=\"0\" alt=\"\" /></a><br /><br />";
    } else {
        echo "<br /><div align=\"center\"><a href=\"".getlink()."\"><img src=\"modules/$module_name/images/down-logo.gif\" border=\"0\" alt=\"\" /></a><br /><br />";
    }
    echo "<form action=\"".getlink("&amp;d_op=search")."\" method=\"post\"><input type=\"text\" size=\"25\" name=\"query\" /> <input type=\"submit\" value=\""._SEARCH."\" /></form>"
        ."<font class=\"content\">[ ";
    if ($maindownload>0) {
        echo "<a href=\"".getlink()."\">"._DOWNLOADSMAIN."</a> | ";
    }
    if ($user_adddownload) {
        echo "<a href=\"".getlink("&amp;d_op=AddDownload")."\">"._ADDDOWNLOAD."</a> | ";
    }
    echo "<a href=\"".getlink("&amp;d_op=NewDownloads")."\">"._NEW."</a>"
        ." | <a href=\"".getlink("&amp;d_op=MostPopular")."\">"._POPULAR."</a>"
        ." | <a href=\"".getlink("&amp;d_op=TopRated")."\">"._TOPRATED."</a> ]"
        ."</font></div>";
    CloseTable();
}

function downl_infomenu_tpl($lid) {
    echo "<br /><font class=\"content\">[ "
        ."<a href=\"".getlink("&amp;d_op=viewdownloadcomments&amp;lid=$lid")."\">"._DOWNLOADCOMMENTS."</a>"
        ." | <a href=\"".getlink("&amp;d_op=viewdownloaddetails&amp;lid=$lid")."\">"._ADDITIONALDET."</a>"
        ." | <a href=\"".getlink("&amp;d_op=viewdownloadeditorial&amp;lid=$lid")."\">"._EDITORREVIEW."</a>"
        ." | <a href=\"".getlink("&amp;d_op=modifydownloadrequest&amp;lid=$lid")."\">"._MODIFY."</a>";
    if (is_user()) {
        echo " | <a href=\"".getlink("&amp;d_op=brokendownload&amp;lid=$lid")."\">"._REPORTBROKEN."</a>";
    }
    echo " ]</font>";
}
