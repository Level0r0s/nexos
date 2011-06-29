<?php 
/***************************************************************************  
   Coppermine Photo Gallery 1.3.1 for CPG-Nuke                                
  **************************************************************************  
   Port Copyright (C) 2004 Coppermine/CPG-Nuke Dev Team                        
   http://cpgnuke.com/                                               
  **************************************************************************  
   Copyright (C) 2002,2003  Gr�gory DEMAR <gdemar@wanadoo.fr>                 
   http://coppermine.sf.net/team/                                        
   This program is free software; you can redistribute it and/or modify       
   it under the terms of the GNU General Public License as published by       
   the Free Software Foundation; either version 2 of the License, or          
   (at your option) any later version.                                        
  **************************************************************************  
  Last modification notes:
  $Source: /cvs/languages/vietnamese/modules/coppermine/language/lang-vietnamese-utf-8.php,v $
  $Revision: 1.4 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:47 $
****************************************************************************/
global $module_name, $lang_usermgr_php,$lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;  
define('PIC_VIEWS','Views');
define('PIC_VOTES','Votes');
define('PIC_COMMENTS','Comments');

// lang_translation_info
define('LANG_NAME_ENGLISH','VietNamese');
define('LANG_NAME_NATIVE','Tiếng Việt');
define('LANG_COUNTRY_CODE','vn');
define('TRANS_NAME','Há»¯u Tá»«');
define('TRANS_EMAIL','cutu9@yahoo.com');
define('TRANS_WEBSITE','http://www.u2u.us');
define('TRANS_DATE','2003-10-30');
define('CHARSET','utf-8');
define('TEXT_DIR','ltr');
define('YES','CÃ³');
define('NO','KhÃ´ng');
define('BACK','TRá»ž Láº I');
define('CONTINU','TIáº¾P Tá»¤C');
define('INFO','ThÃ´ng tin');
//define('_ERROR', 'Error'); //already in main lang file
define('ALBUM_DATE_FMT','%B %d, %Y');
define('LASTCOM_DATE_FMT','%m/%d/%y at %H:%M');
define('LASTUP_DATE_FMT','%B %d, %Y');
define('REGISTER_DATE_FMT','%B %d, %Y');
define('LASTHIT_DATE_FMT','%B %d, %Y at %I:%M %p');
define('COMMENT_DATE_FMT','%B %d, %Y at %I:%M %p');

// lang_meta_album_names
define('RANDOM','HÃ¬nh ngáº«u nhiÃªn');
define('LASTUP','HÃ¬nh má»›i thÃªm vÃ o');
define('LASTUPBY','My Last Additions');
define('LASTALB','Album vá»«a cáº­p nháº­t');
define('LASTCOM','Nháº­n xÃ©t cuá»‘i');
define('LASTCOMBY','My Last comments');
define('TOPN','Xem nhiá»u');
define('TOPRATED','ÄÃ¡nh giÃ¡ cao');
define('LASTHITS','Xem láº§n cuá»‘i');
define('SEARCH','Káº¿t quáº£ tÃ¬m tháº¥y');
define('FAVPICS','YÃªu thÃ­ch');

// lang_errors
define('ACCESS_DENIED','Báº¡n khÃ´ng cÃ³ quyá»n á»Ÿ trang nÃ y');
define('PERM_DENIED','Báº¡n khÃ´ng cÃ³ quyá»n Ä‘á»ƒ thá»±c hiá»‡n');
define('PARAM_MISSING','Gá»i khÃ´ng cÃ³ thÃ´ng sá»‘');
define('NON_EXIST_AP','Lá»±a chá»n album/hÃ¬nh khÃ´ng cÃ³!');
define('QUOTA_EXCEEDED','Háº¿t dung lá»±Æ¡ng<br /><br /Báº¡n chá»‰ cÃ³  [quota]K,hÃ¬nh cá»§a báº¡n Ä‘Ã£ chiáº¿m  [space]K, thÃªm hÃ¬nh nÃ y vÃ o sáº½ vá»±Æ¡t khoáº£ng trá»‘ng cho phÃ©p.');
define('GD_FILE_TYPE_ERR','Khi dÃ¹ng thÆ° viá»‡n GD chá»‰ xá»­ lÃ½ Ä‘á»±Æ¡c hÃ¬nh cÃ³ Ä‘uÃ´i lÃ  JPEG vÃ  PNG.');
define('INVALID_IMAGE','HÃ¬nh báº¡n táº£i lÃªn gáº·p trá»¥c tráº·c hoáº·c khÃ´ng thá»ƒ Ä‘á»±Æ¡c  thÆ° viá»‡n GD xá»­ lÃ½');
define('RESIZE_FAILED','KhÃ´ng thá»ƒ táº¡o thumbnail hoáº·c thay Ä‘á»•i kÃ­ch thá»©Æ¡c hÃ¬nh');
define('NO_IMG_TO_DISPLAY','KhÃ´ng cÃ³ hÃ¬nh nÃ o cáº£');
define('NON_EXIST_CAT','PhÃ¢n loáº¡i báº¡n chá»n khÃ´ng tá»“n táº¡i');
define('ORPHAN_CAT','PhÃ¢n loáº¡i báº¡n chá»n khÃ´ng cÃ³ PhÃ¢n loáº¡i gÃ´c, vÃ o pháº§n quáº£n lÃ½ PhÃ¢n loáº¡i Ä‘á»ƒ chá»‰nh láº¡i.');
define('DIRECTORY_RO','Äá»«Æ¡ng dáº«n \'%s\' khÃ´ng thá»ƒ thá»±c thi, hÃ¬nh khÃ´ng thá»ƒ xoÃ¡');
define('NON_EXIST_COMMENT','Nháº­n xÃ©t báº¡n chá»n khÃ´ng tá»“n táº¡i.');
define('PIC_IN_INVALID_ALBUM','PHÃ¬nh náº±m trong Album khÃ´ng tá»“n táº¡i (%s)!?');
define('BANNED','Báº¡n Ä‘ang bá»‹ cáº¥m tham gia site nÃ y.');
define('NOT_WITH_UDB','Chá»©c nÄƒng nÃ y khÃ´ng Ä‘á»±Æ¡c phÃ©p sá»­ dá»¥ng vÃ¬ nÃ³ tÆ°Æ¡ng tÃ¡c vá»›i forum. Báº¡n hÃ£y cáº¥u hÃ¬nh láº¡i hoáº·c chá»‰nh trong chá»©c nÄƒng cá»§a forum');
define('MEMBERS_ONLY','This function is for members only, please join.');
define('MUSTBE_GOD','This function is only for the site admin. You must be logged in as superadmin, god account to access this function');
define('NO_IMG_TO_APPROVE','No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE','Danh sÃ¡ch Album');
define('ALB_LIST_LNK','nhá»¯ng Album');
define('MY_GAL_TITLE','HÃ¬nh cÃ¡ nhÃ¢n');
define('MY_GAL_LNK','HÃ¬nh cá»§a tÃ´i');
define('MY_PROF_LNK','GÃ³c cÃ¡ nhÃ¢n');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE','chuyá»ƒn admin mode');
define('ADM_MODE_LNK','Admin mode');
define('USR_MODE_TITLE','Chuyá»ƒn user mode');
define('USR_MODE_LNK','Chuyá»ƒn qua giao diá»‡n ngá»«Æ¡i dÃ¹ng');
define('UPLOAD_PIC_TITLE','Táº£i hÃ¬nh vÃ o Album');
define('UPLOAD_PIC_LNK','Táº£i  hÃ¬nh');
define('REGISTER_TITLE','Táº¡o tÃ i khoáº£n');
define('REGISTER_LNK','ÄÄƒng kÃ½');
define('LOGIN_LNK','ÄÄƒng nháº­p');
define('LOGOUT_LNK','ThoÃ¡t');
define('LASTUP_LNK','Má»›i táº£i lÃªn');
define('LASTUP_TITLE','Recently uploaded pictures');
define('TOPN_TITLE','Pictures that have been seen most');
define('TOPN_LNK','Xem nhiá»u');
define('TOPRATED_TITLE','Top rated pictures');
define('TOPRATED_LNK','Top rated');
define('SEARCH_TITLE','Search Photo Collection');
define('SEARCH_LNK','TÃ¬m');
define('FAV_TITLE','My Favorites');
define('FAV_LNK','YÃªu thÃ­ch');
define('HELP_TITLE','HELP');

