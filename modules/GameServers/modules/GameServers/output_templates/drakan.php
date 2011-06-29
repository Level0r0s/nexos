<?php

echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='30%'>"._SERVERNAME."</td><td width='40%'>".GetArrVal($data[$GSgame]['hostname'])."</td><td width='40%' valign='top' rowspan='15'>"
    ."<table><tr><td colspan=3>".MapPic($data[$GSgame]['custom']['id'], $data[$GSgame]['mapname'], 0, "")."</td></tr><tr><td>";
		//player list support is untested -i dont know if this game actually returns player data or if it returns it in this format
		if (GetArrVal($data[$GSgame]['num_players'])!=0){
			$cols[0] = array(_PLAYERNAME, _SCORE, _PING);

			for ($p = 0; $p <= GetArrVal($data[$GSgame]['num_players'])-1 ; $p++){
				$cols[$p+1][0] = GetArrVal($data[$GSgame]['players'][$p]['name']);
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['players'][$p]['score']);
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['players'][$p]['ping']);
			}
		echo PlayerList($cols);
		}
echo "</td></tr></table>";
echo "</td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".$data[$GSgame]['custom']['address'].":".$data[$GSgame]['custom']['query_port']."</td></tr>"
	."<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['mapname'])."</td></tr>";
if (isset($data[$GSgame]['gameversion'])){
echo "<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['gamever'])."</td></tr>";
}
echo "<tr><td>"._PING."</td><td>".$ping."</td></tr>";
if (isset($data[$GSgame]['game'])){
echo "<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['game'])."</td></tr>";
}
if (isset($data[$GSgame]['Num Teams'])){
echo "<tr><td>"._NUMTEAMS."</td><td>".GetArrVal($data[$GSgame]['Num Teams'])."</td></tr>";
}
if (isset($data[$GSgame]['Dedicated Server?'])){
echo "<tr><td>"._DEDICATED."</td><td>".YesNo($data[$GSgame]['Dedicated Server?'])."</td></tr>";
}
echo "<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['numplayers'])."/".GetArrVal($data[$GSgame]['maxplayers'])."</td></tr>";
if (isset($data[$GSgame]['password'])){
echo "<tr><td>"._PASSWORD."</td><td>";
    if(GetArrVal($data[$GSgame]['password'])) {
		echo _PASSREQY;
    } else {
    	echo _PASSREQN;
    }
}

if (isset($data[$GSgame]['Time Limit'])){
echo "<tr><td>"._TIMELIMIT."</td><td>".GetArrVal($data[$GSgame]['Time Limit'])."</td></tr>";
}
if (isset($data[$GSgame]['Kills Limit'])){
echo "<tr><td>"._FRAGLIMIT."</td><td>".GetArrVal($data[$GSgame]['Kills Limit'])."</td></tr>";
}
if (isset($data[$GSgame]['Friendly Fire?'])){
echo "<tr><td>"._FF."</td><td>".GetArrVal($data[$GSgame]['Friendly Fire?'])."</td></tr>";
}

echo "<tr><td align=\"center\" colspan=\"2\"><a href=\"http://www.surreal.com/games/index.php?gameID=4/\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.jpg\"></a></td></tr></table>";

?>