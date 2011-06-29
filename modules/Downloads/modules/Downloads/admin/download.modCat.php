<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Downloads/modules/Downloads/admin/download.modCat.php,v $
  $Revision: 9.1 $
  $Author: djmaze $
  $Date: 2005/01/13 04:02:52 $

***********************************************************************/
if (!defined('ADMIN_PAGES')) { exit; }

function DownloadsAddCat() {
    global $downloadsprefix, $db, $op;
    $title = Fix_Quotes($_POST['title']);
    $parentid = intval($_POST['parentid']);
    $result = $db->sql_query("select cid from ".$downloadsprefix."_categories where title='$title' AND parentid='$parentid'");
    if ($db->sql_numrows($result)>0) {
        require_once('header.php');
        GraphicAdmin('_AMENU6');
        cpg_error(_ERRORTHESUBCATEGORY." $title "._ALREADYEXIST);
    } else {
        $db->sql_query("insert into ".$downloadsprefix."_categories values (NULL, '$title', '".Fix_Quotes($_POST['cdescription'])."', '".Fix_Quotes($_POST['ldescription'])."', '$parentid')");
        url_redirect(adminlink($op));
    }
}

function DownloadsModCat() {
    global $downloadsprefix, $db, $op;
    $cat = intval($_REQUEST['cat']);
    include ("header.php");
    GraphicAdmin('_AMENU6');
    OpenTable();
    echo "<center><font class=\"title\"><b>"._WEBDOWNLOADSADMIN."</b></font></center>";
    CloseTable();
    echo "<br>";
    OpenTable();
    echo "<center><font class=\"content\"><b>"._MODCATEGORY."</b></font></center><br><br>";
    $result= $db->sql_query("select title, cdescription, ldescription, parentid from ".$downloadsprefix."_categories where cid='$cat'");
    list($title,$cdescription,$ldescription,$parentid) = $db->sql_fetchrow($result);
    echo '<form action="'.adminlink($op).'" method="post">'
        ._NAME.": <input type=\"text\" name=\"title\" value=\"$title\" size=\"51\" maxlength=\"50\"><br>";
    $result2= $db->sql_query("select cid, title, parentid from ".$downloadsprefix."_categories order by parentid,title");
    echo _CATEGORY.": <select name=\"parentid\" class=\"content\"><option value=\"0\">"._NONE."</option>";
    while(list($cid2, $ctitle2, $parentid2) = $db->sql_fetchrow($result2)) {
        if ($parentid2!=0) $ctitle2=getparent($parentid2,$ctitle2);
        $sel = ($cid2==$parentid) ? $sel = ' selected="selected"' : '';
        echo "<option value=\"$cid2\"$sel>$ctitle2</option>";
    }
    echo "</select><BR>";
    echo _DESCRIPTION.":<br><textarea name=\"cdescription\" cols=\"60\" rows=\"10\">$cdescription</textarea><br>"
        ._EXTENDEDTEXT.":<br><textarea name=\"ldescription\" cols=\"60\" rows=\"10\">$ldescription</textarea><br>"
        ."<input type=\"hidden\" name=\"cid\" value=\"$cat\">"
        ."<input type=\"hidden\" name=\"mode\" value=\"DownloadsModCatS\">"
        ."<table border=\"0\"><tr><td>"
        ."<input type=\"submit\" value=\""._SAVECHANGES."\"></form></td><td>"
        .'<form action="'.adminlink($op).'" method="post">'
        ."<input type=\"hidden\" name=\"cid\" value=\"$cat\">"
        ."<input type=\"hidden\" name=\"mode\" value=\"DownloadsDelCat\">"
        ."<input type=\"submit\" value=\""._DELETE."\"></form></td></tr></table>";
    CloseTable();
    include("footer.php");
}

function DownloadsModCatS() {
    global $downloadsprefix, $db;
    $db->sql_query("update ".$downloadsprefix."_categories set title='".Fix_Quotes($_POST['title'])."', cdescription='".Fix_Quotes($_POST['cdescription'])."', ldescription='".Fix_Quotes($_POST['ldescription'])."', parentid=".intval($_POST['parentid'])." where cid=".intval($_POST['cid']));
    url_redirect(getlink("Downloads&d_op=viewdownload&cid=$cid"));
}

function DownloadsDelCat() {
    global $downloadsprefix, $db, $op;
    $cid = intval($_REQUEST['cid']);
    $sub = intval($_REQUEST['sub']);
    if(isset($_GET['ok'])) {
    if ($sub>0) {
        $db->sql_query("delete from ".$downloadsprefix."_categories where cid='$cid'");
        $db->sql_query("delete from ".$downloadsprefix."_downloads where cid='$cid'");
    } else {
        $db->sql_query("delete from ".$downloadsprefix."_downloads where cid='$cid'");
        $result2 = $db->sql_query("select cid from ".$downloadsprefix."_categories where parentid='$cid'");
        while(list($cid2) = $db->sql_fetchrow($result2)) {
            $db->sql_query("delete from ".$downloadsprefix."_downloads where cid='$cid2'");
        }
        $db->sql_query("delete from ".$downloadsprefix."_categories where parentid='$cid'");
        $db->sql_query("delete from ".$downloadsprefix."_categories where cid='$cid'");
    }
    url_redirect(adminlink($op));
    } else {
    $result = $db->sql_query("select * from ".$downloadsprefix."_categories where parentid='$cid'");
    $nbsubcat = $db->sql_numrows($result);

    $result2 = $db->sql_query("select cid from ".$downloadsprefix."_categories where parentid='$cid'");
    while(list($cid2) = $db->sql_fetchrow($result2)) {
        $result3 = $db->sql_query("select COUNT(*) from ".$downloadsprefix."_downloads where cid='$cid2'");
        $numrows = $db->sql_fetchrow($result3);;
        $nblink += $numrows[0];
    }
    include("header.php");
    GraphicAdmin('_AMENU6');
    OpenTable();
    echo "<br><center><font class=\"option\">";
    echo "<b>"._EZTHEREIS." $nbsubcat "._EZSUBCAT." "._EZATTACHEDTOCAT."</b><br>";
    echo "<b>"._EZTHEREIS." $nblink "._DOWNLOADS." "._EZATTACHEDTOCAT."</b><br>";
    echo "<b>"._DELEZDOWNLOADSCATWARNING."</b><br><br>";
    }
    echo '[ <a href="'.adminlink("&mode=DownloadsDelCat&amp;cid=$cid&amp;sub=$sub&amp;ok=1").'">'._YES.'</a> | <a href="'.adminlink($op).'">'._NO.'</a> ]<br><br>';
    CloseTable();
    include("footer.php");
}
