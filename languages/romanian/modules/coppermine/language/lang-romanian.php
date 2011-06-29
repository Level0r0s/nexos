<?php

/**************************************************************************************/
/*  CPG-NUKE: Advanced Content Management System                                      */
/**************************************************************************************/
/*  A highly modified version of PHP-Nuke 6.5                                         */
/*  which is Copyright (c) 2002 by Francisco Burzi                                    */
/*  http://phpnuke.org                                                                */
/*  Under the GNU General Public License version 2                                    */
/**************************************************************************************/
/* Coppermine Photo Gallery 1.3.0 for CMS                                             */
/**************************************************************************************/
/**************************************************************************************/
/* Port Copyright (C) 2004 Coppermine for CMS Dev Team                                */
/* http://nukephotogallery.com/                                                       */
/* Based on coppermine 1.1d by Surf  http://www.surf4all.net/                         */
/**************************************************************************************/
/* Updated by the Coppermine Dev Team  2003                                           */
/* (http://coppermine.sf.net/team/)                                                   */
/* see /docs/credits.html for details                                                 */
/**************************************************************************************/
/* Copyright (C) 2002,2003  GrÄ‚Â©gory DEMAR <gdemar@wanadoo.fr>                      */
/* http://www.chezgreg.net/coppermine/                                                */
/* This program is free software; you can redistribute it and/or modify               */
/* it under the terms of the GNU General Public License as published by               */
/* the Free Software FoundaĹŁion; either version 2 of the License, or                 */
/* (at your option) any later version.                                                */
/**************************************************************************************/
/**************************************************************************************/
/*                      /modules/coppermine/language/romanian.php                     */
/**************************************************************************************/
/*                                                                                    */
/*  (c) 2004 cpgnuke dev team akamu                                                   */
/*  Last modificaţion: 2004/08/08                                                     */
/*  $Id: lang-romanian.php                                                            */
/*  translator: Rancov Nicolae   e-mail: aikon@dap.ro                                 */
/*                               website: http://www.aikon.dap.ro                     */
/**************************************************************************************/

// error_reporting(E_ALL);

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Romanian');
define('LANG_NAME_NATIVE', 'Română');
define('LANG_COUNTRY_CODE', 'ro');
define('TRANS_NAME', 'Rancov Nicolae');
define('TRANS_EMAIL', 'aikon@dap.ro');
define('TRANS_WEBSITE', 'http://www.aikon.dap.ro/');
define('TRANS_DATE', '2004-08-08');
define('CHARSET', 'UTF-8');
define('TEXT_DIR', 'ltr');
define('YES', 'Da');
define('NO', 'Nu');
define('BACK', 'ÎNAPOI');
define('CONTINUE', 'CONTINUAŢI');
define('INFO', 'Informaţii');
define('ERROR', 'Eroare');
define('ALBUM_DATE_FMT', '%d %B, %Y');
define('LASTCOM_DATE_FMT', '%d/%m/%y @ %H:%M');
define('LASTUP_DATE_FMT', '%d %B, %Y');
define('REGISTER_DATE_FMT', '%d %B, %Y');
define('LASTHIT_DATE_FMT', '%d %B, %Y @ %I:%M %p');
define('COMMENT_DATE_FMT', '%d %B, %Y @ %I:%M %p');
//define('BYTE_UNITS', 'a:3:{i:0;s:5:"Bytes";i:1;s:2:"kB";i:2;s:2:"MB";}');
// Day of week
//$lang_day_of_week = array('Duminică','Luni','Marţi','Miercuri','Joi','Vineri','Sâmbătă',);
// Day of the month
//$lang_month = array('Ianuarie','Februarie','Martie','Aprilie','Mai','Iunie','Iulie','August','Septembrie','Octombrie','Noiembrie','Decembrie',);
// For the word censor
//$lang_bad_words = array('*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*',);


// lang_meta_album_names
define('RANDOM', 'Imagini în ordine aleatoare');
define('LASTUP', 'Ultimele adăugate');
define('LASTUPBY', 'Ultimele adăugate de mine');
define('LASTCOM', 'Ultimele comentarii');
define('TOPN', 'Cele mai afişate');
define('TOPRATED', 'Cele mai apreciate');
define('LASTHITS', 'Ultimele afişate');
define('SEARCH', 'Rezultatele căutării');
define('FAVPICS', 'Imagini favorite');

// lang_errors
define('ACCESS_DENIED', 'Nu aveţi dreptul să accesaţi această pagină.');
define('PERM_DENIED', 'Nu aveţi dreptul să efectuaţi această operaţie');
define('PARAM_MISSING', 'Scriptul a fost rulat fără parametrul - parametrii necesari.');
define('NON_EXIST_AP', 'Albumul/imaginea selectată nu există !');
define('QUOTA_EXCEEDED', 'Cota Dvs. a fost depăşită<br/><br/>Aveţi o cotă pe disk de [quota]kB, pozele Dvs. ocupă acum [space]kB, adăugând această imagine veţi depăşi această cotă.');
define('GD_FILE_TYPE_ERR', 'Când folosiţi biblioteca GD tipurile de fişiere ce le puteţi utiliza sunt JPEG şi PNG.');
define('INVALID_IMAGE', 'Imaginea înregistrată de Dvs. este coruptă sau nu poate fi prelucrată de biblioteca GD');
define('RESIZE_FAILED', 'Nu s-a putut crea pictograma sau imaginea redusă.');
define('NO_IMG_TO_DISPLAY', 'Nu este nici o imagine pentru afişat');
define('NON_EXIST_CAT', 'Categoria selectată nu există');
define('ORPHAN_CAT', 'O categorie are părinte inexistent, accesaţi managerul de categorii pentru a corectă problema.');
define('DIRECTORY_RO', 'Directorul \'%s\' nu poate fi scris, imaginile nu pot fi şterse');
define('NON_EXIST_COMMENT', 'Comentariul selectat nu există.');
define('PIC_IN_INVALID_ALBUM', 'Imaginea este într-un album inexistent (%s)!?');
define('BANNED', 'Momentan sunteţi exclus de pe acest sit.');
define('NOT_WITH_UDB', 'Această funcţie este blocată în Coppermine deoarece este integrată cu programul ce rulează forumul. Ce încercaţi să faceţi ori nu este suportat în această configuraţie, ori funcţia trebuie executată de programul ce rulează forumul.');
define('MEMBERS_ONLY', 'Aceasta funcţie este numai pentru membrii, vă rugăm înscrieţi-vă/logaţi-vă.');
define('MUSTBE_GOD', 'Aceasta funcţie este numai pentru administratorul sitului. Trebuie să fiţi logat ca şi superadmin sau god pentru a accesa această funcţie');

