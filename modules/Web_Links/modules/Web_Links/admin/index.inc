<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Web_Links/modules/Web_Links/admin/index.inc,v $
  $Revision: 9.26 $
  $Author: phoenix $
  $Date: 2010/11/04 01:19:25 $
**********************************************/
if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin('web_links')) { die('Access Denied'); }

if (!Cache::array_load('weblinks_config')) {
    $result = $db->sql_query('SELECT * FROM '.$prefix.'_links_config', true);
    while ($row = $db->sql_fetchrow($result)) {
        $weblinks_config[$row['config_name']] = $row['config_value'];
    }
    Cache::array_save('weblinks_config');
    $db->sql_freeresult($result);
}

function Config() {
    global $prefix, $db, $bgcolor2, $op, $weblinks_config;
	require_once('header.php');
	GraphicAdmin('_AMENU6');
	OpenTable();
	echo '<div style="text-align:center;"><span class="title">'._WEBLINKS.' '._ADMIN.' Configuration</span><br />';
	echo '[ <a href="'.URL::admin($op).'">Return to'._WEBLINKS.' '._ADMIN.'</a> ]</div>';
	CloseTable();
	echo '<br />';

	echo '<form method="post" action="'.URL::admin().'"><input type="hidden" name="mode" value="updateConfig" /><div>';
	OpenTable();

	echo '<span style="width:140px; float:left;">Allow Anonymous</span>';
	echo '<span style="width:80px; float:left;">'.yesno_option('xlinks_anonaddlinklock', $weblinks_config['links_anonaddlinklock']).'</span> Allow Unregistered users to suggest New Links?<br /><hr />';

	echo '<span style="width:140px; float:left;">Allow Unreg Changes</span>';
	echo '<span style="width:80px; float:left;">'.yesno_option('xblockunregmodify', $weblinks_config['blockunregmodify']).'</span> Allow Unregistered users to suggest links changes?<br /><hr />';

	echo '<span style="width:140px; float:left;">Allow Webmasters</span>';
	echo '<span style="width:80px; float:left;">'.yesno_option('xuseoutsidevoting', $weblinks_config['useoutsidevoting']).'</span> Allow Webmasters to put vote links on their site?<br /><hr />';

	echo '<span style="width:140px; float:left;">Show Featured</span>';
	echo '<span style="width:80px; float:left;">'.yesno_option('xfeaturebox', $weblinks_config['featurebox']).'</span> Show Feature Link Box on links Main Page?<br /><hr />';

	echo '<span style="width:140px; float:left;">Verify Links?</span>';
	echo '<span style="width:80px; float:left;">'.yesno_option('xcheckweblinks', $weblinks_config['checkweblinks']).'</span> Uses getfileinfo to check if links are really valid?<br /><hr />';


	echo '<span style="width:140px; float:left;">Anonymous Days</span>';
	echo '<span style="width:80px; float:left;"><input name="xanonwaitdays" type="text" value="'.$weblinks_config['anonwaitdays'].'" size="5" /></span> Number of days anonymous users need to wait to vote on a link<br /><hr />';

	echo '<span style="width:140px; float:left;">Outside Days</span>';
	echo '<span style="width:80px; float:left;"><input name="xoutsidewaitdays" type="text" value="'.$weblinks_config['outsidewaitdays'].'" size="5" /></span> Number of days outside users need to wait to vote on a link (checks IP)<br /><hr />';

	echo '<span style="width:140px; float:left;">Anonymous Weight</span>';
	echo '<span style="width:80px; float:left;"><input name="xanonweight" type="text" value="'.$weblinks_config['anonweight'].'" size="5" /></span> How many Unregistered User vote per 1 Registered User Vote?<br /><hr />';

	echo '<span style="width:140px; float:left;">Outside Weight</span>';
	echo '<span style="width:80px; float:left;"><input name="xoutsideweight" type="text" value="'.$weblinks_config['outsideweight'].'" size="5" /></span> How many Outside User vote per 1 Registered User Vote?<br /><hr />';

	echo '<span style="width:140px; float:left;">Top Links Trigger</span>';
	echo '<span style="width:80px; float:left;"><input name="xtoplinkspercentrigger" type="text" value="'.$weblinks_config['toplinkspercentrigger'].'" size="5" /></span> 1 to Show Top Links as a Percentage (else # of links)<br /><hr />';

	echo '<span style="width:140px; float:left;">Top Links level</span>';
	echo '<span style="width:80px; float:left;"><input name="xtoplinks" type="text" value="'.$weblinks_config['toplinks'].'" size="5" /></span> Either # of links OR percentage to show (percentage as whole number. #/100)<br /><hr />';

	echo '<span style="width:140px; float:left;">Most Popular Trigger</span>';
	echo '<span style="width:80px; float:left;"><input name="xmostpoplinkspercentrigger" type="text" value="'.$weblinks_config['mostpoplinkspercentrigger'].'" size="5" /></span> 1 to Show Most Popular Links as a Percentage (else # of links)<br /><hr />';

	echo '<span style="width:140px; float:left;">Most Popular Level</span>';
	echo '<span style="width:80px; float:left;"><input name="xmostpoplinks" type="text" value="'.$weblinks_config['mostpoplinks'].'" size="5" /></span> Either # of links OR percentage to show (percentage as whole number. #/100)<br /><hr />';

	echo '<span style="width:140px; float:left;">Top 10 Minimum</span>';
	echo '<span style="width:80px; float:left;"><input name="xlinkvotemin" type="text" value="'.$weblinks_config['linkvotemin'].'" size="5" /></span> Number votes needed to make the \'top 10\' list<br /><hr />';

	echo '<span style="width:140px; float:left;">Main Categories</span>';
	echo '<span style="width:80px; float:left;">'.select_option('xmaincats', $weblinks_config['maincats'], array('1', '2', '3')).'</span>  Number of Main categories (columns) to display on main page.<br /><hr />';
	echo '<span style="width:140px; float:left;">Sub-categories</span>';
	echo '<span style="width:80px; float:left;">'.select_option('xsubcats', $weblinks_config['subcats'], array('3', '4', '5', '6')).'</span>  Number of sub-categories to display on main page.<br /><hr />';
	echo '<span style="width:140px; float:left;">Main Links</span>';
	echo '<span style="width:80px; float:left;">'.select_option('xmainlinks', $weblinks_config['mainlinks'], array('0', '3', '5', '7', '10')).'</span> Number of recent/popular links to list on main page.<br /><hr />';
	echo '<span style="width:140px; float:left;">Links per page</span>';
	echo '<span style="width:80px; float:left;">'.select_option('xperpage', $weblinks_config['perpage'], array('5', '10', '15', '20')).'</span> How many links to show on each page?<br /><hr />';
	echo '<span style="width:140px; float:left;">Hits for Popular</span>';
	echo '<span style="width:80px; float:left;">'.select_option('xpopular', $weblinks_config['popular'], array('5', '500', '1000', '2000', '3000', '5000')).'</span> How many hits need a link to be listed as popular?<br /><hr />';
	echo '<span style="width:140px; float:left;">Number of New Links</span>';
	echo '<span style="width:80px; float:left;">'.select_option('xnewlinks', $weblinks_config['newlinks'], array('10', '15', '20', '25')).'</span> How many links to display in the New Links Page?<br /><hr />';
	echo '<span style="width:140px; float:left;">Number of Top Links</span>';
	echo '<span style="width:80px; float:left;">'.select_option('xtoplinks', $weblinks_config['toplinks'], array('10', '15', '20', '25')).'</span> How many links to display in The Best Links Page? (Most Popular)<br /><hr />';
	echo '<span style="width:140px; float:left;">Search Results</span>';
	echo '<span style="width:80px; float:left;">'.select_option('xlinksresults', $weblinks_config['linksresults'], array('10', '15', '20')).'</span> How many links to display on each search result page?<br /><hr />';
	echo '<span style="width:140px; float:left;">Main Vote decimals</span>';
	echo '<span style="width:80px; float:left;">'.select_option('xmainvotedecimal', $weblinks_config['mainvotedecimal'], array('0', '1', '2', '3')).'</span> Let Main Vote Summary Decimal show out to 3 places.<br /><hr />';
	echo '<span style="width:140px; float:left;">Detail Vote decimals</span>';
	echo '<span style="width:80px; float:left;">'.select_option('xdetailvotedecimal', $weblinks_config['detailvotedecimal'], array('0', '1', '2', '3')).'</span> Let Detailed Vote Summary Decimal out to 3 places.<br /><hr />';

	echo '<div style="text-align:center;"><input type="submit" value="Config Update" /></div>';
	CloseTable();
	echo '</div></form>';
}

