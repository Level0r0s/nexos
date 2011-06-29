<?php
/*********************************************
  CPG-Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2006 by CPG Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Wiki/modules/Wiki/index.php,v $
  $Revision: 1.4 $
  $Author: phoenix $
  $Date: 2010/11/04 01:24:06 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }
require_once("modules/$module_name/inc/functions.php");
//define('MEMBER_BLOCK', true);
if (isset($_GET['id'])) {
	$page_id = intval($_GET['id']);
	$page = $db->sql_ufetchrow("SELECT * FROM ".$module_prefix."_pages WHERE id=$page_id", SQL_ASSOC);
	if (!$page || empty($page['title'])) { cpg_error('Page doesn\'t exist'); }

	$page_no = '';
	$crumbs[] = '<a href="'.URL::index().'">'.$module_name.'</a>';
	if ($page['parent_id'] > 0) {
		$parents = array();
		get_parents($page['parent_id'], $parents);
		foreach($parents AS $parent) {
			$page_no .= "$parent[pos].";
			$crumbs[] = '<a href="'.URL::index('&amp;id='.$parent['id']).'">'.$parent['title'].'</a>';
		}
	}
	$crumbs[] = $page['title'];
	$crumbs = implode(' '._BC_DELIM.' ', $crumbs);
	$pagetitle = strip_tags($crumbs);
	$tree = $page;
	$tree['sub'] = list_all($page['id'], false);
	$tree = go_up($tree);

	require_once('header.php');

	$cpgtpl->assign_vars(array(
		'G_ID' => '1',
		'U_CRUMBS' => '<span style="float: left;">'.$crumbs.'</span>',
		'U_ADDPAGE' => (is_user()) ? '<a href="'.URL::index('&amp;file=manage').'">Add new page</a>' : '',
		'U_EDITPAGE' => (isset($_GET['id']))? '&nbsp;|&nbsp;<a href="'.URL::index('&amp;file=manage&amp;id='.intval($_GET['id'])).'">Edit this page</a>' : '',
		'U_TREE' => create_tree($page_id, $tree),
		'S_PAGE' => $page_no,
		'S_SUBPAGE' => $page['pos'],
		'S_TITLE' => $page['title'],
		'S_COMMENT' => $page['comment'],
		'S_BODY' => $page['body'],
		'S_AUTHOR' => 'Author:&nbsp;<a href="'.URL::index('Your_Account&amp;profile='.$page['user_id']).'">'.$page['author'].'</a>',
		'S_CREATED' => 'Created:&nbsp;'.formatDateTime($page['time'], _DATESTRING),
		'S_UPDATED' => ($page['supercede']) ? 'Last update: '.formatDateTime($page['supercede'], _DATESTRING).' by <a href="'.URL::index('Your_Account&amp;profile='.$page['upd_user_id']).'">'.$page['upd_author'].'</a>' : ''
	));
	$cpgtpl->set_filenames(array('body' => 'wiki/index.html'));
	$cpgtpl->display('body');
} else {
	$pagetitle = $module_name;
	require_once('header.php');

	$cpgtpl->assign_vars(array(
		'G_ID' => '',
		'S_TITLE' => $sitename.' Wiki',
		'U_ADDPAGE' => (is_user()) ? '<a href="'.URL::index('&amp;file=manage').'">Add new page</a>' : ''
	));
	$result = $db->sql_query("SELECT * FROM ".$module_prefix."_pages WHERE parent_id=0 ORDER BY pos");
	if ($db->sql_numrows($result) > 0) {
	        while ($row = $db->sql_fetchrow($result)) {
			$cpgtpl->assign_block_vars('pages', array(
				'U_PAGE' => '<li><b><a href="'.URL::index("&amp;id=".$row['id']).'">'.$row['title'].'</a></b><br />'.$row['comment'].'</li>'
			));
		}
	}
	$cpgtpl->set_filenames(array('body' => 'wiki/index.html'));
	$cpgtpl->display('body');
}
