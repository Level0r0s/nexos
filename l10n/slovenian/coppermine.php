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
  $Source: /cvs/l10n/slovenian/coppermine.php,v $
  $Revision: 9.7 $
  $Author: djmaze $
  $Date: 2006/02/12 16:02:23 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Views');//new in 1.2.2nuke
define('PIC_VOTES', 'Votes');//new in 1.2.2nuke
define('PIC_COMMENTS', 'Comments');//new in 1.2.2nuke

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Slovenian');
define('LANG_NAME_NATIVE', 'Slovenčina');
define('LANG_COUNTRY_CODE', 'si');
define('TRANS_NAME', 's55hh');
define('TRANS_EMAIL', 's55hh.jani@siol.net');
define('TRANS_WEBSITE', 'http://slovhf.net/');
define('TRANS_DATE', '2003-10-11');
define('CHARSET', 'windows-1250');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Da');
define('NO', 'Ne');
// some common strings
define('BACK', 'NAZAJ');
define('CONTINU', 'NAPREJ');
define('INFO', 'Informacija');
//define('_ERROR', 'Error'); //already in main lang file
define('ALBUM_DATE_FMT', '%d.%m.%Y');
define('LASTCOM_DATE_FMT', '%d.%m.%Y ob %H:%M');
define('LASTUP_DATE_FMT', '%d.%m.%Y');
define('REGISTER_DATE_FMT', '%d.%m.%Y');
define('LASTHIT_DATE_FMT', '%d.%m.%Y ob %I:%M %p');
define('COMMENT_DATE_FMT', '%d.%m.%Y ob %I:%M %p');

// lang_meta_album_names
define('RANDOM', 'Naključne slike');
define('LASTUP', 'Zadnje dodane slike');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Zadnji dodani albumi');
define('LASTCOM', 'Zadnji komentarji');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Največ ogledov');
define('TOPRATED', 'Naj ocene');
define('LASTHITS', 'Zadnji ogledi');
define('SEARCH', 'Rezultati iskanja');
define('FAVPICS', 'Priljubljene slike');

// lang_errors
define('ACCESS_DENIED', 'Nima pravic za dostop do te strani.');
define('PERM_DENIED', 'Nima pravic za izvedbo tega ukaza.');
define('PARAM_MISSING', 'Manjkajo podatki za izvedbo...');
define('NON_EXIST_AP', 'Izbrani album/slika ne obstaja!');
define('QUOTA_EXCEEDED', 'Disk je poln<br /><br />Na razpolago ima [quota]K, tvoje slike pa trenutno zasedajo [space]K, če bi dodal pa e to sliko, bi prekoračil prostor na disku.');
define('GD_FILE_TYPE_ERR', 'Pri uporabi GD knjinice lahko uporabi samo JPEG in PNG slike.');
define('INVALID_IMAGE', 'Poslana slika je pokodovana ali pa ni v pravilnem formatu za GD knjinico.');
define('RESIZE_FAILED', 'Ne morem narediti ikone ali pomanjane slike.');
define('NO_IMG_TO_DISPLAY', 'Trenutno e brez slik');
define('NON_EXIST_CAT', 'Izbrana kategorija ne obstaja');
define('ORPHAN_CAT', 'Kategorija ima določeno neobstoječo nadrejeno kategorijo. Popravi napako v nastavitvah.');
define('DIRECTORY_RO', 'Direktorij \'%s\' ne dopuča pisanja, slik ni mono pobrisati');
define('NON_EXIST_COMMENT', 'Izbrani komentar ne obstaja.');
define('PIC_IN_INVALID_ALBUM', 'Slika je v neobstoječem albumu (%s)!?');
define('BANNED', 'Trenutno ima prepoved dostopa do teh strani.');
define('NOT_WITH_UDB', 'Ta ukaz je onemogočen, ker je premaknjen v forum. Ali to kar eli narediti ni omogočeno v nastavitvah ali pa je predvideno za izvedbo v forumu.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');
define('NO_IMG_TO_APPROVE', 'No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE', 'Pojdi na seznam albumov');
define('ALB_LIST_LNK', 'Seznam albumov');
define('MY_GAL_TITLE', 'Pojdi v mojo osebno galerijo');
define('MY_GAL_LNK', 'Moja galerija');
define('MY_PROF_LNK', 'Moj profil');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Preklop v administracijo');
define('ADM_MODE_LNK', 'Administracija');
define('USR_MODE_TITLE', 'Preklop v uporabniki način');
define('USR_MODE_LNK', 'Uporabniki način');
define('UPLOAD_PIC_TITLE', 'Naloi sliko v album');
define('UPLOAD_PIC_LNK', 'Nalaganje slik');
define('REGISTER_TITLE', 'Ustvari račun');
define('REGISTER_LNK', 'Registracija');
define('LOGIN_LNK', 'Prijava');
define('LOGOUT_LNK', 'Odjava');
define('LASTUP_LNK', 'Zadnje dodane slike');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Zadnji komentarji');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Največ ogledov');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Najbolj ocenjeno');
define('SEARCH_TITLE', 'Prebrskaj zbirko fotografij');
define('SEARCH_LNK', 'Iskanje');
define('FAV_TITLE', 'Moji favoriti');
define('FAV_LNK', 'Moji favoriti');
define('HELP_TITLE', 'POMOČ');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Odobri slike');
define('CONFIG_LNK', 'Nastavitve');
define('ALBUMS_LNK', 'Albumi');
define('CATEGORIES_LNK', 'Kategorije');
define('USERS_LNK', 'Uporabniki');
define('GROUPS_LNK', 'Skupine');
define('COMMENTS_LNK', 'Komentarji');
define('SEARCHNEW_LNK', 'Najdi nove slike');
define('UTIL_LNK', 'Spremeni velikost slike');
define('BAN_LNK', 'Zavrni uporabnika');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Ustvari/naroči svoj album');
define('MODIFYALB_LNK', 'Spremeni svoj album');
//define('MY_PROF_LNK', 'Moj profil');