function updateConfig() {
	global $prefix, $db, $weblinks_config;

	foreach ($_POST AS $config_name => $config_value) {
		if ($config_name != 'mode') {
		$db->sql_query("UPDATE ".$prefix."_links_config SET config_value = '".Fix_Quotes($config_value)."' WHERE config_name = '".substr($config_name,1)."'");
		}
	}
	Cache::array_delete('weblinks_config');
	URL::redirect(URL::admin('&amp;mode=Config'));
}

function getparent($parentid,$title) {
	global $prefix,$db;
	$result= $db->sql_query("SELECT cid, title, parentid FROM ".$prefix."_links_categories WHERE cid=$parentid");
	list($cid, $ptitle, $pparentid) = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);
	if ($ptitle != '') $title = $ptitle.'/'.$title;
	if ($pparentid!=0) {
		$title = getparent($pparentid,$title);
	}
	return $title;
}

function links() {
	global $prefix, $db, $CPG_SESS, $userinfo;
	require_once('header.php');
	GraphicAdmin('_AMENU6');
	OpenTable();
	echo '<div style="text-align:center;"><span class="gen"><b>'._WEBLINKS.' '._LADMIN.'</b></span><br />';

	list($numrows) = $db->sql_ufetchrow("SELECT COUNT(*) FROM ".$prefix."_links_links");
	echo '<span class="content">'._THEREARE.' <b>'.$numrows.'</b> '._LINKSINDB.'</span><br /></div>';
	CloseTable();
	echo '<br />';

/* Temporarily 'homeless' links functions (to be revised in admin breakup) */
	$result = $db->sql_query("SELECT requestid, lid, cid, title, url, description, modifysubmitter FROM ".$prefix."_links_modrequest WHERE brokenlink=1");
	$totalbrokenlinks = $db->sql_numrows($result);
	$result2 = $db->sql_query("SELECT requestid,lid,cid,title,url,description,modifysubmitter FROM ".$prefix."_links_modrequest WHERE brokenlink=0");
	$totalmodrequests = $db->sql_numrows($result2);
	OpenTable();
	echo '<div style="text-align:center;" class="content">[ <a href="'.URL::admin('&amp;mode=Config').'">Configuration</a> | <a href="'.URL::admin('&amp;mode=linkscleanvotes').'">'._CLEANLINKSDB.'</a> | '
	.'<a href="'.URL::admin('&amp;mode=linkslistbrokenlinks').'">'._BROKENLINKSREP.' ('.$totalbrokenlinks.')</a> | '
	.'<a href="'.URL::admin('&amp;mode=linkslistmodrequests').'">'._LINKMODREQUEST.' ('.$totalmodrequests.')</a> | '
	.'<a href="'.URL::admin('&amp;mode=linkslinkcheck').'">'._VALIDATELINKS.'</a> ]</div>';
	CloseTable();
	echo '<br />';

/* List Links waiting for validation */
	$result = $db->sql_query("SELECT lid, cid, title, url, description, name, email, submitter FROM ".$prefix."_links_newlink ORDER BY lid");
	if ($db->sql_numrows($result) > 0) {
		OpenTable();
		echo "<center><font class=\"option\"><b>"._LINKSWAITINGVAL."</b></font></center><br /><br />";
		while(list($lid, $cid, $title, $url, $description, $name, $email, $submitter) = $db->sql_fetchrow($result)) {
			if ($submitter == "") {
				$submitter = _NONE;
			}
			echo '<form action="'.URL::admin('&amp;mode=linksaddlink').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">'
				."<b>"._LINKID.": $lid</b><br /><br />"
				._SUBMITTER.":	$submitter<br />"
				._PAGETITLE.": <input type=\"text\" name=\"title\" value=\"$title\" size=\"50\" maxlength=\"100\" /><br />"
				._PAGEURL.": <input type=\"text\" name=\"url\" value=\"$url\" size=\"50\" maxlength=\"100\" />&nbsp;[ <a target=\"_blank\" href=\"$url\">"._VISIT."</a> ]<br />"
				._DESCRIPTION.": <br /><textarea name=\"description\" cols=\"60\" rows=\"10\" />$description</textarea><br />"
				._NAME.": <input type=\"text\" name=\"name\" size=\"20\" maxlength=\"100\" value=\"$name\" />&nbsp;&nbsp;"
				._EMAIL.": <input type=\"text\" name=\"email\" size=\"20\" maxlength=\"100\" value=\"$email\" /><br />";
			echo "<input type=\"hidden\" name=\"new\" value=\"1\" />";
			echo "<input type=\"hidden\" name=\"lid\" value=\"$lid\" />";
			echo "<input type=\"hidden\" name=\"submitter\" value=\"$submitter\" />";
			echo _CATEGORY.": <SELECT name=\"cat\">";
			$result2= $db->sql_query("SELECT cid, title, parentid FROM ".$prefix."_links_categories ORDER BY title");
			while(list($cid2, $ctitle2, $parentid2) = $db->sql_fetchrow($result2)) {
				$sel = ($cid2==$cid) ? ' selected="selected"' : '';
				if ($parentid2!=0) $ctitle2 = getparent($parentid2,$ctitle2);
				echo "<option value=\"$cid2\"$sel>$ctitle2</option>";
			}
			echo "<input type=\"hidden\" name=\"submitter\" value=\"$submitter\" />";
			echo "</SELECT><input type=\"submit\" value=\""._ADD."\"> [ <a href=\"".URL::admin("&amp;mode=linksdelnew&amp;lid=$lid")."\">"._DELETE."</a> ]</form><br /><hr noshade=\"noshade\"><br />";
		}
		CloseTable();
		echo '<br />';
	}

/* Add a New Main Category */
	OpenTable();
	echo '<form action="'.URL::admin('&amp;mode=linksaddcat').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">'
		.'<font class="option"><b>'._ADDMAINCATEGORY.'</b></font><br /><br />'
		._NAME.': <input type="text" name="title" size="30" maxlength="100" /><br />'
		._DESCRIPTION.':<br /><textarea name="description" cols="60" rows="10"></textarea><br />'
		.'<input type="submit" value="'._ADD.'" /><br />'
		.'</form>';
	CloseTable();
	echo '<br />';

	$result2 = $db->sql_query("SELECT cid, title, parentid FROM ".$prefix."_links_categories ORDER BY parentid, title");
	$catlist = '';
	while(list($cid2, $ctitle2, $parentid2) = $db->sql_fetchrow($result2)) {
		if ($parentid2 > 0) $ctitle2 = getparent($parentid2, $ctitle2);
		$catlist .= "<option value=\"$cid2\">$ctitle2</option>\n";
	}

// Add a New Sub-Category
	list($numcats) = $db->sql_ufetchrow("SELECT COUNT(*) FROM ".$prefix."_links_categories");
	if ($numcats > 0) {
		OpenTable();
		echo '<form action="'.URL::admin('&amp;mode=linksaddsubcat').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">'
			."<font class=\"option\"><b>"._ADDSUBCATEGORY."</b></font><br /><br />"
			._NAME.": <input type=\"text\" name=\"title\" size=\"30\" maxlength=\"100\" />&nbsp;"._IN."&nbsp;";
		echo "<SELECT name=\"cid\">$catlist";
		echo '</SELECT><br />'
			._DESCRIPTION.':<br /><textarea name="description" cols="60" rows="10"></textarea><br />'
			.'<input type="submit" value="'._ADD.'" /><br />'
			.'</form>';
		CloseTable();
		echo '<br />';

// Add a New Link to Database
		OpenTable();
		echo '<form action="'.URL::admin('&amp;mode=linksaddlink').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">
			<font class="option"><b>'._ADDNEWLINK.'</b></font><br /><br />
			'._PAGETITLE.': <input type="text" name="title" size="50" maxlength="100" /><br />
			'._PAGEURL.': <input type="text" name="url" size="50" maxlength="100" value="http://" /><br />
			'._CATEGORY.': <SELECT name="cat">'.$catlist.'
			</SELECT><br /><br /><br />
			'._DESCRIPTION255.'<br /><textarea name="description" cols="60" rows="5"></textarea><br /><br /><br />
			'._NAME.': <input type="text" name="name" size="30" maxlength="60" /><br />
			'._EMAIL.': <input type="text" name="email" size="30" maxlength="60" /><br /><br />
			<input type="hidden" name="new" value="0" />
			<input type="hidden" name="lid" value="0" />
			<input type="hidden" name="submitter" value="'.(($userinfo['username']	!= _ANONYMOUS ) ? $userinfo['username'] : _ADMIN).'" />
			<center><input type="submit" value="'._ADDURL.'" /></center></form>';
		CloseTable();
		echo '<br />';

// Modify Category
		OpenTable();
		echo '<form action="'.URL::admin('&amp;mode=linksmodcat').'" method="post">'
			."<font class=\"option\"><b>"._MODCATEGORY."</b></font><br /><br />";
		echo _CATEGORY.": <SELECT name=\"cat\">$catlist";
		echo '</SELECT>'
			.'<input type="submit" value="'._MODIFY.'" />'
			.'</form>';
		CloseTable();
		echo '<br />';
	}

// Modify Links
	if ($numrows > 0) {
		OpenTable();
		echo '<form action="'.URL::admin('&amp;mode=linksmodlink').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">'
			.'<font class="option"><b>'._MODLINK.'</b><br /><br />'
			._LINKID.': <input type="text" name="lid" size="12" maxlength="11" />&nbsp;&nbsp;'
			.'<input type="submit" value="'._MODIFY.'" />'
			.'</form>';
		CloseTable();
		echo '<br />';
	}

// Transfer Categories
	if ($numcats > 0) {
		OpenTable();
		echo '<form action="'.URL::admin('&amp;mode=linkstransfer').'" method="post">'
			.'<span class="option"><b>'._EZTRANSFERLINKS.'</b></span><br /><br />'
			._CATEGORY.': '
			.'<select name="cidfrom">'.$catlist;
		echo '</select><br />'
			._IN.'&nbsp;'._CATEGORY.': ';
		echo '<select name="cidto">'.$catlist;
		echo '</select><br />'
			.'<input type="submit" value="'._EZTRANSFER.'" /><br />'
			.'</form>';
		CloseTable();
		echo '<br />';
	}
	require('footer.php');
}

