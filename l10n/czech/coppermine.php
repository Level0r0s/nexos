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
  $Source: /cvs/l10n/czech/coppermine.php,v $
  $Revision: 9.5 $
  $Author: djmaze $
  $Date: 2006/02/12 16:01:43 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Views');//new in 1.2.2nuke
define('PIC_VOTES', 'Votes');//new in 1.2.2nuke
define('PIC_COMMENTS', 'Comments');//new in 1.2.2nuke

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Czech');
define('LANG_NAME_NATIVE', '&#x10C;esky');
define('LANG_COUNTRY_CODE', 'cz');
define('TRANS_NAME', 'Michal Soukup aka migon');
define('TRANS_EMAIL', 'migon@boule.cz');
define('TRANS_WEBSITE', 'http://boule.cz/');
define('TRANS_DATE', '2003-10-02');
define('CHARSET', 'UTF-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Ano');
define('NO', 'Ne');
// some common strings
define('BACK', 'ZPМT');
define('CONTINU', 'POKRAИOVAT');
define('INFO', 'Informace');
//define('_ERROR', 'Error'); //already in main lang file
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%m/%d/%y at %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y at %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y at %I:%M %p');

// lang_meta_album_names
define('RANDOM', 'Nбhodnй obrбzky');
define('LASTUP', 'Nejnovмj№н');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Naposledy aktualizovanб alba');
define('LASTCOM', 'Nejnovмj№н komentбшe');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Nejprohlнѕenмj№н');
define('TOPRATED', 'Nejlйpe hodnocenй');
define('LASTHITS', 'Naposledy zobrazenй');
define('SEARCH', 'Vэsledky hledбnн');
define('FAVPICS', 'Oblнbenй obrбzky');

// lang_errors
define('ACCESS_DENIED', 'Nemбte oprбvnмnн na tuto strбnku');
define('PERM_DENIED', 'Nemбte dostateиnб prбva pro potvrzenн tйto operace.');
define('PARAM_MISSING', 'Skriptu nebyly pшedбny potшebnй parametry');
define('NON_EXIST_AP', 'Vybranй album/obrбzek neexistuje');
define('QUOTA_EXCEEDED', 'Vyиerpal(a) jste mнsto na disku.<br /><br />Va№e kvуta je[quota]K, Va№e obrбzky zbнrajн [space]K, pшidбnнm tohoto obrбzku by jste svoji kvуtu pшekroиil');
define('GD_FILE_TYPE_ERR', 'Pokud pouѕнvбte GD knihovnu jsou podporovбny jen obrбzky JPG a PNG');
define('INVALID_IMAGE', 'Tento obrбzek je po№kozen/poru№en GD knihovna s nнm nemщѕe pracovat.');
define('RESIZE_FAILED', 'Nelze vytvoшit nбhled иi zmen№enэ obrбzek');
define('NO_IMG_TO_DISPLAY', 'Zde nenн obrбzek kterэ by jste si mohl(a) prohlйdnout');
define('NON_EXIST_CAT', 'Vybranб kategorie neexistuje');
define('ORPHAN_CAT', 'Podkategorie nemб nadшнzenou kategorii. Problйm opravte pшes nastavenн kategoriн.');
define('DIRECTORY_RO', 'Do adresбшe \'%s\' nelze zapisovat (nedostateиnб prбva), obrбzky nemohly bэt smazбny.');
define('NON_EXIST_COMMENT', 'Vybranэ komentбш neexistuje');
define('PIC_IN_INVALID_ALBUM', 'Obrбzek(y) je/jsou v neexitujнcнm albu (%s)!?');
define('BANNED', 'Byl jse vykopnut z tмchto strбnek, nenн Vбm umoѕnмno je pouѕнvat.');
define('NOT_WITH_UDB', 'Tato funkce je vypnutб jelikoѕ je integrovбna ve fуru. Buп nenн poѕadovanб fukce dostupnб na tomto systйmu, nebo tuto/tyto funci/e plnн fуrum.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');
define('NO_IMG_TO_APPROVE', 'No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE', 'Pшejнt na seznam galeriн');
define('ALB_LIST_LNK', 'Seznam galeriн');
define('MY_GAL_TITLE', 'Pшejнt do mй osobnн galerie');
define('MY_GAL_LNK', 'Moje galerie');
define('MY_PROF_LNK', 'Mщj Profil');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Do Admin mуdu');
define('ADM_MODE_LNK', 'Admin mуd');
define('USR_MODE_TITLE', 'Do Uѕivatelskйho mуdu');
define('USR_MODE_LNK', 'Uѕivatelskэ mуd');
define('UPLOAD_PIC_TITLE', 'Nahrбt obrбzek do gallerie');
define('UPLOAD_PIC_LNK', 'Upload obrбzku');
define('REGISTER_TITLE', 'Vytvoшit ъиet');
define('REGISTER_LNK', 'Registrovat se');
define('LOGIN_LNK', 'Pшihlбsit');
define('LOGOUT_LNK', 'Odhlбsit');
define('LASTUP_LNK', 'Nejnovмj№н obrбzky');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Poslednн komentбшe');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Nejprohlнѕenмj№н');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Nejlйpe hodnocenй');
define('SEARCH_TITLE', 'Search Photo Collection');
define('SEARCH_LNK', 'Vyhledбvбnн');
define('FAV_TITLE', 'My Favorites');
define('FAV_LNK', 'Oblнbenй');
define('HELP_TITLE', 'HELP');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Potvrzenн uploadu');
define('CONFIG_LNK', 'Nastavenн');
define('ALBUMS_LNK', 'Galerie');
define('CATEGORIES_LNK', 'Kategorie');
define('USERS_LNK', 'Uѕivatelй');
define('GROUPS_LNK', 'Uѕ. skupiny');
define('COMMENTS_LNK', 'Komentбшe');
define('SEARCHNEW_LNK', 'Dбvkovй pшidбnн obrбzkщ');
define('UTIL_LNK', 'Zmмnit velikost obrбzkщ');
define('BAN_LNK', 'Vykopnout uѕivatele');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Vytvoшit / organizovat moje galerie');
define('MODIFYALB_LNK', 'Zmмnit moje galerie');
//define('MY_PROF_LNK', 'Mщj profil');

