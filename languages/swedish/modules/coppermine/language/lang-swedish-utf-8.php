<?php 
/***************************************************************************  
   Coppermine Photo Gallery 1.3.1 for CPG-Nuke                                
  **************************************************************************  
   Port Copyright (C) 2004 Coppermine/CPG-Nuke Dev Team                        
   http://cpgnuke.com/                                               
  **************************************************************************  
   Copyright (C) 2002,2003  Gr�gory DEMAR <gdemar@wanadoo.fr>                 
   http://coppermine.sf.net/team/                                        
   This program is free software; you can redistribute it and/or modify       
   it under the terms of the GNU General Public License as published by       
   the Free Software Foundation; either version 2 of the License, or          
   (at your option) any later version.                                        
  **************************************************************************  
  Last modification notes:
  $Source: /cvs/languages/swedish/modules/coppermine/language/lang-swedish-utf-8.php,v $
  $Revision: 1.2 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:46 $
****************************************************************************/
global $module_name, $lang_usermgr_php,$lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;  
define('PIC_VIEWS','Views');
define('PIC_VOTES','Votes');
define('PIC_COMMENTS','Comments');

// lang_translation_info
define('LANG_NAME_ENGLISH','Swedish');
define('LANG_NAME_NATIVE','Swedish');
define('LANG_COUNTRY_CODE','se');
define('TRANS_NAME','Mikael Winterkvist');
define('TRANS_EMAIL','mikael@winterkvist.com');
define('TRANS_WEBSITE','http://www.csc.se');
define('TRANS_DATE','2004-06-21');
define('CHARSET','Teckenkodning');
define('TEXT_DIR','ltr');
define('YES','Ja');
define('NO','Nej');
define('BACK','tillbaka till huvudsidan');
define('CONTINU','Finish');
define('INFO','Information');
//define('_ERROR', 'Error'); //already in main lang file
define('ALBUM_DATE_FMT','%B %d, %Y');
define('LASTCOM_DATE_FMT','%m/%d/%y at %H:%M');
define('LASTUP_DATE_FMT','%B %d, %Y');
define('REGISTER_DATE_FMT','%B %d, %Y');
define('LASTHIT_DATE_FMT','%B %d, %Y at %I:%M %p');
define('COMMENT_DATE_FMT','%B %d, %Y at %I:%M %p');

// lang_meta_album_names
define('RANDOM','Slumpmässiga bilder');
define('LASTUP','Senast inlagda');
define('LASTUPBY','Mina senaste bidrag');
define('LASTALB','Senaste uppdaterade album');
define('LASTCOM','Senaste kommentarer');
define('LASTCOMBY','Mina senaste kommentarer');
define('TOPN','Mest visade');
define('TOPRATED','Topplista');
define('LASTHITS','Senast visat');
define('SEARCH','Sök i bildkollektionen');
define('FAVPICS','Favoritbilder');

// lang_errors
define('ACCESS_DENIED','Du har inte rättigheter till den här sidan.');
define('PERM_DENIED','Du har inte tillåtelse att göra den här operationen.');
define('PARAM_MISSING','Skript anropat utan nödvändiga parametrar.');
define('NON_EXIST_AP','Det valda albumet/bilden finns inte !');
define('QUOTA_EXCEEDED','Diskkvot Övertrasserad<br /><br />Du har en diskkvot på [quota]K, din bild är på [space]K, att lägga till den här bilden gör att du övertrasserar diskkvoten.');
define('GD_FILE_TYPE_ERR','Vid användande av GD image library, så är endast JPEG- och PNG-format tillåtna.');
define('INVALID_IMAGE','Bilden du laddade upp är skadad eller kan inte hanteras av GD library');
define('RESIZE_FAILED','Kan inte skapa miniatyrbild eller förändra bildstorleken.');
define('NO_IMG_TO_DISPLAY','Ingen bild att visa');
define('NON_EXIST_CAT','Den valda kategorin finns inte');
define('ORPHAN_CAT','En kategori har en s.k. non-existing parent, kör kategory hanteraren för att rätta till problemet.');
define('DIRECTORY_RO','Biblioteket \'%s\' är inte skrivbart, bilden kan inte raderas');
define('NON_EXIST_COMMENT','Den valda kommentaren finns inte.');
define('PIC_IN_INVALID_ALBUM','Bilden är i ett icke existerande album (%s)!?');
define('BANNED','Du är för tillfället blockerad från den här siten.');
define('NOT_WITH_UDB','Den här funktionen är inaktiverad i Coppermine för att den är integrerad med forumets mjukvara. Vad du än försöker göra så stöds det inte i den här konfigurationen, eller så ska funktionen skötas av forumets mjukvara.');
define('MEMBERS_ONLY','Den här funktionen är bara för medlemmar, vänligen registrera dig.');
define('MUSTBE_GOD','Den här funktionen är bara för administratörer. Du måste vara inloggad som Super användare eller God för att ha tillgång till funktionen.');
define('NO_IMG_TO_APPROVE','No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE','Till albumlistan');
define('ALB_LIST_LNK','Albumlista');
define('MY_GAL_TITLE','Till mitt privata galleri');
define('MY_GAL_LNK','Mitt galleri');
define('MY_PROF_LNK','Min profil');
define('MY_PROF_TITLE','Kontrollera din diskkvot och grupp');
define('ADM_MODE_TITLE','Växla till adminläge');
define('ADM_MODE_LNK','Adminläge');
define('USR_MODE_TITLE','Växla till användarläge');
define('USR_MODE_LNK','Användarläge');
define('UPLOAD_PIC_TITLE','Ladda upp en bild till ett album');
define('UPLOAD_PIC_LNK','Ladda upp bild');
define('REGISTER_TITLE','Skapa ett konto');
define('REGISTER_LNK','Registrera');
define('LOGIN_LNK','Logga in');
define('LOGOUT_LNK','Logga ut');
define('LASTUP_LNK','Senaste uppladdningar');
define('LASTUP_TITLE','Senast uppladdade bilder');
define('TOPN_TITLE','Mest visade bilder');
define('TOPN_LNK','Mest visade');
define('TOPRATED_TITLE','Topprankade bilder');
define('TOPRATED_LNK','Top rated');
define('SEARCH_TITLE','Search Photo Collection');
define('SEARCH_LNK','Sök');
define('FAV_TITLE','My Favorites');
define('FAV_LNK','Mina Favoriter');
define('HELP_TITLE','HELP');

