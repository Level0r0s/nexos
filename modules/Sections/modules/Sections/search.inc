<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Sections/modules/Sections/search.inc,v $
  $Revision: 9.1 $
  $Author: djmaze $
  $Date: 2005/01/13 04:02:53 $

***********************************************************************/

class Sections_search
{
    var $title;
    var $options;
	var $result = array();
	var $result_count = 0;
	var $link_next;
	var $link_prev;

    // class constructor
    function Sections_search() {
        global $db, $prefix;
        $secs[0] = _ALL;
        $seclist = $db->sql_query("SELECT secid, secname FROM ".$prefix."_sections ORDER BY secname", false, __FILE__, __LINE__);
        while (list($id, $title) = $db->sql_fetchrow($seclist)) {
            $secs[$id] = $title;
        }
        $db->sql_freeresult($seclist);

        $this->title = _SECTIONS;
        $this->options = '<table border="0"><tr><td>'._CATEGORY.'</td><td>'.select_box('section', 0, $secs).'</td></tr>'
            .'</table>';
    }

    function search($search, $url_search, $limit=10, $page=0) {
        global $db, $prefix, $multilingual, $currentlang;
        $first = $page*$limit;

        $isec   = (isset($_POST['sec']) ? intval($_POST['sec']) : intval($_GET['sec']));
        $sec = ($isec > 0) ? "secid=$iseq" : '1=1';

        $q  = "SELECT s.artid, s.secid, s.title, s.content, s.counter, t.secname FROM ".$prefix."_seccont s LEFT JOIN ".$prefix."_sections t ON s.secid = t.secid WHERE $sec";

        if ($multilingual) $q .= " AND (s.slanguage='$currentlang' OR s.slanguage='')";
        if ($search != '') $q .= " AND (s.title LIKE '%$search%' OR s.content LIKE '%$search%')";
        $q .= " ORDER BY s.secid DESC LIMIT $first,".($limit+1);
        $result = $db->sql_query($q, false, __FILE__, __LINE__);
        $nrows  = $db->sql_numrows($result);

        $x = ($limit > $nrows) ? $nrows : $limit;
        if ($nrows > 0) {
            while($x > 0) {
                list($artid, $secid, $title, $content, $counter, $secname) = $db->sql_fetchrow($result);
				$item['html'] = '';
                $furl = getlink("Sections&amp;op=viewarticle&amp;artid=" . $artid);
				$item['title'] = $title;
				$item['short_text'] = substr(strip_tags($content), 0, 256);
				$item['image'] = 'images/folders.gif';
				$item['url'] = $furl;
				$item['footer'] = '('.$counter.' '._READS.')';

				$this->add_result($item);
				unset($item);

                $x--;
            }
        }

        $db->sql_fetchrow($result);

        if ($page>0) {
            $this->link_prev = '<a href="'.getlink('Search&amp;page='.($page-1)."&amp;sec=$iseq&amp;search=$url_search&amp;mod=Sections").'"><strong>'._PREVMATCHES.' '._IN.' '._SECTIONS.'</strong></a>';
        }
        if ($nrows>$limit) {
            $this->link_next = '<a href="'.getlink('Search&amp;page='.($page+1)."&amp;sec=$isec&amp;search=$url_search&amp;mod=Sections").'"><strong>'._NEXTMATCHES.' '._IN.' '._SECTIONS.'</strong></a>';
        }
    }

	function add_result($resultarray) {
		$this->result[$this->result_count++] = $resultarray;
	}
}
