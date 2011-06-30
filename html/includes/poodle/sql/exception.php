<?php

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
