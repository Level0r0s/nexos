<?php
/*********************************************
  CPG-Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2006 by CPG Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Wiki/modules/Wiki/admin/index.inc,v $
  $Revision: 1.5 $
  $Author: phoenix $
  $Date: 2010/11/17 00:41:47 $
***********************************************************************/
if (!defined('ADMIN_PAGES')) { die('You do not have permission to access this file'); }
if (!can_admin($op)) { die('Access Denied'); }
$pagetitle .= ' '._BC_DELIM.' Wiki';
$module_name = $op;
$mode = isset($_POST['mode']) ? $_POST['mode'] : (isset($_GET['mode']) ? $_GET['mode']:'');
require_once("modules/$module_name/inc/functions.php");
require_once('header.php');

if (empty($mode) && empty($_GET['id'])) {
	$list = $db->sql_ufetchrowset('SELECT * FROM '.$module_prefix.'_pages');
	if (isset($list) && ($list != '')) {
		OpenTable();
		foreach ($list as $row) {
			echo $row['title'].'<br />';
		}
		CloseTable();
	}
}
if (isset($_GET['id'])) {
    if (isset($_POST['delete'])) {
        $db->sql_query("DELETE FROM $module_prefix"."_pages_wait WHERE id=".intval($_GET['id']));
        URL::redirect(URL::admin());
    }
    $page = $db->sql_ufetchrow("SELECT p.*, u.username as author FROM ".$module_prefix."_pages_wait p
    LEFT JOIN $user_prefix"."_users u ON (u.user_id = p.user_id) WHERE p.id=".intval($_GET['id']), SQL_ASSOC);
    if (!$page || empty($page['id'])) { cpg_error('Page doesn\'t exist'); }
    if (isset($_POST['approve'])) {
        if ($page['page_id'] > 0) {
            $db->sql_query('UPDATE '.$module_prefix."_pages SET"
            .' parent_id='.$page['parent_id']
            .", title='".Fix_Quotes($page['title'])
            ."', version=version+1"
            .', supercede='.time()
            .', upd_user_id='.$page['user_id']
            .", upd_author='".Fix_Quotes($page['author'])
            ."', comment='".Fix_Quotes($page['comment'])
            ."', body='".Fix_Quotes($page['body'])
            ."' WHERE id=$page[page_id]");
        } else {
            $pos = $db->sql_count($module_prefix."_pages", "parent_id=".$page['parent_id']);
            $db->sql_query('INSERT INTO '.$module_prefix.'_pages (parent_id, active, pos, title, time, user_id, author, comment, body) VALUES ('
            .$page['parent_id'].', 1, '.($pos+1).", '"
            .Fix_Quotes($page['title'])."', "
            .time().', '
            .$page['user_id'].", '"
            .Fix_Quotes($page['author'])."', '"
            .Fix_Quotes($page['comment'])."', '"
            .Fix_Quotes($page['body'])."')");
        }
        $db->sql_query("DELETE FROM $module_prefix"."_pages_wait WHERE id=".$page['id']);
        URL::redirect(URL::admin());
    }
    $showblocks=0;
    OpenTable();
    if ($page['page_id'] > 0) {
        $cur_page = $db->sql_ufetchrow("SELECT title, author, comment, body FROM ".$module_prefix."_pages WHERE id=$page[page_id]", SQL_ASSOC);
        require_once("modules/$module_name/inc/DifferenceEngine.php");
        $df  = new Diff(split("\n",htmlspecialchars($cur_page['body'])),
                    split("\n",htmlspecialchars($page['body'])));
        $tdf = new TableDiffFormatter();

		echo '<table class="forumline" width="100%">
		 <tr>
          <th colspan="2">Current page started by '.$cur_page['author'].'</th>
          <th colspan="2">Modifications by '.$page['author'].'</th>
		 </tr>
		  '.$tdf->format($df).'
         <tr>
		  <td colspan="2" width="50%" valign="top">
           <div class="newsarticle"><h1>'.$cur_page['title'].'</h1>'.$cur_page['comment'].'<p>'.$cur_page['body'].'</p></div>
          </td>
          <td colspan="2" width="50%" valign="top">
           <div class="newsarticle"><h1>'.$page['title'].'</h1>'.$page['comment'].'<p>'.$page['body'].'</p></div>
          </td>
          </tr>
        </table>';
    } else {
        echo '<div class="newsarticle"><h1>'.$page['title'].'</h1>'.$page['comment'].'<p>'.$page['body'].'</p></div>';
    }
    echo '<form method="post" action="'.URL::admin('&amp;id='.$page['id']).'">
    <input type="submit" name="approve" value="Approve" />
    <input type="submit" name="delete" value="Delete" />
    </form>';
	CloseTable();
}
if ($mode == 'pending') {
    $result = $db->sql_query("SELECT p.id, p.page_id, p.title, u.username FROM ".$module_prefix."_pages_wait p
    LEFT JOIN $user_prefix"."_users u ON (u.user_id = p.user_id)");
    if ($db->sql_numrows($result) > 0) {
        echo '<table class="forumline" width="100%"><tr><th>Title</th><th>Author</th><th>Type</th></tr>';
        while ($row = $db->sql_fetchrow($result)) {
            if (empty($row['title'])) { $row['title'] = '[no title]'; }
            echo '<tr>
             <td class="row1"><a href="'.URL::admin('&amp;id='.$row['id']).'">'.$row['title'].'</a></td>
             <td class="row1">'.$row['username'].'</td>
             <td class="row1">'.($row['page_id'] ? 'Update' : 'New').'</td>
            </tr>';
        }
        echo '</table>';
    }
}
