<?php 
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/blocks/block-CPG-Top_rate_pictures.php,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 00:56:59 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
********************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $prefix, $db, $CONFIG, $cpg_dir;

$cpg_dir = 'coppermine';

if (!is_active($cpg_dir)) {
	$content = 'ERROR';
	return trigger_error($cpg_dir.' module is inactive', E_USER_WARNING);
}

$cpg_block = true;
require("modules/" . $cpg_dir . "/include/load.inc");
$cpg_block = false;
// $limit=$CONFIG['thumbcols']; //number of thumbs
$limit = 5; //number of pictures
// END USER DEFINABLES
$content = '';
$result = $db->sql_query("SELECT pid, filepath, filename, p.aid, pic_rating, p.votes, p.title  FROM ".$cpg_prefix."pictures AS p INNER JOIN ".$cpg_prefix."albums AS a ON (p.aid = a.aid AND ".VIS_GROUPS.") WHERE approved=1 AND p.votes >= '{$CONFIG['min_votes_for_rating']}' GROUP BY pid ORDER BY ROUND((pic_rating+1)/2000) DESC, p.votes DESC LIMIT $limit");
$pic = 0;
$theme_prefix = $caption = $thumb_title = '';
while ($row = $db->sql_fetchrow($result)) {
	if (defined('THEME_HAS_RATING_GRAPHICS')) {
		$theme_prefix = $CONFIG['theme'] . '/';
	} else {
		$theme_prefix = '';
	}
	// $caption = '<img src="' . $CPG_M_DIR . '/' . $theme_prefix . 'images/rating' . round($row["pic_rating"] / 2000) . '.gif" style=\"text-align:center;" alt=\"\" />' . '<br />' . sprintf(N_VOTES, $row[\'votes\']).'<br />';
	$caption = "<img src=\"" . $CPG_M_DIR . "/" . $theme_prefix . "images/rating" . round($row['pic_rating'] / 2000) . ".gif\" style=\"text-align:center;\" alt=\"\" />" . "<br />" . round($row['pic_rating'] / 2000, 2) . "/5 ";
	$caption .= sprintf(N_VOTES, $row['votes']);
	$caption .= "<br />";
	if ($CONFIG['seo_alts'] == 0) {
		$thumb_title = $row['filename'];
	} else {
		if ($row['title'] != '') {
			$thumb_title = $row['title'];
		} else {
			$thumb_title = substr($row['filename'], 0, -4);
		}
	}
	$content .= '<p style="text-align:center;"><a href="' . URL::index($cpg_dir . '&amp;file=displayimage&amp;meta=toprated&amp;cat=0&amp;pos=' . $pic) . '"><img src="' . get_pic_url($row, 'thumb') . '" alt="' . $thumb_title . '" title="' . $thumb_title . '" /><br />' . $caption . '</a></p>';
	$pic++;
}
$content .= '<p style="text-align:center;"><a href = "' . URL::index($cpg_dir) . '"> Go to gallery </a> </p>';
