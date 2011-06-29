<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/admin/modules/plugins.php,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 00:56:55 $
**********************************************/
if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin('settings')) { die('Access Denied'); }
$modheader .= '
<link rel="stylesheet" type="text/css" href="includes/css/tabs.css" />
<script type="text/javascript" src="includes/javascript/framework2.js"></script>
<script type="text/javascript" src="includes/javascript/tabs.js"></script>
<style type="text/css">
dt { display: table-cell; width: 350px; white-space: nowrap; padding: 0 3px; font-size: 14px }
dd  { line-height:18px; font-size:12px }
p.legend span { display:inline-block; width:20%; height:13px; text-align:center }
</style>
';
require('header.php');
GraphicAdmin('_AMENU1');

if (!extension_loaded('xml')) {
	cpg_error('At this stage the XML extension is required but unfortunately your PHP installation does not load the extension.<br />
							Read the <a href="http://www.php.net/manual/en/xml.installation.php">PHP Documentation</a> for more infos.');
}
echo '
<input type="button" value="Reload Package List" onClick="window.location.reload()">
';

$xmllastmod = 0;
$xml = BASEDIR.'cache/plugins_xml.php';
if (file_exists($xml)) {
	$xmllastmod = filemtime($xml);
}

$xml = get_fileinfo('http://dragonflycms.org/plugins.php', false, true, $xmllastmod);

if ($xml['modified'] === true) {
	Cache::array_save('xml', 'plugins', $xml);
} else {
	Cache::array_load('xml', 'plugins', true);
}

//$xml['data'] = decode_bb_all($xml['data'], 0 , true);
$xmlDOM = new DOMDocument();
$xmlDOM->preserveWhiteSpace = false;
$xmlDOM->loadXML($xml['data']);

$data = array();
$items = $xmlDOM->getElementsByTagname('item');
foreach($items as $item) {
	$tmp = array();
	$nodes = $item->childNodes;
	for ($n = 0; $n < $nodes->length; ++$n) {
		$tmp[$nodes->item($n)->nodeName] = $nodes->item($n)->nodeValue;
	}
	$data[$item->parentNode->nodeName][] = $tmp;
}
unset($xmlDOM, $xml, $items, $item, $nodes, $tmp);

function array_key_prefix(&$array, $prefix) {
	$ret = array();
	foreach ($array as $key => $value) {
		$ret[$prefix.$key] = $value;
		array_shift($array);
	}
	return $ret;
}

$item = $IOthemes = $IOmodules = array();

// Load active modules and relative version number
Cache::array_load('active_modules', 'active', true);

/*
Load themes
$dir=dir(BASEDIR.'themes/');
while ($file = $dir->read()) {
	if (!is_dir(BASEDIR.'themes/'.$dir->path.'/'.$file) || 0 === strpos($file, '.')) { continue; }
	$IOthemes[] = $file;
}
*/
/*
Load blocks
$dir=dir(BASEDIR.'blocks/');
while ($file = $dir->read()) {
	if (0 === strpos($file, 'block-')) {
		$IOthemes[] = substr($file, 0, 6);
	}
}
*/

// troubles with modules installed under a different name
// each item found in downloads section needs a name (moduleExample) and a title (module Example)
foreach ($data as $channel => $items) {
	$cpgtpl->assign_block_vars('channel', array('S_NAME' => $channel));
	foreach ($items as $item) {
	$item['installed_v'] = NULL;
	switch ($channel) {

	case 'core':
	if ($item['name'] === 'DragonflyCMS') {
		$item['installed_v'] = CPG_NUKE;
	} else if ($item['name'] === 'message') {
		$item['status_txt'] = 'Warning';
		$item['status_bg'] = '#FFDDDD';
	}
	break;

	case 'modules':
		if (isset($active_modules[$item['name']])) { $item['installed_v'] = $active_modules[$item['name']]; }
	break;

	case 'blocks':
		// needs version number
	break;

	case 'themes':
		// needs version number
	break;

	case 'languages':
		// needs version number
	break;

	default: cpg_error();
	break;
	} 

	if (NULL === $item['installed_v']) {
		if (!isset($item['status_txt'])) {
			$item['status_txt'] = 'Inactive or not installed';
			$item['status_bg'] = '#DDDDDD';
		}
	} else {
		switch (version_compare($item['installed_v'], $item['version'])) {
			case -1:
				$item['status_txt'] = _UPGRADE;
				$item['status_bg'] = '#FFDDDD';
			break;

			case 0:
				$item['status_txt'] = _UPTODATE;
				$item['status_bg'] = '#DDFFDD';
			break;

			case 1:
				$item['status_txt'] = 'CVS';
				$item['status_bg'] = '#DDDDFF';
			break;
		}
	}
	$item['description'] = decode_bb_all($item['description'], 0 , true);
	$item['url_short'] = shrink_url($item['url']);
	$cpgtpl->assign_block_vars('channel.item', array_change_key_case(array_key_prefix($item, 's_'), CASE_UPPER));
	} // foreach item
} // foreach channel
unset($data, $dir, $item, $IOthemes, $IOmodules);
$cpgtpl->set_handle('body', 'admin/plugins.html');
$cpgtpl->display('body');