// lang_gallery_admin_menu
define('UPL_APP_LNK','Luáº­t khi upload');
define('CONFIG_LNK','Cáº¥u hÃ¬nh');
define('ALBUMS_LNK','Album');
define('CATEGORIES_LNK','PhÃ¢n loáº¡i');
define('USERS_LNK','Users');
define('GROUPS_LNK','NhÃ³m');
define('COMMENTS_LNK','Nháº­n xÃ©t');
define('SEARCHNEW_LNK','Äá»«Æ¡ng dáº«n vÃ  HÃ¬nh');
define('UTIL_LNK','chá»‰nh kÃ­ch cá»¡');
define('BAN_LNK','Cáº¥m tham gia');

// lang_user_admin_menu
define('ALBMGR_LNK','Táº¡o, sáº¯p xáº¿p');
define('MODIFYALB_LNK','Chá»‰nh Album cá»§a mÃ¬nh');
//define('MY_PROF_LNK', 'My profile');

// lang_cat_list
define('CATEGORY','PhÃ¢n lá»ai');
define('ALBUMS','Albums');
//define('PICTURES', 'Pictures');

// lang_album_list
define('ALBUM_ON_PAGE','%d album trÃªn %d trang');
// lang_thumb_view
define('DATE','DATE');
define('NAME','TÃªn');
define('TITLE','Chá»‰nh kÃ­ch cá»¡ hÃ¬nh');
define('SORT_DA','Sáº¯p xáº¿p tÄƒng dáº§n');
define('SORT_DD','Sáº¯p xáº¿p giáº£m dáº§n');
define('SORT_NA','Sáº¯p xáº¿p tÄƒng ');
define('SORT_ND','Sáº¯p xáº¿p giáº£m dáº§n');
define('SORT_TA','Sáº¯p xáº¿p tÄƒng dáº§n');
define('SORT_TD','Sáº¯p xáº¿p giáº£m dáº§n');
define('PIC_ON_PAGE','%d hÃ¬nh trÃªn %d trang');
define('USER_ON_PAGE','%d hÃ¬nh trÃªn %d trang');
define('SORT_RA','Sort by rating ascending');
define('SORT_RD','Sort by rating descending');
define('THUMB_RATING','RATING');
define('SORT_TITLE','Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE','trá»Ÿ láº¡i trang thumbnail');
define('PIC_INFO_TITLE','Hiá»‡n/áº¨n thÃ´ng tin hÃ¬nh');
define('SLIDESHOW_TITLE','LÆ°á»›t qua');
define('SLIDESHOW_DISABLED','e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG','This function is for members only, please join.');
define('ECARD_TITLE','Gá»­i hÃ¬nh nÃ y lÃ m thiá»‡p táº·ng');
define('ECARD_DISABLED','e-cards khÃ´ng cho phÃ©p');
define('ECARD_DISABLED_MSG','Báº¡n khÃ´ng cÃ³ quyá»n Ä‘á»ƒ gá»­i hÃ¬nh');
define('PREV_TITLE','Xem hÃ¬nh trá»©oc');
define('NEXT_TITLE','Xem hÃ¬nh sau');
define('PIC_POS','HÃŒNH %s/%s');
define('NO_MORE_IMAGES','There are no more images in this galley');
define('NO_LESS_IMAGES','This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC','ÄÃ¡nh giÃ¡ hÃ¬nh nÃ y ');
define('NO_VOTES','(ChÆ°a ai Ä‘Ã¡nh giÃ¡)');
define('RATING','(Má»©c Ä‘á»±Æ¡c Ä‘Ã¡nh giÃ¡: %s / 5 vá»›i %s láº§n Ä‘Ã¡nh giÃ¡)');
define('RUBBISH','Tá»‡');
define('POOR','Xáº¥u');
define('FAIR','Äá»±Æ¡c');
define('GOOD','Tá»‘t');
define('EXCELLENT','Ráº¥t tá»‘t');
define('GREAT','Tuyá»‡t vá»i');

// lang_cpg_die
//define('INFO', 'Information');
//define('ERROR', 'Error');
define('_CRITICAL_ERROR','Critical error');
define('FILE','File');
define('LINE','DÃ²ng: ');

// lang_display_thumbnails
define('FILENAME','TÃªn file : ');
define('FILESIZE','Dung luá»£ng file : ');
define('DIMENSIONS','KÃ­ch cá»¡');
define('DATE_ADDED','NgÃ y Ä‘Æ°a vÃ o : ');

// lang_get_pic_data
define('N_COMMENTS','%s nháº­n xÃ©t');
define('N_VIEWS','%s láº§n xem');
define('N_VOTES','(%s láº§n Ä‘Ã¡nh giÃ¡)');


