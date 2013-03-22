<?php
if (!defined('INSTALL')) { exit; }

$content = '<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | config.php - NexOS configuration file                             |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      | 
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |  
  +-------------------------------------------------------------------+
  | CPG Dragonfly™ CMS                                                |
  | Copyright © 2004 - 2005 by CPG-Nuke Dev Team                      |
  | http://www.dragonflycms.com                                       |
  | Dragonfly is released under the terms and conditions of the GNU   |
  | GPL version 2 or any later version                                |  
  +-------------------------------------------------------------------+
*/
if (!defined(\'CPG_NUKE\')) { exit; }

define(\'DB_TYPE\', \''.$connect['layer'].'\');
define(\'DB_CHARSET\', '.(isset($connect['charset']) ? "'{$connect['charset']}'" : 'NULL').'); // NULL (is default), latin1, utf8, etc.
$dbhost = \''.$connect['host'].'\';
$dbport = \''.$connect['port'].'\';
$dbname = \''.$connect['database'].'\';
$dbuname = \''.$connect['username'].'\';
$dbpass = \''.$connect['password'].'\';
$prefix = \''.$connect['prefix'].'\';
$user_prefix = \''.$connect['user_prefix'].'\';

# -- $adminindex -----------------------------------------
# The filename of the admin index page I\'d like to use for
# my site
#
# If you change this to something other than it\'s default
# value, you must also rename the file called \'admin.php\'

# to the new value you assigned to this variable
#
# default: admin.php
# --------------------------------------------------------
$adminindex = \'admin.php\';

# -- $mainindex ------------------------------------------
# The filename of the main index page I\'d like to use for
# my site
#
# If you change this to something other than it\'s default
# value, you must also rename the file called \'index.php\'
# to the new value you assigned to this variable
#
# default: index.php
# --------------------------------------------------------
$mainindex = \'index.php\';

# -- admin demo mode -------------------------------------
# Alter the following value to activate the administrative
# system demonstration mode, enabling my users to browse
# my administration menu in a read-only environment
#
# true  = enabled
# false = disabled
#
# default: false
# --------------------------------------------------------
define(\'CPGN_DEMO\', false);

# -- debug mode ------------------------------------------
# Alter the following value to activate debug mode, which
# will show debug messages to all users, instead of
# administrators
#
# Warning: Enabling debug mode is NOT recommended for
#          production websites
#
# true  = enabled
# false = disabled
#
# default: false
# --------------------------------------------------------
define(\'CPG_DEBUG\', false);

# --- WARNING --------------------------
# Do not touch anything below this point
# unless you know what you\'re doing
# --------------------------------------

$CensorList = array(\'asshole\', \'assramer\', \'bitch\',\'basz\',\'cara de cu\', \'caralho\', \'clits\', \'c0ck\', \'Cock\', \'cona\',\'cum\', \'cunt\', \'dago\', \'daygo\', \'degok\', \'dildo\', \'faen\', \'fanculo\', \'feces\',\'fitte\', \'foda-se\',\'motherfuckers\', \'fuck\', \'hoer\',  \'hufter\', \'kike\',\'klootzak\', \'kloot\', \'kuk\', \'kut\', \'lesbo\', \'lul\', \'masturbate\', \'merda\',  \'nazis\', \'neuken\', \'nigger\', \'nutsack\', \'pakkis\', \'paneleiro\', \'penis\', \'phuck\', \'picha\', \'picsa\',  \'pijpen\', \'pisses\', \'piss\',  \'poop\', \'puta\', \'pussy\', \'segg\', \'scrotum\', \'shit\', \'slut\', \'titties\', \'titty\', \'twaty\',  \'whore\', \'wop\',  \'zak\');
$DeniedUserNames = array(\'admin\', \'owner\', \'god\', \'root\', \'webmaster\', \'nobody\', \'anonymous\', \'ieatbabies\', \'operator\');
//session_save_path(\'/home/SOMETHING/tmp\');
';