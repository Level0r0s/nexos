<?php

/**************************************************************************************/
/*  CPG-NUKE: Advanced Content Management System                                      */
/**************************************************************************************/
/*  A highly modified version of PHP-Nuke 6.5                                         */
/*  which is Copyright (c) 2002 by Francisco Burzi                                    */
/*  http://phpnuke.org                                                                */
/*  Under the GNU General Public License version 2                                    */
/**************************************************************************************/
/* Coppermine Photo Gallery 1.3.0 for CMS                                             */
/**************************************************************************************/
/**************************************************************************************/
/* Port Copyright (C) 2004 Coppermine for CMS Dev Team                                */
/* http://nukephotogallery.com/                                                       */
/* Based on coppermine 1.1d by Surf  http://www.surf4all.net/                         */
/**************************************************************************************/
/* Updated by the Coppermine Dev Team  2003                                           */
/* (http://coppermine.sf.net/team/)                                                   */
/* see /docs/credits.html for details                                                 */
/**************************************************************************************/
/* Copyright (C) 2002,2003  GrĂ©gory DEMAR <gdemar@wanadoo.fr>                        */
/* http://www.chezgreg.net/coppermine/                                                */
/* This program is free software; you can redistribute it and/or modify               */
/* it under the terms of the GNU General Public License as published by               */
/* the Free Software Foundaţion; either version 2 of the License, or                  */
/* (at your option) any later version.                                                */
/**************************************************************************************/
/**************************************************************************************/
/*                      /modules/coppermine/lang/romanian.php                         */
/**************************************************************************************/
/*                                                                                    */
/*  (c) 2004 cpgnuke dev team akamu                                                   */
/*  Last modification: 2004/08/08                                                     */
/*  $Id: lang-romanian.php                                                            */
/*  translator: Rancov Nicolae   e-mail: aikon@dap.ro                                 */
/*                               website: http://www.aikon.dap.ro                     */
/**************************************************************************************/






define('PIC_VIEWS', 'Afişări');//new în 1.2.2nuke;
define('PIC_VOTES', 'Voturi');//new în 1.2.2nuke
define('PIC_COMMENTS', 'Comentarii');//new în 1.2.2nuke

// info about translators and translated language
$lang_translation_info = array(
    'lang_name_english' => 'Romanian', // the name of your language în English, e.g. 'Greek' or 'Spanish'
    'lang_name_native' => 'Română', // the name of your language în your mother tongue (for non-latin alphabets, use unicode), e.g. '&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940;' or 'Espa&ntilde;ol'
    'lang_country_code' => 'ro', // the two-letter code for the country your language is most-often spoken (refer to http://www.iana.org/cctld/cctld-whois.htm), e.g. 'gr' or 'es'
    'trans_name' => 'Rancov Nicolae', // the name of the translator - can be a nickname
    'trans_e-mail' => 'aikon@dap.ro', // translator's e-mail address (optional)
    'trans_website' => 'http://www.aikon.dap.ro/', // translator's website (optional)
    'trans_date' => '2004-08-08', // the date the translation was created / last modified
    );

$lang_charset = 'UTF-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, kilo, Mega
$lang_byte_units = array('Bytes', 'kB', 'MB');
// Day of weeks and months
$lang_day_of_week = array('Duminică', 'Luni', 'Marţi', 'Miercuri', 'Joi', 'Vineri', 'Sâmbătă');
$lang_month = array('Ianuarie', 'Februarie', 'Martie', 'Aprilie', 'Mai', 'Iunie', 'Iulie', 'August', 'Septembrie', 'Octombrie', 'Noiembrie', 'Decembrie');
// Some common strings
$lang_yes = 'Da';
$lang_no = 'Nu';
$lang_back = 'ÎNAPOI';
$lang_continue = 'CONTINUARE';
$lang_info = 'Informaţii';
$lang_error = 'Eroare';
// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt = '%d %B, %Y';
$lastcom_date_fmt = '%d/%m/%y at %H:%M';
$lastup_date_fmt = '%d %B, %Y';
$regişter_date_fmt = '%d %B, %Y';
$lasthit_date_fmt = '%d %B, %Y at %I:%M %p';
$comment_date_fmt = '%d %B, %Y at %I:%M %p';
// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'pizda', 'pula', 'sugi', 'coaie', 'cur', 'buci');

$lang_meta_album_names = array(
    'random' => 'Imagini în ordine aleatoare',
    'lastup' => 'Ultimele imagini adăugate',
    'lastupby' => 'Ultimele imagini adăugate de mine', // new 1.2.2
    'lastalb' => 'Ultimele albume actualizate',
    'lastcom' => 'Ultimele comentarii',
    'lastcomby' => 'Ultimele comentarii ale mele', // new 1.2.2
    'topn' => 'Cele mai vizitate',
    'toprated' => 'Cele mai apreciate',
    'lasthits' => 'Ultimele vizitate',
    'search' => 'Rezultatele căutării',
    'favpics' => 'Imaginile favorite'
    );

$lang_errors = array(
	'access_denied' => 'Nu aveţi dreptul să accesaţi această pagină.',
    'perm_denied' => 'Nu aveţi dreptul să efectuaţi această operaţie',
    'param_missing' => 'Scriptul a fost rulat fără parametrul - parametrii necesari.',
    'non_exist_ap' => 'Albumul/imaginea selectată nu există!',
    'quota_exceeded' => 'Cota dvs. a fost depaşităbr /><br />Aveţi o cotă pe disk de [quota]kB, pozele Dvs. ocupă acum [space]kB, adăugând această imagine veţi depăşi această cotă.',
    'gd_file_type_err' => 'Când folosiţi biblioteca GD tipurile de fişiere care pot fi folosite sunt JPEG şi PNG.',
    'invalid_image' => 'Imaginea încărcată de Dvs. este defectă sau nu poate fi prelucrată de biblioteca GD',
    'resize_failed' => 'Nu s-a putut crea pictograma sau imaginea redusă.',
    'no_img_to_display' => 'Nici o imagine de încărcat',
    'non_exist_cat' => 'Categoria selectată nu există',
    'orphan_cat' => 'O categorie are părintele inexistent, rulaţi managerul de categorii pentru a corectă problema.',
    'directory_ro' => 'Directorul \'%s\' nu poate fi scris, imaginile nu pot fi şterse',
    'non_exist_comment' => 'Comentariul selectat nu există.',
    'pic_in_invalid_album' => 'Imaginea este într-un album inexistent (%s)!?',
    'banned' => 'Sunteţi exclus de pe acest sit web.',
    'not_with_udb' => 'Această funcţie este blocată în modulul Coppermine deoarece este integrată în programul ce ruleaza forumul. Ce încercaţi să faceţi ori nu este suportat în această configuraţie, ori funcţia trebuie executată de programul ce rulează forumul.',
    'members_only' => 'Această funcţie este numai pentru membrii, vă rugăm înregistraţi-vă/logaţi-vă.', // changed în cpg1.2.0nuke
    'mustbe_god' => 'Această functia este numai pentru administratorii sitului. Trebuie să vă logaţi ca şi superadmin sau god pentru a accesa această funcţie',
    );
// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //
$lang_main_menu = array(
	'alb_list_title' => 'Lista albumelor',
    'alb_list_lnk' => 'Lista albumelor',
    'my_gal_title' => 'Galeria mea personală',
    'my_gal_lnk' => 'Galeria mea',
    'my_prof_lnk' => 'Profilul meu',
    'adm_mode_title' => 'Schimbaţi în modul administrator',
    'adm_mode_lnk' => 'Mod administrator',
    'usr_mode_title' => 'Schimbaţi în modul utilizator',
    'usr_mode_lnk' => 'Mod utilizator',
    'upload_pic_title' => 'Încărcaţi o imagine într-un album',
    'upload_pic_lnk' => 'Încărcaţi o imagine',
    'regişter_title' => 'Creaţi un cont',
    'regişter_lnk' => 'Înregistrare',
    'login_lnk' => 'Login',
    'logout_lnk' => 'Logout',
    'lastup_lnk' => 'Ultimele imagini încărcate',
    'lastcom_lnk' => 'Ultimele comentarii',
    'topn_lnk' => 'Cele mai afişate',
    'toprated_lnk' => 'Cele mai apreciate',
    'search_lnk' => 'Căutare',
    'fav_lnk' => 'Favoritele mele',
    );

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'Aprobarea înregistrări',
    'config_lnk' => 'Configurare',
    'albums_lnk' => 'Albume',
    'categories_lnk' => 'Categorii',
    'users_lnk' => 'Utilizatori',
    'groups_lnk' => 'Grupuri',
    'comments_lnk' => 'Comentarii',
    'searchnew_lnk' => 'Adăugaţi imagini în mod \'batch\'',
    'util_lnk' => 'Redimensionaţi imaginile',
    'ban_lnk' => 'Blocaţi utilizatori',
    );

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'Creaţi/ordonaţi albumele mele',
    'modifyalb_lnk' => 'Modificaţi albumele mele',
    'my_prof_lnk' => 'Profilul meu',
    );

$lang_cat_list = array(
	'category' => 'Categorie',
    'albums' => 'Albume',
    'pictures' => 'Imagini',
    );

$lang_album_list = array(
	'album_on_page' => '%d albume pe %d pagini'
    );

$lang_thumb_view = array(
	'date' => 'DATA',
    'name' => 'NUMELE FIŞIERULUI',
    'title' => 'TITLU',
    'sort_da' => 'Sortare după dată, ascendent',
    'sort_dd' => 'Sortare după dată, descendent',
    'sort_na' => 'Sortare după nume, ascendent',
    'sort_nd' => 'Sortare după nume, ascendent',
    'sort_ta' => 'Sortare după titlu, ascendent',
    'sort_td' => 'Sortare după titlu, ascendent',
    'pic_on_page' => '%d imagini pe %d pagini',
    'user_on_page' => '%d utilizatori pe %d pagini',
    'sort_ra' => 'Sortare după clasament, ascendent', // new în cpg1.2.0nuke
    'sort_rd' => 'Sortare după clasament, descendent', // new în cpg1.2.0nuke
    'rating' => 'CLASIFICARE', // new în cpg1.2.0nuke
    'sort_title' => 'Sortaţi imaginile după:', // new în cpg1.2.0nuke
    );

$lang_img_nav_bar = array(
	'thumb_title' => 'Înapoi la pagina cu pictograme',
    'pic_info_title' => 'Afişare/Ascundere informaţii despre imagine',
    'slideshow_title' => 'Diaporama',
    'slideshow_disabled' => 'Modul vedere electronică este dezactivat', // new în cpg1.2.0nuke
    'slideshow_disabled_msg' => $lang_errors['members_only'], // new în cpg1.2.0nuke
    'ecard_title' => 'Trimiteţi această imagine ca vedere electronică',
    'ecard_disabled' => 'vederile electronice sunt dezactivate',
    'ecard_disabled_msg' => 'Nu aveţi permisiunea să trimiteţi vederi electronice',
    'prev_title' => 'Afişaţi imaginea anterioară',
    'next_title' => 'Afişaţi imaginea următoare',
    'pic_pos' => 'IMAGINEA %s/%s',
    'no_more_images' => 'Nu mai sunt imagini în galerie', // new în cpg1.2.0nuke
    'no_less_images' => 'Aceasta este prima imagine din galerie', // new în cpg1.2.0nuke
    );

$lang_rate_pic = array(
	'rate_this_pic' => 'Apreciaţi această imagine ',
    'no_votes' => '(Nici un vot încă)',
    'rating' => '(aprecierea curentă : %s / 5 cu %s voturi)',
    'rubbish' => 'Nereuşită',
    'poor' => 'Slabă',
    'fair' => 'Acceptabilă',
    'good' => 'Bună',
    'excellent' => 'Excelentă',
    'great' => 'Nemaipomenită',
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
    CRITICAL_ERROR => 'Eroare critică',
    'file' => 'Fişier: ',
    'line' => 'Linie: ',
    );

$lang_display_thumbnails = array(
	'filename' => 'Nume fişier : ',
    'filesize' => 'Mărimea fişierului : ',
    'dimensions' => 'Dimensiuni : ',
    'date_added' => 'Data adăugării : '
    );

$lang_get_pic_data = array(
	'n_comments' => '%s comentarii',
    'n_views' => '%s afişări',
    'n_votes' => '(%s voturi)'
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
if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
	'Exclamation' => 'Exclamare',
    'Question' => 'Întrebare',
    'Very Happy' => 'Foarte bucuros',
    'Smile' => 'Zâmbeşte',
    'Sad' => 'Supărat',
    'Surprised' => 'Surprins',
    'Shocked' => 'Şocat',
    'Confused' => 'Confuz',
        'Cool' => 'Mişto',
        'Laughing' => 'Râzând',
        'Mad' => 'Nervos',
        'Razz' => 'Razz',
        'Embarassed' => 'Stânjenit',
        'Crying or Very sad' => 'Plângând sau foarte supărat',
        'Evil or Very Mad' => 'Rău sau foarte supărat',
        'Twisted Evil' => 'Nebun răutăcios',
        'Rolling Eyes' => 'Ochii rotitori',
        'Wink' => 'Clipire',
        'Idea' => 'Idee',
        'Arrow' => 'Săgeată',
        'Neutral' => 'Neutru',
        'Mr. Green' => 'Mr. Green',
        );
// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //
// void
// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) $lang_admin_php = array(
		0 => 'Părăsiţi modul administrator...',
        1 => 'Intraţi în modul administrator...',
        );
// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => 'Albumele trebuie să aibă un nume !',
    'confirm_modifs' => 'Sunteţi sigur că vreţi să faceţi aceste modificări ?',
    'no_change' => 'Nu aţi făcut nici o modificare !',
    'new_album' => 'Album nou',
    'confirm_delete1' => 'Sunteţi sigur că vreţi să ştergeţi acest album ?',
    'confirm_delete2' => '\nToate imaginile şi comentariile conţinute vor fi pierdute !',
    'select_first' => 'Selectaţi un album înainte',
    'alb_mrg' => 'Managerul de albume',
    'my_gallery' => '* Galeria mea *',
    'no_category' => '* Nici o categorie *',
    'delete' => 'Ştergeţi',
    'new' => 'Nou',
    'apply_modifs' => 'Efectuaţi modificările',
    'select_category' => 'Selectaţi o categorie',
        );
// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'Nu au fost stabiliţi parametrii necesari pentru operaţia \'%s\' !',
    'unknown_cat' => 'Categoria selectată nu există în baza de date',
    'usergal_cat_ro' => 'Categoria Galeria utilizatorului nu poate fi ştearsă !',
    'manage_cat' => 'Administraţi categoriile',
    'confirm_delete' => 'Sunteţi sigur că doriţi să ŞTERGEŢI această categorie',
    'category' => 'Categorie',
    'operations' => 'Operaţii',
    'move_into' => 'Mutaţi în',
    'update_create' => 'Modificaţi/Creaţi o categorie',
    'parent_cat' => 'Categoria părinte',
    'cat_title' => 'Titlul categoriei',
    'cat_desc' => 'Descrierea categoriei'
        );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
if (defined('CONFIG_PHP')) 
$lang_config_php = array(
	'title' => 'Configurare',
    'restore_cfg' => 'Reveniţi la setările implicite',
    'save_cfg' => 'Salvaţi noua configuraţie',
    'notes' => 'Notiţe',
    'info' => 'Informaţii',
    'upd_success' => 'Configuraţia Coppermine a fost mmodificată',
    'restore_success' => 'Configuraţia Coppermine implicită a fost restabilită',
    'name_a' => 'Nume ascendent',
    'name_d' => 'Nume descendent',
    'title_a' => 'Titlu ascendent',
    'title_d' => 'Titlu descendent',
    'date_a' => 'Data ascendentă',
    'date_d' => 'Data descendentă',
        'rating_a' => 'Clasificare ascendentă', // new în cpg1.2.0nuke
        'rating_d' => 'Clasificare descendentă', // new în cpg1.2.0nuke
        'th_any' => 'Max Aspect',
        'th_ht' => 'Înălţime',
        'th_wd' => 'Lăţime',
        );
