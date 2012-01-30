<?php 
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 by Myndworx Asylum                          |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |  
  +-------------------------------------------------------------------+
  | block-CPG-center-scroll-Top_rated_pictures.php                    |
  |            - NexOS Administration Backend file                    |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org                                  |  
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
$limit = 10; //number of pictures
$content = '';
// marquee info at http://www.faqs.org/docs/htmltut/_MARQUEE.html
$content = '<p style="text-align:center;"><a name="scroller"></a><marquee loop="1" behavior="scroll" direction="left" height="135" width="80%" scrollamount="1" scrolldelay="1" onmouseover=\'this.stop()\' onmouseout=\'this.start()\'>';
$content .= '<table width="100%" cols="' . $length . '" border="0" cellpadding="0" cellspacing="7"><tr>'; // END USER DEFINABLES
// modified by DJMaze
$result = $db->sql_query("SELECT pid, filepath, filename, p.aid, pic_rating, p.votes, p.title FROM ".$cpg_prefix."pictures AS p INNER JOIN ".$cpg_prefix."albums AS a ON (p.aid = a.aid AND ".VIS_GROUPS.") WHERE approved=1 AND p.votes >= '{$CONFIG['min_votes_for_rating']}' GROUP BY pid ORDER BY ROUND((pic_rating+1)/2000) DESC, p.votes DESC LIMIT $limit");
$pic = 0;
$theme_prefix = $caption = $thumb_title = '';
while ($row = $db->sql_fetchrow($result)) {
	if (defined('THEME_HAS_RATING_GRAPHICS')) {
		$theme_prefix = $CONFIG['theme'] . '/';
	} else {
		$theme_prefix = '';
	} 
	$caption = "<img src=\"" . $CPG_M_DIR . "/" . $theme_prefix . "images/rating" . round($row['pic_rating'] / 2000) . ".gif\" align=\"center\" alt=\"\" />" . "<br />" . round($row['pic_rating'] / 2000, 2) . "/5 ";
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
	$content .= '<td align="center" valign="baseline"><a href="' . URL::index($cpg_dir . '&amp;file=displayimage&amp;meta=toprated&amp;cat=0&amp;pos=' . $pic) . '"><img src="' . get_pic_url($row, 'thumb') . '" alt="' . $thumb_title . '" title="' . $thumb_title . '" /><br />' . $caption . '</a>&nbsp;&nbsp;</td>';
	$pic++;
} 
$content .= '</tr></table></marquee><table width="100%" border="0" cellpadding="0" cellspacing="0"><tr align="center"><td valign="baseline"><a href="' . URL::index($cpg_dir) . '">' . _coppermineLANG . '</a><br /></td></tr></table></p>';
