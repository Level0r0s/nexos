<?php
/*********************************************
  CPG-Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Wiki/modules/Wiki/admin/adlinks.inc,v $
  $Revision: 1.2 $
  $Author: phoenix $
  $Date: 2010/11/04 01:24:06 $
***********************************************************************/
if (can_admin($module)) {
    $menuitems['_AMENU5'][$module]['URL'] = URL::admin($module);
    $menuitems['_AMENU5'][$module]['IMG'] = 'wiki';
    $menuitems['_AMENU5'][$module]['MOD'] = $module;
}

