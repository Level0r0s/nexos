<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/admin/adlinks.inc,v $
  $Revision: 1.5 $
  $Author: phoenix $
  $Date: 2010/11/03 23:13:17 $
******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
if (can_admin($module)) {
	$menuitems['_AMENU6'][$module]['URL'] = URL::admin($module);
	$menuitems['_AMENU6'][$module]['IMG'] = strtolower($module);
	$menuitems['_AMENU6'][$module]['MOD'] = $module;
	$menuitems['_AMENU6'][$module]['SUB'][_ADD] = URL::index($module.'&amp;file=add');
	$menuitems['_AMENU6'][$module]['SUB']['Broken'] = URL::admin($module.'&amp;mode=broken');
	$menuitems['_AMENU6'][$module]['SUB']['Config'] = URL::admin($module.'&amp;file=config');
	$menuitems['_AMENU6'][$module]['SUB']['Fields'] = URL::admin($module.'&amp;mode=fields');
	$menuitems['_AMENU6'][$module]['SUB']['Pending Downloads'] = URL::admin($module.'&amp;mode=pending');
	if ($MAIN_CFG[strtolower($module)]['r_active'] && $MAIN_CFG[strtolower($module)]['r_queue']) {
		$menuitems['_AMENU6'][$module]['SUB']['Pending Reviews'] = URL::admin($module.'&amp;mode=r_pending');
	}
	if (isset($MAIN_CFG[strtolower($module)]['pub_mirror'])) {
		$menuitems['_AMENU6'][$module]['SUB']['Pending Mirrors'] = URL::admin($module.'&amp;mode=m_pending');
	}
}