<?php

echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='30%'>"._SERVERNAME."</td><td width='40%'>".GetArrVal($data[$GSgame]['hostname'])."</td><td width='40%' valign='top' rowspan='15'>"
    .MapPic($data[$GSgame]['custom']['id'], $data[$GSgame]['mapname'], 0, "")."</td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".$data[$GSgame]['custom']['address'].":".$data[$GSgame]['hostport']."</td></tr>"
	."<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['mapname'])."</td></tr>";
if (isset($data[$GSgame]['DED'])){
echo "<tr><td>"._DEDICATED."</td><td>".YesNo($data[$GSgame]['DED'])."</td></tr>";
}
if (isset($data[$GSgame]['gamever'])){
echo "<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['gamever'])."</td></tr>";
}
echo "<tr><td>"._PING."</td><td>".$ping."</td></tr>";
if (isset($data[$GSgame]['gametype'])){
echo "<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['gametype'])."</td></tr>";
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
if (isset($data[$GSgame]['fraglimit'])){
echo "<tr><td>"._FRAGLIMIT."</td><td>".GetArrVal($data[$GSgame]['fraglimit'])."</td></tr>";
}

echo "<tr><td align=\"center\" colspan=\"2\"><a href=\"http://www.eagames.com/official/cc/renegade/us/\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.jpg\"></a></td></tr></table>";

?>