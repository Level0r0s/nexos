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
  $Source: /cvs/l10n/spanish/coppermine.php,v $
  $Revision: 9.10 $
  $Author: phoenix $
  $Date: 2006/08/18 01:10:55 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Views');//new in 1.2.2nuke
define('PIC_VOTES', 'Votes');//new in 1.2.2nuke
define('PIC_COMMENTS', 'Comments');//new in 1.2.2nuke

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Spanish');
define('LANG_NAME_NATIVE', 'Español');
define('LANG_COUNTRY_CODE', 'es ');
define('TRANS_NAME', 'Zhares ');
define('TRANS_EMAIL', 'zhares@zhares.com');
define('TRANS_WEBSITE', 'http://zhares.com');
define('TRANS_DATE', '');
define('CHARSET', 'utf-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Si');
define('NO', 'No');
// some common strings
define('BACK', 'volver al inicio ');
define('CONTINU', 'Procesar más imágenes');
define('INFO', 'Información');
//define('ERROR', 'ERROR');
define('ALBUM_DATE_FMT', '%d de %B de %Y');
define('LASTCOM_DATE_FMT', '%d/%m/%y a las %H:%M');
define('LASTUP_DATE_FMT', '%d de %B de %Y');
define('REGISTER_DATE_FMT', '%d de %B de %Y');
define('LASTHIT_DATE_FMT', '%d de %B de %Y a las %I:%M %p ');
define('COMMENT_DATE_FMT', '%d de %B de %Y a las %I:%M %p ');

// lang_meta_album_names
define('RANDOM', 'Fotos al azar');
define('LASTUP', 'Últimas fotos');
define('LASTUPBY', 'Mis últimos añadidos');
define('LASTALB', 'Últimos álbumes modificados');
define('LASTCOM', 'Últimos comentarios ');
define('LASTCOMBY', 'Mis últimos comentarios');
define('TOPN', 'Más vistas');
define('TOPRATED', 'Más valoradas');
define('LASTHITS', 'Últimas vistas');
define('SEARCH', 'Buscar entre todas las fotos ');
define('FAVPICS', 'Fotos favoritas ');

// lang_errors
define('ACCESS_DENIED', 'No tienes permisos para acceder a esta página.');
define('PERM_DENIED', 'No tienes permisos para realizar esta operación.');
define('PARAM_MISSING', 'Llamada a Script sin los parámetros requeridos.');
define('NON_EXIST_AP', '¡El álbum/foto seleccionado no existe!');
define('QUOTA_EXCEEDED', 'Cuota de disco excedida<br /><br />Tienes una cuota de disco de [quota]K, ');
define('GD_FILE_TYPE_ERR', 'Cuando se usa la librería de imagen GD solamente están permitidos ');
define('INVALID_IMAGE', 'La imagen que has añadido está corrupta o no puede ser tratada por ');
define('RESIZE_FAILED', 'Incapaz de crear miniaturas o imagen de tamaño reducido.');
define('NO_IMG_TO_DISPLAY', 'Ninguna imagen que enseñar.');
define('NON_EXIST_CAT', 'La categoría seleccionada no existe.');
define('ORPHAN_CAT', 'Una categoría no tiene padre, ejecuta la utilidad de categorías ');
define('DIRECTORY_RO', 'El directorio \'%s\' no tiene permisos de escritura, las fotos no pueden ser borradas.');
define('NON_EXIST_COMMENT', 'El comentario seleccionado no existe.');
define('PIC_IN_INVALID_ALBUM', '¿¡La foto está en un álbum que no existe (%s)!? ');
define('BANNED', 'Actualmente estás expulsado respecto al uso de esta web.');
define('NOT_WITH_UDB', 'Esta función está desactivada en Coppermine porque está integrada ');
define('MEMBERS_ONLY', 'Esta función es solo para miembros, por favor ingrese.');
define('MUSTBE_GOD', 'Esta función es solo para el administrador. Usted necesita identificarse ');
define('NO_IMG_TO_APPROVE', 'No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE', 'Ir a la lista de álbumes');
define('ALB_LIST_LNK', 'Lista de Álbumes');
define('MY_GAL_TITLE', 'Ir a mi galería personal');
define('MY_GAL_LNK', 'Mi galería');
define('MY_PROF_LNK', 'Mi perfil de usuario');
define('MY_PROF_TITLE', 'Compruebe su cuota de disco y miembros');
define('ADM_MODE_TITLE', 'Ir a modo administrador');
define('ADM_MODE_LNK', 'Modo Administrador ');
define('USR_MODE_TITLE', 'Ir a modo usuario');
define('USR_MODE_LNK', 'Modo Usuario');
define('UPLOAD_PIC_TITLE', 'Insertar foto en un álbum ');
define('UPLOAD_PIC_LNK', 'Insertar foto');
define('REGISTER_TITLE', 'Crear un usuario ');
define('REGISTER_LNK', 'Registrarse');
define('LOGIN_LNK', 'Conectar');
define('LOGOUT_LNK', 'Desconectar');
define('LASTUP_LNK', 'Últimas fotos ');
define('LASTUP_TITLE', 'Imágenes recién subidas');
define('LASTCOM_TITLE', 'Imágenes en orden de último comentario');
define('LASTCOM_LNK', 'Últimos comentarios');
define('TOPN_TITLE', 'Imágenes que han sido vistas por mayoría');
define('TOPN_LNK', 'Más vistas');
define('TOPRATED_TITLE', 'Top imágenes ');
define('TOPRATED_LNK', 'Más valoradas');
define('SEARCH_TITLE', 'Search Photo Collection');
define('SEARCH_LNK', 'Buscar');
define('FAV_TITLE', 'Mis Favoritos');
define('FAV_LNK', 'My Favorites');
define('HELP_TITLE', 'HELP');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Aprobar Uploads');
define('CONFIG_LNK', 'Configuración');
define('ALBUMS_LNK', 'Álbumes ');
define('CATEGORIES_LNK', 'Categorías');
define('USERS_LNK', 'Usuarios');
define('GROUPS_LNK', 'Grupos');
define('COMMENTS_LNK', 'Comentarios');
define('SEARCHNEW_LNK', 'Añadir Fotos (Batch)');
define('UTIL_LNK', 'Cambiar tamaño de las fotos');
define('BAN_LNK', 'Ban Users');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Crear / ordenar álbumes');
define('MODIFYALB_LNK', 'Modificar mis álbumes');
//define('MY_PROF_LNK', 'My profile');

