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
  $Source: /cvs/l10n/norwegian/coppermine.php,v $
  $Revision: 9.13 $
  $Author: pitcher $
  $Date: 2007/10/07 22:16:27 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php,$lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;  
define('PIC_VIEWS', 'Vist');
define('PIC_VOTES', 'Stemmer');
define('PIC_COMMENTS', 'Kommentarer');

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Norwegian');
define('LANG_NAME_NATIVE', 'Norsk');
define('LANG_COUNTRY_CODE', 'no');
define('TRANS_NAME', 'Kai Michelsen (Pitcher)');
define('TRANS_EMAIL', '');
define('TRANS_WEBSITE', 'http://dragonflycms.no');
define('TRANS_DATE', '2004-09-29');
define('TRANS_NAME2', 'Hilde Bjørnstad (HildeB)');
define('TRANS_EMAIL2', 'hilde@liljen.net');
define('TRANS_WEBSITE2', 'http://norsk.kameraklubb.net/');
define('TRANS_DATE2', '2005-01-14');
define('CHARSET', 'UTF-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Ja');
define('NO', 'Nei');
// some common strings
define('BACK', 'Tilbake');
define('CONTINU', 'Fortsett');
define('INFO', 'Informasjon');
//define('_ERROR','Error'); //already in main lang file
define('ALBUM_DATE_FMT', '%d. %l %Y');
define('LASTCOM_DATE_FMT', '%d/%m/%y @ %H:%M');
define('LASTUP_DATE_FMT', '%d. %B %Y');
define('REGISTER_DATE_FMT', '%d. %B %Y');
define('LASTHIT_DATE_FMT', '%d. %B %Y @ %H:%M');
define('COMMENT_DATE_FMT', '%d. %B %Y @ %H:%M');

// lang_meta_album_names
define('RANDOM', 'Tilfeldige bilder');
define('LASTUP', 'Siste bilder');
define('LASTUPBY', 'Mine Siste Bilder');
define('LASTALB', 'Sist oppdaterte album');
define('LASTCOM', 'Siste kommentarer');
define('LASTCOMBY', 'Mine Siste Kommentarer');
define('TOPN', 'Mest viste');
define('TOPRATED', 'Beste karakter');
define('LASTHITS', 'Siste visninger');
define('SEARCH', 'Søkeresultat');
define('FAVPICS', 'Favoritt Bilder');

// lang_errors
define('ACCESS_DENIED', 'Du har ikke adgang til denne siden.');
define('PERM_DENIED', 'Du kan ikke utføre denne handlingen.');
define('PARAM_MISSING', 'Scriptet ble kallet uten nødvendige paramenter.');
define('NON_EXIST_AP', 'Det valgte album/bilde eksisterer ikke!');
define('QUOTA_EXCEEDED', 'Diskmengde er oppbrukt<br /><br />Du har plass til [quota]K, dine bilder bruker [space]K. Legger du inn flere bilder overskrider du den tillatte mengden');
define('GD_FILE_TYPE_ERR', 'Når albumet bruker GD Graphics- teknikk er det kun tillatt å bruke JPEG eller PNG bilder. Har du muligheter for å bruke PNG er dette det beste valget!');
define('INVALID_IMAGE', 'Bildet du lastet opp er defekt eller støtter ikke GD teknikk');
define('RESIZE_FAILED', 'Kunne ikke forandre størrelsen på bildet eller opprette miniatyrbilde.');
define('NO_IMG_TO_DISPLAY', 'Ingen bilder å vise');
define('NON_EXIST_CAT', 'Den valgte kategorien eksisterer ikke');
define('ORPHAN_CAT', 'En kategori har ikke noe tilhørsforhold. Kjør kategorimanager for å rette problemet.');
define('DIRECTORY_RO', 'Mappen \'%s\' er skrivebeskyttet. Bildet kan ikke slettes.');
define('NON_EXIST_COMMENT', 'Den valgte kommentaren finnes ikke.');
define('PIC_IN_INVALID_ALBUM', 'Bilder i album som ikke eksisterer (%s)!?');
define('BANNED', 'Du har mistet tillatelsen til å bruke denne siden.');
define('NOT_WITH_UDB', 'Funksjonen er deaktivert fordi Coppermine kjører sammen med et forum.');
define('MEMBERS_ONLY', 'Denne funksjonen er kun for medlemmer, vennligst registrer deg.');
define('MUSTBE_GOD', 'Denne funksjonen er kun for administrator. Du må være logget inn som superadmin for å få tilgang til denne funksjonen');
define('NO_IMG_TO_APPROVE', 'Ingen bilder å godkjenne');

