<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Downloads/modules/Downloads/index.php,v $
  $Revision: 9.4 $
  $Author: nanocaiordo $
  $Date: 2006/11/07 10:38:42 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }
$pagetitle .= _UDOWNLOADS;
require_once("modules/$module_name/d_config.php");
require_once("modules/$module_name/theme.php");
$downloadsprefix = $prefix.'_'.strtolower($module_name);

function getparent($parentid, $title) {
    global $downloadsprefix, $db;
    $row = $db->sql_ufetchrow("SELECT title, parentid FROM ".$downloadsprefix."_categories WHERE cid='$parentid'", SQL_ASSOC, __FILE__);
    if (!empty($row['title'])) $title = $row['title'].'/'.$title;
    if ($row['parentid'] > 0 ) {
        $title = getparent($row['parentid'], $title);
    }
    return $title;
}

function getparentlink($parentid, $title) {
    global $downloadsprefix, $db;
    $row = $db->sql_ufetchrow("SELECT cid, title, parentid FROM ".$downloadsprefix."_categories WHERE cid='$parentid'", SQL_ASSOC, __FILE__);
    $ptitle = $row['title'];
    $pparentid = $row['parentid'];
    if (!empty($row['title'])) $title='<a href="'.getlink("&amp;d_op=viewdownload&amp;cid=$row[cid]")."\">$row[title]</a>/".$title;
    if ($row['parentid'] > 0) {
        $title = getparentlink($row['parentid'], $title);
    }
    return $title;
}

function index() {
    global $downloadsprefix, $db, $show_links_num, $show_links_info, $show_links_inum, $module_name, $bgcolor1, $bgcolor3;
    require_once('header.php');
    downl_menu_tpl(0);
    echo '<br />';
    OpenTable();
    echo "<center><font class=\"title\"><b>"._DOWNLOADSMAINCAT."</b></font></center><br />";
    echo "<table border=\"0\" cellspacing=\"10\" cellpadding=\"0\" align=\"center\"><tr>";
    $sql = "SELECT cid, title, cdescription FROM ".$downloadsprefix."_categories WHERE parentid='0' ORDER BY title";
    $result = $db->sql_query($sql);
    $count = $dum = 0;
    while ($row = $db->sql_fetchrow($result)) {
        $cid = $row['cid'];
        $title = $row['title'];
        $cdescription = $row['cdescription'];
        if ($show_links_num == 1) {
            list($cnumrows) = $db->sql_ufetchrow("SELECT COUNT(*) FROM ".$downloadsprefix."_downloads WHERE cid='$cid'", SQL_NUM);
            $cnumm = " ($cnumrows)";
        } else { $cnumm = ''; }
        if ($cnumrows > 0) { $folder = "modules/Downloads/images/openfolder.gif"; } else { $folder = "modules/Downloads/images/closedfolder.gif"; }
        if (can_admin('downloads')) { $folderImg = "<a href=\"".adminlink("$module_name&mode=DownloadsModCat&amp;cat=$cid")."\"><img src=\"$folder\" border=\"0\" alt=\""._EDIT."\" /></a>"; } else { $folderImg = "<img src=\"$folder\" border=\"0\" alt=\"$title\" />"; }
        echo "<td valign=\"top\"><font class=\"title\">$folderImg <a href=\"".getlink("&amp;d_op=viewdownload&amp;cid=$cid")."\"><b>$title</b></a></font>$cnumm";
        categorynewdownloadgraphic($cid);
        if ($cdescription) { echo "<br /><font class=\"content\">$cdescription</font><br />"; }
        else { echo '<br />'; }
        $result2 = $db->sql_query("SELECT cid, title FROM ".$downloadsprefix."_categories WHERE parentid='$cid' ORDER BY title LIMIT 0,3");
        $space = 0;
        while ($row2 = $db->sql_fetchrow($result2)) {
            $cid = $row2['cid'];
            $stitle = $row2['title'];
            if ($space>0) { echo ',&nbsp;'; }
            if ($show_links_num == 1) {
                list($cnumrows2) = $db->sql_ufetchrow("SELECT COUNT(*) FROM ".$downloadsprefix."_downloads WHERE cid='$cid'", SQL_NUM);
                $cnum = " ($cnumrows2)";
            } else { $cnum = ""; }
        echo "<font class=\"content\"><a href=\"".getlink("&amp;d_op=viewdownload&amp;cid=$cid")."\">$stitle</a>$cnum</font>";
        $space++;
        }
        if ($count<1) {
            echo "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>";
            $dum = 1;
        }
        $count++;
        if ($count==2) {
            echo "</td></tr><tr>";
            $count = 0;
            $dum = 0;
        }
    }
    if ($dum == 1) {
        echo '</tr></table>';
    } elseif ($dum == 0) {
        echo '<td></td></tr></table>';
    }
    list($numrows) = $db->sql_ufetchrow("SELECT COUNT(*) FROM ".$downloadsprefix."_downloads", SQL_NUM);
    list($catnum) = $db->sql_ufetchrow("SELECT COUNT(*) FROM ".$downloadsprefix."_categories", SQL_NUM);
    echo "<center><font class=\"content\">"._THEREARE." <b>$numrows</b> "._DOWNLOADS." "._AND." <b>$catnum</b> "._CATEGORIES." "._INDB."</font></center>";
    CloseTable();
    if ($show_links_info == 1) {
        echo '<br />';
        OpenTable();
        echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"3\" width=\"100%\">"
            ."<tr><td width=\"50%\" valign=\"top\" align=\"center\">";
        echo "<div align=\"center\" class=\"title\">"._NEWDOWNLOADS."</div>";
        echo "</td><td width=\"50%\" valign=\"top\" align=\"center\">";
        echo "<div align=\"center\" class=\"title\">"._MOSTPOPULAR." $show_links_inum</div>";
        echo "</td></tr>"
            ."<tr><td width=\"50%\" valign=\"top\" align=\"center\">";
        OpenTable2();
        $content = '<table border="0" width="100%">';
        $color = $bgcolor3;
        $result = $db->sql_query("SELECT lid, title, hits FROM ".$downloadsprefix."_downloads ORDER BY date DESC LIMIT 0, $show_links_inum");
        while ($row = $db->sql_fetchrow($result)) {
            $title2 = ereg_replace("_", " ", $row['title']);
            $color = ($color == $bgcolor3) ? $bgcolor1 : $bgcolor3;
            $content .= "<tr><td bgcolor=\"$color\" align=\"left\"><a href=\"".getlink("&amp;d_op=viewdownloaddetails&amp;lid=$row[lid]")."\">$title2</a></td>"
            ."<td bgcolor=\"$color\" align=\"center\" width=\"20\">$row[hits]</td></tr>";
        }
        echo "$content</table>";
        CloseTable2();
        echo "|[ <a href=\"".getlink("&amp;d_op=NewDownloads")."\">"._NEWDOWNLOADS."</a> ]|";
        echo "</td><td width=\"50%\" valign=\"top\" align=\"center\">";
        OpenTable2();
        $content = "<table border=\"0\" width=\"100%\">";
        $color = $bgcolor3;
        $result = $db->sql_query("SELECT lid, title, hits FROM ".$downloadsprefix."_downloads ORDER BY hits DESC LIMIT 0, $show_links_inum");
        while ($row = $db->sql_fetchrow($result)) {
            $title2 = ereg_replace("_", " ", $row['title']);
            $color = ($color == $bgcolor3) ? $bgcolor1 : $bgcolor3;
            $content .= "<tr><td bgcolor=\"$color\" align=\"left\"><a href=\"".getlink("&amp;d_op=viewdownloaddetails&amp;lid=$row[lid]")."\">$title2</a></td>"
            ."<td bgcolor=\"$color\" align=\"center\" width=\"20\">$row[hits]</td></tr>";
        }
        echo "$content</table>";
        CloseTable2();
        echo "|[ <a href=\"".getlink("&amp;d_op=MostPopular")."\">"._MOSTPOPULAR." "._DOWNLOADS."</a> ]|";
        echo "</td></tr></table>";
        CloseTable();
    }
    include("footer.php");
}

