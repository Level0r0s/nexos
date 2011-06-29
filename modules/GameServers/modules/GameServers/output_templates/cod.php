<?php
echo "<LINK REL=\"StyleSheet\" HREF=\"modules/".$module_name."/q3col.css\" TYPE=\"text/css\">";
echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='20%' valign='top'>"._SERVERNAME."</td><td width='40%' valign='top'>".Q3colors($data[$GSgame]['sv_hostname'], $GSTags)."</td>"
    ."<td width='40%' valign='top' rowspan='15'><table><tr><td colspan=3>".MapPic($data[$GSgame]['custom']['id'], GetArrVal($data[$GSgame]['mapname']), 0, "")."</td></tr><tr><td>";

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
    ."<tr><td>"._HOSTADDRESS."</td><td>".GetArrVal($data[$GSgame]['custom']['address']).":".GetArrVal($data[$GSgame]['custom']['query_port'])."&nbsp;".ASElink($data[$GSgame]['custom'], "COD")."</td></tr>";
echo "<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['mapname'])."</td></tr>";
if (isset($data[$GSgame]['.Maps'])) {
$MAPS = str_replace("-", "<br>", GetArrVal($data[$GSgame]['.Maps']));
echo "<tr><td valign='top'>"._MAPLIST."</td><td>".$MAPS."</td></tr>";
}
if (isset($data[$GSgame]['.Campaign'])) {
echo "<tr><td>"._CAMPAIGN."</td><td>".GetArrVal($data[$GSgame]['.Campaign'])."</td></tr>";
}
echo "<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['shortversion'])."</td></tr>";
echo "<tr><td>"._PING."</td><td>".$ping."</td></tr>";
echo "<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['g_gametype'])."</td></tr>"
    ."<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['num_players'])."/".GetArrVal($data[$GSgame]['sv_maxclients'])."</td></tr>"
    ."<tr><td>"._PASSWORD."</td><td>";
    if(GetArrVal($data[$GSgame]['pswrd'])) {
		echo _PASSREQY;
    } else {
    	echo _PASSREQN;
    }
echo "</td></tr>";
if (isset($data[$GSgame]['timelimit'])) {
echo "<tr><td>"._TIMELIMIT."</td><td>".GetArrVal($data[$GSgame]['timelimit'])."</td></tr>";
}
if (isset($data[$GSgame]['sv_allowAnonymous'])) {
echo "<tr><td>"._ALLOWANON."</td><td>".YesNo($data[$GSgame]['sv_allowAnonymous'])."</td></tr>";
}
if (isset($data[$GSgame]['g_maxlives'])) {
echo "<tr><td>"._MAXLIVES."</td><td>";
    if(GetArrVal($data[$GSgame]['g_maxlives'])=='0') {
		echo _UNLIMITED;
    } else {
    	echo $data[$GSgame]['g_maxlives'];
    }
echo "</td></tr>";
}
if (isset($data[$GSgame]['scr_friendlyfire'])) {
echo "<tr><td>"._FF."</td><td>".Abled($data[$GSgame]['scr_friendlyfire'])."</td></tr>";
}
if (isset($data[$GSgame]['g_friendlyFire'])) {
echo "<tr><td>"._FF."</td><td>".Abled($data[$GSgame]['g_friendlyFire'])."</td></tr>";
}
if (isset($data[$GSgame]['sv_punkbuster'])) {
echo "<tr><td>"._PUNKBUSTER."</td><td>".Abled($data[$GSgame]['sv_punkbuster'])."</td></tr>";
}
if (isset($data[$GSgame]['g_balancedteams'])) {
echo "<tr><td>"._BALTEAMS."</td><td>".Abled($data[$GSgame]['g_balancedteams'])."</td></tr>";
}

if(GetArrVal($data[$GSgame]['.Admin'])){
echo "<tr><td>"._ADMINNAME."</td><td>";
    if ($ae = GetArrVal($data[$GSgame]['.Website'])){
		if (strstr($ae, '@')){
		echo "<a href=\"mailto:".$ae."\">".GetArrVal($data[$GSgame]['.Website'])."</a>";
		}
		if (strstr($ae, 'http://')) {
		echo "<a href=\"".$ae."\" target=\"_blank\">".GetArrVal($data[$GSgame]['.Website'])."</a>";
		}
    } else {
    echo GetArrVal($data[$GSgame]['.Admin']);
    }
echo "</td></tr>";
}
if (isset($data[$GSgame]['Location:'])){
  echo "<tr><td>"._LOCATION."</td><td><a href=\"".GetArrVal($data[$GSgame]['Location:'])."</td></tr>";
}
if (isset($data[$GSgame]['CPU'])) {
  echo "<tr><td>"._CPU."</td><td><a href=\"".GetArrVal($data[$GSgame]['CPU'])."</td></tr>";
}
echo "<tr><td align=\"center\" valign=\"top\" colspan=\"2\"><a href=\"http://www.callofduty.com/\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.png\"></a></td></tr></table>";

?>