<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/admin/fields_mngr.inc,v $
  $Revision: 1.6 $
  $Author: phoenix $
  $Date: 2010/11/08 03:05:51 $
******************************************************/
if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin($op)) { die('Access Denied'); }
require_once('modules/'.$op.'/functions/display.inc');

$message = '';

if (isset($_POST['saveFields'])) {
	$result = $db->sql_query("SELECT field, visible FROM ".$dl_prefix."_fields");
	while (list($field, $visible) = $db->sql_fetchrow($result)) {
		$val = intval($_POST[$field]);
		if ($visible != $val) {
			$db->sql_query("UPDATE ".$dl_prefix."_fields 
				SET visible='$val' 
				WHERE field='$field'");
		}
	}
	$message = _DLP_CHANGESSAVED;
} elseif (isset($_POST['saveField'])) {
	list($a_name, $a_del) = $db->sql_ufetchrow("SELECT field, del FROM ".$dl_prefix."_fields 
		WHERE id='$global_id'", SQL_NUM);
	$f_name = isset($_POST['name']) ? Fix_Quotes(ereg_replace(' ', '_', $_POST['name'])) : $a_name;
	if ($a_del && !ereg("[_0-9a-z-]", $f_name)) { cpg_error(sprintf(_DLP_FNAMEFORBIDDEN, $f_name)); }
	$f_desc = Fix_Quotes($_POST['desc'], true);
	$f_type = intval($_POST['type']);
	$f_size = intval($_POST['size']);
	$f_imgpath = Fix_Quotes($_POST['img_path']);
	$f_imgalt = Fix_Quotes($_POST['img_alt']);
	if ($f_type == 1 || $f_type == 3) {
		if ($f_size > 1 || $f_size < 0) { $f_size = 1; }
		$size = 'TINYINT(1) NOT NULL';
	} elseif ($f_type == 2) {
		$size = 'TEXT NOT NULL';
	} else {
		if ($f_size > 255 || $f_size < 1) { cpg_error(_DLP_FSIZEFORBIDDEN); }
		$size = 'VARCHAR('.$f_size.') NOT NULL';
	}
	$db->sql_query("UPDATE ".$dl_prefix."_fields 
		SET ".($a_del ? "field='$f_name', " : "")."title='$f_desc', type='$f_type', size='$f_size', img_path='$f_imgpath', img_alt='$f_imgalt' 
		WHERE id='$global_id'", false, __FILE__, __LINE__);
	$db->sql_query("ALTER TABLE ".$dl_prefix."_downloads 
		CHANGE $a_name ".($a_del ? $f_name : $a_name)." $size");
	$message = _DLP_CHANGESSAVED;
} elseif (isset($_POST['addField'])) {
	$f_name = Fix_Quotes(ereg_replace(' ', '_', $_POST['name']), true);
	if (!ereg("[_0-9a-z-]", $f_name)) { cpg_error(sprintf(_DLP_FNAMEFORBIDDEN, $f_name)); }
	$sql = 'ALTER TABLE '.$dl_prefix.'_downloads 
		ADD '.$f_name.' ';
	$f_type = intval($_POST['type']);
	$f_size = intval($_POST['size']);
	$f_imgpath = Fix_Quotes($_POST['img_path']);
	$f_imgalt = Fix_Quotes($_POST['img_alt']);
	if ($f_type == 1 || $f_type == 3) {
		if ($f_size > 1 || $f_size < 0) { $f_size = 1; }
		$sql .= 'TINYINT(1) NOT NULL';
	} elseif ($f_type == 2) {
		$sql .= 'TEXT NOT NULL';
	} else {
		if ($f_size > 255 || $f_size < 1) { cpg_error(_DLP_FSIZEFORBIDDEN); }
		$sql .= 'VARCHAR('.$f_size.') NOT NULL';
	}
	$f_title = Fix_Quotes($_POST['desc'], true);
	$db->sql_query("INSERT INTO ".$dl_prefix."_fields 
		(id, field, title, visible, type, size, img_path, img_alt, del) 
		VALUES 
		(DEFAULT, '$f_name', '$f_title', 1, '$f_type', '$f_size', '$f_imgpath', '$f_imgalt', 1)");
	$db->sql_query($sql);
	$message = sprintf(_DLP_FIELDADDED, $f_title);
} elseif (isset($_GET['del'])) {
	$del_id = intval($_GET['del']);
	list($del, $title) = $db->sql_ufetchrow("SELECT del, title FROM ".$dl_prefix."_fields 
		WHERE id='$del_id'", SQL_NUM);
	if (!$del) { cpg_error(_DLP_FIELDPERMANENT); }
	if (isset($_POST['cancel'])) {
		$message = '';
	} elseif (isset($_POST['confirm'])) {
		$result = $db->sql_query("SELECT field FROM ".$dl_prefix."_fields 
			WHERE id='$del_id'");
		if ($db->sql_numrows($result)) {
			list($field_name) = $db->sql_fetchrow($result);
			$db->sql_query("DELETE FROM ".$dl_prefix."_fields 
				WHERE id='$del_id'");
			$db->sql_query("ALTER TABLE ".$dl_prefix."_downloads 
				DROP $field_name");
		}
		$db->sql_freeresult($result);
		$message = sprintf(_DLP_FIELDREMOVED, $title);
	} else {
		$pagetitle .= ' '._BC_DELIM.' '._DLP_REMFIELD;
		cpg_delete_msg(URL::admin('&amp;mode=fields&amp;del='.$del_id), sprintf(_DLP_REMFIELDCONF, $title));
	}
}

$pagetitle .= ' '._BC_DELIM.' '._DLP_CFIELDS;
if (isset($_GET['add'])) {
	$pagetitle .= ' '._BC_DELIM.' '._DLP_ADDFIELD;
	require_once('header.php');
	GraphicAdmin('_AMENU6');
	OpenTable();
	echo dl_admin_menu().'<br /><hr /><br />
	<span class="genmed"><strong><a href="'.URL::admin('&amp;mode=fields').'">'._DLP_CFIELDS.'</a> '._BC_DELIM.' '._DLP_ADDFIELD.'</strong></span><br /><br />
	<form action="'.URL::admin('&amp;mode=fields').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">
	<table border="0" cellpadding="3" cellspacing="1" width="60%" class="forumline">
	 <tr>
	   <td class="row1" colspan="2">'._DLP_ALLFIELDSRQR.'</td>
	 </tr><tr>
	   <td class="row1"><span class="genmed">'._DLP_FIELDNAME.'</span></td>
	   <td class="row2"><input type="text" name="name" id="name" size="35" maxlength="25" /> (ie. "license")</td>
	 </tr><tr>
	   <td class="row1"><span class="genmed">'._DESCRIPTION.'</span></td>
	   <td class="row2"><input type="text" name="desc" id="desc" size="35" maxlength="255" /> (ie. "Software license")</td>
	 </tr><tr>
	   <td class="row1"><span class="genmed">'._DLP_FIELDTYPE.'</span></td>
	   <td class="row2">'.select_box('type', 0, array(0=>_DLP_FTYPETEXT, 1=>_YES.'/'._NO, 2=>_DLP_FTYPETEXTAREA, 3=>_DLP_FTYPEIMG)).'</td>
	 </tr><tr>
	  <td class="row1"><span class="genmed">'._DLP_FIMGPATH.'</span><br /><span class="gensmall">'._DLP_FIMGONLY.'</span></td>
	   <td class="row2"><input type="text" name="img_path" id="img_path" size="35" maxlength="255" /></td>
	 </tr><tr>
	   <td class="row1"><span class="genmed">'._DLP_FIMGALT.'</span><br /><span class="gensmall">'._DLP_FIMGONLY.'</span></td>
	   <td class="row2"><input type="text" name="img_alt" id="img_alt" size="35" maxlength="255" /></td>
	 </tr><tr>
	   <td class="row1"><span class="genmed">'._DLP_FIELDSIZE.'</span><br /><span class="gensmall">0 - 255</span></td>
	   <td class="row2"><input type="text" name="size" id="size" size="4" maxlength="3" /> '._DLP_FSIZEONLY.'</td>
	 </tr><tr>
	   <td align="center" class="catbottom" colspan="2"><input class="mainoption" type="submit" name="addField" value="'._DLP_ADDFIELD.'" /></td>
	 </tr>
	</table>
	</form>';
	CloseTable();
} elseif (isset($_GET['edit'])) {
	$edit_id = intval($_GET['edit']);
	$pagetitle .= ' '._BC_DELIM.' '._DLP_EDITFIELD;
	list($f_field, $f_title, $f_visible, $f_del, $f_type, $f_size, $f_imgpath, $f_imgalt) = $db->sql_ufetchrow("SELECT field, title, visible, del, type, size, img_path, img_alt FROM ".$dl_prefix."_fields 
		WHERE id='$edit_id'", SQL_NUM);
	require_once('header.php');
	GraphicAdmin('_AMENU6');
	OpenTable();
	echo dl_admin_menu().'<br /><hr /><br />
	<span class="genmed"><strong><a href="'.URL::admin('&amp;mode=fields').'">'._DLP_CFIELDS.'</a> '._BC_DELIM.' '._DLP_EDITFIELD.'</strong></span><br /><br />
	<form action="'.URL::admin('&amp;mode=fields').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">
	<table border="0" cellpadding="3" cellspacing="1" width="60%" class="forumline">
	 <tr>
	   <td class="row1" colspan="2">'._DLP_ALLFIELDSRQR.'</td>
	 </tr><tr>
	   <td class="row1"><span class="genmed">'._DLP_FIELDNAME.'</span></td>
	   <td class="row2"><input type="text" name="name" id="name" size="35" maxlength="25" value="'.htmlprepare($f_field).'"'.($f_del ? '' : ' disabled="disabled" title="'._DLP_FIELDPERMANENT.'"').' /></td>
	 </tr><tr>
	   <td class="row1"><span class="genmed">'._DESCRIPTION.'</span></td>
	   <td class="row2"><input type="text" name="desc" id="desc" size="35" maxlength="255" value="'.htmlprepare($f_title).'" /></td>
	 </tr><tr>
	   <td class="row1"><span class="genmed">'._DLP_FIELDTYPE.'</span></td>
	   <td class="row2">'.select_box('type', $f_type, array(0=>_DLP_FTYPETEXT, 1=>_YES.'/'._NO, 2=>_DLP_FTYPETEXTAREA, 3=>_DLP_FTYPEIMG)).'</td>
	 </tr><tr>
	   <td class="row1"><span class="genmed">'._DLP_FIMGPATH.'</span><br /><span class="gensmall">'._DLP_FIMGONLY.'</span></td>
	   <td class="row2"><input type="text" name="img_path" id="img_path" size="35" maxlength="255" value="'.htmlprepare($f_imgpath).'" /></td>
	 </tr><tr>
	   <td class="row1"><span class="genmed">'._DLP_FIMGALT.'</span><br /><span class="gensmall">'._DLP_FIMGONLY.'</span></td>
	   <td class="row2"><input type="text" name="img_alt" id="img_alt" size="35" maxlength="255" value="'.htmlprepare($f_imgalt).'" /></td>
	 </tr><tr>
	   <td class="row1"><span class="genmed">'._DLP_FIELDSIZE.'</span><br /><span class="gensmall">0 - 255</span></td>
	   <td class="row2"><input type="text" name="size" id="size" size="4" maxlength="3" value="'.intval($f_size).'" /> '._DLP_FSIZEONLY.'</td>
	 </tr><tr>
	   <td align="center" class="catbottom" colspan="2">
		<input type="hidden" name="id" value="'.$edit_id.'" />
		<input class="mainoption" type="submit" name="saveField" value="'._SAVECHANGES.'" />'.($f_del ? ' &nbsp; <a href="'.URL::admin('&amp;mode=fields&amp;del='.$edit_id).'"><input class="liteoption" type="button" value="'._DELETE.'" onclick="parent.location=\''.URL::admin('&amp;mode=fields&amp;del='.$edit_id).'\'" /></a>' : '').'
	   </td>
	 </tr>
	</table>
	</form>';
	CloseTable();
} else {
	require_once('header.php');
	GraphicAdmin('_AMENU6');
	OpenTable();
	echo dl_admin_menu().'<br /><hr /><br />
	<span class="genmed"><strong>'._DLP_CFIELDS.'</strong></span><br /><br />
	'.(!empty($message) ? '<span class="genmed" style="color: '.$textcolor1.';"><strong>'.$message.'</strong></span><br /><br />' : '').'
	<form action="'.URL::admin('&amp;mode=fields').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">
	<table border="0" cellspacing="0" width="60%">
	 <tr bgcolor="'.$bgcolor2.'">
	   <td><strong>'._DLP_FIELD.'</strong></td>
	   <td><strong>'._TYPE.'</strong></td>
	   <td><strong>'._DLP_FORMDISPLAY.'</strong></td>
	   <td><strong>'._FUNCTIONS.'</strong></td>
	 </tr>';
	$color = $bgcolor3;
	$result = $db->sql_query("SELECT * FROM ".$dl_prefix."_fields 
		ORDER BY title");
	while (list($f_id, $f_field, $f_title, $f_visible, $f_type, $f_size, $dummy, $dummy, $f_del) = $db->sql_fetchrow($result)) {
		$color = ($color == '') ? ' bgcolor="'.$bgcolor3.'"' : '';
		$f_title = defined($f_title) ? constant($f_title) : $f_title;
		$types = array(0=>_DLP_FTYPETEXT, 1=>_YES.'/'._NO, 2=>_DLP_FTYPETEXTAREA, 3=>_DLP_FTYPEIMG);
		$sel = array('', '', '', '');
		$sel[$f_visible] = ' selected="selected"';
		echo '
	 <tr'.$color.'>
	   <td>'.$f_title.'</td>
	   <td>'.$types[$f_type].'</td>
	   <td><select name="'.$f_field.'" id="'.$f_field.'">
	   <option value="0"'.$sel[0].'>'._BHID.'</option>
	   <option value="1"'.$sel[1].'>'._DLP_VISIBLE.'</option>';
	   if ($f_type != 1 && $f_type != 3) {
		   echo '
	   <option value="2"'.$sel[2].'>'._DLP_REQUIRED.'</option>';
	   }
	   echo '
	   <option value="3"'.$sel[3].'>'._DLP_ADMINONLY.'</option>
	   </select></td>
	   <td><a href="'.URL::admin('&amp;mode=fields&amp;edit='.$f_id).'">'._EDIT.'</a> '.($f_del ? ' / <a href="'.URL::admin('&amp;mode=fields&amp;del='.$f_id).'">'._DELETE.'</a>' : '').'</td>
	 </tr>';
	}
	$db->sql_freeresult($result);
	echo '
	</table><br />
	<input type="submit" name="saveFields" value="'._SAVECHANGES.'" /> <a href="'.URL::admin('&amp;mode=fields&amp;add').'"><input type="button" value="'._DLP_ADDFIELD.'" onclick="parent.location=\''.URL::admin('&amp;mode=fields&amp;add').'\'" /></a></form>';
	CloseTable();
}