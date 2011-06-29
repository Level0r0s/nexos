<?php
/*********************************************
  CPG-Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Reviews/modules/Reviews/index.php,v $
  $Revision: 9.18 $
  $Author: phoenix $
  $Date: 2010/11/04 01:10:52 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }

require_once('includes/nbbcode.php');
$alphabet = array ('A','B','C','D','E','F','G','H','I','J','K','L','M',
                   'N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
				   '1','2','3','4','5','6','7','8','9','0');

function alpha() {
    global $alphabet;
    $num = count($alphabet) - 1;
    echo '<div style="text-align:center;">[ ';
    $counter = 0;
    while (list(, $ltr) = each($alphabet)) {
        echo '<a href="'.URL::index('&amp;rop='.$ltr).'">'.$ltr.'</a>';
        if ( $counter == round($num/2) ) {
            echo " ]\n<br />\n[ ";
        } elseif ( $counter != $num ) {
            echo "&nbsp;|&nbsp;\n";
        }
        $counter++;
    }
    echo ' ]<br /><br />';
    echo '[ <a href="'.URL::index('&amp;rop=write_review').'">'._WRITEREVIEW.'</a> ]</div><br /><br />'."\n\n";
}

function display_score($score) {
	global $CPG_SESS;
	if (($CPG_SESS['theme'] != 'default') && is_dir("themes/$CPG_SESS[theme]/images/reviews")) {
		$path = "themes/$CPG_SESS[theme]/images/reviews/";
	} else {
		$path = 'themes/default/images/reviews/';
	}
	$halfstar = '<img src="'.$path.'halfstar.gif" alt="" />';
    $star = '<img src="'.$path.'star.gif" alt="" />';
    if ($score == 10) {
        for ($i=0; $i < 5; $i++) echo $star;
    } else if ($score % 2) {
        $score -= 1;
        $score /= 2;
        for ($i=0; $i < $score; $i++) echo $star;
        echo $halfstar;
    } else {
        $score /= 2;
        for ($i=0; $i < $score; $i++) echo $star;
    }
}

function write_review() {
    global $sitename, $prefix, $user_prefix, $currentlang, $multilingual, $db, $ipcheck, $userinfo, $MAIN_CFG, $module_name;
    require_once('header.php');
    $bb = ($MAIN_CFG['Reviews']['allow_bbcode'] || can_admin(strtolower($module_name))) ? bbcode_table('text', 'writereview', 1) : '';
    OpenTable();
    echo '<b>'._WRITEREVIEWFOR." $sitename</b><br /><br />
    <i>"._ENTERINFO.'</i><br /><br />
    <form name="writereview" method="post" action="'.URL::index().'">
    <b>'._PRODUCTTITLE.':</b><br />
    <input type="text" name="title" size="50" maxlength="150" /><br />
    <i>'._NAMEPRODUCT.'</i><br /><br />';
    if ($multilingual) {
        echo '<b>'._LANGUAGE.': </b>'.lang_selectbox($currentlang, 'language');
    } else {
        echo '<input type="hidden" name="language" value="" />';
    }
    echo '<br /><br />'.$bb.'<br />';
    echo '<b>'._REVIEW.':</b><br />
    <div style="float:left;"><textarea name="text" rows="15" wrap="virtual" cols="60"></textarea></div><div style="float:left; margin-left:5px;">'.smilies_table('inline', 'text', 'writereview').'</div><br />';
    if (can_admin(strtolower($module_name))) {
        echo '<span class="content">'._PAGEBREAK.'</span><br />';
    }
    echo '<i>'._CHECKREVIEW.'</i><br /><br />
    <b>'._YOURNAME.':</b><br />';
    if (is_user()) {
        if ($userinfo['name'] != '') {
            $sender_name = $userinfo['name'];
        } else {
            $sender_name = $userinfo['username'];
        }
        $email = $userinfo['user_email'];
    }

    echo '<input type="text" name="reviewer" size="41" maxlength="40" value="'.$sender_name.'" /><br />
    <i>'._FULLNAMEREQ.'</i><br /><br />
    <b>'._REMAIL.':</b><br />
    <input type="text" name="email" size="40" maxlength="80" value="'.$email.'" /><br />
    <i>'._REMAILREQ.'</i><br /><br />
    <b>'._SCORE.'</b><br />
    <select name="score">
    <option value="10" />10</option>
    <option value="9" />9</option>
    <option value="8" />8</option>
    <option value="7" />7</option>
    <option value="6" />6</option>
    <option value="5" />5</option>
    <option value="4" />4</option>
    <option value="3" />3</option>
    <option value="2" />2</option>
    <option value="1" />1</option>
    </select>
    <i>'._SELECTSCORE.'</i><br /><br />
    <b>'._RELATEDLINK.':</b><br />
    <input type="text" name="url" size="40" maxlength="100" value="" /><br />
    <i>'._PRODUCTSITE.'</i><br /><br />
    <b>'._LINKTITLE.':</b><br />
    <input type="text" name="url_title" size="40" maxlength="50" /><br />
    <i>'._LINKTITLEREQ.'</i><br /><br />';
    if (can_admin(strtolower($module_name))) {
        echo '<b>'._RIMAGEFILE.':</b><br />
    <input type="text" name="cover" size="40" maxlength="100" /><br />
    <i>'._RIMAGEFILEREQ.'</i><br /><br />';
    }
    echo "<i>"._CHECKINFO.'</i><br /><br />
    <input type="hidden" name="rop" value="preview_review" />
    <input type="submit" value="'._PREVIEW.'" /> <input type="button" onclick="history.go(-1)" value="'._CANCEL.'" /></form>';
    CloseTable();
}

function preview_review() {
    global $multilingual, $module_name;
    $date  = $_POST['date'];
    $title = $_POST['title'];
    $text  = $_POST['text'];
    $reviewer = $_POST['reviewer'];
    $email  = $_POST['email'];
    $score = intval($_POST['score']);
    $cover = $_POST['cover'];
    $url   = $_POST['url'];
    $url_title = $_POST['url_title'];
    $hits  = intval($_POST['hits']);
    $id    = intval($_POST['id']);
    $language = $_POST['language'];
    if (eregi('<!--pagebreak-->', $text)) {
        $text = ereg_replace('<!--pagebreak-->', '&lt;!--pagebreak--&gt;', $text);
    }
    if ($title == '') { cpg_error(_INVALIDTITLE.'1'); }
    if ($text == '') { cpg_error(_INVALIDTEXT); }
    if ($hits < 0 && $id != 0) { cpg_error(_INVALIDHITS); }
    if ($reviewer == '' || $email == '') { cpg_error(_CHECKNAME); }
    if (!is_email($email)) {
        cpg_error(_INVALIDEMAIL);
    }
    if (($url_title == '') != ($url == '')) {
        cpg_error(_INVALIDLINK);
    } elseif ($url != ''){
        if (!(eregi('(^http[s]*:[/]+)(.*)', $url))) {
        // If the user ommited the http, this nifty eregi will add it 
        $url = 'http://' . $url;
    }
    }
    require_once('header.php');
    OpenTable();
    echo '<form method="post" action="'.URL::index().'">';
    if ($date == '') $date = date('Y-m-d', time());
    $year2 = substr($date,0,4);
    $month = substr($date,5,2);
    $day = substr($date,8,2);
    $fdate = date('F jS Y', mktime (0,0,0,$month,$day,$year2));
    echo '<table border="0" width="100%"><tr><td colspan="2">';
    echo '<p class="title"><i><b>'.$title.'</b></i></p><br />';
    echo '<blockquote><p>';
    if ($cover != '')
        echo '<img src="images/reviews/'.$cover.'" style="float:right; border:1px; padding:0 0 2px 0;" alt="" />';
    echo decode_bbcode($text,1);
    echo '<p>';
    echo '<b>'._ADDED."</b> $fdate<br />";
    if ($multilingual) {
        echo '<b>'._LANGUAGE."</b> $language<br />";
    }
    echo '<b>'._REVIEWER."</b> <a href=\"mailto:$email\">$reviewer</a><br />";
    echo '<b>'._SCORE.'</b> ';
    display_score($score);
    if ($url != '')
        echo '<br /><b>'._RELATEDLINK.":</b> <a href=\"$url\" target=\"new\">$url_title</a>";
    if ($id != 0) {
        echo '<br /><b>'._REVIEWID.":</b> $id<br />";
        echo '<b>'._HITS.":</b> $hits<br />";
    }
    echo '</p></blockquote>';
    echo '</td></tr></table>';
    $text = encode_bbcode($text);
    echo '<p><i>'._LOOKSRIGHT.'</i> ';
    if (isset($_POST['id'])){
        echo "<input type=\"hidden\" name=\"id\" value=\"$id\" />";
    }
    echo "<input type=\"hidden\" name=\"hits\" value=\"$hits\" />
          <input type=\"hidden\" name=\"rop\" value=\"send_review\" />
          <input type=\"hidden\" name=\"date\" value=\"$date\" />
          <input type=\"hidden\" name=\"title\" value=\"".htmlspecialchars($title)."\" />
          <input type=\"hidden\" name=\"text\" value=\"".htmlspecialchars($text)."\" />
          <input type=\"hidden\" name=\"reviewer\" value=\"$reviewer\" />
          <input type=\"hidden\" name=\"email\" value=\"$email\" />
          <input type=\"hidden\" name=\"score\" value=\"$score\" />
          <input type=\"hidden\" name=\"url\" value=\"$url\" />
          <input type=\"hidden\" name=\"url_title\" value=\"".htmlspecialchars($url_title)."\" />
          <input type=\"hidden\" name=\"cover\" value=\"$cover\" />";
    echo "<input type=\"hidden\" name=\"language\" value=\"$language\" />";
    echo '<input type="submit" value="'._YES.'" /> <input type="button" onclick="history.go(-1)" value="'._NO.'" />';
    $word = ($id != 0) ? _RMODIFIED : _RADDED;
    if (can_admin(strtolower($module_name)))
        echo '<br /><br /><b>'._NOTE.'</b> '._ADMINLOGGED." $word.";
    CloseTable();
}

function send_review() {
    global $prefix, $db, $module_name;
    $date  = Fix_Quotes($_POST['date']);
    $title = Fix_Quotes($_POST['title']);
    $text  = Fix_Quotes($_POST['text']);
    $reviewer = Fix_Quotes($_POST['reviewer']);
    $email  = Fix_Quotes($_POST['email']);
    $score = intval($_POST['score']);
    $cover = Fix_Quotes($_POST['cover']);
    $url   = Fix_Quotes($_POST['url']);
    $url_title = Fix_Quotes($_POST['url_title']);
    $hits  = intval($_POST['hits']);
    $id    = intval($_POST['id']);
    $language = Fix_Quotes($_POST['language']);
    require_once('header.php');
    if (eregi('<!--pagebreak-->', $text)) {
        $text = ereg_replace('<!--pagebreak-->', '&lt;!--pagebreak--&gt;', $text);
    }
    //$text = Fix_Quotes($text, !can_admin(strtolower($module_name)));
    if (eregi('&lt;!--pagebreak--&gt;', $text)) {
        $text = ereg_replace('&lt;!--pagebreak--&gt;', '<!--pagebreak-->', $text);
    }
    OpenTable();
    echo '<br /><div style="text-align:center;">'._RTHANKS;
    if ($id != 0)
        echo ' '._MODIFICATION;
    else
        echo ', '.$reviewer;
    echo '!<br />';
    if (can_admin(strtolower($module_name)) && $id == 0) {
        $db->sql_query("INSERT INTO ".$prefix."_reviews (id, date, title, text, reviewer, email, score, cover, url, url_title, hits, language) 
		VALUES (NULL, '$date', '$title', '$text', '$reviewer', '$email', '$score', '$cover', '$url', '$url_title', '1', '$language')");
        echo _ISAVAILABLE;
    } else if (can_admin(strtolower($module_name)) && $id != 0) {
        $db->sql_query("UPDATE ".$prefix."_reviews 
		SET date='$date', title='$title', text='$text', reviewer='$reviewer', email='$email', score='$score', cover='$cover', url='$url', url_title='$url_title', hits='$hits', language='$language' where id = $id");
        echo _ISAVAILABLE;
    } else {
        $db->sql_query("INSERT INTO ".$prefix."_reviews_add (id, date, title, text, reviewer, email, score, url, url_title, language) 
		VALUES (NULL, '$date', '$title', '$text', '$reviewer', '$email', '$score', '$url', '$url_title', '$language')");
        echo _EDITORWILLLOOK;
    }
    echo '<br /><br />[ <a href="'.URL::index().'">'._RBACK.'</a> ]<br /></div>';
    CloseTable();
}

function reviews_index() {
    global $db, $prefix, $bgcolor4, $bgcolor2, $multilingual, $currentlang, $MAIN_CFG;
    require_once('header.php');
    if ($multilingual == 1) {
        $querylang = "WHERE language='$currentlang' OR language=''";
    } else {
        $querylang = '';
    }
    OpenTable();
    echo '<table border="0" width="95%" cellpadding="2" cellspacing="4" align="center">
    <tr><td colspan="2"><div style="text-align:center;"><span class="title">'._RWELCOME.'</span><br /><br /><br />';
    echo '<b>'.$MAIN_CFG['Reviews']['title'].'</b><br /><br />'.nl2br($MAIN_CFG['Reviews']['description']).'</div>';
    echo '<br /><br /><br />';
    alpha();
    echo '</td></tr>';
    echo '<tr><td style="width:50%; background:'.$bgcolor2.';"><b>'._10MOSTPOP.'</b></td>';
    echo '<td style="width:50%; background:'.$bgcolor2.';"><b>'._10MOSTREC.'</b></td></tr>';
    $result_pop = $db->sql_query("SELECT id, title, hits FROM ".$prefix."_reviews $querylang ORDER BY hits DESC LIMIT 10");
    $result_rec = $db->sql_query("SELECT id, title, date, hits FROM ".$prefix."_reviews $querylang ORDER BY date DESC LIMIT 10");
    $y = 1;
    for ($x = 0; $x < 10; $x++) {
	    $myrow = $db->sql_fetchrow($result_pop);
	    $id = $myrow['id'];
	    $title = $myrow['title'];
	    $hits = $myrow['hits'];
	    echo '<tr><td style="width:50%; background:'.$bgcolor4.';"><b>&#8226;</b> <a href="'.URL::index('&amp;rop=showcontent&amp;id='.$id).'">'.$title.'</a></td>';
	    $myrow = $db->sql_fetchrow($result_rec);
	    $id = $myrow['id'];
	    $title = $myrow['title'];
	    $hits = $myrow['hits'];
	    echo '<td style="width:50%; background:'.$bgcolor4.';"><b>&#8226;</b> <a href="'.URL::index('&amp;rop=showcontent&amp;id='.$id).'">'.$title.'</a></td></tr>';
	    $y++;
    }
	$db->sql_freeresult($result_pop);
	$db->sql_freeresult($result_rec);
    echo '<tr><td colspan="2"><br /></td></tr>';
    $result = $db->sql_query("SELECT * FROM ".$prefix."_reviews $querylang");
    $numresults = $db->sql_numrows($result);
    echo '<tr><td colspan="2"><br /><center>'._THEREARE." $numresults "._REVIEWSINDB.'</center></td></tr></table>';
    CloseTable();
}

function reviews($letter) {
    global $bgcolor4, $sitename, $prefix, $multilingual, $currentlang, $db;
    $field = $_GET['field'];
    $order = Fix_Quotes($_GET['order']);
    require_once('header.php');
    $querylang = ($multilingual) ? "AND language='$currentlang' OR language=''" : '';
    OpenTable();
    echo '<div style="text-align:center;"><b>'.$sitename.' '._REVIEWS.'</b><br />';
    echo '<i>'._REVIEWSLETTER." \"$letter\"</i><br /><br /></div>";
    switch ($field) {

    case 'reviewer':
    $result = $db->sql_query("SELECT id, title, hits, reviewer, score FROM ".$prefix."_reviews 
	WHERE UPPER(title) LIKE '$letter%' $querylang 
	ORDER by reviewer $order");
    break;

    case 'score':
    $result = $db->sql_query("SELECT id, title, hits, reviewer, score FROM ".$prefix."_reviews 
	WHERE UPPER(title) LIKE '$letter%' $querylang 
	ORDER by score $order");
    break;

    case 'hits':
    $result = $db->sql_query("SELECT id, title, hits, reviewer, score FROM ".$prefix."_reviews 
	WHERE UPPER(title) LIKE '$letter%' $querylang 
	ORDER by hits $order");
    break;

    default:
    $result = $db->sql_query("SELECT id, title, hits, reviewer, score FROM ".$prefix."_reviews 
	WHERE UPPER(title) LIKE '$letter%' $querylang 
	ORDER by title $order");
    break;

    }
    $numresults = $db->sql_numrows($result);
    if ($numresults == 0) {
    	echo '<i><b>'._NOREVIEWS." $letter</b></i><br /><br />";
    } elseif ($numresults > 0) {
    	echo "<table border=\"0\" width=\"100%\" cellpadding=\"2\" cellspacing=\"4\">
        <tr>
        <td style=\"width:50%; background:$bgcolor4;\">
        <p align=\"left\"><a href=\"".URL::index("&amp;rop=$letter&amp;field=title&amp;order=ASC")."\" title=\""._SORTASC."\">&#9650;</a><b> "._PRODUCTTITLE." </b><a href=\"".URL::index("&rop=$letter&amp;field=title&amp;order=DESC")."\" title=\""._SORTDESC."\">&#9660;</a>
        </td>
        <td style=\"width:18%; background:$bgcolor4;\">
        <p align=\"center\"><a href=\"".URL::index("&amp;rop=$letter&amp;field=reviewer&amp;order=ASC")."\" title=\""._SORTASC."\">&#9650;</a><b> "._REVIEWER." </b><a href=\"".URL::index("&rop=$letter&amp;field=reviewer&amp;order=DESC")."\" title=\""._SORTDESC."\">&#9660;</a>
        </td>
        <td style=\"width:18%; background:$bgcolor4;\">
        <p align=\"center\"><a href=\"".URL::index("&amp;rop=$letter&amp;field=score&amp;order=ASC")."\" title=\""._SORTASC."\">&#9650;</a><b> "._SCORE." </b><a href=\"".URL::index("&rop=$letter&amp;field=score&amp;order=DESC")."\" title=\""._SORTDESC."\">&#9660;</a>
        </td>
        <td style=\"width:14%; background:$bgcolor4;\">
        <p align=\"center\"><a href=\"".URL::index("&amp;rop=$letter&amp;field=hits&amp;order=ASC")."\" title=\""._SORTASC."\">&#9650;</a><b> "._HITS." </b><a href=\"".URL::index("&rop=$letter&amp;field=hits&amp;order=DESC")."\" title=\""._SORTDESC."\">&#9660;</a>
        </td>
        </tr>";
	    while($myrow = $db->sql_fetchrow($result)) {
	        $title = $myrow['title'];
	        $id = $myrow['id'];
	        $reviewer = $myrow['reviewer'];
	        $email = $myrow['email'];
	        $score = $myrow['score'];
	        $hits = $myrow['hits'];
	        echo '<tr>
	            <td style="width:50%; background:#EEEEEE;"><a href="'.URL::index("&amp;rop=showcontent&amp;id=$id").'">'.$title.'</a></td>
	            <td style="width:18%; background:#EEEEEE;" align="center">';
	        if ($reviewer != '')
	        echo $reviewer;
	        echo '</td><td style="width:18%; background:#EEEEEE;" align="center">';
	        display_score($score);
	        echo '</td><td style="width:14px; background:#EEEEEE;" align="center">'.$hits.'</td>
	          </tr>';
	    }
		$db->sql_freeresult($result);
	    echo '</table>';
	    echo "<br />$numresults "._TOTALREVIEWS.'<br /><br />';
    }
    echo '[ <a href="'.URL::index().'">'._RETURN2MAIN.'</a> ]';
    CloseTable();
}

function postcomment() {
    global $userinfo, $AllowableHTML, $db, $prefix, $MAIN_CFG;
    if (!$MAIN_CFG['Reviews']['anon_comments'] && !is_user()) {
        cpg_error('Sorry, anonymous comments not allowed [ '._RCREATEACCOUNT.' ]<br /><br />');
	}
    $id = intval($_GET['id']);
    list($title) = $db->sql_ufetchrow("SELECT title FROM ".$prefix."_reviews WHERE id='$id'");
    if (!$title) { cpg_error('Review does not exist!'); }
    require_once('header.php');

    OpenTable();
    echo '<div style="text-align:center;" class="option"><b>'._REVIEWCOMMENT." $title</b><br /><br /></div>"
    .'<form action="'.URL::index().'" method="post"><div>';
    if (!is_user()) {
        echo '<b>'._YOURNICK.'</b> '._ANONYMOUS.' [ '._RCREATEACCOUNT.' ]<br /><br />';
        $uname = $anonymous;
    } else {
        echo '<b>'._YOURNICK.'</b> '.$userinfo['username'].'<br />
    	<input type="checkbox" name="xanonpost" /> '._POSTANON.'<br /><br />';
        $uname = $userinfo['username'];
    }
    echo '
    <input type="hidden" name="uname" value="'.$uname.'" />
    <input type="hidden" name="id" value="'.$id.'" />
    <b>'._SELECTSCORE.'</b>
    <select name="score">
    <option name="score" value="10" />10</option>
    <option name="score" value="9" />9</option>
    <option name="score" value="8" />8</option>
    <option name="score" value="7" />7</option>
    <option name="score" value="6" />6</option>
    <option name="score" value="5" />5</option>
    <option name="score" value="4" />4</option>
    <option name="score" value="3" />3</option>
    <option name="score" value="2" />2</option>
    <option name="score" value="1" />1</option>
    </select><br /><br />
    <b>'._YOURCOMMENT.'</b><br />
    <textarea name="comments" rows="10" cols="70"></textarea><br />
    <br /><br />
	'.generate_secimg(7).'<br />'._TYPESECCODE.'<br />
	<input type="text" name="gfx_contact_check" size="10" maxlength="8" /><br />
    <input type="hidden" name="rop" value="savecomment" />
    <input type="submit" value="Submit" />
    </div></form>
    ';
    CloseTable();
}

function savecomment() {
    global $prefix, $db, $userinfo, $module_name, $CPG_SESS;
	$gfxid = isset($_POST['gfxid']) ? $_POST['gfxid'] : 0;
	$code = $CPG_SESS['gfx'][$gfxid];
	$gfx_check  = isset($_POST['gfx_contact_check']) ? $_POST['gfx_contact_check'] : '';
	if (strlen($gfx_check) < 2 || $code != $gfx_check) {
		$error = _SECURITYCODE.' incorrect';
	}
	if (isset($error)) {
		cpg_error('<div style="text-align:center;">'.$error.'<br /></div>');
	} else {
	    $uname = (is_user() && !isset($_POST['xanonpost'])) ? $uname = $userinfo['username'] : '';
		$comments = isset($_POST['comments']) ? $_POST['comments'] : '';
		if (!can_admin(strtolower($module_name))) {
			$comments = !empty($comments) ? strip_tags($comments) : '';
		}
	    $db->sql_query("INSERT INTO ".$prefix."_reviews_comments 
		VALUES (NULL, ".intval($_POST['id']).", '".Fix_Quotes($_POST['uname'])."', now(), '".Fix_Quotes($comments)."', ".intval($_POST['score']).')');
	    URL::redirect(URL::index('&amp;rop=showcontent&amp;id='.intval($_POST['id'])));
	}
}

function r_comments($id, $title) {
    global $prefix, $db, $module_name;
    $result = $db->sql_query("SELECT cid, userid, date, comments, score FROM ".$prefix."_reviews_comments 
	WHERE rid='$id' 
	ORDER BY date DESC");
    while(list($cid, $uname, $date, $comments, $score) = $db->sql_fetchrow($result)) {
        OpenTable();
        $title = urldecode($title);
        echo "<b>$title</b><br />";
        if ($uname == 'Anonymous') {
            echo _POSTEDBY." $uname "._ON." $date<br />";
        } else {
            echo _POSTEDBY.' <a href="'.URL::index('Your_Account&amp;profile='.$uname)."\">$uname</a> "._ON." $date<br />";
        }
        echo _MYSCORE.' ';
        display_score($score);
        if (can_admin(strtolower($module_name))) {
            echo '<br /><b>'._ADMIN.'</b> [ <a href="'.URL::index("&amp;rop=del_comment&amp;cid=$cid&amp;id=$id").'">'._DELETE.'</a> ]';
        }
        $comments = nl2br(check_words($comments));
        echo '<hr /><br /><br />'."\n$comments\n";
        CloseTable();
        echo '<br />';
    }
}

function showcontent() {
    global $uimages, $prefix, $db, $module_name;
    if (!isset($_GET['id'])) { URL::redirect(URL::index()); }
    $id = intval($_GET['id']);
    $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
    $result = $db->sql_query("SELECT * FROM ".$prefix."_reviews 
	WHERE id='$id'");
    if ($db->sql_numrows($result) < 1) { URL::redirect(URL::index()); }
    if ($page == 1 || $page == '') {
        $db->sql_query("UPDATE ".$prefix."_reviews 
		SET hits=hits+1 
		WHERE id='$id'");
    }
    require_once('header.php');
    OpenTable();
    $myrow =  $db->sql_fetchrow($result);
    $id =  $myrow['id'];
    $date = $myrow['date'];
    $year = substr($date,0,4);
    $month = substr($date,5,2);
    $day = substr($date,8,2);
    $fdate = date('F jS Y', mktime (0,0,0,$month,$day,$year));
    $title = $myrow['title'];
    $text = $myrow['text'];
    $text = decode_bbcode($text,1);
    $cover = $myrow['cover'];
    $reviewer = $myrow['reviewer'];
    $email = $myrow['email'];
    $hits = $myrow['hits'];
    $url = $myrow['url'];
    $url_title = $myrow['url_title'];
    $score = $myrow['score'];
    $language = $myrow['language'];
    $contentpages = explode( '<!--pagebreak-->', $text );
    $pageno = count($contentpages);
    if ( $page == '' || $page < 1 )
    $page = 1;
    if ( $page > $pageno )
    $page = $pageno;
    $arrayelement = (int)$page;
    $arrayelement --;
    echo '<table align="center"><tr><td>';
    if ($cover != '')
    echo "<img src=\"images/reviews/$cover\" align=\"right\" border=\"1\" hspace=\"5\" alt=\"\" />";
	echo "<span class=\"title\"><i><b>$title</b></i></span><br />";
    echo '<div style="text-align:justify;"><blockquote>'.$contentpages[$arrayelement];
    echo '</blockquote></div>';

    if (can_admin(strtolower($module_name))) {
        echo '<b>'._ADMIN.'</b> [ <a href="'.URL::index('&amp;rop=mod_review&amp;id='.$id).'">'._EDIT.'</a> | <a href="'.URL::index('&amp;rop=del_review&amp;id_del='.$id).'">'._DELETE.'</a> ]<br />';
	}
    echo '<b>'._ADDED."</b> $fdate<br />";
    if ($reviewer != '')
        echo '<b>'._REVIEWER."</b> <a href=\"mailto:$email\">$reviewer</a><br />";
    if ($score != '')
        echo '<b>'._SCORE.'</b> ';
    display_score($score);
    if ($url != '')
        echo '<br /><b>'._RELATEDLINK.":</b> <a href=\"$url\" target=\"new\">$url_title</a>";
    echo '<br /><b>'._HITS.":</b> $hits";
    echo '<br /><b>'._LANGUAGE.":</b> $language</td></tr></table>";
	echo '<div style="text-align:center;">';
    if ($pageno > 1) {
        echo '<br /><b>'._PAGE.":</b> $page/$pageno<br />";
    }
//    $title = urlencode($title);
    if ($page >= $pageno) {
      $next_page = '';
    } else {
        $next_pagenumber = $page + 1;
        if ($page != 1) {
            $next_page .= '<img src="images/spacer.gif" width="10" height="2" alt="" /> &nbsp;&nbsp; ';
        }
        $next_page .= '
        <a href="'.URL::index("&amp;rop=showcontent&amp;id=$id&amp;page=$next_pagenumber").'">'._NEXTPAGE." ($next_pagenumber/$pageno)</a>
        <a href=\"".URL::index("&amp;rop=showcontent&amp;id=$id&amp;page=$next_pagenumber").'">&#9658;</a>';
    }
    if($page <= 1) {
        $previous_page = '';
    } else {
        $previous_pagenumber = $page - 1;
        $previous_page = '
        <a href="'.URL::index("&amp;rop=showcontent&amp;id=$id&amp;page=$previous_pagenumber").'">&#9668;</a>
        <a href="'.URL::index("&amp;rop=showcontent&amp;id=$id&amp;page=$previous_pagenumber").'">'._PREVIOUSPAGE." ($previous_pagenumber/$pageno)</a>";
    }
    echo ''
    .$previous_page." &nbsp;&nbsp; $next_page<br /><br />"
    .'[ <a href="'.URL::index().'">'._RBACK.'</a> | <a href="'.URL::index("&amp;rop=postcomment&amp;id=$id").'">'._REPLYMAIN.'</a> ]</div>';
    CloseTable();
    if ($page == 1 || $page == '') {
        echo '<br />';
        r_comments($id, $title);
    }
}

function mod_review() {
    global $prefix, $db, $MAIN_CFG, $module_name;
    $id = intval($_GET['id']);
    if ($id == 0 || !can_admin(strtolower($module_name))) {
        cpg_error('This function must be passed argument id, or you are not admin.');
    }
    if (!($myrow = $db->sql_ufetchrow("SELECT * FROM ".$prefix."_reviews WHERE id = $id"))) {
        cpg_error('Review with id "'.$id.'" doesn\'t exist');
    }
    $bb = ($MAIN_CFG['Reviews']['allow_bbcode'] || can_admin(strtolower($module_name))) ? bbcode_table('text', 'reviewmod', 1) : '';
    require_once('header.php');
    OpenTable();
    echo '<div style="text-align:center;"><b>'._REVIEWMOD.'</b></div><br /><br />
    <form method="post" name="reviewmod" action="'.URL::index('&amp;rop=preview_review').'">
    <table border="0" width="100%">
    <tr>
        <td style="width:12%;"><b>'._RDATE.'</b><input type="hidden" name="id" value="'.$myrow['id'].'" /></td>
        <td><input type="text" name="date" size="15" value="'.$myrow['date'].'" maxlength="10" /></td>
    </tr><tr>
        <td><b>'._RTITLE.'</b></td>
        <td><input type="text" name="title" size="50" maxlength="150" value="'.htmlprepare($myrow['title']).'" /></td>
    </tr><tr>
        <td><b>'._LANGUAGE.'</b></td><td>'.lang_selectbox($myrow['language'], 'language').'</td>
    </tr><tr>
        <td><b>'._RTEXT.'</b></td>
        <td>'.$bb.'<br /><textarea class="textbox" name="text" rows="20" wrap="virtual" cols="60">'.$myrow['text'].'</textarea></td>
    </tr><tr>
        <td><b>'._REVIEWER.'</b></td>
        <td><input type="text" name="reviewer" size="41" maxlength="40" value="'.$myrow['reviewer'].'" /></td>
    </tr><tr>
        <td><b>'._REVEMAIL.'</b></td>
        <td><input type="text" name="email" value="'.$myrow['email'].'" size="30" maxlength="80" /></td>
    </tr><tr>
        <td><b>'._SCORE.'</b></td>
        <td><input type="text" name="score" value="'.$myrow['score'].'" size="3" maxlength="2" /></td>
    </tr><tr>
        <td><b>'._RLINK.'</b></td>
        <td><input type="text" name="url" value="'.$myrow['url'].'" size="30" maxlength="100" /></td>
    </tr><tr>
        <td><b>'._RLINKTITLE.'</b></td>
        <td><input type="text" name="url_title" value="'.htmlprepare($myrow['url_title']).'" size="30" maxlength="50" /></td>
    </tr><tr>
        <td><b>'._COVERIMAGE.'</b></td>
        <td><input type="text" name="cover" value="'.$myrow['cover'].'" size="30" maxlength="100" /></td>
    </tr><tr>
        <td><b>'._HITS.':</b></td>
        <td><input type="text" name="hits" value="'.$myrow['hits'].'" size="5" maxlength="5" /></td>
    </tr><tr>
		<td colspan="2"><input type="submit" value="'._PREMODS.'" />&nbsp;&nbsp;<input type="button" onclick="history.go(-1)" value="'._CANCEL.'" /></td>
    </tr>
    </table>
    </form>';
    CloseTable();
}

function del_review() {
    global $prefix, $db, $module_name;
    if (can_admin(strtolower($module_name))) {
        $id_del = intval($_GET['id_del']);
        $db->sql_query("DELETE FROM ".$prefix."_reviews 
		WHERE id = $id_del");
        $db->sql_query("DELETE FROM ".$prefix."_reviews_comments 
		WHERE rid='$id_del'");
        URL::redirect(URL::index());
    }
    cpg_error('ACCESS DENIED');
}

function del_comment() {
    global $prefix, $db, $module_name;
    if (can_admin(strtolower($module_name))) {
        $db->sql_query("DELETE FROM ".$prefix."_reviews_comments 
		WHERE cid=".intval($_GET['cid']));
        URL::redirect(URL::index("&amp;rop=showcontent&amp;id=".intval($_GET['id'])));
    }
    cpg_error('ACCESS DENIED');
}

$rop = isset($_POST['rop']) ? $_POST['rop'] : (isset($_GET['rop']) ? $_GET['rop'] : '');
switch($rop) {

    case 'showcontent':
    showcontent();
    break;

    case 'write_review':
    write_review();
    break;

    case 'preview_review':
    preview_review();
    break;

    case 'send_review':
    send_review();
    break;

    case 'del_review':
    del_review();
    break;

    case 'mod_review':
    mod_review();
    break;

    case 'postcomment':
    postcomment();
    break;

    case 'savecomment':
    savecomment();
    break;

    case 'del_comment':
    del_comment();
    break;

    default:
    if (strlen($rop) == 1) {
        if (!in_array(strtoupper($rop), $alphabet)) cpg_error(_INVALIDTEXT);
        reviews($rop);
    } else
        reviews_index();
    break;
}
