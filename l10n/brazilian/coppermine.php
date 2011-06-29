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
  $Source: /cvs/l10n/brazilian/coppermine.php,v $
  $Revision: 9.10 $
  $Author: nanocaiordo $
  $Date: 2008/03/20 11:59:22 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Visualizações');
define('PIC_VOTES', 'Votos');
define('PIC_COMMENTS', 'Comentários');

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Portuguese (Brazilian)');
define('LANG_NAME_NATIVE', 'Português (brasileiro)');
define('LANG_COUNTRY_CODE', 'br');
define('TRANS_NAME', '?');
define('TRANS_EMAIL', '');
define('TRANS_WEBSITE', '');
define('TRANS_DATE', '2003-10-07');
define('CHARSET', 'utf-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Sim');
define('NO', 'Nao');
// some common strings
define('BACK', 'VOLTAR');
define('CONTINU', 'CONTINUAR');
define('INFO', 'Informação');
//define('ERROR', 'Erro');
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%m/%d/%y at %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y at %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y at %I:%M %p');

// lang_meta_album_names
define('RANDOM', 'Imagens Aleatórias');
define('LASTUP', 'Últimas Adições');
define('LASTUPBY', 'Minhas últimas inclusões');
define('LASTALB', 'Last updated albums');
define('LASTCOM', 'Últimos Comentários');
define('LASTCOMBY', 'Meus Últimos Comentários');
define('TOPN', 'Mais Visualizados');
define('TOPRATED', 'Topo de Linha');
define('LASTHITS', 'Últimos Visualizados');
define('SEARCH', 'Resultado da Pesquisa');
define('FAVPICS', 'Imagens Favoritas');

// lang_errors
define('ACCESS_DENIED', 'Você não tem permissão para visualizar este recurso.');
define('PERM_DENIED', 'Você não tem permissão para executar esta operação.');
define('PARAM_MISSING', 'Script não consegue estabelecer um parâmetro estabelecido.');
define('NON_EXIST_AP', 'O álbum ou figura que você selecionou não foi encontrado !');
define('QUOTA_EXCEEDED', 'A cota de espaço para armazenamento excedeu<br /><br />Você possui [quota]KB de espaço, suas imagens atualmente utilizam [space]KB, adicionar este arquivo irá estourar sua cota permitida.');
define('GD_FILE_TYPE_ERR', 'estamos usando um sistema que só permite imagens JPEG e PNG.');
define('INVALID_IMAGE', 'A imagem que você enviou está corrompida ou não pode ser interpretada pelo GD library');
define('RESIZE_FAILED', 'Impossível criar miniatura ou redimensionar a imagem.');
define('NO_IMG_TO_DISPLAY', 'Sem imagens para mostrar');
define('NON_EXIST_CAT', 'A categoria selecionada não existe');
define('ORPHAN_CAT', 'Esta categoria não tem vínculo. Execute o administrador de categorias para corrigir.');
define('DIRECTORY_RO', 'o diretório \'%s\' não é gravável, imagens não podem ser deletadas.');
define('NON_EXIST_COMMENT', 'O comentário selecionado não existe.');
define('PIC_IN_INVALID_ALBUM', 'Imagem em um album inexistente (%s)!?');
define('BANNED', 'No momento você está bloqueado neste site!');
define('NOT_WITH_UDB', 'Essa função do Album de Fotos está desabilitada porquê a mesma já está integrada no software do forum. Ou o que está tentando fazer não é suportado nessa configuração, ou a função deveria estar incluída no software do forum.');
define('MEMBERS_ONLY', 'Essa função está disponível apenas para membros. Por favor registre-se.');
define('MUSTBE_GOD', 'Esta função é somente para administração; Você precisa estar logado como superadmin para acessar esta função.');
define('NO_IMG_TO_APPROVE', 'Sem imagens para aprovar.');

