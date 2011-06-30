<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/classes/session.php,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 01:03:16 $
**********************************************/

class cpg_session {

	public $sess_id;
	public $dbupdate;

	private $sess_name;
	private $sess_time;
	private $start;
	private $started;
	private $old_handler;

	//
	// Constructor
	//
	function __construct($name='CMSSESSID', $time=180) {
		global $CPG_SESS, $MAIN_CFG;
		$this->sess_name = $name;
		$this->sess_time = $time;
		$this->start = time();
		$expired = (time()-($time*60));
		$new_session = true;

		if (ini_get('session.auto_start')) {
			session_destroy();
			session_write_close();
		}
		session_name($name);
		// http://www.php.net/session_set_cookie_params
		session_set_cookie_params(0, $MAIN_CFG['cookie']['path'], $MAIN_CFG['cookie']['domain']); // [, bool secure]
/*
			session_cache_limiter('private_no_expire');
			// Setting new_cache_expire is of value only,
			// if session.cache_limiter is set to a value different from nocache
			session_cache_expire($time);
*/
		if (CAN_MOD_INI) {
			$this->old_handler = ini_set('session.save_handler', 'files');
//				ini_set('session.gc_maxlifetime', $expired); # bug not deleting ?
			ini_set('session.use_trans_sid', 0);
			ini_set('session.use_only_cookies', '1');
			ini_set('url_rewriter.tags', 'nourlrewrite');
		}
		$this->started = session_start();
		if (empty($_SESSION['CPG_SESS']) && isset($_COOKIE[$name]) && $_COOKIE[$name] == session_id()) {
			$sid = $_COOKIE[$name];
			$this->destroy();
			$this->started = session_start();
			if ($sid == session_id()) {
				$this->destroy();
				cpg_error('Your cookie has expired, the page will be refreshed to set a new cookie.', 'Cookie expired', URL::uri());
			}
		}
		$this->sess_id = session_id();
		$CPG_SESS = (empty($_SESSION['CPG_SESS']) ? array() : $_SESSION['CPG_SESS']);
		$this->new = empty($_SESSION);
		return $this->sess_id;
	}

	public function destroy() {
		global $CPG_SESS, $MAIN_CFG;
		$_SESSION = $CPG_SESS = array();
		if (isset($_COOKIE[session_name()])) {
			setcookie(session_name(), '', -1, $MAIN_CFG['cookie']['path'], $MAIN_CFG['cookie']['domain']);
			unset($_COOKIE[$this->sess_name]);
		}
		$this->started = false;
		return session_destroy();
	}

	public function write_close() {
		if (!$this->started) return;
		global $CPG_SESS, $module_name;
		$_SESSION['SECURITY']['page'] = $module_name;
		$CPG_SESS['admin']['page'] = (isset($_GET['op']) ? $_GET['op'] : (isset($_POST['op']) ? $_POST['op'] : ''));
		$CPG_SESS['user']['page'] = $module_name;
		$CPG_SESS['user']['file'] = (isset($_GET['file']) ? $_GET['file'] : (isset($_POST['file']) ? $_POST['file'] : ''));
		$CPG_SESS['user']['uri'] = URL::uri();
		if (isset($CPG_SESS['user']['redirect']) && $CPG_SESS['user']['redirect'] != $CPG_SESS['user']['uri'] && $module_name != 'Your_Account') {
			unset($CPG_SESS['user']['redirect']);
		}
		$_SESSION['CPG_SESS'] = $CPG_SESS;
		session_write_close();
		if (CAN_MOD_INI) ini_set('session.save_handler', $this->old_handler);
		$this->started = false;
	}

	public function init_info() {
		global $CPG_SESS, $db, $user_prefix, $userinfo;
/*
		Only this file:
		- session_start stores when member started to view website
		- user_session_time store current visit
		BB :
		- user_lastvisit stores previous session end
		  recieved from $userinfo['user_session_time']
		$CPG_SESS =  $_SESSION['CPG_SESS']
		$userinfo =& $_SESSION['CPG_USER']
		  was $userinfo =& $CLASS['member']->members[$CLASS['member']->user_id];
		$this->members[$this->user_id] =& $_SESSION['CPG_USER'];
		  was $this->members[$this->user_id] = $member;
*/
//		if (!isset($CPG_SESS['session_start']) || $CPG_SESS['session_start'] < (time() - ($this->sess_time*60))) {
		if (!isset($CPG_SESS['session_start'])) {
			if ($userinfo['user_id'] > 1) {
				$userinfo['user_lastvisit'] = ($userinfo['user_session_time'] > 0) ? $userinfo['user_session_time'] : time();
				$db->sql_query('UPDATE '.$user_prefix.'_users SET user_session_time='.time().', user_lastvisit='.$userinfo['user_lastvisit']
					.' WHERE user_id=' . $userinfo['user_id']);
			}
			$CPG_SESS['session_start'] = $CPG_SESS['session_time'] = time();
			$this->update_db();
		} else if ((time()-$CPG_SESS['session_time']) > 30) {
			$CPG_SESS['session_time'] = time();
			if ($userinfo['user_id'] > 1) {
				list($user_level, $new, $unread) = $db->sql_fetchrow($db->sql_uquery('SELECT user_level, user_new_privmsg, user_unread_privmsg FROM '.$user_prefix.'_users WHERE user_id='.$userinfo['user_id']));
				if ($user_level < 1) {
					session_destroy();
					URL::redirect();
				}
				$userinfo['user_new_privmsg'] = intval($new);
				$userinfo['user_unread_privmsg'] = intval($unread);
				$db->sql_query('UPDATE '.$user_prefix.'_users SET user_session_time='.time().' WHERE user_id=' . $userinfo['user_id']);
			}
			$this->update_db();
		}
	}

	public function update_db() {
		$expired = (time()-($this->sess_time*60));
		global $db, $prefix;
		if (defined('CPG_SHOP')) {
			// get all expired records from db
			$result = $db->sql_query('SELECT content FROM '.$prefix.'_sessions WHERE session_time<='.$expired);
			if ($db->sql_numrows($result) > 0) {
				// loop through all expired sessions
				while ($row = $db->sql_fetchrow($result)) {
					// restock inventory
					$content = unserialize($row['content']);
					// loop through items in the order stored in the _shop_sessions table and restock!!
					foreach($cart AS $item) {
//					$result = $db->sql_query('UPDATE '.$prefix.'_shop_products SET num_in_stock=num_in_stock+'.intval($item['qty']).' WHERE item_id = '.intval($item['record_number']));
					}
				}
			}
			$db->sql_freeresult($result);
		}
		// finally update by clearing old records
		$db->sql_query('DELETE FROM '.$prefix.'_session WHERE time<'.(time()-300));
		$this->dbupdate = true;
	}

}