// lang_main_menu
define('ALB_LIST_TITLE', 'Gå til albumlisten');
define('ALB_LIST_LNK', 'Albumliste');
define('MY_GAL_TITLE', 'Gå til personlig galleri');
define('MY_GAL_LNK', 'Mitt galleri');
define('MY_PROF_LNK', 'Min profil');
define('MY_PROF_TITLE', 'Sjekk din diskkvote og grupper');
define('ADM_MODE_TITLE', 'Skift til admin modus');
define('ADM_MODE_LNK', 'Admin modus');
define('USR_MODE_TITLE', 'Skift til bruker modus');
define('USR_MODE_LNK', 'Bruker modus');
define('UPLOAD_PIC_TITLE', 'Last opp et bilde til album');
define('UPLOAD_PIC_LNK', 'Last opp bilde');
define('REGISTER_TITLE', 'Opprett konto');
define('REGISTER_LNK', 'Registrer');
define('LOGIN_LNK', 'Logg inn');
define('LOGOUT_LNK', 'Logg ut');
define('LASTUP_LNK', 'Siste opplastinger');
define('LASTUP_TITLE', 'Siste opplastede bilder');
define('LASTCOM_TITLE',  'Bilder i rekkefølge etter siste kommentar');
define('LASTCOM_LNK',  'Siste kommentarer');
define('TOPN_TITLE', 'Bilder som har blitt vist flest ganger');
define('TOPN_LNK', 'Mest viste');
define('TOPRATED_TITLE', 'Topp rangerte bilder');
define('TOPRATED_LNK', 'Topp rangerte');
define('SEARCH_TITLE', 'Search Photo Collection');
define('SEARCH_LNK', 'Søk');
define('FAV_TITLE', 'Mine Favoritter');
define('FAV_LNK', 'Mine favoritter');
define('HELP_TITLE', 'HJELP');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Last opp til godkjenning');
define('CONFIG_LNK', 'Konfigurasjon');
define('ALBUMS_LNK', 'Album');
define('CATEGORIES_LNK', 'Kategorier');
define('USERS_LNK', 'Bruker');
define('GROUPS_LNK', 'Grupper');
define('COMMENTS_LNK', 'Kommentarer');
define('SEARCHNEW_LNK', 'Batch Opplasting');
define('UTIL_LNK', 'Reduser bilder');
define('BAN_LNK', 'Utesteng brukere');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Opprett / ordne albumer');
define('MODIFYALB_LNK', 'Rediger album');
//define('MY_PROF_LNK', 'My profile');

// lang_cat_list
define('CATEGORY', 'Kategori');
define('ALBUMS', 'Album');
//define('PICTURES', 'Pictures');

// lang_album_list
define('ALBUM_ON_PAGE', '%d album på %d sider');
// lang_thumb_view
define('DATE', 'Dato');
define('NAME', 'Brukernavn');
define('TITLE', 'Reduser størrelsen på bilder');
define('SORT_DA', 'Sorter i stigende dato rekkefølge');
define('SORT_DD', 'Sorter i synkende dato rekkefølge');
define('SORT_NA', 'Sorter alfabetisk i stigende rekkefølge');
define('SORT_ND', 'Sorter alfabetisk i synkende rekkefølge');
define('SORT_TA', 'Sorter bilder i stigende rekkefølge');
define('SORT_TD', 'Sorter bilder i synkende rekkefølge');
define('PIC_ON_PAGE', '%d bilder på %d side(r)');
define('USER_ON_PAGE', '%d brukere på %d side(r)');
define('SORT_RA', 'Sorter etter rangering i stigende rekkefølge');
define('SORT_RD', 'Sorter etter rangering i synkende rekkefølge');
define('THUMB_RATING', 'RANGERING');
define('SORT_TITLE', 'Sorter bilder etter:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Gå tilbake til oversikt');
define('PIC_INFO_TITLE', 'Vis/skjul informasjon om bildet');
define('SLIDESHOW_TITLE', 'Slideshow');
define('SLIDESHOW_DISABLED', 'Slideshow er ikke aktiv');
define('SLIDESHOW_DISABLED_MSG', 'Denne funksjonen er kun for medlemmer.');
define('ECARD_TITLE', 'E-postkort fra %s til deg!');
define('ECARD_DISABLED', 'E-postkort er slått av');
define('ECARD_DISABLED_MSG', 'Du har ikke tillatelse til å sende E-postkort');
define('PREV_TITLE', 'Se forrige bilde');
define('NEXT_TITLE', 'Se neste bilde');
define('PIC_POS', 'BILDE %s/%s');
define('NO_MORE_IMAGES', 'Det er ikke flere bilder i dette galleriet');
define('NO_LESS_IMAGES', 'Dette er første bilde i dette galleriet');

// lang_rate_pic
define('RATE_THIS_PIC', 'Ranger dette bildet ');
define('NO_VOTES', '(Ingen stemmer enda)');
define('RATING', 'Karakter (%s stemmer)');
define('RUBBISH', 'Dårlig');
define('POOR', 'Middels');
define('FAIR', 'Rimelig');
define('GOOD', 'Bra');
define('EXCELLENT', 'Bedre en bra');
define('GREAT', 'Fantastisk');

// lang_cpg_die
//define('INFO', 'Information');
//define('ERROR', 'Error');
define('_CRITICAL_ERROR', 'Kritisk feil');
define('FILE', 'Fil: ');
define('LINE', 'Linje: ');

// lang_display_thumbnails
define('FILENAME', 'Filnavn');
define('FILESIZE', 'Filstørrelse: ');
define('DIMENSIONS', 'Dimensjoner');
define('DATE_ADDED', 'Lagt inn den: ');

// lang_get_pic_data
define('N_COMMENTS', '%s kommentar');
define('N_VIEWS', '%s visninger');
define('N_VOTES', '(%s stemmer)');


// lang_albmgr_php
define('ALB_NEED_NAME', 'Albumet må ha et navn!');
define('CONFIRM_MODIFS', 'Er du sikker på at du vil lagre disse innstillingene?');
define('NO_CHANGE', 'Du lagret ingen endringer!');
define('NEW_ALBUM', 'Nytt album');
define('CONFIRM_DELETE1', 'Er du sikker på at du vil slette albumet?');
define('CONFIRM_DELETE2', '\nAlle bilder og kommentarer vil bli slettet!');
define('SELECT_FIRST', 'Velg først et album');
define('ALB_MRG', 'Album Oppsett');
define('MY_GALLERY', '* Mitt galleri *');
define('NO_CATEGORY', '* Ingen kategori *');
define('DELETE', 'Slett');
define('NEW', 'Ny');
define('APPLY_MODIFS', 'Lagre endringer');
define('SELECT_CATEGORY', 'Velg kategori');

