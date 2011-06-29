<?php
/*********************************************
  CPG-Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2006 by CPG Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Wiki/modules/Wiki/inc/functions.php,v $
  $Revision: 1.4 $
  $Author: phoenix $
  $Date: 2010/11/04 01:24:06 $
*********************************************/
$module_prefix = $prefix."_".strtolower($module_name);

function get_parents($id, &$parents) {
    global $db, $module_prefix;
    $parent = $db->sql_ufetchrow("SELECT id, parent_id, pos, title FROM ".$module_prefix."_pages WHERE id=$id", SQL_ASSOC);
    if ($parent['parent_id'] > 0) {
        get_parents($parent['parent_id'], $parents);
    }
    $parents[] = $parent;
}

function list_all($id=0, $go_deep=true) {
    global $db, $module_prefix;
    $pages = array();
    $result = $db->sql_query("SELECT id, title FROM ".$module_prefix."_pages WHERE parent_id=$id ORDER BY pos");
    while ($page = $db->sql_fetchrow($result, SQL_ASSOC)) {
        if ($go_deep) {
            $page['sub'] = list_all($page['id']);
        }
        $pages[] = $page;
    }
    $db->sql_freeresult($result);
    return $pages;
}

function go_up($page) {
    global $db, $module_prefix;
    $parent_id = $page['parent_id'];
    $pages = array();
    $result = $db->sql_query("SELECT id, parent_id, title FROM ".$module_prefix."_pages WHERE parent_id=$parent_id ORDER BY pos");
    while ($apage = $db->sql_fetchrow($result, SQL_ASSOC)) {
        if ($apage['id'] == $page['id']) {
            $apage = $page;
        }
        $pages[] = $apage;
    }
    $db->sql_freeresult($result);
    if ($parent_id > 0) {
        $page = $db->sql_ufetchrow("SELECT id, parent_id, title FROM ".$module_prefix."_pages WHERE id=$parent_id", SQL_ASSOC);
        $page['sub'] = $pages;
        $page = go_up($page);
        return $page;
    }
    return $pages;
}

function create_tree($id, &$tree, $indent=false) {
    $content = ($indent ? '<div style="margin-left: 8px;">' : '');
    while($page = array_shift($tree)) {
        if ($page['id'] == $id) {
            $content .= '<b>&#8226; '.$page['title'].'</b><br />';
        } else {
            $content .= '&#8226; <a href="'.URL::index('&amp;id='.$page['id']).'">'.$page['title'].'</a><br />';
        }
        if (isset($page['sub'])) {
            $content .= create_tree($id, $page['sub'], true);
        }
    }
    if ($indent) { $content .= '</div>'; }
    return $content;
}

function wiki_get_selects(&$pages, &$select, $depth) {
    while($page = array_shift($pages)) {
        $select[$page['id']] = $depth.$page['title'];
        if (isset($page['sub'])) {
            wiki_get_selects($page['sub'], $select, $depth.'&nbsp; &nbsp; ');
        }
    }
}
function wiki_create_select($id=0) {
    $allpages = list_all();
    $select = array(0 => 'none');
    wiki_get_selects($allpages, $select, '');
    return select_box('parent_id', $id, $select);
}

function member_block() {
    global $db, $module_prefix;
    if (isset($_GET['id'])) {
        $page_id = intval($_GET['id']);
        $page = $db->sql_ufetchrow("SELECT id, parent_id, title FROM ".$module_prefix."_pages WHERE id=$page_id");

        $sub = list_all($page['id'], false);
        if (count($sub) > 0) {
            $page['sub'] = $sub;
        }
        unset($sub);

        $pages = list_all($page['parent_id'], false);
        for ($i=0; $i<count($pages); $i++) {
            if ($pages[$i]['id'] == $page_id) {
                $pages[$i] = $page;
            }
        }

        $pages = go_up($page_id, $parents);
    }

    themesidebox('Wiki Content', $content, 10000);
}
