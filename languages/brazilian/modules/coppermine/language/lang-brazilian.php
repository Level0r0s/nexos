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
/*   $Id: lang-brazilian.php,v 1.1 2004/07/16 03:57:08 akamu Exp $              */
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
define('CHARSET', 'iso-8859-1');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'Sim');
define('NO', 'Nao');

// some common strings
define('BACK', 'VOLTAR');
define('CONTINUE', 'CONTINUAR');
define('INFO', 'Informação');
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
define('RANDOM', 'Imagens Randômicas');
define('LASTUP', 'Últimas Adições');
define('LASTUPBY', 'My Last Additions');
define('LASTCOM', 'Últimos Comentários');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Mais Visualizados');
define('TOPRATED', 'Topo de Linha');
define('LASTHITS', 'Últimos Visualizados');
define('SEARCH', 'Resultado da Pesquisa');
define('FAVPICS', 'Favourite Pictures');

// lang_errors
define('ACCESS_DENIED', 'Você não tem permissão para visualizar este recurso.');
define('PERM_DENIED', 'Você não tem permissão para executar esta operação.');
define('PARAM_MISSING', 'Script não consegue estabelecer um parâmetro estabelecido.');
define('NON_EXIST_AP', 'O álbum ou figura que voccê selecionau não foi encontrado !');
define('QUOTA_EXCEEDED', 'A quota de espaço para armazenamento excedeu<br /><br />Você possui [quota]KB de espaço, suas imagens atualmente utilizam [space]KB, adicionar este arquivo irá estourar sua cota permitida.');
define('GD_FILE_TYPE_ERR', 'estamos usando uma sistema que só permite imagens JPEG e PNG.');
define('INVALID_IMAGE', 'A imagem que você enviou está corrompida ou não pode ser interpretada por GD library');
define('RESIZE_FAILED', 'Impossível criar miniatura ou redimensionar a imagem.');
define('NO_IMG_TO_DISPLAY', 'Sem imagens para mostrar');
define('NON_EXIST_CAT', 'A categoria selecionada não existe');
define('ORPHAN_CAT', 'A category has a non-existing parent, runs the category manager to correct the problem.');
define('DIRECTORY_RO', 'Directory \'%s\' is not writable, pictures can\'t be deleted');
define('NON_EXIST_COMMENT', 'O comentário selecionado não existe.');
define('PIC_IN_INVALID_ALBUM', 'Imagem em um album inexistente (%s)!?');
define('BANNED', 'You are currently banned from using this site.');
define('NOT_WITH_UDB', 'This function is disabled in Coppermine because it is integrated with forum software. Either what you are trying to do is not supported in this configuration, or the function should be handled by the forum software.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', 'Ir para a lista de álbus');
define('ALB_LIST_LNK', 'Lista de álbuns');
define('MY_GAL_TITLE', 'Ir para minha galeria pessoal');
define('MY_GAL_LNK', 'Minha Galeria');
define('MY_PROF_LNK', 'Meus dados');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Alterar para o modo administrativo');
define('ADM_MODE_LNK', 'Modo Administrativo');
define('USR_MODE_TITLE', 'Alterar para modo Usuário');
define('USR_MODE_LNK', 'Modo Usuário');
define('UPLOAD_PIC_TITLE', 'Enviar imagem para o álbum');
define('UPLOAD_PIC_LNK', 'Enviar imagem');
define('REGISTER_TITLE', 'Criar uma conta');
define('REGISTER_LNK', 'Registar');
define('LOGIN_LNK', 'Login');
define('LOGOUT_LNK', 'Logout');
define('LASTUP_LNK', 'Últimos envios');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Últimos comentários');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Mais Visualizados');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Topo de linha');
define('SEARCH_LNK', 'Pesquisar');
define('FAV_LNK', 'My Favorites');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Envio aprovado');
define('CONFIG_LNK', 'Configuração');
define('ALBUMS_LNK', 'Álbuns');
define('CATEGORIES_LNK', 'Categorias');
define('USERS_LNK', 'Usuários');
define('GROUPS_LNK', 'Grupos');
define('COMMENTS_LNK', 'Comentários');
define('SEARCHNEW_LNK', 'Envio em massa');
define('UTIL_LNK', 'Resize pictures');
define('BAN_LNK', 'Ban Users');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Criar / ordnar meus álbuns');
define('MODIFYALB_LNK', 'Modificar meus álbuns');
define('MY_PROF_LNK', 'Meus Dados');

