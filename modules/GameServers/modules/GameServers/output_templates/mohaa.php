<?php

echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='30%'>"._GAMENAME."</td><td width='70%'>".GetArrVal($data[$GSgame]['custom']['name'])."</td><td rowspan='18' valign='top' width='230'>"
    ."<table border=0><tr><td colspan=4>".MapPic($data[$GSgame]['custom']['id'], GetArrVal($data[$GSgame]['mapname']), 0, "")."</td></tr><tr><td>";
		$vp = 1;
		$p = 0;
		do {
			if (isset($data[$GSgame]['players'][$p]['player'])) {
			$cols[0] = array(_PLAYERNAME, _PING, _FRAGS, _DEATHS);
			if (array_search_r(Q3colors($data[$GSgame]['players'][$p]['player'], $GSTags), $cols)==false) {
				$cols[$p+1][0] = Q3colors($data[$GSgame]['players'][$p]['player'], $GSTags);
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['players'][$p]['ping']);
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['players'][$p]['frags']);
				$cols[$p+1][3] = GetArrVal($data[$GSgame]['players'][$p]['deaths']);
				$vp++;
			}
			}
		$p++;
		} while ($p<=64);

if (isset($cols[1][1])) { echo PlayerList($cols); $vp--; } else { $vp=0; }


echo "</td></tr></table></td></tr>"
    ."<tr><td>"._SERVERNAME."</td><td>".GetArrVal($data[$GSgame]['hostname'])."</td></tr>"
    ."<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['gamever'])."</td></tr>"
    ."<tr><td>"._PING."</td><td>".$ping."</td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".$data[$GSgame]['custom']['address'].":".GetArrVal($data[$GSgame]['hostport'])."</td></tr>"
    ."<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['mapname'])."</td></tr>"
    ."<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['gametype'])."</td></tr>";
echo "<tr><td>"._PLAYERS."</td><td>".$vp."/".GetArrVal($data[$GSgame]['maxplayers'])."</td></tr>"
    ."<tr><td>"._TIMELIMIT."</td><td>";
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
echo "</td></tr><tr><td align=\"center\" colspan=\"2\"><a href=\"http://mohaa.ea.com/\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.png\"></a></td></tr></table>";

?>
