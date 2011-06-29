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
  $Source: /cvs/l10n/hungarian/coppermine.php,v $
  $Revision: 9.6 $
  $Author: nanocaiordo $
  $Date: 2006/02/25 01:43:31 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Views');//new in 1.2.2nuke
define('PIC_VOTES', 'Votes');//new in 1.2.2nuke
define('PIC_COMMENTS', 'Comments');//new in 1.2.2nuke

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Hungarian');
define('LANG_NAME_NATIVE', 'Magyar');
define('LANG_COUNTRY_CODE', 'hu');
define('TRANS_NAME', 'Peter Ardo');
define('TRANS_EMAIL', 'petardo@freemail.hu');
define('TRANS_WEBSITE', '');
define('TRANS_DATE', '2003-10-20');
define('CHARSET', 'utf-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Igen');
define('NO', 'Nem');
// some common strings
define('BACK', 'VISSZA');
define('CONTINU', 'TOVÁBB');
define('INFO', 'Információ');
//define('ERROR', 'Hiba');
define('ALBUM_DATE_FMT', '%Y %B %d');
define('LASTCOM_DATE_FMT', '%y.%m.%d %H:%M');
define('LASTUP_DATE_FMT', '%Y %B %d');
define('REGISTER_DATE_FMT', '%Y %B %d');
define('LASTHIT_DATE_FMT', '%Y %B %d %H:%M');
define('COMMENT_DATE_FMT', '%Y %B %d %H:%M');

// lang_meta_album_names
define('RANDOM', 'Véletlen képlista');
define('LASTUP', 'Friss feltöltések');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Utoljára módosított albumok');
define('LASTCOM', 'Friss hozzászólások');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Legtöbbször nézett');
define('TOPRATED', 'Legtöbb szavazat');
define('LASTHITS', 'Utoljára nézett');
define('SEARCH', 'Keresés eredménye');
define('FAVPICS', 'Kedvenc képeim');

// lang_errors
define('ACCESS_DENIED', 'Nincs jogosultságod ennek az oldalnak a megtekintéséhez.');
define('PERM_DENIED', 'Nincs jogosultságod ennek a műveletnek az elvégzéséhez.');
define('PARAM_MISSING', 'Szkript hívás a szüksége paraméter(ek) megadása nélkül.');
define('NON_EXIST_AP', 'A kijelölt album / kép nem található!');
define('QUOTA_EXCEEDED', 'Diszk kvóta túllépve<br /><br />A beállított diszkkvóta [quota]K, a képeid által jelenleg elfoglalt tárhely [space]K, ennek a képnek a feltöltésével túllépnéd a kvótáját.');
define('GD_FILE_TYPE_ERR', 'GD könyvtár használata esetén csak JPEG és PNG típusok megengedettek.');
define('INVALID_IMAGE', 'A feltöltött kép sérült, vagy a GD könyvtár által nem kezelhető');
define('RESIZE_FAILED', 'Nem sikerült az ikonizált vagy átméretezett képek generálása.');
define('NO_IMG_TO_DISPLAY', 'Nincs megjeleníthető kép');
define('NON_EXIST_CAT', 'A kijelölt kategória nem létezik');
define('ORPHAN_CAT', 'A kategória szülőkategóriája nem létezik, futtasd a kategóriamenedzsert a probléma kiküszöbölésére.');
define('DIRECTORY_RO', 'A \'%s\' könyvtár nem írható, a képeket nem lehet törölni');
define('NON_EXIST_COMMENT', 'A kijelölt hozzászólás nem létezik.');
define('PIC_IN_INVALID_ALBUM', 'Kép nem létező albumban (%s)!?');
define('BANNED', 'Jelenleg ki vagy tiltva a weblap használatából.');
define('NOT_WITH_UDB', 'Ez a funkció le van tiltva a Coppermine-ban, mivel a fórum sw része. A kért funkciót vagy nem támogatja a jelen konfiguráció, vagy a fórum sw kezeli.');
define('MEMBERS_ONLY', 'Ez a funkció csak tagoknak érhető el.');
define('MUSTBE_GOD', 'Ez a funkció csak adminisztrátoroknak érhető el');
define('NO_IMG_TO_APPROVE', 'Nincs kép megadva');

// lang_main_menu
define('ALB_LIST_TITLE', 'Ugrás az albumlistára');
define('ALB_LIST_LNK', 'Albumlista');
define('MY_GAL_TITLE', 'Ugrás a személyes képtárra');
define('MY_GAL_LNK', 'Én képtáram');
define('MY_PROF_LNK', 'Én profilom');
define('MY_PROF_TITLE','Ellenőrizd a diszkterület méretét és a csoport');
define('ADM_MODE_TITLE', 'Váltás adminisztrátor módra');
define('ADM_MODE_LNK', 'Adminisztrátor mód');
define('USR_MODE_TITLE', 'Váltás felhasználó módra');
define('USR_MODE_LNK', 'Felhasználó mód');
define('UPLOAD_PIC_TITLE', 'Kép feltöltés az albumba');
define('UPLOAD_PIC_LNK', 'Kép feltöltése');
define('REGISTER_TITLE', 'Felhasználó hozzáadása');
define('REGISTER_LNK', 'Regisztráció');
define('LOGIN_LNK', 'Bejelentkezés');
define('LOGOUT_LNK', 'Kijelentkezés');
define('LASTUP_LNK', 'Friss feltöltések');
define('LASTUP_TITLE', 'Friss feltöltések');
define('LASTCOM_TITLE',  'Friss hozzászólások');
define('LASTCOM_LNK',  'Friss hozzászólások');
define('TOPN_TITLE', 'Legtöbbször nézett');
define('TOPN_LNK', 'Legtöbbször nézett');
define('TOPRATED_TITLE', 'Legtöbb szavazat');
define('TOPRATED_LNK',  'Legtöbb szavazat');
define('SEARCH_TITLE', 'Keresés');
define('SEARCH_LNK', 'Keresés');
define('FAV_TITLE', 'Kedvencek');
define('FAV_LNK', 'Kedvencek');
define('HELP_TITLE', 'HELP');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Feltöltés jóváhagyás');
define('CONFIG_LNK', 'Konfiguráció');
define('ALBUMS_LNK', 'Albumok');
define('CATEGORIES_LNK', 'Kategóriák');
define('USERS_LNK', 'Felhasználók');
define('GROUPS_LNK', 'Csoportok');
define('COMMENTS_LNK', 'Hozzászólások');
define('SEARCHNEW_LNK', 'Kötegelt feltöltés');
define('UTIL_LNK', 'Képek átméretezése');
define('BAN_LNK', 'Felhasználók kitiltása');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Személyes albumok szerkesztése');
define('MODIFYALB_LNK', 'Személyes albumok tulajdonságai');
//define('MY_PROF_LNK', 'Én profilom');

