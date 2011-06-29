<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2009 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/modules/Topics/index.php,v $
  $Revision: 9.16 $
  $Author: djmaze $
  $Date: 2010/11/11 23:33:52 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }
$pagetitle .= _TopicsLANG;

global $bgcolor2, $bgcolor3, $CPG_SESS, $db, $prefix;

$result = $db->sql_query("SELECT t.topicid, t.topicimage, t.topictext, count(s.sid) AS stories, SUM(s.counter) AS readcount
   FROM {$prefix}_topics t
   LEFT JOIN {$prefix}_stories s ON (s.topic = t.topicid)
   GROUP BY t.topicid, t.topicimage, t.topictext
   ORDER BY t.topictext");

if ($db->sql_numrows($result) > 0) {
    require_once('header.php');

    $cpgtpl->assign_vars(array(
    'BGCOLOR2'      => $bgcolor2,
    'BGCOLOR3'      => $bgcolor3,
    'NO_STORIES'    => sprintf(_ERROR_NONE_TO_DISPLAY, strtolower(_ARTICLES))
    ));

    while ($row = $db->sql_fetchrow($result)) {
        $topicid = $row['topicid'];
        $topicimage = $row['topicimage'];
        $topictext = $row['topictext'];
        $t_image = (file_exists('themes/'.$CPG_SESS['theme'].'/images/topics/'.$topicimage) ? 'themes/'.$CPG_SESS['theme'].'/' : '').'images/topics/'.$topicimage;

        $cpgtpl->assign_block_vars('topic', array(
        'URL'           => URL::index('News&amp;topic='.$topicid),
        'IMAGE'         => $t_image,
        'TITLE'         => $topictext,
        'B_STORIES'     => $row['stories'] > 0,
        'TOTAL_NEWS'    => $row['stories'],
        'TOTAL_READS'   => isset($row['readcount'])? $row['readcount'] : 0,
        'B_MORE'        => $row['stories'] > 10,
        ));

        if ($row['stories'] > 0) {
            $result2 = $db->sql_query('SELECT s.sid, s.catid, s.title, c.title AS cat_title FROM '.$prefix.'_stories s
         LEFT JOIN '.$prefix."_stories_cat c ON s.catid=c.catid
         WHERE s.topic='$topicid' ORDER BY s.sid DESC LIMIT 10");

            while ($row2 = $db->sql_fetchrow($result2)) {
                $cpgtpl->assign_block_vars('topic.news_story', array(
                'B_IN_CATEGORY'   => $row2['catid'] > 0,
                'U_CATEGORY'      => URL::index('News&amp;catid='.$row2['catid']),
                'CATEGORY_TITLE'  => $row2['cat_title'],
                'URL'             => URL::index('News&amp;file=article&amp;sid='.$row2['sid']),
                'TITLE'           => $row2['title']
                ));
            }

        }

    }

    $cpgtpl->set_filenames(array('body' => 'topics/index.html'));
    $cpgtpl->display('body');
} else {
    cpg_error(sprintf(_ERROR_NONE_TO_DISPLAY, strtolower(_TopicsLANG)));
}
