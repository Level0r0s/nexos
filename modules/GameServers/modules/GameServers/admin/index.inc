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
if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin('GameServers')) { die('Access Denied'); }

/**********************************************************************
GSedit - Builds edit form page
Parameters: $incomplete, $server_id
$incomplete	if set, then an error message is displayed
$server_id	the server_id were editing
**********************************************************************/
function GSedit() {
	global $prefix, $db, $module_name;
	GSNav(0);
	OpenTable();
	$sql = 'select longname, server_id, game, engine, ip, port, active, failcounts, failstring from '.$prefix.'_gameservers where server_id='.$_GET['server_id'];
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
	echo '<center><font class="option"><b>'._GSUPDATE.'</b></font></center><br />'
		.'<form action="'.adminlink('&mode=GSUpdate').'" name="GSform" method="post">';

	echo '<table border="0"><tr><td align="center" valign="top"><hr /><b>-&nbsp;'._GSENGINE.'&nbsp;-</b><hr />'.EngineList(0, $row['engine']).'</td>'
		.'<td align="center" valign="top"><hr /><b>-&nbsp;'._GSGAME.'&nbsp;-</b><hr />';
	$path1 = explode ("/", 'modules/'.$module_name.'/images/');
	$path = "$path1[0]/$path1[1]/$path1[2]/";
	$handle=opendir($path);
	while ($file = readdir($handle)) {
		if ( (ereg("^([_0-9a-zA-Z]+)([.]{1})([_0-9a-zA-Z]{3})$",$file)) AND $file != "gq_logo.png" AND $file != "index.htm") {
		$ilist .= "$file ";
		}
	}
	closedir($handle);
	$ilist = explode(" ", $ilist);
	sort($ilist);
	for ($i=0; $i < sizeof($ilist); $i++) {
		if($ilist[$i]!="") {
	  	echo "<img border=\"0\" src=\"$path$ilist[$i]\" OnClick=\"javascript:document.GSform.GSgame.value = '$ilist[$i]'\" alt='$ilist[$i]' />\n";
		$glist .= '<option name="GSgame" value="'.$ilist[$i].'">'.$ilist[$i].'</option>';
		}
	}
	echo '<br /><br />or select from menu<br /><br /><select name="GSgame" id="GSgame">\n<option name="GSgame" value="'.$row['game'].'.gif" SELECTED>'.$row['game'].'.gif</option>'.$glist.'</select><br /><br />';
	echo '<hr /><center><b>-&nbsp;Details&nbsp;-</b></center><hr />';
	echo '<table width="100%" border="0"><tr>';
			if ($_GET['incomplete'] == 1) {
			echo '<td align="center" colspan="2">'._GSINCOMPLETE.'</td></tr>';
			}
	echo '<td align="center"><b>'._GSIDNUM.'</b><br /><input type="text" name="server_id" value="'.$row['server_id'].'" size="3" /></td></tr>'
		.'<td align="center"><b>'._GSNAME.'</b><br /><input type="text" name="GSlongname" value="'.$row['longname'].'" size="25" /></td></tr>'
	
		.'<tr><td align="center"><b>'._GSADDRESS.'</b><br /><input type="text" name="GSip" value="'.$row['ip'].'" size="15" />&nbsp;:&nbsp;'
		.'<input type="text" name="GSport" value="'.$row['port'].'" size="5" /></td></tr>';

			if ($row['failcounts']) { $sel1=" CHECKED"; $sel2=""; } else { $sel1=""; $sel2=" CHECKED"; }
	echo '<tr><td align="center" nowrap="nowrap"><b>'._GSFAILA.'</b><br />';
	echo '<input type="radio" name="GSfailcounts" value="1"'.$sel1.' />&nbsp;'._ENABLED.'&nbsp&nbsp;<input type="radio" name="GSfailcounts" value="0"'.$sel2.' />&nbsp;'._DISABLED.'</td></tr>';

	echo '<tr><td align="center" colspan="2"><hr /><input type="hidden" name="old_id" value="'.$row['server_id'].'" /><input type="hidden" name="mode" value="GSUpdate" />'
		.'<input type="submit" value="'._GSUPDATE.'" /><br /><br /></td>'
		.'</tr>';
	if ($row['failstring']) {
		if (strstr($row['failstring'], "|")) {
			$fail = explode("|", $row['failstring']);
		} else {
			$fail[0] = $row['failstring'];
		}
		foreach ($fail as $k => $v) {
			$GSfails .= date("D M j g:i:s A T", $v).'<br />';
		}
		echo '<tr><td valign="top">'._GSFAILTIMES.'<br /><a href="".adminlink("&mode=GSMaint&do=clearf&server_id='.$row['server_id'].'&ok=0")."">'._CLEARF.'</a></td><td>'.$GSfails.'</td></tr>';
		echo '<tr><td colspan="2">'._GSFAILTIMESEX.'</td></tr>';
	}
	echo '</table></td></tr></table>';
	CloseTable();
	include('footer.php');
}

