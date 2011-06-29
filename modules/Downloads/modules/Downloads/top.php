<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Downloads/modules/Downloads/top.php,v $
  $Revision: 9.1 $
  $Author: djmaze $
  $Date: 2005/01/13 04:02:51 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

function TopRated() {
    global $downloadsprefix, $db, $module_name, $downloadvotemin, $topdownloads;
    include("header.php");
    downl_menu_tpl(1);
    echo '<br />';
    OpenTable();
    echo "<table border=\"0\" width=\"100%\"><tr><td align=\"center\">";
    if (isset($_GET['ratenum']) && isset($_GET['ratetype'])) {
        $topdownloads = intval($_GET['ratenum']);
        if ($_GET['ratetype'] == "percent") {
            $topdownloadspercentrigger = 1;
        }
    }
    if ($topdownloadspercentrigger == 1) {
        $topdownloadspercent = $topdownloads;
        list($totalrateddownloads) = $db->sql_ufetchrow("SELECT COUNT(*) FROM ".$downloadsprefix."_downloads WHERE downloadratingsummary != 0", SQL_NUM, __FILE__);
        $topdownloads = $topdownloads / 100;
        $topdownloads = $totalrateddownloads * $topdownloads;
        $topdownloads = round($topdownloads);
    }
    if ($topdownloadspercentrigger == 1) {
    echo "<center><font class=\"option\"><b>"._DBESTRATED." $topdownloadspercent% ("._OF." $totalrateddownloads "._TRATEDDOWNLOADS.")</b></font></center><br />";
    } else {
    echo "<center><font class=\"option\"><b>"._DBESTRATED." $topdownloads </b></font></center><br />";
    }
    echo "</td></tr>"
    ."<tr><td><center>"._NOTE." $downloadvotemin "._TVOTESREQ."<br />"
    ._SHOWTOP.":  [ <a href=\"".getlink("&amp;d_op=TopRated&amp;ratenum=10&amp;ratetype=num")."\">10</a> - "
    ."<a href=\"".getlink("&amp;d_op=TopRated&amp;ratenum=25&amp;ratetype=num")."\">25</a> - "
        ."<a href=\"".getlink("&amp;d_op=TopRated&amp;ratenum=50&amp;ratetype=num")."\">50</a> | "
        ."<a href=\"".getlink("&amp;d_op=TopRated&amp;ratenum=1&amp;ratetype=percent")."\">1%</a> - "
        ."<a href=\"".getlink("&amp;d_op=TopRated&amp;ratenum=5&amp;ratetype=percent")."\">5%</a> - "
        ."<a href=\"".getlink("&amp;d_op=TopRated&amp;ratenum=10&amp;ratetype=percent")."\">10%</a> ]</center><br /><br /></td></tr>";
    $sql = "SELECT lid, cid, title, description, date, hits, url, downloadratingsummary, totalvotes, totalcomments, filesize, version, homepage FROM ".$downloadsprefix."_downloads WHERE downloadratingsummary != 0 AND totalvotes >= $downloadvotemin ORDER BY downloadratingsummary DESC LIMIT 0,$topdownloads";
    $result = $db->sql_query($sql);
    echo '<tr><td>';
    while ($row = $db->sql_fetchrow($result)) {
        $lid = $row['lid'];
        $cid = $row['cid'];
        $title = $row['title'];
        $description = $row['description'];
        $time = $row['date'];
        $hits = $row['hits'];
        $url = $row['url'];
        $downloadratingsummary = number_format($row['downloadratingsummary'], $mainvotedecimal);
        $totalvotes = $row['totalvotes'];
        $totalcomments = $row['totalcomments'];
        $filesize = $row['filesize'];
        $version = $row['version'];
        $homepage = $row['homepage'];

        if (can_admin('downloads')) {
            if (eregi("http", $url)) { echo "<a href=\"".adminlink("$module_name&mode=DownloadsModDownload&amp;lid=$lid")."\"><img src=\"modules/$module_name/images/icon30.gif\" border=\"0\" alt=\""._EDIT."\"></a>"; }
            else { echo "<a href=\"".adminlink("$module_name&amp;mode=DownloadsModDownload&amp;lid=$lid")."\"><img src=\"modules/$module_name/images/download.gif\" border=\"0\" alt=\""._EDIT."\"></a>"; }
        } else {
            if (eregi("http", $url)) { echo "<img src=\"modules/$module_name/images/icon30.gif\" border=\"0\" alt=\"\">"; }
            else { echo "<img src=\"modules/$module_name/images/download.gif\" border=\"0\" alt=\"\">"; }
        }
        echo "&nbsp;<a href=\"".getlink("&amp;d_op=getit&amp;lid=$lid")."\" class=\"title\">$title</a>";
        $datetime = formatDateTime($time.' 00:00:00', _DATESTRING3);
        newdownloadgraphic($datetime);
        popgraphic($hits);
        detecteditorial($lid, 1);
        echo '<br />';
        echo "<b>"._DESCRIPTION.":</b> $description<br />";
        echo "<b>"._VERSION.":</b> $version <b>"._FILESIZE.":</b> ".CoolSize($filesize)."<br />";
        echo "<b>"._ADDEDON.":</b> $datetime <b>"._UDOWNLOADS.":</b> $hits";
        $transfertitle = str_replace (" ", "_", $title);
        /* voting & comments stats */
        if ($totalvotes == 1) {
            $votestring = _VOTE;
        } else {
            $votestring = _VOTES;
        }
        if ($downloadratingsummary!="0" || $downloadratingsummary!="0.0") {
            echo " <b>"._RATING.":</b> <b>$downloadratingsummary</b> ($totalvotes $votestring)";
        }
        echo '<br />';
        $sql2 = "SELECT title FROM ".$downloadsprefix."_categories WHERE cid=$cid";
        $result2 = $db->sql_query($sql2);
        $row2 = $db->sql_fetchrow($result2);
        $ctitle = $row2[title];
        $ctitle = getparent($cid,$ctitle);
        echo "<b>"._CATEGORY.":</b> <a href=\"".getlink("&amp;d_op=viewdownload&cid=$cid")."\">$ctitle</a><br />";
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
    echo "</td></tr></table>";
    CloseTable();
    require('footer.php');
}
