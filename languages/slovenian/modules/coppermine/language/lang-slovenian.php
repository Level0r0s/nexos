<?php
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
define('YES', 'Da');
define('NO', 'Ne');
define('BACK', 'NAZAJ');
define('CONTINUE', 'NAPREJ');
define('INFO', 'Informacija');
define('ERROR', 'Napaka');
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
define('SEARCH_LNK', 'Iskanje');
define('FAV_LNK', 'Moji favoriti');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

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
define('MY_PROF_LNK', 'Moj profil');

// lang_cat_list
define('CATEGORY', 'Kategorija');
define('ALBUMS', 'Albumi');
define('PICTURES', 'Slike');

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
define('RATING', 'RATING');
define('SORT_TITLE', 'Sort pictures by:');

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
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

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
define('INFORMATION', 'Informacija');
define('ERROR', 'Napaka');
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

// lang_smilies_inc_php
define('EXCLAMATION', 'Vzklik');
define('QUESTION', 'Vpraanje');
define('VERY HAPPY', 'Zelo srečen');
define('SMILE', 'Smeko');
define('SAD', 'alosten');
define('SURPRISED', 'Presenečen');
define('SHOCKED', 'V oku');
define('CONFUSED', 'Zmeden');
define('COOL', 'Hladen');
define('LAUGHING', 'Nasmejan');
define('MAD', 'Nor');
define('RAZZ', 'Nagajiv');
define('EMBARASSED', 'Embarassed');
define('CRYING OR VERY SAD', 'Jokajoč ali alosten');
define('EVIL OR VERY MAD', 'Vraji ali zloben');
define('TWISTED EVIL', 'Slepar');
define('ROLLING EYES', 'Kotaleče oči');
define('WINK', 'Meikanje');
define('IDEA', 'Ideja');
define('ARROW', 'Pučica');
define('NEUTRAL', 'Nevtralen');
define('MR. GREEN', 'Gospod zelenko');

// lang_admin_php
define('LV_ADMIN', 'Zapučam administracijo...');
define('ENT_ADMIN', 'Vstop v administracijo...');

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
define('CONFIRM_DELETE', 'Res eli pobrisati to kategorijo');
define('CATEGORY', 'Kategorija');
define('OPERATIONS', 'Operacija');
define('MOVE_INTO', 'Premakni v');
define('UPDATE_CREATE', 'Posodobi/ustvari kategorijo');
define('PARENT_CAT', 'Nadrejena kategorija');
define('CAT_TITLE', 'Ime kategorije');
define('CAT_DESC', 'Opis kategorije');

// lang_config_php
define('TITLE', 'Nastavitve');
define('RESTORE_CFG', 'Povrni osnovne nastavitve');
define('SAVE_CFG', 'Shrani nove nastavitve');
define('NOTES', 'Opombe');
define('INFO', 'Informacija');
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
define('TH_HT', 'Height');
define('TH_WD', 'Width');