/**********************************************************************
GSupdate - Saves info to db for both Add & Update
Parameters: $old_id, $server_id, $GSlongname, $GSengine,
$GSgame, $GSip, $GSport, $GSactive, $GSfailcounts
$old_id			the current server_id incase it needs to be changed
$server_id		the server_id to save the new data to
$GSlongname		the name of the server
$GSengine		the engine type sent to gameq when querying
$GSgame			the icon displayed in the server list
$GSip			the IP address sent to gameq when querying
$GSport			the port sent to gameq when querying
$GSactive		status flag 0=inactive 1=active 2=deactivated
$GSfailcounts	if set to 1, the server will be deactivated if it fails
**********************************************************************/
function GSupdate() {
	global $prefix, $db;
	$gamei = substr($_POST['GSgame'], 0, strlen($_POST['GSgame'])-4);
	if ($_POST['old_id']){
		if ($_POST['GSlongname']!='' AND $_POST['GSip']!='' AND $_POST['GSport']!='') {
			$sql = "UPDATE ".$prefix."_gameservers set longname='".htmlprepare($_POST['GSlongname'])."', server_id='".$_POST['server_id']."', game='".$gamei."', engine='".$_POST['GSengine']."', ip='".$_POST['GSip']."', port='".$_POST['GSport']."', active='".$_POST['GSactive']."', failcounts='".$_POST['GSfailcounts']."' where server_id='".$_POST['old_id']."'";
			$db->sql_query($sql);
		} else {
			url_redirect(adminlink("&mode=GSEdit&incomplete=1&server_id=".$_POST['server_id']."&GSlongname=".$_POST['GSlongname']."&GSgame=".$_POST['GSgame']."&GSengine=".$_POST['GSengine']."&GSip=".$_POST['GSip']."&GSport=".$_POST['GSport']."&GSactive=".$_POST['GSactive']."&GSfailcounts=".$_POST['GSfailcounts']));
			exit;
		}
	} else {
		if ($_POST['GSlongname']!='' AND $_POST['GSip']!='' AND $_POST['GSport']!='') {
			$result = $db->sql_query("SELECT weight FROM ".$prefix."_gameservers ORDER BY weight DESC",false,__FILE__,__LINE__);
			list($weight) = $db->sql_fetchrow($result);
			$weight++;
			$sql = "INSERT INTO ".$prefix."_gameservers VALUES (NULL, '$weight','$gamei', '".$_POST['GSengine']."', '".addslashes($_POST['GSlongname'])."', '".$_POST['GSip']."', '".$_POST['GSport']."', '".$_POST['GSactive']."', '', '".$_POST['GSfailcounts']."')";
			$db->sql_query($sql);
			if (!isset($_POST['server_id'])) {
				$sql = "select server_id from ".$prefix."_gameservers where longname='".$_POST['GSlongname']."' and engine='".$_POST['GSengine']."' and ip='".$_POST['GSip']."' and port='".$_POST['GSport']."'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				$_POST['server_id'] = $row['server_id'];
			}
		} else {
		url_redirect(adminlink("&mode=GSAdd&incomplete=1&GSlongname=".$_POST['GSlongname']."&GSgame=".$_POST['GSgame']."&GSengine=".$_POST['GSengine']."&GSip=".$_POST['GSip']."&GSport=".$_POST['GSport']."&GSactive=".$_POST['GSactive']."&GSfailcounts=".$_POST['GSfailcounts']));
			exit;
		}
	}
	url_redirect(adminlink("&mode=gameservers"));
}

/**********************************************************************
GSadd - Builds add form page
Parameters: $incomplete, $GSlongname, $GSengine, $GSgame,
$GSip, $GSport, $GSactive, $GSfailcounts
$incomplete		if set, then an error message is displayed
$GSlongname		the name of the server
$GSengine		the engine type sent to gameq when querying
$GSgame			the icon displayed in the server list
$GSip			the IP address sent to gameq when querying
$GSport			the port sent to gameq when querying
$GSactive		status flag 0=inactive 1=active 2=deactivated
$GSfailcounts	if set to 1, the server will be deactivated if it fails
**********************************************************************/
function GSadd() {
	GLOBAL $module_name;
	GSNav(2);
	OpenTable();
	echo '<center><font class="option"><b>'._ADDSERVER.'</b></font></center><br />'
	.'<form action="'.adminlink('&amp;mode=GSUpdate').'" name="GSform" method="post">'
	.'<table width="100%" border="0"><tr>';
		if ($_GET['incomplete'] == 1) {
		echo '<td align="center" colspan="2">'._GSINCOMPLETE.'</td></tr>';
		}
	echo '<td align="center" valign="top"><hr /><b>-&nbsp;'._GSENGINE.'&nbsp;-</b><hr />'.EngineList(1, $_GET['GSengine']).'</td>';
	echo '<td align="center" valign="top"><hr /><b>-&nbsp;'._GSGAME.'&nbsp;-</b><hr />';
	$path1 = explode ("/", 'modules/'.$module_name.'/images/');
	$path = "$path1[0]/$path1[1]/$path1[2]/";
	$handle=opendir($path);
	while ($file = readdir($handle)) {
		if ( (ereg("^([_0-9a-zA-Z]+)([.]{1})([_0-9a-zA-Z]{3})$",$file)) AND $file != "gq_logo.png" AND $file != "index.htm") {
		$ilist .= "$file ";
		}
	}
	closedir($handle);
	$ilist = explode(" ", $ilist);
	sort($ilist);
	for ($i=0; $i < sizeof($ilist); $i++) {
		if($ilist[$i]!="" AND $ilist[$i]!="noicon.gif") {
			echo "<img border=\"0\" src=\"$path$ilist[$i]\" OnClick=\"javascript:document.GSform.GSgame.value = '$ilist[$i]'\" alt='$ilist[$i]' />\n";
			$glist .= "<option name=\"GSgame\" value=\"$ilist[$i]\">$ilist[$i]</option>\n";
		}
	}
	echo "<br /><br />or select from menu<br /><br /><select name=\"GSgame\" id=\"GSgame\">\n<option name=\"GSgame\" value=\"noicon.gif\" SELECTED>noicon.gif</option>\n".$glist."</select><br /><br />";

	echo '<hr /><center><b>-&nbsp;Details&nbsp;-</b></center><hr />';
	echo '<table width="100%" border="0"><tr><td align="center"><b>'._GSNAME.'</b><br />';
	echo '<input type="text" name="GSlongname" value="'.htmlprepare($_GET['GSlongname']).'" size="25" /><br /></td></tr>'
		.'<tr><td align="center"><b>'._GSADDRESS.'</b><br />';
	echo '<input type="text" name="GSip" value="'.$_GET['GSip'].'" size="15" />&nbsp;:&nbsp;';
	echo '<input type="text" name="GSport" id="GSport" value="'.$_GET['GSport'].'" size="5" /><br /></td></tr>';
		if ($_GET['GSactive']) { $sel1=""; $sel2=" CHECKED"; } else { $sel1=" CHECKED"; $sel2=""; }
	echo '<tr><td align="center" valign="middle"><b>'._STATUS.'</b><br />';
	echo '<input type="radio" name="GSactive" value="1"'.$sel1.'>&nbsp;'._ACTIVE.'&nbsp&nbsp;<input type="radio" name="GSactive" value="0"'.$sel2.' />&nbsp;'._INACTIVE.'<br /></td></tr>';
		if ($_GET['GSfailcounts']) { $sel1=""; $sel2=" CHECKED"; } else { $sel1=" CHECKED"; $sel2=""; }
	echo '<tr><td align="center" valign="middle" nowrap="nowrap"><b>'._GSFAILA.'</b><br />';
	echo '<input type="radio" name="GSfailcounts" value="1"'.$sel1.' />&nbsp;'._ENABLED.'&nbsp&nbsp;<input type="radio" name="GSfailcounts" value="0"'.$sel2.' />&nbsp;'._DISABLED.'<br /></td></tr></table>'
		.'<hr /><input type="hidden" name="mode" value="GSUpdate"><input type="submit" value="'._ADDSERVER.'" /></form></td></tr></table>';
	CloseTable();
	include('footer.php');
}

