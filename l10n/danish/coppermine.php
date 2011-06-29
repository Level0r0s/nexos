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
  $Source: /cvs/l10n/danish/coppermine.php,v $
  $Revision: 9.9 $
  $Author: djmaze $
  $Date: 2006/02/12 16:01:43 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Vist');
define('PIC_VOTES', 'Stemmer');
define('PIC_COMMENTS', 'Kommentarer');

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Danish');
define('LANG_NAME_NATIVE', 'Dansk');
define('LANG_COUNTRY_CODE', 'dk');
define('TRANS_NAME', 'Bo Madsen (Lexsus)');
define('TRANS_EMAIL', 'webmaster@cpgnuke.dk');
define('TRANS_WEBSITE', 'http://cpgnuke.dk');
define('TRANS_DATE', '2004-09-29');
define('CHARSET', 'UTF-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Ja');
define('NO', 'Nej');
// some common strings
define('BACK', 'TILBAGE');
define('CONTINU', 'FORTSÆT');
define('INFO', 'Information');
//define('_ERROR', 'Error'); //already in main lang file
define('ALBUM_DATE_FMT', '%d. %l %Y');
define('LASTCOM_DATE_FMT', '%d/%m/%y @ %H:%M');
define('LASTUP_DATE_FMT', '%d. %B %Y');
define('REGISTER_DATE_FMT', '%d. %B %Y');
define('LASTHIT_DATE_FMT', '%d. %B %Y @ %H:%M');
define('COMMENT_DATE_FMT', '%d. %B %Y @ %H:%M');

// lang_meta_album_names
define('RANDOM', 'Tilfældige billeder');
define('LASTUP', 'Nyeste billeder');
define('LASTUPBY', 'Seneste tilføjelser');
define('LASTALB', 'Sidst opdaterede albums');
define('LASTCOM', 'Nyeste kommentarer');
define('LASTCOMBY', 'Seneste kommentarer');
define('TOPN', 'Mest viste');
define('TOPRATED', 'Mest populære');
define('LASTHITS', 'Sidst viste');
define('SEARCH', 'Søge resultat');
define('FAVPICS', 'Foretrukne billeder');

// lang_errors
define('ACCESS_DENIED', 'Du har ikke tilladelse til at se denne side.');
define('PERM_DENIED', 'Du har ikke tilladelse til at udføre denne handling.');
define('PARAM_MISSING', 'Script kaldt uden de nødvendige parametre.');
define('NON_EXIST_AP', 'Det valgte album/billede eksister ikke !');
define('QUOTA_EXCEEDED', 'Disk mængden overskredet<br /><br />Du har plads til en [quota]K, Dine billeder bruger aktuelt [space]K, tilføjelse af dette billede medfører en overskridelse af din tilladte mængde.');
define('GD_FILE_TYPE_ERR', 'Når der anvendes GD billedeteknik, er tilladte typer kun JPEG og PNG.');
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
define('MEMBERS_ONLY', 'Denne funktion er kun for medlemmer. Registrer for at få adgang.');
define('MUSTBE_GOD', 'Denne funktion er kun for sidens Superbruger');
define('NO_IMG_TO_APPROVE', 'Ingen billeder at godkende');

// lang_main_menu
define('ALB_LIST_TITLE', 'Gå til albumlisten');
define('ALB_LIST_LNK', 'Albumliste');
define('MY_GAL_TITLE', 'Gå til personligt galleri');
define('MY_GAL_LNK', 'Mit galleri');
define('MY_PROF_LNK', 'Min profil');
define('MY_PROF_TITLE','Kontroller din pladsbegrænsning og grupper.');
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
define('LASTUP_TITLE', 'Nyligt opdaterede billeder');
define('LASTCOM_TITLE',  'Nyligt kommenterede billeder');
define('LASTCOM_LNK',  'Nyeste kommentar');
define('TOPN_TITLE', 'Billeder, der er set mest');
define('TOPN_LNK', 'Mest viste');
define('TOPRATED_TITLE', 'Billeder med flest point');
define('TOPRATED_LNK',  'Top karakter');
define('SEARCH_TITLE', 'Søg foto samling');
define('SEARCH_LNK', 'Søg');
define('FAV_TITLE', 'Mine foretrukne');
define('FAV_LNK', 'Foretrukne');
define('HELP_TITLE', 'HJÆLP');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

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
//define('MY_PROF_LNK', 'Min profil');

