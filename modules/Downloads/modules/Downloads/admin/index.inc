<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Downloads/modules/Downloads/admin/index.inc,v $
  $Revision: 9.2 $
  $Author: phoenix $
  $Date: 2005/05/03 03:50:59 $

***********************************************************************/
if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin(strtolower($op))) { die('Access Denied'); }
$pagetitle .= ' '._BC_DELIM.' '.$op;
$downloadsprefix = $prefix.'_'.strtolower($op);

function getparent($parentid, $title) {
    global $downloadsprefix, $db;
    $row = $db->sql_ufetchrow("SELECT title, parentid FROM ".$downloadsprefix."_categories WHERE cid='$parentid'", SQL_ASSOC, __FILE__);
    if (!empty($row['title'])) $title = $row['title'].'/'.$title;
    if ($row['parentid'] > 0 ) {
        $title = getparent($row['parentid'], $title);
    }
    return $title;
}

function downloads() {
    global $downloadsprefix, $db, $op;
    require_once('header.php');
    GraphicAdmin('_AMENU6');
    OpenTable();
    $result = $db->sql_query("SELECT COUNT(*) FROM ".$downloadsprefix."_downloads");
    $numrows = $db->sql_fetchrow($result);
    echo "<center><font class=\"content\">"._THEREARE." <b>$numrows[0]</b> "._DOWNLOADSINDB."</font></center>";
    CloseTable();

/* Temporarily 'homeless' downloads functions (to be revised in admin breakup) */

    $result = $db->sql_query("SELECT COUNT(*) FROM ".$downloadsprefix."_modrequest WHERE brokendownload='1'");
    list($totalbrokendownloads) = $db->sql_fetchrow($result);
    $result = $db->sql_query("SELECT COUNT(*) FROM ".$downloadsprefix."_modrequest WHERE brokendownload='0'");
    list($totalmodrequests) = $db->sql_fetchrow($result);

/* List Downloads waiting for validation */

    $catarray = array();
    $catlist = '';
    $result2 = $db->sql_query("select cid, title, parentid from ".$downloadsprefix."_categories order by parentid,title");
    while($cat = $db->sql_fetchrow($result2)) {
        if ($cat['parentid'] != 0) { $cat['title'] = getparent($cat['parentid'], $cat['title']); }
        $catarray[] = $cat;
        $catlist .= "<option value=\"$cat[cid]\">$cat[title]</option>";
    }

    $result = $db->sql_query("SELECT lid, cid, sid, title, url, description, name, email, submitter, filesize, version, homepage FROM ".$downloadsprefix."_newdownload ORDER BY lid");
    if ($db->sql_numrows($result) > 0) {
        OpenTable();
        echo "<center><font class=\"content\"><b>"._DOWNLOADSWAITINGVAL."</b></font></center><br /><br />";
        while (list($lid, $cid, $sid, $title, $url, $description, $name, $email, $submitter, $filesize, $version, $homepage) = $db->sql_fetchrow($result)) {
            if ($submitter == "") { $submitter = _NONE; }
            $homepage = ereg_replace("http://","",$homepage);
            echo "\n<form name=\"$lid\" action=\"".adminlink($op).'" method="post" enctype="multipart/form-data" accept-charset="utf-8">'
                ."<b>"._DOWNLOADID.": $lid</b><br /><br />"
                ._SUBMITTER.": <b>$submitter</b><br />"
                ._DOWNLOADNAME.": <input type=\"text\" name=\"title\" value=\"$title\" size=\"50\" maxlength=\"100\" /><br />"
                ._FILEURL.": <input type=\"text\" name=\"url\" value=\"$url\" size=\"50\" maxlength=\"100\" />&nbsp;[ <a target=\"_blank\" href=\"$url\">"._CHECK."</a> ]<br />"
                ._DESCRIPTION.": <br /><textarea name=\"description\" cols=\"60\" rows=\"10\">$description</textarea><br />"
                ._AUTHORNAME.": <input type=\"text\" name=\"name\" size=\"20\" maxlength=\"100\" value=\"$name\" />&nbsp;&nbsp;"
                ._AUTHOREMAIL.": <input type=\"text\" name=\"email\" size=\"20\" maxlength=\"100\" value=\"$email\" /><br />"
                ._FILESIZE.": <input type=\"text\" name=\"filesize\" size=\"12\" maxlength=\"11\" value=\"$filesize\" /><br />"
                ._VERSION.": <input type=\"text\" name=\"version\" size=\"11\" maxlength=\"10\" value=\"$version\" /><br />"
                ._HOMEPAGE.": <input type=\"text\" name=\"homepage\" size=\"30\" maxlength=\"200\" value=\"http://$homepage\" /> [ <a href=\"http://$homepage\">"._VISIT."</a> ]<br />"
                ._CATEGORY.": <select name=\"cat\">";
            foreach($catarray AS $cat) {
                $sel = ($cat['cid'] == $cid) ? ' selected="selected"' : '';
                echo "<option value=\"$cat[cid]\"$sel>$cat[title]</option>";
            }
            echo "</select>
                  <input type=\"hidden\" name=\"new\" value=\"1\" />
                  <input type=\"hidden\" name=\"hits\" value=\"0\" />
                  <input type=\"hidden\" name=\"lid\" value=\"$lid\" />
                  <input type=\"hidden\" name=\"submitter\" value=\"$submitter\">
                  <input type=\"hidden\" name=\"mode\" value=\"DownloadsAddDownload\" />
                  <input type=\"submit\" value="._ADD." /> [ <a href=\"".adminlink("&amp;mode=DownloadsDelNew&amp;lid=$lid")."\">"._DELETE."</a> ]
                  </form><br /><hr noshade=\"noshade\"><br />\n";
        }
        CloseTable();
        echo "<br />";
    }

// Add a New Category

    OpenTable();
    echo '<form action="'.adminlink('&mode=DownloadsAddCat').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">'
        ."<font class=\"content\"><b>"._ADDCATEGORY."</b></font><br /><br />"
        ._NAME.": <input type=\"text\" name=\"title\" size=\"30\" maxlength=\"100\" /><br />";
    echo _CATEGORY.": <select name=\"parentid\" class=\"content\"><option value=\"0\">"._NONE."</option>$catlist";
    echo "</select><br />"
        ._DESCRIPTION.":<br /><textarea name=\"cdescription\" cols=\"60\" rows=\"10\"></textarea><br />"
        ._EXTENDEDTEXT.":<br /><textarea name=\"ldescription\" cols=\"60\" rows=\"10\"></textarea><br />"
        ."<input type=\"submit\" value=\""._ADD."\" /><br />"
        ."</form>";
    CloseTable();
    echo "<br />";

// Add a New Download to Database

    $result = $db->sql_query("select COUNT(*) from ".$downloadsprefix."_categories");
    list($numcats) = $db->sql_fetchrow($result);
    if ($numcats > 0) {
        OpenTable();
        echo '<form action="'.adminlink('&mode=DownloadsAddDownload').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">'
            ."<font class=\"content\"><b>"._ADDNEWDOWNLOAD."</b><br /><br />"
            ._DOWNLOADNAME.": <input type=\"text\" name=\"title\" size=\"50\" maxlength=\"100\" /><br />"
            ._FILEURL.": <input type=\"text\" name=\"url\" size=\"50\" maxlength=\"100\" value=\"http://\" /><br />";
        echo _CATEGORY.": <select name=\"cat\">$catlist";
        echo "</select><br /><br /><br />"
            ._DESCRIPTION255."<br /><textarea name=\"description\" cols=\"60\" rows=\"5\"></textarea><br /><br /><br />"
            ._AUTHORNAME.": <input type=\"text\" name=\"name\" size=\"30\" maxlength=\"60\" /><br /><br />"
            ._AUTHOREMAIL.": <input type=\"text\" name=\"email\" size=\"30\" maxlength=\"60\" /><br /><br />"
            ._FILESIZE.": <input type=\"text\" name=\"filesize\" size=\"12\" maxlength=\"11\" /> ("._INBYTES.")<br /><br />"
            ._VERSION.": <input type=\"text\" name=\"version\" size=\"11\" maxlength=\"10\" /><br /><br />"
            ._HOMEPAGE.": <input type=\"text\" name=\"homepage\" size=\"30\" maxlength=\"200\" value=\"http://\" /><br /><br />"
            ._HITS.": <input type=\"text\" name=\"hits\" size=\"12\" maxlength=\"11\" /><br /><br />"
            ."<input type=\"hidden\" name=\"new\" value=\"0\" />"
            ."<input type=\"hidden\" name=\"lid\" value=\"0\" />"
            ."<center><input type=\"submit\" value=\""._ADDDURL."\" /><br />"
            ."</form>";
        CloseTable();
        echo "<br />";

// Modify Category

        OpenTable();
        echo '<form action="'.adminlink($op).'" method="post" enctype="multipart/form-data" accept-charset="utf-8">'
            ."<font class=\"content\"><b>"._MODCATEGORY."</b></font><br /><br />";
        echo _CATEGORY.": <select name=\"cat\">$catlist";
        echo "</select>"
            ."<input type=\"hidden\" name=\"mode\" value=\"DownloadsModCat\" />"
            ."<input type=\"submit\" value=\""._MODIFY."\" />"
            ."</form>";
        CloseTable();
        echo "<br />";
    }

// Modify Downloads

    if ($numrows > 0) {
        OpenTable();
        echo '<form action="'.adminlink($op).'" method="post" enctype="multipart/form-data" accept-charset="utf-8">'
            ."<font class=\"content\"><b>"._MODDOWNLOAD."</b><br /><br />"
            ._DOWNLOADID.": <input type=\"text\" name=\"lid\" size=\"12\" maxlength=\"11\" />&nbsp;&nbsp;"
            ."<input type=\"hidden\" name=\"mode\" value=\"DownloadsModDownload\" />"
            ."<input type=\"submit\" value=\""._MODIFY."\" />"
            ."</form>";
        CloseTable();
        echo "<br />";
    }

// Transfer Categories

    if ($numcats > 0) {
        OpenTable();
        echo '<form action="'.adminlink($op).'" method="post" enctype="multipart/form-data" accept-charset="utf-8">'
            ."<font class=\"option\"><b>"._EZTRANSFERDOWNLOADS."</b></font><br /><br />"
            ._CATEGORY.": "
            ."<select name=\"cidfrom\">$catlist"
            ."</select><br />"
            ._IN."&nbsp;"._CATEGORY.": "
            ."<select name=\"cidto\">$catlist"
            ."</select><br />"
            ."<input type=\"hidden\" name=\"mode\" value=\"DownloadsTransfer\" />"
            ."<input type=\"submit\" value=\""._EZTRANSFERDOWNLOAD."\" /><br />"
            ."</form>";
        CloseTable();
        echo '<br />';
    }
    require('footer.php');
}

