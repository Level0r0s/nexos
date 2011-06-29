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
  $Source: /cvs/languages/ukrainian/modules/coppermine/language/lang-ukrainian-utf-8.php,v $
  $Revision: 1.3 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:47 $
****************************************************************************/
global $module_name, $lang_usermgr_php,$lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;  
define('PIC_VIEWS','Views');
define('PIC_VOTES','Votes');
define('PIC_COMMENTS','Comments');

// lang_translation_info
define('LANG_NAME_ENGLISH','Ukrainian');
define('LANG_NAME_NATIVE','Óêðà¿íñüêà');
define('LANG_COUNTRY_CODE','ua');
define('TRANS_NAME','Kostya Jakovchuk');
define('TRANS_EMAIL','kostya.jakovchuk@plast.org.ua');
define('TRANS_WEBSITE','http://lutsk.plast.org.ua');
define('TRANS_DATE','2003-25-11');
define('CHARSET','UTF-8');
define('TEXT_DIR','ltr');
define('YES','Òàê');
define('NO','Í³');
define('BACK','Íàçàä');
define('CONTINU','Âïåðåä');
define('INFO','²íôîðìàö³ÿ');
//define('_ERROR', 'Error'); //already in main lang file
define('ALBUM_DATE_FMT','%d %B %Yð.');
define('LASTCOM_DATE_FMT','%d %B %Yð. î %H:%M');
define('LASTUP_DATE_FMT','%d.%m.%Yð.');
define('REGISTER_DATE_FMT','%d %B %Yð.');
define('LASTHIT_DATE_FMT','%d %B %Yð. â %I:%M');
define('COMMENT_DATE_FMT','%d %B %Yð. â %H:%M');

// lang_meta_album_names
define('RANDOM','Âèïàäêîâ³ ôîòî');
define('LASTUP','Îñòàíí³ äîëó÷åí³');
define('LASTUPBY','My Last Additions');
define('LASTALB','Îñòàííº ïîíîâëåííÿ àëüáîìó');
define('LASTCOM','Îñòàíí³ êîìåíòàð³');
define('LASTCOMBY','My Last comments');
define('TOPN','Ïîïóëÿðí³');
define('TOPRATED','Êðàù³ çà ðåéòèíãîì');
define('LASTHITS','Îñòàíí³ ïåðåãëÿíóò³');
define('SEARCH','Ðåçóëüòàòè ïîøóêó');
define('FAVPICS','Âèáðàí³');

// lang_errors
define('ACCESS_DENIED','Âè ìàºòå íåäîñòàòíüî ïîâíîâàæåíü äëÿ ïåðåãëÿäó ö³º¿ ñòîð³íêè.');
define('PERM_DENIED','Âè ìàºòå íåäîñòàòíüî ïîâíîâàæåíü äëÿ âèêîíàííÿ ö³º¿ îïåðàö³¿.');
define('PARAM_MISSING','Ñêðèïò âèêëèêàíî áåç ïîòð³áíèõ ïàðàìåòð³â.');
define('NON_EXIST_AP','Îáðàíèé Âàìè àëüáîì/ôîòî íå ³ñíóº!');
define('QUOTA_EXCEEDED','Ðîçì³ð äèñêîâîãî ïðîñòîðó ïåðåâèùåíî.<br /><br />Äëÿ Âàñ äèñêîâèé ïðîñò³ð ñòàíîâèòü [quota]Ká. Âàø³ ôîòî çàéìàþòü [space]Ká. Äîëó÷åííÿ öüîãî ôîòî ïåðåâèùèòü ïðèïóñòèìó ìåæó.');
define('GD_FILE_TYPE_ERR','ßêùî âèêîðèñò³âóºòüñÿ á³áë³îòåêà GD - äîçâîëåí³ ôîðìàòè çîáðàæåíü ò³ëüêè JPEG òà PNG.');
define('INVALID_IMAGE','Çàâàíòàæåíå ôîòî ç³ïñîâàíå, àáî íå ìîæå áóòè îïðàöüîâàíå á³áë³îòåêîþ GD');
define('RESIZE_FAILED','Íåìîæëèâî ñòâîðèòè ñëàéä àáî çìåíøèòè ðîçì³ð ôîòî.');
define('NO_IMG_TO_DISPLAY','Íåìà ôîòî');
define('NON_EXIST_CAT','Âèáðàíà êàòåãîð³ÿ íå ³ñíóº');
define('ORPHAN_CAT','Êàòåãîð³ÿ íå ìàº \'ãîëîâíîãî êàòàëîãó\'. Çàïóñò³òü Ìåíåäæåð êàòàëîã³â äëÿ âèïðàâëåííÿ ñèòóàö³¿.');
define('DIRECTORY_RO','Ïàïêà \'%s\' ò³ëüêè äëÿ ïåðåãëÿäó, ôîòî íåìîæëèâî âèäàëèòè');
define('NON_EXIST_COMMENT','Âèáðàíèé êîìåíòàð íå ³ñíóº.');
define('PIC_IN_INVALID_ALBUM','Ôîòî ç íå³ñíóþ÷îãî àëüáîìó (%s)!?');
define('BANNED','Âàì ñþäè íå äîçâîëåíî çàõîäèòè.');
define('NOT_WITH_UDB','Öþ ôóíêö³þ âèìêíåíî â Coppermine, îñê³ëüêè âîíà º ïðèºäíàíà äî ôîðóìó. Àáî òå, ùî Âè íàìàãàºòåñÿ âèêîíàòè, íà ï³äòðèìóºòüñÿ êîíô³ãóðàö³ºþ.');
define('MEMBERS_ONLY','This function is for members only, please join.');
define('MUSTBE_GOD','This function is only for the site admin. You must be logged in as superadmin, god account to access this function');
define('NO_IMG_TO_APPROVE','No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE','Äî ñïèñêà àëüáîìó');
define('ALB_LIST_LNK','Ñïèñîê êàòåãîð³é');
define('MY_GAL_TITLE','Äî ïåðñîíàëüíî¿ ãàëåðå¿');
define('MY_GAL_LNK','Ìîÿ ãàëåðåÿ');
define('MY_PROF_LNK','Ïðîô³ëü');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE','Ïåðåéòè â ðåæèì àäì³í³ñòðàòîðà');
define('ADM_MODE_LNK','Ðåæèì àäì³í³ñòðàòîðà');
define('USR_MODE_TITLE','Ïåðåéòè â ðåæèì êîðèñòóâà÷à');
define('USR_MODE_LNK','Ðåæèì êîðèñòóâà÷à');
define('UPLOAD_PIC_TITLE','Äîëó÷åííÿ ôîòî äî àëüáîìó');
define('UPLOAD_PIC_LNK','Äîëó÷èòè ôîòî');
define('REGISTER_TITLE','Çàðåºñòðóâàòèñÿ');
define('REGISTER_LNK','Ðåºñòðàö³ÿ');
define('LOGIN_LNK','Âõ³ä');
define('LOGOUT_LNK','Âèõ³ä');
define('LASTUP_LNK','Îñòàíí³ äîëó÷åí³');
define('LASTUP_TITLE','Recently uploaded pictures');
define('TOPN_TITLE','Pictures that have been seen most');
define('TOPN_LNK','Ïîïóëÿðí³');
define('TOPRATED_TITLE','Top rated pictures');
define('TOPRATED_LNK','Top rated');
define('SEARCH_TITLE','Search Photo Collection');
define('SEARCH_LNK','Ïîøóê');
define('FAV_TITLE','My Favorites');
define('FAV_LNK','Âèáðàí³');
define('HELP_TITLE','HELP');

