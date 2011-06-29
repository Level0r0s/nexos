<?php


echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='20%' valign='top'>"._GAMENAME."</td><td width='40%' valign='top'>".GetArrVal($data[$GSgame]['custom']['name'])."</td><td width='40%' valign='top' rowspan='20'>"
    ."<table border=0 cellpadding=0 cellspacing=7><tr><td colspan=4>".MapPic($data[$GSgame]['custom']['id'], $data[$GSgame]['map'], 0, "")."</td></tr><tr><td>";

		if (GetArrVal($data[$GSgame]['num_players'])!=0){
			$cols[0] = array(_PLAYERNAME, _SCORE, _PING, _TIME);

			for ($p = 0; $p <= GetArrVal($data[$GSgame]['num_players'])-1 ; $p++){
				$cols[$p+1][0] = GetArrVal($data[$GSgame]['players'][$p]['name']);
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['players'][$p]['score']);
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['players'][$p]['ping']);
				$cols[$p+1][3] = GetArrVal($data[$GSgame]['players'][$p]['time']);
			}
		echo PlayerList($cols);
		}

echo "</td></tr></table></td></tr>"
    ."<tr><td>"._SERVERNAME."</td><td>".GetArrVal($data[$GSgame]['hostname'])."</td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".$data[$GSgame]['custom']['address'].":".$data[$GSgame]['custom']['query_port']."</td></tr>"
    ."<tr><td>"._SERVERTYPE."</td><td>";
    echo " ";
    if(GetArrVal($data[$GSgame]['dedicated'])==0) {
		echo _NDEDICATED;
    } else {
    	echo _DEDICATED;
    }
if (isset($data[$GSgame]['version'])){
echo "<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['version'])."</td></tr>";
}
echo "<tr><td>"._PING."</td><td>".$ping."</td></tr>";
echo "<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['map'])."</td></tr>";
echo "<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['game_type'])."</td></tr>"
    ."<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['num_players'])."/".GetArrVal($data[$GSgame]['max_players'])."</td></tr>";
if (isset($data[$GSgame]['locked'])){
echo "<tr><td>"._PASSWORD."</td><td>";
    if(GetArrVal($data[$GSgame]['locked'])!=1) {
		echo _PASSREQN;
    } else {
    	echo _PASSREQY;
    }
}

if (isset($data[$GSgame]['num_rounds'])){
echo "<tr><td>"._NUMROUNDS."</td><td>".GetArrVal($data[$GSgame]['num_rounds'])."</td></tr>";
}
if (isset($data[$GSgame]['radar'])){
echo "<tr><td>"._RADAR."</td><td>".Abled($data[$GSgame]['radar'])."</td></tr>";
}
if (isset($data[$GSgame]['tk_penalty'])){
echo "<tr><td>"._TKPENALTY."</td><td>".Abled($data[$GSgame]['tk_penalty'])."</td></tr>";
}
if (isset($data[$GSgame]['between_round_time'])){
echo "<tr><td>"._BROUNDS."</td><td>".GetArrVal($data[$GSgame]['between_round_time'])."</td></tr>";
}
if (isset($data[$GSgame]['team_autobalance'])){
echo "<tr><td>"._BALTEAMS."</td><td>".GetArrVal($data[$GSgame]['team_autobalance'])."</td></tr>";
}
if (isset($data[$GSgame]['friendly_fire'])){
echo "<tr><td>"._FF."</td><td>".Abled($data[$GSgame]['friendly_fire'])."</td></tr>";
}
if (isset($data[$GSgame]['num_terrorists'])){
echo "<tr><td>"._TERRORIST."</td><td>".GetArrVal($data[$GSgame]['num_terrorists'])."</td></tr>";
}
if (isset($data[$GSgame]['bomb_time'])){
echo "<tr><td>"._BOMBTIME."</td><td>".GetArrVal($data[$GSgame]['bomb_time'])."</td></tr>";
}
if (isset($data[$GSgame]['map_time'])){
echo "<tr><td>"._MAPTIME."</td><td>".GetArrVal($data[$GSgame]['map_time'])."</td></tr>";
}
if (is_array($data[$GSgame]['map_list'])){
echo "<tr><td valign=\"top\">"._MAPLIST."</td><td>";
echo "<table border='0'><td>"._MAP."</td><td>"._GAMETYPE."</td></tr>";
foreach ($data[$GSgame]['map_list'] as $k => $v) {
	echo "<tr><td>".$data[$GSgame]['map_list'][$k]['name']."</td><td>".$data[$GSgame]['map_list'][$k]['game_type']."</td></tr>";
}
echo "</table></td></tr>";
}

echo "<tr><td align=\"center\" colspan=\"2\"><a href=\"http://www.raven-shield.com/\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.png\"></a></td></tr></table>";

?>