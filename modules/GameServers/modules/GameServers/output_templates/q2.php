<?php

echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='30%'>"._SERVERNAME."</td><td width='40%'>".GetArrVal($data[$GSgame]['hostname'])."</td><td width='40%' valign='top' rowspan='15'>"
    ."<table><tr><td colspan=3>".MapPic($data[$GSgame]['custom']['id'], $data[$GSgame]['mapname'], 0, "")."</td></tr><tr><td>";
		if (GetArrVal($data[$GSgame]['num_players'])!=0){
			$cols[0] = array(_PLAYERNAME, _SCORE, _PING);

			for ($p = 0; $p <= GetArrVal($data[$GSgame]['num_players'])-1 ; $p++){
				$cols[$p+1][0] = GetArrVal($data[$GSgame]['players'][$p]['name']);
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['players'][$p]['score']);
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['players'][$p]['ping']);
			}
		echo PlayerList($cols);
		}
echo "</td></tr></table>";
echo "</td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".$data[$GSgame]['custom']['address'].":".$data[$GSgame]['custom']['query_port']."&nbsp;".ASElink($data[$GSgame]['custom'], "Q2")."</td></tr>"
    ."<tr><td>"._SERVERTYPE."</td><td>";
    echo " ";
    if(stristr(GetArrVal($data[$GSgame]['version']), 'win')) {
		echo _WINDOWS;
    } elseif(stristr(GetArrVal($data[$GSgame]['version']), 'lin')) {
    	echo _LINUX;
    } else {
    	echo _UNKNOWN;
    }
echo "<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['mapname'])."</td></tr>";
if (isset($data[$GSgame]['gameversion'])){
echo "<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['gameversion'])."</td></tr>";
}
echo "<tr><td>"._PING."</td><td>".$ping."</td></tr>";
if (isset($data[$GSgame]['game'])){
echo "<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['game'])."</td></tr>";
}
if (isset($data[$GSgame]['gametype'])){
echo "<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['gametype'])."</td></tr>";
}
echo "<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['num_players'])."/".GetArrVal($data[$GSgame]['maxclients'])."</td></tr>";
if (isset($data[$GSgame]['needpass'])){
echo "<tr><td>"._PASSWORD."</td><td>";
    if(GetArrVal($data[$GSgame]['needpass'])) {
		echo _PASSREQY;
    } else {
    	echo _PASSREQN;
    }
}

if (isset($data[$GSgame]['timelimit'])){
echo "<tr><td>"._TIMELIMIT."</td><td>".GetArrVal($data[$GSgame]['timelimit'])."</td></tr>";
}
if (isset($data[$GSgame]['fraglimit'])){
echo "<tr><td>"._FRAGLIMIT."</td><td>".GetArrVal($data[$GSgame]['fraglimit'])."</td></tr>";
}

// dm flags info courtesy of
// http://home.nycap.rr.com/qware/index.html
// http://www.lethaloldfarts.net/branches/q2/wod_setup.htm
// no multi language support since quake2 is the only game that uses 'em
if ($flag = GetArrVal($data[$GSgame]['dmflags'])){

do {
if ($flag>=524288) {
$flagstring .= "CTF No Tech Powerups<br>";
$flag = $flag-524288;
}
if ($flag>=262144) {
$flagstring .= "Armor<br>";
$flag = $flag-262144;
}
if ($flag>=131072) {
$flagstring .= "CTF Forced Join<br>";
$flag = $flag-131072;
}
if ($flag>=32768) {
$flagstring .= "Fixed FOV<br>";
$flag = $flag-32768;
}
if ($flag>=16384) {
$flagstring .= "Quad Drop<br>";
$flag = $flag-16384;
}
if ($flag>=8192) {
$flagstring .= "Infinite Ammo<br>";
$flag = $flag-8192;
}
if ($flag>=4096) {
$flagstring .= "Allow Exit<br>";
$flag = $flag-4096;
}
if ($flag>=2048) {
$flagstring .= "No Armor<br>";
$flag = $flag-2048;
}
if ($flag>=1024) {
$flagstring .= "Force Respawn<br>";
$flag = $flag-1024;
}
if ($flag>=512) {
$flagstring .= "Spawn Farthest<br>";
$flag = $flag-512;
}
if ($flag>=256) {
$flagstring .= "No Friendly Fire<br>";
$flag = $flag-256;
}
if ($flag>=128) {
$flagstring .= "Teams by Model<br>";
$flag = $flag-128;
}
if ($flag>=64) {
$flagstring .= "Teams by Skin<br>";
$flag = $flag-64;
}
if ($flag>=32) {
$flagstring .= "Same Map<br>";
$flag = $flag-32;
}
if ($flag>=16) {
$flagstring .= "Instant Powerups<br>";
$flag = $flag-16;
}
if ($flag>=8) {
$flagstring .= "No Falling Damage<br>";
$flag = $flag-8;
}
if ($flag>=4) {
$flagstring .= "Weapons Stay<br>";
$flag = $flag-4;
}
if ($flag>=2) {
$flagstring .= "No Powerups<br>";
$flag = $flag-2;
}
if ($flag>=1) {
$flagstring .= "No Health<br>";
$flag = $flag-1;
}

} while ($flag!=0);

echo "<tr><td valign=top>"._GAMEFLAGS."</td><td>".$flagstring."</td></tr>";
}

echo "<tr><td align=\"center\" colspan=\"2\"><a href=\"http://www.idsoftware.com/games/quake/quake2/\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.jpg\"></a></td></tr></table>";

?>