<?php
/*********************************************
  CPG-Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2006 by CPG Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Wiki/modules/Wiki/manage.php,v $
  $Revision: 1.9 $
  $Author: phoenix $
  $Date: 2010/11/27 06:40:04 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }
require_once("modules/$module_name/inc/functions.php");
require(CORE_PATH.'wysiwyg/wysiwyg.inc');

if (!is_user()) {
	cpg_error('You are not allowed to edit/create documents, please login or register');
} elseif (isset($_POST['content']) && !(isset($_POST['wysiwyg']) || isset($_POST['preview']))) {
	if (!can_admin($module_name)) {
		$msg = (intval($_POST['page_id']) > 0) ? 'replace the current page.' : 'be added.';
		$db->sql_query('INSERT INTO '.$module_prefix."_pages_wait (page_id, parent_id, title, user_id, comment, body) VALUES ("
			.intval($_POST['page_id']).", "
			.intval($_POST['parent_id']).", '"
			.Fix_Quotes($_POST['title'])."', "
			.is_user().", '"
			.Fix_Quotes($_POST['comment'])."', '"
			.Fix_Quotes($_POST['content'])."')");
		cpg_error('Page is added and is awaiting approval to '.$msg, '', $MAIN_CFG['server']['path'].URL::index());
	}
	// page_id is used for modifications
	if (intval($_POST['page_id']) > 0) {
		$id = intval($_POST['page_id']);
		$sql = 'UPDATE '.$module_prefix."_pages SET"
			.' parent_id='.intval($_POST['parent_id'])
			.', active=1'
			.", title='".Fix_Quotes($_POST['title'])
			."', version=version+1"
			.', supercede='.time()
			.', upd_user_id='.is_user()
			.", upd_author='".Fix_Quotes($userinfo['username'])
			."', comment='".Fix_Quotes($_POST['comment'])
			."', body='".Fix_Quotes($_POST['content'])
			."' WHERE id=$id";
		$db->sql_query($sql);
	} else {
		list($pos) = $db->sql_ufetchrow("SELECT COUNT(*) FROM ".$module_prefix."_pages WHERE parent_id=".intval($_POST['parent_id']));
		$sql = 'INSERT INTO '.$module_prefix.'_pages (parent_id, active, pos, title, time, user_id, author, comment, body) VALUES ('
			.intval($_POST['parent_id']).', 1, '.($pos+1).", '"
			.Fix_Quotes($_POST['title'])."', "
			.time().', '
			.is_user().", '"
			.Fix_Quotes($userinfo['username'])."', '"
			.Fix_Quotes($_POST['comment'])."', '"
			.Fix_Quotes($_POST['content'])."')";
		$db->sql_query($sql);
		$id = $db->sql_nextid('id');
	}
	cpg_error('Page is added', '', $MAIN_CFG['server']['path'].URL::index('&id='.$id));
} else {
	$row['id'] = 0;
	$row['parent_id'] = 0;
	$row['title'] = '';
	$row['comment'] = '';
	$row['content'] = '<b>nothing</b> yet';
	if (isset($_POST['wysiwyg']) || isset($_POST['preview'])) {
		$row['id'] = $_POST['page_id'];
		$row['parent_id'] = $_POST['parent_id'];
		$row['title'] = $_POST['title'];
		$row['comment'] = $_POST['comment'];
		if (isset($_POST['content'])) {
			$row['content'] = $_POST['content'];
		}
	} elseif (isset($_GET['id'])) {
		$page = $db->sql_ufetchrow("SELECT * FROM ".$module_prefix."_pages WHERE id=".intval($_GET['id']), SQL_ASSOC);
		if (!empty($page['id'])) {
			$row = $page;
			$row['content'] = $page['body'];
			unset($row['body']);
		}
		unset($page);
	}
	$wysiwyg = new Wysiwyg('wiki_content', 'content', '100%', '400px', $row['content']);
	$wysiwyg->setHeader();

	require_once('header.php');

	if (isset($_POST['preview'])) {
		$cpgtpl->assign_block_vars('preview', array(
			'S_TITLE' => $row['title'],
			'S_COMMENT' => $row['comment'],
			'S_BODY' => $row['content']
		));
	}
	$cpgtpl->assign_vars(array(
		'G_STARTFORM' => open_form(URL::index('&amp;file=manage'), 'wiki_content', "Manage $module_name Content").'<input type="hidden" name="page_id" value="'.$row['id'].'" />',
		'G_ENDFORM' => close_form(),
		'S_WYSSEL' => $wysiwyg->getSelect(),
		'S_TITLE' => 'Title: <input type="text" name="title" value="'.htmlspecialchars($row['title']).'" style="width: 50%" />',
		'S_COMMENT' => 'Comment: <input type="text" name="comment" value="'.htmlspecialchars($row['comment']).'" style="width: 50%" />',
		'S_PARENT' => 'Parent page: '.wiki_create_select($row['parent_id']),
		'S_WYSIWYG' => $wysiwyg->getHTML(),
		'S_PREVIEW' => '<input type="submit" name="preview" value="Preview" />',
		'S_SUBMIT' => (isset($_POST['preview'])) ? '<input type="submit" name="add_wiki" value="Submit" />' : ''
	));
	$cpgtpl->set_filenames(array('body' => 'wiki/manage.html'));
	$cpgtpl->display('body');
}