function DownloadsTransfer() {
    global $downloadsprefix, $db, $op;
    $db->sql_query("update ".$downloadsprefix."_downloads set cid=".intval($_POST['cidto']).' WHERE cid='.intval($_POST['cidfrom']));
    url_redirect(adminlink($op));
}

function DownloadsListBrokenDownloads() {
    global $bgcolor1, $bgcolor2, $downloadsprefix, $db, $user_prefix;
    require_once('header.php');
    GraphicAdmin('_AMENU6');
    OpenTable();
    echo '<div align="center" class="title">'._WEBDOWNLOADSADMIN.'</div>';
    CloseTable();
    echo '<br />';
    OpenTable();
    $result = $db->sql_query("select requestid, lid, modifysubmitter from ".$downloadsprefix."_modrequest where brokendownload='1' order by requestid");
    $totalbrokendownloads = $db->sql_numrows($result);
    echo "<center><font class=\"content\"><b>"._DUSERREPBROKEN." ($totalbrokendownloads)</b></font></center><br /><br /><center>"
        ._DIGNOREINFO."<br />"
        ._DDELETEINFO."</center><br /><br /><br />"
        ."<table align=\"center\" width=\"450\">";
    if ($totalbrokendownloads==0) {
        echo "<center><font class=\"content\">"._DNOREPORTEDBROKEN."</font></center><br /><br /><br />";
    } else {
        $colorswitch = $bgcolor2;
        echo "<tr>"
            ."<td><b>"._DOWNLOAD."</b></td>"
            ."<td><b>"._SUBMITTER."</b></td>"
            ."<td><b>"._DOWNLOADOWNER."</b></td>"
            ."<td><b>"._IGNORE."</b></td>"
            ."<td><b>"._DELETE."</b></td>"
            ."<td><b>"._EDIT."</b></td>"
            ."</tr>";
        while(list($requestid, $lid, $modifysubmitter)=$db->sql_fetchrow($result)) {
            $result2 = $db->sql_query("select title, url, submitter from ".$downloadsprefix."_downloads where lid='$lid'");
            if ($modifysubmitter != '$anonymous') {
                $result3 = $db->sql_query("select user_email from ".$user_prefix."_users where username='$modifysubmitter'");
                list($email)=$db->sql_fetchrow($result3);
            }
            list($title, $url, $owner)=$db->sql_fetchrow($result2);
            $result4 = $db->sql_query("select user_email from ".$user_prefix."_users where username='$owner'");
            list($owneremail)=$db->sql_fetchrow($result4);
            echo "<tr>"
            ."<td bgcolor=\"$colorswitch\"><a href=\"$url\">$title</a>"
            ."</td>";
            if ($email=='') {
                echo "<td bgcolor=\"$colorswitch\">$modifysubmitter";
            } else {
                echo "<td bgcolor=\"$colorswitch\"><a href=\"mailto:$email\">$modifysubmitter</a>";
            }
            echo "</td><td bgcolor=\"$colorswitch\">";
            if ($owneremail=='') {
                echo "$owner";
            } else {
                echo "<a href=\"mailto:$owneremail\">$owner</a>";
            }
            echo "</td>"
                ."<td bgcolor=\"$colorswitch\"><center><a href=\"".adminlink("&amp;mode=DownloadsIgnoreBrokenDownloads&amp;lid=$lid")."\">X</a></center></td>"
                ."<td bgcolor=\"$colorswitch\"><center><a href=\"".adminlink("&amp;mode=DownloadsDelBrokenDownloads&amp;lid=$lid")."\">X</a></center></td>"
                ."<td bgcolor=\"$colorswitch\"><center><a href=\"".adminlink("&amp;mode=DownloadsModDownload&amp;lid=$lid")."\">X</a></center></td>"
                ."</tr>";
            if ($colorswitch == $bgcolor2) {
                $colorswitch = $bgcolor1;
            } else {
                $colorswitch = $bgcolor2;
            }
        }
    }
    echo '</table>';
    CloseTable();
    require('footer.php');
}

