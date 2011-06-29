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
  $Source: /cvs/l10n/dutch/coppermine.php,v $
  $Revision: 9.9 $
  $Author: nanocaiordo $
  $Date: 2006/06/23 10:54:22 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Bekeken');//new in 1.2.2nuke
define('PIC_VOTES', 'Stemmen');//new in 1.2.2nuke
define('PIC_COMMENTS', 'Commentaar');//new in 1.2.2nuke

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Dutch');
define('LANG_NAME_NATIVE', 'Nederlands');
define('LANG_COUNTRY_CODE', 'nl');
define('TRANS_NAME', 'Ron Bos');
define('TRANS_EMAIL', 'ron@ronbos.nl');
define('TRANS_WEBSITE', 'http://ronbos.nl/');
define('TRANS_DATE', '2003-10-31');

define('TRANS_NAME2', 'Sander Zumbrink');
define('TRANS_EMAIL2', 'cpg (a) zumbo.nl');
define('TRANS_WEBSITE2', 'http://zumbo.nl/');
define('TRANS_DATE2', '2005-01-25');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'utf-8');

// ltr or rtl
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Ja');
define('NO', 'Nee');
// some common strings
define('BACK', 'Terug');
define('CONTINU', 'Doorgaan');
define('INFO', 'Informatie');
//define('ERROR', 'Fout');
define('ALBUM_DATE_FMT', '%d %B %Y');
define('LASTCOM_DATE_FMT', '%d-%m-%y om %H:%M');
define('LASTUP_DATE_FMT', '%d %B %Y');
define('REGISTER_DATE_FMT', '%d %B %Y');
define('LASTHIT_DATE_FMT', '%d %B %Y om %H:%M ');
define('COMMENT_DATE_FMT', '%d %B %Y om %H:%M ');

// lang_meta_album_names
define('RANDOM', 'Willekeurige foto\'s');
define('LASTUP', 'Laatste toevoegingen');
define('LASTUPBY', 'Mijn laatste toevoegingen');
define('LASTALB', 'Laatste gewijzigde albums');
define('LASTCOM', 'Laatste commentaren');
define('LASTCOMBY', 'Mijn laatste commentaren');
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
define('MEMBERS_ONLY', 'Deze functie is alleen voor leden.');
define('MUSTBE_GOD', 'Deze functie is alleen voor de sitebeheerder.');
define('NO_IMG_TO_APPROVE', 'Geen foto\'s voor keuring');

// lang_main_menu
define('ALB_LIST_TITLE', 'Ga naar de album lijst');
define('ALB_LIST_LNK', 'Album lijst');
define('MY_GAL_TITLE', 'Ga naar mijn persoonlijke galerij');
define('MY_GAL_LNK', 'Mijn galerij');
define('MY_PROF_LNK', 'Mijn profiel');
define('MY_PROF_TITLE','Controleer disk quota en groepen');
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
define('LASTUP_TITLE', 'Recente upload foto\'s');
define('LASTCOM_TITLE',  'Foto\'s gesorteerd op laatste commentaar');
define('LASTCOM_LNK',  'Laatste commentaar');
define('TOPN_TITLE', 'Meest bekeken foto\'s');
define('TOPN_LNK', 'Meest bekeken');
define('TOPRATED_TITLE', 'Best gewaardeerde foto\'s');
define('TOPRATED_LNK',  'Best beoordeeld');
define('SEARCH_TITLE', 'Zoek foto collectie');
define('SEARCH_LNK', 'Zoek');
define('FAV_TITLE', 'Mijn favorieten');
define('FAV_LNK', 'Mijn Favorieten');
define('HELP_TITLE', 'HELP');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

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
//define('MY_PROF_LNK', 'Mijn profiel');

