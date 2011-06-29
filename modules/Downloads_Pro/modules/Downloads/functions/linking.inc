<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/functions/linking.inc,v $
  $Revision: 1.7 $
  $Author: phoenix $
  $Date: 2010/11/08 03:05:51 $
******************************************************/
if (!defined('CPG_NUKE')) { exit; }

function spam_image($email) {
    global $textcolor2;
    $tred = hexdec(substr($textcolor2, 1, 2));
    $tgreen = hexdec(substr($textcolor2, 3, 2));
    $tblue = hexdec(substr($textcolor2, -2));
    
    if (!($string = base64_decode($email))) { cpg_error(sprintf(_ERROR_BAD_CHAR, 'email')); }
    header('Content-type: image/png');
    $im = imagecreate(imagefontwidth(2)*strlen($string), imagefontheight(2));
    $transparent = imagecolorallocate($im, 255, 255, 255);
    $text_color = imagecolorallocate($im, $tred, $tgreen, $tblue);
    imagecolortransparent($im, $transparent);
    imagestring($im, 2, 0, 0, $string, $text_color);
    imagepng($im);
}
function spam_protect($email) {
    global $dl_config;
    if ($dl_config['im_spam_protect'] && extension_loaded('gd')) {
        return '<img src="'.URL::index('&amp;email='.base64_encode($email)).'" alt="" />';
    } else {
        return str_replace(array('@', '.'), array(' <em>at</em> ', ' <em>dot</em> '), $email);
    }
}
function update_views($id) {
    global $db, $dl_prefix;
    $time = time();
    $time_year = generate_date($time, 'Y');
    $time_month = generate_date($time, 'm');
    if (!$db->sql_query("UPDATE ".$dl_prefix."_stats 
			SET views=views+1 
			WHERE id='$id' AND (year='$time_year') AND (month='$time_month')", true) || !$db->sql_affectedrows()) {
        $db->sql_query('INSERT INTO '.$dl_prefix."_stats 
		VALUES (id, year, month, hits, views)
		($id, $time_year, $time_month, 0, 1)", false);
    }
}
function can_download($active=1, $access=0, $error=false) {
    global $dl_config, $module_name;
    if ($active != 1 && !can_admin($module_name)) {
        if ($error) { cpg_error(_DLP_INACTIVEDL); }
        return false;
    }
    if (is_admin()) return true;
    if (!is_user() && ($access > 0 || !($dl_config['anon_dl'] || $dl_config['anon_dl_remote']))) {
        if ($error) { cpg_error(_DLP_REGISTER2DL); }
        return false;
    } elseif ($access == 2) {
        if ($error) { cpg_error(_DLP_ADMINDL); }
        return false;
    } elseif ($access > 3 && !in_group($access-3)) {
        if ($error) {
            global $db, $prefix;
            list($group_name) = $db->sql_ufetchrow("SELECT group_name FROM ".$prefix."_bbgroups 
			WHERE group_id=".($access-3));
            cpg_error(sprintf(_DLP_GROUPDL, $group_name));
        }
        return false;
    }
    return true;
}
function dl_image($filename) {
    global $CPG_SESS, $module_name;
    return (file_exists('themes/'.$CPG_SESS['theme'].'/images/downloads/'.$filename) ? 'themes/'.$CPG_SESS['theme'].'/images/downloads/'.$filename : 'themes/default/images/downloads/'.$filename);
}
function dl_thumbimage($img_name) {
	if (empty($img_name) || ereg('://', $img_name)) { return ''; }
	$extension = substr(strrchr($img_name, '.'), 1);
	$thumb_name = preg_replace('#\.'.$extension.'$#', "_thumb.$extension", $img_name);
	if (file_exists($thumb_name)) {
		return $thumb_name;
	} else {
		$thumb_name = basename($img_name);
		$img_dir = dirname($img_name);
		if (file_exists($img_dir.'/thumb_'.$thumb_name)) {
			return $img_dir.'/thumb_'.$thumb_name;
		}
	}
}