// lang_config_data
define('CONFIG_GENSET', 'Osnovne nastavitve');
define('GALLERY_NAME', 'Ime galerije');
define('GALLERY_DESCRIPTION', 'Opis galerije');
define('GALLERY_ADMIN_EMAIL', 'Administratorjev e-mail');
define('ECARDS_MORE_PIC_TARGET', 'Address to nuke folder ie http://www.mysite.tld/html');
define('LANG', 'Jezik');
define('CPGTHEME', 'Tema');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'Seznam albumov');
define('MAIN_TABLE_WIDTH', 'irina glavne tabele (pixli ali %)');
define('SUBCAT_LEVEL', 'tevilo nivojev za prikaz kategorij');
define('ALBUMS_PER_PAGE', 'tevilo albumov na strani');
define('ALBUM_LIST_COLS', 'tevilo kolon za prikaz albumov');
define('ALB_LIST_THUMB_SIZE', 'Velikost ikon v pixlih');
define('MAIN_PAGE_LAYOUT', 'Vsebina na glavni strani');
define('FIRST_LEVEL', 'Prikaz ikon albumov za prvi nivo kategorij');
define('THUMB_VIEW_TITLE', 'Prikaz ikon');
define('THUMBCOLS', 'tevilo kolon na strani z ikonami');
define('THUMBROWS', 'tevilo vrstic na strani z ikonami');
define('MAX_TABS', 'Max. t. tabulatorjev');
define('CAPTION_IN_THUMBVIEW', 'Prikai opis slike (zraven imena) pod ikono');
define('DISPLAY_COMMENT_COUNT', 'Prikai tevilo komentarjev pod ikono');
define('DEFAULT_SORT_ORDER', 'Privzeto sortiranje slik');
define('MIN_VOTES_FOR_RATING', 'Minimalno tevilo ocen za sliko, da se uvrsti na seznam \'naj-ocene\' ');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'Prikaz slik &amp; nastavitve za komentarje');
define('PICTURE_TABLE_WIDTH', 'irina tabele za prikaz slik (pixli ali %)');
define('DISPLAY_PIC_INFO', 'Informacija o sliki je privzeto vidna');
define('FILTER_BAD_WORDS', 'Izloči grde besede v komentarjih');
define('ENABLE_SMILIES', 'Dovoli smekote v komentarjih');
define('DISABLE_FLOOD_PROTECTION', 'Allow several consecutive comments on one pic from the same user');
define('COMMENT_EMAIL_NOTIFICATION', 'Email site admin upon comment submission');
define('MAX_IMG_DESC_LENGTH', 'Max. velikost za opis slike');
define('MAX_COM_WLENGTH', 'Max. tevilo zankov v besedi');
define('MAX_COM_LINES', 'Max. tevilo vrstic komentarja');
define('MAX_COM_SIZE', 'Max. velikost komentarja');
define('DISPLAY_FILM_STRIP', 'Prikai filmski trak z ikonami');
define('MAX_FILM_STRIP_ITEMS', 't. ikon na traku');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', 'Nastavitve slik in ikon');
define('JPEG_QUAL', 'Kvaliteta za JPEG datoteke');
define('THUMB_WIDTH', 'Max. velikost za ikone <b>*</b>');
define('THUMB_USE', 'Velikost uporabi za irino ali viino ali razmerje ikone <b>*</b>');
define('MAKE_INTERMEDIATE', 'Ustvari vmesne slike');
define('PICTURE_WIDTH', 'Max. irina ali viina vmesnih slik <b>*</b>');
define('MAX_UPL_SIZE', 'Max. velikost datotek/slik (kB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Max. irina ali viina dodanih slik (pixli)');
define('USER_SETTING_TITLE', 'Nastavitve uporabnikov');
define('ALLOW_USER_REGISTRATION', 'Dovoli registriranje novih uporabnikov');
define('REG_REQUIRES_VALID_EMAIL', 'Registracija zahteva preverjanje e-mail naslova');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Dva uporabnika lahko imata enak e-mail naslov');
define('ALLOW_PRIVATE_ALBUMS', 'Uporabnik ima lahko privatni album');
define('CUSTOM_FIELDS_TITLE', 'Dodatna polja za vpis informacij o sliki (pusti prazno, če ne uporablja)');
define('USER_FIELD1_NAME', 'Polje 1');
define('USER_FIELD2_NAME', 'Polje 2');
define('USER_FIELD3_NAME', 'Polje 3');
define('USER_FIELD4_NAME', 'Polje 4');
define('PIC_ADV_SETTING_TITLE', 'Dodatne nastavitve za slike in ikone');
define('SHOW_PRIVATE', 'Prikai ikone privatnih albumov neprijavljenim uporabnikom');
define('FORBIDEN_FNAME_CHAR', 'Prepovedani znaki v imenih datotek');
define('ALLOWED_FILE_EXTENSIONS', 'Dovoljene vrste datotek za dodajanje slik');
define('THUMB_METHOD', 'Način kreiranja ikon');
define('IMPATH', 'Pot do ImageMagick/netpbm programa (npr. /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Dovoljene vrste datotek (samo za ImageMagick)');
define('IM_OPTIONS', 'Opcija za ukazno vrstico od ImageMagick');
define('READ_EXIF_DATA', 'Prikai EXIF podatke v JPEG datotekah');
define('READ_IPTC_DATA', 'Prikai IPTC podatke v JPEG datotekah');
define('FULLPATH', 'Direktorij za albume <b>*</b>');
define('USERPICS', 'Direktorij za slike od uporabnikov <b>*</b>');
define('NORMAL_PFX', 'Predpona za vmesne slike <b>*</b>');
define('THUMB_PFX', 'Predpona za ikone <b>*</b>');
define('DEFAULT_DIR_MODE', 'Privzete pravice za direktorije');
define('DEFAULT_FILE_MODE', 'Privzete pravice za slike');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', 'Pikotki in kodne tabele');
define('COOKIE_NAME', 'Ime za pikotke, ki jih uporablja galerija');
define('COOKIE_PATH', 'Pot do pikotkov');
define('CHAR_SET', 'Kodiranje strani');
define('MISC_SETTING_TITLE', 'Ostale nastavitve');
define('DEBUG_MODE', 'Vključi način za odkrivanje napak');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) Polja označena z * se ne smejo spreminjati, če so v galeriji e slike</div><br />');

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
define('INFO', 'Informacija');
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
define('COMMENT', 'komentar');
define('IM_IN_ALB', 'slika v albumu');
define('ALB_DEL_SUCCESS', 'Album \'%s\' pobrisan');
define('ALB_MGR', 'Urejanje albumov');
define('ERR_INVALID_DATA', 'Napačni podatki v \'%s\'');
define('CREATE_ALB', 'Kreiram album \'%s\'');
define('UPDATE_ALB', 'Posodabljam album \'%s\' z naslovom \'%s\' in indeksom \'%s\'');
define('DEL_PIC', 'Pobrii sliko');
define('DEL_ALB', 'Pobrii album');
define('DEL_USER', 'Pobrii uporabnika');
define('ERR_UNKNOWN_USER', 'Izbrani uporabnik ne obstaja!');
define('COMMENT_DELETED', 'Komentar uspeno pobrisan');

