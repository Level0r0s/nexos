<?php

echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='30%'>"._SERVERNAME."</td><td width='40%'>".GetArrVal($data[$GSgame]['hostname'])."</td>"
    ."<td rowspan='18' valign='top' width='230'><table><tr><td colspan=5>".MapPic($data[$GSgame]['custom']['id'], GetArrVal($data[$GSgame]['mapname']), 0, "")."</td></tr><tr><td>";

		$vp = 1;
		$p = 0;
		do {
			if (isset($data[$GSgame]['players'][$p]['player'])) {
			$cols[0] = array(_PLAYERNAME, _FRAGS, _DEATHS, _PING, _TEAM);

				$cols[$vp][0] = GetArrVal($data[$GSgame]['players'][$p]['player']);

				$cols[$vp][1] = GetArrVal($data[$GSgame]['players'][$p]['frags']);

				$cols[$vp][2] = GetArrVal($data[$GSgame]['players'][$p]['deaths']);

				$cols[$vp][3] = GetArrVal($data[$GSgame]['players'][$p]['ping']);

				$cols[$vp][4] = GetArrVal($data[$GSgame]['players'][$p]['team']);

				$vp++;
			}
		$p++;
		} while ($p<=64);

if (isset($cols[1][1])) { echo PlayerList($cols); $vp--; } else { $vp=0; }

echo "</td></tr></table></td></tr>"
    ."<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['gamever'])."</td></tr>"
	."<tr><td>"._PING."</td><td>".$ping."</td></tr>"
    ."<tr><td>"._SERVERTYPE."</td><td>";
    if (isset($data[$GSgame]['dedicated']) and $data[$GSgame]['dedicated']='1') {
    echo _DEDICATED;
    } else {
    echo _NDEDICATED;
    }
echo "</td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".GetArrVal($data[$GSgame]['custom']['address']).":".GetArrVal($data[$GSgame]['hostport'])."</a></td></tr>"
    ."<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['mapname'])."</td></tr>"
    ."<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['gametype'])."</td></tr>";
	if ($data[$GSgame]['gamespermap']) {
		echo "<tr><td>"._GAMESPERMAP."</td><td>".GetArrVal($data[$GSgame]['gamespermap'])."</td></tr>";
	}
echo "<tr><td>"._PLAYERS."</td><td>".$vp."/".GetArrVal($data[$GSgame]['maxplayers'])."</td></tr>"
    ."<tr><td>"._PASSWORD."</td><td>";
    if(GetArrVal($data[$GSgame]['password'])=='1') {
		echo _PASSREQY;
    } else {
    	echo _PASSREQN;
    }
echo "</td></tr>"
    ."<tr><td>"._TIMELIMIT."</td><td>";
    if (GetArrVal($data[$GSgame]['timelimit'])=='0') {
    	echo _NONE;
    } else {
    	if (GetArrVal($data[$GSgame]['timelimit'])=='1') {
    	echo GetArrVal($data[$GSgame]['timelimit'])." "._MINUTE;
    	} else {
    	echo GetArrVal($data[$GSgame]['timelimit']." "._MINUTES);
    	}
    }
echo "</td></tr>"
    ."<tr><td>"._FF."</td><td>".Abled($data[$GSgame]['teamdamage']=='0')."</td></tr>"
    ."<tr><td>"._TIMELEFT."</td><td>".GetArrVal($data[$GSgame]['timeleft'])."</td></tr>"
    ."<tr><td>"._TIMELIMIT."</td><td>".YesNo($data[$GSgame]['timelimit'])."</td></tr>";

if (isset($data[$GSgame]['winpoints'])) {
echo "<tr><td>"._POINTSWIN."</td><td>".GetArrVal($data[$GSgame]['winpoints'])."</td></tr>";
}
if (isset($data[$GSgame]['powerups'])) {
echo "<tr><td>"._POWERUPS."</td><td>".GetArrVal($data[$GSgame]['powerups'])."</td></tr>";
}
echo "<tr><td align=\"center\" colspan=\"2\"><a href=\"http://www.codemasters.com/igi2\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.png\"></a></td></tr></table>";


?>