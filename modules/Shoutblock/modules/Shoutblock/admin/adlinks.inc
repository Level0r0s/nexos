<?php
/*********************************************
  CPG-Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2008 by CPG Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Shoutblock/modules/Shoutblock/admin/adlinks.inc,v $
  $Revision: 9.3 $
  $Author: nanocaiordo $
  $Date: 2007/12/17 13:41:33 $
**********************************************/
if (can_admin(strtolower($module))) {
    $menuitems['_AMENU5']['Shoutblock']['URL'] = adminlink($module);
    $menuitems['_AMENU5']['Shoutblock']['IMG'] = 'qshout';
    $menuitems['_AMENU5']['Shoutblock']['MOD'] = $module;
}