// lang_cat_list
define('CATEGORY', 'Kategorija');
define('ALBUMS', 'Albumi');
//define('PICTURES', 'Slike');

// lang_album_list
define('ALBUM_ON_PAGE', 't. albumov:%d (t. strani:%d)');
// lang_thumb_view
define('DATE', 'Datum');
define('NAME', 'Datoteka');
define('TITLE', 'Naziv');
define('SORT_DA', 'Sortiraj po datumu naračujoče');
define('SORT_DD', 'Sortiraj po datumu padajoče');
define('SORT_NA', 'Sortiraj po imenu datoteke naračujoče');
define('SORT_ND', 'Sortiraj po imenu datoteke padajoče');
define('SORT_TA', 'Sortiraj po nazivu naračujoče');
define('SORT_TD', 'Sortiraj po nazivu padajoče');
define('PIC_ON_PAGE', 't. slik:%d (t. strani:%d)');
define('USER_ON_PAGE', 't. uporabnikov:%d (t. strani:%d)');
define('SORT_RA', 'Sort by rating ascending');
define('SORT_RD', 'Sort by rating descending');
define('THUMB_RATING', 'RATING');
define('SORT_TITLE', 'Slike razvrsti po:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Nazaj na stran z ikonami');
define('PIC_INFO_TITLE', 'Prikai/skrij informacije o sliki');
define('SLIDESHOW_TITLE', 'Samodejno predvajaj slike');
define('SLIDESHOW_DISABLED', 'e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'Polji sliko kot e-razglednico');
define('ECARD_DISABLED', 'Poiljanje e-razglednic ni dovoljeno');
define('ECARD_DISABLED_MSG', 'Nima pravic za poiljanje e-razglednic');
define('PREV_TITLE', 'Poglej predhodno sliko');
define('NEXT_TITLE', 'Poglej naslednjo sliko');
define('PIC_POS', 'Slika %s od %s');
define('NO_MORE_IMAGES', 'V tej galerij ni več slik');
define('NO_LESS_IMAGES', 'To je prva slika v galeriji');

// lang_rate_pic
define('RATE_THIS_PIC', 'Oceni to sliko ');
define('NO_VOTES', '(Brez ocen do sedaj)');
define('RATING', '(trenutna ocena: %s (največ 5; t. glasov:%s)');
define('RUBBISH', 'Zanič');
define('POOR', 'Slabo');
define('FAIR', 'Tako tako');
define('GOOD', 'Dobro');
define('EXCELLENT', 'Odlično');
define('GREAT', 'Super');

// lang_cpg_die
//define('INFORMATION', 'Informacija');
//define('ERROR', 'Napaka');
define('CRITICAL_ERROR', 'Kritična napaka');
define('FILE', 'Datoteka: ');
define('LINE', 'Vrstica: ');

// lang_display_thumbnails
define('FILENAME', 'Ime datoteke: ');
define('FILESIZE', 'Velikost datoteke: ');
define('DIMENSIONS', 'Dimenzija: ');
define('DATE_ADDED', 'Datum objave: ');

// lang_get_pic_data
define('N_COMMENTS', 't. komentarjev:%s');
define('N_VIEWS', 't. ogledov:%s');
define('N_VOTES', '(t. ocen:%s)');


// lang_albmgr_php
define('ALB_NEED_NAME', 'Album mora imeti ime!');
define('CONFIRM_MODIFS', 'Res eli izvesti te spremembe?');
define('NO_CHANGE', 'Nobenih sprememb nisi naredil!');
define('NEW_ALBUM', 'Novi album');
define('CONFIRM_DELETE1', 'Res eli pobrisati ta album?');
define('CONFIRM_DELETE2', '\\nVse slike in vsi komentarji bodo prav tako pobrisani!');
define('SELECT_FIRST', 'Najprej izberi album');
define('ALB_MRG', 'Urejanje albumov');
define('MY_GALLERY', '* Moja galerija *');
define('NO_CATEGORY', '* Brez kategorij *');
define('DELETE', 'Brisanje');
define('NEW', 'Novo');
define('APPLY_MODIFS', 'Izvedi spremembe');
define('SELECT_CATEGORY', 'Izberi kategorijo');

// lang_catmgr_php
define('MISS_PARAM', 'Parameter potreben za \'%s\'operacijo ni vpisan!');
define('UNKNOWN_CAT', 'Izbrana kategorija ne obstaja v bazi');
define('USERGAL_CAT_RO', 'Brisanje kategorije od uporabnikih galerij ni mono!');
define('MANAGE_CAT', 'Urejanje kategorij');
define('CONFIRM_DELETE_CAT', 'Res eli pobrisati to kategorijo');
//define('CATEGORY', 'Kategorija');
define('OPERATIONS', 'Operacija');
define('MOVE_INTO', 'Premakni v');
define('UPDATE_CREATE', 'Posodobi/ustvari kategorijo');
define('PARENT_CAT', 'Nadrejena kategorija');
define('CAT_TITLE', 'Ime kategorije');
define('CAT_DESC', 'Opis kategorije');

// lang_config_php
define('CONFIG_TITLE', 'Nastavitve');
define('RESTORE_CFG', 'Povrni osnovne nastavitve');
define('SAVE_CFG', 'Shrani nove nastavitve');
define('NOTES', 'Opombe');
//define('INFO', 'Informacija');
define('UPD_SUCCESS', 'Nastavitve galerije so bile uspeno posodobljene');
define('RESTORE_SUCCESS', 'Povrnjene so bile osnovne nastavitve galerije');
define('NAME_A', 'Naziv naračujoče');
define('NAME_D', 'Naziv padajoče');
define('TITLE_A', 'Naslov naračujoče');
define('TITLE_D', 'Naslov padajoče');
define('DATE_A', 'Datum naračujoče');
define('DATE_D', 'Datum padajoče');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Višina');
define('TH_WD', 'Širina');


// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Vpisati mora svoje ime in komentar');
define('COM_ADDED', 'Komentar dodan');
define('ALB_NEED_TITLE', 'Vpisati mora ime albuma!');
define('NO_UDP_NEEDED', 'Posodobitve niso potrebne.');
define('ALB_UPDATED', 'Album posodobljen');
define('UNKNOWN_ALBUM', 'Izbrani album ne obstaja ali pa nima pravic za dodajanje slik v ta album');
define('NO_PIC_UPLOADED', 'Nobena slika ni bila dodana!<br /><br />Če si resnično poslal sliko, preveri ali je to sploh dovoljeno...');
define('ERR_MKDIR', 'Kreiranje direktorija %s ni bilo uspeno!');
define('DEST_DIR_RO', 'eljeni direktorij %s ne omogoča pisanja - pravice!');
define('ERR_MOVE', 'Nemogoče je premakniti %s v %s !');
define('ERR_FSIZE_TOO_LARGE', 'Dimenzije slike so prevelike (dovoljeno je %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Velikost datoteke presega limit (dovoljeno je %s kB) !');
define('ERR_INVALID_IMG', 'Poslana slika ni v pravilnem formatu!');
define('ALLOWED_IMG_TYPES', 'Doda lahko samo %s slike.');
define('ERR_INSERT_PIC', 'Slike \'%s\' se ne da dodati v album ');
define('UPLOAD_SUCCESS', 'Tvoja slika je bila dodana.<br /><br />Vidna bo takoj po administratorjevi odobritvi.');
//define('INFO', 'Informacija');
define('ERR_COMMENT_EMPTY', 'Komentar je prazen!');
define('ERR_INVALID_FEXT', 'Veljavne so samo datoteke z naslednjimi končnicami: <br /><br />%s.');
define('NO_FLOOD', 'Oprosti, ampak si e avtor zadnjega komentarja za to sliko<br /><br />Izberi urejanje,če ga eli spremeniti');
define('REDIRECT_MSG', 'Prestavljen bo na novo stran.<br /><br /><br />Klikni \'NAPREJ\', če se stran samodejno ne zamenja');
define('UPL_SUCCESS', 'Tvoje slike so bile uspeno dodane');

// lang_delete_php
define('CAPTION', 'Naslov');
define('FS_PIC', 'velika slika');
define('DEL_SUCCESS', 'uspeno pobrisano');
define('NS_PIC', 'normalna velikost slike');
define('ERR_DEL', 'brisanje ni mono');
define('THUMB_PIC', 'ikona');
//define('COMMENT', 'komentar');
define('IM_IN_ALB', 'slika v albumu');
define('ALB_DEL_SUCCESS', 'Album \'%s\' pobrisan');
define('ALB_MGR', 'Urejanje albumov');
define('ERR_INVALID_DATA', 'Napačni podatki v \'%s\'');
define('CREATE_ALB', 'Kreiram album \'%s\'');
define('UPDATE_ALB', 'Posodabljam album \'%s\' z naslovom \'%s\' in indeksom \'%s\'');
define('DEL_PIC', 'Pobrii sliko');
define('DEL_ALB', 'Pobrii album');
define('DEL_USER', 'Pobrii uporabnika');
//define('ERR_UNKNOWN_USER', 'Izbrani uporabnik ne obstaja!');
define('COMMENT_DELETED', 'Komentar uspeno pobrisan');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'Res eli pobrisati to sliko? \\nTudi komentarji od nje bodo pobrisani.');
define('DEL_THIS_PIC', 'POBRII TO SLIKO');
define('SIZE', '%s x %s pixlov');
define('VIEWS', '%s krat');
define('SLIDESHOW', 'Samodejno predvajanje');
define('STOP_SLIDESHOW', 'Ustavi predvajanje');
define('VIEW_FS', 'Klikni za ogled večje slike');
define('EDIT_PIC', 'Spremeni informacije o sliki');

