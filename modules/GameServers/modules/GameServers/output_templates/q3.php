<?php
echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='30%'>"._SERVERNAME."</td><td width='40%'>".Q3colors($data[$GSgame]['sv_hostname'], $GSTags)."</td><td width='40%' valign='top' rowspan='15'>"
    ."<table><tr><td colspan=3>".MapPic($data[$GSgame]['custom']['id'], $data[$GSgame]['mapname'], 0, "")."</td></tr><tr><td>";

		if (GetArrVal($data[$GSgame]['num_players'])!=0){
			$cols[0] = array(_PLAYERNAME, _SCORE, _PING);

			for ($p = 0; $p <= GetArrVal($data[$GSgame]['num_players'])-1 ; $p++){
				$cols[$p+1][0] = Q3colors($data[$GSgame]['players'][$p]['name'], $GSTags);
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['players'][$p]['score']);
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['players'][$p]['ping']);
			}
		echo PlayerList($cols);
		}


echo "</td></tr></table>";
echo "</td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".$data[$GSgame]['custom']['address'].":".$data[$GSgame]['custom']['query_port']."&nbsp;".ASElink($data[$GSgame]['custom'], "Q3")."</td></tr>"
    ."<tr><td>"._SERVERTYPE."</td><td>";
    echo " ";
    if(strstr(GetArrVal($data[$GSgame]['version']), 'win')) {
		echo _WINDOWS;
    } elseif(strstr(GetArrVal($data[$GSgame]['version']), 'lin')) {
    	echo _LINUX;
    } else {
    	echo _UNKNOWN;
    }
echo "<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['mapname'])."</td></tr>";
if (isset($data[$GSgame]['gameversion'])){
echo "<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['gameversion'])."</td></tr>";
}
echo "<tr><td>"._PING."</td><td>".$ping."</td></tr>";
echo "<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['g_gametype'])."</td></tr>"
    ."<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['num_players'])."/".GetArrVal($data[$GSgame]['sv_maxclients'])."</td></tr>";
if (isset($data[$GSgame]['g_needpass'])){
echo "<tr><td>"._PASSWORD."</td><td>";
    if(GetArrVal($data[$GSgame]['g_needpass'])) {
		echo _PASSREQY;
    } else {
    	echo _PASSREQN;
    }
}

if (isset($data[$GSgame]['mp_timelimit'])){
echo "<tr><td>"._TIMELIMIT."</td><td>".GetArrVal($data[$GSgame]['mp_timelimit'])."</td></tr>";
}
if (isset($data[$GSgame]['timelimit'])){
echo "<tr><td>"._TIMELIMIT."</td><td>".GetArrVal($data[$GSgame]['timelimit'])."</td></tr>";
}
if (isset($data[$GSgame]['fraglimit'])){
echo "<tr><td>"._FRAGLIMIT."</td><td>".GetArrVal($data[$GSgame]['fraglimit'])."</td></tr>";
}
if (isset($data[$GSgame]['mp_pointlimit'])){
echo "<tr><td>"._POINTLIMIT."</td><td>".GetArrVal($data[$GSgame]['mp_pointlimit'])."</td></tr>";
}
if (isset($data[$GSgame]['capturelimit'])){
echo "<tr><td>"._CAPLIMIT."</td><td>".GetArrVal($data[$GSgame]['capturelimit'])."</td></tr>";
}
if (isset($data[$GSgame]['sv_allowdownload'])){
echo "<tr><td>"._ALLOWDOWNLOADS."</td><td>".YesNo($data[$GSgame]['sv_allowdownload'])."</td></tr>";
}
if (isset($data[$GSgame]['sv_allowDownload'])){
echo "<tr><td>"._ALLOWDOWNLOADS."</td><td>".YesNo($data[$GSgame]['sv_allowDownload'])."</td></tr>";
}
if (isset($data[$GSgame]['sv_punkbuster'])){
echo "<tr><td>"._PUNKBUSTER."</td><td>".Abled($data[$GSgame]['sv_punkbuster'])."</td></tr>";
}
if (isset($data[$GSgame]['.location'])){
echo "<tr><td>"._LOCATION."</td><td>".GetArrVal($data[$GSgame]['.location'])."</td></tr>";
}
if (isset($data[$GSgame]['Location'])){
echo "<tr><td>"._LOCATION."</td><td>".GetArrVal($data[$GSgame]['Location'])."</td></tr>";
}

if (isset($data[$GSgame]['.admin'])){
	if (isset($data[$GSgame]['.email'])){
	echo "<tr><td valign='top'>"._ADMININFO."</td><td valign='top'><a href=\"mailto:".GetArrVal($data[$GSgame]['.email'])."\">".Q3Colors($data[$GSgame]['.admin'], 1)."</a>";
	} else {
	echo "<tr><td valign='top'>"._ADMININFO."</td><td valign='top'>".Q3Colors($data[$GSgame]['.admin'], 0);
	}
	if (isset($data[$GSgame]['.www'])){
		echo "<br><a href=\"";
			if(substr(strtolower(GetArrVal($data[$GSgame]['.www'])), 0, 7)=="http://") {
			 echo GetArrVal($data[$GSgame]['.www']);
			} else {
			 echo "http://".GetArrVal($data[$GSgame]['.www']);
			}
		echo "\" target=\"_blank\">"._WWW."</a>";
	}
echo "</td></tr>";
}

if (isset($data[$GSgame]['Administrator'])){
	if (isset($data[$GSgame]['Email'])){
	echo "<tr><td valign='top'>"._ADMININFO."</td><td valign='top'><a href=\"mailto:".GetArrVal($data[$GSgame]['Email'])."\">".Q3Colors($data[$GSgame]['Administrator'], 1)."</a>";
	} else {
	echo "<tr><td valign='top'>"._ADMININFO."</td><td valign='top'>".Q3Colors($data[$GSgame]['Administrator'], $GSTags);
	}
	if (isset($data[$GSgame]['URL'])){
		echo "<br><a href=\"";
			if(substr(strtolower(GetArrVal($data[$GSgame]['URL'])), 0, 7)=="http://") {
			 echo GetArrVal($data[$GSgame]['URL']);
			} else {
			 echo "http://".GetArrVal($data[$GSgame]['URL']);
			}
		echo "\" target=\"_blank\">"._WWW."</a>";
	}

echo "</td></tr>";
}

echo "</table>";

?>