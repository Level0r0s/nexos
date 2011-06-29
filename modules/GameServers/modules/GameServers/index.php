<?php
/**********************************************************************
GameServers Version 2.0.2 for PHP-Nuke 7.5+
By Neil Myers http://www.voicesinmyhead.net
Powered by gameq by Tom Buskens http://gameq.sourceforge.net
Released under the GNU General Public License
***********************************************************************
Ported to CPG Dragonfly™ CMS by:
djdevon3, SCROFT, and DssTrainer

Special Thanks to "CPG-Nuke Dev Team" at dragonflycms.org,
dedicatednow.com who sponsors or CVS space, and DJMaze for teaching us;
give a man a fish, he will eat for a day...
Teach a man to fish, he will eat for life.
**********************************************************************/
if (!defined('CPG_NUKE')) { exit; }
$pagetitle .= $module_name;

// get module configuration
$sql = "SELECT * FROM ".$prefix."_gameservers_config";
$result = $db->sql_query($sql);
$row = $db->sql_fetchrow($result);
	$GSdownloads = $row['GSdownloads'];
	$GScachetime = intval($row['GScachetime']);
	$GSbcachetime = intval($row['GSbcachetime']);
	$GSdebug = $row['GSdebug'];
	$GSremotepath = $row['GSremotepath'];
	$GSremote = $row['GSremote'];
	$GScode = $row['GScode'];
	$GSlistname = $row['GSlistname'];
	$GSblistname = $row['GSblistname'];
	$GSTags = $row['GSTags'];
	$GSfailtime = $row['GSfailtime'];
	$GSfailcount = $row['GSfailcount'];
	$GSemail = $row['GSemail'];
	$GSblisttype = $row['GSblisttype'];
	$GSlistchg = $row['GSlistchg'];
		if (!$_GET['GSlisttype']) {
		$_GET['GSlisttype'] = $row['GSlisttype'];
		}

if ( isset($HTTP_POST_VARS['do']) || isset($HTTP_GET_VARS['do']) ) {
	$do = ( isset($HTTP_POST_VARS['do']) ) ? $HTTP_POST_VARS['do'] : $HTTP_GET_VARS['do'];
	$do = htmlspecialchars($do);
} else {
	$do = '';
}
$do = isset($_POST['do']) ? $_POST['do'] : (isset($_GET['do']) ? $_GET['do']:'');

switch($do) {
    case "bquery":
    QueryServer(1, $server_id);
    break;
    case "query":
    QueryServer(0, $server_id);
    break;
    case "block":
    DisplayServers(1, $GSblisttype);
    break;
    default:
    DisplayServers(0, $_POST['GSlisttype']);
    break;
}

