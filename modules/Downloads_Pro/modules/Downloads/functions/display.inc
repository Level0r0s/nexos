<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/functions/display.inc,v $
  $Revision: 1.17 $
  $Author: phoenix $
  $Date: 2010/11/03 23:13:18 $
******************************************************/
if (!defined('CPG_NUKE')) { exit; }

$dl_prefix = defined('ADMIN_PAGES') ? $prefix.'_'.strtolower($op) : $prefix.'_'.strtolower($module_name);
$dl_config = defined('ADMIN_PAGES') ? $MAIN_CFG[strtolower($op)] : (isset($MAIN_CFG[strtolower($module_name)]) ? $MAIN_CFG[strtolower($module_name)] : array());

$mode = (isset($_GET['mode']) ? $_GET['mode'] : (isset($_POST['mode']) ? $_POST['mode'] : ''));
$act = (isset($_GET['act']) ? $_GET['act'] : (isset($_POST['act']) ? $_POST['act'] : ''));
$view = (isset($_GET['view']) ? $_GET['view'] : (isset($_POST['view']) ? $_POST['view'] : ''));

$where = defined('ADMIN_PAGES') ? $op : $module_name;
$global_id = (isset($_GET['id']) ? intval($_GET['id']) : (isset($_POST['id']) ? intval($_POST['id']) : ''));

if (!isset($module_title)) {
    list($module_title) = $db->sql_ufetchrow("SELECT custom_title FROM ".$prefix."_modules WHERE title='$where'", SQL_NUM, __FILE__, __LINE__);
    if (empty($module_title)) { $module_title = $where; }
}

get_lang('downloads');

