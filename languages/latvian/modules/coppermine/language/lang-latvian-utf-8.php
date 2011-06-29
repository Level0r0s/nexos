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
  $Source: /cvs/languages/latvian/modules/coppermine/language/lang-latvian-utf-8.php,v $
  $Revision: 1.2 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:37 $
****************************************************************************/
global $module_name, $lang_usermgr_php,$lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;  
define('PIC_VIEWS','Views');
define('PIC_VOTES','Votes');
define('PIC_COMMENTS','Comments');

// lang_translation_info
define('LANG_NAME_ENGLISH','Latvian');
define('LANG_NAME_NATIVE','Latviski');
define('LANG_COUNTRY_CODE','lv');
define('TRANS_NAME','Kaspars Priedols');
define('TRANS_EMAIL','house@tvertne.nu');
define('TRANS_WEBSITE','http://foto.tvertne.nu/');
define('TRANS_DATE','2003-10-15');
define('CHARSET','UTF-8');
define('TEXT_DIR','ltr');
define('YES','Jâ');
define('NO','Nç');
define('BACK','Atgriezties');
define('CONTINU','Finish');
define('INFO','Informâcija');
//define('_ERROR', 'Error'); //already in main lang file
define('ALBUM_DATE_FMT','%d/%m/%Y %H:%M');
define('LASTCOM_DATE_FMT','%d/%m/%Y %H:%M');
define('LASTUP_DATE_FMT','%d/%m/%Y %H:%M');
define('REGISTER_DATE_FMT','%d/%m/%Y %H:%M');
define('LASTHIT_DATE_FMT','%d/%m/%Y %H:%M');
define('COMMENT_DATE_FMT','%d/%m/%Y %H:%M');

// lang_meta_album_names
define('RANDOM','Izlases veida attçli');
define('LASTUP','Jaunâkie papildinâjumi');
define('LASTUPBY','My Last Additions');
define('LASTALB','Pçdçjie atjaunotie albumi');
define('LASTCOM','Jaunâkie komentâri');
define('LASTCOMBY','My Last comments');
define('TOPN','Skatîtâkie');
define('TOPRATED','Vispopulârâkie');
define('LASTHITS','Pçdçjie skatîtie');
define('SEARCH','Meklçt attçlu kolekcijâ');
define('FAVPICS','Attçlu favorîti');

