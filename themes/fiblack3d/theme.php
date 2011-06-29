<?php
/* Theme Name: fisubsilver shadow                           */
/* Theme Design: coldblooded (www.nukemods.com)             */
/* version 3.0                                              */
/* Theme inspired by the phpbb2 style fiblack3d by          */
/* Daz (http://www.forumimages.com/)                        */
/* CPG NUKE 9.0 COMPLIANT                                   */
/* Released under GNU GPL	     							*/
if (!defined('CPG_NUKE')) { exit; }
define('THEME_VERSION', '9.1.0.0');

$gfxcolor = '#C0C000';
$bgcolor1 = '#303030';
$bgcolor2 = '#272727';
$bgcolor3 = '#303030';
$bgcolor4 = '#414141';
$textcolor1 = '#FFFFFF';
$textcolor2 = '#CCCCCC';
$hr = 1; # 1 to have horizonal rule in comments instead of table bgcolor

function OpenTable() {
    global $bgcolor1, $bgcolor2;
echo'
<table width="100%" border="0" cellspacing="0" cellpadding="4">
	<tr>
    	<td>
    		<table  align="center" width="100%" border="0" cellspacing="0" cellpadding="1">
	  			<tr>
	  				<td style="background:'.$bgcolor1.';">
	   					<table width="100%" border="0" cellspacing="0" cellpadding="0">
			        		<tr>
			          			<td>
			          				<table width="100%" border="0" cellspacing="1" cellpadding="0">
	                    				<tr>
											<td style="background:'.$bgcolor2.';">
												<table align="left" width="100%" border="0" cellspacing="0" cellpadding="4">
													<tr>
					                            		<td>';
}

function CloseTable() {
echo'
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>';
}

function OpenTable2() {
    global $bgcolor1, $bgcolor2;
echo'
<table width="100%" border="0" cellspacing="0" cellpadding="4">
	<tr>
		<td>
			<table width="100%" border="0" cellspacing="0" cellpadding="1">
			  	<tr>
					<td style="background:#006699;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td class="row1">
								<table width="100%" border="0" cellspacing="1" cellpadding="0">
									<tr>
										<td style="background:#EAEDF4;">
											<table width="100%" border="0" cellspacing="0" cellpadding="4">
												<tr> 
					                            	<td>';
}

function CloseTable2() {
echo'
											</td>
										</tr>
									</td>
								</tr>
							</td>
						</tr>
					</td>
				</tr>
			</table>
		</td>
	 </tr>
</table>';
}


