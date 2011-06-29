<?php
/*********************************************
  CPG-Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG Dev Team
  http://dragonflycms.org

  Based on Journey Links Hack
   Copyright (c) 2000 by James Knickelbein
   Journey Milwaukee
   http://www.journeymilwaukee.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Web_Links/modules/Web_Links/index.php,v $
  $Revision: 9.30 $
  $Author: phoenix $
  $Date: 2010/11/04 01:19:25 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }
$pagetitle .= _WEBLINKS;

if (!Cache::array_load('weblinks_config')) {
    $result = $db->sql_query('SELECT * FROM '.$prefix.'_links_config', true);
    while ($row = $db->sql_fetchrow($result)) {
        $weblinks_config[$row['config_name']] = $row['config_value'];
    }
    Cache::array_save('weblinks_config');
    $db->sql_freeresult($result);
}

$linksprefix = $prefix.'_links';
function getparent($parentid, $title) {
	global $linksprefix, $db;
	$result = $db->sql_query("SELECT cid, title, parentid FROM ".$linksprefix."_categories WHERE cid=$parentid");
	list($cid, $ptitle, $pparentid) = $db->sql_fetchrow($result);
	if ($ptitle != '') {
		if ($title != '') {
			$title = $ptitle.'/'.$title;
		} else {
			$title = $ptitle;
		}
	}
	if ($pparentid!=0) { $title = getparent($pparentid, $ptitle); }
	return $title;
}

function getparentlink($parentid, $title) {
	global $linksprefix, $db;
	$result = $db->sql_query("SELECT cid, title, parentid FROM ".$linksprefix."_categories WHERE cid=$parentid");
	list($cid, $ptitle, $pparentid) = $db->sql_fetchrow($result);
	if ($ptitle!='') $title = '<a href="'.URL::index('&amp;l_op=viewlink&amp;cid='.$cid).'">'.$ptitle.'</a> '._BC_DELIM.' '.$title;
	if ($pparentid > 0) {
		$title = getparentlink($pparentid, $title);
	}
	return $title;
}

function menu($mainlink) {
	global $module_name;
	OpenTable();
	echo '<div style="float:left;"><span class="gen"><strong>'._WEBLINKS.'</strong></span></div>';
	echo '<form action="'.URL::index('&amp;l_op=search').'" method="post" enctype="multipart/form-data" accept-charset="utf-8" style="margin:0;"><div style="float:right;">'
	.'<input type="text" size="25" maxlength="255" name="query" />'
	.'<input type="submit" value="'._SEARCH.'" />'
	.'</div></form><br />';
	echo '<div style="margin:2px 0 0 0; width:100%;" class="content">';
	if ($mainlink > 0) {
		echo '<a href="'.URL::index().'">'._LINKSMAIN.'</a> | ';
	}
	echo '<a href="'.URL::index('&amp;l_op=addlink').'">'._ADDLINK.'</a>'
	.' | <a href="'.URL::index('&amp;l_op=newlinks').'">'._NEW.'</a>'
	.' | <a href="'.URL::index('&amp;l_op=mostpopular').'">'._POPULAR.'</a>'
	.' | <a href="'.URL::index('&amp;l_op=toprated').'">'._TOPRATED.'</a>'
	.' | <a href="'.URL::index('&amp;l_op=featured').'">Featured</a>'
	.' | <a href="'.URL::index('&amp;l_op=randomlink').'">'._RANDOM.'</a>';
	if (can_admin($module_name)) {
		echo ' | <a href="'.URL::admin($module_name).'">'._ADMIN.'</a>';
	}
	echo '</div>';
	CloseTable();
}

function SearchForm() {
	echo '<form action="'.URL::index('&amp;l_op=search&amp;query='.$query).'" method="post" enctype="multipart/form-data" accept-charset="utf-8">'
	.'<table border="0" cellspacing="0" cellpadding="0" align="center">'
	.'<tr><td class="content"><input type="text" size="25" name="query" /> <input type="submit" value="'._SEARCH.'" /></td></tr>'
	.'</table>'
	.'</form>';
}

function linkinfomenu($lid, $ttitle) {
	echo '<br /><span class="content">[ '
	.'<a href="'.URL::index('&amp;l_op=viewlinkcomments&amp;lid='.$lid.'&amp;ttitle='.$ttitle).'">'._LINKCOMMENTS.'</a>'
	.' | <a href="'.URL::index('&amp;l_op=viewlinkdetails&amp;lid='.$lid.'&amp;ttitle='.$ttitle).'">'._ADDITIONALDET.'</a>'
	.' | <a href="'.URL::index('&amp;l_op=viewlinkeditorial&amp;lid='.$lid.'&amp;ttitle='.$ttitle).'">'._EDITORREVIEW.'</a>'
	.' | <a href="'.URL::index('&amp;l_op=modifylinkrequest&amp;lid='.$lid).'">'._MODIFY.'</a>';
	if (is_user()) {
		echo ' | <a href="'.URL::index('&amp;l_op=brokenlink&amp;lid='.$lid).'">'._REPORTBROKEN.'</a>';
	}
	echo ' ]</span>';
}

function index() {
	global $linksprefix, $db, $bgcolor1, $bgcolor2, $bgcolor3, $weblinks_config;
	require_once('header.php');
	menu(0);
	echo '<br />';
	OpenTable();
	if ($weblinks_config['featurebox']) {
		$result = $db->sql_query("SELECT lid, title, description FROM ".$linksprefix."_links WHERE feature=1 ORDER BY RAND()");
		$count = $db->sql_numrows($result);
		if ($count) {
			list($lid, $title, $description) = $db->sql_fetchrow($result);
			echo '<p style="margin:5px 0 5px 10px; width:30%; background:'.$bgcolor3.'; border:2px solid '.$bgcolor2.'; float:left;">';
			echo '<b>Featured Link</b>: '.$title.'<br />';
			echo $description.'<br />';
			echo '<a href="'.URL::index('&amp;l_op=visit&amp;lid='.$lid).'" target="_blank">View Details</a>';
			echo '</p>';
		}
	}
	if ($weblinks_config['mainlinks'] > 0) {
		$color = $bgcolor3;
		$i = 0;
		$result = $db->sql_uquery("SELECT lid, title FROM ".$linksprefix."_links ORDER BY date DESC LIMIT 0,$weblinks_config[mainlinks]");
		echo '<p style="margin:5px 10px 0 0; width:32%; background:'.$bgcolor3.'; border:2px solid '.$bgcolor2.'; float:right;">';
		echo '<span class="genmed"><em>Latest Additions</em></span><br />';
		while (list($lid, $title) = $db->sql_fetchrow($result)) {
			$i++;
			$color = ($color == $bgcolor1) ? $bgcolor3 : $bgcolor1;
			echo $i.'. <a href="'.URL::index('&amp;l_op=visit&amp;lid='.$lid).'" target="_blank">'.$title.'</a><br />';
		}
		echo '</p>';

		$j = 0;
		$result2 = $db->sql_uquery("SELECT lid, title FROM ".$linksprefix."_links ORDER BY hits DESC LIMIT 0,$weblinks_config[mainlinks]");
		echo '<p style="margin:5px 0 0 0; width:32%; background:'.$bgcolor3.'; border:2px solid '.$bgcolor2.'; float:right;">';
		echo '<span class="genmed"><em>Most Popular</em></span><br />';
		while (list($lid, $title) = $db->sql_fetchrow($result2)) {
			$j++;
			$color = ($color == $bgcolor1) ? $bgcolor3 : $bgcolor1;
			echo $j.'. <a href="'.URL::index('&amp;l_op=visit&amp;lid='.$lid).'" target="_blank">'.$title.'</a><br />';
		}
		echo '</p>';
	}
	echo '<br style="clear:both;" /><br />';

	echo '<div style="text-align:center;"><span class="gen"><b>'._LINKSMAINCAT.'</b></span><br />';
	echo '<span class="genmed"<em>(maximum of '.$weblinks_config['subcats'].' sub-categories displayed - click a main category to reveal more)</em></span></div>';
	echo '<div style="margin-left:10px; margin-right:10px;"><table style=" border:2px solid '.$bgcolor2.'; width:100%;" cellspacing="0" cellpadding="0">';
	$result = $db->sql_query("SELECT cid, title, cdescription FROM ".$linksprefix."_categories WHERE parentid=0 ORDER BY title");
	$count = 0;
	$columns = $weblinks_config['maincats'];
	$colwidth = 100 * (1 / $columns);
	while(list($cid, $title, $cdescription) = $db->sql_fetchrow($result)) {
		if ($count == 0) { echo '<tr>'; }
		echo '<td valign="top" style="width:'.$colwidth.'%; border:2px solid '.$bgcolor2.';"><div class="option" style="background:'.$bgcolor2.'; height:12px; padding:0 2px 2px 2px;"><span style="float:left;"><b>&#8226;</b>&nbsp;<a href="'.URL::index('&amp;l_op=viewlink&amp;cid='.$cid).'"><b>'.$title.'</b></a></span>';
		categorynewlinkgraphic($cid);
		echo '</div>';
		if ($cdescription) {
			echo '<span class="content" style="margin-left:3px;">'.$cdescription.'</span><br />';
		}
		$result2 = $db->sql_query("SELECT cid, title FROM ".$linksprefix."_categories WHERE parentid=$cid ORDER BY title LIMIT 0,$weblinks_config[subcats]");
		$space = 0;
		while(list($cid, $stitle) = $db->sql_fetchrow($result2)) {
			if ($space > 0) {
//				echo '<br />';
			}
			echo '<br /><span class="content" style="margin-left:10px;"><b>&#8226;</b> <a href="'.URL::index('&amp;l_op=viewlink&amp;cid='.$cid).'">'.$stitle.'</a></span><br />';
			$space2 = 0;
			$result3 = $db->sql_query("SELECT cid, title FROM ".$linksprefix."_categories WHERE parentid=$cid ORDER BY title LIMIT 0,$weblinks_config[subcats]");
				while(list($scid, $sstitle) = $db->sql_fetchrow($result3)) {
					echo '<br /><span class="content" style="margin-left:10px;"><b>&#8226;</b> <a href="'.URL::index('&amp;l_op=viewlink&amp;cid='.$scid).'">'.$sstitle.'</a></span><br />';
			}
			$space++;
		}
		echo '<br />';
		if ($count < ($columns-1)) {
			echo '</td>';
			$dum = 1;
		}
		$count++;
		if ($count == $columns) {
			echo '</td></tr>';
	   		$count = 0;
			$dum = 0;
		}
	}
	if ($dum == 1) {
		echo '<td style="width:'.$colwidth.'%;">&nbsp;</td></tr></table></div>';
	} elseif ($dum == 0) {
		echo '</table></div>';
	}

	echo '<br />';
	$result = $db->sql_query("SELECT COUNT(*) FROM ".$linksprefix."_links");
	list($numrows) = $db->sql_fetchrow($result);
	$result = $db->sql_query("SELECT COUNT(*) FROM ".$linksprefix."_categories");
	list($catnum) = $db->sql_fetchrow($result);
	echo '<div style="text-align:center;" class="content">'._THEREARE.' <b>'.$numrows.'</b> '._LINKS.' '._AND.' <b>'.$catnum.'</b> '._CATEGORIES.' '._INDB.'</div>';
	CloseTable();
}

function AddLink() {
	global $linksprefix, $db, $weblinks_config, $userinfo, $bgcolor2, $bgcolor3;
	require_once('header.php');
	menu(1);
	echo '<br />';
	OpenTable();
	echo '<div style="text-align:center;" class="title"><b>'._ADDALINK.'</b></div>';
	if (is_user() || $weblinks_config['links_anonaddlinklock']) {
		echo '<p style="width:380px; padding:5px; border:2px solid '.$bgcolor2.'; background:'.$bgcolor3.';">';
		echo '<b>'._INSTRUCTIONS.':</b><br />'
			.'<b>&#8226;</b> '._SUBMITONCE.'<br />'
			.'<b>&#8226;</b> '._POSTPENDING.'<br />'
			.'<b>&#8226;</b> '._USERANDIP.'<br /></p>'
			.'<form method="post" action="'.URL::index('&amp;l_op=add').'" enctype="multipart/form-data" accept-charset="utf-8"><p>'
			.'<span style="width:80px; float:left;"><b>'._PAGETITLE.'</b>:</span><input type="text" name="title" size="50" maxlength="100" /><br />'
			.'<span style="width:80px; float:left;"><b>'._PAGEURL.'</b>:</span><input type="text" name="url" size="50" maxlength="100" value="http://" /><br />';
		echo '<span style="width:80px; float:left;"><b>'._CATEGORY.'</b>:</span><select name="cat">';
		$result2 = $db->sql_query("SELECT cid, title, parentid FROM ".$linksprefix."_categories ORDER BY parentid, title");
		while(list($cid2, $ctitle2, $parentid2) = $db->sql_fetchrow($result2)) {
			if ($parentid2!=0) $ctitle2 = getparent($parentid2,$ctitle2);
			echo "<option value=\"$cid2\">$ctitle2</option>";
		}
		echo '</select><br /><br />'
			.'<b>'._LDESCRIPTION.'</b><br /><textarea name="description" cols="60" rows="5"></textarea><br /><br /><br />';
			if (is_user()){
				echo '<input type="hidden" name="auth_name" value="'.$userinfo['username'].'" />
				<input type="hidden" name="email" value="'.$userinfo['user_email'].'" />';
			} else {
				echo '<span style="width:80px; float:left;"><b>'._YOURNAME.'</b>:</span><input type="text" name="auth_name" size="30" maxlength="60" /><br />'
				.'<span style="width:80px; float:left;"><b>'._YOUREMAIL.'</b>:</span><input type="text" name="email" size="30" maxlength="60" /><br /><br />';
			}
			echo '<input type="hidden" name="l_op" value="Add" />'
			.'<input type="submit" value="'._ADDURL.'" /> '._GOBACK.'<br /><br />'
			.'</p></form>';
	} else {
		echo '<div styler="text-align:center;">'._LINKSNOTUSER1.'<br />'
			._LINKSNOTUSER2.'<br /><br />'
			._LINKSNOTUSER3.'<br />'
			._LINKSNOTUSER4.'<br />'
			._LINKSNOTUSER5.'<br />'
			._LINKSNOTUSER6.'<br />'
			._LINKSNOTUSER7.'<br /><br />'
			._LINKSNOTUSER8.'</div>';
	}
	CloseTable();
}

function add_link($title, $url, $auth_name, $cat, $description, $email) {
	global $weblinks_config, $linksprefix, $db, $userinfo, $PHPMAILER_LANG;
	require_once('header.php');
	menu(1);
	echo '<br />';
	OpenTable();
	list($numrows) = $db->sql_ufetchrow("SELECT COUNT(*) FROM ".$linksprefix."_links WHERE url='$url'");
	if ($numrows > 0) {
		trigger_error(_LINKALREADYEXT,E_USER_ERROR);
	} else {
		if(is_user()) {
			$submitter = $userinfo['username'];
		} else {
			$submitter = decode_ip($userinfo['user_ip']);
		}	
		// Check if Title exists
		if ($title=='') {
			trigger_error(_LINKNOTITLE,E_USER_ERROR);
		}
		// Check if URL was filled out
		elseif ($url=='' || $url =='http://') {
			trigger_error(_LINKNOURL,E_USER_ERROR);
		}
		// Check if Description exist
		elseif ($description=='') {
			trigger_error(_LINKNODESC,E_USER_ERROR);
		} else {
			$title = Fix_Quotes($title);
			/* Check if URL is valid 1/28/2005 1:25PM */
			/* $checkweblinks is from modules/Web_Links/l_config.php */
			if ($weblinks_config['checkweblinks']) {
				$url = (!empty($url) && get_fileinfo($url)) ? Fix_Quotes($url) : trigger_error(sprintf(_ERROR_NO_EXIST,$url),E_USER_ERROR);
			}
			$description = Fix_Quotes($description);
			$auth_name = Fix_Quotes($auth_name);
			/* Check if email is valid 1/28/2005 1:31PM*/
			if (!empty($email)) {
				$email = is_email($email)? Fix_Quotes($email) : trigger_error($PHPMAILER_LANG['from_failed'].$email, E_USER_ERROR);
			}
			$db->sql_query("INSERT INTO ".$linksprefix."_newlink (lid, cid, title, url, description, name, email, submitter) VALUES (NULL, '$cat', '$title', '$url', '$description', '$auth_name', '$email', '$submitter')");
			echo '<b>'._LINKRECEIVED.'</b><br />';
			echo (empty($email)) ? _EMAILWHENADD : _CHECKFORIT;
		}
	}
	CloseTable();
}

