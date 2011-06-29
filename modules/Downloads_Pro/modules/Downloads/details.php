<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2007 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/details.php,v $
  $Revision: 1.12 $
  $Author: phoenix $
  $Date: 2010/11/08 03:05:51 $
******************************************************/
if (!defined('CPG_NUKE')) { exit; }
require_once('includes/nbbcode.php');
require_once('modules/'.$module_name.'/functions/categories.inc');
require_once('modules/'.$module_name.'/functions/display.inc');
require_once('modules/'.$module_name.'/functions/info.inc');
require_once('modules/'.$module_name.'/functions/linking.inc');

if (!isset($_GET['id'])) { URL::redirect(URL::index()); }

$row = $db->sql_ufetchrow("SELECT d.*, SUM(s.hits) AS hits, SUM(s.views) AS views, i.url AS img_url, u.username FROM ".$dl_prefix."_downloads d
	LEFT JOIN ".$dl_prefix."_stats s ON (s.id = d.lid)
	LEFT JOIN ".$dl_prefix."_screenshots i ON (i.id = d.screen)
	LEFT JOIN ".$user_prefix."_users u ON (u.user_id = d.submitter)
	WHERE d.lid='$global_id' 
	GROUP BY d.lid, d.cid, d.active, d.access, d.title, d.screen, d.desc_short, d.desc_long, d.notes, d.date, d.updated, d.name, d.email, d.submitter, d.filesize, d.version, d.homepage, d.compat, d.pick, i.url, u.username");
list($row['score'], $row['votes']) = $db->sql_ufetchrow("SELECT SUM(score), COUNT(score) FROM ".$dl_prefix."_ratings 
	WHERE lid='$global_id' AND active=1 
	GROUP BY lid");

if (!isset($row['title'])) { cpg_error(_DLP_UNKNOWNDL, 404); }
if ($row['active'] != 1 && !can_admin($module_name)) { cpg_error(_DLP_INACTIVEDL); }
$rating_info = get_rating($row['score'], $row['votes']);

if (!is_admin() && $row['submitter'] != is_user()) { update_views($global_id); }

//$modheader .= '<link rel="stylesheet" type="text/css" href="modules/'.$module_name.'/include/style.css" />';
$pagetitle .= $module_title.' '._BC_DELIM.' '.$row['title'];

if ($row['img_url']) {
	if (ereg('://', $row['img_url'])) {
		$row['img_url'] .= '" width="'.$dl_config['dimension_thumb'];
	} else {
		$row['img_url'] = dl_thumbimage($row['img_url']);
	}
}
$can_dl = can_download($row['active'], $row['access']);
//$submitter_count = $db->sql_count($dl_prefix.'_downloads', "submitter='".Fix_Quotes($row['submitter'])."'")-1;

$cpgtpl->assign_vars(array(
	'L_SUBMITTEDBY' => _DLP_SUBMITTEDBY,
	'L_AUTHORNAME' => _AUTHORNAME,
	'L_AUTHOREMAIL' => _AUTHOREMAIL,
	'L_PUBLISHED' => _DLP_PUBLISHED,
	'L_UPDATED' => _DLP_UPDATED,
	'L_DESCRIPTION' => _DESCRIPTION,
	'L_CATEGORY' => _CATEGORY,
	'L_RATING' => _RATING,
	'L_VOTES' => _VOTES,
	'L_DOWNLOADS' => _DOWNLOADS,
	'L_ACTIVE' => _ACTIVE,
	'L_EDIT' => _EDIT,
	'L_DELETE' => _DELETE,
	'L_ISDLOWNER' => sprintf(_DLP_ISDLOWNER, URL::index('&amp;file=manage&amp;edit='.$global_id)),
	'L_MIRSUB' => sprintf(_DLP_MIRSUB, URL::index('&amp;file=manage&amp;mirrors='.$global_id)),
	'L_EDNOTE' => _DLP_EDNOTE,
	'L_MEMREVIEWS' => _DLP_MEMREVIEWS,
	'L_PENDREVIEWS' => _DLP_PENDREVIEWS,
	'L_BY' => _BY,
	'L_ON' => _ON,
	'L_PAGE' => _DLP_PAGE,
	'L_VIEWALLSCREENS' => _DLP_VIEWALLSCREENS,
	'L_POPULARITY' => _POPULARITY,
	'L_PAGEVIEWS' => _DLP_PAGEVIEWS,
	'L_ADMINTOOLS' => _ADMINISTRATION,
	'L_EDPICK' => _DLP_EDPICK,
	
	'DL_MENU' => dl_detail_menu($global_id, $row['title'], $row['pick'], $row['active'], 1),
	'DL_CATEGORY' => DL_Cat::breadcrumb($row['cid']),
	'DL_SUBMITTER' => (is_numeric($row['submitter']) ? '<a href="'.URL::index('&amp;file=search&amp;sa='.$row['submitter']).'">'.$row['username'].'</a>' : $row['submitter']),
	'DL_AUTHORNAME' => $row['name'],
	'DL_AUTHOREMAIL' => $row['email'] ? spam_protect($row['email']) : false,
	'DL_PUBLISHED' => generate_date($row['date']),
	'DL_PUBLISHTYPE' => mark_date($row['date'], 3, 1, 'right'),
	'DL_UPDATED' => ($row['updated'] > $row['date']) ? generate_date($row['updated']) : false,
	'DL_UPDATE_TYPE' => ($row['updated'] > $row['date']) ? mark_date($row['updated'], 3, 2, 'right') : false,
	'DL_DESCRIPTION' => nl2br($row['desc_short']).(!empty($row['desc_long']) ? decode_bbcode("\n\n".$row['desc_long'], true) : ''),
	'DL_NOTES' => decode_bbcode($row['notes']),
	'DL_REVIEWS_ACTIVE' => $dl_config['r_active'],
	'IMG_DL_RATING' => $rating_info['image'],
	'DL_VOTES' => intval($row['votes']),
	'DL_POPULARITY' => popularity($global_id),
	'DL_HITS' => intval($row['hits']),
	'DL_VIEWS' => intval($row['views']),
	'DL_SUB_MIRRORS' => $dl_config['pub_mirror'],

	'U_DL_SCREENSHOT' => URL::index('&amp;screen='.$row['screen']),
	'IMG_DL_SCREENSHOT' => $row['img_url'],

	'B_DL_ADMIN' => can_admin($module_name),
	'DL_IS_OWNER' => ($row['submitter'] == $userinfo['user_id']),
	'U_DL_DELETE' => URL::admin('&amp;del_dl='.$global_id),
	'U_DL_EDIT' => URL::index('&amp;file=manage&amp;edit='.$global_id),
	'U_DL_MIRSUB' => URL::index('&amp;file=manage&amp;mirrors='.$global_id),
	'U_DL_MIRROR' => URL::index('&amp;mirror='.$global_id),
	'U_DL_MIRRORS' => URL::index('&amp;get='.$global_id),
	'U_DL_ACTIVE' => URL::admin('&amp;active='.$global_id),
	'U_DL_PICK' => URL::admin('&amp;pick='.$global_id),
	'IMG_DL_MIRRORS' => dl_image($can_dl ? 'download.png' : 'register.png'),
	'IMG_DL_ACTIVE' => dl_image(($row['active'] == 1) ? 'checked.png' : 'unchecked.png'),
	'IMG_DL_PICK' => dl_image($row['pick'] ? 'checked.png' : 'unchecked.png'),
	'S_DL_ACTIVE' => ($row['active'] == 1) ? _YES : _NO,
	'S_DL_PICK' => $row['pick'] ? _YES : _NO,
	'S_DL_MIRRORS' => $can_dl ? _DLP_DLNOW : _DLP_NADL
));

$result = $db->sql_query("SELECT field, title, type FROM ".$dl_prefix."_fields 
	WHERE type!=3 AND visible > 0");
if ($db->sql_numrows($result)) {
	while ($row2 = $db->sql_fetchrow($result)) {
		if ($row2['type'] == 1) {
			$row[$row2['field']] = $row[$row2['field']] ? _YES : _NO;
		}
		if ($row[$row2['field']]) {
			$row2['title'] = defined($row2['title']) ? constant($row2['title']) : $row2['title'];
			if ($row2['field'] == 'homepage' && $row[$row2['field']]) {
				$row[$row2['field']] = '<a href="'.$row[$row2['field']].'" target="_blank">'.shrink_url($row[$row2['field']]).'</a>';
			}
			$cpgtpl->assign_block_vars('dl_field', array(
				'TITLE' => $row2['title'],
				'VALUE' => $row[$row2['field']]
			));
		}
	}
}
$db->sql_freeresult($result);
// End download info

// pagination
$cur_page = (isset($_GET['page']) && $_GET['page'] > 0) ? intval($_GET['page']) : 1;
$perpage = $dl_config['r_perpage'];
$limit = ($cur_page-1)*$perpage;

if (!$dl_config['r_active']) {
	$cpgtpl->assign_vars(array(
		'DL_REVIEWS' => false,
		'DL_P_REVIEWS' => false
	));
} else {
	
$result = $db->sql_query("SELECT r.id, r.uid, r.ip, r.title, r.comment, r.score, r.timestamp, u.username, COUNT(r.score) AS votes FROM ".$dl_prefix."_ratings r
	LEFT JOIN ".$user_prefix."_users u ON (u.user_id = r.uid)
	WHERE r.lid='$global_id' AND r.comment!='' AND active=1 
	GROUP BY r.id DESC, r.uid, r.ip, r.title, r.comment, r.score, r.timestamp, u.username 
	LIMIT $perpage OFFSET $limit");
if ($db->sql_numrows($result)) {
	$cpgtpl->assign_vars(array(
		'DL_REVIEW_PAGES' => (ceil($row['votes']/$perpage) > 1) ? gen_pagination($row['votes'], $perpage, $cur_page, '&amp;file=details&amp;id='.$global_id, 'reviews') : false,
		'DL_REVIEWS' => $row['votes'].' '._REVIEWS,
		'DL_SCORE' => $rating_info['score'],
	));
	$i = 0;
	while (list($review_id, $review_uid, $review_ip, $review_title, $review_comment, $review_score, $review_timestamp, $review_uname, $review_votes) = $db->sql_fetchrow($result)) {
		$rating_info = get_rating($review_score, $review_votes);
		$cpgtpl->assign_block_vars('dl_review', array(
			'ID' => $review_id,
			'U_ID' => htmlprepare(URL::uri()).'#r'.$review_id,
			'RATING' => _DLP_REVIEW.' #'.$review_id.': '.$rating_info['desc'],
			'U_MEMBER' => URL::index('Your_Account&amp;profile='.$review_uid),
			'MEMBERNAME' => $review_uname,
			'DATE' => generate_date($review_timestamp),
			'U_EDIT' => can_admin($module_name) ? '<a href="'.URL::index('&amp;del_review='.$review_id).'">['.strtolower(_DELETE).']</a>' : false,
			'TITLE' => $review_title,
			'COMMENT' => decode_bb_all($review_comment),
			'IP' => decode_ip($review_ip),
			'IMG_RATE' => dl_image('stars/'.$rating_info['rating'].'.png'),

			'SPACER' => ($i > 0)
		));
		$i++;
	}
} else {
	$cpgtpl->assign_var('DL_REVIEWS', false);
}
$db->sql_freeresult($result);

if (can_admin($module_name) || $row['submitter'] == $userinfo['user_id']) {
// pagination
$cur_page2 = (isset($_GET['p_page']) && $_GET['p_page'] > 0) ? intval($_GET['p_page']) : 1;
$limit2 = ($cur_page2-1)*$perpage;

$result = $db->sql_query("SELECT r.id, r.uid, r.ip, r.title, r.comment, r.score, r.timestamp, u.username, COUNT(r.score) AS votes FROM ".$dl_prefix."_ratings r
	LEFT JOIN ".$user_prefix."_users u ON (u.user_id = r.uid)
	WHERE r.lid='$global_id' AND r.comment!='' AND active=0 
	GROUP BY r.id DESC, r.uid, r.ip, r.title, r.comment, r.score, r.timestamp, u.username 
	LIMIT $perpage OFFSET $limit2");
list($pending) = $db->sql_ufetchrow("SELECT COUNT(*) FROM ".$dl_prefix."_ratings 
	WHERE lid='$global_id' AND active=0");
if ($db->sql_numrows($result)) {
	$cpgtpl->assign_vars(array(
		'DL_P_REVIEW_PAGES' => (ceil($pending/$perpage) > 1) ? gen_pagination($pending, $perpage, $cur_page2, '&amp;file=details&amp;id='.$global_id, 'p_reviews', 'p_page') : false,
		'DL_P_REVIEWS' => $pending
	));
	$i = 0;
	while (list($review_id, $review_uid, $review_ip, $review_title, $review_comment, $review_score, $review_timestamp, $review_uname, $review_votes) = $db->sql_fetchrow($result)) {
		$rating_info = get_rating($review_score, $review_votes);
		$cpgtpl->assign_block_vars('dl_p_review', array(
			'ID' => $review_id,
			'U_ID' => htmlprepare(URL::uri()).'#r'.$review_id,
			'RATING' => _DLP_REVIEW.' #'.$review_id.': '.$rating_info['desc'],
			'U_MEMBER' => URL::index('Your_Account&amp;profile='.$review_uid),
			'MEMBERNAME' => $review_uname,
			'DATE' => generate_date($review_timestamp),
			'U_DEL' => ((can_admin($module_name) || $row['submitter'] == $userinfo['user_id']) ? '<a href="'.URL::index('&amp;del_review='.$review_id).'">['.strtolower(_DELETE).']</a>' : false),
			'U_APPR' => ((can_admin($module_name) || $row['submitter'] == $userinfo['user_id']) ? '<a href="'.URL::index('&amp;approve_review='.$review_id).'">['.strtolower(_DLP_APPROVE).']</a>' : false),
			'TITLE' => $review_title,
			'COMMENT' => decode_bb_all($review_comment),
			'IP' => decode_ip($review_ip),
			'IMG_RATE' => dl_image('stars/'.$rating_info['rating'].'.png'),

			'SPACER' => ($i > 0)
		));
		$i++;
	}
} else {
	$cpgtpl->assign_var('DL_P_REVIEWS', false);
}
$db->sql_freeresult($result);
} else {
	$cpgtpl->assign_var('DL_P_REVIEWS', false);
}
}

if ($row['pick']) {
	$cpgtpl->assign_block_vars('dl_image', array('SRC' => dl_image('pick.png'), 'TITLE' => _DLP_EDPICK));
}
// custom fields: images
$result = $db->sql_query("SELECT field, img_path, img_alt FROM ".$dl_prefix."_fields 
	WHERE type=3 AND visible > 0");
if ($db->sql_numrows($result)) {
	while ($row2 = $db->sql_fetchrow($result)) {
		if ($row[$row2['field']]) {
			$cpgtpl->assign_block_vars('dl_image', array(
				'SRC' => $row2['img_path'],
				'TITLE' => $row2['img_alt']
			));
		}
	}
}
$db->sql_freeresult($result);

require_once('header.php');
$cpgtpl->assign_var('BGCOLOR3', $bgcolor3);
$cpgtpl->set_filenames(array('body' => 'downloads/details.html'));
$cpgtpl->display('body');