// lang_catmgr_php
define('MISS_PARAM', 'Obligatorisk paramenter ved \'%s\'operasjonen ble ikke utført!');
define('UNKNOWN_CAT', 'Den valgte kategorien eksisterer ikke i databasen');
define('USERGAL_CAT_RO', 'Brukergalleri kategorien kan ikke slettes!');
define('MANAGE_CAT', 'Administrer kategorier');
define('CONFIRM_DELETE_CAT', 'Er du sikker på at du vil SLETTE denne kategorien');
//define('CATEGORY', 'Category');
define('OPERATIONS', 'Handling');
define('MOVE_INTO', 'Flytt til');
define('UPDATE_CREATE', 'Oppdater/Opprett kategori');
define('PARENT_CAT', 'Hoved kategori');
define('CAT_TITLE', 'Kategori tittel');
define('CAT_DESC', 'Kategori beskrivelse');

// lang_config_php
define('CONFIG_TITLE', 'Konfigurasjon');
define('RESTORE_CFG', 'Gjenopprett standardoppsett');
define('SAVE_CFG', 'Lagre ny konfigurasjon');
define('NOTES', 'Notis');
//define('INFO', 'Information');
define('UPD_SUCCESS', 'Coppermine konfigurasjonen er oppdatert');
define('RESTORE_SUCCESS', 'Coppermine standardoppsett ble oppdatert');
define('NAME_A', 'Navn stigende');
define('NAME_D', 'Navn synkende');
define('TITLE_A', 'Tittel i stigende rekkefølge');
define('TITLE_D', 'Tittel i synkende rekkefølge');
define('DATE_A', 'Dato stigende');
define('DATE_D', 'Dato synkende');
define('RATING_A', 'Rangering stigende');
define('RATING_D', 'Rangering synkende');
define('TH_ANY', 'Maks Aspekt');
define('TH_HT', 'Høyde');
define('TH_WD', 'Bredde');


// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Du må skrive ditt navn og en kommentar');
define('COM_ADDED', 'Kommentar har blitt lagt til');
define('ALB_NEED_TITLE', 'Du må skrive inn en tittel for albumet!');
define('NO_UDP_NEEDED', 'Ingen oppdatering trengs.');
define('ALB_UPDATED', 'Albumet ble oppdatert');
define('UNKNOWN_ALBUM', 'Valgte album eksisterer ikke, eller du har ikke tilgang til å laste opp bilder til dette albumet');
define('NO_PIC_UPLOADED', 'Ingen bilde ble lastet opp!<br /><br />Hvis du virkelig valgte et bilde for opplasting, sjekk om serveren tillater filopplasting...');
define('ERR_MKDIR', 'Kunne ikke lage mappen %s !');
define('DEST_DIR_RO', 'Mappen %s er ikke skrivbar for scriptet!');
define('ERR_MOVE', 'Umulig å flytte %s til %s !');
define('ERR_FSIZE_TOO_LARGE', 'Størrelsen på bildet du har lastet opp er for stort (maks tilatte størrelse er %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Størrelsen på bildet du har lastet opp er for stort (maks tillatte størrelse er %s x %s) !');
define('ERR_INVALID_IMG', 'Filen du har lastet opp er ikke et gyldig bilde!');
define('ALLOWED_IMG_TYPES', 'Du kan kun laste opp %s bilder.');
define('ERR_INSERT_PIC', 'Bildet \'%s\' kan ikke bli lagt til i albumet ');
define('UPLOAD_SUCCESS', 'Ditt bilde ble velykket lastet opp<br /><br />'.((is_admin())? '' :'Det vil bli synlig etter admin godkjennelse'));
//define('INFO', 'Information');
define('ERR_COMMENT_EMPTY', 'Din kommentar er blank!');
define('ERR_INVALID_FEXT', 'Kun filer med disse filendelsene vil bli akseptert: <br /><br />%s.');
define('NO_FLOOD', 'Beklager, men du er allerede eier av den siste kommentaren som er lagt til for dette bildet<br /><br />Rediger kommentaren hvis du vil forandre den');
define('REDIRECT_MSG', 'Du blir videresendt.<br /><br /><br />klikk \'FORTSETT\' hvis siden ikke automatisk blir gjenoppfrisket');
define('UPL_SUCCESS', 'Ditt bilde ble lagt til vellykket');

// lang_delete_php
define('CAPTION', 'Overskrift');
define('FS_PIC', 'Full størrelse');
define('DEL_SUCCESS', 'Slettet');
define('NS_PIC', 'Normal størrelse');
define('ERR_DEL', 'Kan ikke slettes');
define('THUMB_PIC', 'Miniatyrbilde');
//define('COMMENT', 'comment');
define('IM_IN_ALB', 'Bilde i album');
define('ALB_DEL_SUCCESS', 'Album \'%s\' slettet');
define('ALB_MGR', 'Album Administrator');
define('ERR_INVALID_DATA', 'Ødelagt data i \'%s\'');
define('CREATE_ALB', 'Oppretter album \'%s\'');
define('UPDATE_ALB', 'Oppdaterer album \'%s\' med tittel \'%s\' og index \'%s\'');
define('DEL_PIC', 'SLETT DETTE BILDET');
define('DEL_ALB', 'Slett album');
define('DEL_USER', 'Slett bruker');
//define('ERR_UNKNOWN_USER', 'The selected user does not exist !');
define('COMMENT_DELETED', 'Kommentarer er slettet');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'Er du sikker på at du vil SLETTE dette bildet? <br />Kommentarer vil også bli slettet.');
define('DEL_THIS_PIC', 'Slett dette bildet');
define('SIZE', '%s x %s piksler');
define('VIEWS', '%s ganger');
define('SLIDESHOW', 'Slideshow');
define('STOP_SLIDESHOW', 'Stopp slideshow');
define('VIEW_FS', 'Klikk for å vise i full størrelse');
define('EDIT_PIC', 'Rediger bildeinformasjon');

