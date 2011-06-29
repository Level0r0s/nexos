<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2007 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/add.php,v $
  $Revision: 1.16 $
  $Author: phoenix $
  $Date: 2010/11/08 03:05:51 $
******************************************************/
if (!defined('CPG_NUKE')) { exit; }
if (!is_user()) { URL::redirect(URL::index('Your_Account'), true); }

require_once('includes/nbbcode.php');
require_once('modules/'.$module_name.'/functions/categories.inc');
require_once('modules/'.$module_name.'/functions/display.inc');
require_once('modules/'.$module_name.'/functions/info.inc');
require_once('modules/'.$module_name.'/functions/mirrors.inc');
require_once('modules/'.$module_name.'/functions/screenshots.inc');

$pagetitle .= $module_title.' '._BC_DELIM.' Add Download';
$errors = $warnings = array();
$mng_id = -$userinfo['user_id'];
$fetch_pad = true;
if (!isset($_POST['in']) || isset($_POST['load_pad'])) {
	$in['cat'] = $in['screen'] = 0;
	$in['title'] = $in['desc_short'] = $in['desc_long'] = $in['name'] = $in['email'] = $in['access'] = '';
	# pad_url || pad_file
	if (isset($_POST['load_pad']) && ((isset($_FILES['pad_file']) && is_uploaded_file($_FILES['pad_file']['tmp_name'])) || !empty($_POST['pad_url']))) {
		require_once('modules/'.$module_name.'/functions/padfile.php');
		$url = (isset($_FILES['pad_file']) && is_uploaded_file($_FILES['pad_file']['tmp_name'])) ? $_FILES['pad_file']['tmp_name'] : $_POST['pad_url'];
		set_time_limit(0);
		$PAD = new PADFile($url);
		$PAD->Load();
		switch ($PAD->LastError)
		{
			case PADFile::ERR_NO_URL_SPECIFIED:
				$warnings[] = 'No URL specified for PAD file.';
				break;
			case PADFile::ERR_READ_FROM_URL_FAILED:
				$warnings[] = 'Cannot open URL for PAD file.';
				break;
			case PADFile::ERR_PARSE_ERROR:
				$warnings[] = 'Parse Error: '.$PAD->ParseError;
				break;
			case 0:
				$in['title'] = $PAD->XML->GetValue('XML_DIZ_INFO/Program_Info/Program_Name');
				$in['version'] = $PAD->XML->GetValue('XML_DIZ_INFO/Program_Info/Program_Version');

				$in['name'] = $PAD->XML->GetValue('XML_DIZ_INFO/Company_Info/Contact_Info/Author_First_Name').' '.$PAD->XML->GetValue('XML_DIZ_INFO/Company_Info/Contact_Info/Author_Last_Name');
				$in['email'] = $PAD->XML->GetValue('XML_DIZ_INFO/Company_Info/Contact_Info/Author_Email');

				# Program_Descriptions/English/Keywords
				$in['desc_short'] = $PAD->GetBestDescription(250);
				$in['desc_long'] = $PAD->GetBestDescription(50000);

				$in['homepage'] = $PAD->XML->GetValue('XML_DIZ_INFO/Web_Info/Application_URLs/Application_Info_URL');
				if (empty($in['homepage'])) {
					$in['homepage'] = $PAD->XML->GetValue('XML_DIZ_INFO/Company_Info/Company_WebSite_URL');
				}
				$files = array('Primary_Download_URL', 'Secondary_Download_URL', 'Additional_Download_URL_1', 'Additional_Download_URL_2');
				foreach ($files as $url) {
					$url = $PAD->XML->GetValue('XML_DIZ_INFO/Web_Info/Download_URLs/'.$url);
					if (!empty($url)) { DL_Mirror::add($mng_id, $warnings, $errors, $url); }
				}
				$url = $PAD->XML->GetValue('XML_DIZ_INFO/Web_Info/Application_URLs/Application_Screenshot_URL');
				if (!empty($url)) { DL_Image::add($mng_id, $warnings, $errors, $url); }
				$fetch_pad = false;
				break;
		}
	}
} else {
	$in = $_POST['in'];
	$in['screen'] = isset($in['screen']) ? intval($in['screen']) : 0;
	# Mirror management
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
	# Screenshot management
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
	# Store the new download in the database
	else {
		$field_list = $value_list = '';
		$result = $db->sql_uquery("SELECT * FROM ".$dl_prefix."_fields WHERE visible > 0".(!can_admin($module_name) ? ' AND visible < 3' : ''));
		while (list($f_id, $f_field, $f_title, $f_visible, $f_type, $f_size) = $db->sql_fetchrow($result)) {
			$f_title = defined($f_title) ? constant($f_title) : $f_title;
			if (empty($in[$f_field]) && $f_visible == 2) {
				$errors[] = sprintf(_ERROR_NOT_SET, $f_title);
			} else {
				$val = Fix_Quotes($in[$f_field], 1);
				if (strlen($val) > 0) {
					$val = ($f_type == 1 || $f_type == 3) ? intval($val) : substr($val, 0, $f_size);
					$field_list .= ', '.$f_field;
					$value_list .= ", '$val'";
					$fields[$f_field] = htmlprepare($val);
				}
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
			$fields['name'] = Fix_Quotes($in['name'], true);
			$fields['email'] = Fix_Quotes($in['email'], true);
			$fields['active'] = can_admin($module_name) ? 1 : 2;
			$fields['access'] = can_admin($module_name) ? intval($in['access']) : 0;
			$fields['submitter'] = (is_user()) ? $userinfo['user_id'] : 'admin';

			$db->sql_query("INSERT INTO ".$dl_prefix."_downloads 
				(lid, cid, active, access, title, screen, desc_short, desc_long, date, name, email, submitter".$field_list.") 
				VALUES 
				(DEFAULT, '$fields[cid]', $fields[active], '$fields[access]', '$fields[title]', '$fields[screen]', '$fields[desc_short]', '$fields[desc_long]', '".time()."', '$fields[name]', '$fields[email]', '$fields[submitter]'".$value_list.")");
			$next_id = $db->sql_nextid('lid');
			$db->sql_query("UPDATE ".$dl_prefix."_mirrors 
				SET did=$next_id 
				WHERE did=$mng_id");
			$db->sql_query("UPDATE ".$dl_prefix."_screenshots 
				SET did=$next_id 
				WHERE did=$mng_id");

			if (can_admin($module_name)) {
				$time = time();
				$time_year = generate_date($time, 'Y');
				$time_month = generate_date($time, 'm');
				$db->sql_query("INSERT INTO ".$dl_prefix."_stats 
				(id, year, month, hits, views) 
				VALUES 
				('$next_id', '$time_year', '$time_month', 0, 0)");
			}

			if ($fields['version']) {
				$db->sql_query("INSERT INTO ".$dl_prefix."_history 
				(id, vers, author, date, comment) 
				VALUES 
				($next_id, '$fields[version]', '$fields[submitter]', ".time().", 'Initial Version')");
			}

			if (!can_admin($module_name)) {
				$d_queue = $db->sql_count($dl_prefix.'_downloads', "lid!='$next_id' AND active=2");
				cpg_error('Your download has been queued for review by an administrator<br /><br />At this time, we have <strong>'.$d_queue.'</strong> other downloads awaiting approval', _TB_INFO, URL::index('&file=manage&s=1', true, true));
			}
			DL_Cat::count_dl();
			URL::redirect(URL::index('&amp;file=details&amp;id='.$next_id));
		}
	}
}

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
			$selects .= '<option value="'.$cat['cid'].'"'.(((isset($_GET['c']) && $cat['cid'] == intval($_GET['c'])) || $cat['cid'] == $in['cat']) ? ' selected="selected"' : '').'>'.$cat['crumb'].'</option>';
		}
	}
	$selects .= '</optgroup></select>';
}

require_once('header.php');
$images = DL_Image::output_list($mng_id, $in['screen']);
$cpgtpl->assign_vars(array(
	'DL_MENU'       => dl_menu(),
	'DL_ERRORS'     => !empty($errors),
	'DL_WARNINGS'   => !empty($warnings),
	'DL_MIRRORS'    => DL_Mirror::output_list($mng_id),
	'DL_IMAGES'     => $images,
	'IS_NEW_DL'     => !can_admin($module_name),
	'CAN_ADMIN'     => can_admin($module_name),
	'B_SCREENSHOT'  => ($dl_config['screen_active'] || can_admin($module_name)),
	'B_ADD_IMAGE'   => ($dl_config['screen_active'] && $images < $dl_config['screen_max']),
	'B_NOTES'       => false,
	'B_REASON'      => false,
	'B_UPL_FILE'    => ($dl_config['upl_file'] || can_admin($module_name)),
	'B_UPL_IMAGE'   => ($dl_config['upl_image'] || can_admin($module_name)),
	'B_PENDING'     => false,
	'B_FETCH_PAD'   => $fetch_pad,
	'B_REM_MD5'     => $dl_config['md5_remote'],
	'L_YES'         => _YES,
	'L_NO'          => _NO,
	'L_DELETE'      => _DELETE,
	'L_UPDATE'      => 'Update',
	'L_CATEGORY'    => _CATEGORY,
	'L_SHORT_DESC'  => 'Short Description',
	'L_MAX_CHARS'   => sprintf(_M_CHARS, 255),
	'L_DESCRIPTION' => _DESCRIPTION,
	'L_AUTHORNAME'  => _AUTHORNAME,
	'L_AUTHOREMAIL' => _AUTHOREMAIL,
	'L_MD5'         => 'MD5',
	'S_BBCODE'      => bbcode_table('in[desc_long]', 'add_download', true),
	'DL_TITLE'      => htmlprepare($in['title']),
	'DL_ACCESS'     => group_selectbox('in[access]', $in['access']),
//	'DL_SCREEN'     => $in['screen'],
	'DL_CATSEL'     => $selects,
	'DL_DESC_SHORT' => htmlprepare($in['desc_short']),
	'DL_DESC_LONG'  => htmlprepare($in['desc_long']),
	'DL_NOTES'      => '',
	'DL_REASON'     => '',
	'DL_NAME'       => htmlprepare($in['name']),
	'DL_EMAIL'      => $in['email'],
	'U_DL_FORM'     => URL::index('&amp;file=add')
//	'U_UPL_IMAGE'   => $MAIN_CFG['server']['path'].URL::index('&amp;file=add&amp;upload=image')
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
