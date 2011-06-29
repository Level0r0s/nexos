<?php
/***************************************************************************
 *								  index.php
 *				  -------------------
 *	 begin		  : Saturday, Feb 13, 2001
 *	 copyright		  : (C) 2001 The phpBB Group
 *	 email		  : support@phpbb.com
 *
  Last modification notes:
  $Source: /cvs/html/modules/Forums/profile.php,v $
  $Revision: 9.3 $
  $Author: nanocaiordo $
  $Date: 2008/08/01 12:03:06 $
 *
 ***************************************************************************/
/***************************************************************************
 *
 *	 This program is free software; you can redistribute it and/or modify
 *	 it under the terms of the GNU General Public License as published by
 *	 the Free Software Foundation; either version 2 of the License, or
 *	 (at your option) any later version.
 *
 ***************************************************************************/
if (!defined('CPG_NUKE')) { exit; }
require_once('modules/'.$module_name.'/nukebb.php');

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_PROFILE);
init_userprefs($userdata);

//
// Start of program proper
//
if ( isset($_GET['mode']) || isset($_POST['mode']) ) {
	$mode = ( isset($_GET['mode']) ) ? $_GET['mode'] : $_POST['mode'];
	if ( $mode == 'viewprofile' ) {
		$username = ( isset($_GET[POST_USERS_URL]) ) ? $_GET[POST_USERS_URL] : $_POST[POST_USERS_URL];
		URL::refresh(URL::index('Your_Account&profile='.$username), 0);
	} else if ( $mode == 'email' ) {
		require_once('includes/phpBB/usercp_email.php');
	}
} else {
	URL::refresh(URL::index(), 0);
}
exit;