function display_errors($errors) {
    $ret = '<div style="background-color: #fee; color: #660000; padding: 3px;">';
    if (is_array($errors) && count($errors) > 1) {
        asort($errors);
        $ret .= _DLP_FIXERRORS.'
        <ul>';
        foreach ($errors as $error) {
            $ret .= '<li>'.$error.'</li>';
        }
        $ret .= '</ul>';
    } elseif (is_array($errors)) {
        $ret .= $errors[0];
    } else {
        $ret .= $errors;
    }
    return $ret.'</div><br />';
}
function display_warnings($warnings) {
	echo '<div style="background-color: #ffa; color: #ff8c00; padding: 3px;">';
    if (is_array($warnings) && count($warnings) > 1) {
        asort($warnings);
        echo '<ul>';
        foreach ($warnings as $warning) {
            echo '<li>'.$warning.'</li>';
        }
        echo '</ul>';
    } elseif (is_array($warnings)) {
        echo $warnings[0];
    } else {
        echo $warnings;
    }
    echo '</div><br />';
}
function check_dl_details($in, &$errors) {
    if ($in['cat'] == 0) { $errors[] = sprintf(_DLP_RQR, _CATEGORY); }
    if (empty($in['title'])) { $errors[] = sprintf(_DLP_RQR, _TITLE); }
    if (empty($in['desc_short'])) { $errors[] = sprintf(_DLP_RQR, _DLP_SHORTDESC); }
    if (!empty($in['email']) && is_email($in['email']) < 1) { $errors[] = sprintf(_DLP_RQR, _EMAIL); }
    return !empty($errors);
}
function dl_menu($path='') {
    global $act, $mode, $view, $file, $module_name, $module_title;
    return '
    <div style="float: left;"><span class="gen"><strong>'.$module_title.$path.'</strong></span></div>
    <form action="'.URL::index('&amp;file=search').'" method="post" enctype="multipart/form-data" accept-charset="utf-8"><div style="float:right;">
    <input type="text" name="s_BASICSEARCH" size="35" maxlength="255" value="'.(isset($_POST['s_BASICSEARCH']) ? htmlprepare($_POST['s_BASICSEARCH']) : '').'" /> <input type="submit" name="search" value="'._SEARCH.'" /></div></form><br style="clear:both;" />
    '.((empty($mode) && empty($act) && empty($view) && !isset($_GET['c']) && !isset($_GET['e']) && !isset($_GET['screen']) && !isset($_GET['search_author']) && $file == 'index') ? '<strong>'._MAIN.'</strong> | ' : '<a href="'.URL::index().'">'._MAIN.'</a> | ').
    (($file == 'search') ? '<strong>'._SEARCH.'</strong> | ' : '<a href="'.URL::index('&amp;file=search').'">'._SEARCH.'</a> | ').
    (is_user() ? (($file == 'manage') ? '<strong>'._DLP_MYDL.'</strong>' : '<a href="'.URL::index('&amp;file=manage').'">'._DLP_MYDL.'</a>').' | ' : '').
    (($file == 'add') ? '<strong>'._ADDDOWNLOAD.'</strong>' : '<a href="'.URL::index('&amp;file=add'.(isset($_GET['c']) ? '&amp;c='.intval($_GET['c']) : '')).'">'._ADDDOWNLOAD.'</a>').' |
    '.(($file == 'search' && isset($_GET['key']) && $_GET['key'] == 'new') ? '<strong>'._NEWDOWNLOADS.'</strong>' : '<a href="'.URL::index('&amp;file=search&amp;key=new').'">'._NEWDOWNLOADS.'</a>').' |
    <a href="'.URL::index('&amp;mode=random').'">'._DLP_RANDOM.'</a>';
}
function dl_detail_menu($id, $title, $pick=false, $active=1, $current) {
   global $dl_config;
   $return = '
   <span class="gen"><strong>'.$title.'</strong></span>'.
   (($active == 0) ? '&nbsp;&nbsp;&nbsp;<span class="genmed" style="color: #ae0000;"><em>'._DLP_INACTIVE.'</em></span>' : (($active == 2) ? '&nbsp;&nbsp;&nbsp;<span class="genmed" style="color: #ff0000;"><em>'._DLP_PENDING.'</em></span>' : '')).
   ($pick ? '&nbsp;&nbsp;&nbsp;<span class="genmed" style="color: #009933;"><em>'._DLP_EDPICK.'</em></span>' : '').'<br />
    <a href="'.URL::index().'">'._MAIN.'</a> |
    '.(($current == 1) ? '<strong>'._DETAILS.'</strong>' : '<a href="'.URL::index('&amp;file=details&amp;id='.$id).'">'._DETAILS.'</a>').' | ';
    if (can_download($active)) {
        $return .=
      (($current == 2) ? '<strong>'._DLP_DLNOW.'</strong>' : '<a href="'.URL::index('&amp;get='.$id).'">'._DLP_DLNOW.'</a>').' | ';
    }
    if (is_user() && $dl_config['r_active']) {
        $return .=
      (($current == 3) ? '<strong>'._DLP_WRITEREVIEW.'</strong>' : '<a href="'.URL::index('&amp;review='.$id).'">'._DLP_WRITEREVIEW.'</a>').' | ';
    }
    $return .=
      (($current == 4) ? '<strong>'._DLP_HISTORY.'</strong>' : '<a href="'.URL::index('&amp;history='.$id).'">'._DLP_HISTORY.'</a>').' |
    '.(($current == 5) ? '<strong>'._StatisticsLANG.'</strong>' : '<a href="'.URL::index('&amp;file=statistics&amp;id='.$id).'">'._StatisticsLANG.'</a>');
//	Removed source of spam
//	$return .= ' | '.(($current == 7) ? '<strong>'._Tell_a_FriendLANG.'</strong>' : '<a href="'.URL::index('&amp;friend='.$id).'">'._Tell_a_FriendLANG.'</a>');
    return $return;
}
function dl_admin_menu() {
    global $dl_prefix, $dl_config, $db, $mode, $file, $module_title;
    if ($mode != 'broken') { $broken = $db->sql_count($dl_prefix.'_broken'); }
    if ($mode != 'pending') { $pending = $db->sql_count($dl_prefix.'_downloads', 'active=2'); }
    if ($mode != 'r_pending' && $dl_config['r_queue'] && $dl_config['r_active']) { $r_pending = $db->sql_count($dl_prefix.'_ratings', 'active=0'); }
    if ($mode != 'm_pending' && $dl_config['pub_mirror']) { $m_pending = $db->sql_count($dl_prefix.'_mirrors', 'active=0'); }
    return '
    <span class="gen"><strong>'.$module_title.' '._ADMINISTRATION.'</strong></span><br />
     '.((empty($mode) && $file != 'config' || isset($_GET['editCat'])) ? '<strong>'._CATEGORIES.'</strong> | ' : '<a href="'.URL::admin().'">'._CATEGORIES.'</a> | ').'<a href="'.URL::index('&amp;file=add').'">'._ADDDOWNLOAD.'</a> |
     '.(($file == 'config') ? '<strong>'._DLP_CONFIG.'</strong> | ' : '<a href="'.URL::admin('&amp;file=config').'">'._DLP_CONFIG.'</a> | ').
     (($mode == 'fields') ? '<strong>'._DLP_CFIELDS.'</strong> | ' : '<a href="'.URL::admin('&amp;mode=fields').'">'._DLP_CFIELDS.'</a> | ').
      (($mode == 'pending') ? '<strong>'._DLP_PENDDL.'</strong> | ' : '<a href="'.URL::admin('&amp;mode=pending').'">'._DLP_PENDDL.'</a> ('.$pending.') | ').
      (($dl_config['r_queue'] && $dl_config['r_active']) ? (($mode == 'r_pending') ? '<strong>'._DLP_PENDREVIEWS.'</strong> | ' : '<a href="'.URL::admin('&amp;mode=r_pending').'">'._DLP_PENDREVIEWS.'</a> ('.$r_pending.') | ') : '').
      (($dl_config['pub_mirror']) ? (($mode == 'm_pending') ? '<strong>'._DLP_PENDMIR.'</strong> | ' : '<a href="'.URL::admin('&amp;mode=m_pending').'">'._DLP_PENDMIR.'</a> ('.$m_pending.') | ') : '').
      (($mode == 'broken') ? '<strong>'._DLP_BRMIR.'</strong>' : '<a href="'.URL::admin('&amp;mode=broken').'">'._DLP_BRMIR.'</a> ('.$broken.')');
}
function new_html_head($title) {
    global $BASEHREF, $CPG_SESS;
    return '
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html dir="'._TEXT_DIR.'">
    <head>
     <base href="'.$BASEHREF.'" />
     <meta http-equiv="Content-Type" content="text/html; charset='._CHARSET.'" />
     <meta http-equiv="Content-Style-Type" content="text/css" />
     <title>'.$title.'</title>
     <link rel="stylesheet" href="themes/'.$CPG_SESS['theme'].'/style/style.css" type="text/css" />
    </head><body>';
}
function new_html_foot() {
    return '</body></html>';
}
function gen_pages(&$page_string, $start, $end, $cur_page, $base, $anchor=false, $arg='page') {
    for ($i = $start; $i <= $end; $i++) {
        if (defined('ADMIN_PAGES')) {
            $page_string .= ($i == $cur_page) ? '<strong>'.$i.'</strong>' : '<a href="'.URL::admin($base.'&amp;'.$arg.'='.$i.($anchor ? '#'.$anchor : '')).'">'.$i.'</a>';
        } else {
            $page_string .= ($i == $cur_page) ? '<strong>'.$i.'</strong>' : '<a href="'.URL::index($base.'&amp;'.$arg.'='.$i.($anchor ? '#'.$anchor : '')).'">'.$i.'</a>';
        }
        if ($i < $end) { $page_string .= ', '; }
    }
}
function gen_pagination($total_items, $perpage, $cur_page, $base, $anchor=false, $arg='page') {
    $total_pages = ceil($total_items/$perpage);
    $page_string = '';
    if ($total_pages > 10) {
        $init_page_max = ($total_pages > 3) ? 3 : $total_pages;
        gen_pages($page_string, 1, $init_page_max, $cur_page, $base, $anchor, $arg);
        if ($total_pages > 3) {
            if ($cur_page > 1 && $cur_page < $total_pages) {
                $page_string .= ($cur_page > 5) ? ' ... ' : ', ';
                $init_page_min = ($cur_page > 4) ? $cur_page : 5;
                $init_page_max = ($cur_page < $total_pages - 4) ? $cur_page : $total_pages - 4;
                gen_pages($page_string, ($init_page_min-1), ($init_page_max+1), $cur_page, $base, $anchor, $arg);
                $page_string .= ($cur_page < $total_pages - 4) ? ' ... ' : ', ';
            } else {
                $page_string .= ' ... ';
            }
            gen_pages($page_string, ($total_pages - 2), $total_pages, $cur_page, $base, $anchor, $arg);
        }
    } else {
        gen_pages($page_string, 1, $total_pages, $cur_page, $base, $anchor, $arg);
    }
    if ($cur_page > 1) {
        if (defined('ADMIN_PAGES')) {
            $page_string = ' <a href="'.URL::admin($base.'&amp;'.$arg.'='.($cur_page-1).($anchor ? '#'.$anchor : '')).'">'._PREVIOUS.'</a>&nbsp;&nbsp;'.$page_string;
        } else {
            $page_string = ' <a href="'.URL::index($base.'&amp;'.$arg.'='.($cur_page-1).($anchor ? '#'.$anchor : '')).'">'._PREVIOUS.'</a>&nbsp;&nbsp;'.$page_string;
        }
    }
    if ($cur_page < $total_pages) {
        if (defined('ADMIN_PAGES')) {
            $page_string .= '&nbsp;&nbsp;<a href="'.URL::admin($base.'&amp;'.$arg.'='.($cur_page+1).($anchor ? '#'.$anchor : '')).'">'._NEXT.'</a>';
        } else {
            $page_string .= '&nbsp;&nbsp;<a href="'.URL::index($base.'&amp;'.$arg.'='.($cur_page+1).($anchor ? '#'.$anchor : '')).'">'._NEXT.'</a>';
        }
    }
    return $page_string;
}
function generate_date($date, $format=false) {
    global $userinfo;
	return L10NTime::date(($format ? $format : $userinfo['user_dateformat']), $date, $userinfo['user_dst'], $userinfo['user_timezone']);
}
function mark_date($date, $days, $type=1, $float='', $spaces=0) {
    $advance = $days*86400;
    $space = ($spaces > 0) ? str_repeat('&nbsp;', $spaces) : '';
    $return = '';
    if ($date >= (time()-$advance)) {
        $return = ($type == 2) ? $space.'<span class="gensmall" style="color: #0000ff;'.(!empty($float) ? ' float: '.$float.';' : '').'">'._DLP_UPD.'</span>' : $space.'<span class="gensmall" style="color: #ff0000;'.(!empty($float) ? ' float: '.$float.';' : '').'">'._DLP_NEW.'</span>';
    }
    return $return;
}
