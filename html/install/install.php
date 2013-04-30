<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | Install.php - NexOS installation entry point and license display  |
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
// Disable DOS Attacks and any other strange behavior
if (((empty($_SERVER['HTTP_USER_AGENT']) || $_SERVER['HTTP_USER_AGENT'] == '-') && !defined('XMLFEED')) || defined('CORE_PATH')) { exit; }

// Create constants
define('IN_NEXOS', 1);
define('CPG_NUKE', '10.0.8');
define('NEXOS_VERSION', '0.0.0.2');
define('GZIPSUPPORT', extension_loaded('zlib'));
define('WINDOWS', (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN'));
$phpver = explode('.', phpversion());
define('PHPVERS', intval($phpver[0].$phpver[1]));
$nxs_not_installed = 1;

//Define file paths
define('ROOTDIR', $_SERVER['DOCUMENT_ROOT']);
define('BASEDIR', ROOTDIR."/");
define('CORE_PATH', BASEDIR."includes/");
define('INSTALL_PATH', BASEDIR."install/");
define('DEBUG_PATH', BASEDIR."debug/");
define('CONFIG_FILE', CORE_PATH."config.php");

// Are we allowed to modify php.ini on the fly ?
define('CAN_MOD_INI', false === stripos(ini_get('disable_functions'), 'ini_set'));
define('MAGICQUOTES', (PHPVERS < 60 ? get_magic_quotes_gpc()||ini_get('magic_quotes_sybase') : false));
if (WINDOWS || !function_exists('posix_getpwuid')) {
	define('NEXOS_OWNER', 'N/A');
	define('_PROCESS_UID', '0');
	define('_PROCESS_OWNER', 'nobody');
} else {
	define('_NEXOS_OWNER',  get_current_user());
	define('_PROCESS_UID', posix_geteuid());
	$processUser = posix_getpwuid(_PROCESS_UID);
	define('_PROCESS_OWNER', $processUser['name']);
}

// IE8 google.com/search?q=X-Content-Type-Options
header('X-Content-Type-Options: nosniff');
// Set UTF-8 encoding
if (function_exists('mb_language')) { mb_language('uni'); }
if (function_exists('mb_internal_encoding')) { mb_internal_encoding('UTF-8'); }
// Change behaviour for specific PHP versions
date_default_timezone_set('UTC');
// Set default settings
header('X-Powered-By: The NexOS CMS website engine');
if ($_SERVER['REQUEST_METHOD'] == 'HEAD') { exit; }
if (PHPVERS < 53) {
	//Disable magic_quotes
	set_magic_quotes_runtime(0);
}
if (PHPVERS < 60) { if (CAN_MOD_INI) { ini_set('magic_quotes_sybase', 0); }}
umask(0);
if (CAN_MOD_INI) {
	ini_set('magic_quotes_runtime', 0);
	ini_set('zlib.output_compression', 0);
}
// Compress output if server/php config allows
if (ini_get('output_buffering')) {
	ob_end_clean();
	header('Content-Encoding: ');
}
// Check input variables
// Destroy GET/POST/Cookie variables from the global scope since IIS can't turn off register_globals as Apache can thru .ht*
if (intval(ini_get('register_globals')) != 0) {
	foreach ($_REQUEST AS $key => $val) { if (isset($$key)) unset($$key); }
}
if (is_array($_POST)) { array_walk($_POST, 'Prepare_INPUT'); }
if (is_array($_GET)) { array_walk($_GET, 'Prepare_INPUT'); }

// Setup error reporting
error_reporting(E_ALL);
//Define installation variable
define('INSTALL', 1);
//Enable Krumo - Remove for production release
require_once(DEBUG_PATH.'/class.krumo.php');

//Get post info and determine what step of the install we are in
$go = 0;
$action = "";
if (isset($_POST['step'])) {
	if (!preg_match('#^[0-9]$#', $_POST['step'])) exit;
	$go = intval($_POST['step']);
}
if (isset($_POST['action'])) {
	if (!preg_match('/testdb/', $_POST['action'])) exit;
	$action = $_POST['action'];
}

//Set up images array for completion status images (Checked/Unchecked)
$images = array();
for ($i=0; $i<7; ++$i) {
	$images[$i] = (($go == $i) ? 'box_current' : (($go > $i) ? 'checked' : 'unchecked'));
}
if ($go < 4 && isset($_COOKIE['installtest'])) { setcookie('installtest','',-1); }
// Doctrine DBAL
use Doctrine\Common\ClassLoader, Doctrine\DBAL\DriverManager;
if (!file_exists(CONFIG_FILE)) {
	require_once '../includes/lib/Doctrine/Common/ClassLoader.php';
	$classLoader = new ClassLoader('Doctrine', '../includes/lib/');
	$classLoader->register();
	$config = new \Doctrine\DBAL\Configuration();
	$connectionParams = array(
		'dbname'    => 'test',
		'user'      => 'root',
		'password'  => '',
		'host'      => 'localhost',
		'driver'    => 'pdo_mysql',
	);
}

//Load the language
if (isset($_GET['newlang'])) {
	setcookie('installlang',$_GET['newlang']);
	$currentlang = $_GET['newlang'];
} elseif (isset($_COOKIE['installlang'])) {
	$currentlang = $_COOKIE['installlang'];
}
$instlang = array();
if (empty($currentlang) || !preg_match('#^[a-z_]+$#', $currentlang) || ($currentlang != 'english' && !file_exists(INSTALL_PATH."language/$currentlang.php"))) {
	$currentlang = 'english';
}

$MAIN_CFG['global'] = array('language' => $currentlang, 'multilingual' => '0', 'GoogleTap' => '0', 'top' => '', 'adminmail' => '');
$currentlang = $MAIN_CFG['global']['language'];
if ($MAIN_CFG['global']['multilingual']) {
	if (isset($_GET['newlang']) && preg_match('#^([a-zA-Z0-9_\-]+)$#', $_GET['newlang'])) {
		$currentlang = $_GET['newlang'];
	} elseif (isset($_COOKIE['lang']) && preg_match('#^([a-zA-Z0-9_\-]+)$#', $_COOKIE['lang'])) {
		$currentlang = $_COOKIE['lang'];
	} elseif (is_user()) {
		$currentlang = $userinfo['user_lang'];
	} else {
		detect_lang($currentlang);
	}
	setcookie('lang', $currentlang, time()+31536000, $MAIN_CFG['cookie']['path']);
}
require(INSTALL_PATH."language/$currentlang.php");

//Check for existance of the config file to determine if NexOS is potentially already installed
if (!$go){
	if (!file_exists(CONFIG_FILE)) {
		$nxs_not_installed = 0;
	}
}

//Perform checks for installed modules and required directories if step = 1
if ($go == 1){
	$passed = (PHPVERS >= 52);
	$dirs = array(
		'config' => array('includes', 0),
		'cache' => array('cache', 1),
		'avatars' => array('uploads/avatars', 0),
		'albums' => array('modules/coppermine/albums', 0),
		'userpics' => array('modules/coppermine/albums/userpics', 0),
	);
	foreach ($dirs as $key => $data) {
		$dirs[$key][2] = is_writeable(BASEDIR.$data[0]);
		if ($data[1] && !$dirs[$key][2]) { $passed = false; }
	}

	$gd = false;
	if (extension_loaded('gd')) {
		if (function_exists('gd_info')) {
			$gd = gd_info();
			$gd = $gd['GD Version'];
		} else if (preg_match('/phpinfo/', ini_get('disable_functions'))) {
			$gd = 2;
		} else {
			ob_start();
			phpinfo(INFO_MODULES);
			$info = ob_get_contents();
			ob_end_clean();
			$info = stristr($info, 'gd version');
			preg_match('/\d/', $info, $match);
			$gd = $match[0];
		}
	}
	$gd = preg_replace('#bundled \((.*?) compatible\)#', '\\1', $gd);
	$ini['register_globals'] = ini_get('register_globals');
	$ini['magic_quotes'] = (PHPVERS < 60 ? get_magic_quotes_gpc() : false);
	$ini['magic_quotes_sybase'] = (PHPVERS < 60 ? ini_get('magic_quotes_sybase') : false);
	$ini['ini_set'] = (false === stripos(ini_get('disable_functions'), 'ini_set'));
	$ini['LEO'] = (false !== stripos($_SERVER['SERVER_SOFTWARE'], 'Apache'));

	$checks = array(
		'<img src="images/yellow.png" alt="critical" title="critical" align="top" />',
		'<img src="images/red.png" alt="failed" title="failed" align="top" />',
		'<img src="images/green.png" alt="ok" title="ok" align="top" />'
	);
}

function disp_header() {
	global $images, $instlang, $go, $currentlang;
	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>NexOS CMS Installer/Updater</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link href="css/nexos_install.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/dot-luv/jquery-ui.css" />
	<script src="js/jquery-1.9.1.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
				$(".button").button();
		});
	</script>
</head>
<body>
<div id="wrapper">
	<div id="header"><a href="http://www.nexoscms.org" target="_blank"><img alt="" height="90" border="0"src="images/nexos_install_logo.png" width="768" /></a></div>
	<div id="progressbar"></div>
	<div id="container">
		<div id="left_col">
			<div id="left_col_top">			
			<b>'.$instlang['s_progress'].'</b>';
			if ($go){
				echo ': Step '.$go;
			}
			echo'<br /><br />
			<img src="../images/'.$images[0].'.gif" alt="" style="vertical-align:bottom;" />'.$instlang['s_license'].'<br />
			<img src="../images/'.$images[1].'.gif" alt="" style="vertical-align:bottom;" />'.$instlang['s_server'].'<br />
			<img src="../images/'.$images[2].'.gif" alt="" style="vertical-align:bottom;" />'.$instlang['s_vdb'].'<br />
			<img src="../images/'.$images[3].'.gif" alt="" style="vertical-align:bottom;" />'.$instlang['s_setconfig'].'<br />
			<img src="../images/'.$images[4].'.gif" alt="" style="vertical-align:bottom;" />'.$instlang['s_builddb'].'<br />
			<img src="../images/'.$images[5].'.gif" alt="" style="vertical-align:bottom;" />'.$instlang['s_gather'].'<br />
			<img src="../images/'.$images[6].'.gif" alt="" style="vertical-align:bottom;" />'.$instlang['s_create'].'<br />';
		if (!$go) {
			echo '<br />'.$instlang['langselect'].'<br />
			<select name="newlanguage" onchange="top.location.href=\''.basename(__FILE__).'?newlang=\'+this.options[this.selectedIndex].value" class="formfield">';
			$content = '';
			$handle = opendir(INSTALL_PATH.'language');
			while ($file = readdir($handle)) {
				if (preg_match('#(.*).php#', $file, $matches)) {
					$languageslist[] = $matches[1];
				}
			}
			closedir($handle);
			sort($languageslist);
			for ($i=0; $i < sizeof($languageslist); $i++) {
				if ($languageslist[$i]!='') {
					$content .= '<option value="'.$languageslist[$i].'"';
					if ($languageslist[$i]==$currentlang) $content .= ' selected="selected"';
					$content .= '>'.ucfirst($languageslist[$i])."</option>\n";
				}
			}
			echo $content.'</select>';
		}
	echo'</div>
			<div id="left_col_bottom"><b>'.$instlang['s_secfeed'].'</b><br /></div>
		</div>
		<div id="right_col">
			<div id="right_col_top"><b>'.$instlang['s_comfeed'].'</b><br /></div>
			<div id="right_col_bottom"><b>'.$instlang['s_worldcomm'].'</b><br /></div>
		</div>
		<div id="page_content">
			<form action="'.basename(__FILE__).'" method="post" accept-charset="utf-8">';
}



