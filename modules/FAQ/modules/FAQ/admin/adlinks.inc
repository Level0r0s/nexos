<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/FAQ/modules/FAQ/admin/adlinks.inc,v $
  $Revision: 9.2 $
  $Author: phoenix $
  $Date: 2010/11/08 22:50:16 $

***********************************************************************/
if (can_admin('faq')) {
    $menuitems['_AMENU5'][_FAQ]['URL'] = URL::admin('FAQ');
    $menuitems['_AMENU5'][_FAQ]['IMG'] = 'faq';
    $menuitems['_AMENU5'][_FAQ]['MOD'] = 'FAQ';
}
