<?php
echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='20%' valign='top'>"._SERVERNAME."</td><td width='40%' valign='top'>".GetArrVal($data[$GSgame]['hostname'])."</td><td width='40%' valign='top' rowspan='12'>"
    ."<table><tr><td colspan=3>".MapPic($data[$GSgame]['custom']['id'], GetArrVal($data[$GSgame]['map']), 0, "")."</td></tr><tr><td>";
		if (GetArrVal($data[$GSgame]['num_players'])!=0){
			$cols[0] = array(_PLAYERNAME, _SCORE, _TIME);

			for ($p = 0; $p <= GetArrVal($data[$GSgame]['num_players'])-1 ; $p++){
				$cols[$p+1][0] = GetArrVal($data[$GSgame]['players'][$p]['name']);
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['players'][$p]['score']);
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['players'][$p]['time']);
			}
		echo PlayerList($cols);
		}
echo "</td></tr></table></td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".GetArrVal($data[$GSgame]['custom']['address']).":".GetArrVal($data[$GSgame]['custom']['query_port'])."&nbsp;".ASElink($data[$GSgame]['custom'], "HL")."</td></tr>"
	."<tr><td>"._PING."</td><td>".$ping."</td></tr>"
    ."<tr><td>"._SERVERTYPE."</td><td>";
    if(GetArrVal($data[$GSgame]['dedicated'])=='d') {
		echo _DEDICATED;
    } else {
    	echo _NDEDICATED;
    }
    echo " ";
    if(GetArrVal($data[$GSgame]['server_os'])=='w') {
		echo _WINDOWS;
    } else {
    	echo _LINUX;
    }
echo "</td></tr>";
echo "<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['map'])."</td></tr>"
    ."<tr><td>"._MOD."</td><td>".YesNo($data[$GSgame]['mod'])."</td></tr>";
    if (GetArrVal($data[$GSgame]['game_dir']) AND GetArrVal($data[$GSgame]['mod'])) {
		echo "<tr><td>"._GAMEDIR."</td><td>/".GetArrVal($data[$GSgame]['game_dir'])."</td></tr>";
	}
echo "<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['game_type'])."</td></tr>"
    ."<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['num_players'])."/".GetArrVal($data[$GSgame]['max_players'])."</td></tr>"
    ."<tr><td>"._PASSWORD."</td><td>";
    if(GetArrVal($data[$GSgame]['needpass'])) {
		echo _PASSREQY;
    } else {
    	echo _PASSREQN;
    }
echo "</td></tr>";
  	if(GetArrVal($data[$GSgame]['http_info'])) {
		echo "<tr><td>"._INFO."</td><td>".GetArrVal($data[$GSgame]['http_info'])."</td></tr>";
    }
    if($data[$GSgame]['http_download']) {
		echo "<tr><td>"._MODDL."</td><td>".GetArrVal($data[$GSgame]['http_download'])."</td></tr>";
    }
echo "<tr><td height=\"200\" colspan=\"2\" align=\"center\"  valign=\"top\">";
$MODNAME = strtolower(GetArrVal($data[$GSgame]['game_dir']));

if (substr(GetArrVal($data[$GSgame]['http_info']), 0, 7)=='http://') {
$URL = GetArrVal($data[$GSgame]['http_info']);
} elseif (substr(GetArrVal($data[$GSgame]['http_info']), 0, 4)=='www.') {
$URL = "http://".GetArrVal($data[$GSgame]['http_info']);
}
if (file_exists('modules/'.$module_name.'/output_templates/'.GetArrVal($data[$GSgame]['custom']['id']).'/'.$MODNAME.'.png')) {
	echo "<a href=\"".$URL."\" target=\"_blank\"><img border='0' src='modules/".$module_name."/output_templates/".GetArrVal($data[$GSgame]['custom']['id'])."/".$MODNAME.".png' alt='".GetArrVal($data[$GSgame]['game_dir'])."'></a></td></tr></table>";

} else {
	echo "<img width='200' height='150' border='0' src='modules/".$module_name."/output_templates/nopic.png' alt='".$MODNAME."'></td></tr></table>";
}
?>