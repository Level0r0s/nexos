<?php
if (strstr($data[$GSgame]['version'], 'ET')) { $modpath = "/et"; }
echo "<LINK REL=\"StyleSheet\" HREF=\"modules/".$module_name."/q3col.css\" TYPE=\"text/css\">"
	."<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='20%' valign='top'>"._SERVERNAME."</td><td width='40%' valign='top'>".Q3colors($data[$GSgame]['sv_hostname'], $GSTags)."</td><td width='40%' valign='top' rowspan='15'>"
    ."<table><tr><td colspan=3>".MapPic($data[$GSgame]['custom']['id'].$modpath, $data[$GSgame]['mapname'], 0, "")."</td></tr><tr><td>";

		if (GetArrVal($data[$GSgame]['num_players'])!=0){
			$cols[0] = array(_PLAYERNAME, _SCORE, _PING);

			for ($p = 0; $p <= GetArrVal($data[$GSgame]['num_players'])-1 ; $p++){
				$cols[$p+1][0] = Q3colors($data[$GSgame]['players'][$p]['name'], $GSTags);
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['players'][$p]['score']);
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['players'][$p]['ping']);
			}
		echo PlayerList($cols);
		}

echo "</td></tr></table></td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".$data[$GSgame]['custom']['address'].":".$data[$GSgame]['custom']['query_port']."&nbsp;".ASElink($data[$GSgame]['custom'], "RTCW")."</td></tr>"
    ."<tr><td>"._SERVERTYPE."</td><td>";
    if(strstr($data[$GSgame]['version'], 'win')) {
		echo _WINDOWS;
    } elseif(strstr($data[$GSgame]['version'], 'lin')) {
    	echo _LINUX;
    } else {
    	echo _UNKNOWN;
    }
echo "</td></tr>";
echo "<tr><td>"._MAPNAME."</td><td>".$data[$GSgame]['mapname']."</td></tr>";
if (isset($data[$GSgame]['.Maps'])) {
$MAPS = str_replace("-", "<br>", $data[$GSgame]['.Maps']);
echo "<tr><td valign='top'>"._MAPLIST."</td><td>".$MAPS."</td></tr>";
}
if (isset($data[$GSgame]['.Campaign'])) {
echo "<tr><td>"._CAMPAIGN."</td><td>".$data[$GSgame]['.Campaign']."</td></tr>";
}
echo "<tr><td>"._SVERSION."</td><td>".$data[$GSgame]['version']."</td></tr>"
	."<tr><td>"._PING."</td><td>".$ping."</td></tr>"
	."<tr><td>"._GAMETYPE."</td><td>".$data[$GSgame]['g_gametype']."</td></tr>"
    ."<tr><td>"._PLAYERS."</td><td>".$data[$GSgame]['num_players']."/".$data[$GSgame]['sv_maxclients']."</td></tr>"
    ."<tr><td>"._PASSWORD."</td><td>";
    if($data[$GSgame]['g_needpass']) {
		echo _PASSREQY;
    } else {
    	echo _PASSREQN;
    }
echo "</td></tr>"
	."<tr><td>"._TIMELIMIT."</td><td>".$data[$GSgame]['timelimit']."</td></tr>";

if (isset($data[$GSgame]['sv_allowAnonymous'])) {
	echo "<tr><td>"._ALLOWANON."</td><td>".YesNo($data[$GSgame]['sv_allowAnonymous']);
	echo "</td></tr>";
}
if (isset($data[$GSgame]['g_maxlives'])) {
echo "<tr><td>"._MAXLIVES."</td><td>";
    if($data[$GSgame]['g_maxlives']=='0') {
		echo _UNLIMITED;
    } else {
    	echo $data[$GSgame]['g_maxlives'];
    }
echo "</td></tr>";
}
echo "<tr><td>"._FF."</td><td>".Abled($data[$GSgame]['g_friendlyFire'])."</td></tr>";
if (isset($data[$GSgame]['sv_punkbuster'])) {
	echo "<tr><td>"._PUNKBUSTER."</td><td>".Abled($data[$GSgame]['sv_punkbuster'])."</td></tr>";
}
if (isset($data[$GSgame]['g_balancedteams'])) {
	echo "<tr><td>"._BALTEAMS."</td><td>".Abled($data[$GSgame]['g_balancedteams'])."</td></tr>";
}
if (isset($data[$GSgame]['Email'])){
	echo "<tr><td valign='top'>"._ADMININFO."</td><td valign='top'><a href=\"mailto:".$data[$GSgame]['Email']."\">".$data[$GSgame]['Email']."</a>";
	if (isset($data[$GSgame]['URL:'])){
	echo "<br><a href=\"";
	if(substr(strtolower($data[$GSgame]['URL:']), 0, 7)=="http://") {
	 echo $data[$GSgame]['URL:'];
	} else {
	 echo "http://".$data[$GSgame]['URL:'];
	}
	 echo "\" target=\"_blank\">"._WWW."</a>";
	}
echo "</td></tr>";
}
if (isset($data[$GSgame]['Location:'])){
echo "<tr><td>"._LOCATION."</td><td>".$data[$GSgame]['Location:']."</td></tr>";
}
if (isset($data[$GSgame]['CPU'])) {
echo "<tr><td>"._CPU."</td><td>".$data[$GSgame]['CPU']."</td></tr>";
}


echo "<tr><td align=\"center\" colspan=\"2\"><a href=\"";
if (strstr($data[$GSgame]['version'], 'ET')) {
echo "http://www.enemy-territory.com/";
} else {
echo "http://www.castlewolfenstein.com/";
}
echo "\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id'].$modpath."/logo.png\"></a></td></tr></table>";

?>