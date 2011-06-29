<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Blogs/modules/Blogs/index.php,v $
  $Revision: 9.7 $
  $Author: nanocaiordo $
  $Date: 2007/12/17 12:04:01 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }

/* Configuration */
$cfg_comment_limit = 1350; // maximum length in characters for a comment | set to 0 for no limit
$cfg_comment_anon = true; // allow anonymous users to post comments?
/* END Configuration */

$pagetitle .= _B_TITLE;
require_once('includes/nbbcode.php');
require_once('modules/Your_Account/functions.php');

$username = $userinfo['username'];
$mode = (isset($_POST['mode'])&& $_POST['mode']!='') ? $_POST['mode'] : (isset($_GET['mode'])&& $_GET['mode']!='') ? $_GET['mode'] : '';

if (isset($_POST['post_entry']) && is_user()) {
    $blog_title = Fix_Quotes(check_words($_POST['title']), 1);
    $blog_text = Fix_Quotes(check_words($_POST['bodytext']), 1);
    $blog_private = intval($_POST['private']);
    if (strlen($blog_title) < 3) {
        cpg_error(sprintf(_ERROR_NOT_SET, 'Blog title'));
    }
    if (strlen($blog_text) < 5) {
        cpg_error(sprintf(_ERROR_NOT_SET, 'Blog text'));
    }
    $db->sql_query("INSERT INTO ".$prefix."_blogs VALUES (NULL, '$username', '$blog_title', '$blog_text', '$blog_private', '".gmtime()."')");
    url_redirect(getlink('Blogs'));
} elseif (isset($_POST['post_comment'])) {
    $comment_blog = intval($_POST['blog_id']);
    $comment_name = Fix_Quotes(check_words($_POST['comment_name']), 1);
    $comment_email = Fix_Quotes(check_words($_POST['comment_email']), 1);
    $comment_text = Fix_Quotes(check_words($_POST['comment_text']), 1);
    $comment_ip = $userinfo['user_ip'];
    if (strlen($comment_name) < 3) {
        cpg_error(sprintf(_ERROR_NOT_SET, 'Comment name'));
    }
    if (strlen($comment_email) < 3) {
        cpg_error(sprintf(_ERROR_NOT_SET, 'Comment email'));
    }
    if (strlen($comment_text) < 3) {
        cpg_error(sprintf(_ERROR_NOT_SET, 'Comment text'));
    }
    if ($cfg_comment_limit >= 1) {
        $comment_text = substr($comment_text, 0, $cfg_comment_limit);
    }
    $db->sql_query("INSERT INTO ".$prefix."_blogs_comments VALUES (NULL, '$comment_blog', '$comment_name', '$comment_email', $comment_ip, '$comment_text', '".gmtime()."')");
    url_redirect(getlink('&mode=display&id='.$comment_blog.'&comments=show'));
} elseif (isset($_POST['revise_entry']) && (is_user() || is_admin())) {
    $blog_title = Fix_Quotes(check_words($_POST['title']), 1);
    $blog_text = Fix_Quotes(check_words($_POST['bodytext']), 1);
    $blog_private = intval($_POST['private']);
    $blog_id = intval($_POST['blog_id']);
    $db->sql_query("UPDATE ".$prefix."_blogs SET title='$blog_title', text='$blog_text', private='$blog_private' WHERE id='$blog_id'");
    url_redirect(getlink('&mode=display&id='.$blog_id));
} elseif ($mode == 'user') {
    $lookup_username = isset($_POST['nick'])&& (!empty($_POST['nick'])) ? $_POST['nick'] : (isset($_GET['nick']) ? $_GET['nick'] : cpg_error(sprintf(_ERROR_NOT_SET, _NICKNAME), _SEC_ERROR));
    /* This doesn't allow for UTF-8 usernames
    if (!ereg("^([a-zA-Z0-9_\-]+)$", $lookup_username)) {
        cpg_error(sprintf(_ERROR_BAD_CHAR, strtolower(_B_BLOG)), _SEC_ERROR);
    }
    */
    $lookup_username = Fix_Quotes($lookup_username);
    $priv = ($lookup_username == $userinfo['username']) ? '' : "AND private='0'"; 
    //$result = $db->sql_query("SELECT id, title, timestamp FROM ".$prefix."_blogs WHERE aid='".$lookup_username."' $priv  ORDER BY timestamp DESC");
    $result = $db->sql_query("SELECT * FROM ".$prefix."_blogs WHERE aid='".$lookup_username."' $priv  ORDER BY timestamp DESC");
    if ($db->sql_numrows($result) < 1) {
        cpg_error('<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
        <tr><td class="row1" colspan="2" align="center" height="30">'.sprintf(_ERROR_NONE_TO_DISPLAY, strtolower(_B_TITLE)).'</td></tr>
        </table>');
    }
    $lookup_username = ucwords($lookup_username);
    $entry = 0;
    $loop = 0;
    $offset = (isset($_GET['offset'])) ? intval($_GET['offset']) : 0;
    $offset_display = ($offset != 0) ? $offset : 7;
    if (is_user()) {
        define('MEMBER_BLOCK', true);
    }
    require_once('header.php');
    $num = 1;

    echo '<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
    <tr><td class="row1" align="left"><a href="'.getlink().'">'._MAIN.'</a> | '.((is_user() && $lookup_username == $userinfo['username']) ? '<b>'._B_MYBLOG.'</b> | ' : (is_user() ? '<a href="'.getlink('&amp;mode=user&amp;nick='.$userinfo['username']).'">'._B_MYBLOG.'</a> | ' : '')).'<a href="'.getlink('&amp;mode=add').'">'._B_CREATE_TITLE.'</a></td><td class="row2" align="right">'._B_SEARCH_DISP.' '.$offset_display.' '._B_SEARCH_RES.'</td></tr>
    <tr><td class="catleft" colspan="2" align="center"><b><span class="gen">'.sprintf(_B_POSESSION,$lookup_username).' '._B_BLOG.'</span></b></td></tr>';

     echo '<tr><td class="row1" colspan="2" align="center">'._B_SEARCH_LIST.' '.sprintf(_B_POSESSION,$lookup_username).' '._B_SEARCH_LIST2.'</td></tr>';
     while (list($blog_id, $blog_author, $blog_title, $blog_text, $blog_private, $blog_timestamp) = $db->sql_fetchrow($result)) {
        $resultc = $db->sql_query("SELECT * FROM ".$prefix."_blogs_comments WHERE bid='$blog_id' ORDER BY timestamp ASC");
        $blog_comments = $db->sql_numrows($resultc);
        $blog_text = decode_bb_all($blog_text, 1);
        $blog_timestamp = formatDateTime($blog_timestamp, _DATESTRING);
  if ($entry < $offset) {
            $entry++;
        } else {
            if ($loop < 7) {
                echo '<tr><td class="catleft" colspan="2" align="center"><b><span class="gen">'.$blog_title.'</span></b></td></tr>
    <tr><td class="row1" colspan="2" align="center">'.$blog_timestamp.'</td></tr>
    <tr><td class="row1" colspan="2"><span class="gen">'.$blog_text.'</span></td></tr>
    <tr><td class="row1" colspan="2" align="center"><a href="'.getlink('&amp;mode=display&amp;id='.$blog_id.'&amp;comments=show').'">'._B_COMMENTS.' ('.$blog_comments.')</a>'.'  '.((($blog_author == $userinfo['username']) || is_admin()) ? ' | <a href="'.getlink('&amp;mode=edit&amp;id='.$blog_id).'">'._B_EDIT_TITLE.'</a>' : '').((($blog_author == $userinfo['username']) || is_admin()) ? ' | <a href="'.getlink('&amp;mode=remove&amp;type=blog&amp;id='.$blog_id).'">'._B_REMOVE_BLOG.'</a>' : '').'</td></tr>
    ';
                $num++;
                $loop++;
            }
        }
    }
    $numrows = $db->sql_numrows($result);
    if ($numrows < 1) {
        echo '<tr><td class="row1" colspan="2" align="center"><span class="gen">'._B_SEARCH_NOENTRIES.' '.$lookup_username.'</span></td></tr>';
    }
    if (!$offset) {
        $page_num = 7;
    } else {
        $page_num = $loop + $offset;
    }
    if ($numrows > 7) {
         echo '<tr><td class="row1" colspan="2" align="right">';   
    }
    if ($numrows > 7 && $offset) {
        echo '<a href="'.getlink('&amp;mode=user&amp;nick='.$lookup_username.'&amp;offset='.($offset-7)).'">'._PREVIOUSPAGE.'</a>';
    }
    if ($numrows > 7 && $offset && $numrows > $page_num) {
        echo ' | ';
    }
    if ($numrows > 7 && $numrows > $page_num) {
        echo '<a href="'.getlink('&amp;mode=user&amp;nick='.$lookup_username.'&amp;offset='.$page_num).'">'._NEXTPAGE.'</a> ';
    }
    if ($numrows > 7) {
        echo'</td></tr>';
    }
    $db->sql_freeresult($result);
       
        echo '</table>';
} elseif ($mode == 'remove') {
    $remove_type = Fix_Quotes($_GET['type'], 1);
    $remove_id = intval($_GET['id']);
    if (($remove_type == 'comment') && is_admin()) {
        $result = $db->sql_query("SELECT bid FROM ".$prefix."_blogs_comments WHERE cid='$remove_id'");
        if ($db->sql_numrows($result) < 1) {
            cpg_error('<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
            <tr><td class="row1" colspan="2" align="center" height="30">'.sprintf(_ERROR_NO_EXIST, sprintf(_B_COMMENTS_COMMENT)).'</td></tr>
            </table>');
        }
        list($blog_id) = $db->sql_fetchrow($result);
        $db->sql_freeresult($result);
        if ($_GET['ok'] == 1) {
            $db->sql_query("DELETE FROM ".$prefix."_blogs_comments WHERE cid='$remove_id' LIMIT 1");
            url_redirect(getlink('&mode=display&id='.$blog_id.'&comments=show'));
        } else {
            $pagetitle .= ' '._BC_DELIM.' '._B_REMOVE_COMMENT;
            require_once('header.php');
            cpg_error('<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
            <tr><td class="row1" colspan="2" align="center" height="30"><span class="gen"><img src="images/warning.png" alt="'._WARNING.'" title="'._WARNING.'" /><br /><br />'.sprintf(_ERROR_DELETE_CONF, _B_THIS_COMMENT).'<br /><br />
            [ <a href="'.getlink().'">'._NO.'</a> | <a href="'.getlink('&amp;mode=remove&amp;type=comment&amp;id='.$remove_id.'&amp;ok=1').'">'._YES.'</a> ]</span></td></tr>
            </table>');
        }
    } elseif ($remove_type == 'blog') {
        $result = $db->sql_query("SELECT aid FROM ".$prefix."_blogs WHERE id='$remove_id'");
        if ($db->sql_numrows($result) < 1) {
            cpg_error('<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
            <tr><td class="row1" colspan="2" align="center" height="30">'.sprintf(_ERROR_NO_EXIST, _B_BLOG).'</td></tr>
            </table>');
        }
        list($author_id) = $db->sql_fetchrow($result);
        $db->sql_freeresult($result);
        if (($author_id != $userinfo['username']) && !is_admin()) {
            cpg_error('<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
            <tr><td class="row1" colspan="2" align="center" height="30">'._B_AUTHREQUIRED.'</td></tr>
            </table>');
        }
        if ($_GET['ok'] == 1) {
            $db->sql_query("DELETE FROM ".$prefix."_blogs WHERE id='$remove_id' LIMIT 1");
            $db->sql_query("DELETE FROM ".$prefix."_blogs_comments WHERE bid='$remove_id'");
            url_redirect(getlink('&mode=user&nick='.$author_id));
        } else {
            $pagetitle .= ' '._BC_DELIM.' '._B_REMOVE_BLOG;
            require_once('header.php');
            cpg_error('<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
            <tr><td class="row1" colspan="2" align="center" height="30"><span class="gen"><img src="images/warning.png" alt="'._WARNING.'" title="'._WARNING.'" /><br /><br />'.sprintf(_ERROR_DELETE_CONF, _B_THIS_BLOG).'<br /><br />
            [ <a href="'.getlink().'">'._NO.'</a> | <a href="'.getlink('&amp;mode=remove&amp;type=blog&amp;id='.$remove_id.'&amp;ok=1').'">'._YES.'</a> ]</span></td></tr>
            </table>');
        }
    } else {
        cpg_error(sprintf(_ERROR_NOT_SET, _B_TYPE), _SEC_ERROR);
    }
} elseif ($mode == 'add') {
    if (is_user()) {
        define('MEMBER_BLOCK', true);
    } else {
        url_redirect(getlink('Your_Account'), true);
    }
    $pagetitle .= ' '._BC_DELIM.' '._B_CREATE_TITLE;
    require_once('header.php');
    echo '<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
    <tr><td class="row1" colspan="2"><a href="'.getlink().'">'._MAIN.'</a> | <a href="'.getlink('&amp;mode=user&amp;nick='.$userinfo['username']).'">'._B_MYBLOG.'</a> | <b>'._B_CREATE_TITLE.'</b></td></tr>
    <form name="add_entry" action="'.getlink().'" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    <tr><td class="row1"><span class="gen">'._TITLE.'</span></td>
    <td class="row2"><input type="text" value="" size="50" maxlength="80" name="title" /></td></tr>
    <tr><td class="row1"><span class="gen">'._B_CREATE_TEXT.'</span></td>
    <td class="row2">'.bbcode_table('bodytext', 'add_entry', 1).'<textarea name="bodytext" wrap="virtual" cols="70" rows="15"></textarea>'.smilies_table('onerow', 'bodytext', 'add_entry').'</td></tr>
    <tr><td class="row1"><span class="gen">'._B_CREATE_PRIVATE.'</span></td>
    <td class="row1"><span class="gen">'.yesno_option('private', 0).'</td></tr>
    <tr><td class="catbottom" colspan="2" align="center" height="28">
    <input type="submit" name="post_entry" class="mainoption" value="'._B_CREATE_ADDNEW.'" />
    </td></tr></table></form>';
} elseif ($mode == 'edit') {
    $edit_id = intval($_GET['id']);
    if (!is_user() && !is_admin()) {
        url_redirect(getlink('Your_Account'), true);
    }
    if (is_user()) {
        define('MEMBER_BLOCK', true);
    }
    $pagetitle .= ' '._BC_DELIM.' '._B_EDIT_TITLE;
    require_once('header.php');
    $result = $db->sql_query("SELECT * FROM ".$prefix."_blogs WHERE id='$edit_id'");
    list($blog_id, $blog_author, $blog_title, $blog_text, $blog_private, $blog_timestamp) = $db->sql_fetchrow($result);
    if (($blog_author != $userinfo['username']) && !is_admin()) {
        cpg_error('<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
        <tr><td class="row1" colspan="2" align="center" height="30">'._B_AUTHREQUIRED.'</td></tr>
        </table>');
    }
    if ($blog_private && ($blog_author != $userinfo['username'])) {
        cpg_error('<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
        <tr><td class="row1" colspan="2" align="center" height="30">'._B_PRIVATE.'</td></tr>
        </table>');
    }
    echo '<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
    <tr><td class="row1" colspan="2"><a href="'.getlink().'">'._MAIN.'</a> | <a href="'.getlink('&amp;mode=user&amp;nick='.$userinfo['username']).'">'._B_MYBLOG.'</a> | <a href="'.getlink('&amp;mode=add').'">'._B_CREATE_TITLE.'</a></td></tr>
    <form name="edit_entry" action="'.getlink().'" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    <tr><td class="row1"><span class="gen">'._TITLE.'</span></td>
    <td class="row2"><input type="text" value="'.$blog_title.'" size="50" maxlength="80" name="title" /></td></tr>
    <tr><td class="row1"><span class="gen">'._B_CREATE_TEXT.'</span></td>
    <td class="row2">'.bbcode_table('bodytext', 'edit_entry', 1).'<textarea name="bodytext" wrap="virtual" cols="70" rows="15">'.$blog_text.'</textarea>'.smilies_table('onerow', 'bodytext', 'edit_entry').'</td></tr>
    <tr><td class="row1"><span class="gen">'._B_CREATE_PRIVATE.'</span></td>
    <td class="row1"><span class="gen">'.yesno_option('private', $blog_private).'</td></tr>
    <tr><td class="catbottom" colspan="2" align="center" height="28">
    <input type="hidden" name="blog_id" value="'.$blog_id.'" />
    <input type="submit" name="revise_entry" class="mainoption" value="'._SAVECHANGES.'" />&nbsp;&nbsp;<input type="reset" value="'._RESET.'" name="reset" class="liteoption" />
    </td></tr></table></form>';
} elseif ($mode == 'display') {
    $disp_id = intval($_GET['id']);
    require_once('header.php');
    $result = $db->sql_query("SELECT * FROM ".$prefix."_blogs WHERE id='$disp_id'");
    if ($db->sql_numrows($result) < 1) {
        cpg_error('<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
        <tr><td class="row1" colspan="2" align="center" height="30">'.sprintf(_ERROR_NONE_TO_DISPLAY, strtolower(_B_TITLE)).'</td></tr>
        </table>');
    }
    list($blog_id, $blog_author, $blog_title, $blog_text, $blog_private, $blog_timestamp) = $db->sql_fetchrow($result);
    $db->sql_freeresult($result);

    if ($blog_private && ($blog_author != $userinfo['username'])) {
        cpg_error('<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
        <tr><td class="row1" colspan="2" align="center" height="30">'._B_PRIVATE.'</td></tr>
        </table>');
    }

    $result = $db->sql_query("SELECT * FROM ".$prefix."_blogs_comments WHERE bid='$blog_id' ORDER BY timestamp ASC");
    $blog_comments = $db->sql_numrows($result);
    $blog_text = decode_bb_all($blog_text, 1);
    $blog_timestamp = formatDateTime($blog_timestamp, _DATESTRING);
    echo '<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
    <tr><td class="row1" colspan="2"><a href="'.getlink().'">'._MAIN.'</a> | '.((is_user()) ? '<a href="'.getlink('&amp;mode=user&amp;nick='.$userinfo['username']).'">'._B_MYBLOG.'</a> | ' : '').'<a href="'.getlink('&amp;mode=add').'">'._B_CREATE_TITLE.'</a></td></tr>
    <tr><td class="catleft" colspan="2" align="center"><b><span class="gen">'.$blog_title.'</span></b></td></tr>
    <tr><td class="row1" colspan="2" align="center">'.$blog_timestamp.'</td></tr>
    <tr><td class="row1" colspan="2"><span class="gen">'.$blog_text.'</span></td></tr>
    </table><br /><table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
    <tr><td class="row1" colspan="2" align="center">'.(($_GET['comments'] == 'show') ? '<a href="'.getlink('&amp;mode=display&amp;id='.$blog_id).'">'._B_COMMENTS_HIDE.'</a>' : '<a href="'.getlink('&amp;mode=display&amp;id='.$blog_id.'&amp;comments=show').'">'._B_COMMENTS.' ('.$blog_comments.')</a>').' | <a href="'.getlink('Your_Account&amp;op=userinfo&amp;username='.$blog_author).'">'.$blog_author.'\'s '._B_PROFILE.'</a>'.((($blog_author == $userinfo['username']) || is_admin()) ? ' | <a href="'.getlink('&amp;mode=edit&amp;id='.$blog_id).'">'._B_EDIT_TITLE.'</a>' : '').((($blog_author == $userinfo['username']) || is_admin()) ? ' | <a href="'.getlink('&amp;mode=remove&amp;type=blog&amp;id='.$blog_id).'">'._B_REMOVE_BLOG.'</a>' : '').'</td></tr>
    </table>';
    if ($_GET['comments'] == 'show') {
        echo '<br /><table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
        <tr><td class="catleft" colspan="2" align="center"><b><span class="gen">'._B_COMMENTS.'</span></b></td></tr>';
        while (list($comment_id, $comment_blog, $comment_author, $comment_email, $comment_ip, $comment_text, $comment_timestamp) = $db->sql_fetchrow($result)) {
            $comment_ip = decode_ip($comment_ip);
            $info = getusrdata($comment_author, 'user_viewemail');
            if (!empty($comment_email)) {
				$usrlink = $info['user_viewemail'] ? 'mailto:'.$comment_email : getlink('Blogs&amp;mode=user&amp;nick='.$comment_author);
            } else {
				$usrlink = getlink('Your_Account&amp;profile='.$comment_author);
			}
            echo '<tr><td class="row1" colspan="2"><span class="gen">'.set_smilies($comment_text).'</span></td></tr>
            <tr><td class="row1" align="left">'._POSTEDBY.' <a href="'.$usrlink.'">'.$comment_author.'</a> | '.formatDateTime($comment_timestamp, _DATESTRING).'</td>';
            if (is_admin()) {
                echo '<td class="row2" align="right">IP: <a href="http://ws.arin.net/cgi-bin/whois.pl?queryinput='.$comment_ip.'" target="ResourceWindow">'.$comment_ip.'</a> | <a href="'.getlink('&amp;mode=remove&amp;type=comment&amp;id='.$comment_id).'">'._B_REMOVE.'</a></td>';
            }
            echo '</tr></table><br /><table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">';
        }
        if ($db->sql_numrows($result) < 1) {
            echo '<tr><td class="row1" colspan="2" align="center"><span class="gen">'._B_COMMENTS_NONEYET.'</span></td></tr>';
        }
        $db->sql_freeresult($result);
        $my_name = $my_email = $disabled = '';
        if (is_user()) {
            $my_name = $userinfo['username'];
            $my_email = $userinfo['user_email'];
            $disabled = ' readonly="readonly"';
        }
        echo '</table><br />
        <table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
        <tr><td class="catleft" colspan="2" align="center"><b><span class="gen">Leave a Comment</span></b></td></tr>';
        if (!is_user() && !$cfg_comment_anon) {
            echo '<tr><td class="row1" colspan="2" align="center"><span class="gen">'._B_COMMENTS_REG.'</span></td></tr></table>';
        } else {
            echo '<form name="add_comment" action="'.getlink().'" method="post" enctype="multipart/form-data" accept-charset="utf-8">
            <tr><td class="row1"><span class="gen">'._NAME.'</span></td><td class="row2"><input type="text" name="comment_name" size="30" value="'.$my_name.'" maxlength="30"'.$disabled.' /></td></tr>
            <tr><td class="row1"><span class="gen">'._EMAIL.'</span></td><td class="row2"><input type="text" name="comment_email" size="30" value="'.$my_email.'" maxlength="255"'.$disabled.' /></td></tr>
            <tr><td class="row1"><span class="gen">'._B_COMMENTS_COMMENT.'</span>'.(($cfg_comment_limit >= 1) ? '<br />'.sprintf(_M_CHARS, $cfg_comment_limit) : '').'</td><td class="row2"><textarea name="comment_text" wrap="virtual" cols="70" rows="7"></textarea>'.smilies_table('onerow', 'comment_text', 'add_comment').'</td></tr>
            <tr><td class="catbottom" colspan="2" align="center" height="28">
            <input type="hidden" name="blog_id" value="'.$blog_id.'" />
            <input type="submit" name="post_comment" class="mainoption" value="'._B_COMMENTS_POST.'" />
            </td></tr></form></table>';
        }
    }
} else {
    require_once('header.php');
    $result = $db->sql_query("SELECT id, aid, title, timestamp FROM ".$prefix."_blogs WHERE private='0' OR aid='".$userinfo['username']."' ORDER BY timestamp DESC LIMIT 10");
    if ($db->sql_numrows($result) < 1) {
        echo '<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
        <tr><td class="row1" colspan="2" align="center"><span class="gen">'.sprintf(_ERROR_NONE_TO_DISPLAY, strtolower(_B_TITLE)).'</span></td></tr>';
    } else {
        echo '<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
        <tr><td class="catleft" colspan="2" align="center"><b><span class="gen">'._B_FRESH.'</span></b></td></tr>';
    }
    $num = 1;
    while (list($blog_id, $blog_author, $blog_title, $blog_timestamp) = $db->sql_fetchrow($result)) {
        echo '<tr><td class="row1" align="left"><span class="gen">'.$num.'. <a href="'.getlink('&amp;mode=display&amp;id='.$blog_id).'">'.$blog_title.'</a></span></td><td class="row2" align="right">'._POSTEDBY.' <a href="'.getlink('&amp;mode=user&amp;nick='.$blog_author).'">'.$blog_author.'</a> '._ON.' '.formatDateTime($blog_timestamp, _DATESTRING2).'</td></tr>';
        $num++;
    }
    $db->sql_freeresult($result);
    echo '<tr><td class="catleft" colspan="2" align="center"><b><span class="gen">'._B_SEARCH_USERS.'</span></b></td></tr>
<form action="'.getlink("&amp;mode=user").'" method="post" enctype="multipart/form-data" accept-charset="utf-8">
<tr><td class="row1" colspan="2" align="center"><input type="text" id="nick" name="nick" size="25" maxlength="50" />&nbsp;&nbsp;<input type="submit" value="'._B_SEARCH_BEGIN.'" class="mainoption" /></td></tr></form>
<tr><td class="catleft" colspan="2" align="center"><b><span class="gen">'._B_STARTBLOGGING.'</span></b></td></tr>
<tr><td class="row1" colspan="2" align="center"><span class="gen"><a href="'.getlink('&amp;mode=add').'">'._B_CREATE_TITLE.'</a></span>';
	if (!is_user() && !$cfg_comment_anon ) echo '<br /><br />'._B_CREATE_REG; 
	echo '</td></tr></table>';
}
