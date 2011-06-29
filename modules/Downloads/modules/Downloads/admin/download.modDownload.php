<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Downloads/modules/Downloads/admin/download.modDownload.php,v $
  $Revision: 9.1 $
  $Author: djmaze $
  $Date: 2005/01/13 04:02:52 $

***********************************************************************/
if (!defined('ADMIN_PAGES')) { exit; }

function DownloadsModDownload() {
    global $downloadsprefix, $db, $op;
    $lid = (isset($_GET['lid']) ? intval($_GET['lid']) : (isset($_POST['lid']) ? intval($_POST['lid']) : ''));
    require_once('header.php');
    GraphicAdmin('_AMENU6');
    global $anonymous;
    $result = $db->sql_query("select cid, sid, title, url, description, name, email, hits, filesize, version, homepage from ".$downloadsprefix."_downloads where lid='$lid'");
    OpenTable();
    echo '<div align="center" class="title">'._WEBDOWNLOADSADMIN.'</div>';
    CloseTable();
    echo '<br />';
    OpenTable();
    echo "<center><font class=\"content\"><b>"._MODDOWNLOAD."</b></font></center><br /><br />";
    while (list($cid, $sid, $title, $url, $description, $name, $email, $hits, $filesize, $version, $homepage) = $db->sql_fetchrow($result)) {
        echo '<form action="'.adminlink($op).'" method="post" enctype="multipart/form-data" accept-charset="utf-8">'
            ._DOWNLOADID.": <b>$lid</b><br />"
            ._PAGETITLE.": <input type=\"text\" name=\"title\" value=\"$title\" size=\"50\" maxlength=\"100\" /><br />"
            ._PAGEURL.": <input type=\"text\" name=\"url\" value=\"$url\" size=\"50\" maxlength=\"100\" />&nbsp;[ <a href=\"$url\">"._CHECK."</a> ]<br />"
            ._DESCRIPTION.":<br /><textarea name=\"description\" cols=\"60\" rows=\"10\">$description</textarea><br />"
            ._AUTHORNAME.": <input type=\"text\" name=\"name\" size=\"50\" maxlength=\"100\" value=\"$name\" /><br />"
            ._AUTHOREMAIL.": <input type=\"text\" name=\"email\" size=\"50\" maxlength=\"100\" value=\"$email\" /><br />"
            ._FILESIZE.": <input type=\"text\" name=\"filesize\" size=\"12\" maxlength=\"11\" value=\"$filesize\" /><br />"
            ._VERSION.": <input type=\"text\" name=\"version\" size=\"11\" maxlength=\"10\" value=\"$version\" /><br />"
            ._HOMEPAGE.": <input type=\"text\" name=\"homepage\" size=\"50\" maxlength=\"200\" value=\"$homepage\" />&nbsp;[ <a href=\"$homepage\">"._VISIT."</a> ]<br />"
            ._HITS.": <input type=\"text\" name=\"hits\" value=\"$hits\" size=\"12\" maxlength=\"11\" /><br />";
        $result2 = $db->sql_query("select cid, title from ".$downloadsprefix."_categories order by title");
        echo "<input type=\"hidden\" name=\"lid\" value=\"$lid\" />"._CATEGORY.": <select name=\"cat\">";
        $result2 = $db->sql_query("select cid, title, parentid from ".$downloadsprefix."_categories order by parentid,title");
        while (list($cid2, $ctitle2, $parentid2) = $db->sql_fetchrow($result2)) {
            if ($cid2 == $cid) {
                $sel = ' selected="selected"';
            } else {
                $sel = '';
            }
            if ($parentid2!=0) $ctitle2=getparent($parentid2,$ctitle2);
            echo "<option value=\"$cid2\"$sel>$ctitle2</option>";
        }
        echo "</select>"
            ."<input type=\"hidden\" name=\"mode\" value=\"DownloadsModDownloadS\" />"
            ."<input type=\"submit\" value=\""._MODIFY."\" />&nbsp;<input type=\"button\" value=\""._DELETE."\" onclick=\"window.location.href='".adminlink("&amp;mode=DownloadsDelDownload&amp;lid=$lid")."';\" /></form><br />";
        CloseTable();
        echo '<br />';
    /* Modify or Add Editorial */
        $resulted2 = $db->sql_query("select adminid, editorialtimestamp, editorialtext, editorialtitle from ".$downloadsprefix."_editorials where downloadid='$lid'");
        $recordexist = $db->sql_numrows($resulted2);
        OpenTable();
    /* if returns 'bad query' status 0 (add editorial) */
        if ($recordexist == 0) {
            echo "<center><font class=\"content\"><b>"._ADDEDITORIAL."</b></font></center><br /><br />"
                .'<form action="'.adminlink($op).'" method="post" enctype="multipart/form-data" accept-charset="utf-8">'
                ."<input type=\"hidden\" name=\"downloadid\" value=\"$lid\" />"
                ._EDITORIALTITLE.":<br /><input type=\"text\" name=\"editorialtitle\" value=\"$editorialtitle\" size=\"50\" maxlength=\"100\" /><br />"
                ._EDITORIALTEXT.":<br /><textarea name=\"editorialtext\" cols=\"60\" rows=\"10\">$editorialtext</textarea><br />"
                ."</select><input type=\"hidden\" name=\"mode\" value=\"DownloadsAddEditorial\" /><input type=\"submit\" value=\""._ADD."\" />";
        } else {
    /* if returns 'cool' then status 1 (modify editorial) */
            while (list($adminid, $editorialtimestamp, $editorialtext, $editorialtitle) = $db->sql_fetchrow($resulted2)) {
                ereg ("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2}) ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})", $editorialtimestamp, $editorialtime);
                $editorialtime = strftime("%F",mktime($editorialtime[4],$editorialtime[5],$editorialtime[6],$editorialtime[2],$editorialtime[3],$editorialtime[1]));
                $date_array = explode("-", $editorialtime);
                $timestamp = mktime(0, 0, 0, $date_array["1"], $date_array["2"], $date_array["0"]);
                $formatted_date = date("F j, Y", $timestamp);
                echo "<center><font class=\"content\"><b>Modify Editorial</b></font></center><br /><br />"
                    .'<form action="'.adminlink($op).'" method="post" enctype="multipart/form-data" accept-charset="utf-8">'
                    ._AUTHOR.": $adminid<br />"
                    ._DATEWRITTEN.": $formatted_date<br /><br />"
                    ."<input type=\"hidden\" name=\"downloadid\" value=\"$lid\">"
                    ._EDITORIALTITLE.":<br /><input type=\"text\" name=\"editorialtitle\" value=\"$editorialtitle\" size=\"50\" maxlength=\"100\" /><br />"
                    ._EDITORIALTEXT.":<br /><textarea name=\"editorialtext\" cols=\"60\" rows=\"10\">$editorialtext</textarea><br />"
                    ."</select><input type=\"hidden\" name=\"mode\" value=\"DownloadsModEditorial\" /><input type=\"submit\" value=\""._MODIFY."\" /> [ <a href=\"".adminlink("&amp;mode=DownloadsDelEditorial&amp;downloadid=$lid")."\">"._DELETE."</a> ]";
            }
        }
        CloseTable();
        echo '<br />';
        OpenTable();
        /* Show Comments */
        $result5= $db->sql_query("SELECT ratingdbid, ratinguser, ratingcomments, ratingtimestamp FROM ".$downloadsprefix."_votedata WHERE ratinglid='$lid' AND ratingcomments != '' ORDER BY ratingtimestamp DESC");
        $totalcomments = $db->sql_numrows($result5);
        echo "<table valign=\"top\" width=\"100%\">";
        echo "<tr><td colspan=\"7\"><b>Download Comments (total comments: $totalcomments)</b><br /><br /></td></tr>";
        echo "<tr><td width=\"20\" colspan=\"1\"><b>User  </b></td><td colspan=\"5\"><b>Comment  </b></td><td><b><center>"._DELETE."</center></b></td><br /></tr>";
        if ($totalcomments == 0) echo "<tr><td colspan=\"7\"><center><font color=\"#cccccc\">No Comments<br /></font></center></td></tr>";
        $x=0;
        $colorswitch="dddddd";
        while (list($ratingdbid, $ratinguser, $ratingcomments, $ratingtimestamp)=$db->sql_fetchrow($result5)) {
            ereg ("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2}) ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})", $ratingtimestamp, $ratingtime);
            $ratingtime = strftime("%F",mktime($ratingtime[4],$ratingtime[5],$ratingtime[6],$ratingtime[2],$ratingtime[3],$ratingtime[1]));
            $date_array = explode("-", $ratingtime);
            $timestamp = mktime(0, 0, 0, $date_array["1"], $date_array["2"], $date_array["0"]);
            $formatted_date = date("F j, Y", $timestamp);
            echo "<tr bgcolor=\"$colorswitch\"><td valign=\"top\">$ratinguser</td><td valign=\"top\" colspan=\"5\">$ratingcomments</td><td><center><b><a href=\"".adminlink("&amp;mode=DownloadsDelComment&amp;lid=$lid&amp;rid=$ratingdbid")."\">X</a></b></center></td><br /></tr>";
            $x++;
            if ($colorswitch=="dddddd") $colorswitch="ffffff";
            else $colorswitch="dddddd";
        }
    // Show Registered Users Votes
        $result5= $db->sql_query("SELECT ratingdbid, ratinguser, rating, ratinghostname, ratingtimestamp FROM ".$downloadsprefix."_votedata WHERE ratinglid='$lid' AND ratinguser != 'outside' AND ratinguser != '$anonymous' ORDER BY ratingtimestamp DESC");
        $totalvotes = $db->sql_numrows($result5);
        echo "<tr><td colspan=\"7\"><br /><br /><b>Registered User Votes (total votes: $totalvotes)</b><br /><br /></td></tr>";
        echo "<tr><td><b>User  </b></td><td><b>IP Address  </b></td><td><b>Rating  </b></td><td><b>User AVG Rating  </b></td><td><b>Total Ratings  </b></td><td><b>Date  </b></td></font></b><td><b><center>".DELETE."</center></b></td><br /></tr>";
        if ($totalvotes == 0) echo "<tr><td colspan=\"7\"><center><font color=\"#cccccc\">No Registered User Votes<br /></font></center></td></tr>";
        $x=0;
        $colorswitch="dddddd";
        while(list($ratingdbid, $ratinguser, $rating, $ratinghostname, $ratingtimestamp)=$db->sql_fetchrow($result5)) {
            ereg ("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2}) ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})", $ratingtimestamp, $ratingtime);
            $ratingtime = strftime("%F",mktime($ratingtime[4],$ratingtime[5],$ratingtime[6],$ratingtime[2],$ratingtime[3],$ratingtime[1]));
            $date_array = explode("-", $ratingtime);
            $timestamp = mktime(0, 0, 0, $date_array["1"], $date_array["2"], $date_array["0"]);
            $formatted_date = date("F j, Y", $timestamp);

        //Individual user information
            $result2= $db->sql_query("SELECT rating FROM ".$downloadsprefix."_votedata WHERE ratinguser = '$ratinguser'");
            $usertotalcomments = $db->sql_numrows($result2);
            $useravgrating = 0;
            while(list($rating2)=$db->sql_fetchrow($result2))    $useravgrating = $useravgrating + $rating2;
            $useravgrating = $useravgrating / $usertotalcomments;
            $useravgrating = number_format($useravgrating, 1);
            echo "<tr bgcolor=\"$colorswitch\"><td>$ratinguser</td><td>$ratinghostname</td><td>$rating</td><td>$useravgrating</td><td>$usertotalcomments</td><td>$formatted_date </font></b></td><td><center><b><a href=\"".adminlink("&amp;mode=DownloadsDelVote&amp;lid=$lid&amp;rid=$ratingdbid")."\">X</a></b></center></td></tr><br />";
            $x++;
            if ($colorswitch=="dddddd") $colorswitch="ffffff";
            else $colorswitch="dddddd";
        }
    // Show Unregistered Users Votes
        $result5= $db->sql_query("SELECT ratingdbid, rating, ratinghostname, ratingtimestamp FROM ".$downloadsprefix."_votedata WHERE ratinglid='$lid' AND ratinguser = '$anonymous' ORDER BY ratingtimestamp DESC");
        $totalvotes = $db->sql_numrows($result5);
        echo "<tr><td colspan=\"7\"><b><br /><br />Unregistered User Votes (total votes: $totalvotes)</b><br /><br /></td></tr>";
        echo "<tr><td colspan=\"2\"><b>IP Address  </b></td><td colspan=\"3\"><b>Rating  </b></td><td><b>Date  </b></font></td><td><b><center>"._DELETE."</center></b></td><br /></tr>";
        if ($totalvotes == 0) echo "<tr><td colspan=\"7\"><center><font color=\"#cccccc\">No Unregistered User Votes<br /></font></center></td></tr>";
        $x=0;
        $colorswitch="dddddd";
        while(list($ratingdbid, $rating, $ratinghostname, $ratingtimestamp)=$db->sql_fetchrow($result5)) {
            ereg ("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2}) ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})", $ratingtimestamp, $ratingtime);
            $ratingtime = strftime("%F",mktime($ratingtime[4],$ratingtime[5],$ratingtime[6],$ratingtime[2],$ratingtime[3],$ratingtime[1]));
            $date_array = explode("-", $ratingtime);
            $timestamp = mktime(0, 0, 0, $date_array["1"], $date_array["2"], $date_array["0"]);
            $formatted_date = date("F j, Y", $timestamp);
            echo "<tr bgcolor=\"$colorswitch\"><td colspan=\"2\">$ratinghostname</td><td colspan=\"3\">$rating</td><td>$formatted_date </font></b></td><td><center><b><a href=\"".adminlink("&amp;mode=DownloadsDelVote&amp;lid=$lid&amp;rid=$ratingdbid")."\">X</a></b></center></td></tr><br />";
            $x++;
            if ($colorswitch=="dddddd") $colorswitch="ffffff";
            else $colorswitch="dddddd";
        }

    // Show Outside Users Votes
        $result5= $db->sql_query("SELECT ratingdbid, rating, ratinghostname, ratingtimestamp FROM ".$downloadsprefix."_votedata WHERE ratinglid='$lid' AND ratinguser = 'outside' ORDER BY ratingtimestamp DESC");
        $totalvotes = $db->sql_numrows($result5);
        echo "<tr><td colspan=\"7\"><b><br /><br />Outside User Votes (total votes: $totalvotes)</b><br /><br /></td></tr>";
        echo "<tr><td colspan=\"2\"><b>IP Address  </b></td><td colspan=\"3\"><b>Rating  </b></td><td><b>Date  </b></td></font></b><td><b><center>"._DELETE."</center></b></td><br /></tr>";
        if ($totalvotes == 0) echo "<tr><td colspan=\"7\"><center><font color=\"#cccccc\">No Votes from Outside $sitename<br /></font></center></td></tr>";
        $x=0;
        $colorswitch="dddddd";
        while(list($ratingdbid, $rating, $ratinghostname, $ratingtimestamp)=$db->sql_fetchrow($result5)) {
            ereg ("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2}) ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})", $ratingtimestamp, $ratingtime);
            $ratingtime = strftime("%F",mktime($ratingtime[4],$ratingtime[5],$ratingtime[6],$ratingtime[2],$ratingtime[3],$ratingtime[1]));
            $date_array = explode("-", $ratingtime);
            $timestamp = mktime(0, 0, 0, $date_array["1"], $date_array["2"], $date_array["0"]);
            $formatted_date = date("F j, Y", $timestamp);
            echo "<tr><td colspan=\"2\" bgcolor=\"$colorswitch\">$ratinghostname</td><td colspan=\"3\" bgcolor=\"$colorswitch\">$rating</td><td bgcolor=\"$colorswitch\">$formatted_date  </font></b></td><td bgcolor=\"$colorswitch\"><center><b><a href=\"".adminlink("&amp;mode=DownloadsDelVote&amp;lid=$lid&amp;rid=$ratingdbid")."\">X</a></b></center></td></tr><br />";
            $x++;
            if ($colorswitch=="dddddd") $colorswitch="ffffff";
            else $colorswitch="dddddd";
        }
        echo '<tr><td colspan="6"><br /></td></tr></table>';
    }
    echo '</form>';
    CloseTable();
    echo '<br />';
    require('footer.php');
}