/**********************************************************************
DisplayServers - Builds index page
Parameters: $block, $GSlisttype
$block			if set to 1, dont render nuke header/footer
$GSlisttype		specifys which list_template to use
**********************************************************************/
function DisplayServers() {
global $prefix, $db, $module_name, $querydone, $GSdownloads, $GScachetime, $GSbcachetime, $GSdebug, $GSremotepath, $GSremote, $GScode, $GSlistname, $GSblistname, $GSTags, $GSfailtime, $GSfailcount, $GSemail, $GSblisttype, $GSlistchg;

	if ($_GET['do']=="block") {
		//reset in block parameters
		$GSlistname=$GSblistname;
		$GScachetime=$GSbcachetime;
		$_GET['GSlisttype']=$GSblisttype;
	} else {
		require_once("header.php");
		if ($GSlistchg!=0) {
			echo "<br />";
OpenTable();
				echo "<center>";
				echo "|&nbsp;"._BLOCKS." ";
				echo "<a href=\"".getlink("GameServers&amp;GSlisttype=block2")."\">2</a>/";
				echo "<a href=\"".getlink("GameServers&amp;GSlisttype=block3")."\">3</a>/";
				echo "<a href=\"".getlink("GameServers&amp;GSlisttype=block4")."\">4</a>";
		if ($GSlistchg==2) {
				echo " | "._BLOCKSW." ";
				echo "<a href=\"".getlink("GameServers&amp;GSlisttype=block2M")."\">2</a>/";
				echo "<a href=\"".getlink("GameServers&amp;GSlisttype=block3M")."\">3</a>/";
				echo "<a href=\"".getlink("GameServers&amp;GSlisttype=block4M")."\">4</a> | ";
				if($_GET['GSlisttype']=='alist' OR $_GET['GSlisttype']=='list'){
					echo "<a href=\"".getlink("GameServers&amp;GSlisttype=ailist")."\">"._GSALIST."</a>";
				} else {
					echo "<a href=\"".getlink("GameServers&amp;GSlisttype=alist")."\">"._GSALIST."</a>";
				}
		}
		echo " | ";
		if($_GET['GSlisttype']=='alist' OR $_GET['GSlisttype']=='list'){
			echo "<a href=\"".getlink("GameServers&amp;GSlisttype=ilist")."\">"._GSILIST."</a> | ";
		} else {
			echo "<a href=\"".getlink("GameServers&amp;GSlisttype=list")."\">"._GSSLIST."</a> | ";
		}
CloseTable();
		echo "<br /></center>";
		}
	OpenTable();
	}
	$time = time();
	$oldtime = $time-gmmktime(0,$GScachetime,0,1,1,1970,0);

//get servers info from db
	$sql = "SELECT longname, server_id, game, engine, ip, port FROM ".$prefix."_gameservers WHERE active='1' ORDER BY `weight` ASC";
		$result = $db->sql_query($sql);
			while ($row = $db->sql_fetchrow($result)) {
			$GSid = $row[server_id];
			$server_id[$GSid] = $GSid;
			$GSlongname[$GSid] = $row[longname];
			$GSgame[$GSid] = $row[game];
			$GSengine[$GSid] = $row[engine];
			$GSip[$GSid] = $row[ip];
			$GSport[$GSid] = $row[port];
			$servers[$GSid] = array($GSengine[$GSid],$GSip[$GSid],$GSport[$GSid]);
   				$sql2 = "SELECT server_id, sname, numplayers, maxplayers, map, ping, stamp FROM ".$prefix."_gameservers_statcache WHERE server_id='".$GSid."' ORDER BY `stamp` ASC LIMIT 1";
				$result2 = $db->sql_query($sql2);
				$stats[$GSid] = $db->sql_fetchrow($result2);
				$eng[$GSid] = $servers[$GSid][0];
					if ($stats[$GSid][stamp]>0 AND $oldtime<$stats[$GSid][stamp]) {
		 				unset($servers[$GSid]);
					}
			}
	if ($GSid) {
		$serverpath .= $_SERVER['SERVER_NAME'];
		$serverpath .= substr($_SERVER['SCRIPT_NAME'], 0, strlen($_SERVER['SCRIPT_NAME'])-11);
			if ($_GET['GSlisttype']!="list" AND $_GET['GSlisttype']!="ilist") {
				$data = QueryServers($servers, $data, $serverstring);
			}
// make vars
		do {
			$GSid = current($server_id);
// make serverlink
			$serverlink[$GSid] = "<a href=\"".getlink("&do=query&server_id=".$GSid."")."\">";
// find and assign icon if needed
			if ($_GET['GSlisttype']=='ilist' OR $_GET['GSlisttype']=='ailist' OR $_GET['GSlisttype']=='block2' OR $_GET['GSlisttype']=='block3' OR $_GET['GSlisttype']=='block4') {
				if (file_exists('modules/'.$module_name.'/images/'.$GSgame[$GSid].'.gif')) {
					$icon[$GSid] = $serverlink[$GSid]."<img src='http://".$serverpath."modules/'.$module_name.'/images/".$GSgame[$GSid].".gif' width='32' height='32' border='0'></a>";
				} elseif(file_exists('modules/'.$module_name.'/images/'.$GSengine[$GSid].'.gif')) {
					$icon[$GSid] = $serverlink[$GSid]."<img src='http://".$serverpath."modules/'.$module_name.'/images/".$GSengine[$GSid].".gif' width='32' height='32' border='0'></a>";
				} else {
					$icon[$GSid] = $serverlink[$GSid]."<img src='http://".$serverpath."modules/'.$module_name.'/images/noicon.gif' width='32' height='32' border='0'></a>";
				}
			}
// generate servername
			if ($_GET['GSlisttype']!="list" and $_GET['GSlisttype']!="ilist") {
				if ($GSlistname==1) {
					if ($stats[$GSid]['sname']) {
						$servername[$GSid] = $stats[$GSid]['sname'];
					} else {
				  		$servername[$GSid] = ServerName($servers, $GSid, $data);
					}
				}
				if (!$servername[$GSid]) {
					$servername[$GSid] = $GSlongname[$GSid];
				}
				if (isset($stats[$GSid]['numplayers']) AND isset($stats[$GSid]['maxplayers'])) {
					$players[$GSid] = $stats[$GSid]['numplayers']."/".$stats[$GSid]['maxplayers'];
				} else {
					$players[$GSid] = PlayerCount($servers, $GSid, $data);
				}
				if ($stats[$GSid]['map']) {
					$map[$GSid] = $stats[$GSid]['map'];
				} else {
					$map[$GSid] = CurrentMap($servers, $GSid, $data);
				}
				if (!$stats[$GSid]['map'] AND $data[$GSid]['custom']['ping']!=200) {
					$ping[$GSid] = $data[$GSid]['custom']['ping'];
				} else {
					$ping[$GSid] = $stats[$GSid]['ping'];
				}
			} else {
			$servername[$GSid] = $GSlongname[$GSid];
		}
		$mappic[$GSid] = MapPic($eng[$GSid], $map[$GSid], 0, " width=200 height=150");
	} while (next($server_id));
// output data
		if (file_exists('modules/'.$module_name.'/list_templates/'.$_GET['GSlisttype'].'.php')) {
			include ('modules/'.$module_name.'/list_templates/'.$_GET['GSlisttype'].'.php');
		} else {
			include ('modules/'.$module_name.'/list_templates/ilist.php');
		}
	reset($server_id);
	GSheader();
	do {
		$GSid = current($server_id);
		GSserveritem($icon, $serverlink, $servername, $players, $ping, $map, $mappic, $GSid);
	} while (next($server_id));
	GSfooter();
	} else {
		echo _NOSERVERS;
	}
	if ($_GET['do']!="block") {
		CloseTable();
		if (is_admin($admin)) {
			echo '<br>';
			OpenTable();
			echo '<center><a href="'.adminlink().'">'._GSADMIN.'</a>&nbsp;|&nbsp;<a href="'.adminlink("&mode=GSConfig").'">'._GSADMINC.'</a>&nbsp;|&nbsp;'._GSSNUM.' '.count($servers);
				if ($GSremote AND $GSdebug AND $GSlistchg=="2" and $_GET['GSlisttype']!="list" and $_GET['GSlisttype']!="ilist") {
					echo '&nbsp;|&nbsp;<a href="'.$GSremotepath.'/remote.php?serverstring='.$serverstring.'&code='.$GScode.'" target="_blank">Sourcelink(for debug)</a>';
				}
			echo '</center>';
			CloseTable();
		}
		include('footer.php');
	} else {
//block cache debug
	//echo _GSSNUM.' '.count($servers).'-'.$GScachetime;
//die to keep nuke from giving file doesn't exist errors in block mode
	die();
	}
}

