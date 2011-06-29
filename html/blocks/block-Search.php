<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/blocks/block-Search.php,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 00:57:01 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
********************************************************/
if (!defined('CPG_NUKE')) { exit; }

if (!is_active('Search')) {
	$content = 'ERROR';
	return trigger_error('Search module is inactive', E_USER_WARNING);
}
$content = '
<form action="'.URL::index('Search').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">
<div style="text-align:center;">
<input type="text" name="search" size="20" maxlength="255" /><br /><br /><input type="submit" value="'._SEARCH.'" />
</div></form>';
