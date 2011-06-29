<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2008 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/modules/Forums/classes/BoardCache.php,v $
  $Revision: 1.2 $
  $Author: nanocaiordo $
  $Date: 2008/08/25 13:02:35 $
**********************************************/

class BoardCache
{

	public static function conf($key='')
	{
		global $module_name, $board_config;
		static $conf;
		if (!is_array($conf) && !Cache::array_load('board_config', $module_name)) {
			global $db, $MAIN_CFG;
			$board_config = array();
			$result = $db->sql_query("SELECT * FROM ".CONFIG_TABLE);
			while ($row = $db->sql_fetchrow($result, SQL_ASSOC)) {
				$board_config[$row['config_name']] = $row['config_value'];
			}
			$db->sql_freeresult($result);
			$board_config['smilies_path'] = 'images/smiles';
			$board_config['sitename'] =& $MAIN_CFG['global']['sitename'];
			$board_config['site_desc'] =& $MAIN_CFG['global']['slogan'];
			$board_config['board_email'] =& $MAIN_CFG['global']['adminmail'];
			$board_config['server_name'] =& $MAIN_CFG['server']['domain'];
			$board_config['board_email_sig'] = '';
			ksort($board_config);
			Cache::array_save('board_config', $module_name);
		}
		$conf = $board_config;
		if ($key) { return (isset($conf[$key]) ? $conf[$key] : false); }
		return $conf;
	}

	public static function attach($key='')
	{
		global $module_name, $attach_config;
		static $attach;
		if (!is_array($attach) && !Cache::array_load('attach_config', $module_name)) {
			global $db;
			$attach_config = array();
			$result = $db->sql_query('SELECT * FROM '.ATTACH_CONFIG_TABLE);
			while ($row = $db->sql_fetchrow($result, SQL_ASSOC)) {
				$attach_config[$row['config_name']] = $row['config_value'];
			}
			$db->sql_freeresult($result);
			$attach_config['board_lang'] = self::conf('default_lang');
			Cache::array_save('attach_config', 'Forums', $attach_config);
		}
		$attach = $attach_config;
		if ($key) { return (isset($attach_config[$key]) ? $attach_config[$key] : false); }
		return $attach;
	}

	public static function categories()
	{
		global $module_name, $category_rows;
		static $categories;
		if (!is_array($categories) && !Cache::array_load('category_rows', $module_name)) {
			global $db, $category_rows;
			$category_rows = $db->sql_ufetchrowset('SELECT c.cat_id, c.cat_title, c.cat_order FROM ' . CATEGORIES_TABLE . ' c ORDER BY c.cat_order', SQL_ASSOC);
			Cache::array_save('category_rows', $module_name);
		}
		$categories = $category_rows;
		return $categories;
	}

	public static function moderators($forum_id=0)
	{
		global $module_name, $forum_moderators;
		static $moderators;
		# Obtain list of moderators of each forum
		# First users, then groups ... broken into two queries
		if (!is_array($moderators) && !is_array(Cache::array_load('forum_moderators', $module_name))) {
			global $db;
			$forum_moderators = array();
			$sql = 'SELECT aa.forum_id, u.user_id, u.username
					FROM '.AUTH_ACCESS_TABLE .' aa, '. USER_GROUP_TABLE. ' ug, '. GROUPS_TABLE. ' g, '. USERS_TABLE. ' u
					WHERE aa.auth_mod = 1 AND g.group_single_user = 1
						AND ug.group_id = aa.group_id AND g.group_id = aa.group_id
						AND u.user_id = ug.user_id
					GROUP BY u.user_id, u.username, aa.forum_id
					ORDER BY aa.forum_id, u.user_id';
			$result = $db->sql_query($sql);
			while ($row = $db->sql_fetchrow($result, SQL_ASSOC)) {
				$forum_moderators[$row['forum_id']][] = '<a href="'.URL::index("Your_Account&amp;profile=".$row['user_id']).'">'.$row['username'].'</a>';
			}
			$db->sql_freeresult($result);

			$sql = 'SELECT aa.forum_id, g.group_id, g.group_name
					FROM '.AUTH_ACCESS_TABLE.' aa, '.USER_GROUP_TABLE.' ug, '.GROUPS_TABLE.' g
					WHERE aa.auth_mod = 1 AND g.group_single_user = 0
						AND g.group_type <> '.GROUP_HIDDEN.'
						AND ug.group_id = aa.group_id AND g.group_id = aa.group_id
					GROUP BY g.group_id, g.group_name, aa.forum_id
					ORDER BY aa.forum_id, g.group_id';
			$result = $db->sql_query($sql);

			while ($row = $db->sql_fetchrow($result, SQL_ASSOC)) {
				$forum_moderators[$row['forum_id']][] = '<a href="'.URL::index("Groups&amp;".POST_GROUPS_URL."=".$row['group_id']).'">'.$row['group_name'].'</a>';
			}
			$db->sql_freeresult($result);
			Cache::array_save('forum_moderators', $module_name);
		}
		$moderators = $forum_moderators;
		if ($forum_id) { return (isset($moderators[$forum_id]) ? $moderators[$forum_id] : array()); }
		return $moderators;
	}

}

