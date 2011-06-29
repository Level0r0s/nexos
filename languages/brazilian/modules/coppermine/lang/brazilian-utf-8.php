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
// New Port by GoldenTroll                                                  //
// http://coppermine.findhere.org/                                          //
// Based on coppermine 1.1d by Surf  http://www.surf4all.net/               //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify     //
// it under the terms of the GNU General Public License as published by     //
// the Free Software Foundation; either version 2 of the License, or        //
// (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //
define('PIC_VIEWS', 'VisualizaÃ§Ãµes');
define('PIC_VOTES', 'Votos');
define('PIC_COMMENTS', 'Comentãrios');

// info about translators and translated language
$lang_translation_info = array('lang_name_english' => 'Portuguese (Brazilian)', // the name of your language in English, e.g. 'Greek' or 'Spanish'
    'lang_name_native' => 'Portuguese (Brasilian)', // the name of your language in your mother tongue (for non-latin alphabets, use unicode), e.g. '&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940;' or 'Espa&ntilde;ol'
    'lang_country_code' => 'br', // the two-letter code for the country your language is most-often spoken (refer to http://www.iana.org/cctld/cctld-whois.htm), e.g. 'gr' or 'es'
    'trans_name' => '?', // the name of the translator - can be a nickname
    'trans_email' => '', // translator's email address (optional)
    'trans_website' => '', // translator's website (optional)
    'trans_date' => '2003-10-07', // the date the translation was created / last modified
    );

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');
// Day of weeks and months
$lang_day_of_week = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab');
$lang_month = array('Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez');
// Some common strings
$lang_yes = 'Sim';
$lang_no = 'Nao';
$lang_back = 'VOLTAR';
$lang_continue = 'CONTINUAR';
$lang_info = 'InformaÃ§Ã£o';
$lang_error = 'Erro';
// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt = '%B %d, %Y';
$lastcom_date_fmt = '%m/%d/%y at %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y at %I:%M %p';
$comment_date_fmt = '%B %d, %Y at %I:%M %p';
// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array('random' => 'Imagens RandÃ´micas',
    'lastup' => 'Ãšltimas AdiÃ§Ãµes',
    'lastupby' => 'My Last Additions', // new 1.2.2
    'lastcom' => 'Ãšltimos ComentÃ¡rios',
    'lastcomby' => 'My Last comments', // new 1.2.2
    'topn' => 'Mais Visualizados',
    'toprated' => 'Topo de Linha',
    'lasthits' => 'Ãšltimos Visualizados',
    'search' => 'Resultado da Pesquisa',
    'favpics' => 'Favourite Pictures',
    );

$lang_errors = array('access_denied' => 'VocÃª nÃ£o tem permissÃ£o para visualizar este recurso.',
    'perm_denied' => 'VocÃª nÃ£o tem permissÃ£o para executar esta operaÃ§Ã£o.',
    'param_missing' => 'Script nÃ£o consegue estabelecer um parÃ¢metro estabelecido.',
    'non_exist_ap' => 'O Ã¡lbum ou figura que voccÃª selecionau nÃ£o foi encontrado !',
    'quota_exceeded' => 'A quota de espaÃ§o para armazenamento excedeu<br /><br />VocÃª possui [quota]KB de espaÃ§o, suas imagens atualmente utilizam [space]KB, adicionar este arquivo irÃ¡ estourar sua cota permitida.',
    'gd_file_type_err' => 'estamos usando uma sistema que sÃ³ permite imagens JPEG e PNG.',
    'invalid_image' => 'A imagem que vocÃª enviou estÃ¡ corrompida ou nÃ£o pode ser interpretada por GD library',
    'resize_failed' => 'ImpossÃ­vel criar miniatura ou redimensionar a imagem.',
    'no_img_to_display' => 'Sem imagens para mostrar',
    'non_exist_cat' => 'A categoria selecionada nÃ£o existe',
    'orphan_cat' => 'A category has a non-existing parent, runs the category manager to correct the problem.',
    'directory_ro' => 'Directory \'%s\' is not writable, pictures can\'t be deleted',
    'non_exist_comment' => 'O comentÃ¡rio selecionado nÃ£o existe.',
    'pic_in_invalid_album' => 'Imagem em um album inexistente (%s)!?',
    'banned' => 'You are currently banned from using this site.',
    'not_with_udb' => 'This function is disabled in Coppermine because it is integrated with forum software. Either what you are trying to do is not supported in this configuration, or the function should be handled by the forum software.',
    'members_only' => 'This function is for members only, please join.', // changed in cpg1.2.0nuke
    'mustbe_god' => 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function'
    );
// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //
$lang_main_menu = array('alb_list_title' => 'Ir para a lista de Ã¡lbus',
    'alb_list_lnk' => 'Lista de Ã¡lbuns',
    'my_gal_title' => 'Ir para minha galeria pessoal',
    'my_gal_lnk' => 'Minha Galeria',
    'my_prof_lnk' => 'Meus dados',
    'adm_mode_title' => 'Alterar para o modo administrativo',
    'adm_mode_lnk' => 'Modo Administrativo',
    'usr_mode_title' => 'Alterar para modo UsuÃ¡rio',
    'usr_mode_lnk' => 'Modo UsuÃ¡rio',
    'upload_pic_title' => 'Enviar imagem para o Ã¡lbum',
    'upload_pic_lnk' => 'Enviar imagem',
    'register_title' => 'Criar uma conta',
    'register_lnk' => 'Registar',
    'login_lnk' => 'Login',
    'logout_lnk' => 'Logout',
    'lastup_lnk' => 'Ãšltimos envios',
    'lastcom_lnk' => 'Ãšltimos comentÃ¡rios',
    'topn_lnk' => 'Mais Visualizados',
    'toprated_lnk' => 'Topo de linha',
    'search_lnk' => 'Pesquisar',
    'fav_lnk' => 'My Favorites',
    );

$lang_gallery_admin_menu = array('upl_app_lnk' => 'Envio aprovado',
    'config_lnk' => 'ConfiguraÃ§Ã£o',
    'albums_lnk' => 'Ãlbuns',
    'categories_lnk' => 'Categorias',
    'users_lnk' => 'UsuÃ¡rios',
    'groups_lnk' => 'Grupos',
    'comments_lnk' => 'ComentÃ¡rios',
    'searchnew_lnk' => 'Envio em massa',
    'util_lnk' => 'Resize pictures',
    'ban_lnk' => 'Ban Users',
    );

$lang_user_admin_menu = array('albmgr_lnk' => 'Criar / ordnar meus Ã¡lbuns',
    'modifyalb_lnk' => 'Modificar meus Ã¡lbuns',
    'my_prof_lnk' => 'Meus Dados',
    );

$lang_cat_list = array('category' => 'Categoria',
    'albums' => 'Ãlbuns',
    'pictures' => 'Imagens',
    );

$lang_album_list = array('album_on_page' => '%d Ã¡lbuns na(s) %d pÃ¡gina(s)'
    );

$lang_thumb_view = array('date' => 'DATA', 
    // Sort by filename and title
    'name' => 'NOME',
    'title' => 'TITLE',
    'sort_da' => 'Mostar por data ascendente',
    'sort_dd' => 'Mostar por data descendente',
    'sort_na' => 'Mostar por nome ascendente',
    'sort_nd' => 'Mostar por nome descendente',
    'sort_ta' => 'Sort by title ascending',
    'sort_td' => 'Sort by title descending',
    'pic_on_page' => '%d imagens na(s) %d pagina(s)',
    'user_on_page' => '%d usuÃ¡rios na(s) %d pÃ¡gina(s)',
    'sort_ra' => 'Sort by rating ascending', // new in cpg1.2.0nuke
    'sort_rd' => 'Sort by rating descending', // new in cpg1.2.0nuke
    'rating' => 'RATING', // new in cpg1.2.0nuke
    'sort_title' => 'Sort pictures by:', // new in cpg1.2.0nuke
    );

$lang_img_nav_bar = array('thumb_title' => 'Retornar para a pÃ¡gina de miniaturas',
    'pic_info_title' => 'Mostar/esconder informaÃ§Ãµes da imagem',
    'slideshow_title' => 'Show de Slides',
    'slideshow_disabled' => 'e-cards are disabled', // new in cpg1.2.0nuke
    'slideshow_disabled_msg' => $lang_errors['members_only'], // new in cpg1.2.0nuke
    'ecard_title' => 'enviar esta imagem como e-card',
    'ecard_disabled' => 'e-cards estÃ£o desabilitados',
    'ecard_disabled_msg' => 'VocÃª nÃ£o possui permissÃ£o para enviar e-cards',
    'prev_title' => 'Ver imagem anterior',
    'next_title' => 'Ver prÃ³xima imagem',
    'pic_pos' => 'IMAGEM %s/%s',
    'no_more_images' => 'There are no more images in this galley', // new in cpg1.2.0nuke
    'no_less_images' => 'This is the first image in the gallery', // new in cpg1.2.0nuke
    );

$lang_rate_pic = array('rate_this_pic' => 'Qualifique esta imagem ',
    'no_votes' => '(Nenhum voto)',
    'rating' => '(Corrente qualificaÃ§Ã£o : %s / 5 dos %s votos)',
    'rubbish' => 'Ruim',
    'poor' => 'Pobre',
    'fair' => 'Justo',
    'good' => 'Bom',
    'excellent' => 'Excelente',
    'great' => 'Espetacular',
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
    CRITICAL_ERROR => 'ERRO CRÃTICO',
    'file' => 'Arquivo: ',
    'line' => 'Linha: ',
    );

$lang_display_thumbnails = array('filename' => 'Arquivo : ',
    'filesize' => 'Tamanho : ',
    'dimensions' => 'DimensÃµes : ',
    'date_added' => 'Data Envio : '
    );

$lang_get_pic_data = array('n_comments' => '%s comentÃ¡rios',
    'n_views' => '%s visualizaÃ§Ãµes',
    'n_votes' => '(%s votos)'
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
if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array('Exclamation' => 'ExclamaÃ§Ã£o',
        'Question' => 'QuestÃ£o',
        'Very Happy' => 'Muito Feliz',
        'Smile' => 'Sorriso',
        'Sad' => 'Triste',
        'Surprised' => 'Surpreso',
        'Shocked' => 'Chocado',
        'Confused' => 'Confuso',
        'Cool' => 'Cool',
        'Laughing' => 'Risonho',
        'Mad' => 'Louco',
        'Razz' => 'Razz',
        'Embarassed' => 'EmbaraÃ§ado',
        'Crying or Very sad' => 'Muito triste',
        'Evil or Very Mad' => 'Muito mÃ¡u',
        'Twisted Evil' => 'Twisted Evil',
        'Rolling Eyes' => 'Rolando os olhos',
        'Wink' => 'Piscando',
        'Idea' => 'Ideia',
        'Arrow' => 'Seta',
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
if (defined('ADMIN_PHP')) $lang_admin_php = array(0 => 'Deixando o modo administrativo...',
        1 => 'Entrando no modo administrativo...',
        );
// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) $lang_albmgr_php = array('alb_need_name' => 'Ãlbuns precisam ter um nome !',
        'confirm_modifs' => 'Tem certeza que deseja realizar as modificaÃ§Ãµs ?',
        'no_change' => 'VocÃª nÃ£o fÃªz nenhuma mudanÃ§a  !',
        'new_album' => 'Novo Ã¡lbum',
        'confirm_delete1' => 'Tem certeza de querer remover este Ã¡lbum ?',
        'confirm_delete2' => '\nTodas as imagens e comentÃ¡rios serÃ£o perdidos !',
        'select_first' => 'Primeiro selecione um Ã¡lbum',
        'alb_mrg' => 'Gerenciador de Ã¡lbuns',
        'my_gallery' => '* Minha Galeria *',
        'no_category' => '* Sem categoria *',
        'delete' => 'Apagar',
        'new' => 'Novo',
        'apply_modifs' => 'Aplicar modificaÃ§Ãµes',
        'select_category' => 'Selecione uma categoria',
        );
// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) $lang_catmgr_php = array('miss_param' => 'Parametros requeridos para \'%s\'operaÃ§Ã£o nÃ£o fornecida !',
        'unknown_cat' => 'A ctegoria selecionada nÃ£o existe em nossa base de dados',
        'usergal_cat_ro' => 'A categoria do usuÃ¡rio nÃ£o pode ser excluÃ­da !',
        'manage_cat' => 'Gerenciar categorias',
        'confirm_delete' => 'VocÃª tem certeza que deseja EXCLUIR  esta categoria ? ',
        'category' => 'Categoria',
        'operations' => 'OperaÃ§Ãµes',
        'move_into' => 'Mover em',
        'update_create' => 'Atualizar/Criar categoria',
        'parent_cat' => 'Categoria parente',
        'cat_title' => 'TÃ­tulo da categoria',
        'cat_desc' => 'DescriÃ§Ã£o da categoria'
        );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
