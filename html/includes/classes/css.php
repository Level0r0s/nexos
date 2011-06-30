<?php
/*********************************************
  Dragonfly CMS, Copyright (c) 2004 by CPGNuke Dev Team
  http://dragonflycms.org
  Released under GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/classes/css.php,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 01:03:15 $
**********************************************/

abstract class CSS
{

	protected static $toClientPattern = array('#^t_([a-z0-9]+)_([a-z0-9]+)$#i', '#^i_([a-z0-9]+)$#' );
	protected static $toClientReplace = array('themes/$1/style/$2.css', 'includes/css/$1.css' );

	protected static $toTplPattern = array('#^themes/([a-z0-9]+)/style/([a-z0-9]+)\.css$#i', '#^includes/css/([a-z0-9]+)\.css$#' );
	protected static $toTplReplace = array('t_$1_$2', 'i_$1' );

	private static $mediaTypes = array(
		'all',          # Includes all media types listed below
		'aural',        # Speech and sound synthesizers
		'braille',      # Braille tactile feedback devices
		'embossed',     # Paged braille printers
		'handheld',     # Small or handheld devices
		'print',        # Printing
		'projection',   # Projected presentations, eg slides
		'screen',       # Computer screens
		'tty',          # Fixed-pitch character grid, like teletypes and terminals
		'tv'            # Television-type devices
	);

	private static $files = array();
	private static $mtime = 0;
	private static $canAdd = true;
	private static $theme;

	final public static function add($str, $media='screen')
	{
		if ( self::$canAdd && in_array($media, self::$mediaTypes) && self::filter($str, 'toTpl') && is_file(BASEDIR. $str) ) {
			self::$files[$media][] = preg_replace(self::$toTplPattern, self::$toTplReplace, $str);
		} else {
			return false;
		}
	}

	final public static function flushToTpl()
	{
		foreach (self::$files as $key => &$val) {
				$val = array_values(array_unique($val));
		}
		$return = '';
		if ( empty(self::$files) ) return $return;
		if ( is_file('themes'. self::$theme. '/style/custom.css') ) { self::$files['screen'][] = 'themes'. self::$theme. 'style/custom.css'; }
		foreach ( self::$files as $key => $val ) {
			$return .= '<link rel="stylesheet" type="text/css" media="'. $key. '" href="'. BASEHREF. DOMAIN_INDEX. '?css='. implode(';', $val). "\" />\n";
		}
		self::$files = array();
		return $return;
	}

	final public static function request($str)
	{
		self::$canAdd = false;
		if ( !preg_match('#^[a-z0-9_\-;]+$#D', $_GET['css']) ) { return false; }
		$array = explode(';', $_GET['css']);
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
		$cachedFile = CACHE_PATH. 'css#'. $ETag;
		header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + ( DEVELOPER_MODE ? 0 : 60*60*24 )));
		header('Cache-Control: public');
		header('Content-Type: text/css; charset: utf-8');
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
		$buffer = preg_replace('#((url\(|src=)["\']?)(../)?images/#', '$1'. BASEHREF. 'themes/'. self::$theme. '/images/', $buffer);
		$buffer = trim(preg_replace('#\s+#', ' ', $buffer));
		$buffer = preg_replace('#/\*.*?\*/#s', '', $buffer);
		$buffer = preg_replace('#\s*[^{}]+{\s*}\s*#', '', $buffer);
		$buffer = preg_replace('#\s*([{},;:])\s*#', '$1', $buffer);
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