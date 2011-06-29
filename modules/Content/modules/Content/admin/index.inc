<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Content/modules/Content/admin/index.inc,v $
  $Revision: 9.2 $
  $Author: djmaze $
  $Date: 2006/06/24 21:16:53 $

***********************************************************************/
if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin('content')) { die('Access Denied'); }
$pagetitle .= ' '._BC_DELIM.' '._CONTENTMANAGER;
if (!defined('BBCODE_JS_ACTIVE')) {
$modheader .= '<script language="JavaScript" src="includes/javascript/bbcode.js" type="text/javascript"></script>';
   define('BBCODE_JS_ACTIVE', 1);
}
    include_once('includes/nbbcode.php');
function content() {
    global $prefix, $db, $language, $multilingual, $bgcolor2;
    require('header.php');
    GraphicAdmin('_AMENU5');
    OpenTable();
    echo '<table border="0" width="100%"><tr>
    <td bgcolor="'.$bgcolor2.'"><b>'._TITLE.'</b></td><td align="center" bgcolor="'.$bgcolor2.'">
        <b>'._CURRENTSTATUS.'</b>
    </td>
    <td align="center" bgcolor="'.$bgcolor2.'">
        <b>'._CATEGORY.'</b>
    </td>
    <td align="center" bgcolor="'.$bgcolor2.'">
        <b>'._FUNCTIONS.'</b>
    </td></tr>';
    $result = $db->sql_query("SELECT * FROM ".$prefix."_pages ORDER BY pid");
    while($mypages = $db->sql_fetchrow($result)) {
        if ($mypages['cid'] == 0 || $mypages['cid'] == '') {
            $cat_title = _NONE;
        } else {
            $mypages['cid'] = intval($mypages['cid']);
            $res = $db->sql_query("SELECT title FROM ".$prefix."_pages_categories WHERE cid=".$mypages['cid']);
            list($cat_title) = $db->sql_fetchrow($res);
        }
        if ($mypages['active'] == 1) {
            $status = _ACTIVE;
            $status_chng = _DEACTIVATE;
            $active = 1;
        } else {
            $status = "<i>"._INACTIVE."</i>";
            $status_chng = _ACTIVATE;
            $active = 0;
        }
        echo '<tr><td>
        <a href="'.getlink('Content&amp;pid='.$mypages['pid']).'">'.$mypages['title'].'</a>
        </td>
        <td align="center">'.$status.'</td>
        <td align="center">'.$cat_title.'</td>
        <td align="center">
        [ <a href="'.adminlink('&amp;mode=content_edit&amp;pid='.$mypages['pid']).'">'._EDIT.'</a>
        | <a href="'.adminlink('&amp;mode=content_change_status&amp;pid='.$mypages['pid'].'&amp;active='.$active).'">'.$status_chng.'</a> 
        | <a href="'.adminlink('&amp;mode=content_delete&amp;pid='.$mypages['pid']).'">'._DELETE.'</a> ]
        </td></tr>';
    }
    echo "</table>";
    CloseTable();
    echo "<br />";
    OpenTable();
    echo open_form(adminlink("&amp;mode=add_category"), 'add_category', _ADDCATEGORY);
    echo '<b><label for="cat_title">'._TITLE.'</label>:</b><br />
    <input type="text" id="cat_title" name="cat_title" size="50" /><br /><br />
    <b><label for="description">'._DESCRIPTION.'</label>:</b><br />
    <textarea id="description" name="description" rows="10" cols="50"></textarea><br /><br />
    <input type="submit" value="'._ADD.'" />';
    echo close_form();
    CloseTable();
    $rescat = $db->sql_query("SELECT cid, title FROM ".$prefix."_pages_categories ORDER BY title");
    if ($db->sql_numrows($rescat) > 0) {
        echo "<br />";
        OpenTable();
        echo open_form(adminlink("&amp;mode=edit_category"), 'edit_category', _EDITCATEGORY);
    echo '<b><label for="cd">'._CATEGORY.':</label></b>
         <select id="cd" name="cid">';
        while (list($cid, $cat_title) = $db->sql_fetchrow($rescat)) {
            echo '<option value="'.$cid.'">'.$cat_title.'</option>';
        }
        echo '</select>&nbsp;&nbsp;
        <input type="submit" value="'._EDIT.'" />';
        echo close_form();    
        CloseTable();
    }
    echo "<br />";
    OpenTable();
    $res = $db->sql_query("SELECT cid, title FROM ".$prefix."_pages_categories ORDER BY title");
    echo open_form(adminlink("&amp;mode=content_save"), 'content_save', _ADDANEWPAGE);
    echo '<b><label for="title">'._TITLE.'</label>:</b><br />
         <input type="text"  id="title" name="title" size="50" /><br /><br />';
    if ($db->sql_numrows($rescat) > 0) {
        echo '<b><label for="cid">'._CATEGORY.':</label></b>&nbsp;&nbsp;
             <select id="cid" name="cid">
            <option value="0" selected="selected">'._NONE.'</option>';
        while(list($cid, $cat_title) = $db->sql_fetchrow($res)) {
            echo '<option value="'.$cid.'">'.$cat_title.'</option>';
        }
        echo '</select><br /><br />';
    } else {
        echo '<input type="hidden" id="cid" name="cid" value="0" />';
    }
    echo '<b><label for="subtitle">'._CSUBTITLE.':</label></b><br />
        <input type="text" id="subtitle" name="subtitle" size="50" /><br /><br />
        <b><label for="page_header">'._HEADERTEXT.':</label></b><br />';
        echo '<textarea id="page_header" name="page_header" cols="60" rows="10"></textarea><br /><br />
        <b><label for="text">'._PAGETEXT.':</label></b><br />
        <font class="tiny">'._PAGEBREAK.'</font><br />';
        echo '<textarea id="text" name="text" cols="60" rows="40"></textarea><br /><br />
        <b><label for="page_footer">'._FOOTERTEXT.':</label></b><br />';
        echo '<textarea id="page_footer" name="page_footer" cols="60" rows="10"></textarea><br /><br />
        <b><label for="signature">'._SIGNATURE.':</label></b><br />
        <textarea id="signature" name="signature" cols="60" rows="5"></textarea><br /><br />';
    if ($multilingual) {
        echo '<b><label for="language">'._LANGUAGE.': </label></b>'.lang_selectbox($language, 'language').'<br /><br />';
    } else {
        echo '<input type="hidden" name="language" value="'.$language.'" />';
    }
    echo '<b>'._ACTIVATEPAGE.'</b><br />'.yesno_option('active', 1).'<br /><br />
        <input type="submit" value="'._SEND.'" />';
        echo close_form();
    CloseTable();
    require('footer.php');
}

