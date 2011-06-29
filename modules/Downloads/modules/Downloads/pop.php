<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Downloads/modules/Downloads/pop.php,v $
  $Revision: 9.1 $
  $Author: djmaze $
  $Date: 2005/01/13 04:02:51 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

function MostPopular() {
    global $downloadsprefix, $db, $module_name, $mainvotedecimal;
    include("header.php");
    downl_menu_tpl(1);
    echo '<br />';
    OpenTable();
    echo "<table border=\"0\" width=\"100%\"><tr><td align=\"center\">";
    $mostpopdownloads = isset($_GET['ratenum']) ? intval($_GET['ratenum']) : 10;
    if (isset($_GET['ratetype']) && $_GET['ratetype'] == 'percent') {
        $topdownloadspercent = $mostpopdownloads;
        list($totalmostpopdownloads) = $db->sql_ufetchrow("SELECT COUNT(*) FROM ".$downloadsprefix."_downloads", SQL_NUM, __FILE__);
        $mostpopdownloads = $mostpopdownloads / 100;
        $mostpopdownloads = $totalmostpopdownloads * $mostpopdownloads;
        $mostpopdownloads = round($mostpopdownloads);
    echo "<center><font class=\"option\"><b>"._MOSTPOPULAR." $topdownloadspercent% ("._OFALL." $totalmostpopdownloads "._DOWNLOADS.")</b></font></center><br />";
    } else {
    echo "<center><font class=\"option\"><b>"._MOSTPOPULAR." $mostpopdownloads</b></font></center><br />";
    }
    echo "<center>"._SHOWTOP.": [ <a href=\"".getlink("&amp;d_op=MostPopular&amp;ratenum=10&amp;ratetype=num")."\">10</a> - "
        ."<a href=\"".getlink("&amp;d_op=MostPopular&amp;ratenum=25&amp;ratetype=num")."\">25</a> - "
        ."<a href=\"".getlink("&amp;d_op=MostPopular&amp;ratenum=50&amp;ratetype=num")."\">50</a> | "
        ."<a href=\"".getlink("&amp;d_op=MostPopular&amp;ratenum=1&amp;ratetype=percent")."\">1%</a> - "
        ."<a href=\"".getlink("&amp;d_op=MostPopular&amp;ratenum=5&amp;ratetype=percent")."\">5%</a> - "
        ."<a href=\"".getlink("&amp;d_op=MostPopular&amp;ratenum=10&amp;ratetype=percent")."\">10%</a> ]</center><br /><br /></td></tr>";
    $result = $db->sql_query("SELECT lid, cid, title, description, date, hits, url, downloadratingsummary, totalvotes, totalcomments, filesize, version, homepage FROM ".$downloadsprefix."_downloads order by hits DESC limit 0, $mostpopdownloads");
    echo "<tr><td class=\"content\">";
    while(list($lid, $cid, $title, $description, $time, $hits, $url, $downloadratingsummary, $totalvotes, $totalcomments, $filesize, $version, $homepage) = $db->sql_fetchrow($result)) {
        $downloadratingsummary = number_format($downloadratingsummary, $mainvotedecimal);
        if (can_admin('downloads')) {
            if (eregi("http", $url)) { echo "<a href=\"".adminlink("$module_name&mode=DownloadsModDownload&amp;lid=$lid")."\"><img src=\"modules/$module_name/images/icon30.gif\" border=\"0\" alt=\""._EDIT."\" /></a>"; }
            else { echo "<a href=\"".adminlink("$module_name&mode=DownloadsModDownload&amp;lid=$lid")."\"><img src=\"modules/$module_name/images/download.gif\" border=\"0\" alt=\""._EDIT."\" /></a>"; }
        } else {
            if (eregi("http", $url)) { echo "<img src=\"modules/$module_name/images/icon30.gif\" border=\"0\" alt=\"\" />"; }
            else { echo "<img src=\"modules/$module_name/images/download.gif\" border=\"0\" alt=\"\" />"; }
        }
        echo "&nbsp;<a href=\"".getlink("&amp;d_op=getit&amp;lid=$lid")."\" class=\"title\">$title</a>";
        $datetime = formatDateTime($time.' 00:00:00', _DATESTRING3);
        newdownloadgraphic($datetime);
        popgraphic($hits);
        detecteditorial($lid, 1);
        echo '<br />';
        echo "<b>"._DESCRIPTION.":</b> $description<br />";
        echo "<b>"._VERSION.":</b> $version <b>"._FILESIZE.":</b> ".CoolSize($filesize)."<br />";
        echo "<b>"._ADDEDON.":</b> $datetime <b>"._UDOWNLOADS.":</b> <b>$hits</b>";
        $transfertitle = str_replace (" ", "_", $title);
        /* voting & comments stats */
        if ($totalvotes == 1) {
            $votestring = _VOTE;
        } else {
            $votestring = _VOTES;
        }
        if ($downloadratingsummary!="0" || $downloadratingsummary!="0.0") {
            echo " <b>"._RATING.":</b> $downloadratingsummary ($totalvotes $votestring)";
        }
        echo '<br />';
        $result2 = $db->sql_query("SELECT title FROM ".$downloadsprefix."_categories WHERE cid=$cid");
        list($ctitle) = $db->sql_fetchrow($result2);
        $ctitle = getparent($cid,$ctitle);
        echo "<b>"._CATEGORY.":</b> <a href=\"".getlink("&amp;d_op=viewdownload&amp;cid=$cid")."\">$ctitle</a>";
        if ($homepage == "") {
            echo '<br />';
        } else {
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
    include("footer.php");
}
