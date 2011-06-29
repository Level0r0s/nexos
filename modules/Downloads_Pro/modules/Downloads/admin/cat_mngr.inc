<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/admin/cat_mngr.inc,v $
  $Revision: 1.7 $
  $Author: phoenix $
  $Date: 2010/11/08 03:05:51 $
******************************************************/
if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin($op)) { die('Access Denied'); }
$pagetitle .= ' '._BC_DELIM.' '._CATEGORIES;

if (isset($_POST['addCat'])) {
	if (empty($_POST['title'])) {
		cpg_error('Title missing');
	}
	$cat_title = Fix_Quotes($_POST['title']);
	$cat_parent = intval($_POST['parentid']);
	list($cat_exist) = $db->sql_ufetchrow("SELECT COUNT(*) FROM ".$dl_prefix."_categories 
		WHERE title='$cat_title' AND parentid='$cat_parent'");
	if ($cat_exist) {
		cpg_error('A similar category already exists');
	} else {
		$db->sql_query("INSERT INTO ".$dl_prefix."_categories 
			(cid, title, cdescription, parentid) 
			VALUES 
			(DEFAULT, '$cat_title', '".Fix_Quotes($_POST['cdescription'])."', '$cat_parent')");
		require_once('modules/'.$op.'/functions/categories.inc');
		DL_Cat::count_dl();
		Cache::array_delete('categories', $op);
		URL::redirect(URL::admin());
	}
} elseif (isset($_POST['editCat'])) {
	if (empty($_POST['title'])) {
		cpg_error('Title missing');
	}
	$edit_id = intval($_GET['cid']);
	$edit_title = Fix_Quotes($_POST['title']);
	$edit_desc = Fix_Quotes($_POST['cdescription']);
	$edit_parent = intval($_POST['parentid']);
	$db->sql_query("UPDATE ".$dl_prefix."_categories 
		SET title='$edit_title', cdescription='$edit_desc', parentid='$edit_parent' 
		WHERE cid=$edit_id");
	Cache::array_delete('categories', $op);
	URL::redirect(URL::admin());
} elseif (isset($_GET['editCat'])) {
	$pagetitle .= ' '._BC_DELIM.' Edit Category';
	require_once('header.php');
	GraphicAdmin('_AMENU6');
	OpenTable();
	echo dl_admin_menu().'<br /><hr /><br />
	<span class="genmed"><strong>Categories '._BC_DELIM.' '._EDIT.'</strong></span><br />
	Manage categories and their subcategories in which various downloads will be filed.<br /><br />';
	require_once('modules/'.$op.'/functions/categories.inc');
	DL_Cat::form(1);
	CloseTable();
} elseif (isset($_POST['transfer']) || isset($_GET['transfer'])) {
	$pagetitle .= ' '._BC_DELIM.' Transfer Downloads';
	$cid_from = ((isset($_GET['transfer']) && strlen($_GET['transfer'])) ? intval($_GET['transfer']) : intval($_POST['from']));
	$cid_to = (isset($_GET['to']) ? intval($_GET['to']) : intval($_POST['to']));
	if (isset($_POST['cancel'])) { URL::redirect(URL::admin()); }
	if ($cid_from == $cid_to) { cpg_error('Categories must not be the same!'); }
	list($title_from) = $db->sql_ufetchrow('SELECT title FROM '.$dl_prefix."_categories 
		WHERE cid=$cid_from", SQL_NUM);
	list($title_to) = $db->sql_ufetchrow('SELECT title FROM '.$dl_prefix."_categories WHERE cid=$cid_to", SQL_NUM);
	if (isset($_POST['confirm'])) {
		if ($CPG_SESS['admin']['page'] != $op) { cpg_error(_ERROR_BAD_LINK, _SEC_ERROR); }
		$db->sql_query('UPDATE '.$dl_prefix."_downloads 
			SET cid=$cid_to 
			WHERE cid=$cid_from");
	} elseif (!isset($_POST['cancel'])) {
		cpg_delete_msg(URL::admin('&amp;transfer='.$cid_from.'&amp;to='.$cid_to), 'Are you sure that you want to transfer all downloads in <strong>'.$title_from.'</strong> to <strong>'.$title_to.'</strong>?');
	}
	URL::redirect(URL::admin());
} elseif (isset($_GET['delCat'])) {
	$pagetitle .= ' '._BC_DELIM.' Delete Category';
	$cid = intval($_GET['delCat']);
	list($cattitle, $parentid) = $db->sql_ufetchrow('SELECT title, parentid FROM '.$dl_prefix."_categories 
		WHERE cid=$cid", SQL_NUM);
	if (empty($cattitle)) { cpg_error('No such category'); }
	if (isset($_POST['confirm'])) {
		if ($CPG_SESS['admin']['page'] != $op) { cpg_error(_ERROR_BAD_LINK, _SEC_ERROR); }
		$count = $db->sql_count($dl_prefix.'_categories', 'cid!='.$cid);
		$db->sql_query('UPDATE '.$dl_prefix."_categories SET parentid=$parentid 
			WHERE parentid=$cid");
		if (isset($_POST['del_dl']) || $count < 1) {
			require_once('modules/'.$op.'/functions/mirrors.inc');
			require_once('modules/'.$op.'/functions/screenshots.inc');
			$result = $db->sql_uquery("SELECT lid FROM ".$dl_prefix."_downloads 
				WHERE cid=$cid");
			while (list($dl_id) = $db->sql_fetchrow($result)) {
				DL_Mirror::delete('all', $dl_id);
				DL_Image::delete('all', $dl_id);
				$db->sql_query("DELETE FROM ".$dl_prefix."_broken 
					WHERE lid='$dl_id'");
				$db->sql_query("DELETE FROM ".$dl_prefix."_downloads 
					WHERE lid='$dl_id'");
				$db->sql_query("DELETE FROM ".$dl_prefix."_history 
					WHERE id='$dl_id'");
				$db->sql_query("DELETE FROM ".$dl_prefix."_ratings 
					WHERE lid='$dl_id'");
				$db->sql_query("DELETE FROM ".$dl_prefix."_stats 
					WHERE id='$dl_id'");
			}
		} elseif (isset($_POST['move_dl'])) {
			$new_cat = intval($_POST['move_to']);
			$db->sql_query('UPDATE '.$dl_prefix."_downloads 
				SET cid=$new_cat 
				WHERE cid=$cid");
		}
		$db->sql_query('UPDATE '.$dl_prefix."_downloads 
			SET cid=$parentid 
			WHERE cid=$cid");
		$db->sql_query('DELETE FROM '.$dl_prefix."_categories 
			WHERE cid=$cid");
		require_once('modules/'.$op.'/functions/categories.inc');
		DL_Cat::count_dl();
		Cache::array_delete('categories', $op);
	} else if (!isset($_POST['cancel'])) {
		require_once('modules/'.$op.'/functions/categories.inc');
		$count = $db->sql_count($dl_prefix.'_categories', 'cid!='.$cid);
		cpg_delete_msg(URL::admin('&amp;delCat='.$cid), 'Are sure that you want to remove <strong>'.$cattitle.'</strong>?<br /><br />'.($count ? '<input type="checkbox" name="del_dl" id="del_dl" value="1" /> Remove all downloads within this category<br />OR<br /><input type="checkbox" name="move_dl" id="move_dl" value="1" /> Move all downloads to '.DL_Cat::selectbox(0, 'move_to', false, $cid) : 'All downloads in this category will be removed!'));
	}
	URL::redirect(URL::admin());
}
