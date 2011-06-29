<?php 
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.2.2   nuke - Language Pack 0.93                //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003  GrÃ©gory DEMAR <gdemar@wanadoo.fr>               //
// http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
// Based on PHPhotoalbum by Henning StÃ¸verud <henning@stoverud.com>         //
// http://www.stoverud.com/PHPhotoalbum/                                    //
// ------------------------------------------------------------------------- //
// Hacked by Tarique Sani <tarique@sanisoft.com> and Girsh Nair             //
// <girish@sanisoft.com> see http://www.sanisoft.com/cpg/README.txt for     //
// details                                                                  //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify     //
// it under the terms of the GNU General Public License as published by     //
// the Free Software Foundation; either version 2 of the License, or        //
// (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //
// info about translators and translated language
define('PIC_VIEWS', 'Viste');
define('PIC_VOTES', 'Voti');
define('PIC_COMMENTS', 'Commenti');

$lang_translation_info = array(
    'lang_name_english' => 'Italian', // the name of your language in English, e.g. 'Greek' or 'Spanish'
    'lang_name_native' => 'Italiano', // the name of your language in your mother tongue (for non-latin alphabets, use unicode), e.g. '&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940;' or 'Espa&ntilde;ol'
    'lang_country_code' => 'it', // the two-letter code for the country your language is most-often spoken (refer to http://www.iana.org/cctld/cctld-whois.htm), e.g. 'gr' or 'es'
    'trans_name' => 'ralf57', // the name of the translator - can be a nickname
    'trans_email' => '(CPG 1.1) greatkingrat@katamail.com', // translator's email address (optional)
    'trans_website' => 'http://www.madeinbanzi.it/', // translator's website (optional)
    'trans_name2' => '(CPG 1.2) Sesto Avolio', // the name of the translator - can be a nickname
    'trans_email2' => 'webmaster@eolica.net', // translator's email address (optional)
    'trans_website2' => 'http://www.eolica.net/', // translator's website (optional)
    'trans_date' => '2003-11-05', // the date the translation was created / last modified
    );

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');
// Day of weeks and months
$lang_day_of_week = array('Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab');
$lang_month = array('Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic');
// Some common strings
$lang_yes = 'Si';
$lang_no = 'No';
$lang_back = 'INDIETRO';
$lang_continue = 'CONTINUA';
$lang_info = 'Informazione';
$lang_error = 'Errore';
// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt = '%d %B %Y';
$lastcom_date_fmt = '%d/%m/%y alle %H:%M';
$lastup_date_fmt = '%d %B %Y';
$register_date_fmt = '%d %B %Y';
$lasthit_date_fmt = '%d %B %Y alle %I:%M %p';
$comment_date_fmt = '%d %B %Y alle %I:%M %p';
// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array('random' => 'Immagini...a casaccio',
    'lastup' => 'Ultimi arrivi',
    'lastupby' => 'My Last Additions', // new 1.2.2
    'lastalb' => 'Ultimi aggiornamenti albums',
    'lastcom' => 'Ultimi commenti',
    'lastcomby' => 'My Last comments', // new 1.2.2
    'topn' => 'Le piÃ¹ viste',
    'toprated' => 'Le piÃ¹ votate',
    'lasthits' => 'Viste di recente',
    'search' => 'Risultati della ricerca',
    'favpics' => 'Immagini Preferite'
    );

$lang_errors = array('access_denied' => 'Non puoi accedere a questa pagina.',
    'perm_denied' => 'Non puoi effettuare questa operazione.',
    'param_missing' => 'Script eseguito senza i parametri richiesti.',
    'non_exist_ap' => 'Immagine/album selezionato non presente nel database !',
    'quota_exceeded' => 'Quota disco superata<br /><br />Hai a disposizione [quota]K, attualmente utilizzi [space]K, una ulteriore immagine farebbe superare la quota.',
    'gd_file_type_err' => 'Le librerie GD supportano solo i formati JPEG and PNG.',
    'invalid_image' => 'Immagine corrotta o non supportata dalla libreria GD',
    'resize_failed' => 'Non posso creare le miniature e le immagini intermedie.',
    'no_img_to_display' => 'Nessuna immagine disponibile',
    'non_exist_cat' => 'La categoria selezionata non esiste',
    'orphan_cat' => 'Una categoria non Ã¨ legata, correggi il problema col Manager Categorie.',
    'directory_ro' => 'La directory \'%s\' Ã¨ protetta in scrittura, le immagini non possono essere cancellate',
    'non_exist_comment' => 'Il commento selezionato non esiste.',
    'pic_in_invalid_album' => 'Immagine appartenente ad un album inesistente (%s)!?',
    'banned' => 'Sei stato bannato e non puoi usare questo sito.',
    'not_with_udb' => 'Questa funzione Ã¨ disabilitata in Coppermine perchÃ© Ã¨ integrata con il software del forum. CiÃ² che stai cercando di fare non Ã¨ supportato in questa configurazione, oppure questa funzione dovrebbe essere gestita dal software del forum.',
    'members_only' => 'Questa funzione Ã¨ solo per utenti registrati, registrati.', // changed in cpg1.2.0nuke
    'mustbe_god' => 'Questa funzione Ã¨ solo per per l\'Amministratore. Devi entrar come superadmin, account god per accedere a questa funzione'
    );
// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //
$lang_main_menu = array('alb_list_title' => 'Vai alla lista degli album',
    'alb_list_lnk' => 'Lista album',
    'my_gal_title' => 'Vai alla galleria personale',
    'my_gal_lnk' => 'Galleria personale',
    'my_prof_lnk' => 'Il mio profilo',
    'adm_mode_title' => 'Passa in modalitÃ  admin',
    'adm_mode_lnk' => 'ModalitÃ  admin',
    'usr_mode_title' => 'Passa in modalitÃ  utente',
    'usr_mode_lnk' => 'ModalitÃ  utente',
    'upload_pic_title' => 'Aggiungi una immagine',
    'upload_pic_lnk' => 'Aggiungi immagine',
    'register_title' => 'Crea un account',
    'register_lnk' => 'Registrati',
    'login_lnk' => 'Login',
    'logout_lnk' => 'Logout',
    'lastup_lnk' => 'Ultimi arrivi',
    'lastcom_lnk' => 'Ultimi commenti',
    'topn_lnk' => 'Le piÃ¹ viste',
    'toprated_lnk' => 'Le piÃ¹ votate',
    'search_lnk' => 'Cerca',
    'fav_lnk' => 'I miei Preferiti',

    );

$lang_gallery_admin_menu = array('upl_app_lnk' => 'Approva uploads',
    'config_lnk' => 'Configura',
    'albums_lnk' => 'Albums',
    'categories_lnk' => 'Categorie',
    'users_lnk' => 'Utenti',
    'groups_lnk' => 'Gruppi',
    'comments_lnk' => 'Commenti',
    'searchnew_lnk' => 'Aggiungi immagini',
    'util_lnk' => 'UtilitÃ ',
    'ban_lnk' => 'Banna Utenti',
    );

$lang_user_admin_menu = array('albmgr_lnk' => 'Crea / ordina albums personali',
    'modifyalb_lnk' => 'Modifica albums personali',
    'my_prof_lnk' => 'Il mio profilo',
    );

$lang_cat_list = array('category' => 'Gallerie',
    'albums' => 'Albums',
    'pictures' => 'Immagini',
    );

$lang_album_list = array('album_on_page' => '%d albums in %d pagine'
    );

$lang_thumb_view = array('date' => 'DATA', 
    // Sort by filename and title
    'name' => 'NOME FILE',
    'title' => 'TITOLO',
    'sort_da' => 'Ordina per data ascendente',
    'sort_dd' => 'Ordina per data discendente',
    'sort_na' => 'Ordina per nome ascendente',
    'sort_nd' => 'Ordina per nome discendente',
    'sort_ta' => 'Ordina per titolo ascendente',
    'sort_td' => 'Ordina per titolo discendente',
    'pic_on_page' => '%d immagini in %d pagine',
    'user_on_page' => '%d utenti in %d pagine',
    'sort_ra' => 'Ordina per punteggio ascendente', // new in cpg1.2.0nuke
    'sort_rd' => 'Ordina per punteggio discendente', // new in cpg1.2.0nuke
    'rating' => 'PUNTEGGIO', // new in cpg1.2.0nuke
    'sort_title' => 'Ordina immagini per:', // new in cpg1.2.0nuke
    );

$lang_img_nav_bar = array('thumb_title' => 'Torna alle miniature',
    'pic_info_title' => 'Mostra/Nascondi info immagine',
    'slideshow_title' => 'Slideshow',
    'slideshow_disabled' => 'le e-cards sono disabilitate', // new in cpg1.2.0nuke
    'slideshow_disabled_msg' => $lang_errors['members_only'], // new in cpg1.2.0nuke
    'ecard_title' => 'Invia questa immagine come e-card',
    'ecard_disabled' => 'e-cards disabilitate',
    'ecard_disabled_msg' => 'Non puoi inviare ecards',
    'prev_title' => 'Immagine precedente',
    'next_title' => 'Immagine successiva',
    'pic_pos' => 'IMMAGINE %s/%s',
    'no_more_images' => 'Non ci sono altre immagini in questa galleria', // new in cpg1.2.0nuke
    'no_less_images' => 'Questa Ã¨ la prima immagine della galleria', // new in cpg1.2.0nuke
    );

$lang_rate_pic = array('rate_this_pic' => 'Vota questa immagine',
    'no_votes' => '(Ancora nessun voto)',
    'rating' => '(media attuale : %s / 5 con %s voti)',
    'rubbish' => 'Scadente',
    'poor' => 'Mediocre',
    'fair' => 'Sufficiente',
    'good' => 'Buona',
    'excellent' => 'Eccellente',
    'great' => 'Grande',
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
    CRITICAL_ERROR => 'Errore critico',
    'file' => 'File: ',
    'line' => 'Linea: ',
    );

$lang_display_thumbnails = array('filename' => 'Nome del file : ',
    'filesize' => 'Dimensione file : ',
    'dimensions' => 'Dimensioni : ',
    'date_added' => 'Aggiunta il : '
    );

$lang_get_pic_data = array('n_comments' => '%s commenti',
    'n_views' => '%s viste',
    'n_votes' => '(%s voti)'
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
if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array('Exclamation' => 'Esclamazione',
        'Question' => 'Dubbio',
        'Very Happy' => 'Molto felice',
        'Smile' => 'Sorriso',
        'Sad' => 'Triste',
        'Surprised' => 'Sorpresa',
        'Shocked' => 'Shockato',
        'Confused' => 'Confuso',
        'Cool' => 'Figo',
        'Laughing' => 'Sorridente',
        'Mad' => 'Matto',
        'Razz' => 'Razz',
        'Embarassed' => 'Imbarazzato',
        'Crying or Very sad' => 'Molto triste',
        'Evil or Very Mad' => 'Cattivo',
        'Twisted Evil' => 'Molto cattivo',
        'Rolling Eyes' => 'Occhi fuori orbita',
        'Wink' => 'Wink',
        'Idea' => 'Idea',
        'Arrow' => 'Freccia',
        'Neutral' => 'Neutro',
        'Mr. Green' => 'Mr. Green',
        );
// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //
// void
// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) $lang_admin_php = array(0 => 'Lascio la modalitÃ  admin...',
        1 => 'Entro in modalitÃ  admin...',
        );
// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) $lang_albmgr_php = array('alb_need_name' => 'Ogni album deve avere un nome !',
        'confirm_modifs' => 'Applico davvero le modifiche?',
        'no_change' => 'Non hai fatto alcuna modifica !',
        'new_album' => 'Nuovo album',
        'confirm_delete1' => 'Cancello davvero questo album ?',
        'confirm_delete2' => '\nTutte le immagini ed i commenti andranno persi !',
        'select_first' => 'Prima scegli un album',
        'alb_mrg' => 'Album Manager',
        'my_gallery' => '* Galleria personale *',
        'no_category' => '* Nessuna categoria *',
        'delete' => 'Cancella',
        'new' => 'Nuova',
        'apply_modifs' => 'Applica le modifiche',
        'select_category' => 'Seleziona categoria',
        );
// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) $lang_catmgr_php = array('miss_param' => 'Parametri necessari per \'%s\'operazione non forniti !',
        'unknown_cat' => 'La categoria scelta non Ã¨ nel database',
        'usergal_cat_ro' => 'La categoria delle gallerie personali non puÃ² essere cancellata !',
        'manage_cat' => 'Gestisci categorie',
        'confirm_delete' => 'Vuoi davvero cancellare questa categoria?',
        'category' => 'Categoria',
        'operations' => 'Operazioni',
        'move_into' => 'Sposta in',
        'update_create' => 'Aggiorna/Crea categoria',
        'parent_cat' => 'Categoria superiore',
        'cat_title' => ' Titolo categoria',
        'cat_desc' => 'Descrizione categoria'
        );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
if (defined('CONFIG_PHP')) $lang_config_php = array('title' => 'Configurazione',
        'restore_cfg' => 'Ripristina impostazioni di default',
        'save_cfg' => 'Salva la nuova configurazione',
        'notes' => 'Note',
        'info' => 'Informazione',
        'upd_success' => 'Configurazione aggiornata',
        'restore_success' => 'Configurazione di default ripristinata',
        'name_a' => 'Nome ascendente',
        'name_d' => 'Nome discendente',
        'title_a' => 'Titolo ascendente',
        'title_d' => 'Titolo discendente',
        'date_a' => 'Data ascendente',
        'date_d' => 'Data discendente',
        'rating_a' => 'Punteggio ascendente', // new in cpg1.2.0nuke
        'rating_d' => 'Punteggio discendente', // new in cpg1.2.0nuke
        'th_any' => 'Dimensione maggiore',
        'th_ht' => 'Altezza',
        'th_wd' => 'Larghezza'
        );

