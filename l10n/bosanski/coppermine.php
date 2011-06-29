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
  $Source: /cvs/l10n/bosanski/coppermine.php,v $
  $Revision: 9.6 $
  $Author: djmaze $
  $Date: 2006/02/12 16:01:42 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Views');//new in 1.2.2nuke
define('PIC_VOTES', 'Votes');//new in 1.2.2nuke
define('PIC_COMMENTS', 'Comments');//new in 1.2.2nuke

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Bosnian');
define('LANG_NAME_NATIVE', 'Bosanski');
define('LANG_COUNTRY_CODE', 'gb');
define('TRANS_NAME', 'Kakanj.net');
define('TRANS_EMAIL', 'info@kakanj.net');
define('TRANS_WEBSITE', 'http://Kakanj.net/');
define('TRANS_DATE', '2003-04-07');
define('TRANS_NAME_2', 'Valerio Šehic');
define('TRANS_EMAIL_2', 'webmaster@oikc.org');
define('TRANS_WEBSITE_2', 'http://oikc.org/');
define('TRANS_DATE_2', '2005-07-07');
define('CHARSET', 'utf-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Da');
define('NO', 'Ne');
// some common strings
define('BACK', 'NAZAD');
define('CONTINU', 'Nastavi');
define('INFO', 'Informacija');
//define('ERROR', 'Greška');
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%d/%m/%y at %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y at %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y at %I:%M %p');

// lang_meta_album_names
define('RANDOM', 'Slucajna slika');
define('LASTUP', 'Posljednje dodano');
define('LASTUPBY', 'Moji poslijednji dodaci');
define('LASTALB', 'Poslijednji dodani albumi');
define('LASTCOM', 'Posljedni komentari');
define('LASTCOMBY', 'Moji poslijednji komentari');
define('TOPN', 'Najgledanije');
define('TOPRATED', 'Visoko rangirano');
define('LASTHITS', 'Posljednje pogledano');
define('SEARCH', 'Rezultati pretrage');
define('FAVPICS', 'Najdraže slike');

// lang_errors
define('ACCESS_DENIED', 'Nemaš pristup ovoj stranici.');
define('PERM_DENIED', 'Nije ti dozvoljeno da izvršiš tu operaciju.');
define('PARAM_MISSING', 'Skripta je pozvana bez obaveznih parametara.');
define('NON_EXIST_AP', 'Izabrani album/slika više ne postoji !');
define('QUOTA_EXCEEDED', 'Disk kvota prekoracen<br /><br />Imate dozvoljenu kvotu od [quota]K, vaše slike zauzimaju [space]K, dodavanjem ove slike probijate dozvoljenu kvotu.');
define('GD_FILE_TYPE_ERR', 'Ukoliko kotristite GD slikovnu galeriju dozvoljene slike su samo JPG i PNG.');
define('INVALID_IMAGE', 'Slika koju ste uploadali je odbaÃ¨ena ili je ne moÅ¾e obraditi GD galerija');
define('RESIZE_FAILED', 'Nije moguÃ¦e napraviti manju sliÃ¨icu.');
define('NO_IMG_TO_DISPLAY', 'Nema slike za prikaz');
define('NON_EXIST_CAT', 'Izabrana kategorija ne postoji');
define('ORPHAN_CAT', 'Kategorija ne postoji, pokrenite organizator kategorija da bi riješili problem.');
define('DIRECTORY_RO', 'Direktoriju \'%s\' nije dodjeljen status writable, slike ne mogu biti izbrisane');
define('NON_EXIST_COMMENT', 'Izabrani komentar ne postoji.');
define('PIC_IN_INVALID_ALBUM', 'Slika je u nesposoban albumu (%s)!?');
define('BANNED', 'Trenutno ste banovani sa ove stranice.');
define('NOT_WITH_UDB', 'Ova funkcija je onemogucena u galeriji zato što je integrisana sa forumom. Ono što želite uraditi nije podržano sa ovom administracijom, a takode nemoguce ju je izvršiti u administraciji foruma.');
define('MEMBERS_ONLY', 'Ova funkcija je samo za clanove, molimo vas prijavite se.');
define('MUSTBE_GOD', 'Ova funkcija je samo za Administratore. Morate biti logirani kao superadmin, da pristupite ovoj funkciji!');
define('NO_IMG_TO_APPROVE', 'Nema slika za odobrenje!');

// lang_main_menu
define('ALB_LIST_TITLE', 'Idi na listu albuma');
define('ALB_LIST_LNK', 'Lista albuma');
define('MY_GAL_TITLE', 'Idi na moju licnu galeriju');
define('MY_GAL_LNK', 'Moja galerija');
define('MY_PROF_LNK', 'Moj profil');
define('MY_PROF_TITLE','Provjerite vašu disk kvotu i grupe');
define('ADM_MODE_TITLE', 'Prebaci na admin mod');
define('ADM_MODE_LNK', 'Admin mod');
define('USR_MODE_TITLE', 'Prebaci na korisniÃ¨ki mod');
define('USR_MODE_LNK', 'KorisniÃ¨ki mod');
define('UPLOAD_PIC_TITLE', 'Uploadaj sliku u album');
define('UPLOAD_PIC_LNK', 'Upload sliku');
define('REGISTER_TITLE', 'Kreiraj account');
define('REGISTER_LNK', 'Registracija');
define('LOGIN_LNK', 'Ulaz');
define('LOGOUT_LNK', 'Izlaz');
define('LASTUP_LNK', 'Posljednje dodano');
define('LASTUP_TITLE', 'Trenutno dodane slike');
define('LASTCOM_TITLE', 'Slike poredane po poslijednje dodanom komentaru');
define('LASTCOM_LNK', 'Posljednji komentari');
define('TOPN_TITLE', 'Slike koje su najviše pregledavane');
define('TOPN_LNK', 'Najgledanije');
define('TOPRATED_TITLE', 'Slike sa najviše ocjena');
define('TOPRATED_LNK', 'Visoko rangirano');
define('SEARCH_TITLE', 'Pretraži Foto Kolekciju!');
define('SEARCH_LNK', 'Pretraga');
define('FAV_TITLE', 'Moje Najdraže Slike');
define('FAV_LNK', 'Moje Najdraže');
define('HELP_TITLE', 'Pomoc');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\" vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\" border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Dozvola uploada');
define('CONFIG_LNK', 'Konfiguracija');
define('ALBUMS_LNK', 'Albumi');
define('CATEGORIES_LNK', 'Kategorije');
define('USERS_LNK', 'Korisnici');
define('GROUPS_LNK', 'Grupe');
define('COMMENTS_LNK', 'Komentari');
define('SEARCHNEW_LNK', 'Prebacivanje');
define('UTIL_LNK', 'Promjeni Velicinu Slike');
define('BAN_LNK', 'Banuj Korisnika');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Kreiraj / poredaj moje albume');
define('MODIFYALB_LNK', 'Prepravi moje albume');
//define('MY_PROF_LNK', 'Moj profil');

