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
  $Source: /cvs/l10n/romanian/coppermine.php,v $
  $Revision: 9.6 $
  $Author: djmaze $
  $Date: 2006/02/12 16:02:22 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Views');//new in 1.2.2nuke
define('PIC_VOTES', 'Votes');//new in 1.2.2nuke
define('PIC_COMMENTS', 'Comments');//new in 1.2.2nuke

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Romanian');
define('LANG_NAME_NATIVE', 'Română');
define('LANG_COUNTRY_CODE', 'ro');
define('TRANS_NAME', 'Rancov Nicolae');
define('TRANS_EMAIL', 'aikon@gmail.com');
define('TRANS_WEBSITE', 'http://aikons.net/');
define('TRANS_DATE', '2005-04-21');
define('CHARSET', 'UTF-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Da');
define('NO', 'Nu');
// some common strings
define('BACK', 'ÎNAPOI');
define('CONTINU', 'CONTINUAŢI');
define('INFO', 'Informaţii');
//define('ERROR', 'Eroare');
define('ALBUM_DATE_FMT', '%d %B, %Y');
define('LASTCOM_DATE_FMT', '%d/%m/%y @ %H:%M');
define('LASTUP_DATE_FMT', '%d %B, %Y');
define('REGISTER_DATE_FMT', '%d %B, %Y');
define('LASTHIT_DATE_FMT', '%d %B, %Y @ %I:%M %p');
define('COMMENT_DATE_FMT', '%d %B, %Y @ %I:%M %p');

// lang_meta_album_names
define('RANDOM', 'Imagini în ordine aleatoare');
define('LASTUP', 'Ultimele adăugate');
define('LASTUPBY', 'Ultimele adăugate de mine');
define('LASTALB', 'Last updated albums');
define('LASTCOM', 'Ultimele comentarii');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Cele mai afişate');
define('TOPRATED', 'Cele mai apreciate');
define('LASTHITS', 'Ultimele afişate');
define('SEARCH', 'Rezultatele căutării');
define('FAVPICS', 'Imagini favorite');

// lang_errors
define('ACCESS_DENIED', 'Nu aveţi dreptul să accesaţi această pagină.');
define('PERM_DENIED', 'Nu aveţi dreptul să efectuaţi această operaţie');
define('PARAM_MISSING', 'Scriptul a fost rulat fără parametrul - parametrii necesari.');
define('NON_EXIST_AP', 'Albumul/imaginea selectată nu există !');
define('QUOTA_EXCEEDED', 'Cota Dvs. a fost depăşită<br/><br/>Aveţi o cotă pe disk de [quota]kB, pozele Dvs. ocupă acum [space]kB, adăugând această imagine veţi depăşi această cotă.');
define('GD_FILE_TYPE_ERR', 'Când folosiţi biblioteca GD tipurile de fişiere ce le puteţi utiliza sunt JPEG şi PNG.');
define('INVALID_IMAGE', 'Imaginea înregistrată de Dvs. este coruptă sau nu poate fi prelucrată de biblioteca GD');
define('RESIZE_FAILED', 'Nu s-a putut crea pictograma sau imaginea redusă.');
define('NO_IMG_TO_DISPLAY', 'Nu este nici o imagine pentru afişat');
define('NON_EXIST_CAT', 'Categoria selectată nu există');
define('ORPHAN_CAT', 'O categorie are părinte inexistent, accesaţi managerul de categorii pentru a corectă problema.');
define('DIRECTORY_RO', 'Directorul \'%s\' nu poate fi scris, imaginile nu pot fi şterse');
define('NON_EXIST_COMMENT', 'Comentariul selectat nu există.');
define('PIC_IN_INVALID_ALBUM', 'Imaginea este într-un album inexistent (%s)!?');
define('BANNED', 'Momentan sunteţi exclus de pe acest sit.');
define('NOT_WITH_UDB', 'Această funcţie este blocată în Coppermine deoarece este integrată cu programul ce rulează forumul. Ce încercaţi să faceţi ori nu este suportat în această configuraţie, ori funcţia trebuie executată de programul ce rulează forumul.');
define('MEMBERS_ONLY', 'Aceasta funcţie este numai pentru membrii, vă rugăm înscrieţi-vă/logaţi-vă.');
define('MUSTBE_GOD', 'Aceasta funcţie este numai pentru administratorul sitului. Trebuie să fiţi logat ca şi superadmin sau god pentru a accesa această funcţie');
define('NO_IMG_TO_APPROVE', 'Nu există nici o imagine pentru aprobat');

// lang_main_menu
define('ALB_LIST_TITLE', 'Lista albumelor');
define('ALB_LIST_LNK', 'Lista albumelor');
define('MY_GAL_TITLE', 'Galeria mea personală');
define('MY_GAL_LNK', 'Galeria mea');
define('MY_PROF_LNK', 'Profilul meu');
define('MY_PROF_TITLE','Verificaţi cota de disk ale Dvs. şi grupurile');
define('ADM_MODE_TITLE', 'Schimbaţi în modul administrator');
define('ADM_MODE_LNK', 'Mod administrator');
define('USR_MODE_TITLE', 'Schimbaţi în modul utilizator');
define('USR_MODE_LNK', 'Mod utilizator');
define('UPLOAD_PIC_TITLE', 'Încărcaţi o imagine într-un album');
define('UPLOAD_PIC_LNK', 'Încărcaţi o imagine');
define('REGISTER_TITLE', 'Creaţi un cont');
define('REGISTER_LNK', 'Înregistrare');
define('LOGIN_LNK', 'Login');
define('LOGOUT_LNK', 'Logout');
define('LASTUP_LNK', 'Ultimele imagini încărcate');
define('LASTUP_TITLE', 'Imaginile încărcate recent');
define('LASTCOM_TITLE',  'Imagini, în ordinea ultimelor comentarii proprii făcute');
define('LASTCOM_LNK',  'Ultimele comentarii');
define('TOPN_TITLE', 'Imagini care au fost cele mai afişate');
define('TOPN_LNK', 'Cele mai vizitate');
define('TOPRATED_TITLE', 'Cele mai apreciate imagini');
define('TOPRATED_LNK',  'Cele mai apreciate');
define('SEARCH_TITLE', 'Căutare în colecţia foto');
define('SEARCH_LNK', 'Căutare');
define('FAV_TITLE', 'Favoriele mele');
define('FAV_LNK', 'Favoritele mele');
define('HELP_TITLE', 'AJUTOR');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Aprobare încărcare');
define('CONFIG_LNK', 'Configurare');
define('ALBUMS_LNK', 'Albume');
define('CATEGORIES_LNK', 'Categorii');
define('USERS_LNK', 'Utilizatori');
define('GROUPS_LNK', 'Grupuri');
define('COMMENTS_LNK', 'Revedeţi comentariile');
define('SEARCHNEW_LNK', 'Adăugaţi imagini în modul batch');
define('UTIL_LNK', 'Redimensionaţi imaginile');
define('BAN_LNK', 'Blocare utilizatori');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Creaţi / ordonaţi albumele mele');
define('MODIFYALB_LNK', 'Modificaţi albumele mele');
//define('MY_PROF_LNK', 'Profilul meu');

