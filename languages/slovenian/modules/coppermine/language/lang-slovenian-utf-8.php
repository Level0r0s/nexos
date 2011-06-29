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
  $Source: /cvs/languages/slovenian/modules/coppermine/language/lang-slovenian-utf-8.php,v $
  $Revision: 1.3 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:42 $
****************************************************************************/
global $module_name, $lang_usermgr_php,$lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;  
define('PIC_VIEWS','Views');
define('PIC_VOTES','Votes');
define('PIC_COMMENTS','Comments');

// lang_translation_info
define('LANG_NAME_ENGLISH','Slovenian');
define('LANG_NAME_NATIVE','Slovenščina');
define('LANG_COUNTRY_CODE','si');
define('TRANS_NAME','s55hh');
define('TRANS_EMAIL','s55hh.jani@siol.net');
define('TRANS_WEBSITE','http://slovhf.net/');
define('TRANS_DATE','2003-10-11');
define('CHARSET','UTF-8');
define('TEXT_DIR','ltr');
define('YES','Da');
define('NO','Ne');
define('BACK','nazaj na glavno stran');
define('CONTINU','Finish');
define('INFO','Informacija');
//define('_ERROR', 'Error'); //already in main lang file
define('ALBUM_DATE_FMT','%d.%m.%Y');
define('LASTCOM_DATE_FMT','%d.%m.%Y ob %H:%M');
define('LASTUP_DATE_FMT','%d.%m.%Y');
define('REGISTER_DATE_FMT','%d.%m.%Y');
define('LASTHIT_DATE_FMT','%d.%m.%Y ob %I:%M %p');
define('COMMENT_DATE_FMT','%d.%m.%Y ob %I:%M %p');

// lang_meta_album_names
define('RANDOM','Naključne slike');
define('LASTUP','Zadnje dodane slike');
define('LASTUPBY','Moje zadnje dodane');
define('LASTALB','Zadnji dodani albumi');
define('LASTCOM','Zadnji komentarji');
define('LASTCOMBY','Moji zadnji komentarji');
define('TOPN','Največ ogledov');
define('TOPRATED','Naj ocene');
define('LASTHITS','Zadnji ogledi');
define('SEARCH','Iskanje slik');
define('FAVPICS','Priljubljene slike');

// lang_errors
define('ACCESS_DENIED','Nimate pravic za dostop do te strani');
define('PERM_DENIED','Nimate pravic za izvedbo tega ukaza.');
define('PARAM_MISSING','Manjkajo podatki za izvedbo...');
define('NON_EXIST_AP','Izbrani album/slika ne obstaja!');
define('QUOTA_EXCEEDED','Disk je poln<br /><br />Na razpolago imate [quota]K, vaše slike pa trenutno zasedajo [space]K, če bi dodali še to sliko, bi prekoračili prostor na disku.');
define('GD_FILE_TYPE_ERR','Pri uporabi GD knjižnice lahko uporabite samo JPEG in PNG slike.');
define('INVALID_IMAGE','Poslana slika je poškodovana ali pa ni v pravilnem formatu za GD knjižnico.');
define('RESIZE_FAILED','Unable to create thumbnail or reduced size image.');
define('NO_IMG_TO_DISPLAY','Trenutno še ni slik');
define('NON_EXIST_CAT','Izbrana kategorija ne obstaja');
define('ORPHAN_CAT','Kategorija ima določeno neobstoječo nadrejeno kategorijo. Popravi napako v nastavitvah.');
define('DIRECTORY_RO','Mapa \'%s\' ne dopušča pisanja, slik ni mogoče pobrisati');
define('NON_EXIST_COMMENT','Izbrani komentar ne obstaja.');
define('PIC_IN_INVALID_ALBUM','Slika je v neobstoječem albumu (%s)!?');
define('BANNED','Trenutno imate prepoved dostopa do teh strani.');
define('NOT_WITH_UDB','Ta ukaz je onemogočen, ker je premaknjen v forum. To, kar želite narediti, morda ni omogočeno v nastavitvah,  ali pa je predvideno za izvedbo v forumu.');
define('MEMBERS_ONLY','Ta funkcija je namenjena samo članom, zato prosimo, da se včlanite.');
define('MUSTBE_GOD','Ta funkcija je samo za administratorja strani. Prijavljeni morabte biti kot superadmin, da lahko dostopate do te funkcije.');
define('NO_IMG_TO_APPROVE','No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE','Pojdi na seznam albumov');
define('ALB_LIST_LNK','Seznam albumov');
define('MY_GAL_TITLE','Pojdi v mojo osebno galerijo');
define('MY_GAL_LNK','Moja galerija');
define('MY_PROF_LNK','Moj profil');
define('MY_PROF_TITLE','Preverite svojo kvoto na disku in skupine');
define('ADM_MODE_TITLE','Preklop v administracijo');
define('ADM_MODE_LNK','Administracija');
define('USR_MODE_TITLE','Preklop v uporabniÅ¡ki naÃ¨in');
define('USR_MODE_LNK','Preklop v uporabniški način');
define('UPLOAD_PIC_TITLE','Naloži sliko v album');
define('UPLOAD_PIC_LNK','Nalaganje slik');
define('REGISTER_TITLE','Ustvari račun');
define('REGISTER_LNK','Registracija');
define('LOGIN_LNK','Prijava');
define('LOGOUT_LNK','Odjava');
define('LASTUP_LNK','Zadnje dodane slike');
define('LASTUP_TITLE','Recently uploaded pictures');
define('TOPN_TITLE','Največkrat pregledane slike');
define('TOPN_LNK','Največ ogledov');
define('TOPRATED_TITLE','Najbolje ocenjene slike');
define('TOPRATED_LNK','Top rated');
define('SEARCH_TITLE','Search Photo Collection');
define('SEARCH_LNK','Iskanje');
define('FAV_TITLE','My Favorites');
define('FAV_LNK','Moji favoriti');
define('HELP_TITLE','HELP');

