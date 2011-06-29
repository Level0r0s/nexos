<?php
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
/*   $Id: lang-brazilian-utf-8.php,v 1.2 2004/08/06 01:39:25 akamu Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Portuguese (Brazilian)');
define('LANG_NAME_NATIVE', 'Portuguese (Brasilian)');
define('LANG_COUNTRY_CODE', 'br');
define('TRANS_NAME', '?');
define('TRANS_EMAIL', '');
define('TRANS_WEBSITE', '');
define('TRANS_DATE', '2003-10-07');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'utf-8');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'Sim');
define('NO', 'Nao');

// some common strings
define('BACK', 'VOLTAR');
define('CONTINUE', 'CONTINUAR');
define('INFO', 'Informaã§ã£o');
define('ERROR', 'Erro');

//// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%m/%d/%y at %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y at %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y at %I:%M %p');

// short names for Byte, Kilo, Mega
$lang_byte_units = array('Bytes','KB','MB',);

// Day of week
$lang_day_of_week = array('Dom','Seg','Ter','Qua','Qui','Sex','Sab',);
// Day of the month
$lang_month = array('Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez',);
// For the word censor
$lang_bad_words = array('*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*',);
// lang_meta_album_names
define('RANDOM', 'Imagens Randãmicas');
define('LASTUP', 'ãšltimas Adiã§ãµes');
define('LASTUPBY', 'My Last Additions');
define('LASTCOM', 'ãšltimos Comentãrios');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Mais Visualizados');
define('TOPRATED', 'Topo de Linha');
define('LASTHITS', 'ãšltimos Visualizados');
define('SEARCH', 'Resultado da Pesquisa');
define('FAVPICS', 'Favourite Pictures');

// lang_errors
define('ACCESS_DENIED', 'Vocãª nã£o tem permissã£o para visualizar este recurso.');
define('PERM_DENIED', 'Vocãª nã£o tem permissã£o para executar esta operaã§ã£o.');
define('PARAM_MISSING', 'Script nã£o consegue estabelecer um parã¢metro estabelecido.');
define('NON_EXIST_AP', 'O ãlbum ou figura que voccãª selecionau nã£o foi encontrado !');
define('QUOTA_EXCEEDED', 'A quota de espaã§o para armazenamento excedeu<br /><br />Vocãª possui [quota]KB de espaã§o, suas imagens atualmente utilizam [space]KB, adicionar este arquivo irã estourar sua cota permitida.');
define('GD_FILE_TYPE_ERR', 'estamos usando uma sistema que sã³ permite imagens JPEG e PNG.');
define('INVALID_IMAGE', 'A imagem que vocãª enviou estã corrompida ou nã£o pode ser interpretada por GD library');
define('RESIZE_FAILED', 'Impossã­vel criar miniatura ou redimensionar a imagem.');
define('NO_IMG_TO_DISPLAY', 'Sem imagens para mostrar');
define('NON_EXIST_CAT', 'A categoria selecionada nã£o existe');
define('ORPHAN_CAT', 'A category has a non-existing parent, runs the category manager to correct the problem.');
define('DIRECTORY_RO', 'Directory \'%s\' is not writable, pictures can\'t be deleted');
define('NON_EXIST_COMMENT', 'O comentãrio selecionado nã£o existe.');
define('PIC_IN_INVALID_ALBUM', 'Imagem em um album inexistente (%s)!?');
define('BANNED', 'You are currently banned from using this site.');
define('NOT_WITH_UDB', 'This function is disabled in Coppermine because it is integrated with forum software. Either what you are trying to do is not supported in this configuration, or the function should be handled by the forum software.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', 'Ir para a lista de ãlbus');
define('ALB_LIST_LNK', 'Lista de Àlbuns');
define('MY_GAL_TITLE', 'Ir para minha galeria pessoal');
define('MY_GAL_LNK', 'Minha Galeria');
define('MY_PROF_LNK', 'Meus dados');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Alterar para o modo administrativo');
define('ADM_MODE_LNK', 'Modo Administrativo');
define('USR_MODE_TITLE', 'Alterar para modo Usuãrio');
define('USR_MODE_LNK', 'Modo Usuãrio');
define('UPLOAD_PIC_TITLE', 'Enviar imagem para o ãlbum');
define('UPLOAD_PIC_LNK', 'Enviar imagem');
define('REGISTER_TITLE', 'Criar uma conta');
define('REGISTER_LNK', 'Registar');
define('LOGIN_LNK', 'Login');
define('LOGOUT_LNK', 'Logout');
define('LASTUP_LNK', 'ãšltimos envios');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'ãšltimos comentãrios');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Mais Visualizados');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Topo de linha');
define('SEARCH_LNK', 'Pesquisar');
define('FAV_LNK', 'My Favorites');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Envio aprovado');
define('CONFIG_LNK', 'Configuraã§ã£o');
define('ALBUMS_LNK', 'Àlbuns');
define('CATEGORIES_LNK', 'Categorias');
define('USERS_LNK', 'Usuãrios');
define('GROUPS_LNK', 'Grupos');
define('COMMENTS_LNK', 'Comentàrios');
define('SEARCHNEW_LNK', 'Envio em massa');
define('UTIL_LNK', 'Resize pictures');
define('BAN_LNK', 'Ban Users');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Criar / ordnar meus Àlbuns');
define('MODIFYALB_LNK', 'Modificar meus Àlbuns');
define('MY_PROF_LNK', 'Meus Dados');

// lang_cat_list
define('CATEGORY', 'Categoria');
define('ALBUMS', 'Àlbuns');
define('PICTURES', 'Imagens');

// lang_album_list
define('ALBUM_ON_PAGE', '%d Àlbuns na(s) %d pãgina(s)');

// lang_thumb_view
define('DATE', 'DATA');
define('NAME', 'NOME');
define('TITLE', 'TITLE');
define('SORT_DA', 'Mostar por data ascendente');
define('SORT_DD', 'Mostar por data descendente');
define('SORT_NA', 'Mostar por nome ascendente');
define('SORT_ND', 'Mostar por nome descendente');
define('SORT_TA', 'Sort by title ascending');
define('SORT_TD', 'Sort by title descending');
define('PIC_ON_PAGE', '%d imagens na(s) %d pagina(s)');
define('USER_ON_PAGE', '%d usuãrios na(s) %d pãgina(s)');
define('SORT_RA', 'Sort by rating ascending');
define('SORT_RD', 'Sort by rating descending');
define('RATING', 'RATING');
define('SORT_TITLE', 'Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Retornar para a pãgina de miniaturas');
define('PIC_INFO_TITLE', 'Mostar/esconder informaã§ãµes da imagem');
define('SLIDESHOW_TITLE', 'Show de Slides');
define('SLIDESHOW_DISABLED', 'e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'enviar esta imagem como e-card');
define('ECARD_DISABLED', 'e-cards estã£o desabilitados');
define('ECARD_DISABLED_MSG', 'Vocãª nã£o possui permissã£o para enviar e-cards');
define('PREV_TITLE', 'Ver imagem anterior');
define('NEXT_TITLE', 'Ver prã³xima imagem');
define('PIC_POS', 'IMAGEM %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', 'Qualifique esta imagem ');
define('NO_VOTES', '(Nenhum voto)');
define('RATING', '(Corrente qualificaã§ã£o : %s / 5 dos %s votos)');
define('RUBBISH', 'Ruim');
define('POOR', 'Pobre');
define('FAIR', 'Justo');
define('GOOD', 'Bom');
define('EXCELLENT', 'Excelente');
define('GREAT', 'Espetacular');

// lang_cpg_die
define('INFORMATION', 'Informaã§ã£o');
define('ERROR', 'Erro');
define('CRITICAL_ERROR', 'ERRO CRãTICO');
define('FILE', 'Arquivo: ');
define('LINE', 'Linha: ');

// lang_display_thumbnails
define('FILENAME', 'Arquivo : ');
define('FILESIZE', 'Tamanho : ');
define('DIMENSIONS', 'Dimensãµes : ');
define('DATE_ADDED', 'Data Envio : ');

// lang_get_pic_data
define('N_COMMENTS', '%s comentàrios');
define('N_VIEWS', '%s visualiza&ccedil;&otilde;es');
define('N_VOTES', '(%s votos)');

// lang_smilies_inc_php
define('EXCLAMATION', 'Exclamaã§ã£o');
define('QUESTION', 'Questã£o');
define('VERY HAPPY', 'Muito Feliz');
define('SMILE', 'Sorriso');
define('SAD', 'Triste');
define('SURPRISED', 'Surpreso');
define('SHOCKED', 'Chocado');
define('CONFUSED', 'Confuso');
define('COOL', 'Cool');
define('LAUGHING', 'Risonho');
define('MAD', 'Louco');
define('RAZZ', 'Razz');
define('EMBARASSED', 'Embaraã§ado');
define('CRYING OR VERY SAD', 'Muito triste');
define('EVIL OR VERY MAD', 'Muito mãu');
define('TWISTED EVIL', 'Twisted Evil');
define('ROLLING EYES', 'Rolando os olhos');
define('WINK', 'Piscando');
define('IDEA', 'Ideia');
define('ARROW', 'Seta');
define('NEUTRAL', 'Neutro');
define('MR. GREEN', 'Mr. Green');

// lang_admin_php
define('LV_ADMIN', 'Deixando o modo administrativo...');
define('ENT_ADMIN', 'Entrando no modo administrativo...');

// lang_albmgr_php
define('ALB_NEED_NAME', 'Àlbuns precisam ter um nome !');
define('CONFIRM_MODIFS', 'Tem certeza que deseja realizar as modificaã§ãµs ?');
define('NO_CHANGE', 'Vocãª nã£o fãªz nenhuma mudanã§a  !');
define('NEW_ALBUM', 'Novo ãlbum');
define('CONFIRM_DELETE1', 'Tem certeza de querer remover este ãlbum ?');
define('CONFIRM_DELETE2', '\\nTodas as imagens e comentãrios serã£o perdidos !');
define('SELECT_FIRST', 'Primeiro selecione um ãlbum');
define('ALB_MRG', 'Gerenciador de Àlbuns');
define('MY_GALLERY', '* Minha Galeria *');
define('NO_CATEGORY', '* Sem categoria *');
define('DELETE', 'Apagar');
define('NEW', 'Novo');
define('APPLY_MODIFS', 'Aplicar modificaã§ãµes');
define('SELECT_CATEGORY', 'Selecione uma categoria');

// lang_catmgr_php
define('MISS_PARAM', 'Parametros requeridos para \'%s\'operaã§ã£o nã£o fornecida !');
define('UNKNOWN_CAT', 'A ctegoria selecionada nã£o existe em nossa base de dados');
define('USERGAL_CAT_RO', 'A categoria do usuãrio nã£o pode ser excluã­da !');
define('MANAGE_CAT', 'Gerenciar categorias');
define('CONFIRM_DELETE', 'Vocãª tem certeza que deseja EXCLUIR  esta categoria ? ');
define('CATEGORY', 'Categoria');
define('OPERATIONS', 'Operaã§ãµes');
define('MOVE_INTO', 'Mover em');
define('UPDATE_CREATE', 'Atualizar/Criar categoria');
define('PARENT_CAT', 'Categoria parente');
define('CAT_TITLE', 'Tã­tulo da categoria');
define('CAT_DESC', 'Descriã§ã£o da categoria');

// lang_config_php
define('TITLE', 'Configuraã§ã£o');
define('RESTORE_CFG', 'Restaurar configuraã§ã£o de fãbrica');
define('SAVE_CFG', 'Salvar nova configuraã§ã£o');
define('NOTES', 'Notas');
define('INFO', 'Informaã§ã£o');
define('UPD_SUCCESS', 'Configuraã§ã£o do catãlogo atualizada');
define('RESTORE_SUCCESS', 'Configuraã§ã£o de fãbrica restaurada');
define('NAME_A', 'Nome ascendente');
define('NAME_D', 'Nome descendente');
define('TITLE_A', 'Title ascending');
define('TITLE_D', 'Title descending');
define('DATE_A', 'Data Ascendente');
define('DATE_D', 'Data descendente');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Height');
define('TH_WD', 'Width');

// lang_config_data
define('CONFIG_GENSET', 'General settings');
define('GALLERY_NAME', 'Gallery name');
define('GALLERY_DESCRIPTION', 'Gallery description');
define('GALLERY_ADMIN_EMAIL', 'Gallery administrator email');
define('ECARDS_MORE_PIC_TARGET', 'Address to nuke folder ie http://www.mysite.tld/html');
define('LANG', 'Language');
define('CPGTHEME', 'Theme');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'Album list view');
define('MAIN_TABLE_WIDTH', 'Width of the main table (pixels or %)');
define('SUBCAT_LEVEL', 'Number of levels of categories to display');
define('ALBUMS_PER_PAGE', 'Number of albums to display');
define('ALBUM_LIST_COLS', 'Number of columns for the album list');
define('ALB_LIST_THUMB_SIZE', 'Size of thumbnails in pixels');
define('MAIN_PAGE_LAYOUT', 'The content of the main page');
define('FIRST_LEVEL', 'Show first level album thumbnails in categories');
define('THUMB_VIEW_TITLE', 'Thumbnail view');
define('THUMBCOLS', 'Number of columns on thumbnail page');
define('THUMBROWS', 'Number of rows on thumbnail page');
define('MAX_TABS', 'Maximum number of tabs to display');
define('CAPTION_IN_THUMBVIEW', 'Display picture caption (in addition to title) below the thumbnail');
define('DISPLAY_COMMENT_COUNT', 'Display number of comments below the thumbnail');
define('DEFAULT_SORT_ORDER', 'Default sort order for pictures');
define('MIN_VOTES_FOR_RATING', 'Minimum number of votes for a picture to appear in the \'top-rated\' list');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'Image view &amp; Comment settings');
define('PICTURE_TABLE_WIDTH', 'Width of the table for picture display (pixels or %)');
define('DISPLAY_PIC_INFO', 'Picture information are visible by default');
define('FILTER_BAD_WORDS', 'Filter bad words in comments');
define('ENABLE_SMILIES', 'Allow smiles in comments');
define('DISABLE_FLOOD_PROTECTION', 'Allow several consecutive comments on one pic from the same user');
define('COMMENT_EMAIL_NOTIFICATION', 'Email site admin upon comment submission');
define('MAX_IMG_DESC_LENGTH', 'Max length for an image description');
define('MAX_COM_WLENGTH', 'Max number of characters in a word');
define('MAX_COM_LINES', 'Max number of lines in a comment');
define('MAX_COM_SIZE', 'Maximum length of a comment');
define('DISPLAY_FILM_STRIP', 'Show film strip');
define('MAX_FILM_STRIP_ITEMS', 'Number of items in film strip');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', 'Pictures and thumbnails settings');
define('JPEG_QUAL', 'Quality for JPEG files');
define('THUMB_WIDTH', 'Max dimension of a thumbnail <b>*</b>');
define('THUMB_USE', 'Use dimension ( width or height or Max aspect for thumbnail )<b>*</b>');
define('MAKE_INTERMEDIATE', 'Create intermediate pictures');
define('PICTURE_WIDTH', 'Max width or height of an intermediate picture <b>*</b>');
define('MAX_UPL_SIZE', 'Max size for uploaded pictures (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Max width or height for uploaded pictures (pixels)');
define('USER_SETTING_TITLE', 'User settings');
define('ALLOW_USER_REGISTRATION', 'Allow new user registrations');
define('REG_REQUIRES_VALID_EMAIL', 'User registration requires email verification');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Allow two users to have the same email address');
define('ALLOW_PRIVATE_ALBUMS', 'Users can can have private albums');
define('CUSTOM_FIELDS_TITLE', 'Custom fields for image description (leave blank if unused)');
define('USER_FIELD1_NAME', 'Field 1 name');
define('USER_FIELD2_NAME', 'Field 2 name');
define('USER_FIELD3_NAME', 'Field 3 name');
define('USER_FIELD4_NAME', 'Field 4 name');
define('PIC_ADV_SETTING_TITLE', 'Pictures and thumbnails advanced settings');
define('SHOW_PRIVATE', 'Show private album Icon to unlogged user');
define('FORBIDEN_FNAME_CHAR', 'Characters forbidden in filenames');
define('ALLOWED_FILE_EXTENSIONS', 'Accepted file extensions for uploaded pictures');
define('THUMB_METHOD', 'Method for resizing images');
define('IMPATH', 'Path to ImageMagick\Netpbm \'convert\' utility (example /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Allowed image types (only valid for ImageMagick)');
define('IM_OPTIONS', 'Command line options for ImageMagick');
define('READ_EXIF_DATA', 'Read EXIF data in JPEG files');
define('READ_IPTC_DATA', 'Read IPTC data in JPEG files');
define('FULLPATH', 'The album directory <b>*</b>');
define('USERPICS', 'The directory for user pictures <b>*</b>');
define('NORMAL_PFX', 'The prefix for intermediate pictures <b>*</b>');
define('THUMB_PFX', 'The prefix for thumbnails <b>*</b>');
define('DEFAULT_DIR_MODE', 'Default mode for directories');
define('DEFAULT_FILE_MODE', 'Default mode for pictures');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', 'Cookies &amp; Charset settings');
define('COOKIE_NAME', 'Name of the cookie used by the script');
define('COOKIE_PATH', 'Path of the cookie used by the script');
define('CHAR_SET', 'Character encoding');
define('MISC_SETTING_TITLE', 'Miscellaneous settings');
define('DEBUG_MODE', 'Enable debug mode');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) Fields marked with * must not be changed if you already have pictures in your gallery</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Vocãª precisa definir um nome para o comentãrio');
define('COM_ADDED', 'Comentãrio adicionado');
define('ALB_NEED_TITLE', 'Vocãª deve definir um nome para o ãlbum !');
define('NO_UDP_NEEDED', 'Atualizaã§ã£o nã£o necessãria.');
define('ALB_UPDATED', 'ãlbum atualizado');
define('UNKNOWN_ALBUM', 'O ãlbum selecionado nã£o existe ou vocãª nã£o tem permissã£o para enviar imagens para ele');
define('NO_PIC_UPLOADED', 'Nenhuma imagem enviada !<br /><br />Se vocãª realmente selecionaou ima imagem para enviar, verifique se o servidor permite envios...');
define('ERR_MKDIR', 'Falha ao criar diretã³rio %s !');
define('DEST_DIR_RO', 'Diretã³rio de destino %s nã£o pode ser gravado pelo script !');
define('ERR_MOVE', 'Impossã­vel mover %s para %s !');
define('ERR_FSIZE_TOO_LARGE', 'A imagem que vocãª estã tentando enviar ã© muito grande (mãximo permitido %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'O tamanho da imagem ã© maior que o permitido (mãximo permitido %s KB) !');
define('ERR_INVALID_IMG', 'O arquivo que vocãª estã tentando enviar nã£o ã© um arquivo de imagem vãlido !');
define('ALLOWED_IMG_TYPES', 'Vocãª sã³ pode enviar %s imagens.');
define('ERR_INSERT_PIC', 'A imagem \'%s\' nã£o pode ser inserida no ãlbum ');
define('UPLOAD_SUCCESS', 'Sua imagem foi enviada com sucesso<br /><br />Porã©m sã³ serã visã­vel apã³s a aprovaã§ã£o do Administrador.');
define('INFO', 'Informaã§ã£o');
define('ERR_COMMENT_EMPTY', 'Seu comentãrio estã vazio !');
define('ERR_INVALID_FEXT', 'Somente os arquivos com as seguines extenã§ãµes sã£o permitidos : <br /><br />%s.');
define('NO_FLOOD', 'Desculpe mas vocãª ã© o ãºltimo autor a enviar um comentãrio<br /><br />Edite o comentãrio se deseja alterã-lo');
define('REDIRECT_MSG', 'Vocãª estã sendo redirecionado.<br /><br /><br />Clique \'CONTINUE\' se a pãgina nã£o se atualizar automaticamente');
define('UPL_SUCCESS', 'Sua imagem foi adicionada com sucesso');

// lang_delete_php
define('CAPTION', 'Sob-Tã­tulo');
define('FS_PIC', 'tamanho total da imagem');
define('DEL_SUCCESS', 'removido com sucesso');
define('NS_PIC', 'tamanho normal da imagem');
define('ERR_DEL', 'nã£o pode ser escluã­do');
define('THUMB_PIC', 'miniatura');
define('COMMENT', 'comentãrio');
define('IM_IN_ALB', 'imagem no ãlbum');
define('ALB_DEL_SUCCESS', 'ãlbum \'%s\' REMOVIDO');
define('ALB_MGR', 'Gerenciador de Àlbuns');
define('ERR_INVALID_DATA', 'Dados recebidos invãlidos \'%s\'');
define('CREATE_ALB', 'Criando Àlbuns \'%s\'');
define('UPDATE_ALB', 'Atualizando Àlbuns \'%s\' tã­tulo \'%s\' ã­ndice \'%s\'');
define('DEL_PIC', 'Remover imagem');
define('DEL_ALB', 'Remover ãlbum');
define('DEL_USER', 'Remover usuãrio');
define('ERR_UNKNOWN_USER', 'O usuãrio selecionado nã£o existe !');
define('COMMENT_DELETED', 'O comentãrio foi removido com sucesso');

// lang_display_image_php
define('CONFIRM_DEL', 'Tem certeza de EXCLUIR  esta imagem ? \\nComentãrios vinculados tambã©m serã£o excluã­dos.');
define('DEL_PIC', 'DELETE THIS PICTURE');
define('SIZE', '%s x %s pixels');
define('VIEWS', '%s vezes');
define('SLIDESHOW', 'Slideshow');
define('STOP_SLIDESHOW', 'PARAR SLIDESHOW');
define('VIEW_FS', 'Clique para ver a ampliaã§ã£o da imagem');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('TITLE', 'INFORMAã‡ã•ES DA IMAGEM');
define('FILENAME', 'Nome');
define('ALBUM NAME', 'ãlbum');
define('RATING', 'Classificaã§ã£o (%s votos)');
define('KEYWORDS', 'Palavras-chave');
define('FILE SIZE', 'Tamanho do arquivo');
define('DIMENSIONS', 'Dimensãµes');
define('DISPLAYED', 'Mostrado');
define('CAMERA', 'Camera');
define('DATE TAKEN', 'Data');
define('APERTURE', 'Abertura');
define('EXPOSURE TIME', 'Tempo de exposiã§ã£o');
define('FOCAL LENGTH', 'Largura focal');
define('COMMENT', 'Comentãrio');
define('ADDFAV', 'Add to Fav');
define('ADDFAVPHRASE', 'Favourites');
define('REMFAV', 'Remove from Fav');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'Editar este comentãrio');
define('CONFIRM_DELETE', 'Tem certeza de REMOVER este comentãrio ?');
define('ADD_YOUR_COMMENT', 'Adicione seu comentãrio');
define('NAME', 'Name');
define('COMMENT', 'Comment');
define('YOUR_NAME', 'Seu nome');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Click image to close this window');

// lang_ecard_php
define('TITLE', 'Send an e-card');
define('INVALID_EMAIL', '<b>Warning</b> : endereã§o eletrãnico invãlido !');
define('ECARD_TITLE', 'Hã um e-card %s para vocãª');
define('VIEW_ECARD', 'Se nã£o estiver aparecendo normalmente clique neste link');
define('VIEW_MORE_PICS', 'Clique aqui para ver mais imagens !');
define('SEND_SUCCESS', 'Seu e-card foi enviado');
define('SEND_FAILED', 'Desculpe, mas o servidor nã£o pode enviar seu e-card...');
define('FROM', 'Remetente');
define('YOUR_NAME', 'Seu nome');
define('YOUR_EMAIL', 'Seu e-amil');
define('TO', 'Para');
define('RCPT_NAME', 'Destinatãrio');
define('RCPT_EMAIL', 'E-mail do destinatãrio');
define('GREETINGS', 'Saudaã§ãµes');
define('MESSAGE', 'Mensagem');

// lang_editpics_php
define('PIC_INFO', 'Picture&nbsp;info');
define('ALBUM', 'ãlbum');
define('TITLE', 'Tã­tulo');
define('DESC', 'Descriã§ã£o');
define('KEYWORDS', 'Palavras-chave');
define('PIC_INFO_STR', '%sx%s - %sKB - %s views - %s votes');
define('APPROVE', 'Aprovar imagem');
define('POSTPONE_APP', 'Postpone approval');
define('DEL_PIC', 'Apagar imagem');
define('RESET_VIEW_COUNT', 'Zerar contador');
define('RESET_VOTES', 'Zerar votos');
define('DEL_COMM', 'Excluir comentãrios');
define('UPL_APPROVAL', 'Aprovar envio');
define('EDIT_PICS', 'Editar imagens');
define('SEE_NEXT', 'Ver prã³ximas imagens');
define('SEE_PREV', 'Ver imagens anteriores');
define('N_PIC', '%s imagens');
define('N_OF_PIC_TO_DISP', 'Nãºmero de imagens a mostrar');
define('APPLY', 'Aplicar modificaã§ãµes');

// lang_groupmgr_php
define('GROUP_NAME', 'Nome do Grupo');
define('DISK_QUOTA', 'Quota de disco');
define('CAN_RATE', 'Pode avaliar imagens');
define('CAN_SEND_ECARDS', 'Pode enviar e-cards');
define('CAN_POST_COM', 'Pode enviar comentãrios');
define('CAN_UPLOAD', 'Pode enviar imagens');
define('CAN_HAVE_GALLERY', 'Pode ter uma galeria pessoal');
define('APPLY', 'Aplicar modificaã§ãµes');
define('CREATE_NEW_GROUP', 'Criar novo grupo');
define('DEL_GROUPS', 'Apagar grupo(s) selecionado(s)');
define('CONFIRM_DEL', 'CUIDADO: Ao remover um grupo seu conteãºdo serã transferido para \'Registered\' !\\n\\nquer continuar ?');
define('TITLE', 'Gerenciar grupos');
define('APPROVAL_1', 'Aprovaã§ã£o pãºblica (1)');
define('APPROVAL_2', 'Aaprovaã§ã£o privada (2)');
define('NOTE1', '<b>(1)</b> Envios para um ãlbum pãºblico requerem aprovaã§ã£o do administrador');
define('NOTE2', '<b>(2)</b> Envios requerem aprovaã§ã£o do administrador');
define('NOTES', 'Notas');

// lang_index_php
define('WELCOME', 'Welcome !');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Tem certeza que deseja EXCLUIR este ãlbum ? \\nTodas as imagens e comentãrios serã£o excluã­dos.');
define('DELETE', 'EXCLUIR');
define('MODIFY', 'PROPRIEDADES');
define('EDIT_PICS', 'EDITAR IMAGENS');

// lang_list_categories
define('HOME', 'Home');
define('STAT1', '<b>[pictures]</b> imagens em <b>[albums]</b> Àlbuns e <b>[cat]</b> categorias com <b>[comments]</b> comentãrios vistos <b>[views]</b> vezes');
define('STAT2', '<b>[pictures]</b> imagens em <b>[albums]</b> Àlbuns vistos <b>[views]</b> vezes');
define('XX_S_GALLERY', '%s\'s Galeria');
define('STAT3', '<b>[pictures]</b> imagens em <b>[albums]</b> Àlbuns com <b>[comments]</b> comentãrios vistos <b>[views]</b> vezes');

// lang_list_users
define('USER_LIST', 'Lista de usuãrios');
define('NO_USER_GAL', 'Nenhum usuãrio permitido a ter Àlbuns');
define('N_ALBUMS', '%s ãlbum(s)');
define('N_PICS', '%s imagem(s)');

// lang_list_albums
define('N_PICTURES', '%s imagem');
define('LAST_ADDED', ', ãºltimo adicionado em %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Atualizar ãlbum %s');
define('GENERAL_SETTINGS', 'Configuraã§ãµes gerais');
define('ALB_TITLE', 'Tã­tulo do ãlbum');
define('ALB_CAT', 'Categoria do ãlbum');
define('ALB_DESC', 'Descriã§ã£o do ãlbum');
define('ALB_THUMB', 'Miniatura do ãlbum');
define('ALB_PERM', 'Permissãµes para este ãlbum');
define('CAN_VIEW', 'ãlbum pode ser visto por');
define('CAN_UPLOAD', 'Visitantes podem enviar imagens');
define('CAN_POST_COMMENTS', 'Visitantes podem enviar comentãrios');
define('CAN_RATE', 'Visitantes podem avaliar imagens');
define('USER_GAL', 'Galeria do Usuãrio');
define('NO_CAT', '* Sem categoria *');
define('ALB_EMPTY', 'ãlbum vazio');
define('LAST_UPLOADED', 'ãšltimo envio');
define('PUBLIC_ALB', 'Todos (album pãºblico)');
define('ME_ONLY', 'Apenas eu');
define('OWNER_ONLY', 'Proprietãrio (%s) apenas');
define('GROUPP_ONLY', 'Membros do  grupo\'%s\' ');
define('ERR_NO_ALB_TO_MODIFY', 'Nenhum album que vocãª pode modificar na base de dados .');
define('UPDATE', 'Atualizar ãlbum');

// lang_rate_pic_php
define('ALREADY_RATED', 'Desculpe, mas vocãª ja avaliou esta imagem');
define('RATE_OK', 'Seu voto foi aceito');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'While the administrators of {SITE_NAME} will attempt to remove or edit any generally objectionable material as quickly as possible, it is impossible to review every post. Therefore you acknowledge that all posts made to this site express the views and opinions of the author and not the administrators or webmaster (except for posts by these people) and hence will not be held liable.<br />
<br />
You agree not to post any abusive, obscene, vulgar, slanderous, hateful, threatening, sexually-orientated or any other material that may violate any applicable laws. You agree that the webmaster, administrator and moderators of {SITE_NAME} have the right to remove or edit any content at any time should they see fit. As a user you agree to any information you have entered above being stored in a database. While this information will not be disclosed to any third party without your consent the webmaster and administrator cannot be held responsible for any hacking attempt that may lead to the data being compromised.<br />
<br />
This site uses cookies to store information on your local computer. These cookies serve only to improve your viewing pleasure. The email address is used only for confirming your registration details and password.<br />
<br />
By clicking \'I agree\' below you agree to be bound by these conditions.');

// lang_register_php
define('PAGE_TITLE', 'REGISTRO DE USUãRIO');
define('TERM_COND', 'Termos e condiã§ãµes');
define('I_AGREE', 'Eu Aceito');
define('SUBMIT', 'enviar registro');
define('ERR_USER_EXISTS', 'Este nome de usuãrio jã existe, por favor crie outro');
define('ERR_PASSWORD_MISMATCH', 'As duas senhas digitadas nã£o conferem. Digite com cuidado novamente');
define('ERR_UNAME_SHORT', 'Nome de usuãrio precisa ter no mã­nimo 2 caracteres');
define('ERR_PASSWORD_SHORT', 'sua senha tem que ter no mã­nimo 2 caracteres');
define('ERR_UNAME_PASS_DIFF', 'Nome de usuãrio e senha devem ser diferentes');
define('ERR_INVALID_EMAIL', 'Endereã§o de e-mail invãlido');
define('ERR_DUPLICATE_EMAIL', 'Jã existe outro usuãrio registrado com este e-mail');
define('ENTER_INFO', 'Entre com as informaã§ãµes de registro');
define('REQUIRED_INFO', 'Informaã§ã£o requerida');
define('OPTIONAL_INFO', 'Informaã§ã£o opcional');
define('USERNAME', 'Usuãrio');
define('PASSWORD', 'Senha');
define('PASSWORD_AGAIN', 'Repita a senha');
define('EMAIL', 'E-mail');
define('LOCATION', 'Endereã§o');
define('INTERESTS', 'Interesses');
define('WEBSITE', 'Home page');
define('OCCUPATION', 'Profissã£o');
define('ERROR', 'ERRO');
define('CONFIRM_EMAIL_SUBJECT', '%s - CONFIRMAã‡ãƒO DE REGISTRO');
define('INFORMATION', 'Informaã§ã£o');
define('FAILED_SENDING_EMAIL', 'O e-mail de confirmaã§ã£o de registro nã£o pãde ser enviado !');
define('THANK_YOU', 'Obrigado pr se registrar.<br /><br />As informaã§ãµes para finalizar seu registro foram enviadas para seu e-mail. Verifique agora ou aguarde uns instantes.');
define('ACCT_CREATED', 'Sua conta foi criada. Para acessar o catãlogo vocãª deve fornecer seu nome de usuãrio e sua senha');
define('ACCT_ACTIVE', 'Sua conta jã estã ativa. Entre com seu nome de usuãrio e senha para acessar os dados do catãlogo');
define('ACCT_ALREADY_ACT', 'Sua conta jã estã ativa !');
define('ACCT_ACT_FAILED', 'Esta conta nã£o estã ativa ainda !');
define('ERR_UNK_USER', 'Usuãrio selecionado nã£o existe !');
define('X_S_PROFILE', '%s\'s profile');
define('GROUP', 'Grupo');
define('REG_DATE', 'PArticipante');
define('DISK_USAGE', 'Uso do disco');
define('CHANGE_PASS', 'Alterar minha senha');
define('CURRENT_PASS', 'Senha atual');
define('NEW_PASS', 'Nova senha');
define('NEW_PASS_AGAIN', 'Nova senha de novo');
define('ERR_CURR_PASS', 'Senha atual INCORRETA');
define('APPLY_MODIF', 'Aplicar modificaã§ãµes');
define('UPDATE_SUCCESS', 'Seus dados foram atualizadsos');
define('PASS_CHG_SUCCESS', 'Sua senha foi alterada');
define('PASS_CHG_ERROR', 'Sua senha nã£o foi alterada');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Thank you for registering at {SITE_NAME}

Seu nome de usuãrio ã© : "{USER_NAME}"
Sua senha ã© : "{PASSWORD}"

Clique no link abaixo ou copie e cole no seu Browser para acessar nosso catãlogo

{ACT_LINK}

Obrigado pela inscriã§ã£o,

O Administrador
{SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', 'Revisar comentãrios');
define('NO_COMMENT', 'Nã£o hã comentãrios para revisar');
define('N_COMM_DEL', '%s comentãrio(s) removido');
define('N_COMM_DISP', 'Nãºmero de comentãrios ');
define('SEE_PREV', 'Ver anterior');
define('SEE_NEXT', 'Ver prã³ximo');
define('DEL_COMM', 'Excluir comentãrios selecionados');

// lang_search_php搀攀昀椀渀攀⠀✀匀䔀䄀刀䌀䠀✀Ⰰ ✀倀攀猀焀甀椀猀愀爀 渀愀 挀漀氀攀꜀ꌀ漀 搀攀 椀洀愀最攀渀猀✀⤀㬀ഀ਀ഀ਀⼀⼀ 氀愀渀最开猀攀愀爀挀栀开渀攀眀开瀀栀瀀ഀ਀搀攀昀椀渀攀⠀✀倀䄀䜀䔀开吀䤀吀䰀䔀✀Ⰰ ✀倀攀猀焀甀椀猀愀爀 渀漀瘀愀猀 椀洀愀最攀渀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀匀䔀䰀䔀䌀吀开䐀䤀刀✀Ⰰ ✀匀攀氀攀挀椀漀渀愀爀 搀椀爀攀琀대爀椀漀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀匀䔀䰀䔀䌀吀开䐀䤀刀开䴀匀䜀✀Ⰰ ✀䔀猀琀愀 昀甀渀꜀ꌀ漀 氀栀攀 瀀攀爀洀椀琀攀 攀渀瘀椀愀爀 搀椀瘀攀爀猀愀猀 椀洀愀最攀渀猀 愀漀 洀攀猀洀漀 琀攀洀瀀漀⸀㰀戀爀 ⼀㸀㰀戀爀 ⼀㸀匀攀氀攀挀椀漀渀攀 漀 搀椀爀攀琀대爀椀漀 搀愀猀 椀洀愀最攀渀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀一伀开倀䤀䌀开吀伀开䄀䐀䐀✀Ⰰ ✀一ꌀ漀 栀 椀洀愀最攀渀猀 瀀愀爀愀 攀渀瘀椀愀爀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀一䔀䔀䐀开伀一䔀开䄀䰀䈀唀䴀✀Ⰰ ✀嘀漀挀ꨀ 瀀爀攀挀椀猀愀琀攀爀 瀀攀氀漀 洀攀渀甀猀 甀洀 氀戀甀洀 瀀愀爀愀 甀猀愀爀 攀猀琀愀 昀甀渀꜀ꌀ漀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀圀䄀刀一䤀一䜀✀Ⰰ ✀䌀唀䤀䐀䄀䐀伀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䌀䠀䄀一䜀䔀开倀䔀刀䴀✀Ⰰ ✀伀 猀挀爀椀瀀琀 渀ꌀ漀 瀀漀搀攀 最爀愀瘀愀爀 渀攀猀琀攀 搀椀爀攀琀대爀椀漀 焀甀攀 搀攀瘀攀 瀀漀猀猀甀椀爀 瀀攀爀洀椀猀猀ꌀ漀 㜀㔀㔀 漀甀 㜀㜀㜀 ℀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀吀䄀刀䜀䔀吀开䄀䰀䈀唀䴀✀Ⰰ ✀㰀戀㸀䌀漀氀漀挀愀爀 椀洀愀最攀渀猀 搀漀 ☀焀甀漀琀㬀㰀⼀戀㸀─猀㰀戀㸀☀焀甀漀琀㬀 攀洀 㰀⼀戀㸀─猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䘀伀䰀䐀䔀刀✀Ⰰ ✀倀愀猀琀愀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䤀䴀䄀䜀䔀✀Ⰰ ✀䤀洀愀最攀洀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䄀䰀䈀唀䴀✀Ⰰ ✀脀氀戀甀洀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀刀䔀匀唀䰀吀✀Ⰰ ✀刀攀猀甀氀琀愀搀漀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䐀䤀刀开刀伀✀Ⰰ ✀一ꌀ漀 最爀愀瘀瘀攀氀⸀ ✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䐀䤀刀开䌀䄀一吀开刀䔀䄀䐀✀Ⰰ ✀一ꌀ漀 瀀漀搀攀 猀攀爀 氀椀搀漀⸀ ✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䤀一匀䔀刀吀✀Ⰰ ✀䄀搀椀挀椀漀渀愀渀搀漀 渀漀瘀愀猀 椀洀愀最攀渀猀 ꀀ 最愀氀攀爀椀愀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䰀䤀匀吀开一䔀圀开倀䤀䌀✀Ⰰ ✀䰀椀猀琀愀 搀愀猀 渀漀瘀愀猀 椀洀愀最攀渀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䤀一匀䔀刀吀开匀䔀䰀䔀䌀吀䔀䐀✀Ⰰ ✀䤀渀猀攀爀椀爀 椀洀愀最攀渀猀 猀攀氀攀挀椀漀渀愀搀愀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀一伀开倀䤀䌀开䘀伀唀一䐀✀Ⰰ ✀一ꌀ漀 栀 椀洀愀最攀渀猀 渀漀瘀愀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䈀䔀开倀䄀吀䤀䔀一吀✀Ⰰ ✀倀漀爀 昀愀瘀漀攀 琀攀渀栀愀 瀀愀挀椀ꨀ渀挀椀愀⸀ 伀 猀椀猀琀攀洀愀 渀攀猀挀攀猀猀椀琀愀 搀攀 琀攀洀瀀漀 瀀愀爀愀 攀渀瘀椀愀爀 猀甀愀猀 椀洀愀最攀渀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀一伀吀䔀匀✀Ⰰ ✀㰀甀氀㸀㰀氀椀㸀㰀戀㸀伀䬀㰀⼀戀㸀 㨀 匀椀最渀椀昀椀挀愀 焀甀攀 昀漀椀 攀渀瘀椀愀搀漀 挀漀洀 猀甀挀攀猀猀漀㰀氀椀㸀㰀戀㸀䐀倀㰀⼀戀㸀 㨀 匀椀最渀椀昀椀挀愀 焀甀攀 攀砀椀猀琀攀 甀洀愀 搀甀瀀氀椀挀愀琀愀 渀愀 戀愀猀攀 搀攀 搀愀琀漀猀㰀氀椀㸀㰀戀㸀倀䈀㰀⼀戀㸀 㨀 猀椀最渀椀昀椀挀愀 焀甀攀 渀ꌀ漀 瀀搀攀 猀攀爀 攀渀瘀椀愀搀漀⸀ 嘀攀爀椀昀椀焀甀攀 猀甀愀猀 瀀攀爀洀椀猀猀딀攀猀 攀 挀漀爀爀攀琀漀猀 攀渀搀攀爀攀꜀漀猀⸀㰀氀椀㸀匀攀 漀 伀䬀Ⰰ 䐀倀Ⰰ 倀䈀 尀✀猀椀最渀猀尀✀ 渀ꌀ漀 愀瀀愀爀攀挀攀洀Ⰰ 挀氀椀焀甀攀 渀愀 椀洀愀最攀洀 挀漀洀 瀀爀漀戀氀攀洀愀 瀀愀爀愀 爀攀挀攀戀攀爀 愀 洀攀渀猀愀最攀洀 搀漀 攀爀爀漀㰀氀椀㸀匀攀 爀攀挀攀戀攀爀 洀攀渀猀愀最攀洀 搀攀 攀砀瀀椀爀愀꜀ꌀ漀Ⰰ 愀挀椀漀渀攀 爀攀氀漀愀搀㰀⼀甀氀㸀✀⤀㬀ഀ਀ഀ਀⼀⼀ 氀愀渀最开甀瀀氀漀愀搀开瀀栀瀀ഀ਀搀攀昀椀渀攀⠀✀吀䤀吀䰀䔀✀Ⰰ ✀攀渀瘀椀漀 搀攀 椀洀愀最攀洀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䴀䄀堀开䘀匀䤀娀䔀✀Ⰰ ✀吀愀洀愀渀栀漀 洀砀椀洀漀 瀀攀爀洀椀琀椀搀漀 ─猀 䬀䈀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䄀䰀䈀唀䴀✀Ⰰ ✀脀氀戀甀洀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀倀䤀䌀吀唀刀䔀✀Ⰰ ✀䤀洀愀最攀洀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀倀䤀䌀开吀䤀吀䰀䔀✀Ⰰ ✀吀관琀甀氀漀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䐀䔀匀䌀刀䤀倀吀䤀伀一✀Ⰰ ✀䐀攀猀挀爀椀꜀ꌀ漀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䬀䔀夀圀伀刀䐀匀✀Ⰰ ✀倀愀氀愀瘀爀愀猀ⴀ挀栀愀瘀攀 ⠀猀攀瀀愀爀愀爀 猀漀洀攀渀琀攀 挀漀洀 攀猀瀀愀꜀漀猀⤀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䔀刀刀开一伀开䄀䰀䈀开唀倀䰀伀䄀䐀䄀䈀䰀䔀匀✀Ⰰ ✀搀攀猀挀甀氀瀀攀⸀ 嘀漀挀ꨀ 渀ꌀ漀 攀猀琀 愀甀琀漀爀椀稀愀搀漀 愀 攀渀瘀椀愀爀 瀀愀爀愀 攀猀琀攀 氀戀甀洀✀⤀㬀ഀ਀ഀ਀⼀⼀ 氀愀渀最开甀猀攀爀洀最爀开瀀栀瀀ഀ਀搀攀昀椀渀攀⠀✀吀䤀吀䰀䔀✀Ⰰ ✀䜀攀爀攀渀挀椀愀爀 甀猀甀爀椀漀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀一䄀䴀䔀开䄀✀Ⰰ ✀一漀洀攀 䄀猀挀攀渀搀攀渀琀攀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀一䄀䴀䔀开䐀✀Ⰰ ✀一漀洀攀 䐀攀猀挀攀渀搀攀渀琀攀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䜀刀伀唀倀开䄀✀Ⰰ ✀䜀爀甀瀀漀 䄀猀挀攀渀搀攀渀琀攀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䜀刀伀唀倀开䐀✀Ⰰ ✀䜀爀甀瀀漀 䐀攀猀挀攀渀搀攀渀琀攀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀刀䔀䜀开䄀✀Ⰰ ✀䐀愀琀愀 搀攀 爀攀最椀猀琀爀漀 䄀猀挀攀渀搀攀渀琀攀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀刀䔀䜀开䐀✀Ⰰ ✀䐀愀琀愀 搀攀 爀攀最椀猀琀爀漀 䐀攀猀挀攀渀搀攀渀琀攀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀倀䤀䌀开䄀✀Ⰰ ✀䌀漀渀琀愀最攀洀 搀攀 椀洀愀最攀渀猀 愀猀挀攀渀搀攀渀琀攀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀倀䤀䌀开䐀✀Ⰰ ✀䌀漀渀猀琀愀最攀洀 搀攀 椀洀愀最攀洀 搀攀猀挀攀渀搀攀渀琀攀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䐀䤀匀䬀唀开䄀✀Ⰰ ✀唀猀漀 搀攀 搀椀猀挀漀 愀猀挀攀渀搀攀渀琀攀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䐀䤀匀䬀唀开䐀✀Ⰰ ✀唀猀漀 搀攀 搀椀猀挀漀 搀攀猀挀攀渀搀攀渀琀攀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀匀伀刀吀开䈀夀✀Ⰰ ✀䰀椀猀琀愀爀 甀猀甀爀椀漀猀 瀀漀爀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䔀刀刀开一伀开唀匀䔀刀匀✀Ⰰ ✀吀愀戀攀氀愀 搀攀 甀猀甀爀椀漀猀 攀猀琀 瘀愀稀椀愀 ℀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䔀刀刀开䔀䐀䤀吀开匀䔀䰀䘀✀Ⰰ ✀嘀漀挀ꨀ 渀ꌀ漀 瀀漀搀攀 愀氀琀攀爀愀爀 漀猀 搀愀搀漀猀 尀✀䴀礀 瀀爀漀昀椀氀攀尀✀ ✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䔀䐀䤀吀✀Ⰰ ✀䔀䐀䤀吀䄀刀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䐀䔀䰀䔀吀䔀✀Ⰰ ✀䔀堀䌀䰀唀䤀刀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀一䄀䴀䔀✀Ⰰ ✀唀猀甀爀椀漀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䜀刀伀唀倀✀Ⰰ ✀䜀爀甀瀀漀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䤀一䄀䌀吀䤀嘀䔀✀Ⰰ ✀䤀渀愀琀椀瘀漀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀伀倀䔀刀䄀吀䤀伀一匀✀Ⰰ ✀伀瀀攀爀愀꜀딀攀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀倀䤀䌀吀唀刀䔀匀✀Ⰰ ✀䤀洀愀最攀渀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䐀䤀匀䬀开匀倀䄀䌀䔀✀Ⰰ ✀䔀猀瀀愀꜀漀 甀猀愀搀漀 ⼀ 儀甀漀琀愀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀刀䔀䜀䤀匀吀䔀刀䔀䐀开伀一✀Ⰰ ✀刀攀最椀猀琀爀愀搀漀 漀渀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀唀开唀匀䔀刀开伀一开倀开倀䄀䜀䔀匀✀Ⰰ ✀─搀 甀猀甀爀椀漀猀 攀洀 ─搀 瀀最椀渀愀⠀猀⤀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䌀伀一䘀䤀刀䴀开䐀䔀䰀✀Ⰰ ✀吀攀洀 挀攀爀琀攀稀愀 焀甀攀 焀甀攀爀 䔀堀䌀䰀唀䤀刀 攀猀琀攀 甀猀甀爀椀漀 㼀 尀尀渀吀漀搀愀猀 愀猀 椀洀愀最攀渀猀 攀 氀戀甀渀猀 搀攀氀攀 猀攀爀ꌀ漀 爀攀洀漀瘀椀搀愀猀⸀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䴀䄀䤀䰀✀Ⰰ ✀䴀䄀䤀䰀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䔀刀刀开唀一䬀一伀圀一开唀匀䔀刀✀Ⰰ ✀唀猀甀爀椀漀 猀攀氀攀挀椀漀渀愀搀漀 渀ꌀ漀 攀砀椀猀琀攀 ℀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䴀伀䐀䤀䘀夀开唀匀䔀刀✀Ⰰ ✀䴀漀搀椀昀椀挀愀爀 甀猀甀爀椀漀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀一伀吀䔀匀✀Ⰰ ✀一漀琀愀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀一伀吀䔀开䰀䤀匀吀✀Ⰰ ✀㰀氀椀㸀匀攀 瘀漀挀ꨀ 渀ꌀ漀 焀甀攀爀 愀氀琀攀爀愀爀 猀甀愀 猀攀渀栀愀Ⰰ 搀攀椀砀攀 漀 挀愀洀瀀漀 攀洀 戀爀愀渀挀漀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀倀䄀匀匀圀伀刀䐀✀Ⰰ ✀匀攀渀栀愀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀唀匀䔀刀开䄀䌀吀䤀嘀䔀✀Ⰰ ✀唀猀甀爀椀漀 ꤀ 愀琀椀瘀漀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀唀匀䔀刀开䜀刀伀唀倀✀Ⰰ ✀䜀䈀爀甀瀀漀 搀攀 甀猀甀爀椀漀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀唀匀䔀刀开䔀䴀䄀䤀䰀✀Ⰰ ✀䔀ⴀ洀愀椀氀 搀漀 甀猀甀爀椀漀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀唀匀䔀刀开圀䔀䈀开匀䤀吀䔀✀Ⰰ ✀匀椀琀攀 搀漀 甀猀甀爀椀漀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䌀刀䔀䄀吀䔀开一䔀圀开唀匀䔀刀✀Ⰰ ✀䌀爀椀愀爀 渀漀瘀漀 甀猀甀爀椀漀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀唀匀䔀刀开䘀刀伀䴀✀Ⰰ ✀䔀渀搀攀爀攀꜀漀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀唀匀䔀刀开䤀一吀䔀刀䔀匀吀匀✀Ⰰ ✀䤀渀琀攀爀攀猀猀攀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀唀匀䔀刀开伀䌀䌀✀Ⰰ ✀伀挀甀瀀愀꜀ꌀ漀✀⤀㬀ഀ਀ഀ਀⼀⼀ 氀愀渀最开甀琀椀氀开瀀栀瀀ഀ਀搀攀昀椀渀攀⠀✀吀䤀吀䰀䔀✀Ⰰ ✀刀攀猀椀稀攀 瀀椀挀琀甀爀攀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀圀䠀䄀吀开䤀吀开䐀伀䔀匀✀Ⰰ ✀圀栀愀琀 椀琀 搀漀攀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀圀䠀䄀吀开唀倀䐀䄀吀䔀开吀䤀吀䰀䔀匀✀Ⰰ ✀唀瀀搀愀琀攀猀 琀椀琀氀攀猀 昀爀漀洀 昀椀氀攀渀愀洀攀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀圀䠀䄀吀开䐀䔀䰀䔀吀䔀开吀䤀吀䰀䔀✀Ⰰ ✀䐀攀氀攀琀攀猀 琀椀琀氀攀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀圀䠀䄀吀开刀䔀䈀唀䤀䰀䐀✀Ⰰ ✀刀攀戀甀椀氀搀猀 琀栀甀洀戀渀愀椀氀猀 愀渀搀 爀攀猀椀稀攀搀 瀀栀漀琀漀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀圀䠀䄀吀开䐀䔀䰀䔀吀䔀开伀刀䤀䜀䤀一䄀䰀匀✀Ⰰ ✀䐀攀氀攀琀攀猀 漀爀椀最椀渀愀氀 猀椀稀攀搀 瀀栀漀琀漀猀 爀攀瀀氀愀挀椀渀最 琀栀攀洀 眀椀琀栀 琀栀攀 猀椀稀攀搀 瘀攀爀猀椀漀渀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䘀䤀䰀䔀✀Ⰰ ✀䘀椀氀攀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀吀䤀吀䰀䔀开匀䔀吀开吀伀✀Ⰰ ✀琀椀琀氀攀 猀攀琀 琀漀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀匀唀䈀䴀䤀吀开䘀伀刀䴀✀Ⰰ ✀猀甀戀洀椀琀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀唀倀䐀䄀吀䔀䐀开匀唀䌀䌀䔀匀䘀唀䰀䰀夀✀Ⰰ ✀甀瀀搀愀琀攀搀 猀甀挀挀攀猀昀甀氀氀礀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䔀刀刀伀刀开䌀刀䔀䄀吀䔀✀Ⰰ ✀䔀刀刀伀刀 挀爀攀愀琀椀渀最✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䌀伀一吀䤀一唀䔀✀Ⰰ ✀倀爀漀挀攀猀猀 洀漀爀攀 椀洀愀最攀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䴀䄀䤀一开匀唀䌀䌀䔀匀匀✀Ⰰ ✀吀栀攀 昀椀氀攀 ─猀 眀愀猀 猀甀挀挀攀猀猀昀甀氀氀礀 甀猀攀搀 愀猀 洀愀椀渀 瀀椀挀琀甀爀攀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䔀刀刀伀刀开刀䔀一䄀䴀䔀✀Ⰰ ✀䔀爀爀漀爀 爀攀渀愀洀椀渀最 ─猀 琀漀 ─猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䔀刀刀伀刀开一伀吀开䘀伀唀一䐀✀Ⰰ ✀吀栀攀 昀椀氀攀 ─猀 眀愀猀 渀漀琀 昀漀甀渀搀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䈀䄀䌀䬀✀Ⰰ ✀戀愀挀欀 琀漀 洀愀椀渀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀吀䠀唀䴀䈀匀开圀䄀䤀吀✀Ⰰ ✀唀瀀搀愀琀椀渀最 琀栀甀洀戀渀愀椀氀猀 愀渀搀⼀漀爀 爀攀猀椀稀攀搀 椀洀愀最攀猀Ⰰ 瀀氀攀愀猀攀 眀愀椀琀⸀⸀⸀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀吀䠀唀䴀䈀匀开䌀伀一吀䤀一唀䔀开圀䄀䤀吀✀Ⰰ ✀䌀漀渀琀椀渀甀椀渀最 琀漀 甀瀀搀愀琀攀 琀栀甀洀戀渀愀椀氀猀 愀渀搀⼀漀爀 爀攀猀椀稀攀搀 椀洀愀最攀猀⸀⸀⸀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀吀䤀吀䰀䔀匀开圀䄀䤀吀✀Ⰰ ✀唀瀀搀愀琀椀渀最 琀椀琀氀攀猀Ⰰ 瀀氀攀愀猀攀 眀愀椀琀⸀⸀⸀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䐀䔀䰀䔀吀䔀开圀䄀䤀吀✀Ⰰ ✀䐀攀氀攀琀椀渀最 琀椀琀氀攀猀Ⰰ 瀀氀攀愀猀攀 眀愀椀琀⸀⸀⸀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀刀䔀倀䰀䄀䌀䔀开圀䄀䤀吀✀Ⰰ ✀䐀攀氀攀琀椀渀最 漀爀椀最椀渀愀氀猀 愀渀搀 爀攀瀀氀愀挀椀渀最 琀栀攀洀 眀椀琀栀 爀攀猀椀稀攀搀 椀洀愀最攀猀Ⰰ 瀀氀攀愀猀攀 眀愀椀琀⸀⸀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䤀一匀吀刀唀䌀吀䤀伀一✀Ⰰ ✀儀甀椀挀欀 椀渀猀琀爀甀挀琀椀漀渀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䤀一匀吀刀唀䌀吀䤀伀一开䄀䌀吀䤀伀一✀Ⰰ ✀匀攀氀攀挀琀 愀挀琀椀漀渀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䤀一匀吀刀唀䌀吀䤀伀一开倀䄀刀䄀䴀䔀吀䔀刀✀Ⰰ ✀匀攀琀 瀀愀爀愀洀攀琀攀爀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䤀一匀吀刀唀䌀吀䤀伀一开䄀䰀䈀唀䴀✀Ⰰ ✀匀攀氀攀挀琀 愀氀戀甀洀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䤀一匀吀刀唀䌀吀䤀伀一开倀刀䔀匀匀✀Ⰰ ✀倀爀攀猀猀 ─猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀唀倀䐀䄀吀䔀✀Ⰰ ✀唀瀀搀愀琀攀 琀栀甀洀戀猀 愀渀搀⼀漀爀 爀攀猀椀稀攀搀 瀀栀漀琀漀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀唀倀䐀䄀吀䔀开圀䠀䄀吀✀Ⰰ ✀圀栀愀琀 猀栀漀甀氀搀 戀攀 甀瀀搀愀琀攀搀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀唀倀䐀䄀吀䔀开吀䠀唀䴀䈀✀Ⰰ ✀伀渀氀礀 琀栀甀洀戀渀愀椀氀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀唀倀䐀䄀吀䔀开倀䤀䌀✀Ⰰ ✀伀渀氀礀 爀攀猀椀稀攀搀 瀀椀挀琀甀爀攀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀唀倀䐀䄀吀䔀开䈀伀吀䠀✀Ⰰ ✀䈀漀琀栀 琀栀甀洀戀渀愀椀氀猀 愀渀搀 爀攀猀椀稀攀搀 瀀椀挀琀甀爀攀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀唀倀䐀䄀吀䔀开一唀䴀䈀䔀刀✀Ⰰ ✀一甀洀戀攀爀 漀昀 瀀爀漀挀攀猀猀攀搀 椀洀愀最攀猀 瀀攀爀 挀氀椀挀欀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀唀倀䐀䄀吀䔀开伀倀吀䤀伀一✀Ⰰ ✀⠀吀爀礀 猀攀琀琀椀渀最 琀栀椀猀 漀瀀琀椀漀渀 氀漀眀攀爀 椀昀 礀漀甀 攀砀瀀攀爀椀攀渀挀攀 琀椀洀攀漀甀琀 瀀爀漀戀氀攀洀猀⤀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䘀䤀䰀䔀一䄀䴀䔀开吀䤀吀䰀䔀✀Ⰰ ✀䘀椀氀攀渀愀洀攀 㼀 倀椀挀琀甀爀攀 琀椀琀氀攀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䘀䤀䰀䔀一䄀䴀䔀开䠀伀圀✀Ⰰ ✀䠀漀眀 猀栀漀甀氀搀 琀栀攀 昀椀氀攀渀愀洀攀 戀攀 洀漀搀椀昀椀攀搀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䘀䤀䰀䔀一䄀䴀䔀开刀䔀䴀伀嘀䔀✀Ⰰ ✀刀攀洀漀瘀攀 琀栀攀 ⸀樀瀀最 攀渀搀椀渀最 愀渀搀 爀攀瀀氀愀挀攀 开 ⠀甀渀搀攀爀猀挀漀爀攀⤀ 眀椀琀栀 猀瀀愀挀攀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䘀䤀䰀䔀一䄀䴀䔀开䔀唀刀伀✀Ⰰ ✀䌀栀愀渀最攀 ㈀　　㌀开㄀㄀开㈀㌀开㄀㌀开㈀　开㈀　⸀樀瀀最 琀漀 ㈀㌀⼀㄀㄀⼀㈀　　㌀ ㄀㌀㨀㈀　✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䘀䤀䰀䔀一䄀䴀䔀开唀匀✀Ⰰ ✀䌀栀愀渀最攀 ㈀　　㌀开㄀㄀开㈀㌀开㄀㌀开㈀　开㈀　⸀樀瀀最 琀漀 ㄀㄀⼀㈀㌀⼀㈀　　㌀ ㄀㌀㨀㈀　✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䘀䤀䰀䔀一䄀䴀䔀开吀䤀䴀䔀✀Ⰰ ✀䌀栀愀渀最攀 ㈀　　㌀开㄀㄀开㈀㌀开㄀㌀开㈀　开㈀　⸀樀瀀最 琀漀 ㄀㌀㨀㈀　✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䐀䔀䰀䔀吀䔀✀Ⰰ ✀䐀攀氀攀琀攀 瀀椀挀琀甀爀攀 琀椀琀氀攀猀 漀爀 漀爀椀最椀渀愀氀 猀椀稀攀 瀀栀漀琀漀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䐀䔀䰀䔀吀䔀开吀䤀吀䰀䔀✀Ⰰ ✀䐀攀氀攀琀攀 瀀椀挀琀甀爀攀 琀椀琀氀攀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䐀䔀䰀䔀吀䔀开伀刀䤀䜀䤀一䄀䰀✀Ⰰ ✀䐀攀氀攀琀攀 漀爀椀最椀渀愀氀 猀椀稀攀 瀀栀漀琀漀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀䐀䔀䰀䔀吀䔀开刀䔀倀䰀䄀䌀䔀✀Ⰰ ✀䐀攀氀攀琀攀猀 琀栀攀 漀爀椀最椀渀愀氀 椀洀愀最攀猀 爀攀瀀氀愀挀椀渀最 琀栀攀洀 眀椀琀栀 琀栀攀 猀椀稀攀搀 瘀攀爀猀椀漀渀猀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀匀䔀䰀䔀䌀吀开䄀䰀䈀唀䴀✀Ⰰ ✀匀攀氀攀挀琀 愀氀戀甀洀✀⤀㬀ഀ਀ഀ਀⼀⼀ 氀愀渀最开瀀愀最攀琀椀琀氀攀开瀀栀瀀ഀ਀搀攀昀椀渀攀⠀✀䐀䤀嘀䤀䐀䔀刀✀Ⰰ ✀㸀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀嘀䤀䔀圀䤀一䜀✀Ⰰ ✀嘀椀攀眀椀渀最 倀栀漀琀漀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀唀匀刀✀Ⰰ ✀尀✀猀 倀栀漀琀漀 䜀愀氀氀攀爀礀✀⤀㬀ഀ਀搀攀昀椀渀攀⠀✀倀䠀伀吀伀䜀䄀䰀䰀䔀刀夀✀Ⰰ ✀倀栀漀琀漀 䜀愀氀氀攀爀礀✀⤀㬀ഀ਀㼀㸀椀 