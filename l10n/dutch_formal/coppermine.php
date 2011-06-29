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
  $Source: /cvs/l10n/dutch_formal/coppermine.php,v $
  $Revision: 1.7 $
  $Author: nanocaiordo $
  $Date: 2008/03/20 11:59:26 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Bekeken');//new in 1.2.2nuke
define('PIC_VOTES', 'Stemmen');//new in 1.2.2nuke
define('PIC_COMMENTS', 'Commentaar');//new in 1.2.2nuke

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Dutch');
define('LANG_NAME_NATIVE', 'Dutch');
define('LANG_COUNTRY_CODE', 'nl');
define('TRANS_NAME', 'KokkieBlanda');
define('TRANS_EMAIL', 'cpgnuke@kokkieblanda.nl ');
define('TRANS_WEBSITE', 'http://dragonflycms.org/');
define('TRANS_DATE', '2005-07-03');
define('CHARSET', 'UTF-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'ja ');
define('NO', 'nee');
// some common strings
define('BACK', 'terug');
define('CONTINU', 'doorgaan');
define('INFO', 'informatie');
//define('_ERROR', 'Error'); //already in main lang file
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%m/%d/%y @ %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y @ %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y @ %I:%M %p');

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
define('ACCESS_DENIED', 'U heeft geen toestemming om deze pagina te bezoeken.');
define('PERM_DENIED', 'U heeft geen toestemming om deze handeling uit te voeren.');
define('PARAM_MISSING', 'Script aangeroepen zonder de vereiste parameters.');
define('NON_EXIST_AP', 'TGeselecteerde album/foto bestaat niet!');
define('QUOTA_EXCEEDED', 'Diskquotum overschreden<br /><br />U heeft  een quotum van [quota]K, uw foto\'s gebruiken nu [space]K, het toevoegen van deze foto zorgt er voor dat u uw quotum overschrijdt.');
define('GD_FILE_TYPE_ERR', 'Indien u de GD image library gebruikt zijn alleen JPEG en PNG toegestaan.');
define('INVALID_IMAGE', 'De foto die u heeft geupload is corrupt of kan niet behandeld worden door de GD library.');
define('RESIZE_FAILED', 'Niet in staat de thumbnail of de afmetingen van de foto aan te passen.');
define('NO_IMG_TO_DISPLAY', 'Geen foto om te tonen.');
define('NON_EXIST_CAT', 'De geselecteerde categorie bestaat niet.');
define('ORPHAN_CAT', 'De categorie heeft een niet bestaande ouder, start de categorie manager om het probleem te herstellen.');
define('DIRECTORY_RO', 'Map \'%s\' is niet beschrijfbaar, foto kan niet verwijderd worden.');
define('NON_EXIST_COMMENT', 'Het geselecteerde commentaar is niet aanwezig.');
define('PIC_IN_INVALID_ALBUM', 'Foto is in een niet bestaand album (%s)!?');
define('BANNED', 'U bent op dit moment uitgesloten van het gebruik van deze site.');
define('NOT_WITH_UDB', 'Deze functie is uitgeschakeld in Coppermine omdat het geïntegreerd is met forum software. Wat U tracht te doen is of niet ondersteund in deze configuratie, of de functie zal afgehandeld moeten worden door de forum software.');
define('MEMBERS_ONLY', 'Deze functie is alleen voor leden.');
define('MUSTBE_GOD', 'Deze functie is alleen voor de sitebeheerder. U moet ingelogd zijn als superadmin, god account om deze functie te kunnen gebruiken.');
define('NO_IMG_TO_APPROVE', 'Geen foto\'s voor keuring');

// lang_main_menu
define('ALB_LIST_TITLE', 'Ga naar de album lijst');
define('ALB_LIST_LNK', 'Album lijst');
define('MY_GAL_TITLE', 'Ga naar mijn persoonlijke galerij');
define('MY_GAL_LNK', 'Mijn galerij');
define('MY_PROF_LNK', 'Mijn profiel');
define('MY_PROF_TITLE','Controleer disk quota en groepen');
define('ADM_MODE_TITLE', 'Schakel om naar admin-modus');
define('ADM_MODE_LNK', 'Admin-modus');
define('USR_MODE_TITLE', 'Schakel om naar gebruiker-modus');
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
define('TOPRATED_LNK', 'Best beoordeeld');
define('SEARCH_TITLE', 'Zoek foto collectie');
define('SEARCH_LNK', 'Zoek');
define('FAV_TITLE', 'Mijn favorieten');
define('FAV_LNK', 'Mijn Favorieten');
define('HELP_TITLE', 'HELP');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Upload toestemming ');
define('CONFIG_LNK', 'Instellingen');
define('ALBUMS_LNK', 'Albums');
define('CATEGORIES_LNK', 'Categorieën');
define('USERS_LNK', 'Gebruikers');
define('GROUPS_LNK', 'Groepen');
define('COMMENTS_LNK', 'Commentaren');
define('SEARCHNEW_LNK', 'Batch toevoegen foto\'s');
define('UTIL_LNK', 'Afmetingen aanpassen foto\'s');
define('BAN_LNK', 'Verban gebruikers');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Creëer/sorteer albums');
define('MODIFYALB_LNK', 'Wijzig mijn albums');
//define('MY_PROF_LNK', 'My profile');

// lang_cat_list
define('CATEGORY', 'Categorië');
define('ALBUMS', 'Albums');
//define('PICTURES', 'Pictures');

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
define('SLIDESHOW_DISABLED_MSG', 'Deze functie is alleen voor leden, registreer a.u.b.');
define('ECARD_TITLE', 'Stuur deze foto als een e-card');
define('ECARD_DISABLED', 'E-cards zijn uitgeschakeld');
define('ECARD_DISABLED_MSG', 'U heeft geen toestemming een e-card te versturen');
define('PREV_TITLE', 'Bekijk voorgaande foto');
define('NEXT_TITLE', 'Bekijk volgende foto');
define('PIC_POS', 'Foto %s / %s');
define('NO_MORE_IMAGES', 'Er zijn niet meer plaatjes in deze gallerie');
define('NO_LESS_IMAGES', 'Dit is het plaatje in de gallerie');

// lang_rate_pic
define('RATE_THIS_PIC', 'Beoordeel deze foto');
define('NO_VOTES', '(Nog geen stemmen)');
define('RATING', '(huidige beoordeling : %s / 5 met %s stemmen)');
define('RUBBISH', 'Rotzooi');
define('POOR', 'Zwak');
define('FAIR', 'Gemiddeld');
define('GOOD', 'Goed');
define('EXCELLENT', 'Uitstekend');
define('GREAT', 'Subliem');

// lang_cpg_die
//define('INFO', 'Information');
//define('ERROR', 'Error');
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
define('N_VIEWS', '%s views');
define('N_VOTES', '(%s stemmen)');


// lang_albmgr_php
define('ALB_NEED_NAME', 'Albums moeten een naam hebben !');
define('CONFIRM_MODIFS', 'Weet u zeker dat u deze wijzigingen wilt maken ?');
define('NO_CHANGE', 'U heeft geen enkele wijziging gedaan !');
define('NEW_ALBUM', 'Nieuw album');
define('CONFIRM_DELETE1', 'Weet u het zeker dat u dit album wilt verwijderen ?');
define('CONFIRM_DELETE2', 'Alle foto\'s en commentaren zullen verloren gaan !');
define('SELECT_FIRST', 'Selecteer eerst een album');
define('ALB_MRG', 'Album Manager');
define('MY_GALLERY', '* Mijn galerij *');
define('NO_CATEGORY', '* Geen categorie *');
define('DELETE', 'Verwijder');
define('NEW', 'Nieuw');
define('APPLY_MODIFS', 'Pas wijzigingen toe');
define('SELECT_CATEGORY', 'Selecteer categorie');

// lang_catmgr_php
define('MISS_PARAM', 'Vereiste parameters voor \'%s\' bewerking niet gegeven !');
define('UNKNOWN_CAT', 'Geselecteerde categorie bestaat niet in database');
define('USERGAL_CAT_RO', 'Gebruikergalerijen categorie kan niet verwijderd worden !');
define('MANAGE_CAT', 'Beheer categorieën');
define('CONFIRM_DELETE_CAT', 'Weet u het zeker dat u deze categorie wilt VERWIJDEREN');
//define('CATEGORY', 'Category');
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
define('NOTES', 'Notities');
//define('INFO', 'Information');
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
define('EMPTY_NAME_OR_COM', 'U moet uw naam en commentaar ingeven.');
define('COM_ADDED', 'Commentaar toegevoegd');
define('ALB_NEED_TITLE', 'U moet een naam geven aan het album !');
define('NO_UDP_NEEDED', 'Geen aanpassing nodig.');
define('ALB_UPDATED', 'Album aangepast');
define('UNKNOWN_ALBUM', 'Geselecteerde album bestaat niet of u heeft geen toestemming naar dit album te uploaden');
define('NO_PIC_UPLOADED', 'Er is geen foto geupload !<br /><br />Indien u echt een foto geselecteerd hebt om te uploaden, controleer of de server bestands upload toestaat...of dat het geen geanimeerde gif is.');
define('ERR_MKDIR', 'Creëeren van map %s niet gelukt !');
define('DEST_DIR_RO', 'Doel map %s is niet beschrijfbaar door het script !');
define('ERR_MOVE', 'Onmogelijk %s te verplaatsen naar %s !');
define('ERR_FSIZE_TOO_LARGE', 'De door u opgeladen foto is te groot (maximum toegelaten is %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Het door u opgeladen bestand is te groot (maximum toegestaan is %s KB) !');
define('ERR_INVALID_IMG', 'Het bestand dat u opgeladen heeft is geen geldig fotobestand !');
define('ALLOWED_IMG_TYPES', 'Je kan aleen %s foto\'s uploaden.');
define('ERR_INSERT_PIC', 'De foto \'%s\' kan niet ingevoegd worden in het album.');
define('UPLOAD_SUCCESS', 'Uw foto is succesvol geladen<br /><br />'.((is_admin())? '' :'Het wordt zichtbaar als de admin het goedgekeurd heeft.'));
//define('INFO', 'Information');
define('ERR_COMMENT_EMPTY', 'Je commentaar is leeg !');
define('ERR_INVALID_FEXT', 'Alleen bestanden met de volgende extentie worden geaccepteerd : <br /><br />%s.');
define('NO_FLOOD', 'Sorry maar u bent de auteur van het laatste geposte commentaar voor deze foto<br /><br />Wijzig het commentaar dat u toegevoegd hebt indien u dit wenst.');
define('REDIRECT_MSG', 'U wordt doorgestuurd.<br /><br /><br />Klik 'Doorgaan' indien de pagina niet automatisch ververst wordt');
define('UPL_SUCCESS', 'Je foto is succesvol toegevoegd.');

// lang_delete_php
define('CAPTION', 'Koptekst');
define('FS_PIC', 'full size foto');
define('DEL_SUCCESS', 'succesvol verwijderd');
define('NS_PIC', 'normale grootte foto');
define('ERR_DEL', 'kan niet verwijderd worden');
define('THUMB_PIC', 'thumbnail');
//define('COMMENT', 'comment');
define('IM_IN_ALB', 'foto in album');
define('ALB_DEL_SUCCESS', 'Album \'%s\' verwijderd');
define('ALB_MGR', 'Album Manager');
define('ERR_INVALID_DATA', 'Ongeldige data ontvangen in \'%s\'');
define('CREATE_ALB', 'creëren album \'%s\'');
define('UPDATE_ALB', 'Aanpassen album \'%s\' met titel \'%s\' en index \'%s\'');
define('DEL_PIC', 'Verwijder foto');
define('DEL_ALB', 'Verwijder album');
define('DEL_USER', 'Verwijder gebruiker');
//define('ERR_UNKNOWN_USER', 'The selected user does not exist !');
define('COMMENT_DELETED', 'Commentaar succesvol verwijderd');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'Weet u het zeker dat je deze foto wilt VERWIJDEREN ? <br />Commentaar wordt ook verwijderd.');
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
define('ADDFAVPHRASE', 'Favorieten');
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
define('COM_EDIT_TITLE', ' Wijzig dit commentaar');
define('CONFIRM_DELETE_COM', 'Weet u het zeker dat u dit commentaar wilt verwijderen ?');
define('ADD_YOUR_COMMENT', 'Voeg uw commentaar toe.');
define('COM_NAME', 'Naam');
//define('COMMENT', 'Comment');
define('YOUR_NAME', 'Uw naam');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Voeg je commentaar toe.');

