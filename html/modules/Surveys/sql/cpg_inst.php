<?php
/*********************************************
  Dragonfly CMS, Copyright (c) 2004 by DragonflyCMS Dev. Team.
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/modules/Surveys/sql/cpg_inst.php,v $
  $Revision: 1.3 $
  $Author: nanocaiordo $
  $Date: 2010/07/15 12:22:33 $
**********************************************/
if (!defined('ADMIN_MOD_INSTALL')) { exit; }

class Surveys extends INSTALLER_MODULE
{

	function Surveys()
	{
		$this->radmin = true;
		$this->version = '1.2';
		$this->modname = 'Surveys';
		$this->description = 'Manage Surveys to gain information from your visitors';
		$this->author = 'CPG-Nuke Dev Team';
		$this->website = 'dragonflycms.org';
		$this->dbtables = array('poll_check', 'poll_data', 'poll_desc', 'pollcomments');
		$this->config = array();
	}

	public function pre_install()
	{
		return true;
	}

	public function post_install()
	{
		return true;
	}

	public function pre_upgrade($prev_version)
	{
		return true;
	}

	public function post_upgrade($prev_version)
	{
		return true;
	}

	public function pre_uninstall()
	{
		return true;
	}

	public function post_uninstall()
	{
		return true;
	}

}