// lang_main_menu
define('ALB_LIST_TITLE', 'Ir para a lista de álbus');
define('ALB_LIST_LNK', 'Lista de álbuns');
define('MY_GAL_TITLE', 'Ir para minha galeria pessoal');
define('MY_GAL_LNK', 'Minha Galeria');
define('MY_PROF_LNK', 'Meus dados');
define('MY_PROF_TITLE','Verifique sua cota de disco e grupos');
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
define('LASTUP_TITLE', 'Imagens recentemente enviadas');
define('LASTCOM_TITLE',  'Imagens em ordem de ultimamente comentada');
define('LASTCOM_LNK',  'Últimos comentários');
define('TOPN_TITLE', 'Imagens mais vistas');
define('TOPN_LNK', 'Mais Visualizados');
define('TOPRATED_TITLE', 'Imagens mais votadas');
define('TOPRATED_LNK',  'Topo de linha');
define('SEARCH_TITLE', 'Search Photo Collection');
define('SEARCH_LNK', 'Pesquisar');
define('FAV_TITLE', 'Minhas favoritas');
define('FAV_LNK', 'Minhas favoritas');
define('HELP_TITLE', 'AJUDA');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Envio aprovado');
define('CONFIG_LNK', 'Configuração');
define('ALBUMS_LNK', 'Álbuns');
define('CATEGORIES_LNK', 'Categorias');
define('USERS_LNK', 'Usuários');
define('GROUPS_LNK', 'Grupos');
define('COMMENTS_LNK', 'Comentários');
define('SEARCHNEW_LNK', 'Envio em massa');
define('UTIL_LNK', 'Redimensionar imagens');
define('BAN_LNK', 'Banir utilizadores');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Criar / ordnar meus álbuns');
define('MODIFYALB_LNK', 'Modificar meus álbuns');
//define('MY_PROF_LNK', 'Meus Dados');

// lang_cat_list
define('CATEGORY', 'Categoria');
define('ALBUMS', 'Álbuns');
//define('PICTURES', 'Imagens');

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
define('SORT_TA', 'Mostrar por título ascendente');
define('SORT_TD', 'Mostrar por título descendente');
define('PIC_ON_PAGE', '%d imagens na(s) %d pagina(s)');
define('USER_ON_PAGE', '%d usuários na(s) %d página(s)');
define('SORT_RA', 'Mostrar por votos ascendente');
define('SORT_RD', 'Mostrar por vodos descendente');
define('THUMB_RATING', 'CLASSIFICAÇÃO');
define('SORT_TITLE', 'Classificar imagens por:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Retornar para a página de miniaturas');
define('PIC_INFO_TITLE', 'Mostar/esconder informações da imagem');
define('SLIDESHOW_TITLE', 'Show de Slides');
define('SLIDESHOW_DISABLED', 'e-cards estão desabilitados');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'enviar esta imagem como e-card');
define('ECARD_DISABLED', 'e-cards estão desabilitados');
define('ECARD_DISABLED_MSG', 'Esta função é somente para usuários.');
define('PREV_TITLE', 'Ver imagem anterior');
define('NEXT_TITLE', 'Ver próxima imagem');
define('PIC_POS', 'IMAGEM %s/%s');
define('NO_MORE_IMAGES', 'Não há mais imagens nestaa galeria');
define('NO_LESS_IMAGES', 'Esta é a primeira imagem na galeria');

// lang_rate_pic
define('RATE_THIS_PIC', 'Qualifique esta imagem ');
define('NO_VOTES', '(Nenhum voto)');
define('RATING', '(Qualificação atual : %s / 5 dos %s votos)');
define('RUBBISH', 'Ruim');
define('POOR', 'Pobre');
define('FAIR', 'Justo');
define('GOOD', 'Bom');
define('EXCELLENT', 'Excelente');
define('GREAT', 'Espetacular');

