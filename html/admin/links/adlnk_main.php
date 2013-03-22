<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | index.php - NexOS main entrance file                              |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      | 
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |  
  +-------------------------------------------------------------------+
  | CPG Dragonfly™ CMS                                                |
  | Copyright © 2004 - 2005 by CPG-Nuke Dev Team                      |
  | http://www.dragonflycms.com                                       |
  | Dragonfly is released under the terms and conditions of the GNU   |
  | GPL version 2 or any later version                                |  
  +-------------------------------------------------------------------+
*/
if (!defined('CPG_NUKE')) { exit; }

$menuitems['_AMENU2'][_EDITADMINS]['URL'] = URL::admin('admins');
$menuitems['_AMENU2'][_EDITADMINS]['IMG'] = 'authors';

$menuitems['_AMENU0'][_HELP]['URL'] = _HELP_LINK;
$menuitems['_AMENU0'][_HELP]['IMG'] = 'help';

	$menuitems['_AMENU0'][_REPORTABUG]['URL'] = 'http://mantis.nexoscms.gotdns.org/login_page.php';
	$menuitems['_AMENU0'][_REPORTABUG]['IMG'] = 'bug';

if (can_admin()) {
	//$menuitems['_AMENU1']['Uploads']['URL'] = URL::admin('uploads');
	//$menuitems['_AMENU1']['Uploads']['IMG'] = 'uploads';
}

if (can_admin('blocks')) {
	$menuitems['_AMENU1'][_BLOCKS]['URL'] = URL::admin('blocks');
	$menuitems['_AMENU1'][_BLOCKS]['IMG'] = 'blocks';
}
if (can_admin('cache')) {
	//if (function_exists('mmcache') || function_exists('eaccelerator')) {
		$menuitems['_AMENU0'][_CACHE]['URL'] = URL::admin('cache');
		$menuitems['_AMENU0'][_CACHE]['IMG'] = 'cache';
	//}
}
if (can_admin('cpgmm')) {
	$menuitems['_AMENU1']['CPG Main Menu']['URL'] = URL::admin('cpgmm');
	$menuitems['_AMENU1']['CPG Main Menu']['IMG'] = 'cpgmm';
}
if (can_admin('database')) {
	$menuitems['_AMENU0'][_DATABASE]['URL'] = URL::admin('database');
	$menuitems['_AMENU0'][_DATABASE]['IMG'] = 'database';
}
if (can_admin('groups')) {
	$menuitems['_AMENU2']['Groups']['URL'] = URL::admin('groups');
	$menuitems['_AMENU2']['Groups']['IMG'] = 'groups';
}
if (can_admin('headlines')) {
	$menuitems['_AMENU6']['Headlines']['URL'] = URL::admin('headlines');
	$menuitems['_AMENU6']['Headlines']['IMG'] = 'headlines';
}
if (can_admin('history')) {
	$menuitems['_AMENU5'][_EPHEMERIDS]['URL'] = URL::admin('history');
	$menuitems['_AMENU5'][_EPHEMERIDS]['IMG'] = 'history';
}
if (can_admin('info')) {
	$menuitems['_AMENU0'][_SYSINFO]['URL'] = URL::admin('info');
	$menuitems['_AMENU0'][_SYSINFO]['IMG'] = 'info';
}
if (can_admin('l10n')) {
	$menuitems['_AMENU1']['Languages']['URL'] = URL::admin('l10n');
	$menuitems['_AMENU1']['Languages']['IMG'] = 'l10n';
}

