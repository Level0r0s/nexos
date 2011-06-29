<?php
function GSheader() {
	echo "<table border='0' align='center'>";

}

function GSserveritem($icon, $serverlink, $servername, $players, $ping, $map, $mappic, $GSid) {
global $colcount;
	if (!$colcount or $colcount==2) {
	echo "<tr>";
	$colcount=0;
	}

	echo "<td align=\"left\">".$icon[$GSid]."<br><b>"._SERVERNAME."</b>: ".$serverlink[$GSid].$servername[$GSid]."</a><br>";
	echo "<b>"._PLAYERS."</b>: ".$players[$GSid]."<br>";
	if ($ping!=0) {
	echo "<b>"._PING."</b>: ".$ping[$GSid]."<br>";
	}
	echo $serverlink[$GSid]._MOREINFO."</a>";
	$colcount++;

	if ($colcount==2) {
	echo "</tr><tr><td colspan=2><hr></td></tr>";
	}
}

function GSfooter() {
global $colcount;
	if ($colcount==1) {
	echo "<td>&nbsp</td></tr>";
	}

	echo "</table>";
}
?>