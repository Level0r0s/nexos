
<table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr> 
    <td align="left" valign="bottom" colspan="2"><span class="maintitle">{TOPIC_TITLE}</span><br />
      <span class="gensmall"><b>{PAGINATION}</b><br />
      &nbsp; </span></td>
  </tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr> 
    <td align="left" valign="bottom" nowrap><span class="nav"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" align="middle" /></a>&nbsp;&nbsp;&nbsp;<a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" border="0" alt="{L_POST_REPLY_TOPIC}" align="middle" /></a>&nbsp;&nbsp;&nbsp;<a href="{U_PRINTER_TOPIC}"><img src="{PRINTER_IMG}" border="0" alt="{L_PRINTER_TOPIC}" align="middle" /></a></span></td>
    <td align="left" valign="middle" width="100%"><span class="nav">&nbsp;&nbsp;&nbsp;<a href="{U_INDEX}" class="nav">{L_INDEX}</a> 
      -> <a href="{U_VIEW_FORUM}" class="nav">{FORUM_NAME}</a></span></td>
  </tr>
</table>

<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0">
    <tr align="right">
        <td class="catHead" colspan="2" height="28"><span class="nav"><a href="{U_VIEW_OLDER_TOPIC}" class="nav">{L_VIEW_PREVIOUS_TOPIC}</a> :: <a href="{U_VIEW_NEWER_TOPIC}" class="nav">{L_VIEW_NEXT_TOPIC}</a> &nbsp;</span></td>
    </tr>
    {POLL_DISPLAY} 
    <tr>
        <th class="thLeft" width="150" height="26" nowrap>{L_AUTHOR}</th>
        <th class="thRight" nowrap>{L_MESSAGE}</th>
    </tr>
    <!-- BEGIN postrow -->
    <tr> 
        <td width="150" align="left" valign="top" class="{postrow.ROW_CLASS}"><span class="name"><a name="{postrow.U_POST_ID}"></a><b>{postrow.POSTER_NAME}</b></span><br /><span class="postdetails">{postrow.POSTER_RANK}<br />{postrow.RANK_IMAGE}{postrow.POSTER_AVATAR}<br /><br />{postrow.POSTER_JOINED}<br />{postrow.POSTER_POSTS}<br />{postrow.POSTER_FROM}</span><br /></td>
        <td class="{postrow.ROW_CLASS}" width="100%" height="28" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="100%"><a href="{postrow.U_MINI_POST}"><img src="{postrow.MINI_POST_IMG}" width="12" height="9" alt="{postrow.L_MINI_POST_ALT}" title="{postrow.L_MINI_POST_ALT}" border="0" /></a><span class="postdetails">{L_POSTED}: {postrow.POST_DATE}<span class="gen">&nbsp;</span>&nbsp; &nbsp;{L_POST_SUBJECT}: {postrow.POST_SUBJECT}</span></td>
                <td valign="top" align="right" nowrap>{postrow.QUOTE_IMG} {postrow.EDIT_IMG} {postrow.DELETE_IMG} {postrow.IP_IMG}</td>
            </tr>
            <tr> 
                <td colspan="2"><hr /></td>
            </tr>
            <tr>
                <td colspan="2"><span class="postbody">{postrow.MESSAGE}</span>{postrow.ATTACHMENTS}<span class="postbody">{postrow.SIGNATURE}</span><span class="gensmall">{postrow.EDITED_MESSAGE}</span></td>
            </tr>
        </table></td>
    </tr>
    <tr> 
        <td class="{postrow.ROW_CLASS}" width="150" align="left" valign="middle"><span class="nav"><a href="{L_BACK_TO_TOP_LINK}#top" class="nav">{L_BACK_TO_TOP}</a></span></td>
        <td class="{postrow.ROW_CLASS}" width="100%" height="28" valign="bottom" nowrap><table cellspacing="0" cellpadding="0" border="0" width="18">
            <tr> 
              <td valign="middle" nowrap>{postrow.PROFILE_IMG} {postrow.PM_IMG} {postrow.EMAIL_IMG} {postrow.WWW_IMG} {postrow.AIM_IMG} {postrow.YIM_IMG} {postrow.MSN_IMG} {postrow.ICQ_IMG} {postrow.GAL_IMG}</td>
            </tr>
        </table></td>
    </tr>
    <tr> 
        <td class="spaceRow" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
    </tr>
    <!-- END postrow -->
    <tr align="center"> 
        <td class="catBottom" colspan="2" height="28"><form method="post" action="{S_POST_DAYS_ACTION}"><table cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td align="center"><span class="gensmall">{L_DISPLAY_POSTS}: {S_SELECT_POST_DAYS}&nbsp;{S_SELECT_POST_ORDER}&nbsp;<input type="submit" value="{L_GO}" class="liteoption" name="submit" /></span></td>
            </tr>
        </table></form></td>
    </tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
  <tr> 
    <td align="left" valign="middle" nowrap><span class="nav"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" align="middle" /></a>&nbsp;&nbsp;&nbsp;<a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" border="0" alt="{L_POST_REPLY_TOPIC}" align="middle" /></a>&nbsp;&nbsp;&nbsp;<a href="{U_PRINTER_TOPIC}"><img src="{PRINTER_IMG}" border="0" alt="{L_PRINTER_TOPIC}" align="middle" /></a></span></td>
    <td align="left" valign="middle" width="100%"><span class="nav">&nbsp;&nbsp;&nbsp;<a href="{U_INDEX}" class="nav">{L_INDEX}</a> 
      -> <a href="{U_VIEW_FORUM}" class="nav">{FORUM_NAME}</a></span></td>
    <td align="right" valign="top" nowrap><span class="gensmall">{S_TIMEZONE}</span><br /><span class="nav">{PAGINATION}</span>
      </td>
  </tr>
  <tr>
    <td align="left" colspan="3"><span class="nav">{PAGE_NUMBER}</span></td>
  </tr>
</table>

<table width="100%" cellspacing="2" border="0" align="center">
  <tr> 
    <td width="40%" valign="top" nowrap align="left"><span class="gensmall">{S_WATCH_TOPIC}</span><br /><br />
      {QUICK_REPLY_FORM}</td>
    <td align="right" valign="top" nowrap>{JUMPBOX}<span class="gensmall">{S_AUTH_LIST}</span><br /><br />{S_TOPIC_ADMIN}</td>
  </tr>
</table>
