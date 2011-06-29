<?php
/*********************************************
   Coppermine 1.3.1 for CPG Dragonfly™
  ********************************************
   Port Copyright © 2004-2006 CPG-Nuke Dev Team
  http://dragonflycms.org
  ********************************************
   v1.1 (c) by Grégory Demar http://coppermine.sf.net/
   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.
  ********************************************
  $Source: /cvs/l10n/portuguese/coppermine.php,v $
  $Revision: 9.6 $
  $Author: djmaze $
  $Date: 2006/02/12 16:02:22 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Views');
define('PIC_VOTES', 'Votos');
define('PIC_COMMENTS', 'Comments');

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Portuguese');
define('LANG_NAME_NATIVE', 'Português');
define('LANG_COUNTRY_CODE', 'pt');
define('TRANS_NAME', 'Luis Rebelo (lineartube)');
define('TRANS_EMAIL', 'coppermine@luisrebelo.net');
define('TRANS_WEBSITE', 'http://luisrebelo.net/');
define('TRANS_DATE', '2003-10-21');
define('CHARSET', 'UTF-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Sim');
define('NO', 'Não');
// some common strings
define('BACK', 'ATRÁS');
define('CONTINU', 'CONTINUAR');
define('INFO', 'Informação');
//define('ERROR','Erro');
define('ALBUM_DATE_FMT', '%d de %B de %Y');
define('LASTCOM_DATE_FMT', '%d/%m/%y às %H:%M');
define('LASTUP_DATE_FMT', '%d de %B de %Y');
define('REGISTER_DATE_FMT', '%d de %B de %Y');
define('LASTHIT_DATE_FMT', '%d de %B de %Y às %I:%M %p');
define('COMMENT_DATE_FMT', '%d de %B de %Y às %I:%M %p');

// lang_meta_album_names
define('RANDOM', 'Fotos aleatórias');
define('LASTUP', 'Últimas fotos');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Last updated albums');
define('LASTCOM', 'Últimos comentários');
define('LASTCOMBY', 'Os meus últimos comentários');
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
define('NO_IMG_TO_APPROVE', 'No images to approve');

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
define('TOPRATED_TITLE', 'As imagens mais votadas');
define('TOPRATED_LNK',  'Melhor Classificadas');
define('SEARCH_TITLE', 'Search Photo Collection');
define('SEARCH_LNK', 'Procurar');
define('FAV_TITLE', 'As minhas favoritas');
define('FAV_LNK', 'Favoritas');
define('HELP_TITLE', 'AJUDA');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

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
//define('MY_PROF_LNK','O meu perfil de utilizador');

// lang_cat_list
define('CATEGORY', 'Categoria');
define('ALBUMS', 'Álbuns');
//define('PICTURES','Fotos');

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
define('THUMB_RATING', 'RATING');
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
//define('INFORMATION','Informação');
//define('ERROR','Erro');
define('_CRITICAL_ERROR', 'Error crítico');
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
define('CONFIRM_DELETE_CAT', 'Tem a certeza que quer apagar esta categoria');
//define('CATEGORY', 'Categoria');
define('OPERATIONS', 'Operações');
define('MOVE_INTO', 'Mover para');
define('UPDATE_CREATE', 'Modificar/Criar categoria');
define('PARENT_CAT', 'Categoria parente');
define('CAT_TITLE', 'Título da categoria');
define('CAT_DESC', 'Descrição da categoria');

// lang_config_php
define('CONFIG_TITLE', 'Configuração');
define('RESTORE_CFG', 'Restaurar valores por defeito');
define('SAVE_CFG', 'Guardar a nova configuração');
define('NOTES', 'Notas');
//define('INFO','Informação');
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
//define('INFO', 'Informação');
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
//define('COMMENT','Comentário');
define('IM_IN_ALB', 'Fotos no album');
define('ALB_DEL_SUCCESS', 'Album \'%s\' apagado');
define('ALB_MGR', 'Gestor de albums');
define('ERR_INVALID_DATA', 'Dados inválidos recebidos em \'%s\'');
define('CREATE_ALB', 'Criando o album \'%s\'');
define('UPDATE_ALB', 'Actualizando album \'%s\' com o título \'%s\' e o indíce \'%s\'');
define('DEL_PIC', 'Apagar foto');
define('DEL_ALB', 'Apagar album');
define('DEL_USER', 'Apagar utilizador');
//define('ERR_UNKNOWN_USER', 'O utilizador seleccionado não existe!');
define('COMMENT_DELETED', 'O comentário foi apagado');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'Tem a certeza que quer apagar esta foto? \\n Os comentários serão também apagados.');
define('DEL_THIS_PIC', 'APAGAR ESTA FOTO');
define('SIZE', '%s x %s pixeis');
define('VIEWS', '%s visualizações');
define('SLIDESHOW', 'Slideshow');
define('STOP_SLIDESHOW', 'PARAR SLIDESHOW');
define('VIEW_FS', 'Clique aqui para ver a imagem em tamanho completo');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('PIC_INF_TITLE', 'Informação da foto');
define('PIC_INF_FILENAME', 'Nome do ficheiro');
define('ALBUM_NAME', 'Nome do album');
define('PIC_INFO_RATING', 'Nota (%s votos)');
define('KEYWORDS', 'Palavras chave');
define('PIC_INF_FILE_SIZE', 'Tamanho do ficheiro');
define('PIC_INF_DIMENSIONS', 'Dimensões');
define('DISPLAYED', 'Visualizado');
define('CAMERA', 'Camera');
define('DATE_TAKEN', 'Data da foto');
define('APERTURE', 'Abertura');
define('EXPOSURE_TIME', 'Tempo de exposição');
define('FOCAL_LENGTH', 'Distância Focal ');
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
define('REMOVEFAV', 'Removed from Favorites Album');
define('ADDEDTOFAV', 'Added to Favorites Album');

// lang_display_comments
define('OK', 'OK');
define('COM_EDIT_TITLE', 'Editar o comentário');
define('CONFIRM_DELETE_COM', 'Tem a certeza que quer apagar o comentário?');
define('ADD_YOUR_COMMENT', 'Adicionar um comentário');
define('COM_NAME', 'Nome');
//define('COMMENT','Comentário');
define('YOUR_NAME', 'Nome');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Clique na imagem para fechar a janela');

// lang_ecard_php
define('E_TITLE', 'Enviar foto a um amigo');
define('INVALID_EMAIL', '<b>Atenção</b> : Endereço e-mail incorrecto!');
define('E_ECARD_TITLE', 'Uma foto de %s para si');
define('VIEW_ECARD', 'Se a foto não for visível, click neste link');
define('VIEW_MORE_PICS', 'Clique aqui para ver mais fotos!');
define('SEND_SUCCESS', 'A foto foi enviada');
define('SEND_FAILED', 'O servidor não conseguiu enviar esta foto...');
define('FROM', 'De');
define('_YOUR_NAME', 'Nome');
define('YOUR_EMAIL', 'Endereço de e-mail');
define('TO', 'Para');
define('RCPT_NAME', 'Nome da pessoa de destino');
define('RCPT_EMAIL', 'Endereço de e-mail de destino');
define('GREETINGS', 'Título da mensagem');
define('MESSAGE', 'Mensagem');
define('ECARD_LINK_CORRUPT', 'Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser'); //NEW

// lang_editpics_php
define('PIC_INFO', 'Informação');
define('ALBUM', 'Album');
define('EDIT_TITLE', 'Título');
define('DESC', 'Descrição');
//define('KEYWORDS','Palavras chave');
define('PIC_INFO_STR', '%sx%s - %sKB - %s vezes visualizada - %s votos');
define('APPROVE', 'Aprovar a foto');
define('POSTPONE_APP', 'Enviar aprovação da foto');
//define('DEL_PIC', 'Apagar foto');
define('READ_EXIF', 'Read EXIF info again');
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
//define('APPLY','Validar as alterações');
define('CREATE_NEW_GROUP', 'Criar um grupo novo');
define('DEL_GROUPS', 'Apagar o/os grupo(s) seleccionados');
define('CONFIRM_DEL', 'Atenção, quando apaga um grupo, os utilizadores que pertemcem a esse grupo serão transferidos ao grupo \'Registered\'!\\n\\n Deseja continuar?');
define('GROUP_TITLE', 'Configurar grupos de utilizadores');
define('APPROVAL_1', 'Aprovação album público (1)');
define('APPROVAL_2', 'Aprovação album privado (2)');
define('NOTE1', '<b>(1)</b> Adicionar fotos a um album público requer aprovação dos administradores');
define('NOTE2', '<b>(2)</b> Adicionar fotos a um album que pertence ao utilizador requer aprovação dos administradores');
//define('NOTES','Notas');

// lang_index_php
define('WELCOME', 'Bem vindo!');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'Tem a certeza que quer apagar este album Todas as fotos e comentários serão também apagados.');
//define('DELETE','APAGAR');
define('MODIFY', 'MODIFICAR');
//define('EDIT_PICS','EDITAR FOTOS');

// lang_list_categories
define('HOME', _HOME);
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
define('MOD_CAN_UPLOAD', 'Os visitantes podem adicionar fotos');
define('CAN_POST_COMMENTS', 'Os visitantes poden adicionar comentários');
define('MOD_CAN_RATE', 'Os visitantes podem classificar as fotos');
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

// lang_register_php
define('USERNAME', 'Nome de utilizador');
define('X_S_PROFILE', 'Perfil de %s');
define('GROUP', 'Grupo');
define('DISK_USAGE', 'Uso de disco');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Rever comentários');
define('NO_COMMENT', 'Não existem comentários para mostrar');
define('N_COMM_DEL', '%s comentário(s) apagado(s)');
define('N_COMM_DISP', 'Número de comentários a mostrar');
define('R_SEE_PREV', 'Ver o anterior');
define('R_SEE_NEXT', 'Ver o seguinte');
define('R_DEL_COMM', 'Apagar comentários seleccionados');

// lang_search_php
define('S_SEARCH', 'Procurar em todas as fotos');

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
//define('ALBUM','Album');
define('RESULT', 'Resultado');
define('DIR_RO', 'Não é possível escrever. ');
define('DIR_CANT_READ', 'Não é possível ler. ');
define('INSERT', 'Adicionar novas fotos à galeria');
define('LIST_NEW_PIC', 'Lista de novas fotos');
define('INSERT_SELECTED', 'Adicionar as fotos seleccionadas');
define('NO_PIC_FOUND', 'Não se encontrou nenhuma foto nova');
define('BE_PATIENT', 'Por favor, sê paciente, o script necessita de tempo para adicionar as fotos');
define('SN_NOTES', '<ul><li><b>OK</b> : significa que a foto foi adicionada sem problemas<li><b>DP</b> : significa que a foto é um duplicado e já existe na base de dados<li><b>PB</b> : significa que a foto não pode ser adicionada, por favor verifica a configuração e as permissões dos directórios onde estão as fotos<li>Se os icones OK, DP, PB não aparecerem, prime sobre o icone de imagem não carregada para ver o erro produzido pelo PHP<li>Se o browser faz um timeout, prime o ícone Actualizar</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('UP_TITLE', 'Inserir nova foto');
define('MAX_FSIZE', 'O tamanho máximo de fichero admitido é de %s KB');
//define('ALBUM','Album');
define('PICTURE', 'Foto');
define('PIC_TITLE', 'Título da foto');
define('DESCRIPTION', 'Descrição da foto');
define('UP_KEYWORDS', 'Palavras chave (separadas por espaços)');
define('ERR_NO_ALB_UPLOADABLES', 'Desculpe, mas não há nenhum album onde seja permitido inserir novas fotos');

// lang_usermgr_php
define('U_TITLE', 'Administrar utilizadores');
//define('NAME_A','Ascendente por nome');
//define('NAME_D','Descendente por nome');
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
//define('DELETE','APAGAR');
define('U_NAME','Nome de utilizador');
//define('GROUP','Grupo');
define('INACTIVE', 'Inactivo');
//define('OPERATIONS','Operações');
define('PICTURES', 'Fotos');
define('DISK_SPACE', 'Espaço usado / Quota');
define('REGISTERED_ON', 'Registado no dia');
define('U_USER_ON_P_PAGES', '%d utilizadores na %d página(s)');
define('USER_CONFIRM_DEL', 'Tem a certeza que quer apagar esta utilizador? \\nTodas as suas fotos e albuns serão tambem apagados.');
define('MAIL', 'Enviar');
define('ERR_UNKNOWN_USER', 'O utilizador selecionado não existe!');
define('MODIFY_USER', 'Modificar utilizador');
//define('NOTES','Notas');
define('NOTE_LIST', '<li>Se não quiser alterar a palavra-passe actual, deixe o campo \"palavra-passe\" vazio');
define('PASSWORD', 'Palavra-passe');
define('USER_ACTIVE_CP', 'O utilizador activo');
define('USER_GROUP_CP', 'Grupo de utilizadores');
define('USER_EMAIL', 'E-mail do utilizador');
define('USER_WEB_SITE', 'Página web do utilizador');
define('CREATE_NEW_USER', 'Criar novo utilizador');
define('USER_FROM', 'Local do utilizador');
define('USER_INTERESTS', 'Interesses do utilizador');
define('USER_OCC', 'Ocupação do utilizador');

// lang_util_php
define('UTIL_TITLE', 'Redimensionar imagens');
define('WHAT_IT_DOES', 'O que isto faz');
define('WHAT_UPDATE_TITLES', 'Actualizar títulos a partir de nome de ficheiro');
define('WHAT_DELETE_TITLE', 'Apagar títulos');
define('WHAT_REBUILD', 'Reconstruir thumbnails e redimensionar as fotos');
define('WHAT_DELETE_ORIGINALS', 'Apaga as fotos com o tamanho original e substitui-as com as novas versões');
define('U_FILE', 'Ficheiro');
define('TITLE_SET_TO', 'Título mudado para');
define('SUBMIT_FORM', 'Enviar');
define('UPDATED_SUCCESFULLY', 'Actualizado com sucesso');
define('ERROR_CREATE', 'Erro na tentativa de criação');
define('CONTIN', 'Processar mais imagens');
define('MAIN_SUCCESS', 'O ficheiro %s foi usado com sucesso para imagem principal');
define('ERROR_RENAME', 'erro na renomeação de %s para %s');
define('ERROR_NOT_FOUND', 'O ficheiro %s não foi encontrado');
define('U_BACK', 'Voltar atrás');
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
define('U_UPDATE', 'Actualizar thumbnails e/ou  redimensionar fotos');
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
define('UT_DELETE', 'Apagar títulos das imagens ou as fotos em tamanho original');
define('DELETE_TITLE', 'Apagar títulos das imagens');
define('DELETE_ORIGINAL', 'Apagar fotos em tamanho original');
define('DELETE_REPLACE', 'Apaga as imagens originais e substituias pelas novas imagens redimensionadas');
//define('SELECT_ALBUM', 'Selecionar album');

// lang_pagetitle_php
define('VIEWING', 'Viewing Photo');
define('USR', ' Galeria');
define('PHOTOGALLERY', 'Galeria de Fotos');
$lang_usermgr_php = array(
	'name_a' => 'Ascendente por nome',
	'name_d' => 'Descendente por nome',
	'group_a' => 'Ascendente por grupo',
	'group_d' => 'Descendente por grupo',
	'reg_a' => 'Ascendente por data de registo',
	'reg_d' => 'Descendente por data de registo',
	'pic_a' => 'Ascendente por total de fotos',
	'pic_d' => 'Descendente por total de fotos',
	'disku_a' => 'Ascendente por uso de disco',
	'disku_d' => 'Descendente por uso de disco',
    );
$lang_byte_units = array('Bytes','KB','MB',);
// Day of weeks and months
$lang_day_of_week = array('Dom','Seg','Ter','Qua','Qui','Sex','Sab');
$lang_month = array('Jan','Feb','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez',);
$lang_meta_album_names = array(
	'random' => 'Fotos aleatórias',
    'lastup' => 'Últimas fotos',
    'lastupby' => 'My Last Additions', // new 1.2.2
    'lastalb' => 'Last updated albums',
    'lastcom' => 'Últimos comentários',
    'lastcomby' => 'My Last comments', // new 1.2.2
    'topn' => 'Mais vistas',
    'toprated' => 'Melhor Classificadas',
    'lasthits' => 'Últimas vistas',
    'search' => 'Resultado da procura',
    'favpics' => 'Fotos favoritas',
    );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array(
	'title' => 'Configuração',
	'restore_cfg' => 'Restaurar valores por defeito',
	'save_cfg' => 'Guardar a nova configuração',
	'notes' => 'Notas',
	'info' => 'Informação',
	'upd_success' => 'A configuração da Coppermine foi actualizada',
	'restore_success' => 'Valores por defeito da Coppermine restaurados',
	'name_a' => 'Ascendente por nome',
	'name_d' => 'Descendente por nome',
	'title_a' => 'Ascendente por título',
	'title_d' => 'Descendente por título',
	'date_a' => 'Ascendente por data',
	'date_d' => 'Descendente por data',    
	'rating_a' => 'Rating ascending', 
    'rating_d' => 'Rating descending', 
    'th_any' => 'Max Aspect',
    'th_ht' => 'Height',
    'th_wd' => 'Width',
    );
// start left side interpretation
$lang_config_data = array(
// General settings
'Parâmetros Gerais',
	array('Nome da galeria', 'gallery_name', 0),
	array('Descrição da galeria', 'gallery_description', 0),
	array('Correio electrónico do administrador', 'gallery_admin_email', 0),
	array('Address to nuke folder ie http://example.com/html/', 'ecards_more_pic_target', 0), 
	array('Tema (aspecto)', 'theme', 6),
	array('Page Specific Titles instead of >Coppermine', 'nice_titles', 1),
//'Album list view', 
'Aspecto da lista de álbuns',
array('Largura da tabela principal (pixels o %)', 'main_table_width', 0),
	array('Número de níveis de categorias a mostrar', 'subcat_level', 0),
	array('Número de álbuns a mostrar', 'albums_per_page', 0),
	array('Número de colunas na lista de álbun', 'album_list_cols', 0),
	array('Tamanho dos thumbnails em pixeis', 'alb_list_thumb_size', 0),
	array('Conteúdo da página principal', 'main_page_layout', 0),
	array('Mostrar thumbnails de primeiro nível nas categorias', 'first_level', 1), 
//'Thumbnail view',
'Aspecto da vista de Thumbnails',
	array('Número de colunas na página de thumbnails', 'thumbcols', 0),
	array('Número de linha na página de thumbnails', 'thumbrows', 0),
	array('Máximo número de tabs a mostrar', 'max_tabs', 0),
	array('Mostrar captura de imagem (além do título) debaixo do thumbnail', 'caption_in_thumbview', 1),
	array('Mostrar o número de comentários por debaixo do thumbnail', 'display_comment_count', 1),
	array('Ordem por defeito das fotos', 'default_sort_order', 3),
	array('Mínimo número de votos para que uma foto apareça na lista das mais votadas', 'min_votes_for_rating', 0),
	array('Alts and title tags of thumbnail show title and keyword instead of picinfo', 'seo_alts', 1), 
//'Display Image &amp; Comment settings',
'Vista da foto e Configuração de comentários',
	array('Largura da tabela onde mostra a foto (pixels ou %)', 'picture_table_width', 0),
	array('Informação da foto visível por defeito', 'display_pic_info', 1),
	array('Filtrar palavras impróprias nos comentários', 'filter_bad_words', 1),
	array('Permitir Emoticons nos comentários', 'enable_smilies', 1),
	array('Allow several consecutive comments on one pic from the same user', 'disable_flood_protection', 1), 
array('Email site admin upon comment submission' , 'comment_email_notification', 1), 
	array('Tamanho máximo da descrição de uma foto', 'max_img_desc_length', 0),
	array('Número máximo de caracteres numa palavra', 'max_com_wlength', 0),
	array('Número máximo de linhas num comentário', 'max_com_lines', 0),
	array('Tamanho máximo de um comentário', 'max_com_size', 0),
	array('Mostrar película de filme', 'display_film_strip', 1),
	array('número de items na película de filme', 'max_film_strip_items', 0),
	array('Allow viewing of full size pic by anonymous', 'allow_anon_fullsize', 1), 
	array('Number of days between being able to vote on the same image','keep_votes_time',0), 
	array('Show fullsize picture in slideshow','fullsize_slideshow',1),
	array('Show blocks on the right of displayimage if right blocks are on at module level?', 'right_blocks', 1), 
// 'Pictures and thumbnails settings',
'Configuração das fotos e thumbnails',
	array('Qualidade dos ficheros JPEG <b>*</b>', 'jpeg_qual', 0),
	array('Place watermark on image', 'watermark', 1),
	array('Dimensão máxima de um thumbnail <b>*</b>', 'thumb_width', 0),
	array('Usar dimensão ( largura, altura ou aspecto máximo para o thumbnail )', 'thumb_use', 7),
	array('Create intermediate pictures', 'make_intermediate', 1),
	array('Largura máxima das fotos de tamanho intermédio <b>*</b>', 'picture_width', 0),
	array('Tamanho máximo das fotos de utilizadores por upload (KB)', 'max_upl_size', 0),
	array('Dimensões máximas das fotos de utilizadores por upload (pixeis)', 'max_upl_width_height', 0), 
	array('Allow multiple Files to be upload with same file name', 'samename', 1), 
//'User settings',
'User settings',
	array('Permitir o registo de novos utilizadores', 'allow_user_registration', 1),
/*    		
	array('User registration requires email verification', 'reg_requires_valid_email', 1),
	array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),
*/
    array('Os utilizadores poden ter álbuns privados', 'allow_private_albums', 1),
	array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',
