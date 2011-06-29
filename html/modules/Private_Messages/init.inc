<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/modules/Private_Messages/init.inc,v $
  $Revision: 9.9 $
  $Author: nanocaiordo $
  $Date: 2010/07/07 13:10:07 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }

if (!is_user()) {
	URL::redirect(URL::index('Your_Account'), true);
}

// Cancel
if (isset($_POST['cancel'])) {
	if (isset($_POST['folder']) || isset($_GET['folder'])) {
		$folder = isset($_POST['folder']) ? $_POST['folder'] : $_GET['folder'];
	} else {
		$folder = 'inbox';
	}
	URL::redirect(URL::index('&amp;folder='.$folder));
}

if ($module_title == '') {
	$mod_name = str_replace('_', ' ', $name);
} else {
	$mod_name = $module_title;
}

global $MAIN_CFG, $CPG_SESS;
get_lang('Forums');
require_once('includes/nbbcode.php');
require_once('modules/Your_Account/functions.php');

//define('MEMBER_BLOCK', true);
global $Blocks;
$block = array(
	'bid' => 10000,
	'view' => 1,
	'side' => 'l',
	'title' => _TB_BLOCK,
	'content' => member_block()
);
$Blocks->custom($block);
$block = NULL;
define('PM_READ_MAIL', 0);
define('PM_NEW_MAIL', 1);
define('PM_SENT_MAIL', 2);
define('PM_SAVED_IN_MAIL', 3);
define('PM_SAVED_OUT_MAIL', 4);
define('PM_UNREAD_MAIL', 5);

$html_entities_match = array('#&(?!(\#[0-9]+;))#', '#<#', '#>#');
$html_entities_replace = array('&amp;', '&lt;', '&gt;');

//
// Parameters
//
$submit = isset($_POST['post']);
$submit_search = isset($_POST['usersubmit']);
$submit_msgdays = isset($_POST['submit_msgdays']);
$preview = isset($_POST['preview']);
$confirm = isset($_POST['confirm']);
$delete	 = isset($_POST['delete']);
$delete_all = isset($_POST['deleteall']);
$save = isset($_POST['save']);

$refresh = $preview || $submit_search;

$mark_list = ( !empty($_POST['mark']) ) ? $_POST['mark'] : 0;

if ( isset($_POST['folder']) || isset($_GET['folder']) ) {
	$folder = ( isset($_POST['folder']) ) ? $_POST['folder'] : $_GET['folder'];
	if ( $folder != 'inbox' && $folder != 'outbox' && $folder != 'sentbox' && $folder != 'savebox' ) {
		$folder = 'inbox';
	}
} else {
	$folder = 'inbox';
}

//
// Var definitions
//
if ( !empty($_POST['mode']) || !empty($_GET['mode']) ) {
	$mode = ( !empty($_POST['mode']) ) ? $_POST['mode'] : $_GET['mode'];
	$mode = htmlprepare($mode);
} else {
	$mode = '';
}

$start = ( isset($_GET['start']) ) ? intval($_GET['start']) : 0;

if ( isset($_POST['p']) || isset($_GET['p']) ) {
	$privmsg_id = ( isset($_POST['p']) ) ? intval($_POST['p']) : intval($_GET['p']);
} else {
	$privmsg_id = '';
}

$error = FALSE;
$l_box_name = $lang[ucfirst($folder)];

