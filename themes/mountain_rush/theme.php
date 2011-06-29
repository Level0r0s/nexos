<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/themes/mountain_rush/theme.php,v $
  $Revision: 1.10 $
  $Author: phoenix $
  $Date: 2008/12/08 03:21:52 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }
define('THEME_VERSION', '9.1.0.0');

$gfxcolor = '#1d2c68';
$bgcolor1 = '#FFFFFF';
$bgcolor2 = '#D1D7DC';
$bgcolor3 = '#DEE3E7';
$bgcolor4 = '#AA2525';
$textcolor1 = '#009900';
$textcolor2 = '#000000';
$hr = 1; # 1 to have horizonal rule in comments instead of table bgcolor

function OpenTable() {
    echo '<div class="table3">';
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
	global $slogan, $sitename, $mainindex, $adminindex, $cpgtpl, $db, $prefix, 
	$banners, $site_logo, $userinfo, $pagetitle, $module_name, $file, $op, 
	$CPG_SESS, $MAIN_CFG, $Blocks;
	if ($MAIN_CFG['global']['admingraphic'] & 4) {
		include('includes/cssmainmenu.php');
	}
    if (!isset($module_name)) $module_name = false;
    if (!isset($file)) $file = 'index';
    if (!isset($op) || !defined('ADMIN_PAGES')) unset($op);
    $imgr = $imgl = '';
    // left blocks
    if ($Blocks->l) {
        $img = $Blocks->hideblock('600') ? 'plus.png' : 'minus.png';
        $imgl = '<img alt="'._TOGGLE.'" title="'._TOGGLE.'" id="pic600" src="themes/'.$CPG_SESS['theme'].'/images/'.$img.'" onclick="blockswitch(\'600\');" style="cursor:pointer; float:left; padding:2px 0 4px 0;" />';
    }
    // right blocks
    if ($Blocks->r) {
        $img = $Blocks->hideblock('601') ? 'plus.png' : 'minus.png';
        $imgr = '<img alt="'._TOGGLE.'" title="'._TOGGLE.'" id="pic601" src="themes/'.$CPG_SESS['theme'].'/images/'.$img.'" onclick="blockswitch(\'601\');" style="cursor:pointer; float:right; padding:2px 0 4px 0;" />';
    }
    
    $bc = $pagetitle;
    $bc_parts = explode(' '._BC_DELIM.' ', $pagetitle);
    if (defined('ADMIN_PAGES') && !isset($op)) {
        $bc = '<a class="white" href="'.$adminindex.'">'.$bc_parts[0].'</a>';
    } elseif (defined('ADMIN_PAGES') && is_admin() && isset($op) && isset($bc_parts[1]) && (file_exists('modules/'.$op.'/admin/index.inc') || file_exists('admin/modules/'.$op.'.php'))) {
        $bc = '<a class="white" href="'.adminlink($op.(($file != 'index') ? '&amp;file='.$file : '')).'">'.$bc_parts[1].'</a>';
    } elseif (isset($module_name) && file_exists('modules/'.$module_name.'/index.php')) {
        $bc = '<a class="white" href="'.getlink($module_name).'">'.$bc_parts[0].'</a>';
    } elseif (isset($module_name) && $module_name == 'credits' || $module_name == 'privacy_policy') {
        $bc = '<a class="white" href="'.getlink($module_name).'">'.$bc_parts[0].'</a>';
    }
    if (isset($module_name) && !defined('ADMIN_PAGES') && $file != 'index') {
        $bc .= ' '._BC_DELIM.' <a class="white" href="'.getlink($module_name.'&amp;file='.$file).'">'.$bc_parts[1].'</a>';
    }
    if (count($bc_parts) > 1) {
        $a = ((isset($module_name) || defined('ADMIN_PAGES')) && $file == 'index' && !isset($op)) ? 1 : 2;
        for ($i=$a; $i<count($bc_parts); $i++) {
            $bc .= ' '._BC_DELIM.' '.$bc_parts[$i];
        }
    }

	$user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
	$css_ie = ereg('MSIE 7.0', $user_agent) ? 'ie7' : (ereg('MSIE ([0-6].[0-9]{1,2})', $user_agent) ? 'ie6' : ((isset($_SESSION['SECURITY']['UA']) && $_SESSION['SECURITY']['UA'] == 'Safari') ? 'safari' : ((isset($_SESSION['SECURITY']['UA']) && $_SESSION['SECURITY']['UA'] == 'Opera') ? 'opera' : '')));
	$cpgtpl->assign_vars(array(
		'CSS_IE'		=> ($css_ie) ? '<link rel="stylesheet" type="text/css" href="themes/'.$CPG_SESS['theme'].'/style/'.$css_ie.'.css" />' : '',
		'PUBLIC_HEADER' => !defined('ADMIN_PAGES'),
		'ADMIN_PAGES'   => (defined('ADMIN_PAGES') && is_admin()),
		'B_L_VISIBLE'   => $Blocks->hideblock('600') ? 'style="display: none"' : '',
		'G_LEFTIMAGE'   => $imgl,
		'G_RIGHTIMAGE'  => $imgr,
		'S_TOGGLE'		=> _TOGGLE,
		'S_BC'          => _BC_DELIM,
		'S_IS_ADMIN'    => is_admin(),
		'S_CAN_ADMIN'   => can_admin(),
		'S_IS_USER'     => is_user(),
		'S_LOGO'		=> $site_logo,
		'S_SITENAME'    => $sitename,
		'S_HOME'        => _HOME,
		'S_DOWNLOADS'   => is_active('Downloads') ? _DownloadsLANG : false,
		'S_FORUMS'      => _ForumsLANG,
		'S_MY_ACCOUNT'  => _Your_AccountLANG,
		'S_ADMIN'       => _ADMINISTRATION,
		'A_LOGOUT'      => is_admin().' | <a class="white" href="'.adminlink('logout').'">'._LOGOUT.'</a>',
		'S_BANNER'		=> ($banners) ? viewbanner() : '',
		'U_MAININDEX'   => $mainindex,
		'U_DOWNLOADS'   => getlink('Downloads'),
		'U_FORUMS'      => getlink('Forums'),
		'U_MY_ACCOUNT'  => getlink('Your_Account'),
		'U_TRANSLATE'   => getlink('CPGlang'),
		'U_ADMININDEX'  => $adminindex,
		'I18N'          => 'enctype="multipart/form-data" accept-charset="utf-8"',
		'WELCOME'       => is_user() ? 'Welcome '.$userinfo['username'] : 'Welcome '._ANONYMOUS,
		'BREADCRUMB'    => ((defined('ADMIN_PAGES') && $op != 'logout' && $file != 'index' && !isset($bc_parts[1])) ? $bc : ' '._BC_DELIM.' '.$bc),
		'S_MAIN_MENU'   => isset($mmcontent) ? $mmcontent : false
        )
    );
    $Blocks->display('l');
}