// lang_display_image_php
define('CONFIRM_DEL', 'Res eli pobrisati to sliko? \\nTudi komentarji od nje bodo pobrisani.');
define('DEL_PIC', 'POBRII TO SLIKO');
define('SIZE', '%s x %s pixlov');
define('VIEWS', '%s krat');
define('SLIDESHOW', 'Samodejno predvajanje');
define('STOP_SLIDESHOW', 'Ustavi predvajanje');
define('VIEW_FS', 'Klikni za ogled večje slike');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('TITLE', 'Informacija o sliki');
define('FILENAME', 'Ime datoteke');
define('ALBUM NAME', 'Ime albuma');
define('RATING', 'Ocena (t. glasov:%s)');
define('KEYWORDS', 'Ključne besede');
define('FILE SIZE', 'Velikost datoteke');
define('DIMENSIONS', 'Velikost slike');
define('DISPLAYED', 't. ogledov');
define('CAMERA', 'Kamera');
define('DATE TAKEN', 'Datum posnetka');
define('APERTURE', 'Zaslonka');
define('EXPOSURE TIME', 'Čas');
define('FOCAL LENGTH', 'Gorična razdalja');
define('COMMENT', 'Komentar');
define('ADDFAV', 'Dodaj med priljubljene');
define('ADDFAVPHRASE', 'Priljubljene');
define('REMFAV', 'Odstrani iz priljubljenih');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'Uredi komentar');
define('CONFIRM_DELETE', 'Res eli pobrisati komentar?');
define('ADD_YOUR_COMMENT', 'Dodaj komentar');
define('NAME', 'Ime');
define('COMMENT', 'Komentar');
define('YOUR_NAME', 'Anonimne');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Klikni sliko, da zapre to okno');

// lang_ecard_php
define('TITLE', 'Polji e-razglednico');
define('INVALID_EMAIL', '<b>Opozorilo</b>: napačni e-mail naslov!');
define('ECARD_TITLE', 'To je e-razglednica od %s za tebe');
define('VIEW_ECARD', 'Če razglednice ne vidi pravilno, klikni na to povezavo');
define('VIEW_MORE_PICS', 'Klikni tukaj za ogled večih slik!');
define('SEND_SUCCESS', 'Razglednica je bila poslana');
define('SEND_FAILED', 'Oprosti, ampak serven ne omogoča poiljanja razglednic...');
define('FROM', 'Od');
define('YOUR_NAME', 'Tvoje ime');
define('YOUR_EMAIL', 'Tvoj e.mail naslov');
define('TO', 'Za');
define('RCPT_NAME', 'Naslovnikovo ime');
define('RCPT_EMAIL', 'Naslovnikov e-mail naslov');
define('GREETINGS', 'Pozdrav');
define('MESSAGE', 'Sporočilo');