function linkstransfer($cidfrom,$cidto) {
	global $prefix, $db, $op;
	$db->sql_query("UPDATE ".$prefix."_links_links SET cid=$cidto WHERE cid=$cidfrom");
	URL::redirect(URL::admin($op));
}

function linksmodlink($lid) {
	global $prefix, $db, $sitename;
	require_once('header.php');
	GraphicAdmin('_AMENU6');
	global $anonymous;
	$result = $db->sql_query("SELECT cid, title, url, description, name, email, hits, feature FROM ".$prefix."_links_links WHERE lid=$lid");
	OpenTable();
	echo '<div style="text-align:center;" class="title">'._WEBLINKS.' '._ADMIN.'</div>';
	CloseTable();
	echo '<br />';
	OpenTable();
	echo '<div style="text-align:center;" class="option"><b>'._MODLINK.'</b></div><br /><br />';
	while(list($cid, $title, $url, $description, $name, $email, $hits, $feature) = $db->sql_fetchrow($result)) {
		echo '<form action="'.URL::admin('&amp;mode=linksmodlinks').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">'
			._LINKID.": <b>$lid</b><br />"
			._PAGETITLE.": <input type=\"text\" name=\"title\" value=\"$title\" size=\"50\" maxlength=\"100\" /><br />"
			._PAGEURL.": <input type=\"text\" name=\"url\" value=\"$url\" size=\"50\" maxlength=\"100\" />&nbsp;[ <a href=\"$url\">Visit</a> ]<br />"
			._DESCRIPTION.":<br /><textarea name=\"description\" cols=\"60\" rows=\"10\">$description</textarea><br />"
			._NAME.": <input type=\"text\" name=\"name\" size=\"50\" maxlength=\"100\" value=\"$name\" /><br />"
			._EMAIL.": <input type=\"text\" name=\"email\" size=\"50\" maxlength=\"100\" value=\"$email\" /><br />"
			._HITS.": <input type=\"text\" name=\"hits\" value=\"$hits\" size=\"12\" maxlength=\"11\" /><br />"
			.'Featured: '.yesno_option('feature', $feature).'<br />';
		echo "<input type=\"hidden\" name=\"lid\" value=\"$lid\" />"
			._CATEGORY.": <select name=\"cat\">";
		$result2= $db->sql_query("SELECT cid, title, parentid FROM ".$prefix."_links_categories ORDER BY title");
		while(list($cid2, $ctitle2, $parentid2) = $db->sql_fetchrow($result2)) {
			$sel = ($cid2==$cid) ? ' selected="selected"' : '';
			if ($parentid2!=0) $ctitle2=getparent($parentid2,$ctitle2);
			echo "<option value=\"$cid2\"$sel>$ctitle2</option>";
		}

		echo '</select>'
			."<input type=\"submit\" value=\""._MODIFY."\" /> [ <a href=\"".URL::admin("&amp;mode=linksdellink&amp;lid=$lid")."\">"._DELETE."</a> ]</form><br />";
		CloseTable();
		echo '<br />';
	/* Modify or Add Editorial */
		$resulted2 = $db->sql_query("SELECT adminid, editorialtimestamp, editorialtext, editorialtitle FROM ".$prefix."_links_editorials WHERE linkid=$lid");
		$recordexist = $db->sql_numrows($resulted2);
		OpenTable();
		$editorialtitle = $editorialtext = '';
	/* if returns 'bad query' status 0 (add editorial) */
		if ($recordexist == 0) {
			echo "<center><font class=\"option\"><b>"._ADDEDITORIAL."</b></font></center><br /><br />"
				.'<form action="'.URL::admin('&amp;mode=linksaddeditorial').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">'
				."<input type=\"hidden\" name=\"linkid\" value=\"$lid\" />"
				._EDITORIALTITLE.":<br /><input type=\"text\" name=\"editorialtitle\" value=\"$editorialtitle\" size=\"50\" maxlength=\"100\" /><br />"
				._EDITORIALTEXT.":<br /><textarea name=\"editorialtext\" cols=\"60\" rows=\"10\">$editorialtext</textarea><br />"
				."</select><input type=\"submit\" value=\""._ADD."\" />";
		} else {
		/* if returns 'cool' then status 1 (modify editorial) */
			while(list($adminid, $editorialtimestamp, $editorialtext, $editorialtitle) = $db->sql_fetchrow($resulted2)) {
				ereg ("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2}) ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})", $editorialtimestamp, $editorialtime);
				$editorialtime = strftime("%F", mktime($editorialtime[4], $editorialtime[5], $editorialtime[6], $editorialtime[2], $editorialtime[3], $editorialtime[1]));
				$date_array = explode('-', $editorialtime);
				$timestamp = mktime(0, 0, 0, $date_array["1"], $date_array["2"], $date_array["0"]);
				$formatted_date = date('F j, Y', $timestamp);
				echo "<center><font class=\"option\"><b>Modify Editorial</b></font></center><br /><br />"
					.'<form action="'.URL::admin('&amp;mode=linksmodeditorial').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">'
					._AUTHOR.": $adminid<br />"
					._DATEWRITTEN.": $formatted_date<br /><br />"
					."<input type=\"hidden\" name=\"linkid\" value=\"$lid\" />"
					._EDITORIALTITLE.":<br /><input type=\"text\" name=\"editorialtitle\" value=\"$editorialtitle\" size=\"50\" maxlength=\"100\" /><br />"
					._EDITORIALTEXT.":<br /><textarea name=\"editorialtext\" cols=\"60\" rows=\"10\">$editorialtext</textarea><br />"
					."</select><input type=\"submit\" value=\""._MODIFY."\" /> [ <a href=\"".URL::admin("&amp;mode=linksdeleditorial&amp;linkid=$lid")."\">"._DELETE."</a> ]";
			}
		} 
		CloseTable();
		echo '<br />';
		OpenTable();

	/* Show Comments */
		$result5= $db->sql_query("SELECT ratingdbid, ratinguser, ratingcomments, ratingtimestamp FROM ".$prefix."_links_votedata WHERE ratinglid = $lid AND ratingcomments != '' ORDER BY ratingtimestamp DESC");
		$totalcomments = $db->sql_numrows($result5);
		echo '<table valign="top" width="100%">';
		echo '<tr><td colspan="7"><b>Link Comments (total comments: '.$totalcomments.')</b><br /><br /></td></tr>';
		echo '<tr><td width="20" colspan="1"><b>User  </b></td><td colspan="5"><b>Comment  </b></td><td><b><center>'._DELETE.'</center></b></td><br /></tr>';
		if ($totalcomments == 0) echo '<tr><td colspan="7"><center><font color="#cccccc">No Comments<br /></font></center></td></tr>';
		$x=0;
		$colorswitch = '#DDDDDD';
		while(list($ratingdbid, $ratinguser, $ratingcomments, $ratingtimestamp)=$db->sql_fetchrow($result5)) {
			ereg ("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2}) ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})", $ratingtimestamp, $ratingtime);
			$ratingtime = strftime("%F",mktime($ratingtime[4],$ratingtime[5],$ratingtime[6],$ratingtime[2],$ratingtime[3],$ratingtime[1]));
			$date_array = explode("-", $ratingtime);
			$timestamp = mktime(0, 0, 0, $date_array["1"], $date_array["2"], $date_array["0"]);
			$formatted_date = date("F j, Y", $timestamp);
			echo "<tr><td valign=\"top\" bgcolor=\"$colorswitch\">$ratinguser</td><td valign=\"top\" colspan=\"5\" bgcolor=\"$colorswitch\">$ratingcomments</td><td bgcolor=\"$colorswitch\"><center><b><a href=\"".URL::admin("linksdelcomment&lid=$lid&rid=$ratingdbid")."\">X</a></b></center></td><br /></tr>";
			$x++;
			$colorswitch = ($colorswitch == '#DDDDDD') ? '#FFFFFF' : '#DDDDDD';
		}

	// Show Registered Users Votes
		$result5= $db->sql_query("SELECT ratingdbid, ratinguser, rating, ratinghostname, ratingtimestamp FROM ".$prefix."_links_votedata WHERE ratinglid = $lid AND ratinguser != 'outside' AND ratinguser != '$anonymous' ORDER BY ratingtimestamp DESC");
		$totalvotes = $db->sql_numrows($result5);
		echo '<tr><td colspan="7"><br /><br /><b>Registered User Votes (total votes: '.$totalvotes.')</b><br /><br /></td></tr>';
		echo '<tr><td><b>User</b></td><td><b>IP Address</b></td><td><b>Rating</b></td><td><b>User AVG Rating</b></td><td><b>Total Ratings</b></td><td><b>Date</b></td></font></b><td><b><center>'._DELETE.'</center></b></td><br /></tr>';
		if ($totalvotes == 0) echo '<tr><td colspan="7"><center><font color="#cccccc">No Registered User Votes<br /></font></center></td></tr>';
		$x=0;
		$colorswitch = "#DDDDDD";
		while(list($ratingdbid, $ratinguser, $rating, $ratinghostname, $ratingtimestamp)=$db->sql_fetchrow($result5)) {
			ereg ("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2}) ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})", $ratingtimestamp, $ratingtime);
			$ratingtime = strftime('%F', mktime($ratingtime[4],$ratingtime[5],$ratingtime[6],$ratingtime[2],$ratingtime[3],$ratingtime[1]));
			$date_array = explode('-', $ratingtime);
			$timestamp = mktime(0, 0, 0, $date_array['1'], $date_array['2'], $date_array['0']);
			$formatted_date = date('F j, Y', $timestamp); 
		//Individual user information
			$result2= $db->sql_query("SELECT rating FROM ".$prefix."_links_votedata WHERE ratinguser = '$ratinguser'");
			$usertotalcomments = $db->sql_numrows($result2);
			$useravgrating = 0;
			while(list($rating2)=$db->sql_fetchrow($result2)) $useravgrating = $useravgrating + $rating2;
			$useravgrating = $useravgrating / $usertotalcomments;
			$useravgrating = number_format($useravgrating, 1);
			echo "<tr bgcolor=\"$colorswitch\"><td>$ratinguser</td><td>$ratinghostname</td><td>$rating</td><td>$useravgrating</td><td>$usertotalcomments</td><td>$formatted_date  </font></b></td><td><center><b><a href=\"".URL::admin("&mode=linksdelvote&lid=$lid&rid=$ratingdbid")."\">X</a></b></center></td></tr><br />";
			$x++;
			$colorswitch = ($colorswitch == '#DDDDDD') ? '#FFFFFF' : '#DDDDDD';
		}

	// Show Unregistered Users Votes
		$result5= $db->sql_query("SELECT ratingdbid, rating, ratinghostname, ratingtimestamp FROM ".$prefix."_links_votedata WHERE ratinglid = $lid AND ratinguser = '$anonymous' ORDER BY ratingtimestamp DESC");
		$totalvotes = $db->sql_numrows($result5);
		echo '<tr><td colspan="7"><b><br /><br />Unregistered User Votes (total votes: '.$totalvotes.')</b><br /><br /></td></tr>';
		echo '<tr><td colspan="2"><b>IP Address</b></td><td colspan=3><b>Rating</b></td><td><b>Date</b></font></td><td><b><center>'._DELETE.'</center></b></td><br /></tr>';
		if ($totalvotes == 0) echo '<tr><td colspan="7"><center><font color="#cccccc">No Unregistered User Votes<br /></font></center></td></tr>';
		$x=0;
		$colorswitch = '#DDDDDD';
		while(list($ratingdbid, $rating, $ratinghostname, $ratingtimestamp)=$db->sql_fetchrow($result5)) {
			ereg ("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2}) ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})", $ratingtimestamp, $ratingtime);
			$ratingtime = strftime('%F', mktime($ratingtime[4],$ratingtime[5],$ratingtime[6],$ratingtime[2],$ratingtime[3],$ratingtime[1]));
			$date_array = explode('-', $ratingtime);
			$timestamp = mktime(0, 0, 0, $date_array["1"], $date_array["2"], $date_array["0"]);
			$formatted_date = date('F j, Y', $timestamp);
			echo '<td colspan="2" bgcolor="'.$colorswitch.'">'.$ratinghostname.'</td><td colspan="3" bgcolor="'.$colorswitch.'">'.$rating.'</td><td bgcolor="'.$colorswitch.'">'.$formatted_date.'	</font></b></td><td bgcolor="'.$colorswitch.'"><center><b><a href="'.URL::admin('&amp;mode=linksdelvote&amp;lid='.$lid.'&amp;rid='.$ratingdbid).'">X</a></b></center></td></tr><br />';
			$x++;
			$colorswitch = ($colorswitch == '#DDDDDD') ? '#FFFFFF' : '#DDDDDD';
		}

	// Show Outside Users Votes
		$result5= $db->sql_query("SELECT ratingdbid, rating, ratinghostname, ratingtimestamp FROM ".$prefix."_links_votedata WHERE ratinglid = $lid AND ratinguser = 'outside' ORDER BY ratingtimestamp DESC");
		$totalvotes = $db->sql_numrows($result5);
		echo '<tr><td colspan="7"><b><br /><br />Outside User Votes (total votes: '.$totalvotes.')</b><br /><br /></td></tr>';
		echo '<tr><td colspan="2"><b>IP Address</b></td><td colspan="3"><b>Rating</b></td><td><b>Date</b></td></font></b><td><b><center>'._DELETE.'</center></b></td><br /></tr>';
		if ($totalvotes == 0) echo '<tr><td colspan="7"><center><font color="#cccccc">No Votes from Outside '.$sitename.'<br /></font></center></td></tr>';
		$x=0;
		$colorswitch = '#DDDDDD';
		while(list($ratingdbid, $rating, $ratinghostname, $ratingtimestamp)=$db->sql_fetchrow($result5)) {
			ereg ("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2}) ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})", $ratingtimestamp, $ratingtime);
			$ratingtime = strftime('%F', mktime($ratingtime[4],$ratingtime[5],$ratingtime[6],$ratingtime[2],$ratingtime[3],$ratingtime[1]));
			$date_array = explode('-', $ratingtime);
			$timestamp = mktime(0, 0, 0, $date_array["1"], $date_array["2"], $date_array["0"]);
			$formatted_date = date('F j, Y', $timestamp);
			echo '<tr><td colspan="2" bgcolor="'.$colorswitch.'">'.$ratinghostname.'</td><td colspan="3" bgcolor="'.$colorswitch.'">'.$rating.'</td><td bgcolor="'.$colorswitch.'">'.$formatted_date.'	</font></b></td><td bgcolor="'.$colorswitch.'"><center><b><a href="'.URL::admin('&amp;mode=linksdelvote&amp;lid='.$lid.'&amp;rid='.$ratingdbid).'">X</a></b></center></td></tr><br />';
			$x++;
			$colorswitch = ($colorswitch == '#DDDDDD') ? '#FFFFFF' : '#DDDDDD';
		}
		echo '<tr><td colspan="6"><br /></td></tr>
		</table>';
	}
	echo '</form>';
	CloseTable();
	echo '<br />';
	require('footer.php');
}