// lang_cat_list
define('CATEGORY', 'Categoría');
define('ALBUMS', 'Álbumes ');
//define('PICTURES', 'Fotos');

// lang_album_list
define('ALBUM_ON_PAGE', '%d álbumes en %d página(s) ');
// lang_thumb_view
define('DATE', 'FECHA ');
define('NAME', 'NOMBRE');
define('TITLE', 'TITULO');
define('SORT_DA', 'Ordenado por fecha ascendente');
define('SORT_DD', 'Ordenado por fecha descendente');
define('SORT_NA', 'Ordenado por nombre ascendente');
define('SORT_ND', 'Ordenado por nombre descendente ');
define('SORT_TA', 'Ordenado por título ascendente');
define('SORT_TD', 'Ordenado por título descendente');
define('PIC_ON_PAGE', '%d fotos en %d página(s)');
define('USER_ON_PAGE', '%d usuarios en %d página(s)');
define('SORT_RA', 'Buscar por orden ascendente');
define('SORT_RD', 'Buscar por orden descendente');
define('THUMB_RATING', 'Valoración (%s votos)');
define('SORT_TITLE', 'Buscar imágenes por: ');

// lang_img_nav_bar
define('THUMB_TITLE', 'Volver al índice del álbum');
define('PIC_INFO_TITLE', 'Mostrar/ocultar información de la foto');
define('SLIDESHOW_TITLE', 'Presentación');
define('SLIDESHOW_DISABLED', 'las postales están deshabilitadas');
define('SLIDESHOW_DISABLED_MSG', 'Esta función es solo para miembros, por favor ingrese.');
define('ECARD_TITLE', 'Una foto de %s para ti');
define('ECARD_DISABLED', 'Envío de fotos deshabilitado ');
define('ECARD_DISABLED_MSG', 'No tienes permisos para enviar fotos');
define('PREV_TITLE', 'Ver foto anterior ');
define('NEXT_TITLE', 'Ver foto siguiente');
define('PIC_POS', 'FOTO %s/%s');
define('NO_MORE_IMAGES', 'No hay más imágenes en esta galería ');
define('NO_LESS_IMAGES', 'Esta es la primera imagen en la galería ');

// lang_rate_pic
define('RATE_THIS_PIC', 'Valorar esta foto');
define('NO_VOTES', '(No hay votos)');
define('RATING', '(valoración actual : %s / 5 con %s votos)');
define('RUBBISH', 'Mala ');
define('POOR', 'Regular');
define('FAIR', 'Normal ');
define('GOOD', 'Buena');
define('EXCELLENT', 'Excelente');
define('GREAT', 'Genial');

// lang_cpg_die
//define('INFO', 'Información');
//define('ERROR', 'Error');
define('_CRITICAL_ERROR', 'Error crítico');
define('FILE', 'Fichero');
define('LINE', 'Línea:');

// lang_display_thumbnails
define('FILENAME', 'Nombre del fichero');
define('FILESIZE', 'Tamaño:');
define('DIMENSIONS', 'Dimensiones ');
define('DATE_ADDED', 'Fecha de alta:');

// lang_get_pic_data
define('N_COMMENTS', '%s comentarios ');
define('N_VIEWS', '%s veces vista');
define('N_VOTES', '(%s votos) ');


// lang_albmgr_php
define('ALB_NEED_NAME', '¡Los álbumes deben tener un nombre!');
define('CONFIRM_MODIFS', '¿Estás seguro de aplicar estas modificaciones? ');
define('NO_CHANGE', '¡No se hizo ningún cambio! ');
define('NEW_ALBUM', 'Nuevo álbum');
define('CONFIRM_DELETE1', '¿Estás seguro de querer borrar este álbum? ');
define('CONFIRM_DELETE2', '\\\\nTodas las fotos y comentarios que contiene se perderán!');
define('SELECT_FIRST', 'Selecciona un álbum primero');
define('ALB_MRG', 'Administrador de Álbumes');
define('MY_GALLERY', '* Mi galería * ');
define('NO_CATEGORY', '* Sin categoría *');
define('DELETE', 'Borrar títulos de fotos o fotos de tamaño original');
define('NEW', 'Nuevo');
define('APPLY_MODIFS', 'Aplicar modificaciones');
define('SELECT_CATEGORY', 'Seleccionar categoría');