// lang_gallery_admin_menu
define('UPL_APP_LNK','Ïåðåâ³ðêà äîëó÷åíü');
define('CONFIG_LNK','Íàëàøòóâàííÿ');
define('ALBUMS_LNK','Àëüáîìè');
define('CATEGORIES_LNK','Êàòåãîð³¿');
define('USERS_LNK','Êîðèñòóâà÷³');
define('GROUPS_LNK','Ãðóïè');
define('COMMENTS_LNK','Êîìåíòàð³');
define('SEARCHNEW_LNK','Àâòîäîëó÷åííÿ');
define('UTIL_LNK','Çì³íèòè ðîçì³ð');
define('BAN_LNK','Áàí êîðèñòóâà÷à');

// lang_user_admin_menu
define('ALBMGR_LNK','Ñòâîðèòè/âïîðÿäêóâàòè ìî¿ àëüáîìè');
define('MODIFYALB_LNK','Êîðåãóâàòè ìî¿ àëüáîìè');
//define('MY_PROF_LNK', 'My profile');

// lang_cat_list
define('CATEGORY','Êàòåãîð³ÿ');
define('ALBUMS','Àëüáîì³â');
//define('PICTURES', 'Pictures');

// lang_album_list
define('ALBUM_ON_PAGE','%d àëüáîì³â íà %d ñòîð³íêàõ');
// lang_thumb_view
define('DATE','Äàòà');
define('NAME','²ìÿ ôàéëà');
define('TITLE','Êåðóâàííÿ êîðèñòóâà÷àìè');
define('SORT_DA','Ñîðò. ïî äàò³ [çðîñòàííÿ]');
define('SORT_DD','Ñîðò. ïî äàò³ [ñïàäàííÿ]');
define('SORT_NA','Ñîðò. ïî ³ìåí³ [çðîñòàííÿ]');
define('SORT_ND','Ñîðò. ïî ³ìåí³ [ñïàäàííÿ]');
define('SORT_TA','Ñîðò. ïî íàçâ³ [çðîñòàííÿ]');
define('SORT_TD','Ñîðò. ïî íàçâ³ [ñïàäàííÿ]');
define('PIC_ON_PAGE','%d ôîòî íà %d ñòîð³íö³(àõ)');
define('USER_ON_PAGE','%d êîðèñòóâà÷³â íà %d ñòîð³íö³(àõ)');
define('SORT_RA','Sort by rating ascending');
define('SORT_RD','Sort by rating descending');
define('THUMB_RATING','RATING');
define('SORT_TITLE','Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE','Ïîâåðíóòèñü íà ñòîð³íêó ³ç ñëàéäîì');
define('PIC_INFO_TITLE','Ïîêàçàòè/çàõîâàòè ³íôîðìàö³þ ïðî ôîòî');
define('SLIDESHOW_TITLE','Ñëàéä-øîó');
define('SLIDESHOW_DISABLED','Slideshow is disabled');
define('SLIDESHOW_DISABLED_MSG','This function is for members only, please join.');
define('ECARD_TITLE','Íàä³ñëàòè öå ôîòî ÿê eCard');
define('ECARD_DISABLED','eCards âèìêíåí³');
define('ECARD_DISABLED_MSG','Ó Âàñ íåìàº äîñòàòí³õ ïîâíîâàæåíü eCards');
define('PREV_TITLE','Ïîïåðåäíº ôîòî');
define('NEXT_TITLE','Íàñòóïíå ôîòî');
define('PIC_POS','Ôîòî %s ç %s');
define('NO_MORE_IMAGES','There are no more images in this galley');
define('NO_LESS_IMAGES','This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC','Îö³íèòè öå ôîòî');
define('NO_VOTES','(Íå ãîëîñóâàëè)');
define('RATING','(ðåéòèíã: %s ç 5 ç %s ãîëîñàìè)');
define('RUBBISH','Í³ÿê');
define('POOR','Äóæå ïîãàíî');
define('FAIR','Ïîãàíî');
define('GOOD','Ìîæå áóòè');
define('EXCELLENT','Äîáðå');
define('GREAT','Ñóïåð');