/**********************************************************************
EngineList - Builds Engine list on add/edit forms uning gameqs config file
Parameters: $jsflag, $GSengine
$jsflag		if set, then javascript is enabled (used in add form)
$GSengine	i dont remember why this is passed here but it is
**********************************************************************/
function EngineList($jsflag, $GSengine) {
	GLOBAL $module_name;
	include('modules/'.$module_name.'/gameq/class.gameq.cfg.php');
		if ($jsflag) {
		$E .= '<select name="GSengine" id="GSengine" size="40" onChange="this.form.GSport.value = this.options[this.selectedIndex].id; this.form.GSlongname.value = this.options[this.selectedIndex].title;">';
		} else {
		$E .= '<select name="GSengine" size="40">';
		}
	foreach ($cfg_type as $k => $v) {
		if ($GSengine==$k) { $sel='selected'; } else { $sel=''; }
		$g = explode("/", $v);
		$E .= '<option name="GSengine" value="'.$k.'" id="'.$g[1].'" title="'.$g[0].'" '.$sel.'>'.$g[0].'</option>';
		}
	$E .= '</select>';
	return $E;
}

function GSindex() {
	global $prefix, $db, $module_name;
	GSNav(1);
	OpenTable();
/**********************************************************************
Table sorting code written by Erik Arvidsson
http://webfx.eae.net/dhtml/tablesort/tablesort.html
**********************************************************************/
	echo '<a name="top"></a>'
		.'<script type="text/javascript" src="modules/'.$module_name.'/tablesort.js"></script>'
		.'<link rel="STYLESHEET" type="text/css" href="modules/'.$module_name.'/tablesort.css">'
		.'<table width="100%" border="0"><thead bgcolor="'.$bgcolor2.'"><tr>'
		.'<td width="40" align="left" colspan="2" type="Number" onclick="sortColumn(event)"><b>'._GSIDNUM.'</b></td>'
		.'<td width="32" align="center"><b>'._GSGAME.'</b></td>'
		.'<td width="30" align="center"><b>'._GSENGINE.'</b></td>'
		.'<td width="100%" align="left" type="CaseInsensitiveString" onclick="sortColumn(event)"><b>'._GSNAME.'</b></td>'
		.'<td width="90" align="center" type="CaseInsensitiveString" onclick="sortColumn(event)"><b>'._GSADDRESS.'</b></td>'
		.'<td width="60" align="center"><b>'._FUNCTIONS.'</b></td>'
		.'<td width="40" align="center"><b>'._STATUS.'</b></td></tr></thead><tbody>';
	$result = $db->sql_query("select longname, server_id, weight, game, engine, ip, port, active, failstring, failcounts from ".$prefix."_gameservers order by weight");
	while(list($GSlongname, $server_id, $weight, $GSgame, $GSengine, $GSip, $GSport, $GSactive, $GSfailstring, $GSfailcounts) = $db->sql_fetchrow($result)) {
		echo '<td align="center"><a name="'.$server_id.'"></a>'.$weight.'</td>';
		echo '<td align="center">';
			if ($weight!=1) {
				echo '<a href="'.adminlink("&amp;mu=$server_id").'"><img src="images/up.gif" border="0" /></a>&nbsp;';
			}
			list($maxweight) = $db->sql_ufetchrow('SELECT weight FROM '.$prefix."_gameservers ORDER BY weight DESC LIMIT 0,1",SQL_NUM,__FILE__,__LINE__);
			if ($weight!=$maxweight) {
		echo '<a href="'.adminlink("&amp;md=$server_id").'"><img src="images/down.gif" border="0" /></a>&nbsp;';
			}
		echo '</td>'
		.'<td align="center"><img src="modules/'.$module_name.'/images/'.$GSgame.'.gif" /></td>'
		.'<td align="center">'.$GSengine.'</td>'
		.'<td align="left"><a href="'.getlink("&amp;do=query&amp;server_id=".$server_id."").'">'.$GSlongname.'</a></td>'
		.'<td align="right">'.$GSip.':'.$GSport,'</td>'
		.'<td align="right" nowrap="nowrap">'
		.'<a href="'.adminlink("&amp;mode=GSEdit&amp;server_id=$server_id").'">'._GSEDIT.'</a><br />'
		.'<a href="'.adminlink("&amp;mode=GSDelete&amp;server_id=$server_id&amp;ok=0").'">'._DELETE.'</a><br />'
		.'<a href="'.adminlink("&amp;mode=GSMaint&amp;do=clearf&amp;server_id=$server_id&amp;ok=0").'">'._CLEARF.'</a><br />'
		.'</td><td align="right" nowrap="nowrap">'
		.'<a href="'.adminlink("&amp;mode=GSStatus&amp;server_id=$server_id&amp;GSactive=$GSactive").'">';
			switch ($GSactive) {
				case 1:
					if ($GSfailstring) {
					$fcount = count(explode("|", $GSfailstring));
					}
					if ($fcount) {
						echo '<img src="modules/'.$module_name.'/images/admin/gameserversy.png" border="0" hspace="5" />';
					} else {
						echo '<img src="modules/'.$module_name.'/images/admin/gameserversg.png" border="0" hspace="5" />';
					}
					unset($fcount);
				break;
				case 2:
					echo '<img src="modules/'.$module_name.'/images/admin/gameserversx.png" border="0" hspace="5" />';
				break;
				case 0:
					echo '<img src="modules/'.$module_name.'/images/admin/gameserversd.png" border="0" hspace="5" />';
				break;
			}
		echo '</a></td></tr>';
	}
	echo '</tbody></table>';
	CloseTable();
	include('footer.php');
}

