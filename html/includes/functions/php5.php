<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 by Myndworx Asylum                          |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |  +-------------------------------------------------------------------+
  | php5.php - NexOS php5 file                                        |
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

if (!function_exists('stripos')) {

	function stripos($str, $needle, $offset=0) {
		if (is_scalar($str) && is_scalar($str) && is_int($offset)) {
			if (false === $pos = strpos(strtolower($str), strtolower($needle), $offset)) {
				return false;
			}
			#else if ($pos == 0) {
			else if ($pos == 0 || empty($pos)) {
				return true;
			}
			return $pos;
		}
		return false;
	}
}
