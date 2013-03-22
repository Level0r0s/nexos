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
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/classes/multibyte.php,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 01:03:15 $
**********************************************/

abstract class MB {

	public static function tolower($str) { return mb_strtolower($str); }
	public static function substr($str, $start, $end=0) { return mb_substr($str, $start, $end); }
	public static function rpos($str, $needle) { return mb_strrpos($str, $needle); }
	public static function len($str) { return mb_strlen($str); }
	public static function ucfirst($str) { return mb_strtoupper(mb_substr($str, 0, 1)).mb_substr($str, 1); }

	/*
	  This function replaces special UTF characters to their ANSI equivelant for
	  correct processing by SQL, keywords, search, etc.
	*/
	public static function fix_spaces($str)
	{
		# replace NO-BREAK and Ideographic space
		$str = preg_replace('#[\xC2\xA0]|[\xE3][\x80][\x80]#', ' ', $str);
		return $str;
	}

}

if (!function_exists('mb_strtolower')) { require CORE_PATH.'functions/mb.php'; }
if (function_exists('mb_internal_encoding')) { mb_internal_encoding('UTF-8'); }