// lang_picinfo
define('PIC_INF_TITLE', 'Informasjon om bildet');
define('PIC_INF_FILENAME', 'Filnavn');
define('ALBUM_NAME', 'Album navn');
define('PIC_INFO_RATING', 'Rangering (%s stemmer)');
define('KEYWORDS', 'Nøkkelord');
define('PIC_INF_FILE_SIZE', 'Filstørrelse');
define('PIC_INF_DIMENSIONS', 'Dimensjoner');
define('DISPLAYED', 'Visninger');
define('CAMERA', 'Kamera');
define('DATE_TAKEN', 'Tatt den');
define('APERTURE', 'Åpning');
define('EXPOSURE_TIME', 'Blendingstid');
define('FOCAL_LENGTH', 'Fokal lengde');
define('COMMENT', 'Kommentar');
define('ADDFAV', 'Legg til i favoritter');
define('ADDFAVPHRASE', 'Favoritter');
define('REMFAV', 'Fjern fra favoritter');
define('IPTCTITLE', 'IPTC Tittel');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Nøkkelord');
define('IPTCCATEGORY', 'IPTC Kategori');
define('IPTCSUBCATEGORIES', 'IPTC Under-kategorier');
define('BOOKMARK_PAGE', 'Bookmark Bilde');
define('REMOVEFAV', 'Fjernet fra Favoritt Album');
define('ADDEDTOFAV', 'Lagt til i Favoritt Album');

// lang_display_comments
define('OK', 'OK');
define('COM_EDIT_TITLE', 'Endre denne kommentaren');
define('CONFIRM_DELETE_COM', 'Er du sikker på du vil slette denne kommentaren?');
define('ADD_YOUR_COMMENT', 'Legg til din kommentar');
define('COM_NAME', 'Navn');
//define('COMMENT', 'Comment');
define('YOUR_NAME', 'Ditt navn');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Klikk på bildet for å lukke');

// lang_ecard_php
define('E_TITLE', 'Send et e-kort');
define('INVALID_EMAIL', '<b>Advarsel</b> : ugyldig E-post adresse!');
define('E_ECARD_TITLE', 'Et e-kort fra %s til deg');
define('VIEW_ECARD', 'Hvis kortet ikke vises riktig, klikk her');
define('VIEW_MORE_PICS', 'Klikk på denne linken for flere bilder!');
define('SEND_SUCCESS', 'Ditt E-postkort har blitt sendt');
define('SEND_FAILED', 'Beklager, serveren kunne ikke sende...');
define('FROM', 'Fra');
define('_YOUR_NAME', 'Ditt navn');
define('YOUR_EMAIL', 'Din E-post adresse');
define('TO', 'Til');
define('RCPT_NAME', 'Navn på mottaker');
define('RCPT_EMAIL', 'E-post adresse til mottaker');
define('GREETINGS', 'Hilsen');
define('MESSAGE', 'Beskjed');
define('ECARD_LINK_CORRUPT', 'Beklager, men E-kort dataene har blitt ødelagt av din E-Post klient, vennligst prøv å kopier inn linken i nettleseren din');

// lang_editpics_php
define('PIC_INFO', 'Informasjon om bilde');
define('ALBUM', 'Album');
define('EDIT_TITLE', 'Tittel');
define('DESC', 'Beskrivelse');
//define('KEYWORDS', 'Keywords');
define('PIC_INFO_STR', '%sx%s - %skB - %s visninger - %s stemmer');
define('APPROVE', 'Godkjenn bilde');
define('POSTPONE_APP', 'Avslå godkjennelse');
//define('DEL_PIC', 'Delete picture');
define('READ_EXIF', 'Les EXIF info igjen');
define('RESET_VIEW_COUNT', 'Tilbakestill teller');
define('RESET_VOTES', 'Tilbakestill avstemning');
define('DEL_COMM', 'Slett valgte kommentar');
define('UPL_APPROVAL', 'Last opp godkjennelse');
define('EDIT_PICS', 'Redigere bilder');
define('SEE_NEXT', 'Se neste');
define('SEE_PREV', 'Se forrige');
define('N_PIC', '%s bilder');
define('N_OF_PIC_TO_DISP', 'bilder til fremvisning');
define('APPLY', 'Legg til rettelser');

// lang_groupmgr_php
define('GROUP_NAME', 'Gruppenavn');
define('DISK_QUOTA', 'Disk kvote');
define('CAN_RATE', 'Kan gi karakterer');
define('CAN_SEND_ECARDS', 'Kan sende E-postkort');
define('CAN_POST_COM', 'Kan opprette kommentarer');
define('CAN_UPLOAD', 'Gjester kan laste opp bilder');
define('CAN_HAVE_GALLERY', 'Kan ha privat galleri');
//define('APPLY', 'Apply modifications');
define('CREATE_NEW_GROUP', 'Opprett ny gruppe');
define('DEL_GROUPS', 'Slette valgte grupper');
define('CONFIRM_DEL', 'Er du sikker på du vil SLETTE denne brukeren ?<br />Alle bilder og albumer vil også bli slettet.');
define('GROUP_TITLE', 'Administrer brukergrupper');
define('APPROVAL_1', 'Godkjennelse på offentlige opplastinger(1)');
define('APPROVAL_2', 'Godkjennelse på private opplastinger(2)');
define('NOTE1', '<b>(1)</b> Opplastinger i offentlig album krever administrators godkjennelse');
define('NOTE2', '<b>(2)</b> Opplastinger i privat album som tilhører brukeren krever administrators godkjennelse');
//define('NOTES', 'Notes');

