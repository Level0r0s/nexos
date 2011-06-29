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
/*   $Id: lang-portuguese.php,v 1.1 2004/08/04 05:35:34 djmaze Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Portuguese');
define('LANG_NAME_NATIVE', 'Portugu&ecirc;s');
define('LANG_COUNTRY_CODE', 'pt');
define('TRANS_NAME', 'Luis Rebelo (lineartube)');
define('TRANS_EMAIL', 'coppermine@luisrebelo.net');
define('TRANS_WEBSITE', 'http://www.luisrebelo.net/');
define('TRANS_DATE', '2003-10-21');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'ISO-8859-1');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'Sim');
define('NO', 'Não');

// some common strings
define('BACK', 'ATRÁS');
define('CONTINUE', 'CONTINUAR');
define('INFO', 'Informação');
define('ERROR', 'Erro');

//// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
define('ALBUM_DATE_FMT', '%d de %B de %Y');
define('LASTCOM_DATE_FMT', '%d/%m/%y às %H:%M');
define('LASTUP_DATE_FMT', '%d de %B de %Y');
define('REGISTER_DATE_FMT', '%d de %B de %Y');
define('LASTHIT_DATE_FMT', '%d de %B de %Y às %I:%M %p');
define('COMMENT_DATE_FMT', '%d de %B de %Y às %I:%M %p');

// short names for Byte, Kilo, Mega
$lang_byte_units = array('Bytes','KB','MB',);

// Day of week
$lang_day_of_week = array('Dom','Seg','Ter','Qua','Qui','Sex','Sab',);
// Day of the month
$lang_month = array('Jan','Feb','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez',);
// For the word censor
$lang_bad_words = array('foda-se','cara de cu','paneleiro','puta','caralho','cona','picha','merda','penis','mamas',);
// lang_meta_album_names
define('RANDOM', 'Fotos aleatórias');
define('LASTUP', 'Últimas fotos');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Last updated albums');
define('LASTCOM', 'Últimos comentários');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Mais vistas');
define('TOPRATED', 'Melhor Classificadas');
define('LASTHITS', 'Últimas vistas');
define('SEARCH', 'Resultado da procura');
define('FAVPICS', 'Fotos favoritas');

// lang_errors
define('ACCESS_DENIED', 'Não tem permissão para aceder a esta página.');
define('PERM_DENIED', 'Não tem permissão para efectuar esta operação.');
define('PARAM_MISSING', 'Chamada do Script sem os parametros requeridos.');
define('NON_EXIST_AP', 'O(A) album/foto seleccionado(a) não existe!');
define('QUOTA_EXCEEDED', 'Quota de disco excedida<br /><br />Tem uma quota de disco de [quota]K, as suas fotos actualmente ocupam [space]K, e atendendo a esta foto exceder­as a quota.');
define('GD_FILE_TYPE_ERR', 'Quando se usa a biblioteca de imagem GD são permitidos somente os tipos JPEG e PNG.');
define('INVALID_IMAGE', 'A imagem que enviou está corrompida ou não pode ser tratada pela biblioteca GD.');
define('RESIZE_FAILED', 'Incapaz de criar thumbnail ou imagem de tamanho reduzido.');
define('NO_IMG_TO_DISPLAY', 'Nenhuma imagem para mostrar.');
define('NON_EXIST_CAT', 'A categoria seleccionada não existe.');
define('ORPHAN_CAT', 'Uma categoria não tem parente. Execute a opção \"Categorias\" para corrigir este problema.');
define('DIRECTORY_RO', 'O directório \'%s\' não tem permissões de escrita, e por isso as fotos não podem ser apagadas.');
define('NON_EXIST_COMMENT', 'O comentário seleccionado não existe.');
define('PIC_IN_INVALID_ALBUM', 'Â¿Â¡A foto está num album que não existe (%s)!?');
define('BANNED', 'Você encontra-se banido de utilizar este website.');
define('NOT_WITH_UDB', 'esta função está desactivada no Coppermine porque está integrada no software do forum. Ou o que está a tentar fazer não é suportado nesta configuração ou a função deveria ser lidada pelo o software do forum.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', 'Ir para a lista de albuns');
define('ALB_LIST_LNK', 'Lista de albuns');
define('MY_GAL_TITLE', 'Ir para galeria pessoal');
define('MY_GAL_LNK', 'A minha galeria');
define('MY_PROF_LNK', 'O meu perfil de utilizador');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Ir para modo administrador');
define('ADM_MODE_LNK', 'Modo administrador');
define('USR_MODE_TITLE', 'Ir para modo utilizador');
define('USR_MODE_LNK', 'Modo utilizador');
define('UPLOAD_PIC_TITLE', 'Inserir foto num album');
define('UPLOAD_PIC_LNK', 'Inserir foto');
define('REGISTER_TITLE', 'Criar um utilizador');
define('REGISTER_LNK', 'Registar-se');
define('LOGIN_LNK', 'Login');
define('LOGOUT_LNK', 'Logout');
define('LASTUP_LNK', 'Últimas fotos');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Últimos comentários');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Mais vistas');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Melhor Classificadas');
define('SEARCH_LNK', 'Procurar');
define('FAV_LNK', 'Favoritas');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu

define('UPL_APP_LNK', 'Aprovar Uploads');
define('CONFIG_LNK', 'Configuração');
define('ALBUMS_LNK', 'Álbuns');
define('CATEGORIES_LNK', 'Categorias');
define('USERS_LNK', 'Utilizadores');
define('GROUPS_LNK', 'Grupos');
define('COMMENTS_LNK', 'Comentários');
define('SEARCHNEW_LNK', 'Adicionar fotos (em série)');
define('UTIL_LNK', 'Redimensionar imagens');
define('BAN_LNK', 'Banir utilizadores');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Criar / ordenar álbuns');
define('MODIFYALB_LNK', 'Modificar meus álbuns');
define('MY_PROF_LNK', 'O meu perfil de utilizador');

// lang_cat_list
define('CATEGORY', 'Categoria');
define('ALBUMS', 'Álbuns');
define('PICTURES', 'Fotos');

// lang_album_list
define('ALBUM_ON_PAGE', '%d álbuns na(s) %d página(s)');

// lang_thumb_view
define('DATE', 'DATA');
define('NAME', 'NOME');
define('TITLE', 'TÍTULO');
define('SORT_DA', 'Ordenado por data ascendente');
define('SORT_DD', 'Ordenado por data descendente');
define('SORT_NA', 'Ordenado por nome ascendente');
define('SORT_ND', 'Ordenado por nome descendente');
define('SORT_TA', 'Ordenado por título ascendente');
define('SORT_TD', 'Ordenado por título descendente');
define('PIC_ON_PAGE', '%d foto(s) na(s) %d página(s)');
define('USER_ON_PAGE', '%d utilizadore(s) na(s) %d página(s)');
define('SORT_RA', 'Sort by rating ascending');
define('SORT_RD', 'Sort by rating descending');
define('RATING', 'RATING');
define('SORT_TITLE', 'Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Voltar ao Índice do álbum');
define('PIC_INFO_TITLE', 'Mostrar/ocultar informação da foto');
define('SLIDESHOW_TITLE', 'Slideshow');
define('SLIDESHOW_DISABLED', 'e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'Enviar esta foto a um amigo');
define('ECARD_DISABLED', 'Envio de fotos desativado');
define('ECARD_DISABLED_MSG', 'Não tem permissão para enviar fotos');
define('PREV_TITLE', 'Ver foto anterior');
define('NEXT_TITLE', 'Ver foto siguinte');
define('PIC_POS', 'FOTO %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', 'Classificar esta foto ');
define('NO_VOTES', '(Não há votos)');
define('RATING', '(Nota actual : %s / 5 com %s votos)');
define('RUBBISH', 'Muito Fraca');
define('POOR', 'Fraca');
define('FAIR', 'Normal');
define('GOOD', 'Boa');
define('EXCELLENT', 'Excelente');
define('GREAT', 'Genial');

// lang_cpg_die
define('INFORMATION', 'Informação');
define('ERROR', 'Erro');
define('CRITICAL_ERROR', 'Error crítico');
define('FILE', 'Ficheiro: ');
define('LINE', 'Linha: ');

// lang_display_thumbnails
define('FILENAME', 'Ficheiro: ');
define('FILESIZE', 'Tamanho: ');
define('DIMENSIONS', 'Dimensões: ');
define('DATE_ADDED', 'Adicionado em: ');

// lang_get_pic_data
define('N_COMMENTS', '%s comentários');
define('N_VIEWS', '%s vezes vista');
define('N_VOTES', '(%s votos)');

// lang_smilies_inc_php
define('EXCLAMATION', 'Exclamação');
define('QUESTION', 'Questão');
define('VERY HAPPY', 'Muito Contente');
define('SMILE', 'Sorriso');
define('SAD', 'Triste');
define('SURPRISED', 'Surpreendido');
define('SHOCKED', 'Chocado');
define('CONFUSED', 'Confuso');
define('COOL', 'Cool');
define('LAUGHING', 'A rir');
define('MAD', 'Louco');
define('RAZZ', 'Razz');
define('EMBARASSED', 'Embaraçado');
define('CRYING OR VERY SAD', 'Muito triste');
define('EVIL OR VERY MAD', 'Mau');
define('TWISTED EVIL', 'Muito Mau');
define('ROLLING EYES', 'Enojado');
define('WINK', 'Piscar o olho');
define('IDEA', 'Ideia');
define('ARROW', 'Seta');
define('NEUTRAL', 'Neutro');
define('MR. GREEN', 'Sr. Verde');

// lang_admin_php
define('LV_ADMIN', 'A sair do modo administrador...');
define('ENT_ADMIN', 'A entrar no modo administrador...');

// lang_albmgr_php
define('ALB_NEED_NAME', 'Os álbuns deven ter um nome!');
define('CONFIRM_MODIFS', 'Tem a certeza que quer efectuar estas alterações?');
define('NO_CHANGE', 'Não foi efectuada nenhuma alteração!');
define('NEW_ALBUM', 'Novo álbum');
define('CONFIRM_DELETE1', 'Tem a certeza que quer apagar este álbum?');
define('CONFIRM_DELETE2', 'Todas as fotos e comentários irão perder-se!');
define('SELECT_FIRST', 'Selecione primeiro um álbum');
define('ALB_MRG', 'Administrador de Albuns');
define('MY_GALLERY', '* Minha galeria *');
define('NO_CATEGORY', '* Sem categoria *');
define('DELETE', 'Apagar');
define('NEW', 'Novo');
define('APPLY_MODIFS', 'Aplicar modificações');
define('SELECT_CATEGORY', 'Seleccionar categoria');

// lang_catmgr_php
define('MISS_PARAM', 'Os parâmetros requeridos para a operação : \'%s\' não foram fornecidos!');
define('UNKNOWN_CAT', 'A categoria seleccionada não existe na base de dados');
define('USERGAL_CAT_RO', 'As categorias de galerias de utilizador não podem ser apagadas!');
define('MANAGE_CAT', 'Gestor de categorias');
define('CONFIRM_DELETE', 'Tem a certeza que quer apagar esta categoria');
define('CATEGORY', 'Categoria');
define('OPERATIONS', 'Operações');
define('MOVE_INTO', 'Mover para');
define('UPDATE_CREATE', 'Modificar/Criar categoria');
define('PARENT_CAT', 'Categoria parente');
define('CAT_TITLE', 'Título da categoria');
define('CAT_DESC', 'Descrição da categoria');

// lang_config_php
define('TITLE', 'Configuração');
define('RESTORE_CFG', 'Restaurar valores por defeito');
define('SAVE_CFG', 'Guardar a nova configuração');
define('NOTES', 'Notas');
define('INFO', 'Informação');
define('UPD_SUCCESS', 'A configuração da Coppermine foi actualizada');
define('RESTORE_SUCCESS', 'Valores por defeito da Coppermine restaurados');
define('NAME_A', 'Ascendente por nome');
define('NAME_D', 'Descendente por nome');
define('TITLE_A', 'Ascendente por título');
define('TITLE_D', 'Descendente por título');
define('DATE_A', 'Ascendente por data');
define('DATE_D', 'Descendente por data');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Height');
define('TH_WD', 'Width');

// lang_config_data
define('CONFIG_GENSET', 'Parâmetros Gerais');
define('GALLERY_NAME', 'Nome da galeria');
define('GALLERY_DESCRIPTION', 'Descrição da galeria');
define('GALLERY_ADMIN_EMAIL', 'Correio electrónico do administrador');
define('ECARDS_MORE_PIC_TARGET', 'Address to nuke folder ie http://www.mysite.tld/html/');
define('LANG', 'Linguagem');
define('CPGTHEME', 'Tema (aspecto)');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'Aspecto da lista de álbuns');
define('MAIN_TABLE_WIDTH', 'Largura da tabela principal (pixels o %)');
define('SUBCAT_LEVEL', 'Número de níveis de categorias a mostrar');
define('ALBUMS_PER_PAGE', 'Número de álbuns a mostrar');
define('ALBUM_LIST_COLS', 'Número de colunas na lista de álbuns');
define('ALB_LIST_THUMB_SIZE', 'Tamanho dos thumbnails em pixeis');
define('MAIN_PAGE_LAYOUT', 'Conteúdo da página principal');
define('FIRST_LEVEL', 'Mostrar thumbnails de primeiro nível nas categorias');
define('THUMB_VIEW_TITLE', 'Aspecto da vista de Thumbnails');
define('THUMBCOLS', 'Número de colunas na página de thumbnails');
define('THUMBROWS', 'Número de linha na página de thumbnails');
define('MAX_TABS', 'Máximo número de tabs a mostrar');
define('CAPTION_IN_THUMBVIEW', 'Mostrar captura de imagem (além do título) debaixo do thumbnail');
define('DISPLAY_COMMENT_COUNT', 'Mostrar o número de comentários por debaixo do thumbnail');
define('DEFAULT_SORT_ORDER', 'Ordem por defeito das fotos');
define('MIN_VOTES_FOR_RATING', 'Mínimo número de votos para que uma foto apareça na lista das mais votadas');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'Vista da foto e Configuração de comentários');
define('PICTURE_TABLE_WIDTH', 'Largura da tabela onde mostra a foto (pixels ou %)');
define('DISPLAY_PIC_INFO', 'Informação da foto visível por defeito');
define('FILTER_BAD_WORDS', 'Filtrar palavras impróprias nos comentários');
define('ENABLE_SMILIES', 'Permitir Emoticons nos comentários');
define('DISABLE_FLOOD_PROTECTION', 'Allow several consecutive comments on one pic from the same user');
define('COMMENT_EMAIL_NOTIFICATION', 'Email site admin upon comment submission');
define('MAX_IMG_DESC_LENGTH', 'Tamanho máximo da descrição de uma foto');
define('MAX_COM_WLENGTH', 'Número máximo de caracteres numa palavra');
define('MAX_COM_LINES', 'Número máximo de linhas num comentário');
define('MAX_COM_SIZE', 'Tamanho máximo de um comentário');
define('DISPLAY_FILM_STRIP', 'Mostrar película de filme');
define('MAX_FILM_STRIP_ITEMS', 'número de items na película de filme');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', 'Configuração das fotos e thumbnails');
define('JPEG_QUAL', 'Qualidade dos ficheros JPEG <b>*</b>');
define('THUMB_WIDTH', 'Dimensão máxima de um thumbnail <b>*</b>');
define('THUMB_USE', 'Usar dimensão ( largura, altura ou aspecto máximo para o thumbnail )');
define('MAKE_INTERMEDIATE', 'Criar fotos de tamanho intermédio');
define('PICTURE_WIDTH', 'Largura máxima das fotos de tamanho intermédio <b>*</b>');
define('MAX_UPL_SIZE', 'Tamanho máximo das fotos de utilizadores por upload (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Dimensões máximas das fotos de utilizadores por upload (pixeis)');
define('USER_SETTING_TITLE', 'Configuração de utilizadores');
define('ALLOW_USER_REGISTRATION', 'Permitir o registo de novos utilizadores');
define('REG_REQUIRES_VALID_EMAIL', 'Registo de utilizadores requer verificação de e-mail');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Permitir a dois utilizadores terem o mesmo e-mail');
define('ALLOW_PRIVATE_ALBUMS', 'Os utilizadores poden ter álbuns privados');
define('CUSTOM_FIELDS_TITLE', 'Campos extra para descrição de fotos (dejar en blanco si no los usas)');
define('USER_FIELD1_NAME', 'Nome do campo 1');
define('USER_FIELD2_NAME', 'Nome do campo 2');
define('USER_FIELD3_NAME', 'Nome do campo 3');
define('USER_FIELD4_NAME', 'Nome do campo 4');
define('PIC_ADV_SETTING_TITLE', 'Configuração avançada de fotos e thumbnails');
define('SHOW_PRIVATE', 'Mostrar icon de album privado ao utilzador não-registado');
define('FORBIDEN_FNAME_CHAR', 'Caracteres proíbidos nos nomes das fotos');
define('ALLOWED_FILE_EXTENSIONS', 'Extenções de ficheiros admitidas nos uploads');
define('THUMB_METHOD', 'Método para organização das fotos');
define('IMPATH', 'caminho da ferramenta ImageMagick (por exemplo /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Tipos de ficheiros admitidos (válidos somente com a ImageMagick)');
define('IM_OPTIONS', 'Comandos de linha para a ImageMagick');
define('READ_EXIF_DATA', 'Ler dados EXIF em ficheiros do tipo JPEG');
define('READ_IPTC_DATA', 'Read IPTC data in JPEG files');
define('FULLPATH', 'Directório base dos álbuns <b>*</b>');
define('USERPICS', 'Directório para as fotos submetidas pelos usuários <b>*</b>');
define('NORMAL_PFX', 'Prefixo para as fotos de tamanho intermédio <b>*</b>');
define('THUMB_PFX', 'Prefixo para os thumbnails <b>*</b>');
define('DEFAULT_DIR_MODE', 'Permissões por defeito dos directórios');
define('DEFAULT_FILE_MODE', 'Permissões por defeito para as fotos');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', 'Configuração de cookies e Conjunto de Caracteres');
define('COOKIE_NAME', 'Nome dos cookies usados pelo script');
define('COOKIE_PATH', 'Caminho dos cookies usados pelo script');
define('CHAR_SET', 'Conjunto de caracteres');
define('MISC_SETTING_TITLE', 'Outras Configurações');
define('DEBUG_MODE', 'Activar modo debug');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) Os campos marcados com * não devem ser substituídos se já existem fotos nas galeri­as</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Tem de inserir o seu nome e um comentário');
define('COM_ADDED', 'Comentário adicionado');
define('ALB_NEED_TITLE', 'Tem de introduzir um título para o album!');
define('NO_UDP_NEEDED', 'Não é necessária nenhuma alteração');
define('ALB_UPDATED', 'Album actualizado');
define('UNKNOWN_ALBUM', 'O album seleccionado não existe ou não tem permissão para adicionar fotos neste album');
define('NO_PIC_UPLOADED', 'Nenhuma foto foi adicionada!<br /><br />Se seleccionou uma foto para adicionar, verifique se o servidor admite o upload de ficheiros...');
define('ERR_MKDIR', 'Erro ao criar o(s) directório(s)!');
define('DEST_DIR_RO', 'O(s) directório(s) destino não tem permissões de escrita!');
define('ERR_MOVE', 'Impossível mover %s a %s !');
define('ERR_FSIZE_TOO_LARGE', 'O tamanho da foto que quer inserir é demasiado grande (o máximo permitido é de %s x %s)');
define('ERR_IMGSIZE_TOO_LARGE', 'O tamanho do ficheiro da foto que quer inserir é demasiado grande (o máximo permitido é de %s KB)');
define('ERR_INVALID_IMG', 'O ficheiro que quer inserir não é uma imagem válida');
define('ALLOWED_IMG_TYPES', 'Pode inserir somente %s fotos.');
define('ERR_INSERT_PIC', 'A foto \'%s\' não pode ser inserida no album ');
define('UPLOAD_SUCCESS', 'A foto foi inserida correctamente<br /><br />Será visível logo que aprovada pelos administradores.');
define('INFO', 'Informação');
define('ERR_COMMENT_EMPTY', 'O comentário está vazio!');
define('ERR_INVALID_FEXT', 'Somente são admitidas fotos com as seguintes extensões : <br /><br />%s.');
define('NO_FLOOD', 'Desculpe mas é o autor/a do último comentário introduzido para esta foto<br /><br />Pode editar o comentário para modificá-lo');
define('REDIRECT_MSG', 'Está a ser redireccionado.<br /><br /><br />Prima \'CONTINUAR\' se a página não se actualizar automáticamente');
define('UPL_SUCCESS', 'A foto foi adicionada correctamente');

// lang_delete_php
define('CAPTION', 'Descrição');
define('FS_PIC', 'Foto em tamanho completo');
define('DEL_SUCCESS', 'Apagada');
define('NS_PIC', 'Foto em tamanho normal');
define('ERR_DEL', 'Não pode ser apagado');
define('THUMB_PIC', 'Thumbnail');
define('COMMENT', 'Comentário');
define('IM_IN_ALB', 'Fotos no album');
define('ALB_DEL_SUCCESS', 'Album \'%s\' apagado');
define('ALB_MGR', 'Gestor de albums');
define('ERR_INVALID_DATA', 'Dados inválidos recebidos em \'%s\'');
define('CREATE_ALB', 'Criando o album \'%s\'');
define('UPDATE_ALB', 'Actualizando album \'%s\' com o título \'%s\' e o indíce \'%s\'');
define('DEL_PIC', 'Apagar foto');
define('DEL_ALB', 'Apagar album');
define('DEL_USER', 'Apagar utilizador');
define('ERR_UNKNOWN_USER', 'O utilizador seleccionado não existe!');
define('COMMENT_DELETED', 'O comentário foi apagado');

// lang_display_image_php
define('CONFIRM_DEL', 'Tem a certeza que quer apagar esta foto? \\n Os comentários serão também apagados.');
define('DEL_PIC', 'APAGAR ESTA FOTO');
define('SIZE', '%s x %s pixeis');
define('VIEWS', '%s visualizações');
define('SLIDESHOW', 'Slideshow');
define('STOP_SLIDESHOW', 'PARAR SLIDESHOW');
define('VIEW_FS', 'Clique aqui para ver a imagem em tamanho completo');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('TITLE', 'Informação da foto');
define('FILENAME', 'Nome do ficheiro');
define('ALBUM NAME', 'Nome do album');
define('RATING', 'Nota (%s votos)');
define('KEYWORDS', 'Palavras chave');
define('FILE SIZE', 'Tamanho do ficheiro');
define('DIMENSIONS', 'Dimensões');
define('DISPLAYED', 'Visualizado');
define('CAMERA', 'Camera');
define('DATE TAKEN', 'Data da foto');
define('APERTURE', 'Abertura');
define('EXPOSURE TIME', 'Tempo de exposição');
define('FOCAL LENGTH', 'Distância Focal ');
define('COMMENT', 'Comentário');
define('ADDFAV', 'Adicionar aos favoritos');
define('ADDFAVPHRASE', 'Favoritos');
define('REMFAV', 'Remover dos favoritos');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'Editar o comentário');
define('CONFIRM_DELETE', 'Tem a certeza que quer apagar o comentário?');
define('ADD_YOUR_COMMENT', 'Adicionar um comentário');
define('NAME', 'Nome');
define('COMMENT', 'Comentário');
define('YOUR_NAME', 'Nome');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Clique na imagem para fechar a janela');

// lang_ecard_php
define('TITLE', 'Enviar foto a um amigo');
define('INVALID_EMAIL', '<b>Atenção</b> : Endereço e-mail incorrecto!');
define('ECARD_TITLE', 'Uma foto de %s para si');
define('VIEW_ECARD', 'Se a foto não for visível, click neste link');
define('VIEW_MORE_PICS', 'Clique aqui para ver mais fotos!');
define('SEND_SUCCESS', 'A foto foi enviada');
define('SEND_FAILED', 'O servidor não conseguiu enviar esta foto...');
define('FROM', 'De');
define('YOUR_NAME', 'Nome');
define('YOUR_EMAIL', 'Endereço de e-mail');
define('TO', 'Para');
define('RCPT_NAME', 'Nome da pessoa de destino');
define('RCPT_EMAIL', 'Endereço de e-mail de destino');
define('GREETINGS', 'Título da mensagem');
define('MESSAGE', 'Mensagem');

// lang_editpics_php
define('PIC_INFO', 'Informação');
define('ALBUM', 'Album');
define('TITLE', 'Título');
define('DESC', 'Descrição');
define('KEYWORDS', 'Palavras chave');
define('PIC_INFO_STR', '%sx%s - %sKB - %s vezes visualizada - %s votos');
define('APPROVE', 'Aprovar a foto');
define('POSTPONE_APP', 'Enviar aprovação da foto');
define('DEL_PIC', 'Apagar foto');
define('RESET_VIEW_COUNT', 'Pôr a zero o contador de vizualizações');
define('RESET_VOTES', 'Pôr a zero os votos');
define('DEL_COMM', 'Apagar comentários');
define('UPL_APPROVAL', 'Aprovar uploads');
define('EDIT_PICS', 'Editar fotos');
define('SEE_NEXT', 'Ir para as fotos seguintes');
define('SEE_PREV', 'If para as fotos anteriores');
define('N_PIC', '%s foto/s');
define('N_OF_PIC_TO_DISP', 'Número de fotos a mostrar');
define('APPLY', 'Validar as alterações');

// lang_groupmgr_php
define('GROUP_NAME', 'Nome do grupo');
define('DISK_QUOTA', 'Quota de disco');
define('CAN_RATE', 'Podem classificar fotos');
define('CAN_SEND_ECARDS', 'Podem enviar e-cards');
define('CAN_POST_COM', 'Podem colocar comentários');
define('CAN_UPLOAD', 'Podem enviar fotos');
define('CAN_HAVE_GALLERY', 'Podem ter galerias pessoais');
define('APPLY', 'Validar as alterações');
define('CREATE_NEW_GROUP', 'Criar um grupo novo');
define('DEL_GROUPS', 'Apagar o/os grupo(s) seleccionados');
define('CONFIRM_DEL', 'Atenção, quando apaga um grupo, os utilizadores que pertemcem a esse grupo serão transferidos ao grupo \'Registered\'!\\n\\n Deseja continuar?');
define('TITLE', 'Configurar grupos de utilizadores');
define('APPROVAL_1', 'Aprovação album público (1)');
define('APPROVAL_2', 'Aprovação album privado (2)');
define('NOTE1', '<b>(1)</b> Adicionar fotos a um album público requer aprovação dos administradores');
define('NOTE2', '<b>(2)</b> Adicionar fotos a um album que pertence ao utilizador requer aprovação dos administradores');
define('NOTES', 'Notas');

// lang_index_php
define('WELCOME', 'Bem vindo!');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Tem a certeza que quer apagar este album \\nTodas as fotos e comentários serão também apagados.');
define('DELETE', 'APAGAR');
define('MODIFY', 'MODIFICAR');
define('EDIT_PICS', 'EDITAR FOTOS');

// lang_list_categories
define('HOME', 'Página Inicial');
define('STAT1', '<b>[pictures]</b> fotos em <b>[albums]</b> albuns e <b>[cat]</b> categorias com <b>[comments]</b> comentários, visualizadas <b>[views]</b> vezes');
define('STAT2', '<b>[pictures]</b> fotos em <b>[albums]</b> albuns, visualizadas <b>[views]</b> vezes');
define('XX_S_GALLERY', 'Galeria de %s');
define('STAT3', '<b>[pictures]</b> fotos em <b>[albums]</b> albuns com <b>[comments]</b> comentários, visualizadas <b>[views]</b> vezes');

// lang_list_users
define('USER_LIST', 'Lista de utilizadores');
define('NO_USER_GAL', 'Nãoo existem utilizadores com permissões para ter albums');
define('N_ALBUMS', '%s album(s)');
define('N_PICS', '%s foto(s)');

// lang_list_albums
define('N_PICTURES', '%s fotos');
define('LAST_ADDED', ', última adicionada em %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Modificar album %s');
define('GENERAL_SETTINGS', 'Configurações gerais');
define('ALB_TITLE', 'Título do album');
define('ALB_CAT', 'Categoria do album');
define('ALB_DESC', 'Descrição do album');
define('ALB_THUMB', 'Thumbnail do album');
define('ALB_PERM', 'Permissões para este album');
define('CAN_VIEW', 'Este album pode ser visto por');
define('CAN_UPLOAD', 'Os visitantes podem adicionar fotos');
define('CAN_POST_COMMENTS', 'Os visitantes poden adicionar comentários');
define('CAN_RATE', 'Os visitantes podem classificar as fotos');
define('USER_GAL', 'Galeria de utilizador');
define('NO_CAT', '* Sem categoria *');
define('ALB_EMPTY', 'O album está vazio');
define('LAST_UPLOADED', 'Última foto adicionada');
define('PUBLIC_ALB', 'Todo o mundo (album público)');
define('ME_ONLY', 'Somente eu (album privado)');
define('OWNER_ONLY', 'Somente o dono do album (%s)');
define('GROUPP_ONLY', 'Membros do grupo \'%s\'');
define('ERR_NO_ALB_TO_MODIFY', 'Não pode modificar nenhum album na base de dados.');
define('UPDATE', 'Modificar album');

// lang_rate_pic_php
define('ALREADY_RATED', 'desculpe mas já votou nesta foto');
define('RATE_OK', 'O seu voto foi contabilizado');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'Muito embora os administradores do {SITE_NAME} tentarem eliminar ou editar qualquer material desagradável tão rapidamente quanto possível, é impossivel verificar todos os envios que se realizam. Por isso deve ter em conta que todos o material afixado neste website expressa os pontos de vista e opiniões dos seus autores e não os dos administradores ou webmasters (excepto os adicionados por eles próprios).<br />
<br />
Concorda não adicionar nenhum material abusivo, obsceno, vulgar, escandaloso, odioso, ameaçador, de orientação sexual, ou algum outro que possa violar qualquer lei aplicável.  Concorda que o webmaster, o administrador e os acessores de { SITE_NAME } tenham o direito de eliminar ou de corrigir qualquer conteúdo em qualquer momento que considerarem necessário. Como utilizador, concorda que  qualquer informação enviada seja armazenada nuna base de dados.  Garantindo que esta informação, não será divulgada a terceiros sem o seu consentimento. O webmaster e o administrador não podem ser considerados responsáveis por alguma tentativa de destruição da base de dados que possa conduzir à perda da mesma.<br />
<br />
Este site utiliza cookies para armazenar a informação no seu processador. Estes cookies servem para melhorar a navegação neste site.  O endereço de e-mail  é utilizado somente para confirmar os seus dados e a password de registo.<br />
<br />
Premindo \'Concordo\' expressa o seu acordo com estas condições.');

// lang_register_php
define('PAGE_TITLE', 'Registo de novo utilizador');
define('TERM_COND', 'Termos e condições');
define('I_AGREE', 'Estou de acordo');
define('SUBMIT', 'Enviar pedido de registo');
define('ERR_USER_EXISTS', 'O nome de utilizador escolhido já existe, por favor escolha outro diferente');
define('ERR_PASSWORD_MISMATCH', 'As duas palavras-passe não são iguais, por favor volte a introduzi-las');
define('ERR_UNAME_SHORT', 'O nome do utilizador deve ter pelo menos 2 carecteres');
define('ERR_PASSWORD_SHORT', 'A palavra-passe deve ter pelo menos 2 caracteres');
define('ERR_UNAME_PASS_DIFF', 'O nome de utilizador e a palavra-passe devem ser diferentes');
define('ERR_INVALID_EMAIL', 'O endereço de e-mail não é válido');
define('ERR_DUPLICATE_EMAIL', 'Outro utilizador já se encontra registado com o endereço de e-amil que forneceu');
define('ENTER_INFO', 'Introduza a informação de registo');
define('REQUIRED_INFO', 'Informação requerida');
define('OPTIONAL_INFO', 'Informação opcional');
define('USERNAME', 'Nome de utilizador');
define('PASSWORD', 'Palavra-passe');
define('PASSWORD_AGAIN', 'Reescrever palavra-passe');
define('EMAIL', 'E-mail');
define('LOCATION', 'Local');
define('INTERESTS', 'Interesses');
define('WEBSITE', 'Página web');
define('OCCUPATION', 'Ocupação');
define('ERROR', 'ERRO');
define('CONFIRM_EMAIL_SUBJECT', '%s - Confirmação de registo');
define('INFORMATION', 'Informação');
define('FAILED_SENDING_EMAIL', 'O e-mail de confirmação de registo não pode ser enviado!');
define('THANK_YOU', 'Obrigado por se registar.<br /><br />Enviamos um e-mail com informação sobre a activação da sua conta para o endereço de e-mail fornecido.');
define('ACCT_CREATED', 'A sua conta de utilizador foi criada e já pode aceder ao sistema com o seu nome de utilizador e palavra-passe');
define('ACCT_ACTIVE', 'A sua conta de utilizador está activa e já pode aceder ao sistema com o seu nome de utilizador e palavra-passe');
define('ACCT_ALREADY_ACT', 'A sua conta já estava activa!');
define('ACCT_ACT_FAILED', 'Esta conta não pode ser activada!');
define('ERR_UNK_USER', 'O utilizador seleccionado não existe!');
define('X_S_PROFILE', 'Perfil de %s');
define('GROUP', 'Grupo');
define('REG_DATE', 'Data de registo');
define('DISK_USAGE', 'Uso de disco');
define('CHANGE_PASS', 'Alterar palavra-passe');
define('CURRENT_PASS', 'Palavra-passe actual');
define('NEW_PASS', 'Nova palavra-passe');
define('NEW_PASS_AGAIN', 'Reescrever nova palavra passe');
define('ERR_CURR_PASS', 'A palavra passe actual é incorrecta');
define('APPLY_MODIF', 'Guardar as alterações');
define('UPDATE_SUCCESS', 'O seu perfil foi actualizado');
define('PASS_CHG_SUCCESS', 'A tua palavra passe foi alterada ');
define('PASS_CHG_ERROR', 'A sua palavra passe não foi alterada');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Obrigado por se registar em {SITE_NAME}

O seu nome de utilizador é: "{USER_NAME}"
A sua palavra passe é: "{PASSWORD}"

Para terminar de activar a sua conta, deve clicar sobre o link que
aparece em baixo ou copiá-lo e colá-lo no seu browser de Internet.

{ACT_LINK}

Comprimentos.

Os administradores do {SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', 'Rever comentários');
define('NO_COMMENT', 'Não existem comentários para mostrar');
define('N_COMM_DEL', '%s comentário(s) apagado(s)');
define('N_COMM_DISP', 'Número de comentários a mostrar');
define('SEE_PREV', 'Ver o anterior');
define('SEE_NEXT', 'Ver o seguinte');
define('DEL_COMM', 'Apagar comentários seleccionados');

// lang_search_php
define('SEARCH', 'Procurar em todas as fotos');

// lang_search_new_php
define('PAGE_TITLE', 'Procurar novas fotos');
define('SELECT_DIR', 'Seleccionar directório');
define('SELECT_DIR_MSG', 'Esta função permite adicionar de forma automática as fotos que carregou para o seu servidoratravés de FTP.<br /><br />Seleccione o directório para onde carregou as suas fotos');
define('NO_PIC_TO_ADD', 'Não há nenhuma foto para adicionar');
define('NEED_ONE_ALBUM', 'Necessita de pelo menos um album para utilizar esta funcão');
define('WARNING', 'Atenção');
define('CHANGE_PERM', 'O script não pode escrever neste directório, por isso necessita de alterar as suas permissões para o modo 755 ou 777 antes de tentar de novo!');
define('TARGET_ALBUM', '<b>Colocar as fotos do directório &quot;</b>%s<b>&quot; no album </b>%s');
define('FOLDER', 'Pasta');
define('IMAGE', 'Foto');
define('ALBUM', 'Album');
define('RESULT', 'Resultado');
define('DIR_RO', 'Não é possível escrever. ');
define('DIR_CANT_READ', 'Não é possível ler. ');
define('INSERT', 'Adicionar novas fotos à galeria');
define('LIST_NEW_PIC', 'Lista de novas fotos');
define('INSERT_SELECTED', 'Adicionar as fotos seleccionadas');
define('NO_PIC_FOUND', 'Não se encontrou nenhuma foto nova');
define('BE_PATIENT', 'Por favor, sê paciente, o script necessita de tempo para adicionar as fotos');
define('NOTES', '<ul><li><b>OK</b> : significa que a foto foi adicionada sem problemas<li><b>DP</b> : significa que a foto é um duplicado e já existe na base de dados<li><b>PB</b> : significa que a foto não pode ser adicionada, por favor verifica a configuração e as permissões dos directórios onde estão as fotos<li>Se os icones OK, DP, PB não aparecerem, prime sobre o icone de imagem não carregada para ver o erro produzido pelo PHP<li>Se o browser faz um timeout, prime o ícone Actualizar</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('TITLE', 'Inserir nova foto');
define('MAX_FSIZE', 'O tamanho máximo de fichero admitido é de %s KB');
define('ALBUM', 'Album');
define('PICTURE', 'Foto');
define('PIC_TITLE', 'Título da foto');
define('DESCRIPTION', 'Descrição da foto');
define('KEYWORDS', 'Palavras chave (separadas por espaços)');
define('ERR_NO_ALB_UPLOADABLES', 'Desculpe, mas não há nenhum album onde seja permitido inserir novas fotos');

// lang_usermgr_php
define('TITLE', 'Administrar utilizadores');
define('NAME_A', 'Ascendente por nome');
define('NAME_D', 'Descendente por nome');
define('GROUP_A', 'Ascendente por grupo');
define('GROUP_D', 'Descendente por grupo');
define('REG_A', 'Ascendente por data de registo');
define('REG_D', 'Descendente por data de registo');
define('PIC_A', 'Ascendente por total de fotos');
define('PIC_D', 'Descendente por total de fotos');
define('DISKU_A', 'Ascendente por uso de disco');
define('DISKU_D', 'Descendente por uso de disco');
define('SORT_BY', 'Ordenar utilizadores por');
define('ERR_NO_USERS', 'A tabela de utilizadores está vazia!');
define('ERR_EDIT_SELF', 'Não pode editar o seu próprio perfil, use a opçãon \'Meu perfil de utilizador\' para isso');
define('EDIT', 'EDITAR');
define('DELETE', 'APAGAR');
define('NAME', 'Nome de utilizador');
define('GROUP', 'Grupo');
define('INACTIVE', 'Inactivo');
define('OPERATIONS', 'Operações');
define('PICTURES', 'Fotos');
define('DISK_SPACE', 'Espaço usado / Quota');
define('REGISTERED_ON', 'Registado no dia');
define('U_USER_ON_P_PAGES', '%d utilizadores na %d página(s)');
define('CONFIRM_DEL', 'Tem a certeza que quer apagar esta utilizador? \\nTodas as suas fotos e albuns serão tambem apagados.');
define('MAIL', 'Enviar');
define('ERR_UNKNOWN_USER', 'O utilizador selecionado não existe!');
define('MODIFY_USER', 'Modificar utilizador');
define('NOTES', 'Notas');
define('NOTE_LIST', '<li>Se não quiser alterar a palavra-passe actual, deixe o campo \"palavra-passe\" vazio');
define('PASSWORD', 'Palavra-passe');
define('USER_ACTIVE', 'O utilizador activo');
define('USER_GROUP', 'Grupo de utilizadores');
define('USER_EMAIL', 'E-mail do utilizador');
define('USER_WEB_SITE', 'Página web do utilizador');
define('CREATE_NEW_USER', 'Criar novo utilizador');
define('USER_FROM', 'Local do utilizador');
define('USER_INTERESTS', 'Interesses do utilizador');
define('USER_OC', 'Ocupação do utilizador');

// lang_util_php
define('TITLE', 'Redimensionar imagens');
define('WHAT_IT_DOES', 'O que isto faz');
define('WHAT_UPDATE_TITLES', 'Actualizar títulos a partir de nome de ficheiro');
define('WHAT_DELETE_TITLE', 'Apagar títulos');
define('WHAT_REBUILD', 'Reconstruir thumbnails e redimensionar as fotos');
define('WHAT_DELETE_ORIGINALS', 'Apaga as fotos com o tamanho original e substitui-as com as novas versões');
define('FILE', 'Ficheiro');
define('TITLE_SET_TO', 'Título mudado para');
define('SUBMIT_FORM', 'Enviar');
define('UPDATED_SUCCESFULLY', 'Actualizado com sucesso');
define('ERROR_CREATE', 'Erro na tentativa de criação');
define('CONTINUE', 'Processar mais imagens');
define('MAIN_SUCCESS', 'O ficheiro %s foi usado com sucesso para imagem principal');
define('ERROR_RENAME', 'erro na renomeação de %s para %s');
define('ERROR_NOT_FOUND', 'O ficheiro %s não foi encontrado');
define('BACK', 'Voltar atrás');
define('THUMBS_WAIT', 'A actualizar thumbnails e/ou a redimensionar imagens. Por favor, aguarde...');
define('THUMBS_CONTINUE_WAIT', 'A actualização ainda está a ser processada...');
define('TITLES_WAIT', 'A actualizar títulos...');
define('DELETE_WAIT', 'A apagar títulos...');
define('REPLACE_WAIT', 'A apagar originais e a substituí-los com as imagens redimensionadas...');
define('INSTRUCTION', 'Instruções rápidas');
define('INSTRUCTION_ACTION', 'selecionar acção');
define('INSTRUCTION_PARAMETER', 'Seleccionar parametros');
define('INSTRUCTION_ALBUM', 'Seleccionar album');
define('INSTRUCTION_PRESS', 'Click %s');
define('UPDATE', 'Actualizar thumbnails e/ou  redimensionar fotos');
define('UPDATE_WHAT', 'O que deve ser actualizado');
define('UPDATE_THUMB', 'Só os thumbnails');
define('UPDATE_PIC', 'Só redimensionar imagens');
define('UPDATE_BOTH', 'Ambos os thumbnails e imagens redimensionadas');
define('UPDATE_NUMBER', 'Número de imagens processadas por click');
define('UPDATE_OPTION', '(Tente pôr esta opção com valores mais baixos se tiverem a acontecer timeouts)');
define('FILENAME_TITLE', 'Ficheiro ? Título da imagem');
define('FILENAME_HOW', 'Como deve ser o nome do ficheiro modificado');
define('FILENAME_REMOVE', 'Remova a extensão .jpg e substitua os _ (underscore) com espaços');
define('FILENAME_EURO', 'Modificar 2003_11_23_13_20_20.jpg para 23/11/2003 13:20');
define('FILENAME_US', 'Modificar 2003_11_23_13_20_20.jpg para 11/23/2003 13:20');
define('FILENAME_TIME', 'Modificar 2003_11_23_13_20_20.jpg para 13:20');
define('DELETE', 'Apagar títulos das imagens ou as fotos em tamanho original');
define('DELETE_TITLE', 'Apagar títulos das imagens');
define('DELETE_ORIGINAL', 'Apagar fotos em tamanho original');
define('DELETE_REPLACE', 'Apaga as imagens originais e substituias pelas novas imagens redimensionadas');
define('SELECT_ALBUM', 'Selecionar album');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>