// lang_cat_list
define('CATEGORY', 'Kategorija');
define('ALBUMS', 'Albumi');
//define('PICTURES', 'Slike');

// lang_album_list
define('ALBUM_ON_PAGE', '%d albuma na %d stranici');
// lang_thumb_view
define('DATE', 'Datum');
define('NAME', 'Naziv');
define('TITLE', 'Naslov');
define('SORT_DA', 'Poredaj po datumu novije');
define('SORT_DD', 'Poredaj po datumu starije');
define('SORT_NA', 'Poredaj po nazivu novije');
define('SORT_ND', 'Poredaj po nazivu starije');
define('SORT_TA', 'Poredaj po naslovu novije');
define('SORT_TD', 'Poredaj po naslivu starije');
define('PIC_ON_PAGE', '%d slika na %d stranici');
define('USER_ON_PAGE', '%d korisnika na %d stranici');
define('SORT_RA', 'Poredaj od najviše rangiranih prema dole');
define('SORT_RD', 'Poredaj od najmanje rangiranih prema dole');
define('THUMB_RATING', 'Ocjenjivanje');
define('SORT_TITLE', 'Poredaj slike po:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Povratak na slicice');
define('PIC_INFO_TITLE', 'Pokaži/sakrij info o fotografiji');
define('SLIDESHOW_TITLE', 'Prezentacija');
define('SLIDESHOW_DISABLED', 'e-cards su onemogucene');
define('SLIDESHOW_DISABLED_MSG', 'Ova funkcija je za clanove samo, molimo vas prijavite se.');
define('ECARD_TITLE', 'Pošalji ovu sliku kao razglednicu');
define('ECARD_DISABLED', 'razglednica je iskljuÃ¨ena');
define('ECARD_DISABLED_MSG', 'Nije ti dozvoljeno da pošalješ razglednicu');
define('PREV_TITLE', 'Pogledaj prethodnu sliku');
define('NEXT_TITLE', 'Pogledaj sljedecu sliku');
define('PIC_POS', 'Slika %s/%s');
define('NO_MORE_IMAGES', 'Nema više slika u ovoj galeriji');
define('NO_LESS_IMAGES', 'Ovo je priva slika u ovoj galeriji');

// lang_rate_pic
define('RATE_THIS_PIC', 'Ocijeni ovu fotografiju ');
define('NO_VOTES', '(Još nema ocjena)');
define('RATING', '(trenute ocjene : %s / 5 sa %s glasova)');
define('RUBBISH', 'Bez veze');
define('POOR', 'Onako');
define('FAIR', 'Može proci');
define('GOOD', 'Dobro');
define('EXCELLENT', 'Odlicno');
define('GREAT', 'Fantasticno');

// lang_cpg_die
//define('INFORMATION', 'Informacija');
//define('ERROR', 'Greška');
define('_CRITICAL_ERROR', 'Kriticna greška');
define('FILE', 'Datoteka: ');
define('LINE', 'Linija: ');

// lang_display_thumbnails
define('FILENAME', 'Naziv datoteke : ');
define('FILESIZE', 'Velicina : ');
define('DIMENSIONS', 'Dimenzije : ');
define('DATE_ADDED', 'Dodana : ');

// lang_get_pic_data
define('N_COMMENTS', '%s komentara');
define('N_VIEWS', '%s pregleda');
define('N_VOTES', '(%s glasova)');


// lang_albmgr_php
define('ALB_NEED_NAME', 'Moraš upisati ime albuma !');
define('CONFIRM_MODIFS', 'Da li ste sigurni da želite napraviti promjene ?');
define('NO_CHANGE', 'Niste napravili nikakvu promjenu !');
define('NEW_ALBUM', 'Novi album');
define('CONFIRM_DELETE1', 'Da li ste sigurni da želite izbrisati ovaj album ?');
define('CONFIRM_DELETE2', '\\Sve slike i komentari koji su tu bice izbrisani !');
define('SELECT_FIRST', 'Prvo izaberite album');
define('ALB_MRG', 'Organizacija albuma');
define('MY_GALLERY', '* Moja galerija *');
define('NO_CATEGORY', '* Nema kategorija *');
define('DELETE', 'Izbriši');
define('NEW', 'Novo');
define('APPLY_MODIFS', 'Napravi promjene');
define('SELECT_CATEGORY', 'Izaberi kategoriju');

