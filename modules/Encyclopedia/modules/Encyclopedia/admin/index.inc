<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Encyclopedia/modules/Encyclopedia/admin/index.inc,v $
  $Revision: 9.3 $
  $Author: phoenix $
  $Date: 2006/08/16 01:41:58 $

***********************************************************************/
if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin('encyclopedia')) { die("Access Denied"); }
get_lang('Encyclopedia');
$pagetitle .= ' '._BC_DELIM.' '._ENCYCLOPEDIAMANAGER;

function alpha($eid) {
    global $prefix, $db;
    echo '<div align="center">'._ENCYSELECTLETTER.'<br /><br />[ ';
    $result = $db->sql_query("SELECT UPPER(SUBSTRING(title,1,1)) AS abet FROM ".$prefix."_encyclopedia_text WHERE eid='$eid' GROUP BY abet ORDER BY abet");
    while (list($ltr) = $db->sql_fetchrow($result)) {
        $ltr = urlencode($ltr);
        echo ' <a href="'.getlink("&amp;mode=terms&amp;eid=$eid&amp;ltr=".$ltr).'">'.$ltr.'</a> ';
    }
    echo ' ]</div><br /><br />';
//    encysearch($eid);
    echo '<div align="center">'._GOBACK.'</div>';
}

function encyclopedia() {
    global $prefix, $db, $language, $multilingual, $bgcolor2;
    require_once('header.php');
    GraphicAdmin('_AMENU5');
    OpenTable();
    echo "<table border=\"0\" width=\"100%\"><tr>"
        ."<td bgcolor=\"$bgcolor2\"><b>"._TITLE."</b></td><td align=\"center\" bgcolor=\"$bgcolor2\"><b>"._TERMS."</b></td><td align=\"center\" bgcolor=\"$bgcolor2\"><b>"._CURRENTSTATUS."</b></td><td align=\"center\" bgcolor=\"$bgcolor2\"><b>"._FUNCTIONS."</b></td></tr>";
    $result = $db->sql_query("SELECT * FROM ".$prefix."_encyclopedia ORDER BY eid");
    while($ency = $db->sql_fetchrow($result)) {
        $num = $db->sql_numrows($db->sql_query("SELECT * FROM ".$prefix."_encyclopedia_text WHERE eid='$ency[eid]'"));
        if ($ency['active']) {
            $status = _ACTIVE;
            $status_chng = _DEACTIVATE;
            $active = 1;
        } else {
            $status = "<i>"._INACTIVE."</i>";
            $status_chng = _ACTIVATE;
            $active = 0;
        }
        echo "<tr><td><a href=\"".getlink("&amp;mode=list_content&amp;eid=$ency[eid]")."\">$ency[title]</a></td><td align=\"center\">$num</td><td align=\"center\">$status</td><td align=\"center\">[ <a href=\"".adminlink("&amp;mode=encyclopedia_edit&amp;eid=$ency[eid]")."\">"._EDIT."</a> | <a href=\"".adminlink("&amp;mode=encyclopedia_change_status&eid=$ency[eid]&active=$active")."\">$status_chng</a> | <a href=\"".adminlink("&amp;mode=encyclopedia_delete&amp;eid=$ency[eid]")."\">"._DELETE."</a> ]</td></tr>";
    }
    echo "</table>";
    CloseTable();
    echo "<br />";
    OpenTable();
    echo "<center><b>"._ADDNEWENCYCLOPEDIA."</b></center><br /><br />"
        .'<form action="'.adminlink().'" method="post">'
        ."<b>"._TITLE.":</b><br />"
        ."<input type=\"text\" name=\"title\" size=\"50\" /><br /><br />"
        ."<b>"._DESCRIPTION.":</b><br />"
        ."<textarea name=\"description\" cols=\"60\" rows=\"10\"></textarea><br /><br />";
    if ($multilingual) {
        echo '<b>'._LANGUAGE.': </b>'.lang_selectbox($language, 'elanguage').'<br /><br />';
    } else {
        echo "<input type=\"hidden\" name=\"elanguage\" value=\"$language\">";
    }
    echo '<b>'._ACTIVATEPAGE.'</b><br />'.yesno_option('active', 1).'<br /><br />'
        ."<input type=\"hidden\" name=\"mode\" value=\"encyclopedia_save\" />"
        ."<input type=\"submit\" value=\""._SEND."\" />"
        ."</form>";
    CloseTable();
    $result = $db->sql_query("SELECT eid, title FROM ".$prefix."_encyclopedia");
    if ($db->sql_numrows($result) > 0) {
        echo "<br />";
        OpenTable();
        echo "<center><b>"._ADDNEWENCYTERM."</b></center><br /><br />"
            .'<form action="'.adminlink().'" method="post">'
            ."<b>"._TITLE.":</b><br />"
            ."<input type=\"text\" name=\"title\" size=\"50\" /><br /><br />"
            ."<b>"._TERMTEXT.":</b><br />"._PAGEBREAK."<br />"
            ."<textarea name=\"text\" cols=\"60\" rows=\"20\"></textarea><br /><br />";
        if ($multilingual) {
            echo '<b>'._LANGUAGE.': </b>'.lang_selectbox($language, 'elanguage').'<br /><br />';
        } else {
            echo "<input type=\"hidden\" name=\"elanguage\" value=\"$language\" />";
        }
        echo "<b>"._ENCYCLOPEDIA.":</b><br /><select name=\"eid\">";
        while(list($eid, $title) = $db->sql_fetchrow($result)) {
            echo "<option value=\"$eid\" name=\"eid\">$title</option>";
        }
        echo "</select><br /><br />"
            ."<input type=\"hidden\" name=\"mode\" value=\"encyclopedia_text_save\" />"
            ."<input type=\"submit\" value=\""._ADD."\" />"
            ."</form>";
        CloseTable();

    }
    $result = $db->sql_query("SELECT eid, title FROM ".$prefix."_encyclopedia");
    $result2 = $db->sql_query("SELECT eid, title FROM ".$prefix."_encyclopedia");
    if ($db->sql_numrows($result) > 1) {
        echo "<br />";
        OpenTable();
        echo "<center><b>"._MOVETERMS."</b><br /><br />"
            .'<form action="'.adminlink().'" method="post">'
            ._MOVEALLTERMSFROM.": <select name=\"eid\">";
        while(list($eid, $title) = $db->sql_fetchrow($result)) {
            echo "<option name=\"eid\" value=\"$eid\">$title";
        }
        echo "</select> "._TO.": <select name=\"new_eid\">";
        while(list($eid, $title) = $db->sql_fetchrow($result2)) {
            echo "<option name=\"new_eid\" value=\"$eid\">$title";
        }
        echo "</select>&nbsp;&nbsp;"
            ."<input type=\"hidden\" name=\"mode\" value=\"move_terms\" />"
            ."<input type=\"submit\" value=\""._SAVECHANGES."\" />"
            ."</form></center>";
        CloseTable();
    }
}

