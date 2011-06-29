<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/themes/default/theme.php,v $
  $Revision: 1.21 $
  $Author: nanocaiordo $
  $Date: 2011/04/17 10:06:50 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }
define('THEME_VERSION', '9.1.0.0');

$gfxcolor = '#C0C000';
$bgcolor1 = '#FFFFFF';
$bgcolor2 = '#D3DFE3';
$bgcolor3 = '#EFEFEF';
$bgcolor4 = '#FFC53A';
$textcolor1 = '#009900';
$textcolor2 = '#000000';

function OpenTable() {
	echo '<div class="table1">';
}
function OpenTable2() {
	echo '<div class="table2">';
}

function CloseTable() {
	echo '</div>';
}
function CloseTable2() {
	echo '</div>';
}

function themeheader() {
	global $mainindex, $adminindex, $cpgtpl, $CPG_SESS, $MAIN_CFG, $Blocks;
	$imgr = $imgl = '';
	// left blocks ?
	if (isset($Blocks->data[$Blocks::LEFT])) {
		$img = $Blocks->hideblock('600') ? 'plus.gif' : 'minus.gif';
		$imgl = '<img alt="'._TOGGLE.'" title="'._TOGGLE.'" id="pic600" src="themes/'.$CPG_SESS['theme'].'/images/'.$img.'" onclick="blockswitch(\'600\');" style="cursor:pointer; float:left; padding:2px 0 2px 0;" />';
	}
	// right blocks ?
	if (isset($Blocks->data[$Blocks::RIGHT])) {
		$img = $Blocks->hideblock('601') ? 'plus.gif' : 'minus.gif';
		$imgr = '<img alt="'._TOGGLE.'" title="'._TOGGLE.'" id="pic601" src="themes/'.$CPG_SESS['theme'].'/images/'.$img.'" onclick="blockswitch(\'601\');" style="cursor:pointer; float:right; padding:2px 0 2px 0;" />';
	}
	CSS::add('themes/'.$CPG_SESS['theme'].'/style/style.css', 'screen', true);

	if ($MAIN_CFG['global']['admingraphic'] & 4) {
		CSS::add('themes/'.$CPG_SESS['theme'].'/style/cpgmm.css', 'screen', true);
		include('includes/cssmainmenu.php');
	}

	if (CSS::add('themes/'. $CPG_SESS['theme']. '/style/'. Client::$name. Client::$version. '.css', 'screen', true)) {
		CSS::add('themes/'. $CPG_SESS['theme']. '/style/'. Client::$name. Client::$version. '.custom.css');
	}
	elseif (CSS::add('themes/'. $CPG_SESS['theme']. '/style/'. Client::$name. '.css', 'screen', true)) {
		CSS::add('themes/'. $CPG_SESS['theme']. '/style/'. Client::$name. '.custom.css');
	}

	JS::add('includes/javascript/blockscript.js');

	$cpgtpl->assign_vars(array(
		'CSS_DATA'      => CSS::flushToTpl(),
		'JS_DATA'       => JS::flushToTpl(),
		'PUBLIC_HEADER' => !defined('ADMIN_PAGES'),
		'B_L_VISIBLE'   => $Blocks->hideblock('600') ? 'style="display: none"' : '',
		'G_LEFTIMAGE'   => $imgl,
		'G_RIGHTIMAGE'  => $imgr,
		'S_TOGGLE'      => _TOGGLE,
		'S_IS_ADMIN'    => is_admin(),
		'S_CAN_ADMIN'   => can_admin(),
		'S_IS_USER'     => is_user(),
		'S_LOGO'        => $MAIN_CFG['global']['site_logo'],
		'S_SITENAME'    => $MAIN_CFG['global']['sitename'],
		'S_HOME'        => _HOME,
		'S_DOWNLOADS'   => is_active('Downloads') ? _DownloadsLANG : false,
		'S_FORUMS'      => _ForumsLANG,
		'S_MY_ACCOUNT'  => is_user() ? _Your_AccountLANG : _BREG,
		'S_ADMIN'       => _ADMINISTRATION,
		'S_BANNER'      => ($MAIN_CFG['global']['banners']) ? viewbanner() : '',
		'U_MAININDEX'   => $mainindex,
		'U_DOWNLOADS'   => URL::index('Downloads'),
		'U_FORUMS'      => URL::index('Forums'),
		'U_MY_ACCOUNT'  => URL::index(is_user() ? 'Your_Account' : 'Your_Account&amp;file=register'),
		'U_ADMININDEX'  => $adminindex,
		'S_MAIN_MENU'   => isset($mmcontent) ? $mmcontent : false
	));
	$Blocks->display('l');
}