// lang_errors
define('ACCESS_DENIED','Tev nav pieejas tiesîbu ðai lapai.');
define('PERM_DENIED','Tev nav tiesîbu veikt ðâdu darbîbu.');
define('PARAM_MISSING','Tika izsaukta komanda bez parametriem.');
define('NON_EXIST_AP','Izvçlçtais albums/attçls neeksistç!');
define('QUOTA_EXCEEDED','Nav vietas uz diska.<br /><br />Tev ir pieðíirts ierobeþojums [quota]K, bet paðlaik jau aizòemti [space]K, tâpçc ðî attçla pievienoðana nav ieteicama (tiks pârsniegts ierobeþojums).');
define('GD_FILE_TYPE_ERR','Izmantojot GD attçlu bibliotçku, atïauts izmantot tikai JPEG un PNG formâtus.');
define('INVALID_IMAGE','Attçls bojâts vai arî sistçmas GD attçlu bibliotçka nespçj to atkodçt.');
define('RESIZE_FAILED','Nav iespçjams izveidot mazo attçlu vai izmainît tâ izmçrus.');
define('NO_IMG_TO_DISPLAY','Nav attçla');
define('NON_EXIST_CAT','Izvçlçtâ sadaïa neeksistç');
define('ORPHAN_CAT','Ðai apakðsadaïai nav sadaïas, kam tâ piederçtu, lûdzu izmanto sadaïu menedþeri, lai atrisinâtu problçmu.');
define('DIRECTORY_RO','Direktorijâ \'%s\' nav atïauts rakstît, tâpçc attçlus nav iespçjams izdzçst.');
define('NON_EXIST_COMMENT','Izvçlçtais komentârs neeksistç.');
define('PIC_IN_INVALID_ALBUM','Attçls atrodas neeksistçjoðâ albumâ (%s)!?');
define('BANNED','Pieeja foto galerijai aizliegta.');
define('NOT_WITH_UDB','Ðî iespçja ir atslçgta, jo tai jâbût integrçtai kopâ ar foruma programmatûru. Trûkst attiecîgâs konfigurâcijas, vai nepiecieðams uzinstalçt forumu.');
define('MEMBERS_ONLY','This function is for members only, please join.');
define('MUSTBE_GOD','This function is only for the site admin. You must be logged in as superadmin, god account to access this function');
define('NO_IMG_TO_APPROVE','No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE','Uz albumu sarakstu');
define('ALB_LIST_LNK','Albumu saraksts');
define('MY_GAL_TITLE','Uz manu galeriju');
define('MY_GAL_LNK','Mana galerija');
define('MY_PROF_LNK','Profails');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE','Pârslçgties Administratora reþîmâ');
define('ADM_MODE_LNK','Administratora reþîms');
define('USR_MODE_TITLE','Pârslçgties lietotâja reþîmâ');
define('USR_MODE_LNK','Lietotâja reþîms');
define('UPLOAD_PIC_TITLE','Ielikt attçlu albumâ');
define('UPLOAD_PIC_LNK','Pievienot attçlu');
define('REGISTER_TITLE','Izveidot kontu');
define('REGISTER_LNK','Reìistrçties');
define('LOGIN_LNK','Pieslçgties');
define('LOGOUT_LNK','Beigt darbu');
define('LASTUP_LNK','Jaunâkie attçli');
define('LASTUP_TITLE','Recently uploaded pictures');
define('TOPN_TITLE','Pictures that have been seen most');
define('TOPN_LNK','Skatîtâkie attçli');
define('TOPRATED_TITLE','Top rated pictures');
define('TOPRATED_LNK','Top rated');
define('SEARCH_TITLE','Search Photo Collection');
define('SEARCH_LNK','Meklçt');
define('FAV_TITLE','My Favorites');
define('FAV_LNK','Favorîti');
define('HELP_TITLE','HELP');

// lang_gallery_admin_menu
define('UPL_APP_LNK','Apstiprinât');
define('CONFIG_LNK','Konfigurçt');
define('ALBUMS_LNK','Albumi');
define('CATEGORIES_LNK','Sadaïas');
define('USERS_LNK','Lietotâji');
define('GROUPS_LNK','Grupas');
define('COMMENTS_LNK','Komentâri');
define('SEARCHNEW_LNK','Attçlu grupas...');
define('UTIL_LNK','Mainît attçla izmçrus');
define('BAN_LNK','Aiziegt piekïuvi');

// lang_user_admin_menu
define('ALBMGR_LNK','Izveidot manu albumu');
define('MODIFYALB_LNK','Mainît manu albumu');
//define('MY_PROF_LNK', 'My profile');

// lang_cat_list
define('CATEGORY','Sadaïa');
define('ALBUMS','Albumi');
//define('PICTURES', 'Pictures');

// lang_album_list
define('ALBUM_ON_PAGE','%d albums(-i) %d lapâ(s)');
// lang_thumb_view
define('DATE','LAIKS');
define('NAME','Lietotâjs');
define('TITLE','Attçlu zimçri');
define('SORT_DA','pçc datuma augoði');
define('SORT_DD','pçc datuma dilstoði');
define('SORT_NA','pçc nosaukuma augoði');
define('SORT_ND','pçc nosaukuma dilstoði');
define('SORT_TA','pçc virsraksta augoði');
define('SORT_TD','Sort by title descending');
define('PIC_ON_PAGE','%d attçls(-i) %d lapâ(s)');
define('USER_ON_PAGE','%d lietotâjs(-i) %d lapâ(s)');
define('SORT_RA','Sort by rating ascending');
define('SORT_RD','Sort by rating descending');
define('THUMB_RATING','RATING');
define('SORT_TITLE','Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE','Atgriezties uz attçlu indeksu');
define('PIC_INFO_TITLE','Râdît/paslçpt informâciju par attçlu');
define('SLIDESHOW_TITLE','Slideshow');
define('SLIDESHOW_DISABLED','e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG','This function is for members only, please join.');
define('ECARD_TITLE','Sveiciens no %s');
define('ECARD_DISABLED','e-kartiòu sûtîðana atslçgta');
define('ECARD_DISABLED_MSG','Tev nav pietiekamu tiesîbu, lai sûtîtu e-kartiòas');
define('PREV_TITLE','Iepriekðçjais attçls');
define('NEXT_TITLE','Nâkamais attçls');
define('PIC_POS','ATTÇLS %s/%s');
define('NO_MORE_IMAGES','There are no more images in this galley');
define('NO_LESS_IMAGES','This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC','Novçrtçt ');
define('NO_VOTES','(novçrtçjuma nav)');
define('RATING','Vçrtçjums (%s balsis)');
define('RUBBISH','Mçsls');
define('POOR','Vâji');
define('FAIR','Viduvçji');
define('GOOD','Labi');
define('EXCELLENT','Teicami');
define('GREAT','Lieliski');