function add_category() {
    global $prefix, $db, $op;
    $cat_title = Fix_Quotes($_POST['cat_title']);
    $description = Fix_Quotes($_POST['description']);
    
    $db->sql_query("INSERT INTO ".$prefix."_pages_categories VALUES (NULL, '$cat_title', '$description')");
    url_redirect(adminlink($op));
}

function edit_category() {
    global $prefix, $db;
    require('header.php');
    GraphicAdmin('_AMENU5');
    OpenTable();
    $cid = intval($_POST['cid']);
    $result = $db->sql_query("SELECT title, description FROM ".$prefix."_pages_categories WHERE cid='$cid'");
    list($title, $description) = $db->sql_fetchrow($result);
    $db->sql_freeresult($result);
    echo open_form(adminlink("&amp;mode=save_category"), 'save_category', _EDITCATEGORY);
    echo '<b>'._TITLE.'</b><br />
        <input type="text" name="cat_title" value="'.$title.'" size="50" /><br /><br />
        <b>'._DESCRIPTION.'</b>:<br />
        <textarea cols="50" rows="10" name="description">'.$description.'</textarea><br /><br />
        <input type="hidden" id="cid" name="cid" value="'.$cid.'" />
        <input type="submit" value="'._SAVECHANGES.'" />&nbsp;&nbsp;
        [ <a href="'.adminlink('&amp;mode=del_content_cat&amp;cid='.$cid).'">'._DELETE.'</a> ]';
        echo close_form();
    CloseTable();
    require('footer.php');
}

function save_category() {
    global $prefix, $db, $op;
    $cid = intval($_POST['cid']);
    $cat_title = Fix_Quotes($_POST['cat_title']);
    $description = Fix_Quotes($_POST['description']);
    
    $db->sql_query("UPDATE ".$prefix."_pages_categories SET title='$cat_title', description='$description' WHERE cid='$cid'");
    url_redirect(adminlink($op));
}