// lang_picinfo
define('PIC_INF_TITLE', 'Informacija o sliki');
define('PIC_INF_FILENAME', 'Ime datoteke');
define('ALBUM_NAME', 'Ime albuma');
define('PIC_INFO_RATING', 'Ocena (t. glasov:%s)');
define('KEYWORDS', 'Ključne besede');
define('PIC_INF_FILE_SIZE', 'Velikost datoteke');
define('PIC_INF_DIMENSIONS', 'Velikost slike');
define('DISPLAYED', 't. ogledov');
define('CAMERA', 'Kamera');
define('DATE_TAKEN', 'Datum posnetka');
define('APERTURE', 'Zaslonka');
define('EXPOSURE TIME', 'Čas');
define('FOCAL_LENGTH', 'Gorična razdalja');
define('COMMENT', 'Komentar');
define('ADDFAV', 'Dodaj med priljubljene');
define('ADDFAVPHRASE', 'Priljubljene');
define('REMFAV', 'Odstrani iz priljubljenih');
define('IPTCTITLE', 'IPTC naslov');
define('IPTCCOPYRIGHT', 'IPTC avtorske pravice');
define('IPTCKEYWORDS', 'IPTC ključne besede');
define('IPTCCATEGORY', 'IPTC kategorija');
define('IPTCSUBCATEGORIES', 'IPTC pod-kategorje');
define('BOOKMARK_PAGE', 'Bookmark Image');
define('REMOVEFAV', 'Removed from Favorites Album');
define('ADDEDTOFAV', 'Added to Favorites Album');

