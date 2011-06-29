<?php
/*********************************************
  CPG-Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2008 by CPG Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Shoutblock/modules/Shoutblock/admin/index.inc,v $
  $Revision: 9.4 $
  $Author: nanocaiordo $
  $Date: 2007/12/17 13:41:33 $
**********************************************/
if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin('shoutblock')) { die('Access Denied'); }

require_once('includes/nbbcode.php');

$pagetitle .= ' '._BC_DELIM.' Shoutblock';

global $CPG_SESS, $db, $MAIN_CFG, $prefix;

if (isset($_GET['mode'])) {
    if ($_GET['mode'] == 'manage') {
        $pagetitle .= ' '._BC_DELIM.' Manage Shouts';
        if (isset($_GET['edit'])) {
            $edit_id = intval($_GET['edit']);
            $pagetitle .= ' '._BC_DELIM.' Edit Shout';
            require('header.php');
            GraphicAdmin('_AMENU3');
            OpenTable();
            echo '<div align="center"><a href="'.adminlink('Shoutblock').'">Configuration</a> | <b>Manage Shouts</b> | <a href="'.adminlink('&amp;mode=ban').'">Ban Control</a> | <a href="'.adminlink('&amp;mode=erase').'">Erase Shouts</a></div>';
            CloseTable();
            echo '<br />';
            OpenTable();
            echo '<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline" align="center">
            <tr><td align="center" class="catleft" colspan="2"><b><span class="gen">Edit Shout</span></b></td></tr>';
            $result = $db->sql_query("SELECT name, comment, time FROM ".$prefix."_shoutblock WHERE id='$edit_id'");
            list($edit_name, $edit_comment, $edit_time) = $db->sql_fetchrow($result);
            if ($db->sql_numrows($result) < 1) {
                echo '<tr><td align="center" class="row1" colspan="2"><span class="gen">Shout does not exist</span></td></tr></table>';
            } else {
                echo '<form action="'.adminlink('Shoutblock').'" method="post" name="edit_shout" enctype="multipart/form-data" accept-charset="utf-8">
                <tr><td class="row1"><span class="gen">Posted by</span></td>
                <td class="row2">'.$edit_name.'</td></tr>
                <tr><td class="row1"><span class="gen">Shout Text</span></td>
                <td class="row2"><textarea cols="70" rows="1" name="shout_text">'.$edit_comment.'</textarea>'.smilies_table('onerow', 'shout_text', 'edit_shout').'</td></tr>
                <tr><td class="row1"><span class="gen">Posted on</span></td>
                <td class="row2">'.formatDateTime($edit_time, _DATESTRING).'</td></tr>
                <tr><td class="catbottom" colspan="2" align="center" height="28">
                <input type="hidden" name="shout_id" value="'.$edit_id.'" />
                <input type="submit" name="saveShout" value="'._SAVECHANGES.'" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="Reset" name="reset" class="liteoption" />
                </td></tr></form></table>';
            }
            CloseTable();
            require('footer.php');
        } else {
            require('header.php');
            GraphicAdmin('_AMENU3');
            OpenTable();
            echo '<div align="center"><a href="'.adminlink('Shoutblock').'">Configuration</a> | <b>Manage Shouts</b> | <a href="'.adminlink('&amp;mode=ban').'">Ban Control</a> | <a href="'.adminlink('&amp;mode=erase').'">Erase Shouts</a></div>';
            CloseTable();
            echo '<br />';
            OpenTable();
            echo '<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline" align="center">
            <tr><td align="center" class="catleft" colspan="2"><b><span class="gen">Manage Shouts</span></b></td></tr>
            <form action="'.adminlink('Shoutblock').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">';
            $result = $db->sql_query("SELECT * FROM ".$prefix."_shoutblock ORDER BY id DESC");
            while (list($shout_id, $shout_author, $shout_text, $shout_time) = $db->sql_fetchrow($result)) {
                echo '<tr><td align="left" class="row1" width="90%"><span class="gen">'.set_smilies($shout_text).'</span><br /><br />
                Posted by <a href="'.getlink('Your_Account&amp;op=userinfo&amp;username='.$shout_author).'">'.$shout_author.'</a>
                <br />'.formatDateTime($shout_time, _DATESTRING).'</td>
                <td align="right" class="row2" width="10%">
                <center>
                <a href="'.adminlink('&amp;mode=manage&amp;edit='.$shout_id).'">'._EDIT.'</a><br /><br />
                <input type="checkbox" name="shout_remove[]" value="'.$shout_id.'" />
                </center>
                </td></tr>
                <tr><td class="spaceRow" height="1" colspan="2"><img src="images/spacer.gif" alt="" width="1" height="1" /></td></tr>';
            }
            $db->sql_freeresult($result);
            echo '<tr><td class="catbottom" colspan="2" align="right" height="28">
            <input type="submit" name="removeShouts" value="Remove Selected" class="mainoption" />
            </td></tr></form>
            </table>';
            CloseTable();
            require('footer.php');
        }
    } elseif ($_GET['mode'] == 'ban') {
        $pagetitle .= ' '._BC_DELIM.' Ban Control';
        require('header.php');
        GraphicAdmin('_AMENU3');
        OpenTable();
        echo '<div align="center"><a href="'.adminlink('Shoutblock').'">Configuration</a> | <a href="'.adminlink('&amp;mode=manage').'">Manage Shouts</a> | <b>Ban Control</b> | <a href="'.adminlink('&amp;mode=erase').'">Erase Shouts</a></div>';
        CloseTable();
        echo '<br />';
        OpenTable();
        echo '<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline" align="center">
        <tr><td align="center" class="catleft" colspan="2"><b><span class="gen">Ban Control</span></b></td></tr>
        <tr><td class="row1" colspan="2"><b><span class="gen">Banned IP Addresses</span></b><br /><br />';
        $result = $db->sql_query("SELECT * FROM ".$prefix."_shoutblock_ipblock");
        $a = 1;
        while (list($ip_id, $ip_addy) = $db->sql_fetchrow($result)) {
            echo '<span class="gen">'.$a.'. &nbsp;'.decode_ip($ip_addy).'</span><br />';
            $a++;
        }
        $db->sql_freeresult($result);
        echo '</td></tr>
        <tr><td class="row1">
        <form action="'.adminlink('Shoutblock').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">
        <input type="text" name="ban_ip" size="16" maxlength="15" /> &nbsp;<input type="submit" name="banIP" value="Ban IP" class="mainoption" /><br /><br />
        <input type="text" name="remove_ip" size="16" maxlength="15" /> &nbsp;<input type="submit" name="removeIP" value="Remove Ban" class="mainoption" /></form></td></tr>
        <tr><td class="spaceRow" height="1" colspan="2"><img src="images/spacer.gif" alt="" width="1" height="1" /></td></tr>
        <tr><td class="row1" colspan="2"><b><span class="gen">Banned Names</span></b><br /><br />';
        $result = $db->sql_query("SELECT * FROM ".$prefix."_shoutblock_nameblock");
        $b = 1;
        while (list($name_id, $name_name) = $db->sql_fetchrow($result)) {
            echo '<span class="gen">'.$b.'. &nbsp;'.$name_name.'</span><br />';
            $b++;
        }
        $db->sql_freeresult($result);
        echo '</td></tr>
        <tr><td class="row1">
        <form action="'.adminlink('Shoutblock').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">
        <input type="text" name="ban_name" size="20" maxlength="30" /> &nbsp;<input type="submit" name="banName" value="Ban Name" class="mainoption" /><br /><br />
        <input type="text" name="remove_name" size="20" maxlength="30" /> &nbsp;<input type="submit" name="removeName" value="Remove Ban" class="mainoption" /></form></td></tr>
        </table>';
        CloseTable();
        require('footer.php');
    } elseif ($_GET['mode'] == 'erase') {
        if ($_GET['ok'] == 1) {
            $db->sql_query("DELETE FROM ".$prefix."_shoutblock");
            $db->sql_query("OPTIMIZE TABLE ".$prefix."_shoutblock");
            $db->sql_query("INSERT INTO ".$prefix."_shoutblock VALUES (NULL, 'CPG-Nuke Team', 'Shout it out! :D', '".gmtime()."')");
            url_redirect(adminlink('Shoutblock'));
        } else {
            $pagetitle .= ' '._BC_DELIM.' Erase Shouts';
            require('header.php');
            GraphicAdmin('_AMENU3');
            OpenTable();
            echo '<div align="center"><a href="'.adminlink('Shoutblock').'">Configuration</a> | <a href="'.adminlink('&amp;mode=manage').'">Manage Shouts</a> | <a href="'.adminlink('&amp;mode=ban').'">Ban Control</a> | <b>Erase Shouts</b></div>';
            CloseTable();
            echo '<br />';
            OpenTable();
            echo '<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline" align="center">
            <tr><td align="center" class="row1" colspan="2"><span class="gen"><img src="images/warning.png" alt="'._WARNING.'" title="'._WARNING.'" /><br /><br />
            Are you sure that you want to erase and rebuild the shout database?<br /><br />
            [ <a href="'.adminlink('Shoutblock').'">'._NO.'</a> | <a href="'.adminlink('&amp;mode=erase&amp;ok=1').'">'._YES.'</a> ]</span></td></tr></table>';
            CloseTable();
            require('footer.php');
        }
    }
} elseif (isset($_POST['updateConfig'])) {
    if ($CPG_SESS['admin']['page'] != 'Shoutblock') {
        cpg_error(_ERROR_BAD_LINK, _SEC_ERROR);
    }
    foreach ($MAIN_CFG['Shoutblock'] AS $key => $val) {
        if (isset($_POST[$key])) {
            $value = $_POST[$key];
            $db->sql_query('UPDATE '.$prefix."_config_custom SET cfg_value='".Fix_Quotes($value)."' WHERE cfg_field='$key' AND cfg_name='Shoutblock'");
        }
    }
    cache_delete_array('MAIN_CFG');
    url_redirect(adminlink('Shoutblock'));
} elseif (isset($_POST['saveShout'])) {
    $save_id = intval($_POST['shout_id']);
    $save_text = htmlprepare(Fix_Quotes($_POST['shout_text']));
    $db->sql_query("UPDATE ".$prefix."_shoutblock SET comment='$save_text' WHERE id='$save_id' LIMIT 1");
    url_redirect(adminlink('&mode=manage'));
} elseif (isset($_POST['removeShouts'])) {
    foreach ($_POST['shout_remove'] AS $rem_id) {
        $db->sql_query("DELETE FROM ".$prefix."_shoutblock WHERE id='$rem_id'");
    }
    url_redirect(adminlink('&mode=manage'));
} elseif (isset($_POST['banIP']) || isset($_POST['removeIP'])) {
		$ip = trim(!empty($_POST['ban_ip']) ? $_POST['ban_ip'] : $_POST['remove_ip']);
		if (!preg_match("/^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\$/", $ip)) {
			cpg_error(sprintf(_ERROR_BAD_FORMAT, 'Ban IP'));
		}
		if (!$ip = inet_pton($ip)) { cpg_error(sprintf(_ERROR_NOT_SET, 'IP')); }
		if (strlen($ip) == 4) {
			$ip = $db->binary_safe($ip);
			if (isset($_POST['banIP'])) {
				$db->sql_query("INSERT INTO {$prefix}_shoutblock_ipblock (name) VALUES ($ip)");
			}	else if (isset($_POST['removeIP'])) {
				$db->sql_query("DELETE FROM {$prefix}_shoutblock_ipblock WHERE name=$ip LIMIT 1");
			}
    } // else IPv6
		url_redirect(adminlink('&mode=ban'));
} elseif (isset($_POST['banName'])) {
    if (strlen($_POST['ban_name']) < 2) {
        cpg_error(sprintf(_ERROR_NOT_SET, 'Name'));
    }
    $db->sql_query("INSERT INTO ".$prefix."_shoutblock_nameblock VALUES (NULL, '$_POST[ban_name]')");
    url_redirect(adminlink('&mode=ban'));
} elseif (isset($_POST['removeName'])) {
    if (strlen($_POST['remove_name']) < 2) {
        cpg_error(sprintf(_ERROR_NOT_SET, 'Name'));
    }
    $db->sql_query("DELETE FROM ".$prefix."_shoutblock_nameblock WHERE name='$_POST[remove_name]' LIMIT 1");
    url_redirect(adminlink('&mode=ban'));
} else {
    require('header.php');
    GraphicAdmin('_AMENU3');
    $conf = $MAIN_CFG['Shoutblock'];
    
    if (!is_array($MAIN_CFG['Shoutblock'])) {
        cpg_error('<h2>Welcome, you need to <a href="'.adminlink('modules').'">install the module</a> first!</h2>');
    }

    OpenTable();
    echo '<center><b>Configuration</b> | <a href="'.adminlink('&amp;mode=manage').'">Manage Shouts</a> | <a href="'.adminlink('&amp;mode=ban').'">Ban Control</a> | <a href="'.adminlink('&amp;mode=erase').'">Erase Shouts</a></center>';
    CloseTable();
    echo '<br />';
    
    OpenTable();
    echo '<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline" align="center">
    <form action="'.adminlink('Shoutblock').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    <tr><td align="center" class="catleft" colspan="2"><b><span class="gen">Configuration</span></b></td></tr>
    <tr><td class="row1"><span class="gen">Use theme colors</span></td>
        <td class="row2">'.yesno_option('themecolors', $conf['themecolors']).'</td></tr>';
    if (!$conf['themecolors']) {
        echo '
        <tr><td class="row1"><span class="gen">Color One</span></td>
            <td class="row2"><input type="text" name="color1" value="'.$conf['color1'].'" /></td></tr>
        <tr><td class="row1"><span class="gen">Color Two</span></td>
            <td class="row2"><input type="text" name="color2" value="'.$conf['color2'].'" /></td></tr>';
    }
    echo '
    <tr><td class="row1"><span class="gen">Display date of shout</span></td>
        <td class="row2">'.yesno_option('date', $conf['date']).'</td></tr>
    <tr><td class="row1"><span class="gen">Display time of shout</span></td>
        <td class="row2">'.yesno_option('time', $conf['time']).'</td></tr>
    <tr><td class="row1"><span class="gen">Display how many shouts?</span></td>
        <td class="row2"><input type="text" name="number" value="'.$conf['number'].'" /></td></tr>
    <tr><td class="row1"><span class="gen">Enable IP banning</span></td>
        <td class="row2">'.yesno_option('ipblock', $conf['ipblock']).'</td></tr>
    <tr><td class="row1"><span class="gen">Enable name banning</span></td>
        <td class="row2">'.yesno_option('nameblock', $conf['nameblock']).'</td></tr>
    <tr><td class="row1"><span class="gen">Activate shoutblock censor</span></td>
        <td class="row2">'.yesno_option('censor', $conf['censor']).'</td></tr>
    <tr><td class="row1"><span class="gen">Shoutblock height</span></td>
        <td class="row2"><input type="text" name="height" value="'.$conf['height'].'" /></td></tr>
    <tr><td class="row1"><span class="gen">Allow [url] in shout text</span></td>
        <td class="row2">'.yesno_option('urlonoff', $conf['urlonoff']).'</td></tr>
    <tr><td class="row1"><span class="gen">Allow anonymous users to shout</span></td>
        <td class="row2">'.yesno_option('anonymouspost', $conf['anonymouspost']).'</td></tr>';
    if ($conf['anonymouspost']) {
        echo '
        <tr><td class="row1"><span class="gen">Allow anonymous users to enter their name</span></td>
            <td class="row2">'.yesno_option('delyourlastpost', $conf['delyourlastpost']).'</td></tr>';
        if (!$conf['delyourlastpost']) {
            echo '
            <tr><td class="row1"><span class="gen">Default name for anonymous users</span></td>
                <td class="row2"><input type="text" name="username" value="'.$conf['username'].'" /></td></tr>';
        }
    }
    echo '
    <tr><td class="catbottom" colspan="2" align="center" height="28">
    <input type="submit" name="updateConfig" value="'._SAVECHANGES.'" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="Reset" name="reset" class="liteoption" />
    </td></tr></form></table>';
    CloseTable();
    require('footer.php');
}