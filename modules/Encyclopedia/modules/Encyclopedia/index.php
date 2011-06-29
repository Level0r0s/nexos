<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Encyclopedia/modules/Encyclopedia/index.php,v $
  $Revision: 9.4 $
  $Author: phoenix $
  $Date: 2007/09/20 09:36:00 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

$pagetitle .= _ENCYCLOPEDIA;

function encysearch($eid) {
    echo '<center><form action="'.getlink('&amp;file=search').'" method="post">
<input type="text" size="20" name="query" />&nbsp;&nbsp;
<input type="hidden" name="eid" value="'.$eid.'" />
<input type="submit" value="'._SEARCH.'" />
</form></center>';
}

function alpha($eid) {
    global $prefix, $db;
	
    echo '<center>'._ENCYSELECTLETTER.'<br /><br />[ ';
    $result = $db->sql_query("SELECT UPPER(SUBSTRING(title,1,1)) AS abet FROM ".$prefix."_encyclopedia_text WHERE eid='$eid' GROUP BY abet ORDER BY abet");
    while (list($ltr) = $db->sql_fetchrow($result)) {
        $ltr = urlencode($ltr);
        echo " <a href=\"".getlink("&amp;op=terms&amp;eid=$eid&amp;ltr=$ltr")."\">$ltr</a> ";
    }
    echo ' ]</center><br /><br />';
    encysearch($eid);
    echo '<center>'._GOBACK.'</center>';
}

function list_content() {
    global $prefix, $sitename, $db, $pagetitle;
    $eid = intval($_GET['eid']);
    $sql = "SELECT title, description FROM ".$prefix."_encyclopedia WHERE eid='$eid'";
    $result = $db->sql_query($sql);
    $row = $db->sql_fetchrow($result);
    $title = $row['title'];
    $description = $row['description'];
    $pagetitle .= ' '._BC_DELIM.' '.$title;
    require_once('header.php');
    OpenTable();
    echo "<center><b>$title</b></center><br />"
    ."<p align=\"justify\">$description</p>";
    CloseTable();
    echo "<br />";
    OpenTable();
    alpha($eid);
    CloseTable();
    echo "<br />";
    OpenTable();
    echo "<center><font class=\"tiny\">"._COPYRIGHT." &copy; "._BY." $sitename</font></center>";
    CloseTable();
}

function terms() {
    global $prefix, $sitename, $db, $pagetitle;
    $eid = intval($_GET['eid']);
    $ltr = substr($_GET['ltr'], 0 ,1);
    $sql = "SELECT active FROM ".$prefix."_encyclopedia WHERE eid='$eid'";
    $result = $db->sql_query($sql);
    $row = $db->sql_fetchrow($result);
    $active = $row['active'];
    $sql = "SELECT title FROM ".$prefix."_encyclopedia WHERE eid='$eid'";
    $result = $db->sql_query($sql);
    $row = $db->sql_fetchrow($result);
    $title = $row['title'];
    $pagetitle .= ' '._BC_DELIM.' '.$title;
    require_once('header.php');
    OpenTable();
    if (($active == 1) || (is_admin())) {
    if (($active != 1) && (is_admin())) {
        echo "<center>"._YOURADMINENCY."</center><br /><br />";
    }
    echo "<center>Please select one term from the following list:</center><br /><br />"
        ."<table border=\"0\" align=\"center\">";
    $sql = "SELECT tid, title FROM ".$prefix."_encyclopedia_text WHERE UPPER(title) LIKE '$ltr%' AND eid='$eid'";
    $result = $db->sql_query($sql);
    $numrows = $db->sql_numrows($result);
    if ($numrows == 0) {
        echo "<center><i>"._NOCONTENTFORLETTER." $ltr.</i></center>";
    }
    while ($row = $db->sql_fetchrow($result)) {
        $tid = $row['tid'];
        $title = $row['title'];
        echo "<tr><td><a href=\"".getlink("&amp;op=content&amp;tid=$tid")."\">$title</a></td></tr>";
    }
    echo "</table><br /><br />";
    alpha($eid);
    } else {
    echo "<center>"._ENCYNOTACTIVE."<br /><br />"
        .""._GOBACK."</center>";
    }
    CloseTable();
}