function AddDownload() {
    global $downloadsprefix, $db, $downloads_anonadddownloadlock;
    include("header.php");
    downl_menu_tpl(1);
    echo '<br />';
    OpenTable();
    echo "<center><font class=\"title\"><b>"._ADDADOWNLOAD."</b></font></center><br /><br />";
    if (is_user() || $downloads_anonadddownloadlock != 1) {
        echo '<b>'._INSTRUCTIONS.':</b><br />'
        .'<strong><big>&middot;</big></strong> '._DSUBMITONCE.'<br />'
        .'<strong><big>&middot;</big></strong> '._DPOSTPENDING.'<br />'
        .'<strong><big>&middot;</big></strong> '._USERANDIP.'<br />';
        echo '<form method="post" action="'.getlink("&amp;d_op=add").'">'
            ._DOWNLOADNAME.": <input type=\"text\" name=\"title\" size=\"40\" maxlength=\"100\" /><br />"
            ._FILEURL.": <input type=\"text\" name=\"url\" size=\"50\" maxlength=\"100\" value=\"http://\" /><br />";
        echo _CATEGORY.": <select name=\"cat\">";
        $result = $db->sql_query("SELECT cid, title, parentid FROM ".$downloadsprefix."_categories ORDER BY parentid,title");
        while ($row = $db->sql_fetchrow($result)) {
            $cid2 = $row['cid'];
            $ctitle2 = $row['title'];
            $parentid2 = $row['parentid'];
            if ($parentid2!=0) $ctitle2=getparent($parentid2,$ctitle2);
            echo "<option value=\"$cid2\">$ctitle2</option>";
        }
        echo '</select><br /><br />'
            ._LDESCRIPTION.'<br /><textarea name="description" cols="60" rows="8"></textarea><br /><br />'
            ._AUTHORNAME.': <input type="text" name="auth_name" size="30" maxlength="60" /><br />'
            ._AUTHOREMAIL.': <input type="text" name="email" size="30" maxlength="60" /><br />'
            ._FILESIZE.': <input type="text" name="filesize" size="12" maxlength="11" /> ('._INBYTES.')<br />'
            ._VERSION.': <input type="text" name="version" size="11" maxlength="10" /><br />'
            ._HOMEPAGE.': <input type="text" name="homepage" size="50" maxlength="200" value="http://" /><br /><br />'
            .'<input type="hidden" name="d_op" value="Add" />'
            .'<input type="submit" value="'._ADDTHISFILE.'" /> '._GOBACK.'<br /><br />'
            .'</form>';
    } else {
        echo '<center>'._DOWNLOADSNOTUSER1.'<br />'
            ._DOWNLOADSNOTUSER2.'<br /><br />'
            ._DOWNLOADSNOTUSER3.'<br />'
            ._DOWNLOADSNOTUSER4.'<br />'
            ._DOWNLOADSNOTUSER5.'<br />'
            ._DOWNLOADSNOTUSER6.'<br />'
            ._DOWNLOADSNOTUSER7.'<br /><br />'
            ._DOWNLOADSNOTUSER8;
    }
    CloseTable();
    include("footer.php");
}