/**********************************************************************
PlayerCount - returns player count and player max for the specified server
Parameters: $servers, $GSid, $data
$servers	server array sent to gameq
$GSid		the server id we need the player count for
$data		the data returned by gameq
**********************************************************************/
function PlayerCount($servers, $GSid, $data) {
	switch ($servers[$GSid][0]) {
		case 'dai':
		case 'fc':
			return GetArrVal($data[$GSid][num_players]);
		break;
		case 'hl':
		case 'sc':
		case 'gr':
		case 'rvs':
		case 'u2xmp':
		case 'ut2003':
		case 'ut2004':
		case 'ut2004-3':
		case 'ut2004-4':
		case 'ut2004-5':
		case 'starsiege':
			$num = GetArrVal($data[$GSid][num_players]);
			$max = GetArrVal($data[$GSid][max_players]);
		break;
		case 'stvef2':
			$num = $data[$id][num_players];
			$max = $data[$id][maxplayers];
		break;
		case 'qw':
		case 'q2':
		case 'sof':
		case 'sin':
		case 'kp':
			$num = GetArrVal($data[$GSid][num_players]);
			$max = GetArrVal($data[$GSid][maxclients]);
		break;
		case 'jk2':
		case 'cod':
		case 'q3':
		case 'stvef':
		case 'mohq3':
		case 'rtcw':
		case 'sof2':
			$num = GetArrVal($data[$GSid][num_players]);
			$max = GetArrVal($data[$GSid][sv_maxclients]);
		break;
		case 'bf1942':
			$num = 0;
			$p = 0;
			do {
				if (isset($data[$GSid]['player_'.$p])) {	$num++;	}
				$p++;
			} while ($p<=64 AND $num<=GetArrVal($data[$GSid][maxplayers]));
			$max = GetArrVal($data[$GSid][maxplayers]);
		break;
		case 'mta':
			$num = 0;
			$p = 0;
			do {
				if (isset($data[$GSid]['players'][$p]['name'])) {	$num++;	}
				$p++;
			} while ($p<=32 AND $num<=GetArrVal($data[$GSid][max_players]));
		$max = GetArrVal($data[$GSid][max_players]);
		break;
		default:
			$num = GetArrVal($data[$GSid][numplayers]);
			$max = GetArrVal($data[$GSid][maxplayers]);
		break;
	}
	if (is_numeric(trim($num)) AND is_numeric(trim($max))){
		return trim($num).'/'.trim($max);
	} else {
		return '--/--';
	}
}

/**********************************************************************
CurrentMap - returns the current map or level for the specified server
Parameters: $servers, $GSid, $data
$servers	server array sent to gameq
$GSid		the server id we need the current map or level for
$data		the data returned by gameq
**********************************************************************/
function CurrentMap($servers, $GSid, $data) {
	switch ($servers[$GSid][0]) {
		case 'mta':
			return GetArrVal($data[$GSid][version]);
		break;
		case 'hl':
		case 'sc':
		case 'fc':
		case 'rvs':
		case 'qw':
		case 'u2xmp':
		case 'ut2003':
		case 'ut2004':
		case 'ut2004-3':
		case 'ut2004-4':
		case 'ut2004-5':
		case 'starsiege':
			return GetArrVal($data[$GSid][map]);
		break;
		case 'gr':
			if ($data[$GSid][mission]) {
				return GetArrVal($data[$GSid][mission]);
			} else {
				return GetArrVal($data[$GSid][map]);
			}
		break;
		case 'dx':
		case 'rune':
		case 'ut':
			return GetArrVal($data[$GSid][maptitle]);
		break;
		default:
			return GetArrVal($data[$GSid][mapname]);
		break;
	}
}

/**********************************************************************
ServerName - returns the server name for the specified server
Parameters: $servers, $GSid, $data
$servers	server array sent to gameq
$GSid		the server id we need the server name for
$data		the data returned by gameq
**********************************************************************/
function ServerName($servers, $GSid, $data) {
	switch ($servers[$GSid][0]) {
		case 'cod':
		case 'jk2':
		case 'mohq3':
		case 'q3':
		case 'stvef':
		case 'stvef2':
		case 'rtcw':
		case 'sof2':
			return Q3colors($data[$GSid][sv_hostname], 1);
		break;
		case 'gr':
			return GetArrVal($data[$GSid][name]);
		break;
		default:
			if (GetArrVal($data[$GSid][hostname])) {
				return GetArrVal($data[$GSid][hostname]);
			} else {
				return false;
			}
		break;
	}
}

