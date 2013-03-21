<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 by Myndworx Asylum                          |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |  
  +-------------------------------------------------------------------+
  | Install.php - NexOS installation file                             |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org                                  |  
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
error_reporting(E_ALL);
define('INSTALL', 1);
require_once('../includes/cmsinit.inc');
require_once(CORE_PATH.'nexos_page.php');

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
	define('CPG_DEBUG', false);
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
		if ($die && $version == CPG_NUKE) {
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
	echo nexos_header($instlang['installer']).'
    <script language="JavaScript" type="text/javascript" src="includes/javascript/infobox.js"></script>
    <div id="infodiv" style="position:absolute; visibility:hidden; z-index:20; top:0px; left:0px;"></div><br />
    <form action="'.basename(__FILE__).'" method="post" accept-charset="utf-8">
    <table width="100%" height="350">
    <tr><td width="200" valign="top">
    <b>'.$instlang['s_progress'].'</b><br />
    <img src="images/'.$images[0].'.gif" alt="" />'.$instlang['s_license'].'<br />
    <img src="images/'.$images[1].'.gif" alt="" />'.$instlang['s_server'].'<br />
    <img src="images/'.$images[2].'.gif" alt="" />'.$instlang['s_setconfig'].'<br />
    <img src="images/'.$images[3].'.gif" alt="" />'.$instlang['s_builddb'].'<br />
    <img src="images/'.$images[4].'.gif" alt="" />'.$instlang['s_gather'].'<br />
    <img src="images/'.$images[5].'.gif" alt="" />'.$instlang['s_create'].'<br />';
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
    </td><td valign="top" align="center">';
        flush();
}

function footer() {
	echo '</td></tr></table></form>
            </td></tr></table>
            </td></tr></table>
            </center></body></html>';
}

function inst_help($item) {
	return '<img src="install/images/help.gif" alt="" onmouseover="tip(\''.$item.'\')" onmouseout="untip()" style="cursor: help;" />';
}

if (!$go) {
	inst_header();
	echo '<h2>'.$instlang['welcome'].'</h2>
<p style="font-size:12px">'.$instlang['info'].'</p><p style="font-size:12px">'.$instlang['click'].'</p>';
	echo '<p>';
	if (function_exists('readgzfile')) {
		echo '<textarea name="textfield" rows="15" cols="80">';
		readgzfile('install/GPL.gz');
		echo '</textarea>';
	} else {
		echo '<h2 align="center">'.$instlang['no_zlib'].'</h2>';
	}
	echo '<br clear="all" /><br />
<input type="hidden" name="step" value="'.(!empty($current_version) ? '3' : '1').'" />
<input type="submit" value="'.$instlang['agree'].'" class="formfield" /></p>';
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
footer();