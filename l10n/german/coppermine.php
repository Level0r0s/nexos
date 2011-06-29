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
  $Source: /cvs/l10n/german/coppermine.php,v $
  $Revision: 9.8 $
  $Author: djmaze $
  $Date: 2006/02/12 16:01:52 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Views');//new in 1.2.2nuke
define('PIC_VOTES', 'Votes');//new in 1.2.2nuke
define('PIC_COMMENTS', 'Comments');//new in 1.2.2nuke

// lang_translation_info
define('LANG_NAME_ENGLISH', 'German');
define('LANG_NAME_NATIVE', 'Deutsch');
define('LANG_COUNTRY_CODE', 'de');
define('TRANS_NAME', 'GauGau');
define('TRANS_EMAIL', 'mail@gaugau.de');
define('TRANS_WEBSITE', 'http://gaugau.de/');
define('TRANS_DATE', '2003-11-20');
define('CHARSET', 'utf-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Ja');
define('NO', 'Nein');
// some common strings
define('BACK', 'zurück');
define('CONTINU', 'weiter');
define('INFO', 'Information');
//define('ERROR', 'Fehler');
define('ALBUM_DATE_FMT', '%d.%B %Y');
define('LASTCOM_DATE_FMT', '%d.%m.%y um %H:%M');
define('LASTUP_DATE_FMT', '%d.%B %Y');
define('REGISTER_DATE_FMT', '%d.%B %Y');
define('LASTHIT_DATE_FMT', '%d.%B %Y um %H:%M');
define('COMMENT_DATE_FMT', '%d.%B %Y um %H:%M');

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
define('PERM_DENIED', 'Du hast nicht das Recht, diese Operation auszuführen.');
define('PARAM_MISSING', 'Das Skript wurde ohne den/die erfordlichen Parameter aufgerufen.');
define('NON_EXIST_AP', 'Das gewählte Album bzw. Bild existiert nicht!');
define('QUOTA_EXCEEDED', 'Speicherplatz erschöpft<br /><br />Du hast ein Speicherlimit von [quota]K, Deine Bilder belegen zu Zeit [space] kB, das Hinzufügen dieses Bildes würde Deinen Speicherplatz überschreiten.');
define('GD_FILE_TYPE_ERR', 'Bei Verwendung der GD-Bibliothek sind nur die Dateitypen JPG und PNG erlaubt.');
define('INVALID_IMAGE', 'Das Bild, das Du hochgeladen hast ist beschädigt oder kann nicht von der GD-Bibliothek verarbeitet werden');
define('RESIZE_FAILED', 'Kann Thumbnail nicht erzeugen.');
define('NO_IMG_TO_DISPLAY', 'Kein Bild zum Anzeigen vorhanden (oder Du hast keine Berechtigung, das Album ein zu sehen)');
define('NON_EXIST_CAT', 'Die gewählte Kategorie existiert nicht');
define('ORPHAN_CAT', 'Eine Kategorie besitzt ein nicht-existierendes Eltern-Element, benutze den Kategorie-Manager um das Problem zu beheben.');
define('DIRECTORY_RO', 'Das Verzeichnis \'%s\' ist nicht beschreibbar, die Bilder können nicht gelöscht werden');
define('NON_EXIST_COMMENT', 'Der gewählte Kommentar existiert nicht.');
define('PIC_IN_INVALID_ALBUM', 'Das Bild befindet sich in einem nicht-existierenden Album (%s)!?');
define('BANNED', 'Du bist zur Zeit von dieser Seite verbannt.');
define('NOT_WITH_UDB', 'Diese Funktion ist innerhalb Coppermine deaktiviert, weil Sie in die Forum-Software integriert ist. Entweder wird das, was Du gerade zu tun versucht hast in dieser Konfiguration nicht unterstützt oder die Funktion sollte von der Forum-Software übernommen werden.');
define('MEMBERS_ONLY', 'Diese Funktion ist nur für Mitglieder, bitte anmelden.');
define('MUSTBE_GOD', 'Diese Funktion ist nur für die Adminseite. Du solltest als Superadmin, Gott einloggen um diese Funktion benutzen zu können');
define('NO_IMG_TO_APPROVE', 'No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE', 'Gehe zur Alben-übersicht');
define('ALB_LIST_LNK', 'Alben-übersicht');
define('MY_GAL_TITLE', 'Zu meiner persönlichen Galerie');
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
define('LASTUP_TITLE', 'Zuletzt geladene Bilder');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Neueste Kommentare');
define('TOPN_TITLE', 'Die am meisten gesehenen Bilder');
define('TOPN_LNK', 'Am meisten angesehen');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Am besten bewertet');
define('SEARCH_TITLE', 'Suche Fotosammlung');
define('SEARCH_LNK', 'Suche');
define('FAV_TITLE', 'Meine Favoriten');
define('FAV_LNK', 'Meine Favoriten');
define('HELP_TITLE', 'HELP');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Upload-Bestätigung');
define('CONFIG_LNK', 'Einstellungen');
define('ALBUMS_LNK', 'Alben');
define('CATEGORIES_LNK', 'Kategorien');
define('USERS_LNK', 'Benutzer');
define('GROUPS_LNK', 'Gruppen');
define('COMMENTS_LNK', 'Kommentare');
define('SEARCHNEW_LNK', 'Batch-hinzufügen');
define('UTIL_LNK', 'Grösse ändern');
define('BAN_LNK', 'Benutzer verbannen');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Alben erzeugen / anordnen');
define('MODIFYALB_LNK', 'Meine Alben bearbeiten');
//define('MY_PROF_LNK', 'Mein Profil');