// lang_cat_list
define('CATEGORY', 'Categoria');
define('ALBUMS', 'Álbuns');
define('PICTURES', 'Imagens');

// lang_album_list
define('ALBUM_ON_PAGE', '%d álbuns na(s) %d página(s)');

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
define('USER_ON_PAGE', '%d usuários na(s) %d página(s)');
define('SORT_RA', 'Sort by rating ascending');
define('SORT_RD', 'Sort by rating descending');
define('RATING', 'RATING');
define('SORT_TITLE', 'Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Retornar para a página de miniaturas');
define('PIC_INFO_TITLE', 'Mostar/esconder informações da imagem');
define('SLIDESHOW_TITLE', 'Show de Slides');
define('SLIDESHOW_DISABLED', 'e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'enviar esta imagem como e-card');
define('ECARD_DISABLED', 'e-cards estão desabilitados');
define('ECARD_DISABLED_MSG', 'Você não possui permissão para enviar e-cards');
define('PREV_TITLE', 'Ver imagem anterior');
define('NEXT_TITLE', 'Ver próxima imagem');
define('PIC_POS', 'IMAGEM %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', 'Qualifique esta imagem ');
define('NO_VOTES', '(Nenhum voto)');
define('RATING', '(Corrente qualificação : %s / 5 dos %s votos)');
define('RUBBISH', 'Ruim');
define('POOR', 'Pobre');
define('FAIR', 'Justo');
define('GOOD', 'Bom');
define('EXCELLENT', 'Excelente');
define('GREAT', 'Espetacular');

// lang_cpg_die
define('INFORMATION', 'Informação');
define('ERROR', 'Erro');
define('CRITICAL_ERROR', 'ERRO CRÍTICO');
define('FILE', 'Arquivo: ');
define('LINE', 'Linha: ');

// lang_display_thumbnails
define('FILENAME', 'Arquivo : ');
define('FILESIZE', 'Tamanho : ');
define('DIMENSIONS', 'Dimensões : ');
define('DATE_ADDED', 'Data Envio : ');

// lang_get_pic_data
define('N_COMMENTS', '%s comentários');
define('N_VIEWS', '%s visualizações');
define('N_VOTES', '(%s votos)');

// lang_smilies_inc_php
define('EXCLAMATION', 'Exclamação');
define('QUESTION', 'Questão');
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
define('EMBARASSED', 'Embaraçado');
define('CRYING OR VERY SAD', 'Muito triste');
define('EVIL OR VERY MAD', 'Muito máu');
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
define('ALB_NEED_NAME', 'Álbuns precisam ter um nome !');
define('CONFIRM_MODIFS', 'Tem certeza que deseja realizar as modificaçõs ?');
define('NO_CHANGE', 'Você não fêz nenhuma mudança  !');
define('NEW_ALBUM', 'Novo álbum');
define('CONFIRM_DELETE1', 'Tem certeza de querer remover este álbum ?');
define('CONFIRM_DELETE2', '\\nTodas as imagens e comentários serão perdidos !');
define('SELECT_FIRST', 'Primeiro selecione um álbum');
define('ALB_MRG', 'Gerenciador de álbuns');
define('MY_GALLERY', '* Minha Galeria *');
define('NO_CATEGORY', '* Sem categoria *');
define('DELETE', 'Apagar');
define('NEW', 'Novo');
define('APPLY_MODIFS', 'Aplicar modificações');
define('SELECT_CATEGORY', 'Selecione uma categoria');

// lang_catmgr_php
define('MISS_PARAM', 'Parametros requeridos para \'%s\'operação não fornecida !');
define('UNKNOWN_CAT', 'A ctegoria selecionada não existe em nossa base de dados');
define('USERGAL_CAT_RO', 'A categoria do usuário não pode ser excluída !');
define('MANAGE_CAT', 'Gerenciar categorias');
define('CONFIRM_DELETE', 'Você tem certeza que deseja EXCLUIR  esta categoria ? ');
define('CATEGORY', 'Categoria');
define('OPERATIONS', 'Operações');
define('MOVE_INTO', 'Mover em');
define('UPDATE_CREATE', 'Atualizar/Criar categoria');
define('PARENT_CAT', 'Categoria parente');
define('CAT_TITLE', 'Título da categoria');
define('CAT_DESC', 'Descrição da categoria');

// lang_config_php
define('TITLE', 'Configuração');
define('RESTORE_CFG', 'Restaurar configuração de fábrica');
define('SAVE_CFG', 'Salvar nova configuração');
define('NOTES', 'Notas');
define('INFO', 'Informação');
define('UPD_SUCCESS', 'Configuração do catálogo atualizada');
define('RESTORE_SUCCESS', 'Configuração de fábrica restaurada');
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
define('THEME', 'Theme');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
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
define('PIC_THUMB_SETTING_TITLE',  'Pictures and thumbnails settings');
define('JPEG_QUAL', 'Quality for JPEG files');
define('THUMB_WIDTH', 'Max dimension of a thumbnail <b>*</b>');
define('THUMB_USE', 'Use dimension ( width or height or Max aspect for thumbnail )<b>*</b>');
define('MAKE_INTERMEDIATE', 'Create intermediate pictures');
define('PICTURE_WIDTH', 'Max width or height of an intermediate picture <b>*</b>');
define('MAX_UPL_SIZE', 'Max size for uploaded pictures (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Max width or height for uploaded pictures (pixels)');
define('USER_SETTING_TITLE',   'User settings');
define('ALLOW_USER_REGISTRATION', 'Allow new user registrations');
define('REG_REQUIRES_VALID_EMAIL', 'User registration requires email verification');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Allow two users to have the same email address');
define('ALLOW_PRIVATE_ALBUMS', 'Users can can have private albums');
define('CUSTOM_FIELDS_TITLE', 'Custom fields for image description (leave blank if unused)');
define('USER_FIELD1_NAME', 'Field 1 name');
define('USER_FIELD2_NAME', 'Field 2 name');
define('USER_FIELD3_NAME', 'Field 3 name');
define('USER_FIELD4_NAME', 'Field 4 name');
define('58', 'Pictures and thumbnails advanced settings');
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
define('EMPTY_NAME_OR_COM', 'Você precisa definir um nome para o comentário');
define('COM_ADDED', 'Comentário adicionado');
define('ALB_NEED_TITLE', 'Você deve definir um nome para o álbum !');
define('NO_UDP_NEEDED', 'Atualização não necessária.');
define('ALB_UPDATED', 'Álbum atualizado');
define('UNKNOWN_ALBUM', 'O álbum selecionado não existe ou você não tem permissão para enviar imagens para ele');
define('NO_PIC_UPLOADED', 'Nenhuma imagem enviada !<br /><br />Se você realmente selecionaou ima imagem para enviar, verifique se o servidor permite envios...');
define('ERR_MKDIR', 'Falha ao criar diretório %s !');
define('DEST_DIR_RO', 'Diretório de destino %s não pode ser gravado pelo script !');
define('ERR_MOVE', 'Impossível mover %s para %s !');
define('ERR_FSIZE_TOO_LARGE', 'A imagem que você está tentando enviar é muito grande (máximo permitido %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'O tamanho da imagem é maior que o permitido (máximo permitido %s KB) !');
define('ERR_INVALID_IMG', 'O arquivo que você está tentando enviar não é um arquivo de imagem válido !');
define('ALLOWED_IMG_TYPES', 'Você só pode enviar %s imagens.');
define('ERR_INSERT_PIC', 'A imagem \'%s\' não pode ser inserida no álbum ');
define('UPLOAD_SUCCESS', 'Sua imagem foi enviada com sucesso<br /><br />Porém só será visível após a aprovação do Administrador.');
define('INFO', 'Informação');
define('ERR_COMMENT_EMPTY', 'Seu comentário está vazio !');
define('ERR_INVALID_FEXT', 'Somente os arquivos com as seguines extenções são permitidos : <br /><br />%s.');
define('NO_FLOOD', 'Desculpe mas você é o último autor a enviar um comentário<br /><br />Edite o comentário se deseja alterá-lo');
define('REDIRECT_MSG', 'Você está sendo redirecionado.<br /><br /><br />Clique \'CONTINUE\' se a página não se atualizar automaticamente');
define('UPL_SUCCESS', 'Sua imagem foi adicionada com sucesso');

// lang_delete_php
define('CAPTION', 'Sob-Título');
define('FS_PIC', 'tamanho total da imagem');
define('DEL_SUCCESS', 'removido com sucesso');
define('NS_PIC', 'tamanho normal da imagem');
define('ERR_DEL', 'não pode ser escluído');
define('THUMB_PIC', 'miniatura');
define('COMMENT', 'comentário');
define('IM_IN_ALB', 'imagem no álbum');
define('ALB_DEL_SUCCESS', 'Álbum \'%s\' REMOVIDO');
define('ALB_MGR', 'Gerenciador de álbuns');
define('ERR_INVALID_DATA', 'Dados recebidos inválidos \'%s\'');
define('CREATE_ALB', 'Criando álbuns \'%s\'');
define('UPDATE_ALB', 'Atualizando álbuns \'%s\' título \'%s\' índice \'%s\'');
define('DEL_PIC', 'Remover imagem');
define('DEL_ALB', 'Remover álbum');
define('DEL_USER', 'Remover usuário');
define('ERR_UNKNOWN_USER', 'O usuário selecionado não existe !');
define('COMMENT_DELETED', 'O comentário foi removido com sucesso');

// lang_display_image_php
define('CONFIRM_DEL', 'Tem certeza de EXCLUIR  esta imagem ? \\nComentários vinculados também serão excluídos.');
define('DEL_PIC', 'DELETE THIS PICTURE');
define('SIZE', '%s x %s pixels');
define('VIEWS', '%s vezes');
define('SLIDESHOW', 'Slideshow');
define('STOP_SLIDESHOW', 'PARAR SLIDESHOW');
define('VIEW_FS', 'Clique para ver a ampliação da imagem');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('TITLE', 'INFORMAÇÕES DA IMAGEM');
define('FILENAME', 'Nome');
define('ALBUM NAME', 'Álbum');
define('RATING', 'Classificação (%s votos)');
define('KEYWORDS', 'Palavras-chave');
define('FILE SIZE', 'Tamanho do arquivo');
define('DIMENSIONS', 'Dimensões');
define('DISPLAYED', 'Mostrado');
define('CAMERA', 'Camera');
define('DATE TAKEN', 'Data');
define('APERTURE', 'Abertura');
define('EXPOSURE TIME', 'Tempo de exposição');
define('FOCAL LENGTH', 'Largura focal');
define('COMMENT', 'Comentário');
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
define('EDIT_TITLE', 'Editar este comentário');
define('CONFIRM_DELETE', 'Tem certeza de REMOVER este comentário ?');
define('ADD_YOUR_COMMENT', 'Adicione seu comentário');
define('NAME', 'Name');
define('COMMENT', 'Comment');
define('YOUR_NAME', 'Seu nome');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Click image to close this window');

// lang_ecard_php
define('TITLE', 'Send an e-card');
define('INVALID_EMAIL', '<b>Warning</b> : endereço eletrônico inválido !');
define('ECARD_TITLE', 'Há um e-card %s para você');
define('VIEW_ECARD', 'Se não estiver aparecendo normalmente clique neste link');
define('VIEW_MORE_PICS', 'Clique aqui para ver mais imagens !');
define('SEND_SUCCESS', 'Seu e-card foi enviado');
define('SEND_FAILED', 'Desculpe, mas o servidor não pode enviar seu e-card...');
define('FROM', 'Remetente');
define('YOUR_NAME', 'Seu nome');
define('YOUR_EMAIL', 'Seu e-amil');
define('TO', 'Para');
define('RCPT_NAME', 'Destinatário');
define('RCPT_EMAIL', 'E-mail do destinatário');
define('GREETINGS', 'Saudações');
define('MESSAGE', 'Mensagem');

// lang_editpics_php
define('PIC_INFO', 'Picture&nbsp;info');
define('ALBUM', 'Álbum');
define('TITLE', 'Título');
define('DESC', 'Descrição');
define('KEYWORDS', 'Palavras-chave');
define('PIC_INFO_STR', '%sx%s - %sKB - %s views - %s votes');
define('APPROVE', 'Aprovar imagem');
define('POSTPONE_APP', 'Postpone approval');
define('DEL_PIC', 'Apagar imagem');
define('RESET_VIEW_COUNT', 'Zerar contador');
define('RESET_VOTES', 'Zerar votos');
define('DEL_COMM', 'Excluir comentários');
define('UPL_APPROVAL', 'Aprovar envio');
define('EDIT_PICS', 'Editar imagens');
define('SEE_NEXT', 'Ver próximas imagens');
define('SEE_PREV', 'Ver imagens anteriores');
define('N_PIC', '%s imagens');
define('N_OF_PIC_TO_DISP', 'Número de imagens a mostrar');
define('APPLY', 'Aplicar modificações');

// lang_groupmgr_php
define('GROUP_NAME', 'Nome do Grupo');
define('DISK_QUOTA', 'Quota de disco');
define('CAN_RATE', 'Pode avaliar imagens');
define('CAN_SEND_ECARDS', 'Pode enviar e-cards');
define('CAN_POST_COM', 'Pode enviar comentários');
define('CAN_UPLOAD', 'Pode enviar imagens');
define('CAN_HAVE_GALLERY', 'Pode ter uma galeria pessoal');
define('APPLY', 'Aplicar modificações');
define('CREATE_NEW_GROUP', 'Criar novo grupo');
define('DEL_GROUPS', 'Apagar grupo(s) selecionado(s)');
define('CONFIRM_DEL', 'CUIDADO: Ao remover um grupo seu conteúdo será transferido para \'Registered\' !\\n\\nquer continuar ?');
define('TITLE', 'Gerenciar grupos');
define('APPROVAL_1', 'Aprovação pública (1)');
define('APPROVAL_2', 'Aaprovação privada (2)');
define('NOTE1', '<b>(1)</b> Envios para um álbum público requerem aprovação do administrador');
define('NOTE2', '<b>(2)</b> Envios requerem aprovação do administrador');
define('NOTES', 'Notas');

// lang_index_php
define('WELCOME', 'Welcome !');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Tem certeza que deseja EXCLUIR este álbum ? \\nTodas as imagens e comentários serão excluídos.');
define('DELETE', 'EXCLUIR');
define('MODIFY', 'PROPRIEDADES');
define('EDIT_PICS', 'EDITAR IMAGENS');

// lang_list_categories
define('HOME', 'Home');
define('STAT1', '<b>[pictures]</b> imagens em <b>[albums]</b> álbuns e <b>[cat]</b> categorias com <b>[comments]</b> comentários vistos <b>[views]</b> vezes');
define('STAT2', '<b>[pictures]</b> imagens em <b>[albums]</b> álbuns vistos <b>[views]</b> vezes');
define('XX_S_GALLERY', '%s\'s Galeria');
define('STAT3', '<b>[pictures]</b> imagens em <b>[albums]</b> álbuns com <b>[comments]</b> comentários vistos <b>[views]</b> vezes');

// lang_list_users
define('USER_LIST', 'Lista de usuários');
define('NO_USER_GAL', 'Nenhum usuário permitido a ter álbuns');
define('N_ALBUMS', '%s álbum(s)');
define('N_PICS', '%s imagem(s)');

// lang_list_albums
define('N_PICTURES', '%s imagem');
define('LAST_ADDED', ', último adicionado em %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Atualizar álbum %s');
define('GENERAL_SETTINGS', 'Configurações gerais');
define('ALB_TITLE', 'Título do álbum');
define('ALB_CAT', 'Categoria do álbum');
define('ALB_DESC', 'Descrição do álbum');
define('ALB_THUMB', 'Miniatura do álbum');
define('ALB_PERM', 'Permissões para este álbum');
define('CAN_VIEW', 'Álbum pode ser visto por');
define('CAN_UPLOAD', 'Visitantes podem enviar imagens');
define('CAN_POST_COMMENTS', 'Visitantes podem enviar comentários');
define('CAN_RATE', 'Visitantes podem avaliar imagens');
define('USER_GAL', 'Galeria do Usuário');
define('NO_CAT', '* Sem categoria *');
define('ALB_EMPTY', 'Álbum vazio');
define('LAST_UPLOADED', 'Último envio');
define('PUBLIC_ALB', 'Todos (album público)');
define('ME_ONLY', 'Apenas eu');
define('OWNER_ONLY', 'Proprietário (%s) apenas');
define('GROUPP_ONLY', 'Membros do  grupo\'%s\' ');
define('ERR_NO_ALB_TO_MODIFY', 'Nenhum album que você pode modificar na base de dados .');
define('UPDATE', 'Atualizar álbum');

// lang_rate_pic_php
define('ALREADY_RATED', 'Desculpe, mas você ja avaliou esta imagem');
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
define('PAGE_TITLE', 'REGISTRO DE USUÁRIO');
define('TERM_COND', 'Termos e condições');
define('I_AGREE', 'Eu Aceito');
define('SUBMIT', 'enviar registro');
define('ERR_USER_EXISTS', 'Este nome de usuário já existe, por favor crie outro');
define('ERR_PASSWORD_MISMATCH', 'As duas senhas digitadas não conferem. Digite com cuidado novamente');
define('ERR_UNAME_SHORT', 'Nome de usuário precisa ter no mínimo 2 caracteres');
define('ERR_PASSWORD_SHORT', 'sua senha tem que ter no mínimo 2 caracteres');
define('ERR_UNAME_PASS_DIFF', 'Nome de usuário e senha devem ser diferentes');
define('ERR_INVALID_EMAIL', 'Endereço de e-mail inválido');
define('ERR_DUPLICATE_EMAIL', 'Já existe outro usuário registrado com este e-mail');
define('ENTER_INFO', 'Entre com as informações de registro');
define('REQUIRED_INFO', 'Informação requerida');
define('OPTIONAL_INFO', 'Informação opcional');
define('USERNAME', 'Usuário');
define('PASSWORD', 'Senha');
define('PASSWORD_AGAIN', 'Repita a senha');
define('EMAIL', 'E-mail');
define('LOCATION', 'Endereço');
define('INTERESTS', 'Interesses');
define('WEBSITE', 'Home page');
define('OCCUPATION', 'Profissão');
define('ERROR', 'ERRO');
define('CONFIRM_EMAIL_SUBJECT', '%s - CONFIRMAÇÃO DE REGISTRO');
define('INFORMATION', 'Informação');
define('FAILED_SENDING_EMAIL', 'O e-mail de confirmação de registro não pôde ser enviado !');
define('THANK_YOU', 'Obrigado pr se registrar.<br /><br />As informações para finalizar seu registro foram enviadas para seu e-mail. Verifique agora ou aguarde uns instantes.');
define('ACCT_CREATED', 'Sua conta foi criada. Para acessar o catálogo você deve fornecer seu nome de usuário e sua senha');
define('ACCT_ACTIVE', 'Sua conta já está ativa. Entre com seu nome de usuário e senha para acessar os dados do catálogo');
define('ACCT_ALREADY_ACT', 'Sua conta já está ativa !');
define('ACCT_ACT_FAILED', 'Esta conta não está ativa ainda !');
define('ERR_UNK_USER', 'Usuário selecionado não existe !');
define('X_S_PROFILE', '%s\'s profile');
define('GROUP', 'Grupo');
define('REG_DATE', 'PArticipante');
define('DISK_USAGE', 'Uso do disco');
define('CHANGE_PASS', 'Alterar minha senha');
define('CURRENT_PASS', 'Senha atual');
define('NEW_PASS', 'Nova senha');
define('NEW_PASS_AGAIN', 'Nova senha de novo');
define('ERR_CURR_PASS', 'Senha atual INCORRETA');
define('APPLY_MODIF', 'Aplicar modificações');
define('UPDATE_SUCCESS', 'Seus dados foram atualizadsos');
define('PASS_CHG_SUCCESS', 'Sua senha foi alterada');
define('PASS_CHG_ERROR', 'Sua senha não foi alterada');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Thank you for registering at {SITE_NAME}

Seu nome de usuário é : "{USER_NAME}"
Sua senha é : "{PASSWORD}"

Clique no link abaixo ou copie e cole no seu Browser para acessar nosso catálogo

{ACT_LINK}

Obrigado pela inscrição,

O Administrador
{SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', 'Revisar comentários');
define('NO_COMMENT', 'Não há comentários para revisar');
define('N_COMM_DEL', '%s comentário(s) removido');
define('N_COMM_DISP', 'Número de comentários ');
define('SEE_PREV', 'Ver anterior');
define('SEE_NEXT', 'Ver próximo');
define('DEL_COMM', 'Excluir comentários selecionados');

// lang_search_php
define('SEARCH', 'Pesquisar na coleção de imagens');

// lang_search_new_php
define('PAGE_TITLE', 'Pesquisar novas imagens');
define('SELECT_DIR', 'Selecionar diretório');
define('SELECT_DIR_MSG', 'Esta função lhe permite enviar diversas imagens ao mesmo tempo.<br /><br />Selecione o diretório das imagens');
define('NO_PIC_TO_ADD', 'Não há imagens para enviar');
define('NEED_ONE_ALBUM', 'Você precisater pelo menus um álbum para usar esta função');
define('WARNING', 'CUIDADO');
define('CHANGE_PERM', 'O script não pode gravar neste diretório que deve possuir permissão 755 ou 777 !');
define('TARGET_ALBUM', '<b>Colocar imagens do &quot;</b>%s<b>&quot; em </b>%s');
define('FOLDER', 'Pasta');
define('IMAGE', 'Imagem');
define('ALBUM', 'Álbum');
define('RESULT', 'Resultado');
define('DIR_RO', 'Não gravável. ');
define('DIR_CANT_READ', 'Não pode ser lido. ');
define('INSERT', 'Adicionando novas imagens à galeria');
define('LIST_NEW_PIC', 'Lista das novas imagens');
define('INSERT_SELECTED', 'Inserir imagens selecionadas');
define('NO_PIC_FOUND', 'Não há imagens novas');
define('BE_PATIENT', 'Por favoe tenha paciência. O sistema nescessita de tempo para enviar suas imagens');
define('NOTES', '<ul><li><b>OK</b> : Significa que foi enviado com sucesso<li><b>DP</b> : Significa que existe uma duplicata na base de datos<li><b>PB</b> : significa que não pôde ser enviado. Verifique suas permissões e corretos endereços.<li>Se o OK, DP, PB \'signs\' não aparecem, clique na imagem com problema para receber a mensagem do erro<li>Se receber mensagem de expiração, acione reload</ul>');

// lang_upload_php
define('TITLE', 'envio de imagem');
define('MAX_FSIZE', 'Tamanho máximo permitido %s KB');
define('ALBUM', 'Álbum');
define('PICTURE', 'Imagem');
define('PIC_TITLE', 'Título');
define('DESCRIPTION', 'Descrição');
define('KEYWORDS', 'Palavras-chave (separar somente com espaços)');
define('ERR_NO_ALB_UPLOADABLES', 'desculpe. Você não está autorizado a enviar para este álbum');

// lang_usermgr_php
define('TITLE', 'Gerenciar usuários');
define('NAME_A', 'Nome Ascendente');
define('NAME_D', 'Nome Descendente');
define('GROUP_A', 'Grupo Ascendente');
define('GROUP_D', 'Grupo Descendente');
define('REG_A', 'Data de registro Ascendente');
define('REG_D', 'Data de registro Descendente');
define('PIC_A', 'Contagem de imagens ascendente');
define('PIC_D', 'Constagem de imagem descendente');
define('DISKU_A', 'Uso de disco ascendente');
define('DISKU_D', 'Uso de disco descendente');
define('SORT_BY', 'Listar usuários por');
define('ERR_NO_USERS', 'Tabela de usuários está vazia !');
define('ERR_EDIT_SELF', 'Você não pode alterar os dados \'My profile\' ');
define('EDIT', 'EDITAR');
define('DELETE', 'EXCLUIR');
define('NAME', 'Usuário');
define('GROUP', 'Grupo');
define('INACTIVE', 'Inativo');
define('OPERATIONS', 'Operações');
define('PICTURES', 'Imagens');
define('DISK_SPACE', 'Espaço usado / Quota');
define('REGISTERED_ON', 'Registrado on');
define('U_USER_ON_P_PAGES', '%d usuários em %d página(s)');
define('CONFIRM_DEL', 'Tem certeza que quer EXCLUIR este usuário ? \\nTodas as imagens e álbuns dele serão removidas.');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'Usuário selecionado não existe !');
define('MODIFY_USER', 'Modificar usuário');
define('NOTES', 'Notas');
define('NOTE_LIST', '<li>Se você não quer alterar sua senha, deixe o campo em branco');
define('PASSWORD', 'Senha');
define('USER_ACTIVE', 'Usuário é ativo');
define('USER_GROUP', 'GBrupo de usuários');
define('USER_EMAIL', 'E-mail do usuário');
define('USER_WEB_SITE', 'Site do usuário');
define('CREATE_NEW_USER', 'Criar novo usuário');
define('USER_FROM', 'Endereço');
define('USER_INTERESTS', 'Interesse');
define('USER_OCC', 'Ocupação');

// lang_util_php
define('TITLE', 'Resize pictures');
define('WHAT_IT_DOES', 'What it does');
define('WHAT_UPDATE_TITLES', 'Updates titles from filename');
define('WHAT_DELETE_TITLE', 'Deletes titles');
define('WHAT_REBUILD', 'Rebuilds thumbnails and resized photos');
define('WHAT_DELETE_ORIGINALS', 'Deletes original sized photos replacing them with the sized version');
define('FILE', 'File');
define('TITLE_SET_TO', 'title set to');
define('SUBMIT_FORM', 'submit');
define('UPDATED_SUCCESFULLY', 'updated succesfully');
define('ERROR_CREATE', 'ERROR creating');
define('CONTINUE', 'Process more images');
define('MAIN_SUCCESS', 'The file %s was successfully used as main picture');
define('ERROR_RENAME', 'Error renaming %s to %s');
define('ERROR_NOT_FOUND', 'The file %s was not found');
define('BACK', 'back to main');
define('THUMBS_WAIT', 'Updating thumbnails and/or resized images, please wait...');
define('THUMBS_CONTINUE_WAIT', 'Continuing to update thumbnails and/or resized images...');
define('TITLES_WAIT', 'Updating titles, please wait...');
define('DELETE_WAIT', 'Deleting titles, please wait...');
define('REPLACE_WAIT', 'Deleting originals and replacing them with resized images, please wait..');
define('INSTRUCTION', 'Quick instructions');
define('INSTRUCTION_ACTION', 'Select action');
define('INSTRUCTION_PARAMETER', 'Set parameters');
define('INSTRUCTION_ALBUM', 'Select album');
define('INSTRUCTION_PRESS', 'Press %s');
define('UPDATE', 'Update thumbs and/or resized photos');
define('UPDATE_WHAT', 'What should be updated');
define('UPDATE_THUMB', 'Only thumbnails');
define('UPDATE_PIC', 'Only resized pictures');
define('UPDATE_BOTH', 'Both thumbnails and resized pictures');
define('UPDATE_NUMBER', 'Number of processed images per click');
define('UPDATE_OPTION', '(Try setting this option lower if you experience timeout problems)');
define('FILENAME_TITLE', 'Filename ? Picture title');
define('FILENAME_HOW', 'How should the filename be modified');
define('FILENAME_REMOVE', 'Remove the .jpg ending and replace _ (underscore) with spaces');
define('FILENAME_EURO', 'Change 2003_11_23_13_20_20.jpg to 23/11/2003 13:20');
define('FILENAME_US', 'Change 2003_11_23_13_20_20.jpg to 11/23/2003 13:20');
define('FILENAME_TIME', 'Change 2003_11_23_13_20_20.jpg to 13:20');
define('DELETE', 'Delete picture titles or original size photos');
define('DELETE_TITLE', 'Delete picture titles');
define('DELETE_ORIGINAL', 'Delete original size photos');
define('DELETE_REPLACE', 'Deletes the original images replacing them with the sized versions');
define('SELECT_ALBUM', 'Select album');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>