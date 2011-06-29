<?php
//alist type -just serverlinks and stats - no icons

global $module_name;
	//Table sorting code written by Erik Arvidsson
	//http://webfx.eae.net/dhtml/tablesort/tablesort.html
	echo "<script type=\"text/javascript\" src=\"modules/".$module_name."/tablesort.js\"></script>";
	echo "<link rel=\"STYLESHEET\" type=\"text/css\" href=\"modules/".$module_name."/tablesort.css\">";

function GSheader() {
global $bgcolor2;

	echo "<table border='0' onclick=\"sortColumn(event)\">";
	echo "<thead bgcolor=\"".$bgcolor2."\"><tr><td width='60%' type=\"CaseInsensitiveString\">"._SERVERNAME."</td>";
	echo "<td width='10%' type=\"String\">"._PLAYERS."</td>";
	echo "<td width='10%' type=\"Number\">"._PING."</td>";
	echo "<td width='20%' type=\"CaseInsensitiveString\">"._MAPNAME."</td></tr></thead><tbody>";

}

function GSserveritem($icon, $serverlink, $servername, $players, $ping, $map, $mappic, $GSid) {
	echo "<tr><td align='bottom'>".$serverlink[$GSid].$servername[$GSid]."</a></td>";
	echo "<td align='bottom'>".$players[$GSid]."</td>";
	echo "<td>".$ping[$GSid]."</td>";
	echo "<td align='bottom'>".$map[$GSid]."</td></tr>";

}

function GSfooter() {
	echo "</tbody></table>";
}
?>