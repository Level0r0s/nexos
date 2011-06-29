<?php
echo "<LINK REL=\"StyleSheet\" HREF=\"modules/".$module_name."/q3col.css\" TYPE=\"text/css\">";
echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='20%' valign='top'>"._GAMENAME."</td><td width='40%' valign='top'>".GetArrVal($data[$GSgame]['gamename'])."</td><td width='40%' valign='top' rowspan='15'>"
    ."<table><tr><td colspan=3>".MapPic($data[$GSgame]['custom']['id'], GetArrVal($data[$GSgame]['mapname']), 0, "")."</td></tr><tr><td>";

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
    ."<tr><td>"._SERVERNAME."</td><td>".Q3colors($data[$GSgame]['sv_hostname'], $GSTags)."</td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".GetArrVal($data[$GSgame]['custom']['address']).":".GetArrVal($data[$GSgame]['custom']['query_port'])."</td></tr>"
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

if (isset($data[$GSgame]['Admin'])){
	if (isset($data[$GSgame]['Admin E-Mail'])){
	 echo "<tr><td valign='top'>"._ADMININFO."</td><td valign='top'><a href=\"mailto:".GetArrVal($data[$GSgame]['Admin E-Mail'])."\">".GetArrVal($data[$GSgame]['Admin'])."</a></td></tr>";;
	} else {
	 echo "<tr><td valign='top'>"._ADMININFO."</td><td valign='top'>".GetArrVal($data[$GSgame]['Admin'])."</td></tr>";
	}
}
echo "<tr><td align=\"center\" colspan=\"2\"><a href=\"http://jediknight2.lucasarts.com/\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.png\"></a></td></tr></table>";

?>