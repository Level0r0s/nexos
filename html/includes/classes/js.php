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
  Dragonfly CMS, Copyright (c) 2004 by CPGNuke Dev Team
  http://dragonflycms.org
  Released under GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/classes/js.php,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 01:03:15 $
**********************************************/

abstract class JS
{

	protected static $toClientPattern = array('#^t_([a-z0-9]+)_([a-z0-9]+)$#i', '#^i_([a-z0-9]+)$#' );
	protected static $toClientReplace = array('themes/$1/javascript/$2.js', 'includes/javascript/$1.js' );

	protected static $toTplPattern = array('#^themes/([a-z0-9]+)/javascript/([a-z0-9]+)\.js$#i', '#^includes/javascript/([a-z0-9]+)\.js$#' );
	protected static $toTplReplace = array('t_$1_$2', 'i_$1' );

	private static $files = array();
	private static $mtime = 0;
	private static $canAdd = true;
	private static $theme;

	final public static function add($str)
	{
		if ( self::$canAdd && self::filter($str, 'toTpl') && is_file(BASEDIR. $str) )
			self::$files[] = preg_replace(self::$toTplPattern, self::$toTplReplace, $str);
		else
			return false;
	}

	final public static function flushToTpl()
	{
		self::$files = array_values(array_unique(self::$files));
		$return = '';
		if ( empty(self::$files) ) return $return;
		$return .= '<script type="application/javascript" src="'. BASEHREF. DOMAIN_INDEX. '?js='. implode(';', self::$files). "\"></script>\n";
		self::$files = array();
		return $return;
	}

	final public static function request($str)
	{
		self::$canAdd = false;
		if ( !preg_match('#^[a-z0-9_\-;]+$#D', $_GET['js']) ) { return false; }
		$array = explode(';', $_GET['js']);
		while ( $str = array_shift($array) ) {
			if ( self::filter($str, 'toClient') ) {
				$file = BASEDIR. preg_replace(self::$toClientPattern, self::$toClientReplace, $str);
				if (is_file($file)) {
					self::$files[] = $file;
					self::$mtime = max(self::$mtime, filemtime($file));
				}
			}
		}
		self::$files = array_values(array_unique(self::$files));
		return !empty(self::$files);
	}

	final public static function flushToClient()
	{
		$ETag = md5(implode(';', self::$files));
		$gzip = GZIP_OUT ? '.gz' : '';
		$cachedFile = CACHE_PATH. 'js#'. $ETag;
		header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + ( DEVELOPER_MODE ? 0 : 60*60*24 )));
		header('Cache-Control: public');
		header('Content-Type: application/javascript; charset: utf-8');
		if ( !DEVELOPER_MODE && is_file($cachedFile. $gzip) && filemtime($cachedFile. $gzip) > self::$mtime ) {
			if ( $gzip ) { header('Content-Encoding: gzip'); }
			header('Content-Length:'. filesize($cachedFile. $gzip));
			if ( $status = HttpUtils::entityCache($ETag, self::$mtime) ) {
				HttpHeaders::flush($status);
			} else {
				readfile($cachedFile. $gzip);
			}
			exit;
		}
		$buffer = '';
		foreach ( self::$files as $file ) {
			$buffer .= file_get_contents($file);
		}
		$buffer = preg_replace('#^(\s+)#m', '', $buffer);
		$buffer = preg_replace('#[\r\n]+#', '', $buffer);
		$buffer = str_replace(';}', '}', $buffer);
		if ( GZIPSUPPORT && $gz = gzopen($cachedFile. '.gz','w9') ) {
			gzwrite($gz, $buffer);
			gzclose($gz);
		}
		file_put_contents($cachedFile, $buffer);
		if ( is_file($cachedFile. $gzip) || !$gzip ) {
			if ( $gzip ) { header('Content-Encoding: gzip'); }
			header('Content-Length:'. filesize($cachedFile. $gzip));
			exit(readfile($cachedFile. $gzip));
		} else {
			ob_start('ob_gzhandler');
			exit($buffer);
		}
	}

	private static function filter($str, $mode)
	{
		switch ($mode) {
			case 'toTpl':
				$pattern = self::$toTplPattern;
			break;
			case 'toClient':
				$pattern = self::$toClientPattern;
			break;
			default: return;
		}
		$c = count($pattern);
		for ($i = 0; $i < $c; ++$i) {
			if ( 1 === preg_match($pattern[$i], $str, $match) ) {
				if ( 0 === $i ) { self::$theme = $match[1]; }
				return true;
			}
		}
		return false;
	}

}