// lang_gallery_admin_menu
define('UPL_APP_LNK','Klara för publicering');
define('CONFIG_LNK','Konfigurera');
define('ALBUMS_LNK','Album');
define('CATEGORIES_LNK','Kategorier');
define('USERS_LNK','Användare');
define('GROUPS_LNK','Grupper');
define('COMMENTS_LNK','Kommentarer');
define('SEARCHNEW_LNK','Lägg till bilder');
define('UTIL_LNK','Ändra storlek på bilden');
define('BAN_LNK','Spärra användare');

// lang_user_admin_menu
define('ALBMGR_LNK','Skapa / sortera mina album');
define('MODIFYALB_LNK','Ändra i mina album');
//define('MY_PROF_LNK', 'My profile');

// lang_cat_list
define('CATEGORY','Kategori');
define('ALBUMS','Album');
//define('PICTURES', 'Pictures');

// lang_album_list
define('ALBUM_ON_PAGE','%d album på %d sida(or)');
// lang_thumb_view
define('DATE','DATUM');
define('NAME','Användarnamn');
define('TITLE','Storleksändra bilder');
define('SORT_DA','Sortera datum stigande');
define('SORT_DD','Sortera datum fallande');
define('SORT_NA','Sortera namn stigande');
define('SORT_ND','Sortera namn fallande');
define('SORT_TA','Sortera titel stigande');
define('SORT_TD','Sortera titel fallande');
define('PIC_ON_PAGE','%d bilder på %d sida(or)');
define('USER_ON_PAGE','%d användare på %d sida(or)');
define('SORT_RA','Sortera med stigande rakning');
define('SORT_RD','Sortera med fallande rankning');
define('THUMB_RATING','RATING');
define('SORT_TITLE','Sortera bilder med:');

// lang_img_nav_bar
define('THUMB_TITLE','Återvänd till miniatyrbildsida');
define('PIC_INFO_TITLE','Visa/dölj bild information');
define('SLIDESHOW_TITLE','Bildspel');
define('SLIDESHOW_DISABLED','E-vykort är avslagna');
define('SLIDESHOW_DISABLED_MSG','Funktionen är endast för medlemmar, vänligen registrera dig.');
define('ECARD_TITLE','Ett e-vykort från %s till dig!');
define('ECARD_DISABLED','e-vykort är inaktiverat');
define('ECARD_DISABLED_MSG','Du har inte rättigheter att skicka e-vykort');
define('PREV_TITLE','Se föregående bild');
define('NEXT_TITLE','Se nästa bild');
define('PIC_POS','BILD %s/%s');
define('NO_MORE_IMAGES','Det finns inga bilder i detta galleri');
define('NO_LESS_IMAGES','Detta är första bilden i galleriet');