// lang_cat_list
define('CATEGORY', 'Categorie');
define('ALBUMS', 'Albums');
//define('PICTURES', 'Foto\'s');

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
define('THUMB_RATING', 'MENING');
define('SORT_TITLE', 'Sorteer foto\'s op:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Terug naar de thumbnail pagina');
define('PIC_INFO_TITLE', 'Toon/verberg foto informatie');
define('SLIDESHOW_TITLE', 'Diashow');
define('SLIDESHOW_DISABLED', 'Diashow is uitgeschakeld');
define('SLIDESHOW_DISABLED_MSG', 'Deze functie is alleen voor leden.');
define('ECARD_TITLE', 'Stuur deze foto als een e-card');
define('ECARD_DISABLED', 'E-cards zijn uitgeschakeld');
define('ECARD_DISABLED_MSG', 'Je hebt geen toestemming een e-card te versturen');
define('PREV_TITLE', 'Bekijk voorgaande foto');
define('NEXT_TITLE', 'Bekijk volgende foto');
define('PIC_POS', 'Foto %s / %s');
define('NO_MORE_IMAGES', 'Er zijn niet meer plaatjes in deze galerij');
define('NO_LESS_IMAGES', 'Dit is het plaatje in de galerij');

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
//define('INFORMATION', 'Informatie');
//define('ERROR', 'Fout');
define('_CRITICAL_ERROR', 'Kritieke fout');
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
//define('CATEGORY', 'Categorie');
define('OPERATIONS', 'Bewerkingen');
define('MOVE_INTO', 'Verplaats naar');
define('UPDATE_CREATE', 'Aanpassen/Creëer categorie');
define('PARENT_CAT', 'Ouder categorie');
define('CAT_TITLE', 'Categorie titel');
define('CAT_DESC', 'Categorie omschrijving');

// lang_config_php
define('CONFIG_TITLE', 'Configuratie');
define('RESTORE_CFG', 'Herstel de fabrieksinstellingen');
define('SAVE_CFG', 'Bewaar nieuwe configuratie');
define('NOTES', 'Notitie');
//define('INFO', 'Informatie');
define('UPD_SUCCESS', 'Coppermine configuratie is aangepast');
define('RESTORE_SUCCESS', 'Coppermine standaard configuratie is hersteld');
define('NAME_A', 'Naam oplopend');
define('NAME_D', 'Naam aflopend');
define('TITLE_A', 'Titel oplopend');
define('TITLE_D', 'Titel aflopend');
define('DATE_A', 'Datum oplopend');
define('DATE_D', 'Datum aflopend');
define('RATING_A', 'Mening oplopend');
define('RATING_D', 'Mening aflopend');
define('TH_ANY', 'Max verhouding');
define('TH_HT', 'Hoogte');
define('TH_WD', 'Breedte');


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
//define('INFO', 'Informatie');
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
//define('COMMENT', 'commentaar');
define('IM_IN_ALB', 'foto in album');
define('ALB_DEL_SUCCESS', 'Album \'%s\' verwijderd');
define('ALB_MGR', 'Album Manager');
define('ERR_INVALID_DATA', 'Ongeldige data ontvangen in \'%s\'');
define('CREATE_ALB', 'creëren album \'%s\'');
define('UPDATE_ALB', 'Aanpassen album \'%s\' met titel \'%s\' en index \'%s\'');
define('DEL_PIC', 'Verwijder foto');
define('DEL_ALB', 'Verwijder album');
define('DEL_USER', 'Verwijder gebruiker');
//define('ERR_UNKNOWN_USER', 'De geselecteerde gebruiker bestaat niet !');
define('COMMENT_DELETED', 'Commentaar succesvol verwijderd');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'Weet je het zeker dat je deze foto wilt VERWIJDEREN ? \\nCommentaar wordt ook verwijderd.');
define('DEL_THIS_PIC', 'VERWIJDER FOTO');
define('SIZE', '%s x %s pixels');
define('VIEWS', '%s keer');
define('SLIDESHOW', 'Diashow');
define('STOP_SLIDESHOW', 'STOP DIASHOW');
define('VIEW_FS', 'Klik om de fullsize foto te bekijken');
define('EDIT_PIC', 'BEWERK FOTO');

// lang_picinfo
define('PIC_INF_TITLE', 'Foto informatie');
define('PIC_INF_FILENAME', 'Bestandsnaam');
define('ALBUM_NAME', 'Albumnaam');
define('PIC_INFO_RATING', 'Waardering (%s stemmen)');
define('KEYWORDS', 'Sleutelwoorden');
define('PIC_INF_FILE_SIZE', 'Bestandsgrootte');
define('PIC_INF_DIMENSIONS', 'Afmetingen');
define('DISPLAYED', 'Getoond');
define('CAMERA', 'Camera');
define('DATE_TAKEN', 'Opnamedatum');
define('APERTURE', 'Opening');
define('EXPOSURE_TIME', 'Sluitertijd');
define('FOCAL_LENGTH', 'Brandpuntsafstand');
define('COMMENT', 'Commentaar');
define('ADDFAV', 'Voeg toe aan Favorieten');
define('ADDFAVPHRASE', 'Favoriet');
define('REMFAV', 'Verwijder uit Favorieten');
define('IPTCTITLE', 'IPTC Titel');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Trefwoorden');
define('IPTCCATEGORY', 'IPTC Categorie');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categorieën');
define('BOOKMARK_PAGE', 'Bookmark Foto');
define('REMOVEFAV', 'Verwijderd van Favorieten');
define('ADDEDTOFAV', 'Toegevoegd aan Favorieten');