// lang_main_menu
define('ALB_LIST_TITLE', 'Lista albumelor');
define('ALB_LIST_LNK', 'Lista albumelor');
define('MY_GAL_TITLE', 'Galeria mea personală');
define('MY_GAL_LNK', 'Galeria mea');
define('MY_PROF_LNK', 'Profilul meu');
define('MY_PROF_TITLE','Verificaţi cota de disk ale Dvs. şi grupurile');
define('ADM_MODE_TITLE', 'Schimbaţi în modul administrator');
define('ADM_MODE_LNK', 'Mod administrator');
define('USR_MODE_TITLE', 'Schimbaţi în modul utilizator');
define('USR_MODE_LNK', 'Mod utilizator');
define('UPLOAD_PIC_TITLE', 'Încărcaţi o imagine într-un album');
define('UPLOAD_PIC_LNK', 'Încărcaţi o imagine');
define('REGISTER_TITLE', 'Creaţi un cont');
define('REGISTER_LNK', 'Înregistrare');
define('LOGIN_LNK', 'Login');
define('LOGOUT_LNK', 'Logout');
define('LASTUP_LNK', 'Ultimele imagini încărcate');
define('LASTUP_TITLE', 'Imaginile încărcate recent');
define('LASTCOM_TITLE',  'Imagini, în ordinea ultimelor comentarii proprii făcute');
define('LASTCOM_LNK',  'Ultimele comentarii');
define('TOPN_TITLE', 'Imagini care au fost cele mai afişate');
define('TOPN_LNK', 'Cele mai vizitate');
define('TOPRATED_TITLE', 'Cele mai apreciate imagini');
define('TOPRATED_LNK',  'Cele mai apreciate');
define('SEARCH_TITLE', 'Căutare în colecţia foto');
define('SEARCH_LNK', 'Căutare');
define('FAV_TITLE', 'Favoriele mele');
define('FAV_LNK', 'Favoritele mele');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Aprobare încărcare');
define('CONFIG_LNK', 'Configurare');
define('ALBUMS_LNK', 'Albume');
define('CATEGORIES_LNK', 'Categorii');
define('USERS_LNK', 'Utilizatori');
define('GROUPS_LNK', 'Grupuri');
define('COMMENTS_LNK', 'Revedeţi comentariile');
define('SEARCHNEW_LNK', 'Adăugaţi imagini în modul batch');
define('UTIL_LNK', 'Redimensionaţi imaginile');
define('BAN_LNK', 'Blocare utilizatori');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Creaţi / ordonaţi albumele mele');
define('MODIFYALB_LNK', 'Modificaţi albumele mele');
define('MY_PROF_LNK', 'Profilul meu');

// lang_cat_list
define('CATEGORY', 'Categorie');
define('ALBUMS', 'Albume');
define('PICTURES', 'Imagini');

// lang_album_list
define('ALBUM_ON_PAGE', '%d albume pe %d pagini');

// lang_thumb_view
define('DATE', 'DATA');
define('NAME', 'NUMELE FIŞIERULUI');
define('TITLE', 'TITLU');
define('SORT_DA', 'Sortare după dată, ascendent');
define('SORT_DD', 'Sortare după dată, descendent');
define('SORT_NA', 'Sortare după nume, ascendent');
define('SORT_ND', 'Sortare după nume, ascendent');
define('SORT_TA', 'Sortare după titlu, ascendent');
define('SORT_TD', 'Sortare după titlu, ascendent');
define('PIC_ON_PAGE', '%d imagini pe %d pagini');
define('USER_ON_PAGE', '%d utilizatori pe %d pagini');
define('SORT_RA', 'Sortare după clasificare ascendent');
define('SORT_RD', 'Sortare după clasificare descendent');
define('RATING', 'CLASIFICARE');
define('SORT_TITLE', 'Sortaţi imaginile după:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Înapoi la pagina cu pictograme');
define('PIC_INFO_TITLE', 'Afişare/Ascundere informaţii despre imagine');
define('SLIDESHOW_TITLE', 'Diaporama');
define('SLIDESHOW_DISABLED', 'Modul vederi eletronice este dezactivat');
define('SLIDESHOW_DISABLED_MSG', 'Această funcţie este numai pentru membrii, vă rugăm înregistraţi-vă/logaţi-vă.');
define('ECARD_TITLE', 'Trimiteţi această imagine ca vedere electronică');
define('ECARD_DISABLED', 'Vederile electronice sunt dezactivate');
define('ECARD_DISABLED_MSG', 'Nu aveţi permisiune să trimiteţi vederi electronice');
define('PREV_TITLE', 'Vizualizaţi imaginea precedentă');
define('NEXT_TITLE', 'Vizualizaţi imaginea următoare');
define('PIC_POS', 'IMAGINEA %s/%s');
define('NO_MORE_IMAGES', 'Nu mai există imagini în această galerie');
define('NO_LESS_IMAGES', 'Aceasta este prima imagine din galerie');

// lang_rate_pic
define('RATE_THIS_PIC', 'Apreciaţi această imagine ');
define('NO_VOTES', '(Nici un vot încă)');
define('RATING', '(apreciere curentă : %s / 5 cu %s voturi)');
define('RUBBISH', 'Nereuşită');
define('POOR', 'Slabă');
define('FAIR', 'Acceptabilă');
define('GOOD', 'Bună');
define('EXCELLENT', 'Excelentă');
define('GREAT', 'Nemaipomenită');

// lang_cpg_die
define('INFORMATION', 'Informaţii');
define('ERROR', 'Eroare');
define('CRITICAL_ERROR', 'Eroare critică');
define('FILE', 'Fişier: ');
define('LINE', 'Linia: ');

// lang_display_thumbnails
define('FILENAME', 'Nume fişier : ');
define('FILESIZE', 'Mărimea fiserului : ');
define('DIMENSIONS', 'Dimensiuni : ');
define('DATE_ADDED', 'Data adăugării : ');

// lang_get_pic_data
define('N_COMMENTS', '%s comentarii');
define('N_VIEWS', '%s afişări');
define('N_VOTES', '(%s voturi)');



