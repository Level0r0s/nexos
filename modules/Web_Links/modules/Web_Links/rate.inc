<?
/*********************************************
  CPG-Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Web_Links/modules/Web_Links/rate.inc,v $
  $Revision: 9.7 $
  $Author: phoenix $
  $Date: 2010/11/04 01:19:25 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }

function ratelink($lid, $ttitle) {
    global $linksprefix, $db, $userinfo, $bgcolor2, $bgcolor3;
    require_once('header.php');
    menu(1);
    echo '<br />';
    OpenTable();
    $displaytitle = ereg_replace ('_', ' ', $ttitle);
    echo '<b>'.$displaytitle.'</b>'
        .'<ul style="border:2px solid '.$bgcolor2.'; background:'.$bgcolor3.'; width:370px;" class="content">'
        .'<li>'._RATENOTE1.'</li>'
        .'<li>'._RATENOTE2.'</li>'
        .'<li>'._RATENOTE3.'</li>'
        .'<li>'._RATENOTE4.'</li>'
        .'<li>'._RATENOTE5.'</li>';
    if (is_user()) {
        echo '<li>'._YOUAREREGGED.'</li><li>'._FEELFREE2ADD.'</li>';
    } else {
        echo '<li>'._YOUARENOTREGGED.'</li><li>'._IFYOUWEREREG.'</li>';
    }
    echo '<br /></ul>
	<form method="post" action="'.URL::index().'">'
        .'<table border="0" cellpadding="1" cellspacing="0" width="100%">'
        .'<tr><td style="width:25px;"></td><td style="width:550px;">'
		.'<input type="hidden" name="l_op" value="addrating" />'
        .'<input type="hidden" name="ratinglid" value="'.$lid.'" />'
        .'<span class="content">'._RATETHISSITE.' '
        .'<select name="rating">'
        .'<option>--</option>'
        .'<option>10</option>'
        .'<option>9</option>'
        .'<option>8</option>'
        .'<option>7</option>'
        .'<option>6</option>'
        .'<option>5</option>'
        .'<option>4</option>'
        .'<option>3</option>'
        .'<option>2</option>'
        .'<option>1</option>'
        .'</select></span>'
        .'<span class="content"><input type="submit" value="'._RATETHISSITE.'" /></span>'
        .'<br /><br />';
    if (is_user()) {
        echo '<b>'._SCOMMENTS.':</b><br /><textarea wrap="virtual" cols="50" rows="10" name="ratingcomments"></textarea>'
            .'<br /><br /><br />'
            .'</td>';
    } else {
        echo '<input type="hidden" name="ratingcomments" value="" /></td>';
    }
    echo '</tr></table></form>';
    echo '<div style="text-align:center;">';
    linkfooterchild($lid);
    echo '</div>';
    CloseTable();
}

function addrating() {
    global $module_name, $linksprefix, $db, $userinfo, $anonymous, $weblinks_config;
    $ratinglid = intval($_POST['ratinglid']);
	$ratinguser = isset($_POST['ratinguser']) ? $_POST['ratinguser'] : '';
    $rating = intval($_POST['rating']);
    $ratingcomments = $_POST['ratingcomments'];
	$anonwaitdays = $weblinks_config['anonwaitdays'];
	$outsidewaitdays = $weblinks_config['outsidewaitdays'];

    list($ttitle) = $db->sql_ufetchrow("SELECT title FROM ".$linksprefix."_links WHERE lid=$ratinglid");

    $passtest = 'yes';
    require_once('header.php');
	completevoteheader();
    if(is_user()) {
        $ratinguser = $userinfo['username'];
    } elseif ($ratinguser == 'outside') {
        $ratinguser = 'outside';
    } else {
        $ratinguser = $anonymous;
    }
    /* Make sure only 1 anonymous from an IP in a single day. */
    $ip = $userinfo['user_ip'];
    /* Check if Rating is Null */
    if ($rating == '--') {
        $error = 'nullerror';
        completevote($error);
        $passtest = 'no';
    }
    /* Check if Link POSTER is voting (UNLESS Anonymous users allowed to post) */
    if ($ratinguser != $anonymous && $ratinguser != 'outside') {
        $result = $db->sql_query("SELECT submitter FROM ".$linksprefix."_links WHERE lid=$ratinglid");
        while(list($ratinguserDB)= $db->sql_fetchrow($result)) {
            if ($ratinguserDB==$ratinguser) {
                $error = 'postervote';
                completevote($error);
                $passtest = 'no';
            }
       }
    }
    /* Check if REG user is trying to vote twice. */
    if ($ratinguser != $anonymous && $ratinguser != 'outside') {
        $result = $db->sql_query("SELECT ratinguser FROM ".$linksprefix."_votedata WHERE ratinglid=$ratinglid");
        while(list($ratinguserDB)= $db->sql_fetchrow($result)) {
            if ($ratinguserDB==$ratinguser) {
                $error = 'regflood';
                completevote($error);
                $passtest = 'no';
            }
        }
    }
    /* Check if ANONYMOUS user is trying to vote more than once per day. */
    if ($ratinguser==$anonymous){
        $yesterdaytimestamp = (time()-(86400 * $anonwaitdays));
        $ytsDB = Date('Y-m-d H:i:s', $yesterdaytimestamp);
        $result = $db->sql_query("SELECT * FROM ".$linksprefix."_votedata WHERE ratinglid=$ratinglid AND ratinguser='"._ANONYMOUS."' AND ratinghostname = '$ip' AND TO_DAYS(NOW()) - TO_DAYS(ratingtimestamp) < $anonwaitdays");
        $anonvotecount = $db->sql_numrows($result);
        if ($anonvotecount >= 1) {
            $error = 'anonflood';
            completevote($error);
            $passtest = 'no';
        }
    }
    /* Check if OUTSIDE user is trying to vote more than once per day. */
    if ($ratinguser=='outside'){
        $yesterdaytimestamp = (time()-(86400 * $outsidewaitdays));
        $ytsDB = Date('Y-m-d H:i:s', $yesterdaytimestamp);
        $result = $db->sql_query("SELECT * FROM ".$linksprefix."_votedata WHERE ratinglid=$ratinglid AND ratinguser='outside' AND ratinghostname = '$ip' AND TO_DAYS(NOW()) - TO_DAYS(ratingtimestamp) < $outsidewaitdays");
        $outsidevotecount = $db->sql_numrows($result);
        if ($outsidevotecount >= 1) {
            $error = 'outsideflood';
            completevote($error);
            $passtest = 'no';
        }
    }
	/* Passed Tests */
	if ($passtest == 'yes') {
		$ratingcomments = Fix_Quotes($ratingcomments);
		$ratinguser = Fix_Quotes($ratinguser);
		/* All is well.  Add to Line Item Rate to DB. */
		$db->sql_query("INSERT INTO ".$linksprefix."_votedata (ratingdbid, ratinglid, ratinguser, rating, ratinghostname, ratingcomments, ratingtimestamp)values (NULL,'$ratinglid', '$ratinguser', '$rating', '$ip', '$ratingcomments', now())");
		/* All is well.  Calculate Score & Add to Summary (for quick retrieval & sorting) to DB. */
		/* NOTE: If weight is modified, ALL links need to be refreshed with new weight. */
		/* Running a SQL statement with your modded calc for ALL links will accomplish this. */
		$voteresult = $db->sql_query("select rating, ratinguser, ratingcomments FROM ".$linksprefix."_votedata WHERE ratinglid = $ratinglid");
		$totalvotesDB = $db->sql_numrows($voteresult);
		require("modules/$module_name/voteinclude.php");
		$db->sql_query("UPDATE ".$linksprefix."_links SET linkratingsummary=$finalrating, totalvotes=$totalvotesDB, totalcomments=$truecomments WHERE lid = $ratinglid");
		$error = 'none';
		completevote($error);
	}
	completevotefooter($ratinglid, $ttitle, $ratinguser);
}

