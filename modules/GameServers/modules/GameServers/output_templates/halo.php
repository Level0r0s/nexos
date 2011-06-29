<?php

echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td>"._SERVERNAME."</td><td>".GetArrVal($data[$GSgame]['hostname'])."</td>"
    ."<td rowspan='18' valign='top' width='230'><table border=0 cellpadding=0 cellspacing=7><tr><td colspan=9>".MapPic($data[$GSgame]['custom']['id'], GetArrVal($data[$GSgame]['mapname']), 0, "")."</td></tr><tr><td>";
		if (GetArrVal($data[$GSgame]['ping_1'])!='') {
			$cols[0] = array(_PLAYERNAME, _TEAM, _SCORE, _PING);
		} else {
			$cols[0] = array(_PLAYERNAME, _TEAM, _SCORE);
		}

		if (GetArrVal($data[$GSgame]['numplayers'])!=0){
			for ($p = 0; $p <= $data[$GSgame]['numplayers'] ; $p++){
				if (GetArrVal($data[$GSgame]['players'][$p]['player']!='')) {
				$cols[$p+1][0] = GetArrVal($data[$GSgame]['players'][$p]['player']);

				if (isset($data[$GSgame]['team_t'.GetArrVal($data[$GSgame]['players'][$p]['team'])])) {
					$cols[$p+1][1] = GetArrVal($data[$GSgame]['team_t'.GetArrVal($data[$GSgame]['players'][$p]['team'])]);
				} else {
					$cols[$p+1][1] = GetArrVal($data[$GSgame]['players'][$p]['team']);
				}
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['players'][$p]['score']);
				if (GetArrVal($data[$GSgame]['players'][1]['ping'])!='') {
						$cols[$p+1][3] = GetArrVal($data[$GSgame]['players'][$p]['ping']);
				}
				}
			}

		echo PlayerList($cols);
		}

echo "</td></tr></table></td></tr>"
    ."<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['gamever'])."</td></tr>"
	."<tr><td>"._PING."</td><td>".$ping."</td></tr>"
    ."<tr><td>"._SERVERTYPE."</td><td>";
    if(GetArrVal($data[$GSgame]['dedicated'])=='1') {
		echo _DEDICATED;
    } else {
    	echo _NDEDICATED;
    }
echo "</td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".GetArrVal($data[$GSgame]['custom']['address']).":".GetArrVal($data[$GSgame]['custom']['query_port'])."</td></tr>"
    ."<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['mapname'])."</td></tr>"
    ."<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['gametype']);
    if ($t0=GetArrVal($data[$GSgame]['team_t0']) AND $t1=GetArrVal($data[$GSgame]['team_t1']) AND GetArrVal($data[$GSgame]['teamplay'])=="1") {
    	if (!$s0=GetArrVal($data[$GSgame]['score_t0'])) { $s0="0"; }
    	if (!$s1=GetArrVal($data[$GSgame]['score_t1'])) { $s1="0"; }
    	echo " - ".$t0."(".$s0.")"._VS.$t1."(".$s1.")";
    }
echo "</td></tr>"
	."<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['numplayers'])."/".GetArrVal($data[$GSgame]['maxplayers'])."</td></tr>"
    ."<tr><td>"._PASSWORD."</td><td>";
    if(GetArrVal($data[$GSgame]['password'])=='0') {
		echo _PASSREQN;
    } else {
    	echo _PASSREQY;
    }
	echo "</td></tr>";
	if (isset($data[$GSgame]['fraglimit'])){
		echo "<tr><td>"._FRAGLIMIT."</td><td>".GetArrVal($data[$GSgame]['fraglimit'])."</td></tr>";
	}
echo "<tr><td>"._TEAMPLAY."</td><td>".Abled($data[$GSgame]['teamplay'])."</td></tr>"
    ."<tr><td colspan=\"2\"><a href=\"http://www.microsoft.com/games/halo/default.asp\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.png\"></a></td></tr></table>";
?>