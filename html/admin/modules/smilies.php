<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 | 
  +-------------------------------------------------------------------+
  | smilies.php - NexOS Administration Backend file                   |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      | 
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |  
  +-------------------------------------------------------------------+
  | CPG Dragonfly™ CMS                                                |
  | Copyright © 2004 - 2005 by CPG-Nuke Dev Team                      |
  | http://www.dragonflycms.com                                       |
  | Dragonfly is released under the terms and conditions of the GNU   |
  | GPL version 2 or any later version                                |  
  +-------------------------------------------------------------------+
*/

if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin('smilies')) { die('Access Denied'); }
$pagetitle .= ' '._BC_DELIM.' Smiles Utility';

$smilies_path = 'images/smiles/';
$delimeter = '=+:';
$mode = (isset($_GET['mode']) ? $_GET['mode'] : (isset($_POST['mode']) ? $_POST['mode'] : ''));

define('SMILIES_TABLE', $prefix.'_bbsmilies');

// Load default header
function showheader() {
	global $modheader;
	$modheader .= '
<link rel="stylesheet" href="themes/default/style/tabletree.css" type="text/css" media="screen"/>
<script type="text/javascript" src="includes/javascript/framework.js"></script>
<script type="text/javascript" src="includes/javascript/dragndrop.js"></script>
<script type="text/javascript" src="includes/javascript/tabletree.js"></script>
<script type="text/javascript" src="includes/javascript/tasktable.js"></script>
';
	require_once('header.php');
	GraphicAdmin('_AMENU1');
	OpenTable();
	echo '<div style="text-align:center;">';
}

$smiley_paks = array();
// Read a listing of uploaded smilies for use in the add or edit smiley code...
$dir = opendir($smilies_path);
while ($file = readdir($dir)) {
	if (!is_dir($smilies_path . $file)) {
		$img_size = getimagesize($smilies_path . $file);
		if ( $img_size[0] && $img_size[1] ) {
			$smiley_images[] = $file;
		} else if (preg_match('#\.pak$#', $file)) {
			$smiley_paks[] = $file;
		}
	}
}
closedir($dir);

function smile_edit($smile_data, $s_hidden_fields, $filename_list, $smiley_image) {
	global $smilies_path, $modheader;
	$modheader .= '<script type="text/javascript">
function update_smiley(newimage)
{
	document.getElementById("smiley_image").src = "'.$smilies_path.'" + newimage;
}
</script>';
	showheader();
	echo '
<form method="post" action="'.URL::admin('smilies').'" enctype="multipart/form-data" accept-charset="utf-8">
<table class="forumline" cellspacing="1" cellpadding="4" border="0">
	<tr>
		<th class="thHead" colspan="2">Smiley Configuration</th>
	</tr>
	<tr>
		<td class="row2">Smiley Code</td>
		<td class="row2"><input type="text" name="smile_code" value="'.(isset($smile_data['code']) ? $smile_data['code'] : '').'" /></td>
	</tr>
	<tr>
		<td class="row1">Smiley Image File</td>
		<td class="row1"><select name="smile_url" onchange="update_smiley(this.options[selectedIndex].value);">'.$filename_list.'</select> &nbsp; <img id="smiley_image" name="smiley_image" src="'.$smilies_path . $smiley_image.'" border="0" alt="" /> &nbsp;</td>
	</tr>
	<tr>
		<td class="row2">Smiley Emotion</td>
		<td class="row2"><input type="text" name="smile_emotion" value="'.(isset($smile_data['emoticon']) ? $smile_data['emoticon'] : '').'" /></td>
	</tr>
	<tr>
		<td class="catBottom" colspan="2" align="center">'.$s_hidden_fields.'<input class="mainoption" type="submit" value="'._SAVECHANGES.'" /></td>
	</tr>
</table></form>';
}

