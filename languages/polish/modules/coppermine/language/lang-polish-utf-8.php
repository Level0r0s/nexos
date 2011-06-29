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
  $Source: /cvs/languages/polish/modules/coppermine/language/lang-polish-utf-8.php,v $
  $Revision: 1.2 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:40 $
****************************************************************************/
global $module_name, $lang_usermgr_php,$lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;  
define('PIC_VIEWS','Views');
define('PIC_VOTES','Votes');
define('PIC_COMMENTS','Comments');

// lang_translation_info
define('LANG_NAME_ENGLISH','Polish');
define('LANG_NAME_NATIVE','Polish');
define('LANG_COUNTRY_CODE','pl');
define('TRANS_NAME','Jacek Domoñ');
define('TRANS_EMAIL','plusz@plusnet.pl');
define('TRANS_WEBSITE','http://www.plusz.futuremedia.pl/');
define('TRANS_DATE','2003-04-20');
define('CHARSET','iso-8859-2');
define('TEXT_DIR','ltr');
define('YES','Tak');
define('NO','Nie');
define('BACK','powrót na stronê g³ówn±');
define('CONTINU','Finish');
define('INFO','Informacja');
//define('_ERROR', 'Error'); //already in main lang file
define('ALBUM_DATE_FMT','%B %d, %Y');
define('LASTCOM_DATE_FMT','%m/%d/%y @ %H:%M');
define('LASTUP_DATE_FMT','%B %d, %Y');
define('REGISTER_DATE_FMT','%B %d, %Y');
define('LASTHIT_DATE_FMT','%B %d, %Y @ %I:%M %p');
define('COMMENT_DATE_FMT','%B %d, %Y @ %I:%M %p');

// lang_meta_album_names
define('RANDOM','Losowo wybrane zdjêcia ');
define('LASTUP','Ostatnio dodane zdjêcia');
define('LASTUPBY','My Last Additions');
define('LASTALB','Ostatnio dodane albumy');
define('LASTCOM','Ostatnio dodane komentarze');
define('LASTCOMBY','My Last comments');
define('TOPN','Najpopularniejsze zdjêcia');
define('TOPRATED','Najwy¿ej oceniane zdjêcia');
define('LASTHITS','Ostatnio ogl±dane zdjêcia');
define('SEARCH','Wyszukiwarka zdjêæ');
define('FAVPICS','Ulubione zdjêcia');

// lang_errors
define('ACCESS_DENIED','Nie masz uprawnieñ aby ogl±daæ tê stronê.');
define('PERM_DENIED','Nie masz uprawnieñ aby wykonaæ tê operacjê.');
define('PARAM_MISSING','Skrypt zosta³ wywo³any bez wymaganego parametru/ów.');
define('NON_EXIST_AP','Wybrany album/zdjêcie nie istnieje!!');
define('QUOTA_EXCEEDED','Przekroczono limit miejsca na pliki<br /><br />Twój przydzia³: [quota]K, Twoje zdjêcia u¿ywaj± obecnie: [space]K. Dodanie tego zdjêcia powoduje przekroczenie limitu.');
define('GD_FILE_TYPE_ERR','Je¿li w u¿yciu jest biblioteka GD, dozwolone formaty zdjêæ to wy³±cznie JPEG i PNG.');
define('INVALID_IMAGE','Zdjêcie które przes³ano nie mo¿e byæ obs³u¿one przez bibliotekê GD.');
define('RESIZE_FAILED','Nie mo¿na stworzyæ miniatury lub zdjêcia po¶redniego.');
define('NO_IMG_TO_DISPLAY','Brak zdjêcia do wy¶wietlenia');
define('NON_EXIST_CAT','Wybrana kategoria nie istnieje');
define('ORPHAN_CAT','Kategoria nie ma nadrzêdnej ga³êzi, uruchom mened¿era kategorii aby rozwi±zaæ ten problem.');
define('DIRECTORY_RO','Katalog \'%s\' jest zabezpieczony przed zapisem');
define('NON_EXIST_COMMENT','Wybrany komentarz nie istnieje.');
define('PIC_IN_INVALID_ALBUM','Zdjêcie znajduje siê w nieistniej±cym albumie (%s)!?');
define('BANNED','Obecnie Twój dostêp do strony zosta³ zablokowany.');
define('NOT_WITH_UDB','Ta funkcja jest zablokowana, poniewa¿ Coppermine jest zintegrowane z oprogramowaniem do obs³ugi forum. Alternatywnie funkcja nie jest obs³ugiwana przy bie¿±cej konfiguracji.');
define('MEMBERS_ONLY','This function is for members only, please join.');
define('MUSTBE_GOD','This function is only for the site admin. You must be logged in as superadmin, god account to access this function');
define('NO_IMG_TO_APPROVE','No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE','Przejd¼ do listy albumów');
define('ALB_LIST_LNK','Albumy');
define('MY_GAL_TITLE','Do prywatnej galerii');
define('MY_GAL_LNK','Moja galeria');
define('MY_PROF_LNK','Mój profil');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE','Prze³±cz w tryb administratora');
define('ADM_MODE_LNK','Tryb administratora');
define('USR_MODE_TITLE','Prze³±cz w tryb u¿ytkownika');
define('USR_MODE_LNK','Tryb u¿ytkownika');
define('UPLOAD_PIC_TITLE','Upload zdjêcia do albumu');
define('UPLOAD_PIC_LNK','Upload zdjêcia');
define('REGISTER_TITLE','Utwórz konto');
define('REGISTER_LNK','Zarejestruj siê');
define('LOGIN_LNK','Zaloguj');
define('LOGOUT_LNK','Wyloguj');
define('LASTUP_LNK','Ostatnie uploady');
define('LASTUP_TITLE','Recently uploaded pictures');
define('TOPN_TITLE','Pictures that have been seen most');
define('TOPN_LNK','Najpopularniejsze');
define('TOPRATED_TITLE','Top rated pictures');
define('TOPRATED_LNK','Top rated');
define('SEARCH_TITLE','Search Photo Collection');
define('SEARCH_LNK','Szukaj');
define('FAV_TITLE','My Favorites');
define('FAV_LNK','Ulubione');
define('HELP_TITLE','HELP');