function DownloadsDelBrokenDownloads() {
    global $downloadsprefix, $db;
    $lid = intval($_GET['lid']);
    $db->sql_query("delete from ".$downloadsprefix."_modrequest where lid='$lid'");
    $db->sql_query("delete from ".$downloadsprefix."_downloads where lid='$lid'");
    url_redirect(adminlink("&mode=DownloadsListBrokenDownloads"));
}

function DownloadsIgnoreBrokenDownloads() {
    global $downloadsprefix, $db;
    $db->sql_query("delete from ".$downloadsprefix."_modrequest where lid=".intval($_GET['lid']).' and brokendownload=1');
    url_redirect(adminlink("&mode=DownloadsListBrokenDownloads"));
}

function DownloadsListModRequests() {
    global $bgcolor2, $downloadsprefix, $db, $user_prefix;
    require_once('header.php');
    GraphicAdmin('_AMENU6');
    OpenTable();
    echo '<div align="center" class="title">'._WEBDOWNLOADSADMIN.'</div>';
    CloseTable();
    echo '<br />';
    OpenTable();
    $result = $db->sql_query("select requestid, lid, cid, sid, title, url, description, modifysubmitter, name, email, filesize, version, homepage from ".$downloadsprefix."_modrequest where brokendownload='0' order by requestid");
    $totalmodrequests = $db->sql_numrows($result);
    echo "<center><font class=\"content\"><b>"._DUSERMODREQUEST." ($totalmodrequests)</b></font></center><br /><br /><br />";
    echo "<table width=\"95%\"><tr><td>";
    while(list($requestid, $lid, $cid, $sid, $title, $url, $description, $modifysubmitter, $name, $email, $filesize, $version, $homepage)=$db->sql_fetchrow($result)) {
        $result2 = $db->sql_query("select cid, sid, title, url, description, name, email, submitter, filesize, version, homepage from ".$downloadsprefix."_downloads where lid='$lid'");
        list($origcid, $origsid, $origtitle, $origurl, $origdescription, $origname, $origemail, $owner, $origfilesize, $origversion, $orighomepage)=$db->sql_fetchrow($result2);
        $result3 = $db->sql_query("select title from ".$downloadsprefix."_categories where cid='$cid'");
        $result5 = $db->sql_query("select title from ".$downloadsprefix."_categories where cid='$origcid'");
        $result7 = $db->sql_query("select user_email from ".$user_prefix."_users where username='$modifysubmitter'");
        $result8 = $db->sql_query("select user_email from ".$user_prefix."_users where username='$owner'");
        list($cidtitle)=$db->sql_fetchrow($result3);
        list($origcidtitle)=$db->sql_fetchrow($result5);
        list($modifysubmitteremail)=$db->sql_fetchrow($result7);
        list($owneremail)=$db->sql_fetchrow($result8);
        $title = $title;
        $description = $description;
        if ($owner=="") {
            $owner="administration";
        }
        if ($origsidtitle=="") {
            $origsidtitle= "-----";
        }
        if ($sidtitle=="") {
            $sidtitle= "-----";
        }
        echo "<table border=\"1\" bordercolor=\"black\" cellpadding=\"5\" cellspacing=\"0\" align=\"center\" width=\"450\">"
            ."<tr>"
            ."<td>"
            ."<table width=\"100%\" bgcolor=\"$bgcolor2\">"
            ."<tr>"
            ."<td valign=\"top\" width=\"45%\"><b>"._ORIGINAL."</b></td>"
            ."<td rowspan=\"10\" valign=\"top\" align=\"left\"><font class=\"tiny\"><br />"._DESCRIPTION.":<br />$origdescription</font></td>"
            ."</tr>"
            ."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._TITLE.": $origtitle</td></tr>"
            ."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._URL.": <a href=\"$origurl\">$origurl</a></td></tr>"
            ."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._CATEGORY.": $origcidtitle</td></tr>"
            ."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._SUBCATEGORY.": $origsidtitle</td></tr>"
            ."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._AUTHORNAME.": $origname</td></tr>"
            ."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._AUTHOREMAIL.": $origemail</td></tr>"
            ."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._FILESIZE.": $origfilesize</td></tr>"
            ."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._VERSION.": $origversion</td></tr>"
            ."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._HOMEPAGE.": <a href=\"$orighomepage\" target=\"new\">$orighomepage</a></td></tr>"
            ."</table>"
            ."</td>"
            ."</tr>"
            ."<tr>"
            ."<td>"
            ."<table width=\"100%\">"
            ."<tr>"
            ."<td valign=\"top\" width=\"45%\"><b>"._PROPOSED."</b></td>"
            ."<td rowspan=\"10\" valign=\"top\" align=\"left\"><font class=\"tiny\"><br />"._DESCRIPTION.":<br />$description</font></td>"
            ."</tr>"
            ."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._TITLE.": $title</td></tr>"
            ."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._URL.": <a href=\"$url\">$url</a></td></tr>"
            ."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._CATEGORY.": $cidtitle</td></tr>"
            ."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._SUBCATEGORY.": $sidtitle</td></tr>"
            ."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._AUTHORNAME.": $name</td></tr>"
            ."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._AUTHOREMAIL.": $email</td></tr>"
            ."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._FILESIZE.": $filesize</td></tr>"
            ."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._VERSION.": $version</td></tr>"
            ."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._HOMEPAGE.": <a href=\"$homepage\" target=\"new\">$homepage</a></td></tr>"
            ."</table>"
            ."</td>"
            ."</tr>"
            ."</table>"
            ."<table align=\"center\" width=\"450\">"
            .'<tr><td align="left"><font class="tiny">'._SUBMITTER;
        if ($modifysubmitteremail=="") {
            echo ": $modifysubmitter";
        } else {
            echo ": <a href=\"mailto:$modifysubmitteremail\">$modifysubmitter</a>";
        }
        echo '</font></td><td align="center"><font class="tiny">'._OWNER;
        if ($owneremail=="") {
            echo ": $owner";
        } else {
            echo ": <a href=\"mailto:$owneremail\">$owner</a>";
        }
        echo "</font></td><td align=\"right\"><font class=\"tiny\">( <a href=\"".adminlink("&amp;mode=DownloadsChangeModRequests&amp;requestid=$requestid")."\">"._ACCEPT."</a> / <a href=\"".adminlink("&amp;mode=DownloadsChangeIgnoreRequests&amp;requestid=$requestid")."\">"._IGNORE."</a> )</font></td></tr></table><br /><br />";
    }
    if ($totalmodrequests == 0) {
        echo "<center>"._NOMODREQUESTS."<br /><br />"._GOBACK."<br /><br /></center>";
    }
    echo '</td></tr></table>';
    CloseTable();
    require('footer.php');
}

