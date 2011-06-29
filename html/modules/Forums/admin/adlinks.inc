<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/modules/Forums/admin/adlinks.inc,v $
  $Revision: 1.3 $
  $Author: nanocaiordo $
  $Date: 2008/07/31 14:22:25 $
**********************************************/
if (can_admin($module)) {
	$mod_name = ($module == 'Forums') ? _BBFORUMS : str_replace('_', ' ', $module);
	$menuitems['_AMENU4'][$mod_name]['URL'] = URL::admin($module);
	$menuitems['_AMENU4'][$mod_name]['IMG'] = 'forums';
	$menuitems['_AMENU4'][$mod_name]['MOD'] = $module;
}
