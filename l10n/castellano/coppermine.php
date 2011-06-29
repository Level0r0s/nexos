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
  $Source: /cvs/l10n/castellano/coppermine.php,v $
  $Revision: 1.5 $
  $Author: nanocaiordo $
  $Date: 2008/03/20 11:59:24 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Veces vistas');//new in 1.2.2nuke
define('PIC_VOTES', 'Votos');//new in 1.2.2nuke
define('PIC_COMMENTS', 'Comentarios');//new in 1.2.2nuke

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Spanish');
define('LANG_NAME_NATIVE', 'Español');
define('LANG_COUNTRY_CODE', 'es ');
define('TRANS_NAME', 'Mich');
define('TRANS_EMAIL', 'mich_buchanan@hotmail.com');
define('TRANS_WEBSITE', '');
define('TRANS_DATE', '2005-01-30');
define('CHARSET', 'UTF-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Si');
define('NO', 'No');
// some common strings
define('BACK', 'Volver');
define('CONTINU', 'Continuar');
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
define('LASTUPBY', 'Mis últimos Añadidos');
define('LASTALB', 'Últimos álbums modificados');
define('LASTCOM', 'Últimos comentarios ');
define('LASTCOMBY', 'Mis últimos comentarios');
define('TOPN', 'Más vistas');
define('TOPRATED', 'Más valoradas');
define('LASTHITS', 'Últimas vistas');
define('SEARCH', 'Buscar en resultados');
define('FAVPICS', 'Fotos favoritas ');

// lang_errors
define('ACCESS_DENIED', 'No tienes permiso para acceder a esta página.');
define('PERM_DENIED', 'No tienes permiso para realizar esta operación.');
define('PARAM_MISSING', 'Llamada a Script sin los parámetros necesarios.');
define('NON_EXIST_AP', '¡El álbum/foto seleccionado no existe!');
define('QUOTA_EXCEEDED', 'Cuota de disco excedida<br /><br />Tienes una cuota de disco de [quota]K, ');
define('GD_FILE_TYPE_ERR', 'Cuando se usa la librería de imagen GD solamente están permitidos ');
define('INVALID_IMAGE', 'La imagen que has añadido está corrupta o no puede ser tratada por ');
define('RESIZE_FAILED', 'Incapaz de crear miniaturas o imagen de tamaño reducido.');
define('NO_IMG_TO_DISPLAY', 'Ninguna imagen que enseñar.');
define('NON_EXIST_CAT', 'La categoría seleccionada no existe.');
define('ORPHAN_CAT', 'Una categoría no tiene superior, ejecuta la utilidad de categorías');
define('DIRECTORY_RO', 'El directorio \'%s\' no tiene permisos de escritura, las fotos no pueden ser borradas.');
define('NON_EXIST_COMMENT', 'El comentario seleccionado no existe.');
define('PIC_IN_INVALID_ALBUM', '¿¡La foto está en un álbum que no existe (%s)!? ');
define('BANNED', 'Actualmente estás expulsado del uso de esta web.');
define('NOT_WITH_UDB', 'esta función está desactivada en Coppermine porque está integrada en el software del foro. O bien lo que intentas hacer no se soporta con esta configuración, o esta función debe de encontrarse en el software del foro.');
define('MEMBERS_ONLY', 'Esta función es solo para miembros, por favor ingrese.');
define('MUSTBE_GOD', 'Esta función es solo para el Super Administrador. Necesitas identificarte');
define('NO_IMG_TO_APPROVE', 'No hay imágenes que aprobar');

// lang_main_menu
define('ALB_LIST_TITLE', 'Ir a la lista de álbums');
define('ALB_LIST_LNK', 'Lista de álbums');
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
define('TOPN_TITLE', 'Imágenes que la mayoría ha visto');
define('TOPN_LNK', 'Más vistas');
define('TOPRATED_TITLE', 'Top imágenes ');
define('TOPRATED_LNK', 'Más valoradas');
define('SEARCH_TITLE', 'Buscar Colección de Fotos');
define('SEARCH_LNK', 'Buscar');
define('FAV_TITLE', 'Mis Favoritas');
define('FAV_LNK', 'Mis Favoritos');
define('HELP_TITLE', 'Ayuda');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Aprobar Subidas');
define('CONFIG_LNK', 'Configuración');
define('ALBUMS_LNK', 'Álbums');
define('CATEGORIES_LNK', 'Categorías');
define('USERS_LNK', 'Usuarios');
define('GROUPS_LNK', 'Grupos');
define('COMMENTS_LNK', 'Comentarios');
define('SEARCHNEW_LNK', 'Añadir Fotos (proceso)');
define('UTIL_LNK', 'Cambiar tamaño de las fotos');
define('BAN_LNK', 'Ban Users');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Crear / ordenar álbums');
define('MODIFYALB_LNK', 'Modificar mis álbums');
//define('MY_PROF_LNK', 'Mi Perfil');

// lang_cat_list
define('CATEGORY', 'Categoría');
define('ALBUMS', 'Álbums');
//define('PICTURES', 'Fotos');

