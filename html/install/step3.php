<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 2013 by Myndworx Asylum                   |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | step3.php - NexOS installation step 3 - Build database            |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      | 
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |  
  +-------------------------------------------------------------------+
  | CPG Dragonfly™ CMS                                                |
  | Copyright © 2004 - 2005 by CPG-Nuke Dev Team                      |
  | http://www.dragonflycms.com                                       |
  | Dragonfly is released under the terms and conditions of the GNU   |
  | GPL version 2 or any later version                                |  
  +-------------------------------------------------------------------+
*/
if (!defined('INSTALL')) { exit; }

inst_header();
$server = get_db_vars($db);
if ((!isset($current_version) || !$current_version) && !isset($_POST['version'])) {
	if (SQL_LAYER == 'mysql') {
		echo $instlang['s1_good'].'<br /><br />';
		if ($server['version'][0] < 4) {
			echo sprintf($instlang['s1_mysql'], $server['version']);
			return;
		}
	}

	if (isset($db->TBL->users) && $db->sql_query('SELECT * FROM '.$user_prefix.'_users LIMIT 0', true)) {
		if ($result = $db->sql_query('SELECT Version_Num FROM '.$prefix.'_config', true)) {
		   list($current_version) = $db->sql_fetchrow($result);
		} else {
			if ($db->sql_query('SELECT alttext FROM '.$prefix.'_banner LIMIT 0', true)) {
				$current_version = '6.0';
			} else if ($db->sql_query('SELECT dateend FROM '.$prefix.'_banner LIMIT 0', true)) {
				$current_version = '5.6';
			} else if ($db->sql_query('SELECT parentid FROM '.$prefix.'_downloads_categories LIMIT 0', true)) {
				$current_version = '5.5';
			} else {
				$current_version = 'unknown';
			}
		}
		if ($current_version != 'unknown') {
			printf($instlang['s1_upgrade'], $current_version);
			if ($current_version == '6.0' || $current_version == '5.6' || $current_version == '5.5') {
				echo '<br /><br />'.$instlang['s1_splatt'];
			}
		} else {
			echo $instlang['s1_unknown'];
			return;
		}
	} else {
		echo $instlang['s1_new'];
		$current_version = 0;
	}
	echo '<script language="JavaScript" type="text/javascript">
<!--'."
maketip('dbase','".$instlang['s1_dbconfig']."','".$instlang['s1_database']."');
maketip('dbms','".$instlang['s1_server']."','".   sprintf($instlang['s1_server2'], $server['engine'])  ."');
maketip('hostname','".$instlang['s1_host']."','".$instlang['s1_host2']."');
maketip('dbname','".$instlang['s1_dbname']."','".$instlang['s1_dbname2']."');
maketip('prefix','".$instlang['s1_prefix']."','".$instlang['s1_prefix2']."');
maketip('uprefix','".$instlang['s1_userprefix']."','".$instlang['s1_userprefix2']."');
maketip('writeaccess','".$instlang['s1_directory_write']."','".$instlang['s1_directory_write2']."');
maketip('cache','".$instlang['s1_cache']."','".$instlang['s1_cache2']."');
maketip('avatars','".$instlang['s1_avatars']."','".$instlang['s1_avatars2']."');
maketip('albums','".$instlang['s1_albums']."','".$instlang['s1_albums2']."');
maketip('userpics','".$instlang['s1_userpics']."','".$instlang['s1_userpics2']."');
".'// -->
</script>
<table>
	<tr>
	  <th colspan="2" nowrap="nowrap">'.$instlang['s1_dbconfig'].'</th>
	  <td>'.inst_help('dbase').'</td>
	</tr><tr>
	  <td colspan="3"><hr noshade="noshade" size="1" /></td>
	</tr><tr>
	  <td>'.$instlang['s1_server'].'</td><td>'.$server['server'].'</td>
	  <td>'.inst_help('dbms').'</td>
	</tr><tr>
	  <td>'.$instlang['s1_host'].'</td><td>'.$dbhost.'</td>
	  <td>'.inst_help('hostname').'</td>
	</tr><tr>
	  <td>'.$instlang['s1_dbname'].'</td><td>'.$dbname.'</td>
	  <td>'.inst_help('dbname').'</td>
	</tr><tr>
	  <td>'.$instlang['s1_prefix'].'</td><td>'.$prefix.'</td>
	  <td>'.inst_help('prefix').'</td>
	</tr><tr>
	  <td>'.$instlang['s1_userprefix'].'</td><td>'.$user_prefix.'</td>
	  <td>'.inst_help('uprefix').'</td>
	</tr><tr>
	  <td colspan="3"><hr noshade="noshade" size="1" /></td>
	</tr>
</table>'
	.$instlang['s1_correct'].'<p align="center"><input type="hidden" name="step" value="3" />
	<input type="hidden" name="version" value="'.$current_version.'" />
	<input type="submit" value="'.$instlang['s1_build_db'].'" class="formfield" /></p>';
}
else {
	if (SQL_LAYER == 'mysql' && $server['unicode'] &&
	   ($server['character_set_database'] != 'utf8' || $server['collation_database'] != 'utf8_general_ci')) {
		$db->query("ALTER DATABASE `$dbname` DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci");
	}

	# build the database
	$version = isset($_POST['version']) ? $_POST['version'] : $current_version;
	set_time_limit(0);
	if (CAN_MOD_INI) ini_set('memory_limit', -1);

	echo '<div style="text-align:left">';

	try {
		$db->begin();

		echo '<h2>'.$instlang['s3_sync_schema'].': </h2>';

		# create/validate the database tables
		$table_files = array('core', 'coppermine', 'news', 'surveys');
		foreach ($table_files as $file) {
			if ($db->XML->sync_schema_from_file(BASEDIR."install/sql/schemas/$file.xml")) {
				foreach ($db->XML->queries as $query) {
					$db->query($query);
					echo '. ';flush();
				}
			} else {
				print_r($db->XML->errors);
				exit;
			}
		}

		$db->commit();
	} catch (Exception $e) {
		echo $e->getMessage();
		return;
	}

	try {
		$db->begin();

		echo '<h2>'.$instlang['s3_sync_data'].':</h2>';

		$data_files = array('core', 'coppermine');
		foreach ($data_files as $file) {
			if ($db->XML->sync_schema_from_file(BASEDIR."install/sql/data/$file.xml")) {
				foreach ($db->XML->queries as $query) {
					$db->query($query);
					echo '. ';flush();
				}
			} else {
				print_r($db->XML->errors);
				exit;
			}
		}

		require_once(CORE_PATH.'classes/installer.php');
		require_once(CORE_PATH.'classes/db_check.php');

		# create list of current tables
		$tablelist = $db->list_tables();

		$installer = new cpg_installer(true, true);
		if (!$version) {
			require('install/sql/new.php');
		} else {
			require('install/sql/upgrade.php');
		}
		$installer->add_query('UPDATE', 'config_custom', "cfg_value='".CPG_NUKE."' WHERE cfg_name='global' AND cfg_field='Version_Num'");
		echo '<h2>'.$instlang['s3_exec_queries'].': </h2>';

		if (!$installer->install(false, '. ')) {
			echo $installer->error.'<br /><br />'.$instlang['s1_fatalerror'];
			exit;
		}

		$db->commit();
	} catch (Exception $e) {
		echo $e->getMessage().' '.$e->getQuery();
		return;
	}

	echo '</div>';

	if ($version) {
		Cache::clear();
		echo $instlang['s1_doneup'];
	} else {
		echo $instlang['s1_donenew'].'<p align="center"><input type="hidden" name="step" value="4" /><input type="submit" value="'.$instlang['s1_necessary_info'].'" class="formfield" /></p>';
	}
	flush();
}