// lang_gallery_admin_menu
define('UPL_APP_LNK','Potrdi slike');
define('CONFIG_LNK','Nastavitve');
define('ALBUMS_LNK','Albumi');
define('CATEGORIES_LNK','Kategorije');
define('USERS_LNK','Uporabniki');
define('GROUPS_LNK','Skupine');
define('COMMENTS_LNK','Komentarji');
define('SEARCHNEW_LNK','Najdi nove slike');
define('UTIL_LNK','Spremeni velikost slike');
define('BAN_LNK','Zavrni uporabnika');

// lang_user_admin_menu
define('ALBMGR_LNK','Ustvari/naroči svoj album');
define('MODIFYALB_LNK','Spremeni svoj album');
//define('MY_PROF_LNK', 'My profile');

// lang_cat_list
define('CATEGORY','Kategorija');
define('ALBUMS','Albumi');
//define('PICTURES', 'Pictures');

// lang_album_list
define('ALBUM_ON_PAGE','Št. albumov: %d (št. strani: %d)');
// lang_thumb_view
define('DATE','Datum');
define('NAME','UporabniÅ¡ko ime');
define('TITLE','Spremeni velikost slik');
define('SORT_DA','Sortiraj po datumu naraščajoče');
define('SORT_DD','Sortiraj po datumu padajoče');
define('SORT_NA','Sortiraj po imenu datoteke naraščajočee');
define('SORT_ND','Sortiraj po imenu datoteke padajoče');
define('SORT_TA','Sortiraj po nazivu naraščajoče');
define('SORT_TD','Sortiraj po nazivu padajoče');
define('PIC_ON_PAGE','Št. slik: %d (št. strani: %d)');
define('USER_ON_PAGE','Št. uporabnikov:%d (št. strani:%d))');
define('SORT_RA','Sortiraj po oceni naraščajoče');
define('SORT_RD','Sortiraj po oceni padajoče');
define('THUMB_RATING','RATING');
define('SORT_TITLE','Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE','Nazaj na stran z ikonami');
define('PIC_INFO_TITLE','Prikaži/skrij informacije o sliki');
define('SLIDESHOW_TITLE','Samodejno predvajaj slike');
define('SLIDESHOW_DISABLED','E-razglednice so onemogočene');
define('SLIDESHOW_DISABLED_MSG','Ta funkcija je namenjena samo članom, zato prosimo, da se včlanite.');
define('ECARD_TITLE','To je e-razglednica od %s za tebe');
define('ECARD_DISABLED','Pošiljanje e-razgednic ni dovoljeno');
define('ECARD_DISABLED_MSG','Nimate pravic za pošiljanje');
define('PREV_TITLE','Poglej predhodno sliko');
define('NEXT_TITLE','Poglej naslednjo sliko');
define('PIC_POS','Slika %s od %s');
define('NO_MORE_IMAGES','V tej galeriji ni več slik');
define('NO_LESS_IMAGES','To je prva slika v galeriji');

