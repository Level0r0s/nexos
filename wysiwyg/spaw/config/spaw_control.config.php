<?php 
// ================================================
// SPAW PHP WYSIWYG editor control
// ================================================
// Configuration file
// ================================================
// Developed: Alan Mendelevich, alan@solmetra.lt
// Copyright: Solmetra (c)2003 All rights reserved.
// ------------------------------------------------
//                                www.solmetra.com
// ================================================
// v.1.0, 2003-03-27
// ================================================

if (!defined('BASEDIR')) {
	$root_path = dirname(dirname(dirname(dirname(dirname(__FILE__)))));
	if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN') {
		$root_path = str_replace('\\', '/', $root_path);
	}
    define('BASEDIR', "$root_path/");
}

global $BASEHREF, $spaw_root, $spaw_dir, $spaw_base_url,
 $spaw_default_toolbars, $spaw_default_theme, $spaw_default_lang, $spaw_default_css_stylesheet,
 $spaw_inline_js, $spaw_active_toolbar, $spaw_dropdown_data,
 $spaw_valid_imgs, $spaw_upload_allowed, $spaw_img_delete_allowed, $spaw_imglibs,
 $spaw_a_targets, $spaw_img_popup_url, $spaw_internal_link_script, $spaw_disable_style_controls;

$spaw_root = BASEDIR.'includes/wysiwyg/spaw/';
$spaw_dir = 'includes/wysiwyg/spaw/'; // directory where spaw files are located
$spaw_base_url = $BASEHREF.$spaw_dir; // base url for images

$spaw_default_toolbars = 'default';
$spaw_default_theme = 'default';
$spaw_default_lang = 'en';
$spaw_default_css_stylesheet = $spaw_dir.'wysiwyg.css';

// add javascript inline or via separate file
$spaw_inline_js = false;

// use active toolbar (reflecting current style) or static
$spaw_active_toolbar = true;

// default dropdown content
$spaw_dropdown_data['style']['default'] = 'Normal';

$spaw_dropdown_data['table_style']['default'] = 'Normal';

$spaw_dropdown_data['td_style']['default'] = 'Normal';

$spaw_dropdown_data['font']['Arial'] = 'Arial';
$spaw_dropdown_data['font']['Courier'] = 'Courier';
$spaw_dropdown_data['font']['Tahoma'] = 'Tahoma';
$spaw_dropdown_data['font']['Times New Roman'] = 'Times';
$spaw_dropdown_data['font']['Verdana'] = 'Verdana';

$spaw_dropdown_data['fontsize']['1'] = '1';
$spaw_dropdown_data['fontsize']['2'] = '2';
$spaw_dropdown_data['fontsize']['3'] = '3';
$spaw_dropdown_data['fontsize']['4'] = '4';
$spaw_dropdown_data['fontsize']['5'] = '5';
$spaw_dropdown_data['fontsize']['6'] = '6';

// in mozilla it works only with this settings, if you don't care
// about mozilla you can change <H1> to Heading 1 etc.
// this way it will be reflected in active toolbar
$spaw_dropdown_data['paragraph']['Normal'] = 'Normal';
$spaw_dropdown_data['paragraph']['<H1>'] = 'Heading 1';
$spaw_dropdown_data['paragraph']['<H2>'] = 'Heading 2';
$spaw_dropdown_data['paragraph']['<H3>'] = 'Heading 3';
$spaw_dropdown_data['paragraph']['<H4>'] = 'Heading 4';
$spaw_dropdown_data['paragraph']['<H5>'] = 'Heading 5';
$spaw_dropdown_data['paragraph']['<H6>'] = 'Heading 6';

// image library related config

// allowed extentions for uploaded image files
$spaw_valid_imgs = array('gif', 'jpg', 'jpeg', 'png');

// allow upload in image library
$spaw_upload_allowed = true;

// allow delete in image library
$spaw_img_delete_allowed = true;

// image libraries
$spaw_imglibs = array(
  array(
    'value'   => 'you/need/to/change/this/',
    'text'    => 'Not configured',
  ),
  array(
    'value'   => 'you/need/to/change/this/too/',
    'text'    => 'Not configured',
  ),
);
// file to include in img_library.php (useful for setting $spaw_imglibs dynamically
// $spaw_imglib_include = '';

// allowed hyperlink targets
$spaw_a_targets['_self'] = 'Self';
$spaw_a_targets['_blank'] = 'Blank';
$spaw_a_targets['_top'] = 'Top';
$spaw_a_targets['_parent'] = 'Parent';

// image popup script url
$spaw_img_popup_url = $spaw_dir.'img_popup.php';

// internal link script url
$spaw_internal_link_script = 'url to your internal link selection script';

// disables style related controls in dialogs when css class is selected
$spaw_disable_style_controls = true;