/**********************************************************************
QueryServers - queries multiple servers using gameq or gameq remote
Parameters: $servers, $GSid, $serverstring
$servers		server array sent to gameq
$data			the data array returned by gameq
$serverstring	server array normally sent to gameq in string format
**********************************************************************/
function QueryServers($servers, $data, $serverstring) {
	global $module_name, $GSremote, $GSremotepath, $GScode, $serverstring;
	if ($GSremote) {
		foreach ($servers as $k => $v) {
			$serverstring .= implode("~", $v)."~".$k."^";
		}
		$serverstring = substr($serverstring, 0, strlen($serverstring)-1);
		$data = @unserialize(file_get_contents ($GSremotepath."/remote.php?serverstring=".$serverstring."&code=".$GScode));
		SaveStats($servers, "all", "all", $data);
		return $data;
	} else {
	define('CFG_FILE', 'modules/'.$module_name.'/gameq/class.gameq.cfg.php');
	define('INC_PATH', 'modules/'.$module_name.'/gameq/inc/');
	include ('modules/'.$module_name.'/gameq/class.gameq.php');
	$query = new GameQ;
	$data = $query->GetInfo($servers);
	SaveStats($servers, "all", "all", $data);
	return $data;
	}
}

/**********************************************************************
QueryServer - queries a single server using gameq	or gameq remote
Parameters: $server_id
$server_id		the server id we need to query
**********************************************************************/
function QueryServer($block, $server_id) {
	global $sitename, $prefix, $db, $module_name, $admin, $GSdownloads, $GSdebug, $module_name, $GSremote, $GSremotepath, $GScode, $GSTags, $GSfailcount, $GSbcachetime;
	if ($_GET['do']!="bquery") {
		include ('header.php');
	}
    $sql = "SELECT ip, port, longname, engine, active, failstring, failcounts FROM ".$prefix."_gameservers WHERE server_id='".$_GET['server_id']."'";
    $result = $db->sql_query($sql);
    $row = $db->sql_fetchrow($result);
    $GSip = $row[ip];
    $GSport = $row[port];
    $GSlongname = $row[longname];
    $GSactive = $row[active];
    $GSgame = $row[engine];
    $GSfailstring = $row[failstring];
    $GSfailcounts = $row[failcounts];
	if ($_GET['do']!="bquery") {
		title($sitename." : "._MODULENAME." : ".$GSlongname);
echo "<br />";
OpenTable();
echo "<center><a href=\"".getlink("GameServers")."\">.:: Display All Servers ::.</a><br />";
CloseTable();
echo "<br />";
		OpenTable();
	}
	if ($GSip) {
		if ($GSactive OR is_admin($admin)) {
			$servers[$GSgame] = array($GSgame, $GSip, $GSport);
				if ($_GET['do']=="bquery") {
					$sql2 = "SELECT server_id, sname, numplayers, maxplayers, map, stamp, ping FROM ".$prefix."_gameservers_statcache WHERE server_id='".$server_id."' ORDER BY `stamp` ASC LIMIT 1";
					$result2 = $db->sql_query($sql2);
					$stats[$server_id] = $db->sql_fetchrow($result2);
					$eng[$server_id] = $servers[$server_id][0];
					$time = time();
					$oldtime = $time-gmmktime(0,$GSbcachetime,0,1,1,1970,0);
					if ($stats[$server_id][stamp]>0 AND $oldtime<$stats[$server_id][stamp]) {
						$skipq=1;
					}
				}
				if ($skipq!=1) {
					if ($GSremote) {
						$fc = file_get_contents ($GSremotepath.'/remote.php?game='.$GSgame.'&ip='.$GSip.'&port='.$GSport.'&code='.$GScode);
						$data = @unserialize($fc);
					} else {
						define('CFG_FILE', 'modules/'.$module_name.'/gameq/class.gameq.cfg.php');
						define('INC_PATH', 'modules/'.$module_name.'/gameq/inc/');
						require_once ('modules/'.$module_name.'/gameq/class.gameq.php');
						$query = new GameQ;
						$data = $query->GetInfo($servers);
					}
				}
				if (CheckQuery($data, $GSgame) or $skipq==1) {
					if ($data[$GSgame][custom][ping]!=200) {
					$ping = $data[$GSgame][custom][ping];
				} else {
					$ping = 0;
				}
				if ($_GET['do']!="bquery") {
					if (file_exists('modules/'.$module_name.'/output_templates/'.$GSgame.'.php')) {
						if ($GSTags AND $data[$GSgame][custom][type]=='q3') { echo "<LINK REL=\"StyleSheet\" HREF=\"modules/$module_name/q3col.css\" TYPE=\"text/css\">"; }
							include ('modules/'.$module_name.'/output_templates/'.$GSgame.'.php');
					} else {
						echo '<pre><strong>Raw Data:</strong>';
						print_r($data);
						echo '</pre>';
					}
				} else {
			 		if ($skipq!=1) {
						$SSplayers = PlayerCount($servers, $GSgame, $data);
						$SSmap = CurrentMap($servers, $GSgame, $data);
						$SSname = ServerName($servers, $GSgame, $data);
					} else {
						$SSplayers = $stats[$server_id][numplayers]."/".$stats[$server_id][maxplayers];
						$SSmap = $stats[$server_id][map];
						$SSname = $stats[$server_id][sname];
						$ping = $stats[$server_id][ping];
					 }
				include ('modules/'.$module_name.'/output_templates/SSblock.php');
				}
				SaveStats($servers, $server_id, $GSgame, $data);
				} elseif ($data=="BADCODE") {
					echo _BADCODE;
			} else {
				echo _BADQUERY;
				if ($GSfailcount AND !$block) { AddFail($server_id); }
			}
		} else {
			echo _INACTIVE;
		}
	} else {
		echo _INVALID;
	}
	if ($_GET['do']!="bquery") {
	CloseTable();
	}
// display downloads section if enabled
	if ($GSdownloads AND !$bquery) {
		ListDLs($GSgame);
	}
// display admin tools if admin
	if (is_admin($admin) AND $_GET['do']!="bquery") {
		echo "<br>";
		OpenTable();
		echo '<center>[&nbsp;<a href="'.adminlink().'">'._GSADMIN.'</a>&nbsp;|&nbsp;<a href="'.adminlink("&mode=GSConfig").'">'._GSADMINC.'</a>&nbsp;|&nbsp;<a href="'.adminlink("&mode=GSEdit&server_id=".$_GET['server_id']."").'">'._GSEDIT.'</a>&nbsp;|&nbsp;<a href="'.adminlink("&mode=GSStatus&server_id=".$_GET['server_id']."&GSactive=".$GSactive."").'">';
		switch ($GSactive) {
			case 1:
			echo _GSDEACTIVE;
			break;
			case 2:
			echo _DEACTIVATED."(".count(explode("|", $GSfailstring)).")";
			break;
			case 0:
			echo _GSACTIVE;
			break;
		}
		echo '</a>&nbsp;|&nbsp;';
			if ($GSremote) {
				echo '<a href="'.$GSremotepath.'/remote.php?game='.$GSgame.'&ip='.$GSip.'&port='.$GSport.'&code='.$GScode.'" target="_blank">'._REMLINK.'</a>&nbsp;|&nbsp;';
			}
		echo '<a href="'.adminlink("&mode=GSDelete&server_id=".$_GET['server_id']."&ok=0").'">'._GSDEL.'</a>&nbsp;]</center>';
		CloseTable();
	}
// display degug if admin and debug is enabled
	if (is_admin($admin) AND $GSdebug AND $_GET['do']!="bquery") {
		echo '<br>';
		OpenTable();
		echo '<pre><strong>You\'re an admin for this module and debug is enabled - here is the Raw Data for this query:</strong><br>';
		print_r($data);
		echo '</pre>';
		echo '<pre><strong>Errors:</strong>';
		print_r($query->ErrorMsg);
		echo '</pre>';
		CloseTable();
	}
 	if ($_GET['do']!="bquery") {
 		include('footer.php');
 	} else {
 		die();
 	}
}


