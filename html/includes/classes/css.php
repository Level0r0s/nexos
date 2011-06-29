<?php
/*********************************************
  Dragonfly CMS, Copyright (c) 2004 by CPGNuke Dev Team
  http://dragonflycms.org
  Released under GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/classes/css.php,v $
  $Revision: 10.3 $
  $Author: nanocaiordo $
  $Date: 2011/04/17 06:02:52 $
**********************************************/

abstract class CSS
{

	protected static $toClientPattern = array('#^i_([a-z0-9]+)$#', '#^t_([a-z0-9]+)_([a-z0-9]+)$#i', '#^m_([a-z0-9]+)_([a-z0-9]+)$#i');
	protected static $toClientReplace = array('includes/css/$1.css', 'themes/$1/style/$2.css', 'modules/$1/style/$2.css' );

	protected static $toTplPattern = array('#^includes/css/([a-z0-9]+)\.css$#', '#^themes/([a-z0-9]+)/style/([a-z0-9]+)\.css$#i', '#^module/([a-z0-9]+)/style/([a-z0-9]+)\.css$#i');
	protected static $toTplReplace = array('i_$1', 't_$1_$2', 'm_$1_$2');

	private static $mediaTypes = array(
		'all',          # Includes all media types listed below
		'aural',        # Speech and sound synthesizers
		'braille',      # Braille tactile feedback devices
		'embossed',     # Paged braille printers
		'handheld',     # Small or handheld devices
		'inline',       // try this to fix the inline issue?
		'print',        # Printing
		'projection',   # Projected presentations, eg slides
		'screen',       # Computer screens
		'tty',          # Fixed-pitch character grid, like teletypes and terminals
		'tv'            # Television-type devices
	);

	private static $files = array();
	private static $inline = array();
	private static $path;
	private static $mtime = 0;
	private static $canAdd = true;
	public static $theme;

	final public static function add($file, $media='screen', $inline=false)
	{
		$inline = false; // $inline can easily results in broken css, disabled atm
		if (self::$canAdd && in_array($media, self::$mediaTypes) && self::filter($file, 'toTpl') && is_file(BASEDIR. $file)) {
			$file = preg_replace(self::$toTplPattern, self::$toTplReplace, $file);
			$inline ? self::$inline[$media][] = $file : self::$files[$media][] = $file;
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
		if (is_file('themes'. self::$theme. '/style/custom.css')) { self::$files['screen'][] = 'themes'. self::$theme. 'style/custom.css'; }
		foreach (self::$files as $key => $val) {
			$return .= '<link rel="stylesheet" type="text/css" media="'. $key. '" href="'.BASEHREF. DOMAIN_INDEX. '?css='. implode(';', $val). "\" />".DF_EOL;
		}
		foreach (self::$inline as $key => $val) {
			$return .= '<style type="text/css" media="'. $key. '">';
			// needs to pass the correct self::path[$i] for src|img rewrite
			while ($file = array_shift($val)) {
				$file = preg_replace(self::$toClientPattern, self::$toClientReplace, $file);
				$return .= self::minify(file_get_contents(BASEDIR. $file)). DF_EOL;
			}
			$return .= '</style>'. DF_EOL;
		}
		self::$files = array();
		return $return;
	}

	final public static function request()
	{
		self::$canAdd = false;
		if (!preg_match('#^[a-z0-9_\-;]+$#D', $_GET['css'])) return false;
		$array = explode(';', $_GET['css']);
		while ($str = array_shift($array)) {
			if (self::filter($str, 'toClient')) {
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

	final public static function minify($str)
	{
		$str = trim(preg_replace('#\s\s+#', ' ', $str));
		$str = preg_replace('#/\*.*?\*/#s', '', $str);
		$str = preg_replace('#\s*[^{}]+{\s*}\s*#', '', $str);
		$str = preg_replace('#\s*([{},;:])\s*#', '$1', $str);
		$str = str_replace(';}', '}', $str);
		return $str;
	}

	final public static function flushToClient()
	{
		$ETag = md5(implode(';', self::$files));
		$gzip = GZIP_OUT ? '.gz' : '';
		$cachedFile = CACHE_PATH. 'css#'. $ETag;
		header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + ( DEVELOPER_MODE ? 0 : 60*60*24*7 )));
		header('Cache-Control: public');
		header('Content-Type: text/css; charset: utf-8');
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
		foreach (self::$files as $i => $file ) {
			if (self::$path[$i])
				$buffer .= preg_replace('#((url\(|src=)["\']?)(../)?images/#', '$1'. BASEHREF. 'themes/'. self::$path[$i]. '/images/', file_get_contents($file));
			else
				$buffer .= preg_replace('#((url\(|src=)["\']?)(../)?images/#', '$1'. BASEHREF. 'images/', file_get_contents($file));
		}
		$buffer = self::minify($buffer);
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
			if (preg_match($pattern[$i], $str, $match)) {
				self::$path[] = isset($match[2]) ? $match[1] : '';
				return true;
			}
		}
		return false;
	}

}