// lang_editpics_php
define('PIC_INFO', 'Informacija o sliki');
define('ALBUM', 'Album');
define('TITLE', 'Naziv');
define('DESC', 'Opis');
define('KEYWORDS', 'Ključne besede');
define('PIC_INFO_STR', '%sx%s - %skB - %s ogledov - %s ocen');
define('APPROVE', 'Odobri sliko');
define('POSTPONE_APP', 'Preloi odobritev');
define('DEL_PIC', 'Pobrii sliko');
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
define('APPLY', 'Izvedi spremembe');
define('CREATE_NEW_GROUP', 'Ustvari novo skupino');
define('DEL_GROUPS', 'Pobrii izbrano skupino');
define('CONFIRM_DEL', 'Opozorilo: pri brisanju skupine se vsi člani prmaknejo v skupino z imenom \'Registered\'!\\n\\neli nadaljevati?');
define('TITLE', 'Urejanje uporabnikih skupin');
define('APPROVAL_1', 'Javne odobritve slik (1)');
define('APPROVAL_2', 'Privatne odobritve slik (2)');
define('NOTE1', '<b>(1)</b> Slike v javnih albumih potrebujejo odobritev za prikaz');
define('NOTE2', '<b>(2)</b> Slike v privatnih albumih potrebujejo odobritev za prikaz');
define('NOTES', 'Notes');

// lang_index_php
define('WELCOME', 'Dobrodoel!');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Res eli pobrisati ta album? \\nVse slike in komentarji bodo pobriani.');
define('DELETE', 'BRISANJE');
define('MODIFY', 'LASTNOSTI');
define('EDIT_PICS', 'UREJANJE');

// lang_list_categories
define('HOME', 'Domov');
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
define('CAN_UPLOAD', 'Obiskovalci lahko dodajajo slike');
define('CAN_POST_COMMENTS', 'Obiskovalci lahko dodajajo komentarje');
define('CAN_RATE', 'Obiskovalci lahko ocenjujejo slike');
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

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'Čeprav bo administrator {SITE_NAME} poskual odstraniti vsako neprimerno vsebino objavljeno v galeriji, je nemogoče hkrati in pravočasno pregledati vse kar je objavljeno s strani obiskovalcev. Zavedati se morate, da vse objavljeno na teh straneh predstavlja pogled in mnenje avtorja in ne administratorja oz. vzdrevalca teh spletnih strani (razen tistega kar je objavljeno z njune strani).<br />
<br />
S sodelovanjem na teh spletnih straneh se tudi strinjate, da ne boste objavljali nobenih obscenih, vulgarnih, aljivih, seksualnih, sovranih, rasno nestrpnih in ostalih vsebin, ki so v nasprotju z veljavno zakonodajo. Strinjate se tudi, da ima aministrator in/ali moderator določenih vsebin na {SITE_NAME} pravico v katerem koli trenutku pravico odstraniti po njegovem mnenju sporni objavljeni prispevek. Kot uporabnik se strinjate, da je z vae strani objavljeno gradivo shranjeno v bazi. Čeprav ti podatki ne bodo posredovani nobeni tretji stranki, administrator oziroma skrbnik teh strani ne odgovarja za izgubljene podatke v primeru hekerskega poskusa kraje podatkov.<br />
<br />
Te spletne strani uporabljajo pikotke (cookies) za shranjevanje informacij na vaem računalniku. Ti podatki so namenjeni isključno temu, da vam olajajo brskanje na teh straneh. Va email naslov pa je uporabljen samo za to, da vam lahko posredujemo geslo za prijavo.<br />
<br />
S klikom na \'STRINJAM SE\' potrjujete, da ste seznanjeni s pogoji sodelovanje na straneh {SITE_NAME}.');