// start left side interpretation
if (defined('CONFIG_PHP'))
    $lang_config_data = array(
        'Setări generale',
    	array('Numele galeriei', 'gallery_name', 0),
    	array('Descrierea galeriei', 'gallery_description', 0),
    	array('Adresa e-mail a administratorului', 'gallery_admin_e-mail', 0),
        array('Addresa directorului rădăcina a sitului de exemplu http://www.situl_meu.ro/html/', 'ecards_more_pic_target', 0), // new în cpg1.2.0nuke
    	array('Limba', 'lang', 5),
// for postnuke change
        array('Tema grafică', 'cpgtheme', 6),
        array('Titlurile specifice în pagină în loc de >Coppermine', 'nice_titles', 1),
        array('Afişaţi blocurile la dreapta', 'right_blocks', 1), // new 1.2.2
        'Lista cu albume',
        array('Lăţimea tabelului principal (pixeli sau %)', 'main_table_width', 0),
        array('Numărul de nivele de categorii care să fie afişate', 'subcat_level', 0),
        array('Numărul albumelor ce vor fi afişate', 'albums_per_page', 0),
        array('Numărul de coloane în lista de albume', 'album_list_cols', 0),
        array('Dimensiunea pictogramelor în pixeli', 'alb_list_thumb_size', 0),
        array('Conţinutul paginii principale', 'main_page_layout', 0),
        array('Afişaţi pictogramele albumelor din primul nivel în categorii', 'first_level', 1), 
        'Pictograme',
        array('Numărul de coloane pe pagina cu pictograme', 'thumbcols', 0),
        array('Numărul de rânduri pe pagina cu pictograme', 'thumbrows', 0),
        array('Maximul număr de taburi ce vor fi afişate', 'max_tabs', 0),
        array('Afişaţi descrierea imaginii (pe langă titlu) sub pictograma', 'caption_in_thumbview', 1),
        array('Afişaţi numărul de comentarii sub pictogramă', 'display_comment_count', 1),
        array('Ordinea implicită de sortare a imaginilor', 'default_sort_order', 3),
        array('Numărul minim de voturi pentru ca o imagine să apară în lista \'Cele mai apreciate\' ', 'min_votes_for_rating', 0),
        array('Alts and title tags of thumbnail show title and keyword instead of picinfo', 'seo_alts', 1), // new în cpg1.2.0nuke
        'Afişarea imaginii &amp; setările comentariilor',
        array('Lăţimea tabelului pentru afişarea imaginii (pixeli sau %)', 'picture_table_width', 0),
        array('Informaţiile despre imagine sunt vizibile în mod predefinit', 'display_pic_info', 1),
        array('Filtraţi cuvintele urâte în comentarii', 'filter_bad_words', 1),
        array('Permiteţi Smilies în comentarii', 'enable_smilies', 1),
        array('Permiteţi mai multe comentarii consecutive pentru o imagine de la acelaşi utilizator', 'disable_flood_protection', 1), // new în cpg1.2.0nuke
        array('Trimiteţi administratorului sitului un e-mail, la trimiterea de comentarii' , 'comment_e-mail_notification', 1), // new în cpg1.2.0nuke
        array('Lungimea maximă a descrierii imagini', 'max_img_desc_length', 0),
        array('Numărul maxim de caractere într-un cuvânt', 'max_com_wlength', 0),
        array('Numărul maxim de linii într-un comentariu', 'max_com_lines', 0),
        array('Lungimea maximă a unui comentariu', 'max_com_size', 0),
        array('Afişaţi ramă film', 'display_film_strip', 1),
        array('Numărul de obiecte în rama film', 'max_film_strip_items', 0),
        array('Permiteţi afişarea la dimensiunea originală, de către anonimi', 'allow_anon_fullsize', 1), // new în cpg1.2.0nuke
        array('Numărul de zile care trebuie să treacă pentru a putea vota din nou aceeaşi imagine','keep_votes_time',0), // new în cpg1.2.2c nuke
        'Setări pentru imagini şi pictograme',
        array('Calitatea fişierelor JPEG', 'jpeg_qual', 0),
        array('Dimensiunea maximă a unei pictograme <b>*</b>', 'thumb_width', 0),
        array('Utilizaţi dimensiunea (lăţime sau înălţime sau aspectul Maxim pentru pictogramă)<b>*</b>', 'thumb_use', 7),
        array('Creaţi imagini intermediare', 'make_intermediate', 1),
        array('Lăţimea sau înălţimea maximă a unei imagini intermediare <b>*</b>', 'picture_width', 0),
        array('Dimensiunea maximă a unei imagini (kB)', 'max_upl_size', 0),
        array('Lăţimea sau înălţimea maximă a imaginilor înregistrate (pixeli)', 'max_upl_width_height', 0), 
        'Setări pentru utilizatori',
        array('Permiteţi înregistrarea de noi utilizatori', 'allow_user_registraţion', 1),
        array('Înregistrarea utilizatorilor necesită înregistrarea prin e-mail', 'reg_requires_valid_e-mail', 1),
        array('Doi utilizatori pot avea aceeaşi adresa e-mail', 'allow_duplicate_e-mails_addr', 1),
        array('Utilizatorii pot avea albume private', 'allow_private_albums', 1),
        array('Arătaţi avatarul utilizatorului în loc de imaginea album privat', 'avatar_private_album', 1),
        'Descrierea câmpurilor adiţionale (lasaţi necompletat dacă nu le utilizaţi)',
        array('Numele câmpului 1', 'user_field1_name', 0),
        array('Numele câmpului 2', 'user_field2_name', 0),
        array('Numele câmpului 3', 'user_field3_name', 0),
        array('Numele câmpului 4', 'user_field4_name', 0), 
        'Setări avansate pentru imagini şi pictograme',
        array('Afişaţi iconiţa privat utilizatorilor neînregistraţi', 'show_private', 1),
        array('Caractere interzise în numele fişierelor', 'forbiden_fname_char', 0),
        array('Extensii acceptate pentru fişierele încărcate', 'allowed_file_extensions', 0),
        array('Metoda de redimensionare a imaginilor', 'thumb_method', 2),
        array('Calea către utilitarul ImageMagick / netpbm \'convert\' (de exemplu /usr/bin/X11/)', 'impath', 0),
        array('Tipuri de imagini permise (valabil numai pentru ImageMagick)', 'allowed_img_types', 0),
        array('Opţiuni în linia de comanda pentru ImageMagick', 'im_options', 0),
        array('Extrageţi informaţiile EXIF din fişierele JPEG', 'read_exif_data', 1),
        array('Extrageţi informaţiile IPTC din fişierele JPEG', 'read_iptc_data', 1), // new în cpg1.2.0nuke
        array('Directorul cu albume <b>*</b>', 'fullpath', 0),
        array('Directorul pentru imaginile utilizatorilor <b>*</b>', 'userpics', 0),
        array('Prefixul pentru imaginile intermediare <b>*</b>', 'normal_pfx', 0),
        array('Prefixul pentru pictograme <b>*</b>', 'thumb_pfx', 0),
        array('Modul implicit al directoarelor', 'default_dir_mode', 0),
        array('Modul implicit al imaginilor', 'default_file_mode', 0),
        array('Informaţii despre imagine - afişaţi numele fişierului', 'picinfo_display_filename', '1'), // new în cpg1.2.0nuke
        array('Informaţii despre imagine - afişaţi numele albumului', 'picinfo_display_album_name', '1'), // new în cpg1.2.0nuke
        array('Informaţii despre imagine - afişaţi dimensiunea fişierului', 'picinfo_display_file_size', '1'), // new în cpg1.2.0nuke
        array('Informaţii despre imagine - afişaţi dimensiunile imaginii', 'picinfo_display_dimensions', '1'), // new în cpg1.2.0nuke
        array('Informaţii despre imagine - afişaţi numărul de afişări al imaginii', 'picinfo_display_count_displayed', '1'), // new în cpg1.2.0nuke
        array('Informaţii despre imagine - afişaţi URL-ul', 'picinfo_display_URL', '1'), // new în cpg1.2.0nuke
        array('Informaţii despre imagine - afişaţi URL-ul ca şi un link marcator', 'picinfo_display_URL_bookmark', '1'), // new în cpg1.2.0nuke
        array('Informaţii despre imagine - afişaţi linkul către albumul favoprit', 'picinfo_display_favorites', '1'), // new în cpg1.2.0nuke
        'Cookie-uri &amp; Setări Charset',
        array('Numele cookie-ului utilizat de script', 'cookie_name', 0),
        array('Calea cookie-ului utilizat de script', 'cookie_path', 0),
        array('Character encoding', 'charset', 4), 
        'Setări diverse',
        array('Activaţi modul debug', 'debug_mode', 1),
        array('Activaţi modului debug avansat', 'advanced_debug_mode', 1), // new în cpg1.2.0nuke
		array('Arătaţi administratorilor atenţionarea: A apărut o versiune nouă pentru Coppermine', 'showupdate', 1), // new 1.2.2
	    '<br /><div align="center">(*) Câmpurile marcate cu * nu trebuiesc modificate dacă aveţi deja imagini în galeria Dvs.</div><br />'
        );
