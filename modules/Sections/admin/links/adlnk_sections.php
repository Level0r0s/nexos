<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Sections/admin/links/adlnk_sections.php,v $
  $Revision: 9.1 $
  $Author: djmaze $
  $Date: 2005/01/13 04:02:53 $

***********************************************************************/
if (can_admin('sections')) {
    $menuitems['_AMENU5'][_SECTIONS]['URL'] = adminlink('Sections');
    $menuitems['_AMENU5'][_SECTIONS]['IMG'] = 'sections';
}