function del_content_cat() {
    global $prefix, $db, $op;
    $cid = intval($_GET['cid']);
    $ok = intval($_GET['ok']);

    if ($ok==1) {
        $db->sql_query("DELETE FROM ".$prefix."_pages_categories WHERE cid='$cid'");
        $result = $db->sql_query("SELECT pid FROM ".$prefix."_pages WHERE cid='$cid'");
        while (list($pid) = $db->sql_fetchrow($result)) {
        $pid = intval($pid);
            $db->sql_query("UPDATE ".$prefix."_pages SET cid='0' WHERE pid='$pid'");
        }
        url_redirect(adminlink($op));
    } else {
        require('header.php');
        GraphicAdmin('_AMENU5');
        $result = $db->sql_query("SELECT title FROM ".$prefix."_pages_categories WHERE cid='$cid'");
        list($title) = $db->sql_fetchrow($result);
        OpenTable();
        echo '<center><b>'._DELCATEGORY.": $title</b><br /><br />"
            ._DELCONTENTCAT.'<br /><br />'
            .'[ <a href="'.adminlink($op).'">'._NO.'</a> | <a href="'.adminlink("&amp;mode=del_content_cat&amp;cid=$cid&amp;ok=1").'">'._YES.'</a> ]</center>';
        CloseTable();
        require('footer.php');
    }
}

function content_edit() {
    global $prefix, $db, $language, $multilingual, $bgcolor2;
    $pid = isset($_POST['pid']) ? intval($_POST['pid']) : (isset($_GET['pid']) ? intval($_GET['pid']) : '');
    $result = $db->sql_query("SELECT * FROM ".$prefix."_pages WHERE pid='$pid'");
    $mypages = $db->sql_fetchrow($result);

// Load the required wysiwyg class
require(CORE_PATH.'wysiwyg/wysiwyg.inc');
// Create as many wysiwyg instances as you need
$page_header = new Wysiwyg('content_save_edit', 'page_header', '90%', '80px', htmlprepare($mypages['page_header']));
$text = new Wysiwyg('content_save_edit', 'text', '90%', '300px', htmlprepare($mypages['text']));
$page_footer = new Wysiwyg('content_save_edit', 'page_footer', '90%', '80px', htmlprepare($mypages['page_footer']));
// Set all the required wysiwyg headers
$page_header->setHeader();

    require('header.php');
    GraphicAdmin('_AMENU5');
    OpenTable();
    echo open_form(adminlink("&amp;mode=content_save_edit"), 'content_save_edit', _EDITPAGECONTENT);
    echo $page_header->getSelect().'<b><label for="title">'._TITLE.':</label></b><br />
        <input type="text"  id="title" name="title" size="50" value="'.htmlprepare($mypages['title']).'" /><br /><br />';
    $res = $db->sql_query("SELECT cid, title FROM ".$prefix."_pages_categories");
    if ($db->sql_numrows($res) > 0) {
        while($cats = $db->sql_fetchrow($res)) {
            $array[$cats['cid']] = $cats['title'];
        }
        $array[0] = _NONE;
        echo '<b><label for="cid">'._CATEGORY.':</label></b>&nbsp;&nbsp;'.select_box('cid', $mypages['cid'], $array)."<br/><br/>";
    } else {
        echo '<input type="hidden" id="cid" name="cid" value="0" />';
    }
    echo '<b><label for="subtitle">'._CSUBTITLE.':</label></b><br />
        <input type="text" id="subtitle" name="subtitle" size="50" value="'.htmlprepare($mypages['subtitle']).'" /><br /><br />
        <b><label for="page_header">'._HEADERTEXT.':</label></b><br />
        '.$page_header->getHTML().'<br /><br />
        <b><label for="text">'._PAGETEXT.':</label></b><br />
        <font class="tiny">'._PAGEBREAK.'</font><br />
        '.$text->getHTML().'<br /><br />
        <b><label for="page_footer">'._FOOTERTEXT.':</label></b><br />
        '.$page_header->getHTML().'<br /><br />
        <b><label for="signature">'._SIGNATURE.':</label></b><br />
        <textarea id="signature" name="signature" cols="60" rows="5">'.htmlprepare($mypages['signature']).'</textarea><br /><br />';
    if ($multilingual) {
        echo '<b><label for="language">'._LANGUAGE.'</label>: </b>'.lang_selectbox($mypages['language'], 'language').'<br /><br />';
    } else {
        echo '<input type="hidden" name="language" value="'.$mypages['language'].'">';
    }
    echo '<b>'._ACTIVATEPAGE.'</b><br />'.yesno_option('active', $mypages['active']).'<br /><br />
        <input type="hidden" name="pid" value="'.$pid.'" />
        <input type="submit" value="'._SAVECHANGES.'" />';
        echo close_form();
    CloseTable();
    require('footer.php');
}

