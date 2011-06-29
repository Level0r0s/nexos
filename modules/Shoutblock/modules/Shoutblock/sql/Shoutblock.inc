<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2008 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Shoutblock/modules/Shoutblock/sql/Shoutblock.inc,v $
  $Revision: 1.4 $
  $Author: nanocaiordo $
  $Date: 2007/12/17 13:42:48 $
**********************************************/
if (!defined('ADMIN_MOD_INSTALL')) { exit; }
$table_ids = $tables = $indexes = $records = array();

#
# table structure
#
$table_ids['shoutblock'] = 'id';
$tables['shoutblock'] = array(
	'id' => array('Type' => 'SERIAL4', 'Null' => 0),
	'name' => array('Type' => 'VARCHAR(20)', 'Null' => 0, 'Default' => ''),
	'comment' => array('Type' => 'TEXT', 'Null' => 0, 'Default' => ''),
	'time' => array('Type' => DBFT_INT4.'(10)', 'Null' => 0, 'Default' => gmtime())
);
$indexes['shoutblock'] = array(
	'PRIMARY' => array('unique' => 1, 'type' => 'BTREE',
		0 => array('name' => 'id', 'Sub_part' => '', 'Null' => 0))
);

$table_ids['shoutblock_ipblock'] = 'cid';
$tables['shoutblock_ipblock'] = array(
	'id' => array('Type' => 'SERIAL4', 'Null' => 0),
	'name' => array('Type' => DBFT_VARBINARY.'(17)', 'Null' => 1)
);
$indexes['shoutblock_ipblock'] = array(
	'PRIMARY' => array('unique' => 1, 'type' => 'BTREE',
		0 => array('name' => 'id', 'Sub_part' => '', 'Null' => 0))
);
	
$table_ids['shoutblock_nameblock'] = 'id';
$tables['shoutblock_nameblock'] = array(
	'id' => array('Type' => 'SERIAL4', 'Null' => 0),
	'name' => array('Type' => 'VARCHAR(50)', 'Null' => 0, 'Default' => '')
);
$indexes['shoutblock_nameblock'] = array(
	'PRIMARY' => array('unique' => 1, 'type' => 'BTREE',
		0 => array('name' => 'id', 'Sub_part' => '', 'Null' => 0))
);

#
# table data
#
$records['shoutblock']['compare'] = DF_DATA_CHECK_ONLY;
$records['shoutblock']['content'] = array(
	array('CPG-Nuke Team', 'Shout it out! :D', gmtime()),
);

$records['config_custom']['compare'] = DF_DATA_EXIST_LEVEL2;
$records['config_custom']['query'] = 'cfg_name, cfg_field';
$records['config_custom']['content'] = array(
	'Shoutblock' => array(
		'color1' => '#ffffff',
		'color2' => '#d3dfe3',
		'date' => '1',
		'time' => '1',
		'number' => '10',
		'ipblock' => '1',
		'nameblock' => '1',
		'censor' => '1',
		'urlonoff' => '1',
		'delyourlastpost' => '1',
		'anonymouspost' => '0',
		'height' => '150',
		'themecolors' => '1',
		'username' => 'Anonymous',
	)
);
