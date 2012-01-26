<?php
/*
  $Id$ 
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 by Myndworx Asylum                          |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | wait_banners.php - NexOS Administration Backend file              |
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

if (is_active('Our_Sponsors') && can_admin() && $MAIN_CFG['global']['banners']) {
	$num = $db->sql_count($prefix.'_banner', 'active=0');
	$content .= '<b>&#8226;</b>&nbsp;<a href="'.URL::admin('Our_Sponsors').'">'._EDITBANNER."</a>: $num<br />";
}
