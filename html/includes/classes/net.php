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
  Dragonfly CMS, Copyright (c) 2004 by DragonflyCMS Dev. Team.
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/classes/net.php,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 01:03:15 $
**********************************************/

/*
	Degub: called already within the security class line 194, unload on security class for testing
*/
if (!function_exists('inet_pton')) { require(CORE_PATH.'functions/inet.php'); }

/*
	@Require: LIB FILTER
*/

abstract class NET
{
	/*
		@Return varbinary IPv4 or IPv6
	*/
	public static function get_ip()
	{
		static $ip;
		if (!empty($ip)) { return $ip; }
		$ip = (!empty($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : $_ENV['REMOTE_ADDR'];
		$ips = array();
		if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARDED_FOR'] != 'unknown') {
			$ips = explode(', ', $_SERVER['HTTP_X_FORWARDED_FOR']);
		}
		if (!empty($_SERVER['HTTP_CLIENT_IP']) && $_SERVER['HTTP_CLIENT_IP'] != 'unknown') {
			$ips[] = $_SERVER['HTTP_CLIENT_IP'];
		}
		for ($i = 0; $i < count($ips); $i++) {
			if ($tmp = FILTER::ipv4($ips[$i])) { $ip = $tmp; break; }
			else if ($tmp = FILTER::ipv6($ips[$i])) { $ip = $tmp; break; }
		}
		$ip = inet_pton($ip);
		return $ip;
	}

	/*
		@Return bool
	*/
	public static function is_lan($ip)
	{
		return ('localhost' === $ip || (FILTER::ipv4($ip, true) && preg_match('#^(10|127.0.0|172.(1[6-9]|2\d|3[0-1])|192\.168)\.#', $ip)));
	}

	/*
		@Param $ip: IPv4 address
		@Param $cidr: Classless Inter-Domain Routing
		@Return: The IPv4 Network Address
	*/
	public static function network($ip, $cidr)
	{
		if (32 < $cidr) { return false; }
		if ($ip = FILTER::ipv4($ip, true)) {
			return long2ip(NET::ip2long($ip, true) & NET::ip2long(NET::mask($cidr, true)));
		}
	}

	/*
		@Param $ip: IPv4 address
		@Param $cidr: Classless Inter-Domain Routing
		@Return: The IPv4 Broadcast Address
	*/
	public static function broadcast($ip, $cidr)
	{
		if ($cidr > 32) { return false; }
		if ($ip = FILTER::ipv4($ip, true)) {
			return long2ip(NET::ip2long($ip, true) - (0xffffffff << (32 - $cidr)) - 1);
		}
		return false;
	}

	/*
		@Param $cidr: Classless Inter-Domain Routing
		@Return: The Network Mask
	*/
	public static function mask($cidr)
	{
		if ($cidr > 32) { return false; }
		return long2ip((0xffffffff << (32 - $cidr)));
	}

	/*
		@Return: A 32 and 64 bit OS compatible ip2long function
	*/
	public static function ip2long($ip, $unsigned=false) {
		$ip = ip2long($ip);
		if ($ip > 2147483647) { $ip -= 4294967296; } // pow(2,32)
		if ($unsigned && $ip < 0) { $ip += 4294967296; }
		return $ip;
	}

	public static function ipv4_cidr($str, $private=false)
	{
		if (preg_match('#^([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})/([0-9]{1,2})$#', $_POST['ban_ipv4_s'], $match)) {
			if (!FILTER::ipv4($match[1], true)) { return -1; }
			$match[2] = intval($match[2]);
			if ($match[2] > 32) { return -2; }
			return array('ipv4' => $match[1], 'cidr' => $match[2]);
		}
		return false;
	}

	/*
		8.x & 9.x compatible converter, use inet_ntop() for 9.2+
		5 or 17 = IPv4 & IPv6 varbinary IP saved with a leading "/", old MySQL varbinary bug
		4 or 16 = IPv4 & IPv6 varbinary IP
		8 base64_encoded IP
	*/
	public static function decode_ip($ip) {
		global $db;
		$ip = $db->unescape_binary($ip);
		$l = strlen($ip);
		if ($l == 5 || $l == 17) { --$l; $ip = substr($ip,0,-1); }
		if ($l == 4 || $l == 16) {
			return inet_ntop($ip);
		} else if ($l == 8) {
			$ip = explode('.', chunk_split($ip, 2, '.'));
			return hexdec($ip[0]).'.'.hexdec($ip[1]).'.'.hexdec($ip[2]).'.'.hexdec($ip[3]);
		} else if ($tmp = FILTER::ipv4($ip, true)) {
			return $tmp;
		}
		return long2ip($ip);
	}

}