function DownloadsChangeModRequests() {
    global $downloadsprefix, $db;
    $requestid = intval($_GET['requestid']);
    $result = $db->sql_query("select requestid, lid, cid, sid, title, url, description, name, email, filesize, version, homepage from ".$downloadsprefix."_modrequest where requestid='$requestid'");
    while(list($requestid, $lid, $cid, $sid, $title, $url, $description, $name, $email, $filesize, $version, $homepage)=$db->sql_fetchrow($result)) {
        $title = Fix_Quotes($title);
        $description = Fix_Quotes($description);
        $db->sql_query("UPDATE ".$downloadsprefix."_downloads SET cid=$cid, sid=$sid, title='$title', url='$url', description='$description', name='$name', email='$email', filesize='$filesize', version='$version', homepage='$homepage' WHERE lid='$lid'");
        $db->sql_query("delete from ".$downloadsprefix."_modrequest where requestid='$requestid'");
    }
    url_redirect(adminlink("&mode=DownloadsListModRequests"));
}

function DownloadsChangeIgnoreRequests($requestid) {
    global $downloadsprefix, $db;
    $db->sql_query("delete from ".$downloadsprefix."_modrequest where requestid=".intval($_GET['requestid']));
    url_redirect(adminlink("&mode=DownloadsListModRequests"));
}