// lang_gallery_admin_menu
define('UPL_APP_LNK','Akceptacja zdjêæ');
define('CONFIG_LNK','Konfiguracja');
define('ALBUMS_LNK','Albumy');
define('CATEGORIES_LNK','Kategorie');
define('USERS_LNK','U¿ytkownicy');
define('GROUPS_LNK','Grupy');
define('COMMENTS_LNK','Komentarze');
define('SEARCHNEW_LNK','Wsadowe przetwarzanie zdjêæ');
define('UTIL_LNK','Zmiana rozmiaru zdjêæ');
define('BAN_LNK','Banowanie');

// lang_user_admin_menu
define('ALBMGR_LNK','Tworzenie / porz±dkowanie albumów');
define('MODIFYALB_LNK','Modyfikacja moich albumów');
//define('MY_PROF_LNK', 'My profile');

// lang_cat_list
define('CATEGORY','Kategoria');
define('ALBUMS','Albumy');
//define('PICTURES', 'Pictures');

// lang_album_list
define('ALBUM_ON_PAGE','albumów: %d stron: %d');
// lang_thumb_view
define('DATE','DATA');
define('NAME','Nazwa u¿ytkownika');
define('TITLE','Zmieñ rozmiar zdjêæ');
define('SORT_DA','Sortowanie wg daty rosn±co');
define('SORT_DD','Sortowanie wg daty malej±co');
define('SORT_NA','Sortowanie wg nazwy rosn±co');
define('SORT_ND','Sortowanie wg nazwy malej±co');
define('SORT_TA','Sortowanie wg tytu³u rosn±co');
define('SORT_TD','Sortowanie wg tytu³u malej±co');
define('PIC_ON_PAGE','zdjêæ: %d stron: %d');
define('USER_ON_PAGE','u¿ytkowników: %d stron: %d');
define('SORT_RA','Sort by rating ascending');
define('SORT_RD','Sort by rating descending');
define('THUMB_RATING','RATING');
define('SORT_TITLE','Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE','Wróæ do widoku miniatur');
define('PIC_INFO_TITLE','Wy¶wietl/ukryj info o zdjêciu');
define('SLIDESHOW_TITLE','Pokaz slajdów');
define('SLIDESHOW_DISABLED','Slideshow is disabled');
define('SLIDESHOW_DISABLED_MSG','This function is for members only, please join.');
define('ECARD_TITLE','e-kartka od %s dla Ciebie');
define('ECARD_DISABLED','e-kartki s± wy³±czone');
define('ECARD_DISABLED_MSG','Nie masz uprawnieñ do wysy³ania e-kartek');
define('PREV_TITLE','Poprzednie zdjêcie');
define('NEXT_TITLE','Nastêpne zdjêcie');
define('PIC_POS','Zdjêcie %s/%s');
define('NO_MORE_IMAGES','There are no more images in this galley');
define('NO_LESS_IMAGES','This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC','Oceñ te zdjêcie ');
define('NO_VOTES','(Brak g³osów)');
define('RATING','Ocena (%s g³osów)');
define('RUBBISH','Do niczego');
define('POOR','S³abe');
define('FAIR','Niez³e');
define('GOOD','Dobre');
define('EXCELLENT','B. dobre');
define('GREAT','Doskona³e');

