<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Downloads/modules/Downloads/view.php,v $
  $Revision: 9.3 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:44:30 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

function viewdownload() {
    global $downloadsprefix, $db, $perpage, $module_name, $bgcolor1, $bgcolor3, $show_links_num;
    $cid = intval($_GET['cid']);
    $min = isset($_GET['min']) ? intval($_GET['min']) : 0;
    $orderby = convertorderbyin($_GET['orderby']);
    $max=$min+$perpage;
    include("header.php");
    $result = $db->sql_query("SELECT title,cdescription,ldescription,parentid FROM ".$downloadsprefix."_categories WHERE cid=$cid");
    list($title,$cdescription,$ldescription,$parentid)=$db->sql_fetchrow($result);
    $title=getparentlink($parentid,$title);
    $title="<a href=".getlink().">"._MAIN."</a>/$title";

    downl_menu_tpl(1);
    echo '<br />';
    if ($ldescription != '') {
        OpenTable2();
        echo "$ldescription";
        CloseTable2();
        echo '<br />';
    }
    OpenTable();
    if ($cdescription != '') { $cdescription = "<br />".$cdescription; }
    echo "<center><font class=\"title\"><b>"._CATEGORY.": $title</b></font>$cdescription</center>";
    echo "<table border=\"0\" cellspacing=\"10\" cellpadding=\"0\" align=\"center\"><tr>";
    $result2 = $db->sql_query("SELECT cid, title, cdescription FROM ".$downloadsprefix."_categories WHERE parentid=$cid order by title");
    $count = 0;
    while(list($cid2, $title2, $cdescription2) = $db->sql_fetchrow($result2)) {
        if ($show_links_num == 1) {
            $cresult = $db->sql_query("SELECT * FROM ".$downloadsprefix."_downloads WHERE cid=$cid2");
            $cnumrows = $db->sql_numrows($cresult);
            $cnumm = " ($cnumrows)";
        } else { $cnum = ""; }
        if ($cnumrows > 0) { $folder = "modules/Downloads/images/openfolder.gif"; } else { $folder = "modules/Downloads/images/closedfolder.gif"; }
        if (can_admin('downloads')) { $folderImg = "<A HREF=\"".adminlink("$module_name&mode=DownloadsModCat&amp;cat=$cid2")."\"><IMG SRC=\"$folder\" BORDER=0 ALT=\""._EDIT."\"></A>"; } else { $folderImg = "<IMG SRC=\"$folder\" BORDER=0 ALT=\"$title2\">"; }
        echo "<td valign=\"top\"><font class=\"title\">$folderImg <a href=\"".getlink("&amp;d_op=viewdownload&amp;cid=$cid2")."\"><b>$title2</b></a></font>$cnumm";
        categorynewdownloadgraphic($cid2);
        if ($cdescription2) { echo "<br /><font class=\"content\">$cdescription2</font><br />"; } else { echo '<br />'; }
        $result3 = $db->sql_query("SELECT cid, title FROM ".$downloadsprefix."_categories WHERE parentid=$cid2 order by title limit 0,3");
        $space = 0;
        while(list($cid3, $title3) = $db->sql_fetchrow($result3)) {
            if ($space>0) { echo ",&nbsp;"; }
            if ($show_links_num == 1) {
                $cresult2 = $db->sql_query("SELECT * FROM ".$downloadsprefix."_downloads WHERE cid=$cid3");
                $cnumrows2 = $db->sql_numrows($cresult2);
                $cnum = " ($cnumrows2)";
            } else { $cnum = ""; }
            echo "<font class=\"content\"><a href=\"".getlink("&amp;d_op=viewdownload&amp;cid=$cid3")."\">$title3</a></font>$cnum";
            $space++;
        }
        if ($count<1) {
            echo "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>";
            $dum = 1;
        }
        $count++;
        if ($count==2) {
            echo "</td></tr><tr>";
            $count = 0;
            $dum = 0;
        }
    }
    if ($dum == 1) { echo "</tr></table>"; } elseif ($dum == 0) { echo "<td></td></tr></table>"; }

    echo "<hr noshade size=\"1\">";
    $orderbyTrans = convertorderbytrans($orderby);
    echo "<center><font class=\"content\">"._SORTDOWNLOADSBY.": "
        ._TITLE." (<a href=\"".getlink("&amp;d_op=viewdownload&amp;cid=$cid&amp;orderby=titleA")."\">A</a>\<a href=\"".getlink("&amp;d_op=viewdownload&amp;cid=$cid&amp;orderby=titleD")."\">D</a>) "
        ._DATE." (<a href=\"".getlink("&amp;d_op=viewdownload&amp;cid=$cid&amp;orderby=dateA")."\">A</a>\<a href=\"".getlink("&amp;d_op=viewdownload&amp;cid=$cid&amp;orderby=dateD")."\">D</a>) "
        ._RATING." (<a href=\"".getlink("&amp;d_op=viewdownload&amp;cid=$cid&amp;orderby=ratingA")."\">A</a>\<a href=\"".getlink("&amp;d_op=viewdownload&amp;cid=$cid&amp;orderby=ratingD")."\">D</a>) "
        ._POPULARITY." (<a href=\"".getlink("&amp;d_op=viewdownload&amp;cid=$cid&amp;orderby=hitsA")."\">A</a>\<a href=\"".getlink("&amp;d_op=viewdownload&amp;cid=$cid&amp;orderby=hitsD")."\">D</a>)"
        ."<br /><b>"._RESSORTED.": $orderbyTrans</b></font></center>";
    echo "<hr noshade size=\"1\">";
    $result= $db->sql_query("SELECT lid, title, url, description, date, hits, downloadratingsummary, totalvotes, totalcomments, filesize, version, homepage FROM ".$downloadsprefix."_downloads WHERE cid=$cid order by $orderby limit $min,$perpage ");
    $fullcountresult= $db->sql_query("SELECT lid FROM ".$downloadsprefix."_downloads WHERE cid=$cid");
    $totalselecteddownloads = $db->sql_numrows($fullcountresult);
    echo "<table width=\"100%\" cellspacing=\"0\" cellpadding=\"10\" border=\"0\"><tr><td><font class=\"content\">";
    $x=0;
    $color = $bgcolor3;
    while(list($lid, $title, $url, $description, $time, $hits, $downloadratingsummary, $totalvotes, $totalcomments, $filesize, $version, $homepage)=$db->sql_fetchrow($result)) {
        $downloadratingsummary = number_format($downloadratingsummary, $mainvotedecimal);
        $color = ($color == $bgcolor3) ? $bgcolor1 : $bgcolor3;
        echo "<TABLE BORDER=0 CELLPADDING=2 CELLSPACING=0 WIDTH=100%><TR BGCOLOR=\"$color\"><TD>";

        if (can_admin('downloads')) {
            if (eregi("http", $url)) { echo "<a href=\"".adminlink("$module_name&mode=DownloadsModDownload&amp;lid=$lid")."\"><img src=\"modules/$module_name/images/icon30.gif\" border=\"0\" alt=\""._EDIT."\"></a>"; }
            else { echo "<a href=\"".adminlink("$module_name&mode=DownloadsModDownload&amp;lid=$lid")."\"><img src=\"modules/$module_name/images/download.gif\" border=\"0\" alt=\""._EDIT."\"></a>"; }
        } else {
            if (eregi("http", $url)) { echo "<img src=\"modules/$module_name/images/icon30.gif\" border=\"0\" alt=\"\">"; }
            else { echo "<img src=\"modules/$module_name/images/download.gif\" border=\"0\" alt=\"\">"; }
        }
        echo "</td><td width=\"100%\" class=\"title\" valign=\"top\"><a href=\"".getlink("&amp;d_op=getit&amp;lid=$lid")."\"><B>$title</b></a>";
        $datetime = formatDateTime($time.' 00:00:00', _DATESTRING3);
        newdownloadgraphic($datetime);
        popgraphic($hits);
        detecteditorial($lid, 1);
        echo "</td></tr><TR BGCOLOR=\"$color\"><TD COLSPAN=2>";
        echo "<DIV ALIGN=\"JUSTIFY\"><b>"._DESCRIPTION.":</b> $description</td></tr><TR BGCOLOR=\"$color\"><TD COLSPAN=2>";
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
            echo " <b>"._RATING.":</b> $downloadratingsummary ($totalvotes $votestring)";
        }
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
        echo "</div></td></tr></table><br />";
        $x++;
    }
    echo "</font>";
    $orderby = convertorderbyout($orderby);
    /* Calculates how many pages exist. Which page one should be on, etc... */
    $downloadpagesint = ($totalselecteddownloads / $perpage);
    $downloadpageremainder = ($totalselecteddownloads % $perpage);
    if ($downloadpageremainder != 0) {
        $downloadpages = ceil($downloadpagesint);
        if ($totalselecteddownloads < $perpage) {
            $downloadpageremainder = 0;
        }
    } else {
        $downloadpages = $downloadpagesint;
    }
    /* Page Numbering */
    if ($downloadpages!=1 && $downloadpages!=0) {
        echo "<br /><br />";
        echo _SELECTPAGE.": ";
        $prev=$min-$perpage;
        if ($prev>=0) {
            echo "&nbsp;&nbsp;<b>[ <a href=\"".getlink("&amp;d_op=viewdownload&amp;cid=$cid&amp;min=$prev&amp;orderby=$orderby")."\">";
            echo " &lt;&lt; "._PREVIOUSPAGE."</a> ]</b> ";
        }
        $counter = 1;
        $currentpage = ($max / $perpage);
        while ($counter<=$downloadpages ) {
            $cpage = $counter;
            $mintemp = ($perpage * $counter) - $perpage;
            if ($counter == $currentpage) {
                echo "<b>$counter</b>&nbsp";
            } else {
                echo "<a href=\"".getlink("&amp;d_op=viewdownload&amp;cid=$cid&amp;min=$mintemp&amp;orderby=$orderby")."\">$counter</a> ";
            }
            $counter++;
        }
        $next=$min+$perpage;
        if ($x>=$perpage) {
            echo "&nbsp;&nbsp;<b>[ <a href=\"".getlink("&amp;d_op=viewdownload&amp;cid=$cid&amp;min=$max&amp;orderby=$orderby")."\">"
                 ._NEXTPAGE." >></a> ]</b> ";
        }
    }
    echo "</td></tr></table>";
    CloseTable();
    include("footer.php");
}