// lang_admin_php
define('LV_ADMIN', 'Părăsiţi modul administrator...');
define('ENT_ADMIN', 'Intraţi în modul administrator...');
// lang_albmgr_php
define('ALB_NEED_NAME', 'Albumele trebuie să aibă un nume !');
define('CONFIRM_MODIFS', 'Sunteţi sigur că vreţi să faceţi aceste modificări ?');
define('NO_CHANGE', 'Nu aţi făcut nici o modificare !');
define('NEW_ALBUM', 'Album nou');
define('CONFIRM_DELETE1', 'Sunteţi sigur că vreţi să ştergeţi acest album?');
define('CONFIRM_DELETE2', '\\nToate imaginile şi comentariile conţinute vor fi pierdute !');
define('SELECT_FIRST', 'Selectaţi un album inainte');
define('ALB_MRG', 'Managerul de albume');
define('MY_GALLERY', '* Galeria mea *');
define('NO_CATEGORY', '* Nici o categorie *');
define('DELETE', 'Ştergeţi');
define('NEW', 'Nou');
define('APPLY_MODIFS', 'Efectuaţi modificările');
define('SELECT_CATEGORY', 'Selectaţi o categorie');

// lang_catmgr_php
define('MISS_PARAM', 'Nu au fost stabiliţi parametrii necesari pentru operaţia \'%s\' !');
define('UNKNOWN_CAT', 'Categoria selectată nu există în baza de date');
define('USERGAL_CAT_RO', 'Categoria Galeria utilizatorului nu poate fi ştearsă!');
define('MANAGE_CAT', 'Administraţi categoriile');
define('CONFIRM_DELETE', 'Sunteţi sigur că doriţi să ŞTE această categorie');
define('CATEGORY', 'Categorie');
define('OPERATIONS', 'Operatii');
define('MOVE_INTO', 'Mutati în');
define('UPDATE_CREATE', 'Modificaţi/Creaţi o categorie');
define('PARENT_CAT', 'Categoria parinte');
define('CAT_TITLE', 'Titlul categoriei');
define('CAT_DESC', 'Descrierea categoriei');

// lang_config_php
define('TITLE', 'Configurare');
define('RESTORE_CFG', 'Reveniti la setarile implicite');
define('SAVE_CFG', 'Salvati noua configuratie');
define('NOTES', 'Notite');
define('INFO', 'Informaţii');
define('UPD_SUCCESS', 'Configuratia Coppermine a fost modificata');
define('RESTORE_SUCCESS', 'Configuratia Coppermine implicita a fost restabilita');
define('NAME_A', 'Nume ascendent');
define('NAME_D', 'Nume descendent');
define('TITLE_A', 'Titlu ascendent');
define('TITLE_D', 'Titlu descendent');
define('DATE_A', 'Data ascendenta');
define('DATE_D', 'Data descendenta');
define('RATING_A', 'Clasificare ascendenta');
define('RATING_D', 'Clasificare descendenta');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Inaltime');
define('TH_WD', 'Latime');

