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

  $Source: /cvs/html/includes/classes/httpheaders.php,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 01:03:15 $
**********************************************/
//namespace core;
abstract class HttpHeaders extends HttpUtils
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
		if ( ctype_digit($h) ) { (int) $h; }
		if ( is_int($h) && isset(parent::$statusCodes[$h]) ) {
			if ( 200 > $h && 1.1 > parent::$protocolVersion ) { return; }
			if ( 300 <= $h && 600 >= $h && !self::$exit ) { self::$exit = true; }
			self::$to_send[] = $_SERVER['SERVER_PROTOCOL']. ' '. $h. ' '. parent::$statusCodes[$h];
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
		if ( isset(parent::$contentType[$var]) ) {
			self::add(parent::$contentType[$var]);
		}
	}

}
