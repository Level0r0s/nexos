<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/include/history.inc,v $
  $Revision: 1.3 $
  $Author: phoenix $
  $Date: 2010/11/08 03:05:52 $
******************************************************/
if (!defined('CPG_NUKE')) { exit; }

$history_id = intval($_GET['history']);

list($dl_title, $dl_pick, $dl_active, $dl_submitter) = $db->sql_ufetchrow("SELECT title, pick, active, submitter FROM ".$dl_prefix."_downloads 
	WHERE lid='$history_id'", SQL_NUM, __FILE__, __LINE__);
if (!isset($dl_title)) { cpg_error('The specified download does not exist', 404); }
if ($dl_active != 1 && !can_admin($module_name)) { cpg_error('The specified download is not active'); }
$pagetitle .= ' '._BC_DELIM.' Version History '._BC_DELIM.' '.$dl_title;

$result = $db->sql_query("SELECT h.vers, h.author, h.date, h.comment, u.username FROM ".$dl_prefix."_history h
	LEFT JOIN ".$user_prefix."_users u ON (u.user_id = h.author)
	WHERE h.id='$history_id' ORDER BY h.date DESC", false, __FILE__, __LINE__);

require_once('header.php');
OpenTable();
echo dl_detail_menu($history_id, $dl_title, $dl_pick, $dl_active, 4).'<br /><br />
   <span class="genmed"><strong>Version History</strong></span><br />
   Track changes made to <strong>'.$dl_title.'</strong> since its original version.<br /><br />';
if ($db->sql_numrows($result)) {
    $i = 1;
    while (list($h_vers, $h_author, $h_date, $h_comment, $h_authorname) = $db->sql_fetchrow($result)) {
        $author = is_numeric($h_author) ? $h_authorname : $h_author;
        echo '
   <span class="genmed"><strong>'._VERSION.' '.$h_vers.'</strong></span><br />'.generate_date($h_date).' by <strong>'.$author.'</strong><br /><br /><span class="genmed">'.nl2br($h_comment).'</span>';
        if ($db->sql_numrows($result) > $i) {
            echo '
   <br /><hr />';
        }
        $i++;
    }
} else {
    echo display_errors('There is no recorded history for this download');
}
$db->sql_freeresult($result);
CloseTable();