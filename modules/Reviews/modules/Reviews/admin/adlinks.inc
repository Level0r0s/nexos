<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Reviews/modules/Reviews/admin/adlinks.inc,v $
  $Revision: 9.3 $
  $Author: phoenix $
  $Date: 2010/11/04 01:10:52 $

***********************************************************************/
if (can_admin(strtolower($module))) {
    $menuitems['_AMENU5'][_REVIEWS]['URL'] = URL::admin($module);
    $menuitems['_AMENU5'][_REVIEWS]['IMG'] = 'reviews';
    $menuitems['_AMENU5'][_REVIEWS]['MOD'] = $module;
}
