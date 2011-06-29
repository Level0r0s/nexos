<?
/****************************************************************************/
/* Coppermine Photo Gallery 1.2.3 for CMS                                   */
/****************************************************************************/
/****************************************************************************/
/* Port Copyright (C) 2004 Coppermine for CMS Dev Team  		              */
/* http://coppermine.findhere.org/                                          */
/****************************************************************************/
/* Updated by the Coppermine Dev Team  2003                                 */
/* (http://coppermine.sf.net/team/)                                         */
/* see /docs/credits.html for details                                       */
/****************************************************************************/
/* Copyright (C) 2002,2003  Gregory DEMAR <gdemar@wanadoo.fr>               */
/* http://www.chezgreg.net/coppermine/                                      */
/* This program is free software; you can redistribute it and/or modify     */
/* it under the terms of the GNU General Public License as published by     */
/* the Free Software Foundation; either version 2 of the License, or        */
/* (at your option) any later version.                                      */
/*****************************************************************************/
/*   $Id: lang-hungarian-utf-8.php,v 1.1 2004/07/31 19:07:49 akamu Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Hungarian');
define('LANG_NAME_NATIVE', 'Magyar');
define('LANG_COUNTRY_CODE', 'hu');
define('TRANS_NAME', 'Peter Ardo');
define('TRANS_EMAIL', 'petardo@freemail.hu');
define('TRANS_WEBSITE', '');
define('TRANS_DATE', '2003-10-20');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'utf-8');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'Igen');
define('NO', 'Nem');

// some common strings
define('BACK', 'VISSZA');
define('CONTINUE', 'TOVÁBB');
define('INFO', 'Információ');
define('ERROR', 'Hiba');

//// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
define('ALBUM_DATE_FMT', '%Y %B %d');
define('LASTCOM_DATE_FMT', '%y.%m.%d %H:%M');
define('LASTUP_DATE_FMT', '%Y %B %d');
define('REGISTER_DATE_FMT', '%Y %B %d');
define('LASTHIT_DATE_FMT', '%Y %B %d %H:%M');
define('COMMENT_DATE_FMT', '%Y %B %d %H:%M');

// short names for Byte, Kilo, Mega
$lang_byte_units = array('byte','KB','MB',);

// Day of week
$lang_day_of_week = array('H','K','Sze','Cs','P','Szo','V',);
// Day of the month
$lang_month = array('Jan','Feb','Már','Ápr','Máj','Jún','Júl','Aug','Szept','Okt','Nov','Dec',);
// For the word censor
$lang_bad_words = array('basz*','segg*','fasz*','kurva*','picsa','geci',);
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
define('PERM_DENIED', 'Nincs jogosultságod ennek a mûveletnek az elvégzéséhez.');
define('PARAM_MISSING', 'Szkript hívás a szüksége paraméter(ek) megadása nélkül.');
define('NON_EXIST_AP', 'A kijelölt album / kép nem található!');
define('QUOTA_EXCEEDED', 'Diszk kvóta túllépve<br /><br />A beállított diszkkvóta [quota]K, a képeid által jelenleg elfoglalt tárhely [space]K, ennek a képnek a feltöltésével túllépnéd a kvótáját.');
define('GD_FILE_TYPE_ERR', 'GD könyvtár használata esetén csak JPEG és PNG típusok megengedettek.');
define('INVALID_IMAGE', 'A feltöltött kép sérült, vagy a GD könyvtár által nem kezelhetõ');
define('RESIZE_FAILED', 'Nem sikerült az ikonizált vagy átméretezett képek generálása.');
define('NO_IMG_TO_DISPLAY', 'Nincs megjeleníthetõ kép');
define('NON_EXIST_CAT', 'A kijelölt kategória nem létezik');
define('ORPHAN_CAT', 'A kategória szülõkategóriája nem létezik, futtasd a kategóriamenedzsert a probléma kiküszöbölésére.');
define('DIRECTORY_RO', 'A \'%s\' könyvtár nem írható, a képeket nem lehet törölni');
define('NON_EXIST_COMMENT', 'A kijelölt hozzászólás nem létezik.');
define('PIC_IN_INVALID_ALBUM', 'Kép nem létezõ albumban (%s)!?');
define('BANNED', 'Jelenleg ki vagy tiltva a weblap használatából.');
define('NOT_WITH_UDB', 'Ez a funkció le van tiltva a Coppermine-ban, mivel a fórum sw része. A kért funkciót vagy nem támogatja a jelen konfiguráció, vagy a fórum sw kezeli.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', 'Ugrás az albumlistára');
define('ALB_LIST_LNK', 'Albumlista');
define('MY_GAL_TITLE', 'Ugrás a személyes képtárra');
define('MY_GAL_LNK', 'Én képtáram');
define('MY_PROF_LNK', 'Én profilom');
define('MY_PROF_TITLE','Check your disk quota and groups');
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
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Friss hozzászólások');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Legtöbbször nézett');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Legtöbb szavazat');
define('SEARCH_LNK', 'Keresés');
define('FAV_LNK', 'Kedvencek');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

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
define('MY_PROF_LNK', 'Én profilom');

// lang_cat_list
define('CATEGORY', 'Kategória');
define('ALBUMS', 'Albumok');
define('PICTURES', 'Képek');

// lang_album_list
define('ALBUM_ON_PAGE', '%d album %d oldalon');

// lang_thumb_view
define('DATE', 'DÁTUM');
define('NAME', 'NÉV');
define('TITLE', 'Kép cím');
define('SORT_DA', 'Dátum szerinti sorrendezés, növekvõ');
define('SORT_DD', 'Dátum szerinti sorrendezés, csökkenõ');
define('SORT_NA', 'Név szerinti sorrendezés, növekvõ');
define('SORT_ND', 'Név szerinti sorrendezés, csökkenõ');
define('SORT_TA', 'Sorrendezés cím szerint - növekvõ');
define('SORT_TD', 'Sorrendezés cím szerint - csökkenõ');
define('PIC_ON_PAGE', '%d kép %d oldalon');
define('USER_ON_PAGE', '%d felhasználó %d oldalon');
define('SORT_RA', 'Sort by rating ascending');
define('SORT_RD', 'Sort by rating descending');
define('RATING', 'RATING');
define('SORT_TITLE', 'Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Vissza az ikonos elrendezésre');
define('PIC_INFO_TITLE', 'Kép információ megtekintése / elrejtése');
define('SLIDESHOW_TITLE', 'Diavetítés');
define('SLIDESHOW_DISABLED', 'e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'Kép elküldése e-képeslapként');
define('ECARD_DISABLED', 'e-képeslapok küldése nem engedélyezett');
define('ECARD_DISABLED_MSG', 'Nincs jogosultságod e-képeslap küldésére');
define('PREV_TITLE', 'Elõzõ kép');
define('NEXT_TITLE', 'Következõ kép');
define('PIC_POS', 'KÉP %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', 'Kép osztályozása ');
define('NO_VOTES', '(Még nincs osztályozva)');
define('RATING', '(jelenlegi osztályzat: %s, %s szavazattal)');
define('RUBBISH', 'Vacak');
define('POOR', 'Gyenge');
define('FAIR', 'Megfelelõ');
define('GOOD', 'Jó');
define('EXCELLENT', 'Kitûnõ');
define('GREAT', 'Szuper');

// lang_cpg_die
define('INFORMATION', 'Információ');
define('ERROR', 'Hiba');
define('CRITICAL_ERROR', 'Kritikus hiba');
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

// lang_smilies_inc_php
define('EXCLAMATION', 'Felkiáltás');
define('QUESTION', 'Kérdés');
define('VERY HAPPY', 'Nagyon boldog');
define('SMILE', 'Mosolyog');
define('SAD', 'Szomorú');
define('SURPRISED', 'Meglepett');
define('SHOCKED', 'Sokkolt');
define('CONFUSED', 'Zavarodott');
define('COOL', 'Higgadt');
define('LAUGHING', 'Nevet');
define('MAD', 'Õrült');
define('RAZZ', 'Gúnyos');
define('EMBARASSED', 'Kínos');
define('CRYING OR VERY SAD', 'Sír / nagyon szomorú');
define('EVIL OR VERY MAD', 'Gonosz vagy õrült');
define('TWISTED EVIL', 'Torz gonosz');
define('ROLLING EYES', 'Guruló szemek');
define('WINK', 'Kacsint');
define('IDEA', 'Ötlet');
define('ARROW', 'Nyíl');
define('NEUTRAL', 'Semleges');
define('MR. GREEN', 'Mr. Zöld');

// lang_admin_php
define('LV_ADMIN', 'Kilépés adminisztrátor módból...');
define('ENT_ADMIN', 'Váltás adminisztrátor módra...');

// lang_albmgr_php
define('ALB_NEED_NAME', 'Az albumokat el kell nevezni!');
define('CONFIRM_MODIFS', 'Biztos végre akarod hajtani ezt a módosítást?');
define('NO_CHANGE', 'Semmit nem változtattál!');
define('NEW_ALBUM', 'Új album');
define('CONFIRM_DELETE1', 'Biztos törlöd az albumot?');
define('CONFIRM_DELETE2', '\\nA tartalmazott összes kép és hozzászólás törlõdik!');
define('SELECT_FIRST', 'Elõször válassz albumot');
define('ALB_MRG', 'Albummenedzser');
define('MY_GALLERY', '* Az én képtáram *');
define('NO_CATEGORY', '* Nincs kategória *');
define('DELETE', 'Törlés');
define('NEW', 'Új');
define('APPLY_MODIFS', 'Módosítások végrehajtása');
define('SELECT_CATEGORY', 'Válassz kategóriát');

// lang_catmgr_php
define('MISS_PARAM', 'A \'%s\' mûvelethez szükséges paraméterek hiányoznak!');
define('UNKNOWN_CAT', 'Nincs az adatbázisban a kijelölt kategória ');
define('USERGAL_CAT_RO', 'A személyes képtárak nem törölhetõk!');
define('MANAGE_CAT', 'Kategóriák menedzselése');
define('CONFIRM_DELETE', 'Biztosan törlöd ezt a kategóriát?');
define('CATEGORY', 'Kategória');
define('OPERATIONS', 'Mûveletek');
define('MOVE_INTO', 'Mozgatás a következõbe');
define('UPDATE_CREATE', 'Kategória létrehozás / módosítás');
define('PARENT_CAT', 'Szülõ kategória');
define('CAT_TITLE', 'Kategória megnevezés');
define('CAT_DESC', 'Kategória leírása');

// lang_config_php
define('TITLE', 'Konfiguráció');
define('RESTORE_CFG', 'Gyári beállítások');
define('SAVE_CFG', 'Konfiguráció tárolása');
define('NOTES', 'Megjegyzések');
define('INFO', 'Információ');
define('UPD_SUCCESS', 'Coppermine konfiguráció frissítve');
define('RESTORE_SUCCESS', 'Coppermine gyári beállítás visszaállítva');
define('NAME_A', 'Név - növekvõ');
define('NAME_D', 'Név - csökkenõ');
define('TITLE_A', 'Cím szerint - növekvõ');
define('TITLE_D', 'Cím szerint - csökkenõ');
define('DATE_A', 'Dátum növekvõ');
define('DATE_D', 'Dátum csökkenõ');

// lang_config_data
define('CONFIG_GENSET', 'Általános beállítások');
define('GALLERY_NAME', 'Képtár neve');
define('GALLERY_DESCRIPTION', 'Képtár leírása');
define('GALLERY_ADMIN_EMAIL', 'K说ఠadminisztr೯r email c쬥');
define('ECARDS_MORE_PIC_TARGET', 'Az e-képeslapok  \'További képek\' linkjéhez tartozó webcím');
define('LANG', 'Nyelv megadása');
define('CPGTHEME', 'Megjelenítési téma');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'Albumlista nézet');
define('MAIN_TABLE_WIDTH', 'Fõtáblázat szélessége (pixel vagy %)');
define('SUBCAT_LEVEL', 'Kategóriák megjelenítendõ száma');
define('ALBUMS_PER_PAGE', 'Oldalanként megjelenítendõ albumok száma');
define('ALBUM_LIST_COLS', 'Albumlista oszlopainak száma');
define('ALB_LIST_THUMB_SIZE', 'Ikonok mérete pixelben');
define('MAIN_PAGE_LAYOUT', 'A fõoldal tartalma');
define('FIRST_LEVEL', 'Elsõ szintû albumok ikonok megjelenítése a kategóriákban');
define('THUMB_VIEW_TITLE', 'Ikonlista nézet');
define('THUMBCOLS', 'Oszlopok száma az ikonlistában');
define('THUMBROWS', 'Sorok száma az ikonlistában');
define('MAX_TABS', 'Megjelenítendõ tab- fülek maximális száma');
define('CAPTION_IN_THUMBVIEW', 'Kép leírás megjelenítés (a kép címén felül) az ikonok alatt');
define('DISPLAY_COMMENT_COUNT', 'Az ikon alatt megjelenjen -e a hozzászólások száma');
define('DEFAULT_SORT_ORDER', 'Képek alapértelmezett sorrendje');
define('MIN_VOTES_FOR_RATING', 'Szavazatok minimuma a \'legtöbbször nézett\' listára való felkerüléshez');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'Kép-nézet és hozzászólás beállítások');
define('PICTURE_TABLE_WIDTH', 'A kép-nézethez tartozó táblázat szélessége (pixel vagy %)');
define('DISPLAY_PIC_INFO', 'Képinformációk láthatók alapértelmezésben');
define('FILTER_BAD_WORDS', 'Trágár szavak kiszûrése a hozzászólásokból');
define('ENABLE_SMILIES', 'Hangulatkarakterek engedélyezése a hozzászólásokban');
define('MAX_IMG_DESC_LENGTH', 'A képleírás maximális hossza');
define('MAX_COM_WLENGTH', 'Maximális karakterszám szavanként');
define('MAX_COM_LINES', 'Sorok maximális száma hozzászólásonként');
define('MAX_COM_SIZE', 'Hozzászólások maximális hossza');
define('DISPLAY_FILM_STRIP', 'Filmcsík megjelenítése');
define('MAX_FILM_STRIP_ITEMS', 'Képkockák száma a filmcsíkban');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('39', 'Kép- és ikonbeállítások');
define('JPEG_QUAL', 'JPEG fájlok minõsége');
define('THUMB_WIDTH', 'Ikonok maximális mérete <b>*</b>');
define('THUMB_USE', 'Méretek használata (ikonok szélessége, magassága, vagy maximális mérete)<b>*</b>');
define('MAKE_INTERMEDIATE', 'Közbensõ méretû kép generálása');
define('PICTURE_WIDTH', 'Közbensõ méretû képmaximális szélessége ésmagassága <b>*</b>');
define('MAX_UPL_SIZE', 'Feltöltött képfájlok maximális mérete (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Feltöltött képek maximális szélessége és magassága (pixel)');
define('47', 'Felhasználó beállítások');
define('ALLOW_USER_REGISTRATION', 'Új felhasználók regisztrálhatnak');
define('REG_REQUIRES_VALID_EMAIL', 'Regisztráció email megerõsítéshez kötött');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Két felhasználónak lehet azonos email címe');
define('ALLOW_PRIVATE_ALBUMS', 'Felhasználóknak lehetnek privát albumai');
define('52', 'Saját mezõk a képek leírásához (hagyd üresen, ha nem használod)');
define('USER_FIELD1_NAME', '1. mezõnév');
define('USER_FIELD2_NAME', '2. mezõnév');
define('USER_FIELD3_NAME', '3. mezõnév');
define('USER_FIELD4_NAME', '4. mezõnév');
define('57', 'Képek és ikonok különleges beállításai');
define('SHOW_PRIVATE', 'Privát album ikon megjelenítése be nem jelentkezett felhasználó esetén');
define('FORBIDEN_FNAME_CHAR', 'Fájlnévben tiltott karakterek');
define('ALLOWED_FILE_EXTENSIONS', 'Fájlnevek megengedett kiterjesztései');
define('THUMB_METHOD', 'Képek átméretezéséhez használt módszer');
define('IMPATH', 'ImageMagick/netpbm \'convert\' programjához vezetõ útvonal  (pld. /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Megengedett képfajták (csak ImageMagick esetében)');
define('IM_OPTIONS', 'Parancssor opciók ImageMagick-hoz');
define('READ_EXIF_DATA', 'EXIF adatok olvasása  JPEG fájlokban');
define('READ_IPTC_DATA', 'Read IPTC data in JPEG files');
define('FULLPATH', 'Album elérési útvonala <b>*</b>');
define('USERPICS', 'Felhasználói képek elérési útvonala <b>*</b>');
define('NORMAL_PFX', 'Középméretezett képek elõtagja <b>*</b>');
define('THUMB_PFX', 'Ikonfájlok elõtagja <b>*</b>');
define('DEFAULT_DIR_MODE', 'Könyvtárak alapértelmezett jogosultság beállítása');
define('DEFAULT_FILE_MODE', 'Képek alapértelmezett jogosultság beállítása');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('81', 'Cooky és karakterkészlet beállítások');
define('COOKIE_NAME', 'A szkript által használt cookynév');
define('COOKIE_PATH', 'A szkript által használt cooky útvonala');
define('CHAR_SET', 'Karakter kódolás');
define('85', 'Egyéb beállítások');
define('DEBUG_MODE', 'Debug mód engedélyezése');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) * -gal jelölt mezõket nem szabad megváltoztatni, ha már nem üres a képtár</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Meg kell adnod a neved és egy hozzászólást');
define('COM_ADDED', 'Kommentár hozzáadása megtörtént');
define('ALB_NEED_TITLE', 'Adj nevet az albumnak!');
define('NO_UDP_NEEDED', 'Nincs mit módosítani.');
define('ALB_UPDATED', 'Album módosítva');
define('UNKNOWN_ALBUM', 'A kiválasztott album nem létezik, vagy nincs feltöltési jogosultságod az albumhoz');
define('NO_PIC_UPLOADED', 'Nem történt feltöltés!<br /><br />Ha tényleg kijelöltél feltöltésre képet, ellenõrizd, hogy a szerveren megengedett-e a feltöltés...');
define('ERR_MKDIR', 'Nem sikerült a %s könyvtár létrehozása !');
define('DEST_DIR_RO', 'A szkript nem írhat a %s célkönyvtárba!');
define('ERR_MOVE', 'Nem mozgatható %s %s -be!');
define('ERR_FSIZE_TOO_LARGE', 'A feltöltött kép mérete túl nagy (maximum megengedett: %s x %s)!');
define('ERR_IMGSIZE_TOO_LARGE', 'A feltöltött fájl mérete túl nagy (maximum megengedett: %s KB) !');
define('ERR_INVALID_IMG', 'A feltöltött fájl nem egy érvényes képformátum !');
define('ALLOWED_IMG_TYPES', 'Csak %s kép feltöltése megengedett.');
define('ERR_INSERT_PIC', 'A \'%s\' kép nem adható hozzá az albumhoz ');
define('UPLOAD_SUCCESS', 'A kép feltöltése sikeres volt<br /><br />Jóváhagyás után látható lesz.');
define('INFO', 'Információ');
define('ERR_COMMENT_EMPTY', 'Nem adott meg kommentárt !');
define('ERR_INVALID_FEXT', 'Csak a következõ kiterjesztésû fájlok megengedettek: <br /><br />%s.');
define('NO_FLOOD', 'Már hozzászóltál a képhez.<br /><br />Szerkeszd az elõzõ hozzászólásod, ha szükséges');
define('REDIRECT_MSG', 'Átirányítás folyamatban.<br /><br /><br />Nyomd meg a \'CONTINUE\'-t, ha a kép nem frissül automatikusan');
define('UPL_SUCCESS', 'A kép sikeresen hozzáadásra került');

// lang_delete_php
define('CAPTION', 'Képaláírás');
define('FS_PIC', 'teljes méretû kép');
define('DEL_SUCCESS', 'törlés sikeres');
define('NS_PIC', 'normál méretû kép');
define('ERR_DEL', 'nem lehet törölni');
define('THUMB_PIC', 'ikon');
define('COMMENT', 'megjegyzés');
define('IM_IN_ALB', 'kép az albumban');
define('ALB_DEL_SUCCESS', ' \'%s\' album törölve');
define('ALB_MGR', 'Albummenedzser');
define('ERR_INVALID_DATA', 'Érvénytelen adat a következõben \'%s\'');
define('CREATE_ALB', 'Album generálása \'%s\'');
define('UPDATE_ALB', 'Album módosítás \'%s\' név: \'%s\' index: \'%s\'');
define('DEL_PIC', 'Kép törlése');
define('DEL_ALB', 'Album törlése');
define('DEL_USER', 'Felhasználó törlése');
define('ERR_UNKNOWN_USER', 'A kijelölt felhasználó nem létezik !');
define('COMMENT_DELETED', 'A megjegyzést sikeresen töröltük');

// lang_display_image_php
define('CONFIRM_DEL', 'Biztosan törölni akarod ezt a képet? \\nA hozzászólások is törlõdnek.');
define('DEL_PIC', 'A KÉP TÖRLÉSE');
define('SIZE', '%s x %s pixel');
define('VIEWS', '%s');
define('SLIDESHOW', 'Diavetítés');
define('STOP_SLIDESHOW', 'DIAVETíTÉS VÉGE');
define('VIEW_FS', 'Teljes méretû kép megtekintése');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('TITLE', 'Kép információ');
define('FILENAME', 'Fájlnév');
define('ALBUM NAME', 'Album név');
define('RATING', 'Osztályozás (%s szavazat)');
define('KEYWORDS', 'Kulcsszavak');
define('FILE SIZE', 'Fájlméret');
define('DIMENSIONS', 'Méretek');
define('DISPLAYED', 'Megtekintések száma');
define('CAMERA', 'Kamera');
define('DATE TAKEN', 'Felvétel dátuma');
define('APERTURE', 'Apertúra');
define('EXPOSURE TIME', 'Expozíció idõpontja');
define('FOCAL LENGTH', 'Fókusztávolság');
define('COMMENT', 'Megjegyzés');
define('ADDFAV', 'Hozzáadás a kedvencekhez');
define('ADDFAVPHRASE', 'Kedvencek');
define('REMFAV', 'Kivétel kedvencekbõl');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'Hozzászólás szerkesztése');
define('CONFIRM_DELETE', 'Biztos törölni kívánod a hozzászólást?');
define('ADD_YOUR_COMMENT', 'Hozzászólás hozzáfûzése');
define('NAME', 'Név');
define('COMMENT', 'Megjegyzés');
define('YOUR_NAME', 'Anon');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Klikkelj a képre az ablak bezárásához');

// lang_ecard_php
define('TITLE', 'E-képeslap küldése');
define('INVALID_EMAIL', '<b>Figyelmeztetés</b> : érvénytelen e-mail cím!');
define('ECARD_TITLE', 'Egy e-képeslap %s -tól neked');
define('VIEW_ECARD', 'Ha az e-képeslap nem jelenik meg helyesen, klikkelj a következõ linkre');
define('VIEW_MORE_PICS', 'Klikkelj erre a linkre további képek megtekintéséhez!');
define('SEND_SUCCESS', 'E-képeslapod továbbítottuk');
define('SEND_FAILED', 'Sajnálom, de a szerver nem tud e-képeslapot küldeni...');
define('FROM', 'Feladó');
define('YOUR_NAME', 'Neved');
define('YOUR_EMAIL', 'E-mail címed');
define('TO', 'Címzett');
define('RCPT_NAME', 'Címzett neve');
define('RCPT_EMAIL', 'Címzett e-mail címe');
define('GREETINGS', 'Üdvözlet');
define('MESSAGE', 'Üzenet');

// lang_editpics_php
define('PIC_INFO', 'Kép információ');
define('ALBUM', 'Album');
define('TITLE', 'Cím');
define('DESC', 'Leírás');
define('KEYWORDS', 'Kulcsszavak');
define('PIC_INFO_STR', '%sx%s - %sKB - %s megtekintés - %s szavazat');
define('APPROVE', 'Kép jóváhagyása');
define('POSTPONE_APP', 'Jóváhagyás késõbb');
define('DEL_PIC', 'Kép törlés');
define('RESET_VIEW_COUNT', 'Nézettségszámláló nullázása');
define('RESET_VOTES', 'Szavazatszámláló alaphelyzetbe');
define('DEL_COMM', 'Hozzászólások törlése');
define('UPL_APPROVAL', 'Feltöltés jóváhagyás');
define('EDIT_PICS', 'Képek rendezése');
define('SEE_NEXT', 'Következõ kép');
define('SEE_PREV', 'Elõzõ kép');
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
define('APPLY', 'Módosítások végrehajtása');
define('CREATE_NEW_GROUP', 'Új csoport létrehozása');
define('DEL_GROUPS', 'Kijelölt csoport(ok) törlése ');
define('CONFIRM_DEL', 'Figyelmeztetés: ha törölsz egy csoportot, a hozzá tartozó felhasználók áthelyezõdnek a \'Registered\' csoportba !\\n\\nFolytatod ?');
define('TITLE', 'Felhasználócsoportok menedzselése');
define('APPROVAL_1', 'Nyilvános feltöltés jóváhagyás (1)');
define('APPROVAL_2', 'Privát feltöltés jóváhagyás (2)');
define('NOTE1', '<b>(1)</b> A nyilvános albumba történõ feltöltés adminisztrátori jóváhagyást igényel');
define('NOTE2', '<b>(2)</b> A felhasználó albumába történõ feltöltés adminisztrátori jóváhagyást igényel');
define('NOTES', 'Megjegyzések');

// lang_index_php
define('WELCOME', 'Üdvözöllek!');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Biztos törölni akarod az albumot? \\nMinden kép és hozzászólás is törlõdik!');
define('DELETE', 'TÖRLÉS');
define('MODIFY', 'TULAJDONSÁGOK');
define('EDIT_PICS', 'SZERKESZTÉS');

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
define('CAN_UPLOAD', 'Látogatók feltölthetnek képet');
define('CAN_POST_COMMENTS', 'Látogatók küldhetnek hozzászólásokat');
define('CAN_RATE', 'Látogatók osztályozhatják a képeket');
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

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'Bár a {SITE_NAME} adminisztrátora mindent elkövet, hogy amilyen gyorsan csak lehet, szerkesszen vagy töröljön minden kifogásolható dokumentumot, lehetetlen minden küldemény ellenõrzése. Kérjük ezért annak megértését, hogy minden erre a weblapra címzett küldemény annak szerzõje nézetét és véleményét fejezi ki, és nem az adminisztrátorét, illetve webmesterét (kivéve az általuk postázott küldeményeket). Ennél fogva nem tudunk értük felelõsséget vállalni.<br />
<br />
Elfogadod, hogy nem postázol semmilyen sértõ, obszcén, vulgáris, rágalmazó, gyûlölködõ, fenyegetõ, szexuális tartalmú, vagy bármilyen más olyan tartalmú anyagot, amely érvényes törvényt sért. Elfogadod, hogy a {SITE_NAME} webmesterének, adminisztrátorának, vagy moderátorának bármikor jogában áll bármilyen tartalmat szükség esetén törölni, vagy szerkeszteni. Mint felhasználó egyetértesz a közölt információk adatbázisban történõ tárolásához. Bár a webmester, illetve adminisztrátor nem adja ki harmadik feleknek ezeket az információkat a hozzájárulásod nélkül, nem tehetõ felelõssé semmilyen olyan hacker kísérletért, melyek az adatok kompromittálásához vezet.<br />
<br />
Ez a weblap cookie formájában információt tárol a számítógépeden. Ezek a cookie-k csak azt a célt szolgálják, hogy fokozzák a nézhetõségi élményt. Az email cím csak a regisztrációs adataidnak és jelszavadnak nyugtázására szolgál.<br />
<br />
Az \'Egyetértek\'-re klikkelve elfogadod ezeket a feltételeket.');

// lang_register_php
define('PAGE_TITLE', 'Felhasználó regisztráció');
define('TERM_COND', 'Regisztrációs feltételek');
define('I_AGREE', 'Egyetértek');
define('SUBMIT', 'Regisztrálás');
define('ERR_USER_EXISTS', 'A megadott felhasználónév már létezik, adjon meg másikat');
define('ERR_PASSWORD_MISMATCH', 'A két jelszó nem egyezik, add meg újra');
define('ERR_UNAME_SHORT', 'A felhasználónév legalább 2 karakter hosszú kell, hogy legyen');
define('ERR_PASSWORD_SHORT', 'A jelszó legalább 2 karakter hosszú kell, hogy legyen');
define('ERR_UNAME_PASS_DIFF', 'A felhasználónévnek és a jelszónak különböznie kell');
define('ERR_INVALID_EMAIL', 'Érvénytelen email cím');
define('ERR_DUPLICATE_EMAIL', 'Egy másik felhasználó már regisztrált ezzel az email címmel');
define('ENTER_INFO', 'Regisztrációs információk megadása');
define('REQUIRED_INFO', 'Kötelezõ adat');
define('OPTIONAL_INFO', 'Opcionális adat');
define('USERNAME', 'Felhasználónév');
define('PASSWORD', 'Jelszó');
define('PASSWORD_AGAIN', 'Jelszó még egyszer');
define('EMAIL', 'Email');
define('LOCATION', 'Tartózkodási hely');
define('INTERESTS', 'Érdeklõdési kör');
define('WEBSITE', 'Honlap');
define('OCCUPATION', 'Foglalkozás');
define('ERROR', 'HIBA');
define('CONFIRM_EMAIL_SUBJECT', '%s - Regisztráció nyugtázása');
define('INFORMATION', 'Információ');
define('FAILED_SENDING_EMAIL', 'A regisztrációs megerõsítõ emailt nem sikerült elküldeni !');
define('THANK_YOU', 'Köszönjük, hogy regisztráltál.<br /><br />Küldtünk egy emailt a megadott email címre, amiben megadtuk, hogy hogyan aktiválhatod felhasználói hozzáférésed.');
define('ACCT_CREATED', 'Felhasználói hozzáférésed létrehoztuk és bejelentkezhetsz a felhasználóneveddel és jelszavaddal');
define('ACCT_ACTIVE', 'Felhasználói hozzáférésed aktiváltuk és bejelentkezhetsz a felhasználóneveddel és jelszavaddal');
define('ACCT_ALREADY_ACT', 'Felhasználói hozzáférésed már aktív !');
define('ACCT_ACT_FAILED', 'Ezt a felhasználói hozzáférést nem lehet aktiválni !');
define('ERR_UNK_USER', 'A kiválasztott felhasználó nem létezik !');
define('X_S_PROFILE', '%s profilja');
define('GROUP', 'Csoport');
define('REG_DATE', 'Csatlakozás ideje');
define('DISK_USAGE', 'Tárfelhasználás');
define('CHANGE_PASS', 'Jelszó megváltoztatása');
define('CURRENT_PASS', 'Jelenlegi jelszó');
define('NEW_PASS', 'Új jelszó');
define('NEW_PASS_AGAIN', 'Új jelszó még egyszer');
define('ERR_CURR_PASS', 'A jelenlegi jelszó hibás');
define('APPLY_MODIF', 'Módosítások végrehajtása');
define('UPDATE_SUCCESS', 'Profilod aktualizáltuk');
define('PASS_CHG_SUCCESS', 'Jelszavad megváltoztattuk');
define('PASS_CHG_ERROR', 'Jelszavad nem változtattuk meg');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Köszönjük, hogy regisztráltál \'{SITE_NAME}\' weblapunkon

Felhasználóneved : "{USER_NAME}"
Jelszavad : "{PASSWORD}"

Felhaználói hozzáférésed aktiválásához az alábbi linkre kell klikkelned.

{ACT_LINK}

Üdvözlettel,

A \'{SITE_NAME}\' adminisztrátora
');

// lang_reviewcom_php
define('TITLE', 'Hozzászólások megtekintése');
define('NO_COMMENT', 'Nincs hozzászólás');
define('N_COMM_DEL', '%s hozzászólás(ok) törölve');
define('N_COMM_DISP', 'Megjelenítendõ hozzászólások száma');
define('SEE_PREV', 'Elõzõ');
define('SEE_NEXT', 'Következõ');
define('DEL_COMM', 'Kijelölt hozzászólások törölve');

// lang_search_php
define('SEARCH', 'Keresés a képtárban');

// lang_search_new_php
define('PAGE_TITLE', 'Új kép keresése');
define('SELECT_DIR', 'Könyvtár választása');
define('SELECT_DIR_MSG', 'Ez a funkció lehetõvé teszi egy köteg - FTP-vel a szerverre másolt - kép hozzáadását a képtárhoz.<br /><br />Válaszd ki a könyvtárat, ahonnan hozzá akarsz adni a képtárhoz képeket');
define('NO_PIC_TO_ADD', 'Nincs hozzáadható kép');
define('NEED_ONE_ALBUM', 'Ehhez a funkcióhoz legalább egy albumnak léteznie kell');
define('WARNING', 'Figyelmeztetés');
define('CHANGE_PERM', 'a szkript nem tud írni ebbe a könyvtárba, 755-rõl 777-re kell cserélned a jogosultságát mielõtt hozzáadsz képeket !');
define('TARGET_ALBUM', '<b>Adja hozzá a </b>\"%s\"<b> könyvtárból a képeket a </b>%s albumhoz');
define('FOLDER', 'Könyvtár');
define('IMAGE', 'Kép');
define('ALBUM', 'Album');
define('RESULT', 'Eredmény');
define('DIR_RO', 'Nem írható. ');
define('DIR_CANT_READ', 'Nem olvasható. ');
define('INSERT', 'Új képek hozzáadása a képtárhoz');
define('LIST_NEW_PIC', 'Új képek felsorolása');
define('INSERT_SELECTED', 'Kijelölt képek hozzáadása');
define('NO_PIC_FOUND', 'Nincs új kép');
define('BE_PATIENT', 'Légy türelemmel, a szkriptnek idõ kell a képek hozzáadásához');
define('NOTES', '<ul><li><b>OK</b> : azt jelenti, hogy a kép hozzáadása sikeres volt<li><b>DP</b> : azt jelenti, hogy a kép már az adatbázisban volt<li><b>PB</b> : azt jelenti, hogy a kép nem volt hozzáadható, ellenõrizd a konfigurációt és a képeket tartalmazó könyvtárak jogosultságait <li>Ha az OK, DP, PB \'jelek\' nem láthatók, klikkelj a hibás képre a PHP hibaüzenetének megjelenítéséhez<li>Ha a browser leidõzített, nyomja meg a frissítés gombot</ul>');

// lang_upload_php
define('TITLE', 'Kép feltöltése');
define('MAX_FSIZE', 'Maximum megengedett fájlméret %s KB');
define('ALBUM', 'Album');
define('PICTURE', 'Kép');
define('PIC_TITLE', 'Kép címe');
define('DESCRIPTION', 'Kép leírása');
define('KEYWORDS', 'Kulcsszavak (szóközökkel elválasztva)');
define('ERR_NO_ALB_UPLOADABLES', 'Nincs album, ahova engedélyezett a feltöltés');

// lang_usermgr_php
define('TITLE', 'Felhasználók menedzselése');
define('NAME_A', 'Név növekvõ');
define('NAME_D', 'Név csökkenõ');
define('GROUP_A', 'Csoport növekvõ');
define('GROUP_D', 'Csoport csökkenõ');
define('REG_A', 'Reg. dátum növekvõ');
define('REG_D', 'Reg. dátum csökkenõ');
define('PIC_A', 'Képszám növekvõ');
define('PIC_D', 'Képszám csökkenõ');
define('DISKU_A', 'Diszkfelhasználás növekvõ');
define('DISKU_D', 'Diszkfelhasználás csökkenõ');
define('SORT_BY', 'Felhasználók sorrendezése');
define('ERR_NO_USERS', 'Nincs felhasználó !');
define('ERR_EDIT_SELF', 'Nem szerkesztheted a saját profilod, használd az \'Én profilom\' menüpontot');
define('EDIT', 'SZERKESZT');
define('DELETE', 'TÖRÖL');
define('NAME', 'Felhasználónév');
define('GROUP', 'Csoport');
define('INACTIVE', 'Inaktív');
define('OPERATIONS', 'Mûveletek');
define('PICTURES', 'Képek');
define('DISK_SPACE', 'Felhasznált tárhely / kvóta');
define('REGISTERED_ON', 'Regisztrálva');
define('U_USER_ON_P_PAGES', '%d felhasználó %d oldalon');
define('CONFIRM_DEL', 'Biztös törölni kívánod a felhasználót? \\nMinden képe és albuma is törlõdni fog.');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'A kijelölt felhasználó nem létezik !');
define('MODIFY_USER', 'Felhasználó módosítása');
define('NOTES', 'Megjegyzések');
define('NOTE_LIST', '<li>Ha nem kívánod megváltoztatni az aktuális jelszót, hagyd üresen a \"jelszó\" mezõt');
define('PASSWORD', 'Jelszó');
define('USER_ACTIVE', 'Felhasználó aktív');
define('USER_GROUP', 'Felhasználó csoport');
define('USER_EMAIL', 'Felhasználó email címe');
define('USER_WEB_SITE', 'Felhasználó honlapja');
define('CREATE_NEW_USER', 'Új felhasználó létrehozása');
define('USER_LOCATION', 'Felhasználó lakhelye');
define('USER_INTERESTS', 'Felhasználó érdeklõdési köre');
define('USER_OCCUPATION', 'Felhasználó foglalkozása');

// lang_util_php
define('TITLE', 'Képek átméretezése');
define('WHAT_IT_DOES', 'Mi történjen');
define('WHAT_UPDATE_TITLES', 'Címek aktualizálása fájlnevekbõl');
define('WHAT_DELETE_TITLE', 'Címek törlése');
define('WHAT_REBUILD', 'Ikonok és átméretezett képek újragenerálása');
define('WHAT_DELETE_ORIGINALS', 'Eredeti képek felülírása az átméretezettekkel');
define('FILE', 'Fájl');
define('TITLE_SET_TO', 'cím beállítása ..');
define('SUBMIT_FORM', 'érvényesítés');
define('UPDATED_SUCCESFULLY', 'sikeres módosítás');
define('ERROR_CREATE', 'HIBA a generálás során');
define('CONTINUE', 'Több kép feldolgozása');
define('MAIN_SUCCESS', 'A % fájlok felhasználása elsõdleges képként sikeres volt');
define('ERROR_RENAME', '%s %s -ra átnevezése során HIBA');
define('ERROR_NOT_FOUND', 'A % fájlok nem találhatók');
define('BACK', 'vissza a fõoldalra');
define('THUMBS_WAIT', 'Ikonok és/vagy átméretezett képek aktualizálása, kérlek várj...');
define('THUMBS_CONTINUE_WAIT', 'Ikonok és/vagy átméretezett képek aktualizálásának folytatása...');
define('TITLES_WAIT', 'Címek aktualizálása, kérlek várj...');
define('DELETE_WAIT', 'Címek törlése, kérlek várj...');
define('REPLACE_WAIT', 'Eredeti képek felülírása az átméretezettekkel, kérlek várj...');
define('INSTRUCTION', 'Gyors utasítások');
define('INSTRUCTION_ACTION', 'Mûvelet kiválasztása');
define('INSTRUCTION_PARAMETER', 'Paraméterek beállítása');
define('INSTRUCTION_ALBUM', 'Album kiválasztása');
define('INSTRUCTION_PRESS', 'Nyomj %-t');
define('UPDATE', 'Ikonok és/vagy átméretezett fényképek aktualizálása');
define('UPDATE_WHAT', 'Mit kell aktualizálni');
define('UPDATE_THUMB', 'Csak ikonokat');
define('UPDATE_PIC', 'Csak átméretezett képeket');
define('UPDATE_BOTH', 'Ikonokat és átméretezett képeket is');
define('UPDATE_NUMBER', 'Klikkelésenként feldolgozandó képek száma');
define('UPDATE_OPTION', '(Próbáld csökkenteni ezt az értéket, ha leidõzítési problémát észlelsz)');
define('FILENAME_TITLE', 'Fájlnév &#8594; Kép cím');
define('FILENAME_HOW', 'Hogy legyen módosítva a fájlnév');
define('FILENAME_REMOVE', 'A jpg végzõdés törlése és _ (alulvonás) helyettesítése szóközzel');
define('FILENAME_EURO', '2003_11_23_13_20_20.jpg átnevezése 23/11/2003 13:20-ra');
define('FILENAME_US', '2003_11_23_13_20_20.jpg átnevezése 11/23/2003 13:20-ra');
define('FILENAME_TIME', '2003_11_23_13_20_20.jpg átnevezése 13:20ra');
define('DELETE', 'Kép címek vagy eredeti méretû képek törlése');
define('DELETE_TITLE', 'Kép címek törlése');
define('DELETE_ORIGINAL', 'Eredeti méretû képek törlése');
define('DELETE_REPLACE', 'Eredeti képek felülírása átméretezettel');
define('SELECT_ALBUM', 'Album kiválasztása');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?> 