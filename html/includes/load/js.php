<?php
/*********************************************
  Dragonfly CMS, Copyright (c) 2004 by CPGNuke Dev Team
  http://dragonflycms.org
  Released under GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/load/js.php,v $
  $Revision: 1.1 $
  $Author: nanocaiordo $
  $Date: 2011/04/17 06:50:09 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }
require(CLASS_PATH. 'js.php');
if ( false === JS::request() ) {
	HttpHeaders::flush(404, 'File not found');
}
JS::flushToClient();
