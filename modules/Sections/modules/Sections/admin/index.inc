<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Sections/modules/Sections/admin/index.inc,v $
  $Revision: 9.2 $
  $Author: phoenix $
  $Date: 2007/09/20 09:36:38 $

***********************************************************************/
if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin('sections')) { die('Access Denied'); }
/*********************************************************/
/* Sections Manager Functions                            */
/*********************************************************/

function sections() {
    global $prefix, $db, $language, $multilingual;
    include("header.php");
    GraphicAdmin('_AMENU5');
    OpenTable();
    echo "<center><font class=\"title\"><b>"._SECTIONSADMIN."</b></font></center>";
    CloseTable();
    $result = $db->sql_query("SELECT secid, secname FROM ".$prefix."_sections ORDER BY secid",false,__FILE__,__LINE__);
    if ($db->sql_numrows($result) > 0) {
    echo "<br>";
    OpenTable();
    echo "<center><b>"._ACTIVESECTIONS."</b><br><font class=\"content\">"._CLICK2EDITSEC."</font></center><br>"
        ."<table border=0 width=100% align=center cellpadding=1 align=\"center\"><tr><td align=center>";
    while(list($secid, $secname) = $db->sql_fetchrow($result)) {
        $secid = intval($secid);
        echo "<b>&#8226;</b>&nbsp;&nbsp;<a href=\"".adminlink("&amp;mode=sectionedit&amp;secid=$secid")."\">$secname</a><br />";
    }
    echo "</td></tr></table>";
    CloseTable();
    echo "<br>";
    OpenTable();
    echo "<center><font class=\"option\"><b>"._ADDSECARTICLE."</b></font></center><br>"
        .'<form action="'.adminlink().'" method="post">'
        .'<b>'._TITLE.'</b><br>'
        .'<input type="text" name="title" size="60"><br><br>'
        .'<b>'._SELSECTION.':</b><br>';
    $result = $db->sql_query("SELECT secid, secname FROM ".$prefix."_sections ORDER BY secid",false,__FILE__,__LINE__);
	while(list($secid, $secname) = $db->sql_fetchrow($result)) {
        $secid = intval($secid);
        echo "<input type=\"radio\" name=\"secid\" value=\"$secid\"> $secname<br>";
    }
    echo "<font class=\"content\">"._DONTSELECT."</font><br><br>";
    if ($multilingual) {
        echo '<b>'._LANGUAGE.': </b>'.lang_selectbox($language, 'slanguage').'<br /><br />';
    } else {
        echo "<input type=\"hidden\" name=\"slanguage\" value=\"$language\">";
    }
    echo "<b>"._CONTENT."</b><br>"
        ."<textarea name=\"content\" cols=\"60\" rows=\"10\"></textarea><br>"
        ."<font class=\"content\">"._PAGEBREAK."</font><br><br>"
        ."<input type=\"hidden\" name=\"mode\" value=\"secarticleadd\">"
        ."<input type=\"submit\" value=\""._ADDARTICLE."\">"
        ."</form>";
    CloseTable();
    echo "<br>";
    OpenTable();
    echo "<center><font class=\"option\"><b>"._LAST." 20 "._ARTICLES."</b></font></center><br>"
        ."<ul>";
    $result = $db->sql_query("SELECT artid, secid, title, content, slanguage FROM ".$prefix."_seccont ORDER BY artid DESC LIMIT 0,20",false,__FILE__,__LINE__);
    while(list($artid, $secid, $title, $content, $slanguage) = $db->sql_fetchrow($result)) {
        $artid = intval($artid);
        $secid = intval($secid);
        $result2 = $db->sql_query("SELECT secid, secname FROM ".$prefix."_sections WHERE secid='$secid'",false,__FILE__,__LINE__);
        list($secid, $secname) = $db->sql_fetchrow($result2);
        $secid = intval($secid);
        echo "<li>$title - ($slanguage) - ($secname) [ <a href=\"".adminlink("&amp;mode=secartedit&amp;artid=$artid")."\">"._EDIT."</a> | <a href=\"".adminlink("&amp;mode=secartdelete&amp;artid=$artid&amp;ok=0")."\">"._DELETE."</a> ]";
    }
    echo "</ul>"
        .'<form action="'.adminlink().'" method="post">'
        ._EDITARTID.': <input type="text" name="artid" size="10">&nbsp;&nbsp;'
        ."<input type=\"hidden\" name=\"mode\" value=\"secartedit\">"
        ."<input type=\"submit\" value=\""._OK."\">"
        ."</form>";
    CloseTable();
    }
    echo "<br>";
    OpenTable();
    echo "<center><font class=\"option\"><b>"._ADDSECTION."</b></font></center><br>"
    .'<form action="'.adminlink().'" method="post"><br>'
    ."<b>"._SECTIONNAME.":</b><br>"
    ."<input type=\"text\" name=\"secname\" size=\"40\" maxlength=\"40\"><br><br>"
    ."<b>"._SECTIONIMG."</b><br><font class=\"tiny\">"._SECIMGEXAMPLE."</font><br>"
    ."<input type=\"text\" name=\"image\" size=\"40\" maxlength=\"50\"><br><br>"
    ."<input type=\"hidden\" name=\"mode\" value=\"sectionmake\">"
    ."<INPUT type=\"submit\" value=\""._ADDSECTIONBUT."\">"
    ."</form>";
    CloseTable();
    include("footer.php");
}

