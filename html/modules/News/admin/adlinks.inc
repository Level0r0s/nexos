<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/modules/News/admin/adlinks.inc,v $
  $Revision: 9.4 $
  $Author: nanocaiordo $
  $Date: 2008/07/31 14:26:09 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }

if (can_admin('news')) {
	$menuitems['_AMENU3'][_NewsLANG]['URL'] = URL::admin('News');
	$menuitems['_AMENU3'][_NewsLANG]['IMG'] = 'stories';
	$menuitems['_AMENU3'][_NewsLANG]['MOD'] = 'News';
	$menuitems['_AMENU3'][_NewsLANG]['SUB'][_ADDSTORY] = URL::admin('News&amp;mode=add');
	$menuitems['_AMENU3'][_NewsLANG]['SUB'][_SUBMISSIONS] = URL::admin('News&amp;file=submissions');
	$menuitems['_AMENU3'][_NewsLANG]['SUB'][_TB_CONFIG] = URL::admin('News&amp;mode=cfg');
}
if (can_admin('topics')) {
	$menuitems['_AMENU3'][_TOPICS]['URL'] = URL::admin('News&amp;file=topics');
	$menuitems['_AMENU3'][_TOPICS]['IMG'] = 'topics';
}
