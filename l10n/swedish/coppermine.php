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
  $Source: /cvs/l10n/swedish/coppermine.php,v $
  $Revision: 9.7 $
  $Author: djmaze $
  $Date: 2006/02/12 16:02:31 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Visade');
define('PIC_VOTES', 'Röster');
define('PIC_COMMENTS', 'Kommentarer');

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Swedish');
define('LANG_NAME_NATIVE', 'Svenska');
define('LANG_COUNTRY_CODE', 'se');
define('TRANS_NAME', 'Per Malmberg');
define('TRANS_EMAIL', 'per(at)pmalmberg.com');
define('TRANS_WEBSITE', 'http://pmalmberg.com');
define('TRANS_DATE', '2005-01-25');
define('CHARSET', 'utf-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Ja');
define('NO', 'Nej');
// some common strings
define('BACK', 'TILLBAKA');
define('CONTINUE', 'FORTSÄTT');
define('INFO', 'Information');
//define('ERROR', 'Fel');
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%m/%d/%y at %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y at %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y at %I:%M %p');

// lang_meta_album_names
define('RANDOM', 'Slumpmässiga bilder');
define('LASTUP', 'Senast inlagda');
define('LASTUPBY', 'Mina senaste tillägg');
define('LASTALB', 'Senaste uppdaterade album');
define('LASTCOM', 'Senaste kommentarer');
define('LASTCOMBY', 'Mina senaste kommentatarer');
define('TOPN', 'Mest visade');
define('TOPRATED', 'Topplista');
define('LASTHITS', 'Senast visat');
define('SEARCH', 'Sökresultat');
define('FAVPICS', 'Favoritbilder');