// lang_cat_list
define('CATEGORY', 'Kategorie');
define('ALBUMS', 'Alben');
//define('PICTURES', 'Bilder');

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
define('THUMB_RATING', 'BEWERTUNG');
define('SORT_TITLE', 'Sortiere Bilder nach:');

// lang_img_nav_bar
define('THUMB_TITLE', 'zurück zur Fingerabdruck-Seite');
define('PIC_INFO_TITLE', 'Bildinformationen anzeigen/verbergen');
define('SLIDESHOW_TITLE', 'Diashow');
define('ECARD_TITLE', 'Bild als eCard versenden');
define('SLIDESHOW_DISABLED', 'Bilddurchlauf Funktion ist ausgeschaltet');
define('SLIDESHOW_DISABLED_MSG', 'Diese Funktion ist nur für Mitglieder, bitte anmelden.');
define('ECARD_DISABLED', 'eCards sind deaktiviert');
define('ECARD_DISABLED_MSG', 'Du hast nicht das Recht, eCards zu versenden');
define('PREV_TITLE', 'vorheriges Bild anzeigen');
define('NEXT_TITLE', 'nächstes Bild anzeigen');
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
//define('INFORMATION', 'Information');
//define('ERROR', 'Fehler');
define('_CRITICAL_ERROR', 'Kritischer Fehler');
define('FILE', 'Datei: ');
define('LINE', 'Zeile: ');

// lang_display_thumbnails
define('FILENAME', 'Dateiname : ');
define('FILESIZE', 'Dateigrösse : ');
define('DIMENSIONS', 'Abmessungen : ');
define('DATE_ADDED', 'hinzugefügt am : ');

// lang_get_pic_data
define('N_COMMENTS', '%s Kommentar(e)');
define('N_VIEWS', '%s x angesehen');
define('N_VOTES', '(%s Bewertungen)');


// lang_albmgr_php
define('ALB_NEED_NAME', 'Alben müssen einen Namen haben!');
define('CONFIRM_MODIFS', 'Bist Du sicher, dass Du diese änderungen durchführen willst?');
define('NO_CHANGE', 'Du hast nichts verändert!');
define('NEW_ALBUM', 'Neues Album');
define('CONFIRM_DELETE1', 'Willst Du dieses Album wirklich löschen?');
define('CONFIRM_DELETE2', '\\nAlle Bilder und Kommentare, die darin enthalten sind werden gelöscht!');
define('SELECT_FIRST', 'Wähle zuerst ein Album');
define('ALB_MRG', 'Alben-Manager');
define('MY_GALLERY', '* Meine Galerie *');
define('NO_CATEGORY', '* Keine Kategorie *');
define('DELETE', 'Löschen');
define('NEW', 'Neu');
define('APPLY_MODIFS', 'änderungen übernehmen');
define('SELECT_CATEGORY', 'Wähle Kategorie');

// lang_catmgr_php
define('MISS_PARAM', 'Fehlender Parameter für die Operation \'%s\' !');
define('UNKNOWN_CAT', 'Gewählte Kategorie existiert nicht in Datenbank');
define('USERGAL_CAT_RO', 'Benutzer-Galerie kann nicht gelöscht werden!');
define('MANAGE_CAT', 'Kategorien verwalten');
define('CONFIRM_DELETE_CAT', 'Willst Du diese Kategorie wirklich LöSCHEN');
//define('CATEGORY', 'Kategorie');
define('OPERATIONS', 'Operationen');
define('MOVE_INTO', 'verschieben in');
define('UPDATE_CREATE', 'Kategorie erzeugen/ändern');
define('PARENT_CAT', 'Eltern-Kategorie');
define('CAT_TITLE', 'Titel der Kategorie');
define('CAT_DESC', 'Beschreibung Kategorie');

// lang_config_php
define('CONFIG_TITLE', 'Einstellungen');
define('RESTORE_CFG', 'auf Werkseinstellungen zurücksetzen');
define('SAVE_CFG', 'neue Einstellungen speichern');
define('NOTES', 'Anmerkungen');
//define('INFO', 'Information');
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
define('TH_ANY', 'Maximalwert (entweder Höhe oder Breite)');
define('TH_HT', 'Höhe');
define('TH_WD', 'Breite');


// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Du musst Deinen Namen und einen Kommentar eingeben');
define('COM_ADDED', 'Kommentar hinzugefügt');
define('ALB_NEED_TITLE', 'Du musst einen Titel für das Album eingeben!');
define('NO_UDP_NEEDED', 'Keine Aktualisierung notwendig.');
define('ALB_UPDATED', 'Album aktualisiert');
define('UNKNOWN_ALBUM', 'Das gewählte Album existiert nicht oder Du hast keine Berechtigung, Bilder in dieses Album hochzuladen');
define('NO_PIC_UPLOADED', 'Es wurde kein Bild hochgeladen!<br /><br />Wenn Du tatsächlich ein Bild zum Hochladen selektiert hast, überprüfe ob Dein Server das Hochladen von Dateien zulässt...');
define('ERR_MKDIR', 'Verzeichnis %s konnte nicht angelegt werden!');
define('DEST_DIR_RO', 'In das Zielverzeichnis %s kann vom Skript nicht geschrieben werden!');
define('ERR_MOVE', '%s kann nicht nach %s verschoben werden!');
define('ERR_FSIZE_TOO_LARGE', 'Die Datei, die Du hochgeladen hast ist zu groß (maximal zulässig ist %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Die Datei, die Du hochgeladen hast ist zu groß (maximal zulässig ist %s KB) !');
define('ERR_INVALID_IMG', 'Die Datei, die Du hochgeladen hast ist kein gültiger Bildtyp!');
define('ALLOWED_IMG_TYPES', 'Du kannst nur %s Bilder hochladen.');
define('ERR_INSERT_PIC', 'Das Bild \'%s\' kann nicht in das Album eingefügt werden');
define('UPLOAD_SUCCESS', 'Dein Bild wurde erfolgreich hochgeladen.<br /><br />Es wird nach der Bestätigung durch den Admin sichtbar sein.');
//define('INFO', 'Information');
define('ERR_COMMENT_EMPTY', 'Dein Kommentar enthält keine Zeichen!');
define('ERR_INVALID_FEXT', 'Nur Dateien mit den folgenden Erweiterungen sind zulässig: <br /><br />%s.');
define('NO_FLOOD', 'Leider bist Du schon der Autor des letzten Kommentars zu diesem Bild<br /><br />Bearbeite Deinen bestehenden Kommentar, wenn Du ihn verändern willst');
define('REDIRECT_MSG', 'Du wirst weitergeleitet.<br /><br /><br />Klicke \'weiter\', falls die Seite sich nicht automatisch aktualisiert');
define('UPL_SUCCESS', 'Dein Bild wurde erfolgreich hinzugefügt');

// lang_delete_php
define('CAPTION', 'überschrift');
define('FS_PIC', 'Bild in Originalgröße');
define('DEL_SUCCESS', 'erfolgreich gelöscht');
define('NS_PIC', 'normal grosses Bild');
define('ERR_DEL', 'kann nicht gelöscht werden');
define('THUMB_PIC', 'Fingerabdruck');
//define('COMMENT', 'Kommentar');
define('IM_IN_ALB', 'Bild in Album');
define('ALB_DEL_SUCCESS', 'Album \'%s\' gelöscht');
define('ALB_MGR', 'Alben-Manager');
define('ERR_INVALID_DATA', 'Ungültige Daten empfangen in \'%s\'');
define('CREATE_ALB', 'Erzeuge Album \'%s\'');
define('UPDATE_ALB', 'Aktualisiere Album \'%s\' mit Titel \'%s\' und Index \'%s\'');
define('DEL_PIC', 'Bild löschen');
define('DEL_ALB', 'Album löschen');
define('DEL_USER', 'Benutzer löschen');
//define('ERR_UNKNOWN_USER', 'Der gewählte Benutzer ist nicht vorhanden!');
define('COMMENT_DELETED', 'Kommentar wurde gelöscht');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'Dieses Bild wirklich LöSCHEN? \\nKommentare werden ebenfalls gelöscht.');
define('DEL_THIS_PIC', 'Dieses Bild Löschen');
define('EDIT_PIC', 'Bearbeiten Bild-Info');
define('SIZE', '%s x %s Pixel');
define('VIEWS', '%s mal');
define('SLIDESHOW', 'Diashow');
define('STOP_SLIDESHOW', 'Diashow anhalten');
define('VIEW_FS', 'Klicken für Bild in voller Grösse');

// lang_picinfo
define('PIC_INF_TITLE', 'Bild-Information');
define('PIC_INF_FILENAME', 'Dateiname');
define('ALBUM NAME', 'Name des Albums');
define('PIC_INFO_RATING', 'Bewertung (%s Stimmen)');
define('KEYWORDS', 'Stichworte');
define('PIC_INF_FILE SIZE', 'Dateigrösse');
define('PIC_INF_DIMENSIONS', 'Abmessungen');
define('DISPLAYED', 'Angezeigt');
define('CAMERA', 'Kamera');
define('DATE TAKEN', 'Aufnahmedatum');
define('APERTURE', 'Blende');
define('EXPOSURE TIME', 'Belichtungszeit');
define('FOCAL LENGTH', 'Brennweite');
define('COMMENT', 'Kommentar');
define('ADDFAV', 'zu Favoriten hinzufügen');
define('ADDFAVPHRASE', 'Favoriten');
define('REMFAV', 'aus Favoriten entfernen');
define('IPTCTITLE', 'IPTC Titel');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Schlüsselworte');
define('IPTCCATEGORY', 'IPTC Kategorie');
define('IPTCSUBCATEGORIES', 'IPTC Unterkategorie(n)');
define('BOOKMARK_PAGE', 'Bild favorisieren');
define('REMOVEFAV', 'Removed from Favorites Album');
define('ADDEDTOFAV', 'Added to Favorites Album');


// lang_display_comments
define('OK', 'OK');
define('COM_EDIT_TITLE', 'Diesen Kommentar bearbeiten');
define('CONFIRM_DELETE', 'Willst Du diesen Kommentar wirklich löschen?');
define('ADD_YOUR_COMMENT', 'Füge Deinen Kommentar hinzu');
define('COM_NAME', 'Name');
//define('COMMENT', 'Kommentar');
define('YOUR_NAME', 'Dein Name');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Bild anklicken, um das Fenster zu schliessen!');