// lang_cat_list
define('CATEGORY', 'Categorie');
define('ALBUMS', 'Albume');
//define('PICTURES', 'Imagini');

// lang_album_list
define('ALBUM_ON_PAGE', '%d albume pe %d pagini');
// lang_thumb_view
define('DATE', 'DATA');
define('NAME', 'NUMELE FIŞIERULUI');
define('TITLE', 'TITLU');
define('SORT_DA', 'Sortare după dată, ascendent');
define('SORT_DD', 'Sortare după dată, descendent');
define('SORT_NA', 'Sortare după nume, ascendent');
define('SORT_ND', 'Sortare după nume, ascendent');
define('SORT_TA', 'Sortare după titlu, ascendent');
define('SORT_TD', 'Sortare după titlu, ascendent');
define('PIC_ON_PAGE', '%d imagini pe %d pagini');
define('USER_ON_PAGE', '%d utilizatori pe %d pagini');
define('SORT_RA', 'Sortare după clasificare ascendent');
define('SORT_RD', 'Sortare după clasificare descendent');
define('THUMB_RATING', 'CLASIFICARE');
define('SORT_TITLE', 'Sortaţi imaginile după:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Înapoi la pagina cu pictograme');
define('PIC_INFO_TITLE', 'Afişare/Ascundere informaţii despre imagine');
define('SLIDESHOW_TITLE', 'Diaporama');
define('SLIDESHOW_DISABLED', 'Modul vederi eletronice este dezactivat');
define('SLIDESHOW_DISABLED_MSG', 'Această funcţie este numai pentru membrii, vă rugăm înregistraţi-vă/logaţi-vă.');
define('ECARD_TITLE', 'Trimiteţi această imagine ca vedere electronică');
define('ECARD_DISABLED', 'Vederile electronice sunt dezactivate');
define('ECARD_DISABLED_MSG', 'Nu aveţi permisiune să trimiteţi vederi electronice');
define('PREV_TITLE', 'Vizualizaţi imaginea precedentă');
define('NEXT_TITLE', 'Vizualizaţi imaginea următoare');
define('PIC_POS', 'IMAGINEA %s/%s');
define('NO_MORE_IMAGES', 'Nu mai există imagini în această galerie');
define('NO_LESS_IMAGES', 'Aceasta este prima imagine din galerie');

// lang_rate_pic
define('RATE_THIS_PIC', 'Apreciaţi această imagine ');
define('NO_VOTES', '(Nici un vot încă)');
define('RATING', '(apreciere curentă : %s / 5 cu %s voturi)');
define('RUBBISH', 'Nereuşită');
define('POOR', 'Slabă');
define('FAIR', 'Acceptabilă');
define('GOOD', 'Bună');
define('EXCELLENT', 'Excelentă');
define('GREAT', 'Nemaipomenită');

// lang_cpg_die
//define('INFORMATION', 'Informaţii');
//define('ERROR', 'Eroare');
define('_CRITICAL_ERROR', 'Eroare critică');
define('FILE', 'Fişier: ');
define('LINE', 'Linia: ');

// lang_display_thumbnails
define('FILENAME', 'Nume fişier : ');
define('FILESIZE', 'Mărimea fiserului : ');
define('DIMENSIONS', 'Dimensiuni : ');
define('DATE_ADDED', 'Data adăugării : ');

// lang_get_pic_data
define('N_COMMENTS', '%s comentarii');
define('N_VIEWS', '%s afişări');
define('N_VOTES', '(%s voturi)');


// lang_albmgr_php
define('ALB_NEED_NAME', 'Albumele trebuie să aibă un nume !');
define('CONFIRM_MODIFS', 'Sunteţi sigur că vreţi să faceţi aceste modificări ?');
define('NO_CHANGE', 'Nu aţi făcut nici o modificare !');
define('NEW_ALBUM', 'Album nou');
define('CONFIRM_DELETE1', 'Sunteţi sigur că vreţi să ştergeţi acest album?');
define('CONFIRM_DELETE2', '\\nToate imaginile şi comentariile conţinute vor fi pierdute !');
define('SELECT_FIRST', 'Selectaţi un album inainte');
define('ALB_MRG', 'Managerul de albume');
define('MY_GALLERY', '* Galeria mea *');
define('NO_CATEGORY', '* Nici o categorie *');
define('DELETE', 'Ştergeţi');
define('NEW', 'Nou');
define('APPLY_MODIFS', 'Efectuaţi modificările');
define('SELECT_CATEGORY', 'Selectaţi o categorie');

// lang_catmgr_php
define('MISS_PARAM', 'Nu au fost stabiliţi parametrii necesari pentru operaţia \'%s\' !');
define('UNKNOWN_CAT', 'Categoria selectată nu există în baza de date');
define('USERGAL_CAT_RO', 'Categoria Galeria utilizatorului nu poate fi ştearsă!');
define('MANAGE_CAT', 'Administraţi categoriile');
define('CONFIRM_DELETE_CAT', 'Sunteţi sigur că doriţi să ŞTE această categorie');
//define('CATEGORY', 'Categorie');
define('OPERATIONS', 'Operatii');
define('MOVE_INTO', 'Mutati în');
define('UPDATE_CREATE', 'Modificaţi/Creaţi o categorie');
define('PARENT_CAT', 'Categoria parinte');
define('CAT_TITLE', 'Titlul categoriei');
define('CAT_DESC', 'Descrierea categoriei');

