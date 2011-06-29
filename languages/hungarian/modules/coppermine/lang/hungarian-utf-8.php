<?php 
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.2.2   nuke - Language Pack 0.93                //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003 Gregory DEMAR <gdemar@wanadoo.fr>                 //
// http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// New Port by CPG-nuke Dev Team                                                 //
// http://coppermine.findhere.org/                                          //
// Based on coppermine 1.1d by Surf  http://www.surf4all.net/               //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify     //
// it under the terms of the GNU General Public License as published by     //
// the Free Software Foundation; either version 2 of the License, or        //
// (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //
define('PIC_VIEWS', 'Views');
define('PIC_VOTES', 'Votes');
define('PIC_COMMENTS', 'Comments');

// info about translators and translated language
$lang_translation_info = array(
    'lang_name_english' => 'Hungarian', // the name of your language in English, e.g. 'Greek' or 'Spanish'
    'lang_name_native' => 'Magyar', // the name of your language in your mother tongue (for non-latin alphabets, use unicode), e.g. '????????' or 'Español'
    'lang_country_code' => 'hu', // the two-letter code for the country your language is most-often spoken (refer to http://www.iana.org/cctld/cctld-whois.htm), e.g. 'gr' or 'es'
    'trans_name' => 'Peter Ardo', // the name of the translator - can be a nickname
    'trans_email' => 'petardo@freemail.hu', // translator's email address (optional)
    'trans_website' => '', // translator's website (optional)
    'trans_date' => '2003-10-20', // the date the translation was created / last modified
    );

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('byte', 'KB', 'MB');
// Day of weeks and months
$lang_day_of_week = array('H', 'K', 'Sze', 'Cs', 'P', 'Szo', 'V');
$lang_month = array('Jan', 'Feb', 'Már', 'Ápr', 'Máj', 'Jún', 'Júl', 'Aug', 'Szept', 'Okt', 'Nov', 'Dec');
// Some common strings
$lang_yes = 'Igen';
$lang_no = 'Nem';
$lang_back = 'VISSZA';
$lang_continue = 'TOVÁBB';
$lang_info = 'Információ';
$lang_error = 'Hiba';
// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt = '%Y %B %d';
$lastcom_date_fmt = '%y.%m.%d %H:%M';
$lastup_date_fmt = '%Y %B %d';
$register_date_fmt = '%Y %B %d';
$lasthit_date_fmt = '%Y %B %d %H:%M';
$comment_date_fmt = '%Y %B %d %H:%M';
// For the word censor
$lang_bad_words = array('basz*', 'segg*', 'fasz*', 'kurva*', 'picsa', 'geci');

$lang_meta_album_names = array('random' => 'Véletlen képlista',
    'lastup' => 'Friss feltöltések',
    'lastupby' => 'My Last Additions', // new 1.2.2
    'lastalb' => 'Utoljára módosított albumok',
    'lastcom' => 'Friss hozzászólások',
    'lastcomby' => 'My Last comments', // new 1.2.2
    'topn' => 'Legtöbbször nézett',
    'toprated' => 'Legtöbb szavazat',
    'lasthits' => 'Utoljára nézett',
    'search' => 'Keresés eredménye',
    'favpics' => 'Kedvenc képeim'
    );

$lang_errors = array('access_denied' => 'Nincs jogosultságod ennek az oldalnak a megtekintéséhez.',
    'perm_denied' => 'Nincs jogosultságod ennek a mûveletnek az elvégzéséhez.',
    'param_missing' => 'Szkript hívás a szüksége paraméter(ek) megadása nélkül.',
    'non_exist_ap' => 'A kijelölt album / kép nem található!',
    'quota_exceeded' => 'Diszk kvóta túllépve<br /><br />A beállított diszkkvóta [quota]K, a képeid által jelenleg elfoglalt tárhely [space]K, ennek a képnek a feltöltésével túllépnéd a kvótáját.',
    'gd_file_type_err' => 'GD könyvtár használata esetén csak JPEG és PNG típusok megengedettek.',
    'invalid_image' => 'A feltöltött kép sérült, vagy a GD könyvtár által nem kezelhetõ',
    'resize_failed' => 'Nem sikerült az ikonizált vagy átméretezett képek generálása.',
    'no_img_to_display' => 'Nincs megjeleníthetõ kép',
    'non_exist_cat' => 'A kijelölt kategória nem létezik',
    'orphan_cat' => 'A kategória szülõkategóriája nem létezik, futtasd a kategóriamenedzsert a probléma kiküszöbölésére.',
    'directory_ro' => 'A \'%s\' könyvtár nem írható, a képeket nem lehet törölni',
    'non_exist_comment' => 'A kijelölt hozzászólás nem létezik.',
    'pic_in_invalid_album' => 'Kép nem létezõ albumban (%s)!?',
    'banned' => 'Jelenleg ki vagy tiltva a weblap használatából.',
    'not_with_udb' => 'Ez a funkció le van tiltva a Coppermine-ban, mivel a fórum sw része. A kért funkciót vagy nem támogatja a jelen konfiguráció, vagy a fórum sw kezeli.',
    'members_only' => 'This function is for members only, please join.', // changed in cpg1.2.0nuke
    'mustbe_god' => 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function'
    );
// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //
$lang_main_menu = array('alb_list_title' => 'Ugrás az albumlistára',
    'alb_list_lnk' => 'Albumlista',
    'my_gal_title' => 'Ugrás a személyes képtárra',
    'my_gal_lnk' => 'Én képtáram',
    'my_prof_lnk' => 'Én profilom',
    'adm_mode_title' => 'Váltás adminisztrátor módra',
    'adm_mode_lnk' => 'Adminisztrátor mód',
    'usr_mode_title' => 'Váltás felhasználó módra',
    'usr_mode_lnk' => 'Felhasználó mód',
    'upload_pic_title' => 'Kép feltöltés az albumba',
    'upload_pic_lnk' => 'Kép feltöltése',
    'register_title' => 'Felhasználó hozzáadása',
    'register_lnk' => 'Regisztráció',
    'login_lnk' => 'Bejelentkezés',
    'logout_lnk' => 'Kijelentkezés',
    'lastup_lnk' => 'Friss feltöltések',
    'lastcom_lnk' => 'Friss hozzászólások',
    'topn_lnk' => 'Legtöbbször nézett',
    'toprated_lnk' => 'Legtöbb szavazat',
    'search_lnk' => 'Keresés',
    'fav_lnk' => 'Kedvencek',
    );

$lang_gallery_admin_menu = array('upl_app_lnk' => 'Feltöltés jóváhagyás',
    'config_lnk' => 'Konfiguráció',
    'albums_lnk' => 'Albumok',
    'categories_lnk' => 'Kategóriák',
    'users_lnk' => 'Felhasználók',
    'groups_lnk' => 'Csoportok',
    'comments_lnk' => 'Hozzászólások',
    'searchnew_lnk' => 'Kötegelt feltöltés',
    'util_lnk' => 'Képek átméretezése',
    'ban_lnk' => 'Felhasználók kitiltása',
    );

$lang_user_admin_menu = array('albmgr_lnk' => 'Személyes albumok szerkesztése',
    'modifyalb_lnk' => 'Személyes albumok tulajdonságai',
    'my_prof_lnk' => 'Én profilom',
    );

$lang_cat_list = array('category' => 'Kategória',
    'albums' => 'Albumok',
    'pictures' => 'Képek',
    );

$lang_album_list = array('album_on_page' => '%d album %d oldalon'
    );

$lang_thumb_view = array('date' => 'DÁTUM',
    'name' => 'NÉV',
    'title' => 'Kép cím',
    'sort_da' => 'Dátum szerinti sorrendezés, növekvõ',
    'sort_dd' => 'Dátum szerinti sorrendezés, csökkenõ',
    'sort_na' => 'Név szerinti sorrendezés, növekvõ',
    'sort_nd' => 'Név szerinti sorrendezés, csökkenõ',
    'sort_ta' => 'Sorrendezés cím szerint - növekvõ',
    'sort_td' => 'Sorrendezés cím szerint - csökkenõ',
    'pic_on_page' => '%d kép %d oldalon',
    'user_on_page' => '%d felhasználó %d oldalon',
    'sort_ra' => 'Sort by rating ascending', // new in cpg1.2.0nuke
    'sort_rd' => 'Sort by rating descending', // new in cpg1.2.0nuke
    'rating' => 'RATING', // new in cpg1.2.0nuke
    'sort_title' => 'Sort pictures by:', // new in cpg1.2.0nuke
    );

$lang_img_nav_bar = array('thumb_title' => 'Vissza az ikonos elrendezésre',
    'pic_info_title' => 'Kép információ megtekintése / elrejtése',
    'slideshow_title' => 'Diavetítés',
    'slideshow_disabled' => 'e-cards are disabled', // new in cpg1.2.0nuke
    'slideshow_disabled_msg' => $lang_errors['members_only'], // new in cpg1.2.0nuke
    'ecard_title' => 'Kép elküldése e-képeslapként',
    'ecard_disabled' => 'e-képeslapok küldése nem engedélyezett',
    'ecard_disabled_msg' => 'Nincs jogosultságod e-képeslap küldésére',
    'prev_title' => 'Elõzõ kép',
    'next_title' => 'Következõ kép',
    'pic_pos' => 'KÉP %s/%s',
    'no_more_images' => 'There are no more images in this galley', // new in cpg1.2.0nuke
    'no_less_images' => 'This is the first image in the gallery', // new in cpg1.2.0nuke
    );

$lang_rate_pic = array('rate_this_pic' => 'Kép osztályozása ',
    'no_votes' => '(Még nincs osztályozva)',
    'rating' => '(jelenlegi osztályzat: %s, %s szavazattal)',
    'rubbish' => 'Vacak',
    'poor' => 'Gyenge',
    'fair' => 'Megfelelõ',
    'good' => 'Jó',
    'excellent' => 'Kitûnõ',
    'great' => 'Szuper',
    );
// ------------------------------------------------------------------------- //
// File include/exif.inc.php
// ------------------------------------------------------------------------- //
// void
// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //
$lang_cpg_die = array(
    INFORMATION => $lang_info,
    ERROR => $lang_error,
    CRITICAL_ERROR => 'Kritikus hiba',
    'file' => 'Fájl: ',
    'line' => 'Sor: ',
    );

$lang_display_thumbnails = array('filename' => 'Fájlnév : ',
    'filesize' => 'Fájlméret : ',
    'dimensions' => 'Méretek : ',
    'date_added' => 'Feltöltés dátuma : '
    );

$lang_get_pic_data = array('n_comments' => '%s kommentár',
    'n_views' => '%s megtekintés',
    'n_votes' => '(%s szavazat)'
    );
// ------------------------------------------------------------------------- //
// File include/init.inc.php
// ------------------------------------------------------------------------- //
// void
// ------------------------------------------------------------------------- //
// File include/picmgmt.inc.php
// ------------------------------------------------------------------------- //
// void
// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array('Exclamation' => 'Felkiáltás',
        'Question' => 'Kérdés',
        'Very Happy' => 'Nagyon boldog',
        'Smile' => 'Mosolyog',
        'Sad' => 'Szomorú',
        'Surprised' => 'Meglepett',
        'Shocked' => 'Sokkolt',
        'Confused' => 'Zavarodott',
        'Cool' => 'Higgadt',
        'Laughing' => 'Nevet',
        'Mad' => 'Õrült',
        'Razz' => 'Gúnyos',
        'Embarassed' => 'Kínos',
        'Crying or Very sad' => 'Sír / nagyon szomorú',
        'Evil or Very Mad' => 'Gonosz vagy õrült',
        'Twisted Evil' => 'Torz gonosz',
        'Rolling Eyes' => 'Guruló szemek',
        'Wink' => 'Kacsint',
        'Idea' => 'Ötlet',
        'Arrow' => 'Nyíl',
        'Neutral' => 'Semleges',
        'Mr. Green' => 'Mr. Zöld',
        );
// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //
// void
// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) $lang_admin_php = array(0 => 'Kilépés adminisztrátor módból...',
        1 => 'Váltás adminisztrátor módra...',
        );
// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) $lang_albmgr_php = array('alb_need_name' => 'Az albumokat el kell nevezni!',
        'confirm_modifs' => 'Biztos végre akarod hajtani ezt a módosítást?',
        'no_change' => 'Semmit nem változtattál!',
        'new_album' => 'Új album',
        'confirm_delete1' => 'Biztos törlöd az albumot?',
        'confirm_delete2' => '\nA tartalmazott összes kép és hozzászólás törlõdik!',
        'select_first' => 'Elõször válassz albumot',
        'alb_mrg' => 'Albummenedzser',
        'my_gallery' => '* Az én képtáram *',
        'no_category' => '* Nincs kategória *',
        'delete' => 'Törlés',
        'new' => 'Új',
        'apply_modifs' => 'Módosítások végrehajtása',
        'select_category' => 'Válassz kategóriát',
        );
// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) $lang_catmgr_php = array('miss_param' => 'A \'%s\' mûvelethez szükséges paraméterek hiányoznak!',
        'unknown_cat' => 'Nincs az adatbázisban a kijelölt kategória ',
        'usergal_cat_ro' => 'A személyes képtárak nem törölhetõk!',
        'manage_cat' => 'Kategóriák menedzselése',
        'confirm_delete' => 'Biztosan törlöd ezt a kategóriát?',
        'category' => 'Kategória',
        'operations' => 'Mûveletek',
        'move_into' => 'Mozgatás a következõbe',
        'update_create' => 'Kategória létrehozás / módosítás',
        'parent_cat' => 'Szülõ kategória',
        'cat_title' => 'Kategória megnevezés',
        'cat_desc' => 'Kategória leírása'
        );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
if (defined('CONFIG_PHP')) $lang_config_php = array('title' => 'Konfiguráció',
        'restore_cfg' => 'Gyári beállítások',
        'save_cfg' => 'Konfiguráció tárolása',
        'notes' => 'Megjegyzések',
        'info' => 'Információ',
        'upd_success' => 'Coppermine konfiguráció frissítve',
        'restore_success' => 'Coppermine gyári beállítás visszaállítva',
        'name_a' => 'Név - növekvõ',
        'name_d' => 'Név - csökkenõ',
        'title_a' => 'Cím szerint - növekvõ',
        'title_d' => 'Cím szerint - csökkenõ',
        'date_a' => 'Dátum növekvõ',
        'date_d' => 'Dátum csökkenõ'
        );
// start left side interpretation
if (defined('CONFIG_PHP'))
    $lang_config_data = array(
        // General settings
        'Általános beállítások',
        array(
            'Képtár neve', 'gallery_name', 0),
        array(
            'Képtár leírása', 'gallery_description', 0),
        array(
            'K说ఠadminisztr೯r email c쬥', 'gallery_admin_email', 0),
        array(
            'Az e-képeslapok  \'További képek\' linkjéhez tartozó webcím', 'ecards_more_pic_target', 0),
        array(
            'Nyelv megadása', 'lang', 5),
// for postnuke change
        array('Megjelenítési téma', 'cpgtheme', 6),
        array(
            'Page Specific Titles instead of >Coppermine', 'nice_titles', 1), 
        array('Show blocks on the right', 'right_blocks', 1), // new 1.2.2
        // 'Album list view',,
        'Albumlista nézet',
        array(
            'Fõtáblázat szélessége (pixel vagy %)', 'main_table_width', 0),
        array(
            'Kategóriák megjelenítendõ száma', 'subcat_level', 0),
        array(
            'Oldalanként megjelenítendõ albumok száma', 'albums_per_page', 0),
        array(
            'Albumlista oszlopainak száma', 'album_list_cols', 0),
        array(
            'Ikonok mérete pixelben', 'alb_list_thumb_size', 0),
        array(
            'A fõoldal tartalma', 'main_page_layout', 0),
        array(
            'Elsõ szintû albumok ikonok megjelenítése a kategóriákban', 'first_level', 1), 
        // 'Thumbnail view',
        'Ikonlista nézet',
        array(
            'Oszlopok száma az ikonlistában', 'thumbcols', 0),
        array(
            'Sorok száma az ikonlistában', 'thumbrows', 0),
        array(
            'Megjelenítendõ tab- fülek maximális száma', 'max_tabs', 0),
        array(
            'Kép leírás megjelenítés (a kép címén felül) az ikonok alatt', 'caption_in_thumbview', 1),
        array(
            'Az ikon alatt megjelenjen -e a hozzászólások száma', 'display_comment_count', 1),
        array(
            'Képek alapértelmezett sorrendje', 'default_sort_order', 3),
        array(
            'Szavazatok minimuma a \'legtöbbször nézett\' listára való felkerüléshez', 'min_votes_for_rating', 0),
        array(
            'Alts and title tags of thumbnail show title and keyword instead of picinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
        // 'Image view &amp; Comment settings',
        'Kép-nézet és hozzászólás beállítások',
        array(
            'A kép-nézethez tartozó táblázat szélessége (pixel vagy %)', 'picture_table_width', 0),
        array(
            'Képinformációk láthatók alapértelmezésben', 'display_pic_info', 1),
        array(
            'Trágár szavak kiszûrése a hozzászólásokból', 'filter_bad_words', 1),
        array(
            'Hangulatkarakterek engedélyezése a hozzászólásokban', 'enable_smilies', 1),
        array(
            'A képleírás maximális hossza', 'max_img_desc_length', 0),
        array(
            'Maximális karakterszám szavanként', 'max_com_wlength', 0),
        array(
            'Sorok maximális száma hozzászólásonként', 'max_com_lines', 0),
        array(
            'Hozzászólások maximális hossza', 'max_com_size', 0),
        array(
            'Filmcsík megjelenítése', 'display_film_strip', 1),
        array(
            'Képkockák száma a filmcsíkban', 'max_film_strip_items', 0),
        array(
            'Allow viewing of full size pic by anonymous', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
        array('Number of days between being able to vote on the same image','keep_votes_time',0), // new in cpg1.2.2c nuke
//'Pictures and thumbnails settings',
        'Kép- és ikonbeállítások',
        array(
            'JPEG fájlok minõsége', 'jpeg_qual', 0),
        array(
            'Ikonok maximális mérete <b>*</b>', 'thumb_width', 0),
        array(
            'Méretek használata (ikonok szélessége, magassága, vagy maximális mérete)<b>*</b>', 'thumb_use', 7),
        array(
            'Közbensõ méretû kép generálása', 'make_intermediate', 1),
        array(
            'Közbensõ méretû képmaximális szélessége ésmagassága <b>*</b>', 'picture_width', 0),
        array(
            'Feltöltött képfájlok maximális mérete (KB)', 'max_upl_size', 0),
        array(
            'Feltöltött képek maximális szélessége és magassága (pixel)', 'max_upl_width_height', 0), 
        array(
            'Allow multiple Files to be upload with same file name', 'samename', 1), 
        // 'User settings',
        'Felhasználó beállítások',
        array(
            'Új felhasználók regisztrálhatnak', 'allow_user_registration', 1),
        array(
            'Regisztráció email megerõsítéshez kötött', 'reg_requires_valid_email', 1),
        array(
            'Két felhasználónak lehet azonos email címe', 'allow_duplicate_emails_addr', 1),
        array(
            'Felhasználóknak lehetnek privát albumai', 'allow_private_albums', 1), 
        array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',
        'Saját mezõk a képek leírásához (hagyd üresen, ha nem használod)',

        array(
            '1. mezõnév', 'user_field1_name', 0),
        array(
            '2. mezõnév', 'user_field2_name', 0),
        array(
            '3. mezõnév', 'user_field3_name', 0),
        array(
            '4. mezõnév', 'user_field4_name', 0), 
        // 'Pictures and thumbnails advanced settings',
        'Képek és ikonok különleges beállításai',
        array(
            'Privát album ikon megjelenítése be nem jelentkezett felhasználó esetén', 'show_private', 1),
        array(
            'Fájlnévben tiltott karakterek', 'forbiden_fname_char', 0),
        array(
            'Fájlnevek megengedett kiterjesztései', 'allowed_file_extensions', 0),
        array(
            'Képek átméretezéséhez használt módszer', 'thumb_method', 2),
        array(
            'ImageMagick / netpbm \'convert\' programjához vezetõ útvonal  (pld. /usr/bin/X11/)', 'impath', 0),
        array(
            'Megengedett képfajták (csak ImageMagick esetében)', 'allowed_img_types', 0),
        array(
            'Parancssor opciók ImageMagick-hoz', 'im_options', 0),
        array(
            'EXIF adatok olvasása  JPEG fájlokban', 'read_exif_data', 1),
        array(
            'Read IPTC data in JPEG files', 'read_iptc_data', 1), // new in cpg1.2.0nuke
        array(
            'Album elérési útvonala <b>*</b>', 'fullpath', 0),
        array(
            'Felhasználói képek elérési útvonala <b>*</b>', 'userpics', 0),
        array(
            'Középméretezett képek elõtagja <b>*</b>', 'normal_pfx', 0),
        array(
            'Ikonfájlok elõtagja <b>*</b>', 'thumb_pfx', 0),
        array(
            'Könyvtárak alapértelmezett jogosultság beállítása', 'default_dir_mode', 0),
        array(
            'Képek alapértelmezett jogosultság beállítása', 'default_file_mode', 0),
        array(
            'Picinfo display filename', 'picinfo_display_filename', '1'), // new in cpg1.2.0nuke
        array(
            'Picinfo display album name', 'picinfo_display_album_name', '1'), // new in cpg1.2.0nuke
        array(
            'Picinfo display_file_size', 'picinfo_display_file_size', '1'), // new in cpg1.2.0nuke
        array(
            'Picinfo display_dimensions', 'picinfo_display_dimensions', '1'), // new in cpg1.2.0nuke
        array(
            'Picinfo display_count_displayed', 'picinfo_display_count_displayed', '1'), // new in cpg1.2.0nuke
        array(
            'Picinfo display_URL', 'picinfo_display_URL', '1'), // new in cpg1.2.0nuke
        array(
            'Picinfo display URL as bookmark link', 'picinfo_display_URL_bookmark', '1'), // new in cpg1.2.0nuke
        array(
            'Picinfo display fav album link', 'picinfo_display_favorites', '1'), // new in cpg1.2.0nuke
        // 'Cookies &amp; Charset settings',
        'Cooky és karakterkészlet beállítások',
        array(
            'A szkript által használt cookynév', 'cookie_name', 0),
        array(
            'A szkript által használt cooky útvonala', 'cookie_path', 0),
        array(
            'Karakter kódolás', 'charset', 4), 
        // 'Miscellaneous settings',
        'Egyéb beállítások',
        array(
            'Debug mód engedélyezése', 'debug_mode', 1),
        array(
'Enable advanced debug mode', 'advanced_debug_mode', 1), // new in cpg1.2.0nuke
array(
'Show Coppermine Update Alert to Admin', 'showupdate', 1), // new 1.2.2
        '<br /><div align="center">(*) * -gal jelölt mezõket nem szabad megváltoztatni, ha már nem üres a képtár</div><br />'
        );
// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) $lang_db_input_php = array('empty_name_or_com' => 'Meg kell adnod a neved és egy hozzászólást',
        'com_added' => 'Hozzászólásod rögzítettük',
        'alb_need_title' => 'Adj nevet az albumnak!',
        'no_udp_needed' => 'Nincs mit módosítani.',
        'alb_updated' => 'Az album módosítása megtörtént',
        'unknown_album' => 'A kiválasztott album nem létezik, vagy nincs feltöltési jogosultságod az albumhoz',
        'no_pic_uploaded' => 'Nem történt feltöltés!<br /><br />Ha tényleg kijelöltél feltöltésre képet, ellenõrizd, hogy a szerveren megengedett-e a feltöltés...',
        'err_mkdir' => 'Nem sikerült a %s könyvtár létrehozása !',
        'dest_dir_ro' => 'A szkript nem írhat a %s célkönyvtárba!',
        'err_move' => 'Nem mozgatható %s %s -be!',
        'err_fsize_too_large' => 'A feltöltött kép mérete túl nagy (maximum megengedett: %s x %s)!',
        'err_imgsize_too_large' => 'A feltöltött fájl mérete túl nagy (maximum megengedett: %s KB) !',
        'err_invalid_img' => 'A feltöltött fájl nem egy érvényes képformátum !',
        'allowed_img_types' => 'Csak %s kép feltöltése megengedett.',
        'err_insert_pic' => 'A \'%s\' kép nem adható hozzá az albumhoz ',
        'upload_success' => 'A kép feltöltése sikeres volt<br /><br />Jóváhagyás után látható lesz.',
        'info' => 'Információ',
        'com_added' => 'Kommentár hozzáadása megtörtént',
        'alb_updated' => 'Album módosítva',
        'err_comment_empty' => 'Nem adott meg kommentárt !',
        'err_invalid_fext' => 'Csak a következõ kiterjesztésû fájlok megengedettek: <br /><br />%s.',
        'no_flood' => 'Már hozzászóltál a képhez.<br /><br />Szerkeszd az elõzõ hozzászólásod, ha szükséges',
        'redirect_msg' => 'Átirányítás folyamatban.<br /><br /><br />Nyomd meg a \'CONTINUE\'-t, ha a kép nem frissül automatikusan',
        'upl_success' => 'A kép sikeresen hozzáadásra került',
        );
// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) $lang_delete_php = array('caption' => 'Képaláírás',
        'fs_pic' => 'teljes méretû kép',
        'del_success' => 'törlés sikeres',
        'ns_pic' => 'normál méretû kép',
        'err_del' => 'nem lehet törölni',
        'thumb_pic' => 'ikon',
        'comment' => 'megjegyzés',
        'im_in_alb' => 'kép az albumban',
        'alb_del_success' => ' \'%s\' album törölve',
        'alb_mgr' => 'Albummenedzser',
        'err_invalid_data' => 'Érvénytelen adat a következõben \'%s\'',
        'create_alb' => 'Album generálása \'%s\'',
        'update_alb' => 'Album módosítás \'%s\' név: \'%s\' index: \'%s\'',
        'del_pic' => 'Kép törlése',
        'del_alb' => 'Album törlése',
        'del_user' => 'Felhasználó törlése',
        'err_unknown_user' => 'A kijelölt felhasználó nem létezik !',
        'comment_deleted' => 'A megjegyzést sikeresen töröltük',
        );
// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //
// Void
// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')) {
    $lang_display_image_php = array('confirm_del' => 'Biztosan törölni akarod ezt a képet? \\nA hozzászólások is törlõdnek.',
        'del_pic' => 'A KÉP TÖRLÉSE',
        'size' => '%s x %s pixel',
        'views' => '%s',
        'slideshow' => 'Diavetítés',
        'stop_slideshow' => 'DIAVETíTÉS VÉGE',
        'view_fs' => 'Teljes méretû kép megtekintése',
        'edit_pic' => 'EDIT PICTURE INFO', // new in cpg1.2.0nuke
        );

    $lang_picinfo = array('title' => 'Kép információ',
        'Filename' => 'Fájlnév',
        'Album name' => 'Album név',
        'Rating' => 'Osztályozás (%s szavazat)',
        'Keywords' => 'Kulcsszavak',
        'File Size' => 'Fájlméret',
        'Dimensions' => 'Méretek',
        'Displayed' => 'Megtekintések száma',
        'Camera' => 'Kamera',
        'Date taken' => 'Felvétel dátuma',
        'Aperture' => 'Apertúra',
        'Exposure time' => 'Expozíció idõpontja',
        'Focal length' => 'Fókusztávolság',
        'Comment' => 'Megjegyzés',
        'addFav' => 'Hozzáadás a kedvencekhez',
        'addFavPhrase' => 'Kedvencek',
        'remFav' => 'Kivétel kedvencekbõl',
        'iptcTitle' => 'IPTC Title', // new in cpg1.2.0nuke
        'iptcCopyright' => 'IPTC Copyright', // new in cpg1.2.0nuke
        'iptcKeywords' => 'IPTC Keywords', // new in cpg1.2.0nuke
        'iptcCategory' => 'IPTC Category', // new in cpg1.2.0nuke
        'iptcSubCategories' => 'IPTC Sub Categories', // new in cpg1.2.0nuke
        'bookmark_page' => 'Bookmark Image', // new in cpg1.2.0nuke
        );

    $lang_display_comments = array('OK' => 'OK',
        'edit_title' => 'Hozzászólás szerkesztése',
        'confirm_delete' => 'Biztos törölni kívánod a hozzászólást?',
        'add_your_comment' => 'Hozzászólás hozzáfûzése',
        'name' => 'Név',
        'comment' => 'Megjegyzés',
        'your_name' => 'Anon',
        );

    $lang_fullsize_popup = array('click_to_close' => 'Klikkelj a képre az ablak bezárásához',
        );
} 
// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //
if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php = array('title' => 'E-képeslap küldése',
        'invalid_email' => '<b>Figyelmeztetés</b> : érvénytelen e-mail cím!',
        'ecard_title' => 'Egy e-képeslap %s -tól neked',
        'view_ecard' => 'Ha az e-képeslap nem jelenik meg helyesen, klikkelj a következõ linkre',
        'view_more_pics' => 'Klikkelj erre a linkre további képek megtekintéséhez!',
        'send_success' => 'E-képeslapod továbbítottuk',
        'send_failed' => 'Sajnálom, de a szerver nem tud e-képeslapot küldeni...',
        'from' => 'Feladó',
        'your_name' => 'Neved',
        'your_email' => 'E-mail címed',
        'to' => 'Címzett',
        'rcpt_name' => 'Címzett neve',
        'rcpt_email' => 'Címzett e-mail címe',
        'greetings' => 'Üdvözlet',
        'message' => 'Üzenet',
        );
// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //
if (defined('EDITPICS_PHP')) $lang_editpics_php = array('pic_info' => 'Kép információ',
        'album' => 'Album',
        'title' => 'Cím',
        'desc' => 'Leírás',
        'keywords' => 'Kulcsszavak',
        'pic_info_str' => '%sx%s - %sKB - %s megtekintés - %s szavazat',
        'approve' => 'Kép jóváhagyása',
        'postpone_app' => 'Jóváhagyás késõbb',
        'del_pic' => 'Kép törlés',
        'reset_view_count' => 'Nézettségszámláló nullázása',
        'reset_votes' => 'Szavazatszámláló alaphelyzetbe',
        'del_comm' => 'Hozzászólások törlése',
        'upl_approval' => 'Feltöltés jóváhagyás',
        'edit_pics' => 'Képek rendezése',
        'see_next' => 'Következõ kép',
        'see_prev' => 'Elõzõ kép',
        'n_pic' => '%s kép',
        'n_of_pic_to_disp' => 'Kép / oldal',
        'apply' => 'Módosítások végrehajtása'
        );