// lang_ecard_php
define('E_TITLE', 'eCard senden');
define('INVALID_EMAIL', '<b>Achtung</b> : ungültige E-Mail Adresse !');
define('E_ECARD_TITLE', 'Eine eCard von %s für Dich');
define('VIEW_ECARD', 'Falls diese eCard nicht korrekt angezeigt wird klicke auf den folgenden Link: ');
define('VIEW_MORE_PICS', 'Klicke auf diesen Link, um mehr Bilder ansehen zu können!');
define('SEND_SUCCESS', 'Deine eCard wurde gesendet');
define('SEND_FAILED', 'Leider kann der Server Deine eCard nicht versenden...');
define('FROM', 'Von');
define('_YOUR_NAME', 'Dein Name');
define('YOUR_EMAIL', 'Deine E-Mail Adresse');
define('TO', 'An');
define('RCPT_NAME', 'Empfänger Name');
define('RCPT_EMAIL', 'Empfanger E-Mail Adresse');
define('GREETINGS', 'Grüsse');
define('MESSAGE', 'Nachricht');
define('ECARD_LINK_CORRUPT', 'Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser'); //NEW

// lang_editpics_php
define('PIC_INFO', 'Bild-Info');
define('ALBUM', 'Album');
define('EDIT_TITLE', 'Titel');
define('DESC', 'Beschreibung');
//define('KEYWORDS', 'Stichworte');
define('PIC_INFO_STR', '%sx%s - %sKB - %s x angesehen - %s x bewertet');
define('APPROVE', 'Bild genehmigen');
define('POSTPONE_APP', 'Genehmigung verschieben');
//define('DEL_PIC', 'Bild löschen');
define('READ_EXIF', 'Auslesen der EXIF Daten wiederholen');
define('RESET_VIEW_COUNT', 'Zähler x mal angesehen auf Null setzen');
define('RESET_VOTES', 'Anzahl Stimmen auf Null setzen');
define('DEL_COMM', 'Kommentare löschen');
define('UPL_APPROVAL', 'Genehmigung zum Hochladen');
define('EDIT_PICS', 'Bilder bearbeiten');
define('SEE_NEXT', 'nächste Bilder ansehen');
define('SEE_PREV', 'vorherige Bilder ansehen');
define('N_PIC', '%s Bilder');
define('N_OF_PIC_TO_DISP', 'Bilder pro Seite');
define('APPLY', 'änderungen ausführen');

// lang_groupmgr_php
define('GROUP_NAME', 'Gruppen-Name');
define('DISK_QUOTA', 'Speicherplatz');
define('CAN_RATE', 'Darf Bilder bewerten');
define('CAN_SEND_ECARDS', 'Darf eCards versenden');
define('CAN_POST_COM', 'Darf Kommentare abgeben');
define('CAN_UPLOAD', 'Darf Bilder hochladen');
define('CAN_HAVE_GALLERY', 'Darf eine persönliche Galerie haben');
//define('APPLY', 'änderungen ausführen');
define('CREATE_NEW_GROUP', 'Neue Gruppe erstellen');
define('DEL_GROUPS', 'ausgewählte Gruppe(n) löschen');
define('CONFIRM_DEL', 'Achtung: wenn Du eine Gruppe löschst werden die dazu gehörenden Benutzer in die Gruppe \'Registrierte Benutzer\' Verschoben !\\n\\nWillst Du das ?');
define('GROUP_TITLE', 'Benutzer-Gruppen verwalten');
define('APPROVAL_1', 'öffentl. Upload best. (1)');
define('APPROVAL_2', 'Priv. Upload best. (2)');
define('NOTE1', '<b>(1)</b> Das Hochladen in ein öffentliches Album muß durch den Admin bestätigt werden');
define('NOTE2', '<b>(2)</b> Das Hochladen in ein privates Album muß durch den Admin bestätigt werden');
//define('NOTES', 'Anmerkungen');

// lang_index_php
define('WELCOME', 'Startseite');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'Willst Du dieses Album wirklich LöSCHEN? \\nAlle darin befindlichen Bilder und Kommentare werden ebenfalls gelöscht.');
//define('DELETE', 'Löschen');
define('MODIFY', 'Eigenschaften');
//define('EDIT_PICS', 'Bilder bearbeiten');

// lang_list_categories
define('HOME', 'Galerie');
define('STAT1', '<b>[pictures]</b> Bilder in <b>[albums]</b> Alben und <b>[cat]</b> Kategorien mit <b>[comments]</b> Kommentaren, <b>[views]</b> mal angesehen');
define('STAT2', '<b>[pictures]</b> Bilder in <b>[albums]</b> Alben, <b>[views]</b> mal angesehen');
define('XX_S_GALLERY', '%s\'s Galerie');
define('STAT3', '<b>[pictures]</b> Bilder in <b>[albums]</b> Alben mit <b>[comments]</b> Kommentaren, <b>[views]</b> mal angesehen');