'Campos extra para descrição de fotos (dejar en blanco si no los usas)',
	array('Nome do campo 1', 'user_field1_name', 0),
	array('Nome do campo 2', 'user_field2_name', 0),
	array('Nome do campo 3', 'user_field3_name', 0),
	array('Nome do campo 4', 'user_field4_name', 0), 
// 'Pictures and thumbnails advanced settings',
'Configuração avançada de fotos e thumbnails',
	array('Mostrar icon de album privado ao utilzador não-registado', 'show_private', 1),
	array('Caracteres proíbidos nos nomes das fotos', 'forbiden_fname_char', 0),
	array('Extenções de ficheiros admitidas nos uploads', 'allowed_file_extensions', 0),
	array('Método para organização das fotos', 'thumb_method', 2),
	array('caminho da ferramenta ImageMagick / netpbm (por exemplo /usr/bin/X11/)', 'impath', 0),
	array('Tipos de ficheiros admitidos (válidos somente com a ImageMagick)', 'allowed_img_types', 0),
	array('Comandos de linha para a ImageMagick', 'im_options', 0),
	array('Ler dados EXIF em ficheiros do tipo JPEG', 'read_exif_data', 1),
	array('Ler dados IPTC em ficheiros do tipo JPEG', 'read_iptc_data', 1), 
	array('Directório base dos álbuns <b>*</b>', 'fullpath', 0),
	array('Directório para as fotos submetidas pelos usuários <b>*</b>', 'userpics', 0),
	array('Prefixo para as fotos de tamanho intermédio <b>*</b>', 'normal_pfx', 0),
	array('Prefixo para os thumbnails <b>*</b>', 'thumb_pfx', 0),
	array('Picinfo display filename', 'picinfo_display_filename', 1),
	array('Picinfo display album name', 'picinfo_display_album_name', 1),
	array('Picinfo display_file_size', 'picinfo_display_file_size', 1),
	array('Picinfo display_dimensions', 'picinfo_display_dimensions', 1),
	array('Picinfo display_count_displayed', 'picinfo_display_count_displayed', 1),
	array('Picinfo display_URL', 'picinfo_display_URL', 1),
	array('Picinfo display URL as bookmark link', 'picinfo_display_URL_bookmark', 1),
	array('Picinfo display fav album link', 'picinfo_display_favorites', 1),
//    'Cookies &amp; Charset settings',
'Configuração de cookies',
	array('Nome dos cookies usados pelo script', 'cookie_name', 0),
	array('Caminho dos cookies usados pelo script', 'cookie_path', 0),
//    'Miscellaneous settings',
    'Outras Configurações',
	array('Activar modo debug', 'debug_mode', 1),
'<br /><div align="center">(*) Os campos marcados com * não devem ser substituídos se já existem fotos nas galeri­as</div><br />'
);
// end left side interpretation