// lang_display_comments
define('OK', 'OK');
define('COM_EDIT_TITLE', 'Uredi komentar');
define('CONFIRM_DELETE_COM', 'Res eli pobrisati komentar?');
define('ADD_YOUR_COMMENT', 'Dodaj komentar');
define('COM_NAME', 'Ime');
//define('COMMENT', 'Komentar');
define('YOUR_NAME', 'Anonimne');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Klikni sliko, da zapre to okno');

// lang_ecard_php
define('E_TITLE', 'Polji e-razglednico');
define('INVALID_EMAIL', '<b>Opozorilo</b>: napačni e-mail naslov!');
define('E_ECARD_TITLE', 'To je e-razglednica od %s za tebe');
define('VIEW_ECARD', 'Če razglednice ne vidi pravilno, klikni na to povezavo');
define('VIEW_MORE_PICS', 'Klikni tukaj za ogled večih slik!');
define('SEND_SUCCESS', 'Razglednica je bila poslana');
define('SEND_FAILED', 'Oprosti, ampak serven ne omogoča poiljanja razglednic...');
define('FROM', 'Od');
define('_YOUR_NAME', 'Tvoje ime');
define('YOUR_EMAIL', 'Tvoj e.mail naslov');
define('TO', 'Za');
define('RCPT_NAME', 'Naslovnikovo ime');
define('RCPT_EMAIL', 'Naslovnikov e-mail naslov');
define('GREETINGS', 'Pozdrav');
define('MESSAGE', 'Sporočilo');
define('ECARD_LINK_CORRUPT', 'Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser'); //NEW

// lang_editpics_php
define('PIC_INFO', 'Informacija o sliki');
define('ALBUM', 'Album');
define('EDIT_TITLE', 'Naziv');
define('DESC', 'Opis');
//define('KEYWORDS', 'Ključne besede');
define('PIC_INFO_STR', '%sx%s - %skB - %s ogledov - %s ocen');
define('APPROVE', 'Odobri sliko');
define('POSTPONE_APP', 'Preloi odobritev');
//define('DEL_PIC', 'Pobrii sliko');
define('READ_EXIF', 'Ponovno preberi EXIF informacije');
define('RESET_VIEW_COUNT', 'Resetiraj tevec ogledov');
define('RESET_VOTES', 'Resetiraj ocene');
define('DEL_COMM', 'Pobrii komentarje');
define('UPL_APPROVAL', 'Dodaj odobritev');
define('EDIT_PICS', 'Uredi sliko');
define('SEE_NEXT', 'Naslednja slika');
define('SEE_PREV', 'predhodna slika');
define('N_PIC', '%s slik');
define('N_OF_PIC_TO_DISP', 'tevilo slik za prikaz');
define('APPLY', 'Izvedi spremembe');