function outsidelinksetup($lid) {
    global $module_name, $sitename, $nukeurl, $BASEHREF, $mainindex;
    require_once('header.php');
    menu(1);
    echo '<br />';
    OpenTable();
    $promo1 = '<a href="'.URL::index("&amp;l_op=ratelink&amp;lid=$lid", true, true).'">'._RATETHISSITE.' @ '.$sitename.'</a>';
    $promo2 = '<form action="'.$BASEHREF.$mainindex.'" method="get">
	<input type="hidden" name="name" value="'.$module_name.'">
	<input type="hidden" name="l_op" value="ratelink">
	<input type="hidden" name="lid" value="'.$lid.'">
	<input type="submit" value="'._RATEIT.'">
	</form>';
    $promo3 = '<form action="'.$BASEHREF.$mainindex.'" method="get">
	<table border="0" cellspacing="0" cellpadding="0">
    <tr><td align="center" style="white-space:nowrap;" colspan="2"><b>'._VOTE4THISSITE.'</b></a></td></tr>
    <tr><td>
	<input type="hidden" name="name" value="'.$module_name.'">
	<input type="hidden" name="l_op" value="addrating">
	<input type="hidden" name="lid" value="'.$lid.'">
	<input type="hidden" name="ratinguser" value="outside" />
	<select name="rating">
    <option selected="selected">--</option>
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
    </td><td>
    <input type="submit" value="'._LINKVOTE.'" />
    </td></tr>
	</table>
	</form>';
    echo '<p style="text-align:center;"><span class="option"><b>'._PROMOTEYOURSITE.'</b></span></p>
	<br /><br />'._PROMOTE01.'<br /><br />
	<b>1) '._TEXTLINK.'</b><br /><br />'._PROMOTE02.'<br /><br />
	<p style="text-align:center;">
    '.$promo1.'
    <br /><br />'._HTMLCODE1.'<br />
    <textarea cols="60" rows="6">'.htmlspecialchars($promo1).'</textarea></p><br /><br />
    '._THENUMBER.' "'.$lid.'" '._IDREFER.'<br /><br />
	<b>2) '._BUTTONLINK.'</b><br /><br />'._PROMOTE03.'<br /><br />
	<p style="text-align:center;">
    '.$promo2.'
    '._HTMLCODE2.'<br /><br />
    <textarea cols="60" rows="6">'.$promo2.'</textarea></p><br /><br />
	<b>3) '._REMOTEFORM.'</b><br /><br />'._PROMOTE04.'
	<p style="text-align:center;">
    '.$promo3.'
    '._HTMLCODE3.'<br /><br />
    <textarea cols="60" rows="10">'.$promo3.'</textarea><br /><br />
    '._PROMOTE05.'<br /><br />
    '.$sitename.' '._STAFF.'</p><br /><br />';
    CloseTable();
}