function GSdel() {
	global $prefix, $db;
	$server_id = $_GET['server_id'];
	$ok = $_GET['ok'];
	if ($ok==1) {
		$db->sql_query('delete from '.$prefix.'_gameservers where server_id='.$_GET['server_id']);
		$db->sql_query('delete from '.$prefix.'_gameservers_statcache where server_id='.$_GET['server_id']);
	url_redirect(adminlink());
	} else {
	GSNav(0);
	OpenTable();
	echo '<center>'._GSDELETE.'<br /><br />'
		.'[ <a href="'.adminlink().'">'._NO.'</a> | <a href="'.adminlink("&amp;mode=GSDelete&amp;server_id=".$_GET['server_id']."&amp;ok=1").'">'._YES.'</a> ]</center><br /><br />';
	CloseTable();
	include('footer.php');
	}
}

function GSstatus() {
	global $prefix, $db;
	if ($_GET['GSactive']!='' AND $_GET['server_id']!='') {
		switch ($_GET['GSactive']) {
		case 1:
			$db->sql_query("UPDATE ".$prefix."_gameservers set  active='0' where server_id='".$_GET['server_id']."'");
			url_redirect(adminlink());
		break;
		case 2:
			GSNav(0);
			OpenTable();
			echo '<center>'._GSREACTIVATE.'<br /><br />'
			.'[ <a href="'.adminlink().'">'._NO.'</a> | <a href="'.adminlink("&amp;mode=GSStatus&amp;server_id=".$_GET['server_id']."&amp;GSactive=3").'">'._YES.'</a> | <a href="'.adminlink("&amp;mode=GSStatus&amp;server_id=".$_GET['server_id']."&amp;GSactive=4").'">'._REACTNOCLEAR.'</a> | <a href="'.adminlink("&amp;mode=GSEdit&amp;server_id=".$_GET['server_id']."").'">'._GSEDIT.'</a> ]</center><br /><br />';
			CloseTable();
			include('footer.php');
		break;
		case 3:
			$db->sql_query("UPDATE ".$prefix."_gameservers set active='1', failstring='0' where server_id='".$_GET['server_id']."'");
			url_redirect(adminlink());
		break;
		case 4:
			$db->sql_query("UPDATE ".$prefix."_gameservers set active='1' where server_id='".$_GET['server_id']."'");
			url_redirect(adminlink());
		break;
		case 0:
			$db->sql_query("UPDATE ".$prefix."_gameservers set active='1', failstring='0' where server_id='".$_GET['server_id']."'");
			url_redirect(adminlink());
		break;
		}
    }
}