// lang_rate_pic
define('RATE_THIS_PIC','Oceni to sliko ');
define('NO_VOTES','(Brez ocen do sedaj)');
define('RATING','Ocena (Št. glasov:%s)');
define('RUBBISH','Zanič');
define('POOR','Slabo');
define('FAIR','Tako tako');
define('GOOD','Dobro');
define('EXCELLENT','Odlično');
define('GREAT','Super');

// lang_cpg_die
//define('INFO', 'Information');
//define('ERROR', 'Error');
define('_CRITICAL_ERROR','Critical error');
define('FILE','Datoteka');
define('LINE','Vrstica: ');

// lang_display_thumbnails
define('FILENAME','Ime datoteke');
define('FILESIZE','Velikost datoteke: ');
define('DIMENSIONS','Velikost slike');
define('DATE_ADDED','Datum objave: ');

// lang_get_pic_data
define('N_COMMENTS','Št. komentarjev:%s');
define('N_VIEWS','Št. ogledov:%s');
define('N_VOTES','(Št. ocen:%s)');


// lang_albmgr_php
define('ALB_NEED_NAME','Album mora imeti ime!');
define('CONFIRM_MODIFS','Res želite izvesti te spremembe?');
define('NO_CHANGE','Nobenih sprememb nisi naredil!');
define('NEW_ALBUM','Novi album');
define('CONFIRM_DELETE1','Res želite pobrisati ta album?');
define('CONFIRM_DELETE2','\nVse slike in vsi komentarji bodo prav tako pobrisani!');
define('SELECT_FIRST','Najprej izberi album');
define('ALB_MRG','Urejanje albumov');
define('MY_GALLERY','* Moja galerija *');
define('NO_CATEGORY','* Brez kategorij *');
define('DELETE','PobriÅ¡i naslove slik ali originalne slike');
define('NEW','Novo');
define('APPLY_MODIFS','Izvedi spremembe');
define('SELECT_CATEGORY','Izberi kategorijo');

// lang_catmgr_php
define('MISS_PARAM','Parameter potreben za \'%s\'operacijo ni vpisan!');
define('UNKNOWN_CAT','Izbrana kategorija ne obstaja v bazi');
define('USERGAL_CAT_RO','Brisanje kategorije uporabniških galerij ni možno!');
define('MANAGE_CAT','Urejanje kategorij');
define('CONFIRM_DELETE_CAT','Are you sure you want to DELETE this category');
//define('CATEGORY', 'Category');
define('OPERATIONS','Operacije');
define('MOVE_INTO','Premakni v');
define('UPDATE_CREATE','Posodobi/ustvari kategorijo');
define('PARENT_CAT','Nadrejena kategorija');
define('CAT_TITLE','Ime kategorije');
define('CAT_DESC','Opis kategorije');

// lang_config_php
define('CONFIG_TITLE','Configuration');
define('RESTORE_CFG','Povrni osnovne nastavitve');
define('SAVE_CFG','Shrani nove nastavitve');
define('NOTES','Opombe');
//define('INFO', 'Information');
define('UPD_SUCCESS','Nastavitve galerije so bile uspešno posodobljene');
define('RESTORE_SUCCESS','Povrnjene so bile osnovne nastavitve galerije');
define('NAME_A','Ime naraÅ¡Ã¨ajoÃ¨e');
define('NAME_D','Ime padajoÃ¨e');
define('TITLE_A','Naslov naraščajoče');
define('TITLE_D','Naslov padajoče');
define('DATE_A','Datum naraščajoče');
define('DATE_D','Datum padajoče');
define('RATING_A','Ocena naraščajoče');
define('RATING_D','Ocena padajoče');
define('TH_ANY','Maks razmerje');
define('TH_HT','Višina');
define('TH_WD','Širina');


