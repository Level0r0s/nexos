<?php

echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='30%'>"._SERVERNAME."</td><td width='40%'>".GetArrVal($data[$GSgame]['hostname'])."</td><td rowspan='14'>"
    ."<table border=0><tr><td colspan=3>".MapPic($data[$GSgame]['custom']['id'], GetArrVal($data[$GSgame]['mapname']), 0, "")."</td></tr><tr><td>";

		if (GetArrVal($data[$GSgame]['numplayers'])!=0){
			$cols[0] = array(_PLAYERNAME, _PING, _FRAGS, _DEATHS);

			for ($p = 0; $p <= GetArrVal($data[$GSgame]['numplayers'])-1 ; $p++){
				$cols[$p+1][0] = GetArrVal($data[$GSgame]['player_'.$p]);
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['score_'.$p]);
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['ping_'.$p]);
			}
		echo PlayerList($cols);
		}

echo "</td></tr></table></td></tr>"
	."<tr><td>"._PING."</td><td>".$ping."</td></tr>"
    ."<tr><td>"._SVERSION."</td><td>";
    echo GetArrVal($data[$GSgame]['gamever']);
echo "</td></tr>"
    ."<tr><td>"._SERVERTYPE."</td><td>";
    if (isset($data[$GSgame]['dedicated']) and $data[$GSgame]['dedicated']='1') {
    echo _DEDICATED;
    } else {
    echo _NDEDICATED;
    }
echo "</td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".$data[$GSgame]['custom']['address'].":".$data[$GSgame]['hostport']."</a></td></tr>"
    ."<tr><td>"._MAPNAME."</td><td>".$data[$GSgame]['mapname']."</td></tr>"
    ."<tr><td>"._GAMETYPE."</td><td>".$data[$GSgame]['gametype']."</td></tr>";
	if ($data[$GSgame]['gamespermap']) {
		echo "<tr><td>"._GAMESPERMAP."</td><td>".$data[$GSgame]['gamespermap']."</td></tr>";
	}
echo "<tr><td>"._PLAYERS."</td><td>".$data[$GSgame]['numplayers']."/".$data[$GSgame]['maxplayers']."</td></tr>"
    ."<tr><td>"._PASSWORD."</td><td>";
    if($data[$GSgame]['password']=='1') {
		echo _PASSREQY;
    } else {
    	echo _PASSREQN;
    }
echo "</td></tr>"
    ."<tr><td>"._TIMELIMIT."</td><td>";
    if ($data[$GSgame]['timelimit']=='0') {
    	echo _NONE;
    } else {
    	if ($data[$GSgame]['timelimit']=='1') {
    	echo $data[$GSgame]['timelimit']." "._MINUTE;
    	} else {
    	echo $data[$GSgame]['timelimit']." "._MINUTES;
    	}
    }
echo "</td></tr>"
    ."<tr><td>"._FRAGLIMIT."</td><td>";
    if ($data[$GSgame]['fraglimit']=='0') {
    	echo _NONE;
    } else {
    	echo $data[$GSgame]['fraglimit'];
    }
echo "</td></tr>"
    ."<tr><td>"._POINTSKILL."</td><td>".$data[$GSgame]['killpoints']."</td></tr>"
    ."<tr><td>"._POINTSDEATH."</td><td>".$data[$GSgame]['deathpoints']."</td></tr>"
    ."<tr><td>"._POINTSWIN."</td><td>".$data[$GSgame]['winpoints']."</td></tr>"
    ."<tr><td>"._POWERUPS."</td><td>".$data[$GSgame]['powerups']."</td></tr>"
	."<tr><td align=\"center\" colspan=\"2\"><a href=\"http://www.tron20.net\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.png\"></a></td></tr></table>";


?>