// lang_cat_list
define('CATEGORY', 'Kategorie');
define('ALBUMS', 'Galerie');
//define('PICTURES', 'Obrбzky');

// lang_album_list
define('ALBUM_ON_PAGE', '%d Galeriн na %d strбnkбch');
// lang_thumb_view
define('DATE', 'DATUM');
define('NAME', 'JMЙNO SOUBORU');
define('TITLE', 'NADPIS');
define('SORT_DA', 'Шadit vzestupnм podle data');
define('SORT_DD', 'Шadit sestupnм podle data');
define('SORT_NA', 'Шadit vzestupnм podle jmйna');
define('SORT_ND', 'Шadit sestupnм podle jmйna');
define('SORT_TA', 'Шadit podle nadpisu vzestupnм');
define('SORT_TD', 'Шadit podle nadpisu sestupnм');
define('PIC_ON_PAGE', '%d obrбzkkщ na %d strбnkбch');
define('USER_ON_PAGE', '%d uѕivatelщ na %d strбnkбch');
define('SORT_RA', 'Sort by rating ascending');
define('SORT_RD', 'Sort by rating descending');
define('THUMB_RATING', 'RATING');
define('SORT_TITLE', 'Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Zpмt na strбnku s nбhledy');
define('PIC_INFO_TITLE', 'Zobraz/skryj informace o obrбzku');
define('SLIDESHOW_TITLE', 'Slideshow');
define('SLIDESHOW_DISABLED', 'e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'Poslat tento obrбzek jako pohlednici');
define('ECARD_DISABLED', 'Pohlednice jsou vypnutй');
define('ECARD_DISABLED_MSG', 'Nemбte dostateиnб prбva pro zaslбnн pohlednice');
define('PREV_TITLE', 'Pшedchozн obrбzek');
define('NEXT_TITLE', 'Dal№н obrбzek');
define('PIC_POS', 'OBRБZEK %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', 'Hodnotit tento obrбzek ');
define('NO_VOTES', '(ѕбdnй hodnocenн)');
define('RATING', '(Aktualnн hodnocenн : %s / z 5, hlasovбno %s krбt)');
define('RUBBISH', 'Hnusnэ');
define('POOR', 'Mizernэ');
define('FAIR', 'Ujde to');
define('GOOD', 'Dobrэ');
define('EXCELLENT', 'Vэbornэ');
define('GREAT', 'Dokonalэ');

// lang_cpg_die
//define('INFORMATION', 'Informace');
//define('ERROR', 'Chyba');
define('_CRITICAL_ERROR', 'Kritickб chyba');
define('FILE', 'Soubor: ');
define('LINE', 'Шбdka: ');

// lang_display_thumbnails
define('FILENAME', 'Jmйno souboru : ');
define('FILESIZE', 'Velikost souboru : ');
define('DIMENSIONS', 'Rozmмry : ');
define('DATE_ADDED', 'Datum pшidбnн : ');

// lang_get_pic_data
define('N_COMMENTS', '%s Komentбш(щ)');
define('N_VIEWS', '%s zobrazenн');
define('N_VOTES', '(%s hlas(щ))');


// lang_albmgr_php
define('ALB_NEED_NAME', 'Galerie musн mнt jmйno');
define('CONFIRM_MODIFS', 'Ste si jist(a) tмmito zmмnami ?');
define('NO_CHANGE', 'Neudмlal(a) jste ѕбdnй zmмny !');
define('NEW_ALBUM', 'Novб galerie');
define('CONFIRM_DELETE1', 'Jste si jist(a), ѕe chcete smazat tuto galerii ?');
define('CONFIRM_DELETE2', '\\nV№echny obrбzky a komentбшe budou smazбny !');
define('SELECT_FIRST', 'Nejprve vyberte galerii');
define('ALB_MRG', 'Sprбvce galeriн');
define('MY_GALLERY', '* Moje galerie *');
define('NO_CATEGORY', '* Nenн kategorie *');
define('DELETE', 'Smazat');
define('NEW', 'Novэ/б');
define('APPLY_MODIFS', 'Potvrdit zmмny');
define('SELECT_CATEGORY', 'Vybrat kategorii');

// lang_catmgr_php
define('MISS_PARAM', 'Parametry potшebnй pro \'%s\'operaci not supplied !');
define('UNKNOWN_CAT', 'Vybranб kategorie v databбzi neexistuje');
define('USERGAL_CAT_RO', 'Nelze smazat uѕivatelskй galerie !');
define('MANAGE_CAT', 'Spravovat kategorie');
define('CONFIRM_DELETE', 'Opravdu chcete SMAZAT tuto kategorii');
//define('CATEGORY', 'Kategorie');
define('OPERATIONS', 'Operace');
define('MOVE_INTO', 'Pшesunout do');
define('UPDATE_CREATE', 'Aktualizovat/Vytvoшit kategorii');
define('PARENT_CAT', 'Nadшazenб kategorie');
define('CAT_TITLE', 'Nadpis kategorie');
define('CAT_DESC', 'Popis kategorie');

// lang_config_php
define('CONFIG_TITLE', 'Nastavenн');
define('RESTORE_CFG', 'Nastavit vэchozн');
define('SAVE_CFG', 'Uloѕit konfiguraci');
define('NOTES', 'Poznбmky');
//define('INFO', 'Informace');
define('UPD_SUCCESS', 'Konfigurace byla zmмnмna');
define('RESTORE_SUCCESS', 'Konfigurace byla nastavena na vэchozн nastavenн');
define('NAME_A', 'Jmйno vzestupnм');
define('NAME_D', 'Jmйno sestupnм');
define('TITLE_A', 'Nadpis vzestupnм');
define('TITLE_D', 'Nadpis sestupnм');
define('DATE_A', 'Datum vzestupnм');
define('DATE_D', 'Datum sestupnм');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Height');
define('TH_WD', 'Width');


// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Vloѕte jmйno a Vб№ komentбш');
define('COM_ADDED', 'Komentбшu pшidбno');
define('ALB_NEED_TITLE', 'Prosнm, dejte galerii nadpis !');
define('NO_UDP_NEEDED', 'Aktualizace nenн tшeba.');
define('ALB_UPDATED', 'Galerie aktualizovбna');
define('UNKNOWN_ALBUM', 'Vybranй album neexistuje nebo nemбte prбva pro upload do tohoto alba');
define('NO_PIC_UPLOADED', 'Obrбzek nebyl uploadovбn!<br /><br />zkontrolujte zda server podporuje upload souborщ, иi zda jste opravdu zadal(a) obrбzek k uploadu...');
define('ERR_MKDIR', '  ERROR: Chyba pшi vytvбшenн adresбшe (nebyl vytvoшen) %s !');
define('DEST_DIR_RO', 'Do cнlovйho adresбшe %s nemщѕe skript zapisovat (zkontrolujte prбva) !');
define('ERR_MOVE', 'Nelze pшesunout %s do %s !');
define('ERR_FSIZE_TOO_LARGE', 'Rozmмry obrбzku, kterэ se snaѕнte uploadovat, jsou pшнli№ velkй (max. velikost je %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Velikost souboru, kterэ se snaѕнte uploadovat, je pшнli№ velkб (max. velikost je %s KB) !');
define('ERR_INVALID_IMG', 'Soubor kterэ jste nahrбl(a) na server nenн validnнm obrбzkem !');
define('ALLOWED_IMG_TYPES', 'Mщѕete uploadovat pouze obrбzky %s .');
define('ERR_INSERT_PIC', 'Obrбzek \'%s\' nelze vloѕit do galerie ');
define('UPLOAD_SUCCESS', 'Vб№ obrбzek byl nahrбn na server bez problйmщ<br /><br />Bude viditelnэ po schvбlenн adminem.');
//define('INFO', 'Informace');
define('ERR_COMMENT_EMPTY', 'Vб№ komentбш je prбzdnэ !');
define('ERR_INVALID_FEXT', 'Pouze soubory s nбsledujнcнmi koncovkami jsou podporovanй : <br /><br />%s.');
define('NO_FLOOD', 'Jste autor poslednнho komentбшe k tomuto obrбzku<br /><br />Pokud ho chcete zmмnit pouѕijte volbu upravit ');
define('REDIRECT_MSG', 'Prбvм jste pшesmмrovбvбn(a).<br /><br /><br />Kliknмte na \'POKRAИOVAT\' pokud se strбnka nepшesmмruje sama');
define('UPL_SUCCESS', 'Vб№ obrбzek byl v poшбdku pшidбn');

// lang_delete_php
define('CAPTION', 'Legenda(popisek)');
define('FS_PIC', 'pщvodnн velikost obrбzku');
define('DEL_SUCCESS', 'bezchybnм smazбno');
define('NS_PIC', 'normбlnн velikost obrбzku');
define('ERR_DEL', 'nelze smazat');
define('THUMB_PIC', 'nбhled');
//define('COMMENT', 'komentбш');
define('IM_IN_ALB', 'patшн do galerie');
define('ALB_DEL_SUCCESS', 'Galerie \'%s\' smazбna');
define('ALB_MGR', 'Sprбvce galeriн');
define('ERR_INVALID_DATA', 'Obdrѕena chybnб data \'%s\'');
define('CREATE_ALB', 'Vytvбшнm galerii \'%s\'');
define('UPDATE_ALB', 'Aktualizuji galerii \'%s\' s nadpisem \'%s\' a seznamem \'%s\'');
define('DEL_PIC', 'Smazat obrбzek');
define('DEL_ALB', 'Smazat galerii');
define('DEL_USER', 'Smazat uѕivatele');
//define('ERR_UNKNOWN_USER', 'Vybranэ uѕivatel neexistuje !');
define('COMMENT_DELETED', 'Komentбш bezchybnм smazбn ! ');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'Jste si jist, ѕe chcete smazat tento obrбzek ? \\nPшiloѕenй komentбшe budou straceny.');
define('DEL_THIS_PIC', 'SMAZAT TENTO OBRБZEK');
define('SIZE', '%s x %s pixelelщ');
define('VIEWS', '%s krбt');
define('SLIDESHOW', 'Slideshow');
define('STOP_SLIDESHOW', 'ZASTAVIT SLIDESHOW');
define('VIEW_FS', 'kliknмte pro zobrazenн pщvodnнho obrбzku');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('PIC_INF_TITLE', 'Informace o obrбzku');
define('PIC_INF_FILENAME', 'Jmйno souboru');
define('ALBUM NAME', 'Jmйno galerie');
define('PIC_INFO_RATING', 'Hodnocenн (%s hlas(щ))');
define('KEYWORDS', 'Klниovб slova');
define('PIC_INF_FILE_SIZE', 'Velikost souboru');
define('PIC_INF_DIMENSIONS', 'Rozmмry');
define('DISPLAYED', 'Zobrazeno');
define('CAMERA', 'Fotoaparбt');
define('DATE_TAKEN', 'Datum poшнzenн snнmku');
define('APERTURE', 'Clona');
define('EXPOSURE_TIME', 'Expoziиnн иas');
define('FOCAL_LENGTH', 'Ohniskovб vzdбlenost');
define('COMMENT', 'Komentбшe');
define('ADDFAV', 'Pшidat k oblнbenэm');
define('ADDFAVPHRASE', 'Oblнbenй');
define('REMFAV', 'Odstranit z oblнbenэch');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');
define('REMOVEFAV', 'Removed from Favorites Album');
define('ADDEDTOFAV', 'Added to Favorites Album');

