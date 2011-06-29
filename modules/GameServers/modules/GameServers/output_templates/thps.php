<?php
if (GetArrVal($data[$GSgame]['gamename'])=='thps3pc') {
	$thpsnum=3;
	$url="http://www.neversoft.com/th3/index.htm";
} else {
	$thpsnum=4;
	$url="http://www.neversoft.com/th4/thps4mainpage.htm";
}
echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='20%' valign='top'>"._SERVERNAME."</td><td width='40%' valign='top'>".GetArrVal($data[$GSgame]['hostname'])."</td><td width='40%' valign='top' rowspan='12'>"
    ."<table><tr><td colspan=3>".MapPic($data[$GSgame]['custom']['id'], GetArrVal($data[$GSgame]['mapname']), 0, "")."</td></tr><tr><td>";
		if (GetArrVal($data[$GSgame]['numplayers'])!=0 AND $thpsnum==3){
			$cols[0] = array(_PLAYERNAME);
			for ($p = 0; $p <= GetArrVal($data[$GSgame]['numplayers'])-1 ; $p++){
				$cols[$p+1][0] = GetArrVal($data[$GSgame]['players'][$p]['player']);
			}
		echo PlayerList($cols);
		} else {
		echo _HOSTEDBY." ".GetArrVal($data[$GSgame]['players'][0]['player']);
		}
echo "</td></tr></table></td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".GetArrVal($data[$GSgame]['custom']['address']).":".GetArrVal($data[$GSgame]['hostport'])."</td></tr>"
    ."<tr><td>"._PING."</td><td>".$ping."</td></tr>"
    ."<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['gamever'])."</td></tr>"
	."<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['mapname'])."</td></tr>"
	."<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['gametype'])."</td></tr>"
    ."<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['numplayers'])."/".GetArrVal($data[$GSgame]['maxplayers'])."</td></tr>"
    ."<tr><td>"._TIMELIMIT."</td><td>".GetArrVal($data[$GSgame]['timelimit'])."</td></tr>"
    ."<tr><td colspan='2' align='center'><a href=\"".$url."\" target=\"_blank\"><img border='0' src='modules/".$module_name."/output_templates/".GetArrVal($data[$GSgame]['custom']['id'])."/logo".$thpsnum.".png' alt='".GetArrVal($data[$GSgame]['custom']['id'])."'></a></td></tr></table>";

?>