// lang_cpg_die
//define('INFO', 'Information');
//define('ERROR', 'Error');
define('_CRITICAL_ERROR','Critical error');
define('FILE','Ôàéë: ');
define('LINE','Ðÿäîê: ');

// lang_display_thumbnails
define('FILENAME','Ôàéë : ');
define('FILESIZE','Ðîçì³ð ôàéëó: ');
define('DIMENSIONS','Ðîçì³ðè : ');
define('DATE_ADDED','Äàòà äîëó÷åííÿ : ');

// lang_get_pic_data
define('N_COMMENTS','%s êîìåíòàð³â');
define('N_VIEWS','%s ïåðåãëÿä³â');
define('N_VOTES','(%s ãîëîñ³â)');


// lang_albmgr_php
define('ALB_NEED_NAME','Àëüáîì ìóñèòü ìàòè íàçâó!');
define('CONFIRM_MODIFS','Âè ä³éñíî áàæàºòå çðîáèòè ö³ çì³íè?');
define('NO_CHANGE','Âè í³÷îãî íå çì³íèëè!');
define('NEW_ALBUM','Íîâèé àëüáîì');
define('CONFIRM_DELETE1','Âè ä³éñíî áàæàºòå âèäàëèòè öåé àëüáîì?');
define('CONFIRM_DELETE2','\nÂñ³ ôîòî ³ êîìåíòàð³ çíèêíóòü!');
define('SELECT_FIRST','Ñïî÷àòêó îáåð³òü àëüáîì');
define('ALB_MRG','Êåðóâàííÿ àëüáîìàìè');
define('MY_GALLERY','* Ìîÿ ãàëåðåÿ *');
define('NO_CATEGORY','* Íåìàº êàòåãîð³¿ *');
define('DELETE','Âèäàëèòè');
define('NEW','Íîâèé');
define('APPLY_MODIFS','Çàñòîñóâàòè çì³íè');
define('SELECT_CATEGORY','Select category');

// lang_catmgr_php
define('MISS_PARAM','Íå íàäàíî ïàðàìåòðè, ïîòð³áí³ äëÿ âèêîíàííÿ îïåðàö³¿ \'%s\'!');
define('UNKNOWN_CAT','Âèáðàíà êàòåãîð³ÿ íå ³ñíóº â áàç³');
define('USERGAL_CAT_RO','Êàòåãîð³þ ãàëåðåé êîðèñòóâà÷³â íå ìîæå áóòè âèäàëåíî!');
define('MANAGE_CAT','Êåðóâàííÿ êàòåãîð³ÿìè');
define('CONFIRM_DELETE_CAT','Are you sure you want to DELETE this category');
//define('CATEGORY', 'Category');
define('OPERATIONS','Ä³ÿ');
define('MOVE_INTO','Ïåðåì³ñòèòè äî');
define('UPDATE_CREATE','Ïîíîâèòè/Ñòâîðèòè êàòåãîð³þ');
define('PARENT_CAT','Êàòåãîð³ÿ âåðõíüîãî ð³âíÿ');
define('CAT_TITLE','Íàçâà êàòåãîð³¿');
define('CAT_DESC','Îïèñ êàòåãîð³¿');

// lang_config_php
define('CONFIG_TITLE','Êîíô³ãóðàö³ÿ');
define('RESTORE_CFG','Â³äíîâèòè çíà÷åííÿ ïî çàìîâ÷óâàííþ');
define('SAVE_CFG','Çáåðåãòè íîâó êîíô³ãóðàö³þ');
define('NOTES','<ul><li><b>OK</b> : îçíà÷àº, ùî ôîòî äîëó÷åíî<li><b>DP</b> : îçíà÷àº, ùî òàêå ôîòî âæå º â áàç³<li><b>PB</b> : îçíà÷àº, ùî ôîòî íå äîëó÷åíî. Âàðòî ïåðåâ³ðèòè  äîçâîëè íà íàëàøòóâàííÿ â ïàïêàõ, äå çíàõîäèòüñÿ ôîòî<li>ßêùî \'çíàêè\' OK, DP, PB íå çÿâëÿþòüñÿ, íàòèñí³òü íà ïîãàíîìó ôîòî, ùîá ïîáà÷èòè ïîìèëêó, çðîáëåíó PHP<li>ßêùî áðîóçåð êàæå \'timeout\', íàòèñí³òü êíîïêó \'Îíîâèòè\' (Refresh)</ul>');
//define('INFO', 'Information');
define('UPD_SUCCESS','Êîíô³ãóðàö³þ ïîíîâëåíî');
define('RESTORE_SUCCESS','Êîíô³ãóðàö³þ ïî çàìîâ÷óâàííþ â³äíîâëåíî');
define('NAME_A','³ìåí³ [çðîñòàííÿ]');
define('NAME_D','³ìåí³ [ñïàäàííÿ]');
define('TITLE_A','Íàçâà [çðîñòàííÿ]');
define('TITLE_D','Íàçâà [ñïàäàííÿ]');
define('DATE_A','äàòå [çðîñòàííÿ]');
define('DATE_D','äàòå [ñïàäàííÿ]');
define('RATING_A','Rating ascending');
define('RATING_D','Rating descending');
define('TH_ANY','Max Aspect');
define('TH_HT','Âèñîòà');
define('TH_WD','Øèðèíà');