function encyclopedia_edit() {
    global $prefix, $db, $language, $multilingual, $bgcolor2;
    $eid = intval($_GET['eid']);
    require_once('header.php');
    GraphicAdmin('_AMENU5');
    $result = $db->sql_query("SELECT * FROM ".$prefix."_encyclopedia WHERE eid='$eid'");
    $ency = $db->sql_fetchrow($result);
    OpenTable();
    echo '<div align="center"><b>'._EDITENCYCLOPEDIA.'</b></div><br /><br />'
        .'<form action="'.adminlink().'" method="post">'
        ."<b>"._TITLE.":</b><br />"
        ."<input type=\"text\" name=\"title\" size=\"50\" value=\"$ency[title]\" /><br /><br />"
        ."<b>"._DESCRIPTION.":</b><br />"
        ."<textarea name=\"description\" cols=\"60\" rows=\"10\">$ency[description]</textarea><br /><br />";
    if ($multilingual) {
        echo '<b>'._LANGUAGE.': </b>'.lang_selectbox($language, 'elanguage').'<br /><br />';
    } else {
        echo "<input type=\"hidden\" name=\"elanguage\" value=\"$ency[elanguage]\" />";
    }
    echo '<b>'._ACTIVATEPAGE.'</b><br />'.yesno_option('active', $ency['active']).'<br /><br />'
        ."<input type=\"hidden\" name=\"eid\" value=\"$ency[eid]\" />"
        ."<input type=\"hidden\" name=\"mode\" value=\"encyclopedia_save_edit\" />"
        ."<input type=\"submit\" value=\""._SAVECHANGES."\" />"
        .'</form>';
    CloseTable();
    echo '<br />';
    OpenTable();
    echo '<div align="center"><b>'._ENCYTERMSEDIT.'</b></div><br /><br />';
    alpha($eid);
    CloseTable();
}

