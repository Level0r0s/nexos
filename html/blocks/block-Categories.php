<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 | 
  +-------------------------------------------------------------------+
  | block-Categories.php - NexOS Administration Backend file          |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      | 
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

if (!defined('CPG_NUKE')) { exit; }

if (!is_active('News')) {
	$content = 'ERROR';
	return trigger_error('News module is inactive', E_USER_WARNING);
}

global $cat, $prefix, $MAIN_CFG, $currentlang, $db;
$result = $db->sql_query('SELECT catid, title FROM '.$prefix.'_stories_cat ORDER BY title');
$numrows = $db->sql_numrows($result);

$content = '';
if ($numrows == 0) {
	return;
} else {
	$a = 0;
	$querylang = ($MAIN_CFG['global']['multilingual']) ? "AND (alanguage='$currentlang' OR alanguage='')" : '';
	while (list($catid, $ntitle) = $db->sql_fetchrow($result)) {
		$numrows = $db->sql_count($prefix."_stories", "catid='$catid' $querylang LIMIT 1");
		if ($numrows > 0) {
			if ($cat == 0 && !$a) {
				$content .= "<b>&#8226;</b>&nbsp;<strong>"._ALLCATEGORIES."</strong><br />";
				$a = 1;
			} elseif ($cat != 0 && !$a) {
				$content .= "<b>&#8226;</b>&nbsp;<a href=\"".URL::index("News")."\">"._ALLCATEGORIES."</a><br />";
				$a = 1;
			}
			if ($cat == $catid) {
				$content .= "<b>&#8226;</b>&nbsp;<strong>$ntitle</strong><br />";
			} else {
				$content .= "<strong>&middot;</strong>&nbsp;<a href=\"".URL::index("News&amp;catid=$catid")."\">$ntitle</a><br />";
			}
		}
	}
}