function AddNow() {
    global $downloadsprefix, $db, $userinfo;
    $cat = $_POST['cat'];
    $filesize = $_POST['filesize'];
    $version  = $_POST['version'];
    $homepage = $_POST['homepage'];
    $title = Fix_Quotes($_POST['title']);
    $url   = Fix_Quotes($_POST['url']);
    $description = Fix_Quotes($_POST['description']);
    $auth_name = Fix_Quotes($_POST['auth_name']);
    $email = Fix_Quotes($_POST['email']);
    $result = $db->sql_query("SELECT url FROM ".$downloadsprefix."_downloads WHERE url='$url' LIMIT 0,1");
    if ($db->sql_numrows($result)>0) {
        cpg_error(_DOWNLOADALREADYEXT);
    }
    if(is_user()) {
        $submitter = $userinfo['username'];
    }
// Check if Title exist
    if (empty($title)) {
        cpg_error(_DOWNLOADNOTITLE);
    }
// Check if URL exist
    if (empty($url)) {
        cpg_error(_DOWNLOADNOURL);
    }
// Check if Description exist
    if (empty($description)) {
        cpg_error(_DOWNLOADNODESC);
    }
    $cat = explode('-', $cat);
    if ($cat[1]=='') { $cat[1] = 0; }
    $filesize = ereg_replace('\.','',$filesize);
    $filesize = ereg_replace('\,','',$filesize);
    $db->sql_query("INSERT INTO ".$downloadsprefix."_newdownload VALUES (NULL, '$cat[0]', '$cat[1]', '$title', '$url', '$description', '$auth_name', '$email', '$submitter', '$filesize', '$version', '$homepage')");
    include('header.php');
    downl_menu_tpl(1);
    echo '<br />';
    OpenTable();
    echo '<center><b>'._DOWNLOADRECEIVED.'</b><br />';
    if ($email == '') { echo _CHECKFORIT; }
    CloseTable();
    include('footer.php');
}

function newdownloadgraphic($datetime) {
    global $module_name, $userinfo;
    echo '&nbsp;';
    $count = 0;
    while ($count <= 7) {
        $daysold = L10NTime::date('d-M-Y', gmtime()-(86400 * $count), $userinfo['user_dst'], $userinfo['user_timezone']);
        if ($daysold == $datetime) {
            if ($count<=1) {
                echo "<img src=\"modules/$module_name/images/new_1.gif\" alt=\""._NEWTODAY."\" />";
            }
            if ($count<=3 && $count>1) {
                echo "<img src=\"modules/$module_name/images/new_3.gif\" alt=\""._NEWLAST3DAYS."\" />";
            }
            if ($count<=7 && $count>3) {
                echo "<img src=\"modules/$module_name/images/new_7.gif\" alt=\""._NEWTHISWEEK."\" />";
            }
        }
        $count++;
    }
}

function categorynewdownloadgraphic($cat) {
    global $downloadsprefix, $db, $module_name;
    $newresult = $db->sql_query("SELECT date FROM ".$downloadsprefix."_downloads WHERE cid=$cat order by date desc limit 0,1");
    list($time) = $db->sql_fetchrow($newresult);
    echo '&nbsp;';
    $datetime = formatDateTime($time.' 00:00:00', _DATESTRING3);
    $count = 0;
    while ($count <= 7) {
        $daysold = date("d-M-Y", gmtime()-(86400 * $count));
        if ($daysold == $datetime) {
            if ($count<=1) {
                echo "<img src=\"modules/$module_name/images/new_1.gif\" alt=\""._DCATNEWTODAY."\" />";
            }
            if ($count<=3 && $count>1) {
                echo "<img src=\"modules/$module_name/images/new_3.gif\" alt=\""._DCATLAST3DAYS."\" />";
            }
            if ($count<=7 && $count>3) {
                echo "<img src=\"modules/$module_name/images/new_7.gif\" alt=\""._DCATTHISWEEK."\" />";
            }
        }
        $count++;
    }
}

function popgraphic($hits) {
    global $module_name, $popular;
    if ($hits>=$popular) {
        echo "&nbsp;<img src=\"modules/$module_name/images/popular.gif\" alt=\""._POPULAR.'" />';
    }
}

function convertorderbyin($orderby) {
    // Fix by AlexM
    if ($orderby == 'dateA')   return 'date ASC';
    if ($orderby == 'hitsA')   return 'hits ASC';
    if ($orderby == 'ratingA') return 'downloadratingsummary ASC';
    if ($orderby == 'titleD')  return 'title DESC';
    if ($orderby == 'dateD')   return 'date DESC';
    if ($orderby == 'hitsD')   return 'hits DESC';
    if ($orderby == 'ratingD') return 'downloadratingsummary DESC';
    return 'title ASC';
}

