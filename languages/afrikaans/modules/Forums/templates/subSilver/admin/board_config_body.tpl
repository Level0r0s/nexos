
<h1>{L_CONFIGURATION_TITLE}</h1>

<p>{L_CONFIGURATION_EXPLAIN}</p>

<form action="{S_CONFIG_ACTION}" method="post"><table width="99%" cellpadding="4" cellspacing="1" border="0" align="center" class="forumline">
    <tr>
      <th class="thHead" colspan="2">{L_GENERAL_SETTINGS}</th>
    </tr>
    <tr>
        <td class="row1">{L_SERVER_NAME}</td>
        <td class="row2"><input class="post" type="text" maxlength="255" size="40" name="server_name" value="{SERVER_NAME}" /></td>
    </tr>
    <tr>
        <td class="row1">{L_SERVER_PORT}<br /><span class="gensmall">{L_SERVER_PORT_EXPLAIN}</span></td>
        <td class="row2"><input class="post" type="text" maxlength="5" size="5" name="server_port" value="{SERVER_PORT}" /></td>
    </tr>
    <tr>
        <td class="row1">{L_SCRIPT_PATH}<br /><span class="gensmall">{L_SCRIPT_PATH_EXPLAIN}</span></td>
        <td class="row2"><input class="post" type="text" maxlength="255" name="script_path" value="{SCRIPT_PATH}" /></td>
    </tr>
    <tr>
        <td class="row1">{L_BOARD_EMAIL_FORM}<br /><span class="gensmall">{L_BOARD_EMAIL_FORM_EXPLAIN}</span></td>
        <td class="row2"><input type="radio" name="board_email_form" value="1" {BOARD_EMAIL_FORM_ENABLE} /> {L_ENABLED}&nbsp;&nbsp;<input type="radio" name="board_email_form" value="0" {BOARD_EMAIL_FORM_DISABLE} /> {L_DISABLED}</td>
    </tr>
    <tr>
        <td class="row1">{L_FLOOD_INTERVAL} <br /><span class="gensmall">{L_FLOOD_INTERVAL_EXPLAIN}</span></td>
        <td class="row2"><input class="post" type="text" size="3" maxlength="4" name="flood_interval" value="{FLOOD_INTERVAL}" /></td>
    </tr>
    <tr>
        <td class="row1">{L_TOPICS_PER_PAGE}</td>
        <td class="row2"><input class="post" type="text" name="topics_per_page" size="3" maxlength="4" value="{TOPICS_PER_PAGE}" /></td>
    </tr>
    <tr>
        <td class="row1">{L_POSTS_PER_PAGE}</td>
        <td class="row2"><input class="post" type="text" name="posts_per_page" size="3" maxlength="4" value="{POSTS_PER_PAGE}" /></td>
    </tr>
    <tr>
        <td class="row1">{L_HOT_THRESHOLD}</td>
        <td class="row2"><input class="post" type="text" name="hot_threshold" size="3" maxlength="4" value="{HOT_TOPIC}" /></td>
    </tr>
    <tr>
        <td class="row1">{L_DEFAULT_STYLE}</td>
        <td class="row2">{STYLE_SELECT}</td>
    </tr>
    <tr>
        <td class="row1">{L_OVERRIDE_STYLE}<br /><span class="gensmall">{L_OVERRIDE_STYLE_EXPLAIN}</span></td>
        <td class="row2"><input type="radio" name="override_user_style" value="1" {OVERRIDE_STYLE_YES} /> {L_YES}&nbsp;&nbsp;<input type="radio" name="override_user_style" value="0" {OVERRIDE_STYLE_NO} /> {L_NO}</td>
    </tr>
    <tr>
        <td class="row1">{L_DATE_FORMAT}<br /><span class="gensmall">{L_DATE_FORMAT_EXPLAIN}</span></td>
        <td class="row2"><input class="post" type="text" name="default_dateformat" value="{DEFAULT_DATEFORMAT}" /></td>
    </tr>
    <tr>
        <td class="row1">{L_SYSTEM_TIMEZONE}</td>
        <td class="row2">{TIMEZONE_SELECT}</td>
    </tr>
    <tr>
        <td class="row1">{L_ENABLE_PRUNE}</td>
        <td class="row2"><input type="radio" name="prune_enable" value="1" {PRUNE_YES} /> {L_YES}&nbsp;&nbsp;<input type="radio" name="prune_enable" value="0" {PRUNE_NO} /> {L_NO}</td>
    </tr>
    <tr>
        <th class="thHead" colspan="2">{L_COOKIE_SETTINGS}</th>
    </tr>
    <tr>
        <td class="row2" colspan="2"><span class="gensmall">{L_COOKIE_SETTINGS_EXPLAIN}</span></td>
    </tr>
    <tr>
        <td class="row1">{L_COOKIE_DOMAIN}</td>
        <td class="row2"><input class="post" type="text" maxlength="255" name="cookie_domain" value="{COOKIE_DOMAIN}" /></td>
    </tr>
    <tr>
        <td class="row1">{L_COOKIE_NAME}</td>
        <td class="row2"><input class="post" type="text" maxlength="16" name="cookie_name" value="{COOKIE_NAME}" /></td>
    </tr>
    <tr>
        <td class="row1">{L_COOKIE_PATH}</td>
        <td class="row2"><input class="post" type="text" maxlength="255" name="cookie_path" value="{COOKIE_PATH}" /></td>
    </tr>
    <tr>
        <td class="row1">{L_COOKIE_SECURE}<br /><span class="gensmall">{L_COOKIE_SECURE_EXPLAIN}</span></td>
        <td class="row2"><input type="radio" name="cookie_secure" value="0" {S_COOKIE_SECURE_DISABLED} />{L_DISABLED}&nbsp; &nbsp;<input type="radio" name="cookie_secure" value="1" {S_COOKIE_SECURE_ENABLED} />{L_ENABLED}</td>
    </tr>
    <tr>
        <td class="row1">{L_SESSION_LENGTH}</td>
        <td class="row2"><input class="post" type="text" maxlength="5" size="5" name="session_length" value="{SESSION_LENGTH}" /></td>
    </tr>
    <tr>
        <th class="thHead" colspan="2">{L_PRIVATE_MESSAGING}</th>
    </tr>




    <tr>
        <td class="row1">{L_INBOX_LIMIT}</td>
        <td class="row2"><input class="post" type="text" maxlength="4" size="4" name="max_inbox_privmsgs" value="{INBOX_LIMIT}" /></td>
    </tr>
    <tr>
        <td class="row1">{L_SENTBOX_LIMIT}</td>
        <td class="row2"><input class="post" type="text" maxlength="4" size="4" name="max_sentbox_privmsgs" value="{SENTBOX_LIMIT}" /></td>
    </tr>
    <tr>
        <td class="row1">{L_SAVEBOX_LIMIT}</td>
        <td class="row2"><input class="post" type="text" maxlength="4" size="4" name="max_savebox_privmsgs" value="{SAVEBOX_LIMIT}" /></td>
    </tr>