// lang_albmgr_php
define('ALB_NEED_NAME','Cáº§n Ä‘áº·t tÃªn cho Album');
define('CONFIRM_MODIFS','Cháº¯c cháº¯n lÃ  báº¡n muá»‘n chá»‰nh sá»­a nhÆ° tháº¿ chá»© ?');
define('NO_CHANGE','ChÆ°a chá»‰nh sá»­a gÃ¬ cáº£ !');
define('NEW_ALBUM','Album má»›i');
define('CONFIRM_DELETE1','Cháº¯c cháº¯n xoÃ¡ Album nÃ y Ä‘i chá»© ?');
define('CONFIRM_DELETE2','\n Táº¥t cáº£ hÃ¬nh trong nÃ y cÅ©ng sáº½ bá»‹ xoÃ¡ theo luÃ´n');
define('SELECT_FIRST','Trá»©Æ¡c tiÃªn pháº£i chá»n Album');
define('ALB_MRG','Quáº£n lÃ½ Album ');
define('MY_GALLERY','* HÃ¬nh cá»§a tÃ´i*');
define('NO_CATEGORY','* KhÃ´ng phÃ¢n loáº¡i *');
define('DELETE','XoÃ¡');
define('NEW','Má»›i');
define('APPLY_MODIFS','Cáº­p nháº­t chá»‰nh sá»­a');
define('SELECT_CATEGORY','Chá»n phÃ¢n loáº¡i');

// lang_catmgr_php
define('MISS_PARAM','Parameters required for \'%s\'operation not supplied !');
define('UNKNOWN_CAT','PhÃ¢n loáº¡i nÃ y khÃ´ng náº±m trong cÆ¡ sá»Ÿ dá»¯ liá»‡u');
define('USERGAL_CAT_RO','HÃ¬nh cá»§a User khÃ´ng thá»ƒ bá»‹ xoÃ¡');
define('MANAGE_CAT','Quáº£n lÃ½ PhÃ¢n loáº¡i');
define('CONFIRM_DELETE_CAT','Are you sure you want to DELETE this category');
//define('CATEGORY', 'Category');
define('OPERATIONS','Hoáº¡t Ä‘á»™ng');
define('MOVE_INTO','Chuyá»ƒn vÃ o');
define('UPDATE_CREATE','Cáº­p nháº­t/Táº¡o PhÃ¢n loáº¡i');
define('PARENT_CAT','PhÃ¢n loáº¡i cha');
define('CAT_TITLE','TÃªn PhÃ¢n loáº¡i');
define('CAT_DESC','MÃ´ táº£ phÃ¢n loáº¡i');

// lang_config_php
define('CONFIG_TITLE','Cáº¥u hÃ¬nh');
define('RESTORE_CFG','Quay láº¡i máº·c Ä‘á»‹nh');
define('SAVE_CFG','Cháº¥p nháº­n cáº¥u hÃ¬nh má»›i');
define('NOTES','<ul><li><b>OK</b> : hÃ¬nh Ä‘Ã£ Ä‘á»±Æ¡c thÃªm vÃ o<li><b>DP</b> : hÃ¬nh nÃ y trÃ¹ng láº·p vÃ  Ä‘Ã£ cÃ³ trong cÆ¡ sá»Ÿ dá»¯ liá»‡u<li><b>PB</b> : hÃ¬nh cá»§a báº¡n khÃ´ng thá»ƒ Ä‘á»±Æ¡c thÃªm vÃ o, kiá»ƒm tra láº¡i cáº¥u hÃ¬nh hoáº·c quyá»n.<li>Náº¿u OK, DP, PB \'signs\' khÃ´ng xuáº¥t hiá»‡n thÃ¬ click vÃ o hÃ¬nh Ä‘á»ƒ PHP thÃ´ng bÃ¡o lá»—i gáº·p pháº£i<li>Náº¿u web bá»‹ Ä‘á»©ng, báº¥m F5 hoáº·c refresh</ul>');
//define('INFO', 'Information');
define('UPD_SUCCESS','OK Ä‘Ã£ Ä‘á»±Æ¡c cáº­p nháº­t!');
define('RESTORE_SUCCESS','ÄÃ£ trá»Ÿ láº¡i máº·c Ä‘á»‹nh !');
define('NAME_A','TÃªn tÄƒng dáº§n');
define('NAME_D','TÃªn giáº£m dáº§n');
define('TITLE_A','Tá»±a Ä‘á» tÄƒng dáº§n');
define('TITLE_D','Tá»±a Ä‘á» giáº£m dáº§n');
define('DATE_A','NgÃ y tÄƒng dáº§n');
define('DATE_D','NgÃ y giáº£m dáº§');
define('RATING_A','Rating ascending');
define('RATING_D','Rating descending');
define('TH_ANY','Max Aspect');
define('TH_HT','Height');
define('TH_WD','Width');


// lang_db_input_php
define('EMPTY_NAME_OR_COM','Báº¡n cáº§n viáº¿t tÃªn vÃ  lá»i nháº­n xÃ©t vÃ o');
define('COM_ADDED','Lá»i nháº­n xÃ©t Ä‘á»±Æ¡c cháº¥p nháº­n');
define('ALB_NEED_TITLE','Báº¡n cáº§n Ä‘áº·t tÃªn cho Album!');
define('NO_UDP_NEEDED','KhÃ´ng cáº§n sá»± cáº­p nháº­t');
define('ALB_UPDATED','Album Ä‘á»±Æ¡c cáº­p nháº­t!');
define('UNKNOWN_ALBUM','Album vá»«a chá»n khÃ´ng cÃ³ hoáº·c lÃ  báº¡n khÃ´ng cÃ³ quyá»n Ä‘á»ƒ táº£i hÃ¬nh lÃªn á»Ÿ album nÃ y rá»“i ');
define('NO_PIC_UPLOADED','KhÃ´ng cÃ³ hÃ¬nh nÃ o Ä‘á»±Æ¡c táº£i lÃªn cáº£!!<br /><br />Báº¡n coi láº¡i xem táº¥m hÃ¬nh táº£i lÃªn server nÃ y cÃ³ há»£p yÃªu cáº§u chÆ°a ?');
define('ERR_MKDIR','Lá»—i khi táº¡o Ä‘á»«Æ¡ng dáº«n %s !');
define('DEST_DIR_RO','Äá»«Æ¡ng dáº«n Ä‘áº¿n %s khÃ´ng thá»ƒ truy cáº­p  !');
define('ERR_MOVE','KhÃ´ng thá»ƒ di chuyá»ƒn %s Ä‘áº¿n %s !');
define('ERR_FSIZE_TOO_LARGE','KÃ­ch thá»©Æ¡c cá»§a táº¥m hÃ¬nh báº¡n táº£i lÃªn quÃ¡ lá»›n so vá»›i qui Ä‘á»‹nh (tá»‘i Ä‘a lÃ  %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE','Dung lÆ°á»£ng file báº¡n táº£i lÃªn quÃ¡ lá»›n so vá»›i qui Ä‘á»‹nh (tá»‘i Ä‘a lÃ  %s KB) !');
define('ERR_INVALID_IMG','File báº¡n muá»‘n táº£i lÃªn Ä‘Ã¢u pháº£i lÃ  hÃ¬nh áº£nh !');
define('ALLOWED_IMG_TYPES','Chá»‰ Ä‘á»±Æ¡c phÃ©p táº£i  hÃ¬nh %s ');
define('ERR_INSERT_PIC','HÃ¬nh \'%s\' khÃ´ng thá»ƒ Ä‘á»±Æ¡c chÃ¨n vÃ o Album ');
//define('INFO', 'Information');
define('ERR_COMMENT_EMPTY','Nháº­n xÃ©t cá»§a báº¡n trá»‘ng!');
define('ERR_INVALID_FEXT','Chá»‰ cÃ³ cÃ¡c loáº¡i file vá»›i Ä‘uÃ´i sau Ä‘Ã¢y Ä‘á»±Æ¡c cháº¥p nháº­n : <br /><br />%s.');
define('NO_FLOOD','Xin lÃ´i, báº¡n Ä‘Ã£ lÃ  tÃ¡c giáº£ cá»§a lá»i nháº­n xÃ©t hÃ¬nh nÃ  rá»“i <br /><br />Sá»­a láº¡i nháº­n xÃ©t nÃ y náº¿u báº¡n muá»‘n !');
define('REDIRECT_MSG','ChÃºng tÃ´i sáº½ chuyá»ƒn báº¡n Ä‘áº¿n<br /><br /><br />Click \'CONTINUE\' náº¿u trang nÃ y khÃ´ng tá»± Ä‘á»™ng');
define('UPL_SUCCESS','ChÃºc má»«ng, hÃ¬nh cá»§a báº¡n Ä‘Ã£ Ä‘á»±Æ¡c táº£i lÃªn thÃ nh cÃ´ng');