// lang_cpg_die
//define('INFO', 'Information');
//define('ERROR', 'Error');
define('_CRITICAL_ERROR','Critical error');
define('FILE','Plik');
define('LINE','Linia: ');

// lang_display_thumbnails
define('FILENAME','Nazwa pliku');
define('FILESIZE','Rozmiar pliku: ');
define('DIMENSIONS','Wymiary');
define('DATE_ADDED','Data dodania: ');

// lang_get_pic_data
define('N_COMMENTS','komentarzy: %s ');
define('N_VIEWS','ods³on: %s ');
define('N_VOTES','(g³osów: %s)');


// lang_albmgr_php
define('ALB_NEED_NAME','Albumy musz± mieæ nazwê !');
define('CONFIRM_MODIFS','Czy na pewno chcesz dokonaæ tych modyfikacji ?');
define('NO_CHANGE','Nie dokona³e¶/a¶ ¿adnej zmiany !');
define('NEW_ALBUM','Nowy album');
define('CONFIRM_DELETE1','Czy na pewno chcesz skasowaæ ten album ?');
define('CONFIRM_DELETE2','\nWszystkie zdjêcia i komentarze które zawiera zostan± stracone !');
define('SELECT_FIRST','Wybierz pierwszy album');
define('ALB_MRG','Mened¿er albumów');
define('MY_GALLERY','* Moja galeria *');
define('NO_CATEGORY','* Bez kategorii *');
define('DELETE','Kasowanie tytu³ów lub oryginalnych zdjêæ');
define('NEW','Nowy');
define('APPLY_MODIFS','Wykonaj modyfikacje');
define('SELECT_CATEGORY','Wybierz kategoriê');

// lang_catmgr_php
define('MISS_PARAM','Brak parametrów do operacji \'%s\'!');
define('UNKNOWN_CAT','Wybrana kategoria nie istnieje w bazie danych');
define('USERGAL_CAT_RO','Galerie u¿ytkowników nie mog± byæ kasowane!');
define('MANAGE_CAT','Zarz±dzaj kategoriami');
define('CONFIRM_DELETE_CAT','Are you sure you want to DELETE this category');
//define('CATEGORY', 'Category');
define('OPERATIONS','Operacje');
define('MOVE_INTO','Przesuñ do');
define('UPDATE_CREATE','Uaktualnij / stwórz kategoriê');
define('PARENT_CAT','Kategoria wy¿szego rzêdu');
define('CAT_TITLE','Tytu³ kategorii');
define('CAT_DESC','Opis kategorii');

// lang_config_php
define('CONFIG_TITLE','Configuration');
define('RESTORE_CFG','Przywróæ ustawienia domy¶lne');
define('SAVE_CFG','Zachowaj now± konfiguracjê');
define('NOTES','Uwagi');
//define('INFO', 'Information');
define('UPD_SUCCESS','Konfiguracja Coppermine zosta³a uaktualniona');
define('RESTORE_SUCCESS','Konfiguracja Coppermine zosta³a przywrócona');
define('NAME_A','Nazwa rosn±co');
define('NAME_D','Nazwa malej±co');
define('TITLE_A','Tytu³ rosn±co');
define('TITLE_D','Tytu³ malej±co');
define('DATE_A','Data rosn±co');
define('DATE_D','Data malej±co');
define('RATING_A','Rating ascending');
define('RATING_D','Rating descending');
define('TH_ANY','Maksymalne rozmiary');
define('TH_HT','Wysoko¶æ');
define('TH_WD','Szeroko¶æ');