// lang_list_users
define('USER_LIST', 'Benutzer-Liste');
define('NO_USER_GAL', 'Es gibt keine Benutzer, die eigene Alben haben dürfen');
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
define('ALB_PERM', 'Berechtigungen für dieses Album');
define('CAN_VIEW', 'Album kann angesehen werden von');
define('MOD_CAN_UPLOAD', 'Besucher können Bilder hochladen');
define('CAN_POST_COMMENTS', 'Besucher können Kommentare abgeben');
define('MOD_CAN_RATE', 'Besucher können Bilder bewerten');
define('USER_GAL', 'Benutzer-Galerie');
define('NO_CAT', '* keine Kategorie *');
define('ALB_EMPTY', 'Album ist leer');
define('LAST_UPLOADED', 'Letzes Bild, das hochgeladen wurde');
define('PUBLIC_ALB', 'Jeder (öffentliches Album)');
define('ME_ONLY', 'Nur ich');
define('OWNER_ONLY', 'Nur der Besitzer des Albums (%s)');
define('GROUPP_ONLY', 'Mitglieder der Gruppe \'%s\'');
define('ERR_NO_ALB_TO_MODIFY', 'Es ist kein Album zum Bearbeiten in der Datenbank.');
define('UPDATE', 'Album aktualisieren');

// lang_rate_pic_php
define('ALREADY_RATED', 'Du hast dieses Bild schon bewertet');
define('RATE_OK', 'Deine Bewertung wurde akzeptiert');

// lang_register_php
define('USERNAME', 'Benutzername');
define('X_S_PROFILE', '%s\'s Benutzerprofil');
define('GROUP', 'Gruppe');
define('DISK_USAGE', 'Speicherplatz-Verbrauch');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Kommentare bearbeiten');
define('NO_COMMENT', 'keine zu bearbeitenden Kommentare vorhanden');
define('N_COMM_DEL', '%s Kommentar(e) gelöscht');
define('N_COMM_DISP', 'Anzahl anzuzeigende Kommentare');
define('R_SEE_PREV', 'vorherigen anzeigen');
define('R_SEE_NEXT', 'nächsten anzeigen');
define('R_DEL_COMM', 'markierte Kommentare löschen');

// lang_search_php
define('S_SEARCH', 'Bildersammlung durchsuchen');

// lang_search_new_php
define('PAGE_TITLE', 'neue Bilder suchen');
define('SELECT_DIR', 'Wähle Verzeichnis');
define('SELECT_DIR_MSG', 'Diese Funktion ermöglicht, mehrere Bilder der Galerie hinzuzufügen, die mit einem FTP-Programm schon auf Deine Webseite hochgeladen wurden.<br /><br />Wähle das Verzeichnis, in das Du die Bilder hochgeladen hast');
define('NO_PIC_TO_ADD', 'Kein Bild zum Hinzufügen gefunden');
define('NEED_ONE_ALBUM', 'Du brauchst mindestens ein Album, um dieses Funktion auszuführen');
define('WARNING', 'Achtung');
define('CHANGE_PERM', 'das Skript kann in dieses Verzeichnis nicht schreiben, Du musst die Lese-/Schreibberechtigung (chmod) auf 755 oder 777 setzen, bevor Du versuchst, Bilder hinzuzufügen!');
define('TARGET_ALBUM', '<b>Bilder aus dem Verzeichnis &quot;</b>%s<b>&quot; in </b>%s ablegen');
define('FOLDER', 'Verzeichnis');
define('IMAGE', 'Bild');
//define('ALBUM', 'Album');
define('RESULT', 'Resultat');
define('DIR_RO', 'Verzeichnis nicht beschreibbar. ');
define('DIR_CANT_READ', 'Verzeichnis nicht lesbar. ');
define('INSERT', 'Füge neue Bilder der Galerie hinzu');
define('LIST_NEW_PIC', 'Liste neuer Bilder');
define('INSERT_SELECTED', 'Markierte Bilder einfügen');
define('NO_PIC_FOUND', 'Keine neuen Bilder gefunden');
define('BE_PATIENT', 'Bitte Geduld, das Skript braucht Zeit, um die Bilder hinzuzufügen');
define('SN_NOTES', '<ul><li><b>OK</b> : bedeuted, daß das Bild erfolgreich hinzugefügt wurde<li><b>DP</b> : bedeutet, daß das Bild ein Duplikat ist und schon in der Datenbank vorhanden ist<li><b>PB</b> : bedeutet, daß das Bild nicht hinzugefügt werden konnte; überprüfe Deine Einstellungen und die Berechtigungen der Verzeichnisse, in dem die Bilder liegen<li>Falls die OK, DP, PB \'Zeichen\' nicht erscheinen klicke auf die nicht-funktionierenden Bilder, um die Fehlermeldungen von PHP zu sehen<li>Wenn Dein Browser in ein Timeout läuft, klicke auf die Aktualisieren-Schaltfläche</ul>');
define('SELECT_ALBUM', 'Wähle ein Album');
define('NO_ALBUM', 'Es wurde kein Album ausgewählt, gehe zurück um ein Album für die Bilder zu wählen');

// lang_upload_php
define('UP_TITLE', 'Bild hochladen');
define('MAX_FSIZE', 'Maximal zulässige Dateigrösse ist %s KB. Es können nur .jpg und .png - Dateien hochgeladen werden');
//define('ALBUM', 'Album');
define('PICTURE', 'Bild');
define('PIC_TITLE', 'Bild-Titel');
define('DESCRIPTION', 'Bild-Beschreibung');
define('UP_KEYWORDS', 'Stichworte (Trennung mit Komma)');
define('ERR_NO_ALB_UPLOADABLES', 'Leider gibt es kein Album, in das Du Bilder hochladen darfst');