// lang_cpg_die
//define('INFO', 'Information');
//define('ERROR', 'Error');
define('_CRITICAL_ERROR','Critical error');
define('FILE','Fails');
define('LINE','Rinda: ');

// lang_display_thumbnails
define('FILENAME','Attçls');
define('FILESIZE','Lielums : ');
define('DIMENSIONS','Izmçrs');
define('DATE_ADDED','Pievienots : ');

// lang_get_pic_data
define('N_COMMENTS','komentâri: <b>%s</b>');
define('N_VIEWS','skatîjumi: <b>%s</b>');
define('N_VOTES','vçrtçjumi: <b>%s</b>');


// lang_albmgr_php
define('ALB_NEED_NAME','Kâ sauksim albumu?');
define('CONFIRM_MODIFS','Apstiprinât veiktâs izmaiòas?');
define('NO_CHANGE','Nekas nav mainîts!');
define('NEW_ALBUM','Jauns albums');
define('CONFIRM_DELETE1','Tieðâm dzçst ðo albumu?');
define('CONFIRM_DELETE2','\nVisi attçli un komentâri tajâ tiks izdzçsti!');
define('SELECT_FIRST','Vispirms jâizvçlas albumu');
define('ALB_MRG','Albumu menedþeris');
define('MY_GALLERY','* Mana galerija *');
define('NO_CATEGORY','* Mana sadaïa *');
define('DELETE','Attçlu virsrakstu un attçlu dzçðana');
define('NEW','Jauns');
define('APPLY_MODIFS','Apstiprinât izmaiòas');
define('SELECT_CATEGORY','Izvçlçties sadaïu');

// lang_catmgr_php
define('MISS_PARAM','Komandas \'%s\' izpildîðanai trûkst nepiecieðamie parametri!');
define('UNKNOWN_CAT','Izvçlçtâ sadaïa datu bâzç neeksistç');
define('USERGAL_CAT_RO','Lietotâja galerijas sadaïa nevar tikt dzçsta!');
define('MANAGE_CAT','Administrçt sadaïas');
define('CONFIRM_DELETE_CAT','Are you sure you want to DELETE this category');
//define('CATEGORY', 'Category');
define('OPERATIONS','Darbîbas');
define('MOVE_INTO','Pârvietot uz');
define('UPDATE_CREATE','Modificçt/izveidot sadaïu');
define('PARENT_CAT','Pieder sadaïai');
define('CAT_TITLE','Sadaïas virsraksts');
define('CAT_DESC','Sadaïas apraksts');

// lang_config_php
define('CONFIG_TITLE','Configuration');
define('RESTORE_CFG','Atjaunot noklusçtâs vçrtîbas');
define('SAVE_CFG','Saglabât jaunos uzstâdîjumus');
define('NOTES','Piezîmes');
//define('INFO', 'Information');
define('UPD_SUCCESS','Coppermine konfigurâcija saglabâta');
define('RESTORE_SUCCESS','Coppermine noklusçtâ konfigurâcija uzstâdîta');
define('NAME_A','Vârds augoði');
define('NAME_D','Vârds dilstoði');
define('TITLE_A','Virsraksts augoði');
define('TITLE_D','Virsraksts dilstoði');
define('DATE_A','Datums augoði');
define('DATE_D','Datums dilstoði');
define('RATING_A','Rating ascending');
define('RATING_D','Rating descending');
define('TH_ANY','Max Aspect');
define('TH_HT','Height');
define('TH_WD','Width');


