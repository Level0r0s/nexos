<?php

echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='30%'>"._GAMENAME."</td><td width='70%'>".$data[$GSgame]['custom']['name']."</td>"
    ."<td rowspan='18' valign='top' width='230'><table><tr><td colspan=5>".MapPic($data[$GSgame]['custom']['id'], GetArrVal($data[$GSgame]['mapname']), 0, "")."</td></tr><tr><td>\n";

$vp = 1;
$p = 0;
do {
	if ($data[$GSgame]['players']) {
	$cols[0] = array(_PLAYERNAME, _PING, _DEATHS, _SCORE, _TEAM);
	if (array_search_r(GetArrVal($data[$GSgame]['players'][$p]['playername']), $cols)==false AND GetArrVal($data[$GSgame]['players'][$p]['playername'])!='') {
		$cols[$vp][0] = "<a href=\"http://www.bfstats.com/player.php?exactname=".urlencode(GetArrVal($data[$GSgame]['players'][$p]['playername']))."\" target=\"_blank\">".GetArrVal($data[$GSgame]['players'][$p]['playername'])."</a>";

		$cols[$vp][1] = GetArrVal($data[$GSgame]['players'][$p]['ping']);

		$cols[$vp][2] = GetArrVal($data[$GSgame]['players'][$p]['deaths']);

		$cols[$vp][3] = GetArrVal($data[$GSgame]['players'][$p]['score']);

		$cols[$vp][4] = GetArrVal($data[$GSgame]['players'][$p]['team']);

		$vp++;
	}
	}
$p++;
} while ($p<=64);

if (isset($cols[1][1])) { echo PlayerList($cols); $vp--; } else { $vp=0; }

echo "</td></tr></table></td></tr>"
    ."<tr><td>"._SERVERNAME."</td><td>".GetArrVal($data[$GSgame]['hostname'])."</td></tr>"
    ."<tr><td>"._SERVERTYPE."</td><td>";
    if(GetArrVal($data[$GSgame]['dedicated'])==0) {
		echo _NDEDICATED;
    } else {
    	echo _DEDICATED;
    }
    echo " ";
    if(strstr($data[$GSgame]['Dedicated'], 'lin')) {
		echo _LINUX;
    } elseif (strstr($data[$GSgame]['Dedicated'], 'win')) {
    	echo _WINDOWS;
    } else {
    echo _UNKNOWN;
    }

echo "</td></tr>"
    ."<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['gamever'])."</td></tr>"
    ."<tr><td>"._PING."</td><td>".$ping."</td></tr>";
if ($data[$GSgame]['game_id_name']=="BFVietnam") {
echo "<tr><td>"._HOSTADDRESS."</td><td>".GetArrVal($data[$GSgame]['custom']['address']).":".GetArrVal($data[$GSgame]['hostport'])."&nbsp;".ASElink($data[$GSgame]['custom'], "GS")."</td></tr>";
} else {
echo "<tr><td>"._HOSTADDRESS."</td><td>".GetArrVal($data[$GSgame]['custom']['address']).":".GetArrVal($data[$GSgame]['hostport'])."&nbsp;".ASElink($data[$GSgame]['custom'], "NEW")."</td></tr>";
}
echo "<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['mapname'])."</td></tr>"
    ."<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['gametype']);

	if (isset($data[$GSgame]['teamname_0'])){
	echo " - ".GetArrVal($data[$GSgame]['teamname_0']);
	}

	if (isset($data[$GSgame]['teamname_1'])){
	echo " vs. ".GetArrVal($data[$GSgame]['teamname_1']);
	}

	if (isset($data[$GSgame]['teamname_2'])){
	echo " vs. ".GetArrVal($data[$GSgame]['teamname_2']);
	}

echo "</td></tr>"
	."<tr><td>"._PLAYERS."</td><td>".$vp."/".GetArrVal($data[$GSgame]['maxplayers'])."</td></tr>"
	."<tr><td>"._PASSWORD."</td><td>";
    if($data[$GSgame]['password']) {
		echo _PASSREQY;
    } else {
    	echo _PASSREQN;
    }
echo "</td></tr>";
if (isset($data[$GSgame]['Number Of Rounds'])){
echo "<tr><td>"._NUMROUNDS."</td><td>".$data[$GSgame]['Number Of Rounds']."</td></tr>";
}
if (isset($data[$GSgame]['number_of_rounds'])){
echo "<tr><td>"._NUMROUNDS."</td><td>".$data[$GSgame]['number_of_rounds']."</td></tr>";
}
if (isset($data[$GSgame]['Auto Balance Teams'])){
echo "<tr><td>"._BALTEAMS."</td><td>".$data[$GSgame]['Auto Balance Teams']."</td></tr>";
}
if (isset($data[$GSgame]['auto_balance_teams'])){
echo "<tr><td>"._BALTEAMS."</td><td>".$data[$GSgame]['auto_balance_teams']."</td></tr>";
}
if (isset($data[$GSgame]['Vehicle Friendly Fire'])){
echo "<tr><td>"._VFF."</td><td>".GetArrVal($data[$GSgame]['Vehicle Friendly Fire'])."</td></tr>";
}

if (isset($data[$GSgame]['vehicle_friendly_fire'])){
echo "<tr><td>"._VFF."</td><td>".GetArrVal($data[$GSgame]['vehicle_friendly_fire'])."</td></tr>";
}

if (isset($data[$GSgame]['Soldier Friendly Fire'])){
echo "<tr><td>"._SFF."</td><td>".GetArrVal($data[$GSgame]['Soldier Friendly Fire'])."</td></tr>";
}

if (isset($data[$GSgame]['soldier_friendly_fire'])){
echo "<tr><td>"._SFF."</td><td>".GetArrVal($data[$GSgame]['soldier_friendly_fire'])."</td></tr>";
}

if (isset($data[$GSgame]['time_limit'])){
echo "<tr><td>"._TIMELIMIT."</td><td>".GetArrVal($data[$GSgame]['time_limit'])."</td></tr>";
}
if (isset($data[$GSgame]['Time Limit'])){
echo "<tr><td>"._TIMELIMIT."</td><td>".GetArrVal($data[$GSgame]['Time Limit'])."</td></tr>";
}

echo "<tr><td colspan=\"2\" valign=\"top\" align=\"center\">";
if ($data[$GSgame]['game_id_name']=="BFVietnam") {
echo "<a href=\"http://www.eagames.com/official/battlefield/vietnam/us/\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logov.png\"></a>";
} else {
echo "<a href=\"http://www.battlefield1942.com\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.png\"></a>";
}
echo "</td></tr></table>";
?>