// lang_cpg_die
//define('INFORMATION', 'Informação');
//define('ERROR', 'Erro');
define('_CRITICAL_ERROR', 'ERRO CRÍTICO');
define('FILE', 'Arquivo: ');
define('LINE', 'Linha: ');

// lang_display_thumbnails
define('FILENAME', 'Arquivo : ');
define('FILESIZE', 'Tamanho : ');
define('DIMENSIONS', 'Dimensões : ');
define('DATE_ADDED', 'Data de Envio : ');

// lang_get_pic_data
define('N_COMMENTS', '%s comentários');
define('N_VIEWS', '%s visualizações');
define('N_VOTES', '(%s votos)');


// lang_albmgr_php
define('ALB_NEED_NAME', 'Álbuns precisam ter um nome !');
define('CONFIRM_MODIFS', 'Tem certeza que deseja realizar as modificações ?');
define('NO_CHANGE', 'Você não fêz nenhuma mudança !');
define('NEW_ALBUM', 'Novo álbum');
define('CONFIRM_DELETE1', 'Tem certeza de quer remover este álbum ?');
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
define('UNKNOWN_CAT', 'A categoria selecionada não existe em nossa base de dados');
define('USERGAL_CAT_RO', 'A categoria do usuário não pode ser excluída !');
define('MANAGE_CAT', 'Gerenciar categorias');
define('CONFIRM_DELETE_CAT', 'Você tem certeza que deseja EXCLUIR  esta categoria ? ');
//define('CATEGORY', 'Categoria');
define('OPERATIONS', 'Operações');
define('MOVE_INTO', 'Mover em');
define('UPDATE_CREATE', 'Atualizar/Criar categoria');
define('PARENT_CAT', 'Categoria parente');
define('CAT_TITLE', 'Título da categoria');
define('CAT_DESC', 'Descrição da categoria');

// lang_config_php
define('CONFIG_TITLE', 'Configuração');
define('RESTORE_CFG', 'Restaurar configuração padrão');
define('SAVE_CFG', 'Salvar nova configuração');
define('NOTES', 'Notas');
//define('INFO', 'Informação');
define('UPD_SUCCESS', 'Configuração do catálogo atualizada');
define('RESTORE_SUCCESS', 'Configuração padrão restaurada');
define('NAME_A', 'Título ascendente');
define('NAME_D', 'Título descendente');
define('TITLE_A', 'Title ascending');
define('TITLE_D', 'Title descending');
define('DATE_A', 'Data Ascendente');
define('DATE_D', 'Data descendente');
define('RATING_A', 'Classificação ascendente');
define('RATING_D', 'Classificação descendente');
define('TH_ANY', 'Tamanho máximo');
define('TH_HT', 'Altura');
define('TH_WD', 'Largura');


// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Você precisa definir um nome para o comentário');
define('COM_ADDED', 'Comentário adicionado');
define('ALB_NEED_TITLE', 'Você deve definir um nome para o álbum !');
define('NO_UDP_NEEDED', 'Atualização não necessária.');
define('ALB_UPDATED', 'Álbum atualizado');
define('UNKNOWN_ALBUM', 'O álbum selecionado não existe ou você não tem permissão para enviar imagens para ele');
define('NO_PIC_UPLOADED', 'Nenhuma imagem enviada !<br /><br />Se você realmente selecionou uma imagem para enviar, verifique se o servidor permite envios...');
define('ERR_MKDIR', 'Falha ao criar diretório %s !');
define('DEST_DIR_RO', 'Diretório de destino %s não pode ser gravado pelo script !');
define('ERR_MOVE', 'Impossível mover %s para %s !');
define('ERR_FSIZE_TOO_LARGE', 'A imagem que você está tentando enviar é muito grande (máximo permitido %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'O tamanho da imagem é maior que o permitido (máximo permitido %s KB) !');
define('ERR_INVALID_IMG', 'O arquivo que você está tentando enviar não é um arquivo de imagem válido !');
define('ALLOWED_IMG_TYPES', 'Você só pode enviar %s imagens.');
define('ERR_INSERT_PIC', 'A imagem \'%s\' não pode ser inserida no álbum ');
define('UPLOAD_SUCCESS', 'Sua imagem foi enviada com sucesso<br /><br />Porém só será visível após a aprovação do Administrador.');
//define('INFO', 'Informação');
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
//define('COMMENT', 'comentário');
define('IM_IN_ALB', 'imagem no álbum');
define('ALB_DEL_SUCCESS', 'Álbum \'%s\' REMOVIDO');
define('ALB_MGR', 'Gerenciador de álbuns');
define('ERR_INVALID_DATA', 'Dados recebidos inválidos \'%s\'');
define('CREATE_ALB', 'Criando álbuns \'%s\'');
define('UPDATE_ALB', 'Atualizando álbuns \'%s\' título \'%s\' índice \'%s\'');
define('DEL_PIC', 'Remover imagem');
define('DEL_ALB', 'Remover álbum');
define('DEL_USER', 'Remover usuário');
//define('ERR_UNKNOWN_USER', 'O usuário selecionado não existe !');
define('COMMENT_DELETED', 'O comentário foi removido com sucesso');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'Tem certeza de EXCLUIR  esta imagem ? \\nComentários vinculados também serão excluídos.');
define('DEL_THIS_PIC', 'APAGAR ESTA FOTO');
define('SIZE', '%s x %s pixels');
define('VIEWS', '%s vezes');
define('SLIDESHOW', 'Slideshow');
define('STOP_SLIDESHOW', 'PARAR SLIDESHOW');
define('VIEW_FS', 'Clique para ver a ampliação da imagem');
define('EDIT_PIC', 'EDITA INFORMAÇÃO DA IMAGEM');

// lang_picinfo
define('PIC_INF_TITLE', 'INFORMAÇÕES DA IMAGEM');
define('PIC_INF_FILENAME', 'Nome');
define('ALBUM_NAME', 'Álbum');
define('PIC_INFO_RATING', 'Classificação (%s votos)');
define('KEYWORDS', 'Palavras-chave');
define('PIC_INF_FILE_SIZE', 'Tamanho do arquivo');
define('PIC_INF_DIMENSIONS', 'Dimensões');
define('DISPLAYED', 'Mostrado');
define('CAMERA', 'Camera');
define('DATE_TAKEN', 'Data');
define('APERTURE', 'Abertura');
define('EXPOSURE_TIME', 'Tempo de exposição');
define('FOCAL_LENGTH', 'Largura focal');
define('COMMENT', 'Comentário');
define('ADDFAV', 'Adicionar aos favoritos');
define('ADDFAVPHRASE', 'Favoritos');
define('REMFAV', 'Remover dos favoritos');
define('IPTCTITLE', 'IPTC Título');
define('IPTCCOPYRIGHT', 'IPTC Direitos');
define('IPTCKEYWORDS', 'IPTC Palavras-chave');
define('IPTCCATEGORY', 'IPTC Categoria');
define('IPTCSUBCATEGORIES', 'IPTC Sub-categoria');
define('BOOKMARK_PAGE', 'Adicionar ao Bookmark');
define('REMOVEFAV', 'Removido dos álbuns favoritos');
define('ADDEDTOFAV', 'Adicionado aos álbuns favoritos');

// lang_display_comments
define('OK', 'OK');
define('COM_EDIT_TITLE', 'Editar este comentário');
define('CONFIRM_DELETE_COM', 'Tem certeza de REMOVER este comentário ?');
define('ADD_YOUR_COMMENT', 'Adicione seu comentário');
define('COM_NAME', 'Nome');
//define('COMMENT', 'Comment');
define('YOUR_NAME', 'Seu nome');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Clique na imagem para fechar esta janela');

