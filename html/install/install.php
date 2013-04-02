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
// Setup error reporting
error_reporting(E_ALL);
//Define installation variable
define('INSTALL', 1);
//Include base files
require_once('../includes/cmsinit.inc');

$go = 0;
if (isset($_POST['step'])) {
	if (!preg_match('#^[0-9]$#', $_POST['step'])) exit;
	$go = intval($_POST['step']);
}

$images = array();
for ($i=0; $i<6; ++$i) {
	$images[$i] = (($go == $i) ? 'box_current' : (($go > $i) ? 'checked' : 'unchecked'));
}

if ($go < 4 && isset($_COOKIE['installtest'])) { setcookie('installtest','',-1); }

// Doctrine DBAL
use Doctrine\Common\ClassLoader;

$config_file = CORE_PATH.'config.php';
if (file_exists($config_file)) {
	require_once(CORE_PATH.'lib/Doctrine/Common/ClassLoader.php');
	$classLoader = new ClassLoader('Doctrine', CORE_PATH.'lib');
	$classLoader->register();
	require_once(CORE_PATH.'db/doctrine.php');
	$db = new Poodle_SQL_Dragonfly($dbhost, $dbuname, $dbpass, $dbname);
} else {
	$adminindex = 'admin.php';
	$mainindex = 'index.php';
	define('NEXOS_DEBUG', false);
}

# Load the language
if (isset($_GET['newlang'])) {
	setcookie('installlang',$_GET['newlang']);
	$currentlang = $_GET['newlang'];
} elseif (isset($_COOKIE['installlang'])) {
	$currentlang = $_COOKIE['installlang'];
}
$instlang = array();
if (empty($currentlang) || !preg_match('#^[a-z_]+$#', $currentlang) || ($currentlang != 'english' && !file_exists(BASEDIR."install/language/$currentlang.php"))) {
	$currentlang = 'english';
}
$MAIN_CFG['global'] = array('language' => $currentlang, 'multilingual' => '0', 'GoogleTap' => '0', 'top' => '', 'adminmail' => '');
require_once(CORE_PATH.'functions/language.php');
require(BASEDIR."install/language/$currentlang.php");

if (file_exists($config_file)) {
	$current_version = check_inst($go < 3);
}

function check_inst($die=false) {
	global $db, $prefix, $dbname, $instlang;
	if (isset($db->TBL->config_custom) && $result = $db->query('SELECT cfg_value FROM '.$prefix.'_config_custom WHERE cfg_name=\'global\' AND cfg_field=\'Version_Num\'', true)) {
		list($version) = $db->sql_fetchrow($result);
		if ($die && $version == NEXOS_VERSION) {
			inst_header();
			echo $instlang['s1_already'];
			footer();
			exit;
		}
		return $version;
	}
	return 0;
}

function get_db_vars($db) {
	return $db->get_details();
}

function inst_header() {
	global $images, $instlang, $go, $currentlang;
	echo '
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
		<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>NexOS Installation and Setup</title>
			<link href="css/dot-luv/jquery-ui-1.10.2.custom.css" rel="stylesheet">
			<script src="js/jquery-1.9.1.js"></script>
			<script src="js/jquery-ui-1.10.2.custom.js"></script>
			<link href="css/nexos.css" rel="stylesheet" type="text/css" />
			<!--[if lte IE 7]>
			<link href="css/patches/patch_nexos.css" rel="stylesheet" type="text/css" />
			<![endif]-->
			<script>
			$(function() {
				$( "#progressbar" ).progressbar({ value: 5 });
				$( "#button" ).button();
			});
			</script>
			</head>
		<body>
			<form action="'.basename(__FILE__).'" method="post" accept-charset="utf-8">
			<div class="page_margins">
				<div id="border-top">
					<div id="edge-tl"></div>
					<div id="edge-tr"></div>
				</div>
				<div class="page">
					<div class="center" id="header"><img src="images/logo.png" width="768" height="90" /></div>
					<div id="progressbar"></div>
					<div id="main">
						<div id="col1">
							<div id="col1_content" class="clearfix">
								<b>'.$instlang['s_progress'].'</b><br /><br />
								<img src="../images/'.$images[0].'.gif" alt="" style="vertical-align:bottom;" />'.$instlang['s_license'].'<br />
								<img src="../images/'.$images[1].'.gif" alt="" style="vertical-align:bottom;" />'.$instlang['s_server'].'<br />
								<img src="../images/'.$images[2].'.gif" alt="" style="vertical-align:bottom;" />'.$instlang['s_setconfig'].'<br />
								<img src="../images/'.$images[3].'.gif" alt="" style="vertical-align:bottom;" />'.$instlang['s_builddb'].'<br />
								<img src="../images/'.$images[4].'.gif" alt="" style="vertical-align:bottom;" />'.$instlang['s_gather'].'<br />
								<img src="../images/'.$images[5].'.gif" alt="" style="vertical-align:bottom;" />'.$instlang['s_create'].'<br />
							</div>';
							if (!$go) {
								echo '<br />'._SELECTLANGUAGE.'<br />
								<select name="newlanguage" onchange="top.location.href=\''.basename(__FILE__).'?newlang=\'+this.options[this.selectedIndex].value" class="formfield">';
								$content = '';
								$handle = opendir(BASEDIR.'install/language');
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
							echo '
						</div>
							<div id="col3">
								<div id="col3_content" class="clearfix" align="center">';
        flush();
}

function inst_footer() {
	echo '</div>
			<!-- IE Column Clearing -->
			<div id="ie_clearing"> &#160; </div>
		</div>
	</div>
	<div id="footer" align="center">NexOS CMS is &copy; 2009 - 2013 by <a href="http://www.myndworx.com" target="_blank">Myndworx Asylum</a><br /> For help or questions, check the following links:<br /><a href="" target="_blank">NexOS Community</a> || <a href="" target="_blank">NexOS Wiki</a> || <a href="" target="_blank">NexOS Bug Tracking </a> || <a href="https://razor.nexoscms.gotdns.org/" target="_blank">NexOS Development Codebase </a></div>
    </div>
    <div id="border-bottom">
      <div id="edge-bl"></div>
      <div id="edge-br"></div>
    </div>
  </div>
	</body>
</html>';
}

if (!$go) {
	inst_header();
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
	echo '<br clear="all" /><br />
	<input type="hidden" name="step" value="'.(!empty($current_version) ? '3' : '1').'" />
	<input id="button" type="submit" value="'.$instlang['agree'].'" />
	</form></p>';
}
elseif (isset($_SERVER['HTTP_REFERER']) && strlen($_SERVER['HTTP_REFERER']) > 0 && !stripos($_SERVER['HTTP_REFERER'], '://'.$_SERVER['HTTP_HOST'])) {
	echo 'Posting from another server is not allowed';
}
elseif (file_exists(BASEDIR."install/step$go.php")) {
	include(BASEDIR."install/step$go.php");
}
else {
	echo '<h1>'.sprintf(_ERROR_NO_EXIST, $go).'</h1>';
}
inst_footer();
