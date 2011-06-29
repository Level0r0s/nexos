<?php 
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.2.2   nuke - Language Pack 0.93                //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003 Gregory DEMAR <gdemar@wanadoo.fr>                 //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// New Port by CPG-nuke Dev Team                                                 //
// http://coppermine.findhere.org/                                          //
// Based on coppermine 1.1d by Surf  http://www.surf4all.net/               //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //
define('PIC_VIEWS', 'ZobrazenÃ­');
define('PIC_VOTES', 'Hlas(Ã¹))');
define('PIC_COMMENTS', 'KomentÃ¡Ã¸(Ã¹)');

// info about translators and translated language
$lang_translation_info = array(
    'lang_name_english' => 'Czech', // the name of your language in English, e.g. 'Greek' or 'Spanish'
    'lang_name_native' => '&#x10C;esky', // the name of your language in your mother tongue (for non-latin alphabets, use unicode), e.g. '&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940;' or 'Espan~ol'
    'lang_country_code' => 'cz', // the two-letter code for the country your language is most-often spoken (refer to http://www.iana.org/cctld/cctld-whois.htm), e.g. 'gr' or 'es'
    'trans_name' => 'Michal Soukup aka migon', // the name of the translator - can be a nickname
    'trans_email' => 'migon@boule.cz', // translator's email address (optional)
    'trans_website' => 'http://www.boule.cz/', // translator's website (optional)
    'trans_date' => '2003-10-02', // the date the translation was created / last modified
    );

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('BytÃ¹', 'KB', 'MB');
// Day of weeks and months
$lang_day_of_week = array('Ne', 'Po', 'Ãšt', 'St', 'Ãˆt', 'PÃ¡', 'So');
$lang_month = array('Leden', 'Ãšnor', 'BÃ¸ezen', 'Duben', 'KvÃ¬ten', 'Ãˆerven', 'Ãˆervenec', 'Srpen', 'ZÃ¡Ã¸Ã­', 'Ã˜Ã­jen', 'Listopad', 'Prosinec');
// Some common strings
$lang_yes = 'Ano';
$lang_no = 'Ne';
$lang_back = 'ZPÃŒT';
$lang_continue = 'POKRAÃˆOVAT';
$lang_info = 'Informace';
$lang_error = 'Chyba';
// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt = '%B %d, %Y';
$lastcom_date_fmt = '%m/%d/%y at %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y at %I:%M %p';
$comment_date_fmt = '%B %d, %Y at %I:%M %p';
// For the word censor
$lang_bad_words = array('pÃ­Ã¨a', 'hovno', '*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array('random' => 'NÃ¡hodnÃ© obrÃ¡zky',
    'lastup' => 'NejnovÃ¬jÂ¹Ã­',
    'lastupby' => 'My Last Additions', // new 1.2.2
    'lastalb' => 'Naposledy aktualizovanÃ¡ alba',
    'lastcom' => 'NejnovÃ¬jÂ¹Ã­ komentÃ¡Ã¸e',
    'lastcomby' => 'My Last comments', // new 1.2.2
    'topn' => 'NejprohlÃ­Â¾enÃ¬jÂ¹Ã­',
    'toprated' => 'NejlÃ©pe hodnocenÃ©',
    'lasthits' => 'Naposledy zobrazenÃ©',
    'search' => 'VÃ½sledky hledÃ¡nÃ­',
    'favpics' => 'OblÃ­benÃ© obrÃ¡zky',
    );

$lang_errors = array('access_denied' => 'NemÃ¡te oprÃ¡vnÃ¬nÃ­ na tuto strÃ¡nku',
    'perm_denied' => 'NemÃ¡te dostateÃ¨nÃ¡ prÃ¡va pro potvrzenÃ­ tÃ©to operace.',
    'param_missing' => 'Skriptu nebyly pÃ¸edÃ¡ny potÃ¸ebnÃ© parametry',
    'non_exist_ap' => 'VybranÃ© album/obrÃ¡zek neexistuje',
    'quota_exceeded' => 'VyÃ¨erpal(a) jste mÃ­sto na disku.<br /><br />VaÂ¹e kvÃ³ta je[quota]K, VaÂ¹e obrÃ¡zky zbÃ­rajÃ­ [space]K, pÃ¸idÃ¡nÃ­m tohoto obrÃ¡zku by jste svoji kvÃ³tu pÃ¸ekroÃ¨il',
    'gd_file_type_err' => 'Pokud pouÂ¾Ã­vÃ¡te GD knihovnu jsou podporovÃ¡ny jen obrÃ¡zky JPG a PNG',
    'invalid_image' => 'Tento obrÃ¡zek je poÂ¹kozen/poruÂ¹en GD knihovna s nÃ­m nemÃ¹Â¾e pracovat.',
    'resize_failed' => 'Nelze vytvoÃ¸it nÃ¡hled Ã¨i zmenÂ¹enÃ½ obrÃ¡zek',
    'no_img_to_display' => 'Zde nenÃ­ obrÃ¡zek kterÃ½ by jste si mohl(a) prohlÃ©dnout',
    'non_exist_cat' => 'VybranÃ¡ kategorie neexistuje',
    'orphan_cat' => 'Podkategorie nemÃ¡ nadÃ¸Ã­zenou kategorii. ProblÃ©m opravte pÃ¸es nastavenÃ­ kategoriÃ­.',
    'directory_ro' => 'Do adresÃ¡Ã¸e \'%s\' nelze zapisovat (nedostateÃ¨nÃ¡ prÃ¡va), obrÃ¡zky nemohly bÃ½t smazÃ¡ny.',
    'non_exist_comment' => 'VybranÃ½ komentÃ¡Ã¸ neexistuje',
    'pic_in_invalid_album' => 'ObrÃ¡zek(y) je/jsou v neexitujÃ­cÃ­m albu (%s)!?',
    'banned' => 'Byl jse vykopnut z tÃ¬chto strÃ¡nek, nenÃ­ VÃ¡m umoÂ¾nÃ¬no je pouÂ¾Ã­vat.',
    'not_with_udb' => 'Tato funkce je vypnutÃ¡ jelikoÂ¾ je integrovÃ¡na ve fÃ³ru. BuÃ¯ nenÃ­ poÂ¾adovanÃ¡ fukce dostupnÃ¡ na tomto systÃ©mu, nebo tuto/tyto funci/e plnÃ­ fÃ³rum.',
    'members_only' => 'This function is for members only, please join.', // changed in cpg1.2.0nuke
    'mustbe_god' => 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function'
    );
// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //
$lang_main_menu = array('alb_list_title' => 'PÃ¸ejÃ­t na seznam galeriÃ­',
    'alb_list_lnk' => 'Seznam galeriÃ­',
    'my_gal_title' => 'PÃ¸ejÃ­t do mÃ© osobnÃ­ galerie',
    'my_gal_lnk' => 'Moje galerie',
    'my_prof_lnk' => 'MÃ¹j Profil',
    'adm_mode_title' => 'Do Admin mÃ³du',
    'adm_mode_lnk' => 'Admin mÃ³d',
    'usr_mode_title' => 'Do UÂ¾ivatelskÃ©ho mÃ³du',
    'usr_mode_lnk' => 'UÂ¾ivatelskÃ½ mÃ³d',
    'upload_pic_title' => 'NahrÃ¡t obrÃ¡zek do gallerie',
    'upload_pic_lnk' => 'Upload obrÃ¡zku',
    'register_title' => 'VytvoÃ¸it ÃºÃ¨et',
    'register_lnk' => 'Registrovat se',
    'login_lnk' => 'PÃ¸ihlÃ¡sit',
    'logout_lnk' => 'OdhlÃ¡sit',
    'lastup_lnk' => 'NejnovÃ¬jÂ¹Ã­ obrÃ¡zky',
    'lastcom_lnk' => 'PoslednÃ­ komentÃ¡Ã¸e',
    'topn_lnk' => 'NejprohlÃ­Â¾enÃ¬jÂ¹Ã­',
    'toprated_lnk' => 'NejlÃ©pe hodnocenÃ©',
    'search_lnk' => 'VyhledÃ¡vÃ¡nÃ­',
    'fav_lnk' => 'OblÃ­benÃ©',
    );

$lang_gallery_admin_menu = array('upl_app_lnk' => 'PotvrzenÃ­ uploadu',
    'config_lnk' => 'NastavenÃ­',
    'albums_lnk' => 'Galerie',
    'categories_lnk' => 'Kategorie',
    'users_lnk' => 'UÂ¾ivatelÃ©',
    'groups_lnk' => 'UÂ¾. skupiny',
    'comments_lnk' => 'KomentÃ¡Ã¸e',
    'searchnew_lnk' => 'DÃ¡vkovÃ© pÃ¸idÃ¡nÃ­ obrÃ¡zkÃ¹',
    'util_lnk' => 'ZmÃ¬nit velikost obrÃ¡zkÃ¹',
    'ban_lnk' => 'Vykopnout uÂ¾ivatele',
    );

$lang_user_admin_menu = array('albmgr_lnk' => 'VytvoÃ¸it / organizovat moje galerie',
    'modifyalb_lnk' => 'ZmÃ¬nit moje galerie',
    'my_prof_lnk' => 'MÃ¹j profil',
    );

$lang_cat_list = array('category' => 'Kategorie',
    'albums' => 'Galerie',
    'pictures' => 'ObrÃ¡zky',
    );

$lang_album_list = array('album_on_page' => '%d GaleriÃ­ na %d strÃ¡nkÃ¡ch'
    ); 
// ascending VZESTUPNE
$lang_thumb_view = array(
	'date' => 'DATUM', 
    'name' => 'JMÃ‰NO SOUBORU',
    'title' => 'NADPIS',
    'sort_da' => 'Ã˜adit vzestupnÃ¬ podle data',
    'sort_dd' => 'Ã˜adit sestupnÃ¬ podle data',
    'sort_na' => 'Ã˜adit vzestupnÃ¬ podle jmÃ©na',
    'sort_nd' => 'Ã˜adit sestupnÃ¬ podle jmÃ©na',
    'sort_ta' => 'Ã˜adit podle nadpisu vzestupnÃ¬',
    'sort_td' => 'Ã˜adit podle nadpisu sestupnÃ¬',
    'pic_on_page' => '%d obrÃ¡zkkÃ¹ na %d strÃ¡nkÃ¡ch',
    'user_on_page' => '%d uÂ¾ivatelÃ¹ na %d strÃ¡nkÃ¡ch',
    'sort_ra' => 'Sort by rating ascending', // new in cpg1.2.0nuke
    'sort_rd' => 'Sort by rating descending', // new in cpg1.2.0nuke
    'rating' => 'RATING', // new in cpg1.2.0nuke
    'sort_title' => 'Sort pictures by:', // new in cpg1.2.0nuke

    );

$lang_img_nav_bar = array('thumb_title' => 'ZpÃ¬t na strÃ¡nku s nÃ¡hledy',
    'pic_info_title' => 'Zobraz/skryj informace o obrÃ¡zku',
    'slideshow_title' => 'Slideshow',
    'slideshow_disabled' => 'e-cards are disabled', // new in cpg1.2.0nuke
    'slideshow_disabled_msg' => $lang_errors['members_only'], // new in cpg1.2.0nuke
    'ecard_title' => 'Poslat tento obrÃ¡zek jako pohlednici',
    'ecard_disabled' => 'Pohlednice jsou vypnutÃ©',
    'ecard_disabled_msg' => 'NemÃ¡te dostateÃ¨nÃ¡ prÃ¡va pro zaslÃ¡nÃ­ pohlednice',
    'prev_title' => 'PÃ¸edchozÃ­ obrÃ¡zek',
    'next_title' => 'DalÂ¹Ã­ obrÃ¡zek',
    'pic_pos' => 'OBRÃZEK %s/%s',
    'no_more_images' => 'There are no more images in this galley', // new in cpg1.2.0nuke
    'no_less_images' => 'This is the first image in the gallery', // new in cpg1.2.0nuke
    );

$lang_rate_pic = array('rate_this_pic' => 'Hodnotit tento obrÃ¡zek ',
    'no_votes' => '(Â¾Ã¡dnÃ© hodnocenÃ­)',
    'rating' => '(AktualnÃ­ hodnocenÃ­ : %s / z 5, hlasovÃ¡no %s krÃ¡t)',
    'rubbish' => 'HnusnÃ½',
    'poor' => 'MizernÃ½',
    'fair' => 'Ujde to',
    'good' => 'DobrÃ½',
    'excellent' => 'VÃ½bornÃ½',
    'great' => 'DokonalÃ½',
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
    CRITICAL_ERROR => 'KritickÃ¡ chyba',
    'file' => 'Soubor: ',
    'line' => 'Ã˜Ã¡dka: ',
    );

$lang_display_thumbnails = array('filename' => 'JmÃ©no souboru : ',
    'filesize' => 'Velikost souboru : ',
    'dimensions' => 'RozmÃ¬ry : ',
    'date_added' => 'Datum pÃ¸idÃ¡nÃ­ : '
    );

$lang_get_pic_data = array('n_comments' => '%s KomentÃ¡Ã¸(Ã¹)',
    'n_views' => '%s zobrazenÃ­',
    'n_votes' => '(%s hlas(Ã¹))'
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
if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array('Exclamation' => 'Exclamation',
        'Question' => 'Question',
        'Very Happy' => 'Very Happy',
        'Smile' => 'Smile',
        'Sad' => 'Sad',
        'Surprised' => 'Surprised',
        'Shocked' => 'Shocked',
        'Confused' => 'Confused',
        'Cool' => 'Cool',
        'Laughing' => 'Laughing',
        'Mad' => 'Mad',
        'Razz' => 'Razz',
        'Embarassed' => 'Embarassed',
        'Crying or Very sad' => 'Crying or Very sad',
        'Evil or Very Mad' => 'Evil or Very Mad',
        'Twisted Evil' => 'Twisted Evil',
        'Rolling Eyes' => 'Rolling Eyes',
        'Wink' => 'Wink',
        'Idea' => 'Idea',
        'Arrow' => 'Arrow',
        'Neutral' => 'Neutral',
        'Mr. Green' => 'Mr. Green',
        );
// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //
// void
// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) $lang_admin_php = array(0 => 'OpouÂ¹tÃ­m Admin MÃ³d....:-(',
        1 => 'Vstupuji do Admin MÃ³du....:-)',
        );
// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) $lang_albmgr_php = array('alb_need_name' => 'Galerie musÃ­ mÃ­t jmÃ©no',
        'confirm_modifs' => 'Ste si jist(a) tÃ¬mito zmÃ¬nami ?',
        'no_change' => 'NeudÃ¬lal(a) jste Â¾Ã¡dnÃ© zmÃ¬ny !',
        'new_album' => 'NovÃ¡ galerie',
        'confirm_delete1' => 'Jste si jist(a), Â¾e chcete smazat tuto galerii ?',
        'confirm_delete2' => '\nVÂ¹echny obrÃ¡zky a komentÃ¡Ã¸e budou smazÃ¡ny !',
        'select_first' => 'Nejprve vyberte galerii',
        'alb_mrg' => 'SprÃ¡vce galeriÃ­',
        'my_gallery' => '* Moje galerie *',
        'no_category' => '* NenÃ­ kategorie *',
        'delete' => 'Smazat',
        'new' => 'NovÃ½/Ã¡',
        'apply_modifs' => 'Potvrdit zmÃ¬ny',
        'select_category' => 'Vybrat kategorii',
        );
// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) $lang_catmgr_php = array('miss_param' => 'Parametry potÃ¸ebnÃ© pro \'%s\'operaci not supplied !',
        'unknown_cat' => 'VybranÃ¡ kategorie v databÃ¡zi neexistuje',
        'usergal_cat_ro' => 'Nelze smazat uÂ¾ivatelskÃ© galerie !',
        'manage_cat' => 'Spravovat kategorie',
        'confirm_delete' => 'Opravdu chcete SMAZAT tuto kategorii',
        'category' => 'Kategorie',
        'operations' => 'Operace',
        'move_into' => 'PÃ¸esunout do',
        'update_create' => 'Aktualizovat/VytvoÃ¸it kategorii',
        'parent_cat' => 'NadÃ¸azenÃ¡ kategorie',
        'cat_title' => 'Nadpis kategorie',
        'cat_desc' => 'Popis kategorie'
        );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
if (defined('CONFIG_PHP')) $lang_config_php = array('title' => 'NastavenÃ­',
        'restore_cfg' => 'Nastavit vÃ½chozÃ­',
        'save_cfg' => 'UloÂ¾it konfiguraci',
        'notes' => 'PoznÃ¡mky',
        'info' => 'Informace',
        'upd_success' => 'Konfigurace byla zmÃ¬nÃ¬na',
        'restore_success' => 'Konfigurace byla nastavena na vÃ½chozÃ­ nastavenÃ­',
        'name_a' => 'JmÃ©no vzestupnÃ¬',
        'name_d' => 'JmÃ©no sestupnÃ¬',
        'date_a' => 'Datum vzestupnÃ¬',
        'date_d' => 'Datum sestupnÃ¬',
        'title_a' => 'Nadpis vzestupnÃ¬',
        'title_d' => 'Nadpis sestupnÃ¬',
        'rating_a' => 'Rating ascending', // new in cpg1.2.0nuke
        'rating_d' => 'Rating descending', // new in cpg1.2.0nuke

        'th_any' => 'Max Aspect',
        'th_ht' => 'Height',
        'th_wd' => 'Width',
        );
