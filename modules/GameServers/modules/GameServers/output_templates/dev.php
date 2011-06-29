<?php

echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='30%'>"._SERVERNAME."</td><td width='40%'>".GetArrVal($data[$GSgame]['hostname'])."</td>"
    ."<td width='40%' valign='top' rowspan='18'>"
    ."<table><tr><td colspan=4>".MapPic($data[$GSgame]['custom']['id'], $data[$GSgame]['map'], 0, "")."</td></tr><tr><td>";

		if (GetArrVal($data[$GSgame]['num_players'])!=0){
		$cols[0] = array(_PLAYERNAME, _PING, _FRAGS, _TEAM);
		$vp=1;
			for ($p = 0; $vp <= $data[$GSgame]['num_players'] ; $p++){
			//filter out bots and objects with a ping of 0
				if (GetArrVal($data[$GSgame]['player'][$p]['name']!='' AND GetArrVal($data[$GSgame]['player'][$p]['ping'])!=0)) {
				$cols[$p+1][0] = GetArrVal($data[$GSgame]['player'][$p]['name']);
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['player'][$p]['ping']);
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['player'][$p]['score']);
				$cols[$p+1][3] = GetArrVal($data[$GSgame]['player'][$p]['stat_id']);
				$vp++;
				}
			}
		echo PlayerList($cols);
		}
echo "</td></tr></table></td></tr>"
	."<tr><td>"._SERVERTYPE."</td><td>";
    if(GetArrVal($data[$GSgame]['servermode'])=='dedicated') {
		echo _DEDICATED;
    } else {
    	echo _NDEDICATED;
    }
if ($data[$GSgame]['ServerVersion']) {
echo "<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['ServerVersion'])."</td></tr>";
}
echo "<tr><td>"._PING."</td><td>".$ping."</td></tr>";
echo "<tr><td>"._HOSTADDRESS."</td><td><a href=\"unreal://".$data[$GSgame]['custom']['address'].":".GetArrVal($data[$GSgame]['port'])."\">".$data[$GSgame]['custom']['address'].":".GetArrVal($data[$GSgame]['port'])."</a></td></tr>";
if ($data[$GSgame]['gamestats']) {
echo "<tr><td>"._STATS."</td><td>".Abled($data[$GSgame]['gamestats'])."</td></tr>";
}
echo "<tr><td>"._MAPNAME."</td><td>".$data[$GSgame]['map']."</td></tr>";

if ($data[$GSgame]['game_type']) {
echo "<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['game_type'])."</td></tr>";
}

if ($data[$GSgame]['num_players'] AND $data[$GSgame]['max_players']) {
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

echo "<tr><td>"._TIMELIMIT."</td><td>";
    if (GetArrVal($data[$GSgame]['timelimit'])=='0') {
    	echo _NONE;
    } else {
    	if (GetArrVal($data[$GSgame]['timelimit'])=='1') {
    	echo GetArrVal($data[$GSgame]['timelimit'])." "._MINUTE;
    	} else {
    	echo GetArrVal($data[$GSgame]['timelimit'])." "._MINUTES;
    	}
    }
echo "</td></tr>";
if ($data[$GSgame]['minplayers']) {
echo "<tr><td>"._MINPLAYERS."</td><td>".GetArrVal($data[$GSgame]['minplayers'])."</td></tr>";
}

if ($data[$GSgame]['adminname']) {
echo "<tr><td>"._ADMINNAME."</td><td>";
    if ($data[$GSgame]['adminemail']){
		if (strstr(GetArrVal($data[$GSgame]['adminemail']), '@')){
		echo "<a href=\"mailto:".GetArrVal($data[$GSgame]['adminemail'])."\">".GetArrVal($data[$GSgame]['adminname'])."</a>";
		}
		if (substr(GetArrVal($data[$GSgame]['adminemail']), 0, 7)=='http://'){
		echo "<a href=\"".GetArrVal($data[$GSgame]['adminemail'])."\" target=\"_blank\">".GetArrVal($data[$GSgame]['adminname'])."</a>";
		}
    } else {
    echo GetArrVal($data[$GSgame]['adminname']);
    }
echo "</td></tr>";
}
if (isset($data[$GSgame]['gamespeed'])) {
echo "<tr><td>"._GAMESPEED."</td><td>".GetArrVal($data[$GSgame]['gamespeed'])."</td></tr>";
}
if (isset($data[$GSgame]['goalscore'])) {
echo "<tr><td>"._MAXSCORE."</td><td>".GetArrVal($data[$GSgame]['goalscore'])."</td></tr>";
}
if ($data[$GSgame]['translocator']) {
echo "<tr><td>"._TRANSLOCATOR."</td><td>".Abled($data[$GSgame]['translocator'])."</td></tr>";
}
if ($data[$GSgame]['weaponstay']) {
echo "<tr><td>"._WEAPONSTAY."</td><td>".Abled($data[$GSgame]['weaponstay'])."</td></tr>";
}
if ($data[$GSgame]['friendlyfire']) {
echo "<tr><td>"._FF."</td><td>".GetArrVal($data[$GSgame]['friendlyfire'])."</td></tr>";
}
if ($data[$GSgame]['mutator0']) {
	for ($m = 0; isset($data[$GSgame]['mutator'.$m]) ; $m++){
		$MUTATORS .= GetArrVal($data[$GSgame]['mutator'.$m])."<br>";
	}
} else {
	$MUTATORS = _NONE;
}

echo "<tr><td valign='top'>"._MUTATORS."</td><td valign='top'>".$MUTATORS."</td></tr>"
	."<tr><td align=\"center\" colspan=\"2\"><a href=\"http://www.devastationgame.com\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.jpg\"></a></td></tr></table>";

?>