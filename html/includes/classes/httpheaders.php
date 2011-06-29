<?php
/*********************************************
  Copyright (c) 2011 by DragonflyCMS
  http://dragonflycms.org
  Released under GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/classes/httpheaders.php,v $
  $Revision: 10.1 $
  $Author: nanocaiordo $
  $Date: 2011/03/30 10:33:33 $
**********************************************/
//namespace core;
abstract class HttpHeaders
{


	protected static $to_send = array();

	private static $exit;

/**
 * Add headers to class buffer
 *
 * @access protected
 * @static
 */
	public static function add($h)
	{
		//if ( 'cli' === PHP::$run_as ) return;
		if ( ctype_digit($h) ) { $h = (int) $h; }
		if ( is_int($h) && isset(HttpUtils::$statusCodes[$h]) ) {
			if ( 200 > $h && 1.1 > HttpUtils::$protocolVersion ) { return; }
			if ( 300 <= $h && 600 >= $h && !self::$exit ) { self::$exit = true; }
			self::$to_send[] = $_SERVER['SERVER_PROTOCOL']. ' '. $h. ' '. HttpUtils::$statusCodes[$h];
		} else {
			self::$to_send[] = $h; }
	}

/**
 * Flush class buffered headers to php buffer.
 *
 * @access protected
 * @static
 */
	public static function flush($last=null, $msg=null)
	{
		if ($last) { self::add($last); }
		while ( $var = array_shift(self::$to_send) ) {
			header($var);
		}
		if ( self::$exit ) {
			if ( null === $msg || 'HEAD' === $_SERVER['REQUEST_METHOD'] ) { exit; }
			exit($msg);
		}
	}

/**
 * @access public clear Reset class headers buffer
 */
	public static function clear() { self::$to_send = array(); }

	public static function contentType($var)
	{
		if ( isset(HttpUtils::$contentType[$var]) ) {
			self::add(HttpUtils::$contentType[$var]);
		}
	}

}
