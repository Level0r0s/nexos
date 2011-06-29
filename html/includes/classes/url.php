<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2008 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/classes/url.php,v $
  $Revision: 10.2 $
  $Author: nanocaiordo $
  $Date: 2011/04/18 05:24:38 $
**********************************************/

abstract class URL
{

	public static function load($url='', $full=false)
	{
		$url = DOMAIN_INDEX. "?".$url;
		if ($full) $url = BASEHREF.$url;
		return $url;
	}

	public static function index($url='', $UseLEO=true, $full=false)
	{
		global $module_name, $MAIN_CFG;
		if (empty($url) || $url[0] == '&') $url = $module_name.$url;
		if ($MAIN_CFG['global']['GoogleTap'] && $UseLEO) {
			$url = str_ireplace('&amp;', '/', $url);
			$url = str_replace('&', '/', $url);
			$url = str_replace('?', '/', $url);
			if (false !== strpos($url, '/file=')) {
				$url = str_replace('/file=', '/', $url);
			}
			if (false !== strpos($url, '#')) {
				$url = str_replace('#', '.html#', $url);
			} else $url .= '.html';
		} else {
			$url = DOMAIN_INDEX. "?name=".$url;
		}
		if ($full) $url = BASEHREF.$url;
		return $url;
	}

	public static function admin($url='', $full=false)
	{
		global $op, $module_name, $MAIN_CFG;
		if (empty($op) && !empty($module_name)) $op = $module_name;
		if (empty($url)) { $url = $op; }
		if ($url[0] == '&') { $url = DOMAIN_ADMIN. "&amp;op=$op".$url; }
		else { $url = DOMAIN_ADMIN. "&amp;op=".$url; }
		if ($full) $url = 'http://'.$MAIN_CFG['server']['domain'].$MAIN_CFG['server']['path'].$url;
		return $url;
	}

	public static function encode($url)
	{
		$url = str_replace('&', '%26', $url);
		$url = str_replace('/', '%2F', $url);
		$url = str_replace('.', '%2E', $url);
		return $url;
	}

	public static function refresh($url='', $time=3)
	{
		global $MAIN_CFG;
		$url = str_ireplace('&amp;', '&', $url);
		if (false === strpos($url, '://') && $MAIN_CFG['server']['path'] != substr($url, 0, strlen($MAIN_CFG['server']['path']))) {
			$url = $MAIN_CFG['server']['path'].$url;
		}
		header('Refresh: '.intval($time).'; url='.$url);
	}

	public static function redirect($url='', $redirect=false)
	{
		global $mainindex, $SESS, $CPG_SESS, $MAIN_CFG;
		if ($url == '') $url = $mainindex;
		$url = str_ireplace('&amp;', '&', $url);
		$type = preg_match('/IIS|Microsoft|WebSTAR|Xitami/', $_SERVER['SERVER_SOFTWARE']) ? 'Refresh: 0; URL=' : 'Location: ';
		if ($redirect) $CPG_SESS['user']['redirect'] = URL::uri();
		if (is_object($SESS)) $SESS->write_close();
		//header("HTTP/1.1 303 REDIRECT");
		if (false === strpos($url, '://') && $MAIN_CFG['server']['path'] != substr($url, 0, strlen($MAIN_CFG['server']['path']))) {
			$url = $MAIN_CFG['server']['path'].$url;
		}
		header($type . $url);
		//header("Status: 303");
		//header("Connection: close");
		exit;
	}

	public static function uri()
	{
		static $REQUEST_URI;
		if (empty($REQUEST_URI)) {
			if (false !== strpos($_SERVER['SERVER_SOFTWARE'], 'IIS') && isset($_SERVER['SCRIPT_NAME'])) {
				$REQUEST_URI = $_SERVER['SCRIPT_NAME'];
				if (isset($_SERVER['QUERY_STRING'])) {
					$REQUEST_URI .= '?'.$_SERVER['QUERY_STRING'];
				}
			} else {
				$REQUEST_URI = $_SERVER['REQUEST_URI'];
			}
			# firefox encodes url by default but others don't
			$REQUEST_URI = urldecode(urldecode($REQUEST_URI));
			# encode the url " %22 and <> %3C%3E
			$REQUEST_URI = str_replace('"', '%22', $REQUEST_URI); 
			$REQUEST_URI = preg_replace('#([\x3C\x3E])#e', '"%".bin2hex(\'\\1\')', $REQUEST_URI);
			$REQUEST_URI = substr($REQUEST_URI, 0, strlen($REQUEST_URI)-strlen(stristr($REQUEST_URI, '&CMSSESSID')));
		}
		return $REQUEST_URI;
	}

}