// lang_index_php
define('WELCOME', 'Velkommen!');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'Er du sikker på at du vil SLETTE dette albumet? <br />Alle bilder og kommentarer vil også bli slettet.');
//define('DELETE', 'DELETE');
define('MODIFY', 'REDIGERE');
//define('EDIT_PICS', 'EDIT PICS');

// lang_list_categories
define('HOME', _HOME);
define('STAT1', '<b>[pictures]</b> bilder i <b>[albums]</b> album og <b>[cat]</b> kategorier med <b>[comments]</b> kommentarer vist <b>[views]</b> ganger');
define('STAT2', '<b>[pictures]</b> bilder i <b>[albums]</b> album vist <b>[views]</b> ganger');
define('XX_S_GALLERY', '%s\'s Galleri');
define('STAT3', '<b>[pictures]</b> bilder i <b>[albums]</b> album med <b>[comments]</b> kommentarer vist <b>[views]</b> ganger');

// lang_list_users
define('USER_LIST', 'Brukerliste');
define('NO_USER_GAL', 'Ingen brukere kan ha album');
define('N_ALBUMS', '%s album');
define('N_PICS', '%s bilder');

// lang_list_albums
define('N_PICTURES', '%s bilder');
define('LAST_ADDED', ', siste lagt inn %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Oppdaterer album %s');
define('GENERAL_SETTINGS', 'Generelle innstillinger');
define('ALB_TITLE', 'Album tittel');
define('ALB_CAT', 'Album kategori');
define('ALB_DESC', 'Album beskrivelse');
define('ALB_THUMB', 'Album miniatyrbilder');
define('ALB_PERM', 'Tillatelser for dette album');
define('CAN_VIEW', 'Albumet kan vises av');
define('MOD_CAN_UPLOAD', 'Gjester kan laste opp bilder');
define('CAN_POST_COMMENTS', 'Gjester kan skrive kommentarer');
define('MOD_CAN_RATE', 'Gjester kan stemme på bilder');
define('USER_GAL', 'Brukergalleri');
define('NO_CAT', '* Ingen kategori *');
define('ALB_EMPTY', 'Albumet er tomt');
define('LAST_UPLOADED', 'Sist lastet opp');
define('PUBLIC_ALB', 'Alle (offentlige album)');
define('ME_ONLY', 'Kun meg');
define('OWNER_ONLY', 'Albumet eies av (%s)');
define('GROUPP_ONLY', 'Medlemmer av \'%s\' gruppen');
define('ERR_NO_ALB_TO_MODIFY', 'Ingen album å redigere.');
define('UPDATE', 'Oppdater album');

// lang_rate_pic_php
define('ALREADY_RATED', 'Beklager, men du har allerede stemt på dette bildet');
define('RATE_OK', 'Din stemme ble akseptert');

// lang_register_php
define('USERNAME', 'Brukernavn');
define('GROUP', 'Gruppe');
define('DISK_USAGE', 'Disk plass brukt');
define('X_S_PROFILE', '%s\'s profil');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Gjennomgå kommentarer');
define('NO_COMMENT', 'Der er ingen kommentarer å se på');
define('N_COMM_DEL', '%s kommentarer slettet');
define('N_COMM_DISP', 'Kommentarer og vise');
define('R_SEE_PREV', 'Se forrige');
define('R_SEE_NEXT', 'Se neste');
define('R_DEL_COMM', 'Slett valgte kommentarer');

// lang_search_php
define('S_SEARCH', 'Søk i bilde samlingen');

// lang_search_new_php
define('PAGE_TITLE', 'Søk i nye bilder');
define('SELECT_DIR', 'Velg mappe');
define('SELECT_DIR_MSG', 'Denne funksjonen tillater deg å legge inn bilder du har lastet opp via FTP.<br /><br />Velg mappen du har lastet opp bilder i');
define('NO_PIC_TO_ADD', 'Det finnes ingen bilder å legge til');
define('NEED_ONE_ALBUM', 'Du må ha minst et album for å legge til bilder');
define('WARNING', 'Advarsel');
define('CHANGE_PERM', 'Systemet kan ikke skrive til denne mappen, du må endre rettigheter med CHMOD 755 eller 777 før du prøver igjen !');
define('TARGET_ALBUM', '<b>Flytt bilder av &quot;</b>%s<b>&quot; til </b>%s');
define('FOLDER', 'Mappe');
define('IMAGE', 'Bilde');
//define('ALBUM', 'Album');
define('RESULT', 'Resultat');
define('DIR_RO', 'Skrivebeskyttet. ');
define('DIR_CANT_READ', 'Kan ikke lese. ');
define('INSERT', 'Sett inn nye bilder til album');
define('LIST_NEW_PIC', 'Liste med nye bilder');
define('INSERT_SELECTED', 'Sett inn valge bilder');
define('NO_PIC_FOUND', 'Ingen nye bilder ble funnet');
define('BE_PATIENT', 'Ha litt tålmodighet, systemet arbeider nå med bildene');
define('SN_NOTES', '<ul><li><b>OK</b> : Betyr at bildet er lagt inn<li><b>DP</b> : Betyr at bildet er en kopi og ligger i databasen<li><b>PB</b> : Betyr at bildet ikke kan legges inn, sjekk tillatelser<li>Hvis OK, DP, PB \'signalet\' ikke kommer frem klikk da på manglende bilder og se om signalet kommer frem i PHP<li>Hvis din nettleser lager timeout prøv å oppdatere den</ul>');
define('SELECT_ALBUM', 'Velg album');
define('NO_ALBUM', 'Ingen album ble valgt, gå tilbake og velg et album til å legge bildene dine i');

