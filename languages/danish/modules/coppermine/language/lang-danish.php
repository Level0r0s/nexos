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
/*   $Id: lang-danish.php,v 1.1 2004/08/02 02:00:50 akamu Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Danish');
define('LANG_NAME_NATIVE', 'Dansk');
define('LANG_COUNTRY_CODE', 'dk');
define('TRANS_NAME', 'Laugesen');
define('TRANS_EMAIL', 'laugesen@tommerup.net');
define('TRANS_WEBSITE', 'http://www.tommerup.net');
define('TRANS_NAME2', 'David Holm');
define('TRANS_EMAIL2', 'wormie@alberg.dk');
define('TRANS_DATE', '2003-10-07');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'iso-8859-1');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'Ja');
define('NO', 'Nej');

// some common strings
define('BACK', 'TILBAGE');
define('CONTINUE', 'FORTSÆT');
define('INFO', 'Information');
define('ERROR', 'Fejl');

//// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
define('ALBUM_DATE_FMT', '%d. %B, %Y');
define('LASTCOM_DATE_FMT', '%d/%b/%y kl. %H:%M');
define('LASTUP_DATE_FMT', '%d. %B, %Y');
define('REGISTER_DATE_FMT', '%d. %B, %Y');
define('LASTHIT_DATE_FMT', '%d. %B, %Y kl. %R');
define('COMMENT_DATE_FMT', '%d. %B, %Y kl. %R');

// short names for Byte, Kilo, Mega
$lang_byte_units = array('Byte','KB','MB',);

// Day of week
$lang_day_of_week = array('Søn','Man','Tir','Ons','Tor','Fre','Lør',);
// Day of the month
$lang_month = array('Jan','Feb','Mar','Apr','Maj','Jun','Jul','Aug','Sep','Okt','Nov','Dec',);
// For the word censor
$lang_bad_words = array('*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*',);
// lang_meta_album_names
define('RANDOM', 'Tilfældige billeder');
define('LASTUP', 'Nyeste billeder');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Sidst opdaterede albums');
define('LASTCOM', 'Nyeste kommentarer');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Mest viste');
define('TOPRATED', 'Mest populære');
define('LASTHITS', 'Sidst viste');
define('SEARCH', 'Søge resultat');
define('FAVPICS', 'Foretrukne billeder');

// lang_errors
define('ACCESS_DENIED', 'Du har ikke tilladelse til at se denne side.');
define('PERM_DENIED', 'Du har ikke tilladelse til at udføre denne handling.');
define('PARAM_MISSING', 'Script kaldt uden de nødvendige parametre(r).');
define('NON_EXIST_AP', 'Det valgte album/billede eksister ikke !');
define('QUOTA_EXCEEDED', 'Disk mængden overskredet<br /><br />Du har plads til en [quota]K, Dine billeder bruger aktuelt [space]K, tilføjelse af dette billede medfører en overskridelse af din tilladte mængde.');
define('GD_FILE_TYPE_ERR', 'Når der anvendes GD billedeteknink, er tilladte typer kun JPEG og PNG.');
define('INVALID_IMAGE', 'Billedet som du har uploadet er defekt eller kan ikke bruges med GD billedeteknik');
define('RESIZE_FAILED', 'Ej muligt at oprette minibillede eller mellem stort billede.');
define('NO_IMG_TO_DISPLAY', 'Intet billede at vise');
define('NON_EXIST_CAT', 'Den valgte kategori findes ikke');
define('ORPHAN_CAT', 'En kategori har ikke et tilhørsforhold, kør kategori manager for at rette problemet.');
define('DIRECTORY_RO', 'Mappen \'%s\' er skrivebeskyttet, billeder kan ikke slettes');
define('NON_EXIST_COMMENT', 'Den valgte kommentar findes ikke.');
define('PIC_IN_INVALID_ALBUM', 'Billede er i et ikke eksisterende album (%s)!?');
define('BANNED', 'Din adgang til denne side er spærret.');
define('NOT_WITH_UDB', 'Denne funktion er deaktiveret i Coppermine da den er integreret med forum software. Enten er det du ønsker at gøre ikke understøttet i denne opsætning eller også skal det gøres vha. forum software.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', 'Gå til albumlisten');
define('ALB_LIST_LNK', 'Albumliste');
define('MY_GAL_TITLE', 'Gå til personligt galleri');
define('MY_GAL_LNK', 'Mit galleri');
define('MY_PROF_LNK', 'Min profil');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Skift til admin mode');
define('ADM_MODE_LNK', 'Admin mode');
define('USR_MODE_TITLE', 'Skift til bruger mode');
define('USR_MODE_LNK', 'Bruger mode');
define('UPLOAD_PIC_TITLE', 'Upload et billede til album');
define('UPLOAD_PIC_LNK', 'Upload billede');
define('REGISTER_TITLE', 'Opret en konto');
define('REGISTER_LNK', 'Registrer');
define('LOGIN_LNK', 'Log ind');
define('LOGOUT_LNK', 'Log ud');
define('LASTUP_LNK', 'Nyeste uploads');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Nyeste kommentar');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Mest viste');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Top karakter');
define('SEARCH_LNK', 'Søg');
define('FAV_LNK', 'Foretrukne');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Upload til godkendelse');
define('CONFIG_LNK', 'Opsætning');
define('ALBUMS_LNK', 'Album');
define('CATEGORIES_LNK', 'Kategorier');
define('USERS_LNK', 'Bruger');
define('GROUPS_LNK', 'Grupper');
define('COMMENTS_LNK', 'Kommentarer');
define('SEARCHNEW_LNK', 'Masse tilføj billede');
define('UTIL_LNK', 'Ændre billedstørrelse');
define('BAN_LNK', 'Bloker brugere');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Opret / ordne albums');
define('MODIFYALB_LNK', 'Ret i mit album');
define('MY_PROF_LNK', 'Min profil');

// lang_cat_list
define('CATEGORY', 'Kategori');
define('ALBUMS', 'Album');
define('PICTURES', 'Billeder');

// lang_album_list
define('ALBUM_ON_PAGE', '%d album på %d side(r)');

// lang_thumb_view
define('DATE', 'DATO');
define('NAME', 'FILNAVN');
define('TITLE', 'TITEL');
define('SORT_DA', 'Sorter stigende efter dato');
define('SORT_DD', 'Sorter faldende efter dato');
define('SORT_NA', 'Sorter stigende efter navn');
define('SORT_ND', 'Sorter faldende efter navn');
define('SORT_TA', 'Sorter stigende efter titel');
define('SORT_TD', 'Sorter faldende efter titel');
define('PIC_ON_PAGE', '%d billeder på %d side(r)');
define('USER_ON_PAGE', '%d brugere på %d side(r)');
define('SORT_RA', 'Sort by rating ascending');
define('SORT_RD', 'Sort by rating descending');
define('RATING', 'RATING');
define('SORT_TITLE', 'Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Retur til oversigt');
define('PIC_INFO_TITLE', 'Vis/skjul billede information');
define('SLIDESHOW_TITLE', 'Slideshow');
define('SLIDESHOW_DISABLED', 'e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'Send dette billede som et e-postkort');
define('ECARD_DISABLED', 'E-postkort er slået fra');
define('ECARD_DISABLED_MSG', 'Du har ikke tilladelse til at sende e-postkort');
define('PREV_TITLE', 'Se forrige billede');
define('NEXT_TITLE', 'Se næste billede');
define('PIC_POS', 'BILLEDE %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', 'Bedøm dette billede ');
define('NO_VOTES', '(Ej bedømt endnu)');
define('RATING', '(Aktuel karakter: %s / 5 med %s stemmer)');
define('RUBBISH', 'Dårligt');
define('POOR', 'Ringe');
define('FAIR', 'Rimeligt');
define('GOOD', 'Godt');
define('EXCELLENT', 'Rigtig godt');
define('GREAT', 'Fantastisk');

// lang_cpg_die
define('INFORMATION', 'Information');
define('ERROR', 'Fejl');
define('CRITICAL_ERROR', 'Kritisk fejl');
define('FILE', 'Fil: ');
define('LINE', 'Linje: ');

// lang_display_thumbnails
define('FILENAME', 'Filnavn : ');
define('FILESIZE', 'Filstørrelse : ');
define('DIMENSIONS', 'Dimensioner : ');
define('DATE_ADDED', 'Tilføjet dato : ');

// lang_get_pic_data
define('N_COMMENTS', '%s kommentarer');
define('N_VIEWS', '%s visninger');
define('N_VOTES', '(%s stemmer)');

// lang_smilies_inc_php
define('EXCLAMATION', 'Udråb');
define('QUESTION', 'Spørgsmål');
define('VERY HAPPY', 'Meget glad');
define('SMILE', 'Smil');
define('SAD', 'Trist');
define('SURPRISED', 'Overrasket');
define('SHOCKED', 'Chokeret');
define('CONFUSED', 'Forvirret');
define('COOL', 'Sejt');
define('LAUGHING', 'Griner');
define('MAD', 'Sur');
define('RAZZ', 'Drille');
define('EMBARASSED', 'Genert');
define('CRYING OR VERY SAD', 'Græder eller meget trist');
define('EVIL OR VERY MAD', 'Ond eller meget sur');
define('TWISTED EVIL', 'Lusket ond');
define('ROLLING EYES', 'Ruller med øjne');
define('WINK', 'Vinker');
define('IDEA', 'God ide');
define('ARROW', 'Pil');
define('NEUTRAL', 'Neutral');
define('MR. GREEN', 'Hr. Grøn');

// lang_admin_php
define('LV_ADMIN', 'Forlader admin mode...');
define('ENT_ADMIN', 'Logger ind som admin...');

// lang_albmgr_php
define('ALB_NEED_NAME', 'Album skal have et navn!');
define('CONFIRM_MODIFS', 'Er du sikker på at du vil lave disse ændringer?');
define('NO_CHANGE', 'Du lavede ingen ændringer!');
define('NEW_ALBUM', 'Nyt album');
define('CONFIRM_DELETE1', 'Er du sikker på du vil slette dette album?');
define('CONFIRM_DELETE2', '\\nAlle billeder og kommentarer forsvinder!');
define('SELECT_FIRST', 'Vælg først et album');
define('ALB_MRG', 'Album Manager');
define('MY_GALLERY', '* Mit galleri *');
define('NO_CATEGORY', '* Ingen kategori *');
define('DELETE', 'Slet');
define('NEW', 'Ny');
define('APPLY_MODIFS', 'Godkend rettelser');
define('SELECT_CATEGORY', 'Vælg kategori');

// lang_catmgr_php
define('MISS_PARAM', 'Parameter Parameters obligatorisk ved \'%s\'operation ej udført!');
define('UNKNOWN_CAT', 'Valgte kategori eksister ikke i databasen');
define('USERGAL_CAT_RO', 'Bruger galleri kategorien kan ikke slettes!');
define('MANAGE_CAT', 'Administrer kategorier');
define('CONFIRM_DELETE', 'Er du sikker på du ønsker at SLETTE denne kategori');
define('CATEGORY', 'Kategori');
define('OPERATIONS', 'Handling');
define('MOVE_INTO', 'Flyt til');
define('UPDATE_CREATE', 'Opdater/Opret kategori');
define('PARENT_CAT', 'Hoved kategori');
define('CAT_TITLE', 'Kategori titel');
define('CAT_DESC', 'Kategori beskrivelse');

// lang_config_php
define('TITLE', 'Konfiguration');
define('RESTORE_CFG', 'Genskab standard indstillinger');
define('SAVE_CFG', 'Gem ny opsætning');
define('NOTES', 'Noter');
define('INFO', 'Information');
define('UPD_SUCCESS', 'Coppermine opsætning er opdateret');
define('RESTORE_SUCCESS', 'Coppermine standard opsætning er genskabt');
define('NAME_A', 'Navn stigende');
define('NAME_D', 'Navn faldende');
define('TITLE_A', 'Titel stigende');
define('TITLE_D', 'Titel faldende');
define('DATE_A', 'Dato stigende');
define('DATE_D', 'Dato faldende');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Height');
define('TH_WD', 'Width');

// lang_config_data
define('CONFIG_GENSET', 'Generelle indstillinger');
define('GALLERY_NAME', 'Galleri navn');
define('GALLERY_DESCRIPTION', 'Galleri beskrivelse');
define('GALLERY_ADMIN_EMAIL', 'Galleri administrator e-mail');
define('ECARDS_MORE_PIC_TARGET', 'Address to nuke folder ie http://www.mysite.tld/html/');
define('LANG', 'Sprog');
define('CPGTHEME', 'Tema');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'Albumsliste visning');
define('MAIN_TABLE_WIDTH', 'Bredde på hoved tabellen (pixels eller %)');
define('SUBCAT_LEVEL', 'Antal af trin i kategorier for fremvisning');
define('ALBUMS_PER_PAGE', 'Antal af album til fremvisning');
define('ALBUM_LIST_COLS', 'Antal af kolonner for albumliste');
define('ALB_LIST_THUMB_SIZE', 'Størrelse af minibilleder i pixels');
define('MAIN_PAGE_LAYOUT', 'Indholdet af hovedsiden');
define('FIRST_LEVEL', 'Vis øverste album niveaus minibilleder i kategorier');
define('THUMB_VIEW_TITLE', 'Minibillede visning');
define('THUMBCOLS', 'Antal kolonner på minibillede siden');
define('THUMBROWS', 'Antal rækker på minibillede siden');
define('MAX_TABS', 'Max antal minibilleder pr side');
define('CAPTION_IN_THUMBVIEW', 'Vis billedeoverskriften (i tilføjelse til titel) nedenfor minibillede');
define('DISPLAY_COMMENT_COUNT', 'Vis antal af kommentarer nedenfor minibilledet');
define('DEFAULT_SORT_ORDER', 'Standard sortering af billeder');
define('MIN_VOTES_FOR_RATING', 'Min antal stemmer for billede før visning i \'top karakter\' listen');
define('IMAGE_COMMENT_VIEW_TITLE', 'Billedevisning &amp; Kommentar indstillinger');
define('PICTURE_TABLE_WIDTH', 'Bredde for tabellen til visning af billeder (pixels eller %)');
define('DISPLAY_PIC_INFO', 'Billede information er synlig som standard');
define('FILTER_BAD_WORDS', 'Filtrer bande ord i kommentarer');
define('ENABLE_SMILIES', 'Tillad smilies i kommentarer');
define('MAX_IMG_DESC_LENGTH', 'Max længde for billedbeskrivelse');
define('MAX_COM_WLENGTH', 'Max længde på et ord');
define('MAX_COM_LINES', 'Max antal linjer i en kommentar');
define('MAX_COM_SIZE', 'Maximum længde på en kommentar');
define('DISPLAY_FILM_STRIP', 'Vis film rulle');
define('MAX_FILM_STRIP_ITEMS', 'Antal emner i film rulle');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', 'Billede og minibillede indstillinger');
define('JPEG_QUAL', 'Kvalitet for JPEG billeder');
define('THUMB_WIDTH', 'Maks. dimension på minibilleder <b>*</b>');
define('THUMB_USE', 'Brug dimension ( bredde, højde eller maksimum af de to til minibilleder )<b>*</b>');
define('MAKE_INTERMEDIATE', 'Opret mellemstore billeder');
define('PICTURE_WIDTH', 'Max bredde eller højde for et mellemstort billede <b>*</b>');
define('MAX_UPL_SIZE', 'Max størrelse for uploadet billeder (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Max bredde eller højde for uploadet billeder (pixels)');
define('USER_SETTING_TITLE', 'Bruger indstillinger');
define('ALLOW_USER_REGISTRATION', 'Tillad registrering af nye brugere');
define('REG_REQUIRES_VALID_EMAIL', 'Forlang e-mail godkendelse ved registrering');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Tillad to brugere at have samme e-mail adresse');
define('ALLOW_PRIVATE_ALBUMS', 'Brugere kan have private albums');
define('CUSTOM_FIELDS_TITLE', 'Brugerdefinerede felter til billedbeskrivelse (lad det forblive blanke, hvis ikke de skal bruges)');
define('USER_FIELD1_NAME', 'Felt 1 navn');
define('USER_FIELD2_NAME', 'Felt 2 navn');
define('USER_FIELD3_NAME', 'Felt 3 navn');
define('USER_FIELD4_NAME', 'Felt 4 navn');
define('PIC_ADV_SETTING_TITLE', 'Avancerede billede og minibillede indstillinger');
define('SHOW_PRIVATE', 'Vis ikon for private album for anononyme brugere');
define('FORBIDEN_FNAME_CHAR', 'Forbudte karakterer i filnavne');
define('ALLOWED_FILE_EXTENSIONS', 'Accepterede filtyper for uploadede billeder');
define('THUMB_METHOD', 'Program til skalering af billeder');
define('IMPATH', 'Sti til ImageMagick/netpbm \'konveter\' værktøj (eksempel /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Tillad billedetyper (kun aktiv ved brug af ImageMagick)');
define('IM_OPTIONS', 'Kommandolinje indstillinger ved brug af ImageMagick');
define('READ_EXIF_DATA', 'Læs EXIF data i JPEG filer');
define('FULLPATH', 'Album mappen <b>*</b>');
define('USERPICS', 'Mappen for bruger billeder <b>*</b>');
define('NORMAL_PFX', 'Foranstillet navn på mellembilleder <b>*</b>');
define('THUMB_PFX', 'Foranstillet navn på minibilleder <b>*</b>');
define('DEFAULT_DIR_MODE', 'Standard tilstand på mapper');
define('DEFAULT_FILE_MODE', 'standard tilstand på billeder');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', 'Cookies &amp; tegn-kodnings indstillinger');
define('COOKIE_NAME', 'Navn på cookie brugt af dette system');
define('COOKIE_PATH', 'Stien til cookie brugt at dette system');
define('CHAR_SET', 'Tegn-kodning');
define('COOKIE_SETTING_TITLE', 'Avancerede indstillinger');
define('DEBUG_MODE', 'Aktiver fejlfindings tilstand');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('MISC_SETTING_TITLE', '<br /><div align="center">(*) Felter markeret med * skal skiftes hvis du allerede har billeder i dit galleri</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Du skal indtaste dit navn og en kommentar');
define('COM_ADDED', 'Kommentar tilføjet');
define('ALB_NEED_TITLE', 'Du skal angive en titel for dit album!');
define('NO_UDP_NEEDED', 'Der var ikke behov for en opdatering.');
define('ALB_UPDATED', 'Album opdateret');
define('UNKNOWN_ALBUM', 'Det valgte album eksisterer ikke eller du har ikke rettigheder til at uploade til det');
define('NO_PIC_UPLOADED', 'Der blev ikke uploadet noget billede !<br /><br />Hvis du valgte et billede at uploade så kontroller at serveren tillader fil upload...');
define('ERR_MKDIR', 'Kunne ikke oprette denne mappe: %s !');
define('DEST_DIR_RO', 'Destinations mappen %s er ikke skrivbar af dette script !');
define('ERR_MOVE', 'Kunne ikke flytte %s til %s !');
define('ERR_FSIZE_TOO_LARGE', 'Det billede du har uploadet er for stort (max tilladte størrelse er %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Den fil du har uploadet er for stor (max tilladte filstørrelse er %s KB) !');
define('ERR_INVALID_IMG', 'Filen du har uploadet er ikke et gyldigt billede!');
define('ALLOWED_IMG_TYPES', 'Du kan kun uploade %s billeder.');
define('ERR_INSERT_PIC', 'Billedet \'%s\' kunne ikke indsættes i albummet ');
define('UPLOAD_SUCCESS', 'Dit billede blev uploadet med success<br /><br />Det er synligt når en administrator har godkendt det.');
define('INFO', 'Information');
define('ERR_COMMENT_EMPTY', 'Din kommentar er tom !');
define('ERR_INVALID_FEXT', 'Kun filer med følgende endelser er gyldige : <br /><br />%s.');
define('NO_FLOOD', 'Desværre, men du er stadig den seneste der har kommenteret dette billede<br /><br />Rediger kommentaren hvis du vil ændre den');
define('REDIRECT_MSG', 'Du bliver viderestillet.<br /><br /><br />Tryk på \'FORTSÆT\' hvis siden ikke opdateres automatisk');
define('UPL_SUCCESS', 'Dit billede blev tilføjet med succes');

// lang_delete_php
define('CAPTION', 'Overskrift');
define('FS_PIC', 'Fuld størrelse billede');
define('DEL_SUCCESS', 'Slettet');
define('NS_PIC', 'Mellem størrelse billede');
define('ERR_DEL', 'Kan ikke slettes');
define('THUMB_PIC', 'Minibillede');
define('COMMENT', 'Kommentar');
define('IM_IN_ALB', 'Billede i album');
define('ALB_DEL_SUCCESS', 'Album \'%s\' slettet');
define('ALB_MGR', 'Album Administrator');
define('ERR_INVALID_DATA', 'Forkert data modtaget i \'%s\'');
define('CREATE_ALB', 'Opretter album \'%s\'');
define('UPDATE_ALB', 'Opdaterer album \'%s\' med titel \'%s\' og index \'%s\'');
define('DEL_PIC', 'Slet billede');
define('DEL_ALB', 'Slet album');
define('DEL_USER', 'Slet bruger');
define('ERR_UNKNOWN_USER', 'Den valgte bruger findes ikke !');
define('COMMENT_DELETED', 'Kommentaren blev slettet');

// lang_display_image_php
define('CONFIRM_DEL', 'Er du sikker på du ønsker at SLETTE dette billede? \\nKommentarer bliver også slettet.');
define('DEL_PIC', 'SLET DETTE BILLEDE');
define('SIZE', '%s x %s pixels');
define('VIEWS', '%s gange');
define('SLIDESHOW', 'Slideshow');
define('STOP_SLIDESHOW', 'STOP SLIDESHOW');
define('VIEW_FS', 'Klik for at se fuld størrelse billede');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('TITLE', 'Billede information');
define('FILENAME', 'Filnavn');
define('ALBUM NAME', 'Album navn');
define('RATING', 'Karakter (%s stemmer)');
define('KEYWORDS', 'Nøgleord');
define('FILE SIZE', 'Filstørrelse');
define('DIMENSIONS', 'Dimensioner');
define('DISPLAYED', 'Vist');
define('CAMERA', 'Kamera');
define('DATE TAKEN', 'Optaget dato');
define('APERTURE', 'Blænderåbning');
define('EXPOSURE TIME', 'Eksponeringstid ');
define('FOCAL LENGTH', 'Brændvidde');
define('COMMENT', 'Kommentar');
define('ADDFAV', 'Føj til foretrukne');
define('ADDFAVPHRASE', 'Foretrukne');
define('REMFAV', 'Fjern fra foretrukne');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'Ret denne kommentar');
define('CONFIRM_DELETE', 'Er du sikker på at du vil slette denne kommentar?');
define('ADD_YOUR_COMMENT', 'Tilføj din kommentar');
define('NAME', 'Navn');
define('COMMENT', 'Kommentar');
define('YOUR_NAME', 'Anonym');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Klik på billedet for at lukke dette vindue');

// lang_ecard_php
define('TITLE', 'Send et e-postkort');
define('INVALID_EMAIL', '<b>Advarsel</b>: ugyldig e-mail adresse!');
define('ECARD_TITLE', 'Et e-postkort fra %s til dig');
define('VIEW_ECARD', 'Hvis kortet ikke vises korrekt, klik her');
define('VIEW_MORE_PICS', 'Klik på dette link for at se flere billeder!');
define('SEND_SUCCESS', 'Dit e-postkort blev sendt');
define('SEND_FAILED', 'Beklager men serveren kan ikke sende dit e-postkort...');
define('FROM', 'Fra');
define('YOUR_NAME', 'Dit navn');
define('YOUR_EMAIL', 'Din e-mail adresse');
define('TO', 'Til');
define('RCPT_NAME', 'Modtagers navn');
define('RCPT_EMAIL', 'Modtagers e-mail adresse');
define('GREETINGS', 'Hilsen');
define('MESSAGE', 'Besked');

// lang_editpics_php
define('PIC_INFO', 'Billede&nbsp;info');
define('ALBUM', 'Album');
define('TITLE', 'Titel');
define('DESC', 'Beskrivelse');
define('KEYWORDS', 'Nøgleord');
define('PIC_INFO_STR', '%sx%s - %sKB - %s visninger - %s stemmer');
define('APPROVE', 'Godkend billede');
define('POSTPONE_APP', 'Udskyd godkendelsen');
define('DEL_PIC', 'Slet billede');
define('RESET_VIEW_COUNT', 'Nulstil tæller');
define('RESET_VOTES', 'Nulstil afstemning');
define('DEL_COMM', 'Slet kommentarer');
define('UPL_APPROVAL', 'Upload godkendelse');
define('EDIT_PICS', 'Rediger billeder');
define('SEE_NEXT', 'Se næste billede');
define('SEE_PREV', 'Se forrige billede');
define('N_PIC', '%s billeder');
define('N_OF_PIC_TO_DISP', 'Antal billeder til fremvisning');
define('APPLY', 'Tilføj rettelser');

// lang_groupmgr_php
define('GROUP_NAME', 'Gruppe navn');
define('DISK_QUOTA', 'Disk kvote');
define('CAN_RATE', 'Kan give karakter');
define('CAN_SEND_ECARDS', 'Kan sende e-postkort');
define('CAN_POST_COM', 'Kan oprette kommentar');
define('CAN_UPLOAD', 'Kan uploade billeder');
define('CAN_HAVE_GALLERY', 'Kan have privat billede galleri');
define('APPLY', 'Tilføj rettelser');
define('CREATE_NEW_GROUP', 'Opret ny gruppe');
define('DEL_GROUPS', 'Slet valgte gruppe(er)');
define('CONFIRM_DEL', 'Advarsel, når du sletter en gruppe, vil brugere tilhørende denne gruppe blive flyttet til gruppen af \'Registrerede\' brugere !\\n\\nVil du fortsætte?');
define('TITLE', 'Administrer bruger grupper');
define('APPROVAL_1', 'Offentlig upload godkendelse(1)');
define('APPROVAL_2', 'Privat Upload godkendelse(2)');
define('NOTE1', '<b>(1)</b> Upload i det offentlige album, kræver admin godkendelse');
define('NOTE2', '<b>(2)</b> Upload i et album som tilhører brugeren, kræver admin godkendelse');
define('NOTES', 'Noter');

// lang_index_php
define('WELCOME', 'Velkommen!');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Er du sikker på du vil SLETTE dette album? \\nAlle billeder og kommentarer vil også blive slettet.');
define('DELETE', 'SLET');
define('MODIFY', 'REDIGER');
define('EDIT_PICS', 'REDIGER BILLEDER');

// lang_list_categories
define('HOME', 'Hjem');
define('STAT1', '<b>[pictures]</b> billeder i <b>[albums]</b> albums og <b>[cat]</b> kategorier med <b>[comments]</b> kommentarer vist <b>[views]</b> gange');
define('STAT2', '<b>[pictures]</b> billeder i <b>[albums]</b> albums vist <b>[views]</b> gange');
define('XX_S_GALLERY', '%s\'s Galleri');
define('STAT3', '<b>[pictures]</b> billeder i <b>[albums]</b> albums med <b>[comments]</b> kommentarer vist <b>[views]</b> gange');

// lang_list_users
define('USER_LIST', 'Bruger liste');
define('NO_USER_GAL', 'Der er ingen bruger gallerier');
define('N_ALBUMS', '%s album(s)');
define('N_PICS', '%s billede(r)');

// lang_list_albums
define('N_PICTURES', '%s billeder');
define('LAST_ADDED', ', sidste tilføjet den %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Opdater album %s');
define('GENERAL_SETTINGS', 'Generelle indstillinger');
define('ALB_TITLE', 'Album titel');
define('ALB_CAT', 'Album kategori');
define('ALB_DESC', 'Album beskrivelse');
define('ALB_THUMB', 'Album minibillede');
define('ALB_PERM', 'Tilladelser for dette album');
define('CAN_VIEW', 'Album kan vises af');
define('CAN_UPLOAD', 'Gæster kan oploade billeder');
define('CAN_POST_COMMENTS', 'Gæster kan skrive kommentarer');
define('CAN_RATE', 'Gæster kan stemme på billeder');
define('USER_GAL', 'Bruger Galleri');
define('NO_CAT', '* Ingen kategori *');
define('ALB_EMPTY', 'Album er tomt');
define('LAST_UPLOADED', 'Sidst indsendt');
define('PUBLIC_ALB', 'Alle (offentligt album)');
define('ME_ONLY', 'Kun mig');
define('OWNER_ONLY', 'Album ejer (%s)');
define('GROUPP_ONLY', 'Medlemmer af \'%s\' gruppen');
define('ERR_NO_ALB_TO_MODIFY', 'Intet album at korrigerer i databasen.');
define('UPDATE', 'Opdater album');

// lang_rate_pic_php
define('ALREADY_RATED', 'Beklager, men du har allerede stemt på dette billede');
define('RATE_OK', 'Din stemme blev accepteret');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'Mens administratorerne af denne site {SITE_NAME} vil prøve at fjerne eller tilrette alt generelt relevant materiale så hurtigt som muligt, er det umuligt at gennemse alle indlæg. Derfor bør du være opmærksom på at alle indlæg der er lavet til denne site Tilkendegiver meninger og holdninger af de forskellige forfattere og ikke altid administratorernes mening (med undtagelse af de indlæg skrevet af disse) derfor kan disse ikke stille til ansvar for andres indlæg.<br><br>
Du accepterer hermed ikke at indsende anstødelige, vulgære, usmagelige, hadefulde, truende, sex-relaterede eller andet materiale der er i strid med lovgivningen. Du accepterer hermed at webmaster, administratorerne af {SITE_NAME} har lov til at fjerne eller rette i indholdet til enhver tid. Som bruger accepterer du at alle dine oplysninger bliver gemt i en database. Men dine informationer bliver ikke givet videre til andre uden din accept. Administratorerne kan ikke kræves til ansvar overfor hackerforsøg der eventuelt kan føre til videregivelse af dine oplysninger.<br><br>
Denne site bruger cookies til at gemme informationer på din private computer. Disse cookies tjener kun det formål at forbedre billedkvaliteten. Denne e-mail bekræfter din registrering, detaljer og password.<br>
Ved at klikke på "jeg accepterer" knappen forneden acceptere du ovenstående betingelser');

// lang_register_php
define('PAGE_TITLE', 'Bruger registrering');
define('TERM_COND', 'Regler og betingelser');
define('I_AGREE', 'Jeg er enig');
define('SUBMIT', 'Send registrering');
define('ERR_USER_EXISTS', 'Brugernavnet du har skrevet findes allerede, vælge venligst et andet');
define('ERR_PASSWORD_MISMATCH', 'de to password er ikke ens, prøv igen');
define('ERR_UNAME_SHORT', 'Brugernavn skal være på mindst 2 karakterer');
define('ERR_PASSWORD_SHORT', 'Password skal være på mindst 2 karakterer');
define('ERR_UNAME_PASS_DIFF', 'Brugernavn og password skal være forskellige');
define('ERR_INVALID_EMAIL', 'E-mail adresse er ugyldig');
define('ERR_DUPLICATE_EMAIL', 'En anden bruger er allerede registret med den e-mail du har opgivet');
define('ENTER_INFO', 'Angiv registrerings information');
define('REQUIRED_INFO', 'Information forlanges');
define('OPTIONAL_INFO', 'Information er valgfri');
define('USERNAME', 'Brugernavn');
define('PASSWORD', 'Password');
define('PASSWORD_AGAIN', 'gentag password');
define('EMAIL', 'E-mail');
define('LOCATION', 'Sted');
define('INTERESTS', 'Interesser');
define('WEBSITE', 'Hjemmeside');
define('OCCUPATION', 'Beskæftigelse');
define('ERROR', 'FEJL');
define('CONFIRM_EMAIL_SUBJECT', '%s - Registrerings godkendelse ');
define('INFORMATION', 'Information');
define('FAILED_SENDING_EMAIL', 'Registrerings godkendelsen kan ikke sendes!');
define('THANK_YOU', 'Tak for din registrering.<br /><br />En e-mail med informationer om hvordan du aktiver din konto, er blevet sendt til den adresse som du har angivet.');
define('ACCT_CREATED', 'Din konto er blevet oprettet og du kan nu logge ind med dit brugernavn og password');
define('ACCT_ACTIVE', 'Din konto er nu aktiv og du kan logge ind med dit brugernavn og password');
define('ACCT_ALREADY_ACT', 'Din konto er allerede aktiv!');
define('ACCT_ACT_FAILED', 'Denne konto kan ikke blive aktiveret!');
define('ERR_UNK_USER', 'Valgte bruger eksister ikke!');
define('X_S_PROFILE', '%s\'s profil');
define('GROUP', 'Gruppe');
define('REG_DATE', 'Tilsluttet');
define('DISK_USAGE', 'Disk behandling');
define('CHANGE_PASS', 'Skift mit password');
define('CURRENT_PASS', 'Nuværende password');
define('NEW_PASS', 'Nyt password');
define('NEW_PASS_AGAIN', 'Nyt password igen');
define('ERR_CURR_PASS', 'Nuværende password er forkert');
define('APPLY_MODIF', 'Tilføj rettelser');
define('UPDATE_SUCCESS', 'Din profil blev opdateret');
define('PASS_CHG_SUCCESS', 'Dit password blev ændret');
define('PASS_CHG_ERROR', 'Dit password blev ikke ændret');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Tak for din registrering hos {SITE_NAME}

Dit brugernavn er : "{USER_NAME}"
Dit password er : "{PASSWORD}"

Som led i at aktiver din konto, skal du klikke på linket her under
eller kopier og indsætte det i din web browser.

{ACT_LINK}

Mange hilsner,

{SITE_NAME} - Administrationen
');

// lang_reviewcom_php
define('TITLE', 'Kommentar overblik');
define('NO_COMMENT', 'Der er ingen kommentar at se tilbage på');
define('N_COMM_DEL', '%s kommentar(er) slettet');
define('N_COMM_DISP', 'Antal af kommentarer at vise');
define('SEE_PREV', 'Se foregående');
define('SEE_NEXT', 'Se næste');
define('DEL_COMM', 'Slet valgte kommentarer');

// lang_search_php
define('SEARCH', 'Søg i billede samlingen');

// lang_search_new_php
define('PAGE_TITLE', 'Søg i nye billeder');
define('SELECT_DIR', 'Vælg mappe');
define('SELECT_DIR_MSG', 'Denne funktion tillader dig at massetilføje de billeder som du har uploadet via FTP.<br /><br />Vælg den mappe hvor du har uploadet dine billeder');
define('NO_PIC_TO_ADD', 'Der er intet billede at tilføje');
define('NEED_ONE_ALBUM', 'Du skal have mindst et album oprettet, for at bruge denne funktion');
define('WARNING', 'Advarsel');
define('CHANGE_PERM', 'systemet kan ikke skrive i dette mappe, du skal ændre server rettigheder på denne mappe til 755 or 777 før du prøver at tilføje billeder !');
define('TARGET_ALBUM', '<b>Anbring billeder af &quot;</b>%s<b>&quot; til </b>%s');
define('FOLDER', 'Folder');
define('IMAGE', 'Billede');
define('ALBUM', 'Album');
define('RESULT', 'Resultat');
define('DIR_RO', 'Ej skrivebar. ');
define('DIR_CANT_READ', 'Ej læsebar. ');
define('INSERT', 'Tilføje nye billeder til galleriet');
define('LIST_NEW_PIC', 'Liste af nye billeder');
define('INSERT_SELECTED', 'Indsæt valgte billeder');
define('NO_PIC_FOUND', 'Ingen nye billeder blev fundet');
define('BE_PATIENT', 'Hav lidt tålmodighed, systemet arbejder på at tilføje billederne');
define('NOTES', '<ul><li><b>OK</b> : Betyder at billedet blev tilføjet<li><b>DP</b> : Betyder at billedet er en duplikat og det allerede ligger i databasen<li><b>PB</b> : Betyder at billedet ikke kunne tilføjes, kontrollerer venligst din konfiguration samt tilladelser på de respektive mapper<li>Hvis OK, DP, PB \'signalet\' ikke kommer frem, klik da på de manglede billeder for at se om der da fremkommer nogle fejlmeddelelser som frembringes af PHP<li>Hvis din browser laver time-out, da opdater den browser</ul>');

// lang_upload_php
define('TITLE', 'Upload billede');
define('MAX_FSIZE', 'Max tilladte filstørrelse er sat til %s KB');
define('ALBUM', 'Album');
define('PICTURE', 'Billede');
define('PIC_TITLE', 'Billede titel');
define('DESCRIPTION', ' Billede beskrivelse');
define('KEYWORDS', 'Nøgleord (Adskil med mellemrum)');
define('ERR_NO_ALB_UPLOADABLES', 'Beklager der er intet album, som du har tilladelse til at uploade billeder til');

// lang_usermgr_php
define('TITLE', 'Administrer bruger');
define('NAME_A', 'Navn stigende');
define('NAME_D', 'Navn faldende');
define('GROUP_A', 'Gruppe stigende');
define('GROUP_D', 'Gruppe faldende');
define('REG_A', 'Reg dato stigende');
define('REG_D', 'Reg dato faldende');
define('PIC_A', 'Billede tæller stigende');
define('PIC_D', 'Billede tæller faldende');
define('DISKU_A', 'Disk behandling stigende');
define('DISKU_D', 'Disk behandling faldende');
define('SORT_BY', 'Sorter brugere efter');
define('ERR_NO_USERS', 'Bruger tabel er tom!');
define('ERR_EDIT_SELF', 'Du kan ikke rette i egen profil, brug \'Min profil\' link til dette formål');
define('EDIT', 'RET');
define('DELETE', 'SLET');
define('NAME', 'Brugernavn');
define('GROUP', 'Gruppe');
define('INACTIVE', 'Inaktiv');
define('OPERATIONS', 'Handlinger');
define('PICTURES', 'Billeder');
define('DISK_SPACE', 'Plads brugt / Kvote');
define('REGISTERED_ON', 'Registreret den');
define('U_USER_ON_P_PAGES', '%d bruger på %d side(r)');
define('CONFIRM_DEL', 'Er du sikker på du vil SLETTE denne bruger? \\nAlle billeder og albums vil også blive slettet.');
define('MAIL', 'POST');
define('ERR_UNKNOWN_USER', 'Valgt bruger eksister ikke!');
define('MODIFY_USER', 'Rediger bruger');
define('NOTES', 'Noter');
define('NOTE_LIST', '<li>Hvis du ikke vil rette det aktuelle password, så lad feltet \"password\" stå tomt');
define('PASSWORD', 'Password');
define('USER_ACTIVE', 'Bruger er aktiv');
define('USER_GROUP', 'Brugers gruppe');
define('USER_EMAIL', 'Brugers e-mail');
define('USER_WEB_SITE', 'Brugers webside');
define('CREATE_NEW_USER', 'Opret ny bruger');
define('USER_LOCATION', 'Brugers placering');
define('USER_INTERESTS', 'Brugers interesser');
define('USER_OCCUPATION', 'Brugers beskæftigelse');

// lang_util_php
define('TITLE', 'Ændre størrelse på billeder');
define('WHAT_IT_DOES', 'Gør dette');
define('WHAT_UPDATE_TITLES', 'Opdater titler fra filnavn');
define('WHAT_DELETE_TITLE', 'Slet titler');
define('WHAT_REBUILD', 'Genskab minibilleder og mellemstore billeder');
define('WHAT_DELETE_ORIGINALS', 'Sletter billeder med original størrelse og erstatter dem med de mellemstore billeder');
define('FILE', 'Fil');
define('TITLE_SET_TO', 'titel sat til');
define('SUBMIT_FORM', 'Udfør');
define('UPDATED_SUCCESFULLY', 'opdateret med succes');
define('ERROR_CREATE', 'FEJL ved oprettelse af');
define('CONTINUE', 'Fortsæt');
define('MAIN_SUCCESS', 'Filen %s bliver nu brugt som original billede');
define('ERROR_RENAME', 'Fejl da filen skulle omdøbes fra %s til %s');
define('ERROR_NOT_FOUND', 'Filen %s blev ikke fundet');
define('BACK', 'tilbage til hovedmenu');
define('THUMBS_WAIT', 'Opdaterer minibilleder og/eller mellemstore billeder, vent venligst...');
define('THUMBS_CONTINUE_WAIT', 'Fortsætter med opdatering af minibilleder og/eller mellemstore billeder...');
define('TITLES_WAIT', 'Opdaterer titler, vent venligst...');
define('DELETE_WAIT', 'Slettet titler, vent venligst...');
define('REPLACE_WAIT', 'Sletter originale billeder og erstatter dem med de mellemstore, vent venligst...');
define('INSTRUCTION', 'Hurtig manual');
define('INSTRUCTION_ACTION', 'Vælg funktion');
define('INSTRUCTION_PARAMETER', 'Indstil parametre');
define('INSTRUCTION_ALBUM', 'Vælg album');
define('INSTRUCTION_PRESS', 'Tryk %s');
define('UPDATE', 'Opdater minibilleder og/eller mellemstore billeder');
define('UPDATE_WHAT', 'Hvad skal opdateres');
define('UPDATE_THUMB', 'Kun minibilleder');
define('UPDATE_PIC', 'Kun mellemstore billeder');
define('UPDATE_BOTH', 'Både mini- og mellemstore billeder');
define('UPDATE_NUMBER', 'Antal behandlede billeder pr. klik');
define('UPDATE_OPTION', '(Prøv at sætte den værdi lavere hvis du oplever timeout fejl)');
define('FILENAME_TITLE', 'Filnavn -> Billed titel');
define('FILENAME_HOW', 'Hvordan skal filnavnet modificeres');
define('FILENAME_REMOVE', 'Fjern .jpg endelsen og erstat _ (underscore) med mellemrum');
define('FILENAME_EURO', 'Omdøb 2003_11_23_13_20_20.jpg til 23/11/2003 13:20');
define('FILENAME_US', 'Omdøb 2003_11_23_13_20_20.jpg til 11/23/2003 13:20');
define('FILENAME_TIME', 'Omdøb 2003_11_23_13_20_20.jpg til 13:20');
define('DELETE', 'Slet titler eller original størrelse billeder');
define('DELETE_TITLE', 'Slet billede titler');
define('DELETE_ORIGINAL', 'Slet original størrelse billeder');
define('DELETE_REPLACE', 'Sletter de originale billeder og erstatter dem med de mellemstore');
define('SELECT_ALBUM', 'Vælg album');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>