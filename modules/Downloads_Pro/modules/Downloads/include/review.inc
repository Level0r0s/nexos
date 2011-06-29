<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/include/review.inc,v $
  $Revision: 1.8 $
  $Author: phoenix $
  $Date: 2010/11/08 03:05:52 $
******************************************************/
if (!defined('CPG_NUKE')) { exit; }

if (!$dl_config['r_active']) { cpg_error('We\'re sorry, but this feature has been disabled'); }

$review_id = (isset($_GET['review']) ? intval($_GET['review']) : (isset($_POST['dl']) ? intval($_POST['dl']) : 0));
$preview = '';
$errors = $warnings = array();
if (isset($_POST['preview_review'])) {
	$review_timestamp = intval($_POST['date']);
	$rating_info2 = get_rating($_POST['score'], 1);
	$preview = 'Please proofread your review and check for accuracy. You are allowed only one review per download.<br /><br />
	<table border="0" width="65%" class="forumline">
	 <tr>
	   <td class="row1" colspan="2">'.$rating_info2['image'].' by <a href="'.URL::index('Your_Account&amp;profile='.$userinfo['user_id']).'">'.$userinfo['username'].'</a> on '.generate_date($review_timestamp).'<br /><hr width="99%"/>
	   <span class="gen"><strong>'.$_POST['title'].'</strong></span><br /><br />
	   <span class="genmed">'.decode_bb_all(check_words($_POST['comment'])).'</span></td>
	 </tr>
	</table><br />';
	if (empty($_POST['title'])) {
		$errors[] = sprintf(_ERROR_NOT_SET, 'Title');
	}
	if (empty($_POST['comment'])) {
		$errors[] = sprintf(_ERROR_NOT_SET, 'Comment');
	}
	if ($_POST['score'] == '-1') {
		$errors[] = sprintf(_ERROR_NOT_SET, 'Score');
	}
    $review_timestamp = intval($_POST['date']);
    $rating_info2 = get_rating($_POST['score'], 1);
    $preview = 'Please proofread your review and check for accuracy. You are allowed only one review per download.<br /><br />
    <table border="0" width="65%" class="forumline">
     <tr>
       <td class="row1" colspan="2">'.$rating_info2['image'].' by <a href="'.URL::index('Your_Account&amp;profile='.$userinfo['user_id']).'">'.$userinfo['username'].'</a> on '.generate_date($review_timestamp).'<br /><hr width="99%"/>
       <span class="gen"><strong>'.$_POST['title'].'</strong></span><br /><br />
       <span class="genmed">'.decode_bb_all(check_words($_POST['comment'])).'</span></td>
     </tr>
    </table><br />';
}

