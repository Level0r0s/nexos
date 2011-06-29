<?
/****************************************************************************/
/* Coppermine Photo Gallery 1.2.3 for CMS                                   */
/****************************************************************************/
/****************************************************************************/
/* Port Copyright (C) 2004 Coppermine for CMS Dev Team  		              */
/* http://coppermine.findhere.org/                                          */
/****************************************************************************/
/* Updated by the Coppermine Dev Team  2003                                 */
/* (http://coppermine.sf.net/team/)                                         */
/* see /docs/credits.html for details                                       */
/****************************************************************************/
/* Copyright (C) 2002,2003  Gregory DEMAR <gdemar@wanadoo.fr>               */
/* http://www.chezgreg.net/coppermine/                                      */
/* This program is free software; you can redistribute it and/or modify     */
/* it under the terms of the GNU General Public License as published by     */
/* the Free Software Foundation; either version 2 of the License, or        */
/* (at your option) any later version.                                      */
/*****************************************************************************/
/*   $Id: lang-japanese-utf-8.php,v 1.1 2004/07/24 21:27:59 akamu Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Japanese');
define('LANG_NAME_NATIVE', 'Japanese');
define('LANG_COUNTRY_CODE', 'jp');
define('TRANS_NAME', 'Mitsuhiro Yoshida');
define('TRANS_EMAIL', 'mits@mitstek.com');
define('TRANS_WEBSITE', 'http://mitstek.com/');
define('TRANS_DATE', '2003-11-07');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'UTF-8');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'Yes');
define('NO', 'No');

// some common strings
define('BACK', 'Ìá¤ë');
define('CONTINUE', 'Â³¤±¤ë');
define('INFO', '¾ðÊó');
define('ERROR', '¥¨¥é¡¼');

//// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
define('ALBUM_DATE_FMT', '%YÇ¯%B·î%dÆü');
define('LASTCOM_DATE_FMT', '%y/%m/%d/ %H:%M');
define('LASTUP_DATE_FMT', '%YÇ¯%B·î%dÆü');
define('REGISTER_DATE_FMT', '%YÇ¯%B·î%dÆü');
define('LASTHIT_DATE_FMT', '%YÇ¯%B·î%dÆü %I:%M %p');
define('COMMENT_DATE_FMT', '%YÇ¯%B·î%dÆü %I:%M %p');

// short names for Byte, Kilo, Mega
$lang_byte_units = array('¥Ð¥¤¥È','KB','MB',);

// Day of week
$lang_day_of_week = array('Æü','·î','²Ð','¿å','ÌÚ','¶â','ÅÚ',);
// Day of the month
$lang_month = array('01','02','03','04','05','06','07','08','09','10','11','12',);
// For the word censor
$lang_bad_words = array('*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*',);
// lang_meta_album_names
define('RANDOM', '¥é¥ó¥À¥à¼Ì¿¿');
define('LASTUP', '¿·Ãå¼Ì¿¿');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'ºÇ¿·¥¢¥ë¥Ð¥à');
define('LASTCOM', 'ºÇ¿·¥³¥á¥ó¥È');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'ºÇÂ¿±ÜÍ÷');
define('TOPRATED', '¥È¥Ã¥×¥ì¡¼¥È');
define('LASTHITS', 'ºÇ½ª±ÜÍ÷');
define('SEARCH', '¸¡º÷·ë²Ì');
define('FAVPICS', '¤ªµ¤¤ËÆþ¤ê');

// lang_errors
define('ACCESS_DENIED', '¤³¤Î¥Ú¡¼¥¸¤ËÂÐ¤¹¤ë¥¢¥¯¥»¥¹¸¢¤¬¤¢¤ê¤Þ¤»¤ó¡£');
define('PERM_DENIED', '¤³¤ÎÁàºî¤ò¹Ô¤¦¸¢¸Â¤¬¤¢¤ê¤Þ¤»¤ó¡£');
define('PARAM_MISSING', 'É¬Í×¤Ê¥Ñ¥é¥á¡¼¥¿Ìµ¤·¤Ç¥¹¥¯¥ê¥×¥È¤¬¼Â¹Ô¤µ¤ì¤Þ¤·¤¿¡£');
define('NON_EXIST_AP', 'ÁªÂò¤µ¤ì¤¿¥¢¥ë¥Ð¥à/¼Ì¿¿¤¬Â¸ºß¤·¤Þ¤»¤ó !');
define('QUOTA_EXCEEDED', '¥Ç¥£¥¹¥¯»ÈÍÑÎÌ¥ª¡¼¥Ð¡¼<br /><br />¤¢¤Ê¤¿¤¬»ÈÍÑ¤Ç¤­¤ë¥Ç¥£¥¹¥¯ÍÆÎÌ¤Ï [quota]K¤Ç¤¹¡¢¸½ºß [space]K¤ò»ÈÍÑ¤·¤Æ¤¤¤Þ¤¹¡¢¤³¤Î¼Ì¿¿¤òÄÉ²Ã¤¹¤ë¤È¥Ç¥£¥¹¥¯ÍÆÎÌ¤¬¥ª¡¼¥Ð¡¼¤·¤Þ¤¹¡£');
define('GD_FILE_TYPE_ERR', 'GD¥¤¥á¡¼¥¸¥é¥¤¥Ö¥é¥ê¡¼¤ò»ÈÍÑ¤¹¤ë¾ì¹ç¡¢JPEG¤ÈPNG·Á¼°¤Î¥Õ¥¡¥¤¥ë¤Î¤ßÍøÍÑ²ÄÇ½¤Ç¤¹¡£');
define('INVALID_IMAGE', '¤¢¤Ê¤¿¤¬¥¢¥Ã¥×¥í¡¼¥É¤·¤¿²èÁü¤ÏÇËÂ»¤·¤¿¤«¡¢GD¥é¥¤¥Ö¥é¥ê¡¼¤Ç½èÍý¤¹¤ë¤³¤È¤¬½ÐÍè¤Þ¤»¤ó¡£');
define('RESIZE_FAILED', '²èÁü¥µ¥¤¥º¤¬¾®¤µ¤¤¤¿¤á¡¢¥µ¥à¥Í¥¤¥ë¤òºîÀ®½ÐÍè¤Þ¤»¤ó¡£');
define('NO_IMG_TO_DISPLAY', 'É½¼¨¤¹¤ë²èÁü¤Ï¤¢¤ê¤Þ¤»¤ó¡£');
define('NON_EXIST_CAT', 'ÁªÂò¤·¤¿¥«¥Æ¥´¥ê¡¼¤ÏÂ¸ºß¤·¤Þ¤»¤ó¡£');
define('ORPHAN_CAT', 'Â¸ºß¤·¤Ê¤¤¿Æ¥«¥Æ¥´¥ê¡¼¤ò»ý¤Ã¤Æ¤¤¤Þ¤¹¡£¥«¥Æ¥´¥ê¡¼¥Þ¥Í¡¼¥¸¥ã¡¼¤ò»È¤Ã¤ÆÌäÂê¤ò²ò·è¤·¤Æ¤¯¤À¤µ¤¤¡£');
define('DIRECTORY_RO', '¥Ç¥£¥ì¥¯¥È¥ê \'%s\' ¤Ë½ñ¹þ¤ß¸¢¤¬¤¢¤ê¤Þ¤»¤ó¡£¼Ì¿¿¤Îºï½ü¤Ï½ÐÍè¤Þ¤»¤ó¡£');
define('NON_EXIST_COMMENT', 'ÁªÂò¤·¤¿¥³¥á¥ó¥È¤ÏÂ¸ºß¤·¤Þ¤»¤ó¡£');
define('PIC_IN_INVALID_ALBUM', 'Â¸ºß¤·¤Ê¤¤¥¢¥ë¥Ð¥à(%s)Æâ¤Ë¼Ì¿¿¤¬¤¢¤ê¤Þ¤¹ !?');
define('BANNED', '¤¢¤Ê¤¿¤Ï¸½ºß¤³¤Î¥µ¥¤¥È¤Ø¤Î¥¢¥¯¥»¥¹¤òµñÈÝ¤µ¤ì¤Æ¤¤¤Þ¤¹¡£');
define('NOT_WITH_UDB', '¥Õ¥©¡¼¥é¥à¥½¥Õ¥È¤ËÅý¹ç¤µ¤ì¤¿°Ù¡¢¤³¤Îµ¡Ç½¤ÏCoppermine¤ÇÌµ¸ú¤Ë¤µ¤ì¤Æ¤¤¤Þ¤¹¡£¥Õ¥©¡¼¥é¥à¥½¥Õ¥È¤Ç´ÉÍý¤µ¤ì¤ë°Ù¡¢¤³¤Îµ¡Ç½¤Ë´Ø¤¹¤ëÀßÄê¤Ï¡¢¤³¤³¤Ç¥µ¥Ý¡¼¥È¤µ¤ì¤Þ¤»¤ó¡£');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', '¥¢¥ë¥Ð¥à¥ê¥¹¥È¤Ø°ÜÆ°');
define('ALB_LIST_LNK', '¥¢¥ë¥Ð¥à¥ê¥¹¥È');
define('MY_GAL_TITLE', '¥Ñ¡¼¥½¥Ê¥ë¥®¥ã¥é¥ê¡¼¤Ø°ÜÆ°');
define('MY_GAL_LNK', '¥Þ¥¤¥®¥ã¥é¥ê¡¼');
define('MY_PROF_LNK', '¥Þ¥¤¥×¥í¥Õ¥£¡¼¥ë');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', '´ÉÍý¼Ô¥â¡¼¥É¤ËÊÑ¹¹');
define('ADM_MODE_LNK', '´ÉÍý¼Ô¥â¡¼¥É');
define('USR_MODE_TITLE', '¥æ¡¼¥¶¥â¡¼¥É¤ËÊÑ¹¹');
define('USR_MODE_LNK', '¥æ¡¼¥¶¥â¡¼¥É');
define('UPLOAD_PIC_TITLE', '¥¢¥ë¥Ð¥à¤Ë¼Ì¿¿¤ò¥¢¥Ã¥×¥í¡¼¥É');
define('UPLOAD_PIC_LNK', '¼Ì¿¿¤Î¥¢¥Ã¥×¥í¡¼¥É');
define('REGISTER_TITLE', '¥¢¥«¥¦¥ó¥È¤ÎºîÀ®');
define('REGISTER_LNK', '¥æ¡¼¥¶ÅÐÏ¿');
define('LOGIN_LNK', '¥í¥°¥¤¥ó');
define('LOGOUT_LNK', '¥í¥°¥¢¥¦¥È');
define('LASTUP_LNK', 'ºÇ¿·¥¢¥Ã¥×¥í¡¼¥É');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'ºÇ¿·¥³¥á¥ó¥È');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'ºÇÂ¿±ÜÍ÷');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  '¥È¥Ã¥×¥ì¡¼¥È');
define('SEARCH_LNK', '¸¡º÷');
define('FAV_LNK', '¤ªµ¤¤ËÆþ¤ê');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu

define('UPL_APP_LNK', '¥¢¥Ã¥×¥í¡¼¥É¾µÇ§');
define('CONFIG_LNK', 'ÀßÄê');
define('ALBUMS_LNK', '¥¢¥ë¥Ð¥à');
define('CATEGORIES_LNK', '¥«¥Æ¥´¥ê');
define('USERS_LNK', '¥æ¡¼¥¶');
define('GROUPS_LNK', '¥°¥ë¡¼¥×');
define('COMMENTS_LNK', '¥³¥á¥ó¥È');
define('SEARCHNEW_LNK', '¼Ì¿¿¤Î°ì³çÅÐÏ¿');
define('UTIL_LNK', '¼Ì¿¿¤Î¥ê¥µ¥¤¥º');
define('BAN_LNK', '¥¢¥¯¥»¥¹¶Ø»ß¥æ¡¼¥¶');

// lang_user_admin_menu
define('ALBMGR_LNK', '¥Þ¥¤¥¢¥ë¥Ð¥à¤ÎºîÀ® / À°Íý');
define('MODIFYALB_LNK', '¥Þ¥¤¥¢¥ë¥Ð¥à¤Î½¤Àµ');
define('MY_PROF_LNK', '¥Þ¥¤¥×¥í¥Õ¥£¡¼¥ë');

// lang_cat_list
define('CATEGORY', '¥«¥Æ¥´¥ê');
define('ALBUMS', '¥¢¥ë¥Ð¥à');
define('PICTURES', '¼Ì¿¿');

// lang_album_list
define('ALBUM_ON_PAGE', '¥¢¥ë¥Ð¥à¿ô %d / %d¥Ú¡¼¥¸Ãæ');

// lang_thumb_view
define('DATE', 'ÆüÉÕ');
define('NAME', '¥Õ¥¡¥¤¥ëÌ¾');
define('TITLE', '¥¿¥¤¥È¥ë');
define('SORT_DA', 'ÆüÉÕ¤Î¾º½ç¤ÇÊÂ¤ÓÂØ¤¨');
define('SORT_DD', 'ÆüÉÕ¤Î¹ß½ç¤ÇÊÂ¤ÓÂØ¤¨');
define('SORT_NA', '¥Õ¥¡¥¤¥ëÌ¾¤Î¾º½ç¤ÇÊÂ¤ÓÂØ¤¨');
define('SORT_ND', '¥Õ¥¡¥¤¥ëÌ¾¤Î¹ß½ç¤ÇÊÂ¤ÓÂØ¤¨');
define('SORT_TA', '¼Ì¿¿¥¿¥¤¥È¥ë¤Î¾º½ç¤ÇÊÂ¤ÓÂØ¤¨');
define('SORT_TD', '¼Ì¿¿¥¿¥¤¥È¥ë¤Î¹ß½ç¤ÇÊÂ¤ÓÂØ¤¨');
define('PIC_ON_PAGE', '¼Ì¿¿Ëç¿ô %d / %d¥Ú¡¼¥¸Ãæ');
define('USER_ON_PAGE', '¥æ¡¼¥¶¿ô %d / %d¥Ú¡¼¥¸Ãæ');

// lang_img_nav_bar
define('THUMB_TITLE', '¥µ¥à¥Í¥¤¥ë¥Ú¡¼¥¸¤ËÌá¤ë');
define('PIC_INFO_TITLE', '¼Ì¿¿¾ðÊó¤ÎÉ½¼¨/ÈóÉ½¼¨');
define('SLIDESHOW_TITLE', '¥¹¥é¥¤¥É¥·¥ç¡¼');
define('SLIDESHOW_DISABLED', 'e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', '¤³¤Î¼Ì¿¿¤òe-¥«¡¼¥É¤È¤·¤ÆÁ÷¿®¤¹¤ë');
define('ECARD_DISABLED', 'e-¥«¡¼¥É¤ÏÁ÷¿®½ÐÍè¤Þ¤»¤ó¡£');
define('ECARD_DISABLED_MSG', 'e-¥«¡¼¥É¤òÁ÷¿®¤¹¤ë¸¢¸Â¤¬¤¢¤ê¤Þ¤»¤ó¡£');
define('PREV_TITLE', 'Á°¤Ø');
define('NEXT_TITLE', '¼¡¤Ø');
define('PIC_POS', '¼Ì¿¿ %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', '¤³¤Î¼Ì¿¿¤òÉ¾²Á¤¹¤ë');
define('NO_VOTES', '(Ì¤ÅêÉ¼)');
define('RATING', '(¸½ºß¤Î¥ì¡¼¥Æ¥£¥ó¥°: %s/5&nbsp;&nbsp;&nbsp;ÅêÉ¼¿ô %s·ï)');
define('RUBBISH', '¹ó¤¤');
define('POOR', '°­¤¤');
define('FAIR', 'ÉáÄÌ');
define('GOOD', 'ÎÉ¤¤');
define('EXCELLENT', 'ÁÇÀ²¤é¤·¤¤');
define('GREAT', 'À¨¤¤');

// lang_cpg_die
define('INFORMATION', '¾ðÊó');
define('ERROR', '¥¨¥é¡¼');
define('CRITICAL_ERROR', 'Ã×Ì¿Åª¤Ê¥¨¥é¡¼');
define('FILE', '¥Õ¥¡¥¤¥ë: ');
define('LINE', '¹Ô: ');

// lang_display_thumbnails
define('FILENAME', '¥Õ¥¡¥¤¥ëÌ¾ : ');
define('FILESIZE', '¥Õ¥¡¥¤¥ë¥µ¥¤¥º : ');
define('DIMENSIONS', 'Âç¤­¤µ : ');
define('DATE_ADDED', 'ÅÐÏ¿Æü : ');

// lang_get_pic_data
define('N_COMMENTS', '¥³¥á¥ó¥È¿ô %s');
define('N_VIEWS', '±ÜÍ÷²ó¿ô %s');
define('N_VOTES', '(ÅêÉ¼¿ô %s)');

// lang_smilies_inc_php
define('EXCLAMATION', '¥Ó¥Ã¥¯¥ê');
define('QUESTION', '¼ÁÌä');
define('VERY HAPPY', '¤È¤Æ¤â¹¬¤»');
define('SMILE', '¥¹¥Þ¥¤¥ë');
define('SAD', 'Èá¤·¤¤');
define('SURPRISED', '¶Ã¤­');
define('SHOCKED', '¥·¥ç¥Ã¥¯');
define('CONFUSED', 'º®Íð');
define('COOL', '¥¯¡¼¥ë');
define('LAUGHING', '¾Ð¤¤');
define('MAD', 'ÅÜ¤ê');
define('RAZZ', '¶ì¾Ð¤¤');
define('EMBARASSED', 'ÃÑ¤º¤«¤·¤¤');
define('CRYING OR VERY SAD', 'µã¤¯Ëô¤Ï¤È¤Æ¤âÈá¤·¤¤');
define('EVIL OR VERY MAD', '°­¤¤Ëô¤Ï¤È¤Æ¤âÅÜ¤Ã¤¿');
define('TWISTED EVIL', '°ÕÃÏ°­¤¤');
define('ROLLING EYES', 'Å¾¤¬¤ëÌÜ');
define('WINK', '¥¦¥¤¥ó¥¯');
define('IDEA', '¥¢¥¤¥Ç¥£¥¢');
define('ARROW', 'µö²Ä');
define('NEUTRAL', 'ÃæÎ©');
define('MR. GREEN', '¥ß¥¹¥¿¡¼¡¦¥°¥ê¡¼¥ó');

// lang_admin_php
define('LV_ADMIN', '´ÉÍý¼Ô¥â¡¼¥É¤ò½ªÎ»Ãæ ...');
define('ENT_ADMIN', '´ÉÍý¼Ô¥â¡¼¥É¤Ë°Ü¹ÔÃæ ...');

// lang_albmgr_php
define('ALB_NEED_NAME', '¥¢¥ë¥Ð¥à¤Ë¤Ï¥¢¥ë¥Ð¥àÌ¾¤¬É¬Í×¤Ç¤¹ !');
define('CONFIRM_MODIFS', 'ËÜÅö¤Ë¹¹¿·¤·¤Æ¤âµ¹¤·¤¤¤Ç¤¹¤« ?');
define('NO_CHANGE', '²¿¤âÊÑ¹¹¤µ¤ì¤Æ¤¤¤Þ¤»¤ó !');
define('NEW_ALBUM', '¿·¤·¤¤¥¢¥ë¥Ð¥à');
define('CONFIRM_DELETE1', 'ËÜÅö¤Ë¤³¤Î¥¢¥ë¥Ð¥à¤òºï½ü¤·¤Æ¤âµ¹¤·¤¤¤Ç¤¹¤« ?');
define('CONFIRM_DELETE2', '\\n¥¢¥ë¥Ð¥à¤Ë´Þ¤Þ¤ì¤ëÁ´¤Æ¤Î¼Ì¿¿¤È¥³¥á¥ó¥È¤Ïºï½ü¤µ¤ì¤Þ¤¹ !');
define('SELECT_FIRST', 'ºÇ½é¤Ë¥¢¥ë¥Ð¥à¤òÁªÂò¤·¤Æ¤¯¤À¤µ¤¤¡£');
define('ALB_MRG', '¥¢¥ë¥Ð¥à´ÉÍý');
define('MY_GALLERY', '* ¥Þ¥¤¥®¥ã¥é¥ê¡¼ *');
define('NO_CATEGORY', '* ¥«¥Æ¥´¥êÌµ¤· *');
define('DELETE', 'ºï½ü');
define('NEW', '¿·µ¬ºîÀ®');
define('APPLY_MODIFS', '¹¹¿·¤ÎÅ¬ÍÑ');
define('SELECT_CATEGORY', '¥«¥Æ¥´¥êÁªÂò');

// lang_catmgr_php
define('MISS_PARAM', '¡Ö%s¡×¤ÎÁàºî¤ËÉ¬Í×¤Ê¥Ñ¥é¥á¡¼¥¿¤¬ÅÏ¤µ¤ì¤Æ¤¤¤Þ¤»¤ó !');
define('UNKNOWN_CAT', 'ÁªÂò¤·¤¿¥«¥Æ¥´¥ê¤Ï¥Ç¡¼¥¿¥Ù¡¼¥¹¤ËÂ¸ºß¤·¤Þ¤»¤ó¡£');
define('USERGAL_CAT_RO', '¥æ¡¼¥¶¥®¥ã¥é¥ê¡¼¤Î¥«¥Æ¥´¥ê¡¼¤Ïºï½ü½ÐÍè¤Þ¤»¤ó !');
define('MANAGE_CAT', '¥«¥Æ¥´¥ê¤Î´ÉÍý');
define('CONFIRM_DELETE', 'ËÜÅö¤Ë¤³¤Î¥«¥Æ¥´¥ê¤òºï½ü¤·¤Æ¤âµ¹¤·¤¤¤Ç¤¹¤« ?');
define('CATEGORY', '¥«¥Æ¥´¥ê');
define('OPERATIONS', 'Áàºî');
define('MOVE_INTO', '°ÜÆ°Àè');
define('UPDATE_CREATE', '¥«¥Æ¥´¥ê¤ÎºîÀ®/¹¹¿·');
define('PARENT_CAT', '¿Æ¥«¥Æ¥´¥ê');
define('CAT_TITLE', '¥«¥Æ¥´¥êÌ¾');
define('CAT_DESC', '¥«¥Æ¥´¥êÀâÌÀ');

// lang_config_php
define('TITLE', 'ÀßÄê');
define('RESTORE_CFG', '¥¤¥ó¥¹¥È¡¼¥ëÄ¾¸å¤Î¾õÂÖ¤ËÌá¤¹');
define('SAVE_CFG', '¿·¤·¤¤ÀßÄê¤òÊÝÂ¸¤¹¤ë');
define('NOTES', 'Notes');
define('INFO', '¾ðÊó');
define('UPD_SUCCESS', 'Coppermine¤ÎÀßÄê¤¬¹¹¿·¤µ¤ì¤Þ¤·¤¿¡£');
define('RESTORE_SUCCESS', 'Coppermine¥Ç¥Õ¥©¥ë¥È¤ÎÀßÄê¤Ë¥ê¥¹¥È¥¢¤µ¤ì¤Þ¤·¤¿¡£');
define('NAME_A', '¼Ì¿¿Ì¾¤Î¾º½ç');
define('NAME_D', '¼Ì¿¿Ì¾¤Î¹ß½ç');
define('TITLE_A', '¥¿¥¤¥È¥ë¤Î¾º½ç');
define('TITLE_D', '¥¿¥¤¥È¥ë¤Î¹ß½ç');
define('DATE_A', 'ÆüÉÕ¤Î¾º½ç');
define('DATE_D', 'ÆüÉÕ¤Î¹ß½ç');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Height');
define('TH_WD', 'Width');

// lang_config_data
define('CONFIG_GENSET', '°ìÈÌÀßÄê');
define('GALLERY_NAME', '¥®¥ã¥é¥ê¡¼Ì¾');
define('GALLERY_DESCRIPTION', '¥®¥ã¥é¥ê¡¼¤ÎÀâÌÀ');
define('GALLERY_ADMIN_EMAIL', '´ÉÍý¼Ô¤Î¥á¡¼¥ë¥¢¥É¥ì¥¹');
define('ECARDS_MORE_PIC_TARGET', 'e-¥«¡¼¥É¤Î¡Ö¤â¤Ã¤È¼Ì¿¿¤ò¸«¤ë¡×¥ê¥ó¥¯¤Î¥¿¡¼¥²¥Ã¥È¥¢¥É¥ì¥¹');
define('LANG', '¸À¸ì');
define('CPGTHEME', '¥Æ¡¼¥Þ');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', '¥¢¥ë¥Ð¥à¥ê¥¹¥ÈÉ½¼¨');
define('MAIN_TABLE_WIDTH', '¥á¥¤¥ó¥Æ¡¼¥Ö¥ë¤ÎÉý (¥Ô¥¯¥»¥ëËô¤Ï%)');
define('SUBCAT_LEVEL', '¥«¥Æ¥´¥ê³¬ÁØ¤ÎÉ½¼¨¿ô');
define('ALBUMS_PER_PAGE', '¥¢¥ë¥Ð¥à¤ÎÉ½¼¨¿ô');
define('ALBUM_LIST_COLS', '¥¢¥ë¥Ð¥à¥ê¥¹¥È¤ÎÎó¿ô');
define('ALB_LIST_THUMB_SIZE', '¥µ¥à¥Í¥¤¥ë¤Î¥µ¥¤¥º (¥Ô¥¯¥»¥ë)');
define('MAIN_PAGE_LAYOUT', '¥á¥¤¥ó¥Ú¡¼¥¸¤Î¥³¥ó¥Æ¥ó¥Ä');
define('FIRST_LEVEL', '¥«¥Æ¥´¥ê¤ËÂè°ì¥ì¥Ù¥ë¤Î¥µ¥à¥Í¥¤¥ë¤òÉ½¼¨¤¹¤ë');
define('THUMB_VIEW_TITLE', '¥µ¥à¥Í¥¤¥ëÉ½¼¨');
define('THUMBCOLS', '¥µ¥à¥Í¥¤¥ë¥Ú¡¼¥¸¤ÎÎó¿ô');
define('THUMBROWS', '¥µ¥à¥Í¥¤¥ë¥Ú¡¼¥¸¤Î¹Ô¿ô');
define('MAX_TABS', '¥¿¥Ö¤ÎºÇÂçÉ½¼¨¿ô');
define('CAPTION_IN_THUMBVIEW', '¥µ¥à¥Í¥¤¥ë¤Î²¼¤Ë¼Ì¿¿ÀâÌÀ¤òÉ½¼¨¤¹¤ë (¼Ì¿¿Ì¾¤ËÄÉ²Ã)');
define('DISPLAY_COMMENT_COUNT', '¥µ¥à¥Í¥¤¥ë¤Î²¼¤ËÉ½¼¨¤¹¤ë¥³¥á¥ó¥È¿ô');
define('DEFAULT_SORT_ORDER', '¼Ì¿¿É½¼¨½ç¤Î¥Ç¥Õ¥©¥ë¥È');
define('MIN_VOTES_FOR_RATING', '¡Ö¥È¥Ã¥×¥ì¡¼¥È¡×¥ê¥¹¥È¤ËÉ½¼¨¤µ¤ì¤ë¼Ì¿¿¤ÎºÇÄãÅêÉ¼¿ô');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', '²èÁü±ÜÍ÷¤È¥³¥á¥ó¥ÈÀßÄê');
define('PICTURE_TABLE_WIDTH', '¼Ì¿¿É½¼¨¤Î¥Æ¡¼¥Ö¥ëÉý (¥Ô¥¯¥»¥ëËô¤Ï%)');
define('DISPLAY_PIC_INFO', '¼Ì¿¿¾ðÊó¤ò¥Ç¥Õ¥©¥ë¥È¤ÇÉ½¼¨¤¹¤ë');
define('FILTER_BAD_WORDS', '¥³¥á¥ó¥ÈÃæ¤Î°­¤¤¸ÀÍÕ¤ò¼è½ü¤¯');
define('ENABLE_SMILIES', '¥³¥á¥ó¥È¤Î¥¹¥Þ¥¤¥ê¡¼»ÈÍÑ¤òµö²Ä¤¹¤ë');
define('DISABLE_FLOOD_PROTECTION', 'Allow several consecutive comments on one pic from the same user');
define('COMMENT_EMAIL_NOTIFICATION', 'Email site admin upon comment submission');
define('MAX_IMG_DESC_LENGTH', '¼Ì¿¿ÀâÌÀ¤ÎºÇÂçÄ¹');
define('MAX_COM_WLENGTH', '1¸ì¤¢¤¿¤ê¤ÎºÇÂçÊ¸»ú¿ô (Ãí°Õ: ÆüËÜ¸ì¤Î¾ì¹ç¡¢¥³¥á¥ó¥È¤ÎºÇÂçÄ¹¤ÈÆ±ÃÍ)');
define('MAX_COM_LINES', '¥³¥á¥ó¥È¤ÎºÇÂç¹Ô¿ô');
define('MAX_COM_SIZE', '¥³¥á¥ó¥È¤ÎºÇÂçÄ¹ (È¾³Ñ´¹»»)');
define('DISPLAY_FILM_STRIP', '¥Õ¥£¥ë¥à¥¹¥È¥ê¥Ã¥×¤òÉ½¼¨¤¹¤ë');
define('MAX_FILM_STRIP_ITEMS', '¥Õ¥£¥ë¥à¥¹¥È¥ê¥Ã¥×Æâ¤Î¹àÌÜÉ½¼¨¿ô');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', '¼Ì¿¿¤È¥µ¥à¥Í¥¤¥ëÀßÄê');
define('JPEG_QUAL', 'JPEG¥Õ¥¡¥¤¥ë¤Î¥¯¥ª¥ê¥Æ¥£¡¼');
define('THUMB_WIDTH', '¥µ¥à¥Í¥¤¥ë¤ÎºÇÂçÉýËô¤Ï¹â¤µ <b>*</b>');
define('THUMB_USE', 'À£Ë¡¤ò»ÈÍÑ¤¹¤ë ( Éý ¤Þ¤¿¤Ï ¹â¤µ ¤Þ¤¿¤Ï ¥µ¥à¥Í¥¤¥ë¤ÎºÇÂç¥µ¥¤¥º )<b>*</b>');
define('MAKE_INTERMEDIATE', 'Ãæ´Ö¼Ì¿¿¤òºîÀ®¤¹¤ë');
define('PICTURE_WIDTH', 'Ãæ´Ö¼Ì¿¿¤ÎºÇÂçÉýËô¤Ï¹â¤µ <b>*</b>');
define('MAX_UPL_SIZE', '¥¢¥Ã¥×¥í¡¼¥É¼Ì¿¿¤ÎºÇÂç¥µ¥¤¥º (KB)');
define('MAX_UPL_WIDTH_HEIGHT', '¥¢¥Ã¥×¥í¡¼¥É¼Ì¿¿¤ÎºÇÂçÉýËô¤Ï¹â¤µ (¥Ô¥¯¥»¥ë)');
define('USER_SETTING_TITLE', '¥æ¡¼¥¶ÀßÄê');
define('ALLOW_USER_REGISTRATION', '¥æ¡¼¥¶ÅÐÏ¿¤òµö²Ä¤¹¤ë');
define('REG_REQUIRES_VALID_EMAIL', '¥æ¡¼¥¶ÅÐÏ¿¤Ë¥á¡¼¥ë¾µÇ§¤òÉ¬Í×¤È¤¹¤ë');
define('ALLOW_DUPLICATE_EMAILS_ADDR', '2¿Í¤Î¥æ¡¼¥¶¤Ë¤è¤ëÆ±°ì¥á¡¼¥ë¥¢¥É¥ì¥¹¤ÎÅÐÏ¿¤òµö²Ä¤¹¤ë');
define('ALLOW_PRIVATE_ALBUMS', '¥æ¡¼¥¶¤¬¥×¥é¥¤¥Ù¡¼¥È¥¢¥ë¥Ð¥à¤òºîÀ®½ÐÍè¤ë');
define('CUSTOM_FIELDS_TITLE', '²èÁüÀâÌÀ¤Î¤¿¤á¤Î¥«¥¹¥¿¥à¥Õ¥£¡¼¥ë¥É (»ÈÍÑ¤·¤Ê¤¤¾ì¹ç¤Ï¶õÇò)');
define('USER_FIELD1_NAME', '¥Õ¥£¡¼¥ë¥ÉÌ¾ 1');
define('USER_FIELD2_NAME', '¥Õ¥£¡¼¥ë¥ÉÌ¾ 2');
define('USER_FIELD3_NAME', '¥Õ¥£¡¼¥ë¥ÉÌ¾ 3');
define('USER_FIELD4_NAME', '¥Õ¥£¡¼¥ë¥ÉÌ¾ 4');
define('PIC_ADV_SETTING_TITLE', '¼Ì¿¿¤È¥µ¥à¥Í¥¤¥ë¤Î¹âÅÙ¤ÊÀßÄê');
define('SHOW_PRIVATE', '¥²¥¹¥È¤Ë¥×¥é¥¤¥Ù¡¼¥È¥¢¥ë¥Ð¥à¤Î¥¢¥¤¥³¥ó¤òÉ½¼¨¤¹¤ë');
define('FORBIDEN_FNAME_CHAR', '¥Õ¥¡¥¤¥ëÌ¾¤Î»ÈÍÑ¶Ø»ßÊ¸»ú');
define('ALLOWED_FILE_EXTENSIONS', '¼Ì¿¿¤Î¥¢¥Ã¥×¥í¡¼¥É¤Ç»ÈÍÑ½ÐÍè¤ë¥Õ¥¡¥¤¥ë¤Î³ÈÄ¥»Ò');
define('THUMB_METHOD', '¥¤¥á¡¼¥¸¥ê¥µ¥¤¥º¤ÎÊýË¡');
define('IMPATH', 'ImageMagick convert¥æ¡¼¥Æ¥£¥ê¥Æ¥£¡¼¤Î¥Ñ¥¹ (Îã /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', '»ÈÍÑ¤Ç¤­¤ë²èÁü¥¿¥¤¥× (ImageMagick¤Î¤ß¤ËÍ­¸ú)');
define('IM_OPTIONS', 'ImageMagick¤Î¥³¥Þ¥ó¥É¥é¥¤¥ó¥ª¥×¥·¥ç¥ó');
define('READ_EXIF_DATA', 'JPEG¥Õ¥¡¥¤¥ë¤ÎEXIF¥Ç¡¼¥¿¤òÆÉ¤ß¼è¤ë');
define('READ_IPTC_DATA', 'Read IPTC data in JPEG files');
define('FULLPATH', '¥¢¥ë¥Ð¥à¥Ç¥£¥ì¥¯¥È¥ê <b>*</b>');
define('USERPICS', '¥æ¡¼¥¶¼Ì¿¿¤Î¥Ç¥£¥ì¥¯¥È¥ê <b>*</b>');
define('NORMAL_PFX', 'Ãæ´Ö¼Ì¿¿¤ÎÀÜÆ¬¼­ <b>*</b>');
define('THUMB_PFX', '¥µ¥à¥Í¥¤¥ë¤ÎÀÜÆ¬¼­ <b>*</b>');
define('DEFAULT_DIR_MODE', '¥Ç¥£¥ì¥¯¥È¥ê¤Î¥Ç¥Õ¥©¥ë¥È¡¦¥Ñ¡¼¥ß¥Ã¥·¥ç¥ó¥â¡¼¥É¥â¡¼¥É');
define('DEFAULT_FILE_MODE', '¼Ì¿¿¤Î¥Ç¥Õ¥©¥ë¥È¡¦¥Ñ¡¼¥ß¥Ã¥·¥ç¥ó¥â¡¼¥É');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', '¥¯¥Ã¥­¡¼¤È¥­¥ã¥é¥¯¥¿¡¼¥»¥Ã¥ÈÀßÄê');
define('COOKIE_NAME', '¥¹¥¯¥ê¥×¥È¤Ç»ÈÍÑ¤¹¤ë¥¯¥Ã¥­¡¼Ì¾');
define('COOKIE_PATH', '¥¹¥¯¥ê¥×¥È¤Ç»ÈÍÑ¤¹¤ë¥¯¥Ã¥­¡¼¤ÎÊÝÂ¸Àè');
define('CHAR_SET', '¥¨¥ó¥³¡¼¥É');
define('MISC_SETTING_TITLE', '¤½¤ÎÂ¾¤ÎÀßÄê');
define('DEBUG_MODE', '¥Ç¥Ð¥Ã¥°¥â¡¼¥É¤ò»ÈÍÑ¤¹¤ë');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) ´û¤Ë¥®¥ã¥é¥ê¡¼¤Ë¼Ì¿¿¤¬ÅÐÏ¿¤µ¤ì¤Æ¤¤¤ë¾ì¹ç¡¢*¥Þ¡¼¥¯¤¬ÉÕ¤¤¤Æ¤¤¤ë¥Õ¥£¡¼¥ë¥É¤ÏÊÑ¹¹¤·¤Ê¤¤¤Ç¤¯¤À¤µ¤¤</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', '¤ªÌ¾Á°¤È¥³¥á¥ó¥È¤òÆþÎÏ¤·¤Æ¤¯¤À¤µ¤¤¡£');
define('COM_ADDED', '¥³¥á¥ó¥È¤¬ÄÉ²Ã¤µ¤ì¤Þ¤·¤¿¡£');
define('ALB_NEED_TITLE', '¥¢¥ë¥Ð¥àÌ¾¤òÆþÎÏ¤·¤Æ¤¯¤À¤µ¤¤ !');
define('NO_UDP_NEEDED', '¹¹¿·¤ÏÉ¬Í×¤¢¤ê¤Þ¤»¤ó¡£');
define('ALB_UPDATED', '¥¢¥ë¥Ð¥à¤¬¹¹¿·¤µ¤ì¤Þ¤·¤¿¡£');
define('UNKNOWN_ALBUM', 'ÁªÂò¤·¤¿¥¢¥ë¥Ð¥à¤¬Â¸ºß¤·¤Ê¤¤¡¢Ëô¤Ï¤³¤Î¥¢¥ë¥Ð¥à¤Ë¥¢¥Ã¥×¥í¡¼¥É¤¹¤ë¸¢¸Â¤¬¤¢¤ê¤Þ¤»¤ó¡£');
define('NO_PIC_UPLOADED', '¼Ì¿¿¤Ï¥¢¥Ã¥×¥í¡¼¥É¤µ¤ì¤Þ¤»¤ó¤Ç¤·¤¿ !<br /><br />¥¢¥Ã¥×¥í¡¼¥É¤¹¤ë¼Ì¿¿¤òÀµ¤·¤¯ÁªÂò¤·¤¿¾ì¹ç¡¢¥µ¡¼¥Ð¤¬</br>¥Õ¥¡¥¤¥ë¤Î¥¢¥Ã¥×¥í¡¼¥É¤òµö²Ä¤·¤Æ¤¤¤ë¤«³ÎÇ§¤·¤Æ¤¯¤À¤µ¤¤ ...');
define('ERR_MKDIR', '¥Ç¥£¥ì¥¯¥È¥ê %s ¤ÎºîÀ®¤Ë¼ºÇÔ¤·¤Þ¤·¤¿ !');
define('DEST_DIR_RO', 'ÂÐ¾Ý¥Ç¥£¥ì¥¯¥È¥ê %s ¤Ï¥¹¥¯¥ê¥×¥È¤Ë¤è¤ë½ñ¹þ¤ß¤¬½ÐÍè¤Þ¤»¤ó !');
define('ERR_MOVE', '%s ¤ò %s ¤Ë°ÜÆ°¤Ç¤­¤Þ¤»¤ó !');
define('ERR_FSIZE_TOO_LARGE', '¤¢¤Ê¤¿¤¬¥¢¥Ã¥×¥í¡¼¥É¤·¤¿¼Ì¿¿¤Î¥µ¥¤¥º¤ÏÂç¤­²á¤®¤Þ¤¹ (ºÇÂç¥µ¥¤¥º¤Ï%sx%s¤Ç¤¹) !');
define('ERR_IMGSIZE_TOO_LARGE', '¤¢¤Ê¤¿¤¬¥¢¥Ã¥×¥í¡¼¥É¤·¤¿¥Õ¥¡¥¤¥ë¤Î¥µ¥¤¥º¤ÏÂç¤­²á¤®¤Þ¤¹ (ºÇÂç¥µ¥¤¥º¤Ï%sKB¤Ç¤¹) !');
define('ERR_INVALID_IMG', '¤¢¤Ê¤¿¤¬¥¢¥Ã¥×¥í¡¼¥É¤·¤¿¥Õ¥¡¥¤¥ë¤ÏÍ­¸ú¤Ê²èÁü¤Ç¤Ï¤¢¤ê¤Þ¤»¤ó !');
define('ALLOWED_IMG_TYPES', '%s ¤Î²èÁü¤Î¤ß¥¢¥Ã¥×¥í¡¼¥É½ÐÍè¤Þ¤¹¡£');
define('ERR_INSERT_PIC', '¼Ì¿¿¡Ö%s¡×¤Ï¥¢¥ë¥Ð¥à¤ËÅÐÏ¿¤Ç¤­¤Þ¤»¤ó¡£ ');
define('UPLOAD_SUCCESS', '¤¢¤Ê¤¿¤Î¼Ì¿¿¤ÏÀµ¾ï¤Ë¥¢¥Ã¥×¥í¡¼¥É¤µ¤ì¤Þ¤·¤¿<br /><br />´ÉÍý¼Ô¤Î¾µÇ§¸å¤ËÉ½¼¨¤µ¤ì¤Þ¤¹¡£');
define('INFO', '¾ðÊó');
define('ERR_COMMENT_EMPTY', '¥³¥á¥ó¥È¤¬¶õÇò¤Ç¤¹ !');
define('ERR_INVALID_FEXT', '¼¡¤Î³ÈÄ¥»Ò¤Î¥Õ¥¡¥¤¥ë¤Î¤ß»ÈÍÑ¤Ç¤­¤Þ¤¹: <br /><br />%s.');
define('NO_FLOOD', '¿½¤·Ìõ¤´¤¶¤¤¤Þ¤»¤ó¡¢¤¢¤Ê¤¿¤Ï´û¤Ë¤³¤Î¼Ì¿¿¤ËºÇ¿·¥³¥á¥ó¥È¤òÅê¹Æ¤·¤Æ¤¤¤Þ¤¹<br /><br />½¤Àµ¤·¤¿¤¤¾ì¹ç¤Ï¡¢¥³¥á¥ó¥È¤òÊÔ½¸¤·¤Æ¤¯¤À¤µ¤¤¡£');
define('REDIRECT_MSG', '¥ê¥À¥¤¥ì¥¯¥È¤µ¤ì¤Þ¤·¤¿¡£<br /><br /><br />¥Ú¡¼¥¸¤¬¼«Æ°Åª¤Ë¹¹¿·¤µ¤ì¤Ê¤¤¾ì¹ç¤Ï¡¢¡ÖÂ³¤¯¡×¤ò¥¯¥ê¥Ã¥¯¤·¤Æ¤¯¤À¤µ¤¤¡£');
define('UPL_SUCCESS', '¤¢¤Ê¤¿¤Î¼Ì¿¿¤ÏÀµ¾ï¤ËÅÐÏ¿¤µ¤ì¤Þ¤·¤¿¡£');

// lang_delete_php
define('CAPTION', 'Caption');
define('FS_PIC', '¥Õ¥ë¥µ¥¤¥º²èÁü');
define('DEL_SUCCESS', 'ºï½üÀ®¸ù');
define('NS_PIC', '¥Î¡¼¥Þ¥ë¥µ¥¤¥º²èÁü');
define('ERR_DEL', 'ºï½üÉÔ²Ä');
define('THUMB_PIC', '¥µ¥à¥Í¥¤¥ë');
define('COMMENT', '¥³¥á¥ó¥È');
define('IM_IN_ALB', '¥¢¥ë¥Ð¥àÆâ¤Î²èÁü');
define('ALB_DEL_SUCCESS', '¥¢¥ë¥Ð¥à¡Ö%s¡×¤¬ºï½ü¤µ¤ì¤Þ¤·¤¿¡£');
define('ALB_MGR', '¥¢¥ë¥Ð¥à¥Þ¥Í¡¼¥¸¥ã¡¼');
define('ERR_INVALID_DATA', '¡Ö%s¡×¤ËÉÔÀµ¤Ê¥Ç¡¼¥¿¤¬È¯À¸¤·¤Þ¤·¤¿¡£');
define('CREATE_ALB', '¥¢¥ë¥Ð¥à¡Ö%s¡×¤ÎºîÀ®Ãæ');
define('UPDATE_ALB', '¥¢¥ë¥Ð¥à¡Ö%s¡× ¥¢¥ë¥Ð¥àÌ¾¡Ö%s¡× ¥¤¥ó¥Ç¥Ã¥¯¥¹¡Ö%s\\¡×¤ò¹¹¿·¤·¤Æ¤¤¤Þ¤¹¡£');
define('DEL_PIC', '¼Ì¿¿¤Îºï½ü');
define('DEL_ALB', '¥¢¥ë¥Ð¥à¤Îºï½ü');
define('DEL_USER', '¥æ¡¼¥¶¤Îºï½ü');
define('ERR_UNKNOWN_USER', 'ÁªÂò¤·¤¿¥æ¡¼¥¶¤ÏÂ¸ºß¤·¤Þ¤»¤ó !');
define('COMMENT_DELETED', '¥³¥á¥ó¥È¤¬ºï½ü¤µ¤ì¤Þ¤·¤¿¡£');

// lang_display_image_php
define('CONFIRM_DEL', 'ËÜÅö¤Ë¤³¤Î¼Ì¿¿¤òºï½ü¤·¤Æ¤âµ¹¤·¤¤¤Ç¤¹¤« ? \\nÆ±»þ¤Ë¥³¥á¥ó¥È¤âºï½ü¤µ¤ì¤Þ¤¹¡£');
define('DEL_PIC', '¤³¤Î¼Ì¿¿¤òºï½ü¤¹¤ë');
define('SIZE', '%s x %s ¥Ô¥¯¥»¥ë');
define('VIEWS', '%s ²ó');
define('SLIDESHOW', '¥¹¥é¥¤¥É¥·¥ç¡¼');
define('STOP_SLIDESHOW', '¥¹¥é¥¤¥É¥·¥ç¡¼¤òÄä»ß');
define('VIEW_FS', '¥¯¥ê¥Ã¥¯¤Ç¥Õ¥ë¥µ¥¤¥º¤Î²èÁü¤òÉ½¼¨');

// lang_picinfo
define('TITLE', '¼Ì¿¿¾ðÊó');
define('FILENAME', '¥Õ¥¡¥¤¥ëÌ¾');
define('ALBUM NAME', '¥¢¥ë¥Ð¥àÌ¾');
define('RATING', '¥ì¡¼¥Æ¥£¥ó¥° (ÅêÉ¼¿ô %s·ï)');
define('KEYWORDS', '¥­¡¼¥ï¡¼¥É');
define('FILE SIZE', '¥Õ¥¡¥¤¥ë¥µ¥¤¥º');
define('DIMENSIONS', 'Âç¤­¤µ');
define('DISPLAYED', 'É½¼¨');
define('CAMERA', '¥«¥á¥é');
define('DATE TAKEN', '»£±ÆÆü');
define('APERTURE', '¥ì¥ó¥º');
define('EXPOSURE TIME', 'Ïª½Ð»þ´Ö');
define('FOCAL LENGTH', '¾ÇÅÀµ÷Î¥');
define('COMMENT', '¥³¥á¥ó¥È');
define('ADDFAV', '¤ªµ¤¤ËÆþ¤ê¤ËÄÉ²Ã');
define('ADDFAVPHRASE', '¤ªµ¤¤ËÆþ¤ê');
define('REMFAV', '¤ªµ¤¤ËÆþ¤ê¤«¤éºï½ü');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', '¤³¤Î¥³¥á¥ó¥È¤òÊÔ½¸¤¹¤ë');
define('CONFIRM_DELETE', 'ËÜÅö¤Ë¤³¤Î¥³¥á¥ó¥È¤òºï½ü¤·¤Æ¤âµ¹¤·¤¤¤Ç¤¹¤« ?');
define('ADD_YOUR_COMMENT', '¥³¥á¥ó¥È¤òÄÉ²Ã¤¹¤ë');
define('NAME', 'Ì¾Á°');
define('COMMENT', '¥³¥á¥ó¥È');
define('YOUR_NAME', '¤ªÌ¾Á°');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', '²èÁü¤Î¥¯¥ê¥Ã¥¯¤Ç¥¦¥¤¥ó¥É¥¦¤òÊÄ¤¸¤ë');

// lang_ecard_php
define('TITLE', 'e-¥«¡¼¥É¤ÎÁ÷¿®');
define('INVALID_EMAIL', '<b>·Ù¹ð</b> : ¥á¡¼¥ë¥¢¥É¥ì¥¹¤¬Àµ¤·¤¯¤¢¤ê¤Þ¤»¤ó !');
define('ECARD_TITLE', 'An e-card from %s for you');
define('VIEW_ECARD', 'e-¥«¡¼¥É¤¬Àµ¾ï¤ËÉ½¼¨¤µ¤ì¤Ê¤¤¾ì¹ç¤Ï¡¢¤³¤Î¥ê¥ó¥¯¤ò¥¯¥ê¥Ã¥¯¤·¤Æ¤¯¤À¤µ¤¤¡£');
define('VIEW_MORE_PICS', '¤â¤Ã¤È¼Ì¿¿¤ò¸«¤ë¾ì¹ç¤Ï¡¢¤³¤Î¥ê¥ó¥¯¤ò¥¯¥ê¥Ã¥¯¤·¤Æ¤¯¤À¤µ¤¤ !');
define('SEND_SUCCESS', 'e-¥«¡¼¥É¤¬Á÷¿®¤µ¤ì¤Þ¤·¤¿¡£');
define('SEND_FAILED', '¿½¤·Ìõ¤´¤¶¤¤¤Þ¤»¤ó¡¢e-card¤òÁ÷¿®½ÐÍè¤Þ¤»¤ó¤Ç¤·¤¿ ...');
define('FROM', 'From');
define('YOUR_NAME', '¤ªÌ¾Á°');
define('YOUR_EMAIL', '¥á¡¼¥ë¥¢¥É¥ì¥¹');
define('TO', 'To');
define('RCPT_NAME', '¼õ¼è¿Í¤Î¤ªÌ¾Á°');
define('RCPT_EMAIL', '¼õ¼è¿Í¤Î¥á¡¼¥ë¥¢¥É¥ì¥¹');
define('GREETINGS', '¤¢¤¤¤µ¤Ä');
define('MESSAGE', '¥á¥Ã¥»¡¼¥¸');

// lang_editpics_php
define('PIC_INFO', '¼Ì¿¿¾ðÊó');
define('ALBUM', '¥¢¥ë¥Ð¥à');
define('TITLE', '¼Ì¿¿Ì¾');
define('DESC', 'ÀâÌÀ');
define('KEYWORDS', '¥­¡¼¥ï¡¼¥É');
define('PIC_INFO_STR', '%s&times;%s - %sKB - ±ÜÍ÷²ó¿ô %s - ÅêÉ¼¿ô %s');
define('APPROVE', '¼Ì¿¿¤Î¾µÇ§');
define('POSTPONE_APP', '¾µÇ§¤Î±ä´ü');
define('DEL_PIC', '¼Ì¿¿¤Îºï½ü');
define('RESET_VIEW_COUNT', '±ÜÍ÷¥«¥¦¥ó¥¿¤Î¥ê¥»¥Ã¥È');
define('RESET_VOTES', 'ÅêÉ¼¤Î¥ê¥»¥Ã¥È');
define('DEL_COMM', '¥³¥á¥ó¥È¤Îºï½ü');
define('UPL_APPROVAL', '¥¢¥Ã¥×¥í¡¼¥É¾µÇ§');
define('EDIT_PICS', '¼Ì¿¿¤ÎÊÔ½¸');
define('SEE_NEXT', 'Á°¤Ø');
define('SEE_PREV', '¼¡¤Ø');
define('N_PIC', '¼Ì¿¿Ëç¿ô %s');
define('N_OF_PIC_TO_DISP', '¼Ì¿¿É½¼¨¿ô');
define('APPLY', '¹¹¿·¤ÎÅ¬ÍÑ');

// lang_groupmgr_php
define('GROUP_NAME', '¥°¥ë¡¼¥×Ì¾');
define('DISK_QUOTA', '¥Ç¥£¥¹¥¯ÍÆÎÌ');
define('CAN_RATE', '¼Ì¿¿¤òÉ¾²Á²ÄÇ½');
define('CAN_SEND_ECARDS', 'e-¥«¡¼¥É¤òÁ÷¿®²ÄÇ½');
define('CAN_POST_COM', '¥³¥á¥ó¥È¤òÅê¹Æ²ÄÇ½');
define('CAN_UPLOAD', '¼Ì¿¿¤ò¥¢¥Ã¥×¥í¡¼¥É²ÄÇ½');
define('CAN_HAVE_GALLERY', '¥Ñ¡¼¥½¥Ê¥ë¥®¥ã¥é¥ê¡¼¤òºîÀ®²ÄÇ½');
define('APPLY', '¹¹¿·¤ÎÅ¬ÍÑ');
define('CREATE_NEW_GROUP', '¿·µ¬¥°¥ë¡¼¥×¤ÎºîÀ®');
define('DEL_GROUPS', 'ÁªÂò¤·¤¿¥°¥ë¡¼¥×¤Îºï½ü');
define('CONFIRM_DEL', '·Ù¹ð¡¢¥°¥ë¡¼¥×¤òºï½ü¤·¤¿¾ì¹ç¡¢¥°¥ë¡¼¥×¤ËÂ°¤·¤Æ¤¤¤¿¥æ¡¼¥¶¤Ï\'Registered\'¥°¥ë¡¼¥×¤Ë°ÜÆ°¤µ¤ì¤Þ¤¹ !\\n\\n½èÍý¤òÂ³¤±¤Þ¤¹¤« ?');
define('TITLE', '¥æ¡¼¥¶¥°¥ë¡¼¥×¤Î´ÉÍý');
define('APPROVAL_1', '¥Ñ¥Ö¥ê¥Ã¥¯¥¢¥Ã¥×¥í¡¼¥É¾µÇ§ (1)');
define('APPROVAL_2', '¥×¥é¥¤¥Ù¡¼¥È¥¢¥Ã¥×¥í¡¼¥É¾µÇ§ (2)');
define('NOTE1', '<b>(1)</b> ¥Ñ¥Ö¥ê¥Ã¥¯¥¢¥ë¥Ð¥à¤Ø¥¢¥Ã¥×¥í¡¼¥É¤µ¤ì¤¿¼Ì¿¿¤Ï´ÉÍý¼Ô¤Î¾µÇ§¤¬É¬Í×¤Ç¤¹¡£');
define('NOTE2', '<b>(2)</b> ¥æ¡¼¥¶¤Î¥¢¥ë¥Ð¥à¤Ø¥¢¥Ã¥×¥í¡¼¥É¤µ¤ì¤¿¼Ì¿¿¤Ï´ÉÍý¼Ô¤Î¾µÇ§¤¬É¬Í×¤Ç¤¹¡£');
define('NOTES', 'Ãí°Õ');

// lang_index_php
define('WELCOME', '¤è¤¦¤³¤½ !');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'ËÜÅö¤Ë¤³¤Î¥¢¥ë¥Ð¥à¤òºï½ü¤·¤Æ¤âµ¹¤·¤¤¤Ç¤¹¤« ? \\nÆ±»þ¤ËÁ´¤Æ¤Î¼Ì¿¿¤È¥³¥á¥ó¥È¤Ïºï½ü¤µ¤ì¤Þ¤¹¡£');
define('DELETE', 'ºï½ü');
define('MODIFY', '¥×¥í¥Ñ¥Æ¥£');
define('EDIT_PICS', '¼Ì¿¿¤ÎÊÔ½¸');

// lang_list_categories
define('HOME', 'Home');
define('STAT1', '¥«¥Æ¥´¥ê¿ô:<b>[cat]</b>&nbsp;&nbsp;&nbsp;¥¢¥ë¥Ð¥à¿ô:<b>[albums]</b>&nbsp;&nbsp;&nbsp;¼Ì¿¿Ëç¿ô:<b>[pictures]</b>&nbsp;&nbsp;&nbsp;¥³¥á¥ó¥È¿ô:<b>[comments]</b>&nbsp;&nbsp;&nbsp;±ÜÍ÷²ó¿ô:<b>[views]</b>');
define('STAT2', '¥¢¥ë¥Ð¥à¿ô:<b>[albums]</b>&nbsp;&nbsp;&nbsp;¼Ì¿¿Ëç¿ô:<b>[pictures]</b>&nbsp;&nbsp;&nbsp;±ÜÍ÷²ó¿ô:<b>[views]</b>');
define('XX_S_GALLERY', '%s¤Î¥®¥ã¥é¥ê¡¼');
define('STAT3', '¥¢¥ë¥Ð¥à¿ô:<b>[albums]</b>&nbsp;&nbsp;&nbsp;¼Ì¿¿Ëç¿ô:<b>[pictures]</b>&nbsp;&nbsp;&nbsp;¥³¥á¥ó¥È¿ô:<b>[comments]</b>&nbsp;&nbsp;&nbsp;±ÜÍ÷²ó¿ô:<b>[views]</b>');

// lang_list_users
define('USER_LIST', '¥æ¡¼¥¶¥ê¥¹¥È');
define('NO_USER_GAL', '¥æ¡¼¥¶¥®¥ã¥é¥ê¡¼¤Ï¤¢¤ê¤Þ¤»¤ó¡£');
define('N_ALBUMS', '¥¢¥ë¥Ð¥à¿ô %s');
define('N_PICS', '¼Ì¿¿Ëç¿ô %s');

// lang_list_albums
define('N_PICTURES', '¼Ì¿¿Ëç¿ô %s');
define('LAST_ADDED', '¡¢ºÇ½ªÄÉ²ÃÆü:%s');

// lang_modifyalb_php
define('UPD_ALB_N', '¥¢¥ë¥Ð¥à¤Î¹¹¿· %s');
define('GENERAL_SETTINGS', '°ìÈÌÀßÄê');
define('ALB_TITLE', '¥¢¥ë¥Ð¥àÌ¾');
define('ALB_CAT', '¥«¥Æ¥´¥ê');
define('ALB_DESC', 'ÀâÌÀ');
define('ALB_THUMB', '¥µ¥à¥Í¥¤¥ë');
define('ALB_PERM', '¤³¤Î¥¢¥ë¥Ð¥à¤ËÂÐ¤¹¤ë¥Ñ¡¼¥ß¥Ã¥·¥ç¥ó');
define('CAN_VIEW', '¥¢¥ë¥Ð¥à±ÜÍ÷²ÄÇ½');
define('CAN_UPLOAD', '¥Ó¥¸¥¿¡¼¤Ï¼Ì¿¿¤ò¥¢¥Ã¥×¥í¡¼¥É½ÐÍè¤ë');
define('CAN_POST_COMMENTS', '¥Ó¥¸¥¿¡¼¤Ï¥³¥á¥ó¥È¤òÅê¹Æ¤Ç¤­¤ë');
define('CAN_RATE', '¥Ó¥¸¥¿¡¼¤Ï¼Ì¿¿¤òÉ¾²Á½ÐÍè¤ë');
define('USER_GAL', '¥æ¡¼¥¶¥®¥ã¥é¥ê¡¼');
define('NO_CAT', '* ¥«¥Æ¥´¥ê¡¼Ìµ¤· *');
define('ALB_EMPTY', '¥¢¥ë¥Ð¥à¤Ë¤Ï²¿¤âÆþ¤Ã¤Æ¤¤¤Þ¤»¤ó');
define('LAST_UPLOADED', 'ºÇ¿·¥¢¥Ã¥×¥í¡¼¥É');
define('PUBLIC_ALB', 'Á´°÷ (¥Ñ¥Ö¥ê¥Ã¥¯¥¢¥ë¥Ð¥à)');
define('ME_ONLY', '»ä¤Î¤ß');
define('OWNER_ONLY', '¥¢¥ë¥Ð¥à¤Î½êÍ­¼Ô (%s) ¤Î¤ß');
define('GROUPP_ONLY', '%s¥°¥ë¡¼¥×¥á¥ó¥Ð¡¼¤Î¤ß');
define('ERR_NO_ALB_TO_MODIFY', '½¤Àµ¤Ç¤­¤ë¥¢¥ë¥Ð¥à¤¬¥Ç¡¼¥¿¥Ù¡¼¥¹¤Ë¤¢¤ê¤Þ¤»¤ó¡£');
define('UPDATE', '¥¢¥ë¥Ð¥à¤Î¹¹¿·');

// lang_rate_pic_php
define('ALREADY_RATED', '¿½¤·Ìõ¤´¤¶¤¤¤Þ¤»¤ó¡¢¤¢¤Ê¤¿¤Ï´û¤Ë¤³¤Î¼Ì¿¿¤òÉ¾²Á¤·¤Æ¤¤¤Þ¤¹¡£');
define('RATE_OK', '¤¢¤Ê¤¿¤ÎÅêÉ¼¤Ï¼õÍý¤µ¤ì¤Þ¤·¤¿¡£');

// lang_register_disclamer
define('REGISTER_DISCLAMER', '{SITE_NAME}¤Î´ÉÍý¼Ô¤Ï¡¢°ìÈÌÅª¤Ë¹¥¤Þ¤·¤¯¤Ê¤¤Åê¹Æ¤ò½ÐÍè¤ë¤À¤±Â®¤ä¤«¤Ëºï½ü¤¹¤ë¤è¤¦»î¤ß¤Þ¤¹¤¬¡¢Á´¤Æ¤ÎÅê¹Æ¤ò±ÜÍ÷¤¹¤ë¤³¤È¤ÏÉÔ²ÄÇ½¤Ç¤¹¡£½¾¤Ã¤Æ¡¢¤³¤Î¥µ¥¤¥È¤ËÂÐ¤¹¤ëÁ´Åê¹Æ¤Î¸«²ò¤¬Åê¹Æ¼Ô¤Ë¤è¤ë¤â¤Î¤Ç¤¢¤ê¡¢´ÉÍý¼Ô¤ä¥¦¥§¥Ö¥Þ¥¹¥¿¡¼¤Î¤â¤Î¤ÇÌµ¤¯(¤³¤ì¤é¤Î¿Í¡¹¤ÎÅê¹Æ¤Ï½ü¤¯)¡¢´ÉÍý¼Ô¤ä¥¦¥§¥Ö¥Þ¥¹¥¿¡¼¤ËÅê¹Æ¤ÎÀÕÇ¤¤¬Ìµ¤¤¤³¤È¤ò¤¢¤Ê¤¿¤ÏÇ§¤á¤Þ¤¹¡£
<br>
<br>
¤¢¤Ê¤¿¤Ï¡¢¸ø½øÎÉÂ¯¤ËÈ¿¤¹¤ëÅê¹Æ¤ä¡¢¸Ä¿Í¤Ø¤ÎÈðëîÃæ½ý¤ÎÅê¹Æ¡¢À­Åª¤ÊÅê¹Æ¡¢¤½¤ÎÂ¾Ë¡¤ËÈ¿¤¹¤ëÅê¹Æ¤ò¤·¤Ê¤¤»ö¤ËÆ±°Õ¤·¤Þ¤¹¡£
¤¢¤Ê¤¿¤Ï¡¢{SITE_NAME}¤Î´ÉÍý¼Ô¡¢¥¦¥§¥Ö¥Þ¥¹¥¿¡¼¡¢¥â¥Ç¥ì¡¼¥¿¡¼¤¬Ç¡²¿¤Ê¤ë»þ¤âÅê¹ÆÆâÍÆ¤òÊÔ½¸¡¦ºï½ü¤¹¤ë¸¢Íø¤òÍ­¤¹¤ë¤³¤È¤ËÆ±°Õ¤·¤Þ¤¹¡£¤¢¤Ê¤¿¤Ï¡¢¥æ¡¼¥¶¤È¤·¤Æ¤¢¤Ê¤¿¤¬Åê¹Æ¤·¤¿¾ðÊó¤¬¥Ç¡¼¥¿¥Ù¡¼¥¹¤ËÊÝÂ¸¤µ¤ì¤ë¤³¤È¤ËÆ±°Õ¤·¤Þ¤¹¡£¤³¤Î¾ðÊó¤Ï¡¢¤¢¤Ê¤¿¤ÎÆ±°ÕÌµ¤·¤Ë´ÉÍý¼Ô¡¢¥¦¥§¥Ö¥Þ¥¹¥¿¡¼¤è¤êÂè»°¼Ô¤Ë³«¼¨¤µ¤ì¤ë¤³¤È¤Ï¤¢¤ê¤Þ¤»¤ó¤¬¡¢¥Ç¡¼¥¿¤¬Î®½Ð¤¹¤ë¶²¤ì¤Î¤¢¤ë¥Ï¥Ã¥­¥ó¥°Åù¤Î¹Ô°Ù¤ËÂÐ¤·¤Æ´ÉÍý¼Ô¡¢¥¦¥§¥Ö¥Þ¥¹¥¿¡¼¤ÏÀÕÇ¤¤òÉé¤¦¤³¤È¤Ï¤¢¤ê¤Þ¤»¤ó¡£
<br>
<br>
¤³¤Î¥µ¥¤¥È¤Ç¤Ï¡¢¤¢¤Ê¤¿¤Î¥³¥ó¥Ô¥å¡¼¥¿¤Ë¾ðÊó¤òÊÝÂ¸¤¹¤ë¤¿¤á¤Ë¥¯¥Ã¥­¡¼¤ò»ÈÍÑ¤·¤Þ¤¹¡£¥¯¥Ã¥­¡¼¤Ï¤¢¤Ê¤¿¤Î±ÜÍ÷¤ò²÷Å¬¤Ë¤¹¤ë°Ù¤À¤±¤Ë»ÈÍÑ¤µ¤ì¤Þ¤¹¡£¥á¡¼¥ë¥¢¥É¥ì¥¹¤Ï¡¢¤¢¤Ê¤¿¤ÎÅÐÏ¿¤Ë´Ø¤¹¤ë¾ÜºÙµÚ¤Ó¥Ñ¥¹¥ï¡¼¥É¤ÎÇ§¾Ú¤Î°Ù¤À¤±¤Ë»ÈÍÑ¤µ¤ì¤Þ¤¹¡£ 
<br>
<br>
¡ÖÆ±°Õ¤·¤Þ¤¹¡×¤ò¥¯¥ê¥Ã¥¯¤¹¤ë¤³¤È¤Ç¡¢¤¢¤Ê¤¿¤Ï¾åµ­¤ÎÍøÍÑµ¬Ìó¤ËÆ±°Õ¤·¤Þ¤¹¡£');

// lang_register_php
define('PAGE_TITLE', '¥æ¡¼¥¶ÅÐÏ¿');
define('TERM_COND', 'ÍøÍÑµ¬Ìó');
define('I_AGREE', 'Æ±°Õ¤·¤Þ¤¹');
define('SUBMIT', 'ÅÐÏ¿¼Â¹Ô');
define('ERR_USER_EXISTS', 'ÆþÎÏ¤µ¤ì¤¿¥æ¡¼¥¶Ì¾¤Ï´û¤ËÅÐÏ¿¤µ¤ì¤Æ¤¤¤Þ¤¹¡¢ÊÌ¤Î¥æ¡¼¥¶Ì¾¤òÆþÎÏ¤·¤Æ¤¯¤À¤µ¤¤¡£');
define('ERR_PASSWORD_MISMATCH', '¥Ñ¥¹¥ï¡¼¥É¤¬°ìÃ×¤·¤Þ¤»¤ó¡¢ºÆÅÙÆþÎÏ¤·¤Æ¤¯¤À¤µ¤¤¡£');
define('ERR_UNAME_SHORT', '¥æ¡¼¥¶Ì¾¤Ï2Ê¸»ú°Ê¾å¤Ë¤·¤Æ¤¯¤À¤µ¤¤¡£');
define('ERR_PASSWORD_SHORT', '¥Ñ¥¹¥ï¡¼¥É¤Ï2Ê¸»ú°Ê¾å¤Ë¤·¤Æ¤¯¤À¤µ¤¤¡£');
define('ERR_UNAME_PASS_DIFF', '¥æ¡¼¥¶Ì¾¤È¥Ñ¥¹¥ï¡¼¥É¤Ï°Û¤Ê¤ëÉ¬Í×¤¬¤¢¤ê¤Þ¤¹¡£');
define('ERR_INVALID_EMAIL', '¥á¡¼¥ë¥¢¥É¥ì¥¹¤¬Àµ¤·¤¯¤¢¤ê¤Þ¤»¤ó¡£');
define('ERR_DUPLICATE_EMAIL', 'Â¾¤Î¥æ¡¼¥¶¤¬´û¤ËÆ±¤¸¥á¡¼¥ë¥¢¥É¥ì¥¹¤òÅÐÏ¿¤·¤Æ¤¤¤Þ¤¹¡£');
define('ENTER_INFO', 'ÅÐÏ¿¾ðÊó¤òÆþÎÏ¤·¤Æ¤¯¤À¤µ¤¤¡£');
define('REQUIRED_INFO', 'É¬¿Ü¹àÌÜ');
define('OPTIONAL_INFO', 'Ç¤°Õ¹àÌÜ');
define('USERNAME', '¥æ¡¼¥¶Ì¾');
define('PASSWORD', '¥Ñ¥¹¥ï¡¼¥É');
define('PASSWORD_AGAIN', '¥Ñ¥¹¥ï¡¼¥É¤ò¤â¤¦°ìÅÙ');
define('EMAIL', '¥á¡¼¥ë¥¢¥É¥ì¥¹');
define('LOCATION', 'µï½»ÃÏ');
define('INTERESTS', '¶½Ì£¤Î¤¢¤ë¤³¤È');
define('WEBSITE', '¥Û¡¼¥à¥Ú¡¼¥¸');
define('OCCUPATION', '¿¦¶È');
define('ERROR', '¥¨¥é¡¼');
define('CONFIRM_EMAIL_SUBJECT', '%s - Registration confirmation');
define('INFORMATION', '¾ðÊó');
define('FAILED_SENDING_EMAIL', 'ÅÐÏ¿³ÎÇ§¥á¡¼¥ë¤¬Á÷¿®¤Ç¤­¤Þ¤»¤ó !');
define('THANK_YOU', '¤´ÅÐÏ¿¤¢¤ê¤¬¤È¤¦¤´¤¶¤¤¤Þ¤¹¡£<br /><br />¥¢¥«¥¦¥ó¥È¤Î³èÀ­²½¤Ë´Ø¤¹¤ë¾ðÊó¤¬ÅÐÏ¿¤µ¤ì¤¿¥á¡¼¥ë¥¢¥É¥ì¥¹°¸¤ËÁ÷¿®¤µ¤ì¤Þ¤·¤¿¡£');
define('ACCT_CREATED', '¤¢¤Ê¤¿¤Î¥¢¥«¥¦¥ó¥È¤¬ºîÀ®¤µ¤ì¤Þ¤·¤¿¡£¥æ¡¼¥¶Ì¾¤È¥Ñ¥¹¥ï¡¼¥É¤Ç¥í¥°¥¤¥ó½ÐÍè¤Þ¤¹¡£');
define('ACCT_ACTIVE', '¤¢¤Ê¤¿¤Î¥¢¥«¥¦¥ó¥È¤¬³èÀ­²½¤µ¤ì¤Þ¤·¤¿¡£¥æ¡¼¥¶Ì¾¤È¥Ñ¥¹¥ï¡¼¥É¤Ç¥í¥°¥¤¥ó½ÐÍè¤Þ¤¹¡£');
define('ACCT_ALREADY_ACT', '¤¢¤Ê¤¿¤Î¥¢¥«¥¦¥ó¥È¤Ï´û¤Ë³èÀ­²½¤µ¤ì¤Æ¤¤¤Þ¤¹ !');
define('ACCT_ACT_FAILED', '¤³¤Î¥¢¥«¥¦¥ó¥È¤Ï³èÀ­²½½ÐÍè¤Þ¤»¤ó !');
define('ERR_UNK_USER', 'ÁªÂò¤·¤¿¥æ¡¼¥¶¤ÏÂ¸ºß¤·¤Þ¤»¤ó !');
define('X_S_PROFILE', '%s ¤Î¥×¥í¥Õ¥£¡¼¥ë');
define('GROUP', '¥°¥ë¡¼¥×');
define('REG_DATE', 'ÅÐÏ¿Ç¯·îÆü');
define('DISK_USAGE', '¥Ç¥£¥¹¥¯»ÈÍÑÎÌ');
define('CHANGE_PASS', '¥Ñ¥¹¥ï¡¼¥É¤ÎÊÑ¹¹');
define('CURRENT_PASS', '¸½ºß¤Î¥Ñ¥¹¥ï¡¼¥É');
define('NEW_PASS', '¿·¤·¤¤¥Ñ¥¹¥ï¡¼¥É');
define('NEW_PASS_AGAIN', '¿·¤·¤¤¥Ñ¥¹¥ï¡¼¥É¤ò¤â¤¦°ìÅÙ');
define('ERR_CURR_PASS', '¸½ºß¤Î¥Ñ¥¹¥ï¡¼¥É¤¬Àµ¤·¤¯¤¢¤ê¤Þ¤»¤ó¡£');
define('APPLY_MODIF', '¹¹¿·¤ÎÅ¬ÍÑ');
define('UPDATE_SUCCESS', '¥×¥í¥Õ¥£¡¼¥ë¤¬¹¹¿·¤µ¤ì¤Þ¤·¤¿¡£');
define('PASS_CHG_SUCCESS', '¥Ñ¥¹¥ï¡¼¥É¤¬ÊÑ¹¹¤µ¤ì¤Þ¤·¤¿¡£');
define('PASS_CHG_ERROR', '¥Ñ¥¹¥ï¡¼¥É¤¬ÊÑ¹¹¤µ¤ì¤Þ¤»¤ó¤Ç¤·¤¿¡£');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', '{SITE_NAME} ¤Ø¤Î¤´ÅÐÏ¿¤¢¤ê¤¬¤È¤¦¤´¤¶¤¤¤Þ¤¹¡£

¤¢¤Ê¤¿¤Î¥æ¡¼¥¶Ì¾¤Ï "{USER_NAME}" ¤Ç¤¹¡£
¤¢¤Ê¤¿¤Î¥Ñ¥¹¥ï¡¼¥É¤Ï "{PASSWORD}" ¤Ç¤¹¡£

¥¢¥«¥¦¥ó¥È¤Î³èÀ­²½¤ò¤¹¤ë¤Ë¤Ï²¼µ­¤Î¥ê¥ó¥¯¤ò¥¯¥ê¥Ã¥¯Ëô¤Ï
¥Ö¥é¥¦¥¶¤Î¥¢¥É¥ì¥¹Íó¤Ë¥³¥Ô¡¼¤·¤Æ¤¯¤À¤µ¤¤¡£

{ACT_LINK}´ÉÍý¼Ô

{SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', '¥³¥á¥ó¥È¤Î¥ì¥Ó¥å¡¼');
define('NO_COMMENT', '¥ì¥Ó¥å¡¼¤¹¤ë¥³¥á¥ó¥È¤Ï¤¢¤ê¤Þ¤»¤ó¡£');
define('N_COMM_DEL', '%s·ï¤Î¥³¥á¥ó¥È¤¬ºï½ü¤µ¤ì¤Þ¤·¤¿¡£');
define('N_COMM_DISP', 'É½¼¨¤¹¤ë¥³¥á¥ó¥È¿ô');
define('SEE_PREV', 'Á°¤Ø');
define('SEE_NEXT', '¼¡¤Ø');
define('DEL_COMM', 'ÁªÂò¤·¤¿¥³¥á¥ó¥È¤òºï½ü');

// lang_search_php
define('SEARCH', '¼Ì¿¿¤Î¸¡º÷');

// lang_search_new_php
define('PAGE_TITLE', '¿·¤·¤¤¼Ì¿¿¤Î¸¡º÷');
define('SELECT_DIR', '¥Ç¥£¥ì¥¯¥È¥êÁªÂò');
define('SELECT_DIR_MSG', '¤³¤³¤Ç¤ÏFTP¤Ë¤è¤ê¥µ¡¼¥Ð¤Ë¥¢¥Ã¥×¥í¡¼¥É¤·¤¿¼Ì¿¿¤ò¥¢¥ë¥Ð¥à¤Ë°ì³çÅÐÏ¿¤·¤Þ¤¹<br /><br />¼Ì¿¿¤ò¥¢¥Ã¥×¥í¡¼¥É¤·¤¿¥Ç¥£¥ì¥¯¥È¥ê¤òÁªÂò¤·¤Æ¤¯¤À¤µ¤¤¡£');
define('NO_PIC_TO_ADD', 'ÄÉ²Ã¤¹¤ë¼Ì¿¿¤Ï¤¢¤ê¤Þ¤»¤ó¡£');
define('NEED_ONE_ALBUM', '¤³¤Îµ¡Ç½¤ò»È¤¦¤¿¤á¤Ë¤Ï1¤Ä°Ê¾å¤Î¥¢¥ë¥Ð¥à¤¬É¬Í×¤Ç¤¹¡£');
define('WARNING', '·Ù¹ð');
define('CHANGE_PERM', '¥¹¥¯¥ê¥×¥È¤¬¤³¤Î¥Ç¥£¥ì¥¯¥È¥ê¤Ë½ñ¹þ¤á¤Þ¤»¤ó¤Ç¤·¤¿¡£¼Ì¿¿¤òÄÉ²Ã¤¹¤ëÁ°¤Ë¥Ç¥£¥ì¥¯¥È¥ê¤Î¥Ñ¡¼¥ß¥Ã¥·¥ç¥ó¥â¡¼¥É¤ò755Ëô¤Ï777¤ËÊÑ¹¹¤¹¤ëÉ¬Í×¤¬¤¢¤ê¤Þ¤¹ !');
define('TARGET_ALBUM', '<b>¡Ö</b>%s<b>¡×Æâ¤Î¼Ì¿¿¤ò</b>%s<b>¤ËÄÉ²Ã¤¹¤ë</b>');
define('FOLDER', '¥Õ¥©¥ë¥À');
define('IMAGE', '²èÁü');
define('ALBUM', '¥¢¥ë¥Ð¥à');
define('RESULT', '·ë²Ì');
define('DIR_RO', '½ñ¹þ¤ß¸¢¤¬¤¢¤ê¤Þ¤»¤ó¡£');
define('DIR_CANT_READ', 'ÆÉ¼è¤ê¸¢¤¬¤¢¤ê¤Þ¤»¤ó¡£');
define('INSERT', '¿·µ¬¼Ì¿¿¤Î¥®¥ã¥é¥ê¡¼¤Ø¤ÎÄÉ²Ã');
define('LIST_NEW_PIC', '¿·µ¬¼Ì¿¿°ìÍ÷');
define('INSERT_SELECTED', 'ÁªÂò¤·¤¿¼Ì¿¿¤ÎÄÉ²Ã');
define('NO_PIC_FOUND', '¿·¤·¤¤¼Ì¿¿¤Ï¸«¤Ä¤«¤ê¤Þ¤»¤ó¤Ç¤·¤¿¡£');
define('BE_PATIENT', '»Ã¤¯¤ªÂÔ¤Á¤¯¤À¤µ¤¤¡¢¥¹¥¯¥ê¥×¥È¤¬¼Ì¿¿¤òÄÉ²Ã¤¹¤ë¤Ë¤Ï»þ´Ö¤¬É¬Í×¤Ç¤¹¡£');
define('NOTES', '<ul><li><b>OK</b> : Àµ¾ï¤Ë¼Ì¿¿¤¬ÄÉ²Ã¤µ¤ì¤Þ¤·¤¿¡£<li><b>DP</b> : ¼Ì¿¿¤¬½ÅÊ£¤·¤Æ´û¤Ë¥Ç¡¼¥¿¥Ù¡¼¥¹¤ËÅÐÏ¿¤µ¤ì¤Æ¤¤¤Þ¤¹¡£<li><b>PB</b> : ¼Ì¿¿¤òÄÉ²Ã½ÐÍè¤Þ¤»¤ó¤Ç¤·¤¿¡¢ÀßÄêµÚ¤Ó¼Ì¿¿¤¬ÅÐÏ¿¤µ¤ì¤ë¥Ç¥£¥ì¥¯¥È¥ê¤Î¥Ñ¡¼¥ß¥Ã¥·¥ç¥ó¤ò³ÎÇ§¤·¤Æ¤¯¤À¤µ¤¤¡£<li>OK¡¢DP¡¢PB¥µ¥¤¥ó¤Î¤¤¤º¤ì¤âÉ½¼¨¤µ¤ì¤Ê¤«¤Ã¤¿¾ì¹ç¤Ï¡¢PHP¥¨¥é¡¼¤òÉ½¼¨¤¹¤ë¤¿¤á¤ËÇËÂ»¤·¤¿¼Ì¿¿¤ò¥¯¥ê¥Ã¥¯¤·¤Æ¤¯¤À¤µ¤¤¡£<li>¥¿¥¤¥à¥¢¥¦¥È¤¬È¯À¸¤·¤¿¾ì¹ç¡¢¥Ö¥é¥¦¥¶¤Î¹¹¿·¥Ü¥¿¥ó¤ò¥¯¥ê¥Ã¥¯¤·¤Æ¤¯¤À¤µ¤¤¡£</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('TITLE', '¼Ì¿¿¤Î¥¢¥Ã¥×¥í¡¼¥É');
define('MAX_FSIZE', '¥¢¥Ã¥×¥í¡¼¥É²ÄÇ½¤ÊºÇÂç¥Õ¥¡¥¤¥ë¥µ¥¤¥º¤Ï%sKB¤Ç¤¹¡£');
define('ALBUM', '¥¢¥ë¥Ð¥à');
define('PICTURE', '¼Ì¿¿');
define('PIC_TITLE', '¼Ì¿¿Ì¾');
define('DESCRIPTION', '¼Ì¿¿¤ÎÀâÌÀ');
define('KEYWORDS', '¥­¡¼¥ï¡¼¥É (È¾³Ñ¥¹¥Ú¡¼¥¹¤Ç¶èÀÚ¤ë)');
define('ERR_NO_ALB_UPLOADABLES', '¼Ì¿¿¤Î¥¢¥Ã¥×¥í¡¼¥É¤¬µö²Ä¤µ¤ì¤¿¥¢¥ë¥Ð¥à¤Ï¤¢¤ê¤Þ¤»¤ó¡£');

// lang_usermgr_php
define('TITLE', '¥æ¡¼¥¶¤Î´ÉÍý');
define('NAME_A', '¥æ¡¼¥¶Ì¾¤Î¾º½ç');
define('NAME_D', '¥æ¡¼¥¶Ì¾¤Î¹ß½ç');
define('GROUP_A', '¥°¥ë¡¼¥×Ì¾¤Î¾º½ç');
define('GROUP_D', '¥°¥ë¡¼¥×Ì¾¤Î¹ß½ç');
define('REG_A', 'ÅÐÏ¿Æü¤Î¾º½ç');
define('REG_D', 'ÅÐÏ¿Æü¤Î¹ß½ç');
define('PIC_A', '¼Ì¿¿Ëç¿ô¤Î¾º½ç');
define('PIC_D', '¼Ì¿¿Ëç¿ô¤Î¹ß½ç');
define('DISKU_A', '¥Ç¥£¥¹¥¯»ÈÍÑÎÌ¤Î¾º½ç');
define('DISKU_D', '¥Ç¥£¥¹¥¯»ÈÍÑÎÌ¤Î¹ß½ç');
define('SORT_BY', '¥æ¡¼¥¶¤ÎÊÂ¤ÓÂØ¤¨');
define('ERR_NO_USERS', '¥æ¡¼¥¶¥Æ¡¼¥Ö¥ë¤¬¶õ¤Ç¤¹ !');
define('ERR_EDIT_SELF', '¼«Ê¬¼«¿È¤Î¥×¥í¥Õ¥£¡¼¥ë¤ÏÊÔ½¸¤Ç¤­¤Þ¤»¤ó¡£¡Ö¥Þ¥¤¥×¥í¥Õ¥£¡¼¥ë¡×¤ò»ÈÍÑ¤·¤Æ¤¯¤À¤µ¤¤¡£');
define('EDIT', 'ÊÔ½¸');
define('DELETE', 'ºï½ü');
define('NAME', '¥æ¡¼¥¶Ì¾');
define('GROUP', '¥°¥ë¡¼¥×');
define('INACTIVE', 'Èó³èÀ­');
define('OPERATIONS', 'Áàºî');
define('PICTURES', '¼Ì¿¿');
define('DISK_SPACE', '»ÈÍÑºÑ¤ßÍÆÎÌ / ÍÆÎÌ');
define('REGISTERED_ON', 'ÅÐÏ¿Ç¯·îÆü');
define('U_USER_ON_P_PAGES', '¥æ¡¼¥¶¿ô %d / %d¥Ú¡¼¥¸Ãæ');
define('CONFIRM_DEL', 'ËÜÅö¤Ë¤³¤Î¥æ¡¼¥¶¤òºï½ü¤·¤Æ¤âµ¹¤·¤¤¤Ç¤¹¤« ? \\¥æ¡¼¥¶¤ËÂ°¤¹¤ëÁ´¤Æ¤Î¼Ì¿¿¤È¥¢¥ë¥Ð¥à¤Ïºï½ü¤µ¤ì¤Þ¤¹¡£');
define('MAIL', '¥á¡¼¥ë');
define('ERR_UNKNOWN_USER', 'ÁªÂò¤·¤¿¥æ¡¼¥¶¤ÏÂ¸ºß¤·¤Þ¤»¤ó !');
define('MODIFY_USER', '¥æ¡¼¥¶¤ÎÊÑ¹¹');
define('NOTES', 'Ãí°Õ');
define('NOTE_LIST', '<li>¸½ºß¤Î¥Ñ¥¹¥ï¡¼¥É¤òÊÑ¹¹¤·¤¿¤¯¤Ê¤¤¾ì¹ç¤Ï¡¢¡Ö¥Ñ¥¹¥ï¡¼¥É¡×¥Õ¥£¡¼¥ë¥É¤ò¶õÇò¤Ë¤·¤Æ¤¯¤À¤µ¤¤¡£');
define('PASSWORD', '¥Ñ¥¹¥ï¡¼¥É');
define('USER_ACTIVE', '¥æ¡¼¥¶¤ò³èÀ­²½¤¹¤ë');
define('USER_GROUP', '¥°¥ë¡¼¥×');
define('USER_EMAIL', '¥á¡¼¥ë¥¢¥É¥ì¥¹');
define('USER_WEB_SITE', '¥Û¡¼¥à¥Ú¡¼¥¸');
define('CREATE_NEW_USER', '¿·µ¬¥æ¡¼¥¶¤ÎºîÀ®');
define('USER_FROM', 'µï½»ÃÏ');
define('USER_INTERESTS', '¶½Ì£¤Î¤¢¤ë¤³¤È');
define('USER_OCC', '¿¦¶È');

// lang_util_php
define('TITLE', '¼Ì¿¿¤Î¥ê¥µ¥¤¥º');
define('WHAT_IT_DOES', '½èÍýÆâÍÆ');
define('WHAT_UPDATE_TITLES', '¥¿¥¤¥È¥ë¤ò¥Õ¥¡¥¤¥ëÌ¾¤Ç¹¹¿·¤¹¤ë');
define('WHAT_DELETE_TITLE', '¥¿¥¤¥È¥ë¤Îºï½ü');
define('WHAT_REBUILD', '¥µ¥à¥Í¥¤¥ë¤ÎºÆ¹½ÃÛµÚ¤Ó¼Ì¿¿¤Î¥ê¥µ¥¤¥º');
define('WHAT_DELETE_ORIGINALS', '¥ª¥ê¥¸¥Ê¥ë¥µ¥¤¥º¤Î²èÁü¤òºï½ü¤·¤Æ¡¢¥µ¥¤¥ºÊÑ¹¹¸å¤Î²èÁü¤ÈÆþ¤ìÂØ¤¨¤ë');
define('FILE', '¥Õ¥¡¥¤¥ë');
define('TITLE_SET_TO', '¥¿¥¤¥È¥ëÀßÄê');
define('SUBMIT_FORM', 'Á÷¿®');
define('UPDATED_SUCCESFULLY', '¹¹¿·´°Î»');
define('ERROR_CREATE', 'ºîÀ®Ãæ¤Ë¥¨¥é¡¼¤¬È¯À¸¤·¤Þ¤·¤¿');
define('CONTINUE', '¤µ¤é¤Ë²èÁü¤ò½èÍý¤¹¤ë');
define('MAIN_SUCCESS', '¥Õ¥¡¥¤¥ë %s ¤¬¥á¥¤¥ó¼Ì¿¿¤ËÀßÄê¤µ¤ì¤Þ¤·¤¿');
define('ERROR_RENAME', '%s ¤ò %s ¤Ë¥ê¥Í¡¼¥àÃæ¤Ë¥¨¥é¡¼¤¬È¯À¸¤·¤Þ¤·¤¿');
define('ERROR_NOT_FOUND', '¥Õ¥¡¥¤¥ë %s ¤¬¸«¤Ä¤«¤ê¤Þ¤»¤ó¤Ç¤·¤¿');
define('BACK', '¥á¥¤¥ó¤ËÌá¤ë');
define('THUMBS_WAIT', '¥µ¥à¥Í¥¤¥ë¤Î¹¹¿· µÚ¤Ó/¤Þ¤¿¤Ï ¼Ì¿¿¤Î¥ê¥µ¥¤¥º¤ò¹Ô¤Ã¤Æ¤¤¤Þ¤¹¡¢¤ªÂÔ¤Á¤¯¤À¤µ¤¤...');
define('THUMBS_CONTINUE_WAIT', '¥µ¥à¥Í¥¤¥ë¤Î¹¹¿· µÚ¤Ó/¤Þ¤¿¤Ï ¼Ì¿¿¤Î¥ê¥µ¥¤¥º¤ò¹Ô¤Ã¤Æ¤¤¤Þ¤¹...');
define('TITLES_WAIT', '¥¿¥¤¥È¥ë¤Î¹¹¿·¤ò¹Ô¤Ã¤Æ¤¤¤Þ¤¹¡¢¤ªÂÔ¤Á¤¯¤À¤µ¤¤...');
define('DELETE_WAIT', '¥¿¥¤¥È¥ë¤òºï½ü¤·¤Æ¤¤¤Þ¤¹¡¢¤ªÂÔ¤Á¤¯¤À¤µ¤¤...');
define('REPLACE_WAIT', '¥ª¥ê¥¸¥Ê¥ë¥µ¥¤¥º¤Î²èÁü¤òºï½ü¤·¤ÆÊÑ¹¹¸å¤Î²èÁü¤ÈÆþ¤ìÂØ¤¨¤ò¹Ô¤Ã¤Æ¤¤¤Þ¤¹¡¢¤ªÂÔ¤Á¤¯¤À¤µ¤¤..');
define('INSTRUCTION', '¥¯¥¤¥Ã¥¯¥¤¥ó¥¹¥È¥é¥¯¥·¥ç¥ó');
define('INSTRUCTION_ACTION', '¥¢¥¯¥·¥ç¥ó¤ÎÁªÂò');
define('INSTRUCTION_PARAMETER', '¥Ñ¥é¥á¡¼¥¿¤ÎÀßÄê');
define('INSTRUCTION_ALBUM', '¥¢¥ë¥Ð¥à¤ÎÁªÂò');
define('INSTRUCTION_PRESS', '%s ¤ò²¡¤¹');
define('UPDATE', '¥µ¥à¥Í¥¤¥ë¤Î¹¹¿· µÚ¤Ó/¤Þ¤¿¤Ï ¼Ì¿¿¤Î¥ê¥µ¥¤¥º');
define('UPDATE_WHAT', '¹¹¿·ÂÐ¾Ý');
define('UPDATE_THUMB', '¥µ¥à¥Í¥¤¥ë¤ÎºîÀ®¤Î¤ß');
define('UPDATE_PIC', '¼Ì¿¿¤Î¥ê¥µ¥¤¥º¤Î¤ß');
define('UPDATE_BOTH', '¥µ¥à¥Í¥¤¥ë¤ÎºîÀ®µÚ¤Ó¼Ì¿¿¤Î¥ê¥µ¥¤¥º');
define('UPDATE_NUMBER', '¥¯¥ê¥Ã¥¯¤¢¤¿¤ê¤Î²èÁü½èÍý¿ô');
define('UPDATE_OPTION', '(¥¿¥¤¥à¥¢¥¦¥È¤¹¤ë»þ¤Ï¡¢¤³¤Î¿ôÃÍ¤òÄã¤á¤ËÀßÄê¤·¤Æ¤¯¤À¤µ¤¤)');
define('FILENAME_TITLE', '¥Õ¥¡¥¤¥ëÌ¾ &rArr; ¼Ì¿¿¥¿¥¤¥È¥ë');
define('FILENAME_HOW', '¥Õ¥¡¥¤¥ëÌ¾¤ÎÊÑ¹¹ÊýË¡');
define('FILENAME_REMOVE', '.jpg¤ò¶õÇòÉÕ¤­¤Î _ (¥¢¥ó¥À¡¼¥¹¥³¥¢)¤ËÊÑ¹¹¤¹¤ë');
define('FILENAME_EURO', '2003_11_23_13_20_20.jpg ¤ò 23/11/2003 13:20 ¤ËÊÑ¹¹¤¹¤ë');
define('FILENAME_US', '2003_11_23_13_20_20.jpg ¤ò 11/23/2003 13:20 ¤ËÊÑ¹¹¤¹¤ë');
define('FILENAME_TIME', '2003_11_23_13_20_20.jpg ¤ò 13:20 ¤ËÊÑ¹¹¤¹¤ë');
define('DELETE', '¼Ì¿¿¥¿¥¤¥È¥ë¤Þ¤¿¤Ï¥ª¥ê¥¸¥Ê¥ë¥µ¥¤¥º¤Î¼Ì¿¿¤òºï½ü¤¹¤ë');
define('DELETE_TITLE', '¼Ì¿¿¤Î¥¿¥¤¥È¥ë¤òºï½ü¤¹¤ë');
define('DELETE_ORIGINAL', '¥ª¥ê¥¸¥Ê¥ë¥µ¥¤¥º¤Î¼Ì¿¿¤òºï½ü¤¹¤ë');
define('DELETE_REPLACE', '¥ª¥ê¥¸¥Ê¥ë¥µ¥¤¥º¤Î²èÁü¤òºï½ü¤·¤Æ¡¢¥µ¥¤¥ºÊÑ¹¹¸å¤Î²èÁü¤ÈÆþ¤ìÂØ¤¨¤ë');
define('SELECT_ALBUM', '¥¢¥ë¥Ð¥à¤ÎÁªÂò');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?> 