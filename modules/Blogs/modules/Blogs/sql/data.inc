<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Blogs/modules/Blogs/sql/data.inc,v $
  $Revision: 1.1 $
  $Author: nanocaiordo $
  $Date: 2007/12/18 10:55:01 $
**********************************************/
if (!defined('ADMIN_MOD_INSTALL')) { exit; }
$table_ids = $tables = $indexes = $records = array();

#
# table structure
#
$table_ids['blogs'] = 'id';
$tables['blogs'] = array(
	'id' => array('Type' => 'SERIAL4', 'Null' => 0),
	'aid' => array('Type' => 'VARCHAR(30)', 'Null' => 0, 'Default' => ''),
	'title' => array('Type' => 'VARCHAR(80)', 'Null' => 0, 'Default' => ''),
	'text' => array('Type' => 'TEXT', 'Null' => 0, 'Default' => ''),
	'private' => array('Type' => DBFT_BOOL, 'Null' => 0, 'Default' => 0),
	'timestamp' => array('Type' => DBFT_INT4.'(10)', 'Null' => 0, 'Default' => gmtime()),
);
$indexes['blogs'] = array(
	'PRIMARY' => array('unique' => 1, 'type' => 'BTREE',
		0 => array('name' => 'id', 'Sub_part' => '', 'Null' => 0)),
	'aid' => array('unique' => 0, 'type' => 'BTREE',
		0 => array('name' => 'aid', 'Sub_part' => '', 'Null' => 0))
);

$table_ids['blogs_comments'] = 'cid';
$tables['blogs_comments'] = array(
	'cid' => array('Type' => 'SERIAL4', 'Null' => 0),
	'bid' => array('Type' => DBFT_INT4, 'Null' => 0, 'Default' => 0),
	'aid' => array('Type' => 'VARCHAR(30)', 'Null' => 0, 'Default' => ''),
	'email' => array('Type' => 'VARCHAR(255)', 'Null' => 0, 'Default' => ''),
	'ip' => array('Type' => DBFT_VARBINARY.'(17)', 'Null' => 1),
	'text' => array('Type' => 'TEXT', 'Null' => 0, 'Default' => ''),
	'timestamp' => array('Type' => DBFT_INT4.'(10)', 'Null' => 0, 'Default' => gmtime()),
);
$indexes['blogs_comments'] = array(
	'PRIMARY' => array('unique' => 1, 'type' => 'BTREE',
		0 => array('name' => 'cid', 'Sub_part' => '', 'Null' => 0)),
	'bid' => array('unique' => 0, 'type' => 'BTREE',
		0 => array('name' => 'bid', 'Sub_part' => '', 'Null' => 0)),
	'aid' => array('unique' => 0, 'type' => 'BTREE',
		0 => array('name' => 'aid', 'Sub_part' => '', 'Null' => 0))
);

#
# table data
#
$records['blogs']['compare'] = DF_DATA_CHECK_ONLY;
$records['blogs']['content'] = array(
	array('DragonflyCMS', 'Install Test', 'Just testing installer', 0, gmtime()),
);
