<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Downloads/modules/Downloads/search.php,v $
  $Revision: 9.2 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:44:30 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

function search() {
    global $bgcolor2, $downloadsprefix, $downloadsresults, $db, $mainvotedecimal, $module_name ;
    include("header.php");
    $min= isset($_GET['min']) ? intval($_GET['min']) : 0;
    $orderby = convertorderbyin($_GET['orderby']);
    if ((isset($_GET['show'])) && (intval($_GET['show']) != 0)) {
        $downloadsresults = intval($_GET['show']);
    } else {
        $show = $downloadsresults;
    }
    $max = $min+$downloadsresults;
	$query = isset($_POST['query']) ? $_POST['query'] : $_GET['query'];
    $the_query = htmlprepare($query);
    $query = Fix_Quotes($query, true);
    $result = $db->sql_query("SELECT lid, cid, title, url, description, date, hits, downloadratingsummary, totalvotes, totalcomments, filesize, version, homepage FROM ".$downloadsprefix."_downloads WHERE title LIKE '%$query%' OR description LIKE '%$query%' ORDER BY $orderby LIMIT $min,$downloadsresults");
    $fullcountresult = $db->sql_query("SELECT lid, title, description, date, hits, downloadratingsummary, totalvotes, totalcomments FROM ".$downloadsprefix."_downloads WHERE title LIKE '%$query%' OR description LIKE '%$query%' ");
    $totalselecteddownloads = $db->sql_numrows($fullcountresult);
    $nrows = $db->sql_numrows($result);
    $x=0;
    downl_menu_tpl(1);
    echo '<br />';
    OpenTable();
    if ($query != "") {
        if ($nrows>0) {
        echo "<font class=\"option\">"._SEARCHRESULTS4.": <b>$the_query</b></font><br /><br />"
            ."<table width=\"100%\" bgcolor=\"$bgcolor2\"><tr><td><font class=\"option\"><b>"._USUBCATEGORIES."</b></font></td></tr></table>";
            $result2 = $db->sql_query("SELECT cid, title FROM ".$downloadsprefix."_categories WHERE title LIKE '%$query%' ORDER BY title DESC");
        while(list($cid, $stitle) = $db->sql_fetchrow($result2)) {
            $res = $db->sql_query("SELECT * FROM ".$downloadsprefix."_downloads WHERE cid=$cid");
            $numrows = $db->sql_numrows($res);
                $result3 = $db->sql_query("SELECT cid,title,parentid FROM ".$downloadsprefix."_categories WHERE cid=$cid");
                list($cid3,$title3,$parentid3) = $db->sql_fetchrow($result3);
                if ($parentid3>0) $title3 = getparent($parentid3,$title3);
                $title3 = ereg_replace($query, "<b>$query</b>", $title3);

        }
        echo "<br /><table width=\"100%\" bgcolor=\"$bgcolor2\"><tr><td><font class=\"option\"><b>"._UDOWNLOADS."</b></font></td></tr></table>";
            $orderbyTrans = convertorderbytrans($orderby);
            echo "<center><font class=\"content\">"._SORTDOWNLOADSBY.": "
            ._TITLE." (<a href=\"".getlink("&amp;d_op=search&amp;query=$the_query&amp;orderby=titleA")."\">A</a>\<a href=\"".getlink("&amp;d_op=search&amp;query=$the_query&amp;orderby=titleD")."\">D</a>) "
            ._DATE." (<a href=\"".getlink("&amp;d_op=search&amp;query=$the_query&amp;orderby=dateA")."\">A</a>\<a href=\"".getlink("&amp;d_op=search&amp;query=$the_query&amp;orderby=dateD")."\">D</a>) "
            ._RATING." (<a href=\"".getlink("&amp;d_op=search&amp;query=$the_query&amp;orderby=ratingA")."\">A</a>\<a href=\"".getlink("&amp;d_op=search&amp;query=$the_query&amp;orderby=ratingD")."\">D</a>) "
            ._POPULARITY." (<a href=\"".getlink("&amp;d_op=search&amp;query=$the_query&amp;orderby=hitsA")."\">A</a>\<a href=\"".getlink("&amp;d_op=search&amp;query=$the_query&amp;orderby=hitsD")."\">D</a>)"
            ."<br />"._RESSORTED.": $orderbyTrans</center><br /><br /><br />";
        while(list($lid, $cid, $title, $url, $description, $time, $hits, $downloadratingsummary, $totalvotes, $totalcomments, $filesize, $version, $homepage) = $db->sql_fetchrow($result)) {
            $downloadratingsummary = number_format($downloadratingsummary, $mainvotedecimal);
            $transfertitle = str_replace (" ", "_", $title);
            $title = ereg_replace($query, "<b>$query</b>", $title);
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
            echo '<br />';
            $description = ereg_replace($query, "<b>$query</b>", $description);
            echo "<b>"._DESCRIPTION.":</b> $description<br />";
            echo "<b>"._VERSION.":</b> $version <b>"._FILESIZE.":</b> ".CoolSize($filesize)."<br />";
            echo "<b>"._ADDEDON.":</b> $datetime <b>"._UDOWNLOADS.":</b> $hits";
            /* voting & comments stats */
            if ($totalvotes == 1) { $votestring = _VOTE; }
            else { $votestring = _VOTES; }
            if ($downloadratingsummary!="0" || $downloadratingsummary!="0.0") {
                echo " <b>"._RATING.":</b> $downloadratingsummary ($totalvotes $votestring)";
            }
            echo '<br />';
            $result3 = $db->sql_query("SELECT cid,title,parentid FROM ".$downloadsprefix."_categories WHERE cid=$cid");
            list($cid3,$title3,$parentid3) = $db->sql_fetchrow($result3);
            if ($parentid3>0) $title3 = getparent($parentid3,$title3);
            echo "<B>"._CATEGORY.":</B> <A HREF=\"".getlink("&amp;d_op=viewdownload&amp;cid=$cid")."\">$title3</A>";
            if ($homepage == "") {
                echo '<br />';
            } else {
                echo "<br /><a href=\"$homepage\" target=\"new\">"._HOMEPAGE."</a> | ";
            }
            echo "<a href=\"".getlink("&amp;d_op=ratedownload&amp;lid=$lid")."\">"._RATERESOURCE."</a>";
            echo " | <a href=\"".getlink("&amp;d_op=viewdownloaddetails&amp;lid=$lid")."\">"._DETAILS."</a>";
            if ($totalcomments != 0) {
                echo " | <a href=\"".getlink("&amp;d_op=viewdownloadcomments&amp;lid=$lid")."\">"._SCOMMENTS." ($totalcomments)</a>";
            }
            detecteditorial($lid, 0);
            echo "<br /><br />";
            $x++;
        }
        echo "</font>";
        $orderby = convertorderbyout($orderby);
    } else {
        echo "<br /><br /><center><font class=\"option\"><b>"._NOMATCHES."</b></font><br /><br />"._GOBACK."<br /></center>";
    }
    /* Calculates how many pages exist.  Which page one should be on, etc... */
    $downloadpagesint = ($totalselecteddownloads / $downloadsresults);
    $downloadpageremainder = ($totalselecteddownloads % $downloadsresults);
    if ($downloadpageremainder != 0) {
        $downloadpages = ceil($downloadpagesint);
        if ($totalselecteddownloads < $downloadsresults) {
            $downloadpageremainder = 0;
    }
    } else {
        $downloadpages = $downloadpagesint;
    }
    /* Page Numbering */
    if ($downloadpages!=1 && $downloadpages!=0) {
        echo "<br /><br />"._SELECTPAGE.": ";
        $prev=$min-$downloadsresults;
        if ($prev>=0) {
            echo "&nbsp;&nbsp;<b>[ <a href=\"".getlink("&amp;d_op=search&amp;query=$the_query&amp;min=$prev&amp;orderby=$orderby&amp;show=$show")."\">"
            ." << "._PREVIOUSPAGE."</a> ]</b> ";
        }
        $counter = 1;
        $currentpage = ($max / $downloadsresults);
        while ($counter<=$downloadpages ) {
            $cpage = $counter;
            $mintemp = ($downloadsresults * $counter) - $downloadsresults;
            if ($counter == $currentpage) {
                echo "<b>$counter</b> ";
            } else {
                echo "<a href=\"".getlink("&amp;d_op=search&amp;query=$the_query&amp;min=$mintemp&amp;orderby=$orderby&amp;show=$show")."\">$counter</a> ";
            }
            $counter++;
        }
        $next=$min+$downloadsresults;
        if ($x>=$downloadsresults) {
            echo "&nbsp;&nbsp;<b>[ <a href=\"".getlink("&amp;d_op=search&amp;query=$the_query&amp;min=$max&amp;orderby=$orderby&amp;show=$show")."\">"
            ._NEXTPAGE." >></a> ]</b>";
        }
    }
    echo "<br /><br /><center><font class=\"content\">"
    ._TRY2SEARCH." \"$the_query\" "._INOTHERSENGINES."<br />"
    ."<a target=\"_blank\" href=\"http://www.altavista.com/cgi-bin/query?pg=q&amp;sc=on&amp;hl=on&amp;act=2006&amp;par=0&amp;q=$the_query&amp;kl=XX&amp;stype=stext\">Alta Vista</a> - "
    ."<a target=\"_blank\" href=\"http://www.hotbot.com/?MT=$the_query&amp;DU=days&amp;SW=web\">HotBot</a> - "
    ."<a target=\"_blank\" href=\"http://www.infoseek.com/Titles?qt=$the_query\">Infoseek</a> - "
    ."<a target=\"_blank\" href=\"http://www.dejanews.com/dnquery.xp?QRY=$the_query\">Deja News</a> - "
    ."<a target=\"_blank\" href=\"http://www.lycos.com/cgi-bin/pursuit?query=$the_query&amp;maxhits=20\">Lycos</a> - "
    ."<a target=\"_blank\" href=\"http://search.yahoo.com/bin/search?p=$the_query\">Yahoo</a>"
    ."<br />"
    ."<a target=\"_blank\" href=\"http://es.linuxstart.com/cgi-bin/sqlsearch.cgi?pos=1&amp;query=$the_query&amp;language=&amp;advanced=&amp;urlonly=&amp;withid=\">LinuxStart</a> - "
    ."<a target=\"_blank\" href=\"http://search.1stlinuxsearch.com/compass?scope=$the_query&amp;ui=sr\">1stLinuxSearch</a> - "
    ."<a target=\"_blank\" href=\"http://www.google.com/search?q=$the_query\">Google</a> - "
    ."<a target=\"_blank\" href=\"http://www.linuxdownloads.com/cgi-bin/search.cgi?query=$the_query&amp;engine=Downloads\">LinuxDownloads</a> - "
    ."<a target=\"_blank\" href=\"http://www.freshmeat.net/search/?q=$the_query&amp;section=projects\">Freshmeat</a> - "
    ."<a target=\"_blank\" href=\"http://www.justlinux.com/bin/search.pl?key=$the_query\">JustLinux</a>"
    ."</font>";
    } else {
    echo "<center><font class=\"option\"><b>"._NOMATCHES."</b></font></center><br /><br />";
    }
    CloseTable();
    include("footer.php");
}