function content() {
    global $prefix, $db, $sitename, $module_name;
    $tid = intval($_GET['tid']);
    $page = intval($_GET['page']);
    require_once('header.php');
    OpenTable();
    $sql = "SELECT * FROM ".$prefix."_encyclopedia_text WHERE tid='$tid'";
    $result = $db->sql_query($sql);
    $ency = $db->sql_fetchrow($result);
    $sql = "SELECT active FROM ".$prefix."_encyclopedia WHERE eid='$ency[eid]'";
    $result = $db->sql_query($sql);
    $row = $db->sql_fetchrow($result);
    $active = $row['active'];
    if ((!$active) && (!is_admin())) {
        cpg_error("Sorry, This page isn't active...");
    }
    $db->sql_query("UPDATE ".$prefix."_encyclopedia_text SET counter=counter+1 WHERE tid='$tid'");
    $sql = "SELECT title FROM ".$prefix."_encyclopedia WHERE eid='$ency[eid]'";
    $result = $db->sql_query($sql);
    $row = $db->sql_fetchrow($result);
    $enc_title = $row['title'];
    echo "<font class=\"title\">$ency[title]</font><br /><br /><br />";
    $contentpages = explode( "<!--pagebreak-->", $ency['text'] );
    $pageno = count($contentpages);
    if (empty($page)) $page = 1;
    if ($page > $pageno) $page = $pageno;
    $arrayelement = intval($page);
    $arrayelement --;
    if ($pageno > 1) {
        echo _PAGE.": $page/$pageno<br />";
    }
    if (isset($_GET['query'])) {
        $query = htmlprepare($_GET['query']);
        $contentpages[$arrayelement] = eregi_replace($query,"<b>$query</b>",$contentpages[$arrayelement]);
        $fromsearch = "&amp;query=$query";
    } else {
        $fromsearch = "";
    }
    echo "<p align=\"justify\">".nl2br($contentpages[$arrayelement])."</p>";
    if($page >= $pageno) {
        $next_page = "";
    } else {
        $next_pagenumber = $page + 1;
        if ($page != 1) {
        $next_page .= "- ";
        }
        $next_page .= "<a href=\"".getlink("&amp;op=content&amp;tid=$tid&amp;page=$next_pagenumber$fromsearch")."\">"._NEXTPAGE." ($next_pagenumber/$pageno)</a> <a href=\"".getlink("&amp;op=content&amp;tid=$tid&amp;page=$next_pagenumber")."\"><img src=\"images/right.gif\" border=\"0\" alt=\""._NEXTPAGE."\" title=\""._NEXTPAGE."\"></a>";
    }
    if($page <= 1) {
        $previous_page = "";
    } else {
        $previous_pagenumber = $page - 1;
        $previous_page = "<a href=\"".getlink("&amp;op=content&amp;tid=$tid&amp;page=$previous_pagenumber$fromsearch")."\"><img src=\"images/left.gif\" border=\"0\" alt=\""._PREVIOUSPAGE."\" title=\""._PREVIOUSPAGE."\"></a> <a href=\"".getlink("&amp;op=content&amp;tid=$tid&amp;page=$previous_pagenumber$fromsearch")."\">"._PREVIOUSPAGE." ($previous_pagenumber/$pageno)</a>";
    }
    echo "<br /><br /><br /><center>$previous_page $next_page<br /><br />"
        .""._GOBACK."</center><br />";
    if (is_admin()) {
        echo '<p align="right">[ <a href="'.adminlink($module_name.'&amp;mode=encyclopedia_text_edit&amp;tid='.$ency['tid']).'">'._EDIT.'</a> ]</p>';
    }
    echo "<p align=\"right\"><a href=\"".getlink("&amp;op=list_content&amp;eid=$ency[eid]")."\">$enc_title</a></p>";
    if ($page == $pageno) {
        echo "<p align=\"right\">"._COPYRIGHT." &copy; "._BY." $sitename - ($ency[counter] "._READS.")</font></p>";
    }
    CloseTable();
}