// Select main mode
if (isset($_POST['import_pack'])) {
	if (!Security::check_post()) { cpg_error(_SEC_ERROR); }
	if (!empty($_POST['smile_pak'])) {
		// The user has already selected a smile_pak file.. Import it.
		$smiles = array();
		if (!empty($_POST['clear_current'])) {
			$db->sql_query("DELETE FROM " . SMILIES_TABLE);
		}
		else {
			$cur_smilies = $db->sql_ufetchrowset("SELECT code FROM ". SMILIES_TABLE);
			for ($i = 0; $i < count($cur_smilies); $i++) {
				$smiles[$cur_smilies[$i]['code']] = 1;
			}
		}

		$fcontents = file($smilies_path . $_POST['smile_pak']);

		if (empty($fcontents)) {
			cpg_error('The smiley pak file could not be read');
		}

		for ($i = 0; $i < count($fcontents); $i++) {
			$smile_data = explode($delimeter, trim(Fix_Quotes($fcontents[$i])));
			for ( $j = 2; $j < count($smile_data); $j++) {
				// Replace > and < with the proper html_entities for matching.
				$smile_data[$j] = str_replace("<", "&lt;", $smile_data[$j]);
				$smile_data[$j] = str_replace(">", "&gt;", $smile_data[$j]);
				$k = $smile_data[$j];
				if ($smiles[$k] == 1) {
					if (!empty($_POST['replace_existing'])) {
						$sql = "UPDATE " . SMILIES_TABLE . "
								SET smile_url = '" . Fix_Quotes($smile_data[0]) . "', emoticon = '" . Fix_Quotes($smile_data[1]) . "'
								WHERE code = '" . Fix_Quotes($smile_data[$j]) . "'";
					}
					else {
						$sql = '';
					}
				}
				else {
					$sql = "INSERT INTO " . SMILIES_TABLE . " (code, smile_url, emoticon)
								VALUES('" . Fix_Quotes($smile_data[$j]) . "', '" . Fix_Quotes($smile_data[0]) . "', '" . Fix_Quotes($smile_data[1]) . "')";
				}
				if ($sql != '') {
					$db->sql_query($sql);
				}
			}
		}
		Cache::array_delete('smilies','bb');
		cpg_error('The smiley pack was successfully installed', 'Smiles Utility', URL::admin('smilies'));
	}
	else {
		// Display the script to get the smile_pak cfg file...
		showheader();
		$smile_paks_select = "<select name='smile_pak'><option value=''>Select Pack (.pak) File</option>";
		while (list($key, $value) = each($smiley_paks)) {
			if (!empty($value)) {
				$smile_paks_select .= "<option>" . $value . "</option>";
			}
		}
		$smile_paks_select .= "</select>";
		echo '<p>You should unzip the smiley package and upload all files to the appropriate Smiley directory for your installation.<br />
Then select the correct information in this form to import the smiley pack.</p>
<form method="post" action="'.URL::admin('smilies').'" enctype="multipart/form-data" accept-charset="utf-8">
<table class="forumline" cellspacing="1" cellpadding="4" border="0">
	<tr>
		<th class="thHead" colspan="2">Smiley Pack Import</th>
	</tr>
	<tr>
		<td class="row2">Choose a Smile Pack .pak file</td>
		<td class="row2">'.$smile_paks_select.'</td>
	</tr>
	<tr>
		<td class="row1">Delete existing smilies before import</td>
		<td class="row1"><input type="checkbox" name="clear_current" value="1" /></td>
	</tr>
	<tr>
		<td class="row2" colspan="2" align="center">What should be done in case of conflicts<br /><input type="radio" name="replace" value="1" checked="checked" /> Replace Existing Smiley &nbsp; <input type="radio" name="replace" value="0" /> Keep Existing Smiley</td>
	</tr>
	<tr>
		<td class="catBottom" colspan="2" align="center"><input type="hidden" name="mode" value="import" /><input class="mainoption" name="import_pack" type="submit" value="Import Smileys" /></td>
	</tr>
</table></form>';
	}
}
else if (isset($_GET['export_pack'])) {
	// Export our smiley config as a smiley pak...
	$sql = "SELECT * FROM " . SMILIES_TABLE;
	$result = $db->sql_query($sql);
	if ($result) {
		$resultset = $db->sql_fetchrowset($result);
	}
	if (!isset($resultset)) {
		cpg_error('The smiley list could not be obtained');
	}
	$smile_pak = '';
	for ($i = 0; $i < count($resultset); $i++ ) {
		$smile_pak .= $resultset[$i]['smile_url'] . $delimeter;
		$smile_pak .= $resultset[$i]['emoticon'] . $delimeter;
		$smile_pak .= $resultset[$i]['code'] . "\n";
	}
	header("Content-Type: text/x-delimtext; name=\"smiles.pak\"");
	header("Content-disposition: attachment; filename=smiles.pak");
	echo $smile_pak;
	exit;
} else if (isset($_POST['export_pack'])) {
	showheader();
	echo 'To create a smiley pack from your currently installed smileys, <a href="'.URL::admin('smilies&amp;export_pack=send').'">download</a> the smiles.pak file.<br />
Name this file appropriately making sure to keep the .pak file extension.<br />
Then create a zip file containing all of your smiley images plus this .pak configuration file';
}
else if (isset($_POST['add'])) {
	if (!Security::check_post()) { cpg_error(_SEC_ERROR); }
	// Admin has selected to add a smiley.
	$filename_list = "";
	for( $i = 0; $i < count($smiley_images); $i++ ) {
		$filename_list .= '<option value="' . $smiley_images[$i] . '">' . $smiley_images[$i] . '</option>';
	}
	$s_hidden_fields = '<input type="hidden" name="mode" value="savenew" />';
	smile_edit(array(), $s_hidden_fields, $filename_list, $smiley_images[0]);
}
else if (isset($_POST['updatesmiles'])) {
	if (Security::check_post() && intval($_POST['id'])) {
		for ($i = 0; $i < count($_POST['id']); $i++) {
			if ($_POST['pos'][$i] != $i) {
				$db->sql_update($prefix.'_bbsmilies', array('pos'=>$i), 'smilies_id='.$_POST['id'][$i]);
			}
		}
	}
	Cache::array_delete('smilies','bb');
	cpg_error('Smilies order was successfully updated', 'Smilies Position Update', URL::admin('smilies'));
}
else if ($mode != '') {
	switch( $mode ) {

		case 'delete':
			// Admin has selected to delete a smiley.
			$smiley_id = intval($_GET['id']);
			$sql = "DELETE FROM " . SMILIES_TABLE . " WHERE smilies_id = " . $smiley_id;
			$result = $db->sql_query($sql);
			if ( !$result ) {
				cpg_error('The smiley could not be deleted');
			} else {
				Cache::array_delete('smilies','bb');
				cpg_error('The smiley was successfully deleted', 'Smiles Utility', URL::admin('smilies'));
			}
			break;

		case 'edit':
			// Admin has selected to edit a smiley.
			$smiley_id = intval($_GET['id']);
			$sql = "SELECT * FROM " . SMILIES_TABLE . " WHERE smilies_id = " . $smiley_id;
			$result = $db->sql_query($sql);
			if ($result) {
				$smile_data = $db->sql_fetchrow($result);
			}
			if (!isset($smile_data)) {
				cpg_error('The information for the requested smiley could not be obtained');
			}
			$filename_list = '';
			for ( $i = 0; $i < count($smiley_images); $i++ ) {
				if ( $smiley_images[$i] == $smile_data['smile_url'] ) {
					$smiley_selected = 'selected="selected"';
					$smiley_edit_img = $smiley_images[$i];
				} else {
					$smiley_selected = '';
				}
				$filename_list .= '<option value="' . $smiley_images[$i] . '"' . $smiley_selected . '>' . $smiley_images[$i] . '</option>';
			}
			$s_hidden_fields = '<input type="hidden" name="mode" value="save" /><input type="hidden" name="smile_id" value="' . $smile_data['smilies_id'] . '" />';
			smile_edit($smile_data, $s_hidden_fields, $filename_list, $smiley_edit_img);
			break;

		case "save":
			// Admin has submitted changes while editing a smiley.

			// Get the submitted data, being careful to ensure that we only
			// accept the data we are looking for.
			$smile_code = trim($_POST['smile_code']);
			$smile_url = trim($_POST['smile_url']);
			$smile_emotion = trim($_POST['smile_emotion']);
			$smile_id = intval($_POST['smile_id']);

			// If no code was entered complain ...
			if ($smile_code == '') {
				cpg_error(sprintf(_ERROR_NOT_SET, 'Smiley code'));
			} elseif ($smile_url == '') {
				cpg_error(sprintf(_ERROR_NOT_SET, 'Smiley url'));
			}

			// Convert < and > to proper htmlentities for parsing.
			$smile_code = str_replace('<', '&lt;', $smile_code);
			$smile_code = str_replace('>', '&gt;', $smile_code);

			// Proceed with updating the smiley table.
			$sql = "UPDATE " . SMILIES_TABLE . "
					SET code = '" . Fix_Quotes($smile_code) . "', smile_url = '" . Fix_Quotes($smile_url) . "', emoticon = '" . Fix_Quotes($smile_emotion) . "'
					WHERE smilies_id = $smile_id";
			$db->sql_query($sql);
			Cache::array_delete('smilies','bb');
			cpg_error('The smiley information was successfully updated', 'Smiles Utility', URL::admin('smilies'));
			break;

		case "savenew":
			// Admin has submitted changes while adding a new smiley.

			// Get the submitted data being careful to ensure the the data
			// we recieve and process is only the data we are looking for.
			$smile_code = trim($_POST['smile_code']);
			$smile_url = trim($_POST['smile_url']);
			$smile_emotion = trim($_POST['smile_emotion']);

			// If no code was entered complain ...
			if ($smile_code == '') {
				cpg_error(sprintf(_ERROR_NOT_SET, 'Smiley code'));
			} elseif ($smile_url == '') {
				cpg_error(sprintf(_ERROR_NOT_SET, 'Smiley url'));
			}

			// Convert < and > to proper htmlentities for parsing.
			$smile_code = str_replace('<', '&lt;', $smile_code);
			$smile_code = str_replace('>', '&gt;', $smile_code);

			// Save the data to the smiley table.
			$sql = "INSERT INTO " . SMILIES_TABLE . " (code, smile_url, emoticon)
					VALUES ('" . Fix_Quotes($smile_code) . "', '" . Fix_Quotes($smile_url) . "', '" . Fix_Quotes($smile_emotion) . "')";
			$db->sql_query($sql);
			Cache::array_delete('smilies','bb');
			cpg_error('The new smiley was successfully added', 'Smiles Utility', URL::admin('smilies'));
			break;
	}
}
else {
	// This is the main display of the page before the admin has selected any options.
	showheader();
	require_once(CORE_PATH.'nbbcode.php');
	$smilies = get_smilies();
	echo 'From this page you can add, remove and edit the smilies that your users can use in various places across your site<br />
Smilies are stored in the "'.$smilies_path.'" directory<br /><br />
<form method="post" action="'.URL::admin($op).'" enctype="multipart/form-data" accept-charset="utf-8">
<table class="forumline" cellspacing="1" cellpadding="4" border="0">
	<tr>
		<th class="thCornerL">Code</th>
		<th class="thTop">Smile</th>
		<th class="thTop">Emotion</th>
		<th colspan="2" class="thCornerR">Action</th>
	</tr><tbody>
';
	// Loop throuh the rows of smilies setting block vars for the template.
	global $bgcolor1, $bgcolor3;
	for ($i = 0; $i < count($smilies); $i++) {
		// Replace htmlentites for < and > with actual character.
		$smilies[$i]['code'] = str_replace('&lt;', '<', $smilies[$i]['code']);
		$smilies[$i]['code'] = str_replace('&gt;', '>', $smilies[$i]['code']);

		$row_color = ( !($i % 2) ) ? $bgcolor1 : $bgcolor3;

		echo '	  <tr bgcolor="'.$row_color.'" class="first">
		<td onmouseover="tasktable.hover(this)">'.$smilies[$i]['code'].'
		<input type="hidden" name="id[]" value="'.$smilies[$i]['smilies_id'].'" />
		<input type="hidden" name="pos[]" value="'.$i.'" />
		</td>
		<td><img src="'.$smilies_path . $smilies[$i]['smile_url'].'" alt="'.$smilies[$i]['emoticon'].'" title="'.$smilies[$i]['emoticon'].'" /></td>
		<td>'.$smilies[$i]['emoticon'].'</td>
		<td><a href="'.URL::admin('smilies&amp;mode=edit&amp;id='.$smilies[$i]['smilies_id']).'">'._EDIT.'</a></td>
		<td><a href="'.URL::admin('smilies&amp;mode=delete&amp;id='.$smilies[$i]['smilies_id']).'">'._DELETE.'</a></td>
	</tr>';
	}
	echo '	  </tbody><tr>
		<td class="catBottom" colspan="5" align="center">
		<input type="submit" name="updatesmiles" value="Update" class="mainoption" />&nbsp;&nbsp;
		<input type="submit" name="add" value="Add new Smiley" class="mainoption" />&nbsp;&nbsp;
		<input type="submit" name="import_pack" value="Import Smiley Pack" class="liteoption" />&nbsp;&nbsp;
		<input type="submit" name="export_pack" value="Create Smiley Pack" class="liteoption" /></td>
	</tr>
</table><br />Note: Smiley packs are "phpBB Smiley Pack (.pak)" compatible</form>';
}
echo '</div>';
CloseTable();