// lang_db_input_php
define('EMPTY_NAME_OR_COM','Âè ïîâèíí³ íàáðàòè âàøå ³ìÿ òà êîìåíòàð');
define('COM_ADDED','Êîìåíòàð äîëó÷åíî');
define('ALB_NEED_TITLE','Âêàæ³òü íàçâó àëüáîìó!');
define('NO_UDP_NEEDED','Îíîâëåííÿ íå ïîòð³áíå');
define('ALB_UPDATED','Àëüáîì îíîâëåíî');
define('UNKNOWN_ALBUM','Îáðàíèé àëüáîì íå ³ñíóº, àáî Âè íå ìàºòå ïîâíîâàæåíü äëÿ äîëó÷åííÿ ôîòî äî öüîãî àëüáîìó');
define('NO_PIC_UPLOADED','Ôîòî íå äîëó÷åíî!<br /><br />Ïåðåâ³ðòå ñåðâåð íà ìîæëèâ³ñòü äîëó÷åííÿ ôîòî!');
define('ERR_MKDIR','Ïîìèëêà ïðè ñòâîðåíí³ ïàïêè %s !');
define('DEST_DIR_RO','Ïàïêà ïðèçíà÷åííÿ %s º ò³ëüêè äëÿ ÷èòàííÿ (äëÿ ñêðèïòà)!');
define('ERR_MOVE','Íåìîæëèâî ïåðåì³ñòèòè %s â %s !');
define('ERR_FSIZE_TOO_LARGE','Ðîçì³ð ôîòî, ÿêå âè äîëó÷àºòå, çàâåëèêèé (ìàêñèìàëüíèé: %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE','Ðîçì³ð ôàéëó, ÿêèé âè äîëó÷àºòå, çàâåëèêèé (ìàêñèìàëüíèé: %s Ká) !');
define('ERR_INVALID_IMG','Ôàéë, ÿêèé âè äîëó÷àºòå, ì³ñòèòü ïîìèëêó !');
define('ALLOWED_IMG_TYPES','Âè ìîæåòå äîëó÷èòè ò³ëüêè %s ôîòî.');
define('ERR_INSERT_PIC','Ôîòî \'%s\' íå ìîæå áóòè äîëó÷åíå äî àëüáîìó ');
//define('INFO', 'Information');
define('ERR_COMMENT_EMPTY','Âàø êîìåíòàð ïîðîæí³é !');
define('ERR_INVALID_FEXT','Ïðèéìàþòüñÿ ôàéëè ò³ëüêè íàñòóïíèõ ôîðìàò³â: <br /><br />%s.');
define('NO_FLOOD','Ïåðåïðîøóþ, Âè - àâòîð îñòàííüîãî êîìåíòàðÿ äî öüîãî ôîòî.<br /><br />Â³äðåäàãóéòå ïîïåðåäí³é êîìåíòàð, ÿêùî áàæàºòå éîãî âèïðàâèòè.');
define('REDIRECT_MSG','Âàñ áóäå ïåðåíàïðàâëåíî.<br /><br /><br />Òèñí³òü \'ÄÀË²\' ÿêùî ñòîð³íêà íå îíîâèòüñÿ àâòîìàòè÷íî');
define('UPL_SUCCESS','Âàø³ ôîòî äîëó÷åíî');

// lang_delete_php
define('CAPTION','Íàïèñ');
define('FS_PIC','ïîâíèé ðîçì³ð ôîòî');
define('DEL_SUCCESS','óñï³øíî âèäàëåíî');
define('NS_PIC','íîðìàëüíèé ðîçì³ð ôîòî');
define('ERR_DEL','âèäàëèòè íåìîæëèâî');
define('THUMB_PIC','ñëàéä');
//define('COMMENT', 'comment');
define('IM_IN_ALB','ôîòî â àëüáîì³');
define('ALB_DEL_SUCCESS','Àëüáîì \'%s\' âèäàëåíî');
define('ALB_MGR','Êåðóâàííÿ àëüáîìîì');
define('ERR_INVALID_DATA','Íåâ³ðí³ äàí³ îòðèìàíî â \'%s\'');
define('CREATE_ALB','Ñòâîðåííÿ àëüáîìó \'%s\'');
define('UPDATE_ALB','Îíîâëåííÿ àëüáîìó \'%s\' ç íàçâîþ \'%s\' òà ³íäåêñîì \'%s\'');
define('DEL_PIC','ÂÈÄÀËÈÒÈ ÔÎÒÎ');
define('DEL_ALB','Âèäàëèòè àëüáîì');
define('DEL_USER','Âèäàëèòè êîðèñòóâà÷à');
//define('ERR_UNKNOWN_USER', 'The selected user does not exist !');
define('COMMENT_DELETED','Êîìåíòàð áóëî âèäàëåíî');

// lang_display_image_php
define('PIC_CONFIRM_DEL','Âè ñïðàâä³ áàæàºòå âèäàëèòè öå ôîòî? \nÊîìåíòàð³ òåæ çíèêíóòü.');
define('DEL_THIS_PIC','DELETE THIS PICTURE');
define('SIZE','%s x %s ï³êñåë³â');
define('VIEWS','%s ðàç³â');
define('SLIDESHOW','Ñëàéä-øîó');
define('STOP_SLIDESHOW','ÇÓÏÈÍÈÒÈ ÑËÀÉÄ-ØÎÓ');
define('VIEW_FS','Click to view full size image');
define('EDIT_PIC','EDIT PICTURE INFO');

