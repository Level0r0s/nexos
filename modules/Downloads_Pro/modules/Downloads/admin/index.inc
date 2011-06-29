<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/admin/index.inc,v $
  $Revision: 1.11 $
  $Author: phoenix $
  $Date: 2010/11/08 03:05:51 $
******************************************************/
if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin($op)) { die('Access Denied'); }

require_once('modules/'.$op.'/functions/display.inc');
require_once('modules/'.$op.'/functions/info.inc');
require_once('modules/'.$op.'/functions/linking.inc');
require_once('includes/nbbcode.php');

$pagetitle .= ' '._BC_DELIM.' '.$module_title;

global $db, $op, $CPG_SESS, $MAIN_CFG, $prefix, $bgcolor2, $bgcolor3, $user_prefix;

if (isset($_POST['addCat']) || isset($_REQUEST['editCat']) || isset($_GET['delCat']) || isset($_REQUEST['transfer'])) {
	require_once('modules/'.$op.'/admin/cat_mngr.inc');
}
elseif (isset($_GET['del_dl']) || $mode == 'add' || $mode == 'broken' || $mode == 'pending') {
	require_once('modules/'.$op.'/admin/dls_mngr.inc');
}
elseif (isset($_POST['saveFields']) || isset($_POST['addField']) || $mode == 'fields') {
	require_once('modules/'.$op.'/admin/fields_mngr.inc');
}
elseif ($mode == 'r_pending') {
	require_once('modules/'.$op.'/admin/pending_reviews.inc');
}
elseif (isset($_GET['pick'])) {
	$pick_id = intval($_GET['pick']);
	list($pick) = $db->sql_ufetchrow("SELECT pick FROM ".$dl_prefix."_downloads 
		WHERE lid='$pick_id'", SQL_NUM);
	if (is_numeric($pick)) {
		$pick = intval(!$pick);
		$db->sql_query("UPDATE ".$dl_prefix."_downloads 
			SET pick='$pick' 
			WHERE lid='$pick_id' 
			LIMIT 1");
	}
	URL::redirect(isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : URL::index());
}
elseif (isset($_GET['active'])) {
	$act_id = intval($_GET['active']);
	list($act) = $db->sql_ufetchrow("SELECT active FROM ".$dl_prefix."_downloads 
		WHERE lid='$act_id'", SQL_NUM);
	if (is_numeric($act)) {
		$act = intval(!$act);
		$db->sql_query("UPDATE ".$dl_prefix."_downloads 
			SET active='$act' 
			WHERE lid='$act_id' 
			LIMIT 1");
	}
	URL::redirect(isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : URL::index());
}
elseif ($mode == 'm_pending') {
	$pagetitle .= ' '._BC_DELIM.' '._DLP_PENDMIR;
	require_once('header.php');
	GraphicAdmin('_AMENU6');
	$result = $db->sql_query("SELECT m.did, m.uid, m.url, d.title, u.username FROM ".$dl_prefix."_mirrors m
		LEFT JOIN ".$dl_prefix."_downloads d ON (d.lid = m.did)
		LEFT JOIN ".$user_prefix."_users u ON (u.user_id = m.uid)
		WHERE m.active=0 
		ORDER BY m.did");
	OpenTable();
	echo dl_admin_menu().'<br /><hr /><br />
	<span class="genmed"><strong>'._DLP_PENDMIR.'</strong></span><br /><br />';
	if ($db->sql_numrows($result) < 1) {
		echo display_errors(sprintf(_ERROR_NONE_TO_DISPLAY, strtolower(_DLP_PENDMIR)));
	} else {
		$bgcolor = $bgcolor3;
		while ($row = $db->sql_fetchrow($result)) {
			if (ereg('://', $row['url'])) {
				$url = parse_url($row['url']);
				$site = shrink_url($url['host']);
			} else {
				$site = $MAIN_CFG['server']['domain'];
			}
			echo '<div style="padding: 3px 5px; border:solid 1px '.$bgcolor4.'; background-color:'.$bgcolor2.'; margin-top: 4px; margin-right: 10px; margin-bottom: 4px; width: 40%; float: left;"><span class="genmed"><span style="color: #808080; font-weight: bold;">'._DLP_DOWNLOAD.':</span> <a href="'.URL::index('&amp;file=manage&amp;edit='.$row['did']).'">'.$row['title'].'</a></span><br />'._DLP_MIRROR.': <a href="'.$row['url'].'">'.$site.'</a>; '.strtolower(_DLP_SUBMITTEDBY).': <a href="'.URL::index('Your_Account&amp;profile='.$row['uid']).'">'.$row['username'].'</a></div>';
		}
		echo '<br />';
	}
	$db->sql_freeresult($result);
	CloseTable();
}
else {
	require_once('header.php');
	GraphicAdmin('_AMENU6');
	OpenTable();
	echo dl_admin_menu().'<br /><hr /><br />
	<span class="genmed"><strong>Categories</strong></span><br />
	Manage categories and their subcategories in which various downloads will be filed.<br /><br />';
	require_once('modules/'.$op.'/functions/categories.inc');

	$cats = array();
	$depth = DL_Cat::list_all($cats);
	$level = 1;
	$bgcolor = $bgcolor3;
	$selects = '';
	if (count($cats)) {
		echo '
		<table border="0" cellspacing="0" width="100%" bgcolor="'.$bgcolor1.'">
		 <tr bgcolor="'.$bgcolor2.'">
		   <td><strong>'._CATEGORY.'</strong></td>
		   <td width="100" align="center"><strong>'._DOWNLOADS.'</strong></td>
		   <td width="100"><strong>'._FUNCTIONS.'</strong></td>
		 </tr>';
		foreach ($cats as $cat) {
			$path = '';
			for ($i=1; $i<=$depth; $i++) {
				$image = false;
				if ($i == $cat['level']) {
					$image = 'small.png';
				} elseif ($i == $cat['level']-1) {
					$image = (!isset($cat['last'])) ? 'sube.png' : 'sub.png';
				} elseif ($i < $cat['level']) {
					$image = 'e.png';
				}
				if ($image) {
					$path .= '<img src="'.dl_image('folders/'.$image).'" align="middle" alt="" />';
				}
			}
			$level = $cat['level'];
			$selects .= '<option value="'.$cat['cid'].'">'.$cat['crumb']."</option>";
			$bgcolor = ($bgcolor == '') ? ' bgcolor="'.$bgcolor3.'"' : '';
			//$visible = ($cat['visible']) ? 'checked.gif' : 'unchecked.gif';
			$count = $db->sql_count($dl_prefix.'_downloads', 'cid='.intval($cat['cid']));
			echo '
		 <tr'.$bgcolor.'>
		   <td>'.$path.' <a href="'.URL::index('&amp;c='.$cat['cid']).'">'.$cat['title'].'</a></td>
		   <td align="center">'.$count.'</td>
		   <td><a href="'.URL::admin('&amp;editCat='.$cat['cid']).'">'._EDIT.'</a> / <a href="'.URL::admin('&amp;delCat='.$cat['cid']).'">'._DELETE.'</a></td>
		 </tr>';
		}
		echo '</table><hr /><br />';
	}
	echo '<span class="genmed"><strong>Add new category</strong></span><br /><br />';
	DL_Cat::form(0, $cats);
	
	if (count($cats) > 1) {
		echo '<br /><br /><br /><span class="genmed"><strong>Transfer downloads between categories</strong></span><br /><br />
		<form action="'.URL::admin('&amp;transfer').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">
		From: '.DL_Cat::selectbox(0, 'from', false).' &nbsp; To: '.DL_Cat::selectbox(0, 'to', false).'	<input type="submit" name="transfer" value="Transfer" />
		</form>';
	}
	CloseTable();
}