// lang_db_input_php
define('EMPTY_NAME_OR_COM','Musisz podaæ swoje imiê i napisaæ komentarz');
define('COM_ADDED','Dodano komentarz');
define('ALB_NEED_TITLE','Musisz podaæ tytu³ dla albumu!');
define('NO_UDP_NEEDED','Zmiana nie jest konieczna.');
define('ALB_UPDATED','Uaktualniono album');
define('UNKNOWN_ALBUM','Wybrany album nie istnieje, lub nie masz uprawnieñ do uploadu');
define('NO_PIC_UPLOADED','Zdjêcie nie zosta³o dodane!<br /><br />Je¿eli wybrano zdjêcie do przes³ania, sprawd¼ czy serwer na to zezwala...');
define('ERR_MKDIR','Nie uda³o siê utworzyæ katalogu %s !');
define('DEST_DIR_RO','Katalog docelowy %s nie mo¿e byæ zapisany przez skrypt!');
define('ERR_MOVE','Nie mo¿na przenie¶æ %s do %s !');
define('ERR_FSIZE_TOO_LARGE','Zdjêcie które przesy³asz ma zbyt du¿y rozmiar (maksymalnie dozwolony: %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE','Zdjêcie które przesy³asz ma zbyt du¿y rozmiar (maksymalnie dozwolony: to %s KB) !');
define('ERR_INVALID_IMG','Przes³ane zdjêcie nie jest w dozwolonym formacie!');
define('ALLOWED_IMG_TYPES','Mo¿esz przes³aæ tylko %s zdjêæ.');
define('ERR_INSERT_PIC','Zdjêcie \'%s\' nie mo¿e zostaæ wstawione do albumu ');
//define('INFO', 'Information');
define('ERR_COMMENT_EMPTY','Twój komentarz jest pusty!');
define('ERR_INVALID_FEXT','Akceptowane s± jedynie zdjêcia z nastêpuj±cymi rozszerzeniami: <br /><br />%s.');
define('NO_FLOOD','Przykro mi ale jeste¶/a¶ autorem ostatniego dodanego komentarza<br /><br />Mo¿esz go edytowaæ aby zmieniæ tre¶æ');
define('REDIRECT_MSG','Jeste¶ przekierowywany.<br /><br /><br />Kliknij \'DALEJ\' je¿eli strona nie zmieni siê automatycznie');
define('UPL_SUCCESS','Zdjêcie zosta³o przes³ane');

// lang_delete_php
define('CAPTION','Tytu³');
define('FS_PIC','pe³ny rozmiar');
define('DEL_SUCCESS','skasowano');
define('NS_PIC','normalny rozmiar');
define('ERR_DEL','nie mo¿e byæ skasowane');
define('THUMB_PIC','miniatura');
//define('COMMENT', 'comment');
define('IM_IN_ALB','zdjêcie z albumu');
define('ALB_DEL_SUCCESS','Skasowano album \'%s\' ');
define('ALB_MGR','Mened¿er albumów');
define('ERR_INVALID_DATA','Otrzymano niew³a¶ciwe dane \'%s\'');
define('CREATE_ALB','Tworzenie albumu \'%s\'');
define('UPDATE_ALB','Uaktualnienie albumu: \'%s\' tytu³: \'%s\' index: \'%s\'');
define('DEL_PIC','Skasuj zdjêcie');
define('DEL_ALB','Kasowanie albumu');
define('DEL_USER','Kasowanie u¿ytkownika');
//define('ERR_UNKNOWN_USER', 'The selected user does not exist !');
define('COMMENT_DELETED','Komentarz zosta³ dodany');

// lang_display_image_php
define('PIC_CONFIRM_DEL','Are you sure you want to DELETE this picture ? \nComments will also be deleted.');
define('DEL_THIS_PIC','DELETE THIS PICTURE');
define('SIZE','%s x %s pixels');
define('VIEWS','%s times');
define('SLIDESHOW','Pokaz slajdów');
define('STOP_SLIDESHOW','ZATRZYMAJ POKAZ');
define('VIEW_FS','Kliknij aby zobaczyæ pe³ny rozmiar');
define('EDIT_PIC','EDIT PICTURE INFO');

