<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Downloads/modules/Downloads/comments.php,v $
  $Revision: 9.1 $
  $Author: djmaze $
  $Date: 2005/01/13 04:02:51 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

function viewdownloadcomments() {
    global $downloadsprefix, $db, $bgcolor2, $module_name;
    $lid = intval($_GET['lid']);
    include("header.php");
    downl_menu_tpl(1);
    echo '<br />';
    $result= $db->sql_query("SELECT ratinguser, rating, ratingcomments, ratingtimestamp FROM ".$downloadsprefix."_votedata WHERE ratinglid = $lid AND ratingcomments != '' ORDER BY ratingtimestamp DESC");
    $totalcomments = $db->sql_numrows($result);
    $transfertitle = ereg_replace ("_", " ", $ttitle);
    $displaytitle = $transfertitle;
    OpenTable();
    echo "<center><font class=\"option\"><b>"._DOWNLOADPROFILE.": $displaytitle</b></font><br /><br />";
    downl_infomenu_tpl($lid, $ttitle);
    echo "<br /><br /><br />"._TOTALOF." $totalcomments "._COMMENTS."</font></center><br />"
    ."<table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"450\">";
    $x=0;
    while(list($ratinguser, $rating, $ratingcomments, $ratingtimestamp)=$db->sql_fetchrow($result)) {
        ereg ("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2}) ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})", $ratingtimestamp, $ratingtime);
    $ratingtime = strftime("%F",mktime($ratingtime[4],$ratingtime[5],$ratingtime[6],$ratingtime[2],$ratingtime[3],$ratingtime[1]));
    $date_array = explode("-", $ratingtime);
    $timestamp = mktime(0, 0, 0, $date_array["1"], $date_array["2"], $date_array["0"]);
        $formatted_date = date("F j, Y", $timestamp);
    /* Individual user information */
    $result2= $db->sql_query("SELECT rating FROM ".$downloadsprefix."_votedata WHERE ratinguser = '$ratinguser'");
        $usertotalcomments = $db->sql_numrows($result2);
        $useravgrating = 0;
        while(list($rating2)=$db->sql_fetchrow($result2))    $useravgrating = $useravgrating + $rating2;
        $useravgrating = $useravgrating / $usertotalcomments;
        $useravgrating = number_format($useravgrating, 1);
        echo "<tr><td bgcolor=\"$bgcolor2\">"
        ."<font class=\"content\"><b> "._USER.": </b><a href=\"$nukeurl/".getlink("Your_Account&amp;op=userinfo&amp;username=$ratinguser")."\">$ratinguser</a></font></td>"
        ."<td bgcolor=\"$bgcolor2\"><font class=\"content\"><b>"._RATING.": </b>$rating</font></td>"
        ."<td bgcolor=\"$bgcolor2\" align=\"right\"><font class=\"content\">$formatted_date</font></td>"
        ."</tr><tr>"
        ."<td valign=\"top\"><font class=\"tiny\">"._USERAVGRATING.": $useravgrating</font></td>"
        ."<td valign=\"top\" colspan=\"2\"><font class=\"tiny\">"._NUMRATINGS.": $usertotalcomments</font></td>"
        ."</tr><tr>"
        ."<td colspan=\"3\">"
        ."<font class=\"content\">";
        if (can_admin('downloads')) {
            echo "<a href=\"".adminlink("$module_name&mode=DownloadsModDownload&amp;lid=$lid")."\"><img src=\"modules/$module_name/images/editicon.gif\" border=\"0\" alt=\""._EDITTHISDOWNLOAD."\"></a>";
        }
    echo " $ratingcomments</font><br /><br /><br /></td></tr>";
    $x++;
    }
    echo "</table><br /><br /><center>";
    downloadfooter($lid);
    echo "</center>";
    CloseTable();
    include("footer.php");
}
