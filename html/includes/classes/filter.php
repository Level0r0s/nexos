<?php
/*********************************************
  Dragonfly CMS, Copyright (c) 2004 by DragonflyCMS Dev. Team.
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/classes/filter.php,v $
  $Revision: 10.1 $
  $Author: nanocaiordo $
  $Date: 2011/04/17 06:11:10 $
**********************************************/

# http://www.php.net/manual/en/filter.filters.validate.php
abstract class Filter
{

	/*
		@ Return modified IP or false on failure
	*/
	public static function ipv4(&$ip, $private=false)
	{
		$ip = trim($ip);
		if (strpos($ip, '.') === false) { return false; }
		# check for ipv4 mapped to ipv6
		$pos = strrpos($ip, ':');
		if ($pos !== false) { $ip = substr($ip, $pos+1); }

		$ip = filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_RES_RANGE);
		if (!$private && $ip) {
			$ip = filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE);
		}
		return $ip;
	}

	/*
		@ Return modified IP or false on failure
	*/
	public static function ipv6(&$ip, $private=false)
	{
		# $private supported only on ipve mapped to ipv6
		if (strpos($ip, ':') === false) { return false; }
		# fix shortened ip's
		$c = substr_count($ip, ':');
		if ($c < 7) { $ip = str_replace('::', str_pad('::', 9-$c, ':'), $ip); }
		return filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6);
	}

	/*
		@ Return bool
	*/
	public static function email($email) {
		# Although RFC 1035 doesn't allow 1 char subdomains we allow it due to bug report 641
		return 1 === preg_match('#^[\w\.\+\-]+@(([\w]{1,25}\.)?[0-9a-z\-]{2,63}\.[a-z]{2,6}(\.[a-z]{2,6})?)$#', $email);
	}

	/*
		@ Return bool
	*/
	public static function domain($www)
	{
		if (false === strpos($www, '://')) {
			//if (preg_match('#^([a-z0-9\-\.]+)?[a-z0-9\-]+\.[a-z]{2,4}\:443$#i')) {
			//	$www = 'https://'.$www;
			//} else {
				$www = 'http://'.$www;
			//}
		}
		return 1 === preg_match('#^http[s]?\:\/\/([a-z0-9\-\.]+)?[a-z0-9\-]+\.[a-z]{2,4}$#i', $www);
	}
}
