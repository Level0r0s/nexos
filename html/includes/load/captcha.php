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
  */
/*********************************************
  Dragonfly CMS, Copyright (c) 2004 by CPGNuke Dev Team
  http://dragonflycms.org
  Released under GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/load/captcha.php,v $
  $Revision: 1.2 $
  $Author: nanocaiordo $
  $Date: 2011/04/18 05:25:37 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }
define('SKIP_GZIP', true);
define('SKIP_BUFFERING', true);
define('STOP_AT', 1);

require_once(CORE_PATH. 'cmsinit.inc');
header('Last-Modified: '.date('D, d M Y H:i:s', time()).' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');
header('Connection: Close');

if     ( isset($_GET['id'] ) ) { include(CORE_PATH. 'gfxchk.php'); }
elseif ( isset($_GET['wav']) ) { include(CORE_PATH. 'gfxwav.php'); }
elseif ( isset($_GET['mp3']) ) { include(CORE_PATH. 'gfxmp3.php'); }
