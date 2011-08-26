<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/admin/modules/blocks.php,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 00:56:55 $
**********************************************/
if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin('blocks')) { die('Access Denied'); }
$pagetitle .= ' '._BC_DELIM.' '._BLOCKSADMIN;
require_once(CORE_PATH.'nbbcode.php');
if (isset($_GET['change'])) {
	$bid = intval($_GET['change']);
	list($active) = $db->sql_ufetchrow('SELECT active FROM '.$prefix."_blocks WHERE bid=$bid",SQL_NUM);
	if (is_numeric($active)) {
		$active = intval(!$active);
		$result = $db->sql_query('UPDATE '.$prefix.'_blocks SET active=\''.$active.'\' WHERE bid='.$bid);
		Cache::array_delete('blocks_list');
	}
	URL::redirect(URL::admin('blocks'));
} else if (isset($_GET['show'])) {
	block_show(intval($_GET['show']));
} else if (isset($_GET['edit'])) {
	BlocksEdit(intval($_GET['edit']));
} else if (isset($_GET['del'])) {
	$bid = intval($_GET['del']);
	list($bposition, $weight, $title) = $db->sql_ufetchrow('SELECT bposition, weight, title from '.$prefix.'_blocks where bid='.$bid,SQL_NUM);
	if (!isset($bposition) || isset($_POST['cancel'])) { URL::redirect(URL::admin()); }
	if (isset($_POST['confirm'])) {
		$db->sql_uquery('UPDATE '.$prefix.'_blocks SET weight=weight-1 WHERE bposition=\''.$bposition.'\' AND weight>'.$weight);
		$db->sql_uquery('DELETE FROM '.$prefix.'_blocks WHERE bid='.$bid);
		$db->sql_uquery('DELETE FROM '.$prefix.'_blocks_custom WHERE bid='.$bid);
		Cache::array_delete('blocks_list');
		URL::redirect(URL::admin());
	}
	cpg_delete_msg(URL::admin('&amp;del='.$bid), sprintf(_ERROR_DELETE_CONF, '<strong>'.(defined($title) ? constant($title) : $title).'</strong>'));
} else if (isset($_GET['save'])) {
	BlocksEditSave(intval($_GET['save']));
} else {
	if (isset($_POST['add']) && !BlocksAdd()) {
		rssfail();
		return;
	}
	if (Security::check_post()) {
		$sides = array('l','c','r','d','n');
		$count = count($_POST['id']);
		$blocks = blocks_list();
		$mid = intval($_POST['mid']);
		$module = $db->sql_escape_string($_POST['module']);
		for ($i=0; $i<$count; ++$i) {
			if (!intval($_POST['id'][$i])) continue;
			if ($_POST['id'][$i] < 0 ) {
				$side = $_POST['side'][$i];
				$pos=1;
			} else {
				$bid = intval($_POST['id'][$i]);
				if ($side == 'n') {
					$db->sql_query('DELETE FROM '.$prefix."_blocks_custom WHERE bid=$bid AND mid=$mid");
				} else if (empty($blocks[$module][$bid])) {
					$db->sql_query('INSERT INTO '.$prefix."_blocks_custom (bid, mid, side, weight) VALUES ($bid, $mid, '$side', $pos)");
				} else if ($_POST['weight'][$i] != $pos || $_POST['side'][$i] != $side && isset($blocks[$module][$bid])) {
					$db->sql_query('UPDATE '.$prefix."_blocks_custom SET weight=$pos, side='$side' WHERE bid=$bid AND mid=$mid");
				}
				++$pos;
			}
		}
		Cache::array_delete('blocks_list');
		URL::redirect(URL::admin('blocks'));
	}
	BlocksAdmin();
}

