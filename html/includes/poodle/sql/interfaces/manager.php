<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | block-Sample.php - Example NexOS block file                       |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      |
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |
  +-------------------------------------------------------------------+
  */
/*	CPG Dragonfly™ CMS, Copyright © since 2010 by CPG-Nuke Dev Team. All rights reserved.
	$Revision: 10.1 $
*/

interface Poodle_SQL_Interface_Manager
;
	function __construct(Poodle_SQL $SQL);
	public function list_databases();
	public function list_tables();
	public function list_columns($table, $uniform=true);
	public function list_indexes($table);
	public function list_foreign_keys($table);
	public function list_triggers($table);
	public function list_views();
	public function list_functions();
	public function list_procedures();
	public function get_view     ($name);
	public function get_function ($name);
	public function get_procedure($name);
	public function analyze($tables);
	public function check($tables);
	public function optimize($tables);
	public function repair($tables);
	public function status();
	public function server_status();
	public function server_processes();
}
