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
  Dragonfly CMS, Copyright (c) 2011 by CPGNuke Dev Team
  http://dragonflycms.org
  Released under GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/classes/profiler.php,v $
  $Revision: 1.4 $
  $Author: nanocaiordo $
  $Date: 2011/03/20 04:44:51 $
**********************************************/

abstract class Profiler
{

	private static $i;

	public static function start()
	{
		self::$i=-1;
		register_tick_function('Profiler::count', true);
	}

	public static function stop()
	{
		unregister_tick_function('Profiler::count');
		trigger_error('Ticks needed to complete the requested operation: '.self::$i, E_USER_NOTICE);
	}

	public static function count() { ++self::$i; }

}