// lang_config_data
define('CONFIG_GENSET', 'generale');
define('GALLERY_NAME', 'Numele galeriei');
define('GALLERY_DESCRIPTION', 'Descrierea galeriei');
define('GALLERY_ADMIN_EMAIL', 'Adresa e-mail a administratorului');
define('ECARDS_MORE_PIC_TARGET', 'Adresa directorului radacina al sitului, de exemplu http://www.situl_meu.ro/html/');
define('LANG', 'Limba');
define('CPGTHEME', 'Tema grafica');
define('NICE_TITLES', 'Titlurile specifice în pagina în loc de >Coppermine');
define('RIGHT_BLOCKS', 'Afişati blocurile în dreapta');
define('ALB_LIST_VIEW_TITLE', 'Lista cu albume');
define('MAIN_TABLE_WIDTH', 'Latimea tabelului principal (pixeli sau %)');
define('SUBCAT_LEVEL', 'Numărul de nivele de categorii care să fie afişate');
define('ALBUMS_PER_PAGE', 'Numărul albumelor ce vor fi afişate');
define('ALBUM_LIST_COLS', 'Numărul de coloane în lista de albume');
define('ALB_LIST_THUMB_SIZE', 'Dimensiunea pictogramelor în pixeli');
define('MAIN_PAGE_LAYOUT', 'Continutul paginii principale');
define('FIRST_LEVEL', 'Afişati pictogramele albumelor din primul nivel în categorii');
define('THUMB_VIEW_TITLE', 'Pictograme');
define('THUMBCOLS', 'Numărul de coloane pe pagina cu pictograme');
define('THUMBROWS', 'Numărul de randuri pe pagina cu pictograme');
define('MAX_TABS', 'Numărul maxim de taburi ce vor fi afişate');
define('CAPTION_IN_THUMBVIEW', 'Afişati descrierea imaginii (pe langa titlu) sub pictograma');
define('DISPLAY_COMMENT_COUNT', 'Afişati numarul de comentarii sub pictograma');
define('DEFAULT_SORT_ORDER', 'Ordinea de sortare a imaginilor implicita');
define('MIN_VOTES_FOR_RATING', 'Numărul minim de voturi pentru ca o imagine să apara în lista \'Cele mai apreciate\' ');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'Afişarea imaginii &amp; setarile comentariilor');
define('PICTURE_TABLE_WIDTH', 'Latimea tabelului pentru afişarea imaginii (pixeli sau %)');
define('DISPLAY_PIC_INFO', 'Informaţiile despre imagine sunt vizibile în mod implicit');
define('FILTER_BAD_WORDS', 'Filtrati cuvintele urate în comentarii');
define('ENABLE_SMILIES', 'Activati Smilies în comentarii');
define('DISABLE_FLOOD_PROTECTION', 'Permiteti mai multe comentarii consecutive despre o imagine de la acelasi utilizator');
define('COMMENT_EMAIL_NOTIFICATION', 'Trimite-ti un e-mail administratorului sitului la trimiterea unui comentariu');
define('MAX_IMG_DESC_LENGTH', 'Lungimea maxima a descrierii imagini');
define('MAX_COM_WLENGTH', 'Numărul maxim de caractere într-un cuvant');
define('MAX_COM_LINES', 'Numărul maxim de linii într-un comentariu');
define('MAX_COM_SIZE', 'Lungimea maxima a unui comentariu');
define('DISPLAY_FILM_STRIP', 'Afişati rama film');
define('MAX_FILM_STRIP_ITEMS', 'Numărul de obiecte în rama film');
define('ALLOW_ANON_FULLSIZE', 'Permiteti afişarea imaginii la dimensiunea originala de catre anonimi');
define('PIC_THUMB_SETTING_TITLE',  'Setări imagini şi pictograme');
define('JPEG_QUAL', 'Calitatea fişierelor JPEG');
define('THUMB_WIDTH', 'Dimensiunea maxima a unei pictograme <b>*</b>');
define('THUMB_USE', 'Folosiţi dimensiunea (latime, inaltime sau max aspect pentru pictograma)<b>*</b>');
define('MAKE_INTERMEDIATE', 'Creaţi imagini intermediare');
define('PICTURE_WIDTH', 'Latimea sau inaltimea maxima a unei imagini intermediare <b>*</b>');
define('MAX_UPL_SIZE', 'Dimensiunea maxima pentru o imagine de încărcat(kB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Latimea sau inaltimea maxima a imaginilor de încărcat(pixeli)');
define('USER_SETTING_TITLE',   'Setări utilizator');
define('ALLOW_USER_REGISTRATION', 'Permiteti înregistrare de utilizatori noi');
define('REG_REQUIRES_VALID_EMAIL', 'Înregistarrea utilizatorilor necesită verificarea e-mailului');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Permiteti la doi utilizatori aibă aceeasi adresa de e-mail');
define('ALLOW_PRIVATE_ALBUMS', 'Utilizatori pot avea albume private');
define('CUSTOM_FIELDS_TITLE', 'Campuri pentru descrierea imaginii(lasati loc liber daca nu le folosiţi)');
define('USER_FIELD1_NAME', 'Numele campului 1');
define('USER_FIELD2_NAME', 'Numele campului 2');
define('USER_FIELD3_NAME', 'Numele campului 3');
define('USER_FIELD4_NAME', 'Numele campului 4');
define('58', 'Setări avansate pentru imagini şi pictograme');
define('SHOW_PRIVATE', 'Aratati iconita Album privat utilizatorilor care nu sunt logati');
define('FORBIDEN_FNAME_CHAR', 'Caractere interzise în numele fişierelor');
define('ALLOWED_FILE_EXTENSIONS', 'Aceptati extensia fişierelor pentru imaginile încărcate');
define('THUMB_METHOD', 'Metoda de redimensionare a imaginilor');
define('IMPATH', 'Calea catre utilitarul ImageMagick/Netpbm \'convert\'(de examplu /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Tipuri de imagini permise(valabil numai pentru ImageMagick)');
define('IM_OPTIONS', 'Optiuni în linia de comanda pentru ImageMagick');
define('READ_EXIF_DATA', 'Citeste datele EXIF din fişierele JPEG');
define('READ_IPTC_DATA', 'Citeste datele IPTC din fişierele JPEG');
define('FULLPATH', 'Directorul cu albume <b>*</b>');
define('USERPICS', 'Directorul pentru imaginile utilizatorilor <b>*</b>');
define('NORMAL_PFX', 'Prefixul pentru imaginile intermediare <b>*</b>');
define('THUMB_PFX', 'Prefixul pentru pictograme <b>*</b>');
define('DEFAULT_DIR_MODE', 'Modul predefinit al directoarelor');
define('DEFAULT_FILE_MODE', 'Modul predefinit al imaginilor');
define('PICINFO_DISPLAY_FILENAME', 'Informaţii despre imagine - afişati numele fişierului');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Informaţii despre imagine - afişati numele albumului');
define('PICINFO_DISPLAY_FILE_SIZE', 'Informaţii despre imagine - afişati dimensiunile fişierului');
define('PICINFO_DISPLAY_DIMENSIONS', 'Informaţii despre imagine - afişati dimensiunile imaginii');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Informaţii despre imagine - afişati numarul de afişări a imaginii');
define('PICINFO_DISPLAY_URL', 'Informaţii despre imagine - afişati URL-ul imaginii');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Informaţii despre imagine - afişati URL-ul imaginii ca şi un link marcator');
define('PICINFO_DISPLAY_FAVORITES', 'Informaţii despre imagine - afişati linkul catre albumul favorit');
define('COOKIE_SETTING_TITLE', 'Cookies &amp; Setări pentru charset');
define('COOKIE_NAME', 'Numele cookie-ului utilizat de script');
define('COOKIE_PATH', 'Calea cookie-ului utilizat de script');
define('CHAR_SET', 'Character encoding');
define('MISC_SETTING_TITLE', 'Setări diverse');
define('DEBUG_MODE', 'Activeaza modul debug');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Aratati atentionarea Actualizare Coppermine administratorilor');
define('90', '<br /><div align="center">(*) Campurile marcate cu * nu trebuiesc modificate daca există deja imagini în galeria Dvs.</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Trebuie să introduceţi numele Dvs. şi un comentariu');
define('COM_ADDED', 'Comentariu adaugat');
define('ALB_NEED_TITLE', 'Trebuie să furnizati un titlu pentru album !');
define('NO_UDP_NEEDED', 'Nu este necesara nici o modificare.');
define('ALB_UPDATED', 'Album modificat');
define('UNKNOWN_ALBUM', 'Albumul selectat nu există sau nu aveţi permisiunea să încărcati în acest album');
define('NO_PIC_UPLOADED', 'Nici o imagine nu a fost încărcata !<br /><br />Dacă intradevar aţi selectat o imagine, verificaţi daca serverul permite uploaduri...');
define('ERR_MKDIR', 'Eroare la crearea directorului %s !');
define('DEST_DIR_RO', 'Directorul destinatie %s nu poate fi scris de catre script !');
define('ERR_MOVE', 'Imposibil de mutat %s în %s !');
define('ERR_FSIZE_TOO_LARGE', 'Dimensiunea imaginii este prea mare (maximul permis este %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Mărimea fişierului încărcat este prea mare (maximul permis este %s kB) !');
define('ERR_INVALID_IMG', 'Fiserul încărcat nu este o imagine valida !');
define('ALLOWED_IMG_TYPES', 'Puteţi încărca doar %s imagini.');
define('ERR_INSERT_PIC', 'Imaginea \'%s\' nu poate fi inserata în album ');
define('UPLOAD_SUCCESS', 'Imaginea Dvs. a fost încărcata cu succes<br /><br />Vă fi vizibila după aprobarea administratorului.');
define('INFO', 'Informaţii');
define('ERR_COMMENT_EMPTY', 'Cometariul Dvs. este gol !');
define('ERR_INVALID_FEXT', 'Doar fişierele cu urmatoarele extensii sunt permise : <br /><br />%s.');
define('NO_FLOOD', 'Ne pare rău dar sunteţi deja autorul ultimului comentariu postat pentru această imagine<br /><br />Editaţi comentariul postat daca doriţi să-l modificaţi');
define('REDIRECT_MSG', 'Sunteţi redirectionat.<br /><br /><br />Click pe \'CONTINUARE\' daca pagina nu se încărca automat');
define('UPL_SUCCESS', 'Imaginea Dvs. a fost adaugată cu succes');