// lang_picinfo
define('PIC_INF_TITLE','Picture information');
define('PIC_INF_FILENAME','Filename');
define('ALBUM_NAME','Album name');
define('PIC_INFO_RATING','Rating (%s votes)');
define('KEYWORDS','S³owa kluczowe (oddzielone spacjami)');
define('PIC_INF_FILE_SIZE','File Size');
define('PIC_INF_DIMENSIONS','Dimensions');
define('DISPLAYED','Wy¶wietleñ');
define('CAMERA','Aparat fotograficzny');
define('DATE_TAKEN','Date taken');
define('APERTURE','Przes³ona');
define('EXPOSURE_TIME','Exposure time');
define('FOCAL_LENGTH','Focal length');
define('COMMENT','Komentarz');
define('ADDFAV','Dodaj do Ulubionych');
define('ADDFAVPHRASE','Ulubione');
define('REMFAV','Usuñ z Ulubionych');
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
define('ADD_YOUR_COMMENT','Dodaj komentarz');
define('COM_NAME','Name');
//define('COMMENT', 'Comment');
define('YOUR_NAME','Twoje imiê');

// lang_fullsize_popup
define('CLICK_TO_CLOSE','Kliknij zdjêcie aby zamkn±æ okno');

// lang_ecard_php
define('E_TITLE','Send an e-card');
define('INVALID_EMAIL','<b>Uwaga!</b> : niepoprawny adres e-mail !');
define('E_ECARD_TITLE','An e-card from %s for you');
define('VIEW_ECARD','Je¿eli e-kartka nie wy¶wietla siê poprawnie, kliknij ten link');
define('VIEW_MORE_PICS','Kliknij ten link aby zobaczyæ wiêcej zdjêæ!');
define('SEND_SUCCESS','Twoja e-kartka zosta³a wys³ana');
define('SEND_FAILED','Niestety, serwer nie mo¿e wys³aæ Twojej e-kartki...');
define('FROM','Od');
define('_YOUR_NAME','Your name');
define('YOUR_EMAIL','Twój adres e-mail');
define('TO','Do');
define('RCPT_NAME','Nazwa odbiorcy');
define('RCPT_EMAIL','Adres e-mail odbiorcy');
define('GREETINGS','Temat');
define('MESSAGE','Wiadomo¶æ');
define('ECARD_LINK_CORRUPT','Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser');

// lang_editpics_php
define('PIC_INFO','Zdjêcie&nbsp;Info');
define('ALBUM','Album');
define('EDIT_TITLE','Edytuj ten komentarz');
define('DESC','Opis');
//define('KEYWORDS', 'Keywords');
define('PIC_INFO_STR','%s &razy; %s - %s KB - %s ods³on - %s g³osów');
define('APPROVE','Akceptuj zdjêcie');
define('POSTPONE_APP','Odrocz akceptacjê');
//define('DEL_PIC', 'Delete picture');
define('READ_EXIF','Read EXIF info again');
define('RESET_VIEW_COUNT','Resetuj licznik ods³on');
define('RESET_VOTES','Resetuj g³osowania');
define('DEL_COMM','Skasuj wybrane komentarze');
define('UPL_APPROVAL','Akceptacja uploadu');
define('EDIT_PICS','EDYTUJ ZDJÊCIA');
define('SEE_NEXT','Zobacz nastêpne');
define('SEE_PREV','Zobacz poprzednie');
define('N_PIC','zdjêæ: %s');
define('N_OF_PIC_TO_DISP','Ilo¶æ zdjêæ do wy¶wietlenia');
define('APPLY','Zastosuj zmiany');

// lang_groupmgr_php
define('GROUP_NAME','Nazwa grupy');
define('DISK_QUOTA','Miejsce na dane');
define('CAN_RATE','Go¶cie mog± oceniaæ zdjêcia');
define('CAN_SEND_ECARDS','Mo¿e wysy³aæ e-kartki');
define('CAN_POST_COM','Mo¿e zamieszczaæ komentarze');
define('CAN_UPLOAD','Go¶cie mog± przesy³aæ zdjêcia');
define('CAN_HAVE_GALLERY','Mo¿e mieæ galeriê osobist±');
//define('APPLY', 'Apply modifications');
define('CREATE_NEW_GROUP','Stwórz now± grupê');
define('DEL_GROUPS','Skasuj zaznaczon± grupê/y');
define('CONFIRM_DEL','Czy na pewno chcesz skasowaæ tego u¿ytkownika? \nWszystkie jego zdjêcia i alumy zostan± automatycznie skasowane.');
define('GROUP_TITLE','Manage user groups');
define('APPROVAL_1','Zgoda na pub. upl.(1)');
define('APPROVAL_2','Zgoda na priv. upl.(2)');
define('NOTE1','<b>(1)</b> Przesy³anie zdjêæ do albumu publicznego wymaga zgody administratora');
define('NOTE2','<b>(2)</b> Przesy³anie zdjêæ do albumu u¿ytkownika wymaga zgody administratora');
//define('NOTES', 'Notes');

