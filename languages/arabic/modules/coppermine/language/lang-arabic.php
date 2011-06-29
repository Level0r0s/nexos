<?php
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
/*   $Id: lang-arabic.php,v 1.1 2004/07/15 20:39:00 akamu Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Arabic');
define('LANG_NAME_NATIVE', 'ÚÑÈí');
define('LANG_COUNTRY_CODE', 'ar');
define('TRANS_NAME', 'Waheed Alsayer');
define('TRANS_EMAIL', 'waheed@shamayel.com');
define('TRANS_WEBSITE', 'http://www.shamayel.com/');
define('TRANS_DATE', '2003-10-02');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'windows-1256');

// ltr or rtl
define('TEXT_DIR', 'rtl');

// left is for port compliancy
define('YES', 'äÚã');
define('NO', 'áÇ');

// some common strings
define('BACK', 'ÑÌæÚ');
define('CONTINUE', 'ÇÓÊãÑ');
define('INFO', 'ãÚáæãÇÊ');
define('ERROR', 'ÎØÃ');

//// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%d/%m/%y at %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y at %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y at %I:%M %p');

// short names for Byte, Kilo, Mega
$lang_byte_units = array('ÈÇíÊ','ß.È','ã.È',);

// Day of week
$lang_day_of_week = array('ÇÍÏ','ÇËäíä','ËáÇËÇÁ','ÇÑÈÚÇÁ','ÎãíÓ','ÌãÚÉ','ÓÈÊ',);
// Day of the month
$lang_month = array('íäÇíÑ','İÈÑÇíÑ','ãÇÑÓ','ÇÈÑíá','ãÇíæ','íæäíæ','íæáíæ','ÇÛÓØÓ','ÓÈÊãÈÑ','ÇßÊæÈÑ','äæİãÈÑ','ÏíÓãÈÑ');
// For the word censor
$lang_bad_words = array('*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*',);
// lang_meta_album_names
define('RANDOM', 'ÕæÑ ÚÔæÇÆíÜÜÜÉ');
define('LASTUP', 'ÂÎÜÜÑ ÇÖÇİÜÜÇÊ');
define('LASTUPBY', 'ÇÖÇİÇÊí ÇáÃÎíÑÉ');
define('LASTALB', 'ÂÎÑ ÃáÈæãÇÊ Êã ÊÍÏíËåÇ');
define('LASTCOM', 'ÂÎÑ ãáÇÍÙÜÜÇÊ');
define('LASTCOMBY', 'ÊÚáíŞÇÊí ÇáÃÎíÑÉ');
define('TOPN', 'ÇßËÑåÇ ãÔÇåÏÉ');
define('TOPRATED', 'ÇÚáÇåÇ ÊŞííãÇ');
define('LASTHITS', 'ÂÎÑ ãÇ ÔæåÏ');
define('SEARCH', 'äÊÇÆÌ ÇáÈÍÜË');
define('FAVPICS', 'ÕæÑ ãİÖáÉ');

// lang_errors
define('ACCESS_DENIED', 'áíÜÓ áÏíß ÇáÕáÇÍíÉ áÏÎæá åĞå ÇáÕİÍÉ.');
define('PERM_DENIED', 'áíÓ áÏíß ÇáÕáÇÍíÉ ááŞíÇã ÈÊáß ÇáÕáÇÍíÉ.');
define('PARAM_MISSING', 'áŞÏ äæÏí ÇáÈÑäÇãÌ ÈÏæä ãÊÛíÑÇÊ.');
define('NON_EXIST_AP', 'ÇáÃáÈæã Ãæ ÇáÕæÑÉ ÇáãÎÊÇÑÉ ÛíÑ ãæÌæÏÉ!');
define('QUOTA_EXCEEDED', 'ÊÎØíÊ ÍÏæÏ ÇáÊÎÒíä<br /><br />ÇáãÓÇÍÉ ÇáãÓãæÍÉ áß [quota]K, ÕæÑß ÊÍÊá ãÓÇÍÉ [space]K, æÈÅÖÇİÉ åĞå ÇáÕæÑÉ Óæİ ÊÊÎØì ÍÏæÏ ÇáÊÎÒíä ÇáãÓãæÍÉ áß.');
define('GD_FILE_TYPE_ERR', 'ÚäÏ ÇÓÊÚãÇá ãßÊÈÉ GD ááÈÑÇãÌ áÇ íÓãÍ ÅáÇ ÈÜãáİÇÊ  JPEG æ PNG.');
define('INVALID_IMAGE', 'ÇáÕæÑÉ ÇáãÍãáÉ ÛíÑ ÕÇáÍÉ Çæ áã ÊÚÇáÌ ÈãßÊÈÉ GD');
define('RESIZE_FAILED', 'áã ÇÓÊØÚ Êßæíä ÇÎÊÕÇÑ ÇáÕæÑÉ Çæ ÊÕÛíÑåÇ.');
define('NO_IMG_TO_DISPLAY', 'áÇ ÊæÌÏ ÕæÑÉ ááÚÑÖ');
define('NON_EXIST_CAT', 'ÇáÊÕäíİ ÇáãÎÊÇÑ ÛíÑ ãæÌæÏ');
define('ORPHAN_CAT', 'ÊÕäíİ áíÓ áå ÊÕäíİ ÑÆíÓí, ÔÛá ãÏíÑ ÇáÊÕäíİÇÊ áÚáÇÌ ÇáãÔßáÉ.');
define('DIRECTORY_RO', 'ÇáÏáíá \'%s\' ÛíÑ ŞÇÈá ááßÊÇÈÉ, áÇ ÇÓÊØíÚ ÇáÛÇÁ ÇáÕæÑÉ');
define('NON_EXIST_COMMENT', 'ÇáÊÚáíŞ ÇáãÎÊÇÑ ÛíÑ ãæÌæÏ.');
define('PIC_IN_INVALID_ALBUM', 'ÇáÕæÑÉ ÛíÑ ãæÌæÏÉ İí ÇáÇáÈæã (%s)!?');
define('BANNED', 'ÇäÊ ããäæÚ ãä ÇÓÊÚãÇá ÇáãæŞÚ ÍÇáíÇ.');
define('NOT_WITH_UDB', 'åĞå ÇáãíÒÉ ãÚØáÉ İí Coppermine áÃäåÇ ãÏãæÌÉ ãÚ ÇáãäÊÏì. ÇãÇ ãÇ ÊæÏ ÇáŞíÇã Èå ÛíÑ ãÏÚæã, Ãæ Çä ÈÑäÇãÌ ÇáãäÊÏì íŞæã ÈäİÓ ÇáãåãÉ.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', 'ÇäÊŞá Çáì ŞÇÆãÉ ÇáÇáÈæãÇÊ');
define('ALB_LIST_LNK', 'ŞÇÆãÉ ÇáÇáÈæãÇÊ');
define('MY_GAL_TITLE', 'ÇäÊŞá Çáì ÇáÈæãí ÇáÎÇÕ');
define('MY_GAL_LNK', 'ÇáÈæãí ÇáÎÇÕ');
define('MY_PROF_LNK', 'ÊÚÑíİí');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'ÊÍæíá Çáì æÇÌåÉ ÇáÇÏÇÑÉ');
define('ADM_MODE_LNK', 'ÍÇáÉ ÇáÇÏÇÑÉ');
define('USR_MODE_TITLE', 'ÊÍæíá Çáì æÇÌåÉ ÇáÇÓÊÚãÇá');
define('USR_MODE_LNK', 'ÍÇáÉ ÇáãÓÊÎÏã');
define('UPLOAD_PIC_TITLE', 'ÊÍãíá ÇáÕæÑÉ İí ÇáÇáÈæã');
define('UPLOAD_PIC_LNK', 'ÊÍãíá ÇáÕæÑÉ');
define('REGISTER_TITLE', 'Êßæíä ÍÓÇÈ');
define('REGISTER_LNK', 'ÊÓÌíá');
define('LOGIN_LNK', 'ÏÎæá');
define('LOGOUT_LNK', 'ÎÑæÌ');
define('LASTUP_LNK', 'ÂÎÑ ÊÍãíá');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'ÂÎÑ ÊÚáíŞÇÊ');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'ÇßËÑ ÇáÕæÑ ãØÇáÚÉ');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'ÇÚáì ÇáÕæÑ ÊŞííãÇ');
define('SEARCH_LNK', 'ÇÈÍË');
define('FAV_LNK', 'ÇáãİÖáÉ');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'ÇáãæÇİŞÉ Úáì ÇáÊÍãíá');
define('CONFIG_LNK', 'ÊÚííÑ');
define('ALBUMS_LNK', 'ÇáÇáÈæãÇÊ');
define('CATEGORIES_LNK', 'ÇáÊÕäíİÇÊ');
define('USERS_LNK', 'ÇáãÓÊÎÏãíä');
define('GROUPS_LNK', 'ãÌãæÚÇÊ');
define('COMMENTS_LNK', 'ÊÚáíŞÇÊ');
define('SEARCHNEW_LNK', 'ÇÖİ ãÌãæÚÉ ãä ÇáÕæÑ');
define('UTIL_LNK', 'ÊÛííÑ ŞíÇÓÇÊ ÇáÕæÑ');
define('BAN_LNK', 'ãäÚ ÇáãÓÊÎÏãíä');

// lang_user_admin_menu
define('ALBMGR_LNK', 'ÇÎáŞ / ÇİÑÒ ÇáÈæãÇÊí');
define('MODIFYALB_LNK', 'ÊÚÏíá ÇáÈæãÇÊí');
define('MY_PROF_LNK', 'Çáãáİ ÇáÔÎÕí');

// lang_cat_list
define('CATEGORY', 'ÇáÊÕäíİ');
define('ALBUMS', 'ÇáÇáÈæãÇÊ');
define('PICTURES', 'ÇáÕæÑ');

// lang_album_list
define('ALBUM_ON_PAGE', '%d ÇáÈæã İí %d ÕİÍÉ');

// lang_thumb_view
define('DATE', 'ÇáÊÇÑíÎ');
define('NAME', 'ÇÓã Çáãáİ');
define('TITLE', 'ÇáÚäæÇä');
define('SORT_DA', 'ÊÑÊíÈ ÊÕÇÚÏí ÍÓÈ ÇáÊÇÑíÎ');
define('SORT_DD', 'ÊÑÊíÈ ÊäÇÒáí ááÊÇÑíÎ');
define('SORT_NA', 'ÊÑÊíÈ ÊÕÇÚÏí ááÇÓã');
define('SORT_ND', 'ÊÑÊíÈ ÊäÇÒáí ááÇÓã');
define('SORT_TA', 'ÊÑÊíÈ ÇáÚäæÇä ÊÕÇÚÏí');
define('SORT_TD', 'ÊÑÊíÈ ÇáÚäæÇä ÊäÇÒáí');
define('PIC_ON_PAGE', '%d ÕæÑÉ İí %d ÕİÍÉ/ÕİÍÇÊ');
define('USER_ON_PAGE', '%d ãÓÊÎÏã İí %d ÕİÍÉ');
define('SORT_RA', 'ÊÑÊíÈ ÇáÊŞííã ÊÕÇÚÏíÇ');
define('SORT_RD', 'ÊÑÊíÈ ÇáÊŞííã ÊäÇÒáíÇ');
define('RATING', 'ÇáÊŞííã');
define('SORT_TITLE', 'ÊÑÊíÈ ÇáÕæÑ ÍÓÈ:');

// lang_img_nav_bar
define('THUMB_TITLE', 'ÇáÑÌæÚ Çáì ÇáãÎÊÕÑÇÊ');
define('PIC_INFO_TITLE', 'ÇÙåÑ/ÇÎİí ãÚáæãÇÊ ÇáÕæÑ');
define('SLIDESHOW_TITLE', 'ÚÑÖ Âáí');
define('SLIDESHOW_DISABLED', 'ÇáÈØÇŞÇÊ ÇáÇáßÊÑæäíÉ ãÚØáÉ');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'ÇÑÓá ÇáÕæÑÉ ßÈÑíÏ');
define('ECARD_DISABLED', 'ÇáÕæÑ ÇáÈÑíÏÉ ãÚØáÉ');
define('ECARD_DISABLED_MSG', 'áíÓ áÏíß ÇáÕáÇÍíÉ áÇÑÓÇá ÕæÑ ÈÑíÏíÉ');
define('PREV_TITLE', 'ÇáÕæÑÉ ÇáÓÇÈŞÉ');
define('NEXT_TITLE', 'ÇáÕæÑÉ ÇáÊí ÊáíåÜÇ');
define('PIC_POS', 'ÕÜæÑå %s/%s');
define('NO_MORE_IMAGES', 'áÇ ÊæÌÏ ÕæÑ ÇÖÇİíÉ İí ÇáãÚÑÖ');
define('NO_LESS_IMAGES', 'åĞå åí Çæá ÕæÑÉ İí ÇáãÚÑÖ');

// lang_rate_pic
define('RATE_THIS_PIC', 'ŞíÜã åĞå ÇáÕæÑÉ');
define('NO_VOTES', '(áÇ íæÌÏ ÊÕæíÊ)');
define('RATING', '(ÇáÊÕæíÊ ÇáÍÇáí: %s / 5 ãä %s ÊÕæíÊ)');
define('RUBBISH', 'ÓíÜÆÉ');
define('POOR', 'ÛíÑ ãŞÈæáÉ');
define('FAIR', 'ãŞÈæáÉ');
define('GOOD', 'ÌíÜÏÉ');
define('EXCELLENT', 'ããÊÜÇÒÉ');
define('GREAT', 'ãĞåáÜÉ');

// lang_cpg_die
define('INFORMATION', 'ãÚáæãÇÊ');
define('ERROR', 'ÎØÃ');
define('CRITICAL_ERROR', 'ÎØÃ ÎØíÑ');
define('FILE', 'ãáİ: ');
define('LINE', 'ÇáÓØÑ: ');

// lang_display_thumbnails
define('FILENAME', 'ÇÓã Çáãáİ : ');
define('FILESIZE', 'ÇáÍÌã : ');
define('DIMENSIONS', 'ÇáÇÈÚÇÏ : ');
define('DATE_ADDED', 'ÇÖíİ İí : ');

// lang_get_pic_data
define('N_COMMENTS', '%s ÊÚáíŞ');
define('N_VIEWS', '%s ãÔÇåÏÉ');
define('N_VOTES', '(%s ÊÕæíÊ)');

// lang_smilies_inc_php
define('EXCLAMATION', 'ÊÚÌÈ');
define('QUESTION', 'ÇÓÊİåÇã');
define('VERY HAPPY', 'ÓÚíÏ ÌÏÇ');
define('SMILE', 'ÇÈÊÓÇãÉ');
define('SAD', 'ÍÒíä');
define('SURPRISED', 'ÊÚÌÈ');
define('SHOCKED', 'ãÏåæÔ');
define('CONFUSED', 'ãÑÊÈß');
define('COOL', 'ÚÌíÈ');
define('LAUGHING', 'íÖÍß');
define('MAD', 'ÛÇÖÈ');
define('RAZZ', 'Razz');
define('EMBARASSED', 'ãÍÑÌ');
define('CRYING OR VERY SAD', 'íÈßí Ãæ ÍÒíä ÌÏÇ');
define('EVIL OR VERY MAD', 'ÔíØÇäí Ãæ ÛÇÖÈ ÌÏÇ');
define('TWISTED EVIL', 'Twisted Evil');
define('ROLLING EYES', 'Úíæä ÍÇÆÑÉ');
define('WINK', 'íÛãÒ');
define('IDEA', 'İßÑÉ');
define('ARROW', 'Óåã');
define('NEUTRAL', 'ÚÇÏí');
define('MR. GREEN', 'Mr. Green');

// lang_admin_php
define('LV_ADMIN', 'ÇäÊ ÇáÂä ÊÊÑß ÍÇáÉ ÇáÇÏÇÑÉ...');
define('ENT_ADMIN', 'ÇäÊ ÇáÂä ÊÏÎá ÍÇáÉ ÇáÇÏÇÑÉ...');

// lang_albmgr_php
define('ALB_NEED_NAME', 'ÇáÃáÈæã ÈÍÇÌÉ Çáì ÅÓÜã !');
define('CONFIRM_MODIFS', 'åá ÃäÊ ãÊÃßøÏ Ãäøß ÊÑíÏ Úãá åĞå ÇáÊøÚÏíáÇÊ  ?');
define('NO_CHANGE', 'áã ÊŞã ÈÃí ÊÛííÑ !');
define('NEW_ALBUM', 'ÇáÈÜæã ÌÏíÏ');
define('CONFIRM_DELETE1', 'åá ÃäÊ ãÊÃßÏ ááÃÛÇÁ åĞÇ ÇáÃáÈæã ?');
define('CONFIRM_DELETE2', '\\nÓæİ íÊã ÍĞİ ÇáÕæÑ æ ÇáãáÇÍÙÇÊ !');
define('SELECT_FIRST', 'ÇÏÎá ÇÓã ÇáÃáÈæã ÃæáÇğ');
define('ALB_MRG', 'ÇáÊÍßã ÈÇáÃáÈæã');
define('MY_GALLERY', '* ãÚÑÖÜí *');
define('NO_CATEGORY', '* ÇáãÚÑÖ ÛíÑ ãæÌæÏ *');
define('DELETE', 'ÇáÛÜÇÁ');
define('NEW', 'ÌÏíÏ');
define('APPLY_MODIFS', 'ÇÓÊÚãá ÇáÊøÚÏíáÇÊ ');
define('SELECT_CATEGORY', 'ÇáÕøäİ ÇáãÎÊÇÑ ');

// lang_catmgr_php
define('MISS_PARAM', 'ÇáãÚáæãÇÊ ÇáãØáæÈÉ ááÚãáíÉ \'%s\'áã ÊÚØì !');
define('UNKNOWN_CAT', 'ÇáÊÕäíİ ÇáãÎÊÇÑ ÛíÑ ãÚÑæİ');
define('USERGAL_CAT_RO', 'áÇíÓãÍ ÈÇáÛÇÁ ÊÕäíİ ÇáãÓÊÎÏãíä !');
define('MANAGE_CAT', 'ÇÏÇÑÉ ÇáÊÕäíİÇÊ');
define('CONFIRM_DELETE', 'åá ÇäÊ ãÊÃßÏ ãä ÇáÛÇÁ åĞÇ ÇáÊÕäíİ');
define('CATEGORY', 'ÇáÊÕäíİ');
define('OPERATIONS', 'ÇáÚãáíÇÊ');
define('MOVE_INTO', 'ÇäŞá Çáì');
define('UPDATE_CREATE', 'ÊÍÏíË Ãæ Êßæíä ÊÕäíİ');
define('PARENT_CAT', 'ÇáÊÕäíİ ÇáÃÈ');
define('CAT_TITLE', 'ÚäæÇä ÇáÊÕäíİ');
define('CAT_DESC', 'ÔÑÍ ÇáÊÕäíİ');

// lang_config_php
define('TITLE', 'ÇáÅÚÜÜÜÏÇÏÊ');
define('RESTORE_CFG', 'ÊÌÇåÜá ÇáÊÛííÑÇÊ');
define('SAVE_CFG', 'áÍİÜÙ ÇáÅÚÏÇÏÇÊ');
define('NOTES', 'ãáÇÍÙÜÜÇÊ');
define('INFO', 'ÇáãÚÜáæãÜÇÊ');
define('UPD_SUCCESS', 'áŞÏ Êã ÊÍÏíË ÇáÅÚÜÏÇÏÊ');
define('RESTORE_SUCCESS', 'Êã ÇÑÌÇÚ ÇáÇÚÏÇÏÇÊ ÇáÇÕáíÉ');
define('NAME_A', 'ÊÕÇÚÏí Úáì ÇáÇÓã');
define('NAME_D', 'ÊäÇÒáí Úáì ÇáÇÓã');
define('TITLE_A', 'ÊÕÇÚÏí Úáì ÇáÚäæÇä');
define('TITLE_D', 'ÊäÇÒáí Úáì ÇáÚäæÇä');
define('DATE_A', 'ÊÇÑíÎ ÊÕÇÚÏí');
define('DATE_D', 'ÊÇÑíÎ ÊäÇÒáí');
define('RATING_A', 'ÇáÊŞííã ÊÕÇÚÏíÇ');
define('RATING_D', 'ÇáÊŞííã ÊäÇÒáíÇ');
define('TH_ANY', 'ÇßÈÑ ŞíÇÓ');
define('TH_HT', 'ÇáÇÑÊİÇÚ');
define('TH_WD', 'ÇáÚÑÖ');

// lang_config_data
define('CONFIG_GENSET', 'ÇÚÏÇÏÇÊ ÚÇãÉ');
define('GALLERY_NAME', 'ÇÓã ÇáãÚÑÖ');
define('GALLERY_DESCRIPTION', 'ÔÑÍ ÇáãÚÑÖ');
define('GALLERY_ADMIN_EMAIL', 'ÇáÈÑíÏ ÇáÇáßÊÑæäí áãÏíÑ ÇáãÚÑÖ');
define('ECARDS_MORE_PIC_TARGET', 'ÇáÚäæÇä ÇáåÏİ áæÕáÉ \'ÑÄíÉ ÇáãÒíÏ ãä ÇáÕæÑ\' İí ÇáßÑæÊ');
define('LANG', 'ÇááÛÉ');
define('THEME', 'ÇáÓãÉ');
define('NICE_TITLES', 'ÚäÇæíä ãÍÏÏÉ ááÕİÍÇÊ ÈÏáÇ ãä >Coppermine');
define('ALB_LIST_VIEW_TITLE', 'ÑÄíÉ ÇáÇáÈæã ßŞÇÆãÉ');
define('MAIN_TABLE_WIDTH', 'ÚÑÖ ÇáÌÏæá ÇáÑÆíÓí áÚÑÖ ÇáÕæÑ (ÈÇáäŞÇØ Ãæ ÈÇáäÓÈÉ)');
define('SUBCAT_LEVEL', 'ÚÏÏ ãÓÊæíÇÊ ÇáÊÕäíİ ÇáÊí ÊÚÑÖ');
define('ALBUMS_PER_PAGE', 'ÚÏÏ ÇáÇáÈæãÇÊ ÇáÊí ÊÚÑÖ');
define('ALBUM_LIST_COLS', 'ÚÏÏ ÇáÇÚãÏÉ áÚÑÖ ÇáÇáÈæã');
define('ALB_LIST_THUMB_SIZE', 'ŞíÇÓ ÇáÇÎÊÕÇÑ ÈÇáäŞÇØ');
define('MAIN_PAGE_LAYOUT', 'ãÍÊæíÇÊ ÇáÕİÍÉ ÇáÑÆíÓíÉ');
define('FIRST_LEVEL', 'ÇÚÑÖ ãÎÊÕÑÇÊ ÇáÈæã ÇáãÓÊæì ÇáÇæá İí ÇáÊÕäíİÇÊ ');
define('THUMB_VIEW_TITLE', 'ÚÑÖ ÇáãÎÊÕÑÇÊ');
define('THUMBCOLS', 'ÚÏÏ ÇáÇÚãÏÉ İí ÕİÍÉ ãÎÊÕÑÇÊ ÇáÕæÑ');
define('THUMBROWS', 'ÚÏÏ ÇáÇÓØÑ İí ÕİÍÉ ãÎÊÕÑÇÊ ÇáÕæÑ');
define('MAX_TABS', 'ÇßÈÑ ÚÏÏ ááÕİÍÇÊ ÇáÊí ÓÊÚÑÖ');
define('CAPTION_IN_THUMBVIEW', 'ÚÑÖ ÚäæÇä ÇáÕæÑ ÇÓİá ÇáÕæÑÉ');
define('DISPLAY_COMMENT_COUNT', 'ÇÙåÑ ÚÏÏ ÇáÊÚáíŞÇÊ ÇÓİá ÇáÕæÑÉ');
define('DEFAULT_SORT_ORDER', 'ÇáÊÑÊíÈ ÇáÊŞáíÏí ááÕæÑ');
define('MIN_VOTES_FOR_RATING', 'ÇŞá ÚÏÏ ãä ÇáÊÕæíÊÇÊ áÙåæÑ ÇáÕæÑÉ İí ŞÇÆãÉ  \'ÇÚáì ÊŞííã\'');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'ÇÚÏÇÏÇÊ ãäÙÑ ÇáÕæÑ æÇáÊÚáíŞÇÊ');
define('PICTURE_TABLE_WIDTH', 'ÚÑÖ ÇáÌÏæá áÚÑÖ ÇáÕæÑ (ÈÇáäŞÇØ Ãæ ÈÇáäÓÈÉ)');
define('DISPLAY_PIC_INFO', 'ãÚáæãÇÊ ÇáÕæÑ ÊÑì ÊáŞÇÆíÇ');
define('FILTER_BAD_WORDS', 'ÊÕİíÉ ÇáßáãÇÊ ÇáÓíÆÉ İí ÇáÊÚáíŞÇÊ (Úáíß ÊÎÒíä Êáß ÇáßáãÇÊ İí ÇáÈÑäÇãÌ ÇæáÇ)');
define('ENABLE_SMILIES', 'ÇáÓãÇÍ ÈÇáæÌæå ÇáÖÇÍßÉ İí ÇáÊÚáíŞÇÊ');
define('DISABLE_FLOOD_PROTECTION', 'Allow several consecutive comments on one pic from the same user');
define('COMMENT_EMAIL_NOTIFICATION', 'Email site admin upon comment submission');
define('MAX_IMG_DESC_LENGTH', 'ÇßÈÑ Øæá áæÕİ ÇáÕæÑÉ');
define('MAX_COM_WLENGTH', 'ÇßÈÑ ÚÏÏ ãä ÇáÍÑæİ İí ÇáßáãÉ');
define('MAX_COM_LINES', 'ÇßÈÑ ÚÏÏ ãä ÇáÇÓØÑ İí ÇáÊÚáíŞ');
define('MAX_COM_SIZE', 'ÇßÈÑ Øæá ááÊÚáíŞ');
define('DISPLAY_FILM_STRIP', 'ÇÙåÑ ÔÑíØ Çáİáã');
define('MAX_FILM_STRIP_ITEMS', 'ÚÏÏ ÇáÕæÑ İí ÔÑíØ Çáİáã');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('39', 'ÇÚÏÇÏÇÊ ÇáÕæÑ æãÎÊÕÑÇÊ');
define('JPEG_QUAL', 'æÖæÍ ÕæÑÉ Ìí ÈíÌ');
define('THUMB_WIDTH', 'ÇßÈÑ ŞíÇÓ áãÎÊÕÑ ÇáÕæÑÉ <b>*</b>');
define('THUMB_USE', 'ÇÓÊÚãá ÇáŞíÇÓÇÊ (ÚÑÖ Çæ ÇÑÊİÇÚ Ãæ ÇßÈÑ ÊÈÇÚÏ áãÎÊÕÑ ÇáÕæÑ )<b>*</b>');
define('MAKE_INTERMEDIATE', 'ßæä ÕæÑ æÓíØÉ');
define('PICTURE_WIDTH', 'ÇßÈÑ ÚÑÖ Çæ ÇÑÊİÇÚ áÕæÑÉ æÓØíÉ <b>*</b>');
define('MAX_UPL_SIZE', 'ÇßÈÑ ÍÌã áÕæÑÉ ãÍãáÉ (ÈÇáßíáæ ÈÇíÊ)');
define('MAX_UPL_WIDTH_HEIGHT', 'ÇßÈÑ ÚÑÖ Çæ ÇÑÊİÇÚ áÕæÑÉ ãÍãáÉ ÈÇáäŞÇØ');
define('47', 'ÇÚÏÇÏÇÊ ÇáãÓÊÎÏã');
define('ALLOW_USER_REGISTRATION', 'ÇáÓãÇÍ áãÓÊÎÏã ÌÏíÏ ÈÇáÊÓÌíá');
define('REG_REQUIRES_VALID_EMAIL', 'ÊÓÌíá ÇáãÓÊÎÏã íÍÊÇÌ ÇáÊÃßíÏ ÈÇáÈÑíÏ ÇáÇáßÊÑæäí');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'ÇáÓãÇÍ áãÓÊÎÏãíä ÇËäíä Çä íßæä áåã äİÓ ÇáÈÑíÏ ÇáÇáßÊÑæäí');
define('ALLOW_PRIVATE_ALBUMS', 'íãßä ááãÓÊÎÏãíä Çä íßæä áåã ÇáÈæã ÎÇÕ');
define('52', 'ÈíÇäÇÊ ÇÖÇİíÉ áÔÑÍ ÇáÕæÑ (ÇÊÑßå İÇÑÛÇ Çä ßäÊ áÇ ÊÑíÏ ÇÓÊÚãÇáå)');
define('USER_FIELD1_NAME', 'ÇÓã ÇáÍŞá ÇáÇæá');
define('USER_FIELD2_NAME', 'ÇÓã ÇáÍŞá ÇáËÇäí');
define('USER_FIELD3_NAME', 'ÇÓã ÇáÍŞá ÇáËÇáË');
define('USER_FIELD4_NAME', 'ÇÓã ÇáÍŞá ÇáÑÇÈÚ');
define('57', 'ÇÚÏÇÏÇÊ ÇáÕæÑ æãÎÊÕÑÇÊ ÇáÕæÑ ÇáãÊŞÏãÉ');
define('SHOW_PRIVATE', 'ÇÙåÑ ÑãÒ ÇáÈæã ÎÇÕ ááãÓÊÎÏã ÇáãÌåæá');
define('FORBIDEN_FNAME_CHAR', 'ÇáÍÑæİ ÇáããäæÚÉ İí ÇÓãÇÁ ÇáãáİÇÊ');
define('ALLOWED_FILE_EXTENSIONS', 'ÇáÇãÊÏÇÏÇÊ ÇáãÓãæÍ ÈåÇ İí ÇáãáİÇÊ ÇáãÑÓáÉ');
define('THUMB_METHOD', 'ØÑíŞÉ ÇÚÇÏÉ ŞíÇÕ ÇáÕæÑÉ');
define('IMPATH', 'ÇáÏáíá Çáì ÇÏÇÉ ImageMagick/Netpbm \'ááÊÍæíá\'  (ãËÇá /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'ÇäæÇÚ ÇáÕæÑ ÇáãÓãæÍ ÈåÇ (íÓÊÚãá İŞØ áÜ ImageMagick)');
define('IM_OPTIONS', 'ÇæÇãÑ ÇáÈÑäÇãÌ ImageMagick');
define('READ_EXIF_DATA', 'ÇŞÑÁ ÈíÇäÇÊ EXIF İí ãáİÇÊ JPEG');
define('READ_IPTC_DATA', 'Read IPTC data in JPEG files');
define('FULLPATH', 'Ïáíá ÇáÇáÈæã <b>*</b>');
define('USERPICS', 'Ïáíá ÕæÑ ÇáãÓÊÎÏãíä <b>*</b>');
define('NORMAL_PFX', 'ÇáÍÑæİ ÇáÇæáì ááÕæÑ ÇáæÓíØÉ(íÌÈ Çä Êßæä ÇäÌáíÒíÉ <b>*</b>');
define('THUMB_PFX', 'ÇáÍÑæİ ÇáÇæáì áãÎÊÕÑÇÊ ÇáÕæÑ <b>*</b>');
define('DEFAULT_DIR_MODE', 'ÇáæÖÚ ÇáÇÚÊíÇÏí ááãÌáÏÇÊ');
define('DEFAULT_FILE_MODE', 'ÇáæÖÚ ÇáÇÚÊíÇÏí ááÕæÑ');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('81', 'ÇÚÏÇÏÇÊ ÇáßæßíÒ æäæÚ ÇáÍÑæİ');
define('COOKIE_NAME', 'ÇÓã Çáßæßí ÇáãÓÊÚãá İí ÇáÈÑäÇãÌ');
define('COOKIE_PATH', 'Ïáíá ÇáßæßíÒ ÇáãÓÊÚãá İí ÇáÈÑäÇãÌ');
define('CHAR_SET', 'äæÚ ÇáÍÑæİ ÇáãÓÊÚãáÉ');
define('MISC_SETTING_TITLE', 'ÇÚÏÇÏÇÊ ÇÎÑì');
define('DEBUG_MODE', 'Êãßíä æÖÚ ÇáÊÊÈÚ');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) Fields marked with * must not be changed if you already have pictures in your gallery</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'íÌÈ Çä ÊßÊÈ ÇÓãß æÊÚáíŞß');
define('COM_ADDED', 'Êã ÇÖÇİÉ ÇáÊÚáíŞ');
define('ALB_NEED_TITLE', 'íÌÈ Çä ÊÍÏÏ ÚäæÇä ááÇáÈæã !');
define('NO_UDP_NEEDED', 'áÇ ÍÇÌÉ ááÊÍÏíË.');
define('ALB_UPDATED', 'Êã ÊÍÏíË ÇáÇáÈæã');
define('UNKNOWN_ALBUM', 'ÇáÇáÈæã ÇáãÎÊÇÑ ÛíÑ ãæÌæÏ Çæ áíÓ áß ÇáÕáÇÍíÉ ááÊÍãíá İí åĞÇ ÇáÇáÈæã');
define('NO_PIC_UPLOADED', 'áÇ ÊæÌÏ ÕæÑ ãÍãáÉ !<br /><br />ÇĞÇ ßäÊ İÚáÇ ÇÎÊÑÊ ÕæÑ ááÊÍãíá, ÊÃßÏ ãä Çä ÎÇÏã ÇáÕİÍÇÊ íÓãÍ ÈÇáÊÍãíá...');
define('ERR_MKDIR', 'áã ÇÓÊØÚ Êßæíä ÇáãÌáÏ %s !');
define('DEST_DIR_RO', 'æÌåÉ Çáãáİ %s ÛíÑ ŞÇÈá ááßÊÇÈÉ !');
define('ERR_MOVE', 'ãä ÇáãÓÊÍíá äŞá %s Çáì %s !');
define('ERR_FSIZE_TOO_LARGE', 'ÇáÕæÑ ÇáÊí ÊÑíÏ ÊÍãíáåÇ ßÈíÑÉ ÌÏÇ (ÇßÈÑ ÍÌã ááÕæÑÉ åæ %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'ÇáÕæÑ ÇáÊí ÊÑíÏ ÊÍãíáåÇ ßÈíÑÉ ÌÏÇ (ÇßÈÑ ÍÌã ááÕæÑÉ åæ %s KB) !');
define('ERR_INVALID_IMG', 'ÇáÕæÑÉ ÇáÊí Êã ÊÍãíáåÇ ÛíÑ ÕÇáÍÉ !');
define('ALLOWED_IMG_TYPES', 'ÊÓÊØíÚ ÊÍãíá %s ÕæÑÉ.');
define('ERR_INSERT_PIC', 'ÇáÕæÑÉ \'%s\' áÇ íãßä ÊÎÒíåÇ İí ÇáÇáÈæã ');
define('UPLOAD_SUCCESS', 'Êãã ÊÍãíá ÇáÕæÑÉ ÈäÌÇÍ<br /><br />Óæİ ÊÑÇåÇ ÈÚÏ ãæÇİŞÉ ÇáãÏíÑ.');
define('INFO', 'ãÚáæãÇÊ');
define('ERR_COMMENT_EMPTY', 'áã ÊßÊÈ ÇáÊÚáíŞ !');
define('ERR_INVALID_FEXT', 'Óæİ íÓãÍ ÈÇáãáİÇÊ ÇáÊí ÊäÊåí ÈÜ : <br /><br />%s.');
define('NO_FLOOD', 'äÃÓİ áßäß ÇäÊ ßäÊ ÂÎÑ ãÚáŞ Úáì åĞå ÇáÕæÑÉ<br /><br />ÊÓÊØíÚ ÊÛííÑ ÊÚáíŞß Úáì ÇáÕæÑÉ');
define('REDIRECT_MSG', 'ÓíÊã ÊÍæáíß Çáì ÕİÍÉ ÇÎÑì.<br /><br /><br />ÇÖÛØ Úáì  \'ÇÓÊãÜÜÑ\' Çä áã íÊã ÇÚÇÏÉ ÊäÔíØ ÇáÕİÍÉ ÊáŞÇÆíÇ');
define('UPL_SUCCESS', 'Êã ÊÍãíá ÇáÕæÑÉ ÈäÌÇÍ');

// lang_delete_php
define('CAPTION', 'ÇáÚäæÇä');
define('FS_PIC', 'ÕæÑÉ ÈÇáÍÌã ÇáØÈíÚí');
define('DEL_SUCCESS', 'Êã ÇáÛÇÁåÇ ÈäÌÇÍ');
define('NS_PIC', 'ÕæÑÉ ÈÇáÍÌã ÇáØÈíÚí');
define('ERR_DEL', 'áÇ íãßä ÇáÛÇÁå');
define('THUMB_PIC', 'ãÎÊÕÑ');
define('COMMENT', 'ÊÚáíŞ');
define('IM_IN_ALB', 'ÕæÑÉ İí ÇáÇáÈæã');
define('ALB_DEL_SUCCESS', 'ÇáÇáÈæã \'%s\' Êã ÇáÛÇÁå');
define('ALB_MGR', 'ãÏíÑ ÇáÇáÈæã');
define('ERR_INVALID_DATA', 'ÈíÇäÇÊ ÛíÑ ÕÇáÍÉ Êã ÇÓÊŞÈÇáåÇ İí \'%s\'');
define('CREATE_ALB', 'ÌÇÑí Êßæíä ÇáÇáÈæã \'%s\'');
define('UPDATE_ALB', 'ÌÇÑí ÊÍÏíË ÇáÇáÈæã \'%s\' ÈÇáÚäæÇä \'%s\' æÇáİåÑÓ \'%s\'');
define('DEL_PIC', 'ÇáÛÇÁ ÇáÕæÑÉ');
define('DEL_ALB', 'ÇáÛí ÇáÇáÈæã');
define('DEL_USER', 'ÇáÛí ÇáãÓÊÎÏã');
define('ERR_UNKNOWN_USER', 'ÇáãÓÊÎÏã ÇáãÎÊÇÑ ÛíÑ ãæÌæÏ !');
define('COMMENT_DELETED', 'Êã ÇáÛÇÁ ÇáÊÚáíŞ ÈäÌÇÍ');

// lang_display_image_php
define('CONFIRM_DEL', 'åá ÃäÊ ãÊÃßÏ áÅáÛÇÁ ÇáÕæÑÉ ? \\nÓíÊã ÇáÛÇÁ ÇáÊÚáíŞÇÊ ÇíÖÇ.');
define('DEL_PIC', 'ÃÖÛØ áãÓÜÍ åĞå ÇáÕæÑÉ');
define('SIZE', '%s İí %s äŞØÉ');
define('VIEWS', '%s ãÜÑÇÊ');
define('SLIDESHOW', 'ÚÑÖ ÇáÔÑÇÆÍ');
define('STOP_SLIDESHOW', 'áÊæŞíİ ÚÑÖ ÇáÔÑÇÆÍ');
define('VIEW_FS', 'ÇÖÛØ áÊßÈíÜÑ ÇáÕæÑÉ');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('TITLE', 'ãÚáæãÇÊ Úä ÇáÕæÑÉ');
define('FILENAME', 'ÇÓã Çáãáİ');
define('ALBUM NAME', 'ÇÓã ÇáÃáÈæã');
define('RATING', 'ÊŞííã (%s ÊÕæíÊ)');
define('KEYWORDS', 'ÇáßáãÇÊ ÇáÑøÆíÓíøÉ ');
define('FILE SIZE', 'ÍÌã Çáãáİ');
define('DIMENSIONS', 'ÇáÃÈÚÇÏ ');
define('DISPLAYED', 'ÚÏÏ ãÑÇÊ ÇáÅÖåÇÑ');
define('CAMERA', 'ÂáÉ ÇáÊÕæíÑ');
define('DATE TAKEN', 'ÊÇÑíÎ ÇáÊŞÇØ ÇáÕæÑÉ');
define('APERTURE', 'ÇáÚÏÓÉ ');
define('EXPOSURE TIME', 'æŞÊ ÇáÊøÚÑøÖ ');
define('FOCAL LENGTH', 'ÇáÈÚÏ ÇáÈÄÑíø ');
define('COMMENT', 'ãáÇÍÙÇÊ');
define('ADDFAV', 'ÇÖİ Çáì ÇáãİÖáÉ');
define('ADDFAVPHRASE', 'ÇáãİÖáÉ');
define('REMFAV', 'ÇáÛ ãä ÇáãİÖáÉ');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', 'ÍÓäÜÇ');
define('EDIT_TITLE', 'áÊÍÜÑíÑ ÇáãáÇÍÙÇÊ');
define('CONFIRM_DELETE', 'åá ÃäÊ ãÊÃßÜÏ áÍÜĞİ åĞå ÇáãáÇÍÙÇÊ ?');
define('ADD_YOUR_COMMENT', 'ÃÏÎÜá ãáÇÍÙÇÊß');
define('NAME', 'ÇáÇÓã');
define('COMMENT', 'ÊÚáíŞ');
define('YOUR_NAME', 'ãÌåæá');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'ÇÖÛØ Úáì ÇáÕæÑÉ áÇÛáÇŞ ÇáäÇİĞÉ');

// lang_ecard_php
define('TITLE', 'ÇÑÓÇá ßÑÊ ãÚÇíÏÉ');
define('INVALID_EMAIL', '<b>ÊäÈÜíå</b> : ÇáÈÑíÏ ÇáÇáßÊÑæäí ÎØÃ !');
define('ECARD_TITLE', 'ßÑÊ ãä  %s áß');
define('VIEW_ECARD', 'Çä áã íÙåÑ ÇáßÑÊ ÈÇáÕæÑÉ ÇáÕÍíÍÉ, ÇÖÛØ åäÇ');
define('VIEW_MORE_PICS', 'ÇÖÛØ åäÇ áÑÄíÉ ÇáãÒíÏ ãä ÇáÕæÑ !');
define('SEND_SUCCESS', 'Êã ÇÑÓÇá ßÑÊß');
define('SEND_FAILED', 'äÃÓİ áßä ÇáÎÇÏã áÇ íÓÊØíÚ ÇÑÓÇá ÇáßÑÊ...');
define('FROM', 'ãä');
define('YOUR_NAME', 'ÇÓãß');
define('YOUR_EMAIL', 'ÇáÈÑíÏ ÇáÃáßÊÑæäí');
define('TO', 'Çáì');
define('RCPT_NAME', 'ÇÓã ÇáãÑÓá Çáíå');
define('RCPT_EMAIL', 'ÈÑíÏ ÇáãÑÓá Çáíå ÇáÇáßÊÑæäí');
define('GREETINGS', 'ÇáÊÍíÉ');
define('MESSAGE', 'ÇáÑÓÇáÉ');

// lang_editpics_php
define('PIC_INFO', 'ãÚáæãÇÊ ÇáÕæÑÉ');
define('ALBUM', 'ÇáÈæã');
define('TITLE', 'ÚäæÇä ÇáÕæÑÉ');
define('DESC', 'ÈíÇä Úä ÇáÕæÑÉ');
define('KEYWORDS', 'ÇáßáãÇÊ ÇáÑøÆíÓíøÉ ');
define('PIC_INFO_STR', '%sx%s - %sßíáæÈÇíÊ - %s ãÔÇåÏÉ - %s ÊÕæíÊÇÊ');
define('APPROVE', 'ÇÚÊãÏ ÇáÕæÑÉ');
define('POSTPONE_APP', 'ÊÃÌíá ÇáãæÇİŞÉ');
define('DEL_PIC', 'ÇáÛÇÁ ÇáÕæÑÉ');
define('READ_EXIF', 'Read EXIF info again');
define('RESET_VIEW_COUNT', 'ãÓÍ ÇáÚÏÇÏ');
define('RESET_VOTES', 'ÇáÛÇÁ ÇáÊÕæíÊ');
define('DEL_COMM', 'ãÓÍ ÇáãáÇÍÙÇÊ');
define('UPL_APPROVAL', 'ãæÇİŞÉ ÇáÊÍãíá');
define('EDIT_PICS', 'ÊÍÜÑíÑ ÇáÕæÑ');
define('SEE_NEXT', 'ÇáÕæÑ ÇáÊÇáíÜÉ');
define('SEE_PREV', 'ÇáÕæÑ ÇáÓÇÈŞÉ');
define('N_PIC', '%s ÇáÕÜæÑ');
define('N_OF_PIC_TO_DISP', 'ÚÏÏ ÇáÕæÑ ÇáãÚÑæÖÉ');
define('APPLY', 'ÊØÈíŞ ÇáÊÚÏíá');

// lang_groupmgr_php
define('GROUP_NAME', 'ÇÓã ÇáãÌãæÚÉ');
define('DISK_QUOTA', 'ãÓÇÍÉ ÇáÊÎÒíä ÇáãÓãæÍÉ');
define('CAN_RATE', 'áÇ ÇÓÊØíÚ ÊŞííã ÇáÕæÑ');
define('CAN_SEND_ECARDS', 'íÓÊØíÚ ÇÑÓÇá ÇáÕæÑÉ ßÈÑíÏ');
define('CAN_POST_COM', 'íÓÊØíÚ ÇÖÇİÉ ÊÚáíŞÇÊ');
define('CAN_UPLOAD', 'íÓÊØíÚ ÊÍãíá ÇáÕæÑ');
define('CAN_HAVE_GALLERY', 'íÓÊØíÚ ÇáÍÕæá Úáì ãÚÑÖ ÔÎÕí');
define('APPLY', 'ÊÎÒíä ÇáÊÚÏíáÇÊ');
define('CREATE_NEW_GROUP', 'Êßæíä ãÌãæÚÉ ãÓÊÎÏãíä ÌÏíÏÉ');
define('DEL_GROUPS', 'ÇáÛÇÁ ÇáãÌãæÚÇÊ ÇáãÎÊÇÑÉ');
define('CONFIRM_DEL', 'ÊÍĞíÑ, ÚäÏãÇ ÊãÓÍ ãÌãæÚÉ, ÓíÊã äŞá ÇáãÓÊÎÏãíä İí åĞå ÇáãÌãæÚÉ Çáì ŞÇÆãÉ \'ÇáãÓÌáíä\' !\\n\\nåá ÊæÏ ÇÓÊßãÇá ÇáÚãáíÉ  ?');
define('TITLE', 'ÇÏÇÑÉ ãÌãæÚÇÊ ÇáãÓÊÎÏãíä');
define('APPROVAL_1', 'ãæÇİŞÉ ÊÍãíá ÚÇãÉ (1)');
define('APPROVAL_2', 'ãæÇİŞÉ ÊÍãíá ÚÇãÉ (2)');
define('NOTE1', '<b>(1)</b> ÇáÊÍãíá İí ÇáÇáÈæã ÇáÚÇã íÍÊÇÌ ãæÇİŞÉ ÇáãÏíÑ');
define('NOTE2', '<b>(2)</b> ÇáÊÍãíáÇÊ ÇáÊí íãßáåÇ ÇáãÓÊÎÏã ÊÍÊÇÌ ãæÇİŞÉ ÇáãÏíÑ');
define('NOTES', 'ãáÇÍÙÇÊ');

// lang_index_php
define('WELCOME', 'ÃåÜáÇğ æÓÜåáÇğ Èß íÜÇ');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'åá ÃäÊ ãÊÃßÏ áÃáÛÇÁ åĞå ÇáÕæÑÉ ? \\nAll pictures and comments will also be deleted.');
define('DELETE', 'ÇáÛÇÁ ÇáÕæÑÉ');
define('MODIFY', 'ÊÍÏíË ÇáÃáÈæã');
define('EDIT_PICS', 'ÊÍÑíÑ ÇáÕæÑÉ');

// lang_list_categories
define('HOME', 'Home');
define('STAT1', '<b>[pictures]</b> ÕæÑÉ İí <b>[albums]</b> ÇáÈæã æ <b>[cat]</b> ÊÕäíİÇÊ ãÚ <b>[comments]</b> ÊÚáíŞÇÊ ÔæåÏÊ <b>[views]</b> ãÑÉ');
define('STAT2', '<b>[pictures]</b> ÕæÑÉ İí <b>[albums]</b> ÇáÈæã æÔæåÏÊ <b>[views]</b> ãÑÉ');
define('XX_S_GALLERY', 'ãÚÑÖ %s');
define('STAT3', '<b>[pictures]</b> ÕæÑÉ İí <b>[albums]</b> ÇáÈæã ãÚ <b>[comments]</b> ÊÚáíŞÇÊ ÔæåÏÊ <b>[views]</b> ãÑÉ');

// lang_list_users
define('USER_LIST', 'ŞÇÆãÉ ÇáãÓÊÎÏãíä');
define('NO_USER_GAL', 'áÇ íæÌÏ ãÓÊÎÏãíä íãßä Çä íßæä áåã ÇáÈæãÇÊ');
define('N_ALBUMS', '%s ÇáÈæã');
define('N_PICS', '%s ÕæÑÉ/ÕæÑ');

// lang_list_albums
define('N_PICTURES', '%s ÕæÑÉ');
define('LAST_ADDED', ', ÂÎÑ ÕæÑÉ ÇÖíİÊ İí %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'ÊÍÏíË ÇáÇáÈæã %s');
define('GENERAL_SETTINGS', 'ÇÚÏÇÏÇÊ ÚÇãÉ');
define('ALB_TITLE', 'ÚäæÇä ÇáÇáÈæã');
define('ALB_CAT', 'ÊÕäíİ ÇáÇáÈæã');
define('ALB_DESC', 'ÔÑÍ ÇáÇáÈæã');
define('ALB_THUMB', 'äÈĞÉ ÇáÇáÈæã');
define('ALB_PERM', 'ÕáÇÍíÇÊ ÇáÇáÈæã');
define('CAN_VIEW', 'ãÔÇåÏíä ÇáÇáÈæã åã');
define('CAN_UPLOAD', 'ÇáÒæÇÑ íÓÊØíÚæä ÊÍãíá ÕæÑ');
define('CAN_POST_COMMENTS', 'ÇáÒæÇÑ íÓÊØíÚæä ÊÓÌíá ÊÚáíŞÇÊ');
define('CAN_RATE', 'ÇáÒæÇÑ íÓÊØíÚæä ÇáÊŞííã');
define('USER_GAL', 'ÇáÈæã ÇáãÓÊÎÏãíä');
define('NO_CAT', '* ÛíÑ ãÕäİ *');
define('ALB_EMPTY', 'ÇáÇáÈæã İÇÑÛ');
define('LAST_UPLOADED', 'ÂÎÑ ÊÍãíá');
define('PUBLIC_ALB', 'ááÌãíÚ (ÇáÈæã ÚÇã)');
define('ME_ONLY', 'áí İŞØ');
define('OWNER_ONLY', 'ãÇáß ÇáÇáÈæã (%s) İŞØ');
define('GROUPP_ONLY', 'ÇÚÖÇÁ ÇáãÌãæÚÉ \'%s\'');
define('ERR_NO_ALB_TO_MODIFY', 'áÇ íæÌÏ ÇáÈæã ÊÓÊØíÚ ÊÚÏíáå İí ŞÇÚÏÉ ÇáÈíÇäÇÊ.');
define('UPDATE', 'ÊÍÏíË ÇáÇáÈæã');

// lang_rate_pic_php
define('ALREADY_RATED', 'äÃÓİ áßä ßäÊ ŞÏ ŞíãÊ åĞå ÇáÕæÑÉ ãÓÈŞÇ');
define('RATE_OK', 'Êã ŞÈæá ÊŞííãß');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'ÍíË Çä ãÏÑÇÁ ÇáãæŞÚ {SITE_NAME} ÓíŞæãæä ÈÊÚÏíá Çæ ÇáÛÇÁ ÇáÕæÑ ÇáÛíÑ ãÑÛæÈ İíåÇ, İãä ÇáÕÚÈ ãÑÇÌÚÉ ÌãíÚ ÇáÕæÑ. áĞÇ íÌÈ Úáíß ÇáÚáã Çä ÇáÕæÑ ÊãËá ÇÕÍÇÈåÇ İŞØ æáíÓ áåÇ ÚáÇŞÉ ÈÇáãÏÑÇÁ Ãæ ãÓÄæáíä ÇáÕİÍÉ (Çáì ÇĞÇ ŞÇãæ åã ÈĞáß) æÈÇáÊÇáí áä íÊÍãáæ ãÓÄæáíÉ Êáß ÇáÕæÑ.<br />
<br />
ÇäÊ ÊæÇİŞ Çäß áä ÊŞæã ÈÊÍãíá Çí ÕæÑ ãÑİæÖÉ, æŞÍÉ, ÎÇÑÌÉ Úä ÇááíÇŞÉ ÇáÚÇãÉ, ÊŞĞİ ÇáÛíÑ, ßÑÇåíÉ, ÊåÏÏ ÇáÛíÑ, ÌäÓíÉ Ãæ Çí ÕæÑ ÎÇÑÌÉ Úä äØÇŞ ÇáŞÇäæä. ÇäÊ ÊæÇİŞ Çä ãÓÄæá ÇáÕİÍÉ, ÇáãÏíÑ æÇáãÔÑİíä İí ÇáãæŞÚ {SITE_NAME} áåã ÇáÍŞ İí ÊÚÏíá æÇÒÇáÉ Çí ãÍÊæì İí Çí æŞÊ íÑæäå ãäÇÓÈÇ. æßãÇ ÊæÇİŞ Çä Êßæä ÇáÈíÇäÇÊ ÇáÊí ÊÏÎáåÇ Óæİ ÊÎÒä İí ŞÇÚÏÉ ÈíÇäÇÊ. æÍíË Çä åĞå ÇáãÚáæãÇÊ áä ÊÚáä áÔÎÕ ËÇáË Ïæä ãæÇŞŞÊß áä íÊÍãá ÇáãÓÄæá Çæ ãÏíÑ ÇáãæŞÚ Çí ÏÎæá ÊÎÑíÈí Úáì ÇáãæŞÚ íÊã Èå ãÚÑİÉ åĞå ÇáãÚáæãÇÊ.<br />
<br />
åĞÇ ÇáãæŞÚ íÓÊÚãá ÇáßæßíÒ áÊÎÒíä ÇáãÚáæãÇÊ Úáì ÌåÇÒß. åĞå ÇáßæßíÒ ÊÍÓä ãä ÇØáÇÚß Úáì ÇáÕæÑ İŞØ. æíÓÊÚãá ÇáÈÑíÏ ÇáÇáßÊÑæäí áÊÃßíÏ ÚãáíÉ ÊÓÌíáß æßáãÉ ÇáÓÑ.<br />
<br />
ÈÇáÖÛØ Úáì ÒÑ \'ÇæÇİŞ\' Çä ÊæÇİŞ æÊáÒã ÈåĞå ÇáÔÑæØ.');

// lang_register_php
define('PAGE_TITLE', 'ÊÓÌíá ÇáãÓÊÎÏã');
define('TERM_COND', 'ÇáÔÑæØ æÇáŞæÇÚÏ');
define('I_AGREE', 'ÇæÇİŞ');
define('SUBMIT', 'ÊÓÌíá ÇáØáÈ');
define('ERR_USER_EXISTS', 'ÇáÇÓã ÇáĞí ÇÏÎáÊå ãæÌæÏ ãÓÈŞÇ, ÇáÑÌÇÁ ÇÓÊÎÏÇã ÇÓã ÂÎÑ');
define('ERR_PASSWORD_MISMATCH', 'ßáãÊí ÇáÓÑ áÇ íäØÈŞÇä¡ Úáíß ÇÏÎÇáåãÇ ãÑÉ ÇÎÑì');
define('ERR_UNAME_SHORT', 'íÌÈ Çä Êßæä ÇáßäíÉ Úáì ÇáÇŞá ÍÑİíä');
define('ERR_PASSWORD_SHORT', 'íÌÈ Çä Êßæä ßáãÉ ÇáÓÑ Úáì ÇáÇŞá ÍÑİíä');
define('ERR_UNAME_PASS_DIFF', 'íÌÈ Çä Êßæä ÇáßäíÉ ãÎÊáİÉ Úä ßáãÉ ÇáÓÑ');
define('ERR_INVALID_EMAIL', 'ÇáÈÑíÏ ÇáÇáßÊÑæäí ÇáĞí ßÊÈÊå áÇ íÚãá');
define('ERR_DUPLICATE_EMAIL', 'ãÓÊÎÏã ÂÎÑ ãÓÌá áå äİÕ ÇáÈÑíÏ ÇáÇáßÊÑæäí');
define('ENTER_INFO', 'ÇÏÎá ÈíÇäÇÊ ÇáÊÓÌíá');
define('REQUIRED_INFO', 'ãÚáæãÇÊ ãØáæÈÉ');
define('OPTIONAL_INFO', 'ãÚáæãÇÊ ÇÖÇİíÉ');
define('USERNAME', 'ÇáßäíÉ');
define('PASSWORD', 'ßáãÉ ÇáÓÑ');
define('PASSWORD_AGAIN', 'ÇÚÏ ÇÏÎÇá ßáãÉ ÇáÓÑ');
define('EMAIL', 'ÇáÈÑíÏ ÇáÇáßÊÑæäí');
define('LOCATION', 'ÇáãßÇä');
define('INTERESTS', 'ÇáÇåÊãÇãÇÊ');
define('WEBSITE', 'ÕİÍÊß');
define('OCCUPATION', 'ÇáæÙíİÉ');
define('ERROR', 'ÎØÃ');
define('CONFIRM_EMAIL_SUBJECT', '%s - ÊÃßíÏ ÇáÊÓÌíá');
define('INFORMATION', 'ÈíÇäÇÊ');
define('FAILED_SENDING_EMAIL', 'áã ÇÓÊØíÚ ÇÑÓÇá ÑÓÇáÉ ÊÃßíÏ ÇáÊÓÌíá !');
define('THANK_YOU', 'ÔßÑÇ Úáì ÇáÊÓÌíá.<br /><br />Êã ÇÑÓÇá ÈÑíÏ íæÖÍ ßíİíÉ ÊİÚíá ÇáÇÔÊÑÇß.');
define('ACCT_CREATED', 'Êã Êßæíä ÇÔÊÑÇßß æÊÓÊØíÚ ÇáÏÎæá ÈßäíÊß æßáãÉ ÇáÓÑ');
define('ACCT_ACTIVE', 'ÇÔÊÑÇßß İÚÇá ÇáÂä æÊÓÊØíÚ ÇáÏÎæá ÈßäíÊß æßáãÉ ÇáÓÑ');
define('ACCT_ALREADY_ACT', 'ÇÔÊÑÇßß İÚÇá ãÓÈŞÇ !');
define('ACCT_ACT_FAILED', 'áÇ íãßä ÊİÚíá åĞÇ ÇáÍÓÇÈ !');
define('ERR_UNK_USER', 'ÇáãÓÊÎÏã ÇáãÎÊÇÑ ÛíÑ ãæÌæÏ !');
define('X_S_PROFILE', 'ÈíÇäÇÊ %s');
define('GROUP', 'ÇáãÌãæÚÉ');
define('REG_DATE', 'ãÔÇÑß');
define('DISK_USAGE', 'ÇÓÊåáÇß ÇáÊÎÒíä');
define('CHANGE_PASS', 'ÛíÑ ßáãÉ ÇáÓÑ');
define('CURRENT_PASS', 'ßáãÉ ÇáÓÑ ÇáÍÇáíÉ');
define('NEW_PASS', 'ßáãÉ ÓÑ ÌÏíÏÉ');
define('NEW_PASS_AGAIN', 'ßáãÉ ÇáÓÑ ÇáÌÏíÏÉ ãÑÉ ÇÎÑì');
define('ERR_CURR_PASS', 'ßáãÉ ÇáÓÑ ÇáÍÇáíÉ ÛíÑ ÕÍíÍÉ');
define('APPLY_MODIF', 'ÊØÈíŞ ÇáÊÛííÑÇÊ');
define('UPDATE_SUCCESS', 'Êã ÊÍÏíË ÈíÇäÇÊß');
define('PASS_CHG_SUCCESS', 'Êã ÊÛííÑ ßáãÉ ÇáÓÑ');
define('PASS_CHG_ERROR', 'áã ÊÊÛíÑ ßáãÉ ÇáÓÑ');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Thank you for registering at {SITE_NAME}

Your username is : "{USER_NAME}"
Your password is : "{PASSWORD}"

áÊİÚíá ÇáÍÓÇÈ Úáíß ÇáÖÛØ Úáì ÇáæÕáÉ ÈÇáÇÓİá
Çæ ÇäÓÎ æÇáÕŞ ÇáæÕáÉ İí ãÊÕİÍ ÇáÇäÊÑäÊ áÏíß.

{ACT_LINK}

Regards,

The management of {SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', 'ãÑÇÌÚÉ ÇáÊÚáíŞÇÊ');
define('NO_COMMENT', 'áÇ ÊÚáíŞÇÊ ááãÑÇÌÚÉ');
define('N_COMM_DEL', '%s ÊÚáíŞ ÇáÛí');
define('N_COMM_DISP', 'ÚÏÏ ÇáÊÚáíŞÇÊ ÇáãÚÑæÖÉ');
define('SEE_PREV', 'ÇáÓÇÈŞ');
define('SEE_NEXT', 'ÇáÊÇáí');
define('DEL_COMM', 'ÇáÛÇÁ ÇáÊÚáíŞÇÊ ÇáãÎÊÇÑÉ');

// lang_search_php
define('SEARCH', 'ÇÈÍË ãÌãæÚÉ ÇáÕæÑ');

// lang_search_new_php
define('PAGE_TITLE', 'ÇÈÍË ÇáÕæÑ ÇáÌÏíÏÉ');
define('SELECT_DIR', 'ÇÎÊÑ ãÌáÏ');
define('SELECT_DIR_MSG', 'åĞå ÇáÚãáíÉ Êãßäß ãä ÇÖÇİÉ ßãíÉ ãä ÇáÕæÑ Êã ÊÍãíáåÇ ÈæÇÓØÉ FTP Çáì ÎÇÏã ÇáÕİÍÇÊ áÏíß.<br /><br />ÇÎÊÑ ÇáÏáíá ÍíË ŞãÊ ÈÚãáíÉ ÇáÊÍãíá ãÓÈŞÇ');
define('NO_PIC_TO_ADD', 'áÇ ÊæÌÏ ÕæÑÉ ÇÖíİåÇ');
define('NEED_ONE_ALBUM', 'ÊÍÊÇÌ Úáì ÇáÇŞá ÇáÈæãÇ æÇÍÏÇ áåĞå ÇáÚãáíÉ');
define('WARNING', 'ÊÍĞíÑ');
define('CHANGE_PERM', 'áÇ íÓÊØíÚ ÇáÈÑäÇãÌ ÇáÊÎÒíä İí åĞÇ ÇáÏáíá, ÊÍÊÇÌ ÊÛííÑ ÕáÇÍíÇÊ ÇáÏáíá Çáì 755 Çæ 777 ŞÈá ÇÖÇİÉ ÇáÕæÑ !');
define('TARGET_ALBUM', '<b>ÖÚ ÕæÑ &quot;</b>%s<b>&quot; İí </b>%s');
define('FOLDER', 'ãÌáÏ');
define('IMAGE', 'ÕæÑÉ');
define('ALBUM', 'ÇáÈæã');
define('RESULT', 'äÊíÌÉ');
define('DIR_RO', 'ÛíÑ ŞÇÈá ááÊÎÒíä. ');
define('DIR_CANT_READ', 'ÛíÑ ŞÇÈá ááŞÑÇÁÉ. ');
define('INSERT', 'ÇÖÇİÉ ÕæÑ ÌÏíÏÉ ááãÚÑÖ');
define('LIST_NEW_PIC', 'ŞÇÆãÉ ÇáÕæÑ ÇáÌÏíÏÉ');
define('INSERT_SELECTED', 'ÊÎÒíä ÇáÕæÑ ÇáãÎÊÇÑÉ');
define('NO_PIC_FOUND', 'áÇ ÊæÌÏ ÕæÑ ÌÏíÏÉ');
define('BE_PATIENT', 'ÇáÑÌÇÁ ÇáÕÈÑ¡ ÍíË íÍÊÇÌ ÇáÈÑäÇãÌ áÈÚÖ ãä ÇáæŞÊ áÇÖÇİÉ ÇáÕæÑ');
define('NOTES', '<ul><li><b>OK</b> : íÚäí Çäå Êã ÇÖÇİÉ ÇáÕæÑ ÈäÌÇÍ<li><b>DP</b> : íÚäí Çä ÇáÕæÑÉ ãßÑÑÉ İí ŞÇÚÏÉ ÇáÈíÇäÇÊ æåí ãæÌæÏÉ İÚáÇ<li><b>PB</b> : ÊÚäí Çääí áã ÇÊãßä ãä ÇÖÇİÉ ÇáÕæÑÉ, ÊÃßÏ ãä ÇáÇÚÏÇÏÇÊ æãä ÕáÇÍíÇÊß İí ÊÎÒíä ÇáÕæÑÉ İí åĞÇ ÇáãÌáÏ<li>ÇĞÇ ßÇä ÇáÑãÒ OK, DP, PB áÇ íÙåÑ ÇÖÛØ Úáì ÇáæÕáÉ ÇáãßÓæÑÉ áãÚÑİÉ ÓÈÈ ÚÏã ÙåæÑåÇ PHP<li>Çä áã íÑÏ Úáì ÇáãÊÕİÍ ÈÚÏ æŞÊ ßÇİ, ÇÖÛØ Úáì ÒÑ ÇÚÇÏÉ ÊÍãíá ÇáÕİÍÉ</ul>');

// lang_upload_php
define('TITLE', 'ÊÍãíá ÕæÑÉ');
define('MAX_FSIZE', 'ÇßÈÑ ÍÌã áãáİ ÇáÕæÑÉ åæ %s ßíáæ ÈÇíÊ');
define('ALBUM', 'ÇáÈæã');
define('PICTURE', 'ÕæÑÉ');
define('PIC_TITLE', 'ÚäæÇä ÕæÑÉ');
define('DESCRIPTION', 'ÔÑÍ ÇáÕæÑÉ');
define('KEYWORDS', 'ßáãÇÊ ÈÍË (ÇİÕá ÈíäåãÇ ÈãÓÇİÉ)');
define('ERR_NO_ALB_UPLOADABLES', 'äÃÓİ áßä áÇ íæÌÏ ÇáÈæã ÊÓÊØíÚ ÊÍãíá ÇáÕæÑ Çáíå');

// lang_usermgr_php
define('TITLE', 'ÇÏÇÑÉ ÇáãÓÊÎÏãíä');
define('NAME_A', 'ÊÕÇÚÏí ÍÓÈ ÇáÇÓã');
define('NAME_D', 'ÊäÇÒáí ÍÓÈ ÇáÇÓã');
define('GROUP_A', 'ÊÕÇÚÏí ÍÓÈ ÇáãÌãæÚÉ');
define('GROUP_D', 'ÊäÇÒáí ÍÓÈ ÇáãÌãæÚÉ');
define('REG_A', 'ÊÕÇÚÏí ÍÓÈ ÊÇÑíÎ ÇáÊÓÌíá');
define('REG_D', 'ÊäÇÒáí ÍÓÈ ÊÇÑíÎ ÇáÊÓÌíá');
define('PIC_A', 'ÊÕÇÚÏí ÍÓÈ ÚÏ ÇáÕæÑ');
define('PIC_D', 'ÊäÇÒáí ÍÓÈ ÚÏ ÇáÕæÑ');
define('DISKU_A', 'ÊÕÇÚÏí ÍÓÈ ãÓÇÍÉ ÇáÊÎÒíä');
define('DISKU_D', 'ÊäÇÒáí ÍÓÈ ãÓÇÍÉ ÇáÊÎÒíä');
define('SORT_BY', 'ÑÊÈ ÇáãÓÊÎÏãíä ÍÓÈ');
define('ERR_NO_USERS', 'ÌÏæá ÇáãÓÊÎÏã İÇÑÛ !');
define('ERR_EDIT_SELF', 'áÇ ÊÓÊØíÚ ÊÚÏíá ÈíÇäÇÊß ÇáÎÇÕÉ, ÇÓÊÚãá ÒÑ \'ÈíÇäÇÊí\' áĞáß');
define('EDIT', 'ÊÚÏíá');
define('DELETE', 'ÇáÛÇÁ');
define('NAME', 'ÇÓã ÇáãÓÊÎÏã');
define('GROUP', 'ÇáãÌãæÚÉ');
define('INACTIVE', 'ãÚØá');
define('OPERATIONS', 'ÇáÚãáíÇÊ');
define('PICTURES', 'ÇáÕæÑ');
define('DISK_SPACE', 'ãÓÇÍÉ ÇáÊÎÒíä ÇáãÓãæÍÉ / ßæÊÇ');
define('REGISTERED_ON', 'Êã ÊÓÌíáå İí');
define('U_USER_ON_P_PAGES', '%d ãÓÊÎÏã İí %d ÕİÍÉ/ÕİÍÇÊ');
define('CONFIRM_DEL', 'åá ÇäÊ ãÊÃßÏ ãä ÇáÛÇÁ åĞÇ ÇáãÓÊÎÏã ? \\nßá ÕæÑå æÇáÈæãÇÊå Óæİ ÊáÛì.');
define('MAIL', 'ÈÑíÏ');
define('ERR_UNKNOWN_USER', 'ÇáãÓÊÎÏã ÇáãÎÊÇÑ ÛíÑ ãæÌæÏ !');
define('MODIFY_USER', 'ÊÛííÑ ÇáãÓÊÎÏã');
define('NOTES', 'ãáÇÍÙÇÊ');
define('NOTE_LIST', '<li>Çä áã ÊÑíÏ ÊÛííÑ ßáãÉ ÇáÓÑ, ÇÊÑß ãÑÈÚ ßáãÉ ÇáÓÑ İÇÑÛÇ');
define('PASSWORD', 'ßáãÉ ÇáÓÑ');
define('USER_ACTIVE_CP', 'ÇáãÓÊÎÏã ãÚØá');
define('USER_GROUP_CP', 'ãÌãæÚÉ ÇáãÓÊÎÏãíä');
define('USER_EMAIL', 'ÈÑíÏ ÇáãÓÊÎÏã');
define('USER_WEB_SITE', 'ÕİÍÉ ÇáãÓÊÎÏã');
define('CREATE_NEW_USER', 'Êßæíä ãÓÊÎÏã ÌÏíÏ');
define('USER_FROM', 'ãæŞÚ ÇáãÓÊÎÏã');
define('USER_INTERESTS', 'ÇåÊãÇãÇÊ ÇáãÊÓÎÏã');
define('USER_OCC', 'æÙíİÉ ÇáãÓÊÎÏã');

// lang_util_php
define('TITLE', 'ÊÛííÑ ŞíÇÕ ÇáÕæÑÉ');
define('WHAT_IT_DOES', 'ãÇĞÇ ÊÚãá');
define('WHAT_UPDATE_TITLES', 'ÊÍÏíË ÇáÚäÇæíä ãä ÇÓãÇÁ ÇáãáİÇÊ');
define('WHAT_DELETE_TITLE', 'ÇáÛÇÁ ÇáÚäÇæíä');
define('WHAT_REBUILD', 'íÚÈÏ ÈäÇÁ ãÎÊÕÑÇÊ ÇáÕæÑ æíÚíÏ ŞíÇÓ ÇáÕæÑ');
define('WHAT_DELETE_ORIGINALS', 'íáÛí ÇáÕæÑ ÇáãÚÇÏ ŞíÇÓåÇ ÇáÇÕáíÉ æ íÓÊÈÏáåã ÈÕæÑ ãÚÇÏ ŞíÇÓåÇ');
define('FILE', 'ãáİ');
define('TITLE_SET_TO', 'ÇáÚäæÇä ãÍÏÏ Çáì');
define('SUBMIT_FORM', 'ÓÌá');
define('UPDATED_SUCCESFULLY', 'Êã ÊÍÏíËå ÈäÌÇÍ');
define('ERROR_CREATE', 'ÎØÃ İí Êßæíä');
define('CONTINUE', 'ãÚÇáÌÉ ÇáãÒíÏ ãä ÇáÕæÑ');
define('MAIN_SUCCESS', 'Çáãáİ %s Êã ÇÓÊÚãÇáå ßÇáÕæÑÉ ÇáÑÆíÓíÉ');
define('ERROR_RENAME', 'ÎØÃ İí ÊÛííÑ ÇáÇÓã %s Çáì %s');
define('ERROR_NOT_FOUND', 'Çáãáİ %s ÛíÑ ãæÌæÏ');
define('BACK', 'ÇáÑÌæÚ Çáì ÇáÑÆíÓíÉ');
define('THUMBS_WAIT', 'ÊÍÏíË ãÎÊÕÑÇÊ ÇáÕæÑ æ/Çæ ÇáÕæÑ ÇáãÚÇÏ ŞíÇÓåÇ, ÇáÑÌÇÁ ÇáÇäÊÙÇÑ...');
define('THUMBS_CONTINUE_WAIT', 'ãÓÊãÑ İí ÊÍÏíË ãÎÊÕÑÇÊ ÇáÕæÑ Çæ/æ ÇáÕæÑ ÇáãÚÇÏ ŞíÇÓåÇ...');
define('TITLES_WAIT', 'ÊÍÏíË ÇáÚäÇæíä, ÇáÑÌÇÁ ÇáÇäÊÙÇÑ...');
define('DELETE_WAIT', 'ÇáÛÇÁ ÇáÚäÇæíä, ÇáÑÌÇÁ ÇáÇäÊÙÇÑ...');
define('REPLACE_WAIT', 'íÊã ÇáÛÇÁ ÇáÕæÑ ÇáÇÕáíÉ æíÊã ÇÓÊÈÏÇáå ÈÇÎÑì ãÚÇÏ ŞíÇÓåÇ, ÇáÑÌÇÁ ÇáÇäÊÙÇÑ..');
define('INSTRUCTION', 'ÊÚáíãÇÊ ÓÑíÚÉ');
define('INSTRUCTION_ACTION', 'ÇÎÊÇÑ ÚãáíÉ');
define('INSTRUCTION_PARAMETER', 'ÊÍÏíÏ ÇáãÊÛíÑÇÊ');
define('INSTRUCTION_ALBUM', 'ÇÎÊÑ ÇáÇáÈæã');
define('INSTRUCTION_PRESS', 'ÇÖÛØ Úáì %s');
define('UPDATE', 'ÊÍÏíË ÇáãÎÊÕÑÇÊ æ/Ãæ ÇÚÇÏÉ ÊŞííÓ ÇáÕæÑ');
define('UPDATE_WHAT', 'ãÇĞÇ íÌÈ ÊÍÏíËå');
define('UPDATE_THUMB', 'ãÎÊÕÑÇÊ ÇáÕæÑ İŞØ');
define('UPDATE_PIC', 'ÇáÕæÑ ÇáãÚÇÏ ŞíÇÓåÇ İŞØ');
define('UPDATE_BOTH', 'ÇáÕæÑ ÇáãÎÊÕÑÉ æÇáãÚÇÏ ŞíÇÓåÇ ãÚÇ');
define('UPDATE_NUMBER', 'ÚÏÏ ÇáÕæÑ ÇáãÚÇáÌÉ ÈÇáÖÛØÉ');
define('UPDATE_OPTION', '(ÍÇá ÇáÊŞáíá ãä åĞÇ ÇáÇÚÏÇÏ Çä æÇÌåÊ ãÔÇßá ÇäÊåÇÁ ÇáæŞÊ)');
define('FILENAME_TITLE', 'ÇÓã Çáãáİ &rArr; ÚäæÇä ÇáÕæÑÉ');
define('FILENAME_HOW', 'ßíİíÉ ÊÛííÑ ÇÓã Çáãáİ');
define('FILENAME_REMOVE', 'ÇÒÇáÉ äåÇíÉ .jpg æ ÇÓÊÈÏÇá _ (ÔÑØÉ ÓİáíÉ) ÈÇáãÓÇİÇÊ');
define('FILENAME_EURO', 'ÛíÑ 2003_11_23_13_20_20.jpg Çáì 23/11/2003 13:20');
define('FILENAME_US', 'íÛíÑ  2003_11_23_13_20_20.jpg Çáì  11/23/2003 13:20');
define('FILENAME_TIME', 'íÛíÑ  2003_11_23_13_20_20.jpg Çáì 13:20');
define('DELETE', 'íáÛí ÚäÇæíä ÇáÕæÑ Çæ ÕæÑ ÇáŞíÇÓ ÇáÇÕáíÉ');
define('DELETE_TITLE', 'ÇáÛí ÚäÇæíä ÇáÕæÑ');
define('DELETE_ORIGINAL', 'ÇáÛí ÕæÑ ÇáŞíÇÓ ÇáÇÕáíÉ');
define('DELETE_REPLACE', 'íáÛí ÇáÕæÑ ÇáÇÕáíÉ æíÓÊÈÏáåã ÈÇÎÑì ÈŞíÇÓ ãÎÊáİ');
define('SELECT_ALBUM', 'ÇÎÊÇÑ ÇáÇáÈæã');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>