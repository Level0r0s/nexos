<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Encyclopedia/modules/Encyclopedia/search.php,v $
  $Revision: 9.1 $
  $Author: djmaze $
  $Date: 2005/01/13 04:02:52 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

$pagetitle .= _ENCYCLOPEDIA.' '._BC_DELIM.' '._SEARCHRESULTS;
require_once('header.php');

$eid = isset($_POST['eid']) ? intval($_POST['eid']) : 0;
if (isset($_POST['query']) && !empty($_POST['query']) && $eid > 0) {
    OpenTable();
    echo '<center><b>'._SEARCHRESULTSFOR.' <i>'.htmlprepare($_POST['query']).'</i></b></center><br /><br /><br />
    <i><b>'._RESULTSINTERMTITLE.'</b></i><br /><br />';
    $query = Fix_Quotes($_POST['query'], 1);
    $result = $db->sql_query("SELECT tid, title FROM ".$prefix."_encyclopedia_text WHERE title LIKE '%$query%'", false, __FILE__, __LINE__);
    if ($db->sql_numrows($result) < 1) {
        echo _NORESULTSTITLE;
    } else while ($row = $db->sql_fetchrow($result)) {
        $tid = $row['tid'];
        $title = $row['title'];
        echo "<strong><big>&middot;</big></strong>&nbsp;&nbsp;<a href=\"".getlink("&amp;op=content&amp;tid=$tid")."\">$title</a><br />";
    }
    $result = $db->sql_query("SELECT tid, title FROM ".$prefix."_encyclopedia_text WHERE text LIKE '%$query%'", false, __FILE__, __LINE__);
    echo "<br /><br /><i><b>"._RESULTSINTERMTEXT."</b></i><br /><br />";
    if ($db->sql_numrows($result) < 1) {
        echo _NORESULTSTEXT;
    } else while ($row = $db->sql_fetchrow($result)) {
        $tid = $row['tid'];
        $title = $row['title'];
        echo "<strong><big>&middot;</big></strong>&nbsp;&nbsp;<a href=\"".getlink("&amp;op=content&amp;tid=$tid&amp;query=$query")."\">$title</a><br />";
    }
    echo "<br /><br />"
    ."<center><form action=\"".getlink("&file=search")."\" method=\"post\">"
    ."<input type=\"text\" size=\"20\" name=\"query\">&nbsp;&nbsp;"
    ."<input type=\"hidden\" name=\"eid\" value=\"$eid\">"
    ."<input type=\"submit\" value=\""._SEARCH."\">"
    ."</form><br /><br />"
    ."[ <a href=\"".getlink()."\">"._RETURNTO." "._ENCYCLOPEDIA."</a> ]<br /><br />"
    ._GOBACK."</center>";
    CloseTable();
} elseif (isset($_POST['query']) && !empty($_POST['query']) && $eid > 0) {
    $result2 = $db->sql_query("SELECT title FROM ".$prefix."_encyclopedia WHERE eid='$eid'", false, __FILE__, __LINE__);
    $row = $db->sql_fetchrow($result2);
    OpenTable();
    echo '<center><b>'._SEARCHRESULTSFOR.' <i>'.htmlprepare($_POST['query']).'</i></b></center><br /><br /><br />
    <i><b>'._RESULTSINTERMTITLE.'</b></i><br /><br />';
    $query = Fix_Quotes($_POST['query'], 1);
    $result = $db->sql_query("SELECT tid, title FROM ".$prefix."_encyclopedia_text WHERE eid='$eid' AND title LIKE '%$query%'", false, __FILE__, __LINE__);
    if ($db->sql_numrows($result) < 1) {
        echo _NORESULTSTITLE;
    } else while ($row = $db->sql_fetchrow($result)) {
        $tid = $row[tid];
        $title = $row[title];
        echo "<strong><big>&middot;</big></strong>&nbsp;&nbsp;<a href=\"".getlink("&amp;op=content&amp;tid=$tid")."\">$title</a><br />";
    }
    $result = $db->sql_query("SELECT tid, title FROM ".$prefix."_encyclopedia_text WHERE eid='$eid' AND text LIKE '%$query%'", false, __FILE__, __LINE__);
    echo "<br /><br /><i><b>"._RESULTSINTERMTEXT."</b></i><br /><br />";
    if ($db->sql_numrows($result) < 1) {
        echo _NORESULTSTEXT;
    } else while ($row = $db->sql_fetchrow($result)) {
        $tid = $row['tid'];
        $title = $row['title'];
        echo "<strong><big>&middot;</big></strong>&nbsp;&nbsp;<a href=\"".getlink("&amp;op=content&amp;tid=$tid&amp;query=$query")."\">$title</a><br />";
    }
    echo "<br /><br />"
    ."<center><form action=\"".getlink("&file=search")."\" method=\"post\">"
    ."<input type=\"text\" size=\"20\" name=\"query\">&nbsp;&nbsp;"
    ."<input type=\"hidden\" name=\"eid\" value=\"$eid\">"
    ."<input type=\"submit\" value=\""._SEARCH."\">"
    ."</form><br /><br />"
    ."[ <a href=\"".getlink("&op=list_content&eid=$eid")."\">"._RETURNTO." $ency_title</a> ]<br /><br />"
    ._GOBACK."</center>";
    CloseTable();
} else {
    OpenTable();
    echo "<center>"._SEARCHNOTCOMPLETE."<br /><br /><br />"
    ."<center><form action=\"".getlink("&file=search")."\" method=\"post\">"
    ."<input type=\"text\" size=\"20\" name=\"query\">&nbsp;&nbsp;"
    ."<input type=\"hidden\" name=\"eid\" value=\"$eid\">"
    ."<input type=\"submit\" value=\""._SEARCH."\">"
    ."</form><br /><br />"
    ._GOBACK."</center>";
    CloseTable();
}