<?php

echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='30%'>"._SERVERNAME."</td><td width='40%'>".GetArrVal($data[$GSgame]['hostname'])."</td>"
    ."<td width='40%' valign='top' rowspan='18'>"
    ."<table><tr><td colspan=4>".MapPic('ut2004', $data[$GSgame]['map'], 0, "")."</td></tr><tr><td>";

		if (GetArrVal($data[$GSgame]['num_players'])!=0){
		$cols[0] = array(_PLAYERNAME, _PING, _FRAGS);
			for ($p = 0; $p <= $data[$GSgame]['num_players'] ; $p++){
				if (GetArrVal($data[$GSgame]['players'][$p]['name']!='')) {
				$cols[$p+1][0] = "<a href=\"http://ut2004stats.epicgames.com/index.php?stats=players&SearchName=".GetArrVal($data[$GSgame]['players'][$p]['name'])."\" target=\"_blank\">".GetArrVal($data[$GSgame]['players'][$p]['name'])."</a>";
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['players'][$p]['ping']);
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['players'][$p]['score']);
				}
			}
		echo PlayerList($cols);
		}
echo "</td></tr></table></td></tr>"
	."<tr><td>"._SERVERTYPE."</td><td>";
    if(GetArrVal($data[$GSgame]['ServerMode'])=='dedicated') {
		echo _DEDICATED;
    } else {
    	echo _NDEDICATED;
    }
if ($data[$GSgame]['ServerVersion']) {
echo "<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['ServerVersion'])."</td></tr>";
}
echo "<tr><td>"._PING."</td><td>".$ping."</td></tr>";
echo "<tr><td>"._HOSTADDRESS."</td><td><a href=\"ut2004://".$data[$GSgame]['custom']['address'].":".GetArrVal($data[$GSgame]['port'])."\">".$data[$GSgame]['custom']['address'].":".GetArrVal($data[$GSgame]['port'])."</a></td></tr>";
if ($data[$GSgame]['gamestats']) {
echo "<tr><td>"._STATS."</td><td>".Abled($data[$GSgame]['gamestats'])."</td></tr>";
}
echo "<tr><td>"._MAPNAME."</td><td>".$data[$GSgame]['map']."</td></tr>";

if ($data[$GSgame]['game_type']) {
echo "<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['game_type'])."</td></tr>";
}

if (isset($data[$GSgame]['num_players']) AND $data[$GSgame]['max_players']) {
echo "<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['num_players'])."/".GetArrVal($data[$GSgame]['max_players'])."</td></tr>";
}

if ($data[$GSgame]['password']) {
echo "<tr><td>"._PASSWORD."</td><td>";
    if(GetArrVal($data[$GSgame]['password'])=='False') {
		echo _PASSREQN;
    } else {
    	echo _PASSREQY;
    }
echo "</td></tr>";
}

if($data[$GSgame]['timelimit']) {
echo "<tr><td>"._TIMELIMIT."</td><td>";
    	if (GetArrVal($data[$GSgame]['timelimit'])=='1') {
    	echo GetArrVal($data[$GSgame]['timelimit'])." "._MINUTE;
    	} else {
    	echo GetArrVal($data[$GSgame]['timelimit'])." "._MINUTES;
    	}
echo "</td></tr>";
}
if($data[$GSgame]['TimeLimit']) {
echo "<tr><td>"._TIMELIMIT."</td><td>";
    	if (GetArrVal($data[$GSgame]['TimeLimit'])=='1') {
    	echo GetArrVal($data[$GSgame]['TimeLimit'])." "._MINUTE;
    	} else {
    	echo GetArrVal($data[$GSgame]['TimeLimit'])." "._MINUTES;
    	}
echo "</td></tr>";
}
if ($data[$GSgame]['MinPlayers']) {
echo "<tr><td>"._MINPLAYERS."</td><td>".GetArrVal($data[$GSgame]['MinPlayers'])."</td></tr>";
}

