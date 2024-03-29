<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | block-Sample.php - Example NexOS block file                       |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      |
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |
  +-------------------------------------------------------------------+
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/classes/rss.php,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 01:03:16 $
**********************************************/

class CPG_RSS {

	public static function read($url, $items_limit=10) {
/*
<language>en-us</language>
<pubDate>Sun, 23 Jan 2005 23:03:36 GMT</pubDate>
<docs>http://backend.userland.com/rss</docs>
*/
		$channeltags = array ('title', 'link', 'description', 'language',
			'generator', 'copyright', 'category', 'pubDate', 'managingEditor',
			'webMaster', 'lastBuildDate', 'rating', 'docs', 'ttl');
		$itemtags = array('title', 'link', 'description', 'author', 'category',
			'comments', 'enclosure', 'guid', 'pubDate', 'source');

		if (!($data = get_fileinfo($url, false, true))) { return false; }

		preg_match("#.*?encoding=[\'\"](.*?)[\'\"].*#si", $data['data'], $tag);
		$encoding = (isset($tag[1]) ? strtoupper($tag[1]) : 'ISO-8859-1');

		// Read CHANNEL info
		preg_match("'<channel.*?>(.*?)</channel>'si", $data['data'], $channel);
		// use IE work around for &apos;, thanks to darkgrue
		$channel = str_replace('&apos;', '&#039;', $channel[1]);
		foreach($channeltags as $channeltag) {
			$tag = CPG_RSS::get_tag($channeltag, $channel, $encoding);
			if (!empty($tag)) { $rss[$channeltag] = $tag; }
		}
		$rss['title'] = strip_tags(urldecode($rss['title']));
		$rss['link'] = strip_tags($rss['link']);
		$rss['desc'] =& $rss['description'];
		if (isset($rss['ttl'])) {
			$rss['ttl'] = intval($rss['ttl']); // seconds
		}

		preg_match_all('#<item(| .*?)>(.*?)</item>#si', $data['data'], $items);
		$items = $items[2];
		for ($i=0;$i<$items_limit;$i++) {
			if (isset($items[$i]) && !empty($items[$i])) {
				$item = array();
				foreach($itemtags as $itemtag) {
					$tag = CPG_RSS::get_tag($itemtag, $items[$i], $encoding);
					if (!empty($tag)) { $item[$itemtag] = $tag; }
				}
				if (!empty($item)) {
					$item['title'] = strip_tags(urldecode($item['title']));
					$item['link'] = isset($item['link']) ? strip_tags($item['link']) : '';
					$item['desc'] =& $item['description'];
					$rss['items'][] = $item;
				}
			}
		}
		return $rss;
	}

	function display($url, $items_limit=10)
	{
		return CPG_RSS::format(CPG_RSS::read($url, $items_limit));
	}
	
	public static function format($rss)
	{
		if (empty($rss)) return false;
		$items =& $rss['items'];
		$site_link =& $rss['link'];
		$data = '';
		for ($i=0;$i<count($items);$i++) {
			$link = $items[$i]['link'];
			$title2 = $items[$i]['title'];
			$data .= '<strong><big>&middot;</big></strong> <a href="'.$link.'" target="new">'.$title2.'</a><br/>'."\n";
		}
		if (!empty($site_link)) {
			$data .= '<br/><a href="'.$site_link.'" target="_blank"><b>'._HREADMORE.'</b></a>';
		}
		// The named character reference &apos; (the apostrophe, U+0027)
		// was introduced in XML 1.0 but does not appear in HTML. Authors
		// should therefore use &#39; instead of &apos; to work as expected
		// in HTML 4 user agents.
		return str_replace('&apos;', '&#039;', $data);
	}

	private static function get_tag($tagname, &$string, $encoding) {
		preg_match("#<$tagname.*?>(.*?)</$tagname>#si", $string, $tag);
		// if there is no result return empty
		if (!isset($tag[1])) { return false; }

		$tag = strtr($tag[1], array('<![CDATA['=>'', ']]>'=>''));
		if ($encoding != 'UTF-8') {
			// http://www.php.net/iconv
			$tag = function_exists('iconv') ? iconv($encoding, 'UTF-8', $tag) : utf8_encode($tag);
		}
		return trim($tag);
	}


}