/**********************************************************************
CheckQuery - checks data returned by gameq to see if the query is readable
Parameters: $data, $GSgame
$data			the data array returned by gameq
$GSgame			the key in the $data array we need to look under
**********************************************************************/
function CheckQuery($data, $GSgame){
	switch ($data[$GSgame]['custom']['type']) {
		case 'aa':
		case 'hl':
		case 'sc':
		case 'hw2':
		case 'fc':
		case 'kp':
		case 'pk':
		case 'rvs':
		case 'ss2':
		case 'spy':
		case 'ut2003':
		case 'ut2004':
		case 'ut2004-3':
		case 'ut2004-4':
		case 'ut2004-5':
		case 'u2xmp':
		case 'shogo':
		case 'starsiege':
		if(isset($data[$GSgame]['queryid']) OR isset($data[$GSgame]['hostname'])){
			return 1;
		}
		break;
		case 'gr':
			if(isset($data[$GSgame]['name'])){
			return 1;
		}
		break;
		case 'mta':
		case 'q3':
			if(isset($data[$GSgame]['sv_hostname']) OR isset($data[$GSgame]['hostname']) OR isset($data[$GSgame]['mapname'])){
			return 1;
		}
		break;
//don't check these enginetypes
		case 'hx2':
//case 'tribes':
//case 'tribes2':
		case 'test':
			return 1;
		break;
		default:
			return 0;
		break;
	}
}

