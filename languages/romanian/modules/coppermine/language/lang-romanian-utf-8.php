<?php 
/***************************************************************************  
   Coppermine Photo Gallery 1.3.1 for CPG-Nuke                                
  **************************************************************************  
   Port Copyright (C) 2004 Coppermine/CPG-Nuke Dev Team                        
   http://cpgnuke.com/                                               
  **************************************************************************  
   Copyright (C) 2002,2003  Grégory DEMAR <gdemar@wanadoo.fr>                 
   http://coppermine.sf.net/team/                                        
   This program is free software; you can redistribute it and/or modify       
   it under the terms of the GNU General Public License as published by       
   the Free Software Foundation; either version 2 of the License, or          
   (at your option) any later version.                                        
  **************************************************************************  
  Last modification notes:
  $Source: /cvs/languages/romanian/modules/coppermine/language/lang-romanian-utf-8.php,v $
  $Revision: 1.4 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:41 $
****************************************************************************/
global $module_name, $lang_usermgr_php,$lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;  
define('PIC_VIEWS','Views');
define('PIC_VOTES','Votes');
define('PIC_COMMENTS','Comments');

// lang_translation_info
define('LANG_NAME_ENGLISH','Romanian');
define('LANG_NAME_NATIVE','romana');
define('LANG_COUNTRY_CODE','ro');
define('TRANS_NAME','Rancov Nicole');
define('TRANS_EMAIL','aikon@dap.ro');
define('TRANS_WEBSITE','http://www.aikon.dap.ro/');
define('TRANS_DATE','2004-08-01');
define('CHARSET','UTF-8');
define('TEXT_DIR','ltr');
define('YES','Da');
define('NO','Nu');
define('BACK','inapoi la principal');
define('CONTINU','Finish');
define('INFO','Informatii');
//define('_ERROR', 'Error'); //already in main lang file
define('ALBUM_DATE_FMT','%B %d, %Y');
define('LASTCOM_DATE_FMT','%m/%d/%y @ %H:%M');
define('LASTUP_DATE_FMT','%B %d, %Y');
define('REGISTER_DATE_FMT','%B %d, %Y');
define('LASTHIT_DATE_FMT','%B %d, %Y @ %I:%M %p');
define('COMMENT_DATE_FMT','%B %d, %Y @ %I:%M %p');

// lang_meta_album_names
define('RANDOM','Imagini aleatoare');
define('LASTUP','Ultimele adaugate');
define('LASTUPBY','Ultimele adaugate de mine');
define('LASTALB','Last updated albums');
define('LASTCOM','Ultimele comentarii');
define('LASTCOMBY','My Last comments');
define('TOPN','Cele mai afisate');
define('TOPRATED','Cele mai apreciate');
define('LASTHITS','Ultimele afisate');
define('SEARCH','Cautati in colectia de imagini');
define('FAVPICS','Imagini favorite');