function encyclopedia_text_edit() {
    global $prefix, $db, $language, $multilingual, $bgcolor2;
    $tid = intval($_GET['tid']);
    require_once('header.php');
    GraphicAdmin('_AMENU5');
    $tid = intval($tid);
    $result = $db->sql_query("SELECT * FROM ".$prefix."_encyclopedia_text WHERE tid='$tid'");
    $ency = $db->sql_fetchrow($result);
    OpenTable();
    echo '<center><b>'._ENCYTERMSEDIT.'</b></center><br /><br />'
        .'<form action="'.adminlink().'" method="post">'
        .'<b>'._TITLE.':</b><br />'
        .'<input type="text" name="title" size="50" value="'.$ency['title'].'" /><br /><br />'
        .'<b>'._TERMTEXT.':</b><br />'._PAGEBREAK.'<br />'
        .'<textarea name="text" cols="60" rows="20">'.$ency['text'].'</textarea><br /><br />'
        .'<b>'._CHANGETOENCY.':</b><br />'
        .'<select name="eid">';
    $result = $db->sql_query("SELECT eid, title FROM ".$prefix."_encyclopedia");
    while(list($eid, $title) = $db->sql_fetchrow($result)) {
        if ($eid == $ency[eid]) {
            $sel = 'selected="selected"';
        } else {
            $sel = '';
        }
        echo '<option value="'.$eid.'" name="eid" '.$sel.'>'.$title.'</option>';
    }
    echo '</select><br /><br />'
        .'<input type="hidden" name="mode" value="encyclopedia_text_save_edit" />'
        .'<input type="hidden" name="tid" value="'.$tid.'" />'
        .'<input type="submit" value="'._SAVECHANGES.'" /> &nbsp;&nbsp; [ <a href="'.adminlink('&amp;mode=encyclopedia_text_delete&amp;tid='.$tid).'" />'._DELETE.'</a> ]'
        .'</form>';
    CloseTable();
}

function encyclopedia_save() {
    global $prefix, $db;
    $db->sql_query("INSERT INTO ".$prefix."_encyclopedia VALUES(NULL, '".Fix_Quotes($_POST['title'])."', '".Fix_Quotes($_POST['description'])."', '".Fix_Quotes($_POST['elanguage'])."', '".intval($_POST['active'])."')");
    url_redirect(adminlink());
}

function encyclopedia_text_save() {
    global $prefix, $db;
    $db->sql_query("INSERT INTO ".$prefix."_encyclopedia_text VALUES(NULL, '".intval($_POST['eid'])."', '".Fix_Quotes($_POST['title'])."', '".Fix_Quotes($_POST['text'])."', '0')");
    url_redirect(adminlink());
}

function encyclopedia_save_edit() {
    global $prefix, $db;
    $db->sql_query("UPDATE ".$prefix."_encyclopedia SET title='".Fix_Quotes($_POST['title'])."', description='".Fix_Quotes($_POST['description'])."', elanguage='".Fix_Quotes($_POST['elanguage'])."', active='".intval($_POST['active'])."' WHERE eid='".intval($_POST['eid'])."'");
    url_redirect(adminlink());
}