// lang_cat_list
define('CATEGORY', 'Kategori');
define('ALBUMS', 'Album');
//define('PICTURES', 'Billeder');

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
define('SORT_RA', 'Sorter efter karakter, stigende');
define('SORT_RD', 'Sorter efter karakter, faldende');
define('THUMB_RATING', 'vurdering');
define('SORT_TITLE', 'Sorter billeder efter:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Retur til oversigt');
define('PIC_INFO_TITLE', 'Vis/skjul billede information');
define('SLIDESHOW_TITLE', 'Slideshow');
define('SLIDESHOW_DISABLED', 'Slideshow er ikke aktiv');
define('SLIDESHOW_DISABLED_MSG', 'Denne funktion er kun for medlemmer. Registrer venligst');
define('ECARD_TITLE', 'Send dette billede som et e-postkort');
define('ECARD_DISABLED', 'E-postkort er slået fra');
define('ECARD_DISABLED_MSG', 'Du har ikke tilladelse til at sende e-postkort');
define('PREV_TITLE', 'Se forrige billede');
define('NEXT_TITLE', 'Se næste billede');
define('PIC_POS', 'BILLEDE %s/%s');
define('NO_MORE_IMAGES', 'Der er ikke flere billeder i dette galleri');
define('NO_LESS_IMAGES', 'Dette er det første billede i dette galleri');

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
//define('INFORMATION', 'Information');
//define('ERROR', 'Fejl');
define('_CRITICAL_ERROR', 'Kritisk fejl');
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
define('MISS_PARAM', 'Parametre obligatorisk ved \'%s\'operation ej udført!');
define('UNKNOWN_CAT', 'Valgte kategori eksister ikke i databasen');
define('USERGAL_CAT_RO', 'Bruger galleri kategorien kan ikke slettes!');
define('MANAGE_CAT', 'Administrer kategorier');
define('CONFIRM_DELETE', 'Er du sikker på du ønsker at SLETTE denne kategori');
//define('CATEGORY', 'Kategori');
define('OPERATIONS', 'Handling');
define('MOVE_INTO', 'Flyt til');
define('UPDATE_CREATE', 'Opdater/Opret kategori');
define('PARENT_CAT', 'Hoved kategori');
define('CAT_TITLE', 'Kategori titel');
define('CAT_DESC', 'Kategori beskrivelse');

// lang_config_php
define('CONFIG_TITLE', 'Konfiguration');
define('RESTORE_CFG', 'Genskab standard indstillinger');
define('SAVE_CFG', 'Gem ny opsætning');
define('NOTES', 'Noter');
//define('INFO', 'Information');
define('UPD_SUCCESS', 'Coppermine opsætning er opdateret');
define('RESTORE_SUCCESS', 'Coppermine standard opsætning er genskabt');
define('NAME_A', 'Navn stigende');
define('NAME_D', 'Navn faldende');
define('TITLE_A', 'Titel stigende');
define('TITLE_D', 'Titel faldende');
define('DATE_A', 'Dato stigende');
define('DATE_D', 'Dato faldende');
define('RATING_A', 'Vurdering stigende');
define('RATING_D', 'Vurdering faldende');
define('TH_ANY', 'Maks. aspekt');
define('TH_HT', 'Højde');
define('TH_WD', 'Bredde');


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
define('UPLOAD_SUCCESS', 'Dit billede blev uploadet med Succes<br /><br />'.((is_admin())? '' :'Det er synligt når en administrator har godkendt det.'));
//define('INFO', 'Information');
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
//define('COMMENT', 'Kommentar');
define('IM_IN_ALB', 'Billede i album');
define('ALB_DEL_SUCCESS', 'Album \'%s\' slettet');
define('ALB_MGR', 'Album Administrator');
define('ERR_INVALID_DATA', 'Forkert data modtaget i \'%s\'');
define('CREATE_ALB', 'Opretter album \'%s\'');
define('UPDATE_ALB', 'Opdaterer album \'%s\' med titel \'%s\' og index \'%s\'');
define('DEL_PIC', 'Slet billede');
define('DEL_ALB', 'Slet album');
define('DEL_USER', 'Slet bruger');
//define('ERR_UNKNOWN_USER', 'Den valgte bruger findes ikke !');
define('COMMENT_DELETED', 'Kommentaren blev slettet');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'Er du sikker på du ønsker at SLETTE dette billede? \\nKommentarer bliver også slettet.');
define('DEL_THIS_PIC', 'SLET DETTE BILLEDE');
define('SIZE', '%s x %s pixels');
define('VIEWS', '%s gange');
define('SLIDESHOW', 'Slideshow');
define('STOP_SLIDESHOW', 'STOP SLIDESHOW');
define('VIEW_FS', 'Klik for at se fuld størrelse billede');
define('EDIT_PIC', 'EDITER BILLEDE INFORMASTION');

