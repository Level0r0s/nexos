<?php

echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='30%'>"._GAMENAME."</td><td width='70%'>".GetArrVal($data[$GSgame]['custom']['name'])."</td>"
    ."<td rowspan='18' valign='top' width='230'><table><tr><td colspan=3>".MapPic($data[$GSgame]['custom']['id'], GetArrVal($data[$GSgame]['mapname']), 0, "")."</td></tr><tr><td>";

		if (GetArrVal($data[$GSgame]['numplayers'])!=0){
			$cols[0] = array(_PLAYERNAME, _PING, _RACE);

			for ($p = 0; $p <= GetArrVal($data[$GSgame]['numplayers'])-1 ; $p++){
				$cols[$p+1][0] = GetArrVal($data[$GSgame]['players'][$p]['player']);
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['players'][$p]['ping']);
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['players'][$p]['race']);
			}
		echo PlayerList($cols);
		}

echo "</td></tr></table></td></tr>"
    ."<tr><td>"._SERVERNAME."</td><td>".GetArrVal($data[$GSgame]['hostname'])."</td></tr>"
    ."<tr><td>"._SERVERTYPE."</td><td>";
    if(GetArrVal($data[$GSgame]['ded'])) {
		echo _DEDICATED;
    } else {
    	echo _NDEDICATED;
    }
echo "</td></tr>"
    ."<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['gamever'])."</td></tr>"
    ."<tr><td>"._PING."</td><td>".$ping."</td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".GetArrVal($data[$GSgame]['custom']['address']).":".GetArrVal($data[$GSgame]['hostport'])."</a></td></tr>"
    ."<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['mapname'])."</td></tr>"
    ."<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['gametype'])."</td></tr>"
    ."<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['numplayers'])."/".GetArrVal($data[$GSgame]['maxplayers'])."</td></tr>"
    ."<tr><td>"._FF."</td><td>".Abled($data[$GSgame]['ff'])."</td></tr>"
    ."<tr><td colspan=\"2\" valign=\"top\"><a href=\"http://avp2.sierra.com\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".GetArrVal($data[$GSgame]['custom']['id'])."/logo.png\"></a></td></tr></table>";
?>