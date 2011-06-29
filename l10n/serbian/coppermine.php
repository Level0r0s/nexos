<?php
/*********************************************
   Coppermine 1.3.1 for CPG Dragonfly™
  ********************************************
   Port Copyright © 2004-2006 CPG-Nuke Dev Team
  http://dragonflycms.org
  ********************************************
   v1.1 (c) by Grégory Demar http://coppermine.sf.net/
   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.
  ********************************************
  $Source: /cvs/l10n/serbian/coppermine.php,v $
  $Revision: 9.4 $
  $Author: nanocaiordo $
  $Date: 2006/02/12 14:44:14 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Views');//new in 1.2.2nuke
define('PIC_VOTES', 'Votes');//new in 1.2.2nuke
define('PIC_COMMENTS', 'Comments');//new in 1.2.2nuke

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Serbian');
define('LANG_NAME_NATIVE', 'Ńđďńęč');
define('LANG_COUNTRY_CODE', 'sr');
define('TRANS_NAME', 'Mihailo Stefanovic');
define('TRANS_EMAIL', 'prevodi@mikis.org');
define('TRANS_WEBSITE', 'http://mikis.org/');
define('TRANS_DATE', '2004-01-03');
define('CHARSET', 'UTF-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Äŕ');
define('NO', 'Íĺ');
// some common strings
define('BACK', 'ÍŔÇŔÄ');
define('CONTINU', 'ÄŔĹ');
define('INFO', 'Číôîđěŕöčźĺ');
//define('ERROR', 'Ăđĺřęŕ');
define('ALBUM_DATE_FMT', '%d.%m.%Y');
define('LASTCOM_DATE_FMT', '%d.%m.%y @ %H:%M');
define('LASTUP_DATE_FMT', '%d.%m.%Y');
define('REGISTER_DATE_FMT', '%d.%m.%Y');
define('LASTHIT_DATE_FMT', '%d. %B %Y ó %H:%M');
define('COMMENT_DATE_FMT', '%d. %B %Y ó %H:%M');

// lang_meta_album_names
define('RANDOM', 'Ďî ńëó÷ŕźíîě čçáîđó');
define('LASTUP', 'Íîâî äîäŕňî');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Ďîńëĺäč ŕćóđčđŕí ŕëáóě');
define('LASTCOM', 'Íîâč ęîěĺíňŕđč');
define('LASTCOMBY', 'My Last comments');
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
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');
define('NO_IMG_TO_APPROVE', 'No images to approve');

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
define('SEARCH_TITLE', 'Search Photo Collection');
define('SEARCH_LNK', 'Ďđĺňđŕăŕ');
define('FAV_TITLE', 'My Favorites');
define('FAV_LNK', 'Ěîźĺ îěčĺíĺ');
define('HELP_TITLE', 'HELP');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

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
//define('MY_PROF_LNK', 'Ěîź ďđîôčë');

// lang_cat_list
define('CATEGORY', 'Ęŕňĺăîđčźŕ');
define('ALBUMS', 'Ŕëáóěč');
//define('PICTURES', 'Ńëčęĺ');

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
define('SORT_RA', 'Sort by rating ascending');
define('SORT_RD', 'Sort by rating descending');
define('THUMB_RATING', 'RATING');
define('SORT_TITLE', 'Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Âđŕňč ńĺ íŕ ńňđŕíó ńŕ ěŕđęčöŕěŕ');
define('PIC_INFO_TITLE', 'Ďđčęŕćč/ńŕęđčź číôîđěŕöčźĺ î ńëčöč');
define('SLIDESHOW_TITLE', 'Ńëŕźä řîó');
define('SLIDESHOW_DISABLED', 'Slideshow is disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'Ďîřŕč îâó ńëčęó ęŕî ĺ-÷ĺńňčňęó');
define('ECARD_DISABLED', 'Ĺ-÷ĺńňčęĺ ńó čńęó÷ĺíĺ');
define('ECARD_DISABLED_MSG', 'Íčźĺ âŕě äîçâîĺíî äŕ řŕĺňĺ ĺ-÷ĺńňčňęĺ');
define('PREV_TITLE', 'Âčäč ďđĺňőîäíó ńëčęó');
define('NEXT_TITLE', 'Âčäč ńëĺäĺó ńëčęó');
define('PIC_POS', 'ŃËČĘŔ %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

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
//define('INFO', 'Information');
//define('ERROR', 'Error');
define('_CRITICAL_ERROR', 'Ęđčňč÷íŕ ăđĺřęŕ');
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
define('CONFIRM_DELETE_CAT', 'Äŕ ëč ńňĺ ńčăóđíč äŕ ćĺëčňĺ äŕ ÎÁĐČŘĹŇĹ îâó ęŕňĺăîđčźó');
//define('CATEGORY', 'Ęŕňĺăîđčźŕ');
define('OPERATIONS', 'Îďĺđŕöčźĺ');
define('MOVE_INTO', 'Ďđĺěĺńňč ó ');
define('UPDATE_CREATE', 'Čçěĺíč / íŕďđŕâč ęŕňĺăîđčźó');
define('PARENT_CAT', 'Íŕäđĺĺíŕ ęŕňĺăîđčźŕ');
define('CAT_TITLE', 'Íŕçčâ ęŕňĺăîđčźĺ');
define('CAT_DESC', 'Îďčń ęŕňĺăîđčźĺ');

// lang_config_php
define('CONFIG_TITLE', 'Ďîäĺřŕâŕŕ');
define('RESTORE_CFG', 'Âđŕňč ďîäđŕçóěĺâŕíŕ ďîäĺřŕâŕŕ');
define('SAVE_CFG', 'Ńŕ÷óâŕź íîâŕ ďîäĺřŕâŕŕ');
define('NOTES', 'Íŕďîěĺíĺ');
//define('INFO', 'Číôîđěŕöčźĺ');
define('UPD_SUCCESS', 'Coppermine ďîäĺřŕâŕŕ ńó ńŕ÷óâŕíŕ');
define('RESTORE_SUCCESS', 'Âđŕĺíŕ ńó ďîäđŕçóěĺâŕíŕ ďîäĺřŕâŕŕ Coppermine-ŕ');
define('NAME_A', 'Ďî čěĺíó óçëŕçíî');
define('NAME_D', 'Ďî čěĺíó ńčëŕçíî');
define('TITLE_A', 'Ďî íŕçčâó óçëŕçíî');
define('TITLE_D', 'Ďî íŕçčâó ńčëŕçíî');
define('DATE_A', 'Ďî äŕňóěó óçëŕçíî');
define('DATE_D', 'Ďî čěĺíó ńčëŕçíî');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Ěŕęń. îäíîń');
define('TH_HT', 'Âčńčíŕ');
define('TH_WD', 'Řčđčíŕ');


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
//define('INFO', 'Číôîđěŕöčźĺ');
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
//define('COMMENT', 'ęîěĺíňŕđ');
define('IM_IN_ALB', 'ńëčęŕ ó ŕëáóěó');
define('ALB_DEL_SUCCESS', 'Ŕëáóě \'%s\' źĺ îáđčńŕí');
define('ALB_MGR', 'Óđĺčâŕĺ ŕëáóěŕ');
define('ERR_INVALID_DATA', 'Íĺčńďđŕâíč ďîäŕöč ďđčěĺíč ó \'%s\'');
define('CREATE_ALB', 'Ďđŕâčě ŕëáóě \'%s\'');
define('UPDATE_ALB', 'Ŕćóđčđŕě ŕëáóě \'%s\' ńŕ íŕçčâîě \'%s\' č číäĺęńîě \'%s\'');
define('DEL_PIC', 'Îáđčřč ńëčęó');
define('DEL_ALB', 'Îáđčřč ŕëáóě');
define('DEL_USER', 'Îáđčřč ęîđčńíčęŕ');
//define('ERR_UNKNOWN_USER', 'Čçŕáđŕíč ęîđčńíčę íĺ ďîńňîźč!');
define('COMMENT_DELETED', 'Ęîěĺíňŕđ źĺ îáđčńŕí');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'Äŕ ëč ńňĺ ńčăóđíč äŕ ćĺëčňĺ äŕ ÎÁĐČŘĹŇĹ îâó ńëčęó? \\nĘîěĺíňŕđč ĺ ňŕęîĺ áčňč čçáđčńŕíč.');
define('DEL_THIS_PIC', 'ÎÁĐČŘČ ÎÂÓ ŃËČĘÓ');
define('SIZE', '%s x %s ňŕ÷ŕęŕ');
define('VIEWS', '%s ďóňŕ');
define('SLIDESHOW', 'Ńëŕźä řîó');
define('STOP_SLIDESHOW', 'ÇŔÓŃŇŔÂČ ŃËŔŁÄ ŘÎÓ');
define('VIEW_FS', 'Ęëčęíč çŕ ńëčęó ó ďóíîź âĺëč÷číč');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('PIC_INF_TITLE', 'Číôîđěŕöčźĺ î ńëčöč');
define('PIC_INF_FILENAME', 'Íŕçčâ äŕňîňĺęĺ');
define('ALBUM NAME', 'Íŕçčâ ŕëáóěŕ');
define('PIC_INFO_RATING', 'Îöĺíŕ (%s ăëŕńîâŕ)');
define('KEYWORDS', 'Ęó÷íĺ đĺ÷č');
define('PIC_INF_FILE_SIZE', 'Âĺëč÷číŕ ôŕźëŕ');
define('PIC_INF_DIMENSIONS', 'Äčěĺíçčźĺ');
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
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');
define('REMOVEFAV', 'Removed from Favorites Album');
define('ADDEDTOFAV', 'Added to Favorites Album');

// lang_display_comments
define('OK', 'Ó ĐĹÄÓ');
define('COM_EDIT_TITLE', 'Čçěĺíč îâŕź ęîěĺíňŕđ');
define('CONFIRM_DELETE_COM', 'Äŕ ëč ńňĺ ńčăóđíč äŕ ćĺëčňĺ äŕ îáđčřĺňĺ îâŕź ęîěĺíňŕđ?');
define('ADD_YOUR_COMMENT', 'Äîäŕźňĺ ńâîź ęîěĺíňŕđ');
define('COM_NAME', 'Čěĺ');
//define('COMMENT', 'Ęîěĺíňŕđ');
define('YOUR_NAME', 'Ŕíîí');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Ęëčęíčňĺ íŕ ńëčęó äŕ çŕňâîđčňĺ îâŕź ďđîçîđ');

// lang_ecard_php
define('E_TITLE', 'Ďîřŕč ĺ-÷ĺńňčňęó');
define('INVALID_EMAIL', '<b>Óďîçîđĺĺ</b> : íĺčńďđŕâíŕ ŕäđĺńŕ ĺ-ďîřňĺ!');
define('E_ECARD_TITLE', 'Ĺ-÷ĺńňčňęŕ îä %s çŕ Âŕń');
define('VIEW_ECARD', 'Ŕęî ńĺ ÷ĺńňčňęŕ íĺ ďđčęŕćĺ čńďđŕâíî, ęëčęíčňĺ íŕ îâŕź ëčíę');
define('VIEW_MORE_PICS', 'Ęëčęíčňĺ îâäĺ äŕ âčäčňĺ źîř ńëčęŕ!');
define('SEND_SUCCESS', 'Âŕřŕ ĺ-÷ĺńňčňęŕ źĺ ďîńëŕňŕ');
define('SEND_FAILED', 'Ćŕî íŕě źĺ ŕëč ńĺđâĺđ íĺ ěîćĺ äŕ ďîřŕĺ âŕřó ĺ-÷ĺńňčňęó...');
define('FROM', 'Îä');
define('_YOUR_NAME', 'Âŕřĺ čěĺ');
define('YOUR_EMAIL', 'Âŕřŕ ĺ-ŕäđĺńŕ');
define('TO', 'Çŕ');
define('RCPT_NAME', 'Čěĺ ďđčěŕîöŕ');
define('RCPT_EMAIL', 'Ĺ-ŕäđĺńŕ ďđčěŕîöŕ');
define('GREETINGS', 'Ďîçäđŕâ');
define('MESSAGE', 'Ďîđóęŕ');
define('ECARD_LINK_CORRUPT', 'Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser'); //NEW

// lang_editpics_php
define('PIC_INFO', 'Picture&nbsp;info');
define('ALBUM', 'Ŕëáóě');
define('EDIT_TITLE', 'Íŕçčâ');
define('DESC', 'Îďčń');
//define('KEYWORDS', 'Ęó÷íĺ đĺ÷č');
define('PIC_INFO_STR', '%s &times; %s - %s KB - %s ďđčęŕçŕ - %s ăëŕńîâŕ');
define('APPROVE', 'Îäîáđč ńëčęó');
define('POSTPONE_APP', 'Îäëîćč îäîáđŕâŕĺ');
//define('DEL_PIC', 'Îáđčřč ńëčęó');
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
//define('APPLY', 'Ďđčěĺíč čçěĺíĺ');
define('CREATE_NEW_GROUP', 'Íŕďđŕâč íîâó ăđóďó');
define('DEL_GROUPS', 'Îáđčřč čçŕáđŕíĺ ăđóďĺ');
define('CONFIRM_DEL', 'Óďîçîđĺĺ, ęŕäŕ îáđčřĺňĺ ăđóďó, ęîđčńíčöč ęîźč źîź ďđčďŕäŕźó áčĺ ďđĺěĺřňĺíč ó ăđóďó \'Registered\'!\\n\\nDo äŕ ćĺëčňĺ äŕ íŕńňŕâčňĺ?');
define('GROUP_TITLE', 'Óđĺčâŕĺ ęîđčńíč÷ęčő ăđóďŕ');
define('APPROVAL_1', 'Îäîáđĺĺ źŕâíîă ńëŕŕ (1)');
define('APPROVAL_2', 'Îäîáđĺĺ ďđčâŕňíîă ńëŕŕ (2)');
define('NOTE1', '<b>(1)</b> Çŕ ńëŕĺ ó źŕâíč ŕëáóě ďîňđĺáíî źĺ îäîáđĺĺ ŕäěčíčńňđŕňîđŕ');
define('NOTE2', '<b>(2)</b> Çŕ ńëŕĺ ó ęîđčńíčęîâ ŕëáóě ďîňđĺáíî źĺ îäîáđĺĺ ŕäěčíčńňđŕňîđŕ');
//define('NOTES', 'Íŕďîěĺíĺ');

// lang_index_php
define('WELCOME', 'Äîáđîäîřëč!');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'Äŕ ëč ńňĺ ńčăóđíč äŕ ćĺëčňĺ äŕ ÎÁĐČŘĹŇĹ îâŕź ŕëáóě? \\nŃâĺ ńëčęĺ č ęîěĺíňŕđč ĺ ňŕęîĺ áčňč čçáđčńŕíč.');
//define('DELETE', 'ÎÁĐČŘČ');
define('MODIFY', 'ŃÂÎŁŃŇÂŔ');
//define('EDIT_PICS', 'ÓĐĹÄČ ŃËČĘĹ');

// lang_list_categories
define('HOME', _HOME);
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
define('MOD_CAN_UPLOAD', 'Ďîńĺňčîöč ěîăó äŕ řŕó ńëčęĺ');
define('CAN_POST_COMMENTS', 'Ďîńĺňčîöč ěîăó äŕ äŕźó ęîěĺíňŕđĺ');
define('MOD_CAN_RATE', 'Ďîńĺňčîöč ěîăó äŕ îöĺóźó ńëčęĺ');
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

// lang_register_php
define('USERNAME', 'Ęîđčńíč÷ęî čěĺ');
define('X_S_PROFILE', 'Ďđîôčë ęîđčńíčęŕ %s');
define('GROUP', 'Ăđóďŕ');
define('DISK_USAGE', 'Čńęîđčřĺí ďđîńňîđ');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Ďđĺăëĺäŕź ęîěĺíňŕđĺ');
define('NO_COMMENT', 'Íĺěŕ ęîěĺíňŕ çŕ ďđčęŕçčâŕĺ');
define('N_COMM_DEL', '%s ęîěĺíňŕđŕ îáđčńŕíî');
define('N_COMM_DISP', 'Áđîź ďđčęŕçŕíčő ęîěĺíňŕđŕ');
define('R_SEE_PREV', 'Âčäč ďđĺňőîäíĺ');
define('R_SEE_NEXT', 'Âčäč ńëĺäĺĺ');
define('R_DEL_COMM', 'Îáđčřč čçŕáđŕíĺ ęîěĺíňŕđĺ');

// lang_search_php
define('S_SEARCH', 'Ďđĺňđŕćč ęîëĺęöčźó ńëčęŕ');

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
//define('ALBUM', 'Ŕëáóě');
define('RESULT', 'Đĺçóëňŕň');
define('DIR_RO', 'Íčźĺ ěîăó óďčń. ');
define('DIR_CANT_READ', 'Íčźĺ ěîăóĺ ÷čňŕĺ. ');
define('INSERT', 'Äîäŕâŕĺ íîâčő ńëčęŕ ó ăŕëĺđčźó');
define('LIST_NEW_PIC', 'Ëčńňŕ íîâčő ńëčęŕ');
define('INSERT_SELECTED', 'Óáŕöč îäŕáđŕíĺ ńëčęĺ');
define('NO_PIC_FOUND', 'Íîâĺ ńëčęĺ íčńó ďđîíŕĺíĺ');
define('BE_PATIENT', 'Ěîëčěî áóäčňĺ ńňđďčâč, ńęđčďňó źĺ ďîňđĺáíî íĺęî âđĺěĺ äŕ äîäŕ ńëčęĺ');
define('SN_NOTES', '<ul><li><b>OK</b> : çíŕ÷č äŕ źĺ ńëčęŕ óńďĺříî äîäŕňŕ<li><b>DP</b> : çíŕ÷č äŕ źĺ ńëčęŕ äóďëčęŕň č äŕ âĺ ďîńňîźč ó áŕçč<li><b>PB</b> : çíŕ÷č äŕ źĺ ńëčęŕ íčźĺ äîäŕňŕ, ďđîâĺđčňĺ ďîäĺřŕâŕŕ č ďđŕâŕ ďđčńňóďŕ äčđĺęňîđčźóěčěŕ ăäĺ ńĺ ńëčęĺ íŕëŕçĺ<li>Ŕęî ńĺ çíŕöč OK, DP, PB íĺ ďîźŕâĺ, ęëčęíčňĺ íŕ ďóęíóňó ńëčęó äŕ áčńňĺ âčäĺëč ďîđóęó î ăđĺřöč ęîźč âŕě źĺ PHP ďđčźŕâčî<li>Ŕęî âđĺěĺ ó âŕřĺě ďđĺăëĺäŕ÷ó čńňĺęíĺ, ďđčňčńíčňĺ äóăěĺ \\\"îńâĺćč\\\"</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('UP_TITLE', 'Ďîřŕč ńëčęó');
define('MAX_FSIZE', 'Ěŕęńčěŕëíî äčçâîĺíŕ âĺëč÷číŕ ôŕźëŕ źĺ %s KB');
//define('ALBUM', 'Ŕëáóě');
define('PICTURE', 'Ńëčęŕ');
define('PIC_TITLE', 'Íŕçčâ ńëčęĺ');
define('DESCRIPTION', 'Îďčń ńëčęĺ');
define('KEYWORDS', 'Ęó÷íĺ đĺ÷č (îäâîźč đŕçěŕęîě)');
define('ERR_NO_ALB_UPLOADABLES', 'Ćŕî ěč źĺ, ŕëč íĺěŕ ŕëáóěŕ ó ęîźč âŕě źĺ äîçâîĺíî äŕ řŕĺňĺ ńëčęĺ');

// lang_usermgr_php
define('U_TITLE', 'Óđĺčâŕĺ ęîđčńíčęŕ');
//define('NAME_A', 'čěĺíó óçëŕçíî');
//define('NAME_D', 'čěĺíó ńčëŕçíî');
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
//define('DELETE', 'ÎÁĐČŘČ');
define('U_NAME', 'Ęîđčńíč÷ęî čěĺ');
//define('GROUP', 'Ăđóďŕ');
define('INACTIVE', 'Íĺŕęňčâŕí');
//define('OPERATIONS', 'Îďĺđŕöčźĺ');
define('PICTURES', 'Ńëčęĺ');
define('DISK_SPACE', 'Čńęîđčřĺí ďđîńňîđ / ęâîňŕ');
define('REGISTERED_ON', 'Đĺăčńňđîâŕí');
define('U_USER_ON_P_PAGES', '%d ęîđčńíčęŕ íŕ %d ńňđŕíŕ');
define('USER_CONFIRM_DEL', 'Äŕ ëč ńňĺ ńčăóđíč äŕ ćĺëčňĺ äŕ ÎÁĐČŘĹŇĹ îâîă ęîđčńíčęŕ? \\nŃâĺ ĺăîâĺ ńëčęĺ č ŕëáóěč áčĺ ňŕęîĺ îáđčńŕíč.');
define('MAIL', 'ĎÎŘŇŔ');
define('ERR_UNKNOWN_USER', 'Čçŕáđŕíč ęîđčńíčę íĺ ďîńňîźč!');
define('MODIFY_USER', 'Čçěĺíč ęîđčńíčęŕ');
//define('NOTES', 'Íŕďîěĺíĺ');
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
define('UTIL_TITLE', 'Ďđîěĺíŕ äčěĺíçčźŕ ńëčęĺ');
define('WHAT_IT_DOES', 'Řňŕ đŕäč');
define('WHAT_UPDATE_TITLES', 'Ŕćóđčđŕ íŕńëîâĺ ďî čěĺíó ôŕźëŕ');
define('WHAT_DELETE_TITLE', 'Áđčřĺ íŕńëîâĺ');
define('WHAT_REBUILD', 'Ďđŕâč ěŕđęčöĺ č ńëčęĺ ďđîěĺĺíčő äčěĺíçčźŕ');
define('WHAT_DELETE_ORIGINALS', 'Áđčřĺ îđčăčíŕëíĺ ńëčęĺ çŕěĺóźóč čő âĺđçčźŕěŕ ďđîěĺĺíĺ âĺëč÷číĺ');
define('U_FILE', 'Äŕňîňĺęŕ');
define('TITLE_SET_TO', 'íŕńëîâ ďîńňŕâč íŕ');
define('SUBMIT_FORM', 'čçâđřč');
define('UPDATED_SUCCESFULLY', 'óńďĺříî čçěĺĺíŕ');
define('ERROR_CREATE', 'ĂĐĹŘĘŔ ďđč ęđĺčđŕó');
define('CONTINUE', 'Îáđŕäč źîř ńëčęŕ');
define('MAIN_SUCCESS', 'Äŕňîňĺęŕ %s źĺ óńďĺříî čńęîđčřĺíŕ ęŕî ăëŕâíŕ ńëčęŕ');
define('ERROR_RENAME', 'Ăđĺřęŕ ďđč ďđĺčěĺíîâŕó %s ó %s');
define('ERROR_NOT_FOUND', 'Äŕňîňĺęŕ %s íčźĺ ďđîíŕĺíŕ');
define('U_BACK', 'íŕçŕä íŕ ăëŕâíó');
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
define('U_UPDATE', 'Ŕćóđčđŕź ěŕđęčöĺ č/čëč čçěĺĺíĺ ńëčęĺ');
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
define('UT_DELETE', 'Îáđčřč íŕçčâĺ ńëčęŕ čëč îđčăčíŕëíĺ ńëčęĺ');
define('DELETE_TITLE', 'Îáđčřč íŕçčâĺ ńëčęŕ');
define('DELETE_ORIGINAL', 'Îáđčřč îđčăčíŕëíĺ ńëčęĺ');
define('DELETE_REPLACE', 'Áđčřĺ îđčăčíŕëíĺ ńëčęĺ č ěĺŕ čő ńëčęŕěŕ ďđîěĺĺíčő äčěĺíçčźŕ');
//define('SELECT_ALBUM', 'Îäŕáĺđč ŕëáóě');

// lang_pagetitle_php
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
$lang_usermgr_php = array(
    'name_a' => 'Name ascending',
    'name_d' => 'Name descending',
    'group_a' => 'Group ascending',
    'group_d' => 'Group descending',
    'reg_a' => 'Reg date ascending',
    'reg_d' => 'Reg date descending',
    'pic_a' => 'Pic count ascending',
    'pic_d' => 'Pic count descending',
    'disku_a' => 'Disk usage ascending',
    'disku_d' => 'Disk usage descending',
    );
$lang_byte_units = array('Bytes', 'KB', 'MB');
// Day of weeks and months
$lang_day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
$lang_meta_album_names = array(
    'random' => 'Random pictures',
    'lastup' => 'Last additions',
    'lastupby' => 'My Last additions', // new 1.2.2
    'lastalb' => 'Last updated albums',
    'lastcom' => 'Last comments',
    'lastcomby' => 'My Last comments', // new 1.2.2
    'topn' => 'Most viewed',
    'toprated' => 'Top rated',
    'lasthits' => 'Last viewed',
    'search' => 'Search results',
    'favpics' => 'Favorite Pictures' // changed in cpg1.2.0nuke
    );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array(
    'title' => 'Configuration',
    'restore_cfg' => 'Restore factory defaults',
    'save_cfg' => 'Save new configuration',
    'notes' => 'Notes',
    'info' => 'Information',
    'upd_success' => 'Coppermine configuration was updated',
    'restore_success' => 'Coppermine default configuration restored',
    'name_a' => 'Name ascending',
    'name_d' => 'Name descending',
    'title_a' => 'Title ascending',
    'title_d' => 'Title descending',
    'date_a' => 'Date ascending',
    'date_d' => 'Date descending',
    'rating_a' => 'Rating ascending', // new in cpg1.2.0nuke
    'rating_d' => 'Rating descending', // new in cpg1.2.0nuke
    'th_any' => 'Max Aspect',
    'th_ht' => 'Height',
    'th_wd' => 'Width',
    );
// start left side interpretation
$lang_config_data = array(
    // 'General settings',
    'Îďřňŕ ďîäĺřŕâŕŕ',
    array('Íŕçčâ ăŕëĺđčźĺ', 'gallery_name', 0),
    array('Îďčń ăŕëĺđčźĺ', 'gallery_description', 0),
    array('Ŕäđĺńŕ ĺ-ďîřňĺ ŕäěčíčńňđŕňîđŕ', 'gallery_admin_email', 0),
    array('Îäđĺäčříŕ ŕäđĺńŕ ëčíęŕ \'Âčäč źîř ńëčęŕ\' ó ĺ-äîďčńíčöŕěŕ', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
    array('Ňĺěŕ', 'theme', 6),
    array('Page Specific Titles instead of >Coppermine', 'nice_titles', 1),
//'Album list view',
    'Ďđĺăëĺä ëčńňĺ ŕëáóěŕ',
    array('Řčđčíŕ ăëŕâíĺ ňŕáĺëĺ (ňŕ÷ŕęŕ čëč %)', 'main_table_width', 0),
    array('Áđîź íčâîŕ ďđčęŕçŕíčő ęŕňĺăîđčźŕ', 'subcat_level', 0),
    array('Áđîź ďđčęŕçŕíčő ŕëáóěŕ', 'albums_per_page', 0),
    array('Áđîź ęîëîíŕ ó ëčńňč ŕëáóěŕ', 'album_list_cols', 0),
    array('Äčěĺíçčźĺ ěŕđęčöĺ ó ňŕ÷ęŕěŕ', 'alb_list_thumb_size', 0),
    array('Ńŕäđćŕź íŕńëîâíĺ ńňđŕíĺ', 'main_page_layout', 0),
    array('Ďđčęŕćč ěŕđęčöĺ ŕëáóěŕ ďđâîă íčâîŕ ó ęŕňĺăîđčźŕěŕ', 'first_level', 1), 
//'Thumbnail view',
    'Ďđĺăëĺä ěŕđęčöŕ',
    array('Áđîź ęîëîíŕ íŕ ńňđŕíčöč ńŕ ěŕđęčöŕěŕ', 'thumbcols', 0),
    array('Áđîź đĺäîâŕ íŕ ńňđŕíčöč ńŕ ěŕđęčöŕěŕ', 'thumbrows', 0),
    array('Ěŕęńčěŕëŕí áđîź ďđčęŕçŕíčő ďîŕ', 'max_tabs', 0),
    array('Ďđčęŕćč çŕăëŕâĺ ńëčęĺ (ďîđĺä íŕńëîâŕ) čńďîä ěŕđęčöĺ', 'caption_in_thumbview', 1),
    array('Ďđčęŕćč áđîź ęîěĺíňŕđŕ čńďîä ěŕđęčöĺ', 'display_comment_count', 1),
    array('Ďîäđŕçóěĺâŕíî ńîđňčđŕĺ ńëčęŕ', 'default_sort_order', 3),
    array('Ěčíčěŕëŕí áđîź ăëŕńîâŕ äŕ áč ńĺ ńëčęŕ ďîźŕâčëŕ ó ëčńňč \'íŕźáîĺ îöĺĺíĺ\'', 'min_votes_for_rating', 0),
    array('Alts and title tags of thumbnail show title and keyword instead of picinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
 //'Display Image &amp; Comment settings',
    'Ďđĺăëĺä ńëčęŕ č ďîäĺřŕâŕĺ ęîěĺíňŕđŕ',
    array('Řčđčíŕ ňŕáĺëĺ çŕ ďđčęŕçčâŕĺ ńëčęŕ (ňŕ÷ŕęŕ čëč  %)', 'picture_table_width', 0),
    array('Číôîđěŕöčźĺ î ńëčöč ńó ďîäđŕçóěĺâŕíî ďđčęŕçŕíĺ', 'display_pic_info', 1),
    array('Čçáŕöč đóćíĺ đĺ÷č čç ęîěĺíňŕđŕ', 'filter_bad_words', 1),
    array('Äîçâîëč ńěŕźëčźĺ ó ęîěĺíňŕđčěŕ', 'enable_smilies', 1),
    array('Allow several consecutive comments on one pic from the same user', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
    array('Email site admin upon comment submission' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
    array('Ěŕęńčěŕëíŕ äóćčíŕ îďčńŕ ńëčęĺ', 'max_img_desc_length', 0),
    array('Ěŕęńčěŕëŕí áđîź ńëîâŕ ó đĺ÷č', 'max_com_wlength', 0),
    array('Ěŕęńčěŕëŕí áđîź ëčíčźŕ ó ęîěĺíňŕđó', 'max_com_lines', 0),
    array('Ěŕęńčěŕëíŕ äóćčíŕ ęîěĺíňŕđŕ', 'max_com_size', 0),
    array('Ďđčęŕćč ôčëěńęó ňđŕęó', 'display_film_strip', 1),
    array('Áđîź ęŕäđîâŕ ó ôčëěńęîź ňđŕöč', 'max_film_strip_items', 0),
    array('Allow viewing of full size pic by anonymous', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
    array('Number of days between being able to vote on the same image','keep_votes_time',0), // new in cpg1.2.2c nuke
    array('Show fullsize picture in slideshow','fullsize_slideshow',1),
    array('Show blocks on the right of displayimage if right blocks are on at module level?', 'right_blocks', 1), // new 1.2.2
// 'Pictures and thumbnails settings',
    'Ďîäĺřŕâŕŕ ńëčęŕ č ěŕđęčöŕ',
    array('Ęâŕëčňĺň JPEG ôŕźëŕ', 'jpeg_qual', 0),
    array('Place watermark on image', 'watermark', 1),
    array('Ěŕęńčěŕëíĺ äčěĺíçčźĺ ěŕđęčöĺ <b>*</b>', 'thumb_width', 0),
    array('Ęîđčńňč äčěĺíçčźĺ (řčđčíŕ čëč âčńčíŕ čëč ěŕęń. îäíîń çŕ ěŕđęčöó) <b>*</b>', 'thumb_use', 7),
    array('Ďđŕâč ěĺóńëčęĺ', 'make_intermediate', 1),
    array('Ěŕęńčěŕëíŕ řčđčíŕ čëč âčńčíŕ ěĺóńëčęĺ <b>*</b>', 'picture_width', 0),
    array('Ěŕęńčěŕëíŕ âĺëč÷číŕ ďîńëŕňĺ ńëčęĺ (KB)', 'max_upl_size', 0),
    array('Ěŕęńčěŕëíŕ řčđčíŕ čëč âčńčíŕ ďîńëŕňĺ ńëčęĺ (ňŕ÷ŕęŕ)', 'max_upl_width_height', 0), 
    array('Allow multiple Files to be upload with same file name', 'samename', 1), 
//'User settings',
    'Ęîđčńíč÷ęŕ ďîäĺřŕâŕŕ',
    array('Äîçâîëč đĺăčńňđŕöčźó íîâčő ęîđčńíčęŕ', 'allow_user_registration', 1),
/*
    array('Đĺăčńňđŕöčźŕ íîâčő ęîđčńíčęŕ çŕőňĺâŕ ďđîâĺđó ďđĺęî ĺ-ďîřňĺ', 'reg_requires_valid_email', 1),
    array('Äîçâîëč äŕ äâŕ ęîđčńíčęŕ čěŕźó čńňó ŕäđĺńó ĺ-ďîřňĺ', 'allow_duplicate_emails_addr', 1),
*/
    array('Ęîđčńíčöč ěîăó čěŕňč ďđčâŕňíĺ ŕëáóěĺ', 'allow_private_albums', 1),
    array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',
    'Ęîđčńíč÷ęŕ ďîŕ ó îďčńčěŕ ńëčęŕ (îńňŕâč ďđŕçíî ŕęî ńĺ íĺ ęîđčńňĺ)',
    array('Íŕçčâ ďîŕ 1', 'user_field1_name', 0),
    array('Íŕçčâ ďîŕ 2', 'user_field2_name', 0),
    array('Íŕçčâ ďîŕ 3', 'user_field3_name', 0),
    array('Íŕçčâ ďîŕ 4', 'user_field4_name', 0), 
	//'Pictures and thumbnails advanced settings',
    'Íŕďđĺäíŕ ďîäĺřŕâŕŕ ńëčęŕ č ěŕđęčöŕ',
    array('Ďđčęŕćč čęîíčöó ďđčâŕňíîă ŕëáóěŕ íĺďđčźŕâĺíčě ęîđčńíčöčěŕ', 'show_private', 1),
    array('Çíŕęîâč ęîźč íčńó äîçâîĺíč ó čěĺíčěŕ äŕňîňĺęŕ', 'forbiden_fname_char', 0),
    array('Äîçâîĺíĺ ĺęńňĺíçčźĺ ôŕźëîâŕ çŕ ďîńëŕňĺ ńëčęĺ', 'allowed_file_extensions', 0),
    array('Íŕ÷čí ďđîěĺíĺ âĺëč÷číĺ ńëčęŕ', 'thumb_method', 2),
    array('Ďóňŕŕ äî ImageMagick ŕëŕňŕ çŕ ęîíâĺđçčźó (íďđ. /usr/bin/X11/)', 'impath', 0),
    array('Äîçâîĺíĺ âđńňĺ ńëčęŕ (ńŕěî çŕ ImageMagick)', 'allowed_img_types', 0),
    array('Îďöčźĺ ęîěŕíäíĺ ëčíčźĺ çŕ ImageMagick', 'im_options', 0),
    array('×čňŕź EXIF ďîäŕňęĺ čç JPEG äŕňîňĺęŕ', 'read_exif_data', 1),
    array('Read IPTC data in JPEG files', 'read_iptc_data', 1), // new in cpg1.2.0nuke
    array('Äčđĺęňîđčźóě ŕëáóěŕ <b>*</b>', 'fullpath', 0),
    array('Äčđĺęňîđčźóě çŕ ęîđčńíč÷ęĺ ńëčęĺ <b>*</b>', 'userpics', 0),
    array('Ďđĺôčęń çŕ ěĺóńëčęĺ <b>*</b>', 'normal_pfx', 0),
    array('Ďđĺôčęń çŕ ěŕđęčöĺ <b>*</b>', 'thumb_pfx', 0),
    array('Picinfo display filename', 'picinfo_display_filename', 1), 
    array('Picinfo display album name', 'picinfo_display_album_name', 1), 
    array('Picinfo display_file_size', 'picinfo_display_file_size', 1), 
    array('Picinfo display_dimensions', 'picinfo_display_dimensions', 1), 
    array('Picinfo display_count_displayed', 'picinfo_display_count_displayed', 1), 
    array('Picinfo display_URL', 'picinfo_display_URL', 1), 
    array('Picinfo display URL as bookmark link', 'picinfo_display_URL_bookmark', 1), 
    array('Picinfo display fav album link', 'picinfo_display_favorites', 1), 
//    'Cookies &amp; Charset settings',
    'Ďîäĺřŕâŕŕ ęîëŕ÷čŕ č ńęóďîâŕ çíŕęîâŕ',
    array('Íŕçčâ ęîëŕ÷čŕ ęîźč ĺ ńęđčďň ęîđčńčňč', 'cookie_name', 0),
    array('Ďóňŕŕ äî ęîëŕ÷čŕ ęîźč ĺ ńęđčďň ęîđčńčňč', 'cookie_path', 0),
//    'Miscellaneous settings',
    'Đŕçíŕ ďîäĺřŕâŕŕ',
    array('Óęó÷č ěîä çŕ îňęëŕŕĺ ăđĺřŕęŕ', 'debug_mode', 1),
    '<br /><div align="center">(*) Ďîŕ îçíŕ÷ĺíŕ ńŕ  * íĺ ńěĺźó ńĺ ěĺŕňč ŕęî âĺ čěŕňĺ ńëčęŕ ó ăŕëĺđčźč</div><br />'
    );
// end left side interpretation
