<?php

echo "<table border='0' cellpadding='0' cellspacing='5' width='100%'>"
    ."<tr><td>"._SERVERNAME."</td><td><a href=\"modules.php?name=GameServers&do=query&server_id=".$server_id."\">".$SSname."</a></td></tr>"
    ."<tr><td>"._MAPNAME."</td><td>".$SSmap."</td></tr>"
    ."<tr><td>"._PLAYERS."</td><td>".$SSplayers."</td></tr>";
    if (isset($ping)) {
    	echo "<tr><td>"._PING."</td><td>".$ping."</td></tr>";
    }
echo "</table>";

?>