// lang_config_php
define('CONFIG_TITLE', 'Configurare');
define('RESTORE_CFG', 'Reveniţi la setările implicite');
define('SAVE_CFG', 'Salvaţi noua configuraţie');
define('NOTES', 'Notiţe');
//define('INFO', 'Informaţii');
define('UPD_SUCCESS', 'Configuraţia modului Coppermine a fost modificată');
define('RESTORE_SUCCESS', 'Configuraţia implicita a modului Coppermine a fost restabilită');
define('NAME_A', 'Nume ascendent');
define('NAME_D', 'Nume descendent');
define('TITLE_A', 'Titlu ascendent');
define('TITLE_D', 'Titlu descendent');
define('DATE_A', 'Data ascendent');
define('DATE_D', 'Data descendent');
define('RATING_A', 'Clasificare ascendent');
define('RATING_D', 'Clasificare descendent');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Înălţime');
define('TH_WD', 'Lăţime');


// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Trebuie să introduceţi numele Dvs. şi un comentariu');
define('COM_ADDED', 'Comentariu adăugat');
define('ALB_NEED_TITLE', 'Trebuie să furnizaţi un titlu pentru album !');
define('NO_UDP_NEEDED', 'Nu este necesară nici o modificare.');
define('ALB_UPDATED', 'Album modificat');
define('UNKNOWN_ALBUM', 'Albumul selectat nu există sau nu aveţi permisiunea să încărcati imagini în acest album');
define('NO_PIC_UPLOADED', 'Nici o imagine nu a fost încărcată !<br /><br />Dacă întradevar aţi selectat o imagine, verificaţi dacă serverul permite uploaduri...');
define('ERR_MKDIR', 'Eroare la crearea directorului %s !');
define('DEST_DIR_RO', 'Directorul destinaţie %s nu are permisiuni de scriere de către script !');
define('ERR_MOVE', 'Imposibil de mutat %s în %s !');
define('ERR_FSIZE_TOO_LARGE', 'Dimensiunea imaginii este prea mare (maximul permis este %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Mărimea fişierului încărcat este prea mare (maximul permis este %s kB) !');
define('ERR_INVALID_IMG', 'Fişierul încărcat nu este o imagine validă !');
define('ALLOWED_IMG_TYPES', 'Puteţi încărca doar %s imagini.');
define('ERR_INSERT_PIC', 'Imaginea \'%s\' nu poate fi inserată în album ');
define('UPLOAD_SUCCESS', 'Imaginea Dvs. a fost încărcată cu succes<br /><br />Va fi vizibilă după aprobarea administratorului.');
//define('INFO', 'Informaţii');
define('ERR_COMMENT_EMPTY', 'Cometariul Dvs. este gol !');
define('ERR_INVALID_FEXT', 'Doar fişierele cu următoarele extensii sunt permise : <br /><br />%s.');
define('NO_FLOOD', 'Ne pare rău dar sunteţi deja autorul ultimului comentariu postat pentru această imagine<br /><br />Editaţi comentariul postat dacă doriţi să-l modificaţi');
define('REDIRECT_MSG', 'Sunteţi redirectionat.<br /><br /><br />Click pe \'CONTINUARE\' daca pagina nu se încarcă automat');
define('UPL_SUCCESS', 'Imaginea Dvs. a fost adaugată cu succes');

// lang_delete_php
define('CAPTION', 'Descriere');
define('FS_PIC', 'imaginea la dimensiuni maxime');
define('DEL_SUCCESS', 'ştearsă cu succes');
define('NS_PIC', 'imaginea de dimensiuni normale');
define('ERR_DEL', 'nu poate fi ştearsă');
define('THUMB_PIC', 'pictograma');
//define('COMMENT', 'comentariul');
define('IM_IN_ALB', 'imaginea în album');
define('ALB_DEL_SUCCESS', 'Albumul \'%s\' a fost şters');
define('ALB_MGR', 'Managerul de albume');
define('ERR_INVALID_DATA', 'Date incorecte primite în \'%s\'');
define('CREATE_ALB', 'Creare album \'%s\'');
define('UPDATE_ALB', 'Modificare album \'%s\' cu titlul \'%s\' şi indexul \'%s\'');
define('DEL_PIC', 'Ştergeţi imaginea');
define('DEL_ALB', 'Ştergeţi albumul');
define('DEL_USER', 'Ştergeţi utilizatorul');
//define('ERR_UNKNOWN_USER', 'Utilizatorul selectat nu există!');
define('COMMENT_DELETED', 'Comentariul a fost şters cu succes');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'Sunteţi sigur că doriţi să ŞTERGEŢI această imagine ? \\nComentariile vor fi de asemenea şterse.');
define('DEL_THIS_PIC', 'ŞTERGEŢI ACEASTĂ IMAGINE');
define('SIZE', '%s x %s pixeli');
define('VIEWS', '%s ori');
define('SLIDESHOW', 'Diaporama');
define('STOP_SLIDESHOW', 'OPRIŢI DIAPORAMA');
define('VIEW_FS', 'Click pentru a vedea imaginea la dimensiuni originale');
define('EDIT_PIC', 'EDITAŢI INFORMAŢIILE IMAGINII');