// lang_cat_list
define('CATEGORY', 'Kategória');
define('ALBUMS', 'Albumok');
//define('PICTURES', 'Képek');

// lang_album_list
define('ALBUM_ON_PAGE', '%d album %d oldalon');
// lang_thumb_view
define('DATE', 'DÁTUM');
define('NAME', 'NÉV');
define('TITLE', 'Kép cím');
define('SORT_DA', 'Dátum szerinti sorrendezés, növekvő');
define('SORT_DD', 'Dátum szerinti sorrendezés, csökkenő');
define('SORT_NA', 'Név szerinti sorrendezés, növekvő');
define('SORT_ND', 'Név szerinti sorrendezés, csökkenő');
define('SORT_TA', 'Sorrendezés cím szerint - növekvő');
define('SORT_TD', 'Sorrendezés cím szerint - csökkenő');
define('PIC_ON_PAGE', '%d kép %d oldalon');
define('USER_ON_PAGE', '%d felhasználó %d oldalon');
define('SORT_RA', 'Szavazás alapján növekvő');
define('SORT_RD', 'Szavazás alapján csökkenő');
define('THUMB_RATING', 'RATING');
define('SORT_TITLE', 'Képek rendezése:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Vissza az ikonos elrendezésre');
define('PIC_INFO_TITLE', 'Kép információ megtekintése / elrejtése');
define('SLIDESHOW_TITLE', 'Diavetítés');
define('SLIDESHOW_DISABLED', 'e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'Kép elküldése e-képeslapként');
define('ECARD_DISABLED', 'e-képeslapok küldése nem engedélyezett');
define('ECARD_DISABLED_MSG', 'Nincs jogosultságod e-képeslap küldésére');
define('PREV_TITLE', 'Előző kép');
define('NEXT_TITLE', 'Következő kép');
define('PIC_POS', 'KÉP %s/%s');
define('NO_MORE_IMAGES', 'Nincs több kép a galériában');
define('NO_LESS_IMAGES', 'Ez az első kép a galériában');

// lang_rate_pic
define('RATE_THIS_PIC', 'Kép osztályozása ');
define('NO_VOTES', '(Még nincs osztályozva)');
define('RATING', '(jelenlegi osztályzat: %s, %s szavazattal)');
define('RUBBISH', 'Vacak');
define('POOR', 'Gyenge');
define('FAIR', 'Megfelelő');
define('GOOD', 'Jó');
define('EXCELLENT', 'Kitűnő');
define('GREAT', 'Szuper');

// lang_cpg_die
//define('INFORMATION', 'Információ');
//define('ERROR', 'Hiba');
define('_CRITICAL_ERROR', 'Kritikus hiba');
define('FILE', 'Fájl: ');
define('LINE', 'Sor: ');

// lang_display_thumbnails
define('FILENAME', 'Fájlnév : ');
define('FILESIZE', 'Fájlméret : ');
define('DIMENSIONS', 'Méretek : ');
define('DATE_ADDED', 'Feltöltés dátuma : ');

// lang_get_pic_data
define('N_COMMENTS', '%s kommentár');
define('N_VIEWS', '%s megtekintés');
define('N_VOTES', '(%s szavazat)');


// lang_albmgr_php
define('ALB_NEED_NAME', 'Az albumokat el kell nevezni!');
define('CONFIRM_MODIFS', 'Biztos végre akarod hajtani ezt a módosítást?');
define('NO_CHANGE', 'Semmit nem változtattál!');
define('NEW_ALBUM', 'Új album');
define('CONFIRM_DELETE1', 'Biztos törlöd az albumot?');
define('CONFIRM_DELETE2', '\\nA tartalmazott összes kép és hozzászólás törlődik!');
define('SELECT_FIRST', 'Először válassz albumot');
define('ALB_MRG', 'Albummenedzser');
define('MY_GALLERY', '* Az én képtáram *');
define('NO_CATEGORY', '* Nincs kategória *');
define('DELETE', 'Törlés');
define('NEW', 'Új');
define('APPLY_MODIFS', 'Módosítások végrehajtása');
define('SELECT_CATEGORY', 'Válassz kategóriát');

// lang_catmgr_php
define('MISS_PARAM', 'A \'%s\' művelethez szükséges paraméterek hiányoznak!');
define('UNKNOWN_CAT', 'Nincs az adatbázisban a kijelölt kategória ');
define('USERGAL_CAT_RO', 'A személyes képtárak nem törölhetők!');
define('MANAGE_CAT', 'Kategóriák menedzselése');
define('CONFIRM_DELETE', 'Biztosan törlöd ezt a kategóriát?');
//define('CATEGORY', 'Kategória');
define('OPERATIONS', 'Műveletek');
define('MOVE_INTO', 'Mozgatás a következőbe');
define('UPDATE_CREATE', 'Kategória létrehozás / módosítás');
define('PARENT_CAT', 'Szülő kategória');
define('CAT_TITLE', 'Kategória megnevezés');
define('CAT_DESC', 'Kategória leírása');

// lang_config_php
define('CONFIG_TITLE', 'Konfiguráció');
define('RESTORE_CFG', 'Gyári beállítások');
define('SAVE_CFG', 'Konfiguráció tárolása');
define('NOTES', 'Megjegyzések');
//define('INFO', 'Információ');
define('UPD_SUCCESS', 'Coppermine konfiguráció frissítve');
define('RESTORE_SUCCESS', 'Coppermine gyári beállítás visszaállítva');
define('NAME_A', 'Név - növekvő');
define('NAME_D', 'Név - csökkenő');
define('TITLE_A', 'Cím szerint - növekvő');
define('TITLE_D', 'Cím szerint - csökkenő');
define('DATE_A', 'Dátum növekvő');
define('DATE_D', 'Dátum csökkenő');
define('RATING_A', 'Szavazás növekvő');
define('RATING_D', 'Szavazás csökkenő');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Magasság');
define('TH_WD', 'Szélesség');


// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Meg kell adnod a neved és egy hozzászólást');
define('COM_ADDED', 'Kommentár hozzáadása megtörtént');
define('ALB_NEED_TITLE', 'Adj nevet az albumnak!');
define('NO_UDP_NEEDED', 'Nincs mit módosítani.');
define('ALB_UPDATED', 'Album módosítva');
define('UNKNOWN_ALBUM', 'A kiválasztott album nem létezik, vagy nincs feltöltési jogosultságod az albumhoz');
define('NO_PIC_UPLOADED', 'Nem történt feltöltés!<br /><br />Ha tényleg kijelöltél feltöltésre képet, ellenőrizd, hogy a szerveren megengedett-e a feltöltés...');
define('ERR_MKDIR', 'Nem sikerült a %s könyvtár létrehozása !');
define('DEST_DIR_RO', 'A szkript nem írhat a %s célkönyvtárba!');
define('ERR_MOVE', 'Nem mozgatható %s %s -be!');
define('ERR_FSIZE_TOO_LARGE', 'A feltöltött kép mérete túl nagy (maximum megengedett: %s x %s)!');
define('ERR_IMGSIZE_TOO_LARGE', 'A feltöltött fájl mérete túl nagy (maximum megengedett: %s KB) !');
define('ERR_INVALID_IMG', 'A feltöltött fájl nem egy érvényes képformátum !');
define('ALLOWED_IMG_TYPES', 'Csak %s kép feltöltése megengedett.');
define('ERR_INSERT_PIC', 'A \'%s\' kép nem adható hozzá az albumhoz ');
define('UPLOAD_SUCCESS', 'A kép feltöltése sikeres volt<br /><br />Jóváhagyás után látható lesz.');
//define('INFO', 'Információ');
define('ERR_COMMENT_EMPTY', 'Nem adott meg kommentárt !');
define('ERR_INVALID_FEXT', 'Csak a következő kiterjesztésű fájlok megengedettek: <br /><br />%s.');
define('NO_FLOOD', 'Már hozzászóltál a képhez.<br /><br />Szerkeszd az előző hozzászólásod, ha szükséges');
define('REDIRECT_MSG', 'Átirányítás folyamatban.<br /><br /><br />Nyomd meg a \'CONTINUE\'-t, ha a kép nem frissül automatikusan');
define('UPL_SUCCESS', 'A kép sikeresen hozzáadásra került');

// lang_delete_php
define('CAPTION', 'Képaláírás');
define('FS_PIC', 'teljes méretű kép');
define('DEL_SUCCESS', 'törlés sikeres');
define('NS_PIC', 'normál méretű kép');
define('ERR_DEL', 'nem lehet törölni');
define('THUMB_PIC', 'ikon');
//define('COMMENT', 'megjegyzés');
define('IM_IN_ALB', 'kép az albumban');
define('ALB_DEL_SUCCESS', ' \'%s\' album törölve');
define('ALB_MGR', 'Albummenedzser');
define('ERR_INVALID_DATA', 'Érvénytelen adat a következőben \'%s\'');
define('CREATE_ALB', 'Album generálása \'%s\'');
define('UPDATE_ALB', 'Album módosítás \'%s\' név: \'%s\' index: \'%s\'');
define('DEL_PIC', 'Kép törlése');
define('DEL_ALB', 'Album törlése');
define('DEL_USER', 'Felhasználó törlése');
//define('ERR_UNKNOWN_USER', 'A kijelölt felhasználó nem létezik !');
define('COMMENT_DELETED', 'A megjegyzést sikeresen töröltük');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'Biztosan törölni akarod ezt a képet? \\nA hozzászólások is törlődnek.');
define('DEL_THIS_PIC', 'A KÉP TÖRLÉSE');
define('SIZE', '%s x %s pixel');
define('VIEWS', '%s');
define('SLIDESHOW', 'Diavetítés');
define('STOP_SLIDESHOW', 'DIAVETíTÉS VÉGE');
define('VIEW_FS', 'Teljes méretű kép megtekintése');
define('EDIT_PIC', 'Kép Info szerkesztése');