// lang_groupmgr_php
define('GROUP_NAME', 'Ime skupine');
define('DISK_QUOTA', 'Velikost diska');
define('CAN_RATE', 'Lahko ocenjuje slike');
define('CAN_SEND_ECARDS', 'Lahko poilja razglednice');
define('CAN_POST_COM', 'Lahko dodaja komentarje');
define('CAN_UPLOAD', 'Lahko dodaja slike');
define('CAN_HAVE_GALLERY', 'Lahko ima osebno galerijo');
//define('APPLY', 'Izvedi spremembe');
define('CREATE_NEW_GROUP', 'Ustvari novo skupino');
define('DEL_GROUPS', 'Pobrii izbrano skupino');
define('CONFIRM_DEL', 'Opozorilo: pri brisanju skupine se vsi člani prmaknejo v skupino z imenom \'Registered\'!\\n\\neli nadaljevati?');
define('GROUP_TITLE', 'Urejanje uporabnikih skupin');
define('APPROVAL_1', 'Javne odobritve slik (1)');
define('APPROVAL_2', 'Privatne odobritve slik (2)');
define('NOTE1', '<b>(1)</b> Slike v javnih albumih potrebujejo odobritev za prikaz');
define('NOTE2', '<b>(2)</b> Slike v privatnih albumih potrebujejo odobritev za prikaz');
//define('NOTES', 'Notes');

// lang_index_php
define('WELCOME', 'Dobrodoel!');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'Res eli pobrisati ta album? \\nVse slike in komentarji bodo pobriani.');
//define('DELETE', 'BRISANJE');
define('MODIFY', 'LASTNOSTI');
//define('EDIT_PICS', 'UREJANJE');

// lang_list_categories
define('HOME', _HOME);
define('STAT1', 't. slik:<b>[pictures]</b> - t. albumov:<b>[albums]</b> - t. kategorij:<b>[cat]</b>  - t. komentarjev:<b>[comments]</b> - t. ogledov:<b>[views]</b>');
define('STAT2', 't. slik:<b>[pictures]</b> - t. albumov:<b>[albums]</b> - t. ogledov<b>[views]</b>');
define('XX_S_GALLERY', 'Galerija od %s');
define('STAT3', 't. slik:<b>[pictures]</b> - t. albumov:<b>[albums]</b> - t. komentarjev:<b>[comments]</b>  - t. ogledov:<b>[views]</b>');

// lang_list_users
define('USER_LIST', 'Seznam uporabnikov');
define('NO_USER_GAL', 'Brez uporabnikih galerij');
define('N_ALBUMS', 't. albumov:%s');
define('N_PICS', 't. slik:%s');

// lang_list_albums
define('N_PICTURES', 't. slik:%s');
define('LAST_ADDED', ', zadnja dodana %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Posodobi album %s');
define('GENERAL_SETTINGS', 'Splone nastavitve');
define('ALB_TITLE', 'Ime albuma');
define('ALB_CAT', 'Kategorija od albuma');
define('ALB_DESC', 'Opis albuma');
define('ALB_THUMB', 'Ikona albuma');
define('ALB_PERM', 'Pravice za ta album');
define('CAN_VIEW', 'Album lahko vidijo');
define('MOD_CAN_UPLOAD', 'Obiskovalci lahko dodajajo slike');
define('CAN_POST_COMMENTS', 'Obiskovalci lahko dodajajo komentarje');
define('MOD_CAN_RATE', 'Obiskovalci lahko ocenjujejo slike');
define('USER_GAL', 'Uporabnika galerija');
define('NO_CAT', '* Brez kategorije *');
define('ALB_EMPTY', 'Album je prazen');
define('LAST_UPLOADED', 'Zadnje dodano...');
define('PUBLIC_ALB', 'Vsi (javni album)');
define('ME_ONLY', 'Samo jaz');
define('OWNER_ONLY', 'Lastnik albuma (%s)');
define('GROUPP_ONLY', 'Člani skupine \'%s\'');
define('ERR_NO_ALB_TO_MODIFY', 'Brez albuma - spremembe mone samo v bazi.');
define('UPDATE', 'Posodobi album');

// lang_rate_pic_php
define('ALREADY_RATED', 'Oprosti, ampak to sliko si e ocenil');
define('RATE_OK', 'Tvoja ocena je bila zabeleena');

// lang_register_php
define('USERNAME', 'Uporabniko ime');
define('X_S_PROFILE', 'Profil od %s');
define('GROUP', 'Skupina');
define('DISK_USAGE', 'Velikost diska');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Prikaz komentarjev');
define('NO_COMMENT', 'Ni komentarjev za prikaz');
define('N_COMM_DEL', 't. pobrisanik komentarjev:%s');
define('N_COMM_DISP', 't. komentarjev za prikaz');
define('R_SEE_PREV', 'Poglej predhodnega');
define('R_SEE_NEXT', 'Poglej naslednjega');
define('R_DEL_COMM', 'Pobrii izbrane komentarje');

// lang_search_php
define('S_SEARCH', 'Iskanje slik');

