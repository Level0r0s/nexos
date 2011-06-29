<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Downloads/modules/Downloads/new.php,v $
  $Revision: 9.2 $
  $Author: phoenix $
  $Date: 2007/09/20 09:35:35 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

function NewDownloads() {
    global $downloadsprefix, $db;
    $newdownloadshowdays = isset($_GET['newdownloadshowdays']) && is_numeric($_GET['newdownloadshowdays']) ? $_GET['newdownloadshowdays'] : 7;
    include("header.php");
    downl_menu_tpl(1);
    echo '<br />';
    OpenTable();
    echo "<center><font class=\"option\"><b>"._NEWDOWNLOADS."</b></font></center><br />";

    $newdownloadDB = Date("Y-m-d", (time()-(86400 * 7)));
    $result = $db->sql_query("SELECT COUNT(*) FROM ".$downloadsprefix."_downloads WHERE date >= '$newdownloadDB'");
//    $result = $db->sql_query("SELECT COUNT(*) FROM ".$downloadsprefix."_downloads WHERE date >= ".(time()-(86400 * 7)));
    list($allweekdownloads) = $db->sql_fetchrow($result);

    $newdownloadDB = Date("Y-m-d", (time()-(86400 * 30)));
    $result = $db->sql_query("SELECT COUNT(*) FROM ".$downloadsprefix."_downloads WHERE date >= '$newdownloadDB'");
//    $result = $db->sql_query("SELECT COUNT(*) FROM ".$prefix."_links_links WHERE date >= ".(time()-(86400 * 30)));
    list($allmonthdownloads) = $db->sql_fetchrow($result);

    echo "<center><b>"._TOTALNEWDOWNLOADS.":</b> "._LASTWEEK." - $allweekdownloads \ "._LAST30DAYS." - $allmonthdownloads<br />"
        ._SHOW.": <a href=\"".getlink("&amp;d_op=NewDownloads&amp;newdownloadshowdays=7")."\">"._1WEEK."</a>
        - <a href=\"".getlink("&amp;d_op=NewDownloads&amp;newdownloadshowdays=14")."\">"._2WEEKS."</a>
        - <a href=\"".getlink("&amp;d_op=NewDownloads&amp;newdownloadshowdays=30")."\">"._30DAYS."</a>
        </center><br />";

    /* List Last VARIABLE Days of Downloads */
    if (!isset($newdownloadshowdays)) {
        $newdownloadshowdays = 7;
    }
    echo "<br /><center><b>"._DTOTALFORLAST." $newdownloadshowdays "._DAYS.":</b><br /><br />";
    $counter = 0;
    $allweekdownloads = 0;
    define('_TDATESTRING2','%1$s, %2$s %3$s');
    while ($counter <= $newdownloadshowdays-1) {
        $newdownloaddayRaw = (time()-(86400 * $counter));
        $newdownloadday = date("d-M-Y", $newdownloaddayRaw);
        $newlinkdayRaw = date("d", $newdownloaddayRaw);
        $newlinkyearRaw = date("Y", $newdownloaddayRaw);
        $newlinkmonthRaw = date("F", $newdownloaddayRaw);
        $newlinkmonth = defined('_'.strtoupper($newlinkmonthRaw)) ? constant('_'.strtoupper($newlinkmonthRaw)) : $newlinkmonthRaw;
        //$newdownloadView = $newlinkmonth.' '.date("d, Y", $newdownloaddayRaw);
        $newdownloadView = sprintf(_TDATESTRING2,$newlinkmonth,$newlinkdayRaw,$newlinkyearRaw);
        $newdownloadDB = Date("Y-m-d", $newdownloaddayRaw);
        $totaldownloads = $db->sql_numrows($db->sql_query("SELECT * FROM ".$downloadsprefix."_downloads WHERE date LIKE '%$newdownloadDB%'"));
        $counter++;
        $allweekdownloads = $allweekdownloads + $totaldownloads;
    if ($totaldownloads > 0) { $totaldownloads = "<B>$totaldownloads</B>"; }
        echo "<b>&#8226;</b>&nbsp;<a href=\"".getlink("&amp;d_op=NewDownloadsDate&amp;selectdate=$newdownloaddayRaw")."\">$newdownloadView</a>&nbsp($totaldownloads)<br />";
    }
    $counter = 0;
    $allmonthdownloads = 0;
    echo "</center>";
    CloseTable();
    include("footer.php");
}

