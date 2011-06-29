<?php
//ilist type -just serverlinks and icons. no mappics or stats

function GSheader() {
	echo "<table border='0'>";
}

function GSserveritem($icon, $serverlink, $servername, $players, $ping, $map, $mappic, $GSid) {
	echo "<tr><td>".$icon[$GSid]."&nbsp;&nbsp;".$serverlink[$GSid].$servername[$GSid]."</a></td>";
}

function GSfooter() {
	echo "</table>";
}
?>