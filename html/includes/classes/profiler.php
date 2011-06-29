<?php
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