function convertorderbytrans($orderby) {
    if ($orderby == 'hits ASC')   $orderbyTrans = _POPULARITY1;
    if ($orderby == 'hits DESC')  $orderbyTrans = _POPULARITY2;
    if ($orderby == 'title ASC')  $orderbyTrans = _TITLEAZ;
    if ($orderby == 'title DESC') $orderbyTrans = _TITLEZA;
    if ($orderby == 'date ASC')   $orderbyTrans = _DDATE1;
    if ($orderby == 'date DESC')  $orderbyTrans = _DDATE2;
    if ($orderby == 'downloadratingsummary ASC')  $orderbyTrans = _RATING1;
    if ($orderby == 'downloadratingsummary DESC') $orderbyTrans = _RATING2;
    return $orderbyTrans;
}

function convertorderbyout($orderby) {
    if ($orderby == 'date ASC') return 'dateA';
    if ($orderby == 'hits ASC') return 'hitsA';
    if ($orderby == 'downloadratingsummary ASC') return 'ratingA';
    if ($orderby == 'title DESC') return 'titleD';
    if ($orderby == 'date DESC')  return 'dateD';
    if ($orderby == 'hits DESC')  return 'hitsD';
    if ($orderby == 'downloadratingsummary DESC') return 'ratingD';
    return 'titleA';
}

function getit() {
    global $downloadsprefix, $db, $CPG_SESS;
    $lid = intval($_GET['lid']);
    $db->sql_query('UPDATE '.$downloadsprefix.'_downloads SET hits=hits+1 WHERE lid='.$lid);
    $result = $db->sql_query('SELECT url FROM '.$downloadsprefix.'_downloads WHERE lid='.$lid);
    if ($db->sql_numrows($result) > 0) {
        list($url) = $db->sql_fetchrow($result);
        url_redirect($url);
    } else {
        cpg_error(_DL_NOEXISTS);
    }
}

function detecteditorial($lid, $img) {
    global $downloadsprefix, $db, $module_name;
    $resulted2 = $db->sql_query("SELECT adminid FROM ".$downloadsprefix."_editorials WHERE downloadid=$lid");
    $recordexist = $db->sql_numrows($resulted2);
    if ($recordexist != 0) {
    if ($img == 1) {
        echo "&nbsp;&nbsp;<a href=\"".getlink("&amp;d_op=viewdownloadeditorial&amp;lid=$lid")."\"><img src=\"modules/$module_name/images/cool.gif\" alt=\""._EDITORIAL."\" border=\"0\" /></a>";
    } else {
        echo " | <a href=\"".getlink("&amp;d_op=viewdownloadeditorial&amp;lid=$lid")."\">"._EDITORIAL."</a>";
    }
    }
}

function downloadfooter($lid) {
    echo "<font class=\"content\">[ <a href=\"".getlink("&amp;d_op=getit&amp;lid=$lid")."\">"._DOWNLOADNOW."</a> | <a href=\"".getlink("&amp;d_op=ratedownload&amp;lid=$lid")."\">"._RATETHISSITE."</a> ]</font><br /><br />";
    downloadfooterchild($lid);
}

function downloadfooterchild($lid) {
    global $useoutsidevoting;
    if ($useoutsidevoting) {
        echo "<br /><font class=\"content\">"._ISTHISYOURSITE." <a href=\"".getlink("&amp;d_op=outsidedownloadsetup&amp;lid=$lid")."\">"._ALLOWTORATE."</a></font>";
    }
}

