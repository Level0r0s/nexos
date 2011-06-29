<?php
/*********************************************
	CPG Dragonfly™ CMS
	********************************************
	Copyright © 2004 - 2008 by CPG-Nuke Dev Team
	http://dragonflycms.org

	Dragonfly is released under the terms and conditions
	of the GNU GPL version 2 or any later version

	$Source: /cvs/html/admin/modules/cache/bcompiler.php,v $
	$Revision: 10.0 $
	$Author: djmaze $
	$Date: 2010/11/05 00:56:56 $
**********************************************/
if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin('cache')) { die('Access Denied'); }

/*
file.php.bcompiled is the original file, NOT compiled. Here as backup/reference
path.bcompiled/ is the original directory, does NOT include any compiled file. Here for backup/reference
*/

function df_browse_cache() {
	global $AdminCache, $cpgtpl;

	$pattern = array('#\\\#', '#^(\.|.*CVS/|.*classes/)$#');
	$replace = array('/', '');
	$request = $AdminCache->file;
	$content = preg_replace($pattern, $replace, str_replace(BASEDIR, '', glob(BASEDIR. $request. '*', GLOB_MARK)));
	$compiled = preg_replace($pattern, $replace, str_replace(BASEDIR. 'bcompiler_backup/', '', glob(BASEDIR. 'bcompiler_backup/' .$request. '*', GLOB_MARK)));
	$request = explode('/', $request);
	if (2 < count($request)) {
		array_pop($request);
		$request = implode('/', $request).'/';
	} else {
		$request = '';
	}
	$cpgtpl->assign_var('S_PARENT', substr($request, 0, 1 + strrpos($request, '/', -2) - strlen($request)));

	if (FALSE !== ($key = array_search('bcompiler_backup/', $content))) {
		unset($content[$key]);
	}
	foreach ($content as $val) {
		if (empty($val)) { continue; }
		if (preg_match('#/$#', $val)) {
//	if ('/' === $val[strlen($val)-1]) {
			$cpgtpl->assign_block_vars('dir', array(
				'S_NAME' => $val,
				'S_COMPILED' => in_array($val, $compiled) ? ' (already compiled)' : ''
			));
		}
		elseif (preg_match('#\.(php[\d]?|inc)$#', $val)) {
			$cpgtpl->assign_block_vars('file', array(
				'S_NAME' => $val,
				'S_COMPILED' => in_array($val, $compiled) ? ' (already compiled)' : ''
			));
		}
	}
}

function df_compile_cache() {
	global $AdminCache;
	$source = $AdminCache->file;
	# path level too high eg "/"
	if (empty($source) || preg_match('#(classes)/$#', $source)) { return; }
	# will backup any file before compile them
	if (!backup_create($source, 'bcompiler_backup/'.$source) && !defined('DF_BACKUP_SKIP_ERRORS')) { cpg_error('File backup could not be completed, see footer warning for more infos'); }
	//elseif (preg_match('#languages/$#', $source)) { bcompile_constant($source); }
	else if (preg_match('#/$#', $source)) { df_bcompile_dir(BASEDIR.$source, BASEDIR.'bcompiler_backup/'.$source); }
	else if (preg_match('#\.(php[\d]?|inc)$#', $source)) { df_bcompile_file(BASEDIR.$source, BASEDIR.'bcompiler_backup/'.$source); }
}

// static array()  BACKUP::exclude('coppermine/albums/;uploads/;stream/sql;stream/img;stream/archive')
// BACKUP::dir, BACKUP::file, BACKUP::sql

# $src may be a directory or a file
# $types() reserved, backup specified file extensions
function backup_create($src, $dst, $types=array()) {
	# get the relative path to create a backup with same structure
	$src_path = $src;
	$dst_path = $dst;
	if (preg_match('#[a-z]{3,4}[\d]{0,1}$#', $src) && preg_match('#[a-z]{3,4}[\d]{0,1}$#', $dst)) {
		// both are a file
		$dst_path = explode('/', $dst); array_pop($dst_path); $dst_path = implode('/', $dst_path);
	} else if (!preg_match('#/$#', $src) && !preg_match('#/$#', $dst)) {
		return;
	}
	if (!CPG_File::analyze_path($dst_path)) { return; }

	if (is_dir($src) && $list = scandir($src)) {
		$i=0; $content = array();
		while ($file = array_shift($list)) {
			$content[$i]['source'] = $src_path. $file;
			$content[$i]['destination'] = $dst_path. $file;
			++$i;
		}
	} else {
		$content = array(0 =>
			array('source' => $src,
			'destination' => $dst
		));
	}

	foreach ($content as $file) {
// selective and no recursive backups for the moment
		if (is_dir($file['source']) || !preg_match('#\.(php[\d]?|inc)$#', $file['source']) || file_exists($file['destination'])) { continue; }
		else if (copy($file['source'], $file['destination'])) { continue; }
		else if (CPG_File::copy_special($file['source'], $file['destination'])) { continue; } // runs analyze_path again
		trigger_error('Couldn\'t copy or write the destination file', E_USER_WARNING);
		return;
	}
	return true;
}

function df_bcompile_file($file) {
// 0 compile not finished
// 1 compile done safe to remove original file
// 2 compile done, original file missing?, compiled file present
		$compiled = 0;
		$skip = preg_grep('#^(([a-z\s]+)?class[\s]|[\s]*echo <<<)#', file($file));
		if (!empty($skip)) { return $compiled; }

		$bcmp = $file. '.bcmp.php';
		if ($fh = fopen($bcmp, 'w')) {
			# there is a limitation here since bcompiler_write_file($fh, $file) will "include($file)"
			# so there are no way to compile already included or required files files eg: cmsinit.inc
			# however include(ed)_once or require(ed)_once files should be fine .. needs testing
			if (bcompiler_write_header($fh) && bcompiler_write_file($fh, $file) && bcompiler_write_footer($fh)) {
				$compiled = 1;
			}
			fclose($fh);
		} else {
			trigger_error('Couldn\'t open file for writing', E_USER_WARNING);
		}
		if ($compiled && (!(unlink($file) && rename($bcmp, $file)))) { $compiled = 2; }
		return $compiled;
}

function df_bcompile_dir($source, $backup_dir='') {
// if (!$source) ...
// incremental failure value, stop at 3 total errors
	$i=0;
	$files = scandir($source);
	while ($i<3 && $file = array_shift($files)) {
		if (is_dir($source.$file) || !preg_match('#\.(php[\d]?|inc)$#', $file)) { continue; }
		$file = $source.$file;
		if (1 !== ($type = df_bcompile_file($file))) {
			++$i;
			if (0 === $type && file_exists($file. '.bcmp.php')) { unlink($file. '.bcmp.php'); }
			//elseif (2 === $type && !file_exists($file)) {
			if (strlen($backup_dir) && backup_create($backup_dir, $source)) {
				// backup restored
			} else {
				// backup not restored
			}
		}
	}
}

function bcompile_constant($file) {}