// lang_usermgr_php
define('U_TITLE', 'Benutzer verwalten');
//define('NAME_A', 'Name aufsteigend');
//define('NAME_D', 'Name absteigend');
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
define('ERR_EDIT_SELF', 'Du kannst Dein eigenes Profil hier nicht bearbeiten, benutze dafür den Link \'mein Profil\'');
define('EDIT', 'bearbeiten');
//define('DELETE', 'löschen');
define('U_NAME', 'Benutzername');
//define('GROUP', 'Gruppe');
define('INACTIVE', 'Inaktiv');
//define('OPERATIONS', 'Operationen');
define('PICTURES', 'Bilder');
define('DISK_SPACE', 'Speicherplatzverbrauch / Quota');
define('REGISTERED_ON', 'Registriert am');
define('U_USER_ON_P_PAGES', '%d Benutzer auf %d Seite(n)');
define('USER_CONFIRM_DEL', 'Willst Du diesen Benutzer wirklich LöSCHEN? \\nAlle seine Bilder und Alben werden ebenfalls gelöscht.');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'Gewählter Benutzer existiert nicht!');
define('MODIFY_USER', 'Benutzer ändern');
//define('NOTES', 'Anmerkungen');
define('NOTE_LIST', '<li>Wenn Du das derzeitige Passwort nicht ändern willst, lasse das Feld \"Passwort\" leer');
define('PASSWORD', 'Passwort');
define('USER_ACTIVE_CP', 'Benutzer ist aktiv');
define('USER_GROUP_CP', 'Benutzergruppe');
define('USER_EMAIL', 'E-Mail Adresse des Benutzers');
define('USER_WEB_SITE', 'Webseite des Benutzers');
define('CREATE_NEW_USER', 'neuen Benutzer anlegen');
define('USER_FROM', 'Ort');
define('USER_INTERESTS', 'Hobbies/Interessen');
define('USER_OCC', 'Beruf/Beschäftigung');

// lang_util_php
define('UTIL_TITLE', 'Grösse ändern');
define('WHAT_IT_DOES', 'Was macht dieses Tool');
define('WHAT_UPDATE_TITLES', 'Erzeugt Titel aus Dateinamen');
define('WHAT_DELETE_TITLE', 'Löscht Titel');
define('WHAT_REBUILD', 'Erneuert Fingerabdruck und Bilder in Zwischengrösse gemäß aktuellen EInstellungen');
define('WHAT_DELETE_ORIGINALS', 'Löscht Bilder in Original-Grösse und ersetzt sie mit Bildern in Zwischengrösse');
define('U_FILE', 'Datei');
define('TITLE_SET_TO', 'ändere Titel auf');
define('SUBMIT_FORM', 'los');
define('UPDATED_SUCCESFULLY', 'erfolgreich geändert');
define('ERROR_CREATE', 'FEHLER beim erzeugen von');
define('CONTINUE', 'Mehr Bilder durchlaufen');
define('MAIN_SUCCESS', 'Die Datei %s wurde erfolgreich als Hauptbild benutzt');
define('ERROR_RENAME', 'Fehler beim Umbenennen von %s zu %s');
define('ERROR_NOT_FOUND', 'Die Datei %s wurde nicht gefunden');
define('U_BACK', 'zurück zur Auswahl');
define('THUMBS_WAIT', 'Aktualisiere Fingerabdruck und/oder Bilder in Zwischengrösse, bitte warten...');
define('THUMBS_CONTINUE_WAIT', 'Fortfahren mit der Aktualisierung der Fingerabdruck und/oder Bilder in Zwischengrösse...');
define('TITLES_WAIT', 'Aktualisiere überschriften, bitte warten...');
define('DELETE_WAIT', 'Lösche überschriften, bitte warten...');
define('REPLACE_WAIT', 'Lösche Originale und ersetze sie mit Bilder in Zwischengrösse, bitte warten..');
define('INSTRUCTION', 'Kurzanleitung');
define('INSTRUCTION_ACTION', 'Wähle Aktion');
define('INSTRUCTION_PARAMETER', 'Wähle Parameter');
define('INSTRUCTION_ALBUM', 'Wähle Album');
define('INSTRUCTION_PRESS', 'Klicke %s');
define('U_UPDATE', 'Fingerabdruck und/oder Bilder in Zwischengrösse aktualisieren');
define('UPDATE_WHAT', 'Was soll aktualisiert werden');
define('UPDATE_THUMB', 'Nur Fingerabdruck');
define('UPDATE_PIC', 'Nur Bilder in Zwischengrösse');
define('UPDATE_BOTH', 'Sowohl Fingerabdruck als auch Bilder in Zwischengrösse');
define('UPDATE_NUMBER', 'Anzahl der Bilder, die pro Klick aktualisiert werden sollen');
define('UPDATE_OPTION', '(Verringere diesen Wert niedriger, wenn &quot;Time-Out&quot;-Probleme auftreten sollten)');
define('FILENAME_TITLE', 'Dateiname &rArr; Bild-überschrift');
define('FILENAME_HOW', 'Wie soll der Dateiname modifiziert werden');
define('FILENAME_REMOVE', 'übersetze die Engung .jpg und ersetze _ (Unterstrich) mit Leerzeichen');
define('FILENAME_EURO', 'ändere 2003_11_23_13_20_20.jpg zu 23/11/2003 13:20');
define('FILENAME_US', 'ändere 2003_11_23_13_20_20.jpg zu 11/23/2003 13:20');
define('FILENAME_TIME', 'ändere 2003_11_23_13_20_20.jpg zu 13:20');
define('UT_DELETE', 'Lösche Bild-überschriften oder Bilder in Original-Grösse');
define('DELETE_TITLE', 'Bild-überschriften löschen');
define('DELETE_ORIGINAL', 'Bilder in Originalgrösse löschen');
define('DELETE_REPLACE', 'Lösche die Original-Bilder und ersetze sie mit Bilder in Zwischengrösse');
//define('SELECT_ALBUM', 'Wähle Album');