// lang_search_new_php
define('PAGE_TITLE', 'Iskanje novih slik');
define('SELECT_DIR', 'Izberi direktorij');
define('SELECT_DIR_MSG', 'Ta ukaz ti omogoča dodajanje slik, ki si jih dodal na server s pomočjo FTP protokola.<br /><br />Izberi direktorij v katerega si dodal slike');
define('NO_PIC_TO_ADD', 'Tu ni nobenih slik za dodajanje');
define('NEED_ONE_ALBUM', 'Za uporabo te funkcije mora imeti vsaj en album');
define('WARNING', 'Opozorilo');
define('CHANGE_PERM', 'pisanje v direktorij ni omogočeno, spremeni pravice v 755 ali 777 pred ponovnim poskusom dodajanja slik!');
define('TARGET_ALBUM', '<b>Dodaj slike </b>%s<b> v </b>%s');
define('FOLDER', 'Direktorij');
define('IMAGE', 'Slika');
//define('ALBUM', 'Album');
define('RESULT', 'Rezultat');
define('DIR_RO', 'Pisanje onemogočeno. ');
define('DIR_CANT_READ', 'Branje onemobočeno. ');
define('INSERT', 'Dodajanje novih slik v galerijo');
define('LIST_NEW_PIC', 'Seznam novih slik');
define('INSERT_SELECTED', 'Dodaj izbrane slike');
define('NO_PIC_FOUND', 'Brez novih slik');
define('BE_PATIENT', 'Potrpeljivost... dodajanje traja nekaj časa');
define('SN_NOTES', '<ul><li><b>OK</b>: pomeni, da so slike uspeno dodane<li><b>DP</b>: pomeni, da je slika duplikat in je e v bazi<li><b>PB</b>: pomeni, da slike ni mono dodati. Preveri nastavitve in pravice za direktorij v katerem se nahajajo<li>Če ne vidi oznak OK, DP ali PB, klikni na manjkajočo slikico za prikaz napake, ki jo generira PHP<li>Za osveitev prikaza pritisni tipko reload  v svojem brskalniku</ul>');
define('SELECT_ALBUM', 'Izberi album');
define('NO_ALBUM', 'Niste izbrali albuma. Vrnite se nazaj in izberite album v katerega želite dodati slike.');

// lang_upload_php
define('UP_TITLE', 'Dodaj sliko');
define('MAX_FSIZE', 'Največja dovoljena velikost datoteke je %s kB');
//define('ALBUM', 'Album');
define('PICTURE', 'Slika');
define('PIC_TITLE', 'Ime slike');
define('DESCRIPTION', 'Opis slike');
define('UP_KEYWORDS', 'Ključne besede (loči jih s presledki)');
define('ERR_NO_ALB_UPLOADABLES', 'Oprosti, trenutno ni albuma v katerega bi lahko dodal slike');

// lang_usermgr_php
define('U_TITLE', 'Urejanje uporabnikov');
//define('NAME_A', 'Ime naračajoče');
//define('NAME_D', 'Ime padajoče');
define('GROUP_A', 'Skupina naračajoče');
define('GROUP_D', 'Skupina padajoče');
define('REG_A', 'Datum reg. naračajoče');
define('REG_D', 'Datum reg. padajoče');
define('PIC_A', 't. slik naračajoče');
define('PIC_D', 't. slik padajoče');
define('DISKU_A', 'Poraba diska naračajoče');
define('DISKU_D', 'Poraba diska padajoče');
define('SORT_BY', 'Sortiraj uporabnike po');
define('ERR_NO_USERS', 'Tabela s podatki je prazna!');
define('ERR_EDIT_SELF', 'Svojega prifila ne more spremeniti. Uporabi povezavo \'Moj profil\'');
define('EDIT', 'UREJANJE');
//define('DELETE', 'BRISANJE');
define('U_NAME', 'Uporabniko ime');
//define('GROUP', 'Skupina');
define('INACTIVE', 'Neaktivni');
//define('OPERATIONS', 'Operacije');
define('PICTURES', 'Slike');
define('DISK_SPACE', 'Porabljen prostor');
define('REGISTERED_ON', 'Registriran');
define('U_USER_ON_P_PAGES', 't. uporabnikov:%d (t. strani:%d)');
define('USER_CONFIRM_DEL', 'Res eli pobrisati tega uporabnika? \\nTudi njegove slike in albumi bodo pobrisani.');
define('MAIL', 'POTA');
define('ERR_UNKNOWN_USER', 'Izbrani uporabnik ne obstaja!');
define('MODIFY_USER', 'Uredi uporabnika');
//define('NOTES', 'Opombe');
define('NOTE_LIST', '<li>Če gesla ne eli spreminjati, pusti polje za geslo prazno');
define('PASSWORD', 'Geslo');
define('USER_ACTIVE_CP', 'Uporabnik je aktiven');
define('USER_GROUP_CP', 'Uporabnikova skupina');
define('USER_EMAIL', 'Uporabnikov email');
define('USER_WEB_SITE', 'Uporabnikova domača stran');
define('CREATE_NEW_USER', 'Ustvari novega uporabnika');
define('USER_FROM', 'Uporabnikova lokacija');
define('USER_INTERESTS', 'Uporabnikovo zanimanje');
define('USER_OCC', 'Uporabnikova zaposlitev');