// lang_display_comments
define('OK', 'OK');
define('COM_EDIT_TITLE', 'Upravit tento komentбш');
define('CONFIRM_DELETE_COM', 'Jste si jist(a), ѕe chcete smazat tento komentбш ?');
define('ADD_YOUR_COMMENT', 'Pшidat komentбш');
define('COM_NAME', 'Jmйno');
//define('COMMENT', 'Komentбш');
define('YOUR_NAME', 'Anonym');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Kliknutнm na obrбzek zavшete okno');

// lang_ecard_php
define('E_TITLE', 'Poslat pohlednici');
define('INVALID_EMAIL', '<b>Varovбnн</b> : neplatnб emailovб adresa !');
define('E_ECARD_TITLE', 'Pohlednice ze serveru %s pro vбs/tebe');
define('VIEW_ECARD', 'Pokud se pohlednice nezobrazila klikni na link');
define('VIEW_MORE_PICS', 'Klikni pro dal№н obrбzky !');
define('SEND_SUCCESS', 'Va№e pohlednice byla odeslбna');
define('SEND_FAILED', 'Omlouvбme se, ale server nebyl schopen odeslat Va№н pohlednici zkuste to znovu za chvнli...');
define('FROM', 'Od');
define('_YOUR_NAME', 'Va№e jmйno');
define('YOUR_EMAIL', 'Vб№ email');
define('TO', 'Komu');
define('RCPT_NAME', 'Jmйno pшнjemce');
define('RCPT_EMAIL', 'Doruиit na email');
define('GREETINGS', 'Pozdrav/oslovenн');
define('MESSAGE', 'Zprбva');
define('ECARD_LINK_CORRUPT', 'Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser'); //NEW

