<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Content/modules/Content/admin/adlinks.inc,v $
  $Revision: 9.1 $
  $Author: djmaze $
  $Date: 2005/01/13 04:02:51 $

***********************************************************************/
if (can_admin('content')) {
    $menuitems['_AMENU5'][_CONTENT]['URL'] = adminlink('Content');
    $menuitems['_AMENU5'][_CONTENT]['IMG'] = 'content';
    $menuitems['_AMENU5'][_CONTENT]['MOD'] = 'Content';
}
