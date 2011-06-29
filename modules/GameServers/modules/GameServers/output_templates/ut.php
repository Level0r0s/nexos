<?php

echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='30%'>"._SERVERNAME."</td><td width='40%'>".GetArrVal($data[$GSgame]['hostname'])."</td>"
    ."<td rowspan='18' valign='top' width='230'>"

    ."<table><tr><td colspan=4>".MapPic($data[$GSgame]['custom']['id'], $data[$GSgame]['map'], 0, "")."</td></tr><tr><td>";

		if (GetArrVal($data[$GSgame]['numplayers'])!=0){
		$cols[0] = array(_PLAYERNAME, _PING, _FRAGS, _TEAM);
			for ($p = 0; $p <= $data[$GSgame]['numplayers'] ; $p++){
				if (GetArrVal($data[$GSgame]['players'][$p]['player']!='')) {
				$cols[$p+1][0] = GetArrVal($data[$GSgame]['players'][$p]['player']);
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['players'][$p]['ping']);
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['players'][$p]['frags']);
				$cols[$p+1][3] = GetArrVal($data[$GSgame]['players'][$p]['team']);
				}
			}
		echo PlayerList($cols);
		}
echo "</td></tr></table></td></tr>"
	."<tr><td>"._PING."</td><td>".$ping."</td></tr>"
    ."<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['gamever'])."</td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td><a href=\"unreal://".$data[$GSgame]['custom']['address'].":".GetArrVal($data[$GSgame]['hostport'])."\">".$data[$GSgame]['custom']['address'].":".GetArrVal($data[$GSgame]['hostport'])."</a></td></tr>"
    ."<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['maptitle'])."</td></tr>"
    ."<tr><td>"._GAMETYPE."</td><td>";
    $gametype = substr (GetArrVal($data[$GSgame]['mapname']), 0, 3);
    switch ($gametype) {
    	case "DM-":
    	echo _DM;
    	break;

    	case "CTF":
    	echo _CTF;
    	break;

    	case "DOM":
    	echo _DOM;
    	break;

    	case "AS-":
    	echo _AS;
    	break;

    	default:
    	echo _UNKNOWN;
    	break;

    }
echo "</td></tr>";
	if (GetArrVal($data[$GSgame]['botskill'])) {
		echo "<tr><td>"._BOTSKILL."</td><td>".GetArrVal($data[$GSgame]['botskill'])."</td></tr>";
	}
echo "<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['numplayers'])."/".GetArrVal($data[$GSgame]['maxplayers'])."</td></tr>"
    ."<tr><td>"._PASSWORD."</td><td>";
    if(GetArrVal($data[$GSgame]['password'])=='False') {
		echo _PASSREQN;
    } else {
    	echo _PASSREQY;
    }
echo "</td></tr>"
    ."<tr><td>"._TIMELIMIT."</td><td>";
    if (GetArrVal($data[$GSgame]['timelimit'])=='0') {
    	echo _NONE;
    } else {
    	if (GetArrVal($data[$GSgame]['timelimit'])=='1') {
    	echo GetArrVal($data[$GSgame]['timelimit'])." "._MINUTE;
    	} else {
    	echo GetArrVal($data[$GSgame]['timelimit'])." "._MINUTES;
    	}
    }
echo "</td></tr>"
    ."<tr><td>"._MINPLAYERS."</td><td>".GetArrVal($data[$GSgame]['minplayers'])."</td></tr>"
    ."<tr><td>"._CHGLEVELS."</td><td>".GetArrVal($data[$GSgame]['changelevels'])."</td></tr>"
    ."<tr><td>"._ADMINNAME."</td><td>";
    if ($ae = GetArrVal($data[$GSgame]['AdminEMail'])){
		if (strstr($ae, '@')){
		echo "<a href=\"mailto:".$ae."\">".GetArrVal($data[$GSgame]['AdminName'])."</a>";
		}
		if (strstr($ae, 'http://')) {
		echo "<a href=\"".$ae."\" target=\"_blank\">".GetArrVal($data[$GSgame]['AdminName'])."</a>";
		}
    } else {
    echo GetArrVal($data[$GSgame]['AdminName']);
    }
echo "</td></tr>";
if (GetArrVal($data[$GSgame]['goalteamscore'])) {
echo "<tr><td>"._MAXSCORE."</td><td>".GetArrVal($data[$GSgame]['goalteamscore'])."</td></tr>";
}
if (GetArrVal($data[$GSgame]['maxteams'])) {
echo "<tr><td>"._MAXTEAMS."</td><td>".GetArrVal($data[$GSgame]['maxteams'])."</td></tr>";
}
if (GetArrVal($data[$GSgame]['balanceteams'])) {
echo "<tr><td>"._BALTEAMS."</td><td>".GetArrVal($data[$GSgame]['balanceteams'])."</td></tr>";
}
if (GetArrVal($data[$GSgame]['playersbalanceteams'])) {
echo "<tr><td>"._PBALTEAMS."</td><td>".GetArrVal($data[$GSgame]['playersbalanceteams'])."</td></tr>";
}
if (GetArrVal($data[$GSgame]['friendlyfire'])) {
echo "<tr><td>"._FF."</td><td>".GetArrVal($data[$GSgame]['friendlyfire'])."</td></tr>";
}
if (GetArrVal($data[$GSgame]['mutators'])) {
$MUTATORS = str_replace(",", "<br>", GetArrVal($data[$GSgame]['mutators']));
} else {
$MUTATORS = _NONE;
}

echo "<tr><td>"._TOURNAMENT."</td><td>".GetArrVal($data[$GSgame]['tournament'])."</td></tr>"
	."<tr><td>"._GAMESTYLE."</td><td>".GetArrVal($data[$GSgame]['gamestyle'])."</td></tr>"
	."<tr><td valign='top'>"._MUTATORS."</td><td>".$MUTATORS."</td></tr></table>";

?>