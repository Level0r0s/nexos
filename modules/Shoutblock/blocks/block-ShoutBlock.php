<?php
/*********************************************
  CPG-Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2008 by CPG Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Shoutblock/blocks/block-ShoutBlock.php,v $
  $Revision: 9.9 $
  $Author: nanocaiordo $
  $Date: 2007/12/17 13:40:10 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }

$content = '';
if (!is_active('Shoutblock')) {
    $content = 'ERROR';
    return trigger_error('Shoutblock module is inactive', E_USER_WARNING);
}
get_lang('ShoutBlock');

global $prefix, $db, $bgcolor1, $bgcolor2, $MAIN_CFG, $userinfo;
require_once('includes/nbbcode.php');
$conf = $MAIN_CFG['Shoutblock'];

// Top half

$content = '<div style="border:0; height:'.$MAIN_CFG['Shoutblock']['height'].'px; width:100%; overflow:auto;">';
if ($conf['themecolors']) {
    $conf['color1'] = $bgcolor1;
    $conf['color2'] = $bgcolor2;
}

// Messages
$result = $db->sql_query('SELECT * FROM '.$prefix."_shoutblock ORDER BY id DESC LIMIT $conf[number]");
$bgcolor = $conf['color2'];
while ($row = $db->sql_fetchrow($result)){
    $bgcolor = ($bgcolor != $conf['color1']) ? $conf['color1'] : $conf['color2'];
    $content .= '<div style="background-color:'.$bgcolor.';" class="content">';
    $row[2] = set_smilies($row[2]);
    $content .= '<a href="'.getlink('Your_Account&amp;profile='.$row[1])."\"><b>$row[1]:</b></a>";
    $content .= " $row[2]<br />";
    if ($conf['date']) { $content .= formatDateTime($row[3], '%d-%b-%Y '); } // date
    if ($conf['time']) { $content .= formatDateTime($row[3], '%H:%M:%S'); } // time
    $content .= '</div>';
}
$content .= '</div>';

// bottom half

if (!$conf['anonymouspost'] && !is_user()) {
    $content .= '<div style="text-align:center;"><a href="'.getlink('Shoutblock').'">'._SSHOUTHISTORY.'</a><br />'._SREGSHOUT.'<br /><a href="'.getlink('Your_Account').'">'._SLOGIN.'</a></div>';
} else {
    $content .= '<table width="100%" border="0" cellspacing="0" cellpadding="1">';
    $content .= '<form id="form1" method="post" action="'.getlink('Shoutblock').'">';
    $content .= '<tr><td align="center" colspan="2"><a href="'.getlink('Shoutblock').'">'._SSHOUTHISTORY.'</a><br />';
    if ($conf['delyourlastpost'] && !is_user()) {
        $content .= 'Name: <input type="text" name="uid" size="10" maxlength="30" /><br />';
    }
    $content .= '<input type="text" name="comment" size="25" style="width: 90%;"/></td></tr>'
    .'<tr><td align="center"><input type="submit" name="Submit" value="Shout" /></td>
    <td align="center"><a title="View a list of available smilies" target="_smilies" onclick="window.open(\''.getlink('smilies&amp;field=comment&amp;form=form1',1,1).'\', \'_smilies\', \'height=200,resizable=yes,scrollbars=yes,width=230\');return false;" href="'.getlink('smilies&amp;field=comment&amp;form=form1',1,1).'"><input type="button" value="'._SSMILIES.'" /></a></td>'
    .'</tr></form></table>';
}