// lang_picinfo
define('PIC_INF_TITLE', 'Informaţii despre imagine');
define('PIC_INF_FILENAME', 'Nume fişier');
define('ALBUM_NAME', 'Nume album');
define('PIC_INFO_RATING', 'Apreciere (%s voturi)');
define('KEYWORDS', 'Cuvinte cheie');
define('PIC_INF_FILE_SIZE', 'Dimensiune fişier');
define('PIC_INF_DIMENSIONS', 'Dimensiune imagine');
define('DISPLAYED', 'Afişată');
define('CAMERA', 'Camera');
define('DATE_TAKEN', 'Data fotografierii');
define('APERTURE', 'Apertura');
define('EXPOSURE_TIME', 'Timp de expunere');
define('FOCAL_LENGTH', 'Distanţa focală');
define('COMMENT', 'Comentariu');
define('ADDFAV', 'Adăugaţi în Favorite');
define('ADDFAVPHRASE', 'Favorite');
define('REMFAV', 'Ştergeţi din Favorite');
define('IPTCTITLE', 'Titlul IPTC');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'cuvinte cheie în IPTC');
define('IPTCCATEGORY', 'categorii IPTC');
define('IPTCSUBCATEGORIES', 'sub-categorii IPTC');
define('BOOKMARK_PAGE', 'Retineţi imaginea');
define('REMOVEFAV', 'Înlaturată din Albumul cu imagini favorite');
define('ADDEDTOFAV', 'Adăugată în Albumul cu imagini favorite');

// lang_display_comments
define('OK', 'Ok');
define('COM_EDIT_TITLE', 'Editaţi acest comentariu');
define('CONFIRM_DELETE_COM', 'Sunteţi sigur că doriţi să ştergeţi acest comentariu ?');
define('ADD_YOUR_COMMENT', 'Adăugaţi comentariul Dvs.');
define('COM_NAME', 'Nume');
//define('COMMENT', 'Comentariu');
define('YOUR_NAME', 'Anonim');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Click pe imagine pentru a închide fereastra');

// lang_ecard_php
define('E_TITLE', 'Trimiteţi o vedere electronică');
define('INVALID_EMAIL', '<b>Atenţie</b> : adresa de e-mail este incorectă !');
define('E_ECARD_TITLE', 'O vedere electronică de la %s pentru Dvs.');
define('VIEW_ECARD', 'Dacă vederea nu este afişată corect daţi click pe acest link');
define('VIEW_MORE_PICS', 'Click aici pentru a vedea mai multe imagini!');
define('SEND_SUCCESS', 'Vederea Dvs. a fost trimisă');
define('SEND_FAILED', 'Ne pare rău dar serverul nu poate trimite vederea Dvs...');
define('FROM', 'De la');
define('_YOUR_NAME', 'Numele Dvs.');
define('YOUR_EMAIL', 'Adresa Dvs. e-mail');
define('TO', 'Către');
define('RCPT_NAME', 'Numele adresantului');
define('RCPT_EMAIL', 'Adresa e-mail destinaţie');
define('GREETINGS', 'Salutări');
define('MESSAGE', 'Mesaj');
define('ECARD_LINK_CORRUPT', 'Ne pare rău dar vederea electronică trimisă a fost afectată de către clientul de mail a Dvs., vă rugăm încercaţi să lipiţi[paste] linkul ]n browserul Dvs.'); //NEW

// lang_editpics_php
define('PIC_INFO', 'Informaţii&nbsp;imagine');
define('ALBUM', 'Album');
define('EDIT_TITLE', 'Titlu');
define('DESC', 'Descriere');
//define('KEYWORDS', 'Cuvinte cheie');
define('PIC_INFO_STR', '%sx%s - %sKB - %s afişări - %s voturi');
define('APPROVE', 'Aprobaţi imaginea');
define('POSTPONE_APP', 'Amânaţi aprobarea');
//define('DEL_PIC', 'Ştergeţi imaginea');
define('READ_EXIF', 'Citiţi din nou informaţiile EXIF');
define('RESET_VIEW_COUNT', 'Resetaţi contorul afişărilor');
define('RESET_VOTES', 'Resetaţi contorul voturilor');
define('DEL_COMM', 'Ştergeţi comentariile');
define('UPL_APPROVAL', 'Aprobare încărcare');
define('EDIT_PICS', 'Editaţi imaginile');
define('SEE_NEXT', 'Afişati imaginile următoare');
define('SEE_PREV', 'Afişati imaginile anterioare');
define('N_PIC', '%s imagini');
define('N_OF_PIC_TO_DISP', 'Numărul de imagini de afişat');
define('APPLY', 'Aplicaţi modificările');

// lang_groupmgr_php
define('GROUP_NAME', 'Numele grupului');
define('DISK_QUOTA', 'Cota pe disc');
define('CAN_RATE', 'Poate aprecia imaginile');
define('CAN_SEND_ECARDS', 'Poate trimite vederi');
define('CAN_POST_COM', 'Poate trimite comentarii');
define('CAN_UPLOAD', 'Poate încărca imagini');
define('CAN_HAVE_GALLERY', 'Poate avea o galerie personală');
//define('APPLY', 'Executaţi modificările');
define('CREATE_NEW_GROUP', 'Creaţi un grup nou');
define('DEL_GROUPS', 'Ştergeţi grupul/grupurile selectat(e)');
define('CONFIRM_DEL', 'Atenţie, când ştergeţi un grup, utilizatorii aparţinând acestui grup vor fi transferaţi în grupul \'Înregistaţi\' !\\n\\nSunteţi sigur că doriţi să conţinuaţi?');
define('GROUP_TITLE', 'Administare grupuri de utilizatori');
define('APPROVAL_1', 'Aprobare Înreg. Pub. (1)');
define('APPROVAL_2', 'Aprobare Înreg. Priv. (2)');
define('NOTE1', '<b>(1)</b> Încărcarea într-un album public necesită aprobarea administratorului');
define('NOTE2', '<b>(2)</b> Încărcarea într-un album aparţinând utilizatorului necesită aprobarea administratorului');
//define('NOTES', 'Notiţe');

// lang_index_php
define('WELCOME', 'Bine aţi venit !');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'Sunteţi sigur că doriţi să ŞTERGEŢI acest album ? \\nToate imaginile şi comentariile conţinute vor fi şterse de asemenea.');
//define('DELETE', 'ŞTERGEŢI');
define('MODIFY', 'PROPRIETĂŢI');
//define('EDIT_PICS', 'EDITARE IMAGINI');