// lang_picinfo
define('PIC_INF_TITLE', 'Billede information');
define('PIC_INF_FILENAME', 'Filnavn');
define('ALBUM_NAME', 'Album navn');
define('PIC_INFO_RATING', 'Karakter (%s stemmer)');
define('KEYWORDS', 'Nøgleord');
define('PIC_INF_FILE_SIZE', 'Filstørrelse');
define('PIC_INF_DIMENSIONS', 'Dimensioner');
define('DISPLAYED', 'Vist');
define('CAMERA', 'Kamera');
define('DATE_TAKEN', 'Optaget dato');
define('APERTURE', 'Blænderåbning');
define('EXPOSURE_TIME', 'Eksponeringstid ');
define('FOCAL_LENGTH', 'Brændvidde');
define('COMMENT', 'Kommentar');
define('ADDFAV', 'Føj til foretrukne');
define('ADDFAVPHRASE', 'Foretrukne');
define('REMFAV', 'Fjern fra foretrukne');
define('IPTCTITLE', 'IPTC Titel');
define('IPTCCOPYRIGHT', 'IPTC ophavsret');
define('IPTCKEYWORDS', 'IPTC Nøgleord');
define('IPTCCATEGORY', 'IPTC Kategori');
define('IPTCSUBCATEGORIES', 'IPTC Under-kategorier');
define('BOOKMARK_PAGE', 'Føj billedet til Foretrukne');
define('REMOVEFAV', 'Fjernet fra Favorit Album');
define('ADDEDTOFAV', 'Tilføjet i Favorit Album');

// lang_display_comments
define('OK', 'OK');
define('COM_EDIT_TITLE', 'Ændre denne kommentar');
define('CONFIRM_DELETE_COM', 'Er du sikker på at du vil slette denne kommentar?');
define('ADD_YOUR_COMMENT', 'Tilføj din kommentar');
define('COM_NAME', 'Navn');
//define('COMMENT', 'Kommentar');
define('YOUR_NAME', 'Anonym');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Klik på billedet for at lukke dette vindue');