// lang_errors
define('ACCESS_DENIED','Nu aveti dreptul sa accesati aceasta pagina.');
define('PERM_DENIED','Nu aveti dreptul sa efectuati aceasta operatie');
define('PARAM_MISSING','Scriptul a fost rulat fara parametrul - parametrii necesari.');
define('NON_EXIST_AP','Albumul/imaginea selectata nu exista !');
define('QUOTA_EXCEEDED','Cota Dvs. a fost depasita<br/><br/>Aveti o cota pe disk de [quota]kB, pozele Dvs. ocupa acum [space]kB, adaugand aceasta imagine veti depasi aceasta cota.');
define('GD_FILE_TYPE_ERR','Cand folositi biblioteca GD tipurile de fisiere ce le puteti utiliza sunt JPEG si PNG.');
define('INVALID_IMAGE','Imaginea inregistrata de Dvs. este corupta sau nu poate fi prelucrata de biblioteca GD');
define('RESIZE_FAILED','Nu s-a putut crea pictograma sau imaginea redusa.');
define('NO_IMG_TO_DISPLAY','Nici o imagine de afisat');
define('NON_EXIST_CAT','Categoria selectata nu exista');
define('ORPHAN_CAT','O categorie are parinte inexistent, accesati managerul de categorii pentru a corecta problema.');
define('DIRECTORY_RO','Directorul \'%s\' nu poate fi scris, imaginile nu pot fi sterse');
define('NON_EXIST_COMMENT','Comentariul selectat nu exista.');
define('PIC_IN_INVALID_ALBUM','Imaginea este intr-un album inexistent (%s)!?');
define('BANNED','Momentan sunteti exclus de pe aceast sit.');
define('NOT_WITH_UDB','Aceasta functie este blocata in Coppermine deoarece este integrata cu programul ce ruleaza forumul. Ce incercati sa faceti ori nu este suportat in aceasta configuratie, ori functia trebuie executata de programul ce ruleaza forumul.');
define('MEMBERS_ONLY','Aceasta functie este numai pentru membrii, va rugam inscrieti-va/logati-va.');
define('MUSTBE_GOD','Aceasta functie este numai pentru administratorul sitului. Trebuie sa fiti logat ca si superadmin sau god pentru a accesa aceasta functie');
define('NO_IMG_TO_APPROVE','No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE','Lista albumelor');
define('ALB_LIST_LNK','Lista albumelor');
define('MY_GAL_TITLE','Galeria mea personala');
define('MY_GAL_LNK','Galeria mea');
define('MY_PROF_LNK','Profilul meu');
define('MY_PROF_TITLE','Verificati cota de disk de Dvs. si grupurile');
define('ADM_MODE_TITLE','Schimbati in modul administrator');
define('ADM_MODE_LNK','Mod administrator');
define('USR_MODE_TITLE','Schimbati in modul utilizator');
define('USR_MODE_LNK','Mod utilizator');
define('UPLOAD_PIC_TITLE','Incarcati o imagine intr-un album');
define('UPLOAD_PIC_LNK','Incarcati o imagine');
define('REGISTER_TITLE','Creati un cont');
define('REGISTER_LNK','Inregistrare');
define('LOGIN_LNK','Login');
define('LOGOUT_LNK','Logout');
define('LASTUP_LNK','Ultimele imagini incarcate');
define('LASTUP_TITLE','Imaginile incarcate recent');
define('TOPN_TITLE','Imagini care au fost cele mai afisate');
define('TOPN_LNK','Cele mai vizitate');
define('TOPRATED_TITLE','Cele mai apreciate imagini');
define('TOPRATED_LNK','Top rated');
define('SEARCH_TITLE','Cautare in colectia foto');
define('SEARCH_LNK','Cautare');
define('FAV_TITLE','Favoriele mele');
define('FAV_LNK','Favoritele mele');
define('HELP_TITLE','HELP');

// lang_gallery_admin_menu
define('UPL_APP_LNK','Aprobare incarcare');
define('CONFIG_LNK','Configurare');
define('ALBUMS_LNK','Albume');
define('CATEGORIES_LNK','Categorii');
define('USERS_LNK','Utilizatori');
define('GROUPS_LNK','Grupuri');
define('COMMENTS_LNK','Revedeti comentariile');
define('SEARCHNEW_LNK','Adaugati imagini in modul Batch');
define('UTIL_LNK','Redimensionati imaginile');
define('BAN_LNK','Blocare utilizatori');

// lang_user_admin_menu
define('ALBMGR_LNK','Creati / ordonati albumele mele');
define('MODIFYALB_LNK','Modificati albumele mele');
//define('MY_PROF_LNK', 'My profile');

// lang_cat_list
define('CATEGORY','Categorie');
define('ALBUMS','Albume');
//define('PICTURES', 'Pictures');

// lang_album_list
define('ALBUM_ON_PAGE','%d albume pe %d pagini');
// lang_thumb_view
define('DATE','DATA');
define('NAME','Nume utilizator');
define('TITLE','Redimensionati imaginea');
define('SORT_DA','Sortare dupa data, ascendent');
define('SORT_DD','Sortare dupa data, descendent');
define('SORT_NA','Sortare dupa nume, ascendent');
define('SORT_ND','Sortare dupa nume, ascendent');
define('SORT_TA','Sortare dupa titlu, ascendent');
define('SORT_TD','Sortare dupa titlu, ascendent');
define('PIC_ON_PAGE','%d imagini pe %d pagini');
define('USER_ON_PAGE','%d utilizatori pe %d pagini');
define('SORT_RA','Sortare dupa clasificare ascendent');
define('SORT_RD','Sortare dupa clasificare descendent');
define('THUMB_RATING','RATING');
define('SORT_TITLE','Sortati imaginile dupa:');