// lang_display_comments
define('OK', 'OK');
define('COM_EDIT_TITLE', 'Wijzig dit commentaar.');
define('CONFIRM_DELETE_COM', 'Weet je het zeker dat je dit commentaar wilt verwijderen ?');
define('ADD_YOUR_COMMENT', 'Voeg je commentaar toe.');
define('COM_NAME', 'Naam');
//define('COMMENT', 'Commentaar');
define('YOUR_NAME', 'Je naam');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Klik op de foto om dit window te sluiten');

// lang_ecard_php
define('E_TITLE', 'Stuur een e-card');
define('INVALID_EMAIL', '<b>Waarschuwing</b> : ongeldig e-mail adres !');
define('E_ECARD_TITLE', 'Een e-card van %s voor jou.');
define('VIEW_ECARD', 'Indien de e-card niet juist getoond wordt, klik dan op deze link.');
define('VIEW_MORE_PICS', 'Klik op deze link om meer foto\'s te bekijken !');
define('SEND_SUCCESS', 'Je e-card is verzonden.');
define('SEND_FAILED', 'Sorry, maar de server kan je e-card niet verzenden...');
define('FROM', 'Van');
define('_YOUR_NAME', 'Jouw naam');
define('YOUR_EMAIL', 'Jouw e-mail adres');
define('TO', 'Aan');
define('RCPT_NAME', 'Naam geadresseerde');
define('RCPT_EMAIL', 'E-mail adres geadresseerde');
define('GREETINGS', 'Groeten');
define('MESSAGE', 'Bericht');
define('ECARD_LINK_CORRUPT', 'Sorry, maar de e-card wordt door de mail client niet correct weergegeven.  Probeer de link met copy-paste in een webbrowser te bekijken.'); //NEW

// lang_editpics_php
define('PIC_INFO', 'Foto&nbsp;info');
define('ALBUM', 'Album');
define('EDIT_TITLE', 'Titel');
define('DESC', 'Beschrijving');
//define('KEYWORDS', 'Sleutelwoorden');
define('PIC_INFO_STR', '%s&times;%s - %sKB - %s bekeken - %s stemmen');
define('APPROVE', 'Laat foto toe');
define('POSTPONE_APP', 'Stel toelating uit');
//define('DEL_PIC', 'Delete picture');
define('READ_EXIF', 'Read EXIF info again');
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
define('MOD_CAN_RATE', 'Kan foto\'s beoordelen ');
define('CAN_SEND_ECARDS', 'Kan e-cards zenden');
define('CAN_POST_COM', 'Kan commentaar posten');
define('MOD_CAN_UPLOAD', 'Kan foto\'s uploaden');
define('CAN_HAVE_GALLERY', 'Kan een persoonlijke galerij hebben');
//define('APPLY', 'Pas wijzigingen toe');
define('CREATE_NEW_GROUP', 'Creëer nieuwe groep');
define('DEL_GROUPS', 'Verwijder geselecteerde groep(en)');
define('CONFIRM_DEL', 'Waarschuwing, indien je een groep verwijderd, kunnen gebruikers die behoorden tot deze groep niet meer inloggen !\\n\\nWil je doorgaan ?');
define('GROUP_TITLE', 'Beheer gebruikersgroepen');
define('APPROVAL_1', 'Pub. Upl. toestemming (1)');
define('APPROVAL_2', 'Priv. Upl. toestemming (2)');
define('NOTE1', '<b>(1)</b> upload in een publiek album benodigd toesteming van de admin');
define('NOTE2', '<b>(2)</b> upload in een album welke behoort aan een gebruiker benodigd toestemming van de admin');
//define('NOTES', 'Notities');

