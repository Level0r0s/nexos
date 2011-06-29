<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/themes/PH2/theme.php,v $
  $Revision: 1.19 $
  $Author: pitcher $
  $Date: 2005/06/16 20:26:57 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }
$gfxcolor = '#ff6100';
$lnkcolor = '#006699';
$bgcolor1 = '#F2F2F2';
$bgcolor2 = '#ECEBE6';
$bgcolor3 = '#F0EFEA';
$bgcolor4 = '#F2F1ED';
$textcolor1 = '#000000';
$textcolor2 = '#006699';
$hr = 1; # 1 to have horizonal rule in comments instead of table bgcolor

global $ownpagetitle;

$ownpagetitle['News'] = 1;

function OpenTable() {
    echo '<br /><div class="messageblock">';
}

function OpenTable2() {
    echo '<div class="opentable2">';
}

function CloseTable() {
    echo '</div>';
}

function CloseTable2() {
    echo '</div>';
}

function themeheader() {
    global $slogan, $sitename, $banners, $mainindex, $adminindex, $index, $cpgtpl,
           $ownpagetitle;
    $imgr = $imgl = '';
    // left blocks ?
    if (blocks_visible('l')) {
        $topblockl = '<td width="194"><img src="themes/PH2/images/left_block_top.jpg" height="12" alt="" /></td>';
        $img = hideblock('600') ? 'plus.gif' : 'minus.gif';
        $imgl = '<img align="left" alt="Toggle Content" title="Toggle Content" id="pic600" src="themes/PH2/images/'.$img.'" onclick="blockswitch(\'600\');" style="cursor:pointer" />';
    } else {
        $topblockl = '<td width="194" class="mtop_block"></td>';
    }
    // right blocks ?
    if (blocks_visible('r')) {
        $topblock = '<td width="194"><img src="themes/PH2/images/right_block_top.jpg" height="12" alt="" /></td>';
        $img = hideblock('601') ? 'plus.gif' : 'minus.gif';
        $imgr = '<img align="right" alt="Toggle Content" title="Toggle Content" id="pic601" src="themes/PH2/images/'.$img.'" onclick="blockswitch(\'601\');" style="cursor:pointer" />';
    } else {
        $topblock = '<td width="194" class="mtop_block"></td>';
    }

    $cpgtpl->assign_vars(array(
        'PUBLIC_HEADER' => !defined('ADMIN_PAGES'),
        'B_L_VISIBLE'  => hideblock('600') ? 'style="display: none"' : '',
        'G_LEFTIMAGE'  => $imgl,
        'G_RIGHTIMAGE' => $imgr,
        'S_IS_ADMIN'   => is_admin(),
        'S_CAN_ADMIN'  => can_admin(),
        'S_IS_USER'    => is_user(),
        'S_SITENAME'   => $sitename,
        'S_HOME'       => _HOME,
        'S_DOWNLOADS'  => _DownloadsLANG,
        'S_FORUMS'     => _ForumsLANG,
        'S_MY_ACCOUNT' => _Your_AccountLANG,
        'S_ADMIN'      => _ADMINISTRATION,
        'S_BANNER'     => ($banners)?viewbanner():'',
        'U_MAININDEX'  => $mainindex,
        'U_DOWNLOADS'  => getlink('Downloads'),
        'U_FORUMS'     => getlink('Forums'),
        'U_MY_ACCOUNT' => getlink('Your_Account'),
        'U_ADMININDEX' => $adminindex,
        'U_PRIVATE_M'  => getlink('Private_Messages'),
        'U_GALLERY'    => getlink('coppermine'),
        'U_SEARCH'     => getlink('Search'),
        'G_LBLOCK_TOP' => $topblockl,
        'G_RBLOCK_TOP' => $topblock,
        )
    );
    blocks('left');
}

function themefooter() {
    global $cpgtpl;
    blocks('right');
    $cpgtpl->assign_vars(array(
        'B_R_VISIBLE' => hideblock('601') ? 'style="display: none"' : '',
        'S_FOOTER'    => footmsg()
        )
    );
    $cpgtpl->set_filenames(array('footer' => 'footer.html'));
    $cpgtpl->display('footer');
}

/***********************************************************************************

 void themesidebox

 Output the specific block to left or right
    $title  : the title of the block
    $content: all formatted content for the block
    $bid    : the database record ID of the block

************************************************************************************/
function themesidebox($title, $content, $bid=0) {
    global $cpgtpl, $themeblockside;
    $cpgtpl->assign_block_vars($themeblockside.'block', array(
        'S_TITLE'   => $title,
        'S_CONTENT' => $content,
        'S_BID'     => $bid,
        'S_VISIBLE' => hideblock($bid) ? 'style="display:none"' : '',
        'S_HIDDEN'  => hideblock($bid) ? '' : 'style="display:none"',
        'S_IMAGE'   => 'themes/PH2/images/'.(hideblock($bid) ? 'plus.gif' : 'minus.gif')
        )
    );
    if ($themeblockside == '') {
        $cpgtpl->set_filenames(array('block' => 'block.html'));
        $cpgtpl->display('block');
    }
}

/***********************************************************************************

 string theme_open_form

 Creates start tag for form
    $get_link : link for action default blank
    $legend: optional string value is used in form lagend tag
    $border: optional use 1 to not show border on fieldset from stylesheet
************************************************************************************/
function theme_open_form($link, $form_name=false, $legend=false,$tborder=false) {
    $leg = $legend ? "<legend>$legend</legend>" : '';
    $bord = $tborder ? $tborder : '';
    $form_name  = $form_name ? ' name="'.$form_name.'" id="'.$form_name.'"' :'';
    return '<fieldset'.$bord.'>'.$leg.'<form method="post" action="'.$link.'"'.$form_name.' enctype="multipart/form-data" accept-charset="'._CHARSET.'">';
}


function theme_close_form() {
    return '</form></fieldset>';
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


//    $sel[intval($value)] = ' checked="checked"';
//    $sel[($value==0)] = '';
//    return '<input type="radio" name="'.$name.'" value="1"'.$sel[1].' />'._YES.' &nbsp; <input type="radio" name="'.$name.'" value="0" '.$sel[0].' />'._NO;

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
