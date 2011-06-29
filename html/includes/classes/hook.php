<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2008 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/classes/hook.php,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 01:03:15 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }

abstract class HOOK
{

	const MOD = 0;
	const TPL = 1;

	public static function execute($file=null, $function=0, $type=HOOK::MOD)
	{
		if (!($hook = HOOK::get_hooks())) { return $hook; }
		$hook = $hook[$type];

		static $loaded;
		if (empty($loaded)) { $loaded = array(); }

		switch ($type) {

			case HOOK::MOD:
				if (WINDOWS) { $file = str_replace('\\', '/', $file); }
				if (0 === strpos($file, BASEDIR) && ($file = str_replace(BASEDIR, '', $file)) && isset($hook[$file]) && isset($hook[$file][$function]))
				{
					$modnum = count($hook[$file][$function]);
					for ($to = 0; $to < $modnum; ++$to) {
					//if (!file_exists($hook[$file][$to]['hfile'])) { return array(); }
						if (!isset($loaded[$hook[$file][$to]['hfile']])) {
							include_once($hook[$file][$to]['hfile']);
							$loaded[$hook[$file][$to]['hfile']] = 1;
						}
						if (!empty($hook[$file][$function][$to]['hfunc'])) {
							return call_user_func($hook[$file][$function][$to]['hfunc']);
				}	}	}
			break;

			case HOOK::TPL:
				if (!isset($hook[$file])) { return array(); }
				$tplnum = count($hook[$file]);
				for ($to = 0; $to < $tplnum; ++$to) {
					//if (!file_exists($hook[$file][$to]['hfile'])) { return array(); }
					if (!isset($loaded[$hook[$file][$to]['hfile']])) {
						include_once($hook[$file][$to]['hfile']);
						$loaded[$hook[$file][$to]['hfile']] = 1;
					}
					if (!empty($hook[$file][$to]['hfunc'])) {
						return call_user_func($hook[$file][$to]['hfunc']);
					}
				}
			break;

			default: return array();
		}
	}

	private static function get_hooks()
	{
		global $hooks;
		static $hooks;
		if (is_array($hooks) || ($hooks = Cache::array_load('hooks')) || is_array($hooks)) { return $hooks; }
		$hooks = array();
		global $db, $prefix;
		$result = $db->sql_query('SELECT type, cfile, cfunc, hfile, hfunc FROM '.$prefix.'_hooks WHERE active=1');
		while ($row = $db->sql_fetchrow($result, SQL_ASSOC)) {
			switch ($row['type']) {

				case HOOK::MOD:
					$row['cfunc'] = empty($row['cfunc']) ? 0 : $row['cfunc'];
					$hooks[$row['type']][$row['cfile']][$row['cfunc']][] = array('hfile' => $row['hfile'], 'hfunc' => $row['hfunc']);
				break;

				case HOOK::TPL:
					# in this case cfile becomes a blockname template variable
					$hooks[$row['type']][$row['cfile']][] = array('hfile' => $row['hfile'], 'hfunc' => $row['hfunc']);
				break;

				default: break;
			}
		}
		$db->free_result($result);
		Cache::array_save('hooks');
		return $hooks;
	}

}