// lang_album_list
define('ALBUM_ON_PAGE', '%d álbums en %d página(s)');
// lang_thumb_view
define('DATE', 'FECHA ');
define('NAME', 'Fichero');
define('TITLE', 'Título');
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
define('FILE', 'Fichero:');
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
define('ALB_NEED_NAME', '¡Los álbums deben tener un nombre!');
define('CONFIRM_MODIFS', '¿Estás seguro de aplicar estas modificaciones? ');
define('NO_CHANGE', '¡No se hizo ningún cambio! ');
define('NEW_ALBUM', 'Nuevo álbum');
define('CONFIRM_DELETE1', '¿Estás seguro de querer borrar este álbum? ');
define('CONFIRM_DELETE2', 'Todas las fotos y comentarios que contiene se perderán!');
define('SELECT_FIRST', 'Selecciona un álbum primero');
define('ALB_MRG', 'Administrador de álbums');
define('MY_GALLERY', '* Mi galería * ');
define('NO_CATEGORY', '* Sin categoría *');
define('DELETE', 'Borrar');
define('NEW', 'Nuevo');
define('APPLY_MODIFS', 'Aplicar modificaciones');
define('SELECT_CATEGORY', 'Seleccionar categoría');

// lang_catmgr_php
define('MISS_PARAM', '¡Faltan parámetros necesarios para la operación: \'%s\'!');
define('UNKNOWN_CAT', 'La categoría seleccionada no existe en la base da datos ');
define('USERGAL_CAT_RO', '¡La categoría de Galerías de Usuarios no puede ser borrada!');
define('MANAGE_CAT', 'Organizador de categorías');
define('CONFIRM_DELETE', '¿Estás seguro de querer BORRAR esta categoría?');
//define('CATEGORY', 'Categoría');
define('OPERATIONS', 'Operaciones');
define('MOVE_INTO', 'Mover hacia');
define('UPDATE_CREATE', 'Modificar/Crear categoría ');
define('PARENT_CAT', 'Categoría superior');
define('CAT_TITLE', 'Título de la categoría ');
define('CAT_DESC', 'Descripción de la categoría');
// lang_config_php
define('CONFIG_TITLE', 'Configuración');
define('RESTORE_CFG', 'Restaurar valores por defecto ');
define('SAVE_CFG', 'Guardar la nueva configuración');
define('NOTES', 'Notas');
//define('INFO', 'Información');
define('UPD_SUCCESS', 'La configuración de Coppermine ha sido actualizada ');
define('RESTORE_SUCCESS', 'Valores por defecto de Coppermine restaurados');
define('NAME_A', 'Ascendente por nombre ');
define('NAME_D', 'Descendente por nombre');
define('TITLE_A', 'Ascendente por título');
define('TITLE_D', 'Descendente por título');
define('DATE_A', 'Ascendente por fecha');
define('DATE_D', 'Descendente por fecha');
define('RATING_A', 'Ascendente por valoración');
define('RATING_D', 'Descendente por valoración');
define('TH_ANY', 'Máximo aspecto');
define('TH_HT', 'Altura');
define('TH_WD', 'Anchura');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Debes introducir tu nombre y un comentario');
define('COM_ADDED', 'Comentario añadido');
define('ALB_NEED_TITLE', '¡Debes introducir un título para el álbum!');
define('NO_UDP_NEEDED', 'No se requiere ningún cambio');
define('ALB_UPDATED', 'Álbum actualizado');
define('UNKNOWN_ALBUM', 'El álbum seleccionado no existe o no tienes permisos para añadirlo');
define('NO_PIC_UPLOADED', '¡Ninguna foto fue añadida!<br /><br />Si habías seleccionado alguna imagen para añadir, comprueba que el servidor permite subir ficheros... o que el gif no sea animado');
define('ERR_MKDIR', '¡Fallo al crear el directorio %s!');
define('DEST_DIR_RO', '¡El directorio destino %s no tiene permisos de escritura!');
define('ERR_MOVE', '¡Imposible mover %s a %s !');
define('ERR_FSIZE_TOO_LARGE', '¡El tamaño de la foto que quieres añadir es demasiado grande (el máximo es %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', '¡El tamaño del fichero de la foto que quieres añadir es demasiado grande (el máximo permitido es %s KB) !');
define('ERR_INVALID_IMG', '¡El fichero que quieres añadir no es una imagen válida!');
define('ALLOWED_IMG_TYPES', 'Sólo puedes subir %s imágenes.');
define('ERR_INSERT_PIC', 'La foto \'%s\' no puede ser dada de alta en el álbum');
define('UPLOAD_SUCCESS', 'La foto ha sido insertada correctamente<br /><br />'.((is_admin())?'' :'Será visible cuando la apruebe un administrador'));
//define('INFO', 'Información');
define('ERR_COMMENT_EMPTY', '¡El comentario está vacío!');
define('ERR_INVALID_FEXT', 'Solamente están admitidas fotos con las siguientes extensiones <br /><br />%s.');
define('NO_FLOOD', 'Disculpa pero eres el autor/a del último comentario introducido para esta imagen.<br /><br />Edita tu comentario anterior si quieres modificarlo.');
define('REDIRECT_MSG', 'Estás siendo redirigido.<br /><br /><br />Pulsa \'CONTINUAR\' si la página no se actualiza automáticamente');
define('UPL_SUCCESS', 'La foto se ha añadido correctamente');

