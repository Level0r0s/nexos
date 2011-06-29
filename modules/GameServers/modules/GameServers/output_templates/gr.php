<?php


echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='20%' valign='top'>"._GAMENAME."</td><td width='40%' valign='top'>".GetArrVal($data[$GSgame]['custom']['name'])."</td><td width='40%' valign='top' rowspan='20'>"
    ."<table border=0 cellpadding=0 cellspacing=7><tr><td colspan=4>".MapPic($data[$GSgame]['custom']['id'], $data[$GSgame]['map'], 0, "")."</td></tr><tr><td>";

		if (GetArrVal($data[$GSgame]['num_players'])!=0){
			$cols[0] = array(_PLAYERNAME);

			for ($p = 0; $vp <= GetArrVal($data[$GSgame]['num_players'])-1 ; $p++){
				if (GetArrVal($data[$GSgame]['players'][$p]['name'])) {
				$cols[$p+1][0] = "<a href=\"http://www.ghostrecon.com/leaderboard.php?ord=&srt=5&ld=1&gtag=".urlencode(GetArrVal($data[$GSgame]['players'][$p]['name']))."\" target=\"_blank\">".GetArrVal($data[$GSgame]['players'][$p]['name'])."</a>";
				$vp++;
				}
			}
		echo PlayerList($cols);
		}

echo "</td></tr></table></td></tr>"
    ."<tr><td>"._SERVERNAME."</td><td>".GetArrVal($data[$GSgame]['name'])."</td></tr>"
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
if (isset($data[$GSgame]['password'])){
echo "<tr><td>"._PASSWORD."</td><td>";
    if(GetArrVal($data[$GSgame]['password'])!=1) {
		echo _PASSREQN;
    } else {
    	echo _PASSREQY;
    }
}

if (isset($data[$GSgame]['motd'])){
echo "<tr><td>"._MOTD."</td><td>".GetArrVal($data[$GSgame]['motd'])."</td></tr>";
}

echo "<tr><td align=\"center\" colspan=\"2\"><a href=\"http://www.ghostrecon.com/index.php\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.png\"></a></td></tr></table>";

?>