function linksdelcomment($lid, $rid) {
	global $prefix, $db;
	$db->sql_query("UPDATE ".$prefix."_links_votedata SET ratingcomments='' WHERE ratingdbid = $rid");
	$db->sql_query("UPDATE ".$prefix."_links_links SET totalcomments = (totalcomments - 1) WHERE lid = $lid");
	URL::redirect(URL::admin('&mode=linksmodlink&lid='.$lid));
}

function linksdelvote($lid, $rid) {
	global $prefix, $db;
	$db->sql_query("DELETE FROM ".$prefix."_links_votedata WHERE ratingdbid=$rid");
	$voteresult = $db->sql_query("SELECT rating, ratinguser, ratingcomments FROM ".$prefix."_links_votedata WHERE ratinglid = $lid");
	$totalvotesDB = $db->sql_numrows($voteresult);
	require_once('voteinclude.php');
	$db->sql_query("UPDATE ".$prefix."_links_links SET linkratingsummary=$finalrating,totalvotes=$totalvotesDB,totalcomments=$truecomments WHERE lid = $lid");
	URL::redirect(URL::admin('&mode=linksmodlink&lid='.$lid));
}

function linkseditbrokenlinks($lid) {
	global $prefix, $db;
	require_once('header.php');
	GraphicAdmin('_AMENU6');
	OpenTable();
	echo '<div align="center" class="option">'._EZBROKENLINKS.'</div><br /><br />';
	$result = $db->sql_query("SELECT requestid, lid, cid, title, url, description, modifysubmitter FROM ".$prefix."_links_modrequest WHERE brokenlink=1 ORDER BY requestid");
	list($requestid,$lid,$cid,$title,$url,$description,$modifysubmitter)= $db->sql_fetchrow($result);
	$result4 = $db->sql_query("SELECT name,email,hits FROM ".$prefix."_links_links WHERE lid=$lid");
	list($name,$email,$hits)= $db->sql_fetchrow($result4);
	echo '<form action="'.URL::admin('&amp;mode=linksmodlinks').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">'
	."<b>"._LINKID.": $lid</b><br /><br />"
	._SUBMITTER.":	$modifysubmitter<br />"
	._PAGETITLE.": <input type=\"text\" name=\"title\" value=\"$title\" size=\"50\" maxlength=\"100\" /><br />"
	._PAGEURL.": <input type=\"text\" name=\"url\" value=\"$url\" size=\"50\" maxlength=\"100\" />&nbsp;[ <a target=\"_blank\" href=\"$url\">"._VISIT."</a> ]<br />"
	._DESCRIPTION.": <br /><textarea name=\"description\" cols=\"60\" rows=\"10\">$description</textarea><br />"
	._NAME.": <input type=\"text\" name=\"name\" size=\"20\" maxlength=\"100\" value=\"$name\" />&nbsp;&nbsp;"
	._EMAIL.": <input type=\"text\" name=\"email\" size=\"20\" maxlength=\"100\" value=\"$email\" /><br />";
	echo "<input type=\"hidden\" name=\"lid\" value=\"$lid\" />";
	echo "<input type=\"hidden\" name=\"hits\" value=\"$hits\" />";
	echo _CATEGORY.": <select name=\"cat\">";
	$result2= $db->sql_query("SELECT cid, title, parentid FROM ".$prefix."_links_categories ORDER BY title");
	while(list($cid2, $ctitle2, $parentid2) = $db->sql_fetchrow($result2)) {
		$sel = ($cid2==$cid) ? ' selected="selected"' : '';
		if ($parentid2!=0) $ctitle2=getparent($parentid2,$ctitle2);
		echo "<option value=\"$cid2\"$sel>$ctitle2</option>";
	}
	echo "</select><input type=\"submit\" value=\""._MODIFY."\" /> [ <a href=\"".URL::admin("&amp;mode=linksdelnew&amp;lid=$lid")."\">"._DELETE."</a> ]</form><br /><hr noshade=\"noshade\"><br />";
	CloseTable();
	echo '<br />';
	require('footer.php');
}