// lang_register_php
define('PAGE_TITLE', 'Registracija');
define('TERM_COND', 'Navodila in pogoji za sodelovanje');
define('I_AGREE', 'STRINJAM SE');
define('SUBMIT', 'Polji registracijo');
define('ERR_USER_EXISTS', 'To uporabniko ime e obstaja, izberi si drugo');
define('ERR_PASSWORD_MISMATCH', 'Gesli se ne ujemata - ponovi vpis');
define('ERR_UNAME_SHORT', 'Uporabniko ime mora imeti vsaj dva znaka');
define('ERR_PASSWORD_SHORT', 'Geslo mora biti dolgo vsaj dva znaka');
define('ERR_UNAME_PASS_DIFF', 'Uporabniko ime in geslo morata biti različna');
define('ERR_INVALID_EMAIL', 'Napačni e-mail naslov!');
define('ERR_DUPLICATE_EMAIL', 'Ta e-mail naslov je nekdo e uporabil');
define('ENTER_INFO', 'Vpis podatkov za registracijo');
define('REQUIRED_INFO', 'Obvezni podatki');
define('OPTIONAL_INFO', 'Neobvezni vpis');
define('USERNAME', 'Uporabniko ime');
define('PASSWORD', 'Geslo');
define('PASSWORD_AGAIN', 'Ponovi geslo');
define('EMAIL', 'e-mail');
define('LOCATION', 'Kraj');
define('INTERESTS', 'Zanimanje');
define('WEBSITE', 'Domača stran');
define('OCCUPATION', 'Zaposlitev');
define('ERROR', 'NAPAKA');
define('CONFIRM_EMAIL_SUBJECT', '%s - registracija potrjena');
define('INFORMATION', 'Informacija');
define('FAILED_SENDING_EMAIL', 'Ne morem poslati e-mail sporočila s podatki o registraciji!');
define('THANK_YOU', 'Hvala za registracijo.<br /><br />Navodila za aktiviranje računa so bila poslana na vpisani e-mail naslov.');
define('ACCT_CREATED', 'Tvoj račun je bil ustvarjen - lahko se prijavi s svojim uporabnikim imenom in geslom');
define('ACCT_ACTIVE', 'Tvoj račun je aktiven in se lahko prijavi');
define('ACCT_ALREADY_ACT', 'Tvoj račun je e aktiven!');
define('ACCT_ACT_FAILED', 'Tega računa ni mono aktivirati!');
define('ERR_UNK_USER', 'Izbrani uporabnik ne obstaja!');
define('X_S_PROFILE', 'Profil od %s');
define('GROUP', 'Skupina');
define('REG_DATE', 'Datum pristopa');
define('DISK_USAGE', 'Velikost diska');
define('CHANGE_PASS', 'Spremeni moje geslo');
define('CURRENT_PASS', 'Staro geslo');
define('NEW_PASS', 'Novo geslo');
define('NEW_PASS_AGAIN', 'Novo geslo ponovno');
define('ERR_CURR_PASS', 'Staro geslo ni pravilno');
define('APPLY_MODIF', 'Izvedi spremembe');
define('UPDATE_SUCCESS', 'Profil je bil posodobljen');
define('PASS_CHG_SUCCESS', 'Geslo je bilo spremenjeno');
define('PASS_CHG_ERROR', 'Geslo ni bilo spremenjeno');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Hvala za registracijo pri: {SITE_NAME}

Tvoje uporabniko ime je: "{USER_NAME}"
Tvoje geslo je: "{PASSWORD}"

Če eli aktivirati svoj račun, mora klikniti na spodnjo povezavo
ali pa jo vpisati v naslovno vrstico brskalnika.

{ACT_LINK}

Lep pozdrav,