// lang_img_nav_bar
define('THUMB_TITLE','Inapoi la pagina cu pictograme');
define('PIC_INFO_TITLE','Afisare/Ascundere informatii despre imagine');
define('SLIDESHOW_TITLE','Diaporama');
define('SLIDESHOW_DISABLED','Modul vederi eletronice este dezactivat');
define('SLIDESHOW_DISABLED_MSG','Aceasta functie este numai pentru memrii, va rugam inregistrati-va/logati-va.');
define('ECARD_TITLE','O vedere electronica de la %s pentru dvs.');
define('ECARD_DISABLED','Vederile electronice sunt dezactivate');
define('ECARD_DISABLED_MSG','Nu aveti permisiune sa trimiteti vederi electronice');
define('PREV_TITLE','Vizualizati imaginea precedenta');
define('NEXT_TITLE','Vizualizati imaginea urmatoare');
define('PIC_POS','IMAGINEA %s/%s');
define('NO_MORE_IMAGES','Nu mai exista imagini in aceasta galerie');
define('NO_LESS_IMAGES','Aceasta este prima imagine din galerie');

// lang_rate_pic
define('RATE_THIS_PIC','Apreciati aceasta imagine ');
define('NO_VOTES','(Nici un vot inca)');
define('RATING','Apreciere (%s voturi)');
define('RUBBISH','Nereusita');
define('POOR','Slaba');
define('FAIR','Acceptabila');
define('GOOD','Buna');
define('EXCELLENT','Excelenta');
define('GREAT','Nemaipomenita');

// lang_cpg_die
//define('INFO', 'Information');
//define('ERROR', 'Error');
define('_CRITICAL_ERROR','Critical error');
define('FILE','Fisier');
define('LINE','Linia: ');

// lang_display_thumbnails
define('FILENAME','Nume fisier');
define('FILESIZE','Marimea fiserului : ');
define('DIMENSIONS','Dimensiune imagine');
define('DATE_ADDED','Data adaugarii : ');

// lang_get_pic_data
define('N_COMMENTS','%s comentarii');
define('N_VIEWS','%s afisari');
define('N_VOTES','(%s voturi)');


// lang_albmgr_php
define('ALB_NEED_NAME','Albumele trebuie sa aiba un nume !');
define('CONFIRM_MODIFS','Sunteti sigur ca vreti sa faceti aceste modificari ?');
define('NO_CHANGE','Nu ati facut nici o modificare !');
define('NEW_ALBUM','Album nou');
define('CONFIRM_DELETE1','Sunteti sigur ca vreti sa stergeti acest album?');
define('CONFIRM_DELETE2','\nToate imaginile si comentariile continute vor fi pierdute !');
define('SELECT_FIRST','Selectati un album inainte');
define('ALB_MRG','Managerul de albume');
define('MY_GALLERY','* Galeria mea *');
define('NO_CATEGORY','* Nici o categorie *');
define('DELETE','Stergeti titlurile sau imaginile originale');
define('NEW','Nou');
define('APPLY_MODIFS','Efectuati modificarile');
define('SELECT_CATEGORY','Selectati o categorie');

// lang_catmgr_php
define('MISS_PARAM','Parametrii necesari pentru operatia \'%s\' nu au fost stabiliti !');
define('UNKNOWN_CAT','Categoria selectata nu exista in baza de date');
define('USERGAL_CAT_RO','Categoria Galeria utilizatorului nu poate fi stearsa!');
define('MANAGE_CAT','Administrati categoriile');
define('CONFIRM_DELETE_CAT','Are you sure you want to DELETE this category');
//define('CATEGORY', 'Category');
define('OPERATIONS','Operatii');
define('MOVE_INTO','Mutati in');
define('UPDATE_CREATE','Modificati/Creati o categorie');
define('PARENT_CAT','Categoria parinte');
define('CAT_TITLE','Titlul categoriei');
define('CAT_DESC','Descrierea categoriei');