// lang_catmgr_php
define('MISS_PARAM', '¡Los parámetros requeridos para la operación: \'%s\' no han ');
define('UNKNOWN_CAT', 'La categoría seleccionada no existe en la base da datos ');
define('USERGAL_CAT_RO', '¡Las categorías de galerías de usuario no pueden ser borradas! ');
define('MANAGE_CAT', 'Organizador de categorías');
define('CONFIRM_DELETE', '¿Estás seguro de querer BORRAR este álbum ? \\\\nTodas las ');
//define('CATEGORY', 'Category');
define('OPERATIONS', 'Operaciones');
define('MOVE_INTO', 'Mover hacia');
define('UPDATE_CREATE', 'Modificar/Crear categoría ');
define('PARENT_CAT', 'Categoría padre');
define('CAT_TITLE', 'Título de la categoría ');
define('CAT_DESC', 'Descripción de la categoría');

// lang_config_php
define('CONFIG_TITLE', 'Configuraciõn');
define('RESTORE_CFG', 'Restaurar valores por defecto ');
define('SAVE_CFG', 'Guardar la nueva configuración');
define('NOTES', 'Notas');
//define('INFO', 'Information');
define('UPD_SUCCESS', 'La configuración de Coppermine ha sido actualizada ');
define('RESTORE_SUCCESS', 'Valores por defecto de Coppermine restaurados');
define('NAME_A', 'Ascendente por nombre ');
define('NAME_D', 'Descendente por nombre');
define('TITLE_A', 'Ascendente por título');
define('TITLE_D', 'Descendente por título');
define('DATE_A', 'Ascendente por fecha');
define('DATE_D', 'Descendente por fecha');
define('RATING_A', 'Rating ascending ');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Aspecto Máximo');
define('TH_HT', 'Altura');
define('TH_WD', 'Anchura');


// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Necesitas poner un nombre y un comentario.');
define('COM_ADDED', 'Comentario añadido.');
define('ALB_NEED_TITLE', '¡Necesitas poner un título al álbum!');
define('NO_UDP_NEEDED', 'No se necesita actualización.');
define('ALB_UPDATED', 'Álbum Actualizado');
define('UNKNOWN_ALBUM', 'El álbum seleccionado no existe o no tienes permiso para subir a este álbum');
define('NO_PIC_UPLOADED', '¡Ninguna imágen ha sido subida!<br /><br />Si realmente has seleccionado una imágen para subir, revisa si el servidor acepta la subida de archivos... o si el gif es no animado.');
define('ERR_MKDIR', '¡Error al crear el directorio %s!');
define('DEST_DIR_RO', 'Destination directory %s is not writable by the script !');
define('ERR_MOVE', 'Imposible mover %s de %s a %s');
define('ERR_FSIZE_TOO_LARGE', 'El tamaño de la imagen que has subido es muy grande (el tamaño máximo permitido es %s x %s)');
define('ERR_IMGSIZE_TOO_LARGE', 'El tamaño del archivo que has subido es muy grande (el tamaño máximo permitido es %s KB)');
define('ERR_INVALID_IMG', '¡El archivo que has subido no es un archivo de imagen váildo!');
define('ALLOWED_IMG_TYPES', 'Tú solo puedes subir %s imágenes');
define('ERR_INSERT_PIC', 'La imágen %s no puede ser insertada en el álbum ');
define('UPLOAD_SUCCESS', 'Tu imágen fue subida correctamente<br /><br />'.((is_admin()? '' :'Será visible cuando el Administrador la aprueve.')));
//define('INFO', 'Information');
define('ERR_COMMENT_EMPTY', '¡Tu comentario está vacío!');
define('ERR_INVALID_FEXT', 'Solo archivos con las siguientes extensiones son aceptados: <br /<br />%s.');
define('NO_FLOOD', 'Lo siento , pero eres el autor del último comentario posteado en esta imágen<br /><br /> Puedes editar tu último comentario si quieres modificarlo.');
define('REDIRECT_MSG', 'Estás siendo redireccionado.<br /><br /><br />Haz Click en \'CONTINUAR\' si la página no redirecciona automáticamente.');
define('UPL_SUCCESS', 'Tu imágen ha sido añadida correctamente.');

// lang_delete_php
define('CAPTION', 'Título');
define('FS_PIC', 'Imagen a tamaño completo');
define('DEL_SUCCESS', 'borrado correctamente');
define('NS_PIC', 'imagen tamaño normal');
define('ERR_DEL', 'no puede ser borrado');
define('THUMB_PIC', 'miniatura');
//define('COMMENT', 'Comentario');
define('IM_IN_ALB', 'fotos en el álbum');
define('ALB_DEL_SUCCESS', 'álbum \'%s\' borrado ');
define('ALB_MGR', 'Organizador de álbumes');
define('ERR_INVALID_DATA', 'Datos inválidos recibidos en \'%s\' ');
define('CREATE_ALB', 'Creando el álbum \'%s\' ');
define('UPDATE_ALB', 'Actualizando álbum \'%s\' con el título \'%s\' y el Índice ');
define('DEL_PIC', 'Borrar foto');
define('DEL_ALB', 'Borrar álbum');
define('DEL_USER', 'Borrar usuario ');
//define('ERR_UNKNOWN_USER', '¡El usuario seleccionado no existe! ');
define('COMMENT_DELETED', 'El comentario ha sido borrado');

// lang_display_image_php
define('PIC_CONFIRM_DEL', '¿Estás seguro de querer BORRAR este usuario? \\\\nTodas sus fotos ');
define('DEL_THIS_PIC', 'DELETE THIS PICTURE');
define('SIZE', '%s x %s pixels');
define('VIEWS', '%s veces');
define('SLIDESHOW', 'Presentación');
define('STOP_SLIDESHOW', 'DETENER PRESENTACIÓN ');
define('VIEW_FS', 'Pulsa aquí para ver la imagen a tamaño completo ');
define('EDIT_PIC', 'EDITAR LA INFORMACIÓN DE LA IMAGEN');

