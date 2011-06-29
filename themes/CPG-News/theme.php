<?php
/*********************************************
  CPG-News Theme is released under the terms and conditions
  of the CPG Open Source License Agreement version 1
  Copyright (c) 2004 by Akamu Akamai
  http://www.cpgnuke.com

  $Source: /cvs/themes/CPG-News/theme.php,v $
  $Revision: 1.13 $
  $Author: phoenix $
  $Date: 2008/08/26 23:46:57 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

$gfxcolor = '#C0C000';
$bgcolor1 = '#FFFFFF';
$bgcolor2 = '#D3DFE3';
$bgcolor3 = '#EFEFEF';
$bgcolor4 = '#FFC53A';
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
    global $slogan, $sitename, $banners, $mainindex, $adminindex, $cpgtpl,
           $db, $prefix, $site_logo, $MAIN_CFG, $CPG_SESS, $Blocks;
	if ($MAIN_CFG['global']['admingraphic'] & 4) {
		include('includes/cssmainmenu.php');
	}
    $imgr = $imgl = '';
    // left blocks ?
    if ($Blocks->l && ($Blocks->showblocks & 1)) {
        $img = $Blocks->hideblock('600') ? 'plus.gif' : 'minus.gif';
        $imgl = '<img alt="'._TOGGLE.'" title="'._TOGGLE.'" id="pic600" src="themes/'.$CPG_SESS['theme'].'/images/'.$img.'" onclick="blockswitch(\'600\');" style="cursor:pointer; float:left; padding-top:3px;" />';
    }
    // right blocks ?
    if ($Blocks->r && ($Blocks->showblocks & 2)) {
        $img = $Blocks->hideblock('601') ? 'plus.gif' : 'minus.gif';
        $imgr = '<img alt="'._TOGGLE.'" title="'._TOGGLE.'" id="pic601" src="themes/'.$CPG_SESS['theme'].'/images/'.$img.'" onclick="blockswitch(\'601\');" style="cursor:pointer; float:right; padding-top:3px;" />';
    }
    $result =  $db->sql_uquery("SELECT topicid, topictext FROM ".$prefix."_topics ORDER BY topictext");
    while ($row =  $db->sql_fetchrow($result, SQL_NUM)) {
        $toplist[$row[0]] = $row[1];
    }
	$user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
	$css_ie = ereg('MSIE 7.0', $user_agent) ? 'ie7' : (ereg('MSIE ([0-6].[0-9]{1,2})', $user_agent) ? 'ie6' : ((isset($_SESSION['SECURITY']['UA']) && $_SESSION['SECURITY']['UA'] == 'Safari') ? 'safari' : ((isset($_SESSION['SECURITY']['UA']) && $_SESSION['SECURITY']['UA'] == 'Opera') ? 'opera' : '')));
    $cpgtpl->assign_vars(array(
		'CSS_IE'		=> ($css_ie) ? '<link rel="stylesheet" type="text/css" href="themes/'.$CPG_SESS['theme'].'/style/'.$css_ie.'.css" />' : '',
        'PUBLIC_HEADER' => !defined('ADMIN_PAGES'),
        'B_L_VISIBLE' => $Blocks->hideblock('600') ? 'style="display: none"' : '',
        'BLOG_ENABLED' => is_active('Blogs'),
        'G_LEFTIMAGE'  => $imgl,
        'G_RIGHTIMAGE' => $imgr,
		'S_TOGGLE'		=> _TOGGLE,
		'S_SEARCH'		=> _SEARCH,
        'S_IS_ADMIN'   => is_admin(),
        'S_CAN_ADMIN'  => can_admin(),
        'S_IS_USER'    => is_user(),
        'S_LOGO'       => $site_logo,
        'S_SITENAME'   => $sitename,
        'S_WELCOME'    => _WELCOMETO,
        'S_HOME'       => _HOME,
        'S_BLOG'       => _BlogsLANG,
        'S_DOWNLOADS'  => _DownloadsLANG,
        'S_GALLERY'    => _coppermineLANG,
        'S_FORUMS'     => _ForumsLANG,
        'S_MY_ACCOUNT' => _Your_AccountLANG,
        'S_NEWS'       => _NewsLANG,
        'S_ADMIN'      => _ADMINISTRATION,
        'S_BANNER'     => ($banners)?viewbanner():'',
        'U_MAININDEX'  => $mainindex,
        'U_NEWS'       => getlink('News'),
        'U_SEARCH'     => getlink('Search'),
        'U_DOWNLOADS'  => getlink('Downloads'),
        'U_FORUMS'     => getlink('Forums'),
        'U_GALLERY'    => getlink('coppermine'),
        'U_BLOG'       => getlink('Blogs'),
        'U_MY_ACCOUNT' => getlink('Your_Account'),
        'U_ADMININDEX' => $adminindex,
		'S_MAIN_MENU'	=> isset($mmcontent) ? $mmcontent : false
        )
    );
    $Blocks->display('l');
}

function themefooter() {
    global $cpgtpl, $Blocks;
    $Blocks->display('r');
    $cpgtpl->assign_vars(array(
        'B_R_VISIBLE' => $Blocks->hideblock('601') ? 'style="display: none"' : '',
        'S_FOOTER'    => footmsg()
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
function theme_open_form($link, $form_name=false, $legend=false,$tborder=false,$method='post') {
    $leg = $legend ? "<legend>$legend</legend>" : '';
    $bord = $tborder ? $tborder : '';
    $form_name  = $form_name ? ' name="'.$form_name.'" id="'.$form_name.'"' :'';
    return '<form method="'.$method.'" action="'.$link.'"'.$form_name.' enctype="multipart/form-data" accept-charset="utf-8"><fieldset'.$bord.'>'.$leg;
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
    $sel[$value] = ' selected="selected"';
    $select = '<select class="set" name="'.$name.'" id="'.$name."\">\n";
    foreach($array as $val => $title) {
        $select .= "<option value=\"$val\"".(isset($sel[$val]) ? $sel[$val] : '').">$title</option>\n";
    }
    return $select.'</select>';
}
