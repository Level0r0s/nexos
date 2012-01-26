<?php
/*
  $Id$ 
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 by Myndworx Asylum                          |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | cache.php - NexOS Administration Backend file                     |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org                                  |
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |
  +-------------------------------------------------------------------+
  | CPG Dragonfly™ CMS                                                |
  | Copyright © 2004 - 2005 by CPG-Nuke Dev Team                      |
  | http://www.dragonflycms.com                                       |
  | Dragonfly is released under the terms and conditions of the GNU   |
  | GPL version 2 or any later version                                |
  +-------------------------------------------------------------------+
   Last modification notes:
    $Author$
    $Date$
    $Rev$
*/
if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin('cache')) { die('Access Denied'); }
if (!defined('_BROWSE_UP')) { define('_BROWSE_UP', 'One level up'); }
if (!defined('_BROWSE')) { define('_BROWSE', 'Browse'); }

class DF_admin_cache
{

	private $installed;
	private $compiler;
	private $call;
	private $current_file;

	private $post = array();

	private $supported = array(
		'apc' => array(
			'name' => 'apc',
			'title' => 'APC',
			'desc' => 'Alternative PHP Cache',
			'probe' => 'apc_cache_info',
			'docs' => 'php.net/manual/en/book.apc.php',
			'tutorial' => 'www.vbulletin.com/forum/showthread.php?t=165367',
			'download' => '',
		),
		'bcompiler' => array(
			'name' => 'bcompiler',
			'title' => 'BCompiler',
			'desc' => 'PHP bytecode Compiler',
			'probe' => 'bcompiler_load',
			'docs' => 'php.net/bcompiler',
			'download' => 'pecl.php.net/package/bcompiler',
			'tutorial' => '',
		),
		'eaccelerator' => array(
			'name' => 'eaccelerator',
			'title' => 'eAccelerator',
			'desc' => '',
			'probe' => 'eaccelerator_load',
			'docs' => 'eaccelerator.net/wiki/TracGuide',
			'tutorial' => 'www.vbulletin.com/forum/showthread.php?t=75878',
			'download' => 'eaccelerator.net',
		),
		'mmcache' => array(
			'name' => 'mmcache',
			'title' => 'Turck MMCache',
			'desc' => '',
			'probe' => 'mmcache_load',
			'docs' => '',
			'tutorial' => '',
			'download' => '',
		),
		'tpl' => array(
			'name' => 'tpl',
			'title' => 'Dragonfly™',
			'desc' => '',
			'docs' => '',
			'tutorial' => '',
			'download' => '',
		)
	);

	public function __construct()
	{
		self::parseCompilers();
		if (Security::check_post()) {
			foreach ($_POST as $key => $val) {
				if (!preg_match('#^[a-z_/]+$#i', $key) || !preg_match('#^[a-z0-9\-_\s]+$#i', $val)) { break; }
				$this->post[] = $key;
				$this->post[] = $val;
			}
			if (!isset($this->installed[$this->post[0]])) { cpg_error('No such compiler'); }
			$this->compiler = $this->post[0];
			$this->call = strtolower($this->post[1]);
			if ($this->post[0] === 'tpl' && $this->post[1] === 'show') {
				$this->current_file = $this->post[2];
			}
		}/*else {*/
			self::index();
		/*}*/
	}

	private function parseCompilers()
	{
		foreach ($this->supported as $data) {
			if (($data['name'] === 'tpl' && is_writable(BASEDIR.'cache')) || (!empty($data['probe']) && is_callable($data['probe']))) {
				//error_get_last() array
				$this->installed[$data['name']] = $data;
				unset($this->supported[$data['name']]);
			}
		}
	}

	private function index()
	{
		$GLOBALS['cpgtpl']->set_handle('body_cache', 'admin/cache.html');
		$GLOBALS['cpgtpl']->assign_vars(array(
			'S_ACTION' =>  URL::admin('cache'),
			'S_IS_INDEX' => empty($this->compiler),
			'S_COMPILER' => $this->compiler,
			'S_CALL' => $this->call,
			'S_CURRENT_FILE' => $this->current_file
		));
		foreach ($this->installed as $data) {
			$GLOBALS['cpgtpl']->assign_block_vars('installed', array_change_key_case($data, CASE_UPPER));
			//$cpgtpl->assign_block_vars('installed', array_combine(preg_replace('#([a-z\-_]+)#ei', 'strtoupper(\'S_$1\')', array_keys($data)), $data));
		}
		foreach ($this->supported as $data) {
			$GLOBALS['cpgtpl']->assign_block_vars('supported', array_change_key_case($data, CASE_UPPER));
			//$cpgtpl->assign_block_vars('supported', array_combine(preg_replace('#([a-z\-_]+)#ei', 'strtoupper(\'S_$1\')', array_keys($data)), $data));
		}
	}

	function __get($method)
	{
		switch ($method) {
			case 'installed': return $this->installed;
			case 'compiler' : return $this->compiler;
			case 'call'     : return $this->call;
			case 'file'     : return (!empty($this->post[2]) ? preg_replace('#_(php[\d]*|inc)$#', '.$1', $this->post[2]) : '');
		}
	}
}

//$Blocks->showblocks = 0;
$pagetitle .= ' '._BC_DELIM.' Caching - ALPHA RELEASE';
require_once('header.php');
GraphicAdmin('_AMENU0');
OpenTable();
//print_r($_POST);
$AdminCache = new DF_admin_cache;

if (Security::check_post() && is_file(BASEDIR.'admin/modules/cache/'.$AdminCache->compiler.'.php')) {
	require_once(BASEDIR.'admin/modules/cache/'.$AdminCache->compiler.'.php');
	if (function_exists("df_{$AdminCache->call}_cache")) {
		$func = "df_{$AdminCache->call}_cache"; $func();
	}
}

$GLOBALS['cpgtpl']->display('body_cache');
CloseTable();