// lang_ecard_php
define('E_TITLE', 'Enviar foto a um amigo');
define('INVALID_EMAIL', '<b>Atenção</b> : endereço eletrônico inválido !');
define('E_ECARD_TITLE', 'Há um e-card %s para você');
define('VIEW_ECARD', 'Se não estiver aparecendo normalmente clique neste link');
define('VIEW_MORE_PICS', 'Clique aqui para ver mais imagens !');
define('SEND_SUCCESS', 'Seu e-card foi enviado');
define('SEND_FAILED', 'Desculpe, mas o servidor não pode enviar seu e-card...');
define('FROM', 'Remetente');
define('_YOUR_NAME', 'Seu nome');
define('YOUR_EMAIL', 'Seu Email');
define('TO', 'Para');
define('RCPT_NAME', 'Destinatário');
define('RCPT_EMAIL', 'Email do destinatário');
define('GREETINGS', 'Saudações');
define('MESSAGE', 'Mensagem');
define('ECARD_LINK_CORRUPT', 'Desculpe mas os dados do e-card foram corrompidos por seu cliente de correio, por favor tente colar o link em seu Browser'); //NEW

// lang_editpics_php
define('PIC_INFO', 'Picture&nbsp;info');
define('ALBUM', 'Álbum');
define('EDIT_TITLE', 'Título');
define('DESC', 'Descrição');
//define('KEYWORDS', 'Palavras-chave');
define('PIC_INFO_STR', '%sx%s - %sKB - %s visitas - %s votos');
define('APPROVE', 'Aprovar imagem');
define('POSTPONE_APP', 'Adiar aprovação');
//define('DEL_PIC', 'Delete picture');
define('READ_EXIF', 'Leia EXIF info novamente');
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
define('DISK_QUOTA', 'Cota de disco');
define('CAN_RATE', 'Pode avaliar imagens');
define('CAN_SEND_ECARDS', 'Pode enviar e-cards');
define('CAN_POST_COM', 'Pode enviar comentários');
define('CAN_UPLOAD', 'Pode enviar imagens');
define('CAN_HAVE_GALLERY', 'Pode ter uma galeria pessoal');
//define('APPLY', 'Aplicar modificações');
define('CREATE_NEW_GROUP', 'Criar novo grupo');
define('DEL_GROUPS', 'Apagar grupo(s) selecionado(s)');
define('CONFIRM_DEL', 'CUIDADO: Ao remover um grupo seu conteúdo será transferido para \'Registrados\' !\\n\\nQuer continuar ?');
define('GROUP_TITLE', 'Gerenciar grupos');
define('APPROVAL_1', 'Aprovação pública (1)');
define('APPROVAL_2', 'Aaprovação privada (2)');
define('NOTE1', '<b>(1)</b> Envios para um álbum público requerem aprovação do administrador');
define('NOTE2', '<b>(2)</b> Envios requerem aprovação do administrador');
//define('NOTES', 'Notas');

// lang_index_php
define('WELCOME', 'Bem vindo!');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'Tem certeza que deseja EXCLUIR este álbum ? Todas as imagens e comentários serão excluídos.');
//define('DELETE', 'DELETE');
define('MODIFY', 'PROPRIEDADES');
//define('EDIT_PICS', 'EDIT PICS');

// lang_list_categories
define('HOME', _HOME);
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
define('MOD_CAN_UPLOAD', 'Visitantes podem enviar imagens');
define('CAN_POST_COMMENTS', 'Visitantes podem enviar comentários');
define('MOD_CAN_RATE', 'Visitantes podem avaliar imagens');
define('USER_GAL', 'Galeria do Usuário');
define('NO_CAT', '* Sem categoria *');
define('ALB_EMPTY', 'Álbum vazio');
define('LAST_UPLOADED', 'Último envio');
define('PUBLIC_ALB', 'Todos (álbum público)');
define('ME_ONLY', 'Apenas eu');
define('OWNER_ONLY', 'Proprietário (%s) apenas');
define('GROUPP_ONLY', 'Membros do  grupo\'%s\' ');
define('ERR_NO_ALB_TO_MODIFY', 'Nenhum álbum que você pode modificar na base de dados.');
define('UPDATE', 'Atualizar álbum');