// lang_config_php
define('CONFIG_TITLE','Configuration');
define('RESTORE_CFG','Reveniti la setarile implicite');
define('SAVE_CFG','Salvati noua configuratie');
define('NOTES','Notite');
//define('INFO', 'Information');
define('UPD_SUCCESS','Configuratia Coppermine a fost modificata');
define('RESTORE_SUCCESS','Configuratia Coppermine implicita a fost restabilita');
define('NAME_A','Nume ascendent');
define('NAME_D','Nume descendent');
define('TITLE_A','Titlu ascendent');
define('TITLE_D','Titlu descendent');
define('DATE_A','Data ascendenta');
define('DATE_D','Data descendenta');
define('RATING_A','Clasificare ascendenta');
define('RATING_D','Clasificare descendenta');
define('TH_ANY','Max Aspect');
define('TH_HT','Inaltime');
define('TH_WD','Latime');


// lang_db_input_php
define('EMPTY_NAME_OR_COM','Trebuie sa introduceti numele dvs. si un comentariu');
define('COM_ADDED','Comentariu adaugat');
define('ALB_NEED_TITLE','Trebuie sa furnizati un titlu pentru album !');
define('NO_UDP_NEEDED','Nu este necesara nici o modificare.');
define('ALB_UPDATED','Album modificat');
define('UNKNOWN_ALBUM','Albumul selectat nu exista sau nu aveti permisiunea sa incarcati in acest album');
define('NO_PIC_UPLOADED','Nici o imagine nu a fost incarcata !<br /><br />Daca intradevar ati selectat o imagine, verificati daca serverul permite uploaduri...');
define('ERR_MKDIR','Eroare la crearea directorului %s !');
define('DEST_DIR_RO','Directorul destinatie %s nu poate fi scris de catre script !');
define('ERR_MOVE','Imposibil de mutat %s in %s !');
define('ERR_FSIZE_TOO_LARGE','Dimensiunea imaginii este prea mare (maximul permis este %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE','Marimea fisierului incarcat este prea mare (maximul permis este %s kB) !');
define('ERR_INVALID_IMG','Fiserul incarcat nu este o imagine valida !');
define('ALLOWED_IMG_TYPES','Puteti incarca doar %s imagini.');
define('ERR_INSERT_PIC','Imaginea \'%s\' nu poate fi inserata in album ');
//define('INFO', 'Information');
define('ERR_COMMENT_EMPTY','Cometariul dvs. este gol !');
define('ERR_INVALID_FEXT','Doar fisierele cu urmatoarele extensii sunt permise : <br /><br />%s.');
define('NO_FLOOD','Ne pare rau dar sunteti deja autorul ultimului comentariu postat pentru aceasta imagine<br /><br />Editati comentariul postat daca doriti sa-l modificati');
define('REDIRECT_MSG','Sunteti redirectionat.<br /><br /><br />Click pe \'CONTINUARE\' daca pagina nu se incarca automat');
define('UPL_SUCCESS','Imaginea dvs. a fost adaugata cu succes');

// lang_delete_php
define('CAPTION','Descriere');
define('FS_PIC','imaginea la dimensiuni maxime');
define('DEL_SUCCESS','stearsa cu succes');
define('NS_PIC','imaginea de dimensiuni normale');
define('ERR_DEL','nu poate fi stearsa');
define('THUMB_PIC','pictograma');
//define('COMMENT', 'comment');
define('IM_IN_ALB','imaginea in album');
define('ALB_DEL_SUCCESS','Albumul \'%s\' a fost sters');
define('ALB_MGR','Managerul de albume');
define('ERR_INVALID_DATA','Date incorecte primite in \'%s\'');
define('CREATE_ALB','Creare album \'%s\'');
define('UPDATE_ALB','Modificare album \'%s\' cu titlul \'%s\' si indexul \'%s\'');
define('DEL_PIC','Stergeti imaginea');
define('DEL_ALB','Stergeti albumul');
define('DEL_USER','Stergeti utilizatorul');
//define('ERR_UNKNOWN_USER', 'The selected user does not exist !');
define('COMMENT_DELETED','Comentariul a fost sters cu succes');

// lang_display_image_php
define('PIC_CONFIRM_DEL','Are you sure you want to DELETE this picture ? \nComments will also be deleted.');
define('DEL_THIS_PIC','DELETE THIS PICTURE');
define('SIZE','%s x %s pixeli');
define('VIEWS','%s ori');
define('SLIDESHOW','Diaporama');
define('STOP_SLIDESHOW','OPRITI DIAPORAMA');
define('VIEW_FS','Click pentru a vedea imaginea la dimensiuni originale');
define('EDIT_PIC','EDITATI INFORMATIILE IMAGINII');