<tr><th class="thHead" colspan="2">{L_ROPM_QUICK_REPLY}</th>
</tr><tr>
<td class="row1">{L_ENABLE_ROPM_QUICK_REPLY}</td>
<td class="row2"><input type="radio" name="ropm_quick_reply" value="1" {ROPM_QUICK_REPLY_YES} /> {L_YES}&nbsp;&nbsp;<input type="radio" name="ropm_quick_reply" value="0" {ROPM_QUICK_REPLY_NO} /> {L_NO}</td>
</tr><tr>
<td class="row1">{L_ROPM_QUICK_REPLY_BBC}</td>
<td class="row2"><input type="radio" name="ropm_quick_reply_bbc" value="1" {ROPM_QUICK_REPLY_BBC_YES} /> {L_YES}&nbsp;&nbsp;<input type="radio" name="ropm_quick_reply_bbc" value="0" {ROPM_QUICK_REPLY_BBC_NO} /> {L_NO}</td>
</tr>
    <tr>
      <th class="thHead" colspan="2">{L_ABILITIES_SETTINGS}</th>
    </tr>
    <tr>
        <td class="row1">{L_MAX_POLL_OPTIONS}</td>
        <td class="row2"><input class="post" type="text" name="max_poll_options" size="4" maxlength="4" value="{MAX_POLL_OPTIONS}" /></td>
    </tr>
    <tr>
        <td class="row1">{L_ALLOW_HTML}</td>
        <td class="row2"><input type="radio" name="allow_html" value="1" {HTML_YES} /> {L_YES}&nbsp;&nbsp;<input type="radio" name="allow_html" value="0" {HTML_NO} /> {L_NO}</td>
    </tr>
    <tr>
        <td class="row1">{L_ALLOWED_TAGS}<br /><span class="gensmall">{L_ALLOWED_TAGS_EXPLAIN}</span></td>
        <td class="row2"><input class="post" type="text" size="30" maxlength="255" name="allow_html_tags" value="{HTML_TAGS}" /></td>
    </tr>
    <tr>
        <td class="row1">{L_ALLOW_BBCODE}</td>
        <td class="row2"><input type="radio" name="allow_bbcode" value="1" {BBCODE_YES} /> {L_YES}&nbsp;&nbsp;<input type="radio" name="allow_bbcode" value="0" {BBCODE_NO} /> {L_NO}</td>
    </tr>
    <tr>
        <td class="row1">{L_ALLOW_SMILIES}</td>
        <td class="row2"><input type="radio" name="allow_smilies" value="1" {SMILE_YES} /> {L_YES}&nbsp;&nbsp;<input type="radio" name="allow_smilies" value="0" {SMILE_NO} /> {L_NO}</td>
    </tr>
    <tr>
        <td class="row1">{L_ALLOW_SIG}</td>
        <td class="row2"><input type="radio" name="allow_sig" value="1" {SIG_YES} /> {L_YES}&nbsp;&nbsp;<input type="radio" name="allow_sig" value="0" {SIG_NO} /> {L_NO}</td>
    </tr>
    <tr>
        <td class="row1">{L_MAX_SIG_LENGTH}<br /><span class="gensmall">{L_MAX_SIG_LENGTH_EXPLAIN}</span></td>
        <td class="row2"><input class="post" type="text" size="5" maxlength="4" name="max_sig_chars" value="{SIG_SIZE}" /></td>
    </tr>
    <tr>
      <th class="thHead" colspan="2">{L_COPPA_SETTINGS}</th>
    </tr>
    <tr>
        <td class="row1">{L_COPPA_FAX}</td>
        <td class="row2"><input class="post" type="text" size="25" maxlength="100" name="coppa_fax" value="{COPPA_FAX}" /></td>
    </tr>
    <tr>
        <td class="row1">{L_COPPA_MAIL}<br /><span class="gensmall">{L_COPPA_MAIL_EXPLAIN}</span></td>
        <td class="row2"><textarea name="coppa_mail" rows="5" cols="30">{COPPA_MAIL}</textarea></td>
    </tr>

    <tr>
      <th class="thHead" colspan="2">{L_EMAIL_SETTINGS}</th>
    </tr>
    <tr>
        <td class="row1">{L_ADMIN_EMAIL}</td>
        <td class="row2"><input class="post" type="text" size="25" maxlength="100" name="board_email" value="{EMAIL_FROM}" /></td>
    </tr>
    <tr>
        <td class="row1">{L_EMAIL_SIG}<br /><span class="gensmall">{L_EMAIL_SIG_EXPLAIN}</span></td>
        <td class="row2"><textarea name="board_email_sig" rows="5" cols="30">{EMAIL_SIG}</textarea></td>
    </tr>
    <tr>
        <td class="row1">{L_USE_SMTP}<br /><span class="gensmall">{L_USE_SMTP_EXPLAIN}</span></td>
        <td class="row2"><input type="radio" name="smtp_delivery" value="1" {SMTP_YES} /> {L_YES}&nbsp;&nbsp;<input type="radio" name="smtp_delivery" value="0" {SMTP_NO} /> {L_NO}</td>
    </tr>
    <tr>
        <td class="row1">{L_SMTP_SERVER}</td>
        <td class="row2"><input class="post" type="text" name="smtp_host" value="{SMTP_HOST}" size="25" maxlength="50" /></td>
    </tr>
    <tr>
        <td class="row1">{L_SMTP_USERNAME}<br /><span class="gensmall">{L_SMTP_USERNAME_EXPLAIN}</span></td>
        <td class="row2"><input class="post" type="text" name="smtp_username" value="{SMTP_USERNAME}" size="25" maxlength="255" /></td>
    </tr>
    <tr>
        <td class="row1">{L_SMTP_PASSWORD}<br /><span class="gensmall">{L_SMTP_PASSWORD_EXPLAIN}</span></td>
        <td class="row2"><input class="post" type="password" name="smtp_password" value="{SMTP_PASSWORD}" size="25" maxlength="255" /></td>
    </tr>
    <tr>
        <td class="catBottom" colspan="2" align="center">{S_HIDDEN_FIELDS}<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="{L_RESET}" class="liteoption" />
        </td>
    </tr>
</table></form>

<br clear="all" />