function secarticleadd($secid, $title, $content, $slanguage) {
    global $prefix, $db;
    $title = Fix_Quotes($title);
    $content = Fix_Quotes($content);
    $secid = intval($secid);
    $db->sql_query("INSERT INTO ".$prefix."_seccont VALUES (NULL,'$secid','$title','$content','0','$slanguage')",false,__FILE__,__LINE__);
    url_redirect(adminlink('Sections'));
}

function secartedit($artid) {
    global $prefix, $db, $multilingual;
    include("header.php");
    GraphicAdmin('_AMENU5');
    OpenTable();
    echo "<center><font class=\"title\"><b>"._SECTIONSADMIN."</b></font></center>";
    CloseTable();
    echo "<br>";
        $artid = intval($artid);
    $result = $db->sql_query("SELECT artid, secid, title, content, slanguage FROM ".$prefix."_seccont WHERE artid='$artid'",false,__FILE__,__LINE__);
    list($artid, $secid, $title, $content, $slanguage) = $db->sql_fetchrow($result);
        $artid = intval($artid);
        $secid = intval($secid);
    OpenTable();
    echo "<center><font class=\"option\"><b>"._EDITARTICLE."</b></font></center><br>"
    .'<form action="'.adminlink().'" method="post">'
    ."<b>"._TITLE."</b><br>"
    ."<input type=\"text\" name=\"title\" size=\"60\" value=\"$title\"><br><br>"
    ."<b>"._SELSECTION.":</b><br>";
    $result2 = $db->sql_query("SELECT secid, secname FROM ".$prefix."_sections ORDER BY secname",false,__FILE__,__LINE__);
    while(list($secid2, $secname) = $db->sql_fetchrow($result2)) {
        $secid2 = intval($secid2);
        if ($secid2==$secid) {
        $che = "checked";
        }
        echo "<input type=\"radio\" name=\"secid\" value=\"$secid2\" $che>$secname<br>";
        $che = "";
    }
    if ($multilingual) {
        echo '<br /><b>'._LANGUAGE.': </b>'.lang_selectbox($slanguage, 'slanguage').'<br />';
    } else {
    echo "<input type=\"hidden\" name=\"slanguage\" value=\"$language\">";
    }
    echo "<br><b>"._CONTENT."</b><br>"
    ."<textarea name=\"content\" cols=\"60\" rows=\"10\">$content</textarea><br><br>"
    ."<input type=\"hidden\" name=\"artid\" value=\"$artid\">"
    ."<input type=\"hidden\" name=\"mode\" value=\"secartchange\">"
    ."<input type=\"submit\" value=\""._SAVECHANGES."\"> [ <a href=\"".adminlink("&amp;mode=secartdelete&amp;artid=$artid")."\">"._DELETE."</a> ]"
    ."</form>";
    CloseTable();
    include("footer.php");
}

function sectionmake($secname, $image) {
    global $prefix, $db;
    $secname = Fix_Quotes($secname);
    $image = Fix_Quotes($image);
    $db->sql_query("INSERT INTO ".$prefix."_sections VALUES (NULL,'$secname', '$image')",false,__FILE__,__LINE__);
    url_redirect(adminlink("Sections"));
}

function sectionedit($secid) {
    global $prefix, $db;
    include("header.php");
    GraphicAdmin('_AMENU5');
    OpenTable();
    echo "<center><font class=\"title\"><b>"._SECTIONSADMIN."</b></font></center>";
    CloseTable();
    echo "<br>";
    $secid = intval($secid);
    $result = $db->sql_query("SELECT secid, secname, image FROM ".$prefix."_sections WHERE secid=$secid",false,__FILE__,__LINE__);
    list($secid, $secname, $image) = $db->sql_fetchrow($result);
    $secid = intval($secid);
    $result2 = $db->sql_query("SELECT artid FROM ".$prefix."_seccont WHERE secid=$secid",false,__FILE__,__LINE__);
    $number = $db->sql_numrows($result2);
    OpenTable();
    echo "<img src=\"images/sections/$image\" border=\"0\" alt=\"\"><br><br>"
    ."<font class=\"option\"><b>"._EDITSECTION.": $secname</b></font>"
    ."<br>("._SECTIONHAS." $number "._ARTICLESATTACH.")"
    ."<br><br>"
    .'<form action="'.adminlink().'" method="post">'
    ."<b>"._SECTIONNAME."</b><br><font class=\"tiny\">"._40CHARSMAX."</font><br>"
    ."<input type=\"text\" name=\"secname\" size=\"40\" maxlength=\"40\" value=\"$secname\"><br><br>"
    ."<b>"._SECTIONIMG."</b><br><font class=\"tiny\">"._SECIMGEXAMPLE."</font><br>"
    ."<input type=\"text\" name=\"image\" size=\"40\" maxlength=\"50\" value=\"$image\"><br><br>"
    ."<input type=\"hidden\" name=\"secid\" value=\"$secid\">"
    ."<input type=\"hidden\" name=\"mode\" value=\"sectionchange\">"
    ."<input type=\"submit\" value=\""._SAVECHANGES."\"> [ <a href=\"".adminlink("&amp;mode=sectiondelete&amp;secid=$secid")."\">"._DELETE."</a> ]"
    ."</form>";
    CloseTable();
    include("footer.php");
}