// lang_list_categories
define('HOME', _HOME);
define('STAT1', '<b>[pictures]</b> imagini în <b>[albums]</b> albume şi <b>[cat]</b> categorii cu <b>[comments]</b> comentarii afişate de <b>[views]</b> ori');
define('STAT2', '<b>[pictures]</b> imagini în <b>[albums]</b> albume afişate de <b>[views]</b> ori');
define('XX_S_GALLERY', '%s\'s Galerie');
define('STAT3', '<b>[pictures]</b> imagini în <b>[albums]</b> albume cu <b>[comments]</b> comentarii afişate de <b>[views]</b> ori');

// lang_list_users
define('USER_LIST', 'Lista utilizatorilor');
define('NO_USER_GAL', 'Nu există galerii ale utilizatorilor');
define('N_ALBUMS', '%s album(e)');
define('N_PICS', '%s imagini');

// lang_list_albums
define('N_PICTURES', '%s imagini');
define('LAST_ADDED', ', ultima adăugată la %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Modificaţi album %s');
define('GENERAL_SETTINGS', 'Setări generale');
define('ALB_TITLE', 'Titlu album');
define('ALB_CAT', 'Categoria albumului');
define('ALB_DESC', 'Descrierea albumului');
define('ALB_THUMB', 'Pictograma albumului');
define('ALB_PERM', 'Permisiile acestui album');
define('CAN_VIEW', 'Albumul poate fi văzut de');
define('MOD_CAN_UPLOAD', 'Vizitatorii pot încărca imagini');
define('CAN_POST_COMMENTS', 'Vizitatorii pot publica comentarii');
define('MOD_CAN_RATE', 'Vizitatorii pot aprecia imaginile');
define('USER_GAL', 'Galeria utilizatorului');
define('NO_CAT', '* Nici o categorie *');
define('ALB_EMPTY', 'Albumul este gol');
define('LAST_UPLOADED', 'Ultimile încărcate');
define('PUBLIC_ALB', 'Toată lumea (album public)');
define('ME_ONLY', 'Doar eu');
define('OWNER_ONLY', 'Doar proprietarul albumului (%s)');
define('GROUPP_ONLY', 'Membrii grupului \'%s\'');
define('ERR_NO_ALB_TO_MODIFY', 'Nu există nici un album pe care să-l puteţi modifica în baza de date.');
define('UPDATE', 'Modificaţi album');

// lang_rate_pic_php
define('ALREADY_RATED', 'Ne pare rău dar aţi votat deja această imagine');
define('RATE_OK', 'Votul Dvs. ');

// lang_register_php
define('USERNAME', 'Utilizator');
define('X_S_PROFILE', 'Profilul lui %s');
define('GROUP', 'Grup');
define('DISK_USAGE', 'Utilizare disc');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Revizuire comentarii');
define('NO_COMMENT', 'Nu există comentarii care să fie revizuite');
define('N_COMM_DEL', '%s comentarii şterse');
define('N_COMM_DISP', 'Numărul de comentarii de afişat');
define('R_SEE_PREV', 'Afişaţi anteriorul');
define('R_SEE_NEXT', 'Afişaţi următorul');
define('R_DEL_COMM', 'Ştergeţi comentariile selectate');

// lang_search_php
define('S_SEARCH', 'Căutaţi în colecţia de imagini');

// lang_search_new_php
define('PAGE_TITLE', 'Cautaţi imagini noi');
define('SELECT_DIR', 'Selectaţi directorul');
define('SELECT_DIR_MSG', 'Această funcţie vă permite să adăugaţi mai multe imagini o dată, imagini încărcate de Dvs. pe server prin FTP.<br /><br />Selectaţi directorul unde aţi încărcat imaginile');
define('NO_PIC_TO_ADD', 'Nu există nici o imagine de adăugat');
define('NEED_ONE_ALBUM', 'Aveţi nevoie de cel putin un album pentru a folosi această funcţie');
define('WARNING', 'Atenţie');
define('CHANGE_PERM', 'scriptul nu poate scrie în acest director, trebuie să schimbaţi modul la 755 sau 777 înainte de a încerca să adăugaţi imaginile !');
define('TARGET_ALBUM', '<b>Puneţi imaginile din &quot;</b>%s<b>&quot; în </b>%s');
define('FOLDER', 'Director');
define('IMAGE', 'Imagine');
//define('ALBUM', 'Album');
define('RESULT', 'Rezultat');
define('DIR_RO', 'Nu poate fi scris. ');
define('DIR_CANT_READ', 'Nu poate fi citit. ');
define('INSERT', 'Adăugaţi imagini noi în galerie');
define('LIST_NEW_PIC', 'Lista noilor imagini');
define('INSERT_SELECTED', 'Inseraţi imaginile selectate');
define('NO_PIC_FOUND', 'Nu a fost gasită nici o imagine nouă');
define('BE_PATIENT', 'Vă rugăm asteptaţi, scriptul necesită timp pentru a procesa imaginile');
define('SN_NOTES', '<ul><li><b>OK</b> : înseamnă că imaginea a fost adaugată cu succes<li><b>DP</b> : înseamnă că imaginea este un duplicat şi există deja în baza de date<li><b>PB</b> : înseamnă că imaginea nu a putut fi adaugată, verificaţi configuratia şi permisiile directoarelor un sunt stocate imaginile.<li>Dacă \'semnele\' OK, DP, PB nu apar, daţi click pe iconiţa de imagine defectă pentru a verifica mesajele de eroare produse de PHP<li>Dacă navigatorul Dvs. raportează \'timeout\', apăsaţi butonul de reîncărcare a paginii</ul>');
define('SELECT_ALBUM', 'Selectaţi albumul');
define('NO_ALBUM', 'Nu a fost selectat nici un album, întoarceţi-vă şi selectaţi un album unde să puneţi imaginile Dvs.');

// lang_upload_php
define('UP_TITLE', 'Încărcaţi o imagine');
define('MAX_FSIZE', 'Dimensiunea maximă a fişierului este %s kB');
//define('ALBUM', 'Album');
define('PICTURE', 'Imagine');
define('PIC_TITLE', 'Titlul imaginii');
define('DESCRIPTION', 'Descrierea imaginii');
define('UP_KEYWORDS', 'Cuvinte cheie (separate cu spaţii)');
define('ERR_NO_ALB_UPLOADABLES', 'Ne pare rău, dar nu există nici un album unde puteţi încărca imagini');