/**********************************************************************
SaveStats - saves currentmap, playercount, and servername to db with timestamp
Parameters: $servers, $server_id, $GSgame, $data
$servers		server array sent to gameq
$server_id		the server id we save the stats for
$GSgame			the key in the $data array we need to look under
$data			the data array returned by gameq
**********************************************************************/
function SaveStats($servers, $server_id, $GSgame, $data){
	global $db, $prefix;
	$stamp = time();
	if ($GSgame=="all" AND $server_id=="all"){
		foreach ($servers as $k => $v) {
			$play = explode("/", PlayerCount($servers, $k, $data));
			$map = addslashes(CurrentMap($servers, $k, $data));
			$sname = addslashes(ServerName($servers, $k, $data));
			$ping = $data[$k]['custom']['ping'];
			$sql = "UPDATE `".$prefix."_gameservers_statcache` set sname='$sname',numplayers='$play[0]',maxplayers='$play[1]',map='$map',ping='$ping',stamp='$stamp' WHERE server_id = $k";
			if ($sname) {
			$db->sql_query($sql);
			}
		}
	} else {
		$play = explode("/", PlayerCount($servers, $data[$GSgame]['custom']['id'], $data));
		$map = addslashes(CurrentMap($servers, $data[$GSgame]['custom']['id'], $data));
		$sname = addslashes(ServerName($servers, $data[$GSgame]['custom']['id'], $data));
		$ping = $data[$GSgame]['custom']['ping'];
		$db->sql_query("INSERT INTO `".$prefix."_gameservers_statcache` (`server_id`,`sname`,`numplayers`,`maxplayers`,`map`,`ping`,`stamp`) VALUES ('".$server_id."','".$sname."','".$play[0]."','".$play[1]."','".$map."','".$ping."','".$stamp."')");
	}
}

/**********************************************************************
ListDLs - outputs downloads list for a gametype using downloads.csv
Parameters: $GSgame
$GSgame			gametype to output downloads for
**********************************************************************/
function ListDLs($GSgame) {
global $module_name;
	$filename = 'modules/'.$module_name.'/output_templates/'.$GSgame.'/downloads.csv';
	if (file_exists($filename)) {
		OpenTable();
		$GSid = fopen($filename, "r");
		while ($data = fgetcsv($GSid, filesize($filename)))
		$table[] = $data;
		fclose($GSid);
		echo '<table cellspacing=8>';
		echo '<tr><td>'._DOWNLOADS.'</td><td>'._SIZE.'</td></tr>';
		foreach($table as $row) {
			echo '<tr><td><a href='.$row[0].' target="_blank">'.$row[1].'</a></td><td>'.$row[2].'</td></tr>';
		}
		echo '</table>';
		CloseTable();
	}
}

/**********************************************************************
YesNo - returns yes or no in the current language
Parameters: $question
$question	variable to evaluate
**********************************************************************/
function YesNo($question) {
$question = GetArrVal($question);
	if ($question=='1' or $question==1 or $question==True or $question=='true') {
		return _YES;
	} else {
		return _NO;
	}
}

/**********************************************************************
Abled - returns enabled or disabled in the current language
Parameters: $question
$question	variable to evaluate
**********************************************************************/
function Abled($question) {
$question = GetArrVal($question);
	if ($question=='1' or $question==1 or $question==True or $question=='true') {
		return _ENABLED;
	} else {
		return _DISABLED;
	}
}

/**********************************************************************
GetArrVal - returns root value of a given variable in case its returned more than once
Parameters: $question
$question	variable to evaluate
**********************************************************************/
function GetArrVal($question) {
	if (is_array($question)) {
		return $question[0];
	} else {
		return $question;
	}
}

/**********************************************************************
AddFail - saves a timestamp to the database everytime a server fails (if enabled)
Parameters: $servers, $server_id, $GSgame, $data
$server_id		the server id we save the fails for
**********************************************************************/
function AddFail($server_id) {
	global $prefix, $db, $sitename, $GSfailtime, $GSfailcount, $admin, $GSdebug, $GSemail;
	$debugs = '<br><br>Hours='.$GSfailtime.'<br>';
	$oldtime = time()-gmmktime($GSfailtime,0,0,1,1,1970);
	$debugs .= 'Oldest Acceptable Time='.$oldtime.'<br>';
	$debugs .= 'Current Time='.time().'<br>';
	$sql = "select longname, failstring, failcounts from ".$prefix."_gameservers where server_id='".$server_id."'";
	$result = $db->sql_query($sql);
	$row = $db->sql_fetchrow($result);
	if (strstr($row['failstring'], "|")) {
		$fail = explode("|", $row['failstring']);
	} else {
	if ($row['failstring']==0) {
		$fail[0] = '';
	} else {
		$fail[0] = $row['failstring'];
		}
	}
	foreach ($fail as $k => $v) {
		if ($oldtime>=$v AND $v!=0) {
			$debugs .= 'Removing '.$v.' -it is older than the Oldest Acceptable Time<br>';
			 unset($fail[$k]);
		}
	}
	$fcount = count($fail);
	$debugs .= 'Fail Count(including this fail)='.$fcount.'<br>';
	$debugs .= 'Acceptable Number of Fails='.$GSfailcount.'<br>';
	if ($GSfailcount>=$fcount+1) {
		$fail['new'] = time();
		$GSfailstring = implode('|', $fail);
		$db->sql_query("UPDATE ".$prefix."_gameservers set failstring='".$GSfailstring."' where server_id='".$server_id."'");
		$debugs .= 'Action : Record fail, leave server active.<br>Fails Re-recorded as ='.$GSfailstring.'<br>';
	} else {
	if ($row['failcounts'] AND $GSfailcount) {
		$debugs .= 'Action : Deactivate Server<br>';
		$db->sql_query("UPDATE ".$prefix."_gameservers set active='2' where server_id='".$server_id."'");
//send email
		if ($GSemail) {
			$GSmes = _GSMAILMES1.$row['longname']._GSMAILMES2;
			if(mail($GSemail, _GSMAILSUB.$sitename, $GSmes,
			'From: '._GSVER.'\r' .
			'Reply-To: '.$GSemail.'\r' .
			'X-Mailer: PHP' . phpversion())) {
				$debugs .= 'Sent Email<br>';
			}
		}
		} else {
			$debugs .= 'Action : Record fail, leave server active.<br>';
		}
	}
	if (is_admin($admin) AND $GSdebug) { echo $debugs; }
}

