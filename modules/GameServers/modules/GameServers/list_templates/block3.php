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

	echo "<td align=\"left\">".$icon[$GSid]."<br><b>"._SERVERNAME."</b>: ".$serverlink[$GSid].$servername[$GSid]."</a>";
	echo "<br><b>"._PLAYERS."</b>: ".$players[$GSid]."<br>";
	if ($ping!=0) {
	echo "<b>"._PING."</b>: ".$ping[$GSid]."<br>";
	}
	echo "<b>"._MAPNAME."</b>: ".$map[$GSid];
	echo "<br>".$serverlink[$GSid]._MOREINFO."</a>";
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