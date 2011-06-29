<?php

echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td>"._SERVERNAME."</td><td>".$data[$GSgame]['hostname']."</td>"
    ."<td rowspan='18' valign='top' width='230'><table border=0 cellpadding=0 cellspacing=7><tr><td colspan=9>";
switch ($data[$GSgame]['mapname']) {
    case "SF Pipeline":
    $map="map_sfpipeline";
    break;

    case "SF Recon":
    $map="map_sfrecon";
    break;

    case "SF Hospital":
    $map="map_sfhospital";
    break;

    case "Mountain Ambush":
    $map="map_ambush";
    break;

    case "Swamp Raid":
    $map="map_swamp";
    break;

    case "Weapons Cache":
    $map="map_cache";
    break;

    case "Weapons Cache SE":
    $map="map_cachese";
    break;

    case "Radio Tower":
    $map="map_radio";
    break;

	case "FLS Assault":
	$map="map_fls";
	break;

	case "FARP Raid":
	$map="map_farp";
	break;

	case "HQ Raid":
	$map="map_hqraid";
	break;

	case "Collapsed Tunnel":
	$map="map_tunnel";
	break;

    case "Insurgent Camp":
    $map="map_camp";
    break;

    case "River Basin":
    $map="map_basin";
    break;

    case "Pipeline":
    $map="map_pipeline";
    break;

    case "Bridge Crossing":
    $map="map_bridge";
    break;

    case "Bridge Crossing SE":
    $map="map_bridgese";
    break;

    case "Mountain Pass":
    $map="map_mountain";
    break;

    case "Mountain Pass SE":
    $map="map_mountainse";
    break;

    case "McKenna MOUT":
    $map="map_mckenna";
    break;

    default:
    $map="missions";

}
echo MapPic($data[$GSgame]['custom']['id'], $data[$GSgame]['mapname'], "http://www.americasarmy.com/intel/".$map.".php", "");
echo "</td></tr><tr><td>";

		if (GetArrVal($data[$GSgame]['numplayers'])!=0){
					$cols[0][0] = _PLAYERNAME;
					if (isset($data[$GSgame]['players'][0]['enemy'])) {
					$cols[0][1] = _ENEMY;
					}
					if (isset($data[$GSgame]['players'][0]['kia'])) {
					$cols[0][2] = _KIA;
					}
					if (isset($data[$GSgame]['players'][0]['roe'])) {
					$cols[0][3] = _ROE;
					}
					if (isset($data[$GSgame]['players'][0]['honor'])) {
					$cols[0][4] = _HONOR;
					}
					if (isset($data[$GSgame]['players'][0]['goal'])) {
					$cols[0][5] = _GOAL;
					}
					if (isset($data[$GSgame]['players'][0]['leader'])) {
					$cols[0][6] = _LEADER;
					}
					if (isset($data[$GSgame]['players'][0]['team'])) {
					$cols[0][7] = _TEAM;
					}
					$cols[0][8] = _PING;

			for ($p = 0; $p <= GetArrVal($data[$GSgame]['numplayers'])-1 ; $p++){
				$cols[$p+1][0] = GetArrVal($data[$GSgame]['players'][$p]['player']);
				if ($cols[0][1]) {
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['players'][$p]['enemy']);
				}
				if ($cols[0][2]) {
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['players'][$p]['kia']);
				}
				if ($cols[0][3]) {
				$cols[$p+1][3] = GetArrVal($data[$GSgame]['players'][$p]['roe']);
				}
				if ($cols[0][4]) {
				$cols[$p+1][4] = GetArrVal($data[$GSgame]['players'][$p]['honor']);
				}
				if ($cols[0][5]) {
				$cols[$p+1][5] = GetArrVal($data[$GSgame]['players'][$p]['goal']);
				}
				if ($cols[0][6]) {
				$cols[$p+1][6] = GetArrVal($data[$GSgame]['players'][$p]['leader']);
				}
				if ($cols[0][7]) {
				$cols[$p+1][7] = GetArrVal($data[$GSgame]['players'][$p]['team']);
				}
				$cols[$p+1][8] = GetArrVal($data[$GSgame]['players'][$p]['ping']);
			}
		echo PlayerList($cols);
		}

echo "</td></tr>";
echo "</table>";
echo "</td></tr>"
    ."<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['gamever'])."</td></tr>"
    ."<tr><td>"._PING."</td><td>".$ping."</td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".$data[$GSgame]['custom']['address'].":".GetArrVal($data[$GSgame]['hostport'])."</td></tr>"
    ."<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['mapname'])."</td></tr>"
    ."<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['gametype'])."</td></tr>"
	."<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['numplayers'])."/".GetArrVal($data[$GSgame]['maxplayers'])."</td></tr>"
    ."<tr><td>"._PASSWORD."</td><td>";
    if(GetArrVal($data[$GSgame]['password'])=='0') {
		echo _PASSREQN;
    } else {
    	echo _PASSREQY;
    }
	echo "</td></tr>";
	if (isset($data[$GSgame]['sv_punkbuster'])) {
	echo "<tr><td>"._PUNKBUSTER."</td><td>".Abled($data[$GSgame]['sv_punkbuster'])."</td></tr>";
	}
	if (isset($data[$GSgame]['AdminEMail']) AND $data[$GSgame]['AdminEMail']!=''){
		echo "<tr><td valign='top'>"._ADMININFO."</td><td valign='top'><a href=\"mailto:".GetArrVal($data[$GSgame]['AdminEMail'])."\">";
		if (isset($data[$GSgame]['AdminName']) AND $data[$GSgame]['AdminName']!=''){
		echo GetArrVal($data[$GSgame]['AdminName']);
		} else {
		echo GetArrVal($data[$GSgame]['AdminEMail']);
		}
	echo "</a></td></tr>";
	}
echo "<tr><td>"._NUMTEAMS."</td><td>".GetArrVal($data[$GSgame]['numteams'])."</td></tr>"
    ."<tr><td>"._OFFICIAL."</td><td>".YesNo($data[$GSgame]['official'])."</td></tr>"
    ."<tr><td>"._MISSIONTIME."</td><td>".GetArrVal($data[$GSgame]['mission_time'])."</td></tr>"
    ."<tr><td>"._CURRENTROUND."</td><td>".GetArrVal($data[$GSgame]['current_round'])."</td></tr>";
if (isset($data[$GSgame]['score_t0']) AND isset($data[$GSgame]['score_t1'])) {
echo "<tr><td>"._SCORE."</td><td>".GetArrVal($data[$GSgame]['score_t0'])."/".GetArrVal($data[$GSgame]['score_t1'])."</td></tr>";
}
echo "<tr><td colspan=\"2\"><a href=\"http://www.americasarmy.com\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.png\"></a></td></tr></table>";

?>