// lang_rate_pic
define('RATE_THIS_PIC','Betygsätt den hÃ¤r bilden ');
define('NO_VOTES','(Ingen röst ännu)');
define('RATING','Betyg (%s röster)');
define('RUBBISH','Skräp');
define('POOR','Dålig');
define('FAIR','Godkänd');
define('GOOD','Bra');
define('EXCELLENT','Mycket bra');
define('GREAT','Bäst');

// lang_cpg_die
//define('INFO', 'Information');
//define('ERROR', 'Error');
define('_CRITICAL_ERROR','Critical error');
define('FILE','Fil');
define('LINE','Rad: ');

// lang_display_thumbnails
define('FILENAME','Filnamn');
define('FILESIZE','Filstorlek : ');
define('DIMENSIONS','Dimensioner');
define('DATE_ADDED','Inlagd den : ');

// lang_get_pic_data
define('N_COMMENTS','%s kommentarer');
define('N_VIEWS','%s visade');
define('N_VOTES','(%s röster)');


// lang_albmgr_php
define('ALB_NEED_NAME','Album måste namnges!');
define('CONFIRM_MODIFS','Är du säker på att du vill göra dessa förändringar?');
define('NO_CHANGE','Du gjorde ingen förändring!');
define('NEW_ALBUM','Nytt album');
define('CONFIRM_DELETE1','Är du sÃ¤ker att du vill radera detta album?');
define('CONFIRM_DELETE2','\nAlla bilder och dess kommentarer kommer att förloras!');
define('SELECT_FIRST','Välj ett album först');
define('ALB_MRG','Album Manager');
define('MY_GALLERY','* Mitt galleri *');
define('NO_CATEGORY','* Ingen kategori *');
define('DELETE','Radera bildtitlar eller originalbildstorlek');
define('NEW','Nytt');
define('APPLY_MODIFS','Verkställ förändringar');
define('SELECT_CATEGORY','Välj kategori');

// lang_catmgr_php
define('MISS_PARAM','Parametrar som krävs för \'%s\'operationen stöds inte!');
define('UNKNOWN_CAT','Vald kategory finns inte i databasen');
define('USERGAL_CAT_RO','Kategorin Användargalleri kan inte raderas!');
define('MANAGE_CAT','Inställningar för kategorier');
define('CONFIRM_DELETE_CAT','Are you sure you want to DELETE this category');
//define('CATEGORY', 'Category');
define('OPERATIONS','Funktioner');
define('MOVE_INTO','Flytta till');
define('UPDATE_CREATE','Uppdatera/Skapa kategori');
define('PARENT_CAT','Huvudkategori');
define('CAT_TITLE','Kategorititel');
define('CAT_DESC','Kategoribeskrivning');

// lang_config_php
define('CONFIG_TITLE','Configuration');
define('RESTORE_CFG','Återställ systemets grundinställningar');
define('SAVE_CFG','Spara ny konfiguration');
define('NOTES','Anteckningar');
//define('INFO', 'Information');
define('UPD_SUCCESS','Coppermine konfigurationen uppdaterades');
define('RESTORE_SUCCESS','Coppermines grundinställning återskapades');
define('NAME_A','Namn stigande');
define('NAME_D','Namn fallande');
define('TITLE_A','Titel stigande');
define('TITLE_D','Titel fallande');
define('DATE_A','Datum stigande');
define('DATE_D','Datum fallande');
define('RATING_A','Rankning stigande');
define('RATING_D','Rankning fallande');
define('TH_ANY','Max Aspect');
define('TH_HT','Höjd');
define('TH_WD','Bredd');


// lang_db_input_php
define('EMPTY_NAME_OR_COM','Du måste skriva ditt namn och en kommentar');
define('COM_ADDED','Kommentar inlagd');
define('ALB_NEED_TITLE','Du måste ge albumet en titel!');
define('NO_UDP_NEEDED','Ingen uppdatering behövs.');
define('ALB_UPDATED','Album updaterat');
define('UNKNOWN_ALBUM','Valt album existerar inte eller så har du inte rättigheter att ladda upp i detta album');
define('NO_PIC_UPLOADED','Ingen bild laddades upp!<br /><br />Om du Ã¤r sÃ¤ker pÃ¥ att du valt en bild fÃ¶r uppladdning, kontrollera att servern tillÃ¥ter uppladdning...');
define('ERR_MKDIR','Misslyckades att skapa biblioteket %s !');
define('DEST_DIR_RO','Målbiblioteket %s är inte skrivbart av scriptet!');
define('ERR_MOVE','Omöjligt att flytta %s till %s !');
define('ERR_FSIZE_TOO_LARGE','Bildstorleken du laddat upp är för stor (max tillåtet är %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE','Storleken på filen du laddat upp är för stor (max tillåtet är %s KB) !');
define('ERR_INVALID_IMG','Filen du laddat upp är inte i tillåtet format!');
define('ALLOWED_IMG_TYPES','Du kan bara ladda upp %s bilder.');
define('ERR_INSERT_PIC','Bilden \'%s\' kan inte infogas i albumet ');
//define('INFO', 'Information');
define('ERR_COMMENT_EMPTY','Din kommentar är tom!');
define('ERR_INVALID_FEXT','Endast filer med följande ändelser är tillåtna: <br /><br />%s.');
define('NO_FLOOD','Ledsen men du är redan författare av den senaste kommentaren som är inlagd för den här bilden<br /><br />Ändra den redan inlagda kommentaren om du vill ändra något');
define('REDIRECT_MSG','Du förflyttas.<br /><br /><br /Klicka \'FORTSÄTT\' om inte sidan uppdateras automatiskt');
define('UPL_SUCCESS','Din bild infogades utan problem.');