function GSconfig() {
	global $prefix, $db;
	GSNav(3);
	OpenTable();
	echo '<table align="center" border="1" cellpadding="5">';
	echo '<form action="'.adminlink('&amp;mode=GSConfig').'" name="GSform" method="post">';
		if ($_POST['GSupdate'] == '1') {
		$sql = "UPDATE ".$prefix."_gameservers_config set GSlisttype='".$_POST['GSlisttype']."', GSblisttype='".$_POST['GSblisttype']."', GSlistchg='".$_POST['GSlistchg']."', GSlistname='".$_POST['GSlistname']."', GSblistname='".$_POST['GSblistname']."', GSdownloads='".$_POST['GSdownloads']."', GScachetime='".$_POST['GScachetime']."', GSbcachetime='".$_POST['GSbcachetime']."', GSdebug='".$_POST['GSdebug']."', GSTags='".$_POST['GSTags']."', GSfailcount='".$_POST['GSfailcount']."', GSfailtime='".$_POST['GSfailtime']."', GSemail='".$_POST['GSemail']."', GSremote='".$_POST['GSremote']."', GSremotepath='".addslashes($_POST['GSremotepath'])."', GScode='".addslashes($_POST['GScode'])."'";
			if ($db->sql_query($sql)) {
				echo '<tr><td colspan="3">'._GSCOMPLETE.'</td></tr>';
			} else {
			echo _GSDBERR;
			}
		}
	$result = $db->sql_query("select * from ".$prefix."_gameservers_config");
	$row = $db->sql_fetchrow($result);
	echo '<tr><td valign="middle" align="right">'._GSADVTYPE.'</td><td valign="top">';
	$GSlisttypes = array(
		'alist'=>_GSLIST,
		'ailist'=>_GSLISTI,
		'list'=>_GSSLIST,
		'ilist'=>_GSSSLIST,
		'block2'=>_GSBLOCK2,
		'block3'=>_GSBLOCK3,
		'block4'=>_GSBLOCK4,
		'block2M'=>_GSBLOCK2M,
		'block3M'=>_GSBLOCK3M,
		'block4M'=>_GSBLOCK4M
	);
	echo _INLIST.' '.select_box('GSlisttype', $row['GSlisttype'], $GSlisttypes).'<br />';
	$GSblisttypes = array(
		'alist'=>_GSLIST,
		'ailist'=>_GSLISTI,
		'list'=>_GSSLIST,
		'ilist'=>_GSSSLIST
	);
	echo _INBLOCK.' '.select_box('GSblisttype', $row['GSblisttype'], $GSblisttypes).'<br />';
	echo '</td></tr>';
	switch ($row['GSlistchg']) { case 0: $sel1=" CHECKED"; $sel2=""; $sel3=""; break; case 1: $sel1=""; $sel2=" CHECKED"; $sel3=""; break; case 2: $sel1=""; $sel2=""; $sel3=" CHECKED"; break;	}
	echo '<tr><td valign="top" align="right">'._GSLISTCHG.'</td><td><input type="radio" name="GSlistchg" value="0"'.$sel1.' />'._DISABLED.' <input type="radio" name="GSlistchg" value="1"'.$sel2.' />'._GSSTYPE.' <input type="radio" name="GSlistchg" value="2"'.$sel3.' />'._GSATYPE._ENABLED.'</td></tr>';
		if ($row['GSlistname']) { $sel1=" CHECKED";} else { $sel1="";}
		if ($row['GSblistname']) { $sel2=" CHECKED";} else { $sel2="";}
	echo '<tr><td valign="top" align="right">'._GSLISTNAME.'</td></td><td valign="top"><input type="checkbox" name="GSlistname" value="1"'.$sel1.' />'._INLIST.' <input type="checkbox" name="GSblistname" value="1"'.$sel2.' /> '._INBLOCK.'</td></tr>';
		if ($row['GSdownloads']) { $sel1=""; $sel2=" CHECKED"; } else { $sel1=" CHECKED"; $sel2=""; }
	echo '<tr><td valign="top" align="right">'._GSDOWNLOADS.'</td><td><input type="radio" name="GSdownloads" value="0"'.$sel1.' />'._DISABLED.' <input type="radio" name="GSdownloads" value="1"'.$sel2.' />'._ENABLED.'</td></tr>';
		if ($row['GScachetime']) { $sel1="";} else { $sel1=" SELECTED";}
	echo '<tr><td valign="top" align="right">'._GSCACHETIME.'</td><td>';
	echo _INLIST.' <select name="GScachetime" />';
		for ($m=1; $m < 31; $m++) {
			if ($row['GScachetime']==$m) { $sel2=" SELECTED";} else { $sel2="";}
			echo '<option value="'.$m.'"'.$sel2.'>'.$m.' '._GSMINUTES.'</option>';
			}
	echo '</select><br />';
		if ($row['GSbcachetime']) { $sel1="";} else { $sel1=" SELECTED";}
	echo _INBLOCK.'<select name="GSbcachetime" />';
		for ($m=1; $m < 61; $m++) {
			if ($row['GSbcachetime']==$m) { $sel2=" SELECTED";} else { $sel2="";}
			echo '<option value="'.$m.'"'.$sel2.'>'.$m.' '._GSMINUTES.'</option>';
		}
	echo '</select></td></tr>';
		if ($row['GSdebug']) { $sel1=""; $sel2=" CHECKED"; } else { $sel1=" CHECKED"; $sel2=""; }
	echo '<tr><td valign="top" align="right">'._GSDEBUG.'</td><td><input type="radio" name="GSdebug" value="0"'.$sel1.' />'._DISABLED.' <input type="radio" name="GSdebug" value="1"'.$sel2.' />'._ENABLED.'</td></tr>';
		if ($row['GSTags']) { $sel1=" CHECKED"; $sel2=""; } else { $sel1=""; $sel2=" CHECKED"; }
	echo '<tr><td valign="top" align="right">'._GSTAGS.'</td><td><input type="radio" name="GSTags" value="1"'.$sel1.' />'._DISABLED.' <input type="radio" name="GSTags" value="0"'.$sel2.' />'._ENABLED.'</td></tr>';
	echo '<tr><td valign="top" align="right">'._GSFAIL.'</td><td>';
	echo '<select name="GSfailcount" />';
		for ($m=1; $m < 101; $m++) {
			if ($m==1) {
			echo '<option value="0"'.$sel1.'>'._DISABLED.'</option>';
			} else {
				if ($row['GSfailcount']==$m) { $sel2=" SELECTED";} else { $sel2="";}
				echo '<option value="'.$m.'"'.$sel2.'>'.$m.'</option>';
			}
		}
	echo '</select>';
		if ($row['GSfailtime']) { $sel1="";} else { $sel1=" SELECTED";}
		echo ' '._GSFAILT.' <select name="GSfailtime" />';
		for ($m=0; $m < 73; $m++) {
			if ($m==0) {
				echo '<option value="0"'.$sel1.'>'._DISABLED.'</option>';
			} else {
			if ($row['GSfailtime']==$m) { $sel2=" SELECTED";} else { $sel2="";}
				echo '<option value="'.$m.'"'.$sel2.'>'.$m.'</option>';
			}
	 	}
	echo '</select> '._GSHOURS.'</td></tr>';
	echo '<tr><td valign="top" align="right">'._GSEMAIL.'</td><td align="left"><input type="text" name="GSemail" size="30" maxlength="128" value="'.$row['GSemail'].'" /></td></tr>';
		if ($row['GSremote']) { $sel1=""; $sel2=" CHECKED"; } else { $sel1=" CHECKED"; $sel2=""; }
	echo '<tr><td valign="top" align="right">'._GSREM.'</td><td align="left"><input type="radio" name="GSremote" value="0"'.$sel1.' />'._DISABLED.' <input type="radio" name="GSremote" value="1"'.$sel2.' />'._ENABLED.'</td></tr>';
	echo '<tr><td valign="top" align="right">'._GSREMEX.'</td><td align="right">'._GSREMPATH.' <input type="text" name="GSremotepath" size="66" maxlength="128" value="'.$row['GSremotepath'].'" /><br />'._GSREMCODE.' <input type="text" name="GScode" size="66" maxlength="64" value="'.$row['GScode'].'" /></td></tr>';
	echo '<tr><td align="center" colspan="3">';
	echo '<input type="hidden" name="GSupdate" value="1" /><input type="submit" value="'._UPDATECONFIG.'" /></form>';
	echo '</td></tr></table>';
	CloseTable();
}

