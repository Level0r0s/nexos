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

  $Source: /cvs/html/includes/classes/template.php,v $
  $Revision: 10.1 $
  $Author: phoenix $
  $Date: 2010/11/05 23:50:13 $
**********************************************/
/*
  Nathan Codding - Original version design and implementation
  Crimsonbane - Initial caching proposal and work
  psoTFX - Completion of file caching, decompilation routines and implementation of
  conditionals/keywords and associated changes

  The interface was inspired by PHPLib templates, and the template file (formats are
  quite similar)

  The keyword/conditional implementation is currently based on sections of code from
  the Smarty templating engine (c) 2001 ispi of Lincoln, Inc. which is released
  (on its own and in whole) under the LGPL. Section 3 of the LGPL states that any code
  derived from an LGPL application may be relicenced under the GPL, this applies
  to this source

  DEFINE directive inspired by a request by Cyberalien
*/
require_once(CORE_PATH.'classes/template_enc.php');

class cpg_template extends tpl_encode
{

	// variable that holds all the data we'll be substituting into
	// the compiled templates. Takes form:
	// --> $this->_tpldata[block.][iteration#][child.][iteration#][child2.][iteration#][variablename] == value
	// if it's a root-level variable, it'll be like this:
	// --> $this->_tpldata[.][0][varname] == value
	private $_tpldata = array();

	// Root dir and hash of filenames for each template handle.
	public $tpl = '';
	private $root = '';
	private $files = array();

	// this will hash handle names to the compiled/uncompiled code for that handle.
	private $compiled_code = array();

	function __construct()
	{
		global $MAIN_CFG, $CPG_SESS;
		if (!is_dir(BASEDIR.'themes/default/template')) { trigger_error('"default" theme does not exist', E_USER_ERROR); }
		$this->get_theme();
		$this->_tpldata['.'][0]['REQUEST_URI'] = str_replace('&', '&amp;', substr(URL::uri(),strlen($MAIN_CFG['server']['path'])));
		$this->root = 'themes/'.$this->tpl.'/template';
	}

	// Destroy template data set
	public function __destruct()
	{
		$this->_tpldata = array();
	}

	// Sets the template filenames for handles. $filename_array
	// should be a hash of handle => filename pairs.
	public function set_filenames($filename_array)
	{
		if (!is_array($filename_array)) { return false; }
		foreach ($filename_array as $handle => $filename) {
			$this->set_handle($handle, $filename);
		}
		return true;
	}

	public function set_handle($handle, $filename)
	{
		if (empty($handle)) { trigger_error('template error - No handlename specified', E_USER_ERROR); }
		if (empty($filename)) { trigger_error("template error - Empty filename specified for $handle", E_USER_ERROR); }
		$this->filename[$handle] = $filename;
		$this->files[$handle] = $this->root.'/'.$filename;
	}

	// Methods for loading and evaluating the templates
	public function display($handle, $include_once = true)
	{
		global $lang;
		if ($filename = $this->tpl_load($handle)) {
			($include_once) ? include_once($filename) : include($filename);
		} else {
			eval(' ?>'.$this->compiled_code[$handle].'<?php ');
		}
		return true;
	}

	public function to_string($handle, $include_once = true)
	{
		ob_start();
		$this->display($handle, $include_once);
		return ob_get_clean();
	}

	public function assign_var_from_handle($varname, $handle, $include_once = true)
	{
		$this->assign_var($varname, $this->to_string($handle, $include_once));
	}

	// Assign key variable pairs from an array
	public function assign_vars($vararray)
	{
		foreach ($vararray as $key => $val) {
			$this->_tpldata['.'][0][$key] = $val;
		}
		return true;
	}

	// Assign a single variable to a single key
	public function assign_var($varname, $varval)
	{
		$this->_tpldata['.'][0][$varname] = $varval;
		return true;
	}

	// Assign key variable pairs from an array to a specified block
	public function assign_block_vars($blockname, $vararray)
	{
		//$vararray = array_merge($vararray, HOOK::execute($blockname, 0, HOOK::TPL));
		if (strstr($blockname, '.')) {
			// Nested block.
			$blocks = explode('.', $blockname);
			$blockcount = count($blocks) - 1;
			$str = &$this->_tpldata;
			for ($i = 0; $i < $blockcount; $i++)  {
				$str = &$str[$blocks[$i]];
				$str = &$str[count($str) - 1];
			}
			// Now we add the block that we're actually assigning to.
			// We're adding a new iteration to this block with the given
			// variable assignments.
			$str[$blocks[$blockcount]][] = &$vararray;
		} else {
			// Top-level block.
			// Add a new iteration to this block with the variable assignments
			// we were given.
			$this->_tpldata[$blockname][] = &$vararray;
		}
		return true;
	}

