<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 | 
  +-------------------------------------------------------------------+
  | cpgmm.php - NexOS Administration Backend file                     |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      |
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |  
  +-------------------------------------------------------------------+
  | CPG Dragonfly™ CMS                                                |
  | Copyright © 2004 - 2005 by CPG-Nuke Dev Team                      |
  | http://www.dragonflycms.com                                       |
  | Dragonfly is released under the terms and conditions of the GNU   |
  | GPL version 2 or any later version                                |  
  +-------------------------------------------------------------------+
*/

if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin('cpgmm')) { die('Access Denied'); }
if ((isset($_GET['cid']) && (intval($_GET['cid']) > 0) || isset($_GET['id']) && (intval($_GET['id']) > 0)) && $CPG_SESS['admin']['page'] != 'cpgmm') {
	cpg_error(_ERROR_BAD_LINK, _SEC_ERROR);
}
get_lang('cpgmm');

global $db, $prefix, $cpgtpl, $bgcolor2, $bgcolor3;
$mode = isset($_GET['mode']) ? $_GET['mode'] : '';

function cpg_mm_admin_header($title, $content='') {
	global $pagetitle, $cpgtpl, $modheader;
	$pagetitle .= ' '._BC_DELIM.' '._CPG_MMADMIN;
	$modheader .= '
<link rel="stylesheet" href="themes/default/style/tabletree.css" type="text/css" media="screen"/>
<script type="text/javascript" src="includes/javascript/framework.js"></script>
<script type="text/javascript" src="includes/javascript/dragndrop.js"></script>
<script type="text/javascript" src="includes/javascript/tabletree.js"></script>
<script type="text/javascript" src="includes/javascript/tree.js"></script>
';
	require('header.php');
	GraphicAdmin('_AMENU1');
	$cpgtpl->assign_vars(array(
		'L_CPGMM' => URL::admin('cpgmm'),
		'ICON_SELECT' => 'images/blocks/CPG_Main_Menu/icon_select.gif',
		'ICON_FORBID' => 'images/blocks/CPG_Main_Menu/icon_cantselect.gif',
		'ICON_HIDDEN' => 'images/blocks/CPG_Main_Menu/icon_hideselect.gif',
		'HEAD_TITLE' => $title,
		'HEAD_CONTENT' => $content
	));
	$cpgtpl->set_handle('head', 'admin/cpgmm_header.html');
	$cpgtpl->display('head');
}
/*******************
  Manage links
*******************/
if (isset($_GET['editlnk'])) {
	if ($_GET['editlnk'] != ('mod' || 'link' || 'new')) cpg_error(_CPG_MMNOLINK);
	$lid = isset($_GET['id']) ? intval($_GET['id']) : '';
	$mode = $_GET['editlnk'];
	if ($mode == 'mod') {
		$result = $db->sql_query('SELECT title, inmenu AS active, cat_id FROM '.$prefix.'_modules WHERE mid='.$lid);
	} elseif ($mode == 'link') {
		$result = $db->sql_query('SELECT * FROM '.$prefix.'_modules_links WHERE lid='.$lid);
	}
	if (($mode != 'new' && $db->sql_numrows($result) > 0) || $mode == 'new') {
		$link = ($mode == 'new') ? array('cat_id' => 0, 'view' => 0) : $db->sql_fetchrow($result);
		$array = array('0' => '['._NONE.']');
		$cats = $db->sql_query("SELECT cid, name FROM ".$prefix."_modules_cat ORDER BY name");
		while ($cat = $db->sql_fetchrow($cats)) {
			$array["$cat[cid]"] = defined($cat['name']) ? constant($cat['name']) : $cat['name'];
		}
		cpg_mm_admin_header($mode != 'new' ? 'Edit Link' : _CPG_MMADDLINK);
		$cpgmm_edit = array(
			'EDITLINK' => true,
			'EDITCAT' => false,
			'LNK' => $_GET['editlnk'],
			'MOD' => $_GET['editlnk'] == 'mod',
			'NEW' => $_GET['editlnk'] == 'new',
			'LID' => $lid,
			'S_CATEGORY' => _CATEGORY,
			'S_ACTIVE' => _ACTIVE,
			'S_SUBMIT_VALUE' => ($mode != 'new' ? _SAVECHANGES : _CPG_MMADDLINK),
			'SEL_CAT' => select_box('lnkcat', $link['cat_id'], $array),
			'SEL_ACTIVE' => yesno_option('lnkactive', ($mode != 'new' ? $link['active'] : 1)),
			
		);
		if ($_GET['editlnk'] != 'mod') {
			$cpgmm_edit += array(
				'S_URL' => _URL,
				'S_VIEWPRIV' => _VIEWPRIV,
				'SEL_GROUP' => group_selectbox('lnkview', $link['view'], true),
				'S_TITLE_VALUE' => ($mode != 'new' ? htmlprepare($link['title']) : ''),
				'S_LINK_VALUE' => ($mode != 'new' ? $link['link'] : ''),
				'SEL_LINK' => select_box('lnktype', ($mode != 'new' ? $link['link_type'] : 0), array(0 => 'getlink', 1 => 'link', 2 => 'web')),
			);
		}
		if ($_GET['editlnk'] != 'new') {
			$cpgmm_edit += array('S_LINK_TITLE' => $link['title'],);
		}
		$cpgtpl->assign_vars($cpgmm_edit);
		$cpgtpl->set_handle('body', 'admin/cpgmm_edit.html');
		$cpgtpl->display('body');
	} else {
		cpg_error(_CPG_MMNOLINK);
	}
} elseif (isset($_GET['savelnk'])) {
	$mode = $_GET['savelnk'];
	if ($_POST['lnktitle'] == '' && $mode != 'mod') { cpg_error(_CPG_MMLNKEMPTY); }
	if ($_POST['lnklink'] == '' && $mode != 'mod') { cpg_error(_CPG_MMURLEMPTY); }
	if ($mode == 'mod') {
		$db->sql_query("UPDATE ".$prefix."_modules SET cat_id='$_POST[lnkcat]', inmenu='".intval($_POST['lnkactive'])."' WHERE mid=".intval($_POST['id']));
	} elseif ($mode == 'link') {
		$db->sql_query("UPDATE ".$prefix."_modules_links SET title='".Fix_Quotes($_POST['lnktitle'])."', link_type='".intval($_POST['lnktype'])."', link='".Fix_Quotes($_POST['lnklink'])."', active='".intval($_POST['lnkactive'])."', view='".intval($_POST['lnkview'])."', cat_id='".intval($_POST['lnkcat'])."' WHERE lid=".intval($_POST['id']));
	} else {
		$db->sql_query("INSERT INTO ".$prefix."_modules_links (title, link_type, link, active, view, cat_id) VALUES ('".Fix_Quotes($_POST['lnktitle'])."', ".intval($_POST['lnktype']).", '".Fix_Quotes($_POST['lnklink'])."', ".intval($_POST['lnkactive']).", ".intval($_POST['lnkview']).", ".intval($_POST['lnkcat']).")");
	}
	URL::redirect(URL::admin('cpgmm'));
} elseif ($mode == 'dellnk' && intval($_GET['id']) > 0) {
	$lid = intval($_GET['id']);
	$result = $db->sql_query("SELECT title FROM ".$prefix."_modules_links WHERE lid=".$lid);
	if ($db->sql_numrows($result) > 0) {
		$link = $db->sql_fetchrow($result);
		if (isset($_GET['ok'])) {
			$db->sql_query("DELETE FROM ".$prefix."_modules_links WHERE lid=".$lid);
			URL::redirect(URL::admin('cpgmm'));
		}
		$pagetitle .= ' '._BC_DELIM.' '._CPG_MMDELLNK.' '.$link['title'];
		require('header.php');
		GraphicAdmin('_AMENU1');
		OpenTable();
		echo '<center>'.sprintf(_ERROR_DELETE_CONF, '<i>'.$link['title'].'</i>');
		echo '<br /><br />[ <a href="'.URL::admin('cpgmm').'">'._NO.'</a> | <a href="'.URL::admin("cpgmm&amp;id=$lid&amp;mode=dellnk&amp;ok=1").'">'._YES.'</a> ]</center>';
		CloseTable();
	} else {
		cpg_error(_CPG_MMNOLINK);
	}
}
/*******************
  Manage categories
*******************/
elseif (isset($_GET['editcat'])) {
	$cid = isset($_GET['cid']) ? intval($_GET['cid']) : '';
	$mode = $_GET['editcat'];
	$title = _CPG_MMCATNEW;
	if ($mode == 'mod') {
		$result = $db->sql_query("SELECT name, image, link_type, link FROM ".$prefix."_modules_cat WHERE cid=".$cid);
		$title = _CPG_MMCATEDIT;
	}
	if (($mode != 'new' && $db->sql_numrows($result) > 0) || $mode == 'new') {
		cpg_mm_admin_header($title);
		$cat = (($mode == 'new') ? array('name'=>'My title', 'image'=>'image.gif', 'link'=>'', 'link_type'=>0) : $db->sql_fetchrow($result));
		
		$cpgtpl->assign_vars(array(
			'EDITLINK' => false,
			'EDITCAT' => true,
			'S_URL' => _URL,
			'S_CPG_MMOPTIONAL' => _CPG_MMOPTIONAL,
			'MODE' => $mode,
			'CID' => $cid,
			'S_CATNAME_VALUE' => htmlprepare($cat['name']),
			'S_CATIMAGE_VALUE' => $cat['image'],
			'S_CATLINK_VALUE' => $cat['link'],
			'S_SUBMIT_VALUE' => ($mode != 'new' ? _SAVECHANGES : _CPG_MMADDCAT),
			'SEL_LINKTYPE' => select_box('lnktype', $cat['link_type'], array(0 => 'getlink', 1 => 'link', 2 => 'web')),
		));
		$cpgtpl->set_handle('body', 'admin/cpgmm_edit.html');
		$cpgtpl->display('body');

	} else {
		cpg_error(_CPG_MMNOCAT);
	}
} elseif (isset($_GET['savecat'])) {
	if ($_POST['catname'] == '') { cpg_error(_CPG_MMCATEMPTY); }
	if ($_GET['savecat'] == 'mod') $db->sql_query("UPDATE ".$prefix."_modules_cat SET name='".Fix_Quotes($_POST['catname'])."', image='$_POST[catimage]', link='$_POST[catlink]', link_type='$_POST[lnktype]' WHERE cid=".intval($_POST['cid']));
	else {
		list($pos) = $db->sql_ufetchrow("SELECT pos FROM ".$prefix."_modules_cat 
			ORDER BY pos DESC", SQL_NUM);
		$pos = empty($pos) ? 0 : ($pos+1);
		$db->sql_query("INSERT INTO ".$prefix."_modules_cat (name, image, pos, link, link_type) VALUES ('".Fix_Quotes($_POST['catname'])."', '$_POST[catimage]', '$pos', '$_POST[catlink]', '$_POST[lnktype]')");
	}
	URL::redirect(URL::admin('cpgmm'));
} elseif ($mode == 'delcat' && intval($_GET['cid']) > 0) {
	$cid = intval($_GET['cid']);
	$result = $db->sql_query("SELECT name FROM ".$prefix."_modules_cat WHERE cid=".$cid);
	if ($db->sql_numrows($result) > 0) {
		$cat = $db->sql_fetchrow($result);
		if (isset($_GET['ok'])) {
			$db->sql_query("UPDATE ".$prefix."_modules_links SET cat_id=0 WHERE cat_id=".$cid);
			$db->sql_query("UPDATE ".$prefix."_modules SET cat_id=0 WHERE cat_id=".$cid);
			$db->sql_query("DELETE FROM ".$prefix."_modules_cat WHERE cid=".$cid);
			URL::redirect(URL::admin('cpgmm'));
		}
		$cat['name'] = defined($cat['name']) ? constant($cat['name']) : $cat['name'];
		$pagetitle .= ' '._BC_DELIM.' Delete Category: '.$cat['name'];
		require('header.php');
		GraphicAdmin('_AMENU1');
		OpenTable();
		echo '<center>'.sprintf(_ERROR_DELETE_CONF, '<i>'.$cat['name'].'</i>');
		echo '<br /><br />[ <a href="'.URL::admin('cpgmm').'">'._NO.'</a> | <a href="'.URL::admin("cpgmm&amp;cid=$cid&amp;mode=delcat&amp;ok=1").'">'._YES.'</a> ]</center>';
		CloseTable();
	} else {
		cpg_error(_CPG_MMNOCAT);
	}
} 
/*******************
  Show the menu
*******************/
else {
	if (Security::check_post() && isset($_POST['updatecpgmm']) && intval($_POST['id']) && intval($_POST['parent']) && intval($_POST['pos'])) {
	$cats = -1;
	for ($i=0; $i<count($_POST['id']); ++$i) {
			if ($_POST['parent'][$i] == 0 ) {
				++$cats;
				if ($_POST['id'][$i] > 0 && $_POST['pos'][$i] != $i) {
					$db->sql_update($prefix.'_modules_cat', array('pos'=>$i), 'cid='.$_POST['id'][$i]);
				}
				$parent = ($_POST['id'][$i] == -1) ? '0' : $_POST['id'][$i] ;
			}
			if ($_POST['id'][$i] > 0 && $_POST['parent'][$i] != 0 && $_POST['pos'][$i] != $i) {
				$db->sql_update($prefix.'_modules_links', array('pos'=>$i-$cats,'cat_id'=> $parent), 'lid='.$_POST['id'][$i]);
			}
			elseif ($_POST['id'][$i] < 0 && $_POST['parent'][$i] != 0 && $_POST['pos'][$i] != $i) {
				$db->sql_update($prefix.'_modules', array('pos'=>$i-$cats,'cat_id'=> $parent), 'mid='.ltrim((string)$_POST['id'][$i],'-'));
			}
		}
	}
	$categories = array();
	$last = 0;
	// Load the categories
	$cats = $db->sql_query('SELECT * FROM '.$prefix.'_modules_cat ORDER BY pos');
	while ($cat = $db->sql_fetchrow($cats)) {
		$categories[$cat['cid']] = $cat;
		$last = $cat['pos'];
	}
	$categories[0] = array('cid' => -1, 'name' => _NONE, 'image' => 'images/smiles/icon_exclaim.gif', 'pos' => -1);

	// Load the modules from database
	$items = $db->sql_query('(SELECT mid AS lid, title, active, view, inmenu, cat_id, -1 as link_type, pos FROM '.$prefix.'_modules)
UNION (SELECT lid, title, active, view, 1 as inmenu, cat_id, link_type, pos FROM '.$prefix.'_modules_links)
ORDER BY pos');
/*
	$items = $db->sql_query('SELECT mid AS lid, title, active, view, inmenu, cat_id, pos FROM '.$prefix.'_modules ORDER BY pos');
	while ($item = $db->sql_fetchrow($items, SQL_ASSOC)) {
		$item['link_type'] = -1;
		$categories[$item['cat_id']]['items'][] = $item;
	}
	// Load custom links from database
	$items = $db->sql_query('SELECT * FROM '.$prefix.'_modules_links ORDER BY pos');
*/
	while ($item = $db->sql_fetchrow($items, SQL_ASSOC)) {
		$categories[$item['cat_id']]['items'][] = $item;
	}
	cpg_mm_admin_header('The CPG Main Menu Block');
// categories
	$cpgtpl->assign_vars(array(
		'S_EDIT' => _EDIT,
		'S_DELETE' => _DELETE,
	));

	$ipos = 0;
	foreach ($categories as $cat) {
		if ($cat['image'] == '') {
			$cat['image'] = 'images/spacer.gif';
		} else if (file_exists('images/blocks/CPG_Main_Menu/'.$cat['image'])) {
			$cat['image'] = 'images/blocks/CPG_Main_Menu/'.$cat['image'];
		}

		$cpgtpl->assign_block_vars('cat', array(
			'IMAGE' => $cat['image'],
			'NAME' => defined($cat['name']) ? constant($cat['name']) : $cat['name'],
			'EDITABLE' => ($cat['cid'] > 0),
			'BG' => $bgcolor2,
			'CID' => $cat['cid'],
			'POS' => $cat['pos']
		));

		if (isset($cat['items'])) {
		ksort($cat['items']);
		$bgcolor = $bgcolor3;
		foreach ($cat['items'] as $item) {
			$bgcolor = ($bgcolor == '') ? $bgcolor3: '';
			//$active_in_menu = false;
			++$ipos;
			if ($ipos != $item['pos'])
			{
				$item['pos'] = $ipos;
				if ($item['link_type'] < 0) {
					$db->sql_query('UPDATE '.$prefix.'_modules SET pos='.$ipos.' WHERE mid='.$item['lid']);
				} else {
					$db->sql_query('UPDATE '.$prefix.'_modules_links SET pos='.$ipos.' WHERE lid='.$item['lid']);
				}
			}
			if ($item['link_type'] < 0) $type = '';
			elseif ($item['link_type'] == 0) $type = 'getlink';
			elseif ($item['link_type'] == 1) $type = 'link';
			elseif ($item['link_type'] == 2) $type = 'web';
			$cpgtpl->assign_block_vars('cat.item', array(
				'ITEM' => $item['lid'],
				'BG_ITEM' => $bgcolor,
				'TITLE' => $item['title'],
				'TYPE' => $type,
				'S_LAST' => !next($cat['items']),
				'LINK_TYPE' => $item['link_type'] < 0,
				'ITEM_STATIC' => ($item['link_type'] < 0 && $item['active'] && $item['inmenu']),
				'ITEM_VARIABLE' => !($item['link_type'] < 0),
				'ITEM_ACTIVE' => $item['active'],
				'POS' => $item['pos'],
			));
		}
		}
	}
// end categories
	$cpgtpl->set_handle('body', 'admin/cpgmm.html');
	$cpgtpl->display('body');
}