// lang_picinfo
define('PIC_INF_TITLE', 'Kép információ');
define('PIC_INF_FILENAME', 'Fájlnév');
define('ALBUM NAME', 'Album név');
define('PIC_INFO_RATING', 'Osztályozás (%s szavazat)');
define('KEYWORDS', 'Kulcsszavak');
define('PIC_INF_FILE_SIZE', 'Fájlméret');
define('PIC_INF_DIMENSIONS', 'Méretek');
define('DISPLAYED', 'Megtekintések száma');
define('CAMERA', 'Kamera');
define('DATE_TAKEN', 'Felvétel dátuma');
define('APERTURE', 'Apertúra');
define('EXPOSURE_TIME', 'Expozíció időpontja');
define('FOCAL_LENGTH', 'Fókusztávolság');
define('COMMENT', 'Megjegyzés');
define('ADDFAV', 'Hozzáadás a kedvencekhez');
define('ADDFAVPHRASE', 'Kedvencek');
define('REMFAV', 'Kivétel kedvencekből');
define('IPTCTITLE', 'IPTC cím');
define('IPTCCOPYRIGHT', 'IPTC jogdíj');
define('IPTCKEYWORDS', 'IPTC kulcsszó');
define('IPTCCATEGORY', 'IPTC kategória');
define('IPTCSUBCATEGORIES', 'IPTC alketegória');
define('BOOKMARK_PAGE', 'Könyvjelző');
define('REMOVEFAV', 'Eltávolítás a Kedvencekből');
define('ADDEDTOFAV', 'Hozzáadás a Kedvencekhez');

