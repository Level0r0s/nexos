<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | block-Sample.php - Example NexOS block file                       |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      |
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |
  +-------------------------------------------------------------------+
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/classes/cpg_adminmenu.php,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 01:03:14 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }

class cpg_adminmenu {

	private $items = array();

	//
	// Constructor
	//
	function __construct() {
		if (!count($this->items)) { $this->get_content(); }
	}

	/*
		Echo the big graphical menu, function called by the admin modules
		$viscat: Which menucategory to show, default = all
		admingraphic is a bitwise integer value where:
			0=none, 1=graphic, 2=sideblock, 3=DHTML
		so graphic+sideblock = 1+2 = 3
	*/
	public function display($viscat='all', $type='block') {
		global $cpgtpl, $MAIN_CFG, $adminindex, $op, $Blocks;
		# Sideblock
		if ($type=='block') {
		if (!($MAIN_CFG['global']['admingraphic'] & 2)) { return false; }
			$content = '';
			foreach ($this->items as $cat => $action_array) {
				$content .= '<strong>'.(defined($cat) ? constant($cat) : $cat).'</strong><div style="margin-left: 8px;">';
				ksort($action_array);
				while (list($action, $info) = each($action_array)) {
					$op_url = explode($adminindex.'?op=', $info['URL']);
					$content .= ((isset($op_url[1]) && $op_url[1] == $op) ? '<a href="'.$info['URL'].'"><strong>'.$action.'</strong></a>' : '<a href="'.$info['URL'].'">'.$action.'</a>').'<br />';
				}
				$content .= '</div>';
			}
			$block = array(
				'bid' => 9999,
				'view' => 2,
				'side' => 'l',
				'title' => _ADMINMENU,
				'content' => $content
			);
			$Blocks->custom($block);
			return;
		}
		// Graphical
		else if ($type=='graph') {
			if (!($MAIN_CFG['global']['admingraphic'] & 1)) {
				$cpgtpl->assign_var('S_ADMIN_GRAPHIC', false);
				return false;
			}
			$showit = false;
			foreach ($this->items as $cat => $action_array) {
				if ($cat == _ADMIN) { continue; }
				if ($viscat == 'all' || $viscat == $cat) {
					$cattitle = defined($cat) ? constant($cat) : $cat;
					$cpgtpl->assign_block_vars('menucat', array('TITLE' => $cattitle));
					ksort($action_array);
					while (list($title, $info) = each($action_array)) {
						$img = $this->addGraphItem($info['IMG'], isset($info['MOD'])?$info['MOD']:'', false);
						if (!empty($img)) { $img = '<img src="'.$img.'" border="0" alt="'.$title.'" title="'.$title.'" />'; }
						$cpgtpl->assign_block_vars('menucat.menuitem', array(
							'TITLE'	=> $title,
							'IMAGE'	=> $img,
							'U_OPTION' => $info['URL']
						));
					}
					$showit = true;
				}
			}
			unset($this->items); // not needed anymore
			$cpgtpl->assign_var('S_ADMIN_GRAPHIC', $showit);
			return true;
		}
		else if ($type=='blockgfx') {
			$content = '';
			foreach ($this->items as $cat => $action_array) {
				ksort($action_array);
				while (list($title, $info) = each($action_array)) {
					$img = $this->addGraphItem($info['IMG'], isset($info['MOD'])?$info['MOD']:'', false);
					if (!empty($img)) {
						$content .= '<a href="'.$info['URL'].'"><img src="'.$img."\" border=\"0\" alt=\"\" title=\"$title\" width=\"25\" /></a>\n";
					}
				}
			}
			return $content;
		}
		else if ($type=='cssmenu') {
			if (!($MAIN_CFG['global']['admingraphic'] & 4)) { return false; }
			if (defined('ADMIN_PAGES')) {
				$content = '';
			} else {
				$content = '<ul>';
			}
			global $db, $prefix, $mainindex;
			foreach ($this->items as $cat => $action_array) {
				$cat = defined($cat) ? constant($cat) : $cat;
				if (defined('ADMIN_PAGES')) {
					$content .= "\n <li><a><b>&#8226;</b> $cat</a><ul>";
				} else {
					$content .= "\n <li><span>&raquo;</span><a class=\"submenu\">$cat</a><ul>";
				}
 				ksort($action_array);
				foreach ($action_array as $title => $info) {
					$img = $this->addGraphItem($info['IMG'], isset($info['MOD'])?$info['MOD']:'', $type);
					if (!empty($img)) { $img = " style=\"background: url($img) no-repeat left; height:12px; width:12px;\""; }
					if (!empty($info['SUB'])) {
						$content .= "\n  <li><span$img>&nbsp;</span><a class=\"submenu\" href=\"".$info['URL']."\">$title</a><ul>";
						foreach ($info['SUB'] as $subtitle => $subinfo) {
							$content .= "\n   <li><span$img>&nbsp;</span><a href=\"$subinfo\">$subtitle</a></li>";
						}
						$content .= "\n  </ul></li>";
					} else {
						$content .= "\n  <li><span$img>&nbsp;</span><a href=\"".$info['URL']."\">$title</a></li>";
					}
				}
				$content .= "\n </ul></li>";
			}
			if (defined('ADMIN_PAGES')) {
				$content .= '';
			} else {
				$content .= "\n</ul>\n";
			}
			return $content;
		}
		else if ($type=='jsmenu') {
			if (!($MAIN_CFG['global']['admingraphic'] & 8)) { return false; }

			global $db, $prefix, $mainindex, $CPG_SESS;
			$content = "var adminMenu = [\n[null, '".str_replace('\'', '\\\'', _HOME)."' , '$mainindex', null, null,";

			# Load active modules from database
			$sql = '(SELECT	m.title as link, m.custom_title as title, m.view, m.active, m.inmenu, m.cat_id, c.name, c.image, c.pos AS catpos, c.link AS catlnk, c.link_type AS cattype FROM '.$prefix.'_modules AS m LEFT JOIN '.$prefix.'_modules_cat c ON (c.cid = m.cat_id))
			 UNION (SELECT l.link as link, l.title, l.view, l.active, l.active as inmenu, l.cat_id, c.name, c.image, c.pos AS catpos, c.link AS catlnk, c.link_type AS cattype FROM '.$prefix.'_modules_links AS l LEFT JOIN '.$prefix.'_modules_cat c ON (c.cid = l.cat_id))';
			$result = $db->sql_query($sql);
			while ($row = $db->sql_fetchrow($result)) {
				if (empty($row['title'])) $row['title'] = $row['link'];
				$row['title'] = defined("_$row[link]LANG") ? constant("_$row[link]LANG") : str_replace('_', ' ', $row['title']);
				$row['title'] = str_replace('\'', '\\\'', $row['title']);
				if (!isset($row['catpos'])) $row['catpos'] = -1;
				$menucats[$row['catpos']][$row['title']] = $row;
			}
			$db->sql_freeresult($result);
			ksort($menucats);
			# Process the active modules
			while (list($cat, $items) = each($menucats)) {
				ksort($items);
				$catcontent = $catimage = $tmpcontent = '';
				while (list($dummy, $item) = each($items)) {
					$image = 'icon_unselect.gif';
					if (!$item['active']) $image = 'icon_cantselect.gif';
					elseif ($item['active'] && !$item['inmenu']) $image = 'icon_hideselect.gif';
					$image = isset($item['lnkimage']) ? $item['lnkimage'] : $image;
					$image = "<img src=\"$image\"";
					$tmpcontent .= "\n    ['".Menu::mmimage($image)." />', '$item[title]', '".URL::index($item['link'])."', null, null],";
					$catimage = $item['image'];
					$cattitle = $item['name'];
					$catlnk   = (false === strpos($item['catlnk'], '.') ? URL::index($item['catlnk']) : $item['catlnk']);
				}
				$cattitle = defined($cattitle) ? constant($cattitle) : $cattitle;
				if ($cat >= 0) {
					$content .= "\n ['".Menu::mmimage($catimage)." width=\"16\" height=\"16\" alt=\"\" />', '".str_replace('\'', '\\\'', $cattitle)."', '$catlnk', null, null,".substr($tmpcontent,0,-1)."\n ],";
				} else {
					$content .= "\n  [null, 'No category', null, null, null,".substr($tmpcontent,0,-1)."\n  ],";
				}
			}
			$content = substr($content,0,-1)."\n],";

			# Process the admin links
			foreach ($this->items as $cat => $action_array) {
				$cat = defined($cat) ? constant($cat) : $cat;
				$cat = str_replace('\'', '\\\'', $cat);
				$content .= "\n[null, '$cat', null, null, null,";
				ksort($action_array);
				foreach ($action_array as $title => $info) {
					$img = $this->addGraphItem($info['IMG'], isset($info['MOD'])?$info['MOD']:'', false);
					$img = empty($img) ? 'null' : "'<img src=\"$img\" width=\"16\" alt=\"\" />'";
					$content .= "\n  [$img, '".str_replace('\'', '\\\'', $title)."', '".str_replace('&amp;', '&', $info['URL'])."', null, null";
					if (isset($info['SUB'])) {
						$content .= ',';
						foreach ($info['SUB'] as $subtitle => $subinfo) {
							$content .= "\n	['', '".str_replace('\'', '\\\'', $subtitle)."', '".str_replace('&amp;', '&', $subinfo)."', null, null],";
						}
						$content = substr($content,0,-1)."\n  ],";
					} else {
						$content .= '],';
					}
				}
				$content = substr($content,0,-1)."\n],";
			}
			return substr($content,0,-1)."\n];\n";
		}
    }

