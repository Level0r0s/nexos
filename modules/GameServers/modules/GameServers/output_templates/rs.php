<?php


echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='20%' valign='top'>"._GAMENAME."</td><td width='40%' valign='top'>".GetArrVal($data[$GSgame]['custom']['name'])."</td><td width='40%' valign='top' rowspan='20'>"
    ."<table border=0 cellpadding=0 cellspacing=7><tr><td colspan=4>".MapPic($data[$GSgame]['custom']['id'], $data[$GSgame]['mapname'], 0, "")."</td></tr><tr><td>";

		if (GetArrVal($data[$GSgame]['numplayers'])!=0){
			$cols[0] = array(_PLAYERNAME, _TEAM, _PING);

			for ($p = 0; $p <= GetArrVal($data[$GSgame]['numplayers'])-1 ; $p++){
				$cols[$p+1][0] = GetArrVal($data[$GSgame]['players'][$p]['player']);
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['players'][$p]['team']);
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['players'][$p]['ping']);
			}
		echo PlayerList($cols);
		}

echo "</td></tr></table></td></tr>"
    ."<tr><td>"._SERVERNAME."</td><td>".GetArrVal($data[$GSgame]['hostname'])."</td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".$data[$GSgame]['custom']['address'].":".$data[$GSgame]['custom']['query_port']."&nbsp;".ASElink($data[$GSgame]['custom'], "RS")."</td></tr>";
if (isset($data[$GSgame]['gamever'])){
echo "<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['gamever'])."</td></tr>";
}
echo "<tr><td>"._PING."</td><td>".$ping."</td></tr>";
echo "<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['mapname'])."</td></tr>";
echo "<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['gametype'])."</td></tr>"
    ."<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['numplayers'])."/".GetArrVal($data[$GSgame]['maxplayers'])."</td></tr>";
if (isset($data[$GSgame]['password'])){
echo "<tr><td>"._PASSWORD."</td><td>";
    if(GetArrVal($data[$GSgame]['password'])!=1) {
		echo _PASSREQN;
    } else {
    	echo _PASSREQY;
    }
}

if (isset($data[$GSgame]['timelimit'])){
echo "<tr><td>"._TIMELIMIT."</td><td>".GetArrVal($data[$GSgame]['timelimit'])."</td></tr>";
}
if (isset($data[$GSgame]['teamplay'])){
echo "<tr><td>"._TEAMPLAY."</td><td>".Abled($data[$GSgame]['teamplay'])."</td></tr>";
}
if (isset($data[$GSgame]['rs_armpatches'])){
echo "<tr><td>"._RSARMPATCH."</td><td>".Abled($data[$GSgame]['rs_armpatches'])."</td></tr>";
}
echo "<tr><td align=\"center\" colspan=\"2\"><a href=\"http://www.redstorm.com/games/gameinfo.php?id=17\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.gif\"></a></td></tr></table>";

?>