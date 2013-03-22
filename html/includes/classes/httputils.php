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

  $Source: /cvs/html/includes/classes/httputils.php,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 01:03:15 $
**********************************************/
//namespace core;
abstract class HttpUtils
{

	static protected $protocolVersion;
	static protected $requestMethod;
	static protected $requestUri;

/**
 * @access private received headers received by the client
 */
	protected static $requestHeaders = array();

/**
 * RFC HTTP status codes
 * Extendable with custom codes from a child class
 *
 * @access protected
 *
 */
	public static $statusCodes = array(
		100 => 'Continue', 101 => 'Switching Protocols',
		200 => 'OK', 201 => 'Created', 202 => 'Accepted', 203 => 'Non-Authoritative Information', 204 => 'No Content',
		205 => 'Reset Content', 206 => 'Partial Content',
		300 => 'Multiple Choices', 301 => 'Moved Permanently', 302 => 'Found', 303 => 'See Other', 304 => 'Not Modified',
		305 => 'Use Proxy', 307 => 'Temporary Redirect',
		400 => 'Bad Request', 401 => 'Unauthorized', 402 => 'Payment Required', 403 => 'Forbidden', 404 => 'Not Found',
		405 => 'Method Not Allowed', 406 => 'Not Acceptable', 407 => 'Proxy Authentication Required', 408 => 'Request Timeout', 409 => 'Conflict',
		410 => 'Gone', 411 => 'Length Required', 412 => 'Precondition Failed', 413 => 'Request Entity Too Large', 414 => 'Request-URI Too Long',
		415 => 'Unsupported Media Type', 416 => 'Requested Range Not Satisfiable', 417 => 'Expectation Failed',
		500 => 'Internal Server Error', 501 => 'Not Implemented', 502 => 'Bad Gateway', 503 => 'Service Unavailable', 504 => 'Gateway Timeout',
		505 => 'HTTP Version Not Supported'
	);

/**
 * RFC Content-Type headers
 * Extendable from a child class
 *
 * @access protected
 *
 */
	public static $contentType = array(
		'css'  => 'Content-Type: text/css',
		'text' => 'Content-Type: text/plain',
		'html' => 'Content-Type: text/html',
		'js'   => 'Content-Type: application/javascript',
		'ecma' => 'Content-Type: application/ecmascript',
	);

	public static function init()
	{
		if ( empty($_SERVER['SERVER_PROTOCOL']) ) $_SERVER['SERVER_PROTOCOL'] = 'HTTP/1.1';
		self::$protocolVersion = floatval( substr($_SERVER['SERVER_PROTOCOL'], -3, strlen($_SERVER['SERVER_PROTOCOL'])) );
	}

	final public function setCookie() {}

/**
 * @access public get retrive all or specified headers from the client
 * @return null on failure, mixed otherwise
 * @var $h a null value will return the entire array, a string will instead return the array's value for the specified key (the string)
 */
	public static function requestHeaders($h=null)
	{
		if ( empty(self::$requestHeaders) ) {
			foreach ($_SERVER as $key => $val) {
				if ( substr($key, 0, 5) == 'HTTP_' ) {
					self::$requestHeaders[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($key, 5)))))] = $val;
				}
			}
		}
		if ( is_null($h) ) { return self::$requestHeaders; }
		if ( isset(self::$requestHeaders[$h]) ) { return self::$requestHeaders[$h]; }
	}

/**
 * Retrive an always fresh list of headers already sent to php buffer
 * apache_response_headers() style but without the need to flush()
 *
 * @access protected
 * @static
 */
	public static function responseHeaders()
	{
		self::flush();
		$array = headers_list();
		if (empty($array)) return array();
		while ($val = array_shift($array)) {
			if ( $pos = strpos($val, ':') ) {
				$response[ trim( substr($val, 0, $pos) ) ] = trim( substr( $val, $pos+1, strlen($val) ) );
			} else { var_dump($val); }
//				} else if ( preg_match('#\s\([0-9]{3})\s#', $val, $match) ) {
//				$response = $match[1];
//			}
		}
		return $response;
	}

/**
 * http://www.w3.org/Protocols/rfc2616/rfc2616-sec13.html#sec13.3.3
 * http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.19 .24 .25 .26 .28 .44
 * if the request method is GET or HEAD, the server SHOULD respond with a 304 (Not Modified) response,
 * including the cache- related header fields (particularly ETag) of one of the entities that matched.
 * For all other request methods, the server MUST respond with a status of 412 (Precondition Failed).
 */
	final public function entityCache($ETag, $time)
	{
		$ETag = "\"{$ETag}\"";
		HttpHeaders::add('ETag: '. $ETag);
		if ( !empty($_SERVER['HTTP_IF_NONE_MATCH']) ) {
			if ( false !== strpos($_SERVER['HTTP_IF_NONE_MATCH'], $ETag)) {
				return 304;
			}
			# If none of the entity tags match,
			# then the server MAY perform the requested method as if the If-None-Match header field did not exist,
			# but MUST also ignore any If-Modified-Since header field(s) in the request.
			$_SERVER['HTTP_IF_MODIFIED_SINCE'] = null;
		}
		if ( isset($_SERVER['HTTP_IF_MATCH']) && false === strpos($_SERVER['HTTP_IF_MATCH'], $ETag) ) {
			return 412;
		}
		$time = (int)$time;
		HttpHeaders::add('Last-Modified: '.gmdate('D, d M Y H:i:s \G\M\T', $time)); # DATE_RFC1123
		if ( !empty($_SERVER['HTTP_IF_MODIFIED_SINCE']) && $time <= strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) ) {
			return 304;
		}
		if ( !empty($_SERVER['HTTP_IF_UNMODIFIED_SINCE']) && $time > strtotime($_SERVER['HTTP_IF_UNMODIFIED_SINCE']) ) {
			return 412;
		}
		HttpHeaders::flush();
	}

}

HttpUtils::init();