<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Sections/modules/Sections/index.php,v $
  $Revision: 9.1 $
  $Author: djmaze $
  $Date: 2005/01/13 04:02:53 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

function listsections() {
    global $sitename, $prefix, $db;
    include ('header.php');
    $result = $db->sql_query("SELECT * FROM ".$prefix."_sections ORDER BY secname",false,__FILE__,__LINE__);
    OpenTable();
    echo "
    <center>"._SECWELCOME." $sitename.<br /><br />
    "._YOUCANFIND."</center><br /><br />
    <table border=\"0\" align=\"center\">";
    $count = 0;
    while (list($secid, $secname, $image) = $db->sql_fetchrow($result)) {
        if ($count==2) {
        echo "<tr>";
        $count = 0;
        }
        echo "<td><a href=\"".getlink("&amp;op=listarticles&amp;secid=$secid")."\"><img src=\"images/sections/$image\" border=\"0\" alt=\"$secname\" /></a>";
        $count++;
        if ($count==2) {
        echo "</tr>";
        }
        echo "</td>";
    }
    echo "</table></center>";
    CloseTable();
    include ('footer.php');
}

function listarticles($secid) {
    global $prefix, $multilingual, $currentlang, $db;
    if ($multilingual == 1) {
    $querylang = "AND slanguage='$currentlang'";
    } else {
    $querylang = "";
    }
    include ('header.php');
    $result = $db->sql_query("SELECT secname FROM ".$prefix."_sections WHERE secid=$secid",false,__FILE__,__LINE__);
    list($secname) = $db->sql_fetchrow($result);
    $result = $db->sql_query("SELECT artid, secid, title, content, counter FROM ".$prefix."_seccont WHERE secid=$secid $querylang",false,__FILE__,__LINE__);
    OpenTable();
    $result2 = $db->sql_query("SELECT image FROM ".$prefix."_sections WHERE secid=$secid",false,__FILE__,__LINE__);
    list($image) = $db->sql_fetchrow($result2);
    echo "<center><img src=\"images/sections/$image\" border=\"0\" alt=\"\" /><br /><br />
    <font class=\"option\">
    "._THISISSEC." <b>$secname</b>.<br />"._FOLLOWINGART."</font></center><br /><br />
    <table border=\"0\" align=\"center\">";
    while (list($artid, $secid, $title, $content, $counter) = $db->sql_fetchrow($result)) {
        echo "
        <tr><td align=\"left\" nowrap><font class=\"content\">
        <li><a href=\"".getlink("&amp;op=viewarticle&amp;artid=$artid")."\">$title</a> ($counter "._READS.")
        <a href=\"".getlink("&amp;op=printpage&amp;artid=$artid")."\"><img src=\"images/print.gif\" border=\"0\" alt=\""._PRINTER."\" width=\"15\" height=\"11\" /></a>
        </td></tr>
        ";
    }
    echo "</table>
    <br /><br /><br /><center>
    [ <a href=\"".getlink()."\">"._SECRETURN."</a> ]</center>";
    CloseTable();
    include ('footer.php');
}

function viewarticle($artid, $page) {
    global $prefix, $db;
    include("header.php");
    if ($page == 1 || $page == "") {
        $db->sql_query("update ".$prefix."_seccont set counter=counter+1 where artid='$artid'",false,__FILE__,__LINE__);
    }
    $result = $db->sql_query("SELECT artid, secid, title, content, counter FROM ".$prefix."_seccont WHERE artid=$artid",false,__FILE__,__LINE__);
    list($artid, $secid, $title, $content, $counter) = $db->sql_fetchrow($result);

    $result2 = $db->sql_query("SELECT secid, secname FROM ".$prefix."_sections WHERE secid='".intval($secid)."'",false,__FILE__,__LINE__);
    list($secid, $secname) = $db->sql_fetchrow($result2);
    $words = sizeof(explode(" ", $content));
    OpenTable();
    $contentpages = explode( "<!--pagebreak-->", $content );
    $pageno = count($contentpages);
    if ( $page=="" || $page < 1 )
    $page = 1;
    if ( $page > $pageno )
    $page = $pageno;
    $arrayelement = (int)$page;
    $arrayelement --;
    echo "<font class=\"option\"><b>$title</b></font><br /><br /><font class=\"content\">";
    if ($pageno > 1) {
    echo ""._PAGE.": $page/$pageno<br />";
    }
    echo "($words "._TOTALWORDS.")<br />"
    ."($counter "._READS.") &nbsp;&nbsp;"
    ."<a href=\"".getlink("&amp;op=printpage&amp;artid=$artid")."\"><img src=\"images/print.gif\" border=\"0\" alt=\""._PRINTER."\" width=\"15\" height=\"11\" /></a>"
    ."</font><br /><br /><br /><br />";
    echo "$contentpages[$arrayelement]";
    if($page >= $pageno) {
      $next_page = "";
    } else {
    $next_pagenumber = $page + 1;
    if ($page != 1) {
        $next_page .= "<img src=\"images/blackpixel.gif\" width=\"10\" height=\"2\" border=\"0\" alt=\"\" /> &nbsp;&nbsp; ";
    }
    $next_page .= "<a href=\"".getlink("&amp;op=viewarticle&amp;artid=$artid&amp;page=$next_pagenumber")."\">"._NEXT." ($next_pagenumber/$pageno)</a> <a href=\"".getlink("&amp;op=viewarticle&artid=$artid&amp;page=$next_pagenumber")."\"><img src=\"images/right.gif\" border=\"0\" alt=\""._NEXT."\" /></a>";
    }

    if($page <= 1) {
    $previous_page = "";
    } else {
    $previous_pagenumber = $page - 1;
    $previous_page = "<a href=\"".getlink("&amp;op=viewarticle&amp;artid=$artid&amp;page=$previous_pagenumber")."\"><img src=\"images/left.gif\" border=\"0\" alt=\""._PREVIOUS."\" /></a> <a href=\"".getlink("&amp;op=viewarticle&amp;artid=$artid&amp;page=$previous_pagenumber")."\">"._PREVIOUS." ($previous_pagenumber/$pageno)</a>";
    }
    echo "<div align=\"center\">"
    ."$previous_page &nbsp;&nbsp; $next_page<br /><br />"
    ."[ <a href=\"".getlink("&amp;op=listarticles&amp;secid=$secid")."\">"._BACKTO." $secname</a> | "
    ."<a href=\"".getlink()."\">"._SECINDEX."</a> ]</div>";
    CloseTable();
    include ('footer.php');
}

function PrintSecPage($artid) {
    global $site_logo, $nukeurl, $sitename, $datetime, $prefix, $db;
    $result = $db->sql_query("SELECT title, content FROM ".$prefix."_seccont WHERE artid=$artid",false,__FILE__,__LINE__);
    list($title, $content) = $db->sql_fetchrow($result);
    echo "
    <html>
    <head><title>$sitename</title></head>
    <body bgcolor=\"#FFFFFF\" text=\"#000000\">
    <table border=\"0\"><tr><td>
    <table border=\"0\" width=\"640\" cellpadding=\"0\" cellspacing=\"1\" bgcolor=\"#000000\"><tr><td>
    <table border=\"0\" width=\"640\" cellpadding=\"20\" cellspacing=\"1\" bgcolor=\"#FFFFFF\"><tr><td>
    <center>
    <img src=\"images/$site_logo\" border=\"0\" alt=\"\" /><br /><br />
    <font class=\"content\">
    <b>$title</b></font><br />
    </center><font class=\"content\">
    $content<br /><br />";
    echo "</td></tr></table></td></tr></table>
    <br /><br /><center>
    <font class=\"content\">
    "._COMESFROM." $sitename<br />
    <a href=\"$nukeurl\">$nukeurl</a><br /><br />
    "._THEURL."<br />
    <a href=\"$nukeurl/".getlink("&amp;op=viewarticle&amp;artid=$artid")."\">$nukeurl/".getlink("&amp;op=viewarticle&amp;artid=$artid")."</a></font></center>
    </td></tr></table>
    </body>
    </html>
    ";
}

$op = (isset($_GET['op']) && $_GET['op']!='') ? $_GET['op'] : ((isset($_POST['op']) && $_POST['op']!='') ? $_POST['op'] : '');
$artid = (isset($_POST['artid']) ? intval($_POST['artid']) : intval($_GET['artid']));
$secid = (isset($_POST['secid']) ? intval($_POST['secid']) : intval($_GET['secid']));
$page = (isset($_POST['page']) ? intval($_POST['page']) : intval($_GET['page']));

switch($op) {

    case "viewarticle":
    viewarticle($artid, $page);
    break;

    case "listarticles":
    listarticles($secid);
    break;

    case "printpage":
    PrintSecPage($artid);
    break;

    default:
    listsections();
    break;

}