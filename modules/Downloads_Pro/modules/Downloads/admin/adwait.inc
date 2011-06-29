<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/admin/adwait.inc,v $
  $Revision: 1.7 $
  $Author: phoenix $
  $Date: 2010/11/03 23:13:17 $
******************************************************/
if (!defined('CPG_NUKE')) { exit; }
$dl_prefix = $prefix.'_'.strtolower($module);
if (is_active($module) && can_admin($module)) {
	$broken = $db->sql_count($dl_prefix.'_broken');
	$pending = $db->sql_count($dl_prefix.'_downloads', 'active=2');
	if ($MAIN_CFG[strtolower($module)]['r_active'] && $MAIN_CFG[strtolower($module)]['r_queue']) {
		$r_pending = $db->sql_count($dl_prefix.'_ratings', 'active=0');
	}
	if (isset($MAIN_CFG[strtolower($module)]['pub_mirror'])) {
		$m_pending = $db->sql_count($dl_prefix.'_mirrors', 'active=0');
	}
	$content .= '
	<b>&#8226;</b>&nbsp;<a href="'.URL::admin($module.'&amp;mode=broken').'">Broken D/L Mirrors</a>: '.$broken.'<br />
	<b>&#8226;</b>&nbsp;<a href="'.URL::admin($module.'&amp;mode=pending').'">Pending Downloads</a>: '.$pending.'<br />';
	if ($MAIN_CFG[strtolower($module)]['r_active'] && $MAIN_CFG[strtolower($module)]['r_queue']) {
		$content .= '<b>&#8226;</b>&nbsp;<a href="'.URL::admin($module.'&amp;mode=r_pending').'">Pending D/L Reviews</a>: '.$r_pending.'<br />';
	}
	if (isset($MAIN_CFG[strtolower($module)]['pub_mirror'])) {
		$content .= '<b>&#8226;</b>&nbsp;<a href="'.URL::admin($module.'&amp;mode=m_pending').'">Pending Mirrors</a>: '.$m_pending.'<br />';
	}
}