// lang_delete_php
define('CAPTION', 'Título');
define('FS_PIC', 'Imagen a tamaño completo');
define('DEL_SUCCESS', 'borrado correctamente');
define('NS_PIC', 'imagen tamaño normal');
define('ERR_DEL', 'no puede ser borrado');
define('THUMB_PIC', 'miniatura');
//define('COMMENT', 'Comentario');
define('IM_IN_ALB', 'fotos en el álbum');
define('ALB_DEL_SUCCESS', 'Álbum \'%s\' borrado');
define('ALB_MGR', 'Organizador de álbums');
define('ERR_INVALID_DATA', 'Datos inválidos recibidos en \'%s\' ');
define('CREATE_ALB', 'Creando el álbum \'%s\' ');
define('UPDATE_ALB', 'Actualizando álbum \'%s\' con el título \'%s\' y el índice \'%s\'');
define('DEL_PIC', 'Borrar foto');
define('DEL_ALB', 'Borrar álbum');
define('DEL_USER', 'Borrar usuario ');
//define('ERR_UNKNOWN_USER', '¡El usuario seleccionado no existe! ');
define('COMMENT_DELETED', 'El comentario ha sido borrado');

// lang_display_image_php
define('PIC_CONFIRM_DEL', '¿Estás seguro de querer borrar esta imagen?<br />los comentarios también se borrarán.');
define('DEL_THIS_PIC', 'BORRAR ESTA IMAGEN');
define('SIZE', '%s x %s pixels');
define('VIEWS', '%s veces');
define('SLIDESHOW', 'Presentación');
define('STOP_SLIDESHOW', 'PARAR PRESENTACIÓN');
define('VIEW_FS', 'Haz click aquí para verla a tamaño completo');
define('EDIT_PIC', 'EDITAR INFORMACIÓN DE LA IMAGEN');

// lang_picinfo
define('PIC_INF_TITLE', 'Información de imagen');
define('PIC_INF_FILENAME', 'Nombre de archivo');
define('ALBUM_NAME', 'Nombre del álbum ');
define('PIC_INFO_RATING', 'Valoración (%s votos)');
define('KEYWORDS', 'Palabras clave');
define('PIC_INF_FILE_SIZE', 'Tamaño');
define('PIC_INF_DIMENSIONS', 'Dimensiones');
define('DISPLAYED', 'Vista');
define('CAMERA', 'Cámara');
define('DATE_TAKEN', 'Hecha el');
define('APERTURE', 'Apertura ');
define('EXPOSURE_TIME', 'Tiempo de exposición ');
define('FOCAL_LENGTH', 'Distancia focal');
define('COMMENT', 'Comentarios');
define('ADDFAV', 'Añadir a álbum de favoritas');
define('ADDFAVPHRASE', 'Favoritos ');
define('REMFAV', 'Quitar del álbum de favoritas');
define('IPTCTITLE', 'Título IPTC');
define('IPTCCOPYRIGHT', 'Copyright IPTC');
define('IPTCKEYWORDS', 'Palabras clave IPTC');
define('IPTCCATEGORY', 'Categoría IPTC');
define('IPTCSUBCATEGORIES', 'Sub-categoría IPTC');
define('BOOKMARK_PAGE', 'Añadir imagen a favoritas');
define('REMOVEFAV', 'Eliminado del álbum de favoritas');
define('ADDEDTOFAV', 'Añadida al álbum de favoritas');

// lang_display_comments
define('OK', 'OK ');
define('COM_EDIT_TITLE', 'Editar el comentario');
define('CONFIRM_DELETE_COM', '¿Estás seguro de querer borrar este comentario?');
define('ADD_YOUR_COMMENT', 'Añadir tu comentario');
define('COM_NAME', 'Nombre');
//define('COMMENT', 'Comentario');
define('YOUR_NAME', 'Tu nombre');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Pulsa en la imagen para cerrar esta ventana ');

// lang_ecard_php
define('E_TITLE', 'Enviar una postal electrónica');
define('INVALID_EMAIL', '¡<b>Aviso</b>: Dirección de correo no válida!');
define('E_ECARD_TITLE', 'Una postal de %s para ti');
define('VIEW_ECARD', 'Si la postal no se ve correctamente haz click en este enlace');
define('VIEW_MORE_PICS', '¡Haz click en este enlace para ver más fotos!');
define('SEND_SUCCESS', 'Tu postal ya se ha enviado');
define('SEND_FAILED', 'Lo siento, este servidor no puede enviar postales...');
define('FROM', 'De ');
define('_YOUR_NAME', 'Tu nombre');
define('YOUR_EMAIL', 'Tu dirección de correo');
define('TO', 'Para');
define('RCPT_NAME', 'Nombre del destinatario');
define('RCPT_EMAIL', 'Dirección de correo del destinatario');
define('GREETINGS', 'Saludos');
define('MESSAGE', 'Mensaje');
define('ECARD_LINK_CORRUPT', 'lo siento los datos de la postal han sido corrompidos por tu cliente de correo, por favor intenta poner este enlace en tu explorador'); //NEW