// lang_ecard_php
define('E_TITLE', 'Stuur een e-card');
define('INVALID_EMAIL', '<b>Waarschuwing</b> : ongeldig e-mail adres !');
define('E_ECARD_TITLE', 'Een e-card van %s voor u.');
define('VIEW_ECARD', 'Indien de e-card niet juist getoond wordt, klik dan op deze link');
define('VIEW_MORE_PICS', 'Klik op deze link om meer foto\'s te bekijken !');
define('SEND_SUCCESS', 'Uw e-card is verzonden');
define('SEND_FAILED', 'Sorry, maar de server kan uw e-card niet verzenden...');
define('FROM', 'Van');
define('_YOUR_NAME', 'Uw naam');
define('YOUR_EMAIL', 'Uw e-mail adres');
define('TO', 'Aan');
define('RCPT_NAME', 'Naam geadresseerde');
define('RCPT_EMAIL', 'E-mail adres geadresseerde');
define('GREETINGS', 'Groeten');
define('MESSAGE', 'Bericht');
define('ECARD_LINK_CORRUPT', 'Sorry, maar de e-card wordt door de mail client niet correct weergegeven. Probeer de link met copy-paste in een webbrowser te bekijken.'); //NEW

// lang_editpics_php
define('PIC_INFO', 'Foto&nbsp;info');
define('ALBUM', 'Album');
define('EDIT_TITLE', 'Titel');
define('DESC', 'Omschrijving');
//define('KEYWORDS', 'Keywords');
define('PIC_INFO_STR', '%sx%s - %sKB - %s bekeken - %s stemmen');
define('APPROVE', 'Laat foto toe');
define('POSTPONE_APP', 'Stel toelating uit');
//define('DEL_PIC', 'Delete picture');
define('READ_EXIF', 'Lees EXIF informatie opnieuw ');
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
define('DISK_QUOTA', 'Schijfquotum');
define('CAN_RATE', 'Kan foto\'s beoordelen');
define('CAN_SEND_ECARDS', 'Kan e-cards zenden');
define('CAN_POST_COM', 'Kan commentaar posten');
define('CAN_UPLOAD', 'Kan foto\'s uploaden');
define('CAN_HAVE_GALLERY', 'Kan een persoonlijke galerie hebben');
//define('APPLY', 'Apply modifications');
define('CREATE_NEW_GROUP', 'Creëer nieuwe groep');
define('DEL_GROUPS', 'Verwijder geselecteerde groep(en)');
define('CONFIRM_DEL', 'Waarschuwing, indien u een groep verwijderd, kunnen gebruikers die behoorden tot deze groep niet meer inloggen !\\n\\nWilt u doorgaan ?');
define('GROUP_TITLE', 'Beheer gebruikersgroepen');
define('APPROVAL_1', 'Pub. Upl. toestemming (1)');
define('APPROVAL_2', 'Priv. Upl. toestemming (2)');
define('NOTE1', '<b>(1)</b> upload in een publiek album benodigd toesteming van de admin');
define('NOTE2', '<b>(2)</b> upload in een album welke behoort aan een gebruiker benodigd toestemming van de admin');
//define('NOTES', 'Notes');

