<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/IRCChat/modules/IRCChat/index.php,v $
  $Revision: 9.1 $
  $Author: djmaze $
  $Date: 2005/01/13 04:02:52 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }
$pagetitle .= sprintf(_IRC_CHATROOM, '');
require_once('header.php');
OpenTable();
// port 6660

$result = $db->sql_query('SELECT network, server FROM '.$prefix.'_ircservers WHERE server_id=\''.$MAIN_CFG['IRCChat']['network'].'\'');
list($network, $server) = $db->sql_fetchrow($result);
$db->sql_freeresult($result);

echo '<form name="irc"><table width="100%">
<tr>
<td><h1>'.sprintf(_IRC_CHATROOM, $sitename).'</h1>'.sprintf(_IRC_MESSAGE, $MAIN_CFG['IRCChat']['channel'], $network, $server).'</td>
<td rowspan="3"><a href="http://www.pjirc.com/" target="_blank"><img src="modules/'.$module_name.'/pjirclogo.gif" border="0" alt="" /></a></td>
</tr>
<tr><td><br />
Select server: <select name="host" onchange="window.open(this.options[this.selectedIndex].value,\'_irc\',\'resizable=yes,scrollbars=yes,width=660,height=500,left=50,top=50\');return false">
<option value="'.getlink('&amp;file=popup').'">- Choose a server -</option>
';
$result = $db->sql_query('SELECT server, region FROM '.$prefix.'_ircservers WHERE network=\''.$network.'\'');
while ($row = $db->sql_fetchrow($result)) {
    echo '<option value="'.getlink('&amp;file=popup&amp;host='.$row['server']).'">'.$row['region'].'</option>';
}
$db->sql_freeresult($result);
echo '</select><br />
<span style="color: #FF0000">'._IRC_WARNING.'</span><br />
<em>If there are connection problems try another server.</em></td>
</tr><tr>
<td><br />'.sprintf(_IRC_ALTERNATE, getlink('&amp;file=popup').'" target="_blank" onclick="window.open(\''.getlink('&amp;file=popup').'\',\'_irc\',\'resizable=yes,scrollbars=yes,width=660,height=500,left=50,top=50\');return false').'</td>
</tr>
</table>
</form>
<hr />
<table width="100%">
<tr><th>IRC command</th><th>Info</th></tr>
<tr><td>/nick (NAME)</td><td>Change your name into (NAME)</td></tr>
<tr><td>/me (MESSAGE)</td><td>Sends (MESSAGE) telling something about you</td></tr>
<tr><td>/join (#CHANNEL)</td><td>Makes you join the specified channel (for ex. #cpgnuke)</td></tr>
<tr><td>/clear</td><td>Clears the entire scrollback buffer of the current window</td></tr>
<tr><td>/msg (NICKNAME) (MESSAGE)</td><td>Send a private message to this user without opening a query window</td></tr>
<tr><td>/ns REGISTER (password)</td><td>Register your current nickname with the given password</td></tr>
';
if (is_admin()) {
    echo '<tr><td colspan="2"><hr /></td></tr>
<tr><td>/config</td><td>Configure channel settings through pjirc. Changes are applied upon window closing.</td></tr>';
}
echo '
</table>
';

CloseTable();
require('footer.php');