administrator od {SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', 'Prikaz komentarjev');
define('NO_COMMENT', 'Ni komentarjev za prikaz');
define('N_COMM_DEL', 't. pobrisanik komentarjev:%s');
define('N_COMM_DISP', 't. komentarjev za prikaz');
define('SEE_PREV', 'Poglej predhodnega');
define('SEE_NEXT', 'Poglej naslednjega');
define('DEL_COMM', 'Pobrii izbrane komentarje');

// lang_search_php
define('SEARCH', 'Iskanje slik');

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
define('ALBUM', 'Album');
define('RESULT', 'Rezultat');
define('DIR_RO', 'Pisanje onemogočeno. ');
define('DIR_CANT_READ', 'Branje onemobočeno. ');
define('INSERT', 'Dodajanje novih slik v galerijo');
define('LIST_NEW_PIC', 'Seznam novih slik');
define('INSERT_SELECTED', 'Dodaj izbrane slike');
define('NO_PIC_FOUND', 'Brez novih slik');
define('BE_PATIENT', 'Potrpeljivost... dodajanje traja nekaj časa');
define('NOTES', '<ul><li><b>OK</b>: pomeni, da so slike uspeno dodane<li><b>DP</b>: pomeni, da je slika duplikat in je e v bazi<li><b>PB</b>: pomeni, da slike ni mono dodati. Preveri nastavitve in pravice za direktorij v katerem se nahajajo<li>Če ne vidi oznak OK, DP ali PB, klikni na manjkajočo slikico za prikaz napake, ki jo generira PHP<li>Za osveitev prikaza pritisni tipko reload  v svojem brskalniku</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('TITLE', 'Dodaj sliko');
define('MAX_FSIZE', 'Največja dovoljena velikost datoteke je %s kB');
define('ALBUM', 'Album');
define('PICTURE', 'Slika');
define('PIC_TITLE', 'Ime slike');
define('DESCRIPTION', 'Opis slike');
define('KEYWORDS', 'Ključne besede (loči jih s presledki)');
define('ERR_NO_ALB_UPLOADABLES', 'Oprosti, trenutno ni albuma v katerega bi lahko dodal slike');

// lang_usermgr_php
define('TITLE', 'Urejanje uporabnikov');
define('NAME_A', 'Ime naračajoče');
define('NAME_D', 'Ime padajoče');
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
define('DELETE', 'BRISANJE');
define('NAME', 'Uporabniko ime');
define('GROUP', 'Skupina');
define('INACTIVE', 'Neaktivni');
define('OPERATIONS', 'Operacije');
define('PICTURES', 'Slike');
define('DISK_SPACE', 'Porabljen prostor');
define('REGISTERED_ON', 'Registriran');
define('U_USER_ON_P_PAGES', 't. uporabnikov:%d (t. strani:%d)');
define('CONFIRM_DEL', 'Res eli pobrisati tega uporabnika? \\nTudi njegove slike in albumi bodo pobrisani.');
define('MAIL', 'POTA');
define('ERR_UNKNOWN_USER', 'Izbrani uporabnik ne obstaja!');
define('MODIFY_USER', 'Uredi uporabnika');
define('NOTES', 'Opombe');
define('NOTE_LIST', '<li>Če gesla ne eli spreminjati, pusti polje za geslo prazno');
define('PASSWORD', 'Geslo');
define('USER_ACTIVE', 'Uporabnik je aktiven');
define('USER_GROUP', 'Uporabnikova skupina');
define('USER_EMAIL', 'Uporabnikov email');
define('USER_WEB_SITE', 'Uporabnikova domača stran');
define('CREATE_NEW_USER', 'Ustvari novega uporabnika');
define('USER_FROM', 'Uporabnikova lokacija');
define('USER_INTERESTS', 'Uporabnikovo zanimanje');
define('USER_OCC', 'Uporabnikova zaposlitev');

// lang_util_php
define('TITLE', 'Spremeni velikost slik');
define('WHAT_IT_DOES', 'Kaj to pomeni');
define('WHAT_UPDATE_TITLES', 'Kreira imena slik iz imena datotek');
define('WHAT_DELETE_TITLE', 'Brisanje imen');
define('WHAT_REBUILD', 'Ponastavi ikone in spremeni velikost slik');
define('WHAT_DELETE_ORIGINALS', 'Pobrie originalne slike in jih nadomesti z novimi');
define('FILE', 'Datoteka');
define('TITLE_SET_TO', 'naslov spremenjen v');
define('SUBMIT_FORM', 'polji');
define('UPDATED_SUCCESFULLY', 'uspeno posodobljeno');
define('ERROR_CREATE', 'NAPAKA pri kreiranju');
define('CONTINUE', 'Nadaljuj na naslednjih slikah');
define('MAIN_SUCCESS', 'Datoteka %s je bila uporabljena za originalno sliko');
define('ERROR_RENAME', 'Napaka pri preimenovanju %s v %s');
define('ERROR_NOT_FOUND', 'Ne najdem datoteke %s');
define('BACK', 'nazaj na glavno stran');
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
define('UPDATE', 'Posodobi ikone in/ali spremeni velikost slik');
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
define('DELETE', 'Pobrii naslove slik ali originalne slike');
define('DELETE_TITLE', 'Pobrii naslove slik');
define('DELETE_ORIGINAL', 'Pobrii originalne slike');
define('DELETE_REPLACE', 'Pobrii originalne slike, nadomesti jih s spremenjenimi (po velikosti)');
define('SELECT_ALBUM', 'Izberi album');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>