// lang_editpics_php
define('PIC_INFO', 'Información');
define('ALBUM', 'Álbum');
define('EDIT_TITLE', 'Título');
define('DESC', 'Descripción ');
//define('KEYWORDS', 'Palabras clave');
define('PIC_INFO_STR', '%sx%s - %sKB - %s veces vista - %s votos ');
define('APPROVE', 'Aprobar imagen');
define('POSTPONE_APP', 'Posponer aprobado de imágenes');
//define('DEL_PIC', 'Borrar imagen');
define('READ_EXIF', 'Leer la información EXIF otra vez');
define('RESET_VIEW_COUNT', 'Poner a cero el contador de veces que se ha visto');
define('RESET_VOTES', 'Poner a cero los votos ');
define('DEL_COMM', 'Borrar comentarios seleccionados ');
define('UPL_APPROVAL', 'Aprobar uploads ');
define('EDIT_PICS', 'Editar imágenes');
define('SEE_NEXT', 'Ver la siguiente');
define('SEE_PREV', 'Ver la anterior');
define('N_PIC', '%s imagen/es');
define('N_OF_PIC_TO_DISP', 'Número de imágenes a mostrar');
define('APPLY', 'Aplicar los cambios');

// lang_groupmgr_php
define('GROUP_NAME', 'Nombre del grupo');
define('DISK_QUOTA', 'Cuota de disco ');
define('CAN_RATE', 'Los visitantes pueden valorar las fotos');
define('CAN_SEND_ECARDS', 'Pueden enviar postales ');
define('CAN_POST_COM', 'Pueden añadir comentarios ');
define('CAN_UPLOAD', 'Los visitantes pueden añadir imágenes');
define('CAN_HAVE_GALLERY', 'Pueden tener galerías personales ');
//define('APPLY', 'Aplicar modificaciones');
define('CREATE_NEW_GROUP', 'Crear nuevo grupo');
define('DEL_GROUPS', 'Borrar el/los grupo(s) seleccionados');
define('CONFIRM_DEL', '¡Aviso, cuando borras un grupo, los usuarios que pertenecen a un grupo serán trnsferidos al grupo de \'Usuarios Registrados\'!\\n\\n¿Quieres continuar?');
define('GROUP_TITLE', 'Administrar Grupos de usuarios');
define('APPROVAL_1', 'Aprobación álbum público (1)');
define('APPROVAL_2', 'Aprobación álbum privado (2) ');
define('NOTE1', '<b>(1)</b> Añadir fotos en un álbum público requiere aprobación de un administrador');
define('NOTE2', '<b>(2)</b> Añadir fotos en un álbum que pertenece al usuario requiere aprobación de un administrador');
//define('NOTES', 'Notas');

// lang_index_php
define('WELCOME', '¡Bienvenido!!');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', '¿Estás seguro de querer BORRAR este álbum? <br />Todas las fotos y comentarios serán borrados.');
//define('DELETE', 'BORRAR');
define('MODIFY', 'PROPIEDADES');
//define('EDIT_PICS', 'EDITAR IMÁGENES');

// lang_list_categories
define('HOME', 'Inicio');
define('STAT1', '<b>[pictures]</b> fotos en <b>[albums]</b> álbum(s)');
define('STAT2', '<b>[pictures]</b> fotos en <b>[albums]</b> álbum(s)');
define('XX_S_GALLERY', 'Galería de %s ');
define('STAT3', '<b>[pictures]</b> fotos en <b>[albums]</b> álbum(s)');

// lang_list_users
define('USER_LIST', 'Lista de usuarios ');
define('NO_USER_GAL', 'No existen usuarios con permisos para tener álbums');
define('N_ALBUMS', '%s álbum(s)');
define('N_PICS', '%s imagen(es)');

// lang_list_albums
define('N_PICTURES', '%s fotos ');
define('LAST_ADDED', ', última añadida el %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Modificar álbum %s ');
define('GENERAL_SETTINGS', 'Configuración general ');
define('ALB_TITLE', 'Título del álbum');
define('ALB_CAT', 'Categoría del álbum');
define('ALB_DESC', 'Descripción del álbum');
define('ALB_THUMB', 'Miniaturas del álbum ');
define('ALB_PERM', 'Permisos para este álbum ');
define('CAN_VIEW', 'Este álbum puede ser visto por');
define('MOD_CAN_UPLOAD', 'Los visitantes pueden añadir imágenes');
define('CAN_POST_COMMENTS', 'Los visitantes pueden añadir comentarios ');
define('MOD_CAN_RATE', 'los visitantes pueden valorar las imágenes');
define('USER_GAL', 'Galería de usuario');
define('NO_CAT', '* Sin categoría * ');
define('ALB_EMPTY', 'El álbum está vacío ');
define('LAST_UPLOADED', 'Última imagen añadida');
define('PUBLIC_ALB', 'Todo el mundo (álbum público)');
define('ME_ONLY', 'Solamente yo');
define('OWNER_ONLY', 'Solamente el dueño del álbum (%s)');
define('GROUPP_ONLY', 'Miembros del grupo \'%s\' ');
define('ERR_NO_ALB_TO_MODIFY', 'No existe ningún álbum en la base de datos. Crea uno primero');
define('UPDATE', 'Actualizar álbum');

// lang_rate_pic_php
define('ALREADY_RATED', 'lo siento, pero ya has valorado anteriormente esta foto');
define('RATE_OK', 'Tu voto ha sido contabilizado ');