function DownloadsModDownloadS() {
    global $downloadsprefix, $db;
    $cat = explode('-', $_POST['cat']);
    $cat[0] = intval($cat[0]);
    $cat[1] = empty($cat[1]) ? 0 : intval($cat[1]);
    $title = Fix_Quotes($_POST['title']);
    $url = Fix_Quotes($_POST['url']);
    $description = Fix_Quotes($_POST['description']);
    $name = Fix_Quotes($_POST['name']);
    $email = Fix_Quotes($_POST['email']);
    $hits  = intval($_POST['hits']);
    $filesize = intval($_POST['filesize']);
    $version  = Fix_Quotes($_POST['version']);
    $homepage = Fix_Quotes($_POST['homepage']);
    $db->sql_query("update ".$downloadsprefix."_downloads set cid='$cat[0]', sid='$cat[1]', title='$title', url='$url', description='$description', name='$name', email='$email', hits='$hits', filesize='$filesize', version='$version', homepage='$homepage' where lid=".intval($_POST['lid']));
    url_redirect(getlink("Downloads&d_op=viewdownload&cid=$cat[0]"));
}

function DownloadsDelDownload() {
    global $downloadsprefix, $db, $op;
    $db->sql_query("delete from ".$downloadsprefix."_downloads where lid=".intval($_GET['lid']));
    url_redirect(adminlink($op));
}