// lang_picinfo
define('PIC_INF_TITLE', 'Informaciõn de la foto');
define('PIC_INF_FILENAME', 'Nombre del fichero');
define('ALBUM_NAME', 'Nombre del álbum ');
define('PIC_INFO_RATING', 'Valoraciõn (%s votos)');
define('KEYWORDS', 'Palabras clave (separadas por espacios) ');
define('PIC_INF_FILE_SIZE', 'Tamaño del fichero');
define('PIC_INF_DISPLAYED', 'Se ha visto ');
define('DISPLAYED', 'Se ha visto');
define('CAMERA', 'Cámara');
define('DATE_TAKEN', 'Fecha de la foto');
define('APERTURE', 'Apertura ');
define('EXPOSURE_TIME', 'Tiempo de exposición ');
define('FOCAL_LENGTH', 'Longitud del foco');
define('COMMENT', 'Comment');
define('ADDFAV', 'Añadir a Favoritos ');
define('ADDFAVPHRASE', 'Favoritos ');
define('REMFAV', 'Quitar de Favoritos');
define('IPTCTITLE', 'IPTC Título ');
define('IPTCCOPYRIGHT', 'IPTC Copyright ');
define('IPTCKEYWORDS', 'IPTC Palabras claves ');
define('IPTCCATEGORY', 'IPTC Categoría');
define('IPTCSUBCATEGORIES', 'IPTC Subcategorías ');
define('BOOKMARK_PAGE', 'Imágenes favoritas');
define('REMOVEFAV', 'Eliminado del Álbum \'Favoritos\'.');
define('ADDEDTOFAV', 'Añadido al Álbum \'Favoritos\'. ');

// lang_display_comments
define('OK', 'OK ');
define('COM_EDIT_TITLE', 'Editar el comentario');
define('CONFIRM_DELETE_COM', '¿Estás seguro de querer eliminar éste comentario?');
define('ADD_YOUR_COMMENT', 'Añadir un comentario');
define('COM_NAME', 'Tu nombre');
//define('COMMENT', 'Comment');
define('YOUR_NAME', 'Anónimo');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Pulsa en la imagen para cerrar esta ventana ');

// lang_ecard_php
define('E_TITLE', 'Enviar foto a un amigo');
define('INVALID_EMAIL', '<b>Atención</b> : ¡dirección e-mail incorrecta! ');
define('E_ECARD_TITLE', 'Una foto de %s para ti');
define('VIEW_ECARD', 'Si la foto no se ve correctamente, pulsa en este link');
define('VIEW_MORE_PICS', '¡Pulsa aquí para ver más fotos!');
define('SEND_SUCCESS', 'La foto ha sido enviada');
define('SEND_FAILED', 'Perdone, pero el servidor no puede enviar la foto...');
define('FROM', 'De ');
define('_YOUR_NAME', 'Tu nombre');
define('YOUR_EMAIL', 'Tu dirección de e-mail');
define('TO', 'A');
define('RCPT_NAME', 'Nombre de tu amigo ');
define('RCPT_EMAIL', 'Dirección e-mail de tu amigo ');
define('GREETINGS', 'Título del mensaje');
define('MESSAGE', 'Mensaje');
define('ECARD_LINK_CORRUPT', 'Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser'); //NEW

// lang_editpics_php
define('PIC_INFO', 'Información');
define('ALBUM', 'álbum');
define('EDIT_TITLE', 'Título');
define('DESC', 'Descripción ');
//define('KEYWORDS', 'Keywords');
define('PIC_INFO_STR', '%sx%s - %sKB - %s veces vista - %s votos ');
define('APPROVE', 'Aprobar la foto ');
define('POSTPONE_APP', 'Posponer aprobado de foto ');
//define('DEL_PIC', 'Delete picture');
define('READ_EXIF', 'Read EXIF info again');
define('RESET_VIEW_COUNT', 'Poner a cero el contador de veces que se ha visto');
define('RESET_VOTES', 'Poner a cero los votos ');
define('DEL_COMM', 'Borrar comentarios seleccionados ');
define('UPL_APPROVAL', 'Aprobar uploads ');
define('EDIT_PICS', 'EDITAR FOTOS ');
define('SEE_NEXT', 'Ver el siguiente');
define('SEE_PREV', 'Ver el anterior');
define('N_PIC', '%s foto/s ');
define('N_OF_PIC_TO_DISP', 'Número de fotos a mostrar');
define('APPLY', 'Validar los cambios');

// lang_groupmgr_php
define('GROUP_NAME', 'Nombre del grupo');
define('DISK_QUOTA', 'Cuota de disco ');
define('CAN_RATE', 'Los visitantes pueden valorar las fotos');
define('CAN_SEND_ECARDS', 'Pueden enviar postales ');
define('CAN_POST_COM', 'Pueden añadir comentarios ');
define('CAN_UPLOAD', 'Los visitantes pueden añadir fotos ');
define('CAN_HAVE_GALLERY', 'Pueden tener galerías personales ');
//define('APPLY', 'Apply modifications');
define('CREATE_NEW_GROUP', 'Crear nuevo grupo');
define('DEL_GROUPS', 'Borrar el/los grupo(s) seleccionados');
define('CONFIRM_DEL', 'Cuidado, cuando eliminas un grupo, los usuarios de éste grupo deben ser transferidos al grupo \'Registrados\'<br /> ¿Quieres Continuar?');
define('GROUP_TITLE', 'Configurar grupos de usuarios');
define('APPROVAL_1', 'Aprobación álbum público (1)');
define('APPROVAL_2', 'Aprobación álbum privado (2) ');
define('NOTE1', '<b>(1)</b> Añadir fotos en un álbum público requerirá ');
define('NOTE2', '<b>(2)</b> Añadir fotos en un álbum que pertenece al ');
//define('NOTES', 'Notes');