// lang_picinfo
define('PIC_INF_TITLE','²íôîðìàö³ÿ ïðî ôîòî');
define('PIC_INF_FILENAME','Ôàéë');
define('ALBUM_NAME','Album name');
define('PIC_INFO_RATING','Ðåéòèíã (%s ãîëîñ³â)');
define('KEYWORDS','Êëþ÷îâ³ ñëîâà');
define('PIC_INF_FILE_SIZE','File Size');
define('PIC_INF_DIMENSIONS','Ðîçì³ðè');
define('DISPLAYED','Ïåðåãëÿä³â');
define('CAMERA','Êàìåðà');
define('DATE_TAKEN','Date taken');
define('APERTURE','Ä³àôðàãìà');
define('EXPOSURE_TIME','Exposure time');
define('FOCAL_LENGTH','Focal length');
define('COMMENT','Êîìåíòàð');
define('ADDFAV','Äîëó÷èòè äî îáðàíîãî');
define('ADDFAVPHRASE','Îáðàí³');
define('REMFAV','Âèäàëèòè ç îáðàíèõ');
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
define('COM_EDIT_TITLE','Ðåäàãóâàòè');
define('CONFIRM_DELETE_COM','Are you sure you want to delete this comment ?');
define('ADD_YOUR_COMMENT','Êîìåíòóâàòè');
define('COM_NAME','²ìÿ');
//define('COMMENT', 'Comment');
define('YOUR_NAME','Àíîí³ìíî');

// lang_fullsize_popup
define('CLICK_TO_CLOSE','Íàòèñí³òü íà çîáðàæåííÿ, ùîá çàêðèòè â³êíî');

// lang_ecard_php
define('E_TITLE','Íàä³ñëàòè eCard');
define('INVALID_EMAIL','<b>Óâàãà</b> : íåïðàâèëüíà eMail àäðåñà !');
define('E_ECARD_TITLE','eCard â³ä %s äëÿ Âàñ');
define('VIEW_ECARD','ßêùî eCard â³äîáðàæåíî íåêîðåêòíî, íàòèñí³òü íà öå ïîñèëàííÿ');
define('VIEW_MORE_PICS','Íàòèñí³òü íà öå ïîñèëàííÿ äëÿ ïåðåãëÿäó âñ³õ ³íøèõ ôîòî!');
define('SEND_SUCCESS','Âàøó eÑard íàä³ñëàíî');
define('SEND_FAILED','Ñåðâåð íå â ñòàí³ íàä³ñëàòè Âàøó eCard...');
define('FROM','Â³ä');
define('_YOUR_NAME','Âàøå ³ìÿ');
define('YOUR_EMAIL','Âàøà eMail àäðåñà');
define('TO','Êîìó');
define('RCPT_NAME','²ìÿ îòðèìóâà÷à');
define('RCPT_EMAIL','eMail àäðåñà îòðèìóâà÷à');
define('GREETINGS','Â³òàííÿ');
define('MESSAGE','Ïîâ³äîìëåííÿ');
define('ECARD_LINK_CORRUPT','Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser');

// lang_editpics_php
define('PIC_INFO','²íôîðìàö³ÿ ïðî ôîòî');
define('ALBUM','Àëüáîì');
define('EDIT_TITLE','Íàçâà');
define('DESC','Îïèñ');
//define('KEYWORDS', 'Keywords');
define('PIC_INFO_STR','%sx%s - %sÊá - %s ïåðåãëÿä³â - %s ãîëîñ³â');
define('APPROVE','Ñõâàëèòè ôîòî');
define('POSTPONE_APP','Â³äõèëèòè ñõâàëåííÿ');
//define('DEL_PIC', 'Delete picture');
define('READ_EXIF','Read EXIF info again');
define('RESET_VIEW_COUNT','Reset view counter');
define('RESET_VOTES','Âèäàëèòè ãîëîñóâàííÿ');
define('DEL_COMM','Âèäàëèòè êîìåíòàð³');
define('UPL_APPROVAL','Ïåðåâ³ðêà äîëó÷åíü');
define('EDIT_PICS','Êîðåãóâàòè ôîòî');
define('SEE_NEXT','Ïåðåãëÿíóòè íàñòóïíå ôîòî');
define('SEE_PREV','Ïåðåãëÿíóòè ïîïåðåäíº ôîòî');
define('N_PIC','%s ôîòî');
define('N_OF_PIC_TO_DISP','Ê³ëüê³ñòü ôîòî íà ìîí³òîð³');
define('APPLY','Çàñòîñóâàòè');

// lang_groupmgr_php
define('GROUP_NAME','Íàçâà ãðóïè');
define('DISK_QUOTA','Äèñêîâèé ïðîñò³ð');
define('CAN_RATE','Â³äâ³äóâà÷³ ìîæóòü îö³íþâàòè ôîòî');
define('CAN_SEND_ECARDS','Ìîæóòü íàäñèëàòè eCards');
define('CAN_POST_COM','Ìîæóòü äîëó÷àòè êîìåíòàð³');
define('CAN_UPLOAD','Â³äâ³äóâà÷³ ìîæóòü äîëó÷àòè ôîòî');
define('CAN_HAVE_GALLERY','Ìîæóòü ìàòè îñîáèñò³ ãàëåðå¿');
//define('APPLY', 'Apply modifications');
define('CREATE_NEW_GROUP','Ñòâîðèòè íîâó ãðóïó');
define('DEL_GROUPS','Âèäàëèòè îáðàíó ãðóïó');
define('CONFIRM_DEL','Óâàãà! Ïî âèäàëåíí³ ãðóïè âñ³ êîðèñòóâà÷³ ç íå¿ áóäóòü ïåðåíåñåí³ â ãðóïó \'Çàðåºñòðîâàí³\'!\n\nÁàæàºòå ïðîäîâæóâàòè?');
define('GROUP_TITLE','Manage user groups');
define('APPROVAL_1','Ñõâàëåííÿ çàãàëüíèõ äîëó÷åíü(1)');
define('APPROVAL_2','Ñõâàëåííÿ îñîáèñòèõ äîëó÷åíü(2)');
define('NOTE1','<b>(1)</b> Äîëó÷åííÿ â çàãàëüíèé àëüáîì ïîòðåáóþòü çãîäè àäì³í³ñòðàòîðà');
define('NOTE2','<b>(2)</b> Äîëó÷åííÿ â àëüáîì êîðèñòóâà÷à ïîòðåáóþòü ïåðåâ³ðêè àäì³í³ñòðàòîðîì');
//define('NOTES', 'Notes');