// lang_db_input_php
define('EMPTY_NAME_OR_COM','Ja nebûs vârds un komentâra teksts, nekas nesanâks');
define('COM_ADDED','Komentârs pievienots');
define('ALB_NEED_TITLE','Kâds ir albuma virsraksts (nosaukums)?');
define('NO_UDP_NEEDED','Izmaiòas nav nepiecieðamas.');
define('ALB_UPDATED','Albums modificçts');
define('UNKNOWN_ALBUM','Izvçlçtais albums neeksistç vai arî nav tiesîbu tajâ pievienot attçlus');
define('NO_PIC_UPLOADED','Attçls netika uzlikts!<br /><br />Vai uz servera ir uzlikta atïauja ðâdâm operâcijâm?');
define('ERR_MKDIR','Direktorija %s NEtika izveidota!');
define('DEST_DIR_RO','Nav tiesîbu veikt ierakstu direktrijâ %s!');
define('ERR_MOVE','Nav iespçjams pârvietot %s uz %s !');
define('ERR_FSIZE_TOO_LARGE','Uzliekamâ attçla izmçrs pârsniedz max atïauto (max atïautais ir %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE','Uzliekamâ attçla faila izmçrs pârsniedz max atïauto (max atïautais ir %s KB) !');
define('ERR_INVALID_IMG','Uzliekamais fails nav klasificçjams kâ attçls!');
define('ALLOWED_IMG_TYPES','Tu drîksti uzlikt %s attçlus.');
define('ERR_INSERT_PIC','Attçls \'%s\' nevar tikt pievienots ');
//define('INFO', 'Information');
define('ERR_COMMENT_EMPTY','Nav komentâra!');
define('ERR_INVALID_FEXT','Atïauti faili ar ðâdiem paplaðinâjumiem : <br /><br />%s.');
define('NO_FLOOD','Atvaino, bet tieði tu arî esi pçdçjâ iesûtîtâ komentâra autors.<br /><br />Modificç sava pçdçjâ iesûtîtâ komentâra tekstu');
define('REDIRECT_MSG','Notiek pâradresâcija.<br /><br /><br />Spied uz \'TURPINÂT\', ja lapa nepârlâdçjas');
define('UPL_SUCCESS','Attçls veiksmîgi pievienots');

// lang_delete_php
define('CAPTION','Teksts');
define('FS_PIC','pilnâ izmçra attçls');
define('DEL_SUCCESS','veiksmîgi izdzçsts');
define('NS_PIC','normâla izmçra attçls');
define('ERR_DEL','nevar tikt izdzçsts');
define('THUMB_PIC','mazais attçls');
//define('COMMENT', 'comment');
define('IM_IN_ALB','attçls albumâ');
define('ALB_DEL_SUCCESS','Albums \'%s\' izdzçsts');
define('ALB_MGR','Albuma menedþeris');
define('ERR_INVALID_DATA','Saòemta nekorekta informâcija \'%s\'');
define('CREATE_ALB','Tiek veidots albums \'%s\'');
define('UPDATE_ALB','Tiek modificçts albums \'%s\' ar virsrakstu \'%s\' un indeksu \'%s\'');
define('DEL_PIC','Dzçst attçlu');
define('DEL_ALB','Dzçst albumu');
define('DEL_USER','Dzçst lietotâju');
//define('ERR_UNKNOWN_USER', 'The selected user does not exist !');
define('COMMENT_DELETED','Komentârs veiksmîgi izdzçsts');

// lang_display_image_php
define('PIC_CONFIRM_DEL','Are you sure you want to DELETE this picture ? \nComments will also be deleted.');
define('DEL_THIS_PIC','DELETE THIS PICTURE');
define('SIZE','%s x %s px');
define('VIEWS','%s reizes');
define('SLIDESHOW','Slaidðovs');
define('STOP_SLIDESHOW','APSTÂDINÂT SLAIDÐOVU');
define('VIEW_FS','Uzspied, lai redzçtu pilna izmçra attçlu');
define('EDIT_PIC','EDIT PICTURE INFO');