if (isset($_GET['del_review'])) {
	$r_id = intval($_GET['del_review']);
	$admin = (isset($_GET['admin']) ? intval($_GET['admin']) : false);
	list($dl_id, $active) = $db->sql_ufetchrow("SELECT lid, active FROM ".$dl_prefix."_ratings 
		WHERE id='$r_id'", SQL_NUM, __FILE__, __LINE__);
	if (!isset($dl_id)) { URL::redirect(URL::index()); }
	list($dl_owner) = $db->sql_ufetchrow("SELECT submitter FROM ".$dl_prefix."_downloads 
		WHERE lid='$dl_id'", SQL_NUM, __FILE__, __LINE__);
	if (!can_admin($module_name) && (!$active && $dl_owner != $userinfo['user_id'])) { URL::redirect(URL::index()); }
	if (isset($_POST['confirm'])) {
		if ($CPG_SESS['user']['page'] != $module_name) { cpg_error(_ERROR_BAD_LINK, _SEC_ERROR); }
		$db->sql_query("DELETE FROM ".$dl_prefix."_ratings 
			WHERE id='$r_id' 
			LIMIT 1");
	} else if (!isset($_POST['cancel'])) {
		$pagetitle .= ' '._BC_DELIM.' Remove Review';
		cpg_delete_msg(URL::index('&amp;del_review='.$r_id.($admin ? '&amp;admin='.$admin : '')), 'Are you sure that you want to remove this review?');
	}
	if ($admin) {
		URL::redirect(URL::admin('&mode=r_pending&page='.$admin));
	} else {
		$anchor = (!$active ? '#p_reviews' : '#reviews');
		URL::redirect(URL::index('&file=details&id='.$dl_id.$anchor));
	}
} elseif (isset($_GET['approve_review'])) {
	$r_id = intval($_GET['approve_review']);
	$admin = (isset($_GET['admin']) ? intval($_GET['admin']) : false);
	list($dl_id, $pending) = $db->sql_ufetchrow("SELECT lid FROM ".$dl_prefix."_ratings 
		WHERE id='$r_id' AND active=0", SQL_NUM, __FILE__, __LINE__);
	if (!isset($dl_id)) { URL::redirect(URL::index()); }
	list($dl_owner) = $db->sql_ufetchrow("SELECT submitter FROM ".$dl_prefix."_downloads 
		WHERE lid='$dl_id'", SQL_NUM, __FILE__, __LINE__);
	if (!can_admin($module_name) && $dl_owner != $userinfo['user_id']) { URL::redirect(URL::index()); }
	$db->sql_query("UPDATE ".$dl_prefix."_ratings 
		SET active=1 
		WHERE id='$r_id'");
	if ($admin) {
		URL::redirect(URL::admin('&mode=r_pending&page='.$admin));
	} else {
		URL::redirect(URL::index('&file=details&id='.$dl_id).'#r'.$r_id);
	}
} elseif (isset($_POST['post_review'])) {
    if ($CPG_SESS['user']['page'] != $module_name) { cpg_error(_ERROR_BAD_LINK, _SEC_ERROR); }
    if (empty($_POST['title'])) {
        cpg_error(sprintf(_ERROR_NOT_SET, 'Title'));
    } elseif (empty($_POST['comment'])) {
        cpg_error(sprintf(_ERROR_NOT_SET, 'Comment'));
    } else {
        $dl_score = $_POST['score'];
        if ($dl_score == '-1') {
			cpg_error(sprintf(_ERROR_NOT_SET, 'Score'));
		}
        $dl_title = Fix_Quotes(check_words($_POST['title']), true);
        $dl_comment = Fix_Quotes(check_words($_POST['comment']), true);
        if ($dl_score >= 0 && $dl_score <= 5) {
            $db->sql_query("INSERT INTO ".$dl_prefix."_ratings 
				(id, lid, uid, active, ip, title, comment, score, timestamp) 
				VALUES 
				(DEFAULT, '$review_id', '$userinfo[user_id]', ".intval(!$dl_config['r_queue']).", '$userinfo[user_ip]', '$dl_title', '$dl_comment', '$dl_score', ".time().")", false, __FILE__, __LINE__);
            $r_id = $db->sql_nextid('id');
            if ($dl_config['r_queue']) {
				cpg_error('Your review has been queued for approval by either an administrator or the download owner', _TB_INFO, URL::index('&file=details&id='.$review_id, true, true));
			} else {
				URL::redirect(URL::index('&file=details&id='.$review_id).'#r'.$r_id);
			}
        }
    }
} else {
    if (!is_user()) { URL::redirect(URL::index('Your_Account'), true); }
    if (!isset($review_id)) { URL::redirect(URL::index()); }
    list($dl_title, $dl_pick, $dl_active, $dl_submitter, $dl_score, $dl_votes) = $db->sql_ufetchrow("SELECT d.title, d.pick, d.active, d.submitter, SUM(r.score) AS score, COUNT(r.score) AS votes FROM ".$dl_prefix."_downloads d
    	LEFT JOIN ".$dl_prefix."_ratings r ON (r.lid = d.lid)
    	WHERE d.lid='$review_id' 
		GROUP BY d.lid, d.title, d.pick, d.active, d.submitter", SQL_NUM, __FILE__, __LINE__);
    if (!isset($dl_title)) { cpg_error('The specified download does not exist', 404); }
    if ($dl_active != 1 && !can_admin($module_name)) { cpg_error('The specified download is not active'); }
    list($prev_vote) = $db->sql_ufetchrow("SELECT COUNT(*) FROM ".$dl_prefix."_ratings 
		WHERE lid='$review_id' AND (ip='$userinfo[user_ip]' OR uid='$userinfo[user_id]')", SQL_NUM, __FILE__, __LINE__);
    if ($prev_vote) { cpg_error('You have already written a review for <strong>'.$dl_title.'</strong>', _TB_INFO, URL::index('&file=details&id='.$review_id, true, true)); }
    if ($dl_submitter == $userinfo['user_id']) { cpg_error('You cannot review your own download!'); }
    $pagetitle .= ' '._BC_DELIM.' Write a Review '._BC_DELIM.' '.$dl_title;
    $rating_info = get_rating($dl_score, $dl_votes);
    require_once('header.php');
    OpenTable();
    $options = array('-1'=>'Please select', 0=>'0: Rubbish', '0.5'=>'0.5: Rubbish', 1=>'1: Below Average', '1.5'=>'1.5: Below Average', 2=>'2: Average', '2.5'=>'2.5: Average', 3=>'3: Good', '3.5'=>'3.5: Good', 4=>'4: Very Good', '4.5'=>'4.5: Very Good', 5=>'5: Excellent');
    $score_array = '
    score_array[\'-1\'] = \''.dl_image('stars/0.png').'\';
    score_array[0] = \''.dl_image('stars/0.png').'\';
    score_array[0.5] = \''.dl_image('stars/1.png').'\';
    score_array[1] = \''.dl_image('stars/2.png').'\';
    score_array[1.5] = \''.dl_image('stars/3.png').'\';
    score_array[2] = \''.dl_image('stars/4.png').'\';
    score_array[2.5] = \''.dl_image('stars/5.png').'\';
    score_array[3] = \''.dl_image('stars/6.png').'\';
    score_array[3.5] = \''.dl_image('stars/7.png').'\';
    score_array[4] = \''.dl_image('stars/8.png').'\';
    score_array[4.5] = \''.dl_image('stars/9.png').'\';
    score_array[5] = \''.dl_image('stars/10.png').'\';';
    echo dl_detail_menu($review_id, $dl_title, $dl_pick, $dl_active, 3).'<br /><br />
       <span class="genmed"><strong>Write a Review'.(isset($_POST['preview_review']) ? ' '._BC_DELIM.' '._PREVIEW : '').'</strong></span><br /><br />';
	if (!empty($errors)) {
		echo '<div style="border: 1px dashed #660000; background: #fee; color: #660000; margin: 0px; padding: 6px; width: 64%;"><ul>';
		foreach ($errors as $error) {
			echo '<li>'.$error.'</li>';
		}
		echo '</ul></div><br /><br />';
	}
	echo $preview.'
       <script type="text/javascript">
         var score_array = new Array();
         '.$score_array.'
         function scorepreview() {
             document.images.score_preview.src=score_array[document.review_download.score.options[document.review_download.score.selectedIndex].value];
         }
       </script>
       <form action="'.URL::index('&amp;review='.$review_id).'" method="post" name="review_download" enctype="multipart/form-data" accept-charset="utf-8">
       <table border="0" cellpadding="3" cellspacing="1" width="75%" class="forumline">
        <tr>
          <td class="row1"><span class="genmed">Current Rating</span></td>
          <td class="row2">'.$rating_info['image'].' &nbsp;based on '.$dl_votes.' votes</td>
        </tr><tr>
          <td class="row1"><span class="genmed">Your Rating</span></td>
          <td class="row2">
           <select name="score" id="score" onclick="scorepreview()">';
    foreach ($options as $value => $title) {
        echo '
            <option value="'.$value.'"'.((isset($_POST['score']) && $value == $_POST['score']) ? ' selected="selected"' : '').'>'.$title.'</option>';
    }
    echo '
          </select>&nbsp;&nbsp;<img src="'.dl_image('stars/'.((isset($_POST['score']) && $_POST['score'] >= 0) ? intval($_POST['score']) : 0).'.png').'" alt="Your Rating" title="Your Rating" name="score_preview" /></td>
        </tr><tr>
          <td class="row1"><span class="genmed">Review Title</span></td>
          <td class="row2"><input type="text" name="title" id="title" size="66" maxlength="50"'.(isset($_POST['title']) ? ' value="'.htmlprepare($_POST['title']).'"' : '').' /></td>
        </tr><tr>
          <td class="row1"><span class="genmed">Comment</span></td>
          <td class="row2">'.bbcode_table('comment', 'review_download').'
           <div style="float: left;"><textarea name="comment" id="comment" cols="63" rows="10">'.(isset($_POST['comment']) ? htmlprepare($_POST['comment']) : '').'</textarea></div>
           <div style="float: left; margin-left: 5px;">'.smilies_table('inline', 'comment', 'review_download').'</div></td>
        </tr><tr>
          <td align="center" class="catbottom" colspan="2">
          <input type="hidden" name="date" value="'.time().'" />
          <input class="mainoption" type="submit" name="preview_review" value="'._PREVIEW.'" />'.(isset($_POST['preview_review']) ? '&nbsp;&nbsp;<input class="liteoption" type="submit" name="post_review" value="'._SUBMIT.'" />' : '').'</td>
        </tr>
       </table>
       </form>';
    CloseTable();
}