function linkslistbrokenlinks() {
	global $bgcolor1, $bgcolor2, $prefix, $db, $user_prefix;
	require_once('header.php');
	GraphicAdmin('_AMENU6');
	OpenTable();
	echo '<div align="center" class="title">'._WEBLINKS.' '._ADMIN.'</div>';
	CloseTable();
	echo '<br />';
	OpenTable();
	$result = $db->sql_query("SELECT requestid, lid, modifysubmitter FROM ".$prefix."_links_modrequest WHERE brokenlink=1 ORDER BY requestid");
	$totalbrokenlinks = $db->sql_numrows($result);
	echo "<center><font class=\"option\"><b>"._USERREPBROKEN." ($totalbrokenlinks)</b></font></center><br /><br /><center>"
		._IGNOREINFO."<br />"
		._DELETEINFO."</center><br /><br /><br />"
		."<table align=\"center\" width=\"450\">";
	if ($totalbrokenlinks==0) {
		echo "<center><font class=\"option\">"._NOREPORTEDBROKEN."</font></center><br /><br /><br />";
	} else {
		$colorswitch = $bgcolor2;
		echo "<tr>"
			."<td><b>"._LINK."</b></td>"
			."<td><b>"._SUBMITTER."</b></td>"
			."<td><b>"._LINKOWNER."</b></td>"
			."<td><b>"._EDIT."</b></td>"
			."<td><b>"._IGNORE."</b></td>"
			."<td><b>"._DELETE."</b></td>"
			."</tr>";
		while(list($requestid, $lid, $modifysubmitter)=$db->sql_fetchrow($result)) {
			$result2 = $db->sql_query("SELECT title, url, submitter FROM ".$prefix."_links_links WHERE lid=$lid");
			if ($modifysubmitter != '$anonymous') {
				$result3 = $db->sql_query("SELECT user_email FROM ".$user_prefix."_users WHERE username='$modifysubmitter'");
				list($email)=$db->sql_fetchrow($result3);
			}
			list($title, $url, $owner)=$db->sql_fetchrow($result2);
			$result4 = $db->sql_query("SELECT user_email FROM ".$user_prefix."_users WHERE username='$owner'");
			list($owneremail)=$db->sql_fetchrow($result4);
			echo "<tr>"
				."<td bgcolor=\"$colorswitch\"><a href=\"$url\">$title</a>"
				."</td>";
			if ($email=='') {
				echo "<td bgcolor=\"$colorswitch\">$modifysubmitter";
			} else {
				echo "<td bgcolor=\"$colorswitch\"><a href=\"mailto:$email\">$modifysubmitter</a>";
			}
			echo "</td>";
			if ($owneremail=='') {
				echo "<td bgcolor=\"$colorswitch\">$owner";
			} else {
				echo "<td bgcolor=\"$colorswitch\"><a href=\"mailto:$owneremail\">$owner</a>";
			}
			echo "</td>"
				."<td bgcolor=\"$colorswitch\"><center><a href=\"".URL::admin("&amp;mode=linkseditbrokenlinks&amp;lid=$lid")."\">X</a></center>"
				."<td bgcolor=\"$colorswitch\"><center><a href=\"".URL::admin("&amp;mode=linksignorebrokenlinks&amp;lid=$lid")."\">X</a></center>"
				."</td>"
				."<td bgcolor=\"$colorswitch\"><center><a href=\"".URL::admin("&amp;mode=linksdelbrokenlinks&amp;lid=$lid")."\">X</a></center>"
				."</td>"
				."</tr>";
			$colorswitch = ($colorswitch == $bgcolor2) ? $bgcolor1 : $bgcolor2;
		}
	}
	echo '</table>';
	CloseTable();
	require('footer.php');
}

function linksdelbrokenlinks($lid) {
	global $prefix, $db;
	$db->sql_query("DELETE FROM ".$prefix."_links_modrequest WHERE lid='$lid'");
	$db->sql_query("DELETE FROM ".$prefix."_links_links WHERE lid=$lid");
	URL::redirect(URL::admin('&mode=linkslistbrokenlinks'));
}

function linksignorebrokenlinks($lid) {
	global $prefix, $db;
	$db->sql_query("DELETE FROM ".$prefix."_links_modrequest WHERE lid='$lid' and brokenlink='1'");
	URL::redirect(URL::admin('&mode=linkslistbrokenlinks'));
}