/**********************************************************************
PlayerList - returns a sortable playerlist
Parameters: $cols
$cols		player array created by the output template
**********************************************************************/
function PlayerList($cols) {
	global $bgcolor1, $bgcolor2, $module_name;
//Table sorting code written by Erik Arvidsson
//http://webfx.eae.net/dhtml/tablesort/tablesort.html
	echo '<script type="text/javascript" src="modules/'.$module_name.'/tablesort.js"></script>';
	echo '<link rel="STYLESHEET" type="text/css" href="modules/'.$module_name.'/tablesort.css">';
	foreach ($cols as $k => $v) {
		if ($k==0) {
			$w = count($cols[0])*75;
			$plist .= '<table border="0" onclick="sortColumn(event)" width="'.$w.'"><thead bgcolor="'.$bgcolor1.'"><tr>';
				foreach ($cols[$k] as $k2 => $v2) {
					if(is_numeric($cols[1][$k2])) {
					$plist .= '<td nowrap="nowrap" type="Number">&nbsp;'.$v2.'&nbsp;</td>';
					} else {
						$plist .= '<td nowrap="nowrap" type="CaseInsensitiveString">&nbsp;'.$v2.'&nbsp;</td>';
					}
				}
			$plist .= '</tr></thead><tbody>';
		} else {
// check if playername (0) is blank or if it already exists in the table if it does, ignore it and move on
			if ($cols[$k][0]!='' AND strpos($plist, ">".$cols[$k][0]."</td>")==false){
			$plist .= '<tr>';
				foreach ($cols[$k] as $k2 => $v2) {
					if(is_numeric($v2)) {
						$plist .= '<td nowrap="nowrap" align="right">&nbsp;'.$v2.'&nbsp;</td>';
					} else {
						$plist .= '<td nowrap="nowrap">&nbsp;'.$v2.'&nbsp;</td>';
					}
				}
			$plist .= '</tr>';
			}
		}
	}
	$plist .= '</tbody></table>';
	return $plist;
}

/**********************************************************************
MapPic - returns a picture of the current map(if one exists png,jpg,gif)
Parameters: $GSid, $map, $url
$GSid	the server id we need the map picture for
$map	the mapname
$url	if we want the pic to be hyperlinked include the url here
**********************************************************************/
function MapPic($GSid, $map, $url, $imgsize) {
	$map = GetArrVal($map);
	global $module_name;
	$map = str_replace("/", "_", str_replace(" ", "_", str_replace("'", "", strtolower($map))));
	$url = str_replace(" ", "_", strtolower($url));
	if (file_exists('modules/'.$module_name.'/output_templates/'.$GSid.'/'.$map.'.png')) {
 		if ($url) {
			return '<a href="'.$url.'" target="_blank"><img align="right" border="0" src="modules/'.$module_name.'/output_templates/'.$GSid.'".$map.".png" alt="'.$data[$GSid]['mapname'].'" GALLERYIMG="no"'.$imgsize.'></a>';
  		} else {
  			return '<img align="right" border="0" src="modules/'.$module_name.'/output_templates/'.$GSid.'/'.$map.'.png" alt="'.$data[$GSid]['mapname'].'" GALLERYIMG="no"'.$imgsize.'>';
  		}
	} elseif (file_exists('modules/'.$module_name.'/output_templates/'.$GSid.'/'.$map.'.gif')) {
		if ($url) {
  			return '<a href="'.$url.'" target="_blank"><img align="right" border="0" src="modules/'.$module_name.'/output_templates/'.$GSid.'/'.$map.'.gif" alt="'.$data[$GSid]['mapname'].'" GALLERYIMG="no"'.$imgsize.'></a>';
		} else {
			return '<img align="right" border="0" src="modules/'.$module_name.'/output_templates/'.$GSid.'/'.$map.'.gif" alt="'.$data[$GSid]['mapname'].'" GALLERYIMG="no"'.$imgsize.'>';
		}
	} elseif (file_exists('modules/'.$module_name.'/output_templates/'.$GSid.'/'.$map.'.jpg')) {
		if ($url) {
			return '<a href="'.$url.'" target="_blank"><img align="right" border="0" src="modules/'.$module_name.'/output_templates/'.$GSid.'/'.$map.'.jpg" alt="'.$data[$GSid]['mapname'].'" GALLERYIMG="no"'.$imgsize.'></a>';
		} else {
			return '<img align="right" border="0" src="modules/'.$module_name.'/output_templates/'.$GSid.'/'.$map.'.jpg" alt="'.$data[$GSid]['mapname'].'" GALLERYIMG="no"'.$imgsize.'>';
		}
	} else {
		return '<img align="right" border="0" src="modules/'.$module_name.'/output_templates/nopic.png" alt="'.$map.'" GALLERYIMG="no"'.$imgsize.'></td></tr>';
	}
}

