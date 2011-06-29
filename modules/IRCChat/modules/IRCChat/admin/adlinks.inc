<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/IRCChat/modules/IRCChat/admin/adlinks.inc,v $
  $Revision: 9.2 $
  $Author: trevor $
  $Date: 2005/02/26 19:10:50 $

***********************************************************************/
if (can_admin('ircchat')) {
    $menuitems['_AMENU9']['IRC Chat']['URL'] = adminlink($module);
    $menuitems['_AMENU9']['IRC Chat']['IMG'] = 'ircchat';
    $menuitems['_AMENU9']['IRC Chat']['MOD'] = $module;
}
