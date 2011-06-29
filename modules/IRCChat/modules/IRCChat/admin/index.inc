<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/IRCChat/modules/IRCChat/admin/index.inc,v $
  $Revision: 9.1 $
  $Author: djmaze $
  $Date: 2005/01/13 04:02:52 $

***********************************************************************/
if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin('ircchat')) { die('Access Denied'); }

$mode = isset($_GET['mode']) ? $_GET['mode'] : '';
if (isset($_POST['addfield'])) $mode = 'addfield';

if (isset($_POST['save']) && $_POST['save'] == 'config') {
    foreach ($MAIN_CFG['IRCChat'] AS $key => $val) {
        if (isset($_POST[$key]))
            $db->sql_query('UPDATE '.$prefix."_config_custom SET cfg_value='".Fix_Quotes($_POST[$key])."' WHERE cfg_field='$key' AND cfg_name='IRCChat'");
    }
    cache_delete_array('MAIN_CFG');
    url_redirect(adminlink('IRCChat'));
} else if (isset($_POST['save']) && $_POST['save'] == 'add_server') {
    $server = $_POST['server'];
    $region = $_POST['region'];
    if (!empty($_POST['newnet'])) {
        $network = $_POST['newnet'];
        $region = 'main';
    } else {
        $network = $_POST['network'];
        $region  = (!empty($_POST['newreg'])) ? $_POST['newreg'] : $_POST['region'];
    }
    $db->sql_query('INSERT INTO '.$prefix."_ircservers VALUES (NULL, '$network', '$server', '$region')");
    url_redirect(adminlink('IRCChat'));
}

$options = array();
$result = $db->sql_query('SELECT server_id, network FROM '.$prefix.'_ircservers WHERE region=\'main\' ORDER BY network');
while ($row = $db->sql_fetchrow($result)) {
    $options[$row['server_id']] = $row['network'];
}
$db->sql_freeresult($result);

$pagetitle .= ' '._BC_DELIM.' '._IRC_CONFIG;
require_once('header.php');
GraphicAdmin('_AMENU9');
OpenTable();
echo '<div align="center">
  <table border="0" width="70%"><form action="'.adminlink().'" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    <tr><th class="thHead" colspan="2">'._IRC_SETUP.'</th></tr>
    <tr><td class="row1">'._IRC_NETWORK  .'</td><td class="row2">'.select_box('network', $MAIN_CFG['IRCChat']['network'], $options).'</td></tr>
    <tr><td class="row1">'._IRC_CHANNEL  .'</td><td class="row2"><input type="text" name="channel" value="'.$MAIN_CFG['IRCChat']['channel'].'" /></td></tr>
    <tr><td class="row1">'._IRC_QUITMSG  .'</td><td class="row2"><input type="text" name="quitmessage" value="'.htmlprepare($MAIN_CFG['IRCChat']['quitmessage']).'" size="70" /></td></tr>
    <tr><td class="row1">'._IRC_ALLOWANON.'</td><td class="row2">'.yesno_option('allow_anon', $MAIN_CFG['IRCChat']['allow_anon']).'</td></tr>
    <tr><td align="center" colspan="2" class="catbottom"><input type="hidden" name="save" value="config" />
    <input type="submit" value="'._SAVECHANGES.'" class="mainoption" /></td></tr>
  </form></table></div>';
CloseTable();
OpenTable();
echo '<div align="center">
  <table border="0" width="70%"><form action="'.adminlink().'" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    <tr><th class="thHead" colspan="2">'._IRC_ADDSERVER.'</th></tr>
    <tr><td class="row1">'._IRC_NETWORK.'<br />'._IRC_NEWNET .'</td><td class="row2">'.select_box('network', '', $options).'<br /><input type="text" name="newnet" /></td></tr>
    <tr><td class="row1">'._IRC_SERVER .'</td><td class="row2"><input type="text" name="server" /></td></tr>
    <tr><td class="row1">'._IRC_REGION .'<br>or other</td><td class="row2">'.select_option('region', '', array('Australia', 'Brazil', 'Canada', 'Europe', 'United States')).'<br /><input type="text" name="newreg" /></td></tr>
    <tr><td align="center" colspan="2" class="catbottom"><input type="hidden" name="save" value="add_server" />
    <input type="submit" value="'._SAVECHANGES.'" class="mainoption" /></td></tr>
  </form></table></div>';
CloseTable();
require('footer.php');