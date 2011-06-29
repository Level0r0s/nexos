<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2007 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/statistics.php,v $
  $Revision: 1.10 $
  $Author: phoenix $
  $Date: 2010/11/08 03:05:51 $
******************************************************/
if (!defined('CPG_NUKE')) { exit; }
require_once('includes/nbbcode.php');
require_once('modules/'.$module_name.'/functions/display.inc');
require_once('modules/'.$module_name.'/functions/info.inc');
require_once('modules/'.$module_name.'/functions/linking.inc');

if (!isset($_GET['id'])) { URL::redirect(URL::index()); }

$time = time();
$time_year = isset($_GET['h_year']) ? intval($_GET['h_year']) : (isset($_GET['v_year']) ? intval($_GET['v_year']) : generate_date($time, 'Y'));
$time_month = generate_date($time, 'm');

list($dl_title, $dl_date, $dl_pick, $dl_active, $dl_submitter, $tot_hits, $tot_views) = $db->sql_ufetchrow("SELECT d.title, d.date, d.pick, d.active, d.submitter, SUM(s.hits) AS total_hits, SUM(s.views) AS total_views FROM ".$dl_prefix."_downloads d
	LEFT JOIN ".$dl_prefix."_stats s ON (s.id = d.lid)
	WHERE d.lid='$global_id' 
	GROUP BY d.lid, d.title, d.date, d.pick, d.active, d.submitter", SQL_NUM);
if (!isset($dl_title)) { cpg_error('The specified download does not exist', 404); }
if ($dl_active != 1 && !can_admin($module_name)) { cpg_error('The specified download is not active'); }

$l_size = getimagesize('themes/'.$CPG_SESS['theme'].'/images/leftbar.gif');
$m_size = getimagesize('themes/'.$CPG_SESS['theme'].'/images/mainbar.gif');
$r_size = getimagesize('themes/'.$CPG_SESS['theme'].'/images/rightbar.gif');

list($total_yearly_hits, $total_yearly_views) = $db->sql_ufetchrow("SELECT SUM(hits), SUM(views) FROM ".$dl_prefix."_stats 
	WHERE id='$global_id'", SQL_NUM);
list($total_monthly_hits, $total_monthly_views) = $db->sql_ufetchrow("SELECT SUM(hits), SUM(views) FROM ".$dl_prefix."_stats 
	WHERE id='$global_id' AND year='$time_year'", SQL_NUM);
$yh = $db->sql_query("SELECT year, SUM(hits) FROM ".$dl_prefix."_stats 
	WHERE id='$global_id' 
	GROUP BY year 
	ORDER BY year");
$mh = $db->sql_query("SELECT month, SUM(hits) FROM ".$dl_prefix."_stats 
	WHERE id='$global_id' AND year='$time_year' 
	GROUP BY month 
	ORDER BY month", SQL_NUM);

$yv = $db->sql_query("SELECT year, SUM(views) FROM ".$dl_prefix."_stats 
	WHERE id='$global_id' 
	GROUP BY year 
	ORDER BY year");
$mv = $db->sql_query("SELECT month, SUM(views) FROM ".$dl_prefix."_stats 
	WHERE id='$global_id' AND year='$time_year' 
	GROUP BY month 
	ORDER BY month", SQL_NUM);

$months = array(1=>_JANUARY, _FEBRUARY, _MARCH, _APRIL, _MAY, _JUNE, _JULY, _AUGUST, _SEPTEMBER, _OCTOBER, _NOVEMBER, _DECEMBER);
$colors = array(1=>'8D1B1B', '6740E1', '8D8D8D', 'CC8500', '5B781E');
$rand_colors = array_rand($colors);

//$modheader .= '<link rel="stylesheet" type="text/css" href="modules/'.$module_name.'/include/style.css" />';
$pagetitle .= $module_title.' '._BC_DELIM.' '._StatisticsLANG.' '._BC_DELIM.' '.$dl_title;
require_once('header.php');

OpenTable();
echo dl_detail_menu($global_id, $dl_title, $dl_pick, $dl_active, 5).'<br /><br />
   <span class="genmed"><strong>'._StatisticsLANG.'</strong></span><br />
   This download has received <strong>'.$tot_hits.'</strong> '.strtolower(_HITS).' and <strong>'.$tot_views.'</strong> page views since it was published '.generate_date($dl_date, 'F j, Y').'.<br /><br />
   <span class="genmed"><strong>Yearly Hits</strong></span><br /><br />
    <table border="0" style="background:'.$bgcolor2.';" cellspacing="1" cellpadding="3">
     <tr>
       <td style="background:'.$bgcolor3.';">'._YEAR.'</td>
       <td style="background:'.$bgcolor3.';" colspan="2">'._HITS.'</td>
     </tr>';
    while (list($h_year, $h_year_hits) = $db->sql_fetchrow($yh)) {
        $width = ($h_year_hits == 0) ? (100 * $h_year_hits) : round(100 * $h_year_hits/$total_yearly_hits, 0);
        echo '
     <tr style="background:'.$bgcolor1.';">
       <td>'.(($h_year != $time_year) ? '<a href="'.URL::index('&amp;file=statistics&amp;id='.$global_id.'&amp;h_year='.$h_year).'">'.$h_year.'</a>' : $h_year).'</td>
       <td style="white-space:nowrap;"><img src="themes/'.$CPG_SESS['theme'].'/images/leftbar.gif" alt="" width="'.$l_size[0].'" height="'.$l_size[1].'" /><img src="themes/'.$CPG_SESS['theme'].'/images/mainbar.gif" alt="" width="'.($width * 2).'" height="'.$m_size[1].'" /><img src="themes/'.$CPG_SESS['theme'].'/images/rightbar.gif" alt="" width="'.$r_size[0].'" height="'.$r_size[1].'" /></td>
       <td>'.$h_year_hits.'</td>
     </tr>';
    }
    $db->sql_freeresult($yh);
    echo '
    </table><br /><br />
   <span class="genmed"><strong>Monthly Hits</strong></span><br /><br />
    <table border="0" style="background:'.$bgcolor2.';" cellspacing="1" cellpadding="3">
     <tr>
       <td style="background:'.$bgcolor3.';">Month</td>
       <td style="background:'.$bgcolor3.';" colspan="2">'._HITS.'</td>
     </tr>';
    while (list($h_month, $h_month_hits) = $db->sql_fetchrow($mh)) {
        $width = ($h_month_hits == 0) ? (100 * $h_month_hits) : round(100 * $h_month_hits/$total_monthly_hits, 0);
        echo '
     <tr style="background:'.$bgcolor1.';">
       <td>'.$months[$h_month].'</td>
       <td style="white-space:nowrap;"><img src="themes/'.$CPG_SESS['theme'].'/images/leftbar.gif" alt="" width="'.$l_size[0].'" height="'.$l_size[1].'" /><img src="themes/'.$CPG_SESS['theme'].'/images/mainbar.gif" alt="" width="'.($width * 2).'" height="'.$m_size[1].'" /><img src="themes/'.$CPG_SESS['theme'].'/images/rightbar.gif" alt="" width="'.$r_size[0].'" height="'.$r_size[1].'" /></td>
       <td>'.$h_month_hits.'</td>
     </tr>';
    }
    $db->sql_freeresult($mh);
    echo '
    </table><br /><br /><br />
   <span class="genmed"><strong>Yearly Page Views</strong><br /><br />
    <table border="0" style="background:'.$bgcolor2.';" cellspacing="1" cellpadding="3">
     <tr>
       <td style="background:'.$bgcolor3.';">'._YEAR.'</td>
       <td style="background:'.$bgcolor3.';" colspan="2">Page Views</td>
     </tr>';
    while (list($v_year, $v_year_views) = $db->sql_fetchrow($yv)) {
        $width = ($v_year_views == 0) ? (100 * $v_year_views) : round(100 * $v_year_views/$total_yearly_views, 0);
        echo '
     <tr style="background:'.$bgcolor1.';">
       <td>'.(($v_year != $time_year) ? '<a href="'.URL::index('&amp;file=statistics&amp;id='.$global_id.'&amp;v_year='.$v_year).'">'.$v_year.'</a>' : $v_year).'</td>
       <td style="white-space:nowrap;"><img src="themes/'.$CPG_SESS['theme'].'/images/leftbar.gif" alt="" width="'.$l_size[0].'" height="'.$l_size[1].'" /><img src="themes/'.$CPG_SESS['theme'].'/images/mainbar.gif" alt="" width="'.($width * 2).'" height="'.$m_size[1].'" /><img src="themes/'.$CPG_SESS['theme'].'/images/rightbar.gif" alt="" width="'.$r_size[0].'" height="'.$r_size[1].'" /></td>
       <td>'.$v_year_views.'</td>
     </tr>';
    }
    $db->sql_freeresult($yv);
    echo '
   </table><br /><br />
  <span class="genmed"><strong>Monthly Page Views</strong><br /><br />
  <table border="0" style="background:'.$bgcolor2.';" cellspacing="1" cellpadding="3">
   <tr>
     <td style="background:'.$bgcolor3.';">Month</td>
     <td style="background:'.$bgcolor3.';" colspan="2">Page Views</td>
   </tr>';
  while (list($v_month, $v_month_views) = $db->sql_fetchrow($mv)) {
      $width = ($v_month_views == 0) ? (100 * $v_month_views) : round(100 * $v_month_views/$total_monthly_views, 0);
      echo '
    <tr style="background:'.$bgcolor1.';">
      <td>'.$months[$v_month].'</td>
      <td style="white-space:nowrap;"><img src="themes/'.$CPG_SESS['theme'].'/images/leftbar.gif" alt="" width="'.$l_size[0].'" height="'.$l_size[1].'" /><img src="themes/'.$CPG_SESS['theme'].'/images/mainbar.gif" alt="" width="'.($width * 2).'" height="'.$m_size[1].'" /><img src="themes/'.$CPG_SESS['theme'].'/images/rightbar.gif" alt="" width="'.$r_size[0].'" height="'.$r_size[1].'" /></td>
      <td>'.$v_month_views.'</td>
    </tr>';
  }
  $db->sql_freeresult($mv);
  echo '</table>';
CloseTable();