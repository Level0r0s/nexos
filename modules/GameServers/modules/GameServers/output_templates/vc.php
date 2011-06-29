<?php

echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='30%'>"._SERVERNAME."</td><td width='40%'>".GetArrVal($data[$GSgame]['hostname'])."</td>"
    ."<td rowspan='18' valign='top' width='30%'>"
    ."<table border=0 cellpadding=0 cellspacing=7><tr><td colspan=3>";
		MapPic($data[$GSgame]['custom']['id'], $data[$GSgame]['mapname'], 0, "");
echo "</td></tr><tr><td>";

		if (GetArrVal($data[$GSgame]['numplayers'])!=0){
			$cols[0] = array(_PLAYERNAME, _FRAGS, _PING);

			for ($p = 0; $p <= GetArrVal($data[$GSgame]['numplayers'])-1 ; $p++){
				$cols[$p+1][0] = GetArrVal($data[$GSgame]['player_'.$p]);
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['frags_'.$p]);
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['ping_'.$p]);
			}
		echo PlayerList($cols);
		}


echo "</td></tr></table>";

echo "</td></tr>";
    echo "<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['gamever'])."</td></tr>"
    ."<tr><td>"._PING."</td><td>".$ping."</td></tr>"
    ."<tr><td>"._SERVERTYPE."</td><td>";
    if(GetArrVal($data[$GSgame]['dedic'])=='1') {
		echo _DEDICATED;
    } else {
    	echo _NDEDICATED;
    }
echo "</td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".$data[$GSgame]['custom']['address'].":".GetArrVal($data[$GSgame]['hostport'])."</td></tr>"
    ."<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['mapname'])."</td></tr>"
    ."<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['gametype'])."</td></tr>"
	."<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['numplayers'])."/".GetArrVal($data[$GSgame]['maxplayers'])."</td></tr>"
    ."<tr><td colspan=\"2\" align=\"center\"><a href=\"http://www.vietcong-game.com\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.png\"></a></td></tr>"
    ."</table>";

?>