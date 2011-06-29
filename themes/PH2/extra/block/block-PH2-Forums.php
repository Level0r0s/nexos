<?php
########################################################################
# PHx Center Forum Block v2.0                                          #
# Made for CPG-Nuke 8.x and the PHx Theme                              #
# © 2004 Pitcher@Home (www.pitcher.no)                                 #
# Big thanks to DJMaze (www.cpgnuke.com) for optimizing the sql part   #
########################################################################
# This program is free software. You can redistribute it and/or modify #
# it under the terms of the GNU General Public License as published by #
# the Free Software Foundation; either version 2 of the License.       #
# If you modify this, let me know for fun. =)                          #
########################################################################

if (!defined('CPG_NUKE')) { die('You do not have permission to access this file'); }

$HideViewReadOnly = 1;
$Last_New_Topics  = 5;
global $prefix, $db, $sitename, $theme;
$ThemeSel = get_theme();

$Count_Topics = 0;
$Topic_Buffer = '';
$viewlast = '';

$result = $db->sql_query("SELECT
 t.topic_id, t.topic_last_post_id, t.topic_title, t.topic_views, t.topic_replies,
 u.username, u.user_id,
 a.username AS authorname, a.user_id AS authorid,
 p.poster_id, FROM_UNIXTIME(p.post_time,'%m/%d/%Y at %H:%i') as post_time
 FROM ".$prefix."_bbtopics t, ".$prefix."_bbforums f
 LEFT JOIN ".$prefix."_bbposts p ON (p.post_id = t.topic_last_post_id)
 LEFT JOIN ".$prefix."_users u ON (u.user_id = p.poster_id)
 LEFT JOIN ".$prefix."_users a ON (a.user_id = t.topic_poster)
 WHERE t.forum_id=f.forum_id AND f.auth_view=0
 ORDER BY t.topic_last_post_id DESC
 LIMIT 0,5");

while( $post = $db->sql_fetchrow($result) )
{
    $viewlast .="  <tr>
    <td height=\"34\" nowrap class=\"row1\">
    <img src=\"themes/$ThemeSel/images/forums/folder_new.gif\" border=\"0\" alt=\"\" /></td>
    <td width=\"100%\" class=\"row1\" onmouseover=\"this.style.backgroundColor='#DFEAF2';\" onmouseout=\"this.style.backgroundColor='#EAEFF3';\" onclick=\"window.location.href='".getlink("Forums&amp;file=viewtopic&amp;t=$post[topic_id]")."'\"><span class=\"topictitle\">&nbsp;<a href=\"".getlink("Forums&amp;file=viewtopic&amp;t=$post[topic_id]")."\">$post[topic_title]</a></span></td>
    <td align=\"center\" class=\"row2\">$post[topic_replies]</td>
    <td align=\"center\" class=\"row3\"><a href=\"".getlink("Forums&amp;file=profile&amp;mode=viewprofile&amp;u=$post[authorid]")."\">$post[authorname]</a></td>
    <td align=\"center\" class=\"row2\">$post[topic_views]</td>
    <td align=\"center\" nowrap class=\"row3\"><font size=\"-2\"><i>&nbsp;&nbsp;$post[post_time]&nbsp;</i></font><br />
      <a href=\"".getlink("Forums&file=profile&mode=viewprofile&u=$post[user_id]")."\">$post[username]</a>&nbsp;
      <a href=\"".getlink("Forums&amp;file=viewtopic&amp;p=$post[topic_last_post_id]")."#$post[topic_last_post_id]\"><img src=\"themes/$ThemeSel/images/forums/icon_minipost_new.gif\" border=\"0\" alt=\"Latest Post\" /></a></td>
  </tr>";
}

    $content .= '
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  		<tr>
    		<td bgcolor="#525E6E">
    			<table width="100%" border="0" cellspacing="0" cellpadding="0">
        	<tr>
          	<td>
          		<table width="100%" border="0" cellpadding="1" cellspacing="1">
  							<tr>
    							<th height="25" colspan="2" align="center" nowrap class="thcornerl"><font color="#364D67"><strong>Topics</strong></font></th>
    							<th width="50" align="center" nowrap class="thtop"><font color="#364D67"><strong>&nbsp;Replies&nbsp;</strong></font></th>
    							<th width="100" align="center" nowrap class="thtop"><font color="#364D67"><strong>&nbsp;Author&nbsp;</strong></font></th>
    							<th width="50" align="center" nowrap class="thtop"><font color="#364D67"><strong>&nbsp;Views&nbsp;</strong></font></th>
    							<th align="center" nowrap class="thcornerr"><font color="#364D67"><strong>&nbsp;Last Post&nbsp;</strong></font></th>
  							</tr>
  	';
    $content .= $viewlast;
    $content .= '
    						<tr>
    							<td class="catBottom" height="25" colspan="6" align="center"></td>
  							</tr>
  						</table>
  					</td>
  				</tr>
  			</table>
  		</td>
  	</tr>
  </table>
 ';
?>