function sectionchange($secid, $secname, $image) {
    global $prefix, $db;
    $secname = Fix_Quotes($secname);
    $image = Fix_Quotes($image);
    $secid = intval($secid);
    $db->sql_query("UPDATE ".$prefix."_sections SET secname='$secname', image='$image' WHERE secid=$secid",false,__FILE__,__LINE__);
    url_redirect(adminlink("Sections"));
}

function secartchange($artid, $secid, $title, $content, $slanguage) {
    global $prefix, $db;
    $title = Fix_Quotes($title);
    $content = Fix_Quotes($content);
    $secid = intval($secid);
    $db->sql_query("UPDATE ".$prefix."_seccont SET secid='$secid', title='$title', content='$content', slanguage='$slanguage' WHERE artid=$artid",false,__FILE__,__LINE__);
    url_redirect(adminlink("Sections"));
}

function sectiondelete($secid, $ok=0) {
    global $prefix, $db;
    $secid = intval($secid);
    if ($ok==1) {
        $db->sql_query("DELETE FROM ".$prefix."_seccont WHERE secid='$secid'",false,__FILE__,__LINE__);
        $db->sql_query("DELETE FROM ".$prefix."_sections WHERE secid='$secid'",false,__FILE__,__LINE__);
        url_redirect(adminlink("Sections"));
    } else {
        include("header.php");
        GraphicAdmin('_AMENU5');
    OpenTable();
    echo "<center><font class=\"title\"><b>"._SECTIONSADMIN."</b></font></center>";
    CloseTable();
    echo "<br>";
    $result= $db->sql_query("SELECT secname FROM ".$prefix."_sections WHERE secid=$secid",false,__FILE__,__LINE__);
    list($secname) = $db->sql_fetchrow($result);
    OpenTable();
    echo "<center><b>"._DELSECTION.": $secname</b><br><br>"
        .""._DELSECWARNING." $secname?<br>"
        .""._DELSECWARNING1."<br><br>"
        ."[ <a href=\"".adminlink("Sections")."\">"._NO."</a> | <a href=\"".adminlink("&amp;mode=sectiondelete&amp;secid=$secid&amp;ok=1")."\">"._YES."</a> ]</center>";
    CloseTable();
        include("footer.php");
    }
}

function secartdelete($artid, $ok=0) {
    global $prefix, $db;
    $artid = intval($artid);
    if ($ok==1) {
        $db->sql_query("DELETE FROM ".$prefix."_seccont WHERE artid='$artid'",false,__FILE__,__LINE__);
        url_redirect(adminlink("Sections"));
    } else {
        include("header.php");
        GraphicAdmin('_AMENU5');
    OpenTable();
    echo "<center><font class=\"title\"><b>"._SECTIONSADMIN."</b></font></center>";
    CloseTable();
    echo "<br>";
    $result = $db->sql_query("SELECT title FROM ".$prefix."_seccont WHERE artid=$artid",false,__FILE__,__LINE__);
    list($title) = $db->sql_fetchrow($result);
    OpenTable();
    echo "<center><b>"._DELARTICLE.": $title</b><br><br>"
        ._DELARTWARNING."<br><br>"
        ."[ <a href=\"".adminlink("Sections")."\">"._NO."</a> | <a href=\"".adminlink("&amp;mode=secartdelete&amp;artid=$artid&amp;ok=1")."\">"._YES."</a> ]</center>";
        CloseTable();
        include("footer.php");
    }
}

$artid = (isset($_POST['artid']) ? intval($_POST['artid']) : intval($_GET['artid']));
$secid = (isset($_POST['secid']) ? intval($_POST['secid']) : intval($_GET['secid']));
$ok = (isset($_POST['ok']) ? intval($_POST['ok']) : intval($_GET['ok']));
$mode = (isset($_GET['mode']) ? $_GET['mode'] : $_POST['mode']);

switch ($mode) {

    case "sectionedit":
    sectionedit($secid);
    break;

    case "sectionmake":
    sectionmake($_POST['secname'], $_POST['image']);
    break;

    case "sectiondelete":
    sectiondelete($secid, $ok);
    break;

    case "sectionchange":
    sectionchange($secid, $_POST['secname'], $_POST['image']);
    break;

    case "secarticleadd":
    secarticleadd($secid, $_POST['title'], $_POST['content'], $_POST['slanguage']);
    break;

    case "secartedit":
    secartedit($artid);
    break;

    case "secartchange":
    secartchange($artid, $secid, $_POST['title'], $_POST['content'], $_POST['slanguage']);
    break;

    case "secartdelete":
    secartdelete($artid, $ok);
    break;

    default:
    sections();
    break;


}

?>