function DownloadsCleanVotes() {
    global $downloadsprefix, $db, $op;
    $totalvoteresult = $db->sql_query("select distinct ratinglid FROM ".$downloadsprefix."_votedata");
    while(list($lid)=$db->sql_fetchrow($totalvoteresult)) {
    $voteresult = $db->sql_query("select rating, ratinguser, ratingcomments FROM ".$downloadsprefix."_votedata WHERE ratinglid='$lid'");
    $totalvotesDB = $db->sql_numrows($voteresult);
    require('voteinclude.php');
        $db->sql_query("UPDATE ".$downloadsprefix."_downloads SET downloadratingsummary=$finalrating,totalvotes=$totalvotesDB,totalcomments=$truecomments WHERE lid='$lid'");
    }
    url_redirect(adminlink($op));
}

function DownloadsDelNew() {
    global $downloadsprefix, $db, $op;
    $db->sql_query("delete from ".$downloadsprefix."_newdownload WHERE lid=".intval($_GET['lid']));
    url_redirect(adminlink($op));
}

function DownloadsDownloadCheck() {
    global $downloadsprefix, $db;
    require_once('header.php');
    GraphicAdmin('_AMENU6');
    OpenTable();
    echo '<div align="center" class="title">'._WEBDOWNLOADSADMIN.'</div>';
    CloseTable();
    echo '<br />';
    OpenTable();
    echo "<center><font class=\"content\"><b>"._DOWNLOADVALIDATION."</b></font></center><br />"
        ."<table width=\"100%\" align=\"center\"><tr><td colspan=\"2\" align=\"center\">"
        ."<a href=\"".adminlink("&amp;mode=DownloadsValidate&amp;cid=0")."\">"._CHECKALLDOWNLOADS."</a><br /><br /></td></tr>"
        ."<tr><td valign=\"top\"><center><b>"._CHECKCATEGORIES."</b><br />"._INCLUDESUBCATEGORIES."<br /><br /><font class=\"tiny\">";
    $result = $db->sql_query("select cid, title from ".$downloadsprefix."_categories order by title");
    while(list($cid, $title) = $db->sql_fetchrow($result)) {
        $transfertitle = str_replace(' ', '_', $title);
        echo "<a href=\"".adminlink("&amp;mode=DownloadsValidate&amp;cid=$cid")."\">$title</a><br />";
    }
    echo '</font></center></td></tr></table>';
    CloseTable();
    require('footer.php');
}