// lang_catmgr_php
define('MISS_PARAM', 'Parametri obavezni za \'%s\'komanda nije izvršena !');
define('UNKNOWN_CAT', 'Izabrana kategorija ne postoji u bazi podataka');
define('USERGAL_CAT_RO', 'Korišniška kategorija ne može biti izbrisana !');
define('MANAGE_CAT', 'Organizuj kategorije');
define('CONFIRM_DELETE_CAT', 'Da li ste sigurni da želite IZBRISATI ovu kategoriju');
//define('CATEGORY', 'Kategorija');
define('OPERATIONS', 'Operacije');
define('MOVE_INTO', 'Pomjeri u');
define('UPDATE_CREATE', 'Osvježi/Napravi kategoriju');
define('PARENT_CAT', 'Osnovna kategorija');
define('CAT_TITLE', 'Naziv kategorije');
define('CAT_DESC', 'Opis kategorije');

// lang_config_php
define('CONFIG_TITLE', 'Konfiguracija');
define('RESTORE_CFG', 'Vrati na pocetne postave');
define('SAVE_CFG', 'Spremi novi postav');
define('NOTES', 'Bilješke');
//define('INFO', 'Informacija');
define('UPD_SUCCESS', 'Konfiguracija je spremljena');
define('RESTORE_SUCCESS', 'Galerija je vracena na normalne postave');
define('NAME_A', 'Ime A-Z');
define('NAME_D', 'Ime Z-A');
define('TITLE_A', 'Naslov novije');
define('TITLE_D', 'Naslov starije');
define('DATE_A', 'Datum novije');
define('DATE_D', 'Datum starije');
define('RATING_A', 'Rangiranje vece');
define('RATING_D', 'Rangiranje manje');
define('TH_ANY', 'Max Aspekata');
define('TH_HT', 'Velicina');
define('TH_WD', 'Dužina');


// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Potrebno je da upišete svoje ime i komentar');
define('COM_ADDED', 'Komentar dodan');
define('ALB_NEED_TITLE', 'Morate upisati naziv za album !');
define('NO_UDP_NEEDED', 'Nije potrebno osvježavanje.');
define('ALB_UPDATED', 'Album osvježen');
define('UNKNOWN_ALBUM', 'Izabrani album ne postoji ili nemate dozvolu za upload u ovaj album');
define('NO_PIC_UPLOADED', 'Slika nije dodana !<br /><br />Ako ste zaista izabrali sliku za upload, onda je tenutna greška...');
define('ERR_MKDIR', 'Nije moguce napraviti direktorij %s !');
define('DEST_DIR_RO', 'Destinacija direktorija %s nije writable u skripti !');
define('ERR_MOVE', 'Nije moguce pomjeriti %s u %s !');
define('ERR_FSIZE_TOO_LARGE', 'Dimenzije slike koju uploadate je prevelika (maksimalno dozvoljeno je %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Velicina koju uploadate je prevelika (maksimalno dozvoljeno je %s KB) !');
define('ERR_INVALID_IMG', 'Datoteka koju uploadate nije dozvoljeni format slike !');
define('ALLOWED_IMG_TYPES', 'Možete uploadati samo %s slika.');
define('ERR_INSERT_PIC', 'Slika \'%s\' (ne)može biti ubacena u album ');
define('UPLOAD_SUCCESS', 'Vaša slika je uploadana uspješno<br /><br />Slika ce biti vidljiva nakon administratove dozvole.');
//define('INFO', 'Informacija');
define('ERR_COMMENT_EMPTY', 'Vaš komentar je prazan !');
define('ERR_INVALID_FEXT', 'Samo datoteke sa sljedecim ekstenzijama su prihvatljive : <br /><br />%s.');
define('NO_FLOOD', 'Žao nam je vi ste vec autor posljednjeg komentara upisanog za ovu sliku<br /><br />Prepravite komentar koji ste poslali ako želite promijeniti komentar o slici');
define('REDIRECT_MSG', 'Bicete prebaceni automatski.<br /><br /><br />Klinki \'CONTINUE\' ako se stranica ne osvježi automatski');
define('UPL_SUCCESS', 'Slika uspješno dodana');

// lang_delete_php
define('CAPTION', 'Naziv');
define('FS_PIC', 'puna velicina slike');
define('DEL_SUCCESS', 'uspješno');
define('NS_PIC', 'normalna velicina slike');
define('ERR_DEL', 'nemože biti izbrisano');
define('THUMB_PIC', 'slicica');
//define('COMMENT', 'komentar');
define('IM_IN_ALB', 'slika u albumu');
define('ALB_DEL_SUCCESS', 'Album \'%s\' izbrisan');
define('ALB_MGR', 'Organizator albuma');
define('ERR_INVALID_DATA', 'Neispravni podaci primljenji u \'%s\'');
define('CREATE_ALB', 'Kreiranje albuma \'%s\'');
define('UPDATE_ALB', 'Osvježavanje albuma \'%s\' sa malo \'%s\' i index \'%s\'');
define('DEL_PIC', 'Izbriši sliku');
define('DEL_ALB', 'Izbriši album');
define('DEL_USER', 'Izbriši korisnika');
//define('ERR_UNKNOWN_USER', 'Izabrani korisnik ne postoji !');
define('COMMENT_DELETED', 'komentar uspješno izbrisan');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'Da li sigurno želite IZBRISATI ovu sliku ? \\Komentari ce takode biti izbrisani.');
define('DEL_THIS_PIC', 'Izbriši ovu sliku');
define('SIZE', '%s x %s pixela');
define('VIEWS', '%s puta');
define('SLIDESHOW', 'Prezentacija');
define('STOP_SLIDESHOW', 'ZAUSTAVI SLIDESHOW');
define('VIEW_FS', 'Klikni da vidiš u punoj velièini');
define('EDIT_PIC', 'Uredi podatke slike');

