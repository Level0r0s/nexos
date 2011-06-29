<?php
echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='30%'>"._GAMENAME."</td><td width='40%'>". GetArrVal($data[$GSgame]['custom']['name'])."</td><td rowspan='18' valign='top' width='30%'>"
    ."<table border=0><tr><td colspan=4>".MapPic($data[$GSgame]['custom']['id'], $data[$GSgame]['mapname'], 0, "")."</td></tr><tr><td>";

		if (GetArrVal($data[$GSgame]['num_players'])!=0){
			$cols[0] = array(_PLAYERNAME, _PING);

			for ($p = 0; $p <= GetArrVal($data[$GSgame]['num_players'])-1 ; $p++){
				$cols[$p+1][0] = Q3colors($data[$GSgame]['players'][$p]['name'], 1);
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['players'][$p]['ping']);
			}
		echo PlayerList($cols);
		}


echo "</td></tr></table></td></tr>"
    ."<tr><td>"._SERVERNAME."</td><td>".GetArrVal($data[$GSgame]['sv_hostname'])."</td></tr>"
    ."<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['version'])."</td></tr>"
    ."<tr><td>"._PING."</td><td>".$ping."</td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".$data[$GSgame]['custom']['address'].":".$data[$GSgame]['custom']['query_port']."</td></tr>"
    ."<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['mapname'])."</td></tr>"
    ."<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['g_gametypestring'])."</td></tr>"
	."<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['num_players'])."/".GetArrVal($data[$GSgame]['sv_maxclients'])."</td></tr>";
	if (isset($data[$GSgame]['sv_allowDownload'])){
	 echo "<tr><td>"._ALLOWDOWNLOADS."</td><td>".YesNo($data[$GSgame]['sv_allowDownload'])."</td></tr>";
	}
	echo "<tr><td>"._TIMELIMIT."</td><td>";
	$tl = GetArrVal($data[$GSgame]['timelimit']);
    if ($tl=='0') {
     echo _NONE;
    } else {
    	if ($tl=='1') {
    	echo $tl." "._MINUTE;
    	} else {
    	echo $tl." "._MINUTES;
    	}
    }
	echo "</td></tr>";
	if (isset($data[$GSgame]['sv_maplist'])) {
	$MAPS = str_replace("  ", " ", GetArrVal($data[$GSgame]['sv_maplist']));
	$MAPS = str_replace(" ", "<br>", $MAPS);
	echo "<tr><td valign='top'>"._MAPLIST."</td><td>".$MAPS."</td></tr>";
	}
echo "<tr><td align=\"center\" colspan=\"2\"><a href=\"http://mohaa.ea.com/\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/mohaa/logo.png\"></a></td></tr></table>";
?>