// lang_db_input_php
define('EMPTY_NAME_OR_COM','Vpisati morate svoje ime in komentar');
define('COM_ADDED','Komentar dodan');
define('ALB_NEED_TITLE','Vpisati morate ime albuma!');
define('NO_UDP_NEEDED','Posodobitve niso potrebne.');
define('ALB_UPDATED','Album posodobljen');
define('UNKNOWN_ALBUM','Izbrani album ne obstaja ali pa nimate pravic za dodajanje slik v ta album');
define('NO_PIC_UPLOADED','Nobena slika ni bila dodana!<br /><br />Če ste dejansko poslali sliko, se prepričajte, da je to res dovoljeno...');
define('ERR_MKDIR','Kreiranje mape ni bilo uspešno!');
define('DEST_DIR_RO','Želena mapa ne omogoča pisanja - pravice!');
define('ERR_MOVE','Nemogoče je premakniti %s v %s!');
define('ERR_FSIZE_TOO_LARGE','Velikost datoteke presega omejitev (dovoljeno je %s kB) !');
define('ERR_IMGSIZE_TOO_LARGE','Velikost datoteke presega limit (dovoljeno je %s kB) !');
define('ERR_INVALID_IMG','Poslana slika ni v pravilnem formatu!');
define('ALLOWED_IMG_TYPES','DodaÅ¡ lahko samo %s slike.');
define('ERR_INSERT_PIC','Slike \'%s\' se ne da dodati v album ');
//define('INFO', 'Information');
define('ERR_COMMENT_EMPTY','Komentar je prazen!');
define('ERR_INVALID_FEXT','Veljavne so samo datoteke z naslednjimi končnicami: <br /><br />%s');
define('NO_FLOOD','Oprostite, ampak ste že avtor zadnjega komentarja k tej sliki <br /><br />Izberite urejanje, če želite spremeniti svoj komentar');
define('REDIRECT_MSG','Prestavljeni boste na novo stran.<br /><br /><br />Kliknite \'NAPREJ\', če se stran samodejno ne zamenja');
define('UPL_SUCCESS','Tvoje slike so bile uspešno dodane');

// lang_delete_php
define('CAPTION','Naslov');
define('FS_PIC','velika slika');
define('DEL_SUCCESS','uspešno pobrisano');
define('NS_PIC','normalna velikost slike');
define('ERR_DEL','brisanje ni možno');
define('THUMB_PIC','ikona');
//define('COMMENT', 'comment');
define('IM_IN_ALB','slika v albumu');
define('ALB_DEL_SUCCESS','Album \'%s\' pobrisan');
define('ALB_MGR','Urejanje albumov');
define('ERR_INVALID_DATA','Napačni podatki v \'%s\'');
define('CREATE_ALB','Kreiram album \'%s\'');
define('UPDATE_ALB','Posodabljam album \'%s\' z naslovom \'%s\' in indeksom \'%s\'');
define('DEL_PIC','Pobriži sliko');
define('DEL_ALB','Pobriši album');
define('DEL_USER','Pobriši uporabnika');
//define('ERR_UNKNOWN_USER', 'The selected user does not exist !');
define('COMMENT_DELETED','Komentar uspešno pobrisan');

// lang_display_image_php
define('PIC_CONFIRM_DEL','Are you sure you want to DELETE this picture ? \nComments will also be deleted.');
define('DEL_THIS_PIC','DELETE THIS PICTURE');
define('SIZE','%s x %s pikslov');
define('VIEWS','%s krat');
define('SLIDESHOW','Samodejno predvajanje');
define('STOP_SLIDESHOW','Ustavi predvajanje');
define('VIEW_FS','Klikni za ogled večje slike');
define('EDIT_PIC','UREDI INFORMACIJE O SLIKI');