function content_save() {
    global $prefix, $db, $op;
    $cid = intval($_POST['cid']);
    $title = Fix_Quotes($_POST['title']);
    $subtitle = Fix_Quotes($_POST['subtitle']);
    $active = intval($_POST['active']);
    $page_header = Fix_Quotes($_POST['page_header']);
    $text = Fix_Quotes($_POST['text']);
    $page_footer = Fix_Quotes($_POST['page_footer']);
    $signature = Fix_Quotes($_POST['signature']);
    $language = Fix_Quotes($_POST['language']);
    $db->sql_query("INSERT INTO ".$prefix."_pages VALUES (NULL, '$cid', '$title', '$subtitle', '$active', '$page_header', '$text', '$page_footer', '$signature', now(), '0', '$language')");
    url_redirect(adminlink($op));
}

function content_save_edit() {
    global $prefix, $db, $op;
    $cid = intval($_POST['cid']);
    $title = Fix_Quotes($_POST['title']);
    $subtitle = Fix_Quotes($_POST['subtitle']);
    $active = intval($_POST['active']);
    $page_header = Fix_Quotes($_POST['page_header']);
    $text = Fix_Quotes($_POST['text']);
    $page_footer = Fix_Quotes($_POST['page_footer']);
    $signature = Fix_Quotes($_POST['signature']);
    $language = Fix_Quotes($_POST['language']);
    $pid = intval($_POST['pid']);
    
    $pid = intval($pid);
    $db->sql_query("UPDATE ".$prefix."_pages SET cid='$cid', title='$title', subtitle='$subtitle', active='$active', page_header='$page_header', text='$text', page_footer='$page_footer', signature='$signature', language='$language' WHERE pid='$pid'");
    url_redirect(adminlink($op));
}

function content_change_status() {
    global $prefix, $db, $op;
    $pid = (isset($_GET['pid']) ? intval($_GET['pid']) : '');
    $active = (isset($_GET['active']) ? intval($_GET['active']) : '');
    $active = $active == 0 ? 1 : 0;
    
    $db->sql_query("UPDATE ".$prefix."_pages SET active='$active' WHERE pid='$pid'");
    url_redirect(adminlink($op));
}

function content_delete() {
    global $prefix, $db, $op;
    $pid = (isset($_GET['pid']) ? intval($_GET['pid']) : '');
    $ok = (isset($_GET['ok']) ? intval($_GET['ok']) : '');
    
    if ($ok == 1) {
        $db->sql_query("DELETE FROM ".$prefix."_pages WHERE pid='$pid'");
        url_redirect(adminlink($op));
    } else {
        require('header.php');
        GraphicAdmin('_AMENU5');
        $result = $db->sql_query("SELECT title FROM ".$prefix."_pages WHERE pid='$pid'");
        list($title) = $db->sql_fetchrow($result);
        $db->sql_freeresult($result);
        OpenTable();
        echo '<center><b>'._DELCONTENT.': '.$title.'</b><br /><br />
         '._DELCONTWARNING.$title.'?<br /><br />
         [ <a href="'.adminlink($op).'">'._NO.'</a> 
         | <a href="'.adminlink("&amp;mode=content_delete&amp;pid=$pid&amp;ok=1").'">'._YES.'</a> ]</center>';
        CloseTable();
        require('footer.php');
    }
}

$mode = isset($_POST['mode']) ? $_POST['mode'] : (isset($_GET['mode']) ? $_GET['mode'] : '');

switch ($mode) {

    case "content_edit":
    content_edit();
    break;

    case "content_delete":
    content_delete();
    break;

    case "content_save":
    content_save();
    break;

    case "content_save_edit":
    content_save_edit();
    break;

    case "content_change_status":
    content_change_status();
    break;

    case "add_category":
    add_category();
    break;

    case "edit_category":
    edit_category();
    break;

    case "save_category":
    save_category();
    break;

    case "del_content_cat":
    del_content_cat();
    break;
    
    default:
    content();
    break;
}
