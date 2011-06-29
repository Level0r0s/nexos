<?php
/*********************************************
  CPG-Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Reviews/modules/Reviews/admin/index.inc,v $
  $Revision: 9.10 $
  $Author: phoenix $
  $Date: 2010/11/04 01:10:52 $
**********************************************/
if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin(strtolower($op))) { die('Access Denied'); }

if (isset($_GET['del_review'])) {
	$db->sql_query("DELETE FROM ".$prefix."_reviews_add 
	WHERE id=".intval($_GET['del_review']));
	URL::redirect(URL::admin());
}
elseif (isset($_POST['add_review'])) {
	$id = intval($_POST['id']);
	$db->sql_query("INSERT INTO ".$prefix."_reviews (id, date, title, text, reviewer, email, score, cover, url, url_title, hits, language) 
	VALUES (NULL, '".Fix_Quotes($_POST['date'])."', '".Fix_Quotes($_POST['title'])."', '".Fix_Quotes($_POST['text'])."', '".Fix_Quotes($_POST['reviewer'])."', '".Fix_Quotes($_POST['email'])."', '".intval($_POST['score'])."', '".Fix_Quotes($_POST['cover'])."', '".Fix_Quotes($_POST['url'])."', '".Fix_Quotes($_POST['url_title'])."', 1, '".Fix_Quotes($_POST['language'])."')");
	$db->sql_query("DELETE FROM ".$prefix."_reviews_add 
	WHERE id = $id");
	URL::redirect(URL::admin());
}
elseif (isset($_POST['mod_main'])) {
	$db->sql_query('UPDATE '.$prefix."_config_custom 
	SET cfg_value='".Fix_Quotes($_POST['title'])."' 
	WHERE cfg_name='Reviews' AND cfg_field='title'");
	$db->sql_query('UPDATE '.$prefix."_config_custom 
	SET cfg_value='".Fix_Quotes($_POST['description'])."' 
	WHERE cfg_name='Reviews' AND cfg_field='description'");
	$db->sql_query('UPDATE '.$prefix."_config_custom 
	SET cfg_value='".Fix_Quotes($_POST['anon_comments'])."' 
	WHERE cfg_name='Reviews' AND cfg_field='anon_comments'");
	$db->sql_query('UPDATE '.$prefix."_config_custom 
	SET cfg_value='".Fix_Quotes($_POST['allow_bbcode'])."' 
	WHERE cfg_name='Reviews' AND cfg_field='allow_bbcode'");
	cache_delete_array('MAIN_CFG');
	URL::redirect(URL::admin());
}
else {
	include('header.php');
	GraphicAdmin('_AMENU3');
	OpenTable();
	echo '<div style="text-align:center;" class="title"><b>'._REVADMIN.'</b></div>';
	CloseTable();
	OpenTable();
	echo '<form action="'.URL::admin().'" method="post">
	<div style="text-align:center;">'._REVTITLE.'<br />
	<input type="text" name="title" value="'.$MAIN_CFG['Reviews']['title'].'" size="50" maxlength="100" /><br /><br />'
	._REVDESC.'<br />
	<textarea name="description" rows="15" wrap="virtual" cols="60">'.$MAIN_CFG['Reviews']['description'].'</textarea><br /><br />
	Allow Anonymous Comments '.yesno_option('anon_comments', $MAIN_CFG['Reviews']['anon_comments']).'<br /><br />
	Allow BB Code '.yesno_option('allow_bbcode', $MAIN_CFG['Reviews']['allow_bbcode']).'<br /><br />
	<input type="hidden" name="mod_main" value="mod_main" />
	<input type="submit" value="'._SAVECHANGES.'">
	</div></form>';
	CloseTable();
	OpenTable();
	echo '<div style="text-align:center;"><span class="option"><b>'._REVWAITING.'</b></span><br />';
	$result = $db->sql_query("SELECT * FROM ".$prefix."_reviews_add 
	ORDER BY id");
	if ($db->sql_numrows($result) > 0) {
	while(list($id, $date, $title, $text, $reviewer, $email, $score, $url, $url_title, $language) = $db->sql_fetchrow($result)) {
		echo '<hr /><br /><form action="'.URL::admin().'" method="post">
		<table border="0" cellpadding="1" cellspacing="2">
	<tr><td><b>'._REVIEWID.':</td><td><b>'. $id.'</b><input type="hidden" name="id" value="'.$id.'" /></td></tr>
	<tr><td>'._DATE.':</td><td><input type="text" name="date" value="'.$date.'" size="11" maxlength="10" /></td></tr>
	<tr><td>'._PRODUCTTITLE.':</td><td><input type="text" name="title" value="'.htmlprepare($title).'" size="25" maxlength="40" /></td></tr>';
		if ($multilingual) {
			echo '<tr><td>'._LANGUAGE.': </td><td>'.lang_selectbox($language, 'language').'</td></tr>';
		} else {
			echo '<input type="hidden" name="language" value="'.$language.'" />';
		}
		echo '
	<tr><td>'._REVIEW.':</td><td><textarea name="text" rows="6" wrap="virtual" cols="40">'.$text.'</textarea></td></tr>
	<tr><td>'._REVIEWER.'</td><td><input type="text" name="reviewer" value="'.$reviewer.'" size="41" maxlength="40" /></td></tr>
	<tr><td>'._EMAIL.':</td><td><input type="text" name="email" value="'.$email.'" size="41" maxlength="80" /></td></tr>
	<tr><td>'._SCORE.'</td><td><input type="text" name="score" value="'.$score.'" size="3" maxlength="2" /></td></tr>';
		if ($url != '') {
			echo '
	<tr><td>'._RELATEDLINK.':</td><td><input type="text" name="url" value="'.$url.'" size="25" maxlength="100" /></td></tr>
	<tr><td>'._LINKTITLE.':</td><td><input type="text" name="url_title" value="'.htmlprepare($url_title).'" size="25" maxlength="50" /></td></tr>';
		}
		echo '
	<tr><td>'._IMAGE.':</td><td><input type="text" name="cover" size="25" maxlength="100" /><br /><i>'._REVIMGINFO.'</i></td></tr>
	<tr><td colspan="2" align="center"><input type="hidden" name="add_review" value="add_review" /><input type="submit" value="'._ADDREVIEW.'" /> - [ <a href="'.URL::admin("&amp;del_review=$id").'">'._DELETE.'</a> ]</td></tr>
	</table>
	</form>';
	}
	} else {
		echo '<br /><br /><i>'._NOREVIEW2ADD.'</i><br /><br />';
	}
	echo '<a href="'.URL::index('&amp;rop=write_review').'">'._CLICK2ADDREVIEW.'</a></div>';
	CloseTable();
	OpenTable();
	echo '<div style="text-align:center;"><span class="option"><b>'._DELMODREVIEW.'</b></span><br /><br />'._MODREVINFO.'</div>';
	CloseTable();
	require('footer.php');
}