function list_themes() {
    global $prefix, $db, $sitename, $multilingual, $module_name;
    require_once('header.php');
    OpenTable();
    echo "<center><font class=\"content\">"._AVAILABLEENCYLIST." $sitename:</center><br /><br />";
    $sql = "SELECT eid, title, description, elanguage FROM ".$prefix."_encyclopedia WHERE active='1'";
    $result = $db->sql_query($sql);
    echo "<blockquote>";
    while ($row = $db->sql_fetchrow($result)) {
    $eid = $row['eid'];
    $title = $row['title'];
    $description = $row['description'];
    $elanguage = $row['elanguage'];
    if ($multilingual == 1) {
        $the_lang = "<img src=\"images/language/flag-$elanguage.png\" hspace=\"3\" border=\"0\" height=\"10\" width=\"20\">";
    } else {
        $the_lang = "";
    }
        if ($subtitle != "") {
        $subtitle = "<br />($description)<br /><br />";
    } else {
            $subtitle = "";
    }
    if (is_admin()) {
        echo "<b>&#8226;</b>&nbsp;$the_lang <a href=\"".getlink("&amp;op=list_content&amp;eid=$eid")."\">$title</a><br />$description<br />[ <a href=\"".adminlink($module_name."&amp;mode=encyclopedia_edit&eid=".$eid)."\">"._EDIT."</a> | <a href=\"".adminlink($module_name."&amp;mode=encyclopedia_change_status&amp;eid=$eid&amp;active=1")."\">"._DEACTIVATE."</a> | <a href=\"".adminlink($module_name."&amp;mode=encyclopedia_delete&amp;eid=".$eid)."\">"._DELETE."</a> ]<br /><br />";
    } else {
        echo "<b>&#8226;</b>&nbsp;$the_lang <a href=\"".getlink("&amp;op=list_content&amp;eid=$eid")."\">$title</a><br /> $description<br /><br />";
    }
    }
    echo "</blockquote>";
    if (is_admin()) {
    $sql = "SELECT eid, title, description, elanguage FROM ".$prefix."_encyclopedia WHERE active='0'";
    $result = $db->sql_query($sql);
    echo "<br /><br /><center><b>"._YOURADMININACTIVELIST."</b></center><br /><br />";
    echo "<blockquote>";
    while ($row = $db->sql_fetchrow($result)) {
        $eid = $row['eid'];
        $title = $row['title'];
        $description = $row['description'];
        $elanguage = $row['elanguage'];
        if ($multilingual == 1) {
        $the_lang = "<img src=\"images/language/flag-$elanguage.png\" hspace=\"3\" border=\"0\" height=\"10\" width=\"20\">";
        } else {
        $the_lang = "";
        }
            if ($subtitle != "") {
            $subtitle = " ($subtitle) ";
        } else {
                $subtitle = " ";
        }
        echo "<b>&#8226;</b>&nbsp;$the_lang <a href=\"".getlink("&amp;op=list_content&amp;eid=$eid")."\">$title</a><br />$description<br />[ <a href=\"".adminlink($module_name."&amp;mode=encyclopedia_edit&amp;eid=".$eid)."\">"._EDIT."</a> | <a href=\"".adminlink($module_name."&amp;mode=encyclopedia_change_status&amp;eid=$eid&amp;active=0")."\">"._ACTIVATE."</a> | <a href=\"".adminlink($module_name."&amp;mode=encyclopedia_delete&amp;eid=".$eid)."\">"._DELETE."</a> ]<br /><br />";
    }
    echo "</blockquote>";
    }
    CloseTable();
}

$op = isset($_GET['op'])?$_GET['op']:"";

switch($op) {

    case "content":
    content();
    break;

    case "list_content":
    list_content();
    break;

    case "terms":
    terms();
    break;

    default:
    list_themes();
    break;

}