// lang_picinfo
define('PIC_INF_TITLE','Picture information');
define('PIC_INF_FILENAME','Filename');
define('ALBUM_NAME','Album name');
define('PIC_INFO_RATING','Rating (%s votes)');
define('KEYWORDS','Cuvinte cheie (separate cu spatii)');
define('PIC_INF_FILE_SIZE','File Size');
define('PIC_INF_DIMENSIONS','Dimensions');
define('DISPLAYED','Afisata');
define('CAMERA','Camera');
define('DATE_TAKEN','Date taken');
define('APERTURE','Apertura');
define('EXPOSURE_TIME','Exposure time');
define('FOCAL_LENGTH','Focal length');
define('COMMENT','Comentariu');
define('ADDFAV','Adaugati in Favorite');
define('ADDFAVPHRASE','Favorite');
define('REMFAV','Stergeti din Favorite');
define('IPTCTITLE','Titlul IPTC');
define('IPTCCOPYRIGHT','IPTC Copyright');
define('IPTCKEYWORDS','cuvinte cheie in IPTC');
define('IPTCCATEGORY','categorii IPTC');
define('IPTCSUBCATEGORIES','sub-categorii IPTC');
define('BOOKMARK_PAGE','Retineti imaginea');
define('REMOVEFAV','Removed from Favorites Album');
define('ADDEDTOFAV','Added to Favorites Album');

// lang_display_comments
define('OK','OK');
define('COM_EDIT_TITLE','Edit this comment');
define('CONFIRM_DELETE_COM','Are you sure you want to delete this comment ?');
define('ADD_YOUR_COMMENT','Adaugati comentariul dvs.');
define('COM_NAME','Name');
//define('COMMENT', 'Comment');
define('YOUR_NAME','Numele dvs.');

// lang_fullsize_popup
define('CLICK_TO_CLOSE','Click pe imagine pentru a inchide fereastra');

// lang_ecard_php
define('E_TITLE','Send an e-card');
define('INVALID_EMAIL','<b>Atentie</b> : adresa de e-mail este incorecta !');
define('E_ECARD_TITLE','An e-card from %s for you');
define('VIEW_ECARD','Daca vederea nu este afisata corect dati click pe acest link');
define('VIEW_MORE_PICS','Click aici pentru a vedea mai multe imagini!');
define('SEND_SUCCESS','Vederea dvs. a fost trimisa');
define('SEND_FAILED','Ne pare rau dar serverul nu poate trimite vederea dvs...');
define('FROM','De la');
define('_YOUR_NAME','Your name');
define('YOUR_EMAIL','Adresa dvs. e-mail');
define('TO','Catre');
define('RCPT_NAME','Numele adresantului');
define('RCPT_EMAIL','Adresa e-mail destinatie');
define('GREETINGS','Buna ziua');
define('MESSAGE','Mesaj');
define('ECARD_LINK_CORRUPT','Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser');

// lang_editpics_php
define('PIC_INFO','Informatii&nbsp;imagine');
define('ALBUM','Album');
define('EDIT_TITLE','Editatiacest comentariu');
define('DESC','Descriere');
//define('KEYWORDS', 'Keywords');
define('PIC_INFO_STR','%sx%s - %sKB - %s afisari - %s voturi');
define('APPROVE','Aprobati imaginea');
define('POSTPONE_APP','Amanati aprobarea');
//define('DEL_PIC', 'Delete picture');
define('READ_EXIF','Cititi din nou informatiile EXIF');
define('RESET_VIEW_COUNT','Resetati contorul afisarilor');
define('RESET_VOTES','Resetati contorul voturilor');
define('DEL_COMM','Stergeti comentariile selectate');
define('UPL_APPROVAL','Aprobare incarcare');
define('EDIT_PICS','EDITARE IMAGINI');
define('SEE_NEXT','Afisati urmatorul');
define('SEE_PREV','Afisati anteriorul');
define('N_PIC','%s imagini');
define('N_OF_PIC_TO_DISP','Numarul de imagini de afisat');
define('APPLY','Executati modificarile');

