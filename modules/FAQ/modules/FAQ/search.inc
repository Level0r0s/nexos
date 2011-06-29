<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/FAQ/modules/FAQ/search.inc,v $
  $Revision: 9.4 $
  $Author: phoenix $
  $Date: 2010/11/08 22:54:27 $

***********************************************************************/

class FAQ_search
{
    var $title;
    var $options;
	var $result = array();
	var $result_count = 0;
	var $link_next;
	var $link_prev;

    // class constructor
    function FAQ_search() {
        global $db, $prefix;
        $cats[0] = _ALL;
        $catlist = $db->sql_query("SELECT id_cat, categories FROM ".$prefix."_faqcategories");
        while (list($id, $title) = $db->sql_fetchrow($catlist)) {
            $cats[$id] = $title;
        }
        $db->sql_freeresult($catlist);

        $this->title = _FAQLANG;
        $this->options = _CATEGORY.' '.select_box('faqcat', 0, $cats);
    }

    function search($search, $url_search, $limit=10, $page=0) {
        global $db, $prefix, $multilingual, $currentlang;
        $cat = isset($_POST['faqcat']) ? intval($_POST['faqcat']) : 0;
        $search_id = ($cat == 0) ? '' : "id_cat='$cat' AND";
        $result = $db->sql_query("SELECT * FROM ".$prefix."_faqanswer 
			WHERE $search_id (question LIKE '%$search%' OR answer LIKE '%$search%') 
			LIMIT $limit");
        while (list($qa_id, $qa_cat, $qa_question, $qa_answer) = $db->sql_fetchrow($result)) {
			$item['html'] = '';
			$item['url'] = URL::index('FAQ&amp;cat='.$qa_cat.'#'.$qa_id);
			$item['title'] = $qa_question;
			$item['short_text'] = trim(strip_tags($qa_answer));

//            $ret .= '<tr><td class="row1" colspan="2"><span class="gen"><a href="'.URL::index('&amp;cat='.$qa_cat.'#'.$qa_id).'">'.$qa_question.'</a></span><br />
//            &nbsp;&nbsp;&nbsp;&nbsp;<b>'._PREVIEW.':</b> <i>'.substr($qa_answer, 0, 130).' ...</i></td></tr>';

			$this->add_result($item);
			unset($item);
        }
		$db->sql_freeresult($result);
    }

	function add_result($resultarray) {
		$this->result[$this->result_count++] = $resultarray;
	}
}
