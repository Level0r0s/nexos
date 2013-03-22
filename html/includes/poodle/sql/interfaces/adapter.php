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

interface Poodle_SQL_Interface_Adapter
{
	function __construct($config);

	/* bool, Start a transaction */
	public function begin();

	/* string, Returns the current character set for the connection. */
	public function character_set_name();

	/* Closes a connection */
	public function close();

	/* bool, Commits the current transaction */
	public function commit();

	/* bool, Opens a connection */
	public function connect();

	/* string, Returns the default database for database queries */
	public function dbname();

	/* string, Escape a string for insertion into a binary field */
	public function escape_binary($data);

	/* string, Escape a string for insertion into a text field */
	public function escape_string($data);

	/* string, Returns the current character set for the connection. */
	public function get_charset();

	/* mixed, Returns the auto generated id used in the last query */
	public function insert_id($idfield);

	/* bool, Optimize / Vacuum the database table*/
	public function optimize($table);

	/* bool, Pings a server connection, or tries to reconnect if the connection has gone down */
	public function ping();

	/* Execute a query */
	public function query($query, $unbuffered=0);

	/* string, Escape a string for insertion into a binary field and append surrounding quotes */
	public function quote_binary($data);

	/* bool, Rolls back current transaction */
	public function rollback();

	/* bool, Sets the default charset */
	public function set_charset();

	/* mixed, Returns SQL result of all tables */
	public function show_tables($prefix);

	/* string, Gets the current system status */
	public function stat();

	/* string, Unescape binary field data */
	public function unescape_binary($data);
/*
	public function search(array $fields, &$text);
*/
}
