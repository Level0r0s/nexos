<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | blck-CPG-center-scroll-Random_pictures.php                        |
  |            - NexOS Administration Backend file                    |
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
// $length=$CONFIG['thumbcols']; //number of thumbs
$limit = 25; //number of thumbs
$title_length = 12; // maximum length of title under pictures, 20 is default
// END USER DEFINABLES
$result = $db->sql_query("SELECT COUNT(*) FROM ".$cpg_prefix."pictures as p INNER JOIN ".$cpg_prefix."albums AS a ON (p.aid = a.aid AND ".VIS_GROUPS.") WHERE approved=1 GROUP BY pid");
$nbEnr = $db->sql_fetchrow($result);
$pic_count = $nbEnr[0];
$total_count = $granularity = $color_gran = $random_num_set = $thumb_title = '';
// if we have more than 1000 pictures, we limit the number of picture returned
// by the SELECT statement as ORDER BY RAND() is time consuming
if ($pic_count > 1000) {
	$result = $db->sql_query("SELECT COUNT(*) from " . $cpg_prefix . "pictures WHERE approved = 1");
	$nbEnr = $db->sql_fetchrow($result);
	$total_count = $nbEnr[0]; 
	$db->sql_freeresult($result);
	$granularity = floor($total_count / 1000);
	$cor_gran = ceil($total_count / $pic_count);
	srand(time());
	for ($i = 1; $i <= $cor_gran; $i++) $random_num_set = rand(0, $granularity) . ', ';
	$random_num_set = substr($random_num_set, 0, -2);
	$result = $db->sql_query("SELECT pid, filepath, filename, p.aid, p.title FROM ".$cpg_prefix."pictures AS p INNER JOIN ".$cpg_prefix."albums AS a ON (p.aid = a.aid AND ".VIS_GROUPS.") WHERE randpos IN ($random_num_set) AND approved=1 GROUP BY pid ORDER BY RAND() DESC LIMIT $limit");
} else {
	$result = $db->sql_query("SELECT pid, filepath, filename, p.aid, p.title FROM ".$cpg_prefix."pictures AS p INNER JOIN ".$cpg_prefix."albums AS a ON (p.aid = a.aid AND ".VIS_GROUPS.") WHERE approved=1 GROUP BY pid ORDER BY RAND() DESC LIMIT $limit");
}
// marquee info at http://www.faqs.org/docs/htmltut/_MARQUEE.html
$content = '<div style="text-align:center;"><a name="scroller"></a><marquee loop="0" behavior="scroll" direction="left" height="125" width="80%" scrollamount="2" scrolldelay="1" onmouseover=\'this.stop()\' onmouseout=\'this.start()\'>';
$content .= '<table width="100%" cols="' . $limit . '" border="0" cellpadding="0" cellspacing="7"><tr align="center">';
while ($row = $db->sql_fetchrow($result)) {
	if ($CONFIG['seo_alts'] == 0) {
		$thumb_title = $row['filename'];
	} else {
		if ($row['title'] != '') {
			$thumb_title = $row['title'];
		} else {
			$thumb_title = substr($row['filename'], 0, -4);
		} 
	} 
	$content .= '<td align="center" valign="baseline"><a href="' .URL::index("$cpg_dir&amp;file=displayimage&amp;album=".$row['aid']."&amp;pid=" . $row['pid']). '"><img src="' . get_pic_url($row, 'thumb') . '" alt="' . $thumb_title . '" title="' . $thumb_title . '" /><br />' . truncate_stringblocks($thumb_title, $title_length) . '</a>&nbsp;&nbsp;</td>';
} 
$content .= '</tr></table></marquee></div><p style="text-align:center;"><table width="100%" border="0" cellpadding="0" cellspacing="0"><tr align="center"><td valign="baseline"><a href="' . URL::index("$cpg_dir") . '">' . _coppermineLANG . '</a><br /></td></tr></table></p>';
