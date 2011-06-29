<?php
/*********************************************
	CPG Dragonfly™ CMS
	********************************************
	Copyright © 2004 - 2007 by CPG-Nuke Dev Team
	http://dragonflycms.org
	Dragonfly is released under the terms and conditions
	of the GNU GPL version 2 or any later version
	$Source: /cvs/html/modules/Private_Messages/sql/data.inc,v $
	$Revision: 1.1 $
	$Author: nanocaiordo $
	$Date: 2010/07/16 12:44:16 $
**********************************************/
if (!defined('ADMIN_MOD_INSTALL')) { exit; }
$table_ids['privmsgs'] = 'privmsgs_id';
$tables['privmsgs'] = array(
  'privmsgs_id' => array('Type' => 'SERIAL4', 'Null' => 0),
  'privmsgs_type' => array('Type' => DBFT_INT1, 'Null' => 0, 'Default' => 0),
  'privmsgs_subject' => array('Type' => 'VARCHAR(255)', 'Null' => 0, 'Default' => ''),
  'privmsgs_from_userid' => array('Type' => DBFT_INT3, 'Null' => 0, 'Default' => 0),
  'privmsgs_to_userid' => array('Type' => DBFT_INT3, 'Null' => 0, 'Default' => 0),
  'privmsgs_date' => array('Type' => DBFT_INT4, 'Null' => 0, 'Default' => 0),
  'privmsgs_ip' => array('Type' => 'VARBINARY(17)', 'Null' => 1, 'Default' => '', ),
  'privmsgs_enable_bbcode' => array('Type' => DBFT_BOOL, 'Null' => 0, 'Default' => 1),
  'privmsgs_enable_html' => array('Type' => DBFT_BOOL, 'Null' => 0, 'Default' => 0),
  'privmsgs_enable_smilies' => array('Type' => DBFT_BOOL, 'Null' => 0, 'Default' => 1),
  'privmsgs_attach_sig' => array('Type' => DBFT_BOOL, 'Null' => 0, 'Default' => 1),
  'privmsgs_attachment' => array('Type' => DBFT_BOOL, 'Null' => 0, 'Default' => 0),
);
$indexes['privmsgs'] = array(
  'PRIMARY' => array('unique' => 1, 'type' => 'BTREE',
   0 => array('name' => 'privmsgs_id', 'Sub_part' => '', 'Null' => 0)),
  'privmsgs_from_userid' => array('unique' => 0, 'type' => 'BTREE',
   0 => array('name' => 'privmsgs_from_userid', 'Sub_part' => '', 'Null' => 0)),
  'privmsgs_to_userid' => array('unique' => 0, 'type' => 'BTREE',
   0 => array('name' => 'privmsgs_to_userid', 'Sub_part' => '', 'Null' => 0)),
);
$tables['privmsgs_text'] = array(
  'privmsgs_text_id' => array('Type' => DBFT_INT3, 'Null' => 0, 'Default' => 0),
  'privmsgs_text' => array('Type' => 'TEXT', 'Null' => 1, 'Default' => '', ),
);
$indexes['privmsgs_text'] = array(
  'PRIMARY' => array('unique' => 1, 'type' => 'BTREE',
   0 => array('name' => 'privmsgs_text_id', 'Sub_part' => '', 'Null' => 0)),
);