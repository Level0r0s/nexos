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

  $Source: /cvs/html/includes/classes/menu.php,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 01:03:15 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }

class Menu {

	public static function mmimage($image) {
		global $CPG_SESS;
		if (isset($CPG_SESS['mmimages'][$CPG_SESS['theme']][$image])) {
			return $CPG_SESS['mmimages'][$CPG_SESS['theme']][$image];
		} else {
			if (file_exists('themes/'.$CPG_SESS['theme'].'/images/blocks/CPG_Main_Menu/'.$image)) {
				$img = 'themes/'.$CPG_SESS['theme'].'/images/blocks/CPG_Main_Menu/'.$image;
			} else {
				$img = 'images/blocks/CPG_Main_Menu/'.$image;
			}
			$CPG_SESS['mmimages'][$CPG_SESS['theme']][$image] = $img;
			return $img;
		}
	}
}