	// Echo a graphical menu item, called by GraphicAdmin
	private function addGraphItem($image, $module, $type) {
		global $CPG_SESS;
		if (empty($image)) { return ''; }
		$small = ($type == 'cssmenu') ? 'small/' : '';
		if (isset($CPG_SESS['menu_img'][$CPG_SESS['theme']][$small.$image])) {
			return $CPG_SESS['menu_img'][$CPG_SESS['theme']][$small.$image];
		} else {
			if (file_exists('themes/'.$CPG_SESS['theme']."/images/admin/$small$image")) {
				$img = 'themes/'.$CPG_SESS['theme']."/images/admin/$small$image";
			} else if (file_exists('themes/'.$CPG_SESS['theme']."/images/admin/$small$image.png")) {
				$img = 'themes/'.$CPG_SESS['theme']."/images/admin/$small$image.png";
			} else if (file_exists('themes/'.$CPG_SESS['theme']."/images/admin/$small$image.gif")) {
				$img = 'themes/'.$CPG_SESS['theme']."/images/admin/$small$image.gif";
			}
			else if (file_exists("modules/$module/admin/$small$image.png")) {
				$img = "modules/$module/admin/$small$image.png";
			} else if (file_exists("modules/$module/admin/$small$image.gif")) {
				$img = "modules/$module/admin/$small$image.gif";
			}
			else if (file_exists("themes/default/images/admin/$small$image")) {
				$img = "themes/default/images/admin/$small$image";
			} else if (file_exists("themes/default/images/admin/$small$image.png")) {
				$img = "themes/default/images/admin/$small$image.png";
			} else if (file_exists("themes/default/images/admin/$small$image.gif")) {
				$img = "themes/default/images/admin/$small$image.gif";
			} else {
				$img = 'images/spacer.gif';
			}
		}
		$CPG_SESS['menu_img'][$CPG_SESS['theme']][$small.$image] = $img;
		return $img;
	}

