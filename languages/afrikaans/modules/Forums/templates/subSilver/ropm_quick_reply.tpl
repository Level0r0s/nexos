<!-- BEGIN quickreply -->
</form>
<tr>
<th colspan="3" height="25" style="padding: 0px"><b>{L_QUICK_REPLY}</b></th>
</tr>
<tr>
<td align="right" class="row1" valign="top"><span class="gen"><b>{L_SUBJECT}:</b></span></td>
<td class="row2" colspan="2" valign="top">
<form action="{quickreply.POST_ACTION}" method="post" name="qreply" onsubmit="return checkForm(this)">
<input type="text" name="subject" size="45" maxlength="60" style="width:450px" tabindex="2" class="post" value="{quickreply.SUBJECT}" /><br /></td></tr>
<tr><td align="right" class="row1" valign="top"><span class="gen"><b>{L_MESSAGE}:</b></span></td>
<td class="row1" colspan="2" valign="top" style="padding-top: 0px; padding-bottom: 0px">
{quickreply.BBCODEBUTTONS}
<textarea name="message" style="width:450px; height: 140px;" wrap="virtual" tabindex="3" class="post" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);"></textarea><br />
{quickreply.SMILIES}
</td></tr>
<tr><td align="right" class="row1" valign="top"><span class="gen"><b>{L_OPTIONS}:</b></span></td>
<td class="row2" colspan="2" valign="top"><span class="gensmall">
<input type="checkbox" name="quick_quote" />&nbsp;{L_QUOTE_LAST_MESSAGE}<br />
<!-- BEGIN HTMLCB -->
<input type="checkbox" name="disable_html"{quickreply.S_HTML_CHECKED} />&nbsp;{L_DISABLE_HTML}<br />
<!-- END HTMLCB -->
<!-- BEGIN BBCODECB -->
<input type="checkbox" name="disable_bbcode"{quickreply.S_BBCODE_CHECKED} />&nbsp;{L_DISABLE_BBCODE}<br />
<!-- END BBCODECB -->
<!-- BEGIN SMILIESCB -->
<input type="checkbox" name="disable_smilies"{quickreply.S_SMILIES_CHECKED} />&nbsp;{L_DISABLE_SMILIES}<br />
<!-- END SMILIESCB -->
<input type="checkbox" name="attach_sig"{quickreply.S_SIG_CHECKED} />&nbsp;{L_ATTACH_SIGNATURE}<br /></span></td>
</tr>
<tr>
<td class="catbottom" colspan="3" height="28" align="center" style="padding: 0px">
{quickreply.S_HIDDEN_FIELDS}
<input type="submit" name="preview" class="liteoption" value="{L_PREVIEW}" />
&nbsp;
<input type="submit" name="post" class="mainoption" value="{L_SUBMIT}" />
</td></tr>
</form>
<!-- END quickreply -->