// lang_picinfo
define('PIC_INF_TITLE','Picture information');
define('PIC_INF_FILENAME','Filename');
define('ALBUM_NAME','Album name');
define('PIC_INFO_RATING','Rating (%s votes)');
define('KEYWORDS','KljuÃ¨ne besede (loÃ¨i jih s presledki)');
define('PIC_INF_FILE_SIZE','File Size');
define('PIC_INF_DIMENSIONS','Dimensions');
define('DISPLAYED','Št. ogledov');
define('CAMERA','Kamera');
define('DATE_TAKEN','Date taken');
define('APERTURE','Zaslonka');
define('EXPOSURE_TIME','Exposure time');
define('FOCAL_LENGTH','Focal length');
define('COMMENT','Komentar');
define('ADDFAV','Dodaj med priljubljene');
define('ADDFAVPHRASE','Priljubljene');
define('REMFAV','Odstrani iz priljubljenih');
define('IPTCTITLE','IPTC naslov');
define('IPTCCOPYRIGHT','IPTC avtorske pravice');
define('IPTCKEYWORDS','IPTC ključne besede');
define('IPTCCATEGORY','IPTC kategorija');
define('IPTCSUBCATEGORIES','IPTC podkategorije');
define('BOOKMARK_PAGE','Zaznamuj sliko');
define('REMOVEFAV','Removed from Favorites Album');
define('ADDEDTOFAV','Added to Favorites Album');

// lang_display_comments
define('OK','OK');
define('COM_EDIT_TITLE','Edit this comment');
define('CONFIRM_DELETE_COM','Are you sure you want to delete this comment ?');
define('ADD_YOUR_COMMENT','Dodaj komentar');
define('COM_NAME','Name');
//define('COMMENT', 'Comment');
define('YOUR_NAME','Tvoje ime');

// lang_fullsize_popup
define('CLICK_TO_CLOSE','Kliknite sliko, da zaprete to okno');

// lang_ecard_php
define('E_TITLE','Send an e-card');
define('INVALID_EMAIL','<b>Opozorilo</b>: napačen e-mail naslov!');
define('E_ECARD_TITLE','An e-card from %s for you');
define('VIEW_ECARD','Če razglednice ne vidite pravilno, kliknite na to povezavo');
define('VIEW_MORE_PICS','Kliknite tukaj za ogled več slik!');
define('SEND_SUCCESS','Razglednica je bila poslana');
define('SEND_FAILED','Oprostite, toda strežnik ne omogoča pošiljanja razglednic...');
define('FROM','Od');
define('_YOUR_NAME','Your name');
define('YOUR_EMAIL','Vaš e-mail naslov ');
define('TO','Za');
define('RCPT_NAME','Naslovnikovo ime');
define('RCPT_EMAIL','Naslovnikov e-mail naslov');
define('GREETINGS','Pozdrav');
define('MESSAGE','Sporočilo');
define('ECARD_LINK_CORRUPT','Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser');

// lang_editpics_php
define('PIC_INFO','Informacija o sliki');
define('ALBUM','Album');
define('EDIT_TITLE','Uredi komentar');
define('DESC','Opis');
//define('KEYWORDS', 'Keywords');
define('PIC_INFO_STR','%sx%s - %skB - %s ogledov - %s ocen');
define('APPROVE','Odobri sliko');
define('POSTPONE_APP','Preloži odobritev');
//define('DEL_PIC', 'Delete picture');
define('READ_EXIF','Read EXIF info again');
define('RESET_VIEW_COUNT','Resetiraj števec ogledov');
define('RESET_VOTES','Resetiraj ocene');
define('DEL_COMM','PobriÅ¡i izbrane komentarje');
define('UPL_APPROVAL','Dodaj odobritev');
define('EDIT_PICS','UREJANJE');
define('SEE_NEXT','Poglej naslednjega');
define('SEE_PREV','Poglej predhodnega');
define('N_PIC','%s slik');
define('N_OF_PIC_TO_DISP','Število slik za prikaz');
define('APPLY','Izvedi spremembe');

