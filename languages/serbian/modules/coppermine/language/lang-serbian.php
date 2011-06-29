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
/*   $Id: lang-serbian.php,v 1.1 2004/08/04 05:52:28 djmaze Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Serbian');
define('LANG_NAME_NATIVE', 'Ńđďńęč');
define('LANG_COUNTRY_CODE', 'sr');
define('TRANS_NAME', 'Mihailo Stefanovic');
define('TRANS_EMAIL', 'prevodi@mikis.org');
define('TRANS_WEBSITE', 'http://mikis.org/');
define('TRANS_DATE', '2004-01-03');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'windows-1251');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'Äŕ');
define('NO', 'Íĺ');

// some common strings
define('BACK', 'ÍŔÇŔÄ');
define('CONTINUE', 'ÄŔĹ');
define('INFO', 'Číôîđěŕöčźĺ');
define('ERROR', 'Ăđĺřęŕ');

//// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
define('ALBUM_DATE_FMT', '%d.%m.%Y');
define('LASTCOM_DATE_FMT', '%d.%m.%y @ %H:%M');
define('LASTUP_DATE_FMT', '%d.%m.%Y');
define('REGISTER_DATE_FMT', '%d.%m.%Y');
define('LASTHIT_DATE_FMT', '%d. %B %Y ó %H:%M');
define('COMMENT_DATE_FMT', '%d. %B %Y ó %H:%M');

// short names for Byte, Kilo, Mega
$lang_byte_units = array('áŕźňîâŕ','KB','MB',);

// Day of week
$lang_day_of_week = array('Íĺä','Ďîí','Óňî','Ńđĺ','×ĺň','Ďĺň','Ńóá',);
// Day of the month
$lang_month = array('Łŕí','Ôĺá','Ěŕđ','Ŕďđ','Ěŕź','Łóí','Łóë','Ŕâă','Ńĺď','Îęň','Íîâ','Äĺö',);
// For the word censor
$lang_bad_words = array('*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*',);
// lang_meta_album_names
define('RANDOM', 'Ďî ńëó÷ŕźíîě čçáîđó');
define('LASTUP', 'Íîâî äîäŕňî');
define('LASTALB', 'Ďîńëĺäč ŕćóđčđŕí ŕëáóě');
define('LASTCOM', 'Íîâč ęîěĺíňŕđč');
define('TOPN', 'Íŕźăëĺäŕíčźĺ');
define('TOPRATED', 'Íŕźáîĺ îöĺĺíî');
define('LASTHITS', 'Ďîńëĺäĺ âčĺíî');
define('SEARCH', 'Đĺçóëňŕňč ďđĺňđŕăĺ');
define('FAVPICS', 'Îěčĺíĺ ńëčęĺ');

// lang_errors
define('ACCESS_DENIED', 'Íčźĺ âŕě äîçâîĺíî äŕ ďđčńňóďčňĺ îâîź ńňđŕíč.');
define('PERM_DENIED', 'Íčźĺ âŕě äîçâîĺíî äŕ čçâđřčňĺ îâó îďĺđŕöčźó.');
define('PARAM_MISSING', 'Ńęđčďň źĺ ďîçâŕí áĺç îáŕâĺçíčő ďŕđŕěĺňŕđŕ.');
define('NON_EXIST_AP', 'Čçŕáđŕíč ŕëáóě čëč ńëčęŕ íĺ ďîńňîźĺ!');
define('QUOTA_EXCEEDED', 'Äčńę ęâîňŕ źĺ ďđĺěŕřĺíŕ<br /><br />Âŕřŕ äčńę ęâîňŕ źĺ [quota]K, âŕřĺ ńëčęĺ ňđĺáóňíî çŕóçčěŕźó  [space]K. Äîäŕâŕĺě îâĺ ńëčęĺ ďđĺěŕřčëč áčńňĺ ęâîňó.');
define('GD_FILE_TYPE_ERR', 'Ęŕäŕ ęîđčńňčňĺ GD áčáëčîňĺęó äîçâîĺíĺ ńó ńŕěî JPEG č PNG âđńňĺ ńëčęŕ.');
define('INVALID_IMAGE', 'Ńëčęŕ ęîźó ńňĺ ďîńëŕëč źĺ îřňĺĺíŕ čëč źĺ GD áčáëčîňĺęŕ íĺ ďîäđćŕâŕ');
define('RESIZE_FAILED', 'Íĺ ěîăó äŕ íŕďđŕâčě ěŕđęčöó čëč ńěŕčě âĺëč÷číó ńëčęĺ');
define('NO_IMG_TO_DISPLAY', 'Íĺěŕ ńëčęŕ çŕ ďđčęŕçčâŕĺ');
define('NON_EXIST_CAT', 'Čçŕáđŕíŕ ęŕňĺăîđčźŕ íĺ ďîńňîźč');
define('ORPHAN_CAT', 'Ęŕňĺăîđčźŕ čěŕ íĺďîńňîźĺĺă đîäčňĺŕ, ďîęđĺíčňĺ óďđŕâŕĺ ęŕňĺăîđčźŕěŕ äŕ áčńňĺ čńďđŕâčëč ďđîáëĺě.');
define('DIRECTORY_RO', 'Ó äčđĺęňîđčźóě \'%s\' ńĺ íĺ ěîćĺ óďčńčâŕňč, ńëčęĺ ńĺ íĺ ěîăó îáđčńŕňč');
define('NON_EXIST_COMMENT', 'Čçŕáđŕíč ęîěĺíňŕđ íĺ ďîńňîźč.');
define('PIC_IN_INVALID_ALBUM', 'Ńëčęŕ źĺ ó íĺďîńňîźĺĺě ŕëáóěó (%s)!?');
define('BANNED', 'Çŕáđŕĺíî âŕě źĺ äŕ ďîńĺóźĺňĺ îâŕź ńŕźň.');
define('NOT_WITH_UDB', 'Îâŕ ôóíęöčźŕ źĺ čńęó÷ĺíŕ ó Coppermine-ó źĺđ źĺ číňĺăđčńŕí ńŕ ńîôňâĺđîě çŕ ôîđóěĺ. Čëč ňî řňî ďîęóřŕâŕňĺ äŕ óđŕäčňĺ íčźĺ ďîäđćŕíî ó îâîź ęîíôčăóđŕöčźč, čëč áč çŕ ňó ôóíęöčźó ňđĺáŕî äŕ áóäĺ çŕäóćĺí ńîôňâĺđ çŕ ôîđóěĺ.');

// lang_main_menu
define('ALB_LIST_TITLE', 'Čäč íŕ ëčńňó ŕëáóěŕ');
define('ALB_LIST_LNK', 'Ëčńňŕ ŕëáóěŕ');
define('MY_GAL_TITLE', 'Čäč ó ěîźó ëč÷íó ăŕëĺđčźó');
define('MY_GAL_LNK', 'Ěîźŕ ăŕëĺđčźŕ');
define('MY_PROF_LNK', 'Ěîź ďđîôčë');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Ďđĺč ó ŕäěčíčńňđŕňčâíč đĺćčě');
define('ADM_MODE_LNK', 'Ŕäěčíčńňđŕňčâíč đĺćčě');
define('USR_MODE_TITLE', 'Ďđĺč ó ęîđčńíč÷ęč đĺćčě');
define('USR_MODE_LNK', 'Ęîđčńíč÷ęč đĺćčě');
define('UPLOAD_PIC_TITLE', 'Ďîřŕč ńëčęó ó ŕëáóě');
define('UPLOAD_PIC_LNK', 'Ďîřŕč ńëčęó');
define('REGISTER_TITLE', 'Íŕďđŕâč íŕëîă');
define('REGISTER_LNK', 'Đĺăčńňđóź ńĺ');
define('LOGIN_LNK', 'Ďđčźŕâŕ');
define('LOGOUT_LNK', 'Îäźŕâŕ');
define('LASTUP_LNK', 'Íîâî äîäŕňî');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Íîâč ęîěĺíňŕđč');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Íŕźăëĺäŕíčźĺ');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Íŕźáîĺ îöĺĺíî');
define('SEARCH_LNK', 'Ďđĺňđŕăŕ');
define('FAV_LNK', 'Ěîźĺ îěčĺíĺ');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu

define('UPL_APP_LNK', 'Îäîáđŕâŕĺ ďîńëŕňčő');
define('CONFIG_LNK', 'Ďîäĺřŕâŕŕ');
define('ALBUMS_LNK', 'Ŕëáóěč');
define('CATEGORIES_LNK', 'Ęŕňĺăîđčźĺ');
define('USERS_LNK', 'Ęîđčńíčöč');
define('GROUPS_LNK', 'Ăđóďĺ');
define('COMMENTS_LNK', 'Ęîěĺíňŕđč');
define('SEARCHNEW_LNK', 'Ěŕńîâíî äîäŕâŕĺ');
define('UTIL_LNK', 'Ďđîěĺíŕ âĺëč÷číĺ ńëčęŕ');
define('BAN_LNK', 'Çŕáđŕíŕ ęîđčńíčęŕ');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Íŕďđŕâč / óđĺäč ěîźĺ ŕëáóěĺ');
define('MODIFYALB_LNK', 'Čçěĺíč ěîźĺ ŕëáóěĺ');
define('MY_PROF_LNK', 'Ěîź ďđîôčë');

// lang_cat_list
define('CATEGORY', 'Ęŕňĺăîđčźŕ');
define('ALBUMS', 'Ŕëáóěč');
define('PICTURES', 'Ńëčęĺ');

// lang_album_list
define('ALBUM_ON_PAGE', '%d ŕëáóěŕ íŕ %d ńňđŕíŕ');

// lang_thumb_view
define('DATE', 'ÄŔŇÓĚ');
define('NAME', 'ÍŔÇČÂ ÄŔŇ.');
define('TITLE', 'ÍŔŃËÎÂ');
define('SORT_DA', 'Ńîđňčđŕź ďî äŕňóěó óçëŕçíî');
define('SORT_DD', 'Ńîđňčđŕź ďî äŕňóěó ńčëŕçíî');
define('SORT_NA', 'Ńîđňčđŕź ďî íŕçčâó äŕňîňĺęĺ óçëŕçíî');
define('SORT_ND', 'Ńîđňčđŕź ďî íŕçčâó äŕňîňĺęĺńčëŕçíî');
define('SORT_TA', 'Ńîđňčđŕź ďî íŕńëîâó ńëčęĺ óçëŕçíî');
define('SORT_TD', 'Ńîđňčđŕź ďî íŕńëîâó ńëčęĺ ńčëŕçíî');
define('PIC_ON_PAGE', '%d ńëčęŕ íŕ %d ńňđŕíŕ');
define('USER_ON_PAGE', '%d ęîđčńíčęŕ íŕ %d ńňđŕíŕ');

// lang_img_nav_bar
define('THUMB_TITLE', 'Âđŕňč ńĺ íŕ ńňđŕíó ńŕ ěŕđęčöŕěŕ');
define('PIC_INFO_TITLE', 'Ďđčęŕćč/ńŕęđčź číôîđěŕöčźĺ î ńëčöč');
define('SLIDESHOW_TITLE', 'Ńëŕźä řîó');
define('ECARD_TITLE', 'Ďîřŕč îâó ńëčęó ęŕî ĺ-÷ĺńňčňęó');
define('ECARD_DISABLED', 'Ĺ-÷ĺńňčęĺ ńó čńęó÷ĺíĺ');
define('ECARD_DISABLED_MSG', 'Íčźĺ âŕě äîçâîĺíî äŕ řŕĺňĺ ĺ-÷ĺńňčňęĺ');
define('PREV_TITLE', 'Âčäč ďđĺňőîäíó ńëčęó');
define('NEXT_TITLE', 'Âčäč ńëĺäĺó ńëčęó');
define('PIC_POS', 'ŃËČĘŔ %s/%s');

// lang_rate_pic
define('RATE_THIS_PIC', 'Îöĺíč îâó ńëčęó ');
define('NO_VOTES', '(Íĺěŕ ăëŕńîâŕ)');
define('RATING', '(ňđĺíóňíŕ îöĺíŕ : %s / 5 ńŕ %s ăëŕńîâŕ)');
define('RUBBISH', 'óáđĺ');
define('POOR', 'Ńëŕáŕ');
define('FAIR', 'Ńîëčäíŕ');
define('GOOD', 'Äîáđŕ');
define('EXCELLENT', 'Îäëč÷íŕ');
define('GREAT', 'Čçâŕíđĺäíŕ');

// lang_cpg_die
define('INFORMATION', 'Číôîđěŕöčźĺ');
define('ERROR', 'Ăđĺřęŕ');
define('CRITICAL_ERROR', 'Ęđčňč÷íŕ ăđĺřęŕ');
define('FILE', 'Äŕňîňĺęŕ: ');
define('LINE', 'Đĺä: ');

// lang_display_thumbnails
define('FILENAME', 'Čěĺ äŕňîňĺęĺ: ');
define('FILESIZE', 'Âĺëč÷číŕ äŕňîňĺęĺ: ');
define('DIMENSIONS', 'Äčěĺíçčźĺ: ');
define('DATE_ADDED', 'Äŕňóě äîäŕâŕŕ: ');

// lang_get_pic_data
define('N_COMMENTS', '%s ęîěĺíňŕđŕ');
define('N_VIEWS', '%s ďđĺăëĺäŕ');
define('N_VOTES', '(%s ăëŕńîâŕ)');

// lang_smilies_inc_php
define('EXCLAMATION', 'Óçâčę');
define('QUESTION', 'Ďčňŕĺ');
define('VERY HAPPY', 'Âđëî ńđĺŕí');
define('SMILE', 'Îńěĺő');
define('SAD', 'Ňóćŕí');
define('SURPRISED', 'Čçíĺíŕĺí');
define('SHOCKED', 'Řîęčđŕí');
define('CONFUSED', 'Çáóĺí');
define('COOL', 'Cool');
define('LAUGHING', 'Ńěĺźĺ ńĺ');
define('MAD', 'Áĺńŕí');
define('RAZZ', 'Ďëĺç');
define('EMBARASSED', 'Ďîňčĺí');
define('CRYING OR VERY SAD', 'Óďëŕęŕí');
define('EVIL OR VERY MAD', 'Çŕî čëč âđëî áĺńŕí');
define('TWISTED EVIL', 'Çëîŕ');
define('ROLLING EYES', 'Ďđĺâđĺ î÷čěŕ');
define('WINK', 'Íŕěčă');
define('IDEA', 'Čäĺźŕ');
define('ARROW', 'Ńňđĺëčöŕ');
define('NEUTRAL', 'Îíŕęî');
define('MR. GREEN', 'Çĺëĺíęî');

// lang_admin_php
define('LV_ADMIN', 'Íŕďóřňŕě ŕäěčíčńňđŕňčâíč đĺćčě...');
define('ENT_ADMIN', 'Ďđĺëŕçčě ó ŕäěčíčńňđŕňčâíč đĺćčě...');

// lang_albmgr_php
define('ALB_NEED_NAME', 'Ŕëáóěč ěîđŕźó čěŕňč čěĺ!');
define('CONFIRM_MODIFS', 'Äŕ ëč ńňĺ ńčăóđíč äŕ ćĺëčňĺ äŕ íŕďđŕâčňĺ îâĺ čçěĺíĺ?');
define('NO_CHANGE', 'Íčńňĺ íŕďđŕâčëč íč źĺäíó čçěĺíó!');
define('NEW_ALBUM', 'Íîâč ŕëáóě');
define('CONFIRM_DELETE1', 'Äŕ ëč ńňĺ ńčăóđíč äŕ ćĺëčňĺ äŕ îáđčřĺňĺ îâŕź ŕëáóě?');
define('CONFIRM_DELETE2', '\\nŃâĺ ńëčęĺ č ęîěĺíňŕđč áčĺ čçăóáĺíč!');
define('SELECT_FIRST', 'Ďđâî îäŕáĺđčňĺ ŕëáóě');
define('ALB_MRG', 'Óďđŕâŕĺ ŕëáóěčěŕ');
define('MY_GALLERY', '* Ěîźŕ ăŕëĺđčźŕ *');
define('NO_CATEGORY', '* Íĺěŕ ęŕňĺăîđčźĺ *');
define('DELETE', 'Îáđčřč');
define('NEW', 'Íîâč');
define('APPLY_MODIFS', 'Ďđčěĺíč čçěĺíĺ');
define('SELECT_CATEGORY', 'Čçŕáĺđč ęŕňĺăîđčźó');

// lang_catmgr_php
define('MISS_PARAM', 'Íĺîďőîäíč ďŕđŕěĺňđč çŕ îďĺđŕöčźó \'%s\'íčńó çŕäŕňč!');
define('UNKNOWN_CAT', 'Čçŕáđŕíŕ ęŕňĺăîđčźŕ íĺ ďîńňîźč ó áŕçč');
define('USERGAL_CAT_RO', 'Ęŕňĺăîđčźŕ \"ęîđčńíč÷ęĺ ăŕëĺđčźĺ\" ńĺ íĺ ěîćĺ čçáđčńŕňč!');
define('MANAGE_CAT', 'Óđĺäč ęŕňĺăîđčźĺ');
define('CONFIRM_DELETE', 'Äŕ ëč ńňĺ ńčăóđíč äŕ ćĺëčňĺ äŕ ÎÁĐČŘĹŇĹ îâó ęŕňĺăîđčźó');
define('CATEGORY', 'Ęŕňĺăîđčźŕ');
define('OPERATIONS', 'Îďĺđŕöčźĺ');
define('MOVE_INTO', 'Ďđĺěĺńňč ó ');
define('UPDATE_CREATE', 'Čçěĺíč / íŕďđŕâč ęŕňĺăîđčźó');
define('PARENT_CAT', 'Íŕäđĺĺíŕ ęŕňĺăîđčźŕ');
define('CAT_TITLE', 'Íŕçčâ ęŕňĺăîđčźĺ');
define('CAT_DESC', 'Îďčń ęŕňĺăîđčźĺ');

// lang_config_php
define('TITLE', 'Ďîäĺřŕâŕŕ');
define('RESTORE_CFG', 'Âđŕňč ďîäđŕçóěĺâŕíŕ ďîäĺřŕâŕŕ');
define('SAVE_CFG', 'Ńŕ÷óâŕź íîâŕ ďîäĺřŕâŕŕ');
define('NOTES', 'Íŕďîěĺíĺ');
define('INFO', 'Číôîđěŕöčźĺ');
define('UPD_SUCCESS', 'Coppermine ďîäĺřŕâŕŕ ńó ńŕ÷óâŕíŕ');
define('RESTORE_SUCCESS', 'Âđŕĺíŕ ńó ďîäđŕçóěĺâŕíŕ ďîäĺřŕâŕŕ Coppermine-ŕ');
define('NAME_A', 'Ďî čěĺíó óçëŕçíî');
define('NAME_D', 'Ďî čěĺíó ńčëŕçíî');
define('TITLE_A', 'Ďî íŕçčâó óçëŕçíî');
define('TITLE_D', 'Ďî íŕçčâó ńčëŕçíî');
define('DATE_A', 'Ďî äŕňóěó óçëŕçíî');
define('DATE_D', 'Ďî čěĺíó ńčëŕçíî');
define('TH_ANY', 'Ěŕęń. îäíîń');
define('TH_HT', 'Âčńčíŕ');
define('TH_WD', 'Řčđčíŕ');

// lang_config_data
define('CONFIG_GENSET', 'Îďřňŕ ďîäĺřŕâŕŕ');
define('GALLERY_NAME', 'Íŕçčâ ăŕëĺđčźĺ');
define('GALLERY_DESCRIPTION', 'Îďčń ăŕëĺđčźĺ');
define('GALLERY_ADMIN_EMAIL', 'Ŕäđĺńŕ ĺ-ďîřňĺ ŕäěčíčńňđŕňîđŕ');
define('ECARDS_MORE_PIC_TARGET', 'Îäđĺäčříŕ ŕäđĺńŕ ëčíęŕ 'Âčäč źîř ńëčęŕ' ó ĺ-äîďčńíčöŕěŕ');
define('LANG', 'Łĺçčę');
define('CPGTHEME', 'Ňĺěŕ');
define('ALB_LIST_VIEW_TITLE', 'Ďđĺăëĺä ëčńňĺ ŕëáóěŕ');
define('MAIN_TABLE_WIDTH', 'Řčđčíŕ ăëŕâíĺ ňŕáĺëĺ (ňŕ÷ŕęŕ čëč %)');
define('SUBCAT_LEVEL', 'Áđîź íčâîŕ ďđčęŕçŕíčő ęŕňĺăîđčźŕ');
define('ALBUMS_PER_PAGE', 'Áđîź ďđčęŕçŕíčő ŕëáóěŕ');
define('ALBUM_LIST_COLS', 'Áđîź ęîëîíŕ ó ëčńňč ŕëáóěŕ');
define('ALB_LIST_THUMB_SIZE', 'Äčěĺíçčźĺ ěŕđęčöĺ ó ňŕ÷ęŕěŕ');
define('MAIN_PAGE_LAYOUT', 'Ńŕäđćŕź íŕńëîâíĺ ńňđŕíĺ');
define('FIRST_LEVEL', 'Ďđčęŕćč ěŕđęčöĺ ŕëáóěŕ ďđâîă íčâîŕ ó ęŕňĺăîđčźŕěŕ');
define('THUMB_VIEW_TITLE', 'Ďđĺăëĺä ěŕđęčöŕ');
define('THUMBCOLS', 'Áđîź ęîëîíŕ íŕ ńňđŕíčöč ńŕ ěŕđęčöŕěŕ');
define('THUMBROWS', 'Áđîź đĺäîâŕ íŕ ńňđŕíčöč ńŕ ěŕđęčöŕěŕ');
define('MAX_TABS', 'Ěŕęńčěŕëŕí áđîź ďđčęŕçŕíčő ďîŕ');
define('CAPTION_IN_THUMBVIEW', 'Ďđčęŕćč çŕăëŕâĺ ńëčęĺ (ďîđĺä íŕńëîâŕ) čńďîä ěŕđęčöĺ');
define('DISPLAY_COMMENT_COUNT', 'Ďđčęŕćč áđîź ęîěĺíňŕđŕ čńďîä ěŕđęčöĺ');
define('DEFAULT_SORT_ORDER', 'Ďîäđŕçóěĺâŕíî ńîđňčđŕĺ ńëčęŕ');
define('MIN_VOTES_FOR_RATING', 'Ěčíčěŕëŕí áđîź ăëŕńîâŕ äŕ áč ńĺ ńëčęŕ ďîźŕâčëŕ ó ëčńňč 'íŕźáîĺ îöĺĺíĺ'');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'Ďđĺăëĺä ńëčęŕ č ďîäĺřŕâŕĺ ęîěĺíňŕđŕ');
define('PICTURE_TABLE_WIDTH', 'Řčđčíŕ ňŕáĺëĺ çŕ ďđčęŕçčâŕĺ ńëčęŕ (ňŕ÷ŕęŕ čëč  %)');
define('DISPLAY_PIC_INFO', 'Číôîđěŕöčźĺ î ńëčöč ńó ďîäđŕçóěĺâŕíî ďđčęŕçŕíĺ');
define('FILTER_BAD_WORDS', 'Čçáŕöč đóćíĺ đĺ÷č čç ęîěĺíňŕđŕ');
define('ENABLE_SMILIES', 'Äîçâîëč ńěŕźëčźĺ ó ęîěĺíňŕđčěŕ');
define('MAX_IMG_DESC_LENGTH', 'Ěŕęńčěŕëíŕ äóćčíŕ îďčńŕ ńëčęĺ');
define('MAX_COM_WLENGTH', 'Ěŕęńčěŕëŕí áđîź ńëîâŕ ó đĺ÷č');
define('MAX_COM_LINES', 'Ěŕęńčěŕëŕí áđîź ëčíčźŕ ó ęîěĺíňŕđó');
define('MAX_COM_SIZE', 'Ěŕęńčěŕëíŕ äóćčíŕ ęîěĺíňŕđŕ');
define('DISPLAY_FILM_STRIP', 'Ďđčęŕćč ôčëěńęó ňđŕęó');
define('MAX_FILM_STRIP_ITEMS', 'Áđîź ęŕäđîâŕ ó ôčëěńęîź ňđŕöč');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('PIC_THUMB_SETTING_TITLE', 'Ďîäĺřŕâŕŕ ńëčęŕ č ěŕđęčöŕ');
define('JPEG_QUAL', 'Ęâŕëčňĺň JPEG ôŕźëŕ');
define('THUMB_WIDTH', 'Ěŕęńčěŕëíĺ äčěĺíçčźĺ ěŕđęčöĺ <b>*</b>');
define('THUMB_USE', 'Ęîđčńňč äčěĺíçčźĺ (řčđčíŕ čëč âčńčíŕ čëč ěŕęń. îäíîń çŕ ěŕđęčöó) <b>*</b>');
define('MAKE_INTERMEDIATE', 'Ďđŕâč ěĺóńëčęĺ');
define('PICTURE_WIDTH', 'Ěŕęńčěŕëíŕ řčđčíŕ čëč âčńčíŕ ěĺóńëčęĺ <b>*</b>');
define('MAX_UPL_SIZE', 'Ěŕęńčěŕëíŕ âĺëč÷číŕ ďîńëŕňĺ ńëčęĺ (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Ěŕęńčěŕëíŕ řčđčíŕ čëč âčńčíŕ ďîńëŕňĺ ńëčęĺ (ňŕ÷ŕęŕ)');
define('USER_SETTING_TITLE', 'Ęîđčńíč÷ęŕ ďîäĺřŕâŕŕ');
define('ALLOW_USER_REGISTRATION', 'Äîçâîëč đĺăčńňđŕöčźó íîâčő ęîđčńíčęŕ');
define('REG_REQUIRES_VALID_EMAIL', 'Đĺăčńňđŕöčźŕ íîâčő ęîđčńíčęŕ çŕőňĺâŕ ďđîâĺđó ďđĺęî ĺ-ďîřňĺ');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Äîçâîëč äŕ äâŕ ęîđčńíčęŕ čěŕźó čńňó ŕäđĺńó ĺ-ďîřňĺ');
define('ALLOW_PRIVATE_ALBUMS', 'Ęîđčńíčöč ěîăó čěŕňč ďđčâŕňíĺ ŕëáóěĺ');
define('CUSTOM_FIELDS_TITLE', 'Ęîđčńíč÷ęŕ ďîŕ ó îďčńčěŕ ńëčęŕ (îńňŕâč ďđŕçíî ŕęî ńĺ íĺ ęîđčńňĺ)');
define('USER_FIELD1_NAME', 'Íŕçčâ ďîŕ 1');
define('USER_FIELD2_NAME', 'Íŕçčâ ďîŕ 2');
define('USER_FIELD3_NAME', 'Íŕçčâ ďîŕ 3');
define('USER_FIELD4_NAME', 'Íŕçčâ ďîŕ 4');
define('PIC_THUMB_SETTING_TITLE', 'Íŕďđĺäíŕ ďîäĺřŕâŕŕ ńëčęŕ č ěŕđęčöŕ');
define('SHOW_PRIVATE', 'Ďđčęŕćč čęîíčöó ďđčâŕňíîă ŕëáóěŕ íĺďđčźŕâĺíčě ęîđčńíčöčěŕ');
define('FORBIDEN_FNAME_CHAR', 'Çíŕęîâč ęîźč íčńó äîçâîĺíč ó čěĺíčěŕ äŕňîňĺęŕ');
define('ALLOWED_FILE_EXTENSIONS', 'Äîçâîĺíĺ ĺęńňĺíçčźĺ ôŕźëîâŕ çŕ ďîńëŕňĺ ńëčęĺ');
define('THUMB_METHOD', 'Íŕ÷čí ďđîěĺíĺ âĺëč÷číĺ ńëčęŕ');
define('IMPATH', 'Ďóňŕŕ äî ImageMagick ŕëŕňŕ çŕ ęîíâĺđçčźó (íďđ. /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Äîçâîĺíĺ âđńňĺ ńëčęŕ (ńŕěî çŕ ImageMagick)');
define('IM_OPTIONS', 'Îďöčźĺ ęîěŕíäíĺ ëčíčźĺ çŕ ImageMagick');
define('READ_EXIF_DATA', '×čňŕź EXIF ďîäŕňęĺ čç JPEG äŕňîňĺęŕ');
define('FULLPATH', 'Äčđĺęňîđčźóě ŕëáóěŕ <b>*</b>');
define('USERPICS', 'Äčđĺęňîđčźóě çŕ ęîđčńíč÷ęĺ ńëčęĺ <b>*</b>');
define('NORMAL_PFX', 'Ďđĺôčęń çŕ ěĺóńëčęĺ <b>*</b>');
define('THUMB_PFX', 'Ďđĺôčęń çŕ ěŕđęčöĺ <b>*</b>');
define('DEFAULT_DIR_MODE', 'Ďîäđŕçóěĺâŕíč ěîä äčđĺęňîđčźóěŕ');
define('DEFAULT_FILE_MODE', 'Ďîäđŕçóěĺâŕíč ěîä ńëčęŕ');
define('COOKIE_SETTING_TITLE', 'Ďîäĺřŕâŕŕ ęîëŕ÷čŕ č ńęóďîâŕ çíŕęîâŕ');
define('COOKIE_NAME', 'Íŕçčâ ęîëŕ÷čŕ ęîźč ĺ ńęđčďň ęîđčńčňč');
define('COOKIE_PATH', 'Ďóňŕŕ äî ęîëŕ÷čŕ ęîźč ĺ ńęđčďň ęîđčńčňč');
define('CHAR_SET', 'Ĺíęîäčíă');
define('MISC_SETTING_TITLE', 'Đŕçíŕ ďîäĺřŕâŕŕ');
define('DEBUG_MODE', 'Óęó÷č ěîä çŕ îňęëŕŕĺ ăđĺřŕęŕ');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) Ďîŕ îçíŕ÷ĺíŕ ńŕ  * íĺ ńěĺźó ńĺ ěĺŕňč ŕęî âĺ čěŕňĺ ńëčęŕ ó ăŕëĺđčźč</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Ěîđŕňĺ óíĺňč ńâîźĺ čěĺ č ęîěĺíňŕđ');
define('COM_ADDED', 'Ęîěĺíňŕđ äîäŕň');
define('ALB_NEED_TITLE', 'Ěîđŕňĺ äŕňč íŕńëîâ ŕëáóěó!');
define('NO_UDP_NEEDED', 'Ŕćóđčđŕĺ íčźĺ ďîňđĺáíî.');
define('ALB_UPDATED', 'Ŕëáóě źĺ ŕćóđčđŕí');
define('UNKNOWN_ALBUM', 'Îäŕáđŕíč ŕëáóě íĺ ďîńňîźč čëč âč íĺěŕňĺ ďđŕâŕ äŕ äîäŕźĺňĺ ńëčęĺ ó ĺăŕ');
define('NO_PIC_UPLOADED', 'Ńëčęŕ íčźĺ ďîńëŕňŕ!<br /><br />Ŕęî ńňĺ çŕčńňŕ čçŕáđŕëč ńëčęó çŕ ńëŕĺ, ďđîâĺđčňĺ äŕ ëč ńĺđâĺđ äîçâîŕâŕ ńëŕĺ ôŕźëîâŕ...');
define('ERR_MKDIR', 'Íčźĺ óńďĺëî ęđĺčđŕĺ äčđĺęňîđčźóěŕ %s !');
define('DEST_DIR_RO', 'Ńęđčďň íĺ ěîćĺ äŕ ďčřĺ ó îäđĺäčříč äčđĺęňîđčźóě %s !');
define('ERR_MOVE', 'Íčźĺ ěîăóĺ ďđĺěĺńňčňč %s ó %s !');
define('ERR_FSIZE_TOO_LARGE', 'Ńëčęŕ ęîźó ńňĺ ďîńëŕëč źĺ ďđĺâĺëčęčő äčěĺíçčźŕ (ěŕęńčěŕëíî źĺ äîçâîĺíî %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Ńëčęŕ ęîźó ńňĺ ďîńëŕëč źĺ ďđĺâĺëčęŕ (ěŕęńčěŕëíî źĺ äîçâîĺíî %s KB) !');
define('ERR_INVALID_IMG', 'Äŕňîňĺęŕ ęîźč ńňĺ ďîńëŕëč íčźĺ čńďđŕâíŕ ńëčęŕ!');
define('ALLOWED_IMG_TYPES', 'Ěîćĺňĺ ďîńëŕňč ńŕěî %s ńëčęŕ.');
define('ERR_INSERT_PIC', 'Ńëčęŕ \'%s\' ńĺ íĺ ěîćĺ äîäŕňč ó ŕëáóě ');
define('UPLOAD_SUCCESS', 'Âŕřŕ ńëčęŕ źĺ óńďĺříî ďîńëŕňŕ<br /><br />Áčĺ ďđčęŕçŕíŕ íŕęîí îäîáđĺŕ ŕäěčíčńňđŕňîđŕ.');
define('INFO', 'Číôîđěŕöčźĺ');
define('ERR_COMMENT_EMPTY', 'Âŕř ęîěĺíňŕđ źĺ ďđŕçŕí!');
define('ERR_INVALID_FEXT', 'Äîçâîĺíĺ ńó äŕňîňĺęĺ ńŕěî ńŕ ńëĺäĺčě ĺęńňĺíçčźŕěŕ: <br /><br />%s.');
define('NO_FLOOD', 'Âč ńňĺ âĺ ŕóňîđ ďîńëĺäĺă ďîńëŕňîă ęîěĺíňŕđŕ óç îâó ńëčęó<br /><br />Ěîćĺňĺ čçěĺíčňč ńâîź ďđĺňőîäíč ęîěĺíňŕđ óęîëčęî ňî ćĺëčňĺ');
define('REDIRECT_MSG', 'Áčĺňĺ ďđĺóńěĺđĺíč.<br /><br /><br />Ęëčęíčňĺ \'ÍŔŃŇŔÂČ\' ŕęî ńĺ íîâŕ ńňđŕíŕ íĺ ó÷čňŕ ŕóňîěŕňńęč');
define('UPL_SUCCESS', 'Ńëčęŕ źĺ óńďĺříî äîäŕňŕ');

// lang_delete_php
define('CAPTION', 'Íŕçčâ');
define('FS_PIC', 'ńëčęŕ ďóíĺ âĺëč÷číĺ');
define('DEL_SUCCESS', 'óńďĺříî îáđčńŕíî');
define('NS_PIC', 'ńëčęŕ íîđěŕëíĺ âĺëč÷číĺ');
define('ERR_DEL', 'íĺ ěîćĺ ńĺ îáđčńŕňč');
define('THUMB_PIC', 'ěŕđęčöŕ');
define('COMMENT', 'ęîěĺíňŕđ');
define('IM_IN_ALB', 'ńëčęŕ ó ŕëáóěó');
define('ALB_DEL_SUCCESS', 'Ŕëáóě \'%s\' źĺ îáđčńŕí');
define('ALB_MGR', 'Óđĺčâŕĺ ŕëáóěŕ');
define('ERR_INVALID_DATA', 'Íĺčńďđŕâíč ďîäŕöč ďđčěĺíč ó \'%s\'');
define('CREATE_ALB', 'Ďđŕâčě ŕëáóě \'%s\'');
define('UPDATE_ALB', 'Ŕćóđčđŕě ŕëáóě \'%s\' ńŕ íŕçčâîě \'%s\' č číäĺęńîě \'%s\'');
define('DEL_PIC', 'Îáđčřč ńëčęó');
define('DEL_ALB', 'Îáđčřč ŕëáóě');
define('DEL_USER', 'Îáđčřč ęîđčńíčęŕ');
define('ERR_UNKNOWN_USER', 'Čçŕáđŕíč ęîđčńíčę íĺ ďîńňîźč!');
define('COMMENT_DELETED', 'Ęîěĺíňŕđ źĺ îáđčńŕí');

// lang_display_image_php
define('CONFIRM_DEL', 'Äŕ ëč ńňĺ ńčăóđíč äŕ ćĺëčňĺ äŕ ÎÁĐČŘĹŇĹ îâó ńëčęó? \\nĘîěĺíňŕđč ĺ ňŕęîĺ áčňč čçáđčńŕíč.');
define('DEL_PIC', 'ÎÁĐČŘČ ÎÂÓ ŃËČĘÓ');
define('SIZE', '%s x %s ňŕ÷ŕęŕ');
define('VIEWS', '%s ďóňŕ');
define('SLIDESHOW', 'Ńëŕźä řîó');
define('STOP_SLIDESHOW', 'ÇŔÓŃŇŔÂČ ŃËŔŁÄ ŘÎÓ');
define('VIEW_FS', 'Ęëčęíč çŕ ńëčęó ó ďóíîź âĺëč÷číč');

// lang_picinfo
define('TITLE', 'Číôîđěŕöčźĺ î ńëčöč');
define('FILENAME', 'Íŕçčâ äŕňîňĺęĺ');
define('ALBUM NAME', 'Íŕçčâ ŕëáóěŕ');
define('RATING', 'Îöĺíŕ (%s ăëŕńîâŕ)');
define('KEYWORDS', 'Ęó÷íĺ đĺ÷č');
define('FILE SIZE', 'Âĺëč÷číŕ ôŕźëŕ');
define('DIMENSIONS', 'Äčěĺíçčźĺ');
define('DISPLAYED', 'Ďđčęŕçŕíî');
define('CAMERA', 'Ęŕěĺđŕ');
define('DATE TAKEN', 'Äŕňóě ńíčěŕŕ');
define('APERTURE', 'Aperture');
define('EXPOSURE TIME', 'Âđĺěĺ ĺęńďîçčöčźĺ');
define('FOCAL LENGTH', 'Ćčćíŕ äŕčíŕ');
define('COMMENT', 'Ęîěĺíňŕđ');
define('ADDFAV', 'Äîäŕź ó îěčĺíĺ');
define('ADDFAVPHRASE', 'Îěčĺíĺ');
define('REMFAV', 'Óęëîíč čç îěčĺíčő');

// lang_display_comments
define('OK', 'Ó ĐĹÄÓ');
define('EDIT_TITLE', 'Čçěĺíč îâŕź ęîěĺíňŕđ');
define('CONFIRM_DELETE', 'Äŕ ëč ńňĺ ńčăóđíč äŕ ćĺëčňĺ äŕ îáđčřĺňĺ îâŕź ęîěĺíňŕđ?');
define('ADD_YOUR_COMMENT', 'Äîäŕźňĺ ńâîź ęîěĺíňŕđ');
define('NAME', 'Čěĺ');
define('COMMENT', 'Ęîěĺíňŕđ');
define('YOUR_NAME', 'Ŕíîí');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Ęëčęíčňĺ íŕ ńëčęó äŕ çŕňâîđčňĺ îâŕź ďđîçîđ');

// lang_ecard_php
define('TITLE', 'Ďîřŕč ĺ-÷ĺńňčňęó');
define('INVALID_EMAIL', '<b>Óďîçîđĺĺ</b> : íĺčńďđŕâíŕ ŕäđĺńŕ ĺ-ďîřňĺ!');
define('ECARD_TITLE', 'Ĺ-÷ĺńňčňęŕ îä %s çŕ Âŕń');
define('VIEW_ECARD', 'Ŕęî ńĺ ÷ĺńňčňęŕ íĺ ďđčęŕćĺ čńďđŕâíî, ęëčęíčňĺ íŕ îâŕź ëčíę');
define('VIEW_MORE_PICS', 'Ęëčęíčňĺ îâäĺ äŕ âčäčňĺ źîř ńëčęŕ!');
define('SEND_SUCCESS', 'Âŕřŕ ĺ-÷ĺńňčňęŕ źĺ ďîńëŕňŕ');
define('SEND_FAILED', 'Ćŕî íŕě źĺ ŕëč ńĺđâĺđ íĺ ěîćĺ äŕ ďîřŕĺ âŕřó ĺ-÷ĺńňčňęó...');
define('FROM', 'Îä');
define('YOUR_NAME', 'Âŕřĺ čěĺ');
define('YOUR_EMAIL', 'Âŕřŕ ĺ-ŕäđĺńŕ');
define('TO', 'Çŕ');
define('RCPT_NAME', 'Čěĺ ďđčěŕîöŕ');
define('RCPT_EMAIL', 'Ĺ-ŕäđĺńŕ ďđčěŕîöŕ');
define('GREETINGS', 'Ďîçäđŕâ');
define('MESSAGE', 'Ďîđóęŕ');

// lang_editpics_php
define('PIC_INFO', 'Picture&nbsp;info');
define('ALBUM', 'Ŕëáóě');
define('TITLE', 'Íŕçčâ');
define('DESC', 'Îďčń');
define('KEYWORDS', 'Ęó÷íĺ đĺ÷č');
define('PIC_INFO_STR', '%s &times; %s - %s KB - %s ďđčęŕçŕ - %s ăëŕńîâŕ');
define('APPROVE', 'Îäîáđč ńëčęó');
define('POSTPONE_APP', 'Îäëîćč îäîáđŕâŕĺ');
define('DEL_PIC', 'Îáđčřč ńëčęó');
define('RESET_VIEW_COUNT', 'Ďîíčřňč áđîźŕ÷ ďđčęŕçčâŕŕ');
define('RESET_VOTES', 'Ďîíčřňč ăëŕńŕĺ');
define('DEL_COMM', 'Îáđčřč ęîěĺíňŕđĺ');
define('UPL_APPROVAL', 'Îäîáđŕâŕĺ ďîńëŕňîă');
define('EDIT_PICS', 'Óđĺäč ńëčęĺ');
define('SEE_NEXT', 'Âčäč ńëĺäĺĺ ńëčęĺ');
define('SEE_PREV', 'Âčäč ďđĺňőîäíĺ ńëčęĺ');
define('N_PIC', '%s ńëčęŕ');
define('N_OF_PIC_TO_DISP', 'Áđîź ďđčęŕçŕíčő ńëčęŕ');
define('APPLY', 'Ďđčěĺíč čçěĺíĺ');

// lang_groupmgr_php
define('GROUP_NAME', 'Íŕçčâ ăđóďĺ');
define('DISK_QUOTA', 'Äčńę ęâîňŕ');
define('CAN_RATE', 'Ěîăó äŕ îöĺóźó ńëčęĺ');
define('CAN_SEND_ECARDS', 'Ěîăó äŕ řŕó ĺ-÷ĺńňčňęĺ');
define('CAN_POST_COM', 'Ěîăó äŕ ďčřó ęîěĺíňŕđĺ');
define('CAN_UPLOAD', 'Ěîăó äŕ řŕó ńëčęĺ');
define('CAN_HAVE_GALLERY', 'Ěîăó äŕ čěŕźó ëč÷íĺ ăŕëĺđčźĺ');
define('APPLY', 'Ďđčěĺíč čçěĺíĺ');
define('CREATE_NEW_GROUP', 'Íŕďđŕâč íîâó ăđóďó');
define('DEL_GROUPS', 'Îáđčřč čçŕáđŕíĺ ăđóďĺ');
define('CONFIRM_DEL', 'Óďîçîđĺĺ, ęŕäŕ îáđčřĺňĺ ăđóďó, ęîđčńíčöč ęîźč źîź ďđčďŕäŕźó áčĺ ďđĺěĺřňĺíč ó ăđóďó \'Registered\'!\\n\\nDo äŕ ćĺëčňĺ äŕ íŕńňŕâčňĺ?');
define('TITLE', 'Óđĺčâŕĺ ęîđčńíč÷ęčő ăđóďŕ');
define('APPROVAL_1', 'Îäîáđĺĺ źŕâíîă ńëŕŕ (1)');
define('APPROVAL_2', 'Îäîáđĺĺ ďđčâŕňíîă ńëŕŕ (2)');
define('NOTE1', '<b>(1)</b> Çŕ ńëŕĺ ó źŕâíč ŕëáóě ďîňđĺáíî źĺ îäîáđĺĺ ŕäěčíčńňđŕňîđŕ');
define('NOTE2', '<b>(2)</b> Çŕ ńëŕĺ ó ęîđčńíčęîâ ŕëáóě ďîňđĺáíî źĺ îäîáđĺĺ ŕäěčíčńňđŕňîđŕ');
define('NOTES', 'Íŕďîěĺíĺ');

// lang_index_php
define('WELCOME', 'Äîáđîäîřëč!');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Äŕ ëč ńňĺ ńčăóđíč äŕ ćĺëčňĺ äŕ ÎÁĐČŘĹŇĹ îâŕź ŕëáóě? \\nŃâĺ ńëčęĺ č ęîěĺíňŕđč ĺ ňŕęîĺ áčňč čçáđčńŕíč.');
define('DELETE', 'ÎÁĐČŘČ');
define('MODIFY', 'ŃÂÎŁŃŇÂŔ');
define('EDIT_PICS', 'ÓĐĹÄČ ŃËČĘĹ');

// lang_list_categories
define('HOME', 'Íŕńëîâíŕ');
define('STAT1', '<b>[pictures]</b> ńëčęŕ ó <b>[albums]</b> ŕëáóěŕ č <b>[cat]</b> ęŕňĺăîđčźŕ ńŕ <b>[comments]</b> ęîěĺíňŕđŕ ďđčęŕçŕíčő <b>[views]</b> ďóňŕ');
define('STAT2', '<b>[pictures]</b> ńëčęŕ ó <b>[albums]</b> ŕëáóěŕ ďđčęŕçŕíčő <b>[views]</b> ďóňŕ');
define('XX_S_GALLERY', 'Ăŕëĺđčźŕ %s');
define('STAT3', '<b>[pictures]</b> ńëčęŕ ó <b>[albums]</b> ŕëáóěŕ ńŕ <b>[comments]</b> ęîěĺíňŕđŕ ďđčęŕçŕíčő <b>[views]</b> ďóňŕ');

// lang_list_users
define('USER_LIST', 'Ëčńňŕ ęîđčńíčęŕ');
define('NO_USER_GAL', 'Íĺěŕ ęîđčńíč÷ęčő ăŕëĺđčźŕ');
define('N_ALBUMS', '%s ŕëáóě(ŕ)');
define('N_PICS', '%s ńëčęŕ(ĺ)');

// lang_list_albums
define('N_PICTURES', '%s ńëčęŕ');
define('LAST_ADDED', ', ďîńëĺäŕ äîäŕňŕ %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Ŕćóđčđŕź ŕëáóěĺ %s');
define('GENERAL_SETTINGS', 'Îďřňŕ ďîäĺřŕâŕŕ');
define('ALB_TITLE', 'Íŕçčâ ŕëáóěŕ');
define('ALB_CAT', 'Ęŕňĺăîđčźŕ ŕëáóěŕ');
define('ALB_DESC', 'Îďčń ŕëáóěŕ');
define('ALB_THUMB', 'ěŕđęčöŕ ŕëáóěŕ');
define('ALB_PERM', 'Äîçâîëĺ çŕ îâŕź ŕëáóě');
define('CAN_VIEW', 'Ŕëáóě ěîăó äŕ âčäĺ');
define('CAN_UPLOAD', 'Ďîńĺňčîöč ěîăó äŕ řŕó ńëčęĺ');
define('CAN_POST_COMMENTS', 'Ďîńĺňčîöč ěîăó äŕ äŕźó ęîěĺíňŕđĺ');
define('CAN_RATE', 'Ďîńĺňčîöč ěîăó äŕ îöĺóźó ńëčęĺ');
define('USER_GAL', 'Ęîđčńíč÷ęŕ ăŕëĺđčźŕ');
define('NO_CAT', '* Íĺěŕ ęŕňĺăîđčźĺ *');
define('ALB_EMPTY', 'Ŕëáóě źĺ ďđŕçŕí');
define('LAST_UPLOADED', 'Ďîńëĺäĺ ďîńëŕňč');
define('PUBLIC_ALB', 'Ńâč (źŕâíč ŕëáóě)');
define('ME_ONLY', 'Ńŕěî źŕ');
define('OWNER_ONLY', 'Ńŕěî âëŕńíčę ŕëáóěŕ (%s)');
define('GROUPP_ONLY', '×ëŕíîâč ăđóďĺ \'%s\'');
define('ERR_NO_ALB_TO_MODIFY', 'Ó áŕçč íĺěŕ ŕëáóěŕ ęîźč ěîćĺňĺ äŕ ěĺŕňĺ.');
define('UPDATE', 'Ŕćóđčđŕź ŕëáóě');

// lang_rate_pic_php
define('ALREADY_RATED', 'Ćŕî ěč źĺ, ŕëč âĺ ńňĺ îöĺíčëč îâó ńëčęó');
define('RATE_OK', 'Âŕř ăëŕń źĺ ďđčőâŕĺí');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'Ěŕäŕ ĺ ŕäěčíčńňđŕňîđč sajta {SITE_NAME} ďîęóřŕňč äŕ óęëîíĺ ńâŕęč îáźĺęňčâíî ńóěčâ ěŕňĺđčźŕë ó řňî ęđŕĺě đîęó, íĺěîăóĺ źĺ ďđĺăëĺäŕňč ńâŕęč ďđčëîă. Çáîă ňîăŕ Âč ďđčőâŕňŕňĺ äŕ ńâŕęč ďđčëîă íŕ îâîě ńŕźňó čçđŕćŕâŕ ďîăëĺäĺ č ěčřĺŕ ĺăîâčő ŕóňîđŕ, ŕ íĺ ŕäěčíčńňđŕňîđŕ čëč âĺáěŕńňĺđŕ (îńčě ďđčëîăŕ ęîźĺ îíč ńŕěč íŕ÷číĺ), ňĺ ńňîăŕ îíč íĺĺ áčňč çŕ čő îäăîâîđíč.<br />
<br />
Ňŕęîĺ, Âč ďđčőâŕňŕňĺ äŕ íĺĺňĺ ńëŕňč óâđĺäčâ, îďńĺí, âóëăŕđŕí, ęëĺâĺňíč÷ęč, ďđĺňĺč, ńĺęńóŕëíî îđźĺíňčńŕí, čëč áčëî ęŕęŕâ äđóăč ěŕňĺđčźŕë ęîźč źĺ ó ńóďđîňíîńňč ńŕ ďđčěĺčâčě çŕęîíčěŕ. Ńŕăëŕńíč ńňĺ äŕ âĺáěŕńňĺđč, ŕäěčíčńňđŕňîđč č ěîäĺđŕňîđč ńŕźňŕ {SITE_NAME} čěŕźó ďđŕâî äŕ óęëîíĺ čëč čçěĺíĺ áčëî ęîźč ńŕäđćŕź ó áčëî ęîě ňđĺíóňęó ęŕäŕ ňî íŕó çŕ ńőîäíî. Ęŕî ęîđčńíčę, ńUăëŕńíč ńňĺ ńŕ ňčěĺ äŕ ńĺ číôîđěŕöčźĺ ęîźĺ ńňĺ ďđĺňőîäíî óíĺëč ěîăó ńŕ÷óâŕňč ó áŕçč ďîäŕňŕęŕ. Čŕęî îâĺ číôîđěŕöčźĺ íĺĺ áčňč äŕâŕíĺ íŕ óâčä áčëî ęîźîź ňđĺîź ńňđŕíč áĺç âŕřĺă îäîáđĺŕ, âĺáěŕńňĺđč č ŕäěčíčńňđŕňîđč íčńó îäăîâîđíč çŕ áčëî ęîźč ďîęóřŕź őŕęĺđčńŕŕ ęîźč ěîćĺ äîâĺńňč äî óăđîćŕâŕŕ ďîäŕňŕęŕ.<br />
<br />
Îâŕź ńŕźň ęîđčńňč ęîëŕ÷čĺ (cookies) äŕ áč ńŕ÷óâŕî ďîäŕňęĺ íŕ âŕřĺě đŕ÷óíŕđó. Ňč ęîëŕ÷čč ńó ňó ńŕěî đŕäč âŕřĺă ďđčźŕňíčźĺă čńęóńňâŕ ńŕ îâčě ńŕźňîě. Ŕäđĺńŕ ĺ-ďîřňĺ ęîźó ńňĺ äŕëč áčĺ ęîđčřĺíŕ ńŕěî çŕ ďđîâĺđó âŕřčő äĺňŕŕ čç đĺăčńňđŕöčźĺ č ńëŕĺ ëîçčíęĺ.<br />
<br />
Ęëčęîě íŕ äóăěĺ 'Ńŕăëŕńŕí ńŕě' čńďîä Âč ńĺ ńëŕćĺňĺ ńŕ îâčě íŕâĺäĺíčě óńëîâčěŕ.');

// lang_register_php
define('PAGE_TITLE', 'Đĺăčńňđŕöčźŕ ęîđčńíčęŕ');
define('TERM_COND', 'Óńëîâč č ďđŕâčëŕ');
define('I_AGREE', 'Ńŕăëŕńŕí ńŕě');
define('SUBMIT', 'Ďîřŕč đĺăčńňđŕöčźó');
define('ERR_USER_EXISTS', 'Ęîđčńíč÷ęî čěĺ ęîźĺ ńňĺ čçŕáđŕëč âĺ ďîńňîźč, ěîëčěî îäŕáĺđčňĺ íîâî');
define('ERR_PASSWORD_MISMATCH', 'Ëîçčíęĺ ńĺ íĺ ďîäóäŕđŕźó, ěîëčěî óíĺńčňĺ čő ďîíîâî');
define('ERR_UNAME_SHORT', 'Ęîđčńíč÷ęî čěĺ ěîđŕ áčňč äóćčíĺ áŕđ 2 ńëîâŕ');
define('ERR_PASSWORD_SHORT', 'Ëîçčíęŕ ěîđŕ áčňč äóćčíĺ áŕđ 2 çíŕęŕ');
define('ERR_UNAME_PASS_DIFF', 'Ęîđčńíč÷ęî čěĺ č ëîçčíęŕ ěîđŕźó ńĺ đŕçëčęîâŕňč');
define('ERR_INVALID_EMAIL', 'Ŕäđĺńŕ ĺ-ďîřňĺ źĺ íĺčńďđŕâíŕ');
define('ERR_DUPLICATE_EMAIL', 'Íĺęî ńĺ âĺ ďđčźŕâčî ńŕ ŕäđĺńîě ęîźó ńňĺ óíĺëč');
define('ENTER_INFO', 'Óíĺńčňĺ ďîäŕňęĺ çŕ đĺăčńňđŕöčźó');
define('REQUIRED_INFO', 'Îáŕâĺçíč ďîäŕöč');
define('OPTIONAL_INFO', 'Îďöčîíč ďîäŕöč');
define('USERNAME', 'Ęîđčńíč÷ęî čěĺ');
define('PASSWORD', 'Ëîçčíęŕ');
define('PASSWORD_AGAIN', 'Ďîíîâč ëîçčíęó');
define('EMAIL', 'Ĺ-ŕäđĺńŕ');
define('LOCATION', 'Ěĺńňî');
define('INTERESTS', 'Číňĺđĺńîâŕŕ');
define('WEBSITE', 'Ëč÷íč ńŕźň');
define('OCCUPATION', 'Çŕíčěŕĺ');
define('ERROR', 'ĂĐĹŘĘŔ');
define('CONFIRM_EMAIL_SUBJECT', '%s - Đĺăčńňđŕöčźŕ ďîňâđĺíŕ');
define('INFORMATION', 'Číôîđěŕöčźĺ');
define('FAILED_SENDING_EMAIL', 'Ďîđóęŕ ńŕ ďîňâđäîě đĺăčńňđŕöčźĺ íčźĺ ěîăëŕ áčňč ďîńëŕňŕ!');
define('THANK_YOU', 'Őâŕëŕ řňî ńňĺ ńĺ đĺăčńňđîâŕëč.<br /><br />Ďîđóęŕ ńŕ óďóňńňâîě ęŕęî äŕ ŕęňčâčđŕňĺ ńâîź íŕëîă źĺ ďîńëŕňŕ íŕ ŕäđĺńó ĺ-ďîřňĺ ęîźó ńňĺ äŕëč.');
define('ACCT_CREATED', 'Âŕř íŕëîă źĺ íŕďđŕâĺí č ěîćĺňĺ ńĺ ďđčźŕâčňč ńŕ ńâîźčě ęîđčńíč÷ęčě čěĺíîě č ëîçčíęîě');
define('ACCT_ACTIVE', 'Âŕř íŕëîă źĺ ńŕäŕ ŕęňčâŕí č ěîćĺňĺ ńĺ ďđčźŕâčňč ńŕ ńâîźčě ęîđčńíč÷ęčě čěĺíîě č ëîçčíęîě');
define('ACCT_ALREADY_ACT', 'Âŕř íŕëîă źĺ âĺ ŕęňčâŕí!!');
define('ACCT_ACT_FAILED', 'Îâŕź íŕëîă ńĺ íĺ ěîćĺ ŕęňčâčđŕňč!');
define('ERR_UNK_USER', 'Îäŕáđŕíč ęîđčńíčę íĺ ďîńňîźč!');
define('X_S_PROFILE', 'Ďđîôčë ęîđčńíčęŕ %s');
define('GROUP', 'Ăđóďŕ');
define('REG_DATE', 'Đĺăčńňđîâŕí');
define('DISK_USAGE', 'Čńęîđčřĺí ďđîńňîđ');
define('CHANGE_PASS', 'Ďđîěĺíč ěîźó ëîçčíęó');
define('CURRENT_PASS', 'Ňđĺíóňíŕ ëîçčíęŕ');
define('NEW_PASS', 'Íîâŕ ëîçčíęŕ');
define('NEW_PASS_AGAIN', 'Ďîíîâč ëîçčíęó');
define('ERR_CURR_PASS', 'Ňđĺíóňíŕ ëîçčíęŕ źĺ íĺňŕ÷íŕ');
define('APPLY_MODIF', 'Ďđčěĺíč čçěĺíĺ');
define('UPDATE_SUCCESS', 'Âŕř ďđîôčë źĺ čçěĺĺí');
define('PASS_CHG_SUCCESS', 'Âŕřŕ ëîçčíęŕ źĺ ďđîěĺĺíŕ');
define('PASS_CHG_ERROR', 'Âŕřŕ ëîçčíęŕ íčźĺ ďđîěĺĺíŕ');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Őâŕëŕ Bŕě řňî ńňĺ ńĺ đĺăčńňđîâŕëč íŕ {SITE_NAME}

Âŕřĺ ęîđčńíč÷ęî čěĺ źĺ: "{USER_NAME}"
Âŕřŕ ëîçčíęŕ źĺ:        "{PASSWORD}"

Äŕ áčńňĺ ŕęňčâčđŕëč ńâîź íŕëîă, ęëčęíčňĺ íŕ äîč ëčíę čëč ăŕ ďđĺęîďčđŕźňĺ
ó ńâîź číňĺđíĺň ďđĺňđŕćčâŕ÷.

{ACT_LINK}

Ńđäŕ÷íî âŕřč,

Óďđŕâŕ ńŕźňŕ {SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', 'Ďđĺăëĺäŕź ęîěĺíňŕđĺ');
define('NO_COMMENT', 'Íĺěŕ ęîěĺíňŕ çŕ ďđčęŕçčâŕĺ');
define('N_COMM_DEL', '%s ęîěĺíňŕđŕ îáđčńŕíî');
define('N_COMM_DISP', 'Áđîź ďđčęŕçŕíčő ęîěĺíňŕđŕ');
define('SEE_PREV', 'Âčäč ďđĺňőîäíĺ');
define('SEE_NEXT', 'Âčäč ńëĺäĺĺ');
define('DEL_COMM', 'Îáđčřč čçŕáđŕíĺ ęîěĺíňŕđĺ');

// lang_search_php
define('SEARCH', 'Ďđĺňđŕćč ęîëĺęöčźó ńëčęŕ');

// lang_search_new_php
define('PAGE_TITLE', 'Ňđŕćĺĺ íîâčő ńëčęŕ');
define('SELECT_DIR', 'Îäŕáĺđč äčđĺęňîđčźóě');
define('SELECT_DIR_MSG', 'Îâŕ ôóíęöčźŕ îěîăóŕâŕ äîäŕâŕĺ ăđóďĺ ńëčęŕ ęîźó ńňĺ ďóňĺě ÔŇĎ-ŕ ďîńëŕëč íŕ ńâîź ńĺđâĺđ.<br /><br />Îäŕáĺđčňĺ äčđĺęňîđčźóě ó ęîźč ńňĺ ďîńëŕëč ńëčęĺ');
define('NO_PIC_TO_ADD', 'Íĺěŕ ńëčęŕ çŕ äîäŕâŕĺ');
define('NEED_ONE_ALBUM', 'Ěîđŕňĺ čěŕňč áŕđ źĺäŕí ŕëáóě äŕ áčńňĺ ęîđčńňčëč îâó ôóíęöčźó');
define('WARNING', 'óďîçîđĺĺ');
define('CHANGE_PERM', 'ńęđčďň íĺ ěîćĺ äŕ ďčřĺ ó îâŕź äčđĺęňđčźóě, ěîđŕňĺ ěó ďđîěĺíčňč ěîä ó 755 čëč 777 ďđĺ äîäŕâŕŕ íîâčő ńëčęŕ!');
define('TARGET_ALBUM', '<b>Äîäŕź ńëčęĺ čç &quot;</b>%s<b>&quot; ó </b>%s');
define('FOLDER', 'Ôîëäĺđ');
define('IMAGE', 'Ńëčęŕ');
define('ALBUM', 'Ŕëáóě');
define('RESULT', 'Đĺçóëňŕň');
define('DIR_RO', 'Íčźĺ ěîăó óďčń. ');
define('DIR_CANT_READ', 'Íčźĺ ěîăóĺ ÷čňŕĺ. ');
define('INSERT', 'Äîäŕâŕĺ íîâčő ńëčęŕ ó ăŕëĺđčźó');
define('LIST_NEW_PIC', 'Ëčńňŕ íîâčő ńëčęŕ');
define('INSERT_SELECTED', 'Óáŕöč îäŕáđŕíĺ ńëčęĺ');
define('NO_PIC_FOUND', 'Íîâĺ ńëčęĺ íčńó ďđîíŕĺíĺ');
define('BE_PATIENT', 'Ěîëčěî áóäčňĺ ńňđďčâč, ńęđčďňó źĺ ďîňđĺáíî íĺęî âđĺěĺ äŕ äîäŕ ńëčęĺ');
define('NOTES', '<ul><li><b>OK</b> : çíŕ÷č äŕ źĺ ńëčęŕ óńďĺříî äîäŕňŕ<li><b>DP</b> : çíŕ÷č äŕ źĺ ńëčęŕ äóďëčęŕň č äŕ âĺ ďîńňîźč ó áŕçč<li><b>PB</b> : çíŕ÷č äŕ źĺ ńëčęŕ íčźĺ äîäŕňŕ, ďđîâĺđčňĺ ďîäĺřŕâŕŕ č ďđŕâŕ ďđčńňóďŕ äčđĺęňîđčźóěčěŕ ăäĺ ńĺ ńëčęĺ íŕëŕçĺ<li>Ŕęî ńĺ çíŕöč OK, DP, PB íĺ ďîźŕâĺ, ęëčęíčňĺ íŕ ďóęíóňó ńëčęó äŕ áčńňĺ âčäĺëč ďîđóęó î ăđĺřöč ęîźč âŕě źĺ PHP ďđčźŕâčî<li>Ŕęî âđĺěĺ ó âŕřĺě ďđĺăëĺäŕ÷ó čńňĺęíĺ, ďđčňčńíčňĺ äóăěĺ \\\"îńâĺćč\\\"</ul>');

// lang_upload_php
define('TITLE', 'Ďîřŕč ńëčęó');
define('MAX_FSIZE', 'Ěŕęńčěŕëíî äčçâîĺíŕ âĺëč÷číŕ ôŕźëŕ źĺ %s KB');
define('ALBUM', 'Ŕëáóě');
define('PICTURE', 'Ńëčęŕ');
define('PIC_TITLE', 'Íŕçčâ ńëčęĺ');
define('DESCRIPTION', 'Îďčń ńëčęĺ');
define('KEYWORDS', 'Ęó÷íĺ đĺ÷č (îäâîźč đŕçěŕęîě)');
define('ERR_NO_ALB_UPLOADABLES', 'Ćŕî ěč źĺ, ŕëč íĺěŕ ŕëáóěŕ ó ęîźč âŕě źĺ äîçâîĺíî äŕ řŕĺňĺ ńëčęĺ');

// lang_usermgr_php
define('TITLE', 'Óđĺčâŕĺ ęîđčńíčęŕ');
define('NAME_A', 'čěĺíó óçëŕçíî');
define('NAME_D', 'čěĺíó ńčëŕçíî');
define('GROUP_A', 'ăđóďč óçëŕçíî');
define('GROUP_D', 'ăđóďč ńčëŕçíî');
define('REG_A', 'äŕňóěó đĺă. óçëŕçíî');
define('REG_D', 'äŕňóěó đĺă. ńčëŕçíî');
define('PIC_A', 'áđîźó ńëčęŕ óçëŕçíî');
define('PIC_D', 'áđîźó ńëčęŕ ńčëŕçíî');
define('DISKU_A', 'ďđîńňîđó óçëŕçíî');
define('DISKU_D', 'ďđîńňîđó ńčëŕçíî');
define('SORT_BY', 'Ńîđňčđŕź ęîđčńíčęĺ ďî');
define('ERR_NO_USERS', 'Ňŕáĺëŕ ęîđčńíčęŕ źĺ ďđŕçíŕ!');
define('ERR_EDIT_SELF', 'Íĺ ěîćĺňĺ óđĺčâŕňč ńîďńňâĺíč ďđîôčë, ęîđčńňčňĺ ëčíę \'Ěîź ďđîôčë\' çŕ ňî');
define('EDIT', 'ČÇĚĹÍČ');
define('DELETE', 'ÎÁĐČŘČ');
define('NAME', 'Ęîđčńíč÷ęî čěĺ');
define('GROUP', 'Ăđóďŕ');
define('INACTIVE', 'Íĺŕęňčâŕí');
define('OPERATIONS', 'Îďĺđŕöčźĺ');
define('PICTURES', 'Ńëčęĺ');
define('DISK_SPACE', 'Čńęîđčřĺí ďđîńňîđ / ęâîňŕ');
define('REGISTERED_ON', 'Đĺăčńňđîâŕí');
define('U_USER_ON_P_PAGES', '%d ęîđčńíčęŕ íŕ %d ńňđŕíŕ');
define('CONFIRM_DEL', 'Äŕ ëč ńňĺ ńčăóđíč äŕ ćĺëčňĺ äŕ ÎÁĐČŘĹŇĹ îâîă ęîđčńíčęŕ? \\nŃâĺ ĺăîâĺ ńëčęĺ č ŕëáóěč áčĺ ňŕęîĺ îáđčńŕíč.');
define('MAIL', 'ĎÎŘŇŔ');
define('ERR_UNKNOWN_USER', 'Čçŕáđŕíč ęîđčńíčę íĺ ďîńňîźč!');
define('MODIFY_USER', 'Čçěĺíč ęîđčńíčęŕ');
define('NOTES', 'Íŕďîěĺíĺ');
define('NOTE_LIST', '<li>Ŕęî íĺ ćĺëčňĺ äŕ ďđîěĺíčňĺ ňđĺíóňíó ëîçčíęó, ďîĺ \"ëîçčíęŕ\" îńňŕâčňĺ ďđŕçíî');
define('PASSWORD', 'Ëîçčíęŕ');
define('USER_ACTIVE', 'Ęîđčńíčę źĺ ŕęňčâŕí');
define('USER_GROUP', 'Ęîđčńíč÷ęŕ ăđóďŕ');
define('USER_EMAIL', 'Ŕäđĺńŕ ĺ-ďîřňĺ');
define('USER_WEB_SITE', 'Ŕäđĺńŕ ęîđčńíčęîâîă ńŕźňŕ');
define('CREATE_NEW_USER', 'Äîäŕź íîâîă ęîđčńíčęŕ');
define('USER_LOCATION', 'Ëîęŕöčźŕ ęîđčńíčęŕ');
define('USER_INTERESTS', 'Číňĺđĺńîâŕŕ ęîđčńíčęŕ');
define('USER_OCCUPATION', 'Çŕíčěŕĺ ęîđčńíčęŕ');

// lang_util_php
define('TITLE', 'Ďđîěĺíŕ äčěĺíçčźŕ ńëčęĺ');
define('WHAT_IT_DOES', 'Řňŕ đŕäč');
define('WHAT_UPDATE_TITLES', 'Ŕćóđčđŕ íŕńëîâĺ ďî čěĺíó ôŕźëŕ');
define('WHAT_DELETE_TITLE', 'Áđčřĺ íŕńëîâĺ');
define('WHAT_REBUILD', 'Ďđŕâč ěŕđęčöĺ č ńëčęĺ ďđîěĺĺíčő äčěĺíçčźŕ');
define('WHAT_DELETE_ORIGINALS', 'Áđčřĺ îđčăčíŕëíĺ ńëčęĺ çŕěĺóźóč čő âĺđçčźŕěŕ ďđîěĺĺíĺ âĺëč÷číĺ');
define('FILE', 'Äŕňîňĺęŕ');
define('TITLE_SET_TO', 'íŕńëîâ ďîńňŕâč íŕ');
define('SUBMIT_FORM', 'čçâđřč');
define('UPDATED_SUCCESFULLY', 'óńďĺříî čçěĺĺíŕ');
define('ERROR_CREATE', 'ĂĐĹŘĘŔ ďđč ęđĺčđŕó');
define('CONTINUE', 'Îáđŕäč źîř ńëčęŕ');
define('MAIN_SUCCESS', 'Äŕňîňĺęŕ %s źĺ óńďĺříî čńęîđčřĺíŕ ęŕî ăëŕâíŕ ńëčęŕ');
define('ERROR_RENAME', 'Ăđĺřęŕ ďđč ďđĺčěĺíîâŕó %s ó %s');
define('ERROR_NOT_FOUND', 'Äŕňîňĺęŕ %s íčźĺ ďđîíŕĺíŕ');
define('BACK', 'íŕçŕä íŕ ăëŕâíó');
define('THUMBS_WAIT', 'Ŕćóđčđŕě ěŕđęčöĺ č/čëč čçěĺĺíĺ ńëčęĺ, ěîëčě ńŕ÷ĺęŕźňĺ...');
define('THUMBS_CONTINUE_WAIT', 'Íŕńňŕâŕě äŕ ŕćóđčđŕě ěŕđęčöĺ č/čëč ńëčęĺ čçěĺĺíĺ âĺëč÷číĺ...');
define('TITLES_WAIT', 'Ŕćóđčđŕě íŕńëîâĺ, ěîëčě ńŕ÷ĺęŕźňĺ...');
define('DELETE_WAIT', 'Áđčřĺě íŕńëîâĺ, ěîëčě ńŕ÷ĺęŕźňĺ...');
define('REPLACE_WAIT', 'Áđčřĺě îđčăčíŕëĺ č ěĺŕě čő ńŕ čçěĺĺíčě ńëčęŕěŕ, ěîëčě ńŕ÷ĺęŕźňĺ...');
define('INSTRUCTION', 'Ęđŕňęî óďóňńňâî');
define('INSTRUCTION_ACTION', 'Îäŕáĺđč ŕęöčźó');
define('INSTRUCTION_PARAMETER', 'Ďîäĺńč ďŕđŕěĺňđĺ');
define('INSTRUCTION_ALBUM', 'Îäŕáĺđč ŕëáóě');
define('INSTRUCTION_PRESS', 'Ďđčňčńíč \'%s\'');
define('UPDATE', 'Ŕćóđčđŕź ěŕđęčöĺ č/čëč čçěĺĺíĺ ńëčęĺ');
define('UPDATE_WHAT', 'Řňŕ ňđĺáŕ čçěĺíčňč');
define('UPDATE_THUMB', 'Ńŕěî ěŕđęčöĺ');
define('UPDATE_PIC', 'Ńŕěî ńëčęĺ čçěĺĺíĺ âĺëč÷číĺ');
define('UPDATE_BOTH', 'Č ěŕđęčöĺ č ńëčęĺ čçěĺĺíĺ âĺëč÷číĺ');
define('UPDATE_NUMBER', 'Áđîź îáđŕĺíčő ńëčęŕ ďî ęëčęó');
define('UPDATE_OPTION', '(Ďîęóřŕźňĺ äŕ ďîńňŕâčňĺ íŕ ěŕó âđĺäíîńň ŕęî âŕě âđĺěĺ čńňč÷ĺ)');
define('FILENAME_TITLE', 'Íŕçčâ äŕňîňĺęĺ &rArr; íŕçčâ ńëčęĺ');
define('FILENAME_HOW', 'Ęŕęî ňđĺáŕ čçěĺíčňč čěĺ äŕňîňĺęĺ');
define('FILENAME_REMOVE', 'Óęëîíč .jpg çŕâđřĺňŕę č çŕěĺíč _ (äîó öđňčöó) đŕçěŕęîě');
define('FILENAME_EURO', 'Ďđîěĺíč 2003_11_23_13_20_20.jpg ó 23/11/2003 13:20');
define('FILENAME_US', 'Ďđîěĺíč 2003_11_23_13_20_20.jpg ó 11/23/2003 13:20');
define('FILENAME_TIME', 'Ďđîěĺíč 2003_11_23_13_20_20.jpg ó 13:20');
define('DELETE', 'Îáđčřč íŕçčâĺ ńëčęŕ čëč îđčăčíŕëíĺ ńëčęĺ');
define('DELETE_TITLE', 'Îáđčřč íŕçčâĺ ńëčęŕ');
define('DELETE_ORIGINAL', 'Îáđčřč îđčăčíŕëíĺ ńëčęĺ');
define('DELETE_REPLACE', 'Áđčřĺ îđčăčíŕëíĺ ńëčęĺ č ěĺŕ čő ńëčęŕěŕ ďđîěĺĺíčő äčěĺíçčźŕ');
define('SELECT_ALBUM', 'Îäŕáĺđč ŕëáóě');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>