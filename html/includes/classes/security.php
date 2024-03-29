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
	MOO CMS, Copyright (c) 2007 The MOO Dev. Group. All rights reserved.

	This source file is free software; you can redistribute it and/or
	modify it under the terms of the MOO Public License as published
	by the MOO Development Group; either version 1 of the License, or
	(at your option) any later version.

  $Source: /cvs/html/includes/classes/security.php,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 01:03:16 $
**********************************************/
/*
ban_type: 0 = just ban a ip
          1 = it's a bot
          2 = email
          3 = referer
          4 = email and referer
          5 = disallowed usernames
          6 = MAC address
          7 = flood ban
          8 = protected ip
*/

class Security
{

	public static function init()
	{
		# Show error page if the http server sends an error
		if (isset($_SERVER['REDIRECT_STATUS']) && $_SERVER['REDIRECT_STATUS'] >= 400 && $_SERVER['REDIRECT_STATUS'] <= 503) {
			cpg_error('', $_SERVER['REDIRECT_STATUS']);
		}
		if (!empty($_SESSION['SECURITY']['banned'])) { cpg_error('', $_SESSION['SECURITY']['banned']); }
		global $MAIN_CFG, $SESS, $db, $prefix;
		# get the visitor IP
		$ip = NET::get_ip();
		# If not a member check for bot or ban
		if ($SESS->new) {
			$_SESSION['SECURITY']['banned'] = false;
			# is it a bot or a ban?
			if (strlen($ip) == 4) {
				list(,$ip4) = unpack('N',$ip);
				if ($result = $db->sql_query('SELECT * FROM '.$prefix."_security WHERE ban_ipv4_s = $ip4 OR (ban_ipv4_s < $ip4 AND ban_ipv4_e >= $ip4) LIMIT 1", TRUE, TRUE)) {
					$row = $db->fetch_array($result, SQL_ASSOC);
					$db->free_result($result);
				}
			}
			if (empty($row)) {
				$mac = (strlen($ip) == 16) ? ' OR ban_ipn='.$db->binary_safe(substr($ip,-8)) : '';
				$ipn = $db->binary_safe($ip);
				if ($result = $db->sql_query('SELECT * FROM '.$prefix."_security WHERE ban_ipn=$ipn$mac LIMIT 1", TRUE, TRUE)) {
					$row = $db->fetch_array($result, SQL_ASSOC);
					$db->free_result($result);
				}
			}
			if (!empty($row)) {
				if ($row['ban_type'] == 1) {
					$agent = Security::detectBot($row['ban_string']);
				} else if ($row['ban_type'] == 7 && $row['ban_time'] < time() && $MAIN_CFG['_security']['unban']) {
					$db->sql_query('DELETE FROM '.$prefix."_security WHERE ban_ipn=$ipn$mac");
				} else if ($row['ban_type'] == 8) {
					$_SESSION['SECURITY']['shield'] = strlen($ip);
				} else {
					$_SESSION['SECURITY']['banned'] = 800;
				}
			}
			# is it a referer spam?
			if ($MAIN_CFG['_security']['referers'] && !$_SESSION['SECURITY']['banned'] &&
			    !empty($_SERVER['HTTP_REFERER']) &&
			    strpos($_SERVER['HTTP_REFERER'], $MAIN_CFG['server']['domain']) === false &&
			    !Security::check_domain($_SERVER['HTTP_REFERER']))
			{
				$_SESSION['SECURITY']['banned'] = 801;
			}
		}
		# Detect User-Agent and Operating System
		if (empty($_SESSION['SECURITY']['UA'])) {
			if (empty($agent) && !$_SESSION['SECURITY']['banned']) {
				include(CORE_PATH.'data/ua.inc');
			}
			if (!empty($agent['bot'])) {
				$_SESSION['SECURITY']['nick'] = $agent['bot'];
				$_SESSION['SECURITY']['banned'] = $agent['banned'];
			}
			$_SESSION['SECURITY']['UA'] = empty($agent['ua']) ? 'N/A' : $agent['ua'];
			$_SESSION['SECURITY']['OS'] = empty($agent['os']) ? 'N/A' : $agent['os'];
			$_SESSION['SECURITY']['UA_ENGINE'] = empty($agent['engine']) ? 'N/A' : $agent['engine'];
			if (!$_SESSION['SECURITY']['banned'] && false === $agent) {
				$_SESSION['SECURITY']['banned'] = 802;
			}
		}

		define('SEARCHBOT', ($_SESSION['SECURITY']['UA'] == 'bot') ? $_SESSION['SECURITY']['nick'] : false);

		if (!empty($_SESSION['SECURITY']['banned'])) { cpg_error('', $_SESSION['SECURITY']['banned']); }
	}