function NewLinks($newlinkshowdays) {
	global $linksprefix, $db, $bgcolor2, $bgcolor3;
	require_once('header.php');
	menu(1);
	echo '<br />';
	OpenTable();
	echo '<div style="text-align:center;" class="option"><b>'._NEWLINKS.'</b></div><br />';

	$newlinkdayRaw = (time()-(86400 * 7));
	$newlinkDB = Date('Y-m-d', $newlinkdayRaw);
	$result = $db->sql_query("SELECT COUNT(*) FROM ".$linksprefix."_links WHERE date >= '$newlinkDB'");
//	$result = $db->sql_query("SELECT COUNT(*) FROM ".$linksprefix."_links WHERE date >= ".(time()-(86400 * 7)));
	list($allweeklinks) = $db->sql_fetchrow($result);

	$newlinkdayRaw = (time()-(86400 * 30));
	$newlinkDB = Date('Y-m-d', $newlinkdayRaw);
	$result = $db->sql_query("SELECT COUNT(*) FROM ".$linksprefix."_links WHERE date >= '$newlinkDB'");
//	$result = $db->sql_query("SELECT COUNT(*) FROM ".$linksprefix."_links WHERE date >= ".(time()-(86400 * 30)));
	list($allmonthlinks) = $db->sql_fetchrow($result);

	echo '<p style="text-align:center; width:300px; margin:auto; padding:5px; border:2px solid '.$bgcolor2.'; background:'.$bgcolor3.';" class="content"><b>'._TOTALNEWLINKS.':</b> '._LASTWEEK.' - '.$allweeklinks.' \ '._LAST30DAYS.' - '.$allmonthlinks.'<br />'
		._SHOW.': <a href="'.URL::index('&amp;l_op=newlinks&amp;newlinkshowdays=7').'">'._1WEEK.'</a>
		- <a href="'.URL::index('&amp;l_op=newlinks&amp;newlinkshowdays=14').'">'._2WEEKS.'</a>
		- <a href="'.URL::index('&amp;l_op=newlinks&amp;newlinkshowdays=30').'">'._30DAYS.'</a>
		</p><br />';
	/* List Last VARIABLE Days of Links */
	if (!is_numeric($newlinkshowdays)) {
		$newlinkshowdays = 7;
	}
	echo '<div style="text-align:center;"><b>'._TOTALFORLAST.' '.$newlinkshowdays.' '._DAYS.':</b><br /><br />';
	$counter = 0;
	$allweeklinks = 0;
	while ($counter < $newlinkshowdays) {
		$newlinkdayRaw = (time()-(86400 * $counter));
		$newlinkmonthRaw = date('F', $newlinkdayRaw);
		$newlinkmonth = constant('_'.strtoupper($newlinkmonthRaw));
		$newlinkView = $newlinkmonth.' '.date('d, Y', $newlinkdayRaw);
		$newlinkDB = Date('Y-m-d', $newlinkdayRaw);
		$result = $db->sql_query("SELECT * FROM ".$linksprefix."_links WHERE date = '$newlinkDB'");
		$totallinks = $db->sql_numrows($result);
		$counter++;
		$allweeklinks = $allweeklinks + $totallinks;
		echo '<b>&#8226;</b> <a href="'.URL::index('&amp;l_op=newlinksdate&amp;selectdate='.$newlinkdayRaw).'">'.$newlinkView.'</a>&nbsp;('.$totallinks.')<br />';
	}

	echo '<br /></div>';
	CloseTable();
}

function NewLinksDate($selectdate) {
	global $linksprefix, $db, $CLASS, $bgcolor2, $bgcolor3, $weblinks_config;
	$mainvotedecimal = $weblinks_config['mainvotedecimal'];
	include('header.php');
	menu(1);
	echo '<br />';
	OpenTable();

	$dateView = date('F d, Y', $selectdate);
	$newlinkDB = Date('Y-m-d', $selectdate);
	$result = $db->sql_query("SELECT lid, l.cid, l.title, description, date, hits, linkratingsummary, totalvotes, totalcomments, c.title FROM ".$linksprefix."_links AS l LEFT JOIN ".$linksprefix."_categories AS c ON (c.cid = l.cid) WHERE date = '$newlinkDB' ORDER BY l.title ASC");
	$totallinks = $db->sql_numrows($result);
	echo "<span class=\"option\"><b>$dateView - $totallinks "._NEWLINKS."</b></span><hr />"
		.'<table width="100%" cellspacing="0" cellpadding="10" border="0"><tr><td class="content">';
	while(list($lid, $cid, $title, $description, $time, $hits, $linkratingsummary, $totalvotes, $totalcomments, $ctitle) = $db->sql_fetchrow($result)) {
		$transfertitle = str_replace (' ', '_', $title);
		$linkratingsummary = number_format($linkratingsummary, $mainvotedecimal);
		echo '<p style="margin-top:0; text-align:left; float:left; width:70%;">&#9658; <a class="option" href="'.URL::index('&amp;l_op=visit&amp;lid='.$lid).'" target="_blank">'.$title.'</a>';
		$datetime = formatDateTime($time.' 00:00:00', _DATESTRING3);
		newlinkgraphic($datetime);
		popgraphic($hits);
		echo '<br /><b>'._DESCRIPTION.'</b>: '.$description.'<br />';
		$ctitle = getparent($cid,'');
		echo '<b>'._CATEGORY.'</b>: '.$ctitle.'<br /><br />';
		if (can_admin('web_links')) {
			echo '<a href="'.URL::admin('&amp;mode=linksmodlink&amp;lid='.$lid).'">'._EDIT.'</a> | ';
		}
		echo '<a href="'.URL::index('&amp;l_op=ratelink&amp;lid='.$lid.'&amp;ttitle='.$transfertitle).'">'._RATESITE.'</a>';
		if (is_user()) {
			echo ' | <a href="'.URL::index('&amp;l_op=brokenlink&amp;lid='.$lid).'">'._REPORTBROKEN.'</a>';
		}
		if ($totalvotes != 0) {
			echo ' | <a href="'.URL::index("&amp;l_op=viewlinkdetails&amp;lid=$lid&amp;ttitle=$transfertitle").'">'._DETAILS.'</a>';
		}
		if ($totalcomments != 0) {
			echo ' | <a href="'.URL::index('&amp;l_op=viewlinkcomments&amp;lid='.$lid.'&amp;ttitle='.$transfertitle).'">'._SCOMMENTS." ($totalcomments)</a>";
		}
		detecteditorial($lid, $transfertitle);
		echo '<br /></p>';
		echo '<p style="text-align:left; float:right; border:2px solid '.$bgcolor2.'; background:'.$bgcolor3.';">';
		echo '<b>'._ADDEDON."</b>: <b>$datetime</b><br /><b>"._HITS."</b>: $hits<br />";
		/* voting & comments stats */
		$votestring = ($totalvotes == 1) ? _VOTE : _VOTES;
		if ($linkratingsummary!= 0  || $linkratingsummary!= 0.0 ) {
			echo '<b>'._RATING."</b>: $linkratingsummary ($totalvotes $votestring)<br />";
		}
		echo '</p>';
		echo '<hr style="clear:both; width:100%;" />';
	}
	echo '</td></tr></table>';
	CloseTable();
}