function encyclopedia_text_save_edit() {
    global $prefix, $db;
    $db->sql_query("UPDATE ".$prefix."_encyclopedia_text SET eid='".intval($_POST['eid'])."', title='".Fix_Quotes($_POST['title'])."', text='".Fix_Quotes($_POST['text'])."' WHERE tid='".intval($_POST['tid'])."'");
    url_redirect(adminlink());
}
function encyclopedia_change_status() {
    global $prefix, $db;
    $db->sql_query("UPDATE ".$prefix."_encyclopedia SET active='".(!$_GET['active'])."' WHERE eid='".intval($_GET['eid'])."'");
    url_redirect(adminlink());
}

function encyclopedia_delete() {
    global $prefix, $db;
    $eid = intval($_GET['eid']);
    if (isset($_GET['ok'])) {
        $db->sql_query("DELETE FROM ".$prefix."_encyclopedia WHERE eid='$eid'");
        $db->sql_query("DELETE FROM ".$prefix."_encyclopedia_text WHERE eid='$eid'");
        url_redirect(adminlink());
    } else {
        require_once('header.php');
        GraphicAdmin('_AMENU5');
        $result = $db->sql_query("SELECT title FROM ".$prefix."_encyclopedia WHERE eid='$eid'");
        list($title) = $db->sql_fetchrow($result);
        OpenTable();
        echo "<center><b>"._DELENCYCLOPEDIA.": $title</b><br /><br />"
            .""._DELENCYCONTWARNING."<br /><br />"
            ."[ <a href=\"".adminlink()."\">"._NO."</a> | <a href=\"".adminlink("&amp;mode=encyclopedia_delete&amp;eid=$eid&amp;ok=1")."\">"._YES."</a> ]</center>";
        CloseTable();
    }
}

function encyclopedia_text_delete() {
    global $prefix, $db;
    $tid = intval($_GET['tid']);
    if (isset($_GET['ok'])) {
        $db->sql_query("DELETE FROM ".$prefix."_encyclopedia_text WHERE tid='$tid'");
        url_redirect(adminlink());
    } else {
        require_once('header.php');
        GraphicAdmin('_AMENU5');
        $result = $db->sql_query("SELECT title FROM ".$prefix."_encyclopedia_text WHERE tid='$tid'");
        list($title) = $db->sql_fetchrow($result);
        OpenTable();
        echo "<center><b>"._DELENCYCLOPEDIATEXT.": $title</b><br /><br />"
            ._DELENCYTEXTWARNING."<br /><br />"
            ."[ <a href=\"".adminlink()."\">"._NO."</a> | <a href=\"".adminlink("&amp;mode=encyclopedia_text_delete&amp;tid=$tid&amp;ok=1")."\">"._YES."</a> ]</center>";
        CloseTable();
    }
}

function move_terms() {
    global $prefix, $db;
    $db->sql_query("UPDATE ".$prefix."_encyclopedia_text SET eid='".intval($_POST['new_eid'])."' WHERE eid='".intval($_POST['eid'])."'");
    url_redirect(adminlink());
}

$mode = isset($_POST['mode']) ? $_POST['mode'] : (isset($_GET['mode']) ? $_GET['mode'] : '');
switch ($mode) {

    case "move_terms":
    move_terms();
    break;

    case "encyclopedia_edit":
    encyclopedia_edit();
    break;

    case "encyclopedia_text_edit":
    encyclopedia_text_edit();
    break;

    case "encyclopedia_delete":
    encyclopedia_delete();
    break;

    case "encyclopedia_text_delete":
    encyclopedia_text_delete();
    break;

    case "encyclopedia_save":
    encyclopedia_save();
    break;

    case "encyclopedia_text_save":
    encyclopedia_text_save();
    break;

    case "encyclopedia_save_edit":
    encyclopedia_save_edit();
    break;

    case "encyclopedia_text_save_edit":
    encyclopedia_text_save_edit();
    break;

    case "encyclopedia_change_status":
    encyclopedia_change_status();
    break;
    
    default:
    encyclopedia();
    break;
}