// lang_errors
define('ACCESS_DENIED', 'Du har inte rättigheter till den här sidan.');
define('PERM_DENIED', 'Du har inte tillåtelse att göra den här operationen.');
define('PARAM_MISSING', 'Skript anropat utan de krävda parametrarna.');
define('NON_EXIST_AP', 'Det valda albumet/bilden finns inte !');
define('QUOTA_EXCEEDED', 'Diskkvota övertrasserad<br /><br />Du har en diskkvot på [quota]K, ditt bild är på [space]K, att lägga till den här bilden gör att du övertrasserar diskkvotan.');
define('GD_FILE_TYPE_ERR', 'Vid användande av GD image library, så är endast JPEG- och PNG-format tillåtna.');
define('INVALID_IMAGE', 'Bilden du laddade upp är skadad eller kan inte hanteras av GD library');
define('RESIZE_FAILED', 'Kan inte skapa miniatyrbild eller förändra bildstorleken.');
define('NO_IMG_TO_DISPLAY', 'Ingen bild att visa');
define('NON_EXIST_CAT', 'Den valda kategorin finns inte');
define('ORPHAN_CAT', 'En kategori har en s.k. non-existing parent, kör category manager för att rätta till problemet.');
define('DIRECTORY_RO', 'Biblioteket \'%s\' är inte skrivbart, bildenn kan inte raderas');
define('NON_EXIST_COMMENT', 'Den valda kommentaren finns inte.');
define('PIC_IN_INVALID_ALBUM', 'Bilden är i ett icke existerande album (%s)!?');
define('BANNED', 'Du är för tillfället blockerad från den här siten.');
define('NOT_WITH_UDB', 'Den här funktionen är inaktiverad i Coppermine för att den är integrerad med forumets mjukvara. Vad du än försöker göra så stöds det inte i den här konfigurationen, eller så ska funktionen skötas av forumets mjukvara.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'Den här funktionen  är endast till för administratören. Du måste vara inloggad som superadministratör eller på gud-kontot för att komma åt denna funktion');
define('NO_IMG_TO_APPROVE', 'Inage bilder att godkänna');

// lang_main_menu
define('ALB_LIST_TITLE', 'Gå till albumlistan');
define('ALB_LIST_LNK', 'Albumlista');
define('MY_GAL_TITLE', 'Gå till mitt privata galleri');
define('MY_GAL_LNK', 'Mitt galleri');
define('MY_PROF_LNK', 'Min profil');
define('MY_PROF_TITLE','Kontrollera din diskkvot och grupper');
define('ADM_MODE_TITLE', 'Växla till adminläge');
define('ADM_MODE_LNK', 'Adminläge');
define('USR_MODE_TITLE', 'Växla till användarläge');
define('USR_MODE_LNK', 'Användarläge');
define('UPLOAD_PIC_TITLE', 'Ladda upp en bild till ett album');
define('UPLOAD_PIC_LNK', 'Ladda upp bild');
define('REGISTER_TITLE', 'Skapa ett konto');
define('REGISTER_LNK', 'Registrera');
define('LOGIN_LNK', 'Logga in');
define('LOGOUT_LNK', 'Logga ut');
define('LASTUP_LNK', 'Senaste uppladdningar');
define('LASTUP_TITLE', 'Senast uppladdade biler');
define('LASTCOM_TITLE',  'Bilder sorterade enligt sista kommentering');
define('LASTCOM_LNK',  'Senaste kommentarer');
define('TOPN_TITLE', 'Bilder som har visats mest');
define('TOPN_LNK', 'Mest visade');
define('TOPRATED_TITLE', 'Topprankade bilder');
define('TOPRATED_LNK',  'Topplista');
define('SEARCH_TITLE', 'Sök fotokollektionen');
define('SEARCH_LNK', 'Sök');
define('FAV_TITLE', 'My Favorites');
define('FAV_LNK', 'Mina Favoriter');
define('HELP_TITLE', 'HJÄLP');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Klara för publicering');
define('CONFIG_LNK', 'Konfigurera');
define('ALBUMS_LNK', 'Album');
define('CATEGORIES_LNK', 'Kategorier');
define('USERS_LNK', 'Användare');
define('GROUPS_LNK', 'Grupper');
define('COMMENTS_LNK', 'Kommentarer');
define('SEARCHNEW_LNK', 'Lägg till ett parti av bilder');
define('UTIL_LNK', 'Ändra storlek på bilden');
define('BAN_LNK', 'Blockera användare');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Skapa / sortera mina album');
define('MODIFYALB_LNK', 'Ändra i mina album');
//define('MY_PROF_LNK', 'Min profil');

// lang_cat_list
define('CATEGORY', 'Kategori');
define('ALBUMS', 'Album');
//define('PICTURES', 'Bilder');

// lang_album_list
define('ALBUM_ON_PAGE', '%d album på %d sida(or)');
// lang_thumb_view
define('DATE', 'DATUM');
define('NAME', 'FILNAMN');
define('TITLE', 'TITEL');
define('SORT_DA', 'Sortera datum stigande');
define('SORT_DD', 'Sortera datum fallande');
define('SORT_NA', 'Sortera namn stigande');
define('SORT_ND', 'Sortera namn fallande');
define('SORT_TA', 'Sortera titel stigande');
define('SORT_TD', 'Sortera titel fallande');
define('PIC_ON_PAGE', '%d bilder på %d sida(or)');
define('USER_ON_PAGE', '%d användare på %d sida(or)');
define('SORT_RA', 'Sortera stigande efter rankning');
define('SORT_RD', 'Sortera sjunkande efter rankning');
define('THUMB_RATING', 'Rankning');
define('SORT_TITLE', 'Sortera bilder efter:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Återvänd till miniatyrbildsida');
define('PIC_INFO_TITLE', 'Visa/dölj bild information');
define('SLIDESHOW_TITLE', 'Bildspel');
define('SLIDESHOW_DISABLED', 'Bildspel är inaktiverat');
define('SLIDESHOW_DISABLED_MSG', 'Den här funktionen är endast för medlemmar, anslut dig gärna.');
define('ECARD_TITLE', 'Skicka den här bilden som ett e-vykort');
define('ECARD_DISABLED', 'e-vykort är inaktiverat');
define('ECARD_DISABLED_MSG', 'Du har inte rättigheter att skicka e-vykort');
define('PREV_TITLE', 'Se föregående bild');
define('NEXT_TITLE', 'Se nästa bild');
define('PIC_POS', 'BILD %s/%s');
define('NO_MORE_IMAGES', 'Det finns inte några fler bilder i detta album');
define('NO_LESS_IMAGES', 'Det är är den första bilden i albumet');

// lang_rate_pic
define('RATE_THIS_PIC', 'Betygsätt den här bilden ');
define('NO_VOTES', '(Ingen röst än)');
define('RATING', '(nuvarande betyg : %s / 5 från %s röster)');
define('RUBBISH', 'Skräp');
define('POOR', 'Kass');
define('FAIR', 'Godkänd');
define('GOOD', 'Bra');
define('EXCELLENT', 'Mycket bra');
define('GREAT', 'Bäst');

// lang_cpg_die
//define('INFOR', 'Information');
//define('ERROR', 'Fel');
define('_CRITICAL_ERROR', 'Kritiskt fel');
define('FILE', 'Fil: ');
define('LINE', 'Rad: ');

// lang_display_thumbnails
define('FILENAME', 'Filnamn : ');
define('FILESIZE', 'Filstorlek : ');
define('DIMENSIONS', 'Bildstorlek : ');
define('DATE_ADDED', 'Inlagd den : ');

// lang_get_pic_data
define('N_COMMENTS', '%s kommentarer');
define('N_VIEWS', '%s visade');
define('N_VOTES', '(%s röster)');


// lang_albmgr_php
define('ALB_NEED_NAME', 'Album måste namnges!');
define('CONFIRM_MODIFS', 'Är du säker på att du vill göra dessa förändringar?');
define('NO_CHANGE', 'Du gjorde ingen förändring!');
define('NEW_ALBUM', 'Nytt album');
define('CONFIRM_DELETE1', 'Är du säker att du vill radera detta album?');
define('CONFIRM_DELETE2', '\\nAlla bilder och dess kommentarer kommer att förloras!');
define('SELECT_FIRST', 'Välj ett album först');
define('ALB_MRG', 'Albumhanterare');
define('MY_GALLERY', '* Mitt galleri *');
define('NO_CATEGORY', '* Ingen kategori *');
define('DELETE', 'Radera');
define('NEW', 'Nytt');
define('APPLY_MODIFS', 'Verkställ förändringar');
define('SELECT_CATEGORY', 'Välj kategori');

// lang_catmgr_php
define('MISS_PARAM', 'Parametrar som krävs för \'%s\'operationen stöds inte!');
define('UNKNOWN_CAT', 'Vald kategory finns inte i databasen');
define('USERGAL_CAT_RO', 'Kategorin Användargalleri kan inte raderas!');
define('MANAGE_CAT', 'Inställningar för kategorier');
define('CONFIRM_DELETE', 'Är du säker att du vill RADERA denna kategori');
//define('CATEGORY', 'Kategori');
define('OPERATIONS', 'Operationer');
define('MOVE_INTO', 'Flytta till');
define('UPDATE_CREATE', 'Uppdatera/Skapa kategori');
define('PARENT_CAT', 'Huvudkategori');
define('CAT_TITLE', 'Kategorititel');
define('CAT_DESC', 'Kategoribeskrivning');

// lang_config_php
define('CONFIG_TITLE', 'Konfiguration');
define('RESTORE_CFG', 'Återställ systemets grundinställningar');
define('SAVE_CFG', 'Spara ny konfiguration');
define('NOTES', 'Anm.');
//define('INFO', 'Information');
define('UPD_SUCCESS', 'Coppermine konfigurationen uppdaterades');
define('RESTORE_SUCCESS', 'Coppermines grundinställning återskapades');
define('NAME_A', 'Namn stigande');
define('NAME_D', 'Namn fallande');
define('TITLE_A', 'Titel stigande');
define('TITLE_D', 'Titel fallande');
define('DATE_A', 'Datum stigande');
define('DATE_D', 'Datum fallande');
define('RATING_A', 'Rankning stigande');
define('RATING_D', 'Rankning fallande');
define('TH_ANY', 'Maximal aspekt');
define('TH_HT', 'Höjd');
define('TH_WD', 'Bredd');


// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Du måste skriva ditt namn och en kommentar');
define('COM_ADDED', 'Kommentar inlagd');
define('ALB_NEED_TITLE', 'Du måste ge albumet en titel!');
define('NO_UDP_NEEDED', 'Ingen uppdatering behövs.');
define('ALB_UPDATED', 'Album updaterat');
define('UNKNOWN_ALBUM', 'Valt album existerar inte eller så har du inte rättigheter att ladda upp i detta album');
define('NO_PIC_UPLOADED', 'Ingen bild laddades upp!<br /><br />Om du är säker på att du valt en bild för uppladdning, kontrollera att servern tillåter uppladdning...');
define('ERR_MKDIR', 'Misslyckades att skapa biblioteket %s !');
define('DEST_DIR_RO', 'Målbiblioteket %s är inte skrivbart av scriptet!');
define('ERR_MOVE', 'Omöjligt att flytta %s till %s !');
define('ERR_FSIZE_TOO_LARGE', 'Bildstorleken du laddat upp är för stor (max tillåtet är %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Storleken på filen du laddat upp är för stor (max tillåtet är %s KB) !');
define('ERR_INVALID_IMG', 'Filen du laddat upp är inte i tillåtet format!');
define('ALLOWED_IMG_TYPES', 'Du kan bara ladda upp %s bilder.');
define('ERR_INSERT_PIC', 'Bilden \'%s\' kan inte infogas i albumet ');
define('UPLOAD_SUCCESS', 'Din bild laddades upp utan problem<br /><br />Den kommer att bli synlig efter att admin godkänt den.');
//define('INFO', 'Information');
define('ERR_COMMENT_EMPTY', 'Din kommentar är tom!');
define('ERR_INVALID_FEXT', 'Endast filer med följande ändelser är tillåtna: <br /><br />%s.');
define('NO_FLOOD', 'Ledsen men du är redan författare av den senaste kommentaren som är inlagd för den här bilden<br /><br />Ändra den redan inlagda kommentaren om du vill ämdra något');
define('REDIRECT_MSG', 'Du förflyttas.<br /><br /><br /Klicka \'FORTSÄTT\' om inte sidan uppdateras automatiskt');
define('UPL_SUCCESS', 'Din bild infogades utan problem.');

// lang_delete_php
define('CAPTION', 'Rubrik');
define('FS_PIC', 'full storlek på bild');
define('DEL_SUCCESS', 'Radering lyckades');
define('NS_PIC', 'normal storlek på bild');
define('ERR_DEL', 'kan inte raderas');
define('THUMB_PIC', 'miniatyrbild');
//define('COMMENT', 'kommentar');
define('IM_IN_ALB', 'bild i album');
define('ALB_DEL_SUCCESS', 'Album \'%s\' raderades');
define('ALB_MGR', 'Album Manager');
define('ERR_INVALID_DATA', 'Ogiltig data mottogs i \'%s\'');
define('CREATE_ALB', 'Skapar album \'%s\'');
define('UPDATE_ALB', 'Uppdaterar album \'%s\' med titeln \'%s\' och index \'%s\'');
define('DEL_PIC', 'Radera bild');
define('DEL_ALB', 'Radera album');
define('DEL_USER', 'Radera användare');
//define('ERR_UNKNOWN_USER', 'Vald användare finns inte!');
define('COMMENT_DELETED', 'Kommentaren raderades utan problem');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'Är du säker på att du vill RADERA denna bild? \\nKommentarer raderas också.');
define('DEL_THIS_PIC', 'RADERA DENNA BILD');
define('SIZE', '%s x %s pixlar');
define('VIEWS', '%s gånger');
define('SLIDESHOW', 'Bildspel');
define('STOP_SLIDESHOW', 'STOPPA BILDSPEL');
define('VIEW_FS', 'Klicka för att se fullstorlek på bilden');
define('EDIT_PIC', 'REDIGERA BILDINFORMATION');