	public static function check()
	{
		if ($_SESSION['SECURITY']['banned']) { return; }
		global $MAIN_CFG;
		# anti-flood protection
		if ($MAIN_CFG['_security']['flooding'] && SEARCHBOT != 'Google') {
			Security::flood();
		}
	}

	public static function check_post()
	{
		if ($_SERVER['REQUEST_METHOD'] != 'POST') { return false; }
		global $module_name;
		if ($_SESSION['SECURITY']['page'] != $module_name) { cpg_error(_SEC_ERROR, _ERROR_BAD_LINK); }
		return true;
	}

	public static function check_domain($domain)
	{
		if (!preg_match('#[^\./]+\.[\w]+($|/)#', $domain)) { return false; }
		$domains = '';
		global $db, $prefix;
		if ($result = $db->sql_query('SELECT ban_string FROM '.$prefix."_security WHERE ban_type IN (3,4)", TRUE, TRUE)) {
			while ($e = $db->fetch_array($result, SQL_NUM)) { $domains .= "|$e[0]"; }
		}
		if (empty($domains)) { return true; }
		return (preg_match('#('.str_replace('.', '\.', substr($domains,1).')#i'), $domain) < 1);
	}

	function check_email(&$email)
	{
		static $domains;
		if (strlen($email) < 6) return 0;
		$email = strtolower($email);
		# Although RFC 1035 doesn't allow 1 char subdomains we
		# allow it due to bug report 641
		if (!preg_match('#^[\w\.\+\-]+@(([0-9a-z\-]{1,25}\.)?[0-9a-z\-]{2,63}\.[a-z]{2,6}(\.[a-z]{2,6})?)$#', $email, $domain)) {
			return -1;
		}
		if (empty($domains)) {
			$domains = 'domain.tld';
			global $db, $prefix;
			if ($result = $db->sql_query('SELECT ban_string FROM '.$prefix."_security WHERE ban_type IN (2,4)", TRUE, TRUE)) {
				while ($e = $db->fetch_array($result, SQL_NUM)) { $domains .= "|$e[0]"; }
			}
			$domains = '#('.str_replace('.', '\.', $domains).')#i';
		}
		if (preg_match($domains, $domain[1], $match)) {
			$email = array($email, $match[1]);
			return -2;
		}
		return 1;
	}

	public static function get_ip()
	{
		$backtrace = debug_backtrace();
		trigger_error("DEPRECATED call to Security::get_ip() by {$backtrace[0]['file']} on line {$backtrace[0]['line']}.", E_USER_WARNING);
		return NET::get_ip();
	}