// lang_delete_php
define('CAPTION','MÃ´ táº£');
define('FS_PIC','KÃ­ch thá»©Æ¡c hÃ¬nh');
define('DEL_SUCCESS','XoÃ¡ thÃ nh cÃ´ng!');
define('NS_PIC','kÃ­ch thá»©Æ¡c hÃ¬nh bÃ¬nh thá»«Æ¡ng');
define('ERR_DEL','khÃ´ng thá»ƒ xÃ³a');
define('THUMB_PIC','thumbnail');
//define('COMMENT', 'comment');
define('IM_IN_ALB','hÃ¬nh trong album');
define('ALB_DEL_SUCCESS','Album \'%s\' Ä‘Ã£ bá»‹ xoÃ¡');
define('ALB_MGR','Quáº£n lÃ½ Album ');
define('ERR_INVALID_DATA','Dá»¯ liá»‡u khÃ´ng Ä‘Ãºng á»Ÿ \'%s\'');
define('CREATE_ALB','Äang táº¡o Album \'%s\'');
define('UPDATE_ALB','Äang cáº­p nháº­t Album \'%s\' vá»›i tá»±a \'%s\' vÃ  chá»‰ má»¥c \'%s\'');
define('DEL_PIC','XOÃ HÃŒNH NÃ€Y');
define('DEL_ALB','XoÃ¡ Album');
define('DEL_USER','XoÃ¡ User');
//define('ERR_UNKNOWN_USER', 'The selected user does not exist !');
define('COMMENT_DELETED','Nháº­n xÃ©t Ä‘Ã£ bá»‹ xÃ³a bá»');

// lang_display_image_php
define('PIC_CONFIRM_DEL','Are you sure you want to DELETE this picture ? \nComments will also be deleted.');
define('DEL_THIS_PIC','DELETE THIS PICTURE');
define('SIZE','%s x %s pixels');
define('VIEWS','%s láº§n');
define('SLIDESHOW','lá»©Æ¡t qua');
define('STOP_SLIDESHOW','Dá»«ng láº¡i');
define('VIEW_FS','Clik vÃ o Ä‘á»ƒ xem hÃ¬nh to hÆ¡n');
define('EDIT_PIC','EDIT PICTURE INFO');

// lang_picinfo
define('PIC_INF_TITLE','thÃ´ng tin hÃ¬nh');
define('PIC_INF_FILENAME','TÃªn file');
define('ALBUM_NAME','Album name');
define('PIC_INFO_RATING','ÄÃ¡nh giÃ¡ (%s láº§n)');
define('KEYWORDS','Tá»« khoÃ¡');
define('PIC_INF_FILE_SIZE','File Size');
define('PIC_INF_DIMENSIONS','Dimensions');
define('DISPLAYED','ÄÃ£ há»‹iá»ƒn thá»‹');
define('CAMERA','Camera');
define('DATE_TAKEN','Date taken');
define('APERTURE','Äá»" má»Ÿ');
define('EXPOSURE_TIME','Exposure time');
define('FOCAL_LENGTH','Focal length');
define('COMMENT','Nháº­n xÃ©t');
define('ADDFAV','ThÃªm vÃ o pháº§n yÃªu thÃ­ch');
define('ADDFAVPHRASE','YÃªu thÃ­ch');
define('REMFAV','XoÃ¡ khá»i pháº§n yÃªu thÃ­ch');
define('IPTCTITLE','IPTC Title');
define('IPTCCOPYRIGHT','IPTC Copyright');
define('IPTCKEYWORDS','IPTC Keywords');
define('IPTCCATEGORY','IPTC Category');
define('IPTCSUBCATEGORIES','IPTC Sub Categories');
define('BOOKMARK_PAGE','Bookmark Image');
define('REMOVEFAV','Removed from Favorites Album');
define('ADDEDTOFAV','Added to Favorites Album');

// lang_display_comments
define('OK','OK');
define('COM_EDIT_TITLE','Sá»­a lá»i nháº­n xÃ©t nÃ y');
define('CONFIRM_DELETE_COM','CÃ³ cháº¯c lÃ  muá»‘n xoÃ¡ nháº­n xÃ©t nÃ y khÃ´ng  ?');
define('ADD_YOUR_COMMENT','ThÃªm nháº­n xÃ©t vÃ o');
define('COM_NAME','Name');
//define('COMMENT', 'Comment');
define('YOUR_NAME','náº·c danh');

// lang_fullsize_popup
define('CLICK_TO_CLOSE','Click vÃ o hÃ¬nh Ä‘á»ƒ Ä‘Ã³ng cá»­a sá»• nÃ y');

// lang_ecard_php
define('E_TITLE','Gá»­i an e-card');
define('INVALID_EMAIL','<b>Cáº£nh bÃ¡o</b> : Ä‘á»‹a chá»‰ mail khÃ´ng há»£p lÃ½ !');
define('E_ECARD_TITLE','thiá»‡p tá»« %s cho báº¡n');
define('VIEW_ECARD','náº¿u táº¥m thiá»‡p nÃ y khÃ´ng hiá»ƒn thá»‹ Ä‘Ãºng thÃ¬ hÃ£y click vÃ o Ä‘Ã¢y');
define('VIEW_MORE_PICS','Click vÃ o Ä‘Ã¢y Ä‘á»ƒ cÃ³ thá»ƒ xem nhiá»u hÃ¬nh hÆ¡n');
define('SEND_SUCCESS','thiá»‡p cá»§a báº¡n Ä‘Ã£ Ä‘á»±Æ¡c gá»­i');
define('SEND_FAILED','Xin lá»—i, server khÃ´ng thá»ƒ gá»­i thiá»‡p cá»§a báº¡n Ä‘i Ä‘á»±Æ¡c');
define('FROM','Tá»«');
define('_YOUR_NAME','TÃªn cá»§a báº¡n');
define('YOUR_EMAIL','Mail cá»§a báº¡n');
define('TO','Äáº¿n');
define('RCPT_NAME','tÃªn ngá»«Æ¡i nháº­n');
define('RCPT_EMAIL','Mail cá»§a ngá»«Æ¡i nháº­n');
define('GREETINGS','lá»i chÃ o');
define('MESSAGE','Ná»™i dung chÃºc');
define('ECARD_LINK_CORRUPT','Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser');