// lang_index_php
define('WELCOME', 'Welkom !');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'Weet je het zeker dat je dit album wilt VERWIJDEREN ? \\nAlle foto\\\'s en commentaren worden ook verwijderd.');
//define('DELETE', 'Verwijder');
define('MODIFY', 'Eigenschappen');
//define('EDIT_PICS', 'Wijzig foto\'s');

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

// lang_register_php
define('USERNAME', 'Gebruikersnaam');
define('GROUP', 'Groep');
define('DISK_USAGE', 'Disk gebruik');
define('X_S_PROFILE', '%s\'s profiel');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Beoordeel commentaar');
define('NO_COMMENT', 'Er is geen commentaar te beoordelen');
define('N_COMM_DEL', '%s commentaren verwijderd');
define('N_COMM_DISP', 'Aantal te tonen commentaren');
define('R_SEE_PREV', 'Bekijk voorgaande');
define('R_SEE_NEXT', 'Bekijk volgende');
define('R_DEL_COMM', 'Verwijder geselecteerde commentaar');

// lang_search_php
define('S_SEARCH', 'Doorzoek de foto collectie');

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
define('RESULT', 'Resultaat');
define('DIR_RO', 'Niet beschrijfbaar. ');
define('DIR_CANT_READ', 'Niet leesbaar. ');
define('INSERT', 'Toevoegen van nieuwe foto\'s aan galerij');
define('LIST_NEW_PIC', 'Lijst van nieuwe foto\'s');
define('INSERT_SELECTED', 'Invoegen van geselecteerde foto\'s');
define('NO_PIC_FOUND', 'Er zijn GEEN foto\'s gevonden');
define('BE_PATIENT', 'Heb geduld, het script heeft tijd nodig om de foto\'s toe te voegen');
define('SN_NOTES', '<ul><li><b>OK</b> : betekent dat de foto succesvol toegevoegd is<li><b>DP</b> : betekent dat de foto dubbel is en zich reeds in de database bevindt<li><b>PB</b> : betekent dat de foto niet toegevoegd kon worden, controleer je configuratie en de permissies op mappen waar de foto\'s zich bevinden<li>Als de OK, DP, PB \'tekens\' niet verschijnen klik dan op de verbroken foto om te kijken of er een PHP fout bericht gegeven wordt<li>Indien je browser uittimed klik dan op de herlaad knop</ul>');
define('SELECT_ALBUM', 'Selecteer album');
define('NO_ALBUM', 'Er was geen album geselecteerd,  ga terug en selecteer een album waar de foto\'s in moeten.');


// lang_upload_php
define('UP_TITLE', 'Upload foto');
define('MAX_FSIZE', 'Maximaal toegestane bestandsgrootte is %s KB');
//define('ALBUM', 'Album');
define('PICTURE', 'Foto');
define('PIC_TITLE', 'Foto titel');
define('DESCRIPTION', 'Foto omschrijving');
define('UP_KEYWORDS', 'Sleutelwoorden (scheiden met spaties)');
define('ERR_NO_ALB_UPLOADABLES', 'Sorry er is geen album waar het je toegestaan is foto\'s naar te uploaden');

// lang_usermgr_php
define('U_TITLE', 'Gebruikers beheer');
//define('NAME_A', 'Naam oplopend');
//define('NAME_D', 'Naam aflopend');
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
//define('DELETE', 'Verwijder');
define('U_NAME', 'Gebruikersnaam');
//define('GROUP', 'Groep');
define('INACTIVE', 'Inactief');
//define('OPERATIONS', 'Bewerkingen');
define('PICTURES', 'Foto\'s');
define('DISK_SPACE', 'Disk ruimte / Quotum');
define('REGISTERED_ON', 'Geregistreerd op');
define('U_USER_ON_P_PAGES', '%d gebruikers op %d pagina(s)');
define('USER_CONFIRM_DEL', 'Weet je het zeker dat je deze gebruiker wilt VERWIJDEREN ? \\nAl zijn foto\\\'s en albums worden ook verwijderd.');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'Geselecteerde gebruiker bestaat niet !');
define('MODIFY_USER', 'Wijzig gebruiker');
//define('NOTES', 'Notities');
define('NOTE_LIST', '<li>Als je niet je huidige wachtwoord wilt wijzigen, laat dan het \"wachtwoord\" veld leeg');
define('PASSWORD', 'Wachtwoord');
define('USER_ACTIVE_CP', 'Gebruiker is actief');
define('USER_GROUP_CP', 'Gebruiker groep');
define('USER_EMAIL', 'Gebruiker e-mail');
define('USER_WEB_SITE', 'Gebruiker website');
define('CREATE_NEW_USER', 'Creëer nieuwe gebruiker');
define('USER_FROM', 'Gebruiker locatie');
define('USER_INTERESTS', 'Gebruiker interesse');
define('USER_OCC', 'Gebruiker beroep');