function BlocksAdmin()
{
	global $bgcolor2, $bgcolor3, $prefix, $db, $currentlang, $cpgtpl, $modheader, $MAIN_CFG;
	$modheader .= '
<script type="text/javascript" src="themes/default/javascript/adminblocks.js"></script>
<link rel="stylesheet" href="themes/default/style/tabletree.css" type="text/css" media="screen" />
<link rel="stylesheet" href="themes/default/style/adminblocks.css" type="text/css" media="screen" />';
	require('header.php');
	GraphicAdmin('_AMENU1');

	$cpgtpl->assign_vars(array(
		'B_MULTILINGUAL' => $MAIN_CFG['global']['multilingual'],
		'S_BGCOLOR2' => $bgcolor2,
		'S_BB' => bbcode_table('content', 'addblock', 1),
		'U_BLOCKS' => URL::admin('blocks'),
		'U_HEADLINES' => URL::admin('headlines'),
		'SEL_GROUP' => group_selectbox('view', 0, true)
	));
#
# $blocks and $all arrays sharing the same query
#
	$result = $db->sql_query('SELECT bid, bkey, title, url, bposition, weight, active, blanguage, blockfile, view FROM '.$prefix.'_blocks ORDER BY weight');
	$blocks = array();
	while($row = $db->sql_fetchrow($result, SQL_ASSOC)) {
		$blocks[$row['bid']] = $row;
		if (defined($row['title'])) $row['title'] = constant($row['title']);
		$all[$row['title'].$row['bid']] = $row;
	}
	$bgcolor = $bgcolor3;
	$visblocks = array();
#
# javascript blocks table
#
	$blocks_list = blocks_list();
	foreach ($blocks_list as $title => $module) {
		$sides = array('l'=> 0, 'c'=>0, 'd'=>0, 'r'=>0);
		$cpgtpl->assign_block_vars('modules', array(
			'S_MODULE_TITLE' => defined($module['title']) ? constant($module['title']) : $title,
			'S_MODULE_OTITLE' => $title,
			'S_MODULE_ID' => $module['mid'],
			'L_MODULE_ACTIVE' => (is_active($title) || $module['mid'] == -1) ? _YES : _NO,
			'L_MODULE_SIDE' => _BLOCKS.': '.(($module['blocks']==0)?_NONE : (($module['blocks']==1)?_LEFT : (($module['blocks']==2)?_RIGHT : _BOTH)))
		));
		foreach ($module as $bid => $side) {
		if (!intval($bid)) continue;
			$bgcolor = ($bgcolor == '') ? $bgcolor3 : '';
			$cpgtpl->assign_block_vars('modules.loop_'.$side, array(
				'BID' => $bid,
				'S_WEIGHT' => ++$sides[$side],
				'S_TITLE' => (defined($blocks[$bid]['title']) ? constant($blocks[$bid]['title']) : $blocks[$bid]['title'])
			));
		}
#
# add new block
#
		if ($module['mid'] == -1) continue;
		$cpgtpl->assign_block_vars((is_active($title)) ? 'active' : 'inactive' , array(
			'S_MOD_VALUE' => $module['mid'],
			'S_MOD_TITLE' => defined($module['title']) ? constant($module['title']) : $module['title'],
		));
	}
	$blocks = NULL;
#
# static blocks table
#
	ksort($all);
	foreach ($all as $block) {
		$bgcolor = ($bgcolor == '') ? $bgcolor3 : '';
		$visblocks[$block['blockfile']] = true;
		$bkey = false;

		if ($block['bkey'] == 'admin' || $block['bkey'] == 'userbox') {
			$type = _BLOCKSYSTEM;
		} else {
			$bkey = true;
			if ($block['bkey'] == 'custom') { $type = 'Custom'; }
			elseif ($block['bkey'] == 'rss') { $type = 'RSS/RDF'; }
			elseif ($block['bkey'] == 'file') { $type = _BLOCKFILE2; }
		}
		if ($block['active']) {
			$active = 'checked.gif';
			$change = _DEACTIVATE;
		} else {
			$active = 'unchecked.gif';
			$change = _ACTIVATE;
		}
		if ($block['view'] == 0) {
			$who_view = _MVALL;
		} elseif ($block['view'] == 1) {
			$who_view = _MVUSERS;
		} elseif ($block['view'] == 2) {
			$who_view = _MVADMIN;
		} elseif ($block['view'] == 3) {
			$who_view = _MVANON;
		} elseif ($block['view'] >3) {		 // <= phpBB User Groups Integration
			list($who_view) = $db->sql_ufetchrow('SELECT group_name FROM '.$prefix.'_bbgroups WHERE group_id='.($block['view'] - 3), SQL_NUM);
		}

		$cpgtpl->assign_block_vars('list', array(
			'S_BID' => $block['bid'],
			'S_BKEY' => $bkey,
			'S_LAST' => !next($all),
			'S_WEIGHT' => $block['weight'],
			'S_BGCOLOR' => $bgcolor,
			'S_TITLE' => $block['title'],
			'S_TYPE' => $type,
			'L_CHANGE' => $change,
			'L_WHO_VIEW' => $who_view,
			'L_BLANGUAGE' => (($block['blanguage'] == '') ? _ALL : ucfirst($block['blanguage'])),
			'S_IMG_ACTIVE' => $active
		));
	}

	$headlines[0] = _CUSTOM;
	$res = $db->sql_query("select hid, sitename from ".$prefix."_headlines");
	while (list($hid, $htitle) = $db->sql_fetchrow($res)) {
		$headlines[$hid] = $htitle;
	}
	$blocksdir = dir('blocks');
	while($func=$blocksdir->read()) {
	   if(preg_match('#block-(.*).php$#', $func, $matches)) {
			$blockslist[] = $func;
		}
	}
	closedir($blocksdir->handle);
	natcasesort($blockslist);
	for ($i=0; $i < sizeof($blockslist); $i++) {
		if (!empty($blockslist["$i"]) && !isset($visblocks[$blockslist["$i"]])) {
			$bl = str_replace('_',' ',(preg_replace('#(block-|\.php)#','',$blockslist["$i"])));
			$selblocks[$blockslist["$i"]]=$bl;
		}
	}
	$selblocks['']= _NONE;
	$cpgtpl->assign_vars(array(
		'SEL_HEADLINES' => select_box('headline', 0, $headlines),
		'SEL_BLOCKS' => select_box('blockfile', '', $selblocks),
		'SEL_LANG' => lang_selectbox($currentlang, 'blanguage')
	));

	$cpgtpl->set_handle('body', 'admin/blocks.html');
	$cpgtpl->display('body');
}