// lang_index_php
define('WELCOME', '¡Bienvenido!');

// lang_album_admin_menu'
define('CONFIRM_DELETE_ALB', '¿Estás seguro de querer ELIMINAR éste álbum? <br />Todas las imágenes se borrarán también.');
//define('DELETE', 'BORRAR');
define('MODIFY', 'MODIFICAR');
//define('EDIT_PICS', 'EDIT PICS');

// lang_list_categories
define('HOME', _HOME);
define('STAT1', '<b>[pictures]</b> fotos en <b>[álbumes]</b> álbumes ');
define('STAT2', '<b>[imágenes]</b> fotos en <b>[álbumes]</b> ');
define('XX_S_GALLERY', 'Galería de %s ');
define('STAT3', '<b>[imágenes]</b> fotos en <b>[álbumes]</b> ');

// lang_list_users
define('USER_LIST', 'Lista de usuarios ');
define('NO_USER_GAL', 'No existen usuarios con permisos para tener álbumes');
define('N_ALBUMS', '%s album(s)');
define('N_PICS', '%s foto(s)');

// lang_list_albums
define('N_PICTURES', '%s fotos ');
define('LAST_ADDED', ', Última añadida el %s ');

// lang_modifyalb_php
define('UPD_ALB_N', 'Modificar álbum %s ');
define('GENERAL_SETTINGS', 'Configuración general ');
define('ALB_TITLE', 'Titulo del álbum');
define('ALB_CAT', 'Categoría del álbum');
define('ALB_DESC', 'Descripción del álbum');
define('ALB_THUMB', 'Miniaturas del álbum ');
define('ALB_PERM', 'Permisos para este álbum ');
define('CAN_VIEW', 'Este álbum puede ser visto por');
define('MOD_CAN_UPLOAD', 'Visitors can upload pictures');
define('CAN_POST_COMMENTS', 'Los visitantes pueden añadir comentarios ');
define('MOD_CAN_RATE', 'Visitors can rate pictures');
define('USER_GAL', 'Galería de usuario');
define('NO_CAT', '* Sin categoría * ');
define('ALB_EMPTY', 'El álbum está vacío ');
define('LAST_UPLOADED', 'Última foto añadida');
define('PUBLIC_ALB', 'Todo el mundo (álbum público)');
define('ME_ONLY', 'Solamente yo');
define('OWNER_ONLY', 'Solamente el dueño del álbum (%s)');
define('GROUPP_ONLY', 'Miembros del grupo \'%s\' ');
define('ERR_NO_ALB_TO_MODIFY', 'No puedes modificar ningún álbum en la base de datos.');
define('UPDATE', 'Actualizar miniaturas y/o tamaños de fotos ');

// lang_rate_pic_php
define('ALREADY_RATED', 'Disculpa, pero ya has votado anteriormente a esta foto ');
define('RATE_OK', 'Tu voto ha sido contabilizado ');

// lang_register_php
define('USERNAME', 'Nombre de usuario ');
define('X_S_PROFILE', 'Perfil de %s ');
define('GROUP', 'Grupo');
define('DISK_USAGE', 'Uso de disco');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Revisar comentarios');
define('NO_COMMENT', 'No existen comentarios que mostrar ');
define('N_COMM_DEL', '%s comentario(s) borrado(s) ');
define('N_COMM_DISP', 'Número de comentarios a mostrar');
define('R_SEE_PREV', 'Ver el anterior');
define('R_SEE_NEXT', 'Ver el siguiente');
define('R_DEL_COMM', 'Borrar comentarios seleccionados');

// lang_search_php
define('S_SEARCH', 'Buscar entre todas las fotos');

// lang_search_new_php
define('PAGE_TITLE', 'Buscar nuevas fotos');
define('SELECT_DIR', 'Selecciona directorio');
define('SELECT_DIR_MSG', 'Esta función te permite añadir de forma automática las fotos ');
define('NO_PIC_TO_ADD', 'No hay ninguna foto para añadir');
define('NEED_ONE_ALBUM', 'Necesitas al menos un álbum para utilizar esta función ');
define('WARNING', 'Atención ');
define('CHANGE_PERM', '¡El script no puede escribir en este directorio, necesitas cambiar sus permisos ');
define('TARGET_ALBUM', '<b>colocar las fotos del directorio &quot;</b>%s<b>&quot; en </b>%s');
define('FOLDER', 'Carpeta');
define('IMAGE', 'Foto ');
//define('ALBUM', 'Album');
define('RESULT', 'Resultado');
define('DIR_RO', 'No se puede escribir. ');
define('DIR_CANT_READ', 'No se puede leer.');
define('INSERT', 'Añadiendo nuevas fotos a la galería ');
define('LIST_NEW_PIC', 'Listado de nuevas fotos');
define('INSERT_SELECTED', 'Añadir las fotos seleccionadas');
define('NO_PIC_FOUND', 'No se encontró ninguna foto nueva');
define('BE_PATIENT', 'Por favor, se paciente, el script necesita tiempo para añadir las fotos ');
define('SN_NOTES', '<ul><li><b>OK</b> : means that the picture was succesfully added<li><b>DP</b> : means that the picture is a duplicate and is already in the database<li><b>PB</b> : means that the picture could not be added, check your configuration and the permission of directories where the pictures are located<li>If the OK, DP, PB \'signs\' does not appear click on the broken picture to see any error message produced by PHP<li>If your browser timeout, hit the reload button</ul>');
define('SELECT_ALBUM', 'Selecciona álbum');
define('NO_ALBUM', 'No se seleccionó ningún álbum, vuelva atrás y seleccione ');

