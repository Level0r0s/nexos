<?php
/*	CPG Dragonfly™ CMS, Copyright © since 2010 by CPG-Nuke Dev Team. All rights reserved.
	$Revision: 10.1 $
*/

interface Poodle_SQL_Interface_Result extends ArrayAccess, Countable, Iterator
{
	# int $current_field;
	# int $field_count;
	# array $lengths;
	# int $num_rows;
	public function data_seek($offset);
	public function fetch_all($resulttype=Poodle_SQL::NUM); # PHP 5.3.0 + mysqlnd
	public function fetch_array();
	public function fetch_assoc();
	public function fetch_field_direct($offset);
	public function fetch_field();
	public function fetch_fields();
	public function fetch_object();
	public function fetch_row();
	public function field_seek($offset);
	public function free();
	# ArrayAccess: offsetExists($k), offsetGet($k), offsetSet($k, $v), offsetUnset($k)
	# Countable: count()
	# Iterator: rewind(), valid(), current(), key(), next()
}