function TopRated($ratenum, $ratetype) {
	global $module_name, $linksprefix, $db, $bgcolor2, $bgcolor3, $weblinks_config;
	require_once('header.php');
	$toplinks = $weblinks_config['toplinks'];
	menu(1);
	echo '<br />';
	OpenTable();
	echo '<table border="0" width="100%"><tr><td align="center">';
	if (isset($ratenum) && isset($ratetype)) {
		$toplinks = $ratenum;
		if ($ratetype == 'percent') {
			$weblinks_config['toplinkspercentrigger'] = 1;
		}
	}
	if ($weblinks_config['toplinkspercentrigger'] == 1) {
		$toplinkspercent = $toplinks;
		$result = $db->sql_query("SELECT COUNT(*) FROM ".$linksprefix."_links WHERE linkratingsummary != 0");
		list($totalratedlinks) = $db->sql_fetchrow($result);
		$toplinks = $toplinks / 100;
		$toplinks = $totalratedlinks * $toplinks;
		$toplinks = round($toplinks);
	}
	if ($weblinks_config['toplinkspercentrigger'] == 1) {
		echo '<div style="text-align:center;" class="option"><b>'._BESTRATED.' '.$toplinkspercent.'% ('._OF.' '.$totalratedlinks.' '._TRATEDLINKS.')</b></div><br />';
	} else {
		echo '<div style="text-align:center;" class="option"><b>'._BESTRATED.' '.$toplinks.'</b></div>';
	}
	echo '</td></tr>'
		.'<tr><td align="center"><p style="width:270px; padding:5px; border:2px solid '.$bgcolor2.'; background:'.$bgcolor3.';">'._NOTE." $weblinks_config[linkvotemin] "._TVOTESREQ.'<br />'
		._SHOWTOP.': [ <a href="'.URL::index('&amp;l_op=toprated&amp;ratenum=10&amp;ratetype=num').'">10</a> - '
		.'<a href="'.URL::index('&amp;l_op=toprated&amp;ratenum=25&amp;ratetype=num').'">25</a> - '
		.'<a href="'.URL::index('&amp;l_op=toprated&amp;ratenum=50&amp;ratetype=num').'">50</a> | '
		.'<a href="'.URL::index('&amp;l_op=toprated&amp;ratenum=1&amp;ratetype=percent').'">1%</a> - '
		.'<a href="'.URL::index('&amp;l_op=toprated&amp;ratenum=5&amp;ratetype=percent').'">5%</a> - '
		.'<a href="'.URL::index('&amp;l_op=toprated&amp;ratenum=10&amp;ratetype=percent').'">10%</a> ]</p></td></tr>';
	echo '<tr><td>';

	$result = $db->sql_query("SELECT lid, l.cid, l.title, description, date, hits, linkratingsummary, totalvotes, totalcomments, c.title FROM ".$linksprefix."_links AS l LEFT JOIN ".$linksprefix."_categories AS c ON (c.cid = l.cid) WHERE linkratingsummary != 0 AND totalvotes >= $weblinks_config[linkvotemin] ORDER BY linkratingsummary DESC LIMIT 0,$toplinks");
	while(list($lid, $cid, $title, $description, $time, $hits, $linkratingsummary, $totalvotes, $totalcomments, $ctitle) = $db->sql_fetchrow($result)) {
		$linkratingsummary = number_format($linkratingsummary, $weblinks_config['mainvotedecimal']);
		$transfertitle = str_replace (' ', '_', $title);
		echo '<p style="margin-top:0; text-align:left; float:left; width:70%;">&#9658; <a class="option" href="'.URL::index('&amp;l_op=visit&amp;lid='.$lid).'" target="_blank">'.$title.'</a>';
		$datetime = formatDateTime($time.' 00:00:00', _DATESTRING3);
		newlinkgraphic($datetime);
		popgraphic($hits);
		echo '<br />';
		echo '<b>'._DESCRIPTION.'</b>: '.$description.'<br />';
		$ctitle = getparent($cid, '');
		echo '<b>'._CATEGORY."</b>: $ctitle<br /><br />";
		if (can_admin('web_links')) {
			echo '<a href="'.URL::admin('&amp;mode=linksmodlink&amp;lid='.$lid).'">'._EDIT.'</a> | ';
		}
		echo '<a href="'.URL::index('&amp;l_op=ratelink&amp;lid='.$lid.'&amp;ttitle='.$transfertitle).'">'._RATESITE.'</a>';
		if (is_user()) {
			echo " | <a href=\"".URL::index("&amp;l_op=brokenlink&amp;lid=$lid")."\">"._REPORTBROKEN."</a>";
		}
		if ($totalvotes != 0) {
			echo ' | <a href="'.URL::index("&amp;l_op=viewlinkdetails&amp;lid=$lid&amp;ttitle=$transfertitle").'">'._DETAILS.'</a>';
		}
		if ($totalcomments != 0) {
			echo ' | <a href="'.URL::index('&amp;l_op=viewlinkcomments&amp;lid='.$lid.'&amp;ttitle='.$transfertitle).'">'._SCOMMENTS." ($totalcomments)</a>";
		}
		detecteditorial($lid, $transfertitle);
		echo '<br /></p>';
		echo '<p style="text-align:left; float:right; border:2px solid '.$bgcolor2.'; background:'.$bgcolor3.';">';
		echo '<b>'._ADDEDON."</b>: $datetime <br /><b>"._HITS."</b>: $hits<br />";
		/* voting & comments stats */
		$votestring = ($totalvotes == 1) ? _VOTE : _VOTES;
		if ($linkratingsummary != '0' || $linkratingsummary != '0.0') {
			echo '<b>'._RATING."</b>: <b> $linkratingsummary </b> ($totalvotes $votestring)<br />";
		}
		echo '</p>';
		echo '<hr style="clear:both; width:100%;" />';
	}
	echo '</td></tr></table>';
	CloseTable();
}

function MostPopular($ratenum, $ratetype) {
	global $weblinks_config, $module_name, $linksprefix, $db, $bgcolor2, $bgcolor3;
	$mostpoplinks = $weblinks_config['mostpoplinks'];
	require_once('header.php');
	menu(1);
	echo '<br />';
	OpenTable();
	echo '<table border="0" width="100%"><tr><td align="center">'
		.'<span class="option"><b>';
	if ((isset($ratenum) && is_numeric($ratenum)) && isset($ratetype)) {
		$mostpoplinks = $ratenum;
		if ($ratetype == 'percent') $weblinks_config['mostpoplinkspercentrigger'] = 1;
	}
	if ($weblinks_config['mostpoplinkspercentrigger'] == 1) {
		$toplinkspercent = $mostpoplinks;
		$result = $db->sql_query("SELECT COUNT(*) FROM ".$linksprefix."_links");
		list($totalmostpoplinks) = $db->sql_fetchrow($result);
		$mostpoplinks = $mostpoplinks / 100;
		$mostpoplinks = $totalmostpoplinks * $mostpoplinks;
		$mostpoplinks = round($mostpoplinks);
	}
	if ($weblinks_config['mostpoplinkspercentrigger'] == 1) {
		echo _MOSTPOPULAR." $toplinkspercent% ("._OFALL." $totalmostpoplinks "._LINKS.")";
	} else {
		echo _MOSTPOPULAR.' '.$mostpoplinks;
	}
	echo '</b></span></td></tr><tr><td align="center"><p style="width:270px; padding:5px; border:2px solid '.$bgcolor2.'; background:'.$bgcolor3.';">'._SHOWTOP.': [ <a href="'.URL::index('&amp;l_op=mostpopular&amp;ratenum=10&amp;ratetype=num').'">10</a> - '
		.'<a href="'.URL::index('&amp;l_op=mostpopular&amp;ratenum=25&amp;ratetype=num').'">25</a> - '
		.'<a href="'.URL::index('&amp;l_op=mostpopular&amp;ratenum=50&amp;ratetype=num').'">50</a> | '
		.'<a href="'.URL::index('&amp;l_op=mostpopular&amp;ratenum=1&amp;ratetype=percent').'">1%</a> - '
		.'<a href="'.URL::index('&amp;l_op=mostpopular&amp;ratenum=5&amp;ratetype=percent').'">5%</a> - '
		.'<a href="'.URL::index('&amp;l_op=mostpopular&amp;ratenum=10&amp;ratetype=percent').'">10%</a> ]</p></td></tr>';
	echo '<tr><td>';
	$result = $db->sql_query("SELECT lid, l.cid, l.title, description, date, hits, linkratingsummary, totalvotes, totalcomments, c.title FROM ".$linksprefix."_links AS l LEFT JOIN ".$linksprefix."_categories AS c ON (c.cid = l.cid) ORDER BY hits DESC LIMIT 0,$mostpoplinks");
	while(list($lid, $cid, $title, $description, $time, $hits, $linkratingsummary, $totalvotes, $totalcomments) = $db->sql_fetchrow($result)) {
		$linkratingsummary = number_format($linkratingsummary, $weblinks_config['mainvotedecimal']);
		$transfertitle = str_replace (' ', '_', $title);
		echo '<p style="margin-top:0; text-align:left; float:left; width:70%;">&#9658; <a class="option" href="'.URL::index('&amp;l_op=visit&amp;lid='.$lid).'" target="_blank">'.$title.'</a>';
		$datetime = formatDateTime($time.' 00:00:00', _DATESTRING3);
		newlinkgraphic($datetime);
		popgraphic($hits);
		echo '<br />';
		echo '<b>'._DESCRIPTION.'</b>: '.$description.'<br />';
		$ctitle = getparent($cid, '');
		echo '<b>'._CATEGORY."</b>: $ctitle<br /><br />";
		if (can_admin('web_links')) {
			echo '<a href="'.URL::admin('&amp;mode=linksmodlink&amp;lid='.$lid).'">'._EDIT.'</a> | ';
		}
		echo '<a href="'.URL::index('&amp;l_op=ratelink&amp;lid='.$lid.'&amp;ttitle='.$transfertitle).'">'._RATESITE.'</a>';
		if (is_user()) {
			echo ' | <a href="'.URL::index('&amp;l_op=brokenlink&amp;lid='.$lid).'">'._REPORTBROKEN.'</a>';
		}
		if ($totalvotes != 0) {
			echo ' | <a href="'.URL::index("&amp;l_op=viewlinkdetails&amp;lid=$lid&amp;ttitle=$transfertitle").'">'._DETAILS.'</a>';
		}
		if ($totalcomments != 0) {
			echo ' | <a href="'.URL::index('&amp;l_op=viewlinkcomments&amp;lid='.$lid.'&amp;ttitle='.$transfertitle).'">'._SCOMMENTS.' ('.$totalcomments.')</a>';
		}
		detecteditorial($lid, $transfertitle);
		echo '<br /></p>';
		echo '<p style="text-align:left; float:right; border:2px solid '.$bgcolor2.'; background:'.$bgcolor3.';">';
		echo '<b>'._ADDEDON."</b>: $datetime<br />";
		echo '<b>'._HITS."</b>: <b>$hits</b><br />";
		/* voting & comments stats */
		$votestring = ($totalvotes == 1) ? _VOTE : _VOTES;
		if ($linkratingsummary != '0' || $linkratingsummary != '0.0') {
			echo '<b>'._RATING."</b>: $linkratingsummary ($totalvotes $votestring)";
		}
		echo '</p>';
		echo '<hr style="clear:both; width:100%;" />';
	}
	echo '</td></tr></table>';
	CloseTable();
}

function RandomLink() {
	global $linksprefix, $db;
	list($lid, $url) = $db->sql_ufetchrow("SELECT lid, url FROM ".$linksprefix."_links ORDER BY RAND() LIMIT 1");
	if (intval($lid) > 0) {
		$db->sql_query("UPDATE ".$linksprefix."_links SET hits=hits+1 WHERE lid=$lid");
	} else {
		$url = URL::index('&amp;l_op=addlink');
	}
	URL::redirect($url);
}