function GSNav($list) {
	GLOBAL $module_name;
	require_once('header.php');
	GraphicAdmin('_AMENU9');
	OpenTable();
	echo '<table width="100%"><tr><th colspan="4"><b>'._GSVER.'</b></th></tr><tr>';
		if ($list!='2'){
			echo '<td align="center"><font class="option"><a href="'.adminlink('&amp;mode=GSAdd').'"><img src="modules/'.$module_name.'/images/admin/gameserversadd.gif" border="0" hspace="10"alt="Add Server" /><br />'._ADDSERVER.'</a></font></td>';
		}
		if ($list!='1'){
			echo '<td align="center"><font class="option"><a href="'.adminlink('&amp;mode=gameservers').'"><img src="modules/'.$module_name.'/images/admin/gameserverslist.gif" border="0" hspace="10" alt="GameServer" /><br />'._SERVERLIST.'</a></font></td>';
		}
		if ($list!='3'){
			echo '<td align="center"><font class="option"><a href="'.adminlink('&amp;mode=GSConfig').'"><img src="modules/'.$module_name.'/images/admin/gameserversconfig.gif" border="0" hspace="10" alt="Config" /><br />'._GSCONFIG.'</a></font></td>';
		}
		if ($list!='4'){
			echo '<td align="center"><font class="option"><a href="'.adminlink('&amp;mode=GSMaint').'"><img src="modules/'.$module_name.'/images/admin/gameserversmaint.gif" border="0" hspace="10"alt="Maintance" /><br />'._GSMAINT.'</a></font></td>';
		}
	echo '</tr>';
		if ($list=='1'){
			echo '<tr><td align="left" colspan="4"><font class="option">'._GSKEY.'<br /><img src="modules/'.$module_name.'/images/admin/gameserversg.png" border="0" width="18" height="18" hspace="5" />&nbsp;'._GSTATG.'<br /><img src="modules/'.$module_name.'/images/admin/gameserversy.png" border="0" width="18" height="18" hspace="5" />&nbsp;'._GSTATY.'<br /><img src="modules/'.$module_name.'/images/admin/gameserversx.png" border="0" width="18" height="18" hspace="5" />&nbsp;'._GSTATX.'<br /><img src="modules/'.$module_name.'/images/admin/gameserversd.png" border="0" width="18" height="18" hspace="5" />&nbsp;'._GSTATD.'<br /></font></td></tr>';
		}
	echo '</table>';
	CloseTable();
	echo '<br />';
}