function linkslistmodrequests() {
	global $bgcolor2, $prefix, $db, $user_prefix;
	require_once('header.php');
	GraphicAdmin('_AMENU6');
	OpenTable();
	echo '<div align="center" class="title">'._WEBLINKS.' '._ADMIN.'</div>';
	CloseTable();
	echo '<br />';
	OpenTable();
	$result = $db->sql_query("SELECT requestid, lid, cid, title, url, description, modifysubmitter FROM ".$prefix."_links_modrequest WHERE brokenlink=0 ORDER BY requestid");
	$totalmodrequests = $db->sql_numrows($result);
	echo "<center><font class=\"option\"><b>"._USERMODREQUEST." ($totalmodrequests)</b></font></center><br /><br /><br />";
	echo "<table width=\"95%\"><tr><td>";
	while(list($requestid, $lid, $cid, $title, $url, $description, $modifysubmitter)=$db->sql_fetchrow($result)) {
		$result2 = $db->sql_query("SELECT cid, title, url, description, submitter FROM ".$prefix."_links_links WHERE lid=$lid");
		list($origcid, $origtitle, $origurl, $origdescription, $owner)=$db->sql_fetchrow($result2);
		$result3 = $db->sql_query("SELECT title FROM ".$prefix."_links_categories WHERE cid=$cid");
		$result5 = $db->sql_query("SELECT title FROM ".$prefix."_links_categories WHERE cid=$origcid");
		$result7 = $db->sql_query("SELECT user_email FROM ".$user_prefix."_users WHERE username='$modifysubmitter'");
		$result8 = $db->sql_query("SELECT user_email FROM ".$user_prefix."_users WHERE username='$owner'");
		list($cidtitle)=$db->sql_fetchrow($result3);
		list($origcidtitle)=$db->sql_fetchrow($result5);
		list($modifysubmitteremail)=$db->sql_fetchrow($result7);
		list($owneremail)=$db->sql_fetchrow($result8);
		if ($owner=='') {
			$owner='administration';
		}
		if ($origsidtitle=='') {
			$origsidtitle= '-----';
		}
		if ($sidtitle=='') {
			$sidtitle= '-----';
		}
		echo "<table border=\"1\" bordercolor=\"black\" cellpadding=\"5\" cellspacing=\"0\" align=\"center\" width=\"450\">"
			."<tr>"
			."<td>"
			."<table width=\"100%\" bgcolor=\"$bgcolor2\">"
			."<tr>"
			."<td valign=\"top\" width=\"45%\"><b>"._ORIGINAL."</b></td>"
			."<td rowspan=\"5\" valign=\"top\" align=\"left\"><font class=\"tiny\"><br />"._DESCRIPTION.":<br />$origdescription</font></td>"
			."</tr>"
			."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._TITLE.": $origtitle</td></tr>"
			."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._URL.": <a href=\"$origurl\">$origurl</a></td></tr>"
		."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._CATEGORY.": $origcidtitle</td></tr>"
		."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._SUBCATEGORY.": $origsidtitle</td></tr>"
			."</table>"
			."</td>"
			."</tr>"
			."<tr>"
			."<td>"
			."<table width=\"100%\">"
			."<tr>"
			."<td valign=\"top\" width=\"45%\"><b>"._PROPOSED."</b></td>"
			."<td rowspan=\"5\" valign=\"top\" align=\"left\"><font class=\"tiny\"><br />"._DESCRIPTION.":<br />$description</font></td>"
			."</tr>"
			."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._TITLE.": $title</td></tr>"
			."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._URL.": <a href=\"$url\">$url</a></td></tr>"
		."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._CATEGORY.": $cidtitle</td></tr>"
		."<tr><td valign=\"top\" width=\"45%\"><font class=\"tiny\">"._SUBCATEGORY.": $sidtitle</td></tr>"
			."</table>"
			."</td>"
			."</tr>"
			."</table>"
			."<table align=\"center\" width=\"450\">"
			."<tr>";
		if ($modifysubmitteremail=='') {
			echo "<td align=\"left\"><font class=\"tiny\">"._SUBMITTER.":  $modifysubmitter</font></td>";
		} else {
			echo "<td align=\"left\"><font class=\"tiny\">"._SUBMITTER.":  <a href=\"mailto:$modifysubmitteremail\">$modifysubmitter</a></font></td>";
		}
		if ($owneremail=='') {
			echo "<td align=\"center\"><font class=\"tiny\">"._OWNER.":	 $owner</font></td>";
		} else {
			echo "<td align=\"center\"><font class=\"tiny\">"._OWNER.": <a href=\"mailto:$owneremail\">$owner</a></font></td>";
		}
		echo "<td align=\"right\"><font class=\"tiny\">( <a href=\"".URL::admin("&amp;mode=linkschangemodrequests&amp;requestid=$requestid")."\">"._ACCEPT."</a> / <a href=\"".URL::admin("&amp;mode=linkschangeignorerequests&amp;requestid=$requestid")."\">"._IGNORE."</a> )</font></td></tr></table>";
	}
	if ($totalmodrequests == 0) {
		echo "<center>"._NOMODREQUESTS."</center><br /><br />";
	}
	echo '</td></tr></table>';
	CloseTable();
	require('footer.php');
}

function linkschangemodrequests() {
	global $prefix, $db;
	$requestid = intval($_GET['requestid']);
	$result = $db->sql_query("SELECT lid, cid, title, url, description FROM ".$prefix."_links_modrequest WHERE requestid=$requestid");
	while(list($lid, $cid, $title, $url, $description)=$db->sql_fetchrow($result)) {
		//$title = Fix_Quotes($title);
		//$description = Fix_Quotes($description);
		$db->sql_query("UPDATE ".$prefix."_links_links SET cid=$cid, title='$title', url='$url', description='$description' WHERE lid = $lid");
	}
	$db->sql_query("DELETE FROM ".$prefix."_links_modrequest WHERE requestid=$requestid");
	URL::redirect(URL::admin("&mode=linkslistmodrequests"));
}

function linkschangeignorerequests($requestid) {
	global $prefix, $db;
	$db->sql_query("DELETE FROM ".$prefix."_links_modrequest WHERE requestid=$requestid");
	URL::redirect(URL::admin("&mode=linkslistmodrequests"));
}

function linkscleanvotes() {
	global $prefix, $db, $op, $module_name;
	$totalvoteresult = $db->sql_query("SELECT distinct ratinglid FROM ".$prefix."_links_votedata");
	while(list($lid)=$db->sql_fetchrow($totalvoteresult)) {
	$voteresult = $db->sql_query("SELECT rating, ratinguser, ratingcomments FROM ".$prefix."_links_votedata WHERE ratinglid = $lid");
	$totalvotesDB = $db->sql_numrows($voteresult);
	require_once(BASEDIR.'modules/'.$module_name.'/voteinclude.php');
		$db->sql_query("UPDATE ".$prefix."_links_links SET linkratingsummary=$finalrating, totalvotes=$totalvotesDB, totalcomments=$truecomments WHERE lid = $lid");
	}
	URL::redirect(URL::admin($op));
}

function linksmodlinks($lid, $title, $url, $description, $name, $email, $hits, $cat, $feature) {
	global $prefix, $db, $op;
	$url = Fix_Quotes($url);
	$name = Fix_Quotes($name);
	$email = ((!empty($email)) && is_email($email)) ? Fix_Quotes($email):'';
	$db->sql_query("UPDATE ".$prefix."_links_links SET cid='$cat', title='$title', url='$url', description='$description', name='$name', email='$email', hits='$hits', feature='$feature' WHERE lid=$lid");
	URL::redirect(URL::admin($op));
}

function linksdellink($lid) {
	global $prefix, $db;
	$db->sql_query("DELETE FROM ".$prefix."_links_links WHERE lid=$lid");
	URL::redirect(URL::admin());
}

function linksmodcat($cat) {
	global $prefix, $db;
	require_once('header.php');
	GraphicAdmin('_AMENU6');
	OpenTable();
	echo '<div align="center" class="title">'._WEBLINKS.' '._ADMIN.'</div>';
	CloseTable();
	echo '<br />';
	OpenTable();
	echo '<div align="center" class="option">'._MODCATEGORY.'</div><br /><br />';
	$result= $db->sql_query("SELECT title, cdescription FROM ".$prefix."_links_categories WHERE cid=$cat");
	list($title,$cdescription) = $db->sql_fetchrow($result);
	echo '<form action="'.URL::admin('&amp;mode=linksmodcats').'" method="post" enctype="multipart/form-data" accept-charset="utf-8">'
		._NAME.": <input type=\"text\" name=\"title\" value=\"$title\" size=\"51\" maxlength=\"50\" /><br />"
		._DESCRIPTION.":<br /><textarea name=\"description\" cols=\"60\" rows=\"10\">$cdescription</textarea><br />"
		."<input type=\"hidden\" name=\"cid\" value=\"$cat\" />"
		."<table border=\"0\"><tr><td>"
		."<input type=\"submit\" value=\""._SAVECHANGES."\" /></form></td><td>"
		.'<form action="'.URL::admin('&mode=linksdelcat').'" method="post">'
		."<input type=\"hidden\" name=\"cid\" value=\"$cat\" />"
		."<input type=\"submit\" value=\""._DELETE."\" /></form></td></tr></table>";
	CloseTable();
	require('footer.php');
}

function linksmodcats($cid, $title, $cdescription) {
	global $prefix, $db, $op;
	$db->sql_query("UPDATE ".$prefix."_links_categories SET title='$title', cdescription='$cdescription' WHERE cid=$cid");
	URL::redirect(URL::admin($op));
}