if (defined('CONFIG_PHP')) $lang_config_php = array('title' => 'ConfiguraÃ§Ã£o',
        'restore_cfg' => 'Restaurar configuraÃ§Ã£o de fÃ¡brica',
        'save_cfg' => 'Salvar nova configuraÃ§Ã£o',
        'notes' => 'Notas',
        'info' => 'InformaÃ§Ã£o',
        'upd_success' => 'ConfiguraÃ§Ã£o do catÃ¡logo atualizada',
        'restore_success' => 'ConfiguraÃ§Ã£o de fÃ¡brica restaurada',
        'name_a' => 'Nome ascendente',
        'name_d' => 'Nome descendente',
        'title_a' => 'Title ascending',
        'title_d' => 'Title descending',
        'date_a' => 'Data Ascendente',
        'date_d' => 'Data descendente',
        'rating_a' => 'Rating ascending', // new in cpg1.2.0nuke
        'rating_d' => 'Rating descending', // new in cpg1.2.0nuke
        'th_any' => 'Max Aspect',
        'th_ht' => 'Height',
        'th_wd' => 'Width',
        );
// start left side interpretation
if (defined('CONFIG_PHP')) $lang_config_data = array('General settings',
array(
'Gallery name', 'gallery_name', 0),
array(
'Gallery description', 'gallery_description', 0),
array(
'Gallery administrator email', 'gallery_admin_email', 0),
array(
'Address to nuke folder ie http://www.mysite.tld/html', 'ecards_more_pic_target', 0),
array(
'Language', 'lang', 5),
// for postnuke change
array(
'Theme', 'cpgtheme', 6),
array(
'Page Specific Titles instead of >Coppermine', 'nice_titles', 1),
array(
'Show blocks on the right', 'right_blocks', 1), // new 1.2.2

        'Album list view',
array(
'Width of the main table (pixels or %)', 'main_table_width', 0),
array(
'Number of levels of categories to display', 'subcat_level', 0),
array(
'Number of albums to display', 'albums_per_page', 0),
array(
'Number of columns for the album list', 'album_list_cols', 0),
array(
'Size of thumbnails in pixels', 'alb_list_thumb_size', 0),
array(
'The content of the main page', 'main_page_layout', 0),
array(
'Show first level album thumbnails in categories', 'first_level', 1),
        'Thumbnail view',
array(
'Number of columns on thumbnail page', 'thumbcols', 0),
array(
'Number of rows on thumbnail page', 'thumbrows', 0),
array(
'Maximum number of tabs to display', 'max_tabs', 0),
array(
'Display picture caption (in addition to title) below the thumbnail', 'caption_in_thumbview', 1),
array(
'Display number of comments below the thumbnail', 'display_comment_count', 1),
array(
'Default sort order for pictures', 'default_sort_order', 3),
array(
'Minimum number of votes for a picture to appear in the \'top-rated\' list', 'min_votes_for_rating', 0),
array(
'Alts and title tags of thumbnail show title and keyword instead of picinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
        'Image view &amp; Comment settings',
array(
'Width of the table for picture display (pixels or %)', 'picture_table_width', 0),
array(
'Picture information are visible by default', 'display_pic_info', 1),
array(
'Filter bad words in comments', 'filter_bad_words', 1),
array(
'Allow smiles in comments', 'enable_smilies', 1),
array(
'Allow several consecutive comments on one pic from the same user', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
array(
'Email site admin upon comment submission' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
array(
'Max length for an image description', 'max_img_desc_length', 0),
array(
'Max number of characters in a word', 'max_com_wlength', 0),
array(
'Max number of lines in a comment', 'max_com_lines', 0),
array(
'Maximum length of a comment', 'max_com_size', 0),
array(
'Show film strip', 'display_film_strip', 1),
array(
'Number of items in film strip', 'max_film_strip_items', 0),
array(
'Allow viewing of full size pic by anonymous', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke		
array(
'Number of days between being able to vote on the same image','keep_votes_time',0), // new in cpg1.2.2c nuke
// 'Pictures and thumbnails settings',
        'Pictures and thumbnails settings',
array(
'Quality for JPEG files', 'jpeg_qual', 0),
array(
'Max dimension of a thumbnail <b>*</b>', 'thumb_width', 0),
array(
'Use dimension ( width or height or Max aspect for thumbnail )<b>*</b>', 'thumb_use', 7),
array(
'Create intermediate pictures', 'make_intermediate', 1),
array(
'Max width or height of an intermediate picture <b>*</b>', 'picture_width', 0),
array(
'Max size for uploaded pictures (KB)', 'max_upl_size', 0),
array(
'Max width or height for uploaded pictures (pixels)', 'max_upl_width_height', 0),
array('Allow multiple Files to be upload with same file name', 'samename', 1), 
        'User settings',
array(
'Allow new user registrations', 'allow_user_registration', 1),
array(
'User registration requires email verification', 'reg_requires_valid_email', 1),
array(
'Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),
array(
'Users can can have private albums', 'allow_private_albums', 1),
array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',

        'Custom fields for image description (leave blank if unused)',
array(
'Field 1 name', 'user_field1_name', 0),
array(
'Field 2 name', 'user_field2_name', 0),
array(
'Field 3 name', 'user_field3_name', 0),
array(
'Field 4 name', 'user_field4_name', 0),

        'Pictures and thumbnails advanced settings',
array(
'Show private album Icon to unlogged user', 'show_private', 1),
array(
'Characters forbidden in filenames', 'forbiden_fname_char', 0),
array(
'Accepted file extensions for uploaded pictures', 'allowed_file_extensions', 0),
array(
'Method for resizing images', 'thumb_method', 2),
array(
'Path to ImageMagick / netpbm \'convert\' utility (example /usr/bin/X11/)', 'impath', 0),
array(
'Allowed image types (only valid for ImageMagick)', 'allowed_img_types', 0),
array(
'Command line options for ImageMagick', 'im_options', 0),
array(
'Read EXIF data in JPEG files', 'read_exif_data', 1),
array(
'Read IPTC data in JPEG files', 'read_iptc_data', 1), // new in cpg1.2.0nuke
array(
'The album directory <b>*</b>', 'fullpath', 0),
array(
'The directory for user pictures <b>*</b>', 'userpics', 0),
array(
'The prefix for intermediate pictures <b>*</b>', 'normal_pfx', 0),
array(
'The prefix for thumbnails <b>*</b>', 'thumb_pfx', 0),
array(
'Default mode for directories', 'default_dir_mode', 0),
array(
'Default mode for pictures', 'default_file_mode', 0),
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
        'Cookies &amp; Charset settings',
array(
'Name of the cookie used by the script', 'cookie_name', 0),
array(
'Path of the cookie used by the script', 'cookie_path', 0),
array(
'Character encoding', 'charset', 4),

        'Miscellaneous settings',
array(
'Enable debug mode', 'debug_mode', 1),
array(
'Enable advanced debug mode', 'advanced_debug_mode', 1), // new in cpg1.2.0nuke
array(
'Show Coppermine Update Alert to Admin', 'showupdate', 1), // new 1.2.2
        '<br /><div align="center">(*) Fields marked with * must not be changed if you already have pictures in your gallery</div><br />'
        );
// end left side interpretation
// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) $lang_db_input_php = array('empty_name_or_com' => 'VocÃª precisa definir um nome para o comentÃ¡rio',
        'com_added' => 'sua conta foi criada',
        'alb_need_title' => 'VocÃª deve definir um nome para o Ã¡lbum !',
        'no_udp_needed' => 'AtualizaÃ§Ã£o nÃ£o necessÃ¡ria.',
        'alb_updated' => 'O Ã¡lbum foi atualizado',
        'unknown_album' => 'O Ã¡lbum selecionado nÃ£o existe ou vocÃª nÃ£o tem permissÃ£o para enviar imagens para ele',
        'no_pic_uploaded' => 'Nenhuma imagem enviada !<br /><br />Se vocÃª realmente selecionaou ima imagem para enviar, verifique se o servidor permite envios...',
        'err_mkdir' => 'Falha ao criar diretÃ³rio %s !',
        'dest_dir_ro' => 'DiretÃ³rio de destino %s nÃ£o pode ser gravado pelo script !',
        'err_move' => 'ImpossÃ­vel mover %s para %s !',
        'err_fsize_too_large' => 'A imagem que vocÃª estÃ¡ tentando enviar Ã© muito grande (mÃ¡ximo permitido %s x %s) !',
        'err_imgsize_too_large' => 'O tamanho da imagem Ã© maior que o permitido (mÃ¡ximo permitido %s KB) !',
        'err_invalid_img' => 'O arquivo que vocÃª estÃ¡ tentando enviar nÃ£o Ã© um arquivo de imagem vÃ¡lido !',
        'allowed_img_types' => 'VocÃª sÃ³ pode enviar %s imagens.',
        'err_insert_pic' => 'A imagem \'%s\' nÃ£o pode ser inserida no Ã¡lbum ',
        'upload_success' => 'Sua imagem foi enviada com sucesso<br /><br />PorÃ©m sÃ³ serÃ¡ visÃ­vel apÃ³s a aprovaÃ§Ã£o do Administrador.',
        'info' => 'InformaÃ§Ã£o',
        'com_added' => 'ComentÃ¡rio adicionado',
        'alb_updated' => 'Ãlbum atualizado',
        'err_comment_empty' => 'Seu comentÃ¡rio estÃ¡ vazio !',
        'err_invalid_fext' => 'Somente os arquivos com as seguines extenÃ§Ãµes sÃ£o permitidos : <br /><br />%s.',
        'no_flood' => 'Desculpe mas vocÃª Ã© o Ãºltimo autor a enviar um comentÃ¡rio<br /><br />Edite o comentÃ¡rio se deseja alterÃ¡-lo',
        'redirect_msg' => 'VocÃª estÃ¡ sendo redirecionado.<br /><br /><br />Clique \'CONTINUE\' se a pÃ¡gina nÃ£o se atualizar automaticamente',
        'upl_success' => 'Sua imagem foi adicionada com sucesso',
        );
// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) $lang_delete_php = array('caption' => 'Sob-TÃ­tulo',
        'fs_pic' => 'tamanho total da imagem',
        'del_success' => 'removido com sucesso',
        'ns_pic' => 'tamanho normal da imagem',
        'err_del' => 'nÃ£o pode ser escluÃ­do',
        'thumb_pic' => 'miniatura',
        'comment' => 'comentÃ¡rio',
        'im_in_alb' => 'imagem no Ã¡lbum',
        'alb_del_success' => 'Ãlbum \'%s\' REMOVIDO',
        'alb_mgr' => 'Gerenciador de Ã¡lbuns',
        'err_invalid_data' => 'Dados recebidos invÃ¡lidos \'%s\'',
        'create_alb' => 'Criando Ã¡lbuns \'%s\'',
        'update_alb' => 'Atualizando Ã¡lbuns \'%s\' tÃ­tulo \'%s\' Ã­ndice \'%s\'',
        'del_pic' => 'Remover imagem',
        'del_alb' => 'Remover Ã¡lbum',
        'del_user' => 'Remover usuÃ¡rio',
        'err_unknown_user' => 'O usuÃ¡rio selecionado nÃ£o existe !',
        'comment_deleted' => 'O comentÃ¡rio foi removido com sucesso',
        );
// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //
// Void
// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')) {
    $lang_display_image_php = array('confirm_del' => 'Tem certeza de EXCLUIR  esta imagem ? \\nComentÃ¡rios vinculados tambÃ©m serÃ£o excluÃ­dos.',
        'del_pic' => 'DELETE THIS PICTURE',
        'size' => '%s x %s pixels',
        'views' => '%s vezes',
        'slideshow' => 'Slideshow',
        'stop_slideshow' => 'PARAR SLIDESHOW',
        'view_fs' => 'Clique para ver a ampliaÃ§Ã£o da imagem',
        'edit_pic' => 'EDIT PICTURE INFO', // new in cpg1.2.0nuke
        );

    $lang_picinfo = array('title' => 'INFORMAÃ‡Ã•ES DA IMAGEM',
        'Filename' => 'Nome',
        'Album name' => 'Ãlbum',
        'Rating' => 'ClassificaÃ§Ã£o (%s votos)',
        'Keywords' => 'Palavras-chave',
        'File Size' => 'Tamanho do arquivo',
        'Dimensions' => 'DimensÃµes',
        'Displayed' => 'Mostrado',
        'Camera' => 'Camera',
        'Date taken' => 'Data',
        'Aperture' => 'Abertura',
        'Exposure time' => 'Tempo de exposiÃ§Ã£o',
        'Focal length' => 'Largura focal',
        'Comment' => 'ComentÃ¡rio',
        'addFav' => 'Add to Fav',
        'addFavPhrase' => 'Favourites',
        'remFav' => 'Remove from Fav',
        'iptcTitle' => 'IPTC Title', // new in cpg1.2.0nuke
        'iptcCopyright' => 'IPTC Copyright', // new in cpg1.2.0nuke
        'iptcKeywords' => 'IPTC Keywords', // new in cpg1.2.0nuke
        'iptcCategory' => 'IPTC Category', // new in cpg1.2.0nuke
        'iptcSubCategories' => 'IPTC Sub Categories', // new in cpg1.2.0nuke
        'bookmark_page' => 'Bookmark Image', // new in cpg1.2.0nuke
        );

    $lang_display_comments = array('OK' => 'OK',
        'edit_title' => 'Editar este comentÃ¡rio',
        'confirm_delete' => 'Tem certeza de REMOVER este comentÃ¡rio ?',
        'add_your_comment' => 'Adicione seu comentÃ¡rio',
        'name' => 'Name',
        'comment' => 'Comment',
        'your_name' => 'Seu nome',
        );

    $lang_fullsize_popup = array('click_to_close' => 'Click image to close this window',
        );
} 
// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //
if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php = array('title' => 'Send an e-card',
        'invalid_email' => '<b>Warning</b> : endereÃ§o eletrÃ´nico invÃ¡lido !',
        'ecard_title' => 'HÃ¡ um e-card %s para vocÃª',
        'view_ecard' => 'Se nÃ£o estiver aparecendo normalmente clique neste link',
        'view_more_pics' => 'Clique aqui para ver mais imagens !',
        'send_success' => 'Seu e-card foi enviado',
        'send_failed' => 'Desculpe, mas o servidor nÃ£o pode enviar seu e-card...',
        'from' => 'Remetente',
        'your_name' => 'Seu nome',
        'your_email' => 'Seu e-amil',
        'to' => 'Para',
        'rcpt_name' => 'DestinatÃ¡rio',
        'rcpt_email' => 'E-mail do destinatÃ¡rio',
        'greetings' => 'SaudaÃ§Ãµes',
        'message' => 'Mensagem',
        );
// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //
if (defined('EDITPICS_PHP')) $lang_editpics_php = array('pic_info' => 'Picture&nbsp;info',
        'album' => 'Ãlbum',
        'title' => 'TÃ­tulo',
        'desc' => 'DescriÃ§Ã£o',
        'keywords' => 'Palavras-chave',
        'pic_info_str' => '%sx%s - %sKB - %s views - %s votes',
        'approve' => 'Aprovar imagem',
        'postpone_app' => 'Postpone approval',
        'del_pic' => 'Apagar imagem',
        'reset_view_count' => 'Zerar contador',
        'reset_votes' => 'Zerar votos',
        'del_comm' => 'Excluir comentÃ¡rios',
        'upl_approval' => 'Aprovar envio',
        'edit_pics' => 'Editar imagens',
        'see_next' => 'Ver prÃ³ximas imagens',
        'see_prev' => 'Ver imagens anteriores',
        'n_pic' => '%s imagens',
        'n_of_pic_to_disp' => 'NÃºmero de imagens a mostrar',
        'apply' => 'Aplicar modificaÃ§Ãµes'
        );
// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array('group_name' => 'Nome do Grupo',
        'disk_quota' => 'Quota de disco',
        'can_rate' => 'Pode avaliar imagens',
        'can_send_ecards' => 'Pode enviar e-cards',
        'can_post_com' => 'Pode enviar comentÃ¡rios',
        'can_upload' => 'Pode enviar imagens',
        'can_have_gallery' => 'Pode ter uma galeria pessoal',
        'apply' => 'Aplicar modificaÃ§Ãµes',
        'create_new_group' => 'Criar novo grupo',
        'del_groups' => 'Apag牡 最爀甀瀀漀⠀猀⤀ 猀攀氀攀挀椀漀渀愀搀漀⠀猀⤀✀Ⰰഀ਀        ✀挀漀渀昀椀爀洀开搀攀氀✀ 㴀㸀 ✀䌀唀䤀䐀䄀䐀伀㨀 䄀漀 爀攀洀漀瘀攀爀 甀洀 最爀甀瀀漀 猀攀甀 挀漀渀琀攀쌀먀搀漀 猀攀爀쌀ꄀ 琀爀愀渀猀昀攀爀椀搀漀 瀀愀爀愀 尀✀刀攀最椀猀琀攀爀攀搀尀✀ ℀尀渀尀渀焀甀攀爀 挀漀渀琀椀渀甀愀爀 㼀✀Ⰰഀ਀        ✀琀椀琀氀攀✀ 㴀㸀 ✀䜀攀爀攀渀挀椀愀爀 最爀甀瀀漀猀✀Ⰰഀ਀        ✀愀瀀瀀爀漀瘀愀氀开㄀✀ 㴀㸀 ✀䄀瀀爀漀瘀愀쌀꜀쌀ꌀ漀 瀀쌀먀戀氀椀挀愀 ⠀㄀⤀✀Ⰰഀ਀        ✀愀瀀瀀爀漀瘀愀氀开㈀✀ 㴀㸀 ✀䄀愀瀀爀漀瘀愀쌀꜀쌀ꌀ漀 瀀爀椀瘀愀搀愀 ⠀㈀⤀✀Ⰰഀ਀        ✀渀漀琀攀㄀✀ 㴀㸀 ✀㰀戀㸀⠀㄀⤀㰀⼀戀㸀 䔀渀瘀椀漀猀 瀀愀爀愀 甀洀 쌀ꄀ氀戀甀洀 瀀쌀먀戀氀椀挀漀 爀攀焀甀攀爀攀洀 愀瀀爀漀瘀愀쌀꜀쌀ꌀ漀 搀漀 愀搀洀椀渀椀猀琀爀愀搀漀爀✀Ⰰഀ਀        ✀渀漀琀攀㈀✀ 㴀㸀 ✀㰀戀㸀⠀㈀⤀㰀⼀戀㸀 䔀渀瘀椀漀猀 爀攀焀甀攀爀攀洀 愀瀀爀漀瘀愀쌀꜀쌀ꌀ漀 搀漀 愀搀洀椀渀椀猀琀爀愀搀漀爀✀Ⰰഀ਀        ✀渀漀琀攀猀✀ 㴀㸀 ✀一漀琀愀猀✀ഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 椀渀搀攀砀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀䤀一䐀䔀堀开倀䠀倀✀⤀⤀ 笀ഀ਀    ␀氀愀渀最开椀渀搀攀砀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀眀攀氀挀漀洀攀✀ 㴀㸀 ✀圀攀氀挀漀洀攀 ℀✀ഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开愀氀戀甀洀开愀搀洀椀渀开洀攀渀甀 㴀 愀爀爀愀礀⠀✀挀漀渀昀椀爀洀开搀攀氀攀琀攀✀ 㴀㸀 ✀吀攀洀 挀攀爀琀攀稀愀 焀甀攀 搀攀猀攀樀愀 䔀堀䌀䰀唀䤀刀 攀猀琀攀 쌀ꄀ氀戀甀洀 㼀 尀尀渀吀漀搀愀猀 愀猀 椀洀愀最攀渀猀 攀 挀漀洀攀渀琀쌀ꄀ爀椀漀猀 猀攀爀쌀ꌀ漀 攀砀挀氀甀쌀관搀漀猀⸀✀Ⰰഀ਀        ✀搀攀氀攀琀攀✀ 㴀㸀 ✀䔀堀䌀䰀唀䤀刀✀Ⰰഀ਀        ✀洀漀搀椀昀礀✀ 㴀㸀 ✀倀刀伀倀刀䤀䔀䐀䄀䐀䔀匀✀Ⰰഀ਀        ✀攀搀椀琀开瀀椀挀猀✀ 㴀㸀 ✀䔀䐀䤀吀䄀刀 䤀䴀䄀䜀䔀一匀✀Ⰰഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开氀椀猀琀开挀愀琀攀最漀爀椀攀猀 㴀 愀爀爀愀礀⠀✀栀漀洀攀✀ 㴀㸀 ✀䠀漀洀攀✀Ⰰഀ਀        ✀猀琀愀琀㄀✀ 㴀㸀 ✀㰀戀㸀嬀瀀椀挀琀甀爀攀猀崀㰀⼀戀㸀 椀洀愀最攀渀猀 攀洀 㰀戀㸀嬀愀氀戀甀洀猀崀㰀⼀戀㸀 쌀ꄀ氀戀甀渀猀 攀 㰀戀㸀嬀挀愀琀崀㰀⼀戀㸀 挀愀琀攀最漀爀椀愀猀 挀漀洀 㰀戀㸀嬀挀漀洀洀攀渀琀猀崀㰀⼀戀㸀 挀漀洀攀渀琀쌀ꄀ爀椀漀猀 瘀椀猀琀漀猀 㰀戀㸀嬀瘀椀攀眀猀崀㰀⼀戀㸀 瘀攀稀攀猀✀Ⰰഀ਀        ✀猀琀愀琀㈀✀ 㴀㸀 ✀㰀戀㸀嬀瀀椀挀琀甀爀攀猀崀㰀⼀戀㸀 椀洀愀最攀渀猀 攀洀 㰀戀㸀嬀愀氀戀甀洀猀崀㰀⼀戀㸀 쌀ꄀ氀戀甀渀猀 瘀椀猀琀漀猀 㰀戀㸀嬀瘀椀攀眀猀崀㰀⼀戀㸀 瘀攀稀攀猀✀Ⰰഀ਀        ✀砀砀开猀开最愀氀氀攀爀礀✀ 㴀㸀 ✀─猀尀✀猀 䜀愀氀攀爀椀愀✀Ⰰഀ਀        ✀猀琀愀琀㌀✀ 㴀㸀 ✀㰀戀㸀嬀瀀椀挀琀甀爀攀猀崀㰀⼀戀㸀 椀洀愀最攀渀猀 攀洀 㰀戀㸀嬀愀氀戀甀洀猀崀㰀⼀戀㸀 쌀ꄀ氀戀甀渀猀 挀漀洀 㰀戀㸀嬀挀漀洀洀攀渀琀猀崀㰀⼀戀㸀 挀漀洀攀渀琀쌀ꄀ爀椀漀猀 瘀椀猀琀漀猀 㰀戀㸀嬀瘀椀攀眀猀崀㰀⼀戀㸀 瘀攀稀攀猀✀ഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开氀椀猀琀开甀猀攀爀猀 㴀 愀爀爀愀礀⠀✀甀猀攀爀开氀椀猀琀✀ 㴀㸀 ✀䰀椀猀琀愀 搀攀 甀猀甀쌀ꄀ爀椀漀猀✀Ⰰഀ਀        ✀渀漀开甀猀攀爀开最愀氀✀ 㴀㸀 ✀一攀渀栀甀洀 甀猀甀쌀ꄀ爀椀漀 瀀攀爀洀椀琀椀搀漀 愀 琀攀爀 쌀ꄀ氀戀甀渀猀✀Ⰰഀ਀        ✀渀开愀氀戀甀洀猀✀ 㴀㸀 ✀─猀 쌀ꄀ氀戀甀洀⠀猀⤀✀Ⰰഀ਀        ✀渀开瀀椀挀猀✀ 㴀㸀 ✀─猀 椀洀愀最攀洀⠀猀⤀✀ഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开氀椀猀琀开愀氀戀甀洀猀 㴀 愀爀爀愀礀⠀✀渀开瀀椀挀琀甀爀攀猀✀ 㴀㸀 ✀─猀 椀洀愀最攀洀✀Ⰰഀ਀        ✀氀愀猀琀开愀搀搀攀搀✀ 㴀㸀 ✀Ⰰ 쌀먀氀琀椀洀漀 愀搀椀挀椀漀渀愀搀漀 攀洀 ─猀✀ഀ਀        ⤀㬀ഀ਀紀 ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 洀漀搀椀昀礀愀氀戀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀䴀伀䐀䤀䘀夀䄀䰀䈀开倀䠀倀✀⤀⤀ ␀氀愀渀最开洀漀搀椀昀礀愀氀戀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀甀瀀搀开愀氀戀开渀✀ 㴀㸀 ✀䄀琀甀愀氀椀稀愀爀 쌀ꄀ氀戀甀洀 ─猀✀Ⰰഀ਀        ✀最攀渀攀爀愀氀开猀攀琀琀椀渀最猀✀ 㴀㸀 ✀䌀漀渀昀椀最甀爀愀쌀꜀쌀딀攀猀 最攀爀愀椀猀✀Ⰰഀ਀        ✀愀氀戀开琀椀琀氀攀✀ 㴀㸀 ✀吀쌀관琀甀氀漀 搀漀 쌀ꄀ氀戀甀洀✀Ⰰഀ਀        ✀愀氀戀开挀愀琀✀ 㴀㸀 ✀䌀愀琀攀最漀爀椀愀 搀漀 쌀ꄀ氀戀甀洀✀Ⰰഀ਀        ✀愀氀戀开搀攀猀挀✀ 㴀㸀 ✀䐀攀猀挀爀椀쌀꜀쌀ꌀ漀 搀漀 쌀ꄀ氀戀甀洀✀Ⰰഀ਀        ✀愀氀戀开琀栀甀洀戀✀ 㴀㸀 ✀䴀椀渀椀愀琀甀爀愀 搀漀 쌀ꄀ氀戀甀洀✀Ⰰഀ਀        ✀愀氀戀开瀀攀爀洀✀ 㴀㸀 ✀倀攀爀洀椀猀猀쌀딀攀猀 瀀愀爀愀 攀猀琀攀 쌀ꄀ氀戀甀洀✀Ⰰഀ਀        ✀挀愀渀开瘀椀攀眀✀ 㴀㸀 ✀쌀脀氀戀甀洀 瀀漀搀攀 猀攀爀 瘀椀猀琀漀 瀀漀爀✀Ⰰഀ਀        ✀挀愀渀开甀瀀氀漀愀搀✀ 㴀㸀 ✀嘀椀猀椀琀愀渀琀攀猀 瀀漀搀攀洀 攀渀瘀椀愀爀 椀洀愀最攀渀猀✀Ⰰഀ਀        ✀挀愀渀开瀀漀猀琀开挀漀洀洀攀渀琀猀✀ 㴀㸀 ✀嘀椀猀椀琀愀渀琀攀猀 瀀漀搀攀洀 攀渀瘀椀愀爀 挀漀洀攀渀琀쌀ꄀ爀椀漀猀✀Ⰰഀ਀        ✀挀愀渀开爀愀琀攀✀ 㴀㸀 ✀嘀椀猀椀琀愀渀琀攀猀 瀀漀搀攀洀 愀瘀愀氀椀愀爀 椀洀愀最攀渀猀✀Ⰰഀ਀        ✀甀猀攀爀开最愀氀✀ 㴀㸀 ✀䜀愀氀攀爀椀愀 搀漀 唀猀甀쌀ꄀ爀椀漀✀Ⰰഀ਀        ✀渀漀开挀愀琀✀ 㴀㸀 ✀⨀ 匀攀洀 挀愀琀攀最漀爀椀愀 ⨀✀Ⰰഀ਀        ✀愀氀戀开攀洀瀀琀礀✀ 㴀㸀 ✀쌀脀氀戀甀洀 瘀愀稀椀漀✀Ⰰഀ਀        ✀氀愀猀琀开甀瀀氀漀愀搀攀搀✀ 㴀㸀 ✀쌀愀氁琀椀洀漀 攀渀瘀椀漀✀Ⰰഀ਀        ✀瀀甀戀氀椀挀开愀氀戀✀ 㴀㸀 ✀吀漀搀漀猀 ⠀愀氀戀甀洀 瀀쌀먀戀氀椀挀漀⤀✀Ⰰഀ਀        ✀洀攀开漀渀氀礀✀ 㴀㸀 ✀䄀瀀攀渀愀猀 攀甀✀Ⰰഀ਀        ✀漀眀渀攀爀开漀渀氀礀✀ 㴀㸀 ✀倀爀漀瀀爀椀攀琀쌀ꄀ爀椀漀 ⠀─猀⤀ 愀瀀攀渀愀猀✀Ⰰഀ਀        ✀最爀漀甀瀀瀀开漀渀氀礀✀ 㴀㸀 ✀䴀攀洀戀爀漀猀 搀漀  最爀甀瀀漀尀✀─猀尀✀ ✀Ⰰഀ਀        ✀攀爀爀开渀漀开愀氀戀开琀漀开洀漀搀椀昀礀✀ 㴀㸀 ✀一攀渀栀甀洀 愀氀戀甀洀 焀甀攀 瘀漀挀쌀ꨀ 瀀漀搀攀 洀漀搀椀昀椀挀愀爀 渀愀 戀愀猀攀 搀攀 搀愀搀漀猀 ⸀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀✀ 㴀㸀 ✀䄀琀甀愀氀椀稀愀爀 쌀ꄀ氀戀甀洀✀ഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 爀愀琀攀瀀椀挀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀刀䄀吀䔀倀䤀䌀开倀䠀倀✀⤀⤀ ␀氀愀渀最开爀愀琀攀开瀀椀挀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀愀氀爀攀愀搀礀开爀愀琀攀搀✀ 㴀㸀 ✀䐀攀猀挀甀氀瀀攀Ⰰ 洀愀猀 瘀漀挀쌀ꨀ 樀愀 愀瘀愀氀椀漀甀 攀猀琀愀 椀洀愀最攀洀✀Ⰰഀ਀        ✀爀愀琀攀开漀欀✀ 㴀㸀 ✀匀攀甀 瘀漀琀漀 昀漀椀 愀挀攀椀琀漀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 爀攀最椀猀琀攀爀⸀瀀栀瀀 ☀ 瀀爀漀昀椀氀攀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀刀䔀䜀䤀匀吀䔀刀开倀䠀倀✀⤀ 簀簀 搀攀昀椀渀攀搀⠀✀倀刀伀䘀䤀䰀䔀开倀䠀倀✀⤀⤀ 笀ഀ਀    ␀氀愀渀最开爀攀最椀猀琀攀爀开搀椀猀挀氀愀洀攀爀 㴀 㰀㰀㰀䔀伀吀ഀ਀圀栀椀氀攀 琀栀攀 愀搀洀椀渀椀猀琀爀愀琀漀爀猀 漀昀 笀匀䤀吀䔀开一䄀䴀䔀紀 眀椀氀氀 愀琀琀攀洀瀀琀 琀漀 爀攀洀漀瘀攀 漀爀 攀搀椀琀 愀渀礀 最攀渀攀爀愀氀氀礀 漀戀樀攀挀琀椀漀渀愀戀氀攀 洀愀琀攀爀椀愀氀 愀猀 焀甀椀挀欀氀礀 愀猀 瀀漀猀猀椀戀氀攀Ⰰ 椀琀 椀猀 椀洀瀀漀猀猀椀戀氀攀 琀漀 爀攀瘀椀攀眀 攀瘀攀爀礀 瀀漀猀琀⸀ 吀栀攀爀攀昀漀爀攀 礀漀甀 愀挀欀渀漀眀氀攀搀最攀 琀栀愀琀 愀氀氀 瀀漀猀琀猀 洀愀搀攀 琀漀 琀栀椀猀 猀椀琀攀 攀砀瀀爀攀猀猀 琀栀攀 瘀椀攀眀猀 愀渀搀 漀瀀椀渀椀漀渀猀 漀昀 琀栀攀 愀甀琀栀漀爀 愀渀搀 渀漀琀 琀栀攀 愀搀洀椀渀椀猀琀爀愀琀漀爀猀 漀爀 眀攀戀洀愀猀琀攀爀 ⠀攀砀挀攀瀀琀 昀漀爀 瀀漀猀琀猀 戀礀 琀栀攀猀攀 瀀攀漀瀀氀攀⤀ 愀渀搀 栀攀渀挀攀 眀椀氀氀 渀漀琀 戀攀 栀攀氀搀 氀椀愀戀氀攀⸀㰀戀爀 ⼀㸀ഀ਀㰀戀爀 ⼀㸀ഀ਀夀漀甀 愀最爀攀攀 渀漀琀 琀漀 瀀漀猀琀 愀渀礀 愀戀甀猀椀瘀攀Ⰰ 漀戀猀挀攀渀攀Ⰰ 瘀甀氀最愀爀Ⰰ 猀氀愀渀搀攀爀漀甀猀Ⰰ 栀愀琀攀昀甀氀Ⰰ 琀栀爀攀愀琀攀渀椀渀最Ⰰ 猀攀砀甀愀氀氀礀ⴀ漀爀椀攀渀琀愀琀攀搀 漀爀 愀渀礀 漀琀栀攀爀 洀愀琀攀爀椀愀氀 琀栀愀琀 洀愀礀 瘀椀漀氀愀琀攀 愀渀礀 愀瀀瀀氀椀挀愀戀氀攀 氀愀眀猀⸀ 夀漀甀 愀最爀攀攀 琀栀愀琀 琀栀攀 眀攀戀洀愀猀琀攀爀Ⰰ 愀搀洀椀渀椀猀琀爀愀琀漀爀 愀渀搀 洀漀搀攀爀愀琀漀爀猀 漀昀 笀匀䤀吀䔀开一䄀䴀䔀紀 栀愀瘀攀 琀栀攀 爀椀最栀琀 琀漀 爀攀洀漀瘀攀 漀爀 攀搀椀琀 愀渀礀 挀漀渀琀攀渀琀 愀琀 愀渀礀 琀椀洀攀 猀栀漀甀氀搀 琀栀攀礀 猀攀攀 昀椀琀⸀ 䄀猀 愀 甀猀攀爀 礀漀甀 愀最爀攀攀 琀漀 愀渀礀 椀渀昀漀爀洀愀琀椀漀渀 礀漀甀 栀愀瘀攀 攀渀琀攀爀攀搀 愀戀漀瘀攀 戀攀椀渀最 猀琀漀爀攀搀 椀渀 愀 搀愀琀愀戀愀猀攀⸀ 圀栀椀氀攀 琀栀椀猀 椀渀昀漀爀洀愀琀椀漀渀 眀椀氀氀 渀漀琀 戀攀 搀椀猀挀氀漀猀攀搀 琀漀 愀渀礀 琀栀椀爀搀 瀀愀爀琀礀 眀椀琀栀漀甀琀 礀漀甀爀 挀漀渀猀攀渀琀 琀栀攀 眀攀戀洀愀猀琀攀爀 愀渀搀 愀搀洀椀渀椀猀琀爀愀琀漀爀 挀愀渀渀漀琀 戀攀 栀攀氀搀 爀攀猀瀀漀渀猀椀戀氀攀 昀漀爀 愀渀礀 栀愀挀欀椀渀最 愀琀琀攀洀瀀琀 琀栀愀琀 洀愀礀 氀攀愀搀 琀漀 琀栀攀 搀愀琀愀 戀攀椀渀最 挀漀洀瀀爀漀洀椀猀攀搀⸀㰀戀爀 ⼀㸀ഀ਀㰀戀爀 ⼀㸀ഀ਀吀栀椀猀 猀椀琀攀 甀猀攀猀 挀漀漀欀椀攀猀 琀漀 猀琀漀爀攀 椀渀昀漀爀洀愀琀椀漀渀 漀渀 礀漀甀爀 氀漀挀愀氀 挀漀洀瀀甀琀攀爀⸀ 吀栀攀猀攀 挀漀漀欀椀攀猀 猀攀爀瘀攀 漀渀氀礀 琀漀 椀洀瀀爀漀瘀攀 礀漀甀爀 瘀椀攀眀椀渀最 瀀氀攀愀猀甀爀攀⸀ 吀栀攀 攀洀愀椀氀 愀搀搀爀攀猀猀 椀猀 甀猀攀搀 漀渀氀礀 昀漀爀 挀漀渀昀椀爀洀椀渀最 礀漀甀爀 爀攀最椀猀琀爀愀琀椀漀渀 搀攀琀愀椀氀猀 愀渀搀 瀀愀猀猀眀漀爀搀⸀㰀戀爀 ⼀㸀ഀ਀㰀戀爀 ⼀㸀ഀ਀䈀礀 挀氀椀挀欀椀渀最 ✀䤀 愀最爀攀攀✀ 戀攀氀漀眀 礀漀甀 愀最爀攀攀 琀漀 戀攀 戀漀甀渀搀 戀礀 琀栀攀猀攀 挀漀渀搀椀琀椀漀渀猀⸀ഀ਀䔀伀吀㬀ഀ਀ഀ਀    ␀氀愀渀最开爀攀最椀猀琀攀爀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀瀀愀最攀开琀椀琀氀攀✀ 㴀㸀 ✀刀䔀䜀䤀匀吀刀伀 䐀䔀 唀匀唀쌀脀刀䤀伀✀Ⰰഀ਀        ✀琀攀爀洀开挀漀渀搀✀ 㴀㸀 ✀吀攀爀洀漀猀 攀 挀漀渀搀椀쌀꜀쌀딀攀猀✀Ⰰഀ਀        ✀椀开愀最爀攀攀✀ 㴀㸀 ✀䔀甀 䄀挀攀椀琀漀✀Ⰰഀ਀        ✀猀甀戀洀椀琀✀ 㴀㸀 ✀攀渀瘀椀愀爀 爀攀最椀猀琀爀漀✀Ⰰഀ਀        ✀攀爀爀开甀猀攀爀开攀砀椀猀琀猀✀ 㴀㸀 ✀䔀猀琀攀 渀漀洀攀 搀攀 甀猀甀쌀ꄀ爀椀漀 樀쌀ꄀ 攀砀椀猀琀攀Ⰰ 瀀漀爀 昀愀瘀漀爀 挀爀椀攀 漀甀琀爀漀✀Ⰰഀ਀        ✀攀爀爀开瀀愀猀猀眀漀爀搀开洀椀猀洀愀琀挀栀✀ 㴀㸀 ✀䄀猀 搀甀愀猀 猀攀渀栀愀猀 搀椀最椀琀愀搀愀猀 渀쌀ꌀ漀 挀漀渀昀攀爀攀洀⸀ 䐀椀最椀琀攀 挀漀洀 挀甀椀搀愀搀漀 渀漀瘀愀洀攀渀琀攀✀Ⰰഀ਀        ✀攀爀爀开甀渀愀洀攀开猀栀漀爀琀✀ 㴀㸀 ✀一漀洀攀 搀攀 甀猀甀쌀ꄀ爀椀漀 瀀爀攀挀椀猀愀 琀攀爀 渀漀 洀쌀관渀椀洀漀 ㈀ 挀愀爀愀挀琀攀爀攀猀✀Ⰰഀ਀        ✀攀爀爀开瀀愀猀猀眀漀爀搀开猀栀漀爀琀✀ 㴀㸀 ✀猀甀愀 猀攀渀栀愀 琀攀洀 焀甀攀 琀攀爀 渀漀 洀쌀관渀椀洀漀 ㈀ 挀愀爀愀挀琀攀爀攀猀✀Ⰰഀ਀        ✀攀爀爀开甀渀愀洀攀开瀀愀猀猀开搀椀昀昀✀ 㴀㸀 ✀一漀洀攀 搀攀 甀猀甀쌀ꄀ爀椀漀 攀 猀攀渀栀愀 搀攀瘀攀洀 猀攀爀 搀椀昀攀爀攀渀琀攀猀✀Ⰰഀ਀        ✀攀爀爀开椀渀瘀愀氀椀搀开攀洀愀椀氀✀ 㴀㸀 ✀䔀渀搀攀爀攀쌀꜀漀 搀攀 攀ⴀ洀愀椀氀 椀渀瘀쌀ꄀ氀椀搀漀✀Ⰰഀ਀        ✀攀爀爀开搀甀瀀氀椀挀愀琀攀开攀洀愀椀氀✀ 㴀㸀 ✀䨀쌀ꄀ 攀砀椀猀琀攀 漀甀琀爀漀 甀猀甀쌀ꄀ爀椀漀 爀攀最椀猀琀爀愀搀漀 挀漀洀 攀猀琀攀 攀ⴀ洀愀椀氀✀Ⰰഀ਀        ✀攀渀琀攀爀开椀渀昀漀✀ 㴀㸀 ✀䔀渀琀爀攀 挀漀洀 愀猀 椀渀昀漀爀洀愀쌀꜀쌀딀攀猀 搀攀 爀攀最椀猀琀爀漀✀Ⰰഀ਀        ✀爀攀焀甀椀爀攀搀开椀渀昀漀✀ 㴀㸀 ✀䤀渀昀漀爀洀愀쌀꜀쌀ꌀ漀 爀攀焀甀攀爀椀搀愀✀Ⰰഀ਀        ✀漀瀀琀椀漀渀愀氀开椀渀昀漀✀ 㴀㸀 ✀䤀渀昀漀爀洀愀쌀꜀쌀ꌀ漀 漀瀀挀椀漀渀愀氀✀Ⰰഀ਀        ✀甀猀攀爀渀愀洀攀✀ 㴀㸀 ✀唀猀甀쌀ꄀ爀椀漀✀Ⰰഀ਀        ✀瀀愀猀猀眀漀爀搀✀ 㴀㸀 ✀匀攀渀栀愀✀Ⰰഀ਀        ✀瀀愀猀猀眀漀爀搀开愀最愀椀渀✀ 㴀㸀 ✀刀攀瀀椀琀愀 愀 猀攀渀栀愀✀Ⰰഀ਀        ✀攀洀愀椀氀✀ 㴀㸀 ✀䔀ⴀ洀愀椀氀✀Ⰰഀ਀        ✀氀漀挀愀琀椀漀渀✀ 㴀㸀 ✀䔀渀搀攀爀攀쌀꜀漀✀Ⰰഀ਀        ✀椀渀琀攀爀攀猀琀猀✀ 㴀㸀 ✀䤀渀琀攀爀攀猀猀攀猀✀Ⰰഀ਀        ✀眀攀戀猀椀琀攀✀ 㴀㸀 ✀䠀漀洀攀 瀀愀最攀✀Ⰰഀ਀        ✀漀挀挀甀瀀愀琀椀漀渀✀ 㴀㸀 ✀倀爀漀昀椀猀猀쌀ꌀ漀✀Ⰰഀ਀        ✀攀爀爀漀爀✀ 㴀㸀 ✀䔀刀刀伀✀Ⰰഀ਀        ✀挀漀渀昀椀爀洀开攀洀愀椀氀开猀甀戀樀攀挀琀✀ 㴀㸀 ✀─猀 ⴀ 䌀伀一䘀䤀刀䴀䄀쌀℀쌠鈀企 䐀䔀 刀䔀䜀䤀匀吀刀伀✀Ⰰഀ਀        ✀椀渀昀漀爀洀愀琀椀漀渀✀ 㴀㸀 ✀䤀渀昀漀爀洀愀쌀꜀쌀ꌀ漀✀Ⰰഀ਀        ✀昀愀椀氀攀搀开猀攀渀搀椀渀最开攀洀愀椀氀✀ 㴀㸀 ✀伀 攀ⴀ洀愀椀氀 搀攀 挀漀渀昀椀爀洀愀쌀꜀쌀ꌀ漀 搀攀 爀攀最椀猀琀爀漀 渀쌀ꌀ漀 瀀쌀됀搀攀 猀攀爀 攀渀瘀椀愀搀漀 ℀✀Ⰰഀ਀        ✀琀栀愀渀欀开礀漀甀✀ 㴀㸀 ✀伀戀爀椀最愀搀漀 瀀爀 猀攀 爀攀最椀猀琀爀愀爀⸀㰀戀爀 ⼀㸀㰀戀爀 ⼀㸀䄀猀 椀渀昀漀爀洀愀쌀꜀쌀딀攀猀 瀀愀爀愀 昀椀渀愀氀椀稀愀爀 猀攀甀 爀攀最椀猀琀爀漀 昀漀爀愀洀 攀渀瘀椀愀搀愀猀 瀀愀爀愀 猀攀甀 攀ⴀ洀愀椀氀⸀ 嘀攀爀椀昀椀焀甀攀 愀最漀爀愀 漀甀 愀最甀愀爀搀攀 甀渀猀 椀渀猀琀愀渀琀攀猀⸀✀Ⰰഀ਀        ✀愀挀挀琀开挀爀攀愀琀攀搀✀ 㴀㸀 ✀匀甀愀 挀漀渀琀愀 昀漀椀 挀爀椀愀搀愀⸀ 倀愀爀愀 愀挀攀猀猀愀爀 漀 挀愀琀쌀ꄀ氀漀最漀 瘀漀挀쌀ꨀ 搀攀瘀攀 昀漀爀渀攀挀攀爀 猀攀甀 渀漀洀攀 搀攀 甀猀甀쌀ꄀ爀椀漀 攀 猀甀愀 猀攀渀栀愀✀Ⰰഀ਀        ✀愀挀挀琀开愀挀琀椀瘀攀✀ 㴀㸀 ✀匀甀愀 挀漀渀琀愀 樀쌀ꄀ 攀猀琀쌀ꄀ 愀琀椀瘀愀⸀ 䔀渀琀爀攀 挀漀洀 猀攀甀 渀漀洀攀 搀攀 甀猀甀쌀ꄀ爀椀漀 攀 猀攀渀栀愀 瀀愀爀愀 愀挀攀猀猀愀爀 漀猀 搀愀搀漀猀 搀漀 挀愀琀쌀ꄀ氀漀最漀✀Ⰰഀ਀        ✀愀挀挀琀开愀氀爀攀愀搀礀开愀挀琀✀ 㴀㸀 ✀匀甀愀 挀漀渀琀愀 樀쌀ꄀ 攀猀琀쌀ꄀ 愀琀椀瘀愀 ℀✀Ⰰഀ਀        ✀愀挀挀琀开愀挀琀开昀愀椀氀攀搀✀ 㴀㸀 ✀䔀猀琀愀 挀漀渀琀愀 渀쌀ꌀ漀 攀猀琀쌀ꄀ 愀琀椀瘀愀 愀椀渀搀愀 ℀✀Ⰰഀ਀        ✀攀爀爀开甀渀欀开甀猀攀爀✀ 㴀㸀 ✀唀猀甀쌀ꄀ爀椀漀 猀攀氀攀挀椀漀渀愀搀漀 渀쌀ꌀ漀 攀砀椀猀琀攀 ℀✀Ⰰഀ਀        ✀砀开猀开瀀爀漀昀椀氀攀✀ 㴀㸀 ✀─猀尀✀猀 瀀爀漀昀椀氀攀✀Ⰰഀ਀        ✀最爀漀甀瀀✀ 㴀㸀 ✀䜀爀甀瀀漀✀Ⰰഀ਀        ✀爀攀最开搀愀琀攀✀ 㴀㸀 ✀倀䄀爀琀椀挀椀瀀愀渀琀攀✀Ⰰഀ਀        ✀搀椀猀欀开甀猀愀最攀✀ 㴀㸀 ✀唀猀漀 搀漀 搀椀猀挀漀✀Ⰰഀ਀        ✀挀栀愀渀最攀开瀀愀猀猀✀ 㴀㸀 ✀䄀氀琀攀爀愀爀 猀攀渀栀愀✀Ⰰഀ਀        ✀挀甀爀爀攀渀琀开瀀愀猀猀✀ 㴀㸀 ✀匀攀渀栀愀 愀琀甀愀氀✀Ⰰഀ਀        ✀渀攀眀开瀀愀猀猀✀ 㴀㸀 ✀一漀瘀愀 猀攀渀栀愀✀Ⰰഀ਀        ✀渀攀眀开瀀愀猀猀开愀最愀椀渀✀ 㴀㸀 ✀一漀瘀愀 猀攀渀栀愀 搀攀 渀漀瘀漀✀Ⰰഀ਀        ✀攀爀爀开挀甀爀爀开瀀愀猀猀✀ 㴀㸀 ✀匀攀渀栀愀 愀琀甀愀氀 䤀一䌀伀刀刀䔀吀䄀✀Ⰰഀ਀        ✀愀瀀瀀氀礀开洀漀搀椀昀✀ 㴀㸀 ✀䄀瀀氀椀挀愀爀 洀漀搀椀昀椀挀愀쌀꜀쌀딀攀猀✀Ⰰഀ਀        ✀挀栀愀渀最攀开瀀愀猀猀✀ 㴀㸀 ✀䄀氀琀攀爀愀爀 洀椀渀栀愀 猀攀渀栀愀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开猀甀挀挀攀猀猀✀ 㴀㸀 ✀匀攀甀猀 搀愀搀漀猀 昀漀爀愀洀 愀琀甀愀氀椀稀愀搀猀漀猀✀Ⰰഀ਀        ✀瀀愀猀猀开挀栀最开猀甀挀挀攀猀猀✀ 㴀㸀 ✀匀甀愀 猀攀渀栀愀 昀漀椀 愀氀琀攀爀愀搀愀✀Ⰰഀ਀        ✀瀀愀猀猀开挀栀最开攀爀爀漀爀✀ 㴀㸀 ✀匀甀愀 猀攀渀栀愀 渀쌀ꌀ漀 昀漀椀 愀氀琀攀爀愀搀愀✀Ⰰഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开爀攀最椀猀琀攀爀开挀漀渀昀椀爀洀开攀洀愀椀氀 㴀 㰀㰀㰀䔀伀吀ഀ਀吀栀愀渀欀 礀漀甀 昀漀爀 爀攀最椀猀琀攀爀椀渀最 愀琀 笀匀䤀吀䔀开一䄀䴀䔀紀ഀ਀ഀ਀匀攀甀 渀漀洀攀 搀攀 甀猀甀쌀ꄀ爀椀漀 쌀꤀ 㨀 ∀笀唀匀䔀刀开一䄀䴀䔀紀∀ഀ਀匀甀愀 猀攀渀栀愀 쌀꤀ 㨀 ∀笀倀䄀匀匀圀伀刀䐀紀∀ഀ਀ഀ਀䌀氀椀焀甀攀 渀漀 氀椀渀欀 愀戀愀椀砀漀 漀甀 挀漀瀀椀攀 攀 挀漀氀攀 渀漀 猀攀甀 䈀爀漀眀猀攀爀 瀀愀爀愀 愀挀攀猀猀愀爀 渀漀猀猀漀 挀愀琀쌀ꄀ氀漀最漀ഀ਀ഀ਀笀䄀䌀吀开䰀䤀一䬀紀ഀ਀ഀ਀伀戀爀椀最愀搀漀 瀀攀氀愀 椀渀猀挀爀椀쌀꜀쌀ꌀ漀Ⰰഀ਀ഀ਀伀 䄀搀洀椀渀椀猀琀爀愀搀漀爀ഀ਀笀匀䤀吀䔀开一䄀䴀䔀紀ഀ਀ഀ਀䔀伀吀㬀ഀ਀紀 ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 爀攀瘀椀攀眀挀漀洀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀刀䔀嘀䤀䔀圀䌀伀䴀开倀䠀倀✀⤀⤀ ␀氀愀渀最开爀攀瘀椀攀眀挀漀洀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀刀攀瘀椀猀愀爀 挀漀洀攀渀琀쌀ꄀ爀椀漀猀✀Ⰰഀ਀        ✀渀漀开挀漀洀洀攀渀琀✀ 㴀㸀 ✀一쌀ꌀ漀 栀쌀ꄀ 挀漀洀攀渀琀쌀ꄀ爀椀漀猀 瀀愀爀愀 爀攀瘀椀猀愀爀✀Ⰰഀ਀        ✀渀开挀漀洀洀开搀攀氀✀ 㴀㸀 ✀─猀 挀漀洀攀渀琀쌀ꄀ爀椀漀⠀猀⤀ 爀攀洀漀瘀椀搀漀✀Ⰰഀ਀        ✀渀开挀漀洀洀开搀椀猀瀀✀ 㴀㸀 ✀一쌀먀洀攀爀漀 搀攀 挀漀洀攀渀琀쌀ꄀ爀椀漀猀 ✀Ⰰഀ਀        ✀猀攀攀开瀀爀攀瘀✀ 㴀㸀 ✀嘀攀爀 愀渀琀攀爀椀漀爀✀Ⰰഀ਀        ✀猀攀攀开渀攀砀琀✀ 㴀㸀 ✀嘀攀爀 瀀爀쌀대砀椀洀漀✀Ⰰഀ਀        ✀搀攀氀开挀漀洀洀✀ 㴀㸀 ✀䔀砀挀氀甀椀爀 挀漀洀攀渀琀쌀ꄀ爀椀漀猀 猀攀氀攀挀椀漀渀愀搀漀猀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 猀攀愀爀挀栀⸀瀀栀瀀 ⴀ 伀䬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 椀昀 ⠀搀攀昀椀渀攀搀⠀✀匀䔀䄀刀䌀䠀开倀䠀倀✀⤀⤀ഀ਀    ␀氀愀渀最开猀攀愀爀挀栀开瀀栀瀀 㴀 愀爀爀愀礀⠀　 㴀㸀 ✀倀攀猀焀甀椀猀愀爀 渀愀 挀漀氀攀쌀꜀쌀ꌀ漀 搀攀 椀洀愀最攀渀猀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 猀攀愀爀挀栀渀攀眀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀匀䔀䄀刀䌀䠀一䔀圀开倀䠀倀✀⤀⤀ ␀氀愀渀最开猀攀愀爀挀栀开渀攀眀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀瀀愀最攀开琀椀琀氀攀✀ 㴀㸀 ✀倀攀猀焀甀椀猀愀爀 渀漀瘀愀猀 椀洀愀最攀渀猀✀Ⰰഀ਀        ✀猀攀氀攀挀琀开搀椀爀✀ 㴀㸀 ✀匀攀氀攀挀椀漀渀愀爀 搀椀爀攀琀쌀대爀椀漀✀Ⰰഀ਀        ✀猀攀氀攀挀琀开搀椀爀开洀猀最✀ 㴀㸀 ✀䔀猀琀愀 昀甀渀쌀꜀쌀ꌀ漀 氀栀攀 瀀攀爀洀椀琀攀 攀渀瘀椀愀爀 搀椀瘀攀爀猀愀猀 椀洀愀最攀渀猀 愀漀 洀攀猀洀漀 琀攀洀瀀漀⸀㰀戀爀 ⼀㸀㰀戀爀 ⼀㸀匀攀氀攀挀椀漀渀攀 漀 搀椀爀攀琀쌀대爀椀漀 搀愀猀 椀洀愀最攀渀猀✀Ⰰഀ਀        ✀渀漀开瀀椀挀开琀漀开愀搀搀✀ 㴀㸀 ✀一쌀ꌀ漀 栀쌀ꄀ 椀洀愀最攀渀猀 瀀愀爀愀 攀渀瘀椀愀爀✀Ⰰഀ਀        ✀渀攀攀搀开漀渀攀开愀氀戀甀洀✀ 㴀㸀 ✀嘀漀挀쌀ꨀ 瀀爀攀挀椀猀愀琀攀爀 瀀攀氀漀 洀攀渀甀猀 甀洀 쌀ꄀ氀戀甀洀 瀀愀爀愀 甀猀愀爀 攀猀琀愀 昀甀渀쌀꜀쌀ꌀ漀✀Ⰰഀ਀        ✀眀愀爀渀椀渀最✀ 㴀㸀 ✀䌀唀䤀䐀䄀䐀伀✀Ⰰഀ਀        ✀挀栀愀渀最攀开瀀攀爀洀✀ 㴀㸀 ✀伀 猀挀爀椀瀀琀 渀쌀ꌀ漀 瀀漀搀攀 最爀愀瘀愀爀 渀攀猀琀攀 搀椀爀攀琀쌀대爀椀漀 焀甀攀 搀攀瘀攀 瀀漀猀猀甀椀爀 瀀攀爀洀椀猀猀쌀ꌀ漀 㜀㔀㔀 漀甀 㜀㜀㜀 ℀✀Ⰰഀ਀        ✀琀愀爀最攀琀开愀氀戀甀洀✀ 㴀㸀 ✀㰀戀㸀䌀漀氀漀挀愀爀 椀洀愀最攀渀猀 搀漀 ☀焀甀漀琀㬀㰀⼀戀㸀─猀㰀戀㸀☀焀甀漀琀㬀 攀洀 㰀⼀戀㸀─猀✀Ⰰഀ਀        ✀昀漀氀搀攀爀✀ 㴀㸀 ✀倀愀猀琀愀✀Ⰰഀ਀        ✀椀洀愀最攀✀ 㴀㸀 ✀䤀洀愀最攀洀✀Ⰰഀ਀        ✀愀氀戀甀洀✀ 㴀㸀 ✀쌀脀氀戀甀洀✀Ⰰഀ਀        ✀爀攀猀甀氀琀✀ 㴀㸀 ✀刀攀猀甀氀琀愀搀漀✀Ⰰഀ਀        ✀搀椀爀开爀漀✀ 㴀㸀 ✀一쌀ꌀ漀 最爀愀瘀쌀ꄀ瘀攀氀⸀ ✀Ⰰഀ਀        ✀搀椀爀开挀愀渀琀开爀攀愀搀✀ 㴀㸀 ✀一쌀ꌀ漀 瀀漀搀攀 猀攀爀 氀椀搀漀⸀ ✀Ⰰഀ਀        ✀椀渀猀攀爀琀✀ 㴀㸀 ✀䄀搀椀挀椀漀渀愀渀搀漀 渀漀瘀愀猀 椀洀愀最攀渀猀 쌀ꀀ 最愀氀攀爀椀愀✀Ⰰഀ਀        ✀氀椀猀琀开渀攀眀开瀀椀挀✀ 㴀㸀 ✀䰀椀猀琀愀 搀愀猀 渀漀瘀愀猀 椀洀愀最攀渀猀✀Ⰰഀ਀        ✀椀渀猀攀爀琀开猀攀氀攀挀琀攀搀✀ 㴀㸀 ✀䤀渀猀攀爀椀爀 椀洀愀最攀渀猀 猀攀氀攀挀椀漀渀愀搀愀猀✀Ⰰഀ਀        ✀渀漀开瀀椀挀开昀漀甀渀搀✀ 㴀㸀 ✀一쌀ꌀ漀 栀쌀ꄀ 椀洀愀最攀渀猀 渀漀瘀愀猀✀Ⰰഀ਀        ✀戀攀开瀀愀琀椀攀渀琀✀ 㴀㸀 ✀倀漀爀 昀愀瘀漀攀 琀攀渀栀愀 瀀愀挀椀쌀ꨀ渀挀椀愀⸀ 伀 猀椀猀琀攀洀愀 渀攀猀挀攀猀猀椀琀愀 搀攀 琀攀洀瀀漀 瀀愀爀愀 攀渀瘀椀愀爀 猀甀愀猀 椀洀愀最攀渀猀✀Ⰰഀ਀        ✀渀漀琀攀猀✀ 㴀㸀 ✀㰀甀氀㸀✀ ⸀ ✀㰀氀椀㸀㰀戀㸀伀䬀㰀⼀戀㸀 㨀 匀椀最渀椀昀椀挀愀 焀甀攀 昀漀椀 攀渀瘀椀愀搀漀 挀漀洀 猀甀挀攀猀猀漀✀ ⸀ ✀㰀氀椀㸀㰀戀㸀䐀倀㰀⼀戀㸀 㨀 匀椀最渀椀昀椀挀愀 焀甀攀 攀砀椀猀琀攀 甀洀愀 搀甀瀀氀椀挀愀琀愀 渀愀 戀愀猀攀 搀攀 搀愀琀漀猀✀ ⸀ ✀㰀氀椀㸀㰀戀㸀倀䈀㰀⼀戀㸀 㨀 猀椀最渀椀昀椀挀愀 焀甀攀 渀쌀ꌀ漀 瀀쌀됀搀攀 猀攀爀 攀渀瘀椀愀搀漀⸀ 嘀攀爀椀昀椀焀甀攀 猀甀愀猀 瀀攀爀洀椀猀猀쌀딀攀猀 攀 挀漀爀爀攀琀漀猀 攀渀搀攀爀攀쌀꜀漀猀⸀✀ ⸀ ✀㰀氀椀㸀匀攀 漀 伀䬀Ⰰ 䐀倀Ⰰ 倀䈀 尀✀猀椀最渀猀尀✀ 渀쌀ꌀ漀 愀瀀愀爀攀挀攀洀Ⰰ 挀氀椀焀甀攀 渀愀 椀洀愀最攀洀 挀漀洀 瀀爀漀戀氀攀洀愀 瀀愀爀愀 爀攀挀攀戀攀爀 愀 洀攀渀猀愀最攀洀 搀漀 攀爀爀漀✀ ⸀ ✀㰀氀椀㸀匀攀 爀攀挀攀戀攀爀 洀攀渀猀愀最攀洀 搀攀 攀砀瀀椀爀愀쌀꜀쌀ꌀ漀Ⰰ 愀挀椀漀渀攀 爀攀氀漀愀搀✀ ⸀ ✀㰀⼀甀氀㸀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 琀栀甀洀戀渀愀椀氀猀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 嘀漀椀搀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 戀愀渀渀椀渀最⸀瀀栀瀀  ⼀⼀渀漀琀 椀渀 挀瀀最㄀⸀㈀⸀　ⴀ渀甀欀攀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 嘀漀椀搀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 甀瀀氀漀愀搀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀唀倀䰀伀䄀䐀开倀䠀倀✀⤀⤀ ␀氀愀渀最开甀瀀氀漀愀搀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀攀渀瘀椀漀 搀攀 椀洀愀最攀洀✀Ⰰഀ਀        ✀洀愀砀开昀猀椀稀攀✀ 㴀㸀 ✀吀愀洀愀渀栀漀 洀쌀ꄀ砀椀洀漀 瀀攀爀洀椀琀椀搀漀 ─猀 䬀䈀✀Ⰰഀ਀        ✀愀氀戀甀洀✀ 㴀㸀 ✀쌀脀氀戀甀洀✀Ⰰഀ਀        ✀瀀椀挀琀甀爀攀✀ 㴀㸀 ✀䤀洀愀最攀洀✀Ⰰഀ਀        ✀瀀椀挀开琀椀琀氀攀✀ 㴀㸀 ✀吀쌀관琀甀氀漀✀Ⰰഀ਀        ✀搀攀猀挀爀椀瀀琀椀漀渀✀ 㴀㸀 ✀䐀攀猀挀爀椀쌀꜀쌀ꌀ漀✀Ⰰഀ਀        ✀欀攀礀眀漀爀搀猀✀ 㴀㸀 ✀倀愀氀愀瘀爀愀猀ⴀ挀栀愀瘀攀 ⠀猀攀瀀愀爀愀爀 猀漀洀攀渀琀攀 挀漀洀 攀猀瀀愀쌀꜀漀猀⤀✀Ⰰഀ਀        ✀攀爀爀开渀漀开愀氀戀开甀瀀氀漀愀搀愀戀氀攀猀✀ 㴀㸀 ✀搀攀猀挀甀氀瀀攀⸀ 嘀漀挀쌀ꨀ 渀쌀ꌀ漀 攀猀琀쌀ꄀ 愀甀琀漀爀椀稀愀搀漀 愀 攀渀瘀椀愀爀 瀀愀爀愀 攀猀琀攀 쌀ꄀ氀戀甀洀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 甀猀攀爀洀最爀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀唀匀䔀刀䴀䜀刀开倀䠀倀✀⤀⤀ ␀氀愀渀最开甀猀攀爀洀最爀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀䜀攀爀攀渀挀椀愀爀 甀猀甀쌀ꄀ爀椀漀猀✀Ⰰഀ਀        ✀渀愀洀攀开愀✀ 㴀㸀 ✀一漀洀攀 䄀猀挀攀渀搀攀渀琀攀✀Ⰰഀ਀        ✀渀愀洀攀开搀✀ 㴀㸀 ✀一漀洀攀 䐀攀猀挀攀渀搀攀渀琀攀✀Ⰰഀ਀        ✀最爀漀甀瀀开愀✀ 㴀㸀 ✀䜀爀甀瀀漀 䄀猀挀攀渀搀攀渀琀攀✀Ⰰഀ਀        ✀最爀漀甀瀀开搀✀ 㴀㸀 ✀䜀爀甀瀀漀 䐀攀猀挀攀渀搀攀渀琀攀✀Ⰰഀ਀        ✀爀攀最开愀✀ 㴀㸀 ✀䐀愀琀愀 搀攀 爀攀最椀猀琀爀漀 䄀猀挀攀渀搀攀渀琀攀✀Ⰰഀ਀        ✀爀攀最开搀✀ 㴀㸀 ✀䐀愀琀愀 搀攀 爀攀最椀猀琀爀漀 䐀攀猀挀攀渀搀攀渀琀攀✀Ⰰഀ਀        ✀瀀椀挀开愀✀ 㴀㸀 ✀䌀漀渀琀愀最攀洀 搀攀 椀洀愀最攀渀猀 愀猀挀攀渀搀攀渀琀攀✀Ⰰഀ਀        ✀瀀椀挀开搀✀ 㴀㸀 ✀䌀漀渀猀琀愀最攀洀 搀攀 椀洀愀最攀洀 搀攀猀挀攀渀搀攀渀琀攀✀Ⰰഀ਀        ✀搀椀猀欀甀开愀✀ 㴀㸀 ✀唀猀漀 搀攀 搀椀猀挀漀 愀猀挀攀渀搀攀渀琀攀✀Ⰰഀ਀        ✀搀椀猀欀甀开搀✀ 㴀㸀 ✀唀猀漀 搀攀 搀椀猀挀漀 搀攀猀挀攀渀搀攀渀琀攀✀Ⰰഀ਀        ✀猀漀爀琀开戀礀✀ 㴀㸀 ✀䰀椀猀琀愀爀 甀猀甀쌀ꄀ爀椀漀猀 瀀漀爀✀Ⰰഀ਀        ✀攀爀爀开渀漀开甀猀攀爀猀✀ 㴀㸀 ✀吀愀戀攀氀愀 搀攀 甀猀甀쌀ꄀ爀椀漀猀 攀猀琀쌀ꄀ 瘀愀稀椀愀 ℀✀Ⰰഀ਀        ✀攀爀爀开攀搀椀琀开猀攀氀昀✀ 㴀㸀 ✀嘀漀挀쌀ꨀ 渀쌀ꌀ漀 瀀漀搀攀 愀氀琀攀爀愀爀 漀猀 搀愀搀漀猀 尀✀䴀礀 瀀爀漀昀椀氀攀尀✀ ✀Ⰰഀ਀        ✀攀搀椀琀✀ 㴀㸀 ✀䔀䐀䤀吀䄀刀✀Ⰰഀ਀        ✀搀攀氀攀琀攀✀ 㴀㸀 ✀䔀堀䌀䰀唀䤀刀✀Ⰰഀ਀        ✀渀愀洀攀✀ 㴀㸀 ✀唀猀甀쌀ꄀ爀椀漀✀Ⰰഀ਀        ✀最爀漀甀瀀✀ 㴀㸀 ✀䜀爀甀瀀漀✀Ⰰഀ਀        ✀椀渀愀挀琀椀瘀攀✀ 㴀㸀 ✀䤀渀愀琀椀瘀漀✀Ⰰഀ਀        ✀漀瀀攀爀愀琀椀漀渀猀✀ 㴀㸀 ✀伀瀀攀爀愀쌀꜀쌀딀攀猀✀Ⰰഀ਀        ✀瀀椀挀琀甀爀攀猀✀ 㴀㸀 ✀䤀洀愀最攀渀猀✀Ⰰഀ਀        ✀搀椀猀欀开猀瀀愀挀攀✀ 㴀㸀 ✀䔀猀瀀愀쌀꜀漀 甀猀愀搀漀 ⼀ 儀甀漀琀愀✀Ⰰഀ਀        ✀爀攀最椀猀琀攀爀攀搀开漀渀✀ 㴀㸀 ✀刀攀最椀猀琀爀愀搀漀 漀渀✀Ⰰഀ਀        ✀甀开甀猀攀爀开漀渀开瀀开瀀愀最攀猀✀ 㴀㸀 ✀─搀 甀猀甀쌀ꄀ爀椀漀猀 攀洀 ─搀 瀀쌀ꄀ最椀渀愀⠀猀⤀✀Ⰰഀ਀        ✀挀漀渀昀椀爀洀开搀攀氀✀ 㴀㸀 ✀吀攀洀 挀攀爀琀攀稀愀 焀甀攀 焀甀攀爀 䔀堀䌀䰀唀䤀刀 攀猀琀攀 甀猀甀쌀ꄀ爀椀漀 㼀 尀尀渀吀漀搀愀猀 愀猀 椀洀愀最攀渀猀 攀 쌀ꄀ氀戀甀渀猀 搀攀氀攀 猀攀爀쌀ꌀ漀 爀攀洀漀瘀椀搀愀猀⸀✀Ⰰഀ਀        ✀洀愀椀氀✀ 㴀㸀 ✀䴀䄀䤀䰀✀Ⰰഀ਀        ✀攀爀爀开甀渀欀渀漀眀渀开甀猀攀爀✀ 㴀㸀 ✀唀猀甀쌀ꄀ爀椀漀 猀攀氀攀挀椀漀渀愀搀漀 渀쌀ꌀ漀 攀砀椀猀琀攀 ℀✀Ⰰഀ਀        ✀洀漀搀椀昀礀开甀猀攀爀✀ 㴀㸀 ✀䴀漀搀椀昀椀挀愀爀 甀猀甀쌀ꄀ爀椀漀✀Ⰰഀ਀        ✀渀漀琀攀猀✀ 㴀㸀 ✀一漀琀愀猀✀Ⰰഀ਀        ✀渀漀琀攀开氀椀猀琀✀ 㴀㸀 ✀㰀氀椀㸀匀攀 瘀漀挀쌀ꨀ 渀쌀ꌀ漀 焀甀攀爀 愀氀琀攀爀愀爀 猀甀愀 猀攀渀栀愀Ⰰ 搀攀椀砀攀 漀 挀愀洀瀀漀 攀洀 戀爀愀渀挀漀✀Ⰰഀ਀        ✀瀀愀猀猀眀漀爀搀✀ 㴀㸀 ✀匀攀渀栀愀✀Ⰰഀ਀        ✀甀猀攀爀开愀挀琀椀瘀攀✀ 㴀㸀 ✀唀猀甀쌀ꄀ爀椀漀 쌀꤀ 愀琀椀瘀漀✀Ⰰഀ਀        ✀甀猀攀爀开最爀漀甀瀀✀ 㴀㸀 ✀䜀䈀爀甀瀀漀 搀攀 甀猀甀쌀ꄀ爀椀漀猀✀Ⰰഀ਀        ✀甀猀攀爀开攀洀愀椀氀✀ 㴀㸀 ✀䔀ⴀ洀愀椀氀 搀漀 甀猀甀쌀ꄀ爀椀漀✀Ⰰഀ਀        ✀甀猀攀爀开眀攀戀开猀椀琀攀✀ 㴀㸀 ✀匀椀琀攀 搀漀 甀猀甀쌀ꄀ爀椀漀✀Ⰰഀ਀        ✀挀爀攀愀琀攀开渀攀眀开甀猀攀爀✀ 㴀㸀 ✀䌀爀椀愀爀 渀漀瘀漀 甀猀甀쌀ꄀ爀椀漀✀Ⰰഀ਀        ✀甀猀攀爀开昀爀漀洀✀ 㴀㸀 ✀䔀渀搀攀爀攀쌀꜀漀✀Ⰰഀ਀        ✀甀猀攀爀开椀渀琀攀爀攀猀琀猀✀ 㴀㸀 ✀䤀渀琀攀爀攀猀猀攀✀Ⰰഀ਀        ✀甀猀攀爀开漀挀挀✀ 㴀㸀 ✀伀挀甀瀀愀쌀꜀쌀ꌀ漀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 甀琀椀氀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀唀吀䤀䰀开倀䠀倀✀⤀⤀ ␀氀愀渀最开甀琀椀氀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀刀攀猀椀稀攀 瀀椀挀琀甀爀攀猀✀Ⰰഀ਀        ✀眀栀愀琀开椀琀开搀漀攀猀✀ 㴀㸀 ✀圀栀愀琀 椀琀 搀漀攀猀✀Ⰰഀ਀        ✀眀栀愀琀开甀瀀搀愀琀攀开琀椀琀氀攀猀✀ 㴀㸀 ✀唀瀀搀愀琀攀猀 琀椀琀氀攀猀 昀爀漀洀 昀椀氀攀渀愀洀攀✀Ⰰഀ਀        ✀眀栀愀琀开搀攀氀攀琀攀开琀椀琀氀攀✀ 㴀㸀 ✀䐀攀氀攀琀攀猀 琀椀琀氀攀猀✀Ⰰഀ਀        ✀眀栀愀琀开爀攀戀甀椀氀搀✀ 㴀㸀 ✀刀攀戀甀椀氀搀猀 琀栀甀洀戀渀愀椀氀猀 愀渀搀 爀攀猀椀稀攀搀 瀀栀漀琀漀猀✀Ⰰഀ਀        ✀眀栀愀琀开搀攀氀攀琀攀开漀爀椀最椀渀愀氀猀✀ 㴀㸀 ✀䐀攀氀攀琀攀猀 漀爀椀最椀渀愀氀 猀椀稀攀搀 瀀栀漀琀漀猀 爀攀瀀氀愀挀椀渀最 琀栀攀洀 眀椀琀栀 琀栀攀 猀椀稀攀搀 瘀攀爀猀椀漀渀✀Ⰰഀ਀        ✀昀椀氀攀✀ 㴀㸀 ✀䘀椀氀攀✀Ⰰഀ਀        ✀琀椀琀氀攀开猀攀琀开琀漀✀ 㴀㸀 ✀琀椀琀氀攀 猀攀琀 琀漀✀Ⰰഀ਀        ✀猀甀戀洀椀琀开昀漀爀洀✀ 㴀㸀 ✀猀甀戀洀椀琀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀搀开猀甀挀挀攀猀昀甀氀氀礀✀ 㴀㸀 ✀甀瀀搀愀琀攀搀 猀甀挀挀攀猀昀甀氀氀礀✀Ⰰഀ਀        ✀攀爀爀漀爀开挀爀攀愀琀攀✀ 㴀㸀 ✀䔀刀刀伀刀 挀爀攀愀琀椀渀最✀Ⰰഀ਀        ✀挀漀渀琀椀渀甀攀✀ 㴀㸀 ✀倀爀漀挀攀猀猀 洀漀爀攀 椀洀愀最攀猀✀Ⰰഀ਀        ✀洀愀椀渀开猀甀挀挀攀猀猀✀ 㴀㸀 ✀吀栀攀 昀椀氀攀 ─猀 眀愀猀 猀甀挀挀攀猀猀昀甀氀氀礀 甀猀攀搀 愀猀 洀愀椀渀 瀀椀挀琀甀爀攀✀Ⰰഀ਀        ✀攀爀爀漀爀开爀攀渀愀洀攀✀ 㴀㸀 ✀䔀爀爀漀爀 爀攀渀愀洀椀渀最 ─猀 琀漀 ─猀✀Ⰰഀ਀        ✀攀爀爀漀爀开渀漀琀开昀漀甀渀搀✀ 㴀㸀 ✀吀栀攀 昀椀氀攀 ─猀 眀愀猀 渀漀琀 昀漀甀渀搀✀Ⰰഀ਀        ✀戀愀挀欀✀ 㴀㸀 ✀戀愀挀欀 琀漀 洀愀椀渀✀Ⰰഀ਀        ✀琀栀甀洀戀猀开眀愀椀琀✀ 㴀㸀 ✀唀瀀搀愀琀椀渀最 琀栀甀洀戀渀愀椀氀猀 愀渀搀⼀漀爀 爀攀猀椀稀攀搀 椀洀愀最攀猀Ⰰ 瀀氀攀愀猀攀 眀愀椀琀⸀⸀⸀✀Ⰰഀ਀        ✀琀栀甀洀戀猀开挀漀渀琀椀渀甀攀开眀愀椀琀✀ 㴀㸀 ✀䌀漀渀琀椀渀甀椀渀最 琀漀 甀瀀搀愀琀攀 琀栀甀洀戀渀愀椀氀猀 愀渀搀⼀漀爀 爀攀猀椀稀攀搀 椀洀愀最攀猀⸀⸀⸀✀Ⰰഀ਀        ✀琀椀琀氀攀猀开眀愀椀琀✀ 㴀㸀 ✀唀瀀搀愀琀椀渀最 琀椀琀氀攀猀Ⰰ 瀀氀攀愀猀攀 眀愀椀琀⸀⸀⸀✀Ⰰഀ਀        ✀搀攀氀攀琀攀开眀愀椀琀✀ 㴀㸀 ✀䐀攀氀攀琀椀渀最 琀椀琀氀攀猀Ⰰ 瀀氀攀愀猀攀 眀愀椀琀⸀⸀⸀✀Ⰰഀ਀        ✀爀攀瀀氀愀挀攀开眀愀椀琀✀ 㴀㸀 ✀䐀攀氀攀琀椀渀最 漀爀椀最椀渀愀氀猀 愀渀搀 爀攀瀀氀愀挀椀渀最 琀栀攀洀 眀椀琀栀 爀攀猀椀稀攀搀 椀洀愀最攀猀Ⰰ 瀀氀攀愀猀攀 眀愀椀琀⸀⸀✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀✀ 㴀㸀 ✀儀甀椀挀欀 椀渀猀琀爀甀挀琀椀漀渀猀✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开愀挀琀椀漀渀✀ 㴀㸀 ✀匀攀氀攀挀琀 愀挀琀椀漀渀✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开瀀愀爀愀洀攀琀攀爀✀ 㴀㸀 ✀匀攀琀 瀀愀爀愀洀攀琀攀爀猀✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开愀氀戀甀洀✀ 㴀㸀 ✀匀攀氀攀挀琀 愀氀戀甀洀✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开瀀爀攀猀猀✀ 㴀㸀 ✀倀爀攀猀猀 ─猀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀✀ 㴀㸀 ✀唀瀀搀愀琀攀 琀栀甀洀戀猀 愀渀搀⼀漀爀 爀攀猀椀稀攀搀 瀀栀漀琀漀猀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开眀栀愀琀✀ 㴀㸀 ✀圀栀愀琀 猀栀漀甀氀搀 戀攀 甀瀀搀愀琀攀搀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开琀栀甀洀戀✀ 㴀㸀 ✀伀渀氀礀 琀栀甀洀戀渀愀椀氀猀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开瀀椀挀✀ 㴀㸀 ✀伀渀氀礀 爀攀猀椀稀攀搀 瀀椀挀琀甀爀攀猀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开戀漀琀栀✀ 㴀㸀 ✀䈀漀琀栀 琀栀甀洀戀渀愀椀氀猀 愀渀搀 爀攀猀椀稀攀搀 瀀椀挀琀甀爀攀猀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开渀甀洀戀攀爀✀ 㴀㸀 ✀一甀洀戀攀爀 漀昀 瀀爀漀挀攀猀猀攀搀 椀洀愀最攀猀 瀀攀爀 挀氀椀挀欀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开漀瀀琀椀漀渀✀ 㴀㸀 ✀⠀吀爀礀 猀攀琀琀椀渀最 琀栀椀猀 漀瀀琀椀漀渀 氀漀眀攀爀 椀昀 礀漀甀 攀砀瀀攀爀椀攀渀挀攀 琀椀洀攀漀甀琀 瀀爀漀戀氀攀洀猀⤀✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开琀椀琀氀攀✀ 㴀㸀 ✀䘀椀氀攀渀愀洀攀 㼀 倀椀挀琀甀爀攀 琀椀琀氀攀✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开栀漀眀✀ 㴀㸀 ✀䠀漀眀 猀栀漀甀氀搀 琀栀攀 昀椀氀攀渀愀洀攀 戀攀 洀漀搀椀昀椀攀搀✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开爀攀洀漀瘀攀✀ 㴀㸀 ✀刀攀洀漀瘀攀 琀栀攀 ⸀樀瀀最 攀渀搀椀渀最 愀渀搀 爀攀瀀氀愀挀攀 开 ⠀甀渀搀攀爀猀挀漀爀攀⤀ 眀椀琀栀 猀瀀愀挀攀猀✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开攀甀爀漀✀ 㴀㸀 ✀䌀栀愀渀最攀 ㈀　　㌀开㄀㄀开㈀㌀开㄀㌀开㈀　开㈀　⸀樀瀀最 琀漀 ㈀㌀⼀㄀㄀⼀㈀　　㌀ ㄀㌀㨀㈀　✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开甀猀✀ 㴀㸀 ✀䌀栀愀渀最攀 ㈀　　㌀开㄀㄀开㈀㌀开㄀㌀开㈀　开㈀　⸀樀瀀最 琀漀 ㄀㄀⼀㈀㌀⼀㈀　　㌀ ㄀㌀㨀㈀　✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开琀椀洀攀✀ 㴀㸀 ✀䌀栀愀渀最攀 ㈀　　㌀开㄀㄀开㈀㌀开㄀㌀开㈀　开㈀　⸀樀瀀最 琀漀 ㄀㌀㨀㈀　✀Ⰰഀ਀        ✀搀攀氀攀琀攀✀ 㴀㸀 ✀䐀攀氀攀琀攀 瀀椀挀琀甀爀攀 琀椀琀氀攀猀 漀爀 漀爀椀最椀渀愀氀 猀椀稀攀 瀀栀漀琀漀猀✀Ⰰഀ਀        ✀搀攀氀攀琀攀开琀椀琀氀攀✀ 㴀㸀 ✀䐀攀氀攀琀攀 瀀椀挀琀甀爀攀 琀椀琀氀攀猀✀Ⰰഀ਀        ✀搀攀氀攀琀攀开漀爀椀最椀渀愀氀✀ 㴀㸀 ✀䐀攀氀攀琀攀 漀爀椀最椀渀愀氀 猀椀稀攀 瀀栀漀琀漀猀✀Ⰰഀ਀        ✀搀攀氀攀琀攀开爀攀瀀氀愀挀攀✀ 㴀㸀 ✀䐀攀氀攀琀攀猀 琀栀攀 漀爀椀最椀渀愀氀 椀洀愀最攀猀 爀攀瀀氀愀挀椀渀最 琀栀攀洀 眀椀琀栀 琀栀攀 猀椀稀攀搀 瘀攀爀猀椀漀渀猀✀Ⰰഀ਀        ✀猀攀氀攀挀琀开愀氀戀甀洀✀ 㴀㸀 ✀匀攀氀攀挀琀 愀氀戀甀洀✀Ⰰഀ਀        ⤀㬀 ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 瀀愀最攀琀椀琀氀攀⸀椀渀挀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀␀氀愀渀最开瀀愀最攀琀椀琀氀攀开瀀栀瀀 㴀 愀爀爀愀礀⠀ഀ਀✀搀椀瘀椀搀攀爀✀ 㴀㸀 ✀㸀✀Ⰰഀ਀    ✀瘀椀攀眀椀渀最✀ 㴀㸀 ✀嘀椀攀眀椀渀最 倀栀漀琀漀✀Ⰰഀ਀    ✀甀猀爀✀ 㴀㸀 ∀✀猀 倀栀漀琀漀 䜀愀氀氀攀爀礀∀Ⰰഀ਀    ✀瀀栀漀琀漀最愀氀氀攀爀礀✀ 㴀㸀 ✀倀栀漀琀漀 䜀愀氀氀攀爀礀✀Ⰰഀ਀    ⤀㬀ഀ਀ഀ਀㼀㸀漀