<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/include/view_cat.inc,v $
  $Revision: 1.12 $
  $Author: phoenix $
  $Date: 2010/11/08 03:11:29 $
******************************************************/
if (!defined('CPG_NUKE')) { exit; }

require_once('modules/'.$module_name.'/functions/categories.inc');

if (isset($_GET['c'])) {
    $category_id = intval($_GET['c']);
    
    list($cat_name, $cat_desc, $total_dl_cat) = $db->sql_ufetchrow("SELECT c.title, c.cdescription, COUNT(d.lid) FROM ".$dl_prefix."_categories c
    	LEFT JOIN ".$dl_prefix."_downloads d ON (d.cid = c.cid ".(can_admin($module_name) ? 'AND d.active!=2' : 'AND d.active=1').") 
		WHERE c.cid=$category_id 
		GROUP BY c.cid, c.title, c.cdescription");
    if (!$cat_name) { URL::redirect(URL::index()); }
    
    // pagination
    $cur_page = (isset($_GET['page']) && $_GET['page'] > 0) ? intval($_GET['page']) : 1;
    $perpage = $dl_config['perpage'];
    $limit = ($cur_page-1)*$perpage;
    $total_pages = ceil($total_dl_cat/$perpage);
    
    // sorting
    $CPG_SESS[$module_name]['sort'] = isset($_GET['s']) ? intval($_GET['s']) : (isset($CPG_SESS[$module_name]['sort']) ? $CPG_SESS[$module_name]['sort'] : $dl_config['def_sort']);
    $sort = array(1=>'d.title ASC', 'd.title DESC', 'd.date ASC', 'd.date DESC', 'd.updated ASC', 'd.updated DESC', 'r.score ASC', 'r.score DESC');
    if (!array_key_exists($CPG_SESS[$module_name]['sort'], $sort)) { $CPG_SESS[$module_name]['sort'] = 1; }
    $sort_sql = $sort[$CPG_SESS[$module_name]['sort']];
    
    /*
    $modheader .= "<script language=\"javascript\" type=\"text/javascript\">
<!--
 function page_jump(url, cur, total) {
     if (cur == total) {
         next_page = cur - 1;
     } else {
         next_page = cur + 1;
     }
     msg = \"Please enter a page number to jump to between 1 and \" + total;
     input = prompt(msg, next_page, \"Jump to Page\");
     if (input > 0) {
         if (input > total) { input = total; }
         window.location = url + \"&page=\" + input;
     }
 }
//-->
</script>";
	*/
	
    $cat_crumb = DL_Cat::breadcrumb($category_id, false);
    $arrows = array(
		'up'=>'<img src="'.dl_image('arrows/blue_up.png').'" alt="'._DLP_ASC.'" title="'._DLP_ASC.'" />',
		'up_s'=>'<img src="'.dl_image('arrows/orange_up.png').'" alt="'._DLP_ASC.'" title="'._DLP_ASC.'" />',
		'down'=>'<img src="'.dl_image('arrows/blue_down.png').'" alt="'._DLP_DESC.'" title="'._DLP_DESC.'" />',
		'down_s'=>'<img src="'.dl_image('arrows/orange_down.png').'" alt="'._DLP_DESC.'" title="'._DLP_DESC.'" />'
	);
    $pagetitle .= ' '._BC_DELIM.' '._CATEGORY.': '.strip_tags($cat_crumb);
    require_once('header.php');
	$cpgtpl->assign_vars(array(
		'L_SORT'  => _DLP_SORT,
		'L_XML'   => _DLP_XML,
		'L_RATING' => _RATING,
		'L_POPULARITY' => _POPULARITY,
		'L_HOMEPAGE' => _HOMEPAGE,
		'L_SUBMITTEDBY' => _DLP_SUBMITTEDBY,
		'L_WRITE_REVIEW' => _DLP_WRITEREVIEW,
		'DL_MENU' => dl_menu(' '._BC_DELIM.' '.$cat_crumb),
		'DL_CAT_DESC' => $cat_desc,
		'U_RSS' => 'rss/'.strtolower($module_name).'.php?c='.$category_id,
		'DL_REVIEW_ACTIVE' => $dl_config['r_active']
	));
	$sort_options = array(1=>_TITLE, 3=>_DLP_PUBLISHED, 5=>_DLP_UPDATED, 7=>_RATING);
	foreach ($sort_options as $up => $sort_title) {
		$cpgtpl->assign_block_vars('dl_sort', array(
			'TITLE' => $sort_title,
			'UP'    => (($CPG_SESS[$module_name]['sort'] == $up) ? $arrows['up_s'] : '<a href="'.URL::index('&amp;c='.$category_id.'&amp;s='.$up.'&amp;page='.$cur_page).'">'.$arrows['up'].'</a>'),
			'DOWN'  => (($CPG_SESS[$module_name]['sort'] == $up+1) ? $arrows['down_s'] : '<a href="'.URL::index('&amp;c='.$category_id.'&amp;s='.($up+1).'&amp;page='.$cur_page).'">'.$arrows['down'].'</a>')
		));
	}

    // subcategories
    DL_Cat::show($category_id);

    // count inactive downloads
    //$hidden_dl = $db->sql_count($dl_prefix.'_downloads', 'cid='.$category_id.' AND active=0');

    $act_check = can_admin($module_name) ? 'AND d.active!=2' : 'AND d.active=1';
    $result = $db->sql_query("SELECT d.*, SUM(r.score) AS score, COUNT(r.score) AS votes, s.url AS img_url, u.username FROM ".$dl_prefix."_downloads d
	    LEFT JOIN ".$dl_prefix."_ratings r ON (r.lid = d.lid AND r.active = 1)
	    LEFT JOIN ".$dl_prefix."_screenshots s ON (s.id = d.screen)
	    LEFT JOIN ".$user_prefix."_users u ON (u.user_id = d.submitter)
	    WHERE d.cid=$category_id $act_check 
		GROUP BY d.lid, d.cid, d.active, d.access, d.title, d.screen, d.desc_short, d.desc_long, d.notes, d.date, d.updated, d.name, d.email, d.submitter, d.filesize, d.version, d.homepage, d.compat, d.pick, s.url, u.username 
		ORDER BY $sort_sql 
		LIMIT $perpage OFFSET $limit");
    if ($db->sql_numrows($result)) {
        while ($row = $db->sql_fetchrow($result)) {
            $rating_info = get_rating($row['score'], $row['votes']);
            if ($row['date'] >= $row['updated']) {
                $row['date'] = _DLP_PUBLISHED.': '.generate_date($row['date']).mark_date($row['date'], 3, 1, '', 2);
            } else {
                $row['date'] = _DLP_UPDATED.': '.generate_date($row['updated']).mark_date($row['updated'], 3, 2, '', 2);
            }
            if (can_download($row['active'], $row['access'])) {
                $img = dl_image(($row['access'] > 0) ? 'download_small_yes.png' : 'download_small.png');
                $img_title = _DLP_DLNOW;
            } else {
                $img = dl_image('download_small_no.png');
                $img_title = _DLP_DLFORBIDDEN;
            }
            if ($row['img_url']) {
				if (ereg('://', $row['img_url'])) {
					$row['img_url'] .= '" width="100';
				} else {
					$row['img_url'] = dl_thumbimage($row['img_url']).'" width="100';
				}
			}
			$cpgtpl->assign_block_vars('dl_item', array(
				'TITLE'   => $row['title'],
				'U_INFO'  => URL::index('&amp;file=details&amp;id='.$row['lid']),
				'U_GET'   => URL::index('&amp;get='.$row['lid']),
				'U_IMG'   => ($row['screen'] ? URL::index('&amp;screen='.$row['screen']) : ''),
				'U_HOME'  => $row['homepage'],
				'U_WRITE' => URL::index('&amp;review='.$row['lid']),
				'U_REVIEWS' => URL::index('&amp;file=details&amp;id='.$row['lid'].'#reviews'),
				'NO_REVIEWS' => ($row['votes'] == 0 && is_user()),
				'REVIEWS' => sprintf((($row['votes'] == 1) ? '%s review' : '%s reviews'), $row['votes']),
				'VERSION' => (!empty($row['version']) ? _VERSION.' '.$row['version'] : ''),
				'NOT_ACTIVE' => (($row['active'] == 0 && can_admin($module_name)) ? _DLP_INACTIVE : ''),
				'E_PICK' => ($row['pick'] ? _DLP_EDPICK : ''),
				'SECURE' => ((isset($row['cpgcs']) && $row['cpgcs']) ? 'Certified Secure' : ''),
				'SUBMITTER' => (is_numeric($row['submitter']) ? '<a href="'.URL::index('&amp;file=search&amp;sa='.$row['submitter']).'">'.$row['username'].'</a>' : $row['submitter']),
				'DL_IMG' => $img,
				'DL_IMG_TITLE' => $img_title,
				'RATING_IMG' => $rating_info['image'],
				'POP_IMG' => popularity($row['lid']),
				'DATE' => $row['date'],
				'DESC' => nl2br($row['desc_short']),
				'U_SCREEN' => URL::index('&amp;screen='.$row['screen']),
				'IMG_SCREEN' => $row['img_url'],
				'IMG_MISSING' => dl_image('missing.png'),
				'L_VIEWALLSCREENS' => _DLP_VIEWALLSCREENS,
				'L_NOSCREENS' => _DLP_NOSCREENSHOTS
			));
        }
		$cpgtpl->assign_vars(array(
			'NO_DOWNLOADS' => false,
			'L_TO_TOP'     => strtolower(_DLP_BACK2TOP),
			'L_PAGE'       => _DLP_PAGE,
			'U_TO_TOP'     => htmlprepare(URL::uri()),
			'DL_PAGINATION' => gen_pagination($total_dl_cat, $perpage, $cur_page, '&amp;c='.$category_id),
		));
//		(($hidden_dl > 0) ? '<div align="right"><strong>'.$hidden_dl.'</strong> '.(can_admin($module_name) ? 'inactive' : 'hidden').' '.(($hidden_dl == 1) ? 'download' : 'downloads').'</div><br />' : '')
//		(($total_pages > 1) ? '<a href="javascript:page_jump(\''.URL::index('&amp;c='.$category_id, false, true).'\', '.$cur_page.', '.$total_pages.');"><img src="'.dl_image('page.gif').'" alt="Jump to Page" title="Jump to Page" /></a>' : '')
    } else {
		$cpgtpl->assign_var('NO_DOWNLOADS', 'There are no downloads in this category');
    }

	$cpgtpl->set_filenames(array('body' => 'downloads/view_cat.html'));
	$cpgtpl->display('body');
}