// lang_groupmgr_php
define('GROUP_NAME','Ime skupine');
define('DISK_QUOTA','Velikost diska');
define('CAN_RATE','Obiskovalci lahko ocenjujejo slike');
define('CAN_SEND_ECARDS','Lahko pošiljajo razglednice');
define('CAN_POST_COM','Lahko dodajajo komentarje');
define('CAN_UPLOAD','Obiskovalci lahko dodajajo slike');
define('CAN_HAVE_GALLERY','Lahko imajo osebno galerijo');
//define('APPLY', 'Apply modifications');
define('CREATE_NEW_GROUP','Ustvari novo skupino');
define('DEL_GROUPS','Pobriši izbrano skupino');
define('CONFIRM_DEL','Res Å¾eliÅ¡ pobrisati tega uporabnika? \nTudi njegove slike in albumi bodo pobrisani.');
define('GROUP_TITLE','Manage user groups');
define('APPROVAL_1','Javne odobritve slik (1)');
define('APPROVAL_2','Zasebne odobritve slik (2)');
define('NOTE1','<b>(1)</b> Slike v javnih albumih potrebujejo odobritev za prikaz');
define('NOTE2','<b>(2)</b> Slike v zasebnih albumih potrebujejo odobritev za prikaz');
//define('NOTES', 'Notes');

// lang_index_php
define('WELCOME','Dobrodošli!');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB','Are you sure you want to DELETE this album ? \nAll pictures and comments will also be deleted.');
//define('DELETE', 'DELETE');
define('MODIFY','LASTNOSTI');
//define('EDIT_PICS', 'EDIT PICS');

// lang_list_categories
define('HOME','Domov');
define('STAT1','Št. slik:<b>[pictures]</b> - Št. albumov:<b>[albums]</b> - Št. kategorij:<b>[cat]</b> - Št. komentarjev:<b>[comments]</b> - Št. ogledov:<b>[views]</b>');
define('STAT2','Št. slik:<b>[pictures]</b> - Št. albumov:<b>[albums]</b> - Št. ogledov<b>[views]</b>');
define('XX_S_GALLERY','Galerija od %s');
define('STAT3','Št. slik:<b>[pictures]</b> - Št. albumov:<b>[albums]</b> - Št. komentarjev:<b>[comments]</b> - Št. ogledov:<b>[views]</b>');

// lang_list_users
define('USER_LIST','Seznam uporabnikov');
define('NO_USER_GAL','Brez uporabniških galerij');
define('N_ALBUMS','Št. albumov:%s');
define('N_PICS','Št. slik:%s');

// lang_list_albums
define('N_PICTURES','Š. slik:%s');
define('LAST_ADDED',', zadnja dodana %s');

// lang_modifyalb_php
define('UPD_ALB_N','Posodobi album %s');
define('GENERAL_SETTINGS','Splošne nastavitve');
define('ALB_TITLE','Ime albuma');
define('ALB_CAT','Kategorija od albuma');
define('ALB_DESC','Opis albuma');
define('ALB_THUMB','Ikona albuma');
define('ALB_PERM','Pravice za ta album');
define('CAN_VIEW','Album lahko vidijo');
define('MOD_CAN_UPLOAD','Visitors can upload pictures');
define('CAN_POST_COMMENTS','Obiskovalci lahko dodajajo komentarje');
define('MOD_CAN_RATE','Visitors can rate pictures');
define('USER_GAL','Uporabniška galerija');
define('NO_CAT','* Brez kategorije *');
define('ALB_EMPTY','Album je prazen');
define('LAST_UPLOADED','Zadnje dodano...');
define('PUBLIC_ALB','Vsi (javni album)');
define('ME_ONLY','Samo jaz');
define('OWNER_ONLY','Lastnik albuma (%s)');
define('GROUPP_ONLY','Člani skupine \'%s\'');
define('ERR_NO_ALB_TO_MODIFY','Brez albuma - spremembe možne samo v bazi.');
define('UPDATE','Posodobi ikone in/ali spremeni velikost slik');

// lang_rate_pic_php
define('ALREADY_RATED','Oprostite, ampak to sliko ste že ocenili');
define('RATE_OK','Vaša ocena je bila zabeležena');

// lang_register_php
define('USERNAME','UporabniÅ¡ko ime');
define('GROUP','Skupina');
define('DISK_USAGE','Velikost diska');
define('X_S_PROFILE','Profil od %s');

// lang_reviewcom_php
define('REVIEW_TITLE','Review comments');
define('NO_COMMENT','Ni komentarjev za prikaz');
define('N_COMM_DEL','Št. pobrisanik komentarjev:%s');
define('N_COMM_DISP','Št. komentarjev za prikaz');
define('R_SEE_PREV','See previous');
define('R_SEE_NEXT','See next');
define('R_DEL_COMM','Delete selected comments');

