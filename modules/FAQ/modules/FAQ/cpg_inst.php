<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/FAQ/modules/FAQ/cpg_inst.php,v $
  $Revision: 9.10 $
  $Author: phoenix $
  $Date: 2007/09/16 15:53:46 $
**********************************************/
if (!defined('ADMIN_MOD_INSTALL')) { exit; }

class FAQ {
	var $description;
	var $radmin;
	var $modname;
	var $version;
	var $author;
	var $website;
	var $dbtables;
	function FAQ() {
		$this->radmin = true;
		$this->version = '2.0.1.2';
		$this->modname = 'FAQ';
		$this->description = 'Create and manage a simple knowledge base';
		$this->author = 'Trevor Eckart';
		$this->website = 'dragonflycms.org';
		$this->dbtables = array('faqanswer', 'faqcategories');
	}
	function install() {
		global $installer;
		$installer->add_query('CREATE', 'faqanswer', "
  id SERIAL4,
  id_cat INT1 NOT NULL default 0,
  question VARCHAR(255),
  answer TEXT,
  PRIMARY KEY (id),
  KEY id_cat (id_cat)", 'faqanswer');
		$installer->add_query('CREATE', 'faqcategories', "
  id_cat SERIAL4,
  categories VARCHAR(255) default NULL,
  flanguage VARCHAR(30) NOT NULL,
  PRIMARY KEY (id_cat)", 'faqcategories');
		return true;
	}
	function uninstall() {
		global $installer;
		$installer->add_query('DROP', 'faqanswer');
		$installer->add_query('DROP', 'faqcategories');
		return true;
	}
	function upgrade($prev_version) {
		global $installer;
		$installer->add_query('CHANGE', 'faqanswer', '`id` `id` INT NOT NULL AUTO_INCREMENT');
		$installer->add_query('CHANGE', 'faqcategories', '`id_cat` `id_cat` INT NOT NULL AUTO_INCREMENT');
		return true;
	}
}