// lang_util_php
define('UTIL_TITLE', 'Aanpassen afmetingen foto\'s');
define('WHAT_IT_DOES', 'Wat doet deze tool');
define('WHAT_UPDATE_TITLES', 'Creëert titels uit bestandsnamen');
define('WHAT_DELETE_TITLE', 'Verwijdert titels');
define('WHAT_REBUILD', 'Herbouwt thumbnails en past afmetingen aan van foto\'s');
define('WHAT_DELETE_ORIGINALS', 'Verwijdert de originele foto\'s en vervangt deze met de aangepaste afmetingen versie');
define('U_FILE', 'Bestand');
define('TITLE_SET_TO', 'titel aangepast naar');
define('SUBMIT_FORM', 'Doorvoeren');
define('UPDATED_SUCCESFULLY', 'aanpassing succesvol');
define('ERROR_CREATE', 'FOUT bij aanmaken');
define('CONTIN', 'Verwerk meer foto\'s');
define('MAIN_SUCCESS', 'Het bestand %s is succesvol gebruikt als hoofd foto');
define('ERROR_RENAME', 'Fout bij hernoemen van %s naar %s');
define('ERROR_NOT_FOUND', 'Het bestand %s is niet gevonden');
define('U_BACK', 'terug naar begin');
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
define('U_UPDATE', 'Aanpassen thumbs en/of afmetingen foto\'s');
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
define('UT_DELETE', 'Verwijder foto titel of originele grootte van foto\'s');
define('DELETE_TITLE', 'Verwijder foto titel');
define('DELETE_ORIGINAL', 'Verwijder originele foto\'s');
define('DELETE_REPLACE', 'Verwijder de originele foto\'s en vervang deze door de in afmeting aangepast versies');
//define('SELECT_ALBUM', 'Selecteer album');

// lang_pagetitle_php
define('VIEWING', 'Bekijken foto');
define('USR', '\'s Foto galerij');
define('PHOTOGALLERY', 'Foto galerij');
$lang_usermgr_php = array(
	'name_a' => 'Naam oplopend',
	'name_d' => 'Naam aflopend',
	'group_a' => 'Groep oplopend',
	'group_d' => 'Groep aflopend',
	'reg_a' => 'Registratie datum oplopend',
	'reg_d' => 'Registratie datum aflopend',
	'pic_a' => 'Aantal foto\'s oplopend',
	'pic_d' => 'Aantal foto\'s aflopend',
	'disku_a' => 'Disk gebruik oplopend',
	'disku_d' => 'Disk gebruik aflopend',
    );
$lang_byte_units = array('Bytes', 'KB', 'MB');
// Day of weeks and months
$lang_day_of_week = array('zon','maa','din','woe','don','vri','zat',);
$lang_month = array('jan','feb','mrt','apr','mei','jun','jul','aug','sep','okt','nov','dec',);
$lang_meta_album_names = array(
    'random' => 'Willekeurige foto\'s',
    'lastup' => 'Laatste toevoegingen',
    'lastupby' => 'Mijn laatste toevoegingen', // new 1.2.2
    'lastalb' => 'Laatste gewijzigde albums',
    'lastcom' => 'Laatste commentaar',
    'lastcomby' => 'Mijn laatste commentaar', // new 1.2.2
    'topn' => 'Meest bekeken',
    'toprated' => 'Best beoordeeld',
    'lasthits' => 'Laatst bekeken',
    'search' => 'Zoek resultaten',
    'favpics' => 'FFavoriete foto\'s' // changed in cpg1.2.0nuke
    );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array(
    'title' => 'Configuratie',
    'restore_cfg' => 'Herstel de fabrieksinstellingen',
    'save_cfg' => 'Bewaar nieuwe configuratie',
    'notes' => 'Notitie',
    'info' => 'Informatie',
    'upd_success' => 'Coppermine configuratie is aangepast',
    'restore_success' => 'Coppermine standaard configuratie is hersteld',
    'name_a' => 'Naam oplopend',
    'name_d' => 'Naam aflopend',
    'title_a' => 'Titel oplopend',
    'title_d' => 'Titel aflopend',
    'date_a' => 'Datum oplopend',
    'date_d' => 'Datum aflopend',
    'rating_a' => 'Mening oplopend', // new in cpg1.2.0nuke
    'rating_d' => 'Mening aflopend', // new in cpg1.2.0nuke
    'th_any' => 'Max verhouding',
    'th_ht' => 'Hoogte',
    'th_wd' => 'Breedte'
    );