// lang_display_comments
define('OK', 'OK');
define('COM_EDIT_TITLE', 'Hozzászólás szerkesztése');
define('CONFIRM_DELETE_COM', 'Biztos törölni kívánod a hozzászólást?');
define('ADD_YOUR_COMMENT', 'Hozzászólás hozzáfűzése');
define('COM_NAME', 'Név');
//define('COMMENT', 'Megjegyzés');
define('YOUR_NAME', 'Anon');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Klikkelj a képre az ablak bezárásához');

// lang_ecard_php
define('E_TITLE', 'E-képeslap küldése');
define('INVALID_EMAIL', '<b>Figyelmeztetés</b> : érvénytelen e-mail cím!');
define('E_ECARD_TITLE', 'Egy e-képeslap %s -tól neked');
define('VIEW_ECARD', 'Ha az e-képeslap nem jelenik meg helyesen, klikkelj a következő linkre');
define('VIEW_MORE_PICS', 'Klikkelj erre a linkre további képek megtekintéséhez!');
define('SEND_SUCCESS', 'E-képeslapod továbbítottuk');
define('SEND_FAILED', 'Sajnálom, de a szerver nem tud e-képeslapot küldeni...');
define('FROM', 'Feladó');
define('_YOUR_NAME', 'Neved');
define('YOUR_EMAIL', 'E-mail címed');
define('TO', 'Címzett');
define('RCPT_NAME', 'Címzett neve');
define('RCPT_EMAIL', 'Címzett e-mail címe');
define('GREETINGS', 'Üdvözlet');
define('MESSAGE', 'Üzenet');
define('ECARD_LINK_CORRUPT', 'Az E-mail kliensed nem tudja megmutatni a képeslapot. Másold bele a linket a böngészőbe.'); //NEW

// lang_editpics_php
define('PIC_INFO', 'Kép információ');
define('ALBUM', 'Album');
define('EDIT_TITLE', 'Cím');
define('DESC', 'Leírás');
//define('KEYWORDS', 'Kulcsszavak');
define('PIC_INFO_STR', '%sx%s - %sKB - %s megtekintés - %s szavazat');
define('APPROVE', 'Kép jóváhagyása');
define('POSTPONE_APP', 'Jóváhagyás később');
//define('DEL_PIC', 'Kép törlés');
define('READ_EXIF', 'Read EXIF info again');
define('RESET_VIEW_COUNT', 'Nézettségszámláló nullázása');
define('RESET_VOTES', 'Szavazatszámláló alaphelyzetbe');
define('DEL_COMM', 'Hozzászólások törlése');
define('UPL_APPROVAL', 'Feltöltés jóváhagyás');
define('EDIT_PICS', 'Képek rendezése');
define('SEE_NEXT', 'Következő kép');
define('SEE_PREV', 'Előző kép');
define('N_PIC', '%s kép');
define('N_OF_PIC_TO_DISP', 'Kép / oldal');
define('APPLY', 'Módosítások végrehajtása');

// lang_groupmgr_php
define('GROUP_NAME', 'Csoport megnevezése');
define('DISK_QUOTA', 'Diszk kvóta');
define('CAN_RATE', 'Osztályozhat képeket');
define('CAN_SEND_ECARDS', 'Küldhet e-képeslapot');
define('CAN_POST_COM', 'Hozzászólást küldhet');
define('CAN_UPLOAD', 'Feltölthet képeket');
define('CAN_HAVE_GALLERY', 'Lehet személyes képtára');
//define('APPLY', 'Módosítások végrehajtása');
define('CREATE_NEW_GROUP', 'Új csoport létrehozása');
define('DEL_GROUPS', 'Kijelölt csoport(ok) törlése ');
define('CONFIRM_DEL', 'Figyelmeztetés: ha törölsz egy csoportot, a hozzá tartozó felhasználók áthelyeződnek a \'Registered\' csoportba !\\n\\nFolytatod ?');
define('GROUP_TITLE', 'Felhasználócsoportok menedzselése');
define('APPROVAL_1', 'Nyilvános feltöltés jóváhagyás (1)');
define('APPROVAL_2', 'Privát feltöltés jóváhagyás (2)');
define('NOTE1', '<b>(1)</b> A nyilvános albumba történő feltöltés adminisztrátori jóváhagyást igényel');
define('NOTE2', '<b>(2)</b> A felhasználó albumába történő feltöltés adminisztrátori jóváhagyást igényel');
//define('NOTES', 'Megjegyzések');