// lang_upload_php
define('UP_TITLE', 'Insertar nueva foto');
define('MAX_FSIZE', 'El tamaño máximo de fichero admitido es de %s KB ');
//define('ALBUM', 'Album');
define('PICTURE', 'Foto ');
define('PIC_TITLE', 'Título de la foto ');
define('DESCRIPTION', 'Descripción de la foto');
define('UP_KEYWORDS', 'Keywords (separate with spaces)');
define('ERR_NO_ALB_UPLOADABLES', 'Disculpa, pero no hay ningún álbum donde esté permitido insertar ');

// lang_usermgr_php
define('U_TITLE', 'Administrar usuarios');
//define('NAME_A', 'Name ascending');
//define('NAME_D', 'Name descending');
define('GROUP_A', 'Ascendente por grupo');
define('GROUP_D', 'Descendente por grupo');
define('REG_A', 'Ascendente por fecha de alta');
define('REG_D', 'Descendente por fecha de alta');
define('PIC_A', 'Ascendente por total de fotos ');
define('PIC_D', 'Descendente por total de fotos ');
define('DISKU_A', 'Ascendente por uso de disco ');
define('DISKU_D', 'Descendente por uso de disco ');
define('SORT_BY', 'Ordenar usuarios por ');
define('ERR_NO_USERS', '¡La tabla de usuarios está vacía! ');
define('ERR_EDIT_SELF', 'No puedes editar tu propio perfil, usa la opción \'Mi perfil de usuario\' ');
define('EDIT', 'EDITAR');
//define('DELETE', 'DELETE');
define('U_NAME', 'Nombre de usuario');
//define('GROUP', 'Group');
define('INACTIVE', 'Inactivo');
//define('OPERATIONS', 'Operaciones');
define('PICTURES', 'Fotos');
define('DISK_SPACE', 'Espacio usado / Cuota ');
define('REGISTERED_ON', 'Registrado el día ');
define('U_USER_ON_P_PAGES', '%d usuarios en %d página(s)');
define('USER_CONFIRM_DEL', '¿Estás seguro de querer ELIMINAR éste usuario? <br />Todas sus imágenes y álbumes se borrarán también. ');
define('MAIL', 'CORREO');
define('ERR_UNKNOWN_USER', '¡El usuario seleccionado no existe!');
define('MODIFY_USER', 'Modificar usuario');
//define('NOTES', 'Notes');
define('NOTE_LIST', '<li>Si no quieres cambiar la contraseña actual, deja el campo "contraseña" ');
define('PASSWORD', 'Contraseña');
define('USER_ACTIVE_CP', 'El usuario está activo ');
define('USER_GROUP_CP', 'Grupo de usuarios');
define('USER_EMAIL', 'Email del usuario');
define('USER_WEB_SITE', 'Página web del usuario');
define('CREATE_NEW_USER', 'Crear nuevo usuario');
define('USER_FROM', 'Localidad del usuario');
define('USER_INTERESTS', 'Intereses del usuario');
define('USER_OCC', 'Ocupación del usuario');

// lang_util_php
define('UTIL_TITLE', 'Resize pictures');
define('WHAT_IT_DOES', 'Qué hace');
define('WHAT_UPDATE_TITLES', 'Actualiza los nombres de fichero ');
define('WHAT_DELETE_TITLE', 'Borra los títulos');
define('WHAT_REBUILD', 'Vuelve a crear las miniaturas y otros tamaños de las fotos ');
define('WHAT_DELETE_ORIGINALS', 'Borra las fotos originales reemplazándolas con versiones de nuevo tamaño ');
define('U_FILE', 'Fichero');
define('TITLE_SET_TO', 'título a poner');
define('SUBMIT_FORM', 'enviar');
define('UPDATED_SUCCESFULLY', 'actualizado con éxito');
define('ERROR_CREATE', 'ERROR al crear');
define('CONTIN', 'Procesar más imágnes');
define('MAIN_SUCCESS', 'El fichero %s ha sido usado como foto principal con éxito ');
define('ERROR_RENAME', 'Error renombrando %s a %s');
define('ERROR_NOT_FOUND', 'No se encuentra el fichero %s ');
define('U_BACK', 'volver al inicio');
define('THUMBS_WAIT', 'Actualizando miniaturas y/o tamaños de fotos, por favor espere... ');
define('THUMBS_CONTINUE_WAIT', 'Continuando la actualización de miniaturas y/o tamaños de fotos...');
define('TITLES_WAIT', 'Actualizando títulos, por favor espere...');
define('DELETE_WAIT', 'Borrando títulos, por favor espere... ');
define('REPLACE_WAIT', 'Borrando originales y reemplazándolos con las fotos de nuevo tamaño, ');
define('INSTRUCTION', 'Instrucciones rápidas');
define('INSTRUCTION_ACTION', 'Seleccionar acción ');
define('INSTRUCTION_PARAMETER', 'Poner parámetros');
define('INSTRUCTION_ALBUM', 'Seleccionar álbum');
define('INSTRUCTION_PRESS', 'Pulsar %s');
define('U_UPDATE', 'Update thumbs and/or resized photos');
define('UPDATE_WHAT', 'Qué debe ser actualizado ');
define('UPDATE_THUMB', 'Solo miniaturas');
define('UPDATE_PIC', 'Solo tamaños de fotos ');
define('UPDATE_BOTH', 'Miniaturas y tamaños de fotos (ambos)');
define('UPDATE_NUMBER', 'Número de imágenes procesadas por cada click ');
define('UPDATE_OPTION', '(Prueba a poner un número menor si experimentas problemas de timeout)');
define('FILENAME_TITLE', 'Fichero &amp;rArr; Título de la foto');
define('FILENAME_HOW', 'Cómo debe ser el fichero modificado');
define('FILENAME_REMOVE', 'Quitar .jpg del final y reemplazar _ (underscore) con espacios ');
define('FILENAME_EURO', 'Cambiar 2003_11_23_13_20_20.jpg a 23/11/2003 13:20');
define('FILENAME_US', 'Cambiar 2003_11_23_13_20_20.jpg a 11/23/2003 13:20');
define('FILENAME_TIME', 'Cambiar 2003_11_23_13_20_20.jpg a 13:20 ');
define('UT_DELETE', 'Eliminar títulos de imágenes o imágenes originales. ');
define('DELETE_TITLE', 'Borrar títulos de fotos');
define('DELETE_ORIGINAL', 'Borrar fotos de tamaño original');
define('DELETE_REPLACE', 'Borra las imágenes originales, reemplazándolas con otras de tamaño ');
//define('SELECT_ALBUM', 'Select album');