// lang_register_php
define('USERNAME', 'Nombre de usuario ');
define('X_S_PROFILE', 'Perfil de %s ');
define('GROUP', 'Grupo');
define('DISK_USAGE', 'Uso de disco');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Revisar comentario');
define('NO_COMMENT', 'No hay comentarios que revisar');
define('N_COMM_DEL', '%s comentario(s) borrados');
define('N_COMM_DISP', 'Número de comentarios para enseñar');
define('R_SEE_PREV', 'Ver anterior');
define('R_SEE_NEXT', 'Ver siguiente');
define('R_DEL_COMM', 'Borrar los comentarios seleccionados');

// lang_search_php
define('S_SEARCH', 'Buscar en la colección de imágenes');

// lang_search_new_php
define('PAGE_TITLE', 'Buscar nuevas imágenes');
define('SELECT_DIR', 'Seleccionar directorio');
define('SELECT_DIR_MSG', 'esta función te permite añadir una serie de imágenes que previamente hayas subido a a tu servidor por FTP.<br /><br />Selecciona el directorio donde has subido tus imágenes');
define('NO_PIC_TO_ADD', 'No hay imágenes que añadir');
define('NEED_ONE_ALBUM', 'Necesitas al menos un álbum para usar esta función');
define('WARNING', 'Aviso');
define('CHANGE_PERM', 'el script no puede escribir en ese directorio, ¡necesitas cambiar los permisos a 755 o 777 antes de intentar añadir imágenes!');
define('TARGET_ALBUM', '<b>Poner imágenes de "</b>%s<b>" en </b>%s');
define('FOLDER', 'Carpeta');
define('IMAGE', 'Imagen');
//define('ALBUM', 'Álbum');
define('RESULT', 'Resultado');
define('DIR_RO', 'No se puede escribir. ');
define('DIR_CANT_READ', 'No se puede leer.');
define('INSERT', 'Añadiendo nuevas imágenes a la galería');
define('LIST_NEW_PIC', 'Lista de nuevas imágenes');
define('INSERT_SELECTED', 'Añadir imágenes seleccionadas');
define('NO_PIC_FOUND', 'No se encontraron nuevas imágenes');
define('BE_PATIENT', 'Por favor sea paciente, el script necesita tiempo para añadir las imágenes');
define('SN_NOTES', '<ul><li><b>OK</b>: significa que la imagen ha sido añadida correctamente<li><b>DP</b>: significa que la imagen está duplicada y ya existe en la base de datos<li><b>PB</b>: significa que la imagen no se pudo añadir, revisa tu configuración y los permisos de los directorios en los que se encuentran las imágenes<li>Si los "símbolos" de OK, DP, PB no aparecen hacen click en el enlace roto para ver el mensaje de error producido por PHP<li>Si tu explorador se desconecta, pulsa el botón de recarga</ul>');
define('SELECT_ALBUM', 'Selecciona un álbum');
define('NO_ALBUM', 'No seleccionaste ningún álbum, haz click en retroceder y selecciona un álbum para poner tus imágenes');

// lang_upload_php
define('UP_TITLE', 'Subir imagen');
define('MAX_FSIZE', 'El tamaño máximo de archivo es %s KB');
//define('ALBUM', 'Álbum');
define('PICTURE', 'imagen');
define('PIC_TITLE', 'Título de imagen');
define('DESCRIPTION', 'Descripción de la imagen');
define('UP_KEYWORDS', 'Palabras clave (separadas por espacios)');
define('ERR_NO_ALB_UPLOADABLES', 'Lo siento pero no hay álbums en los que puedas añadir imágenes. ¡Por favor crea uno primero!');

// lang_usermgr_php
define('U_TITLE', 'Administrar usuarios');
//define('NAME_A', 'Ascendente por nombre');
//define('NAME_D', 'Descendente por nombre');
define('GROUP_A', 'Ascendente por grupo');
define('GROUP_D', 'Descendente por grupo');
define('REG_A', 'Ascendente por fecha de registro');
define('REG_D', 'Descendente por fecha de registro');
define('PIC_A', 'Ascendente por número de imágenes');
define('PIC_D', 'Descendente por número de imágenes');
define('DISKU_A', 'Ascendente por uso de disco ');
define('DISKU_D', 'Descendente por uso de disco ');
define('SORT_BY', 'ordenar usuarios por');
define('ERR_NO_USERS', '¡La lista de usuarios está vacía!');
define('ERR_EDIT_SELF', 'No puedes editar tu propio perfil, usa el enlace \'Mi perfil\' para hacerlo');
define('EDIT', 'EDITAR');
//define('DELETE', 'BORRAR');
define('U_NAME', 'Nombre de usuario');
//define('GROUP', 'Grupo');
define('INACTIVE', 'Inactivo');
//define('OPERATIONS', 'Operaciones');
define('PICTURES', 'Imágenes');
define('DISK_SPACE', 'Espacio usado / Cuota ');
define('REGISTERED_ON', 'Registrado el');
define('U_USER_ON_P_PAGES', '%d usuarios %d página(s)');
define('USER_CONFIRM_DEL', '¿Estás seguro de quieres BORRAR a este usuario?<br />Todas sus imágenes y álbums también serán borrados.');
define('MAIL', 'CORREO');
define('ERR_UNKNOWN_USER', '¡El usuario elegido no existe!');
define('MODIFY_USER', 'Modificar usuario');
//define('NOTES', 'Notas');
define('NOTE_LIST', '<li>Si no quieres cambiar la contraseña actual, deja el campo \"contraseña\" en blanco');
define('PASSWORD', 'Contraseña');
define('USER_ACTIVE_CP', 'El usuario está activo ');
define('USER_GROUP_CP', 'Grupo de usuario');
define('USER_EMAIL', 'Dirección de Correo');
define('USER_WEB_SITE', 'Página personal');
define('CREATE_NEW_USER', 'Crear un nuevo usuario');
define('USER_FROM', 'Ubicación:');
define('USER_INTERESTS', 'Intereses');
define('USER_OCC', 'Ocupación');

