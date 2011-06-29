<?php

echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>"
    ."<tr><td width='20%' valign='top'>"._SERVERNAME."</td><td width='40%' valign='top'>".GetArrVal($data[$GSgame]['hostname'])."</td><td width='40%' valign='top' rowspan='12'>"
    ."<table><tr><td colspan=3>".MapPic($data[$GSgame]['custom']['id'], GetArrVal($data[$GSgame]['mapname']), 0, "")."</td></tr><tr><td>"
	._HOSTEDBY." ".GetArrVal($data[$GSgame]['hostnick'])
	."</td></tr></table></td></tr>"
    ."<tr><td>"._HOSTADDRESS."</td><td>".GetArrVal($data[$GSgame]['custom']['address']).":".GetArrVal($data[$GSgame]['hostport'])."</td></tr>"
	."<tr><td>"._PING."</td><td>".$ping."</td></tr>"
    ."<tr><td>"._SVERSION."</td><td>".GetArrVal($data[$GSgame]['gamever'])."</td></tr>"
	."<tr><td>"._MAPNAME."</td><td>".GetArrVal($data[$GSgame]['mapname'])."</td></tr>"
	."<tr><td>"._GAMETYPE."</td><td>".GetArrVal($data[$GSgame]['gametype'])."</td></tr>"
	."<tr><td>"._TEAMSTYLE."</td><td>".GetArrVal($data[$GSgame]['team_style'])."</td></tr>"
	."<tr><td>"._MAPSTYLE."</td><td>".GetArrVal($data[$GSgame]['map_style'])."</td></tr>"
	."<tr><td>"._MAPSIZE."</td><td>".GetArrVal($data[$GSgame]['map_size'])."</td></tr>"
	."<tr><td>"._CANNONTIME."</td><td>".GetArrVal($data[$GSgame]['cannon_times'])."</td></tr>"
	."<tr><td>"._TOURNAMENT."</td><td>".GetArrVal($data[$GSgame]['tournament_play'])."</td></tr>"
	."<tr><td>"._BALTEAMS."</td><td>".GetArrVal($data[$GSgame]['require_random_teams'])."</td></tr>"
	."<tr><td>"._GAMESPEED."</td><td>".GetArrVal($data[$GSgame]['game_speed'])."</td></tr>"
	."<tr><td>"._MAPSIZE."</td><td>".GetArrVal($data[$GSgame]['hostnick'])."</td></tr>"
    ."<tr><td>"._PLAYERS."</td><td>".GetArrVal($data[$GSgame]['numplayers'])."/".GetArrVal($data[$GSgame]['maxplayers'])."</td></tr>"
    ."<tr><td colspan='2' align='center'><a href=\"http://www.microsoft.com/games/riseofnations/\" target=\"_blank\"><img border='0' src='modules/".$module_name."/output_templates/".GetArrVal($data[$GSgame]['custom']['id'])."/logo.jpg' alt='".GetArrVal($data[$GSgame]['custom']['id'])."'></a></td></tr></table>";

?>