function outsidedownloadsetup() {
    global $sitename, $nukeurl;
    $lid = intval($_GET['lid']);
    include("header.php");
    downl_menu_tpl(1);
    echo '<br />';
    OpenTable();
    echo "<center><font class=\"option\"><b>"._PROMOTEYOURSITE."</b></font></center><br /><br />
    "._PROMOTE01."<br /><br />
    <b>1) "._TEXTLINK."</b><br /><br />
    "._PROMOTE02."<br /><br />
    <center><a href=\"$nukeurl/".getlink("&amp;d_op=ratedownload&amp;lid=$lid")."\">"._RATETHISSITE." @ $sitename</a></center><br /><br />
    <center>"._HTMLCODE1."</center><br />
    <center><i>&lt;a href=\"$nukeurl/".getlink("&amp;d_op=ratedownload&amp;lid=$lid")."\"&gt;"._RATETHISSITE."&lt;/a&gt;</i></center>
    <br /><br />
    "._THENUMBER." \"$lid\" "._IDREFER."<br /><br />
    <b>2) "._BUTTONLINK."</b><br /><br />
    "._PROMOTE03."<br /><br />
    <center>
    <form action=\"".getlink()."\" method=\"post\">\n
    <input type=\"hidden\" name=\"lid\" value=\"$lid\" />\n
    <input type=\"hidden\" name=\"d_op\" value=\"ratedownload\" />\n
    <input type=\"submit\" value=\""._RATEIT."\" />\n
    </form>\n
    "._HTMLCODE2."</center><br /><br />
    <table border=\"0\" align=\"center\"><tr><td align=\"left\"><i>
    &lt;form action=\"$nukeurl/".getlink()."\" method=\"post\"&gt;<br />\n
    &nbsp;&nbsp;&lt;input type=\"hidden\" name=\"lid\" value=\"$lid\"&gt;<br />\n
    &nbsp;&nbsp;&lt;input type=\"hidden\" name=\"d_op\" value=\"ratedownload\"&gt;<br />\n
    &nbsp;&nbsp;&lt;input type=\"submit\" value=\""._RATEIT."\"&gt;<br />\n
    &lt;/form&gt;\n
    </i></td></tr></table>
    <br /><br />
    <b>3) "._REMOTEFORM."</b><br /><br />
    "._PROMOTE04."
    <center>
    <form method=\"post\" action=\"$nukeurl/".getlink()."\">
    <table align=\"center\" border=\"0\" width=\"175\" cellspacing=\"0\" cellpadding=\"0\">
    <tr><td align=\"center\"><b>"._VOTE4THISSITE."</b></a></td></tr>
    <tr><td>
    <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
    <tr><td valign=\"top\">
        <select name=\"rating\">
        <option selected>--</option>
    <option>10</option>
    <option>9</option>
    <option>8</option>
    <option>7</option>
    <option>6</option>
    <option>5</option>
    <option>4</option>
    <option>3</option>
    <option>2</option>
    <option>1</option>
    </select>
    </td><td valign=\"top\">
    <input type=\"hidden\" name=\"ratinglid\" value=\"$lid\">
        <input type=\"hidden\" name=\"ratinguser\" value=\"outside\" />
        <input type=\"hidden\" name=\"op value=\"addrating\" />
    <input type=\"submit\" value=\""._DOWNLOADVOTE."\" />
    </td></tr></table>
    </td></tr></table></form>

    <br />"._HTMLCODE3."<br /><br /></center>

    <blockquote><i>
    &lt;form method=\"post\" action=\"$nukeurl/".getlink()."\"&gt;<br />
    &lt;table align=\"center\" border=\"0\" width=\"175\" cellspacing=\"0\" cellpadding=\"0\"&gt;<br />
        &lt;tr&gt;&lt;td align=\"center\"&gt;&lt;b&gt;"._VOTE4THISSITE."&lt;/b&gt;&lt;/a&gt;&lt;/td&gt;&lt;/tr&gt;<br />
        &lt;tr&gt;&lt;td&gt;<br />
        &lt;table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"&gt;<br />
        &lt;tr&gt;&lt;td valign=\"top\"&gt;<br />
            &lt;select name=\"rating\"&gt;<br />
            &lt;option selected&gt;--&lt;/option&gt;<br />
        &lt;option&gt;10&lt;/option&gt;<br />
        &lt;option&gt;9&lt;/option&gt;<br />
        &lt;option&gt;8&lt;/option&gt;<br />
        &lt;option&gt;7&lt;/option&gt;<br />
        &lt;option&gt;6&lt;/option&gt;<br />
        &lt;option&gt;5&lt;/option&gt;<br />
        &lt;option&gt;4&lt;/option&gt;<br />
        &lt;option&gt;3&lt;/option&gt;<br />
        &lt;option&gt;2&lt;/option&gt;<br />
        &lt;option&gt;1&lt;/option&gt;<br />
        &lt;/select&gt;<br />
        &lt;/td&gt;&lt;td valign=\"top\"&gt;<br />
        &lt;input type=\"hidden\" name=\"ratinglid\" value=\"$lid\"&gt;<br />
            &lt;input type=\"hidden\" name=\"ratinguser\" value=\"outside\"&gt;<br />
            &lt;input type=\"hidden\" name=\"d_op\" value=\"addrating\"&gt;<br />
        &lt;input type=\"submit\" value=\""._DOWNLOADVOTE."\"&gt;<br />
        &lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;<br />
    &lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;<br />
    &lt;/form&gt;<br />
    </i></blockquote>
    <br /><br /><center>
    "._PROMOTE05."<br /><br />
    - $sitename "._STAFF."
    <br /><br /></center>";
    CloseTable();
    include("footer.php");
}

function brokendownload() {
    if (!is_user()) {
        url_redirect(getlink());
    }
    $lid = intval($_GET['lid']);
    include("header.php");
    downl_menu_tpl(1);
    echo '<br />';
    OpenTable();
    echo "<center><font class=\"option\"><b>"._REPORTBROKEN."</b></font><br /><br /><br /><font class=\"content\">";
    echo "<form action=\"".getlink()."\" method=\"post\">";
    echo "<input type=\"hidden\" name=\"lid\" value=\"$lid\" />";
    echo _THANKSBROKEN."<br />"._SECURITYBROKEN."<br /><br />";
    echo "<input type=\"hidden\" name=\"d_op\" value=\"brokendownloadS\" /><input type=\"submit\" value=\""._REPORTBROKEN."\" /></center></form>";
    CloseTable();
    include("footer.php");
}

function brokendownloadS() {
    global $downloadsprefix, $db, $anonymous, $userinfo;
    if (!is_user()) {
        url_redirect(getlink());
    }
    $lid = intval($_POST['lid']);
    $ratinguser = $userinfo['user_id'];
    $db->sql_query("insert into ".$downloadsprefix."_modrequest values (NULL, $lid, 0, 0, '', '', '', '$ratinguser', 1, '$auth_name', '$email', '$filesize', '$version', '$homepage')");
    include("header.php");
    downl_menu_tpl(1);
    echo '<br />';
    OpenTable();
    echo "<br /><center>"._THANKSFORINFO."<br /><br />"._LOOKTOREQUEST."</center><br />";
    CloseTable();
    include("footer.php");
}