function featured() {
	global $linksprefix, $db, $weblinks_config, $pagetitle, $bgcolor2, $bgcolor3;
	$perpage = $weblinks_config['perpage'];
	$min = (!isset($_GET['min'])) ? 0 : $_GET['min'];
	if (!isset($_GET['max'])) {$max = $min +$perpage;}
	$orderby = (isset($_GET['orderby']) ? convertorderbyin($_GET['orderby']) : 'title ASC');
	$orderbyTrans =	 (isset($_GET['orderby']) ? convertorderbytrans($_GET['orderby']) : _TITLEAZ);
	if (!empty($_GET['show'])) {
		$perpage = $_GET['show'];
	} elseif (!empty($_GET['perpage'])) {
		$show = $_GET['perpage'];
	} else {
		$show = 0;
	}

	$pagetitle .= ' '._BC_DELIM.' Featured Links';
	require_once('header.php');
	menu(1);
	echo '<br />';
	OpenTable();
	$title = '<a href="'.URL::index().'">'._MAIN.'</a> '._BC_DELIM.' <b>Featured Links</b>';
	echo '<div style="margin-left:10px; margin-right:10px;"><p style="text-align:center; margin:5px;" class="option">'._CATEGORY.': '.$title.'</p>';
	echo '<p style="text-align:center; width:420px; margin:auto; padding:5px; border:2px solid '.$bgcolor2.'; background:'.$bgcolor3.';" class="content">'._SORTLINKSBY.': '
		._TITLE.' (<a href="'.URL::index('&amp;l_op=featured&amp;orderby=titlea').'">&#9650;</a>\<a href="'.URL::index('&amp;l_op=featured&amp;orderby=titled').'">&#9660;</a>) '
		._DATE.' (<a href="'.URL::index("&amp;l_op=viewlink&amp;cid=$cid&amp;orderby=datea").'">&#9650;</a>\<a href="'.URL::index('&amp;l_op=featured&amp;orderby=dated').'">&#9660;</a>) '
		._RATING.' (<a href="'.URL::index('&amp;l_op=featured&amp;orderby=ratinga').'">&#9650;</a>\<a href="'.URL::index('&amp;l_op=featured&amp;orderby=ratingd').'">&#9660;</a>) '
		._POPULARITY.' (<a href="'.URL::index('&amp;l_op=featured&amp;orderby=hitsa').'">&#9650;</a>\<a href="'.URL::index('&amp;l_op=featured&amp;orderby=hitsd').'">&#9660;</a>)'
		.'<br /><b>'._SITESSORTED.': '.$orderbyTrans.'</b></p>';
	$result = $db->sql_query("SELECT lid, title, description, date, hits, linkratingsummary, totalvotes, totalcomments from ".$linksprefix."_links where feature=1 order by $orderby limit $min, $perpage");
	$fullcountresult = $db->sql_query("SELECT COUNT(*) FROM ".$linksprefix."_links WHERE feature=1");
	list($totalselectedlinks) = $db->sql_fetchrow($fullcountresult);
	$x = 0;
	while(list($lid, $title, $description, $time, $hits, $linkratingsummary, $totalvotes, $totalcomments) = $db->sql_fetchrow($result)) {
		$linkratingsummary = number_format($linkratingsummary, $weblinks_config['mainvotedecimal']);
		echo '<p style="margin-top:0; text-align:left; float:left; width:70%;">&#9658; <a class="option" href="'.URL::index('&amp;l_op=visit&amp;lid='.$lid).'" target="_blank">'.$title.'</a>';
		$datetime = formatDateTime($time.' 00:00:00', _DATESTRING3);
		newlinkgraphic($datetime);
		popgraphic($hits);
	    $transfertitle = ereg_replace (' ', '_', $title);
		echo '<br />';
		echo '<b>'._DESCRIPTION."</b>: $description<br /><br />";
		if (can_admin('web_links')) {
			echo '<a href="'.URL::admin('&amp;mode=linksmodlink&amp;lid='.$lid).'">'._EDIT.'</a> | ';
		}
		echo '<a href="'.URL::index('&amp;l_op=ratelink&amp;lid='.$lid.'&amp;ttitle='.$transfertitle).'">'._RATESITE.'</a>';
		if (is_user()) {
			echo ' | <a href="'.URL::index('&amp;l_op=brokenlink&amp;lid='.$lid).'">'._REPORTBROKEN.'</a>';
		}
		if ($totalvotes != 0) {
			echo ' | <a href="'.URL::index('&amp;l_op=viewlinkdetails&amp;lid='.$lid.'&amp;ttitle='.$transfertitle).'">'._DETAILS.'</a>';
		}
		if ($totalcomments != 0) {
			echo ' | <a href="'.URL::index('&amp;l_op=viewlinkcomments&amp;lid='.$lid.'&amp;ttitle='.$transfertitle).'">'._SCOMMENTS.' ('.$totalcomments.')</a>';
		}
		detecteditorial($lid, $transfertitle);
		echo '</p>';
		echo '<p style="text-align:left; float:right; border:2px solid '.$bgcolor2.'; background:'.$bgcolor3.';">';
		echo '<b>'._ADDEDON."</b>: $datetime <br /><b>"._HITS."</b>: $hits<br />";
		$transfertitle = str_replace (' ', '_', $title);
		/* voting & comments stats */
		$votestring = ($totalvotes == 1) ? _VOTE : _VOTES;
		if ($linkratingsummary!='0' || $linkratingsummary!='0.0') {
			echo '<b>'._RATING."</b>: $linkratingsummary ($totalvotes $votestring)";
		}
		echo '<br />';
		echo '</p>';
		echo '<hr style="clear:both; width:100%;" />';
		$x++;
	}
	$orderby = isset($_GET['orderby']) ? convertorderbyout($_GET['orderby']) : 'title ASC';
	/* Calculates how many pages exist. Which page one should be on, etc... */
	$linkpagesint = ($totalselectedlinks / $perpage);
	$linkpageremainder = ($totalselectedlinks % $perpage);
	if ($linkpageremainder != 0) {
		$linkpages = ceil($linkpagesint);
		if ($totalselectedlinks < $perpage) {
			$linkpageremainder = 0;
		}
	} else {
		$linkpages = $linkpagesint;
	}

	/* Page Numbering */
	if ($linkpages != 1 && $linkpages != 0) {
		echo '<br /><br />';
		echo _SELECTPAGE.': ';
		$prev=$min-$perpage;
		if ($prev>=0) {
			echo '&nbsp;&nbsp;<b>[ <a href="'.URL::index("&amp;l_op=viewlink&amp;cid=$cid&amp;min=$prev&amp;orderby=$orderby&amp;show=$show").'">';
			echo ' &laquo; '._PREVIOUSPAGE.'</a> ]</b> ';
		}
		$counter = 1;
		$currentpage = ($max / $perpage);
		while ($counter <= $linkpages ) {
			$cpage = $counter;
			$mintemp = ($perpage * $counter) - $perpage;
			if ($counter == $currentpage) {
				echo "<b>$counter</b>&nbsp;";
			} else {
				echo '<a href="'.URL::index("&amp;l_op=viewlink&amp;cid=$cid&amp;min=$mintemp&amp;orderby=$orderby&amp;show=$show").'">'.$counter.'</a> ';
			}
			$counter++;
		}
		$next = $min+$perpage;
		if ($x >= $perpage) {
			echo '&nbsp;&nbsp;<b>[ <a href="'.URL::index("&amp;l_op=viewlink&amp;cid=$cid&amp;min=$max&amp;orderby=$orderby&amp;show=$show").'">';
			echo ' '._NEXTPAGE.' &raquo;</a> ]</b> ';
		}
	}
	echo'<br /></div>';
	CloseTable();
}

function viewlink($cid, $min, $orderby, $show) {
	global $linksprefix, $db, $weblinks_config, $pagetitle, $bgcolor2, $bgcolor3;
	$perpage = $weblinks_config['perpage'];
	$min = (!isset($_GET['min'])) ? 0 : $_GET['min'];
	if (!isset($_GET['max'])) $max=$min +$perpage;
	$orderby = (isset($_GET['orderby']) ? convertorderbyin($_GET['orderby']) : 'title ASC');
	$orderbyTrans =	 (isset($_GET['orderby']) ? convertorderbytrans($_GET['orderby']) : _TITLEAZ);
	if (!empty($_GET['show'])) {
		$perpage = $_GET['show'];
	} elseif (!empty($_GET['perpage'])) {
		$show = $_GET['perpage'];
	} else {
		$show = 0;
	}

	if (!($result = $db->sql_ufetchrow("SELECT title, parentid FROM ".$linksprefix."_categories WHERE cid=$cid"))) {
		cpg_error('Link doesn\'t exist', 404);
	}
	list($title, $parentid) = $result;
	$title = getparentlink($parentid,$title);
	$pagetitle .= ' '._BC_DELIM.' '.strip_tags($title);
	require_once('header.php');
	menu(1);
	echo '<br />';
	OpenTable();
	$title = '<a href="'.URL::index().'">'._MAIN.'</a> '._BC_DELIM.' <b>'.$title.'</b>';
	echo '<div style="margin-left:10px; margin-right:10px;"><p style="text-align:center; margin:5px;" class="option">'._CATEGORY.': '.$title.'</p>';
	echo '<p style="text-align:center; width:420px; margin:auto; padding:5px; border:2px solid '.$bgcolor2.'; background:'.$bgcolor3.';" class="content">'._SORTLINKSBY.': '
		._TITLE.' (<a href="'.URL::index("&amp;l_op=viewlink&amp;cid=$cid&amp;orderby=titlea").'">&#9650;</a>\<a href="'.URL::index("&amp;l_op=viewlink&amp;cid=$cid&amp;orderby=titled").'">&#9660;</a>) '
		._DATE.' (<a href="'.URL::index("&amp;l_op=viewlink&amp;cid=$cid&amp;orderby=datea").'">&#9650;</a>\<a href="'.URL::index("&amp;l_op=viewlink&amp;cid=$cid&amp;orderby=dated").'">&#9660;</a>) '
		._RATING.' (<a href="'.URL::index("&amp;l_op=viewlink&amp;cid=$cid&amp;orderby=ratinga").'">&#9650;</a>\<a href="'.URL::index("&amp;l_op=viewlink&amp;cid=$cid&amp;orderby=ratingd").'">&#9660;</a>) '
		._POPULARITY.' (<a href="'.URL::index("&amp;l_op=viewlink&amp;cid=$cid&amp;orderby=hitsa").'">&#9650;</a>\<a href="'.URL::index("&amp;l_op=viewlink&amp;cid=$cid&amp;orderby=hitsd").'">&#9660;</a>)'
		.'<br /><b>'._SITESSORTED.': '.$orderbyTrans.'</b></p><br />';
	$result = $db->sql_query("SELECT lid, title, description, date, hits, linkratingsummary, totalvotes, totalcomments from ".$linksprefix."_links where cid=$cid order by $orderby limit $min, $perpage");
	$fullcountresult = $db->sql_query("SELECT COUNT(*) FROM ".$linksprefix."_links WHERE cid=$cid");
	list($totalselectedlinks) = $db->sql_fetchrow($fullcountresult);
	$x=0;
	while(list($lid, $title, $description, $time, $hits, $linkratingsummary, $totalvotes, $totalcomments) = $db->sql_fetchrow($result)) {
		$linkratingsummary = number_format($linkratingsummary, $weblinks_config['mainvotedecimal']);
		echo '<p style="margin-top:0; text-align:left; float:left; width:70%;">&#9658; <a class="option" href="'.URL::index('&amp;l_op=visit&amp;lid='.$lid).'" target="_blank">'.$title.'</a>';
		$datetime = formatDateTime($time.' 00:00:00', _DATESTRING3);
		newlinkgraphic($datetime);
		popgraphic($hits);
	    $transfertitle = ereg_replace (' ', '_', $title);
		echo '<br />';
		echo '<b>'._DESCRIPTION."</b>: $description<br /><br />";
		if (can_admin('web_links')) {
			echo '<a href="'.URL::admin('&amp;mode=linksmodlink&amp;lid='.$lid).'">'._EDIT.'</a> | ';
		}
		echo '<a href="'.URL::index('&amp;l_op=ratelink&amp;lid='.$lid.'&amp;ttitle='.$transfertitle).'">'._RATESITE.'</a>';
		if (is_user()) {
			echo ' | <a href="'.URL::index('&amp;l_op=brokenlink&amp;lid='.$lid).'">'._REPORTBROKEN.'</a>';
		}
		if ($totalvotes != 0) {
			echo ' | <a href="'.URL::index('&amp;l_op=viewlinkdetails&amp;lid='.$lid.'&amp;ttitle='.$transfertitle).'">'._DETAILS.'</a>';
		}
		if ($totalcomments != 0) {
			echo ' | <a href="'.URL::index('&amp;l_op=viewlinkcomments&amp;lid='.$lid.'&amp;ttitle='.$transfertitle).'">'._SCOMMENTS.' ('.$totalcomments.')</a>';
		}
		detecteditorial($lid, $transfertitle);
		echo '</p>';
		echo '<p style="text-align:left; float:right; border:2px solid '.$bgcolor2.'; background:'.$bgcolor3.';">';
		echo '<b>'._ADDEDON."</b>: $datetime <br /><b>"._HITS."</b>: $hits<br />";
		$transfertitle = str_replace (' ', '_', $title);
		/* voting & comments stats */
		$votestring = ($totalvotes == 1) ? _VOTE : _VOTES;
		if ($linkratingsummary!='0' || $linkratingsummary!='0.0') {
			echo '<b>'._RATING."</b>: $linkratingsummary ($totalvotes $votestring)";
		}
		echo '<br />';
		echo '</p>';
		echo '<hr style="clear:both; width:100%;" />';
		$x++;
	}
	$orderby = isset($_GET['orderby']) ? convertorderbyout($_GET['orderby']) : 'title ASC';
	/* Calculates how many pages exist. Which page one should be on, etc... */
	$linkpagesint = ($totalselectedlinks / $perpage);
	$linkpageremainder = ($totalselectedlinks % $perpage);
	if ($linkpageremainder != 0) {
		$linkpages = ceil($linkpagesint);
		if ($totalselectedlinks < $perpage) {
			$linkpageremainder = 0;
		}
	} else {
		$linkpages = $linkpagesint;
	}
	$result2 = $db->sql_query("SELECT cid, title, cdescription FROM ".$linksprefix."_categories WHERE parentid=$cid ORDER BY title");
	$count = 0;
	 $dum = 0;
	if($db->sql_numrows($result2)) {
		echo '<br /><b>'._USUBCATEGORIES.'</b>';
	}
	while(list($cid2, $title2, $cdescription2) = $db->sql_fetchrow($result2)) {
		echo '<p class="option" style="margin-left:5px;"><b>&#8226;</b>&nbsp;<a href="'.URL::index('&amp;l_op=viewlink&amp;cid='.$cid2).'"><b>'.$title2.'</b></a>';
		categorynewlinkgraphic($cid2);
		if ($cdescription2) {
			echo '<br /><span style="margin-left:5px;" class="content">'.$cdescription2.'</span>';
		}
		echo '</p>';
		$result3 = $db->sql_query("SELECT cid, title FROM ".$linksprefix."_categories WHERE parentid=$cid2 ORDER BY title LIMIT 0,$weblinks_config[subcats]");

		$space = 0;
		while(list($cid3, $title3) = $db->sql_fetchrow($result3)) {
			if ($space > 0) { echo '<br />'; }
			echo '<p style="margin:0 0 0 15px;" class="content"><b>&#8226;</b>&nbsp;<a href="'.URL::index('&amp;l_op=viewlink&amp;cid='.$cid3).'">'.$title3.'</a></p>';
			$space++;
		}
	}

	/* Page Numbering */
	if ($linkpages!=1 && $linkpages!=0) {
		echo '<br /><br />';
		echo _SELECTPAGE.': ';
		$prev=$min-$perpage;
		if ($prev>=0) {
			echo '&nbsp;&nbsp;<b>[ <a href="'.URL::index("&amp;l_op=viewlink&amp;cid=$cid&amp;min=$prev&amp;orderby=$orderby&amp;show=$show").'">';
			echo ' &laquo; '._PREVIOUSPAGE.'</a> ]</b> ';
		}
		$counter = 1;
		$currentpage = ($max / $perpage);
		while ($counter<=$linkpages ) {
			$cpage = $counter;
			$mintemp = ($perpage * $counter) - $perpage;
			if ($counter == $currentpage) {
				echo "<b>$counter</b>&nbsp;";
			} else {
				echo "<a href=\"".URL::index("&amp;l_op=viewlink&amp;cid=$cid&amp;min=$mintemp&amp;orderby=$orderby&amp;show=$show")."\">$counter</a> ";
			}
			$counter++;
		}
		$next = $min+$perpage;
		if ($x>=$perpage) {
			echo '&nbsp;&nbsp;<b>[ <a href="'.URL::index("&amp;l_op=viewlink&amp;cid=$cid&amp;min=$max&amp;orderby=$orderby&amp;show=$show").'">';
			echo ' '._NEXTPAGE.' &raquo;</a> ]</b> ';
		}
	}
	echo'<br /></div>';
	CloseTable();
}