function DownloadsValidate() {
    global $bgcolor2, $downloadsprefix, $db;
    $cid = intval($_GET['cid']);
    require_once('header.php');
    GraphicAdmin('_AMENU6');
    OpenTable();
    echo '<div align="center" class="title">'._WEBDOWNLOADSADMIN.'</div>';
    CloseTable();
    echo '<br />';
    OpenTable();
    $transfertitle = str_replace('_', '', $ttitle);
    /* Check ALL Downloads */
    echo '<table width="100%" border="0">';
    if ($cid==0) {
        echo "<tr><td colspan=\"3\"><center><b>"._CHECKALLDOWNLOADS."</b><br />"._BEPATIENT."</center><br /><br /></td></tr>";
        $result = $db->sql_query("select lid, title, url, name, email, submitter from ".$downloadsprefix."_downloads order by title");
    }
    /* Check Categories & Subcategories */
    else {
        echo "<tr><td colspan=\"3\"><center><b>"._VALIDATINGCAT.": $transfertitle</b><br />"._BEPATIENT."</center><br /><br /></td></tr>";
        $result = $db->sql_query("select lid, title, url, name, email, submitter from ".$downloadsprefix."_downloads where cid='$cid' order by title");
    }
    echo "<tr><td bgcolor=\"$bgcolor2\" align=\"center\"><b>"._STATUS."</b></td><td bgcolor=\"$bgcolor2\" width=\"100%\"><b>"._DOWNLOADTITLE."</b></td><td bgcolor=\"$bgcolor2\" align=\"center\"><b>"._FUNCTIONS."</b></td></tr>";
    while (list($lid, $title, $url, $name, $email, $submitter) = $db->sql_fetchrow($result)) {
    $vurl = parse_url($url);
    $fp = fsockopen($vurl['host'], 80, $errno, $errstr, 15);
    if (!$fp){
        echo "<tr><td align=\"center\"><b>&nbsp;&nbsp;"._FAILED."&nbsp;&nbsp;</b></td>"
        ."<td>&nbsp;&nbsp;<a href=\"$url\" target=\"new\">$title</a>&nbsp;&nbsp;</td>"
        ."<td align=\"center\"><font class=\"content\">&nbsp;&nbsp;[ <a href=\"".adminlink("&amp;mode=DownloadsModDownload&amp;lid=$lid")."\">"._EDIT."</a> | <a href=\"".adminlink("&amp;mode=DownloadsDelDownload&amp;lid=$lid")."\">"._DELETE."</a> ]&nbsp;&nbsp;</font>"
        ."</td></tr>";
    }
    if ($fp){
        echo "<tr><td align=\"center\">&nbsp;&nbsp;"._OK."&nbsp;&nbsp;</td>"
        ."<td>&nbsp;&nbsp;<a href=\"$url\" target=\"new\">$title</a>&nbsp;&nbsp;</td>"
        ."<td align=\"center\"><font class=\"content\">&nbsp;&nbsp;"._NONE."&nbsp;&nbsp;</font>"
        ."</td></tr>";
    }
    }
    echo '</table>';
    CloseTable();
    require('footer.php');
}

