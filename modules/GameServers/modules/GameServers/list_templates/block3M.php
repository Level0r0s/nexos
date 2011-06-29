<?php
function GSheader() {
	echo "<table border='0' align='center'>";

}

function GSserveritem($icon, $serverlink, $servername, $players, $ping, $map, $mappic, $GSid) {
global $colcount;
	if (!$colcount or $colcount==3) {
	echo "<tr>";
	$colcount=0;
	}

	echo "<td align=\"left\"><table><tr><td colspan=2>".$serverlink[$GSid].$mappic[$GSid]."</a></td></tr><tr><td><b>"._SERVERNAME."</b>:</td><td>".$serverlink[$GSid].$servername[$GSid]."</a></td></tr>";
	echo "<tr><td><b>"._PLAYERS."</b>:</td><td>".$players[$GSid]."</td></tr>";
	if ($ping!=0) {
	echo "<tr><td><b>"._PING."</b>:</td><td>".$ping[$GSid]."</td></tr>";
	}
	echo "<tr><td><b>"._MAPNAME."</b>:</td><td>".$map[$GSid]."</td></tr>";
	echo "<tr><td colspan=2>".$serverlink[$GSid]._MOREINFO."</a></td></tr></table></td>";
	$colcount++;

	if ($colcount==3) {
	echo "</tr><tr><td colspan=3><hr></td></tr>";
	}
}

function GSfooter() {
global $colcount;
	if ($colcount==1) {
	echo "<td colspan=2>&nbsp</td></tr>";
	}
	if ($colcount==2) {
	echo "<td>&nbsp</td></tr>";
	}
	echo "</table>";
}
?>