// lang_picinfo
define('PIC_INF_TITLE', 'Bildinformation');
define('PIC_INF_FILENAME', 'Filnamn');
define('ALBUM_NAME', 'Albumnamn');
define('PIC_INFO_RATING', 'Betyg (%s röster)');
define('KEYWORDS', 'Nyckelords');
define('PIC_INF_FILE_SIZE', 'Filstorlek');
define('PIC_INF_DIMENSIONS', 'Dimensioner');
define('DISPLAYED', 'Visat');
define('CAMERA', 'Kamera');
define('DATE_TAKEN', 'Datum för fototillfälle');
define('APERTURE', 'Slutare');
define('EXPOSURE_TIME', 'Exponeringstid');
define('FOCAL_LENGTH', 'Focallängd');
define('COMMENT', 'Kommentar');
define('ADDFAV', 'Lägg till bland favoriter');
define('ADDFAVPHRASE', 'Favoriter');
define('REMFAV', 'Ta bort från favoriter');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC copyright');
define('IPTCKEYWORDS', 'IPTC nyckelord');
define('IPTCCATEGORY', 'IPTC kategori');
define('IPTCSUBCATEGORIES', 'IPTC Underkategorier');
define('BOOKMARK_PAGE', 'Sätt bokmärke på bilden');
define('REMOVEFAV', 'Raderad från albumet favoriter');
define('ADDEDTOFAV', 'Tilllagd till albumet favoriter');

