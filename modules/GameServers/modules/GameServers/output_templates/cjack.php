<?php

echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='30%'>"._SERVERNAME."</td><td width='40%'>".GetArrVal($data[$GSgame]['hostname'])."</td>"
    ."<td rowspan='18' valign='top' width='230'><table><tr><td colspan=3>".MapPic($data[$GSgame]['custom']['id'], $data[$GSgame]['mapname'], 0, "")."</td></tr><tr><td>";
		if (GetArrVal($data[$GSgame]['numplayers'])!=0){
			$cols[0] = array(_PLAYERNAME, _PING, _FRAGS);

			for ($p = 0; $p <= GetArrVal($data[$GSgame]['numplayers'])-1 ; $p++){
				$cols[$p+1][0] = GetArrVal($data[$GSgame]['players'][$p]['player']);
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['players'][$p]['ping']);
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['players'][$p]['frags']);
			}
		echo PlayerList($cols);
		}
echo "</td></tr></table></td></tr>"
    ."<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['gamever'])."</td></tr>"
	."<tr><td>"._PING."</td><td>".$ping."</td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".GetArrVal($data[$GSgame]['custom']['address']).":".GetArrVal($data[$GSgame]['custom']['query_port'])."</td></tr>"
    ."<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['mapname'])."</td></tr>"
    ."<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['gametype'])."</td></tr>"
	."<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['numplayers'])."/".GetArrVal($data[$GSgame]['maxplayers'])."</td></tr>"
    ."<tr><td>"._PASSWORD."</td><td>";
    if(GetArrVal($data[$GSgame]['password'])) {
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
    	echo GetArrVal($data[$GSgame]['timelimit'])." "._MINUTES;
    	}
    }
echo "</td></tr>"
    ."<tr><td>"._FRAGLIMIT."</td><td>";
    if (GetArrVal($data[$GSgame]['fraglimit'])) {
    	echo GetArrVal($data[$GSgame]['fraglimit']);
    } else {
    	echo _NONE;
    }
echo "</td></tr>";

if (GetArrVal($data[$GSgame]['options'])) {
$OPT = str_replace(";", "<br>", $data[$GSgame]['options']);
} else {
$OPT = _NONE;
}

echo "<tr><td valign='top'>"._OPTIONS."</td><td>".$OPT."</td></tr>"
    ."<tr><td colspan=\"2\" align=\"center\"><a href=\"http://nolf2.sierra.com/\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.png\"></a></td></tr></table>";
?>