<?php

echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='30%'>"._SERVERNAME."</td><td width='40%'>".GetArrVal($data[$GSgame]['hostname'])."</td>"
    ."<td rowspan='18' valign='top' width='230'>"
    ."<table><tr><td colspan=4>".MapPic($data[$GSgame]['custom']['id'], $data[$GSgame]['mapname'], 0, "")."</td></tr><tr><td>";

		if (GetArrVal($data[$GSgame]['numplayers'])!=0){
		$cols[0] = array(_PLAYERNAME, _PING, _FRAGS);
			for ($p = 0; $p <= $data[$GSgame]['numplayers'] ; $p++){
				if (GetArrVal($data[$GSgame]['players'][$p]['player']!='')) {
				$cols[$p+1][0] = GetArrVal($data[$GSgame]['players'][$p]['player']);
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['players'][$p]['ping']);
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['players'][$p]['frags']);
				}
			}
		echo PlayerList($cols);
		}
echo "</td></tr></table></td></tr>"
    ."<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['gamever'])."</td></tr>"
    ."<tr><td>"._PING."</td><td>".$ping."</td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".$data[$GSgame]['custom']['address'].":".GetArrVal($data[$GSgame]['hostport'])."</td></tr>"
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
echo "</td></tr>"
    ."<tr><td>"._FRAGLIMIT."</td><td>";
    if (GetArrVal($data[$GSgame]['fraglimit'])=='0') {
    	echo _NONE;
    } else {
    	echo GetArrVal($data[$GSgame]['fraglimit']);
    }
echo "</td></tr>"
	."<tr><td align=\"center\" colspan=\"2\"><a href=\"http://nolf2.sierra.com/\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.png\"></a></td></tr></table>";

?>