// lang_delete_php
define('CAPTION','Rubrik');
define('FS_PIC','full storlek på bild');
define('DEL_SUCCESS','Radering lyckades');
define('NS_PIC','normal storlek på bild');
define('ERR_DEL','kan inte raderas');
define('THUMB_PIC','miniatyrbild');
//define('COMMENT', 'comment');
define('IM_IN_ALB','bild i album');
define('ALB_DEL_SUCCESS','Album \'%s\' raderades');
define('ALB_MGR','Album Manager');
define('ERR_INVALID_DATA','Ogiltig data mottogs i \'%s\'');
define('CREATE_ALB','Skapar album \'%s\'');
define('UPDATE_ALB','Uppdaterar album \'%s\' med titeln \'%s\' och index \'%s\'');
define('DEL_PIC','Radera bild');
define('DEL_ALB','Radera album');
define('DEL_USER','Radera användare');
//define('ERR_UNKNOWN_USER', 'The selected user does not exist !');
define('COMMENT_DELETED','Kommentaren raderades utan problem');

// lang_display_image_php
define('PIC_CONFIRM_DEL','Are you sure you want to DELETE this picture ? \nComments will also be deleted.');
define('DEL_THIS_PIC','DELETE THIS PICTURE');
define('SIZE','%s x %s pixlar');
define('VIEWS','%s gÃ¥nger');
define('SLIDESHOW','Bildspel');
define('STOP_SLIDESHOW','STOPPA BILDSPEL');
define('VIEW_FS','Klicka för att se fullstorlek på bilden');
define('EDIT_PIC','ÄNDRA BILDINORMATION');

// lang_picinfo
define('PIC_INF_TITLE','Picture information');
define('PIC_INF_FILENAME','Filename');
define('ALBUM_NAME','Album name');
define('PIC_INFO_RATING','Rating (%s votes)');
define('KEYWORDS','Nyckelord (avskiljda med mellanslag)');
define('PIC_INF_FILE_SIZE','File Size');
define('PIC_INF_DIMENSIONS','Dimensions');
define('DISPLAYED','Visat');
define('CAMERA','Kamera');
define('DATE_TAKEN','Date taken');
define('APERTURE','Slutare');
define('EXPOSURE_TIME','Exposure time');
define('FOCAL_LENGTH','Focal length');
define('COMMENT','Kommentar');
define('ADDFAV','Lägg till Fav');
define('ADDFAVPHRASE','Favoriter');
define('REMFAV','Ta bort från Fav');
define('IPTCTITLE','IPTC Title');
define('IPTCCOPYRIGHT','IPTC Copyright');
define('IPTCKEYWORDS','IPTC Keywords');
define('IPTCCATEGORY','IPTC Category');
define('IPTCSUBCATEGORIES','IPTC Sub Categories');
define('BOOKMARK_PAGE','Bookmark Image');
define('REMOVEFAV','Removed from Favorites Album');
define('ADDEDTOFAV','Added to Favorites Album');

// lang_display_comments
define('OK','OK');
define('COM_EDIT_TITLE','Edit this comment');
define('CONFIRM_DELETE_COM','Are you sure you want to delete this comment ?');
define('ADD_YOUR_COMMENT','Lägg till din kommentar');
define('COM_NAME','Name');
//define('COMMENT', 'Comment');
define('YOUR_NAME','Ditt namn');

// lang_fullsize_popup
define('CLICK_TO_CLOSE','Klicka på bilden för att stänga det här fönstret');

