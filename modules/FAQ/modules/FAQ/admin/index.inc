<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/FAQ/modules/FAQ/admin/index.inc,v $
  $Revision: 9.5 $
  $Author: phoenix $
  $Date: 2010/11/08 22:59:30 $

***********************************************************************/
if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin('faq')) { die('Access Denied'); }
require_once('includes/nbbcode.php');

global $db, $prefix;
$pagetitle .= ' '._BC_DELIM.' '._FAQ2;

if (isset($_GET['mode'])) {
    if ($_GET['mode'] == 'show') {
        if (isset($_GET['cat'])) {
            FaqCatGo(intval($_GET['cat']));
        }
    } elseif ($_GET['mode'] == 'edit') {
        if (isset($_GET['cat'])) {
            FaqCatEdit(intval($_GET['cat']));
        } elseif (isset($_GET['faq'])) {
            FaqCatGoEdit(intval($_GET['faq']));
        }
    } elseif ($_GET['mode'] == 'delete') {
        if (isset($_GET['cat'])) {
            $deleteCat = intval($_GET['cat']);
            if ($_GET['ok'] == 1) {
                $db->sql_query("DELETE FROM ".$prefix."_faqcategories 
					WHERE id_cat='$deleteCat'");
                $db->sql_query("DELETE FROM ".$prefix."_faqanswer 
					WHERE id_cat='$deleteCat'");
                URL::redirect(URL::admin('FAQ'));
            } else {
                require('header.php');
                GraphicAdmin('_AMENU5');
                OpenTable();
                echo '<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline" align="center">
                <tr><td align="center" class="row1">
                <img src="images/warning.png" alt="'._WARNING.'" title="'._WARNING.'" /><br /><br />'.sprintf(_ERROR_DELETE_CONF, strtolower(_CATEGORY).'&nbsp;'.$deleteCat).'<br /><br />
                [ <a href="'.URL::admin('FAQ').'">'._NO.'</a> | <a href="'.URL::admin('&amp;mode=delete&amp;cat='.$deleteCat.'&amp;ok=1').'">'._YES.'</a> ]
                </td></tr></table>';
                CloseTable();
                require('footer.php');
            }
        } elseif (isset($_GET['faq'])) {
            $deleteFaq = intval($_GET['faq']);
            if (isset($_GET['ok']) && $_GET['ok'] == 1) {
                $db->sql_query("DELETE FROM ".$prefix."_faqanswer 
					WHERE id='$deleteFaq' 
					LIMIT 1");
                URL::redirect(URL::admin('FAQ'));
            } else {
                require('header.php');
                GraphicAdmin('_AMENU5');
                OpenTable();
                echo '<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline" align="center">
                <tr><td align="center" class="row1">
                <img src="images/warning.png" alt="'._WARNING.'" title="'._WARNING.'" /><br /><br />'.sprintf(_ERROR_DELETE_CONF, _QUESTIONS1.'&nbsp;'.$deleteFaq).'<br /><br />
                [ <a href="'.URL::admin('FAQ').'">'._NO.'</a> | <a href="'.URL::admin('&amp;mode=delete&amp;faq='.$deleteFaq.'&amp;ok=1').'">'._YES.'</a> ]
                </td></tr></table>';
                CloseTable();
                require('footer.php');
            }
        }
    }
} elseif (isset($_POST['addCategory'])) {
    $addCat_name = Fix_Quotes($_POST['categories']);
    $addCat_lang = Fix_Quotes($_POST['flanguage']);
    $db->sql_query("INSERT INTO ".$prefix."_faqcategories 
		(id_cat, categories, flanguage) 
		VALUES 
		(DEFAULT, '$addCat_name', '$addCat_lang')");
    URL::redirect(URL::admin('FAQ'));
} elseif (isset($_POST['addFAQ'])) {
    $addFaq_cat = intval($_POST['cat_id']);
    $addFaq_question = Fix_Quotes($_POST['question']);
    $addFaq_answer = Fix_Quotes($_POST['answer']);
    $db->sql_query("INSERT INTO ".$prefix."_faqanswer 
		(id, id_cat, question, answer) 
		VALUES 
		(DEFAULT, '$addFaq_cat', '$addFaq_question', '".encode_bbcode($addFaq_answer)."')");
    URL::redirect(URL::admin('&mode=show&cat='.$addFaq_cat));
} elseif (isset($_POST['editCat'])) {
    $editCat_cat = intval($_POST['cat_id']);
    $editCat_name = Fix_Quotes($_POST['categories']);
    $editCat_lang = Fix_Quotes($_POST['flanguage']);
    $db->sql_query("UPDATE ".$prefix."_faqcategories 
		SET categories='$editCat_name', flanguage='$editCat_lang' 
		WHERE id_cat='$editCat_cat'");
    URL::redirect(URL::admin('FAQ'));
} elseif (isset($_POST['editFAQ'])) {
    $editFaq_id = intval($_POST['id']);
    $editFaq_cat = intval($_POST['cat_id']);
    $editFaq_question = Fix_Quotes($_POST['question']);
    $editFaq_answer = Fix_Quotes($_POST['answer']);
    $db->sql_query("UPDATE ".$prefix."_faqanswer 
		SET question='$editFaq_question', answer='".encode_bbcode($editFaq_answer)."' 
		WHERE id='$editFaq_id'");
    URL::redirect(URL::admin('&mode=show&cat='.$editFaq_cat));
} else {
    FaqAdmin();
}

function FaqAdmin() {
    global $bgcolor2, $bgcolor3, $prefix, $db, $language, $multilingual, $currentlang;
    require('header.php');
    GraphicAdmin('_AMENU5');
    OpenTable();
    echo '<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline" align="center">
    <tr><td align="center" class="catleft" colspan="4"><b><span class="gen">'._FAQ2.'</span></b></td></tr>
    <tr><td align="center" class="row1"><b>'._ID.'</b></td>
    <td align="center" class="row1"><b>'._CATEGORIES.'</b></td>
    <td align="center" class="row1"><b>'._LANGUAGE.'</b></td>
    <td align="center" class="row1"><b>'._FUNCTIONS.'</b></td></tr>';
    $result = $db->sql_query("SELECT id_cat, categories, flanguage FROM ".$prefix."_faqcategories ORDER BY id_cat");
    $bgcolor = $bgcolor3;
    while (list($id_cat, $categories, $flanguage) = $db->sql_fetchrow($result)) {
        $bgcolor = ($bgcolor == '') ? ' bgcolor="'.$bgcolor3.'"' : '';
        if ($flanguage == '') { $flanguage = _ALL; }
        echo '<tr'.$bgcolor.'>
        <td align="center">'.$id_cat.'</td>
        <td align="center">'.$categories.'</td>
        <td align="center">'.$flanguage.'</td>
        <td align="center"><a href="'.URL::admin('&amp;mode=show&amp;cat='.$id_cat).'">'._CONTENT.'</a> <b>::</b> <a href="'.URL::admin('&amp;mode=edit&amp;cat='.$id_cat).'">'._EDIT.'</a> <b>::</b> <a href="'.URL::admin('&amp;mode=delete&amp;cat='.$id_cat).'">'._DELETE."</a></td></tr>\n";
    }
    echo '</table><br />
    <table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline" align="center">
    <tr><td align="center" class="catleft" colspan="2"><b><span class="gen">'._ADDCATEGORY.'</span></b></td></tr>
    <form action="'.URL::admin('FAQ').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    <tr><td class="row1"><span class="gen">'._CATEGORY.'&nbsp;'._NAME.'</span></td>
    <td class="row2"><input type="text" name="categories" size="45" maxlength="255" /></td></tr>';
    if ($multilingual) {
        echo '<tr><td class="row1"><span class="gen">'._LANGUAGE.'</span></td>
        <td class="row2">'.lang_selectbox($currentlang, 'flanguage').'</td></tr>';
    } else {
        echo '<input type="hidden" name="flanguage" value="'.$language.'" />';
    }
    print '<tr><td class="catbottom" colspan="2" align="center" style="height:28px;">
    <input type="submit" name="addCategory" value="'._ADD.'&nbsp;'._CATEGORY.'" class="mainoption" /></td></tr></form></table>';
    CloseTable();
    require('footer.php');
}

function FaqCatGo($id_cat) {
    global $bgcolor2, $prefix, $db;
    require ('header.php');
    GraphicAdmin('_AMENU5');
    OpenTable();
    echo '<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline" align="center">
    <tr><td align="center" class="catleft"><b><span class="gen">'._QUESTIONS.'</span></b></td></tr>
    <tr><td align="center" class="row1">Sort: '.
    (((isset($_GET['sort']) && $_GET['sort'] == 'asc') || !isset($_GET['sort'])) ? '<b>Ascending</b>' : '<a href="'.URL::admin('&mode=show&cat='.$id_cat.'&sort=asc').'">Ascending</a>').'
     / '.
    ((isset($_GET['sort']) && $_GET['sort'] == 'desc') ? '<b>Descending</b>' : '<a href="'.URL::admin('&mode=show&cat='.$id_cat.'&sort=desc').'">Descending</a>').'
    </td></tr>';
    $querySort = 'ORDER BY id';
    if (isset($_GET['sort']) && $_GET['sort'] == 'asc') {
        $querySort = 'ORDER BY question ASC';
    } elseif (isset($_GET['sort']) && $_GET['sort'] == 'desc') {
        $querySort = 'ORDER BY question DESC';
    } else {
        $querySort = 'ORDER BY question ASC';
    }
    $result = $db->sql_query('SELECT id, question, answer FROM '.$prefix.'_faqanswer 
		WHERE id_cat='.$id_cat.' '.$querySort);
    while (list($id, $question, $answer) = $db->sql_fetchrow($result)) {
        echo '<tr><td align="left" class="row1"><b><span class="gen">'.$question.'</span></b><br /><br />
        <span class="gen">'.decode_bbcode($answer, 1).'</span><br /><br />
        <a href="'.URL::admin('&amp;mode=edit&amp;faq='.$id).'">' ._EDIT. '</a> | <a href="'.URL::admin('&amp;mode=delete&amp;faq='.$id).'">'._DELETE.'</a></td></tr>
        <tr><td class="spaceRow" style="height:1px;"><img src="images/spacer.gif" alt="" width="1" height="1" /></td></tr>';
    }
    $db->sql_freeresult($result);
    echo '</table><br />
    <table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline" align="center">
    <tr><td align="center" class="catleft" colspan="2"><b><span class="gen">'._ADDQUESTION.'</span></b></td></tr>
    <form name="add_faq" action="'.URL::admin('FAQ').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    <tr><td class="row1"><span class="gen">'._QUESTION.'</span></td>
    <td class="row2"><input type="text" name="question" size="55" maxlength="255" /></td></tr>
    <tr><td class="row1"><span class="gen">'._ANSWER.'</span></td>
    <td class="row2">'.bbcode_table('answer', 'add_faq', 1).'<textarea name="answer" cols="63" rows="15"></textarea></td></tr>
    <tr><td class="catbottom" colspan="2" align="center" style="height:28px;">
    <input type="hidden" name="cat_id" value="'.$id_cat.'" />
    <input type="submit" name="addFAQ" value="'._ADD.'&nbsp;'._QUESTION.'" class="mainoption" /></td></tr></form></table>';
    CloseTable();
    require('footer.php');
}

function FaqCatEdit($id_cat) {
    global $db, $multilingual, $language, $prefix, $pagetitle;
    $pagetitle .= ' '._BC_DELIM.' '._EDITCATEGORY;
    require('header.php');
    GraphicAdmin('_AMENU5');
    OpenTable();
    list($categories, $flanguage) = $db->sql_ufetchrow("SELECT categories, flanguage FROM ".$prefix."_faqcategories 
		WHERE id_cat='$id_cat'", SQL_NUM, __FILE__, __LINE__);
    echo '<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline" align="center">
    <tr><td align="center" class="catleft" colspan="2"><b><span class="gen">'._EDITCATEGORY.'</span></b></td></tr>
    <form action="'.URL::admin('FAQ').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    <tr><td class="row1"><span class="gen">'._CATEGORY.'&nbsp;'._NAME.'</span></td>
    <td class="row2"><input type="text" name="categories" size="45" maxlength="255" value="'.htmlprepare($categories).'" /></td></tr>';
    if ($multilingual) {
        echo '<tr><td class="row1"><span class="gen">'._LANGUAGE.'</span></td>
        <td class="row2">'.lang_selectbox($flanguage, 'flanguage').'</td></tr>';
    } else {
        echo '<input type="hidden" name="flanguage" value="'.$language.'" />';
    }
    print '<tr><td class="catbottom" colspan="2" align="center" style="height:28px;">
    <input type="hidden" name="cat_id" value="'.$id_cat.'" />
    <input type="submit" name="editCat" value="'._SAVECHANGES.'" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="'._RESET.'" name="reset" class="liteoption" /></td></tr></form></table>';
    CloseTable();
    require('footer.php');
}

function FaqCatGoEdit($id) {
    global $bgcolor2, $prefix, $db, $pagetitle;
    $pagetitle .= ' '._BC_DELIM.' '._EDITQUESTIONS;
    require('header.php');
    GraphicAdmin('_AMENU5');
    OpenTable();
    list($category, $question, $answer) = $db->sql_ufetchrow("SELECT id_cat, question, answer FROM ".$prefix."_faqanswer 
		WHERE id='$id'", SQL_NUM, __FILE__, __LINE__);
    echo '<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline" align="center">
    <tr><td align="center" class="catleft" colspan="2"><b><span class="gen">'._EDITQUESTIONS.'</span></b></td></tr>
    <form action="'.URL::admin('FAQ').'" method="post" name="edit_faq" enctype="multipart/form-data" accept-charset="utf-8">
    <tr><td class="row1"><span class="gen">'._QUESTION.'</span></td>
    <td class="row2"><input type="text" name="question" size="55" maxlength="255" value="'.htmlprepare($question).'" /></td></tr>
    <tr><td class="row1"><span class="gen">'._ANSWER.'</span></td>
    <td class="row2">'.bbcode_table('answer', 'edit_faq', 1).'<textarea name="answer" cols="63" rows="15">'.$answer.'</textarea></td></tr>
    <tr><td class="catbottom" colspan="2" align="center" style="height:28px;">
    <input type="hidden" name="id" value="'.$id.'" />
    <input type="hidden" name="cat_id" vaue="'.$category.'" />
    <input type="submit" name="editFAQ" value="'._SAVECHANGES.'" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="'._RESET.'" name="reset" class="liteoption" /></td></tr></form></table>';
    CloseTable();
    require('footer.php');
}
