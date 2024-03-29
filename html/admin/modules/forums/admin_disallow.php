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
  +-------------------------------------------------------------------+*/
/***************************************************************************
 *				  admin_disallow.php
 *				  -------------------
 *	 begin		  : Tuesday, Oct 05, 2001
 *	 copyright		  : (C) 2001 The phpBB Group
 *	 email		  : support@phpbb.com
 *
 *	 $Id: admin_disallow.php,v 10.0 2010/11/05 00:56:57 djmaze Exp $
 *
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
/* Modifications made by CPG Dev Team http://cpgnuke.com		*/
/* Last modification notes:							*/
/*										*/
/*	 $Id: admin_disallow.php,v 10.0 2010/11/05 00:56:57 djmaze Exp $		 */
/*										*/
/************************************************************************/
if (!defined('ADMIN_PAGES')) { exit; }
if( isset($_POST['add_name']) )
{
	include("includes/phpBB/functions_validate.php");

	$disallowed_user = ( isset($_POST['disallowed_user']) ) ? trim($_POST['disallowed_user']) : trim($_GET['disallowed_user']);

	if ($disallowed_user == '')
	{
		message_die(MESSAGE, $lang['Fields_empty']);
	}
	if( !validate_username($disallowed_user) )
	{
		$message = $lang['Disallowed_already'];
	}
	else
	{
		$sql = "INSERT INTO " . DISALLOW_TABLE . " (disallow_username)
			VALUES('" . Fix_Quotes($disallowed_user) . "')";
		$db->sql_query( $sql );
		$message = $lang['Disallow_successful'];
	}
	$message .= "<br /><br />" . sprintf($lang['Click_return_disallowadmin'], "<a href=\"".URL::admin("&amp;do=disallow")."\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"".URL::admin($op)."\">", "</a>");
	message_die(GENERAL_MESSAGE, $message);
}
else if( isset($_POST['delete_name']) )
{
	$disallowed_id = ( isset($_POST['disallowed_id']) ) ? intval( $_POST['disallowed_id'] ) : intval( $_GET['disallowed_id'] );

	$sql = "DELETE FROM " . DISALLOW_TABLE . "
		WHERE disallow_id = $disallowed_id";
	$result = $db->sql_query($sql);
	if( !$result )
	{
		message_die(GENERAL_ERROR, "Couldn't removed disallowed user.", "",__LINE__, __FILE__, $sql);
	}

	$message .= $lang['Disallowed_deleted'] . "<br /><br />" . sprintf($lang['Click_return_disallowadmin'], "<a href=\"".URL::admin("&amp;do=disallow")."\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"".URL::admin($op)."\">", "</a>");

	message_die(GENERAL_MESSAGE, $message);

}

//
// Grab the current list of disallowed usernames...
//
$sql = "SELECT *
	FROM " . DISALLOW_TABLE;
$result = $db->sql_query($sql);
if( !$result )
{
	message_die(GENERAL_ERROR, "Couldn't get disallowed users.", "", __LINE__, __FILE__, $sql );
}

$disallowed = $db->sql_fetchrowset($result);

//
// Ok now generate the info for the template, which will be put out no matter
// what mode we are in.
//
$disallow_select = '<select name="disallowed_id">';

if( trim($disallowed) == '' ) {
	$disallow_select .= '<option value="">' . $lang['no_disallowed'] . '</option>';
}
else for( $i = 0; $i < count($disallowed); $i++ ) {
	$disallow_select .= '<option value="' . $disallowed[$i]['disallow_id'] . '">' . $disallowed[$i]['disallow_username'] . '</option>';
}

$disallow_select .= '</select>';

$template->set_filenames(array('body' => 'forums/admin/disallow_body.html'));

$template->assign_vars(array(
	"S_DISALLOW_SELECT" => $disallow_select,
	"S_FORM_ACTION" => URL::admin("&amp;do=disallow"),

	"L_INFO" => $output_info,
	"L_DISALLOW_TITLE" => $lang['Disallow_control'],
	"L_DISALLOW_EXPLAIN" => $lang['Disallow_explain'],
	"L_DELETE" => $lang['Delete_disallow'],
	"L_DELETE_DISALLOW" => $lang['Delete_disallow_title'],
	"L_DELETE_EXPLAIN" => $lang['Delete_disallow_explain'],
	"L_ADD" => $lang['Add_disallow'],
	"L_ADD_DISALLOW" => $lang['Add_disallow_title'],
	"L_ADD_EXPLAIN" => $lang['Add_disallow_explain'],
	"L_USERNAME" => $lang['Username'])
);