// lang_display_comments
define('OK', 'OK');
define('COM_EDIT_TITLE', 'Redigera denna kommentar');
define('CONFIRM_DELETE_COM', 'Är du säker på att du vill radera denna kommentar?');
define('ADD_YOUR_COMMENT', 'Lägg till din kommentar');
define('COM_NAME', 'Namn');
//define('COMMENT', 'Kommentar');
define('YOUR_NAME', 'Anonym');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Klicka på bilden för att stänga det här fönstret');

// lang_ecard_php
define('E_TITLE', 'Skicka ett e-vykort');
define('INVALID_EMAIL', '<b>Varning</b>: felaktig e-postadress !');
define('E_ECARD_TITLE', 'Ett e-vykort från %s till dig!');
define('VIEW_ECARD', 'Klicka på den här länken om inte e-vykortet visas riktigt');
define('VIEW_MORE_PICS', 'Klicka på den här länken för att se fler bilder!');
define('SEND_SUCCESS', 'Ditt e-vykort skickades');
define('SEND_FAILED', 'Ledsen men servern kan inte skicka ditt e-vykort...');
define('FROM', 'Från');
define('_YOUR_NAME', 'Ditt namn');
define('YOUR_EMAIL', 'Din e-postadress');
define('TO', 'Till');
define('RCPT_NAME', 'Mottagarens namn');
define('RCPT_EMAIL', 'Mottagarens e-postadress');
define('GREETINGS', 'Hej!');
define('MESSAGE', 'Meddelande');
define('ECARD_LINK_CORRUPT', 'Tyvärr, detta e-vykortsdata har blivit förstört av din e-postklient, försök klista in länken i din webbläsare.');

// lang_editpics_php
define('PIC_INFO', 'Bild&nbsp;info');
define('ALBUM', 'Album');
define('EDIT_TITLE', 'Titel');
define('DESC', 'Beskrivning');
//define('KEYWORDS', 'Nyckelord');
define('PIC_INFO_STR', '%sx%s - %sKB - %s visningar - %s röster');
define('APPROVE', 'Godkänn bild');
define('POSTPONE_APP', 'Senarelägg godkännande');
//define('DEL_PIC', 'Radera bild');
define('READ_EXIF', 'Read EXIF info again');
define('RESET_VIEW_COUNT', 'Nollställ räknare för bildbesökare');
define('RESET_VOTES', 'Nollställ röster');
define('DEL_COMM', 'Radera kommentarer');
define('UPL_APPROVAL', 'Godkännande för uppladdning');
define('EDIT_PICS', 'Redigera bilder');
define('SEE_NEXT', 'Se kommande bild');
define('SEE_PREV', 'Se föregående bilder');
define('N_PIC', '%s bilder');
define('N_OF_PIC_TO_DISP', 'Antal bilder att visa');
define('APPLY', 'Verkställ förändringar');

// lang_groupmgr_php
define('GROUP_NAME', 'Grupp namn');
define('DISK_QUOTA', 'Diskkvot');
define('CAN_RATE', 'Kan betygsätta bilder');
define('CAN_SEND_ECARDS', 'Kan skicka e-vykort');
define('CAN_POST_COM', 'Kan skriva kommentarer');
define('CAN_UPLOAD', 'Kan ladda upp bilder');
define('CAN_HAVE_GALLERY', 'Kan ha ett personligt galleri');
//define('APPLY', 'Verkställ förändringar');
define('CREATE_NEW_GROUP', 'Skapa ny grupp');
define('DEL_GROUPS', 'Radera vald grupp(er)');
define('CONFIRM_DEL', 'Varning, när du raderar en grupp kommer användare i den gruppen att flyttas till gruppen \'Registrerad\' !\\n\\nVill du fortsätta ?');
define('GROUP_TITLE', 'Behandla användargrupper');
define('APPROVAL_1', 'Pub. Uppl. godkännande (1)');
define('APPROVAL_2', 'Priv. Uppl. godkännande (2)');
define('NOTE1', '<b>(1)</b> Uppladdningar i ett publikt album kräver godkännande från admin');
define('NOTE2', '<b>(2)</b> Uppladdningar i ett album som tillhör användare kräver godkännande från admin');
//define('NOTES', 'Anteckningar');

// lang_index_php
define('WELCOME', 'Välkommen!');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'Är du säker att du vill RADERA detta album? \\nAlla bilder och kommentarer kommer även att radaras.');
//define('DELETE', 'RADERA');
define('MODIFY', 'EGENSKAPER');
//define('EDIT_PICS', 'REDIGERA BILDER');