// lang_picinfo
define('PIC_INF_TITLE', 'Informacije o slici');
define('PIC_INF_FILENAME', 'Ime datoteke');
define('ALBUM NAME', 'Ime albuma');
define('PIC_INFO_RATING', 'Ocjena (%s glasova)');
define('KEYWORDS', 'Kljucne rijeci');
define('PIC_INF_FILE SIZE', 'Velicina datoteke');
define('PIC_INF_DIMENSIONS', 'Dimenzije');
define('DISPLAYED', 'Prikazano');
define('CAMERA', 'Kamera');
define('DATE TAKEN', 'Datum uzimanja');
define('APERTURE', 'Otvor');
define('EXPOSURE TIME', 'Vrijeme izlaganja');
define('FOCAL LENGTH', 'Odstojanje od centra');
define('COMMENT', 'Komentar');
define('ADDFAV', 'Dodaj u Najdraže');
define('ADDFAVPHRASE', 'Najdraže');
define('REMFAV', 'Obriši iz Najdražih');
define('IPTCTITLE', 'IPTC Naslov');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Kljucne Rijeci');
define('IPTCCATEGORY', 'IPTC Kategorija');
define('IPTCSUBCATEGORIES', 'IPTC Podkategorija');
define('BOOKMARK_PAGE', 'Bookmark Sliku');
define('REMOVEFAV', 'Obrisano iz Albuma Najdražih');
define('ADDEDTOFAV', 'Dodanu u Album Najdražih');

// lang_display_comments
define('OK', 'Uredu');
define('COM_EDIT_TITLE', 'Prepravi ovaj komentar');
define('CONFIRM_DELETE_COM', 'Sigurni ste da želite izbrisati ovaj komentar ?');
define('ADD_YOUR_COMMENT', 'Dodajte svoj komentar');
define('COM_NAME', 'Ime');
//define('COMMENT', 'Komentar');
define('YOUR_NAME', 'Vaše ime');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Klikni na sliku da bi ste zatvorili ovaj prozor');

// lang_ecard_php
define('E_TITLE', 'Pošalji e-card');
define('INVALID_EMAIL', '<b>Ops</b> : neispravna email adresa !');
define('E_ECARD_TITLE', 'Razglednica od %s za tebe');
define('VIEW_ECARD', 'Ako razglednica nije prikazana ispravno, kliknite na ovaj link');
define('VIEW_MORE_PICS', 'Kliknite na ovaj link da vidite više slika !');
define('SEND_SUCCESS', 'Vaša razglednica je poslana');
define('SEND_FAILED', 'Žao nam je, ali server ne može poslati vašu razglednicu...');
define('FROM', 'Od');
define('_YOUR_NAME', 'Vaše ime');
define('YOUR_EMAIL', 'Vaša email adresa');
define('TO', 'Za');
define('RCPT_NAME', 'Ime primatelja');
define('RCPT_EMAIL', 'Email adresa primatelja');
define('GREETINGS', 'Naslov');
define('MESSAGE', 'Poruka');
define('ECARD_LINK_CORRUPT', 'Izvinjavamo se ali e-card podatak je oštecen od strane vašeg mail klienta, pokušaj te zalijepiti link (paste) u browser'); //NEW

// lang_editpics_php
define('PIC_INFO', 'Slika&nbsp;info');
define('ALBUM', 'Album');
define('EDIT_TITLE', 'Naslov');
define('DESC', 'Opis');
//define('KEYWORDS', 'Kljucne rijeci');
define('PIC_INFO_STR', '%sx%s - %sKB - %s pregleda - %s glasova');
define('APPROVE', 'Odobri sliku');
define('POSTPONE_APP', 'Odgodi odobrenje');
//define('DEL_PIC', 'Izbriši sliku');
define('READ_EXIF', 'Procitaj EXIF info ponovo');
define('RESET_VIEW_COUNT', 'Resetuj brojac pregleda');
define('RESET_VOTES', 'Resetuj glasove');
define('DEL_COMM', 'Izbriši komentare');
define('UPL_APPROVAL', 'Odobri upload');
define('EDIT_PICS', 'Prepravi slike');
define('SEE_NEXT', 'Pogledaj sljedece slike');
define('SEE_PREV', 'Pogledaj prethodne slike');
define('N_PIC', '%s slike');
define('N_OF_PIC_TO_DISP', 'Broj slika za prikazivanje');
define('APPLY', 'Napravi promjene');

// lang_groupmgr_php
define('GROUP_NAME', 'Naziv grupe');
define('DISK_QUOTA', 'Kvota diska');
define('CAN_RATE', 'Može ocijeniti sliku');
define('CAN_SEND_ECARDS', 'Može poslati razglednicu');
define('CAN_POST_COM', 'Može komentirati');
define('CAN_UPLOAD', 'Može uploadati sliku');
define('CAN_HAVE_GALLERY', 'Može imati licnu galeriju');
//define('APPLY', 'Napravi promjene');
define('CREATE_NEW_GROUP', 'Kreiraj novu grupu');
define('DEL_GROUPS', 'Izbriši izabrane grupe');
define('CONFIRM_DEL', 'Upozorenje, kada izbrišeš grupu, korisnici koji pripadaju toj grupi bice prebaceni u \'Registrovani\' grupu !\\n\\nDa li želiš nastaviti ?');
define('GROUP_TITLE', 'Organizuj korisnicke grupe');
define('APPROVAL_1', 'Jav. Upl. odobravac (1)');
define('APPROVAL_2', 'Priv. Upl. odobravac (2)');
define('NOTE1', '<b>(1)</b> Za upload u javni album potrebna dozvola administratora');
define('NOTE2', '<b>(2)</b> Za upload u album koji pripada korisniku potrebna dozvola administratora');
//define('NOTES', 'Napomena');

