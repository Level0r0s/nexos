<?php

echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='30%'>"._SERVERNAME."</td><td width='40%'>".GetArrVal($data[$GSgame]['hostname'])."</td>"
    ."<td rowspan='18' valign='top' width='230'><table><tr><td colspan=3>".MapPic($data[$GSgame]['custom']['id'], $data[$GSgame]['mapname'], 0, "")."</td></tr><tr><td>";
		if (GetArrVal($data[$GSgame]['numplayers'])!=0){
			$cols[0] = array(_PLAYERNAME, _FRAGS, _TEAM, _DEATHS, _SKILL, _PING);

			for ($p = 0; $p <= GetArrVal($data[$GSgame]['numplayers']) ; $p++){
				$cols[$p+1][0] = Q3Colors($data[$GSgame]['players'][$p]['player'], 1);
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['players'][$p]['frags']);
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['players'][$p]['team']);
				$cols[$p+1][3] = GetArrVal($data[$GSgame]['players'][$p]['deaths']);
				$cols[$p+1][4] = GetArrVal($data[$GSgame]['players'][$p]['skill']);
				$cols[$p+1][5] = GetArrVal($data[$GSgame]['players'][$p]['ping']);
			}
		echo PlayerList($cols);
		}
echo "</td></tr></table></td></tr>"
    ."<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['gamever'])."</td></tr>"
	."<tr><td>"._PING."</td><td>".$ping."</td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".GetArrVal($data[$GSgame]['custom']['address']).":".GetArrVal($data[$GSgame]['hostport'])."</td></tr>"
    ."<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['mapname'])."</td></tr>"
    ."<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['gametype'])."</td></tr>"
	."<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['numplayers'])."/".GetArrVal($data[$GSgame]['maxplayers'])."</td></tr>"
    ."<tr><td>"._PASSWORD."</td><td>";
    if(GetArrVal($data[$GSgame]['password'])=='0') {
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
echo "</td></tr>";
if (isset($data[$GSgame]['teamplay'])) {
echo "<tr><td>"._TEAMPLAY."</td><td>";
echo Abled($data[$GSgame]['teamplay']);
echo "</td></tr>";
}

if (isset($data[$GSgame]['admin'])) {
echo "<tr><td>"._ADMININFO."</td><td>";
if (isset($data[$GSgame]['admin'])) {
echo "<a href=\"mailto:".GetArrVal($data[$GSgame]['email'])."\">".GetArrVal($data[$GSgame]['admin'])."</a>";
} else {
echo GetArrVal($data[$GSgame]['admin']);
}
if (isset($data[$GSgame]['admin'])) {
echo "<br><a href=\"".GetArrVal($data[$GSgame]['web'])."\" target=\"_blank\">"._WWW."</a>";
}
echo "</td></tr>";
}
echo "<tr><td colspan=\"2\" align=\"center\"><a href=\"http://www.dreamcatchergames.com/dci/gore/official_site/index.html\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.png\"></a></td></tr></table>";
?>