// lang_usermgr_php
define('U_TITLE', 'Administrare utilizatori');
//define('NAME_A', 'Nume ascendent');
//define('NAME_D', 'Nume descendent');
define('GROUP_A', 'Grup ascendent');
define('GROUP_D', 'Grup descendent');
define('REG_A', 'Data înregistrării ascendent');
define('REG_D', 'Data înregistrării descendent');
define('PIC_A', 'Număr imagini ascendent');
define('PIC_D', 'Număr imagini descendent');
define('DISKU_A', 'Utilizare spaţiu ascendent');
define('DISKU_D', 'Utilizare spaţiu descendent');
define('SORT_BY', 'Sorteaza utilizatorii după');
define('ERR_NO_USERS', 'Tabelul cu utilizatori este gol !');
define('ERR_EDIT_SELF', 'Nu puteţi edita propriul profil. Folosiţi optiunea \'Profilul meu\' pentru aceasta');
define('EDIT', 'EDITAŢI');
//define('DELETE', 'ŞTERGEŢI');
define('U_NAME', 'Nume utilizator');
//define('GROUP', 'Grup');
define('INACTIVE', 'Inactiv');
//define('OPERATIONS', 'OperaŢii');
define('PICTURES', 'Imagini');
define('DISK_SPACE', 'Spaţiu utilizat / Cota');
define('REGISTERED_ON', 'Înregistrat la');
define('U_USER_ON_P_PAGES', '%d utilizatori pe %d pagini');
define('USER_CONFIRM_DEL', 'Sunteţi sigur că doriţi să ŞTERGEŢI acest utilizator ? \\nToate imaginile şi albumele sale vor fi de asemenea şterse');
define('MAIL', 'POŞTA');
define('ERR_UNKNOWN_USER', 'Utilizatorul selectat nu există !');
define('MODIFY_USER', 'Modificaţi utilizatorul');
//define('NOTES', 'Notiţe');
define('NOTE_LIST', '<li>Dacă nu doriţi să schimbaţi parola, lăsaţi câmpurile \"Parola\" libere');
define('PASSWORD', 'Parola');
define('USER_ACTIVE', 'Utilizatorul este activ');
define('USER_GROUP_CP', 'Grup utilizatori');
define('USER_EMAIL_CP', 'E-mail');
define('USER_WEB_SITE', 'Pagina web');
define('CREATE_NEW_USER', 'Creaţi utilizator nou');
define('USER_FROM', 'Locaţie');
define('USER_INTERESTS', 'Domenii de interes');
define('USER_OCC', 'Ocupaţie');

// lang_util_php
define('UTIL_TITLE', 'Redimensionaţi imaginea');
define('WHAT_IT_DOES', 'Ce face');
define('WHAT_UPDATE_TITLES', 'Modificaţi titlurile după numele fişier');
define('WHAT_DELETE_TITLE', 'Ştergeţi titlurile');
define('WHAT_REBUILD', 'Reconstruieşte pictogramele şi imaginile intermediare');
define('WHAT_DELETE_ORIGINALS', 'Ştergeţi imaginile dimensionate iniţial, înlocuindu-le cu versiunea redimensionată');
define('U_FILE', 'Fişier');
define('TITLE_SET_TO', 'titlu setat ca');
define('SUBMIT_FORM', 'trimite');
define('UPDATED_SUCCESFULLY', 'modificată cu succes');
define('ERROR_CREATE', 'EROARE creare');
define('CONTIN', 'Procesaţi mai multe imagini');
define('MAIN_SUCCESS', 'Fişierul %s a fost folosit cu succes ca imagine principală');
define('ERROR_RENAME', 'Eroare redenumire %s cu %s');
define('ERROR_NOT_FOUND', 'Fişierul %s nu a fost găsit');
define('U_BACK', 'înapoi la principal');
define('THUMBS_WAIT', 'Modificare pictograme şi/sau imagini intermediare, vă rugăm asteptaţi...');
define('THUMBS_CONTINUE_WAIT', 'Continuaţi să modificaţi pictograme şi/sau imaginile intermediare...');
define('TITLES_WAIT', 'Modificare titluri, vă rugăm aşteptaţi...');
define('DELETE_WAIT', 'Ştergere titluri, vă rugăm aşteptaţi...');
define('REPLACE_WAIT', 'Ştergere originale şi înlocuire cu versiunile redimensionate, vă rugăm aşteptaţi...');
define('INSTRUCTION', 'Instrucţiuni rapide');
define('INSTRUCTION_ACTION', 'Selectaţi o acţiune');
define('INSTRUCTION_PARAMETER', 'Setaţi parametrii');
define('INSTRUCTION_ALBUM', 'Selectaţi album');
define('INSTRUCTION_PRESS', 'Apăsaţi %s');
define('U_UPDATE', 'Modificaţi pictograme şi/sau imagini intermediare');
define('UPDATE_WHAT', 'Ce trebuie modificat');
define('UPDATE_THUMB', 'Doar pictograme');
define('UPDATE_PIC', 'Doar imaginile intermediare');
define('UPDATE_BOTH', 'Amândouă');
define('UPDATE_NUMBER', 'Numărul de imagini procesate per click');
define('UPDATE_OPTION', '(Încercaţi o setare mai mică pentru această opţiune dacă primiţi timeout-uri)');
define('FILENAME_TITLE', 'Nume fişier &rArr; Titlu imagine');
define('FILENAME_HOW', 'Cum trebuie modificat titlul');
define('FILENAME_REMOVE', 'Eliminaţi .jpg din final şi înlocuiţi _ (liniuta de subliniere) cu spaţii');
define('FILENAME_EURO', 'Schimbaţi 2003_11_23_13_20_20.jpg cu 23/11/2003 13:20');
define('FILENAME_US', 'Schimbaţi 2003_11_23_13_20_20.jpg cu 11/23/2003 13:20');
define('FILENAME_TIME', 'Schimbaţi 2003_11_23_13_20_20.jpg cu 13:20');
define('UT_DELETE', 'Ştergeţi titlurile sau imaginile originale');
define('DELETE_TITLE', 'Ştergeţi titlurile imaginilor');
define('DELETE_ORIGINAL', 'Ştergeţi imaginile originale');
define('DELETE_REPLACE', 'Ştergeţi originalele, înlocuindu-le cu versiunile redimensionate');
//define('SELECT_ALBUM', 'Selectaţi albumul');