	public function unset_block($blockname)
	{
		if (strstr($blockname, '.')) { trigger_error('It\'s only allowed to unset toplevel blocks', E_USER_ERROR); }
		if (isset($this->_tpldata[$blockname])) { unset($this->_tpldata[$blockname]); }
		return true;
	}

	// Include a seperate template
	public function _tpl_include($filename, $include = true)
	{
		if (strpos($filename, '{') && preg_match('#([a-zA-Z0-9\_\-\/]+)\{([a-z0-9\-_]+)\}([a-zA-Z0-9\_\-\.\/]+)#i', $filename, $tmp)) {
			if (empty($this->_tpldata['.'][0][$tmp[2]])) { return; }
			$filename = $tmp[1].$this->_tpldata['.'][0][$tmp[2]].$tmp[3];
		}
		$handle = $filename;
		$this->filename[$handle] = $filename;
		$this->files[$handle] = $this->root . '/' . $filename;
		$filename = $this->tpl_load($handle);
		if ($include) {
			if ($filename) {
				include_once($filename);
				return;
			}
			eval(' ?>' . $this->compiled_code[$handle] . '<?php ');
		}
	}

	// Load a compiled template if possible, if not, recompile it
	private function tpl_load(&$handle)
	{
		// If we don't have a file assigned to this handle, die.
		if (!isset($this->files[$handle])) {
			trigger_error("template->tpl_load(): No file specified for handle $handle", E_USER_ERROR);
		}

		if (!file_exists(BASEDIR.$this->files[$handle])) {
			trigger_error('template->tpl_load(): '.($this->files[$handle]).' doesn\'t exist', E_USER_NOTICE);
			$this->files[$handle] = 'themes/default/template/'.$this->filename[$handle];
			$this->_tpldata['.'][0]['THEME_PATH'] = 'themes/default';
			$this->cachepath = 'cache/tpl_default_';
			if (!file_exists(BASEDIR.$this->files[$handle]) && $pos = strpos($this->filename[$handle], '/') && is_dir(BASEDIR.'modules/'.substr($this->filename[$handle],0,$pos).'/template')) {
				$this->files[$handle] = 'modules/'.substr($this->filename[$handle],0,$pos).'/template/'.substr($this->filename[$handle],$pos+1);
				$this->_tpldata['.'][0]['THEME_PATH'] = 'modules/'.substr($this->filename[$handle],0,$pos);
			}
		} else {
			$this->_tpldata['.'][0]['THEME_PATH'] = 'themes/'.$this->tpl;
			$this->cachepath = 'cache/tpl_'.$this->tpl.'_';
		}

		$filename = str_replace('/', '#', $this->filename[$handle]);
		$filename = $this->cachepath.$filename.'.inc';

		// Don't recompile page if the original template is older then the compiled cache
		if (!CPG_DEBUG && file_exists($filename) && filemtime($filename) > filemtime($this->files[$handle])) {
			return $filename;
		}

		$this->tpl_load_file($handle);
		return false;
	}

	// Load template source from file
	private function tpl_load_file($handle)
	{
		// Try and open template for read
		if (!($fp = fopen(BASEDIR.$this->files[$handle], 'r'))) {
			trigger_error("template->tpl_load(): File ".$this->files[$handle]." does not exist or is empty", E_USER_ERROR);
		}
		$this->compiled_code[$handle] = tpl_encode::compile(trim(fread($fp, filesize($this->files[$handle]))));
		fclose($fp);
		// Actually compile the code now.
		tpl_encode::compile_write($handle, $this->compiled_code[$handle]);
	}

	private function get_theme()
	{
		if ( defined('ADMIN_PAGES') ) { $this->tpl = 'default'; return; }
		global $MAIN_CFG, $CPG_SESS, $userinfo;
		$this->tpl = $MAIN_CFG['global']['Default_Theme'];
		if ($MAIN_CFG['member']['allowusertheme'] || is_admin()) {
			if (isset($_GET['prevtheme'])) {
				if (!preg_match('#^([a-zA-Z0-9_\-]+)$#', $_GET['prevtheme'], $this->tpl)) {
					cpg_error(sprintf(_ERROR_BAD_CHAR, 'theme'), _SEC_ERROR);
				}
				$this->tpl = $CPG_SESS['prevtheme'] = $this->tpl[1];
			} else if (!empty($CPG_SESS['prevtheme'])) {
				$this->tpl = $CPG_SESS['prevtheme'];
			} else if (is_user() && !empty($userinfo['theme'])) {
				$this->tpl = $userinfo['theme'];
			}
		}
		$CPG_SESS['theme'] = $this->tpl = file_exists("themes/{$this->tpl}/theme.php") ? $this->tpl : 'default';
	}

}
