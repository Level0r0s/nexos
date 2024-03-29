<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 by Myndworx Asylum                          |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |  +-------------------------------------------------------------------+
  | news.php - NexOS news rss file                                    |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org                                  |  +-------------------------------------------------------------------+
  |Original Copyright below                                           |  +-------------------------------------------------------------------+
  | CPG Dragonfly™ CMS                                                |
  | Copyright © 2004 - 2005 by CPG-Nuke Dev Team                      |
  | http://www.dragonflycms.com                                       |
  | Dragonfly is released under the terms and conditions of the GNU   |
  | GPL version 2 or any later version                                |  +-------------------------------------------------------------------+
   Last modification notes:
    $Author$
    $Date$
    $Rev$
*/

define('XMLFEED', 1);
$root_path = dirname(dirname(__FILE__));
if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN') {
	$root_path = str_replace('\\', '/', $root_path); //Damn' windows
}
if (strlen($root_path) > 2) define('BASEDIR', $root_path.'/');
else define('BASEDIR', '../');

require_once(BASEDIR.'includes/cmsinit.inc');
require_once(BASEDIR.'includes/functions/language.php');
require_once(BASEDIR.'includes/nbbcode.php');

$where = (isset($_GET['cat']) && is_numeric($_GET['cat'])) ? 'WHERE catid='.intval($_GET['cat']) : '';
$result = $db->sql_query('SELECT sid, title, time, hometext FROM '.$prefix.'_stories '.$where.' ORDER BY sid DESC LIMIT 10');
if ($row = $db->sql_fetchrow($result)) {
	$date = date('D, d M Y H:i:s \G\M\T', $row['time']);
	header("Date: $date");
} else {
	$date = date('D, d M Y H:i:s \G\M\T', time());
}

$BASEHREF = str_replace('//rss.', '//', $BASEHREF);
header('Content-Type: text/xml'); // application/rss+xml
echo '<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE rss PUBLIC "-//Netscape Communications//DTD RSS 0.91//EN"
 "http://my.netscape.com/publish/formats/rss-0.91.dtd">
<rss version="0.91">
<channel>
<title>'.htmlprepare($sitename).'</title>
<link>'.$BASEHREF.'</link>
<description>'.htmlprepare($backend_title).'</description>
<language>'.$backend_language."</language>\n\n";

if ($row) {
	do {
		echo '<item>
  <title>'.htmlprepare($row['title']).'</title>
  <description>'.htmlprepare(decode_bb_all($row['hometext'], 1, true), false, ENT_QUOTES, true).'</description>
  <link>'.URL::index('News&amp;file=article&amp;sid='.$row['sid'], true, true)."</link>
</item>\n\n";
	}
	while ($row = $db->sql_fetchrow($result));
}
?>
</channel>
</rss>