// ------------------------------------------------------------------------- //
// File groupmgr.php
// -----------------------------------ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀䜀刀伀唀倀䴀䜀刀开倀䠀倀✀⤀⤀ ␀氀愀渀最开最爀漀甀瀀洀最爀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀最爀漀甀瀀开渀愀洀攀✀ 㴀㸀 ✀䌀猀漀瀀漀爀琀 洀攀最渀攀瘀攀稀猀攀✀Ⰰഀ਀        ✀搀椀猀欀开焀甀漀琀愀✀ 㴀㸀 ✀䐀椀猀稀欀 欀瘀琀愀✀Ⰰഀ਀        ✀挀愀渀开爀愀琀攀✀ 㴀㸀 ✀伀猀稀琀氀礀漀稀栀愀琀 欀瀀攀欀攀琀✀Ⰰഀ਀        ✀挀愀渀开猀攀渀搀开攀挀愀爀搀猀✀ 㴀㸀 ✀䬀ﰀ氀搀栀攀琀 攀ⴀ欀瀀攀猀氀愀瀀漀琀✀Ⰰഀ਀        ✀挀愀渀开瀀漀猀琀开挀漀洀✀ 㴀㸀 ✀䠀漀稀稀猀稀氀猀琀 欀ﰀ氀搀栀攀琀✀Ⰰഀ਀        ✀挀愀渀开甀瀀氀漀愀搀✀ 㴀㸀 ✀䘀攀氀琀氀琀栀攀琀 欀瀀攀欀攀琀✀Ⰰഀ਀        ✀挀愀渀开栀愀瘀攀开最愀氀氀攀爀礀✀ 㴀㸀 ✀䰀攀栀攀琀 猀稀攀洀氀礀攀猀 欀瀀琀爀愀✀Ⰰഀ਀        ✀愀瀀瀀氀礀✀ 㴀㸀 ✀䴀搀漀猀琀猀漀欀 瘀最爀攀栀愀樀琀猀愀✀Ⰰഀ਀        ✀挀爀攀愀琀攀开渀攀眀开最爀漀甀瀀✀ 㴀㸀 ✀���樀 挀猀漀瀀漀爀琀 氀琀爀攀栀漀稀猀愀✀Ⰰഀ਀        ✀搀攀氀开最爀漀甀瀀猀✀ 㴀㸀 ✀䬀椀樀攀氀氀琀 挀猀漀瀀漀爀琀⠀漀欀⤀ 琀爀氀猀攀 ✀Ⰰഀ਀        ✀挀漀渀昀椀爀洀开搀攀氀✀ 㴀㸀 ✀䘀椀最礀攀氀洀攀稀琀攀琀猀㨀 栀愀 琀爀氀猀稀 攀最礀 挀猀漀瀀漀爀琀漀琀Ⰰ 愀 栀漀稀稀 琀愀爀琀漀稀 昀攀氀栀愀猀稀渀氀欀 琀栀攀氀礀攀稀搀渀攀欀 愀 尀✀刀攀最椀猀琀攀爀攀搀尀✀ 挀猀漀瀀漀爀琀戀愀 ℀尀渀尀渀䘀漀氀礀琀愀琀漀搀 㼀✀Ⰰഀ਀        ✀琀椀琀氀攀✀ 㴀㸀 ✀䘀攀氀栀愀猀稀渀氀挀猀漀瀀漀爀琀漀欀 洀攀渀攀搀稀猀攀氀猀攀✀Ⰰഀ਀        ✀愀瀀瀀爀漀瘀愀氀开㄀✀ 㴀㸀 ✀一礀椀氀瘀渀漀猀 昀攀氀琀氀琀猀 樀瘀栀愀最礀猀 ⠀㄀⤀✀Ⰰഀ਀        ✀愀瀀瀀爀漀瘀愀氀开㈀✀ 㴀㸀 ✀倀爀椀瘀琀 昀攀氀琀氀琀猀 樀瘀栀愀最礀猀 ⠀㈀⤀✀Ⰰഀ਀        ✀渀漀琀攀㄀✀ 㴀㸀 ✀㰀戀㸀⠀㄀⤀㰀⼀戀㸀 䄀 渀礀椀氀瘀渀漀猀 愀氀戀甀洀戀愀 琀爀琀渀 昀攀氀琀氀琀猀 愀搀洀椀渀椀猀稀琀爀琀漀爀椀 樀瘀栀愀最礀猀琀 椀最渀礀攀氀✀Ⰰഀ਀        ✀渀漀琀攀㈀✀ 㴀㸀 ✀㰀戀㸀⠀㈀⤀㰀⼀戀㸀 䄀 昀攀氀栀愀猀稀渀氀 愀氀戀甀洀戀愀 琀爀琀渀 昀攀氀琀氀琀猀 愀搀洀椀渀椀猀稀琀爀琀漀爀椀 樀瘀栀愀最礀猀琀 椀最渀礀攀氀✀Ⰰഀ਀        ✀渀漀琀攀猀✀ 㴀㸀 ✀䴀攀最樀攀最礀稀猀攀欀✀ഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 椀渀搀攀砀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀䤀一䐀䔀堀开倀䠀倀✀⤀⤀ 笀ഀ਀    ␀氀愀渀最开椀渀搀攀砀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀眀攀氀挀漀洀攀✀ 㴀㸀 ✀���搀瘀稀氀氀攀欀℀✀ഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开愀氀戀甀洀开愀搀洀椀渀开洀攀渀甀 㴀 愀爀爀愀礀⠀✀挀漀渀昀椀爀洀开搀攀氀攀琀攀✀ 㴀㸀 ✀䈀椀稀琀漀猀 琀爀氀渀椀 愀欀愀爀漀搀 愀稀 愀氀戀甀洀漀琀㼀 尀尀渀䴀椀渀搀攀渀 欀瀀 猀 栀漀稀稀猀稀氀猀 椀猀 琀爀氀搀椀欀℀✀Ⰰഀ਀        ✀搀攀氀攀琀攀✀ 㴀㸀 ✀吀혀刀䰀준匀✀Ⰰഀ਀        ✀洀漀搀椀昀礀✀ 㴀㸀 ✀吀唀䰀䄀䨀䐀伀一匀섀䜀伀䬀✀Ⰰഀ਀        ✀攀搀椀琀开瀀椀挀猀✀ 㴀㸀 ✀匀娀䔀刀䬀䔀匀娀吀준匀✀Ⰰഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开氀椀猀琀开挀愀琀攀最漀爀椀攀猀 㴀 愀爀爀愀礀⠀✀栀漀洀攀✀ 㴀㸀 ✀䠀漀洀攀✀Ⰰഀ਀        ✀猀琀愀琀㄀✀ 㴀㸀 ✀㰀戀㸀嬀瀀椀挀琀甀爀攀猀崀㰀⼀戀㸀 欀瀀 㰀戀㸀嬀愀氀戀甀洀猀崀㰀⼀戀㸀 愀氀戀甀洀戀愀渀 猀 㰀戀㸀嬀挀愀琀崀㰀⼀戀㸀 欀愀琀攀最爀椀戀愀渀 㰀戀㸀嬀挀漀洀洀攀渀琀猀崀㰀⼀戀㸀 栀漀稀稀猀稀氀猀猀愀氀Ⰰ 洀攀最琀攀欀椀渀琀猀攀欀 猀稀洀愀㨀 㰀戀㸀嬀瘀椀攀眀猀崀㰀⼀戀㸀✀Ⰰഀ਀        ✀猀琀愀琀㈀✀ 㴀㸀 ✀㰀戀㸀嬀瀀椀挀琀甀爀攀猀崀㰀⼀戀㸀 欀瀀 㰀戀㸀嬀愀氀戀甀洀猀崀㰀⼀戀㸀 愀氀戀甀洀戀愀渀Ⰰ 洀攀最琀攀欀椀渀琀猀攀欀 猀稀洀愀㨀 㰀戀㸀嬀瘀椀攀眀猀崀㰀⼀戀㸀✀Ⰰഀ਀        ✀砀砀开猀开最愀氀氀攀爀礀✀ 㴀㸀 ✀─猀 欀瀀琀爀愀✀Ⰰഀ਀        ✀猀琀愀琀㌀✀ 㴀㸀 ✀㰀戀㸀嬀瀀椀挀琀甀爀攀猀崀㰀⼀戀㸀 欀瀀 㰀戀㸀嬀愀氀戀甀洀猀崀㰀⼀戀㸀 愀氀戀甀洀戀愀渀 㰀戀㸀嬀挀漀洀洀攀渀琀猀崀㰀⼀戀㸀 栀漀稀稀猀稀氀猀猀愀氀Ⰰ 洀攀最琀攀欀椀渀琀猀攀欀 猀稀洀愀㨀 㰀戀㸀嬀瘀椀攀眀猀崀㰀⼀戀㸀✀ഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开氀椀猀琀开甀猀攀爀猀 㴀 愀爀爀愀礀⠀✀甀猀攀爀开氀椀猀琀✀ 㴀㸀 ✀䘀攀氀栀愀猀稀渀氀欀 氀椀猀琀樀愀✀Ⰰഀ਀        ✀渀漀开甀猀攀爀开最愀氀✀ 㴀㸀 ✀一椀渀挀猀 昀攀氀栀愀猀稀渀氀 愀 欀瀀琀爀戀愀渀✀Ⰰഀ਀        ✀渀开愀氀戀甀洀猀✀ 㴀㸀 ✀─猀 愀氀戀甀洀⠀漀欀⤀✀Ⰰഀ਀        ✀渀开瀀椀挀猀✀ 㴀㸀 ✀─猀 欀瀀⠀攀欀⤀✀ഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开氀椀猀琀开愀氀戀甀洀猀 㴀 愀爀爀愀礀⠀✀渀开瀀椀挀琀甀爀攀猀✀ 㴀㸀 ✀─猀 欀瀀✀Ⰰഀ਀        ✀氀愀猀琀开愀搀搀攀搀✀ 㴀㸀 ✀Ⰰ 甀琀漀氀猀 昀攀氀琀氀琀猀㨀 ─猀✀ഀ਀        ⤀㬀ഀ਀紀 ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 氀漀最椀渀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 一唀䰀䰀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 氀漀最漀甀琀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 一唀䰀䰀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 洀漀搀椀昀礀愀氀戀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀䴀伀䐀䤀䘀夀䄀䰀䈀开倀䠀倀✀⤀⤀ ␀氀愀渀最开洀漀搀椀昀礀愀氀戀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀甀瀀搀开愀氀戀开渀✀ 㴀㸀 ✀─猀 愀氀戀甀洀 洀搀漀猀琀猀愀 ✀Ⰰഀ਀        ✀最攀渀攀爀愀氀开猀攀琀琀椀渀最猀✀ 㴀㸀 ✀섀氀琀愀氀渀漀猀 戀攀氀氀琀猀漀欀✀Ⰰഀ਀        ✀愀氀戀开琀椀琀氀攀✀ 㴀㸀 ✀䄀氀戀甀洀 挀洀✀Ⰰഀ਀        ✀愀氀戀开挀愀琀✀ 㴀㸀 ✀䄀氀戀甀洀 欀愀琀攀最爀椀愀✀Ⰰഀ਀        ✀愀氀戀开搀攀猀挀✀ 㴀㸀 ✀䄀氀戀甀洀 氀攀爀猀✀Ⰰഀ਀        ✀愀氀戀开琀栀甀洀戀✀ 㴀㸀 ✀䄀氀戀甀洀 椀欀漀渀✀Ⰰഀ਀        ✀愀氀戀开瀀攀爀洀✀ 㴀㸀 ✀䄀氀戀甀洀 樀漀最漀猀甀氀琀猀最漀欀✀Ⰰഀ਀        ✀挀愀渀开瘀椀攀眀✀ 㴀㸀 ✀䄀氀戀甀洀漀琀 氀琀栀愀琀樀愀㨀 ✀Ⰰഀ਀        ✀挀愀渀开甀瀀氀漀愀搀✀ 㴀㸀 ✀䰀琀漀最愀琀欀 昀攀氀琀氀琀栀攀琀渀攀欀 欀瀀攀琀✀Ⰰഀ਀        ✀挀愀渀开瀀漀猀琀开挀漀洀洀攀渀琀猀✀ 㴀㸀 ✀䰀琀漀最愀琀欀 欀ﰀ氀搀栀攀琀渀攀欀 栀漀稀稀猀稀氀猀漀欀愀琀✀Ⰰഀ਀        ✀挀愀渀开爀愀琀攀✀ 㴀㸀 ✀䰀琀漀最愀琀欀 漀猀稀琀氀礀漀稀栀愀琀樀欀 愀 欀瀀攀欀攀琀✀Ⰰഀ਀        ✀甀猀攀爀开最愀氀✀ 㴀㸀 ✀䘀攀氀栀愀猀稀渀氀椀 欀瀀琀爀✀Ⰰഀ਀        ✀渀漀开挀愀琀✀ 㴀㸀 ✀⨀ 一椀渀挀猀 欀愀琀攀最爀椀愀 ⨀✀Ⰰഀ਀        ✀愀氀戀开攀洀瀀琀礀✀ 㴀㸀 ✀䄀稀 愀氀戀甀洀 ﰀ爀攀猀✀Ⰰഀ਀        ✀氀愀猀琀开甀瀀氀漀愀搀攀搀✀ 㴀㸀 ✀唀琀漀氀樀爀愀 昀攀氀琀氀琀琀琀✀Ⰰഀ਀        ✀瀀甀戀氀椀挀开愀氀戀✀ 㴀㸀 ✀䴀椀渀搀攀渀欀椀 ⠀渀礀椀氀瘀渀漀猀 愀氀戀甀洀⤀✀Ⰰഀ਀        ✀洀攀开漀渀氀礀✀ 㴀㸀 ✀䌀猀愀欀 渀✀Ⰰഀ਀        ✀漀眀渀攀爀开漀渀氀礀✀ 㴀㸀 ✀䌀猀愀欀 愀 ⠀─猀⤀ 愀氀戀甀洀 琀甀氀愀樀搀漀渀漀猀愀✀Ⰰഀ਀        ✀最爀漀甀瀀瀀开漀渀氀礀✀ 㴀㸀 ✀䌀猀愀欀 愀 尀✀─猀尀✀ 挀猀漀瀀漀爀琀 琀愀最樀愀椀✀Ⰰഀ਀        ✀攀爀爀开渀漀开愀氀戀开琀漀开洀漀搀椀昀礀✀ 㴀㸀 ✀一椀渀挀猀 洀搀漀猀琀栀愀琀 愀氀戀甀洀 愀稀 愀搀愀琀戀稀椀猀戀愀渀⸀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀✀ 㴀㸀 ✀䄀氀戀甀洀 洀搀漀猀琀猀愀✀ഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 爀愀琀攀瀀椀挀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀刀䄀吀䔀倀䤀䌀开倀䠀倀✀⤀⤀ ␀氀愀渀最开爀愀琀攀开瀀椀挀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀愀氀爀攀愀搀礀开爀愀琀攀搀✀ 㴀㸀 ✀匀愀樀渀氀漀洀Ⰰ 搀攀 洀爀 漀猀稀琀氀礀漀稀琀愀搀 攀稀琀 愀 欀瀀攀琀✀Ⰰഀ਀        ✀爀愀琀攀开漀欀✀ 㴀㸀 ✀伀猀稀琀氀礀稀愀琀漀搀 攀氀昀漀最愀搀琀甀欀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 爀攀最椀猀琀攀爀⸀瀀栀瀀 ☀ 瀀爀漀昀椀氀攀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀刀䔀䜀䤀匀吀䔀刀开倀䠀倀✀⤀ 簀簀 搀攀昀椀渀攀搀⠀✀倀刀伀䘀䤀䰀䔀开倀䠀倀✀⤀⤀ 笀ഀ਀    ␀氀愀渀最开爀攀最椀猀琀攀爀开搀椀猀挀氀愀洀攀爀 㴀 㰀㰀㰀䔀伀吀ഀ਀䈀爀 愀 笀匀䤀吀䔀开一䄀䴀䔀紀 愀搀洀椀渀椀猀稀琀爀琀漀爀愀 洀椀渀搀攀渀琀 攀氀欀瘀攀琀Ⰰ 栀漀最礀 愀洀椀氀礀攀渀 最礀漀爀猀愀渀 挀猀愀欀 氀攀栀攀琀Ⰰ 猀稀攀爀欀攀猀猀稀攀渀 瘀愀最礀 琀爀氀樀渀 洀椀渀搀攀渀 欀椀昀漀最猀漀氀栀愀琀 搀漀欀甀洀攀渀琀甀洀漀琀Ⰰ 氀攀栀攀琀攀琀氀攀渀 洀椀渀搀攀渀 欀ﰀ氀搀攀洀渀礀 攀氀氀攀渀爀稀猀攀⸀ 䬀爀樀ﰀ欀 攀稀爀琀 愀渀渀愀欀 洀攀最爀琀猀琀Ⰰ 栀漀最礀 洀椀渀搀攀渀 攀爀爀攀 愀 眀攀戀氀愀瀀爀愀 挀洀稀攀琀琀 欀ﰀ氀搀攀洀渀礀 愀渀渀愀欀 猀稀攀爀稀樀攀 渀稀攀琀琀 猀 瘀氀攀洀渀礀琀 昀攀樀攀稀椀 欀椀Ⰰ 猀 渀攀洀 愀稀 愀搀洀椀渀椀猀稀琀爀琀漀爀琀Ⰰ 椀氀氀攀琀瘀攀 眀攀戀洀攀猀琀攀爀琀 ⠀欀椀瘀瘀攀 愀稀 氀琀愀氀甀欀 瀀漀猀琀稀漀琀琀 欀ﰀ氀搀攀洀渀礀攀欀攀琀⤀⸀ 䔀渀渀氀 昀漀最瘀愀 渀攀洀 琀甀搀甀渀欀 爀琀ﰀ欀 昀攀氀攀氀猀猀最攀琀 瘀氀氀愀氀渀椀⸀㰀戀爀 ⼀㸀ഀ਀㰀戀爀 ⼀㸀ഀ਀䔀氀昀漀最愀搀漀搀Ⰰ 栀漀最礀 渀攀洀 瀀漀猀琀稀漀氀 猀攀洀洀椀氀礀攀渀 猀爀琀Ⰰ 漀戀猀稀挀渀Ⰰ 瘀甀氀最爀椀猀Ⰰ 爀最愀氀洀愀稀Ⰰ 最礀ﬀ氀氀欀搀Ⰰ 昀攀渀礀攀最攀琀Ⰰ 猀稀攀砀甀氀椀猀 琀愀爀琀愀氀洀切Ⰰ 瘀愀最礀 戀爀洀椀氀礀攀渀 洀猀 漀氀礀愀渀 琀愀爀琀愀氀洀切 愀渀礀愀最漀琀Ⰰ 愀洀攀氀礀 爀瘀渀礀攀猀 琀爀瘀渀礀琀 猀爀琀⸀ 䔀氀昀漀最愀搀漀搀Ⰰ 栀漀最礀 愀 笀匀䤀吀䔀开一䄀䴀䔀紀 眀攀戀洀攀猀琀攀爀渀攀欀Ⰰ 愀搀洀椀渀椀猀稀琀爀琀漀爀渀愀欀Ⰰ 瘀愀最礀 洀漀搀攀爀琀漀爀渀愀欀 戀爀洀椀欀漀爀 樀漀最戀愀渀 氀氀 戀爀洀椀氀礀攀渀 琀愀爀琀愀氀洀愀琀 猀稀ﰀ欀猀最 攀猀攀琀渀 琀爀氀渀椀Ⰰ 瘀愀最礀 猀稀攀爀欀攀猀稀琀攀渀椀⸀ 䴀椀渀琀 昀攀氀栀愀猀稀渀氀 攀最礀攀琀爀琀攀猀稀 愀 欀稀氀琀 椀渀昀漀爀洀挀椀欀 愀搀愀琀戀稀椀猀戀愀渀 琀爀琀渀 琀爀漀氀猀栀漀稀⸀ 䈀爀 愀 眀攀戀洀攀猀琀攀爀Ⰰ 椀氀氀攀琀瘀攀 愀搀洀椀渀椀猀稀琀爀琀漀爀 渀攀洀 愀搀樀愀 欀椀 栀愀爀洀愀搀椀欀 昀攀氀攀欀渀攀欀 攀稀攀欀攀琀 愀稀 椀渀昀漀爀洀挀椀欀愀琀 愀 栀漀稀稀樀爀甀氀猀漀搀 渀氀欀ﰀ氀Ⰰ 渀攀洀 琀攀栀攀琀 昀攀氀攀氀猀猀 猀攀洀洀椀氀礀攀渀 漀氀礀愀渀 栀愀挀欀攀爀 欀猀爀氀攀琀爀琀Ⰰ 洀攀氀礀攀欀 愀稀 愀搀愀琀漀欀 欀漀洀瀀爀漀洀椀琀琀氀猀栀漀稀 瘀攀稀攀琀⸀㰀戀爀 ⼀㸀ഀ਀㰀戀爀 ⼀㸀ഀ਀䔀稀 愀 眀攀戀氀愀瀀 挀漀漀欀椀攀 昀漀爀洀樀戀愀渀 椀渀昀漀爀洀挀椀琀 琀爀漀氀 愀 猀稀洀琀最瀀攀搀攀渀⸀ 䔀稀攀欀 愀 挀漀漀欀椀攀ⴀ欀 挀猀愀欀 愀稀琀 愀 挀氀琀 猀稀漀氀最氀樀欀Ⰰ 栀漀最礀 昀漀欀漀稀稀欀 愀 渀稀栀攀琀猀最椀 氀洀渀礀琀⸀ 䄀稀 攀洀愀椀氀 挀洀 挀猀愀欀 愀 爀攀最椀猀稀琀爀挀椀猀 愀搀愀琀愀椀搀渀愀欀 猀 樀攀氀猀稀愀瘀愀搀渀愀欀 渀礀甀最琀稀猀爀愀 猀稀漀氀最氀⸀㰀戀爀 ⼀㸀ഀ਀㰀戀爀 ⼀㸀ഀ਀䄀稀 ✀䔀最礀攀琀爀琀攀欀✀ⴀ爀攀 欀氀椀欀欀攀氀瘀攀 攀氀昀漀最愀搀漀搀 攀稀攀欀攀琀 愀 昀攀氀琀琀攀氀攀欀攀琀⸀ഀ਀䔀伀吀㬀ഀ਀ഀ਀    ␀氀愀渀最开爀攀最椀猀琀攀爀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀瀀愀最攀开琀椀琀氀攀✀ 㴀㸀 ✀䘀攀氀栀愀猀稀渀氀 爀攀最椀猀稀琀爀挀椀✀Ⰰഀ਀        ✀琀攀爀洀开挀漀渀搀✀ 㴀㸀 ✀刀攀最椀猀稀琀爀挀椀猀 昀攀氀琀琀攀氀攀欀✀Ⰰഀ਀        ✀椀开愀最爀攀攀✀ 㴀㸀 ✀䔀最礀攀琀爀琀攀欀✀Ⰰഀ਀        ✀猀甀戀洀椀琀✀ 㴀㸀 ✀刀攀最椀猀稀琀爀氀猀✀Ⰰഀ਀        ✀攀爀爀开甀猀攀爀开攀砀椀猀琀猀✀ 㴀㸀 ✀䄀 洀攀最愀搀漀琀琀 昀攀氀栀愀猀稀渀氀渀瘀 洀爀 氀琀攀稀椀欀Ⰰ 愀搀樀漀渀 洀攀最 洀猀椀欀愀琀✀Ⰰഀ਀        ✀攀爀爀开瀀愀猀猀眀漀爀搀开洀椀猀洀愀琀挀栀✀ 㴀㸀 ✀䄀 欀琀 樀攀氀猀稀 渀攀洀 攀最礀攀稀椀欀Ⰰ 愀搀搀 洀攀最 切樀爀愀✀Ⰰഀ਀        ✀攀爀爀开甀渀愀洀攀开猀栀漀爀琀✀ 㴀㸀 ✀䄀 昀攀氀栀愀猀稀渀氀渀瘀 氀攀最愀氀戀戀 ㈀ 欀愀爀愀欀琀攀爀 栀漀猀猀稀切 欀攀氀氀Ⰰ 栀漀最礀 氀攀最礀攀渀✀Ⰰഀ਀        ✀攀爀爀开瀀愀猀猀眀漀爀搀开猀栀漀爀琀✀ 㴀㸀 ✀䄀 樀攀氀猀稀 氀攀最愀氀戀戀 ㈀ 欀愀爀愀欀琀攀爀 栀漀猀猀稀切 欀攀氀氀Ⰰ 栀漀最礀 氀攀最礀攀渀✀Ⰰഀ਀        ✀攀爀爀开甀渀愀洀攀开瀀愀猀猀开搀椀昀昀✀ 㴀㸀 ✀䄀 昀攀氀栀愀猀稀渀氀渀瘀渀攀欀 猀 愀 樀攀氀猀稀渀愀欀 欀ﰀ氀渀戀稀渀椀攀 欀攀氀氀✀Ⰰഀ਀        ✀攀爀爀开椀渀瘀愀氀椀搀开攀洀愀椀氀✀ 㴀㸀 ✀준爀瘀渀礀琀攀氀攀渀 攀洀愀椀氀 挀洀✀Ⰰഀ਀        ✀攀爀爀开搀甀瀀氀椀挀愀琀攀开攀洀愀椀氀✀ 㴀㸀 ✀䔀最礀 洀猀椀欀 昀攀氀栀愀猀稀渀氀 洀爀 爀攀最椀猀稀琀爀氀琀 攀稀稀攀氀 愀稀 攀洀愀椀氀 挀洀洀攀氀✀Ⰰഀ਀        ✀攀渀琀攀爀开椀渀昀漀✀ 㴀㸀 ✀刀攀最椀猀稀琀爀挀椀猀 椀渀昀漀爀洀挀椀欀 洀攀最愀搀猀愀✀Ⰰഀ਀        ✀爀攀焀甀椀爀攀搀开椀渀昀漀✀ 㴀㸀 ✀䬀琀攀氀攀稀 愀搀愀琀✀Ⰰഀ਀        ✀漀瀀琀椀漀渀愀氀开椀渀昀漀✀ 㴀㸀 ✀伀瀀挀椀漀渀氀椀猀 愀搀愀琀✀Ⰰഀ਀        ✀甀猀攀爀渀愀洀攀✀ 㴀㸀 ✀䘀攀氀栀愀猀稀渀氀渀瘀✀Ⰰഀ਀        ✀瀀愀猀猀眀漀爀搀✀ 㴀㸀 ✀䨀攀氀猀稀✀Ⰰഀ਀        ✀瀀愀猀猀眀漀爀搀开愀最愀椀渀✀ 㴀㸀 ✀䨀攀氀猀稀 洀最 攀最礀猀稀攀爀✀Ⰰഀ਀        ✀攀洀愀椀氀✀ 㴀㸀 ✀䔀洀愀椀氀✀Ⰰഀ਀        ✀氀漀挀愀琀椀漀渀✀ 㴀㸀 ✀吀愀爀琀稀欀漀搀猀椀 栀攀氀礀✀Ⰰഀ਀        ✀椀渀琀攀爀攀猀琀猀✀ 㴀㸀 ✀준爀搀攀欀氀搀猀椀 欀爀✀Ⰰഀ਀        ✀眀攀戀猀椀琀攀✀ 㴀㸀 ✀䠀漀渀氀愀瀀✀Ⰰഀ਀        ✀漀挀挀甀瀀愀琀椀漀渀✀ 㴀㸀 ✀䘀漀最氀愀氀欀漀稀猀✀Ⰰഀ਀        ✀攀爀爀漀爀✀ 㴀㸀 ✀䠀䤀䈀䄀✀Ⰰഀ਀        ✀挀漀渀昀椀爀洀开攀洀愀椀氀开猀甀戀樀攀挀琀✀ 㴀㸀 ✀─猀 ⴀ 刀攀最椀猀稀琀爀挀椀 渀礀甀最琀稀猀愀✀Ⰰഀ਀        ✀椀渀昀漀爀洀愀琀椀漀渀✀ 㴀㸀 ✀䤀渀昀漀爀洀挀椀✀Ⰰഀ਀        ✀昀愀椀氀攀搀开猀攀渀搀椀渀最开攀洀愀椀氀✀ 㴀㸀 ✀䄀 爀攀最椀猀稀琀爀挀椀猀 洀攀最攀爀猀琀 攀洀愀椀氀琀 渀攀洀 猀椀欀攀爀ﰀ氀琀 攀氀欀ﰀ氀搀攀渀椀 ℀✀Ⰰഀ਀        ✀琀栀愀渀欀开礀漀甀✀ 㴀㸀 ✀䬀猀稀渀樀ﰀ欀Ⰰ 栀漀最礀 爀攀最椀猀稀琀爀氀琀氀⸀㰀戀爀 ⼀㸀㰀戀爀 ⼀㸀䬀ﰀ氀搀琀ﰀ渀欀 攀最礀 攀洀愀椀氀琀 愀 洀攀最愀搀漀琀琀 攀洀愀椀氀 挀洀爀攀Ⰰ 愀洀椀戀攀渀 洀攀最愀搀琀甀欀Ⰰ 栀漀最礀 栀漀最礀愀渀 愀欀琀椀瘀氀栀愀琀漀搀 昀攀氀栀愀猀稀渀氀椀 栀漀稀稀昀爀猀攀搀⸀✀Ⰰഀ਀        ✀愀挀挀琀开挀爀攀愀琀攀搀✀ 㴀㸀 ✀䘀攀氀栀愀猀稀渀氀椀 栀漀稀稀昀爀猀攀搀 氀琀爀攀栀漀稀琀甀欀 猀 戀攀樀攀氀攀渀琀欀攀稀栀攀琀猀稀 愀 昀攀氀栀愀猀稀渀氀渀攀瘀攀搀搀攀氀 猀 樀攀氀猀稀愀瘀愀搀搀愀氀✀Ⰰഀ਀        ✀愀挀挀琀开愀挀琀椀瘀攀✀ 㴀㸀 ✀䘀攀氀栀愀猀稀渀氀椀 栀漀稀稀昀爀猀攀搀 愀欀琀椀瘀氀琀甀欀 猀 戀攀樀攀氀攀渀琀欀攀稀栀攀琀猀稀 愀 昀攀氀栀愀猀稀渀氀渀攀瘀攀搀搀攀氀 猀 樀攀氀猀稀愀瘀愀搀搀愀氀✀Ⰰഀ਀        ✀愀挀挀琀开愀氀爀攀愀搀礀开愀挀琀✀ 㴀㸀 ✀䘀攀氀栀愀猀稀渀氀椀 栀漀稀稀昀爀猀攀搀 洀爀 愀欀琀瘀 ℀✀Ⰰഀ਀        ✀愀挀挀琀开愀挀琀开昀愀椀氀攀搀✀ 㴀㸀 ✀䔀稀琀 愀 昀攀氀栀愀猀稀渀氀椀 栀漀稀稀昀爀猀琀 渀攀洀 氀攀栀攀琀 愀欀琀椀瘀氀渀椀 ℀✀Ⰰഀ਀        ✀攀爀爀开甀渀欀开甀猀攀爀✀ 㴀㸀 ✀䄀 欀椀瘀氀愀猀稀琀漀琀琀 昀攀氀栀愀猀稀渀氀 渀攀洀 氀琀攀稀椀欀 ℀✀Ⰰഀ਀        ✀砀开猀开瀀爀漀昀椀氀攀✀ 㴀㸀 ✀─猀 瀀爀漀昀椀氀樀愀✀Ⰰഀ਀        ✀最爀漀甀瀀✀ 㴀㸀 ✀䌀猀漀瀀漀爀琀✀Ⰰഀ਀        ✀爀攀最开搀愀琀攀✀ 㴀㸀 ✀䌀猀愀琀氀愀欀漀稀猀 椀搀攀樀攀✀Ⰰഀ਀        ✀搀椀猀欀开甀猀愀最攀✀ 㴀㸀 ✀吀爀昀攀氀栀愀猀稀渀氀猀✀Ⰰഀ਀        ✀挀栀愀渀最攀开瀀愀猀猀✀ 㴀㸀 ✀䨀攀氀猀稀 洀攀最瘀氀琀漀稀琀愀琀猀愀✀Ⰰഀ਀        ✀挀甀爀爀攀渀琀开瀀愀猀猀✀ 㴀㸀 ✀䨀攀氀攀渀氀攀最椀 樀攀氀猀稀✀Ⰰഀ਀        ✀渀攀眀开瀀愀猀猀✀ 㴀㸀 ✀���樀 樀攀氀猀稀✀Ⰰഀ਀        ✀渀攀眀开瀀愀猀猀开愀最愀椀渀✀ 㴀㸀 ✀���樀 樀攀氀猀稀 洀最 攀最礀猀稀攀爀✀Ⰰഀ਀        ✀攀爀爀开挀甀爀爀开瀀愀猀猀✀ 㴀㸀 ✀䄀 樀攀氀攀渀氀攀最椀 樀攀氀猀稀 栀椀戀猀✀Ⰰഀ਀        ✀愀瀀瀀氀礀开洀漀搀椀昀✀ 㴀㸀 ✀䴀搀漀猀琀猀漀欀 瘀最爀攀栀愀樀琀猀愀✀Ⰰഀ਀        ✀挀栀愀渀最攀开瀀愀猀猀✀ 㴀㸀 ✀䨀攀氀猀稀 洀攀最瘀氀琀漀稀琀愀琀猀愀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开猀甀挀挀攀猀猀✀ 㴀㸀 ✀倀爀漀昀椀氀漀搀 愀欀琀甀愀氀椀稀氀琀甀欀✀Ⰰഀ਀        ✀瀀愀猀猀开挀栀最开猀甀挀挀攀猀猀✀ 㴀㸀 ✀䨀攀氀猀稀愀瘀愀搀 洀攀最瘀氀琀漀稀琀愀琀琀甀欀✀Ⰰഀ਀        ✀瀀愀猀猀开挀栀最开攀爀爀漀爀✀ 㴀㸀 ✀䨀攀氀猀稀愀瘀愀搀 渀攀洀 瘀氀琀漀稀琀愀琀琀甀欀 洀攀最✀Ⰰഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开爀攀最椀猀琀攀爀开挀漀渀昀椀爀洀开攀洀愀椀氀 㴀 㰀㰀㰀䔀伀吀ഀ਀䬀猀稀渀樀ﰀ欀Ⰰ 栀漀最礀 爀攀最椀猀稀琀爀氀琀氀 ✀笀匀䤀吀䔀开一䄀䴀䔀紀✀ 眀攀戀氀愀瀀甀渀欀漀渀ഀ਀ഀ਀䘀攀氀栀愀猀稀渀氀渀攀瘀攀搀 㨀 ∀笀唀匀䔀刀开一䄀䴀䔀紀∀ഀ਀䨀攀氀猀稀愀瘀愀搀 㨀 ∀笀倀䄀匀匀圀伀刀䐀紀∀ഀ਀ഀ਀䘀攀氀栀愀稀渀氀椀 栀漀稀稀昀爀猀攀搀 愀欀琀椀瘀氀猀栀漀稀 愀稀 愀氀戀戀椀 氀椀渀欀爀攀 欀攀氀氀 欀氀椀欀欀攀氀渀攀搀⸀ഀ਀ഀ਀笀䄀䌀吀开䰀䤀一䬀紀ഀ਀ഀ਀���搀瘀稀氀攀琀琀攀氀Ⰰഀ਀ഀ਀䄀 ✀笀匀䤀吀䔀开一䄀䴀䔀紀✀ 愀搀洀椀渀椀猀稀琀爀琀漀爀愀ഀ਀ഀ਀䔀伀吀㬀ഀ਀紀 ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 爀攀瘀椀攀眀挀漀洀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀刀䔀嘀䤀䔀圀䌀伀䴀开倀䠀倀✀⤀⤀ ␀氀愀渀最开爀攀瘀椀攀眀挀漀洀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀䠀漀稀稀猀稀氀猀漀欀 洀攀最琀攀欀椀渀琀猀攀✀Ⰰഀ਀        ✀渀漀开挀漀洀洀攀渀琀✀ 㴀㸀 ✀一椀渀挀猀 栀漀稀稀猀稀氀猀✀Ⰰഀ਀        ✀渀开挀漀洀洀开搀攀氀✀ 㴀㸀 ✀─猀 栀漀稀稀猀稀氀猀⠀漀欀⤀ 琀爀氀瘀攀✀Ⰰഀ਀        ✀渀开挀漀洀洀开搀椀猀瀀✀ 㴀㸀 ✀䴀攀最樀攀氀攀渀琀攀渀搀 栀漀稀稀猀稀氀猀漀欀 猀稀洀愀✀Ⰰഀ਀        ✀猀攀攀开瀀爀攀瘀✀ 㴀㸀 ✀䔀氀稀✀Ⰰഀ਀        ✀猀攀攀开渀攀砀琀✀ 㴀㸀 ✀䬀瘀攀琀欀攀稀✀Ⰰഀ਀        ✀搀攀氀开挀漀洀洀✀ 㴀㸀 ✀䬀椀樀攀氀氀琀 栀漀稀稀猀稀氀猀漀欀 琀爀氀瘀攀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 猀攀愀爀挀栀⸀瀀栀瀀 ⴀ 伀䬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 椀昀 ⠀搀攀昀椀渀攀搀⠀✀匀䔀䄀刀䌀䠀开倀䠀倀✀⤀⤀ഀ਀    ␀氀愀渀最开猀攀愀爀挀栀开瀀栀瀀 㴀 愀爀爀愀礀⠀　 㴀㸀 ✀䬀攀爀攀猀猀 愀 欀瀀琀爀戀愀渀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 猀攀愀爀挀栀渀攀眀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀匀䔀䄀刀䌀䠀一䔀圀开倀䠀倀✀⤀⤀ ␀氀愀渀最开猀攀愀爀挀栀开渀攀眀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀瀀愀最攀开琀椀琀氀攀✀ 㴀㸀 ✀���樀 欀瀀 欀攀爀攀猀猀攀✀Ⰰഀ਀        ✀猀攀氀攀挀琀开搀椀爀✀ 㴀㸀 ✀䬀渀礀瘀琀爀 瘀氀愀猀稀琀猀愀✀Ⰰഀ਀        ✀猀攀氀攀挀琀开搀椀爀开洀猀最✀ 㴀㸀 ✀䔀稀 愀 昀甀渀欀挀椀 氀攀栀攀琀瘀 琀攀猀稀椀 攀最礀 欀琀攀最 ⴀ 䘀吀倀ⴀ瘀攀氀 愀 猀稀攀爀瘀攀爀爀攀 洀猀漀氀琀 ⴀ 欀瀀 栀漀稀稀愀搀猀琀 愀 欀瀀琀爀栀漀稀⸀㰀戀爀 ⼀㸀㰀戀爀 ⼀㸀嘀氀愀猀稀搀 欀椀 愀 欀渀礀瘀琀爀愀琀Ⰰ 愀栀漀渀渀愀渀 栀漀稀稀 愀欀愀爀猀稀 愀搀渀椀 愀 欀瀀琀爀栀漀稀 欀瀀攀欀攀琀✀Ⰰഀ਀        ✀渀漀开瀀椀挀开琀漀开愀搀搀✀ 㴀㸀 ✀一椀渀挀猀 栀漀稀稀愀搀栀愀琀 欀瀀✀Ⰰഀ਀        ✀渀攀攀搀开漀渀攀开愀氀戀甀洀✀ 㴀㸀 ✀䔀栀栀攀稀 愀 昀甀渀欀挀椀栀漀稀 氀攀最愀氀戀戀 攀最礀 愀氀戀甀洀渀愀欀 氀琀攀稀渀椀攀 欀攀氀氀✀Ⰰഀ਀        ✀眀愀爀渀椀渀最✀ 㴀㸀 ✀䘀椀最礀攀氀洀攀稀琀攀琀猀✀Ⰰഀ਀        ✀挀栀愀渀最攀开瀀攀爀洀✀ 㴀㸀 ✀愀 猀稀欀爀椀瀀琀 渀攀洀 琀甀搀 爀渀椀 攀戀戀攀 愀 欀渀礀瘀琀爀戀愀Ⰰ 㜀㔀㔀ⴀ爀氀 㜀㜀㜀ⴀ爀攀 欀攀氀氀 挀猀攀爀氀渀攀搀 愀 樀漀最漀猀甀氀琀猀最琀 洀椀攀氀琀琀 栀漀稀稀愀搀猀稀 欀瀀攀欀攀琀 ℀✀Ⰰഀ਀        ✀琀愀爀最攀琀开愀氀戀甀洀✀ 㴀㸀 ✀㰀戀㸀䄀搀樀愀 栀漀稀稀 愀 㰀⼀戀㸀∀─猀∀㰀戀㸀 欀渀礀瘀琀爀戀氀 愀 欀瀀攀欀攀琀 愀 㰀⼀戀㸀─猀 愀氀戀甀洀栀漀稀✀Ⰰഀ਀        ✀昀漀氀搀攀爀✀ 㴀㸀 ✀䬀渀礀瘀琀爀✀Ⰰഀ਀        ✀椀洀愀最攀✀ 㴀㸀 ✀䬀瀀✀Ⰰഀ਀        ✀愀氀戀甀洀✀ 㴀㸀 ✀䄀氀戀甀洀✀Ⰰഀ਀        ✀爀攀猀甀氀琀✀ 㴀㸀 ✀䔀爀攀搀洀渀礀✀Ⰰഀ਀        ✀搀椀爀开爀漀✀ 㴀㸀 ✀一攀洀 爀栀愀琀⸀ ✀Ⰰഀ਀        ✀搀椀爀开挀愀渀琀开爀攀愀搀✀ 㴀㸀 ✀一攀洀 漀氀瘀愀猀栀愀琀⸀ ✀Ⰰഀ਀        ✀椀渀猀攀爀琀✀ 㴀㸀 ✀���樀 欀瀀攀欀 栀漀稀稀愀搀猀愀 愀 欀瀀琀爀栀漀稀✀Ⰰഀ਀        ✀氀椀猀琀开渀攀眀开瀀椀挀✀ 㴀㸀 ✀���樀 欀瀀攀欀 昀攀氀猀漀爀漀氀猀愀✀Ⰰഀ਀        ✀椀渀猀攀爀琀开猀攀氀攀挀琀攀搀✀ 㴀㸀 ✀䬀椀樀攀氀氀琀 欀瀀攀欀 栀漀稀稀愀搀猀愀✀Ⰰഀ਀        ✀渀漀开瀀椀挀开昀漀甀渀搀✀ 㴀㸀 ✀一椀渀挀猀 切樀 欀瀀✀Ⰰഀ਀        ✀戀攀开瀀愀琀椀攀渀琀✀ 㴀㸀 ✀䰀最礀 琀ﰀ爀攀氀攀洀洀攀氀Ⰰ 愀 猀稀欀爀椀瀀琀渀攀欀 椀搀 欀攀氀氀 愀 欀瀀攀欀 栀漀稀稀愀搀猀栀漀稀✀Ⰰഀ਀        ✀渀漀琀攀猀✀ 㴀㸀 ✀㰀甀氀㸀✀ ⸀ ✀㰀氀椀㸀㰀戀㸀伀䬀㰀⼀戀㸀 㨀 愀稀琀 樀攀氀攀渀琀椀Ⰰ 栀漀最礀 愀 欀瀀 栀漀稀稀愀搀猀愀 猀椀欀攀爀攀猀 瘀漀氀琀✀ ⸀ ✀㰀氀椀㸀㰀戀㸀䐀倀㰀⼀戀㸀 㨀 愀稀琀 樀攀氀攀渀琀椀Ⰰ 栀漀最礀 愀 欀瀀 洀爀 愀稀 愀搀愀琀戀稀椀猀戀愀渀 瘀漀氀琀✀ ⸀ ✀㰀氀椀㸀㰀戀㸀倀䈀㰀⼀戀㸀 㨀 愀稀琀 樀攀氀攀渀琀椀Ⰰ 栀漀最礀 愀 欀瀀 渀攀洀 瘀漀氀琀 栀漀稀稀愀搀栀愀琀Ⰰ 攀氀氀攀渀爀椀稀搀 愀 欀漀渀昀椀最甀爀挀椀琀 猀 愀 欀瀀攀欀攀琀 琀愀爀琀愀氀洀愀稀 欀渀礀瘀琀爀愀欀 樀漀最漀猀甀氀琀猀最愀椀琀 ✀ ⸀ ✀㰀氀椀㸀䠀愀 愀稀 伀䬀Ⰰ 䐀倀Ⰰ 倀䈀 尀✀樀攀氀攀欀尀✀ 渀攀洀 氀琀栀愀琀欀Ⰰ 欀氀椀欀欀攀氀樀 愀 栀椀戀猀 欀瀀爀攀 愀 倀䠀倀 栀椀戀愀ﰀ稀攀渀攀琀渀攀欀 洀攀最樀攀氀攀渀琀猀栀攀稀✀ ⸀ ✀㰀氀椀㸀䠀愀 愀 戀爀漀眀猀攀爀 氀攀椀搀稀琀攀琀琀Ⰰ 渀礀漀洀樀愀 洀攀最 愀 昀爀椀猀猀琀猀 最漀洀戀漀琀✀ ⸀ ✀㰀⼀甀氀㸀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 琀栀甀洀戀渀愀椀氀猀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 嘀漀椀搀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 戀愀渀渀椀渀最⸀瀀栀瀀  渀漀琀 椀渀 挀瀀最㄀⸀㈀⸀　ⴀ渀甀欀攀⼀⼀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 嘀漀椀搀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 甀瀀氀漀愀搀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀唀倀䰀伀䄀䐀开倀䠀倀✀⤀⤀ ␀氀愀渀最开甀瀀氀漀愀搀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀䬀瀀 昀攀氀琀氀琀猀攀✀Ⰰഀ਀        ✀洀愀砀开昀猀椀稀攀✀ 㴀㸀 ✀䴀愀砀椀洀甀洀 洀攀最攀渀最攀搀攀琀琀 昀樀氀洀爀攀琀 ─猀 䬀䈀✀Ⰰഀ਀        ✀愀氀戀甀洀✀ 㴀㸀 ✀䄀氀戀甀洀✀Ⰰഀ਀        ✀瀀椀挀琀甀爀攀✀ 㴀㸀 ✀䬀瀀✀Ⰰഀ਀        ✀瀀椀挀开琀椀琀氀攀✀ 㴀㸀 ✀䬀瀀 挀洀攀✀Ⰰഀ਀        ✀搀攀猀挀爀椀瀀琀椀漀渀✀ 㴀㸀 ✀䬀瀀 氀攀爀猀愀✀Ⰰഀ਀        ✀欀攀礀眀漀爀搀猀✀ 㴀㸀 ✀䬀甀氀挀猀猀稀愀瘀愀欀 ⠀猀稀欀稀欀欀攀氀 攀氀瘀氀愀猀稀琀瘀愀⤀✀Ⰰഀ਀        ✀攀爀爀开渀漀开愀氀戀开甀瀀氀漀愀搀愀戀氀攀猀✀ 㴀㸀 ✀一椀渀挀猀 愀氀戀甀洀Ⰰ 愀栀漀瘀愀 攀渀最攀搀氀礀攀稀攀琀琀 愀 昀攀氀琀氀琀猀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 甀猀攀爀洀最爀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀唀匀䔀刀䴀䜀刀开倀䠀倀✀⤀⤀ ␀氀愀渀最开甀猀攀爀洀最爀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀䘀攀氀栀愀猀稀渀氀欀 洀攀渀攀搀稀猀攀氀猀攀✀Ⰰഀ਀        ✀渀愀洀攀开愀✀ 㴀㸀 ✀一瘀 渀瘀攀欀瘀✀Ⰰഀ਀        ✀渀愀洀攀开搀✀ 㴀㸀 ✀一瘀 挀猀欀欀攀渀✀Ⰰഀ਀        ✀最爀漀甀瀀开愀✀ 㴀㸀 ✀䌀猀漀瀀漀爀琀 渀瘀攀欀瘀✀Ⰰഀ਀        ✀最爀漀甀瀀开搀✀ 㴀㸀 ✀䌀猀漀瀀漀爀琀 挀猀欀欀攀渀✀Ⰰഀ਀        ✀爀攀最开愀✀ 㴀㸀 ✀刀攀最⸀ 搀琀甀洀 渀瘀攀欀瘀✀Ⰰഀ਀        ✀爀攀最开搀✀ 㴀㸀 ✀刀攀最⸀ 搀琀甀洀 挀猀欀欀攀渀✀Ⰰഀ਀        ✀瀀椀挀开愀✀ 㴀㸀 ✀䬀瀀猀稀洀 渀瘀攀欀瘀✀Ⰰഀ਀        ✀瀀椀挀开搀✀ 㴀㸀 ✀䬀瀀猀稀洀 挀猀欀欀攀渀✀Ⰰഀ਀        ✀搀椀猀欀甀开愀✀ 㴀㸀 ✀䐀椀猀稀欀昀攀氀栀愀猀稀渀氀猀 渀瘀攀欀瘀✀Ⰰഀ਀        ✀搀椀猀欀甀开搀✀ 㴀㸀 ✀䐀椀猀稀欀昀攀氀栀愀猀稀渀氀猀 挀猀欀欀攀渀✀Ⰰഀ਀        ✀猀漀爀琀开戀礀✀ 㴀㸀 ✀䘀攀氀栀愀猀稀渀氀欀 猀漀爀爀攀渀搀攀稀猀攀✀Ⰰഀ਀        ✀攀爀爀开渀漀开甀猀攀爀猀✀ 㴀㸀 ✀一椀渀挀猀 昀攀氀栀愀猀稀渀氀 ℀✀Ⰰഀ਀        ✀攀爀爀开攀搀椀琀开猀攀氀昀✀ 㴀㸀 ✀一攀洀 猀稀攀爀欀攀猀稀琀栀攀琀攀搀 愀 猀愀樀琀 瀀爀漀昀椀氀漀搀Ⰰ 栀愀猀稀渀氀搀 愀稀 尀✀준渀 瀀爀漀昀椀氀漀洀尀✀ 洀攀渀ﰀ瀀漀渀琀漀琀✀Ⰰഀ਀        ✀攀搀椀琀✀ 㴀㸀 ✀匀娀䔀刀䬀䔀匀娀吀✀Ⰰഀ਀        ✀搀攀氀攀琀攀✀ 㴀㸀 ✀吀혀刀혀䰀✀Ⰰഀ਀        ✀渀愀洀攀✀ 㴀㸀 ✀䘀攀氀栀愀猀稀渀氀渀瘀✀Ⰰഀ਀        ✀最爀漀甀瀀✀ 㴀㸀 ✀䌀猀漀瀀漀爀琀✀Ⰰഀ਀        ✀椀渀愀挀琀椀瘀攀✀ 㴀㸀 ✀䤀渀愀欀琀瘀✀Ⰰഀ਀        ✀漀瀀攀爀愀琀椀漀渀猀✀ 㴀㸀 ✀䴀ﬀ瘀攀氀攀琀攀欀✀Ⰰഀ਀        ✀瀀椀挀琀甀爀攀猀✀ 㴀㸀 ✀䬀瀀攀欀✀Ⰰഀ਀        ✀搀椀猀欀开猀瀀愀挀攀✀ 㴀㸀 ✀䘀攀氀栀愀猀稀渀氀琀 琀爀栀攀氀礀 ⼀ 欀瘀琀愀✀Ⰰഀ਀        ✀爀攀最椀猀琀攀爀攀搀开漀渀✀ 㴀㸀 ✀刀攀最椀猀稀琀爀氀瘀愀✀Ⰰഀ਀        ✀甀开甀猀攀爀开漀渀开瀀开瀀愀最攀猀✀ 㴀㸀 ✀─搀 昀攀氀栀愀猀稀渀氀 ─搀 漀氀搀愀氀漀渀✀Ⰰഀ਀        ✀挀漀渀昀椀爀洀开搀攀氀✀ 㴀㸀 ✀䈀椀稀琀猀 琀爀氀渀椀 欀瘀渀漀搀 愀 昀攀氀栀愀猀稀渀氀琀㼀 尀尀渀䴀椀渀搀攀渀 欀瀀攀 猀 愀氀戀甀洀愀 椀猀 琀爀氀搀渀椀 昀漀最⸀✀Ⰰഀ਀        ✀洀愀椀氀✀ 㴀㸀 ✀䴀䄀䤀䰀✀Ⰰഀ਀        ✀攀爀爀开甀渀欀渀漀眀渀开甀猀攀爀✀ 㴀㸀 ✀䄀 欀椀樀攀氀氀琀 昀攀氀栀愀猀稀渀氀 渀攀洀 氀琀攀稀椀欀 ℀✀Ⰰഀ਀        ✀洀漀搀椀昀礀开甀猀攀爀✀ 㴀㸀 ✀䘀攀氀栀愀猀稀渀氀 洀搀漀猀琀猀愀✀Ⰰഀ਀        ✀渀漀琀攀猀✀ 㴀㸀 ✀䴀攀最樀攀最礀稀猀攀欀✀Ⰰഀ਀        ✀渀漀琀攀开氀椀猀琀✀ 㴀㸀 ✀㰀氀椀㸀䠀愀 渀攀洀 欀瘀渀漀搀 洀攀最瘀氀琀漀稀琀愀琀渀椀 愀稀 愀欀琀甀氀椀猀 樀攀氀猀稀琀Ⰰ 栀愀最礀搀 ﰀ爀攀猀攀渀 愀 ∀樀攀氀猀稀∀ 洀攀稀琀✀Ⰰഀ਀        ✀瀀愀猀猀眀漀爀搀✀ 㴀㸀 ✀䨀攀氀猀稀✀Ⰰഀ਀        ✀甀猀攀爀开愀挀琀椀瘀攀✀ 㴀㸀 ✀䘀攀氀栀愀猀稀渀氀 愀欀琀瘀✀Ⰰഀ਀        ✀甀猀攀爀开最爀漀甀瀀✀ 㴀㸀 ✀䘀攀氀栀愀猀稀渀氀 挀猀漀瀀漀爀琀✀Ⰰഀ਀        ✀甀猀攀爀开攀洀愀椀氀✀ 㴀㸀 ✀䘀攀氀栀愀猀稀渀氀 攀洀愀椀氀 挀洀攀✀Ⰰഀ਀        ✀甀猀攀爀开眀攀戀开猀椀琀攀✀ 㴀㸀 ✀䘀攀氀栀愀猀稀渀氀 栀漀渀氀愀瀀樀愀✀Ⰰഀ਀        ✀挀爀攀愀琀攀开渀攀眀开甀猀攀爀✀ 㴀㸀 ✀���樀 昀攀氀栀愀猀稀渀氀 氀琀爀攀栀漀稀猀愀✀Ⰰഀ਀        ✀甀猀攀爀开氀漀挀愀琀椀漀渀✀ 㴀㸀 ✀䘀攀氀栀愀猀稀渀氀 氀愀欀栀攀氀礀攀✀Ⰰഀ਀        ✀甀猀攀爀开椀渀琀攀爀攀猀琀猀✀ 㴀㸀 ✀䘀攀氀栀愀猀稀渀氀 爀搀攀欀氀搀猀椀 欀爀攀✀Ⰰഀ਀        ✀甀猀攀爀开漀挀挀甀瀀愀琀椀漀渀✀ 㴀㸀 ✀䘀攀氀栀愀猀稀渀氀 昀漀最氀愀氀欀漀稀猀愀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 甀琀椀氀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀唀吀䤀䰀开倀䠀倀✀⤀⤀ ␀氀愀渀最开甀琀椀氀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀䬀瀀攀欀 琀洀爀攀琀攀稀猀攀✀Ⰰഀ਀        ✀眀栀愀琀开椀琀开搀漀攀猀✀ 㴀㸀 ✀䴀椀 琀爀琀渀樀攀渀✀Ⰰഀ਀        ✀眀栀愀琀开甀瀀搀愀琀攀开琀椀琀氀攀猀✀ 㴀㸀 ✀䌀洀攀欀 愀欀琀甀愀氀椀稀氀猀愀 昀樀氀渀攀瘀攀欀戀氀✀Ⰰഀ਀        ✀眀栀愀琀开搀攀氀攀琀攀开琀椀琀氀攀✀ 㴀㸀 ✀䌀洀攀欀 琀爀氀猀攀✀Ⰰഀ਀        ✀眀栀愀琀开爀攀戀甀椀氀搀✀ 㴀㸀 ✀䤀欀漀渀漀欀 猀 琀洀爀攀琀攀稀攀琀琀 欀瀀攀欀 切樀爀愀最攀渀攀爀氀猀愀✀Ⰰഀ਀        ✀眀栀愀琀开搀攀氀攀琀攀开漀爀椀最椀渀愀氀猀✀ 㴀㸀 ✀䔀爀攀搀攀琀椀 欀瀀攀欀 昀攀氀ﰀ氀爀猀愀 愀稀 琀洀爀攀琀攀稀攀琀琀攀欀欀攀氀✀Ⰰഀ਀        ✀昀椀氀攀✀ 㴀㸀 ✀䘀樀氀✀Ⰰഀ਀        ✀琀椀琀氀攀开猀攀琀开琀漀✀ 㴀㸀 ✀挀洀 戀攀氀氀琀猀愀 ⸀⸀✀Ⰰഀ਀        ✀猀甀戀洀椀琀开昀漀爀洀✀ 㴀㸀 ✀爀瘀渀礀攀猀琀猀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀搀开猀甀挀挀攀猀昀甀氀氀礀✀ 㴀㸀 ✀猀椀欀攀爀攀猀 洀搀漀猀琀猀✀Ⰰഀ਀        ✀攀爀爀漀爀开挀爀攀愀琀攀✀ 㴀㸀 ✀䠀䤀䈀䄀 愀 最攀渀攀爀氀猀 猀漀爀渀✀Ⰰഀ਀        ✀挀漀渀琀椀渀甀攀✀ 㴀㸀 ✀吀戀戀 欀瀀 昀攀氀搀漀氀最漀稀猀愀✀Ⰰഀ਀        ✀洀愀椀渀开猀甀挀挀攀猀猀✀ 㴀㸀 ✀䄀 ─ 昀樀氀漀欀 昀攀氀栀愀猀稀渀氀猀愀 攀氀猀搀氀攀最攀猀 欀瀀欀渀琀 猀椀欀攀爀攀猀 瘀漀氀琀✀Ⰰഀ਀        ✀攀爀爀漀爀开爀攀渀愀洀攀✀ 㴀㸀 ✀─猀 ─猀 ⴀ爀愀 琀渀攀瘀攀稀猀攀 猀漀爀渀 䠀䤀䈀䄀✀Ⰰഀ਀        ✀攀爀爀漀爀开渀漀琀开昀漀甀渀搀✀ 㴀㸀 ✀䄀 ─ 昀樀氀漀欀 渀攀洀 琀愀氀氀栀愀琀欀✀Ⰰഀ਀        ✀戀愀挀欀✀ 㴀㸀 ✀瘀椀猀猀稀愀 愀 昀漀氀搀愀氀爀愀✀Ⰰഀ਀        ✀琀栀甀洀戀猀开眀愀椀琀✀ 㴀㸀 ✀䤀欀漀渀漀欀 猀⼀瘀愀最礀 琀洀爀攀琀攀稀攀琀琀 欀瀀攀欀 愀欀琀甀愀氀椀稀氀猀愀Ⰰ 欀爀氀攀欀 瘀爀樀⸀⸀⸀✀Ⰰഀ਀        ✀琀栀甀洀戀猀开挀漀渀琀椀渀甀攀开眀愀椀琀✀ 㴀㸀 ✀䤀欀漀渀漀欀 猀⼀瘀愀最礀 琀洀爀攀琀攀稀攀琀琀 欀瀀攀欀 愀欀琀甀愀氀椀稀氀猀渀愀欀 昀漀氀礀琀愀琀猀愀⸀⸀⸀✀Ⰰഀ਀        ✀琀椀琀氀攀猀开眀愀椀琀✀ 㴀㸀 ✀䌀洀攀欀 愀欀琀甀愀氀椀稀氀猀愀Ⰰ 欀爀氀攀欀 瘀爀樀⸀⸀⸀✀Ⰰഀ਀        ✀搀攀氀攀琀攀开眀愀椀琀✀ 㴀㸀 ✀䌀洀攀欀 琀爀氀猀攀Ⰰ 欀爀氀攀欀 瘀爀樀⸀⸀⸀✀Ⰰഀ਀        ✀爀攀瀀氀愀挀攀开眀愀椀琀✀ 㴀㸀 ✀䔀爀攀搀攀琀椀 欀瀀攀欀 昀攀氀ﰀ氀爀猀愀 愀稀 琀洀爀攀琀攀稀攀琀琀攀欀欀攀氀Ⰰ 欀爀氀攀欀 瘀爀樀⸀⸀⸀✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀✀ 㴀㸀 ✀䜀礀漀爀猀 甀琀愀猀琀猀漀欀✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开愀挀琀椀漀渀✀ 㴀㸀 ✀䴀ﬀ瘀攀氀攀琀 欀椀瘀氀愀猀稀琀猀愀✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开瀀愀爀愀洀攀琀攀爀✀ 㴀㸀 ✀倀愀爀愀洀琀攀爀攀欀 戀攀氀氀琀猀愀✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开愀氀戀甀洀✀ 㴀㸀 ✀䄀氀戀甀洀 欀椀瘀氀愀猀稀琀猀愀✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开瀀爀攀猀猀✀ 㴀㸀 ✀一礀漀洀樀 ─ⴀ琀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀✀ 㴀㸀 ✀䤀欀漀渀漀欀 猀⼀瘀愀最礀 琀洀爀攀琀攀稀攀琀琀 昀渀礀欀瀀攀欀 愀欀琀甀愀氀椀稀氀猀愀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开眀栀愀琀✀ 㴀㸀 ✀䴀椀琀 欀攀氀氀 愀欀琀甀愀氀椀稀氀渀椀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开琀栀甀洀戀✀ 㴀㸀 ✀䌀猀愀欀 椀欀漀渀漀欀愀琀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开瀀椀挀✀ 㴀㸀 ✀䌀猀愀欀 琀洀爀攀琀攀稀攀琀琀 欀瀀攀欀攀琀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开戀漀琀栀✀ 㴀㸀 ✀䤀欀漀渀漀欀愀琀 猀 琀洀爀攀琀攀稀攀琀琀 欀瀀攀欀攀琀 椀猀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开渀甀洀戀攀爀✀ 㴀㸀 ✀䬀氀椀欀欀攀氀猀攀渀欀渀琀 昀攀氀搀漀氀最漀稀愀渀搀 欀瀀攀欀 猀稀洀愀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开漀瀀琀椀漀渀✀ 㴀㸀 ✀⠀倀爀戀氀搀 挀猀欀欀攀渀琀攀渀椀 攀稀琀 愀稀 爀琀欀攀琀Ⰰ 栀愀 氀攀椀搀稀琀猀椀 瀀爀漀戀氀洀琀 猀稀氀攀氀猀稀⤀✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开琀椀琀氀攀✀ 㴀㸀 ✀䘀樀氀渀瘀 ☀⌀㠀㔀㤀㐀㬀 䬀瀀 挀洀✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开栀漀眀✀ 㴀㸀 ✀䠀漀最礀 氀攀最礀攀渀 洀搀漀猀琀瘀愀 愀 昀樀氀渀瘀✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开爀攀洀漀瘀攀✀ 㴀㸀 ✀䄀 樀瀀最 瘀最稀搀猀 琀爀氀猀攀 猀 开 ⠀愀氀甀氀瘀漀渀猀⤀ 栀攀氀礀攀琀琀攀猀琀猀攀 猀稀欀稀稀攀氀✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开攀甀爀漀✀ 㴀㸀 ✀㈀　　㌀开㄀㄀开㈀㌀开㄀㌀开㈀　开㈀　⸀樀瀀最 琀渀攀瘀攀稀猀攀 ㈀㌀⼀㄀㄀⼀㈀　　㌀ ㄀㌀㨀㈀　ⴀ爀愀✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开甀猀✀ 㴀㸀 ✀㈀　　㌀开㄀㄀开㈀㌀开㄀㌀开㈀　开㈀　⸀樀瀀最 琀渀攀瘀攀稀猀攀 ㄀㄀⼀㈀㌀⼀㈀　　㌀ ㄀㌀㨀㈀　ⴀ爀愀✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开琀椀洀攀✀ 㴀㸀 ✀㈀　　㌀开㄀㄀开㈀㌀开㄀㌀开㈀　开㈀　⸀樀瀀最 琀渀攀瘀攀稀猀攀 ㄀㌀㨀㈀　爀愀✀Ⰰഀ਀        ✀搀攀氀攀琀攀✀ 㴀㸀 ✀䬀瀀 挀洀攀欀 瘀愀最礀 攀爀攀搀攀琀椀 洀爀攀琀ﬀ 欀瀀攀欀 琀爀氀猀攀✀Ⰰഀ਀        ✀搀攀氀攀琀攀开琀椀琀氀攀✀ 㴀㸀 ✀䬀瀀 挀洀攀欀 琀爀氀猀攀✀Ⰰഀ਀        ✀搀攀氀攀琀攀开漀爀椀最椀渀愀氀✀ 㴀㸀 ✀䔀爀攀搀攀琀椀 洀爀攀琀ﬀ 欀瀀攀欀 琀爀氀猀攀✀Ⰰഀ਀        ✀搀攀氀攀琀攀开爀攀瀀氀愀挀攀✀ 㴀㸀 ✀䔀爀攀搀攀琀椀 欀瀀攀欀 昀攀氀ﰀ氀爀猀愀 琀洀爀攀琀攀稀攀琀琀攀氀✀Ⰰഀ਀        ✀猀攀氀攀挀琀开愀氀戀甀洀✀ 㴀㸀 ✀䄀氀戀甀洀 欀椀瘀氀愀猀稀琀猀愀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 瀀愀最攀琀椀琀氀攀⸀椀渀挀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀␀氀愀渀最开瀀愀最攀琀椀琀氀攀开瀀栀瀀 㴀 愀爀爀愀礀⠀ഀ਀✀搀椀瘀椀搀攀爀✀ 㴀㸀 ✀㸀✀Ⰰഀ਀    ✀瘀椀攀眀椀渀最✀ 㴀㸀 ✀嘀椀攀眀椀渀最 倀栀漀琀漀✀Ⰰഀ਀    ✀甀猀爀✀ 㴀㸀 ∀✀猀 倀栀漀琀漀 䜀愀氀氀攀爀礀∀Ⰰഀ਀    ✀瀀栀漀琀漀最愀氀氀攀爀礀✀ 㴀㸀 ✀倀栀漀琀漀 䜀愀氀氀攀爀礀✀Ⰰഀ਀    ⤀㬀ഀ਀ഀ਀㼀㸀䔀 