function block_show($bid)
{
	global $prefix, $db, $Blocks;
	$result = $db->sql_query("SELECT bid, bkey, title, content, url, bposition, blockfile, view, refresh, time FROM ".$prefix."_blocks WHERE bid='".$bid."'");
	$row = $db->sql_fetchrow($result, SQL_ASSOC);
	$Blocks->preview = TRUE;
	require('header.php');
	GraphicAdmin('_AMENU1');
	OpenTable();
	$Blocks->preview($row);
	echo '<div style="text-align:center;" class="option">'._BLOCKSADMIN.': '._FUNCTIONS.'</div><br /><br />'
	.'[ <a href="'.URL::admin('blocks&amp;change='.$bid).'">'._ACTIVATE.'</a> | <a href="'.URL::admin('blocks&amp;edit='.$bid).'">'._EDIT.'</a> | ';
	if (empty($row['bkey'])) {
		echo '<a href="'.URL::admin('blocks&amp;del='.$bid).'">'._DELETE.'</a> | ';
	}
	echo '<a href="'.URL::admin('blocks').'">'._BLOCKSADMIN.'</a> ]';
	CloseTable();
}

function rssfail()
{
	require('header.php');
	GraphicAdmin('_AMENU1');
	$cpgtpl->set_handle('body', 'admin/rssfail.html');
	$cpgtpl->display('body');
}