if (defined('CONFIG_PHP')) $lang_config_data = array('Impostazioni generali',
        array('Nome galleria', 'gallery_name', 0),
        array('Descrizione galleria', 'gallery_description', 0),
        array('Email amministratore', 'gallery_admin_email', 0),
        array('Indirizzo della directory nuke, cioÃ¨ http://www.mysite.tld/html', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
        // array('Target per il link \'Vedi altre immagini\' nelle e-cards', 'ecards_more_pic_target', 0),
        array('Lingua', 'lang', 5),
// for postnuke change
        array('Tema', 'cpgtheme', 6),
        array('Show blocks on the right', 'right_blocks', 1), // new 1.2.2

        'Vista lista album',
        array('Larghezza tabella principale (pixels o %)', 'main_table_width', 0),
        array('Numero di livelli delle categorie da mostrare', 'subcat_level', 0),
        array('Numero di albums da mostrare', 'albums_per_page', 0),
        array('Numero di colonne della lista album', 'album_list_cols', 0),
        array('Dimensione miniature in pixels', 'alb_list_thumb_size', 0),
        array('Contenuto della pagina principale', 'main_page_layout', 0),
        array('Mostra miniature per primo livello album nelle categorie', 'first_level', 1),

        'Vista miniature',
        array('Numero di colonne nella pagina delle miniature', 'thumbcols', 0),
        array('Numero di righe nella pagina delle miniature', 'thumbrows', 0),
        array('Massimo numero di tabs da mostrare', 'max_tabs', 0),
        array('Mostra descrizione (in aggiunta al titolo) sotto la miniatura', 'caption_in_thumbview', 1),
        array('Mostra numero di commenti sotto la miniatura', 'display_comment_count', 1),
        array('Criterio di default per ordinare le immagini', 'default_sort_order', 3),
        array('Minimo numero di voti affinchÃ¨ una immagine entri nella lista delle \'piÃ¹ votate\'', 'min_votes_for_rating', 0),
        array('Usa titolo e parole chiave anzichÃ¨ picinfo come tag alt e title', 'seo_alts', 1), // new in cpg1.2.0nuke
        'Vista immagine &amp; Impostazioni commenti',
        array('Larghezza della tabella mostra immagine (pixels o %)', 'picture_table_width', 0),
        array('Info immagini visibili di default', 'display_pic_info', 1),
        array('Filtra parolacce nei commenti', 'filter_bad_words', 1),
        array('Consenti smiles nei commenti', 'enable_smilies', 1),
        array('Consenti piÃ¹ commenti consecutivi su un\'immagine dallo stesso utente', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
        array('Invia una Email all\'amministratore quando vengono inseriti dei commenti' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
        array('Lunghezza massima descrizione', 'max_img_desc_length', 0),
        array('Max numero di caratteri in una parola', 'max_com_wlength', 0),
        array('Max numero di linee in un commento', 'max_com_lines', 0),
        array('Lunghezza massima del commento', 'max_com_size', 0),
        array('Mostra film strip', 'display_film_strip', 1),
        array('Numero di miniature nella film strip', 'max_film_strip_items', 0),
        array('Consenti agli anonimi di vedere le immagini in dimensione originale', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke		
array('Number of days between being able to vote on the same image','keep_votes_time',0), // new in cpg1.2.2c nuke
// 'Pictures and thumbnails settings',		
        'Impostazioni immagini e miniature',
        array('QualitÃ  files JPEG', 'jpeg_qual', 0),
        array('Max dimensione delle miniature <b>*</b>', 'thumb_width', 0),
        array('Usa dimensione ( larghezza o altezza o aspetto Max per miniature e immagini intermedie)<b>*</b>', 'thumb_use', 7),
        array('Crea immagini intermedie', 'make_intermediate', 1),
        array('Max larghezza o altezza delle immagini intermedie <b>*</b>', 'picture_width', 0),
        array('Peso massimo dei files (KB)', 'max_upl_size', 0),
        array('Max larghezza o altezza delle immagini caricate (pixels)', 'max_upl_width_height', 0),
        array(
            'Allow multiple Files to be upload with same file name', 'samename', 1), 
        'Impostazioni utenti',
        array('Consenti nuove registrazioni', 'allow_user_registration', 1),
        array('Verifica tramite e-mail richiesta', 'reg_requires_valid_email', 1),
        array('Consenti due utenti con la stessa email', 'allow_duplicate_emails_addr', 1),
        array('Utenti possono avere album privati', 'allow_private_albums', 1),
array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',

        'Campi personalizzati per le descrizioni (lascia vuoti se inutilizzati)',
        array('Nome campo 1', 'user_field1_name', 0),
        array('Nome campo 2', 'user_field2_name', 0),
        array('Nome campo 3', 'user_field3_name', 0),
        array('Nome campo 4', 'user_field4_name', 0),

        'Impostazioni avanzate immagini e miniature',
        array('Mostra Icona album privati ad utenti non connessi', 'show_private', 1),
        array('Caratteri proibiti nei nomi dei files', 'forbiden_fname_char', 0),
        array('Estensioni consentite per le immagini ', 'allowed_file_extensions', 0),
        array('Metodo ridimensionamento immagini', 'thumb_method', 2),
        array('Percorso per ImageMagick (esempio /usr/bin/X11/)', 'impath', 0),
        array('Tipi di immagine consentiti (solo per ImageMagick)', 'allowed_img_types', 0),
        array('Opzioni per ImageMagick', 'im_options', 0),
        array('Leggi dati EXIF nei files JPEG', 'read_exif_data', 1),
        array('Leggi dati IPTC nei files JPEG', 'read_iptc_data', 1), // new in cpg1.2.0nuke
        array('Directory degli album <b>*</b>', 'fullpath', 0),
        array('Directory immagini utenti <b>*</b>', 'userpics', 0),
        array('Prefisso delle immagini intermedie <b>*</b>', 'normal_pfx', 0),
        array('Prefisso delle miniature <b>*</b>', 'thumb_pfx', 0),
        array('Chmod di default per le directories', 'default_dir_mode', 0),
        array('Chmod di default per le immagini', 'default_file_mode', 0),
        array('Picinfo mostra nome file', 'picinfo_display_filename', '1'), // new in cpg1.2.0nuke
        array('Picinfo mostra nome album', 'picinfo_display_album_name', '1'), // new in cpg1.2.0nuke
        array('Picinfo mostra dimensione file', 'picinfo_display_file_size', '1'), // new in cpg1.2.0nuke
        array('Picinfo mostra dimensioni immagine', 'picinfo_display_dimensions', '1'), // new in cpg1.2.0nuke
        array('Picinfo mostra contatore visualizzazioni', 'picinfo_display_count_displayed', '1'), // new in cpg1.2.0nuke
        array('Picinfo mostra URL', 'picinfo_display_URL', '1'), // new in cpg1.2.0nuke
        array('Picinfo mostra URL come memorizza collegamento', 'picinfo_display_URL_bookmark', '1'), // new in cpg1.2.0nuke
        array('Picinfo mostra collegamento a preferiti', 'picinfo_display_favorites', '1'), // new in cpg1.2.0nuke
        'Cookies &amp; Impostazioni caratteri',
        array('Nome del cookie usato dallo script', 'cookie_name', 0),
        array('Percorso del cookie usato dallo script', 'cookie_path', 0),
        array('Codifica carattere', 'charset', 4),

        'Impostazioni varie',
        array('Attiva modalitÃ  debug', 'debug_mode', 1),
        array('Attiva modalitÃ  debug avanzato', 'advanced_debug_mode', 1), // new in cpg1.2.0nuke
array(
'Show Coppermine Update Alert to Admin', 'showupdate', 1), // new 1.2.2
        '<br /><div align="center">(*) I campi con * non devono essere modificati se giÃ  vi sono immagini nella galleria</div><br />'
        );
// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) $lang_db_input_php = array('empty_name_or_com' => 'Inserisci nome e commento',
        'com_added' => 'Il tuo commento Ã¨ stato aggiunto',
        'alb_need_title' => 'Inserisci il titolo dell\'album !',
        'no_udp_needed' => 'Non necessita di aggiornamenti.',
        'alb_updated' => 'Album aggiornato',
        'unknown_album' => 'Album inesistente o upload non consentito in questo album',
        'no_pic_uploaded' => 'Nessuna immagine aggiunta !<br /><br />Controlla che il server permetta gli uploads...',
        'err_mkdir' => 'Impossibile creare la directory %s !',
        'dest_dir_ro' => 'La directory di destinazione %s non Ã¨ scrivibile !',
        'err_move' => 'Impossible spostare %s in %s !',
        'err_fsize_too_large' => 'La dimensione della immagine caricata Ã¨ eccessiva (il massimo consentito Ã¨ %s x %s) !',
        'err_imgsize_too_large' => 'Il peso del file caricato Ã¨ eccessivo (il massimo consentito Ã¨ %s KB) !',
        'err_invalid_img' => 'Il file caricato non Ã¨ una immagine supportata !',
        'allowed_img_types' => 'Puoi caricare %s immagini.',
        'err_insert_pic' => 'La immagine \'%s\' non puÃ² essere inserita',
        'upload_success' => 'Immagine caricata con successo<br /><br />SarÃ  visibile dopo il vaglio di un amministratore.',
        'info' => 'Informazione',
        'com_added' => 'Commento aggiunto',
        'alb_updated' => 'Album aggiornato',
        'err_comment_empty' => 'Il commento Ã¨ vuoto !',
        'err_invalid_fext' => 'Solo i files con le seguenti estensioni sono ammessi : <br /><br />%s.',
        'no_flood' => 'Spiacenti, sei giÃ  autore del commento<br /><br />Edita il commento se vuoi',
        'redirect_msg' => 'Sei stato reindirizzato.<br /><br /><br />Clicca \'CONTINUA\' se la pagina non si ricarica automaticamente',
        'upl_success' => 'Immagine aggiunta con successo',
        );
// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) $lang_delete_php = array('caption' => 'Descrizione',
        'fs_pic' => 'immagine full size',
        'del_success' => 'cancellata con successo',
        'ns_pic' => 'immagine normale',
        'err_del' => 'non puÃ² essere cancellata',
        'thumb_pic' => 'miniatura',
        'comment' => 'commento',
        'im_in_alb' => 'immagine nell\'album',
        'alb_del_success' => 'Album \'%s\' cancellato',
        'alb_mgr' => 'Album Manager',
        'err_invalid_data' => 'Dati non validi ricevuti in \'%s\'',
        'create_alb' => 'Creazione album \'%s\'',
        'update_alb' => 'Aggiornamento album \'%s\' con titolo \'%s\' ed indice \'%s\'',
        'del_pic' => 'Cancella immagine',
        'del_alb' => 'Cancella album',
        'del_user' => 'Cancella utente',
        'err_unknown_user' => 'Utente inesistente !',
        'comment_deleted' => 'Commento cancellato con successo',
        );
// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //
// Void
// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')) {
    $lang_display_image_php = array('confirm_del' => 'Vuoi davvero cancellare questa immagine? \\nI commenti andranno persi.',
        'del_pic' => 'CANCELLA QUESTA IMMAGINE',
        'size' => '%s x %s pixels',
        'views' => '%s volte',
        'slideshow' => 'Slideshow',
        'stop_slideshow' => 'STOP SLIDESHOW',
        'view_fs' => 'Clicca per immagine full size',
        'edit_pic' => 'EDITA INFO IMMAGINE', // new in cpg1.2.0nuke
        );

    $lang_picinfo = array('title' => 'Info immagine',
        'Filename' => 'Nome file',
        'Album name' => 'Nome album',
        'Rating' => 'Punteggio (%s voti)',
        'Keywords' => 'Keywords',
        'File Size' => 'Peso file',
        'Dimensions' => 'Dimensioni',
        'Displayed' => 'Mostrato',
        'Camera' => 'Camera',
        'Date taken' => 'Data di scatto',
        'Aperture' => 'Apertura',
        'Exposure time' => 'Esposizione',
        'Focal length' => 'Focale',
        'Comment' => 'Commento',
        'addFav' => 'Aggiungi a "I miei Preferiti"',
        'addFavPhrase' => 'Preferiti',
        'remFav' => 'Rimuovi da "I miei Preferiti"',
        'iptcTitle' => 'IPTC - Titolo', // new in cpg1.2.0nuke
        'iptcCopyright' => 'IPTC - Copyright', // new in cpg1.2.0nuke
        'iptcKeywords' => 'IPTC - Parole chiave', // new in cpg1.2.0nuke
        'iptcCategory' => 'IPTC - Categoria', // new in cpg1.2.0nuke
        'iptcSubCategories' => 'IPTC - Sub Categorie', // new in cpg1.2.0nuke
        'bookmark_page' => 'Memorizza collegamento', // new in cpg1.2.0nuke
        );

    $lang_display_comments = array('OK' => 'OK',
        'edit_title' => 'Edita questo commento',
        'confirm_delete' => 'Vuoi davvero cancellare questo commento?',
        'add_your_comment' => 'Aggiungi il tuo commento',
        'name' => 'Nome',
        'comment' => 'Commento',
        'your_name' => 'Anon',
        );
    $lang_fullsize_popup = array('click_to_close' => 'Clicca l\'immagine per chiudere questa finestra',
        );
} 
// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //
if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php = array('title' => 'Invia una e-card',
        'invalid_email' => '<b>Attento</b> : email non valida !',
        'ecard_title' => 'Una e-card da %s per te',
        'view_ecard' => 'Se la e-card non Ã¨ visualizzata correttamente, clicca su questo link',
        'view_more_pics' => 'Clicca su questo link per altre immagini !',
        'send_success' => 'E-card inviata con successo',
        'send_failed' => 'Spiacenti ma il server non puÃ² inviare la tua e-card...',
        'from' => 'Da',
        'your_name' => 'Il tuo nome',
        'your_email' => 'La tua email',
        'to' => 'Per ',
        'rcpt_name' => 'Nome destinatario',
        'rcpt_email' => 'Email destinatario',
        'greetings' => 'Saluti',
        'message' => 'Messaggio',
        );
// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //
if (defined('EDITPICS_PHP')) $lang_editpics_php = array('pic_info' => 'Info immagine',
        'album' => 'Album',
        'title' => 'Titolo',
        'desc' => 'Descrizione',
        'keywords' => 'Keywords',
        'pic_info_str' => '%sx%s - %sKB - %s viste - %s voti',
        'approve' => 'Approva immagine',
        'postpone_app' => 'Rinvia approvazione',
        'del_pic' => 'Cancella immagine',
        'read_exif' => 'Rileggi info EXIF', // new in cpg1.2.0nuke
        'reset_view_count' => 'Resetta contatore',
        'reset_votes' => 'Resetta voti',
        'del_comm' => 'Cancella commenti',
        'upl_approval' => 'Approvazione uploads',
        'edit_pics' => 'Edita immagini',
        'see_next' => 'Immagini successive',
        'see_prev' => 'Immagini precedenti',
        'n_pic' => '%s immagini',
        'n_of_pic_to_disp' => 'Numero di immagini da mostrare',
        'apply' => 'Applica modifiche'
        );
// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP'⤀ ␀氀愀渀最开最爀漀甀瀀洀最爀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀最爀漀甀瀀开渀愀洀攀✀ 㴀㸀 ✀一漀洀攀 最爀甀瀀瀀漀✀Ⰰഀ਀        ✀搀椀猀欀开焀甀漀琀愀✀ 㴀㸀 ✀儀甀漀琀愀 搀椀猀挀漀✀Ⰰഀ਀        ✀挀愀渀开爀愀琀攀✀ 㴀㸀 ✀倀甀쌀눀 瘀漀琀愀爀攀 氀攀 椀洀洀愀最椀渀椀✀Ⰰഀ਀        ✀挀愀渀开猀攀渀搀开攀挀愀爀搀猀✀ 㴀㸀 ✀倀甀쌀눀 椀渀瘀椀愀爀攀 攀ⴀ挀愀爀搀猀✀Ⰰഀ਀        ✀挀愀渀开瀀漀猀琀开挀漀洀✀ 㴀㸀 ✀倀甀쌀눀 猀挀爀椀瘀攀爀攀 挀漀洀洀攀渀琀椀✀Ⰰഀ਀        ✀挀愀渀开甀瀀氀漀愀搀✀ 㴀㸀 ✀倀甀쌀눀 椀渀猀攀爀椀爀攀 椀洀洀愀最椀渀椀✀Ⰰഀ਀        ✀挀愀渀开栀愀瘀攀开最愀氀氀攀爀礀✀ 㴀㸀 ✀倀甀쌀눀 愀瘀攀爀攀 最愀氀氀攀爀椀愀 瀀攀爀猀漀渀愀氀攀✀Ⰰഀ਀        ✀愀瀀瀀氀礀✀ 㴀㸀 ✀䄀瀀瀀氀椀挀愀 洀漀搀椀昀椀挀栀攀✀Ⰰഀ਀        ✀挀爀攀愀琀攀开渀攀眀开最爀漀甀瀀✀ 㴀㸀 ✀䌀爀攀愀 渀甀漀瘀漀 最爀甀瀀瀀漀✀Ⰰഀ਀        ✀搀攀氀开最爀漀甀瀀猀✀ 㴀㸀 ✀䌀愀渀挀攀氀氀愀 最爀漀甀瀀瀀椀 猀攀氀攀稀椀漀渀愀琀椀✀Ⰰഀ਀        ✀挀漀渀昀椀爀洀开搀攀氀✀ 㴀㸀 ✀䄀琀琀攀渀琀漀Ⰰ 最氀椀 甀琀攀渀琀椀 猀愀爀愀渀渀漀 琀爀愀猀昀攀爀椀琀椀 渀攀氀 最爀甀瀀瀀漀 搀攀最氀椀 唀琀攀渀琀椀 爀攀最椀猀琀爀愀琀椀 ⴀ 嘀甀漀椀 瀀爀漀猀攀最甀椀爀攀㼀✀Ⰰഀ਀        ✀琀椀琀氀攀✀ 㴀㸀 ✀䜀攀猀琀椀猀挀椀 最爀甀瀀瀀椀 甀琀攀渀琀椀✀Ⰰഀ਀        ✀愀瀀瀀爀漀瘀愀氀开㄀✀ 㴀㸀 ✀䄀瀀瀀爀漀瘀愀稀椀漀渀攀 倀甀戀⸀ 唀瀀氀⸀  ⠀㄀⤀✀Ⰰഀ਀        ✀愀瀀瀀爀漀瘀愀氀开㈀✀ 㴀㸀 ✀䄀瀀瀀爀漀瘀愀稀椀漀渀攀 倀爀椀瘀⸀ 唀瀀氀⸀  ⠀㈀⤀✀Ⰰഀ਀        ✀渀漀琀攀㄀✀ 㴀㸀 ✀㰀戀㸀⠀㄀⤀㰀⼀戀㸀 䜀氀椀 甀瀀氀漀愀搀猀 椀渀 甀渀 愀氀戀甀洀 瀀甀戀戀氀椀挀漀 渀攀挀攀猀猀椀琀愀渀漀 搀攀氀氀愀 愀瀀瀀爀漀瘀愀稀椀漀渀攀✀Ⰰഀ਀        ✀渀漀琀攀㈀✀ 㴀㸀 ✀㰀戀㸀⠀㈀⤀㰀⼀戀㸀 䜀氀椀 甀瀀氀漀愀搀猀 椀渀 甀渀 愀氀戀甀洀 搀椀 甀渀 甀琀攀渀琀攀 渀攀挀攀猀猀椀琀愀渀漀 搀攀氀氀愀 愀瀀瀀爀漀瘀愀稀椀漀渀攀✀Ⰰഀ਀        ✀渀漀琀攀猀✀ 㴀㸀 ✀一漀琀攀✀ഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 椀渀搀攀砀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀䤀一䐀䔀堀开倀䠀倀✀⤀⤀ 笀ഀ਀    ␀氀愀渀最开椀渀搀攀砀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀眀攀氀挀漀洀攀✀ 㴀㸀 ✀䈀攀渀瘀攀渀甀琀漀 ℀✀ഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开愀氀戀甀洀开愀搀洀椀渀开洀攀渀甀 㴀 愀爀爀愀礀⠀✀挀漀渀昀椀爀洀开搀攀氀攀琀攀✀ 㴀㸀 ✀嘀甀漀椀 搀愀瘀瘀攀爀漀 挀愀渀挀攀氀氀愀爀攀 焀甀攀猀琀尀✀愀氀戀甀洀 㼀 尀尀渀吀甀琀琀攀 氀攀 椀洀洀愀最椀渀椀 攀搀 椀 挀漀洀洀攀渀琀椀 愀渀搀爀愀渀渀漀 瀀攀爀猀椀⸀✀Ⰰഀ਀        ✀搀攀氀攀琀攀✀ 㴀㸀 ✀䌀䄀一䌀䔀䰀䰀䄀✀Ⰰഀ਀        ✀洀漀搀椀昀礀✀ 㴀㸀 ✀倀刀伀倀刀䤀䔀吀䄀尀✀✀Ⰰഀ਀        ✀攀搀椀琀开瀀椀挀猀✀ 㴀㸀 ✀䔀䐀䤀吀䄀 䤀䴀䴀䄀䜀䤀一䤀✀Ⰰഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开氀椀猀琀开挀愀琀攀最漀爀椀攀猀 㴀 愀爀爀愀礀⠀✀栀漀洀攀✀ 㴀㸀 ✀䠀漀洀攀✀Ⰰഀ਀        ✀猀琀愀琀㄀✀ 㴀㸀 ✀㰀戀㸀嬀瀀椀挀琀甀爀攀猀崀㰀⼀戀㸀 椀洀洀愀最椀渀椀 㨀㨀 㰀戀㸀嬀愀氀戀甀洀猀崀㰀⼀戀㸀 愀氀戀甀洀猀 㨀㨀 㰀戀㸀嬀挀愀琀崀㰀⼀戀㸀 挀愀琀攀最漀爀椀攀 㨀㨀 㰀戀㸀嬀挀漀洀洀攀渀琀猀崀㰀⼀戀㸀 挀漀洀洀攀渀琀椀 㨀㨀 瘀椀猀琀攀 㰀戀㸀嬀瘀椀攀眀猀崀㰀⼀戀㸀 瘀漀氀琀攀✀Ⰰഀ਀        ✀猀琀愀琀㈀✀ 㴀㸀 ✀㰀戀㸀嬀瀀椀挀琀甀爀攀猀崀㰀⼀戀㸀 椀洀洀愀最椀渀椀 㨀㨀 㰀戀㸀嬀愀氀戀甀洀猀崀㰀⼀戀㸀 愀氀戀甀洀猀 㨀㨀 瘀椀猀琀攀 㰀戀㸀嬀瘀椀攀眀猀崀㰀⼀戀㸀 瘀漀氀琀攀✀Ⰰഀ਀        ✀砀砀开猀开最愀氀氀攀爀礀✀ 㴀㸀 ✀─猀尀✀猀 䜀愀氀氀攀爀椀愀✀Ⰰഀ਀        ✀猀琀愀琀㌀✀ 㴀㸀 ✀㰀戀㸀嬀瀀椀挀琀甀爀攀猀崀㰀⼀戀㸀 椀洀洀愀最椀渀椀 㨀㨀 㰀戀㸀嬀愀氀戀甀洀猀崀㰀⼀戀㸀 愀氀戀甀洀猀 㨀㨀 㰀戀㸀嬀挀漀洀洀攀渀琀猀崀㰀⼀戀㸀 挀漀洀洀攀渀琀椀 㨀㨀 瘀椀猀琀攀 㰀戀㸀嬀瘀椀攀眀猀崀㰀⼀戀㸀 瘀漀氀琀攀✀ഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开氀椀猀琀开甀猀攀爀猀 㴀 愀爀爀愀礀⠀✀甀猀攀爀开氀椀猀琀✀ 㴀㸀 ✀䰀椀猀琀愀 甀琀攀渀琀椀✀Ⰰഀ਀        ✀渀漀开甀猀攀爀开最愀氀✀ 㴀㸀 ✀一漀渀 挀椀 猀漀渀漀 最愀氀氀攀爀椀攀 甀琀攀渀琀椀✀Ⰰഀ਀        ✀渀开愀氀戀甀洀猀✀ 㴀㸀 ✀─猀 愀氀戀甀洀✀Ⰰഀ਀        ✀渀开瀀椀挀猀✀ 㴀㸀 ✀─猀 椀洀洀愀最椀渀椀✀ഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开氀椀猀琀开愀氀戀甀洀猀 㴀 愀爀爀愀礀⠀✀渀开瀀椀挀琀甀爀攀猀✀ 㴀㸀 ✀─猀 椀洀洀愀最椀渀椀✀Ⰰഀ਀        ✀氀愀猀琀开愀搀搀攀搀✀ 㴀㸀 ✀Ⰰ 甀氀琀椀洀漀 愀爀爀椀瘀漀 搀攀氀 ─猀✀ഀ਀        ⤀㬀ഀ਀紀 ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 洀漀搀椀昀礀愀氀戀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀䴀伀䐀䤀䘀夀䄀䰀䈀开倀䠀倀✀⤀⤀ ␀氀愀渀最开洀漀搀椀昀礀愀氀戀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀甀瀀搀开愀氀戀开渀✀ 㴀㸀 ✀䄀最最椀漀爀渀愀 愀氀戀甀洀 ─猀✀Ⰰഀ਀        ✀最攀渀攀爀愀氀开猀攀琀琀椀渀最猀✀ 㴀㸀 ✀䤀洀瀀漀猀琀愀稀椀漀渀椀 最攀渀攀爀愀氀椀✀Ⰰഀ਀        ✀愀氀戀开琀椀琀氀攀✀ 㴀㸀 ✀吀椀琀漀氀漀 愀氀戀甀洀✀Ⰰഀ਀        ✀愀氀戀开挀愀琀✀ 㴀㸀 ✀䌀愀琀攀最漀爀椀愀 愀氀戀甀洀✀Ⰰഀ਀        ✀愀氀戀开搀攀猀挀✀ 㴀㸀 ✀䐀攀猀挀爀椀稀椀漀渀攀 愀氀戀甀洀✀Ⰰഀ਀        ✀愀氀戀开琀栀甀洀戀✀ 㴀㸀 ✀䴀椀渀椀愀琀甀爀愀 愀氀戀甀洀✀Ⰰഀ਀        ✀愀氀戀开瀀攀爀洀✀ 㴀㸀 ✀倀攀爀洀攀猀猀椀 瀀攀爀 焀甀攀猀琀漀 愀氀戀甀洀✀Ⰰഀ਀        ✀挀愀渀开瘀椀攀眀✀ 㴀㸀 ✀䄀氀戀甀洀 瘀椀猀椀戀椀氀攀 搀愀✀Ⰰഀ਀        ✀挀愀渀开甀瀀氀漀愀搀✀ 㴀㸀 ✀䤀 瘀椀猀椀琀愀琀漀爀椀 瀀漀猀猀漀渀漀 愀最最椀甀渀最攀爀攀 椀洀洀愀最椀渀椀✀Ⰰഀ਀        ✀挀愀渀开瀀漀猀琀开挀漀洀洀攀渀琀猀✀ 㴀㸀 ✀䤀 瘀椀猀椀琀愀琀漀爀椀 瀀漀猀猀漀渀漀 椀渀猀攀爀椀爀攀 挀漀洀洀攀渀琀椀✀Ⰰഀ਀        ✀挀愀渀开爀愀琀攀✀ 㴀㸀 ✀䤀 瘀椀猀椀琀愀琀漀爀椀 瀀漀猀猀漀渀漀 瘀漀琀愀爀攀 氀攀 椀洀洀愀最椀渀椀✀Ⰰഀ਀        ✀甀猀攀爀开最愀氀✀ 㴀㸀 ✀䜀愀氀氀攀爀椀愀 甀琀攀渀琀攀✀Ⰰഀ਀        ✀渀漀开挀愀琀✀ 㴀㸀 ✀⨀ 一攀猀猀甀渀愀 挀愀琀攀最漀爀椀愀 ⨀✀Ⰰഀ਀        ✀愀氀戀开攀洀瀀琀礀✀ 㴀㸀 ✀䄀氀戀甀洀 瘀甀漀琀漀✀Ⰰഀ਀        ✀氀愀猀琀开甀瀀氀漀愀搀攀搀✀ 㴀㸀 ✀唀氀琀椀洀漀 愀爀爀椀瘀漀✀Ⰰഀ਀        ✀瀀甀戀氀椀挀开愀氀戀✀ 㴀㸀 ✀吀甀琀琀椀 ⠀愀氀戀甀洀 瀀甀戀戀氀椀挀漀⤀✀Ⰰഀ਀        ✀洀攀开漀渀氀礀✀ 㴀㸀 ✀匀漀氀漀 瀀攀爀 洀攀✀Ⰰഀ਀        ✀漀眀渀攀爀开漀渀氀礀✀ 㴀㸀 ✀匀漀氀漀 瀀攀爀 椀氀 琀椀琀漀氀愀爀攀 ⠀─猀⤀✀Ⰰഀ਀        ✀最爀漀甀瀀瀀开漀渀氀礀✀ 㴀㸀 ✀䴀攀洀戀爀椀 搀攀氀 最爀甀瀀瀀漀 尀✀─猀尀✀ ✀Ⰰഀ਀        ✀攀爀爀开渀漀开愀氀戀开琀漀开洀漀搀椀昀礀✀ 㴀㸀 ✀一攀猀猀甀渀 愀氀戀甀洀 挀栀攀 琀甀 瀀漀猀猀愀 洀漀搀椀昀椀挀愀爀攀⸀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀✀ 㴀㸀 ✀䄀最最椀漀爀渀愀 愀氀戀甀洀✀ഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 爀愀琀攀瀀椀挀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀刀䄀吀䔀倀䤀䌀开倀䠀倀✀⤀⤀ ␀氀愀渀最开爀愀琀攀开瀀椀挀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀愀氀爀攀愀搀礀开爀愀琀攀搀✀ 㴀㸀 ✀匀瀀椀愀挀攀渀琀椀Ⰰ 栀愀椀 最椀쌀ꀀ 瘀漀琀愀琀漀 焀甀攀猀琀愀 椀洀洀愀最椀渀攀✀Ⰰഀ਀        ✀爀愀琀攀开漀欀✀ 㴀㸀 ✀椀氀 琀甀漀 瘀漀琀漀 쌀ꠀ 猀琀愀琀漀 愀挀挀攀琀琀愀琀漀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 爀攀最椀猀琀攀爀⸀瀀栀瀀 ☀ 瀀爀漀昀椀氀攀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀刀䔀䜀䤀匀吀䔀刀开倀䠀倀✀⤀ 簀簀 搀攀昀椀渀攀搀⠀✀倀刀伀䘀䤀䰀䔀开倀䠀倀✀⤀⤀ 笀ഀ਀    ␀氀愀渀最开爀攀最椀猀琀攀爀开搀椀猀挀氀愀洀攀爀 㴀 㰀㰀㰀䔀伀吀ഀ਀䜀氀椀 愀洀洀椀渀椀猀琀爀愀琀漀爀椀 搀椀 㰀戀㸀笀匀䤀吀䔀开一䄀䴀䔀紀㰀⼀戀㸀 爀椀洀甀漀瘀攀爀愀渀渀漀 琀甀琀琀漀 焀甀攀氀氀漀 挀栀攀 渀漀渀 猀愀爀쌀ꀀ 爀椀琀攀渀甀琀漀 挀漀洀瀀愀琀椀戀椀氀攀 挀漀渀 氀攀 昀椀渀愀氀椀琀쌀ꀀ 攀搀 椀氀 搀攀挀漀爀漀 搀攀氀 猀椀琀漀⸀吀椀 挀栀椀攀搀椀愀洀漀 搀椀 爀椀猀瀀攀琀琀愀爀攀 椀氀 氀愀瘀漀爀漀 搀攀最氀椀 愀氀琀爀椀 甀琀攀渀琀椀 攀 搀攀氀 眀攀戀洀愀猀琀攀爀⸀㰀戀爀 ⼀㸀ഀ਀㰀戀爀 ⼀㸀ഀ਀䄀挀挀攀琀琀椀 搀椀 渀漀渀 瀀甀戀戀氀椀挀愀爀攀 洀愀琀攀爀椀愀氀攀 漀猀挀攀渀漀 攀搀 漀昀昀攀渀猀椀瘀漀⸀㰀戀爀 ⼀㸀ഀ਀㰀戀爀 ⼀㸀ഀ਀䰀攀 椀渀昀漀爀洀愀稀椀漀渀椀 爀攀氀愀琀椀瘀攀 愀氀 琀甀漀 愀挀挀漀甀渀琀 猀漀渀漀 挀漀渀猀攀爀瘀愀琀攀 椀渀 甀渀 挀漀漀欀椀攀 猀甀氀 琀甀漀 挀漀洀瀀甀琀攀爀 瀀攀爀 瘀攀氀漀挀椀稀稀愀爀攀 氀✀甀琀椀氀椀稀稀漀 搀攀氀氀愀 最愀氀氀攀爀椀愀⸀ 䤀氀 琀甀漀 椀渀搀椀爀椀稀稀漀 攀洀愀椀氀 渀漀渀 猀愀爀쌀ꀀ 搀椀瘀甀氀最愀琀漀 愀 渀攀猀猀甀渀漀 瀀攀爀 渀攀猀猀甀渀 洀漀琀椀瘀漀⸀㰀戀爀 ⼀㸀ഀ਀㰀戀爀 ⼀㸀ഀ਀䌀氀椀挀挀愀渀搀漀 猀甀 ✀䄀挀挀攀琀琀漀✀ 挀漀渀昀攀爀洀椀 焀甀攀猀琀攀 挀漀渀搀椀稀椀漀渀椀⸀ഀ਀䔀伀吀㬀ഀ਀ഀ਀    ␀氀愀渀最开爀攀最椀猀琀攀爀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀瀀愀最攀开琀椀琀氀攀✀ 㴀㸀 ✀刀攀最椀猀琀爀愀稀椀漀渀攀 甀琀攀渀琀攀✀Ⰰഀ਀        ✀琀攀爀洀开挀漀渀搀✀ 㴀㸀 ✀吀攀爀洀椀渀椀 攀 挀漀渀搀椀稀椀漀渀椀✀Ⰰഀ਀        ✀椀开愀最爀攀攀✀ 㴀㸀 ✀䄀挀挀攀琀琀漀✀Ⰰഀ਀        ✀猀甀戀洀椀琀✀ 㴀㸀 ✀䤀渀瘀椀愀 爀攀最椀猀琀爀愀稀椀漀渀攀✀Ⰰഀ਀        ✀攀爀爀开甀猀攀爀开攀砀椀猀琀猀✀ 㴀㸀 ✀䰀漀 甀猀攀爀渀愀洀攀 猀挀攀氀琀漀 쌀ꠀ 最椀쌀ꀀ 甀琀椀氀椀稀稀愀琀漀Ⰰ 猀挀攀最氀椀渀攀 甀渀 愀氀琀爀漀✀Ⰰഀ਀        ✀攀爀爀开瀀愀猀猀眀漀爀搀开洀椀猀洀愀琀挀栀✀ 㴀㸀 ✀䰀攀 瀀愀猀猀眀漀爀搀 渀漀渀 挀漀椀渀挀椀搀漀渀漀Ⰰ 挀漀渀琀爀漀氀氀愀 攀 爀椀瀀爀漀瘀愀✀Ⰰഀ਀        ✀攀爀爀开甀渀愀洀攀开猀栀漀爀琀✀ 㴀㸀 ✀䰀漀 甀猀攀爀渀愀洀攀 搀攀瘀攀 攀猀猀攀爀攀 愀氀洀攀渀漀 搀椀 ㈀ 挀愀爀愀琀琀攀爀椀✀Ⰰഀ਀        ✀攀爀爀开瀀愀猀猀眀漀爀搀开猀栀漀爀琀✀ 㴀㸀 ✀䰀愀 瀀愀猀猀眀漀爀搀 搀攀瘀攀 攀猀猀攀爀攀 愀氀洀攀渀漀 搀椀 ㈀ 挀愀爀愀琀琀攀爀椀✀Ⰰഀ਀        ✀攀爀爀开甀渀愀洀攀开瀀愀猀猀开搀椀昀昀✀ 㴀㸀 ✀唀猀攀爀渀愀洀攀 攀 瀀愀猀猀眀漀爀搀 搀攀瘀漀渀漀 攀猀猀攀爀攀 搀椀瘀攀爀猀椀✀Ⰰഀ਀        ✀攀爀爀开椀渀瘀愀氀椀搀开攀洀愀椀氀✀ 㴀㸀 ✀䰀愀 攀洀愀椀氀 渀漀渀 쌀ꠀ 瘀愀氀椀搀愀✀Ⰰഀ਀        ✀攀爀爀开搀甀瀀氀椀挀愀琀攀开攀洀愀椀氀✀ 㴀㸀 ✀䔀洀愀椀氀 最椀쌀ꀀ 甀琀椀氀椀稀稀愀琀愀 搀愀 甀渀 愀氀琀爀漀 甀琀攀渀琀攀✀Ⰰഀ਀        ✀攀渀琀攀爀开椀渀昀漀✀ 㴀㸀 ✀䤀渀猀攀爀椀猀挀椀 椀渀昀漀 瀀攀爀 氀愀 爀攀最椀猀琀爀愀稀椀漀渀攀✀Ⰰഀ਀        ✀爀攀焀甀椀爀攀搀开椀渀昀漀✀ 㴀㸀 ✀䤀渀昀漀爀洀愀稀椀漀渀椀 爀椀挀栀椀攀猀琀攀✀Ⰰഀ਀        ✀漀瀀琀椀漀渀愀氀开椀渀昀漀✀ 㴀㸀 ✀䤀渀昀漀爀洀愀稀椀漀渀椀 漀瀀稀椀漀渀愀氀椀✀Ⰰഀ਀        ✀甀猀攀爀渀愀洀攀✀ 㴀㸀 ✀唀猀攀爀渀愀洀攀✀Ⰰഀ਀        ✀瀀愀猀猀眀漀爀搀✀ 㴀㸀 ✀倀愀猀猀眀漀爀搀✀Ⰰഀ਀        ✀瀀愀猀猀眀漀爀搀开愀最愀椀渀✀ 㴀㸀 ✀刀椀猀挀爀椀瘀椀 瀀愀猀猀眀漀爀搀✀Ⰰഀ਀        ✀攀洀愀椀氀✀ 㴀㸀 ✀䔀洀愀椀氀✀Ⰰഀ਀        ✀氀漀挀愀琀椀漀渀✀ 㴀㸀 ✀䐀漀瘀攀 瘀椀瘀椀㼀✀Ⰰഀ਀        ✀椀渀琀攀爀攀猀琀猀✀ 㴀㸀 ✀䤀渀琀攀爀攀猀猀椀✀Ⰰഀ਀        ✀眀攀戀猀椀琀攀✀ 㴀㸀 ✀匀椀琀漀 眀攀戀✀Ⰰഀ਀        ✀漀挀挀甀瀀愀琀椀漀渀✀ 㴀㸀 ✀伀挀挀甀瀀愀稀椀漀渀攀✀Ⰰഀ਀        ✀攀爀爀漀爀✀ 㴀㸀 ✀䔀刀刀伀刀䔀✀Ⰰഀ਀        ✀挀漀渀昀椀爀洀开攀洀愀椀氀开猀甀戀樀攀挀琀✀ 㴀㸀 ✀─猀 ⴀ 䌀漀渀昀攀爀洀愀 爀攀最椀猀琀爀愀稀椀漀渀攀✀Ⰰഀ਀        ✀椀渀昀漀爀洀愀琀椀漀渀✀ 㴀㸀 ✀䤀渀昀漀爀洀愀稀椀漀渀攀✀Ⰰഀ਀        ✀昀愀椀氀攀搀开猀攀渀搀椀渀最开攀洀愀椀氀✀ 㴀㸀 ✀䰀愀 攀洀愀椀氀 搀椀 挀漀渀昀攀爀洀愀 渀漀渀 瀀甀쌀눀 攀猀猀攀爀攀 椀渀瘀椀愀琀愀 ℀✀Ⰰഀ਀        ✀琀栀愀渀欀开礀漀甀✀ 㴀㸀 ✀䜀爀愀稀椀攀 瀀攀爀 攀猀猀攀爀琀椀 爀攀最椀猀琀爀愀琀漀⸀㰀戀爀 ⼀㸀㰀戀爀 ⼀㸀唀渀愀 攀ⴀ洀愀椀氀 搀椀 挀漀渀昀攀爀洀愀 攀 搀椀 愀琀琀椀瘀愀稀椀漀渀攀 쌀ꠀ 猀琀愀琀愀 椀渀瘀椀愀琀愀 愀氀氀愀 挀愀猀攀氀氀愀 搀椀 瀀漀猀琀愀 椀渀搀椀挀愀琀愀⸀✀Ⰰഀ਀        ✀愀挀挀琀开挀爀攀愀琀攀搀✀ 㴀㸀 ✀䤀氀 琀甀漀 愀挀挀漀甀渀琀 쌀ꠀ 猀琀愀琀漀 挀爀攀愀琀漀 攀 瀀甀漀椀 昀愀爀攀 椀氀 氀漀最椀渀✀Ⰰഀ਀        ✀愀挀挀琀开愀挀琀椀瘀攀✀ 㴀㸀 ✀䤀氀 琀甀漀 愀挀挀漀甀渀琀 쌀ꠀ 猀琀愀琀漀 愀琀琀椀瘀愀琀漀 攀 瀀甀漀椀 昀愀爀攀 椀氀 氀漀最椀渀✀Ⰰഀ਀        ✀愀挀挀琀开愀氀爀攀愀搀礀开愀挀琀✀ 㴀㸀 ✀䤀氀 琀甀漀 愀挀挀漀甀渀琀 쌀ꠀ 最椀쌀ꀀ 愀琀琀椀瘀漀 ℀✀Ⰰഀ਀        ✀愀挀挀琀开愀挀琀开昀愀椀氀攀搀✀ 㴀㸀 ✀儀甀攀猀琀漀 愀挀挀漀甀渀琀 渀漀渀 瀀甀쌀눀 攀猀猀攀爀攀 愀琀琀椀瘀愀琀漀 ℀✀Ⰰഀ਀        ✀攀爀爀开甀渀欀开甀猀攀爀✀ 㴀㸀 ✀唀琀攀渀琀攀 猀攀氀攀稀椀漀渀愀琀漀 椀渀攀猀椀猀琀攀渀琀攀 ℀✀Ⰰഀ਀        ✀砀开猀开瀀爀漀昀椀氀攀✀ 㴀㸀 ✀倀爀漀昀椀氀漀 搀椀 ─猀✀Ⰰഀ਀        ✀最爀漀甀瀀✀ 㴀㸀 ✀䜀爀甀瀀瀀漀✀Ⰰഀ਀        ✀爀攀最开搀愀琀攀✀ 㴀㸀 ✀䤀猀挀爀椀琀琀漀 椀氀 ✀Ⰰഀ਀        ✀搀椀猀欀开甀猀愀最攀✀ 㴀㸀 ✀唀琀椀氀椀稀稀漀 搀椀猀挀漀✀Ⰰഀ਀        ✀挀栀愀渀最攀开瀀愀猀猀✀ 㴀㸀 ✀䌀愀洀戀椀愀 瀀愀猀猀眀漀爀搀✀Ⰰഀ਀        ✀挀甀爀爀攀渀琀开瀀愀猀猀✀ 㴀㸀 ✀倀愀猀猀眀漀爀搀 挀漀爀爀攀渀琀攀✀Ⰰഀ਀        ✀渀攀眀开瀀愀猀猀✀ 㴀㸀 ✀一甀漀瘀愀 瀀愀猀猀眀漀爀搀✀Ⰰഀ਀        ✀渀攀眀开瀀愀猀猀开愀最愀椀渀✀ 㴀㸀 ✀刀椀瀀攀琀椀 渀甀漀瘀愀 瀀愀猀猀眀漀爀搀✀Ⰰഀ਀        ✀攀爀爀开挀甀爀爀开瀀愀猀猀✀ 㴀㸀 ✀䰀愀 瀀愀猀猀眀漀爀搀 愀琀琀甀愀氀攀 쌀ꠀ 攀爀爀愀琀愀✀Ⰰഀ਀        ✀愀瀀瀀氀礀开洀漀搀椀昀✀ 㴀㸀 ✀䄀瀀瀀氀椀挀愀 洀漀搀椀昀椀挀栀攀✀Ⰰഀ਀        ✀挀栀愀渀最攀开瀀愀猀猀✀ 㴀㸀 ✀䌀愀洀戀椀愀 氀愀 洀椀愀 瀀愀猀猀眀漀爀搀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开猀甀挀挀攀猀猀✀ 㴀㸀 ✀倀爀漀昀椀氀漀 愀最最椀漀爀渀愀琀漀✀Ⰰഀ਀        ✀瀀愀猀猀开挀栀最开猀甀挀挀攀猀猀✀ 㴀㸀 ✀倀愀猀猀眀漀爀搀 挀愀洀戀椀愀琀愀✀Ⰰഀ਀        ✀瀀愀猀猀开挀栀最开攀爀爀漀爀✀ 㴀㸀 ✀䰀愀 琀甀愀 瀀愀猀猀眀漀爀搀 渀漀渀 쌀ꠀ 猀琀愀琀愀 挀愀洀戀椀愀琀愀✀Ⰰഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开爀攀最椀猀琀攀爀开挀漀渀昀椀爀洀开攀洀愀椀氀 㴀 㰀㰀㰀䔀伀吀ഀ਀䜀爀愀稀椀攀 瀀攀爀 攀猀猀攀爀琀椀 爀攀最椀猀琀爀愀琀漀 猀甀 笀匀䤀吀䔀开一䄀䴀䔀紀ഀ਀ഀ਀䰀愀 琀甀愀 甀猀攀爀渀愀洀攀 쌀ꠀ 㨀 ∀笀唀匀䔀刀开一䄀䴀䔀紀∀ഀ਀䰀愀 琀甀愀 瀀愀猀猀眀漀爀搀 쌀ꠀ 㨀 ∀笀倀䄀匀匀圀伀刀䐀紀∀ഀ਀ഀ਀倀攀爀 挀漀洀瀀氀攀琀愀爀攀 氀愀 愀琀琀椀瘀愀稀椀漀渀攀 挀氀椀挀挀愀 猀甀氀 氀椀渀欀 焀甀椀 猀漀琀琀漀ഀ਀漀 挀漀瀀椀愀 攀 椀渀挀漀氀氀愀 渀攀氀 戀爀漀眀猀攀爀ഀ਀ഀ਀笀䄀䌀吀开䰀䤀一䬀紀ഀ਀ഀ਀䌀漀爀搀椀愀氀椀 猀愀氀甀琀椀Ⰰഀ਀ഀ਀䤀氀 眀攀戀洀愀猀琀攀爀 搀椀 笀匀䤀吀䔀开一䄀䴀䔀紀ഀ਀ഀ਀䔀伀吀㬀ഀ਀紀 ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 爀攀瘀椀攀眀挀漀洀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀刀䔀嘀䤀䔀圀䌀伀䴀开倀䠀倀✀⤀⤀ ␀氀愀渀最开爀攀瘀椀攀眀挀漀洀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀刀攀瘀椀猀椀漀渀愀 挀漀洀洀攀渀琀椀✀Ⰰഀ਀        ✀渀漀开挀漀洀洀攀渀琀✀ 㴀㸀 ✀一漀渀 挀椀 猀漀渀漀 挀漀洀洀攀渀琀椀 搀愀 爀攀瘀椀猀椀漀渀愀爀攀✀Ⰰഀ਀        ✀渀开挀漀洀洀开搀攀氀✀ 㴀㸀 ✀─猀 挀漀洀洀攀渀琀椀 挀愀渀挀攀氀氀愀琀椀✀Ⰰഀ਀        ✀渀开挀漀洀洀开搀椀猀瀀✀ 㴀㸀 ✀一甀洀攀爀漀 搀椀 挀漀洀洀攀渀琀椀 搀愀 洀漀猀琀爀愀爀攀✀Ⰰഀ਀        ✀猀攀攀开瀀爀攀瘀✀ 㴀㸀 ✀嘀攀搀椀 瀀爀攀挀攀搀攀渀琀攀✀Ⰰഀ਀        ✀猀攀攀开渀攀砀琀✀ 㴀㸀 ✀嘀攀搀椀 猀甀挀挀攀猀猀椀瘀漀✀Ⰰഀ਀        ✀搀攀氀开挀漀洀洀✀ 㴀㸀 ✀䌀愀渀挀攀氀氀愀 椀 挀漀洀洀攀渀琀椀 猀攀氀攀稀椀漀渀愀琀椀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 猀攀愀爀挀栀⸀瀀栀瀀 ⴀ 伀䬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 椀昀 ⠀搀攀昀椀渀攀搀⠀✀匀䔀䄀刀䌀䠀开倀䠀倀✀⤀⤀ഀ਀    ␀氀愀渀最开猀攀愀爀挀栀开瀀栀瀀 㴀 愀爀爀愀礀⠀　 㴀㸀 ✀䌀攀爀挀愀 渀攀氀氀愀 最愀氀氀攀爀椀愀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 猀攀愀爀挀栀渀攀眀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀匀䔀䄀刀䌀䠀一䔀圀开倀䠀倀✀⤀⤀ ␀氀愀渀最开猀攀愀爀挀栀开渀攀眀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀瀀愀最攀开琀椀琀氀攀✀ 㴀㸀 ✀䌀攀爀挀愀 渀甀漀瘀攀 椀洀洀愀最椀渀椀✀Ⰰഀ਀        ✀猀攀氀攀挀琀开搀椀爀✀ 㴀㸀 ✀匀攀氀攀稀椀漀渀愀 搀椀爀攀挀琀漀爀礀✀Ⰰഀ਀        ✀猀攀氀攀挀琀开搀椀爀开洀猀最✀ 㴀㸀 ✀儀甀攀猀琀愀 昀甀渀稀椀漀渀攀 挀漀渀猀攀渀琀攀 搀椀 愀最最椀甀渀最攀爀攀 椀洀洀愀最椀渀椀 挀愀爀椀挀愀琀攀 瘀椀愀 䘀吀倀 猀甀氀 琀甀漀 猀攀爀瘀攀爀㰀戀爀 ⼀㸀㰀戀爀 ⼀㸀匀挀攀最氀椀 氀愀 搀椀爀攀挀琀漀爀礀 椀渀 挀甀椀 栀愀椀 挀愀爀椀挀愀琀漀 氀攀 椀洀洀愀最椀渀椀✀Ⰰഀ਀        ✀渀漀开瀀椀挀开琀漀开愀搀搀✀ 㴀㸀 ✀一漀渀 挀椀 猀漀渀漀 椀洀洀愀最椀渀椀 搀愀 愀最最椀甀渀最攀爀攀✀Ⰰഀ਀        ✀渀攀攀搀开漀渀攀开愀氀戀甀洀✀ 㴀㸀 ✀䠀愀椀 戀椀猀漀最渀漀 愀氀洀攀渀漀 搀椀 甀渀 愀氀戀甀洀 瀀攀爀 甀猀愀爀攀 焀甀攀猀琀愀 昀甀渀稀椀漀渀攀✀Ⰰഀ਀        ✀眀愀爀渀椀渀最✀ 㴀㸀 ✀䄀琀琀攀渀琀漀✀Ⰰഀ਀        ✀挀栀愀渀最攀开瀀攀爀洀✀ 㴀㸀 ✀氀漀 猀挀爀椀瀀琀 渀漀渀 瀀甀쌀눀 猀挀爀椀瘀攀爀攀 椀渀 焀甀攀猀琀愀 搀椀爀攀挀琀漀爀礀Ⰰ 昀愀椀 椀氀 挀栀洀漀搀 愀 㜀㔀㔀 漀 㜀㜀㜀 攀 爀椀瀀爀漀瘀愀℀✀Ⰰഀ਀        ✀琀愀爀最攀琀开愀氀戀甀洀✀ 㴀㸀 ✀㰀戀㸀䴀攀琀琀椀 氀攀 椀洀洀愀最椀渀椀 搀椀 ☀焀甀漀琀㬀㰀⼀戀㸀─猀㰀戀㸀☀焀甀漀琀㬀 椀渀 㰀⼀戀㸀─猀✀Ⰰഀ਀        ✀昀漀氀搀攀爀✀ 㴀㸀 ✀䌀愀爀琀攀氀氀愀✀Ⰰഀ਀        ✀椀洀愀最攀✀ 㴀㸀 ✀䤀洀洀愀最椀渀攀✀Ⰰഀ਀        ✀愀氀戀甀洀✀ 㴀㸀 ✀䄀氀戀甀洀✀Ⰰഀ਀        ✀爀攀猀甀氀琀✀ 㴀㸀 ✀刀椀猀甀氀琀愀琀漀✀Ⰰഀ਀        ✀搀椀爀开爀漀✀ 㴀㸀 ✀一漀渀 猀挀爀椀瘀椀戀椀氀攀⸀ ✀Ⰰഀ਀        ✀搀椀爀开挀愀渀琀开爀攀愀搀✀ 㴀㸀 ✀一漀渀 氀攀最最椀戀椀氀攀⸀ ✀Ⰰഀ਀        ✀椀渀猀攀爀琀✀ 㴀㸀 ✀䄀最最椀甀渀最漀 氀攀 渀甀漀瘀攀 椀洀洀愀最椀渀椀 愀氀氀愀 最愀氀氀攀爀椀愀✀Ⰰഀ਀        ✀氀椀猀琀开渀攀眀开瀀椀挀✀ 㴀㸀 ✀䰀椀猀琀愀 搀攀氀氀攀 渀甀漀瘀攀 椀洀洀愀最椀渀椀✀Ⰰഀ਀        ✀椀渀猀攀爀琀开猀攀氀攀挀琀攀搀✀ 㴀㸀 ✀䤀渀猀攀爀椀猀挀椀 氀攀 椀洀洀愀最椀渀椀 猀攀氀攀稀椀漀渀愀琀攀✀Ⰰഀ਀        ✀渀漀开瀀椀挀开昀漀甀渀搀✀ 㴀㸀 ✀一攀猀猀甀渀愀 渀甀漀瘀愀 椀洀洀愀最椀渀攀 쌀ꠀ 猀琀愀琀愀 琀爀漀瘀愀琀愀✀Ⰰഀ਀        ✀戀攀开瀀愀琀椀攀渀琀✀ 㴀㸀 ✀匀椀椀 瀀愀稀椀攀渀琀攀Ⰰ 氀漀 猀挀爀椀瀀琀 渀攀挀攀猀猀椀琀愀 搀椀 琀攀洀瀀漀 瀀攀爀 愀最最椀甀渀最攀爀攀 氀攀 椀洀洀愀最椀渀椀✀Ⰰഀ਀        ✀渀漀琀攀猀✀ 㴀㸀 ✀㰀甀氀㸀✀ ⸀ ✀㰀氀椀㸀㰀戀㸀伀䬀㰀⼀戀㸀 㨀 椀洀洀愀最椀渀攀 愀最最椀甀渀琀愀 挀漀渀 猀甀挀挀攀猀猀漀✀ ⸀ ✀㰀氀椀㸀㰀戀㸀䐀倀㰀⼀戀㸀 㨀 椀洀洀愀最椀渀攀 最椀쌀ꀀ 瀀爀攀猀攀渀琀攀 渀攀氀 搀愀琀愀戀愀猀攀✀ ⸀ ✀㰀氀椀㸀㰀戀㸀倀䈀㰀⼀戀㸀 㨀 椀洀洀愀最椀渀攀 渀漀渀 愀最最椀甀渀琀愀 愀 挀愀甀猀愀 搀攀氀氀愀 攀爀爀愀琀愀 挀漀渀昀椀最甀爀愀稀椀漀渀攀 搀攀氀 猀攀爀瘀攀爀 漀 搀攀氀 挀栀洀漀搀 搀攀氀氀攀 挀愀爀琀攀氀氀攀✀ ⸀ ✀㰀氀椀㸀匀攀 伀䬀Ⰰ 䐀倀Ⰰ 倀䈀 渀漀渀 愀瀀瀀愀椀漀渀漀 挀氀椀挀挀愀 猀甀氀氀愀 椀洀洀愀最椀渀攀 瀀攀爀 瘀攀搀攀爀攀 焀甀愀氀攀 攀爀爀漀爀攀 쌀ꠀ 猀琀愀琀漀 挀愀甀猀愀琀漀 搀愀氀 倀䠀倀✀ ⸀ ✀㰀氀椀㸀匀攀 椀氀 琀甀漀 戀爀漀眀猀攀爀 瘀愀 椀渀 琀椀洀攀漀甀琀Ⰰ 瀀爀攀洀椀 椀氀 琀愀猀琀漀 䄀最最椀漀爀渀愀✀ ⸀ ✀㰀⼀甀氀㸀✀Ⰰഀ਀        ✀猀攀氀攀挀琀开愀氀戀甀洀✀ 㴀㸀 ✀匀攀氀攀稀椀漀渀愀 愀氀戀甀洀✀Ⰰ ⼀⼀ 渀攀眀 椀渀 渀甀欀攀ഀ਀        ✀渀漀开愀氀戀甀洀✀ 㴀㸀 ✀一漀渀 栀愀椀 猀攀氀攀稀椀漀渀愀琀漀 渀攀猀猀甀渀 愀氀戀甀洀Ⰰ 琀漀爀渀愀 椀渀搀椀攀琀爀漀 攀 猀攀氀攀稀椀漀渀愀 氀尀✀愀氀戀甀洀 椀渀 挀甀椀 椀渀猀攀爀椀爀攀 氀攀 椀洀洀愀最椀渀椀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 琀栀甀洀戀渀愀椀氀猀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 嘀漀椀搀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 甀瀀氀漀愀搀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀唀倀䰀伀䄀䐀开倀䠀倀✀⤀⤀ ␀氀愀渀最开甀瀀氀漀愀搀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀唀瀀氀漀愀搀 椀洀洀愀最椀渀攀✀Ⰰഀ਀        ✀洀愀砀开昀猀椀稀攀✀ 㴀㸀 ✀䰀愀 搀椀洀攀渀猀椀漀渀攀 洀愀猀猀椀洀愀 搀攀氀 昀椀氀攀 쌀ꠀ ─猀 䬀䈀✀Ⰰഀ਀        ✀愀氀戀甀洀✀ 㴀㸀 ✀䄀氀戀甀洀✀Ⰰഀ਀        ✀瀀椀挀琀甀爀攀✀ 㴀㸀 ✀䤀洀洀愀最椀渀攀✀Ⰰഀ਀        ✀瀀椀挀开琀椀琀氀攀✀ 㴀㸀 ✀吀椀琀漀氀漀 椀洀洀愀最椀渀攀✀Ⰰഀ਀        ✀搀攀猀挀爀椀瀀琀椀漀渀✀ 㴀㸀 ✀䐀攀猀挀爀椀稀椀漀渀攀 椀洀洀愀最椀渀攀✀Ⰰഀ਀        ✀欀攀礀眀漀爀搀猀✀ 㴀㸀 ✀䬀攀礀眀漀爀搀猀 ⠀猀攀瀀愀爀愀琀攀 搀愀 猀瀀愀稀椀⤀✀Ⰰഀ਀        ✀攀爀爀开渀漀开愀氀戀开甀瀀氀漀愀搀愀戀氀攀猀✀ 㴀㸀 ✀匀瀀椀愀挀攀渀琀椀Ⰰ 椀渀 渀攀猀猀甀渀 愀氀戀甀洀 쌀ꠀ 挀漀渀猀攀渀琀椀琀漀 挀愀爀椀挀愀爀攀 椀洀洀愀最椀渀椀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 甀猀攀爀洀最爀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀唀匀䔀刀䴀䜀刀开倀䠀倀✀⤀⤀ ␀氀愀渀最开甀猀攀爀洀最爀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀䜀攀猀琀椀漀渀攀 甀琀攀渀琀椀✀Ⰰഀ਀        ✀渀愀洀攀开愀✀ 㴀㸀 ✀一漀洀攀 愀猀挀攀渀搀攀渀琀攀✀Ⰰഀ਀        ✀渀愀洀攀开搀✀ 㴀㸀 ✀一漀洀攀 搀椀猀挀攀渀搀攀渀琀攀✀Ⰰഀ਀        ✀最爀漀甀瀀开愀✀ 㴀㸀 ✀䜀爀甀瀀瀀漀 愀猀挀攀渀搀攀渀琀攀✀Ⰰഀ਀        ✀最爀漀甀瀀开搀✀ 㴀㸀 ✀䜀爀甀瀀瀀漀 搀椀猀挀攀渀搀攀渀琀攀✀Ⰰഀ਀        ✀爀攀最开愀✀ 㴀㸀 ✀䐀愀琀愀 椀猀挀爀椀稀椀漀渀攀 愀猀挀攀渀搀攀渀琀攀✀Ⰰഀ਀        ✀爀攀最开搀✀ 㴀㸀 ✀䐀愀琀愀 椀猀挀爀椀稀椀漀渀攀 搀椀猀挀攀渀搀攀渀琀攀✀Ⰰഀ਀        ✀瀀椀挀开愀✀ 㴀㸀 ✀一甀洀攀爀漀 椀洀洀愀最椀渀椀 挀爀攀猀挀攀渀琀攀✀Ⰰഀ਀        ✀瀀椀挀开搀✀ 㴀㸀 ✀一甀洀攀爀漀 椀洀洀愀最椀渀椀 搀攀挀爀攀猀挀攀渀琀攀✀Ⰰഀ਀        ✀搀椀猀欀甀开愀✀ 㴀㸀 ✀唀琀椀氀椀稀稀漀 搀椀猀挀漀 挀爀攀猀挀攀渀琀攀✀Ⰰഀ਀        ✀搀椀猀欀甀开搀✀ 㴀㸀 ✀唀琀椀氀椀稀稀漀 搀椀猀挀漀 搀攀挀爀攀猀挀攀渀琀攀✀Ⰰഀ਀        ✀猀漀爀琀开戀礀✀ 㴀㸀 ✀伀爀搀椀渀愀 甀琀攀渀琀椀 瀀攀爀✀Ⰰഀ਀        ✀攀爀爀开渀漀开甀猀攀爀猀✀ 㴀㸀 ✀䰀愀 琀愀戀攀氀氀愀 甀琀攀渀琀椀 쌀ꠀ 瘀甀漀琀愀 ℀✀Ⰰഀ਀        ✀攀爀爀开攀搀椀琀开猀攀氀昀✀ 㴀㸀 ✀一漀渀 瀀甀漀椀 攀搀椀琀愀爀攀 椀氀 琀甀漀 瀀爀漀昀椀氀漀 搀愀 焀甀椀Ⰰ 甀猀愀 椀渀瘀攀挀攀 ∀䤀氀 洀椀漀 瀀爀漀昀椀氀漀∀✀Ⰰഀ਀        ✀攀搀椀琀✀ 㴀㸀 ✀䔀䐀䤀吀䄀✀Ⰰഀ਀        ✀搀攀氀攀琀攀✀ 㴀㸀 ✀䌀䄀一䌀䔀䰀䰀䄀✀Ⰰഀ਀        ✀渀愀洀攀✀ 㴀㸀 ✀一漀洀攀 甀琀攀渀琀攀✀Ⰰഀ਀        ✀最爀漀甀瀀✀ 㴀㸀 ✀䜀爀甀瀀瀀漀✀Ⰰഀ਀        ✀椀渀愀挀琀椀瘀攀✀ 㴀㸀 ✀䤀渀愀琀琀椀瘀漀✀Ⰰഀ਀        ✀漀瀀攀爀愀琀椀漀渀猀✀ 㴀㸀 ✀伀瀀攀爀愀稀椀漀渀椀✀Ⰰഀ਀        ✀瀀椀挀琀甀爀攀猀✀ 㴀㸀 ✀䤀洀洀愀最椀渀椀✀Ⰰഀ਀        ✀搀椀猀欀开猀瀀愀挀攀✀ 㴀㸀 ✀匀瀀愀稀椀漀 甀猀愀琀漀 ⼀ 儀甀漀琀愀✀Ⰰഀ਀        ✀爀攀最椀猀琀攀爀攀搀开漀渀✀ 㴀㸀 ✀刀攀最椀猀琀爀愀琀漀 椀氀✀Ⰰഀ਀        ✀甀开甀猀攀爀开漀渀开瀀开瀀愀最攀猀✀ 㴀㸀 ✀─搀 甀琀攀渀琀椀 椀渀 ─搀 瀀愀最椀渀攀✀Ⰰഀ਀        ✀挀漀渀昀椀爀洀开搀攀氀✀ 㴀㸀 ✀嘀甀漀椀 搀愀瘀瘀攀爀漀 挀愀渀挀攀氀氀愀爀攀 焀甀攀猀琀漀 甀琀攀渀琀攀 㼀 尀尀渀吀甀琀琀攀 氀攀 猀甀攀 椀洀洀愀最椀渀椀 攀搀 椀 猀甀漀椀 愀氀戀甀洀 愀渀搀爀愀渀渀漀 瀀攀爀猀椀⸀✀Ⰰഀ਀        ✀洀愀椀氀✀ 㴀㸀 ✀䴀䄀䤀䰀✀Ⰰഀ਀        ✀攀爀爀开甀渀欀渀漀眀渀开甀猀攀爀✀ 㴀㸀 ✀唀琀攀渀琀攀 猀攀氀攀稀椀漀渀愀琀漀 椀渀攀猀椀猀琀攀渀琀攀 ℀✀Ⰰഀ਀        ✀洀漀搀椀昀礀开甀猀攀爀✀ 㴀㸀 ✀䴀漀搀椀昀椀挀愀 甀琀攀渀琀攀✀Ⰰഀ਀        ✀渀漀琀攀猀✀ 㴀㸀 ✀一漀琀攀✀Ⰰഀ਀        ✀渀漀琀攀开氀椀猀琀✀ 㴀㸀 ✀㰀氀椀㸀匀攀 渀漀渀 瘀甀漀椀 挀愀洀戀椀愀爀攀 氀愀 瀀愀猀猀眀漀爀搀 愀琀琀甀愀氀攀Ⰰ 氀愀猀挀椀愀 瘀甀漀琀漀 椀氀 挀愀洀瀀漀 ∀瀀愀猀猀眀漀爀搀∀✀Ⰰഀ਀        ✀瀀愀猀猀眀漀爀搀✀ 㴀㸀 ✀倀愀猀猀眀漀爀搀✀Ⰰഀ਀        ✀甀猀攀爀开愀挀琀椀瘀攀开挀瀀✀ 㴀㸀 ✀唀琀攀渀琀攀 愀琀琀椀瘀漀✀Ⰰഀ਀        ✀甀猀攀爀开最爀漀甀瀀开挀瀀✀ 㴀㸀 ✀䜀爀甀瀀瀀漀 甀琀攀渀琀攀✀Ⰰഀ਀        ✀甀猀攀爀开攀洀愀椀氀✀ 㴀㸀 ✀䔀洀愀椀氀✀Ⰰഀ਀        ✀甀猀攀爀开眀攀戀开猀椀琀攀✀ 㴀㸀 ✀匀椀琀漀 眀攀戀✀Ⰰഀ਀        ✀挀爀攀愀琀攀开渀攀眀开甀猀攀爀✀ 㴀㸀 ✀䌀爀攀愀 渀甀漀瘀漀 甀琀攀渀琀攀✀Ⰰഀ਀        ✀甀猀攀爀开昀爀漀洀✀ 㴀㸀 ✀䐀漀瘀攀 瘀椀瘀攀✀Ⰰഀ਀        ✀甀猀攀爀开椀渀琀攀爀攀猀琀猀✀ 㴀㸀 ✀䤀渀琀攀爀攀猀猀椀✀Ⰰഀ਀        ✀甀猀攀爀开漀挀挀✀ 㴀㸀 ✀伀挀挀甀瀀愀稀椀漀渀攀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 甀琀椀氀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀唀吀䤀䰀开倀䠀倀✀⤀⤀ ␀氀愀渀最开甀琀椀氀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀刀椀搀椀洀攀渀猀椀漀渀愀 椀洀洀愀最椀渀椀✀Ⰰഀ਀        ✀眀栀愀琀开椀琀开搀漀攀猀✀ 㴀㸀 ✀䌀漀猀愀 昀愀✀Ⰰഀ਀        ✀眀栀愀琀开甀瀀搀愀琀攀开琀椀琀氀攀猀✀ 㴀㸀 ✀䄀最最椀漀爀渀愀 琀椀琀漀氀椀 搀愀 渀漀洀攀 昀椀氀攀✀Ⰰഀ਀        ✀眀栀愀琀开搀攀氀攀琀攀开琀椀琀氀攀✀ 㴀㸀 ✀䌀愀渀挀攀氀氀愀 琀椀琀漀氀椀✀Ⰰഀ਀        ✀眀栀愀琀开爀攀戀甀椀氀搀✀ 㴀㸀 ✀刀椀挀漀猀琀爀甀椀猀挀攀 洀椀渀椀愀琀甀爀攀 攀 椀洀洀愀最椀渀椀 爀椀搀椀洀攀渀猀椀漀渀愀琀攀✀Ⰰഀ਀        ✀眀栀愀琀开搀攀氀攀琀攀开漀爀椀最椀渀愀氀猀✀ 㴀㸀 ✀䌀愀渀挀攀氀氀愀 椀洀洀愀最椀渀椀 漀爀椀最椀渀愀氀椀 攀 猀漀猀琀椀琀甀椀猀挀攀 挀漀渀 瘀攀爀猀椀漀渀攀 爀椀搀椀洀攀渀猀椀漀渀愀琀愀✀Ⰰഀ਀        ✀昀椀氀攀✀ 㴀㸀 ✀䘀椀氀攀✀Ⰰഀ਀        ✀琀椀琀氀攀开猀攀琀开琀漀✀ 㴀㸀 ✀琀椀琀漀氀漀 椀洀瀀漀猀琀愀琀漀 愀✀Ⰰഀ਀        ✀猀甀戀洀椀琀开昀漀爀洀✀ 㴀㸀 ✀攀猀攀最甀椀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀搀开猀甀挀挀攀猀昀甀氀氀礀✀ 㴀㸀 ✀愀最最椀漀爀渀愀洀攀渀琀漀 爀椀甀猀挀椀琀漀✀Ⰰഀ਀        ✀攀爀爀漀爀开挀爀攀愀琀攀✀ 㴀㸀 ✀䔀刀刀伀刀䔀 挀爀攀愀渀搀漀✀Ⰰഀ਀        ✀挀漀渀琀椀渀甀攀✀ 㴀㸀 ✀倀爀漀挀攀猀猀愀 瀀椀쌀뤀 椀洀洀愀最椀渀椀✀Ⰰഀ਀        ✀洀愀椀渀开猀甀挀挀攀猀猀✀ 㴀㸀 ✀䤀氀 昀椀氀攀 ─猀 쌀ꠀ 猀琀愀琀漀 椀洀瀀漀猀琀愀琀漀 挀漀洀攀 椀洀洀愀最椀渀攀 瀀爀椀渀挀椀瀀愀氀攀✀Ⰰഀ਀        ✀攀爀爀漀爀开爀攀渀愀洀攀✀ 㴀㸀 ✀䔀爀爀漀爀攀 爀椀渀漀洀椀渀愀渀搀漀 ─猀 椀渀 ─猀✀Ⰰഀ਀        ✀攀爀爀漀爀开渀漀琀开昀漀甀渀搀✀ 㴀㸀 ✀䤀氀 昀椀氀攀 ─猀 渀漀渀 쌀ꠀ 猀琀愀琀漀 琀爀漀瘀愀琀漀✀Ⰰഀ਀        ✀戀愀挀欀✀ 㴀㸀 ✀琀漀爀渀愀 愀氀 洀攀渀甀 瀀爀椀渀挀椀瀀愀氀攀✀Ⰰഀ਀        ✀琀栀甀洀戀猀开眀愀椀琀✀ 㴀㸀 ✀䄀最最椀漀爀渀愀洀攀渀琀漀 洀椀渀椀愀琀甀爀攀 攀⼀漀 椀洀洀愀最椀渀椀 爀椀搀椀洀攀渀猀椀漀渀愀琀攀Ⰰ 愀琀琀攀渀搀椀⸀⸀⸀✀Ⰰഀ਀        ✀琀栀甀洀戀猀开挀漀渀琀椀渀甀攀开眀愀椀琀✀ 㴀㸀 ✀䌀漀渀琀椀渀甀愀 愀最最椀漀爀渀愀洀攀渀琀漀 洀椀渀椀愀琀甀爀攀 攀⼀漀 椀洀洀愀最椀渀椀 爀椀搀椀洀攀渀猀椀漀渀愀琀攀⸀⸀⸀✀Ⰰഀ਀        ✀琀椀琀氀攀猀开眀愀椀琀✀ 㴀㸀 ✀䄀最最椀漀爀渀愀洀攀渀琀漀 琀椀琀漀氀椀Ⰰ 愀琀琀攀渀搀椀⸀⸀⸀✀Ⰰഀ਀        ✀搀攀氀攀琀攀开眀愀椀琀✀ 㴀㸀 ✀䌀愀渀挀攀氀氀愀稀椀漀渀攀 琀椀琀漀氀椀Ⰰ 愀琀琀攀渀搀椀⸀⸀⸀✀Ⰰഀ਀        ✀爀攀瀀氀愀挀攀开眀愀椀琀✀ 㴀㸀 ✀䌀愀渀挀攀氀氀愀稀椀漀渀攀 漀爀椀最椀渀愀氀椀 攀 猀漀猀琀椀琀甀稀椀漀渀攀 挀漀渀 椀洀洀愀最椀渀椀 爀椀搀椀洀攀渀猀椀漀渀愀琀攀Ⰰ 愀琀琀攀渀搀椀⸀⸀✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀✀ 㴀㸀 ✀䤀猀琀爀甀稀椀漀渀椀 爀愀瀀椀搀攀✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开愀挀琀椀漀渀✀ 㴀㸀 ✀匀挀攀最氀椀 愀稀椀漀渀攀✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开瀀愀爀愀洀攀琀攀爀✀ 㴀㸀 ✀䤀洀瀀漀猀琀愀 瀀愀爀愀洀攀琀爀椀✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开愀氀戀甀洀✀ 㴀㸀 ✀匀挀攀最氀椀 愀氀戀甀洀✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开瀀爀攀猀猀✀ 㴀㸀 ✀倀爀攀洀椀 嬀猀甀戀洀椀琀崀─猀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀✀ 㴀㸀 ✀䄀最最椀漀爀渀愀 洀椀渀椀愀琀甀爀攀 攀⼀漀 椀洀洀愀最椀渀椀 爀椀搀椀洀攀渀猀椀漀渀愀琀攀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开眀栀愀琀✀ 㴀㸀 ✀䌀漀猀愀 愀最最椀漀爀渀愀爀攀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开琀栀甀洀戀✀ 㴀㸀 ✀匀漀氀漀 洀椀渀椀愀琀甀爀攀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开瀀椀挀✀ 㴀㸀 ✀匀漀氀漀 椀洀洀愀最椀渀椀 爀椀搀椀洀攀渀猀椀漀渀愀琀攀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开戀漀琀栀✀ 㴀㸀 ✀匀椀愀 氀攀 洀椀渀椀愀琀甀爀攀 挀栀攀 氀攀 椀洀洀愀最椀渀椀 爀椀搀椀洀攀渀猀椀漀渀愀琀攀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开渀甀洀戀攀爀✀ 㴀㸀 ✀一甀洀攀爀漀 搀椀 椀洀洀愀最椀渀椀 攀氀愀戀漀爀愀琀攀 瀀攀爀 挀氀椀挀欀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开漀瀀琀椀漀渀✀ 㴀㸀 ✀⠀倀爀漀瘀愀 愀搀 椀洀瀀漀猀琀愀爀攀 焀甀攀猀琀愀 漀瀀稀椀漀渀攀 愀搀 甀渀 瘀愀氀漀爀攀 戀愀猀猀漀 猀攀 栀愀椀 瀀爀漀戀氀攀洀椀 搀椀 琀椀洀攀漀甀琀⤀✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开琀椀琀氀攀✀ 㴀㸀 ✀一漀洀攀 䘀椀氀攀 ☀爀䄀爀爀㬀 吀椀琀漀氀漀 䤀洀洀愀最椀渀攀✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开栀漀眀✀ 㴀㸀 ✀䌀漀洀攀 洀漀搀椀昀椀挀愀爀攀 椀氀 渀漀洀攀 昀椀氀攀✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开爀攀洀漀瘀攀✀ 㴀㸀 ✀刀椀洀甀漀瘀椀 椀氀 ⸀樀瀀最 昀椀渀愀氀攀 攀 猀漀猀琀椀琀甀椀猀挀椀 开 ⠀甀渀搀攀爀猀挀漀爀攀⤀ 挀漀渀 猀瀀愀稀椀✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开攀甀爀漀✀ 㴀㸀 ✀䌀愀洀戀椀愀 ㈀　　㌀开㄀㄀开㈀㌀开㄀㌀开㈀　开㈀　⸀樀瀀最 椀渀 ㈀㌀⼀㄀㄀⼀㈀　　㌀ ㄀㌀㨀㈀　✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开甀猀✀ 㴀㸀 ✀䌀愀洀戀椀愀 ㈀　　㌀开㄀㄀开㈀㌀开㄀㌀开㈀　开㈀　⸀樀瀀最 椀渀 ㄀㄀⼀㈀㌀⼀㈀　　㌀ ㄀㌀㨀㈀　✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开琀椀洀攀✀ 㴀㸀 ✀䌀愀洀戀椀愀 ㈀　　㌀开㄀㄀开㈀㌀开㄀㌀开㈀　开㈀　⸀樀瀀最 椀渀 ㄀㌀㨀㈀　✀Ⰰഀ਀        ✀搀攀氀攀琀攀✀ 㴀㸀 ✀䌀愀渀挀攀氀氀愀 琀椀琀漀氀椀 椀洀洀愀最椀渀椀 漀 椀洀洀愀最椀渀椀 挀漀渀 搀椀洀攀渀猀椀漀渀椀 漀爀椀最椀渀愀氀椀✀Ⰰഀ਀        ✀搀攀氀攀琀攀开琀椀琀氀攀✀ 㴀㸀 ✀䌀愀渀挀攀氀氀愀 琀椀琀漀氀椀 椀洀洀愀最椀渀椀✀Ⰰഀ਀        ✀搀攀氀攀琀攀开漀爀椀最椀渀愀氀✀ 㴀㸀 ✀䌀愀渀挀攀氀氀愀 氀攀 椀洀洀愀最椀渀椀 漀爀椀最椀渀愀氀椀✀Ⰰഀ਀        ✀搀攀氀攀琀攀开爀攀瀀氀愀挀攀✀ 㴀㸀 ✀䌀愀渀挀攀氀氀愀 氀攀 椀洀洀愀最椀渀椀 漀爀椀最椀渀愀氀椀 猀漀猀琀椀琀甀攀渀搀漀氀攀 挀漀渀 氀愀 瘀攀爀猀椀漀渀攀 爀椀搀椀洀攀渀猀椀漀渀愀琀愀✀Ⰰഀ਀        ✀猀攀氀攀挀琀开愀氀戀甀洀✀ 㴀㸀 ✀匀挀攀最氀椀 愀氀戀甀洀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 瀀愀最攀琀椀琀氀攀⸀椀渀挀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀␀氀愀渀最开瀀愀最攀琀椀琀氀攀开瀀栀瀀 㴀 愀爀爀愀礀⠀ഀ਀✀搀椀瘀椀搀攀爀✀ 㴀㸀 ✀㸀✀Ⰰഀ਀    ✀瘀椀攀眀椀渀最✀ 㴀㸀 ✀䴀漀猀琀爀漀 䤀洀洀愀最椀渀攀✀Ⰰഀ਀    ✀甀猀爀✀ 㴀㸀 ∀✀猀 䜀愀氀氀攀爀椀愀 椀洀洀愀最椀渀椀∀Ⰰഀ਀    ✀瀀栀漀琀漀最愀氀氀攀爀礀✀ 㴀㸀 ✀䜀愀氀氀攀爀椀愀 椀洀洀愀最椀渀椀✀Ⰰഀ਀    ⤀㬀ഀ਀ഀ਀㼀㸀攀 