// lang_index_php
define('WELCOME', 'Dobro došli !');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'Da li ste sigurni da želite IZBRISATI ovaj album ? \\nSve slike i komentari ce takode biti izbrisani.');
//define('DELETE', 'IZBRIŠI');
define('MODIFY', 'KARAKTERISTIKE');
//define('EDIT_PICS', 'PREPRAVKA');

// lang_list_categories
define('HOME', _HOME);
define('STAT1', '<b>[pictures]</b> slika u <b>[albums]</b> albuma i <b>[cat]</b> kategorija sa <b>[comments]</b> komentara pogledani <b>[views]</b> puta');
define('STAT2', '<b>[pictures]</b> slika u <b>[albums]</b> albumi pregledani <b>[views]</b> puta');
define('XX_S_GALLERY', '%s\'s Galerija');
define('STAT3', '<b>[pictures]</b> slika u <b>[albums]</b> albuma sa <b>[comments]</b> komentara pogledano <b>[views]</b> puta');

// lang_list_users
define('USER_LIST', 'Lista korisnika');
define('NO_USER_GAL', 'Nema korisnickih galerija');
define('N_ALBUMS', '%s album(a)');
define('N_PICS', '%s slika');

// lang_list_albums
define('N_PICTURES', '%s slika');
define('LAST_ADDED', ', zadnja dodana %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Osvježi album %s');
define('GENERAL_SETTINGS', 'Osnovno štimanje');
define('ALB_TITLE', 'Naziv albuma');
define('ALB_CAT', 'Kategorija albuma');
define('ALB_DESC', 'Opis albuma');
define('ALB_THUMB', 'Slicice albuma');
define('ALB_PERM', 'Dozvole za ovaj album');
define('CAN_VIEW', 'Album može biti vidljiv');
define('MOD_CAN_UPLOAD', 'Posjetioci mogu uploadat slike');
define('CAN_POST_COMMENTS', 'Posjetioci mogu pisati komentare');
define('MOD_CAN_RATE', 'Posjetioci mogu ocijenjivati slike');
define('USER_GAL', 'Korisnikova galerija');
define('NO_CAT', '* Nema kategorije *');
define('ALB_EMPTY', 'Album je prazan');
define('LAST_UPLOADED', 'Zadnje uploadano');
define('PUBLIC_ALB', 'Svi (javni album)');
define('ME_ONLY', 'Samo ja');
define('OWNER_ONLY', 'Vlasnik albuma (%s) samo');
define('GROUPP_ONLY', 'Clanovi \'%s\' groupe');
define('ERR_NO_ALB_TO_MODIFY', 'U bazi podataka nema albuma koji možete prepraviti.');
define('UPDATE', 'Osvježi album');

// lang_rate_pic_php
define('ALREADY_RATED', 'Žao mi je vec ste ocijenili ovu sliku');
define('RATE_OK', 'Glas upisan');

// lang_register_php
define('USERNAME', 'Korisnicko ime');
define('X_S_PROFILE', '%s\'s profil');
define('GROUP', 'Grupa');
define('DISK_USAGE', 'Iskorištenost disk prostora');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Procitajte komentare');
define('NO_COMMENT', 'Nema komentara za citanje');
define('N_COMM_DEL', '%s komentari su izbrisani');
define('N_COMM_DISP', 'Broj komentara za prikaz');
define('R_SEE_PREV', 'Pogledaj prethodno');
define('R_SEE_NEXT', 'Pogledaj sljedece');
define('R_DEL_COMM', 'Izbriši izabrane komentare');

// lang_search_php
define('S_SEARCH', 'Pretražite kolekciju slika');

