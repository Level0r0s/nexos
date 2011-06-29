<?php
//list type -just serverlinks no icons, mappics, or stats
function GSheader() {
	echo "<table border='0'>";
}

function GSserveritem($icon, $serverlink, $servername, $players, $ping, $map, $mappic, $GSid) {
	echo "<tr><td>".$serverlink[$GSid].$servername[$GSid]."</a></td>";
}

function GSfooter() {
	echo "</table>";
}
?>