function modifydownloadrequest() {
    global $downloadsprefix, $db;
    $lid = intval($_GET['lid']);
    include("header.php");
    downl_menu_tpl(1);
    echo '<br />';
    OpenTable();
    if ($blockunregmodify && !is_user()) {
        echo "<br /><br /><center>"._DONLYREGUSERSMODIFY."</center>";
    } else {
        $result = $db->sql_query("SELECT cid, title, url, description, name, email, filesize, version, homepage FROM ".$downloadsprefix."_downloads WHERE lid=$lid");
        echo "<center><font class=\"option\"><b>"._REQUESTDOWNLOADMOD."</b></font><br /><font class=\"content\">";
        while(list($cid, $title, $url, $description, $auth_name, $email, $filesize, $version, $homepage) = $db->sql_fetchrow($result)) {
        echo "<form action=\"".getlink()."\" method=\"post\">"
            ._DOWNLOADID.": <b>$lid</b></center><br /><br /><br />"
            ._DOWNLOADNAME.":<br /><input type=\"text\" name=\"title\" value=\"$title\" size=\"50\" maxlength=\"100\" /><br /><br />"
            ._URL.":<br /><input type=\"text\" name=\"url\" value=\"$url\" size=\"50\" maxlength=\"100\" /><br /><br />"
            ._DESCRIPTION.": <br /><textarea name=\"description\" cols=\"60\" rows=\"10\">$description</textarea><br /><br />";
        $result2= $db->sql_query("SELECT cid, title FROM ".$downloadsprefix."_categories order by title");
        echo "<input type=\"hidden\" name=\"lid\" value=\"$lid\" />"
            ._CATEGORY.": <select name=\"cat\">";

        $result2= $db->sql_query("SELECT cid, title, parentid FROM ".$downloadsprefix."_categories order by title");
        while(list($cid2, $ctitle2, $parentid2) = $db->sql_fetchrow($result2)) {
            $sel = ($cid2==$cid) ? 'selected="selected"': '';
            if ($parentid2!=0) $ctitle2=getparent($parentid2,$ctitle2);
            echo "<option value=\"$cid2\" $sel>$ctitle2</option>";
        }
        echo "</select><br /><br />"
            ._AUTHORNAME.":<br /><input type=\"text\" name=\"auth_name\" value=\"$auth_name\" size=\"30\" maxlength=\"80\" /><br /><br />"
            ._AUTHOREMAIL.":<br /><input type=\"text\" name=\"email\" value=\"$email\" size=\"30\" maxlength=\"80\" /><br /><br />"
            ._FILESIZE.": ("._INBYTES.")<br /><input type=\"text\" name=\"filesize\" value=\"$filesize\" size=\"12\" maxlength=\"11\" /><br /><br />"
            ._VERSION.":<br /><input type=\"text\" name=\"version\" value=\"$version\" size=\"11\" maxlength=\"10\" /><br /><br />"
            ._HOMEPAGE.":<br /><input type=\"text\" name=\"homepage\" value=\"$homepage\" size=\"50\" maxlength=\"200\" /><br /><br />"
            ."<input type=\"hidden\" name=\"d_op\" value=\"modifydownloadrequestS\" />"
            ."<input type=\"submit\" value=\""._SENDREQUEST."\" /></form>";
        }
    }
    CloseTable();
    include("footer.php");
}

function modifydownloadrequestS() {
    global $downloadsprefix, $db, $userinfo, $blockunregmodify;
    $lid = intval($_POST['lid']);
    $ratinguser = (is_user()) ? $userinfo['user_id'] : $anonymous;
    require_once('header.php');
    downl_menu_tpl(1);
    echo '<br />';
    OpenTable();
    if ($blockunregmodify && !is_user()) {
        echo "<center><font class=\"content\">"._DONLYREGUSERSMODIFY."</font></center>";
    } else {
        $cat = explode('-', $_POST['cat']);
        $cat[0] = intval($cat[0]);
        $cat[1] = empty($cat[1]) ? 0 : intval($cat[1]);
        $auth_name = Fix_Quotes($_POST['auth_name']);
        $email = Fix_Quotes($_POST['email']);
        $filesize = intval($_POST['filesize']);
        $version = Fix_Quotes($_POST['version']);
        $homepage = Fix_Quotes($_POST['homepage']);
        $title = Fix_Quotes($_POST['title']);
        $url   = Fix_Quotes($_POST['url']);
        $description = Fix_Quotes($_POST['description']);
        $db->sql_query("insert into ".$downloadsprefix."_modrequest values (NULL, $lid, $cat[0], $cat[1], '$title', '$url', '$description', '$ratinguser', 0, '$auth_name', '$email', '$filesize', '$version', '$homepage')");
        echo "<center><font class=\"content\">"._THANKSFORINFO." "._LOOKTOREQUEST."</font></center>";
    }
    CloseTable();
}