// lang_search_php
define('S_SEARCH','Search the image collection');

// lang_search_new_php
define('PAGE_TITLE','Iskanje novih slik');
define('SELECT_DIR','Izberi mapo');
define('SELECT_DIR_MSG','Ta ukaz vam omogoča dodajanje slik, ki ste jih dodali na strežnik s pomočjo FTP protokola.<br /><br />Izberite mapo, v katero ste dodali slike');
define('NO_PIC_TO_ADD','Tu ni nobenih slik za dodajanje');
define('NEED_ONE_ALBUM','Za uporabo te funkcije morate imeti vsaj en album');
define('WARNING','Opozorilo');
define('CHANGE_PERM','Pisanje v mapo ni omogočeno, spremenite pravice v 755 ali 777 pred ponovnim poskusom dodajanja slik!');
define('TARGET_ALBUM','<b>Dodaj slike </b>%s<b> v </b>%s');
define('FOLDER','Direktorij');
define('IMAGE','Slika');
//define('ALBUM', 'Album');
define('RESULT','Rezultat');
define('DIR_RO','Pisanje onemogočeno');
define('DIR_CANT_READ','Branje onemogočeno. ');
define('INSERT','Dodajanje novih slik v galerijo');
define('LIST_NEW_PIC','Seznam novih slik');
define('INSERT_SELECTED','Dodaj izbrane slike');
define('NO_PIC_FOUND','Brez novih slik');
define('BE_PATIENT','Potrpljenje prosim ... dodajanje traja nekaj časa.');
define('SN_NOTES','<ul><li><b>OK</b> : means that the picture was succesfully added<li><b>DP</b> : means that the picture is a duplicate and is already in the database<li><b>PB</b> : means that the picture could not be added, check your configuration and the permission of directories where the pictures are located<li>If the OK, DP, PB \'signs\' does not appear click on the broken picture to see any error message produced by PHP<li>If your browser timeout, hit the reload button</ul>');
define('SELECT_ALBUM','Izberi album');
define('NO_ALBUM','Izbran ni bil noben nov album, kliknite nazaj in izberite album, v katerega želite dodati svoje slike');

// lang_upload_php
define('UP_TITLE','Upload picture');
define('MAX_FSIZE','Največja dovoljena velikost datoteke je %s kB');
//define('ALBUM', 'Album');
define('PICTURE','Slika');
define('PIC_TITLE','Ime slike');
define('DESCRIPTION','Opis slike');
define('UP_KEYWORDS','Keywords (separate with spaces)');
define('ERR_NO_ALB_UPLOADABLES','Oprostite, trenutno ni albuma v katerega bi lahko dodal slike');

// lang_usermgr_php
define('U_TITLE','Manage users');
//define('NAME_A', 'Name ascending');
//define('NAME_D', 'Name descending');
define('GROUP_A','Skupina naraščajoče');
define('GROUP_D','Skupina padajoče');
define('REG_A','Datum reg. naraščajoče');
define('REG_D','Datum reg. padajoče');
define('PIC_A','Št. slik naraščajoče');
define('PIC_D','Št. slik padajoče');
define('DISKU_A','Poraba diska naraščajoče');
define('DISKU_D','Poraba diska padajoče');
define('SORT_BY','Sortiraj uporabnike po');
define('ERR_NO_USERS','Tabela s podatki je prazna!');
define('ERR_EDIT_SELF','Svojega profila ne morete spremeniti. Uporabite povezavo \'Moj profil\'');
define('EDIT','UREJANJE');
//define('DELETE', 'DELETE');
define('U_NAME','User name');
//define('GROUP', 'Group');
define('INACTIVE','Neaktivni');
//define('OPERATIONS', 'Operations');
define('PICTURES','Slike');
define('DISK_SPACE','Porabljen prostor');
define('REGISTERED_ON','Registriran');
define('U_USER_ON_P_PAGES','Št. uporabnikov:%d (št. strani:%d)');
define('USER_CONFIRM_DEL','Are you sure you want to DELETE this user ? \nAll his pictures and albums will also be deleted.');
define('MAIL','POŠTA');
define('ERR_UNKNOWN_USER','Izbrani uporabnik ne obstaja!');
define('MODIFY_USER','Uredi uporabnika');
//define('NOTES', 'Notes');
define('NOTE_LIST','<li>Če gesla ne želite spreminjati, pustite polje za geslo prazno');
define('PASSWORD','Geslo');
define('USER_ACTIVE_CP','User is active');
define('USER_GROUP_CP','User group');
define('USER_EMAIL','Uporabnikov email');
define('USER_WEB_SITE','Uporabnikova domača stran');
define('CREATE_NEW_USER','Ustvari novega uporabnika');
define('USER_FROM','Uporabnikova lokacija');
define('USER_INTERESTS','Uporabnikov poklic');
define('USER_OCC','Uporabnikova zaposlitev');

