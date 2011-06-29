
<h1>{L_TITLE}</h1>

<p>{L_INSTRUCTIONS}</p>

<form method="post" action="{S_ACTION}">
<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline" align="center">
    <tr>
        <th class="thHead" colspan="2">{L_FORUM_TITLE}</th>
    </tr>
    <!-- BEGIN catrow -->
    <tr>
        <td class="catLeft"><span class="cattitle"><b>{catrow.CAT_DESC}</b></span></td>
        <td class="catLeft" width="75"><span class="cattitle"><b>{L_FORUM_ADD}</b></span></td>
    </tr>
    <!-- BEGIN forumrow -->
    <tr> 
        <td class="row2"><span class="gen"><a href="{catrow.forumrow.U_VIEWFORUM}" target="_new">{catrow.forumrow.FORUM_NAME}</a></span><br /><span class="gensmall">{catrow.forumrow.FORUM_DESC}</span></td>
        <td class="row2" width="75"><input type="checkbox" name="forum_id_list[]" value="{catrow.forumrow.FORUM_ID}" /></td>
    </tr>
    <tr>
        <td>
        <!-- BEGIN icon -->
            <a href="{catrow.forumrow.icon.U_REMOVE_ICON}"><img src="{catrow.forumrow.icon.ICON_SRC}" border="0"/></a>
        <!-- END icon -->
        </td>
    </tr>
    <!-- END forumrow -->
    <!-- END catrow -->
</table>
<br />
<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline" align="center">
    <tr>
        <td class="catLeft"><span class="cattitle"><b>{L_GLOBAL_ICONS_TEXT}</b></span></td>
    </tr>
    <tr>
        <td>
        <!-- BEGIN globalicon -->
            <a href="{globalicon.U_REMOVE_GLOBAL_ICON}"><img src="{globalicon.ICON_SRC}" border="0"/></a>
        <!-- END globalicon -->
        </td>
    </tr>
</table>
<br />
<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline" align="center">
    <tr>
        <th class="thHead" colspan="2">{L_ADD_TITLE}</th>
    </tr>
    <tr>
        <td class="row2" width="50%"><span class="cttitle">{L_ADD_PATH}</span></td>
        <td class="row1"><input type="text" name="icon_path" style="width:200px"></td>
    </tr>
    <tr>
        <td class="row2" width="50%"><span class="cttitle">{L_ADD_NAME}</span></td>
        <td class="row1"><input type="text" name="icon_name" style="width:200px"></td>
    </tr>
    <tr>
        <td class="row2" colspan="2"><span class="cttitle">{L_ADD_GLOBAL} <input type="checkbox" name="addglobal"></span></td>
    </tr>
    <tr>
        <td class="catBottom" align="center" colspan="2"><input type="submit" value="{L_ADD}" class="mainoption" name="addicon" /></td>
    </tr>
</table>
</form>