/**********************************************************************
ASElink - returns color codes in Q3 engine games to font tags readable by the browser
this function needs to be cleaned up some
when i originally wrote it i thought there were only colors codes for 0-9
color definitions are stored in modules/GameServers/q3col.css
Parameters: $player, $striptags
$player		the player name to make tags for
$striptags	when set to 1, q3 color tags are removed
**********************************************************************/
function ASElink($custom, $ST) {
	global $module_name;
	return "<a href=\"eye://".$ST."://".$custom['address'].":".$custom['query_port']."?command\" alt=\""._ASEJOIN."\"><img src=\"modules/".$module_name."/images/join/asebut.gif\" border=\"0\" alt=\""._ASEJOIN."\"></a>";
}

/**********************************************************************
Q3colors - returns color codes in Q3 engine games to font tags readable by the browser
this function needs to be cleaned up some
when i originally wrote it i thought there were only colors codes for 0-9
color definitions are stored in modules/GameServers/q3col.css
Parameters: $player, $striptags
$player		the player name to make tags for
$striptags	when set to 1, q3 color tags are removed
**********************************************************************/
function Q3colors($player, $striptags) {
	$player = GetArrVal($player);
	$colcodes = array("^0",	"^1", "^2", "^3", "^4", "^5", "^6", "^7", "^8", "^9", "^a", "^b", "^c", "^d", "^e", "^f", "^g", "^h", "^i", "^j", "^k", "^l", "^m", "^n", "^o", "^p", "^q", "^r", "^s", "^t", "^i", "^j", "^u", "^v", "^w", "^x", "^y", "^z", "^/", "^*", "^-", "^+", "^?", "^@", "^$");
	$colors = array(
		'</font><font class="q30">',
		'</font><font class="q31">',
		'</font><font class="q32">',
		'</font><font class="q33">',
		'</font><font class="q34">',
		'</font><font class="q35">',
		'</font><font class="q36">',
		'</font><font class="q37">',
		'</font><font class="q38">',
		'</font><font class="q39">',
		'</font><font class="q3a">',
		'</font><font class="q3b">',
		'</font><font class="q3c">',
		'</font><font class="q3d">',
		'</font><font class="q3e">',
		'</font><font class="q3f">',
		'</font><font class="q3g">',
		'</font><font class="q3h">',
		'</font><font class="q3i">',
		'</font><font class="q3j">',
		'</font><font class="q3k">',
		'</font><font class="q3l">',
		'</font><font class="q3m">',
		'</font><font class="q3n">',
		'</font><font class="q3o">',
		'</font><font class="q3p">',
		'</font><font class="q3q">',
		'</font><font class="q3r">',
		'</font><font class="q3s">',
		'</font><font class="q3t">',
		'</font><font class="q3u">',
		'</font><font class="q3v">',
		'</font><font class="q3w">',
		'</font><font class="q3x">',
		'</font><font class="q3y">',
		'</font><font class="q3z">',
		'</font><font class="q3slash">',
		'</font><font class="q3star">',
		'</font><font class="q3dash">',
		'</font><font class="q3plus">',
		'</font><font class="q3ques">',
		'</font><font class="q3at">',
		'</font><font class="q3dol">',
	);
	if ($striptags==1) {
		return str_replace($colcodes, "", $player);
	} else {
		if (strstr($player, "^")) {
			return '<font class="q37">'.str_replace($colcodes, $colors, $player).'</font>';
		} else {
			return $player;
		}
	}
}

/**********************************************************************
FCcolors - Returns color codes in FC engine games to font tags readable by the browser
color definitions are stored in modules/GameServers/q3col.css
Parameters: $player, $striptags
$player		the player name to make tags for
$striptags	when set to 1, fc color tags are removed
**********************************************************************/
function FCColors($player, $striptags) {
	$player = GetArrVal($player);
	$colcodes = array("$0", "$1", "$2", "$3", "$4", "$5", "$6", "$7", "$8", "$9");
	$colors = array(
		'</font><font class="q30">',
		'</font><font class="q34">',
		'</font><font class="q3d">',
		'</font><font class="q32">',
		'</font><font class="q31">',
		'</font><font class="q37">',
		'</font><font class="q33">',
		'</font><font class="q3v">',
		'</font><font class="q38">',
		'</font><font class="q39">'
	);
	if ($striptags==1) {
		return str_replace($colcodes, "", $player);
	} else {
		if (strstr($player, '^')) {
			return '<font class="q37">'.str_replace($colcodes, $colors, $player).'</font>';
		} else {
			return $player;
		}
	}
}

/**********************************************************************
This function will search an array recursivly till it finds what it is
looking for. An array within an array within an array within array
@author        Richard Sumilang      <richard@richard-sumilang.com>
@param         string   $needle      What are you searching for?
@param         array    $haystack    What you want to search in
@return        boolean
@access        public
currently its only used in mohaa to prevent duplicate names from
displaying but may be used in other places in the future
**********************************************************************/
function array_search_r($needle, $haystack){
	foreach($haystack as $value){
		if(is_array($value))
			$match=array_search_r($needle, $value);
		if($value==$needle)
			$match=1;
		if($match)
			return 1;
	}
	return 0;
}
?>