function BlocksEdit($bid) {
	global $prefix, $db, $MAIN_CFG, $pagetitle, $cpgtpl;
	$pagetitle .= ' '._BC_DELIM.' '._EDITBLOCK;
	require('header.php');
	GraphicAdmin('_AMENU1');
	list($title, $bkey, $content, $url, $bposition, $weight, $active, $refresh, $blanguage, $blockfile, $view) = $db->sql_ufetchrow("SELECT title, bkey, content, url, bposition, weight, active, refresh, blanguage, blockfile, view FROM ".$prefix."_blocks WHERE bid='".$bid."'",SQL_NUM);
	$typebb = $typerss = $typefile = false;

	$blocks_edit_vars = array(
		'S_NAME' => $title,
		'S_BID' => $bid,
		'S_WEIGHT' => $weight,
		'S_NAME_DEF' => (defined($title) ? constant($title):str_replace('_', ' ',$title)).":",
		'U_BLOCKS' => URL::admin('blocks'),
		'MULTILANG' => $MAIN_CFG['global']['multilingual'],
		'BPOSITION' => $bposition,
		'SEL_POSITION' => select_box('bposition', $bposition, array('l'=>_LEFT,'c'=>_CENTERUP,'d'=>_CENTERDOWN,'r'=>_RIGHT)),
		'SEL_ACTIVATE' => yesno_option('active', $active),
		'SEL_GROUP' => group_selectbox('view', $view, true),
		'S_VIEW_COMMENT' => 'Default '._ACTIVE,
	);

	if ($MAIN_CFG['global']['multilingual']) {
		$blocks_edit_vars += array(
			'SEL_LANG' => lang_selectbox($blanguage, 'blanguage'),
		);
	}
	switch ($bkey) {
		case 'file':
			$typefile = true;
			$blocksdir = dir('blocks');
			while($func=$blocksdir->read()) {
				if(substr($func, 0, 6) == 'block-') {
					$bl = str_replace('_',' ',substr($func,6,-4));
					$blockslist[$func] = $bl;
				}
			}
			closedir($blocksdir->handle);
			ksort($blockslist);
			$blocks_edit_vars += array(
				'S_BLOCK_OP' => select_box('blockfile', $blockfile, $blockslist),
				'S_BLOCK_INFO' => _FILEINCLUDE,
			);
			break;

		case 'rss':
			$typerss = true;
			$blocks_edit_vars += array(
				'S_BLOCK_OP' => $url,
				'SEL_REFRESH' => select_box('refresh', $refresh, array('1800'=>'1/2 '._HOUR,'3600'=>'1 '._HOUR,'18000'=>'5 '._HOURS,'36000'=>'10 '._HOURS,'86400'=>'24 '._HOURS)),
			);
			break;

		case 'admin':
		case 'custom':
			$typebb = true;
			$blocks_edit_vars += array(
				'S_BLOCK_OP' => bbcode_table('content', 'blocksedit', 1),
				'S_BLOCK_INFO' => $content,
			);
			break;

		default :
			break;
	}
	$blocks_list = blocks_list();
	foreach($blocks_list as $module => $data) {
		$cpgtpl->assign_block_vars(($data['mid'] == -1)?'admin':(is_active($module) ? 'active' : 'inactive') , array(
			'S_MOD_VALUE' => $data['mid'],
			'S_MOD_TITLE' => defined($data['title']) ? constant($data['title']) : $data['title'],
			'S_MOD_SELECTED' => isset($data[$bid]) ? ' selected="selected"' : '',
		));
	}
	$blocks_edit_vars += array(
		'TYPEFILE' => $typefile,
		'TYPERSS' => $typerss,
		'TYPEBB' => $typebb,
	);
	$cpgtpl->assign_vars($blocks_edit_vars);
	$cpgtpl->set_handle('body', 'admin/blocks_edit.html');
	$cpgtpl->display('body');
}