// lang_index_php
define('WELCOME','Witaj!');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB','Are you sure you want to DELETE this album ? \nAll pictures and comments will also be deleted.');
//define('DELETE', 'DELETE');
define('MODIFY','W£A¦CIWO¦CI');
//define('EDIT_PICS', 'EDIT PICS');

// lang_list_categories
define('HOME','Strona g³ówna');
define('STAT1','zdjêcia: <b>[pictures]</b>, albumy: <b>[albums]</b>, kategorie: <b>[cat]</b>, komentarze: <b>[comments]</b>, ods³ony: <b>[views]</b>');
define('STAT2','zdjêcia: <b>[pictures]</b>, albumy: <b>[albums]</b>, ods³ony: <b>[views]</b>');
define('XX_S_GALLERY','%s\'s galeria');
define('STAT3','zdjêcia: <b>[pictures]</b>, albumy: <b>[albums]</b>, komentarze: <b>[comments]</b>, ods³ony: <b>[views]</b>');

// lang_list_users
define('USER_LIST','Lista u¿ytkowników');
define('NO_USER_GAL','Galerie u¿ytkowników nie istniej±');
define('N_ALBUMS','%s album/y');
define('N_PICS','%s zdjêcie/êæ');

// lang_list_albums
define('N_PICTURES','zdjêæ: %s');
define('LAST_ADDED',', ostatnie dodano: %s');

// lang_modifyalb_php
define('UPD_ALB_N','Uaktualnij album %s');
define('GENERAL_SETTINGS','Ustawienia ogólne');
define('ALB_TITLE','Tytu³ albumu');
define('ALB_CAT','Kategoria albumu');
define('ALB_DESC','Opis albumu');
define('ALB_THUMB','Miniatury');
define('ALB_PERM','Uprawnienia albumu');
define('CAN_VIEW','Mo¿e byæ ogl±dany przez');
define('MOD_CAN_UPLOAD','Visitors can upload pictures');
define('CAN_POST_COMMENTS','Go¶cie mog± dodawaæ komentarze');
define('MOD_CAN_RATE','Visitors can rate pictures');
define('USER_GAL','Galeria u¿ytkownika');
define('NO_CAT','* Bez kategorii *');
define('ALB_EMPTY','Album jest pusty');
define('LAST_UPLOADED','Ostatnio przes³ane');
define('PUBLIC_ALB','Wszyscy (album publiczny)');
define('ME_ONLY','Tylko ja');
define('OWNER_ONLY','Tylko w³a¶ciciel albumu: (%s)');
define('GROUPP_ONLY','Cz³onkowie grupy: \'%s\'');
define('ERR_NO_ALB_TO_MODIFY','Nie mo¿na modyfikowaæ ¿adnego albumu w bazie.');
define('UPDATE','Uaktualnij miniatury i/lub zrewymiarowane zdjêcia');

// lang_rate_pic_php
define('ALREADY_RATED','Przykro nam, ale ju¿ oceni³e¶ te zdjêcie');
define('RATE_OK','Twój g³os zosta³ zapisany');

// lang_register_php
define('USERNAME','Nazwa u¿ytkownika');
define('GROUP','Grupa');
define('DISK_USAGE','U¿yte miejsce');
define('X_S_PROFILE','profil: %s');

// lang_reviewcom_php
define('REVIEW_TITLE','Review comments');
define('NO_COMMENT','Nie ma komentarzy do przegl±dania');
define('N_COMM_DEL','Skasowano komentarzy: %s');
define('N_COMM_DISP','Ilo¶æ komentarzy do wy¶wietlenia');
define('R_SEE_PREV','See previous');
define('R_SEE_NEXT','See next');
define('R_DEL_COMM','Delete selected comments');

// lang_search_php
define('S_SEARCH','Search the image collection');

