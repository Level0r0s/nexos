<?php
/*
  $Id$ 
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 by Myndworx Asylum                          |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | block-Modules.php - NexOS Administration Backend file             |
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

if (!defined('CPG_NUKE')) { exit; }

global $prefix, $db, $MAIN_CFG, $currentlang, $mainindex;

$content = '';

// make home link show which module is there
$home_title = _HOME;
$home_title .= ' - ';
$home_title .= (defined('_'.$MAIN_CFG['debug']['main_module'].'LANG'))? (constant('_'.$MAIN_CFG['debug']['main_module'].'LANG')) : str_replace('_', ' ', $MAIN_CFG['debug']['main_module']);

/* Now we make the Modules block with the correspondent links */
//$content .= "<b>&#8226;</b>&nbsp;<a href=\"".URL::index()."\">"._HOME."</a><br />\n";
$content .= '<b>&#8226;</b>&nbsp;<a href="'.$MAIN_CFG['global']['nukeurl'].'/'.$mainindex.'">'.$home_title.'</a><br />';
$result = $db->sql_query("SELECT title, custom_title, view FROM ".$prefix."_modules 
WHERE active='1' AND inmenu='1' 
ORDER BY custom_title ASC");
while (list($m_title, $custom_title, $m_view) = $db->sql_fetchrow($result)) {
	//$m_title2 = str_replace('_', ' ', $m_title);
	if ($custom_title != '' && $custom_title != $m_title && $MAIN_CFG['global']['language'] === $currentlang){
		$m_title2 = $custom_title;
	} else { 
		if ($custom_title != '') {
			$m_title2 = (defined('_'.$m_title.'LANG'))? (constant('_'.$m_title.'LANG')) : $custom_title;
		} else {
			$m_title2 = (defined('_'.$m_title.'LANG'))? (constant('_'.$m_title.'LANG')) : ($m_title2 = str_replace('_', ' ', $m_title));
		}
	}
	if ($m_title != $MAIN_CFG['debug']['main_module']) {
		if ((is_admin() && $m_view == 2) || $m_view != 2) {
			if ($m_view == 1 && !is_user()) $content .= '<img src="images/blocks/CPG_Main_Menu/noaccess.gif" width="10" height="10" alt="" title="" />';
			else $content .= '<b>&#8226;</b>';
			$content .= '&nbsp;<a href="'.URL::index($m_title).'">'.$m_title2.'</a><br />';
		}
	}
}
$db->sql_freeresult($result);

/* If you're Admin you and only you can see Inactive modules and test it */
/* If you copied a new module is the /modules/ directory, it will be added to the database */
	
if (is_admin()) {
	$content .= '<p style="text-align:center;"><b>'._INVISIBLEMODULES.'</b></p>';
	$content .= '<div class="tiny">'._ACTIVEBUTNOTSEE.'</div>';
	$result = $db->sql_query("SELECT title, custom_title FROM ".$prefix."_modules 
	WHERE active='1' AND inmenu='0' 
	ORDER BY title ASC");
	$dummy = 1;
	while (list($mn_title, $custom_title) = $db->sql_fetchrow($result)) {
		$mn_title2 = str_replace('_', ' ', $mn_title);
		if ($custom_title != '') {
			$mn_title2 = $custom_title;
		}
		if ($mn_title2 != '') {
			$content .= '<b>&#8226;</b>&nbsp;<a href="'.URL::index($mn_title).'">'.$mn_title2.'</a><br />';
			$dummy = 0;
		}
	}
	$db->sql_freeresult($result);
	if ($dummy) {
		$content .= '<b>&#8226;</b>&nbsp;<i>'._NONE.'</i><br />';
	}
	$content .= '<p style="text-align:center;"><b>'._NOACTIVEMODULES.'</b></p>';
	$content .= '<div class="tiny">'._FORADMINTESTS.'</div>';
	$result = $db->sql_query("SELECT title, custom_title FROM ".$prefix."_modules 
	WHERE active='0' 
	ORDER BY title ASC");
	$dummy = 1;
	while (list($mn_title, $custom_title) = $db->sql_fetchrow($result)) {
		$mn_title2 = str_replace('_', ' ', $mn_title);
		if ($custom_title != '') {
			$mn_title2 = $custom_title;
		}
		if ($mn_title2 != '') {
			$content .= '<b>&#8226;</b>&nbsp;<a href="'.URL::index($mn_title).'">'.$mn_title2.'</a><br />';
			$dummy = 0;
		}
	}
	$db->sql_freeresult($result);
	if ($dummy) {
		$content .= '<b>&#8226;</b>&nbsp;<i>'._NONE.'</i><br />'."\n";
	}
}
