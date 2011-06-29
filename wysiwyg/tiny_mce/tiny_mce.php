<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/wysiwyg/tiny_mce/tiny_mce.php,v $
  $Revision: 1.2 $
  $Author: djmaze $
  $Date: 2006/01/09 01:55:08 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

function Tiny_MCE_getInstance($field='richeditor', $width='100%', $height='300px', $value='') {
	return TinyMCE::getInstance($field, $width, $height, $value);
}

class TinyMCE
{
	var $header;
	var $fields = array();

	function TinyMCE()
	{
		$this->header = array();
	}

	function getHTML($field)
	{
		return '<textarea id="'.$field.'" name="'.$field.'" style="width: '.$this->fields[$field]['width'].'; height: '.$this->fields[$field]['height'].'">'
			.htmlspecialchars($this->fields[$field]['value'])."</textarea>\n";
	}

	function setHeader()
	{
		global $modheader;
		$modheader .= '
<script language="javascript" type="text/javascript" src="includes/wysiwyg/tiny_mce/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		elements : "'.implode(',',$this->header).'",
		plugins : "table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,zoom,flash,searchreplace,print",
		theme_advanced_buttons1_add_before : "save,separator",
		theme_advanced_buttons1_add : "fontselect,fontsizeselect",
		theme_advanced_buttons2_add : "separator,insertdate,inserttime,preview,zoom,separator,forecolor,backcolor",
		theme_advanced_buttons2_add_before: "cut,copy,paste,separator,search,replace,separator",
		theme_advanced_buttons3_add_before : "tablecontrols,separator",
		theme_advanced_buttons3_add : "emotions,iespell,flash,advhr,separator,print",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_path_location : "bottom",
		content_css : "example_full.css",
		plugin_insertdate_dateFormat : "%Y-%m-%d",
		plugin_insertdate_timeFormat : "%H:%M:%S",
		extended_valid_elements : "a[name|href|target|title|onclick],img[class|src|border=0|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name],hr[class|width|size|noshade],font[face|size|color|style],span[class|align|style]",
		external_link_list_url : "example_link_list.js",
		external_image_list_url : "example_image_list.js",
		flash_external_list_url : "example_flash_list.js",
	});
</script>';
		$this->header = array();
	}

	function getInstance($field='richeditor', $width='100%', $height='300px', $value='') {
		static $instance;
		if (!isset($instance)) {
			$instance = new TinyMCE;
		}
		$instance->fields[$field] = array('width' => $width, 'height' => $height, 'value' => $value);
		$no = count($instance->fields);
		$instance->header[] = $field;
		return $instance;
	}
}