// lang_index_php
define('WELCOME','ÑÊÎÁ!');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB','Are you sure you want to DELETE this album ? \nAll pictures and comments will also be deleted.');
//define('DELETE', 'DELETE');
define('MODIFY','Íàëàøòóâàííÿ');
//define('EDIT_PICS', 'EDIT PICS');

// lang_list_categories
define('HOME','Ïî÷àòîê');
define('STAT1','<b>[pictures]</b> ôîòî â <b>[albums]</b> àëüáîìàõ òà <b>[cat]</b> êàòåãîð³ÿõ ç <b>[comments]</b> êîìåíòàðÿìè, ïåðåãëÿíóòî <b>[views]</b> ðàç³â');
define('STAT2','<b>[pictures]</b> ôîòî â <b>[albums]</b> àëüáîìàõ ïåðåãëÿíóòî <b>[views]</b> ðàç³â');
define('XX_S_GALLERY','Ãàëåðåÿ %s\'à');
define('STAT3','<b>[pictures]</b> ôîòî â <b>[albums]</b> àëüáîìàõ <b>[comments]</b> êîìåíòàðÿìè, ïåðåãëÿíóòî <b>[views]</b> ðàç³â');

// lang_list_users
define('USER_LIST','Ñïèñîê êîðèñòóâà÷³â');
define('NO_USER_GAL','Òóò íåìàº ãàëåðåé êîðèñòóâà÷³â');
define('N_ALBUMS','%s àëüáîì³â');
define('N_PICS','%s ôîòî');

// lang_list_albums
define('N_PICTURES','%s ôîòî');
define('LAST_ADDED',', îñòàííº äîëó÷åíî %s');

// lang_modifyalb_php
define('UPD_ALB_N','Îíîâëåííÿ àëüáîìó %s');
define('GENERAL_SETTINGS','Çàãàëüí³ íàëàøòóâàííÿ');
define('ALB_TITLE','Íàçâà');
define('ALB_CAT','Êàòåãîð³ÿ');
define('ALB_DESC','Îïèñ');
define('ALB_THUMB','Ñëàéä');
define('ALB_PERM','Äîçâîëè äëÿ öüîãî àëüáîìó');
define('CAN_VIEW','Àëüáîì ìîæíà ïåðåãëÿíóòè');
define('MOD_CAN_UPLOAD','Visitors can upload pictures');
define('CAN_POST_COMMENTS','Â³äâ³äóâà÷³ ìîæóòü çàëèøàòè êîìåíòàð³');
define('MOD_CAN_RATE','Visitors can rate pictures');
define('USER_GAL','Ãàëåðåÿ êîðèñòóâà÷³â');
define('NO_CAT','* Íåìàº êàòåãîð³¿ *');
define('ALB_EMPTY','Àëüáîì ïîðîæí³é');
define('LAST_UPLOADED','Îñòàíí³ äîëó÷åííÿ');
define('PUBLIC_ALB','Çàãàëüíèé àëüáîì');
define('ME_ONLY','Ò³ëüêè ÿ');
define('OWNER_ONLY','Ò³ëüêè âëàñíèê àëüáîìó (%s)');
define('GROUPP_ONLY','×ëåíè ãðóïè \'%s\'');
define('ERR_NO_ALB_TO_MODIFY','Â áàç³ äàíèõ íåìàº àëüáîì³â, ÿê³ á Âè ìîãëè êîðåãóâàòè.');
define('UPDATE','Îíîâèòè àëüáîì');

// lang_rate_pic_php
define('ALREADY_RATED','Öå ôîòî Âè âæå îö³íèëè');
define('RATE_OK','Âàø ãîëîñ çàðàõîâàíî');

// lang_register_php
define('USERNAME','²ìÿ');
define('GROUP','Ãðóïà');
define('DISK_USAGE','Âèêîðèñòàííÿ äèñêà');
define('X_S_PROFILE','Ïðîô³ëü %s');

// lang_reviewcom_php
define('REVIEW_TITLE','Ïåðåâ³ðêà êîìåíòàð³â');
define('NO_COMMENT','Òóò íåìàº êîìåíòàð³â äëÿ ïåðåâ³ðêè');
define('N_COMM_DEL','%s êîìåíòàð³â âèäàëåíî');
define('N_COMM_DISP','Ê³ëüê³ñòü êîìåíòàð³â äëÿ ïîêàçó');
define('R_SEE_PREV','Ïåðåãëÿíóòè ïîïåðåäí³é');
define('R_SEE_NEXT','Ïåðåãëÿíóòè íàñòóïíèé');
define('R_DEL_COMM','Âèäàëèòè âèáðàí³ êîìåíòàð³');

// lang_search_php
define('S_SEARCH','Ïîøóê êîëåêö³¿ ôîòî');