// lang_editpics_php
define('PIC_INFO', 'Info&nbsp;o obrбzku');
define('ALBUM', 'Galerie');
define('EDIT_TITLE', 'Nadpis');
define('DESC', 'Popis');
//define('KEYWORDS', 'Klниovб slova');
define('PIC_INFO_STR', '%sx%s - %sKB - %s zobrazenн - %s hlas(щ)');
define('APPROVE', 'Schvбlit obrбzek');
define('POSTPONE_APP', 'Odloѕit schvбlenн');
//define('DEL_PIC', 'Smazat obrбzek');
define('READ_EXIF', 'Read EXIF info again');
define('RESET_VIEW_COUNT', 'Vynulovat poинtadlo zobrazenн');
define('RESET_VOTES', 'Vynulovat hlasy');
define('DEL_COMM', 'Smazat komentбшe');
define('UPL_APPROVAL', 'Potvrzenн uploadu');
define('EDIT_PICS', 'Upravit obrбzky');
define('SEE_NEXT', 'Zobrazit dal№н obrбzky');
define('SEE_PREV', 'Zobrazit pшedchozн obrбzky');
define('N_PIC', '%s obrбzkщ');
define('N_OF_PIC_TO_DISP', 'Poиet obrбzku k zobrazenн');
define('APPLY', 'Uloѕit zmмny');

// lang_groupmgr_php
define('GROUP_NAME', 'Jmйno skupiny');
define('DISK_QUOTA', 'Diskovб kvуta');
define('CAN_RATE', 'Mohou hodnotit obrбzky');
define('CAN_SEND_ECARDS', 'mohou posнlat pohlednice');
define('CAN_POST_COM', 'Mohou posнlat komentбшe');
define('CAN_UPLOAD', 'Mohou nahrбvat obrбzky');
define('CAN_HAVE_GALLERY', 'Mohou mнt osobnн galerii');
//define('APPLY', 'Uloѕit zmмny');
define('CREATE_NEW_GROUP', 'Vytvoшit novou skupinu');
define('DEL_GROUPS', 'Smazat vybranй skupiny');
define('CONFIRM_DEL', 'Pokud smaѕete tuto skupinu v№ichni uѕivatelй, patшнcн do tйto skupiny budou pшesunuti do skupiny \'Registered\' !\\n\\nPшejete si pokraиovat ?');
define('GROUP_TITLE', 'Spravovat uѕivatelskй skupiny');
define('APPROVAL_1', 'Potvrzenн veшejnйho. Upl. (1)');
define('APPROVAL_2', 'Potvrzenн soukromйho. Upl. (2)');
define('NOTE1', '<b>(1)</b> Upload do veшejnэch galeriн vyѕaduje potvrzenн adminem');
define('NOTE2', '<b>(2)</b> Upload do galerie patшнcн uѕivateli vyѕaduje potvrzenн adminem');
//define('NOTES', 'Poznбmky');

