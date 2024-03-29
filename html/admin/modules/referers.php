<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | referers.php - NexOS Administration Backend file                  |
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
if (!can_admin('referers')) { die('Access Denied'); }
$pagetitle .= ' '._BC_DELIM.' '._HTTPREFERERS;
global $bgcolor3, $db, $prefix;

if (isset($_GET['del']) && $_GET['del'] == 'all') {
	$db->sql_query('DELETE FROM '.$prefix.'_referer');
	URL::redirect(URL::admin());
} else {
	require_once('header.php');
	GraphicAdmin('_AMENU6');
	$result = $db->sql_query('SELECT url FROM '.$prefix.'_referer');
	$bgcolor = '';
	if ($db->sql_numrows($result) > 0) {
		$cpgtpl->assign_vars(array(
			'U_DELREFERERS' => URL::admin('&amp;del=all'),
		));
		while (list($url) = $db->sql_fetchrow($result)) {
			$bgcolor = ($bgcolor == '') ? ' style="background: '.$bgcolor3.'"' : '';
			$cpgtpl->assign_block_vars('referer', array(
				'URL' => $url,
				'CLR' => $bgcolor,
			));
		}
		$cpgtpl->set_filenames(array('body' => 'admin/referers.html'));
		$cpgtpl->display('body');
		$cpgtpl->__destruct();
	} else {
		OpenTable();
		echo sprintf(_ERROR_NONE_TO_DISPLAY, strtolower(_HTTPREFERERS));
		CloseTable();
	}
}