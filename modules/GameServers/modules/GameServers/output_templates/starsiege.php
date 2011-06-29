<?php
echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='20%' valign='top'>"._SERVERNAME."</td><td width='40%' valign='top'>".GetArrVal($data[$GSgame]['hostname'])."</td><td width='40%' valign='top' rowspan='12'>"
    ."<table><tr><td colspan=3>".MapPic($data[$GSgame]['custom']['id'], GetArrVal($data[$GSgame]['map']), 0, "")."</td></tr><tr><td>";
		if (GetArrVal($data[$GSgame]['num_players'])!=0){
			$cols[0] = array(_PLAYERNAME, _TEAM);

			for ($p = 0; $p <= GetArrVal($data[$GSgame]['num_players'])-1 ; $p++){
				$cols[$p+1][0] = GetArrVal($data[$GSgame]['players'][$p]['name']);
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['players'][$p]['team']);
			}
		echo PlayerList($cols);
		}
echo "</td></tr></table></td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".GetArrVal($data[$GSgame]['custom']['address']).":".GetArrVal($data[$GSgame]['custom']['query_port'])."</td></tr>"
	."<tr><td>"._PING."</td><td>".$ping."</td></tr>"
    ."<tr><td>"._SERVERTYPE."</td><td>";
    if(GetArrVal($data[$GSgame]['dedicated'])=='1') {
		echo _DEDICATED;
    } else {
    	echo _NDEDICATED;
    }
    echo " ";
    if(GetArrVal($data[$GSgame]['server_os'])=='L') {
		echo _LINUX;
    } else {
    	echo _WINDOWS;
    }
echo "</td></tr>";
echo "<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['map'])."</td></tr>"
    ."<tr><td>"._GAMETYPE."</td><td>";
	    if(GetArrVal($data[$GSgame]['game_type'])=='1') {
			echo _TDM;
	    } else {
	    	echo _DM;

    }
echo "<tr><td>"._PASSWORD."</td><td>";
    if(GetArrVal($data[$GSgame]['password'])=='1') {
		echo _PASSREQY;
    } else {
    	echo _PASSREQN;
    }
echo "</td></tr>";

echo "<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['num_players'])."/".GetArrVal($data[$GSgame]['max_players'])."</td></tr>"

 ."<tr><td>"._DIP."</td><td>";
	    if(GetArrVal($data[$GSgame]['drop_in_prog'])=='1') {
			echo _YES;
	    } else {
	    	echo _NO;

    }
echo "<tr><td>"._GIP."</td><td>";
    if(GetArrVal($data[$GSgame]['game_in_prog'])=='1') {
		echo _YES;
    } else {
    	echo _NO;
    }
echo "<tr><td>"._ATM."</td><td>";
    if(GetArrVal($data[$GSgame]['allow_tecmix'])=='1') {
		echo _YES;
    } else {
    	echo _NO;
    }
echo "<tr><td>"._FVEH."</td><td>";
    if(GetArrVal($data[$GSgame]['factory_veh'])=='1') {
		echo _YES;
    } else {
    	echo _NO;
    }
echo "</td></tr>";

echo "<tr><td>"._CL."</td><td>".GetArrVal($data[$GSgame]['combat_limit'])."</td></tr>"
	."<tr><td>"._TL."</td><td>".GetArrVal($data[$GSgame]['tech_limit'])."</td></tr>"
	."<tr><td>"._ML."</td><td>".GetArrVal($data[$GSgame]['mass_limit'])."</td></tr>"
	."<tr><td>"._SL."</td><td>".GetArrVal($data[$GSgame]['spawn_limit'])."</td></tr>"
	."<tr><td>"._FRAGLIMIT."</td><td>".GetArrVal($data[$GSgame]['frag_limit'])."</td></tr>"
	."<tr><td>"._TIMELIMIT."</td><td>".GetArrVal($data[$GSgame]['time_limit'])."</td></tr>";

echo "</td></tr>";
//echo "<tr><td height=\"50\" colspan=\"2\" align=\"center\"  valign=\"top\">";
echo "<tr><td align=\"left\" colspan=\"2\"><a href=\"http://www.starsiegeplayers.com/\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.gif\"></a></td></tr>";
echo "<tr><td align=\"left\" colspan=\"2\">Protocol by:<a href=\"http://www.redarmageddon.net/\" target=\"_blank\">[RA]Butterbean</a></td></tr></table>";


?>