// lang_index_php
define('WELCOME', 'Üdvözöllek!');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'Biztos törölni akarod az albumot? \\nMinden kép és hozzászólás is törlődik!');
//define('DELETE', 'TÖRLÉS');
define('MODIFY', 'TULAJDONSÁGOK');
//define('EDIT_PICS', 'SZERKESZTÉS');

// lang_list_categories
define('HOME', 'Home');
define('STAT1', '<b>[pictures]</b> kép <b>[albums]</b> albumban és <b>[cat]</b> kategóriában <b>[comments]</b> hozzászólással, megtekintések száma: <b>[views]</b>');
define('STAT2', '<b>[pictures]</b> kép <b>[albums]</b> albumban, megtekintések száma: <b>[views]</b>');
define('XX_S_GALLERY', '%s képtára');
define('STAT3', '<b>[pictures]</b> kép <b>[albums]</b> albumban <b>[comments]</b> hozzászólással, megtekintések száma: <b>[views]</b>');

// lang_list_users
define('USER_LIST', 'Felhasználók listája');
define('NO_USER_GAL', 'Nincs felhasználó a képtárban');
define('N_ALBUMS', '%s album(ok)');
define('N_PICS', '%s kép(ek)');

// lang_list_albums
define('N_PICTURES', '%s kép');
define('LAST_ADDED', ', utolsó feltöltés: %s');

// lang_modifyalb_php
define('UPD_ALB_N', '%s album módosítása ');
define('GENERAL_SETTINGS', 'Általános beállítások');
define('ALB_TITLE', 'Album cím');
define('ALB_CAT', 'Album kategória');
define('ALB_DESC', 'Album leírás');
define('ALB_THUMB', 'Album ikon');
define('ALB_PERM', 'Album jogosultságok');
define('CAN_VIEW', 'Albumot láthatja: ');
define('MOD_CAN_UPLOAD', 'Látogatók feltölthetnek képet');
define('CAN_POST_COMMENTS', 'Látogatók küldhetnek hozzászólásokat');
define('MOD_CAN_RATE', 'Látogatók osztályozhatják a képeket');
define('USER_GAL', 'Felhasználói képtár');
define('NO_CAT', '* Nincs kategória *');
define('ALB_EMPTY', 'Az album üres');
define('LAST_UPLOADED', 'Utoljára feltöltött');
define('PUBLIC_ALB', 'Mindenki (nyilvános album)');
define('ME_ONLY', 'Csak én');
define('OWNER_ONLY', 'Csak a (%s) album tulajdonosa');
define('GROUPP_ONLY', 'Csak a \'%s\' csoport tagjai');
define('ERR_NO_ALB_TO_MODIFY', 'Nincs módosítható album az adatbázisban.');
define('UPDATE', 'Album módosítása');

// lang_rate_pic_php
define('ALREADY_RATED', 'Sajnálom, de már osztályoztad ezt a képet');
define('RATE_OK', 'Osztályzatod elfogadtuk');

// lang_register_php
define('USERNAME', 'Felhasználónév');
define('GROUP', 'Csoport');
define('DISK_USAGE', 'Tárfelhasználás');
define('X_S_PROFILE', '%s profilja');define('CHANGE_PASS', 'Jelszó megváltoztatása');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Hozzászólások megtekintése');
define('NO_COMMENT', 'Nincs hozzászólás');
define('N_COMM_DEL', '%s hozzászólás(ok) törölve');
define('N_COMM_DISP', 'Megjelenítendő hozzászólások száma');
define('R_SEE_PREV', 'Előző');
define('R_SEE_NEXT', 'Következő');
define('R_DEL_COMM', 'Kijelölt hozzászólások törölve');

// lang_search_php
define('S_SEARCH', 'Keresés a képtárban');

// lang_search_new_php
define('PAGE_TITLE', 'Új kép keresése');
define('SELECT_DIR', 'Könyvtár választása');
define('SELECT_DIR_MSG', 'Ez a funkció lehetővé teszi egy köteg - FTP-vel a szerverre másolt - kép hozzáadását a képtárhoz.<br /><br />Válaszd ki a könyvtárat, ahonnan hozzá akarsz adni a képtárhoz képeket');
define('NO_PIC_TO_ADD', 'Nincs hozzáadható kép');
define('NEED_ONE_ALBUM', 'Ehhez a funkcióhoz legalább egy albumnak léteznie kell');
define('WARNING', 'Figyelmeztetés');
define('CHANGE_PERM', 'a szkript nem tud írni ebbe a könyvtárba, 755-ről 777-re kell cserélned a jogosultságát mielőtt hozzáadsz képeket !');
define('TARGET_ALBUM', '<b>Adja hozzá a </b>"%s"<b> könyvtárból a képeket a </b>%s albumhoz');
define('FOLDER', 'Könyvtár');
define('IMAGE', 'Kép');
//define('ALBUM', 'Album');
define('RESULT', 'Eredmény');
define('DIR_RO', 'Nem írható. ');
define('DIR_CANT_READ', 'Nem olvasható. ');
define('INSERT', 'Új képek hozzáadása a képtárhoz');
define('LIST_NEW_PIC', 'Új képek felsorolása');
define('INSERT_SELECTED', 'Kijelölt képek hozzáadása');
define('NO_PIC_FOUND', 'Nincs új kép');
define('BE_PATIENT', 'Légy türelemmel, a szkriptnek idő kell a képek hozzáadásához');
define('SN_NOTES', '<ul><li><b>OK</b> : azt jelenti, hogy a kép hozzáadása sikeres volt<li><b>DP</b> : azt jelenti, hogy a kép már az adatbázisban volt<li><b>PB</b> : azt jelenti, hogy a kép nem volt hozzáadható, ellenőrizd a konfigurációt és a képeket tartalmazó könyvtárak jogosultságait <li>Ha az OK, DP, PB \'jelek\' nem láthatók, klikkelj a hibás képre a PHP hibaüzenetének megjelenítéséhez<li>Ha a browser leidőzített, nyomja meg a frissítés gombot</ul>');
define('SELECT_ALBUM', 'Album kijelölése');
define('NO_ALBUM', 'Nincs album kijelölve');

