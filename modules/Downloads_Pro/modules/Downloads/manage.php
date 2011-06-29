<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2007 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/manage.php,v $
  $Revision: 1.21 $
  $Author: phoenix $
  $Date: 2010/11/08 03:05:51 $
******************************************************/
if (!defined('CPG_NUKE')) { exit; }
if (!is_user()) { URL::redirect(URL::index()); }

require_once('includes/nbbcode.php');
require_once('modules/'.$module_name.'/functions/categories.inc');
require_once('modules/'.$module_name.'/functions/display.inc');
require_once('modules/'.$module_name.'/functions/info.inc');
require_once('modules/'.$module_name.'/functions/mirrors.inc');
require_once('modules/'.$module_name.'/functions/screenshots.inc');

$pagetitle .= $module_title.' '._BC_DELIM.' Download Management';
if (isset($_GET['mirrors'])) {
	if (!$dl_config['pub_mirror']) { URL::redirect(URL::index()); }
	$mng_id = intval($_GET['mirrors']);
	list($dl_active, $dl_submitter, $dl_title) = $db->sql_ufetchrow("SELECT active, submitter, title FROM ".$dl_prefix."_downloads 
		WHERE lid='$mng_id'", SQL_NUM);
	if (($dl_submitter == $userinfo['user_id']) || can_admin($module_name)) {
		URL::redirect(URL::index('&file=manage&edit='.$mng_id));
	}
	if ($dl_active == 0) { cpg_error(_DLP_INACTIVEDL); }
	$warnings = $errors = array();
	if (isset($_POST['submit_mirrors'])) {
		cpg_error('Thanks for submitting mirrors for this download. Please keep in mind that newly submitted mirrors are subject to admin approval before they are posted.', _TB_INFO, URL::index('&amp;file=details&amp;id='.$mng_id));
	}
	if (isset($_POST['add_mirror'])) {
		DL_Mirror::add($mng_id, $warnings, $errors, null, 0);
	} elseif (isset($_POST['upd_mirror'])) {
		foreach ($_POST['upd_mirror'] as $mirror_id => $dummy) {
			DL_Mirror::update($mirror_id, $mng_id, $_POST['mirrors'][$mirror_id], $warnings, $errors);
		}
	} elseif (isset($_POST['del_mirror'])) {
		foreach ($_POST['del_mirror'] as $mirror_id => $dummy) {
			DL_Mirror::delete($mirror_id, $mng_id);
		}
	}
	require_once('header.php');
	$cpgtpl->assign_vars(array(
		'DL_MENU'       => '<span class="gen"><strong>My Downloads</strong></span><br /><a href="'.URL::index().'">Main Page</a> | <a href="'.URL::index('&amp;file=manage').'">Current Downloads</a> | <a href="'.URL::index('&amp;file=manage&amp;s=1').'">Pending Downloads</a> | <a href="'.URL::index('&amp;file=manage&amp;s=2').'">Broken D/L Reports</a>',
		'DL_ERRORS'     => !empty($errors),
		'DL_WARNINGS'   => !empty($warnings),
		'DL_MIRRORS'    => DL_Mirror::output_list($mng_id, $userinfo['user_id']),
		'IS_NEW_DL'     => false,
		'B_UPL_FILE'    => ($dl_config['upl_file'] || can_admin($module_name)),
		'B_REM_MD5'     => $dl_config['md5_remote'],
		'L_YES'         => _YES,
		'L_NO'          => _NO,
		'L_DELETE'      => _DELETE,
		'L_UPDATE'      => 'Update',
		'L_MD5'         => 'MD5',
		'DL_TITLE'      => $dl_title,
		'U_DL_FORM'     => URL::index('&amp;file=manage&amp;mirrors='.$mng_id)
	));
	foreach ($errors as $error) {
		$cpgtpl->assign_block_vars('dl_errors', array('S_ENTRY' => $error));
	}
	foreach ($warnings as $warning) {
		$cpgtpl->assign_block_vars('dl_warnings', array('S_ENTRY' => $warning));
	}
	$cpgtpl->set_filenames(array('body' => 'downloads/mirror_sub.html'));
	$cpgtpl->display('body');
}
elseif (isset($_GET['edit'])) {
	$mng_id = intval($_GET['edit']);
	list($auth_title, $auth_submitter, $auth_active, $auth_broken) = $db->sql_ufetchrow("SELECT d.title, d.submitter, d.active, count(b.id) FROM ".$dl_prefix."_downloads d
		LEFT JOIN ".$dl_prefix."_broken b ON (b.lid = d.lid)
		WHERE d.lid='$mng_id' 
		GROUP BY d.lid", SQL_NUM);
	if ($auth_active == 0 && !can_admin($module_name)) { cpg_error('The specified download is not active'); }
	if ($auth_submitter != $userinfo['user_id'] && !can_admin($module_name)) {
		cpg_error('You do not have permission to manage '.(isset($auth_title) ? '<strong>'.$auth_title.'</strong>' : 'this download'), 401);
	}
	$row = $db->sql_ufetchrow("SELECT * FROM ".$dl_prefix."_downloads 
		WHERE lid='$mng_id'");
	if ($row['active'] == 2 && can_admin($module_name)) {
		if (isset($_POST['approveDownload'])) {
			$time = time();
			$time_year = generate_date($time, 'Y');
			$time_month = generate_date($time, 'm');
			$db->sql_query("INSERT INTO ".$dl_prefix."_stats 
			(id, year, month, hits, views)
			VALUES 
			('$mng_id', '$time_year', '$time_month', 0, 0)");
			$db->sql_query("UPDATE ".$dl_prefix."_downloads 
			SET date='".time()."', active=1 
			WHERE lid=$mng_id 
			LIMIT 1");
		} elseif (isset($_POST['rejectDownload'])) {
			DL_Mirror::delete('all', $mng_id);
			$db->sql_query("DELETE FROM ".$dl_prefix."_downloads 
				WHERE lid=$mng_id");
			$db->sql_query("DELETE FROM ".$dl_prefix."_history 
				WHERE id=$mng_id");
			URL::redirect($MAIN_CFG['server']['path'].URL::admin('&mode=pending'));
		}
	}
	$warnings = $errors = array();
	if (!isset($_POST['in'])) {
		$in = $row;
		$in['cat'] =& $in['cid'];
		$in['reason'] = '';
		$in['screen'] = intval($in['screen']);
	} else {
		$in = $_POST['in'];
		$in['screen'] = isset($in['screen']) ? intval($in['screen']) : 0;
	// Mirror management
		if (isset($_POST['add_mirror'])) {
			DL_Mirror::add($mng_id, $warnings, $errors);
		} elseif (isset($_POST['upd_mirror'])) {
			foreach ($_POST['upd_mirror'] as $mirror_id => $dummy) {
				DL_Mirror::update($mirror_id, $mng_id, $_POST['mirrors'][$mirror_id], $warnings, $errors);
			}
		} elseif (isset($_POST['del_mirror'])) {
			foreach ($_POST['del_mirror'] as $mirror_id => $dummy) {
				DL_Mirror::delete($mirror_id, $mng_id);
			}
		}
		// Screenshot management
		elseif (isset($_POST['add_image'])) {
			DL_Image::add($mng_id, $warnings, $errors);
		} elseif (isset($_POST['upd_image'])) {
			foreach ($_POST['upd_image'] as $image_id => $dummy) {
				DL_Image::update($image_id, $mng_id, $_POST['images'][$image_id], $warnings, $errors);
			}
		} elseif (isset($_POST['del_image'])) {
			foreach ($_POST['del_image'] as $image_id => $dummy) {
				DL_Image::delete($image_id, $mng_id);
			}
		}
		// Store the new download in the database
		else {
			$value_list = '';
			$result = $db->sql_uquery("SELECT * FROM ".$dl_prefix."_fields 
				WHERE visible > 0".(!can_admin($module_name) ? ' AND visible < 3' : ''));
			while (list($f_id, $f_field, $f_title, $f_visible, $f_type, $f_size) = $db->sql_fetchrow($result)) {
				$f_title = defined($f_title) ? constant($f_title) : $f_title;
				if (empty($in[$f_field]) && $f_visible == 2) {
					$errors[] = sprintf(_ERROR_NOT_SET, $f_title);
				} else {
					$val = Fix_Quotes($in[$f_field], 1);
					//if (strlen($val) > 0) {
						$val = ($f_type == 1 || $f_type == 3) ? intval($val) : substr($val, 0, $f_size);
						$value_list .= ", $f_field='$val'";
						$fields[$f_field] = htmlprepare($val);
					//}
				}
			}
			check_dl_details($_POST['in'], $errors);
			if ($db->sql_count($dl_prefix.'_mirrors', "did=$mng_id") < 1) {
				$errors[] = 'You must specify at least 1 download URL';
			}
			if (empty($errors)) {
				$fields['title'] = Fix_Quotes($in['title'], true);
				$fields['screen'] = $in['screen'];
				$fields['cid'] = intval($in['cat']);
				$fields['desc_short'] = Fix_Quotes($in['desc_short'], true);
				$fields['desc_long'] = Fix_Quotes($in['desc_long'], true);
				$fields['notes'] = isset($in['notes']) ? Fix_Quotes($in['notes']) : '';
				$fields['reason'] = isset($in['reason']) ? Fix_Quotes($in['reason']) : '';
				$fields['name'] = Fix_Quotes($in['name'], true);
				$fields['email'] = Fix_Quotes($in['email'], true);
				$fields['access'] = intval(can_admin($module_name) ? $in['access'] : $row['access']);
				$time = '';
				// update version history
				//list($active, $cur_vers) = $db->sql_ufetchrow("SELECT active, version FROM ".$dl_prefix."_downloads WHERE lid=$mng_id", SQL_NUM, __FILE__, __LINE__);
				if (isset($fields['version']) && $row['version'] != $fields['version']) {
					if (empty($fields['reason'])) {
						cpg_error(sprintf(_ERROR_NOT_SET, 'Reason for version change'));
					}
					$vers_aid = $userinfo['user_id'];
					$db->sql_query("INSERT INTO ".$dl_prefix."_history VALUES ($mng_id, '$fields[version]', $vers_aid, ".time().", '$fields[reason]')");
					$value_list .= ", updated=".time();
				}
				//$value_list .= ", updated=".time();
				// Store updated download
				$db->sql_query("UPDATE ".$dl_prefix."_downloads 
					SET cid=$fields[cid], access=$fields[access], title='$fields[title]', screen='$fields[screen]', desc_short='$fields[desc_short]', desc_long='$fields[desc_long]', notes='$fields[notes]', name='$fields[name]', email='$fields[email]'".$value_list." 
					WHERE lid='$mng_id'");
				DL_Cat::count_dl();
				$redirect = (($row['active'] == 2) ? URL::index('&amp;file=manage&amp;s=1', true, true) : URL::index('&amp;file=details&amp;id='.$mng_id, true, true));
				if (isset($_POST['approveDownload'])) {
					cpg_error('The download has been added to the database', _TB_INFO, $MAIN_CFG['server']['path'].URL::admin('&amp;mode=pending'));
				} else {
					cpg_error('The new information has been stored in our system', _TB_INFO, $redirect);
				}
			}
		}
	}
	$pagetitle .= ' '._BC_DELIM.' Edit Download';

	$cats = array();
	DL_Cat::list_all($cats);
	if (count($cats) < 1) { cpg_error('There are no categories in which you can add a download'); }

	if (can_admin($module_name) || $dl_config['user_catparent']) {
		$selects = DL_Cat::selectbox($in['cat'], 'in[cat]', false);
	} else {
		$selects = '<select class="set" name="in[cat]" id="in[cat]">
	<option selected="selected" label="none" value="none">select a category</option>';
		foreach ($cats as $cat) {
			if ($cat['level'] == 1) {
				if ($selects != '') $selects .= '</optgroup>';
				$selects .= '<optgroup label="'.$cat['crumb'].'">';
			} else {
				$selects .= '<option value="'.$cat['cid'].'"'.(($cat['cid'] == $in['cat']) ? ' selected="selected"' : '').'>'.$cat['crumb'].'</option>';
			}
		}
		$selects .= '</optgroup></select>';
	}

	require_once('header.php');
	$images = DL_Image::output_list($mng_id, $in['screen']);
	$cpgtpl->assign_vars(array(
		'DL_MENU'       => '<span class="gen"><strong>My Downloads</strong></span><br /><a href="'.URL::index().'">Main Page</a> | <a href="'.URL::index('&amp;file=manage').'">Current Downloads</a> | <a href="'.URL::index('&amp;file=manage&amp;s=1').'">Pending Downloads</a> | <a href="'.URL::index('&amp;file=manage&amp;s=2').'">Broken D/L Reports</a>',
		'DL_ERRORS'     => !empty($errors),
		'DL_WARNINGS'   => !empty($warnings),
		'DL_MIRRORS'    => DL_Mirror::output_list($mng_id),
		'DL_IMAGES'     => $images,
		'IS_NEW_DL'     => false,
		'CAN_ADMIN'     => can_admin($module_name),
		'B_SCREENSHOT'  => ($dl_config['screen_active'] || can_admin($module_name)),
		'B_ADD_IMAGE'   => ($dl_config['screen_active'] && $images < $dl_config['screen_max']),
		'B_NOTES'       => can_admin($module_name),
		'B_REASON'      => true,
		'B_UPL_FILE'    => ($dl_config['upl_file'] || can_admin($module_name)),
		'B_UPL_IMAGE'   => ($dl_config['upl_image'] || can_admin($module_name)),
		'B_PENDING'     => ($row['active'] == 2 && can_admin($module_name)),
		'B_FETCH_PAD'   => false,
		'B_REM_MD5'     => $dl_config['md5_remote'],
		'L_YES'         => _YES,
		'L_NO'          => _NO,
		'L_DELETE'      => _DELETE,
		'L_UPDATE'      => 'Update',
		'L_CATEGORY'	=> _CATEGORY,
		'L_SHORT_DESC'  => 'Short Description',
		'L_MAX_CHARS'   => sprintf(_M_CHARS, 255),
		'L_DESCRIPTION' => _DESCRIPTION,
		'L_AUTHORNAME'  => _AUTHORNAME,
		'L_AUTHOREMAIL' => _AUTHOREMAIL,
		'L_MD5'         => 'MD5',
		'L_PENDING'     => 'Pending',
		'S_BBCODE'      => bbcode_table('in[desc_long]', 'add_download', true),
		'DL_TITLE'      => htmlprepare($in['title']),
		'DL_ACCESS'     => group_selectbox('in[access]', $in['access']),
//		'DL_SCREEN'     => $in['screen'],
		'DL_CATSEL'     => $selects,
		'DL_DESC_SHORT' => htmlprepare($in['desc_short']),
		'DL_DESC_LONG'  => htmlprepare($in['desc_long']),
		'DL_NOTES'      => (isset($in['notes']) ? htmlprepare($in['notes']) : ''),
		'DL_REASON'     => htmlprepare($in['reason']),
		'DL_NAME'       => htmlprepare($in['name']),
		'DL_EMAIL'      => $in['email'],
		'U_DL_FORM'     => URL::index('&amp;file=manage&amp;edit='.$mng_id),
	));
	foreach ($errors as $error) {
		$cpgtpl->assign_block_vars('dl_errors', array('S_ENTRY' => $error));
	}
	foreach ($warnings as $warning) {
		$cpgtpl->assign_block_vars('dl_warnings', array('S_ENTRY' => $warning));
	}

	$result = $db->sql_uquery("SELECT * FROM ".$dl_prefix."_fields 
		WHERE visible > 0".(!can_admin($module_name) ? ' AND visible < 3' : '')." 
		ORDER BY title");
	while ($field = $db->sql_fetchrow($result)) {
		$f_title = defined($field['title']) ? constant($field['title']) : $field['title'];
		$f_title = ($field['visible'] == 2) ? '* '.$f_title : $f_title;
		if ($field['type'] == 1 || $field['type'] == 3) {
			$f_value = isset($in[$field['field']]) ? intval($in[$field['field']]) : $field['size'];
			$f_value = ($f_value > 0) ? array(' checked="checked"', '') : array('', ' checked="checked"');
			$cpgtpl->assign_block_vars('fields', array(
				'TITLE' => $f_title,
				'TYPE'  => $field['type'],
				'NAME'  => $field['field'],
				'S_YES' => $f_value[0],
				'S_NO'  => $f_value[1]
			));
		} else {
			$f_value = isset($in[$field['field']]) ? htmlprepare($in[$field['field']]) : '';
			$cpgtpl->assign_block_vars('fields', array(
				'TITLE' => $f_title,
				'TYPE'  => $field['type'],
				'NAME'  => $field['field'],
				'SIZE'  => $field['size'],
				'VALUE' => $f_value
			));
		}
	}
	$cpgtpl->set_filenames(array('body' => 'downloads/manage.html'));
	$cpgtpl->display('body');
} // end modify download

else {
	require_once('modules/'.$module_name.'/functions/linking.inc');
	$section = isset($_GET['s']) ? intval($_GET['s']) : 0;
	$pagetitle .= ' '._BC_DELIM.' My Downloads';
	
	// pagination
	$cur_page = (isset($_GET['page']) && $_GET['page'] > 0) ? intval($_GET['page']) : 1;
	$perpage = $dl_config['perpage'];
	$limit = ($cur_page-1)*$perpage;
	
	if ($section == 1) {
		$pagetitle .= ' '._BC_DELIM.' Pending';
		$total_author = $db->sql_count($dl_prefix.'_downloads',  "submitter='$userinfo[user_id]' AND active=2");
		$cpgtpl->assign_vars(array(
			'L_CATEGORY' => _CATEGORY,
			'DL_MENU' => '<span class="gen"><strong>My Downloads</strong></span><br /><a href="'.URL::index().'">Main Page</a> | <a href="'.URL::index('&amp;file=manage').'">Current Downloads</a> | <strong>Pending Downloads</strong> | <a href="'.URL::index('&amp;file=manage&amp;s=2').'">Broken D/L Reports</a>',
			'DL_NO_ITEMS' => ($total_author < 1) ? sprintf(_ERROR_NONE_TO_DISPLAY, 'pending downloads') : false,
			'DL_PAGINATION' => (ceil($total_author/$perpage) > 1) ? gen_pagination($total_author, $perpage, $cur_page, '&amp;file=manage&amp;s=1') : false
		));
		if ($total_author) {
			$result = $db->sql_query("SELECT lid, cid, title, date FROM ".$dl_prefix."_downloads 
				WHERE submitter='$userinfo[user_id]' AND active=2 
				LIMIT $pergage OFFSET $limit");
			while ($row = $db->sql_fetchrow($result)) {
				$cpgtpl->assign_block_vars('dl_item', array(
					'TITLE' => $row['title'],
					'U_EDIT' => URL::index('&amp;file=manage&amp;edit='.$row['lid']),
					'CATEGORY' => DL_Cat::breadcrumb($row['cid']),
					'DATE' => generate_date($row['date'])
				));
			}
			$db->sql_freeresult($result);
		}
		$cpgtpl->set_filenames(array('body' => 'downloads/my_pending.html'));
	}
	elseif ($section == 2) {
		global $bgcolor1, $bgcolor2, $bgcolor3;
		if (isset($_GET['dismiss'])) {
			$dismiss_id = intval($_GET['dismiss']);
			list($dismiss_parent, $dismiss_owner) = $db->sql_ufetchrow("SELECT b.lid, d.submitter FROM ".$dl_prefix."_broken b
				LEFT JOIN ".$dl_prefix."_downloads d ON (d.lid = b.lid)
				WHERE b.id='$dismiss_id'", SQL_NUM);
			if ($dismiss_owner != $userinfo['user_id']) { cpg_error(_ACCESSDENIED, 401); }
			$db->sql_query("DELETE FROM ".$dl_prefix."_broken 
				WHERE id='$dismiss_id'");
			URL::redirect(URL::index('&file=manage&s=2'));
		}
		$pagetitle .= ' '._BC_DELIM.' Broken Download Reports';
		$sql = "SELECT b.id, b.uid, b.report, b.date, d.lid, d.title, m.id AS mirror_id, m.url AS mirror_url, u.username FROM ".$dl_prefix."_broken b
			LEFT JOIN ".$dl_prefix."_downloads d ON (d.lid = b.lid)
			LEFT JOIN ".$dl_prefix."_mirrors m ON (m.id = b.mid)
			LEFT JOIN ".$user_prefix."_users u ON (u.user_id = b.uid)
			WHERE d.submitter='$userinfo[user_id]' 
			ORDER BY b.id";
		$result = $db->sql_query($sql);
		$total_author = $db->sql_numrows($result);

		$cpgtpl->assign_vars(array(
			'DL_MENU' => '<span class="gen"><strong>My Downloads</strong></span><br /><a href="'.URL::index().'">Main Page</a> | <a href="'.URL::index('&amp;file=manage').'">Current Downloads</a> | <a href="'.URL::index('&amp;file=manage&amp;s=1').'">Pending Downloads</a> | <strong>Broken D/L Reports</strong>',
			'DL_NO_ITEMS' => ($total_author < 1) ? sprintf(_ERROR_NONE_TO_DISPLAY, 'reports') : false,
			'TABLE_BGCOLOR' => $bgcolor2
		));
		if ($total_author) {
			$bgcolor = $bgcolor3;
			while ($row = $db->sql_fetchrow($result)) {
				$bgcolor = ($bgcolor == $bgcolor2) ? $bgcolor3 : $bgcolor2;
				if (ereg('://', $row['mirror_url'])) {
					$url = parse_url($row['mirror_url']);
					$site = shrink_url($url['host']);
				} else {
					$site = $MAIN_CFG['server']['domain'];
				}
				$cpgtpl->assign_block_vars('dl_item', array(
					'BGCOLOR' => $bgcolor,
					'DATE' => generate_date($row['date']),
					'TITLE' => $row['title'],
					'URL' => URL::index('&amp;file=details&amp;id='.$row['id']),
					'MIRROR' => $row['mirror_url'],
					'MIRROR_SITE' => $site,
					'REPORT' => $row['report'],
					'U_USER' => URL::index('Your_Account&amp;profile='.$row['uid']),
					'USERNAME' => $row['username'],
					'U_DISMISS' => URL::index('&amp;file=manage&amp;s=2&amp;dismiss='.$row['id']),
					'U_EDIT' => URL::index('&amp;file=manage&amp;edit='.$row['lid'])
				));
			}
		}
		$db->sql_freeresult($result);
		$cpgtpl->set_filenames(array('body' => 'downloads/my_broken.html'));
	}
	else {
		$pagetitle .= ' '._BC_DELIM.' Current';
		$total_author = $db->sql_count($dl_prefix.'_downloads',  "submitter='$userinfo[user_id]' AND active!=2");
		$cpgtpl->assign_vars(array(
			'L_CATEGORY' => _CATEGORY,
			'L_EDIT' => _EDIT,
			'DL_MENU' => '<span class="gen"><strong>My Downloads</strong></span><br /><a href="'.URL::index().'">Main Page</a> | <strong>Current Downloads</strong> | <a href="'.URL::index('&amp;file=manage&amp;s=1').'">Pending Downloads</a> | <a href="'.URL::index('&amp;file=manage&amp;s=2').'">Broken D/L Reports</a>',
			'DL_NO_ITEMS' => ($total_author < 1) ? sprintf(_ERROR_NONE_TO_DISPLAY, strtolower(_DOWNLOADS)) : false,
			'DL_PAGINATION' => (ceil($total_author/$perpage) > 1) ? gen_pagination($total_author, $perpage, $cur_page, '&amp;file=manage') : false
		));
		if ($total_author) {
			$rating = $db->sql_query("SELECT lid, SUM(score)/COUNT(lid) AS score FROM ".$dl_prefix."_ratings 
			GROUP BY lid");
			while ($rows = $db->sql_fetchrow($rating)) {
				$ratings[$rows[0]]['score'] = $rows[1];
			}
			$result = $db->sql_query("SELECT d.lid, d.cid, d.title, d.active, d.desc_short, SUM(s.hits) as hits, SUM(s.views) as views FROM ".$dl_prefix."_downloads d
				LEFT JOIN ".$dl_prefix."_stats s ON (s.id = d.lid)
				WHERE d.submitter='$userinfo[user_id]' AND d.active!=2 
				GROUP BY d.lid, d.cid, d.title, d.active, d.desc_short 
				LIMIT $perpage OFFSET $limit");
			while ($row = $db->sql_fetchrow($result)) {
				$rating_info = isset($ratings[$row['lid']]['score']) ? get_rating($ratings[$row['lid']]['score'], 1) : get_rating(0,0);
				$cpgtpl->assign_block_vars('dl_item', array(
					'TITLE' => $row['title'],
					'U_DETAILS' => URL::index('&amp;file=details&amp;id='.$row['lid']),
					'U_EDIT' => URL::index('&amp;file=manage&amp;edit='.$row['lid']),
					'CATEGORY' => DL_Cat::breadcrumb($row['cid']),
					'ACTIVE' => ($row['active'] == 1) ? _ACTIVE : _INACTIVE,
					'IMG_ACTIVE' => dl_image(($row['active'] == 1) ? 'checked.png' : 'unchecked.png'),
					'IMG_RATE' => $rating_info['image'],
					'IMG_POP'  => popularity($row['lid']),
					'VIEWS' => $row['views'],
					'HITS'  => $row['hits']
				));
			}
			$db->sql_freeresult($result);
		}
		$cpgtpl->set_filenames(array('body' => 'downloads/my_downloads.html'));
	}
	require_once('header.php');
	$cpgtpl->display('body');
}
