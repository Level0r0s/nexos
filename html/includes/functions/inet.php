<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 by Myndworx Asylum                          |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |  +-------------------------------------------------------------------+
  | inet.php - NexOS IPV4/IPV6 conversion file                        |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org                                  |  +-------------------------------------------------------------------+
  |Original Copyright below                                           |  +-------------------------------------------------------------------+
  | CPG Dragonfly™ CMS                                                |
  | Copyright © 2004 - 2005 by CPG-Nuke Dev Team                      |
  | http://www.dragonflycms.com                                       |
  | Dragonfly is released under the terms and conditions of the GNU   |
  | GPL version 2 or any later version                                |  +-------------------------------------------------------------------+
   Last modification notes:
    $Author$
    $Date$
    $Rev$
*/

/*
	Converts a human readable IPv4 or IPv6 address into an address family
	appropriate 32bit (4 bytes) or 128bit (16 bytes) binary structure.
*/
function inet_pton($ip)
{
	# ipv4
	# check for a IPv4-mapped address
	if (preg_match('#^::ffff:([0-9A-F]{1,4}):([0-9A-F]{1,4})$#i', $ip, $match)) {
		$match[1] = str_pad($match[1], 4, '0', STR_PAD_LEFT);
		$match[2] = str_pad($match[2], 4, '0', STR_PAD_LEFT);
		$ip1 = hexdec(substr($match[1],0,2));
		$ip2 = hexdec(substr($match[1],2));
		$ip3 = hexdec(substr($match[2],0,2));
		$ip4 = hexdec(substr($match[2],2));
		$ip = pack('N',NET::ip2long("$ip1.$ip2.$ip3.$ip4"));
	}
	else if (strpos($ip, '.') !== FALSE) {
		# check for a hybrid IPv4-compatible address
		$pos = strrpos($ip, ':');
		if ($pos !== FALSE) { $ip = substr($ip, $pos+1); }
		# finally make the binary code
		$ip = pack('N',NET::ip2long($ip));
	}
	# ipv6
	else if (strpos($ip, ':') !== FALSE) {
		# fix shortened ip's
		$c = substr_count($ip, ':');
		if ($c < 7) { $ip = str_replace('::', str_pad('::', 9-$c, ':'), $ip); }
		# now fix the group lengths
		$ip = explode(':', $ip);
		$res = '';
		foreach ($ip as $seg) { $res .= str_pad($seg, 4, '0', STR_PAD_LEFT); }
		# finally make the binary code
		$ip = pack('H'.strlen($res), $res);
	}
	return $ip;
}

/*
	Converts a binary IPv4 or IPv6 address into an
	address family appropriate string representation.
*/
function inet_ntop($ip)
{
	# ipv4
	if (strlen($ip) == 4) {
		list(,$ip) = unpack('N',$ip);
		$ip = long2ip($ip);
	}
	# ipv6
	else if (strlen($ip) == 16) {
		$ip = bin2hex($ip);
		$ip = substr(chunk_split($ip,4,':'),0,-1);
		$ip = explode(':',$ip);
		$res='';
		foreach ($ip as $seg) {
			while ($seg{0} == '0') $seg = substr($seg,1);
			if ($seg != '') {
				$res .= ($res==''?'':':').$seg;
			} else {
				if (strpos($res,'::') === false) {
					if (substr($res,-1) == ':') continue;
					$res .= ':';
					continue;
				}
				$res .= ($res==''?'':':').'0';
			}
		}
		$ip = $res;
	}
	return $ip;
}