// lang_index_php
define('WELCOME', 'Welkom !');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'Weet u het zeker dat u dit album wilt VERWIJDEREN ? <br />Alle foto\'s en commentaren worden ook verwijderd.');
//define('DELETE', 'DELETE');
define('MODIFY', 'EIGENSCHAPPEN');
//define('EDIT_PICS', 'EDIT PICS');

// lang_list_categories
define('HOME', _HOME);
define('STAT1', '<b>[pictures]</b> foto\'s in <b>[albums]</b> albums en <b>[cat]</b> categorieën met <b>[comments]</b> commentaren en <b>[views]</b> keer bekeken');
define('STAT2', '<b>[pictures]</b> foto\'s in <b>[albums]</b> albums en <b>[views]</b> keer bekeken');
define('XX_S_GALLERY', '%s\'s Galerie');
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
define('MOD_CAN_UPLOAD', 'Bezoekers kunnen foto\'s uploaden');
define('CAN_POST_COMMENTS', 'Bezoekers kunnen commentaar posten');
define('MOD_CAN_RATE', 'Gebruiker kan foto\'s beoordelen');
define('USER_GAL', 'Gebruiker galerie');
define('NO_CAT', '* geen categorie *');
define('ALB_EMPTY', 'Album is leeg');
define('LAST_UPLOADED', 'Laatste upload');
define('PUBLIC_ALB', 'Iedereen (publiek album)');
define('ME_ONLY', 'Alleen ik');
define('OWNER_ONLY', 'Alleen albumeigenaar (%s)');
define('GROUPP_ONLY', 'Leden van de \'%s\' groep');
define('ERR_NO_ALB_TO_MODIFY', 'Er is geen album die u kunt aanpassen. Creëer eerst een album!');
define('UPDATE', 'Pas album aan');

