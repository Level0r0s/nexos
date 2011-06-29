<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/functions/info.inc,v $
  $Revision: 1.9 $
  $Author: phoenix $
  $Date: 2010/11/08 03:05:51 $
******************************************************/
if (!defined('CPG_NUKE')) { exit; }

function popularity($id, $text=false, $hits=-1, $views=-1) {
	global $CPG_SESS, $db, $dl_prefix, $module_name;
	static $year, $month, $hits_id, $most_hits, $views_id, $most_views;
	$save = false;
	$popularity = array();
	if (file_exists(BASEDIR.'cache/'.$module_name.'_popularity.php') && generate_date(time()-filemtime(BASEDIR.'cache/'.$module_name.'_popularity.php'), 'i') > 50) { Cache::array_delete('popularity', $module_name); }
	if (($popularity = Cache::array_load('popularity', $module_name, true)) && isset($popularity[$id])) {
		$pop = $popularity[$id];
	} else {
		//$popularity = array();
		$save = true;
	}
	if (!isset($pop)) {
		if (!isset($year)) {
			$time = time();
			$year = generate_date($time, 'Y');
			$month = generate_date($time, 'm');
			list($hits_id, $most_hits) = $db->sql_ufetchrow("SELECT id, hits FROM ".$dl_prefix."_stats 
			WHERE year=$year AND month=$month 
			ORDER BY hits DESC 
			", SQL_NUM);
			list($views_id, $most_views) = $db->sql_ufetchrow("SELECT id, views FROM ".$dl_prefix."_stats 
			WHERE year=$year AND month=$month 
			ORDER BY views DESC 
			", SQL_NUM);
		}
		if ($hits_id == $id || $views_id == $id) {
			$pop = 100;
		} else {
			if ($hits < 0 || $views < 0) {
				list($hits, $views) = $db->sql_ufetchrow("SELECT hits, views FROM ".$dl_prefix."_stats 
				WHERE id=$id AND year=$year AND month=$month", SQL_NUM, __FILE__, __LINE__);
			}
			$views = ($views == $most_views) ? 100 : round(100/$most_views*$views);
			$hits  = ($hits	 == $most_hits)	 ? 100 : round(100/$most_hits*$hits);

			$pop = ($views < $hits) ? $hits : $views;
		}
	}
	$popularity[$id] = $pop;
	if ($save) {
		Cache::array_save('popularity', $module_name, $popularity);
	}
	if ($pop > 80) {
		$img = '5';
		$alt = '5/5: '._DLP_VPOPULAR;
	} elseif ($pop > 55) {
		$img = '4';
		$alt = '4/5: '._POPULAR;
	} elseif ($pop > 30) {
		$img = '3';
		$alt = '3/5: '._DLP_AVG;
	} elseif ($pop > 15) {
		$img = '2';
		$alt = '2/5: '._DLP_SBAVG;
	} else {
		$img = '1';
		$alt = '1/5: '._DLP_NPOPULAR;
	}
	return ($text) ? $alt : '<img src="'.dl_image('pop/'.$img.'.png').'" alt="'.$alt.'" title="'.$alt.'" />';
}
function get_rating($score, $votes, $s_path='') {
	global $CPG_SESS, $module_name;
	$rating = array('score'=>0, 'rating'=>0, 'desc'=>_DLP_NRATED);
	if ($votes > 0) {
		$rating['score'] = round($score / $votes, 2);
		if ($rating['score'] < 0.5) {
			$rating['rating'] = 0;
			$rating['desc'] = _DLP_RUBBISH;
		} elseif ($rating['score'] >= 0.5 && $rating['score'] < 1) {
			$rating['rating'] = 1;
			$rating['desc'] = _DLP_RUBBISH;
		} elseif ($rating['score'] >= 1 && $rating['score'] < 1.5) {
			$rating['rating'] = 2;
			$rating['desc'] = _DLP_BELOWAVG;
		} elseif ($rating['score'] >= 1.5 && $rating['score'] < 2) {
			$rating['rating'] = 3;
			$rating['desc'] = _DLP_BELOWAVG;
		} elseif ($rating['score'] >= 2 && $rating['score'] < 2.5) {
			$rating['rating'] = 4;
			$rating['desc'] = _DLP_AVG;
		} elseif ($rating['score'] >= 2.5 && $rating['score'] < 3) {
			$rating['rating'] = 5;
			$rating['desc'] = _DLP_AVG;
		} elseif ($rating['score'] >= 3 && $rating['score'] < 3.5) {
			$rating['rating'] = 6;
			$rating['desc'] = _DLP_GOOD;
		} elseif ($rating['score'] >= 3.5 && $rating['score'] < 4) {
			$rating['rating'] = 7;
			$rating['desc'] = _DLP_GOOD;
		} elseif ($rating['score'] >= 3 && $rating['score'] < 4.5) {
			$rating['rating'] = 8;
			$rating['desc'] = _DLP_VGOOD;
		} elseif ($rating['score'] >= 4.5 && $rating['score'] < 5) {
			$rating['rating'] = 9;
			$rating['desc'] = _DLP_VGOOD;
		} else {
			$rating['rating'] = 10;
			$rating['desc'] = _DLP_EXCELLENT;
		}
	}
	$where = !empty($s_path) ? $s_path : $module_name;
	$rating['image'] = '<img src="'.dl_image('stars/'.$rating['rating'].'.png').'" alt="'.$rating['desc'].'" title="'.$rating['desc'].'" />';
	return $rating;
}
function download_time($modem, $size) {
	$modems = array(1=>56000, 512000, 1000000, 1500000);
	if (!array_key_exists($modem, $modems)) { $modem = 1; }
	
	$dl_time = ($size * 8)/$modems[$modem];
	$time_hrs = floor($dl_time/3600);
	$time_hrsa = $dl_time % 3600;
	$time_mins = floor($time_hrsa/60);
	$time_minsa = $time_hrsa % 60;
	$time_secs = floor($time_minsa);
	
	$time_hrs = ($time_hrs < 10) ? '0'.$time_hrs : $time_hrs;
	$time_mins = ($time_mins < 10) ? '0'.$time_mins : $time_mins;
	$time_secs = ($time_secs < 10) ? '0'.$time_secs : $time_secs;
	
	return $time_hrs.':'.$time_mins.':'.$time_secs;
}
function notate_size($size) {
	if ($size >= 1073741824) {
		$new_size = sprintf('%01.2f', $size/1073741824).' GB';
	} elseif ($size > 1048576) {
		$new_size = sprintf('%01.2f', $size/1048576).' MB';
	} elseif ($size >= 1024) {
		$new_size = sprintf('%01.2f', $size/1024).' KB';
	} elseif ($size == 1) {
		$new_size = $size.' byte';
	} else {
		$new_size = $size.' bytes';
	}
	return $new_size;
}