// lang_groupmgr_php
define('GROUP_NAME','Numele grupului');
define('DISK_QUOTA','Cota pe disc');
define('CAN_RATE','Vizitatorii pot aprecia imaginile');
define('CAN_SEND_ECARDS','Poate trimite vederi');
define('CAN_POST_COM','Poate trimite comentarii');
define('CAN_UPLOAD','Vizitatorii pot incarca imagini');
define('CAN_HAVE_GALLERY','Poate avea o galerie personala');
//define('APPLY', 'Apply modifications');
define('CREATE_NEW_GROUP','Creati un grup nou');
define('DEL_GROUPS','Stergeti grupul/grupurile selectat(e)');
define('CONFIRM_DEL','Sunteti sigur ca doriti sa STERGETI acest utilizator ? \nToate imaginile si albumele sale vor fi de asemenea sterse');
define('GROUP_TITLE','Manage user groups');
define('APPROVAL_1','Aprobare Inreg. Pub. (1)');
define('APPROVAL_2','Aprobare Inreg. Priv. (2)');
define('NOTE1','<b>(1)</b> Incarcarea intr-un album public necesita aprobarea administratorului');
define('NOTE2','<b>(2)</b> Incarcarea intr-un album apartinand utilizatorului necesita aprobarea administratorului');
//define('NOTES', 'Notes');

// lang_index_php
define('WELCOME','Bine ati venit !');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB','Are you sure you want to DELETE this album ? \nAll pictures and comments will also be deleted.');
//define('DELETE', 'DELETE');
define('MODIFY','PROPRIETATI');
//define('EDIT_PICS', 'EDIT PICS');

// lang_list_categories
define('HOME','Pagina principala');
define('STAT1','<b>[pictures]</b> imagini in <b>[albums]</b> albume si <b>[cat]</b> categorii cu <b>[comments]</b> comentarii afisate de <b>[views]</b> ori');
define('STAT2','<b>[pictures]</b> imagini in <b>[albums]</b> albume afisate de <b>[views]</b> ori');
define('XX_S_GALLERY','%s\'s Galerie');
define('STAT3','<b>[pictures]</b> imagini in <b>[albums]</b> albume cu <b>[comments]</b> comentarii afisate de <b>[views]</b> ori');

// lang_list_users
define('USER_LIST','Lista utilizatorilor');
define('NO_USER_GAL','Nu exista galerii ale utilizatorilor');
define('N_ALBUMS','%s album(e)');
define('N_PICS','%s imagini');

// lang_list_albums
define('N_PICTURES','%s imagini');
define('LAST_ADDED',', ultima adaugata la %s');

// lang_modifyalb_php
define('UPD_ALB_N','Modificati album %s');
define('GENERAL_SETTINGS','Setari generale');
define('ALB_TITLE','Titlu album');
define('ALB_CAT','Categoria albumului');
define('ALB_DESC','Descrierea albumului');
define('ALB_THUMB','Pictograma albumului');
define('ALB_PERM','Permisiile acestui album');
define('CAN_VIEW','Albumul poate fi vazut de');
define('MOD_CAN_UPLOAD','Visitors can upload pictures');
define('CAN_POST_COMMENTS','Vizitatorii pot posta comentarii');
define('MOD_CAN_RATE','Visitors can rate pictures');
define('USER_GAL','Galeria utilizatorului');
define('NO_CAT','* Nici o categorie *');
define('ALB_EMPTY','Albumul este gol');
define('LAST_UPLOADED','Ultimile incarcate');
define('PUBLIC_ALB','Toata lumea (album public)');
define('ME_ONLY','Doar eu');
define('OWNER_ONLY','Doar proprietarul albumului (%s)');
define('GROUPP_ONLY','Membrii grupului \'%s\'');
define('ERR_NO_ALB_TO_MODIFY','Nu exista nici un album pe care sa-l puteti modifica in baza de date.');
define('UPDATE','Modificati pictograme si/sau imagini intermediare');

// lang_rate_pic_php
define('ALREADY_RATED','Ne pare rau dar ati votat deja aceasta imagine');
define('RATE_OK','Votul dvs. ');

// lang_register_php
define('USERNAME','Utilizator');
define('GROUP','Grup');
define('DISK_USAGE','Utilizare disc');
define('X_S_PROFILE','Profilul lui %s');

// lang_reviewcom_php
define('REVIEW_TITLE','Review comments');
define('NO_COMMENT','Nu exista comentarii care sa fie revizuite');
define('N_COMM_DEL','%s comentarii sterse');
define('N_COMM_DISP','Numarul de comentarii de afisat');
define('R_SEE_PREV','See previous');
define('R_SEE_NEXT','See next');
define('R_DEL_COMM','Delete selected comments');