// end left side interpretation
// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) 
$lang_db_input_php =array(
		'empty_name_or_com' => 'Trebuie să introduceţi numele Dvs. şi un comentariu',
        'com_added' => 'Comentariul Dvs. a fost adăugat',
        'alb_need_title' => 'Trebuie să furnizaţi un titlu pentru album !',
        'no_udp_needed' => 'Nu este necesară nici o modificare.',
        'alb_updated' => 'Albumul a fost modificat',
        'unknown_album' => 'Albumul selectat nu există sau nu aveţi permisiunea să încărcaţi în acest album',
        'no_pic_uploaded' => 'Nici o imagine nu a fost încărcată !<br /><br />Dacă întradevăr aţi selectat o imagine, verificaţi dacă serverul permite uploaduri...',
        'err_mkdir' => 'Eroare la crearea directorului %s !',
        'dest_dir_ro' => 'Directorul destinaţie %s nu poate fi scris de către script !',
        'err_move' => 'Imposibil de mutat %s în %s !',
        'err_fsize_too_large' => 'Dimensiunea imaginii este prea mare (maximul permis este %s x %s) !',
        'err_imgsize_too_large' => 'Mărimea fişierului încărcat este prea mare (maximul permis este %s kB) !',
        'err_invalid_img' => 'Fişierul încărcat nu este o imagine validă !',
        'allowed_img_types' => 'Puteţi încărca doar %s imagini.',
        'err_insert_pic' => 'Imaginea \'%s\' nu poate fi inserată în album ',
        'upload_success' => 'Imaginea Dvs. a fost încărcată cu succes<br /><br />Va fi vizibilă după aprobarea administratorului.',
        'info' => 'Informaţii',
        'com_added' => 'Comentariu adăugat',
        'alb_updated' => 'Album modificat',
        'err_comment_empty' => 'Comentariul Dvs. este gol !',
        'err_invalid_fext' => 'Doar fişierele cu următoarele extensii sunt permise : <br /><br />%s.',
        'no_flood' => 'Ne pare rău dar sunteţi deja autorul ultimului comentariu publicat pentru această imagine<br /><br />Editaţi comentariul publicat dacă doriţi să-l modificaţi',
        'redirect_msg' => 'Sunteţi redirecţionat.<br /><br /><br />Click pe \'CONTINUARE\' dacă pagina nu se încarcă automat',
        'upl_success' => 'Imaginea Dvs. a fost adăugată cu succes',
        );
// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) $lang_delete_php = array(
		'caption' => 'Descriere',
        'fs_pic' => 'imaginea la dimensiuni maxime',
        'del_success' => 'ştearsă cu succes',
        'ns_pic' => 'imaginea de dimensiuni normale',
        'err_del' => 'nu poate fi ştearsă',
        'thumb_pic' => 'pictograma',
        'comment' => 'comentariul',
        'im_in_alb' => 'imaginea în album',
        'alb_del_success' => 'Albumul \'%s\' a fost şters',
        'alb_mgr' => 'Managerul de albume',
        'err_invalid_data' => 'Date nevalide primite în \'%s\'',
        'create_alb' => 'Creare album \'%s\'',
        'update_alb' => 'Modificare album \'%s\' cu titlul \'%s\' şi indexul \'%s\'',
        'del_pic' => 'Ştergeţi imaginea',
        'del_alb' => 'Ştergeţi albumul',
        'del_user' => 'Ştergeţi utilizatorul',
        'err_unknown_user' => 'Utilizatorul selectat nu există !',
        'comment_deleted' => 'Comentariul a fost şters cu succes',
        );
// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //
// Void
// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')) {
$lang_display_image_php = array(
		'confirm_del' => 'Sunteţi sigur că doriţi să STERGEŢI această imagine ? \\nComentariile vor fi de asemenea şterse.',
        'del_pic' => 'STERGEŢI ACEASTĂ IMAGINE',
        'size' => '%s x %s pixeli',
        'views' => '%s ori',
        'slideshow' => 'Diaporama',
        'stop_slideshow' => 'OPRIŢI DIAPORAMA',
        'view_fs' => 'Click pentru a vedea imaginea la dimensiuni originale',
        'edit_pic' => 'EDITAŢI INFORMAŢIILE IMAGINII', // new în cpg1.2.0nuke
        );

    $lang_picinfo = array('title' => 'Informaţii despre imagine',
        'Filename' => 'Nume fişier',
        'Album name' => 'Nume album',
        'Rating' => 'Apreciere (%s voturi)',
        'Keywords' => 'Cuvinte cheie',
        'File Size' => 'Dimensiune fişier',
        'Dimensions' => 'Dimensiune imagine',
        'Displayed' => 'Afişată',
        'Camera' => 'Camera',
        'Date taken' => 'Data fotografierii',
        'Aperture' => 'Apertura',
        'Exposure time' => 'Timp de expunere',
        'Focal length' => 'Distanţa focală',
        'Comment' => 'Comentariu',
        'addFav' => 'Adăugaţi în Favorite',
        'addFavPhrase' => 'Favorite',
        'remFav' => 'Ştergeţi din Favorite',
        'iptcTitle' => 'Titlul IPTC', // new în cpg1.2.0nuke
        'iptcCopyright' => 'IPTC Copyright', // new în cpg1.2.0nuke
        'iptcKeywords' => 'Cuvinte cheie în IPTC', // new în cpg1.2.0nuke
        'iptcCategory' => 'Categorii IPTC', // new în cpg1.2.0nuke
        'iptcSubCategories' => 'Sub-categorii IPTC', // new în cpg1.2.0nuke
        'bookmark_page' => 'Retineţi imaginea', // new în cpg1.2.0nuke
        );

    $lang_display_comments = array('OK' => 'OK',
        'edit_title' => 'Editaţi acest comentariu',
        'confirm_delete' => 'Sunteţi sigur că doriţi să ştergeţi acest comentariu ?',
        'add_your_comment' => 'Adăugaţi comentariul Dvs.',
        'name' => 'Nume',
        'comment' => 'Comentariu',
        'your_name' => 'Anonim',
        );

    $lang_fullsize_popup = array('click_to_close' => 'Dati click pe imagine pentru a inchide această fereastra',
        );
} 
// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //
$lang_ecard_php = array(
		'title' => 'Trimiteţi o vedere electronică',
        'invalid_e-mail' => '<b>Atentie</b> : adresa e-mail este incorectă !',
        'ecard_title' => 'O vedere electronică de la %s pentru Dvs.',
        'view_ecard' => 'Dacă vederea nu este afişată corect daţi click pe acest link',
        'view_more_pics' => 'Click aici pentru a vedea mai multe imagini !',
        'send_success' => 'Vederea Dvs. a fost trimisă',
        'send_failed' => 'Ne pare rău dar serverul nu poate trimite vederea Dvs...',
        'from' => 'De la',
        'your_name' => 'Numele Dvs.',
        'your_e-mail' => 'Adresa Dvs. e-mail',
        'to' => 'Către',
        'rcpt_name' => 'Numele adresantului',
        'rcpt_e-mail' => 'Adresa e-mail destinaţie',
        'greetings' => 'Bună ziua',
        'message' => 'Mesaj',
        );
// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //
if (defined('EDITPICS_PHP')) $lang_editpics_php = array('pic_info' => 'Picture&nbsp;info',
        'album' => 'Album',
        'title' => 'Titlu',
        'desc' => 'Descriere',
        'keywords' => 'Cuvinte cheie',
        'pic_info_str' => '%sx%s - %sKB - %s afişări - %s voturi',
        'approve' => 'Aprobaţi imaginea',
        'postpone_app' => 'Amânaţi aprobarea',
        'del_pic' => 'Ştergeţi imaginea',
        'read_exif' => 'Citiţi informaţiile EXIF din nou', // new în cpg1.2.0nuke
        'reset_view_count' => 'Resetaţi contorul afişărilor',
        'reset_votes' => 'Resetaţi contorul voturilor',
        'del_comm' => 'Ştergeţi comentariile',
        'upl_approval' => 'Aprobare încărcare',
        'edit_pics' => 'Editaţi imaginile',
        'see_next' => 'Afişaţi imaginile următoare',
        'see_prev' => 'Afişaţi imaginile anterioare',
        'n_pic' => '%s imagini',
        'n_of_pic_to_disp' => 'Numărul de imagini de afişat',
        'apply' => 'Aplicaţi modificările',
        );
// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array('group_name' => 'Numele grupului',
        'disk_quota' => 'Cota pe disc',
        'can_rate' => 'Poate aprecia imaginile',
        'can_send_ecards' => 'Poate trimite vederi',
        'can_post_com' => 'Poate publica comentarii',
        'can_upload' => 'Poate încărca imagini',
        'can_have_gallery' => 'Poate avea o galerie personală',
        'apply' => 'Executaţi modificările',
        'create_new_group' => 'Creaţi un grup nou',
        'del_groups' => 'Ştergeţi grupul/grupurile selectat(e)',
        'confirm_del' => 'Atenţie, când ştergeţi un grup, utilizatorii aparţinând acestui grup vor fi transferaţi în grupul \'Înregistraţi\' !\n\nSunteţi sigur că doriţi să continuaţi?',
        'title' => 'Administare grupuri de utilizatori',
        'approval_1' => 'Aprobare Înreg. Pub. (1)',
        'approval_2' => 'Aprobare Înreg. Priv. (2)',
        'note1' => '<b>(1)</b> Încărcarea într-un album public necesită aprobarea administratorului',
        'note2' => '<b>(2)</b> Încărcarea într-un album apartinand utilizatorului necesită aprobarea administratorului',
        'notes' => 'Notiţe'
        );
// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')) {
    $lang_index_php = array(
	'welcome' => 'Bine aţi venit !'
        );

    $lang_album_admin_menu = array(
		'confirm_delete' => 'Sunteţi sigur că doriţi să STERGEŢI acest album ? \\nToate imaginile şi comentariile conţinute vor fi şterse de asemenea.',
        'delete' => 'STERGEŢI',
        'modify' => 'PROPRIETĂŢI',
        'edit_pics' => 'EDITARE IMAGINI',
        );

    $lang_list_categories = array(
		'home' => 'Pagina principală',
        'stat1' => '<b>[pictures]</b> imagini în <b>[albums]</b> albume şi <b>[cat]</b> categorii cu <b>[comments]</b> comentarii afişate de <b>[views]</b> ori',
        'stat2' => '<b>[pictures]</b> imagini în <b>[albums]</b> albume afişate de <b>[views]</b> ori',
        'xx_s_gallery' => '%s\'s Galerie',
        'stat3' => '<b>[pictures]</b> imagini în <b>[albums]</b> albume cu <b>[comments]</b> comentarii afişate de <b>[views]</b> ori'
        );
    $lang_list_users = array(
		'user_list' => 'Lista utilizatorilor',
        'no_user_gal' => 'Nu există galerii ale utilizatorilor',
        'n_albums' => '%s album(e)',
        'n_pics' => '%s imagini'
        );

    $lang_list_albums = array('n_pictures' => '%s imagini',
        'last_added' => ', ultima adăugată la %s'
        );
} 
// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
// NULL
// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //
// NULL
// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
'upd_alb_n' => 'Modificaţi album %s',
        'general_settings' => 'Setări generale',
        'alb_title' => 'Titlu album',
        'alb_cat' => 'Categoria albumului',
        'alb_desc' => 'Descrierea albumului',
        'alb_thumb' => 'Pictograma albumului',
        'alb_perm' => 'Permisiile acestui album',
        'can_view' => 'Albumul poate fi văzut de',
        'can_upload' => 'Vizitatorii pot încărca imagini',
        'can_post_comments' => 'Vizitatorii pot posta comentarii',
        'can_rate' => 'Vizitatorii pot aprecia imaginile',
        'user_gal' => 'Galeria utilizatorului',
        'no_cat' => '* Nici o categorie *',
        'alb_empty' => 'Albumul este gol',
        'last_uploaded' => 'Ultimile încărcate',
        'public_alb' => 'Toată lumea (album public)',
        'me_only' => 'Doar eu',
        'owner_only' => 'Proprietarul albumul doar (%s)',
        'groupp_only' => 'Membrii grupului \'%s\'',
        'err_no_alb_to_modify' => 'Nu există nici un album pe care să îl puteţi modifica, în baza de date.',
        'update' => 'Modificaţi album'
        );
// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) 
$lang_rate_pic_php = array(
    'already_rated' => 'Ne pare rău dar Dvs. aţi votat-clasificat deja acestă imagine',
        'rate_ok' => 'Votul Dvs. a fost acceptat',
        );
// ------------------------------------------------------------------------- //
// File regişter.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
    $lang_regişter_disclamer = <<<EOT
