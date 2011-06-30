<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/footer.php,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 00:56:52 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }

function footmsg() {
	global $db, $foot1, $foot2, $foot3, $total_time, $start_mem;
	if ($foot1 != '') { $foot1 .= '<br />'."\n"; }
	if ($foot2 != '') { $foot1 .= $foot2.'<br />'."\n"; }
	if ($foot3 != '') { $foot1 .= $foot3.'<br />'."\n"; }
	if (is_admin()) {
		$total_time = (microtime(true) - START_TIME - $db->time);
		$foot1 .= sprintf(_PAGEFOOTER, round($total_time,4), $db->num_queries, round($db->time,4));
		// only works if your PHP is compiled with the --enable-memory-limit configuration option
		if (function_exists('memory_get_usage') && $start_mem > 0) {
			$total_mem = memory_get_usage()-$start_mem;
			$foot1 .= '<br />Memory Usage: '.(($total_mem >= 1048576) ? round((round($total_mem / 1048576 * 100) / 100), 2).' MB' : (($total_mem >= 1024) ? round((round($total_mem / 1024 * 100) / 100), 2).' KB' : $total_mem.' Bytes'));
		}
		$foot1 .= '<br />';
	}
// MS-Analysis Entry
//	  require( "modules/MS_Analysis/mstrack.php" );
	$foot1 = '<div style="text-align:center;">'.$foot1.'
	Interactive software released under <a href="http://dragonflycms.org/GNUGPL.html" target="_blank" title="GNU Public License Agreement">GNU GPL</a>,
	<a href="'.URL::index('credits').'">Code Credits</a>,
	<a href="'.URL::index('privacy_policy').'">Privacy Policy</a></div>';

	if (is_admin() || CPG_DEBUG) {
		$GLOBALS['cpgtpl']->assign_var('S_DEBUG_SQL', (CPG_DEBUG || $GLOBALS['MAIN_CFG']['debug']['database'] ? $GLOBALS['cpgdebugger']->get_report('sql') : false));
		$GLOBALS['cpgtpl']->assign_var('S_DEBUG_PHP', $GLOBALS['cpgdebugger']->get_report('php'));
	}
	return $foot1;
}

global $db, $SESS, $cpgtpl, $Blocks;
$Blocks->display('d');
	themefooter();
//	$cpgtpl->assign_vars(array('S_FOOTER' => footmsg()));
//	$cpgtpl->set_filenames(array('footer' => 'footer.html'));
//	$cpgtpl->display('footer');
$cpgtpl->__destruct();
$SESS->write_close();
$db->sql_close();
exit;