function linksdelcat($cid, $ok=0) {
	global $prefix, $db, $op;
	if($ok==1) {
		$db->sql_query("DELETE FROM ".$prefix."_links_links WHERE cid=$cid");
		$result2 = $db->sql_query("SELECT cid FROM ".$prefix."_links_categories WHERE parentid=$cid");
		while(list($cid2) = $db->sql_fetchrow($result2)) {
			$db->sql_query("DELETE FROM ".$prefix."_links_links WHERE cid=$cid2");
			$db->sql_query("DELETE FROM ".$prefix."_links_modrequest WHERE cid='$cid2'");
		}
		$db->sql_query("DELETE FROM ".$prefix."_links_categories WHERE parentid=$cid");
		$db->sql_query("DELETE FROM ".$prefix."_links_categories WHERE cid=$cid");
		$db->sql_query("DELETE FROM ".$prefix."_links_modrequest WHERE cid='$cid'");
		URL::redirect(URL::admin($op));
	} else {
		list($nbsubcat) = $db->sql_ufetchrow("SELECT count(*) FROM ".$prefix."_links_categories WHERE parentid=$cid");
		$result = $db->sql_query("SELECT cid FROM ".$prefix."_links_categories WHERE parentid=$cid");
		$nblink =0;
		list($nblink) = $db->sql_ufetchrow("SELECT count(*) FROM ".$prefix."_links_links WHERE cid=$cid");
		while(list($cid2) = $db->sql_fetchrow($result)) {
			list($count) = $db->sql_ufetchrow("SELECT count(*) FROM ".$prefix."_links_links WHERE cid=$cid2");
			$nblink += $count;
		}
		require_once('header.php');
		GraphicAdmin('_AMENU6');
		OpenTable();
		echo "<br /><center><font class=\"option\">";
		echo "<b>"._EZTHEREIS." $nbsubcat "._EZSUBCAT." "._EZATTACHEDTOCAT."</b><br />";
		echo "<b>"._EZTHEREIS." $nblink "._LINKS." "._EZATTACHEDTOCAT."</b><br />";
		echo "<b>"._DELEZLINKCATWARNING."</b><br /><br />";
	}
	echo "[ <a href=\"".URL::admin("&amp;mode=linksdelcat&amp;cid=$cid&amp;ok=1")."\">"._YES."</a> | <a href=\"".URL::admin('&amp;mode=Links')."\">"._NO."</a> ]<br /><br />";
	CloseTable();
	require('footer.php');
}

function linksdelnew($lid) {
	global $prefix, $db, $op;
	$db->sql_query("DELETE FROM ".$prefix."_links_newlink WHERE lid=$lid");
	URL::redirect(URL::admin($op));
}

function linksaddcat($title, $cdescription) {
	global $prefix, $db, $op;
	$parentid=0;
	list($numrows) = $db->sql_ufetchrow("SELECT COUNT(*) FROM ".$prefix."_links_categories WHERE title='$title' LIMIT 1");
	if ($numrows > 0) {
		require_once('header.php');
		GraphicAdmin('_AMENU6');
		OpenTable();
		echo "<br /><center><font class=\"option\">"
			."<b>"._CATEGORY.' '.sprintf(_ERROR_ALREADYEXIST,stripslashes($title))."</b><br /><br />"
			._GOBACK.'<br /><br />';
		CloseTable();
		require('footer.php');
	} else {
		//$title = Fix_Quotes($title);
		$db->sql_query("INSERT INTO ".$prefix."_links_categories VALUES (NULL, '$title', '$cdescription', $parentid)");
		URL::redirect(URL::admin($op));
	}
}

function linksaddsubcat($cid, $title, $cdescription) {
	global $prefix, $db, $op;
	list($numrows) = $db->sql_ufetchrow("SELECT COUNT(*) FROM ".$prefix."_links_categories WHERE title='$title' AND cid='$cid' LIMIT 1");	 
	if ($numrows > 0) {
		require_once('header.php');
		GraphicAdmin('_AMENU6');
		OpenTable();
		echo "<br /><center>";
		echo "<font class=\"option\">"
			."<b>"._CATEGORY.' '.sprintf(_ERROR_ALREADYEXIST,stripslashes($title))."</b><br /><br />"
			._GOBACK.'<br /><br />';
		require('footer.php');
	} else {
		$db->sql_query("INSERT INTO ".$prefix."_links_categories VALUES (NULL, '$title', '$cdescription', '$cid')");
		URL::redirect(URL::admin($op));
	}
}

function linksaddeditorial($linkid, $editorialtitle, $editorialtext) {
	global $userinfo, $prefix, $db, $op;
	$editorialtext = Fix_Quotes($editorialtext);
	$editorialtitle = Fix_Quotes($editorialtitle);
	$linkid = is_integer($linkid) ? $linkid : trigger_error(sprintf(_ERROR_NOT_SET,'linkid'));
	$aid = isset($userinfo['username']) ? $userinfo['username'] : _ADMIN;
	$db->sql_query("INSERT INTO ".$prefix."_links_editorials VALUES ($linkid, '$aid', now(), '$editorialtext', '$editorialtitle')");
	require_once('header.php');
	GraphicAdmin('_AMENU6');
	OpenTable();
	echo '<p class="option">'
		._TASK_COMPLETED.'<br /><br />'
		.'[ <a href="'.URL::admin($op).'">'._WEBLINKS.' '._ADMIN.'</a> ]<br /></p>';
	CloseTable();
	require('footer.php');
}

function linksmodeditorial($linkid, $editorialtitle, $editorialtext) {
	global $prefix, $db, $op;
	$editorialtext = Fix_Quotes($editorialtext);
	$editorialtitle = Fix_Quotes($editorialtitle);
	$linkid = is_integer($linkid) ? $linkid : trigger_error(sprintf(_ERROR_NOT_SET,'linkid'));
	$db->sql_query("UPDATE ".$prefix."_links_editorials SET editorialtext='$editorialtext', editorialtitle='$editorialtitle' WHERE linkid=$linkid");
	require_once('header.php');
	GraphicAdmin('_AMENU6');
	OpenTable();
	echo '<p class="option">'
		._TASK_COMPLETED.'<br /><br />'
		.'[ <a href="'.URL::admin($op).'">'._WEBLINKS.' '._ADMIN.'</a> ]<br /></p>';
	CloseTable();
	require('footer.php');
}

function linksdeleditorial($linkid) {
	global $prefix, $db, $op;
	$linkid = is_integer($linkid) ? $linkid : trigger_error(sprintf(_ERROR_NOT_SET,'linkid'));
	$db->sql_query("DELETE FROM ".$prefix."_links_editorials WHERE linkid=$linkid");
	require_once('header.php');
	GraphicAdmin('_AMENU6');
	OpenTable();
	echo '<p class="option">'
		._TASK_COMPLETED.'<br /><br />'
		.'[ <a href="'.URL::admin($op).'">'._WEBLINKS.' '._ADMIN.'</a> ]<br /></p>';
	CloseTable();
	require('footer.php');
}

function linkslinkcheck() {
	global $prefix, $db;
	require_once('header.php');
	GraphicAdmin('_AMENU6');
	OpenTable();
	echo '<div align="center" class="title">'._WEBLINKS.' '._ADMIN.'</div>';
	CloseTable();
	echo '<br />';
	OpenTable();
	echo "<center><font class=\"option\"><b>"._VALIDATELINKS."</b></font></center><br />"
		."<table width=\"100%\" align=\"center\"><tr><td colspan=\"2\" align=\"center\">"
		."<a href=\"".URL::admin("&amp;mode=linksvalidate&amp;cid=0")."\">"._CHECKALLLINKS."</a><br /><br /></td></tr>"
		."<tr><td valign=\"top\"><center><b>"._CHECKCATEGORIES."</b><br />"._INCLUDESUBCATEGORIES."<br /><br /><font class=\"tiny\">";
	$result = $db->sql_query("SELECT cid, title FROM ".$prefix."_links_categories ORDER BY title");
	while(list($cid, $title) = $db->sql_fetchrow($result)) {
		$transfertitle = str_replace (" ", "_", $title);
		echo "<a href=\"".URL::admin("&amp;mode=linksvalidate&amp;cid=$cid")."\">$title</a><br />";
	}
	echo '</font></center></td></tr></table>';
	CloseTable();
	require('footer.php');
}