	private function get_content() {
		global $menuitems, $adminindex, $adlinks;
		if (!Cache::array_load('adlinks')) {
			$adlinks = array();
			$linksdir = dir('admin/links');
			while($file = $linksdir->read()) {
				// CPG-Nuke system							 PHP-Nuke system
				if (preg_match('/^adlnk_.*?\.php$/', $file) || preg_match('/^links\..*?\.php$/', $file)) {
					$adlinks[] = 'admin/links/'.$file;
				}
			}
			$linksdir->close();
			// Dragonfly system
			$linksdir = dir('modules');
			while($module = $linksdir->read()) {
				if (false === strpos($module, '.') && $module != 'CVS' && file_exists("modules/$module/admin/adlinks.inc")) {
					$adlinks[$module] = 'modules/'.$module.'/admin/adlinks.inc';
				}
			}
			$linksdir->close();
			Cache::array_save('adlinks');
		}
		foreach ($adlinks as $module => $path) {
			if (is_file($path)) include($path);
		}
		$this->items = is_array($menuitems) ? $menuitems : array();
		ksort($this->items);
		$this->items[_ADMIN][_MENU]['URL'] = $adminindex;
		$this->items[_ADMIN][_MENU]['IMG'] = '';
		$this->items[_ADMIN][_ADMINLOGOUT]['URL'] = URL::admin('logout');
		$this->items[_ADMIN][_ADMINLOGOUT]['IMG'] = '';
		unset($menuitems);
	}

}

/***********************************************************************************
 The old php-nuke function called by links.*.php files
 NOT RECOMENDED use the new adlnk_*.php system instead
************************************************************************************/
function adminmenu($url, $title, $image) {
	global $menuitems, $adminindex;
	$url = str_replace('admin.php', $adminindex, $url);
	$menuitems['_AMENU9'][$title]['URL'] = $url;
	$menuitems['_AMENU9'][$title]['IMG'] = $image;
}

global $CLASS;
$CLASS['adminmenu'] = new cpg_adminmenu();
