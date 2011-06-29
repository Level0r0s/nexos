<?php

echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='30%'>"._SERVERNAME."</td><td width='40%'>".GetArrVal($data[$GSgame]['hostname'])."</td><td width='40%' valign='top' rowspan='15'>"
    ."<table><tr><td colspan=3>".MapPic($data[$GSgame]['custom']['id'], $data[$GSgame]['mapname'], 0, "")."</td></tr><tr><td>";

$vp = 1;
$p = 0;
do {
	if (GetArrVal($data[$GSgame]['players'][$p]['name'])) {
			$cols[0] = array(_PLAYERNAME, _SCORE, _PING);
				$cols[$p+1][0] = GetArrVal($data[$GSgame]['players'][$p]['name']);
				$cols[$p+1][1] = GetArrVal($data[$GSgame]['players'][$p]['score']);
				$cols[$p+1][2] = GetArrVal($data[$GSgame]['players'][$p]['ping']);
		$vp++;
	}
$p++;
} while ($p<=32);

if (isset($cols[1][1])) { echo PlayerList($cols); $vp--; } else { $vp=0; }

echo "</td></tr></table>";
echo "</td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".$data[$GSgame]['custom']['address'].":".$data[$GSgame]['custom']['query_port']."</td></tr>";

if (isset($data[$GSgame]['version'])){
echo "<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['version'])."</td></tr>";
}
echo "<tr><td>"._PING."</td><td>".$ping."</td></tr>";
echo "<tr><td>"._PLAYERS."</td><td>".$vp."/".GetArrVal($data[$GSgame]['max_players'])."</td></tr>";

echo "<tr><td align=\"center\" colspan=\"2\"><a href=\"http://www.mtavc.com/\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.jpg\"></a></td></tr></table>";

?>