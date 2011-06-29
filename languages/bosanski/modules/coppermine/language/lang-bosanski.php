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
/*   $Id: lang-bosanski.php,v 1.1 2004/07/15 21:15:33 akamu Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Bosnian');
define('LANG_NAME_NATIVE', 'Bosanski');
define('LANG_COUNTRY_CODE', 'gb');
define('TRANS_NAME', 'Kakanj.net');
define('TRANS_EMAIL', 'info@kakanj.net');
define('TRANS_WEBSITE', 'http://Kakanj.net/');
define('TRANS_DATE', '2003-04-07');

// charset this should be utf-8 or the same as nuke uses ISO-8859-2 for this language
define('CHARSET', 'windows-1250');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'Da');
define('NO', 'Ne');

// some common strings
define('BACK', 'NAZAD');
define('CONTINUE', 'Nastavi');
define('INFO', 'Informacija');
define('ERROR', 'GreÅ¡ka');

//// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%d/%m/%y at %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y at %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y at %I:%M %p');

// short names for Byte, Kilo, Mega
$lang_byte_units = array('Bytes','KB','MB',);

// Day of week
$lang_day_of_week = array('nedjelja','ponedjeljak','utorak','srijeda','Ã¨etvrtak','petak','Sub',);
// Day of the month
$lang_month = array('jan','feb','mar','apr','maj','jun','jul','avg','sep','okt','nov','dec',);
// For the word censor
$lang_bad_words = array('*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*',);
// lang_meta_album_names
define('RANDOM', 'SluÃ¨ajna slika');
define('LASTUP', 'Posljednje dodano');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Last updated albums');
define('LASTCOM', 'Posljedni komentari');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Najgledanije');
define('TOPRATED', 'Visoko rangirano');
define('LASTHITS', 'Posljednje pogledano');
define('SEARCH', 'Rezultati pretrage');
define('FAVPICS', 'Favourite Pictures');

// lang_errors
define('ACCESS_DENIED', 'NemaÅ¡ pristup ovoj stranici.');
define('PERM_DENIED', 'Nije ti dozvoljeno da izvrÅ¡iÅ¡ tu operaciju.');
define('PARAM_MISSING', 'Skripta je pozvana bez obaveznih parametara.');
define('NON_EXIST_AP', 'Izabrani album/slika viÅ¡e ne postoji !');
define('QUOTA_EXCEEDED', 'Disk kvota prekoraÃ¨ena<br /><br />Imate dozvoljenu kvotu od [quota]K, vaÅ¡e slike zauzimaju [space]K, dodavanjem ove slike probijate dozvoljenu kvotu.');
define('GD_FILE_TYPE_ERR', 'Ukoliko kotristite GD slikovnu galeriju dozvoljene slike su samo JPG i PNG.');
define('INVALID_IMAGE', 'Slika koju ste uploadali je odbaÃ¨ena ili je ne moÅ¾e obraditi GD galerija');
define('RESIZE_FAILED', 'Nije moguÃ¦e napraviti manju sliÃ¨icu.');
define('NO_IMG_TO_DISPLAY', 'Nema slike za prikaz');
define('NON_EXIST_CAT', 'Izabrana kategorija ne postoji');
define('ORPHAN_CAT', 'Kategorija ne postoji, pokrenite organizator kategorija da bi rijeÅ¡ili problem.');
define('DIRECTORY_RO', 'Direktoriju \'%s\' nije dodjeljen status writable, slike ne mogu biti izbrisane');
define('NON_EXIST_COMMENT', 'Izabrani komentar ne postoji.');
define('PIC_IN_INVALID_ALBUM', 'Slika je u nepostojeÃ¦em albumu (%s)!?');
define('BANNED', 'You are currently banned from using this site.');
define('NOT_WITH_UDB', 'This function is disabled in Coppermine because it is integrated with forum software. Either what you are trying to do is not supported in this configuration, or the function should be handled by the forum software.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', 'Idi na listu albuma');
define('ALB_LIST_LNK', 'Lista albuma');
define('MY_GAL_TITLE', 'Idi na moju liÃ¨nu galeriju');
define('MY_GAL_LNK', 'Moja galerija');
define('MY_PROF_LNK', 'Moj profil');
define('MY_PROF_TITLE','Check your disk quota and groups');
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
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Posljednji komentari');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Najgledanije');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Visoko rangirano');
define('SEARCH_LNK', 'Pretraga');
define('FAV_LNK', 'My Favorites');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Dozvola uploada');
define('CONFIG_LNK', 'Konfiguracija');
define('ALBUMS_LNK', 'Albumi');
define('CATEGORIES_LNK', 'Kategorije');
define('USERS_LNK', 'Korisnici');
define('GROUPS_LNK', 'Grupe');
define('COMMENTS_LNK', 'Komentari');
define('SEARCHNEW_LNK', 'Prebacivanje');
define('UTIL_LNK', 'Resize pictures');
define('BAN_LNK', 'Ban Users');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Kreiraj / poredaj moje albume');
define('MODIFYALB_LNK', 'Prepravi moje albume');
define('MY_PROF_LNK', 'Moj profil');

// lang_cat_list
define('CATEGORY', 'Kategorija');
define('ALBUMS', 'Albumi');
define('PICTURES', 'Slike');

// lang_album_list
define('ALBUM_ON_PAGE', '%d albuma na %d stranici');

// lang_thumb_view
define('DATE', 'DATUM');
define('NAME', 'NAZIV');
define('TITLE', 'TITLE');
define('SORT_DA', 'Poredaj po datumu novije');
define('SORT_DD', 'Poredaj po datumu starije');
define('SORT_NA', 'Poredaj po nazivu novije');
define('SORT_ND', 'Poredaj po nazivu starije');
define('SORT_TA', 'Sort by title ascending');
define('SORT_TD', 'Sort by title descending');
define('PIC_ON_PAGE', '%d slika na %d stranici');
define('USER_ON_PAGE', '%d korisnika na %d stranici');
define('SORT_RA', 'Sort by rating ascending');
define('SORT_RD', 'Sort by rating descending');
define('RATING', 'RATING');
define('SORT_TITLE', 'Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Povratak na sliÃ¨ice');
define('PIC_INFO_TITLE', 'PokaÅ¾i/sakrij info o fotografiji');
define('SLIDESHOW_TITLE', 'Slideshow');
define('SLIDESHOW_DISABLED', 'e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'PoÅ¡alji ovu sliku kao razglednicu');
define('ECARD_DISABLED', 'razglednica je iskljuÃ¨ena');
define('ECARD_DISABLED_MSG', 'Nije ti dozvoljeno da poÅ¡aljeÅ¡ razglednicu');
define('PREV_TITLE', 'Pogledaj prethodnu sliku');
define('NEXT_TITLE', 'Pogledaj sljedeÃ¦u sliku');
define('PIC_POS', 'SLIKA %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', 'Ocijeni ovu fotografiju ');
define('NO_VOTES', '(JoÅ¡ nema ocjena)');
define('RATING', '(trenute ocjene : %s / 5 sa %s glasova)');
define('RUBBISH', 'Bez veze');
define('POOR', 'Onako');
define('FAIR', 'MoÅ¾e proÃ¦i');
define('GOOD', 'Dobro');
define('EXCELLENT', 'OdliÃ¨no');
define('GREAT', 'FantastiÃ¨no');

// lang_cpg_die
define('INFORMATION', 'Informacija');
define('ERROR', 'GreÅ¡ka');
define('CRITICAL_ERROR', 'KritiÃ¨na greÅ¡ka');
define('FILE', 'Datoteka: ');
define('LINE', 'Linija: ');

// lang_display_thumbnails
define('FILENAME', 'Naziv datoteke : ');
define('FILESIZE', 'VeliÃ¨ina : ');
define('DIMENSIONS', 'Dimenzije : ');
define('DATE_ADDED', 'Dodana : ');

// lang_get_pic_data
define('N_COMMENTS', '%s komentara');
define('N_VIEWS', '%s pregleda');
define('N_VOTES', '(%s glasova)');

// lang_smilies_inc_php
define('EXCLAMATION', 'Uzvik');
define('QUESTION', 'Pitanje');
define('VERY HAPPY', 'Veoma sretan');
define('SMILE', 'Osmjeh');
define('SAD', 'TuÅ¾an');
define('SURPRISED', 'IznenaÃ°en');
define('SHOCKED', 'Å okiran');
define('CONFUSED', 'Zbunjen');
define('COOL', 'Cool');
define('LAUGHING', 'Smijeh');
define('MAD', 'Bijesan');
define('RAZZ', 'VaÅ¾an');
define('EMBARASSED', 'PostiÃ°en');
define('CRYING OR VERY SAD', 'Veoma tuÅ¾an');
define('EVIL OR VERY MAD', 'Zao');
define('TWISTED EVIL', 'Ãavo');
define('ROLLING EYES', 'KotrljajuÃ¦e oÃ¨i');
define('WINK', 'Mig');
define('IDEA', 'Ideja');
define('ARROW', 'Strelica');
define('NEUTRAL', 'Neutralan');
define('MR. GREEN', 'G. Zeleni');

// lang_admin_php
define('LV_ADMIN', 'NapuÅ¡tanje administratorskog moda...');
define('ENT_ADMIN', 'Ulaz u administratorski mod...');

// lang_albmgr_php
define('ALB_NEED_NAME', 'MoraÅ¡ upisati ime albuma !');
define('CONFIRM_MODIFS', 'Da li ste sigurni da Å¾elite napraviti promjene ?');
define('NO_CHANGE', 'Niste napravili nikakvu promjenu !');
define('NEW_ALBUM', 'Novi album');
define('CONFIRM_DELETE1', 'Da li ste sigurni da Å¾elite izbrisati ovaj album ?');
define('CONFIRM_DELETE2', '\\nSve slike i komentari koji su tu biÃ¦e izbrisani !');
define('SELECT_FIRST', 'Prvo izaberite album');
define('ALB_MRG', 'Organizacija albuma');
define('MY_GALLERY', '* Moja galerija *');
define('NO_CATEGORY', '* Nema kategorija *');
define('DELETE', 'IzbriÅ¡i');
define('NEW', 'Novo');
define('APPLY_MODIFS', 'Napravi promjene');
define('SELECT_CATEGORY', 'Izaberi kategoriju');

// lang_catmgr_php
define('MISS_PARAM', 'Parametri obavezni za \'%s\'komanda nije izvrÅ¡ena !');
define('UNKNOWN_CAT', 'Izabrana kategorija ne postoji u bazi podataka');
define('USERGAL_CAT_RO', 'KoriÅ¡niÃ¨ka kategorija ne moÅ¾e biti izbrisana !');
define('MANAGE_CAT', 'Organizuj kategorije');
define('CONFIRM_DELETE', 'Da li ste sigurni da Å¾elite IZBRISATI ovu kategoriju');
define('CATEGORY', 'Kategorija');
define('OPERATIONS', 'Operacije');
define('MOVE_INTO', 'Pomjeri u');
define('UPDATE_CREATE', 'OsvjeÅ¾i/Napravi kategoriju');
define('PARENT_CAT', 'Osnovna kategorija');
define('CAT_TITLE', 'Naziv kategorije');
define('CAT_DESC', 'Opis kategorije');

// lang_config_php
define('TITLE', 'Configuration');
define('RESTORE_CFG', 'Restore factory defaults');
define('SAVE_CFG', 'Save new configuration');
define('NOTES', 'Notes');
define('INFO', 'Information');
define('UPD_SUCCESS', 'Coppermine configuration was updated');
define('RESTORE_SUCCESS', 'Coppermine default configuration restored');
define('NAME_A', 'Name ascending');
define('NAME_D', 'Name descending');
define('TITLE_A', 'Title ascending');
define('TITLE_D', 'Title descending');
define('DATE_A', 'Date ascending');
define('DATE_D', 'Date descending');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Height');
define('TH_WD', 'Width');

// lang_config_data
define('CONFIG_GENSET', 'Osnovno podeÅ¡avanje');
define('GALLERY_NAME', 'Naziv galerije');
define('GALLERY_DESCRIPTION', 'Opis galerije');
define('GALLERY_ADMIN_EMAIL', 'Email administratora galerije');
define('ECARDS_MORE_PIC_TARGET', 'Address to nuke folder ie http://www.mysite.tld/html/');
define('LANG', 'Jezik');
define('CPGTHEME', 'Tema');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'Album list view');
define('MAIN_TABLE_WIDTH', 'Å irina glavne tabele (pikseli ili %)');
define('SUBCAT_LEVEL', 'Broj levela kategorija za prikaz');
define('ALBUMS_PER_PAGE', 'Broj albuma za prikaz');
define('ALBUM_LIST_COLS', 'Broj kolona za listu albuma');
define('ALB_LIST_THUMB_SIZE', 'VeliÃ¨ina sliÃ¨ice u pikselima');
define('MAIN_PAGE_LAYOUT', 'SadrÅ¾aj naslovne stranice');
define('FIRST_LEVEL', 'Show first level album thumbnails in categories');
define('THUMB_VIEW_TITLE', 'Thumbnail view');
define('THUMBCOLS', 'Number of columns on thumbnail page');
define('THUMBROWS', 'Number of rows on thumbnail page');
define('MAX_TABS', 'Maximum number of tabs to display');
define('CAPTION_IN_THUMBVIEW', 'Display picture caption (in addition to title) below the thumbnail');
define('DISPLAY_COMMENT_COUNT', 'Display number of comments below the thumbnail');
define('DEFAULT_SORT_ORDER', 'Default sort order for pictures');
define('MIN_VOTES_FOR_RATING', 'Minimum number of votes for a picture to appear in the \'top-rated\' list');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'Image view &amp; Comment settings');
define('PICTURE_TABLE_WIDTH', 'Width of the table for picture display (pixels or %)');
define('DISPLAY_PIC_INFO', 'Picture information are visible by default');
define('FILTER_BAD_WORDS', 'Filter bad words in comments');
define('ENABLE_SMILIES', 'Allow smiles in comments');
define('DISABLE_FLOOD_PROTECTION', 'Allow several consecutive comments on one pic from the same user');
define('COMMENT_EMAIL_NOTIFICATION', 'Email site admin upon comment submission');
define('MAX_IMG_DESC_LENGTH', 'Max length for an image description');
define('MAX_COM_WLENGTH', 'Max number of characters in a word');
define('MAX_COM_LINES', 'Max number of lines in a comment');
define('MAX_COM_SIZE', 'Maximum length of a comment');
define('DISPLAY_FILM_STRIP', 'Show film strip');
define('MAX_FILM_STRIP_ITEMS', 'Number of items in film strip');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', 'Pictures and thumbnails settings');
define('JPEG_QUAL', 'Quality for JPEG files');
define('THUMB_WIDTH', 'Max dimension of a thumbnail <b>*</b>');
define('THUMB_USE', 'Use dimension ( width or height or Max aspect for thumbnail )<b>*</b>');
define('MAKE_INTERMEDIATE', 'Create intermediate pictures');
define('PICTURE_WIDTH', 'Max width or height of an intermediate picture <b>*</b>');
define('MAX_UPL_SIZE', 'Max size for uploaded pictures (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Max width or height for uploaded pictures (pixels)');
define('USER_SETTING_TITLE', 'User settings');
define('ALLOW_USER_REGISTRATION', 'Allow new user registrations');
define('REG_REQUIRES_VALID_EMAIL', 'User registration requires email verification');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Allow two users to have the same email address');
define('ALLOW_PRIVATE_ALBUMS', 'Users can can have private albums');
define('CUSTOM_FIELDS_TITLE', 'Custom fields for image description (leave blank if unused)');
define('USER_FIELD1_NAME', 'Field 1 name');
define('USER_FIELD2_NAME', 'Field 2 name');
define('USER_FIELD3_NAME', 'Field 3 name');
define('USER_FIELD4_NAME', 'Field 4 name');
define('PIC_ADV_SETTING_TITLE', 'Pictures and thumbnails advanced settings');
define('SHOW_PRIVATE', 'Show private album Icon to unlogged user');
define('FORBIDEN_FNAME_CHAR', 'Characters forbidden in filenames');
define('ALLOWED_FILE_EXTENSIONS', 'Accepted file extensions for uploaded pictures');
define('THUMB_METHOD', 'Method for resizing images');
define('IMPATH', 'Path to ImageMagick\Netpbm \'convert\' utility (example /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Allowed image types (only valid for ImageMagick)');
define('IM_OPTIONS', 'Command line options for ImageMagick');
define('READ_EXIF_DATA', 'Read EXIF data in JPEG files');
define('READ_IPTC_DATA', 'Read IPTC data in JPEG files');
define('FULLPATH', 'The album directory <b>*</b>');
define('USERPICS', 'The directory for user pictures <b>*</b>');
define('NORMAL_PFX', 'The prefix for intermediate pictures <b>*</b>');
define('THUMB_PFX', 'The prefix for thumbnails <b>*</b>');
define('DEFAULT_DIR_MODE', 'Default mode for directories');
define('DEFAULT_FILE_MODE', 'Default mode for pictures');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', 'Cookies &amp; Charset settings');
define('COOKIE_NAME', 'Name of the cookie used by the script');
define('COOKIE_PATH', 'Path of the cookie used by the script');
define('CHAR_SET', 'Character encoding');
define('MISC_SETTING_TITLE', 'Miscellaneous settings');
define('DEBUG_MODE', 'Enable debug mode');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) Fields marked with * must not be changed if you already have pictures in your gallery</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Potrebno je da upiÅ¡ete svoje ime i komentar');
define('COM_ADDED', 'Komentar dodan');
define('ALB_NEED_TITLE', 'Morate upisati naziv za album !');
define('NO_UDP_NEEDED', 'Nije potrebno osvjeÅ¾avanje.');
define('ALB_UPDATED', 'Album osvjeÅ¾en');
define('UNKNOWN_ALBUM', 'Izabrani album ne postoji ili nemate dozvolu za upload u ovaj album');
define('NO_PIC_UPLOADED', 'Slika nije dodana !<br /><br />Ako ste zaista izabrali sliku za upload, onda je tenutna greÅ¡ka...');
define('ERR_MKDIR', 'Nije moguÃ¦e napraviti direktorij %s !');
define('DEST_DIR_RO', 'Destinacija direktorija %s nije writable u skripti !');
define('ERR_MOVE', 'Nije moguÃ¦e pomjeriti %s u %s !');
define('ERR_FSIZE_TOO_LARGE', 'Dimenzije slike koju uploadate je prevelika (maksimalno dozvoljeno je %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'VeliÃ¨ina koju uploadate je prevelika (maksimalno dozvoljeno je %s KB) !');
define('ERR_INVALID_IMG', 'Datoteka koju uploadate nije  dozvoljeni format slike !');
define('ALLOWED_IMG_TYPES', 'MoÅ¾ete uploadati samo %s slika.');
define('ERR_INSERT_PIC', 'Slika \'%s\' (ne)moÅ¾e biti ubaÃ¨ena u album ');
define('UPLOAD_SUCCESS', 'VaÅ¡a slika je uploadana uspjeÅ¡no<br /><br />Slika Ã¦e biti vidljiva nakon administratove dozvole.');
define('INFO', 'Informacija');
define('ERR_COMMENT_EMPTY', 'VaÅ¡ komentar je prazan !');
define('ERR_INVALID_FEXT', 'Samo datoteke sa sljedeÃ¦im ekstenzijama su prihvatljive : <br /><br />%s.');
define('NO_FLOOD', 'Å½ao nam je vi ste veÃ¦ autor posljednjeg komentara upisanog za ovu sliku<br /><br />Prepravite komentar koji ste poslali ako Å¾elite promijeniti komentar o slici');
define('REDIRECT_MSG', 'BiÃ¦ete prebaÃ¨eni automatski.<br /><br /><br />Klinki \'CONTINUE\' ako se stranica ne osvjeÅ¾i automatski');
define('UPL_SUCCESS', 'Slika uspjeÅ¡no dodana');

// lang_delete_php
define('CAPTION', 'Naziv');
define('FS_PIC', 'puna veliÃ¨ina slike');
define('DEL_SUCCESS', 'uspjeÅ¡no');
define('NS_PIC', 'normalna veliÃ¨ina slike');
define('ERR_DEL', 'nemoÅ¾e biti izbrisano');
define('THUMB_PIC', 'sliÃ¨ica');
define('COMMENT', 'komentar');
define('IM_IN_ALB', 'slika u albumu');
define('ALB_DEL_SUCCESS', 'Album \'%s\' izbrisan');
define('ALB_MGR', 'Organizator albuma');
define('ERR_INVALID_DATA', 'Neispravni podaci primljenji u \'%s\'');
define('CREATE_ALB', 'Kreiranje albuma \'%s\'');
define('UPDATE_ALB', 'OsvjeÅ¾avanje albuma \'%s\' sa malo \'%s\' i index \'%s\'');
define('DEL_PIC', 'IzbriÅ¡i sliku');
define('DEL_ALB', 'IzbriÅ¡i album');
define('DEL_USER', 'IzbriÅ¡i korisnika');
define('ERR_UNKNOWN_USER', 'Izabrani korisnik ne postoji !');
define('COMMENT_DELETED', 'komentar uspjeÅ¡no izbrisan');

// lang_display_image_php
define('CONFIRM_DEL', 'Da li sigurno Å¾elite IZBRISATI ovu sliku ? \\nKomentari Ã¦e takoÃ°e biti izbrisani.');
define('DEL_PIC', 'IZBRIÅ I OVU SLIKU');
define('SIZE', '%s x %s pixela');
define('VIEWS', '%s puta');
define('SLIDESHOW', 'Slideshow');
define('STOP_SLIDESHOW', 'ZAUSTAVI SLIDESHOW');
define('VIEW_FS', 'Klikni da vidiš u punoj velièini');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('TITLE', 'Informacije o slici');
define('FILENAME', 'Ime datoteke');
define('ALBUM NAME', 'Ime albuma');
define('RATING', 'Ocjena (%s glasova)');
define('KEYWORDS', 'KljuÃ¨ne rijeÃ¨i');
define('FILE SIZE', 'VeliÃ¨ina datoteke');
define('DIMENSIONS', 'Dimenzije');
define('DISPLAYED', 'Prikazano');
define('CAMERA', 'Kamera');
define('DATE TAKEN', 'Datum uzimanja');
define('APERTURE', 'Otvor');
define('EXPOSURE TIME', 'Vrijeme izlaganja');
define('FOCAL LENGTH', 'Odstojanje od centra');
define('COMMENT', 'Komentar');
define('ADDFAV', 'Add to Fav');
define('ADDFAVPHRASE', 'Favourites');
define('REMFAV', 'Remove from Fav');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'Prepravi ovaj komentar');
define('CONFIRM_DELETE', 'Sigurni ste da Å¾elite izbrisati ovaj komentar ?');
define('ADD_YOUR_COMMENT', 'Dodajte svoj komentar');
define('NAME', 'Name');
define('COMMENT', 'Comment');
define('YOUR_NAME', 'VaÅ¡e ime');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Click image to close this window');

// lang_ecard_php
define('TITLE', 'Send an e-card');
define('INVALID_EMAIL', '<b>Ops</b> : neispravna email adresa !');
define('ECARD_TITLE', 'Razglednica od %s za tebe');
define('VIEW_ECARD', 'Ako razglednica nije prikazana ispravno, kliknite na ovaj link');
define('VIEW_MORE_PICS', 'Kliknite na ovaj link da vidite viÅ¡e slika !');
define('SEND_SUCCESS', 'VaÅ¡a razglednica je poslana');
define('SEND_FAILED', 'Å½ao nam je, ali server ne moÅ¾e poslati vaÅ¡u razglednicu...');
define('FROM', 'Od');
define('YOUR_NAME', 'VaÅ¡e ime');
define('YOUR_EMAIL', 'VaÅ¡a email adresa');
define('TO', 'Za');
define('RCPT_NAME', 'Ime primatelja');
define('RCPT_EMAIL', 'Email adresa primatelja');
define('GREETINGS', 'Naslov');
define('MESSAGE', 'Poruka');

// lang_editpics_php
define('PIC_INFO', 'Slika&nbsp;info');
define('ALBUM', 'Album');
define('TITLE', 'Naslov');
define('DESC', 'Opis');
define('KEYWORDS', 'KljuÃ¨ne rijeÃ¨i');
define('PIC_INFO_STR', '%sx%s - %sKB - %s pregleda - %s glasova');
define('APPROVE', 'Odobri sliku');
define('POSTPONE_APP', 'Odgodi odobrenje');
define('DEL_PIC', 'IzbriÅ¡i sliku');
define('RESET_VIEW_COUNT', 'Resetuj brojaÃ¨ pregleda');
define('RESET_VOTES', 'Resetuj glasove');
define('DEL_COMM', 'IzbriÅ¡i komentare');
define('UPL_APPROVAL', 'Odobri upload');
define('EDIT_PICS', 'Prepravi slike');
define('SEE_NEXT', 'Pogledaj sljedeÃ¦e slike');
define('SEE_PREV', 'Pogledaj prethodne slike');
define('N_PIC', '%s slike');
define('N_OF_PIC_TO_DISP', 'Broj slika za prikazivanje');
define('APPLY', 'Napravi promjene');

// lang_groupmgr_php
define('GROUP_NAME', 'Naziv grupe');
define('DISK_QUOTA', 'Kvota diska');
define('CAN_RATE', 'MoÅ¾e ocijeniti sliku');
define('CAN_SEND_ECARDS', 'MoÅ¾e poslati razglednicu');
define('CAN_POST_COM', 'MoÅ¾e komentirati');
define('CAN_UPLOAD', 'MoÅ¾e uploadati sliku');
define('CAN_HAVE_GALLERY', 'MoÅ¾e imati liÃ¨nu galeriju');
define('APPLY', 'Napravi promjene');
define('CREATE_NEW_GROUP', 'Kreiraj novu grupu');
define('DEL_GROUPS', 'IzbriÅ¡i izabrane grupe');
define('CONFIRM_DEL', 'Upozorenje, kada izbriÅ¡eÅ¡ grupu, korisnici koji pripadaju toj grupi biÃ¦e prebaÃ¨eni u \'Registered\' grupu !\\n\\nDa li Å¾eliÅ¡ nastaviti ?');
define('TITLE', 'Organizuj korisniÃ¨ke grupe');
define('APPROVAL_1', 'Pub. Upl. approval (1)');
define('APPROVAL_2', 'Priv. Upl. approval (2)');
define('NOTE1', '<b>(1)</b> Za upload u javni album potrebna dozvola administratora');
define('NOTE2', '<b>(2)</b> Za upload u album koji pripada korisniku potrebna dozvola administratora');
define('NOTES', 'Napomena');

// lang_index_php
define('WELCOME', 'Dobro doÅ¡li !');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Da li ste sigurni da Å¾elite IZBRISATI ovaj album ? \\nSve slike i komentari Ã¦e takoÃ°e biti izbrisani.');
define('DELETE', 'IZBRIÅ I');
define('MODIFY', 'KARAKTERISTIKE');
define('EDIT_PICS', 'PREPRAVKA');

// lang_list_categories
define('HOME', 'POÃˆETNA');
define('STAT1', '<b>[pictures]</b> slika u <b>[albums]</b> albuma i <b>[cat]</b> kategorija sa <b>[comments]</b> komentara pogledani <b>[views]</b> puta');
define('STAT2', '<b>[pictures]</b> slika u <b>[albums]</b> albumi pregledani <b>[views]</b> puta');
define('XX_S_GALLERY', '%s\'s Galerija');
define('STAT3', '<b>[pictures]</b> slika u <b>[albums]</b> albuma sa <b>[comments]</b> komentara pogledano <b>[views]</b> puta');

// lang_list_users
define('USER_LIST', 'Lista korisnika');
define('NO_USER_GAL', 'Nema korisniÃ¨kih galerija');
define('N_ALBUMS', '%s album(a)');
define('N_PICS', '%s slika');

// lang_list_albums
define('N_PICTURES', '%s slika');
define('LAST_ADDED', ', zadnja dodana %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'OsvjeÅ¾i album %s');
define('GENERAL_SETTINGS', 'Osnovno Å¡timanje');
define('ALB_TITLE', 'Naziv albuma');
define('ALB_CAT', 'Kategorija albuma');
define('ALB_DESC', 'Opis albuma');
define('ALB_THUMB', 'SliÃ¨ice albuma');
define('ALB_PERM', 'Dozvole za ovaj album');
define('CAN_VIEW', 'Album moÅ¾e biti vidljiv');
define('CAN_UPLOAD', 'Posjetioci mogu uploadat slike');
define('CAN_POST_COMMENTS', 'Posjetioci mogu pisati komentare');
define('CAN_RATE', 'Posjetioci mogu ocijenjivati slike');
define('USER_GAL', 'Korisnikova galerija');
define('NO_CAT', '* Nema kategorije *');
define('ALB_EMPTY', 'Album je prazan');
define('LAST_UPLOADED', 'Zadnje uploadano');
define('PUBLIC_ALB', 'Svi (javni album)');
define('ME_ONLY', 'Samo ja');
define('OWNER_ONLY', 'Vlasnik albuma (%s) samo');
define('GROUPP_ONLY', 'Members of the \'%s\' group');
define('ERR_NO_ALB_TO_MODIFY', 'U bazi podataka nema albuma koji moÅ¾ete prepraviti.');
define('UPDATE', 'OsvjeÅ¾i album');

// lang_rate_pic_php
define('ALREADY_RATED', 'Å½ao mi je veÃ¦ ste ocijenili ovu sliku');
define('RATE_OK', 'Glas upisan');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'Za postavljanje vlastitih fotografija u galeriju potrebno je registrovati se. Prilikom registracije obavezno morate upisati vaÅ¡u ispravnu, postojeÃ¦u email adresu, na koju Ã¦e vam biti poslan email sa linkom kojim Ã¦ete potvrditi vaÅ¡u registraciju.<br />
<br /> 
SlaÅ¾em se da neÃ¦u postavljati bilo kakve uznemirujuÃ¦e, pornografske, vulgarne fotografije kao i fotografije koje potiÃ¨u na bilo kakav oblik mrÅ¾nje. SlaÅ¾em se takoÃ°e da Administrator ovog dijela Administrator ima pravo da izbriÅ¡e sve fotografije koje nisu prihvatljive, odnosno nabrojane kategorije fotografija. SlaÅ¾em se da Administrator moÅ¾e izbrisati svaki moj komentar ukoliko ocijeni da nije prikladan. Kao korisnik ovoe foto galerije slaÅ¾em se da svi moji podaci koje upiÅ¡em u registracijsku formu budu pohranjeni u bazu podataka. Ukoliko na bilo kakav naÃ¨in uznemiravam foto galeriju slaÅ¾em se da administator banuje moju IP adresu, odnosno da mi do daljnjeg zabrani pristup ovoim stranicama. I tako dalje, nadamo se da Ã¦ete poÅ¡tovati ova pravila.<br />
<br />
Ova stranica koristi cookies za pohranu podataka na vaÅ¡em raÃ¨unaru. Email adresa se koristi samo za potvrdu vaÅ¡e registracije.<br />
<br />
Klikom na \SlaÅ¾em se\' prihvatate uslove koriÅ¡tenja i nadamo se da ih neÃ¦ete prekrÅ¡iti.');

// lang_register_php
define('PAGE_TITLE', 'Registracija');
define('TERM_COND', 'Pravila i uslovi');
define('I_AGREE', 'SlaÅ¾em se');
define('SUBMIT', 'PoÅ¡alji registraciju');
define('ERR_USER_EXISTS', 'Izabrano korisniÃ¨ko ime veÃ¦ je registrovano, probajte neko drugo');
define('ERR_PASSWORD_MISMATCH', 'Nedostaju dvije Å¡ifre, upiÅ¡ite ponovno');
define('ERR_UNAME_SHORT', 'KorisniÃ¨ko ime mora imati najmanje 2 znaka');
define('ERR_PASSWORD_SHORT', 'Å ifra mora imati najmanje 2 znaka');
define('ERR_UNAME_PASS_DIFF', 'KorisniÃ¨ko ime i Å¡ifra ne mogu biti isti');
define('ERR_INVALID_EMAIL', 'Neispravna email adresa');
define('ERR_DUPLICATE_EMAIL', 'VeÃ¦ je neko registrovan sa istom email adresom koju ste upisali');
define('ENTER_INFO', 'UpiÅ¡ite registracijske podatke');
define('REQUIRED_INFO', 'Obavezni podaci');
define('OPTIONAL_INFO', 'Dodatni podaci');
define('USERNAME', 'KorisniÃ¨ko ime');
define('PASSWORD', 'Å ifra');
define('PASSWORD_AGAIN', 'Å ifra ponvno');
define('EMAIL', 'Email');
define('LOCATION', 'Lokacija');
define('INTERESTS', 'Interesi');
define('WEBSITE', 'Web stranica');
define('OCCUPATION', 'Zanimanje');
define('ERROR', 'GREÅ KA');
define('CONFIRM_EMAIL_SUBJECT', '%s - Potvrdite registraciju');
define('INFORMATION', 'Informacija');
define('FAILED_SENDING_EMAIL', 'Registracijsku konfirmaciju nije moguÃ¦e poslati !');
define('THANK_YOU', 'Hvala na registraciji.<br /><br />Email sa informacijama kako da aktivirate vaÅ¡ korisniÃ¨ki raÃ¨un je poslan na email adresu koju ste upisali prilikom registracije.');
define('ACCT_CREATED', 'VaÅ¡ korisniÃ¨ki raÃ¨un je otvoren i sada moÅ¾ete pristupiti stranici sa vaÅ¡im korisniÃ¨im imenom i Å¡ifrom');
define('ACCT_ACTIVE', 'VaÅ¡ korisniÃ¨ki raÃ¨un od sada je aktivan i moÅ¾ete stranici pristupiti sa vaÅ¡im korisniÃ¨im imeno i Å¡ifrom');
define('ACCT_ALREADY_ACT', 'VaÅ¡ korisniÃ¨ki raÃ¨un je veÃ¦ aktivan !');
define('ACCT_ACT_FAILED', 'Ovaj korisniÃ¨ki raÃ¨un ne moÅ¾e biti aktivan !');
define('ERR_UNK_USER', 'Izabrani korisnik ne postoji !');
define('X_S_PROFILE', '%s\'s profil');
define('GROUP', 'Grupa');
define('REG_DATE', 'Registovan(a)');
define('DISK_USAGE', 'IskoriÅ¡tenost disk prostora');
define('CHANGE_PASS', 'Promijeni moju Å¡ifru');
define('CURRENT_PASS', 'Trenutna Å¡ifra');
define('NEW_PASS', 'Nova Å¡ifra');
define('NEW_PASS_AGAIN', 'Nova Å¡ifra ponovno');
define('ERR_CURR_PASS', 'Trenutna Å¡ifra nije ispravna');
define('APPLY_MODIF', 'IzvrÅ¡i promjene');
define('UPDATE_SUCCESS', 'VaÅ¡ profil je osvjeÅ¾en');
define('PASS_CHG_SUCCESS', 'VaÅ¡a Å¡ifra je promijenjena');
define('PASS_CHG_ERROR', 'VaÅ¡a Å¡ifra nije promijenjena');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Hvala na registraciji na {SITE_NAME}

VaÅ¡e korisniÃ¨ko ime : "{USER_NAME}"
VaÅ¡a Å¡ifra : "{PASSWORD}"

Da bi aktivirali vaÅ¡ korisniÃ¨ki raÃ¨un potrebno je da kliknete na link ispod ili ako Å¾elite kopirajte link i nalijepite u vaÅ¡ web browser.

{ACT_LINK}

Pozdrav,

Team {SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', 'ProÃ¨itajte komentare');
define('NO_COMMENT', 'Nema komentara za Ã¨itanje');
define('N_COMM_DEL', '%s komentari su izbrisani');
define('N_COMM_DISP', 'Broj komentara za prikaz');
define('SEE_PREV', 'Pogledaj prethodno');
define('SEE_NEXT', 'Pogledaj sljedeÃ¦e');
define('DEL_COMM', 'IzbriÅ¡i izabrane komentare');

// lang_search_php
define('SEARCH', 'PretraÅ¾ite kolekciju slika');

// lang_search_new_php
define('PAGE_TITLE', 'Pretraga novih slika');
define('SELECT_DIR', 'Izaberi direktorij');
define('SELECT_DIR_MSG', 'Ova funkcija dozvoljava vam da napravite put do slike koju imate na svom server.<br /><br />Izaberite direktorij gdje ste uploadali svoje slike');
define('NO_PIC_TO_ADD', 'Nema slike za dodati');
define('NEED_ONE_ALBUM', 'Morate imati najmanje jedan album da bi koristili ovu funkciju');
define('WARNING', 'Upozorenje');
define('CHANGE_PERM', 'skripta ne moÅ¾e upisivati u ovaj direktorij, morate promijeniti CHMOD na 755 ili 777 prije nego Å¡to dodate slike !');
define('TARGET_ALBUM', '<b>Prebaci sliku iz &quot;</b>%s<b>&quot; u </b>%s');
define('FOLDER', 'Folder');
define('IMAGE', 'Slika');
define('ALBUM', 'Album');
define('RESULT', 'Rezultat');
define('DIR_RO', 'Nije writable. ');
define('DIR_CANT_READ', 'Nije readable. ');
define('INSERT', 'Dodavanje novih slika u galeriju');
define('LIST_NEW_PIC', 'Lista novih slika');
define('INSERT_SELECTED', 'Ubaci izabrane slike');
define('NO_PIC_FOUND', 'Nije pronaÃ°ema nova slika');
define('BE_PATIENT', 'Molimo budite strpljivi, skripti treba vremena da doda slike');
define('NOTES', '<ul><li><b>OK</b> : znaÃ¨i da je slika uspjeÅ¡no dodana<li><b>DP</b> : znaÃ¨i da je slika duplikat i da je veÃ¦ u bazi podataka<li><b>PB</b> : znaÃ¨i da sliku nije moguÃ¦e dodati, provjerite vlastitu konfiguraciju i dozvolu direktorija gdje su slike locirane<li>Ako OK, DP, PB \'signs\' se ne pojave klikni na puknutu sliku da vidiÅ¡ koju je greÅ¡ku napravio PHP<li>Ako je sesija istekla, pritisnite refresh</ul>');

// lang_upload_php
define('TITLE', 'Upload sliku');
define('MAX_FSIZE', 'Maksimalno dozvoljena veliÃ¨ina je %s KB');
define('ALBUM', 'Album');
define('PICTURE', 'Slika');
define('PIC_TITLE', 'Naslov slike');
define('DESCRIPTION', 'Opis slike');
define('KEYWORDS', 'KljuÃ¨ne rijeÃ¨i (odvojiti praznim mjestom)');
define('ERR_NO_ALB_UPLOADABLES', 'Å½ao nam je ovdje nema albuma gdje bi mogli ubaciti sliku.');

// lang_usermgr_php
define('TITLE', 'Organizuj korisnike');
define('NAME_A', 'Ime ascending');
define('NAME_D', 'Ime descending');
define('GROUP_A', 'Grupa ascending');
define('GROUP_D', 'Grupa descending');
define('REG_A', 'Datum registracije ascending');
define('REG_D', 'Datum registracije descending');
define('PIC_A', 'Broj slika ascending');
define('PIC_D', 'Broj slika descending');
define('DISKU_A', 'IskoriÅ¡tenost diska ascending');
define('DISKU_D', 'IskoriÅ¡tenost diska descending');
define('SORT_BY', 'Poredaj korisnike po');
define('ERR_NO_USERS', 'KorisniÃ¨ka tabla je prazna !');
define('ERR_EDIT_SELF', 'Ne moÅ¾ete promijeniti svoj profil, koristite \'My profile\' link za to');
define('EDIT', 'PREPRAVI');
define('DELETE', 'IZBRIÅ I');
define('NAME', 'KorisniÃ¨ko ime');
define('GROUP', 'Grupa');
define('INACTIVE', 'Neaktivno');
define('OPERATIONS', 'Operacije');
define('PICTURES', 'Slike');
define('DISK_SPACE', 'IskoriÅ¡teno prostora / Kvota');
define('REGISTERED_ON', 'Registrovan');
define('U_USER_ON_P_PAGES', '%d korisnika na %d stranica');
define('CONFIRM_DEL', 'Da li ste sigurni da Å¾elite OBRISATI korisnika ? \\nSve njegove slike i albumi Ã¦e biti izbrisani.');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'Izabrani korisnik ne postoji !');
define('MODIFY_USER', 'Modificiraj korisnika');
define('NOTES', 'Napomena');
define('NOTE_LIST', '<li>Ako ne Å¾elite da promijenite trenutnu Å¡ifru, ostavite \"Å¡ifra\" polje prazno');
define('PASSWORD', 'Å ifra');
define('USER_ACTIVE', 'Korisnik je aktivan');
define('USER_GROUP', 'Grupa');
define('USER_EMAIL', 'Email');
define('USER_WEB_SITE', 'Web stranica');
define('CREATE_NEW_USER', 'Kreiraj novog korisnika');
define('USER_LOCATION', 'Lokacija');
define('USER_INTERESTS', 'Interesi');
define('USER_OCCUPATION', 'Zanimanje');

// lang_util_php
define('TITLE', 'Resize pictures');
define('WHAT_IT_DOES', 'What it does');
define('WHAT_UPDATE_TITLES', 'Updates titles from filename');
define('WHAT_DELETE_TITLE', 'Deletes titles');
define('WHAT_REBUILD', 'Rebuilds thumbnails and resized photos');
define('WHAT_DELETE_ORIGINALS', 'Deletes original sized photos replacing them with the sized version');
define('FILE', 'File');
define('TITLE_SET_TO', 'title set to');
define('SUBMIT_FORM', 'submit');
define('UPDATED_SUCCESFULLY', 'updated succesfully');
define('ERROR_CREATE', 'ERROR creating');
define('CONTINUE', 'Process more images');
define('MAIN_SUCCESS', 'The file %s was successfully used as main picture');
define('ERROR_RENAME', 'Error renaming %s to %s');
define('ERROR_NOT_FOUND', 'The file %s was not found');
define('BACK', 'back to main');
define('THUMBS_WAIT', 'Updating thumbnails and/or resized images, please wait...');
define('THUMBS_CONTINUE_WAIT', 'Continuing to update thumbnails and/or resized images...');
define('TITLES_WAIT', 'Updating titles, please wait...');
define('DELETE_WAIT', 'Deleting titles, please wait...');
define('REPLACE_WAIT', 'Deleting originals and replacing them with resized images, please wait..');
define('INSTRUCTION', 'Quick instructions');
define('INSTRUCTION_ACTION', 'Select action');
define('INSTRUCTION_PARAMETER', 'Set parameters');
define('INSTRUCTION_ALBUM', 'Select album');
define('INSTRUCTION_PRESS', 'Press %s');
define('UPDATE', 'Update thumbs and/or resized photos');
define('UPDATE_WHAT', 'What should be updated');
define('UPDATE_THUMB', 'Only thumbnails');
define('UPDATE_PIC', 'Only resized pictures');
define('UPDATE_BOTH', 'Both thumbnails and resized pictures');
define('UPDATE_NUMBER', 'Number of processed images per click');
define('UPDATE_OPTION', '(Try setting this option lower if you experience timeout problems)');
define('FILENAME_TITLE', 'Filename â‡’ Picture title');
define('FILENAME_HOW', 'How should the filename be modified');
define('FILENAME_REMOVE', 'Remove the .jpg ending and replace _ (underscore) with spaces');
define('FILENAME_EURO', 'Change 2003_11_23_13_20_20.jpg to 23/11/2003 13:20');
define('FILENAME_US', 'Change 2003_11_23_13_20_20.jpg to 11/23/2003 13:20');
define('FILENAME_TIME', 'Change 2003_11_23_13_20_20.jpg to 13:20');
define('DELETE', 'Delete picture titles or original size photos');
define('DELETE_TITLE', 'Delete picture titles');
define('DELETE_ORIGINAL', 'Delete original size photos');
define('DELETE_REPLACE', 'Deletes the original images replacing them with the sized versions');
define('SELECT_ALBUM', 'Select album');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>