// lang_picinfo
define('PIC_INF_TITLE','Picture information');
define('PIC_INF_FILENAME','Filename');
define('ALBUM_NAME','Album name');
define('PIC_INFO_RATING','Rating (%s votes)');
define('KEYWORDS','Atslçgas vârdi (atdalît ar atstarpçm)');
define('PIC_INF_FILE_SIZE','File Size');
define('PIC_INF_DIMENSIONS','Dimensions');
define('DISPLAYED','Attçlots');
define('CAMERA','Kamera');
define('DATE_TAKEN','Date taken');
define('APERTURE','Objektîva diametrs');
define('EXPOSURE_TIME','Exposure time');
define('FOCAL_LENGTH','Focal length');
define('COMMENT','Komentârs');
define('ADDFAV','Uz favorîtiem');
define('ADDFAVPHRASE','Favorîti');
define('REMFAV','Dzçst no favorîtiem');
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
define('COM_EDIT_TITLE','Edit this comment');
define('CONFIRM_DELETE_COM','Are you sure you want to delete this comment ?');
define('ADD_YOUR_COMMENT','Pievienot komentâru');
define('COM_NAME','Name');
//define('COMMENT', 'Comment');
define('YOUR_NAME','Vârds');

// lang_fullsize_popup
define('CLICK_TO_CLOSE','Uzklikðíini uz attçla, lai aizvçrtu ðo logu');

// lang_ecard_php
define('E_TITLE','Send an e-card');
define('INVALID_EMAIL','<b>UZMANÎBU</b> : kïûdaina adrese!');
define('E_ECARD_TITLE','An e-card from %s for you');
define('VIEW_ECARD','Ðo sveicienu var redzçt arî sekojoða adresç');
define('VIEW_MORE_PICS','Citi forði attçli...');
define('SEND_SUCCESS','E-kartiòa nosûtîta');
define('SEND_FAILED','Atvaino, serveris nevar nosûtît tavu E-kartiòu...');
define('FROM','No kâ');
define('_YOUR_NAME','Your name');
define('YOUR_EMAIL','E-pasta adrese');
define('TO','Kam');
define('RCPT_NAME','Saòemçja vârds');
define('RCPT_EMAIL','Saòçmçja e-pasta adrese');
define('GREETINGS','Sveiciens');
define('MESSAGE','Pilnais teksts');
define('ECARD_LINK_CORRUPT','Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser');

// lang_editpics_php
define('PIC_INFO','Attçla&nbsp;dati');
define('ALBUM','Albums');
define('EDIT_TITLE','Modificçt komentâru');
define('DESC','Apraksts');
//define('KEYWORDS', 'Keywords');
define('PIC_INFO_STR','%sx%s - %sKB - %s skatîjumi - %s balsis');
define('APPROVE','Apstiprinât attçla pievienoðanu');
define('POSTPONE_APP','Noraidît attçla pievienoðanu');
//define('DEL_PIC', 'Delete picture');
define('READ_EXIF','Read EXIF info again');
define('RESET_VIEW_COUNT','Nodzçst skatîjumi skaitîtâju');
define('RESET_VOTES','Nodzçst balsojumu skaitu');
define('DEL_COMM','Dzçst izvçlçtos komentârus');
define('UPL_APPROVAL','Uzlikðanas apstiprinâjums');
define('EDIT_PICS','MODIFICÇT ATTÇLUS');
define('SEE_NEXT','Nâkamie');
define('SEE_PREV','Iepriekðçjie');
define('N_PIC','%s attçli');
define('N_OF_PIC_TO_DISP','Cik attçlus atspoguïot');
define('APPLY','Apstiprinât izmaiòas');

// lang_groupmgr_php
define('GROUP_NAME','Grupa');
define('DISK_QUOTA','Kvota (atmiòas ierobeþojumi)');
define('CAN_RATE','Apmeklçtâji drîkst vçrtçt attçlus');
define('CAN_SEND_ECARDS','Drîkst sûtît e-kartiòas');
define('CAN_POST_COM','Drîkst komentçt');
define('CAN_UPLOAD','Apmeklçtâjie drîkst pievienot attçlus');
define('CAN_HAVE_GALLERY','Drîkst bût personîga galerija');
//define('APPLY', 'Apply modifications');
define('CREATE_NEW_GROUP','Izveidot jaunu grupu');
define('DEL_GROUPS','Dzçst grupu(-as)');
define('CONFIRM_DEL','Tieðâm DZÇST ðo lietotâju? \nVisi viòa attçli un komentâri arî tiks izdzçsti');
define('GROUP_TITLE','Manage user groups');
define('APPROVAL_1','Publisks uzlikðanas apstiprinâjums (1)');
define('APPROVAL_2','Privâts uzlikðanas apstiprinâjums (2)');
define('NOTE1','<b>(1)</b> Attçlu uzlikðanai publiskâ albûmâ ir nepiecieðama administratora atïauja');
define('NOTE2','<b>(2)</b> Attçlu pievienoðanai albumâ, kas pieder ðim lietotâjam, nepiecieðama administratora atïauja');
//define('NOTES', 'Notes');