// lang_ecard_php
define('E_TITLE', 'Send et e-postkort');
define('INVALID_EMAIL', '<b>Advarsel</b>: ugyldig e-mail-adresse!');
define('E_ECARD_TITLE', 'Et e-postkort fra %s til dig');
define('VIEW_ECARD', 'Hvis kortet ikke vises korrekt, klik her');
define('VIEW_MORE_PICS', 'Klik på dette link for at se flere billeder!');
define('SEND_SUCCESS', 'Dit e-postkort blev sendt');
define('SEND_FAILED', 'Beklager men serveren kan ikke sende dit e-postkort...');
define('FROM', 'Fra');
define('_YOUR_NAME', 'Dit navn');
define('YOUR_EMAIL', 'Din e-mail-adresse');
define('TO', 'Til');
define('RCPT_NAME', 'Modtagers navn');
define('RCPT_EMAIL', 'Modtagers e-mail-adresse');
define('GREETINGS', 'Hilsen');
define('MESSAGE', 'Besked');
define('ECARD_LINK_CORRUPT', 'Beklager, men E-Postkort dataene er blevet ødelagt af din E-Post klient, prøv venligst at kopier linket i din browser'); //NEW
// lang_editpics_php
define('PIC_INFO', 'Billede&nbsp;info');
define('ALBUM', 'Album');
define('EDIT_TITLE', 'Titel');
define('DESC', 'Beskrivelse');
//define('KEYWORDS', 'Nøgleord');
define('PIC_INFO_STR', '%sx%s - %sKB - %s visninger - %s stemmer');
define('APPROVE', 'Godkend billede');
define('POSTPONE_APP', 'Udskyd godkendelsen');
//define('DEL_PIC', 'Slet billede');
define('READ_EXIF', 'Læs EXIF info igen');
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
//define('APPLY', 'Tilføj rettelser');
define('CREATE_NEW_GROUP', 'Opret ny gruppe');
define('DEL_GROUPS', 'Slet valgte gruppe(er)');
define('CONFIRM_DEL', 'Advarsel, når du sletter en gruppe, vil brugere tilhørende denne gruppe blive flyttet til gruppen af \'Registrerede\' brugere !\\n\\nVil du fortsætte?');
define('GROUP_TITLE', 'Administrer bruger grupper');
define('APPROVAL_1', 'Offentlig upload godkendelse(1)');
define('APPROVAL_2', 'Privat Upload godkendelse(2)');
define('NOTE1', '<b>(1)</b> Upload i det offentlige album, kræver admin godkendelse');
define('NOTE2', '<b>(2)</b> Upload i et album som tilhører brugeren, kræver admin godkendelse');
//define('NOTES', 'Noter');

// lang_index_php
define('WELCOME', 'Velkommen!');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'Er du sikker på du vil SLETTE dette album? \\nAlle billeder og kommentarer vil også blive slettet.');
//define('DELETE', 'SLET');
define('MODIFY', 'REDIGER');
//define('EDIT_PICS', 'REDIGER BILLEDER');

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
define('CAN_VIEW', 'Album kan ses af');
define('MOD_CAN_UPLOAD', 'Gæster kan oploade billeder');
define('CAN_POST_COMMENTS', 'Gæster kan skrive kommentarer');
define('MOD_CAN_RATE', 'Gæster kan stemme på billeder');
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

// lang_register_php
define('USERNAME', 'Brugernavn');
define('GROUP', 'Gruppe');
define('DISK_USAGE', 'Disk plads brugt');
define('X_S_PROFILE', '%s\'s profil');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Kommentar overblik');
define('NO_COMMENT', 'Der er ingen kommentar at se tilbage på');
define('N_COMM_DEL', '%s kommentar(er) slettet');
define('N_COMM_DISP', 'Antal af kommentarer at vise');
define('R_SEE_PREV', 'Se foregående');
define('R_SEE_NEXT', 'Se næste');
define('R_DEL_COMM', 'Slet valgte kommentarer');

// lang_search_php
define('S_SEARCH', 'Søg i billede samlingen');

// lang_search_new_php
define('PAGE_TITLE', 'Søg i nye billeder');
define('SELECT_DIR', 'Vælg mappe');
define('SELECT_DIR_MSG', 'Denne funktion tillader dig at massetilføje de billeder som du har uploadet via FTP.<br /><br />Vælg den mappe hvor du har uploadet dine billeder');
define('NO_PIC_TO_ADD', 'Der er intet billede at tilføje');
define('NEED_ONE_ALBUM', 'Du skal have mindst et album oprettet, for at bruge denne funktion');
define('WARNING', 'Advarsel');
define('CHANGE_PERM', 'systemet kan ikke skrive i denne mappe, du skal ændre server rettigheder på denne mappe til 755 eller 777 før du prøver at tilføje billeder !');
define('TARGET_ALBUM', '<b>Anbring billeder af &quot;</b>%s<b>&quot; til </b>%s');
define('FOLDER', 'Folder');
define('IMAGE', 'Billede');
//define('ALBUM', 'Album');
define('RESULT', 'Resultat');
define('DIR_RO', 'Ej skrivebar. ');
define('DIR_CANT_READ', 'Ej læsebar. ');
define('INSERT', 'Tilføje nye billeder til galleriet');
define('LIST_NEW_PIC', 'Liste af nye billeder');
define('INSERT_SELECTED', 'Indsæt valgte billeder');
define('NO_PIC_FOUND', 'Ingen nye billeder blev fundet');
define('BE_PATIENT', 'Hav lidt tålmodighed, systemet arbejder på at tilføje billederne');
define('SN_NOTES', '<ul><li><b>OK</b> : Betyder at billedet blev tilføjet<li><b>DP</b> : Betyder at billedet er en duplikat og det allerede ligger i databasen<li><b>PB</b> : Betyder at billedet ikke kunne tilføjes, kontrollerer venligst din konfiguration samt tilladelser på de respektive mapper<li>Hvis OK, DP, PB \'signalet\' ikke kommer frem, klik da på de manglede billeder for at se om der da fremkommer nogle fejlmeddelelser som frembringes af PHP<li>Hvis din browser laver time-out, da opdater den browser</ul>');
define('SELECT_ALBUM', 'Vælg album');
define('NO_ALBUM', 'Ingen album blev valgt, gå tilbage og vælg et album til at tilføje dine billeder i');