function newlinkgraphic($datetime) {
	global $module_name;
	echo '&nbsp;';
	$startdate = time();
	$count = 0;
	while ($count <= 7) {
		$daysold = date('d-M-Y', $startdate);
		if ($daysold == $datetime) {
			if ($count <= 1) {
				echo '<img src="modules/'.$module_name.'/images/newred.gif" alt="'._NEWTODAY.'" />';
			}
			if ($count <= 3 && $count > 1) {
				echo '<img src="modules/'.$module_name.'/images/newgreen.gif" alt="'._NEWLAST3DAYS.'" />';
			}
			if ($count <= 7 && $count > 3) {
				echo '<img src="modules/'.$module_name.'/images/newblue.gif" alt="'._NEWTHISWEEK.'" />';
			}
		}
		$count++;
		$startdate = (time()-(86400 * $count));
	}
}

function categorynewlinkgraphic($cat) {
	global $linksprefix, $db, $module_name;
	$newresult = $db->sql_query("SELECT date FROM ".$linksprefix."_links WHERE cid=$cat ORDER BY date DESC LIMIT 1");
	list($time)= $db->sql_fetchrow($newresult);
	echo '&nbsp;';
	$datetime = formatDateTime($time.' 00:00:00', _DATESTRING3);
	$startdate = time();
	$count = 0;
	while ($count <= 7) {
	$daysold = date('d-M-Y', $startdate);
		if ($daysold == $datetime) {
			if ($count <= 1) {
				echo '<img src="modules/'.$module_name.'/images/newred.gif" alt="'._CATNEWTODAY.'" />';
			}
			if ($count <= 3 && $count > 1) {
				echo '<img src="modules/'.$module_name.'/images/newgreen.gif" alt="'._CATLAST3DAYS.'" />';
			}
			if ($count <= 7 && $count > 3) {
				echo '<img src="modules/'.$module_name.'/images/newblue.gif" alt="'._CATTHISWEEK.'" />';
			}
		}
		$count++;
		$startdate = (time()-(86400 * $count));
	}
}

function popgraphic($hits) {
	global $module_name, $weblinks_config;
	if ($hits >= $weblinks_config['popular']) {
		echo '&nbsp;<img src="modules/'.$module_name.'/images/pop.gif" alt="'._POPULAR.'" />';
	}
}

function convertorderbyin($orderby) {
	// fix by AlexM
	if ($orderby == 'titlea')  return 'title ASC';
	if ($orderby == 'datea')   return 'date ASC';
	if ($orderby == 'hitsa')   return 'hits ASC';
	if ($orderby == 'ratinga') return 'linkratingsummary ASC';
	if ($orderby == 'titled')  return 'title DESC';
	if ($orderby == 'dated')   return 'date DESC';
	if ($orderby == 'hitsd')   return 'hits DESC';
	if ($orderby == 'ratingd') return 'linkratingsummary DESC';
	return 'title ASC';
}

function convertorderbytrans($orderby) {
	if ($orderby == '')			$orderbyTrans = _TITLEAZ;
	if ($orderby == 'hitsa')	$orderbyTrans = _POPULARITY1;
	if ($orderby == 'hitsd')	$orderbyTrans = _POPULARITY2;
	if ($orderby == 'titlea')	$orderbyTrans = _TITLEAZ;
	if ($orderby == 'titled')	$orderbyTrans = _TITLEZA;
	if ($orderby == 'datea')	$orderbyTrans = _DATE1;
	if ($orderby == 'dated')	$orderbyTrans = _DATE2;
	if ($orderby == 'ratinga')	$orderbyTrans = _RATING1;
	if ($orderby == 'ratingd')	$orderbyTrans = _RATING2;
	return $orderbyTrans;
}

function convertorderbyout($orderby) {
	if ($orderby == 'title ASC')				$orderby = 'titlea';
	if ($orderby == 'date ASC')					$orderby = 'datea';
	if ($orderby == 'hits ASC')					$orderby = 'hitsa';
	if ($orderby == 'linkratingsummary ASC')	$orderby = 'ratinga';
	if ($orderby == 'title DESC')				$orderby = 'titled';
	if ($orderby == 'date DESC')				$orderby = 'dated';
	if ($orderby == 'hits DESC')				$orderby = 'hitsd';
	if ($orderby == 'linkratingsummary DESC')	$orderby = 'ratingd';
	return $orderby;
}

function visit($lid) {
	global $linksprefix, $db;
	$db->sql_query("UPDATE ".$linksprefix."_links SET hits=hits+1 WHERE lid=$lid");
	$result = $db->sql_query("SELECT url FROM ".$linksprefix."_links WHERE lid=$lid");
	list($url) = $db->sql_fetchrow($result);
	URL::redirect($url);
}

function search($query, $min, $orderby, $show) {
	global $linksprefix, $db, $bgcolor2, $module_name, $weblinks_config;
	require_once('header.php');
	$perpage = $weblinks_config['perpage'];
	$linksresults = $weblinks_config['linksresults'];
	if (!isset($min)) $min=0;
	if (!isset($max)) $max=$min+$linksresults;
	$orderby = isset($_GET['orderby']) ? convertorderbyin($_GET['orderby']) : 'title ASC';
	if ($show != '') { $linksresults = $show; }
	else { $show = $linksresults; }
	$the_query = htmlprepare($query);
	$query = Fix_Quotes($query, true);
	$result = $db->sql_query("SELECT lid, cid, title, url, description, date, hits, linkratingsummary, totalvotes, totalcomments FROM ".$linksprefix."_links WHERE title LIKE '%$query%' OR description LIKE '%$query%' ORDER BY $orderby LIMIT $min,$linksresults");
	$fullcountresult = $db->sql_query("SELECT COUNT(*) FROM ".$linksprefix."_links WHERE title LIKE '%$query%' OR description LIKE '%$query%'");
	list($totalselectedlinks) = $db->sql_fetchrow($fullcountresult);
	$nrows	= $db->sql_numrows($result);
	$x=0;
	menu(1);
	echo '<br />';
	OpenTable();
	if ($query != '') {
		if ($nrows>0) {
		echo '<span class="option">'._SEARCHRESULTS4.': <b>'.$the_query.'</b></span><br /><br />'
			.'<table width="100%" style="background:'.$bgcolor2.';"><tr><td><span class="option"><b>'._USUBCATEGORIES.'</b></span></td></tr></table>';
		$result2 = $db->sql_query("SELECT cid, title FROM ".$linksprefix."_categories WHERE title LIKE '%$query%' ORDER BY title DESC");
		while(list($cid, $stitle) = $db->sql_fetchrow($result2)) {
			$res = $db->sql_query("SELECT * FROM ".$linksprefix."_links WHERE cid=$cid");
			$numrows = $db->sql_numrows($res);
			$result3 = $db->sql_query("SELECT cid,title,parentid FROM ".$linksprefix."_categories WHERE cid=$cid");
			list($cid3,$title3,$parentid3) = $db->sql_fetchrow($result3);
			if ($parentid3>0) $title3 = getparent($parentid3,$title3);
			$title3 = ereg_replace($query, "<b>$query</b>", $title3);
		}

		echo '<br /><table width="100%" style="background:'.$bgcolor2.';"><tr><td class="option"><b>'._LINKS.'</b></td></tr></table>';
		$orderbyTrans = (isset($_GET['orderby']) ? convertorderbytrans($_GET['orderby']) : _TITLEAZ);
		echo '<br /><span class="content">'._SORTLINKSBY.': '
			._TITLE.' (<a href="'.URL::index("&amp;l_op=search&amp;query=$the_query&amp;orderby=titlea").'">A</a>\<a href="'.URL::index("&amp;l_op=search&amp;query=$the_query&amp;orderby=titled").'">D</a>)'
			._DATE.' (<a href="'.URL::index("&amp;l_op=search&amp;query=$the_query&amp;orderby=datea").'">A</a>\<a href="'.URL::index("&amp;l_op=search&amp;query=$the_query&amp;orderby=dated").'">D</a>)'
			._RATING.' (<a href="'.URL::index("&amp;l_op=search&amp;query=$the_query&amp;orderby=ratinga").'">A</a>\<a href="'.URL::index("&amp;l_op=search&amp;query=$the_query&amp;orderby=ratingd").'">D</a>)'
			._POPULARITY.' (<a href="'.URL::index("&amp;l_op=search&amp;query=$the_query&amp;orderby=hitsa").'">A</a>\<a href="'.URL::index("&amp;l_op=search&amp;query=$the_query&amp;orderby=hitsd").'">D</a>)'
			.'<br />'._SITESSORTED.": $orderbyTrans<br /><br />";
		while(list($lid, $cid, $title, $url, $description, $time, $hits, $linkratingsummary, $totalvotes, $totalcomments) = $db->sql_fetchrow($result)) {
			$linkratingsummary = number_format($linkratingsummary, $weblinks_config['mainvotedecimal']);
			$transfertitle = str_replace (' ', '_', $title);
			$title = ereg_replace($query, "<b>$query</b>", $title);
			echo '<a href="'.URL::index('&amp;l_op=visit&amp;lid='.$lid).'" target="_blank">'.$title.'</a>';
			$datetime = formatDateTime($time.' 00:00:00', _DATESTRING3);
			newlinkgraphic($datetime);
			popgraphic($hits);
			echo '<br />';
			$description = ereg_replace($query, "<b>$query</b>", $description);
			echo _DESCRIPTION.": $description<br />";
			echo _ADDEDON.": $datetime "._HITS.": $hits";
			/* voting & comments stats */
			$votestring = ($totalvotes == 1) ? _VOTE : _VOTES;
			if ($linkratingsummary!='0' || $linkratingsummary!='0.0') {
				echo ' '._RATING.": $linkratingsummary ($totalvotes $votestring)";
			}
			echo '<br /><a href="'.URL::index('&amp;l_op=ratelink&amp;lid='.$lid.'&amp;ttitle='.$transfertitle).'">'._RATESITE.'</a>';
			if ($totalvotes != 0) {
				echo ' | <a href="'.URL::index("&amp;l_op=viewlinkdetails&amp;lid=$lid&amp;ttitle=$transfertitle").'">'._DETAILS.'</a>';
			}
			if ($totalcomments != 0) {
				echo ' | <a href="'.URL::index('&amp;l_op=viewlinkcomments&amp;lid='.$lid.'&amp;ttitle='.$transfertitle).'">'._SCOMMENTS.' ('.$totalcomments.')</a>';
			}
			detecteditorial($lid, $transfertitle);
			echo '<br />';
			$result3 = $db->sql_query("SELECT cid,title,parentid FROM ".$linksprefix."_categories WHERE cid=$cid");
			list($cid3,$title3,$parentid3) = $db->sql_fetchrow($result3);
			if ($parentid3>0) $title3 = getparent($parentid3,$title3);
			echo _CATEGORY.": $title3<br /><br />";
			$x++;
		}
		echo '</span>';
		$orderby = isset($_GET['orderby']) ? convertorderbyout($_GET['orderby']) : 'title ASC';
	   
	} else {
		echo '<br /><br /><div style="text-align:center;" class="option"><b>'._NOMATCHES.'</b><br /><br />'._GOBACK.'<br /></div>';
	}
	/* Calculates how many pages exist.	 Which page one should be on, etc... */
	$linkpagesint = ($totalselectedlinks / $linksresults);
	$linkpageremainder = ($totalselectedlinks % $linksresults);
	if ($linkpageremainder != 0) {
		$linkpages = ceil($linkpagesint);
		if ($totalselectedlinks < $linksresults) {
			$linkpageremainder = 0;
		}
	} else {
		$linkpages = $linkpagesint;
	}
	/* Page Numbering */
	if ($linkpages!=1 && $linkpages!=0) {
		echo '<br /><br />'
			._SELECTPAGE.': ';
		$prev=$min-$linksresults;
		if ($prev>=0) {
			echo '&nbsp;&nbsp;<b>[ <a href="'.URL::index("&amp;l_op=search&amp;query=$the_query&amp;min=$prev&amp;orderby=$orderby&amp;show=$show").'">'
				.' &laquo; '._PREVIOUSPAGE.'</a> ]</b> ';
		}
		$counter = 1;
		$currentpage = ($max / $linksresults);
		while ($counter<=$linkpages ) {
			$cpage = $counter;
			$mintemp = ($perpage * $counter) - $linksresults;
			if ($counter == $currentpage) {
				echo "<b>$counter</b> ";
			} else {
				echo '<a href="'.URL::index("&amp;l_op=search&amp;query=$the_query&amp;min=$mintemp&amp;orderby=$orderby&amp;show=$show").'">'.$counter.'</a> ';
			}
			$counter++;
		}
		$next=$min+$linksresults;
		if ($x>=$perpage) {
			echo '&nbsp;&nbsp;<b>[ <a href="'.URL::index("&amp;l_op=search&amp;query=$the_query&amp;min=$max&amp;orderby=$orderby&amp;show=$show").'"> '
				._NEXTPAGE.' &raquo;</a> ]</b>';
		}
	}
	} else {
		echo '<div style="text-align:center;" class="option"><b>'._NOMATCHES.'</b></div><br /><br />';
	}
	echo '<br /><br /><p style="text-align:left;">'._TRY2SEARCH.' "'.$the_query.'" '._INOTHERSENGINES.'<br />
	<ul><li><a href="http://groups.google.com/groups?q='.$the_query.'" target="_blank">Google Groups</a></li>
	<li><a href="http://images.google.com/images?q='.$the_query.'" target="_blank">Google Images</a></li>
	<li><a href="http://news.google.com/news?q='.$the_query.'" target="_blank">Google News</a></li>
	<li><a href="http://froogle.google.com/froogle?q='.$the_query.'" target="_blank">Froogle</a></li>	
	<li><a target="_blank" href="http://www.altavista.com/cgi-bin/query?pg=q&amp;sc=on&amp;hl=on&amp;act=2006&amp;par=0&amp;q='.$the_query.'&amp;kl=XX&amp;stype=stext">Alta Vista</a></li>
	<li><a target="_blank" href="http://www.hotbot.com/?MT='.$the_query.'&amp;DU=days&amp;SW=web">HotBot</a></li>
	<li><a target="_blank" href="http://www.infoseek.com/Titles?qt='.$the_query.'">Infoseek</a></li>
	<li><a target="_blank" href="http://www.dejanews.com/dnquery.xp?QRY='.$the_query.'">Deja News</a></li>
	<li><a target="_blank" href="http://www.lycos.com/cgi-bin/pursuit?query='.$the_query.'&amp;maxhits=20">Lycos</a></li>
	<li><a target="_blank" href="http://search.yahoo.com/bin/search?p='.$the_query.'">Yahoo</a></li>
	</ul>
	</p>';

	CloseTable();
}

