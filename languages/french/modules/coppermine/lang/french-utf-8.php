<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.2.2   nuke - Language Pack 0.93                //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003  Gregory DEMAR <gdemar@wanadoo.fr>               //
// http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// New Port by GoldenTroll                                                  //
// http://coppermine.findhere.org/                                          //
// Based on coppermine 1.1d by Surf  http://www.surf4all.net/               //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify     //
// it under the terms of the GNU General Public License as published by     //
// the Free Software Foundation; either version 2 of the License, or        //
// (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //
define('PIC_VIEWS', 'tèlèchargements');
define('PIC_VOTES', 'Votes');
define('PIC_COMMENTS', 'Commentaires');

// info about translators and translated language
$lang_translation_info = array(
    'lang_name_english' => 'French', // the name of your language in English, e.g. 'Greek' or 'Spanish'
    'lang_name_native' => 'Français', // the name of your language in your mother tongue (for non-latin alphabets, use unicode), e.g. '&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940;' or 'Espa&ntilde;ol'
    'lang_country_code' => 'fr', // the two-letter code for the country your language is most-often spoken (refer to http://www.iana.org/cctld/cctld-whois.htm), e.g. 'gr' or 'es'
    'trans_name' => 'mels', // the name of the translator - can be a nickname
    'trans_email' => 'mels@wanadoo.fr', // translator's email address (optional)
    'trans_website' => 'http://www.everlasting-star.net/', // translator's website (optional)
    'trans_date' => '2003-10-15', // the date the translation was created / last modified
    );

$lang_charset = 'ISO-8859-1';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Octets', 'Ko', 'Mo');
// Day of weeks and months
$lang_day_of_week = array('Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam');
$lang_month = array('Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aout', 'Sep', 'Oct', 'Nov', 'Dec');
// Some common strings
$lang_yes = 'Oui';
$lang_no = 'Non';
$lang_back = 'Retour';
$lang_continue = 'CONTINUER';
$lang_info = 'Information';
$lang_error = 'Erreur';
// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt = '%B %d, %Y';
$lastcom_date_fmt = '%m/%d/%y Ã  %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y Ã  %I:%M %p';
$comment_date_fmt = '%B %d, %Y Ã  %I:%M %p';
// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'merde', 'putain', 'enculÃ©*', 'salope', 'bite', 'cul', 'pute', 'pÃ©nis', 'clito', 'couille', 'pÃ©tasse', 'connard', 'salaud');

$lang_meta_album_names = array('random' => 'Images au hasard',
    'lastup' => 'Derniers ajouts',
    'lastupby' => 'My Last Additions', // new 1.2.2
    'lastalb' => 'Derniers albums mis en ligne',

    'lastcom' => 'Derniers commentaires',
    'lastcomby' => 'My Last comments', // new 1.2.2
    'topn' => 'Les plus populaires',
    'toprated' => 'Les mieux notÃ©es',
    'lasthits' => 'Les derniÃ¨res vues',
    'search' => 'RÃ©sultats de la recherche',

    'favpics' => 'Photos prÃ©fÃ©rÃ©es'

    );

$lang_errors = array('access_denied' => 'Vous n\'avez pas la permission d\'accÃ©der Ã  cette page.',
    'perm_denied' => 'Vous n\'avez pas la permission d\'effectuer cette opÃ©ration.',
    'param_missing' => 'Script appelÃ© sans les paramÃ¨tres nÃ©cessaires.',
    'non_exist_ap' => 'L\'album/la photo demandÃ©(e) n\'existe pas !',
    'quota_exceeded' => 'Espace disque dÃ©passÃ©<br /><br />Vous avez un quota d\'espace de [quota]K, vos photos utilisent [space]K, le fait d\'ajouter cette photo vous ferait dÃ©passer votre quota.',
    'gd_file_type_err' => 'L\'utilisation de "GD image library" ne vous permet d\'utiliser que de images de type JPEG et PNG.',
    'invalid_image' => 'L\'image que vous avez uploadÃ©e est corrompue ou ne peut pas Ãªtre prise en charge par GD library',
    'resize_failed' => 'Impossible de crÃ©er l\'vignette ou l\'image rÃ©duite.',
    'no_img_to_display' => 'Pas d\'image Ã  afficher',
    'non_exist_cat' => 'La catÃ©gorie sÃ©lectionnÃ©e n\'existe pas',
    'orphan_cat' => 'Une catÃ©gorie a un parent inexistant, utilisez le gestionnaire de catÃ©gories afin de remÃ©dier au problÃ¨me.',
    'directory_ro' => 'Le rÃ©peretoire \'%s\' n\'est pas inscriptible : les images ne peuvent Ãªtre supprimÃ©es.',
    'non_exist_comment' => 'Le commentaire sÃ©lectionnÃ© n\'existe pas.',
    'pic_in_invalid_album' => 'L\'image se trouve dans un album qui n\'existe pas (%s)!?',

    'banned' => 'Vous Ãªtes pour l\'instant banni de ce site.',

    'not_with_udb' => 'TCette fonction est dÃ©sactivÃ©e dans Coppermine parce que la gallerie est intÃ©grÃ©e Ã  un forum. Soit l\'action que vous essayez d\'effectuer n\'est pas disponible dans cette configuration, soit vous devez l\'effectuer Ã  partir du forum auquel vous avez intÃ©grÃ© la galerie.',

    'members_only' => 'This function is for members only, please join.', // changed in cpg1.2.0nuke
    'mustbe_god' => 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function'
    );
// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //
$lang_main_menu = array('alb_list_title' => 'Aller Ã  la liste des albums',
    'alb_list_lnk' => 'Liste des albums',
    'my_gal_title' => 'Aller dans ma galerie personnelle',
    'my_gal_lnk' => 'Ma galerie',
    'my_prof_lnk' => 'Mon profil',
    'adm_mode_title' => 'Passer en mode admin',
    'adm_mode_lnk' => 'Mode admin',
    'usr_mode_title' => 'Passer au mode utilisateur',
    'usr_mode_lnk' => 'Mode utilisateur',
    'upload_pic_title' => 'Uploader une image dans un album',
    'upload_pic_lnk' => 'Uploader une image',
    'register_title' => 'CrÃ©er un compte',
    'register_lnk' => 'Inscription',
    'login_lnk' => 'S\'identifier',
    'logout_lnk' => 'Quitter',
    'lastup_lnk' => 'Derniers ajouts',
    'lastcom_lnk' => 'Derniers commentaires',
    'topn_lnk' => 'Images les plus populaires',
    'toprated_lnk' => 'Images les mieux notÃ©es',
    'search_lnk' => 'Rechercher',
    'fav_lnk' => 'Mes favoris',

    );

$lang_gallery_admin_menu = array('upl_app_lnk' => 'Fichiers en attente',
    'config_lnk' => 'Configuration',
    'albums_lnk' => 'Albums',
    'categories_lnk' => 'Categories',
    'users_lnk' => 'Utilisateurs',
    'groups_lnk' => 'Groupes',
    'comments_lnk' => 'Commentaires',
    'searchnew_lnk' => 'FTP =>',
    'util_lnk' => 'Redimensionner les images',

    'ban_lnk' => 'Bannir des utilisateurs',

    );

$lang_user_admin_menu = array('albmgr_lnk' => 'CrÃ©er / classer mes albums',
    'modifyalb_lnk' => 'Modifier mes albums',
    'my_prof_lnk' => 'Mon profil',
    );

$lang_cat_list = array('category' => 'CatÃ©gorie',
    'albums' => 'Albums',
    'pictures' => 'Photos',
    );

$lang_album_list = array('album_on_page' => '%d albums sur %d page(s)'
    );

$lang_thumb_view = array('date' => 'DATE',
    'name' => 'NOM DU FICHIER',

    'title' => 'TITRE',

    'sort_da' => 'Classer par date ascendantes',
    'sort_dd' => 'Classer par date descendantes',
    'sort_na' => 'Classer par nom ascendants',
    'sort_nd' => 'Classer par nom descendants',
    'sort_ta' => 'Classer par titre ascendants',

    'sort_td' => 'Classer par titre descendants',

    'pic_on_page' => '%d photos sur %d page(s)',
    'user_on_page' => '%d utilisateurs sur %d page(s)',
    'sort_ra' => 'Sort by rating ascending', // new in cpg1.2.0nuke
    'sort_rd' => 'Sort by rating descending', // new in cpg1.2.0nuke
    'rating' => 'RATING', // new in cpg1.2.0nuke
    'sort_title' => 'Sort pictures by:', // new in cpg1.2.0nuke
    );

$lang_img_nav_bar = array('thumb_title' => 'Retourner Ã  la page des vignettes',
    'pic_info_title' => 'Afficher / cacher les informations sur l\'image',
    'slideshow_title' => 'Diaporama',
    'slideshow_disabled' => 'e-cards are disabled', // new in cpg1.2.0nuke
    'slideshow_disabled_msg' => $lang_errors['members_only'], // new in cpg1.2.0nuke
    'ecard_title' => 'Envoyer cette image en tant que carte Ã©lectronique',
    'ecard_disabled' => 'les cartes Ã©lectroniques sont dÃ©sactivÃ©es',
    'ecard_disabled_msg' => 'Vous n\'avez pas l\'autorisation d\'envoyer des cartes',
    'prev_title' => 'Voir l\'image prÃ©cÃ©dente',
    'next_title' => 'Voir l\'image suivante',
    'pic_pos' => 'PHOTO %s/%s',
    'no_more_images' => 'There are no more images in this gallery', // new in cpg1.2.0nuke
    'no_less_images' => 'This is the first image in the gallery', // new in cpg1.2.0nuke
    );

$lang_rate_pic = array('rate_this_pic' => 'Noter cette image ',
    'no_votes' => '(Pas encore de vote)',
    'rating' => '(note actuelle : %s / 5 pour %s votes)',
    'rubbish' => 'TrÃ¨s mauvais',
    'poor' => 'Pauvre',
    'fair' => 'Moyen',
    'good' => 'Bon',
    'excellent' => 'Excellent',
    'great' => 'Superbe',
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
    CRITICAL_ERROR => 'Erreur critique',
    'file' => 'Fichier: ',
    'line' => 'Ligne: ',
    );

$lang_display_thumbnails = array('filename' => 'Nom du fichier : ',
    'filesize' => 'Poids du fichier : ',
    'dimensions' => 'Dimensions : ',
    'date_added' => 'AjoutÃ© le : '
    );

$lang_get_pic_data = array('n_comments' => '%s commentaires',
    'n_views' => '%s tÃ©lÃ©chargements',
    'n_votes' => '(%s votes)'
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
        'Very Happy' => 'TrÃ¨s heureux',
        'Smile' => 'Sourire',
        'Sad' => 'Triste',
        'Surprised' => 'Surpris',
        'Shocked' => 'ChoquÃ©',
        'Confused' => 'Confus',
        'Cool' => 'Cool',
        'Laughing' => 'Rire',
        'Mad' => 'Fou',
        'Razz' => 'Razz',
        'Embarassed' => 'EmbarassÃ©',
        'Crying or Very sad' => 'Pleure ou trÃ¨s triste',
        'Evil or Very Mad' => 'Diabolique ou trÃ¨s en colÃ¨re',
        'Twisted Evil' => 'Sadique',
        'Rolling Eyes' => 'LÃ¨ve les yeux au ciel',
        'Wink' => 'Clin d\'oeil',
        'Idea' => 'IdÃ©e',
        'Arrow' => 'FlÃ¨che',
        'Neutral' => 'Neutre',
        'Mr. Green' => 'Mr. Green',
        );
// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //
// void
// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) $lang_admin_php = array(0 => 'DÃ©connexion du mode administrateur...',
        1 => 'Passage au mode administrateur...',
        );
// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) $lang_albmgr_php = array('alb_need_name' => 'Les albums doivent avoir un nom !',
        'confirm_modifs' => 'Voulez-vous vraiment effectuer ces modifications ?',
        'no_change' => 'Vous n\'avez effectuÃ© aucun changement !',
        'new_album' => 'Nouvel album',
        'confirm_delete1' => 'Voulez vous vraiment supprimer cet album ?',
        'confirm_delete2' => '\nToutes les images et tous les commentaires seront perdus !',
        'select_first' => 'Selectionnez d\'abord un album',
        'alb_mrg' => 'Gestionnaire d\'album',
        'my_gallery' => '* Ma galerie *',
        'no_category' => '* Pas de catÃ©gorie *',
        'delete' => 'Supprimer',
        'new' => 'Nouveau',
        'apply_modifs' => 'Appliquer les modifications',
        'select_category' => 'SÃ©lectionner une categorie',
        );
// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) $lang_catmgr_php = array('miss_param' => 'Les paramÃ¨tres requis pour l\'\'%s\'operation sont manquants !',
        'unknown_cat' => 'La catÃ©gorie sÃ©lectionnÃ©e n\'existe pas dans la base de donnÃ©es',
        'usergal_cat_ro' => 'La galerie des utilisateurs ne peut pas Ãªtre supprimÃ©e!',
        'manage_cat' => 'GÃ©rer les catÃ©gories',
        'confirm_delete' => 'Voulez vous vraiment SUPPRIMER cette catÃ©gorie ?',
        'category' => 'Categorie',
        'operations' => 'OpÃ©rations',
        'move_into' => 'DÃ©placer dans',
        'update_create' => 'Mettre Ã  jour / crÃ©er la catÃ©gorie',
        'parent_cat' => 'CatÃ©gorie parente',
        'cat_title' => 'Titre de la catÃ©gorie',
        'cat_desc' => 'Description de la catÃ©gorie'
        );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
