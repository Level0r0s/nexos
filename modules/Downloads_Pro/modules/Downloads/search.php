<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2007 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/search.php,v $
  $Revision: 1.18 $
  $Author: phoenix $
  $Date: 2010/11/08 03:05:51 $
******************************************************/
if (!defined('CPG_NUKE')) { exit; }
require_once('includes/nbbcode.php');
require_once('modules/'.$module_name.'/functions/categories.inc');
require_once('modules/'.$module_name.'/functions/display.inc');
require_once('modules/'.$module_name.'/functions/info.inc');
require_once('modules/'.$module_name.'/functions/linking.inc');

class DL_Search {

	var $result;
	var $result_count = 0;
	var $criteria = array();
	var $total_results;
	var $search_id;
	var $error;
	
	function search_form($search_id=false) {
		global $db, $dl_prefix, $user_prefix, $module_name, $CPG_SESS, $bgcolor3;
		$searchdata = $_POST;
		$return = '';
		if ($search_id) {
			if (isset($CPG_SESS[$module_name]['search'][$search_id])) {
				$searchdata = $CPG_SESS[$module_name]['search'][$search_id];
				$return .= '<div style="background-color: '.$bgcolor3.'; padding: 3px;">Editing criteria for search #'.$search_id.'; <a href="'.URL::index('&amp;file=search').'">start new search</a></div>';
			} else {
				$return .= $this->show_error('Invalid or expired search session. Please start a new search below.');
			}
		}
		$return .= '<form action="'.URL::index('&amp;file=search').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">
<h3>Keywords</h3><input type="text" name="s_BASICSEARCH" size="53" value="'.(isset($searchdata['s_BASICSEARCH']) ? htmlprepare($searchdata['s_BASICSEARCH']) : '').'" maxlength="255" /><br /><br />
<div style="float: left; width: 50%"><h3>Basic information</h3>
<label class="ulog" for="s_cid">'._CATEGORY.'</label> '.DL_Cat::selectbox((isset($searchdata['s_cid']) ? intval($searchdata['s_cid']) : 0), 's_cid', 2).'<br />
<label class="ulog" for="s_submitter">'._DLP_SUBMITTEDBY.'</label> <input type="text" name="s_submitter" id="s_submitter" size="30" maxlength="255" value="'.(isset($searchdata['s_submitter']) ? htmlprepare($searchdata['s_submitter']) : '').'" /><br />
<label class="ulog" for="s_name">'._AUTHORNAME.'</label> <input type="text" name="s_name" id="s_name" size="30" maxlength="255" value="'.(isset($searchdata['s_name']) ? htmlprepare($searchdata['s_name']) : '').'" /><br />
<label class="ulog" for="s_email">'._AUTHOREMAIL.'</label> <input type="text" name="s_email" id="s_email" size="30" maxlength="255" value="'.(isset($searchdata['s_email']) ? htmlprepare($searchdata['s_email']) : '').'" /><br />
<h3>Special options</h3>
<label class="ulog" for="s_pick">'._DLP_EDPICK.'</label> <input type="checkbox" name="s_pick" id="s_pick" value="1"'.((isset($searchdata['s_pick']) && $searchdata['s_pick'] == 1) ? ' checked="checked"' : '').' /> '._YES.'<br />
<label class="ulog" for="s_screenshot">Only downloads with screenshot(s)</label> <input type="checkbox" name="s_screenshot" id="s_screenshot" value="1"'.((isset($searchdata['s_screenshot']) && $searchdata['s_screenshot'] == 1) ? ' checked="checked"' : '').' /> '._YES.'<br />
<label class="ulog" for="s_date">Published in past</label> '.select_option('s_date', (isset($searchdata['s_date']) ? intval($searchdata['s_date']) : ''), array('', 3, 7, 14, 30, 60, 90, 180, 365)).' days<br />
<label class="ulog" for="s_updated">Updated in past</label> '.select_option('s_updated', (isset($searchdata['s_updated']) ? intval($searchdata['s_updated']) : ''), array('', 3, 7, 14, 30, 60, 90, 180, 365)).' days</div>
<div style="float: right; width: 50%"><h3>Additional information</h3>';
		$result = $db->sql_uquery("SELECT * FROM ".$dl_prefix."_fields 
			WHERE visible > 0 
			ORDER BY title");
		while ($field = $db->sql_fetchrow($result)) {
			$f_title = defined($field['title']) ? constant($field['title']) : $field['title'];
			$f_title = ($field['visible'] == 2) ? '* '.$f_title : $f_title;
			$return .= '<label class="ulog" for="s_'.$field['field'].'">'.$f_title.'</label>';
			if ($field['type'] == 1 || $field['type'] == 3) {
				$f_value = isset($searchdata['s_'.$field['field']]) ? intval($searchdata['s_'.$field['field']]) : 0;
				$return .= '<input type="checkbox" name="s_'.$field['field'].'" id="s_'.$field['field'].'" value="1"'.($f_value == 1 ? ' checked="checked"' : '').' /> '._YES.'<br />';
			} else {
				$f_value = isset($searchdata['s_'.$field['field']]) ? htmlprepare($searchdata['s_'.$field['field']]) : '';
				$return .= '<input type="text" name="s_'.$field['field'].'" id="s_'.$field['field'].'" size="30" maxlength="'.$field['size'].'" value="'.$f_value.'" /><br />';
			}
		}
		$return .= '</div><br /><br /><input type="submit" name="search" value="'._SEARCH.'" /></form>';
		return $return;
	}
	
	function search($search_id='') {
		global $db, $dl_prefix, $user_prefix, $CPG_SESS, $module_name, $perpage, $limit;
		$searchsess = array();
		$s_opt = array(
			's_BASICSEARCH' => array('o'=>4, 't'=>'Keywords'),
			's_cid' => array('o'=>2, 't'=>_CATEGORY),
			's_submitter' => array('o'=>2, 't'=>_DLP_SUBMITTEDBY),
			's_name' => array('o'=>1, 't'=>_AUTHORNAME),
			's_email' => array('o'=>1, 't'=>_AUTHOREMAIL),
			's_pick' => array('o'=>5, 't'=>_DLP_EDPICK),
			's_screenshot' => array('o'=>6, 't'=>'Have screenshot'),
			's_date' => array('o'=>3, 't'=>'Published in past'),
			's_updated' => array('o'=>3, 't'=>'Updated in past')
		);
		$result = $db->sql_uquery("SELECT * FROM ".$dl_prefix."_fields 
			WHERE visible > 0 
			ORDER BY title");
		while ($field = $db->sql_fetchrow($result)) {
			$f_title = defined($field['title']) ? constant($field['title']) : $field['title'];
			$s_opt['s_'.$field['field']] = array('o'=>(($field['type'] == 1 || $field['type'] == 3) ? 5 : 1), 't'=>$f_title);
		}
		$operator = 'AND';
		$sq = $sq2 = array();
		
		if (!empty($search_id)) {
			if (!isset($CPG_SESS[$module_name]['search'][$search_id])) {
				echo $this->show_error('Invalid session data');
				return;
			} else {
				$dsource = $CPG_SESS[$module_name]['search'][$search_id];
			}
		} else {
			$dsource = $_POST;
		}
		if (isset($_GET['sa'])) {
			$dsource['s_submitter'] = $_GET['sa'];
		} elseif (isset($_GET['key'])) {
			if ($_GET['key'] == 'new') {
				$dsource['s_date'] = 5;
			} elseif ($_GET['key'] == 'pick') {
				$dsource['s_pick'] = 1;
			}
		}
			
		foreach ($s_opt as $value => $sp) {
			if (isset($dsource[$value]) && !empty($dsource[$value])) {
				if (empty($search_id)) { $searchsess[$value] = $dsource[$value]; }
				if ($sp['o'] == 5 || $sp['o'] == 6) {
					$this->criteria[$sp['t']] = ($dsource[$value] == 1 ? _YES : _NO);
				} elseif ($value == 's_cid') {
					list($cattitle) = $db->sql_ufetchrow("SELECT title FROM ".$dl_prefix."_categories 
						WHERE cid='".intval($dsource[$value])."'");
					$this->criteria[$sp['t']] = $cattitle;
				} elseif ($value == 's_submitter') {
					if (is_numeric($dsource[$value])) {
						list($username) = $db->sql_ufetchrow("SELECT username FROM ".$user_prefix."_users 
							WHERE user_id='".intval($dsource[$value])."'");
						$this->criteria[$sp['t']] = $username;
					} else {
						list($userid) = $db->sql_ufetchrow("SELECT user_id FROM ".$user_prefix."_users 
							WHERE username='".Fix_Quotes($dsource[$value])."'");
						$this->criteria[$sp['t']] = $dsource[$value];
						$dsource['s_submitter'] = $userid;
						
					}
				} else {
					$this->criteria[$sp['t']] = $dsource[$value];
				}
				$dbvalue = substr($value, 2);
				if ($sp['o'] == 2 || $sp['o'] == 5) {
					$sq2[] = 'd.'.$dbvalue.'='.intval($dsource[$value]);
				} elseif ($sp['o'] == 3) {
					$advance = intval($dsource[$value])*86400;
					$date = (time()-$advance);
					$sq2[] = 'd.'.$dbvalue.' >= '.$date;
					$this->criteria[$sp['t']] = $dsource[$value].' days';
				} elseif ($sp['o'] == 4) {
					$sq[] = "d.title LIKE '%".Fix_Quotes($dsource[$value])."%'";
					$sq[] = "d.desc_short LIKE '%".Fix_Quotes($dsource[$value])."%'";
					$operator = 'OR';
				} elseif ($sp['o'] == 6) {
					$sq2[] = 'd.screen > 0';
				} else {
					$sq[] = "d.$dbvalue LIKE '%".Fix_Quotes($dsource[$value])."%'";
				}
			}
		}
		if (empty($this->criteria)) {
			echo $this->show_error('Please provide some criteria for your search').$this->search_form();
			return;
		}
		if (empty($search_id)) {
			mt_srand ((double) microtime() * 1000000);
			$search_id = mt_rand();
			foreach ($searchsess as $k => $v) {
				$CPG_SESS[$module_name]['search'][$search_id][$k] = $v;
			}
		}
		$this->search_id = $search_id;
		
		$sq2[] = can_admin($module_name) ? 'd.active!=2' : 'd.active=1';
		$qstring = implode($sq, ' '.$operator.' ');
		$qstring2 = implode($sq2, ' AND ');
		if (!empty($qstring) && !empty($qstring2)) {
			$qstring2 .= ' AND ';
		}
		$result = $db->sql_query("SELECT d.*, SUM(r.score) AS score, COUNT(r.score) AS votes, s.url AS img_url, u.username FROM ".$dl_prefix."_downloads d
			LEFT JOIN ".$dl_prefix."_ratings r ON (r.lid = d.lid AND r.active = 1)
			LEFT JOIN ".$dl_prefix."_screenshots s ON (s.id = d.screen)
			LEFT JOIN ".$user_prefix."_users u ON (u.user_id = d.submitter)
			WHERE $qstring2 ".(!empty($qstring) ? "($qstring)" : '')." 
			GROUP BY d.lid, d.cid, d.active, d.access, d.title, d.screen, d.desc_short, d.desc_long, d.notes, d.date, d.updated, d.name, d.email, d.submitter, d.filesize, d.version, d.homepage, d.compat, d.pick, s.url, u.username 
			LIMIT $perpage OFFSET $limit");
		list($totalresults) = $db->sql_ufetchrow("SELECT COUNT(d.lid) FROM ".$dl_prefix."_downloads d WHERE $qstring2 ".(!empty($qstring) ? "($qstring)" : ''));
		$this->total_results = $totalresults;
		while ($row = $db->sql_fetchrow($result)) {
			$this->add_result($row);
		}
	}
	
	function add_result($row) {
		global $db, $dl_prefix, $cpgtpl, $module_name;
		$this->result[$this->result_count++] = $row;
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
				'L_NOSCREENS' => _DLP_NOSCREENSHOTS,
				'L_SUBMITTEDBY' => _DLP_SUBMITTEDBY
			));
	}

	function show_error($content) {
		$this->error = true;
		return '<div style="background-color:#FFEEEE; color:#660000; padding:3px;">'.$content.'</div>';
	}

	function criterion_label($title, $content) {
		global $bgcolor2, $bgcolor4, $textcolor2;
		return '<div style="float:left; padding:3px 5px; border:solid 1px '.$bgcolor4.'; background-color:'.$bgcolor2.'; margin:2px 5px 4px 0;"><span style="color:'.$textcolor2.'; font-weight:bold;">'.$title.':</span> '.$content.'</div>';
	}

	function hl_label($content) {
		global $bgcolor2, $bgcolor4, $textcolor2;
		return '<span style="padding:1px; background-color:'.$bgcolor2.'; border-bottom:solid 1px '.$bgcolor4.';">'.$content.'</span>';
	}
}

$pagetitle .= $module_title.' '._BC_DELIM.' Search';
require_once('header.php');
OpenTable();
echo dl_menu().'<br /><hr />';

$search = new DL_Search;

if (isset($_POST['search']) || isset($_GET['sa']) || isset($_GET['key']) || isset($_GET['search_id'])) {
	$cur_page = (isset($_GET['page']) && $_GET['page'] > 0) ? intval($_GET['page']) : 1;
	$perpage = $dl_config['perpage'];
	$limit = ($cur_page-1)*$perpage;
	
	$search->search((isset($_GET['search_id']) ? $_GET['search_id'] : ''));
	
	if (count($search->criteria) > 0) {
		echo '<div style="background-color:'.$bgcolor2.'; padding:3px;"><span class="genmed">Advanced search results</span></div>
<div style="background-color:'.$bgcolor3.'; border-bottom:1px solid '.$bgcolor2.'; padding:3px;"><span style="float:left;" class="genmed">Searching for downloads that match the following criteria:</span><span class="genmed" style="float:right;"><a href="'.URL::index('&amp;file=search&amp;edit='.$search->search_id).'">Edit search criteria</a></span><br />';
		foreach ($search->criteria as $key => $value) {
			echo $search->criterion_label($key, htmlprepare($value));
		}
		echo '<br /><br style="clear:both; line-height:0;" /></div>';
	}
	if (!$search->error && $search->result_count == 0) {
		echo $search->show_error('No matching downloads found');
	}
	
	$cpgtpl->assign_vars(array(
		'NO_DOWNLOADS' => false,
		'DL_REVIEW_ACTIVE' => $dl_config['r_active'],
		'DL_PAGINATION' => gen_pagination($search->total_results, $perpage, $cur_page, '&amp;file=search&amp;search_id='.$search->search_id),
		
		'U_TO_TOP' => htmlprepare(URL::uri()),
		
		'L_TO_TOP' => strtolower(_DLP_BACK2TOP),
		'L_PAGE' => _DLP_PAGE,
		'L_RATING' => _RATING,
		'L_POPULARITY' => _POPULARITY,
		'L_HOMEPAGE' => 'Homepage',
		'L_SUBMITTEDBY' => _DLP_SUBMITTEDBY,
		'L_WRITE_REVIEW' => _DLP_WRITEREVIEW,
	));
	
	$cpgtpl->set_filenames(array('body' => 'downloads/list_downloads.html'));
	$cpgtpl->display('body');
} else {
	echo $search->search_form(isset($_GET['edit']) ? intval($_GET['edit']) : false);
}

CloseTable();