// start left side interpretation
if (defined('CONFIG_PHP'))
    $lang_config_data = array(
        // General settings
        'ZÃ¡kladnÃ­ nastavenÃ­',
        array(
            'JmÃ©no gallerie', 'gallery_name', 0),
        array(
            'Popis Galerie', 'gallery_description', 0),
        array(
            'Email administrÃ¡tora galerie', 'gallery_admin_email', 0),
        array(
            'Address to nuke folder ie http://www.mysite.tld/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
        array(
            'Jazyk', 'lang', 5),
// for postnuke change
        array('TÃ©mÃ¡tko', 'cpgtheme', 6),
        array(
            'Page Specific Titles instead of >Coppermine', 'nice_titles', 1), 
        array('Show blocks on the right', 'right_blocks', 1), // new 1.2.2
        // 'Album list view',
        'NastavenÃ­ zobrazenÃ­',
        array(
            'Â©Ã­Ã¸ka hlavnÃ­ tabulky v (pixelech nebo %)', 'main_table_width', 0),
        array(
            'PoÃ¨et ÃºrovnÃ­ subkategoriÃ­', 'subcat_level', 0),
        array(
            'PoÃ¨et galeriÃ­ na strÃ¡nku', 'albums_per_page', 0),
        array(
            'PoÃ¨et sloupcÃ¹ v pÃ¸ehledu galeriÃ­', 'album_list_cols', 0),
        array(
            'Velikost nÃ¡hledÃ¹ v pixelech', 'alb_list_thumb_size', 0),
        array(
            'Obsah hlavnÃ­ strÃ¡nky', 'main_page_layout', 0),
        array(
            'Ukazovat v kategoriÃ­ch nÃ¡hledy galeriÃ­ prvnÃ­ ÃºrovnÃ¬', 'first_level', 1), 
        // 'Thumbnail view',
        'ZobrazenÃ­ nÃ¡hledÃ¹',
        array(
            'PoÃ¨et sloupcÃ¹ na strÃ¡nku', 'thumbcols', 0),
        array(
            'PoÃ¨et Ã¸Ã¡dkÃ¹ na strÃ¡nku', 'thumbrows', 0),
        array(
            'MaximÃ¡lnÃ­ mnoÂ¾stvÃ­ zÃ¡loÂ¾ek', 'max_tabs', 0),
        array(
            'Zobrazit legendu obrÃ¡zku pod nÃ¡hledem', 'caption_in_thumbview', 1),
        array(
            'Zobrazit poÃ¨et komentÃ¡Ã¸Ã¹ pod nÃ¡hldem', 'display_comment_count', 1),
        array(
            'ZÃ¡kladnÃ­ Ã¸azenÃ­ nÃ¡hledÃ¹', 'default_sort_order', 3),
        array(
            'Min. poÃ¨et hlasÃ¹ potÃ¸ebnÃ½ k zaÃ¸azenÃ­ do seznamu \'NejlÃ©pe hodnocenÃ©\'', 'min_votes_for_rating', 0),
        array(
            'Alts and title tags of thumbnail show title and keyword instead of picinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
        // 'Image view &amp; Comment settings',
        'ZobrazenÃ­ obrÃ¡zkÃ¹ &amp; NastavenÃ­ komentÃ¡Ã¸Ã¹',
        array(
            'Â©Ã­Ã¸ka tabulky pro zobrazenÃ­ obrÃ¡zku (v pixelech nebo %)', 'picture_table_width', 0),
        array(
            'VÂ¾dy zobrazit podrobnÃ© info', 'display_pic_info', 1),
        array(
            'CENZUROVAT slova v komentÃ¡Ã¸Ã­ch', 'filter_bad_words', 1),
        array(
            'Povilit smajlÃ­ky v komentÃ¡Ã¸Ã­ch', 'enable_smilies', 1),
        array(
            'Allow several consecutive comments on one pic from the same user', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
        array(
            'Email site admin upon comment submission' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
        array(
            'MaximÃ¡lnÃ­ dÃ¡lka popisu obrÃ¡zku', 'max_img_desc_length', 0),
        array(
            'MaximÃ¡lnÃ­ dÃ©lka slova v komentÃ¡Ã¸i', 'max_com_wlength', 0),
        array(
            'MaximÃ¡lnÃ­ mnoÂ¾stvÃ­ Ã¸Ã¡dkÃ¹ v komentÃ¡Ã¸i', 'max_com_lines', 0),
        array(
            'MaximÃ¡lnÃ­ dÃ©lka komentÃ¡Ã¸e', 'max_com_size', 0),
        array(
            'UkÃ¡zat filmovÃ½ prouÂ¾ek', 'display_film_strip', 1),
        array(
            'PoÃ¨et poloÂ¾ek ve filmovÃ©m prouÂ¾ku', 'max_film_strip_items', 0),
        array('Allow viewing of full size pic by anonymous', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
		array('Number of days between being able to vote on the same image','keep_votes_time',0), // new in cpg1.2.2c nuke
       // 'Pictures and thumbnails settings',


        'ObrÃ¡zky a nastavenÃ­ nÃ¡hledÃ¹',
        array(
            'Kvalita souborÃ¹ JPEG', 'jpeg_qual', 0),
        array(
            'MaximÃ¡lnÃ­ rozmÃ¬ry nÃ¡hledu <b>*</b>', 'thumb_width', 0),
        array(
            'PouÂ¾Ã­t rozmÃ¬r ( Â¹Ã­Ã¸ka nebo vÃ½Â¹ka nebo maximÃ¡lnÃ­ rozmÃ¬r nÃ¡hledu )<b>*</b>', 'thumb_use', 7),
        array(
            'VytvoÃ¸it stÃ¸ednÃ­ obrÃ¡zek', 'make_intermediate', 1),
        array(
            'MaximÃ¡lnÃ­ Â¹Ã­Ã¸ka nebo vÃ½Â¹ka stÃ¸enÃ­ho obrÃ¡zku <b>*</b>', 'picture_width', 0),
        array(
            'MaximÃ¡lnÃ­ velikost uploadovanÃ½ch obrÃ¡zkÃ¹ (KB)', 'max_upl_size', 0),
        array(
            'MaximÃ¡lnÃ­ rozmÃ¬ry uploadovanÃ½ch obrÃ¡zkÃ¹ (v pixelech)', 'max_upl_width_height', 0),
        array('Allow multiple Files to be upload with same file name', 'samename', 1), 
        // 'User settings',
        'NastavenÃ­ uÂ¾ivatelÃ¹',
        array(
            'Povolit registraci novÃ½ch uÂ¾ivatelÃ¹', 'allow_user_registration', 1),
        array(
            'Pro registraci vyÂ¾adovat potvrzenÃ­ admina', 'reg_requires_valid_email', 1),
        array(
            'Povolit pro dva uÂ¾ivatele stejnÃ½ email', 'allow_duplicate_emails_addr', 1),
        array(
            'MajÃ­ mÃ­t uÂ¾ivatelÃ© vlastnÃ­ galerii?', 'allow_private_albums', 1),
array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',

        'Custom fields for image description (Nechte prÃ¡znÃ© a nezobrazÃ­ se)',
        array(
            'JmÃ©no poloÂ¾ky 1', 'user_field1_name', 0),
        array(
            'JmÃ©no poloÂ¾ky 2', 'user_field2_name', 0),
        array(
            'JmÃ©no poloÂ¾ky 3', 'user_field3_name', 0),
        array(
            'JmÃ©no poloÂ¾ky 4', 'user_field4_name', 0),
        // 'Pictures and thumbnails advanced settings',
        'ObrÃ¡zky a nÃ¡hledy rozÂ¹Ã­Ã¸enÃ© nastavenÃ­',
        array(
            'Zobrazit ikonu zamknutÃ© galerie nepÃ¸ihlÃ¡Â¹enÃ©mu uÂ¾ivateli.', 'show_private', 1),
        array(
            'Znaky zakÃ¡zanÃ© v nÃ¡zvech souborÃ¹', 'forbiden_fname_char', 0),
        array(
            'PovolenÃ© koncovky uploadovanÃ½ch souborÃ¹', 'allowed_file_extensions', 0),
        array(
            'Metoda zmÃ¬ny velikosti obrÃ¡zkÃ¹', 'thumb_method', 2),
        array(
            'Cesta k ImageMagicu (pÃ¸Ã­klad /usr/bin/X11/)', 'impath', 0),
        array(
            'PovolenÃ© typy obrÃ¡zkÃ¹ (pouze pro ImageMagic)', 'allowed_img_types', 0),
        array(
            'Parametry pro ImageMagic', 'im_options', 0),
        array(
            'ÃˆÃ­st EXIF data ze souborÃ¹ JPEG', 'read_exif_data', 1),
        array(
            'Read IPTC data in JPEG files', 'read_iptc_data', 1), // new in cpg1.2.0nuke
        array(
            'AdresÃ¡Ã¸ pro galerie <b>*</b>', 'fullpath', 0),
        array(
            'AdresÃ¡Ã¸ pro galerie uÂ¾ivatelÃ¹ <b>*</b>', 'userpics', 0),
        array(
            'Prefix pro stÃ¸ednÃ¬ velkÃ© obrÃ¡zky <b>*</b>', 'normal_pfx', 0),
        array(
            'Prefix pro nÃ¡hledy <b>*</b>', 'thumb_pfx', 0),
        array(
            'ZÃ¡kladnÃ­ mÃ³d pro adresÃ¡Ã¸e', 'default_dir_mode', 0),
        array(
            'ZÃ¡kladnÃ­ mÃ³d pro obrÃ¡zky', 'default_file_mode', 0),
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
        'Cookies &amp; KÃ³dovÃ¡ strÃ¡ka',
        array(
            'JmÃ©no cookies uÂ¾Ã­vanÃ© programem (expertnÃ­ volba)', 'cookie_name', 0),
        array(
            'Cesta pro cookies uÂ¾Ã­vanÃ¡ programem (expertnÃ­ volba)', 'cookie_path', 0),
        array(
            'KÃ³dovÃ¡ strÃ¡nka', 'charset', 4), 
        // 'Miscellaneous settings',
        'DalÂ¹Ã­ nastavenÃ­',
        array(
            'Zapnour debug mÃ³d (jen pro testovÃ¡nÃ­)', 'debug_mode', 1),
        array(
'Enable advanced debug mode', 'advanced_debug_mode', 1), // new in cpg1.2.0nuke
array(
'Show Coppermine Update Alert to Admin', 'showupdate', 1), // new 1.2.2
        '<br /><div align="center">(*) PoloÂ¾ky oznaÃ¨enÃ© * se NESMÃ zmÃ¬nit pokud jiÂ¾ mÃ¡te ve vaÂ¹Ã­ Galerii nahranÃ© obrÃ¡zky</div><br />'
        );
// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) $lang_db_input_php = array('empty_name_or_com' => 'VloÂ¾te jmÃ©no a VÃ¡Â¹ komentÃ¡Ã¸',
        'com_added' => 'VÃ¡Â¹ komentÃ¡Ã¸ byl pÃ¸idÃ¡n',
        'alb_need_title' => 'ProsÃ­m, dejte galerii nadpis !',
        'no_udp_needed' => 'Aktualizace nenÃ­ tÃ¸eba.',
        'alb_updated' => 'Galerie byla pÃ¸idÃ¡na',
        'unknown_album' => 'VybranÃ© album neexistuje nebo nemÃ¡te prÃ¡va pro upload do tohoto alba',
        'no_pic_uploaded' => 'ObrÃ¡zek nebyl uploadovÃ¡n!<br /><br />zkontrolujte zda server podporuje upload souborÃ¹, Ã¨i zda jste opravdu zadal(a) obrÃ¡zek k uploadu...',
        'err_mkdir' => '  ERROR: Chyba pÃ¸i vytvÃ¡Ã¸enÃ­ adresÃ¡Ã¸e (nebyl vytvoÃ¸en) %s !',
        'dest_dir_ro' => 'Do cÃ­lovÃ©ho adresÃ¡Ã¸e %s nemÃ¹Â¾e skript zapisovat (zkontrolujte prÃ¡va) !',
        'err_move' => 'Nelze pÃ¸esunout %s do %s !',
        'err_fsize_too_large' => 'RozmÃ¬ry obrÃ¡zku, kterÃ½ se snaÂ¾Ã­te uploadovat, jsou pÃ¸Ã­liÂ¹ velkÃ© (max. velikost je %s x %s) !',
        'err_imgsize_too_large' => 'Velikost souboru, kterÃ½ se snaÂ¾Ã­te uploadovat, je pÃ¸Ã­liÂ¹ velkÃ¡ (max. velikost je %s KB) !',
        'err_invalid_img' => 'Soubor kterÃ½ jste nahrÃ¡l(a) na server nenÃ­ validnÃ­m obrÃ¡zkem !',
        'allowed_img_types' => 'MÃ¹Â¾ete uploadovat pouze obrÃ¡zky %s .',
        'err_insert_pic' => 'ObrÃ¡zek \'%s\' nelze vloÂ¾it do galerie ',
        'upload_success' => 'VÃ¡Â¹ obrÃ¡zek byl nahrÃ¡n na server bez problÃ©mÃ¹<br /><br />Bude viditelnÃ½ po schvÃ¡lenÃ­ adminem.',
        'info' => 'Informace',
        'com_added' => 'KomentÃ¡Ã¸u pÃ¸idÃ¡no',
        'alb_updated' => 'Galerie aktualizovÃ¡na',
        'err_comment_empty' => 'VÃ¡Â¹ komentÃ¡Ã¸ je prÃ¡zdnÃ½ !',
        'err_invalid_fext' => 'Pouze soubory s nÃ¡sledujÃ­cÃ­mi koncovkami jsou podporovanÃ© : <br /><br />%s.',
        'no_flood' => 'Jste autor poslednÃ­ho komentÃ¡Ã¸e k tomuto obrÃ¡zku<br /><br />Pokud ho chcete zmÃ¬nit pouÂ¾ijte volbu upravit ',
        'redirect_msg' => 'PrÃ¡vÃ¬ jste pÃ¸esmÃ¬rovÃ¡vÃ¡n(a).<br /><br /><br />KliknÃ¬te na \'POKRAÃˆOVAT\' pokud se strÃ¡nka nepÃ¸esmÃ¬ruje sama',
        'upl_success' => 'VÃ¡Â¹ obrÃ¡zek byl v poÃ¸Ã¡dku pÃ¸idÃ¡n',
        );
// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) $lang_delete_php = array('caption' => 'Legenda(popisek)',
        'fs_pic' => 'pÃ¹vodnÃ­ velikost obrÃ¡zku',
        'del_success' => 'bezchybnÃ¬ smazÃ¡no',
        'ns_pic' => 'normÃ¡lnÃ­ velikost obrÃ¡zku',
        'err_del' => 'nelze smazat',
        'thumb_pic' => 'nÃ¡hled',
        'comment' => 'komentÃ¡Ã¸',
        'im_in_alb' => 'patÃ¸Ã­ do galerie',
        'alb_del_success' => 'Galerie \'%s\' smazÃ¡na',
        'alb_mgr' => 'SprÃ¡vce galeriÃ­',
        'err_invalid_data' => 'ObdrÂ¾ena chybnÃ¡ data \'%s\'',
        'create_alb' => 'VytvÃ¡Ã¸Ã­m galerii \'%s\'',
        'update_alb' => 'Aktualizuji galerii \'%s\' s nadpisem \'%s\' a seznamem \'%s\'',
        'del_pic' => 'Smazat obrÃ¡zek',
        'del_alb' => 'Smazat galerii',
        'del_user' => 'Smazat uÂ¾ivatele',
        'err_unknown_user' => 'VybranÃ½ uÂ¾ivatel neexistuje !',
        'comment_deleted' => 'KomentÃ¡Ã¸ bezchybnÃ¬ smazÃ¡n ! ',
        );
// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //
// Void
// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')) {
    $lang_display_image_php = array('confirm_del' => 'Jste si jist, Â¾e chcete smazat tento obrÃ¡zek ? \\nPÃ¸iloÂ¾enÃ© komentÃ¡Ã¸e budou straceny.',
        'del_pic' => 'SMAZAT TENTO OBRÃZEK',
        'size' => '%s x %s pixelelÃ¹',
        'views' => '%s krÃ¡t',
        'slideshow' => 'Slideshow',
        'stop_slideshow' => 'ZASTAVIT SLIDESHOW',
        'view_fs' => 'kliknÃ¬te pro zobrazenÃ­ pÃ¹vodnÃ­ho obrÃ¡zku',
        'edit_pic' => 'EDIT PICTURE INFO', // new in cpg1.2.0nuke
        );

    $lang_picinfo = array('title' => 'Informace o obrÃ¡zku',
        'Filename' => 'JmÃ©no souboru',
        'Album name' => 'JmÃ©no galerie',
        'Rating' => 'HodnocenÃ­ (%s hlas(Ã¹))',
        'Keywords' => 'KlÃ­Ã¨ovÃ¡ slova',
        'File Size' => 'Velikost souboru',
        'Dimensions' => 'RozmÃ¬ry',
        'Displayed' => 'Zobrazeno',
        'Camera' => 'FotoaparÃ¡t',
        'Date taken' => 'Datum poÃ¸Ã­zenÃ­ snÃ­mku',
        'Aperture' => 'Clona',
        'Exposure time' => 'ExpoziÃ¨nÃ­ Ã¨as',
        'Focal length' => 'OhniskovÃ¡ vzdÃ¡lenost',
        'Comment' => 'KomentÃ¡Ã¸e',
        'addFav' => 'PÃ¸idat k oblÃ­benÃ½m',
        'addFavPhrase' => 'OblÃ­benÃ©',
        'remFav' => 'Odstranit z oblÃ­benÃ½ch',
        'iptcTitle' => 'IPTC Title', // new in cpg1.2.0nuke
        'iptcCopyright' => 'IPTC Copyright', // new in cpg1.2.0nuke
        'iptcKeywords' => 'IPTC Keywords', // new in cpg1.2.0nuke
        'iptcCategory' => 'IPTC Category', // new in cpg1.2.0nuke
        'iptcSubCategories' => 'IPTC Sub Categories', // new in cpg1.2.0nuke
        'bookmark_page' => 'Bookmark Image', // new in cpg1.2.0nuke
        );

    $lang_display_comments = array('OK' => 'OK',
        'edit_title' => 'Upravit tento komentÃ¡Ã¸',
        'confirm_delete' => 'Jste si jist(a), Â¾e chcete smazat tento komentÃ¡Ã¸ ?',
        'add_your_comment' => 'PÃ¸idat komentÃ¡Ã¸',
        'name' => 'JmÃ©no',
        'comment' => 'KomentÃ¡Ã¸',
        'your_name' => 'Anonym',
        );

    $lang_fullsize_popup = array('click_to_close' => 'KliknutÃ­m na obrÃ¡zek zavÃ¸ete okno',
        );
} 
// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //
if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php = array('title' => 'Poslat pohlednici',
        'invalid_email' => '<b>VarovÃ¡nÃ­</b> : neplatnÃ¡ emailovÃ¡ adresa !',
        'ecard_title' => 'Pohlednice ze serveru %s pro vÃ¡s/tebe',
        'view_ecard' => 'Pokud se pohlednice nezobrazila klikni na link',
        'view_more_pics' => 'Klikni pro dalÂ¹Ã­ obrÃ¡zky !',        ✀猀攀渀搀开猀甀挀挀攀猀猀✀ 㴀㸀 ✀嘀愀숀뤀攀 瀀漀栀氀攀搀渀椀挀攀 戀礀氀愀 漀搀攀猀氀쌀ꄀ渀愀✀Ⰰഀ਀        ✀猀攀渀搀开昀愀椀氀攀搀✀ 㴀㸀 ✀伀洀氀漀甀瘀쌀ꄀ洀攀 猀攀Ⰰ 愀氀攀 猀攀爀瘀攀爀 渀攀戀礀氀 猀挀栀漀瀀攀渀 漀搀攀猀氀愀琀 嘀愀숀뤀쌀관 瀀漀栀氀攀搀渀椀挀椀 稀欀甀猀琀攀ഀ਀     琀漀 稀渀漀瘀甀 稀愀 挀栀瘀쌀관氀椀⸀⸀⸀✀Ⰰഀ਀        ✀昀爀漀洀✀ 㴀㸀 ✀伀搀✀Ⰰഀ਀        ✀礀漀甀爀开渀愀洀攀✀ 㴀㸀 ✀嘀愀숀뤀攀 樀洀쌀꤀渀漀✀Ⰰഀ਀        ✀礀漀甀爀开攀洀愀椀氀✀ 㴀㸀 ✀嘀쌀ꄀ숀뤀 攀洀愀椀氀✀Ⰰഀ਀        ✀琀漀✀ 㴀㸀 ✀䬀漀洀甀✀Ⰰഀ਀        ✀爀挀瀀琀开渀愀洀攀✀ 㴀㸀 ✀䨀洀쌀꤀渀漀 瀀쌀렀쌀관樀攀洀挀攀✀Ⰰഀ਀        ✀爀挀瀀琀开攀洀愀椀氀✀ 㴀㸀 ✀䐀漀爀甀쌀ꠀ椀琀 渀愀 攀洀愀椀氀✀Ⰰഀ਀        ✀最爀攀攀琀椀渀最猀✀ 㴀㸀 ✀倀漀稀搀爀愀瘀⼀漀猀氀漀瘀攀渀쌀관✀Ⰰഀ਀        ✀洀攀猀猀愀最攀✀ 㴀㸀 ✀娀瀀爀쌀ꄀ瘀愀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 攀搀椀琀瀀椀挀猀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀䔀䐀䤀吀倀䤀䌀匀开倀䠀倀✀⤀⤀ ␀氀愀渀最开攀搀椀琀瀀椀挀猀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀瀀椀挀开椀渀昀漀✀ 㴀㸀 ✀䤀渀昀漀☀渀戀猀瀀㬀漀 漀戀爀쌀ꄀ稀欀甀✀Ⰰഀ਀        ✀愀氀戀甀洀✀ 㴀㸀 ✀䜀愀氀攀爀椀攀✀Ⰰഀ਀        ✀琀椀琀氀攀✀ 㴀㸀 ✀一愀搀瀀椀猀✀Ⰰഀ਀        ✀搀攀猀挀✀ 㴀㸀 ✀倀漀瀀椀猀✀Ⰰഀ਀        ✀欀攀礀眀漀爀搀猀✀ 㴀㸀 ✀䬀氀쌀관쌀ꠀ漀瘀쌀ꄀ 猀氀漀瘀愀✀Ⰰഀ਀        ✀瀀椀挀开椀渀昀漀开猀琀爀✀ 㴀㸀 ✀─猀砀─猀 ⴀ ─猀䬀䈀 ⴀ ─猀 稀漀戀爀愀稀攀渀쌀관 ⴀ ─猀 栀氀愀猀⠀쌀뤀⤀✀Ⰰഀ਀        ✀愀瀀瀀爀漀瘀攀✀ 㴀㸀 ✀匀挀栀瘀쌀ꄀ氀椀琀 漀戀爀쌀ꄀ稀攀欀✀Ⰰഀ਀        ✀瀀漀猀琀瀀漀渀攀开愀瀀瀀✀ 㴀㸀 ✀伀搀氀漀숀븀椀琀 猀挀栀瘀쌀ꄀ氀攀渀쌀관✀Ⰰഀ਀        ✀搀攀氀开瀀椀挀✀ 㴀㸀 ✀匀洀愀稀愀琀 漀戀爀쌀ꄀ稀攀欀✀Ⰰഀ਀        ✀爀攀猀攀琀开瘀椀攀眀开挀漀甀渀琀✀ 㴀㸀 ✀嘀礀渀甀氀漀瘀愀琀 瀀漀쌀ꠀ쌀관琀愀搀氀漀 稀漀戀爀愀稀攀渀쌀관✀Ⰰഀ਀        ✀爀攀猀攀琀开瘀漀琀攀猀✀ 㴀㸀 ✀嘀礀渀甀氀漀瘀愀琀 栀氀愀猀礀✀Ⰰഀ਀        ✀搀攀氀开挀漀洀洀✀ 㴀㸀 ✀匀洀愀稀愀琀 欀漀洀攀渀琀쌀ꄀ쌀렀攀✀Ⰰഀ਀        ✀甀瀀氀开愀瀀瀀爀漀瘀愀氀✀ 㴀㸀 ✀倀漀琀瘀爀稀攀渀쌀관 甀瀀氀漀愀搀甀✀Ⰰഀ਀        ✀攀搀椀琀开瀀椀挀猀✀ 㴀㸀 ✀唀瀀爀愀瘀椀琀 漀戀爀쌀ꄀ稀欀礀✀Ⰰഀ਀        ✀猀攀攀开渀攀砀琀✀ 㴀㸀 ✀娀漀戀爀愀稀椀琀 搀愀氀숀뤀쌀관 漀戀爀쌀ꄀ稀欀礀✀Ⰰഀ਀        ✀猀攀攀开瀀爀攀瘀✀ 㴀㸀 ✀娀漀戀爀愀稀椀琀 瀀쌀렀攀搀挀栀漀稀쌀관 漀戀爀쌀ꄀ稀欀礀✀Ⰰഀ਀        ✀渀开瀀椀挀✀ 㴀㸀 ✀─猀 漀戀爀쌀ꄀ稀欀쌀뤀✀Ⰰഀ਀        ✀渀开漀昀开瀀椀挀开琀漀开搀椀猀瀀✀ 㴀㸀 ✀倀漀쌀ꠀ攀琀 漀戀爀쌀ꄀ稀欀甀 欀 稀漀戀爀愀稀攀渀쌀관✀Ⰰഀ਀        ✀愀瀀瀀氀礀✀ 㴀㸀 ✀唀氀漀숀븀椀琀 稀洀쌀가渀礀✀ഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 最爀漀甀瀀洀最爀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀䜀刀伀唀倀䴀䜀刀开倀䠀倀✀⤀⤀ ␀氀愀渀最开最爀漀甀瀀洀最爀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀最爀漀甀瀀开渀愀洀攀✀ 㴀㸀 ✀䨀洀쌀꤀渀漀 猀欀甀瀀椀渀礀✀Ⰰഀ਀        ✀搀椀猀欀开焀甀漀琀愀✀ 㴀㸀 ✀䐀椀猀欀漀瘀쌀ꄀ 欀瘀쌀대琀愀✀Ⰰഀ਀        ✀挀愀渀开爀愀琀攀✀ 㴀㸀 ✀䴀漀栀漀甀 栀漀搀渀漀琀椀琀 漀戀爀쌀ꄀ稀欀礀✀Ⰰഀ਀        ✀挀愀渀开猀攀渀搀开攀挀愀爀搀猀✀ 㴀㸀 ✀洀漀栀漀甀 瀀漀猀쌀관氀愀琀 瀀漀栀氀攀搀渀椀挀攀✀Ⰰഀ਀        ✀挀愀渀开瀀漀猀琀开挀漀洀✀ 㴀㸀 ✀䴀漀栀漀甀 瀀漀猀쌀관氀愀琀 欀漀洀攀渀琀쌀ꄀ쌀렀攀✀Ⰰഀ਀        ✀挀愀渀开甀瀀氀漀愀搀✀ 㴀㸀 ✀䴀漀栀漀甀 渀愀栀爀쌀ꄀ瘀愀琀 漀戀爀쌀ꄀ稀欀礀✀Ⰰഀ਀        ✀挀愀渀开栀愀瘀攀开最愀氀氀攀爀礀✀ 㴀㸀 ✀䴀漀栀漀甀 洀쌀관琀 漀猀漀戀渀쌀관 最愀氀攀爀椀椀✀Ⰰഀ਀        ✀愀瀀瀀氀礀✀ 㴀㸀 ✀唀氀漀숀븀椀琀 稀洀쌀가渀礀✀Ⰰഀ਀        ✀挀爀攀愀琀攀开渀攀眀开最爀漀甀瀀✀ 㴀㸀 ✀嘀礀琀瘀漀쌀렀椀琀 渀漀瘀漀甀 猀欀甀瀀椀渀甀✀Ⰰഀ਀        ✀搀攀氀开最爀漀甀瀀猀✀ 㴀㸀 ✀匀洀愀稀愀琀 瘀礀戀爀愀渀쌀꤀ 猀欀甀瀀椀渀礀✀Ⰰഀ਀        ✀挀漀渀昀椀爀洀开搀攀氀✀ 㴀㸀 ✀倀漀欀甀搀 猀洀愀숀븀攀琀攀 琀甀琀漀 猀欀甀瀀椀渀甀 瘀숀뤀椀挀栀渀椀 甀숀븀椀瘀愀琀攀氀쌀꤀Ⰰ 瀀愀琀쌀렀쌀관挀쌀관 搀漀 琀쌀꤀琀漀 猀欀甀瀀椀渀礀 戀甀搀漀甀 瀀쌀렀攀猀甀渀甀琀椀 搀漀 猀欀甀瀀椀渀礀 尀✀刀攀最椀猀琀攀爀攀搀尀✀ ℀尀渀尀渀倀쌀렀攀樀攀琀攀 猀椀 瀀漀欀爀愀쌀ꠀ漀瘀愀琀 㼀✀Ⰰഀ਀        ✀琀椀琀氀攀✀ 㴀㸀 ✀匀瀀爀愀瘀漀瘀愀琀 甀숀븀椀瘀愀琀攀氀猀欀쌀꤀ 猀欀甀瀀椀渀礀✀Ⰰഀ਀        ✀愀瀀瀀爀漀瘀愀氀开㄀✀ 㴀㸀 ✀倀漀琀瘀爀稀攀渀쌀관 瘀攀쌀렀攀樀渀쌀꤀栀漀⸀ 唀瀀氀⸀ ⠀㄀⤀✀Ⰰഀ਀        ✀愀瀀瀀爀漀瘀愀氀开㈀✀ 㴀㸀 ✀倀漀琀瘀爀稀攀渀쌀관 猀漀甀欀爀漀洀쌀꤀栀漀⸀ 唀瀀氀⸀ ⠀㈀⤀✀Ⰰഀ਀        ✀渀漀琀攀㄀✀ 㴀㸀 ✀㰀戀㸀⠀㄀⤀㰀⼀戀㸀 唀瀀氀漀愀搀 搀漀 瘀攀쌀렀攀樀渀쌀봀挀栀 最愀氀攀爀椀쌀관 瘀礀숀븀愀搀甀樀攀 瀀漀琀瘀爀稀攀渀쌀관 愀搀洀椀渀攀洀✀Ⰰഀ਀        ✀渀漀琀攀㈀✀ 㴀㸀 ✀㰀戀㸀⠀㈀⤀㰀⼀戀㸀 唀瀀氀漀愀搀 搀漀 最愀氀攀爀椀攀 瀀愀琀쌀렀쌀관挀쌀관 甀숀븀椀瘀愀琀攀氀椀 瘀礀숀븀愀搀甀樀攀 瀀漀琀瘀爀稀攀渀쌀관 愀搀洀椀渀攀洀✀Ⰰഀ਀        ✀渀漀琀攀猀✀ 㴀㸀 ✀倀漀稀渀쌀ꄀ洀欀礀✀ഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 椀渀搀攀砀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀䤀一䐀䔀堀开倀䠀倀✀⤀⤀ 笀ഀ਀    ␀氀愀渀最开椀渀搀攀砀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀眀攀氀挀漀洀攀✀ 㴀㸀 ✀圀攀氀挀漀洀攀 ℀✀ഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开愀氀戀甀洀开愀搀洀椀渀开洀攀渀甀 㴀 愀爀爀愀礀⠀✀挀漀渀昀椀爀洀开搀攀氀攀琀攀✀ 㴀㸀 ✀䨀猀琀攀 猀椀 樀椀猀琀⠀愀⤀Ⰰ 숀븀攀 挀栀挀攀琀攀 猀洀愀稀愀琀 琀甀琀漀 最愀氀攀爀椀椀㼀 尀尀渀嘀숀뤀攀挀栀渀礀 漀戀爀쌀ꄀ稀欀礀 愀 欀漀洀攀渀琀쌀ꄀ쌀렀攀 瀀쌀뤀樀搀漀甀 搀漀 瀀攀欀氀愀 琀愀欀礀⸀ 倀쌀렀攀樀攀琀攀 猀椀 瀀漀欀爀愀쌀ꠀ漀瘀愀琀⸀✀Ⰰഀ਀        ✀搀攀氀攀琀攀✀ 㴀㸀 ✀匀䴀䄀娀䄀吀✀Ⰰഀ਀        ✀洀漀搀椀昀礀✀ 㴀㸀 ✀嘀䰀䄀匀吀一伀匀吀䤀✀Ⰰഀ਀        ✀攀搀椀琀开瀀椀挀猀✀ 㴀㸀 ✀唀倀刀䄀嘀䤀吀 伀䈀刀⸀✀Ⰰഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开氀椀猀琀开挀愀琀攀最漀爀椀攀猀 㴀 愀爀爀愀礀⠀✀栀漀洀攀✀ 㴀㸀 ✀䐀漀洀쌀뤀✀Ⰰഀ਀        ✀猀琀愀琀㄀✀ 㴀㸀 ✀㰀戀㸀嬀瀀椀挀琀甀爀攀猀崀㰀⼀戀㸀 漀戀爀쌀ꄀ稀欀礀 瘀 㰀戀㸀嬀愀氀戀甀洀猀崀㰀⼀戀㸀 最氀愀氀攀爀椀椀 㰀戀㸀嬀挀愀琀崀㰀⼀戀㸀瘀 欀愀琀攀最漀爀椀椀 猀 㰀戀㸀嬀挀漀洀洀攀渀琀猀崀㰀⼀戀㸀 欀漀洀攀渀琀쌀ꄀ쌀렀椀 稀漀戀爀愀稀攀渀漀 㰀戀㸀嬀瘀椀攀眀猀崀㰀⼀戀㸀 欀爀쌀ꄀ琀✀Ⰰഀ਀        ✀猀琀愀琀㈀✀ 㴀㸀 ✀㰀戀㸀嬀瀀椀挀琀甀爀攀猀崀㰀⼀戀㸀 漀戀爀쌀ꄀ稀欀礀 瘀 㰀戀㸀嬀愀氀戀甀洀猀崀㰀⼀戀㸀 最愀氀攀爀椀椀 稀漀戀爀愀稀攀渀漀 㰀戀㸀嬀瘀椀攀眀猀崀㰀⼀戀㸀 欀爀쌀ꄀ琀✀Ⰰഀ਀        ✀砀砀开猀开最愀氀氀攀爀礀✀ 㴀㸀 ✀─猀尀✀ 䜀愀氀攀爀椀攀✀Ⰰഀ਀        ✀猀琀愀琀㌀✀ 㴀㸀 ✀㰀戀㸀嬀瀀椀挀琀甀爀攀猀崀㰀⼀戀㸀 漀戀爀쌀ꄀ稀欀쌀뤀 瘀 㰀戀㸀嬀愀氀戀甀洀猀崀㰀⼀戀㸀 最愀氀猀攀爀椀椀 猀 㰀戀㸀嬀挀漀洀洀攀渀琀猀崀㰀⼀戀㸀 欀漀洀攀渀琀쌀ꄀ쌀렀椀 稀漀戀爀愀稀攀渀漀 㰀戀㸀嬀瘀椀攀眀猀崀㰀⼀戀㸀 欀爀쌀ꄀ琀✀ഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开氀椀猀琀开甀猀攀爀猀 㴀 愀爀爀愀礀⠀✀甀猀攀爀开氀椀猀琀✀ 㴀㸀 ✀匀攀稀渀愀洀 甀숀븀椀瘀愀琀攀氀쌀뤀✀Ⰰഀ਀        ✀渀漀开甀猀攀爀开最愀氀✀ 㴀㸀 ✀一攀樀猀漀甀 숀븀쌀ꄀ搀渀쌀꤀ 甀숀븀椀瘀愀琀攀氀猀欀쌀꤀ 愀氀攀爀椀攀✀Ⰰഀ਀        ✀渀开愀氀戀甀洀猀✀ 㴀㸀 ✀─猀 最愀氀攀爀椀쌀관✀Ⰰഀ਀        ✀渀开瀀椀挀猀✀ 㴀㸀 ✀─猀 漀戀爀쌀ꄀ稀欀쌀뤀✀ഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开氀椀猀琀开愀氀戀甀洀猀 㴀 愀爀爀愀礀⠀✀渀开瀀椀挀琀甀爀攀猀✀ 㴀㸀 ✀─猀 漀戀爀쌀ꄀ稀欀쌀뤀✀Ⰰഀ਀        ✀氀愀猀琀开愀搀搀攀搀✀ 㴀㸀 ✀Ⰰ 瀀漀猀氀攀搀渀쌀관 瀀쌀렀椀搀쌀ꄀ渀 ─猀✀ഀ਀        ⤀㬀ഀ਀紀 ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 氀漀最椀渀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 一唀䰀䰀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 氀漀最漀甀琀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 一唀䰀䰀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 洀漀搀椀昀礀愀氀戀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀䴀伀䐀䤀䘀夀䄀䰀䈀开倀䠀倀✀⤀⤀ ␀氀愀渀最开洀漀搀椀昀礀愀氀戀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀甀瀀搀开愀氀戀开渀✀ 㴀㸀 ✀䄀欀琀甀愀氀椀稀漀瘀愀琀 愀氀戀甀洀 ─猀✀Ⰰഀ਀        ✀最攀渀攀爀愀氀开猀攀琀琀椀渀最猀✀ 㴀㸀 ✀娀쌀ꄀ欀氀愀搀渀쌀관 渀愀猀琀愀瘀攀渀쌀관✀Ⰰഀ਀        ✀愀氀戀开琀椀琀氀攀✀ 㴀㸀 ✀一愀搀瀀椀猀 最愀氀攀爀椀攀✀Ⰰഀ਀        ✀愀氀戀开挀愀琀✀ 㴀㸀 ✀䬀愀琀攀最漀爀椀攀 最愀氀攀爀椀攀✀Ⰰഀ਀        ✀愀氀戀开搀攀猀挀✀ 㴀㸀 ✀倀漀瀀椀猀 最愀氀攀爀椀攀✀Ⰰഀ਀        ✀愀氀戀开琀栀甀洀戀✀ 㴀㸀 ✀一쌀ꄀ栀氀攀搀 爀攀瀀爀攀稀攀渀琀甀樀쌀관挀쌀관 愀氀戀甀洀✀Ⰰഀ਀        ✀愀氀戀开瀀攀爀洀✀ 㴀㸀 ✀倀쌀렀쌀관猀琀甀瀀漀瘀쌀ꄀ 瀀爀쌀ꄀ瘀愀 瀀爀漀 琀甀琀漀 最愀氀攀爀椀椀✀Ⰰഀ਀        ✀挀愀渀开瘀椀攀眀✀ 㴀㸀 ✀䄀氀戀甀洀 洀쌀뤀숀븀漀甀 瀀爀漀栀氀쌀관숀븀攀琀✀Ⰰഀ਀        ✀挀愀渀开甀瀀氀漀愀搀✀ 㴀㸀 ✀一쌀ꄀ瘀숀뤀琀쌀가瘀渀쌀관挀椀 猀洀쌀가樀쌀관 瀀쌀렀椀搀쌀ꄀ瘀愀琀 漀戀爀쌀ꄀ稀欀礀✀Ⰰഀ਀        ✀挀愀渀开瀀漀猀琀开挀漀洀洀攀渀琀猀✀ 㴀㸀 ✀倀漀瘀漀氀椀琀 欀漀洀攀渀琀쌀ꄀ쌀렀攀✀Ⰰഀ਀        ✀挀愀渀开爀愀琀攀✀ 㴀㸀 ✀一쌀ꄀ瘀숀뤀琀쌀가瘀渀쌀관挀椀 洀漀栀漀甀 栀氀愀猀漀瘀愀琀✀Ⰰഀ਀        ✀甀猀攀爀开最愀氀✀ 㴀㸀 ✀唀猀攀爀 䜀愀氀氀攀爀礀✀Ⰰഀ਀        ✀渀漀开挀愀琀✀ 㴀㸀 ✀⨀ 一攀渀쌀관 欀愀琀攀最漀爀椀攀 ⨀✀Ⰰഀ਀        ✀愀氀戀开攀洀瀀琀礀✀ 㴀㸀 ✀䜀愀氀攀爀椀攀 樀攀 瀀爀쌀ꄀ稀搀渀쌀ꄀ✀Ⰰഀ਀        ✀氀愀猀琀开甀瀀氀漀愀搀攀搀✀ 㴀㸀 ✀一攀樀渀漀瘀쌀가樀숀뤀쌀관 漀戀爀쌀ꄀ稀攀欀✀Ⰰഀ਀        ✀瀀甀戀氀椀挀开愀氀戀✀ 㴀㸀 ✀欀搀漀欀漀氀椀瘀 ⠀瘀攀쌀렀攀樀渀쌀ꄀ 最愀氀攀爀椀攀⤀✀Ⰰഀ਀        ✀洀攀开漀渀氀礀✀ 㴀㸀 ✀倀漀甀稀攀 樀쌀ꄀ✀Ⰰഀ਀        ✀漀眀渀攀爀开漀渀氀礀✀ 㴀㸀 ✀倀漀甀稀攀 瘀氀愀猀琀渀쌀관欀 ⠀─猀⤀✀Ⰰഀ਀        ✀最爀漀甀瀀瀀开漀渀氀礀✀ 㴀㸀 ✀쌀였氂攀渀漀瘀쌀꤀ 猀欀甀瀀椀渀礀 尀✀─猀尀✀✀Ⰰഀ਀        ✀攀爀爀开渀漀开愀氀戀开琀漀开洀漀搀椀昀礀✀ 㴀㸀 ✀䄀氀戀甀洀 渀攀氀稀攀 洀漀搀椀昀椀欀漀瘀愀琀 瘀 搀愀琀愀戀쌀ꄀ稀椀⸀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀✀ 㴀㸀 ✀䄀欀琀甀愀氀椀稀漀瘀愀琀 愀氀戀甀洀✀ഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 爀愀琀攀瀀椀挀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀刀䄀吀䔀倀䤀䌀开倀䠀倀✀⤀⤀ ␀氀愀渀最开爀愀琀攀开瀀椀挀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀愀氀爀攀愀搀礀开爀愀琀攀搀✀ 㴀㸀 ✀吀攀渀琀漀 漀戀쌀ꄀ稀攀欀 樀猀琀攀 樀椀숀븀 栀漀搀渀漀琀椀氀⠀愀⤀✀Ⰰഀ਀        ✀爀愀琀攀开漀欀✀ 㴀㸀 ✀嘀쌀ꄀ猀 栀氀愀猀 戀礀氀 瀀쌀렀椀樀愀琀⸀ 䐀쌀가欀甀樀攀洀攀⸀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 爀攀最椀猀琀攀爀⸀瀀栀瀀 ☀ 瀀爀漀昀椀氀攀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀刀䔀䜀䤀匀吀䔀刀开倀䠀倀✀⤀ 簀簀 搀攀昀椀渀攀搀⠀✀倀刀伀䘀䤀䰀䔀开倀䠀倀✀⤀⤀ 笀ഀ਀    ␀氀愀渀最开爀攀最椀猀琀攀爀开搀椀猀挀氀愀洀攀爀 㴀 㰀㰀㰀䔀伀吀ഀ਀䄀搀洀椀渀椀猀琀爀쌀ꄀ琀漀쌀렀椀 猀攀爀瘀攀爀甀 笀匀䤀吀䔀开一䄀䴀䔀紀Ⰰ 瀀漀琀愀숀븀洀漀 琀쌀꤀琀漀 最愀氀攀爀椀攀 猀椀 瘀礀栀爀愀稀甀樀쌀관 瀀爀쌀ꄀ瘀漀 稀쌀ꄀ猀愀栀甀 搀漀 漀戀猀愀栀甀 最愀氀攀爀椀攀 渀愀瀀쌀렀⸀ 欀漀洀攀渀琀쌀ꄀ쌀렀攀Ⰰ 洀愀稀쌀ꄀ渀쌀관 漀戀爀쌀ꄀ稀欀쌀뤀 瀀쌀렀쌀관瀀愀搀渀쌀가 쌀먀瀀爀愀瘀愀 ⠀瀀漀欀甀搀 瀀漀爀甀숀뤀甀樀쌀관 瀀爀愀瘀椀搀氀愀 最愀氀攀爀椀攀 渀攀戀漀 搀漀戀爀쌀꤀ 洀爀愀瘀礀⤀⸀ഀ਀倀漀欀甀搀 戀甀搀漀甀 漀戀爀쌀ꄀ稀欀礀 渀愀栀爀愀渀쌀꤀ 甀숀븀椀瘀攀琀攀氀攀洀 瀀漀爀甀숀뤀漀瘀愀琀 稀쌀ꄀ欀漀渀⠀礀⤀ 戀甀搀漀甀 椀栀渀攀搀 瀀漀 稀樀椀숀뤀琀쌀가渀쌀관 樀攀樀椀挀栀 甀洀쌀관猀琀쌀가渀쌀관 渀愀 猀攀爀瘀攀爀甀 猀洀愀稀쌀ꄀ渀礀⸀ 䄀搀洀椀渀椀猀琀爀쌀ꄀ琀漀쌀렀椀⼀瀀爀漀瘀漀稀漀瘀愀琀攀氀쌀꤀ 琀쌀꤀琀漀 最愀氀攀爀椀攀 猀椀 搀椀猀琀愀渀挀甀樀쌀관 漀搀ഀ਀瀀쌀렀쌀관瀀愀搀渀쌀꤀栀漀 稀쌀ꄀ瘀愀搀渀쌀꤀栀漀 漀戀猀愀栀甀 渀愀栀爀愀渀쌀꤀栀漀 渀愀 猀攀爀瘀攀爀 甀숀븀椀瘀愀琀攀氀椀⸀ 嘀氀愀猀琀渀쌀관欀攀洀 搀愀琀 瘀 最愀氀攀爀椀椀 樀猀漀甀 樀攀樀椀挀栀 愀甀琀漀쌀렀椀⸀ 䄀搀洀椀渀椀猀琀爀쌀ꄀ琀漀쌀렀椀 瀀쌀렀攀搀瀀漀欀氀쌀ꄀ搀愀樀쌀관Ⰰ 숀븀攀 渀愀 猀攀爀瘀攀爀 樀猀漀甀 甀洀쌀관猀숀묀漀瘀愀渀쌀ꄀ 甀숀븀椀瘀愀琀攀氀椀 瀀漀甀稀攀 漀戀爀쌀ꄀ稀欀礀 欀 渀쌀관洀숀븀 瘀氀愀猀琀渀쌀관 甀숀븀椀瘀愀琀攀氀 愀甀琀漀爀猀欀쌀ꄀ 瀀爀쌀ꄀ瘀愀⸀ഀ਀㰀戀爀 ⼀㸀ഀ਀倀漀欀甀搀 猀漀甀栀氀愀猀쌀관琀攀Ⰰ 숀븀攀 渀攀戀甀搀攀琀攀 瀀漀猀쌀관氀愀琀 樀愀欀쌀봀欀漀氀椀瘀 稀쌀ꄀ瘀愀搀渀쌀봀 洀愀琀攀爀椀쌀ꄀ氀 樀愀欀漀 瘀甀氀最쌀ꄀ爀渀쌀관 愀 漀戀猀挀쌀꤀渀쌀관 漀戀爀쌀ꄀ稀欀礀⼀欀漀洀攀渀琀쌀ꄀ쌀렀攀Ⰰ 樀愀欀쌀봀欀漀氀椀瘀 洀愀琀攀爀椀쌀ꄀ氀 瘀稀戀甀稀甀樀쌀관挀쌀관 渀攀渀쌀ꄀ瘀椀猀琀Ⰰ 爀愀猀椀猀洀甀猀Ⰰ 渀攀戀漀 樀椀渀쌀봀 洀愀琀攀爀椀쌀ꄀ氀 瀀漀爀甀숀뤀甀樀쌀관挀쌀관 稀쌀ꄀ欀漀渀礀⸀ 匀漀甀栀氀愀猀쌀관琀攀Ⰰ 숀븀攀 愀搀洀椀渀椀猀琀爀쌀ꄀ琀漀쌀렀椀Ⰰ 瀀爀漀瘀漀稀漀瘀愀琀攀氀쌀꤀ 愀 洀漀搀攀爀쌀ꄀ琀漀쌀렀椀  笀匀䤀吀䔀开一䄀䴀䔀紀   洀愀樀쌀관 瀀爀쌀ꄀ瘀漀 猀洀愀稀愀琀 瀀쌀렀쌀관瀀愀搀渀쌀가 甀瀀爀愀瘀椀琀 樀愀欀쌀봀欀漀氀椀瘀 洀愀琀攀爀椀쌀ꄀ氀 欀搀礀欀漀氀椀瘀 琀漀 甀稀渀愀樀쌀관 稀愀 瘀栀漀搀渀쌀꤀⸀ 嘀氀漀숀븀攀渀쌀꤀ 椀渀昀漀爀洀愀挀攀 戀甀搀漀甀 甀氀漀숀븀攀渀쌀꤀ 渀愀 猀攀爀瘀攀爀甀 愀 瘀 搀愀琀愀戀쌀ꄀ稀椀 愀 渀攀戀甀搀漀甀 瀀漀猀欀礀琀渀甀琀礀 숀븀쌀ꄀ搀渀쌀꤀ 琀쌀렀攀琀쌀관 猀琀爀愀渀쌀가 戀攀稀 瘀愀숀뤀攀栀漀 猀漀甀栀氀愀猀甀⸀ 䄀搀洀椀渀椀猀琀쌀ꄀ琀漀쌀렀椀⼀瀀漀瘀漀稀漀瘀愀琀攀氀쌀꤀ 猀攀爀瘀攀爀甀  瘀숀뤀愀欀 渀攀樀猀漀甀 愀渀椀 渀攀戀甀搀漀甀 爀甀쌀ꠀ椀琀 稀愀 搀愀琀愀 渀愀 猀攀爀瘀攀爀甀 甀氀漀숀븀攀渀쌀ꄀ 瀀漀欀甀搀 搀漀樀搀攀 欀 樀愀欀쌀꤀洀甀欀漀氀椀瘀 쌀먀琀漀欀甀 渀愀 猀攀瘀攀爀⸀ഀ਀㰀戀爀 ⼀㸀ഀ਀㰀戀爀 ⼀㸀ഀ਀吀礀琀漀 猀琀爀쌀ꄀ渀欀礀 瘀礀甀숀븀쌀관瘀愀樀쌀관 欀 甀氀漀숀븀攀渀쌀관 甀숀븀椀瘀愀琀攀氀猀欀쌀봀挀栀 搀愀琀 挀漀漀欀椀攀猀⸀ 䌀漀漀欀椀攀猀 猀氀漀甀숀븀쌀관 瀀漀甀稀攀 瀀爀漀 稀瘀쌀봀숀뤀攀渀쌀관 欀漀渀昀漀爀琀甀 瀀쌀렀椀 瀀漀甀숀븀쌀관瘀쌀ꄀ渀쌀관 琀쌀꤀琀漀 愀瀀氀椀欀愀挀攀⸀ 䔀洀愀椀氀漀瘀쌀ꄀ 愀搀爀攀猀愀 猀氀漀甀숀븀쌀관 樀攀渀 瀀爀漀 瀀漀琀瘀爀稀攀渀쌀관 瘀愀숀뤀椀挀栀 쌀먀搀愀樀쌀뤀 愀 瀀漀猀氀쌀ꄀ渀쌀관 栀攀猀氀愀⸀㰀戀爀 ⼀㸀ഀ਀㰀戀爀 ⼀㸀ഀ਀䬀氀椀欀渀甀琀쌀관洀 渀愀 ✀匀漀甀栀氀愀猀쌀관洀✀ 猀漀甀栀氀愀猀쌀관琀攀 稀 瘀쌀봀숀뤀攀 甀瘀攀搀攀渀쌀봀洀椀 瀀爀愀瘀椀搀氀礀⸀⸀ഀ਀䔀伀吀㬀ഀ਀ഀ਀    ␀氀愀渀最开爀攀最椀猀琀攀爀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀瀀愀最攀开琀椀琀氀攀✀ 㴀㸀 ✀刀攀最椀猀琀爀愀挀攀 渀漀瘀쌀꤀栀漀 甀숀븀椀瘀愀琀攀氀攀✀Ⰰഀ਀        ✀琀攀爀洀开挀漀渀搀✀ 㴀㸀 ✀倀漀搀洀쌀관渀欀礀 愀 瀀爀愀瘀椀搀氀愀✀Ⰰഀ਀        ✀椀开愀最爀攀攀✀ 㴀㸀 ✀匀漀甀栀氀愀猀쌀관洀✀Ⰰഀ਀        ✀猀甀戀洀椀琀✀ 㴀㸀 ✀倀漀猀氀愀琀 爀攀最椀猀琀爀愀挀椀✀Ⰰഀ਀        ✀攀爀爀开甀猀攀爀开攀砀椀猀琀猀✀ 㴀㸀 ✀娀愀搀愀渀쌀꤀ 甀숀븀椀瘀愀琀攀氀猀欀쌀꤀ 樀洀쌀꤀渀漀 樀椀숀븀 攀砀椀猀琀甀樀攀 瘀礀戀攀爀琀攀 猀椀 瀀爀漀猀쌀관洀 樀椀渀쌀꤀✀Ⰰഀ਀        ✀攀爀爀开瀀愀猀猀眀漀爀搀开洀椀猀洀愀琀挀栀✀ 㴀㸀 ✀䠀攀猀氀愀 猀攀 洀甀猀쌀관 猀挀栀漀搀漀瘀愀琀 瀀漀欀甀猀琀攀 樀攀 漀戀쌀가 稀愀搀愀琀 稀渀漀瘀甀✀Ⰰഀ਀        ✀攀爀爀开甀渀愀洀攀开猀栀漀爀琀✀ 㴀㸀 ✀䴀椀渀椀洀쌀ꄀ氀渀쌀관 搀쌀꤀氀欀愀 甀숀븀椀瘀愀琀攀氀猀欀쌀꤀栀漀 樀洀쌀꤀渀愀 樀攀 ㈀ 稀渀愀欀礀✀Ⰰഀ਀        ✀攀爀爀开瀀愀猀猀眀漀爀搀开猀栀漀爀琀✀ 㴀㸀 ✀䠀攀猀氀漀 洀甀猀쌀관 戀쌀봀琀 愀氀攀猀瀀漀쌀눀 ㈀ 稀渀愀欀礀 搀氀漀甀栀쌀꤀✀Ⰰഀ਀        ✀攀爀爀开甀渀愀洀攀开瀀愀猀猀开搀椀昀昀✀ 㴀㸀 ✀䨀洀쌀꤀渀漀 愀 栀攀猀氀漀 猀攀 渀攀猀洀쌀관 猀栀漀搀漀瘀愀琀✀Ⰰഀ਀        ✀攀爀爀开椀渀瘀愀氀椀搀开攀洀愀椀氀✀ 㴀㸀 ✀䈀礀氀愀 稀愀搀쌀ꄀ渀愀 渀攀瀀氀愀琀渀쌀ꄀ 攀洀愀椀氀漀瘀쌀ꄀ 愀搀爀攀猀愀✀Ⰰഀ਀        ✀攀爀爀开搀甀瀀氀椀挀愀琀攀开攀洀愀椀氀✀ 㴀㸀 ✀䨀椀渀쌀봀 甀숀븀椀瘀愀琀攀氀 猀攀 稀愀爀攀最椀猀琀爀漀瘀愀氀 猀攀 稀愀搀愀渀쌀봀洀 攀洀愀椀氀攀洀⸀ 䔀洀愀椀氀 洀甀猀쌀관 戀쌀봀琀 樀攀搀椀渀攀쌀ꠀ渀쌀봀✀Ⰰഀ਀        ✀攀渀琀攀爀开椀渀昀漀✀ 㴀㸀 ✀娀愀搀愀渀쌀꤀ 爀攀最椀猀琀爀愀쌀ꠀ渀쌀관 椀渀昀漀爀洀愀挀攀✀Ⰰഀ਀        ✀爀攀焀甀椀爀攀搀开椀渀昀漀✀ 㴀㸀 ✀嘀礀숀븀愀搀漀瘀愀渀쌀꤀ 椀渀昀漀爀洀愀挀攀✀Ⰰഀ਀        ✀漀瀀琀椀漀渀愀氀开椀渀昀漀✀ 㴀㸀 ✀嘀漀氀椀琀攀氀渀쌀꤀ 椀渀昀漀爀洀愀挀攀✀Ⰰഀ਀        ✀甀猀攀爀渀愀洀攀✀ 㴀㸀 ✀䨀洀쌀꤀渀漀✀Ⰰഀ਀        ✀瀀愀猀猀眀漀爀搀✀ 㴀㸀 ✀䠀攀猀氀漀✀Ⰰഀ਀        ✀瀀愀猀猀眀漀爀搀开愀最愀椀渀✀ 㴀㸀 ✀䠀攀猀氀漀 ⠀瀀漀琀瘀爀稀攀渀쌀관⤀✀Ⰰഀ਀        ✀攀洀愀椀氀✀ 㴀㸀 ✀䔀洀愀椀氀✀Ⰰഀ਀        ✀氀漀挀愀琀椀漀渀✀ 㴀㸀 ✀䴀쌀관猀琀漀 ⠀渀愀瀀쌀렀⸀ 䈀爀渀漀 愀瀀漀搀⸀⤀✀Ⰰഀ਀        ✀椀渀琀攀爀攀猀琀猀✀ 㴀㸀 ✀娀쌀ꄀ樀洀礀✀Ⰰഀ਀        ✀眀攀戀猀椀琀攀✀ 㴀㸀 ✀䐀漀洀쌀ꄀ挀쌀관 猀琀爀쌀ꄀ渀欀愀✀Ⰰഀ਀        ✀漀挀挀甀瀀愀琀椀漀渀✀ 㴀㸀 ✀倀漀瘀漀氀쌀ꄀ渀쌀관✀Ⰰഀ਀        ✀攀爀爀漀爀✀ 㴀㸀 ✀䌀䠀夀䈀䄀✀Ⰰഀ਀        ✀挀漀渀昀椀爀洀开攀洀愀椀氀开猀甀戀樀攀挀琀✀ 㴀㸀 ✀─猀 ⴀ 倀漀琀瘀爀稀攀渀쌀관 爀攀最椀猀琀爀愀挀挀攀✀Ⰰഀ਀        ✀椀渀昀漀爀洀愀琀椀漀渀✀ 㴀㸀 ✀䤀渀昀漀爀洀愀挀攀✀Ⰰഀ਀        ✀昀愀椀氀攀搀开猀攀渀搀椀渀最开攀洀愀椀氀✀ 㴀㸀 ✀一攀氀稀攀 漀搀攀猀氀愀琀 瀀漀琀瘀爀稀攀渀쌀관 爀攀最椀猀琀愀挀攀 ℀✀Ⰰഀ਀        ✀琀栀愀渀欀开礀漀甀✀ 㴀㸀 ✀䐀쌀가欀甀樀攀洀攀 稀愀 爀攀最椀猀琀爀愀挀椀⸀㰀戀爀 ⼀㸀㰀戀爀 ⼀㸀一愀 愀搀爀攀猀甀 稀愀搀愀渀漀甀 瀀쌀렀椀 爀攀最椀猀琀爀愀挀椀 嘀쌀ꄀ洀 戀甀搀漀甀 搀漀爀甀쌀ꠀ攀渀礀 椀渀昀漀爀洀愀挀攀 漀 愀欀琀椀瘀愀挀椀 瘀愀숀뤀攀栀漀 쌀먀쌀ꠀ琀甀✀Ⰰഀ਀        ✀愀挀挀琀开挀爀攀愀琀攀搀✀ 㴀㸀 ✀嘀쌀ꄀ숀뤀 甀숀븀椀瘀愀琀攀氀猀欀쌀봀 쌀먀쌀ꠀ攀琀 戀礀氀 戀攀稀挀栀礀戀渀쌀가 瘀礀琀瘀漀쌀렀攀渀⸀ 一礀渀쌀관 猀攀 瀀쌀렀椀栀氀愀숀뤀琀攀 瀀漀洀漀挀쌀관 瘀愀숀뤀攀栀漀 樀洀쌀꤀渀愀 愀 栀攀猀氀愀✀Ⰰഀ਀        ✀愀挀挀琀开愀挀琀椀瘀攀✀ 㴀㸀 ✀嘀쌀ꄀ숀뤀 쌀먀쌀ꠀ攀琀 樀攀 渀礀渀쌀관 愀欀琀椀瘀渀쌀관 瀀쌀렀椀栀氀愀숀뤀琀攀 猀攀 瀀漀洀漀挀쌀관 瘀愀숀뤀攀栀漀 樀洀쌀꤀渀愀 愀 栀攀猀氀愀⸀✀Ⰰഀ਀        ✀愀挀挀琀开愀氀爀攀愀搀礀开愀挀琀✀ 㴀㸀 ✀嘀쌀ꄀ숀뤀 쌀먀쌀ꠀ攀琀 樀攀 樀椀숀븀 愀欀琀椀瘀渀쌀관 ℀✀Ⰰഀ਀        ✀愀挀挀琀开愀挀琀开昀愀椀氀攀搀✀ 㴀㸀 ✀吀攀渀琀漀 쌀먀쌀ꠀ攀琀 渀洀쌀뤀숀븀攀 戀쌀봀琀 愀欀琀椀瘀漀瘀쌀ꄀ渀 ℀✀Ⰰഀ਀        ✀攀爀爀开甀渀欀开甀猀攀爀✀ 㴀㸀 ✀嘀礀戀爀愀渀쌀봀 甀숀븀椀瘀愀琀攀氀 渀攀攀砀椀猀琀甀樀攀 ℀✀Ⰰഀ਀        ✀砀开猀开瀀爀漀昀椀氀攀✀ 㴀㸀 ✀─猀尀✀ 瀀爀漀昀椀氀✀Ⰰഀ਀        ✀最爀漀甀瀀✀ 㴀㸀 ✀匀欀甀瀀椀渀愀✀Ⰰഀ਀        ✀爀攀最开搀愀琀攀✀ 㴀㸀 ✀倀쌀렀椀瀀漀樀攀渀✀Ⰰഀ਀        ✀搀椀猀欀开甀猀愀最攀✀ 㴀㸀 ✀嘀礀甀숀븀椀琀쌀관 搀椀猀欀甀✀Ⰰഀ਀        ✀挀栀愀渀最攀开瀀愀猀猀✀ 㴀㸀 ✀娀洀쌀가渀椀琀 栀攀猀氀漀✀Ⰰഀ਀        ✀挀甀爀爀攀渀琀开瀀愀猀猀✀ 㴀㸀 ✀匀漀甀쌀ꠀ愀猀渀쌀꤀ 栀攀猀氀漀✀Ⰰഀ਀        ✀渀攀眀开瀀愀猀猀✀ 㴀㸀 ✀一漀瘀쌀꤀ 栀攀猀氀漀✀Ⰰഀ਀        ✀渀攀眀开瀀愀猀猀开愀最愀椀渀✀ 㴀㸀 ✀一漀瘀쌀꤀ 栀攀猀氀漀 ⠀欀漀渀琀漀氀愀⤀✀Ⰰഀ਀        ✀攀爀爀开挀甀爀爀开瀀愀猀猀✀ 㴀㸀 ✀匀漀甀쌀ꠀ愀猀渀쌀꤀ 栀攀猀氀漀 稀愀搀쌀ꄀ渀漀 渀攀猀瀀爀쌀ꄀ瘀渀쌀가✀Ⰰഀ਀        ✀愀瀀瀀氀礀开洀漀搀椀昀✀ 㴀㸀 ✀瀀漀琀瘀爀搀椀琀 稀洀쌀가渀礀✀Ⰰഀ਀        ✀挀栀愀渀最攀开瀀愀猀猀✀ 㴀㸀 ✀娀洀쌀가渀椀琀 栀攀猀氀漀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开猀甀挀挀攀猀猀✀ 㴀㸀 ✀嘀쌀ꄀ숀뤀 瀀爀漀昀椀氀 戀礀氀 愀欀琀甀愀氀椀稀漀瘀쌀ꄀ渀✀Ⰰഀ਀        ✀瀀愀猀猀开挀栀最开猀甀挀挀攀猀猀✀ 㴀㸀 ✀嘀礀숀뤀攀 栀攀猀氀漀 戀礀氀漀 稀洀쌀가渀쌀가渀漀✀Ⰰഀ਀        ✀瀀愀猀猀开挀栀最开攀爀爀漀爀✀ 㴀㸀 ✀嘀愀숀뤀攀 栀攀猀氀漀 渀攀戀礀氀漀 稀洀쌀가渀쌀가渀漀✀Ⰰഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开爀攀最椀猀琀攀爀开挀漀渀昀椀爀洀开攀洀愀椀氀 㴀 㰀㰀㰀䔀伀吀ഀ਀䐀쌀가欀甀樀攀洀攀 稀愀 爀攀最椀猀琀爀愀挀椀 渀愀 笀匀䤀吀䔀开一䄀䴀䔀紀ഀ਀ഀ਀嘀愀숀뤀攀 樀洀쌀꤀渀漀 樀攀 㨀 ∀笀唀匀䔀刀开一䄀䴀䔀紀∀ഀ਀嘀愀숀뤀攀 栀攀猀氀漀 樀攀㨀 ∀笀倀䄀匀匀圀伀刀䐀紀∀ഀ਀ഀ਀倀爀漀 愀欀琀椀瘀愀挀椀 瘀愀숀뤀攀栀漀 쌀먀쌀ꠀ琀甀 樀攀 瀀쌀렀攀戀愀 欀氀椀欀渀漀甀琀 渀愀 漀搀欀愀稀 渀쌀관숀븀攀 渀攀戀漀 栀漀 稀欀漀瀀쌀관爀漀瘀愀琀ഀ਀搀漀 愀搀爀攀猀渀쌀관栀漀 쌀렀쌀ꄀ搀欀甀 瘀愀숀뤀攀栀漀 戀爀漀眀猀攀爀甀 愀 瀀쌀렀攀樀쌀관琀 渀愀 琀甀琀漀 猀琀爀쌀ꄀ渀欀甀ഀ਀ഀ਀ഀ਀笀䄀䌀吀开䰀䤀一䬀紀ഀ਀ഀ਀匀 倀漀稀搀爀愀瘀攀洀Ⰰഀ਀ഀ਀匀瀀爀쌀ꄀ瘀愀 猀攀爀瘀攀爀甀 笀匀䤀吀䔀开一䄀䴀䔀紀ഀ਀ഀ਀䔀伀吀㬀ഀ਀紀 ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 爀攀瘀椀攀眀挀漀洀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀刀䔀嘀䤀䔀圀䌀伀䴀开倀䠀倀✀⤀⤀ ␀氀愀渀最开爀攀瘀椀攀眀挀漀洀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀䬀漀渀琀爀漀氀愀 欀漀洀攀渀琀쌀ꄀ쌀렀쌀뤀✀Ⰰഀ਀        ✀渀漀开挀漀洀洀攀渀琀✀ 㴀㸀 ✀娀搀攀 渀攀樀猀漀甀 欀漀洀攀渀琀쌀ꄀ쌀렀攀 欀攀 欀漀渀琀爀漀氀攀✀Ⰰഀ਀        ✀渀开挀漀洀洀开搀攀氀✀ 㴀㸀 ✀─猀 欀漀洀攀渀琀쌀ꄀ쌀렀⠀쌀뤀⤀ 猀洀愀稀쌀ꄀ渀⠀漀⤀✀Ⰰഀ਀        ✀渀开挀漀洀洀开搀椀猀瀀✀ 㴀㸀 ✀倀漀쌀ꠀ攀琀 欀漀洀攀渀琀쌀ꄀ쌀렀쌀뤀 欀 稀漀戀爀愀稀攀渀쌀관✀Ⰰഀ਀        ✀猀攀攀开瀀爀攀瘀✀ 㴀㸀 ✀倀쌀렀攀搀挀栀漀稀쌀관✀Ⰰഀ਀        ✀猀攀攀开渀攀砀琀✀ 㴀㸀 ✀䐀愀氀숀뤀쌀관✀Ⰰഀ਀        ✀搀攀氀开挀漀洀洀✀ 㴀㸀 ✀匀洀愀稀愀琀 瘀礀戀爀愀渀쌀꤀ 欀漀洀攀渀琀쌀ꄀ쌀렀攀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 猀攀愀爀挀栀⸀瀀栀瀀 ⴀ 伀䬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 椀昀 ⠀搀攀昀椀渀攀搀⠀✀匀䔀䄀刀䌀䠀开倀䠀倀✀⤀⤀ഀ਀    ␀氀愀渀最开猀攀愀爀挀栀开瀀栀瀀 㴀 愀爀爀愀礀⠀　 㴀㸀 ✀倀爀漀栀氀攀搀쌀ꄀ瘀愀琀 漀戀爀쌀ꄀ稀欀礀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 猀攀愀爀挀栀渀攀眀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀匀䔀䄀刀䌀䠀一䔀圀开倀䠀倀✀⤀⤀ ␀氀愀渀最开猀攀愀爀挀栀开渀攀眀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀瀀愀最攀开琀椀琀氀攀✀ 㴀㸀 ✀一愀樀쌀관琀 渀漀瘀쌀꤀ 漀戀爀쌀ꄀ稀欀礀✀Ⰰഀ਀        ✀猀攀氀攀挀琀开搀椀爀✀ 㴀㸀 ✀嘀礀戀爀愀琀 愀搀爀攀猀쌀ꄀ쌀렀✀Ⰰഀ਀        ✀猀攀氀攀挀琀开搀椀爀开洀猀最✀ 㴀㸀 ✀吀愀琀漀 昀甀渀欀挀攀 瘀쌀ꄀ洀 甀洀漀숀븀渀쌀관 搀쌀ꄀ瘀欀漀瘀쌀가 稀瀀爀愀挀漀瘀愀琀 漀戀爀쌀ꄀ稀欀礀 渀愀栀爀愀渀쌀꤀ 瀀쌀렀攀猀 䘀吀倀⸀㰀戀爀 ⼀㸀㰀戀爀 ⼀㸀嘀礀戀攀爀琀攀 愀搀爀攀猀쌀ꄀ쌀렀 欀搀攀 猀攀 渀愀挀栀쌀ꄀ稀攀樀쌀관 漀戀爀쌀ꄀ稀欀礀 欀 猀瀀爀愀挀漀瘀쌀ꄀ渀쌀관✀Ⰰഀ਀        ✀渀漀开瀀椀挀开琀漀开愀搀搀✀ 㴀㸀 ✀一攀樀猀漀甀 稀搀攀 숀븀쌀ꄀ搀渀쌀꤀ 漀戀爀쌀ꄀ稀欀礀 欀 瀀쌀렀椀搀쌀ꄀ渀쌀관✀Ⰰഀ਀        ✀渀攀攀搀开漀渀攀开愀氀戀甀洀✀ 㴀㸀 ✀倀漀쌀렀攀戀甀樀攀琀攀 洀쌀관琀 瘀礀琀瘀漀쌀렀攀渀甀 愀氀攀猀瀀漀쌀눀 樀攀搀渀甀 最愀氀攀爀椀椀✀Ⰰഀ਀        ✀眀愀爀渀椀渀最✀ 㴀㸀 ✀嘀愀爀漀瘀쌀ꄀ渀쌀관✀Ⰰഀ਀        ✀挀栀愀渀最攀开瀀攀爀洀✀ 㴀㸀 ✀匀欀爀椀瀀琀 渀攀洀쌀뤀숀븀攀 稀愀瀀椀猀漀瘀愀琀 搀漀 琀漀栀漀琀漀 愀搀爀攀猀쌀ꄀ쌀렀攀Ⰰ 洀甀猀쌀관琀攀 栀漀 渀愀猀琀愀瘀椀琀 渀愀 䌀䠀䴀伀䐀 㜀㔀㔀 渀攀戀漀 㜀㜀㜀 瀀쌀렀攀搀 瀀쌀렀椀搀쌀ꄀ渀쌀관洀 漀戀爀쌀ꄀ稀欀쌀뤀 ℀✀Ⰰഀ਀        ✀琀愀爀最攀琀开愀氀戀甀洀✀ 㴀㸀 ✀㰀戀㸀嘀氀漀숀븀椀琀 漀戀爀쌀ꄀ稀欀礀 稀 ☀焀甀漀琀㬀㰀⼀戀㸀─猀㰀戀㸀☀焀甀漀琀㬀 搀漀 㰀⼀戀㸀─猀✀Ⰰഀ਀        ✀昀漀氀搀攀爀✀ 㴀㸀 ✀匀氀漀숀븀欀愀✀Ⰰഀ਀        ✀椀洀愀最攀✀ 㴀㸀 ✀伀戀爀쌀ꄀ稀攀欀✀Ⰰഀ਀        ✀愀氀戀甀洀✀ 㴀㸀 ✀䜀愀氀攀爀椀攀✀Ⰰഀ਀        ✀爀攀猀甀氀琀✀ 㴀㸀 ✀嘀쌀봀猀氀攀搀攀欀✀Ⰰഀ਀        ✀搀椀爀开爀漀✀ 㴀㸀 ✀一攀稀愀瀀椀猀漀瘀愀琀攀氀渀쌀ꄀ⸀ ✀Ⰰഀ਀        ✀搀椀爀开挀愀渀琀开爀攀愀搀✀ 㴀㸀 ✀一攀쌀ꠀ椀琀攀氀渀쌀ꄀ⸀ ✀Ⰰഀ਀        ✀椀渀猀攀爀琀✀ 㴀㸀 ✀倀쌀렀椀搀쌀ꄀ瘀쌀ꄀ洀 渀漀瘀쌀꤀ 漀戀爀쌀ꄀ稀欀礀 搀漀 最愀氀攀爀椀攀✀Ⰰഀ਀        ✀氀椀猀琀开渀攀眀开瀀椀挀✀ 㴀㸀 ✀匀攀稀渀愀洀 漀戀爀쌀ꄀ稀欀쌀뤀✀Ⰰഀ਀        ✀椀渀猀攀爀琀开猀攀氀攀挀琀攀搀✀ 㴀㸀 ✀嘀氀漀숀븀椀琀 瘀礀戀爀愀渀쌀꤀ 漀戀爀쌀ꄀ稀欀礀✀Ⰰഀ਀        ✀渀漀开瀀椀挀开昀漀甀渀搀✀ 㴀㸀 ✀一漀瘀쌀꤀ 漀戀爀쌀ꄀ稀欀礀 渀攀渀愀氀攀稀攀渀礀✀Ⰰഀ਀        ✀戀攀开瀀愀琀椀攀渀琀✀ 㴀㸀 ✀倀爀漀猀쌀관洀 戀甀쌀꼀琀攀 琀爀瀀쌀가氀椀瘀쌀봀⠀쌀ꄀ⤀Ⰰ 瀀爀漀最爀愀洀 瀀漀琀쌀렀攀戀甀樀攀 渀愀 稀瀀爀愀挀漀瘀쌀ꄀ渀쌀관 漀戀爀쌀ꄀ稀欀甀 渀쌀가樀愀쌀봀 琀攀渀 쌀ꠀ愀猀⸀✀Ⰰഀ਀        ✀渀漀琀攀猀✀ 㴀㸀 ✀㰀甀氀㸀✀ ⸀ ✀㰀氀椀㸀㰀戀㸀伀䬀㰀⼀戀㸀 㨀 吀礀琀漀 漀戀爀쌀ꄀ稀欀礀 戀礀氀礀 瀀쌀렀椀搀쌀ꄀ渀礀✀ ⸀ ✀㰀氀椀㸀㰀戀㸀䐀倀㰀⼀戀㸀 㨀 娀搀瘀漀樀攀渀쌀관℀Ⰰ 吀攀渀琀漀 漀戀爀쌀ꄀ稀攀欀 樀椀 攀砀椀猀琀甀樀攀✀ ⸀ ✀㰀氀椀㸀㰀戀㸀倀䈀㰀⼀戀㸀 㨀 琀攀渀琀漀 漀戀爀쌀ꄀ稀攀欀 渀攀氀稀攀 瀀쌀렀椀搀愀琀Ⰰ 猀欀漀渀琀爀漀氀甀樀琀攀 欀漀渀昀椀最甀爀愀挀椀 瀀쌀렀쌀관瀀愀搀渀쌀가 瀀쌀렀쌀관猀琀甀瀀漀瘀쌀ꄀ 瀀爀쌀ꄀ瘀愀✀ ⸀ ✀㰀氀椀㸀䬀搀礀숀븀 猀攀 渀攀甀欀쌀ꄀ숀븀攀 尀✀漀稀渀愀쌀ꠀ攀渀쌀관尀✀ 伀䬀Ⰰ 䐀倀Ⰰ 倀䈀 欀氀攀瀀渀쌀가琀攀 渀愀 漀戀爀쌀ꄀ稀攀欀 愀 甀瘀椀搀쌀관琀攀 挀栀礀戀漀瘀漀甀 栀氀쌀ꄀ숀뤀欀甀 最攀渀攀爀漀瘀愀渀漀甀 倀䠀倀Ⰰ 欀琀攀爀쌀ꄀ 嘀쌀ꄀ洀 瀀漀洀쌀뤀숀븀攀 稀樀椀猀琀椀琀 瀀쌀렀쌀관쌀ꠀ椀渀甀 瀀爀漀戀氀쌀꤀洀甀✀ ⸀ ✀㰀氀椀㸀倀漀欀甀搀 搀漀樀搀攀 欀 琀椀洀攀漀甀琀甀 䘀㔀 渀攀戀漀 爀攀氀漀愀搀 猀琀爀쌀ꄀ渀欀礀 戀礀 洀쌀가氀 瀀漀洀漀挀椀✀ ⸀ ✀㰀⼀甀氀㸀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 琀栀甀洀戀渀愀椀氀猀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 嘀漀椀搀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 戀愀渀渀椀渀最⸀瀀栀瀀  渀漀琀 甀猀攀搀 椀渀 挀瀀最㄀⸀㈀⸀　ⴀ渀甀欀攀   ⼀⼀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 嘀漀椀搀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 甀瀀氀漀愀搀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀唀倀䰀伀䄀䐀开倀䠀倀✀⤀⤀ ␀氀愀渀最开甀瀀氀漀愀搀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀唀瀀氀漀愀搀渀漀甀琀 漀戀爀쌀ꄀ稀攀欀✀Ⰰഀ਀        ✀洀愀砀开昀猀椀稀攀✀ 㴀㸀 ✀䴀愀砀⸀ 瘀攀氀椀欀漀猀琀 猀漀甀戀漀爀甀 樀攀 ─猀 䬀䈀✀Ⰰഀ਀        ✀愀氀戀甀洀✀ 㴀㸀 ✀䜀愀氀攀爀椀攀✀Ⰰഀ਀        ✀瀀椀挀琀甀爀攀✀ 㴀㸀 ✀伀戀爀쌀ꄀ稀攀欀✀Ⰰഀ਀        ✀瀀椀挀开琀椀琀氀攀✀ 㴀㸀 ✀一愀搀瀀椀猀 漀戀爀쌀ꄀ稀欀甀✀Ⰰഀ਀        ✀搀攀猀挀爀椀瀀琀椀漀渀✀ 㴀㸀 ✀倀漀瀀椀猀 漀戀爀쌀ꄀ稀欀甀✀Ⰰഀ਀        ✀欀攀礀眀漀爀搀猀✀ 㴀㸀 ✀䬀氀쌀관쌀ꠀ漀瘀쌀ꄀ 猀氀漀瘀愀 ⠀漀搀搀쌀가氀攀渀쌀ꄀ 洀攀稀攀爀漀甀⤀✀Ⰰഀ਀        ✀攀爀爀开渀漀开愀氀戀开甀瀀氀漀愀搀愀戀氀攀猀✀ 㴀㸀 ✀娀搀攀 猀攀 渀攀渀愀氀쌀꤀稀쌀ꄀ 最愀氀攀爀椀攀 搀漀 欀琀攀爀쌀꤀ 樀攀 瀀漀瘀漀氀攀渀 甀瀀氀漀愀搀⸀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 甀猀攀爀洀最爀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀唀匀䔀刀䴀䜀刀开倀䠀倀✀⤀⤀ ␀氀愀渀最开甀猀攀爀洀最爀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀匀瀀爀愀瘀漀瘀愀琀 甀숀븀椀瘀愀琀攀氀攀✀Ⰰഀ਀        ✀渀愀洀攀开愀✀ 㴀㸀 ✀䨀洀쌀꤀渀漀 瘀稀攀猀琀甀瀀⸀✀Ⰰഀ਀        ✀渀愀洀攀开搀✀ 㴀㸀 ✀䨀洀쌀꤀渀漀 猀攀猀琀甀瀀⸀✀Ⰰഀ਀        ✀最爀漀甀瀀开愀✀ 㴀㸀 ✀匀欀甀瀀椀渀愀 瘀稀攀猀琀甀瀀⸀✀Ⰰഀ਀        ✀最爀漀甀瀀开搀✀ 㴀㸀 ✀匀欀甀瀀椀渀愀 猀攀猀琀甀瀀⸀✀Ⰰഀ਀        ✀爀攀最开愀✀ 㴀㸀 ✀䐀愀琀甀洀 爀攀最椀猀琀爀愀挀攀 瘀稀攀猀琀甀瀀⸀✀Ⰰഀ਀        ✀爀攀最开搀✀ 㴀㸀 ✀䐀愀琀甀洀 爀攀最椀猀琀爀愀挀攀 猀攀猀琀甀瀀⸀✀Ⰰഀ਀        ✀瀀椀挀开愀✀ 㴀㸀 ✀倀漀쌀ꠀ攀琀 漀戀爀쌀ꄀ稀欀쌀뤀 瘀稀攀猀琀甀瀀⸀✀Ⰰഀ਀        ✀瀀椀挀开搀✀ 㴀㸀 ✀倀漀쌀ꠀ攀琀 漀戀爀쌀ꄀ稀欀쌀뤀 猀攀猀琀甀瀀⸀✀Ⰰഀ਀        ✀搀椀猀欀甀开愀✀ 㴀㸀 ✀嘀礀甀숀븀椀琀쌀관 搀椀猀欀甀 瘀稀攀猀琀甀瀀⸀✀Ⰰഀ਀        ✀搀椀猀欀甀开搀✀ 㴀㸀 ✀嘀礀甀숀븀椀琀쌀관 搀椀猀欀甀 猀攀猀琀甀瀀⸀✀Ⰰഀ਀        ✀猀漀爀琀开戀礀✀ 㴀㸀 ✀쌀���愂搀椀琀 甀숀븀쌀렀椀瘀愀琀攀氀攀 瀀漀搀氀攀✀Ⰰഀ਀        ✀攀爀爀开渀漀开甀猀攀爀猀✀ 㴀㸀 ✀吀愀戀甀氀欀愀 甀숀븀椀瘀愀琀攀氀쌀뤀 樀攀 瀀爀쌀ꄀ稀搀渀쌀ꄀ℀✀Ⰰഀ਀        ✀攀爀爀开攀搀椀琀开猀攀氀昀✀ 㴀㸀 ✀娀搀攀 渀攀氀稀攀 攀搀椀琀漀瘀愀琀 瘀氀愀猀琀渀쌀관 瀀爀漀昀椀氀 瀀漀甀숀븀椀樀琀攀 瀀쌀렀쌀관猀氀甀숀뤀渀漀甀 瘀漀氀戀甀 瀀爀愀挀甀樀쌀관挀쌀관 猀 瘀愀숀뤀쌀관洀 瀀爀漀昀椀氀攀洀✀Ⰰഀ਀        ✀攀搀椀琀✀ 㴀㸀 ✀唀倀刀䄀嘀䤀吀✀Ⰰഀ਀        ✀搀攀氀攀琀攀✀ 㴀㸀 ✀匀䴀䄀娀䄀吀✀Ⰰഀ਀        ✀渀愀洀攀✀ 㴀㸀 ✀唀숀븀椀瘀⸀ 樀洀쌀꤀渀漀✀Ⰰഀ਀        ✀最爀漀甀瀀✀ 㴀㸀 ✀匀欀甀瀀椀渀愀 唀숀븀椀瘀⸀✀Ⰰഀ਀        ✀椀渀愀挀琀椀瘀攀✀ 㴀㸀 ✀一攀愀欀琀椀瘀渀쌀관✀Ⰰഀ਀        ✀漀瀀攀爀愀琀椀漀渀猀✀ 㴀㸀 ✀伀瀀攀爀愀挀攀✀Ⰰഀ਀        ✀瀀椀挀琀甀爀攀猀✀ 㴀㸀 ✀伀戀爀쌀ꄀ稀欀礀✀Ⰰഀ਀        ✀搀椀猀欀开猀瀀愀挀攀✀ 㴀㸀 ✀䴀쌀관猀琀漀 瘀礀甀숀븀椀琀쌀꤀ ⼀ 欀瘀쌀대琀愀✀Ⰰഀ਀        ✀爀攀最椀猀琀攀爀攀搀开漀渀✀ 㴀㸀 ✀刀攀最椀猀琀爀漀瘀쌀ꄀ渀✀Ⰰഀ਀        ✀甀开甀猀攀爀开漀渀开瀀开瀀愀最攀猀✀ 㴀㸀 ✀─搀 甀숀븀椀瘀愀琀攀氀쌀뤀 渀愀 ─搀 猀琀爀쌀ꄀ渀欀쌀ꄀ挀栀✀Ⰰഀ਀        ✀挀漀渀昀椀爀洀开搀攀氀✀ 㴀㸀 ✀䨀猀琀攀 猀椀 樀椀猀琀⠀愀⤀Ⰰ 숀븀攀 挀栀挀攀琀攀 猀洀愀稀愀琀 琀漀栀漀琀漀 甀숀븀椀瘀愀琀攀氀攀 㼀 尀尀渀嘀숀뤀攀挀栀渀礀 樀攀栀漀 漀戀爀쌀ꄀ稀欀礀Ⰰ 最愀氀攀爀椀攀 愀 欀漀洀攀渀琀쌀ꄀ쌀렀攀 戀甀搀漀甀 猀洀愀稀쌀ꄀ渀礀⸀✀Ⰰഀ਀        ✀洀愀椀氀✀ 㴀㸀 ✀䴀䄀䤀䰀✀Ⰰഀ਀        ✀攀爀爀开甀渀欀渀漀眀渀开甀猀攀爀✀ 㴀㸀 ✀嘀礀戀爀愀渀쌀봀 甀숀븀椀瘀⸀ 渀攀攀砀椀猀琀甀樀攀 ℀✀Ⰰഀ਀        ✀洀漀搀椀昀礀开甀猀攀爀✀ 㴀㸀 ✀娀洀쌀가渀椀琀 甀숀븀椀瘀⸀✀Ⰰഀ਀        ✀渀漀琀攀猀✀ 㴀㸀 ✀倀漀稀渀쌀ꄀ洀欀礀✀Ⰰഀ਀        ✀渀漀琀攀开氀椀猀琀✀ 㴀㸀 ✀㰀氀椀㸀倀漀欀甀搀 渀攀挀栀挀攀琀攀 稀洀쌀가渀椀琀 栀攀猀氀漀 瀀漀渀攀挀栀琀攀 瀀漀氀쌀관쌀ꠀ欀漀 瀀爀漀 栀攀猀氀漀 瀀爀쌀ꄀ稀搀渀쌀꤀✀Ⰰഀ਀        ✀瀀愀猀猀眀漀爀搀✀ 㴀㸀 ✀䠀攀猀氀漀✀Ⰰഀ਀        ✀甀猀攀爀开愀挀琀椀瘀攀✀ 㴀㸀 ✀唀숀븀椀瘀⸀ 樀攀 愀欀琀椀瘀渀쌀관✀Ⰰഀ਀        ✀甀猀攀爀开最爀漀甀瀀✀ 㴀㸀 ✀唀숀븀椀瘀⸀ 匀欀甀瀀椀渀愀✀Ⰰഀ਀        ✀甀猀攀爀开攀洀愀椀氀✀ 㴀㸀 ✀唀숀븀椀瘀⸀ 攀洀愀椀氀氀✀Ⰰഀ਀        ✀甀猀攀爀开眀攀戀开猀椀琀攀✀ 㴀㸀 ✀唀숀븀椀瘀⸀ 搀漀洀쌀ꄀ挀쌀관 猀琀爀쌀ꄀ渀欀愀✀Ⰰഀ਀        ✀挀爀攀愀琀攀开渀攀眀开甀猀攀爀✀ 㴀㸀 ✀嘀礀琀瘀漀쌀렀椀琀 渀漀瘀쌀꤀栀漀 甀숀븀椀瘀愀琀氀攀⸀✀Ⰰഀ਀        ✀甀猀攀爀开氀漀挀愀琀椀漀渀✀ 㴀㸀 ✀䴀쌀관猀琀漀 唀숀븀椀瘀⸀ ⠀渀愀瀀쌀렀⸀ 倀爀愀栀愀 愀瀀漀搀⸀⤀✀Ⰰഀ਀        ✀甀猀攀爀开椀渀琀攀爀攀猀琀猀✀ 㴀㸀 ✀唀숀븀椀瘀⸀ 稀쌀ꄀ樀洀礀✀Ⰰഀ਀        ✀甀猀攀爀开漀挀挀甀瀀愀琀椀漀渀✀ 㴀㸀 ✀唀숀븀椀瘀⸀ 瀀漀瘀漀氀쌀ꄀ渀쌀관✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 甀琀椀氀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀唀吀䤀䰀开倀䠀倀✀⤀⤀ ␀氀愀渀最开甀琀椀氀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀娀洀쌀가渀椀琀 瘀攀氀椀欀漀猀琀 漀戀爀쌀ꄀ稀欀甀✀Ⰰഀ਀        ✀眀栀愀琀开椀琀开搀漀攀猀✀ 㴀㸀 ✀䌀漀 琀漀 搀쌀가氀쌀ꄀ㼀✀Ⰰഀ਀        ✀眀栀愀琀开甀瀀搀愀琀攀开琀椀琀氀攀猀✀ 㴀㸀 ✀䄀欀琀甀愀氀椀稀漀瘀愀琀 渀愀搀瀀椀猀礀 瀀漀搀氀攀 樀洀쌀꤀渀愀 猀漀甀戀漀爀쌀뤀✀Ⰰഀ਀        ✀眀栀愀琀开搀攀氀攀琀攀开琀椀琀氀攀✀ 㴀㸀 ✀匀洀愀稀愀琀 渀愀搀瀀椀猀礀✀Ⰰഀ਀        ✀眀栀愀琀开爀攀戀甀椀氀搀✀ 㴀㸀 ✀倀쌀렀攀搀쌀가氀愀琀 渀愀栀氀攀搀礀 愀 稀洀쌀가渀쌀가渀쌀꤀ 漀戀爀쌀ꄀ稀欀礀✀Ⰰഀ਀        ✀眀栀愀琀开搀攀氀攀琀攀开漀爀椀最椀渀愀氀猀✀ 㴀㸀 ✀匀洀愀稀愀琀 漀爀椀最椀渀쌀ꄀ氀礀 愀 渀愀栀爀愀搀椀琀 樀攀 猀琀쌀렀攀搀渀쌀관洀椀 漀戀爀쌀ꄀ稀欀礀✀Ⰰഀ਀        ✀昀椀氀攀✀ 㴀㸀 ✀匀漀甀戀漀爀✀Ⰰഀ਀        ✀琀椀琀氀攀开猀攀琀开琀漀✀ 㴀㸀 ✀一愀猀琀愀瘀椀琀 渀愀搀瀀椀猀 渀愀✀Ⰰഀ਀        ✀猀甀戀洀椀琀开昀漀爀洀✀ 㴀㸀 ✀漀搀攀猀氀愀琀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀搀开猀甀挀挀攀猀昀甀氀氀礀✀ 㴀㸀 ✀䄀欀琀甀愀氀椀稀愀挀攀 瀀爀漀戀쌀가栀氀愀 伀䬀✀Ⰰഀ਀        ✀攀爀爀漀爀开挀爀攀愀琀攀✀ 㴀㸀 ✀䌀䠀夀䈀䄀 瀀쌀렀椀 瘀礀琀瘀쌀ꄀ쌀렀攀渀쌀관✀Ⰰഀ਀        ✀挀漀渀琀椀渀甀攀✀ 㴀㸀 ✀娀瀀爀愀挀漀瘀愀琀瘀쌀관挀攀 漀戀爀쌀ꄀ稀欀쌀뤀✀Ⰰഀ਀        ✀洀愀椀渀开猀甀挀挀攀猀猀✀ 㴀㸀 ✀匀欀漀甀戀漀爀 ─猀 戀礀氀 甀猀瀀쌀가숀뤀渀쌀가 瀀漀甀숀븀椀琀 樀愀欀漀 栀氀愀瘀渀쌀관 漀戀爀쌀ꄀ稀攀欀✀Ⰰഀ਀        ✀攀爀爀漀爀开爀攀渀愀洀攀✀ 㴀㸀 ✀䌀栀礀戀愀 瀀쌀렀攀樀洀攀渀漀瘀쌀ꄀ渀쌀관 ─猀 渀愀 ─猀✀Ⰰഀ਀        ✀攀爀爀漀爀开渀漀琀开昀漀甀渀搀✀ 㴀㸀 ✀匀漀甀戀漀爀 ─猀 渀攀戀礀氀 渀愀氀攀稀攀渀✀Ⰰഀ਀        ✀戀愀挀欀✀ 㴀㸀 ✀稀瀀쌀가琀 渀愀 栀愀氀瘀渀쌀관✀Ⰰഀ਀        ✀琀栀甀洀戀猀开眀愀椀琀✀ 㴀㸀 ✀䄀欀琀甀愀氀椀稀甀樀椀 渀쌀ꄀ栀氀攀搀礀 愀⼀渀攀戀漀 猀琀쌀렀攀搀渀쌀관 漀戀爀쌀ꄀ稀欀礀Ⰰ 瀀爀漀猀쌀관洀 쌀ꠀ攀欀攀樀琀攀⸀⸀⸀✀Ⰰഀ਀        ✀琀栀甀洀戀猀开挀漀渀琀椀渀甀攀开眀愀椀琀✀ 㴀㸀 ✀倀漀欀爀愀쌀ꠀ甀樀椀 瘀 愀欀琀甀愀氀椀稀愀挀椀 渀쌀ꄀ栀氀攀搀쌀뤀 愀⼀渀攀戀漀 猀琀쌀렀攀搀渀쌀관挀栀 漀戀爀쌀ꄀ稀欀쌀뤀⸀⸀⸀✀Ⰰഀ਀        ✀琀椀琀氀攀猀开眀愀椀琀✀ 㴀㸀 ✀䄀欀琀甀愀氀椀稀甀樀椀 渀愀搀瀀椀猀礀Ⰰ 瀀爀漀猀쌀관洀 쌀ꠀ攀欀攀樀琀攀⸀⸀⸀✀Ⰰഀ਀        ✀搀攀氀攀琀攀开眀愀椀琀✀ 㴀㸀 ✀䴀愀숀븀甀 渀愀搀瀀椀猀礀Ⰰ 瀀爀漀猀쌀관洀 쌀ꠀ攀欀攀樀琀攀⸀⸀⸀✀Ⰰഀ਀        ✀爀攀瀀氀愀挀攀开眀愀椀琀✀ 㴀㸀 ✀䴀愀숀븀甀 漀爀椀最椀渀쌀ꄀ氀礀 愀 渀愀栀爀愀稀甀樀椀 樀攀 猀琀쌀렀攀搀渀쌀관洀椀 漀戀爀쌀ꄀ稀欀礀Ⰰ 瀀爀漀猀쌀관洀 쌀ꠀ攀欀攀樀琀攀⸀⸀⸀✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀✀ 㴀㸀 ✀刀礀挀栀氀쌀꤀ 椀渀猀琀爀甀欀挀攀✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开愀挀琀椀漀渀✀ 㴀㸀 ✀嘀礀戀攀爀琀攀 愀欀挀椀✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开瀀愀爀愀洀攀琀攀爀✀ 㴀㸀 ✀一愀猀琀愀瘀椀琀 瀀愀爀愀洀攀琀爀礀✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开愀氀戀甀洀✀ 㴀㸀 ✀嘀礀戀爀愀琀 最愀氀攀爀椀椀✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开瀀爀攀猀猀✀ 㴀㸀 ✀匀琀椀猀欀渀쌀가琀攀 ─猀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀✀ 㴀㸀 ✀䄀欀琀甀愀氀椀稀漀瘀愀琀 渀쌀ꄀ栀氀攀搀礀 愀⼀渀攀戀漀 猀琀쌀렀攀搀渀쌀관 漀戀爀쌀ꄀ稀欀礀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开眀栀愀琀✀ 㴀㸀 ✀䌀漀 洀쌀ꄀ 戀쌀봀琀 愀欀琀甀愀氀椀稀漀瘀쌀ꄀ渀漀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开琀栀甀洀戀✀ 㴀㸀 ✀䨀攀渀 渀쌀ꄀ栀氀攀搀礀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开瀀椀挀✀ 㴀㸀 ✀倀漀甀稀攀 猀琀쌀렀攀搀渀쌀관 漀戀爀쌀ꄀ稀欀礀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开戀漀琀栀✀ 㴀㸀 ✀伀戀漀樀쌀관 渀쌀ꄀ栀氀攀搀礀 椀 猀琀쌀렀攀搀渀쌀관 漀戀爀쌀ꄀ稀欀礀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开渀甀洀戀攀爀✀ 㴀㸀 ✀倀漀쌀ꠀ攀琀 漀戀爀쌀ꄀ稀欀쌀뤀Ⰰ 欀琀攀爀쌀꤀ 稀瀀爀愀挀漀瘀愀琀 渀愀 ㄀ 欀氀椀欀渀甀琀쌀관✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开漀瀀琀椀漀渀✀ 㴀㸀 ✀⠀匀渀椀숀븀琀攀 쌀ꠀ쌀관猀氀漀 瀀漀欀甀搀 洀쌀ꄀ琀攀 瀀爀漀戀氀쌀꤀洀礀 猀 琀椀洀攀漀甀琀攀洀⤀✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开琀椀琀氀攀✀ 㴀㸀 ✀䨀洀쌀꤀渀漀 猀漀甀戀漀爀甀 㼀 一愀搀瀀椀猀 漀戀爀쌀ꄀ稀欀甀✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开栀漀眀✀ 㴀㸀 ✀䨀愀欀 猀攀 洀쌀ꄀ 稀洀쌀가渀椀琀 樀洀쌀꤀渀漀 漀戀爀쌀ꄀ稀欀甀㼀✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开爀攀洀漀瘀攀✀ 㴀㸀 ✀伀搀猀琀爀愀渀椀琀 ⸀樀瀀最 欀漀渀挀漀瘀欀甀 愀 瀀쌀렀攀瀀猀愀琀 开 ⠀瀀漀搀琀爀숀븀쌀관琀欀愀 洀攀稀攀爀愀洀椀⤀✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开攀甀爀漀✀ 㴀㸀 ✀娀洀쌀가渀椀琀 ㈀　　㌀开㄀㄀开㈀㌀开㄀㌀开㈀　开㈀　⸀樀瀀最 渀愀 ㈀㌀⼀㄀㄀⼀㈀　　㌀ ㄀㌀㨀㈀　✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开甀猀✀ 㴀㸀 ✀娀洀쌀가渀椀琀 ㈀　　㌀开㄀㄀开㈀㌀开㄀㌀开㈀　开㈀　⸀樀瀀最 渀愀 ㄀㄀⼀㈀㌀⼀㈀　　㌀ ㄀㌀㨀㈀　✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开琀椀洀攀✀ 㴀㸀 ✀娀洀쌀가渀椀琀 ㈀　　㌀开㄀㄀开㈀㌀开㄀㌀开㈀　开㈀　⸀樀瀀最 渀愀 ㄀㌀㨀㈀　✀Ⰰഀ਀        ✀搀攀氀攀琀攀✀ 㴀㸀 ✀匀洀愀稀愀琀 渀愀搀瀀椀猀礀 漀戀爀쌀ꄀ稀欀쌀뤀 渀攀戀漀 漀爀椀最椀渀쌀ꄀ氀渀쌀관 漀戀爀쌀ꄀ稀欀礀✀Ⰰഀ਀        ✀搀攀氀攀琀攀开琀椀琀氀攀✀ 㴀㸀 ✀匀洀愀稀愀琀 渀愀搀瀀椀猀礀 漀戀爀쌀ꄀ稀欀쌀뤀✀Ⰰഀ਀        ✀搀攀氀攀琀攀开漀爀椀最椀渀愀氀✀ 㴀㸀 ✀匀洀愀稀愀琀 漀爀椀最椀渀쌀ꄀ氀渀쌀관 漀戀爀쌀ꄀ稀欀礀✀Ⰰഀ਀        ✀搀攀氀攀琀攀开爀攀瀀氀愀挀攀✀ 㴀㸀 ✀匀洀愀稀愀琀 漀爀椀最椀渀쌀ꄀ氀礀 愀 渀愀栀爀愀搀椀琀 樀攀 猀琀쌀렀攀搀渀쌀관 瘀攀爀稀쌀관 漀戀爀쌀ꄀ稀欀쌀뤀✀Ⰰഀ਀        ✀猀攀氀攀挀琀开愀氀戀甀洀✀ 㴀㸀 ✀嘀礀戀爀愀琀 最愀氀攀爀椀椀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 瀀愀最攀琀椀琀氀攀⸀椀渀挀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀␀氀愀渀最开瀀愀最攀琀椀琀氀攀开瀀栀瀀 㴀 愀爀爀愀礀⠀ഀ਀✀搀椀瘀椀搀攀爀✀ 㴀㸀 ✀㸀✀Ⰰഀ਀    ✀瘀椀攀眀椀渀最✀ 㴀㸀 ✀嘀椀攀眀椀渀最 倀栀漀琀漀✀Ⰰഀ਀    ✀甀猀爀✀ 㴀㸀 ∀✀猀 倀栀漀琀漀 䜀愀氀氀攀爀礀∀Ⰰഀ਀    ✀瀀栀漀琀漀最愀氀氀攀爀礀✀ 㴀㸀 ✀倀栀漀琀漀 䜀愀氀氀攀爀礀✀Ⰰഀ਀    ⤀㬀ഀ਀ഀ਀㼀㸀  