// lang_util_php
define('UTIL_TITLE', 'Spremeni velikost slik');
define('WHAT_IT_DOES', 'Kaj to pomeni');
define('WHAT_UPDATE_TITLES', 'Kreira imena slik iz imena datotek');
define('WHAT_DELETE_TITLE', 'Brisanje imen');
define('WHAT_REBUILD', 'Ponastavi ikone in spremeni velikost slik');
define('WHAT_DELETE_ORIGINALS', 'Pobrie originalne slike in jih nadomesti z novimi');
define('U_FILE', 'Datoteka');
define('TITLE_SET_TO', 'naslov spremenjen v');
define('SUBMIT_FORM', 'polji');
define('UPDATED_SUCCESFULLY', 'uspeno posodobljeno');
define('ERROR_CREATE', 'NAPAKA pri kreiranju');
define('CONTIN', 'Nadaljuj na naslednjih slikah');
define('MAIN_SUCCESS', 'Datoteka %s je bila uporabljena za originalno sliko');
define('ERROR_RENAME', 'Napaka pri preimenovanju %s v %s');
define('ERROR_NOT_FOUND', 'Ne najdem datoteke %s');
define('U_BACK', 'nazaj na glavno stran');
define('THUMBS_WAIT', 'Poteka posodabljanje ikon in/ali spreminjanje slik, prosim počakaj...');
define('THUMBS_CONTINUE_WAIT', 'Nadaljujem s posodabljanjem ikon in/ali slik, prosim počakaj...');
define('TITLES_WAIT', 'Posodabljanje naslovov, prosim počakaj...');
define('DELETE_WAIT', 'Brisanje naslovov, prosim počakaj...');
define('REPLACE_WAIT', 'Brisanje originalnih slik in nadomečanje s spremenjenimi, prosim počakaj..');
define('INSTRUCTION', 'Kratka navodila');
define('INSTRUCTION_ACTION', 'Izberi ukaz');
define('INSTRUCTION_PARAMETER', 'Nastavi parametre');
define('INSTRUCTION_ALBUM', 'Izberi album');
define('INSTRUCTION_PRESS', 'Pritisni %s');
define('U_UPDATE', 'Posodobi ikone in/ali spremeni velikost slik');
define('UPDATE_WHAT', 'Kaj naj posodobim');
define('UPDATE_THUMB', 'Samo ikone');
define('UPDATE_PIC', 'Samo spremenjene slike');
define('UPDATE_BOTH', 'Ikone in spremenjene slike');
define('UPDATE_NUMBER', 'tevilo slik za spreminjanje za vsak klik');
define('UPDATE_OPTION', '(Poskusi z manjo vrednostjo, če pride do poteka časa med izvajanjem opracije)');
define('FILENAME_TITLE', 'Ime datoteke &rArr; Ime slike');
define('FILENAME_HOW', 'Kako naj pretvorim ime datoteke');
define('FILENAME_REMOVE', 'Odstrani končnico .jpg in nadomesti _ (podčrtaj) s presledki');
define('FILENAME_EURO', 'Spremeni 2003_11_23_13_20_20.jpg v 23/11/2003 13:20');
define('FILENAME_US', 'Spremeni 2003_11_23_13_20_20.jpg v 11/23/2003 13:20');
define('FILENAME_TIME', 'Spremeni 2003_11_23_13_20_20.jpg v 13:20');
define('UT_DELETE', 'Pobrii naslove slik ali originalne slike');
define('DELETE_TITLE', 'Pobrii naslove slik');
define('DELETE_ORIGINAL', 'Pobrii originalne slike');
define('DELETE_REPLACE', 'Pobrii originalne slike, nadomesti jih s spremenjenimi (po velikosti)');
//define('SELECT_ALBUM', 'Izberi album');