// lang_editpics_php
define('PIC_INFO','HÃ¬nh&nbsp;thÃ´ng tin');
define('ALBUM','Album');
define('EDIT_TITLE','Tá»±a Ä‘á»');
define('DESC','MÃ´ táº£');
//define('KEYWORDS', 'Keywords');
define('PIC_INFO_STR','%sx%s - %sKB - %s láº§n xem - %s láº§n Ä‘Ã¡nh giÃ¡');
define('APPROVE','cháº¥p nháº­n hÃ¬nh');
define('POSTPONE_APP','khoan cháº¥p nháº­n');
//define('DEL_PIC', 'Delete picture');
define('READ_EXIF','Read EXIF info again');
define('RESET_VIEW_COUNT','tráº£ láº¡i sá»‘ láº§n xem');
define('RESET_VOTES','tráº£ láº¡i sá»‘ láº§n Ä‘Ã¡nh giÃ¡');
define('DEL_COMM','XÃ³a nháº­n xÃ©t');
define('UPL_APPROVAL','cho phÃ©p táº£i lÃªn');
define('EDIT_PICS','Sá»­a hÃ¬nh');
define('SEE_NEXT','Xem hÃ¬nh káº¿ tiáº¿p');
define('SEE_PREV','Xem hÃ¬nh trá»©Æ¡c');
define('N_PIC','%s hÃ¬nh');
define('N_OF_PIC_TO_DISP','Sá»‘ hÃ¬nh Ä‘á»±Æ¡c hiá»ƒn thá»‹');
define('APPLY','Cáº­p nháº­t thay Ä‘á»•i nÃ y');

// lang_groupmgr_php
define('GROUP_NAME','tÃªn nhÃ³m');
define('DISK_QUOTA','Dung lá»±Æ¡ng Ä‘Ä©a');
define('CAN_RATE','CÃ³ thá»ƒ Ä‘Ã¡nh giÃ¡ hÃ¬nh');
define('CAN_SEND_ECARDS','CÃ³ thá»ƒ gá»­i thiá»‡p');
define('CAN_POST_COM','CÃ³ thá»ƒ viáº¿t nháº­n xÃ©t');
define('CAN_UPLOAD','KhÃ¡ch cÃ³ thá»ƒ táº£i hÃ¬nh lÃªn');
define('CAN_HAVE_GALLERY','CÃ³ gÃ³c cÃ¡ nhÃ¢n riÃªng');
//define('APPLY', 'Apply modifications');
define('CREATE_NEW_GROUP','Táº¡o nhÃ³m má»›i');
define('DEL_GROUPS','XoÃ¡ cÃ¡c nhÃ³m Ä‘Ã£ chá»n');
define('CONFIRM_DEL','Cháº¯c cháº¯n xoÃ¡ tÃ i khoáº£n nÃ y chá»© ? \n Táº¥t cáº£ hÃ¬nh, nháº­n xÃ©t cá»§a há» cÅ©ng sáº½ bá»‹ xoÃ¡.');
define('GROUP_TITLE','Manage user groups');
define('APPROVAL_1','Pub. Upl. cháº¥p nháº­n (1)');
define('APPROVAL_2','Priv. Upl. cháº¥p nháº­n (2)');
define('NOTE1','<b>(1)</b> Ä‘á»±Æ¡c táº£i há»‰nh lÃªn chá»— cáº§n Ä‘á»±Æ¡c Ban Quáº£n Trá»‹ Ä‘á»“ng Ã½ ');
define('NOTE2','<b>(2)</b> Ä‘á»±Æ¡c upload lÃªn nÆ¡i mÃ  user cáº§n Ban Quáº£n Tri cho phÃ©p');
//define('NOTES', 'Notes');

// lang_index_php
define('WELCOME','ChÃ o má»«ng !');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB','Are you sure you want to DELETE this album ? \nAll pictures and comments will also be deleted.');
//define('DELETE', 'DELETE');
define('MODIFY','THUá»˜C TÃNH');
//define('EDIT_PICS', 'EDIT PICS');

// lang_list_categories
define('HOME','Trang chá»§');
define('STAT1','<b>[pictures] </b> hÃ¬nh trong <b>[albums]</b> album vÃ  <b>[cat]</b> PhÃ¢n loáº¡i vá»›i <b>[comments]</b> nháº­n xÃ©t, xem <b>[views]</b> láº§n');
define('STAT2','<b>[pictures]</b> hÃ¬nh trong <b>[albums]</b> album Ä‘á»±Æ¡c xem <b>[views]</b> láº§n');
define('XX_S_GALLERY','hÃ¬nh cá»§a %s\ ');
define('STAT3','<b>[pictures]</b> hÃ¬nh trong <b>[albums]</b> album vá»›i <b>[comments]</b> nháº­n xÃ©t, Ä‘á»±Æ¡c xem <b>[views]</b> láº§n');

// lang_list_users
define('USER_LIST','Danh sÃ¡ch ngá»«Æ¡i dÃ¹ng');
define('NO_USER_GAL','KhÃ´ng cÃ³ hÃ¬nh ngá»«Æ¡i dÃ¹ng');
define('N_ALBUMS','%s album');
define('N_PICS','%s hÃ¬nh');

// lang_list_albums
define('N_PICTURES','%s hÃ¬nh');
define('LAST_ADDED',', láº§n cuá»‘i thÃªm vÃ o: %s');