function viewlinkeditorial($lid, $ttitle) {
	global $linksprefix, $db, $module_name;
	require_once('header.php');
	menu(1);
	$result = $db->sql_query("SELECT adminid, editorialtimestamp, editorialtext, editorialtitle FROM ".$linksprefix."_editorials WHERE linkid = $lid");
	$recordexist = $db->sql_numrows($result);

	$transfertitle = ereg_replace ('_', ' ', $ttitle);
	$displaytitle = $transfertitle;
	echo '<br />';
	OpenTable();
	echo '<div style="text-align:center;"><span class="option"><b>'._LINKPROFILE.': '.$displaytitle.'</b></span><br />';
	linkinfomenu($lid, $ttitle);
	if ($recordexist != 0) {
		while(list($adminid, $editorialtimestamp, $editorialtext, $editorialtitle)= $db->sql_fetchrow($result)) {
			ereg ('([0-9]{4})-([0-9]{1,2})-([0-9]{1,2}) ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})', $editorialtimestamp, $editorialtime);
			$editorialtime = strftime('%F', mktime($editorialtime[4], $editorialtime[5], $editorialtime[6], $editorialtime[2], $editorialtime[3], $editorialtime[1]));
			$date_array = explode('-', $editorialtime);
			$timestamp = mktime(0, 0, 0, $date_array['1'], $date_array['2'], $date_array['0']);
			$formatted_date = date('F j, Y', $timestamp);
			echo '<br /><br />';
			OpenTable2();
			echo '<span class="option"><b>'.$editorialtitle.'</b></span><br />'
				.'<span class="tiny">'._EDITORIALBY.' '.$adminid.' - '.$formatted_date.'</span><br /><br />'
				.$editorialtext;
			CloseTable2();
		}
	} else {
		echo '<br /><br /><span class="option"><b>'._NOEDITORIAL.'</b></span>';
	}
	echo '<br /><br />';
	linkfooter($lid,$ttitle);
	echo '</div>';
	CloseTable();
}

function detecteditorial($lid, $ttitle) {
	global $linksprefix, $db;
	$resulted2 = $db->sql_query("SELECT adminid FROM ".$linksprefix."_editorials WHERE linkid=$lid");
	$recordexist = $db->sql_numrows($resulted2);
	if ($recordexist != 0) {
		echo ' | <a href="'.URL::index('&amp;l_op=viewlinkeditorial&amp;lid='.$lid.'&amp;ttitle='.$ttitle).'">'._EDITORIAL.'</a>';
	}
}

function viewlinkcomments($lid, $ttitle) {
	global $linksprefix, $db, $bgcolor2, $module_name, $nukeurl;
	require_once('header.php');
	menu(1);
	echo '<br />';
	$result = $db->sql_query("SELECT ratinguser, rating, ratingcomments, ratingtimestamp FROM ".$linksprefix."_votedata WHERE ratinglid = $lid AND ratingcomments != '' ORDER BY ratingtimestamp DESC");
	$totalcomments = $db->sql_numrows($result);
	$displaytitle = ereg_replace ('_', ' ', $ttitle);
	OpenTable();
	echo "<div style=\"text-align:center;\"><span class=\"option\"><b>"._LINKPROFILE.": $displaytitle</b></span><br /><br />";
	linkinfomenu($lid, $ttitle);
	echo '<br /><br /><br />'._TOTALOF.' '.$totalcomments.' '._COMMENTS.'</div><br />'
	.'<table border="0" cellspacing="0" cellpadding="2" width="450">';
	$x=0;
	while(list($ratinguser, $rating, $ratingcomments, $ratingtimestamp)= $db->sql_fetchrow($result)) {
		ereg ('([0-9]{4})-([0-9]{1,2})-([0-9]{1,2}) ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})', $ratingtimestamp, $ratingtime);
		$ratingtime = strftime('%F', mktime($ratingtime[4], $ratingtime[5], $ratingtime[6], $ratingtime[2], $ratingtime[3], $ratingtime[1]));
		$date_array = explode('-', $ratingtime);
		$timestamp = mktime(0, 0, 0, $date_array['1'], $date_array['2'], $date_array['0']);
		$formatted_date = date('F j, Y', $timestamp);
	/* Individual user information */
		$result2 = $db->sql_query("SELECT rating FROM ".$linksprefix."_votedata WHERE ratinguser = '$ratinguser'");
		$usertotalcomments = $db->sql_numrows($result2);
		$useravgrating = 0;
		while(list($rating2) = $db->sql_fetchrow($result2)) $useravgrating = $useravgrating + $rating2;
		$useravgrating = $useravgrating / $usertotalcomments;
		$useravgrating = number_format($useravgrating, 1);
		echo '<tr><td style="background:'.$bgcolor2.';">'
			.'<span class="content"><b> '._USER.": </b><a href=\"$nukeurl/".URL::index("Your_Account&amp;profile=$ratinguser")."\">$ratinguser</a></span>"
			.'</td>'
			.'<td style="background:'.$bgcolor2.';" class="content"><b>'._RATING.': </b>'.$rating.'</td>'
			.'<td style="background:'.$bgcolor2.';" align="right" class="content">'.$formatted_date.'</td>'
			.'</tr>'
			.'<tr>'
			.'<td valign="top" class="tiny">'._USERAVGRATING.": $useravgrating</td>"
			.'<td valign="top" colspan="2" class="tiny">'._NUMRATINGS.": $usertotalcomments</td>"
			.'</tr>'
			.'<tr>'
			.'<td colspan="3" class="content">';
		if (is_admin()) {
			echo '<a href="'.URL::admin("&amp;mode=linksmodlink&amp;lid=$lid").'"><img src="modules/'.$module_name.'/images/editicon.gif" alt="'._EDITTHISLINK.'"></a>';
		}
		echo ' '.$ratingcomments
			.'<br /><br /><br /></td></tr>';
		$x++;
	}
	echo '</table><br /><br /><div style="text-align:center;">';
	linkfooter($lid,$ttitle);
	echo '</div>';
	CloseTable();
}