// start left side interpretation
$lang_config_data = array(
    // General settings
    'Algemene instellingen',
    array('galerij naam', 'gallery_name', 0),
    array('galerij omschrijving', 'gallery_description', 0),
    array('galerij admin e-mail', 'gallery_admin_email', 0),
    array('Adres van de nuke folder vb http://example.com/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
    array('Thema', 'theme', 6),
    array('agina specifieke titel ipv. >Coppermine', 'nice_titles', 1),
    // Album list view
    'Albumlijst weergave',
    array('Breedte van de hoofdtabel (pixels of %)', 'main_table_width', 0),
    array('Aantal te tonen categorie niveaus', 'subcat_level', 0),
    array('Aantal te tonen albums', 'albums_per_page', 0),
    array('Aantal kolommen per albumlijst', 'album_list_cols', 0),
    array('Grootte van thumbnails in pixels', 'alb_list_thumb_size', 0),
    array('De inhoud van de hoofdpagina', 'main_page_layout', 0),
    array('Laat eerste niveau album thumbnails zien in categorie&euml;n', 'first_level', 1), 
    // Thumbnail view
    'Thumbnail weergave',
    array('Aantal kolommen op thumbnail pagina', 'thumbcols', 0),
    array('Aantal rijen op thumbnail pagina', 'thumbrows', 0),
    array('Maximaal aantal te tonen tabs', 'max_tabs', 0),
    array('Toon foto beschrijving onder de thumbnails', 'caption_in_thumbview', 1),
    array('Toon aantal commentaren onder de thumbnail', 'display_comment_count', 1),
    array('Standaard sorteer volgorde voor foto\'s', 'default_sort_order', 3),
    array('Minimum aantal stemmen op foto\'s voordat ze in de \'best-gewaardeerd\' lijst verschijnen', 'min_votes_for_rating', 0),
    array('Alts en titel van thumbnail geven title en trefwoorden weer ipv picinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
    // Display Image & Comment settings
    'Uiterlijk foto &amp; Commentaar instellingen',
    array('Breedte van de tabel om foto\'s te tonen (pixels of %)', 'picture_table_width', 0),
    array('Foto informatie is standaard zichtbaar', 'display_pic_info', 1),
    array('Filter slechte woorden in commentaren', 'filter_bad_words', 1),
    array('Sta emoticons toe in commentaren', 'enable_smilies', 1),
    array('Sta enkele opeenvolgende opmerkingen op een foto van de zelfde gebruiker toe', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
    array('E-mail admin bij plaatsing opmerking' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
    array('Maximale lengte van fotobeschrijving', 'max_img_desc_length', 0),
    array('Maximale aantal tekens in een woord', 'max_com_wlength', 0),
    array('Maximale aantal regels in een commentaar', 'max_com_lines', 0),
    array('Maximale lengte van commentaar', 'max_com_size', 0),
    array('Laat film strip zien', 'display_film_strip', 1),
    array('Aantal items in film strip', 'max_film_strip_items', 0),
    array('Anonieme gebruiker mag volledige foto zien', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
    array('Aantal dagen waarna men weer mag stemmen op dezelfde foto','keep_votes_time',0), // new in cpg1.2.2c nuke
    array('Toon volledige foto in diashow','fullsize_slideshow',1),
    array('Rechter blokken zichtbaar bij displayimage als ze aan staan voor de module ?', 'right_blocks', 1), // new 1.2.2
    // Pictures and thumbnails settings
    'Foto en thumbnail instellingen',
    array('Kwaliteit voor JPEG bestanden', 'jpeg_qual', 0),
    array('Plaats watermerk op foto', 'watermark', 1),
    array('Maximale afmeting van een thumbnail <b>*</b>', 'thumb_width', 0),
    array('Gebruik afmeting  (breedte of hoogte verhouding van thumbnail) <b>*</b>', 'thumb_use', 7),
    array('Cre&euml;er tussen foto\'s', 'make_intermediate', 1),
    array('Maximale breedte of hoogte van tussen foto\'s <b>*</b>', 'picture_width', 0),
    array('Maximale grootte van upload foto\'s (KB)', 'max_upl_size', 0),
    array('Maximale breedte en hoogte van upload foto\'s (pixels)', 'max_upl_width_height', 0), 
    array('Sta uploaden van bestanden met dezelfde naam toe', 'samename', 1), 
	// User settings
    'Gebruikers instellingen',
    array('Allow new user registrations', 'allow_user_registration', 1),
/*
    array('User registration requires email verification', 'reg_requires_valid_email', 1),
    array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),
*/
    array('Gebruikers kunnen priv&eacute; albums hebben', 'allow_private_albums', 1),
    array('Toon gebruikers avatar ipv. foto priv&eacute; album', 'avatar_private_album', 1),
	// Custom fields for image description
    'Eigen velden voor foto beschrijving (laat leeg indien niet gebruikt)',
    array('Naam Veld 1', 'user_field1_name', 0),
    array('Naam Veld 2', 'user_field2_name', 0),
    array('Naam Veld 3', 'user_field3_name', 0),
    array('Naam Veld 4', 'user_field4_name', 0), 
    // Pictures and thumbnails advanced settings
    'Foto\'s en thumbnails speciale instellingen',
    array('Laat priv&eacute; album icoon zien aan niet ingelogde gebruiker', 'show_private', 1),
    array('Verboden tekens in bestandsnamen', 'forbiden_fname_char', 0),
    array('Geaccepteerde bestandsextensies voor upload foto\'s', 'allowed_file_extensions', 0),
    array('Methode van aanpassen afmetingen van foto\'s', 'thumb_method', 2),
    array('Pad naar ImageMagick / netpbm \'convert\' utility (voorbeeld /usr/bin/X11/)', 'impath', 0),
    array('Toegestane bestandstype (alleen geldig voor ImageMagick)', 'allowed_img_types', 0),
    array('Command line opties voor ImageMagick', 'im_options', 0),
    array('Lees EXIF data in JPEG bestanden', 'read_exif_data', 1),
    array('Lees IPTC data in JPEG bestanden', 'read_iptc_data', 1), // new in cpg1.2.0nuke
    array('De album map <b>*</b>', 'fullpath', 0),
    array('De map voor gebruikers foto\'s <b>*</b>', 'userpics', 0),
    array('De prefix voor tussen foto\'s <b>*</b>', 'normal_pfx', 0),
    array('De prefix voor thumbnails <b>*</b>', 'thumb_pfx', 0),
    array('Picinfo toont bestandsnaam', 'picinfo_display_filename', '1'), // new in cpg1.2.0nuke
    array('Picinfo toont albumnaam', 'picinfo_display_album_name', '1'), // new in cpg1.2.0nuke
    array('Picinfo toont bestandsgroote', 'picinfo_display_file_size', '1'), // new in cpg1.2.0nuke
    array('Picinfo toont dimensies', 'picinfo_display_dimensions', '1'), // new in cpg1.2.0nuke
    array('Picinfo toont aantal x getoond', 'picinfo_display_count_displayed', '1'), // new in cpg1.2.0nuke
    array('Picinfo toont URL', 'picinfo_display_URL', '1'), // new in cpg1.2.0nuke
    array('Picinfo toont URL als bookmark link', 'picinfo_display_URL_bookmark', '1'), // new in cpg1.2.0nuke
    array('Picinfo toont fav album link', 'picinfo_display_favorites', '1'), // new in cpg1.2.0nuke
    // Cookies & Charset settings
    'Cookies &amp; Tekenset instellingen',
    array('Naam van de cookie, gebruikt door het script', 'cookie_name', 0),
    array('Path of the cookie used by the script', 'cookie_path', 0),
    //'Miscellaneous settings',
    'Overige instellingen',
    array('Aanzetten debug-modus', 'debug_mode', 1),
    '<br /><div align="center">(*) velden gemarkeerd met * mogen niet veranderd worden als je al foto\'s in je galerij hebt</div><br />'
    );
// end left side interpretation