	private static function flood()
	{
		global $db, $prefix, $MAIN_CFG;
		$ip = NET::get_ip();
		$ipn = $db->binary_safe($ip);
		$delay = $MAIN_CFG['_security']['delay'];
		$flood_time = $flood_count = 0;
		$log = array();
		$time = time();
		if (!isset($_SESSION['SECURITY']['flood_start'])) {
			$db->sql_query('DELETE FROM '.$prefix.'_security_flood WHERE flood_time <= '.$time);
		} else {
			$_SESSION['SECURITY']['flood_start'] = false;
		}

		if ($MAIN_CFG['_security']['debug'] || empty($_SESSION['SECURITY']['flood_time'])) {
			# try to load time from log
			if ($row = $db->sql_ufetchrow('SELECT * FROM '.$prefix.'_security_flood WHERE flood_ip ='.$ipn, SQL_ASSOC)) {
				if (!empty($row)) {
					$flood_time = $row['flood_time'];
					$flood_count = $row['flood_count'];
					if (!empty($row['log']) && $MAIN_CFG['_security']['debug']) {
						$log = unserialize($row['log']);
					}
				}
			}
		} else {
			$flood_time = $_SESSION['SECURITY']['flood_time'];
			$flood_count = $_SESSION['SECURITY']['flood_count'];
		}
		if ($flood_time >= $time) {
			# die with message and report
			++$flood_count;
			if ($flood_count <= 5) {
				if (empty($_SESSION['SECURITY']['shield']) && $flood_count > 2 && $flood_count <= 5) {
					Security::flood_log($ipn, !empty($row), $delay, $time, $log, $flood_count);
					global $LNG;
					get_lang('errors');
					$flood_time = (($flood_count+1)*2)/$delay;
					header($_SERVER['SERVER_PROTOCOL'].' 503 Service Unavailable');
					header('Retry-After: '.$flood_time);
					$msg = sprintf($LNG['_SECURITY_MSG']['_FLOOD'], $flood_time);
					if ($flood_count == 5) { $msg .= $LNG['_SECURITY_MSG']['Last_warning']; }
					$msg = sprintf(_JS_ALERT, $msg);
					cpg_error($msg, 'Flood Protection');
				}
			} else {
				if ($MAIN_CFG['_security']['debug']) {
					if (!empty($log)) { $log = Security::log_serializer($log); }
					else if (!empty($_SESSION['FLOODING'])) { $log = Security::log_serializer($_SESSION['FLOODING']); }
					$log = "'$log'";
					if (!empty($_SESSION['SECURITY']['shield'])) {
						if ($_SESSION['SECURITY']['shield'] == 4) {
							list(,$ip4) = unpack('N',$ip);
							$db->sql_query('UPDATE '.$prefix."_security SET log=$log WHERE ban_type=8 AND (ban_ipv4_s = $ip4 OR (ban_ipv4_s < $ip4 AND ban_ipv4_e >= $ip4))");
						} else {
							$mac = (strlen($ip) == 16) ? ' OR ban_ipn='.$db->binary_safe(substr($ip,-8)) : '';
							$db->sql_query('UPDATE '.$prefix."_security SET log=$log WHERE ban_type=8 AND (ban_ipn=$ipn$mac)");
						}
						$flood_time = $_SESSION['SECURITY']['flood_time'] = 0;
						$flood_count = $_SESSION['SECURITY']['flood_count'] = 0;
						return;
					}
				} else {
					$log = 'DEFAULT';
				}
				$db->sql_query('INSERT INTO '.$prefix."_security (ban_ipn, ban_type, ban_time, ban_details, log) VALUES ($ipn, '7', '".($time+$MAIN_CFG['_security']['bantime'])."', 'Flooding detected by User-Agent:\n{$_SERVER['HTTP_USER_AGENT']}', $log)", TRUE, TRUE);
				global $SESS;
				if (is_object($SESS)) $SESS->destroy();
				cpg_error('', 803);
			}
		} else {
			$log = null;
			$flood_count = 0;
			$_SESSION['FLOODING'] = array();
		}
		Security::flood_log($ipn, !empty($row), $delay, $time, $log, $flood_count);
	}