// lang_pagetitle_php
define('VIEWING', 'Viendo foto ');
define('USR', 'Galería de');
define('PHOTOGALLERY', 'Foto Galería ');
$lang_usermgr_php = array(
    'name_a' => 'Name ascending',
    'name_d' => 'Name descending',
    'group_a' => 'Group ascending',
    'group_d' => 'Group descending',
    'reg_a' => 'Reg date ascending',
    'reg_d' => 'Reg date descending',
    'pic_a' => 'Pic count ascending',
    'pic_d' => 'Pic count descending',
    'disku_a' => 'Disk usage ascending',
    'disku_d' => 'Disk usage descending',
    );
$lang_byte_units = array('Bytes', 'KB', 'MB');
// Day of weeks and months
$lang_day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
$lang_meta_album_names = array(
    'random' => 'Fotos al azar',
    'lastup' => 'Últimas fotos',
    'lastupby' => 'My Last additions', // new 1.2.2
    'lastalb' => 'Últimos albums modificados',
    'lastcom' => 'Últimos comentarios',
    'lastcomby' => 'My Last comments', // new 1.2.2
    'topn' => 'Más vistas',
    'toprated' => 'Más valoradas',
    'lasthits' => 'Últimas vistas',
    'search' => 'Resultado de la básqueda',
    'favpics' => 'Fotos favoritas' // changed in cpg1.2.0nuke
    );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array(
	'title' => 'Configuración',
	'restore_cfg' => 'Restaurar valores por defecto',
	'save_cfg' => 'Guardar la nueva configuracin',
	'notes' => 'Notas',
	'info' => 'Información',
	'upd_success' => 'La configuración de Coppermine ha sido actualizada',
	'restore_success' => 'Valores por defecto de Coppermine restaurados',
	'name_a' => 'Ascendente por nombre',
	'name_d' => 'Descendente por nombre',
	'title_a' => 'Ascendente por título',
	'title_d' => 'Descendente por título',
	'date_a' => 'Ascendente por fecha',
	'date_d' => 'Descendente por fecha',
	'rating_a' => 'Rating ascending', // new in cpg1.2.0nuke
	'rating_d' => 'Rating descending', // new in cpg1.2.0nuke
	'th_any' => 'Max Aspect',
	'th_ht' => 'Height',
	'th_wd' => 'Width',
    );
