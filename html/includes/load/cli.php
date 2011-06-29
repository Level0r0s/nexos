<?php
/*********************************************
  Dragonfly CMS, Copyright (c) 2004 by CPGNuke Dev Team
  http://dragonflycms.org
  Released under GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/load/cli.php,v $
  $Revision: 1.1 $
  $Author: nanocaiordo $
  $Date: 2011/04/17 06:50:09 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }

$_get = array();

$argv = array(
	0 => 'index.php',
	1 => 'file',
	2 => 'param',
	2 => 'key',
	3 => 'val'
);

array_shift($array);

$dir = new DirectoryIterator(CORE_PATH. 'load/cli');
while ( $dir->valid() ) {
	if ( !$dir->isDot() && $file = $dir->current() && $array[1] === $file->getFilename() ) {
		$file = CORE_PATH. 'load/cli/'. $array[1];
		exec(`php -a `);
		$array = array_chunk($array, 2);
	}
	$dir->next();
}