function DownloadsDelComment() {
    global $downloadsprefix, $db;
    $db->sql_query("UPDATE ".$downloadsprefix."_votedata SET ratingcomments='' WHERE ratingdbid=".intval($_GET['rid']));
    $db->sql_query("UPDATE ".$downloadsprefix."_downloads SET totalcomments = (totalcomments - 1) WHERE lid=".intval($_GET['lid']));
    url_redirect(adminlink("&mode=DownloadsModDownload&lid=$lid"));

}

function DownloadsDelVote() {
    global $downloadsprefix, $db;
    $lid = intval($_GET['lid']);
    $rid = intval($_GET['rid']);
    $db->sql_query("delete from ".$downloadsprefix."_votedata where ratingdbid='$rid'");
    $voteresult = $db->sql_query("select rating, ratinguser, ratingcomments FROM ".$downloadsprefix."_votedata WHERE ratinglid='$lid'");
    $totalvotesDB = $db->sql_numrows($voteresult);
    include('modules/Downloads/voteinclude.php');
    $db->sql_query("UPDATE ".$downloadsprefix."_downloads SET downloadratingsummary=$finalrating,totalvotes=$totalvotesDB,totalcomments=$truecomments WHERE lid='$lid'");
    url_redirect(adminlink("&mode=DownloadsModDownload&lid=$lid"));
}

function DownloadsAddEditorial() {
    global $downloadsprefix, $db;
    $db->sql_query("insert into ".$downloadsprefix."_editorials values (".intval($_POST['downloadid']).", '".is_admin()."', now(), '".Fix_Quotes($_POST['editorialtext'])."', '".Fix_Quotes($_POST['editorialtitle'])."')");
    url_redirect(adminlink("&mode=DownloadsModDownload&lid=$downloadid"));
}

function DownloadsModEditorial() {
    global $downloadsprefix, $db;
    $db->sql_query("update ".$downloadsprefix."_editorials set editorialtext='".Fix_Quotes($_POST['editorialtext'])."', editorialtitle='".Fix_Quotes($_POST['editorialtitle'])."' where downloadid=".intval($_POST['downloadid']));
    url_redirect(adminlink("&mode=DownloadsModDownload&lid=$downloadid"));
}

function DownloadsDelEditorial() {
    global $downloadsprefix, $db;
    $db->sql_query("delete from ".$downloadsprefix."_editorials where downloadid=".intval($_GET['downloadid']));
    url_redirect(adminlink("&mode=DownloadsModDownload&lid=$downloadid"));
}
