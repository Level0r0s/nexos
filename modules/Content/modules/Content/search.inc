<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Content/modules/Content/search.inc,v $
  $Revision: 9.1 $
  $Author: djmaze $
  $Date: 2005/01/13 04:02:51 $

***********************************************************************/

class Content_search
{
    var $title;
    var $options;
    var $result = array();
    var $result_count = 0; // index
    var $link_next;
    var $link_prev;

    // class constructor
    function Content_search() {
        global $db, $prefix;
        $cats[0] = _ALL;
        $catlist = $db->sql_query("SELECT cid, title FROM ".$prefix."_pages_categories ORDER BY title", false, __FILE__, __LINE__);
        while (list($id, $title) = $db->sql_fetchrow($catlist)) {
            $cats[$id] = $title;
        }
        $db->sql_freeresult($catlist);

        $this->title = _CONTENT;
        $this->options = '<table border="0">'
            .'<tr><td>'._CATEGORY.'</td><td>'.select_box('content_category', 0, $cats).'</td></tr>'
            .'</table>';
    }

    function search($search, $url_search, $limit=10, $page=0, $parameters = false) {
        global $db, $prefix;
        get_lang("Content", false, false, true);
        $first = $page * $limit;

        $cat = (isset($_POST['content_category']) ? intval($_POST['content_category']) : intval($_GET['content_category']));

        $sql = "SELECT pid, cid, title, UNIX_TIMESTAMP(date) AS time, LEFT(text, 256) AS short_text FROM " . $prefix . "_pages WHERE active = 1";
        if ($cat != 0) $sql .= " AND cid=$cat";
        if ($search != '') $sql .= " AND (title LIKE '%$search%' OR page_header LIKE '%$search%' OR page_footer LIKE '%$search%' OR page_footer LIKE '%$search%' OR signature LIKE '%$search%' OR text LIKE '$search')";
        $sql .= " ORDER BY date DESC LIMIT $first," . ($limit + 1) . "";

        $res = $db->sql_query($sql,false, __FILE__, __LINE__);
        $nrows  = $db->sql_numrows($res);

        $x = ($limit > $nrows) ? $nrows : $limit;

        if ($nrows > 0) {
            while($x > 0) {
                list($pid, $cid, $title, $time, $short_text) = $db->sql_fetchrow($res);
                $furl = getlink("Content&amp;pid=$pid");
                $datetime = formatDateTime($time, _DATESTRING3);

                $item['title'] = $title;
                $item['url'] = $furl;
                $item['author'] = '';
                $item['date'] = $time;
                $item['short_text'] = trim(strip_tags($short_text));
                $item['image'] = 'images/folders.gif';
//                $item['html'] = "<img src=\"images/folders.gif\" border=\"0\" alt=\"\" />".
//                        "&nbsp;<font class=\"option\">".
//                        "<strong><a href=\"$furl\">$title</a></strong></font><br />".
//                        _PUBLISHEDON . " $datetime <br /><br />";

                $this->add_result($item);
                unset($item);

                $x--;
            }
        } else {
            // else do nothing. let Search talk about no results.
        }

        $db->sql_freeresult($res);

        if ($page > 0) {
            $this->link_prev = '<a href="'.getlink('Search&amp;page='.($page - 1)."&amp;cat=$cat&amp;search=$url_search&amp;mod=Content").'"><strong>'._PREVMATCHES.' '._IN.' '._CONTENT.'</strong></a>';
        }

        if ($nrows > $limit) {
            $this->link_next = '<a href="'.getlink('Search&amp;page='.($page + 1)."&amp;cat=$cat&amp;search=$url_search&amp;mod=Content").'"><strong>'._NEXTMATCHES.' '._IN.' '._CONTENT.'</strong></a>';
        }

        return true;
    }
    
    function add_result($resultarray) {
        $this->result[$this->result_count++] = $resultarray;
    }
}