// lang_delete_php
define('CAPTION', 'Descriere');
define('FS_PIC', 'imaginea la dimensiuni maxime');
define('DEL_SUCCESS', 'ştearsă cu succes');
define('NS_PIC', 'imaginea de dimensiuni normale');
define('ERR_DEL', 'nu poate fi ştearsă');
define('THUMB_PIC', 'pictograma');
define('COMMENT', 'comentariul');
define('IM_IN_ALB', 'imaginea în album');
define('ALB_DEL_SUCCESS', 'Albumul \'%s\' a fost şters');
define('ALB_MGR', 'Managerul de albume');
define('ERR_INVALID_DATA', 'Date incorecte primite în \'%s\'');
define('CREATE_ALB', 'Creare album \'%s\'');
define('UPDATE_ALB', 'Modificare album \'%s\' cu titlul \'%s\' şi indexul \'%s\'');
define('DEL_PIC', 'Ştergeţi imaginea');
define('DEL_ALB', 'Ştergeţi albumul');
define('DEL_USER', 'Ştergeţi utilizatorul');
define('ERR_UNKNOWN_USER', 'Utilizatorul selectat nu există!');
define('COMMENT_DELETED', 'Comentariul a fost şters cu succes');

// lang_display_image_php
define('CONFIRM_DEL', 'Sunteţi sigur că doriţi să ŞTERGEŢI această imagine ? \\nComentariile vor fi de asemenea şterse.');
define('DEL_PIC', 'ŞTERGEŢI ACEASTĂ IMAGINE');
define('SIZE', '%s x %s pixeli');
define('VIEWS', '%s ori');
define('SLIDESHOW', 'Diaporama');
define('STOP_SLIDESHOW', 'OPRIŢI DIAPORAMA');
define('VIEW_FS', 'Click pentru a vedea imaginea la dimensiuni originale');
define('EDIT_PIC', 'EDITAŢI INFORMAŢIILE IMAGINII');

// lang_picinfo
define('TITLE', 'Informaţii despre imagine');
define('FILENAME', 'Nume fişier');
define('ALBUM NAME', 'Nume album');
define('RATING', 'Apreciere (%s voturi)');
define('KEYWORDS', 'Cuvinte cheie');
define('FILE SIZE', 'Dimensiune fişier');
define('DIMENSIONS', 'Dimensiune imagine');
define('DISPLAYED', 'Afişată');
define('CAMERA', 'Camera');
define('DATE TAKEN', 'Data fotografierii');
define('APERTURE', 'Apertura');
define('EXPOSURE TIME', 'Timp de expunere');
define('FOCAL LENGTH', 'Distanţa focală');
define('COMMENT', 'Comentariu');
define('ADDFAV', 'Adăugaţi în Favorite');
define('ADDFAVPHRASE', 'Favorite');
define('REMFAV', 'Ştergeţi din Favorite');
define('IPTCTITLE', 'Titlul IPTC');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'cuvinte cheie în IPTC');
define('IPTCCATEGORY', 'categorii IPTC');
define('IPTCSUBCATEGORIES', 'sub-categorii IPTC');
define('BOOKMARK_PAGE', 'Retineţi imaginea');

// lang_display_comments
define('OK', 'Ok');
define('EDIT_TITLE', 'Editaţi acest comentariu');
define('CONFIRM_DELETE', 'Sunteţi sigur că doriţi să ştergeţi acest comentariu ?');
define('ADD_YOUR_COMMENT', 'Adăugaţi comentariul Dvs.');
define('NAME', 'Nume');
define('COMMENT', 'Comentariu');
define('YOUR_NAME', 'Anonim');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Click pe imagine pentru a închide fereastra');

// lang_ecard_php
define('TITLE', 'Trimiteţi o vedere electronică');
define('INVALID_EMAIL', '<b>Atenţie</b> : adresa de e-mail este incorectă !');
define('ECARD_TITLE', 'O vedere electronică de la %s pentru Dvs.');
define('VIEW_ECARD', 'Dacă vederea nu este afişată corect daţi click pe acest link');
define('VIEW_MORE_PICS', 'Click aici pentru a vedea mai multe imagini!');
define('SEND_SUCCESS', 'Vederea Dvs. a fost trimisă');
define('SEND_FAILED', 'Ne pare rău dar serverul nu poate trimite vederea Dvs...');
define('FROM', 'De la');
define('YOUR_NAME', 'Numele Dvs.');
define('YOUR_EMAIL', 'Adresa Dvs. e-mail');
define('TO', 'Către');
define('RCPT_NAME', 'Numele adresantului');
define('RCPT_EMAIL', 'Adresa e-mail destinaţie');
define('GREETINGS', 'Salutări');
define('MESSAGE', 'Mesaj');

// lang_editpics_php
define('PIC_INFO', 'Informaţii&nbsp;imagine');
define('ALBUM', 'Album');
define('TITLE', 'Titlu');
define('DESC', 'Descriere');
define('KEYWORDS', 'Cuvinte cheie');
define('PIC_INFO_STR', '%sx%s - %sKB - %s afişări - %s voturi');
define('APPROVE', 'Aprobaţi imaginea');
define('POSTPONE_APP', 'Amânaţi aprobarea');
define('DEL_PIC', 'Ştergeţi imaginea');
define('READ_EXIF', 'Citiţi din nou informaţiile EXIF');
define('RESET_VIEW_COUNT', 'Resetaţi contorul afişărilor');
define('RESET_VOTES', 'Resetaţi contorul voturilor');
define('DEL_COMM', 'Ştergeţi comentariile');
define('UPL_APPROVAL', 'Aprobare încărcare');
define('EDIT_PICS', 'Editaţi imaginile');
define('SEE_NEXT', 'Afişati imaginile urmatoare');
define('SEE_PREV', 'Afişati imaginile anterioare');
define('N_PIC', '%s imagini');
define('N_OF_PIC_TO_DISP', 'Numărul de imagini de afişat');
define('APPLY', 'Aplicaţi modificările');