function addrating($ratinglid, $ratinguser, $rating, $ratinghost_name, $ratingcomments) {
    global $downloadsprefix, $db, $userinfo, $module_name, $MAIN_CFG, $module_name, $outsidewaitdays, $anonymous;
    $passtest = true;
    include("header.php");
    completevoteheader();
    if(is_user()) {
        $ratinguser = $userinfo['user_id'];
    } else if (isset($_POST['ratinguser'])) {
        $ratinguser = "outside";
    } else {
        $ratinguser = $anonymous;
    }
    $results3 = $db->sql_query("SELECT title FROM ".$downloadsprefix."_downloads WHERE lid=$ratinglid");
    while(list($title)=$db->sql_fetchrow($results3)) $ttitle = $title;
    /* Make sure only 1 anonymous from an IP in a single day. */
    $ip = gethostbyaddr($_SERVER['REMOTE_ADDR']);//returns ip on function failure
    /* Check if Rating is Null */
    if ($rating=="--") {
        $error = "nullerror";
        completevote($error);
        $passtest = false;
    }
    /* Check if Download POSTER is voting (UNLESS Anonymous users allowed to post) */
    if ($ratinguser != $anonymous && $ratinguser != "outside") {
        $result= $db->sql_query("SELECT submitter FROM ".$downloadsprefix."_downloads WHERE lid=$ratinglid");
        while(list($ratinguserDB)=$db->sql_fetchrow($result)) {
            if ($ratinguserDB==$ratinguser) {
                $error = "postervote";
                completevote($error);
                $passtest = false;
            }
        }
    }
    /* Check if REG user is trying to vote twice. */
    if ($ratinguser!=$anonymous && $ratinguser != "outside") {
        $result= $db->sql_query("SELECT ratinguser FROM ".$downloadsprefix."_votedata WHERE ratinglid=$ratinglid");
        while(list($ratinguserDB)=$db->sql_fetchrow($result)) {
            if ($ratinguserDB==$ratinguser) {
                $error = "regflood";
                completevote($error);
                $passtest = false;
            }
        }
    }
    /* Check if ANONYMOUS user is trying to vote more than once per day. */
    if ($ratinguser==$anonymous){
        $yesterdaytimestamp = (time()-(86400 * $MAIN_CFG[$module_name]['anonwaitdays']));
        $ytsDB = Date("Y-m-d H:i:s", $yesterdaytimestamp);
        $result= $db->sql_query("SELECT * FROM ".$downloadsprefix."_votedata WHERE ratinglid=$ratinglid AND ratinguser='$anonymous' AND ratinghostname = '$ip' AND TO_DAYS(NOW()) - TO_DAYS(ratingtimestamp) < ".$MAIN_CFG[$module_name]['anonwaitdays']);
        $anonvotecount = $db->sql_numrows($result);
        if ($anonvotecount >= 1) {
            $error = "anonflood";
            completevote($error);
            $passtest = false;
        }
    }
    /* Check if OUTSIDE user is trying to vote more than once per day. */
    if ($ratinguser=="outside") {
        $yesterdaytimestamp = (time()-(86400 * $outsidewaitdays));
        $ytsDB = Date("Y-m-d H:i:s", $yesterdaytimestamp);
        $result= $db->sql_query("SELECT * FROM ".$downloadsprefix."_votedata WHERE ratinglid=$ratinglid AND ratinguser='outside' AND ratinghostname = '$ip' AND TO_DAYS(NOW()) - TO_DAYS(ratingtimestamp) < $outsidewaitdays");
        $outsidevotecount = $db->sql_numrows($result);
        if ($outsidevotecount >= 1) {
            $error = "outsideflood";
            completevote($error);
            $passtest = false;
        }
    }
    /* Passed Tests */
    if ($passtest) {
        $ratingcomments = Fix_Quotes($ratingcomments);
        /* All is well.  Add to Line Item Rate to DB. */
        $db->sql_query("INSERT into ".$downloadsprefix."_votedata values (NULL,'$ratinglid', '$ratinguser', '$rating', '$ip', '$ratingcomments', now())");
        /* All is well.  Calculate Score & Add to Summary (for quick retrieval & sorting) to DB. */
        /* NOTE: If weight is modified, ALL downloads need to be refreshed with new weight. */
        /*     Running a SQL statement with your modded calc for ALL downloads will accomplish this. */
        $voteresult = $db->sql_query("SELECT rating, ratinguser, ratingcomments FROM ".$downloadsprefix."_votedata WHERE ratinglid = $ratinglid");
        $totalvotesDB = $db->sql_numrows($voteresult);
        include ("modules/$module_name/voteinclude.php");
        $db->sql_query("UPDATE ".$downloadsprefix."_downloads SET downloadratingsummary=$finalrating,totalvotes=$totalvotesDB,totalcomments=$truecomments WHERE lid = $ratinglid");
        $error = "none";
        completevote($error);
    }
    completevotefooter($ratinglid, $ttitle, $ratinguser);
    include("footer.php");
}

function completevoteheader() {
    downl_menu_tpl(1);
    echo '<br />';
    OpenTable();
}

function completevotefooter($lid, $ttitle, $ratinguser) {
    global $downloadsprefix, $db, $sitename;
    $result = $db->sql_query("SELECT url FROM ".$downloadsprefix."_downloads WHERE lid=$lid");
    list($url)=$db->sql_fetchrow($result);
    echo "<font class=\"content\">"._THANKSTOTAKETIME." $sitename. "._DLETSDECIDE."</font><br /><br /><br />";
    if ($ratinguser=="outside") {
        echo "<center><font class=\"content\">".WEAPPREACIATE." $sitename!<br /><a href=\"$url\">"._RETURNTO." $ttitle</a></font><center><br /><br />";
        $result= $db->sql_query("SELECT title FROM ".$downloadsprefix."_downloads WHERE lid=$lid");
        list($title)=$db->sql_fetchrow($result);
        $ttitle = ereg_replace (" ", "_", $title);
    }
    downl_infomenu_tpl($lid, $ttitle);
    CloseTable();
}

function completevote($error) {
    if ($error == "none") echo "<center><font class=\"content\"><b>"._COMPLETEVOTE1."</b></font></center>";
    if ($error == "anonflood") echo "<center><font class=\"option\"><b>"._COMPLETEVOTE2."</b></font></center><br />";
    if ($error == "regflood") echo "<center><font class=\"option\"><b>"._COMPLETEVOTE3."</b></font></center><br />";
    if ($error == "postervote") echo "<center><font class=\"option\"><b>"._COMPLETEVOTE4."</b></font></center><br />";
    if ($error == "nullerror") echo "<center><font class=\"option\"><b>"._COMPLETEVOTE5."</b></font></center><br />";
    if ($error == "outsideflood") echo "<center><font class=\"option\"><b>"._COMPLETEVOTE6."</b></font></center><br />";
}