// lang_index_php
define('WELCOME','Laipni lûdzam!');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB','Are you sure you want to DELETE this album ? \nAll pictures and comments will also be deleted.');
//define('DELETE', 'DELETE');
define('MODIFY','UZSTÂDÎJUMI');
//define('EDIT_PICS', 'EDIT PICS');

// lang_list_categories
define('HOME','Galvenâ lapa');
define('STAT1','attçli: <b>[pictures]</b> | albumi: <b>[albums]</b> | sadaïas: <b>[cat]</b> | komentâri: <b>[comments]</b> | <b>skatîts [views]</b> reizes');
define('STAT2','attçli: <b>[pictures]</b> | albumi: <b>[albums]</b> | skatîti <b>[views]</b> reizes');
define('XX_S_GALLERY','Autors %s');
define('STAT3','<b>[pictures]</b> attçli | <b>[albums]</b> albumi | <b>[comments]</b> komentâri | skatîti <b>[views]</b> reizes');

// lang_list_users
define('USER_LIST','Lietotâju saraksts');
define('NO_USER_GAL','Nav lietotâju galerijas');
define('N_ALBUMS','albumi: <b>%s</b>');
define('N_PICS','attçli: <b>%s</b>');

// lang_list_albums
define('N_PICTURES','<b>%s</b> attçli');
define('LAST_ADDED',', pçdçjais pievienots <b>%s</b>');

// lang_modifyalb_php
define('UPD_ALB_N','Modificçt albumu %s');
define('GENERAL_SETTINGS','Galvenie uzstâdîjumi');
define('ALB_TITLE','Albuma virsraksts');
define('ALB_CAT','Sadaïa');
define('ALB_DESC','Albuma apraksts');
define('ALB_THUMB','Albuma mazais attçls');
define('ALB_PERM','Albuma lietotâju tiesîbas');
define('CAN_VIEW','Albumu var skatîties');
define('MOD_CAN_UPLOAD','Visitors can upload pictures');
define('CAN_POST_COMMENTS','Apmeklçtâji drîkst komentçt');
define('MOD_CAN_RATE','Visitors can rate pictures');
define('USER_GAL','Lietotâja galerija');
define('NO_CAT','* Kategorijas nav *');
define('ALB_EMPTY','Albums ir tukðs');
define('LAST_UPLOADED','Pçdejoreiz uzlikts attçls');
define('PUBLIC_ALB','Ikviens (publiskais albums)');
define('ME_ONLY','Tikai es');
define('OWNER_ONLY','Tikai albuma îpaðnieks (%s)');
define('GROUPP_ONLY','Tikai \'%s\' grupâ esoðie');
define('ERR_NO_ALB_TO_MODIFY','Tev nav tiesîbu modificçt albumus.');
define('UPDATE','Modificç mazos un/vai normâlos attçlus');

// lang_rate_pic_php
define('ALREADY_RATED','Atvaino, bet tu jau esi iesniedzis savu vçrtçjumu');
define('RATE_OK','Vçrtçjums pieòemts');

// lang_register_php
define('USERNAME','Lietotâja vârds');
define('GROUP','Grupa');
define('DISK_USAGE','Diska izmantoðana');
define('X_S_PROFILE','%s : profails');

// lang_reviewcom_php
define('REVIEW_TITLE','Review comments');
define('NO_COMMENT','Komentâru nav');
define('N_COMM_DEL','%s komentâri izdzçsti');
define('N_COMM_DISP','Cik komentârus atspoguïot');
define('R_SEE_PREV','See previous');
define('R_SEE_NEXT','See next');
define('R_DEL_COMM','Delete selected comments');

