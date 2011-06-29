<?php
/*********************************************
  Dragonfly CMS, Copyright (c) 2004 by CPGNuke Dev Team
  http://dragonflycms.org
  Released under GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/classes/js.php,v $
  $Revision: 10.3 $
  $Author: nanocaiordo $
  $Date: 2011/04/17 06:04:28 $
**********************************************/

abstract class JS
{

	protected static $toClientPattern = array('#^i_([a-z0-9]+)$#i', '#^t_([a-z0-9]+)_([a-z0-9]+)$#i', '#^m_([a-z0-9]+)_([a-z0-9]+)$#i');
	protected static $toClientReplace = array('includes/javascript/$1.js', 'themes/$1/javascript/$2.js', 'modules/$1/javascript/$2.js');

	protected static $toTplPattern = array('#^includes/javascript/([a-z0-9]+)\.js$#i', '#^themes/([a-z0-9]+)/javascript/([a-z0-9]+)\.js$#i', '#^modules/([a-z0-9]+)/javascript/([a-z0-9]+)\.js$#i');
	protected static $toTplReplace = array('i_$1', 't_$1_$2', 'm_$1_$2');

	private static $files = array();
	private static $inline = array();
	private static $mtime = 0;
	private static $canAdd = true;
	private static $theme;

	final public static function add($file, $inline=false)
	{
		if (self::$canAdd && self::filter($file, 'toTpl') && file_exists(BASEDIR. $file)) {
			$file = preg_replace(self::$toTplPattern, self::$toTplReplace, $file);
			$inline ? self::$inline[] = $file : self::$files[] = $file;
		} else {
			return false;
		}
	}

	final public static function flushToTpl()
	{
		$return = '';
		self::$files = array_values(array_unique(self::$files));

		if (empty(self::$files)) return $return;
		$return .= '<script type="application/javascript" src="'. BASEHREF. DOMAIN_INDEX. '?js='. implode(';', self::$files). "\"></script>\n";
		self::$files = array();

		while ($file = array_shift(self::$inline)) {
			$file = preg_replace(self::$toClientPattern, self::$toClientReplace, $file);
			$return .= '<script type="text/javascript">' .self::minify(file_get_contents(BASEDIR. $file)). '</script>'.DF_EOL;
		}
		return $return;
	}

	final public static function request()
	{
		self::$canAdd = false;
		if (!preg_match('#^[a-z0-9_\-;]+$#iD', $_GET['js'])) return false;
		$array = explode(';', $_GET['js']);
		while ($str = array_shift($array)) {
			if (self::filter($str, 'toClient')) {
				$file = BASEDIR. preg_replace(self::$toClientPattern, self::$toClientReplace, $str);
				if (is_file($file)) {
					self::$files[] = $file;
					self::$mtime = max(self::$mtime, filemtime($file));
				} else {
					trigger_error($str. ' could not be found', E_USER_WARNING);
				}
			}
		}
		self::$files = array_values(array_unique(self::$files));
		return !empty(self::$files);
	}

	final public static function minify($str)
	{
		$str = preg_replace('#^([\s]+)?\/\/(:?.*)?$#m', '', $str);
		$str = preg_replace('#[\r\n]+#m', '', $str);
		$str = preg_replace('#(/\*\*.*?\*/)#', '', $str);
		$str = preg_replace('#(\s?([\:\?\{\}=\(\);\[\]\,\|&!]+)\s?)#', '$2', $str);
		$str = preg_replace('#[\s]+#', ' ', $str);
		$str = preg_replace('#;}#', '}', $str);
		return $str;
	}

	final public static function flushToClient()
	{
		$ETag = md5(implode(';', self::$files));
		$gzip = GZIP_OUT ? '.gz' : '';
		$cachedFile = CACHE_PATH. 'js#'. $ETag;
		header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + ( DEVELOPER_MODE ? 0 : 60*60*24*7 )));
		header('Cache-Control: public');
		header('Content-Type: application/javascript; charset: utf-8');
		if (!DEVELOPER_MODE && is_file($cachedFile. $gzip) && filemtime($cachedFile. $gzip) > self::$mtime) {
			if ($gzip) header('Content-Encoding: gzip');
			header('Content-Length:'. filesize($cachedFile. $gzip));
			if ($status = HttpUtils::entityCache($ETag, self::$mtime))
				HttpHeaders::flush($status);
			else if ('GET' === $_SERVER['REQUEST_METHOD'])
				readfile($cachedFile. $gzip);
			exit;
		}
		$buffer = '';
		foreach (self::$files as $file) {
			$buffer .= self::minify(file_get_contents($file));
		}
		if (GZIPSUPPORT && $gz = gzopen($cachedFile. '.gz','w9')) {
			gzwrite($gz, $buffer);
			gzclose($gz);
		}
		file_put_contents($cachedFile, $buffer);
		if (is_file($cachedFile. $gzip) || !$gzip) {
			if ($gzip) header('Content-Encoding: gzip');
			header('Content-Length:'. filesize($cachedFile. $gzip));
			if ('GET' === $_SERVER['REQUEST_METHOD']) exit(readfile($cachedFile. $gzip));
		} else {
			ob_start('ob_gzhandler');
			if ('GET' === $_SERVER['REQUEST_METHOD']) exit($buffer);
		}
		exit;
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
		for ($i=0, $c=count($pattern); $i<$c; ++$i) {
			if (1 === preg_match($pattern[$i], $str, $match)) {
				if (0 === $i) self::$theme = $match[1];
				return true;
			}
		}
		return false;
	}

}