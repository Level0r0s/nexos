<?php
    //this should filter out the odd characters out of playernames
    //they are probably for color codes like quake3 but i couldn't find any documentation on them
    $junk = array("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
    $host = str_replace($junk, "", $data[$GSgame]['hostname']);
echo "<LINK REL=\"StyleSheet\" HREF=\"modules/".$module_name."/q3col.css\" TYPE=\"text/css\">"
	."<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='20%'>"._SERVERNAME."</td><td width='40%'>".$host."</td><td width='40%' valign='top' rowspan='20'>"
    ."<table><tr><td colspan=3>".MapPic($data[$GSgame]['custom']['id'], $data[$GSgame]['mapname'], 0, "")."</td></tr><tr><td>";

		if (GetArrVal($data[$GSgame]['num_players'])!=0){
			$cols[0] = array(_PLAYERNAME, _SCORE, _PING);

			for ($p = 0; $p <= GetArrVal($data[$GSgame]['num_players'])-1 ; $p++){
				$cols[$p+1][0] = str_replace($junk, "", $data[$GSgame]['players'][$p]['name']);
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['players'][$p]['score']);
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['players'][$p]['ping']);
			}
		echo PlayerList($cols);
		}

echo "</td></tr></table></td></tr>"
	."<tr><td>"._HOSTADDRESS."</td><td>".$data[$GSgame]['custom']['address'].":".$data[$GSgame]['custom']['query_port']."&nbsp;".ASElink($data[$GSgame]['custom'], "SOF")."</td></tr>"
	."<tr><td>"._MAPNAME."</td><td>".$data[$GSgame]['mapname']."</td></tr>";
if (isset($data[$GSgame]['gameversion'])){
	echo "<tr><td>"._SVERSION."</td><td>".$data[$GSgame]['gameversion']."</td></tr>";
}
echo "<tr><td>"._PING."</td><td>".$ping."</td></tr>";
echo "<tr><td>"._PLAYERS."</td><td>".$data[$GSgame]['num_players']."/".$data[$GSgame]['maxclients']."</td></tr>";
if (isset($data[$GSgame]['timelimit'])){
	echo "<tr><td>"._TIMELIMIT."</td><td>".$data[$GSgame]['timelimit']."</td></tr>";
}
if (isset($data[$GSgame]['fraglimit'])){
	echo "<tr><td>"._FRAGLIMIT."</td><td>".$data[$GSgame]['fraglimit']."</td></tr>";
}
if (isset($data[$GSgame]['mp_pointlimit'])){
	echo "<tr><td>"._POINTLIMIT."</td><td>".$data[$GSgame]['mp_pointlimit']."</td></tr>";
}
if (isset($data[$GSgame]['capturelimit'])){
	echo "<tr><td>"._CAPLIMIT."</td><td>".$data[$GSgame]['capturelimit']."</td></tr>";
}

echo "<tr><td colspan=\"2\" align=\"center\"><a href=\"http://games.activision.com/games/soldieroffortune/doublehelix.asp\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.png\"></a></td></tr></table>";

?>