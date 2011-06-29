<?php

echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='20%'>"._SERVERNAME."</td><td width='40%'>".GetArrVal($data[$GSgame]['hostname'])."</td>"
    ."<td width='40%' valign='top' rowspan='12'>"

    ."<table><tr><td colspan=3>".MapPic($data[$GSgame]['custom']['id'], $data[$GSgame]['mapname'], 0, "")."</td></tr><tr><td>";

		if (GetArrVal($data[$GSgame]['numplayers'])!=0){
		$cols[0] = array(_PLAYERNAME, _PING, _FRAGS, _TEAM);
			for ($p = 0; $p <= $data[$GSgame]['numplayers'] ; $p++){
				if (GetArrVal($data[$GSgame]['players'][$p]['player']!='')) {
				$cols[$p+1][0] = GetArrVal($data[$GSgame]['players'][$p]['player']);
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['players'][$p]['ping']);
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['players'][$p]['score']);
				$cols[$p+1][3] = GetArrVal($data[$GSgame]['players'][$p]['team']);
				}
			}
		echo PlayerList($cols);
		}
echo "</td></tr></table></td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td><a href=\"tribesv://".$data[$GSgame]['custom']['address'].":".GetArrVal($data[$GSgame]['hostport'])."\">".$data[$GSgame]['custom']['address'].":".GetArrVal($data[$GSgame]['hostport'])."</a></td></tr>"
    ."<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['gamever'])."</td></tr>"
	."<tr><td>"._DEDICATED."</td><td>".YesNo($data[$GSgame]['dedicated'])."</td></tr>"
	."<tr><td>"._PING."</td><td>".$ping."</td></tr>"
    ."<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['mapname'])."</td></tr>"
	."<tr><td>"._GAMEMODE."</td><td>".GetArrVal($data[$GSgame]['gamemode'])."</td></tr>"
	."<tr><td>"._GAMETYPE."</td><td>";
    $gametype = substr (GetArrVal($data[$GSgame]['gametype']), 0, 3);
    switch ($gametype) {
    	case "CTF":
    	echo _CTF;
    	break;

    	case "Arena":
    	echo _ARENA;
    	break;

    	case "Rabbit":
    	echo _RABBIT;
    	break;

    	case "Ball":
    	echo _BALL;
    	break;

    	case "Fuel":
    	echo _FUEL;
    	break;

    	default:
    	echo _UNKNOWN."(".GetArrVal($data[$GSgame]['gametype']).")";
    	break;

    }
echo "</td></tr>";
echo "<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['numplayers'])."/".GetArrVal($data[$GSgame]['maxplayers'])."</td></tr>"
    ."<tr><td>"._PASSWORD."</td><td>";
    if(GetArrVal($data[$GSgame]['password'])=='0') {
		echo _PASSREQN;
    } else {
    	echo _PASSREQY;
    }

echo "</td></tr>"
    ."<tr><td>"._STATS."</td><td>".GetArrVal($data[$GSgame]['trackingstats'])."</td></tr>";
if (GetArrVal($data[$GSgame]['adminname'])) {
echo "<tr><td>"._ADMINNAME."</td><td>";
    if ($ae = GetArrVal($data[$GSgame]['adminemail'])){
		if (strstr($ae, '@')){
		echo "<a href=\"mailto:".$ae."\">".GetArrVal($data[$GSgame]['adminname'])."</a>";
		}
		if (strstr($ae, 'http://')) {
		echo "<a href=\"".$ae."\" target=\"_blank\">".GetArrVal($data[$GSgame]['adminname'])."</a>";
		}
    } else {
    echo GetArrVal($data[$GSgame]['adminname']);
    }
}
echo "</td></tr>";
if (GetArrVal($data[$GSgame]['teamone'])) {
echo "<tr><td>".Team." - ".GetArrVal($data[$GSgame]['teamone'])."</td><td>".GetArrVal($data[$GSgame]['teamonescore'])."</td></tr>";
}
if (GetArrVal($data[$GSgame]['teamtwo'])) {
echo "<tr><td>".Team." - ".GetArrVal($data[$GSgame]['teamtwo'])."</td><td>".GetArrVal($data[$GSgame]['teamtwoscore'])."</td></tr>";
}

echo "<tr><td align=\"left\" colspan=\"2\"><a href=\"http://www.tribalwar.com\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.jpg\"></a></td></tr>";
echo "</table>";

?>