// lang_search_php
define('S_SEARCH','Search the image collection');

// lang_search_new_php
define('PAGE_TITLE','Meklçt jaunus attçlus');
define('SELECT_DIR','Izvçlçties direktoriju');
define('SELECT_DIR_MSG','Ðî funkcija ïauj pievienot daudzus attçlus vienlaikus, ja tie iepriekð uzlikti ar FTP.<br /><br />Izvçlies direktoriju, kur tika uzlikti attçli');
define('NO_PIC_TO_ADD','Nav attçlu, ko varçtu pievienot');
define('NEED_ONE_ALBUM','Lai izmantotu ðo funkciju, nepiecieðams vismaz viens albums');
define('WARNING','Uzmanîbu');
define('CHANGE_PERM','nav pieeja direktorijai, tai jâizmaina tiesîbas (chmod) no 755 uz 777, lai varçtu pievienot attçlus!');
define('TARGET_ALBUM','<b>Ievietot attçlus &quot;</b>%s<b>&quot; </b>%s');
define('FOLDER','Direktorija');
define('IMAGE','Attçls');
//define('ALBUM', 'Album');
define('RESULT','Rezultâti');
define('DIR_RO','Nav rakstîðanas tiesîbu. ');
define('DIR_CANT_READ','Nav lasîðanas tiesîbu. ');
define('INSERT','Jaunu attçlu pievienoðana');
define('LIST_NEW_PIC','Jauno attçlu saraksts');
define('INSERT_SELECTED','Pievienot izvçlçtos attçlus');
define('NO_PIC_FOUND','Jauni attçli netika atrasti');
define('BE_PATIENT','Lûdzu esiet pacietîgi, kamçr tiek pievienoti jaunie attçli');
define('SN_NOTES','<ul><li><b>OK</b> : means that the picture was succesfully added<li><b>DP</b> : means that the picture is a duplicate and is already in the database<li><b>PB</b> : means that the picture could not be added, check your configuration and the permission of directories where the pictures are located<li>If the OK, DP, PB \'signs\' does not appear click on the broken picture to see any error message produced by PHP<li>If your browser timeout, hit the reload button</ul>');
define('SELECT_ALBUM','Izvçlies albumu');
define('NO_ALBUM','No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('UP_TITLE','Upload picture');
define('MAX_FSIZE','Max pievienojamâ faila lielums %s KB');
//define('ALBUM', 'Album');
define('PICTURE','Attçls');
define('PIC_TITLE','Attçla virsraksts');
define('DESCRIPTION','Attçla apraksts');
define('UP_KEYWORDS','Keywords (separate with spaces)');
define('ERR_NO_ALB_UPLOADABLES','Atvaino, nav neviena albuma, kurâ tu varçtu ievietot savus attçlus');

// lang_usermgr_php
define('U_TITLE','Manage users');
//define('NAME_A', 'Name ascending');
//define('NAME_D', 'Name descending');
define('GROUP_A','Grupa augoði');
define('GROUP_D','Grupa dilstoði');
define('REG_A','Reg datums augoði');
define('REG_D','Reg datums dilstoði');
define('PIC_A','Attçlu skaits augoði');
define('PIC_D','Attçlu skaits dilstoði');
define('DISKU_A','Diska atmiòa augoði');
define('DISKU_D','Diska atmiòa dilstoði');
define('SORT_BY','Kârtot');
define('ERR_NO_USERS','Lietotâju tabulâ nav datu!');
define('ERR_EDIT_SELF','Nemaini te savu profailu, tam izmanto \'Mans profails\'');
define('EDIT','MODIFICÇT');
//define('DELETE', 'DELETE');
define('U_NAME','User name');
//define('GROUP', 'Group');
define('INACTIVE','Neaktîvs');
//define('OPERATIONS', 'Operations');
define('PICTURES','Attçli');
define('DISK_SPACE','Izmantotâ atmiòa / Ierobeþojums');
define('REGISTERED_ON','Reìistrçts');
define('U_USER_ON_P_PAGES','%d lietotâji %d lapâ(s)');
define('USER_CONFIRM_DEL','Are you sure you want to DELETE this user ? \nAll his pictures and albums will also be deleted.');
define('MAIL','MAIL');
define('ERR_UNKNOWN_USER','Izvçlçtais lietotâjs neeksistç!');
define('MODIFY_USER','Mainît datus');
//define('NOTES', 'Notes');
define('NOTE_LIST','<li>Ja nevçlies mainît paroli, atstâj paroles lauku tukðu');
define('PASSWORD','Parole');
define('USER_ACTIVE_CP','User is active');
define('USER_GROUP_CP','User group');
define('USER_EMAIL','Emails');
define('USER_WEB_SITE','Mâjas lapa');
define('CREATE_NEW_USER','Izveidot');
define('USER_FROM','User location');
define('USER_INTERESTS','Intereses');
define('USER_OCC','User occupation');

// lang_util_php
define('UTIL_TITLE','Resize pictures');
define('WHAT_IT_DOES','Funkcijas');
define('WHAT_UPDATE_TITLES','Virsraksti tiek òemti no failu nosaukumiem');
define('WHAT_DELETE_TITLE','Dzçst virsrakstus');
define('WHAT_REBUILD','Pârveidot attçlus');
define('WHAT_DELETE_ORIGINALS','Dzçst oriìinâlos attçlus un nomainît tos ar samazinâtajiem/palielinâtajiem');
define('U_FILE','File');
define('TITLE_SET_TO','virsraksts');
define('SUBMIT_FORM','Apstiprinât');
define('UPDATED_SUCCESFULLY','Veiksmîgi izmanîts');
define('ERROR_CREATE','Kïûda');
define('CONTIN','Process more images');
define('MAIN_SUCCESS','Fails %s tiek izmantots kâ galvenais attçls');
define('ERROR_RENAME','Kïûda %s pârsaucot par %s');
define('ERROR_NOT_FOUND','Fails %s nav atrasts');
define('U_BACK','back to main');
define('THUMBS_WAIT','Notiek mazo un normâlo attçlu modificçðana, lûdzu uzgaidi...');
define('THUMBS_CONTINUE_WAIT','Turpinam modificçt mazos un normâlos attçlus...');
define('TITLES_WAIT','Norit sparîga virsrakstu modificçðana, uzgaidi...');
define('DELETE_WAIT','Dzçðu virsrakstus, lûdzu uzgaidi...');
define('REPLACE_WAIT','Dzçðu oriìinâlus, nomainot tos ar modificçtajiem attçliem, lûdzu uzgaidi...');
define('INSTRUCTION','Ieteikumi');
define('INSTRUCTION_ACTION','Izvçlies darbîbu');
define('INSTRUCTION_PARAMETER','Uzliec parametrus');
define('INSTRUCTION_ALBUM','Izvçlies albumu');
define('INSTRUCTION_PRESS','Nospied %s');
define('U_UPDATE','Update thumbs and/or resized photos');
define('UPDATE_WHAT','Kas jâmodificç');
define('UPDATE_THUMB','Tikai mazos attçlus');
define('UPDATE_PIC','Tikai modificçtos attçlus');
define('UPDATE_BOTH','Gan mazie, gan normâlie attçli');
define('UPDATE_NUMBER','Cik attçlus var modificçt ar vienu klikðíi');
define('UPDATE_OPTION','(Ðo parametru samazini, ja ir problçmas ar modificçðanu)');
define('FILENAME_TITLE','Faila nosaukums &rArr; Attçla virsraksts');
define('FILENAME_HOW','Kâ modificçt attçlu');
define('FILENAME_REMOVE','Dzçst .jpg paplaðinâjumu un _ nomainît ar atstarpi');
define('FILENAME_EURO','Konvertçt 2003_11_23_13_20_20.jpg uz 23/11/2003 13:20');
define('FILENAME_US','Konevertçt 2003_11_23_13_20_20.jpg uz 11/23/2003 13:20');
define('FILENAME_TIME','Konvertçt 2003_11_23_13_20_20.jpg uz 13:20');
define('UT_DELETE','Delete picture titles or original size photos');
define('DELETE_TITLE','Dzçst attçlu virsrakstus');
define('DELETE_ORIGINAL','Dzçst oriìinâlus');
define('DELETE_REPLACE','Dzçst oriìinâlus aizstâjot tos ar modificçtajiem attçliem');
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
