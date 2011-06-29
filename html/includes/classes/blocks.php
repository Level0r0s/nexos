<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/classes/blocks.php,v $
  $Revision: 10.1 $
  $Author: nanocaiordo $
  $Date: 2011/04/17 06:54:30 $
**********************************************/
class Blocks
{

	/* settings */
//	const ALL_MODULES; /* all modules otherwsie active only */
//	const ALL_BLOCKS; /* all blocks otherwise active only */
//	const PREVIEW;
//	const HIDEALL;

	public static $preview = false;
	public static $showblocks = null;
	/* end settings */

	const LEFT   = 1;
	const RIGHT  = 2;
	const CENTER = 4;
	const DOWN   = 8;

	public $list = array();

	private $data = array();
	private static $custom = array();
	private $active = false;

	public function __construct($mid=0)
	{
		if (isset($_GET['hideallblocks']) || self::$preview || self::$showblocks === 0 || $mid === 0) {
			self::$showblocks  = 0;
			return;
		}

		$mid = intval($mid);
		global $db, $prefix, $MAIN_CFG, $Module, $currentlang;
		//$db->sql_query("DELETE FROM {$prefix}_blocks_custom WHERE mid NOT IN (SELECT mid FROM {$prefix}_modules) AND mid < 0");
		$querylang = ($MAIN_CFG['global']['multilingual']) ? " AND (blanguage='$currentlang' OR blanguage='')" : '';
		$result = $db->query("SELECT b.bid, b.bkey, b.title, b.content, b.url, b.blockfile, b.view, b.refresh, b.time, bc.mid, bc.side
		FROM {$prefix}_blocks_custom as bc LEFT JOIN {$prefix}_blocks as b USING(bid) WHERE b.active=1 AND bc.mid={$mid}{$querylang}");
		while($row = $result->fetch_assoc()) {
			// temporary table data needs upgrade
			if      ($row['side'] === 'l') $row['side'] = self::LEFT;
			else if ($row['side'] === 'c') $row['side'] = self::CENTER;
			else if ($row['side'] === 'r') $row['side'] = self::RIGHT;
			else if ($row['side'] === 'd') $row['side'] = self::DOWN;
			if (self::$showblocks & $row['side'] && self::allowed($row['view'])) {
				$row['bid']     = intval($row['bid']);
				$row['time']    = intval($row['time']);
				$row['refresh'] = intval($row['refresh']);
				$this->data[$row['side']][] = $row;
			}
		}
		$db->sql_freeresult($result);
	}

	public function list_all($module=null)
	{
		global $prefix, $db, $blocks_save;
		static $blocks_save;
		if (is_array($blocks_save)) {
			if ($module && isset($blocks_save[$module])) return $blocks_save[$module];
			else return $blocks_save;
		}
		// we want to get even NULL values in case of modules with no blocks
		$blocks_list = array();
		$blocks_list['Admin']['mid'] = -1;
		$blocks_list['Admin']['title'] = _ADMINISTRATION;
		$blocks_list['Admin']['blocks'] = 15;
		$module[-1] = 'Admin';

		$result = $db->sql_uquery('SELECT mid, title, blocks FROM '.$prefix.'_modules');
		while ($row = $db->sql_fetchrow($result, SQL_ASSOC)) {
			$title = defined('_'.$row['title'].'LANG') ? '_'.$row['title'].'LANG' : (defined('_'.strtoupper($row['title'])) ? '_'.strtoupper($row['title']) : $row['title']);
			$blocks_list[$row['title']]['mid'] = (int)$row['mid'];
			$blocks_list[$row['title']]['title'] = $title;
			$blocks_list[$row['title']]['blocks'] = (int)$row['blocks'];
			$module[$row['mid']] = $row['title'];
		}
		$db->sql_freeresult($result);
		$result = $db->sql_query('SELECT bid, mid, side FROM '.$prefix.'_blocks_custom ORDER BY mid, weight');
		while ($row = $db->sql_fetchrow($result, SQL_ASSOC)) {
			if (!isset($module[$row['mid']])) {
				$db->sql_query('DELETE FROM '.$prefix."_blocks_custom WHERE bid='$row[bid]' AND mid='$row[mid]'");
				continue;
			}
			$blocks_list[$module[$row['mid']]][$row['bid']] = $row['side'];
		}
		ksort($blocks_list);
		$db->sql_freeresult($result);
		$blocks_save = $blocks_list;
		if (is_array($blocks_save)) return $blocks_save;
		return;
	}

	public static function custom(&$data)
	{
		if (is_array($data) && self::allowed($data['view'])) {
			if      ('l' === $data['side']) $data['side'] = self::LEFT;
			else if ('c' === $data['side']) $data['side'] = self::CENTER;
			else if ('r' === $data['side']) $data['side'] = self::RIGHT;
			else if ('d' === $data['side']) $data['side'] = self::DOWN;
			$data['bkey'] = 'custom';
			self::$custom[$data['side']][] = $data;
		}
		$data = null;
	}

	public function preview(&$block)
	{
		if (!self::$preview) { return trigger_error('Use "Blocks::$preview=TRUE;" before including header.php', E_USER_WARNING); }
		self::$showblocks = 0;
		$this->data = array();
		$this->data[self::CENTER][] = $block;
		$this->display(self::CENTER);
	}

	public function display($side)
	{
		if      ('l' === $side) $side = self::LEFT;
		else if ('c' === $side) $side = self::CENTER;
		else if ('r' === $side) $side = self::RIGHT;
		else if ('d' === $side) $side = self::DOWN;

		if (!empty(self::$custom[$side])) {
			if (!isset($this->data[$side])) $this->data[$side] = array();
			while ($c = array_pop(self::$custom[$side])) {
				array_unshift($this->data[$side], $c);
			}
			self::$custom[$side] = null;
		}
		if (!isset($this->data[$side])) return;

		require_once(CORE_PATH.'nbbcode.php');
		while ($block = array_shift($this->data[$side])) {
			$block['title'] = (defined($block['title']) ? constant($block['title']) : $block['title']);
			switch ($block['bkey']) {
				case 'admin':
					if (is_admin()) {
						if ($content = adminblock($block['bid'], $block['title'], $block['content'])) {
							$this->assign($side, $content);
						}
					}
					break;
				case 'userbox':
					global $userinfo;
					if (is_user() && $userinfo['ublockon']) {
						$block['title'] = _MENUFOR." $userinfo[username]";
						$block['content'] = decode_bbcode($userinfo['ublock'], 1, true);
						$this->assign($side, $block);
					}
					break;
				case 'rss':
					$this->rss($side, $block);
					break;
				case 'custom':
					$block['content'] = decode_bbcode($block['content'], 1, true);
					$this->assign($side, $block);
					break;
				case 'file':
					$this->blockfile($side, $block);
				break;
				default:
					trigger_error('Undefined bkey for '.$block['title'], E_USER_WARNING);
			}
		}
	}

	public function hideblock($id) {
		static $hiddenblocks;
		if (!isset($hiddenblocks)) {
			$hiddenblocks = array();
			if (isset($_COOKIE['hiddenblocks'])) {
				$tmphidden = explode(':', $_COOKIE['hiddenblocks']);
				for($i=0; $i<count($tmphidden); ++$i) {	$hiddenblocks[$tmphidden[$i]] = true;	}
			}
		}
		return (isset($hiddenblocks[$id]) ? true : false);
	}
	
	# __get' slows down each call made to the class, performance wide? set property as public, strict coding? likes it this way
	public function __get($p) 
	{
		switch ($p) {
			case 'data': return $this->data;
		}
	}

	private function blockfile($side, &$block)
	{
		if (is_file('blocks/'.$block['blockfile'])) {
			include('blocks/'.$block['blockfile']);
			if ($content == 'ERROR') return;
			if (!empty($content)) {
				$block['content'] =& $content;
				$this->assign($side, $block);
				return;
			}
		}
		trigger_error($block['blockfile']._BLOCKPROBLEM, E_USER_WARNING);
	}

	private function rss($side, &$block)
	{
		global $db, $prefix;
		if ($block['time'] < (time()-$block['refresh'])) {
			require_once(CORE_PATH.'classes/rss.php');
			if (!($block['content'] = CPG_RSS::format(CPG_RSS::read($block['url'])))) {
				return trigger_error(_RSSPROBLEM.' ('.$block['title'].')', E_USER_WARNING);
			}
			$db->sql_query('UPDATE '.$prefix.'_blocks SET content=\''.Fix_Quotes($block['content']).'\', time=\''.time().'\' WHERE bid=\''.$block['bid'].'\'');
		}
		$this->assign($side, $block);
	}

	private function assign($side, &$block)
	{
		global $cpgtpl, $CPG_SESS;
		if      (self::LEFT   === $side) $side = 'l';
		else if (self::CENTER === $side) $side = 'c';
		else if (self::RIGHT  === $side) $side = 'r';
		else if (self::DOWN   === $side) $side = 'd';
		if (!self::$preview) {
			$sides = array('l' => 'left', 'c' => 'center', 'r' => 'right', 'd' => 'bottom');
			$side = $sides[$side];
		} else {
			$side = '';
		}
		$cpgtpl->assign_block_vars($side.'block', array(
			'S_TITLE'   => $block['title'],
			'S_CONTENT' => $block['content'],
			'S_BID'     => $block['bid'],
			'S_VISIBLE' => $this->hideblock($block['bid']) ? 'style="display:none"' : '',
			'S_HIDDEN'  => $this->hideblock($block['bid']) ? '' : 'style="display:none"',
			'S_IMAGE'   => 'themes/'.$CPG_SESS['theme'].'/images/'.($this->hideblock($block['bid']) ? 'plus' : 'minus')
		));
		if (self::$preview) {
			$cpgtpl->set_filenames(array('block' => 'block.html'));
			$cpgtpl->display('block');
		}
	}

	private static function allowed($view)
	{
		$view = intval($view);
		if (is_admin() || ($view === 0)
			|| ($view === 1 && is_user())
			|| ($view === 3 && !is_user())
			|| ($view > 3 && in_group($view-3)))
		{
			return true;
		}
		return;
	}
}