if (defined('CONFIG_PHP')) $lang_config_php = array('title' => 'Configuration',
        'restore_cfg' => 'Restorer les paramÃ¨tres d\'origine',
        'save_cfg' => 'Sauvergarder la nouvelle configuration',
        'notes' => 'Notes',
        'info' => 'Information',
        'upd_success' => 'La configuration de Coppermine a Ã©tÃ© mise Ã  jour',
        'restore_success' => 'La configuration d\'origine de Coppermine a Ã©tÃ© restaurÃ©e',
        'name_a' => 'Nom ascendant',
        'name_d' => 'Nom descendant',
        'title_a' => 'Titre ascendand',

        'title_d' => 'Titre descendant',

        'date_a' => 'Date ascendante',
        'date_d' => 'Date descendante',
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
        'ParamÃ¨tres gÃ©nÃ©raux',
        array(
            'Nom de la galerie', 'gallery_name', 0),
        array(
            'Description de la galerie', 'gallery_description', 0),
        array(
            'Email de l\'administrateur de la galerie', 'gallery_admin_email', 0),
        array(
            'Adresse sur laquelle le lien \'Voir plus de photos\' des e-cards doit pointer', 'ecards_more_pic_target', 0),
        array(
            'Langage', 'lang', 5),
// for postnuke change
        array('ThÃ¨me', 'cpgtheme', 6),
        array(
            'Page Specific Titles instead of >Coppermine', 'nice_titles', 1), 
        array('Show blocks on the right', 'right_blocks', 1), // new 1.2.2
        // 'Album list view',
        'Affichage de la liste des albums',
        array(
            'Largeur du tableau principal (pixels ou %)', 'main_table_width', 0),
        array(
            'Nombre de niveaux de catÃ©gories Ã  afficher', 'subcat_level', 0),
        array(
            'Nombre d\'albums Ã  afficher', 'albums_per_page', 0),
        array(
            'Nombre de colonnes pour la liste des albums', 'album_list_cols', 0),
        array(
            'Taille des vignettes en pixels', 'alb_list_thumb_size', 0),
        array(
            'Le contenu de la page principale', 'main_page_layout', 0),
        array(
            'Afficher les vignettes de l\'album du premier niveau avec la catÃ©gorie', 'first_level', 1),

        'Affichage des vignettes',
        array(
            'Nombre de colonnes sur la page des vignettes', 'thumbcols', 0),
        array(
            'Nombre de lignes sur la page des vignettes', 'thumbrows', 0),
        array(
            'Nombre maximal d\'onglets Ã  afficher', 'max_tabs', 0),
        array(
            'Afficher la lÃ©gende de l\'image (en plus de son titre) sous la vignette', 'caption_in_thumbview', 1),
        array(
            'Afficher le nombre de commentaires sous les vignettes', 'display_comment_count', 1),
        array(
            'Classement par dÃ©faut des images', 'default_sort_order', 3),
        array(
            'Nombre minimum de votes nÃ©cessaires pour qu\'une image apparaisse dans la liste des images les mieux notÃ©es', 'min_votes_for_rating', 0),

        'Affichage des images &amp; paramÃ¨tres des commentaires',
        array(
            'Largeur du tableau pour l\'affichage des images (pixels ou %)', 'picture_table_width', 0),
        array(
            'Les informations relatives Ã  l\'image sont affichÃ©es par dÃ©faut', 'display_pic_info', 1),
        array(
            'Filtrer les gros mots dans les commentaires', 'filter_bad_words', 1),
        array(
            'Autoriser les smileys dans les commentaires', 'enable_smilies', 1),
        array(
            'Allow several consecutive comments on one pic from the same user', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
        array(
            'Email site admin upon comment submission' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
        array(
            'Longueur maximale pour la description des images', 'max_img_desc_length', 0),
        array(
            'Nombre maximal de lettres pour un mot', 'max_com_wlength', 0),
        array(
            'Nombre maximal de lignes pour un commentaire', 'max_com_lines', 0),
        array(
            'Longueur maximale d\'un commentaire', 'max_com_size', 0),
        array(
            'Afficher le nÃ©gatif', 'display_film_strip', 1),

        array(
            'Nombre d\'images par nÃ©gatif', 'max_film_strip_items', 0),

        array(
            'Allow viewing of full size pic by anonymous', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
        array('Number of days between being able to vote on the same image','keep_votes_time',0), // new in cpg1.2.2c nuke
//'Pictures and thumbnails settings',
        'ParamÃ¨tres des images et vignettes',
        array(
            'QualitÃ© pour les fichiers JPG', 'jpeg_qual', 0),
        array(
            'Dimension maximale pour les vignettes <b>*</b>', 'thumb_width', 0),

        array(
            'Utiliser la dimension ( largeur ou hauteur ou aspect max pour la vignette)<b>*</b>', 'thumb_use', 7),

        array(
            'CrÃ©er des images intermÃ©diaires', 'make_intermediate', 1),
        array(
            'Largeur ou hauteur maximale pour une image intermÃ©diaire <b>*</b>', 'picture_width', 0),
        array(
            'Poids max des images Ã  uploader (Ko)', 'max_upl_size', 0),
        array(
            'Longueur ou hauteur maximale pour les images uploadÃ©es (en pixels)', 'max_upl_width_height', 0), 
        array('Allow multiple Files to be upload with same file name', 'samename', 1), 
        // 'User settings',
        'ParamÃ¨tres Utilisateurs',
        array(
            'Autoriser de nouvelles inscriptions', 'allow_user_registration', 1),
        array(
            'L\'inscription d\'un nouvel utilisateur doit Ãªtre validÃ©e', 'reg_requires_valid_email', 1),
        array(
            'Autoriser deux utilisateurs Ã  avoir le mÃªme e-mail', 'allow_duplicate_emails_addr', 1),
        array(
            'Les utilisateurs peuvent avoir un album personnel', 'allow_private_albums', 1), 
        array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',
        'Champs libres pour les descriptions d\'images (Ã  laisser tel quel si vous n\'utilisez pas cette fonction)',
        array(
            'Nom du champ 1', 'user_field1_name', 0),
        array(
            'Nom du champ 2', 'user_field2_name', 0),
        array(
            'Nom du champ 3', 'user_field3_name', 0),
        array(
            'Nom du champ 4', 'user_field4_name', 0), 
        // 'Pictures and thumbnails advanced settings',
        'ParamÃ¨tres avancÃ©s des images et vignettes',
        array(
            'Afficher l\'icÃ´ne des albums privÃ©s aux utilisateurs non indentifiÃ©s', 'show_private', 1),

        array(
            'CaratÃ¨res interdits dans les noms de fichiers', 'forbiden_fname_char', 0),
        array(
            'Extensions de fichiers acceptÃ©es pour les images Ã  uploader', 'allowed_file_extensions', 0),
        array(
            'MÃ©thode utilisÃ©e pour redimensionner les images', 'thumb_method', 2),
        array(
            'Chemin vers l\'utilitaire de conversion ImageMagick (exemple : /usr/bin/X11/)', 'impath', 0),
        array(
            'Type d\'images autorisÃ©es (valide seulement pour ImageMagick)', 'allowed_img_types', 0),
        array(
            'Options de ligne de commande pour ImageMagick', 'im_options', 0),
        array(
            'Lire les informations EXIF dans les fichiers JPEG', 'read_exif_data', 1),
        array(
            'Read IPTC data in JPEG files', 'read_iptc_data', 1), // new in cpg1.2.0nuke
        array(
            'RÃ©pertoire de stockage de l\'album <b>*</b>', 'fullpath', 0),
        array(
            'RÃ©pertoire pour les images des utilisateurs <b>*</b>', 'userpics', 0),
        array(
            'PrÃ©fixe des images intermÃ©diares <b>*</b>', 'normal_pfx', 0),
        array(
            'PrÃ©fixe pour les vignettes <b>*</b>', 'thumb_pfx', 0),
        array(
            'Mode par dÃ©faut des rÃ©pertoires', 'default_dir_mode', 0),
        array(
            'Mode par dÃ©faut des images', 'default_file_mode', 0),
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
        'Cookies &amp; paramÃ¨tres d\'encodage des caractÃ¨res',
        array(
            'Nom du cookie utilisÃ© par le script', 'cookie_name', 0),
        array(
            'Chemin du cookie utilisÃ© par le script', 'cookie_path', 0),
        array(
            'Encodage des caractÃ¨res', 'charset', 4), 
        // 'Miscellaneous settings',
        'Divers',
        array(
            'Activer le mode debug', 'debug_mode', 1),
        array(
'Enable advanced debug mode', 'advanced_debug_mode', 1), // new in cpg1.2.0nuke
array(
'Show Coppermine Update Alert to Admin', 'showupdate', 1), // new 1.2.2
        '<br /><div align="center">(*) Les champs marquÃ©s d\'un * ne doivent pas Ãªtre modifiÃ©s si des images existent dÃ©jÃ  !</div><br />'
        );
// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) $lang_db_input_php = array('empty_name_or_com' => 'Vous devez taper votre nom et un commentaire',
        'com_added' => 'Votre commentaire a Ã©tÃ© ajoutÃ©',
        'alb_need_title' => 'Vous devez donner un titre Ã  l\'album !',
        'no_udp_needed' => 'Aucune mise Ã  jour n\'est nÃ©cessaire.',
        'alb_updated' => 'L\'album a Ã©tÃ© mis Ã  jour',
        'unknown_album' => 'L\'album sÃ©lectionnÃ© n\'existe pas ou bien vous n\'avez pas la permission d\'uploader dans cet album',
        'no_pic_uploaded' => 'Aucune image n\'a Ã©tÃ© uploadÃ©e !<br /><br />Si vous avez vraiment sÃ©lectionnÃ© une image Ã  uploader, vÃ©rifier que le serveur autorise l\'upload de fichiers...',
        'err_mkdir' => 'Impossible de crÃ©er le rÃ©pertoire %s !',
        'dest_dir_ro' => 'Le rÃ©pertoire de destination (%s) ne dispose pas des droits d\'Ã©criture nÃ©cessaires pour le script!',
        'err_move' => 'Impossible de dÃ©placer %s vers %s !',
        'err_fsize_too_large' => 'La taille de l\'image que vous avez uploadÃ© est trop grande (le maximum autorisÃ© est de %s x %s) !',
        'err_imgsize_too_large' => 'Le poids du fichier que vous avez uploadÃ© est trop important (le maximum autorisÃ© est de %s Ko) !',
        'err_invalid_img' => 'Le fichier que vous avez uploadÃ© n\'est pas une image valide!',
        'allowed_img_types' => 'Vous ne pouvez uploader que %s images.',
        'err_insert_pic' => 'Les images \'%s\' ne peuvent pas Ãªtre insÃ©rÃ©es dans l\'album ',
        'upload_success' => 'Votre image a Ã©tÃ© correctement uploadÃ©e<br /><br />Elle sera visible aprÃ¨s validation de l\'administrateur.',
        'info' => 'Information',
        'com_added' => 'Commentaire ajoutÃ©',
        'alb_updated' => 'Album mis Ã  jour',
        'err_comment_empty' => 'Votre commentaire est vide!',
        'err_invalid_fext' => 'Seuls les fichiers avec les extensions suivantes sont autorisÃ©s : <br /><br />%s.',
        'no_flood' => 'Nous sommes dÃ©solÃ©s, mais vous Ãªtes dÃ©jÃ  l\'auteur du dernier commentaire postÃ© au sujet de cette image.<br /><br />Vous pouvez tout simplement Ã©diter votre message prÃ©cÃ©dent si vous souhaitez le modifier ou bien ajouter des informations.',
        'redirect_msg' => 'Redirection en cours.<br /><br /><br />Cliquez sur \'CONTINUER\' si la page ne se recharge pas automatiquement',
        'upl_success' => 'Votre image a Ã©tÃ© correctement ajoutÃ©e',
        );
// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) $lang_delete_php = array('caption' => 'LÃ©gende',
        'fs_pic' => 'image en taille rÃ©elle',
        'del_success' => 'suppression rÃ©ussie',
        'ns_pic' => 'image en taille normale',
        'err_del' => 'ne peut pas Ãªtre supprimÃ©',
        'thumb_pic' => 'vignette',
        'comment' => 'commentaire',
        'im_in_alb' => 'image dans l\'album',
        'alb_del_success' => 'Album \'%s\' supprimÃ©s',
        'alb_mgr' => 'Gestionnaire d\'album',
        'err_invalid_data' => 'DonnÃ©es non valides reÃ§ues dans \'%s\'',
        'create_alb' => 'CrÃ©ation de l\'album \'%s\'',
        'update_alb' => 'Mise Ã  jour de l\'album \'%s\' avec le titre \'%s\' et index \'%s\'',
        'del_pic' => 'Supprimer l\'image',
        'del_alb' => 'Supprimer l\'album',
        'del_user' => 'Supprimer l\'utilisateur',
        'err_unknown_user' => 'L\'utilisateur sÃ©lectionnÃ© n\'existe pas !',
        'comment_deleted' => 'Le commentaire a Ã©tÃ© supprimÃ© avec succÃ¨s',
        );
// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //
// Void
// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')) {
    $lang_display_image_php = array('confirm_del' => 'Voulez vous vraiment SUPPRIMER cette image?\\nLes commentaires seront Ã©galement supprimÃ©s.',
        'del_pic' => 'SUPPRIMER CETTE IMAGE',
        'size' => '%s x %s pixels',
        'views' => '%s fois',
        'slideshow' => 'Diaporama',
        'stop_slideshow' => 'ARRETER LE DIAPORAMA',
        'view_fs' => 'Cliquez pour voir l\'image en taille rÃ©elle',
        );

    $lang_picinfo = array('title' => 'Informations sur l\'image',
        'Filename' => 'Nom du fichier',
        'Album name' => 'Nom de l\'album',
        'Rating' => 'Note (%s votes)',
        'Keywords' => 'Mots clefs',
        'File Size' => 'Taille du fichier',
        'Dimensions' => 'Dimensions',
        'Displayed' => 'AffichÃ©es',
        'Camera' => 'Appareil photos',
        'Date taken' => 'Date de la prise de vue',
        'Aperture' => 'Ouverture',
        'Exposure time' => 'Temps d\'exposition',
        'Focal length' => 'Focale',
        'Comment' => 'Commentaires',
        'addFav' => 'Ajouter aux favoris',

        'addFavPhrase' => 'Favoris',

        'remFav' => 'Supprimer des favoris',

        'iptcTitle' => 'IPTC Title', // new in cpg1.2.0nuke
        'iptcCopyright' => 'IPTC Copyright', // new in cpg1.2.0nuke
        'iptcKeywords' => 'IPTC Keywords', // new in cpg1.2.0nuke
        'iptcCategory' => 'IPTC Category', // new in cpg1.2.0nuke
        'iptcSubCategories' => 'IPTC Sub Categories', // new in cpg1.2.0nuke
        'bookmark_page' => 'Bookmark Image', // new in cpg1.2.0nuke
        );

    $lang_display_comments = array('OK' => 'OK',
        'edit_title' => 'Modifier ce commentaire',
        'confirm_delete' => 'Voulez vous vraiment supprimer ce commentaire?',
        'add_your_comment' => 'Ajoutez votre commentaire',
        'name' => 'Nom',

        'comment' => 'Commentaire',

        'your_name' => 'Anonyme',

        );

    $lang_fullsize_popup = array('click_to_close' => 'Cliquez sur l\'image pour fermer la fenÃªtre',

        );
} 
// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //
if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php = array('title' => 'Envoyer en tant que e-card',
        'invalid_email' => '<b>Attention</b> : cette adresse e-mail n\'est pas valide !',
        'ecard_title' => 'Une e-card pour vous, de la part de %s',
        'view_ecard' => 'Si votre e-card ne s\'affiche pas correctement, cliquez ici',
        'view_more_pics' => 'Suivez ce lien pour dÃ©couvrir davantage de photos !',
        'send_success' => 'Votre ecard a Ã©tÃ© envoyÃ©e',
        'send_failed' => 'Nous sommes dÃ©solÃ©s, mais le serveur n\'a pu envoyer votre e-card...',
        'from' => 'De la part de',
        'your_name' => 'Votre nom',
        'your_email' => 'Votre adresse e-mail',
        'to' => 'A',
        'rcpt_name' => 'Nom du destinataire',
        'rcpt_email' => 'Adresse e-mail du destinataire',
        'greetings' => 'Introduction',
        'message' => 'Message',
        );
// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //
if (defined('EDITPICS_PHP')) $lang_editpics_php = array('pic_info' => 'Informations sur l\'image',
        'album' => 'Album',
        'title' => 'Titre',
        'desc' => 'Description',
        'keywords' => 'Mots clefs',
        'pic_info_str' => '%sx%s - %sKo - %s affichages - %s votes',
        'approve' => 'Approuver',
        'postpone_app' => 'Approuver plus tard',
        'del_pic' => 'Supprimer l\'image',
        'reset_view_count' => 'Remettre le compteur des tÃ©lÃ©chargements Ã  zÃ©ro',
        'reset_votes' => 'Remettre le compteur de votes Ã  zÃ©ro',
        'del_comm' => 'Supprimer les commentaires',
        'upl_approval' => 'Autorisation d\'upload',
        'edit_pics' => 'Modifier les images',
        'see_next' => 'Voir les images suivantes',
        'see_prev' => 'Voir les images prÃ©cÃ©dentes',
        'n_pic' => '%s images',
        'n_of_pic_to_disp' => 'NumÃ©ro de l\'image Ã  afficher',
        'apply' => 'Appliquer les modifications'
        );
// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array('group_name' => 'Nom du groupe',
        'disk_quota' => 'Quota disque',
        'can_rate' => 'Peut noter les images',
        'can_send_ecards' => 'Peut envoyer des ecards',
        'can_post_com' => 'Peut Ã©crire des commentaires',
        'can_upload' => 'Peut mettre des photos en ligne',
        'can_have_gallery' => 'Peut avoir une galerie perso',
        'apply' => 'Appliquer les modifications',
        'create_new_group' => 'CrÃ©er un nouveau groupe',
        'del_groups' => 'Supprimer le(s) groupe(s) sÃ©lectionnÃ©(s)',
        'confirm_del' => 'Attention, lorsque vous supprimez un groupe, les utilisateurs de ce groupe seront transfÃ©rÃ©s dans le groupe d\'utilisateurs \'EnregistrÃ©\'!\n\nSouhaitez-vous continuer?',
        'title' => 'GÃ©rer les groupes d\'utilisateurs',
        'approval_1' => 'Autorisation d\'upload pub. (1)',
        'approval_2' => 'Autorisation d\'upload priv. (2)',
        'note1' => '<b>(1)</b> Les uploads dans un album public doivent Ãªtre approuvÃ©s par un administrateur',
        'note2' => '<b>(2)</b> Les uploads dans un album qui appartient Ã  l\'utilisateur doivent Ãªtre approuvÃ©s par un admin',
        'notes' => 'Remarques'
        );
// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')) {
    $lang_index_php = array('welcome' => 'Bienvenue!'
        );

    $lang_album_admin_menu = arr礀⠀✀挀漀渀昀椀爀洀开搀攀氀攀琀攀✀ 㴀㸀 ✀嘀漀甀氀攀稀ⴀ瘀漀甀猀 嘀刀䄀䤀䴀䔀一吀 猀甀瀀瀀爀椀洀攀爀 挀攀琀 愀氀戀甀洀 㼀 尀尀渀吀漀甀琀攀猀 氀攀猀 瀀栀漀琀漀猀 攀琀 琀漀甀猀 氀攀猀 挀漀洀洀攀渀琀愀椀爀攀猀 猀攀爀漀渀琀 瀀攀爀搀甀猀⸀✀Ⰰഀ਀        ✀搀攀氀攀琀攀✀ 㴀㸀 ✀匀唀倀倀刀䤀䴀䔀刀✀Ⰰഀ਀        ✀洀漀搀椀昀礀✀ 㴀㸀 ✀倀刀伀倀刀䤀䔀吀䔀匀✀Ⰰഀ਀        ✀攀搀椀琀开瀀椀挀猀✀ 㴀㸀 ✀䴀伀䐀䤀䘀䤀䔀刀 䰀䔀匀 倀䠀伀吀伀匀✀Ⰰഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开氀椀猀琀开挀愀琀攀最漀爀椀攀猀 㴀 愀爀爀愀礀⠀✀栀漀洀攀✀ 㴀㸀 ✀䄀挀挀甀攀椀氀✀Ⰰഀ਀        ✀猀琀愀琀㄀✀ 㴀㸀 ✀㰀戀㸀嬀瀀椀挀琀甀爀攀猀崀㰀⼀戀㸀 瀀栀漀琀漀猀 搀愀渀猀 㰀戀㸀嬀愀氀戀甀洀猀崀㰀⼀戀㸀 愀氀戀甀洀猀 攀琀 㰀戀㸀嬀挀愀琀崀㰀⼀戀㸀 挀愀琀쌀꤀最漀爀椀攀猀 愀瘀攀挀 㰀戀㸀嬀挀漀洀洀攀渀琀猀崀㰀⼀戀㸀 挀漀洀洀攀渀琀愀椀爀攀猀 愀昀昀椀挀栀쌀꤀攀猀 㰀戀㸀嬀瘀椀攀眀猀崀㰀⼀戀㸀 昀漀椀猀✀Ⰰഀ਀        ✀猀琀愀琀㈀✀ 㴀㸀 ✀㰀戀㸀嬀瀀椀挀琀甀爀攀猀崀㰀⼀戀㸀 瀀栀漀琀漀猀 搀愀渀猀 㰀戀㸀嬀愀氀戀甀洀猀崀㰀⼀戀㸀 愀氀戀甀洀猀 愀昀昀椀挀栀쌀꤀攀猀 㰀戀㸀嬀瘀椀攀眀猀崀㰀⼀戀㸀 琀椀洀攀猀✀Ⰰഀ਀        ✀砀砀开猀开最愀氀氀攀爀礀✀ 㴀㸀 ✀─猀尀✀猀 䜀愀氀攀爀椀攀✀Ⰰഀ਀        ✀猀琀愀琀㌀✀ 㴀㸀 ✀㰀戀㸀嬀瀀椀挀琀甀爀攀猀崀㰀⼀戀㸀 瀀栀漀琀漀猀 搀愀渀猀 㰀戀㸀嬀愀氀戀甀洀猀崀㰀⼀戀㸀 愀氀戀甀洀猀 愀瘀攀挀 㰀戀㸀嬀挀漀洀洀攀渀琀猀崀㰀⼀戀㸀 挀漀洀洀攀渀琀愀椀爀攀猀 愀昀昀椀挀栀쌀꤀攀猀 㰀戀㸀嬀瘀椀攀眀猀崀㰀⼀戀㸀 昀漀椀猀✀ഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开氀椀猀琀开甀猀攀爀猀 㴀 愀爀爀愀礀⠀✀甀猀攀爀开氀椀猀琀✀ 㴀㸀 ✀䰀椀猀琀攀 搀尀✀甀琀椀氀椀猀愀琀攀甀爀猀✀Ⰰഀ਀        ✀渀漀开甀猀攀爀开最愀氀✀ 㴀㸀 ✀䤀氀 渀尀✀礀 愀 瀀愀猀 搀攀 渀漀甀瘀攀氀氀攀 最愀氀攀爀椀攀 搀尀✀甀琀椀氀椀猀愀琀攀甀爀猀✀Ⰰഀ਀        ✀渀开愀氀戀甀洀猀✀ 㴀㸀 ✀─猀 愀氀戀甀洀⠀猀⤀✀Ⰰഀ਀        ✀渀开瀀椀挀猀✀ 㴀㸀 ✀─猀 瀀栀漀琀漀⠀猀⤀✀ഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开氀椀猀琀开愀氀戀甀洀猀 㴀 愀爀爀愀礀⠀✀渀开瀀椀挀琀甀爀攀猀✀ 㴀㸀 ✀─猀 瀀栀漀琀漀猀✀Ⰰഀ਀        ✀氀愀猀琀开愀搀搀攀搀✀ 㴀㸀 ✀Ⰰ 氀愀 搀攀爀渀椀쌀ꠀ爀攀 愀 쌀꤀琀쌀꤀ 愀樀漀甀琀쌀꤀攀 氀攀 ─猀✀ഀ਀        ⤀㬀ഀ਀紀 ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 氀漀最椀渀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 一唀䰀䰀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 氀漀最漀甀琀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 一唀䰀䰀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 洀漀搀椀昀礀愀氀戀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀䴀伀䐀䤀䘀夀䄀䰀䈀开倀䠀倀✀⤀⤀ ␀氀愀渀最开洀漀搀椀昀礀愀氀戀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀甀瀀搀开愀氀戀开渀✀ 㴀㸀 ✀䴀攀琀琀爀攀 쌀ꀀ 樀漀甀爀 氀尀✀愀氀戀甀洀 ─猀✀Ⰰഀ਀        ✀最攀渀攀爀愀氀开猀攀琀琀椀渀最猀✀ 㴀㸀 ✀倀愀爀愀洀쌀ꠀ琀爀攀猀 最쌀꤀渀쌀꤀爀愀甀砀✀Ⰰഀ਀        ✀愀氀戀开琀椀琀氀攀✀ 㴀㸀 ✀吀椀琀爀攀 搀攀 氀尀✀愀氀戀甀洀✀Ⰰഀ਀        ✀愀氀戀开挀愀琀✀ 㴀㸀 ✀䌀愀琀쌀꤀最漀爀椀攀 搀攀 氀尀✀愀氀戀甀洀✀Ⰰഀ਀        ✀愀氀戀开搀攀猀挀✀ 㴀㸀 ✀䐀攀猀挀爀椀瀀琀椀漀渀 搀攀 氀尀✀愀氀戀甀洀✀Ⰰഀ਀        ✀愀氀戀开琀栀甀洀戀✀ 㴀㸀 ✀瘀椀最渀攀琀琀攀 搀攀 氀尀✀愀氀戀甀洀✀Ⰰഀ਀        ✀愀氀戀开瀀攀爀洀✀ 㴀㸀 ✀倀攀爀洀椀猀猀椀漀渀猀 瀀漀甀爀 挀攀琀 愀氀戀甀洀✀Ⰰഀ਀        ✀挀愀渀开瘀椀攀眀✀ 㴀㸀 ✀䌀攀琀 愀氀戀甀洀 瀀攀甀琀 쌀ꨀ琀爀攀 挀漀渀猀甀氀琀쌀꤀ 瀀愀爀✀Ⰰഀ਀        ✀挀愀渀开甀瀀氀漀愀搀✀ 㴀㸀 ✀䰀攀猀 瘀椀猀椀琀攀甀爀猀 瀀攀甀瘀攀渀琀 洀攀琀琀爀攀 搀攀猀 瀀栀漀琀漀猀 攀渀 氀椀最渀攀✀Ⰰഀ਀        ✀挀愀渀开瀀漀猀琀开挀漀洀洀攀渀琀猀✀ 㴀㸀 ✀䰀攀猀 瘀椀猀椀琀攀甀爀猀 瀀攀甀瘀攀渀琀 瀀漀猀琀攀爀 搀攀猀 挀漀洀洀攀渀琀愀椀爀攀猀✀Ⰰഀ਀        ✀挀愀渀开爀愀琀攀✀ 㴀㸀 ✀䰀攀猀 瘀椀猀椀琀攀甀爀猀 瀀攀甀瘀攀渀琀 渀漀琀攀爀 氀攀猀 瀀栀漀琀漀猀✀Ⰰഀ਀        ✀甀猀攀爀开最愀氀✀ 㴀㸀 ✀䜀愀氀攀爀椀攀 搀攀 氀尀✀甀琀椀氀椀猀愀琀攀甀爀✀Ⰰഀ਀        ✀渀漀开挀愀琀✀ 㴀㸀 ✀⨀ 倀愀猀 搀攀 挀愀琀쌀꤀最漀爀椀攀 ⨀✀Ⰰഀ਀        ✀愀氀戀开攀洀瀀琀礀✀ 㴀㸀 ✀䰀尀✀愀氀戀甀洀 攀猀琀 瘀椀搀攀✀Ⰰഀ਀        ✀氀愀猀琀开甀瀀氀漀愀搀攀搀✀ 㴀㸀 ✀䐀攀爀渀椀攀爀 甀瀀氀漀愀搀✀Ⰰഀ਀        ✀瀀甀戀氀椀挀开愀氀戀✀ 㴀㸀 ✀吀漀甀琀 氀攀 洀漀渀搀攀 ⠀愀氀戀甀洀 瀀甀戀氀椀挀⤀✀Ⰰഀ਀        ✀洀攀开漀渀氀礀✀ 㴀㸀 ✀䴀漀椀 猀攀甀氀攀洀攀渀琀✀Ⰰഀ਀        ✀漀眀渀攀爀开漀渀氀礀✀ 㴀㸀 ✀䰀攀 瀀爀漀瀀爀椀쌀꤀琀愀椀爀攀 搀攀 氀尀✀愀氀戀甀洀 ⠀─猀⤀ 猀攀甀氀攀洀攀渀琀✀Ⰰഀ਀        ✀最爀漀甀瀀瀀开漀渀氀礀✀ 㴀㸀 ✀䴀攀洀戀爀攀猀 搀甀 最爀漀甀瀀攀 尀✀─猀尀✀✀Ⰰഀ਀        ✀攀爀爀开渀漀开愀氀戀开琀漀开洀漀搀椀昀礀✀ 㴀㸀 ✀䤀氀 渀尀✀礀 愀 瀀愀猀 搀尀✀愀氀戀甀洀 洀漀搀椀昀椀愀戀氀攀 搀愀渀猀 氀愀 戀愀猀攀⸀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀✀ 㴀㸀 ✀䴀攀琀琀爀攀 氀尀✀愀氀戀甀洀 쌀ꀀ 樀漀甀爀✀ഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 爀愀琀攀瀀椀挀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀刀䄀吀䔀倀䤀䌀开倀䠀倀✀⤀⤀ ␀氀愀渀最开爀愀琀攀开瀀椀挀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀愀氀爀攀愀搀礀开爀愀琀攀搀✀ 㴀㸀 ✀嘀漀甀猀 愀瘀椀攀稀 搀쌀꤀樀쌀ꀀ 渀漀琀쌀꤀ 挀攀琀琀攀 瀀栀漀琀漀✀Ⰰഀ਀        ✀爀愀琀攀开漀欀✀ 㴀㸀 ✀嘀漀琀爀攀 瘀漀琀攀 愀 쌀꤀琀쌀꤀ 瀀爀椀猀 攀渀 挀漀洀瀀琀攀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 爀攀最椀猀琀攀爀⸀瀀栀瀀 ☀ 瀀爀漀昀椀氀攀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀刀䔀䜀䤀匀吀䔀刀开倀䠀倀✀⤀ 簀簀 搀攀昀椀渀攀搀⠀✀倀刀伀䘀䤀䰀䔀开倀䠀倀✀⤀⤀ 笀ഀ਀    ␀氀愀渀最开爀攀最椀猀琀攀爀开搀椀猀挀氀愀洀攀爀 㴀 㰀㰀㰀䔀伀吀ഀ਀䈀椀攀渀 焀甀攀 氀攀猀 愀搀洀椀渀椀猀琀爀愀琀攀甀爀猀 搀攀 笀匀䤀吀䔀开一䄀䴀䔀紀 昀愀猀猀攀渀琀 攀渀 猀漀爀琀攀渀琀 搀攀 猀甀瀀瀀爀椀洀攀爀 漀甀 洀漀搀椀昀椀攀爀 琀漀甀琀攀 搀漀渀渀쌀꤀攀 쌀ꀀ 挀愀爀愀挀琀쌀ꠀ爀攀 爀쌀꤀瀀爀쌀꤀栀攀渀猀椀戀氀攀 氀攀 瀀氀甀猀 爀愀瀀椀搀攀洀攀渀琀 瀀漀猀猀椀戀氀攀Ⰰ 椀氀 攀猀琀 椀洀瀀漀猀猀椀戀氀攀 搀攀 猀挀爀甀琀攀爀 猀礀猀琀쌀꤀洀愀琀椀焀甀攀洀攀渀琀 氀尀✀椀渀琀쌀꤀最爀愀氀椀琀쌀꤀ 搀攀猀 瀀漀猀琀猀⸀ 嘀漀甀猀 쌀ꨀ琀攀猀 瀀愀爀 挀漀渀猀쌀꤀焀甀攀渀琀 挀漀渀猀挀椀攀渀琀 焀甀攀 琀漀甀猀 氀攀猀 瀀漀猀琀猀 攀昀昀攀挀琀甀쌀꤀猀 猀甀爀 挀攀 猀椀琀攀 攀砀瀀爀椀洀攀渀琀 氀攀猀 瀀漀椀渀琀猀 搀攀 瘀甀攀 攀琀 漀瀀椀渀椀漀渀猀 搀攀 氀攀甀爀 愀甀琀攀甀爀 攀琀 渀漀渀 挀攀甀砀 搀攀猀 愀搀洀椀渀椀猀琀爀愀琀攀甀爀猀 漀甀 搀甀 眀攀戀洀愀猀琀攀爀 ⠀猀愀甀昀Ⰰ 쌀꤀瘀椀搀攀洀洀攀渀琀 搀愀渀猀 氀攀 挀愀猀 搀攀猀 瀀漀猀琀猀 攀昀昀攀挀琀甀쌀꤀猀 瀀愀爀 挀攀猀 搀攀爀渀椀攀爀猀⤀Ⰰ 焀甀椀 渀攀 瀀漀甀爀爀漀渀琀 瀀愀爀 挀漀渀猀쌀꤀焀甀攀渀琀 瀀愀猀 쌀ꨀ琀爀攀 挀漀渀猀椀搀쌀꤀爀쌀꤀猀 挀漀洀洀攀 爀攀猀瀀漀渀猀愀戀氀攀猀⸀ഀ਀㰀戀爀 ⼀㸀ഀ਀㰀戀爀 ⼀㸀ഀ਀嘀漀甀猀 愀挀挀攀瀀琀攀稀 搀攀 渀攀 瀀漀猀琀攀爀 愀甀挀甀渀攀 搀漀渀渀쌀꤀攀 쌀ꀀ 挀愀爀愀挀琀쌀ꠀ爀攀 椀渀樀甀爀椀攀甀砀Ⰰ 漀戀猀挀쌀ꠀ渀攀Ⰰ 瘀甀氀最愀椀爀攀Ⰰ 搀椀昀昀愀洀愀琀漀椀爀攀Ⰰ 洀攀渀愀쌀꜀愀渀琀Ⰰ 猀攀砀甀攀氀猀 漀甀 琀漀甀琀 愀甀琀爀攀 挀漀渀琀攀渀甀 猀甀猀挀攀瀀琀椀戀氀攀 搀攀 瘀椀漀氀攀爀 氀愀 氀漀椀⸀ 嘀漀甀猀 愀挀挀攀瀀琀攀稀 焀甀攀 氀攀 眀攀戀洀愀猀琀攀爀 攀琀 氀攀猀 洀漀搀쌀꤀爀愀琀攀甀爀猀 搀攀 笀匀䤀吀䔀开一䄀䴀䔀紀 愀椀攀渀琀 氀攀 搀爀漀椀琀 搀攀 猀甀瀀瀀爀椀洀攀爀 漀甀 洀漀搀椀昀椀攀爀 渀尀✀椀洀瀀漀爀琀攀 焀甀攀氀 挀漀渀琀攀渀甀Ⰰ 猀椀 挀攀氀愀 氀攀甀爀 猀攀洀戀氀攀 漀瀀瀀漀爀琀甀渀⸀ 䔀渀 琀愀渀琀 焀甀尀✀甀琀椀氀椀猀愀琀攀甀爀Ⰰ 瘀漀甀猀 愀挀挀攀瀀琀攀稀 焀甀攀 琀漀甀琀攀猀 氀攀猀 椀渀昀漀爀洀愀琀椀漀渀猀 攀渀琀爀쌀꤀攀猀 瀀氀甀猀 栀愀甀琀 猀漀椀攀渀琀 猀琀漀挀欀쌀꤀攀猀 搀愀渀猀 甀渀攀 戀愀猀攀 搀攀 搀漀渀渀쌀꤀攀猀⸀ 䈀椀攀渀 焀甀攀 挀攀猀 椀渀昀漀爀洀愀琀椀漀渀猀 渀攀 猀漀椀攀渀琀 瀀愀猀 挀漀洀洀甀渀椀焀甀쌀꤀攀猀 쌀ꀀ 搀攀猀 琀椀攀爀猀 猀愀渀猀 瘀漀琀爀攀 挀漀渀猀攀渀琀攀洀攀渀琀Ⰰ 氀攀 眀攀戀洀愀猀琀攀爀 攀琀 氀攀猀 愀搀洀椀渀椀猀琀爀愀琀攀甀爀猀 渀攀 瀀攀甀瘀攀渀琀 瀀愀猀 쌀ꨀ琀爀攀 琀攀渀甀猀 瀀漀甀爀 爀攀猀瀀漀渀猀愀戀氀攀猀 搀愀渀猀 氀攀 挀愀猀 搀攀 琀攀渀琀愀琀椀瘀攀猀 搀攀 栀愀挀欀 焀甀椀 瀀漀甀爀爀愀椀攀渀琀 挀漀洀瀀爀漀洀攀琀琀爀攀 氀攀猀 搀漀渀渀쌀꤀攀猀⸀㰀戀爀 ⼀㸀ഀ਀㰀戀爀 ⼀㸀ഀ਀䌀攀 猀椀琀攀 甀琀椀氀椀猀攀 搀攀猀 挀漀漀欀椀攀猀 瀀漀甀爀 猀琀漀挀欀攀爀 搀攀猀 椀渀昀漀爀洀愀琀椀漀渀猀 猀甀爀 瘀漀琀爀攀 漀爀搀椀渀愀琀攀甀爀⸀ 䌀攀猀 挀漀漀欀椀攀猀 渀攀 猀攀爀瘀攀渀琀 焀甀尀✀쌀ꀀ 愀洀쌀꤀氀椀漀爀攀爀 瘀漀琀爀攀 渀愀瘀椀最愀琀椀漀渀 猀甀爀 挀攀 猀椀琀攀⸀ 嘀漀琀爀攀 愀搀爀攀猀猀攀 攀ⴀ洀愀椀氀 渀攀 猀攀爀愀 甀琀椀氀椀猀쌀꤀攀 焀甀攀 瀀漀甀爀 挀漀渀昀椀爀洀攀爀 氀攀猀 搀漀渀渀쌀꤀攀猀 搀攀 瘀漀琀爀攀 椀渀猀挀爀椀瀀琀椀漀渀 愀椀渀猀椀 焀甀攀 瘀漀琀爀攀 洀漀琀 搀攀 瀀愀猀猀攀⸀㰀戀爀 ⼀㸀ഀ਀㰀戀爀 ⼀㸀ഀ਀䔀渀 挀氀椀焀甀愀渀琀 猀甀爀 ✀䨀尀✀愀挀挀攀瀀琀攀✀ 挀椀ⴀ搀攀猀猀漀甀猀Ⰰ 瘀漀甀猀 愀挀挀攀瀀琀攀稀 搀攀 瘀漀甀猀 猀漀甀洀攀琀琀爀攀 쌀ꀀ 挀攀猀 挀漀渀搀椀琀椀漀渀猀⸀ഀ਀䔀伀吀㬀ഀ਀ഀ਀    ␀氀愀渀最开爀攀最椀猀琀攀爀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀瀀愀最攀开琀椀琀氀攀✀ 㴀㸀 ✀椀渀猀挀爀椀瀀琀椀漀渀 搀尀✀甀琀椀氀椀猀愀琀攀甀爀✀Ⰰഀ਀        ✀琀攀爀洀开挀漀渀搀✀ 㴀㸀 ✀䌀漀渀搀椀琀椀漀渀猀 最쌀꤀渀쌀꤀爀愀氀攀猀 搀尀✀椀渀猀挀爀椀瀀琀椀漀渀✀Ⰰഀ਀        ✀椀开愀最爀攀攀✀ 㴀㸀 ✀䨀尀✀愀挀挀攀瀀琀攀✀Ⰰഀ਀        ✀猀甀戀洀椀琀✀ 㴀㸀 ✀匀尀✀椀渀猀挀爀椀爀攀✀Ⰰഀ਀        ✀攀爀爀开甀猀攀爀开攀砀椀猀琀猀✀ 㴀㸀 ✀䰀攀 渀漀洀 搀尀✀甀琀椀氀椀猀愀琀攀甀爀 焀甀攀 瘀漀甀猀 愀瘀攀稀 攀渀琀爀쌀꤀ 攀砀椀猀琀攀 搀쌀꤀樀쌀ꀀⰀ 洀攀爀挀椀 搀攀 戀椀攀渀 瘀漀甀氀漀椀爀 攀渀 挀栀漀椀猀椀爀 甀渀 愀甀琀爀攀✀Ⰰഀ਀        ✀攀爀爀开瀀愀猀猀眀漀爀搀开洀椀猀洀愀琀挀栀✀ 㴀㸀 ✀䰀攀猀 搀攀甀砀 洀漀琀猀 搀攀 瀀愀猀猀攀 渀攀 挀漀爀爀攀猀瀀漀渀搀攀渀琀 瀀愀猀Ⰰ 洀攀爀挀椀 搀攀 氀攀猀 攀渀琀爀攀爀 쌀ꀀ 渀漀甀瘀攀愀甀✀Ⰰഀ਀        ✀攀爀爀开甀渀愀洀攀开猀栀漀爀琀✀ 㴀㸀 ✀䰀攀 渀漀洀 搀尀✀甀琀椀氀椀猀愀琀攀甀爀 搀漀椀琀 挀漀洀瀀爀攀渀搀爀攀 愀甀 洀漀椀渀猀 ㈀ 挀愀爀愀挀琀쌀ꠀ爀攀猀✀Ⰰഀ਀        ✀攀爀爀开瀀愀猀猀眀漀爀搀开猀栀漀爀琀✀ 㴀㸀 ✀䰀攀 洀漀琀 搀攀 瀀愀猀猀攀 搀漀椀琀 挀漀洀瀀爀攀渀搀爀攀 愀甀 洀漀椀渀猀 ㈀ 挀愀爀愀挀琀쌀ꠀ爀攀猀✀Ⰰഀ਀        ✀攀爀爀开甀渀愀洀攀开瀀愀猀猀开搀椀昀昀✀ 㴀㸀 ✀䰀攀 渀漀洀 搀尀✀甀琀椀氀椀猀愀琀攀甀爀 攀琀 氀攀 洀漀琀 搀攀 瀀愀猀猀攀 搀漀椀瘀攀渀琀 쌀ꨀ琀爀攀 搀椀昀昀쌀꤀爀攀渀琀猀✀Ⰰഀ਀        ✀攀爀爀开椀渀瘀愀氀椀搀开攀洀愀椀氀✀ 㴀㸀 ✀䰀尀✀愀搀爀攀猀猀攀 攀ⴀ洀愀椀氀 渀尀✀攀猀琀 瀀愀猀 瘀愀氀椀搀攀✀Ⰰഀ਀        ✀攀爀爀开搀甀瀀氀椀挀愀琀攀开攀洀愀椀氀✀ 㴀㸀 ✀唀渀 愀甀琀爀攀 甀琀椀氀椀猀愀琀攀甀爀 猀尀✀攀猀琀 搀쌀꤀樀쌀ꀀ 攀渀爀攀最椀猀琀쌀꤀ 愀瘀攀挀 氀尀✀愀搀爀攀猀猀攀 攀ⴀ洀愀椀氀 焀甀攀 瘀漀甀猀 愀瘀攀稀 攀渀琀爀쌀꤀攀✀Ⰰഀ਀        ✀攀渀琀攀爀开椀渀昀漀✀ 㴀㸀 ✀䔀渀琀爀攀稀 氀攀猀 椀渀昀漀爀洀愀琀椀漀渀猀 爀攀氀愀琀椀瘀攀猀 쌀ꀀ 瘀漀琀爀攀 椀渀猀挀爀椀瀀琀椀漀渀✀Ⰰഀ਀        ✀爀攀焀甀椀爀攀搀开椀渀昀漀✀ 㴀㸀 ✀䤀渀昀漀爀洀愀琀椀漀渀猀 爀攀焀甀椀猀攀猀✀Ⰰഀ਀        ✀漀瀀琀椀漀渀愀氀开椀渀昀漀✀ 㴀㸀 ✀䤀渀昀漀爀洀愀琀椀漀渀猀 漀瀀琀椀漀渀渀攀氀氀攀猀✀Ⰰഀ਀        ✀甀猀攀爀渀愀洀攀✀ 㴀㸀 ✀一漀洀 搀尀✀甀琀椀氀椀猀愀琀攀甀爀 ⼀ 氀漀最椀渀✀Ⰰഀ਀        ✀瀀愀猀猀眀漀爀搀✀ 㴀㸀 ✀䴀漀琀 搀攀 瀀愀猀猀攀✀Ⰰഀ਀        ✀瀀愀猀猀眀漀爀搀开愀最愀椀渀✀ 㴀㸀 ✀䔀渀琀爀攀稀 쌀ꀀ 渀漀甀瘀攀愀甀 氀攀 洀漀琀 搀攀 瀀愀猀猀攀✀Ⰰഀ਀        ✀攀洀愀椀氀✀ 㴀㸀 ✀䔀洀愀椀氀✀Ⰰഀ਀        ✀氀漀挀愀琀椀漀渀✀ 㴀㸀 ✀䰀漀挀愀氀椀猀愀琀椀漀渀✀Ⰰഀ਀        ✀椀渀琀攀爀攀猀琀猀✀ 㴀㸀 ✀䤀渀琀쌀꤀爀쌀ꨀ琀猀✀Ⰰഀ਀        ✀眀攀戀猀椀琀攀✀ 㴀㸀 ✀匀椀琀攀 眀攀戀✀Ⰰഀ਀        ✀漀挀挀甀瀀愀琀椀漀渀✀ 㴀㸀 ✀䄀挀琀椀瘀椀琀쌀꤀✀Ⰰഀ਀        ✀攀爀爀漀爀✀ 㴀㸀 ✀䔀刀刀䔀唀刀✀Ⰰഀ਀        ✀挀漀渀昀椀爀洀开攀洀愀椀氀开猀甀戀樀攀挀琀✀ 㴀㸀 ✀─猀 ⴀ 䌀漀渀昀椀爀洀愀琀椀漀渀 搀尀✀椀渀猀挀爀椀瀀琀椀漀渀✀Ⰰഀ਀        ✀椀渀昀漀爀洀愀琀椀漀渀✀ 㴀㸀 ✀䤀渀昀漀爀洀愀琀椀漀渀猀✀Ⰰഀ਀        ✀昀愀椀氀攀搀开猀攀渀搀椀渀最开攀洀愀椀氀✀ 㴀㸀 ✀䰀尀✀攀ⴀ洀愀椀氀 搀攀 挀漀渀昀椀爀洀愀琀椀漀渀 搀尀✀椀渀猀挀爀椀瀀琀椀漀渀 渀尀✀愀 瀀甀 쌀ꨀ琀爀攀 攀渀瘀漀礀쌀꤀℀✀Ⰰഀ਀        ✀琀栀愀渀欀开礀漀甀✀ 㴀㸀 ✀䴀攀爀挀椀 瀀漀甀爀 瘀漀琀爀攀 椀渀猀挀爀椀瀀琀椀漀渀⸀㰀戀爀 ⼀㸀㰀戀爀 ⼀㸀唀渀 攀ⴀ洀愀椀氀 挀漀渀琀攀渀愀渀琀 氀攀猀 椀渀昀漀爀洀愀琀椀漀渀猀 猀甀爀 氀尀✀愀挀琀椀瘀愀琀椀漀渀 搀攀 瘀漀琀爀攀 挀漀洀瀀琀攀 瘀漀甀猀 愀 쌀꤀琀쌀꤀ 攀渀瘀漀礀쌀꤀ 쌀ꀀ 氀尀✀愀搀爀攀猀猀攀 攀ⴀ洀愀椀氀 焀甀攀 瘀漀甀猀 渀漀甀猀 愀瘀攀稀 挀漀洀洀甀渀椀焀甀쌀꤀攀⸀✀Ⰰഀ਀        ✀愀挀挀琀开挀爀攀愀琀攀搀✀ 㴀㸀 ✀嘀漀琀爀攀 挀漀洀瀀琀攀 愀 戀椀攀渀 쌀꤀琀쌀꤀ 挀爀쌀꤀攀⸀ 嘀漀甀猀 瀀漀甀瘀攀稀 洀愀椀渀琀攀渀愀渀琀 瘀漀甀猀 椀搀攀渀琀椀昀椀攀爀 愀瘀攀挀 瘀漀琀爀攀 氀漀最椀渀 攀琀 瘀漀琀爀攀 洀漀琀 搀攀 瀀愀猀猀攀✀Ⰰഀ਀        ✀愀挀挀琀开愀挀琀椀瘀攀✀ 㴀㸀 ✀嘀漀琀爀攀 挀漀洀瀀琀攀 愀 戀椀攀渀 쌀꤀琀쌀꤀ 愀挀琀椀瘀쌀꤀⸀ 嘀漀甀猀 瀀漀甀瘀攀稀 洀愀椀渀琀攀渀愀渀琀 瘀漀甀猀 椀搀攀渀琀椀昀椀攀爀 愀瘀攀挀 瘀漀琀爀攀 氀漀最椀渀 攀琀 瘀漀琀爀攀 洀漀琀 搀攀 瀀愀猀猀攀✀Ⰰഀ਀        ✀愀挀挀琀开愀氀爀攀愀搀礀开愀挀琀✀ 㴀㸀 ✀嘀漀琀爀攀 挀漀洀瀀琀攀 攀猀琀 搀쌀꤀樀쌀ꀀ 愀挀琀椀昀℀✀Ⰰഀ਀        ✀愀挀挀琀开愀挀琀开昀愀椀氀攀搀✀ 㴀㸀 ✀䌀攀 挀漀洀瀀琀攀 渀攀 瀀攀甀琀 瀀愀猀 쌀ꨀ琀爀攀 愀挀琀椀瘀쌀꤀℀✀Ⰰഀ਀        ✀攀爀爀开甀渀欀开甀猀攀爀✀ 㴀㸀 ✀䰀尀✀甀琀椀氀椀猀愀琀攀甀爀 猀쌀꤀氀攀挀琀椀漀渀渀쌀꤀ 渀尀✀攀砀椀猀琀攀 瀀愀猀℀✀Ⰰഀ਀        ✀砀开猀开瀀爀漀昀椀氀攀✀ 㴀㸀 ✀倀爀漀昀椀氀 搀攀 ─猀✀Ⰰഀ਀        ✀最爀漀甀瀀✀ 㴀㸀 ✀䜀爀漀甀瀀攀✀Ⰰഀ਀        ✀爀攀最开搀愀琀攀✀ 㴀㸀 ✀䐀愀琀攀 搀尀✀椀渀猀挀爀椀瀀琀椀漀渀✀Ⰰഀ਀        ✀搀椀猀欀开甀猀愀最攀✀ 㴀㸀 ✀唀琀椀氀椀猀愀琀椀漀渀 搀甀 搀椀猀焀甀攀✀Ⰰഀ਀        ✀挀栀愀渀最攀开瀀愀猀猀✀ 㴀㸀 ✀䴀漀搀椀昀椀攀爀 氀攀 洀漀琀 搀攀 瀀愀猀猀攀✀Ⰰഀ਀        ✀挀甀爀爀攀渀琀开瀀愀猀猀✀ 㴀㸀 ✀䴀漀琀 搀攀 瀀愀猀猀攀 愀挀琀甀攀氀✀Ⰰഀ਀        ✀渀攀眀开瀀愀猀猀✀ 㴀㸀 ✀一漀甀瘀攀愀甀 洀漀琀 搀攀 瀀愀猀猀攀✀Ⰰഀ਀        ✀渀攀眀开瀀愀猀猀开愀最愀椀渀✀ 㴀㸀 ✀一漀甀瘀攀愀甀 洀漀琀 搀攀 瀀愀猀猀攀 ⠀쌀ꀀ 渀漀甀瘀攀愀甀⤀✀Ⰰഀ਀        ✀攀爀爀开挀甀爀爀开瀀愀猀猀✀ 㴀㸀 ✀䰀攀 洀漀琀 搀攀 瀀愀猀猀攀 愀挀琀甀攀氀 渀尀✀攀猀琀 瀀愀猀 挀漀爀爀攀挀琀✀Ⰰഀ਀        ✀愀瀀瀀氀礀开洀漀搀椀昀✀ 㴀㸀 ✀䄀瀀瀀氀椀焀甀攀爀 氀攀猀 洀漀搀椀昀椀挀愀琀椀漀渀猀✀Ⰰഀ਀        ✀挀栀愀渀最攀开瀀愀猀猀✀ 㴀㸀 ✀䌀栀愀渀最攀爀 洀漀渀 洀漀琀 搀攀 瀀愀猀猀攀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开猀甀挀挀攀猀猀✀ 㴀㸀 ✀嘀漀琀爀攀 瀀爀漀昀椀氀 愀 쌀꤀琀쌀꤀ 洀椀猀 쌀ꀀ 樀漀甀爀✀Ⰰഀ਀        ✀瀀愀猀猀开挀栀最开猀甀挀挀攀猀猀✀ 㴀㸀 ✀嘀漀琀爀攀 洀漀琀 搀攀 瀀愀猀猀攀 愀 쌀꤀琀쌀꤀ 洀漀搀椀昀椀쌀꤀✀Ⰰഀ਀        ✀瀀愀猀猀开挀栀最开攀爀爀漀爀✀ 㴀㸀 ✀嘀漀琀爀攀 洀漀琀 搀攀 瀀愀猀猀攀 渀尀✀愀 瀀愀猀 쌀꤀琀쌀꤀ 洀漀搀椀昀椀쌀꤀✀Ⰰഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开爀攀最椀猀琀攀爀开挀漀渀昀椀爀洀开攀洀愀椀氀 㴀 㰀㰀㰀䔀伀吀ഀ਀䴀攀爀挀椀 瀀漀甀爀 瘀漀琀爀攀 椀渀猀挀爀椀瀀琀椀漀渀 猀甀爀 笀匀䤀吀䔀开一䄀䴀䔀紀ഀ਀ഀ਀嘀漀琀爀攀 渀漀洀 搀尀✀甀琀椀氀椀猀愀琀攀甀爀⼀氀漀最椀渀 攀猀琀 㨀 ∀笀唀匀䔀刀开一䄀䴀䔀紀∀ഀ਀嘀漀琀爀攀 洀漀琀 搀攀 瀀愀猀猀攀 攀猀琀 㨀 ∀笀倀䄀匀匀圀伀刀䐀紀∀ഀ਀ഀ਀䄀昀椀渀 搀尀✀愀挀琀椀瘀攀爀 瘀漀琀爀攀 挀漀洀瀀琀攀Ⰰ 瘀漀甀猀 搀攀瘀攀稀 挀氀椀焀甀攀爀 猀甀爀 氀攀 氀椀攀渀 猀甀椀瘀愀渀琀Ⰰ 漀甀 戀椀攀渀 攀渀 昀愀椀爀攀 甀渀 挀漀瀀椀攀爀⼀挀漀氀氀攀爀 搀愀渀猀 氀愀 戀愀爀爀攀 搀尀✀愀搀爀攀猀猀攀 搀攀 瘀漀琀爀攀 渀愀瘀椀最愀琀攀甀爀⸀ഀ਀ഀ਀笀䄀䌀吀开䰀䤀一䬀紀ഀ਀ഀ਀䌀漀爀搀椀愀氀攀洀攀渀琀Ⰰഀ਀ഀ਀䰀✀攀焀甀椀瀀攀 搀攀 笀匀䤀吀䔀开一䄀䴀䔀紀ഀ਀ഀ਀䔀伀吀㬀ഀ਀紀 ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 爀攀瘀椀攀眀挀漀洀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀刀䔀嘀䤀䔀圀䌀伀䴀开倀䠀倀✀⤀⤀ ␀氀愀渀最开爀攀瘀椀攀眀挀漀洀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀嘀쌀꤀爀椀昀椀攀爀 氀攀猀 挀漀洀洀攀渀琀愀椀爀攀猀✀Ⰰഀ਀        ✀渀漀开挀漀洀洀攀渀琀✀ 㴀㸀 ✀䤀氀 渀尀✀礀 愀 瀀愀猀 搀攀 挀漀洀洀攀渀琀愀椀爀攀 쌀ꀀ 瘀쌀꤀爀椀昀椀攀爀✀Ⰰഀ਀        ✀渀开挀漀洀洀开搀攀氀✀ 㴀㸀 ✀─猀 挀漀洀洀攀渀琀愀椀爀攀⠀猀⤀ 猀甀瀀瀀爀椀洀쌀꤀⠀猀⤀✀Ⰰഀ਀        ✀渀开挀漀洀洀开搀椀猀瀀✀ 㴀㸀 ✀一漀洀戀爀攀 搀攀 挀漀洀洀攀渀琀愀椀爀攀猀 쌀ꀀ 愀昀昀椀挀栀攀爀✀Ⰰഀ਀        ✀猀攀攀开瀀爀攀瘀✀ 㴀㸀 ✀嘀漀椀爀 瀀爀쌀꤀挀쌀꤀搀攀渀琀⠀猀⤀✀Ⰰഀ਀        ✀猀攀攀开渀攀砀琀✀ 㴀㸀 ✀嘀漀椀爀 猀甀椀瘀愀渀琀⠀猀⤀✀Ⰰഀ਀        ✀搀攀氀开挀漀洀洀✀ 㴀㸀 ✀匀甀瀀瀀爀椀洀攀爀 氀攀猀 挀漀洀洀攀渀琀愀椀爀攀猀 猀쌀꤀氀攀挀琀椀漀渀渀쌀꤀猀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 猀攀愀爀挀栀⸀瀀栀瀀 ⴀ 伀䬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 椀昀 ⠀搀攀昀椀渀攀搀⠀✀匀䔀䄀刀䌀䠀开倀䠀倀✀⤀⤀ഀ਀    ␀氀愀渀最开猀攀愀爀挀栀开瀀栀瀀 㴀 愀爀爀愀礀⠀　 㴀㸀 ✀刀攀挀栀攀爀挀栀攀爀 甀渀攀 椀洀愀最攀 搀愀渀猀 氀愀 最愀氀攀爀椀攀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 猀攀愀爀挀栀渀攀眀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀匀䔀䄀刀䌀䠀一䔀圀开倀䠀倀✀⤀⤀ ␀氀愀渀最开猀攀愀爀挀栀开渀攀眀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀瀀愀最攀开琀椀琀氀攀✀ 㴀㸀 ✀刀攀挀栀攀爀挀栀攀爀 氀攀猀 渀漀甀瘀攀氀氀攀猀 瀀栀漀琀漀猀✀Ⰰഀ਀        ✀猀攀氀攀挀琀开搀椀爀✀ 㴀㸀 ✀匀攀氀攀挀琀椀漀渀渀攀稀 氀攀 爀쌀꤀瀀攀爀琀漀椀爀攀✀Ⰰഀ਀        ✀猀攀氀攀挀琀开搀椀爀开洀猀最✀ 㴀㸀 ✀䌀攀琀琀攀 昀漀渀挀琀椀漀渀 瘀漀甀猀 瀀攀爀洀攀琀 搀尀✀愀樀漀甀琀攀爀 甀渀 最爀漀甀瀀攀 搀攀 瀀栀漀琀漀猀 焀甀攀 瘀漀甀猀 愀瘀攀稀 甀瀀氀漀愀搀쌀꤀ 猀甀爀 瘀漀琀爀攀 猀攀爀瘀攀甀爀 䘀吀倀⸀㰀戀爀 ⼀㸀㰀戀爀 ⼀㸀匀쌀꤀氀攀挀琀椀漀渀渀攀稀 氀攀 爀쌀꤀瀀攀爀琀漀椀爀攀 漀쌀뤀 瘀漀甀猀 愀瘀攀稀 甀瀀氀漀愀搀쌀꤀ 瘀漀猀 瀀栀漀琀漀猀✀Ⰰഀ਀        ✀渀漀开瀀椀挀开琀漀开愀搀搀✀ 㴀㸀 ✀䤀氀 渀尀✀礀 愀 瀀愀猀 搀攀 瀀栀漀琀漀 쌀ꀀ 愀樀漀甀琀攀爀✀Ⰰഀ਀        ✀渀攀攀搀开漀渀攀开愀氀戀甀洀✀ 㴀㸀 ✀嘀漀甀猀 愀瘀攀稀 戀攀猀漀椀渀 搀尀✀愀甀 洀漀椀渀猀 甀渀 愀氀戀甀洀 瀀漀甀爀 攀昀昀攀挀琀甀攀爀 挀攀琀琀攀 漀瀀쌀꤀爀愀琀椀漀渀✀Ⰰഀ਀        ✀眀愀爀渀椀渀最✀ 㴀㸀 ✀䄀瘀攀爀琀椀猀猀攀洀攀渀琀✀Ⰰഀ਀        ✀挀栀愀渀最攀开瀀攀爀洀✀ 㴀㸀 ✀氀攀 猀挀爀椀瀀琀 渀攀 瀀攀甀琀 瀀愀猀 쌀꤀挀爀椀爀攀 搀愀渀猀 挀攀 爀쌀꤀瀀攀爀琀漀椀爀攀Ⰰ 瘀漀甀猀 搀攀瘀攀稀 挀栀愀渀最攀爀 猀攀猀 瀀攀爀洀椀猀猀椀漀渀猀 쌀ꀀ 㜀㔀㔀 漀甀 㜀㜀㜀 愀瘀愀渀琀 搀尀✀攀猀猀愀礀攀爀 搀尀✀愀樀漀甀琀攀爀 氀攀猀 瀀栀漀琀漀猀 ℀✀Ⰰഀ਀        ✀琀愀爀最攀琀开愀氀戀甀洀✀ 㴀㸀 ✀㰀戀㸀䴀攀琀琀爀攀 氀攀猀 瀀栀漀琀漀猀 搀攀 ☀焀甀漀琀㬀㰀⼀戀㸀─猀㰀戀㸀☀焀甀漀琀㬀 搀愀渀猀 㰀⼀戀㸀─猀✀Ⰰഀ਀        ✀昀漀氀搀攀爀✀ 㴀㸀 ✀刀쌀꤀瀀攀爀琀漀椀爀攀✀Ⰰഀ਀        ✀椀洀愀最攀✀ 㴀㸀 ✀䤀洀愀最攀✀Ⰰഀ਀        ✀愀氀戀甀洀✀ 㴀㸀 ✀䄀氀戀甀洀✀Ⰰഀ਀        ✀爀攀猀甀氀琀✀ 㴀㸀 ✀刀쌀꤀猀甀氀琀愀琀✀Ⰰഀ਀        ✀搀椀爀开爀漀✀ 㴀㸀 ✀一漀渀 椀渀猀挀爀椀瀀琀椀戀氀攀⸀ ✀Ⰰഀ਀        ✀搀椀爀开挀愀渀琀开爀攀愀搀✀ 㴀㸀 ✀䤀氀氀椀猀椀戀氀攀⸀ ✀Ⰰഀ਀        ✀椀渀猀攀爀琀✀ 㴀㸀 ✀䄀樀漀甀琀攀爀 搀攀 渀漀甀瘀攀氀氀攀猀 椀洀愀最攀猀 쌀ꀀ 氀愀 最愀氀攀爀椀攀✀Ⰰഀ਀        ✀氀椀猀琀开渀攀眀开瀀椀挀✀ 㴀㸀 ✀䰀椀猀琀攀 搀攀猀 渀漀甀瘀攀氀氀攀猀 椀洀愀最攀猀✀Ⰰഀ਀        ✀椀渀猀攀爀琀开猀攀氀攀挀琀攀搀✀ 㴀㸀 ✀䤀渀猀쌀꤀爀攀爀 氀攀猀 瀀栀漀琀漀猀 猀쌀꤀氀攀挀琀椀漀渀渀쌀꤀攀猀✀Ⰰഀ਀        ✀渀漀开瀀椀挀开昀漀甀渀搀✀ 㴀㸀 ✀䄀甀挀甀渀攀 椀洀愀最攀 渀尀✀愀 쌀꤀琀쌀꤀ 琀爀漀甀瘀쌀꤀攀✀Ⰰഀ਀        ✀戀攀开瀀愀琀椀攀渀琀✀ 㴀㸀 ✀匀漀礀攀稀 瀀愀琀椀攀渀琀⸀ 䰀攀 猀挀爀椀瀀琀 愀 戀攀猀漀椀渀 搀攀 琀攀洀瀀猀 瀀漀甀爀 洀攀琀琀爀攀 氀攀猀 瀀栀漀琀漀猀 攀渀 氀椀最渀攀✀Ⰰഀ਀        ✀渀漀琀攀猀✀ 㴀㸀 ✀㰀甀氀㸀✀ ⸀ ✀㰀氀椀㸀㰀戀㸀伀䬀㰀⼀戀㸀 㨀 猀椀最渀椀昀椀攀 焀甀攀 氀尀✀椀洀愀最攀 愀 戀椀攀渀 쌀꤀琀쌀꤀ 洀椀猀攀 攀渀 氀椀最渀攀✀ ⸀ ✀㰀氀椀㸀㰀戀㸀䐀倀㰀⼀戀㸀 㨀 猀椀最渀椀昀椀攀 焀甀攀 氀愀 瀀栀漀琀漀 攀砀椀猀琀攀 搀쌀꤀樀쌀ꀀ 搀愀渀猀 氀愀 戀愀猀攀 搀攀 搀漀渀渀쌀꤀攀猀✀ ⸀ ✀㰀氀椀㸀㰀戀㸀倀䈀㰀⼀戀㸀 㨀 猀椀最渀椀昀椀攀 焀甀攀 氀愀 瀀栀漀琀漀 渀尀✀愀 瀀愀猀 瀀甀 쌀ꨀ琀爀攀 愀樀漀甀琀쌀꤀攀Ⰰ 瘀쌀꤀爀椀昀椀攀稀 瘀漀琀爀攀 挀漀渀昀椀最甀爀愀琀椀漀渀 攀琀 氀攀猀 瀀攀爀洀椀猀猀椀漀渀猀 搀攀猀 爀쌀꤀瀀攀爀琀漀椀爀攀猀 搀愀渀猀 氀攀猀焀甀攀氀猀 氀攀猀 椀洀愀最攀猀 猀攀 琀爀漀甀瘀攀渀琀✀ ⸀ ✀㰀氀椀㸀匀椀 氀攀猀 猀椀最渀攀猀 伀䬀Ⰰ 䐀倀Ⰰ 倀䈀 渀尀✀愀瀀瀀愀爀愀椀猀猀攀渀琀 瀀愀猀Ⰰ 挀氀椀焀甀攀稀 猀甀爀 氀尀✀椀洀愀最攀 挀愀猀猀쌀꤀攀 愀昀椀渀 搀攀 瘀漀椀爀 氀攀 洀攀猀猀愀最攀 搀尀✀攀爀爀攀甀爀 最쌀꤀渀쌀꤀爀쌀꤀ 瀀愀爀 倀䠀倀✀ ⸀ ✀㰀氀椀㸀匀椀 瘀漀琀爀攀 戀爀漀眀猀攀爀 挀攀猀猀攀 搀尀✀攀昀昀攀挀琀甀攀爀 氀愀 琀쌀ꈀ挀栀攀 ⠀琀椀洀攀漀甀琀⤀Ⰰ 挀氀椀焀甀攀稀 猀甀爀 氀攀 戀漀甀琀漀渀 愀挀琀甀愀氀椀猀攀爀✀ ⸀ ✀㰀⼀甀氀㸀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 琀栀甀洀戀渀愀椀氀猀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 嘀漀椀搀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 戀愀渀渀椀渀最⸀瀀栀瀀  渀漀琀 甀猀攀搀 椀渀 挀瀀最㄀⸀㈀⸀　ⴀ渀甀欀攀   ⼀⼀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 嘀漀椀搀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 甀瀀氀漀愀搀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀唀倀䰀伀䄀䐀开倀䠀倀✀⤀⤀ ␀氀愀渀最开甀瀀氀漀愀搀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀䴀攀琀琀爀攀 甀渀攀 瀀栀漀琀漀 攀渀 氀椀最渀攀✀Ⰰഀ਀        ✀洀愀砀开昀猀椀稀攀✀ 㴀㸀 ✀䰀攀 瀀漀椀搀猀 洀愀砀椀洀愀氀 愀甀琀漀爀椀猀쌀꤀ 瀀漀甀爀 甀渀攀 椀洀愀最攀 攀猀琀 搀攀 ─猀 䬀漀✀Ⰰഀ਀        ✀愀氀戀甀洀✀ 㴀㸀 ✀䄀氀戀甀洀✀Ⰰഀ਀        ✀瀀椀挀琀甀爀攀✀ 㴀㸀 ✀倀栀漀琀漀✀Ⰰഀ਀        ✀瀀椀挀开琀椀琀氀攀✀ 㴀㸀 ✀吀椀琀爀攀 搀攀 氀愀 瀀栀漀琀漀✀Ⰰഀ਀        ✀搀攀猀挀爀椀瀀琀椀漀渀✀ 㴀㸀 ✀䐀攀猀挀爀椀瀀琀椀漀渀 搀攀 氀愀 瀀栀漀琀漀✀Ⰰഀ਀        ✀欀攀礀眀漀爀搀猀✀ 㴀㸀 ✀䴀漀琀猀 挀氀攀昀猀 ⠀猀쌀꤀瀀愀爀쌀꤀猀 瀀愀爀 搀攀猀 攀猀瀀愀挀攀猀⤀✀Ⰰഀ਀        ✀攀爀爀开渀漀开愀氀戀开甀瀀氀漀愀搀愀戀氀攀猀✀ 㴀㸀 ✀一漀甀猀 猀漀洀洀攀猀 搀쌀꤀猀漀氀쌀꤀猀Ⰰ 洀愀椀猀 椀氀 渀尀✀攀砀椀猀琀攀 瀀愀猀 搀尀✀愀氀戀甀洀 搀愀渀猀 氀攀焀甀攀氀 瘀漀甀猀 愀礀椀攀稀 氀攀 搀爀漀椀琀 搀尀✀甀瀀氀漀愀搀攀爀 搀攀猀 瀀栀漀琀漀猀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 甀猀攀爀洀最爀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀唀匀䔀刀䴀䜀刀开倀䠀倀✀⤀⤀ ␀氀愀渀最开甀猀攀爀洀最爀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀䜀쌀꤀爀攀爀 氀攀猀 甀琀椀氀椀猀愀琀攀甀爀猀✀Ⰰഀ਀        ✀渀愀洀攀开愀✀ 㴀㸀 ✀一漀洀 愀猀挀攀渀搀愀渀琀✀Ⰰഀ਀        ✀渀愀洀攀开搀✀ 㴀㸀 ✀一漀洀 搀攀猀挀攀渀搀愀渀琀✀Ⰰഀ਀        ✀最爀漀甀瀀开愀✀ 㴀㸀 ✀䜀爀漀甀瀀攀 愀猀挀攀渀搀愀渀琀✀Ⰰഀ਀        ✀最爀漀甀瀀开搀✀ 㴀㸀 ✀䜀爀漀甀瀀攀 搀攀猀挀攀渀搀愀渀琀✀Ⰰഀ਀        ✀爀攀最开愀✀ 㴀㸀 ✀䐀愀琀攀 搀尀✀椀渀猀挀爀椀瀀琀椀漀渀 愀猀挀攀渀搀愀渀琀攀✀Ⰰഀ਀        ✀爀攀最开搀✀ 㴀㸀 ✀䐀愀琀攀 搀尀✀椀渀猀挀爀椀瀀琀椀漀渀 搀攀猀挀攀渀搀愀渀琀攀✀Ⰰഀ਀        ✀瀀椀挀开愀✀ 㴀㸀 ✀一漀洀戀爀攀 搀攀 瀀栀漀琀漀猀 愀猀挀攀渀搀愀渀琀✀Ⰰഀ਀        ✀瀀椀挀开搀✀ 㴀㸀 ✀一漀洀戀爀攀 搀攀 瀀栀漀琀漀猀 搀攀猀挀攀渀搀愀渀琀✀Ⰰഀ਀        ✀搀椀猀欀甀开愀✀ 㴀㸀 ✀唀琀椀氀椀猀愀琀椀漀渀 攀猀瀀愀挀攀 搀椀猀焀甀攀 愀猀挀攀渀搀愀渀琀✀Ⰰഀ਀        ✀搀椀猀欀甀开搀✀ 㴀㸀 ✀唀琀椀氀椀猀愀琀愀琀椀漀渀 攀猀瀀愀挀攀 搀椀猀焀甀攀 搀攀猀挀攀渀搀愀渀琀✀Ⰰഀ਀        ✀猀漀爀琀开戀礀✀ 㴀㸀 ✀䌀氀愀猀猀攀爀 氀攀猀 甀琀椀氀椀猀愀琀攀甀爀猀 瀀愀爀✀Ⰰഀ਀        ✀攀爀爀开渀漀开甀猀攀爀猀✀ 㴀㸀 ✀䰀愀 琀愀戀氀攀 搀尀✀甀琀椀氀椀猀愀琀攀甀爀猀 攀猀琀 瘀椀搀攀℀✀Ⰰഀ਀        ✀攀爀爀开攀搀椀琀开猀攀氀昀✀ 㴀㸀 ✀嘀漀甀猀 渀攀 瀀漀甀瘀攀稀 瀀愀猀 洀漀搀椀昀椀攀爀 瘀漀琀爀攀 瀀爀漀瀀爀攀 瀀爀漀昀椀氀Ⰰ 甀琀椀氀椀猀攀稀 氀攀 氀椀攀渀 尀✀䴀漀渀 瀀爀漀昀椀氀尀✀ 瀀漀甀爀 攀昀昀攀挀琀甀攀爀 挀攀琀琀攀 漀瀀쌀꤀爀愀琀椀漀渀✀Ⰰഀ਀        ✀攀搀椀琀✀ 㴀㸀 ✀䔀䐀䤀吀䔀刀✀Ⰰഀ਀        ✀搀攀氀攀琀攀✀ 㴀㸀 ✀匀唀倀倀刀䤀䴀䔀刀✀Ⰰഀ਀        ✀渀愀洀攀✀ 㴀㸀 ✀一漀洀 搀尀✀甀琀椀氀椀猀愀琀攀甀爀✀Ⰰഀ਀        ✀最爀漀甀瀀✀ 㴀㸀 ✀䜀爀漀甀瀀攀✀Ⰰഀ਀        ✀椀渀愀挀琀椀瘀攀✀ 㴀㸀 ✀䤀渀愀挀琀椀昀✀Ⰰഀ਀        ✀漀瀀攀爀愀琀椀漀渀猀✀ 㴀㸀 ✀伀瀀쌀꤀爀愀琀椀漀渀猀✀Ⰰഀ਀        ✀瀀椀挀琀甀爀攀猀✀ 㴀㸀 ✀倀栀漀琀漀猀✀Ⰰഀ਀        ✀搀椀猀欀开猀瀀愀挀攀✀ 㴀㸀 ✀䔀猀瀀愀挀攀 甀琀椀氀椀猀쌀꤀ ⼀ 焀甀漀琀愀✀Ⰰഀ਀        ✀爀攀最椀猀琀攀爀攀搀开漀渀✀ 㴀㸀 ✀䔀渀爀攀最椀猀琀爀쌀꤀ 氀攀✀Ⰰഀ਀        ✀甀开甀猀攀爀开漀渀开瀀开瀀愀最攀猀✀ 㴀㸀 ✀─搀 甀琀椀氀椀猀愀琀攀甀爀⠀猀⤀ 猀甀爀 ─搀 瀀愀最攀⠀猀⤀✀Ⰰഀ਀        ✀挀漀渀昀椀爀洀开搀攀氀✀ 㴀㸀 ✀嘀漀甀氀攀稀 瘀漀甀猀 瘀爀愀椀洀攀渀琀 匀唀倀倀刀䤀䴀䔀刀 挀攀琀 甀琀椀氀椀猀愀琀攀甀爀㼀尀尀渀吀漀甀琀攀猀 猀攀猀 瀀栀漀琀漀猀 攀琀 愀氀戀甀洀猀 猀攀爀漀渀琀 쌀꤀最愀氀攀洀攀渀琀 猀甀瀀瀀爀椀洀쌀꤀猀✀Ⰰഀ਀        ✀洀愀椀氀✀ 㴀㸀 ✀䔀ⴀ䴀䄀䤀䰀✀Ⰰഀ਀        ✀攀爀爀开甀渀欀渀漀眀渀开甀猀攀爀✀ 㴀㸀 ✀䰀尀✀甀琀椀氀椀猀愀琀攀甀爀 猀쌀꤀氀攀挀琀椀漀渀渀쌀꤀ 渀尀✀攀砀椀猀琀攀 瀀愀猀℀✀Ⰰഀ਀        ✀洀漀搀椀昀礀开甀猀攀爀✀ 㴀㸀 ✀䴀漀搀椀昀椀攀爀 氀尀✀甀琀椀氀椀猀愀琀攀甀爀✀Ⰰഀ਀        ✀渀漀琀攀猀✀ 㴀㸀 ✀䌀漀洀洀攀渀琀愀椀爀攀猀✀Ⰰഀ਀        ✀渀漀琀攀开氀椀猀琀✀ 㴀㸀 ✀㰀氀椀㸀匀椀 瘀漀甀猀 渀攀 猀漀甀栀愀椀琀攀稀 瀀愀猀 洀漀搀椀昀椀攀爀 氀攀 洀漀琀 搀攀 瀀愀猀猀攀 愀挀琀甀攀氀Ⰰ 氀愀椀猀猀攀 氀攀 挀栀愀洀瀀猀 ∀洀漀琀 搀攀 瀀愀猀猀攀∀ 瘀椀搀攀⸀✀Ⰰഀ਀        ✀瀀愀猀猀眀漀爀搀✀ 㴀㸀 ✀䴀漀琀 搀攀 瀀愀猀猀攀✀Ⰰഀ਀        ✀甀猀攀爀开愀挀琀椀瘀攀✀ 㴀㸀 ✀䰀尀✀甀琀椀氀椀猀愀琀攀甀爀 攀猀琀 愀挀琀椀昀✀Ⰰഀ਀        ✀甀猀攀爀开最爀漀甀瀀✀ 㴀㸀 ✀䜀爀漀甀瀀攀 搀攀 氀尀✀甀琀椀氀椀猀愀琀攀甀爀✀Ⰰഀ਀        ✀甀猀攀爀开攀洀愀椀氀✀ 㴀㸀 ✀攀ⴀ洀愀椀氀 搀攀 氀尀✀甀琀椀氀椀猀愀琀攀甀爀✀Ⰰഀ਀        ✀甀猀攀爀开眀攀戀开猀椀琀攀✀ 㴀㸀 ✀匀椀琀攀 眀攀戀 搀攀 氀尀✀甀琀椀氀椀猀愀琀攀甀爀✀Ⰰഀ਀        ✀挀爀攀愀琀攀开渀攀眀开甀猀攀爀✀ 㴀㸀 ✀䌀爀쌀꤀攀爀 甀渀 渀漀甀瘀攀氀 甀琀椀氀椀猀愀琀攀甀爀✀Ⰰഀ਀        ✀甀猀攀爀开昀爀漀洀✀ 㴀㸀 ✀䰀漀挀愀氀椀猀愀琀椀漀渀 搀攀 氀尀✀甀琀椀氀椀猀愀琀攀甀爀✀Ⰰഀ਀        ✀甀猀攀爀开椀渀琀攀爀攀猀琀猀✀ 㴀㸀 ✀䌀攀渀琀爀攀猀 搀尀✀椀渀琀쌀꤀爀쌀ꨀ琀 搀攀 氀尀✀甀琀椀氀椀猀愀琀攀甀爀✀Ⰰഀ਀        ✀甀猀攀爀开漀挀挀✀ 㴀㸀 ✀䄀挀琀椀瘀椀琀쌀꤀ 搀攀 氀尀✀甀琀椀氀椀猀愀琀攀甀爀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 甀琀椀氀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀唀吀䤀䰀开倀䠀倀✀⤀⤀ ␀氀愀渀最开甀琀椀氀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀刀攀搀椀洀攀渀猀椀漀渀渀攀爀 氀攀猀 瀀栀漀琀漀猀✀Ⰰഀ਀ഀ਀        ✀眀栀愀琀开椀琀开搀漀攀猀✀ 㴀㸀 ✀䘀漀渀挀琀椀漀渀渀愀氀椀琀쌀꤀猀✀Ⰰഀ਀ഀ਀        ✀眀栀愀琀开甀瀀搀愀琀攀开琀椀琀氀攀猀✀ 㴀㸀 ✀䴀攀琀 쌀ꀀ 樀漀甀爀 氀攀猀 琀椀琀爀攀猀 쌀ꀀ 瀀愀爀琀椀爀 搀攀猀 渀漀洀猀 搀攀 昀椀挀栀椀攀爀✀Ⰰഀ਀ഀ਀        ✀眀栀愀琀开搀攀氀攀琀攀开琀椀琀氀攀✀ 㴀㸀 ✀匀甀瀀瀀爀椀洀攀 氀攀猀 琀椀琀爀攀猀✀Ⰰഀ਀ഀ਀        ✀眀栀愀琀开爀攀戀甀椀氀搀✀ 㴀㸀 ✀刀攀最쌀꤀渀쌀ꠀ爀攀 氀攀猀 瘀椀最渀攀琀琀攀猀 攀琀 氀攀猀 瀀栀漀琀漀猀 爀攀搀椀洀攀渀猀椀漀渀渀쌀꤀攀猀✀Ⰰഀ਀ഀ਀        ✀眀栀愀琀开搀攀氀攀琀攀开漀爀椀最椀渀愀氀猀✀ 㴀㸀 ✀匀甀瀀瀀爀椀洀攀 氀攀猀 瀀栀漀琀漀猀 漀爀椀最椀渀愀氀攀猀 攀琀 氀攀猀 爀攀洀瀀氀愀挀攀 瀀愀爀 氀攀甀爀 瘀攀爀猀椀漀渀 爀攀搀椀洀攀渀猀椀漀渀渀쌀꤀攀✀Ⰰഀ਀ഀ਀        ✀昀椀氀攀✀ 㴀㸀 ✀䘀椀挀栀椀攀爀✀Ⰰഀ਀ഀ਀        ✀琀椀琀氀攀开猀攀琀开琀漀✀ 㴀㸀 ✀琀椀琀爀攀 挀栀愀渀最쌀꤀ 攀渀✀Ⰰഀ਀ഀ਀        ✀猀甀戀洀椀琀开昀漀爀洀✀ 㴀㸀 ✀瘀愀氀椀搀攀爀✀Ⰰഀ਀ഀ਀        ✀甀瀀搀愀琀攀搀开猀甀挀挀攀猀昀甀氀氀礀✀ 㴀㸀 ✀洀漀搀椀昀椀쌀꤀ 愀瘀攀挀 猀甀挀挀쌀ꠀ猀✀Ⰰഀ਀ഀ਀        ✀攀爀爀漀爀开挀爀攀愀琀攀✀ 㴀㸀 ✀䔀刀刀䔀唀刀 氀漀爀猀 搀攀 氀愀 挀爀쌀꤀愀琀椀漀渀✀Ⰰഀ਀ഀ਀        ✀挀漀渀琀椀渀甀攀✀ 㴀㸀 ✀䌀漀渀琀椀渀甀攀爀 愀瘀攀挀 瀀氀甀猀 搀尀✀椀洀愀最攀猀✀Ⰰഀ਀ഀ਀        ✀洀愀椀渀开猀甀挀挀攀猀猀✀ 㴀㸀 ✀䰀攀 昀椀挀栀椀攀爀 ─猀 攀猀琀 洀愀椀渀琀攀渀愀渀琀 甀琀椀氀椀猀쌀꤀ 挀漀洀洀攀 椀洀愀最攀 瀀爀椀渀挀椀瀀愀氀攀✀Ⰰഀ਀ഀ਀        ✀攀爀爀漀爀开爀攀渀愀洀攀✀ 㴀㸀 ✀䔀爀爀攀甀爀 氀漀爀猀 搀甀 挀栀愀渀最攀洀攀渀琀 搀甀 渀漀洀 搀攀 ─猀 쌀ꀀ ─猀✀Ⰰഀ਀ഀ਀        ✀攀爀爀漀爀开渀漀琀开昀漀甀渀搀✀ 㴀㸀 ✀䰀攀 昀椀挀栀椀攀爀 ─猀 渀尀✀愀 瀀愀猀 쌀꤀琀쌀꤀ 琀爀漀甀瘀쌀꤀✀Ⰰഀ਀ഀ਀        ✀戀愀挀欀✀ 㴀㸀 ✀爀攀琀漀甀爀 쌀ꀀ 氀愀 瀀愀最攀 瀀爀椀渀挀椀瀀愀氀攀✀Ⰰഀ਀ഀ਀        ✀琀栀甀洀戀猀开眀愀椀琀✀ 㴀㸀 ✀䴀椀猀攀 쌀ꀀ 樀漀甀爀 搀攀猀 瘀椀最渀攀琀琀攀猀 攀琀⼀漀甀 椀洀愀最攀猀 爀攀搀椀洀攀渀猀椀漀渀渀쌀꤀攀猀Ⰰ 洀攀爀挀椀 搀攀 瀀愀琀椀攀渀琀攀爀⸀⸀⸀✀Ⰰഀ਀ഀ਀        ✀琀栀甀洀戀猀开挀漀渀琀椀渀甀攀开眀愀椀琀✀ 㴀㸀 ✀䌀漀渀琀椀渀甀攀爀 氀愀 洀椀猀攀 쌀ꀀ 樀漀甀爀 搀攀猀 瘀椀最渀攀琀琀攀猀 攀琀⼀漀甀 搀攀猀 椀洀愀最攀猀 爀攀搀椀洀攀渀猀椀漀渀渀쌀꤀攀猀⸀⸀⸀✀Ⰰഀ਀ഀ਀        ✀琀椀琀氀攀猀开眀愀椀琀✀ 㴀㸀 ✀䴀椀猀攀 쌀ꀀ 樀漀甀爀 搀攀猀 琀椀琀爀攀猀Ⰰ 洀攀爀挀椀 搀攀 瀀愀琀椀攀渀琀攀爀⸀⸀⸀✀Ⰰഀ਀ഀ਀        ✀搀攀氀攀琀攀开眀愀椀琀✀ 㴀㸀 ✀匀甀瀀瀀爀攀猀猀椀漀渀 搀攀猀 琀椀琀爀攀猀Ⰰ 洀攀爀挀椀 搀攀 瀀愀琀椀攀渀琀攀爀⸀⸀⸀✀Ⰰഀ਀ഀ਀        ✀爀攀瀀氀愀挀攀开眀愀椀琀✀ 㴀㸀 ✀匀甀瀀瀀爀攀猀猀椀漀渀 搀攀猀 漀爀椀最椀渀愀甀砀 攀琀 爀攀洀瀀氀愀挀攀洀攀渀琀 搀攀 挀攀猀 搀攀爀渀椀攀爀猀 瀀愀爀 氀攀猀 椀洀愀最攀猀 爀攀搀椀洀攀渀猀椀漀渀渀쌀꤀攀猀Ⰰ 洀攀爀挀椀 搀攀 瀀愀琀椀攀渀琀攀爀⸀⸀⸀✀Ⰰഀ਀ഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀✀ 㴀㸀 ✀䤀渀猀琀爀甀挀琀椀漀渀猀 爀愀瀀椀搀攀猀✀Ⰰഀ਀ഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开愀挀琀椀漀渀✀ 㴀㸀 ✀匀攀氀攀挀琀椀漀渀渀攀稀 甀渀攀 愀挀琀椀漀渀✀Ⰰഀ਀ഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开瀀愀爀愀洀攀琀攀爀✀ 㴀㸀 ✀䐀쌀꤀昀椀渀椀猀猀攀稀 氀攀猀 瀀愀爀愀洀쌀ꠀ琀爀攀猀✀Ⰰഀ਀ഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开愀氀戀甀洀✀ 㴀㸀 ✀匀쌀꤀氀攀挀琀椀漀渀渀攀稀 甀渀 愀氀戀甀洀✀Ⰰഀ਀ഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开瀀爀攀猀猀✀ 㴀㸀 ✀䄀瀀瀀甀礀攀稀 猀甀爀 ─猀✀Ⰰഀ਀ഀ਀        ✀甀瀀搀愀琀攀✀ 㴀㸀 ✀䴀攀琀琀爀攀 쌀ꀀ 樀漀甀爀 氀攀猀 瘀椀最渀攀琀琀攀猀 攀琀⼀漀甀 氀攀猀 瀀栀漀琀漀猀 爀攀搀椀洀攀渀猀椀漀渀渀쌀꤀攀猀✀Ⰰഀ਀ഀ਀        ✀甀瀀搀愀琀攀开眀栀愀琀✀ 㴀㸀 ✀䌀攀 焀甀椀 搀漀椀琀 쌀ꨀ琀爀攀 洀椀猀 쌀ꀀ 樀漀甀爀✀Ⰰഀ਀ഀ਀        ✀甀瀀搀愀琀攀开琀栀甀洀戀✀ 㴀㸀 ✀匀攀甀氀攀洀攀渀琀 氀攀猀 瘀椀最渀攀琀琀攀猀✀Ⰰഀ਀ഀ਀        ✀甀瀀搀愀琀攀开瀀椀挀✀ 㴀㸀 ✀匀攀甀氀攀洀攀渀琀 氀攀猀 瀀栀漀琀漀猀 爀攀搀椀洀攀渀猀椀漀渀渀쌀꤀攀猀✀Ⰰഀ਀ഀ਀        ✀甀瀀搀愀琀攀开戀漀琀栀✀ 㴀㸀 ✀䰀攀猀 瘀椀最渀攀琀琀攀猀 攀琀 氀攀猀 椀洀愀最攀猀 爀攀搀椀洀攀渀猀椀漀渀渀쌀꤀攀猀✀Ⰰഀ਀ഀ਀        ✀甀瀀搀愀琀攀开渀甀洀戀攀爀✀ 㴀㸀 ✀一漀洀戀爀攀 搀尀✀椀洀愀最攀猀 琀爀愀椀琀쌀꤀攀猀 瀀愀爀 挀氀椀挀✀Ⰰഀ਀ഀ਀        ✀甀瀀搀愀琀攀开漀瀀琀椀漀渀✀ 㴀㸀 ✀⠀攀猀猀愀礀攀稀 搀攀 爀쌀꤀搀甀椀爀攀 挀攀琀琀攀 瘀愀氀攀甀爀 猀椀 瘀漀甀猀 愀瘀攀稀 搀攀猀 瀀爀漀戀氀쌀ꠀ洀攀猀 搀攀 琀椀洀攀漀甀琀⤀✀Ⰰഀ਀ഀ਀        ✀昀椀氀攀渀愀洀攀开琀椀琀氀攀✀ 㴀㸀 ✀一漀洀 搀甀 昀椀挀栀椀攀爀 ⼀ 吀椀琀爀攀 搀攀 氀尀✀椀洀愀最攀✀Ⰰഀ਀ഀ਀        ✀昀椀氀攀渀愀洀攀开栀漀眀✀ 㴀㸀 ✀䌀漀洀洀攀渀琀 氀攀 渀漀洀 搀甀 昀椀挀栀椀攀爀 搀漀椀琀ⴀ椀氀 쌀ꨀ琀爀攀 洀漀搀椀昀椀쌀꤀ 㼀✀Ⰰഀ਀ഀ਀        ✀昀椀氀攀渀愀洀攀开爀攀洀漀瘀攀✀ 㴀㸀 ✀匀甀瀀瀀爀椀洀攀爀 氀愀 昀椀渀 ⸀樀瀀最 攀琀 爀攀洀瀀氀愀挀攀爀 开 ⠀甀渀搀攀爀猀挀漀爀攀⤀ 瀀愀爀 搀攀猀 攀猀瀀愀挀攀猀✀Ⰰഀ਀ഀ਀        ✀昀椀氀攀渀愀洀攀开攀甀爀漀✀ 㴀㸀 ✀䌀栀愀渀最攀爀 ㈀　　㌀开㄀㄀开㈀㌀开㄀㌀开㈀　开㈀　⸀樀瀀最 攀渀 ㈀㌀⼀㄀㄀⼀㈀　　㌀ ㄀㌀㨀㈀　✀Ⰰഀ਀ഀ਀        ✀昀椀氀攀渀愀洀攀开甀猀✀ 㴀㸀 ✀䌀栀愀渀最攀爀 ㈀　　㌀开㄀㄀开㈀㌀开㄀㌀开㈀　开㈀　⸀樀瀀最 攀渀 ㄀㄀⼀㈀㌀⼀㈀　　㌀ ㄀㌀㨀㈀　✀Ⰰഀ਀ഀ਀        ✀昀椀氀攀渀愀洀攀开琀椀洀攀✀ 㴀㸀 ✀䌀栀愀渀最攀爀 ㈀　　㌀开㄀㄀开㈀㌀开㄀㌀开㈀　开㈀　⸀樀瀀最 攀渀 ㄀㌀㨀㈀　✀Ⰰഀ਀ഀ਀        ✀搀攀氀攀琀攀✀ 㴀㸀 ✀匀甀瀀瀀爀椀洀攀爀 氀攀 琀椀琀爀攀 搀攀猀 瀀栀漀琀漀猀 漀甀 氀攀猀 瀀栀漀琀漀猀 搀愀渀猀 氀攀甀爀 琀愀椀氀氀攀 搀尀✀漀爀椀最椀渀攀✀Ⰰഀ਀ഀ਀        ✀搀攀氀攀琀攀开琀椀琀氀攀✀ 㴀㸀 ✀匀甀瀀瀀爀椀洀攀爀 氀攀 琀椀琀爀攀 搀攀猀 瀀栀漀琀漀猀✀Ⰰഀ਀ഀ਀        ✀搀攀氀攀琀攀开漀爀椀最椀渀愀氀✀ 㴀㸀 ✀匀甀瀀瀀爀椀洀攀爀 氀攀猀 瀀栀漀琀漀猀 搀愀渀猀 氀攀甀爀 琀愀椀氀氀攀 搀尀✀漀爀椀最椀渀攀✀Ⰰഀ਀ഀ਀        ✀搀攀氀攀琀攀开爀攀瀀氀愀挀攀✀ 㴀㸀 ✀匀甀瀀瀀爀椀洀攀 氀攀猀 椀洀愀最攀猀 漀爀椀最椀渀愀氀攀猀 攀渀 氀攀猀 爀攀洀瀀氀愀쌀꜀愀渀琀 瀀愀爀 氀攀猀 瘀攀爀猀椀漀渀猀 爀攀搀椀洀攀渀猀椀漀渀渀쌀꤀攀猀✀Ⰰഀ਀ഀ਀        ✀猀攀氀攀挀琀开愀氀戀甀洀✀ 㴀㸀 ✀匀攀氀攀挀琀椀漀渀渀攀爀 甀渀 愀氀戀甀洀✀Ⰰഀ਀ഀ਀        ⤀㬀 ⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 瀀愀最攀琀椀琀氀攀⸀椀渀挀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀␀氀愀渀最开瀀愀最攀琀椀琀氀攀开瀀栀瀀 㴀 愀爀爀愀礀⠀ഀ਀✀搀椀瘀椀搀攀爀✀ 㴀㸀 ✀㸀✀Ⰰഀ਀    ✀瘀椀攀眀椀渀最✀ 㴀㸀 ✀嘀椀攀眀椀渀最 倀栀漀琀漀✀Ⰰഀ਀    ✀甀猀爀✀ 㴀㸀 ∀✀猀 倀栀漀琀漀 䜀愀氀氀攀爀礀∀Ⰰഀ਀    ✀瀀栀漀琀漀最愀氀氀攀爀礀✀ 㴀㸀 ✀倀栀漀琀漀 䜀愀氀氀攀爀礀✀Ⰰഀ਀    ⤀㬀ഀ਀ഀ਀㼀㸀✀ 