// lang_list_categories
define('HOME', _HOME);
define('STAT1', '<b>[pictures]</b> bilder i <b>[albums]</b> album och <b>[cat]</b> kategorier med <b>[comments]</b> kommentarer visade <b>[views]</b> gånger');
define('STAT2', '<b>[pictures]</b> bilder i <b>[albums]</b> album visade <b>[views]</b> gånger');
define('XX_S_GALLERY', '%s\'s Galleri');
define('STAT3', '<b>[pictures]</b> bilder i <b>[albums]</b> album med <b>[comments]</b> kommentarer visade <b>[views]</b> gånger');

// lang_list_users
define('USER_LIST', 'Användarlista');
define('NO_USER_GAL', 'Det finns inga användargallerier');
define('N_ALBUMS', '%s album');
define('N_PICS', '%s bild(er)');

// lang_list_albums
define('N_PICTURES', '%s bilder');
define('LAST_ADDED', ', senaste inlagd den %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Uppdatera album %s');
define('GENERAL_SETTINGS', 'Generella inställningar');
define('ALB_TITLE', 'Album titel');
define('ALB_CAT', 'Album kategori');
define('ALB_DESC', 'Album beskrivning');
define('ALB_THUMB', 'Album miniatyrbild');
define('ALB_PERM', 'Rättigheter för detta album');
define('CAN_VIEW', 'Album kan ses av');
define('MOD_CAN_UPLOAD', 'Besökare kan ladda upp bilder');
define('CAN_POST_COMMENTS', 'Besökare kan kommentera');
define('MOD_CAN_RATE', 'Besökare kan betygsätta bilder');
define('USER_GAL', 'Användargalleri');
define('NO_CAT', '* Ingen kategori *');
define('ALB_EMPTY', 'Album är tomt');
define('LAST_UPLOADED', 'Senast uppladdat');
define('PUBLIC_ALB', 'Alla (publikt album)');
define('ME_ONLY', 'Endast jag');
define('OWNER_ONLY', 'Endast albumägare (%s)');
define('GROUPP_ONLY', 'Medlemmar av gruppen \'%s\'');
define('ERR_NO_ALB_TO_MODIFY', 'Inget album att redigera i databasen.');
define('UPDATE', 'Uppdatera album');

// lang_rate_pic_php
define('ALREADY_RATED', 'Ledsen men du har redan betygsatt den här bilden');
define('RATE_OK', 'Din röst är registrerad');

// lang_register_php
define('USERNAME', 'Användarnamn');
define('GROUP', 'Grupp');
define('DISK_USAGE', 'Diskanvändning');
define('X_S_PROFILE', '%s\'s profil');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Granska kommentarer');
define('NO_COMMENT', 'Det finns ingen kommentar att granska');
define('N_COMM_DEL', '%s kommentar(er) raderade');
define('N_COMM_DISP', 'Antal kommentarer att visa');
define('R_SEE_PREV', 'Se föregående');
define('R_SEE_NEXT', 'Se nästa');
define('R_DEL_COMM', 'Radera valda kommentarer');

// lang_search_php
define('S_SEARCH', 'Sök i bildkollektionen');