function DownloadsAddDownload() {
    global $downloadsprefix, $db;
    $url = Fix_Quotes($_POST['url']);
    $title = Fix_Quotes($_POST['title']);
    $description = Fix_Quotes($_POST['description']);

    $result = $db->sql_query("SELECT url FROM ".$downloadsprefix."_downloads WHERE url='$url' LIMIT 1");
    $row = $db->sql_fetchrow($result);
    require_once('header.php');
    GraphicAdmin('_AMENU6');
    OpenTable();
    echo '<div align="center" class="title">'._WEBDOWNLOADSADMIN.'</div>';
    CloseTable();
    echo "<br />";
    OpenTable();
    echo "<br /><center><font class=\"content\"><b>";
    if ($row['url'] == $url) { echo _ERRORURLEXIST."<br />".$url; }
    elseif ($title=="") { echo _ERRORNOTITLE; }
    elseif ($url == "") { echo _ERRORNOURL; }
    elseif ($description=="") { echo _ERRORNODESCRIPTION; }
    else {
        $cat = explode('-', $_POST['cat']);
        $cat[0] = intval($cat[0]);
        $cat[1] = empty($cat[1]) ? 0 : intval($cat[1]);
        $name = Fix_Quotes($_POST['name']);
        $email = Fix_Quotes($_POST['email']);
        $hits  = intval($_POST['hits']);
        $filesize = intval($_POST['filesize']);
        $version  = Fix_Quotes($_POST['version']);
        $homepage = Fix_Quotes($_POST['homepage']);
        $submitter = Fix_Quotes($_POST['submitter']);
        $db->sql_query("insert into ".$downloadsprefix."_downloads values (NULL, '$cat[0]', '$cat[1]', '$title', '$url', '$description', now(), '$name', '$email', '$hits', '$submitter', 0, 0, 0, '$filesize', '$version', '$homepage')");
        echo _NEWDOWNLOADADDED;
        if ($_POST['new']) {
            $db->sql_query("DELETE FROM ".$downloadsprefix."_newdownload WHERE url='$url'");
        }
    }
    echo '</b><br /><br />'._GOBACK.'<br /><br />';
    CloseTable();
    require('footer.php');
}