// lang_groupmgr_php
define('GROUP_NAME', 'Numele grupului');
define('DISK_QUOTA', 'Cota pe disc');
define('CAN_RATE', 'Poate aprecia imaginile');
define('CAN_SEND_ECARDS', 'Poate trimite vederi');
define('CAN_POST_COM', 'Poate trimite comentarii');
define('CAN_UPLOAD', 'Poate încărca imagini');
define('CAN_HAVE_GALLERY', 'Poate avea o galerie personală');
define('APPLY', 'Executaţi modificările');
define('CREATE_NEW_GROUP', 'Creaţi un grup nou');
define('DEL_GROUPS', 'Ştergeţi grupul/grupurile selectat(e)');
define('CONFIRM_DEL', 'Atenţie, când ştergeţi un grup, utilizatorii aparţinând acestui grup vor fi transferaţi în grupul \'Înregistaţi\' !\\n\\nSunteţi sigur că doriţi să conţinuaţi?');
define('TITLE', 'Administare grupuri de utilizatori');
define('APPROVAL_1', 'Aprobare Înreg. Pub. (1)');
define('APPROVAL_2', 'Aprobare Înreg. Priv. (2)');
define('NOTE1', '<b>(1)</b> Încărcarea într-un album public necesită aprobarea administratorului');
define('NOTE2', '<b>(2)</b> Încărcarea într-un album aparţinând utilizatorului necesită aprobarea administratorului');
define('NOTES', 'Notiţe');

// lang_index_php
define('WELCOME', 'Bine aţi venit !');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Sunteţi sigur că doriţi să ŞTERGEŢI acest album ? \\nToate imaginile şi comentariile conţinute vor fi şterse de asemenea.');
define('DELETE', 'ŞTERGEŢI');
define('MODIFY', 'PROPRIETĂŢI');
define('EDIT_PICS', 'EDITARE IMAGINI');

// lang_list_categories
define('HOME', 'Pagina principală');
define('STAT1', '<b>[pictures]</b> imagini în <b>[albums]</b> albume şi <b>[cat]</b> categorii cu <b>[comments]</b> comentarii afişate de <b>[views]</b> ori');
define('STAT2', '<b>[pictures]</b> imagini în <b>[albums]</b> albume afişate de <b>[views]</b> ori');
define('XX_S_GALLERY', '%s\'s Galerie');
define('STAT3', '<b>[pictures]</b> imagini în <b>[albums]</b> albume cu <b>[comments]</b> comentarii afişate de <b>[views]</b> ori');

// lang_list_users
define('USER_LIST', 'Lista utilizatorilor');
define('NO_USER_GAL', 'Nu există galerii ale utilizatorilor');
define('N_ALBUMS', '%s album(e)');
define('N_PICS', '%s imagini');

// lang_list_albums
define('N_PICTURES', '%s imagini');
define('LAST_ADDED', ', ultima adaugată la %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Modificaţi album %s');
define('GENERAL_SETTINGS', 'Setări generale');
define('ALB_TITLE', 'Titlu album');
define('ALB_CAT', 'Categoria albumului');
define('ALB_DESC', 'Descrierea albumului');
define('ALB_THUMB', 'Pictograma albumului');
define('ALB_PERM', 'Permisiile acestui album');
define('CAN_VIEW', 'Albumul poate fi văzut de');
define('CAN_UPLOAD', 'Vizitatorii pot încărca imagini');
define('CAN_POST_COMMENTS', 'Vizitatorii pot publica comentarii');
define('CAN_RATE', 'Vizitatorii pot aprecia imaginile');
define('USER_GAL', 'Galeria utilizatorului');
define('NO_CAT', '* Nici o categorie *');
define('ALB_EMPTY', 'Albumul este gol');
define('LAST_UPLOADED', 'Ultimile încărcate');
define('PUBLIC_ALB', 'Toată lumea (album public)');
define('ME_ONLY', 'Doar eu');
define('OWNER_ONLY', 'Doar proprietarul albumului (%s)');
define('GROUPP_ONLY', 'Membrii grupului \'%s\'');
define('ERR_NO_ALB_TO_MODIFY', 'Nu există nici un album pe care să-l puteţi modifica în baza de date.');
define('UPDATE', 'Modificaţi album');

// lang_rate_pic_php
define('ALREADY_RATED', 'Ne pare rău dar aţi votat deja această imagine');
define('RATE_OK', 'Votul Dvs. ');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'Deşi administratorii paginii {SITE_NAME} vor încerca să şteargă sau să editeze orice material nepermis sau obscen cât de repede cu putinţă, este imposibil să fie verificat fiecare mesaj sau comentariu. De aceea sunteţi de acord că toate mesajele postate pe acest sit exprima opiniile autorului şi nu ale administratorilor (exceptând mesajele transmise de ei) şi deci nu pot fi traşi la răspundere.<br />
<br/>
Sunteţi de acord să nu publicaţi nici un mesaj obscen, vulgar, ameninţător, cu orientare sexuală sau orice alt mesaj ce încălcă legile. Sunteţi de acord că administratorul şi moderatorii site-ului {SITE_NAME} au dreptul să modifice sau să şteargă orice conţinut oricând consideră ei necesar. Ca utilizator sunteţi de acord că orice informaţie introdusă mai sus va fi stocată într-o bază de date. Deşi această informaţie nu vă fi oferită unei terţe părţi, administratorii nu pot fi făcuţi responsabili în cazul unei accesări forţate, ilegale a bazei de date ce ar duce la compromiterea acesteia. <br />
<br/>
Acest sit foloseste cookie-uri pentru a stoca informaţii pe computerul Dvs. Acestea servesc doar la buna funcţionare a sitului. Adresa Dvs. e-mail este folosită doar pentru a verifica parola şi procesul de înregistrare. <br />
<br/>
Dând click pe butonul \'Sunt de acord\' de mai jos sunteţi de acord să respectati şi acceptaţi condiţiile de mai sus.');