// lang_search_new_php
define('PAGE_TITLE', 'Sök efter nya bilder');
define('SELECT_DIR', 'Välj bibliotek');
define('SELECT_DIR_MSG', 'Den här funktionen gör det möjligt att lägga till ett parti med foton som du laddat upp på servern via FTP.<br /><br />Välj biblioteket där bilderna finns.');
define('NO_PIC_TO_ADD', 'Det finns ingen bild att lägga till');
define('NEED_ONE_ALBUM', 'Du måste minst ha ett album för att kunna använda denna funktion');
define('WARNING', 'Varning');
define('CHANGE_PERM', 'scriptet kan inte skriva i detta bibliotek, du måste ändra rättigheterna i det till 755 eller 777 innan du kan lägga till bilder!');
define('TARGET_ALBUM', '<b>Lägg bilderna &quot;</b>%s<b>&quot; i </b>%s');
define('FOLDER', 'Mapp');
define('IMAGE', 'Bild');
//define('ALBUM', 'Album');
define('RESULT', 'Resultar');
define('DIR_RO', 'Inte skrivbart. ');
define('DIR_CANT_READ', 'Inte läsbart. ');
define('INSERT', 'Lägger till nya bilder i galleriet');
define('LIST_NEW_PIC', 'Förteckning på nya bilder');
define('INSERT_SELECTED', 'Sätt in valda bilder');
define('NO_PIC_FOUND', 'Ingen ny bild hittades');
define('BE_PATIENT', 'Ha tålamod, scriptet behöver lite tid att bearbeta bilderna');
define('SN_NOTES', '<ul><li><b>OK</b> : betyder att bilden blev inlagd<li><b>DP</b> : betyder att bilden är en kopia och redan finns i databasen<li><b>PB</b> : betyder att bilden inte kunde läggas till, kontrollera din konfiguration och rättigheterna i biblioteken där bilderna ska placeras<li>Om OK, DP, PB \'symbolen\' inte visas, klicka på den felaktiga bilden för att se felmeddelandet som skapats av PHP<li>Om din din browser gör timeout, tryck på knappen \'Uppdatera\'</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'Inget album var valt, gå tillbaka och välj ett album att lägga bilderna i');

// lang_upload_php
define('UP_TITLE', 'Ladda upp bild');
define('MAX_FSIZE', 'Max filstorlek är %s KB');
//define('ALBUM', 'Album');
define('PICTURE', 'Bild');
define('PIC_TITLE', 'Bildtitel');
define('DESCRIPTION', 'Bildbeskrivning');
define('UP_KEYWORDS', 'Nyckelord (avskiljda med mellanslag)');
define('ERR_NO_ALB_UPLOADABLES', 'Ledsen, men det finns inget album där du har tillåtelse att ladda upp bilder i');

// lang_usermgr_php
define('U_TITLE','Användarinställningar');
//define('NAME_A', 'Namn stigande');
//define('NAME_D', 'Namn fallande');
define('GROUP_A', 'Grupp stigande');
define('GROUP_D', 'Grupp fallande');
define('REG_A', 'Reg datum stigande');
define('REG_D', 'Reg datum fallande');
define('PIC_A', 'Bildräknare stigande');
define('PIC_D', 'Bildräknare fallande');
define('DISKU_A', 'Diskanvändande stigande');
define('DISKU_D', 'Diskanvändande fallande');
define('SORT_BY', 'Sortera användare i');
define('ERR_NO_USERS', 'Användartabell är tom!');
define('ERR_EDIT_SELF', 'Du kan inte redigera din egen profil, använd \'Min profil\' länken för det');
define('EDIT', 'Redigera');
//define('DELETE', 'RADERA');
define('U_NAME', 'Användarnamn');
//define('GROUP', 'Grupp');
define('INACTIVE', 'Inaktiv');
//define('OPERATIONS', 'Funktioner');
define('PICTURES', 'Bilder');
define('DISK_SPACE', 'Utrymme använt / Kvot');
define('REGISTERED_ON', 'Registrerad den');
define('U_USER_ON_P_PAGES', '%d användare på %d sida(or)');
define('USER_CONFIRM_DEL', 'Är du säker att du vill RADERA denna användare? \\nAlla bilder och album kommer även att raderas för denna användare.');
define('MAIL', 'E-POST');
define('ERR_UNKNOWN_USER', 'Vald användare finns inte!');
define('MODIFY_USER', 'Spara användare');
//define('NOTES', 'Anteckningar');
define('NOTE_LIST', '<li>Om du inte vill ändra nuvarande lösenord, lämna \"lösenord\" fältet blankt');
define('PASSWORD', 'Lösenord');
define('USER_ACTIVE_CP', 'Användaren är aktiv');
define('USER_GROUP_CP', 'Användargrupp');
define('USER_EMAIL', 'Användar e-post');
define('USER_WEB_SITE', 'Användarens hemsida');
define('CREATE_NEW_USER', 'Skapa ny användare');
define('USER_FROM', 'Användarens plats');
define('USER_INTERESTS', 'Användarens intressen');
define('USER_OCC', 'Användarens yrke');

// lang_util_php
define('UTIL_TITLE', 'Storleksändra bilder');
define('WHAT_IT_DOES', 'Vad den gör');
define('WHAT_UPDATE_TITLES', 'Uppdatera titlar från filnamnet');
define('WHAT_DELETE_TITLE', 'Radera titlar');
define('WHAT_REBUILD', 'Återuppbygger miniatyrbilder och storleksändrade bilder');
define('WHAT_DELETE_ORIGINALS', 'Raderar bildstorlek på originalet och ersätter den med den storleksändrade versionen');
define('U_FILE', 'Fil');
define('TITLE_SET_TO', 'titel satt till');
define('SUBMIT_FORM', 'skicka');
define('UPDATED_SUCCESFULLY', 'uppdatering lyckades');
define('ERROR_CREATE', 'ERROR vid skapande av');
define('CONTIN', 'Bearbeta fler bilder');
define('MAIN_SUCCESS', 'Filen %s används nu som huvudbild');
define('ERROR_RENAME', 'Fel vid namnbyte från %s till %s');
define('ERROR_NOT_FOUND', 'Filen %s hittades inte');
define('U_BACK', 'tillbaka till huvudsidan');
define('THUMBS_WAIT', 'Uppdaterar miniatyrbilder och/eller storleksändrade bilder, v.v. vänta...');
define('THUMBS_CONTINUE_WAIT', 'Fortsätter att uppdatera miniatyrbilder och/eller storleksförändrade bilder...');
define('TITLES_WAIT', 'Uppdaterar titlar, v.v. vänta...');
define('DELETE_WAIT', 'Raderar titlar, v.v. vänta...');
define('REPLACE_WAIT', 'Raderar original och ersätter dem med storleksförändrade bilder, v.v. vänta..');
define('INSTRUCTION', 'Snabbinstruktioner');
define('INSTRUCTION_ACTION', 'Välj funktion');
define('INSTRUCTION_PARAMETER', 'Sätt parametrar');
define('INSTRUCTION_ALBUM', 'Välj album');
define('INSTRUCTION_PRESS', 'Tryck %s');
define('U_UPDATE', 'Uppdatera miniatyrbilder och/eller storleksförändra bilder');
define('UPDATE_WHAT', 'Vad som ska uppdateras');
define('UPDATE_THUMB', 'Endast miniatyrbilder');
define('UPDATE_PIC', 'Endast storleksförändrade bilder');
define('UPDATE_BOTH', 'Både miniatyrbilder och storleksförändrade bilder');
define('UPDATE_NUMBER', 'Antal bearbetade bilder per klick');
define('UPDATE_OPTION', '(Försök att ställa detta alternativ lägre om du får timeout problem)');
define('FILENAME_TITLE', 'Filnamn &rArr; Bildtitel');
define('FILENAME_HOW', 'Hur ska filnamnet ändras');
define('FILENAME_REMOVE', 'Ta bort .jpg ändelsen och ersätt _ (underscore) med mellanslag');
define('FILENAME_EURO', 'Ändra 2003_11_23_13_20_20.jpg till 23/11/2003 13:20');
define('FILENAME_US', 'Ändra 2003_11_23_13_20_20.jpg till 11/23/2003 13:20');
define('FILENAME_TIME', 'Ändra 2003_11_23_13_20_20.jpg till 13:20');
define('UT_DELETE', 'Radera bildtitlar eller originalbildstorlek');
define('DELETE_TITLE', 'Radera bildtitlar');
define('DELETE_ORIGINAL', 'Radera originalbildstorlek');
define('DELETE_REPLACE', 'Raderar orginalbilder och ersätter med storleksförändrade versioner');
//define('SELECT_ALBUM', 'Välj album');

// lang_pagetitle_php
define('VIEWING', 'Tittar på foto');
define('USR', '\'s Fotogalleri');
define('PHOTOGALLERY', 'Fotogalleri');
$lang_usermgr_php = array(
    'name_a' => 'Namn stigande',
    'name_d' => 'Namn fallande',
    'group_a' => 'Grupp stigande',
    'group_d' => 'Grupp fallande',
    'reg_a' => 'Reg datum stigande',
    'reg_d' => 'Reg datum fallande',
    'pic_a' => 'Bildräknare stigande',
    'pic_d' => 'Bildräknare fallande',
    'disku_a' => 'Diskanvändande stigande',
    'disku_d' => 'Diskanvändande fallande',
);
$lang_byte_units = array('Byte', 'KB', 'MB');
// Day of weeks and months
$lang_day_of_week = array('Sön', 'Mån', 'Tis', 'Ons', 'Tors', 'Fre', 'Lör');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Aug', 'Sept', 'Okt', 'Nov', 'Dec');
$lang_meta_album_names = array(
	'random' => 'Slumpmässiga bilder',
    'lastup' => 'Senast inlagda',
    'lastupby' => 'Mina Senaste Bidrag', 
    'lastalb' => 'Senaste uppdaterade album',
    'lastcom' => 'Senaste kommentarer',
    'lastcomby' => 'Mina Senaste kommentarer', 
    'topn' => 'Mest visade',
    'toprated' => 'Topplista',
    'lasthits' => 'Senast visat',
    'search' => 'Sökresultat',
    'favpics' => 'Favoritbilder'
);
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array(
	'title' => 'Konfiguration',
        'restore_cfg' => 'Återställ systemets grundinställningar',
        'save_cfg' => 'Spara ny konfiguration',
        'notes' => 'Anm.',
        'info' => 'Information',
        'upd_success' => 'Coppermine konfigurationen uppdaterades',
        'restore_success' => 'Coppermines grundinställning återskapades',
        'name_a' => 'Namn stigande',
        'name_d' => 'Namn fallande',
        'title_a' => 'Titel stigande',
        'title_d' => 'Titel fallande',
        'date_a' => 'Datum stigande',
        'date_d' => 'Datum fallande',
        'rating_a' => 'Värdering stigande', 
        'rating_d' => 'Värdering fallande', 
        'th_any' => 'Max Aspekt',
        'th_ht' => 'Höjd',
        'th_wd' => 'Vidd',
        );
// start left side interpretation
    $lang_config_data = array(
        // General settings
        'Generella inställningar',
    array('Galleri namn', 'gallery_name', 0),
    array('Galleri beskrivning', 'gallery_description', 0),
    array('Galleri administratör e-post', 'gallery_admin_email', 0),
    array('Adress till nukemapp dvs http://example.com/html/', 'ecards_more_pic_target', 0),
    array('Tema', 'theme', 6),
    array('Sid Specifika Titlar istället för >Coppermine', 'nice_titles', 1), 
        // 'Album list view',
        'Utseende för albumlista',
    array('Bredd på huvudtabell (pixlar eller %)', 'main_table_width', 0),
    array('Antal underkategorier att visa', 'subcat_level', 0),
    array('Antal album att visa', 'albums_per_page', 0),
    array('Antal kolumner i albumlista', 'album_list_cols', 0),
    array('Storlek på miniatyrbilder i pixlar', 'alb_list_thumb_size', 0),
    array('Innehåll på huvudsidan', 'main_page_layout', 0),
    array('Visa första underkategorins miniatyrbilder i kategorierna', 'first_level', 1), 
        // 'Thumbnail view',
        'Utseende för miniatyrbildsfunktion',
    array('Antal kolumner på miniatyrbildssida', 'thumbcols', 0),
    array('Antal rader på miniatyrbildssida', 'thumbrows', 0),
    array('Max antal flikar att visa', 'max_tabs', 0),
    array('Visa bildrubrik (inkl. titel) nedanför miniatyrbild', 'caption_in_thumbview', 1),
    array('Visa antalet kommentarer under miniatyrbild', 'display_comment_count', 1),
    array('Grundinställning för sortering av bilder', 'default_sort_order', 3),
    array('Minimum antal röster för en bild för att det ska synas i \'topplistan\' ', 'min_votes_for_rating', 0),
    array('Alts och titeltaggar av miniatyrbild visar titel och nyckelord istället för bildinfo', 'seo_alts', 1), 
        // 'Image view &amp; Comment settings',
        'Utseende för bilder &amp; inställningar för kommentarer',
    array('Tabellbredd för bildvisning (pixlar eller %)', 'picture_table_width', 0),
    array('Bildinformation är synlig som grundinställning', 'display_pic_info', 1),
    array('Filtrera fula ord i kommentarer', 'filter_bad_words', 1),
    array('Tillåt smilies i kommentarer', 'enable_smilies', 1),
    array('Tillåt flera påföljande kommentarer om en bild från samma användare', 'disable_flood_protection', 1), 
    array( 'E-posta sajtens admin vid kommentarsbidrag' ,'comment_email_notification', 1), 
    array('Max längd på bildbeskrivning', 'max_img_desc_length', 0),
    array('Max antal tecken i ett ord', 'max_com_wlength', 0),
    array('Max antal på rader i en kommentar', 'max_com_lines', 0),
    array('Max längd på en kommentar', 'max_com_size', 0),
    array('Visa filmsekvens', 'display_film_strip', 1),
    array('Antal objekt i en filmsekvens', 'max_film_strip_items', 0),
    array('Tillåt visning av bilder i full storlek av anonym', 'allow_anon_fullsize', 1), 
    array('Number of days between being able to vote on the same image','keep_votes_time',0), 
    array('Show fullsize picture in slideshow','fullsize_slideshow',1),
    array('Show blocks on the right of displayimage if right blocks are on at module level?', 'right_blocks', 1), 
        // 'Pictures and thumbnails settings',
        'Bild- och miniatyrbildsinställningar',
    array('Kvalitet på JPEG filer', 'jpeg_qual', 0),
    array('Placera ett vatenmärke på bildern', 'watermark', 1),
    array('Max dimension på en miniatyrbild <b>*</b>', 'thumb_width', 0),
    array('Använda dimensioner (bredd eller höjd eller Maxstorlek för miniatyrbild)<b>*</b>', 'thumb_use', 7),
    array('Skapa mellanliggande bilder', 'make_intermediate', 1),
    array('Max bredd eller höjd på en mellanliggande bild <b>*</b>', 'picture_width', 0),
    array('Max storlek för uppladdade bilder (KB)', 'max_upl_size', 0),
    array('Max bredd eller höjd för uppladdade bilder (pixlar)', 'max_upl_width_height', 0), 
    array('Tillåt uppladdning av flera filer med samma filnamn', 'samename', 1), 
        // 'User settings',
        'Användarinställningar',
    array('Tillåt nya användare att registreras', 'allow_user_registration', 1),
        /*
    array('Användarregistrering kräver e-postverifiering', 'reg_requires_valid_email', 1),
    array('Tillåt två användare att ha samma e-postadress', 'allow_duplicate_emails_addr', 1),
    */
    array('Användare kan ha privata album', 'allow_private_albums', 1), 
    array('Visa användarnas avatar istället för bilden för privata albumet', 'avatar_private_album', 1),
        // 'Custom fields for image description (leave blank if unused)',
        'Valfria fält för bildbeskrivningar (lämna blankt om du inte vill använda funktionen)',
    array('Fält 1 namn', 'user_field1_name', 0),
    array('Fält 2 namn', 'user_field2_name', 0),
    array('Fält 3 namn', 'user_field3_name', 0),
    array('Fält 4 namn', 'user_field4_name', 0), 
        // 'Pictures and thumbnails advanced settings',
        'Avancerade inställningar för bilder och miniatyrbilder',
    array('Visa ikon för privata album för ej inloggade användare', 'show_private', 1),
    array('Förbjudna tecken i filnamn', 'forbiden_fname_char', 0),
    array('Accepterade filändelser för uppladdade bilder', 'allowed_file_extensions', 0),
    array('Metod för ändra bildstorleksförändring', 'thumb_method', 2),
    array('Sökväg till ImageMagick / netpbm \'konverterings\' funktion (exempel /usr/bin/X11/)', 'impath', 0),
    array('Tillåtna bildformat (gäller endast för ImageMagick)', 'allowed_img_types', 0),
    array('Kommandolineargument för ImageMagick', 'im_options', 0),
    array('Läs EXIF data i JPEG filer', 'read_exif_data', 1),
    array('Läs IPTC data i JPEG filer', 'read_iptc_data', 1),
    array('Albumbibliotek <b>*</b>', 'fullpath', 0),
    array('Bibliotek för användarnas bilder <b>*</b>', 'userpics', 0),
    array('Prefix för mellanliggande bilder <b>*</b>', 'normal_pfx', 0),
    array('Prefix för miniatyrbilder <b>*</b>', 'thumb_pfx', 0),
    array('Bildinfo visa filnamn', 'picinfo_display_filename', '1'), 
    array('Bildinfo visa albumnamn', 'picinfo_display_album_name', '1'), 
    array('Bildinfo visa_filstorlek', 'picinfo_display_file_size', '1'), 
    array('Bildinfo visa dimensioner', 'picinfo_display_dimensions', '1'), 
    array('Bildinfo visa antal visningar', 'picinfo_display_count_displayed', '1'), 
    array('Bildinfo visa URL', 'picinfo_display_URL', '1'), 
    array('Bildinfo visa URL som bokmärkeslänk', 'picinfo_display_URL_bookmark', '1'), 
    array('Bildinfo visa favvo albumlänk', 'picinfo_display_favorites', '1'), 
        // 'Cookies &amp; Charset settings',
        'Inställningar för cookies &amp; teckenkodning',
    array('Namn på cookie som scriptet använder sig av', 'cookie_name', 0),
    array('Sökväg till cookie som scriptet använder sig av', 'cookie_path', 0),
        // 'Miscellaneous settings',
        'Övriga inställningar',
    array('Aktivera debuggläge', 'debug_mode', 1),
        '<br /><div align="center">(*) Fält märkta med * får INTE ändras om du redan har bilder i ditt galleri</div><br />'
        );
// end left side interpretation
