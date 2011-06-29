<?php
/*********************************************
  CPG-Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2006 by CPG Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Web_Links/modules/Web_Links/admin/adlinks.inc,v $
  $Revision: 9.3 $
  $Author: phoenix $
  $Date: 2010/11/04 01:19:25 $
**********************************************/
if (can_admin(strtolower($module))) {
    $menuitems['_AMENU6'][_WEBLINKS]['URL'] = URL::admin($module);
    $menuitems['_AMENU6'][_WEBLINKS]['IMG'] = 'weblinks';
    $menuitems['_AMENU6'][_WEBLINKS]['MOD'] = $module;
}