// lang_search_php
define('S_SEARCH','Search the image collection');

// lang_search_new_php
define('PAGE_TITLE','Cautati imagini noi');
define('SELECT_DIR','Selectati directorul');
define('SELECT_DIR_MSG','Aceasta functie va permite sa adaugati mai multe imagini o data, imagini incarcate de Dvs. pe server prin FTP.<br /><br />Selectati directorul unde ati incarcat imaginile');
define('NO_PIC_TO_ADD','Nu exista nici o imagine de adaugat');
define('NEED_ONE_ALBUM','Aveti nevoie de cel putin un album pentru a folosi aceasta functie');
define('WARNING','Atentie');
define('CHANGE_PERM','scriptul nu poate scrie in acest director, trebuie sa schimbati modul la 755 sau 777 inainte de a incerca sa adaugati imaginile !');
define('TARGET_ALBUM','<b>Puneti imaginile din &quot;</b>%s<b>&quot; in </b>%s');
define('FOLDER','Director');
define('IMAGE','Imagine');
//define('ALBUM', 'Album');
define('RESULT','Rezultat');
define('DIR_RO','Nu poate fi scris. ');
define('DIR_CANT_READ','Nu poate fi citit. ');
define('INSERT','Adaugati imagini noi in galerie');
define('LIST_NEW_PIC','Lista noilor imagini');
define('INSERT_SELECTED','Inserati imaginile selectate');
define('NO_PIC_FOUND','Nu a fost gasita nici o imagine noua');
define('BE_PATIENT','Va rugam asteptati, scriptul necesita timp pentru a procesa imaginile');
define('SN_NOTES','<ul><li><b>OK</b> : means that the picture was succesfully added<li><b>DP</b> : means that the picture is a duplicate and is already in the database<li><b>PB</b> : means that the picture could not be added, check your configuration and the permission of directories where the pictures are located<li>If the OK, DP, PB \'signs\' does not appear click on the broken picture to see any error message produced by PHP<li>If your browser timeout, hit the reload button</ul>');
define('SELECT_ALBUM','Selectati albumul');
define('NO_ALBUM','Nu a fost selectat nici un album, intoarceti-va si selectati un album unde sa puneti imaginile Dvs.');

// lang_upload_php
define('UP_TITLE','Upload picture');
define('MAX_FSIZE','Dimensiunea maxima a fisierului este %s kB');
//define('ALBUM', 'Album');
define('PICTURE','Imagine');
define('PIC_TITLE','Titlul imaginii');
define('DESCRIPTION','Descrierea imaginii');
define('UP_KEYWORDS','Keywords (separate with spaces)');
define('ERR_NO_ALB_UPLOADABLES','Ne pare rau, dar nu exista nici un album unde puteti incarca imagini');

// lang_usermgr_php
define('U_TITLE','Manage users');
//define('NAME_A', 'Name ascending');
//define('NAME_D', 'Name descending');
define('GROUP_A','Grup ascendent');
define('GROUP_D','Grup descendent');
define('REG_A','Data inregistrarii ascendent');
define('REG_D','Data inregistrarii descendent');
define('PIC_A','Numar imagini ascendent');
define('PIC_D','Numar imagini descendent');
define('DISKU_A','Utilizare spatiu ascendent');
define('DISKU_D','Utilizare spatiu descendent');
define('SORT_BY','Sorteaza utilizatorii dupa');
define('ERR_NO_USERS','Tabelul cu utilizatori este gol !');
define('ERR_EDIT_SELF','Nu puteti edita propriul profil. Folositi optiunea \'Profilul meu\' pentru aceasta');
define('EDIT','EDITATI');
//define('DELETE', 'DELETE');
define('U_NAME','User name');
//define('GROUP', 'Group');
define('INACTIVE','Inactiv');
//define('OPERATIONS', 'Operations');
define('PICTURES','Imagini');
define('DISK_SPACE','Spatiu utilizat / Cota');
define('REGISTERED_ON','Inregistrat la');
define('U_USER_ON_P_PAGES','%d utilizatori pe %d pagini');
define('USER_CONFIRM_DEL','Are you sure you want to DELETE this user ? \nAll his pictures and albums will also be deleted.');
define('MAIL','POSTA');
define('ERR_UNKNOWN_USER','Utilizatorul selectat nu exista !');
define('MODIFY_USER','Modificati utilizatorul');
//define('NOTES', 'Notes');
define('NOTE_LIST','<li>Daca nu doriti sa schimbati parola, lasati campurile "Parola" libere');
define('PASSWORD','Parola');
define('USER_ACTIVE_CP','User is active');
define('USER_GROUP_CP','User group');
define('USER_EMAIL','E-mail');
define('USER_WEB_SITE','Pagina web');
define('CREATE_NEW_USER','Creati utilizator nou');
define('USER_FROM','Locatie');
define('USER_INTERESTS','Domenii de interes');
define('USER_OCC','Ocupatie');