// lang_upload_php
define('UP_TITLE', 'Kép feltöltése');
define('MAX_FSIZE', 'Maximum megengedett fájlméret %s KB');
//define('ALBUM', 'Album');
define('PICTURE', 'Kép');
define('PIC_TITLE', 'Kép címe');
define('DESCRIPTION', 'Kép leírása');
define('UP_KEYWORDS', 'Kulcsszavak (szóközökkel elválasztva)');
define('ERR_NO_ALB_UPLOADABLES', 'Nincs album, ahova engedélyezett a feltöltés');

// lang_usermgr_php
define('U_TITLE', 'Felhasználók menedzselése');
//define('NAME_A', 'Név növekvő');
//define('NAME_D', 'Név csökkenő');
define('GROUP_A', 'Csoport növekvő');
define('GROUP_D', 'Csoport csökkenő');
define('REG_A', 'Reg. dátum növekvő');
define('REG_D', 'Reg. dátum csökkenő');
define('PIC_A', 'Képszám növekvő');
define('PIC_D', 'Képszám csökkenő');
define('DISKU_A', 'Diszkfelhasználás növekvő');
define('DISKU_D', 'Diszkfelhasználás csökkenő');
define('SORT_BY', 'Felhasználók sorrendezése');
define('ERR_NO_USERS', 'Nincs felhasználó !');
define('ERR_EDIT_SELF', 'Nem szerkesztheted a saját profilod, használd az \'Én profilom\' menüpontot');
define('EDIT', 'SZERKESZT');
//define('DELETE', 'TÖRÖL');
define('U_NAME', 'Felhasználónév');
//define('GROUP', 'Csoport');
define('INACTIVE', 'Inaktív');
//define('OPERATIONS', 'Műveletek');
define('PICTURES', 'Képek');
define('DISK_SPACE', 'Felhasznált tárhely / kvóta');
define('REGISTERED_ON', 'Regisztrálva');
define('U_USER_ON_P_PAGES', '%d felhasználó %d oldalon');
define('USER_CONFIRM_DEL', 'Biztös törölni kívánod a felhasználót? \\nMinden képe és albuma is törlődni fog.');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'A kijelölt felhasználó nem létezik !');
define('MODIFY_USER', 'Felhasználó módosítása');
//define('NOTES', 'Megjegyzések');
define('NOTE_LIST', '<li>Ha nem kívánod megváltoztatni az aktuális jelszót, hagyd üresen a "jelszó" mezőt');
define('PASSWORD', 'Jelszó');
define('USER_ACTIVE', 'Felhasználó aktív');
define('USER_GROUP', 'Felhasználó csoport');
define('USER_EMAIL', 'Felhasználó email címe');
define('USER_WEB_SITE', 'Felhasználó honlapja');
define('CREATE_NEW_USER', 'Új felhasználó létrehozása');
define('USER_FROM', 'Felhasználó lakhelye');
define('USER_INTERESTS', 'Felhasználó érdeklődési köre');
define('USER_OCC', 'Felhasználó foglalkozása');

// lang_util_php
define('UTIL_TITLE', 'Képek átméretezése');
define('WHAT_IT_DOES', 'Mi történjen');
define('WHAT_UPDATE_TITLES', 'Címek aktualizálása fájlnevekből');
define('WHAT_DELETE_TITLE', 'Címek törlése');
define('WHAT_REBUILD', 'Ikonok és átméretezett képek újragenerálása');
define('WHAT_DELETE_ORIGINALS', 'Eredeti képek felülírása az átméretezettekkel');
define('U_FILE', 'Fájl');
define('TITLE_SET_TO', 'cím beállítása ..');
define('SUBMIT_FORM', 'érvényesítés');
define('UPDATED_SUCCESFULLY', 'sikeres módosítás');
define('ERROR_CREATE', 'HIBA a generálás során');
define('CONTINUE', 'Több kép feldolgozása');
define('MAIN_SUCCESS', 'A % fájlok felhasználása elsődleges képként sikeres volt');
define('ERROR_RENAME', '%s %s -ra átnevezése során HIBA');
define('ERROR_NOT_FOUND', 'A % fájlok nem találhatók');
define('U_BACK', 'vissza a főoldalra');
define('THUMBS_WAIT', 'Ikonok és/vagy átméretezett képek aktualizálása, kérlek várj...');
define('THUMBS_CONTINUE_WAIT', 'Ikonok és/vagy átméretezett képek aktualizálásának folytatása...');
define('TITLES_WAIT', 'Címek aktualizálása, kérlek várj...');
define('DELETE_WAIT', 'Címek törlése, kérlek várj...');
define('REPLACE_WAIT', 'Eredeti képek felülírása az átméretezettekkel, kérlek várj...');
define('INSTRUCTION', 'Gyors utasítások');
define('INSTRUCTION_ACTION', 'Művelet kiválasztása');
define('INSTRUCTION_PARAMETER', 'Paraméterek beállítása');
define('INSTRUCTION_ALBUM', 'Album kiválasztása');
define('INSTRUCTION_PRESS', 'Nyomj %-t');
define('U_UPDATE', 'Ikonok és/vagy átméretezett fényképek aktualizálása');
define('UPDATE_WHAT', 'Mit kell aktualizálni');
define('UPDATE_THUMB', 'Csak ikonokat');
define('UPDATE_PIC', 'Csak átméretezett képeket');
define('UPDATE_BOTH', 'Ikonokat és átméretezett képeket is');
define('UPDATE_NUMBER', 'Klikkelésenként feldolgozandó képek száma');
define('UPDATE_OPTION', '(Próbáld csökkenteni ezt az értéket, ha leidőzítési problémát észlelsz)');
define('FILENAME_TITLE', 'Fájlnév &#8594; Kép cím');
define('FILENAME_HOW', 'Hogy legyen módosítva a fájlnév');
define('FILENAME_REMOVE', 'A jpg végződés törlése és _ (alulvonás) helyettesítése szóközzel');
define('FILENAME_EURO', '2003_11_23_13_20_20.jpg átnevezése 23/11/2003 13:20-ra');
define('FILENAME_US', '2003_11_23_13_20_20.jpg átnevezése 11/23/2003 13:20-ra');
define('FILENAME_TIME', '2003_11_23_13_20_20.jpg átnevezése 13:20ra');
define('UT_DELETE', 'Kép címek vagy eredeti méretű képek törlése');
define('DELETE_TITLE', 'Kép címek törlése');
define('DELETE_ORIGINAL', 'Eredeti méretű képek törlése');
define('DELETE_REPLACE', 'Eredeti képek felülírása átméretezettel');
//define('SELECT_ALBUM', 'Album kiválasztása');