// lang_util_php
define('UTIL_TITLE','Resize pictures');
define('WHAT_IT_DOES','Kaj to pomeni');
define('WHAT_UPDATE_TITLES','Pobriši originalne slike in jih nadomesti z novimi');
define('WHAT_DELETE_TITLE','Brisanje imen');
define('WHAT_REBUILD','Ponastavi ikone in spremeni velikost slik');
define('WHAT_DELETE_ORIGINALS','PobriÅ¡e originalne slike in jih nadomesti z novimi');
define('U_FILE','File');
define('TITLE_SET_TO','naslov spremenjen v');
define('SUBMIT_FORM','Pošlji');
define('UPDATED_SUCCESFULLY','Uspešno posodobljeno');
define('ERROR_CREATE','NAPAKA pri kreiranju');
define('CONTIN','Process more images');
define('MAIN_SUCCESS','Datoteka %s je bila uporabljena za originalno sliko');
define('ERROR_RENAME','Napaka pri preimenovanju %s v %s');
define('ERROR_NOT_FOUND','Ne najdem datoteke %s');
define('U_BACK','back to main');
define('THUMBS_WAIT','Poteka posodabljanje ikon in/ali spreminjanje slik, prosim počakajte...');
define('THUMBS_CONTINUE_WAIT','Nadaljujem s posodabljanjem ikon in/ali slik, prosim počakajte...');
define('TITLES_WAIT','Posodabljanje naslovov, prosim počakajte... ');
define('DELETE_WAIT','Brisanje naslovov, prosim počakajte...');
define('REPLACE_WAIT','Brisanje originalnih slik in nadomeščanje s spremenjenimi, prosim počakajte...');
define('INSTRUCTION','Kratka navodila');
define('INSTRUCTION_ACTION','Izberi ukaz');
define('INSTRUCTION_PARAMETER','Nastavi parametre');
define('INSTRUCTION_ALBUM','Izberi album');
define('INSTRUCTION_PRESS','Pritisni %s');
define('U_UPDATE','Update thumbs and/or resized photos');
define('UPDATE_WHAT','Kaj naj posodobim');
define('UPDATE_THUMB','Samo ikone');
define('UPDATE_PIC','Samo spremenjene slike');
define('UPDATE_BOTH','Ikone in spremenjene slike');
define('UPDATE_NUMBER','Število slik za spreminjanje za vsak klik');
define('UPDATE_OPTION','(Poskusi z manjšo vrednostjo, če med izvajanjem operacije zmanjka časa)');
define('FILENAME_TITLE','Ime datoteke &rArr; Ime slike');
define('FILENAME_HOW','Kako naj pretvorim ime datoteke');
define('FILENAME_REMOVE','Odstrani končnico .jpg in nadomesti _ (podčrtaje) s presledki');
define('FILENAME_EURO','Spremeni 2003_11_23_13_20_20.jpg v 23/11/2003 13:20');
define('FILENAME_US','Spremeni 2003_11_23_13_20_20.jpg v 11/23/2003 13:20');
define('FILENAME_TIME','Spremeni 2003_11_23_13_20_20.jpg v 13:20');
define('UT_DELETE','Delete picture titles or original size photos');
define('DELETE_TITLE','Pobriši naslove slik');
define('DELETE_ORIGINAL','Pobriši originalne slike');
define('DELETE_REPLACE','Pobriši originalne slike, nadomesti jih s spremenjenimi (po velikosti)');
//define('SELECT_ALBUM', 'Select album');

// lang_pagetitle_php
define('VIEWING','Ogled slike');
define('USR','\'s Foto galerija');
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