if (can_admin('members')) {
	$menuitems['_AMENU2'][_EDITUSERS]['URL'] = URL::admin('users');
	$menuitems['_AMENU2'][_EDITUSERS]['IMG'] = 'users';
	$menuitems['_AMENU2'][_EDITUSERS]['SUB'][_EDIT] = URL::admin('users&amp;mode=edit');
	$menuitems['_AMENU2'][_EDITUSERS]['SUB'][_ADD] = URL::admin('users&amp;mode=add');
	$menuitems['_AMENU2']['Ranks']['URL'] = URL::admin('ranks');
	$menuitems['_AMENU2']['Ranks']['IMG'] = 'ranks';
}
if (can_admin('messages')) {
	$menuitems['_AMENU3'][_MESSAGES]['URL'] = URL::admin('messages');
	$menuitems['_AMENU3'][_MESSAGES]['IMG'] = 'messages';
}
if (can_admin('modules')) {
	$menuitems['_AMENU1'][_MODULES]['URL'] = URL::admin('modules');
	$menuitems['_AMENU1'][_MODULES]['IMG'] = 'modules';
}
if (can_admin('newsletter')) {
	$menuitems['_AMENU5'][_NEWSLETTER]['URL'] = URL::admin('newsletter');
	$menuitems['_AMENU5'][_NEWSLETTER]['IMG'] = 'newsletter';
}
if (can_admin('security')) {
	$menuitems['_AMENU0'][_SECURITY]['URL'] = URL::admin('security');
	$menuitems['_AMENU0'][_SECURITY]['IMG'] = 'security';
	$menuitems['_AMENU0'][_SECURITY]['SUB']['Bots'] = URL::admin('security&amp;bots');
	$menuitems['_AMENU0'][_SECURITY]['SUB']['E-Mail Domains'] = URL::admin('security&amp;mails');
	$menuitems['_AMENU0'][_SECURITY]['SUB']['Flooding'] = URL::admin('security&amp;floods');
	$menuitems['_AMENU0'][_SECURITY]['SUB']['IPs'] = URL::admin('security&amp;ips');
	$menuitems['_AMENU0'][_SECURITY]['SUB']['Referers'] = URL::admin('security&amp;referers');
	$menuitems['_AMENU0'][_SECURITY]['SUB']['IP Shield'] = URL::admin('security&amp;shields');
}
if (can_admin('settings')) {
	$menuitems['_AMENU0'][_PREFERENCES]['URL'] = URL::admin('settings');
	$menuitems['_AMENU0'][_PREFERENCES]['IMG'] = 'preferences';
	$menuitems['_AMENU0'][_PREFERENCES]['SUB'][_MAINTENANCE] = URL::admin('settings&amp;s=1');
	$menuitems['_AMENU0'][_PREFERENCES]['SUB'][_BROWSER_COOKIES] = URL::admin('settings&amp;s=2');
	$menuitems['_AMENU0'][_PREFERENCES]['SUB'][_FOOTER] = URL::admin('settings&amp;s=3');
	$menuitems['_AMENU0'][_PREFERENCES]['SUB'][_BACKENDCONF] = URL::admin('settings&amp;s=4');
	$menuitems['_AMENU0'][_PREFERENCES]['SUB'][_COMMENTSOPT] = URL::admin('settings&amp;s=5');
	$menuitems['_AMENU0'][_PREFERENCES]['SUB'][_CENSOROPTIONS] = URL::admin('settings&amp;s=6');
	$menuitems['_AMENU0'][_PREFERENCES]['SUB'][_EMAILOPTIONS] = URL::admin('settings&amp;s=7');
	$menuitems['_AMENU0'][_PREFERENCES]['SUB'][_DEBUG] = URL::admin('settings&amp;s=8');
	$menuitems['_AMENU0'][_PREFERENCES]['SUB'][_MISCOPT] = URL::admin('settings&amp;s=9');
	$menuitems['_AMENU0'][_PREFERENCES]['SUB'][_SECURITYCODE] = URL::admin('settings&amp;s=10');
	if (is_writeable(CORE_PATH.'config.php')) {
		$menuitems['_AMENU0'][_PREFERENCES]['SUB']['config.php'] = URL::admin('settings&amp;s=11');
	}
	$menuitems['_AMENU0'][_PREFERENCES]['SUB']['P3P'] = URL::admin('settings&amp;s=12');

	$menuitems['_AMENU1']['Plugins']['URL'] = URL::admin('plugins');
	$menuitems['_AMENU1']['Plugins']['IMG'] = 'plugins';

	$menuitems['_AMENU2'][_USERSCONFIG]['URL'] = URL::admin('users_cfg');
	$menuitems['_AMENU2'][_USERSCONFIG]['IMG'] = 'usersconfig';
	$menuitems['_AMENU2'][_USERSCONFIG]['SUB']['Main'] = URL::admin('users_cfg');
	$menuitems['_AMENU2'][_USERSCONFIG]['SUB']['Avatars'] = URL::admin('users_cfg&amp;mode=avatar');
	$menuitems['_AMENU2'][_USERSCONFIG]['SUB']['Fields'] = URL::admin('users_cfg&amp;mode=fields');

	$menuitems['_AMENU6'][_BANNERS]['URL'] = URL::admin('Our_Sponsors');
	$menuitems['_AMENU6'][_BANNERS]['IMG'] = 'banners';
}
if (can_admin('referers')) {
	$menuitems['_AMENU6'][_HTTPREFERERS]['URL'] = URL::admin('referers');
	$menuitems['_AMENU6'][_HTTPREFERERS]['IMG'] = 'referers';
}
if (can_admin('smilies')) {
	$menuitems['_AMENU1']['Smilies']['URL'] = URL::admin('smilies');
	$menuitems['_AMENU1']['Smilies']['IMG'] = 'smilies';
}
if (can_admin('surveys')) {
	$menuitems['_AMENU3'][_ADMPOLLS]['URL'] = URL::admin('Surveys&amp;mode=add');
	$menuitems['_AMENU3'][_ADMPOLLS]['IMG'] = 'surveys';
}