// lang_rate_pic_php
define('ALREADY_RATED', 'Sorry, maar u heeft deze foto reeds beoordeeld');
define('RATE_OK', 'Uw stem is geaccepteerd');

// lang_register_php
define('USERNAME', 'Gebruikersnaam');
define('GROUP', 'Groep');
define('DISK_USAGE', 'Schijf gebruik');
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
define('SELECT_DIR_MSG', 'Deze funktie stelt u in staat een aantal foto\'s gelijktijdig naar uw server te uploaden d.m.v. FTP.<br /><br />Selecteer de map waar u de foto\'s naar hebt opgeladen');
define('NO_PIC_TO_ADD', 'Er is geen foto om toe te voegen');
define('NEED_ONE_ALBUM', 'U heeft minimaal een album nodig om deze funktie te gebruiken');
define('WARNING', 'Waarschuwing');
define('CHANGE_PERM', 'Het script kan niet schrijven in deze map, u moet zijn mode veranderen naar 755 of 777 voordat u probeert een foto toe te voegen !');
define('TARGET_ALBUM', '<b>Plaats foto\'s van &quot;</b>%s<b>&quot; in </b>%s');
define('FOLDER', 'Folder');
define('IMAGE', 'foto');
//define('ALBUM', 'Album');
define('RESULT', 'Resultaat');
define('DIR_RO', 'Niet beschrijfbaar ');
define('DIR_CANT_READ', 'Niet leesbaar. ');
define('INSERT', 'Toevoegen van nieuwe foto\'s aan galerij');
define('LIST_NEW_PIC', 'Lijst van nieuwe foto\'s');
define('INSERT_SELECTED', 'Invoegen van geselecteerde foto\'s');
define('NO_PIC_FOUND', 'Er zijn GEEN foto\'s gevonden');
define('BE_PATIENT', 'Heb geduld, het script heeft tijd nodig om de foto\'s toe te voegen');
define('SN_NOTES', '<ul><li><b>OK</b> : betekent dat de foto succesvol toegevoegd is<li><b>DP</b> : betekent dat de foto dubbel is en zich reeds in de database bevindt<li><b>PB</b> : betekent dat de foto niet toegevoegd kon worden, controleer uw configuratie en de permissies op mappen waar de foto\'s zich bevinden<li>Als de OK, DP, PB \'tekens\' niet verschijnen klik dan op de verbroken foto om te kijken of er een PHP fout bericht gegeven wordt<li>Indien uw browser uittimed klik dan op de herlaad knop</ul>');
define('SELECT_ALBUM', 'Selecteer album');
define('NO_ALBUM', 'Er was geen album geselecteerd, ga terug en selecteer een album waar de foto\'s in moeten.');

