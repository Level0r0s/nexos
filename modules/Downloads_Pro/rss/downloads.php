<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/rss/downloads.php,v $
  $Revision: 1.3 $
  $Author: phoenix $
  $Date: 2010/11/03 23:13:18 $
******************************************************/
define('XMLFEED', true);
$root_path = dirname(dirname(__FILE__));
if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN') {
    $root_path = str_replace('\\', '/', $root_path); //Damn' windows
}
if (strlen($root_path) > 2) define('BASEDIR', $root_path.'/');
else define('BASEDIR', '../');

require_once(BASEDIR.'includes/cmsinit.inc');
require_once(BASEDIR.'includes/functions/language.php');

$where = (isset($_GET['c']) && is_numeric($_GET['c'])) ? 'AND cid='.intval($_GET['c']) : '';
$result = $db->sql_query('SELECT lid, title, desc_short, date FROM '.$prefix.'_downloads_downloads WHERE active=1 '.$where.' ORDER BY lid DESC LIMIT 10');
if ($row = $db->sql_fetchrow($result)) {
    $date = date('D, d M Y H:i:s \G\M\T', $row['date']);
    header("Date: $date");
} else {
    $date = date('D, d M Y H:i:s \G\M\T', time());
}

$BASEHREF = ereg_replace('//rss.', '//', $BASEHREF);
header('Content-Type: text/xml'); // application/rss+xml
//  <ttl>60</ttl> a number of minutes that indicates how long a channel can be cached before refresh.
echo '<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0">
<channel>
  <title>'.htmlprepare($sitename).'</title>
  <link>'.$BASEHREF.'</link>
  <description>'.htmlprepare($backend_title).'</description>
  <language>'.$backend_language.'</language>
  <pubDate>'.$date.'</pubDate>
  <ttl>'.(60*24).'</ttl>
  <generator>CPG-Nuke Dragonfly</generator>
  <copyright>'.htmlprepare($sitename).'</copyright>
  <category>Downloads</category>
  <docs>http://backend.userland.com/rss</docs>
  <image>
    <url>'.$BASEHREF.'images/'.$MAIN_CFG['global']['site_logo'].'</url>
    <title>'.htmlprepare($sitename).'</title>
    <link>'.$BASEHREF."</link>
  </image>\n\n";
if ($row) {
    do {
        echo '<item>
  <title>'.htmlprepare($row['title']).'</title>
  <link>'.URL::index('Downloads&amp;file=details&amp;id='.$row['lid'], true, true).'</link>
  <description>'.htmlprepare($row['desc_short'], false, ENT_QUOTES, true).'</description>
  <pubDate>'.date('D, d M Y H:i:s \G\M\T', $row['date'])."</pubDate>
</item>\n\n";
    }
    while ($row = $db->sql_fetchrow($result));
}
?>
</channel>
</rss>