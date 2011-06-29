<?php
/***************************************************************************
 *                       lang_main.php [Simplified Chinese]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.1 2004/07/17 09:18:34 akamu Exp $
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
// CONTRIBUTORS:
//	 Add your details here if wanted, e.g. Name, username, email address, website
// 2002-08-27  Philip M. White        - fixed many grammar problems
//

//
// Translation by:
//      inker    :: http://www.byink.com
//
//      For questions and comments use: support@byink.com
//      last modify   : 2002/3/1
//

//
// Update by:
//	iCy-fLaME
//      For questions and comments use: icy_flame_hm@hotmail.com
//      last modify   : 05 Apr 2004
//

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = "utf-8";
$lang['DIRECTION'] = "LTR";
$lang['LEFT'] = "LEFT";
$lang['RIGHT'] = "RIGHT";
$lang['DATE_FORMAT'] =  "Y-m-d"; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
$lang['TRANSLATION'] = 'phpBB ¼òÌåÖÐÎÄ½çÃæÓÉ iCy-fLaME ¸üÐÂ·­Òë';
$lang['TRANSLATION_INFO'] = 'phpBB ¼òÌåÖÐÎÄ½çÃæÓÉ iCy-fLaME ¸üÐÂ·­Òë';
//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = "ÂÛÌ³";
$lang['Category'] = "ÌÖÂÛÇø";
$lang['Topic'] = "Ö÷Ìâ";
$lang['Topics'] = "Ö÷Ìâ";
$lang['Replies'] = "»Ø¸´";
$lang['Views'] = "ÔÄ¶Á";
$lang['Post'] = "Ìû×Ó";
$lang['Posts'] = "Ìû×Ó";
$lang['Posted'] = "·¢±íÓÚ";
$lang['Username'] = "³ÉÔ±Ãû³Æ";
$lang['Password'] = "ÃÜÂë";
$lang['Email'] = "Email";
$lang['Poster'] = "·¢±íÕß";
$lang['Author'] = "×÷Õß";
$lang['Time'] = "Ê±¼ä";
$lang['Hours'] = "Ð¡Ê±ÄÚ";
$lang['Message'] = "ÁôÑÔ";

$lang['1_Day'] = "1 ÌìÄÚ";
$lang['7_Days'] = "7 ÌìÄÚ";
$lang['2_Weeks'] = "2 ÐÇÆÚÄÚ";
$lang['1_Month'] = "1 ÔÂÄÚ";
$lang['3_Months'] = "3 ÔÂÄÚ";
$lang['6_Months'] = "6 ÔÂÄÚ";
$lang['1_Year'] = "1 ÄêÄÚ";

$lang['Go'] = "Go";
$lang['Jump_to'] = "×ªÌøµ½";
$lang['Submit'] = "·¢ËÍ";
$lang['Reset'] = "ÖØÉè";
$lang['Cancel'] = "È¡Ïû";
$lang['Preview'] = "Ô¤ÀÀ";
$lang['Confirm'] = "È·¶¨";
$lang['Spellcheck'] = "Óï·¨¼ì²é";
$lang['Yes'] = "ÊÇ";
$lang['No'] = "·ñ";
$lang['Enabled'] = "¿ªÆô";
$lang['Disabled'] = "¹Ø±Õ";
$lang['Error'] = "´íÎó";

$lang['Next'] = "ÏÂÒ»¸ö";
$lang['Previous'] = "ÉÏÒ»¸ö";
$lang['Goto_page'] = "Ç°ÍùÒ³Ãæ";
$lang['Joined'] = "×¢²áÊ±¼ä";
$lang['IP_Address'] = "IP µØÖ·";

$lang['Select_forum'] = "Ñ¡ÔñÒ»¸ö°æÃæ";
$lang['View_latest_post'] = "ä¯ÀÀ×îºó·¢±íµÄÌû×Ó";
$lang['View_newest_post'] = "ä¯ÀÀ×îÐÂµÄÌû×Ó";
$lang['Page_of'] = "µÚ<b>%d</b>Ò³/¹²<b>%d</b>Ò³"; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = "ICQ ºÅÂë";
$lang['AIM'] = "AIM Address";
$lang['MSNM'] = "MSN Messenger";
$lang['YIM'] = "Yahoo Messenger";

$lang['Forum_Index'] = "%s Ê×Ò³";  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = "·¢±íÐÂÌû";
$lang['Reply_to_topic'] = "»Ø¸´Ìû×Ó";
$lang['Reply_with_quote'] = "ÒýÓÃ²¢»Ø¸´";

$lang['Click_return_topic'] = "µã»÷ %sÕâÀï%s ·µ»ØÖ÷Ìâ"; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = "µã»÷ %sÕâÀï%s ÔÙÊÔÒ»±é";
$lang['Click_return_forum'] = "µã»÷ %sÕâÀï%s ·µ»ØÂÛÌ³";
$lang['Click_view_message'] = "µã»÷ %sÕâÀï%s ÔÄ¶ÁÄúµÄÌû×Ó";
$lang['Click_return_modcp'] = "µã»÷ %sÕâÀï%s ·µ»Ø³¤ÀÏ¹ÜÀíÇø";
$lang['Click_return_group'] = "µã»÷ %sÕâÀï%s ·µ»Ø³ÉÔ±×éÐÅÏ¢Çø(to return to group information)";

$lang['Admin_panel'] = "ÂÛÌ³¹ÜÀíÔ±¿ØÖÆÃæ°å";

$lang['Board_disable'] = "¶Ô²»Æð,±¾ÂÛÌ³ÔÝÊ±²»ÄÜ·ÃÎÊ,ÇëÉÔºóÔÚÊÔ.";


//
// Global Header strings
//
$lang['Registered_users'] = "×¢²á³ÉÔ±:";
$lang['Browsing_forum'] = "ÕýÔÚä¯ÀÀÕâ¸ö°æÃæµÄ³ÉÔ±:";
$lang['Online_users_zero_total'] = "×Ü¼ÆÓÐ <b>0</b> Î»ÅóÓÑÔÚÏß :: ";
$lang['Online_users_total'] = "×Ü¼ÆÓÐ <b>%d</b> Î»ÅóÓÑÔÚÏß :: ";
$lang['Online_user_total'] = "×Ü¼ÆÓÐ <b>%d</b> Î»ÅóÓÑÔÚÏß :: ";
$lang['Reg_users_zero_total'] = "0 Î»³ÉÔ±, ";
$lang['Reg_users_total'] = "%d Î»³ÉÔ±, ";
$lang['Reg_user_total'] = "%d Î»³ÉÔ±, ";
$lang['Hidden_users_zero_total'] = "0 Î»ÒþÉí¿ÍºÍ ";
$lang['Hidden_user_total'] = "%d Î»ÒþÉí¿ÍºÍ ";
$lang['Hidden_users_total'] = "%d Î»ÒþÉí¿ÍºÍ ";
$lang['Guest_users_zero_total'] = "0 Î»ÓÎ¿Í";
$lang['Guest_users_total'] = "%d Î»ÓÎ¿Í";
$lang['Guest_user_total'] = "%d Î»ÓÎ¿Í";
$lang['Record_online_users'] = "×î¸ßÔÚÏß¼ÍÂ¼ÊÇ <b>%s</b> ÈË %s"; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = "%sÂÛÌ³¹ÜÀíÔ±%s";
$lang['Mod_online_color'] = "%s³¤ÀÏ%s";

$lang['You_last_visit'] = "ÄúÉÏ´Î·ÃÎÊÊ±¼äÊÇ %s"; // %s replaced by date/time
$lang['Current_time'] = "ÏÖÔÚµÄÊ±¼äÊÇ %s"; // %s replaced by time

$lang['Search_new'] = "ÔÄ¶ÁÉÏ´Î·ÃÎÊºóµÄÌû×Ó";
$lang['Search_your_posts'] = "ÔÄ¶ÁÄú·¢±íµÄÌû×Ó";
$lang['Search_unanswered'] = "ÔÄ¶ÁÉÐÎ´»Ø´ðµÄÌû×Ó";

$lang['Register'] = "×¢²á";
$lang['Profile'] = "¸öÈË×ÊÁÏ";
$lang['Edit_profile'] = "±à¼­ÄúµÄ¸öÈË×ÊÁÏ";
$lang['Search'] = "ËÑË÷";
$lang['Memberlist'] = "³ÉÔ±ÁÐ±í";
$lang['FAQ'] = "³£¼ûÎÊÌâÓë½â´ð (FAQ)";
$lang['BBCode_guide'] = "BBCode Ö¸ÄÏ";
$lang['Usergroups'] = "³ÉÔ±×é";
$lang['Last_Post'] = "×îºó·¢±í";
$lang['Moderator'] = "³¤ÀÏ";
$lang['Moderators'] = "³¤ÀÏ";


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = "ÂÛÌ³¹²»¹Ã»ÓÐÌû×Ó"; // Number of posts
$lang['Posted_articles_total'] = "ÂÛÌ³¹²ÓÐ <b>%d</b> ¸öÌû×Ó"; // Number of posts
$lang['Posted_article_total'] = "ÂÛÌ³¹²ÓÐ <b>%d</b> ¸öÌû×Ó"; // Number of posts
$lang['Registered_users_zero_total'] = "ÂÛÌ³¹²»¹Ã»ÓÐ×¢²á³ÉÔ±"; // # registered users
$lang['Registered_users_total'] = "ÂÛÌ³¹²ÓÐ <b>%d</b> Î»×¢²á³ÉÔ±"; // # registered users
$lang['Registered_user_total'] = "ÂÛÌ³¹²ÓÐ <b>%d</b> Î»×¢²á³ÉÔ±"; // # registered users
$lang['Newest_user'] = "×îÐÂ×¢²áµÄ³ÉÔ±ÊÇ <b>%s%s%s</b>"; // a href, username, /a

$lang['No_new_posts_last_visit'] = "ÉÏ´Î·ÃÎÊºóÃ»ÓÐÐÂÌû";
$lang['No_new_posts'] = "Ã»ÓÐÐÂÌû";
$lang['New_posts'] = "ÓÐÐÂÌû";
$lang['New_post'] = "ÓÐÐÂÌû";
$lang['No_new_posts_hot'] = "Ã»ÓÐÐÂÌû [ ÈÈÃÅ ]";
$lang['New_posts_hot'] = "ÓÐÐÂÌû [ ÈÈÃÅ ]";
$lang['No_new_posts_locked'] = "Ã»ÓÐÐÂÌû [ Ëø¶¨ ]";
$lang['New_posts_locked'] = "ÓÐÐÂÌû [ ½âËø ]";
$lang['Forum_is_locked'] = "Ëø¶¨µÄ°æÃæ";


//
// Login
//
$lang['Enter_password'] = "ÇëÊäÈëÄúµÄÓÃ»§ÃûºÍÃÜÂëµÇÂ½";
$lang['Login'] = "µÇÂ½";
$lang['Logout'] = "×¢Ïú";

$lang['Forgotten_password'] = "ÎÒÍü¼ÇÁËÃÜÂë!";

$lang['Log_me_in'] = "ä¯ÀÀÊ±×Ô¶¯µÇÂ½";

$lang['Error_login'] = "ÄúÌá¹©µÄÓÃ»§Ãû»òÃÜÂë²»ÕýÈ·";


//
// Index page
//
$lang['Index'] = "Ê×Ò³";
$lang['No_Posts'] = "Ã»ÓÐÌû×Ó";
$lang['No_forums'] = "Õâ¸ö°æÃæ»¹Ã»ÓÐÌû×Ó";

$lang['Private_Message'] = "Ë½ÈËÁôÑÔ";
$lang['Private_Messages'] = "Ë½ÈËÁôÑÔ";
$lang['Who_is_Online'] = "µ±Ç°ÔÚÏß×´Ì¬";

$lang['Mark_all_forums'] = "±ê¼ÇËùÓÐÂÛÌ³ÎªÒÑ¶Á";
$lang['Forums_marked_read'] = "ËùÓÐÂÛÌ³ÒÑ±í¼ÇÎªÒÑ¶Á";


//
// Viewforum
//
$lang['View_forum'] = "ä¯ÀÀÂÛÌ³";

$lang['Forum_not_exist'] = "ÄúÑ¡ÔñµÄÂÛÌ³²»´æÔÚ";
$lang['Reached_on_error'] = "ÄúÑ¡ÔñµÄÂÛÌ³³ö´íÁË";

$lang['Display_topics'] = "°´Ê±¼äÏÔÊ¾ÒÔÇ°µÄÌû×Ó";
$lang['All_Topics'] = "ËùÓÐµÄÌû×Ó";

$lang['Topic_Announcement'] = "<b>¹«¸æ:</b>";
$lang['Topic_Sticky'] = "<b>ÖÃ¶¥:</b>";
$lang['Topic_Moved'] = "<b>ÒÆ¶¯:</b>";
$lang['Topic_Poll'] = "<b>[ ÃñÒâµ÷²é ]</b>";

$lang['Mark_all_topics'] = "±ê¼ÇËùÓÐÌû×ÓÎªÒÑ¶Á";
$lang['Topics_marked_read'] = "Õâ¸öÂÛÌ³µÄËùÓÐÌû×ÓÒÑ±ê¼ÇÎªÒÑ¶Á";

$lang['Rules_post_can'] = "Äú<b>¿ÉÒÔ</b>·¢²¼ÐÂÖ÷Ìâ";
$lang['Rules_post_cannot'] = "Äú<b>²»ÄÜ</b>·¢²¼ÐÂÖ÷Ìâ";
$lang['Rules_reply_can'] = "Äú<b>¿ÉÒÔ</b>ÔÚÕâ¸öÂÛÌ³»Ø¸´Ö÷Ìâ";
$lang['Rules_reply_cannot'] = "Äú<b>²»ÄÜ</b>ÔÚÕâ¸öÂÛÌ³»Ø¸´Ö÷Ìâ";
$lang['Rules_edit_can'] = "Äú<b>¿ÉÒÔ</b>ÔÚÕâ¸öÂÛÌ³±à¼­×Ô¼ºµÄÌû×Ó";
$lang['Rules_edit_cannot'] = "Äú<b>²»ÄÜ</b>ÔÚÕâ¸öÂÛÌ³±à¼­×Ô¼ºµÄÌû×Ó";
$lang['Rules_delete_can'] = "Äú<b>¿ÉÒÔ</b>ÔÚÕâ¸öÂÛÌ³É¾³ý×Ô¼ºµÄÌû×Ó";
$lang['Rules_delete_cannot'] = "Äú<b>²»ÄÜ</b>ÔÚÕâ¸öÂÛÌ³É¾³ý×Ô¼ºµÄÌû×Ó";
$lang['Rules_vote_can'] = "Äú<b>¿ÉÒÔ</b>ÔÚÕâ¸öÂÛÌ³·¢±íÃñÒâµ÷²é";
$lang['Rules_vote_cannot'] = "Äú<b>²»ÄÜ</b>ÔÚÕâ¸öÂÛÌ³·¢±íÃñÒâµ÷²é";
$lang['Rules_moderate'] = "Äú<b>¿ÉÒÔ</b>%s¹ÜÀíÕâ¸öÂÛÌ³%s"; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = "Õâ¸öÂÛÌ³Àï»¹Ã»ÓÐÌû×Ó<br />µã»÷<b>·¢±íÐÂÌû</b>·¢±íÒ»¸öÌû×Ó";


//
// Viewtopic
//
$lang['View_topic'] = "ÔÄ¶ÁÖ÷Ìâ";

$lang['Guest'] = 'ÓÎ¿Í';
$lang['Post_subject'] = "·¢±íÖ÷Ìâ";
$lang['View_next_topic'] = "ÔÄ¶ÁÏÂÒ»¸öÖ÷Ìâ";
$lang['View_previous_topic'] = "ÔÄ¶ÁÉÏÒ»¸öÖ÷Ìâ";
$lang['Submit_vote'] = "·¢±íÃñÒâµ÷²é";
$lang['View_results'] = "ä¯ÀÀ½á¹û";

$lang['No_newer_topics'] = "Õâ¸öÂÛÌ³Ã»ÓÐ¸üÐÂµÄÖ÷Ìâ";
$lang['No_older_topics'] = "Õâ¸öÂÛÌ³Ã»ÓÐ¸ü¾ÉµÄÖ÷Ìâ";
$lang['Topic_post_not_exist'] = "ÄúÑ¡ÔñµÄÖ÷Ìâ²»´æÔÚ";
$lang['No_posts_topic'] = "Õâ¸öÖ÷ÌâÀïÃ»ÓÐÌû×Ó";

$lang['Display_posts'] = "´ÓÒÔÇ°µÄÌû×Ó¿ªÊ¼ÏÔÊ¾";
$lang['All_Posts'] = "ËùÓÐÌû×Ó";
$lang['Newest_First'] = "×îÐÂµÄÌû×Ó";
$lang['Oldest_First'] = "×î¾ÉµÄÌû×Ó";

$lang['Back_to_top'] = "·µ»ØÒ³Ê×";

$lang['Read_profile'] = "ÔÄÀÀ³ÉÔ±×ÊÁÏ (Profile)";
$lang['Send_email'] = "¸ø³ÉÔ±·¢µç×ÓÓÊ¼þ";
$lang['Visit_website'] = "ä¯ÀÀ·¢±íÕßµÄÖ÷Ò³";
$lang['ICQ_status'] = "ICQ ×´Ì¬";
$lang['Edit_delete_post'] = "±à¼­/É¾³ýÌû×Ó";
$lang['View_IP'] = "ä¯ÀÀ·¢±íÕßµÄIPµØÖ·";
$lang['Delete_post'] = "É¾³ýÕâ¸öÌû×Ó";

$lang['wrote'] = "Ð´µ½"; // proceeds the username and is followed by the quoted text
$lang['Quote'] = "ÒýÓÃ"; // comes before bbcode quote output.
$lang['Code'] = "´úÂë"; // comes before bbcode code output.

$lang['Edited_time_total'] = "×îºó½øÐÐ±à¼­µÄÊÇ %s on %s, ×Ü¼ÆµÚ %d ´Î±à¼­"; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = "×îºó½øÐÐ±à¼­µÄÊÇ %s on %s, ×Ü¼ÆµÚ %d ´Î±à¼­"; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = "Ëø¶¨±¾Ìû";
$lang['Unlock_topic'] = "½âËø±¾Ìû";
$lang['Move_topic'] = "ÒÆ¶¯±¾Ìû";
$lang['Delete_topic'] = "É¾³ý±¾Ìû";
$lang['Split_topic'] = "·Ö¸î±¾Ìû";

$lang['Stop_watching_topic'] = "Í£Ö¹¶©ÔÄ±¾Ö÷Ìâ";
$lang['Start_watching_topic'] = "¶©ÔÄ±¾Ö÷Ìâ";
$lang['No_longer_watching'] = "Äú²»ÔÙ¶©ÔÄ±¾Ö÷Ìâ";
$lang['You_are_watching'] = "ÄúÒÑ¶©ÔÄÁË±¾Ö÷Ìâ";

$lang['Total_votes'] = "Í¶Æ±¹²¼Æ";

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = "Ìû×ÓÄÚÈÝ";
$lang['Topic_review'] = "Ô¤ÀÀÖ÷Ìâ";

$lang['No_post_mode'] = "No post mode specified"; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = "·¢±íÐÂÌû";
$lang['Post_a_reply'] = "·¢±í»Ø¸´";
$lang['Post_topic_as'] = "ÀàÐÍ";
$lang['Edit_Post'] = "±à¼­Ìû×Ó";
$lang['Options'] = "Ñ¡Ïî";

$lang['Post_Announcement'] = "¹«¸æ";
$lang['Post_Sticky'] = "ÖÃ¶¥";
$lang['Post_Normal'] = "ÆÕÍ¨";

$lang['Confirm_delete'] = "ÄúÈ·¶¨ÒªÉ¾³ýÕâ¸öÖ÷ÌâÂð?";
$lang['Confirm_delete_poll'] = "ÄúÈ·¶¨ÒªÉ¾³ýÕâ¸öÃñÒâµ÷²éÂð?";

$lang['Flood_Error'] = "Äú²»ÄÜÔÚ·¢ÌûºóÂíÉÏ·¢±íÐÂÌû£¬Çë¹ýÒ»»áÔÙÊÔ.";
$lang['Empty_subject'] = "Äú·¢±íµÄÌû×Ó±ØÐëÓÐÒ»¸öÖ÷Ìâ.";
$lang['Empty_message'] = "Äú·¢±íµÄÌû×Ó±ØÐëÓÐÄÚÈÝ.";
$lang['Forum_locked'] = "Õâ¸öÂÛÌ³ÒÑ¾­±»Ëø¶¨,Äú²»ÄÜ·¢±í,»Ø¸´»òÕß±à¼­Ìû×Ó.";
$lang['Topic_locked'] = "Õâ¸öÂÛÌâÒÑ¾­±»Ëø¶¨,Äú²»ÄÜ·¢±í,»Ø¸´»òÕß±à¼­Ìû×Ó.";
$lang['No_post_id'] = "ÇëÑ¡ÔñÄúÒª±à¼­µÄÖ÷Ìâ";
$lang['No_topic_id'] = "ÇëÑ¡ÔñÄúÒª»Ø¸´µÄÖ÷Ìâ";
$lang['No_valid_mode'] = "ÄúÖ»¿ÉÒÔÑ¡Ôñ·¢±í,»Ø¸´»òÕßÒýÓÃÌû×Ó,ÇëºóÍËÖØÊÔ.";
$lang['No_such_post'] = "Ã»ÓÐÕâ¸öÌû×Ó,ÇëºóÍËÖØÊÔ.";
$lang['Edit_own_posts'] = "¶Ô²»ÆðÄúÖ»¿ÉÒÔ±à¼­×Ô¼ºµÄÌû×Ó.";
$lang['Delete_own_posts'] = "¶Ô²»ÆðÄúÖ»¿ÉÒÔÉ¾³ý×Ô¼ºµÄÌû×Ó.";
$lang['Cannot_delete_replied'] = "¶Ô²»ÆðÄú¿ÉÄÜ²»¿ÉÒÔÉ¾³ýÒÑ¾­±»»Ø¸´µÄÌû×Ó.";
$lang['Cannot_delete_poll'] = "¶Ô²»ÆðÄú²»¿ÉÒÔÉ¾³ýÕý´¦ÓÚ»î¶¯×´Ì¬µÄÃñÒâµ÷²é.";
$lang['Empty_poll_title'] = "Äú±ØÐë¸øÄú·¢±íµÄÃñÒâµ÷²é½¨Á¢Ò»¸öÖ÷Ìâ.";
$lang['To_few_poll_options'] = "Äú±ØÐëÒª½¨Á¢ÖÁÉÙÁ½¸öÃñÒâµ÷²éµÄÑ¡Ïî.";
$lang['To_many_poll_options'] = "ÄúÑ¡Ôñ½¨Á¢Ì«¶àµÄÃñÒâµ÷²éµÄÑ¡Ïî";
$lang['Post_has_no_poll'] = "Õâ¸öÖ÷ÌâÃ»ÓÐ½¨Á¢ÃñÒâµ÷²é";
$lang['Already_voted'] = 'ÄãÒÑ¾­ÔÚÕâÀïÍ¶¹ýÆ±ÁË.';
$lang['No_vote_option'] = 'Äã±ØÐëÑ¡ÔñÒ»¸öÏîÄ¿.';

$lang['Add_poll'] = "½¨Á¢Ò»¸öÃñÒâµ÷²é";
$lang['Add_poll_explain'] = "Èç¹ûÄú²»Ïë½¨Á¢ÃñÒâµ÷²éÇë²»ÒªÌîÐ´Õâ¸öÑ¡Ïî.";
$lang['Poll_question'] = "ÃñÒâµ÷²éÖ÷Ìâ";
$lang['Poll_option'] = "ÃñÒâµ÷²éÑ¡Ïî";
$lang['Add_option'] = "½¨Á¢Ñ¡Ïî";
$lang['Update'] = "¸üÐÂ";
$lang['Delete'] = "É¾³ý";
$lang['Poll_for'] = "ÃñÒâµ÷²éÆÚÏÞ";
$lang['Days'] = "ÌìÄÚ"; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = "[ Ñ¡Ôñ 0 »òÕß²»Ñ¡ÔñÕâ¸öÑ¡Ïî´ú±íÓÀÔ¶ÔËÐÐÃñÒâµ÷²é ]";
$lang['Delete_poll'] = "É¾³ýÃñÒâµ÷²é";

$lang['Disable_HTML_post'] = "ÔÚÕâ¸öÌû×ÓÀï½ûÖ¹HTMLÓïÑÔ";
$lang['Disable_BBCode_post'] = "ÔÚÕâ¸öÌû×ÓÀï½ûÖ¹BBCode";
$lang['Disable_Smilies_post'] = "ÔÚÕâ¸öÌû×ÓÀï½ûÖ¹±íÇé·ûºÅ";

$lang['HTML_is_ON'] = "HTML is <u>ON</u>";
$lang['HTML_is_OFF'] = "HTML is <u>OFF</u>";
$lang['BBCode_is_ON'] = "%sBBCode%s is <u>ON</u>"; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = "%sBBCode%s is <u>OFF</u>";
$lang['Smilies_are_ON'] = "Smilies are <u>ON</u>";
$lang['Smilies_are_OFF'] = "Smilies are <u>OFF</u>";

$lang['Attach_signature'] = "¸öÈËÇ©Ãû (ÄúµÄ¸öÈËÇ©Ãû¿ÉÒÔÔÚ¸öÈË×ÊÁÏÀï¸ü¸Ä)";
$lang['Notify'] = "ÓÐÈË»Ø¸´Ê±·¢ËÍµç×ÓÓÊ¼þÍ¨Öª";
$lang['Delete_post'] = "É¾³ýÕâ¸öÖ÷Ìâ";

$lang['Stored'] = "ÄúµÄÌû×ÓÒÑ¾­³É¹¦µÄ´¢´æ";
$lang['Deleted'] = "ÄúµÄÌû×ÓÒÑ¾­³É¹¦µÄ±»É¾³ý";
$lang['Poll_delete'] = "Äú½¨Á¢µÄÃñÒâµ÷²éÒÑ¾­³É¹¦µÄ±»É¾³ý";
$lang['Vote_cast'] = "ÄúµÄÑ¡Æ±ÒÑ¾­Í¶³ö";

$lang['Topic_reply_notification'] = "»ØÌûÍ¨Öª";

$lang['bbcode_b_help'] = "´ÖÌå: [b]text[/b]  (alt+b)";
$lang['bbcode_i_help'] = "´óÐ´: [i]text[/i]  (alt+i)";
$lang['bbcode_u_help'] = "ÏÂ»®Ïß: [u]text[/u]  (alt+u)";
$lang['bbcode_q_help'] = "ÒýÓÃÎÄ±¾: [quote]text[/quote]  (alt+q)";
$lang['bbcode_c_help'] = "ÏÔÊ¾´úÂë : [code]code[/code]  (alt+c)";
$lang['bbcode_l_help'] = "ÁÐ±í: [list]text[/list] (alt+l)";
$lang['bbcode_o_help'] = "°´ÐòÁÐ±í: [list=]text[/list]  (alt+o)";
$lang['bbcode_p_help'] = "²åÈëÍ¼Ïñ: [img]http://image_url[/img]  (alt+p)";
$lang['bbcode_w_help'] = "²åÈëÁ´½ÓÍøÖ·: [url]http://url[/url] or [url=http://url]URL text[/url]  (alt+w)";
$lang['bbcode_a_help'] = "¹Ø±ÕËùÓÐ¿ªÆôµÄbbCode±êÇ©";
$lang['bbcode_s_help'] = "×ÖÌåÑÕÉ«: [color=red]text[/color]  ÌáÊ¾: ÄúÒ²¿ÉÒÔÊ¹ÓÃÈç color=#FF0000 ÕâÑùµÄhtmlÓï¾ä";
$lang['bbcode_f_help'] = "×ÖÌå´óÐ¡: [size=x-small]small text[/size]";

$lang['Emoticons'] = "±íÇéÍ¼°¸";
$lang['More_emoticons'] = "ä¯ÀÀ¸ü¶àµÄ±íÇéÍ¼°¸";

$lang['Font_color'] = "×ÖÌåÑÕÉ«";
$lang['color_default'] = "±ê×¼";
$lang['color_dark_red'] = "Éîºì";
$lang['color_red'] = "ºìÉ«";
$lang['color_orange'] = "³ÈÉ«";
$lang['color_brown'] = "×ØÉ«";
$lang['color_yellow'] = "»ÆÉ«";
$lang['color_green'] = "ÂÌÉ«";
$lang['color_olive'] = "éÏé­";
$lang['color_cyan'] = "ÇàÉ«";
$lang['color_blue'] = "À¶É«";
$lang['color_dark_blue'] = "ÉîÀ¶";
$lang['color_indigo'] = "µåÀ¶";
$lang['color_violet'] = "×ÏÉ«";
$lang['color_white'] = "°×É«";
$lang['color_black'] = "ºÚÉ«";

$lang['Font_size'] = "×ÖÌå´óÐ¡";
$lang['font_tiny'] = "×îÐ¡";
$lang['font_small'] = "Ð¡";
$lang['font_normal'] = "Õý³£";
$lang['font_large'] = "´ó";
$lang['font_huge'] = "×î´ó";

$lang['Close_Tags'] = "Íê³É±êÇ©";
$lang['Styles_tip'] = "ÌáÊ¾: ÎÄ×Ö·ç¸ñ¿ÉÒÔ¿ìËÙÊ¹ÓÃÔÚÑ¡ÔñµÄÎÄ×ÖÉÏ";


//
// Private Messaging
//
$lang['Private_Messaging'] = "Ë½ÈËÁôÑÔ";

$lang['Login_check_pm'] = "µÇÂ½²é¿´ÄúµÄË½ÈËÁôÑÔ";
$lang['New_pms'] = "ÄúÓÐ %d ·âÐÂµÄÁôÑÔ"; // You have 2 new messages
$lang['New_pm'] = "ÄúÓÐ %d ·âÐÂµÄÁôÑÔ"; // You have 1 new message
$lang['No_new_pm'] = "ÄúÃ»ÓÐÐÂµÄÁôÑÔ";
$lang['Unread_pms'] = "ÄúÓÐ %d ·âÎ´¶ÁµÄÁôÑÔ";
$lang['Unread_pm'] = "ÄúÓÐ %d ·âÎ´¶ÁµÄÁôÑÔ";
$lang['No_unread_pm'] = "ÄúÃ»ÓÐÎ´¶ÁµÄÁôÑÔ";
$lang['You_new_pm'] = "Ò»·âÐÂµÄÁôÑÔÔÚÄúµÄÊÕ¼þ¼ÐÀï";
$lang['You_new_pms'] = "¼¸·âÐÂµÄÁôÑÔÔÚÄúµÄÊÕ¼þ¼ÐÀï";
$lang['You_no_new_pm'] = "Ã»ÓÐÐÂµÄÁôÑÔ";

$lang['Unread_message'] = 'Î´¶ÁÁôÑÔ';
$lang['Read_message'] = 'ÒÑ¶ÁÁôÑÔ';

$lang['Read_pm'] = '²é¿´Ë½ÈËÁôÑÔ';
$lang['Post_new_pm'] = '·¢ËÍË½ÈËÁôÑÔ';
$lang['Post_reply_pm'] = '»Ø¸´ÁôÑÔ';
$lang['Post_quote_pm'] = 'ÒýÓÃÁôÑÔ';
$lang['Edit_pm'] = '±à¼­Ë½ÈËÁôÑÔ';

$lang['Inbox'] = "ÊÕ¼þ¼Ð";
$lang['Outbox'] = "·¢¼þ¼Ð";
$lang['Savebox'] = "ÊÕ²Ø¼Ð";
$lang['Sentbox'] = "ÒÑ·¢ËÍµÄÐÅ¼þ¼Ð";
$lang['Flag'] = "×´Ì¬";
$lang['Subject'] = "Ö÷Ìâ";
$lang['From'] = "À´×Ô";
$lang['To'] = "·¢ËÍÖÁ";
$lang['Date'] = "ÈÕÆÚ";
$lang['Mark'] = "Ñ¡Ôñ";
$lang['Sent'] = "·¢ËÍ";
$lang['Saved'] = "ÒÑ±£´æµ½ÊÕ²Ø¼Ð";
$lang['Delete_marked'] = "É¾³ýÒÑÑ¡ÔñµÄÁôÑÔ";
$lang['Delete_all'] = "É¾³ýËùÓÐµÄÁôÑÔ";
$lang['Save_marked'] = "±£´æÒÑÑ¡ÔñµÄÁôÑÔµ½ÊÕ²Ø¼Ð";
$lang['Save_message'] = "±£´æÁôÑÔµ½ÊÕ²Ø¼Ð";
$lang['Delete_message'] = "É¾³ýÁôÑÔ";

$lang['Display_messages'] = "ÏÔÊ¾ÒÔÇ°µÄÌû×Ó"; // Followed by number of days/weeks/months
$lang['All_Messages'] = "ËùÓÐµÄÁôÑÔ";

$lang['No_messages_folder'] = "Õâ¸öÎÄ¼þ¼ÐÀïÃ»ÓÐÐÅ¼þ";

$lang['PM_disabled'] = "Õâ¸öÂÛÌ³µÄË½ÈËÁôÑÔÒÑ¾­±»½ûÓÃ";
$lang['Cannot_send_privmsg'] = "¶Ô²»ÆðÂÛÌ³¹ÜÀíÔ±ÒÑ¾­½ûÖ¹Äú·¢ËÍË½ÈËÁôÑÔ";
$lang['No_to_user'] = "Äú±ØÐëÖ¸¶¨Ë½ÈËÁôÑÔ·¢ËÍµÄ¶ÔÏó";
$lang['No_such_user'] = "¶Ô²»ÆðÕâ¸öÓÃ»§²»´æÔÚ";

$lang['Disable_HTML_pm'] = "ÔÚÕâ¸öÐÅ¼þÀï½ûÖ¹HTMLÓïÑÔ";
$lang['Disable_BBCode_pm'] = "ÔÚÕâ¸öÐÅ¼þÀï½ûÖ¹BBCode";
$lang['Disable_Smilies_pm'] = "ÔÚÕâ¸öÐÅ¼þÀï½ûÖ¹±íÇé·ûºÅ";

$lang['Message_sent'] = "ÄúµÄË½ÈËÁôÑÔ·¢ËÍ³É¹¦";

$lang['Click_return_inbox'] = "µã»÷ %sÕâÀï%s ·µ»ØÄúµÄÊÕ¼þ¼Ð";
$lang['Click_return_index'] = "µã»÷ %sÕâÀï%s ·µ»ØÊ×Ò³";

$lang['Send_a_new_message'] = "·¢ËÍÒ»¸öÐÂµÄË½ÈËÁôÑÔ";
$lang['Send_a_reply'] = "»Ø¸´ÁôÑÔ";
$lang['Edit_message'] = "±à¼­ÁôÑÔ";

$lang['Notification_subject'] = "ÐÂµÄË½ÈËÁôÑÔ";

$lang['Find_username'] = "²éÕÒÒ»¸öÓÃ»§";
$lang['Find'] = "²éÕÒ";
$lang['No_match'] = "ÕÒ²»µ½Æ¥ÅäµÄÓÃ»§";

$lang['No_post_id'] = "Ã»ÓÐÖ¸¶¨Ö÷Ìâ";
$lang['No_such_folder'] = "Ã»ÓÐÕâÑùµÄÎÄ¼þ¼Ð´æÔÚ";
$lang['No_folder'] = "Ã»ÓÐÖ¸¶¨ÎÄ¼þ¼Ð";

$lang['Mark_all'] = "Ñ¡ÔñËùÓÐÐÅ¼þ";
$lang['Unmark_all'] = "È¡ÏûËùÓÐÑ¡Ôñ";

$lang['Confirm_delete_pm'] = "ÄúÈ·¶¨ÒªÉ¾³ýÕâ·âÁôÑÔÂð?";
$lang['Confirm_delete_pms'] = "ÄúÈ·¶¨ÒªÉ¾³ýÕâÐ©ÁôÑÔÂð?";

$lang['Inbox_size'] = "ÄúµÄÊÕ¼þ¼ÐÒÑÊ¹ÓÃ %d%%"; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = "ÄúµÄÒÑ·¢ËÍÎÄ¼þ¼ÐÒÑÊ¹ÓÃ %d%%";
$lang['Savebox_size'] = "ÄúµÄÊÕ²Ø¼ÐÒÑÊ¹ÓÃ %d%%";

$lang['Click_view_privmsg'] = "µã»÷%sÕâÀï%sä¯ÀÀÄúµÄÊÕ¼þ¼Ð";


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = "¸öÈË×ÊÁÏ :: %s"; // %s is username
$lang['About_user'] = "¹ØÓÚ %s"; // %s is username

$lang['Preferences'] = "Ñ¡Ïî";
$lang['Items_required'] = "´ø*µÄÏîÄ¿ÊÇ±ØÐëÌîÐ´µÄ";
$lang['Registration_info'] = "×¢²áÐÅÏ¢";
$lang['Profile_info'] = "¸öÈË×ÊÁÏ";
$lang['Profile_info_warn'] = "ÒÔÏÂÐÅÏ¢½«±»¹«¿ª";
$lang['Avatar_panel'] = "Í·Ïñ¿ØÖÆÃæ°å";
$lang['Avatar_gallery'] = "Í·Ïñ»­¼¯";

$lang['Website'] = "Ö÷Ò³";
$lang['Location'] = "À´×Ô";
$lang['Contact'] = "ÁªÂç";
$lang['Email_address'] = "Email µØÖ·";
$lang['Email'] = "Email";
$lang['Send_private_message'] = "·¢ËÍË½ÈËÁôÑÔ (PM)";
$lang['Hidden_email'] = "[ Òþ²Ø ]";
$lang['Search_user_posts'] = "²éÕÒÕâÎ»ÓÃ»§·¢±íµÄÌû×Ó";
$lang['Interests'] = "ÐËÈ¤";
$lang['Occupation'] = "Ö°Òµ";
$lang['Poster_rank'] = "ÓÃ»§¼¶±ð";

$lang['Total_posts'] = "·¢Ìû×Ü¼Æ";
$lang['User_post_pct_stats'] = "×Ü·¢ÌûÁ¿µÄ%.2f%%"; // 1.25% of total
$lang['User_post_day_stats'] = "Æ½¾ùÃ¿Ìì%.2f·âÌû×Ó"; // 1.5 posts per day
$lang['Search_user_posts'] = "²éÕÒ%s·¢±íµÄËùÓÐÌû×Ó"; // Find all posts by username

$lang['No_user_id_specified'] = "¶Ô²»ÆðÕâ¸öÓÃ»§²»´æÔÚ";
$lang['Wrong_Profile'] = "Äú²»¿ÉÒÔ±à¼­È¥ËûÓÃ»§µÄ¸öÈË×ÊÁÏ";

$lang['Only_one_avatar'] = "ÄúÖ»ÄÜÑ¡ÔñÒ»¸öÍ·Ïñ";
$lang['File_no_data'] = "ÄúÌá¹©µÄÁ¬½ÓµØÖ·²»´æÔÚÊý¾Ý";
$lang['No_connection_URL'] = "ÎÞ·¨Á¬½ÓÄúÌá¹©µÄÁ¬½ÓµØÖ·";
$lang['Incomplete_URL'] = "ÄúÌá¹©µÄÁ¬½ÓµØÖ·²»ÍêÕû";
$lang['Wrong_remote_avatar_format'] = "ÄúÌá¹©µÄÍ·ÏñÁ¬½ÓµØÖ·ÎÞÐ§";
$lang['No_send_account_inactive'] = "¶Ô²»ÆðÎÞ·¨ÕÒ»ØÄúµÄÃÜÂëÒòÎªÄúµÄÕË»§ÏÖÔÚ²»ÔÚ»î¶¯×´Ì¬,ÇëÁªÂçÂÛÌ³¹ÜÀíÔ±µÃµ½¸ü¶àµÄÐÅÏ¢.";

$lang['Always_smile'] = "Ê¹ÓÃ±íÇé·ûºÅ";
$lang['Always_html'] = "Ê¹ÓÃ HTML";
$lang['Always_bbcode'] = "Ê¹ÓÃ BBCode";
$lang['Always_add_sig'] = "Ìû×ÓÀï¸½ÉÏÄúµÄ¸öÈËÇ©Ãû";
$lang['Always_notify'] = "Ö÷Ìâ»Ø¸´Í¨Öª";
$lang['Always_notify_explain'] = "µ±ÓÐÈË»Ø¸´ÄúµÄÌû×ÓÊ±·¢ËÍÒ»·âµç×ÓÓÊ¼þÍ¨ÖªÄú.Õâ¸öÑ¡ÏîÒ²¿ÉÒÔÔÚÄú·¢ÌûÊ±¸ü¸Ä";

$lang['Board_style'] = "ÂÛÌ³·ç¸ñ";
$lang['Board_lang'] = "ÂÛÌ³ÓïÑÔ";
$lang['No_themes'] = "Êý¾Ý¿âÀïÃ»ÓÐ×°ÊÎÖ÷Ìâ";
$lang['Timezone'] = "Ê±Çø";
$lang['Date_format'] = "ÈÕÆÚ¸ñÊ½";
$lang['Date_format_explain'] = "ÈÕÆÚ¸ñÊ½µÄÓï·¨ºÍ PHP <a href=\"http://www.php.net/date\" target=\"_other\">date() Óï¾ä</a>ÍêÈ«ÏàÍ¬";
$lang['Signature'] = "¸öÈËÇ©Ãû";
$lang['Signature_explain'] = "ÄúÌîÐ´µÄ¸öÈËÇ©Ãû¿ÉÒÔ·¢±íÔÚÄúµÄÌû×ÓÏÂ·½.¸öÈËÇ©ÃûÓÐ%d¸ö×Ö·ûµÄÏÞÖÆ";
$lang['Public_view_email'] = "ÏÔÊ¾ÄúµÄµç×ÓÓÊ¼þµØÖ·";

$lang['Current_password'] = "ÏÖÔÚµÄÃÜÂë";
$lang['New_password'] = "ÐÂµÄÃÜÂë";
$lang['Confirm_password'] = "È·ÈÏÐÂÃÜÂë";
$lang['Confirm_password_explain'] = "µ±ÄúÏ£Íû¸Ä±äÃÜÂë»òÊÇÄúµÄµç×ÓÓÊ¼þµØÖ·Ê±Äú±ØÐëÈ·ÈÏÏÖÔÚÕýÔÚÊ¹ÓÃµÄÃÜÂë";
$lang['password_if_changed'] = "Ö»ÓÐµ±ÄúÏ£Íû¸ü¸ÄÃÜÂëÊ±²ÅÐèÒªÌá¹©ÐÂµÄÃÜÂë";
$lang['password_confirm_if_changed'] = "Ö»ÓÐµ±ÄúÏ£Íû¸ü¸ÄÃÜÂëÊ±²ÅÐèÒªÈ·ÈÏÐÂµÄÃÜÂë";

$lang['Avatar'] = "Í·Ïñ";
$lang['Avatar_explain'] = "ÏÔÊ¾Ò»¸öÐ¡Í¼Æ¬ÔÚÄú·¢±íµÄÌû×ÓÅÔ,Í¬Ò»Ê±¼äÖ»ÄÜÏÔÊ¾Ò»¸öÍ¼Æ¬.Í¼Æ¬¿í¶È²»ÄÜ³¬¹ý%d ÏñËØ, ¸ß¶È²»ÄÜ³¬¹ý%d ÏñËØ,Í¼Æ¬´óÐ¡²»ÄÜ³¬¹ý%dkB."; $lang['Upload_Avatar_file'] = "´ÓÄúµÄ¼ÆËã»úÉÏ´«Í¼Æ¬";
$lang['Upload_Avatar_file'] = '´ÓÄãµÄµçÄÔÉÏ´«ÄãµÄÍ·Ïñ';
$lang['Upload_Avatar_URL'] = "´ÓÒ»¸öÁ¬½ÓÉÏ´«Í¼Æ¬";
$lang['Upload_Avatar_URL_explain'] = "Ìá¹©Ò»¸öÍ¼Æ¬µÄÁ´½ÓµØÖ·,Í¼Æ¬½«±»¸´ÖÆµ½±¾ÂÛÌ³.";
$lang['Pick_local_Avatar'] = "´ÓÏµÍ³Ïà²áÀïÑ¡ÔñÒ»¸öÍ·Ïñ";
$lang['Link_remote_Avatar'] = "Á´½ÓÆäËûÎ»ÖÃµÄÍ·Ïñ";
$lang['Link_remote_Avatar_explain'] = "Ìá¹©ÄúÏëÁ´½ÓÍ·ÏñµÄµØÖ·";
$lang['Avatar_URL'] = "Í¼Æ¬Á´½ÓµØÖ·";
$lang['Select_from_gallery'] = "´ÓÏµÍ³µÄÍ·ÏñÏà²áÀïÑ¡ÔñÒ»¸öÍ·Ïñ";
$lang['View_avatar_gallery'] = "ÏÔÊ¾ÏµÍ³Í·ÏñÏà²á";

$lang['Select_avatar'] = "Ñ¡ÔñÍ·Ïñ";
$lang['Return_profile'] = "È¡ÏûÑ¡ÔñÍ·Ïñ";
$lang['Select_category'] = "Ñ¡ÔñÒ»¸ö»­²á";

$lang['Delete_Image'] = "É¾³ýÍ¼Æ¬";
$lang['Current_Image'] = "ÏÖÔÚÊ¹ÓÃµÄÍ¼Æ¬";

$lang['Notify_on_privmsg'] = "µ±ÓÐÐÂµÄË½ÈËÁôÑÔÊ±·¢ËÍµç×ÓÓÊ¼þÍ¨Öª";
$lang['Popup_on_privmsg'] = "µ±ÓÐÐÂµÄË½ÈËÁôÑÔÊ±µ¯³ö´°¿ÚÍ¨Öª";
$lang['Popup_on_privmsg_explain'] = "µ±ÄúÓÐÐÂµÄË½ÈËÁôÑÔÊ±µ¯³ö´°¿ÚÀ´Í¨ÖªÄú";
$lang['Hide_user'] = "Òþ²ØÄúµÄÔÚÏß×´Ì¬";

$lang['Profile_updated'] = "ÄúµÄ¸öÈË×ÊÁÏÒÑ¾­¸üÐÂ";
$lang['Profile_updated_inactive'] = "ÄúµÄ¸öÈË×ÊÁÏÒÑ¾­¸üÐÂ,È»¶ø,Äú¸ü¸ÄÁËÕË»§×´Ì¬.ÄúµÄÕË»§ÏÖÔÚ´¦ÓÚÀä¶³×´Ì¬.²ì¿´ÄúµÄµç×ÓÓÊ¼þÀí½âÈçºÎ»Ö¸´ÄúµÄÕË»§,»òÕßÄúÐèµÈ´ýÂÛÌ³¹ÜÀíÔ±»Ö¸´ÄúµÄÕË»§»î¶¯×´Ì¬.(however you have changed vital details thus your account is now inactive. or if admin activation is require wait for the administrator to reactivate your account)";

$lang['Password_mismatch'] = "ÄúÌá¹©µÄÃÜÂë²»Æ¥Åä";
$lang['Current_password_mismatch'] = "ÄúÏÖÔÚÊ¹ÓÃµÄÃÜÂëÓë×¢²áÊ±Ìá¹©µÄ²»Æ¥Åä";
$lang['Password_long'] = "ÃÜÂë²»ÄÜ¶àÓÚ32¸ö×Ó·û";
$lang['Too_many_registers'] = 'ÄãµÇ¼ÇµÃÌ«Æµ·±. ÇëÉÔºóÔÙÊÔ.';
$lang['Username_taken'] = "¶Ô²»ÆðÄúÑ¡ÔñµÄÓÃ»§ÃûÒÑ¾­ÓÐÈËÊ¹ÓÃÁË";
$lang['Username_invalid'] = "ÄúÑ¡ÔñµÄÓÃ»§Ãû°üº¬ÁËÎÞÐ§µÄ×Ö·û,Ïñ \"";
$lang['Username_disallowed'] = "¶Ô²»ÆðÄúÑ¡ÔñµÄÓÃ»§ÃûÒÑ¾­±»½ûÓÃ";
$lang['Email_taken'] = "¶Ô²»ÆðÄúÌá¹©µÄµç×ÓÓÊ¼þµØÖ·ÒÑ¾­±»Ä³¸öÓÃ»§×¢²áÁË";
$lang['Email_banned'] = "¶Ô²»ÆðÄúÌá¹©µÄµç×ÓÓÊ¼þµØÖ·ÒÑ¾­±»½ûÓÃ";
$lang['Email_invalid'] = "¶Ô²»ÆðÄúÌá¹©µÄµç×ÓÓÊ¼þµØÖ·²»ÕýÈ·";
$lang['Signature_too_long'] = "ÄúµÄ¸öÈËÇ©ÃûÌ«³¤ÁË";
$lang['Fields_empty'] = "Äú±ØÐëÌîÐ´±ØÐëÌîÐ´µÄÏîÄ¿(*)";
$lang['Avatar_filetype'] = "Í·ÏñÍ¼Æ¬µÄÀàÐÍ±ØÐëÊÇ .jpg, .gif or .png";
$lang['Avatar_filesize'] = "Í·ÏñÍ¼Æ¬µÄ´óÐ¡±ØÐëÐ¡ÓÚ %d kB"; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = "Í·ÏñÍ¼Æ¬µÄ¿í¶È±ØÐëÐ¡ÓÚ %d ÏñËØ ¶øÇÒ¸ß¶È±ØÐëÐ¡ÓÚ %d ÏñËØ";

$lang['Welcome_subject'] = "»¶Ó­Äú·ÃÎÊ %s ÂÛÌ³"; // Welcome to my.com forums
$lang['New_account_subject'] = "ÐÂÓÃ»§ÕÊ»§";
$lang['Account_activated_subject'] = "ÕË»§¼¤»î";

$lang['Account_added'] = "¸ÐÐ»ÄúµÄ×¢²á,ÄúµÄÕË»§ÒÑ¾­±»½¨Á¢.ÄúÏÖÔÚ¾Í¿ÉÒÔÊ¹ÓÃÄúµÄÓÃ»§ÃûºÍÃÜÂëµÇÂ½";
$lang['Account_inactive'] = "¸ÐÐ»ÄúµÄ×¢²á,ÄúµÄÕË»§ÒÑ¾­±»½¨Á¢.±¾ÂÛÌ³ÐèÒª¼¤»îÕË»§.Çë²é¿´ÄúµÄµç×ÓÓÊ¼þÁË½â¼¤»îµÄÐÅÏ¢.";
$lang['Account_inactive_admin'] = "¸ÐÐ»ÄúµÄ×¢²á,ÄúµÄÕË»§ÒÑ¾­±»½¨Á¢.µ«ÊÇ±¾ÂÛÌ³ÐèÒªÂÛÌ³¹ÜÀíÔ±¼¤»îÕË»§. Ò»·âµç×ÓÓÊ¼þÒÑ¾­±»·¢ËÍµ½¹ÜÀíÔ±,ÄúµÄÕË»§±»¼¤»îÊ±Äú½«ÊÕµ½Í¨Öª.";
$lang['Account_active'] = "¸ÐÐ»ÄúµÄ×¢²á,ÄúµÄÕË»§ÒÑ¾­±»½¨Á¢.";
$lang['Account_active_admin'] = "ÕË»§ÏÖÔÚÒÑ¾­±»³É¹¦¼¤»î";
$lang['Reactivate'] = "ÖØÐÂ¼¤»îÄúµÄÕË»§!";
$lang['Already_activated'] = 'ÄãµÄÕÊºÅÒÑ¾­¼¤»î';
$lang['COPPA'] = "ÄúµÄÕË»§ÒÑ¾­±»½¨Á¢µ«ÊÇÐèÒª±»Åú×¼,Çë²é¿´ÄúµÄµç×ÓÓÊ¼þÁË½âÏ¸½Ú.";

$lang['Registration'] = "×¢²á·þÎñÌõ¿î";
$lang['Reg_agreement'] = "¾¡¹ÜÂÛÌ³¹ÜÀí³ÉÔ±»á¾¡¿ÉÄÜ¾¡¿ìÉ¾³ý»ò±à¼­ÓÐÕùÒé»òÊÇ²»½¡¿µµÄÌû×Ó,µ«ÊÇËûÃÇ²»¿ÉÄÜÔÄ¶ÁËùÓÐµÄÌû×ÓÄÚÈÝ.Òò´ËÄúÒò¸Ã³ÐÈÏÕâ¸öÂÛÌ³ÉÏËùÓÐµÄÖ÷ÌâÖ»ÓÉËüµÄ·¢±íÕß³Ðµ£ÔðÈÎ,¶ø²»ÊÇÂÛÌ³µÄ¹ÜÀí³ÉÔ±ÃÇ(³ý·ÇÊÇÓÉËûÃÇ·¢±íµÄ).<br /><br />Äú±ØÐèÍ¬Òâ²»·¢±í´øÓÐÈèÂî,Òù»à,´ÖË×,·Ì°ù,´øÓÐ³ðºÞÐÔ,¿ÖÏÅµÄ,²»½¡¿µµÄ»òÊÇÈÎºÎÎ¥·´·¨ÂÉµÄÄÚÈÝ. Èç¹ûÄúÕâÑù×ö½«µ¼ÖÂÄúµÄÕË»§½«Á¢¼´ºÍÓÀ¾ÃÐÔµÄ±»·âËø.(ÄúµÄÍøÂç·þÎñÌá¹©ÉÌÒ²»á±»Í¨Öª). ÔÚÕâ¸öÇé¿öÏÂ,Õâ¸öIPµØÖ·µÄËùÓÐÓÃ»§¶¼½«±»¼ÇÂ¼.Äú±ØÐëÍ¬ÒâÏµÍ³¹ÜÀí³ÉÔ±ÃÇÓÐÔÚÈÎºÎÊ±¼äÉ¾³ý,ÐÞ¸Ä,ÒÆ¶¯»ò¹Ø±ÕÈÎºÎÖ÷ÌâµÄÈ¨Á¦. ×÷ÎªÒ»¸öÊ¹ÓÃÕß, Äú±ØÐëÍ¬ÒâÄúËùÌá¹©µÄÈÎºÎ×ÊÁÏ¶¼½«±»´æÈëÊý¾Ý¿âÖÐ,ÕâÐ©×ÊÁÏ³ý·ÇÓÐÄúµÄÍ¬Òâ,ÏµÍ³¹ÜÀíÔ±ÃÇ¾ø²»»á¶ÔµÚÈý·½¹«¿ª,È»¶øÎÒÃÇ²»ÄÜ±£Ö¤ÈÎºÎ¿ÉÄÜµ¼ÖÂ×ÊÁÏÐ¹Â¶µÄº§¿ÍÈëÇÖÐÐÎª.<br /><br />Õâ¸öÌÖÂÛÇøÏµÍ³Ê¹ÓÃcookieÀ´´¢´æÄúµÄ¸öÈËÐÅÏ¢(ÔÚÄúÊ¹ÓÃµÄ±¾µØ¼ÆËã»ú), ÕâÐ©cookie²»°üº¬ÈÎºÎÄúÔø¾­ÊäÈë¹ýµÄÐÅÏ¢,ËüÃÇÖ»ÎªÁË·½±ãÄúÄÜ¸ü·½±ãµÄä¯ÀÀ. µç×ÓÓÊ¼þµØÖ·Ö»ÓÃÀ´È·ÈÏÄúµÄ×¢²áºÍ·¢ËÍÃÜÂëÊ¹ÓÃ.(Èç¹ûÄúÍü¼ÇÁËÃÜÂë,½«»á·¢ËÍÐÂÃÜÂëµÄµØÖ·)<br /><br />µã»÷ÏÂÃæµÄÁ´½Ó´ú±íÄúÍ¬ÒâÊÜµ½ÕâÐ©·þÎñÌõ¿îµÄÔ¼Êø.";

$lang['Agree_under_13'] = "ÎÒÍ¬Òâ²¢ÇÒÎÒ<b>Ð¡ÓÚ</b>13Ëê";
$lang['Agree_over_13'] = "ÎÒÍ¬Òâ²¢ÇÒÎÒ<b>´óÓÚ</b>13Ëê";
$lang['Agree_not'] = "ÎÒ²»Í¬Òâ";

$lang['Wrong_activation'] = "ÄúÌá¹©µÄ¼¤»îÃÜÂëºÍÊý¾Ý¿âÖÐµÄ²»Æ¥Åä";
$lang['Send_password'] = "·¢ËÍÒ»¸öÐÂµÄ¼¤»îÃÜÂë¸øÎÒ";
$lang['Password_updated'] = "Äú¸öÐÂµÄ¼¤»îÃÜÂëÒÑ¾­±»½¨Á¢,Çë²é¿´ÄúµÄµç×ÓÓÊ¼þÁË½â¼¤»îÏ¸½Ú";
$lang['No_email_match'] = "ÄúÌá¹©µÄµç×ÓÓÊ¼þµØÖ·ºÍÊý¾Ý¿âÖÐµÄ²»Æ¥Åä";
$lang['New_password_activation'] = "ÐÂÃÜÂë¼¤»î";
$lang['Password_activated'] = "ÄúµÄÕË»§ÒÑ¾­±»ÖØÐÂ¼¤»î.ÇëÊ¹ÓÃÄúÊÕµ½µÄµç×ÓÓÊ¼þÖÐµÄÃÜÂëµÇÂ½";

$lang['Send_email_msg'] = "·¢ËÍÒ»·âµç×ÓÓÊ¼þ";
$lang['No_user_specified'] = "Ã»ÓÐÑ¡ÔñÓÃ»§";
$lang['User_prevent_email'] = "ÕâÃûÓÃ»§²»Ï£ÍûÊÕµ½µç×ÓÓÊ¼þ,Äú¿ÉÒÔ·¢ËÍË½ÈËÁôÑÔ (PM)¸øÕâÃûÓÃ»§";
$lang['User_not_exist'] = "ÓÐ»§²»´æÔÚ";
$lang['CC_email'] = "¸´ÖÆÕâ·âµç×ÓÓÊ¼þ·¢ËÍ¸ø×Ô¼º";
$lang['Email_message_desc'] = "Õâ·âÓÊ¼þ½«±»ÒÔ´¿ÎÄ±¾¸ñÊ½·¢ËÍ,Çë²»Òª°üº¬ÈÎºÎ HTML »òÕß BBCode.ÕâÆªÓÊ¼þµÄ»Ø¸´µØÖ·½«Ö¸ÏòÄúµÄµç×ÓÓÊ¼þµØÖ·.";
$lang['Flood_email_limit'] = "Äú²»ÄÜÏÖÔÚ·¢ËÍÆäËûµÄµç×ÓÓÊ¼þ,Çë¹ýÒ»»áÔÙÊÔ.";
$lang['Recipient'] = "ÊÕÐÅÈË";
$lang['Email_sent'] = "ÓÊ¼þÒÑ¾­±»·¢ËÍ";
$lang['Send_email'] = "·¢ËÍµç×ÓÓÊ¼þ";
$lang['Empty_subject_email'] = "Äú±ØÐë¸øµç×ÓÓÊ¼þ½¨Á¢Ò»¸öÖ÷Ìâ";
$lang['Empty_message_email'] = "Äú±ØÐë¸øµç×ÓÓÊ¼þÌîÐ´ÄÚÈÝ";


//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'ÄãÊäÈëµÄÑéÖ¤Âë²»ÕýÈ·';
$lang['Too_many_registers'] = 'ÄãÒÑ¾­³¬¹ýÁËÔÊÐíµÄ³¢ÊÔ´ÎÊýÉÏÏÞ. ÇëÉÔºóÔÙÊÔ.';
$lang['Confirm_code_impaired'] = '¼ÙÈçÄãÓÐÊÓ¾õÕÏ°­, »òÕßÎÞ·¨¿´¼ûÑéÖ¤ÂëÇëÁªÂç%sÂÛÌ³¹ÜÀíÔ±%s.';
$lang['Confirm_code'] = 'ÑéÖ¤Âë';
$lang['Confirm_code_explain'] = 'ÍêÕûÊäÈëÄã¿´¼ûµÄÑéÖ¤Âë. ÑéÖ¤ÂëÊÇ´óÐ¡Ð´ÓÐ±ðµÄ, Êý×Ö "Áã" µÄÖÐ¼ä»áÓÐÒ»Ð±Ïß.';



//
// Memberslist
//
$lang['Select_sort_method'] = "ÇëÑ¡ÔñÒ»ÖÖÅÅÐò·½·¨";
$lang['Sort'] = "ÅÅÁÐ";
$lang['Sort_Top_Ten'] = "»îÔ¾Ç°Ê®";
$lang['Sort_Joined'] = "×¢²áÈÕÆÚ";
$lang['Sort_Username'] = "ÓÃ»§Ãû³Æ";
$lang['Sort_Location'] = "À´×ÔµØÇø";
$lang['Sort_Posts'] = "·¢Ìû×ÜÊý";
$lang['Sort_Email'] = "µç×ÓÓÊ¼þ";
$lang['Sort_Website'] = "¸öÈËÖ÷Ò³";
$lang['Sort_Ascending'] = "ÉýÐò";
$lang['Sort_Descending'] = "½µÐò";
$lang['Order'] = "Ë³Ðò";


//
// Group control panel
//
$lang['Group_Control_Panel'] = "³ÉÔ±×é¿ØÖÆÃæ°å";
$lang['Group_member_details'] = "³ÉÔ±×é³ÉÔ±Ï¸½Ú";
$lang['Group_member_join'] = "¼ÓÈëÒ»¸ö³ÉÔ±×é";

$lang['Group_Information'] = "³ÉÔ±×éÐÅÏ¢";
$lang['Group_name'] = "³ÉÔ±×éÃû³Æ";
$lang['Group_description'] = "³ÉÔ±×éÃèÊö";
$lang['Group_membership'] = "³ÉÔ±×é³ÉÔ±";
$lang['Group_Members'] = "³ÉÔ±×é³ÉÔ±";
$lang['Group_Moderator'] = "³ÉÔ±×éÖ÷Ï¯";
$lang['Pending_members'] = "ÉóºËÖÐµÄ³ÉÔ±";

$lang['Group_type'] = "³ÉÔ±×éÀàÐÍ";
$lang['Group_open'] = "¿ªÆô³ÉÔ±×é";
$lang['Group_closed'] = "¹Ø±Õ³ÉÔ±×é";
$lang['Group_hidden'] = "Òþ²Ø³ÉÔ±×é";

$lang['Current_memberships'] = "Ä¿Ç°ÄúËùÔÚµÄ³ÉÔ±×é";
$lang['Non_member_groups'] = "Ã»ÓÐ³ÉÔ±µÄ³ÉÔ±×é";
$lang['Memberships_pending'] = "ÄúÕýÔÚ±»ÉóºËÖÐµÄ³ÉÔ±×é";

$lang['No_groups_exist'] = "Ã»ÓÐ³ÉÔ±×é´æÔÚ";
$lang['Group_not_exist'] = "²»´æÔÚÕâ¸ö³ÉÔ±×é";

$lang['Join_group'] = "¼ÓÈë³ÉÔ±×é";
$lang['No_group_members'] = "Õâ¸ö³ÉÔ±×éÃ»ÓÐ³ÉÔ±";
$lang['Group_hidden_members'] = "Õâ¸ö³ÉÔ±×é´¦ÓÚÒþ²Ø×´Ì¬,Äú²»ÄÜ²é¿´ËüµÄ³ÉÔ±";
$lang['No_pending_group_members'] = "Õâ¸ö³ÉÔ±×é²»´æÔÚÉóºËÖÐ³ÉÔ±";
$lang["Group_joined"] = "ÄúÒÑ¾­ÉêÇë¼ÓÈëÕâ¸ö³ÉÔ±×é,<br />µ±ÄúµÄÉêÇëÍ¨¹ýÉóºËÄú½«ÊÜµ½Í¨Öª";
$lang['Group_request'] = "¼ÓÈëÕâ¸ö³ÉÔ±×éµÄÉêÇëÒÑ¾­Ìá½»";
$lang['Group_approved'] = "ÄúµÄÉêÇëÒÑ¾­±»Åú×¼ÁË";
$lang['Group_added'] = "ÄúÒÑ¾­±»¼ÓÈëÕâ¸ö³ÉÔ±×é";
$lang['Already_member_group'] = "ÄúÒÑ¾­ÊÇÕâ¸ö³ÉÔ±×éµÄ³ÉÔ±";
$lang['User_is_member_group'] = "ÓÃ»§ÒÑ¾­ÊÇÕâ¸ö³ÉÔ±×éµÄ³ÉÔ±";
$lang['Group_type_updated'] = "³É¹¦¸üÐÂ³ÉÔ±×éÀàÐÍ";

$lang['Could_not_add_user'] = "ÄúÑ¡ÔñµÄÓÃ»§²»´æÔÚ";
$lang['Could_not_anon_user'] = "Äú²»ÄÜ½«ÄäÃûÓÎ¿ÍÁÐÎª³ÉÔ±×é³ÉÔ±";

$lang['Confirm_unsub'] = "ÄúÈ·¶¨Òª´ÓÕâ¸ö³ÉÔ±×é½â³ýÉêÇëÂð?";
$lang['Confirm_unsub_pending'] = "ÄúµÄ³ÉÔ±×éÉêÇë»¹Ã»ÓÐ±»Åú×¼,ÄúÈ·¶¨Òª½â³ýÉêÇëÂð?";

$lang['Unsub_success'] = "ÄúÒÑ¾­´ÓÕâ¸ö³ÉÔ±×é½â³ýÁËÉêÇë.";

$lang['Approve_selected'] = "Ñ¡ÔñÅú×¼";
$lang['Deny_selected'] = "Ñ¡Ôñ¾Ü¾ø";
$lang['Not_logged_in'] = "¼ÓÈë³ÉÔ±×éÇ°Äú±ØÐëÊ×ÏÈµÇÂ½.";
$lang['Remove_selected'] = "Ñ¡ÔñÒÆ³ý";
$lang['Add_member'] = "Ôö¼Ó³ÉÔ±";
$lang['Not_group_moderator'] = "Äú²»ÊÇÕâ¸ö³ÉÔ±×éµÄ¹ÜÀíÔ±,ÄúÎÞ·¨Ö´ÐÐ³ÉÔ±×éµÄ¹ÜÀí¹¦ÄÜ.";

$lang['Login_to_join'] = "ÇëµÇÂ½¼ÓÈë»òÕß¹ÜÀí³ÉÔ±×é³ÉÔ±";
$lang['This_open_group'] = "ÕâÊÇÒ»¸ö¿ª·ÅµÄ³ÉÔ±×é,µã»÷ÉêÇë³ÉÔ±";
$lang['This_closed_group'] = "ÕâÊÇÒ»¸ö¹Ø±ÕµÄ³ÉÔ±×é,²»½ÓÊÜÐÂµÄ³ÉÔ±";
$lang['This_hidden_group'] = "ÕâÊÇÒ»¸öÒþ²ØµÄ³ÉÔ±×é,²»ÈÝÐí×Ô¶¯Ôö¼Ó³ÉÔ±";
$lang['Member_this_group'] = "ÄúÊÇÕâ¸ö³ÉÔ±×éµÄ³ÉÔ±";
$lang['Pending_this_group'] = "ÄúµÄÉêÇëÕýÔÚÉóºËÖÐ";
$lang['Are_group_moderator'] = "ÄúÊÇ³ÉÔ±×é¹ÜÀíÔ±";
$lang['None'] = "Ã»ÓÐ";

$lang['Subscribe'] = "ÉêÇë";
$lang['Unsubscribe'] = "½â³ýÉêÇë";
$lang['View_Information'] = "ÔÄÀÀÏ¸½Ú";


//
// Search
//
$lang['Search_query'] = "ËÑË÷Ä¿±ê";
$lang['Search_options'] = "ËÑË÷Ñ¡Ïî";

$lang['Search_keywords'] = "ËÑË÷¹Ø¼ü×Ö";
$lang['Search_keywords_explain'] = "Äú¿ÉÒÔÊ¹ÓÃ<u>AND</u>À´±ê¼ÇÄúÏ£Íû½á¹ûÀï±ØÐë³öÏÖµÄ¹Ø¼ü×Ö,»òÕßÊ¹ÓÃ<u>OR</u>À´±ê¼ÇÄúÏ£Íû½á¹ûÀï¿ÉÄÜ³öÏÖµÄ¹Ø¼ü×ÖºÍ<u>NOT</u>À´±ê¼ÇÄú²»Ï£Íû½á¹ûÀï³öÏÖµÄ¹Ø¼ü×Ö.Äú¿ÉÒÔÊ¹ÓÃÍ¨Åä·û*±ê¼ÇÅúÁ¿·ûºÏµÄ½á¹û";
$lang['Search_author'] = "ËÑË÷×÷Õß";
$lang['Search_author_explain'] = "Äú¿ÉÒÔÊ¹ÓÃÍ¨Åä·û*±ê¼ÇÅúÁ¿·ûºÏµÄ½á¹û";

$lang['Search_for_any'] = "ËÑË÷·ûºÏÄúÌá¹©µÄÈÎÒâ¹Ø¼ü×ÖµÄ×ÊÁÏ";
$lang['Search_for_all'] = "ËÑË÷·ûºÏÄúÌá¹©µÄËùÓÐ¹Ø¼ü×ÖµÄ×ÊÁÏ";
$lang['Search_title_msg'] = "ËÑË÷±êÌâºÍÄÚÈÝ";
$lang['Search_msg_only'] = "Ö»ËÑË÷ÄÚÈÝ";

$lang['Return_first'] = "ÏÔÊ¾×îÏÈµÄ"; // followed by xxx characters in a select box
$lang['characters_posts'] = "¸ö·ûºÏµÄÏîÄ¿";

$lang['Search_previous'] = "Ê±¼ä·¶Î§"; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = "ÅÅÐò·½·¨";
$lang['Sort_Time'] = "·¢±íÊ±¼ä";
$lang['Sort_Post_Subject'] = "·¢±íÖ÷Ìâ";
$lang['Sort_Topic_Title'] = "Ìû×Ó±êÌâ";
$lang['Sort_Author'] = "×÷Õß";
$lang['Sort_Forum'] = "°æÃæ";

$lang['Display_results'] = "ÏÔÊ¾½á¹ûµÄ";
$lang['All_available'] = "ËùÓÐÂÛÌ³";
$lang['No_searchable_forums'] = "ÄúÃ»ÓÐËÑË÷ËùÓÐËùÓÐÂÛÌ³µÄÈ¨ÏÞ";

$lang['No_search_match'] = "Ã»ÓÐ·ûºÏÄúÒªÇóµÄÖ÷Ìâ»òÌû×Ó";
$lang['Found_search_match'] = "ËÑË÷µ½ %d ¸ö·ûºÏµÄÄÚÈÝ"; // eg. Search found 1 match
$lang['Found_search_matches'] = "ËÑË÷µ½ %d ¸ö·ûºÏµÄÄÚÈÝ"; // eg. Search found 24 matches

$lang['Close_window'] = "¹Ø±Õ´°¿Ú";


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = "¶Ô²»ÆðÖ»ÓÐ %s ¿ÉÒÔÔÚÕâ¸öÂÛÌ³·¢±í¹«¸æ";
$lang['Sorry_auth_sticky'] = "¶Ô²»ÆðÖ»ÓÐ %s ¿ÉÒÔÔÚÕâ¸öÂÛÌ³·¢±íÖÃ¶¥";
$lang['Sorry_auth_read'] = "¶Ô²»ÆðÖ»ÓÐ %s ¿ÉÒÔÔÚÕâ¸öÂÛÌ³ä¯ÀÀÖ÷Ìâ";
$lang['Sorry_auth_post'] = "¶Ô²»ÆðÖ»ÓÐ %s ¿ÉÒÔÔÚÕâ¸öÂÛÌ³·¢±íÖ÷Ìâ";
$lang['Sorry_auth_reply'] = "¶Ô²»ÆðÖ»ÓÐ %s ¿ÉÒÔÔÚÕâ¸öÂÛÌ³»Ø¸´Ö÷Ìâ";
$lang['Sorry_auth_edit'] = "¶Ô²»ÆðÖ»ÓÐ %s ¿ÉÒÔÔÚÕâ¸öÂÛÌ³±à¼­Ö÷Ìâ";
$lang['Sorry_auth_delete'] = "¶Ô²»ÆðÖ»ÓÐ %s ¿ÉÒÔÔÚÕâ¸öÂÛÌ³É¾³ýÖ÷Ìâ";
$lang['Sorry_auth_vote'] = "¶Ô²»ÆðÖ»ÓÐ %s ¿ÉÒÔÔÚÕâ¸öÂÛÌ³·¢±íÃñÒâµ÷²é";

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = "<b>ÄäÃûÓÎ¿Í</b>";
$lang['Auth_Registered_Users'] = "<b>×¢²áÓÃ»§</b>";
$lang['Auth_Users_granted_access'] = "<b>ÌØÈ¨ÓÃ»§</b>";
$lang['Auth_Moderators'] = "<b>³¤ÀÏ</b>";
$lang['Auth_Administrators'] = "<b>¹ÜÀíÔ±</b>";

$lang['Not_Moderator'] = "Äú²»ÊÇÕâ¸öÂÛÌ³µÄ³¤ÀÏ";
$lang['Not_Authorised'] = "Ã»ÓÐÊÚÈ¨";

$lang['You_been_banned'] = "Õâ¸öÂÛÌ³ÒÑ¾­½ûÖ¹Äú·ÃÎÊ<br />ÇëÁªÂçÂÛÌ³¹ÜÀíÔ±ÁË½âÏ¸½Ú";


//
// Viewonline
//
$lang['Reg_users_zero_online'] = "ÏÖÔÚÓÐ 0 Î»×¢²áÓÐ»§ºÍ "; // There ae 5 Registered and
$lang['Reg_users_online'] = "ÏÖÔÚÓÐ %d Î»×¢²áÓÐ»§ºÍ "; // There ae 5 Registered and
$lang['Reg_user_online'] = "ÏÖÔÚÓÐ %d Î»×¢²áÓÐ»§ºÍ "; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = "0 Î»ÒþÉíÓÃ»§ºÍ"; // 6 Hidden users online
$lang['Hidden_users_online'] = "%d Î»ÒþÉíÓÃ»§ÔÚÏß"; // 6 Hidden users online
$lang['Hidden_user_online'] = "%d Î»ÒþÉíÓÃ»§ÔÚÏß"; // 6 Hidden users online
$lang['Guest_users_online'] = "ÏÖÔÚÓÐ %d Î»ÓÎ¿ÍÔÚÏß"; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = "ÏÖÔÚÓÐ 0 Î»×¢²áÓÃ»§ÔÚÏß"; // There are 10 Guest users online
$lang['Guest_user_online'] = "ÏÖÔÚÓÐ %d Î»ÓÎ¿ÍÔÚÏß"; // There is 1 Guest user online
$lang['No_users_browsing'] = "ÏÖÔÚÃ»ÓÐÓÃ»§ÔÚÕâ¸öÂÛÌ³ä¯ÀÀ";

$lang['Online_explain'] = "ÕâÊÇ5·ÖÖÓÖ®ÄÚµÄÂÛÌ³ÔÚÏßÇé¿ö";

$lang['Forum_Location'] = "ÂÛÌ³Î»ÖÃ";
$lang['Last_updated'] = "×î½ü¸üÐÂ";

$lang['Forum_index'] = "ÂÛÌ³Ê×Ò³";
$lang['Logging_on'] = "µÇÂ½";
$lang['Posting_message'] = "·¢±íÌû×Ó";
$lang['Searching_forums'] = "ËÑË÷ÂÛÌ³";
$lang['Viewing_profile'] = "ä¯ÀÀ¸öÈË×ÊÁÏ";
$lang['Viewing_online'] = "ä¯ÀÀÔÚÏßÇé¿ö";
$lang['Viewing_member_list'] = "ä¯ÀÀ³ÉÔ±ÁÐ±í";
$lang['Viewing_priv_msgs'] = "ä¯ÀÀË½ÈËÁôÑÔ";
$lang['Viewing_FAQ'] = "ä¯ÀÀ³£¼ûÎÊÌâ´ð¼¯";


//
// Moderator Control Panel
//
$lang['Mod_CP'] = "³¤ÀÏ¿ØÖÆÃæ°å";
$lang['Mod_CP_explain'] = "Ê¹ÓÃÒÔÏÂµÄÑ¡ÏîÄú¿ÉÒÔÔÚÕâ¸öÂÛÌ³ÔËÐÐ´ó²¿·ÖÊÊÁ¿µÄ²Ù×÷. Äú¿ÉÒÔËø¶¨,½âËø, ÒÆ¶¯»òÕßÉ¾³ýÈÎÒâÊýÁ¿µÄÖ÷Ìâ.";

$lang['Select'] = "Ñ¡Ôñ";
$lang['Delete'] = "É¾³ý";
$lang['Move'] = "ÒÆ¶¯";
$lang['Lock'] = "Ëø¶¨";
$lang['Unlock'] = "½âËø";

$lang['Topics_Removed'] = "Ñ¡ÔñµÄÖ÷ÌâÒÑ¾­³É¹¦µØ´ÓÊý¾Ý¿âÖÐÉ¾³ý.";
$lang['Topics_Locked'] = "Ñ¡ÔñµÄÖ÷ÌâÒÑ¾­³É¹¦µÄ±»Ëø¶¨";
$lang['Topics_Moved'] = "Ñ¡ÔñµÄÖ÷ÌâÒÑ¾­³É¹¦µÄ±»ÒÆ¶¯";
$lang['Topics_Unlocked'] = "Ñ¡ÔñµÄÖ÷ÌâÒÑ¾­³É¹¦µÄ±»½âËø";
$lang['No_Topics_Moved'] = "Ã»ÓÐÖ÷Ìâ±»ÒÆ¶¯";

$lang['Confirm_delete_topic'] = "ÄúÈ·¶¨ÒªÉ¾³ýÑ¡ÔñµÄÖ÷ÌâÂð?";
$lang['Confirm_lock_topic'] = "ÄúÈ·¶¨ÒªËø¶¨Ñ¡ÔñµÄÖ÷ÌâÂð?";
$lang['Confirm_unlock_topic'] = "ÄúÈ·¶¨Òª½âËøÑ¡ÔñµÄÖ÷ÌâÂð?";
$lang['Confirm_move_topic'] = "ÄúÈ·¶¨ÒªÒÆ¶¯Ñ¡ÔñµÄÖ÷ÌâÂð?";

$lang['Move_to_forum'] = "ÒÆ¶¯µ½ÁíÒ»¸öÂÛÌ³";
$lang['Leave_shadow_topic'] = "¸´ÖÆÖ÷Ìâ±£ÁôÔÚ¾ÉÂÛÌ³";

$lang['Split_Topic'] = "·Ö¸ôÖ÷Ìâ¿ØÖÆÃæ°å";
$lang['Split_Topic_explain'] = "Ê¹ÓÃÒÔÏÂµÄÑ¡ÏîÄú¿ÉÒÔ·Ö¸îÌû×Ó±ä³ÉÁ½¸ö,Äú¿ÉÒÔÑ¡Ôñ·Ö¸îÒ»¸ö»ò¶à¸öÌû×Ó";
$lang['Split_title'] = "ÐÂÖ÷ÌâÃû";
$lang['Split_forum'] = "Òª·Ö¸îÖ÷Ìâµ½ÐÂµÄÂÛÌ³";
$lang['Split_posts'] = "·Ö¸îÑ¡ÔñµÄÌû×Ó";
$lang['Split_after'] = "·Ö¸î×ÔÑ¡ÔñÒÔÏÂµÄÌû×Ó(°üº¬Ñ¡ÔñµÄÌû×Ó)";
$lang['Topic_split'] = "Ñ¡ÔñµÄÌû×ÓÒÑ¾­³É¹¦µØ±»·Ö¸î";

$lang['Too_many_error'] = "ÄúÑ¡ÔñÁËÌ«¶àµÄÌû×Ó.ÄúÖ»ÄÜÑ¡ÔñÒ»¸öÌû×ÓÀ´·Ö¸îÒÔÏÂµÄÌû×Ó!";

$lang['None_selected'] = "ÄúÃ»ÓÐÑ¡ÔñÈÎºÎµÄÌû×ÓÀ´ÔËÐÐÕâ¸ö²Ù×÷.ÇëºóÍËÑ¡ÔñÖÁÉÙÒ»¸öÌû×Ó.";
$lang['New_forum'] = "ÐÂÂÛÌ³";

$lang['This_posts_IP'] = "Õâ¸öÌû×ÓµÄIPµØÖ·";
$lang['Other_IP_this_user'] = "Õâ¸ö×÷ÕßµÄÆäËûµÄµØÖ·";
$lang['Users_this_IP'] = "À´´ÓÕâ¸öIPµÄÓÃ»§";
$lang['IP_info'] = "IPµØÖ·ÐÅÏ¢";
$lang['Lookup_IP'] = "ËÑË÷IPµØÖ·";


//
// Timezones ... for display on each page
//
$lang['All_times'] = "ÂÛÌ³Ê±¼äÎª %s"; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = "GMT - 12 Ð¡Ê±";
$lang['-11'] = "GMT - 11 Ð¡Ê±";
$lang['-10'] = "HST (ÏÄÍþÒÄ)";
$lang['-9'] = "GMT - 9 Ð¡Ê±";
$lang['-8'] = "PST (ÃÀ¹ú/¼ÓÄÃ´ó)";
$lang['-7'] = "MST (ÃÀ¹ú/¼ÓÄÃ´ó)";
$lang['-6'] = "CST (ÃÀ¹ú/¼ÓÄÃ´ó)";
$lang['-5'] = "EST (ÃÀ¹ú/¼ÓÄÃ´ó)";
$lang['-4'] = "GMT - 4 Ð¡Ê±";
$lang['-3.5'] = "GMT - 3.5 Ð¡Ê±";
$lang['-3'] = "GMT - 3 Ð¡Ê±";
$lang['-2'] = "ÖÐ´óÎ÷Ñó";
$lang['-1'] = "GMT - 1 Ð¡Ê±";
$lang['0'] = "GMT";
$lang['1'] = "CET (Å·ÖÞ)";
$lang['2'] = "EET (Å·ÖÞ)";
$lang['3'] = "GMT + 3 Ð¡Ê±";
$lang['3.5'] = "GMT + 3.5 Ð¡Ê±";
$lang['4'] = "GMT + 4 Ð¡Ê±";
$lang['4.5'] = "GMT + 4.5 Ð¡Ê±";
$lang['5'] = "GMT + 5 Ð¡Ê±";
$lang['5.5'] = "GMT + 5.5 Ð¡Ê±";
$lang['6'] = "GMT + 6 Ð¡Ê±";
$lang['6.5'] = 'GMT + 6.5 Ð¡Ê±';
$lang['7'] = "GMT + 7 Ð¡Ê±";
$lang['8'] = "±±¾©Ê±¼ä";
$lang['9'] = "GMT + 9 Ð¡Ê±";
$lang['9.5'] = "CST (°Ä´óÀûÑÇ)";
$lang['10'] = "EST (°Ä´óÀûÑÇ)";
$lang['11'] = "GMT + 11 Ð¡Ê±";
$lang['12'] = "GMT + 12 Ð¡Ê±";
$lang['13'] = "GMT + 13 Ð¡Ê±";


// These are displayed in the timezone select box
$lang['tz']['-12'] = "(GMT -12:00 Ð¡Ê±) °£ÄáÍþÍÐ¿Ëµº, ¿ä¼ÖÁÖµº";
$lang['tz']['-11'] = "(GMT -11:00 Ð¡Ê±) ÖÐÍ¾µº, ÈøÄ¦ÑÇÈºµº";
$lang['tz']['-10'] = "(GMT -10:00 Ð¡Ê±) ÏÄÍþÒÄÖÝ";
$lang['tz']['-9'] = "(GMT -9:00 Ð¡Ê±) °¢À­Ë¹¼ÓÖÝ";
$lang['tz']['-8'] = "(GMT -8:00 Ð¡Ê±) Ì«Æ½ÑóÊ±¼ä (ÃÀ¹ú &amp; ¼ÓÄÃ´ó), Ìá»ªÄÉ";
$lang['tz']['-7'] = "(GMT -7:00 Ð¡Ê±) É½µØ±ê×¼Ê±¼ä (ÃÀ¹ú &amp; ¼ÓÄÃ´ó), ÑÇÀûÉ£ÄÇÖÝ";
$lang['tz']['-6'] = "(GMT -6:00 Ð¡Ê±) ÖÐÇøÊ± (ÃÀ¹ú &amp; ¼ÓÄÃ´ó), Ä«Î÷¸ç³Ç";
$lang['tz']['-5'] = "(GMT -5:00 Ð¡Ê±) ¶«²¿Ê±¼ä (ÃÀ¹ú &amp; ¼ÓÄÃ´ó), ²¨¸ç´ó, ÀûÂí, »ù¶à";
$lang['tz']['-4'] = "(GMT -4:00 Ð¡Ê±) ´óÎ÷ÑóÊ±¼ä (¼ÓÄÃ´ó), ¼ÓÀ­¼ÓË¹, À­°ÍË¹";
$lang['tz']['-3.5'] = "(GMT -3:30 Ð¡Ê±) Å¦·ÒÀ¼";
$lang['tz']['-3'] = "(GMT -3:00 Ð¡Ê±) °ÍÎ÷, ²¼ÒËÅµË¹°¬ÀûË¹, ÇÇÖÎ¶Ù, ¸£¿ËÀ¼Èºµº";
$lang['tz']['-2'] = "(GMT -2:00 Ð¡Ê±) ÖÐ´óÎ÷Ñó, ÑÇÉ­ËÉµº, Ê¥ºÕÀÕÄú";
$lang['tz']['-1'] = "(GMT -1:00 Ð¡Ê±) ÑÇËÙ¶ûÈºµº, Î¬µÂ½Çµº";
$lang['tz']['0'] = "(GMT) ¿¨Èø²¼À¼¿¨, ¶¼°ØÁÖ, °®¶¡±¤, Â×¶Ø, ÀïË¹±¾, ÃÉÂÞÎ¬ÑÇ";
$lang['tz']['1'] = "(GMT +1:00 Ð¡Ê±) °¢Ä·Ë¹ÌØµ¤, °ØÁÖ, ²¼Â³Èû¶û, ¸ç±¾¹þ¸ù, ÂíµÂÀï, °ÍÀè, ÂÞÂí";
$lang['tz']['2'] = "(GMT +2:00 Ð¡Ê±) ¿ªÂÞ, ºÕ¶ûÐÁ»ù, ¼ÓÀïÄþ¸ñÀÕ, ÄÏ·Ç";
$lang['tz']['3'] = "(GMT +3:00 Ð¡Ê±) °Í¸ñ´ï, ÀûÑÅµÂ, ÄªË¹¿Æ, ÄÚÂÞ±Ï";
$lang['tz']['3.5'] = "(GMT +3:30 Ð¡Ê±) µÂºÚÀ¼";
$lang['tz']['4'] = "(GMT +4:00 Ð¡Ê±) °¢²¼Ôú±È, °Í¿â, ÂíË¹¿¦ÌØ, µÚ±ÈÀûË¹";
$lang['tz']['4.5'] = "(GMT +4:30 Ð¡Ê±) ¿¦²¼¶û";
$lang['tz']['5'] = "(GMT +5:00 Ð¡Ê±) ÒÁ¿¨ÌØÁÕ±¤, ÒÁË¹À¼±¤, ¿¨À­Ææ, ËþÊ²¸É";
$lang['tz']['5.5'] = "(GMT +5:30 Ð¡Ê±) ÃÏÂò, ¼Ó¶û¸÷´ð, ÂíµÂÀ­Ë¹, ÐÂµÂÀï";
$lang['tz']['6'] = "(GMT +6:00 Ð¡Ê±) °¢ÃÉÌá, ¿ÆÂ×ÆÂ, ´ï¿¨£¬ÐÂÎ÷²®ÀûÑÇ";
$lang['tz']['6.5'] = "(GMT +6:30 Ð¡Ê±) Ñö¹â";
$lang['tz']['7'] = "(GMT +7:00 Ð¡Ê±) Âü¹È, ºÓÄÚ, ÑÅ¼Ó´ï";
$lang['tz']['8'] = "(GMT +8:00 Ð¡Ê±) ±±¾©, Ïã¸Û, ÅåË¼, ÐÂ¼ÓÆÂ, Ì¨±±";
$lang['tz']['9'] = "(GMT +9:00 Ð¡Ê±) ´óÚæ, Ôý»Ï, ºº³Ç, ¶«¾©, ÑÅ¿â´Ä¿Ë";
$lang['tz']['9.5'] = "(GMT +9:30 Ð¡Ê±) °¢µÃÀ×µÂ, ´ï¶ûÎÄ";
$lang['tz']['10'] = "(GMT +10:00 Ð¡Ê±) ¿°ÅàÀ­£¬¹Øµº£¬Äª¶û±¾, Ï¤Äá, ·ûÀ­µÏÎÖË¹ÍÐ¿Ë";
$lang['tz']['11'] = "(GMT +11:00 Ð¡Ê±) Âí¼Óµ¤, ÐÂ¿¨Àï¶àÄáÑÇ, ËùÂÞÃÅÈºµº";
$lang['tz']['12'] = "(GMT +12:00 Ð¡Ê±) °Â¿ËÀ¼, ÍþÁé¶Ù, ì³¼Ã, ÂíÐª¶ûÈºµº";
$lang['tz']['13'] = "(GMT +13:00 Ð¡Ê±) Å¬¿â°¢Âå·¨";

$lang['datetime']['Sunday'] = "ÐÇÆÚÈÕ";
$lang['datetime']['Monday'] = "ÐÇÆÚÒ»";
$lang['datetime']['Tuesday'] = "ÐÇÆÚ¶þ";
$lang['datetime']['Wednesday'] = "ÐÇÆÚÈý";
$lang['datetime']['Thursday'] = "ÐÇÆÚËÄ";
$lang['datetime']['Friday'] = "ÐÇÆÚÎå";
$lang['datetime']['Saturday'] = "ÐÇÆÚÁù";
$lang['datetime']['Sun'] = "ÐÇÆÚÈÕ";
$lang['datetime']['Mon'] = "ÐÇÆÚÒ»";
$lang['datetime']['Tue'] = "ÐÇÆÚ¶þ";
$lang['datetime']['Wed'] = "ÐÇÆÚÈý";
$lang['datetime']['Thu'] = "ÐÇÆÚËÄ";
$lang['datetime']['Fri'] = "ÐÇÆÚÎå";
$lang['datetime']['Sat'] = "ÐÇÆÚÁù";
$lang['datetime']['January'] = "Ò»ÔÂ";
$lang['datetime']['February'] = "¶þÔÂ";
$lang['datetime']['March'] = "ÈýÔÂ";
$lang['datetime']['April'] = "ËÄÔÂ";
$lang['datetime']['May'] = "ÎåÔÂ";
$lang['datetime']['June'] = "ÁùÔÂ";
$lang['datetime']['July'] = "ÆßÔÂ";
$lang['datetime']['August'] = "°ËÔÂ";
$lang['datetime']['September'] = "¾ÅÔÂ";
$lang['datetime']['October'] = "Ê®ÔÂ";
$lang['datetime']['November'] = "Ê®Ò»ÔÂ";
$lang['datetime']['December'] = "Ê®¶þÔÂ";
$lang['datetime']['Jan'] = "Ò»ÔÂ";
$lang['datetime']['Feb'] = "¶þÔÂ";
$lang['datetime']['Mar'] = "ÈýÔÂ";
$lang['datetime']['Apr'] = "ËÄÔÂ";
$lang['datetime']['May'] = "ÎåÔÂ";
$lang['datetime']['Jun'] = "ÁùÔÂ";
$lang['datetime']['Jul'] = "ÆßÔÂ";
$lang['datetime']['Aug'] = "°ËÔÂ";
$lang['datetime']['Sep'] = "¾ÅÔÂ";
$lang['datetime']['Oct'] = "Ê®ÔÂ";
$lang['datetime']['Nov'] = "Ê®Ò»ÔÂ";
$lang['datetime']['Dec'] = "Ê®¶þÔÂ";

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = "ÏûÏ¢ÌáÊ¾";
$lang['Critical_Information'] = "¹Ø¼üÐÅÏ¢";

$lang['General_Error'] = "ÆÕÍ¨´íÎó";
$lang['Critical_Error'] = "¹Ø¼ü´íÎó";
$lang['An_error_occured'] = "·¢ÉúÁËÒ»¸ö´íÎó";
$lang['A_critical_error'] = "·¢ÉúÁËÒ»¸ö¹Ø¼üÐÔ´íÎó";

//
// That's all Folks!
// -------------------------------------------------

?>