// lang_ecard_php
define('E_TITLE','Send an e-card');
define('INVALID_EMAIL','<b>Varning</b> : felaktig e-postadress !');
define('E_ECARD_TITLE','An e-card from %s for you');
define('VIEW_ECARD','Klicka på den här länken om inte e-vykortet visas riktigt');
define('VIEW_MORE_PICS','Klicka på den här länken för att se fler bilder!');
define('SEND_SUCCESS','Ditt e-vykort skickades');
define('SEND_FAILED','Ledsen men servern kan inte skicka ditt e-vykort...');
define('FROM','Från');
define('_YOUR_NAME','Your name');
define('YOUR_EMAIL','Din e-postadress');
define('TO','Till');
define('RCPT_NAME','Mottagarens namn');
define('RCPT_EMAIL','Mottagarens e-postadress');
define('GREETINGS','Hej!');
define('MESSAGE','Meddelande');
define('ECARD_LINK_CORRUPT','Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser');

// lang_editpics_php
define('PIC_INFO','Bild&nbsp;info');
define('ALBUM','Album');
define('EDIT_TITLE','Redigera denna kommentar');
define('DESC','Beskrivning');
//define('KEYWORDS', 'Keywords');
define('PIC_INFO_STR','%sx%s - %sKB - %s visningar - %s rÃ¶ster');
define('APPROVE','Godkänn bild');
define('POSTPONE_APP','Senarelägg godkännande');
//define('DEL_PIC', 'Delete picture');
define('READ_EXIF','Read EXIF info again');
define('RESET_VIEW_COUNT','Nollställ räknare för bildbesökare');
define('RESET_VOTES','Nollställ röster');
define('DEL_COMM','Radera valda kommentarer');
define('UPL_APPROVAL','Godkännande för uppladdning');
define('EDIT_PICS','REDIGERA BILDER');
define('SEE_NEXT','Se nästa');
define('SEE_PREV','Se föregående');
define('N_PIC','%s bilder');
define('N_OF_PIC_TO_DISP','Antal bilder att visa');
define('APPLY','VerkstÃ¤ll förändringar');

// lang_groupmgr_php
define('GROUP_NAME','Grupp namn');
define('DISK_QUOTA','Diskkvot');
define('CAN_RATE','Besökare kan betygsätta bilder');
define('CAN_SEND_ECARDS','Kan skicka e-vykort');
define('CAN_POST_COM','Kan skriva kommentarer');
define('CAN_UPLOAD','Besökare kan ladda upp bilder');
define('CAN_HAVE_GALLERY','Kan ha ett personligt galleri');
//define('APPLY', 'Apply modifications');
define('CREATE_NEW_GROUP','Skapa ny grupp');
define('DEL_GROUPS','Radera vald grupp(er)');
define('CONFIRM_DEL','Är du säker att du vill RADERA denna användare? \nAlla bilder och album kommer även att raderas för användaren.');
define('GROUP_TITLE','Manage user groups');
define('APPROVAL_1','Pub. Uppl. godkännande (1)');
define('APPROVAL_2','Priv. Uppl. godkännande (2)');
define('NOTE1','<b>(1)</b> Uppladdningar i ett publikt album kräver godkännande från admin');
define('NOTE2','<b>(2)</b> Uppladdningar i ett album som tillhör användare kräver godkännande från admin');
//define('NOTES', 'Notes');

// lang_index_php
define('WELCOME','Välkommen!');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB','Are you sure you want to DELETE this album ? \nAll pictures and comments will also be deleted.');
//define('DELETE', 'DELETE');
define('MODIFY','EGENSKAPER');
//define('EDIT_PICS', 'EDIT PICS');

// lang_list_categories
define('HOME','Hem');
define('STAT1','<b>[pictures]</b> bilder i <b>[albums]</b> album och <b>[cat]</b> kategorier med <b>[comments]</b> kommentarer visade <b>[views]</b> gånger');
define('STAT2','<b>[pictures]</b> bilder i <b>[albums]</b> album visade <b>[views]</b> gÃ¥nger');
define('XX_S_GALLERY','%s\'s Galleri');
define('STAT3','<b>[pictures]</b> bilder i <b>[albums]</b> album med <b>[comments]</b> kommentarer visade <b>[views]</b> gånger');

// lang_list_users
define('USER_LIST','Användarlista');
define('NO_USER_GAL','Det finns inga användargallerier');
define('N_ALBUMS','%s album');
define('N_PICS','%s bild(er)');

// lang_list_albums
define('N_PICTURES','%s bilder');
define('LAST_ADDED',', senaste inlagd den %s');

