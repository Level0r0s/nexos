<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Content/modules/Content/index.php,v $
  $Revision: 9.4 $
  $Author: phoenix $
  $Date: 2007/09/20 09:35:10 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

$pagetitle .= _ContentLANG;

if (isset($_GET['pid'])) {
    $pid = intval($_GET['pid']);
    $page = isset($_GET['page']) ? intval($_GET['page']) : 0;
    $mypage = $db->sql_ufetchrow("SELECT * FROM ".$prefix."_pages WHERE pid='$pid'");
    if ($mypage['active'] == 0 && !can_admin('content')) {
        cpg_error("Sorry... This page doesn't exist.");
    }
    if ($mypage['cid'] > 0) {
        $mycat = $db->sql_ufetchrow("SELECT title FROM ".$prefix."_pages_categories WHERE cid=$mypage[cid]");
        $pagetitle .= ' '._BC_DELIM.' '.$mycat['title'];
    }
    $pagetitle .= ' '._BC_DELIM.' '.$mypage['title'];
    require_once('header.php');
    OpenTable();

    $db->sql_query("UPDATE ".$prefix."_pages SET counter=counter+1 WHERE pid='$pid'",false,__FILE__,__LINE__);
    $date = explode(" ", $mypage['date']);
    echo "<span class=\"legend\">$mypage[title]</span><br />";
    if (!empty($mypage['subtitle'])) echo "<span class=\"content\">$mypage[subtitle]</span><hr />";

    $contentpages = explode( "<!--pagebreak-->", $mypage['text'] );
    $pageno = count($contentpages);
    if ( $page=="" || $page < 1 )
        $page = 1;
    if ( $page > $pageno )
        $page = $pageno;
    $arrayelement = (int)$page;
    $arrayelement --;
    if ($pageno > 1) {
        echo _PAGE.": $page/$pageno<br />";
    }
    if ($page == 1 && !empty($mypage['page_header'])) {
        echo "<div>".nl2br($mypage['page_header'])."</div><br />";
    }
    echo "<div>$contentpages[$arrayelement]</div><br /><br />";
    if($page >= $pageno) {
        $next_page = '';
    } else {
        $next_pagenumber = $page + 1;
        if ($page != 1) { $next_page = '- '; }
        $next_page = "<a href=\"".getlink("&amp;pid=$pid&amp;page=$next_pagenumber")."\">"._NEXTPAGE." ($next_pagenumber/$pageno)</a> <a href=\"".getlink("&amp;pid=$pid&amp;page=$next_pagenumber")."\"><img src=\"images/center_l.gif\" border=\"0\" alt=\""._NEXTPAGE."\" title=\""._NEXTPAGE."\" /></a>";
    }
    if ($page == $pageno && !empty($mypage['page_footer'])) {
        echo "<br /><div style=\"text-align: justify;\">".nl2br($mypage['page_footer'])."</div><br /><br />";
    }
    if($page <= 1) {
        $previous_page = '';
    } else {
        $previous_pagenumber = $page - 1;
        $previous_page = "<a href=\"".getlink("&amp;pid=$pid&amp;page=$previous_pagenumber")."\"><img src=\"images/center_r.gif\" border=\"0\" alt=\""._PREVIOUSPAGE."\" title=\""._PREVIOUSPAGE."\" /></a> <a href=\"".getlink("&amp;pid=$pid&amp;page=$previous_pagenumber")."\">"._PREVIOUSPAGE." ($previous_pagenumber/$pageno)</a>";
    }
    if (!empty($previous_page) || !empty($next_page))
        echo "<br /><br /><br /><center>$previous_page $next_page</center>";
}
else if (isset($_GET['cid'])) {
    $cid = intval($_GET['cid']);
    $mycat = $db->sql_ufetchrow("SELECT title FROM ".$prefix."_pages_categories WHERE cid=$cid");
    $pagetitle .= ' '._BC_DELIM.' '.$mycat['title'];

    require_once('header.php');
    OpenTable();
    echo '<center><font class="content">'._LISTOFCONTENT." $sitename:</center><br /><br />";
    $querylang = ($multilingual) ? 'AND (language=\''.$currentlang.'\' OR language= \'\')' : '';
    $sql = "SELECT pid, title, subtitle, language FROM ".$prefix."_pages WHERE active='1' AND cid='$cid' $querylang ORDER BY title";
    $result = $db->sql_query($sql,false,__FILE__,__LINE__);
    echo '<blockquote>';
    while (list($pid, $title, $subtitle, $language) = $db->sql_fetchrow($result)) {
        if ($subtitle != '') {
            $subtitle = " ($subtitle)";
        }
        echo "<b>&#8226;</b>&nbsp;<a href=\"".getlink("&amp;pid=$pid")."\">$title</a> $subtitle";
        if (can_admin('content')) {
            echo " [ <a href=\"".adminlink("&amp;mode=content_edit&amp;pid=$pid")."\">"._EDIT."</a> | <a href=\"".adminlink("&amp;mode=content_change_status&amp;pid=$pid&amp;active=1")."\">"._DEACTIVATE."</a> | <a href=\"".adminlink("&amp;mode=content_delete&amp;pid=$pid")."\">"._DELETE."</a> ]";
        }
        echo '<br />';
    }
    echo '</blockquote>';
    if (can_admin('content')) {
        $sql = "SELECT pid, title, subtitle, language FROM ".$prefix."_pages WHERE active='0' AND cid='$cid' ORDER BY date";
        $result = $db->sql_query($sql,false,__FILE__,__LINE__);
        echo '<br /><br /><center><b>'._YOURADMINLIST.'</b></center><br /><br /><blockquote>';
        while (list($pid, $title, $subtitle, $language) = $db->sql_fetchrow($result)) {
            if ($subtitle != '') {
                $subtitle = " ($subtitle) ";
            }
            echo "<b>&#8226;</b>&nbsp;<a href=\"".getlink("&amp;pid=$pid")."\">$title</a> $subtitle [ <a href=\"".adminlink("&amp;mode=content_edit&amp;pid=$pid")."\">"._EDIT."</a> | <a href=\"".adminlink("&amp;mode=content_change_status&amp;pid=$pid&amp;active=0")."\">"._ACTIVATE."</a> | <a href=\"".adminlink("&amp;mode=content_delete&amp;pid=$pid")."\">"._DELETE."</a> ]<br />";
        }
        echo '</blockquote>';
    }
    echo '<center>'._GOBACK.'</center>';
}
else {
    require_once('header.php');
    OpenTable();
    echo '<center><font class="content">'._LISTOFCONTENT." $sitename:</center><br /><br />";
    $result = $db->sql_query("SELECT * FROM ".$prefix."_pages_categories",false,__FILE__,__LINE__);
    if ($db->sql_numrows($result) > 0) {
        echo "<center>"._CONTENTCATEGORIES."</center><br /><br /><table border=\"1\" align=\"center\" width=\"95%\">";
        while ($row = $db->sql_fetchrow($result)) {
            $description = $row['description'];
            echo "<tr><td valign=\"top\">&nbsp;<a href=\"".getlink("&amp;cid=$row[cid]")."\">$row[title]</a>&nbsp;</td><td align=\"left\">$description</td></tr>";
        }
        echo '</td></tr></table><br /><br />';
    }
    $db->sql_freeresult($result);
    $querylang = ($multilingual) ? 'AND (language=\''.$currentlang.'\' OR language= \'\')' : '';
    $result = $db->sql_query("SELECT * FROM ".$prefix."_pages WHERE cid='0' AND active='1' $querylang ORDER BY title",false,__FILE__,__LINE__);
    if ($db->sql_numrows($result) > 0) {
        echo "<center>"._NONCLASSCONT."</center><br /><br /><blockquote>";
        while (list($pid, $title, $subtitle, $language) = $db->sql_fetchrow($result)) {
            if ($subtitle != '') {
                $subtitle = " ($subtitle)";
            }
            echo "<b>&#8226;</b>&nbsp;<a href=\"".getlink("&amp;pid=$pid")."\">$title</a> $subtitle";
            if (can_admin('content')) {
                echo " [ <a href=\"".adminlink("&amp;mode=content_edit&amp;pid=$pid")."\">"._EDIT."</a> | <a href=\"".adminlink("&amp;mode=content_change_status&amp;pid=$pid&amp;active=1")."\">"._DEACTIVATE."</a> | <a href=\"".adminlink("&amp;mode=content_delete&amp;pid=$pid")."\">"._DELETE."</a> ]";
            }
        }
        echo '<br /></blockquote>';
    }
    $db->sql_freeresult($result);

    if (can_admin('content')) {
        $sql = "SELECT pid, cid, title, subtitle, language FROM ".$prefix."_pages WHERE active='0' ORDER BY date";
        $result = $db->sql_query($sql,false,__FILE__,__LINE__);
        echo '<br /><br /><center><b>'._YOURADMINLIST.'</b></center><br /><br />';
        echo '<blockquote>';
        while (list($pid, $cid, $title, $subtitle, $language) = $db->sql_fetchrow($result)) {
            if ($subtitle != '') {
                $subtitle = " ($subtitle) ";
            }
            echo "<b>&#8226;</b>&nbsp;<a href=\"".getlink("&amp;pid=$pid")."\">$title</a> $subtitle [ <a href=\"".adminlink("&amp;mode=content_edit&amp;pid=$pid")."\">"._EDIT."</a> | <a href=\"".adminlink("&amp;mode=content_change_status&amp;pid=$pid&amp;active=0")."\">"._ACTIVATE."</a> | <a href=\"".adminlink("&amp;mode=content_delete&amp;pid=$pid")."\">"._DELETE."</a> ]<br />";
        }
        echo '</blockquote>';
    }
}
CloseTable();
