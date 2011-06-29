<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/admin/pending_reviews.inc,v $
  $Revision: 1.6 $
  $Author: phoenix $
  $Date: 2010/11/08 03:05:51 $
******************************************************/
if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin($op)) { die('Access Denied'); }
require_once('modules/'.$op.'/functions/display.inc');
require_once('includes/nbbcode.php');

$cur_page = (isset($_GET['page']) && $_GET['page'] > 0) ? intval($_GET['page']) : 1;
$perpage = $dl_config['r_perpage'];
$limit = ($cur_page-1)*$perpage;

$result = $db->sql_query("SELECT r.id, r.uid, r.ip, r.title, r.comment, r.score, r.timestamp, d.lid, d.cid, d.title, u.username, COUNT(r.score) AS votes FROM ".$dl_prefix."_ratings r
	LEFT JOIN ".$dl_prefix."_downloads d ON (d.lid = r.lid)
	LEFT JOIN ".$user_prefix."_users u ON (u.user_id = r.uid)
	WHERE r.comment!='' AND r.active=0 
	GROUP BY r.id DESC, r.uid, r.ip, r.title, r.comment, r.score, r.timestamp, d.lid, d.cid, d.title, u.username 
	LIMIT $perpage OFFSET $limit");
$pending = $db->sql_count($dl_prefix.'_ratings', 'active=0');
$total_pages = ceil($pending/$perpage);

$pagetitle .= ' '._BC_DELIM.' '._DLP_PENDREVIEWS;
require_once('header.php');
GraphicAdmin('_AMENU6');
OpenTable();
echo dl_admin_menu().'<br /><hr /><br />
<span class="genmed"><strong>'._DLP_PENDREVIEWS.'</strong></span><br /><br />';
if (!$db->sql_numrows($result)) {
	echo display_errors(sprintf(_ERROR_NONE_TO_DISPLAY, strtolower(_DLP_PENDREVIEWS)));
} else {
	echo '<table border="0" width="60%" class="forumline">';
	$i = 0;
	while (list($review_id, $review_uid, $review_ip, $review_title, $review_comment, $review_score, $review_timestamp, $dl_id, $dl_cid, $dl_title, $review_uname, $review_votes) = $db->sql_fetchrow($result)) {
		$rating_info = get_rating($review_score, $review_votes);
		if ($i > 0) {
			echo '<tr><td class="spaceRow"><img src="images/spacer.gif" alt="" height="1" /></td></tr>';
		}
		echo '
		<tr>
		 <td class="row1" colspan="2"><div style="float: left;">
		  <img src="'.dl_image('stars/'.$rating_info['rating'].'.png').'" alt="'._DLP_REVIEW.' #'.$review_id.': '.$rating_info['desc'].'" title="'._DLP_REVIEW.' #'.$review_id.': '.$rating_info['desc'].'" /> '._BY.' <a href="'.URL::index('Your_Account&amp;profile='.$review_uid).'">'.$review_uname.'</a> '._ON.' '.generate_date($review_timestamp, $userinfo['user_dateformat']).'</div>
		  <div style="float: right;">IP: '.decode_ip($review_ip).' &nbsp; <a href="'.URL::index('&amp;approve_review='.$review_id.'&amp;admin='.$cur_page).'">['.strtolower(_DLP_APPROVE).']</a> <a href="'.URL::index('&amp;del_review='.$review_id.'&amp;admin='.$cur_page).'">['.strtolower(_DELETE).']</a></div><br />
		  <hr width="99%" />
		  <span class="gen"><strong>'.$review_title.'</strong></span><br /><br />
		  <span class="genmed">'.decode_bb_all($review_comment).'</span><br /><br /><hr width="50%" align="left" /><strong>'._DLP_SUBMITTEDTO.':</strong> <a href="'.URL::index('&amp;file=details&amp;id='.$dl_id).'">'.$dl_title.'</a>
		 </td>
		</tr>';
		$i++;
	}
	echo '</table>'.(($total_pages > 1) ? '<br />'._DLP_PAGE.': '.gen_pagination($pending, $perpage, $cur_page, '&amp;mode=r_pending') : '');
}

CloseTable();