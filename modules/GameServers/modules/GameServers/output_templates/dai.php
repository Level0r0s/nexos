<?php

echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='30%'>"._HOSTADDRESS."</td><td width='40%'>".$data[$GSgame]['custom']['address'].":".$data[$GSgame]['custom']['query_port']."</td><td width='40%' valign='top' rowspan='15'>"
    .MapPic($data[$GSgame]['custom']['id'], $data[$GSgame]['mapname'], 0, "")."</td></tr>"
    ."<tr><td>"._PING."</td><td>".$ping."</td></tr>"
	."<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['mapname'])."</td></tr>";
if (isset($data[$GSgame]['DED'])){
echo "<tr><td>"._FF."</td><td>".Abled($data[$GSgame]['dm_friendly_fire'])."</td></tr>";
}
if (isset($data[$GSgame]['dm_teamplay'])){
echo "<tr><td>"._TEAMPLAY."</td><td>".Abled($data[$GSgame]['dm_teamplay'])."</td></tr>";
}
if (isset($data[$GSgame]['dm_instagib'])){
echo "<tr><td>"._INSTAGIB."</td><td>".Abled($data[$GSgame]['dm_instagib'])."</td></tr>";
}
echo "<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['num_players'])."/?</td></tr>";
if (isset($data[$GSgame]['dm_infinite_ammo'])){
echo "<tr><td>"._INFAMMO."</td><td>".Abled($data[$GSgame]['dm_infinite_ammo'])."</td></tr>";
}
if (isset($data[$GSgame]['dm_allow_powerups'])){
echo "<tr><td>"._POWERUPS."</td><td>".Abled($data[$GSgame]['dm_allow_powerups'])."</td></tr>";
}
if (isset($data[$GSgame]['dm_allow_health'])){
echo "<tr><td>"._HEALTH."</td><td>".Abled($data[$GSgame]['dm_allow_health'])."</td></tr>";
}

echo "<tr><td align=\"center\" colspan=\"2\"><a href=\"http://www.planetdaikatana.com/\" target=\"_blank\"><img border=\"0\" src=\"modules/".$module_name."/output_templates/".$data[$GSgame]['custom']['id']."/logo.jpg\"></a></td></tr></table>";

?>