function themefooter() {
    global $showblocks, $banners, $cpgtpl, $foot1, $foot2, $foot3, $copyright,
		$start_time, $db, $Blocks;
    $Blocks->display('r');
    $cpgtpl->assign_vars(array(
        'B_R_VISIBLE'   => $Blocks->hideblock('601') ? 'style="display: none"' : '',
        'S_BANNER'      => ($banners) ? viewbanner() : '',
        'S_FOOTER'      => footmsg()
        )
    );
    $cpgtpl->set_filenames(array('footer' => 'footer.html'));
    $cpgtpl->display('footer');
}

/***********************************************************************************

 string theme_open_form

 Creates start tag for form
    $get_link : link for action default blank
    $form_name : useful for styling and nbbcode
    $legend: optional string value is used in form lagend tag
    $border: optional use 1 to not show border on fieldset from stylesheet
************************************************************************************/
function theme_open_form($link, $form_name=false, $legend=false, $tborder=false) {
    $leg = $legend ? "<legend>$legend</legend>" : '';
    $bord = $tborder ? $tborder : '';
    $form_name  = $form_name ? ' name="'.$form_name.'" id="'.$form_name.'"' :'';
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
    $select = '<select class="set" name="'.$name."\">\n";
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
function theme_select_option($name, $value, $array) {
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
function theme_select_box($name, $value, $array) {
    $select = '<select class="set" name="'.$name.'" id="'.$name."\">\n";
    foreach($array as $val => $title) {
        $select .= "<option value=\"$val\"".(($val==$value) ? ' selected="selected"' : '').">$title</option>\n";
    }
    return $select.'</select>';
}