// lang_search_new_php
define('PAGE_TITLE', 'Pretraga novih slika');
define('SELECT_DIR', 'Izaberi direktorij');
define('SELECT_DIR_MSG', 'Ova funkcija dozvoljava vam da napravite put do slike koju imate na svom server.<br /><br />Izaberite direktorij gdje ste uploadali svoje slike');
define('NO_PIC_TO_ADD', 'Nema slike za dodati');
define('NEED_ONE_ALBUM', 'Morate imati najmanje jedan album da bi koristili ovu funkciju');
define('WARNING', 'Upozorenje');
define('CHANGE_PERM', 'skripta ne može upisivati u ovaj direktorij, morate promijeniti CHMOD na 755 ili 777 prije nego što dodate slike !');
define('TARGET_ALBUM', '<b>Prebaci sliku iz &quot;</b>%s<b>&quot; u </b>%s');
define('FOLDER', 'Folder');
define('IMAGE', 'Slika');
//define('ALBUM', 'Album');
define('RESULT', 'Rezultat');
define('DIR_RO', 'Nije writable. ');
define('DIR_CANT_READ', 'Nije readable. ');
define('INSERT', 'Dodavanje novih slika u galeriju');
define('LIST_NEW_PIC', 'Lista novih slika');
define('INSERT_SELECTED', 'Ubaci izabrane slike');
define('NO_PIC_FOUND', 'Nije pronadena nova slika');
define('BE_PATIENT', 'Molimo budite strpljivi, skripti treba vremena da doda slike');
define('SN_NOTES', '<ul><li><b>OK</b> : znaci da je slika uspješno dodana<li><b>DP</b> : znaci da je slika duplikat i da je vec u bazi podataka<li><b>PB</b> : znaci da sliku nije moguce dodati, provjerite vlastitu konfiguraciju i dozvolu direktorija gdje su slike locirane<li>Ako OK, DP, PB \'signs\' se ne pojave klikni na puknutu sliku da vidiš koju je grešku napravio PHP<li>Ako je sesija istekla, pritisnite refresh</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'Nije selektovano ime albuma, vratite se nazad i selektuj te ima albuma u kome ce te staviti svoju sliku!');

// lang_upload_php
define('UP_TITLE', 'Upload sliku');
define('MAX_FSIZE', 'Maksimalno dozvoljena velicina je %s KB');
//define('ALBUM', 'Album');
define('PICTURE', 'Slika');
define('PIC_TITLE', 'Naslov slike');
define('DESCRIPTION', 'Opis slike');
define('UP_KEYWORDS', 'Kljucne rijeci (odvojiti praznim mjestom)');
define('ERR_NO_ALB_UPLOADABLES', 'Žao nam je ovdje nema albuma gdje bi mogli ubaciti sliku.');

// lang_usermgr_php
define('U_TITLE', 'Organizuj korisnike');
//define('NAME_A', 'Ime ascending');
//define('NAME_D', 'Ime descending');
define('GROUP_A', 'Grupa noviji');
define('GROUP_D', 'Grupa stariji');
define('REG_A', 'Datum registracije noviji');
define('REG_D', 'Datum registracije stariji');
define('PIC_A', 'Broj slika manji');
define('PIC_D', 'Broj slika veci');
define('DISKU_A', 'Iskorištenost diska najmanje');
define('DISKU_D', 'Iskorištenost diska najviše');
define('SORT_BY', 'Poredaj korisnike po');
define('ERR_NO_USERS', 'Korisnicka tabla je prazna !');
define('ERR_EDIT_SELF', 'Ne možete promijeniti svoj profil, koristite \'Moj Profil\' link za to');
define('EDIT', 'PREPRAVI');
//define('DELETE', 'IZBRIÅ I');
define('U_NAME', 'Korisnicko ime');
//define('GROUP', 'Grupa');
define('INACTIVE', 'Neaktivno');
//define('OPERATIONS', 'Operacije');
define('PICTURES', 'Slike');
define('DISK_SPACE', 'Iskorišteno prostora / Kvota');
define('REGISTERED_ON', 'Registrovan');
define('U_USER_ON_P_PAGES', '%d korisnika na %d stranica');
define('USER_CONFIRM_DEL', 'Da li ste sigurni da želite OBRISATI korisnika ? \\nSve njegove slike i albumi ce biti izbrisani.');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'Izabrani korisnik ne postoji !');
define('MODIFY_USER', 'Modificiraj korisnika');
//define('NOTES', 'Napomena');
define('NOTE_LIST', '<li>Ako ne želite da promijenite trenutnu šifru, ostavite \"šifra\" polje prazno');
define('PASSWORD', 'Šifra');
define('USER_ACTIVE', 'Korisnik je aktivan');
define('USER_GROUP', 'Grupa');
define('USER_EMAIL', 'Email');
define('USER_WEB_SITE', 'Web stranica');
define('CREATE_NEW_USER', 'Kreiraj novog korisnika');
define('USER_LOCATION', 'Lokacija');
define('USER_INTERESTS', 'Interesi');
define('USER_OCC', 'Zanimanje');

// lang_util_php
define('UTIL_TITLE', 'Promjeni velicinu slike');
define('WHAT_IT_DOES', 'Šta ono radi');
define('WHAT_UPDATE_TITLES', 'Dodaj naslov iz imena fajla');
define('WHAT_DELETE_TITLE', 'Obriši neaslov');
define('WHAT_REBUILD', 'Obnavlja tumbale i mjenja velicinu slike');
define('WHAT_DELETE_ORIGINALS', 'Briše priginalnu velicinu slike, i zamjenjuje je sa istom slikom samo promjenjene velicine');
define('U_FILE', 'Fajl');
define('TITLE_SET_TO', 'naslov postavi na');
define('SUBMIT_FORM', 'dodaj');
define('UPDATED_SUCCESFULLY', 'dodavanje uspješno');
define('ERROR_CREATE', 'Pravljenje GREŠKE');
define('CONTIN', 'Proslijedi više slika');
define('MAIN_SUCCESS', 'Fajl %s je uspješno korišten kao glavna slika');
define('ERROR_RENAME', 'Greška u mjenjanju imena %s u %s');
define('ERROR_NOT_FOUND', 'Fajl %s nije pronaden');
define('U_BACK', 'nazad u izbornik');
define('THUMBS_WAIT', 'Dodajem tubale i/ili mjenjam velicinu slike, strpite se malo...');
define('THUMBS_CONTINUE_WAIT', 'Dodajem tubale i/ili mjenjam velicinu slike, strpite se malo...');
define('TITLES_WAIT', 'Dodajem naslov, strpite se malo...');
define('DELETE_WAIT', 'Brišem naslov, strpite se malo...');
define('REPLACE_WAIT', 'Brišem originale i zamjenjujem ih sa manjim kopijama, strpite se malo..');
define('INSTRUCTION', 'Brze instrukcije');
define('INSTRUCTION_ACTION', 'Doznaci akciju');
define('INSTRUCTION_PARAMETER', 'Postavi parametre');
define('INSTRUCTION_ALBUM', 'Doznaci album');
define('INSTRUCTION_PRESS', 'Pritisni %s');
define('U_UPDATE', 'Dodaj tumbale ili slike,');
define('UPDATE_WHAT', 'Šta ce biti dodano?');
define('UPDATE_THUMB', 'Samo tumbal');
define('UPDATE_PIC', 'Samo smanjene kopije originala');
define('UPDATE_BOTH', 'I tumbali i kopije originala');
define('UPDATE_NUMBER', 'Broj poroslijedenih slika po kliku');
define('UPDATE_OPTION', '(Probaj te smanjti broj slika ako imate problema sa vremenom dodavanja)');
define('FILENAME_TITLE', 'Ime fajla &rArr; Naslov slike');
define('FILENAME_HOW', 'Kako bi fajl trebao biti ureden');
define('FILENAME_REMOVE', 'Izbaci .jpg exstenziju a ubaci _ sa razmacima');
define('FILENAME_EURO', 'Zamjeni 2005_11_23_13_20_20.jpg u 23/11/2003 13:20');
define('FILENAME_US', 'Zamjeni 2005_11_23_13_20_20.jpg u 11/23/2003 13:20');
define('FILENAME_TIME', 'Zamjeni 2005_11_23_13_20_20.jpg u 13:20');
define('UT_DELETE', 'Obiši naslove slika ili originalne slike');
define('DELETE_TITLE', 'Obriši naslove slika');
define('DELETE_ORIGINAL', 'Obriši originalne slike');
define('DELETE_REPLACE', 'Obriši originalne slike i zamjeni ih sa smanjenim kopijama');
//define('SELECT_ALBUM', 'Select album');