// lang_upload_php
define('UP_TITLE', 'Upload billede');
define('MAX_FSIZE', 'Max tilladte filstørrelse er sat til %s KB');
//define('ALBUM', 'Album');
define('PICTURE', 'Billede');
define('PIC_TITLE', 'Billede titel');
define('DESCRIPTION', ' Billede beskrivelse');
define('UP_KEYWORDS', 'Nøgleord (Adskil med mellemrum)');
define('ERR_NO_ALB_UPLOADABLES', 'Beklager der er intet album, som du har tilladelse til at uploade billeder til');

// lang_usermgr_php
define('U_TITLE', 'Administrer bruger');
//define('NAME_A', 'Navn stigende');
//define('NAME_D', 'Navn faldende');
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
//define('DELETE', 'SLET');
define('U_NAME', 'Brugernavn');
//define('GROUP', 'Gruppe');
define('INACTIVE', 'Inaktiv');
//define('OPERATIONS', 'Handlinger');
define('PICTURES', 'Billeder');
define('DISK_SPACE', 'Plads brugt / Kvote');
define('REGISTERED_ON', 'Registreret den');
define('U_USER_ON_P_PAGES', '%d bruger på %d side(r)');
define('USER_CONFIRM_DEL', 'Er du sikker på du vil SLETTE denne bruger? \\nAlle billeder og albums vil også blive slettet.');
define('MAIL', 'POST');
define('ERR_UNKNOWN_USER', 'Valgt bruger eksister ikke!');
define('MODIFY_USER', 'Rediger bruger');
//define('NOTES', 'Noter');
define('NOTE_LIST', '<li>Hvis du ikke vil rette det aktuelle password, så lad feltet \"password\" stå tomt');
define('PASSWORD', 'Password');
define('USER_ACTIVE_CP', 'Brugeren er ikke aktiv');
define('USER_GROUP_CP', 'Brugergruppe');
define('USER_EMAIL', 'Bruger e-mail');
define('USER_WEB_SITE', 'Brugerens webside');
define('CREATE_NEW_USER', 'Opret ny bruger');
define('USER_FROM', 'Brugerens placering');
define('USER_INTERESTS', 'Brugerens interesser');
define('USER_OCC', 'Brugerens beskæftigelse');

