<?php
/*********************************************
  CPG-Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2008 by CPG Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Shoutblock/modules/Shoutblock/index.php,v $
  $Revision: 9.8 $
  $Author: nanocaiordo $
  $Date: 2007/12/17 13:41:34 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }

global $db, $prefix, $userinfo, $MAIN_CFG, $CPG_SESS;
$shoutconf = $MAIN_CFG['Shoutblock'];

require_once('includes/nbbcode.php');

function lock_url($url, $return=false) {
    static $urls;
    if ($return) {
        return '<a href="'.$urls[$url].'" target="_blank" title="'.$urls[$url].'" class="postlink">url</a>';
    } else {
        $urls[] = $url;
        return '[url#'.(count($urls)-1).']';
    }
}

if (isset($_POST['comment'])) {
    if (is_user()) {
        $username = $userinfo['username'];
    } elseif ($shoutconf['anonymouspost']) {
        if ($shoutconf['delyourlastpost'] && isset($_POST['uid']) && !empty($_POST['uid'])) {
            $username = $_POST['uid'];
            $unum = strlen($username);
            if ($unum < 2) { $error = _SUSERSHORT;}
            if ($unum > 25) { $error = _SUSERLONG; }
            if (eregi("javascript:(.*)", $username)) { $error = _SUSERJS; }
            $username = ereg_replace("([^ ]{42})","\\1",$username);
        } else {
            $username = $shoutconf['username'];
        }
    } else {
        cpg_error('You\'re not allowed to post.');
    }
    $comment = htmlprepare($_POST['comment']);

    //lots of little tests
    $num = strlen($comment);
    if ($num < 2) { $error = _SHOUTSHORT; }
    if ($num > 2500) { $error = _SHOUTLONG; }
    if (!$comment) { $error = _SHOUTNONE; }

    //no more XSS....more or less...needs work..//
    if (eregi("javascript:(.*)", $comment)) { $error = _SHOUTJS; }

    if ($shoutconf['urlonoff']) {
        $comment = preg_replace("#\[url\#[0-9]\]#is", '', $comment);
        //Allow for URL tags
        $patterns[] = "#\[url\]([\w]+?://[^ \"\n\r\t<]*?)\[/url\]#ise";
        $replacements[] = "lock_url('\\1')";
        // [url]www.cpgnuke.com[/url] (no xxxx:// prefix).
        $patterns[] = "#\[url\]((www|ftp)\.[^ \"\n\r\t<]*?)\[/url\]#ise";
        $replacements[] = "lock_url('http://\\1')";
        // [url=xxxx://www.cpgnuke.com]cpgnuke[/url]
        $patterns[] = "#\[url=([\w]+?[://|\.|/][^ \"\n\r\t<]*?)\](.*?)\[/url\]#ise";
        $replacements[] = "lock_url('\\1')";
        // [url=www.cpgnuke.com]cpgnuke[/url] (no xxxx:// prefix).
        $patterns[] = "#\[url=((www|ftp)\.[^ \"\n\r\t<]*?)\](.*?)\[/url\]#ise";
        $replacements[] = "lock_url('http://\\1')";
        $comment = preg_replace($patterns, $replacements, $comment);
    } else {
        if (eregi("\[url\](.*)", $comment)) { $error = _SHOUTNOURL; }
    }
    //Fix long words
    $comment = wordwrap(strip_tags($comment), 18, " ", 1);
    $comment = preg_replace("#\[url\#([0-9])\]#ise", "lock_url(\\1, true)", $comment);

    // check if same message is posted last 10 minutes
    $result = $db->sql_query("SELECT comment FROM ".$prefix."_shoutblock WHERE comment='".Fix_Quotes($comment)."' AND time>= ".(time()-date('Z')-600)." LIMIT 0,1");
    if ($db->sql_numrows($result) > 0) {
        $error = _SHOUTSAME;
    }
    $db->sql_freeresult($result);

    //do ipblock test then error if on list
    if ($shoutconf['ipblock']) {
        $ipresult = $db->sql_query("SELECT name FROM ".$prefix."_shoutblock_ipblock WHERE name={$userinfo['user_ip']} LIMIT 0,1");
        if ($db->sql_numrows($ipresult) > 0) {
            $error = _SHOUTIPBAN;
        }
        $db->sql_freeresult($ipresult);
    }

    //do name test then error if on list
    if ($shoutconf['nameblock']) {
        $nameresult = $db->sql_query("SELECT name FROM ".$prefix."_shoutblock_nameblock WHERE name = '".Fix_Quotes($username, true)."' LIMIT 0,1");
        while ($badname = $db->sql_fetchrow($nameresult)) {
            if ($username == $badname[0]) $error = _SHOUTUSERBAN;
        }
        $db->sql_freeresult($nameresult);
    }

    //look for bad words, then censor them.
    if ($shoutconf['censor']) { $comment = check_words($comment); }

    //if error just reload page, else add posting.
    if ($error) {
        cpg_error($error);
    } else {
        $db->sql_query("INSERT INTO ".$prefix."_shoutblock VALUES (NULL, '".Fix_Quotes($username)."', '".Fix_Quotes($comment)."', '".gmtime()."')");
        url_redirect($CPG_SESS['user']['uri']);
    }
}

function nav_shouts(){
    global $prefix, $db, $offset, $number, $shoutconf, $userinfo;
    $offset = intval($offset);
    $result = $db->sql_query("SELECT * FROM ".$prefix."_shoutblock ORDER BY id DESC LIMIT $offset,25");
    $loop = $db->sql_numrows($result);
    while ($row = $db->sql_fetchrow($result)) {
        echo '<div class="content">';
        $row[2] = set_smilies($row[2]);
        echo '<a href="'.getlink('Your_Account&amp;profile='.$row[1]).'"><strong>'.$row[1].':</strong></a>';
	    if ($shoutconf['date']) { echo formatDateTime($row[3], '%d-%b-%Y '); } // date
	    if ($shoutconf['time']) { echo formatDateTime($row[3], '%H:%M:%S'); } // time
        echo '<br />'.$row[2].'</div><hr />';
    }
    if (!$offset) {
        $number = 25;
    } else {
        $number = $loop + $offset;
    }
    $db->sql_freeresult($result);
}

function all_shouts(){
    global $prefix, $db, $shoutconf, $userinfo;
    $result = $db->sql_query("SELECT * FROM ".$prefix."_shoutblock ORDER BY id DESC");
    while ($row = $db->sql_fetchrow($result)) {
        echo '<div class="content">';
        $row[2] = set_smilies($row[2]);
        echo '<a href="'.getlink('Your_Account&amp;profile='.$row[1]).'"><strong>'.$row[1].':</strong></a>';
	    if ($shoutconf['date']) { echo formatDateTime($row[3], '%d-%b-%Y '); } // date
	    if ($shoutconf['time']) { echo formatDateTime($row[3], '%H:%M:%S'); } // time
        echo '<br />'.$row[2].'</div><hr />';
    }
    $db->sql_freeresult($result);
    $number = 0;
}
$pagetitle .= 'Shoutblock';
require_once('header.php');
OpenTable();
if ($shoutconf['themecolors']) {
    $shoutconf['color1'] = $bgcolor1;
    $shoutconf['color2'] = $bgcolor2;
}
$offset = isset($_GET['offset']) ? $_GET['offset'] : 0;
if (is_numeric($offset)) {
    $offset = intval($offset);
    nav_shouts();
} else {
    all_shouts();
}
$admin = (can_admin('shoutblock') ? ' | <a href="'.adminlink('&amp;mode=manage').'">Manage Shouts</a>' : '');
echo '<p align="right"><a href="'.getlink('&amp;offset='.$number).'">Next</a> - <a href="'.getlink('&amp;offset=all').'">All</a>'.$admin.'</p>';
CloseTable();
