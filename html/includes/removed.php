<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 by Myndworx Asylum                          |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |  
  +-------------------------------------------------------------------+
  | removed.php - NexOS deprecated functions file                     |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org                                  |  
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |  
  +-------------------------------------------------------------------+
  | CPG Dragonfly™ CMS                                                |
  | Copyright © 2004 - 2005 by CPG-Nuke Dev Team                      |
  | http://www.dragonflycms.com                                       |
  | Dragonfly is released under the terms and conditions of the GNU   |
  | GPL version 2 or any later version                                |  
  +-------------------------------------------------------------------+
*/


# Deprecated Functions only available thru CPG_DEBUG mode
function themesidebox($title, $content, $bid=0) {
	depricated_warning();
	return false;
}

function blocks($side, $count=false) {
	global $Blocks;
	depricated_warning();
	if (is_object('Blocks')) {
		return $Blocks->display($side);
	}
	return false;
}

function themecenterbox($title, $content, $side=0) {
	depricated_warning();
	return false;
}

function blocks_visible($side, $special=false) {
	global $Blocks;
	depricated_warning();
	if (is_object('Blocks')) {
		return $Blocks->$side;
	}
	return false;
}

function hideblock($id) {
	global $Blocks;
	depricated_warning();
	if (is_object('Blocks')) {
		return $Blocks->$hideblock($id);
	}
	return false;
}

function userblock($bid) {
	depricated_warning();
	return false;
}

function nuke_error($message, $title='ERROR', $redirect='') {
	depricated_warning();
	cpg_error($message, $title, $redirect);
}

function cookiedecode() {
	depricated_warning();
	return false;
}
function getusrinfo() {
	depricated_warning();
	global $userinfo;
	return $userinfo;
}
function FixQuotes($what) {
	depricated_warning();
	$what = str_replace("'","''",$what);
	while (false !== strpos($what, "\\\\'")) { $what = str_replace("\\\\'", "'", $what); }
	return $what;
}
function formatTimestamp($time) {
	depricated_warning();
	return formatDateTime($time, _DATESTRING);
}
function check_html($str, $strip='') {
	depricated_warning();
	return Fix_Quotes($str, empty($strip));
}
function filter_text($Message, $strip='') {
	depricated_warning();
	return check_words($Message);
}
function delQuotes($string) {
	depricated_warning();
	return $string;
}
function is_group() {
	depricated_warning();
}
function update_points() {
	depricated_warning();
}
function formatAidHeader($aid) {
	depricated_warning();
	echo $aid;
}
function get_author($aid) {
	depricated_warning();
	return $aid;
}
