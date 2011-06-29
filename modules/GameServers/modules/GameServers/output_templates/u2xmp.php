<?php
echo "<LINK REL=\"StyleSheet\" HREF=\"modules/".$module_name."/Ucol.css\" TYPE=\"text/css\">"
	."<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='30%'>"._SERVERNAME."</td><td width='40%'>".GetArrVal($data[$GSgame]['hostname'])."</td>"
    ."<td rowspan='18' valign='top' width='230'><td width='30%' valign='top' rowspan='18'><table><tr><td colspan=4>";
    	MapPic($data[$GSgame]['custom']['id'], $data[$GSgame]['map'], 0, "");
echo "</td></tr><tr><td>";

		if (GetArrVal($data[$GSgame]['num_players'])!=0){
		$cols[0] = array(_PLAYERNAME, _TEAM, _SCORE, _CLASS, _PING, _ARTIFACT);
			for ($p = 0; $p <= $data[$GSgame]['num_players'] ; $p++){
				if (GetArrVal($data[$GSgame]['players'][$p]['name']!='')) {
				$cols[$p+1][0] = GetArrVal($data[$GSgame]['players'][$p]['name']);
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['players'][$p]['team']);
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['players'][$p]['score']);
				$cols[$p+1][3] = GetArrVal($data[$GSgame]['players'][$p]['class']);
				$cols[$p+1][4] = GetArrVal($data[$GSgame]['players'][$p]['ping']);
				if (GetArrVal($data[$GSgame]['players'][$p]['artifact'])!='false') {
				$cols[$p+1][5] = _YES;
				}
				}
			}
		echo PlayerList($cols);
		}
echo "</td></tr></table></td></tr>"
	."<tr><td>"._SERVERTYPE."</td><td>";
    if(GetArrVal($data[$GSgame]['servermode'])=='dedicated') {
		echo _DEDICATED;
    } else {
    	echo _NDEDICATED;
    }
echo "<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['ServerVersion'])."</td></tr>"
	."<tr><td>"._PING."</td><td>".$ping."</td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".$data[$GSgame]['custom']['address'].":".GetArrVal($data[$GSgame]['port'])."</td></tr>";
echo "<tr><td>"._STATS."</td><td>".Abled($data[$GSgame]['gamestats']=='true')."</td></tr>";
echo "<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['map'])."</td></tr>"
    ."<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['game_type'])."</td></tr>"
	."<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['num_players'])."/".GetArrVal($data[$GSgame]['max_players'])."</td></tr>";
if (isset($data[$GSgame]['autobalance'])) {
    echo "<tr><td>"._BALTEAMS."</td><td>".GetArrVal($data[$GSgame]['autobalance'])."</td></tr>";
}
if (isset($data[$GSgame]['teamdamage'])) {
    echo "<tr><td>"._TEAMDAMAGE."</td><td>".GetArrVal($data[$GSgame]['teamdamage'])."</td></tr>";
}
if (isset($data[$GSgame]['respawntime'])) {
    echo "<tr><td>"._SPAWNTIME."</td><td>".GetArrVal($data[$GSgame]['respawntime'])."</td></tr>";
}
if (isset($data[$GSgame]['prematchwait'])) {
    echo "<tr><td>"._PREMATCHWAIT."</td><td>".GetArrVal($data[$GSgame]['prematchwait'])."</td></tr>";
}
if (isset($data[$GSgame]['vehiclemode'])) {
    echo "<tr><td>"._VEHICLEMODE."</td><td>".GetArrVal($data[$GSgame]['vehiclemode'])."</td></tr>";
}
if (GetArrVal($data[$GSgame]['adminname'])!='') {
echo "<tr><td>"._ADMINNAME."</td><td>";
    if (isset($data[$GSgame]['adminemail'])){
		if (strstr(GetArrVal($data[$GSgame]['adminemail']), '@')){
		echo "<a href=\"mailto:".GetArrVal($data[$GSgame]['adminemail'])."\">".GetArrVal($data[$GSgame]['adminname'])."</a>";
		}
		if (substr(GetArrVal($data[$GSgame]['adminemail']), 0, 7)=='http://'){
		echo "<a href=\"".GetArrVal($data[$GSgame]['adminemail'])."\" target=\"_blank\">".GetArrVal($data[$GSgame]['adminname'])."</a>";
		}
    } else {
    echo GetArrVal($data[$GSgame]['adminname']);
    }
echo "</td></tr>";

}

echo "</table>";

?>