function themeheader() {
    global $slogan, $sitename, $banners, $mainindex, $adminindex, $cpgtpl, $nukeurl,
	$themeblockside, $showblocks, $site_logo, $userinfo, $CPG_SESS, $MAIN_CFG, $Blocks;
	if ($MAIN_CFG['global']['admingraphic'] & 4) {
		include('includes/cssmainmenu.php');
	}
    $imgr = $imgl = '';
	// left blocks ?
	if ($Blocks->l) {
		$img = $Blocks->hideblock('600') ? 'plus.gif' : 'minus.gif';
		$imgl = '<img alt="'._TOGGLE.'" title="'._TOGGLE.'" id="pic600" src="themes/'.$CPG_SESS['theme'].'/images/'.$img.'" onclick="blockswitch(\'600\');" style="cursor:pointer; float:left; padding:2px 0 2px 0;" />';
	}
	// right blocks ?
	if ($Blocks->r) {
		$img = $Blocks->hideblock('601') ? 'plus.gif' : 'minus.gif';
		$imgr = '<img alt="'._TOGGLE.'" title="'._TOGGLE.'" id="pic601" src="themes/'.$CPG_SESS['theme'].'/images/'.$img.'" onclick="blockswitch(\'601\');" style="cursor:pointer; float:right; padding:2px 0 2px 0;" />';
	}
	$user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
	$css_ie = ereg('MSIE 7.0', $user_agent) ? 'ie7' : (ereg('MSIE ([0-6].[0-9]{1,2})', $user_agent) ? 'ie6' : ((isset($_SESSION['SECURITY']['UA']) && $_SESSION['SECURITY']['UA'] == 'Safari') ? 'safari' : ((isset($_SESSION['SECURITY']['UA']) && $_SESSION['SECURITY']['UA'] == 'Opera') ? 'opera' : '')));
    $cpgtpl->assign_vars(array(
		'CSS_IE'		=> ($css_ie) ? '<link rel="stylesheet" type="text/css" href="themes/'.$CPG_SESS['theme'].'/style/'.$css_ie.'.css" />' : '',
        'PUBLIC_HEADER'	=> !defined('ADMIN_PAGES'),
        'B_L_VISIBLE'	=> $Blocks->hideblock('600') ? 'style="display:none;"' : '',
		'B_L_HIDDEN'	=> $Blocks->hideblock('600') ? '' : 'style="display:none;"',
        'G_LEFTIMAGE'	=> $imgl,
        'G_RIGHTIMAGE'	=> $imgr,
		'S_TOGGLE'		=> _TOGGLE,
        'S_IS_ADMIN'	=> is_admin(),
		'S_CAN_ADMIN'	=> can_admin(),
        'S_IS_USER'		=> is_user(),
		'S_USER_INFO'	=> _BWEL.' '.(is_user() ? $userinfo['username'] : _ANONYMOUS),
        'S_LOGO'		=> $site_logo,
        'S_SITENAME'	=> $sitename,
        'S_URL'			=> $nukeurl,
        'S_HOME'		=> _HOME,
        'S_DOWNLOADS'	=> is_active('Downloads') ? _DownloadsLANG : false,
		'S_GALLERY'    => is_active('coppermine') ? _coppermineLANG : false,
        'S_FORUMS'		=> _ForumsLANG,
        'S_USERNAME'	=> $userinfo['username'],
		'S_MY_ACCOUNT'	=> is_user() ? _Your_AccountLANG : _BREG,
        'S_ADMIN'		=> _ADMINISTRATION,
        'S_BANNER'		=> ($banners) ? viewbanner() : '',
        'U_MAININDEX'	=> $mainindex,
        'U_DOWNLOADS'	=> getlink('Downloads'),
        'U_FORUMS'		=> getlink('Forums'),
        'U_REGISTER'    => getlink('Your_Account&amp;file=register'),
        'U_GALLERY'    => getlink('coppermine'),
        'U_MY_ACCOUNT'	=> getlink('Your_Account'),
        'U_ADMININDEX'	=> $adminindex,
		'S_MAIN_MENU'	=> isset($mmcontent) ? $mmcontent : false
        )
    );
	$Blocks->display('l');
}

function themefooter() {
    global $showblocks, $banners, $cpgtpl, $foot1, $foot2, $foot3, $copyright, 
	$start_time, $db, $themeblockside, $Blocks;
       $Blocks->display('r');
    $cpgtpl->assign_vars(array(
        'B_R_VISIBLE'   => $Blocks->hideblock('601') ? 'style="display:none;"' : '',
        'S_FOOTER'      => footmsg(),
		'S_BANNER'	   => ($banners) ? viewbanner() : ''
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
    global $cpgtpl, $themeblockside, $CPG_SESS, $Blocks;
    $cpgtpl->assign_block_vars($themeblockside.'block', array(
        'S_TITLE'   => $title,
        'S_CONTENT' => $content,
        'S_BID'     => $bid,
        'S_VISIBLE' => $Blocks->hideblock($bid) ? 'style="display:none;"' : '',
        'S_HIDDEN'  => $Blocks->hideblock($bid) ? '' : 'style="display:none;"',
        'S_IMAGE'   => 'themes/'.$CPG_SESS['theme'].'/images/'.($Blocks->hideblock($bid) ? 'plus' : 'minus')
    ));
    if ($themeblockside == '') {
        $cpgtpl->set_filenames(array('block' => 'block.html'));
        $cpgtpl->display('block');
    }
}
/***********************************************************************************

 string theme_open_form

 Creates start tag for form
    $get_link : link for action default blank
    $form_name : useful for styling and nbbcode
    $legend: optional string value is used in form lagend tag
    $border: optional use 1 to not show border on fieldset from stylesheet
************************************************************************************/
function theme_open_form($link, $form_name=false, $legend=false,$tborder=false) {
    $leg = $legend ? "<legend>$legend</legend>" : '';
    $bord = $tborder ? $tborder : '';
    $form_name  = $form_name ? ' id="'.$form_name.'"' :'';
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