// lang_modifyalb_php
define('UPD_ALB_N','Uppdatera album %s');
define('GENERAL_SETTINGS','Generella inställningar');
define('ALB_TITLE','Album titel');
define('ALB_CAT','Album kategori');
define('ALB_DESC','Album beskrivning');
define('ALB_THUMB','Album miniatyrbild');
define('ALB_PERM','RÃ¤ttigheter för detta album');
define('CAN_VIEW','Album kan ses av');
define('MOD_CAN_UPLOAD','Visitors can upload pictures');
define('CAN_POST_COMMENTS','Besökare kan kommentera');
define('MOD_CAN_RATE','Visitors can rate pictures');
define('USER_GAL','Användargalleri');
define('NO_CAT','* Ingen kategori *');
define('ALB_EMPTY','Album är tomt');
define('LAST_UPLOADED','Senast uppladdat');
define('PUBLIC_ALB','Alla (publikt album)');
define('ME_ONLY','Endast jag');
define('OWNER_ONLY','Endast albumägare (%s)');
define('GROUPP_ONLY','Medlemmar av gruppen \'%s\'');
define('ERR_NO_ALB_TO_MODIFY','Inget album att redigera i databasen.');
define('UPDATE','Uppdatera miniatyrbilder och/eller storleksförändra bilder');

// lang_rate_pic_php
define('ALREADY_RATED','Ledsen men du har redan betygsatt den här bilden');
define('RATE_OK','Din röst Ã¤r registrerad');

// lang_register_php
define('USERNAME','Användarnamn');
define('GROUP','Grupp');
define('DISK_USAGE','Diskanvändning');
define('X_S_PROFILE','%s\'s profil');

// lang_reviewcom_php
define('REVIEW_TITLE','Review comments');
define('NO_COMMENT','Det finns ingen kommentar att granska');
define('N_COMM_DEL','%s kommentar(er) raderade');
define('N_COMM_DISP','Antal kommentarer att visa');
define('R_SEE_PREV','See previous');
define('R_SEE_NEXT','See next');
define('R_DEL_COMM','Delete selected comments');

// lang_search_php
define('S_SEARCH','Search the image collection');