// lang_rate_pic_php
define('ALREADY_RATED', 'Desculpe, mas você ja avaliou esta imagem');
define('RATE_OK', 'Seu voto foi aceito');

// lang_register_php
define('USERNAME', 'Usuário');
define('GROUP', 'Grupo');
define('DISK_USAGE', 'Uso do disco');
define('X_S_PROFILE', '%s\'s profile');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Revisar comentários');
define('NO_COMMENT', 'Não há comentários para revisar');
define('N_COMM_DEL', '%s comentário(s) removido(s)');
define('N_COMM_DISP', 'Número de comentários ');
define('R_SEE_PREV', 'Ver anterior');
define('R_SEE_NEXT', 'Ver próximo');
define('R_DEL_COMM', 'Excluir comentários selecionados');

// lang_search_php
define('S_SEARCH', 'Pesquisar na coleção de imagens');

// lang_search_new_php
define('PAGE_TITLE', 'Pesquisar novas imagens');
define('SELECT_DIR', 'Selecionar diretório');
define('SELECT_DIR_MSG', 'Esta função permite enviar diversas imagens ao mesmo tempo.<br /><br />Selecione o diretório das imagens');
define('NO_PIC_TO_ADD', 'Não há imagens para enviar');
define('NEED_ONE_ALBUM', 'Você precisa ter pelo menos um álbum para usar esta função');
define('WARNING', 'CUIDADO');
define('CHANGE_PERM', 'O script não pode gravar neste diretório que deve possuir permissão 755 ou 777 !');
define('TARGET_ALBUM', '<b>Colocar imagens do &quot;</b>%s<b>&quot; em </b>%s');
define('FOLDER', 'Pasta');
define('IMAGE', 'Imagem');
//define('ALBUM', 'Album');
define('RESULT', 'Resultado');
define('DIR_RO', 'Não gravável. ');
define('DIR_CANT_READ', 'Não pode ser lido. ');
define('INSERT', 'Adicionando novas imagens à galeria');
define('LIST_NEW_PIC', 'Lista das novas imagens');
define('INSERT_SELECTED', 'Inserir imagens selecionadas');
define('NO_PIC_FOUND', 'Não há imagens novas');
define('BE_PATIENT', 'Por favor tenha paciência. O sistema nescessita de tempo para enviar suas imagens');
define('SN_NOTES', '<ul><li><b>OK</b> : Significa que foi enviado com sucesso<li><b>DP</b> : Significa que existe uma duplicata na base de datos<li><b>PB</b> : significa que não pôde ser enviado. Verifique suas permissões e corretos endereços.<li>Se o OK, DP, PB \'signs\' não aparecem, clique na imagem com problema para receber a mensagem do erro<li>Se receber mensagem de expiração, acione reload</ul>');
define('SELECT_ALBUM', 'Selecione álbun');
define('NO_ALBUM', 'Nome do álbum não selecionado. Clique em voltar, e selecione um álbum para inserir sua imagem');

// lang_upload_php
define('UP_TITLE', 'envio de imagem');
define('MAX_FSIZE', 'Tamanho máximo permitido %s KB');
//define('ALBUM', 'Álbum');
define('PICTURE', 'Imagem');
define('PIC_TITLE', 'Título');
define('DESCRIPTION', 'Descrição');
define('UP_KEYWORDS', 'Palavras-chave (separar somente com espaços)');
define('ERR_NO_ALB_UPLOADABLES', 'desculpe. Você não está autorizado a enviar para este álbum');