// lang_register_php
define('PAGE_TITLE', 'Înregistrare utilizator');
define('TERM_COND', 'Termeni şi condiţii');
define('I_AGREE', 'Sunt de acord');
define('SUBMIT', 'Trimiteţi înregistrarea');
define('ERR_USER_EXISTS', 'Numele de utilizator ales există deja, vă rugăm să alegeţi altul');
define('ERR_PASSWORD_MISMATCH', 'Cele două parole nu sunt identice, vă rugăm să le introduceţi din nou');
define('ERR_UNAME_SHORT', 'Numele utilizator trebuie să aibă minim 2 caractere');
define('ERR_PASSWORD_SHORT', 'Parola trebuie să aibă minim 2 caractere');
define('ERR_UNAME_PASS_DIFF', 'Numele utilizator şi parola trebuie să fie diferite');
define('ERR_INVALID_EMAIL', 'Adresa e-mail este incorectă');
define('ERR_DUPLICATE_EMAIL', 'Alt utilizator este înregistrat deja cu această adresa e-mail');
define('ENTER_INFO', 'Introduceţi datele pentru înregistrare');
define('REQUIRED_INFO', 'Informaţii necesare');
define('OPTIONAL_INFO', 'Informaţii optionale');
define('USERNAME', 'Utilizator');
define('PASSWORD', 'Parola');
define('PASSWORD_AGAIN', 'Confirmaţi parola');
define('EMAIL', 'E-mail');
define('LOCATION', 'Locaţie');
define('INTERESTS', 'Domenii de interes');
define('WEBSITE', 'Pagina web');
define('OCCUPATION', 'Ocupaţie');
define('ERROR', 'EROARE');
define('CONFIRM_EMAIL_SUBJECT', '%s - Confirmarea înregistrării');
define('INFORMATION', 'Informaţii');
define('FAILED_SENDING_EMAIL', 'Mesajul de confirmare a înregistrării nu poate fi trimis !');
define('THANK_YOU', 'Vă mulţumim pentru că v-aţi înregistrat.<br /><br /> A fost trimis la adresa e-mail specificată un e-mail conţinând informaţii despre cum să activaţi contul Dvs.');
define('ACCT_CREATED', 'Contul Dvs. a fost creat şi vă puteţi loga cu numele de utilizator şi parola Dvs.');
define('ACCT_ACTIVE', 'Contul Dvs. este acum activ şi vă puteţi loga cu numele dee utilizator şi parola Dvs.');
define('ACCT_ALREADY_ACT', 'Contul Dvs. este deja activ!');
define('ACCT_ACT_FAILED', 'Acest cont nu poate fi activat!');
define('ERR_UNK_USER', 'Utilizatorul selectat nu există!');
define('X_S_PROFILE', 'Profilul lui %s');
define('GROUP', 'Grup');
define('REG_DATE', 'Înregistrat la');
define('DISK_USAGE', 'Utilizare disc');
define('CHANGE_PASS', 'Schimbaţi parola mea');
define('CURRENT_PASS', 'Parola curentă');
define('NEW_PASS', 'Parola nouă');
define('NEW_PASS_AGAIN', 'Reintroduceţi parola nouă');
define('ERR_CURR_PASS', 'Parola curentă este incorectă');
define('APPLY_MODIF', 'Executaţi modificările');
define('UPDATE_SUCCESS', 'Profilul Dvs. a fost modificat');
define('PASS_CHG_SUCCESS', 'Parola Dvs. a fost schimbată');
define('PASS_CHG_ERROR', 'Parola Dvs. nu a fost schimbată');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Vă mulţumim că v-aţi înregistrat la {SITE_NAME}

Numele Dvs. de utilizator este: "{USER_NAME}"
Parola Dvs. de utilizator este: "{PASSWORD}"

Pentru a vă activa contul Dvs. trebuie să daţi click pe linkul următor
sau copy and paste în browserul Dvs.

{ACT_LINK}

Numai bine,

