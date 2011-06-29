<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/install/sql/upgrade.php,v $
  $Revision: 10.2 $
  $Author: djmaze $
  $Date: 2010/11/11 17:31:45 $
**********************************************/
if (!defined('INSTALL')) { exit; }

$upgrade_failed = "<br /><br />Please contact the CPG-Nuke Dev Team about the error<br />You cannot continue with the installation";

if (version_compare($version, '9.2.1', '<')) {
	exit('Upgrade needs atleast v9.2.1');
}
/*
DROP INDEX config_custom.unique_cfg
DROP INDEX counter.agent
*/
