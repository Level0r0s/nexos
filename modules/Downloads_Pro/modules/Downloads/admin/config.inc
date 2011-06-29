<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/admin/config.inc,v $
  $Revision: 1.10 $
  $Author: phoenix $
  $Date: 2010/11/08 03:05:51 $
******************************************************/
if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin($op)) { die('Access Denied'); }
$pagetitle .= ' '._BC_DELIM.' '.$op;
require_once('modules/'.$op.'/functions/display.inc');

$section = isset($_GET['s']) ? intval($_GET['s']) : 1;
if (isset($_POST['save_cfg'])) {
	if ($CPG_SESS['admin']['page'] != $op) { cpg_error(_ERROR_BAD_LINK, _SEC_ERROR); }
	$sections = array(
		1=>array('front_rank', 'user_catparent', 'def_sort', 'im_spam_protect'),
		array('perpage', 'r_perpage'),
		array('use_fetch', 'use_fetch_remote', 'leech_local', 'leech_remote', 'anon_dl', 'anon_dl_remote', 'md5_local', 'md5_remote', 'pub_mirror'),
		array('r_active', 'r_queue'),
		array('screen_active', 'screen_max', 'dimension', 'dimension_thumb', 'watermark', 'quality'),
		array('upl_file', 'upl_image', 'size_file', 'path_file', 'size_image', 'path_image', 'ext_file', 'ext_image')
	);
	foreach ($sections[$section] as $key) {
		if (isset($_POST[$key]) && $_POST[$key] != $dl_config[$key]) {
			$db->sql_query("UPDATE ".$prefix."_config_custom 
				SET cfg_value='".Fix_Quotes($_POST[$key])."' 
				WHERE cfg_field='$key' AND cfg_name='".strtolower($op)."'");
		}
	}
	Cache::array_delete('MAIN_CFG');
	URL::redirect(URL::admin('&file=config&s='.$section));
}
$sections = array(1=>'General', 'Pagination', 'Permissions', 'Reviews', 'Screenshots', 'Uploading');
$pagetitle .= ' '._BC_DELIM.' Configuration '._BC_DELIM.' '.$sections[$section];
require_once('header.php');
GraphicAdmin('_AMENU6');
OpenTable();
if ($MAIN_CFG['global']['admin_help']) {
	echo '<div align="center">
<script language="JavaScript" type="text/javascript">
<!--'."
maketip('php_max','PHP Max','This option is set in php.ini as: upload_max_filesize');
".'// -->
</script></div>';
}
echo dl_admin_menu().'<br /><hr /><br />
<span class="genmed"><strong>Configuration '._BC_DELIM.' '.$sections[$section].'</strong></span><br />
Control various options that will change the operation of this module.<br /><br />';
for ($i=1; $i<=count($sections); $i++) {
	echo (($section == $i) ? '<strong>'.$sections[$i].'</strong>' : '<a href="'.URL::admin("&amp;file=config&amp;s=$i").'">'.$sections[$i].'</a>');
	echo ($i < count($sections)) ? " |\n" : '';
}
echo '<br /><br />
<form action="'.URL::admin('&amp;file=config&amp;s='.$section).'" method="post" enctype="multipart/form-data" accept-charset="utf-8">
<table border="0" cellpadding="3" cellspacing="1" class="forumline">';
if ($section == 1) {
	echo '
 <tr>
   <td class="row1"><span class="genmed">Number of downloads to rank on front page</span></td>
   <td class="row2"><input type="text" name="front_rank" id="front_rank" size="3" maxlength="2" value="'.$dl_config['front_rank'].'" /></td>
 </tr><tr>
   <td class="row1"><span class="genmed">Allow users to add downloads in parent categories</span></td>
   <td class="row2">'.yesno_option('user_catparent', $dl_config['user_catparent']).'</td>
 </tr><tr>
   <td class="row1"><span class="genmed">Default sort order in category view</span></td>
   <td class="row2">'.select_box('def_sort', $dl_config['def_sort'], array(1=>'Title: a-z', 'Title: z-a', 'Published: old to new', 'Published: new to old', 'Updated: old to new', 'Updated: new to old', 'Rating: lowest to highest', 'Rating: highest to lowest')).'</td>
 </tr><tr>
   <td class="row1"><span class="genmed">Enable image spam protection for email addresses</span></td>
   <td class="row2">'.yesno_option('im_spam_protect', $dl_config['im_spam_protect']).'</td>
 </tr>';
}
elseif ($section == 2) {
	echo '
 <tr>
   <td class="row1"><span class="genmed">Downloads per page in category view</span></td>
   <td class="row2"><input type="text" name="perpage" id="perpage" size="3" maxlength="2" value="'.$dl_config['perpage'].'" /></td>
 </tr><tr>
   <td class="row1"><span class="genmed">Reviews per page in download details</span></td>
   <td class="row2"><input type="text" name="r_perpage" id="r_perpage" size="3" maxlength="2" value="'.$dl_config['r_perpage'].'" /></td>
 </tr>';
}
elseif ($section == 3) {
	echo '
 <tr>
   <th>Option</th>
   <th>Local files</th>
   <th>Remote files</th>
 </tr><tr>
   <td class="row1"><span class="genmed">Enable security code for download access</span></td>
   <td class="row2">'.yesno_option('use_fetch', $dl_config['use_fetch']).'</td>
   <td class="row2">'.yesno_option('use_fetch_remote', $dl_config['use_fetch_remote']).'</td>
 </tr><tr>
   <td class="row1"><span class="genmed">Use anti-leech on files</span></td>
   <td class="row2">'.yesno_option('leech_local', $dl_config['leech_local']).'</td>
   <td class="row2">'.yesno_option('leech_remote', $dl_config['leech_remote']).'</td>
 </tr><tr>
   <td class="row1"><span class="genmed">Allow anonymous users to download</span></td>
   <td class="row2">'.yesno_option('anon_dl', $dl_config['anon_dl']).'</td>
   <td class="row2">'.yesno_option('anon_dl_remote', $dl_config['anon_dl_remote']).'</td>
 </tr><tr>
   <td class="row1"><span class="genmed">Enable MD5 sums</span></td>
   <td class="row2">'.yesno_option('md5_local', $dl_config['md5_local']).'</td>
   <td class="row2">'.yesno_option('md5_remote', $dl_config['md5_remote']).'</td>
 </tr><tr>
   <td class="row1"><span class="genmed">Allow registered users to submit mirrors</span><br /><span class="gensmall">(pending admin/download owner approval)</span></td>
   <td class="row2" colspan="2">'.yesno_option('pub_mirror', $dl_config['pub_mirror']).'</td>
 </tr>';
}
elseif ($section == 4) {
	echo '
 <tr>
   <td class="row1"><span class="genmed">Enable reviews system</span></td>
   <td class="row2">'.yesno_option('r_active', $dl_config['r_active']).'</td>
 </tr><tr>
   <td class="row1"><span class="genmed">Require approval on all reviews</span></td>
   <td class="row2">'.yesno_option('r_queue', $dl_config['r_queue']).'</td>
 </tr>';
}
elseif ($section == 5) {
	echo '
 <tr>
   <td class="row1"><span class="genmed">Enable screenshots</span></td>
   <td class="row2">'.yesno_option('screen_active', $dl_config['screen_active']).'</td>
 </tr><tr>
   <td class="row1"><span class="genmed">Max screenshots per download</span></td>
   <td class="row2"><input type="text" name="screen_max" id="screen_max" size="5" maxlength="4" value="'.$dl_config['screen_max'].'" /></td>
 </tr><tr>
   <td class="row1"><span class="genmed">Max dimension of screenshot</span><br /><span class="gensmall">Using max aspect</span></td>
   <td class="row2"><input type="text" name="dimension" id="dimension" size="5" maxlength="4" value="'.$dl_config['dimension'].'" /></td>
 </tr><tr>
   <td class="row1"><span class="genmed">Max dimension of thumbnails</span><br /><span class="gensmall">Using max aspect</span></td>
   <td class="row2"><input type="text" name="dimension_thumb" id="dimension_thumb" size="5" maxlength="3" value="'.$dl_config['dimension_thumb'].'" /></td>
 </tr><tr>
   <td class="row1"><span class="genmed">Watermark uploaded images</span></td>
   <td class="row2">'.yesno_option('watermark', $dl_config['watermark']).'</td>
 </tr><tr>
   <td class="row1"><span class="genmed">Quality of uploaded JPEG files</span></td>
   <td class="row2"><input type="text" name="quality" id="quality" size="4" maxlength="3" value="'.$dl_config['quality'].'" /> %</td>
 </tr>';
}
elseif ($section == 6) {
	echo '
 <tr>
   <th>Option</th>
   <th>Files</th>
   <th>Screenshots</th>
 </tr><tr>
   <td class="row1" nowrap="nowrap"><span class="genmed">Enable uploading</span></td>
   <td class="row2">'.yesno_option('upl_file', $dl_config['upl_file']).'</td>
   <td class="row2">'.yesno_option('upl_image', $dl_config['upl_image']).'</td>
 </tr><tr>
   <td class="row1" nowrap="nowrap"><span class="genmed">Maximum file size</span><br /><span class="gensmall"'.show_tooltip('php_max').'>PHP Max: '.ini_get('upload_max_filesize').'</span></td>
   <td class="row2"><input type="text" name="size_file" id="size_file" size="11" maxlength="10" value="'.$dl_config['size_file'].'" /> bytes</td>
   <td class="row2"><input type="text" name="size_image" id="size_image" size="11" maxlength="10" value="'.$dl_config['size_image'].'" /> bytes</td>
 </tr><tr>
   <td class="row1" nowrap="nowrap"><span class="genmed">Upload path</span><br /><span class="gensmall">No trailing slash!</span></td>
   <td class="row2"><input type="text" name="path_file" id="path_file" size="46" maxlength="45" value="'.$dl_config['path_file'].'" /> '.(is_writable($dl_config['path_file']) ? '<img src="images/update/green.png" alt="Writable" title="Writable" align="middle" />' : '<img src="images/update/red.png" alt="Not writable" title="Not writable" align="middle" />').'</td>
   <td class="row2"><input type="text" name="path_image" id="path_image" size="46" maxlength="45" value="'.$dl_config['path_image'].'" /> '.(is_writable($dl_config['path_image']) ? '<img src="images/update/green.png" alt="Writable" title="Writable" align="middle" />' : '<img src="images/update/red.png" alt="Not writable" title="Not writable" align="middle" />').'</td>
 </tr><tr>
   <td class="row1" nowrap="nowrap"><span class="genmed">Allowed file extensions</span><br /><span class="gensmall">Separated by spaces</span></td>
   <td class="row2"><input type="text" name="ext_file" id="ext_file" size="46" value="'.$dl_config['ext_file'].'" /></td>
   <td class="row2"><input type="text" name="ext_image" id="ext_image" size="46" maxlength="45" value="'.$dl_config['ext_image'].'" /></td>
 </tr>';
}
echo '
 <tr>
   <td align="center" class="catbottom" colspan="3"><input class="mainoption" type="submit" name="save_cfg" value="'._SAVECHANGES.'" />&nbsp;&nbsp;<input class="liteoption" type="reset" value="'._RESET.'" /></td>
 </tr>
</table></form>';
CloseTable();
