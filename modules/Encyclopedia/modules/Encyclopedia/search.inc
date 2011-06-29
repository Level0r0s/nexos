<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Encyclopedia/modules/Encyclopedia/search.inc,v $
  $Revision: 9.1 $
  $Author: djmaze $
  $Date: 2005/01/13 04:02:52 $

***********************************************************************/

class Encyclopedia_search
{
    var $title;
    var $options;
	var $result = array();
	var $result_count = 0;
	var $link_next;
	var $link_prev;

    // class constructor
    function Encyclopedia_search() {
        $this->title = _ENCYCLOPEDIA;
    }

    function search($search, $url_search, $limit=10, $page=0) {
        global $db, $prefix, $multilingual, $currentlang;
        $first = $page*$limit;

        $ieid   = (isset($_POST['eid']) ? intval($_POST['eid']) : intval($_GET['eid']));
        $eid = ($ieid > 0) ? "t.eid=$ieid" : '1=1';

        $q = "SELECT e.eid, e.title, e.description, t.counter FROM ".$prefix."_encyclopedia_text t LEFT JOIN ".$prefix."_encyclopedia e ON t.eid = e.eid WHERE (active=1)";

        if ($search != '') $q .= " AND (e.title LIKE '%$search%' OR e.description LIKE '%$search%' OR t.text LIKE '%$search%')";
        $q .= " ORDER BY e.eid DESC LIMIT $first,".($limit+1);
        $result = $db->sql_query($q, false, __FILE__, __LINE__);
        $nrows  = $db->sql_numrows($result);

        $x = ($limit > $nrows) ? $nrows : $limit;
        if ($nrows > 0) {
            while($x > 0) {
                list($eeid, $etitle, $edescription, $tcounter) = $db->sql_fetchrow($result);
                $furl = getlink("Encyclopedia&amp;op=viewarticle&amp;eid=" . $eeid);
				$item['title'] = $etitle;
				$item['short_text'] = substr(strip_tags($edescription), 0, 256);
				$item['image'] = 'images/folders.gif';
				$item['url'] = $furl;
				$item['footer'] = '('.$tcounter.' '._READS.')';

				$this->add_result($item);
				unset($item);

                $x--;
            }
        }

        $db->sql_fetchrow($result);

        if ($page>0) {
            $this->link_prev = '<a href="'.getlink('Search&amp;page='.($page-1)."&amp;sec=$iseq&amp;search=$url_search&amp;mod=Encyclopedia").'"><strong>'._PREVMATCHES.' '._IN.' '._ENCYCLOPEDIA.'</strong></a>';
        }
        if ($nrows>$limit) {
            $this->link_next = '<a href="'.getlink('Search&amp;page='.($page+1)."&amp;sec=$isec&amp;search=$url_search&amp;mod=Encyclopedia").'"><strong>'._NEXTMATCHES.' '._IN.' '._ENCYCLOPEDIA.'</strong></a>';
        }
    }

	function add_result($resultarray) {
		$this->result[$this->result_count++] = $resultarray;
	}
}
