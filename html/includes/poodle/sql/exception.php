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

class Poodle_SQL_Exception extends Exception
{

	protected $query;
	const NO_EXTENSION  = -1;
	const NO_CONNECTION = 1;
	const NO_DATABASE   = 2;

	# Redefine the exception so message isn't optional
	function __construct($message, $code, $query)
	{
		parent::__construct($message, $code);
		$this->query = $query;
	}

	final function getQuery() { return $this->query; }

//	function __toString() {}

}
