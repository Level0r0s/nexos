<?php
/*
  $Id$ 
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 by Myndworx Asylum                          |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | block-Last_Referers.php - NexOS Administration Backend file       |
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
   Last modification notes:
    $Author$
    $Date$
    $Rev$
*/

if (!defined('CPG_NUKE')) { exit; }

global $db, $prefix;

# how many referers should the block display?
$ref = 10;
$a = 1;
$content = '';

$result = $db->sql_query("SELECT url FROM ".$prefix."_referer ORDER BY lasttime DESC LIMIT $ref");
$total = $db->sql_numrows($result);
if ($total < 1) {
	$content = 'ERROR';
	return trigger_error(sprintf(_ERROR_NONE_TO_DISPLAY, strtolower(_HTTPREFERERS)), E_USER_WARNING);
}

while (list($url) = $db->sql_fetchrow($result)) {
	$url2 = str_replace('_', ' ', $url);
	
	if (strlen($url2) > 18) {
		$url2 = substr($url, 0, 20);
		$url2 .= '..';
	}
	
	$content .= "$a:&nbsp;\n"
			   ."<a href=\"$url\" target=\"_blank\">$url2</a>\n"
			   ."<br />\n";
	$a++;
}

if (can_admin()) {
	$content .= "<br />\n"
			   ."<div style=\"text-align:center;\">\n"
			   ."$total "._HTTPREFERERS."\n"
			   ."<br /><br />\n"
			   ."[ <a href=\"".URL::admin('referers&amp;del=all')."\">"._DELETE."</a> ]\n"
			   ."</div>\n";
}
$db->sql_freeresult($result);