// lang_pagetitle_php
define('VIEWING', 'Pogledaj Sliku');
define('USR', ' privatna Galerija');
define('PHOTOGALLERY', 'Galerija');
$lang_usermgr_php = array(
	'name_a' => 'Ime A-Z',
	'name_d' => 'Ime Z-A',
	'group_a' => 'Grupa noviji-stariji',
	'group_d' => 'Grupa stariji-noviji',
	'reg_a' => 'Datum registracije noviji-stariji',
	'reg_d' => 'Datum registracije stariji-noviji',
	'pic_a' => 'Broj slika novije-starije',
	'pic_d' => 'Broj slika starije-novije',
	'disku_a' => 'Iskorištenost diska ',
	'disku_d' => 'Iskorištenost diska manja-vecoj',
	);
$lang_byte_units = array('Bytes','KB','MB',);
// Day of weeks and months
$lang_day_of_week = array('nedjelja','ponedjeljak','utorak','srijeda','cetvrtak','petak','Sub',);
$lang_month = array('jan','feb','mar','apr','maj','jun','jul','avg','sep','okt','nov','dec',);
$lang_meta_album_names = array(
	'random' => 'Slucajan slika',
	'lastup' => 'Posljednje dodano',
	'lastupby' => 'Moji poslijednji dodaci', // new 1.2.2
	'lastalb' => 'Poslijednji dodani albumi',
	'lastcom' => 'Posljedni komentari',
	'lastcomby' => 'Moji poslijenji komentari', // new 1.2.2
	'topn' => 'Najgledanije',
	'toprated' => 'Visoko rangirano',
	'lasthits' => 'Posljednje pogledano',
	'search' => 'Rezultati pretrage',
	'favpics' => 'Drage slike',
	);
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array(
	'title' => 'Konfiguracija',
	'restore_cfg' => 'Vrati na pocetne postave',
	'save_cfg' => 'Zapiši nove postave',
	'notes' => 'Bilješke',
	'info' => 'Informacija',
	'upd_success' => 'Konfiguracija galerije je dodana!',
	'restore_success' => 'Konfiguracija galerije je vracena na pocetnu!',
	'name_a' => 'Ime A-Z',
	'name_d' => 'Ime Z-A',
	'title_a' => 'Naslov A-Z',
	'title_d' => 'Naslov Z-A',
	'date_a' => 'Datum noviji-stariji',
	'date_d' => 'Datum stariji-noviji',
	'rating_a' => 'Ocjenjivanje najvece-najmanje', // new in cpg1.2.0nuke
	'rating_d' => 'Ocjenjivanje najmanje-najvece', // new in cpg1.2.0nuke
	'th_any' => 'Max Aspekata',
	'th_ht' => 'Širina',
	'th_wd' => 'Visina',
	);
