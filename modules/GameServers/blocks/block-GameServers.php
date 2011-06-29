<?php

if (!defined('CPG_NUKE')) { exit; }
$content = '';
if (!is_active('GameServers')) {
    $content = 'ERROR';
    return trigger_error('GameServers module is inactive', E_USER_WARNING);
}

$serverpath = pathinfo($_SERVER['SCRIPT_NAME']);
if ($serverpath['dirname']=="/") {
$serverpath = $_SERVER['SERVER_NAME'];
} else {
$serverpath = $_SERVER['SERVER_NAME'].$serverpath['dirname'];
}

$content = file_get_contents ("http://".$serverpath."/index.php?name=GameServers&do=block");

?>