// lang_modifyalb_php
define('UPD_ALB_N','Cáº­p nháº­t album %s');
define('GENERAL_SETTINGS','Chung chung');
define('ALB_TITLE','tá»±a Ä‘á» Album');
define('ALB_CAT','phÃ¢n loáº¡i Album ');
define('ALB_DESC','mÃ´ táº£ Album');
define('ALB_THUMB','Album thumbnail');
define('ALB_PERM','Quyá»n háº¡n cho Album nÃ y');
define('CAN_VIEW','Album nÃ y cÃ³ thá»ƒ Ä‘á»±Æ¡c xem bá»Ÿi');
define('MOD_CAN_UPLOAD','Visitors can upload pictures');
define('CAN_POST_COMMENTS','KhÃ¡ch cÃ³ thá»ƒ nháº­n xÃ©t');
define('MOD_CAN_RATE','KhÃ¡ch cÃ³ thá»ƒ Ä‘Ã¡nh giÃ¡ hÃ¬nh');
define('USER_GAL','hÃ¬nh cá»§a ngá»«Æ¡i dÃ¹ng');
define('NO_CAT','* KhÃ´ng cÃ³ phÃ¢n loáº¡i *');
define('ALB_EMPTY','Album trá»‘ng');
define('LAST_UPLOADED','Cáº­p nháº­t láº§n cuá»‘i');
define('PUBLIC_ALB','Táº¥t cáº£ má»i ngÆ°á»i (album cÃ´ng cá»™ng)');
define('ME_ONLY','Chá»‰ riÃªng tÃ´i');
define('OWNER_ONLY','chá»‰ chá»§ cá»§a Album (%s)');
define('GROUPP_ONLY','ThÃ nh vien nhÃ³m \'%s\' ');
define('ERR_NO_ALB_TO_MODIFY','khÃ´ng cÃ³ album nÃ o báº¡n cÃ³ thá»ƒ thay Ä‘á»•i trong dá»¯ liá»‡u.');
define('UPDATE','Cáº­p nháº­t album');

// lang_rate_pic_php
define('ALREADY_RATED','Xin lá»—i, báº¡n Ä‘Ã£ Ä‘Ã¡nh giÃ¡ hÃ¬nh nÃ y 1 láº§n rá»“i');
define('RATE_OK','CÃ¡m Æ¡n báº¡n Ä‘Ã£ Ä‘Ã¡nh giÃ¡');

// lang_register_php
define('USERNAME','TÃªn');
define('GROUP','nhÃ³m');
define('DISK_USAGE','dung lá»±Æ¡ng');
define('X_S_PROFILE','thÃ´ng tin cá»§a %s ');

// lang_reviewcom_php
define('REVIEW_TITLE','xem láº¡i nháº­n xÃ©t');
define('NO_COMMENT','KhÃ´ng cÃ³ nháº­n xÃ©t nÃ o Ä‘á»ƒ xem cáº£');
define('N_COMM_DEL','%s nháº­n xÃ©t bá»‹ xoÃ¡');
define('N_COMM_DISP','Sá»‘ nháº­n xÃ©t Ä‘á»±Æ¡c hiá»ƒn thá»‹');
define('R_SEE_PREV','Xem nháº­n xÃ©t trá»©Æ¡c');
define('R_SEE_NEXT','Xem nháº­n xÃ©t sau');
define('R_DEL_COMM','XÃ³a nháº­n xÃ©t Ä‘Ã£ chá»n');

// lang_search_php
define('S_SEARCH','TÃ¬m kiáº¿m hÃ¬nh tá»•ng há»£p');