Administratorii de la {SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', 'Revizuire comentarii');
define('NO_COMMENT', 'Nu există comentarii care să fie revizuite');
define('N_COMM_DEL', '%s comentarii şterse');
define('N_COMM_DISP', 'Numărul de comentarii de afişat');
define('SEE_PREV', 'Afişaţi anteriorul');
define('SEE_NEXT', 'Afişaţi următorul');
define('DEL_COMM', 'Ştergeţi comentariile selectate');

// lang_search_php
define('SEARCH', 'Căutaţi în colecţia de imagini');

// lang_search_new_php
define('PAGE_TITLE', 'Cautaţi imagini noi');
define('SELECT_DIR', 'Selectaţi directorul');
define('SELECT_DIR_MSG', 'Această funcţie vă permite să adăugaţi mai multe imagini o dată, imagini încărcate de Dvs. pe server prin FTP.<br /><br />Selectaţi directorul unde aţi încărcat imaginile');
define('NO_PIC_TO_ADD', 'Nu există nici o imagine de adăugat');
define('NEED_ONE_ALBUM', 'Aveţi nevoie de cel putin un album pentru a folosi această funcţie');
define('WARNING', 'Atenţie');
define('CHANGE_PERM', 'scriptul nu poate scrie în acest director, trebuie să schimbaţi modul la 755 sau 777 înainte de a încerca să adăugaţi imaginile !');
define('TARGET_ALBUM', '<b>Puneţi imaginile din &quot;</b>%s<b>&quot; în </b>%s');
define('FOLDER', 'Director');
define('IMAGE', 'Imagine');
define('ALBUM', 'Album');
define('RESULT', 'Rezultat');
define('DIR_RO', 'Nu poate fi scris. ');
define('DIR_CANT_READ', 'Nu poate fi citit. ');
define('INSERT', 'Adăugaţi imagini noi în galerie');
define('LIST_NEW_PIC', 'Lista noilor imagini');
define('INSERT_SELECTED', 'Inseraţi imaginile selectate');
define('NO_PIC_FOUND', 'Nu a fost gasită nici o imagine nouă');
define('BE_PATIENT', 'Vă rugăm asteptaţi, scriptul necesită timp pentru a procesa imaginile');
define('NOTES', '<ul><li><b>OK</b> : înseamnă că imaginea a fost adaugată cu succes<li><b>DP</b> : înseamnă că imaginea este un duplicat şi există deja în baza de date<li><b>PB</b> : înseamnă că imaginea nu a putut fi adaugată, verificaţi configuratia şi permisiile directoarelor un sunt stocate imaginile.<li>Dacă \'semnele\' OK, DP, PB nu apar, daţi click pe iconiţa de imagine defectă pentru a verifica mesajele de eroare produse de PHP<li>Dacă navigatorul Dvs. raportează \'timeout\', apăsaţi butonul de reîncărcare a paginii</ul>');
define('SELECT_ALBUM', 'Selectaţi albumul');
define('NO_ALBUM', 'Nu a fost selectat nici un album, întoarceţi-vă şi selectaţi un album unde să puneţi imaginile Dvs.');

// lang_upload_php
define('TITLE', 'Încărcaţi o imagine');
define('MAX_FSIZE', 'Dimensiunea maximă a fişierului este %s kB');
define('ALBUM', 'Album');
define('PICTURE', 'Imagine');
define('PIC_TITLE', 'Titlul imaginii');
define('DESCRIPTION', 'Descrierea imaginii');
define('KEYWORDS', 'Cuvinte cheie (separate cu spaţii)');
define('ERR_NO_ALB_UPLOADABLES', 'Ne pare rău, dar nu există nici un album unde puteţi încărca imagini');

// lang_usermgr_php
define('TITLE', 'Administrare utilizatori');
define('NAME_A', 'Nume ascendent');
define('NAME_D', 'Nume descendent');
define('GROUP_A', 'Grup ascendent');
define('GROUP_D', 'Grup descendent');
define('REG_A', 'Data înregistrării ascendent');
define('REG_D', 'Data înregistrării descendent');
define('PIC_A', 'Număr imagini ascendent');
define('PIC_D', 'Număr imagini descendent');
define('DISKU_A', 'Utilizare spaţiu ascendent');
define('DISKU_D', 'Utilizare spaţiu descendent');
define('SORT_BY', 'Sorteaza utilizatorii după');
define('ERR_NO_USERS', 'Tabelul cu utilizatori este gol !');
define('ERR_EDIT_SELF', 'Nu puteţi edita propriul profil. Folosiţi optiunea \'Profilul meu\' pentru aceasta');
define('EDIT', 'EDITAŢI');
define('DELETE', 'ŞTERGEŢI');
define('NAME', 'Nume utilizator');
define('GROUP', 'Grup');
define('INACTIVE', 'Inactiv');
define('OPERATIONS', 'OperaŢii');
define('PICTURES', 'Imagini');
define('DISK_SPACE', 'Spaţiu utilizat / Cota');
define('REGISTERED_ON', 'Înregistrat la');
define('U_USER_ON_P_PAGES', '%d utilizatori pe %d pagini');
define('CONFIRM_DEL', 'Sunteţi sigur că doriţi să ŞTERGEŢI acest utilizator ? \\nToate imaginile şi albumele sale vor fi de asemenea şterse');
define('MAIL', 'POŞTA');
define('ERR_UNKNOWN_USER', 'Utilizatorul selectat nu există !');
define('MODIFY_USER', 'Modificaţi utilizatorul');
define('NOTES', 'Notiţe');
define('NOTE_LIST', '<li>Dacă nu doriţi să schimbaţi parola, lăsaţi câmpurile \"Parola\" libere');
define('PASSWORD', 'Parola');
define('USER_ACTIVE', 'Utilizatorul este activ');
define('USER_GROUP', 'Grup utilizatori');
define('USER_EMAIL', 'E-mail');
define('USER_WEB_SITE', 'Pagina web');
define('CREATE_NEW_USER', 'Creaţi utilizator nou');
define('USER_FROM', 'Locaţie');
define('USER_INTERESTS', 'Domenii de interes');
define('USER_OCC', 'Ocupaţie');

// lang_util_php
define('TITLE', 'Redimensionaţi imaginea');
define('WHAT_IT_DOES', 'Ce face');
define('WHAT_UPDATE_TITLES', 'Modificaţi titlurile după numele fişier');
define('WHAT_DELETE_TITLE', 'Ştergeţi titlurile');
define('WHAT_REBUILD', 'Reconstruieşte pictogramele şi imaginile intermediare');
define('WHAT_DELETE_ORIGINALS', 'Ştergeţi imaginile dimensionate iniţial, înlocuindu-le cu versiunea redimensionată');
define('FILE', 'Fişier');
define('TITLE_SET_TO', 'titlu setat ca');
define('SUBMIT_FORM', 'trimite');
define('UPDATED_SUCCESFULLY', 'modificată cu succes');
define('ERROR_CREATE', 'EROARE creare');
define('CONTINUE', 'Procesaţi mai multe imagini');
define('MAIN_SUCCESS', 'Fişierul %s a fost folosit cu succes ca imagine principală');
define('ERROR_RENAME', 'Eroare redenumire %s cu %s');
define('ERROR_NOT_FOUND', 'Fişierul %s nu a fost găsit');
define('BACK', 'înapoi la principal');
define('THUMBS_WAIT', 'Modificare pictograme şi/sau imagini intermediare, vă rugăm asteptaţi...');
define('THUMBS_CONTINUE_WAIT', 'Continuaţi să modificaţi pictograme şi/sau imaginile intermediare...');
define('TITLES_WAIT', 'Modificare titluri, vă rugăm aşteptaţi...');
define('DELETE_WAIT', 'Ştergere titluri, vă rugăm aşteptaţi...');
define('REPLACE_WAIT', 'Ştergere originale şi înlocuire cu versiunile redimensionate, vă rugăm aşteptaţi...');
define('INSTRUCTION', 'Instrucţiuni rapide');
define('INSTRUCTION_ACTION', 'Selectaţi o acţiune');
define('INSTRUCTION_PARAMETER', 'Setaţi parametrii');
define('INSTRUCTION_ALBUM', 'Selectaţi album');
define('INSTRUCTION_PRESS', 'Apăsaţi %s');
define('UPDATE', 'Modificaţi pictograme şi/sau imagini intermediare');
define('UPDATE_WHAT', 'Ce trebuie modificat');
define('UPDATE_THUMB', 'Doar pictograme');
define('UPDATE_PIC', 'Doar imaginile intermediare');
define('UPDATE_BOTH', 'Amândouă');
define('UPDATE_NUMBER', 'Numărul de imagini procesate per click');
define('UPDATE_OPTION', '(Încercaţi o setare mai mică pentru această opţiune dacă primiţi timeout-uri)');
define('FILENAME_TITLE', 'Nume fişier &rArr; Titlu imagine');
define('FILENAME_HOW', 'Cum trebuie modificat titlul');
define('FILENAME_REMOVE', 'Eliminaţi .jpg din final şi înlocuiţi _ (liniuta de subliniere) cu spaţii');
define('FILENAME_EURO', 'Schimbaţi 2003_11_23_13_20_20.jpg cu 23/11/2003 13:20');
define('FILENAME_US', 'Schimbaţi 2003_11_23_13_20_20.jpg cu 11/23/2003 13:20');
define('FILENAME_TIME', 'Schimbaţi 2003_11_23_13_20_20.jpg cu 13:20');
define('DELETE', 'Ştergeţi titlurile sau imaginile originale');
define('DELETE_TITLE', 'Ştergeţi titlurile imaginilor');
define('DELETE_ORIGINAL', 'Ştergeţi imaginile originale');
define('DELETE_REPLACE', 'Ştergeţi originalele, înlocuindu-le cu versiunile redimensionate');
define('SELECT_ALBUM', 'Selectaţi albumul');

// lang_pagetitle_php
define('VIEWING', 'Afişare foto');
define('USR', 'are următoarea galerie foto');
define('PHOTOGALLERY', 'Galerie foto');

?>