// lang_util_php
define('UTIL_TITLE', 'Ændre størrelse på billeder');
define('WHAT_IT_DOES', 'Gør dette');
define('WHAT_UPDATE_TITLES', 'Opdater titler fra filnavn');
define('WHAT_DELETE_TITLE', 'Slet titler');
define('WHAT_REBUILD', 'Genskab minibilleder og mellemstore billeder');
define('WHAT_DELETE_ORIGINALS', 'Sletter billeder med original størrelse og erstatter dem med de mellemstore billeder');
define('U_FILE', 'Fil');
define('TITLE_SET_TO', 'titel sat til');
define('SUBMIT_FORM', 'Udfør');
define('UPDATED_SUCCESFULLY', 'opdateret med succes');
define('ERROR_CREATE', 'FEJL ved oprettelse af');
define('CONTIN', 'Fortsæt');
define('MAIN_SUCCESS', 'Filen %s bliver nu brugt som original billede');
define('ERROR_RENAME', 'Fejl da filen skulle omdøbes fra %s til %s');
define('ERROR_NOT_FOUND', 'Filen %s blev ikke fundet');
define('U_BACK', 'tilbage til hovedmenu');
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
define('U_UPDATE', 'Opdater minibilleder og/eller mellemstore billeder');
define('UPDATE_WHAT', 'Hvad skal opdateres');
define('UPDATE_THUMB', 'Kun minibilleder');
define('UPDATE_PIC', 'Kun mellemstore billeder');
define('UPDATE_BOTH', 'Både mini- og mellemstore billeder');
define('UPDATE_NUMBER', 'Antal behandlede billeder pr. klik');
define('UPDATE_OPTION', '(Prøv at sætte den værdi lavere hvis du oplever timeout fejl)');
define('FILENAME_TITLE', 'Filnavn -> Billede titel');
define('FILENAME_HOW', 'Hvordan skal filnavnet modificeres');
define('FILENAME_REMOVE', 'Fjern .jpg endelsen og erstat _ (underscore) med mellemrum');
define('FILENAME_EURO', 'Omdøb 2003_11_23_13_20_20.jpg til 23/11/2003 13:20');
define('FILENAME_US', 'Omdøb 2003_11_23_13_20_20.jpg til 11/23/2003 13:20');
define('FILENAME_TIME', 'Omdøb 2003_11_23_13_20_20.jpg til 13:20');
define('UT_DELETE', 'Slet titler eller original størrelse billeder');
define('DELETE_TITLE', 'Slet billede titler');
define('DELETE_ORIGINAL', 'Slet original størrelse billeder');
define('DELETE_REPLACE', 'Sletter de originale billeder og erstatter dem med de mellemstore');
//define('SELECT_ALBUM', 'Vælg album');

// lang_pagetitle_php
define('VIEWING', 'Ser på billede');
define('USR', '\'s Billede Galleri');
define('PHOTOGALLERY', 'Billede Galleri');
$lang_usermgr_php = array(
    'name_a' => 'Navn stigende',
    'name_d' => 'Navn synkende',
    'group_a' => 'Gruppe stigende',
    'group_d' => 'Gruppe synkende',
    'reg_a' => 'Reg dato stigende',
    'reg_d' => 'Reg dato synkende',
    'pic_a' => 'Billede antal stigende',
    'pic_d' => 'Billede antal synkende',
    'disku_a' => 'Disk plads brugt stigende',
    'disku_d' => 'Disk plads brugt synkende',
    );
$lang_byte_units = array('Bytes', 'KB', 'MB');
$lang_day_of_week = array('søn', 'man', 'tir', 'ons', 'tor', 'fre', 'lør');
$lang_month = array('jan', 'feb', 'mar', 'apr', 'maj', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec');
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'fitte', 'balle', 'faen', 'helvete', 'kukk', 'dildo*', 'pupp*', 'hore*');
$lang_meta_album_names = array(
    'random' => 'Tilfældige bilder',
    'lastup' => 'Nyeste bilder',
    'lastupby' => 'Mine nyeste bilder', // new 1.2.2
    'lastalb' => 'Nyeste opdaterte albumer',
    'lastcom' => 'Nyeste kommentarer',
    'lastcomby' => 'Mine nyeste kommentarer', // new 1.2.2
    'topn' => 'Flest vist',
    'toprated' => 'Top bedømte',
    'lasthits' => 'Sidst vist',
    'search' => 'Søge resultater',
    'favpics' => 'Favorit Billeder' // changed in cpg1.2.0nuke
    );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array(
    'title' => 'Konfiguration',
    'restore_cfg' => 'Genskab standard indstillinger',
    'save_cfg' => 'Gem ny opsætning',
    'notes' => 'Noter',
    'info' => 'Information',
    'upd_success' => 'Coppermine opsætning er opdateret',
    'restore_success' => 'Coppermine standard opsætning er genskabt',
    'name_a' => 'Navn stigende',
    'name_d' => 'Nave synkende',
    'title_a' => 'Titel stigende',
    'title_d' => 'Titel synkende',
    'date_a' => 'Dato stigende',
    'date_d' => 'Dato synkende',
    'rating_a' => 'Vurdering stigende', // new in cpg1.2.0nuke
    'rating_d' => 'Vurdering synkende', // new in cpg1.2.0nuke
    'th_any' => 'Max Aspect',
    'th_ht' => 'Højde',
    'th_wd' => 'Bredde',
    );