// lang_util_php
define('UTIL_TITLE', 'Cambiar tamaño de las imágenes');
define('WHAT_IT_DOES', 'Qué es lo que hace');
define('WHAT_UPDATE_TITLES', 'Actualiza los títulos con el nombre de archivo');
define('WHAT_DELETE_TITLE', 'Borrar títulos');
define('WHAT_REBUILD', 'Reconstruye las mini imágenes y las fotos intermedias');
define('WHAT_DELETE_ORIGINALS', 'Borra las fotos originales y las reemplaza con las fotos de tamaño intermedio');
define('U_FILE', 'Fichero');
define('TITLE_SET_TO', 'título cambiado a');
define('SUBMIT_FORM', 'enviar');
define('UPDATED_SUCCESFULLY', 'actualizado correctamente');
define('ERROR_CREATE', 'ERROR creando');
define('CONTIN', 'Procesar más imágenes');
define('MAIN_SUCCESS', 'El fichero ha sido usado con éxito como imagen principal');
define('ERROR_RENAME', 'Error renombrando %s a %s');
define('ERROR_NOT_FOUND', 'No se encontró el fichero %s');
define('U_BACK', 'volver al inicio');
define('THUMBS_WAIT', 'Actualizando mini imágenes e imágenes de tamaño intermedio, por favor espera...');
define('THUMBS_CONTINUE_WAIT', 'Continuando la actualización de mini imágenes e imágenes de tamaño intermedio...');
define('TITLES_WAIT', 'Actualizando títulos, por favor espera...');
define('DELETE_WAIT', 'Borrando imágenes, por favor espera...');
define('REPLACE_WAIT', 'Borrando originales y reemplazándolos con las imágenes de tamaño intermedio, por favor espera...');
define('INSTRUCTION', 'Instrucciones rápidas');
define('INSTRUCTION_ACTION', 'Selecciona acción');
define('INSTRUCTION_PARAMETER', 'Configurar parámetros');
define('INSTRUCTION_ALBUM', 'Selecciona álbum');
define('INSTRUCTION_PRESS', 'Pulsa %s');
define('U_UPDATE', 'Actualizar mini imágenes y/o imágenes de tamaño intermedio');
define('UPDATE_WHAT', 'Qué debe ser actualizado ');
define('UPDATE_THUMB', 'Sólo mini imágenes');
define('UPDATE_PIC', 'Sólo imágenes de tamaño intermedio');
define('UPDATE_BOTH', 'Ambas');
define('UPDATE_NUMBER', 'Número de imágenes procesadas por click');
define('UPDATE_OPTION', '(Prueba a poner una opción menor si experimentas problemas de desconexión)');
define('FILENAME_TITLE', 'Nombre de archivo &rArr; Título de imagen');
define('FILENAME_HOW', 'Cómo debe cambiarse el nombre de archivo');
define('FILENAME_REMOVE', 'Eliminar la terminación .jpg y reemplazar _ (guión bajo) por espacios');
define('FILENAME_EURO', 'Cambiar 2003_11_23_13_20_20.jpg por 23/11/2003 13:20');
define('FILENAME_US', 'Cambiar 2003_11_23_13_20_20.jpg por 11/23/2003 13:20');
define('FILENAME_TIME', 'Cambiar 2003_11_23_13_20_20.jpg por 13:20');
define('UT_DELETE', 'Borrar títulos de imagen o imágenes de tamaño original');
define('DELETE_TITLE', 'Borrar títulos de imagen');
define('DELETE_ORIGINAL', 'Borrar imágenes de tamaño original');
define('DELETE_REPLACE', 'Borra las imágenes originales y las reemplaza con las redimensionadas');
//define('SELECT_ALBUM', 'Seleccionar álbum');

// lang_pagetitle_php
define('VIEWING', 'Viendo fotos');
define('USR', '\'s Galería de fotos');
define('PHOTOGALLERY', 'Galería de fotos');
$lang_usermgr_php = array(
    'name_a' => 'Ascendente por nombre',
    'name_d' => 'Descendente por nombre',
    'group_a' => 'Ascendente por grupo',
    'group_d' => 'Descendente por grupo',
    'reg_a' => 'Ascendente por fecha de registro',
    'reg_d' => 'Descendente por fecha de registro',
    'pic_a' => 'Ascendente por número de imágenes',
    'pic_d' => 'Descendente por número de imágenes',
    'disku_a' => 'Ascendente por uso de disco',
    'disku_d' => 'Descendente por uso de disco',
    );
