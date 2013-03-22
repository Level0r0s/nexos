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

  $Source: /cvs/html/includes/classes/cpg_debugger.php,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 01:03:15 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }
if (!defined('E_STRICT')) { define('E_STRICT', 2048); }
if (!defined('E_RECOVERABLE_ERROR')) { define('E_RECOVERABLE_ERROR', 4096); }
if (!defined('E_DEPRECATED')) { define('E_DEPRECATED', 8192); }
if (!defined('E_USER_DEPRECATED')) { define('E_USER_DEPRECATED', 16384); }

class Debug {
	// Define variables that store the old error reporting and logging states
	public $error_level;
	public $log_level;

	private $active = false;
	private $logfile;
	private $report;
	private $old_handler;
	private $old_display_level;
	private $old_error_logging;
	private $old_error_log;

	// E_ERROR, E_PARSE, E_CORE_ERROR, E_CORE_WARNING, E_COMPILE_ERROR, E_COMPILE_WARNING and some E_STRICT
	// error levels will be handled as per the error_reporting settings.
	private $errortype = array (
		//E_ERROR           => 'PHP Error',               #     1
			E_WARNING         => 'PHP Warning',             #     2
		//E_PARSE           => 'PHP Parse Error',         #     4
			E_NOTICE          => 'PHP Notice',              #     8
		//E_CORE_ERROR      => 'PHP Core Error',          #    16
		//E_CORE_WARNING    => 'PHP Core Warning',        #    32
		//E_COMPILE_ERROR   => 'PHP Compile Error',       #    64
		//E_COMPILE_WARNING => 'PHP Compile Warning',     #   128
			E_USER_ERROR      => 'CMS Error',               #   256
			E_USER_WARNING    => 'CMS Warning',             #   512
			E_USER_NOTICE     => 'CMS Notice',              #  1024
			E_STRICT          => 'PHP Strict Notice',       #  2048 PHP 5
			E_RECOVERABLE_ERROR => 'PHP Recoverable Error', #  4096 PHP 5.2
			E_DEPRECATED      => 'PHP Deprecated',          #  8192 PHP 5.3
			E_USER_DEPRECATED => 'CMS Deprecated',          # 16384 PHP 5.3
		//E_ALL             => 'PHP Error'                # 30719 PHP 5.3, 6143 PHP 5.2, 2047 previously 
		);

	function __construct($log = 'debug.log') {
		if ($this->active) return;
		$this->logfile = $log; /* $this->logfile = PHP::$error_log; */
		$this->report = false;
		$this->old_handler = set_error_handler(array(&$this, 'handler'));
		if (CAN_MOD_INI) {
			$this->old_display_level = ini_set('display_errors', 1);
			$this->old_error_logging = ini_set('log_errors', 0);
		}
		$this->error_level = E_ALL | E_STRICT;
		$this->log_level = E_ALL | E_STRICT;
		$this->active = true;
	}

	public function stop() {
		if ($this->active) {
			// restore the previous state
			if (!is_bool($this->old_handler) && $this->old_handler) set_error_handler($this->old_handler);
			if (CAN_MOD_INI) {
				ini_set('display_errors', $this->old_display_level);
				ini_set('log_errors', $this->old_error_logging);
//				ini_set('error_log', $this->old_error_log);
			}
			$this->active = false;
			return $this->report;
		}
	}

	public function handler($errno, $errmsg, $filename, $linenum, $vars='')
	{
		if (false !== strpos($errmsg, 'mysql_')) {
			global $db;
			$filename = $db->file;
			$linenum = $db->line;
		}
		$errmsg = str_replace(BASEDIR, '', str_replace('\\', '/', $errmsg));
		if ($errno === E_USER_ERROR) {
			if ('HEAD' === $_SERVER['REQUEST_METHOD']) { exit; }
			if (is_admin()) {
				cpg_error($this->errortype[$errno]." $filename line $linenum: ".$errmsg);
			} else {
				cpg_error("A error occured while processing this page.<br />Please report the following error to the owner of this website.<br /><br /><b>$errmsg</b>");
			}
		}
		// set of errors for which a trace will be saved to buffer
		if ($errno & $this->error_level) {
			$this->report[$filename][] = $this->errortype[$errno]." line $linenum: ".$errmsg;
		}

		// set of errors for which a trace will be saved to buffer
		if ($errno & $this->log_level) {
			$err = $this->errortype[$errno]." $filename line $linenum: $errmsg\n";
			error_log($err, 3, $this->logfile);
		}
	}

	public function get_report($type)
	{
		$debug = '';
		$strstart = strlen(BASEDIR);
		switch ($type) {

			case 'sql':
				global $dbal;
				if (!is_object($dbal)) { break; }
				$db_log = $dbal->getConfiguration()->getSQLLogger();
				if (!empty($db_log->query_list)) {
print_r($db_log->query_list);
					$debug .= '<span class="genmed"><strong>SQL Queries:</strong></span><br /><br />';
					foreach ($db_log->query_list as $file => $queries) {
						$debug .= '<b>'.$file.'</b><ul>';
						foreach ($queries as $q) {
							$debug .= '<li>';
							if ($q['failed']) { $debug .= '<b>FAILED</b> '; }
							$debug .= "line {$q['line']} (".round($q['time']*1000,2)." ms): {$q['query']}</li>";
						}
						$debug .= '</ul>';
					}
				}
			break;

			case 'php':
				$this->stop();
				if (!is_array($this->report)) { break; }
				foreach ($this->report as $file => $errors) {
					$debug .= '<b>'.substr($file, $strstart).'</b><ul>';
					foreach ($errors as $error) { $debug .= "<li>$error</li>"; }
					$debug .= '</ul>';
				}
			break;

			default:
				trigger_error('Function argument not valid', E_USER_WARNING);
			break;
		}
		return $debug;
	}

}

$cpgdebugger = new Debug;