// lang_upload_php
define('UP_TITLE', 'Upload foto');
define('MAX_FSIZE', 'Maximaal toegestane bestandsgrootte is %s KB');
//define('ALBUM', 'Album');
define('PICTURE', 'Foto');
define('PIC_TITLE', 'Foto titel');
define('DESCRIPTION', 'Foto beschrijving');
define('UP_KEYWORDS', 'Sleutelwoorden (scheiden met spaties)');
define('ERR_NO_ALB_UPLOADABLES', 'Sorry er is geen album waar het toegestaan is foto\'s naar te uploaden. Creëer eerst een album !');

// lang_usermgr_php
define('U_TITLE', 'Gebruikers beheer');
//define('NAME_A', 'Name ascending');
//define('NAME_D', 'Name descending');
define('GROUP_A', 'Groep aflopend');
define('GROUP_D', 'Group descending');
define('REG_A', 'Registratie datum oplopend');
define('REG_D', 'Registratie datum aflopend');
define('PIC_A', 'Aantal foto\'s oplopend');
define('PIC_D', 'Aantal foto\'s aflopend');
define('DISKU_A', 'Disk gebruik oplopend');
define('DISKU_D', 'Disk gebruik aflopend');
define('SORT_BY', 'Sorteer gebruikers op');
define('ERR_NO_USERS', 'Gebruikers tabel is leeg !');
define('ERR_EDIT_SELF', 'U kunt uw eigen profiel niet wijzigen, gebruik daarvoor de \'Mijn profiel\' link');
define('EDIT', 'WIJZIG');
//define('DELETE', 'DELETE');
define('U_NAME', 'Gebruikers naam');
//define('GROUP', 'Group');
define('INACTIVE', 'inactief');
//define('OPERATIONS', 'Operations');
define('PICTURES', 'Foto\'s');
define('DISK_SPACE', 'Disk ruimte / Quotum');
define('REGISTERED_ON', 'Geregistreerd op');
define('U_USER_ON_P_PAGES', '%d gebruikers op %d pagina(s)');
define('USER_CONFIRM_DEL', 'Weet u het zeker dat u deze gebruiker wilt VERWIJDEREN ? <br />Al zijn foto\'s en albums worden ook verwijderd');
define('MAIL', 'POST');
define('ERR_UNKNOWN_USER', 'Geselecteerde gebruiker bestaat niet !');
define('MODIFY_USER', 'Wijzig gebruiker');
//define('NOTES', 'Notes');
define('NOTE_LIST', '<li>Als u niet uw huidige wachtwoord wilt wijzigen, laat dan het "wachtwoord" veld leeg');
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
define('U_BACK', 'terug naar begi');
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
define('UPDATE_OPTION', '(Probeer deze instelling lager te zetten indien u timeout problemen ervaart)');
define('FILENAME_TITLE', 'Bestandsnaam &rArr; Foto titel');
define('FILENAME_HOW', 'Hoe moet de bestandsnaam aangepast worden');
define('FILENAME_REMOVE', 'Verwijder de .jpg uitgang en vervang _ (underscore) met spaties');
define('FILENAME_EURO', 'Verander 2003_11_23_13_20_20.jpg to 23/11/2003 13:20');
define('FILENAME_US', 'Verander 2003_11_23_13_20_20.jpg to 11/23/2003 13:20');
define('FILENAME_TIME', 'Verander 2003_11_23_13_20_20.jpg to 13:20');
define('UT_DELETE', 'Verwijder foto titel of originele grootte van foto\'s');
define('DELETE_TITLE', 'Verwijder foto titel');
define('DELETE_ORIGINAL', 'Verwijder originele foto\'s');
define('DELETE_REPLACE', 'Verwijder de originele foto\'s en vervang deze door de in afmeting aangepast versies');
//define('SELECT_ALBUM', 'Select album');

