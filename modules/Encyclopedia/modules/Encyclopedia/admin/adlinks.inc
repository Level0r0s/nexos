<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Encyclopedia/modules/Encyclopedia/admin/adlinks.inc,v $
  $Revision: 9.3 $
  $Author: djmaze $
  $Date: 2005/01/31 10:58:42 $

***********************************************************************/
if (can_admin(strtolower($module))) {
    $menuitems['_AMENU5'][_ENCYCLOPEDIA]['URL'] = adminlink($module);
    $menuitems['_AMENU5'][_ENCYCLOPEDIA]['IMG'] = 'encyclopedia';
    $menuitems['_AMENU5'][_ENCYCLOPEDIA]['MOD'] = $module;
}