// lang_search_new_php
define('PAGE_TITLE','Øóêàòè íîâ³ ôîòî');
define('SELECT_DIR','Âèáðàòè ïàïêó');
define('SELECT_DIR_MSG','Öÿ ôóíêö³ÿ äîçâîëÿº äîëó÷àòè ôîòî â \'ïàêåòíîìó ðåæèì³\'.<br /><br />Îáåð³òü ïàïêó äëÿ Âàøèõ ôîòî');
define('NO_PIC_TO_ADD','Íåìàº ôîòî äëÿ äîëó÷åííÿ');
define('NEED_ONE_ALBUM','Äëÿ âèêîèñòàííÿ ö³º¿ ôóíêö³¿ Âàì ïîòð³áåí ùîíàéìåíøå îäèí àëüáîì');
define('WARNING','Óâàãà');
define('CHANGE_PERM','ñêðèïò íå ìîæå çàïèñàòè äàí³ äî ïàïêè. Çì³í³òü ïðàâà äîñòóïó íà 755 ÷è 777 ïåðåä ñïðîáîþ äîëó÷èòè ôîòî!');
define('TARGET_ALBUM','<b>Ïåðåì³ñòèòè ôîòî ç &quot;</b>%s<b>&quot; äî </b>%s');
define('FOLDER','Ïàïêà');
define('IMAGE','Ôîòî');
//define('ALBUM', 'Album');
define('RESULT','Ðåçóëüòàò');
define('DIR_RO','ò³ëüêè äëÿ ÷èòàííÿ. ');
define('DIR_CANT_READ','Íåìîæëèâî ïðî÷èòàòè. ');
define('INSERT','Äîëó÷åííÿ íîâèõ ôîòî äî ãàëåðå¿');
define('LIST_NEW_PIC','Ñïèñîê íîâèõ ôîòî');
define('INSERT_SELECTED','Äîëó÷èòè âèáðàí³ ôîòî');
define('NO_PIC_FOUND','Íîâèõ ôîòî íå çíàéäåíî');
define('BE_PATIENT','Äëÿ äîëó÷åííÿ ôîòî ïîòð³áåí ÷àñ');
define('SN_NOTES','<ul><li><b>OK</b> : means that the picture was succesfully added<li><b>DP</b> : means that the picture is a duplicate and is already in the database<li><b>PB</b> : means that the picture could not be added, check your configuration and the permission of directories where the pictures are located<li>If the OK, DP, PB \'signs\' does not appear click on the broken picture to see any error message produced by PHP<li>If your browser timeout, hit the reload button</ul>');
define('SELECT_ALBUM','Select album');
define('NO_ALBUM','No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('UP_TITLE','Äîëó÷èòè ôîòî');
define('MAX_FSIZE','Ìàêñèìàëüíèé  ðîçì³ð ôàéëó: %s êá');
//define('ALBUM', 'Album');
define('PICTURE','Ôîòî');
define('PIC_TITLE','Íàçâà ôîòî');
define('DESCRIPTION','Îïèñ ôîòî');
define('UP_KEYWORDS','Êëþ÷îâ³ ñëîâà<br>');
define('ERR_NO_ALB_UPLOADABLES','Ïåðåïðîøóþ, òóò íåìàº àëüáîìó, êóäè á Âè ìîãëè äîëó÷èòè ôîòî');

// lang_usermgr_php
define('U_TITLE','Manage users');
//define('NAME_A', 'Name ascending');
//define('NAME_D', 'Name descending');
define('GROUP_A','Ãðóï³ [çðîñòàííÿ]');
define('GROUP_D','Ãðóï³ [ñïàäàííÿ]');
define('REG_A','Äàò³ ðåºñòðàö³¿ [çðîñòàííÿ]');
define('REG_D','Äàò³ ðåºñòðàö³¿ [ñïàäàííÿ]');
define('PIC_A','Ê³ëüêîñò³ çîáðàæåíü [çðîñòàííÿ]');
define('PIC_D','Ê³ëüêîñò³ çîáðàæåíü [ñïàäàííÿ]');
define('DISKU_A','Disk usage [çðîñòàííÿ]');
define('DISKU_D','Disk usage [ñïàäàííÿ]');
define('SORT_BY','Ñîðòóâàòè êîðèñòóâà÷³â ïî');
define('ERR_NO_USERS','Òàáëèöÿ êîðèñòóâà÷³â ïîðîæíÿ!');
define('ERR_EDIT_SELF','Âè íå ìîæåòå êîðåãóâàòè Âàø ïðîô³ëü, äëÿ öüîãî íàòèñí³òü ïîñèëàííÿ \'Ïðîô³ëü\'');
define('EDIT','ÊÎÐÅÃÓÂÀÒÈ');
//define('DELETE', 'DELETE');
define('U_NAME','²ìÿ êîðèñòóâà÷à');
//define('GROUP', 'Group');
define('INACTIVE','Íåàêòèâíèé');
//define('OPERATIONS', 'Operations');
define('PICTURES','Çîáðàæåííÿ');
define('DISK_SPACE','Äèñêîâèé ïðîñò³ð');
define('REGISTERED_ON','Çàðåºñòðîâàíî');
define('U_USER_ON_P_PAGES','%d êîðèñòóâà÷(³â) íà %d ñòîð³íö³(àõ)');
define('USER_CONFIRM_DEL','Áàæàºòå âèäàëèòè öüîãî êîðèñòóâà÷à? \nÉîãî çîáðàæåííÿ òà àëüáîìè òåæ çíèêíóòü.');
define('MAIL','ÏÎØÒÀ');
define('ERR_UNKNOWN_USER','Îáðàíèé êîðèñòóâà÷ íå ³ñíóº !');
define('MODIFY_USER','Çì³íà êîðèñòóâà÷à');
//define('NOTES', 'Notes');
define('NOTE_LIST','<li>ßêùî âè íå áàæàºòå çì³íþâàòè ïàðîëü, çàëèøòå ïîëå "ïàðîëü" ïîðîæí³ì');
define('PASSWORD','Ïàðîëü');
define('USER_ACTIVE_CP','User is active');
define('USER_GROUP_CP','User group');
define('USER_EMAIL','Email');
define('USER_WEB_SITE','Âåáñàéò');
define('CREATE_NEW_USER','Ñòâîðèòè íîâîãî êîðèñòóâà÷à');
define('USER_FROM','Çâ³äêè');
define('USER_INTERESTS','Çàö³êàâëåííÿ');
define('USER_OCC','Ðîáîòà');

// lang_util_php
define('UTIL_TITLE','Çì³íèòè ðîçì³ð');
define('WHAT_IT_DOES','Ùî öå äàñòü');
define('WHAT_UPDATE_TITLES','Îíîâèòè íàçâó ç ³ìåí³ ôàéëó');
define('WHAT_DELETE_TITLE','Âèäàëèòè íàçâè');
define('WHAT_REBUILD','Ïåðåøèêóâàòè åñê³çè òà çì³íèòè ðîçì³ð ôîòî');
define('WHAT_DELETE_ORIGINALS','Çàì³íèòè îðèã³íàëè ôîòêàìè ³ç çì³íåíèì ðîçì³ðîì.');
define('U_FILE','Ôàéë');
define('TITLE_SET_TO','âñòàíîâëåíî íàçâó');
define('SUBMIT_FORM','â³äïðàâèòè');
define('UPDATED_SUCCESFULLY','îíîâëåííÿ â³äáóëîñü');
define('ERROR_CREATE','ÏÎÌÈËÊÀ ñòâîðåííÿ');
define('CONTIN','Ó ïðîöåñ³ áàãàòî çîáðàæåíü');
define('MAIN_SUCCESS','Ôàéë %s âèêîðèñòîâóâàâñÿ ÿê ãîëîâíå çîáðàæåííÿ');
define('ERROR_RENAME','Ïîìèëêà ïåðåéìåíóâàííÿ %s â %s');
define('ERROR_NOT_FOUND','Ôàéë %s íå çíàéäåíî');
define('U_BACK','íà ãîëîâíó');
define('THUMBS_WAIT','Îíîâëåííÿ åñê³ç³â àáî çì³íà ðîçì³ð³â, ïðîøó çà÷åêàòè ...');
define('THUMBS_CONTINUE_WAIT','Ïðîäîâæåííÿ Îíîâëåííÿ åñê³ç³â àáî çì³íè ðîçì³ð³â ...');
define('TITLES_WAIT','Îíîâëåííÿ íàçâ, ïðîøó çà÷åêàòè ...');
define('DELETE_WAIT','Âèäàëåííÿ íàçâ, ïðîøó çà÷åêàòè ...');
define('REPLACE_WAIT','Âèäàëåííÿ îðèã³íàë³â òà çàì³íà çì³íåíèìè çîáðàæåííÿìè, ïðîøó çà÷åêàòè ...');
define('INSTRUCTION','²íñòðóêö³¿');
define('INSTRUCTION_ACTION','Îáåð³òü ä³þ');
define('INSTRUCTION_PARAMETER','Âñòàíîâèòè ïàðàìåòðè');
define('INSTRUCTION_ALBUM','Îáðàòè àëüáîì');
define('INSTRUCTION_PRESS','Íàòèñí³òü %s');
define('U_UPDATE','Îíîâëåííÿ åñê³ç³â àáî ðîçì³ð³â ôîòî');
define('UPDATE_WHAT','Ùî ìàº áóòè îíîâëåíå');
define('UPDATE_THUMB','Ò³ëüêè ñëàéäè');
define('UPDATE_PIC','Ò³ëüêè çì³íà ðîçì³ð³â');
define('UPDATE_BOTH','Ñëàéäè òà çì³íà ðîçì³ð³â');
define('UPDATE_NUMBER','Ê³ëüê³ñòü êîðåãîâàíèõ çîáðàæåíü');
define('UPDATE_OPTION','(ßêùî ó Âàñ ïðîáëåìè ç timeout, ñïðîáóéòå íàëàùòóâàòè îïö³þ çíèçó)');
define('FILENAME_TITLE','Íàçâà ôàéëó? Íàçâà çîáðàæåííÿ');
define('FILENAME_HOW','ßê ìàº áóòè çì³íåíà íàçâà çîáðàæåííÿ');
define('FILENAME_REMOVE','Âèäàëèòè .jpg ³ çàì³íèòè _ (ï³äêðåñëåííÿ) ç ïðîá³ëàìè');
define('FILENAME_EURO','Çì³íèòè 2003_11_23_13_20_20.jpg íà 23/11/2003 13:20');
define('FILENAME_US','Çì³íèòè 2003_11_23_13_20_20.jpg íà 11/23/2003 13:20');
define('FILENAME_TIME','Çì³íèòè 2003_11_23_13_20_20.jpg íà 13:20');
define('UT_DELETE','Âèäàëèòè íàçâó çîáðàæåííÿ òà îðèã³íàëüíèé ðîçì³ð ôîòî');
define('DELETE_TITLE','Âèäàëèòè íàçâó çîáðàæåííÿ');
define('DELETE_ORIGINAL','Âèäàëèòè îðèã³íàëüíèé ðîçì³ð çîáðàæåííÿ');
define('DELETE_REPLACE','Çì³íèòè îðèã³íàëüí³ ôîòî ôîòêàìè ç³ çì³íåíèì ðîçì³ðîì.');
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