// start left side interpretation
$lang_config_data = array(
    // General settings
        'Parmetros Generales',
    array('Nombre de la galera', 'gallery_name', 0),
    array('Descripcin de la galera', 'gallery_description', 0),
    array('Correo electrnico del administrador', 'gallery_admin_email', 0),
    array('Address to nuke folder ie http://example.com/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
    array('Tema (aspecto)', 'theme', 6),
    array('Page Specific Titles instead of >Coppermine', 'nice_titles', 1),
    //'Album list view',
        'Aspecto de la lista de albums',
    array('Anchura de la tabla principal (pixels o %)', 'main_table_width', 0),
    array('Número de niveles de categoras a mostrar', 'subcat_level', 0),
    array('Número de albums a mostrar', 'albums_per_page', 0),
    array('Número de columnas en la lista de albums', 'album_list_cols', 0),
    array('Tamao de los thumbnails en pixels', 'alb_list_thumb_size', 0),
    array('Contenido de la pgina principal', 'main_page_layout', 0),
    array('Mostrar thumbnails de albums de primer nivel en categoras', 'first_level', 1), 
//'Thumbnail view',
'Aspecto de la vista de Thumbnails',
    array('Número de columnas en la pgina de thumbnails', 'thumbcols', 0),
    array('Número de filas en la pgina de thumbnails', 'thumbrows', 0),
    array('Máximo número de tabs a mostrar', 'max_tabs', 0),
    array('Mostrar picture caption (adems del título) debajo del thumbnail', 'caption_in_thumbview', 1),
    array('Mostrar el número de comentarios debajo del thumbnail', 'display_comment_count', 1),
    array('Orden por defecto de las fotos', 'default_sort_order', 3),
    array('Minimo número de votos para que una foto aparezca el la lista de \'Ms Valoradas\' list', 'min_votes_for_rating', 0),
    array('Alts and title tags of thumbnail show title and keyword instead of picinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
// 'Image view &amp; Comment settings',
'Vista de foto y Configuración de comentarios',
    array('Anchura de la tabla donde mostrar la foto (pixels o %)', 'picture_table_width', 0),
    array('Informacin de la foto visible por defecto', 'display_pic_info', 1),
    array('Filtrar palabras malsonantes en los comentarios', 'filter_bad_words', 1),
    array('Permitir Emoticons en los comentarios', 'enable_smilies', 1),
    array('Allow several consecutive comments on one pic from the same user', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
    array('Email site admin upon comment submission' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
    array('Máxima longitud para la descripcin de una foto', 'max_img_desc_length', 0),
    array('Máximo número de caracteres en una palabra', 'max_com_wlength', 0),
    array('Máximo número de lineas en un comentario', 'max_com_lines', 0),
    array('Máxima longitud de un comentario', 'max_com_size', 0),
    array('Mostrar tira de pelcula', 'display_film_strip', 1),
    array('Número de objetos en tira de pelcula', 'max_film_strip_items', 0),
    array('Allow viewing of full size pic by anonymous', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
    array('Number of days between being able to vote on the same image','keep_votes_time',0), // new in cpg1.2.2c nuke
    array('Show fullsize picture in slideshow','fullsize_slideshow',1),
    array('Show blocks on the right of displayimage if right blocks are on at module level?', 'right_blocks', 1), // new 1.2.2
// 'Pictures and thumbnails settings',
'Configuración de las fotos y thumbnails',
    array('Calidad para los ficheros JPEG', 'jpeg_qual', 0),
    array('Place watermark on image', 'watermark', 1),
    array('Máxima anchura o altura de los thumbnail <b>*</b>', 'thumb_width', 0),
    array('Usar dimensin ( anchura o altura o Máximo para los thumbnail )<b>*</b>', 'thumb_use', 7),
    array('Crear fotos de tamao intermedio', 'make_intermediate', 1),
    array('Máxima anchura o altura de las fotos de tamao intermedio <b>*</b>', 'picture_width', 0),
    array('Máximo tamao de los fotos de usuarios por upload (KB)', 'max_upl_size', 0),
    array('Máxima anchura o altura de las fotos de usuarios por upload (pixels)', 'max_upl_width_height', 0), 
    array('Allow multiple Files to be upload with same file name', 'samename', 1), 
//'User settings',
'Configuración de usuarios',
    array('Permitir el registro de nuevos usuarios', 'allow_user_registration', 1),
/*
    array('Registro de usuarios requiere verificacin de email', 'reg_requires_valid_email', 1),
    array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),
*/
    array('Los usuarios pueden tener albums privados', 'allow_private_albums', 1), 
    array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',
'Campos extra para descripcin de fotos (dejar en blanco si no los usas)',
    array('Nombre del campo 1', 'user_field1_name', 0),
    array('Nombre del campo 2', 'user_field2_name', 0),
    array('Nombre del campo 3', 'user_field3_name', 0),
    array('Nombre del campo 4', 'user_field4_name', 0), 
// 'Pictures and thumbnails advanced settings',
'Configuración avanzada de fotos y thumbnails',
    array('Mostrar icono de album privado a usuarios no registrados', 'show_private', 1),
    array('Caracteres prohibidos en los nombres de las fotos', 'forbiden_fname_char', 0),
    array('Extensiones de fichero admitidos en los uploads', 'allowed_file_extensions', 0),
    array('Mtodo para el reescalado de fotos', 'thumb_method', 2),
    array('Path de la utilidad ImageMagick (por ejemplo /usr/bin/X11/)', 'impath', 0),
    array('Tipos de ficheros admitidos (solo vlidos con ImageMagick)', 'allowed_img_types', 0),
    array('Comandos de linea para ImageMagick', 'im_options', 0),
    array('Leer datos EXIF en ficheros de tipo JPEG', 'read_exif_data', 1),
    array('Read IPTC data in JPEG files', 'read_iptc_data', 1), // new in cpg1.2.0nuke
    array('Directorio base de los albums <b>*</b>', 'fullpath', 0),
    array('Dierctorio para las fotos subidas por los usuarios <b>*</b>', 'userpics', 0),
    array('Prefijo para las fotos de tamao intermedio <b>*</b>', 'normal_pfx', 0),
    array('Prefijo para los thumbnails <b>*</b>', 'thumb_pfx', 0),
    array('Picinfo display filename', 'picinfo_display_filename',1),// new in cpg1.2.0nuke
    array('Picinfo display album name', 'picinfo_display_album_name',1),// new in cpg1.2.0nuke
    array('Picinfo display_file_size', 'picinfo_display_file_size',1),// new in cpg1.2.0nuke
    array('Picinfo display_dimensions', 'picinfo_display_dimensions',1),// new in cpg1.2.0nuke
    array('Picinfo display_count_displayed', 'picinfo_display_count_displayed',1),// new in cpg1.2.0nuke
    array('Picinfo display_URL', 'picinfo_display_URL',1),// new in cpg1.2.0nuke
    array('Picinfo display URL as bookmark link', 'picinfo_display_URL_bookmark',1),// new in cpg1.2.0nuke
    array('Picinfo display fav album link', 'picinfo_display_favorites',1),// new in cpg1.2.0nuke
//    'Cookies &amp; Charset settings',
'Configuración de cookies y Juego de Caracteres',
    array('Nombre de la cookie usada por el script', 'cookie_name', 0),
    array('Path de la cookie usada por el script', 'cookie_path', 0),
//    array('Character encoding', 'charset', 4), 
'Miscellaneous settings',
    array('Activar modo debug', 'debug_mode', 1),
'<br /><div align="center">(*) Los campos marcados con * no deben ser cambiados si ya se tienen fotos en las galeras</div><br />'
);
// end left side interpretation
