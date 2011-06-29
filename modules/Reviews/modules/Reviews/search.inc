<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Reviews/modules/Reviews/search.inc,v $
  $Revision: 9.5 $
  $Author: phoenix $
  $Date: 2010/11/04 01:10:52 $

***********************************************************************/

class Reviews_search
{
    var $title;
    var $options;
    var $result = array();
    var $result_count = 0;
    var $link_next;
    var $link_prev;
    
    // class constructor
    function Reviews_search() {
        $this->title = _ReviewsLANG;
        $this->options = false;
    }

    function search($search, $url_search, $limit=10, $page=0) {
        global $db, $prefix, $multilingual, $currentlang;
        $language = ($multilingual ? "AND language='$currentlang' OR language=''" : '');
        $first  = $page*$limit;
        $result = $db->sql_query("SELECT id, title, text, reviewer, score FROM ".$prefix."_reviews 
		WHERE (title LIKE '%$search%' OR text LIKE '%$search%') $language 
		ORDER BY date DESC 
		LIMIT $first,".($limit+1));
        $nrows  = $db->sql_numrows($result);
        $x = ($limit > $nrows) ? $nrows : $limit;
        $ret = '';
        if ($nrows>0) {
            while($x > 0) {
                list($id, $title, $text, $reviewer, $score) = $db->sql_fetchrow($ret);
                $item['html'] = '';
                $furl = URL::index('Reviews&amp;rop=showcontent&amp;id='.$id);
                $pages = count(explode( '<!--pagebreak-->', $text ));

                $item['title'] = $title;
                $item['url'] = $furl;
                $item['author'] = $reviewer;
                $item['image'] = 'images/folders.gif';
                $item['footer'] = _REVIEWSCORE . ' ' . ($score / 10) . '<br />(' . $pages.' '.(($pages == 1) ? _PAGE : _PAGES).')';

                if (is_admin()) {
                    $item['footer'] .= ' [ <a href="'.URL::index('Reviews&amp;rop=mod_review&amp;id='.$id).'">'._EDIT.'</a> | <a href="'.URL::index('Reviews&amp;rop=del_review&amp;id_del='.$id).'">'._DELETE.'</a> ]';
                }
                
                $this->add_result($item);
                unset($item);

                $x--;
            }
        } else {
        }
        $db->sql_freeresult($result);

        if ($page>0) {
            $this->link_prev = '<a href="'.URL::index('Reviews&amp;page='.($page-1)."&amp;search=$url_search").'"><strong>'._PREVMATCHES.'</strong></a>';
        }
        if ($nrows>$limit) {
            $this->link_next = '<a href="'.URL::index('Reviews&amp;page='.($page+1)."&amp;search=$url_search").'"><strong>'._NEXTMATCHES.'</strong></a>';
        }
        return;
    }

    function add_result($resultarray) {
        $this->result[$this->result_count++] = $resultarray;
    }
}
