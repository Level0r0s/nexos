<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/FAQ/modules/FAQ/search.php,v $
  $Revision: 9.4 $
  $Author: phoenix $
  $Date: 2010/11/08 22:54:27 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

$pagetitle .= _FAQ2;

if (isset($_POST['query']) || isset($_GET['query']) || isset($_GET['cat'])) {
	$search_terms = isset($_POST['query']) ? Fix_Quotes($_POST['query'], 1) : Fix_Quotes($_GET['query'], 1);
	$search_cat = isset($_POST['cat']) ? intval($_POST['cat']) : intval($_GET['cat']);
	if ($search_terms == '' && $search_cat == 0) { $search_cat = 1; }
	if (strlen($search_terms) < 3 && !isset($_GET['cat'])) { cpg_error(sprintf(_ERROR_NOT_SET, _KEYWORDS)); }
	searchResults($search_cat, $search_terms);
} else {
	die('You do not have permission to access this file');
}

function searchResults($category='', $terms='') {
	global $db, $prefix, $bgcolor2, $bgcolor3, $multilingual, $currentlang;

	$search_cat = ($category == 0) ? '' : "categories='$category' AND";
	$search_id = ($category == 0) ? '' : "id_cat='$category' AND";

	require('header.php');
	OpenTable();

	if ($category == 0) {
		$category_name = _ALLCATS;
	} else {
		list($category_name) = $db->sql_ufetchrow("SELECT categories FROM ".$prefix."_faqcategories WHERE id_cat='$category'");
	}

	echo '<a href="'.URL::index().'">'._MAIN.'</a> | <b>'._SEARCH.'</b><br /><br />
	<form action="'.URL::index('&amp;file=search').'" method="post" enctype="multipart/form-data" accept-charset="utf-8" style="margin:0;">
	<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr><td align="center" class="catleft" colspan="2"><b><span class="gen">'._SEARCHRESULTS.'</span></b></td></tr>
	<tr><td class="row1"><span class="gen">'._KEYWORDS.'</span></td>
	<td class="row2"><input type="text" name="query" value="'.htmlprepare($terms).'" size="35" maxlength="255" /></td></tr>
	<tr><td class="row1"><span class="gen">'._CATEGORY.'</span></td>
	<td class="row2"><select name="cat">
	<option value="0">'._ALLCATS.'</option>';
	$querylang = ($multilingual) ? 'WHERE (flanguage=\''.$currentlang.'\' OR flanguage= \'\') ' : '';
	$result = $db->sql_query("SELECT id_cat, categories FROM ".$prefix."_faqcategories 
		$querylang");
	while (list($cat_id, $cat_name) = $db->sql_fetchrow($result)) {
		$sel = '';
		if ($cat_id == $category) { $sel = ' selected="selected"'; }
		echo "<option value=\"$cat_id\"$sel>$cat_name</option>\n";
	}
	$db->sql_freeresult($result);
	echo '</select></td></tr>
	<tr><td class="catbottom" colspan="2" align="center" style="height:28px;">
	<input type="submit" value="'._SEARCH.'" class="mainoption" />
	</td></tr></table></form><br />
	<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr><td align="center" class="catleft" colspan="2"><b><span class="gen">'._CATEGORIES.'</span></b></td></tr><tr><td class="row1" colspan="2">';
	$result = $db->sql_query("SELECT id_cat, categories FROM ".$prefix."_faqcategories 
		WHERE $search_cat categories LIKE '%$terms%'");
	$a = 1;
	if ($db->sql_numrows($result) == 1) {
		define('SEARCH_RESULTS', _RESULTS1);
	} else {
		define('SEARCH_RESULTS', _RESULTS2);
	}
	echo _SEARCHFOUND.' <b>'.$db->sql_numrows($result).'</b> '.SEARCH_RESULTS.'</td></tr>';
	while (list($cat_id, $cat_title) = $db->sql_fetchrow($result)) {
		echo '<tr><td class="row1" colspan="2"><span class="gen">'.$a.' &nbsp;<a href="'.URL::index('&amp;cat='.$cat_id).'">'.$cat_title.'</a></span></td></tr>';
		$a++;
	}
	echo '</table>';
	$db->sql_freeresult($result);
	echo '<br />
	<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr><td align="center" class="catleft" colspan="2"><b><span class="gen">'._QUESTIONS.'</span></b></td></tr><tr><td class="row1" colspan="2">';
	$result = $db->sql_query("SELECT * FROM ".$prefix."_faqanswer 
		WHERE $search_id (question LIKE '%$terms%' OR answer LIKE '%$terms%')");
	$b = 1;
	if ($db->sql_numrows($result) == 1) {
		define('SEARCH_RESULTS2', _RESULTS1);
	} else {
		define('SEARCH_RESULTS2', _RESULTS2);
	}
	echo _SEARCHFOUND.' <b>'.$db->sql_numrows($result).'</b> '.SEARCH_RESULTS2.'</td></tr>';
	while (list($qa_id, $qa_cat, $qa_question, $qa_answer) = $db->sql_fetchrow($result)) {
		$answer_trim = substr($qa_answer, 0, 130);
		echo '<tr><td class="row1" colspan="2"><span class="gen">'.$b.' &nbsp;<a href="'.URL::index('&amp;cat='.$qa_cat.'#'.$qa_id).'">'.$qa_question.'</a></span><br />
		&nbsp;&nbsp;&nbsp;&nbsp;<b>'._PREVIEW.':</b> <i>'.$answer_trim.' ...</i></td></tr>';
		$b++;
	}
	echo '</td></tr></table>';
	$db->sql_freeresult($result);
	CloseTable();
}