	private static function detectBot($where=false)
	{
		global $db, $prefix;
		$bot = false;
		# Identify bot by UA
		$where = ($where ? " WHERE agent_name LIKE '$where%'" : '');
		$result = $db->sql_query('SELECT agent_name, agent_fullname, agent_ban FROM '.$prefix."_security_agents$where ORDER BY agent_name", TRUE, TRUE);
		while ($row = $db->fetch_array($result, SQL_NUM)) {
			if (empty($row[1])) { continue; }
			if ($bot && empty($where)) {
				break;
			} else if (preg_match('#'.preg_quote($row[1]).'#', $_SERVER['HTTP_USER_AGENT'])) {
				$bot = $row;
			}
		}
		$db->free_result($result);
		return ($bot === false) ? false : array('ua' => 'bot', 'bot' => $bot[0], 'engine' => 'bot', 'banned' => (($bot[2] == -1) ? 410 : null));
	}

	private static function flood_log($ip, $update=false, $delay, $time, $log, $times)
	{
		global $MAIN_CFG;
		$timeout = ((($times+1)*2)/$delay)+$time;
		# maybe the UA doesn't accept cookies so we use another session log as well
		if (empty($_SESSION['SECURITY']['flood_time']) || $MAIN_CFG['_security']['debug']) {
			global $db, $prefix;
			if ($MAIN_CFG['_security']['debug']) { $log = "'".Security::log_serializer(Security::data_log($times, $log))."'"; }
			else { $log = 'DEFAULT'; }
			if ($update) {
				$db->sql_query('UPDATE '.$prefix."_security_flood SET flood_time='$timeout', flood_count='$times', log=$log WHERE flood_ip=$ip");
			} else {
				$db->sql_query('INSERT INTO '.$prefix."_security_flood (flood_ip,flood_time,flood_count,log) VALUES ($ip, '$timeout', '$times', $log)", true);
			}
			$_SESSION['SECURITY']['flood_start'] = true;
		}
		$_SESSION['SECURITY']['flood_time'] = $timeout;
		$_SESSION['SECURITY']['flood_count'] = $times;
	}

	private static function detectProxy()
	{
		if (SEARCHBOT) { return $_SESSION['SECURITY']['nick']; }
		if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) return $_SERVER['HTTP_X_FORWARDED_FOR'];
		if (!empty($_SERVER['VIA'])) return $_SERVER['VIA'];
		$rating = 0;
		if ($_SERVER['SERVER_PROTOCOL'] == 'HTTP/1.0') $rating += 1;
		if ($_SERVER['HTTP_ACCEPT'] == '*/*') $rating += 3;
		if (intval($_SERVER['REMOTE_PORT']) > 5000) $rating += 5;
		if (!$rating || $rating == 1) return 'None';
		if ($rating <= 4) $rating = 'Probably anonymous';
		else $rating = 'Yes, anonymous';
		return $rating;
	}

	private static function data_log($c, $l)
	{
		$l[$c]['S_TIME'] = time();
		$l[$c]['S_USER'] = !empty($_SESSION['CPG_USER']) ? $_SESSION['CPG_USER']['username'] : '';
		$l[$c]['S_UA'] = $_SERVER['HTTP_USER_AGENT'];
		$l[$c]['S_ADDRESS'] = $_SERVER['REMOTE_ADDR'];
		$l[$c]['S_METHOD'] = $_SERVER['REQUEST_METHOD'];
		$l[$c]['S_URI'] = $_SERVER['REQUEST_URI'];
		$l[$c]['S_REFERER'] = !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
		# if proxy is behind a firewall then bypass-client will contain the firewall ip
		$l[$c]['S_CACHE_CONTROL'] = !empty($_SERVER['HTTP_CACHE_CONTROL']) ? $_SERVER['HTTP_CACHE_CONTROL'] : '';
		$l[$c]['S_PROXY'] = self::detectProxy();
		$_SESSION['FLOODING'][$c] = $l[$c];
		return $l;
	}

	private static function log_serializer($log)
	{
		for($i=0; $i<count($log); ++$i) {
			foreach ($log[$i] as $key => $val) {
				$log[$i][$key] = Fix_Quotes($val, true);
			}
		}
		return serialize($log);
	}
}
