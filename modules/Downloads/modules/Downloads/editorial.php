<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Downloads/modules/Downloads/editorial.php,v $
  $Revision: 9.1 $
  $Author: djmaze $
  $Date: 2005/01/13 04:02:51 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

function viewdownloadeditorial() {
    global $downloadsprefix, $db;
    $lid = intval($_GET['lid']);
    include("header.php");
    downl_menu_tpl(1);
    $result= $db->sql_query("SELECT adminid, editorialtimestamp, editorialtext, editorialtitle FROM ".$downloadsprefix."_editorials WHERE downloadid = $lid");
    $recordexist = $db->sql_numrows($result);
    $displaytitle = ereg_replace("_", " ", $ttitle);
    echo '<br />';
    OpenTable();
    echo "<center><font class=\"option\"><b>"._DOWNLOADPROFILE.": $displaytitle</b></font><br />";
    downl_infomenu_tpl($lid, $ttitle);
    if ($recordexist != 0) {
        while(list($adminid, $editorialtimestamp, $editorialtext, $editorialtitle)=$db->sql_fetchrow($result)) {
            ereg ("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2}) ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})", $editorialtimestamp, $editorialtime);
            $editorialtime = strftime("%F",mktime($editorialtime[4],$editorialtime[5],$editorialtime[6],$editorialtime[2],$editorialtime[3],$editorialtime[1]));
            $date_array = explode("-", $editorialtime);
            $timestamp = mktime(0, 0, 0, $date_array["1"], $date_array["2"], $date_array["0"]);
            $formatted_date = date("F j, Y", $timestamp);
            echo "<br /><br />";
            OpenTable2();
            echo "<center><font class=\"option\"><b>'$editorialtitle'</b></font></center>"
            ."<center><font class=\"tiny\">"._EDITORIALBY." $adminid - $formatted_date</font></center><br /><br />"
            ."$editorialtext";
            CloseTable2();
        }
    } else {
        echo "<br /><br /><center><font class=\"option\"><b>"._NOEDITORIAL."</b></font></center>";
    }
    echo "<br /><br /><center>";
    downloadfooter($lid);
    echo "</center>";
    CloseTable();
    include("footer.php");
}
