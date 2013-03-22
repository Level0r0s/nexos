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
/*********************************************
  Copyright (c) 2011 by DragonflyCMS
  http://dragonflycms.org
  Released under GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/classes/shutdown.php,v $
  $Revision: 1.2 $
  $Author: nanocaiordo $
  $Date: 2011/04/19 04:50:18 $
**********************************************/

class Shutdown
{

	private $callbacks = array();

	public function __construct()
	{
		register_shutdown_function(array($this, 'now'));
	}

	public function register()
	{
		$callback = func_get_args();
		if (empty($callback) || !is_callable($callback[0])) {
			trigger_error('Invalid shutdown callback:'. preg_replace('#\s+#', ' ', var_export($callback, 1)), E_USER_WARNING); 
			return;
		}
		$this->callbacks[] = $callback;
	}

	# Execute in reverse order, from the last registered to the first one.
	public function now()
	{
		while ($arguments = array_pop($this->callbacks)) {
			$callback = array_shift($arguments);
			if (!call_user_func_array($callback, $arguments)) {
				trigger_error('Failed shutdown callback:'. preg_replace('#\s+#', ' ', var_export($callback, 1)), E_USER_WARNING); 
			}
		}
	}

}

$Shutdown = new Shutdown;
