<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 by Myndworx Asylum                          |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |  +-------------------------------------------------------------------+
  | news2.php - NexOS news2 rss file                                  |
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
//	<ttl>60</ttl> a number of minutes that indicates how long a channel can be cached before refresh.
echo '<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0">
<channel>
  <title>'.htmlprepare($sitename).'</title>
  <link>'.$BASEHREF.'</link>
  <description>'.htmlprepare($backend_title).'</description>
  <language>'.$backend_language.'</language>
  <pubDate>'.$date.'</pubDate>
  <ttl>'.(60*24).'</ttl>
  <generator>NexOS RSS Feeder</generator>
  <copyright>'.htmlprepare($sitename).'</copyright>
  <category>News</category>
  <docs>http://cyber.law.harvard.edu/rss/rss.html</docs>
  <image>
	<url>'.$BASEHREF.'images/'.$MAIN_CFG['global']['site_logo'].'</url>
	<title>'.htmlprepare($sitename).'</title>
	<link>'.$BASEHREF."</link>
  </image>\n\n";
if ($row) {
	do {
		echo '<item>
  <title>'.htmlprepare($row['title']).'</title>
  <link>'.URL::index('News&amp;file=article&amp;sid='.$row['sid'], true, true).'</link>
  <description>'.htmlprepare(decode_bb_all($row['hometext'], 1, true), false, ENT_QUOTES, true).'</description>
  <pubDate>'.date('D, d M Y H:i:s \G\M\T', $row['time'])."</pubDate>
</item>\n\n";
	}
	while ($row = $db->sql_fetchrow($result));
}
?>
</channel>
</rss>
