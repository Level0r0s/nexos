<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/blocks/block-Total_Hits.php,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 00:57:02 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
********************************************************/
if (!defined('CPG_NUKE')) { exit; }

global $db, $prefix, $MAIN_CFG;

list($hits) = $db->sql_ufetchrow("SELECT SUM(count) FROM ".$prefix."_counter WHERE type='os'", SQL_NUM);

$content = '<div style="text-align:center;">'._WERECEIVED.'<br /><a href="'.URL::index('Statistics').'"><strong>'.$hits.'</strong></a><br />'._PAGESVIEWS.'<br />'.$MAIN_CFG['global']['startdate'].'</div>';