Deşi administratorii paginii {SITE_NAME} vor încerca să şteargă sau să editeze orice material nepermis sau obscen cât de repede cu putinţă, este imposibil să fie verificat fiecare mesaj sau comentariu. De aceea sunteţi de acord că toate mesajele postate pe acest sit exprimă opiniile autorului şi nu ale administratorilor (exceptând mesajele transmise de ei) şi deci nu pot fi traşi la răspundere.<br />
<br />
Sunteţi de acord să nu postaţi nici un mesaj obscen, vulgar, ameninţător, cu orientare sexuală sau orice alt mesaj ce încalcă legile. Sunteţi de acord că administratorul şi moderatorii sitului {SITE_NAME} au dreptul să modifice sau să şteargă orice conţinut oricând consideră ei necesar. Ca utilizator sunteţi de acord că orice informaţie introdusă mai sus va fi stocată într-o bază de date. Deşi această informaţie nu va fi oferită unei terţe părţi administratorii nu pot fi făcuţi responsabili în cazul unei accesări forţate, ilegale a bazei de date ce ar duce la compromiterea acesteia. <br />
<br />
Acest sit foloseşte cookie-uri pentru a stoca informaţii pe computerul Dvs. Acestea servesc doar la buna funcţionare a sitului. Adresa Dvs. e-mail este folosită doar pentru a verifica parola şi procesul de înregistrare. <br />
<br />
Dând click pe butonul 'Sunt de acord' de mai jos sunteţi de acord să respectaţi şi acceptaţi condiţiile de mai sus.
EOT;

    $lang_regişter_php = array('page_title' => 'Înregistrare utilizator',
        'term_cond' => 'Termeni şi condiţii',
        'i_agree' => 'Sunt de acord',
        'submit' => 'Trimiteţi datele',
        'err_user_exists' => 'Numele utilizator ales există deja, va rugăm să alegeţi altul',
        'err_password_mismatch' => 'Cele două parole nu sunt identice, vă rugăm să le introduceţi din nou',
        'err_uname_short' => 'Numele utilizator trebuie să aibă minim 2 caractere',
        'err_password_short' => 'Parola trebuie să aibă minim 2 caractere',
        'err_uname_pass_diff' => 'Numele utilizator şi parola trebuie să fie diferite',
        'err_invalid_e-mail' => 'Adresa e-mail este incorectă',
        'err_duplicate_e-mail' => 'Alt utilizator este înregistrat deja cu această adresă e-mail',
        'enter_info' => 'Introduceţi datele pentru înregistrare',
        'required_info' => 'Informaţii obligatorii',
        'optional_info' => 'Informaţii opţionale',
        'username' => 'Utilizator',
        'password' => 'Parola',
        'password_again' => 'Confirmaţi parola',
        'e-mail' => 'E-mail',
        'location' => 'Locaţie',
        'interests' => 'Domenii de interese',
        'website' => 'Pagina web',
        'occupation' => 'Ocupaţie',
        'error' => 'EROARE',
        'confirm_e-mail_subject' => '%s - Confirmarea înregistrării',
        'information' => 'Informaţii',
        'failed_sending_e-mail' => 'Mesajul de confirmare a înregistrarii nu poate fi trimis !',
        'thank_you' => 'Vă mulţumim pentru că v-aţi înregistrat.<br /><br /> A fost trimis la adresa e-mail specificată un e-mail conţinând informaţii despre cum să activaţi contul Dvs.',
        'acct_created' => 'Contul Dvs. a fost creat şi vă puteţi loga cu numele de utilizator şi parola Dvs.',
        'acct_active' => 'Contul Dvs. este acum activ şi vă puteţi loga cu numele de utilizator şi parola Dvs.',
        'acct_already_act' => 'Contul Dvs. este deja activ!',
        'acct_act_failed' => 'Acest cont nu poate fi activat!',
        'err_unk_user' => 'Utilizatorul selectat nu există!',
        'x_s_profile' => 'Profilul lui %s',
        'group' => 'Grup',
        'reg_date' => 'Înregistrat la',
        'disk_usage' => 'Utilizare disc',
        'change_pass' => 'Schimbare parolă',
        'current_pass' => 'Parola curentă',
        'new_pass' => 'Parola nouă',
        'new_pass_again' => 'Reintroduceţi parola nouă',
        'err_curr_pass' => 'Parola curentă este incorectă',
        'apply_modif' => 'Executaţi modificările',
        'change_pass' => 'Schimbaţi parola mea',
        'update_success' => 'Profilul Dvs. a fost modificat',
        'pass_chg_success' => 'Parola Dvs. a fost schimbată',
        'pass_chg_error' => 'Parola Dvs. nu a fost schimbată',
        );

    $lang_regişter_confirm_email = <<<EOT
Va multumim că v-aţi înregistrat la {SITE_NAME}

Numele de utilizator al Dvs. este : "{USER_NAME}"
Parola Dvs. este : "{PASSWORD}"

Pentru a activa contul Dvs. vă rugăm să daţi click pe legătura de mai jos
sau copy and paste în browserul Dvs.

{ACT_LINK}

Numai bine,

Administratorii de la {SITE_NAME}

EOT;
} 
// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array('title' => 'Revizuire comentarii',
        'no_comment' => 'Nu există comentarii care să fie revizuite',
        'n_comm_del' => '%s comentarii şterse',
        'n_comm_disp' => 'Numărul de comentarii de afişat',
        'see_prev' => 'Afişaţi anteriorul',
        'see_next' => 'Afişaţi următorul',
        'del_comm' => 'Ştergeţi comentariile selectate',
        );
// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //
// if (defined('SEARCH_PHP'))
    $lang_search_php = array(0 => 'Căutaţi în colecţia de imagini',
        );
// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
'page_title' => 'Căutaţi imagini noi',
        'select_dir' => 'Selectaţi directorul',
        'select_dir_msg' => 'Această funcţie vă permite să adăugaţi mai multe imagini o dată, imagini încărcate de Dvs. pe server prin FTP.<br /><br />Selectaţi directorul unde aţi încărcat imaginile',
        'no_pic_to_add' => 'Nu există nici o imagine de adăugat',
        'need_one_album' => 'Aveţi nevoie de cel puţin un album pentru a folosi această funcţie',
        'warning' => 'Atenţie',
        'change_perm' => 'scriptul nu poate scrie în acest director, trebuie să schimbaţi modul la 755 sau 777 înainte de a încerca să adăugaţi imaginile !',
        'target_album' => '<b>Puneţi imaginile din &quot;</b>%s<b>&quot; în </b>%s',
        'folder' => 'Director',
        'image' => 'Imagine',
        'album' => 'Album',
        'result' => 'Rezultat',
        'dir_ro' => 'Nu poate fi scris. ',
        'dir_cant_read' => 'Nu poate fi citit. ',
        'insert' => 'Adăugaţi imagini noi în galerie',
        'list_new_pic' => 'Lista noilor imagini',
        'insert_selected' => 'Inseraţi imaginile selectate',
        'no_pic_found' => 'Nu a fost gasită nici o imagine nouă',
        'be_patient' => 'Vă rugăm asteptaţi, scriptul necesită timp pentru a procesa imaginile',
        'notes' => '<ul>' . '<li><b>OK</b> : înseamnă că imaginea a fost adăugată cu succes' . '<li><b>DP</b> : înseamnă că imaginea este un duplicat şi există deja în baza de date' . '<li><b>PB</b> : înseamnă că imaginea nu a putut fi adăugată, verificaţi configuraţia şi permisiile directoarelor unde sunt stocate imaginile' . '<li>Dacă \'semnele\' OK, DP, PB nu apar, daţi click pe iconiţa de imagine defectă pentru a verifica mesajele de eroare produse de PHP' . '<li>Dacă browserul Dvs. raporteaza \'timeout\', apasaţi butonul de reîncărcare a paginii' . '</ul>',
        'select_album' => 'Selectaţi albumul', // new în nuke
        'no_album' => 'Nu s-a selectat nici un album, întoarceţi-vă şi selectaţi un album unde doriţi să vă puneţi imaginile.',
        );
// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //
// Void
// ------------------------------------------------------------------------- //
// File banning.php  not used în cpg1.2.0-nuke   //
// ------------------------------------------------------------------------- //
// Void
// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //
if (defined('UPLOAD_PHP')) $lang_upload_php = array('title' => 'Incarcaţi o imagine',
        'max_fsize' => 'Dimensiunea maximă a fişierului este %s kB',
        'album' => 'Album',
        'picture' => 'Imagine',
        'pic_title' => 'Titlul imaginii',
        'description' => 'Descrierea imaginii',
        'keywords' => 'Cuvinte cheie (separate cu spaţii)',
        'err_no_alb_uploadables' => 'Ne pare rău, dar nu există nici un album unde puteţi încărca imagini',
        );
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
'title' => 'Administrare utilizatori',
        'name_a' => 'Nume ascendent',
        'name_d' => 'Nume descendent',
        'group_a' => 'Grup ascendent',
        'group_d' => 'Grup descendent',
        'reg_a' => 'Data înregistrării ascendent',
        'reg_d' => 'Data înregistrării descendent',
        'pic_a' => 'Număr imagini ascendent',
        'pic_d' => 'Număr imagini descendent',
        'disku_a' => 'Utilizare spaţiu ascendent',
        'disku_d' => 'Utilizare spaţiu descendent',
        'sort_by' => 'Sortaţi utilizatorii după',
        'err_no_users' => 'Tabelul cu utilizatori este gol !',
        'err_edit_self' => 'Nu puteti edita propriul profil. Folosiţi optiunea \'Profilul meu\' pentru aceasta',
        'edit' => 'EDITAŢI',
        'delete' => 'ŞTERGEŢI',
        'name' => 'Nume utilizator',
        'group' => 'Grup',
        'inactive' => 'Inactiv',
        'operations' => 'Operaţii',
        'pictures' => 'Imagini',
        'disk_space' => 'Spaţiu utilizat / Cota',
        'regiştered_on' => 'Înregistrat la',
        'u_user_on_p_pages' => '%d utilizatori pe %d pagini',
        'confirm_del' => 'Sunteţi sigur că doriţi să STERGEŢI acest utilizator ? \\nToate imaginile şi albumele sale vor fi de asemenea şterse',
        'mail' => 'POŞTA',
        'err_unknown_user' => 'Utilizatorul selectat nu există !',
        'modify_user' => 'Modificaţi utilizatorul',
        'notes' => 'Notiţe',
        'note_list' => '<li>Dacă nu doriţi să schimbaţi parola, lăsaţi câmpurile "Parola" libere',
        'password' => 'Parola',
        'user_active' => 'Utilizatorul este activ',
        'user_group' => 'Grup utilizatori',
        'user_e-mail' => 'E-mail',
        'user_web_site' => 'Pagina web',
        'create_new_user' => 'Creaţi utilizator nou',
        'user_from' => 'Locaţie',
        'user_interests' => 'Domenii de interes',
        'user_occ' => 'Ocupaţie',
        );
// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) $lang_util_php = array('title' => 'Redimensionaţi imagini',
        'what_it_does' => 'Ce face',
        'what_update_titles' => 'Modificaţi titlurile după numele fişier',
        'what_delete_title' => 'Ştergeţi titlurile',
        'what_rebuild' => 'Reconstruiţi pictogramele şi imaginile intermediare',
        'what_delete_originals' => 'Ştergeţi imaginile cu dimensiunea initială, înlocuindu-le cu cele redimensionate',
        'file' => 'Fişier',
        'title_set_to' => 'titlu setat ca',
        'submit_form' => 'trimiteţi',
        'updated_succesfully' => 'modificarea s-a făcut cu succes',
        'error_create' => 'EROARE creare',
        'continue' => 'Procesaţi mai multe imagini',
        'main_success' => 'Fişierul %s a fost folosit cu succes ca imagine principală',
        'error_rename' => 'Eroare redenumire %s cu %s',
        'error_not_found' => 'Fişierul %s nu a fost găsit',
        'back' => 'înapoi la principal',
        'thumbs_wait' => 'Modificare pictograme şi/sau imagini intermediare, vă rugăm asteptaţi...',
        'thumbs_continue_wait' => 'Continuare modificare pictograme şi/sau imaginile intermediare...',
        'titles_wait' => 'Modificare titluri, vă rugăm aşteptaţi...',
        'delete_wait' => 'Ştergere titluri, va rugăm aşteptaţi...',
        'replace_wait' => 'Ştergere originale şi înlocuire ce versiunile redimensionate, va rugăm aşteptaţi...',
        'instruction' => 'Instrucţiuni rapide',
        'instruction_action' => 'Selectaţi o acţiune',
        'instruction_parameter' => 'Setaţi parametrii',
        'instruction_album' => 'Selectaţi album',
        'instruction_press' => 'Apăsaţi %s',
        'update' => 'Modificaţi pictograme şi/sau imagini intermediare',
        'update_what' => 'Ce trebuie modificat',
        'update_thumb' => 'Doar pictograme',
        'update_pic' => 'Doar imaginile intermediare',
        'update_both' => 'Amândouă',
        'update_number' => 'Numărul de imagini procesate per click',
        'update_option' => '(Încercaţi o setare mai mică dacă primiţi timeout-uri)',
        'filename_title' => 'Nume fişier &rArr; Titlu imagine',
        'filename_how' => 'Cum trebuie modificat titlul',
        'filename_remove' => 'Eliminaţi .jpg din final şi înlocuiţi _ (liniuta de subliniere) cu spaţii',
        'filename_euro' => 'Schimbaţi 2003_11_23_13_20.jpg cu 23/11/2003 13:20',
        'filename_us' => 'Schimbaţi 2003_11_23_13_20.jpg cu 11/23/2003 13:20',
        'filename_time' => 'Schimbaţi 2003_11_23_13_20.jpg cu 13:20',
        'delete' => 'Ştergeţi titlurile sau imaginile originale',
        'delete_title' => 'Ştergeţi titlurile imaginilor',
        'delete_original' => 'Ştergeţi imaginile originale',
        'delete_replace' => 'Ştergeţi originalele, înlocuindu-le cu versiunile redimensionate',
        'select_album' => 'Selectaţi album',
        );
// ------------------------------------------------------------------------- //
// File pagetitle.inc.php
// ------------------------------------------------------------------------- //
$lang_pagetitle_php = array(   
'divider' => '>',
    'viewing' => 'Afişare imagini',
    'usr' => 'are următoarea galerie foto',
    'photogallery' => 'Galerie foto',
    );

?>