function NewDownloadsDate() {
    global $downloadsprefix, $db, $module_name;
    $selectdate = intval($_GET['selectdate']);
    $dateDB = (date("d-M-Y", $selectdate));
    $dateView = (date("F d, Y", $selectdate));
    include("header.php");
    downl_menu_tpl(1);
    echo '<br />';
    OpenTable();
    $newdownloadDB = Date("Y-m-d", $selectdate);
    $totaldownloads = $db->sql_numrows($db->sql_query("SELECT * FROM ".$downloadsprefix."_downloads WHERE date LIKE '%$newdownloadDB%'"));
    echo "<font class=\"option\"><b>$dateView - $totaldownloads "._NEWDOWNLOADS."</b></font>"
    ."<table width=\"100%\" cellspacing=\"0\" cellpadding=\"10\" border=\"0\"><tr><td><font class=\"content\">";
    $sql = "SELECT lid, cid, title, description, date, hits, url, downloadratingsummary, totalvotes, totalcomments, filesize, version, homepage FROM ".$downloadsprefix."_downloads WHERE date LIKE '%$newdownloadDB%' ORDER BY title ASC";
    $result = $db->sql_query($sql);
    while ($row = $db->sql_fetchrow($result)) {
        $lid = $row['lid'];
        $cid = $row['cid'];
        $title = $row['title'];
        $description = $row['description'];
        $time = $row['date'];
        $hits = $row['hits'];
        $url = $row['url'];
        $downloadratingsummary = $row['downloadratingsummary'];
        $totalvotes = $row['totalvotes'];
        $totalcomments = $row['totalcomments'];
        $filesize = $row['filesize'];
        $version = $row['version'];
        $homepage = $row['homepage'];
        $downloadratingsummary = number_format($downloadratingsummary, $mainvotedecimal);
        if (can_admin('downloads')) {
            if (eregi("http", $url)) { echo "<a href=\"".adminlink("$module_name&mode=DownloadsModDownload&amp;lid=$lid")."\"><img src=\"modules/$module_name/images/icon30.gif\" border=\"0\" alt=\""._EDIT."\"></a>"; }
            else { echo "<a href=\"".adminlink("$module_name&mode=DownloadsModDownload&amp;lid=$lid")."\"><img src=\"modules/$module_name/images/download.gif\" border=\"0\" alt=\""._EDIT."\"></a>"; }
        } else {
            if (eregi("http", $url)) { echo "<img src=\"modules/$module_name/images/icon30.gif\" border=\"0\" alt=\"\">"; }
            else { echo "<img src=\"modules/$module_name/images/download.gif\" border=\"0\" alt=\"\">"; }
        }
        echo "&nbsp;<a href=\"".getlink("&amp;d_op=getit&amp;lid=$lid")."\" class=\"title\">$title</a>";
        $datetime = formatDateTime($time.' 00:00:00', _DATESTRING3);
        newdownloadgraphic($datetime);
        popgraphic($hits);
        detecteditorial($lid, 1);
        echo "<br /><b>"._DESCRIPTION.":</b> $description<br />";
        echo "<b>"._VERSION.":</b> $version <b>"._FILESIZE.":</b> ".CoolSize($filesize)."<br />";
        echo "<b>"._ADDEDON.":</b> <b>$datetime</b> <b>"._UDOWNLOADS.":</b> $hits";
        $transfertitle = str_replace (" ", "_", $title);
        /* voting & comments stats */
        $votestring = ($totalvotes == 1) ? _VOTE : _VOTES;
        if ($downloadratingsummary!="0" || $downloadratingsummary!="0.0") {
        echo " <b>"._RATING.":</b> $downloadratingsummary ($totalvotes $votestring)";
    }
    echo '<br />';
    $sql2 = "SELECT title FROM ".$downloadsprefix."_categories WHERE cid='$cid'";
    $result2 = $db->sql_query($sql2);
    $row2 = $db->sql_fetchrow($result2);
    $ctitle = $row2[title];
    $ctitle = getparent($cid,$ctitle);
    echo "<B>"._CATEGORY.":</B> <A HREF=\"".getlink("&amp;d_op=viewdownload&amp;cid=$cid")."\">$ctitle</A><br />";
    if ($homepage != "") {
        echo "<br /><a href=\"$homepage\" target=\"new\">"._HOMEPAGE."</a> | ";
    }
    echo "<a href=\"".getlink("&amp;d_op=ratedownload&amp;lid=$lid")."\">"._RATERESOURCE."</a>";
    if (is_user()) {
        echo " | <a href=\"".getlink("&amp;d_op=brokendownload&amp;lid=$lid")."\">"._REPORTBROKEN."</a>";
    }
    echo " | <a href=\"".getlink("&amp;d_op=viewdownloaddetails&amp;lid=$lid")."\">"._DETAILS."</a>";
    if ($totalcomments != 0) {
        echo " | <a href=\"".getlink("&amp;d_op=viewdownloadcomments&amp;lid=$lid")."\">"._SCOMMENTS." ($totalcomments)</a>";
    }
    detecteditorial($lid, 0);
    echo "<br /><br />";
    }
    echo "</font></td></tr></table>";
    CloseTable();
    include("footer.php");
}
