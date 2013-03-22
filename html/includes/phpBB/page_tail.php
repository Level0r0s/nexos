<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | block-Sample.php - Example NexOS block file                       |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      |
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |
  +-------------------------------------------------------------------+
  */
/***************************************************************************
 *								page_tail.php
 *							  -------------------
 *	 begin				  : Saturday, Feb 13, 2001
 *	 copyright			  : (C) 2001 The phpBB Group
 *	 email				  : support@phpbb.com
 *
 *	 Modifications made by CPG Dev Team http://cpgnuke.com
 *	 Last modification notes:
 *
 *	 $Id: page_tail.php,v 9.5 2008/07/31 14:23:31 nanocaiordo Exp $
 *
 *
 ***************************************************************************/
if (!defined('IN_PHPBB')) { exit; }

global $module_name;
$template->assign_vars(array(
	'PHPBB_VERSION' => '1' . $board_config['version'],
	'TRANSLATION_INFO' => (isset($lang['TRANSLATION_INFO'])) ? $lang['TRANSLATION_INFO'] : '',
	'ADMIN_LINK' => (can_admin($module_name) ? '<a href="'.URL::admin($module_name).'">'.$lang['Admin_panel'].'</a><br /><br />' : ''),
	'S_SIMPLE_FOOTER'=> $gen_simple_header
	)
);

$template->display('body');
if (empty($gen_simple_header)) {
	if(!isset($_GET['printertopic'])) CloseTable();
	require_once('footer.php');
} else {
	$template->destroy();
}