// lang_upload_php
define('UP_TITLE', 'Last opp bilde');
define('MAX_FSIZE', 'Maks filstørrelse er satt til %s kB');
//define('ALBUM', 'Album');
define('PICTURE', 'Bilde');
define('PIC_TITLE', 'Tittel på bilde');
define('DESCRIPTION', 'Beskrivelse på bilde');
define('UP_KEYWORDS', 'Nøkkelord (separer med mellomrom)');
define('ERR_NO_ALB_UPLOADABLES', 'Beklager, ingen album tillatt for opplasting av bilder');

// lang_usermgr_php
define('U_TITLE', 'Brukere');
//define('NAME_A', 'Name ascending');
//define('NAME_D', 'Name descending');
define('GROUP_A', 'Gruppe stigende');
define('GROUP_D', 'Gruppe synkende');
define('REG_A', 'Reg dato stigende');
define('REG_D', 'Reg dato synkende');
define('PIC_A', 'Bilder stigende');
define('PIC_D', 'Bilder synkende');
define('DISKU_A', 'Disk behandling stigende');
define('DISKU_D', 'Disk behandling synkene');
define('SORT_BY', 'Sortert etter');
define('ERR_NO_USERS', 'Brukertabell er tom!');
define('ERR_EDIT_SELF', 'Du kan ikke rette i egen profil, bruk \'Min profil\' link til dette formål');
define('EDIT', 'REDIGERE');
//define('DELETE', 'DELETE');
define('U_NAME', 'User name');
//define('GROUP', 'Group');
define('INACTIVE', 'Ikke aktiv');
//define('OPERATIONS', 'Operations');
define('PICTURES', 'Bilder');
define('DISK_SPACE', 'Plass brukt / Kvote');
define('REGISTERED_ON', 'Registrert den');
define('U_USER_ON_P_PAGES', '%d brukere på %d sider');
define('USER_CONFIRM_DEL', 'Er du sikker på at du vil SLETTE denne brukeren? <br />Alle hans/hennes albumer og bilder vil også bli slettet.');
define('MAIL', 'POST');
define('ERR_UNKNOWN_USER', 'Den valgte brukeren eksisterer ikke!');
define('MODIFY_USER', 'Rediger bruker');
//define('NOTES', 'Notes');
define('NOTE_LIST', '<li>Hvis du ikke vil endre det aktuelle passordet, la feltet "passord" stå tomt');
define('PASSWORD', 'Passord');
define('USER_ACTIVE_CP', 'Bruker er aktiv');
define('USER_GROUP_CP', 'Brukergruppe');
define('USER_EMAIL', 'Bruker E-post');
define('USER_WEB_SITE', 'Brukerens hjemmeside');
define('CREATE_NEW_USER', 'Opprett ny bruker');
define('USER_FROM', 'Brukers sted');
define('USER_INTERESTS', 'Brukerens interesser');
define('USER_OCC', 'Brukers yrke');

// lang_util_php
define('UTIL_TITLE', 'Forandre størrelse på bilder');
define('WHAT_IT_DOES', 'Hva det gjør');
define('WHAT_UPDATE_TITLES', 'Oppdater titler fra bildenavn');
define('WHAT_DELETE_TITLE', 'Slett titler');
define('WHAT_REBUILD', 'Gjenoppbygg miniatyrbilder fra endrede bilder');
define('WHAT_DELETE_ORIGINALS', 'Sletter originalbilder og bytter disse om med den versjonen du har endret størrelsen på');
define('U_FILE', 'Fil');
define('TITLE_SET_TO', 'tittel settes til');
define('SUBMIT_FORM', 'send');
define('UPDATED_SUCCESFULLY', 'oppdatert med suksess');
define('ERROR_CREATE', 'FEIL under opprettelse av');
define('CONTIN', 'Behandle fler bilder');
define('MAIN_SUCCESS', 'Filen %s ble brukt som hovedbilde');
define('ERROR_RENAME', 'Kunne ikke gi nytt navn til %s to %s');
define('ERROR_NOT_FOUND', 'Tittelen %s ble ikke funnet');
define('U_BACK', 'tilbake til hovedsiden');
define('THUMBS_WAIT', 'Oppdaterer bilder... vennligst vent...');
define('THUMBS_CONTINUE_WAIT', 'Fortsetter oppdateringen av bilder...');
define('TITLES_WAIT', 'Oppdaterer titler, vennligst vent...');
define('DELETE_WAIT', 'Sletter titler, vennligst vent..');
define('REPLACE_WAIT', 'Sletter originalbilder og erstatter med endrede bilder..');
define('INSTRUCTION', 'Hurtiginstrukser');
define('INSTRUCTION_ACTION', 'Velg handling');
define('INSTRUCTION_PARAMETER', 'Sett parameter');
define('INSTRUCTION_ALBUM', 'Velg album');
define('INSTRUCTION_PRESS', 'Trykk %s');
define('U_UPDATE', 'Oppdater album og / eller endrede bilder');
define('UPDATE_WHAT', 'Hva skal oppdateres');
define('UPDATE_THUMB', 'Kun miniatyrbilder');
define('UPDATE_PIC', 'Kun reduserte bilder');
define('UPDATE_BOTH', 'Begge, miniatyrbilder og reduserte bilder');
define('UPDATE_NUMBER', 'Antall fullførte bilder pr klikk');
define('UPDATE_OPTION', '(Prøv å sette innstillingen til lavere om du får time-out i nettleseren)');
define('FILENAME_TITLE', 'Filnavn ? Tittel på bilde');
define('FILENAME_HOW', 'Hvordan skal filen modifiseres');
define('FILENAME_REMOVE', 'Fjern .jpg slutten og bytt om med _ (flatstrek) med mellomrom');
define('FILENAME_EURO', 'Endre 2003_11_23_13_20_20.jpg til 23/11/2003 13:20');
define('FILENAME_US', 'Endre 2003_11_23_13_20_20.jpg til 11/23/2003 13:20');
define('FILENAME_TIME', 'Endre 2003_11_23_13_20_20.jpg til 13:20');
define('UT_DELETE', 'Slett titler på bilder og endrede bilder');
define('DELETE_TITLE', 'Slett titler på bilder');
define('DELETE_ORIGINAL', 'Slett bilder med original størrelse');
define('DELETE_REPLACE', 'Sletter originale bilder og bytter om med endrede bilder');
//define('SELECT_ALBUM', 'Select album');

