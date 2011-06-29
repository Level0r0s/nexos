<?php

//this file is used for remote queries it is commented out by default to
//prevent security issues for people who dont change the access code
//the access code can be anything as long as it matches the one in modules/GameServers/index.php
//i used http://www.winguides.com/security/password.php to generate the default code used here

/*

if ($code=="ceFria0lacH87v6afr3ukoufrria6oadroaf42zOe2iubl3afrO5Zl5stiawiufI") {
$servers[$game] = array($game, $ip, $port);

define('CFG_FILE', 'class.gameq.cfg.php');
define('INC_PATH', 'inc/');

require_once('class.gameq.php');
    $query = new GameQ;

    $data = $query->GetInfo($servers);
echo serialize($data);
} else {
echo serialize("BADCODE");
}

*/

?>