// lang_usermgr_php
define('U_TITLE', 'Gerenciar usuários');
//define('NAME_A', 'Nome Ascendente');
//define('NAME_D', 'Nome Descendente');
define('GROUP_A', 'Grupo Ascendente');
define('GROUP_D', 'Grupo Descendente');
define('REG_A', 'Data de registro Ascendente');
define('REG_D', 'Data de registro Descendente');
define('PIC_A', 'Contagem de imagens ascendente');
define('PIC_D', 'Contagem de imagem descendente');
define('DISKU_A', 'Uso de disco ascendente');
define('DISKU_D', 'Uso de disco descendente');
define('SORT_BY', 'Listar usuários por');
define('ERR_NO_USERS', 'Tabela de usuários está vazia !');
define('ERR_EDIT_SELF', 'Você não pode alterar os dados \'Meu Perfil\' ');
define('EDIT', 'EDITAR');
//define('DELETE', 'EXCLUIR');
define('U_NAME', 'Usuário');
//define('GROUP', 'Grupo');
define('INACTIVE', 'Inativo');
//define('OPERATIONS', 'Operações');
define('PICTURES', 'Imagens');
define('DISK_SPACE', 'Espaço usado / Cota');
define('REGISTERED_ON', 'Registrado em');
define('U_USER_ON_P_PAGES', '%d usuários em %d página(s)');
define('USER_CONFIRM_DEL', 'Tem certeza que quer EXCLUIR este usuário ? \\nTodas as imagens e álbuns dele serão removidas.');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'Usuário selecionado não existe !');
define('MODIFY_USER', 'Modificar usuário');
//define('NOTES', 'Notas');
define('NOTE_LIST', '<li>Se você não quer alterar sua senha, deixe o campo em branco');
define('PASSWORD', 'Senha');
define('USER_ACTIVE', 'Usuário é ativo');
define('USER_GROUP', 'Grupo de usuários');
define('USER_EMAIL', 'E-mail do usuário');
define('USER_WEB_SITE', 'Site do usuário');
define('CREATE_NEW_USER', 'Criar novo usuário');
define('USER_FROM', 'Endereço');
define('USER_INTERESTS', 'Interesses');
define('USER_OCC', 'Ocupação');

