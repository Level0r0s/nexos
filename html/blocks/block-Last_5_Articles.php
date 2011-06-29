<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/blocks/block-Last_5_Articles.php,v $
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

global $currentlang, $db, $MAIN_CFG, $prefix;

$querylang = ($MAIN_CFG['global']['multilingual']) ? "WHERE (alanguage='$currentlang' OR alanguage='')" : '';
$content = '<table width="100%" border="0">';

$result = $db->sql_query("SELECT sid, title, comments, counter FROM ".$prefix."_stories $querylang ORDER BY sid DESC LIMIT 5");
while (list($sid, $ntitle, $comtotal, $counter) = $db->sql_fetchrow($result)) {
	$content .= '<tr><td align="left">
	<b>&#8226;</b>&nbsp;<a href="'.URL::index('News&amp;file=article&amp;sid='.$sid).'">'.$ntitle.'</a>
	</td><td align="right">
	[ '.$comtotal.' '._COMMENTS.' - '.$counter.' '._READS.' ]
	</td></tr>';
}

$content .= '</table><br />
<div style="text-align:center;">
[ <a href="'.URL::index('News').'">'._MORENEWS.'</a> ]
</div>';
