<table width="100%" cellspacing="0" cellpadding="2" border="0">
<tr> 
<td valign="bottom" class="gensmall"> 
<!-- BEGIN switch_user_logged_in -->
{LAST_VISIT_DATE}<br />
<!-- END switch_user_logged_in -->
{CURRENT_TIME}<br />
<a href="{U_INDEX}" class="nav">{L_INDEX}</a></td>
<td align="right" valign="bottom" class="gensmall"> 
<!-- BEGIN switch_user_logged_in -->
<a href="{U_SEARCH_NEW}">{L_SEARCH_NEW}</a><br />
<!-- END switch_user_logged_in -->
<a href="{U_SEARCH_UNANSWERED}">{L_SEARCH_UNANSWERED}</a><br />
<a href="{U_MARK_READ}"><strong>{L_MARK_FORUMS_READ}</strong></a></td>
</tr>
</table>

<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
  <tr> 
    <th colspan="2" class="thcornerl" height="28" nowrap>&nbsp;{L_FORUM}&nbsp;</th>
    <th width="50" class="thtop" nowrap>&nbsp;{L_TOPICS}&nbsp;</th>
    <th width="50" class="thtop" nowrap>&nbsp;{L_POSTS}&nbsp;</th>
    <th class="thcornerr" nowrap>&nbsp;{L_LASTPOST}&nbsp;</th>
  </tr>
  <!-- BEGIN catrow -->
  <tr> 
    <td class="catleft" colspan="2"><a href="{catrow.U_VIEWCAT}" class="cattitle">{catrow.CAT_DESC}</a></td>
    <td class="rowpic" colspan="3">&nbsp;</td>
  </tr>
  <!-- BEGIN forumrow -->
  <tr> 
    <td class="row1" align="center" valign="middle" height="50"><img src="{catrow.forumrow.FORUM_FOLDER_IMG}" alt="{catrow.forumrow.L_FORUM_FOLDER_ALT}" title="{catrow.forumrow.L_FORUM_FOLDER_ALT}" /></td>
    <td class="row1" width="100%" height="50"><span class="forumlink"> <a href="{catrow.forumrow.U_VIEWFORUM}" class="forumlink">{catrow.forumrow.FORUM_NAME}</a><br />
      </span> <span class="genmed">{catrow.forumrow.FORUM_DESC}<br />
      </span><span class="gensmall">{catrow.forumrow.L_MODERATOR} {catrow.forumrow.MODERATORS}</span></td>
    <td class="row2" align="center" valign="middle" height="50"><span class="gensmall">{catrow.forumrow.TOPICS}</span></td>
    <td class="row2" align="center" valign="middle" height="50"><span class="gensmall">{catrow.forumrow.POSTS}</span></td>
    <td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">{catrow.forumrow.LAST_POST}</span></td>
  </tr>
  <!-- END forumrow -->
  <!-- END catrow -->
</table>

<table width="100%" cellspacing="0" border="0" align="center" cellpadding="2">
  <tr> 
    <td align="left"><span class="gensmall"><a href="{U_MARK_READ}" class="gensmall">{L_MARK_FORUMS_READ}</a></span></td>
    <td align="right"><span class="gensmall">{S_TIMEZONE}</span></td>
  </tr>
</table>

<!-- BEGIN switch_user_logged_out -->
<form method="post" action="{S_LOGIN_ACTION}">
  <table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
    <tr> 
      <td class="catHead" height="28"><a name="login"></a><span class="cattitle">{L_LOGIN_LOGOUT}</span></td>
    </tr>
    <tr> 
      <td class="row1" align="center" valign="middle" height="28"><span class="gensmall">{L_USERNAME}: 
        <input class="post" type="text" name="username" size="10" />
        &nbsp;&nbsp;&nbsp;{L_PASSWORD}: 
        <input class="post" type="password" name="password" size="10" />
        &nbsp;&nbsp; &nbsp;&nbsp;{L_AUTO_LOGIN} 
        <input class="text" type="checkbox" name="autologin" />
        &nbsp;&nbsp;&nbsp; 
        <input type="submit" class="mainoption" name="login" value="{L_LOGIN}" />
        </span> </td>
    </tr>
  </table>
</form>
<!-- END switch_user_logged_out -->

<br clear="all" />

<table cellspacing="3" border="0" cellpadding="0" align="center">
  <tr> 
    <td width="20" align="center"><img src="modules/Forums/templates/subSilver/images/folder_new_big.gif" alt="{L_NEW_POSTS}"/></td>
    <td><span class="gensmall">{L_NEW_POSTS}</span></td>
    <td>&nbsp;&nbsp;</td>
    <td width="20" align="center"><img src="modules/Forums/templates/subSilver/images/folder_big.gif" alt="{L_NO_NEW_POSTS}" /></td>
    <td><span class="gensmall">{L_NO_NEW_POSTS}</span></td>
    <td>&nbsp;&nbsp;</td>
    <td width="20" align="center"><img src="modules/Forums/templates/subSilver/images/folder_lock_big.gif" alt="{L_FORUM_LOCKED}" /></td>
    <td><span class="gensmall">{L_FORUM_LOCKED}</span></td>
  </tr>
</table>
