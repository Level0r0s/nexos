<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  Module Copyright (c) 2004 by Trevor Eckart

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/FAQ/modules/FAQ/index.php,v $
  $Revision: 9.7 $
  $Author: phoenix $
  $Date: 2010/11/08 22:56:54 $

*************************************************************/
if (!defined('CPG_NUKE')) { exit; }
$pagetitle .= _FAQ2;
require_once('header.php');

OpenTable();
if (isset($_GET['cat'])) {
	$order = (isset($_GET['sort']) && $_GET['sort'] == 'desc') ?  'question DESC' : (isset($_GET['sort']) ? 'question ASC' : 'id ASC');
	$id_cat = intval($_GET['cat']);
	$sql = "SELECT id, question, answer FROM ".$prefix."_faqanswer 
		WHERE id_cat='$id_cat' 
		ORDER BY $order";
	$result = $db->sql_ufetchrowset($sql, SQL_BOTH, __FILE__, __LINE__);

	require_once('includes/nbbcode.php');
	if (!empty($result)) {
		echo '<a id="top"></a>
		<a href="'.URL::index().'">'._MAIN.'</a> | <a href="'.URL::index('&amp;file=search&amp;cat='.$id_cat).'">'._SEARCH.'</a><br /><br />
		<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
		<tr><td align="center" class="catleft" colspan="2"><b><span class="gen">'._QUESTION.'</span></b></td></tr>
		<tr><td align="center" class="row1" colspan="2">'._SORT.': '.
		((isset($_GET['sort']) && $_GET['sort'] == 'asc') ? '<b>'._ASCENDING.'</b>' : '<a href="'.URL::index('&amp;cat='.$id_cat.'&amp;sort=asc').'">'._ASCENDING.'</a>').'
		 / '.
		((isset($_GET['sort']) && $_GET['sort'] == 'desc') ? '<b>'._DESCENDING.'</b>' : '<a href="'.URL::index('&amp;cat='.$id_cat.'&amp;sort=desc').'">'._DESCENDING.'</a>').'
		</td></tr>';
		foreach ($result as $row) {
			echo '<tr><td class="row1" colspan="2"><span class="gen"><a href="'.htmlprepare(URL::uri()).'#'.$row['id'].'">'.$row['question'].'</a></span></td></tr>';
        }
		echo '</table><br />
		<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline" align="center">
		<tr><td align="center" class="catleft" colspan="2"><b><span class="gen">'._ANSWER.'</span></b></td></tr>';

		foreach ($result as $row) {
			echo '<tr><td align="justify" class="row1" colspan="2"><a id="'.$row['id'].'"></a><b><span class="gen">'.$row['question'].'</span></b><br /><br />
			<span class="gen">'.decode_bbcode($row['answer'], 1).'</span><br /><br />
			<div style="float:left;"><a href="'.htmlprepare(URL::uri()).'#top">'._BACKTOTOP.'</a></div>';
			if (can_admin('faq')) {
				echo '<div style="float:right;"><a href="'.URL::admin('&amp;mode=edit&amp;faq='.$row['id']).'">'._EDIT.'</a> | <a href="'.URL::admin('&amp;mode=delete&amp;faq='.$row['id']).'">'._DELETE.'</a></div>';
			}
			echo '</tr><tr><td class="spaceRow" style="height:1px;"><img src="images/spacer.gif" alt="" width="1" height="1" /></td></tr>';
		}
		echo '</table>';
	} else {
		echo '<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline" align="center">
		<tr><td align="center" class="row1" colspan="2" style="height:22px;">'.sprintf(_ERROR_NONE_TO_DISPLAY, strtolower(_FAQ2)).'<br /><br /><a href="'.URL::index().'">'._BACKTOFAQINDEX.'</a></td></tr>
		</table>';
	}
} else {
	$order = (isset($_GET['sort']) && $_GET['sort'] == 'desc') ?  'categories DESC' : (isset($_GET['sort']) ? 'categories ASC' : 'id ASC');
	$querylang = ($multilingual) ? 'WHERE (flanguage=\''.$currentlang.'\' OR flanguage= \'\') ' : '';
	$cats = $db->sql_ufetchrowset("SELECT c.id_cat, c.categories, COUNT(a.id_cat) AS faqs FROM ".$prefix."_faqcategories c 
		LEFT JOIN ".$prefix."_faqanswer a ON (a.id_cat = c.id_cat) $querylang 
		GROUP BY c.categories, c.id_cat 
		ORDER BY $order", SQL_BOTH, __FILE__, __LINE__);
	echo '<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr><td align="center" class="catleft" colspan="2"><b><span class="gen">'._CATEGORIES.'</span></b></td></tr>
	<tr><td align="center" class="row1" colspan="2">'._SORT.': '.
    (((isset($_GET['sort']) && $_GET['sort'] == 'asc') || !isset($_GET['sort'])) ? '<b>'._ASCENDING.'</b>' : '<a href="'.URL::index('&amp;sort=asc').'">'._ASCENDING.'</a>').'
     / '.
    ((isset($_GET['sort']) && $_GET['sort'] == 'desc') ? '<b>'._DESCENDING.'</b>' : '<a href="'.URL::index('&amp;sort=desc').'">'._DESCENDING.'</a>').'
	</td></tr>';

	foreach ($cats as $row) {
		echo '<tr><td align="left" class="row1" style="width:50%;"><span class="gen"><a href="'.URL::index('&amp;cat='.$row['id_cat']).'">'.$row['categories'].'</a></span></td>
		<td align="right" class="row2" style="width:50%;"><b>'.$row['faqs'].'</b> '.(($row['faqs'] == 1) ? _QUESTIONS1 : _QUESTIONS2).' '._INTHISCAT.'</td></tr>';
	}
	echo '</table><br />';

	echo '<form action="'.URL::index('&amp;file=search').'" method="post" enctype="multipart/form-data" accept-charset="utf-8" style="margin:0;">
	<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr><td align="center" class="catleft" colspan="2"><b><span class="gen">'._SEARCH.'</span></b></td></tr>
	<tr><td class="row1"><span class="gen">'._KEYWORDS.'</span></td>
	<td class="row2"><input type="text" name="query" size="35" maxlength="255" /></td></tr>
	<tr><td class="row1"><span class="gen">'._CATEGORY.'</span></td>
	<td class="row2"><select name="cat">
	<option value="0">'._ALLCATS.'</option>';
	foreach ($cats as $row) {
		echo "<option value=\"$row[id_cat]\">$row[categories]</option>\n";
	}
	echo '</select></td></tr>
	<tr><td class="catbottom" colspan="2" align="center" style="height:28px;">
	<input type="submit" value="'._BEGINSEARCH.'" class="mainoption" /></td></tr>
	</table></form>';
}
CloseTable();