// lang_pagetitle_php
define('VIEWING', 'Ser på bilde');
define('USR', '\'s Bilde Galleri');
define('PHOTOGALLERY', 'Bilde Galleri');
$lang_usermgr_php = array(
    'name_a' => 'Navn stigende',
    'name_d' => 'Navn synkende',
    'group_a' => 'Gruppe stigende',
    'group_d' => 'Gruppe synkende',
    'reg_a' => 'Reg dato stigende',
    'reg_d' => 'Reg dato synkende',
    'pic_a' => 'Bilde ant stigende',
    'pic_d' => 'Bilde ant synkende',
    'disku_a' => 'Disk bruk stigende',
    'disku_d' => 'Disk bruk synkende',
    );
$lang_byte_units = array('Bytes', 'KB', 'MB');
$lang_day_of_week = array('Søn', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'Lør');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des');

$lang_meta_album_names = array(
    'random' => 'Tilfeldige bilder',
    'lastup' => 'Siste innlegg',
    'lastupby' => 'Mine siste innlegg', // new 1.2.2
    'lastalb' => 'Siste oppdaterte albumer',
    'lastcom' => 'Siste kommentarer',
    'lastcomby' => 'Mine siste kommentarer', // new 1.2.2
    'topn' => 'Mest vist',
    'toprated' => 'Topp rangerte',
    'lasthits' => 'Sist vist',
    'search' => 'Søke resultater',
    'favpics' => 'Favoritt Bilder' // changed in cpg1.2.0nuke
    );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array(
    'title' => 'Konfigurasjon',
    'restore_cfg' => 'Gjenopprette fabrikk innstillinger',
    'save_cfg' => 'Lagre ny konfigurasjon',
    'notes' => 'Merk',
    'info' => 'Informasjon',
    'upd_success' => 'Coppermine konfigurasjonen ble oppdatert',
    'restore_success' => 'Coppermine fabrikk innstillinger gjenopprettet',
    'name_a' => 'Navn stigende',
    'name_d' => 'Navn synkende',
    'title_a' => 'Tittel stigende',
    'title_d' => 'Tittel synkende',
    'date_a' => 'Dato stigende',
    'date_d' => 'Dato synkende',
    'rating_a' => 'Rangering stigende', // new in cpg1.2.0nuke
    'rating_d' => 'Rangering synkende', // new in cpg1.2.0nuke
    'th_any' => 'Maks Aspekt',
    'th_ht' => 'Høyde',
    'th_wd' => 'Bredde',
    );