// lang_index_php
define('WELCOME', 'Welcome !');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'Jste si jist(a), ѕe chcete smazat tuto galerii? \\nV№echny obrбzky a komentбшe pщjdou do pekla taky. Pшejete si pokraиovat.');
//define('DELETE', 'DELETE');
define('MODIFY', 'VLASTNOSTI');
//define('EDIT_PICS', 'EDIT PICS');

// lang_list_categories
define('HOME', 'Domщ');
define('STAT1', '<b>[pictures]</b> obrбzky v <b>[albums]</b> glalerii <b>[cat]</b>v kategorii s <b>[comments]</b> komentбшi zobrazeno <b>[views]</b> krбt');
define('STAT2', '<b>[pictures]</b> obrбzky v <b>[albums]</b> galerii zobrazeno <b>[views]</b> krбt');
define('XX_S_GALLERY', '%s\' Galerie');
define('STAT3', '<b>[pictures]</b> obrбzkщ v <b>[albums]</b> galserii s <b>[comments]</b> komentбшi zobrazeno <b>[views]</b> krбt');

// lang_list_users
define('USER_LIST', 'Seznam uѕivatelщ');
define('NO_USER_GAL', 'Nejsou ѕбdnй uѕivatelskй alerie');
define('N_ALBUMS', '%s galeriн');
define('N_PICS', '%s obrбzkщ');

// lang_list_albums
define('N_PICTURES', '%s obrбzkщ');
define('LAST_ADDED', ', poslednн pшidбn %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Aktualizovat album %s');
define('GENERAL_SETTINGS', 'Zбkladnн nastavenн');
define('ALB_TITLE', 'Nadpis galerie');
define('ALB_CAT', 'Kategorie galerie');
define('ALB_DESC', 'Popis galerie');
define('ALB_THUMB', 'Nбhled reprezentujнcн album');
define('ALB_PERM', 'Pшнstupovб prбva pro tuto galerii');
define('CAN_VIEW', 'Album mщѕou prohlнѕet');
define('MOD_CAN_UPLOAD', 'Nбv№tмvnнci smмjн pшidбvat obrбzky');
define('CAN_POST_COMMENTS', 'Povolit komentбшe');
define('MOD_CAN_RATE', 'Nбv№tмvnнci mohou hlasovat');
define('USER_GAL', 'User Gallery');
define('NO_CAT', '* Nenн kategorie *');
define('ALB_EMPTY', 'Galerie je prбzdnб');
define('LAST_UPLOADED', 'Nejnovмj№н obrбzek');
define('PUBLIC_ALB', 'kdokoliv (veшejnб galerie)');
define('ME_ONLY', 'Pouze jб');
define('OWNER_ONLY', 'Pouze vlastnнk (%s)');
define('GROUPP_ONLY', 'Иlenovй skupiny \'%s\'');
define('ERR_NO_ALB_TO_MODIFY', 'Album nelze modifikovat v databбzi.');
define('UPDATE', 'Aktualizovat album');

// lang_rate_pic_php
define('ALREADY_RATED', 'Tento obбzek jste jiѕ hodnotil(a)');
define('RATE_OK', 'Vбs hlas byl pшijat. Dмkujeme.');

// lang_register_php
define('USERNAME', 'Jmйno');
define('GROUP', 'Skupina');
define('DISK_USAGE', 'Vyuѕitн disku');
define('X_S_PROFILE', '%s\' profil');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Kontrola komentбшщ');
define('NO_COMMENT', 'Zde nejsou komentбшe ke kontrole');
define('N_COMM_DEL', '%s komentбш(щ) smazбn(o)');
define('N_COMM_DISP', 'Poиet komentбшщ k zobrazenн');
define('R_SEE_PREV', 'Pшedchozн');
define('R_SEE_NEXT', 'Dal№н');
define('R_DEL_COMM', 'Smazat vybranй komentбшe');

// lang_search_php
define('S_SEARCH', 'Prohledбvat obrбzky');