// lang_pagetitle_php
define('VIEWING', 'Bild ansehen');
define('USR', '\'s Bilder-Gallerie');
define('PHOTOGALLERY', 'Bilder-Gallerie');
$lang_usermgr_php = array(
        'name_a' => 'Name aufsteigend',
        'name_d' => 'Name absteigend',
        'group_a' => 'Gruppe aufsteigend',
        'group_d' => 'Gruppe absteigend',
        'reg_a' => 'Registrierungsdatum aufsteigend',
        'reg_d' => 'Registrierungsdatum absteigend',
        'pic_a' => 'Bilderanzahl aufsteigend',
        'pic_d' => 'Bilderanzahl absteigend',
        'disku_a' => 'Speicherplatz-Verbrauch aufsteigend',
        'disku_d' => 'Speicherplatz-Verbrauch absteigend',
);
$lang_byte_units = array('Bytes','kB','MB',);
// Day of the month
$lang_day_of_week = array('So','Mo','Di','Mi','Do','Fr','Sa',);
$lang_month = array('Januar','Februar','März','April','Mai','Juni','Juli','August','September','Oktober','November','Dezember',);
$lang_meta_album_names = array(
	'random' => 'Zufalls-Bilder',
    'lastup' => 'Neueste Bilder',
    'lastupby' => 'My Last Additions', // new 1.2.2
    'lastalb' => 'Zuletzt aktualisierte Alben',
    'lastcom' => 'Neueste Kommentare',
    'lastcomby' => 'My Last comments', // new 1.2.2
    'topn' => 'Am meisten angesehen',
    'toprated' => 'Am besten bewertet',
    'lasthits' => 'Zuletzt angesehen',
    'search' => 'Suchergebnisse',
    'favpics' => 'Bevorzugte Bilder'
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
	'Allgemeine Einstellungen',
        array('Galerie-Name', 'gallery_name', 0),
        array('Galerie Beschreibung', 'gallery_description', 0),
        array('Galerie-Admin E-Mail', 'gallery_admin_email', 0),
        array('Ziel-URL http://example.com/html/ um  \'mehr Bilder ansehen\' Link in e-cards', 'ecards_more_pic_target', 0),
//        array('Sprache', 'lang', 5),
        array('Design', 'theme', 6),
        array('Page Specific Titles instead of >Coppermine', 'nice_titles', 1),
    // Album list view
        'Ansicht Albumliste',
        array('Breite der Haupttabelle (in Pixel oder %)', 'main_table_width', 0),
        array('Anzahl anzuzeigende Kategorie-Ebenen', 'subcat_level', 0),
        array('Anzahl anzuzeigende Alben', 'albums_per_page', 0),
        array('Anzahl Spalten in Album-Liste', 'album_list_cols', 0),
        array('Fingerabdruck-Grösse in Pixel', 'alb_list_thumb_size', 0),
        array('Inhalt der Hauptseite', 'main_page_layout', 0),
        array('Erste Ebene des Fingerabdruck der Alben auch in Kategorien anzeigen', 'first_level', 1),
    // Thumbnail view
        'Ansicht Fingerabdruck',
        array('Spaltenzahl auf Fingerabdruck-Seite', 'thumbcols', 0),
        array('Zeilenzahl auf Fingerabdruck-Seite', 'thumbrows', 0),
        array('Anzahl maximal anzuzeigende Tabs', 'max_tabs', 0),
        array('Bild-Beschriftung anzeigen (zusätzlich zum Bild-Titel) unterhalb des Fingerabdruck', 'caption_in_thumbview', 1),
        array('Anzahl der Kommentare unterhalb des Fingerabdruck anzeigen', 'display_comment_count', 1),
        array('Standard-Sortierung für Bilder', 'default_sort_order', 3),
        array('Mindestmenge Stimmen, die ein Bild benötigt, um in der \'am besten bewertet\' Liste zu erscheinen', 'min_votes_for_rating', 0),
            array('Alts and title tags of thumbnail show title and keyword instead of picinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
    // Display Image & Comment settings
        'Ansicht Bild &amp; Einstellungen Kommentare',
        array('Tabellenbreite für Bildanzeige (in Pixel oder %)', 'picture_table_width', 0),
        array('Bildinformationen sind standardmäßig sichtbar', 'display_pic_info', 1),
        array('Schimpfwörter in Kommentaren zensieren', 'filter_bad_words', 1),
        array('Smilies in Kommentaren erlauben', 'enable_smilies', 1),
        array('Erlauben von mehreren Kommentaren zu einem Bild von einem Mittglied', 'disable_flood_protection', 1),
        array('E-mail zum Administrator wenn neus Bild empfangen ist' , 'comment_email_notification', 1),
        array('Maximallänge für Bildbeschreibung', 'max_img_desc_length', 0),
        array('Maximale Anzahl von Buchstaben in einem Wort', 'max_com_wlength', 0),
        array('Maximale Zeilenzahl eines Kommentars', 'max_com_lines', 0),
        array('Maximale Länge eines Kommentars', 'max_com_size', 0),
        array('Film-Streifen anzeigen', 'display_film_strip', 1),
        array('Anzahl Elemente in Film-Streifen', 'max_film_strip_items', 0),
        array('Vollbild anzeigen für unregistrierten Betutzer', 'allow_anon_fullsize', 1),
		array('Number of days between being able to vote on the same image','keep_votes_time',0), // new in cpg1.2.2c nuke
		    array('Show fullsize picture in slideshow','fullsize_slideshow',1),
    array('Show blocks on the right of displayimage if right blocks are on at module level?', 'right_blocks', 1), // new 1.2.2
    // Pictures and thumbnails settings
    'Bild- und Fingerabdruck-Einstellungen',
    array('Qualität für JPEG-Dateien', 'jpeg_qual', 0),
    array('Place watermark on image', 'watermark', 1),
    array('Maximale Höhe oder Breite vom Fingerabdruck <b>*</b>', 'thumb_width', 0),
    array('Welche Dimension soll genutzt werden für den Fingerabdruck ( Breite oder Höhe oder das, was jeweils grösser ist)<b>*</b>', 'thumb_use', 7),
    array('Bilder in Zwischengröße erzeugen', 'make_intermediate', 1),
    array('Maximale Breite oder Höhe von Bildern in Zwischengröße <b>*</b>', 'picture_width', 0),
    array('Maximalgröße für das Hochladen von Bildern (KB)', 'max_upl_size', 0),
    array('Maximale Breite oder Höhe für das Hochladen von Bildern (in Pixel)', 'max_upl_width_height', 0),
    array('Allow multiple Files to be upload with same file name', 'samename', 1), 
	// User settings
    'Benutzer-Einstellungen',
    array('Registrierung von Benutzern zulassen', 'allow_user_registration', 1),
/*
    array('Registrierung von Benutzern erfordert überprüfung per E-Mail', 'reg_requires_valid_email', 1),
    array('Zulassen, daß mehrere Benutzer die gleiche E-Mail Adresse haben', 'allow_duplicate_emails_addr', 1),
*/
    array('Benutzer dürfen Privatalbum anlegen', 'allow_private_albums', 1),
    array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
	// Custom fields for image description
        'Benutzerdefinierte Felder für zusätzliche Bildinformationen (leer lassen, falls nicht benötigt)',
        array('Name Feld 1', 'user_field1_name', 0),
        array('Name Feld 2', 'user_field2_name', 0),
        array('Name Feld 3', 'user_field3_name', 0),
        array('Name Feld 4', 'user_field4_name', 0),
    // Pictures and thumbnails advanced settings
        'Erweiterte Bild- und Fingerabdruck-Einstellungen',
        array('Icons für Persönliche Alben nicht eingeloggten Benutzern anzeigen?', 'show_private', 1),
        array('Nicht erlaubte Zeichen in Dateinamen', 'forbiden_fname_char', 0),
        array('erlaubte Datei-Erweiterungen für das Hochladen von Bildern', 'allowed_file_extensions', 0),
        array('Methode zur Größenänderung von Bildern', 'thumb_method', 2),
        array('Pfad zur \'convert\' Anwendung von ImageMagick / netpbm (z.B. /usr/bin/X11/)', 'impath', 0),
        array('Erlaubte Datei-Typen (nur gültig für ImageMagick)', 'allowed_img_types', 0),
        array('Kommandozeilen-Parameter für ImageMagick', 'im_options', 0),
        array('EXIF-Daten in JPEG-Dateien lesen', 'read_exif_data', 1),
        array('Lese IPTC Daten aus JPEG Bildern', 'read_iptc_data', 1),
        array('Alben-Verzeichnis <b>*</b>', 'fullpath', 0),
        array('Verzeichnis für Benutzer-Bilder <b>*</b>', 'userpics', 0),
        array('Vorsilbe für Bilder in Zwischengröße <b>*</b>', 'normal_pfx', 0),
        array('Vorsilbe für den Fingerabdruck <b>*</b>', 'thumb_pfx', 0),
        array('Bildinfo anzeigen Datei-Name', 'picinfo_display_filename', '1'),
        array('Bildinfo anzeigen Album-Name', 'picinfo_display_album_name', '1'),
        array('Bildinfo anzeigen Datei-Größe', 'picinfo_display_file_size', '1'),
        array('Bildinfo anzeigen Dimensionen', 'picinfo_display_dimensions', '1'),
        array('Bildinfo anzeigen Wiedergabe-Zähler', 'picinfo_display_count_displayed', '1'),
        array('Bildinfo anzeigen URL', 'picinfo_display_URL', '1'),
        array('Bildinfo anzeigen URL als Favorit', 'picinfo_display_URL_bookmark', '1'),
        array('Bildinfo anzeigen favorisiertes Album', 'picinfo_display_favorites', '1'),
    // Cookies & Charset settings
        'Cookies &amp; Zeichensatz-Einstellungen',
        array('Cookie-Name, der vom Skript verwendet wird', 'cookie_name', 0),
        array('Cookie-Pfad', 'cookie_path', 0),
//        array('Zeichensatz', 'charset', 4),
        'Verschiedene Einstellungen',
        array('Debug-Modus ein', 'debug_mode', 1),
        '<br /><div align="center">(*) Felder, die mit * gekennzeichnet sind dürfen nicht geändert werden, wenn sich schon Bilder in der Galerie befinden!</div><br />'
        );
// end left side interpretation