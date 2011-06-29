<?php

if (!defined('CPG_NUKE')) { exit; }
$content = '';
if (!is_active('GameServers')) {
    $content = 'ERROR';
    return trigger_error('GameServers module is inactive', E_USER_WARNING);
}

//specify the serverid here
$blockserverID = 1;

$serverpath = pathinfo($_SERVER['SCRIPT_NAME']);
if ($serverpath['dirname']=="/") {
$serverpath = $_SERVER['SERVER_NAME'];
} else {
$serverpath = $_SERVER['SERVER_NAME'].$serverpath['dirname'];
}

//if you have path detection issues, then you can hardcode the serverpath here
//example:
//$serverpath = "www.domain.com/inafolder/inanotherfolder";

$content = file_get_contents ("http://".$serverpath."/index.php?name=GameServers&do=bquery&server_id=".$blockserverID);

?>