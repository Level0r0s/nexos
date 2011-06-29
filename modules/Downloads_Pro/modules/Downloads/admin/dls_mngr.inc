<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/admin/dls_mngr.inc,v $
  $Revision: 1.14 $
  $Author: phoenix $
  $Date: 2010/11/08 03:05:51 $
******************************************************/
if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin($op)) { die('Access Denied'); }
require_once('modules/'.$op.'/functions/info.inc');
require_once('modules/'.$op.'/functions/categories.inc');
require_once('modules/'.$op.'/functions/linking.inc');

if (isset($_GET['del_dl'])) {
	$dl_id = intval($_GET['del_dl']);
	list($dl_title) = $db->sql_ufetchrow('SELECT title FROM '.$dl_prefix."_downloads 
		WHERE lid='$dl_id'", SQL_NUM);
	if (empty($dl_title)) { cpg_error('No such download'); }
	if (isset($_POST['confirm'])) {
		if ($CPG_SESS['admin']['page'] != $op) { cpg_error(_ERROR_BAD_LINK, _SEC_ERROR); }
		require_once('modules/'.$module_name.'/functions/mirrors.inc');
		require_once('modules/'.$module_name.'/functions/screenshots.inc');
		DL_Mirror::delete('all', $dl_id);
		DL_Image::delete('all', $dl_id);
		$db->sql_query("DELETE FROM ".$dl_prefix."_broken 
			WHERE lid='$dl_id'");
		$db->sql_query("DELETE FROM ".$dl_prefix."_downloads 
			WHERE lid='$dl_id'");
		$db->sql_query("DELETE FROM ".$dl_prefix."_history 
			WHERE id='$dl_id'");
		$db->sql_query("DELETE FROM ".$dl_prefix."_ratings 
			WHERE lid='$dl_id'");
		$db->sql_query("DELETE FROM ".$dl_prefix."_stats 
			WHERE id='$dl_id'");
	} else if (!isset($_POST['cancel'])) {
		cpg_delete_msg(URL::admin('&amp;del_dl='.$dl_id), "Are you sure that you want to remove <strong>$dl_title</strong>?");
	}
	URL::redirect(URL::admin());
}
elseif ($mode == 'broken') {
	if (isset($_GET['dismiss'])) {
		$dismiss_id = intval($_GET['dismiss']);
		$db->sql_query("DELETE FROM ".$dl_prefix."_broken 
			WHERE id='$dismiss_id'");
		URL::redirect(URL::admin('&mode=broken'));
	} elseif (isset($_GET['notify'])) {
		require_once('includes/nbbcode.php');
		$mirror_id = intval($_GET['notify']);
		$result = $db->sql_query("SELECT m.id, m.did, m.url, m.uid, d.lid, d.title, d.submitter, b.report, u.username FROM ".$dl_prefix."_mirrors m
			LEFT JOIN ".$dl_prefix."_downloads d ON (d.lid = m.did)
			LEFT JOIN ".$dl_prefix."_broken b ON (b.mid = m.id)
			LEFT JOIN ".$user_prefix."_users u ON (u.user_id = m.uid)
			WHERE m.id=$mirror_id");
		$row = $db->sql_fetchrow($result);
		$message = Fix_Quotes(encode_bbcode('Hi '.$row['username'].",\n
		We have received a report that a mirror submitted by you for the download [url=".URL::index('&amp;file=details&amp;id='.$row['lid'])."]".$row['title']."[/url] is not accessible due to a broken link [i](see details below)[/i]. We have checked the mirror link and can confirm that it is is indeed broken. Because we try to maintain a high level of integrity in our download collection, we would greatly appreciate it if you checked the validity of the mirror link at your earliest convenience.\n\n[b]Further details[/b]\nMirror ID: ".$row['id']."\nMirror URL: ".$row['url']."\nComment: ".$row['report']."\n\n
		Thank you,\n".$userinfo['username']));
		$subject = Fix_Quotes('Broken Mirror Report: '.$row['title']);
		$sql = "INSERT INTO ".$prefix."_bbprivmsgs 
			(privmsgs_type, privmsgs_subject, privmsgs_from_userid, privmsgs_to_userid, privmsgs_date, privmsgs_ip, privmsgs_enable_html, privmsgs_enable_bbcode, privmsgs_enable_smilies, privmsgs_attach_sig) 
			VALUES 
			(1, '$subject', ".$userinfo['user_id'].", '".$row['uid']."', ".time().", '$userinfo[user_ip]', 0, 1, 1, 0)";
		if (!$db->sql_query($sql)) { cpg_error('Failed to send notification message'); }
		$privmsg_text_id = $db->sql_nextid('privmsgs_id');
		$sql = "INSERT INTO ".$prefix."_bbprivmsgs_text 
			(privmsgs_text_id, privmsgs_text) 
			VALUES 
			($privmsg_text_id, '$message')";
		if (!$db->sql_query($sql)) { cpg_error('Failed to send notification message'); }
		$db->sql_query("UPDATE ".$user_prefix."_users 
			SET user_new_privmsg=1 
			WHERE user_id=".$row['uid']);
		cpg_error('Notification message sent to <strong>'.$row['username'].'</strong>', _TB_INFO, URL::admin('&mode=broken'));
	} elseif (isset($_GET['purge'])) {
		$purge_id = intval($_GET['purge']);
		list($dl_id) = $db->sql_ufetchrow("SELECT did FROM ".$dl_prefix."_mirrors 
			WHERE id='$purge_id'", SQL_NUM);
		require_once('modules/'.$module_name.'/functions/mirrors.inc');
		DL_Mirror::delete($purge_id, $dl_id);
		$db->sql_query("DELETE FROM ".$dl_prefix."_broken 
			WHERE mid='$purge_id'");
		URL::redirect(URL::admin('&mode=broken'));
	} else {
		$pagetitle .= ' '._BC_DELIM.' '._DLP_BRMIR;
		require_once('header.php');
		GraphicAdmin('_AMENU6');
		OpenTable();
		$sql = "SELECT b.id, b.lid, b.mid, b.uid, b.report, b.ip, d.lid, d.title, d.submitter, m.id, m.uid, m.url, u.username, v.username FROM ".$dl_prefix."_broken b
			LEFT JOIN ".$dl_prefix."_downloads d ON (d.lid = b.lid)
			LEFT JOIN ".$dl_prefix."_mirrors m ON (m.id = b.mid)
			LEFT JOIN ".$user_prefix."_users u ON (u.user_id = m.uid)
			LEFT JOIN ".$user_prefix."_users v ON (v.user_id = b.uid)
			ORDER BY b.id";
		$result = $db->sql_query($sql);
		echo dl_admin_menu().'<br /><hr /><br />
		<span class="genmed"><strong>'._DLP_BRMIR.'</strong></span><br /><br />';
		
		if ($db->sql_numrows($result) < 1) {
			echo display_errors(sprintf(_ERROR_NONE_TO_DISPLAY, strtolower(_DLP_BRMIR)));
		} else {
			while (list($brk_id, $brk_dl, $brk_mirror, $brk_submitter, $brk_report, $brk_ip, $dl_id, $dl_title, $dl_owner, $mirror_id, $mirror_owner, $mirror_url, $dl_owner_name, $brk_submitter_name) = $db->sql_fetchrow($result)) {
				if (empty($dl_submitter)) {
					$dl_submitter = 'unknown';
				} elseif ($dl_submitter != 'admin') {
					$dl_submitter = '<a href="'.URL::index('Your_Account&amp;profile='.$dl_submitter).'">'.$dl_submitter.'</a>';
				}
				if (ereg('://', $mirror_url)) {
					require_once('includes/nbbcode.php');
					$url = parse_url($mirror_url);
					$site = shrink_url($url['host']);
				} else {
					$site = $MAIN_CFG['server']['domain'];
				}
				echo '<div style="padding: 3px 5px; border:solid 1px '.$bgcolor4.'; background-color:'.$bgcolor2.'; margin-top: 4px; margin-right: 10px; margin-bottom: 4px; width: 40%; float: left;"><span class="genmed"><span style="color: #808080; font-weight: bold;">'._DLP_DOWNLOAD.':</span> <a href="'.URL::index('&amp;file=details&amp;id='.$dl_id).'">'.$dl_title.'</a></span><br />'._DLP_MIRROR.': <a href="'.$mirror_url.'">'.$site.'</a>; '.strtolower(_DLP_OWNEDBY).' <a href="'.URL::index('Your_Account&amp;profile='.$mirror_owner).'">'.$dl_owner_name.'</a><br />'._DLP_REPSUBMITTER.': <a href="'.URL::index('Your_Account&amp;profile='.$brk_submitter).'">'.$brk_submitter_name.'</a> ('.decode_ip($brk_ip).')<br /><hr /><em>'.nl2br($brk_report).'</em><br /><hr /><a href="'.URL::admin('&amp;mode=broken&amp;dismiss='.$brk_id).'">'._DLP_REPDISMISS.'</a> - <a href="'.URL::admin('&amp;mode=broken&amp;notify='.$mirror_id).'">'._DLP_REPNOTIFY.'</a> - <a href="'.URL::admin('&amp;mode=broken&amp;purge='.$mirror_id).'">'._DLP_REPREM.'</a> - <a href="'.URL::index('&amp;file=manage&amp;edit='.$brk_dl).'">'._DLP_EDITDL.'</a></div>';
			}
			echo '<br />';
		}
		$db->sql_freeresult($result);
		CloseTable();
	}
}
elseif ($mode == 'pending') {
	$pagetitle .= ' '._BC_DELIM.' '._DLP_PENDDL;
	require_once('header.php');
	GraphicAdmin('_AMENU6');

	// pagination
	$cur_page = (isset($_GET['page']) && $_GET['page'] > 0) ? intval($_GET['page']) : 1;
	$perpage = 4;
	$limit = ($cur_page-1)*$perpage;

	$result = $db->sql_query("SELECT q.*, COUNT(m.url) AS mirrors, u.username FROM ".$dl_prefix."_downloads q
		LEFT JOIN ".$dl_prefix."_mirrors m ON (m.did = q.lid)
		LEFT JOIN ".$user_prefix."_users u ON (u.user_id = q.submitter) 
		WHERE q.active=2 
		GROUP BY q.lid, q.cid, q.active, q.access, q.title, q.screen, q.desc_short, q.desc_long, q.notes, q.date, q.updated, q.name, q.email, q.submitter, q.filesize, q.version, q.homepage, q.compat, q.pick, u.username 
		LIMIT $perpage OFFSET $limit");

	$total_pending = $db->sql_count($dl_prefix.'_downloads', 'active=2');
	$total_pages = ceil($total_pending/$perpage);

	OpenTable();
	echo dl_admin_menu().'<br /><hr /><br />
	<span class="genmed"><strong>'._DLP_PENDDL.'</strong></span><br /><br />';
	if ($total_pending < 1) {
		echo display_errors(sprintf(_ERROR_NONE_TO_DISPLAY, strtolower(_DLP_PENDDL)));
	} else {
		while ($row = $db->sql_fetchrow($result)) {
			echo '<div style="padding: 3px 5px; border:solid 1px '.$bgcolor4.'; background-color:'.$bgcolor2.'; margin-top: 4px; margin-right: 10px; margin-bottom: 4px; width: 40%; float: left;"><span class="genmed" style="font-weight: bold;"><a href="'.URL::index('&amp;file=manage&amp;edit='.$row['lid']).'">'.$row['title'].'</a></span><br />'._DLP_SUBMITTEDBY.': <a href="'.URL::index('Your_Account&amp;profile='.$row['submitter']).'">'.$row['username'].'</a> on '.generate_date($row['date']).'<br /><hr /><em>'.$row['desc_short'].'</em></div>';
		}
		echo '<br />';
		if ($total_pages > 1) { echo _DLP_PAGE.': '.gen_pagination($total_pending, $perpage, $cur_page, '&amp;mode=pending'); }
	}
	CloseTable();
}