// lang_search_new_php
define('PAGE_TITLE', 'Najнt novй obrбzky');
define('SELECT_DIR', 'Vybrat adresбш');
define('SELECT_DIR_MSG', 'Tato funkce vбm umoѕnн dбvkovм zpracovat obrбzky nahranй pшes FTP.<br /><br />Vyberte adresбш kde se nachбzejн obrбzky k spracovбnн');
define('NO_PIC_TO_ADD', 'Nejsou zde ѕбdnй obrбzky k pшidбnн');
define('NEED_ONE_ALBUM', 'Poшebujete mнt vytvoшenu alespoт jednu galerii');
define('WARNING', 'Varovбnн');
define('CHANGE_PERM', 'Skript nemщѕe zapisovat do tohoto adresбшe, musнte ho nastavit na CHMOD 755 nebo 777 pшed pшidбnнm obrбzkщ !');
define('TARGET_ALBUM', '<b>Vloѕit obrбzky z &quot;</b>%s<b>&quot; do </b>%s');
define('FOLDER', 'Sloѕka');
define('IMAGE', 'Obrбzek');
//define('ALBUM', 'Galerie');
define('RESULT', 'Vэsledek');
define('DIR_RO', 'Nezapisovatelnб. ');
define('DIR_CANT_READ', 'Neиitelnб. ');
define('INSERT', 'Pшidбvбm novй obrбzky do galerie');
define('LIST_NEW_PIC', 'Seznam obrбzkщ');
define('INSERT_SELECTED', 'Vloѕit vybranй obrбzky');
define('NO_PIC_FOUND', 'Novй obrбzky nenalezeny');
define('BE_PATIENT', 'Prosнm buпte trpмlivэ(б), program potшebuje na zpracovбnн obrбzku nмjaэ ten иas.');
define('SN_NOTES', '<ul><li><b>OK</b> : Tyto obrбzky byly pшidбny<li><b>DP</b> : Zdvojenн!, Tento obrбzek ji existuje<li><b>PB</b> : tento obrбzek nelze pшidat, skontrolujte konfiguraci pшнpadnм pшнstupovб prбva<li>Kdyѕ se neukбѕe \'oznaиenн\' OK, DP, PB klepnмte na obrбzek a uvidнte chybovou hlб№ku generovanou PHP, kterб Vбm pomщѕe zjistit pшниinu problйmu<li>Pokud dojde k timeoutu F5 nebo reload strбnky by mмl pomoci</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('UP_TITLE', 'Uploadnout obrбzek');
define('MAX_FSIZE', 'Max. velikost souboru je %s KB');
//define('ALBUM', 'Galerie');
define('PICTURE', 'Obrбzek');
define('PIC_TITLE', 'Nadpis obrбzku');
define('DESCRIPTION', 'Popis obrбzku');
define('UP_KEYWORDS', 'Klниovб slova (oddмlenб mezerou)');
define('ERR_NO_ALB_UPLOADABLES', 'Zde se nenalйzб galerie do kterй je povolen upload.');

// lang_usermgr_php
define('U_TITLE', 'Spravovat uѕivatele');
//define('NAME_A', 'Jmйno vzestup.');
//define('NAME_D', 'Jmйno sestup.');
define('GROUP_A', 'Skupina vzestup.');
define('GROUP_D', 'Skupina sestup.');
define('REG_A', 'Datum registrace vzestup.');
define('REG_D', 'Datum registrace sestup.');
define('PIC_A', 'Poиet obrбzkщ vzestup.');
define('PIC_D', 'Poиet obrбzkщ sestup.');
define('DISKU_A', 'Vyuѕitн disku vzestup.');
define('DISKU_D', 'Vyuѕitн disku sestup.');
define('SORT_BY', 'Шadit uѕшivatele podle');
define('ERR_NO_USERS', 'Tabulka uѕivatelщ je prбzdnб!');
define('ERR_EDIT_SELF', 'Zde nelze editovat vlastnн profil pouѕijte pшнslu№nou volbu pracujнcн s va№нm profilem');
define('EDIT', 'UPRAVIT');
//define('DELETE', 'SMAZAT');
define('U_NAME', 'Uѕiv. jmйno');
//define('GROUP', 'Skupina Uѕiv.');
define('INACTIVE', 'Neaktivnн');
//define('OPERATIONS', 'Operace');
define('PICTURES', 'Obrбzky');
define('DISK_SPACE', 'Mнsto vyuѕitй / kvуta');
define('REGISTERED_ON', 'Registrovбn');
define('U_USER_ON_P_PAGES', '%d uѕivatelщ na %d strбnkбch');
define('USER_CONFIRM_DEL', 'Jste si jist(a), ѕe chcete smazat tohoto uѕivatele ? \\nV№echny jeho obrбzky, galerie a komentбшe budou smazбny.');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'Vybranэ uѕiv. neexistuje !');
define('MODIFY_USER', 'Zmмnit uѕiv.');
//define('NOTES', 'Poznбmky');
define('NOTE_LIST', '<li>Pokud nechcete zmмnit heslo ponechte polниko pro heslo prбzdnй');
define('PASSWORD', 'Heslo');
define('USER_ACTIVE_CP', 'Uѕiv. je aktivnн');
define('USER_GROUP_CP', 'Uѕiv. Skupina');
define('USER_EMAIL', 'Uѕiv. emaill');
define('USER_WEB_SITE', 'Uѕiv. domбcн strбnka');
define('CREATE_NEW_USER', 'Vytvoшit novйho uѕivatle.');
define('USER_LOCATION', 'Mнsto Uѕiv. (napш. Praha apod.)');
define('USER_INTERESTS', 'Uѕiv. zбjmy');
define('USER_OCC', 'Uѕiv. povolбnн');