// start left side interpretation
$lang_config_data = array(
    // General settings
    'Generelle indstillinger',
    array('Galleri navn', 'gallery_name', 0),
    array('Galleri beskrivelse', 'gallery_description', 0),
    array('Galleri administrator E-mail', 'gallery_admin_email', 0),
    array('Adressen til nuke folderen f.eks: http://example.com/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
    array('Theme', 'tema', 6),
    array('specificeret side titel i stedet for >Coppermine', 'nice_titles', 1),
    // Album list view
    'Album liste visning',
    array('Bredde på hoved tabellen (pixels eller %)', 'main_table_width', 0),
    array('Antal Under-kategorier at vise pr side', 'subcat_level', 0),
    array('Antal af album at vise pr. side', 'albums_per_page', 0),
    array('Antal kolonner i album listen', 'album_list_cols', 0),
    array('Størrelse af minibilleder i pixels', 'alb_list_thumb_size', 0),
    array('Indhold på hovedsiden', 'main_page_layout', 0),
    array('Vis øverste album niveaus minibilleder i kategorier', 'first_level', 1), 
    // Thumbnail view
    'minibilleder visning',
    array('Antal kolonner på minibilleder siden', 'thumbcols', 0),
    array('Antal rækker på minibilleder siden', 'thumbrows', 0),
    array('Max antal minibilleder pr side', 'max_tabs', 0),
    array('Vis billedeoverskriften (i tilføjelse til titel) nedenfor minibillede', 'caption_in_thumbview', 1),
    array('Vis antal af kommentarer nedenfor minibilledet', 'display_comment_count', 1),
    array('Standard sortering af billeder', 'default_sort_order', 3),
    array('Minimum antal stemmer for billede før visning i \'top karakter\' listen', 'min_votes_for_rating', 0),
    array('Alternativ og titel tekst af minibillede. Vis titel og nøgleord i stedet for bildeinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
    // Display Image & Comment settings
    'Bilde visning og Kommentar Indstillinger',
    array('Bredde for tabellen til visning af billeder (pixels eller %)', 'picture_table_width', 0),
    array('Billede information er synlig som standard', 'display_pic_info', 1),
    array('Filtrer bande ord i kommentarer', 'filter_bad_words', 1),
    array('Tillad smilies i kommentarer', 'enable_smilies', 1),
    array('Tillad flere kommentarer på et bilde fra samme bruger', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
    array('Sende e-Mail til admin når nye kommentarer skrives' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
    array('Max længde for billedbeskrivelse', 'max_img_desc_length', 0),
    array('Max længde på et ord', 'max_com_wlength', 0),
    array('Max antal linjer i en kommentar', 'max_com_lines', 0),
    array('Maximum længde på en kommentar', 'max_com_size', 0),
    array('Vis film rulle', 'display_film_strip', 1),
    array('Antal emner i film rulle', 'max_film_strip_items', 0),
    array('Tillade visning af bilder i fuld størrelse fra anonyme brugere', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
    array('Antal dage en bruger skal vente på at stemme på samme bilde flere ganger','keep_votes_time',0), // new in cpg1.2.2c nuke
    array('Vis billede i fuld størrelse i slideshow','fullsize_slideshow',1),
    array('Vis blokke på højre side', 'right_blocks', 1), // new 1.2.2
    // Pictures and thumbnails settings
    'Billede og minibilleder indstillinger',
    array('Kvalitet på JPEG filer', 'jpeg_qual', 0),
    array('Indsæt vandmærke på billede', 'watermark', 1),
    array('Maks størrelse på minibilleder <b>*</b>', 'thumb_width', 0),
    array('Brug dimension ( bredde, højde eller maksimum af de to til minibilleder )<b>*</b>', 'thumb_use', 7),
    array('Opret mellemstore billeder', 'make_intermediate', 1),
    array('Max bredde eller højde for et mellemstort billede <b>*</b>', 'picture_width', 0),
    array('Max størrelse for uploadet billeder (KB)', 'max_upl_size', 0),
    array('Max bredde eller højde for uploadet billeder (pixels)', 'max_upl_width_height', 0), 
    array('Tillade upload af flere filer med samme filnavn', 'samename', 1), 
	// User settings
    'Bruger indstillinger',
    array('Tillad registrering af nye brugere', 'allow_user_registration', 1),
/*
    array('User registration requires e-mail-verification', 'reg_requires_valid_email', 1),
    array('Tillad to brugere at have samme e-mail-adresse', 'allow_duplicate_emails_addr', 1),
*/
    array('Brugere kan have private albums', 'allow_private_albums', 1),
    array('Vis bruger avatar i stedet for privat album bilde', 'avatar_private_album', 1),
	// Custom fields for image description
    'Brugerdefinerede felter til billedbeskrivelse (lad det forblive blanke, hvis ikke de skal bruges)',
    array('Felt 1 navn', 'user_field1_name', 0),
    array('Felt 2 navn', 'user_field2_name', 0),
    array('Felt 3 navn', 'user_field3_name', 0),
    array('Felt 4 navn', 'user_field4_name', 0), 
    // Pictures and thumbnails advanced settings
    'Avancerede billede og minibillede indstillinger',
    array('Vis ikon for private album for anononyme brugere', 'show_private', 1),
    array('Forbudte karakterer i filnavne', 'forbiden_fname_char', 0),
    array('Accepterede filtyper for uploadede billeder', 'allowed_file_extensions', 0),
    array('Program til skalering af billeder', 'thumb_method', 2),
    array('Sti til ImageMagick/netpbm \'konveter\' værktøj (eksempel /usr/bin/X11/)', 'impath', 0),
    array('Tillad billedetyper (kun aktiv ved brug af ImageMagick)', 'allowed_img_types', 0),
    array('Kommandolinje indstillinger ved brug af ImageMagick', 'im_options', 0),
    array('Læs EXIF data i JPEG filer', 'read_exif_data', 1),
    array('Læs IPTC data i JPEG filer', 'read_iptc_data', 1), // new in cpg1.2.0nuke
    array('Album folder <b>*</b>', 'fullpath', 0),
    array('Mappen for bruger billeder <b>*</b>', 'userpics', 0),
    array('Foranstillet navn på mellembilleder <b>*</b>', 'normal_pfx', 0),
    array('Foranstillet navn på minibilleder <b>*</b> <b>*</b>', 'thumb_pfx', 0),
    array('Billedeinfo vis filnavn', 'picinfo_display_filename', '1'), // new in cpg1.2.0nuke
    array('Billedeinfo vis album navn', 'picinfo_display_album_name', '1'), // new in cpg1.2.0nuke
    array('Billedeinfo vis fil størrelse', 'picinfo_display_file_size', '1'), // new in cpg1.2.0nuke
    array('Billedeinfo vis dimensioner', 'picinfo_display_dimensions', '1'), // new in cpg1.2.0nuke
    array('Billedeinfo vis antal viste', 'picinfo_display_count_displayed', '1'), // new in cpg1.2.0nuke
    array('Billedeinfo vis URL', 'picinfo_display_URL', '1'), // new in cpg1.2.0nuke
    array('Billedeinfo vis URL som bogmærke link', 'picinfo_display_URL_bookmark', '1'), // new in cpg1.2.0nuke
    array('Billedeinfo vis fav. album link', 'picinfo_display_favorites', '1'), // new in cpg1.2.0nuke
    // Cookies &amp; Charset settings
    'Cookies &amp; tegn-kodnings indstillinger',
    array('Navn på cookie brugt af dette system', 'cookie_name', 0),
    array('Stien til cookie brugt at dette system', 'cookie_path', 0),
//    array('Character encoding', 'charset', 4), 
    'Avancerede indstillinger',
    array('Aktiver fejlfindings tilstand', 'debug_mode', 1),
    '<br /><div align="center">(*) Felt markeret med * skal ikke ændres hvis du allerede har billeder i galleriet</div><br />'
    );
// end left side interpretation