if ($data[$GSgame]['AdminName']) {
echo "<tr><td>"._ADMINNAME."</td><td>";
    if ($data[$GSgame]['AdminEmail']){
		if (strstr(GetArrVal($data[$GSgame]['AdminEmail']), '@')){
		echo "<a href=\"mailto:".GetArrVal($data[$GSgame]['AdminEmail'])."\">".GetArrVal($data[$GSgame]['AdminName'])."</a>";
		}
		if (substr(GetArrVal($data[$GSgame]['AdminEmail']), 0, 7)=='http://'){
		echo "<a href=\"".GetArrVal($data[$GSgame]['AdminEmail'])."\" target=\"_blank\">".GetArrVal($data[$GSgame]['AdminName'])."</a>";
		}
    } else {
    echo GetArrVal($data[$GSgame]['AdminName']);
    }
echo "</td></tr>";
}
if (isset($data[$GSgame]['gamespeed'])) {
echo "<tr><td>"._GAMESPEED."</td><td>".GetArrVal($data[$GSgame]['gamespeed'])."</td></tr>";
}
if (isset($data[$GSgame]['GoalScore'])) {
echo "<tr><td>"._MAXSCORE."</td><td>".GetArrVal($data[$GSgame]['GoalScore'])."</td></tr>";
}
if ($data[$GSgame]['Translocator']) {
echo "<tr><td>"._TRANSLOCATOR."</td><td>".Abled($data[$GSgame]['Translocator'])."</td></tr>";
}
if ($data[$GSgame]['WeaponStay']) {
echo "<tr><td>"._WEAPONSTAY."</td><td>".Abled($data[$GSgame]['WeaponStay'])."</td></tr>";
}
if ($data[$GSgame]['FriendlyFireScale']) {
echo "<tr><td>"._FF."</td><td>".GetArrVal($data[$GSgame]['FriendlyFireScale'])."</td></tr>";
}
if ($data[$GSgame]['UT2004RPG Version']) {
echo "<tr><td>"._2K4RPGVERSION."</td><td>".GetArrVal($data[$GSgame]['UT2004RPG Version'])."</td></tr>";
echo "<tr><td>&nbsp;&nbsp;&nbsp;"._2K4RPGSTARTLV."</td><td>".GetArrVal($data[$GSgame]['Starting Level'])."</td></tr>";
echo "<tr><td>&nbsp;&nbsp;&nbsp;"._2K4RPGSPPLEVL."</td><td>".GetArrVal($data[$GSgame]['Stat Points Per Level'])."</td></tr>";
echo "<tr><td>&nbsp;&nbsp;&nbsp;"._2K4RPGAVGLEVL."</td><td>".GetArrVal($data[$GSgame]['Current Avg. Level'])."</td></tr>";
echo "<tr><td>&nbsp;&nbsp;&nbsp;"._2K4RPGHIGHLEV."</td><td>".GetArrVal($data[$GSgame]['Highest Level Player'])."</td></tr>";
echo "<tr><td>&nbsp;&nbsp;&nbsp;"._2K4RPGMAGWEAP."</td><td>".GetArrVal($data[$GSgame]['Magic Weapon Chance'])."</td></tr>";
echo "<tr><td>&nbsp;&nbsp;&nbsp;"._2K4RPGMAGSTRT."</td><td>".GetArrVal($data[$GSgame]['Magical Starting Weapons'])."</td></tr>";
echo "<tr><td>&nbsp;&nbsp;&nbsp;"._2K4RPGRTIFCTS."</td><td>".GetArrVal($data[$GSgame]['Artifacts'])."</td></tr>";
}
if ($data[$GSgame]['satoreMonsterPackVersion']) {
echo "<tr><td>"._2K4SMPVERSION."</td><td>".GetArrVal($data[$GSgame]['satoreMonsterPackVersion'])."</td></tr>";
echo "<tr><td>&nbsp;&nbsp;&nbsp;"._2K4SMPINIWAVE."</td><td>".GetArrVal($data[$GSgame]['InitialWave'])."</td></tr>";
echo "<tr><td>&nbsp;&nbsp;&nbsp;"._2K4SMPFINWAVE."</td><td>".GetArrVal($data[$GSgame]['FinalWave'])."</td></tr>";
echo "<tr><td>&nbsp;&nbsp;&nbsp;"._2K4SMPIRONMAN."</td><td>".GetArrVal($data[$GSgame]['Ironman Mode'])."</td></tr>";
echo "<tr><td>&nbsp;&nbsp;&nbsp;"._2K4SMPAMLEVEL."</td><td>".GetArrVal($data[$GSgame]['Auto Adjust Invasion Monster Level'])."</td></tr>";
echo "<tr><td>&nbsp;&nbsp;&nbsp;"._2K4SMPMADJUST."</td><td>".GetArrVal($data[$GSgame]['Monster Adjustment Factor'])."</td></tr>";
echo "<tr><td>&nbsp;&nbsp;&nbsp;"._2K4SMPENDDELY."</td><td>".GetArrVal($data[$GSgame]['EndTimeDelay'])."</td></tr>";
}
if ($data[$GSgame]['mutator0']) {
	for ($m = 0; isset($data[$GSgame]['mutator'.$m]) ; $m++){
		$MUTATORS .= GetArrVal($data[$GSgame]['mutator'.$m])."<br>";
	}
} else {
	$MUTATORS = _NONE;
}

echo "<tr><td valign='top'>"._MUTATORS."</td><td valign='top'>".$MUTATORS."</td></tr>"
    ."</table>";

?>