// lang_util_php
define('UTIL_TITLE', 'Zmмnit velikost obrбzku');
define('WHAT_IT_DOES', 'Co to dмlб?');
define('WHAT_UPDATE_TITLES', 'Aktualizovat nadpisy podle jmйna souborщ');
define('WHAT_DELETE_TITLE', 'Smazat nadpisy');
define('WHAT_REBUILD', 'Pшedмlat nahledy a zmмnмnй obrбzky');
define('WHAT_DELETE_ORIGINALS', 'Smazat originбly a nahradit je stшednнmi obrбzky');
define('U_FILE', 'Soubor');
define('TITLE_SET_TO', 'Nastavit nadpis na');
define('SUBMIT_FORM', 'odeslat');
define('UPDATED_SUCCESFULLY', 'Aktualizace probмhla OK');
define('ERROR_CREATE', 'CHYBA pшi vytvбшenн');
define('CONTIN', 'Zpracovatvнce obrбzkщ');
define('MAIN_SUCCESS', 'Skoubor %s byl uspм№nм pouѕit jako hlavnн obrбzek');
define('ERROR_RENAME', 'Chyba pшejmenovбnн %s na %s');
define('ERROR_NOT_FOUND', 'Soubor %s nebyl nalezen');
define('U_BACK', 'zpмt na halvnн');
define('THUMBS_WAIT', 'Aktualizuji nбhledy a/nebo stшednн obrбzky, prosнm иekejte...');
define('THUMBS_CONTINUE_WAIT', 'Pokraиuji v aktualizaci nбhledщ a/nebo stшednнch obrбzkщ...');
define('TITLES_WAIT', 'Aktualizuji nadpisy, prosнm иekejte...');
define('DELETE_WAIT', 'Maѕu nadpisy, prosнm иekejte...');
define('REPLACE_WAIT', 'Maѕu originбly a nahrazuji je stшednнmi obrбzky, prosнm иekejte...');
define('INSTRUCTION', 'Rychlй instrukce');
define('INSTRUCTION_ACTION', 'Vyberte akci');
define('INSTRUCTION_PARAMETER', 'Nastavit parametry');
define('INSTRUCTION_ALBUM', 'Vybrat galerii');
define('INSTRUCTION_PRESS', 'Stisknмte %s');
define('U_UPDATE', 'Aktualizovat nбhledy a/nebo stшednн obrбzky');
define('UPDATE_WHAT', 'Co mб bэt aktualizovбno');
define('UPDATE_THUMB', 'Jen nбhledy');
define('UPDATE_PIC', 'Pouze stшednн obrбzky');
define('UPDATE_BOTH', 'Obojн nбhledy i stшednн obrбzky');
define('UPDATE_NUMBER', 'Poиet obrбzkщ, kterй zpracovat na 1 kliknutн');
define('UPDATE_OPTION', '(Sniѕte инslo pokud mбte problйmy s timeoutem)');
define('FILENAME_TITLE', 'Jmйno souboru ? Nadpis obrбzku');
define('FILENAME_HOW', 'Jak se mб zmмnit jmйno obrбzku?');
define('FILENAME_REMOVE', 'Odstranit .jpg koncovku a pшepsat _ (podtrѕнtka mezerami)');
define('FILENAME_EURO', 'Zmмnit 2003_11_23_13_20_20.jpg na 23/11/2003 13:20');
define('FILENAME_US', 'Zmмnit 2003_11_23_13_20_20.jpg na 11/23/2003 13:20');
define('FILENAME_TIME', 'Zmмnit 2003_11_23_13_20_20.jpg na 13:20');
define('UT_DELETE', 'Smazat nadpisy obrбzkщ nebo originбlnн obrбzky');
define('DELETE_TITLE', 'Smazat nadpisy obrбzkщ');
define('DELETE_ORIGINAL', 'Smazat originбlnн obrбzky');
define('DELETE_REPLACE', 'Smazat originбly a nahradit je stшednн verzн obrбzkщ');
//define('SELECT_ALBUM', 'Vybrat galerii');