function themefooter() {
	global $cpgtpl, $db, $Blocks;
	$Blocks->display('r');
	$cpgtpl->assign_vars(array(
		'B_R_VISIBLE'   => $Blocks->hideblock('601') ? 'style="display: none"' : '',
		'B_R_HIDDEN'    => $Blocks->hideblock('601') ? '' : 'style="display: none"',
		'S_FOOTER'      => footmsg()
	));
	$cpgtpl->set_filenames(array('footer' => 'footer.html'));
	$cpgtpl->display('footer');
}

/***********************************************************************************

 string theme_open_form

 Creates start tag for form
	$link : link for action default blank
	$form_name : useful for styling and nbbcode
	$legend: optional string value is used in form lagend tag
	$border: optional use 1 to not show border on fieldset from stylesheet
************************************************************************************/
function theme_open_form($link, $form_name=false, $legend=false, $tborder=false) {
	$leg = $legend ? "<legend>$legend</legend>" : '';
	$bord = $tborder ? $tborder : '';
	$form_name	= $form_name ? ' id="'.$form_name.'"' :'';
	return '<form method="post" action="'.$link.'"'.$form_name.' enctype="multipart/form-data" accept-charset="utf-8"><fieldset '.$bord.'>'.$leg;
}
function theme_close_form() {
	return '</fieldset></form>';
}
/***********************************************************************************

 string theme_yesno_option

 Creates 2 radio buttons with a Yes and No option
	$name : name for the <input>
	$value: current value, 1 = yes, 0 = no

************************************************************************************/
function theme_yesno_option($name, $value=0) {
	$sel[(!$value)] = '';
	$sel[$value] = ' selected="selected"';
	$select = '<select class="set" name="'.$name.'" id="'.$name."\">\n";
	$select .= '<option value="1"'.$sel[1].">"._YES."</option>\n";
	$select .= '<option value="0"'.$sel[0].">"._NO."</option>\n";
	return $select.'</select>';
}
/***********************************************************************************

 string theme_select_option

 Creates a selection dropdown box of all given variables in the array
	$name : name for the <select>
	$value: current/default value
	$array: array like array("value1","value2")

************************************************************************************/
function theme_select_option($name, $value, array $array) {
	$sel[$value] = ' selected="selected"';
	$select = '<select class="set" name="'.$name.'" id="'.$name."\">\n";
	foreach($array as $var) {
		$select .= '<option'.(isset($sel[$var])?$sel[$var]:'').">$var</option>\n";
	}
	return $select.'</select>';
}
/***********************************************************************************

 string theme_select_box

 Creates a selection dropdown box of all given variables in the multi array
	$name : name for the <select>
	$value: current/default value
	$array: array like array("value1 => title1","value2 => title2")

************************************************************************************/
function theme_select_box($name, $value, array $array) {
	$select = '<select class="set" name="'.$name.'" id="'.$name."\">\n";
	foreach($array as $val => $title) {
		$select .= "<option value=\"$val\"".(($val==$value)?' selected="selected"':'').">$title</option>\n";
	}
	return $select.'</select>';
}
