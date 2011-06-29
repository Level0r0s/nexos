<?php

echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='30%'>"._SERVERNAME."</td><td width='40%'>".GetArrVal($data[$GSgame]['hostname'])."</td>"
    ."<td rowspan='18' valign='top' width='230'><table><tr><td colspan=3>".MapPic($data[$GSgame]['custom']['id'], $data[$GSgame]['mapname'], 0, "")."</td></tr><tr><td>";
		if (GetArrVal($data[$GSgame]['num_players'])!=0){
			$cols[0] = array(_PLAYERNAME, _FRAGS, _TEAM, _PING);

			for ($p = 0; $p <= GetArrVal($data[$GSgame]['num_players']) ; $p++){
				$cols[$p+1][0] = FCColors($data[$GSgame]['players'][$p]['name'], $GSTags);
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['players'][$p]['score']);
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['players'][$p]['team']);;
				$cols[$p+1][3] = GetArrVal($data[$GSgame]['players'][$p]['ping']);
			}
		echo PlayerList($cols);
		}
echo "</td></tr></table></td></tr>"
	."<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['version'])."</td></tr>"
	."<tr><td>"._PING."</td><td>".$ping."</td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".GetArrVal($data[$GSgame]['custom']['address']).":".GetArrVal($data[$GSgame]['custom']['query_port'])."</td></tr>"
    ."<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['map'])."</td></tr>"
    ."<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['game_type'])."</td></tr>"
	."<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['num_players'])."</td></tr>"
	."<tr><td>"._FF."</td><td>".Abled(intval($data[$GSgame]['gr_FriendlyFire']))."</td></tr>"
    ."<tr><td>"._TIMELIMIT."</td><td>";
    if (GetArrVal($data[$GSgame]['gr_TimeLimit'])=='0') {
    	echo _NONE;
    } else {
    	if (intval(GetArrVal($data[$GSgame]['gr_TimeLimit']))=='1') {
    	echo intval(GetArrVal($data[$GSgame]['gr_TimeLimit']))." "._MINUTE;
    	} else {
    	echo intval(GetArrVal($data[$GSgame]['gr_TimeLimit']))." "._MINUTES;
    	}
    }
echo "</td></tr>";

echo "<tr><td colspan=\"2\" align=\"center\"><a href=\"http://www.farcrygame.com\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.png\"></a></td></tr></table>";
?>