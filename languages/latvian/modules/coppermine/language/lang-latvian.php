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
/*   $Id: lang-latvian.php,v 1.1 2004/07/24 20:59:11 djmaze Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Latvian');
define('LANG_NAME_NATIVE', 'Latviski');
define('LANG_COUNTRY_CODE', 'lv');
define('TRANS_NAME', 'Kaspars Priedols');
define('TRANS_EMAIL', 'house@tvertne.nu');
define('TRANS_WEBSITE', 'http://foto.tvertne.nu/');
define('TRANS_DATE', '2003-10-15');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'windows-1257');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'Jâ');
define('NO', 'Nç');

// some common strings
define('BACK', 'ATGRIEZTIES');
define('CONTINUE', 'TURPINÂT');
define('INFO', 'Informâcija');
define('ERROR', 'Kïûda');

//// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
define('ALBUM_DATE_FMT', '%d/%m/%Y %H:%M');
define('LASTCOM_DATE_FMT', '%d/%m/%Y %H:%M');
define('LASTUP_DATE_FMT', '%d/%m/%Y %H:%M');
define('REGISTER_DATE_FMT', '%d/%m/%Y %H:%M');
define('LASTHIT_DATE_FMT', '%d/%m/%Y %H:%M');
define('COMMENT_DATE_FMT', '%d/%m/%Y %H:%M');

// lang_meta_album_names
define('RANDOM', 'Izlases veida attçli');
define('LASTUP', 'Jaunâkie papildinâjumi');
define('LASTUPBY', 'My Last additions');
define('LASTALB', 'Pçdçjie atjaunotie albumi');
define('LASTCOM', 'Jaunâkie komentâri');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Skatîtâkie');
define('TOPRATED', 'Vispopulârâkie');
define('LASTHITS', 'Pçdçjie skatîtie');
define('SEARCH', 'Meklçğanas rezultâti');
define('FAVPICS', 'Attçlu favorîti');

// lang_errors
define('ACCESS_DENIED', 'Tev nav pieejas tiesîbu ğai lapai.');
define('PERM_DENIED', 'Tev nav tiesîbu veikt ğâdu darbîbu.');
define('PARAM_MISSING', 'Tika izsaukta komanda bez parametriem.');
define('NON_EXIST_AP', 'Izvçlçtais albums/attçls neeksistç!');
define('QUOTA_EXCEEDED', 'Nav vietas uz diska.<br /><br />Tev ir pieğíirts ierobeşojums [quota]K, bet pağlaik jau aizòemti [space]K, tâpçc ğî attçla pievienoğana nav ieteicama (tiks pârsniegts ierobeşojums).');
define('GD_FILE_TYPE_ERR', 'Izmantojot GD attçlu bibliotçku, atïauts izmantot tikai JPEG un PNG formâtus.');
define('INVALID_IMAGE', 'Attçls bojâts vai arî sistçmas GD attçlu bibliotçka nespçj to atkodçt.');
define('RESIZE_FAILED', 'Nav iespçjams izveidot mazo attçlu vai izmainît tâ izmçrus.');
define('NO_IMG_TO_DISPLAY', 'Nav attçla');
define('NON_EXIST_CAT', 'Izvçlçtâ sadaïa neeksistç');
define('ORPHAN_CAT', 'Ğai apakğsadaïai nav sadaïas, kam tâ piederçtu, lûdzu izmanto sadaïu menedşeri, lai atrisinâtu problçmu.');
define('DIRECTORY_RO', 'Direktorijâ \'%s\' nav atïauts rakstît, tâpçc attçlus nav iespçjams izdzçst.');
define('NON_EXIST_COMMENT', 'Izvçlçtais komentârs neeksistç.');
define('PIC_IN_INVALID_ALBUM', 'Attçls atrodas neeksistçjoğâ albumâ (%s)!?');
define('BANNED', 'Pieeja foto galerijai aizliegta.');
define('NOT_WITH_UDB', 'Ğî iespçja ir atslçgta, jo tai jâbût integrçtai kopâ ar foruma programmatûru. Trûkst attiecîgâs konfigurâcijas, vai nepiecieğams uzinstalçt forumu.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', 'Uz albumu sarakstu');
define('ALB_LIST_LNK', 'Albumu saraksts');
define('MY_GAL_TITLE', 'Uz manu galeriju');
define('MY_GAL_LNK', 'Mana galerija');
define('MY_PROF_LNK', 'My profails');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Pârslçgties Administratora reşîmâ');
define('ADM_MODE_LNK', 'Administratora reşîms');
define('USR_MODE_TITLE', 'Pârslçgties lietotâja reşîmâ');
define('USR_MODE_LNK', 'Lietotâja reşîms');
define('UPLOAD_PIC_TITLE', 'Ielikt attçlu albumâ');
define('UPLOAD_PIC_LNK', 'Pievienot attçlu');
define('REGISTER_TITLE', 'Izveidot kontu');
define('REGISTER_LNK', 'Reìistrçties');
define('LOGIN_LNK', 'Pieslçgties');
define('LOGOUT_LNK', 'Beigt darbu');
define('LASTUP_LNK', 'Jaunâkie attçli');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Jaunâkie komentâri');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Skatîtâkie attçli');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Vispopulârâkie');
define('SEARCH_LNK', 'Meklçt');
define('FAV_LNK', 'Favorîti');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu

define('UPL_APP_LNK', 'Apstiprinât');
define('CONFIG_LNK', 'Konfigurçt');
define('ALBUMS_LNK', 'Albumi');
define('CATEGORIES_LNK', 'Sadaïas');
define('USERS_LNK', 'Lietotâji');
define('GROUPS_LNK', 'Grupas');
define('COMMENTS_LNK', 'Komentâri');
define('SEARCHNEW_LNK', 'Attçlu grupas...');
define('UTIL_LNK', 'Mainît attçla izmçrus');
define('BAN_LNK', 'Aiziegt piekïuvi');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Izveidot manu albumu');
define('MODIFYALB_LNK', 'Mainît manu albumu');
define('MY_PROF_LNK', 'Profails');

// lang_cat_list
define('CATEGORY', 'Sadaïas');
define('ALBUMS', 'Albumi');
define('PICTURES', 'Attçli');

// lang_album_list
define('ALBUM_ON_PAGE', '%d albums(-i) %d lapâ(s)');

// lang_thumb_view
define('DATE', 'LAIKS');
define('NAME', 'NOSAUKUMS');
define('TITLE', 'VIRSRAKSTS');
define('SORT_DA', 'pçc datuma augoği');
define('SORT_DD', 'pçc datuma dilstoği');
define('SORT_NA', 'pçc nosaukuma augoği');
define('SORT_ND', 'pçc nosaukuma dilstoği');
define('SORT_TA', 'pçc virsraksta augoği');
define('SORT_TD', 'Sort by title descending');
define('PIC_ON_PAGE', '%d attçls(-i) %d lapâ(s)');
define('USER_ON_PAGE', '%d lietotâjs(-i) %d lapâ(s)');
define('SORT_RA', 'Sort by rating ascending');
define('SORT_RD', 'Sort by rating descending');
define('RATING', 'RATING');
define('SORT_TITLE', 'Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Atgriezties uz attçlu indeksu');
define('PIC_INFO_TITLE', 'Râdît/paslçpt informâciju par attçlu');
define('SLIDESHOW_TITLE', 'Slaidğovs');
define('SLIDESHOW_DISABLED', 'e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'Sûtît kâ e-kartiòu');
define('ECARD_DISABLED', 'e-kartiòu sûtîğana atslçgta');
define('ECARD_DISABLED_MSG', 'Tev nav pietiekamu tiesîbu, lai sûtîtu e-kartiòas');
define('PREV_TITLE', 'Iepriekğçjais attçls');
define('NEXT_TITLE', 'Nâkamais attçls');
define('PIC_POS', 'ATTÇLS %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', 'Novçrtçt ');
define('NO_VOTES', '(novçrtçjuma nav)');
define('RATING', '(novçrtçjums: %s balsis no 5 (balsots %s reizi(-es))');
define('RUBBISH', 'Mçsls');
define('POOR', 'Vâji');
define('FAIR', 'Viduvçji');
define('GOOD', 'Labi');
define('EXCELLENT', 'Teicami');
define('GREAT', 'Lieliski');

// lang_cpg_die
define('INFORMATION', 'Informâcija');
define('ERROR', 'Kïûda');
define('CRITICAL_ERROR', 'Kritiska kïûda');
define('FILE', 'Fails: ');
define('LINE', 'Rinda: ');

// lang_display_thumbnails
define('FILENAME', 'Nosaukums : ');
define('FILESIZE', 'Lielums : ');
define('DIMENSIONS', 'Izmçrs : ');
define('DATE_ADDED', 'Pievienots : ');

// lang_get_pic_data
define('N_COMMENTS', 'komentâri: <b>%s</b>');
define('N_VIEWS', 'skatîjumi: <b>%s</b>');
define('N_VOTES', 'vçrtçjumi: <b>%s</b>');

// lang_albmgr_php
define('ALB_NEED_NAME', 'Kâ sauksim albumu?');
define('CONFIRM_MODIFS', 'Apstiprinât veiktâs izmaiòas?');
define('NO_CHANGE', 'Nekas nav mainîts!');
define('NEW_ALBUM', 'Jauns albums');
define('CONFIRM_DELETE1', 'Tieğâm dzçst ğo albumu?');
define('CONFIRM_DELETE2', '\\nVisi attçli un komentâri tajâ tiks izdzçsti!');
define('SELECT_FIRST', 'Vispirms jâizvçlas albumu');
define('ALB_MRG', 'Albumu menedşeris');
define('MY_GALLERY', '* Mana galerija *');
define('NO_CATEGORY', '* Mana sadaïa *');
define('DELETE', 'Dzçst');
define('NEW', 'Jauns');
define('APPLY_MODIFS', 'Apstiprinât izmaiòas');
define('SELECT_CATEGORY', 'Izvçlçties sadaïu');

// lang_catmgr_php
define('MISS_PARAM', 'Komandas \'%s\' izpildîğanai trûkst nepiecieğamie parametri!');
define('UNKNOWN_CAT', 'Izvçlçtâ sadaïa datu bâzç neeksistç');
define('USERGAL_CAT_RO', 'Lietotâja galerijas sadaïa nevar tikt dzçsta!');
define('MANAGE_CAT', 'Administrçt sadaïas');
define('CONFIRM_DELETE', 'Tieğâm dzçst ğo sadaïu');
define('CATEGORY', 'Sadaïa');
define('OPERATIONS', 'Darbîbas');
define('MOVE_INTO', 'Pârvietot uz');
define('UPDATE_CREATE', 'Modificçt/izveidot sadaïu');
define('PARENT_CAT', 'Pieder sadaïai');
define('CAT_TITLE', 'Sadaïas virsraksts');
define('CAT_DESC', 'Sadaïas apraksts');

// lang_config_php
define('TITLE', 'Konfigurâcija');
define('RESTORE_CFG', 'Atjaunot noklusçtâs vçrtîbas');
define('SAVE_CFG', 'Saglabât jaunos uzstâdîjumus');
define('NOTES', 'Piezîmes');
define('INFO', 'Informâcija');
define('UPD_SUCCESS', 'Coppermine konfigurâcija saglabâta');
define('RESTORE_SUCCESS', 'Coppermine noklusçtâ konfigurâcija uzstâdîta');
define('NAME_A', 'Nosaukums augoği');
define('NAME_D', 'Nosaukums dilstoği');
define('TITLE_A', 'Virsraksts augoği');
define('TITLE_D', 'Virsraksts dilstoği');
define('DATE_A', 'Datums augoği');
define('DATE_D', 'Datums dilstoği');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Height');
define('TH_WD', 'Width');

// lang_config_data
define('CONFIG_GENSET', 'Galvenie uzstâdîjumi');
define('GALLERY_NAME', 'Nosaukums');
define('GALLERY_DESCRIPTION', 'Apraksts');
define('GALLERY_ADMIN_EMAIL', 'Administrators');
define('ECARDS_MORE_PIC_TARGET', 'Adrese, kas bûs e-kartiòâ pie teksta 'Citi attçli...'');
define('LANG', 'Valoda');
define('THEME', 'Tçma');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'Albumu saraksta skatîjums');
define('MAIN_TABLE_WIDTH', 'Galvenâs tabulas platums (pikseïos vai %)');
define('SUBCAT_LEVEL', 'Cik lîmeòos sadaïas atspoguïot');
define('ALBUMS_PER_PAGE', 'Cik albumus atspoguïot');
define('ALBUM_LIST_COLS', 'Cik kolonnâs atspoguïot albûmus');
define('ALB_LIST_THUMB_SIZE', 'Cik lieli pikseïos bûs mazie attçli');
define('MAIN_PAGE_LAYOUT', 'Galvenâs lapas saturs');
define('FIRST_LEVEL', 'Râdît pirmâ lîmeòa mazos attçlus pa sadaïâm');
define('THUMB_VIEW_TITLE', 'Mazo attçlu skatîjums');
define('THUMBCOLS', 'Cik kolonnâs râdît mazos attçlus');
define('THUMBROWS', 'Cik rindâs râdît mazos attçlus');
define('MAX_TABS', 'Cik tabulas atspoguïot');
define('CAPTION_IN_THUMBVIEW', 'Blakus mazajam attçlam atspoguïot ne tikai attçla virsrakstu, bet arî aprakstu');
define('DISPLAY_COMMENT_COUNT', 'Atspoguïot komentâru skaitu');
define('DEFAULT_SORT_ORDER', 'Kâ kârtot attçlus');
define('MIN_VOTES_FOR_RATING', 'Minimâlais balsu skaits, lai attçls tiktu iekïauts vispopulârâko sarakstâ');
define('IMAGE_COMMENT_VIEW_TITLE', 'Attçlu skatîğanâs &amp; Komentâri');
define('PICTURE_TABLE_WIDTH', 'Attçla tabulas platums (pikseïos vai %)');
define('DISPLAY_PIC_INFO', 'Attçla informâcija redzama pçc noklusçğanas');
define('FILTER_BAD_WORDS', 'Filtrçt sliktus vârdus komentâros');
define('ENABLE_SMILIES', 'Atïaut sejiòas komentâros');
define('MAX_IMG_DESC_LENGTH', 'Max attçla apraksta garums');
define('MAX_COM_WLENGTH', 'Max simbolu skaits vienâ vârdâ');
define('MAX_COM_LINES', 'Max rindu skaits komentârâ');
define('MAX_COM_SIZE', 'Max komentâra garums');
define('DISPLAY_FILM_STRIP', 'Filmas skatîjums');
define('MAX_FILM_STRIP_ITEMS', 'Attçlu skaits filmas skatîjumâ');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', 'Lielo un mazo attçlu kvalitâte');
define('JPEG_QUAL', 'JPEG failu kvalitâte');
define('THUMB_WIDTH', 'Max mazâ attçla platums vai augstums <b>*</b>');
define('THUMB_USE', 'Izmantojamie izmçri ( platums vai augstums )<b>*</b>');
define('MAKE_INTERMEDIATE', 'Izveidot arî 'starpattçlus'');
define('PICTURE_WIDTH', 'Max 'starpattçla' platums vai augstums <b>*</b>');
define('MAX_UPL_SIZE', 'Max uzliktâ attçla lielums (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Max uzliktâ attçla platums vai augstums (pikseïos)');
define('USER_SETTING_TITLE', 'Lietotâju uzstâdîjumi');
define('ALLOW_USER_REGISTRATION', 'Atïaut jaunu lietotâju piereìistrçğanos');
define('REG_REQUIRES_VALID_EMAIL', 'Lietotâja sekmîgai reìistrâcija nepiecieğams e-pasta apstiprinâjums');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Atïaut diviem daşâdiem lietotâjiem izmantot vienâdas e-pasta adreses');
define('ALLOW_PRIVATE_ALBUMS', 'Lietotâjs drîkst veidot personîgus albûmus');
define('CUSTOM_FIELDS_TITLE', 'Rezerves lauki attçla aprakstam (ja neizmanto, atstâj tukğus)');
define('USER_FIELD1_NAME', 'Lauka 1 nosaukums');
define('USER_FIELD2_NAME', 'Lauka 2 nosaukums');
define('USER_FIELD3_NAME', 'Lauka 3 nosaukums');
define('USER_FIELD4_NAME', 'Lauka 4 nosaukums');
define('COOKIE_SETTING_TITLE', 'Lielo un mazo attçlu îpağie uzstâdîjumi');
define('SHOW_PRIVATE', 'Râdît personîgâ albuma ikonu anonîmajiem apmeklçtâjiem');
define('FORBIDEN_FNAME_CHAR', 'Kâdi simboli aizliegti failu nosaukumos');
define('ALLOWED_FILE_EXTENSIONS', 'Uzliekamo attçlu atïautie failu paplağinâjumi');
define('THUMB_METHOD', 'Attçlu izmçru mainîğanas metodes');
define('IMPATH', 'Ceïğ uz ImageMagick 'convert' utilîtu (piemçram, /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Atïauti attçlu formâti (tikai priekğ ImageMagick)');
define('IM_OPTIONS', 'Komandrindas parametri ImageMagick utilîtai');
define('READ_EXIF_DATA', 'Izmantot JPEG attçlu EXIF informâciju');
define('READ_IPTC_DATA', 'Read IPTC data in JPEG files');
define('FULLPATH', 'Albumu direktorija <b>*</b>');
define('USERPICS', 'Lietotâju albumu direktorija <b>*</b>');
define('NORMAL_PFX', 'Starpattçlu prefikss <b>*</b>');
define('THUMB_PFX', 'Mazo attçlu prefikss <b>*</b>');
define('DEFAULT_DIR_MODE', 'Direktoriju skatîjuma reşîms pçc noklusçğanas');
define('DEFAULT_FILE_MODE', 'Attçlu reşîms');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', 'Cepumi (cookies) &amp; Kodçjums');
define('COOKIE_NAME', 'Cookie nosaukumus');
define('COOKIE_PATH', 'Cookie ceïğ');
define('CHAR_SET', 'Teksta kodçjums');
define('MISC_SETTING_TITLE', 'Citi uzstâdîjumi');
define('DEBUG_MODE', 'Debug reşîms');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) Ar * atzîmçtos parametrus nav ieteicams mainît, ja galerîjâs jau ir attçli</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Ja nebûs vârds un komentâra teksts, nekas nesanâks');
define('COM_ADDED', 'Komentârs pievienots');
define('ALB_NEED_TITLE', 'Kâds ir albuma virsraksts (nosaukums)?');
define('NO_UDP_NEEDED', 'Izmaiòas nav nepiecieğamas.');
define('ALB_UPDATED', 'Albums modificçts');
define('UNKNOWN_ALBUM', 'Izvçlçtais albums neeksistç vai arî nav tiesîbu tajâ pievienot attçlus');
define('NO_PIC_UPLOADED', 'Attçls netika uzlikts!<br /><br />Vai uz servera ir uzlikta atïauja ğâdâm operâcijâm?');
define('ERR_MKDIR', 'Direktorija %s NEtika izveidota!');
define('DEST_DIR_RO', 'Nav tiesîbu veikt ierakstu direktrijâ %s!');
define('ERR_MOVE', 'Nav iespçjams pârvietot %s uz %s !');
define('ERR_FSIZE_TOO_LARGE', 'Uzliekamâ attçla izmçrs pârsniedz max atïauto (max atïautais ir %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Uzliekamâ attçla faila izmçrs pârsniedz max atïauto (max atïautais ir %s KB) !');
define('ERR_INVALID_IMG', 'Uzliekamais fails nav klasificçjams kâ attçls!');
define('ALLOWED_IMG_TYPES', 'Tu drîksti uzlikt %s attçlus.');
define('ERR_INSERT_PIC', 'Attçls \'%s\' nevar tikt pievienots ');
define('UPLOAD_SUCCESS', 'Attçls veiksmîgi uzlikts<br /><br />Tas bûs redzams galerijâ, tiklîdz Administrators to bûs akceptçjis.');
define('INFO', 'Informâcija');
define('ERR_COMMENT_EMPTY', 'Nav komentâra!');
define('ERR_INVALID_FEXT', 'Atïauti faili ar ğâdiem paplağinâjumiem : <br /><br />%s.');
define('NO_FLOOD', 'Atvaino, bet tieği tu arî esi pçdçjâ iesûtîtâ komentâra autors.<br /><br />Modificç sava pçdçjâ iesûtîtâ komentâra tekstu');
define('REDIRECT_MSG', 'Notiek pâradresâcija.<br /><br /><br />Spied uz \'TURPINÂT\', ja lapa nepârlâdçjas');
define('UPL_SUCCESS', 'Attçls veiksmîgi pievienots');

// lang_delete_php
define('CAPTION', 'Teksts');
define('FS_PIC', 'pilnâ izmçra attçls');
define('DEL_SUCCESS', 'veiksmîgi izdzçsts');
define('NS_PIC', 'normâla izmçra attçls');
define('ERR_DEL', 'nevar tikt izdzçsts');
define('THUMB_PIC', 'mazais attçls');
define('COMMENT', 'komentârs');
define('IM_IN_ALB', 'attçls albumâ');
define('ALB_DEL_SUCCESS', 'Albums \'%s\' izdzçsts');
define('ALB_MGR', 'Albuma menedşeris');
define('ERR_INVALID_DATA', 'Saòemta nekorekta informâcija \'%s\'');
define('CREATE_ALB', 'Tiek veidots albums \'%s\'');
define('UPDATE_ALB', 'Tiek modificçts albums \'%s\' ar virsrakstu \'%s\' un indeksu \'%s\'');
define('DEL_PIC', 'Dzçst attçlu');
define('DEL_ALB', 'Dzçst albumu');
define('DEL_USER', 'Dzçst lietotâju');
define('ERR_UNKNOWN_USER', 'Izvçlçtais lietotâjs neeksistç!');
define('COMMENT_DELETED', 'Komentârs veiksmîgi izdzçsts');

// lang_display_image_php
define('CONFIRM_DEL', 'Tieğâm DZÇST ğo attçlu? \\nArî komentâri tiks izdzçsti.');
define('DEL_PIC', 'IZDZÇST ĞO ATTÇLU');
define('SIZE', '%s x %s px');
define('VIEWS', '%s reizes');
define('SLIDESHOW', 'Slaidğovs');
define('STOP_SLIDESHOW', 'APSTÂDINÂT SLAIDĞOVU');
define('VIEW_FS', 'Uzspied, lai redzçtu pilna izmçra attçlu');

// lang_picinfo
define('TITLE', 'Informâcija par attçlu');
define('FILENAME', 'Attçls');
define('ALBUM NAME', 'Albums');
define('RATING', 'Vçrtçjums (%s balsis)');
define('KEYWORDS', 'Atslçgas vârdi');
define('FILE SIZE', 'Faila lielums');
define('DIMENSIONS', 'Izmçrs');
define('DISPLAYED', 'Attçlots');
define('CAMERA', 'Kamera');
define('DATE TAKEN', 'Uzòemğanas datums');
define('APERTURE', 'Objektîva diametrs');
define('EXPOSURE TIME', 'Ekspozîcijas laiks');
define('FOCAL LENGTH', 'Fokuss');
define('COMMENT', 'Komentâri');
define('ADDFAV', 'Uz favorîtiem');
define('ADDFAVPHRASE', 'Favorîti');
define('REMFAV', 'Dzçst no favorîtiem');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'Modificçt komentâru');
define('CONFIRM_DELETE', 'Tieğâm DZÇST ğo komentâru?');
define('ADD_YOUR_COMMENT', 'Pievienot komentâru');
define('NAME', 'Vârds');
define('COMMENT', 'Komentârs');
define('YOUR_NAME', 'Anonîms');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Uzklikğíini uz attçla, lai aizvçrtu ğo logu');

// lang_ecard_php
define('TITLE', 'Nosûtît e-kartiòu');
define('INVALID_EMAIL', '<b>UZMANÎBU</b> : kïûdaina adrese!');
define('ECARD_TITLE', 'Sveiciens no %s');
define('VIEW_ECARD', 'Ğo sveicienu var redzçt arî sekojoğa adresç');
define('VIEW_MORE_PICS', 'Citi forği attçli...');
define('SEND_SUCCESS', 'E-kartiòa nosûtîta');
define('SEND_FAILED', 'Atvaino, serveris nevar nosûtît tavu E-kartiòu...');
define('FROM', 'No kâ');
define('YOUR_NAME', 'Vârds');
define('YOUR_EMAIL', 'E-pasta adrese');
define('TO', 'Kam');
define('RCPT_NAME', 'Saòemçja vârds');
define('RCPT_EMAIL', 'Saòçmçja e-pasta adrese');
define('GREETINGS', 'Sveiciens');
define('MESSAGE', 'Pilnais teksts');

// lang_editpics_php
define('PIC_INFO', 'Attçla&nbsp;dati');
define('ALBUM', 'Albums');
define('TITLE', 'Virsraksts');
define('DESC', 'Apraksts');
define('KEYWORDS', 'Atslçgas vârdi');
define('PIC_INFO_STR', '%sx%s - %sKB - %s skatîjumi - %s balsis');
define('APPROVE', 'Apstiprinât attçla pievienoğanu');
define('POSTPONE_APP', 'Noraidît attçla pievienoğanu');
define('DEL_PIC', 'Dzçst attçlu');
define('RESET_VIEW_COUNT', 'Nodzçst skatîjumi skaitîtâju');
define('RESET_VOTES', 'Nodzçst balsojumu skaitu');
define('DEL_COMM', 'Dzçst komentârus');
define('UPL_APPROVAL', 'Uzlikğanas apstiprinâjums');
define('EDIT_PICS', 'Modificçt attçlus');
define('SEE_NEXT', 'Iepriekğçjie attçli');
define('SEE_PREV', 'Nâkamie attçli');
define('N_PIC', '%s attçli');
define('N_OF_PIC_TO_DISP', 'Cik attçlus atspoguïot');
define('APPLY', 'Apstiprinât izmaiòas');

// lang_groupmgr_php
define('GROUP_NAME', 'Grupa');
define('DISK_QUOTA', 'Kvota (atmiòas ierobeşojumi)');
define('CAN_RATE', 'Drîkst vçrtçt attçlus');
define('CAN_SEND_ECARDS', 'Drîkst sûtît e-kartiòas');
define('CAN_POST_COM', 'Drîkst komentçt');
define('CAN_UPLOAD', 'Drîkst likt attçlus');
define('CAN_HAVE_GALLERY', 'Drîkst bût personîga galerija');
define('APPLY', 'Apstiprinât izmaiòas');
define('CREATE_NEW_GROUP', 'Izveidot jaunu grupu');
define('DEL_GROUPS', 'Dzçst grupu(-as)');
define('CONFIRM_DEL', 'Uzmanîbu! Dzçğot grupu, visi tai piederîgie lietotâji tiks pârvietoti uz reìistrçto lietotâju grupu!\\n\\nTurpinât?');
define('TITLE', 'Administrçt lietotâju grupas');
define('APPROVAL_1', 'Publisks uzlikğanas apstiprinâjums (1)');
define('APPROVAL_2', 'Privâts uzlikğanas apstiprinâjums (2)');
define('NOTE1', '<b>(1)</b> Attçlu uzlikğanai publiskâ albûmâ ir nepiecieğama administratora atïauja');
define('NOTE2', '<b>(2)</b> Attçlu pievienoğanai albumâ, kas pieder ğim lietotâjam, nepiecieğama administratora atïauja');
define('NOTES', 'Piezîmes');

// lang_index_php
define('WELCOME', 'Laipni lûdzam!');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Tieğâm DZÇST ğo albumu? \\nVisi attçli un komentâri tajâ tiks izdzçsti.');
define('DELETE', 'IZDZÇST');
define('MODIFY', 'UZSTÂDÎJUMI');
define('EDIT_PICS', 'MODIFICÇT ATTÇLUS');

// lang_list_categories
define('HOME', 'Galvenâ lapa');
define('STAT1', 'attçli: <b>[pictures]</b> | albumi: <b>[albums]</b> | sadaïas: <b>[cat]</b> | komentâri: <b>[comments]</b> | <b>skatîts [views]</b> reizes');
define('STAT2', 'attçli: <b>[pictures]</b> | albumi: <b>[albums]</b> | skatîti <b>[views]</b> reizes');
define('XX_S_GALLERY', 'Autors %s');
define('STAT3', '<b>[pictures]</b> attçli | <b>[albums]</b> albumi | <b>[comments]</b> komentâri | skatîti <b>[views]</b> reizes');

// lang_list_users
define('USER_LIST', 'Lietotâju saraksts');
define('NO_USER_GAL', 'Nav lietotâju galerijas');
define('N_ALBUMS', 'albumi: <b>%s</b>');
define('N_PICS', 'attçli: <b>%s</b>');

// lang_list_albums
define('N_PICTURES', '<b>%s</b> attçli');
define('LAST_ADDED', ', pçdçjais pievienots <b>%s</b>');

// lang_modifyalb_php
define('UPD_ALB_N', 'Modificçt albumu %s');
define('GENERAL_SETTINGS', 'Galvenie uzstâdîjumi');
define('ALB_TITLE', 'Albuma virsraksts');
define('ALB_CAT', 'Sadaïa');
define('ALB_DESC', 'Albuma apraksts');
define('ALB_THUMB', 'Albuma mazais attçls');
define('ALB_PERM', 'Albuma lietotâju tiesîbas');
define('CAN_VIEW', 'Albumu var skatîties');
define('CAN_UPLOAD', 'Apmeklçtâjie drîkst pievienot attçlus');
define('CAN_POST_COMMENTS', 'Apmeklçtâji drîkst komentçt');
define('CAN_RATE', 'Apmeklçtâji drîkst vçrtçt attçlus');
define('USER_GAL', 'Lietotâja galerija');
define('NO_CAT', '* Kategorijas nav *');
define('ALB_EMPTY', 'Albums ir tukğs');
define('LAST_UPLOADED', 'Pçdejoreiz uzlikts attçls');
define('PUBLIC_ALB', 'Ikviens (publiskais albums)');
define('ME_ONLY', 'Tikai es');
define('OWNER_ONLY', 'Tikai albuma îpağnieks (%s)');
define('GROUPP_ONLY', 'Tikai \'%s\' grupâ esoğie');
define('ERR_NO_ALB_TO_MODIFY', 'Tev nav tiesîbu modificçt albumus.');
define('UPDATE', 'Saglabât izmaiòas');

// lang_rate_pic_php
define('ALREADY_RATED', 'Atvaino, bet tu jau esi iesniedzis savu vçrtçjumu');
define('RATE_OK', 'Vçrtçjums pieòemts');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'Ar ğo Tu apòemies neievietot citus aizskaroğus, piedauzîgus, vulgârus, apmelojoğus, pretîgus, draudoğus, seksuâli orientçtus, vai jebkâdus citus materiâlus, kas pârkâpj jebkâdus likumus. Likumu nezinâğana neatbrîvo no atbildîbas!!! Tu piekrîti, ka ğîs lapas webmasters, administrators un moderators ir tiesîgi izdzçst vai mainît saturu jebkurâ laikâ, kad vien vçlâs. Kâ lietotâjs Tu piekrîti, ka visa informâcija ko Tu ievadîsi tiks saglabâta datubâzç. Webmasters un administrators nav atbildîgi par jebkâdu tavas informâcijas uzlauğanu vai izmainîğanu.<br />
<br />
Ğî lapa izmanto 'cookies', lai saglabâtu informâciju tavâ datorâ. 'Cookies' vienîgi uzlabo lapas parâdîğanas kvalitâti. E-pasta adrese tiek izmantota vienîgi Tavas reìistrâcijas apstiprinâğanai, lai nosûtîtu paroli.<br />
<br />
Izvçloties zemâk 'Es piekrîtu' Tu piekrîti visam iepriekğ rakstîtajam.');

// lang_register_php
define('PAGE_TITLE', 'Lietotâja reìistrâcija');
define('TERM_COND', 'Vienoğanâs nosacîjumi');
define('I_AGREE', 'Es piekrîtu');
define('SUBMIT', 'Apstiprinât reìistrâciju');
define('ERR_USER_EXISTS', 'Ğis lietotâja vârds jau ir reìistrçts, izvçlies citu');
define('ERR_PASSWORD_MISMATCH', 'Paroles nesakrît, raksti vçlreiz');
define('ERR_UNAME_SHORT', 'Lietotâja vârda minimâlais simbolu skaits ir 2');
define('ERR_PASSWORD_SHORT', 'Parolç jâbût ne mazâk kâ 2 simboliem');
define('ERR_UNAME_PASS_DIFF', 'Lietotâja vârds un parole nedrîkst bût vienâdi');
define('ERR_INVALID_EMAIL', 'E-pasta adres ir nepareiza');
define('ERR_DUPLICATE_EMAIL', 'Ğâda email adrese jau ir datu bâzç');
define('ENTER_INFO', 'Reìistrâcijas informâcija');
define('REQUIRED_INFO', 'Nepiecieğamâ informâcija');
define('OPTIONAL_INFO', 'Neobligâtâ informâcija');
define('USERNAME', 'Lietotâja vârds');
define('PASSWORD', 'Parole');
define('PASSWORD_AGAIN', 'Vçlreiz parole');
define('EMAIL', 'E-pasts');
define('LOCATION', 'Atrağanâs vieta');
define('INTERESTS', 'Intereses');
define('WEBSITE', 'Mâjas lapa');
define('OCCUPATION', 'Nodarboğanâs');
define('ERROR', 'KÏÛDA');
define('CONFIRM_EMAIL_SUBJECT', '%s - Reìistrâcijas apstiprinâjums');
define('INFORMATION', 'Informâcija');
define('FAILED_SENDING_EMAIL', 'Nevar tikt nosûtîta reìistrâcijas apstiprinâjuma vçstule!');
define('THANK_YOU', 'Paldies par reìistrçğanos.<br /><br />Vçstule ar sîkâku informâciju, kâ pabeigt reìistrçğanâs procesu, tika nosûtîta uz iepriekğ minçto adresi.');
define('ACCT_CREATED', 'Konts izveidots un tu vari pieslçgties ar savu lietotâja vârdu un paroli');
define('ACCT_ACTIVE', 'Konts ir aktîvs un tu tagad vari pieslçgties sistçmai');
define('ACCT_ALREADY_ACT', 'Konts jau ir aktîvs!');
define('ACCT_ACT_FAILED', 'Ğis konts nevar tikt aktivizçts!');
define('ERR_UNK_USER', 'Izvçlçtais lietotâjs neeksistç!');
define('X_S_PROFILE', '%s : profails');
define('GROUP', 'Grupa');
define('REG_DATE', 'Pievienojies');
define('DISK_USAGE', 'Diska izmantoğana');
define('CHANGE_PASS', 'Nomainît paroli');
define('CURRENT_PASS', 'Pağreizçjâ parole');
define('NEW_PASS', 'Jauna parole');
define('NEW_PASS_AGAIN', 'Vçlreiz jaunâ parole');
define('ERR_CURR_PASS', 'Pağreizçjâ parole nepareiza');
define('APPLY_MODIF', 'Apstiprinât izmaiòas');
define('UPDATE_SUCCESS', 'Profails izmainîts');
define('PASS_CHG_SUCCESS', 'Parole nomainîta');
define('PASS_CHG_ERROR', 'Parole netika nomainîta');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Paldies par reìistrçğanos {SITE_NAME}

Lietotâja vârds : "{USER_NAME}"
Lietotâja parole : "{PASSWORD}"

Lai aktivizçtu savu kontu, nepiecieğams ielâdçt zemâk redzamo lapu.

{ACT_LINK}

Lai veicas,

{SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', 'Apskatîties komentârus');
define('NO_COMMENT', 'Komentâru nav');
define('N_COMM_DEL', '%s komentâri izdzçsti');
define('N_COMM_DISP', 'Cik komentârus atspoguïot');
define('SEE_PREV', 'Iepriekğçjie');
define('SEE_NEXT', 'Nâkamie');
define('DEL_COMM', 'Dzçst izvçlçtos komentârus');

// lang_search_php
define('SEARCH', 'Meklçt attçlu kolekcijâ');

// lang_search_new_php
define('PAGE_TITLE', 'Meklçt jaunus attçlus');
define('SELECT_DIR', 'Izvçlçties direktoriju');
define('SELECT_DIR_MSG', 'Ğî funkcija ïauj pievienot daudzus attçlus vienlaikus, ja tie iepriekğ uzlikti ar FTP.<br /><br />Izvçlies direktoriju, kur tika uzlikti attçli');
define('NO_PIC_TO_ADD', 'Nav attçlu, ko varçtu pievienot');
define('NEED_ONE_ALBUM', 'Lai izmantotu ğo funkciju, nepiecieğams vismaz viens albums');
define('WARNING', 'Uzmanîbu');
define('CHANGE_PERM', 'nav pieeja direktorijai, tai jâizmaina tiesîbas (chmod) no 755 uz 777, lai varçtu pievienot attçlus!');
define('TARGET_ALBUM', '<b>Ievietot attçlus &quot;</b>%s<b>&quot; </b>%s');
define('FOLDER', 'Direktorija');
define('IMAGE', 'Attçls');
define('ALBUM', 'Albums');
define('RESULT', 'Rezultâti');
define('DIR_RO', 'Nav rakstîğanas tiesîbu. ');
define('DIR_CANT_READ', 'Nav lasîğanas tiesîbu. ');
define('INSERT', 'Jaunu attçlu pievienoğana');
define('LIST_NEW_PIC', 'Jauno attçlu saraksts');
define('INSERT_SELECTED', 'Pievienot izvçlçtos attçlus');
define('NO_PIC_FOUND', 'Jauni attçli netika atrasti');
define('BE_PATIENT', 'Lûdzu esiet pacietîgi, kamçr tiek pievienoti jaunie attçli');
define('NOTES', '<ul><li><b>OK</b> : attçls veiksmîgi pievienots<li><b>DP</b> : nozîmç, ka tâds attçls jau ir datu bâzç<li><b>PB</b> : attçlu nevar pievienot, jâpârbauda pieejas tiesîbas<li>Ja OK, DP, PB \'zîmes\' neparâdâs, jâklikğíina uz attçla, kas parâdâs, lai iegûtu detalizçtâku kïûdas aprakstu<li>Ja pârlûkâ parâdâs paziòojums par taimautu, lapa ir jâpârlâdç</ul>');

// lang_upload_php
define('TITLE', 'Uzlikt attçlu');
define('MAX_FSIZE', 'Max pievienojamâ faila lielums %s KB');
define('ALBUM', 'Albums');
define('PICTURE', 'Attçls');
define('PIC_TITLE', 'Attçla virsraksts');
define('DESCRIPTION', 'Attçla apraksts');
define('KEYWORDS', 'Atslçgas vârdi (atdalît ar atstarpçm)');
define('ERR_NO_ALB_UPLOADABLES', 'Atvaino, nav neviena albuma, kurâ tu varçtu ievietot savus attçlus');

// lang_usermgr_php
define('TITLE', 'Administrçt lietotâjus');
define('NAME_A', 'Vârds augoği');
define('NAME_D', 'Vârds dilstoği');
define('GROUP_A', 'Grupa augoği');
define('GROUP_D', 'Grupa dilstoği');
define('REG_A', 'Reg datums augoği');
define('REG_D', 'Reg datums dilstoği');
define('PIC_A', 'Attçlu skaits augoği');
define('PIC_D', 'Attçlu skaits dilstoği');
define('DISKU_A', 'Diska atmiòa augoği');
define('DISKU_D', 'Diska atmiòa dilstoği');
define('SORT_BY', 'Kârtot');
define('ERR_NO_USERS', 'Lietotâju tabulâ nav datu!');
define('ERR_EDIT_SELF', 'Nemaini te savu profailu, tam izmanto \'Mans profails\'');
define('EDIT', 'MODIFICÇT');
define('DELETE', 'DZÇST');
define('NAME', 'Lietotâjs');
define('GROUP', 'Grupa');
define('INACTIVE', 'Neaktîvs');
define('OPERATIONS', 'Darbîbas');
define('PICTURES', 'Attçli');
define('DISK_SPACE', 'Izmantotâ atmiòa / Ierobeşojums');
define('REGISTERED_ON', 'Reìistrçts');
define('U_USER_ON_P_PAGES', '%d lietotâji %d lapâ(s)');
define('CONFIRM_DEL', 'Tieğâm DZÇST ğo lietotâju? \\nVisi viòa attçli un komentâri arî tiks izdzçsti');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'Izvçlçtais lietotâjs neeksistç!');
define('MODIFY_USER', 'Mainît datus');
define('NOTES', 'Piezîmes');
define('NOTE_LIST', '<li>Ja nevçlies mainît paroli, atstâj paroles lauku tukğu');
define('PASSWORD', 'Parole');
define('USER_ACTIVE', 'Lietotâjs aktîvs');
define('USER_GROUP', 'Grupa');
define('USER_EMAIL', 'Emails');
define('USER_WEB_SITE', 'Mâjas lapa');
define('CREATE_NEW_USER', 'Izveidot');
define('USER_LOCATION', 'Atrağanâs');
define('USER_INTERESTS', 'Intereses');
define('USER_OCCUPATION', 'Nodarboğanâs');

// lang_util_php
define('TITLE', 'Attçlu zimçri');
define('WHAT_IT_DOES', 'Funkcijas');
define('WHAT_UPDATE_TITLES', 'Virsraksti tiek òemti no failu nosaukumiem');
define('WHAT_DELETE_TITLE', 'Dzçst virsrakstus');
define('WHAT_REBUILD', 'Pârveidot attçlus');
define('WHAT_DELETE_ORIGINALS', 'Dzçst oriìinâlos attçlus un nomainît tos ar samazinâtajiem/palielinâtajiem');
define('FILE', 'Fails');
define('TITLE_SET_TO', 'virsraksts');
define('SUBMIT_FORM', 'Apstiprinât');
define('UPDATED_SUCCESFULLY', 'Veiksmîgi izmanîts');
define('ERROR_CREATE', 'Kïûda');
define('CONTINUE', 'Turpinât ar citiem attçliem');
define('MAIN_SUCCESS', 'Fails %s tiek izmantots kâ galvenais attçls');
define('ERROR_RENAME', 'Kïûda %s pârsaucot par %s');
define('ERROR_NOT_FOUND', 'Fails %s nav atrasts');
define('BACK', 'Atgriezties');
define('THUMBS_WAIT', 'Notiek mazo un normâlo attçlu modificçğana, lûdzu uzgaidi...');
define('THUMBS_CONTINUE_WAIT', 'Turpinam modificçt mazos un normâlos attçlus...');
define('TITLES_WAIT', 'Norit sparîga virsrakstu modificçğana, uzgaidi...');
define('DELETE_WAIT', 'Dzçğu virsrakstus, lûdzu uzgaidi...');
define('REPLACE_WAIT', 'Dzçğu oriìinâlus, nomainot tos ar modificçtajiem attçliem, lûdzu uzgaidi...');
define('INSTRUCTION', 'Ieteikumi');
define('INSTRUCTION_ACTION', 'Izvçlies darbîbu');
define('INSTRUCTION_PARAMETER', 'Uzliec parametrus');
define('INSTRUCTION_ALBUM', 'Izvçlies albumu');
define('INSTRUCTION_PRESS', 'Nospied %s');
define('UPDATE', 'Modificç mazos un/vai normâlos attçlus');
define('UPDATE_WHAT', 'Kas jâmodificç');
define('UPDATE_THUMB', 'Tikai mazos attçlus');
define('UPDATE_PIC', 'Tikai modificçtos attçlus');
define('UPDATE_BOTH', 'Gan mazie, gan normâlie attçli');
define('UPDATE_NUMBER', 'Cik attçlus var modificçt ar vienu klikğíi');
define('UPDATE_OPTION', '(Ğo parametru samazini, ja ir problçmas ar modificçğanu)');
define('FILENAME_TITLE', 'Faila nosaukums &rArr; Attçla virsraksts');
define('FILENAME_HOW', 'Kâ modificçt attçlu');
define('FILENAME_REMOVE', 'Dzçst .jpg paplağinâjumu un _ nomainît ar atstarpi');
define('FILENAME_EURO', 'Konvertçt 2003_11_23_13_20_20.jpg uz 23/11/2003 13:20');
define('FILENAME_US', 'Konevertçt 2003_11_23_13_20_20.jpg uz 11/23/2003 13:20');
define('FILENAME_TIME', 'Konvertçt 2003_11_23_13_20_20.jpg uz 13:20');
define('DELETE', 'Attçlu virsrakstu un attçlu dzçğana');
define('DELETE_TITLE', 'Dzçst attçlu virsrakstus');
define('DELETE_ORIGINAL', 'Dzçst oriìinâlus');
define('DELETE_REPLACE', 'Dzçst oriìinâlus aizstâjot tos ar modificçtajiem attçliem');
define('SELECT_ALBUM', 'Izvçlies albumu');

// lang_pagetitle_php
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>