// lang_pagetitle_php
define('VIEWING', 'Bekijken foto');
define('USR', '\'s Foto Gallerie');
define('PHOTOGALLERY', 'Foto Gallerie');
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
    'General settings',
    array('Gallery name', 'gallery_name', 0),
    array('Gallery description', 'gallery_description', 0),
    array('Gallery administrator email', 'gallery_admin_email', 0),
    array('Address to nuke folder ie http://example.com/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
    array('Theme', 'theme', 6),
    array('Page Specific Titles instead of >Coppermine', 'nice_titles', 1),
//'Album list view',
    'Album list view',
    array('Width of the main table (pixels or %)', 'main_table_width', 0),
    array('Number of levels of sub-categories to display', 'subcat_level', 0),
    array('Number of albums to display', 'albums_per_page', 0),
    array('Number of columns for the album list', 'album_list_cols', 0),
    array('Size of thumbnails in pixels', 'alb_list_thumb_size', 0),
    array('The content of the main page', 'main_page_layout', 0),
    array('Show first level album thumbnails in categories', 'first_level', 1), 
//'Thumbnail view',
    'Thumbnail view',
    array('Number of columns on thumbnail page', 'thumbcols', 0),
    array('Number of rows on thumbnail page', 'thumbrows', 0),
    array('Maximum number of tabs to display', 'max_tabs', 0),
    array('Display picture caption (in addition to title) below the thumbnail', 'caption_in_thumbview', 1),
    array('Display number of comments below the thumbnail', 'display_comment_count', 1),
    array('Default sort order for pictures', 'default_sort_order', 3),
    array('Minimum number of votes for a picture to appear in the \'top-rated\' list', 'min_votes_for_rating', 0),
    array('Alts and title tags of thumbnail show title and keyword instead of picinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
 //'Display Image &amp; Comment settings',
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
// 'Pictures and thumbnails settings',
    'Pictures and thumbnails settings',
    array('Quality for JPEG files', 'jpeg_qual', 0),
    array('Place watermark on image', 'watermark', 1),
    array('Max dimension of a thumbnail <b>*</b>', 'thumb_width', 0),
    array('Use dimension ( width or height or Max aspect for thumbnail )<b>*</b>', 'thumb_use', 7),
    array('Create intermediate pictures', 'make_intermediate', 1),
    array('Max width or height of an intermediate picture <b>*</b>', 'picture_width', 0),
    array('Max size for uploaded pictures (KB)', 'max_upl_size', 0),
    array('Max width or height for uploaded pictures (pixels)', 'max_upl_width_height', 0), 
    array('Allow multiple Files to be upload with same file name', 'samename', 1), 
//'User settings',
    'User settings',
    array('Allow new user registrations', 'allow_user_registration', 1),
/*
    array('User registration requires email verification', 'reg_requires_valid_email', 1),
    array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),
*/
    array('Users can can have private albums', 'allow_private_albums', 1),
    array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',
    'Custom fields for image description (leave blank if unused)',
    array('Field 1 name', 'user_field1_name', 0),
    array('Field 2 name', 'user_field2_name', 0),
    array('Field 3 name', 'user_field3_name', 0),
    array('Field 4 name', 'user_field4_name', 0), 
	//'Pictures and thumbnails advanced settings',
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
    array('Picinfo display filename', 'picinfo_display_filename', 1), 
    array('Picinfo display album name', 'picinfo_display_album_name', 1), 
    array('Picinfo display_file_size', 'picinfo_display_file_size', 1), 
    array('Picinfo display_dimensions', 'picinfo_display_dimensions', 1), 
    array('Picinfo display_count_displayed', 'picinfo_display_count_displayed', 1), 
    array('Picinfo display_URL', 'picinfo_display_URL', 1), 
    array('Picinfo display URL as bookmark link', 'picinfo_display_URL_bookmark', 1), 
    array('Picinfo display fav album link', 'picinfo_display_favorites', 1), 
//    'Cookies &amp; Charset settings',
    'Cookies &amp; Charset settings',
    array('Name of the cookie used by the script', 'cookie_name', 0),
    array('Path of the cookie used by the script', 'cookie_path', 0),
//    'Miscellaneous settings',
    'Miscellaneous settings',
    array('Enable debug mode', 'debug_mode', 1),
    '<br /><div align="center">(*) Fields marked with * must not be changed if you already have pictures in your gallery</div><br />'
    );
// end left side interpretation