function viewlinkdetails($lid, $ttitle) {
	global $linksprefix, $db, $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4;
	global $anonymous, $module_name, $weblinks_config;
	require_once('header.php');
	$outsideweight = $weblinks_config['outsideweight'];
	$anonweight = $weblinks_config['anonweight'];
	$useoutsidevoting = $weblinks_config['useoutsidevoting'];
	$detailvotedecimal = $weblinks_config['detailvotedecimal'];
	$voteresult = $db->sql_query("SELECT rating, ratinguser, ratingcomments FROM ".$linksprefix."_votedata WHERE ratinglid = $lid");
	$totalvotesDB = $db->sql_numrows($voteresult);
	$avgOU = 0;
	$avgRU = 0;
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
	while(list($ratingDB, $ratinguserDB, $ratingcommentsDB)= $db->sql_fetchrow($voteresult)) {
		if ($ratingcommentsDB=='') {$truecomments--;}
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
		if ($ratinguserDB!=$anonymous && $ratinguserDB!='outside') {
			$regvoteval += $ratingDB;
		}
		if ($ratinguserDB!=$anonymous && $ratinguserDB!='outside') {
			if ($ratingDB > $topreg) $topreg = $ratingDB;
			if ($ratingDB < $bottomreg) $bottomreg = $ratingDB;
			for ($rcounter=1; $rcounter<11; $rcounter++) if ($ratingDB==$rcounter) $rvv[$rcounter]++;
		}
		if ($ratinguserDB==$anonymous) {
			if ($ratingDB > $topanon) $topanon = $ratingDB;
			if ($ratingDB < $bottomanon) $bottomanon = $ratingDB;
			for ($rcounter=1; $rcounter<11; $rcounter++) if ($ratingDB==$rcounter) $avv[$rcounter]++;
		}
		if ($ratinguserDB=='outside') {
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
			$finalrating = ((($avgOU * $impactOU) + ($avgAU * $impactAU)) / ($impactAU + $impactOU));
			$finalrating = number_format($finalrating(isset($detailvotedecimal) ? ", $detailvotedecimal":''));
		} else {
			/* Outside is 'standard weight' */
			$newimpact = $outsideweight / $anonweight;
			$impactOU = $outsidevotes;
			$impactAU = $anonvotes / $newimpact;
			$finalrating = ((($avgOU * $impactOU) + ($avgAU * $impactAU)) / ($impactAU + $impactOU));
			$finalrating = number_format($finalrating, $detailvotedecimal);
		}
	} else {
		/* REG User vs. Anonymous vs. Outside User Weight Calculations */
		$impact = $anonweight;
		$outsideimpact = $outsideweight;
		$avgRU = ($regvotes == 0) ? 0 : ($regvoteval / $regvotes);
		$avgAU = ($anonvotes == 0) ? 0 : ($anonvoteval / $anonvotes);
		$avgOU = ($outsidevotes == 0) ? 0 : ($outsidevoteval / $outsidevotes);
		$impactRU = $regvotes;
		$impactAU = $anonvotes / $impact;
		$impactOU = $outsidevotes / $outsideimpact;
		$finalrating = (($avgRU * $impactRU) + ($avgAU * $impactAU) + ($avgOU * $impactOU)) / ($impactRU + $impactAU + $impactOU);
		$finalrating = number_format($finalrating, $detailvotedecimal);
	}
	if ($avgOU == 0 || $avgOU == '') {
		$avgOU = '';
	} else {
		$avgOU = number_format($avgOU, $detailvotedecimal);
	}
	if ($avgRU == 0 || $avgRU == '') {
		$avgRU = '';
	} else {
		$avgRU = number_format($avgRU, $detailvotedecimal);
	}
	if ($avgAU == 0 || $avgAU == '') {
		$avgAU = '';
	} else {
		$avgAU = number_format($avgAU, $detailvotedecimal);
	}
	if ($topanon == 0) $topanon = '';
	if ($bottomanon == 11) $bottomanon = '';
	if ($topreg == 0) $topreg = '';
	if ($bottomreg == 11) $bottomreg = '';
	if ($topoutside == 0) $topoutside = '';
	if ($bottomoutside == 11) $bottomoutside = '';
	$totalchartheight = 70;
	$chartunits	 = $totalchartheight / 10;
	$avvper		 = array(0,0,0,0,0,0,0,0,0,0,0);
	$rvvper		 = array(0,0,0,0,0,0,0,0,0,0,0);
	$ovvper		 = array(0,0,0,0,0,0,0,0,0,0,0);
	$avvpercent	 = array(0,0,0,0,0,0,0,0,0,0,0);
	$rvvpercent	 = array(0,0,0,0,0,0,0,0,0,0,0);
	$ovvpercent	 = array(0,0,0,0,0,0,0,0,0,0,0);
	$avvchartheight = array(0,0,0,0,0,0,0,0,0,0,0);
	$rvvchartheight = array(0,0,0,0,0,0,0,0,0,0,0);
	$ovvchartheight = array(0,0,0,0,0,0,0,0,0,0,0);
	$avvmultiplier	= 0;
	$rvvmultiplier	= 0;
	$ovvmultiplier	= 0;
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
	$displaytitle = ereg_replace ('_', ' ', $ttitle);
	echo '<br />';
	OpenTable();
	echo '<div style="text-align:center;"><span class="option"><b>'._LINKPROFILE.": $displaytitle</b></span><br />";
	linkinfomenu($lid, $ttitle);
	echo '<br /><br /><p style="border:2px solid '.$bgcolor2.'; background:'.$bgcolor3.'; width:150px; margin:auto;">'
	.'<b>'._LINKRATINGDET.'</b><br />'
	.'<b>'._TOTALVOTES."</b> $totalvotesDB<br />"
	.'<b>'._OVERALLRATING.":</b> $finalrating</p><br /></div>";
	echo '<table align="center" border="0" cellspacing="0" cellpadding="2" width="455">'
	.'<tr><td colspan="2" style="background:'.$bgcolor2.';" class="content"><b>'._REGISTEREDUSERS.'</b></td></tr>'
	.'<tr>'
	."<td style=\"background:$bgcolor1;\" class=\"content\">"._NUMBEROFRATINGS.": $regvotes</td>"
	.'<td rowspan="5" style="width:200px;">';
	if ($regvotes==0) {
		echo '<div style="text-align:center;" class="content">'._NOREGUSERSVOTES.'</div>';
	} else {
		echo '<table border="1" width="200">'
		.'<tr>'
		.'<td valign="top" align="center" colspan="10" style="background:'.$bgcolor2.';">'._BREAKDOWNBYVAL.'</td>'
		.'</tr>'
		.'<tr>'
		."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img  alt=\"$rvv[1] "._LVOTES." ($rvvpercent[1]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$rvvchartheight[1]\" /></td>"
		."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img  alt=\"$rvv[2] "._LVOTES." ($rvvpercent[2]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$rvvchartheight[2]\" /></td>"
		."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img  alt=\"$rvv[3] "._LVOTES." ($rvvpercent[3]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$rvvchartheight[3]\" /></td>"
		."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img  alt=\"$rvv[4] "._LVOTES." ($rvvpercent[4]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$rvvchartheight[4]\" /></td>"
		."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img  alt=\"$rvv[5] "._LVOTES." ($rvvpercent[5]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$rvvchartheight[5]\" /></td>"
		."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img  alt=\"$rvv[6] "._LVOTES." ($rvvpercent[6]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$rvvchartheight[6]\" /></td>"
		."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img  alt=\"$rvv[7] "._LVOTES." ($rvvpercent[7]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$rvvchartheight[7]\" /></td>"
		."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img  alt=\"$rvv[8] "._LVOTES." ($rvvpercent[8]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$rvvchartheight[8]\" /></td>"
		."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img  alt=\"$rvv[9] "._LVOTES." ($rvvpercent[9]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$rvvchartheight[9]\" /></td>"
		."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img  alt=\"$rvv[10] "._LVOTES." ($rvvpercent[10]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$rvvchartheight[10]\" /></td>"
		.'</tr>'
		.'<tr>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">1</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">2</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">3</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">4</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">5</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">6</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">7</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">8</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">9</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">10</td>'
		.'</tr>'
		.'</table>';
	}
	echo '</td>'
	.'</tr>'
	."<tr><td style=\"background:$bgcolor2;\" class=\"content\">"._LINKRATING.": $avgRU</td></tr>"
	."<tr><td style=\"background:$bgcolor1;\" class=\"content\">"._HIGHRATING.": $topreg</td></tr>"
	."<tr><td style=\"background:$bgcolor2;\" class=\"content\">"._LOWRATING.": $bottomreg</td></tr>"
	."<tr><td style=\"background:$bgcolor1;\" class=\"content\">"._NUMOFCOMMENTS.": $truecomments</td></tr>"
	."<tr><td></td></tr>"
	."<tr><td valign=\"top\" colspan=\"2\" class=\"tiny\"><br /><br />"._WEIGHNOTE." $anonweight "._TO." 1.</td></tr>"
	."<tr><td colspan=\"2\" style=\"background:$bgcolor2;\" class=\"content\"><b>"._UNREGISTEREDUSERS."</b></td></tr>"
	."<tr><td style=\"background:$bgcolor1;\" class=\"content\">"._NUMBEROFRATINGS.": $anonvotes</td>"
	.'<td rowspan="4" style="width:200px;">';
	if ($anonvotes==0) {
	echo '<div style="text-align:center;" class="content">'._NOUNREGUSERSVOTES.'</div>';
	} else {
		echo '<table border="1" width="200">'
		.'<tr>'
		.'<td valign="top" align="center" colspan="10" style="background:'.$bgcolor2.';">'._BREAKDOWNBYVAL.'</td>'
		.'</tr>'
		.'<tr>'
		."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img alt=\"$avv[1] "._LVOTES." ($avvpercent[1]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$avvchartheight[1]\" /></td>"
		."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img alt=\"$avv[2] "._LVOTES." ($avvpercent[2]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$avvchartheight[2]\" /></td>"
		."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img alt=\"$avv[3] "._LVOTES." ($avvpercent[3]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$avvchartheight[3]\" /></td>"
		."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img alt=\"$avv[4] "._LVOTES." ($avvpercent[4]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$avvchartheight[4]\" /></td>"
		."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img alt=\"$avv[5] "._LVOTES." ($avvpercent[5]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$avvchartheight[5]\" /></td>"
		."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img alt=\"$avv[6] "._LVOTES." ($avvpercent[6]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$avvchartheight[6]\" /></td>"
		."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img alt=\"$avv[7] "._LVOTES." ($avvpercent[7]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$avvchartheight[7]\" /></td>"
		."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img alt=\"$avv[8] "._LVOTES." ($avvpercent[8]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$avvchartheight[8]\" /></td>"
		."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img alt=\"$avv[9] "._LVOTES." ($avvpercent[9]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$avvchartheight[9]\" /></td>"
		."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img alt=\"$avv[10] "._LVOTES." ($avvpercent[10]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$avvchartheight[10]\" /></td>"
		.'</tr>'
		.'<tr>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">1</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">2</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">3</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">4</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">5</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">6</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">7</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">8</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">9</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">10</td>'
		.'</tr>'
		.'</table>';
	}
	echo '</td>'
	.'</tr>'
	."<tr><td style=\"background:$bgcolor2;\" class=\"content\">"._LINKRATING.": $avgAU</td></tr>"
	."<tr><td style=\"background:$bgcolor1;\" class=\"content\">"._HIGHRATING.": $topanon</td></tr>"
	."<tr><td style=\"background:$bgcolor2;\" class=\"content\">"._LOWRATING.": $bottomanon</td></tr>"
	."<tr><td style=\"background:$bgcolor1;\" class=\"content\">&nbsp;</td></tr>";
	if ($useoutsidevoting == 1) {
	echo "<tr><td valign=\"top\" colspan=\"2\" class=\"tiny\"><br /><br />"._WEIGHOUTNOTE." $outsideweight "._TO." 1.</td></tr>"
		."<tr><td colspan=\"2\" style=\"background:$bgcolor2;\" class=\"content\"><b>"._OUTSIDEVOTERS."</b></td></tr>"
		."<tr><td style=\"background:$bgcolor1;\" class=\"content\">"._NUMBEROFRATINGS.": $outsidevotes</td>"
		.'<td rowspan="5" style="width:200px;">';
		if ($outsidevotes==0) {
		echo '<div style="text-align:center;" class="content">'._NOOUTSIDEVOTES.'</div>';
	} else {
		echo '<table border="1" width="200">'
			.'<tr>'
			.'<td valign="top" align="center" colspan="10" style="background:'.$bgcolor2.';">'._BREAKDOWNBYVAL.'</td>'
		  .'</tr>'
		  .'<tr>'
		  ."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img  alt=\"$ovv[1] "._LVOTES." ($ovvpercent[1]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$ovvchartheight[1]\" /></td>"
		  ."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img  alt=\"$ovv[2] "._LVOTES." ($ovvpercent[2]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$ovvchartheight[2]\" /></td>"
		  ."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img  alt=\"$ovv[3] "._LVOTES." ($ovvpercent[3]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$ovvchartheight[3]\" /></td>"
		  ."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img  alt=\"$ovv[4] "._LVOTES." ($ovvpercent[4]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$ovvchartheight[4]\" /></td>"
		  ."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img  alt=\"$ovv[5] "._LVOTES." ($ovvpercent[5]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$ovvchartheight[5]\" /></td>"
		  ."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img  alt=\"$ovv[6] "._LVOTES." ($ovvpercent[6]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$ovvchartheight[6]\" /></td>"
		  ."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img  alt=\"$ovv[7] "._LVOTES." ($ovvpercent[7]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$ovvchartheight[7]\" /></td>"
		  ."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img  alt=\"$ovv[8] "._LVOTES." ($ovvpercent[8]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$ovvchartheight[8]\" /></td>"
		  ."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img  alt=\"$ovv[9] "._LVOTES." ($ovvpercent[9]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$ovvchartheight[9]\" /></td>"
		  ."<td style=\"background:$bgcolor1;\" valign=\"bottom\"><img  alt=\"$ovv[10] "._LVOTES." ($ovvpercent[10]% "._LTOTALVOTES.")\" src=\"images/blackpixel.gif\" width=\"15\" height=\"$ovvchartheight[10]\" /></td>"
		  .'</tr>'
		.'</tr>'
		.'<tr>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">1</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">2</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">3</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">4</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">5</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">6</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">7</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">8</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">9</td>'
		.'<td style="background:'.$bgcolor2.';" valign="bottom" align="center">10</td>'
		.'</tr>'
		.'</table>';
	  }
	echo '</td>'
		.'</tr>'
		."<tr><td style=\"background:$bgcolor2;\" class=\"content\">"._LINKRATING.": $avgOU</td></tr>"
		."<tr><td style=\"background:$bgcolor1;\" class=\"content\">"._HIGHRATING.": $topoutside</td></tr>"
		."<tr><td style=\"background:$bgcolor2;\" class=\"content\">"._LOWRATING.": $bottomoutside</td></tr>"
		."<tr><td style=\"background:$bgcolor1;\" class=\"content\">&nbsp;</td></tr>";
	}
	echo '</table><br /><br /><div style="text-align:center;">';
	linkfooter($lid,$ttitle);
	echo '</div>';
	CloseTable();
}

function linkfooter($lid,$ttitle) {
	echo '<span class="content">[ <a href="'.URL::index('&amp;l_op=visit&amp;lid='.$lid).'" target="_blank">'._VISITTHISSITE.'</a> | <a href="'.URL::index('&amp;l_op=ratelink&amp;lid='.$lid.'&amp;ttitle='.$ttitle).'">'._RATETHISSITE.'</a> ]</span><br /><br />';
	linkfooterchild($lid);
}

function linkfooterchild($lid) {
	global $module_name, $weblinks_config;
	if ($weblinks_config['useoutsidevoting'] = 1) {
	echo '<br /><span class="content">'._ISTHISYOURSITE.' <a href="'.URL::index('&amp;l_op=outsidelinksetup&amp;lid='.$lid).'">'._ALLOWTORATE.'</a></span>';
	}
}

