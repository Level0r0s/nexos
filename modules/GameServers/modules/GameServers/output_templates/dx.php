<?php

echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='30%'>"._SERVERNAME."</td><td width='40%'>".GetArrVal($data[$GSgame]['hostname'])."</td>"
    ."<td rowspan='18' valign='top' width='230'>"
    ."<table><tr><td colspan=4>".MapPic($data[$GSgame]['custom']['id'], $data[$GSgame]['mapname'], 0, "")."</td></tr><tr><td>";

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
    ."<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['gamever'])."</td></tr>"
	."<tr><td>"._PING."</td><td>".$ping."</td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".$data[$GSgame]['custom']['address'].":".GetArrVal($data[$GSgame]['hostport'])."</td></tr>"
    ."<tr><td>"._MAPNAME."</td><td>";
    if (GetArrVal($data[$GSgame]['maptitle'])!="Untitled") {
    echo GetArrVal($data[$GSgame]['maptitle']);
    } else {
    echo GetArrVal($data[$GSgame]['mapname']);
    }
echo "</td></tr>"
    ."<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['gametype'])."</td></tr>"
	."<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['numplayers'])."/".GetArrVal($data[$GSgame]['maxplayers'])."</td></tr>"
    ."<tr><td>"._PASSWORD."</td><td>";
    if(GetArrVal($data[$GSgame]['password'])=='False') {
		echo _PASSREQN;
    } else {
    	echo _PASSREQY;
    }
echo "</td></tr>"
    ."<tr><td>"._TIMELIMIT."</td><td>";
    if (GetArrVal($data[$GSgame]['TimeToWin'])=='0') {
    	echo _NONE;
    } else {
    	if (GetArrVal($data[$GSgame]['TimeToWin'])=='1') {
    	echo GetArrVal($data[$GSgame]['TimeToWin'])." "._MINUTE;
    	} else {
    	echo GetArrVal($data[$GSgame]['TimeToWin'])." "._MINUTES;
    	}
    }
echo "</td></tr>";
if (GetArrVal($data[$GSgame]['InitialAugs'])) {
echo "<tr><td>"._INTAUGS."</td><td>".GetArrVal($data[$GSgame]['InitialAugs'])."</td></tr>";
}
if (GetArrVal($data[$GSgame]['AugsPerKill'])) {
echo "<tr><td>"._AUGSPER."</td><td>".GetArrVal($data[$GSgame]['AugsPerKill'])."</td></tr>";
}
if (GetArrVal($data[$GSgame]['SkillsAvail'])) {
echo "<tr><td>"._SKILLSA."</td><td>".GetArrVal($data[$GSgame]['SkillsAvail'])."</td></tr>";
}
if (GetArrVal($data[$GSgame]['SkillsPerKill'])) {
echo "<tr><td>"._SKLLPER."</td><td>".GetArrVal($data[$GSgame]['SkillsPerKill'])."</td></tr>";
}
if ($an = GetArrVal($data[$GSgame]['AdminName'])){
echo "<tr><td>"._ADMINNAME."</td><td>";
	if ($ae = GetArrVal($data[$GSgame]['AdminEMail'])){
		if (strstr($ae, '@')){
		echo "<a href=\"mailto:".$ae."\">".$an."</a>";
		}
		if (strstr($ae, 'http://')) {
		echo "<a href=\"".$ae."\" target=\"_blank\">".$an."</a>";
		}
    } else {
    	echo $an;
    }
echo "</td></tr>";
}
if (GetArrVal($data[$GSgame]['mutators'])) {
$MUTATORS = str_replace(",", "<br>", GetArrVal($data[$GSgame]['mutators']));
} else {
$MUTATORS = _NONE;
}
echo "<tr><td valign='top'>"._MUTATORS."</td><td>".$MUTATORS."</td></tr>"
	."<tr><td align=\"center\" colspan=\"2\"><a href=\"http://www.eidosinteractive.com/games/info.html?gmid=50\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.jpg\"></a></td></tr></table>";



?>