$lang_byte_units = array('Bytes', 'KB', 'MB');
// Day of weeks and months
$lang_day_of_week = array('Dom', 'Lun', 'Mar', 'Mie', 'jue', 'Vie', 'Sab');
$lang_month = array('Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic');
$lang_meta_album_names = array(
    'random' => 'Fotos al azar',
    'lastup' => 'Últimas fotos',
    'lastupby' => 'Mis últimas fotos', // new 1.2.2
    'lastalb' => 'Últimos álbums actualizados',
    'lastcom' => 'Últimos comentarios',
    'lastcomby' => 'Mis últimos comentarios', // new 1.2.2
    'topn' => 'Más vistas',
    'toprated' => 'Mejor valoradas',
    'lasthits' => 'Últimas vistas',
    'search' => 'Buscar en resultados',
    'favpics' => 'Imágenes favoritas' // changed in cpg1.2.0nuke
    );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array(
	'title' => 'Configuración',
    'restore_cfg' => 'Reiniciar configuración por defecto',
    'save_cfg' => 'Guardar nueva configuración',
	'notes' => 'Notas',
	'info' => 'Información',
    'upd_success' => 'La configuración de Coppermine se ha actualizado',
    'restore_success' => 'La configuración por defecto de Coppermine se ha restaurado',
	'name_a' => 'Ascendente por nombre',
	'name_d' => 'Descendente por nombre',
	'title_a' => 'Ascendente por título',
	'title_d' => 'Descendente por título',
	'date_a' => 'Ascendente por fecha',
	'date_d' => 'Descendente por fecha',
    'rating_a' => 'Ascendente por valoración', // new in cpg1.2.0nuke
    'rating_d' => 'Descendente por valoración', // new in cpg1.2.0nuke
    'th_any' => 'Máximo Aspecto',
    'th_ht' => 'Altura',
    'th_wd' => 'Anchura',
    );
