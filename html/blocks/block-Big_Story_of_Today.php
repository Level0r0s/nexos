<?php
/*
  $Id$ 
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 by Myndworx Asylum                          |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | block-Big_Story_of_Today.php - NexOS Administration Backend file  |
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

if (!is_active('News')) {
	$content = 'ERROR';
	return trigger_error('News module is inactive', E_USER_WARNING);
}

global $userinfo, $prefix, $MAIN_CFG, $currentlang, $db;

$content = '';

$querylang = ($MAIN_CFG['global']['multilingual']) ? "AND (alanguage='$currentlang' OR alanguage='')" : '';
$result = $db->sql_query('SELECT sid, title FROM '.$prefix.'_stories WHERE time > '.(time()-86400).' '.$querylang.' ORDER BY counter DESC LIMIT 1');
list($fsid, $ftitle) = $db->sql_fetchrow($result);
if (!$fsid && !$ftitle) {
	$result = $db->sql_query("SELECT sid, title FROM ".$prefix."_stories ORDER BY sid DESC LIMIT 1");
	list($fsid, $ftitle) = $db->sql_fetchrow($result);
	$content .= "<a href=\"".URL::index("News&amp;file=article&amp;sid=$fsid")."\">$ftitle</a>";
} else {
	$content .= _BIGSTORY."<br /><br />";
	$content .= "<a href=\"".URL::index("News&amp;file=article&amp;sid=$fsid")."\">$ftitle</a>";
}
