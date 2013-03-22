<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | database.php - NexOS Administration Backend file                  |
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

if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin('database')) { die('Access Denied'); }
// SHOW FIELDS FROM `cms_stories`
// SHOW KEYS FROM `cms_stories`
$crlf = "\n";
$filename = $dbname.'_'.formatDateTime(time(), _DATESTRING3).'.sql';
$mode = (isset($_POST['mode']) && !$CLASS['member']->demo) ? $_POST['mode'] : '';
$type = strtoupper(substr($mode,0,-2));
if (isset($_POST['switchdb'])) $mode = '';
if (isset($_POST['tablelist']) && !isset($_POST['switchdb'])) {
	$tablelist = $_POST['tablelist'];
	$full = false;
} else {
	$tablelist = $db->list_tables();
	$full = true;
}

$pagetitle .= ' '._BC_DELIM.' '._DATABASE;

set_time_limit(0);

function show($mode, $tablelist, $query)
{
	global $db, $bgcolor2, $bgcolor3, $type, $dbname;
	require_once('header.php');
	GraphicAdmin('_AMENU0');
	OpenTable();
	if ($query === null) {
		echo 'Mode: <b>'.$mode.'</b> not available yet';
		return;
	}
	if (count($tablelist)) {
		$result = $db->sql_query($query);
		$numfields = $db->sql_numfields($result);
		echo '<span class="genmed"><strong>'._DATABASE.':</strong> '.$dbname.'</span><br /><br />Here are the results of your '.strtolower($type).'<br /><br />
		<table border="0" cellpadding="2"><tr bgcolor="'.$bgcolor2.'">';
		for ($j=0; $j<$numfields; $j++) {
			echo '<td><strong>'.$db->sql_fieldname($j, $result).'</strong></td>';
		}
		echo '</tr>';
		$bgcolor = $bgcolor3;
		while ($row = $db->sql_fetchrow($result)) {
			$bgcolor = ($bgcolor == '') ? ' bgcolor="'.$bgcolor3.'"' : '';
			echo '<tr'.$bgcolor.'>';
			for($j=0; $j<$numfields; $j++) {
				echo '<td>'.$row[$j].'</td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	}
	CloseTable();
}

function run_sql_in_background($db_name, $type, $db, $query)
{
	$result = $db->sql_query($query);
	$numfields = $db->sql_numfields($result);
	$txt = 'Here are the results of your '.strtolower($type).' request on '.$db_name."\n\n";
	$txt .= str_pad($db->sql_fieldname(0, $result), 50);
	for ($j=1; $j<$numfields; $j++) { $txt .= str_pad($db->sql_fieldname($j, $result), 30); }
	$txt .= "\n".str_pad('', (40*$numfields), '=')."\n";
	while ($row = $db->sql_fetchrow($result))
	{
		$txt .= str_pad($row[0], 50);
		for ($j=1; $j<$numfields; $j++) { $txt .= str_pad($row[$j], 30); }
		$txt .= "\n";
	}
	file_put_contents(BASEDIR.'cache/sql_result.txt', $txt);
}

switch ($mode) {

	case 'BackupDB':
		if (empty($tablelist)) { cpg_error('No tables found'); }
		require_once(CORE_PATH.'classes/sqlctrl.php');
		SQLCtrl::backup($dbname, $tablelist, $filename, isset($_POST['dbstruct']), isset($_POST['dbdata']), isset($_POST['drop']), isset($_POST['gzip']), $full);
		break;

	case 'OptimizeDB':
		if (DB_TYPE == 'postgresql') {
			$db->sql_query('VACUUM ANALYZE');
			$query = 'SELECT cl.relname as tablename, st.* FROM pg_class AS cl, pg_statistic AS st WHERE st.starelid=cl.relfilenode AND cl.relkind IN(\'r\') AND cl.relname NOT LIKE \'pg_%\' AND cl.relname NOT LIKE \'sql_%\' ORDER by cl.relname';
		} else {
			$query = "$type TABLE ".implode(", ", $tablelist);
		}
//		register_shutdown_function('run_sql_in_background', $dbname, $type, $db, $query);
		show($mode, $dbname, $tablelist, $query);
		break;

	case 'CheckDB':
		if (DB_TYPE == 'postgresql') {
			show($mode, $tablelist, null);
			break;
		} else {
		 	$query = "$type TABLE ".implode(", ", $tablelist).' EXTENDED';
		}
		show($mode, $tablelist, $query);
		break;
	case 'AnalyzeDB':
		if (DB_TYPE == 'postgresql') {
			$showblocks = 0;
			$MAIN_CFG['global']['admingraphic'] =~ 2;
			if ($MAIN_CFG['global']['admingraphic'] == 0)  $MAIN_CFG['global']['admingraphic'] = 4;
			$db->sql_query = 'ANALYZE';
			$query = 'SELECT tablename, attname, null_frac, avg_width, n_distinct, most_common_vals, most_common_freqs, correlation FROM pg_stats WHERE schemaname=\''.$schema.'\' ORDER BY tablename';
			//$query = 'SELECT * FROM pg_statistic';
		} else {
			$query = "$type TABLE ".implode(", ", $tablelist);
		}
		show($mode, $tablelist, $query);
		break;

	case 'RepairDB':
		if (DB_TYPE == 'postgresql') {
			$query = 'REINDEX '.$dbname;
		} else {
			$query = "$type TABLE ".implode(", ", $tablelist);
		}
		show($mode, $tablelist, $query);
		break;

	case 'StatusDB':
		$showblocks = 0;
		if (DB_TYPE == 'postgresql') {
			$schema = $db->sql_ufetchrowset('SELECT current_schema()');
			$query = 'SELECT relname, seq_scan, seq_tup_read, idx_scan, idx_tup_fetch, n_tup_upd, n_tup_del FROM pg_stat_user_tables WHERE schemaname = \''.$schema[0][0].'\' ORDER BY relname';
		} else {
			$query = "SHOW TABLE STATUS";
		}
		show($mode, $tablelist, $query);
		break;

	case 'RestoreDB':
		require_once('header.php');
		GraphicAdmin('_AMENU0');
		require_once(CORE_PATH.'classes/sqlctrl.php');
		if (!SQLCtrl::query_file($_FILES['sqlfile'], $error)) { cpg_error($error); }
		OpenTable();
		echo '<span class="genmed"><strong>'._DATABASE.': '.$dbname.'</strong></span><br /><br />Importation of <em>'.$_FILES['sqlfile']['name'].'</em> was successful';
		CloseTable();
		break;

	case 'Installer':
		if (!is_dir('cache') || !is_writable('cache')) {
			cpg_error('Cache directory doesn\'t exists or not writable');
		}
		require_once('header.php');
		GraphicAdmin('_AMENU0');
		foreach ($tablelist as $table) {
			$list = $db->list_columns($table);
			if (0 === strpos($table, $prefix.'_')) {
				$table = str_replace($prefix.'_', '', $table);
			} else if (0 === strpos($table, $user_prefix.'_')) {
				$table = str_replace($user_prefix.'_', '', $table);
			}
			$ids = false;
			$space = '  ';
			$filename = "cache/installer_{$table}.php";
			$data = "<?php\n";
			$data .= "/*\n\$tables['$table'] = array(\n";
			$i = 0;
			foreach ($list as $field => $val) {
				$data .= "$space'".($i++)."' => array(";
				$type = "'Type' => ";
				$defaults = "'Null' => ";
				if (false !== strpos($val['type'], 'SERIAL')) {
					$type = $type . "'{$val['type']}',";
					$defaults = '0),';
					$ids = $field;
				} else {
					if (preg_match('#(INT|BOOL|BINARY|BYTEA)#', $val['type'])) {
						$val['type'] = preg_replace('#(VARBINARY|BYTEA)\(([0-9]+)\)#', "VARBINARY.'($2)'", $val['type']);
						$type = $type . "DBFT_{$val['type']},";
						if ('VARBINARY' === $val['type'] && !$val['notnull']) {
							$defaults = $defaults . "1),\n";
						} else {
							$defaults = $defaults . intval(!$val['notnull']).", 'Default' => ".intval($val['default'])."),\n";
						}
					} else {
						$type = $type . "'{$val['type']}',";
						if (!$val['notnull']) {
							$defaults .= "1),\n";
						} else {
							$defaults .= "0, 'Default' => '{$val['default']}'),\n";
						}
					}
				}
				$data .= "$type $defaults";
			}
			$data .= ");\n";
			if ($ids) { $data .= "\$table_ids['$table'] = '$ids';\n"; }
			$index = $db->list_indexes($prefix.'_'.$table);
			$data .= "\n\$indexes['{$table}'] = array(\n";
			foreach ($index as $name => $val) {
				$data .= "$space'{$name}' => array('unique' => ".intval($val['unique']).", 'type' => '{$val['type']}',\n";
				$cols = $val['columns'];
				$n = count($cols);
				for ($i=0; $i<$n; ++$i) {
					$data .= "$space $i => array('name' => '{$cols[$i]['name']}', 'Sub_part' => '', 'Null' => 0)";
					if ($i+1 < $n) { $data .= ",\n"; }
					else { $data .= "),\n"; }
				}
			}
			$data .= ");\n";
			$data .= "*/";
			file_write($filename, $data);
		}
		URL::redirect(URL::admin('cache'));
	break;

	default:
		require_once('header.php');
		GraphicAdmin('_AMENU0');
		$cpgtpl->assign_vars(array(
			'U_ACTION' => URL::admin(),
			'S_DBTYPE' => DB_TYPE,
			'S_DATABASE' => $dbname,
			'ZLIB' => extension_loaded('zlib')
		));

		foreach ($tablelist as $table) {
			$cpgtpl->assign_block_vars('tables', array(
				'S_NAME' => $table
			));
		}
		$cpgtpl->set_handle('body', 'admin/database.html');
		$cpgtpl->display('body');

		break;
}
