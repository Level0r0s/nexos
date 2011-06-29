<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/modules/Private_Messages/sql/cpg_inst.php,v $
  $Revision: 1.1 $
  $Author: nanocaiordo $
  $Date: 2010/07/16 12:44:16 $
**********************************************/
if (!defined('ADMIN_MOD_INSTALL')) { exit; }
class Private_Messages extends INSTALLER_MODULE
{
	var $radmin;
	var $version;
	var $modname;
	var $description;
	var $author;
	var $website;
	var $dbtables;

	function Private_Messages()
	{
		$this->radmin = false;
		$this->version = '1.2';
		$this->modname = 'Private Messaging';
		$this->description = 'Send and recieve private messages with members';
		$this->dbtables = array('privmsgs', 'privmsgs_text');
		$this->config = array(
			'per_page' => 50,
			'inbox_max' => 100,
			'outbox_max' => 100,
			'sentbox_max' => 4,
			'savebox_max' => 100,
			'graphic_length' => 200,
			'allow_html' => 0,
			'allow_bbcode' => 1,
			'allow_smilies' => 1,
			'allow_sig' => 1,
			'flood_interval' => 15,
			'email_sig' => '',
			'quick_reply' => 1
		);
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
		global $installer;
		if (version_compare($prev_version, '1.2', '<')) {
			$installer->add_query('REN', 'bbprivmsgs', 'privmsgs');
			$installer->add_query('REN', 'bbprivmsgs_text', 'privmsgs_text');
			$installer->add_query('UPDATE', 'modules', 'uninstall=1 WHERE title="Private_Messages"');
		}
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