// lang_pagetitle_php
define('VIEWING', 'Ogled fotografije');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Fotogalerija');
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
    'Osnovne nastavitve',
    array('Ime galerije', 'gallery_name', 0),
    array('Opis galerije', 'gallery_description', 0),
    array('Administratorjev e-mail', 'gallery_admin_email', 0),
    array('Address to nuke folder ie http://example.com/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
    array('Tema', 'theme', 6),
    array('Page Specific Titles instead of >Coppermine', 'nice_titles', 1),
//'Album list view',
    'Seznam albumov',
    array('irina glavne tabele (pixli ali %)', 'main_table_width', 0),
    array('tevilo nivojev za prikaz kategorij', 'subcat_level', 0),
    array('tevilo albumov na strani', 'albums_per_page', 0),
    array('tevilo kolon za prikaz albumov', 'album_list_cols', 0),
    array('Velikost ikon v pixlih', 'alb_list_thumb_size', 0),
    array('Vsebina na glavni strani', 'main_page_layout', 0),
    array('Prikaz ikon albumov za prvi nivo kategorij', 'first_level', 1), 
//'Thumbnail view',
    'Prikaz ikon',
    array('tevilo kolon na strani z ikonami', 'thumbcols', 0),
    array('tevilo vrstic na strani z ikonami', 'thumbrows', 0),
    array('Max. t. tabulatorjev', 'max_tabs', 0),
    array('Prikai opis slike (zraven imena) pod ikono', 'caption_in_thumbview', 1),
    array('Prikai tevilo komentarjev pod ikono', 'display_comment_count', 1),
    array('Privzeto sortiranje slik', 'default_sort_order', 3),
    array('Minimalno tevilo ocen za sliko, da se uvrsti na seznam \'naj-ocene\' ', 'min_votes_for_rating', 0),
    array('Alts and title tags of thumbnail show title and keyword instead of picinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
 //'Display Image &amp; Comment settings',
    'Prikaz slik &amp; nastavitve za komentarje',
    array('irina tabele za prikaz slik (pixli ali %)', 'picture_table_width', 0),
    array('Informacija o sliki je privzeto vidna', 'display_pic_info', 1),
    array('Izloči grde besede v komentarjih', 'filter_bad_words', 1),
    array('Dovoli smekote v komentarjih', 'enable_smilies', 1),
    array('Allow several consecutive comments on one pic from the same user', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
    array('Email site admin upon comment submission' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
    array('Max. velikost za opis slike', 'max_img_desc_length', 0),
    array('Max. tevilo zankov v besedi', 'max_com_wlength', 0),
    array('Max. tevilo vrstic komentarja', 'max_com_lines', 0),
    array('Max. velikost komentarja', 'max_com_size', 0),
    array('Prikai filmski trak z ikonami', 'display_film_strip', 1),
    array('t. ikon na traku', 'max_film_strip_items', 0),
    array('Allow viewing of full size pic by anonymous', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
    array('Number of days between being able to vote on the same image','keep_votes_time',0), // new in cpg1.2.2c nuke
    array('Show fullsize picture in slideshow','fullsize_slideshow',1),
    array('Show blocks on the right of displayimage if right blocks are on at module level?', 'right_blocks', 1), // new 1.2.2
// 'Pictures and thumbnails settings',
    'Nastavitve slik in ikon',
    array('Kvaliteta za JPEG datoteke', 'jpeg_qual', 0),
    array('Place watermark on image', 'watermark', 1),
    array('Max. velikost za ikone <b>*</b>', 'thumb_width', 0),
    array('Velikost uporabi za irino ali viino ali razmerje ikone <b>*</b>', 'thumb_use', 7),
    array('Ustvari vmesne slike', 'make_intermediate', 1),
    array('Max. irina ali viina vmesnih slik <b>*</b>', 'picture_width', 0),
    array('Max. velikost datotek/slik (kB)', 'max_upl_size', 0),
    array('Max. irina ali viina dodanih slik (pixli)', 'max_upl_width_height', 0), 
    array('Allow multiple Files to be upload with same file name', 'samename', 1), 
//'User settings',
    'Nastavitve uporabnikov',
    array('Dovoli registriranje novih uporabnikov', 'allow_user_registration', 1),
/*
    array('User registration requires email verification', 'reg_requires_valid_email', 1),
    array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),
*/
    array('Uporabnik ima lahko privatni album', 'allow_private_albums', 1),
    array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',
    'Dodatna polja za vpis informacij o sliki (pusti prazno, če ne uporablja)',
    array('Polje 1', 'user_field1_name', 0),
    array('Polje 2', 'user_field2_name', 0),
    array('Polje 3', 'user_field3_name', 0),
    array('Polje 4', 'user_field4_name', 0), 
	//'Pictures and thumbnails advanced settings',
    'Pictures and thumbnails advanced settings',
	array('Prikai ikone privatnih albumov neprijavljenim uporabnikom', 'show_private', 1),
    array('Prepovedani znaki v imenih datotek', 'forbiden_fname_char', 0),
    array('Dovoljene vrste datotek za dodajanje slik', 'allowed_file_extensions', 0),
    array('Način kreiranja ikon', 'thumb_method', 2),
    array('Pot do ImageMagick/netpbm programa (npr. /usr/bin/X11/)', 'impath', 0),
    array('Dovoljene vrste datotek (samo za ImageMagick)', 'allowed_img_types', 0),
    array('Opcija za ukazno vrstico od ImageMagick', 'im_options', 0),
    array('Prikai EXIF podatke v JPEG datotekah', 'read_exif_data', 1),
    array('Prikai IPTC podatke v JPEG datotekah', 'read_iptc_data', 1), // new in cpg1.2.0nuke
    array('Direktorij za albume <b>*</b>', 'fullpath', 0),
    array('Direktorij za slike od uporabnikov <b>*</b>', 'userpics', 0),
    array('Predpona za vmesne slike <b>*</b>', 'normal_pfx', 0),
    array('Predpona za ikone <b>*</b>', 'thumb_pfx', 0),
    array('Picinfo display filename', 'picinfo_display_filename', '1'), // new in cpg1.2.0nuke
    array('Picinfo display album name', 'picinfo_display_album_name', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_file_size', 'picinfo_display_file_size', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_dimensions', 'picinfo_display_dimensions', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_count_displayed', 'picinfo_display_count_displayed', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_URL', 'picinfo_display_URL', '1'), // new in cpg1.2.0nuke
    array('Picinfo display URL as bookmark link', 'picinfo_display_URL_bookmark', '1'), // new in cpg1.2.0nuke
    array('Picinfo display fav album link', 'picinfo_display_favorites', '1'), // new in cpg1.2.0nuke
//    'Cookies &amp; Charset settings',
    'Pikotki in kodne tabele',
    array('Ime za pikotke, ki jih uporablja galerija', 'cookie_name', 0),
    array('Pot do pikotkov', 'cookie_path', 0),
//    'Miscellaneous settings',
    'Ostale nastavitve',
    array('Vključi način za odkrivanje napak', 'debug_mode', 1),
    '<br /><div align="center">(*) Polja označena z * se ne smejo spreminjati, če so v galeriji e slike</div><br />'
    );
// end left side interpretation