// lang_util_php
define('UTIL_TITLE', 'Redimensionar imagens');
define('WHAT_IT_DOES', 'O que isto faz ?');
define('WHAT_UPDATE_TITLES', 'Atualizar títulos a partir do nome do arquivo');
define('WHAT_DELETE_TITLE', 'Apagar títulos');
define('WHAT_REBUILD', 'Reconstruir miniaturas e redimensionar as imagens');
define('WHAT_DELETE_ORIGINALS', 'Apaga as imagens com o tamanho original e substitui por novas versões');
define('U_FILE', 'Arquivo');
define('TITLE_SET_TO', 'Título mudado para');
define('SUBMIT_FORM', 'Enviar');
define('UPDATED_SUCCESFULLY', 'Atualizado com sucesso');
define('ERROR_CREATE', 'Erro na tentativa de criação');
define('CONTIN', 'Processar mais imagens');
define('MAIN_SUCCESS', 'O arquivo %s foi usado com sucesso para a imagem principal');
define('ERROR_RENAME', 'erro na renomeação de %s para %s');
define('ERROR_NOT_FOUND', 'O arquivo %s não foi encontrado');
define('U_BACK', 'Voltar atrás');
define('THUMBS_WAIT', 'Atualizando miniaturas e/ou redimensionando imagens. Por favor, aguarde...');
define('THUMBS_CONTINUE_WAIT', 'A atualização ainda está sendo processada...');
define('TITLES_WAIT', 'A atualizar títulos...');
define('DELETE_WAIT', 'A apagar títulos...');
define('REPLACE_WAIT', 'Apagando originais e substituindo pelas imagens redimensionadas...');
define('INSTRUCTION', 'Instruções rápidas');
define('INSTRUCTION_ACTION', 'Selecionar ação');
define('INSTRUCTION_PARAMETER', 'Selecionar parâmetros');
define('INSTRUCTION_ALBUM', 'Selecionar álbum');
define('INSTRUCTION_PRESS', 'Cliques %s');
define('U_UPDATE', 'Atualizar miniaturas e/ou redimensionar imagens');
define('UPDATE_WHAT', 'O que deve ser atualizado');
define('UPDATE_THUMB', 'Só as miniaturas');
define('UPDATE_PIC', 'Só redimensionar imagens');
define('UPDATE_BOTH', 'Ambos, as miniaturas e imagens redimensionadas');
define('UPDATE_NUMBER', 'Número de imagens processadas por clique');
define('UPDATE_OPTION', '(Tente por esta opção com valores mais baixos se tiverem acontecendo timeouts)');
define('FILENAME_TITLE', 'Arquivo ? Título da imagem');
define('FILENAME_HOW', 'Como deve ser o nome do arquivo modificado');
define('FILENAME_REMOVE', 'Remova a extensão .jpg e substitua os _ (underline) por espaços');
define('FILENAME_EURO', 'Modificar 2003_11_23_13_20_20.jpg para 23/11/2003 13:20');
define('FILENAME_US', 'Modificar 2003_11_23_13_20_20.jpg para 11/23/2003 13:20');
define('FILENAME_TIME', 'Modificar 2003_11_23_13_20_20.jpg para 13:20');
define('UT_DELETE', 'Apagar títulos das imagens ou as imagens em tamanho original');
define('DELETE_TITLE', 'Apagar títulos das imagens');
define('DELETE_ORIGINAL', 'Apagar fotos em tamanho original');
define('DELETE_REPLACE', 'Apaga as imagens originais e substituir pelas novas imagens redimensionadas');
//define('SELECT_ALBUM', 'Selecionar album');

// lang_pagetitle_php
define('VIEWING', 'Vendo as imagens');
define('USR', 'Galeria de Fotos de');
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
$lang_byte_units = array('Bytes', 'KB', 'MB');
// Day of weeks and months
$lang_day_of_week = array('Dom','Seg','Ter','Qua','Qui','Sex','Sab',);
$lang_month = array('Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez',);
$lang_meta_album_names = array(
    'random' => 'Imagens Randômicas',
    'lastup' => 'Últimas Adições',
    'lastupby' => 'My Last Additions', // new 1.2.2
    'lastalb' => 'Last updated albums',
    'lastcom' => 'Últimos Comentários',
    'lastcomby' => 'My Last comments', // new 1.2.2
    'topn' => 'Mais Visualizados',
    'toprated' => 'Topo de Linha',
    'lasthits' => 'Últimos Visualizados',
    'search' => 'Resultado da Pesquisa',
    'favpics' => 'Favorite Pictures' // changed in cpg1.2.0nuke
    );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array(
    'title' => 'Configuração',
    'restore_cfg' => 'Restaurar configuração de fábrica',
    'save_cfg' => 'Salvar nova configuração',
    'notes' => 'Notas',
    'info' => 'Informação',
    'upd_success' => 'Configuração do catálogo atualizada',
    'restore_success' => 'Configuração de fábrica restaurada',
    'name_a' => 'Nome ascendente',
    'name_d' => 'Nome descendente',
    'title_a' => 'Title ascending', // new in cpg1.2.0
    'title_d' => 'Title descending', // new in cpg1.2.0
    'date_a' => 'Data Ascendente',
    'date_d' => 'Data descendente',
    'rating_a' => 'Rating ascending', // new in cpg1.2.0nuke
    'rating_d' => 'Rating descending', // new in cpg1.2.0nuke
    'th_any' => 'Max Aspect',
    'th_ht' => 'Height',
    'th_wd' => 'Width',
);
// start left side interpretation
$lang_config_data = array(
    // 'General settings',
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