function BlocksAdd() {
	global $prefix, $db;
	if (!Security::check_post()) cpg_error(_SEC_ERROR);

	$insert['bkey'] = '';
	$insert['title'] = $_POST['title'];
	$insert['content'] = $_POST['content'];
	$insert['url'] = $_POST['url'];
	$insert['bposition'] = $_POST['bposition'];
	$insert['active'] = $_POST['active'];
	$insert['refresh'] = $_POST['refresh'];
	$headline = intval($_POST['headline']);
	$insert['blanguage'] = $_POST['blanguage'];
	$insert['blockfile'] = $_POST['blockfile'];
	$insert['view'] = intval($_POST['view']);
	$insert['in_module'] = '';

	if ($headline != 0) {
		$result = $db->sql_query('SELECT sitename, headlinesurl FROM '.$prefix."_headlines WHERE hid='$headline'");
		list($insert['title'], $insert['url']) = $db->sql_fetchrow($result);
	}
	# might be removed later on
	$result = $db->sql_query('SELECT weight FROM '.$prefix.'_blocks WHERE bposition=\''.$insert['bposition'].'\' ORDER BY weight DESC');
	list($insert['weight']) = $db->sql_fetchrow($result);
	$insert['weight']++;
	# end
	if ($insert['blockfile'] != '') {
		$insert['bkey'] = 'file';
		if ($insert['title'] == '') {
			$insert['title'] = preg_replace('#(block-|\.php)#','',$insert['blockfile']);
			$insert['title'] = str_replace('_',' ',$insert['title']);
		}
	} else if ($insert['url'] != '') {
		$insert['bkey'] = 'rss';
		$insert['time'] = time();
		if (!strpos($insert['url'], '://')) { $insert['url'] = 'http://'.$insert['url']; }
		require_once(CORE_PATH.'classes/rss.php');
		if (!($insert['content'] = CPG_RSS::format(CPG_RSS::read($insert['url'])))) { return false; }
	} else {
		$insert['bkey'] = 'custom';
	}
	if ($insert['content'] == '' && $insert['blockfile'] == '') { return false;	}
	$db->sql_insert($prefix.'_blocks', $insert);
	$bid = $db->sql_nextid('bid');
	$count = count($_POST['in_module']);
	for ($i=0;$i<$count;$i++) {
		if (!intval($_POST['in_module'][$i])) {
			continue;
		} else {
			$in_modules[intval($_POST['in_module'][$i])] = intval($_POST['in_module'][$i]);
		}
	}
	$result = $db->sql_uquery('SELECT mid, MAX(weight) FROM '.$prefix.'_blocks_custom WHERE mid IN ('.implode(',', $in_modules).') GROUP BY mid');
	while ($row = $db->sql_fetchrow($result, SQL_NUM)) {
		$in_modules[$row[0]] = $row[1];
	}

	$values = '';
	foreach ($in_modules as $mid => $pos) {
		$in_modules[$mid] = "($bid, $mid, '{$insert['bposition']}', $pos+1)";
	}
	$db->sql_uquery('INSERT INTO '.$prefix.'_blocks_custom (bid, mid, side, weight) VALUES '.implode(',', $in_modules));
	Cache::array_delete('blocks_list');
	return true;
}
function BlocksEditSave($bid) {
	global $prefix, $db;
	if (!Security::check_post()) cpg_error(_SEC_ERROR);

	$update['title'] = $_POST['title'];
	$update['content'] = $_POST['content'];
	$update['url'] = empty($_POST['url']) ? '' : $_POST['url'];
	$oldposition = $_POST['oldposition'];
	$update['bposition'] = $_POST['bposition'];
	$update['active'] = $_POST['active'];
	$update['refresh'] = isset($_POST['refresh']) ? intval($_POST['refresh']) : 0;
	$update['blanguage'] = $_POST['blanguage'];
	$update['blockfile'] = empty($_POST['blockfile']) ? '' : $_POST['blockfile'];
	$update['view'] = intval($_POST['view']);
	$update['weight'] = intval($_POST['weight']);
	$update['in_module'] = '';

	if ($update['url'] != '') {
		$update['time'] = time();
		if (0 !== stripos($update['url'], 'http://')) { $update['url'] = 'http://'.$update['url']; }
		require_once(CORE_PATH.'classes/rss.php');
		if (!($update['content'] = CPG_RSS::format(CPG_RSS::read($update['url'])))) {
			rssfail();
			return;
		}
	}
	# can be removed
	if ($oldposition != $update['bposition']) {
		$db->sql_query('UPDATE '.$prefix.'_blocks SET weight=weight+1 WHERE weight>='.$update['weight']." AND bposition='$update[bposition]'");
		$db->sql_query('UPDATE '.$prefix.'_blocks SET weight=weight-1 WHERE weight>'.$update['weight']." AND bposition='$oldposition'");
	}
	$db->sql_update($prefix.'_blocks', $update, 'bid='.$bid);


	$count = empty($_POST['in_module']) ? 0 : count($_POST['in_module']);
	for ($i=0;$i<$count;$i++) {
		if (!intval($_POST['in_module'][$i])) {
			continue;
		} else {
			$new_in_modules[intval($_POST['in_module'][$i])] = intval($_POST['in_module'][$i]);
		}
	}

	$table_data = array();
	# select all data
	$result = $db->sql_query('SELECT a.mid, a.bid, MAX(b.weight) FROM '.$prefix.'_blocks_custom a, '.$prefix.'_blocks_custom b GROUP BY a.mid, a.bid');
	if ($db->sql_numrows($result)) {
		while ($row = $db->sql_fetchrow($result, SQL_NUM)) {
			# block is there but module id has not been posted so delete from it
			if ($row[1] == $bid && !isset($new_in_modules[$row[0]])) {
				$db->sql_uquery('DELETE FROM '.$prefix."_blocks_custom WHERE bid=$bid AND mid=".$row[0]);
				$db->sql_uquery('UPDATE '.$prefix."_blocks_custom SET weight=weight-1 WHERE weight>{$row[2]} AND mid=".$row[0]);
			} else if ($row[1] == $bid && isset($new_in_modules[$row[0]])) {
				# module id has been posted and it exists within the table: clearing posteded data
				$new_in_modules[$row[0]] = '';
			}
			if (!isset($table_data[$row[0]])) {
				# save what we need for later use
				$table_data[$row[0]] = $row[2];
			}
		}
		$db->sql_freeresult($result);
	}
	$values = array();
	# insert anything left from the posted data
	if (!empty($new_in_modules)) {
		foreach($new_in_modules as $mid) {
			if (!empty($mid)) $values[] = "('$bid', '$mid', '{$update['bposition']}', '".($table_data[$mid]+1)."')";
		}
	}
	if (!empty($values)) {
		$db->sql_uquery('INSERT INTO '.$prefix.'_blocks_custom (bid, mid, side, weight) VALUES '.implode(',', $values));
	}
	Cache::array_delete('blocks_list');
	URL::redirect(URL::admin('blocks'));
}