function linksvalidate($cid) {
	global $bgcolor2, $prefix, $db;
	require_once('header.php');
	GraphicAdmin('_AMENU6');
	OpenTable();
	echo '<div style="text-align:center;" class="title">'._WEBLINKS.' '._ADMIN.'</div>';
	CloseTable();
	echo '<br />';
	OpenTable();
	$transfertitle = str_replace ("_", "", $ttitle);
	/* Check ALL Links */
	echo '<table width="100%" border="0">';
	if ($cid==0) {
		echo "<tr><td colspan=\"3\"><center><b>"._CHECKALLLINKS."</b><br />"._BEPATIENT."</center><br /><br /></td></tr>";
		$result = $db->sql_query("SELECT lid, title, url, name, email, submitter FROM ".$prefix."_links_links ORDER BY title");
	} else {
	/* Check Categories & Subcategories */
		echo "<tr><td colspan=\"3\"><center><b>"._VALIDATINGCAT."</b><br />"._BEPATIENT."</center><br /><br /></td></tr>";
		$result = $db->sql_query("SELECT lid, title, url, name, email, submitter FROM ".$prefix."_links_links WHERE cid=$cid ORDER BY title");
	}
	/* Check Only Subcategory */
	echo "<tr><td bgcolor=\"$bgcolor2\" align=\"center\"><b>"._STATUS."</b></td><td bgcolor=\"$bgcolor2\" width=\"100%\"><b>"._LINKTITLE."</b></td><td bgcolor=\"$bgcolor2\" align=\"center\"><b>"._FUNCTIONS."</b></td></tr>";
	while(list($lid, $title, $url, $name, $email, $submitter) = $db->sql_fetchrow($result)) {
		if (!get_fileinfo($url)){
			echo "<tr><td align=\"center\"><b>&nbsp;&nbsp;"._FAILED."&nbsp;&nbsp;</b></td>"
			."<td>&nbsp;&nbsp;<a href=\"$url\" target=\"new\">$title</a>&nbsp;&nbsp;</td>"
			."<td align=\"center\"><font class=\"content\">&nbsp;&nbsp;[ <a href=\"".URL::admin("&amp;mode=linksmodlink&amp;lid=$lid")."\">"._EDIT."</a> | <a href=\"".URL::admin("&amp;mode=linksdellink&amp;lid=$lid")."\">"._DELETE."</a> ]&nbsp;&nbsp;</font>"
			.'</td></tr>';
		} else {
			echo "<tr><td align=\"center\">&nbsp;&nbsp;"._OK."&nbsp;&nbsp;</td>"
			."<td>&nbsp;&nbsp;<a href=\"$url\" target=\"new\">$title</a>&nbsp;&nbsp;</td>"
			."<td align=\"center\"><font class=\"content\">&nbsp;&nbsp;"._NONE."&nbsp;&nbsp;</font>"
			.'</td></tr>';
		}
	}
	echo '</table>';
	CloseTable();
	require('footer.php');
}

function linksaddlink($new, $lid, $title, $url, $cat, $description, $name, $email='', $submitter='') {
	global $prefix, $db, $op, $sitename, $adminmail, $PHPMAILER_LANG, $checkweblinks;
	require_once('header.php');
	GraphicAdmin('_AMENU6');
	OpenTable();
	echo '<div style="text-align:center;" class="title">'._WEBLINKS.' '._ADMIN.'</div>';
	CloseTable();
	echo '<br />';
	OpenTable();
	echo "<br /><center><font class=\"option\"><b>";
/* Check if email is valid */
	if (!empty($email)) {
			$email = (is_email($email))? Fix_Quotes($email) : trigger_error($PHPMAILER_LANG['from_failed'].$email,E_USER_ERROR);
	}
/* Check if URL exist */
	/* $checkweblinks is from modules/Web_Links/l_config.php */
	if ($checkweblinks) {
			$url = (!empty($url) && $checkweblinks && get_fileinfo($url)) ? $url : trigger_error(sprintf(_ERROR_NO_EXIST,$url));
	}
	list($numrows) = $db->sql_ufetchrow("SELECT COUNT(*) FROM ".$prefix."_links_links WHERE url='$url' LIMIT 1");
	if ($numrows > 0) {
		echo sprintf(_ERROR_ALREADYEXIST,stripslashes($url));
	}
/* Check if Title exist */
	elseif ($title=='') {
		echo _ERRORNOTITLE;
	}
	
// Check if Description exist
	elseif ($description=='') {
		echo _ERRORNODESCRIPTION;
	}
	else {
		$name = Fix_Quotes($name);
		$submitter = (!empty($submitter)) ? Fix_Quotes($submitter) : _ADMIN;
		$email = ($email == '1') ? trigger_error('email is 1'.__LINE__) : $email;	 
		$db->sql_query("INSERT INTO ".$prefix."_links_links (lid, cid, title, url, description, date, name, email, hits, submitter, linkratingsummary, totalvotes, totalcomments, feature) VALUES (NULL, '$cat', '$title', '$url', '$description', now(), '$name', '$email', '0','$submitter',0,0,0,0)");
		if ($new==1) {
			$db->sql_query("DELETE FROM ".$prefix."_links_newlink WHERE lid=$lid");
			if ($email != "") {
				global $nukeurl, $sitename;
				$subject = _YOURLINKAT." $sitename";
				$message = _HELLO." ".$name.":\n\n"._LINKAPPROVEDMSG."\n\n"._LINKTITLE.": $title\n"._URL.": $url\n"._DESCRIPTION.": $description\n\n"._PROMOTE05."\n\n".$sitename.' '._TEAM."\n\n\n".URL::index("Web_Links", true, true);
				if(!send_mail($mailer_message,$message,0,$subject,$email,$name,$adminmail,$sitename)) {
				 echo $mailer_message;
			   }
				
			}
		}
		echo _NEWLINKADDED;
	}
	echo '</b><br /><br /><a href="'.URL::admin($op).'">'._GO.'</a><br /><br />';
	CloseTable();
	require('footer.php');
}

$mode = isset($_POST['mode']) ? $_POST['mode'] : (isset($_GET['mode']) ? $_GET['mode'] : '');
$lid = isset($_POST['lid']) && is_numeric($_POST['lid']) ? $_POST['lid'] : (isset($_GET['lid']) && is_numeric($_GET['lid']) ? $_GET['lid'] : 0);
$title = isset($_POST['title']) ? Fix_Quotes($_POST['title']) : NULL;
$description = isset($_POST['description']) ? Fix_Quotes( $_POST['description']) : NULL;
$cid = isset($_POST['cid']) ?  intval($_POST['cid']) : (isset($_GET['cid']) ? intval($_GET['cid']) : NULL);
switch ($mode) {

	case 'Config':
	Config();
	break;

	case 'updateConfig':
	updateConfig();
	break;

	case "linksdelnew":
	linksdelnew($lid);
	break;

	case "linksaddcat":
	linksaddcat($title, $description);
	break;

	case "linksaddsubcat":
	linksaddsubcat($cid, $title, $description);
	break;

	case "linksaddlink":
	linksaddlink($_POST['new'], $lid, $title, $_POST['url'], $_POST['cat'], $description, (isset($_POST['name']) ? $_POST['name'] : ''), (isset($_POST['email']) ? $_POST['email'] : ''), $_POST['submitter']);
	break;

	case "linksaddeditorial":
	linksaddeditorial($_POST['linkid'], $_POST['editorialtitle'], $_POST['editorialtext']);
	break;

	case "linksmodeditorial":
	linksmodeditorial($_POST['linkid'], $_POST['editorialtitle'], $_POST['editorialtext']);
	break;

	case "linkslinkcheck":
	linkslinkcheck();
	break;

	case "linksvalidate":
	linksvalidate($cid);
	break;

	case "linksdeleditorial":
	linksdeleditorial($_POST['linkid']);
	break;

	case "linkscleanvotes":
	linkscleanvotes();
	break;

	case "linkslistbrokenlinks":
	linkslistbrokenlinks();
	break;

	case "linkseditbrokenlinks":
	linkseditbrokenlinks($lid);
	break;

	case "linksdelbrokenlinks":
	linksdelbrokenlinks($lid);
	break;

	case "linksignorebrokenlinks":
	linksignorebrokenlinks($lid);
	break;

	case "linkslistmodrequests":
	linkslistmodrequests();
	break;

	case "linkschangemodrequests":
	linkschangemodrequests();
	break;

	case "linkschangeignorerequests":
	linkschangeignorerequests($_POST['requestid']);
	break;

	case "linksdelcat":
	linksdelcat($cid, $_GET['ok']);
	break;

	case "linksmodcat":
	linksmodcat($_POST['cat']);
	break;

	case "linksmodcats":
	linksmodcats($cid, $title, $description);
	break;

	case "linksmodlink":
	linksmodlink($lid);
	break;

	case "linksmodlinks":
	linksmodlinks($lid, $title, $_POST['url'], $description, $_POST['name'], $_POST['email'], $_POST['hits'], $_POST['cat'], $_POST['feature']);
	break;

	case "linksdellink":
	linksdellink($lid);
	break;

	case "linksdelvote":
	linksdelvote($lid, $_POST['rid']);
	break;

	case "linksdelcomment":
	linksdelcomment($lid, $_POST['rid']);
	break;

	case "linkstransfer":
	linkstransfer($_POST['cidfrom'],$_POST['cidto']);
	break;

	default:
	links();
	break;
}
