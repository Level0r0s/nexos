<?php
/***************************************************************************
 *						lang_extend_merge.php [English]
 *						-------------------------------
 *	begin				: 28/09/2003
 *	copyright			: Ptirhiik
 *	email				: ptirhiik@clanmckeen.com
 *
 *	version				: 1.0.1 - 21/10/2003
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}

// admin part
if ( $lang_extend_admin )
{
	$lang['Lang_extend_merge'] = '快速合併合章';
}

$lang['Refresh'] = '重新整理';
$lang['Merge_topics'] = '合併文章';
$lang['Merge_title'] = '新的文章標題';
$lang['Merge_title_explain'] = '這個將會是合併後文章的新標題. 假如你想要系統採用目標文章的標題, 請留空白';
$lang['Merge_topic_from'] = '要合併的來源文章';
$lang['Merge_topic_from_explain'] = '這文章會被合併到其它文章. 你可以輸入文章 id, 文章網址, 或者此文中一篇回覆文章的網址';
$lang['Merge_topic_to'] = '目標文章';
$lang['Merge_topic_to_explain'] = '這篇文章會得到先前文章的所有回覆. 你可以輸入文章 id, 文章網址, 或者此文中一篇回覆文章的網址';
$lang['Merge_from_not_found'] = '沒有找到要合併的來源文章';
$lang['Merge_to_not_found'] = '沒有找到目標文章';
$lang['Merge_topics_equals'] = '你不能用文章它本身來合併文章';
$lang['Merge_from_not_authorized'] = '你沒有要合併的來源文章所屬的版面的文章管理權';
$lang['Merge_to_not_authorized'] =  '你沒有目標文章所屬的版面的文章管理權';
$lang['Merge_poll_from'] = '要合併的來源文章有一個問卷調查. 它會被拷貝到目標文章';
$lang['Merge_poll_from_and_to'] = '目標文章已經有問卷調查. 來源文章的問卷調查會被刪除';
$lang['Merge_confirm_process'] = '請確定你想要合併 <br />"<b>%s</b>"<br />到<br />"<b>%s</b>"';
$lang['Merge_topic_done'] = '文章已成功合併.';

?>