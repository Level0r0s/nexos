<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Downloads/modules/Downloads/details.php,v $
  $Revision: 9.3 $
  $Author: nanocaiordo $
  $Date: 2006/11/07 10:38:41 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

function viewdownloaddetails() {
    global $downloadsprefix, $db, $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $module_name;
    global $useoutsidevoting, $detailvotedecimal, $outsideweight, $anonymous, $userinfo;
    $lid = intval($_GET['lid']);
    include("header.php");
    downl_menu_tpl(1);
    $voteresult = $db->sql_query("SELECT rating, ratinguser, ratingcomments FROM ".$downloadsprefix."_votedata WHERE ratinglid = $lid");
    $totalvotesDB = $db->sql_numrows($voteresult);
    $anonvotes = 0;
    $anonvoteval = 0;
    $outsidevotes = 0;
    $outsidevoteeval = 0;
    $regvoteval = 0;
    $topanon = 0;
    $bottomanon = 11;
    $topreg = 0;
    $bottomreg = 11;
    $topoutside = 0;
    $bottomoutside = 11;
    $avv = array(0,0,0,0,0,0,0,0,0,0,0);
    $rvv = array(0,0,0,0,0,0,0,0,0,0,0);
    $ovv = array(0,0,0,0,0,0,0,0,0,0,0);
    $truecomments = $totalvotesDB;
    while(list($ratingDB, $ratinguserDB, $ratingcommentsDB)=$db->sql_fetchrow($voteresult)) {
        if ($ratingcommentsDB=="") $truecomments--;
        if ($ratinguserDB==$anonymous) {
            $anonvotes++;
            $anonvoteval += $ratingDB;
        }
        if ($useoutsidevoting == 1) {
            if ($ratinguserDB=='outside') {
                $outsidevotes++;
                $outsidevoteval += $ratingDB;
            }
        } else {
            $outsidevotes = 0;
        }
        if ($ratinguserDB!=$anonymous && $ratinguserDB!="outside") {
            $regvoteval += $ratingDB;
        }
        if ($ratinguserDB!=$anonymous && $ratinguserDB!="outside") {
            if ($ratingDB > $topreg) $topreg = $ratingDB;
            if ($ratingDB < $bottomreg) $bottomreg = $ratingDB;
            for ($rcounter=1; $rcounter<11; $rcounter++) if ($ratingDB==$rcounter) $rvv[$rcounter]++;
        }
        if ($ratinguserDB==$anonymous) {
            if ($ratingDB > $topanon) $topanon = $ratingDB;
            if ($ratingDB < $bottomanon) $bottomanon = $ratingDB;
            for ($rcounter=1; $rcounter<11; $rcounter++) if ($ratingDB==$rcounter) $avv[$rcounter]++;
        }
        if ($ratinguserDB=="outside") {
            if ($ratingDB > $topoutside) $topoutside = $ratingDB;
            if ($ratingDB < $bottomoutside) $bottomoutside = $ratingDB;
            for ($rcounter=1; $rcounter<11; $rcounter++) if ($ratingDB==$rcounter) $ovv[$rcounter]++;
        }
    }
    $regvotes = $totalvotesDB - $anonvotes - $outsidevotes;
    if ($totalvotesDB == 0) {
        $finalrating = 0;
    } else if ($anonvotes == 0 && $regvotes == 0) {
        /* Figure Outside Only Vote */
        $finalrating = $outsidevoteval / $outsidevotes;
        $finalrating = number_format($finalrating, $detailvotedecimal);
        $avgOU = $outsidevoteval / $totalvotesDB;
        $avgOU = number_format($avgOU, $detailvotedecimal);
    } else if ($outsidevotes == 0 && $regvotes == 0) {
        /* Figure Anon Only Vote */
        $finalrating = $anonvoteval / $anonvotes;
        $finalrating = number_format($finalrating, $detailvotedecimal);
        $avgAU = $anonvoteval / $totalvotesDB;
        $avgAU = number_format($avgAU, $detailvotedecimal);
    } else if ($outsidevotes == 0 && $anonvotes == 0) {
        /* Figure Reg Only Vote */
        $finalrating = $regvoteval / $regvotes;
        $finalrating = number_format($finalrating, $detailvotedecimal);
        $avgRU = $regvoteval / $totalvotesDB;
        $avgRU = number_format($avgRU, $detailvotedecimal);
    } else if ($regvotes == 0 && $useoutsidevoting == 1 && $outsidevotes != 0 && $anonvotes != 0 ) {
        /* Figure Reg and Anon Mix */
        $avgAU = $anonvoteval / $anonvotes;
        $avgOU = $outsidevoteval / $outsidevotes;
        if ($anonweight > $outsideweight ) {
            /* Anon is 'standard weight' */
            $newimpact = $anonweight / $outsideweight;
            $impactAU = $anonvotes;
            $impactOU = $outsidevotes / $newimpact;
        } else {
            /* Outside is 'standard weight' */
            $newimpact = $outsideweight / $anonweight;
            $impactOU = $outsidevotes;
            $impactAU = $anonvotes / $newimpact;
        }
        $finalrating = ((($avgOU * $impactOU) + ($avgAU * $impactAU)) / ($impactAU + $impactOU));
        $finalrating = number_format($finalrating, $detailvotedecimal);
    } else {
        /* REG User vs. Anonymous vs. Outside User Weight Calutions */
        $impact = $anonweight;
        $outsideimpact = $outsideweight;
        if ($regvotes == 0) {
            $avgRU = 0;
        } else {
            $avgRU = $regvoteval / $regvotes;
        }
        if ($anonvotes == 0) {
            $avgAU = 0;
        } else {
            $avgAU = $anonvoteval / $anonvotes;
        }
        if ($outsidevotes == 0 ) {
            $avgOU = 0;
        } else {
            $avgOU = $outsidevoteval / $outsidevotes;
        }
        $impactRU = $regvotes;
        $impactAU = $anonvotes / $impact;
        $impactOU = $outsidevotes / $outsideimpact;
        $finalrating = (($avgRU * $impactRU) + ($avgAU * $impactAU) + ($avgOU * $impactOU)) / ($impactRU + $impactAU + $impactOU);
        $finalrating = number_format($finalrating, $detailvotedecimal);
    }
    if (!isset($avgO)) {
        $avgOU = "";
    } else {
        $avgOU = number_format($avgOU, $detailvotedecimal);
    }
    if (!isset($avgRU)) {
        $avgRU = "";
    } else {
        $avgRU = number_format($avgRU, $detailvotedecimal);
    }
    if (!isset($avgAU)) {
        $avgAU = "";
    } else {
        $avgAU = number_format($avgAU, $detailvotedecimal);
    }
    if ($topanon == 0) $topanon = "";
    if ($bottomanon == 11) $bottomanon = "";
    if ($topreg == 0) $topreg = "";
    if ($bottomreg == 11) $bottomreg = "";
    if ($topoutside == 0) $topoutside = "";
    if ($bottomoutside == 11) $bottomoutside = "";
    $totalchartheight = 70;
    $chartunits = $totalchartheight / 10;
    $avvper         = array(0,0,0,0,0,0,0,0,0,0,0);
    $rvvper         = array(0,0,0,0,0,0,0,0,0,0,0);
    $ovvper         = array(0,0,0,0,0,0,0,0,0,0,0);
    $avvpercent     = array(0,0,0,0,0,0,0,0,0,0,0);
    $rvvpercent     = array(0,0,0,0,0,0,0,0,0,0,0);
    $ovvpercent     = array(0,0,0,0,0,0,0,0,0,0,0);
    $avvchartheight = array(0,0,0,0,0,0,0,0,0,0,0);
    $rvvchartheight = array(0,0,0,0,0,0,0,0,0,0,0);
    $ovvchartheight = array(0,0,0,0,0,0,0,0,0,0,0);
    $avvmultiplier  = 0;
    $rvvmultiplier  = 0;
    $ovvmultiplier  = 0;
    for ($rcounter=1; $rcounter<11; $rcounter++) {
        if ($anonvotes != 0) $avvper[$rcounter] = $avv[$rcounter] / $anonvotes;
        if ($regvotes != 0) $rvvper[$rcounter] = $rvv[$rcounter] / $regvotes;
        if ($outsidevotes != 0) $ovvper[$rcounter] = $ovv[$rcounter] / $outsidevotes;
        $avvpercent[$rcounter] = number_format($avvper[$rcounter] * 100, 1);
        $rvvpercent[$rcounter] = number_format($rvvper[$rcounter] * 100, 1);
        $ovvpercent[$rcounter] = number_format($ovvper[$rcounter] * 100, 1);
        if ($avv[$rcounter] > $avvmultiplier) $avvmultiplier = $avv[$rcounter];
        if ($rvv[$rcounter] > $rvvmultiplier) $rvvmultiplier = $rvv[$rcounter];
        if ($ovv[$rcounter] > $ovvmultiplier) $ovvmultiplier = $ovv[$rcounter];
    }
    if ($avvmultiplier != 0) $avvmultiplier = 10 / $avvmultiplier;
    if ($rvvmultiplier != 0) $rvvmultiplier = 10 / $rvvmultiplier;
    if ($ovvmultiplier != 0) $ovvmultiplier = 10 / $ovvmultiplier;
    for ($rcounter=1; $rcounter<11; $rcounter++) {
        $avvchartheight[$rcounter] = ($avv[$rcounter] * $avvmultiplier) * $chartunits;
        $rvvchartheight[$rcounter] = ($rvv[$rcounter] * $rvvmultiplier) * $chartunits;
        $ovvchartheight[$rcounter] = ($ovv[$rcounter] * $ovvmultiplier) * $chartunits;
        if ($avvchartheight[$rcounter]==0) $avvchartheight[$rcounter]=1;
        if ($rvvchartheight[$rcounter]==0) $rvvchartheight[$rcounter]=1;
        if ($ovvchartheight[$rcounter]==0) $ovvchartheight[$rcounter]=1;
    }
    $res = $db->sql_query("SELECT cid, date, hits, name, email, description, filesize, version, homepage, title FROM ".$downloadsprefix."_downloads WHERE lid='$lid'");
    list($cid, $time, $hits, $auth_name, $email, $description, $filesize, $version, $homepage, $ttitle) = $db->sql_fetchrow($res);
    $displaytitle = $ttitle;
    echo '<br />';
    OpenTable();
    echo "<center><font class=\"title\">"._DOWNLOADPROFILE.": <A HREF=\"".getlink("&amp;d_op=getit&amp;lid=$lid")."\">$displaytitle</A>";
    newdownloadgraphic(L10NTime::date('d-M-Y', $time.' 00:00:00', $userinfo['user_dst'], $userinfo['user_timezone']));
    popgraphic($hits);
    detecteditorial($lid, 1);
    $catResult = $db->sql_query("select title,cdescription,ldescription,parentid from ".$downloadsprefix."_categories where cid='$cid'");
    list($catTitle,$cdescription,$ldescription,$parentid)=$db->sql_fetchrow($catResult);
    $catTitle = getparent($parentid,$catTitle);
    $catTitle = _MAIN."/$catTitle";
    echo "</FONT><br /><br /><B>"._CATEGORY.":</B> <A HREF=\"".getlink("&amp;d_op=viewdownload&amp;cid=$cid")."\">$catTitle</A></B><br />";
    $ttitle = ereg_replace(" ","_",$ttitle);
    downl_infomenu_tpl($lid, $ttitle);
    echo "<br /><br /><b><u>"._DOWNLOADRATINGDET."</u></b><br />"
        ."<b>"._TOTALVOTES."</B> $totalvotesDB<br />"
        ."<b>"._OVERALLRATING.":</B> $finalrating<br /><br />"
        ."<div align=\"justify\" class=\"content\">$description</div>";
    if ($auth_name == "") {
        $auth_name = "<i>"._UNKNOWN."</i>";
    } else {
        if ($email == "") {
            $auth_name = "$auth_name";
        } else {
            $email = ereg_replace("@"," <i>at</i> ",$email);
            $email = ereg_replace("\."," <i>dot</i> ",$email);
            $auth_name = "$auth_name ($email)";
        }
    }
    echo "<br /><b>"._CREDITS_AUTHORS.":</b> $auth_name<br />"
        ."<b>"._VERSION.":</b> $version <b>"._FILESIZE.":</b> ".CoolSize($filesize)."</font><br /><br />"
        ."[ <b><a href=\"".getlink("&amp;d_op=getit&amp;lid=$lid")."\">"._DOWNLOADNOW."</a></b> ";

    if (($homepage == "") OR ($homepage == "http://")) {
        echo "]<br /><br />";
    } else {
        echo "| <a href=\"$homepage\" target=\"new\">"._HOMEPAGE."</a> ]<br /><br />";
    }
    echo "<table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"455\">"
        ."<tr><td colspan=\"2\" bgcolor=\"$bgcolor2\">"
        ."<font class=\"content\"><b>"._REGISTEREDUSERS."</b></font>"
        ."</td></tr>"
        ."<tr>"
        ."<td bgcolor=\"$bgcolor1\">"
        ."<font class=\"content\">"._NUMBEROFRATINGS.": $regvotes</font>"
        ."</td>"
        ."<td rowspan=\"5\">";
    if ($regvotes==0) {
        echo "<center><font class=\"content\">"._NOREGUSERSVOTES."</font></center>";
    } else {
        echo "<CENTER><table border=\"1\" WIDTH=\"200\">"
            ."<tr>"
        ."<td valign=\"top\" align=\"center\" colspan=\"10\" bgcolor=\"$bgcolor2\"><font class=\"content\">"._BREAKDOWNBYVAL."</font></td>"
        ."</tr>"
        ."<tr>"
        ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$rvv[1] "._LVOTES." ($rvvpercent[1]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$rvvchartheight[1]\"></td>"
        ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$rvv[2] "._LVOTES." ($rvvpercent[2]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$rvvchartheight[2]\"></td>"
        ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$rvv[3] "._LVOTES." ($rvvpercent[3]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$rvvchartheight[3]\"></td>"
        ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$rvv[4] "._LVOTES." ($rvvpercent[4]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$rvvchartheight[4]\"></td>"
        ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$rvv[5] "._LVOTES." ($rvvpercent[5]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$rvvchartheight[5]\"></td>"
        ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$rvv[6] "._LVOTES." ($rvvpercent[6]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$rvvchartheight[6]\"></td>"
        ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$rvv[7] "._LVOTES." ($rvvpercent[7]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$rvvchartheight[7]\"></td>"
        ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$rvv[8] "._LVOTES." ($rvvpercent[8]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$rvvchartheight[8]\"></td>"
        ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$rvv[9] "._LVOTES." ($rvvpercent[9]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$rvvchartheight[9]\"></td>"
        ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$rvv[10] "._LVOTES." ($rvvpercent[10]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$rvvchartheight[10]\"></td>"
        ."</tr>"
        ."<tr><td colspan=\"10\" bgcolor=\"$bgcolor2\" ALIGN=CENTER>"
        ."<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"200\"><tr>"
        ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">1</font></td>"
        ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">2</font></td>"
        ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">3</font></td>"
        ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">4</font></td>"
        ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">5</font></td>"
        ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">6</font></td>"
        ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">7</font></td>"
        ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">8</font></td>"
        ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">9</font></td>"
        ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">10</font></td>"
        ."</tr></table></CENTER>"
        ."</td></tr></table>";
    }
    echo "</td>"
    ."</tr>"
    ."<tr><td bgcolor=\"$bgcolor2\"><font class=\"content\">"._DOWNLOADRATING.": $avgRU</font></td></tr>"
    ."<tr><td bgcolor=\"$bgcolor1\"><font class=\"content\">"._HIGHRATING.": $topreg</font></td></tr>"
    ."<tr><td bgcolor=\"$bgcolor2\"><font class=\"content\">"._LOWRATING.": $bottomreg</font></td></tr>"
    ."<tr><td bgcolor=\"$bgcolor1\"><font class=\"content\">"._NUMOFCOMMENTS.": $truecomments</font></td></tr>"
    ."<tr><td></td></tr>";
    if (isset($anonweight)){
    echo "<tr><td valign=\"top\" colspan=\"2\"><font class=\"tiny\"><br /><br />".$anonweight.' '._TO.' 1.</font></td></tr>';
    }
    echo "<tr><td colspan=\"2\" bgcolor=\"$bgcolor2\"><font class=\"content\"><b>"._UNREGISTEREDUSERS."</b></font></td></tr>"
    ."<tr><td bgcolor=\"$bgcolor1\"><font class=\"content\">"._NUMBEROFRATINGS.": $anonvotes</font></td>"
    ."<td rowspan=\"5\">";
    if ($anonvotes==0) {
        echo "<center><font class=\"content\">"._NOUNREGUSERSVOTES."</font></center>";
    } else {
        echo "<CENTER><table border=\"1\" width=\"200\">"
            ."<tr>"
        ."<td valign=\"top\" align=\"center\" colspan=\"10\" bgcolor=\"$bgcolor2\"><font class=\"content\">"._BREAKDOWNBYVAL."</font></td>"
        ."</tr>"
        ."<tr>"
        ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$avv[1] "._LVOTES." ($avvpercent[1]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$avvchartheight[1]\"></td>"
        ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$avv[2] "._LVOTES." ($avvpercent[2]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$avvchartheight[2]\"></td>"
        ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$avv[3] "._LVOTES." ($avvpercent[3]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$avvchartheight[3]\"></td>"
        ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$avv[4] "._LVOTES." ($avvpercent[4]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$avvchartheight[4]\"></td>"
        ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$avv[5] "._LVOTES." ($avvpercent[5]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$avvchartheight[5]\"></td>"
        ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$avv[6] "._LVOTES." ($avvpercent[6]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$avvchartheight[6]\"></td>"
        ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$avv[7] "._LVOTES." ($avvpercent[7]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$avvchartheight[7]\"></td>"
        ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$avv[8] "._LVOTES." ($avvpercent[8]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$avvchartheight[8]\"></td>"
        ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$avv[9] "._LVOTES." ($avvpercent[9]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$avvchartheight[9]\"></td>"
        ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$avv[10] "._LVOTES." ($avvpercent[10]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$avvchartheight[10]\"></td>"
        ."</tr>"
        ."<tr><td colspan=\"10\" bgcolor=\"$bgcolor2\">"
        ."<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"200\"><tr>"
        ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">1</font></td>"
        ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">2</font></td>"
        ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">3</font></td>"
        ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">4</font></td>"
        ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">5</font></td>"
        ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">6</font></td>"
        ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">7</font></td>"
        ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">8</font></td>"
        ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">9</font></td>"
        ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">10</font></td>"
        ."</tr></table>"
        ."</td></tr></table></CENTER>";
    }
    echo "</td>"
    ."</tr>"
    ."<tr><td bgcolor=\"$bgcolor2\"><font class=\"content\">"._DOWNLOADRATING.": $avgAU</font></td></tr>"
    ."<tr><td bgcolor=\"$bgcolor1\"><font class=\"content\">"._HIGHRATING.": $topanon</font></td></tr>"
    ."<tr><td bgcolor=\"$bgcolor2\"><font class=\"content\">"._LOWRATING.": $bottomanon</font></td></tr>"
    ."<tr><td bgcolor=\"$bgcolor1\"><font class=\"content\">&nbsp;</font></td></tr>";
    if (isset($useoutsidevoting) && $useoutsidevoting == 1) {
        echo "<tr><td valign=top colspan=\"2\"><font class=\"tiny\"><br /><br />"._WEIGHOUTNOTE." $outsideweight "._TO." 1.</font></td></tr>"
        ."<tr><td colspan=\"2\" bgcolor=\"$bgcolor2\"><font class=\"content\"><b>"._OUTSIDEVOTERS."</b></font></td></tr>"
        ."<tr><td bgcolor=\"$bgcolor1\"><font class=\"content\">"._NUMBEROFRATINGS.": $outsidevotes</font></td>"
        ."<td rowspan=\"5\">";
        if ($outsidevotes==0) {
        echo "<center><font class=\"content\">"._NOOUTSIDEVOTES."</font></center>";
    } else {
        echo "<CENTER><table border=\"1\" width=\"200\">"
            ."<tr>"
          ."<td valign=\"top\" align=\"center\" colspan=\"10\" bgcolor=\"$bgcolor2\"><font class=\"content\">"._BREAKDOWNBYVAL."</font></td>"
          ."</tr>"
          ."<tr>"
          ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$ovv[1] "._LVOTES." ($ovvpercent[1]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$ovvchartheight[1]\"></td>"
          ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$ovv[2] "._LVOTES." ($ovvpercent[2]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$ovvchartheight[2]\"></td>"
          ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$ovv[3] "._LVOTES." ($ovvpercent[3]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$ovvchartheight[3]\"></td>"
          ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$ovv[4] "._LVOTES." ($ovvpercent[4]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$ovvchartheight[4]\"></td>"
          ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$ovv[5] "._LVOTES." ($ovvpercent[5]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$ovvchartheight[5]\"></td>"
          ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$ovv[6] "._LVOTES." ($ovvpercent[6]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$ovvchartheight[6]\"></td>"
          ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$ovv[7] "._LVOTES." ($ovvpercent[7]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$ovvchartheight[7]\"></td>"
          ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$ovv[8] "._LVOTES." ($ovvpercent[8]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$ovvchartheight[8]\"></td>"
          ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$ovv[9] "._LVOTES." ($ovvpercent[9]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$ovvchartheight[9]\"></td>"
          ."<td bgcolor=\"$bgcolor1\" valign=\"bottom\"><img border=\"0\" alt=\"$ovv[10] "._LVOTES." ($ovvpercent[10]% "._LTOTALVOTES.")\" src=\"modules/$module_name/images/blackpixel.gif\" width=\"15\" height=\"$ovvchartheight[10]\"></td>"
          ."</tr>"
          ."<tr><td colspan=\"10\" bgcolor=\"$bgcolor2\">"
          ."<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"200\"><tr>"
          ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">1</font></td>"
          ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">2</font></td>"
          ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">3</font></td>"
          ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">4</font></td>"
          ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">5</font></td>"
          ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">6</font></td>"
          ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">7</font></td>"
          ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">8</font></td>"
          ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">9</font></td>"
          ."<td width=\"10%\" valign=\"bottom\" align=\"center\"><font class=\"content\">10</font></td>"
          ."</tr></table>"
          ."</td></tr></table></CENTER>";
    }
    echo "</td>"
        ."</tr>"
        ."<tr><td bgcolor=\"$bgcolor2\"><font class=\"content\">"._DOWNLOADRATING.": $avgOU</font></td></tr>"
        ."<tr><td bgcolor=\"$bgcolor1\"><font class=\"content\">"._HIGHRATING.": $topoutside</font></td></tr>"
        ."<tr><td bgcolor=\"$bgcolor2\"><font class=\"content\">"._LOWRATING.": $bottomoutside</font></td></tr>"
        ."<tr><td bgcolor=\"$bgcolor1\"><font class=\"content\">&nbsp;</font></td></tr>";
    }
    echo "</table><br /><br /><center>";
    downloadfooter($lid);
    echo "</center>";
    CloseTable();
    include("footer.php");
}