// lang_search_new_php
define('PAGE_TITLE','TÃ¬m hÃ¬nh má»›i');
define('SELECT_DIR','Chá»n Ä‘á»«Æ¡ng dáº«n');
define('SELECT_DIR_MSG','Chá»©c nÄƒng nÃ y cho phÃ©p báº¡n thÃªm Ä‘á»«Æ¡ng dáº«n cá»§a hÃ¬nh mÃ  Ä‘Ã£ Ä‘á»±Æ¡c táº£i lÃªn  server báº±ng FTP.<br /><br />Chá»n Ä‘á»«Æ¡ng dáº«n mÃ  báº¡n muá»‘n táº£i hÃ¬nh lÃªn');
define('NO_PIC_TO_ADD','KhÃ´ng cÃ³ hÃ¬nh Ä‘á»ƒ thÃªm vÃ o');
define('NEED_ONE_ALBUM','Báº¡n pháº£i cÃ³ Ã­t nháº¥t 1 album Ä‘á»ƒ xÃ i chá»©c nÄƒng nÃ y');
define('WARNING','Cáº£nh bÃ¡o');
define('CHANGE_PERM','tkhÃ´ng thá»ƒ chÃ©p vÃ o thÆ° má»¥c nÃ y, cáº§n pháº£i Chmod lÃ  755 hay 777 !');
define('TARGET_ALBUM','<b>Äáº·t hÃ¬nh cá»§a  &quot;</b>%s<b>&quot; vÃ o </b>%s');
define('FOLDER','ThÆ° má»¥c');
define('IMAGE','HÃ¬nh');
//define('ALBUM', 'Album');
define('RESULT','Káº¿t quáº£');
define('DIR_RO','KhÃ´ng thá»ƒ chá»‰nh sá»­a');
define('DIR_CANT_READ','KhÃ´ng thá»ƒ xem');
define('INSERT','ThÃªm hÃ¬nh vÃ o');
define('LIST_NEW_PIC','Danh sÃ¡ch hÃ¬nh má»›i');
define('INSERT_SELECTED','ChÃ¨n hÃ¬nh Ä‘Ã£ chá»n');
define('NO_PIC_FOUND','KhÃ´ng tÃ¬m tháº¥y hÃ¬nh mÆ¡i nÃ o cáº£');
define('BE_PATIENT','Please be patient, the script needs time to add the pictures');
define('SN_NOTES','<ul><li><b>OK</b> : means that the picture was succesfully added<li><b>DP</b> : means that the picture is a duplicate and is already in the database<li><b>PB</b> : means that the picture could not be added, check your configuration and the permission of directories where the pictures are located<li>If the OK, DP, PB \'signs\' does not appear click on the broken picture to see any error message produced by PHP<li>If your browser timeout, hit the reload button</ul>');
define('SELECT_ALBUM','Chá»n album');
define('NO_ALBUM','No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('UP_TITLE','Táº£i hÃ¬nh lÃªn');
define('MAX_FSIZE','Dung lá»±Æ¡ng tá»‘i Ä‘a cho phÃ©p lÃ  %s KB');
//define('ALBUM', 'Album');
define('PICTURE','HÃ¬nh');
define('PIC_TITLE','Tá»±a Ä‘á» hÃ¬nh');
define('DESCRIPTION','MÃ´ táº£ hÃ¬nh');
define('UP_KEYWORDS','Tá»« khoÃ¡');
define('ERR_NO_ALB_UPLOADABLES','KhÃ´ng cÃ³ Album Ä‘Ã³');

// lang_usermgr_php
define('U_TITLE','Manage users');
//define('NAME_A', 'Name ascending');
//define('NAME_D', 'Name descending');
define('GROUP_A','NhÃ³m tÄƒng dáº§n');
define('GROUP_D','NhÃ³m giáº£m dáº§n');
define('REG_A','NgÃ y tham gia tÄƒng dáº§n');
define('REG_D','NgÃ y tham gia giáº£m dáº§n');
define('PIC_A','Sá»‘ hÃ¬nh tÄƒng');
define('PIC_D','Sá»‘ hÃ¬nh giáº£m');
define('DISKU_A','Dung lá»±Æ¡ng tÄƒng');
define('DISKU_D','Dung lÆ°Æ¡ng giáº£m');
define('SORT_BY','Sáº¯p xáº¿p ngá»«Æ¡i dÃ¹ng theo');
define('ERR_NO_USERS','Báº£ng quáº£n lÃ½ ngá»«Æ¡i dÃ¹ng trá»‘ng !');
define('ERR_EDIT_SELF','Báº¡n khÃ´ng thá»ƒ tá»± mÃ¬nh thay Ä‘á»•i thÃ´ng tin cÃ¡ nhÃ¢n, sá»­ dá»¥ng  \'My profile\' Ä‘á»ƒ lÃ m');
define('EDIT','THAY Äá»”I');
//define('DELETE', 'DELETE');
define('U_NAME','tÃªn tÃ i khoáº£n');
//define('GROUP', 'Group');
define('INACTIVE','khÃ´ng hoáº¡t Ä‘á»™ng');
//define('OPERATIONS', 'Operations');
define('PICTURES','hÃ¬nh');
define('DISK_SPACE','Dung lÆ°á»£ng cho phÃ©p xÃ i');
define('REGISTERED_ON','ÄÄƒng kÃ­');
define('U_USER_ON_P_PAGES','%d ngá»«Æ¡i trÃªn %d trang');
define('USER_CONFIRM_DEL','Are you sure you want to DELETE this user ? \nAll his pictures and albums will also be deleted.');
define('MAIL','MAIL');
define('ERR_UNKNOWN_USER','TÃ i khoáº£n nÃ y khÃ´ng tá»“n táº¡i!');
define('MODIFY_USER','Sá»­a Ä‘á»•i');
//define('NOTES', 'Notes');
define('NOTE_LIST','<li>Náº¿u khÃ´ng muá»‘n thay Ä‘á»•i máº­t kháº©u thÃ¬ Ä‘á»ƒ trá»‘ng.');
define('PASSWORD','Máº­t kháº©u');
define('USER_ACTIVE_CP','TÃ i khoáº£n nÃ y Ä‘á»±Æ¡c kÃ­ch hoáº¡t');
define('USER_GROUP_CP','NhÃ³m');
define('USER_EMAIL','email');
define('USER_WEB_SITE','website ');
define('CREATE_NEW_USER','Táº¡o tÃ i khoáº£n má»›i');
define('USER_FROM','User location');
define('USER_INTERESTS','Viá»‡c lÃ m');
define('USER_OCC','User occupation');

// lang_util_php
define('UTIL_TITLE','Resize pictures');
define('WHAT_IT_DOES','NÃ³ lÃ  cÃ¡i gÃ¬');
define('WHAT_UPDATE_TITLES','Sá»­a tá»± Ä‘á» tá»« tÃªn file táº£i lÃªn');
define('WHAT_DELETE_TITLE','XoÃ¡ tá»±a Ä‘á»');
define('WHAT_REBUILD','Chá»‰nh láº¡i thumbnail vÃ  kÃ­ch cá»¡ hÃ¬nh');
define('WHAT_DELETE_ORIGINALS','XoÃ¡ dung lá»±Æ¡ng cÅ© vÃ  thay tháº¿ vá»›i dung lÆ°Æ¡ng má»›i ');
define('U_FILE','File');
define('TITLE_SET_TO','Ä‘áº·t tÃªn cho');
define('SUBMIT_FORM','Gá»­i Ä‘i');
define('UPDATED_SUCCESFULLY','Cáº­p nháº­t thÃ nh cÃ´ng');
define('ERROR_CREATE','Lá»–I !');
define('CONTIN','Process more images');
define('MAIN_SUCCESS','File %s Ä‘á»±Æ¡c dÃ¹ng nhÆ° hÃ¬nh chÃ­nh');
define('ERROR_RENAME','Lá»—i trong khoáº£ng  %s Ä‘áº¿n %s');
define('ERROR_NOT_FOUND','File %s khÃ´ng tÃ¬m tháº¥y');
define('U_BACK','Trá»Ÿ vá» trang chÃ­nh');
define('THUMBS_WAIT','Äang chá»‰nh sá»­a, vui lÃ²ng chá» ...');
define('THUMBS_CONTINUE_WAIT','Tiáº¿p tá»¥c chá»‰nh sá»­a ...');
define('TITLES_WAIT','Sá»­a tÃªn, vui lÃ²ng chá» ...');
define('DELETE_WAIT','XoÃ¡ tÃªn,  vui lÃ²ng chá» ...');
define('REPLACE_WAIT','Sá»­a, xoÃ¡ dung lá»±Æ¡ng cÅ©, thay vá»›i dung lÆ°Æ¡ng má»›i, vui lÃ²ng chá» ...');
define('INSTRUCTION','TÃ i liá»‡u nhanh');
define('INSTRUCTION_ACTION','Chá»n hoáº¡t Ä‘á»™ng');
define('INSTRUCTION_PARAMETER','Chá»n thÃ´ng sá»‘');
define('INSTRUCTION_ALBUM','chá»n album');
define('INSTRUCTION_PRESS','Nháº¥n %s');
define('U_UPDATE','Äang xá»­ lÃ½');
define('UPDATE_WHAT','CÃ¡i gÃ¬ cáº§n cáº­p nháº­t');
define('UPDATE_THUMB','Chá»‰thumbnails');
define('UPDATE_PIC','Chá»‰ chá»‰nh dung lÆ°á»£ng hÃ¬nh');
define('UPDATE_BOTH','Cáº£ thumbnails vÃ  dung lÆ°á»£ng hÃ¬nh');
define('UPDATE_NUMBER','Sá»‘ láº§n thá»±c thi sau má»—i láº§n click');
define('UPDATE_OPTION','(giáº£m nÃ³ xuá»‘ng náº¿u báº¡n gáº·p váº¥n Ä‘á» vá» timeout)');
define('FILENAME_TITLE','TÃªn file &rArr; Tá»±a Ä‘á» hÃ¬nh');
define('FILENAME_HOW','LÃ m sao Ä‘á»ƒ Ä‘á»•i tÃªn file');
define('FILENAME_REMOVE','xoÃ¡ file .jpg vÃ  thay tháº¿  _ vá»›i  khoáº£ng trá»‘ng');
define('FILENAME_EURO','Thay 2003_11_23_13_20_20.jpg báº±ng 23/11/2003 13:20');
define('FILENAME_US','Thay 2003_11_23_13_20_20.jpg báº±ng 11/23/2003 13:20');
define('FILENAME_TIME','Thay 2003_11_23_13_20_20.jpg thÃ nh 13:20');
define('UT_DELETE','Thay tÃªn hÃ¬nh hoáº·c dung lÆ°á»£ng cá»§a hÃ¬nh');
define('DELETE_TITLE','XoÃ¡ tÃªn hÃ¬nh');
define('DELETE_ORIGINAL','XoÃ¡ dung lÆ°á»£ng hÃ¬nh');
define('DELETE_REPLACE','XoÃ¡ dung lÆ°á»£ng cÅ© cá»§a hÃ¬nh vÃ  thay tháº¿ vá»›i cÃ¡i má»›i');
//define('SELECT_ALBUM', 'Select album');

// lang_pagetitle_php
define('VIEWING','Viewing Photo');
define('USR','\'s Photo Gallery');
define('PHOTOGALLERY','Photo Gallery');
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
$lang_day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');
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
    'General settings',
    array('Gallery name', 'gallery_name', 0),
    array('Gallery description', 'gallery_description', 0),
    array('Gallery administrator email', 'gallery_admin_email', 0),
    array('Address to nuke folder ie http://www.mysite.tld/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
//    array('Language', 'lang', 5),
// for postnuke change
    array('Theme', 'theme', 6),
    array('Page Specific Titles instead of >Coppermine', 'nice_titles', 1),
    'Album list view',
    array('Width of the main table (pixels or %)', 'main_table_width', 0),
    array('Number of levels of sub-categories to display', 'subcat_level', 0),
    array('Number of albums to display', 'albums_per_page', 0),
    array('Number of columns for the album list', 'album_list_cols', 0),
    array('Size of thumbnails in pixels', 'alb_list_thumb_size', 0),
    array('The content of the main page', 'main_page_layout', 0),
    array('Show first level album thumbnails in categories', 'first_level', 1), 
    'Thumbnail view',
    array('Number of columns on thumbnail page', 'thumbcols', 0),
    array('Number of rows on thumbnail page', 'thumbrows', 0),
    array('Maximum number of tabs to display', 'max_tabs', 0),
    array('Display picture caption (in addition to title) below the thumbnail', 'caption_in_thumbview', 1),
    array('Display number of comments below the thumbnail', 'display_comment_count', 1),
    array('Default sort order for pictures', 'default_sort_order', 3),
    array('Minimum number of votes for a picture to appear in the \'top-rated\' list', 'min_votes_for_rating', 0),
    array('Alts and title tags of thumbnail show title and keyword instead of picinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
    'Display Image &amp; Comment settings',
    array('Width of the table for picture display (pixels or %)', 'picture_table_width', 0),
    array('Picture information are visible by default', 'display_pic_info', 1),
    array('Filter bad words in comments', 'filter_bad_words', 1),
    array('Allow smiles in comments', 'enable_smilies', 1),
    array('Allow several consecutive comments on one pic from the same user', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
    array('Email site admin upon comment submission' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
    array('Max length for an image description', 'max_img_desc_length', 0),
    array('Max number of characters in a word', 'max_com_wlength', 0),
    array('Max number of lines in a comment', 'max_com_lines', 0),
    array('Maximum length of a comment', 'max_com_size', 0),
    array('Show film strip', 'display_film_strip', 1),
    array('Number of items in film strip', 'max_film_strip_items', 0),
    array('Allow viewing of full size pic by anonymous', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
    array('Number of days between being able to vote on the same image','keep_votes_time',0), // new in cpg1.2.2c nuke
    array('Show fullsize picture in slideshow','fullsize_slideshow',1),
    array('Show blocks on the right of displayimage if right blocks are on at module level?', 'right_blocks', 1), // new 1.2.2
    'Pictures and thumbnails settings',
    array('Quality for JPEG files', 'jpeg_qual', 0),
    array('Max dimension of a thumbnail <b>*</b>', 'thumb_width', 0),
    array('Use dimension ( width or height or Max aspect for thumbnail )<b>*</b>', 'thumb_use', 7),
    array('Create intermediate pictures', 'make_intermediate', 1),
    array('Max width or height of an intermediate picture <b>*</b>', 'picture_width', 0),
    array('Max size for uploaded pictures (KB)', 'max_upl_size', 0),
    array('Max width or height for uploaded pictures (pixels)', 'max_upl_width_height', 0), 
    array('Allow multiple Files to be upload with same file name', 'samename', 1), 
    'User settings',
    array('Allow new user registrations', 'allow_user_registration', 1),
    /*array('User registration requires email verification', 'reg_requires_valid_email', 1),
    array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),*/
    array('Users can can have private albums', 'allow_private_albums', 1),
    array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
    'Custom fields for image description (leave blank if unused)',
    array('Field 1 name', 'user_field1_name', 0),
    array('Field 2 name', 'user_field2_name', 0),
    array('Field 3 name', 'user_field3_name', 0),
    array('Field 4 name', 'user_field4_name', 0), 
    'Pictures and thumbnails advanced settings',
    array('Show private album Icon to unlogged user', 'show_private', 1),
    array('Characters forbidden in filenames', 'forbiden_fname_char', 0),
    array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions', 0),
    array('Method for resizing images', 'thumb_method', 2),
    array('Path to ImageMagick / netpbm \'convert\' utility (example /usr/bin/X11/)', 'impath', 0),
    array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types', 0),
    array('Command line options for ImageMagick', 'im_options', 0),
    array('Read EXIF data in JPEG files', 'read_exif_data', 1),
    array('Read IPTC data in JPEG files', 'read_iptc_data', 1), // new in cpg1.2.0nuke
    array('The album directory <b>*</b>', 'fullpath', 0),
    array('The directory for user pictures <b>*</b>', 'userpics', 0),
    array('The prefix for intermediate pictures <b>*</b>', 'normal_pfx', 0),
    array('The prefix for thumbnails <b>*</b>', 'thumb_pfx', 0),
    array('Default mode for directories', 'default_dir_mode', 0),
    array('Default mode for pictures', 'default_file_mode', 0),
    array('Picinfo display filename', 'picinfo_display_filename', '1'), // new in cpg1.2.0nuke
    array('Picinfo display album name', 'picinfo_display_album_name', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_file_size', 'picinfo_display_file_size', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_dimensions', 'picinfo_display_dimensions', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_count_displayed', 'picinfo_display_count_displayed', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_URL', 'picinfo_display_URL', '1'), // new in cpg1.2.0nuke
    array('Picinfo display URL as bookmark link', 'picinfo_display_URL_bookmark', '1'), // new in cpg1.2.0nuke
    array('Picinfo display fav album link', 'picinfo_display_favorites', '1'), // new in cpg1.2.0nuke
    'Cookies &amp; Charset settings',
    array('Name of the cookie used by the script', 'cookie_name', 0),
    array('Path of the cookie used by the script', 'cookie_path', 0),
//    array('Character encoding', 'charset', 4), 
    'Miscellaneous settings',
    array('Enable debug mode', 'debug_mode', 1),
    array('Enable advanced debug mode', 'advanced_debug_mode', 1), // new in cpg1.2.0nuke
    array('Show Coppermine Update Alert to Admin', 'showupdate', 1), // new 1.2.2

    '<br /><div align="center">(*) Fields marked with * must not be changed if you already have pictures in your gallery</div><br />'
    );
// end left side interpretation
?>