// lang_search_new_php
define('PAGE_TITLE','Sök efter nya bilder');
define('SELECT_DIR','Välj bibliotek');
define('SELECT_DIR_MSG','Den här funktionen gör det möjligt att lägga till en samling foton som du laddat upp på servern via FTP.<br /><br />Välj biblioteket där bilderna finns.');
define('NO_PIC_TO_ADD','Det finns ingen bild att lägga till');
define('NEED_ONE_ALBUM','Du måste minst ha ett album för att kunna använda denna funktion');
define('WARNING','Varning');
define('CHANGE_PERM','scriptet kan inte skriva i detta bibliotek, du måste ändra rättigheterna i det till 755 eller 777 innan du kan lägga till bilder!');
define('TARGET_ALBUM','<b>Lägg bilderna &quot;</b>%s<b>&quot; i </b>%s');
define('FOLDER','Mapp');
define('IMAGE','Bild');
//define('ALBUM', 'Album');
define('RESULT','Resultar');
define('DIR_RO','Inte skrivbart. ');
define('DIR_CANT_READ','Inte läsbart. ');
define('INSERT','LÃ¤gger till nya bilder i galleriet');
define('LIST_NEW_PIC','Förteckning på nya bilder');
define('INSERT_SELECTED','Sätt in valda bilder');
define('NO_PIC_FOUND','Ingen ny bild hittades');
define('BE_PATIENT','Ha tålamod, scriptet behöver lite tid att bearbeta bilderna');
define('SN_NOTES','<ul><li><b>OK</b> : means that the picture was succesfully added<li><b>DP</b> : means that the picture is a duplicate and is already in the database<li><b>PB</b> : means that the picture could not be added, check your configuration and the permission of directories where the pictures are located<li>If the OK, DP, PB \'signs\' does not appear click on the broken picture to see any error message produced by PHP<li>If your browser timeout, hit the reload button</ul>');
define('SELECT_ALBUM','Välj album');
define('NO_ALBUM','No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('UP_TITLE','Upload picture');
define('MAX_FSIZE','Max filstorlek är %s KB');
//define('ALBUM', 'Album');
define('PICTURE','Bild');
define('PIC_TITLE','Bildtitel');
define('DESCRIPTION','Bildbeskrivning');
define('UP_KEYWORDS','Keywords (separate with spaces)');
define('ERR_NO_ALB_UPLOADABLES','Ledsen, men det finns inget album där du har tillåtelse att ladda upp bilder i');

// lang_usermgr_php
define('U_TITLE','Manage users');
//define('NAME_A', 'Name ascending');
//define('NAME_D', 'Name descending');
define('GROUP_A','Grupp stigande');
define('GROUP_D','Grupp fallande');
define('REG_A','Reg datum stigande');
define('REG_D','Reg datum fallande');
define('PIC_A','Bildräknare stigande');
define('PIC_D','Bildräknare fallande');
define('DISKU_A','Diskanvändande stigande');
define('DISKU_D','Diskanvändande fallande');
define('SORT_BY','Sortera anvÃ¤ndare i');
define('ERR_NO_USERS','Användartabell är tom!');
define('ERR_EDIT_SELF','Du kan inte redigera din egen profil, använd \'Min profil\' länken för det');
define('EDIT','REDIGERA');
//define('DELETE', 'DELETE');
define('U_NAME','User name');
//define('GROUP', 'Group');
define('INACTIVE','Inaktiv');
//define('OPERATIONS', 'Operations');
define('PICTURES','Bilder');
define('DISK_SPACE','Utrymme använt / Kvot');
define('REGISTERED_ON','Registrerad den');
define('U_USER_ON_P_PAGES','%d användare på %d sida(or)');
define('USER_CONFIRM_DEL','Are you sure you want to DELETE this user ? \nAll his pictures and albums will also be deleted.');
define('MAIL','E-POST');
define('ERR_UNKNOWN_USER','Vald användare finns inte!');
define('MODIFY_USER','Spara användare');
//define('NOTES', 'Notes');
define('NOTE_LIST','<li>Om du inte vill ändra nuvarande lösenord, lämna "lösenord" fältet blankt');
define('PASSWORD','Lösenord');
define('USER_ACTIVE_CP','User is active');
define('USER_GROUP_CP','User group');
define('USER_EMAIL','Användar e-post');
define('USER_WEB_SITE','Användarens hemsida');
define('CREATE_NEW_USER','Skapa ny användare');
define('USER_FROM','Användarens plats');
define('USER_INTERESTS','Användarens intressen');
define('USER_OCC','Användarens yrke');

// lang_util_php
define('UTIL_TITLE','Resize pictures');
define('WHAT_IT_DOES','Vad den gör');
define('WHAT_UPDATE_TITLES','Uppdatera titlar från filnamnet');
define('WHAT_DELETE_TITLE','Radera titlar');
define('WHAT_REBUILD','Återuppbygger miniatyrbilder och storleksändrade bilder');
define('WHAT_DELETE_ORIGINALS','Raderar bildstorlek på originalet och ersätter den med den storleksändrade versionen');
define('U_FILE','File');
define('TITLE_SET_TO','titel satt till');
define('SUBMIT_FORM','skicka');
define('UPDATED_SUCCESFULLY','uppdatering lyckades');
define('ERROR_CREATE','FEL vid skapande av');
define('CONTIN','Process more images');
define('MAIN_SUCCESS','Filen %s används nu som huvudbild');
define('ERROR_RENAME','Fel vid namnbyte från %s till %s');
define('ERROR_NOT_FOUND','Filen %s hittades inte');
define('U_BACK','back to main');
define('THUMBS_WAIT','Uppdaterar miniatyrbilder och/eller storleksändrade bilder, v.v. vänta...');
define('THUMBS_CONTINUE_WAIT','Fortsätter att uppdatera miniatyrbilder och/eller storleksförändrade bilder...');
define('TITLES_WAIT','Uppdaterar titlar, v.v. vänta...');
define('DELETE_WAIT','Raderar titlar, v.v. vänta...');
define('REPLACE_WAIT','Raderar original och ersätter dem med storleksförändrade bilder, v.v. vänta..');
define('INSTRUCTION','Snabbinstruktioner');
define('INSTRUCTION_ACTION','Välj funktion');
define('INSTRUCTION_PARAMETER','Sätt parametrar');
define('INSTRUCTION_ALBUM','Välj album');
define('INSTRUCTION_PRESS','Tryck %s');
define('U_UPDATE','Update thumbs and/or resized photos');
define('UPDATE_WHAT','Vad som ska uppdateras');
define('UPDATE_THUMB','Endast miniatyrbilder');
define('UPDATE_PIC','Endast storleksförändrade bilder');
define('UPDATE_BOTH','Både miniatyrbilder och storleksförändrade bilder');
define('UPDATE_NUMBER','Antal bearbetade bilder per klick');
define('UPDATE_OPTION','(Försök att ställa detta alternativ lägre om du får timeout problem)');
define('FILENAME_TITLE','Filnamn &rArr; Bildtitel');
define('FILENAME_HOW','Hur ska filnamnet ändras');
define('FILENAME_REMOVE','Ta bort .jpg ändelsen och ersätt _ (underscore) med mellanslag');
define('FILENAME_EURO','Ändra 2003_11_23_13_20_20.jpg till 23/11/2003 13:20');
define('FILENAME_US','Ändra 2003_11_23_13_20_20.jpg till 11/23/2003 13:20');
define('FILENAME_TIME','Ändra 2003_11_23_13_20_20.jpg till 13:20');
define('UT_DELETE','Delete picture titles or original size photos');
define('DELETE_TITLE','Radera bildtitlar');
define('DELETE_ORIGINAL','Radera originalbildstorlek');
define('DELETE_REPLACE','Raderar orginalbilder och ersätter med storleksförändrade versioner');
//define('SELECT_ALBUM', 'Select album');

// lang_pagetitle_php
define('VIEWING','Tittar på bilder');
define('USR','\'s FotoGalleri');
define('PHOTOGALLERY','FotoGalleri');
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
$lang_day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');
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
    'General settings',
    array('Gallery name', 'gallery_name', 0),
    array('Gallery description', 'gallery_description', 0),
    array('Gallery administrator email', 'gallery_admin_email', 0),
    array('Address to nuke folder ie http://www.mysite.tld/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
//    array('Language', 'lang', 5),
// for postnuke change
    array('Theme', 'theme', 6),
    array('Page Specific Titles instead of >Coppermine', 'nice_titles', 1),
    'Album list view',
    array('Width of the main table (pixels or %)', 'main_table_width', 0),
    array('Number of levels of sub-categories to display', 'subcat_level', 0),
    array('Number of albums to display', 'albums_per_page', 0),
    array('Number of columns for the album list', 'album_list_cols', 0),
    array('Size of thumbnails in pixels', 'alb_list_thumb_size', 0),
    array('The content of the main page', 'main_page_layout', 0),
    array('Show first level album thumbnails in categories', 'first_level', 1), 
    'Thumbnail view',
    array('Number of columns on thumbnail page', 'thumbcols', 0),
    array('Number of rows on thumbnail page', 'thumbrows', 0),
    array('Maximum number of tabs to display', 'max_tabs', 0),
    array('Display picture caption (in addition to title) below the thumbnail', 'caption_in_thumbview', 1),
    array('Display number of comments below the thumbnail', 'display_comment_count', 1),
    array('Default sort order for pictures', 'default_sort_order', 3),
    array('Minimum number of votes for a picture to appear in the \'top-rated\' list', 'min_votes_for_rating', 0),
    array('Alts and title tags of thumbnail show title and keyword instead of picinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
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
    'Pictures and thumbnails settings',
    array('Quality for JPEG files', 'jpeg_qual', 0),
    array('Max dimension of a thumbnail <b>*</b>', 'thumb_width', 0),
    array('Use dimension ( width or height or Max aspect for thumbnail )<b>*</b>', 'thumb_use', 7),
    array('Create intermediate pictures', 'make_intermediate', 1),
    array('Max width or height of an intermediate picture <b>*</b>', 'picture_width', 0),
    array('Max size for uploaded pictures (KB)', 'max_upl_size', 0),
    array('Max width or height for uploaded pictures (pixels)', 'max_upl_width_height', 0), 
    array('Allow multiple Files to be upload with same file name', 'samename', 1), 
    'User settings',
    array('Allow new user registrations', 'allow_user_registration', 1),
    /*array('User registration requires email verification', 'reg_requires_valid_email', 1),
    array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),*/
    array('Users can can have private albums', 'allow_private_albums', 1),
    array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
    'Custom fields for image description (leave blank if unused)',
    array('Field 1 name', 'user_field1_name', 0),
    array('Field 2 name', 'user_field2_name', 0),
    array('Field 3 name', 'user_field3_name', 0),
    array('Field 4 name', 'user_field4_name', 0), 
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
    array('Default mode for directories', 'default_dir_mode', 0),
    array('Default mode for pictures', 'default_file_mode', 0),
    array('Picinfo display filename', 'picinfo_display_filename', '1'), // new in cpg1.2.0nuke
    array('Picinfo display album name', 'picinfo_display_album_name', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_file_size', 'picinfo_display_file_size', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_dimensions', 'picinfo_display_dimensions', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_count_displayed', 'picinfo_display_count_displayed', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_URL', 'picinfo_display_URL', '1'), // new in cpg1.2.0nuke
    array('Picinfo display URL as bookmark link', 'picinfo_display_URL_bookmark', '1'), // new in cpg1.2.0nuke
    array('Picinfo display fav album link', 'picinfo_display_favorites', '1'), // new in cpg1.2.0nuke
    'Cookies &amp; Charset settings',
    array('Name of the cookie used by the script', 'cookie_name', 0),
    array('Path of the cookie used by the script', 'cookie_path', 0),
//    array('Character encoding', 'charset', 4), 
    'Miscellaneous settings',
    array('Enable debug mode', 'debug_mode', 1),
    array('Enable advanced debug mode', 'advanced_debug_mode', 1), // new in cpg1.2.0nuke
    array('Show Coppermine Update Alert to Admin', 'showupdate', 1), // new 1.2.2

    '<br /><div align="center">(*) Fields marked with * must not be changed if you already have pictures in your gallery</div><br />'
    );
// end left side interpretation
?>