// start left side interpretation
$lang_config_data = array(
    // General settings
    'Configuración general',
    array('Nombre de la galería', 'gallery_name', 0),
    array('Descripción de la galería', 'gallery_description', 0),
    array('Correo del administrador', 'gallery_admin_email', 0),
    array('Dirección a la carpeta de cpgnuke p.ej. http://miweb.com/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
    array('Tema', 'theme', 6),
    array('Títulos de página específicos en vez de >Coppermine', 'nice_titles', 1),
    //'Album list view',
    'Aspecto de la vista de álbums',
    array('Ancho de la tabla principal (pixels o %)', 'main_table_width', 0),
    array('Número de niveles de subcategorías a mostrar', 'subcat_level', 0),
    array('Número de álbums a mostrar', 'albums_per_page', 0),
    array('Número de columnas de la lista de álbums', 'album_list_cols', 0),
    array('Tamaño de las mini imágenes en pixels', 'alb_list_thumb_size', 0),
    array('Contenido de la página principal', 'main_page_layout', 0),
    array('Mostrar mini imágenes de álbums del primer nivel en categorías', 'first_level', 1), 
//'Thumbnail view',
    'Aspecto de la vista mini imagenes',
    array('Número de columnas en la página de mini imágenes', 'thumbcols', 0),
    array('Número de filas en la página de mini imágenes', 'thumbrows', 0),
    array('Máximo número de pestañas que mostrar', 'max_tabs', 0),
    array('Mostrar leyenda de imagen (además del título) debajo de la mini imagen', 'caption_in_thumbview', 1),
    array('Mostrar el número de comentarios debajo de la mini imagen', 'display_comment_count', 1),
    array('Orden por defecto para las imágenes', 'default_sort_order', 3),
    array('Mínimo número de votos para aparecer el la lista de \'más-valoradas\'', 'min_votes_for_rating', 0),
    array('La etiqueta ALT y el título de las mini imágenes muestra el título y la palabra clave en lugar de la información de la imagen', 'seo_alts', 1), // new in cpg1.2.0nuke
     //'Display Image &amp; Comment settings',
    'Aspecto de la vista de imágenes y configuración de comentarios',
    array('Anchura de la tabla donde mostrar la imagen (pixels o %)', 'picture_table_width', 0),
    array('Información del fichero visible por defecto', 'display_pic_info', 1),
    array('Filtrar palabras malsonantes en los comentarios', 'filter_bad_words', 1),
    array('Permitir emoticons en los comentarios', 'enable_smilies', 1),
    array('Permitir varios comentarios consecutivos del mismo usuario en una imagen (deshabilitar flood protection)', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
    array('Notificar al administrador por email de los comentarios' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
    array('Máxima longitud para la descripción de una imagen', 'max_img_desc_length', 0),
    array('Máximo número de caracteres en una palabra', 'max_com_wlength', 0),
    array('Máximo número de lineas en un comentario', 'max_com_lines', 0),
    array('Máxima longitud de un comentario', 'max_com_size', 0),
    array('Mostrar tira de película', 'display_film_strip', 1),
    array('Número de objetos en tira de película', 'max_film_strip_items', 0),
    array('Permitir ver imágenes de tamaño completo por anónimos', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
    array('Número de días para poder volver a valorar una imagen','keep_votes_time',0), // new in cpg1.2.2c nuke
    array('Mostrar imágenes de tamaño completo en presentaciones','fullsize_slideshow',1),
    array('¿Mostrar bloques a la derecha de la imágenes si existen bloques a la derecha?', 'right_blocks', 1), // new 1.2.2
// 'Pictures and thumbnails settings',
    'Configuración de archivos y mini imágenes',
    array('Calidad para los ficheros JPEG', 'jpeg_qual', 0),
    array('Poner marca de agua en las imágenes', 'watermark', 1),
    array('Máxima anchura o altura de las mini imágenes <b>*</b>', 'thumb_width', 0),
    array('Usar dimensión (anchura, altura o máximo para las mini imágenes)<b>*</b>', 'thumb_use', 7),
    array('Crear imágenes de tamaño intermedio', 'make_intermediate', 1),
    array('Máxima anchura o altura de las imágenes de tamaño intermedio <b>*</b>', 'picture_width', 0),
    array('Máximo tamaño de los ficheros añadidos por los usuarios (KB)', 'max_upl_size', 0),
    array('Máxima anchura o altura de las imágenes/vídeos añadidos (pixels)', 'max_upl_width_height', 0), 
    array('Permitir subir multioples archivos con el mismo nombre', 'samename', 1), 
//'User settings',
'Configuración de usuarios',
    array('Permitir el registro de nuevos usuarios', 'allow_user_registration', 1),
/*
    array('Registro de usuarios requiere verificacin de email', 'reg_requires_valid_email', 1),
    array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),
*/
    array('Los usuarios pueden tener álbums privados (Nota: si cambias de \'si\' a \'no\' todos los albums privados que existan se convertirán en públicos)', 'allow_private_albums', 1),
    array('Mostrar avatar de usuario en lugar de la imagen de álbum privado', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',
    'Campos extra para descripción de imágenes (dejar en blanco si no se usan)',
    array('Nombre del campo 1', 'user_field1_name', 0),
    array('Nombre del campo 2', 'user_field2_name', 0),
    array('Nombre del campo 3', 'user_field3_name', 0),
    array('Nombre del campo 4', 'user_field4_name', 0), 
// 'Pictures and thumbnails advanced settings',
    'Configuración avanzada de archivos y mini imágenes',
    array('Mostrar icono de álbum privado a usuarios no registrados', 'show_private', 1),
    array('Caracteres prohibidos en los nombres de archivos', 'forbiden_fname_char', 0),
    array('Tipos de imágenes admitidas', 'allowed_file_extensions', 0),
    array('Método para el redimensionado de imágenes', 'thumb_method', 2),
    array('Ruta a la utilidad \'convert\' de ImageMagick  / netpbm (por ejemplo /usr/bin/X11/)', 'impath', 0),
    array('Tipos de imágenes admitidas (sólo válidos para ImageMagick)', 'allowed_img_types', 0),
    array('Comandos de línea para ImageMagick', 'im_options', 0),
    array('Leer datos EXIF en los archivos JPEG', 'read_exif_data', 1),
    array('Leer datos IPTC en los archivos JPEG', 'read_iptc_data', 1), // new in cpg1.2.0nuke
    array('Directorio base de los álbums <b>*</b>', 'fullpath', 0),
    array('Directorio para los archivos de los usuarios <b>*</b>', 'userpics', 0),
    array('Prefijo para las imágenes intermedias <b>*</b>', 'normal_pfx', 0),
    array('Prefijo para las mini imágenes <b>*</b>', 'thumb_pfx', 0),
    array('Mostrar nombre de archivo en información de imagen', 'picinfo_display_filename', '1'), // new in cpg1.2.0nuke
    array('Mostrar nombre del álbum en información de imagen', 'picinfo_display_album_name', '1'), // new in cpg1.2.0nuke
    array('Mostrar tamaño de archivo en información de imagen', 'picinfo_display_file_size', '1'), // new in cpg1.2.0nuke
    array('Mostrar dimensiones en información de imagen', 'picinfo_display_dimensions', '1'), // new in cpg1.2.0nuke
    array('Mostrar veces vista en información de imagen', 'picinfo_display_count_displayed', '1'), // new in cpg1.2.0nuke
    array('Mostrar enlace en información de imagen', 'picinfo_display_URL', '1'), // new in cpg1.2.0nuke
    array('Mostrar enlace a favoritos en información de imagen', 'picinfo_display_URL_bookmark', '1'), // new in cpg1.2.0nuke
    array('Mostrar enlace añadir a favoritas en información de imagen', 'picinfo_display_favorites', '1'), // new in cpg1.2.0nuke
//    'Cookies &amp; Charset settings',
    'Configuración de cookies',
    array('Nombre de la cookie usada por el script', 'cookie_name', 0),
    array('Path de la cookie usada por el script', 'cookie_path', 0),
//    array('Character encoding', 'charset', 4), 
    'Configuraciones de otros aspectos',
    array('Activar modo debug', 'debug_mode', 1),
    '<br /><div align="center">(*) los campos marcados con un * no deben ser cambiados si ya tienes imágenes en la galería</div><br />'
);
// end left side interpretation