// lang_pagetitle_php
define('VIEWING', 'Képek megnézése');
define('USR', 'Galériája');
define('PHOTOGALLERY', 'Geléria');
$lang_usermgr_php = array(
    'name_a' => 'Név növekvő',
    'name_d' => 'Név csökkenő',
    'group_a' => 'Csoport növekvő',
    'group_d' => 'Csoport csökkenő',
    'reg_a' => 'Reg dátum növekvő',
    'reg_d' => 'Reg dátum csökkenő',
    'pic_a' => 'Képszám növekvő',
    'pic_d' => 'Képszám csökkenő',
    'disku_a' => 'Diszkfelhasználás növekvő',
    'disku_d' => 'Diszkfelhasználás csökkenő',
    );
$lang_byte_units = array('byte','KB','MB',);
// Day of weeks and months
$lang_day_of_week = array('H','K','Sze','Cs','P','Szo','V',);
$lang_month = array('Jan','Feb','Már','Ápr','Máj','Jún','Júl','Aug','Szept','Okt','Nov','Dec',);
$lang_meta_album_names = array(
    'random' => 'Véletlen képlista',
    'lastup' => 'Friss feltöltések',
    'lastupby' => 'My Last additions', // new 1.2.2
    'lastalb' => 'Utoljára módosított albumok',
    'lastcom' => 'Friss hozzászólások',
    'lastcomby' => 'My Last comments', // new 1.2.2
    'topn' => 'Legtöbbször nézett',
    'toprated' => 'Legtöbb szavazat',
    'lasthits' => 'Utoljára nézett',
    'search' => 'Keresés eredménye',
    'favpics' => 'Kedvenc képeim' // changed in cpg1.2.0nuke
    );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array(
    'title' => 'Konfiguráció',
    'restore_cfg' => 'Gyári beállítások',
    'save_cfg' => 'Konfiguráció tárolása',
    'notes' => 'Megjegyzések',
    'info' => 'Információ',
    'upd_success' => 'Coppermine konfiguráció frissítve',
    'restore_success' => 'Coppermine gyári beállítás visszaállítva',
    'name_a' => 'Név növekvő',
    'name_d' => 'Név csökkenő',
    'title_a' => 'Cím szerint növekvő',
    'title_d' => 'Cím szerint csökkenő',
    'date_a' => 'Dátum növekvő',
    'date_d' => 'Dátum csökkenő',
    'rating_a' => 'Szavazás növekvő', // new in cpg1.2.0nuke
    'rating_d' => 'Szavazás csökkenő', // new in cpg1.2.0nuke
    'th_any' => 'Max Aspect',
    'th_ht' => 'Magasság',
    'th_wd' => 'Szélesség',
    );