function brokenlink($lid) {
	global $linksprefix, $db, $module_name, $userinfo;
	if (is_user()) {
		require_once('header.php');
		$ratinguser = $userinfo['username'];
		menu(1);
		echo '<br />';
		$result = $db->sql_query("SELECT cid, title, url, description FROM ".$linksprefix."_links WHERE lid=$lid");
		list($cid, $title, $url, $description) = $db->sql_fetchrow($result);
		OpenTable();
		echo '<form action="'.URL::index().'" method="post" enctype="multipart/form-data" accept-charset="utf-8">
		<div style="text-align:center;" class="content">
		<span class="option"><b>'._REPORTBROKEN.'</b></span><br /><br /><br />
		<input type="hidden" name="lid" value="'.$lid.'" />
		<input type="hidden" name="cid" value="'.$cid.'" />
		<input type="hidden" name="url" value="'.$url.'" />
		<input type="hidden" name="title" value="'.$title.'" />
		<input type="hidden" name="description" value="'.$description.'" />
		<input type="hidden" name="modifysubmitter" value="'.$ratinguser.'" />
		<input type="hidden" name="l_op" value="brokenlinks" />
		'._THANKSBROKEN.'<br /><br />
		<input type="submit" value="'._REPORTBROKEN.'" />
		</div></form>';
		CloseTable();
	} else {
		URL::redirect(URL::index());
	}
}

function brokenlinkS($lid, $cid, $title, $url, $description, $modifysubmitter) {
	global $linksprefix, $db, $module_name, $userinfo;
	$ratinguser = is_user() ? $userinfo['user_id'] : _ANONYMOUS;
	$result = $db->sql_query("SELECT COUNT(*) FROM ".$linksprefix."_modrequest WHERE lid=$lid AND modifysubmitter='$ratinguser'");
	list($done_before) = $db->sql_fetchrow($result);
	if ($done_before < 1) {
		$title = Fix_Quotes($title,1);
		$url = Fix_Quotes($url,1);
		$description = Fix_Quotes($description);
		$db->sql_query("INSERT INTO ".$linksprefix."_modrequest (requestid, lid, cid, sid, title, url, description, modifysubmitter, brokenlink) VALUES (NULL, $lid, $cid, 0, '$title', '$url', '$description', '$ratinguser', 1)");
	}
	require_once('header.php');
	menu(1);
	echo '<br />';
	OpenTable();
	echo '<br /><div style="text-align:center">'._THANKSFORINFO.'<br /><br />'._LOOKTOREQUEST.'</div><br />';
	CloseTable();
}

function modifylinkrequest($lid) {
	global $weblinks_config, $linksprefix, $db, $module_name, $userinfo;
	require_once('header.php');
	if(is_user()) {
		$ratinguser = $userinfo['username'];
	} else {
		$ratinguser = _ANONYMOUS;
	}
	menu(1);
	echo '<br />';
	OpenTable();
	$allownow = 1;
	if ($weblinks_config['blockunregmodify'] == 0 && $ratinguser==_ANONYMOUS) {
		echo '<br /><br /><div style="text-align:center;">'._ONLYREGUSERSMODIFY.'</div>';
		$allownow = 0;
	}
	if ($allownow == 1) {
		$result = $db->sql_query("SELECT cid, title, url, description FROM ".$linksprefix."_links WHERE lid=$lid");
		while(list($cid, $title, $url, $description) = $db->sql_fetchrow($result)) {
			echo '<form action="'.URL::index().'" method="post" enctype="multipart/form-data" accept-charset="utf-8">'
			.'<div style="text-align:center;" class="content"><span class="option"><b>'._REQUESTLINKMOD.'</b></span><br />'
			._LINKID.": <b>$lid</b><br /><br /><br />"
			._LINKTITLE.":<br /><input type=\"text\" name=\"title\" value=\"$title\" size=\"50\" maxlength=\"100\" /><br /><br />"
			._URL.":<br /><input type=\"text\" name=\"url\" value=\"$url\" size=\"50\" maxlength=\"100\" /><br /><br />"
			._DESCRIPTION.": <br /><textarea name=\"description\" cols=\"60\" rows=\"10\">$description</textarea><br /><br />";
			$result2 = $db->sql_query("select cid, title from ".$linksprefix."_categories order by title");
			echo "<input type=\"hidden\" name=\"lid\" value=\"$lid\" />"
			."<input type=\"hidden\" name=\"modifysubmitter\" value=\"$ratinguser\" />"
			._CATEGORY.": <select name=\"cat\">";
			$result2 = $db->sql_query("SELECT cid, title, parentid FROM ".$linksprefix."_categories ORDER BY title");
			while(list($cid2, $ctitle2, $parentid2) = $db->sql_fetchrow($result2)) {
				$sel = ($cid2==$cid) ? 'selected="selected"' : '';
				if ($parentid2!=0) $ctitle2=getparent($parentid2,$ctitle2); {
					echo "<option value=\"$cid2\" $sel>$ctitle2</option>";
				}
			}
			echo '</select><br /><br />'
			.'<input type="hidden" name="l_op" value="modifylinkrequestS" />'
			.'<input type="submit" value="'._SENDREQUEST.'" /></div></form>';
		}
	}
	CloseTable();
}

function modifylinkrequestS($lid, $cat, $title, $url, $description, $modifysubmitter) {
	global $linksprefix, $db, $userinfo, $anonymous, $weblinks_config;
	$ratinguser = is_user() ? $userinfo['username'] : $anonymous;
	$allownow = 1;
	if ($weblinks_config['blockunregmodify'] == 0 && $ratinguser == $anonymous) {
		require_once('header.php');
		menu(1);
		echo '<br />';
		OpenTable();
		echo '<div style="text-align:center;" class="content">'._ONLYREGUSERSMODIFY.'</div>';
		$allownow = 0;
		CloseTable();
	}
	if ($allownow == 1) {
		$title = Fix_Quotes($title,1);
		$url = Fix_Quotes($url,1);
		$description = Fix_Quotes($description);
		$db->sql_query("INSERT INTO ".$linksprefix."_modrequest (requestid, lid, cid, sid, title, url, description, modifysubmitter, brokenlink) VALUES (NULL, $lid, $cat, 0, '$title', '$url', '$description', '$ratinguser', 0)");
		require_once('header.php');
		menu(1);
		echo '<br />';
		OpenTable();
		echo '<div style="text-align:center;" class="content">'._THANKSFORINFO.' '._LOOKTOREQUEST.'</div>';
		CloseTable();
	}
}

function rateinfo($lid) {
	global $linksprefix, $db;
	$db->sql_query("UPDATE ".$linksprefix."_links SET hits=hits+1 WHERE lid=$lid");
	$result = $db->sql_query("SELECT url FROM ".$linksprefix."_links WHERE lid=$lid");
	list($url) = $db->sql_fetchrow($result);
	URL::redirect($url);
}

function completevoteheader(){
	menu(1);
	echo '<br />';
	OpenTable();
}

function completevotefooter($lid, $ttitle, $ratinguser) {
	global $linksprefix, $db, $sitename, $module_name;
	$result = $db->sql_query("SELECT url FROM ".$linksprefix."_links WHERE lid=$lid");
	list($url)= $db->sql_fetchrow($result);
	echo '<span class="content">'._THANKSTOTAKETIME." $sitename. "._LETSDECIDE.'</span><br /><br /><br />';
	if ($ratinguser == 'outside') {
		echo '<div style="text-align:center;" class="content">'.WEAPPREACIATE.' '.$sitename.'!<br /><a href="'.$url.'">'._RETURNTO.' '.$ttitle.'</a></div><br /><br />';
		$result = $db->sql_query("SELECT title FROM ".$linksprefix."_links WHERE lid=$lid");
		list($title)= $db->sql_fetchrow($result);
		$ttitle = ereg_replace (' ', '_', $title);
	}
	echo '<div style="text-align:center;">';
	linkinfomenu($lid, $ttitle);
	echo '</div>';
	CloseTable();
}

function completevote($error) {
	global $module_name;
	if ($error == 'none') echo '<div style="text-align:center;" class="content"><b>'._COMPLETEVOTE1.'</b></div>';
	if ($error == 'anonflood') echo '<div style="text-align:center;" class="option"><b>'._COMPLETEVOTE2.'</b></div><br />';
	if ($error == 'regflood') echo '<div style="text-align:center;" class="option"><b>'._COMPLETEVOTE3.'</b></div><br />';
	if ($error == 'postervote') echo '<div style="text-align:center;" class="option"><b>'._COMPLETEVOTE4.'</b></div><br />';
	if ($error == 'nullerror') echo '<div style="text-align:center;" class="option"><b>'._COMPLETEVOTE5.'</b></div><br />';
	if ($error == 'outsideflood') echo '<div style="text-align:center;" class="option"><b>'._COMPLETEVOTE6.'</b></div><br />';
}

$cid = (isset($_GET['cid']) ? intval($_GET['cid']) : (isset($_POST['cid']) ? intval($_POST['cid']) : 0));
$l_op = strtolower(isset($_GET['l_op']) ? $_GET['l_op'] : (isset($_POST['l_op']) ? $_POST['l_op'] : ''));
$lid = (isset($_GET['lid']) ? intval($_GET['lid']) : (isset($_POST['lid']) ? intval($_POST['lid']) : 0));
$cat = isset($_POST['cat']) ? intval($_POST['cat']) : NULL;

if (isset($_GET['parentid'])) $parentid = intval($_GET['parentid']);
if (isset($_GET['min'])) $min = intval($_GET['min']);
if (isset($_GET['show'])) $show = intval($_GET['show']);
if (isset($_GET['ratenum'])) $ratenum = intval($_GET['ratenum']);
//trigger_error($_GET['orderby']);
switch($l_op) {

	case "addlink":
	AddLink();
	break;

	case "newlinks":
	NewLinks(isset($_POST['newlinkshowdays']) ? $_POST['newlinkshowdays'] : isset($_GET['newlinkshowdays']) ? $_GET['newlinkshowdays'] : '');
	break;

	case "newlinksdate":
	NewLinksDate($_GET['selectdate']);
	break;

	case "toprated":
	TopRated((isset($_GET['ratenum']) ? $_GET['ratenum'] : (isset($_POST['ratenum']) ? $_POST['ratenum'] : NULL)) , (isset($_GET['ratetype'])? $_GET['ratetype'] : (isset($_POST['ratetype'])? $_POST['ratetype'] : NULL)));
	break;

	case "mostpopular":
	MostPopular((isset($_GET['ratenum']) ? $_GET['ratenum'] : (isset($_POST['ratenum']) ? $_POST['ratenum'] : NULL)) , (isset($_GET['ratetype'])? $_GET['ratetype'] : (isset($_POST['ratetype'])? $_POST['ratetype'] : NULL)));
	break;

	case "randomlink":
	RandomLink();
	break;

	case "viewlink":
	if ($cid == 0) {index();break;}
	viewlink($cid, (isset($_POST['min']) ? $_POST['min'] : 0), (isset($_GET['orderby']) ? $_GET['orderby'] : ''), (isset($_POST['show']) ? $_POST['show'] : ''));
	break;

	case "brokenlink":
	brokenlink($lid);
	break;

	case "modifylinkrequest":
	modifylinkrequest($lid);
	break;

	case "modifylinkrequests":
	modifylinkrequestS($lid, $cat, $_POST['title'], $_POST['url'], $_POST['description'], $_POST['modifysubmitter']);
	break;

	case "brokenlinks":
	brokenlinkS($_POST['lid'], $_POST['cid'], $_POST['title'], $_POST['url'], $_POST['description'], $_POST['modifysubmitter']);
	break;

	case "visit":
	visit($lid);
	break;

	case 'featured':
	featured();
	break;

	case "add":
	add_link($_POST['title'], $_POST['url'], $_POST['auth_name'], $cat, $_POST['description'], $_POST['email']);
	break;

	case "search":
	search(isset($_POST['query']) ? $_POST['query'] : $_GET['query'] , (isset($_POST['min']) ? intval($_POST['min']) : 0), (isset($_GET['orderby']) ? $_GET['orderby'] : ''), (isset($_POST['show']) ? $_POST['show'] : ''));
	break;

	case "rateinfo":
	rateinfo($lid);
	break;

	case "ratelink":
	require("modules/$module_name/rate.inc");
	ratelink($lid, $_GET['ttitle']);
	break;

	case "addrating":
	require("modules/$module_name/rate.inc");
	addrating();
	break;

	case "outsidelinksetup":
	require("modules/$module_name/rate.inc");
	outsidelinksetup($lid);
	break;

	case "viewlinkcomments":
	viewlinkcomments($lid, (isset($_GET['ttitle'])?$_GET['ttitle']:''));
	break;

	case "viewlinkeditorial":
	viewlinkeditorial($lid, (isset($_GET['ttitle'])?$_GET['ttitle']:''));
	break;

	case "viewlinkdetails":
	viewlinkdetails($lid, (isset($_GET['ttitle'])?$_GET['ttitle']:''));
	break;

	default:
	index();
	break;

}
