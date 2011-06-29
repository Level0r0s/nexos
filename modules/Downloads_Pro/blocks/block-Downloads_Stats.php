<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2007 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/blocks/block-Downloads_Stats.php,v $
  $Revision: 1.4 $
  $Author: phoenix $
  $Date: 2010/11/03 23:13:17 $
******************************************************/
if (!defined('CPG_NUKE')) { exit; }

global $db, $prefix;

$dl_mod = 'Downloads';
require_once('modules/'.$dl_mod.'/functions/info.inc');
$dl_mod_prefix = $prefix.'_'.strtolower($dl_mod);
$content = '';
if (!is_active($dl_mod)) {
    $content = 'ERROR';
    return trigger_error($dl_mod.' module is inactive', E_USER_WARNING);
}

list($total_cats) = $db->sql_ufetchrow("SELECT count(*) FROM ".$dl_mod_prefix."_categories", SQL_NUM, __FILE__, __LINE__);
list($total_dl, $total_filesize) = $db->sql_ufetchrow("SELECT count(*), sum(filesize) FROM ".$dl_mod_prefix."_downloads", SQL_NUM, __FILE__, __LINE__);
list($total_hits, $total_views) = $db->sql_ufetchrow("SELECT sum(hits), sum(views) FROM ".$dl_mod_prefix."_stats", SQL_NUM, __FILE__, __LINE__);
list($total_votes, $sum_votes) = $db->sql_ufetchrow("SELECT count(*), sum(score) FROM ".$dl_mod_prefix."_ratings", SQL_NUM, __FILE__, __LINE__);
$avg_score = ($total_votes > 0) ? $sum_votes / $total_votes : 0;
$content = '
<b>&#8226;</b>&nbsp;Categories: '.$total_cats.'<br />
<b>&#8226;</b>&nbsp;Downloads: '.$total_dl.'<br />
&nbsp;&nbsp;<strong><big>&middot;</big></strong> Hits: '.$total_hits.'<br />
&nbsp;&nbsp;<strong><big>&middot;</big></strong> Views: '.$total_views.'<br />
&nbsp;&nbsp;<strong><big>&middot;</big></strong> Votes: '.$total_votes.'<br />
&nbsp;&nbsp;<strong><big>&middot;</big></strong> Avg. Score: '.round($avg_score, 2).'<br />
&nbsp;&nbsp;<strong><big>&middot;</big></strong> Total: '.notate_size($total_filesize).'<br />
<b>&#8226;</b>&nbsp;<a href="'.URL::index($dl_mod.'&amp;file=add').'">Add Download</a><br />
<b>&#8226;</b>&nbsp;<a href="'.URL::index($dl_mod.'&amp;mode=new').'">New Additions</a><br />
<b>&#8226;</b>&nbsp;<a href="'.URL::index($dl_mod.'&amp;mode=pop').'">Popular Downloads</a><br />
<b>&#8226;</b>&nbsp;<a href="'.URL::index($dl_mod.'&amp;mode=top').'">Top Downloads</a><br />
<b>&#8226;</b>&nbsp;<a href="'.URL::index($dl_mod.'&amp;mode=random').'">Random Download</a>';