$mode = isset($_POST['mode']) ? $_POST['mode'] : (isset($_GET['mode']) ? $_GET['mode'] : '');
switch ($mode) {

    case "DownloadsDelNew":
    DownloadsDelNew();
    break;

    case "DownloadsAddDownload":
    DownloadsAddDownload();
    break;

    case "DownloadsAddEditorial":
    require_once("modules/$op/admin/download.modDownload.php");
    DownloadsAddEditorial();
    break;

    case "DownloadsModEditorial":
    require_once("modules/$op/admin/download.modDownload.php");
    DownloadsModEditorial();
    break;

    case "DownloadsDownloadCheck":
    DownloadsDownloadCheck();
    break;

    case "DownloadsValidate":
    DownloadsValidate();
    break;

    case "DownloadsDelEditorial":
    require_once("modules/$op/admin/download.modDownload.php");
    DownloadsDelEditorial();
    break;

    case "DownloadsCleanVotes":
    DownloadsCleanVotes();
    break;

    case "DownloadsListBrokenDownloads":
    DownloadsListBrokenDownloads();
    break;

    case "DownloadsDelBrokenDownloads":
    DownloadsDelBrokenDownloads();
    break;

    case "DownloadsIgnoreBrokenDownloads":
    DownloadsIgnoreBrokenDownloads();
    break;

    case "DownloadsListModRequests":
    DownloadsListModRequests();
    break;

    case "DownloadsChangeModRequests":
    DownloadsChangeModRequests();
    break;

    case "DownloadsChangeIgnoreRequests":
    DownloadsChangeIgnoreRequests();
    break;

    case "DownloadsAddCat":
    require_once("modules/$op/admin/download.modCat.php");
    DownloadsAddCat();
    break;
    case "DownloadsDelCat":
    require_once("modules/$op/admin/download.modCat.php");
    DownloadsDelCat();
    break;
    case "DownloadsModCat":
    require_once("modules/$op/admin/download.modCat.php");
    DownloadsModCat();
    break;
    case "DownloadsModCatS":
    require_once("modules/$op/admin/download.modCat.php");
    DownloadsModCatS();
    break;

    case "DownloadsModDownload":
    require_once("modules/$op/admin/download.modDownload.php");
    DownloadsModDownload();
    break;

    case "DownloadsModDownloadS":
    require_once("modules/$op/admin/download.modDownload.php");
    DownloadsModDownloadS();
    break;

    case "DownloadsDelDownload":
    require_once("modules/$op/admin/download.modDownload.php");
    DownloadsDelDownload();
    break;

    case "DownloadsDelVote":
    require_once("modules/$op/admin/download.modDownload.php");
    DownloadsDelVote();
    break;

    case "DownloadsDelComment":
    require_once("modules/$op/admin/download.modDownload.php");
    DownloadsDelComment();
    break;

    case "DownloadsTransfer":
    DownloadsTransfer();
    break;

    default:
    downloads();
    break;
}