// lang_pagetitle_php
define('VIEWING', 'Afişare foto');
define('USR', 'are următoarea galerie foto');
define('PHOTOGALLERY', 'Galerie foto');
$lang_usermgr_php = array(
    'name_a' => 'Nume crescător',
    'name_d' => 'Nume descrescător',
    'group_a' => 'Grup ascendent',
    'group_d' => 'Grup descendent',
    'reg_a' => 'Data înreg. crescător',
    'reg_d' => 'Data înreg. descrescător',
    'pic_a' => 'Nr. de imagini crescător',
    'pic_d' => 'Nr. de imagini descrescător',
    'disku_a' => 'Spaţiul folosit crescător',
    'disku_d' => 'Spaţiul folosit descrescător',
    );
$lang_byte_units = array('octeţi', 'kB', 'MB');
// Day of weeks and months
$lang_day_of_week = array('Duminică', 'Luni', 'Marţi', 'Miercuri', 'Joi', 'Vineri', 'Sâmbătă');
$lang_month = array('Ian', 'Feb', 'Mar', 'Apr', 'Mai', 'Iun', 'Iul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
$lang_meta_album_names = array(
    'random' => 'Imagini aleatoare',
    'lastup' => 'Ultimele adăugate',
    'lastupby' => 'Ultimele adăugate de către mine', // new 1.2.2
    'lastalb' => 'Ultimele albune actualizate',
    'lastcom' => 'Ultimele comentarii',
    'lastcomby' => 'Ultimele comentarii ale mele', // new 1.2.2
    'topn' => 'Cele mai afişate',
    'toprated' => 'Cele mai apreciate',
    'lasthits' => 'Ultimele afişate',
    'search' => 'Rezultatele căutării',
    'favpics' => 'Imagini favorite' // changed in cpg1.2.0nuke
    );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array(
    'title' => 'Configuraţie',
    'restore_cfg' => 'Refaceţi setările iniţiale implicite',
    'save_cfg' => 'Salvaţi noua configuraţie',
    'notes' => 'Notiţe',
    'info' => 'Informaţii',
    'upd_success' => 'Configuraţia modulului Coppermine a fost actualizată',
    'restore_success' => 'Setările iniţiale implicite ale modulului Coppermine au fost refăcute',
    'name_a' => 'Nume crescător',
    'name_d' => 'Nume descrescător',
    'title_a' => 'Titlu ascendent',
    'title_d' => 'Titlu descendent',
    'date_a' => 'Dată crescător',
    'date_d' => 'Dată descrescător',
    'rating_a' => 'Punctaj crescător', // new in cpg1.2.0nuke
    'rating_d' => 'Punctaj descrescător', // new in cpg1.2.0nuke
    'th_any' => 'Max Aspect',
    'th_ht' => 'Înălţime',
    'th_wd' => 'Lăţime',
    );
// start left side interpretation
$lang_config_data = array(
// 'Setări generale',
    'generale',
    array('Numele galeriei', 'gallery_name', 0),
    array('Descrierea galeriei', 'gallery_description', 0),
    array('Adresa e-mail a administratorului', 'gallery_admin_email', 0),
    array('Adresa directorului radacina al sitului, de exemplu http://example.com/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
    array('Tema grafică', 'theme', 6),
    array('Titlurile specifice în pagina în loc de >Coppermine', 'nice_titles', 1),
//'Album list view',
    'Lista cu albume',
    array('Lăţimea tabelului principal (pixeli sau %)', 'main_table_width', 0),
    array('Numărul de nivele de categorii care să fie afişate', 'subcat_level', 0),
    array('Numărul albumelor ce vor fi afişate', 'albums_per_page', 0),
    array('Numărul de coloane în lista de albume', 'album_list_cols', 0),
    array('Dimensiunea pictogramelor în pixeli', 'alb_list_thumb_size', 0),
    array('Continutul paginii principale', 'main_page_layout', 0),
    array('Afişati pictogramele albumelor din primul nivel în categorii', 'first_level', 1), 
//'Thumbnail view',
    'Pictograme',
    array('Numărul de coloane pe pagina cu pictograme', 'thumbcols', 0),
    array('Numărul de rânduri pe pagina cu pictograme', 'thumbrows', 0),
    array('Numărul maxim de taburi ce vor fi afişate', 'max_tabs', 0),
    array('Afişati descrierea imaginii (pe lângă titlu) sub pictogramă', 'caption_in_thumbview', 1),
    array('Afişati numărul de comentarii sub pictogramă', 'display_comment_count', 1),
    array('Ordinea de sortare a imaginilor, implicită', 'default_sort_order', 3),
    array('Numărul minim de voturi pentru ca o imagine să apară în listă \'Cele mai apreciate\' ', 'min_votes_for_rating', 0),
    array('Tagurile textului alternativ şi titlurile pictogramei să conţină titlurile şi cuvintele cheie în loc informaţiile imaginilor', 'seo_alts', 1), // new in cpg1.2.0nuke
 //'Display Image &amp; Comment settings',
    'Afişarea imaginii &amp; setările comentariilor',
    array('Lãţimea tabelului pentru afişarea imaginii (pixeli sau %)', 'picture_table_width', 0),
    array('Informaţiile despre imagine sunt vizibile în mod implicit', 'display_pic_info', 1),
    array('Filtraţi cuvintele cenzurate în comentarii', 'filter_bad_words', 1),
    array('Activaţi Smilies în comentarii', 'enable_smilies', 1),
    array('Permiteţi mai multe comentarii consecutive despre o imagine de la acelaşi utilizator', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
    array('Trimite-ţi un e-mail administratorului sitului la trimiterea unui comentariu' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
    array('Lungimea maximă a descrierii imagini', 'max_img_desc_length', 0),
    array('Numărul maxim de caractere într-un cuvânt', 'max_com_wlength', 0),
    array('Numărul maxim de linii într-un comentariu', 'max_com_lines', 0),
    array('Lungimea maximă a unui comentariu', 'max_com_size', 0),
    array('Afişati rama film', 'display_film_strip', 1),
    array('Numărul de obiecte în rama film', 'max_film_strip_items', 0),
    array('Permiteti afişarea imaginii la dimensiunea originală de către anonimi', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
    array('Numărul de zile care trebuie să treacă pentru a putea vota din nou aceeaşi imagine','keep_votes_time',0), // new in cpg1.2.2c nuke
    array('Afişaţi imaginea la dimensiunea maximă în diaporamă','fullsize_slideshow',1),
    array('Afişaţi blocurile din dreapta imaginii dacă blocurile sunt activate la nivel de modul?', 'right_blocks', 1), // new 1.2.2
// 'Pictures and thumbnails settings',
    'Setări imagini şi pictograme',
    array('Calitatea fişierelor JPEG', 'jpeg_qual', 0),
    array('Aşezaţi pe imagine', 'watermark', 1),
    array('Dimensiunea maximă a unei pictograme <b>*</b>', 'thumb_width', 0),
    array('Folosiţi dimensiunea (lăţime, înălţime sau aspect max pentru pictogramă)<b>*</b>', 'thumb_use', 7),
    array('Creaţi imagini intermediare', 'make_intermediate', 1),
    array('Lăţimea sau înălţimea maximă a unei imagini intermediare <b>*</b>', 'picture_width', 0),
    array('Dimensiunea maximă pentru o imagine de încărcat(kB)', 'max_upl_size', 0),
    array('Lăţimea sau înălţimea maximă a imaginilor de încărcat(pixeli)', 'max_upl_width_height', 0), 
    array('Permiteţi încărcarea mai multor fişiere cu acelaşi nume', 'samename', 1), 
//'User settings',
    'Setări utilizator',
    array('Permiteti înregistrarea de utilizatori noi', 'allow_user_registration', 1),
/*
    array('User registration requires email verification', 'reg_requires_valid_email', 1),
    array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),
*/
    array('Utilizatori pot avea albume private', 'allow_private_albums', 1),
    array('Afişaţi avatarul utilizatorului în loc de imaginea album privat', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',
    'Câmpuri pentru descrierea imaginii(lasaţi loc liber dacă nu le folosiţi)',
    array('Numele câmpului 1', 'user_field1_name', 0),
    array('Numele câmpului 2', 'user_field2_name', 0),
    array('Numele câmpului 3', 'user_field3_name', 0),
    array('Numele câmpului 4', 'user_field4_name', 0), 
//'Pictures and thumbnails advanced settings',
    'Setări avansate pentru imagini şi pictograme',
    array('Arătaţi iconiţa Album privat utilizatorilor care nu sunt logaţi', 'show_private', 1),
    array('Caractere interzise în numele fişierelor', 'forbiden_fname_char', 0),
    array('Aceptaţi extensia fişierelor pentru imaginile încărcate', 'allowed_file_extensions', 0),
    array('Metoda de redimensionare a imaginilor', 'thumb_method', 2),
    array('Calea catre utilitarul ImageMagick/Netpbm \'convert\'(de examplu /usr/bin/X11/)', 'impath', 0),
    array('Tipuri de imagini permise(valabil numai pentru ImageMagick)', 'allowed_img_types', 0),
    array('Opţiuni în linia de comanda pentru ImageMagick', 'im_options', 0),
    array('Citire date EXIF din fişierele JPEG', 'read_exif_data', 1),
    array('Citire date IPTC din fişierele JPEG', 'read_iptc_data', 1), // new in cpg1.2.0nuke
    array('Directorul cu albume <b>*</b>', 'fullpath', 0),
    array('Directorul pentru imaginile utilizatorilor <b>*</b>', 'userpics', 0),
    array('Prefixul pentru imaginile intermediare <b>*</b>', 'normal_pfx', 0),
    array('Prefixul pentru pictograme <b>*</b>', 'thumb_pfx', 0),
    array('Informaţii despre imagine - afişaţi numele fişierului', 'picinfo_display_filename', '1'), // new in cpg1.2.0nuke
    array('Informaţii despre imagine - afişaţi numele albumului', 'picinfo_display_album_name', '1'), // new in cpg1.2.0nuke
    array('Informaţii despre imagine - afişaţi dimensiunile fişierului', 'picinfo_display_file_size', '1'), // new in cpg1.2.0nuke
    array('Informaţii despre imagine - afişaţi dimensiunile imaginii', 'picinfo_display_dimensions', '1'), // new in cpg1.2.0nuke
    array('Informaţii despre imagine - afişaţi numarul de afişări a imaginii', 'picinfo_display_count_displayed', '1'), // new in cpg1.2.0nuke
    array('Informaţii despre imagine - afişaţi URL-ul imaginii', 'picinfo_display_URL', '1'), // new in cpg1.2.0nuke
    array('Informaţii despre imagine - afişaţi URL-ul imaginii ca şi un link marcator', 'picinfo_display_URL_bookmark', '1'), // new in cpg1.2.0nuke
    array('Informaţii despre imagine - afişaţi linkul către albumul favorit', 'picinfo_display_favorites', '1'), // new in cpg1.2.0nuke
//    'Cookies &amp; Charset settings',
    'Cookies &amp; Setări pentru charset',
    array('Numele cookie-ului utilizat de script', 'cookie_name', 0),
    array('Calea cookie-ului utilizat de script', 'cookie_path', 0),
//    'Miscellaneous settings',
    'Setări diverse',
    array('Activează modul debug', 'debug_mode', 1),
    '<br /><div align="center">(*) Câmpurile marcate cu * nu trebuiesc modificate dacă există deja imagini în galeria Dvs.</div><br />'
    );
// end left side interpretation