function disp_footer() {
	echo '</div>
	</div>
	<div id="footer">NexOS CMS is &copy; 2009 - 2013 by <a href="http://www.myndworx.com" target="_blank">Myndworx Asylum</a><br /> For help or questions, check the following links:<br /><a href="http://www.nexoscms.org" target="_blank">NexOS Community</a> || <a href="http://wiki.nexoscms.org" target="_blank">NexOS Wiki</a> || <a href="http://mantis.nexoscms.org" target="_blank">NexOS Bug Tracking </a> || <a href="https://razor.nexoscms.gotdns.org/" target="_blank">NexOS Development Codebase </a></div>
</div>
</body>
</html>';
}

//Case statement to handle the steps
//Call disp_header followed by the content for the main content area then call disp_left_colum and fnially call disp_footer
switch ($go) {
    case 0:
				//Entry point, display welcome and license
				disp_header();
				echo '<h2>'.$instlang['welcome'].'</h2>
				<p style="font-size:12px">'.$instlang['info'].'</p><p style="font-size:12px">'.$instlang['click'].'</p>';
				echo '<p>';
				if (function_exists('readgzfile')) {
					echo '<textarea name="textfield" rows="15" cols="70">';
					readgzfile('GPL.gz');
					echo '</textarea>';
				} else {
					echo '<h2 align="center">'.$instlang['no_zlib'].'</h2>';
				}
				echo '
				<script>
					$(function() {
						$( "#progressbar" ).progressbar({
							value: 5
						});
					});
				</script>
				<br clear="all" /><br />
				<input type="hidden" name="step" value="'.(!empty($current_version) ? '3' : '1').'" />
				<input class="button" id="button" type="submit" value="'.$instlang['agree'].'" />
				</form></p>';
				disp_footer();
        break;
    case 1:
				//Check directory read/write and server settings
				disp_header();
				echo '
				<script>
					$(function() {
						$( "#progressbar" ).progressbar({
							value: 16
						});
					});
				</script>
				<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td colspan="5" nowrap="nowrap" align="center">
						'.$checks[2].' '.$instlang['s1_dot_ok'].' |
						'.$checks[1].' '.$instlang['s1_dot_critical'].' |
						'.$checks[0].' '.$instlang['s1_dot_failed'].'</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>					
					<tr>
						<th colspan="4" nowrap="nowrap">'.$instlang['s1_server_settings'].'</th>
						<td><img src="images/help.png" alt="" title="'.$instlang['s1_setting'].'" style="cursor: help;" /></td>
					</tr>
					<tr>
						<td>'.$instlang['s1_setting'].'</td><td>'.$instlang['s1_preferred'].'</td><td>'.$instlang['s1_yours'].'</td><td>'.$instlang['s1_status'].'</td><td>&nbsp;</td>
					</tr>
					<tr>
						<td>PHP</td><td>5.3.x</td><td>'.phpversion().'</td>
						<td align="center">'.$checks[((PHPVERS < 53) ? 0 : 2)].'</td>
						<td><img src="images/help.png" alt="" title="'.$instlang['s1_phpver'].'" style="cursor: help;" /></td>
					</tr>
					<tr>
						<td>GD</td><td>2.0</td><td>'.$gd.'</td>
						<td align="center">'.$checks[((strpos($gd, '2.') === false)? 1 : 2)].'</td>
						<td><img src="images/help.png" alt="" title="'.$instlang['s1_gdver'].'" style="cursor: help;" /></td>
					</tr>
					<tr>
						<td>magic_quotes</td><td>'.$instlang['s1_off'].'</td><td>'.($ini['magic_quotes']?$instlang['s1_on']:$instlang['s1_off']).'</td>
						<td align="center">'.$checks[($ini['magic_quotes'] ? 1 : 2)].'</td>
						<td><img src="images/help.png" alt="" title="'.$instlang['s1_magic_quotes_status'].'" style="cursor: help;" /></td>
					</tr>
					<tr>
						<td>magic_quotes_sybase</td><td>'.$instlang['s1_off'].'</td><td>'.($ini['magic_quotes_sybase']?$instlang['s1_on']:$instlang['s1_off']).'</td>
						<td align="center">'.$checks[($ini['magic_quotes_sybase'] ? 1 : 2)].'</td>
						<td><img src="images/help.png" alt="" title="'.$instlang['s1_magic_quotes_sybase_status'].'" style="cursor: help;" /></td>
					</tr>
					<tr>
						<td>register_globals</td><td>'.$instlang['s1_off'].'</td><td>'.($ini['register_globals']?$instlang['s1_on']:$instlang['s1_off']).'</td>
						<td align="center">'.$checks[($ini['register_globals'] ? 1 : 2)].'</td>
						<td><img src="images/help.png" alt="" title="'.$instlang['s1_register_globals_status'].'" style="cursor: help;" /></td>
					</tr>
					<tr>
						<td>ini_set()</td><td>'.$instlang['s1_on'].'</td><td>'.($ini['ini_set']?$instlang['s1_on']:$instlang['s1_off']).'</td>
						<td align="center">'.$checks[($ini['ini_set'] ? 2 : 1)].'</td>
						<td><img src="images/help.png" alt="" title="'.$instlang['s1_ini_set_status'].'" style="cursor: help;" /></td>
					</tr>
					<tr>
						<td>'.$instlang['s1_leo_available'].'</td><td>'.$instlang['s1_yes'].'</td><td>'.($ini['LEO']?$instlang['s1_yes']:$instlang['s1_no']).'</td>
						<td align="center">'.$checks[($ini['LEO'] ? 2 : 1)].'</td>
						<td><img src="images/help.png" alt="" title="'.$instlang['s1_leo_status'].'" style="cursor: help;" /></td>
					</tr>
					<tr>
						<td colspan="5"><hr noshade="noshade" size="1" /></td>
					</tr>
					<tr>
						<th colspan="4" nowrap="nowrap">'.$instlang['s1_directory_write'].'</th>
						<td><img src="images/help.png" alt="" title="'.$instlang['s1_writeaccess'].'" style="cursor: help;" /></td>
					</tr>';
				foreach ($dirs as $key => $data) {
					$data[2] = ($data[2] ? 2 : ($data[1] ? 0 : 1));
					echo '<tr>
						<td colspan="3" align="left">/'.$data[0].'/</td>
						<td align="center">'.$checks[$data[2]].'</td>
						<td><img src="images/help.png" alt="" title="'.$instlang['s1_'.$key].'" style="cursor: help;" /></td>
					</tr>';
				}
					echo'</table>';
				if ($passed) {
					echo $instlang['s1_correct'].'<p align="center"><input type="hidden" name="step" value="'.(!empty($current_version) ? '3' : '2').'" /><br />
					<input class="button" id="button" type="submit" value="'.$instlang['next'].'" /></p>';
				} else {
					echo '<p style="color:#FF0000; font-style:bold">'.$instlang['s1_fixerrors'].'</p>';
				}
				disp_footer();
        break;
    case 2:
				//If the config file exists, grab the DB connection info and see if the database connects, otherwise .
				$connected = false;
				$db_layers = array(
					'MySQL' => 'pdo_mysql',
					'SQLite' => 'pdo_sqlite',
					'PostgreSQL' => 'pdo_pgsql',
					'Oracle' => 'pdo_oci8',
					'SQLServer' => 'pdo_sqlsrv'
				);
				disp_header();
				if ($nxs_not_installed) {
					if ($action <> "testdb") {
						$connect = array(
							'layer' => 'pdo_mysql',
							'charset' => NULL,
							'host' => 'localhost',
							'port' => null,
							'database' => 'nexos',
							'username' => '',
							'password' => '',
							'prefix' => 'nxscms',
							'user_prefix' => 'nxscms'
						);
						echo '
						<script>
							$( "#progressbar" ).progressbar({
								value: 32
							});
						</script>
						<h2>'.$instlang['s2_noconfig1'].'</h2>
						<center>
						<table>
							<tr>
								<th colspan="2" nowrap="nowrap">'.$instlang['s1_dbconfig'].'</th>
								<td>&nbsp;&nbsp;<img src="images/help.png" alt="" title="'.$instlang['s2_dbase'].'" style="cursor: help;" /></td>
							</tr><tr>
								<td colspan="3"><hr noshade="noshade" size="1" /></td>
							</tr><tr>
								<td>'.$instlang['s1_layer'].'</td><td><select name="connect[layer]">';
							foreach ($db_layers as $layer => $func) {
								echo ($connect['layer'] == $layer) ? "<option selected=\"selected\">$layer</option>" : "<option>$layer</option>";
							}
							echo '</td>
								<td>&nbsp;&nbsp;<img src="images/help.png" alt="" title="'.$instlang['s2_layer'].'" style="cursor: help;" /></td>
							</tr>
							<tr>
								<td>'.$instlang['s1_host'].'</td>
								<td><input type="text" name="connect[host]" value="'.$connect['host'].'"></td>
								<td>&nbsp;&nbsp;<img src="images/help.png" alt="" title="'.$instlang['s2_hostname'].'" style="cursor: help;" /></td>
							</tr>
							<tr>
								<td>'.$instlang['s1_username'].'</td>
								<td><input type="text" name="connect[username]" value="'.$connect['username'].'"></td>
								<td>&nbsp;&nbsp;<img src="images/help.png" alt="" title="'.$instlang['s2_username'].'" style="cursor: help;" /></td>
							</tr>
							<tr>
								<td>'.$instlang['s1_password'].'</td>
								<td><input type="password" name="connect[password]" value="'.$connect['password'].'"></td>
								<td>&nbsp;&nbsp;<img src="images/help.png" alt="" title="'.$instlang['s2_password'].'" style="cursor: help;" /></td>
							</tr>
							<tr>
								<td>'.$instlang['s1_dbname'].'</td>
								<td><input type="text" name="connect[database]" value="'.$connect['database'].'"></td>
								<td>&nbsp;&nbsp;<img src="images/help.png" alt="" title="'.$instlang['s2_dbname'].'" style="cursor: help;" /></td>
							</tr><tr>
								<td>'.$instlang['s1_prefix'].'</td>
								<td><input type="text" name="connect[prefix]" value="'.$connect['prefix'].'"></td>
								<td>&nbsp;&nbsp;<img src="images/help.png" alt="" title="'.$instlang['s2_prefix'].'" style="cursor: help;" /></td>
							</tr>
							<tr>
								<td>'.$instlang['s1_userprefix'].'&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td><input type="text" name="connect[user_prefix]" value="'.$connect['user_prefix'].'"></td>
								<td>&nbsp;&nbsp;<img src="images/help.png" alt="" title="'.$instlang['s2_uprefix'].'" style="cursor: help;" /></td>
							</tr>
							<tr>
								<td colspan="3"><hr noshade="noshade" size="1" /></td>
							</tr>
						</table>
						</center>'
							.$instlang['s2_noconfig'].'<p align="center"><input type="hidden" name="step" value="2" /><input type="hidden" name="action" value="testdb" /><br />
							<input class="button" id="button" type="submit" value="'.$instlang['next'].'" /></p>';
					} else {
						try {
							echo '<h3>'.$instlang['s1_trying_to_connect'].'</h3>';
							$connectionParams = array(
								'dbname' => $_POST['connect']['database'],
								'user' => $_POST['connect']['username'],
								'password' => $_POST['connect']['password'],
								'host' => $_POST['connect']['host'],
								'driver' => $db_layers[$_POST['connect']['layer']]
							);
							$conn = DriverManager::getConnection($connectionParams, $config);
							$conn->connect();
							if ($conn->isConnected()) {
								$written = false;
								if (!isset($CensorList)) {
									include(INSTALL_PATH.'config.php');
									if (isset($_POST['download'])) {
										header('Content-Type: text/x-delimtext; name="config.php"');
										header('Content-disposition: attachment; filename=config.php');
										echo $content;
										exit;
									}
									$written = false;
									if ($fp = fopen(CONFIG_FILE, 'wb')) {
										$written = (fwrite($fp, $content) !== false);
										fclose($fp);
										chmod(CONFIG_FILE, 0644);
									}
									if ($written) {
										echo '<h1>'.$instlang['s1_save_conf_succeed'].'</h1>';
									} else {
										echo '<h1>'.$instlang['s1_save_conf_failed'].'</h1>';
									}
								} else {
									echo '<h1>'.$instlang['s1_db_connection_succeeded'].'</h1>';
									$written = true;
								}
								if ($written) {
									echo '<p><input type="hidden" name="step" value="3" />
									<input class="button" id="button" type="submit" value="'.$instlang['next'].'" class="formfield" /></p>';
								} else {
									echo 'Instead download the config.php file and upload it to the server into:<br/>
									'.dirname(CONFIG_FILE).'/
									<p><input type="hidden" name="step" value="2" />
									<input type="hidden" name="connect[layer]" value="'.$connect['layer'].'" />
									<input type="hidden" name="connect[host]" value="'.$connect['host'].'" />
									<input type="hidden" name="connect[username]" value="'.$connect['username'].'" />
									<input type="hidden" name="connect[password]" value="'.$connect['password'].'" />
									<input type="hidden" name="connect[database]" value="'.$connect['database'].'" />
									<input type="hidden" name="connect[prefix]" value="'.$connect['prefix'].'" />
									<input type="hidden" name="connect[user_prefix]" value="'.$connect['user_prefix'].'" />
									<input type="submit" name="download" value="Download config.php" class="formfield" />
									<input type="submit" value="'.$instlang['next'].'" class="formfield" /></p>';
								}
							}
						}
						catch(Exception $e) {
							//echo $e->getMessage();
							echo $instlang['s2_error_connection'];
							echo '<br /><br /><input class="button" id="button" type=button value="'.$instlang['back'].'" onClick="history.go(-1)">';
						}
					}
				} else {
					//Valid config file found, testing DB connection with connection info from config file
					require_once(CONFIG_FILE);
				}
				disp_footer();
        break;
    case 3:
				disp_header();
				if ($nxs_not_installed) {
				//NexOS has not yet been installed, let's build the database
				echo $instlang['s1_new'];
				$current_version = 0;
				
				} else {
				//NexOS exists, let's check for the upgrade
				}
				disp_footer();
        break;
    case 4:
				disp_header();
				//Main content
				disp_footer();
        break;
    case 5:
				disp_header();
				//Main content
				disp_footer();
        break;
		default:
			disp_header();
			echo '<h2>'.$instlang['welcome'].'</h2>
			<p style="font-size:12px">'.$instlang['info'].'</p><p style="font-size:12px">'.$instlang['click'].'</p>';
			echo '<p>';
			if (function_exists('readgzfile')) {
				echo '<textarea name="textfield" rows="15" cols="80">';
				readgzfile('GPL.gz');
				echo '</textarea>';
			} else {
				echo '<h2 align="center">'.$instlang['no_zlib'].'</h2>';
			}
			echo '
			<script>
				$(function() {
					$( "#progressbar" ).progressbar({
						value: 5
					});
				});
			</script>
			<br clear="all" /><br />
			<input type="hidden" name="step" value="'.(!empty($current_version) ? '3' : '1').'" />
			<input id="button" type="submit" value="'.$instlang['agree'].'" />
			</form></p>';
			disp_footer();
}

$arr = get_defined_vars();
krumo($arr);
//krumo::defines();