// lang_search_new_php
define('PAGE_TITLE','Wyszukiwarka zdjêæ');
define('SELECT_DIR','Wybierz katalog');
define('SELECT_DIR_MSG','Wybrana funkcja umo¿liwia wsadowe dodawanie do galerii zdjêæ które zosta³y przes³ane na serwer.<br /><br />Wybierz katalog do którego zosta³y przes³ane wybrane zdjêcia');
define('NO_PIC_TO_ADD','Brak zdjêæ do dodania');
define('NEED_ONE_ALBUM','Aby funkcja dzia³a³a, potrzebny jest przynajmniej jeden album');
define('WARNING','Ostrze¿enie');
define('CHANGE_PERM','skrypt nie mo¿e zapisywaæ plików do wybranego katalogu. Zmieñ ustawienia na 755 lub 777 zanim spróbujesz dodaæ zdjêcia!');
define('TARGET_ALBUM','<b>Zapisuje zdjêcia do katalogu &quot;</b>%s<b>&quot; </b>%s');
define('FOLDER','Katalog');
define('IMAGE','Zdjêcie');
//define('ALBUM', 'Album');
define('RESULT','Wynik');
define('DIR_RO','Nie mo¿na zapisaæ. ');
define('DIR_CANT_READ','Nie mo¿na odczytaæ. ');
define('INSERT','Dodawanie nowych zdjêæ do galerii');
define('LIST_NEW_PIC','Lista nowych zdjêæ');
define('INSERT_SELECTED','Wstaw wybrane zdjêcia');
define('NO_PIC_FOUND','Nie znaleziono nowych zdjêæ');
define('BE_PATIENT','Proszê o cierpliwo¶æ, skrypt potrzebuje czasu na dodanie zdjêæ');
define('SN_NOTES','<ul><li><b>OK</b> : means that the picture was succesfully added<li><b>DP</b> : means that the picture is a duplicate and is already in the database<li><b>PB</b> : means that the picture could not be added, check your configuration and the permission of directories where the pictures are located<li>If the OK, DP, PB \'signs\' does not appear click on the broken picture to see any error message produced by PHP<li>If your browser timeout, hit the reload button</ul>');
define('SELECT_ALBUM','Wybierz album');
define('NO_ALBUM','No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('UP_TITLE','Upload picture');
define('MAX_FSIZE','Maksymalny rozmiar zdjêcia to %s KB');
//define('ALBUM', 'Album');
define('PICTURE','Zdjêcie');
define('PIC_TITLE','Tytu³ zdjêcia');
define('DESCRIPTION','Opis zdjêcia');
define('UP_KEYWORDS','Keywords (separate with spaces)');
define('ERR_NO_ALB_UPLOADABLES','Przykro mi, ale nie ma albumu do którego móg³by¶/a¶ przes³aæ zdjêcia');

// lang_usermgr_php
define('U_TITLE','Manage users');
//define('NAME_A', 'Name ascending');
//define('NAME_D', 'Name descending');
define('GROUP_A','Grupa rosn±co');
define('GROUP_D','Grupa malej±co');
define('REG_A','Data rej. rosn±co');
define('REG_D','Data rej. malej±co');
define('PIC_A','Liczba zdjêæ rosn±co');
define('PIC_D','Liczba zdjêæ malej±co');
define('DISKU_A','U¿ycie dysku rosn±co');
define('DISKU_D','U¿ycie dysku malej±co');
define('SORT_BY','Posortuj u¿ytkowników wg');
define('ERR_NO_USERS','Tabela u¿ytkowników jest pusta!');
define('ERR_EDIT_SELF','Nie mo¿esz modyfikowaæ teraz swojego profilu. Aby to zrobiæ kliknij ³±cze \'Mój profil\'');
define('EDIT','EDYTUJ');
//define('DELETE', 'DELETE');
define('U_NAME','User name');
//define('GROUP', 'Group');
define('INACTIVE','Nieaktywny');
//define('OPERATIONS', 'Operations');
define('PICTURES','Pictures');
define('DISK_SPACE','U¿yte miejsce / Quota');
define('REGISTERED_ON','Zerejestrowano');
define('U_USER_ON_P_PAGES','u¿ytkowników: %d na stronach: %d');
define('USER_CONFIRM_DEL','Are you sure you want to DELETE this user ? \nAll his pictures and albums will also be deleted.');
define('MAIL','E-MAIL');
define('ERR_UNKNOWN_USER','Wybrany u¿ytkownik nie istnieje');
define('MODIFY_USER','Modyfikuj u¿ytkownika');
//define('NOTES', 'Notes');
define('NOTE_LIST','<li>Je¿eli nie chcesz zmieniaæ swojego ulubionego has³a teraz, zostaw pole "has³o" puste');
define('PASSWORD','Has³o');
define('USER_ACTIVE_CP','User is active');
define('USER_GROUP_CP','User group');
define('USER_EMAIL','Adres e-mail u¿ytkownika');
define('USER_WEB_SITE','Strona sieci web u¿ytkownika');
define('CREATE_NEW_USER','Utwórz nowego u¿ytkownika');
define('USER_FROM','User location');
define('USER_INTERESTS','Zainteresowania');
define('USER_OCC','User occupation');

// lang_util_php
define('UTIL_TITLE','Resize pictures');
define('WHAT_IT_DOES','Do czego to s³u¿y');
define('WHAT_UPDATE_TITLES','Uaktualnia tytu³y nazwami plików');
define('WHAT_DELETE_TITLE','Kasuje tytu³y');
define('WHAT_REBUILD','Odbudowuje miniatury i zdjêcia po¶rednie');
define('WHAT_DELETE_ORIGINALS','Kasuje zdjêcia ¼ród³owe, zastêpuj±c je zdjêciami o zmienionych wymiarach');
define('U_FILE','File');
define('TITLE_SET_TO','tytu³');
define('SUBMIT_FORM','prze¶lij');
define('UPDATED_SUCCESFULLY','zaktualizowano');
define('ERROR_CREATE','B£¡D tworzenia');
define('CONTIN','Process more images');
define('MAIN_SUCCESS','Plik %s zosta³ ustawiony jako zdjêcie g³ówne');
define('ERROR_RENAME','B³±d przy zmiany nazwy z %s na %s');
define('ERROR_NOT_FOUND','Plik %s nie zosta³ znaleziony');
define('U_BACK','back to main');
define('THUMBS_WAIT','Uaktualniam miniatury i/lub zrewymiarowane zdjêcia, proszê czekaæ...');
define('THUMBS_CONTINUE_WAIT','Trwa uaktualnianie miniatur i/lub zrewymiarowanych zdjêæ...');
define('TITLES_WAIT','Uaktualnianie tytu³ów, proszê czekaæ...');
define('DELETE_WAIT','Kasowanie tytu³ów, proszê czekaæ...');
define('REPLACE_WAIT','Kasowanie orygina³ów i zamienianie ich na zdjêcia o zmienionych wymiarach..');
define('INSTRUCTION','Szybkie instrukcje');
define('INSTRUCTION_ACTION','Wybierz akcjê');
define('INSTRUCTION_PARAMETER','Ustaw parametry');
define('INSTRUCTION_ALBUM','Wybierz album');
define('INSTRUCTION_PRESS','Naci¶nij %s');
define('U_UPDATE','Update thumbs and/or resized photos');
define('UPDATE_WHAT','Do uaktualnienia');
define('UPDATE_THUMB','Tylko miniatury');
define('UPDATE_PIC','Tylko zdjêcia o zmienionych wymiarach');
define('UPDATE_BOTH','Zarówno miniatury jak i zrewymiarowane zdjêcia');
define('UPDATE_NUMBER','Ilo¶æ przetworzonych zdjêæ/klikniêcie');
define('UPDATE_OPTION','(Spróbuj zmniejszyæ tê ilo¶æ, je¿eli zaobserwujesz problem z timeoutem)');
define('FILENAME_TITLE','Nazwa pliku &rArr; Tytu³ zdjêcia');
define('FILENAME_HOW','Jak modyfikowaæ nazwê pliku');
define('FILENAME_REMOVE','Usuñ rozszerzenie .jpg i zamieñ _ (podkre¶lenie) na spacje');
define('FILENAME_EURO','Zmienia 2003_11_23_13_20_20.jpg na 23/11/2003 13:20');
define('FILENAME_US','Zmienia 2003_11_23_13_20_20.jpg na 11/23/2003 13:20');
define('FILENAME_TIME','Zmienia 2003_11_23_13_20_20.jpg na 13:20');
define('UT_DELETE','Delete picture titles or original size photos');
define('DELETE_TITLE','Skasuj tytu³y zdjêæ');
define('DELETE_ORIGINAL','Skasuj oryginalne zdjêcia');
define('DELETE_REPLACE','Kasuje oryginalne zdjêcia zastêpuj±c je zdjêciami zrewymiarowanymi');
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
