<?php
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
/*   $Id: lang-dutch.php,v 1.1 2004/07/14 09:17:07 akamu Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Dutch');
define('LANG_NAME_NATIVE', 'Nederlands');
define('LANG_COUNTRY_CODE', 'nl');
define('TRANS_NAME', 'Ron Bos');
define('TRANS_EMAIL', 'ron@ronbos.nl');
define('TRANS_WEBSITE', 'http://www.ronbos.nl/');
define('TRANS_DATE', '2003-10-31');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'iso-8859-1');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'Ja');
define('NO', 'Nee');

// some common strings
define('BACK', 'Terug');
define('CONTINUE', 'Doorgaan');
define('INFO', 'Informatie');
define('ERROR', 'Fout');

//// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
define('ALBUM_DATE_FMT', '%d %B %Y');
define('LASTCOM_DATE_FMT', '%d-%m-%y om %H:%M');
define('LASTUP_DATE_FMT', '%d %B %Y');
define('REGISTER_DATE_FMT', '%d %B %Y');
define('LASTHIT_DATE_FMT', '%d %B %Y om %H:%M ');
define('COMMENT_DATE_FMT', '%d %B %Y om %H:%M ');

// short names for Byte, Kilo, Mega
$lang_byte_units = array('Bytes','KB','MB',);

// Day of week
$lang_day_of_week = array('zon','maa','din','woe','don','vri','zat',);
// Day of the month
$lang_month = array('jan','feb','mrt','apr','mei','jun','jul','aug','sep','okt','nov','dec',);
// For the word censor
$lang_bad_words = array('*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*','kut','lul','neuken','klootzak','hoer','zak','hufter','pijpen','kloot','sex',);
// lang_meta_album_names
define('RANDOM', 'Willekeurige foto\'s');
define('LASTUP', 'Laatste toevoegingen');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Laatste gewijzigde albums');
define('LASTCOM', 'Laatste commentaren');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Meest bekeken');
define('TOPRATED', 'Best beoordeeld');
define('LASTHITS', 'Laatst bekeken');
define('SEARCH', 'Zoek resultaten');
define('FAVPICS', 'Favoriete foto\'s');

// lang_errors
define('ACCESS_DENIED', 'Je hebt geen toestemming om deze pagina te bezoeken.');
define('PERM_DENIED', 'Je hebt geen toestemming om deze handeling uit te voeren.');
define('PARAM_MISSING', 'Script aangeroepen zonder de vereiste parameters.');
define('NON_EXIST_AP', 'Geselecteerde album/foto bestaat niet!');
define('QUOTA_EXCEEDED', 'Diskquotum overschreden<br /><br />Je hebt een quotum van [quota]K, je foto\'s gebruiken nu [space]K, het toevoegen van deze foto zorgt er voor dat je je quotum overschrijdt.');
define('GD_FILE_TYPE_ERR', 'Indien je de GD image library gebruikt zijn alleen JPEG en PNG toegestaan.');
define('INVALID_IMAGE', 'De foto die je hebt geupload is corrupt of kan niet behandeld worden door de GD library.');
define('RESIZE_FAILED', 'Niet in staat de thumbnail of de afmetingen van de foto aan te passen.');
define('NO_IMG_TO_DISPLAY', 'Geen foto om te tonen.');
define('NON_EXIST_CAT', 'De geselecteerde categorie bestaat niet.');
define('ORPHAN_CAT', 'De categorie heeft een niet bestaande ouder, start de categorie manager om het probleem te herstellen.');
define('DIRECTORY_RO', 'Map \'%s\' is niet beschrijfbaar, foto kan niet verwijderd worden.');
define('NON_EXIST_COMMENT', 'Het geselecteerde commentaar is niet aanwezig.');
define('PIC_IN_INVALID_ALBUM', 'Foto is in een niet bestaand album (%s)!?');
define('BANNED', 'Je bent op dit moment uitgesloten van het gebruik van deze site.');
define('NOT_WITH_UDB', 'Deze functie is uitgeschakeld in Coppermine omdat het geïntegreerd is met forum software. Wat je tracht te doen is of niet ondersteund in deze configuratie, of de functie zal afgehandeld moeten worden door de forum software.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', 'Ga naar de album lijst');
define('ALB_LIST_LNK', 'Album lijst');
define('MY_GAL_TITLE', 'Ga naar mijn persoonlijke galerij');
define('MY_GAL_LNK', 'Mijn galerij');
define('MY_PROF_LNK', 'Mijn profiel');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Schakel naar admin-modus');
define('ADM_MODE_LNK', 'Admin-modus');
define('USR_MODE_TITLE', 'Schakel naar gebruiker-modus');
define('USR_MODE_LNK', 'Gebruiker-modus');
define('UPLOAD_PIC_TITLE', 'Upload van een foto in een album');
define('UPLOAD_PIC_LNK', 'Upload foto');
define('REGISTER_TITLE', 'Creëer een account');
define('REGISTER_LNK', 'Registreer');
define('LOGIN_LNK', 'Inloggen');
define('LOGOUT_LNK', 'Uitloggen');
define('LASTUP_LNK', 'Laatste upload');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Laatste commentaar');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Meest bekeken');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Best beoordeeld');
define('SEARCH_LNK', 'Zoek');
define('FAV_LNK', 'Mijn Favorieten');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Upload toestemming');
define('CONFIG_LNK', 'Instellingen');
define('ALBUMS_LNK', 'Albums');
define('CATEGORIES_LNK', 'Categorieën');
define('USERS_LNK', 'Gebruikers');
define('GROUPS_LNK', 'Groepen');
define('COMMENTS_LNK', 'Commentaren');
define('SEARCHNEW_LNK', 'Batch toevoegen foto\'s');
define('UTIL_LNK', 'Afmetingen aanpassen foto\'s');
define('BAN_LNK', 'Verban gebruiker');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Creëer/sorteer albums');
define('MODIFYALB_LNK', 'Wijzig mijn albums');
define('MY_PROF_LNK', 'Mijn profiel');

// lang_cat_list
define('CATEGORY', 'Categorie');
define('ALBUMS', 'Albums');
define('PICTURES', 'Foto\'s');

// lang_album_list
define('ALBUM_ON_PAGE', '%d album(s) op %d pagina(\'s)');

// lang_thumb_view
define('DATE', 'DATUM');
define('NAME', 'BESTANDSNAAM');
define('TITLE', 'TITEL');
define('SORT_DA', 'Sorteer op datum oplopend');
define('SORT_DD', 'Sorteer op datum aflopend');
define('SORT_NA', 'Sorteer op naam oplopend');
define('SORT_ND', 'Sorteer op naam aflopend');
define('SORT_TA', 'Sorteer op titel oplopend');
define('SORT_TD', 'Sorteer op titel aflopend');
define('PIC_ON_PAGE', '%d foto(\'s) op %d pagina(\'s)');
define('USER_ON_PAGE', '%d gebruiker(s) op %d pagina(\'s)');
define('SORT_RA', 'Sorteer op mening oplopend');
define('SORT_RD', 'Sorteer op mening aflopend');
define('RATING', 'MENING');
define('SORT_TITLE', 'Sorteer foto\'s op:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Terug naar de thumbnail pagina');
define('PIC_INFO_TITLE', 'Toon/verberg foto informatie');
define('SLIDESHOW_TITLE', 'Diashow');
define('SLIDESHOW_DISABLED', 'e-cards is gedeactiveerd');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'Stuur deze foto als een e-card');
define('ECARD_DISABLED', 'E-cards zijn uitgeschakeld');
define('ECARD_DISABLED_MSG', 'Je hebt geen toestemming een e-card te versturen');
define('PREV_TITLE', 'Bekijk voorgaande foto');
define('NEXT_TITLE', 'Bekijk volgende foto');
define('PIC_POS', 'Foto %s / %s');
define('NO_MORE_IMAGES', 'Er zijn niet meer plaatjes in deze gallerei');
define('NO_LESS_IMAGES', 'Dit is het plaatje in de gallerei');

// lang_rate_pic
define('RATE_THIS_PIC', 'Beoordeel deze foto ');
define('NO_VOTES', '(Nog geen stemmen)');
define('RATING', '(huidige beoordeling : %s / 5 met %s stemmen)');
define('RUBBISH', 'Rotzooi');
define('POOR', 'Zwak');
define('FAIR', 'Gemiddeld');
define('GOOD', 'Goed');
define('EXCELLENT', 'Zeer goed');
define('GREAT', 'Perfect');

// lang_cpg_die
define('INFORMATION', 'Informatie');
define('ERROR', 'Fout');
define('CRITICAL_ERROR', 'Kritieke fout');
define('FILE', 'Bestand: ');
define('LINE', 'Regel: ');

// lang_display_thumbnails
define('FILENAME', 'Bestandsnaam : ');
define('FILESIZE', 'Bestandsgrootte : ');
define('DIMENSIONS', 'Afmetingen : ');
define('DATE_ADDED', 'Datum toegevoegd : ');

// lang_get_pic_data
define('N_COMMENTS', '%s commentaren');
define('N_VIEWS', '%s x bekeken');
define('N_VOTES', '(%s stemmen)');

// lang_smilies_inc_php
define('EXCLAMATION', 'Uitroepteken');
define('QUESTION', 'Vraag');
define('VERY HAPPY', 'Zeer gelukkig');
define('SMILE', 'Glimlach');
define('SAD', 'Triest');
define('SURPRISED', 'Verbaasd');
define('SHOCKED', 'Geshockeerd');
define('CONFUSED', 'Verward');
define('COOL', 'Cool');
define('LAUGHING', 'Lachen');
define('MAD', 'Gek');
define('RAZZ', 'Razz');
define('EMBARASSED', 'Verlegen');
define('CRYING OR VERY SAD', 'Huilen of zeer triest');
define('EVIL OR VERY MAD', 'Slecht of zeer gek');
define('TWISTED EVIL', 'Twisted Evil');
define('ROLLING EYES', 'Rollende ogen');
define('WINK', 'Knipoog');
define('IDEA', 'Idee');
define('ARROW', 'Pijl');
define('NEUTRAL', 'Neutraal');
define('MR. GREEN', 'Mr. Green');

// lang_admin_php
define('LV_ADMIN', 'Verlaten admin-modus');
define('ENT_ADMIN', 'Admin-modus geactiveerd');

// lang_albmgr_php
define('ALB_NEED_NAME', 'Albums moeten een naam hebben !');
define('CONFIRM_MODIFS', 'Weet je zeker dat je deze wijzigingen wilt maken ?');
define('NO_CHANGE', 'Je hebt geen enkele wijziging gedaan !');
define('NEW_ALBUM', 'Nieuw album');
define('CONFIRM_DELETE1', 'Weet je het zeker dat je dit album wilt verwijderen ?');
define('CONFIRM_DELETE2', '\\nAlle foto\\\'s en commentaren zullen verloren gaan !');
define('SELECT_FIRST', 'Selecteer eerst een album.');
define('ALB_MRG', 'Album Manager');
define('MY_GALLERY', '* Mijn galerij *');
define('NO_CATEGORY', '* Geen categorie *');
define('DELETE', 'Verwijder');
define('NEW', 'Nieuw');
define('APPLY_MODIFS', 'Pas wijzigingen toe');
define('SELECT_CATEGORY', 'Selecteer categorie');

// lang_catmgr_php
define('MISS_PARAM', 'Vereiste parameters voor \'%s\'bewerking niet gegeven !');
define('UNKNOWN_CAT', 'Geselecteerde categorie bestaat niet in database');
define('USERGAL_CAT_RO', 'Gebruikergalerijen categorie kan niet verwijderd worden !');
define('MANAGE_CAT', 'Beheer categorieën');
define('CONFIRM_DELETE', 'Weet je het zeker dat je deze categorie wilt VERWIJDEREN');
define('CATEGORY', 'Categorie');
define('OPERATIONS', 'Bewerkingen');
define('MOVE_INTO', 'Verplaats naar');
define('UPDATE_CREATE', 'Aanpassen/Creëer categorie');
define('PARENT_CAT', 'Ouder categorie');
define('CAT_TITLE', 'Categorie titel');
define('CAT_DESC', 'Categorie omschrijving');

// lang_config_php
define('TITLE', 'Configuratie');
define('RESTORE_CFG', 'Herstel de fabrieksinstellingen');
define('SAVE_CFG', 'Bewaar nieuwe configuratie');
define('NOTES', 'Notitie');
define('INFO', 'Informatie');
define('UPD_SUCCESS', 'Coppermine configuratie is aangepast');
define('RESTORE_SUCCESS', 'Coppermine standaard configuratie is hersteld');
define('NAME_A', 'Naam oplopend');
define('NAME_D', 'Naam aflopend');
define('TITLE_A', 'Titel oploopend');
define('TITLE_D', 'Titel afloopend');
define('DATE_A', 'Datum oplopend');
define('DATE_D', 'Datum aflopend');
define('RATING_A', 'Mening oplopend');
define('RATING_D', 'Mening aflopend');
define('TH_ANY', 'Max verhouding');
define('TH_HT', 'Hoogte');
define('TH_WD', 'Breedte');

// lang_config_data
define('CONFIG_GENSET', 'Algemene instellingen');
define('GALLERY_NAME', 'galerij naam');
define('GALLERY_DESCRIPTION', 'galerij omschrijving');
define('GALLERY_ADMIN_EMAIL', 'E-mailadres van galerij-administrator');
define('ECARDS_MORE_PIC_TARGET', 'Adres naar nuke map vb http://www.mijnsite.tld/');
define('LANG', 'Taal');
define('CPGTHEME', 'Thema');
define('NICE_TITLES', 'Pagina Specifieke Titels ipv >Coppermine');
define('RIGHT_BLOCKS', 'Toon rechter blokken');
define('ALB_LIST_VIEW_TITLE', 'Uiterlijk albumlijst');
define('MAIN_TABLE_WIDTH', 'Breedte van de hoofd tabel (pixels of %)');
define('SUBCAT_LEVEL', 'Aantal te tonen categorie niveaus');
define('ALBUMS_PER_PAGE', 'Aantal te tonen albums');
define('ALBUM_LIST_COLS', 'Aantal kolommen voor de album lijst');
define('ALB_LIST_THUMB_SIZE', 'Grootte van de thumbnails in pixels');
define('MAIN_PAGE_LAYOUT', 'De inhoud van de hoofd pagina');
define('FIRST_LEVEL', 'Laat eerste niveau album thumbnails zien in categorieën');
define('THUMB_VIEW_TITLE', 'Uiterlijk thumbnail');
define('THUMBCOLS', 'Aantal kolommen op de thumbnail pagina');
define('THUMBROWS', 'Aantal regels op de thumbnail pagina');
define('MAX_TABS', 'Maximaal aantal te tonen tabs');
define('CAPTION_IN_THUMBVIEW', 'Toon foto beschrijving onder de thumbnails');
define('DISPLAY_COMMENT_COUNT', 'Toon aantal commentaren onder de thumbnail');
define('DEFAULT_SORT_ORDER', 'Standaard sorteer volgorde voor foto\'s');
define('MIN_VOTES_FOR_RATING', 'Minimum aantal stemmen op foto\'s voordat ze in de \'best-gewaardeerd\' lijst verschijnen');
define('SEO_ALTS', 'Alts en titel van thumbnail geven title en trefwoorden weer ipv picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'Uiterlijk foto &amp; Commentaar instellingen');
define('PICTURE_TABLE_WIDTH', 'Breedte van de tabel om foto\'s te tonen (pixels of %)');
define('DISPLAY_PIC_INFO', 'Foto informatie is standaard zichtbaar');
define('FILTER_BAD_WORDS', 'Filter slechte woorden in commentaren');
define('ENABLE_SMILIES', 'Sta emoticons toe in commentaren');
define('DISABLE_FLOOD_PROTECTION', 'Sta enkele opeenvolgende opmerkingen op een foto van de zelfde gebruiker toe');
define('COMMENT_EMAIL_NOTIFICATION', 'E-mail admin bij plaatsing opmerking');
define('MAX_IMG_DESC_LENGTH', 'Maximale lengte van fotobeschrijving');
define('MAX_COM_WLENGTH', 'Maximale aantal tekens in een woord');
define('MAX_COM_LINES', 'Maximale aantal regels in een commentaar');
define('MAX_COM_SIZE', 'Maximale lengte van commentaar');
define('DISPLAY_FILM_STRIP', 'Laat film strip zien');
define('MAX_FILM_STRIP_ITEMS', 'Aantal items in film strip');
define('ALLOW_ANON_FULLSIZE', 'Anonieme gebruiker mag volledige foto zien');
define('KEEP_VOTES_TIME', 'Aantal dagen waarna men weer mag stemmen op dezelfde foto');
define('PIC_THUMB_SETTING_TITLE', 'Foto en thumbnail instellingen');
define('JPEG_QUAL', 'Kwaliteit voor JPEG bestanden');
define('THUMB_WIDTH', 'Maximale breedte of hoogte van een thumbnail <b>*</b>');
define('THUMB_WIDTH', 'Maximale afmeting van een thumbnail <b>*</b>');
define('THUMB_USE', 'Gebruik afmeting  (breedte of hoogte verhouding van thumbnail) <b>*</b>');
define('MAKE_INTERMEDIATE', 'Creëer tussen foto\'s');
define('PICTURE_WIDTH', 'Maximale breedte of hoogte van tussen foto\'s <b>*</b>');
define('MAX_UPL_SIZE', 'Maximale grootte van upload foto\'s (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Maximale breedte en hoogte van upload foto\'s (pixels)');
define('50', 'Gebruiker instellingen');
define('ALLOW_USER_REGISTRATION', 'Laat nieuwe gebruiker registratie toe');
define('REG_REQUIRES_VALID_EMAIL', 'Gebruiker registratie vereist e-mail verificatie');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Laat toe dat twee gebruikers hetzelfde e-mail adres hebben');
define('ALLOW_PRIVATE_ALBUMS', 'Gebruikers kunnen privé albums hebben');
define('55', 'Eigen velden voor foto beschrijving (laat leeg indien niet gebruikt)');
define('USER_FIELD1_NAME', 'Naam Veld 1');
define('USER_FIELD2_NAME', 'Naam Veld 2');
define('USER_FIELD3_NAME', 'Naam Veld 3');
define('USER_FIELD4_NAME', 'Naam Veld 4');
define('60', 'foto\'s en thumbnails speciale instellingen');
define('SHOW_PRIVATE', 'Laat privé album icoon zien aan niet ingelogde gebruiker');
define('FORBIDEN_FNAME_CHAR', 'Verboden tekens in bestandsnamen');
define('ALLOWED_IMG_TYPES', 'Toegestane bestandstype (alleen geldig voor ImageMagick)');
define('ALLOWED_FILE_EXTENSIONS', 'Geaccepteerde bestandsextensies voor upload foto\'s');
define('THUMB_METHOD', 'Methode van aanpassen afmetingen van foto\'s');
define('IMPATH', 'Pad naar ImageMagick/netpbm \'convert\' utility (voorbeeld /usr/bin/X11/)');
define('IM_OPTIONS', 'Command line opties voor ImageMagick');
define('READ_EXIF_DATA', 'Lees EXIF data in JPEG bestanden');
define('READ_IPTC_DATA', 'Lees IPTC data in JPEG bestanden');
define('FULLPATH', 'De album map <b>*</b>');
define('USERPICS', 'De map voor gebruikers foto\'s <b>*</b>');
define('NORMAL_PFX', 'De prefix voor tussen foto\'s <b>*</b>');
define('THUMB_PFX', 'De prefix voor thumbnails <b>*</b>');
define('DEFAULT_DIR_MODE', 'Standaard modus voor mappen');
define('DEFAULT_FILE_MODE', 'Standaard modus voor foto\'s');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo toont bestandsnaam');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo toont albumnaam');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo toont bestandsgroote');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo toont dimensies');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo toont aantal x getoond');
define('PICINFO_DISPLAY_URL', 'Picinfo toont URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo toont URL als bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo toont fav album link');
define('84', 'Cookies &amp; Tekenset instellingen');
define('COOKIE_NAME', 'Naam van de cookie, gebruikt door het script');
define('COOKIE_PATH', 'Pad van de cookie, gebruikt door het script');
define('CHAR_SET', 'Teken encoding');
define('MISC_SETTING_TITLE', 'Overige instellingen');
define('DEBUG_MODE', 'Aanzetten debug-modus');
define('ADVANCED_DEBUG_MODE', 'Activeer geadvanceerde debug-modus');
define('SHOWUPDATE', 'Toon Coppermine Update Waarschuwing aan Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) velden gemarkeerd met * mogen niet veranderd worden als je al foto\'s in je galerij hebt</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Je moet je naam en commentaar ingeven.');
define('COM_ADDED', 'Commentaar toegevoegd.');
define('ALB_NEED_TITLE', 'Je moet een naam geven aan het album !');
define('NO_UDP_NEEDED', 'Geen aanpassing nodig.');
define('ALB_UPDATED', 'Album aangepast.');
define('UNKNOWN_ALBUM', 'Geselecteerde album bestaat niet of je hebt geen toestemming naar dit album te uploaden.');
define('NO_PIC_UPLOADED', 'Er is geen foto geupload !<br /><br />Indien je echt een foto geselecteerd hebt om te uploaden, controleer of de server bestands upload toestaat...');
define('ERR_MKDIR', 'Creëeren van map %s niet gelukt !');
define('DEST_DIR_RO', 'Doel map %s is niet beschrijfbaar door het script !');
define('ERR_MOVE', 'Onmogelijk %s te verplaatsen naar %s !');
define('ERR_FSIZE_TOO_LARGE', 'De door jou opgeladen foto is te groot (maximum toegelaten is %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Het door jou opgeladen bestand is te groot (maximum toegestaan is %s KB) !');
define('ERR_INVALID_IMG', 'Het bestand dat je opgeladen hebt is geen geldig fotobestand !');
define('ALLOWED_IMG_TYPES', 'Je kan aleen %s foto\'s uploaden.');
define('ERR_INSERT_PIC', 'De foto \'%s\' kan niet ingevoegd worden in het album.');
define('UPLOAD_SUCCESS', 'Je foto is succesvol geladen<br /><br />Het wordt zichtbaar als de admin het goedgekeurd heeft.');
define('INFO', 'Informatie');
define('ERR_COMMENT_EMPTY', 'Je commentaar is leeg !');
define('ERR_INVALID_FEXT', 'Alleen bestanden met de volgende extentie worden geaccepteerd : <br /><br />%s.');
define('NO_FLOOD', 'Sorry maar je bent de auteur van het laatste geposte commentaar voor deze foto<br /><br />Wijzig het commentaar dat je toegevoegd hebt');
define('REDIRECT_MSG', 'je wordt doorgestuurd.<br /><br /><br />Klik \'Doorgaan\' indien de pagina niet automatisch ververst wordt');
define('UPL_SUCCESS', 'Je foto is succesvol toegevoegd.');

// lang_delete_php
define('CAPTION', 'Koptekst');
define('FS_PIC', 'full size foto');
define('DEL_SUCCESS', 'succesvol verwijderd');
define('NS_PIC', 'normale grootte foto');
define('ERR_DEL', 'kan niet verwijderd worden');
define('THUMB_PIC', 'thumbnail');
define('COMMENT', 'commentaar');
define('IM_IN_ALB', 'foto in album');
define('ALB_DEL_SUCCESS', 'Album \'%s\' verwijderd');
define('ALB_MGR', 'Album Manager');
define('ERR_INVALID_DATA', 'Ongeldige data ontvangen in \'%s\'');
define('CREATE_ALB', 'creëren album \'%s\'');
define('UPDATE_ALB', 'Aanpassen album \'%s\' met titel \'%s\' en index \'%s\'');
define('DEL_PIC', 'Verwijder foto');
define('DEL_ALB', 'Verwijder album');
define('DEL_USER', 'Verwijder gebruiker');
define('ERR_UNKNOWN_USER', 'De geselecteerde gebruiker bestaat niet !');
define('COMMENT_DELETED', 'Commentaar succesvol verwijderd');

// lang_display_image_php
define('CONFIRM_DEL', 'Weet je het zeker dat je deze foto wilt VERWIJDEREN ? \\nCommentaar wordt ook verwijderd.');
define('DEL_PIC', 'VERWIJDER FOTO');
define('SIZE', '%s x %s pixels');
define('VIEWS', '%s keer');
define('SLIDESHOW', 'Diashow');
define('STOP_SLIDESHOW', 'STOP DIASHOW');
define('VIEW_FS', 'Klik om de fullsize foto te bekijken');
define('EDIT_PIC', 'BEWERK FOTO');

// lang_picinfo
define('TITLE', 'Foto informatie');
define('FILENAME', 'Bestandsnaam');
define('ALBUM NAME', 'Albumnaam');
define('RATING', 'Waardering (%s stemmen)');
define('KEYWORDS', 'Sleutelwoorden');
define('FILE SIZE', 'Bestandsgrootte');
define('DIMENSIONS', 'Afmetingen');
define('DISPLAYED', 'Getoond');
define('CAMERA', 'Camera');
define('DATE TAKEN', 'Opnamedatum');
define('APERTURE', 'Opening');
define('EXPOSURE TIME', 'Sluitertijd');
define('FOCAL LENGTH', 'Brandpuntsafstand');
define('COMMENT', 'Commentaar');
define('ADDFAV', 'Voeg toe aan Favorieten');
define('ADDFAVPHRASE', 'Favoriet');
define('REMFAV', 'Verwijder uit Favorieten');
define('IPTCTITLE', 'IPTC Titel');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Trefwoorden');
define('IPTCCATEGORY', 'IPTC Categorie');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categorieën');
define('BOOKMARK_PAGE', 'Bookmark Plaatje');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'Wijzig dit commentaar.');
define('CONFIRM_DELETE', 'Weet je het zeker dat je dit commentaar wilt verwijderen ?');
define('ADD_YOUR_COMMENT', 'Voeg je commentaar toe.');
define('NAME', 'Naam');
define('COMMENT', 'Commentaar');
define('YOUR_NAME', 'Je naam');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Klik op de foto om dit window te sluiten');

// lang_ecard_php
define('TITLE', 'Stuur een e-card');
define('INVALID_EMAIL', '<b>Waarschuwing</b> : ongeldig e-mail adres !');
define('ECARD_TITLE', 'Een e-card van %s voor jou.');
define('VIEW_ECARD', 'Indien de e-card niet juist getoond wordt, klik dan op deze link.');
define('VIEW_MORE_PICS', 'Klik op deze link om meer foto\'s te bekijken !');
define('SEND_SUCCESS', 'Je e-card is verzonden.');
define('SEND_FAILED', 'Sorry, maar de server kan je e-card niet verzenden...');
define('FROM', 'Van');
define('YOUR_NAME', 'Jouw naam');
define('YOUR_EMAIL', 'Jouw e-mail adres');
define('TO', 'Aan');
define('RCPT_NAME', 'Naam geadresseerde');
define('RCPT_EMAIL', 'E-mail adres geadresseerde');
define('GREETINGS', 'Groeten');
define('MESSAGE', 'Bericht');

// lang_editpics_php
define('PIC_INFO', 'Foto&nbsp;info');
define('ALBUM', 'Album');
define('TITLE', 'Titel');
define('DESC', 'Beschrijving');
define('KEYWORDS', 'Sleutelwoorden');
define('PIC_INFO_STR', '%s&times;%s - %sKB - %s bekeken - %s stemmen');
define('APPROVE', 'Laat foto toe');
define('POSTPONE_APP', 'Stel toelating uit');
define('DEL_PIC', 'Verwijder foto');
define('RESET_VIEW_COUNT', 'Reset bekeken teller');
define('RESET_VOTES', 'Reset stemmen');
define('DEL_COMM', 'verwijder commentaar');
define('UPL_APPROVAL', 'Upload toestemming');
define('EDIT_PICS', 'Wijzig foto\'s');
define('SEE_NEXT', 'Bekijk volgende foto\'s');
define('SEE_PREV', 'Bekijk vorige foto\'s');
define('N_PIC', '%s foto\'s');
define('N_OF_PIC_TO_DISP', 'Aantal te tonen foto\'s');
define('APPLY', 'Pas wijzigingen toe');

// lang_groupmgr_php
define('GROUP_NAME', 'Groepsnaam');
define('DISK_QUOTA', 'Diskquotum');
define('CAN_RATE', 'Kan foto\'s beoordelen ');
define('CAN_SEND_ECARDS', 'Kan e-cards zenden');
define('CAN_POST_COM', 'Kan commentaar posten');
define('CAN_UPLOAD', 'Kan foto\'s uploaden');
define('CAN_HAVE_GALLERY', 'Kan een persoonlijke galerij hebben');
define('APPLY', 'Pas wijzigingen toe');
define('CREATE_NEW_GROUP', 'Creëer nieuwe groep');
define('DEL_GROUPS', 'Verwijder geselecteerde groep(en)');
define('CONFIRM_DEL', 'Waarschuwing, indien je een groep verwijderd, kunnen gebruikers die behoorden tot deze groep niet meer inloggen !\\n\\nWil je doorgaan ?');
define('TITLE', 'Beheer gebruikersgroepen');
define('APPROVAL_1', 'Pub. Upl. toestemming (1)');
define('APPROVAL_2', 'Priv. Upl. toestemming (2)');
define('NOTE1', '<b>(1)</b> upload in een publiek album benodigd toesteming van de admin');
define('NOTE2', '<b>(2)</b> upload in een album welke behoort aan een gebruiker benodigd toestemming van de admin');
define('NOTES', 'Notities');

// lang_index_php
define('WELCOME', 'Welkom !');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Weet je het zeker dat je dit album wilt VERWIJDEREN ? \\nAlle foto\\\'s en commentaren worden ook verwijderd.');
define('DELETE', 'Verwijder');
define('MODIFY', 'Eigenschappen');
define('EDIT_PICS', 'Wijzig foto\'s');

// lang_list_categories
define('HOME', 'Home');
define('STAT1', '<b>[pictures]</b> foto\'s in <b>[albums]</b> albums en <b>[cat]</b> categorieën met <b>[comments]</b> commentaren en <b>[views]</b> keer bekeken');
define('STAT2', '<b>[pictures]</b> foto\'s in <b>[albums]</b> albums en <b>[views]</b> keer bekeken');
define('XX_S_GALLERY', '%s\'s Galerij');
define('STAT3', '<b>[pictures]</b> foto\'s in <b>[albums]</b> albums met <b>[comments]</b> commentaren en <b>[views]</b> keer bekeken');

// lang_list_users
define('USER_LIST', 'Gebruikers lijst');
define('NO_USER_GAL', 'Er zijn geen gebruikers die toestemming hebben om albums te hebben.');
define('N_ALBUMS', '%s album(s)');
define('N_PICS', '%s foto(\'s)');

// lang_list_albums
define('N_PICTURES', '%s foto\'s');
define('LAST_ADDED', ', laatste toegevoegd op %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Pas album %s aan');
define('GENERAL_SETTINGS', 'Algemene instellingen');
define('ALB_TITLE', 'Album titel');
define('ALB_CAT', 'Album categorie');
define('ALB_DESC', 'Album omschrijving');
define('ALB_THUMB', 'Album thumbnail');
define('ALB_PERM', 'Permissies voor dit album');
define('CAN_VIEW', 'Album kan bekeken worden door');
define('CAN_UPLOAD', 'Bezoekers kunnen foto\'s uploaden');
define('CAN_POST_COMMENTS', 'Bezoekers kunnen commentaar posten');
define('CAN_RATE', 'Gebruiker kan foto\'s beoordelen');
define('USER_GAL', 'Gebruiker galerij');
define('NO_CAT', '* geen categorie *');
define('ALB_EMPTY', 'Album is leeg');
define('LAST_UPLOADED', 'Laatste upload');
define('PUBLIC_ALB', 'Iedereen (publiek album)');
define('ME_ONLY', 'Alleen ik');
define('OWNER_ONLY', 'Alleen albumeigenaar (%s)');
define('GROUPP_ONLY', 'Leden van de \'%s\' groep');
define('ERR_NO_ALB_TO_MODIFY', 'Geen album die jij kan aanpassen in de database.');
define('UPDATE', 'Pas album aan');

// lang_rate_pic_php
define('ALREADY_RATED', 'Sorry, maar je hebt deze foto al beoordeeld');
define('RATE_OK', 'Je stem is geaccepteerd');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'De beheerder van {SITE_NAME} zal proberen elk aanstootgevend materiaal zo snel als mogelijk te verwijderen. Het is echter onmogelijk elk materiaal te bekijken. Daarom ga je akkoord dat alle postings die op deze site gemaakt worden de gezichtspunten en opinies zijn van de auteur en niet van de beheerder of webmaster (behalve hun eigen postings) en deze zullen daarom niet aansprakelijk gesteld worden.<br />
<br />
Je gaat er mee akkoord geen aanstootgevende, obscene, vulgaire, hatelijke, bedreigende, sexueel-getinte of elk ander materiaal dat elke van toepassing zijnde wet overtreedt, op deze site te plaatsen. Je gaat er mee akkoord dat de webmaster, beheerder en  moderators van {SITE_NAME} het recht hebben elke inhoud te verwijderen en of te wijzigen wanneer zij dat nodig vinden. Als gebruiker ga je er mee akkoord dat alle data die je hebt verstrekt in een database worden bewaard. Terwijl deze informatie niet openbaar gemaakt wordt aan een derde partij zonder jouw toestemming, ga je akkoord met het feit dat de webmaster en de beheerder niet verantwoordelijk gehouden kunnen worden voor elke hack poging, dat kan lijden tot het openbaar worden van de database.<br />
<br />
Deze site gebruikt cookies om informatie te bewaren op je lokale computer. Deze cookies dienen er voor jouw kijk plezier te verhogen. Het e-mail adres wordt alleen gebruikt om jouw registratie details en wachtwoord te bevestigen.<br />
<br />
Door op \'Ik ga akkoord\' hieronder te klikken , ga je akkoord dat je gebonden bent aan deze condities.');

// lang_register_php
define('PAGE_TITLE', 'Gebruiker registratie');
define('TERM_COND', 'Voorwaarde en condities');
define('I_AGREE', 'Ik ga akkoord');
define('SUBMIT', 'Zend registratie');
define('ERR_USER_EXISTS', 'De gebruikersnaam die je ingevoerd hebt bestaat reeds, kies ajb een andere');
define('ERR_PASSWORD_MISMATCH', 'De twee wachtwoorden zijn niet gelijk, geef ze ajb nogmaals in');
define('ERR_UNAME_SHORT', 'Gebruikersnaam moet minimaal 2 tekens lang zijn');
define('ERR_PASSWORD_SHORT', 'Wachtwoord moet minimaal 2 tekens lang zijn');
define('ERR_UNAME_PASS_DIFF', 'Gebruikersnaam en wachtwoord moeten verschillend zijn');
define('ERR_INVALID_EMAIL', 'E-mail adres is ongeldig');
define('ERR_DUPLICATE_EMAIL', 'Een andere gebruiker heeft zich reeds geregistreerd met dit e-mail adres');
define('ENTER_INFO', 'Voer registratie informatie in ');
define('REQUIRED_INFO', 'Verplichte informatie');
define('OPTIONAL_INFO', 'Niet verplichte informatie');
define('USERNAME', 'Gebruikersnaam');
define('PASSWORD', 'Wachtwoord');
define('PASSWORD_AGAIN', 'Nogmaals wachtwoord');
define('EMAIL', 'E-mail');
define('LOCATION', 'Locatie');
define('INTERESTS', 'Interesse');
define('WEBSITE', 'Home page');
define('OCCUPATION', 'Beroep');
define('ERROR', 'FOUT');
define('CONFIRM_EMAIL_SUBJECT', '%s - Registratie bevestiging');
define('INFORMATION', 'Informatie');
define('FAILED_SENDING_EMAIL', 'De registratie bevestiging kan niet verzonden worden !');
define('THANK_YOU', 'Dank je voor het registreren.<br /><br />Een e-mail met informatie over hoe je account te activeren is verzonden naar het adres dat je opgegeven hebt.');
define('ACCT_CREATED', 'Je account is gecreëerd en je kan nu inloggen met je gebruikersnaam en wachtwoord');
define('ACCT_ACTIVE', 'Je account is nu actief en je kan inloggen met je gebruikersnaam en wachtwoord');
define('ACCT_ALREADY_ACT', 'Je account is al actief !');
define('ACCT_ACT_FAILED', 'Dit account kan niet geactiveerd worden !');
define('ERR_UNK_USER', 'Geselecteerde gebruiker bestaat niet !');
define('X_S_PROFILE', '%s\'s profiel');
define('GROUP', 'Groep');
define('REG_DATE', 'Aangemeld');
define('DISK_USAGE', 'Disk gebruik');
define('CHANGE_PASS', 'Verander mijn wachtwoord');
define('CURRENT_PASS', 'Huidig wachtwoord');
define('NEW_PASS', 'Nieuw wachtwoord');
define('NEW_PASS_AGAIN', 'Nieuw wachtwoord opnieuw');
define('ERR_CURR_PASS', 'Huidige wachtwoord is onjuist');
define('APPLY_MODIF', 'Pas wijziging toe');
define('UPDATE_SUCCESS', 'Je profiel is aangepast');
define('PASS_CHG_SUCCESS', 'Je wachtwoord is aangepast');
define('PASS_CHG_ERROR', 'Je wachtwoord is niet aangepast');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Dank je voor het registreren bij {SITE_NAME}

Je gebruikersnaam is : "{USER_NAME}"
je wachtwoord    : "{PASSWORD}"

Om je account te kunnen activeren moet je op de link hier onder klikken
of knip en plak het in je web browser.

{ACT_LINK}

Hartelijke groeten,

De beheerder van {SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', 'Beoordeel commentaar');
define('NO_COMMENT', 'Er is geen commentaar te beoordelen');
define('N_COMM_DEL', '%s commentaren verwijderd');
define('N_COMM_DISP', 'Aantal te tonen commentaren');
define('SEE_PREV', 'Bekijk voorgaande');
define('SEE_NEXT', 'Bekijk volgende');
define('DEL_COMM', 'Verwijder geselecteerde commentaar');

// lang_search_php
define('SEARCH', 'Doorzoek de foto collectie');

// lang_search_new_php
define('PAGE_TITLE', 'Zoek nieuwe foto\'s');
define('SELECT_DIR', 'Selecteer map');
define('SELECT_DIR_MSG', 'Deze funktie stelt je in staat een aantal foto\'s gelijktijdig naar je server te uploaden d.m.v. FTP.<br /><br />Selecteer de map waar je de foto\'s naar hebt opgeladen');
define('NO_PIC_TO_ADD', 'Er is geen foto om toe te voegen');
define('NEED_ONE_ALBUM', 'Je hebt minimaal een album nodig om deze funktie te gebruiken');
define('WARNING', 'Waarschuwing');
define('CHANGE_PERM', 'Het script kan niet schrijven in deze map, je moet zijn mode veranderen naar 755 of 777 voordat je probeert een foto toe te voegen !');
define('TARGET_ALBUM', '<b>Plaats foto\'s van &quot;</b>%s<b>&quot; in </b>%s');
define('FOLDER', 'Folder');
define('IMAGE', 'Foto');
define('ALBUM', 'Album');
define('RESULT', 'Resultaat');
define('DIR_RO', 'Niet beschrijfbaar. ');
define('DIR_CANT_READ', 'Niet leesbaar. ');
define('INSERT', 'Toevoegen van nieuwe foto\'s aan galerij');
define('LIST_NEW_PIC', 'Lijst van nieuwe foto\'s');
define('INSERT_SELECTED', 'Invoegen van geselecteerde foto\'s');
define('NO_PIC_FOUND', 'Er zijn GEEN foto\'s gevonden');
define('BE_PATIENT', 'Heb geduld, het script heeft tijd nodig om de foto\'s toe te voegen');
define('NOTES', '<ul><li><b>OK</b> : betekent dat de foto succesvol toegevoegd is<li><b>DP</b> : betekent dat de foto dubbel is en zich reeds in de database bevindt<li><b>PB</b> : betekent dat de foto niet toegevoegd kon worden, controleer je configuratie en de permissies op mappen waar de foto\'s zich bevinden<li>Als de OK, DP, PB \'tekens\' niet verschijnen klik dan op de verbroken foto om te kijken of er een PHP fout bericht gegeven wordt<li>Indien je browser uittimed klik dan op de herlaad knop</ul>');

// lang_upload_php
define('TITLE', 'Upload foto');
define('MAX_FSIZE', 'Maximaal toegestane bestandsgrootte is %s KB');
define('ALBUM', 'Album');
define('PICTURE', 'Foto');
define('PIC_TITLE', 'Foto titel');
define('DESCRIPTION', 'Foto omschrijving');
define('KEYWORDS', 'Sleutelwoorden (scheiden met spaties)');
define('ERR_NO_ALB_UPLOADABLES', 'Sorry er is geen album waar het je toegestaan is foto\'s naar te uploaden');

// lang_usermgr_php
define('TITLE', 'Gebruikers beheer');
define('NAME_A', 'Naam oplopend');
define('NAME_D', 'Naam aflopend');
define('GROUP_A', 'Groep oplopend');
define('GROUP_D', 'Groep aflopend');
define('REG_A', 'Registratie datum oplopend');
define('REG_D', 'Registratie datum aflopend');
define('PIC_A', 'Aantal foto\'s oplopend');
define('PIC_D', 'Aantal foto\'s aflopend');
define('DISKU_A', 'Disk gebruik oplopend');
define('DISKU_D', 'Disk gebruik aflopend');
define('SORT_BY', 'Sorteer gebruikers op');
define('ERR_NO_USERS', 'Gebruikers tabel is leeg !');
define('ERR_EDIT_SELF', 'Je kan je eigen profiel niet wijzigen, gebruik daarvoor de \'Mijn profiel\' link');
define('EDIT', 'Wijzig');
define('DELETE', 'Verwijder');
define('NAME', 'Gebruikersnaam');
define('GROUP', 'Groep');
define('INACTIVE', 'Inactief');
define('OPERATIONS', 'Bewerkingen');
define('PICTURES', 'Foto\'s');
define('DISK_SPACE', 'Disk ruimte');
define('REGISTERED_ON', 'Geregistreerd op');
define('U_USER_ON_P_PAGES', '%d gebruikers op %d pagina(s)');
define('CONFIRM_DEL', 'Weet je het zeker dat je deze gebruiker wilt VERWIJDEREN ? \\nAl zijn foto\\\'s en albums worden ook verwijderd.');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'Geselecteerde gebruiker bestaat niet !');
define('MODIFY_USER', 'Wijzig gebruiker');
define('NOTES', 'Notities');
define('NOTE_LIST', '<li>Als je niet je huidige wachtwoord wilt wijzigen, laat dan het \"wachtwoord\" veld leeg');
define('PASSWORD', 'Wachtwoord');
define('USER_ACTIVE', 'Gebruiker is actief');
define('USER_GROUP', 'Gebruiker groep');
define('USER_EMAIL', 'Gebruiker e-mail');
define('USER_WEB_SITE', 'Gebruiker website');
define('CREATE_NEW_USER', 'Creëer nieuwe gebruiker');
define('USER_LOC', 'Gebruiker locatie');
define('USER_INTERESTS', 'Gebruiker interesse');
define('USER_OCC', 'Gebruiker beroep');

// lang_util_php
define('TITLE', 'Aanpassen afmetingen foto\'s');
define('WHAT_IT_DOES', 'Wat doet deze tool');
define('WHAT_UPDATE_TITLES', 'Creëert titels uit bestandsnamen');
define('WHAT_DELETE_TITLE', 'Verwijdert titels');
define('WHAT_REBUILD', 'Herbouwt thumbnails en past afmetingen aan van foto\'s');
define('WHAT_DELETE_ORIGINALS', 'Verwijdert de originele foto\'s en vervangt deze met de aangepaste afmetingen versie');
define('FILE', 'Bestand');
define('TITLE_SET_TO', 'titel aangepast naar');
define('SUBMIT_FORM', 'Doorvoeren');
define('UPDATED_SUCCESFULLY', 'aanpassing succesvol');
define('ERROR_CREATE', 'FOUT bij aanmaken');
define('CONTINUE', 'Verwerk meer foto\'s');
define('MAIN_SUCCESS', 'Het bestand %s is succesvol gebruikt als hoofd foto');
define('ERROR_RENAME', 'Fout bij hernoemen van %s naar %s');
define('ERROR_NOT_FOUND', 'Het bestand %s is niet gevonden');
define('BACK', 'terug naar begin');
define('THUMBS_WAIT', 'Aanpassen van thumbnails en/of afmetingen van foto\'s, even geduld...');
define('THUMBS_CONTINUE_WAIT', 'Doorgaan met aanpassen van thumbnails en/of afmetingen van foto\'s...');
define('TITLES_WAIT', 'Aanpassen titels, even geduld...');
define('DELETE_WAIT', 'Verwijderen titels, even geduld...');
define('REPLACE_WAIT', 'Verwijderen van originele en vervangen door aangepaste afmetingen van foto\'s, even geduld..');
define('INSTRUCTION', 'Snelle instructies');
define('INSTRUCTION_ACTION', 'Selecteer actie');
define('INSTRUCTION_PARAMETER', 'Zet parameters');
define('INSTRUCTION_ALBUM', 'Selecteer album');
define('INSTRUCTION_PRESS', 'Klik %s');
define('UPDATE', 'Aanpassen thumbs en/of afmetingen foto\'s');
define('UPDATE_WHAT', 'Wat moet er aangepast worden');
define('UPDATE_THUMB', 'Alleen thumbnails');
define('UPDATE_PIC', 'Alleen aangepaste foto\'s');
define('UPDATE_BOTH', 'Zowel thumbnails als aangepaste foto\'s');
define('UPDATE_NUMBER', 'Aantal verwerkte foto\'s per klik');
define('UPDATE_OPTION', '(Probeer deze instelling lager te zetten indien je timeout problemen ervaart)');
define('FILENAME_TITLE', 'Bestandsnaam &rArr; Foto titel');
define('FILENAME_HOW', 'Hoe moet de bestandsnaam aangepast worden');
define('FILENAME_REMOVE', 'Verwijder de .jpg uitgang en vervang _ (underscore) met spaties');
define('FILENAME_EURO', 'Verander 2003_11_23_13_20_20.jpg naar 23/11/2003 13:20');
define('FILENAME_US', 'Verander 2003_11_23_13_20_20.jpg naar 11/23/2003 13:20');
define('FILENAME_TIME', 'Verander 2003_11_23_13_20_20.jpg naar 13:20');
define('DELETE', 'Verwijder foto titel of originele grootte van foto\'s');
define('DELETE_TITLE', 'Verwijder foto titel');
define('DELETE_ORIGINAL', 'Verwijder originele foto\'s');
define('DELETE_REPLACE', 'Verwijder de originele foto\'s en vervang deze door de in afmeting aangepast versies');
define('SELECT_ALBUM', 'Selecteer album');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>