// lang_util_php
define('UTIL_TITLE','Resize pictures');
define('WHAT_IT_DOES','Ce face');
define('WHAT_UPDATE_TITLES','Modificati titlurile dupa numele fisier');
define('WHAT_DELETE_TITLE','Stergeti titlurile');
define('WHAT_REBUILD','Reconstruieste pictogramele si imaginile intermediare');
define('WHAT_DELETE_ORIGINALS','Stergeti imaginile dimensionate initial, inlocuindu-le cu versiunea redimensionata');
define('U_FILE','File');
define('TITLE_SET_TO','titlu setat ca');
define('SUBMIT_FORM','trimite');
define('UPDATED_SUCCESFULLY','modificata cu succes');
define('ERROR_CREATE','EROARE creare');
define('CONTIN','Process more images');
define('MAIN_SUCCESS','Fisierul %s a fost folosit cu succes ca imagine principala');
define('ERROR_RENAME','Eroare redenumire %s cu %s');
define('ERROR_NOT_FOUND','Fisierul %s nu a fost gasit');
define('U_BACK','back to main');
define('THUMBS_WAIT','Modificare pictograme si/sau imagini intermediare, va rugam asteptati...');
define('THUMBS_CONTINUE_WAIT','Continuati sa modificati pictograme si/sau imaginile intermediare...');
define('TITLES_WAIT','Modificare titluri, va rugam asteptati...');
define('DELETE_WAIT','Stergere titluri, va rugam asteptati...');
define('REPLACE_WAIT','Stergere originale si le inlocuire cu versiunile redimensionate, va rugam asteptati...');
define('INSTRUCTION','Instructiuni rapide');
define('INSTRUCTION_ACTION','Selectati o actiune');
define('INSTRUCTION_PARAMETER','Setati parametrii');
define('INSTRUCTION_ALBUM','Selectati album');
define('INSTRUCTION_PRESS','Apasati %s');
define('U_UPDATE','Update thumbs and/or resized photos');
define('UPDATE_WHAT','Ce trebuie modificat');
define('UPDATE_THUMB','Doar pictograme');
define('UPDATE_PIC','Doar imaginile intermediare');
define('UPDATE_BOTH','Amandoua');
define('UPDATE_NUMBER','Numarul de imagini procesate per click');
define('UPDATE_OPTION','(Incercati o setare mai mica pentru aceasta optiune daca primiti timeout-uri)');
define('FILENAME_TITLE','Nume fisier &rArr; Titlu imagine');
define('FILENAME_HOW','Cum trebuie modificat titlul');
define('FILENAME_REMOVE','Elimina .jpg din final si inlocuieste _ (liniuta de subliniere) cu spatii');
define('FILENAME_EURO','Schimba 2003_11_23_13_20_20.jpg cu 23/11/2003 13:20');
define('FILENAME_US','Schimba 2003_11_23_13_20_20.jpg cu 11/23/2003 13:20');
define('FILENAME_TIME','Schimba 2003_11_23_13_20_20.jpg cu 13:20');
define('UT_DELETE','Delete picture titles or original size photos');
define('DELETE_TITLE','Stergeti titlurile imaginilor');
define('DELETE_ORIGINAL','Stergeti imaginile originale');
define('DELETE_REPLACE','Stergeti originalele, inlocuindu-le cu versiunile dimensionata');
//define('SELECT_ALBUM', 'Select album');

// lang_pagetitle_php
define('VIEWING','Afisare foto');
define('USR','Galeria foto a \'s');
define('PHOTOGALLERY','Galerie foto');
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