// lang_pagetitle_php
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
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
$lang_byte_units = array('Bytщ','KB','MB',);
// Day of weeks and months
$lang_day_of_week = array('Ne','Po','Ъt','St','Иt','Pб','So',);
$lang_month = array('Leden','Ъnor','Bшezen','Duben','Kvмten','Иerven','Иervenec','Srpen','Zбшн','Шнjen','Listopad','Prosinec',);
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
    'title' => 'Nastavenн',
    'restore_cfg' => 'Nastavit vэchozн',
    'save_cfg' => 'Uloѕit konfiguraci',
    'notes' => 'Poznбmky',
    'info' => 'Informace',
    'upd_success' => 'Konfigurace byla zmмnмna',
    'restore_success' => 'Konfigurace byla nastavena na vэchozн nastavenн',
    'name_a' => 'Jmйno vzestupnм',
    'name_d' => 'Jmйno sestupnм',
    'title_a' => 'Nadpis vzestupnм',
    'title_d' => 'Nadpis sestupnм',
    'date_a' => 'Datum vzestupnм',
    'date_d' => 'Datum sestupnм',    
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
    array('Jméno gallerie', 'gallery_name', 0),
    array('Popis Galerie', 'gallery_description', 0),
    array('Email administrátora galerie', 'gallery_admin_email', 0),
    array('Address to nuke folder ie http://example.com/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
    array('Témátko', 'theme', 6),
    array('Page Specific Titles instead of >Coppermine', 'nice_titles', 1),
//'Album list view',
    'Nastavení zobrazení',
    array('©íøka hlavní tabulky v (pixelech nebo %)', 'main_table_width', 0),
    array('Poèet úrovní subkategorií', 'subcat_level', 0),
    array('Poèet galerií na stránku', 'albums_per_page', 0),
    array('Poèet sloupcù v pøehledu galerií', 'album_list_cols', 0),
    array('Velikost náhledù v pixelech', 'alb_list_thumb_size', 0),
    array('Obsah hlavní stránky', 'main_page_layout', 0),
    array('Ukazovat v kategoriích náhledy galerií první úrovnì', 'first_level', 1), 
//'Thumbnail view',
    'Zobrazení náhledù',
    array('Poèet sloupcù na stránku', 'thumbcols', 0),
    array('Poèet øádkù na stránku', 'thumbrows', 0),
    array('Maximální mno¾ství zálo¾ek', 'max_tabs', 0),
    array('Zobrazit legendu obrázku pod náhledem', 'caption_in_thumbview', 1),
    array('Zobrazit poèet komentáøù pod náhldem', 'display_comment_count', 1),
    array('Základní øazení náhledù', 'default_sort_order', 3),
    array('Min. poèet hlasù potøebný k zaøazení do seznamu \'Nejlépe hodnocené\' ', 'min_votes_for_rating', 0),
    array('Alts and title tags of thumbnail show title and keyword instead of picinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
//'Display Image &amp; Comment settings',
    'Zobrazení obrázkù &amp; Nastavení komentáøù',
    array('©íøka tabulky pro zobrazení obrázku (v pixelech nebo %)', 'picture_table_width', 0),
    array('V¾dy zobrazit podrobné info', 'display_pic_info', 1),
    array('CENZUROVAT slova v komentáøích', 'filter_bad_words', 1),
    array('Povilit smajlíky v komentáøích', 'enable_smilies', 1),
    array('Allow several consecutive comments on one pic from the same user', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
    array('Email site admin upon comment submission' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
    array('Maximální dálka popisu obrázku', 'max_img_desc_length', 0),
    array('Maximální délka slova v komentáøi', 'max_com_wlength', 0),
    array('Maximální mno¾ství øádkù v komentáøi', 'max_com_lines', 0),
    array('Maximální délka komentáøe', 'max_com_size', 0),
    array('Ukázat filmový prou¾ek', 'display_film_strip', 1),
    array('Poèet polo¾ek ve filmovém prou¾ku', 'max_film_strip_items', 0),
    array('Allow viewing of full size pic by anonymous', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
    array('Number of days between being able to vote on the same image','keep_votes_time',0), // new in cpg1.2.2c nuke
    array('Show fullsize picture in slideshow','fullsize_slideshow',1),
    array('Show blocks on the right of displayimage if right blocks are on at module level?', 'right_blocks', 1), // new 1.2.2
// 'Pictures and thumbnails settings',
    'Obrázky a nastavení náhledù',
    array('Kvalita souborù JPEG', 'jpeg_qual', 0),
    array('Place watermark on image', 'watermark', 1),
    array('Maximální rozmìry náhledu <b>*</b>', 'thumb_width', 0),
    array('Use dimension ( width or height or Max aspect for thumbnail )<b>*</b>', 'thumb_use', 7),
    array('Vytvoøit støední obrázek', 'make_intermediate', 1),
    array('Maximální ¹íøka nebo vý¹ka støeního obrázku <b>*</b>', 'picture_width', 0),
    array('Maximální velikost uploadovaných obrázkù (KB)', 'max_upl_size', 0),
    array('Maximální rozmìry uploadovaných obrázkù (v pixelech)', 'max_upl_width_height', 0), 
    array('Allow multiple Files to be upload with same file name', 'samename', 1), 
//'User settings',
    'Nastavení u¾ivatelù',
    array('Allow new user registrations', 'allow_user_registration', 1),
/*
    array('User registration requires email verification', 'reg_requires_valid_email', 1),
    array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),*/
*/
    array('Mají mít u¾ivatelé vlastní galerii?', 'allow_private_albums', 1),
    array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',
    'Custom fields for image description (leave blank if unused)',
    array('Jméno polo¾ky 1', 'user_field1_name', 0),
    array('Jméno polo¾ky 2', 'user_field2_name', 0),
    array('Jméno polo¾ky 3', 'user_field3_name', 0),
    array('Jméno polo¾ky 4', 'user_field4_name', 0), 
     // 'Pictures and thumbnails advanced settings',
    'Obrázky a náhledy roz¹íøené nastavení',
    array('Zobrazit ikonu zamknuté galerie nepøihlá¹enému u¾ivateli.', 'show_private', 1),
    array('Znaky zakázané v názvech souborù', 'forbiden_fname_char', 0),
    array('Povolené koncovky uploadovaných souborù', 'allowed_file_extensions', 0),
    array('Metoda zmìny velikosti obrázkù', 'thumb_method', 2),
    array('Cesta k ImageMagicu / netpbm  (pøíklad /usr/bin/X11/)', 'impath', 0),
    array('Povolené typy obrázkù (pouze pro ImageMagic)', 'allowed_img_types', 0),
    array('Parametry pro ImageMagic', 'im_options', 0),
    array('Èíst EXIF data ze souborù JPEG', 'read_exif_data', 1),
    array('Read IPTC data in JPEG files', 'read_iptc_data', 1), // new in cpg1.2.0nuke
    array('Adresáø pro galerie <b>*</b>', 'fullpath', 0),
    array('Adresáø pro galerie u¾ivatelù <b>*</b>', 'userpics', 0),
    array('Prefix pro støednì velké obrázky <b>*</b>', 'normal_pfx', 0),
    array('Prefix pro náhledy <b>*</b>', 'thumb_pfx', 0),
    array('Picinfo display filename', 'picinfo_display_filename', 1), 
    array('Picinfo display album name', 'picinfo_display_album_name', 1), 
    array('Picinfo display_file_size', 'picinfo_display_file_size', 1), 
    array('Picinfo display_dimensions', 'picinfo_display_dimensions', 1), 
    array('Picinfo display_count_displayed', 'picinfo_display_count_displayed', 1), 
    array('Picinfo display_URL', 'picinfo_display_URL', 1), 
    array('Picinfo display URL as bookmark link', 'picinfo_display_URL_bookmark', 1), 
    array('Picinfo display fav album link', 'picinfo_display_favorites', 1), 
//    'Cookies &amp; Charset settings',
    'Cookies &amp; Kódová stráka',
    array('Jméno cookies u¾ívané programem (expertní volba)', 'cookie_name', 0),
    array('Cesta pro cookies u¾ívaná programem (expertní volba)', 'cookie_path', 0),
//    'Miscellaneous settings',
        'Dal¹í nastavení',
    array('Zapnour debug mód (jen pro testování)', 'debug_mode', 1),
    '<br /><div align="center">(*) Fields marked with * must not be changed if you already have pictures in your gallery</div><br />'
    );
// end left side interpretation