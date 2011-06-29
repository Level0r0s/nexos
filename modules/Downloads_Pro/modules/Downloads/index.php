<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2007 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/index.php,v $
  $Revision: 1.20 $
  $Author: phoenix $
  $Date: 2010/11/08 03:05:51 $
******************************************************/
if (!defined('CPG_NUKE')) { exit; }
require_once('includes/nbbcode.php');
require_once('modules/'.$module_name.'/functions/categories.inc');
require_once('modules/'.$module_name.'/functions/display.inc');
require_once('modules/'.$module_name.'/functions/info.inc');
require_once('modules/'.$module_name.'/functions/linking.inc');
//$modheader .= '<link rel="stylesheet" type="text/css" href="modules/'.$module_name.'/include/style.css" />';
$pagetitle .= $module_title;

if (isset($_GET['c'])) {
	require_once('modules/'.$module_name.'/include/view_cat.inc');
} elseif (isset($_GET['history'])) {
	require_once('modules/'.$module_name.'/include/history.inc');
} elseif (isset($_GET['friend']) || isset($_POST['preview_message']) || isset($_POST['send_message'])) {
	require_once('modules/'.$module_name.'/include/friend.inc');
} elseif (isset($_GET['review']) || isset($_POST['preview_review']) || isset($_POST['post_review']) || isset($_GET['del_review']) || isset($_GET['approve_review'])) {
	require_once('modules/'.$module_name.'/include/review.inc');
} elseif (isset($_GET['broken']) || isset($_POST['report_broken'])) {
	require_once('modules/'.$module_name.'/include/broken.inc');
} elseif (isset($_GET['email'])) {
	spam_image($_GET['email']);
} elseif ($mode == 'random') {
	list($dl_id) = $db->sql_ufetchrow("SELECT lid FROM ".$dl_prefix."_downloads 
		WHERE active=1 
		ORDER BY RAND() 
		", SQL_NUM);
	URL::redirect($dl_id ? URL::index('&amp;file=details&amp;id='.$dl_id) : URL::index());
}
elseif (isset($_GET['screen'])) {
	$cpgtpl->assign_vars(array(
		'DL_MENU'  => dl_menu(),
	));
	$screen_id = intval($_GET['screen']);
	list($dl_screen, $dl_title, $dl_active, $dl_id) = $db->sql_ufetchrow("SELECT s.url, d.title, d.active, d.lid FROM ".$dl_prefix."_screenshots s 
		LEFT JOIN ".$dl_prefix."_downloads d ON (d.lid = s.did) 
		WHERE s.id='$screen_id'", SQL_NUM);
	if (!isset($dl_title)) { URL::redirect(URL::index()); }
	if ($dl_active != 1 && !can_admin($module_name)) { URL::redirect(URL::index()); }
	$pagetitle .= ' '._BC_DELIM.' '._DLP_SCREENSHOTS.' '._BC_DELIM.' '.$dl_title;
	global $showblocks;
	$showblocks = 0;
	$i = 1;
	$result = $db->sql_query("SELECT id, url FROM ".$dl_prefix."_screenshots 
		WHERE did='$dl_id'");
	$num_screens = $db->sql_numrows($result);
	while ($row = $db->sql_fetchrow($result)) {
		$cpgtpl->assign_block_vars('screenies', array(
			'ID'  => $row['id'],
			'URL' => $row['url'],
			'NUM' => $i,
			'SEL' => ($row['id'] == $screen_id)
		));
		$i++;
	}
	$db->sql_freeresult($result);
	
	require_once('header.php');
	$cpgtpl->assign_vars(array(
		'DL_LINK' => URL::index('&amp;file=details&amp;id='.$dl_id),
		'DL_TITLE' => $dl_title,
		'L_SCREENSHOT' => _DLP_SCREENSHOTS,
		'IMG_SCREEN'   => $dl_screen,
		'MULT_SCREENS' => ($num_screens > 1),
		'BGCOLOR1' => $bgcolor1,
		'BGCOLOR3' => $bgcolor3,
		'TXTCOLOR2' => $textcolor2
	));
	$cpgtpl->set_filenames(array('body' => 'downloads/info.html'));
	$cpgtpl->display('body');
}
elseif (isset($_GET['time'])) {
	$dl_id = intval($_GET['time']);
	list($dl_title, $dl_size, $dl_active) = $db->sql_ufetchrow("SELECT d.title, m.filesize, d.active FROM ".$dl_prefix."_mirrors m, ".$dl_prefix."_downloads d 
		WHERE m.id='$dl_id' AND d.lid=m.did", SQL_NUM);
	if (!isset($dl_title)) { die('Download does not exist'); }
	if ($dl_active != 1 && !can_admin($module_name)) { die('Download not active'); }
	$cpgtpl->assign_vars(array(
		'S_CONTENT_DIRECTION' => _TEXT_DIR,
		'S_CONTENT_BASE'      => $BASEHREF,
		'TITLE'    => 'Estimated Download Time',
		'L_CLOSE'  => _DLP_CLOSEWINDOW,
		'MD5_FORM'  => false,
		'PEND_FORM' => false,
		'DL_TITLE'  => $dl_title,
		'DL_SIZE'   => notate_size($dl_size),
	));
	$cpgtpl->assign_block_vars('connection', array(
		'TYPE'     => 'Dial-up (56 kbs)',
		'ESTIMATE' => download_time(1, $dl_size)
	));
	$cpgtpl->assign_block_vars('connection', array(
		'TYPE'     => 'DSL (512 kbs)',
		'ESTIMATE' => download_time(2, $dl_size)
	));
	$cpgtpl->assign_block_vars('connection', array(
		'TYPE'     => 'Cable (1 mbps)',
		'ESTIMATE' => download_time(3, $dl_size)
	));
	$cpgtpl->assign_block_vars('connection', array(
		'TYPE'     => 'T1 (1.5 mbps)',
		'ESTIMATE' => download_time(4, $dl_size)
	));
	$cpgtpl->set_filenames(array('body' => 'downloads/popups.html'));
	$cpgtpl->display('body');
	exit;
}
elseif (isset($_GET['md5'])) {
	if (!$dl_config['md5_remote']) { die('Feature has been disabled'); }
	$mirror_id = intval($_GET['md5']);
	list($m_did, $m_uid, $m_md5, $m_upl) = $db->sql_ufetchrow("SELECT did, uid, md5, uploaded FROM ".$dl_prefix."_mirrors 
		WHERE id='$mirror_id'", SQL_NUM);
	if ($m_did < 0) {
		if (($m_did != -$userinfo['user_id']) && !can_admin($module_name)) { die('Access denied'); }
	} else {
		list($d_owner) = $db->sql_ufetchrow("SELECT submitter FROM ".$dl_prefix."_downloads 
			WHERE lid='$m_did'", SQL_NUM);
		if (($d_owner != $userinfo['user_id']) && !can_admin($module_name) && ($m_uid != $userinfo['user_id'])) { die('Access denied'); }
	}
	$success = false;
	if (isset($_POST['md5'])) {
		$db->sql_query("UPDATE ".$dl_prefix."_mirrors 
			SET md5='".Fix_Quotes($_POST['md5'])."' 
			WHERE id='$mirror_id'");
		$success = true;
	}
	$cpgtpl->assign_vars(array(
		'S_CONTENT_DIRECTION' => _TEXT_DIR,
		'S_CONTENT_BASE'      => $BASEHREF,
		'TITLE'               => _DLP_MD5UPDATE,
		
		'DL_TITLE'            => false,
		'MD5_FORM'            => true,
		'PEND_FORM'           => false,
		'U_FORM'              => URL::index('&amp;md5='.$mirror_id),
		'B_MD5'               => $m_md5,
		'NOT_REM'             => $m_upl,
		'SUCCESS'             => $success,
		
		'L_CLOSE'             => _DLP_CLOSEWINDOW,
		'L_MD5UPDATED'        => _DLP_MD5UPDATED,
		'L_MD5NOTREM'         => _DLP_MD5NOTREM
	));
	$cpgtpl->set_filenames(array('body' => 'downloads/popups.html'));
	$cpgtpl->display('body');
	exit;
}
elseif (isset($_GET['pmir'])) {
	require_once('modules/'.$module_name.'/functions/mirrors.inc');
	if (!$dl_config['pub_mirror'] && !can_admin($module_name)) { die('Feature disabled'); }
	$mirror_id = intval($_GET['pmir']);
	list($m_did, $m_uid, $m_active, $d_id, $d_owner, $m_submitter) = $db->sql_ufetchrow("SELECT m.did, m.uid, m.active, d.lid, d.submitter, u.username FROM ".$dl_prefix."_mirrors m
		LEFT JOIN ".$dl_prefix."_downloads d ON (d.lid = m.did)
		LEFT JOIN ".$user_prefix."_users u ON (u.user_id = m.uid)
		WHERE m.id='$mirror_id'", SQL_NUM);
	if (($d_owner != $userinfo['user_id']) && !can_admin($module_name)) { die('Access denied'); }
	if (isset($_POST['approve'])) {
		$db->sql_query("UPDATE ".$dl_prefix."_mirrors 
			SET active=1 
			WHERE id='$mirror_id'");
	} elseif (isset($_POST['reject'])) {
		DL_Mirror::delete($mirror_id, $d_id);
	}
	$cpgtpl->assign_vars(array(
		'S_CONTENT_DIRECTION' => _TEXT_DIR,
		'S_CONTENT_BASE'      => $BASEHREF,
		'TITLE'               => 'Activate pending mirror',
		
		'DL_TITLE'            => false,
		'MD5_FORM'            => false,
		'PEND_FORM'           => true,
		'ACTIVE'              => $m_active,
		'U_FORM'              => URL::index('&amp;pmir='.$mirror_id),
		'APPROVED'            => isset($_POST['approve']),
		'REJECTED'            => isset($_POST['reject']),
		'B_SUBMITTER'         => $m_submitter,
		
		'L_CLOSE'             => _DLP_CLOSEWINDOW,
		'L_APPROVE'           => _DLP_APPROVE,
		'L_REJECT'            => _DLP_REJECT,
		'L_MIRRORACTIVE'      => _DLP_MIRRORACTIVE,
		'L_MIRRORAPP'         => _DLP_MIRRORAPP,
		'L_MIRRORREJ'         => _DLP_MIRRORREJ,
		'L_SUBMITTEDBY'       => _DLP_SUBMITTEDBY
	));
	$cpgtpl->set_filenames(array('body' => 'downloads/popups.html'));
	$cpgtpl->display('body');
	exit;
}
elseif (isset($_GET['get'])) {
	$get_id = intval($_GET['get']);
	list($dl_title, $dl_pick, $dl_active, $dl_access, $dl_submitter) = $db->sql_ufetchrow("SELECT title, pick, active, access, submitter FROM ".$dl_prefix."_downloads 
		WHERE lid='$get_id'", SQL_NUM);
	if (!isset($dl_title)) { cpg_error(_DLP_UNKNOWNDL, 404); }
	can_download($dl_active, $dl_access, true);
	$pagetitle .= ' '._BC_DELIM.' '._DLP_DLNOW;

	if (isset($_GET['mirror'])) {
		if (!isset($CPG_SESS['user']['uri']) || empty($CPG_SESS['user']['uri'])) {
			URL::redirect(URL::index('&file=details&id='.$get_id));
		}
		$mirror_id = intval($_GET['mirror']);
		if ($mirror = $db->sql_ufetchrow("SELECT url, filename, active FROM ".$dl_prefix."_mirrors 
				WHERE id=$mirror_id", SQL_NUM)) {
			list($dl_url, $dl_filename, $mirror_active) = $mirror;
		} else {
			cpg_error(_DLP_UNKNOWNDL, 404);
		}
		if (!$mirror_active) {
			cpg_error(_DLP_INACTIVEDL);
		}
		$remote = ereg('://', $dl_url);
		$fetchpage = (($remote && $dl_config['use_fetch_remote']) || (!$remote && $dl_config['use_fetch']));
		if ($fetchpage) {
			if (isset($_POST['gfx_check'])) {
				if (validate_secimg()) {
					$fetchpage = false;
				} else {
					$pagetitle .= ' '._BC_DELIM.' Error';
					$error = 'Incorrect security code. Please type the code exactly as it appears.';
				}
			} else {
				$pagetitle .= ' '._BC_DELIM.' '.$dl_title;
				$error = '';
			}
		} else {
			$pagetitle .= ' '._BC_DELIM.' Confirmation';
		}
		if ($fetchpage) {
			require_once('header.php');
			$cpgtpl->assign_vars(array(
				'DL_DETAIL_MENU'  => dl_detail_menu($get_id, $dl_title, $dl_pick, $dl_active, 2),
				'L_DL_FILE'  => _DLP_DLNOW,
				'S_DL_NOW'   => false,
				'S_DL_DESC1' => 'Please type the security code displayed below.',
				'S_DL_DESC2' => 'Clicking "Download Now" will transfer you to the appropriate download location.',
				'S_ERRORS'   => (!empty($error) ? display_errors($error) : ''),
				'U_DL_FORM'  => URL::index("&amp;get=$get_id&amp;mirror=$mirror_id"),
				'L_SECURITYCODE' => _SECURITYCODE,
				'IMG_SECCODE'    => generate_secimg(),
				'L_TYPESECCODE'  => _TYPESECCODE,
				'L_GET_DOWNLOAD' => _DLP_DLNOW
			));
		} else {
			if (!is_admin() && $dl_submitter != is_user()) {
				$time = time();
				$time_year = generate_date($time, 'Y');
				$time_month = generate_date($time, 'm');
				if (!$db->sql_query("UPDATE ".$dl_prefix."_stats 
						SET hits=hits+1 
						WHERE id='$get_id' AND year='$time_year' AND month='$time_month'", true) || !$db->sql_affectedrows()) {
					$db->sql_query('INSERT INTO '.$dl_prefix."_stats 
						(id, year, month, hits) 
						VALUES 
						($get_id, $time_year, $time_month, 1)", false);
				}
			}
			if (($remote && !$dl_config['leech_remote']) || (!$remote && !$dl_config['leech_local'])) {
				url_refresh($dl_url, 5);
				require_once('header.php');
				$cpgtpl->assign_vars(array(
					'DL_DETAIL_MENU'  => dl_detail_menu($get_id, $dl_title, $dl_pick, $dl_active, 2),
					'L_DL_FILE' => _DLP_DLNOW,
					'S_DL_NOW'  => 'Your download will begin in five seconds...<br /><br />If the file has not started to download after five seconds, get it <a href="'.$dl_url.'">here</a>.'
				));
			} else {
				require_once('includes/classes/cpg_file.php');
				if (!CPG_File::secure_download($error, $dl_url, $dl_filename)) {
					$db->sql_query("INSERT INTO ".$dl_prefix."_broken 
					(id, lid, mid, uid, report, date, ip)
					VALUES 
					(DEFAULT, '$get_id', '$mirror_id', '".$userinfo['user_id']."', 'Automatically submitted: ".Fix_Quotes($error)."', '".time()."', '".$userinfo['user_ip']."')");
					cpg_error('<strong>File is not available for download</strong><br /><br />A broken mirror report has been filed. You can try <a href="'.URL::index('&amp;get='.$get_id).'">selecting a different mirror</a>.<br /><br />We apologize for the inconvenience.', 'Broken Mirror');
				}
				exit;
			}
		}
		$cpgtpl->set_filenames(array('body' => 'downloads/fetchpage.html'));
	}
	// Show list of mirrors
	else {
		$pagetitle .= ' '._BC_DELIM.' Select Mirror';
		$result = $db->sql_uquery('SELECT * FROM '.$dl_prefix."_mirrors 
			WHERE did=$get_id AND active=1 
			ORDER BY url");
		$cpgtpl->assign_vars(array(
			'DL_DETAIL_MENU' => dl_detail_menu($get_id, $dl_title, $dl_pick, $dl_active, 2),
			'L_DL_FILE'  => _DLP_DLNOW.' '._BC_DELIM.' Select Mirror',
			'S_DL_DESC1' => sprintf('Please select a mirror below.', $dl_title),
			'S_DL_DESC2' => 'Not all mirrors may have the latest version of the file available.',
			'L_LOCATION' => 'Location',
			'L_FILENAME' => _FILENAME,
			'L_FILESIZE' => _FILESIZE,
			'L_MD5_SUM'  => 'MD5 Sum',
			'L_VIEW_ESTIMATE' => 'View estimated download time',
			'MD5_SET'    => ($dl_config['md5_local'] || $dl_config['md5_remote'])
		));
		while ($mirror = $db->sql_fetchrow($result)) {
			$site = false;
			if (ereg('://', $mirror['url'])) {
				if (is_admin() || is_user() || $dl_config['anon_dl_remote']) {
					$url = parse_url($mirror['url']);
					$site = '<a href="'.$url['scheme'].'://'.$url['host'].'" target="_blank">'.$url['host'].'</a>';
				}
			} elseif (is_admin() || is_user() || $dl_config['anon_dl']) {
				$site = $MAIN_CFG['server']['domain'];
			}
			if ($site) {
				$filename = basename($mirror['url']);
				$cpgtpl->assign_block_vars('mirror', array(
					'FILENAME' => $filename,
					'S_MD5'    => ((($mirror['uploaded'] && !$dl_config['md5_local']) || (!$mirror['uploaded'] && !$dl_config['md5_remote'])) ? 'N/A' : $mirror['md5']),
					'S_SITE'   => $site,
					'S_SIZE'   => notate_size($mirror['filesize']),
					'U_GET'    => URL::index("&amp;get=$get_id&amp;mirror=".$mirror['id']),
					'U_BROKEN' => URL::index('&amp;broken='.$mirror['id']),
					'U_POPUP'  => URL::index('&amp;time='.$mirror['id'], false, true)
				));
			}
		}
		require_once('header.php');
		$cpgtpl->set_filenames(array('body' => 'downloads/mirrors.html'));
	}
	$cpgtpl->display('body');
}
else {
	require_once('header.php');

// Editors pick
	$result = $db->sql_query("SELECT d.lid, d.cid, d.title, d.desc_short, d.screen, s.url as img_url FROM ".$dl_prefix."_downloads d
		LEFT JOIN ".$dl_prefix."_screenshots s ON (s.id = d.screen)
		WHERE d.pick=1 AND d.active=1 
		ORDER BY RAND()");
	$count = $db->sql_numrows($result);
	$cpgtpl->assign_vars(array(
		'B_EDITORSPICK' => $count,
	));
	if ($count) {
		$picks = $db->sql_fetchrowset($result);
		$cpgtpl->assign_vars(array(
			'L_READ_MORE' => 'Details',
			'U_MOREPICKS' => URL::index('&amp;file=search&amp;key=pick'),
			'L_MOREPICKS' => 'View more featured',
			'L_VIEW_SHOT' => 'View Screenshot',
			'L_FEATURED'  => 'Featured download',
			'TITLE'     => $picks[0]['title'],
			'SRC_IMG'     => dl_thumbimage($picks[0]['img_url']),
			'URL_IMG'     => URL::index('&amp;screen='.$picks[0]['screen']),
			'DESC'        => nl2br($picks[0]['desc_short']),
			'DETAILS'     => URL::index('&amp;file=details&amp;id='.$picks[0]['lid']),
		));
		unset($picks);
	}
	$db->sql_freeresult($result);

// Categories
	DL_Cat::show();

// Latest downloads
	$entries = array();
	$result = $db->sql_uquery("SELECT lid, title, date FROM ".$dl_prefix."_downloads 
		WHERE active=1 AND updated<=date 
		ORDER BY date DESC 
		LIMIT $dl_config[front_rank]");
	while ($entry = $db->sql_fetchrow($result)) {
		$entry['new'] = true;
		$entries[$entry['date']] = $entry;
	}
	$result = $db->sql_uquery("SELECT lid, title, updated FROM ".$dl_prefix."_downloads 
		WHERE active=1 AND updated>date 
		ORDER BY updated DESC 
		LIMIT $dl_config[front_rank]");
	while ($entry = $db->sql_fetchrow($result)) {
		$entry['new'] = false;
		$entries[$entry['updated']] = $entry;
	}
	ksort($entries);
#  Top downloads
	$result2 = $db->sql_query("SELECT DISTINCT d.lid, d.title, SUM(s.hits) AS hits FROM ".$dl_prefix."_downloads d
	LEFT JOIN ".$dl_prefix."_stats s ON (s.id = d.lid)
	WHERE d.active=1 
	GROUP BY d.lid, d.title 
	ORDER BY hits DESC 
	LIMIT $dl_config[front_rank]");
	$show = false;
	if (count($entries) && $db->sql_numrows($result2)) {
		$cpgtpl->assign_vars(array(
			'LATEST_DOWNLOADS' => sprintf('Recently added or updated', $dl_config['front_rank']),
			'TOP_DOWNLOADS' => sprintf('Top %s downloads', $dl_config['front_rank'])
		));
		$color = '';
		for ($i=0; $i<$dl_config['front_rank']; $i++) {
			$row = array_pop($entries);
			if (!isset($row)) { break; }
			$color = ($color == $bgcolor1) ? $bgcolor3 : $bgcolor1;
			$cpgtpl->assign_block_vars('latest', array(
				'NUM' => $i+1,
				'COLOR'   => $color,
				'S_TITLE' => $row['title'],
				'S_TYPE'  => ($row['new'] ? _NEW : 'Update'),
				'U_DETAILS' => URL::index('&amp;file=details&amp;id='.$row['lid'])
			));
		}
		$color = $bgcolor3;
		$i = 0;
		while (list($pop_id, $pop_title, $pop_hits) = $db->sql_fetchrow($result2)) {
			$color = ($color == $bgcolor1) ? $bgcolor3 : $bgcolor1;
			$cpgtpl->assign_block_vars('top', array(
				'NUM' => $i+1,
				'COLOR'   => $color,
				'S_TITLE' => $pop_title,
				'S_HITS'  => $pop_hits.' '.strtolower(_HITS),
				'U_DETAILS' => URL::index('&amp;file=details&amp;id='.$pop_id)
			));
			$i++;
		}
		$show = true;
	}
	$cpgtpl->assign_vars(array(
		'DL_MENU'  => dl_menu(),
		'B_LATEST_TOP' => $show
	));
	$db->sql_freeresult($result2);
	$cpgtpl->set_filenames(array('body' => 'downloads/index.html'));
	$cpgtpl->display('body');
}