function ratedownload() {
    global $userinfo;
    $lid = intval($_REQUEST['lid']);
    include("header.php");
    downl_menu_tpl(1);
    echo '<br />';
    OpenTable();
    $displaytitle = ereg_replace ("_", " ", $ttitle);
    $ip = $_SERVER["REMOTE_HOST"];
    if (empty($ip)) {
       $ip = $_SERVER["REMOTE_ADDR"];
    }
    echo "<b>$displaytitle</b>"
    ."<ul><font class=\"content\">"
    ."<li>"._RATENOTE1
    ."<li>"._RATENOTE2
    ."<li>"._RATENOTE3
    ."<li>"._DRATENOTE4
    ."<li>"._RATENOTE5;
    if(is_user()) {
        echo "<li>"._YOUAREREGGED."<li>"._FEELFREE2ADD;
        $auth_name = $userinfo['username'];
    } else {
        echo "<li>"._YOUARENOTREGGED."<li>"._IFYOUWEREREG;
        $auth_name = $anonymous;
    }
    echo "</ul>"
        ."<form method=\"post\" action=\"".getlink()."\">"
        ."<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"100%\">"
        ."<tr><td width=\"25\" nowrap></td>"
        ."<tr><td width=\"25\" nowrap></td><td width=\"550\">"
        ."<input type=\"hidden\" name=\"ratinglid\" value=\"$lid\" />"
        ."<input type=\"hidden\" name=\"ratinguser\" value=\"$auth_name\" />"
        ."<input type=\"hidden\" name=\"ratinghost_name\" value=\"$ip\" />"
        ."<font class=content>"._RATETHISSITE.""
        ."<select name=\"rating\">"
        ."<option>--</option>"
        ."<option>10</option>"
        ."<option>9</option>"
        ."<option>8</option>"
        ."<option>7</option>"
        ."<option>6</option>"
        ."<option>5</option>"
        ."<option>4</option>"
        ."<option>3</option>"
        ."<option>2</option>"
        ."<option>1</option>"
        ."</select></font>"
        ."<font class=\"content\"><input type=\"submit\" value=\""._RATETHISSITE."\" /></font>"
        ."<br /><br />";
    if(is_user()) {
        echo "<b>"._SCOMMENTS.":</b><br /><textarea wrap=\"virtual\" cols=\"50\" rows=\"10\" name=\"ratingcomments\"></textarea><br /><br /><br /></font>";
    } else {
        echo"<input type=\"hidden\" name=\"ratingcomments\" value=\"\" />";
    }
    echo "</td></tr></table></form>";
    echo "<center>";
    downloadfooterchild($lid);
    echo "</center>";
    CloseTable();
    include("footer.php");
}

function CoolSize($size) {
    $mb = 1024*1024;
    if ( $size > $mb ) {
        $mysize = sprintf ("%01.2f",$size/$mb) . " MB";
    } elseif ( $size >= 1024 ) {
        $mysize = sprintf ("%01.2f",$size/1024) . " Kb";
    } else {
        $mysize = $size . " bytes";
    }
    return $mysize;
}

if (isset($_POST['ratinglid']) && isset ($_POST['ratinguser']) && isset ($_POST['rating'])) {
    addrating(intval($_POST['ratinglid']), $_POST['ratinguser'], intval($_POST['rating']), $_POST['ratinghost_name'], $_POST['ratingcomments']);
}

$d_op = isset($_POST['d_op']) ? $_POST['d_op'] : (isset($_GET['d_op']) ? $_GET['d_op']:'');

switch($d_op) {

    case "AddDownload":
    AddDownload();
    break;

    case "NewDownloads":
    require_once("modules/$module_name/new.php");
    NewDownloads();
    break;

    case "NewDownloadsDate":
    require_once("modules/$module_name/new.php");
    NewDownloadsDate();
    break;

    case "TopRated":
    require_once("modules/$module_name/top.php");
    TopRated();
    break;

    case "MostPopular":
    require_once("modules/$module_name/pop.php");
    MostPopular();
    break;

    case "viewdownload":
    require_once("modules/$module_name/view.php");
    viewdownload();
    break;

    case "brokendownload":
    brokendownload();
    break;

    case "modifydownloadrequest":
    modifydownloadrequest();
    break;

    case "modifydownloadrequestS":
    modifydownloadrequestS();
    break;

    case "brokendownloadS":
    brokendownloadS();
    break;

    case "getit":
    getit();
    break;

    case "Add":
    AddNow();
    break;

    case "search":
    require_once("modules/$module_name/search.php");
    search();
    break;

    case "ratedownload":
    ratedownload();
    break;

    case "viewdownloadcomments":
    require_once("modules/$module_name/comments.php");
    viewdownloadcomments();
    break;

    case "outsidedownloadsetup":
    outsidedownloadsetup();
    break;

    case "viewdownloadeditorial":
    require_once("modules/$module_name/editorial.php");
    viewdownloadeditorial();
    break;

    case "viewdownloaddetails":
    require_once("modules/$module_name/details.php");
    viewdownloaddetails();
    break;

    default:
    index();
    break;
}