// start left side interpretation
$lang_config_data = array(
// General settings
'Generelle innstillinger',
    array('Galleri navn', 'gallery_name', 0),
    array('Galleri beskrivelse', 'gallery_description', 0),
    array('Galleri Administrator E-Post', 'gallery_admin_email', 0),
    array('Adresse til dragonfly f.eks http://eksempel.no/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
    array('Tema', 'theme', 6),
    array('Side spesifiserte tittler istedenfor >Coppermine', 'nice_titles', 1),
    //'Album list view',
    'Album liste visning',
    array('Bredde på hovedtabell (piksler eller %)', 'main_table_width', 0),
    array('Antall underkategorier å vise', 'subcat_level', 0),
    array('Antall albumer å vise', 'albums_per_page', 0),
    array('Antall kolonner for albumlisten', 'album_list_cols', 0),
    array('Størrelsen på ikonbilder i piksler', 'alb_list_thumb_size', 0),
    array('Hovedsidens innhold', 'main_page_layout', 0),
    array('Vis første nivå album ikoner i kategorier', 'first_level', 1), 
    //'Thumbnail view',
    'Ikon visning',
    array('Antall kolonner på ikonsiden', 'thumbcols', 0),
    array('Antall rader på ikonsiden', 'thumbrows', 0),
    array('Maks antall tabs', 'max_tabs', 0),
    array('Vis bildetekst (i tilegg til tittel)under ikonet', 'caption_in_thumbview', 1),
    array('Vis antall kommentarer under ikonet', 'display_comment_count', 1),
    array('Standard sorteringsrekkefølge for bilder', 'default_sort_order', 3),
    array('Minimum antall stemmer for et bilde for å komme på \'topp-rangering\' listen', 'min_votes_for_rating', 0),
    array('Alternative tittel og stikkord istedenfor picinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
     //'Display Image &amp; Comment settings',
    'Bilde visning og Kommentar innstillinger',
    array('Bredde på tabell for bildevisning (piksler eller %)', 'picture_table_width', 0),
    array('Bilde informasjon er synlig som standard', 'display_pic_info', 1),
    array('Filtrer ut stygge ord i kommentarer', 'filter_bad_words', 1),
    array('Tilate smilefjes i kommentarer', 'enable_smilies', 1),
    array('Tilate flere kommentarer på samme bilde fra samme bruker etterhverandre', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
    array('Sende E-Post til admin når nye kommentarer skrives' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
    array('Maks lengde på bildebeskrivelse', 'max_img_desc_length', 0),
    array('Maks antall tegn i et ord', 'max_com_wlength', 0),
    array('Maks antall linjer i en kommentar', 'max_com_lines', 0),
    array('Maks lengde på en kommentar', 'max_com_size', 0),
    array('Vise filmstripe', 'display_film_strip', 1),
    array('Antall bilder i en filmstripe', 'max_film_strip_items', 0),
    array('Tilate anonyme å se fullstørrelse av bilder', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
    array('Antall dager en bruker må vente for å stemme på samme bilde', 'keep_votes_time',0), // new in cpg1.2.2c nuke
    array('Vis fullstørrelse på bilde i slideshow', 'fullsize_slideshow',1),
    array('Vise blokker på høyresiden av bildene hvis høyreblokkene er på fra modul nivå?', 'right_blocks', 1), // new 1.2.2
    // 'Pictures and thumbnails settings',
    'Bilde og Ikon innstillinger',
    array('Kvalitet på JPEG filer', 'jpeg_qual', 0),
    array('Place watermark on image', 'watermark', 1),
    array('Maks dimensjoner på et ikon <b>*</b>', 'thumb_width', 0),
    array('Bruk dimensjonene ( bredde, høyde eller Maks aspekt for ikon )<b>*</b>', 'thumb_use', 7),
    array('Lag mellombilder', 'make_intermediate', 1),
    array('Maks bredde eller høyde på et mellombilde <b>*</b>', 'picture_width', 0),
    array('Maks størrelse for opplasting av bilder (KB)', 'max_upl_size', 0),
    array('Maks bredde eller høyde for opplasting av bilder (piksler)', 'max_upl_width_height', 0), 
    array('Tilate flere filer å bli lastet opp med samme filnavn', 'samename', 1), 
    //'User settings',
    'Bruker innstillinger',
    array('Tilate ny bruker registering', 'allow_user_registration', 1),
/*
    array('User registration requires email verification', 'reg_requires_valid_email', 1),
    array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),
*/
    array('Brukere kan ha private album', 'allow_private_albums', 1),
    array('Vis brukeravatar istedenfor privat album bilde', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',
    'Felter for bildebeskrivelse (la stå tomt hvis det ikke er i bruk)',
    array('Felt 1', 'user_field1_name', 0),
    array('Felt 2', 'user_field2_name', 0),
    array('Felt 3', 'user_field3_name', 0),
    array('Felt 4', 'user_field4_name', 0), 
     // 'Pictures and thumbnails advanced settings',
    'Bilde og ikon avanserte innstillinger',
    array('Vis privat album ikon til ikke påloggede bruker', 'show_private', 1),
    array('Tegn forbudt i filnavn', 'forbiden_fname_char', 0),
    array('Tilatte filendelser for opplasting av bilder', 'allowed_file_extensions', 0),
    array('Metode for skalering av bilder', 'thumb_method', 2),
    array('Sti til ImageMagick / netpbm \'convert\' program (eksempel /usr/bin/X11/)', 'impath', 0),
    array('Tilatte bildetyper (bare gyldig for ImageMagick)', 'allowed_img_types', 0),
    array('Oppgavelinje valg for ImageMagick', 'im_options', 0),
    array('Les EXIF data i JPEG filer', 'read_exif_data', 1),
    array('Les IPTC data i JPEG filer', 'read_iptc_data', 1), // new in cpg1.2.0nuke
    array('Album folderen <b>*</b>', 'fullpath', 0),
    array('Mappen for brukerbilder <b>*</b>', 'userpics', 0),
    array('Prefikset for mellombilder <b>*</b>', 'normal_pfx', 0),
    array('Prefikset for ikoner <b>*</b>', 'thumb_pfx', 0),
    array('Picinfo vise filenavn', 'picinfo_display_filename',1), // new in cpg1.2.0nuke
    array('Picinfo vise album navn', 'picinfo_display_album_name',1), // new in cpg1.2.0nuke
    array('Picinfo vise filstørrelse', 'picinfo_display_file_size',1), // new in cpg1.2.0nuke
    array('Picinfo vise dimensjoner', 'picinfo_display_dimensions',1), // new in cpg1.2.0nuke
    array('Picinfo vise antall vist', 'picinfo_display_count_displayed',1), // new in cpg1.2.0nuke
    array('Picinfo vise URL', 'picinfo_display_URL',1), // new in cpg1.2.0nuke
    array('Picinfo vise URL som bokmerke-link', 'picinfo_display_URL_bookmark',1), // new in cpg1.2.0nuke
    array('Picinfo vise fav album link', 'picinfo_display_favorites',1), // new in cpg1.2.0nuke
//    'Cookies &amp; Charset settings',
    'Informasjonskapsel og tegnsett innstillinger',
    array('Navn på  informasjonskapsel', 'cookie_name', 0),
    array('Sti til informasjonskapselen', 'cookie_path', 0),
//    'Miscellaneous settings',
    'Andre innstillinger',
    array('Slå på debug modus', 'debug_mode', 1),
    '<br /><div align="center">(*) Felter merket med * må ikke forandres hvis du allerede har bilder i galleriet ditt</div><br />'
    );
// end left side interpretation