// start left side interpretation
$lang_config_data = array(
    // General settings
    'Általános beállítások',
    array('Képtár neve', 'gallery_name', 0),
    array('Képtár leírása', 'gallery_description', 0),
    array('Képtár adminisztrátor email címe', 'gallery_admin_email', 0),
    array('Address to nuke folder ie http://example.com/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
    array('Megjelenítési téma', 'theme', 6),
    array('Page Specific Titles instead of >Coppermine', 'nice_titles', 1),
    // Album list view
    'Albumlista nézet',
    array('Főtáblázat szélessége (pixel vagy %)', 'main_table_width', 0),
    array('Kategóriák megjelenítendő száma', 'subcat_level', 0),
    array('Oldalanként megjelenítendő albumok száma', 'albums_per_page', 0),
    array('Albumlista oszlopainak száma', 'album_list_cols', 0),
    array('Ikonok mérete pixelben', 'alb_list_thumb_size', 0),
    array('A főoldal tartalma', 'main_page_layout', 0),
    array('Első szintű albumok ikonok megjelenítése a kategóriákban', 'first_level', 1), 
    // Thumbnail view
    'Ikonlista nézet',
    array('Oszlopok száma az ikonlistában', 'thumbcols', 0),
    array('Sorok száma az ikonlistában', 'thumbrows', 0),
    array('Megjelenítendő tab- fülek maximális száma', 'max_tabs', 0),
    array('Kép leírás megjelenítés (a kép címén felül) az ikonok alatt', 'caption_in_thumbview', 1),
    array('Az ikon alatt megjelenjen -e a hozzászólások száma', 'display_comment_count', 1),
    array('Képek alapértelmezett sorrendje', 'default_sort_order', 3),
    array('Szavazatok minimuma a \'legtöbbször nézett\' listára való felkerüléshez', 'min_votes_for_rating', 0),
    array('Alts and title tags of thumbnail show title and keyword instead of picinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
    // Display Image & Comment settings
    'Kép-nézet és hozzászólás beállítások',
    array('A kép-nézethez tartozó táblázat szélessége (pixel vagy %)', 'picture_table_width', 0),
    array('Képinformációk láthatók alapértelmezésben', 'display_pic_info', 1),
    array('Trágár szavak kiszűrése a hozzászólásokból', 'filter_bad_words', 1),
    array('Hangulatkarakterek engedélyezése a hozzászólásokban', 'enable_smilies', 1),
    array('Allow several consecutive comments on one pic from the same user', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
    array('Email site admin upon comment submission' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
    array('A képleírás maximális hossza', 'max_img_desc_length', 0),
    array('Maximális karakterszám szavanként', 'max_com_wlength', 0),
    array('Sorok maximális száma hozzászólásonként', 'max_com_lines', 0),
    array('Hozzászólások maximális hossza', 'max_com_size', 0),
    array('Filmcsík megjelenítése', 'display_film_strip', 1),
    array('Képkockák száma a filmcsíkban', 'max_film_strip_items', 0),
    array('Allow viewing of full size pic by anonymous', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
    array('Number of days between being able to vote on the same image','keep_votes_time',0), // new in cpg1.2.2c nuke
    array('Show fullsize picture in slideshow','fullsize_slideshow',1),
    array('Show blocks on the right of displayimage if right blocks are on at module level?', 'right_blocks', 1), // new 1.2.2
    // Pictures and thumbnails settings
    'Kép- és ikonbeállítások',
    array('JPEG fájlok minősége', 'jpeg_qual', 0),
    array('Place watermark on image', 'watermark', 1),
    array('Ikonok maximális mérete <b>*</b>', 'thumb_width', 0),
    array('Méretek használata (ikonok szélessége, magassága, vagy maximális mérete)<b>*</b>', 'thumb_use', 7),
    array('Közbenső méretű kép generálása', 'make_intermediate', 1),
    array('Közbenső méretű képmaximális szélessége ésmagassága <b>*</b>', 'picture_width', 0),
    array('Feltöltött képfájlok maximális mérete (KB)', 'max_upl_size', 0),
    array('Feltöltött képek maximális szélessége és magassága (pixel)', 'max_upl_width_height', 0), 
    array('Allow multiple Files to be upload with same file name', 'samename', 1), 
	// User settings
    'Felhasználó beállítások',
    array('Allow new user registrations', 'allow_user_registration', 1),
/*
    array('User registration requires email verification', 'reg_requires_valid_email', 1),
    array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),
*/
    array('Felhasználóknak lehetnek privát albumai', 'allow_private_albums', 1),
    array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',
'Saját mezők a képek leírásához (hagyd üresen, ha nem használod)',
	array('1. mezőnév', 'user_field1_name', 0),
    array('2. mezőnév', 'user_field2_name', 0),
    array('3. mezőnév', 'user_field3_name', 0),
    array('4. mezőnév', 'user_field4_name', 0), 
    // Pictures and thumbnails advanced settings
    'Képek és ikonok különleges beállításai',
    array('Privát album ikon megjelenítése be nem jelentkezett felhasználó esetén', 'show_private', 1),
    array('Fájlnévben tiltott karakterek', 'forbiden_fname_char', 0),
    array('Fájlnevek megengedett kiterjesztései', 'allowed_file_extensions', 0),
    array('Képek átméretezéséhez használt módszer', 'thumb_method', 2),
    array('ImageMagick/netpbm \'convert\' programjához vezető útvonal  (pld. /usr/bin/X11/)', 'impath', 0),
    array('Megengedett képfajták (csak ImageMagick esetében)', 'allowed_img_types', 0),
    array('Parancssor opciók ImageMagick-hoz', 'im_options', 0),
    array('EXIF adatok olvasása  JPEG fájlokban', 'read_exif_data', 1),
    array('Read IPTC data in JPEG files', 'read_iptc_data', 1), // new in cpg1.2.0nuke
    array('The album directory <b>*</b>', 'fullpath', 0),
    array('Felhasználói képek elérési útvonala <b>*</b>', 'userpics', 0),
    array('Középméretezett képek előtagja <b>*</b>', 'normal_pfx', 0),
    array('Ikonfájlok előtagja <b>*</b>', 'thumb_pfx', 0),
    array('Picinfo display filename', 'picinfo_display_filename', '1'), // new in cpg1.2.0nuke
    array('Picinfo display album name', 'picinfo_display_album_name', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_file_size', 'picinfo_display_file_size', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_dimensions', 'picinfo_display_dimensions', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_count_displayed', 'picinfo_display_count_displayed', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_URL', 'picinfo_display_URL', '1'), // new in cpg1.2.0nuke
    array('Picinfo display URL as bookmark link', 'picinfo_display_URL_bookmark', '1'), // new in cpg1.2.0nuke
    array('Picinfo display fav album link', 'picinfo_display_favorites', '1'), // new in cpg1.2.0nuke
    // Cookies & Charset settings
    'Cooky és karakterkészlet beállítások',
    array('A szkript által használt cookynév', 'cookie_name', 0),
    array('A szkript által használt cooky útvonalat', 'cookie_path', 0),
    //'Miscellaneous settings',
    'Egyéb beállítások',
    array('Enable debug mode', 'debug_mode', 1),
    '<br /><div align="center">(*) * -gal jelölt mezőket nem szabad megváltoztatni, ha már nem üres a képtár</div><br />'
    );
// end left side interpretation