function GSmaint() {
	global $prefix, $db;
	$sql = "select * from ".$prefix."_gameservers_config";
	$result = $db->sql_query($sql);
	$row = $db->sql_fetchrow($result);
	if ($_GET['do']!="gsdel"){
	GSNav(4);
	} else {
    include('header.php');
	GraphicAdmin('_AMENU9');
	}
	OpenTable();
	echo '<table align="center" border="0" cellpadding="5">';
	switch($_GET['do']){
		case 'clearf':
		if ($_GET['ok']) {
			if ($_GET['server_id']) {
			$db->sql_query("UPDATE `".$prefix."_gameservers` SET `failstring`='' WHERE `server_id`='".$_GET['server_id']."'");
			url_redirect(adminlink());
			} else {
			$db->sql_query("UPDATE `".$prefix."_gameservers` SET `failstring`=''");
			url_redirect(adminlink("&amp;mode=GSMaint"));
			}
		} else {
			if ($_GET['server_id']) {
				echo '<tr><td><center>'._CLEARFEX1.'<br />'._YOUSURE.'<br />[&nbsp;<a href='.adminlink("&amp;mode=GSMaint&do=clearf&server_id=".$_GET['server_id']."&ok=1").'>'._YES.'</a>&nbsp;|&nbsp;<a href='.adminlink("&amp;mode=GSMaint").'">'._NO.'</a>&nbsp;]</center></td></tr>';
			} else {
				echo '<tr><td><center>'._CLEARFEX.'<br />'._YOUSURE.'<br />[&nbsp;<a href='.adminlink("&amp;mode=GSMaint&do=clearf&ok=1").'>'._YES.'</a>&nbsp;|&nbsp;<a href="'.adminlink("&amp;mode=GSMaint").'">'._NO.'</a>&nbsp;]</center></td></tr>';
			}
		}
		break;
		case 'clears':
		if ($_GET['ok']) {
		$db->sql_query("TRUNCATE TABLE `".$prefix."_gameservers_statcache`");
		url_redirect(adminlink("&amp;mode=GSMaint"));
		} else {
		echo '<tr><td><center>'._CLEARSEX.'<br />'._YOUSURE.'<br />[&nbsp;<a href="'.adminlink("&amp;mode=GSMaint&do=clears&ok=1").'">'._YES.'</a>&nbsp;|&nbsp;<a href="'.adminlink("&amp;mode=GSMaint").'">'._NO.'</a>&nbsp;]</center></td></tr>';
		}
		break;
		case 'activa':
		if ($_GET['ok']) {
		$db->sql_query("UPDATE `".$prefix."_gameservers` SET `active`='1'");
		url_redirect(adminlink("&amp;mode=GSMaint"));
		} else {
		echo '<tr><td><center>'._ACTIVAEX.'<br />'._YOUSURE.'<br />[&nbsp;<a href="'.adminlink("&amp;mode=GSMaint&do=activa&ok=1").'">'._YES.'</a>&nbsp;|&nbsp;<a href="'.adminlink("&amp;mode=GSMaint").'">'._NO.'</a>&nbsp;]</center></td></tr>';
		}
		break;
		case 'dactva':
		if ($_GET['ok']) {
		$db->sql_query("UPDATE `".$prefix."_gameservers` SET `active`='0'");
		url_redirect(adminlink("&amp;mode=GSMaint"));
		} else {
		echo '<tr><td><center>'._DACTVAEX.'<br />'._YOUSURE.'<br />[&nbsp;<a href="'.adminlink("&amp;mode=GSMaint&do=dactva&ok=1").'">'._YES.'</a>&nbsp;|&nbsp;<a href="'.adminlink("&amp;mode=GSMaint").'">'._NO.'</a>&nbsp;]</center></td></tr>';
		}
		break;
		case 'export':
			$result = $db->sql_query("select longname, game, engine, ip, port, active, failcounts from ".$prefix."_gameservers order by server_id");
			echo '<pre>';
			while(list($GSlongname, $GSgame, $GSengine, $GSip, $GSport, $GSactive, $GSfailcounts) = $db->sql_fetchrow($result)) {
				echo str_replace(",", "*com*", $GSlongname).", ".$GSgame.", ".$GSengine.", ".$GSip.", ".$GSport.", ".$GSactive.", ".$GSfailcounts."\n";
			}
			echo '</pre>';
		break;
		case 'import':
			if ($_GET['ok']) {
				$rows = explode("\n", $_GET['ok']);
				foreach ($rows as $v) {
					$col = explode(",", $v);
					if (count($col)==7) {
						$db->sql_query("INSERT INTO ".$prefix."_gameservers VALUES (NULL, '".str_replace(" ", "", $col[1])."', '".str_replace(" ", "", $col[2])."', '".str_replace("*com*", ",", addslashes($col[0]))."', '".str_replace(" ", "", $col[3])."', '".str_replace(" ", "", $col[4])."', '".str_replace(" ", "", $col[5])."', '', '".str_replace(" ", "", $col[6])."')");
					}
				$i++;
				}
				echo $i._IMPORTED;
			} else {
				echo '<form action="admin.php" name="importform" method="post">';
				echo '<textarea name="ok" rows="30" cols="60"></textarea>';
				echo '<input type="hidden" name="mode" value="GSMaint" />';
				echo '<input type="hidden" name="do" value="import" />';
				echo '<br /><center><input type="Submit" value="'._IMPORT.'" /></center>';
				echo '</form>';
			}
		break;
		case 'rdeact':
		if ($_GET['ok']) {
		$db->sql_query("DELETE FROM `".$prefix."_gameservers` WHERE `active`='2'");
		url_redirect(adminlink("&amp;mode=GSMaint"));
		} else {
		echo '<tr><td><center>'._RDACTEX.'<br />'._YOUSURE.'<br />[&nbsp;<a href="'.adminlink("&amp;mode=GSMaint&do=rdeact&ok=1").'">'._YES.'</a>&nbsp;|&nbsp;<a href="'.adminlink("&amp;mode=GSMaint").'">'._NO.'</a>&nbsp;]</center></td></tr>';
		}
		break;
		case 'rinact':
		if ($_GET['ok']) {
		$db->sql_query("DELETE FROM `".$prefix."_gameservers` WHERE `active`='0'");
		url_redirect(adminlink("&amp;mode=GSMaint"));
		} else {
		echo '<tr><td><center>'._RIACTEX.'<br />'._YOUSURE.'<br />[&nbsp;<a href="'.adminlink("&amp;mode=GSMaint&do=rinact&ok=1").'">'._YES.'</a>&nbsp;|&nbsp;<a href="'.adminlink("&amp;mode=GSMaint").'">'._NO.'</a>&nbsp;]</center></td></tr>';
		}
		break;
		default:
		echo '<tr><td valign="top" nowrap="nowrap"><a href="'.adminlink("&amp;mode=GSMaint&do=clearf").'">'._CLEARF.'</a></td><td>'._CLEARFEX.'</td></tr>';
		echo '<tr><td valign="top" nowrap="nowrap"><a href="'.adminlink("&amp;mode=GSMaint&do=clears").'">'._CLEARS.'</a></td><td>'._CLEARSEX.'</td></tr>';
		echo '<tr><td valign="top" nowrap="nowrap"><a href="'.adminlink("&amp;mode=GSMaint&do=activa").'">'._ACTIVA.'</a></td><td>'._ACTIVAEX.'</td></tr>';
		echo '<tr><td valign="top" nowrap="nowrap"><a href="'.adminlink("&amp;mode=GSMaint&do=dactva").'">'._DACTVA.'</a></td><td>'._DACTVAEX.'</td></tr>';
		echo '<tr><td valign="top" nowrap="nowrap"><a href="'.adminlink("&amp;mode=GSMaint&do=export").'">'._EXPORT.'</a></td><td>'._EXPORTEX.'</td></tr>';
		echo '<tr><td valign="top" nowrap="nowrap"><a href="'.adminlink("&amp;mode=GSMaint&do=import").'">'._IMPORT.'</a></td><td>'._IMPORTEX.'</td></tr>';
		echo '<tr><td valign="top" nowrap="nowrap"><a href="'.adminlink("&amp;mode=GSMaint&do=rdeact").'">'._RDACT.'</a></td><td>'._RDACTEX.'</td></tr>';
		echo '<tr><td valign="top" nowrap="nowrap"><a href="'.adminlink("&amp;mode=GSMaint&do=rinact").'">'._RIACT.'</a></td><td>'._RIACTEX.'</td></tr>';
		break;
	}
	echo '</table>';
	CloseTable();
	include('footer.php');
}
if (isset($_GET['mu'])) {
	$server_id = intval($_GET['mu']);
	list($weight) = $db->sql_ufetchrow('SELECT weight FROM '.$prefix."_gameservers WHERE server_id=$server_id",SQL_NUM,__FILE__,__LINE__);
	if ($weight > 1) {
		$result = $db->sql_query('UPDATE '.$prefix."_gameservers SET weight=weight+1 WHERE weight=".($weight-1),false,__FILE__,__LINE__);
		$result = $db->sql_query('UPDATE '.$prefix."_gameservers SET weight=weight-1 WHERE server_id=$server_id",false,__FILE__,__LINE__);
	}
	url_redirect(adminlink());
} else if (isset($_GET['md'])) {
	$server_id = intval($_GET['md']);
	list($weight) = $db->sql_ufetchrow('SELECT weight FROM '.$prefix."_gameservers WHERE server_id=$server_id",SQL_NUM,__FILE__,__LINE__);
	list($maxweight) = $db->sql_ufetchrow('SELECT weight FROM '.$prefix."_gameservers ORDER BY weight DESC LIMIT 0,1",SQL_NUM,__FILE__,__LINE__);
	if ($weight < $maxweight) {
		$result = $db->sql_query('UPDATE '.$prefix."_gameservers SET weight=weight-1 WHERE weight=".($weight+1),false,__FILE__,__LINE__);
		$result = $db->sql_query('UPDATE '.$prefix."_gameservers SET weight=weight+1 WHERE server_id=$server_id",false,__FILE__,__LINE__);
	}
	url_redirect(adminlink());
} else if ( isset($HTTP_POST_VARS['mode']) || isset($HTTP_GET_VARS['mode']) ) {
	$mode = ( isset($HTTP_POST_VARS['mode']) ) ? $HTTP_POST_VARS['mode'] : $HTTP_GET_VARS['mode'];
	$mode = htmlspecialchars($mode); 
} else {
	$mode = '';
} 
$mode = isset($_POST['mode']) ? $_POST['mode'] : (isset($_GET['mode']) ? $_GET['mode']:'');

switch ($mode) {
	case 'gameservers':
	GSindex();
	break;
	case 'GSStatus':
	GSstatus();
	break;
	case 'GSEdit':
	GSedit();
	break;
	case 'GSAdd':
	GSadd();
	break;
	case 'GSUpdate':
	GSupdate();
	break;
	case 'GSDelete':
	GSdel();
	break;
	case 'GSOrder':
	GSorder();
	break;
	case 'GSMaint':
	GSmaint();
	break;
	case 'GSConfig':
	GSconfig();
	break;
	default:
	GSindex();
	break;
}
?>