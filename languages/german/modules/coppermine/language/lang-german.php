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
/*   $Id: lang-german.php,v 1.1 2004/07/31 22:08:23 akamu Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'German');
define('LANG_NAME_NATIVE', 'Deutsch');
define('LANG_COUNTRY_CODE', 'de');
define('TRANS_NAME', 'GauGau');
define('TRANS_EMAIL', 'mail@gaugau.de');
define('TRANS_WEBSITE', 'http://gaugau.de/');
define('TRANS_DATE', '2003-11-20');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'utf-8');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'Ja');
define('NO', 'Nein');

// some common strings
define('BACK', 'zur&uuml;ck');
define('CONTINUE', 'weiter');
define('INFO', 'Information');
define('ERROR', 'Fehler');

//// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
define('ALBUM_DATE_FMT', '%d.%B %Y');
define('LASTCOM_DATE_FMT', '%d.%m.%y um %H:%M');
define('LASTUP_DATE_FMT', '%d.%B %Y');
define('REGISTER_DATE_FMT', '%d.%B %Y');
define('LASTHIT_DATE_FMT', '%d.%B %Y um %H:%M');
define('COMMENT_DATE_FMT', '%d.%B %Y um %H:%M');

// short names for Byte, Kilo, Mega
$lang_byte_units = array('Bytes','kB','MB',);

// Day of week
$lang_day_of_week = array('So','Mo','Di','Mi','Do','Fr','Sa',);
// Day of the month
$lang_month = array('Januar','Februar','M&auml;rz','April','Mai','Juni','Juli','August','September','Oktober','November','Dezember',);
// For the word censor
$lang_bad_words = array('*fuck*','*fick*','*arsch*','hure*','nutte','fotze','m&ouml;se','scheiss*','scheiß*','motherfucker','nigger*','pussy','shit','slut','titties','titty',);
// lang_meta_album_names
define('RANDOM', 'Zufalls-Bilder');
define('LASTUP', 'Neueste Bilder');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Zuletzt aktualisierte Alben');
define('LASTCOM', 'Neueste Kommentare');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Am meisten angesehen');
define('TOPRATED', 'Am besten bewertet');
define('LASTHITS', 'Zuletzt angesehen');
define('SEARCH', 'Suchergebnisse');
define('FAVPICS', 'Bevorzugte Bilder');

// lang_errors
define('ACCESS_DENIED', 'Du hast kein Recht, diese Seite einzusehen.');
define('PERM_DENIED', 'Du hast nicht das Recht, diese Operation auszuf&uuml;hren.');
define('PARAM_MISSING', 'Das Skript wurde ohne den/die erfordlichen Parameter aufgerufen.');
define('NON_EXIST_AP', 'Das gew&auml;hlte Album bzw. Bild existiert nicht!');
define('QUOTA_EXCEEDED', 'Speicherplatz ersch&ouml;pft<br /><br />Du hast ein Speicherlimit von [quota]K, Deine Bilder belegen zu Zeit [space] kB, das Hinzuf&uuml;gen dieses Bildes w&uuml;rde Deinen Speicherplatz &uuml;berschreiten.');
define('GD_FILE_TYPE_ERR', 'Bei Verwendung der GD-Bibliothek sind nur die Dateitypen JPG und PNG erlaubt.');
define('INVALID_IMAGE', 'Das Bild, das Du hochgeladen hast ist besch&auml;digt oder kann nicht von der GD-Bibliothek verarbeitet werden');
define('RESIZE_FAILED', 'Kann Thumbnail nicht erzeugen.');
define('NO_IMG_TO_DISPLAY', 'Kein Bild zum Anzeigen vorhanden (oder Du hast keine Berechtigung, das Album ein zu sehen)');
define('NON_EXIST_CAT', 'Die gew&auml;hlte Kategorie existiert nicht');
define('ORPHAN_CAT', 'Eine Kategorie besitzt ein nicht-existierendes Eltern-Element, benutze den Kategorie-Manager um das Problem zu beheben.');
define('DIRECTORY_RO', 'Das Verzeichnis \'%s\' ist nicht beschreibbar, die Bilder k&ouml;nnen nicht gel&ouml;scht werden');
define('NON_EXIST_COMMENT', 'Der gew&auml;hlte Kommentar existiert nicht.');
define('PIC_IN_INVALID_ALBUM', 'Das Bild befindet sich in einem nicht-existierenden Album (%s)!?');
define('BANNED', 'Du bist zur Zeit von dieser Seite verbannt.');
define('NOT_WITH_UDB', 'Diese Funktion ist innerhalb Coppermine deaktiviert, weil Sie in die Forum-Software integriert ist. Entweder wird das, was Du gerade zu tun versucht hast in dieser Konfiguration nicht unterst&uuml;tzt oder die Funktion sollte von der Forum-Software &uuml;bernommen werden.');
define('MEMBERS_ONLY', 'Diese Funktion ist nur f&uuml;r Mitglieder, bitte anmelden.');
define('MUSTBE_GOD', 'Diese Funktion ist nur f&uuml;r die Adminseite. Du solltest als Superadmin, Gott einloggen um diese Funktion benutzen zu k&ouml;nnen');

// lang_main_menu
define('ALB_LIST_TITLE', 'Gehe zur Alben-&Uuml;bersicht');
define('ALB_LIST_LNK', 'Alben-&Uuml;bersicht');
define('MY_GAL_TITLE', 'Zu meiner pers&ouml;nlichen Galerie');
define('MY_GAL_LNK', 'Meine Galerie');
define('MY_PROF_LNK', 'Mein Profil');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Zum Admin-Modus schalten');
define('ADM_MODE_LNK', 'Admin-Modus');
define('USR_MODE_TITLE', 'Zum Benutzer-Modus schalten');
define('USR_MODE_LNK', 'Benutzer-Modus');
define('UPLOAD_PIC_TITLE', 'Bild in ein Album hochladen');
define('UPLOAD_PIC_LNK', 'Bild hochladen');
define('REGISTER_TITLE', 'Konto erzeugen');
define('REGISTER_LNK', 'Registrieren');
define('LOGIN_LNK', 'Anmelden');
define('LOGOUT_LNK', 'Abmelden');
define('LASTUP_LNK', 'Neueste Uploads');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Neueste Kommentare');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Am meisten angesehen');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Am besten bewertet');
define('SEARCH_LNK', 'Suche');
define('FAV_LNK', 'Meine Favoriten');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Upload-Best&auml;tigung');
define('CONFIG_LNK', 'Einstellungen');
define('ALBUMS_LNK', 'Alben');
define('CATEGORIES_LNK', 'Kategorien');
define('USERS_LNK', 'Benutzer');
define('GROUPS_LNK', 'Gruppen');
define('COMMENTS_LNK', 'Kommentare');
define('SEARCHNEW_LNK', 'Batch-hinzuf&uuml;gen');
define('UTIL_LNK', 'Gr&ouml;sse &auml;ndern');
define('BAN_LNK', 'Benutzer verbannen');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Alben erzeugen / anordnen');
define('MODIFYALB_LNK', 'Meine Alben bearbeiten');
define('MY_PROF_LNK', 'Mein Profil');

// lang_cat_list
define('CATEGORY', 'Kategorie');
define('ALBUMS', 'Alben');
define('PICTURES', 'Bilder');

// lang_album_list
define('ALBUM_ON_PAGE', '%d Alben auf %d Seite(n)');

// lang_thumb_view
define('DATE', 'DATUM');
define('NAME', 'Dateiname');
define('TITLE', 'Titel');
define('SORT_DA', 'aufsteigend nach Datum sortieren');
define('SORT_DD', 'absteigend nach Datum sortieren');
define('SORT_NA', 'austeigend nach Name sortieren');
define('SORT_ND', 'absteigend nach Name sortieren');
define('SORT_TA', 'aufsteigend nach Titel sortieren');
define('SORT_TD', 'absteigend nach Titel sortieren');
define('PIC_ON_PAGE', '%d Bilder auf %d Seite(n)');
define('USER_ON_PAGE', '%d Benutzer auf %d Seite(n)');
define('SORT_RA', 'aufsteigend nach Bewertung');
define('SORT_RD', 'absteigend nach Bewertung');
define('RATING', 'BEWERTUNG');
define('SORT_TITLE', 'Sortiere Bilder nach:');

// lang_img_nav_bar
define('THUMB_TITLE', 'zur&uuml;ck zur Fingerabdruck-Seite');
define('PIC_INFO_TITLE', 'Bildinformationen anzeigen/verbergen');
define('SLIDESHOW_TITLE', 'Diashow');
define('ECARD_TITLE', 'Bild als eCard versenden');
define('SLIDESHOW_DISABLED', 'Bilddurchlauf Funktion ist ausgeschaltet');
define('SLIDESHOW_DISABLED_MSG', 'Diese Funktion ist nur f&uuml;r Mitglieder, bitte anmelden.');
define('ECARD_DISABLED', 'eCards sind deaktiviert');
define('ECARD_DISABLED_MSG', 'Du hast nicht das Recht, eCards zu versenden');
define('PREV_TITLE', 'vorheriges Bild anzeigen');
define('NEXT_TITLE', 'n&auml;chstes Bild anzeigen');
define('PIC_POS', 'Bild %s/%s');
define('NO_MORE_IMAGES', 'Es sind in der Gallerie keine Bilder mehr vorhanden');
define('NO_LESS_IMAGES', 'Dies ist das erste Bild der Gallerie');

// lang_rate_pic
define('RATE_THIS_PIC', 'Dieses Bild bewerten ');
define('NO_VOTES', '(noch keine Bewertung)');
define('RATING', '- derzeitige Bewertung : %s/5 mit %s Stimme(n)');
define('RUBBISH', 'sehr schlecht');
define('POOR', 'schlecht');
define('FAIR', 'ganz OK');
define('GOOD', 'gut');
define('EXCELLENT', 'sehr gut');
define('GREAT', 'super');

// lang_cpg_die
define('INFORMATION', 'Information');
define('ERROR', 'Fehler');
define('CRITICAL_ERROR', 'Kritischer Fehler');
define('FILE', 'Datei: ');
define('LINE', 'Zeile: ');

// lang_display_thumbnails
define('FILENAME', 'Dateiname : ');
define('FILESIZE', 'Dateigr&ouml;sse : ');
define('DIMENSIONS', 'Abmessungen : ');
define('DATE_ADDED', 'hinzugef&uuml;gt am : ');

// lang_get_pic_data
define('N_COMMENTS', '%s Kommentar(e)');
define('N_VIEWS', '%s x angesehen');
define('N_VOTES', '(%s Bewertungen)');

// lang_smilies_inc_php
define('EXCLAMATION', 'Ausruf');
define('QUESTION', 'Frage');
define('VERY HAPPY', 'sehr gl&uuml;cklich');
define('SMILE', 'lachen');
define('SAD', 'traurig');
define('SURPRISED', '&uuml;berrascht');
define('SHOCKED', 'schockiert');
define('CONFUSED', 'verwirrt');
define('COOL', 'cool');
define('LAUGHING', 'lachend');
define('MAD', 'w&uuml;tend');
define('RAZZ', 'scheu');
define('EMBARASSED', 'sch&uuml;chtern');
define('CRYING OR VERY SAD', 'traurig');
define('EVIL OR VERY MAD', 'b&ouml;se');
define('TWISTED EVIL', 'verschlagen');
define('ROLLING EYES', 'na ja');
define('WINK', 'zwinker');
define('IDEA', 'Idee');
define('ARROW', 'Pfeil');
define('NEUTRAL', 'neutral');
define('MR. GREEN', 'Mr. Green');

// lang_admin_php
define('LV_ADMIN', 'Beende Admin-Modus...');
define('ENT_ADMIN', 'Starte Admin-Modus...');

// lang_albmgr_php
define('ALB_NEED_NAME', 'Alben m&uuml;ssen einen Namen haben!');
define('CONFIRM_MODIFS', 'Bist Du sicher, dass Du diese &Auml;nderungen durchf&uuml;hren willst?');
define('NO_CHANGE', 'Du hast nichts ver&auml;ndert!');
define('NEW_ALBUM', 'Neues Album');
define('CONFIRM_DELETE1', 'Willst Du dieses Album wirklich l&ouml;schen?');
define('CONFIRM_DELETE2', '\\nAlle Bilder und Kommentare, die darin enthalten sind werden gel&ouml;scht!');
define('SELECT_FIRST', 'W&auml;hle zuerst ein Album');
define('ALB_MRG', 'Alben-Manager');
define('MY_GALLERY', '* Meine Galerie *');
define('NO_CATEGORY', '* Keine Kategorie *');
define('DELETE', 'L&ouml;schen');
define('NEW', 'Neu');
define('APPLY_MODIFS', '&Auml;nderungen &uuml;bernehmen');
define('SELECT_CATEGORY', 'W&auml;hle Kategorie');

// lang_catmgr_php
define('MISS_PARAM', 'Fehlender Parameter f&uuml;r die Operation \'%s\' !');
define('UNKNOWN_CAT', 'Gew&auml;hlte Kategorie existiert nicht in Datenbank');
define('USERGAL_CAT_RO', 'Benutzer-Galerie kann nicht gel&ouml;scht werden!');
define('MANAGE_CAT', 'Kategorien verwalten');
define('CONFIRM_DELETE', 'Willst Du diese Kategorie wirklich L&Ouml;SCHEN');
define('CATEGORY', 'Kategorie');
define('OPERATIONS', 'Operationen');
define('MOVE_INTO', 'verschieben in');
define('UPDATE_CREATE', 'Kategorie erzeugen/&auml;ndern');
define('PARENT_CAT', 'Eltern-Kategorie');
define('CAT_TITLE', 'Titel der Kategorie');
define('CAT_DESC', 'Beschreibung Kategorie');
define('NO_CATEGORY', 'keine Kategorie');

// lang_config_php
define('TITLE', 'Einstellungen');
define('RESTORE_CFG', 'auf Werkseinstellungen zur&uuml;cksetzen');
define('SAVE_CFG', 'neue Einstellungen speichern');
define('NOTES', 'Anmerkungen');
define('INFO', 'Information');
define('UPD_SUCCESS', 'Die Einstellungen von Coppermine wurden aktualisiert');
define('RESTORE_SUCCESS', 'Coppermine Standard-Einstellungen wiederhergestellt');
define('NAME_A', 'aufsteigend nach Name');
define('NAME_D', 'absteigend nach Name');
define('TITLE_A', 'aufsteigend nach Titel');
define('TITLE_D', 'absteigend nach Titel');
define('DATE_A', 'aufsteigend nach Datum');
define('DATE_D', 'absteigend nach Datum');
define('RATING_A', 'Beurteiliung aufsteigend');
define('RATING_D', 'Beurteilung absteigend');
define('TH_ANY', 'Maximalwert (entweder H&ouml;he oder Breite)');
define('TH_HT', 'H&ouml;he');
define('TH_WD', 'Breite');

// lang_config_data
define('CONFIG_GENSET', 'Allgemeine Einstellungen');
define('GALLERY_NAME', 'Galerie-Name');
define('GALLERY_DESCRIPTION', 'Galerie Beschreibung');
define('GALLERY_ADMIN_EMAIL', 'Galerie-Admin E-Mail');
define('ECARDS_MORE_PIC_TARGET', 'Ziel-URL (http://www.ihreseite.de) um \'mehr Bilder ansehen\' Link in e-cards');
define('LANG', 'Sprache');
define('CPGTHEME', 'Design');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'Ansicht Albumliste');
define('MAIN_TABLE_WIDTH', 'Breite der Haupttabelle (in Pixel oder %)');
define('SUBCAT_LEVEL', 'Anzahl anzuzeigende Kategorie-Ebenen');
define('ALBUMS_PER_PAGE', 'Anzahl anzuzeigende Alben');
define('ALBUM_LIST_COLS', 'Anzahl Spalten in Album-Liste');
define('ALB_LIST_THUMB_SIZE', 'Fingerabdruck-Gr&ouml;sse in Pixel');
define('MAIN_PAGE_LAYOUT', 'Inhalt der Hauptseite');
define('FIRST_LEVEL', 'Erste Ebene des Fingerabdruck der Alben auch in Kategorien anzeigen');
define('THUMB_VIEW_TITLE', 'Ansicht Fingerabdruck');
define('THUMBCOLS', 'Spaltenzahl auf Fingerabdruck-Seite');
define('THUMBROWS', 'Zeilenzahl auf Fingerabdruck-Seite');
define('MAX_TABS', 'Anzahl maximal anzuzeigende Tabs');
define('CAPTION_IN_THUMBVIEW', 'Bild-Beschriftung anzeigen (zus&auml;tzlich zum Bild-Titel) unterhalb des Fingerabdruck');
define('DISPLAY_COMMENT_COUNT', 'Anzahl der Kommentare unterhalb des Fingerabdruck anzeigen');
define('DEFAULT_SORT_ORDER', 'Standard-Sortierung f&uuml;r Bilder');
define('MIN_VOTES_FOR_RATING', 'Mindestmenge Stimmen, die ein Bild benötigt, um in der \'am besten bewertet\' Liste zu erscheinen');
define('NICE_TITLES', 'Seitenspezifische Titel benutzen, nicht die von > Coppermine');
define('IMAGE_COMMENT_VIEW_TITLE', 'Ansicht Bild &amp; Einstellungen Kommentare');
define('PICTURE_TABLE_WIDTH', 'Tabellenbreite f&uuml;r Bildanzeige (in Pixel oder %)');
define('DISPLAY_PIC_INFO', 'Bildinformationen sind standardm&auml;ßig sichtbar');
define('FILTER_BAD_WORDS', 'Schimpfw&ouml;rter in Kommentaren zensieren');
define('ENABLE_SMILIES', 'Smilies in Kommentaren erlauben');
define('DISABLE_FLOOD_PROTECTION', 'Erlauben von mehreren Kommentaren zu einem Bild von einem Mittglied');
define('COMMENT_EMAIL_NOTIFICATION', 'E-mail zum Administrator wenn neus Bild empfangen ist');
define('MAX_IMG_DESC_LENGTH', 'Maximall&auml;nge f&uuml;r Bildbeschreibung');
define('MAX_COM_WLENGTH', 'Maximale Anzahl von Buchstaben in einem Wort');
define('MAX_COM_LINES', 'Maximale Zeilenzahl eines Kommentars');
define('MAX_COM_SIZE', 'Maximale L&auml;nge eines Kommentars');
define('DISPLAY_FILM_STRIP', 'Film-Streifen anzeigen');
define('MAX_FILM_STRIP_ITEMS', 'Anzahl Elemente in Film-Streifen');
define('ALLOW_ANON_FULLSIZE', 'Vollbild anzeigen f&uuml;r unregistrierten Betutzer');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE',  'Bild- und Fingerabdruck-Einstellungen');
define('JPEG_QUAL', 'Qualit&auml;t f&uuml;r JPEG-Dateien');
define('THUMB_USE', 'Welche Dimension soll genutzt werden f&uuml;r den Fingerabdruck ( Breite oder H&ouml;he oder das, was jeweils gr&ouml;sser ist)<b>*</b>');
define('THUMB_WIDTH', 'Maximale H&ouml;he oder Breite vom Fingerabdruck <b>*</b>');
define('MAKE_INTERMEDIATE', 'Bilder in Zwischengr&ouml;ße erzeugen');
define('PICTURE_WIDTH', 'Maximale Breite oder H&ouml;he von Bildern in Zwischengr&ouml;ße <b>*</b>');
define('MAX_UPL_SIZE', 'Maximalgr&ouml;ße f&uuml;r das Hochladen von Bildern (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Maximale Breite oder H&ouml;he f&uuml;r das Hochladen von Bildern (in Pixel)');
define('USER_SETTING_TITLE',   'Benutzer-Einstellungen');
define('ALLOW_USER_REGISTRATION', 'Registrierung von Benutzern zulassen');
define('REG_REQUIRES_VALID_EMAIL', 'Registrierung von Benutzern erfordert &Uuml;berpr&uuml;fung per E-Mail');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Zulassen, daß mehrere Benutzer die gleiche E-Mail Adresse haben');
define('ALLOW_PRIVATE_ALBUMS', 'Benutzer d&uuml;rfen Privatalbum anlegen');
define('CUSTOM_FIELDS_TITLE', 'Benutzerdefinierte Felder f&uuml;r zus&auml;tzliche Bildinformationen (leer lassen, falls nicht ben&ouml;tigt)');
define('USER_FIELD1_NAME', 'Name Feld 1');
define('USER_FIELD2_NAME', 'Name Feld 2');
define('USER_FIELD3_NAME', 'Name Feld 3');
define('USER_FIELD4_NAME', 'Name Feld 4');
define('58', 'Erweiterte Bild- und Fingerabdruck-Einstellungen');
define('SHOW_PRIVATE', 'Icons f&uuml;r Pers&ouml;nliche Alben nicht eingeloggten Benutzern anzeigen?');
define('FORBIDEN_FNAME_CHAR', 'Nicht erlaubte Zeichen in Dateinamen');
define('ALLOWED_FILE_EXTENSIONS', 'erlaubte Datei-Erweiterungen f&uuml;r das Hochladen von Bildern');
define('THUMB_METHOD', 'Methode zur Gr&ouml;ßen&auml;nderung von Bildern');
define('IMPATH', 'Pfad zur \'convert\' Anwendung von ImageMagick/netpbm (z.B. /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Erlaubte Datei-Typen (nur g&uuml;ltig f&uuml;r ImageMagick)');
define('IM_OPTIONS', 'Kommandozeilen-Parameter f&uuml;r ImageMagick');
define('READ_EXIF_DATA', 'EXIF-Daten in JPEG-Dateien lesen');
define('READ_IPTC_DATA', 'Lese IPTC Daten aus JPEG Bildern');
define('FULLPATH', 'Alben-Verzeichnis <b>*</b>');
define('USERPICS', 'Verzeichnis f&uuml;r Benutzer-Bilder <b>*</b>');
define('NORMAL_PFX', 'Vorsilbe f&uuml;r Bilder in Zwischengr&ouml;ße <b>*</b>');
define('THUMB_PFX', 'Vorsilbe f&uuml;r den Fingerabdruck <b>*</b>');
define('DEFAULT_DIR_MODE', 'Standard-Modus f&uuml;r Verzeichnisse');
define('DEFAULT_FILE_MODE', 'Standard-Modus f&uuml;r Bilder');
define('PICINFO_DISPLAY_FILENAME', 'Bildinfo anzeigen Datei-Name');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Bildinfo anzeigen Album-Name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Bildinfo anzeigen Datei-Gr&ouml;ße');
define('PICINFO_DISPLAY_DIMENSIONS', 'Bildinfo anzeigen Dimensionen');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Bildinfo anzeigen Wiedergabe-Z&auml;hler');
define('PICINFO_DISPLAY_URL', 'Bildinfo anzeigen URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Bildinfo anzeigen URL als Favorit');
define('PICINFO_DISPLAY_FAVORITES', 'Bildinfo anzeigen favorisiertes Album');
define('COOKIE_SETTING_TITLE', 'Cookies &amp; Zeichensatz-Einstellungen');
define('COOKIE_NAME', 'Cookie-Name, der vom Skript verwendet wird');
define('COOKIE_PATH', 'Cookie-Pfad');
define('CHAR_SET', 'Zeichensatz');
define('MISC_SETTING_TITLE', 'Verschiedene Einstellungen');
define('DEBUG_MODE', 'Debug-Modus ein');
define('ADVANCED_DEBUG_MODE', 'Einschalten ausf&uuml;hrlicher Debug-Modus');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) Felder, die mit * gekennzeichnet sind d&uuml;rfen nicht ge&auml;ndert werden, wenn sich schon Bilder in der Galerie befinden!</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Du musst Deinen Namen und einen Kommentar eingeben');
define('COM_ADDED', 'Kommentar hinzugef&uuml;gt');
define('ALB_NEED_TITLE', 'Du musst einen Titel f&uuml;r das Album eingeben!');
define('NO_UDP_NEEDED', 'Keine Aktualisierung notwendig.');
define('ALB_UPDATED', 'Album aktualisiert');
define('UNKNOWN_ALBUM', 'Das gew&auml;hlte Album existiert nicht oder Du hast keine Berechtigung, Bilder in dieses Album hochzuladen');
define('NO_PIC_UPLOADED', 'Es wurde kein Bild hochgeladen!<br /><br />Wenn Du tats&auml;chlich ein Bild zum Hochladen selektiert hast, &uuml;berpr&uuml;fe ob Dein Server das Hochladen von Dateien zul&auml;sst...');
define('ERR_MKDIR', 'Verzeichnis %s konnte nicht angelegt werden!');
define('DEST_DIR_RO', 'In das Zielverzeichnis %s kann vom Skript nicht geschrieben werden!');
define('ERR_MOVE', '%s kann nicht nach %s verschoben werden!');
define('ERR_FSIZE_TOO_LARGE', 'Die Datei, die Du hochgeladen hast ist zu groß (maximal zul&auml;ssig ist %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Die Datei, die Du hochgeladen hast ist zu groß (maximal zul&auml;ssig ist %s KB) !');
define('ERR_INVALID_IMG', 'Die Datei, die Du hochgeladen hast ist kein g&uuml;ltiger Bildtyp!');
define('ALLOWED_IMG_TYPES', 'Du kannst nur %s Bilder hochladen.');
define('ERR_INSERT_PIC', 'Das Bild \'%s\' kann nicht in das Album eingef&uuml;gt werden');
define('UPLOAD_SUCCESS', 'Dein Bild wurde erfolgreich hochgeladen.<br /><br />Es wird nach der Best&auml;tigung durch den Admin sichtbar sein.');
define('INFO', 'Information');
define('ERR_COMMENT_EMPTY', 'Dein Kommentar enth&auml;lt keine Zeichen!');
define('ERR_INVALID_FEXT', 'Nur Dateien mit den folgenden Erweiterungen sind zul&auml;ssig: <br /><br />%s.');
define('NO_FLOOD', 'Leider bist Du schon der Autor des letzten Kommentars zu diesem Bild<br /><br />Bearbeite Deinen bestehenden Kommentar, wenn Du ihn ver&auml;ndern willst');
define('REDIRECT_MSG', 'Du wirst weitergeleitet.<br /><br /><br />Klicke \'weiter\', falls die Seite sich nicht automatisch aktualisiert');
define('UPL_SUCCESS', 'Dein Bild wurde erfolgreich hinzugef&uuml;gt');

// lang_delete_php
define('CAPTION', '&Uuml;berschrift');
define('FS_PIC', 'Bild in Originalgr&ouml;ße');
define('DEL_SUCCESS', 'erfolgreich gel&ouml;scht');
define('NS_PIC', 'normal grosses Bild');
define('ERR_DEL', 'kann nicht gel&ouml;scht werden');
define('THUMB_PIC', 'Fingerabdruck');
define('COMMENT', 'Kommentar');
define('IM_IN_ALB', 'Bild in Album');
define('ALB_DEL_SUCCESS', 'Album \'%s\' gel&ouml;scht');
define('ALB_MGR', 'Alben-Manager');
define('ERR_INVALID_DATA', 'Ung&uuml;ltige Daten empfangen in \'%s\'');
define('CREATE_ALB', 'Erzeuge Album \'%s\'');
define('UPDATE_ALB', 'Aktualisiere Album \'%s\' mit Titel \'%s\' und Index \'%s\'');
define('DEL_PIC', 'Bild l&ouml;schen');
define('DEL_ALB', 'Album l&ouml;schen');
define('DEL_USER', 'Benutzer l&ouml;schen');
define('ERR_UNKNOWN_USER', 'Der gew&auml;hlte Benutzer ist nicht vorhanden!');
define('COMMENT_DELETED', 'Kommentar wurde gel&ouml;scht');

// lang_display_image_php
define('CONFIRM_DEL', 'Dieses Bild wirklich L&Ouml;SCHEN? \\nKommentare werden ebenfalls gel&ouml;scht.');
define('DEL_PIC', 'Dieses Bild L&ouml;schen');
define('EDIT_PIC', 'Bearbeiten Bild-Info');
define('SIZE', '%s x %s Pixel');
define('VIEWS', '%s mal');
define('SLIDESHOW', 'Diashow');
define('STOP_SLIDESHOW', 'Diashow anhalten');
define('VIEW_FS', 'Klicken f&uuml;r Bild in voller Gr&ouml;sse');

// lang_picinfo
define('TITLE', 'Bild-Information');
define('FILENAME', 'Dateiname');
define('ALBUM NAME', 'Name des Albums');
define('RATING', 'Bewertung (%s Stimmen)');
define('KEYWORDS', 'Stichworte');
define('FILE SIZE', 'Dateigr&ouml;sse');
define('DIMENSIONS', 'Abmessungen');
define('DISPLAYED', 'Angezeigt');
define('CAMERA', 'Kamera');
define('DATE TAKEN', 'Aufnahmedatum');
define('APERTURE', 'Blende');
define('EXPOSURE TIME', 'Belichtungszeit');
define('FOCAL LENGTH', 'Brennweite');
define('COMMENT', 'Kommentar');
define('ADDFAV', 'zu Favoriten hinzuf&uuml;gen');
define('ADDFAVPHRASE', 'Favoriten');
define('REMFAV', 'aus Favoriten entfernen');
define('IPTCTITLE', 'IPTC Titel');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Schl&uuml;sselworte');
define('IPTCCATEGORY', 'IPTC Kategorie');
define('IPTCSUBCATEGORIES', 'IPTC Unterkategorie(n)');
define('BOOKMARK_PAGE', 'Bild favorisieren');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'Diesen Kommentar bearbeiten');
define('CONFIRM_DELETE', 'Willst Du diesen Kommentar wirklich l&ouml;schen?');
define('ADD_YOUR_COMMENT', 'F&uuml;ge Deinen Kommentar hinzu');
define('NAME', 'Name');
define('COMMENT', 'Kommentar');
define('YOUR_NAME', 'Dein Name');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Bild anklicken, um das Fenster zu schliessen!');

// lang_ecard_php
define('TITLE', 'eCard senden');
define('INVALID_EMAIL', '<b>Achtung</b> : ung&uuml;ltige E-Mail Adresse !');
define('ECARD_TITLE', 'Eine eCard von %s f&uuml;r Dich');
define('VIEW_ECARD', 'Falls diese eCard nicht korrekt angezeigt wird klicke auf den folgenden Link: ');
define('VIEW_MORE_PICS', 'Klicke auf diesen Link, um mehr Bilder ansehen zu k&ouml;nnen!');
define('SEND_SUCCESS', 'Deine eCard wurde gesendet');
define('SEND_FAILED', 'Leider kann der Server Deine eCard nicht versenden...');
define('FROM', 'Von');
define('YOUR_NAME', 'Dein Name');
define('YOUR_EMAIL', 'Deine E-Mail Adresse');
define('TO', 'An');
define('RCPT_NAME', 'Empf&auml;nger Name');
define('RCPT_EMAIL', 'Empfanger E-Mail Adresse');
define('GREETINGS', 'Gr&uuml;sse');
define('MESSAGE', 'Nachricht');

// lang_editpics_php
define('PIC_INFO', 'Bild-Info');
define('ALBUM', 'Album');
define('TITLE', 'Titel');
define('DESC', 'Beschreibung');
define('KEYWORDS', 'Stichworte');
define('PIC_INFO_STR', '%sx%s - %sKB - %s x angesehen - %s x bewertet');
define('APPROVE', 'Bild genehmigen');
define('POSTPONE_APP', 'Genehmigung verschieben');
define('DEL_PIC', 'Bild l&ouml;schen');
define('READ_EXIF', 'Auslesen der EXIF Daten wiederholen');
define('RESET_VIEW_COUNT', 'Z&auml;hler x mal angesehen auf Null setzen');
define('RESET_VOTES', 'Anzahl Stimmen auf Null setzen');
define('DEL_COMM', 'Kommentare l&ouml;schen');
define('UPL_APPROVAL', 'Genehmigung zum Hochladen');
define('EDIT_PICS', 'Bilder bearbeiten');
define('SEE_NEXT', 'n&auml;chste Bilder ansehen');
define('SEE_PREV', 'vorherige Bilder ansehen');
define('N_PIC', '%s Bilder');
define('N_OF_PIC_TO_DISP', 'Bilder pro Seite');
define('APPLY', '&Auml;nderungen ausf&uuml;hren');

// lang_groupmgr_php
define('GROUP_NAME', 'Gruppen-Name');
define('DISK_QUOTA', 'Speicherplatz');
define('CAN_RATE', 'Darf Bilder bewerten');
define('CAN_SEND_ECARDS', 'Darf eCards versenden');
define('CAN_POST_COM', 'Darf Kommentare abgeben');
define('CAN_UPLOAD', 'Darf Bilder hochladen');
define('CAN_HAVE_GALLERY', 'Darf eine pers&ouml;nliche Galerie haben');
define('APPLY', '&Auml;nderungen ausf&uuml;hren');
define('CREATE_NEW_GROUP', 'Neue Gruppe erstellen');
define('DEL_GROUPS', 'ausgew&auml;hlte Gruppe(n) l&ouml;schen');
define('CONFIRM_DEL', 'Achtung: wenn Du eine Gruppe l&ouml;schst werden die dazu geh&ouml;renden Benutzer in die Gruppe \'Registrierte Benutzer\' Verschoben !\\n\\nWillst Du das ?');
define('TITLE', 'Benutzer-Gruppen verwalten');
define('APPROVAL_1', '&Ouml;ffentl. Upload best. (1)');
define('APPROVAL_2', 'Priv. Upload best. (2)');
define('NOTE1', '<b>(1)</b> Das Hochladen in ein &ouml;ffentliches Album muß durch den Admin best&auml;tigt werden');
define('NOTE2', '<b>(2)</b> Das Hochladen in ein privates Album muß durch den Admin best&auml;tigt werden');
define('NOTES', 'Anmerkungen');

// lang_index_php
define('WELCOME', 'Startseite');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Willst Du dieses Album wirklich L&Ouml;SCHEN? \\nAlle darin befindlichen Bilder und Kommentare werden ebenfalls gel&ouml;scht.');
define('DELETE', 'L&ouml;schen');
define('MODIFY', 'Eigenschaften');
define('EDIT_PICS', 'Bilder bearbeiten');

// lang_list_categories
define('HOME', 'Galerie');
define('STAT1', '<b>[pictures]</b> Bilder in <b>[albums]</b> Alben und <b>[cat]</b> Kategorien mit <b>[comments]</b> Kommentaren, <b>[views]</b> mal angesehen');
define('STAT2', '<b>[pictures]</b> Bilder in <b>[albums]</b> Alben, <b>[views]</b> mal angesehen');
define('XX_S_GALLERY', '%s\'s Galerie');
define('STAT3', '<b>[pictures]</b> Bilder in <b>[albums]</b> Alben mit <b>[comments]</b> Kommentaren, <b>[views]</b> mal angesehen');

// lang_list_users
define('USER_LIST', 'Benutzer-Liste');
define('NO_USER_GAL', 'Es gibt keine Benutzer, die eigene Alben haben d&uuml;rfen');
define('N_ALBUMS', '%s Album/en');
define('N_PICS', '%s Bild(er)');

// lang_list_albums
define('N_PICTURES', '%s Bilder');
define('LAST_ADDED', ', letzte Aktualisierung am %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Album %s aktualisieren');
define('GENERAL_SETTINGS', 'Allgemeine Einstellungen');
define('ALB_TITLE', 'Album Titel');
define('ALB_CAT', 'Album Kategorie');
define('ALB_DESC', 'Album Beschreibung');
define('ALB_THUMB', 'Album Fingerabdruck');
define('ALB_PERM', 'Berechtigungen f&uuml;r dieses Album');
define('CAN_VIEW', 'Album kann angesehen werden von');
define('CAN_UPLOAD', 'Besucher k&ouml;nnen Bilder hochladen');
define('CAN_POST_COMMENTS', 'Besucher k&ouml;nnen Kommentare abgeben');
define('CAN_RATE', 'Besucher k&ouml;nnen Bilder bewerten');
define('USER_GAL', 'Benutzer-Galerie');
define('NO_CAT', '* keine Kategorie *');
define('ALB_EMPTY', 'Album ist leer');
define('LAST_UPLOADED', 'Letzes Bild, das hochgeladen wurde');
define('PUBLIC_ALB', 'Jeder (&ouml;ffentliches Album)');
define('ME_ONLY', 'Nur ich');
define('OWNER_ONLY', 'Nur der Besitzer des Albums (%s)');
define('GROUPP_ONLY', 'Mitglieder der Gruppe \'%s\'');
define('ERR_NO_ALB_TO_MODIFY', 'Es ist kein Album zum Bearbeiten in der Datenbank.');
define('UPDATE', 'Album aktualisieren');

// lang_rate_pic_php
define('ALREADY_RATED', 'Du hast dieses Bild schon bewertet');
define('RATE_OK', 'Deine Bewertung wurde akzeptiert');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'Obwohl die Administratoren von {SITE_NAME} versuchen werden, generell alle anst&ouml;ssigen Inhalte so schnell wie m&ouml;glich zu l&ouml;schen oder bearbeiten ist es unm&ouml;glich, jeden Beitrag zu &uuml;berpr&uuml;fen. Daher best&auml;tigst Du, dass alle Beitr&auml;ge auf dieser Seite die Ansichten und Meinungen des Authors widerspiegeln und nicht die des Administrators oder Webmasters (außer den Beitr&auml;gen, die durch sie verfasst wurden) und sie daher daf&uuml;r nicht verantwortlich gemacht werden k&ouml;nnen.<br />
<br />
Du stimmst zu, keine beleidigende, obsz&ouml;ne, vulg&auml;re, verleumderische, verhetzende,drohende, sexuell-orientierte oder sonstwie illegalen Beitr&auml;ge zu verfassen. Du stimmst zu, daß der/die Webmaster, Administrator(en) oder Moderator(en) von {SITE_NAME} das recht haben, jeden Inhalt zu l&ouml;schen oder &auml;ndern, bei dem sie es f&uuml;r richtig halten. Als Benutzer stimmst Du zu, daß alle Informationen, die Du oben eingetragen hast in einer Datenbank gespeichert werden. Obwohl diese Daten ohne Deine ausdr&uuml;ckliche Zustimmung nicht an Dritte weitergegeben werden k&ouml;nnen der Webmaster oder Administrator nicht daf&uuml;r zur Verantwortung gezogen werden, wenn durch einen Angriff (Hacking) die gespeicherten Daten kompromitiert werden.<br />
<br />
Diese Seite benutzt Cookies, um Daten auf Deinem Rechner zu speichern. Diese Cookies dienen nur dazu, die Bedienung der Seite zu erm&ouml;glichen. Die E-Mail Adresse wird nur dazu verwendet, die Registrierungs-Details und das Passwort zu best&auml;tigen.<br />
<br />
Durch das Anklicken von \'ich stimme zu\' stimmst Du diesen Bedingungen zu.');

// lang_register_php
define('PAGE_TITLE', 'Benutzer-Registrierung');
define('TERM_COND', 'Nutzungsbedingungen');
define('I_AGREE', 'ich stimme zu');
define('SUBMIT', 'Registrieren absenden');
define('ERR_USER_EXISTS', 'Der Benutzername, den Du eingegeben hast existiert schon, bitte w&auml;hle einen anderen');
define('ERR_PASSWORD_MISMATCH', 'Die Passw&ouml;rter stimmen nicht &uuml;berein, bitte nochmals eingeben');
define('ERR_UNAME_SHORT', 'Der Benutzername muß mindestens 2 Zeichen lang sein');
define('ERR_PASSWORD_SHORT', 'Das Passwort muß mindestens 2 Zeichen lang sein');
define('ERR_UNAME_PASS_DIFF', 'Benutzername und Passwort m&uuml;ssen unterschiedlich sein');
define('ERR_INVALID_EMAIL', 'E-Mail Adresse ist ung&uuml;ltig');
define('ERR_DUPLICATE_EMAIL', 'Es hat sich schon ein anderer Benutzer mit der angegebenen E-Mail Adresse registriert');
define('ENTER_INFO', 'Gib Registrierungs-Informationen ein');
define('REQUIRED_INFO', 'Pflichtfeld');
define('OPTIONAL_INFO', 'Optional');
define('USERNAME', 'Benutzername');
define('PASSWORD', 'Passwort');
define('PASSWORD_AGAIN', 'Passwort-Best&auml;tigung');
define('EMAIL', 'E-Mail Adresse');
define('LOCATION', 'Ort');
define('INTERESTS', 'Hobbies');
define('WEBSITE', 'Homepage');
define('OCCUPATION', 'Beruf');
define('ERROR', 'ERROR');
define('CONFIRM_EMAIL_SUBJECT', '%s - Registrierungs-Best&auml;tigung');
define('INFORMATION', 'Information');
define('FAILED_SENDING_EMAIL', 'Die Registrierungs-best&auml;tigung kann nicht per E-Mail versendet werden!');
define('THANK_YOU', 'Danke f&uuml;r Deine Registrierung.<br /><br />Eine E-Mail mit Informationen, wie Du Dein Benutzerkonto aktivieren kannst wurde an die angegebene E-Mail Adresse gesendet.');
define('ACCT_CREATED', 'Dein Benutzerkonto wurde erstellt. Du kannst Dich jetzt mit Benutzername und passwort anmelden');
define('ACCT_ACTIVE', 'Dein Benutzerkonto ist jetzt aktiviert - Du kannst Dich mit Benutzername und Passwort anmelden');
define('ACCT_ALREADY_ACT', 'Dein Benutzerkonto ist bereits aktiviert!');
define('ACCT_ACT_FAILED', 'Dieses Benutzerkonto kann nicht aktiviert werden!');
define('ERR_UNK_USER', 'Der gew&auml;hlte Benutzer existiert nicht!');
define('X_S_PROFILE', '%s\'s Benutzerprofil');
define('GROUP', 'Gruppe');
define('REG_DATE', 'Registriert am');
define('DISK_USAGE', 'Speicherplatz-Verbrauch');
define('CHANGE_PASS', 'Mein Passwort &auml;ndern');
define('CURRENT_PASS', 'derzeitiges Passwort');
define('NEW_PASS', 'neues Passwort');
define('NEW_PASS_AGAIN', 'neues Passwort best&auml;tigen');
define('ERR_CURR_PASS', 'Derzeitiges Passwort ist verkehrt');
define('APPLY_MODIF', '&Auml;nderungen speichern');
define('UPDATE_SUCCESS', 'Dein Benutzerprofil wurde aktualisiert');
define('PASS_CHG_SUCCESS', 'Dein Passwort wurde ge&auml;ndert');
define('PASS_CHG_ERROR', 'Dein Passwort wurde nicht ge&auml;ndert');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Danke f&uuml;r Deine Registrierung bei {SITE_NAME}

Dein Benutzername ist : "{USER_NAME}"
Dein Passwort lautet : "{PASSWORD}"

Um Dein Benutzerkonto zu aktivieren musst Du auf untenstehenden Link klicken
oder ihn kopieren und in der Adresszeile Deines Browsers einf&uuml;gen.
{ACT_LINK}

Gr&uuml;sse,

Das Team von {SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', 'Kommentare bearbeiten');
define('NO_COMMENT', 'keine zu bearbeitenden Kommentare vorhanden');
define('N_COMM_DEL', '%s Kommentar(e) gel&ouml;scht');
define('N_COMM_DISP', 'Anzahl anzuzeigende Kommentare');
define('SEE_PREV', 'vorherigen anzeigen');
define('SEE_NEXT', 'n&auml;chsten anzeigen');
define('DEL_COMM', 'markierte Kommentare l&ouml;schen');

// lang_search_php
define('SEARCH', 'Bildersammlung durchsuchen');

// lang_search_new_php
define('PAGE_TITLE', 'neue Bilder suchen');
define('SELECT_DIR', 'W&auml;hle Verzeichnis');
define('SELECT_DIR_MSG', 'Diese Funktion erm&ouml;glicht, mehrere Bilder der Galerie hinzuzuf&uuml;gen, die mit einem FTP-Programm schon auf Deine Webseite hochgeladen wurden.<br /><br />W&auml;hle das Verzeichnis, in das Du die Bilder hochgeladen hast');
define('NO_PIC_TO_ADD', 'Kein Bild zum Hinzuf&uuml;gen gefunden');
define('NEED_ONE_ALBUM', 'Du brauchst mindestens ein Album, um dieses Funktion auszuf&uuml;hren');
define('WARNING', 'Achtung');
define('CHANGE_PERM', 'das Skript kann in dieses Verzeichnis nicht schreiben, Du musst die Lese-/Schreibberechtigung (chmod) auf 755 oder 777 setzen, bevor Du versuchst, Bilder hinzuzuf&uuml;gen!');
define('TARGET_ALBUM', '<b>Bilder aus dem Verzeichnis &quot;</b>%s<b>&quot; in </b>%s ablegen');
define('FOLDER', 'Verzeichnis');
define('IMAGE', 'Bild');
define('ALBUM', 'Album');
define('RESULT', 'Resultat');
define('DIR_RO', 'Verzeichnis nicht beschreibbar. ');
define('DIR_CANT_READ', 'Verzeichnis nicht lesbar. ');
define('INSERT', 'F&uuml;ge neue Bilder der Galerie hinzu');
define('LIST_NEW_PIC', 'Liste neuer Bilder');
define('INSERT_SELECTED', 'Markierte Bilder einf&uuml;gen');
define('NO_PIC_FOUND', 'Keine neuen Bilder gefunden');
define('BE_PATIENT', 'Bitte Geduld, das Skript braucht Zeit, um die Bilder hinzuzuf&uuml;gen');
define('NOTES', '<ul><li><b>OK</b> : bedeuted, daß das Bild erfolgreich hinzugef&uuml;gt wurde<li><b>DP</b> : bedeutet, daß das Bild ein Duplikat ist und schon in der Datenbank vorhanden ist<li><b>PB</b> : bedeutet, daß das Bild nicht hinzugef&uuml;gt werden konnte; &uuml;berpr&uuml;fe Deine Einstellungen und die Berechtigungen der Verzeichnisse, in dem die Bilder liegen<li>Falls die OK, DP, PB \'Zeichen\' nicht erscheinen klicke auf die nicht-funktionierenden Bilder, um die Fehlermeldungen von PHP zu sehen<li>Wenn Dein Browser in ein Timeout l&auml;uft, klicke auf die Aktualisieren-Schaltfl&auml;che</ul>');
define('SELECT_ALBUM', 'W&auml;hle ein Album');
define('NO_ALBUM', 'Es wurde kein Album ausgew&auml;hlt, gehe zur&uuml;ck um ein Album f&uuml;r die Bilder zu w&auml;hlen');

// lang_upload_php
define('TITLE', 'Bild hochladen');
define('MAX_FSIZE', 'Maximal zul&auml;ssige Dateigr&ouml;sse ist %s KB. Es k&ouml;nnen nur .jpg und .png - Dateien hochgeladen werden');
define('ALBUM', 'Album');
define('PICTURE', 'Bild');
define('PIC_TITLE', 'Bild-Titel');
define('DESCRIPTION', 'Bild-Beschreibung');
define('CAPTION', 'Bild-Beschreibung');
define('KEYWORDS', 'Stichworte (Trennung mit Komma)');
define('ERR_NO_ALB_UPLOADABLES', 'Leider gibt es kein Album, in das Du Bilder hochladen darfst');

// lang_usermgr_php
define('TITLE', 'Benutzer verwalten');
define('NAME_A', 'Name aufsteigend');
define('NAME_D', 'Name absteigend');
define('GROUP_A', 'Gruppe aufsteigend');
define('GROUP_D', 'Gruppe absteigend');
define('REG_A', 'Registrierungsdatum aufsteigend');
define('REG_D', 'Registrierungsdatum absteigend');
define('PIC_A', 'Bilderanzahl aufsteigend');
define('PIC_D', 'Bilderanzahl absteigend');
define('DISKU_A', 'Speicherplatz-Verbrauch aufsteigend');
define('DISKU_D', 'Speicherplatz-Verbrauch absteigend');
define('SORT_BY', 'Benutzer sortieren nach');
define('ERR_NO_USERS', 'Benutzer-Tabelle ist leer!');
define('ERR_EDIT_SELF', 'Du kannst Dein eigenes Profil hier nicht bearbeiten, benutze daf&uuml;r den Link \'mein Profil\'');
define('EDIT', 'bearbeiten');
define('DELETE', 'l&ouml;schen');
define('NAME', 'Benutzername');
define('GROUP', 'Gruppe');
define('INACTIVE', 'Inaktiv');
define('OPERATIONS', 'Operationen');
define('PICTURES', 'Bilder');
define('DISK_SPACE', 'Speicherplatzverbrauch / Quota');
define('REGISTERED_ON', 'Registriert am');
define('U_USER_ON_P_PAGES', '%d Benutzer auf %d Seite(n)');
define('CONFIRM_DEL', 'Willst Du diesen Benutzer wirklich L&Ouml;SCHEN? \\nAlle seine Bilder und Alben werden ebenfalls gel&ouml;scht.');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'Gew&auml;hlter Benutzer existiert nicht!');
define('MODIFY_USER', 'Benutzer &auml;ndern');
define('NOTES', 'Anmerkungen');
define('NOTE_LIST', '<li>Wenn Du das derzeitige Passwort nicht &auml;ndern willst, lasse das Feld \"Passwort\" leer');
define('PASSWORD', 'Passwort');
define('USER_ACTIVE_CP', 'Benutzer ist aktiv');
define('USER_GROUP_CP', 'Benutzergruppe');
define('USER_EMAIL', 'E-Mail Adresse des Benutzers');
define('USER_WEB_SITE', 'Webseite des Benutzers');
define('CREATE_NEW_USER', 'neuen Benutzer anlegen');
define('USER_FROM', 'Ort');
define('USER_INTERESTS', 'Hobbies/Interessen');
define('USER_OCC', 'Beruf/Besch&auml;ftigung');

// lang_util_php
define('TITLE', 'Gr&ouml;sse &auml;ndern');
define('WHAT_IT_DOES', 'Was macht dieses Tool');
define('WHAT_UPDATE_TITLES', 'Erzeugt Titel aus Dateinamen');
define('WHAT_DELETE_TITLE', 'L&ouml;scht Titel');
define('WHAT_REBUILD', 'Erneuert Fingerabdruck und Bilder in Zwischengr&ouml;sse gem&auml;ß aktuellen EInstellungen');
define('WHAT_DELETE_ORIGINALS', 'L&ouml;scht Bilder in Original-Gr&ouml;sse und ersetzt sie mit Bildern in Zwischengr&ouml;sse');
define('FILE', 'Datei');
define('TITLE_SET_TO', '&Auml;ndere Titel auf');
define('SUBMIT_FORM', 'los');
define('UPDATED_SUCCESFULLY', 'erfolgreich ge&auml;ndert');
define('ERROR_CREATE', 'FEHLER beim erzeugen von');
define('CONTINUE', 'Mehr Bilder durchlaufen');
define('MAIN_SUCCESS', 'Die Datei %s wurde erfolgreich als Hauptbild benutzt');
define('ERROR_RENAME', 'Fehler beim Umbenennen von %s zu %s');
define('ERROR_NOT_FOUND', 'Die Datei %s wurde nicht gefunden');
define('BACK', 'zur&uuml;ck zur Auswahl');
define('THUMBS_WAIT', 'Aktualisiere Fingerabdruck und/oder Bilder in Zwischengr&ouml;sse, bitte warten...');
define('THUMBS_CONTINUE_WAIT', 'Fortfahren mit der Aktualisierung der Fingerabdruck und/oder Bilder in Zwischengr&ouml;sse...');
define('TITLES_WAIT', 'Aktualisiere &Uuml;berschriften, bitte warten...');
define('DELETE_WAIT', 'L&ouml;sche &Uuml;berschriften, bitte warten...');
define('REPLACE_WAIT', 'L&ouml;sche Originale und ersetze sie mit Bilder in Zwischengr&ouml;sse, bitte warten..');
define('INSTRUCTION', 'Kurzanleitung');
define('INSTRUCTION_ACTION', 'W&auml;hle Aktion');
define('INSTRUCTION_PARAMETER', 'W&auml;hle Parameter');
define('INSTRUCTION_ALBUM', 'W&auml;hle Album');
define('INSTRUCTION_PRESS', 'Klicke %s');
define('UPDATE', 'Fingerabdruck und/oder Bilder in Zwischengr&ouml;sse aktualisieren');
define('UPDATE_WHAT', 'Was soll aktualisiert werden');
define('UPDATE_THUMB', 'Nur Fingerabdruck');
define('UPDATE_PIC', 'Nur Bilder in Zwischengr&ouml;sse');
define('UPDATE_BOTH', 'Sowohl Fingerabdruck als auch Bilder in Zwischengr&ouml;sse');
define('UPDATE_NUMBER', 'Anzahl der Bilder, die pro Klick aktualisiert werden sollen');
define('UPDATE_OPTION', '(Verringere diesen Wert niedriger, wenn &quot;Time-Out&quot;-Probleme auftreten sollten)');
define('FILENAME_TITLE', 'Dateiname &rArr; Bild-&Uuml;berschrift');
define('FILENAME_HOW', 'Wie soll der Dateiname modifiziert werden');
define('FILENAME_REMOVE', '&Uuml;bersetze die Engung .jpg und ersetze _ (Unterstrich) mit Leerzeichen');
define('FILENAME_EURO', '&Auml;ndere 2003_11_23_13_20_20.jpg zu 23/11/2003 13:20');
define('FILENAME_US', '&Auml;ndere 2003_11_23_13_20_20.jpg zu 11/23/2003 13:20');
define('FILENAME_TIME', '&Auml;ndere 2003_11_23_13_20_20.jpg zu 13:20');
define('DELETE', 'L&ouml;sche Bild-&Uuml;berschriften oder Bilder in Original-Gr&ouml;sse');
define('DELETE_TITLE', 'Bild-&Uuml;berschriften l&ouml;schen');
define('DELETE_ORIGINAL', 'Bilder in Originalgr&ouml;sse l&ouml;schen');
define('DELETE_REPLACE', 'L&ouml;sche die Original-Bilder und ersetze sie mit Bilder in Zwischengr&ouml;sse');
define('SELECT_ALBUM', 'W&auml;hle Album');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Bild ansehen');
define('USR', '\'s Bilder-Gallerie');
define('PHOTOGALLERY', 'Bilder-Gallerie');
?>