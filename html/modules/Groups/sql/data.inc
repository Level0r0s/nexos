<?php
/*********************************************
  Dragonfly CMS, Copyright (c) 2004 by DragonflyCMS Dev. Team.
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/modules/Groups/sql/data.inc,v $
  $Revision: 1.1 $
  $Author: nanocaiordo $
  $Date: 2010/07/17 03:20:36 $
**********************************************/
if (!defined('ADMIN_MOD_INSTALL')) { exit; }

$table_ids['bbgroups'] = 'group_id';
$tables['bbgroups'] = array(
  'group_id' => array('Type' => 'SERIAL4', 'Null' => 0),
	'group_type' => array('Type' => DBFT_INT1, 'Null' => 0, 'Default' => 1),
  'group_name' => array('Type' => 'VARCHAR(40)', 'Null' => 0, 'Default' => ''),
  'group_description' => array('Type' => 'TEXT', 'Null' => 0, 'Default' => ''),
  'group_moderator' => array('Type' => DBFT_INT3, 'Null' => 0, 'Default' => 0),
  'group_single_user' => array('Type' => DBFT_BOOL, 'Null' => 0, 'Default' => 1),
);
$indexes['bbgroups'] = array(
  'PRIMARY' => array('unique' => 1, 'type' => 'BTREE',
   0 => array('name' => 'group_id', 'Sub_part' => '', 'Null' => 0)),
  'group_single_user' => array('unique' => 0, 'type' => 'BTREE',
   0 => array('name' => 'group_single_user', 'Sub_part' => '', 'Null' => 0)),
);

$tables['bbuser_group'] = array(
  'group_id' => array('Type' => DBFT_INT3, 'Null' => 0, 'Default' => 0),
  'user_id' => array('Type' => DBFT_INT3, 'Null' => 0, 'Default' => 0),
  'user_pending' => array('Type' => DBFT_BOOL, 'Null' => 1, 'Default' => 0),
);
$indexes['bbuser_group'] = array(
  'group_id' => array('unique' => 0, 'type' => 'BTREE',
   0 => array('name' => 'group_id', 'Sub_part' => '', 'Null' => 0)),
  'user_id' => array('unique' => 0, 'type' => 'BTREE',
   0 => array('name' => 'user_id', 'Sub_part' => '', 'Null' => 0)),
);