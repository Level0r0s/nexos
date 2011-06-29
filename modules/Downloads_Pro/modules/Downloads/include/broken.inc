<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/include/broken.inc,v $
  $Revision: 1.8 $
  $Author: phoenix $
  $Date: 2010/11/08 03:05:52 $
******************************************************/
if (!defined('CPG_NUKE')) { exit; }

$pagetitle .= ' '._BC_DELIM.' '._DLP_REPORTBROKEN;
$broken_id = isset($_GET['broken']) ? intval($_GET['broken']) : $global_id;

if (isset($_POST['report_broken'])) {
    if (empty($_POST['report'])) { cpg_error(sprintf(_DLP_RQR, _MESSAGE)); }
    $report_uid = $userinfo['user_id'];
    $report_text = Fix_Quotes($_POST['report'], true);
    list($dummy, $dl_id) = $db->sql_ufetchrow("SELECT m.id, d.lid FROM ".$dl_prefix."_mirrors m
    	LEFT JOIN ".$dl_prefix."_downloads d ON (d.lid = m.did)
    	WHERE m.id='$broken_id'", SQL_NUM, __FILE__, __LINE__);
    $db->sql_query("INSERT INTO ".$dl_prefix."_broken 
		(id, lid, mid, uid, report, date, ip) 
		VALUES 
		(DEFAULT, '$dl_id', '$broken_id', '$report_uid', '$report_text', '".time()."', '$userinfo[user_ip]')", false, __FILE__, __LINE__);
    cpg_error(_DLP_BRKNTHANKS, _TB_INFO, URL::index('&file=details&id='.$dl_id));
} else {
    if (!isset($_GET['broken'])) { URL::redirect(URL::index()); }
    $result = $db->sql_uquery("SELECT m.id, m.active AS m_active, d.lid, d.title, d.pick, d.active, d.submitter FROM ".$dl_prefix."_mirrors m
    	LEFT JOIN ".$dl_prefix."_downloads d ON (d.lid = m.did)
    	WHERE m.id='$broken_id'");
    $row = $db->sql_fetchrow($result);
    $db->sql_freeresult($result);
    if (!isset($row['title'])) { cpg_error(_DLP_UNKNOWNDL, 404); }
    if ($row['active'] != 1 && !can_admin($module_name)) { cpg_error(_DLP_INACTIVEDL); }
    if (!$row['m_active']) { cpg_error(_DLP_INACTIVEDL); }
    $pagetitle .= ' '._BC_DELIM.' '.$row['title'];
    require_once('header.php');
    OpenTable();
    echo dl_detail_menu($row['lid'], $row['title'], $row['pick'], $row['active'], 0).'<br /><br />
    <span class="genmed"><strong>'._DLP_REPORTBROKEN.'</strong></span><br />'._DLP_BRKNGIVEINFO.'
    <ul>
      <li>'._DLP_BRKNINFODATE.'</li>
      <li>'._DLP_BRKNRESPCODE.'</li>
      <li>'._DLP_BRKNFIRSTTIME.'</li>
    </ul>
    <form action="'.URL::index('&amp;broken='.$broken_id).'" method="post" enctype="multipart/form-date" accept-charset="utf-8">
    <textarea name="report" id="report" cols="62" rows="5">'.generate_date(time()).'</textarea><br /><br />
    <input type="submit" name="report_broken" value="Submit Report" />
    </form>';
    CloseTable();
}