// start left side interpretation
$lang_config_data = array(
    // 'General settings',
	'Osnovno podešavanje',
	array('Naziv galerije', 'gallery_name', 0),
	array('Opis galerije', 'gallery_description', 0),
	array('Email administratora galerije', 'gallery_admin_email', 0),
	array('Adresa za glavnu stranicu je oikc.org', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
	array('Tema', 'theme', 6),
	array('Specificni naslov stranice od >Galerije', 'nice_titles', 1),
//'Album list view',
	'Lista pregleda albuma',
	array('Širina glavne tabele (pikseli ili %)', 'main_table_width', 0),
	array('Broj levela kategorija za prikaz', 'subcat_level', 0),
	array('Broj albuma za prikaz', 'albums_per_page', 0),
	array('Broj kolona za listu albuma', 'album_list_cols', 0),
	array('Velicina slicice u pikselima', 'alb_list_thumb_size', 0),
	array('Sadržaj naslovne stranice', 'main_page_layout', 0),
	array('Pokaži prvu kategoriju tumbala u albumu', 'first_level', 1),
//'Thumbnail view',
	'Pregled tumbala',
	array('Broj redova u tumbal stranici ', 'thumbcols', 0),
	array('Broj kolona u tumbal stranici', 'thumbrows', 0),
	array('Max broj razmaka za prikazati', 'max_tabs', 0),
	array('Prikaži opis slike (kao dodatak naslou) pokraj tumbala', 'caption_in_thumbview', 1),
	array('Prikaz broja komentara pokraj tumbala', 'display_comment_count', 1),
	array('Standardno sortiranje slika', 'default_sort_order', 3),
	array('Minimalan broj glasova za sliku da bi se prikazala u \'top-rated\' listi', 'min_votes_for_rating', 0),
	array('Prikaži Naslovne tagove umjesto informacije slika', 'seo_alts', 1), // new in cpg1.2.0nuke
 //'Display Image &amp; Comment settings',
	'Pregled slika &amp; Postavi Komentara',
	array('Širina tabele za prikaz slike (pixela ili %)', 'picture_table_width', 0),
	array('Informacije slike u vidljive u normalnom obliku', 'display_pic_info', 1),
	array('Filtriraj ružne rijeci u komentarima', 'filter_bad_words', 1),
	array('Dozvoli smješke u komentarima', 'enable_smilies', 1),
	array('Dozvoli više komentara od istog korisnika', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
	array('Email stranicu adminu nakon slanja novog komentara' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
	array('Max težina opisa slike', 'max_img_desc_length', 0),
	array('Max broj karaktera u opisu', 'max_com_wlength', 0),
	array('Max broj linija u komentaru', 'max_com_lines', 0),
	array('Maximum težina komentara', 'max_com_size', 0),
	array('Prikaži kao negativ Filma', 'display_film_strip', 1),
	array('Broj slika po jednoj stranici u negativu filma', 'max_film_strip_items', 0),
	array('Dozvoli pregled pune velicine slike neregistrovanim korisnicima', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
	array('Broj dana izmedu mogucih davanja glasova za istu sliku','keep_votes_time',0), // new in cpg1.2.2c nuke
	array('Prikaži punu velicinu slike u Prezentaciji','fullsize_slideshow',1),
	array('Prikaži blok sa desne strane prikazne slike, ako je desni blok na razini modula?', 'right_blocks', 1), // new 1.2.2
// 'Pictures and thumbnails settings',
	'Postavi Slika i Tumbala',
	array('Kvalitet JPEG fajlova', 'jpeg_qual', 0),
	array('Postavi vodeni žig na slikama', 'watermark', 1),
	array('Max dimenzije tumbala <b>*</b>', 'thumb_width', 0),
	array('Use dimenzije ( širina, visina ili Max aspekt tumbala )<b>*</b>', 'thumb_use', 7),
	array('Napravi medu-slike', 'make_intermediate', 1),
	array('Max širina i visina medu-slike <b>*</b>', 'picture_width', 0),
	array('Max težina slike za upload (KB)', 'max_upl_size', 0),
	array('Max širina ili visina slike za upload (pixela)', 'max_upl_width_height', 0),
	array('Odobri dodavanje višestrukih slika sa istim imenima', 'samename', 1),
//'User settings',
	'Korisnicki Postavi',
	array('Allow new user registrations', 'allow_user_registration', 1),
/*
	array('User registration requires email verification', 'reg_requires_valid_email', 1),
	array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),
*/
	array('Korisnici mogu imati Privatne albume', 'allow_private_albums', 1),
	array('Prikaži korisnikov avtar u njegovom privatnom Albumu', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',
	'Polja za opis slike',
	array('Polje 1 ime', 'user_field1_name', 0),
	array('Polje 2 ime', 'user_field2_name', 0),
	array('Polje 3 ime', 'user_field3_name', 0),
	array('Polje 4 ime', 'user_field4_name', 0),
	//'Pictures and thumbnails advanced settings',
	'Napredni postavi Slika i Tumbala',
	array('Prikuži Privatne albume neulogovanim korisnicima', 'show_private', 1),
	array('Karakteri zabranjeni u nazivima slika', 'forbiden_fname_char', 0),
	array('Exstenzije koje korisnici mogu da uploaduju u galeriju (npr .jpg ili .gif)', 'allowed_file_extensions', 0),
	array('Metoda mjenjanja velicine slike', 'thumb_method', 2),
	array('Put do ImageMagick / netpbm \'convert\' korisnosti (example /usr/bin/X11/)', 'impath', 0),
	array('Dozvoljeni tipovi slika (prihvatljive samo za ImageMagick)', 'allowed_img_types', 0),
	array('Komandna linika za ImageMagick', 'im_options', 0),
	array('Citaj EXIF podatk za JPEG fajlove', 'read_exif_data', 1),
	array('Citaj IPTC podatk za JPEG fajlove', 'read_iptc_data', 1), // new in cpg1.2.0nuke
	array('Direktorij albuma <b>*</b>', 'fullpath', 0),
	array('Direkotij za korisnicke slike <b>*</b>', 'userpics', 0),
	array('Prefix medu-slika <b>*</b>', 'normal_pfx', 0),
	array('Prefix za tumbale <b>*</b>', 'thumb_pfx', 0),
	array('Info slike prikazno ime', 'picinfo_display_filename', '1'), // new in cpg1.2.0nuke
	array('Info albuma prikazno ime', 'picinfo_display_album_name', '1'), // new in cpg1.2.0nuke
	array('Info slike prikaz težine', 'picinfo_display_file_size', '1'), // new in cpg1.2.0nuke
	array('Info slike prikaz dimenzija', 'picinfo_display_dimensions', '1'), // new in cpg1.2.0nuke
	array('Info slike prikaži redni broj slike', 'picinfo_display_count_displayed', '1'), // new in cpg1.2.0nuke
	array('Info slike prikaži URL', 'picinfo_display_URL', '1'), // new in cpg1.2.0nuke
	array('Info slike prikaži URL kao bookmark link', 'picinfo_display_URL_bookmark', '1'), // new in cpg1.2.0nuke
	array('Info slike prikaži link za najdražu sliku', 'picinfo_display_favorites', '1'), // new in cpg1.2.0nuke
//    'Cookies &amp; Charset settings',
	'Cookies &amp; Postavi',
	array('Ime cookie korišteno od skripte', 'cookie_name', 0),
	array('Direktorij cookie-sa od skripte', 'cookie_path', 0),
//    'Miscellaneous settings',
	'Miscellaneous settings',
	array('Omoguci debag mod', 'debug_mode', 1),
	'<br /><div align="center">(*) Polja oznacena sa * moraju biti promjenjena ako vec imate slika u svojoj galeriji!</div><br />'
	);
	// end left side interpretation
