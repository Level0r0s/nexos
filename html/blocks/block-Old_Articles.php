<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/blocks/block-Old_Articles.php,v $
  $Revision: 10.1 $
  $Author: phoenix $
  $Date: 2010/11/07 15:38:58 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
********************************************************/
if (!defined('CPG_NUKE')) { exit; }

if (!is_active('News')) {
	$content = 'ERROR';
	return trigger_error('News module is inactive', E_USER_WARNING);
}

global $storynum, $userinfo, $categories, $cat, $prefix,
	     $currentlang, $db, $new_topic, $MAIN_CFG;
$content = '';
$query = ($categories == 1) ? "WHERE catid='$cat' " : (($new_topic != 0) ? "WHERE topic='$new_topic' " : '');
if ($MAIN_CFG['global']['multilingual']) {
	$query = (empty($query) ? 'WHERE' : '').$query."(alanguage='$currentlang' OR alanguage='')";
}

$storynum = (is_user() && $userinfo['storynum'] && $MAIN_CFG['member']['user_news']) ? $userinfo['storynum'] : $MAIN_CFG['global']['storyhome'];

$result = $db->sql_query("SELECT sid, title, time, comments FROM ".$prefix."_stories $query ORDER BY time DESC LIMIT $storynum");

if ($db->sql_numrows($result)) {
	$content = '<table border="0" width="100%">';
	$vari = 0;
	while (list($sid, $ntitle, $time, $comments) = $db->sql_fetchrow($result)) {
		$datetime = formatDateTime($time, _DATESTRING2);
		$content .= '<tr><td colspan="2"><strong>'.$datetime.'</strong></td></tr>
		<tr><td valign="top"><b>&#8226;</b>&nbsp;</td><td>
		<a href="'.URL::index('News&amp;file=article&amp;sid='.$sid).'">'.$ntitle.'</a> ('.$comments.')</td></tr>';
		$vari++;
	}
	$content .= '</table>';
	if ($vari >= $MAIN_CFG['global']['oldnum'] && is_active('Stories_Archive')) {
		$content .= '<br /><a href="'.URL::index('Stories_Archive').'"><strong>'._OLDERARTICLES.'</strong></a>';
	}
}
