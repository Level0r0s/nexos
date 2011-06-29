<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/functions/categories.inc,v $
  $Revision: 1.11 $
  $Author: phoenix $
  $Date: 2010/11/08 03:05:51 $
******************************************************/

abstract class DL_Cat
{

	public static function list_all(&$cats, $parent=0, $depth=0, $crumb='', $exclude=0)
	{
		static $allcats;
		if ($allcats && $parent == 0) {
			$cats = $allcats;
			return count($cats);
		}
		global $module_name, $db, $dl_prefix;
		$save = false;
		if (empty($cats)) {
			if ($cats = Cache::array_load('categories', $module_name, false)) {
				$tempdepth = $cats['d'];
				unset($cats['d']);
				$allcats = $cats;
				return $tempdepth;
			} else {
				$save = true;
			}
		}
		$result = $db->sql_query('SELECT cid, title, cdescription, parentid FROM '.$dl_prefix."_categories 
		WHERE parentid=$parent 
		ORDER BY title");
		$tempdepth = $depth;
		if ($db->sql_numrows($result)) {
			$depth++;
			$tempdepth = $depth;
			while ($row = $db->sql_fetchrow($result, SQL_ASSOC)) {
				if ($exclude != $row['cid']) {
					$row['level'] = $depth;
					$row['crumb'] = ($crumb != '') ? $crumb.$row['title'] : $row['title'];
					$cats[] = $row;
					$templevel = self::list_all($cats, $row['cid'], $depth, $crumb.'&nbsp; &nbsp; ', $exclude);
					if ($templevel > $tempdepth) { $tempdepth = $templevel; }
				}
			}
			if ($parent > 0) { $cats[(count($cats)-1)]['last'] = 1; }
		}
		$db->sql_freeresult($result);
		if ($save) {
			$cats['d'] = $tempdepth;
			Cache::array_save('categories', $module_name, $cats);
			unset($cats['d']);
			$allcats = $cats;
		}
		return $tempdepth;
	}

	protected static function list_sub($parent, &$subcats)
	{
		$cats = array();
		self::list_all($cats);
		foreach ($cats as $catrow) {
			if ($catrow['parentid'] == $parent) {
				$subcats[] = $catrow['cid'];
				self::list_sub($catrow['cid'], $subcats);
			}
		}
	}

	public static function count_dl()
	{
		global $db, $dl_prefix, $module_name;
		Cache::array_delete('countdl', $module_name, false);
		$result = $db->sql_query("SELECT cid FROM ".$dl_prefix."_categories");
		while ($row = $db->sql_fetchrow($result)) {
			$subcats = array();
			self::list_sub($row['cid'], $subcats);
			$subcats[] = $row['cid'];
			$result2 = $db->sql_query("SELECT MAX(date) AS date, MAX(updated) AS updated, MAX(lid) AS latest, cid, count(lid) AS dl
			FROM ".$dl_prefix."_downloads
			WHERE active='1' AND cid IN (".implode(',', $subcats).")
			GROUP BY active, cid");
			while ($row2 = $db->sql_fetchrow($result2, SQL_ASSOC)) {
				$countdl[$row['cid']] = $row2;
				Cache::array_save('countdl', $module_name, $countdl);
			}
		}
		return $countdl;
	}

	/*********************************************
	  HTML formatting functions
	**********************************************/

	public static function form($modify=false, $cats='')
	{
		global $db, $dl_prefix;
		if ($modify) {
			$result = $db->sql_query('SELECT * FROM '.$dl_prefix.'_categories WHERE cid='.intval($_GET['editCat']));
			if ($db->sql_numrows($result) < 1) { URL::redirect(URL::admin()); }
			$cat = $db->sql_fetchrow($result);
			echo '<table border="0" cellpadding="3" cellspacing="1" width="50%" class="forumline">
			<form action="'.URL::admin('&amp;cid='.$cat['cid']).'" method="post" enctype="multipart/form-data" accept-charset="utf-8">';
			$cats = array();
			self::list_all($cats);
			$submit = 'name="editCat" value="'._SAVECHANGES.'" />&nbsp;&nbsp;<input class="liteoption" type="reset';
		} else {
			echo '<form action="'.URL::admin('&amp;cid=0').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">
			<table border="0" cellpadding="3" cellspacing="1" width="50%" class="forumline">';
			$cat['title'] = $cat['cdescription'] = '';
			$cat['parentid'] = 0;
			$submit = 'name="addCat" value="'._ADD.' '._CATEGORY;
		}
		array_unshift($cats, array('cid' => 0, 'crumb' => '['.strtolower(_DLP_ROOT).']'));
		$selects = '';
		foreach ($cats as $row) {
			$selected = ($cat['parentid'] == $row['cid']) ? '" selected="selected"' : '"';
			$selects .= '<option value="'.$row['cid'].$selected.'>'.$row['crumb']."</option>\n";
		}
		echo '
		<tr>
		  <td class="row1" style="width:20%;">'._NAME.'</td>
		  <td class="row2"><input type="text" name="title" id="title" size="45" maxlength="100" value="'.$cat['title'].'" /></td>
		</tr><tr>
		  <td class="row1" style="width:20%;">'._CATEGORY.'</td>
		  <td class="row2"><select name="parentid" id="parentid">
	'.$selects.'
		  </select></td>
		</tr><tr>
		  <td class="row1" style="width:20%;">'._DESCRIPTION.'</td>
		  <td class="row2"><textarea name="cdescription" id="cdescription" cols="42" rows="3">'.$cat['cdescription'].'</textarea></td>
		</tr><tr>
		  <td align="center" class="catbottom" colspan="2"><input class="mainoption" type="submit" '.$submit.'" /></td>
		</tr>
		</table>
		</form>';
	}

	public static function selectbox($parentid=0, $field='parentid', $root=true, $exclude=false)
	{
		$cats = $select = array();
		self::list_all($cats);
		if ($root) {
			$select[] = ($root == 2) ? '['.strtolower(_DLP_ALLCATS).']' : '['.strtolower(_DLP_ROOT).']'; }
		if (!is_array($exclude)) { $exclude = array($exclude); }
		foreach ($cats as $cat) {
			if (!in_array($cat['cid'], $exclude)) { $select[$cat['cid']] = $cat['crumb']; }
		}
		return select_box($field, $parentid, $select);
	}

	public static function breadcrumb($cat_id, $link=true)
	{
		$crumb = '';
		$cats = array();
		self::list_all($cats);
		foreach ($cats as $catrow) {
			if ($catrow['cid'] == $cat_id) {
				if ($link) {
					$crumb = '<a href="'.URL::index('&amp;c='.$catrow['cid']).'">'.$catrow['title'].'</a>';
				} else {
					$crumb = $catrow['title'];
				}
				if ($catrow['parentid'] > 0) { $crumb = self::breadcrumb($catrow['parentid']).' '._BC_DELIM.' '.$crumb; }
			}
		}
		return $crumb;
	}

	protected static function subcrumbs($parent)
	{
		$subcats = $cats = array();
		self::list_all($cats);
		foreach ($cats as $catrow) {
			if ($catrow['parentid'] == $parent) {
				$subcats[] = '<a href="'.URL::index('&amp;c='.$catrow['cid']).'">'.$catrow['title'].'</a>';
			}
		}
		$ellipsis = false;
		if (count($subcats) > 4) {
			$subcats = array_slice($subcats, 0, 4);
			$ellipsis = true;
		}
		return implode(', ',$subcats).($ellipsis ? ' ...' : '');
	}

	public static function show($parent=0)
	{
		global $db, $dl_prefix, $module_name, $CPG_SESS, $cpgtpl, $bgcolor3;

		$sql = "SELECT cid, title, cdescription FROM ".$dl_prefix."_categories 
		WHERE parentid=$parent 
		GROUP BY title ASC, cid, cdescription";
		$cats = $db->sql_ufetchrowset($sql, SQL_ASSOC, __FILE__, __LINE__);
		if (!count($cats)) {
			$cpgtpl->assign_vars(array(
				'DL_ROOT'	=> false,
				'DL_SUB'	=> false
			));
		} else {
			$cpgtpl->assign_vars(array(
				'L_CATEGORY'	=> _CATEGORY,
				'L_CATEGORIES'	=> _CATEGORIES,
				'L_SUBCATEGORY'	=> _DLP_SUBCAT,
				'L_SUBCATEGORIES' => _DLP_SUBCATS,
				'L_DL'			=> 'D/L',
				'L_SUB'			=> _DLP_SUB,
				'L_LATEST_ADD'	=> _DLP_LASTADD,
				'L_NEW'			=> _DLP_NEW,
				'L_UPD'			=> _DLP_UPD,
				'DL_ROOT'		=> (!$parent),
				'DL_SUBROOT'	=> $parent,
				'DL_SUB'		=> true
			));
			$div = count($cats)/3;
			if (is_float($div)) {
				$exploded = explode('.', $div);
				$div = $exploded[0]+1;
			}
			$div_range = array($div, $div*2, $div*3);
			$i = 1;
			$countdl = Cache::array_load('countdl', $module_name, true);
			foreach ($cats as $row) {
				if ($i <= $div_range[0]) {
					$div_pos = 'left';
				} elseif ($i <= $div_range[1]) {
					$div_pos = 'middle';
				} elseif ($i <= $div_range[2]) {
					$div_pos = 'right';
				}
				$subcats = $access = array();
				self::list_sub($row['cid'], $subcats);
				$subcount = count($subcats);
				$subcats[] = $row['cid'];

				$dl_stats['dl'] = isset($countdl[$row['cid']]) ? $countdl[$row['cid']]['dl'] : 0;
				$dl_stats['date'] = isset($countdl[$row['cid']]) ? $countdl[$row['cid']]['date'] : 0;
				$dl_stats['updated'] = isset($countdl[$row['cid']]) ? $countdl[$row['cid']]['updated'] : 0;
				$dl_stats['latest'] = isset($countdl[$row['cid']]) ? $countdl[$row['cid']]['latest'] : 0;

				$folder_img = ($subcount > 0) ? dl_image('folders/folder_sub.png') : dl_image('folders/folder.png');
				if ($dl_stats['dl'] > 0) {
					if ($dl_stats['date'] >= (time()-432000) || $dl_stats['updated'] >= (time()-432000)) {
						$folder_img = ($subcount > 0) ? dl_image('folders/folder_sub_new.png') : dl_image('folders/folder_new.png');
					}
				}
				$cpgtpl->assign_block_vars('dl_cat', array(
					'MARK_NEW'		=> $dl_stats['date'] >= (time()-432000),
					'MARK_UPD'		=> $dl_stats['updated'] >= (time()-432000),
					'POS_NEW'		=> (isset($old_pos) ? ($div_pos != $old_pos) : true),
					'POS_BEFORE'	=> ($i == $div_range[0] || $i == $div_range[1] || $i == $div_range[2] || $i == count($cats)),
					'URL'			=> URL::index('&amp;c='.$row['cid']),
					'TITLE'			=> $row['title'],
					'DESC'			=> $row['cdescription'],
					'SUB'			=> (($subcount > 0) ? self::subcrumbs($row['cid']) : ''),
					'FOLDER'		=> $folder_img,
					'DL_COUNT'		=> (isset($dl_stats['dl']) ? $dl_stats['dl'] : 0),
					'SUB_COUNT'		=> $subcount,
					'LAST_DATE'		=> ($dl_stats['dl'] > 0) ? generate_date($dl_stats['date'], 'M j, Y') : '',
					'U_LAST'		=> ($dl_stats['dl'] > 0) ? '<a href="'.URL::index('&amp;file=details&amp;id='.$dl_stats['latest']).'"><img src="'.dl_image('latest.gif').'" alt="'._DLP_GO2DL.'" title="'._DLP_GO2DL.'" /></a>' : '-'
				));
				$old_pos = $div_pos;
				$i++;
			}
		}
	}

}
