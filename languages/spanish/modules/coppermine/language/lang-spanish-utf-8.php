<?php 
/***************************************************************************  
   Coppermine Photo Gallery 1.3.1 for CPG-Nuke                                
  **************************************************************************  
   Port Copyright (C) 2004 Coppermine/CPG-Nuke Dev Team                        
   http://cpgnuke.com/                                               
  **************************************************************************  
   Copyright (C) 2002,2003  Gr�gory DEMAR <gdemar@wanadoo.fr>                 
   http://coppermine.sf.net/team/                                        
   This program is free software; you can redistribute it and/or modify       
   it under the terms of the GNU General Public License as published by       
   the Free Software Foundation; either version 2 of the License, or          
   (at your option) any later version.                                        
  **************************************************************************  
  Last modification notes:
  $Source: /cvs/languages/spanish/modules/coppermine/language/lang-spanish-utf-8.php,v $
  $Revision: 1.2 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:42 $
****************************************************************************/
global $module_name, $lang_usermgr_php,$lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;  
define('PIC_VIEWS','Views');
define('PIC_VOTES','Votes');
define('PIC_COMMENTS','Comments');

// lang_translation_info
define('LANG_NAME_ENGLISH','Spanish');
define('LANG_NAME_NATIVE','Español');
define('LANG_COUNTRY_CODE','es');
define('TRANS_NAME','Daniel Villoldo (Grumpywolf)');
define('TRANS_EMAIL','dvp@arrakis.es');
define('TRANS_WEBSITE','http://grumpywolf.net/');
define('TRANS_DATE','2003-10-03');
define('CHARSET','Juego de caracteres');
define('TEXT_DIR','ltr');
define('YES','Si');
define('NO','No');
define('BACK','volver al inicio');
define('CONTINU','Finish');
define('INFO','Informaciõn');
//define('_ERROR', 'Error'); //already in main lang file
define('ALBUM_DATE_FMT','%d de %B de %Y');
define('LASTCOM_DATE_FMT','%d/%m/%y a las %H:%M');
define('LASTUP_DATE_FMT','%d de %B de %Y');
define('REGISTER_DATE_FMT','%d de %B de %Y');
define('LASTHIT_DATE_FMT','%d de %B de %Y a las %I:%M %p');
define('COMMENT_DATE_FMT','%d de %B de %Y a las %I:%M %p');

// lang_meta_album_names
define('RANDOM','Fotos al azar');
define('LASTUP','Ultimas fotos');
define('LASTUPBY','Mis últimas fotos');
define('LASTALB','Últimos albums modificados');
define('LASTCOM','Últimos comentarios');
define('LASTCOMBY','Mis últimos comentarios');
define('TOPN','Mis visitas');
define('TOPRATED','Mis valoraciones');
define('LASTHITS','Últimas visitas');
define('SEARCH','Buscar entre todas las fotos');
define('FAVPICS','Fotos favoritas');

// lang_errors
define('ACCESS_DENIED','No tienes permiso para acceder a esta página');
define('PERM_DENIED','No tienes permiso para realizar esta operación');
define('PARAM_MISSING','Llamada a Script sin los parámetros requeridos.');
define('NON_EXIST_AP','El Album/foto seleccionado no existe!');
define('QUOTA_EXCEEDED','Cuota de disco excedida<br /><br />Tienes una cuota de disco de [quota]K, tus fotos actualmente ocupan [space]K, y añadiendo esta foto excedería la cuota.');
define('GD_FILE_TYPE_ERR','Cuando se usa la librer­ía de imagen GD solamente están permitidos los tipos JPEG y PNG.');
define('INVALID_IMAGE','La imagen que has añadido está corrupta o no puede ser tratada por la libreria GD.');
define('RESIZE_FAILED','Incapaz de crear Thumbail o imagen de tamaño reducido.');
define('NO_IMG_TO_DISPLAY','Ninguna imagen que enseñar.');
define('NON_EXIST_CAT','La categoría seleccionada no existe');
define('ORPHAN_CAT','Una categoría no tiene padre, ejecuta la utilidad de categorías para corregir el problema.');
define('DIRECTORY_RO','El directorio \'%s\' no tiene permisos de escritura, las fotos no pueden ser borradas.');
define('NON_EXIST_COMMENT','El comentario seleccionado no existe.');
define('PIC_IN_INVALID_ALBUM','¡La foto está en un album que no existe!(%s)!?');
define('BANNED','Actualmente estás expulsado respecto del uso de esta web.');
define('NOT_WITH_UDB','Esta función está desactivada en Coppermine porque está integrada con un software de foros. Lo que fuese que estás intentando hacer no está¡ soportado en esta configuración, o la función debe ser manejada por el software de foros.');
define('MEMBERS_ONLY','Esta funcion es solo para miembros, por favor registrese.');
define('MUSTBE_GOD','Esta funcion es solo para administradores. Necesitas de entrar en tu cuenta de superadmin, god para acceder a esta funcion.');
define('NO_IMG_TO_APPROVE','No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE','Ir a la lista de albums');
define('ALB_LIST_LNK','Lista de Albums');
define('MY_GAL_TITLE','Ir a mi galería personal.');
define('MY_GAL_LNK','Mi galería');
define('MY_PROF_LNK','Mi perfil de usuario');
define('MY_PROF_TITLE','Revisa tu quota de disco y gruposs');
define('ADM_MODE_TITLE','Ir a modo administrador');
define('ADM_MODE_LNK','Modo Admininstrador');
define('USR_MODE_TITLE','Ir a modo usuario');
define('USR_MODE_LNK','Modo Usuario');
define('UPLOAD_PIC_TITLE','Insertar foto en un album');
define('UPLOAD_PIC_LNK','Insertar foto');
define('REGISTER_TITLE','Crear un usuario');
define('REGISTER_LNK','Registrarse');
define('LOGIN_LNK','Login');
define('LOGOUT_LNK','Logout');
define('LASTUP_LNK','Últimas fotos.');
define('LASTUP_TITLE','Últimas fotos');
define('TOPN_TITLE','Pictures that have been seen most');
define('TOPN_LNK','Más visitas');
define('TOPRATED_TITLE','Mejor valoradas');
define('TOPRATED_LNK','Top rated');
define('SEARCH_TITLE','Search Photo Collection');
define('SEARCH_LNK','<img src="/themes/setdart/coppermine/images/buscar.gif" vspace="2" height="40" width="60" align="middle" alt="Buscar"  border="0" />');
define('FAV_TITLE','My Favorites');
define('FAV_LNK','Mis Favoritos');
define('HELP_TITLE','HELP');

// lang_gallery_admin_menu
define('UPL_APP_LNK','Aprobar Uploads');
define('CONFIG_LNK','Configuracion');
define('ALBUMS_LNK','Albums');
define('CATEGORIES_LNK','Categorìas');
define('USERS_LNK','Usuarios');
define('GROUPS_LNK','Grupos');
define('COMMENTS_LNK','Comentarios');
define('SEARCHNEW_LNK','Agregar Fotos  (Batch)');
define('UTIL_LNK','Cambiar tamaño de las fotos');
define('BAN_LNK','Expulsar a Usuarios');

// lang_user_admin_menu
define('ALBMGR_LNK','Crear / ordenar albums');
define('MODIFYALB_LNK','Modificar mis albums');
//define('MY_PROF_LNK', 'My profile');

// lang_cat_list
define('CATEGORY','Categorìa');
define('ALBUMS','Albums');
//define('PICTURES', 'Pictures');

// lang_album_list
define('ALBUM_ON_PAGE','%d albums en %d pãgina(s)');
// lang_thumb_view
define('DATE','FECHA');
define('NAME','Nombre de usuario');
define('TITLE','Cambiar tamaÃ±o a las fotos');
define('SORT_DA','Ordenado por fecha ascendente');
define('SORT_DD','Ordenado por fecha descendente');
define('SORT_NA','Ordenado por nombre ascendente');
define('SORT_ND','Ordenado por nombre descendente');
define('SORT_TA','Ordenado por título ascendiente');
define('SORT_TD','Ordenado por título descendiente');
define('PIC_ON_PAGE','%d fotos en %d pãgina(s)');
define('USER_ON_PAGE','%d usuarios en %d pãgina(s)');
define('SORT_RA','Ordenado por valoracion ascendiente');
define('SORT_RD','Ordenado por valoracion descendiente');
define('THUMB_RATING','RATING');
define('SORT_TITLE','Ordenar fotos por:');

// lang_img_nav_bar
define('THUMB_TITLE','Volver al Indice de album');
define('PIC_INFO_TITLE','Mostrar/ocultar información de la foto');
define('SLIDESHOW_TITLE','Slideshow');
define('SLIDESHOW_DISABLED','e-cards esta desactivada');
define('SLIDESHOW_DISABLED_MSG','Esta funcion es solo para miembros, registrate.');
define('ECARD_TITLE','Una foto de %s para ti');
define('ECARD_DISABLED','Envio de fotos deshabilitado');
define('ECARD_DISABLED_MSG','No tienes permisos para enviar fotos');
define('PREV_TITLE','Ver foto anterior');
define('NEXT_TITLE','Ver foto siguiente');
define('PIC_POS','FOTO %s/%s');
define('NO_MORE_IMAGES','No hay mas imagenes en esta galeria');
define('NO_LESS_IMAGES','Esta es la primera imagen en la galeria');

// lang_rate_pic
define('RATE_THIS_PIC','Valorar esta foto ');
define('NO_VOTES','(No hay votos)');
define('RATING','ValoraciÃ³n (%s votos)');
define('RUBBISH','Mala');
define('POOR','Regular');
define('FAIR','Normal');
define('GOOD','Buena');
define('EXCELLENT','Excelente');
define('GREAT','Genial');

// lang_cpg_die
//define('INFO', 'Information');
//define('ERROR', 'Error');
define('_CRITICAL_ERROR','Critical error');
define('FILE','Fichero');
define('LINE','Linea: ');

// lang_display_thumbnails
define('FILENAME','Nombre del fichero');
define('FILESIZE','Tamaño: ');
define('DIMENSIONS','Dimensiones');
define('DATE_ADDED','Fecha de alta: ');

// lang_get_pic_data
define('N_COMMENTS','%s comentarios');
define('N_VIEWS','%s veces vista');
define('N_VOTES','(%s votos)');


// lang_albmgr_php
define('ALB_NEED_NAME','¿Los albums deben tener un nombre!');
define('CONFIRM_MODIFS','¿Estas seguro de aplicar estas modificaciones?');
define('NO_CHANGE','No se hizo ningun cambio.!');
define('NEW_ALBUM','Nuevo album');
define('CONFIRM_DELETE1','¿Estas seguro de querer borrar este album?');
define('CONFIRM_DELETE2','\nTodas las fotos y comentarios que contiene se perderan!');
define('SELECT_FIRST','Selecciona un album primero');
define('ALB_MRG','Administrador de Albums');
define('MY_GALLERY','* Mi galería *');
define('NO_CATEGORY','* Sin categoría *');
define('DELETE','Borrar tÃ­tulos de fotos o fotos de tamaÃ±o original');
define('NEW','Nuevo');
define('APPLY_MODIFS','Aplicar modificaciones');
define('SELECT_CATEGORY','Seleccionar categorìa');

// lang_catmgr_php
define('MISS_PARAM','¡Los parámetro requeridos para la operacion: \'%s\' no han sido suministrados!');
define('UNKNOWN_CAT','La categorìa seleccionada no existe en la base da datos');
define('USERGAL_CAT_RO','¡Las categorìas de galerìas de usuario no pueden ser borradas!');
define('MANAGE_CAT','Organizador de categorìas');
define('CONFIRM_DELETE_CAT','Are you sure you want to DELETE this category');
//define('CATEGORY', 'Category');
define('OPERATIONS','Operaciones');
define('MOVE_INTO','Mover hacia');
define('UPDATE_CREATE','Modificar/Crear categorìa');
define('PARENT_CAT','Categorìa padre');
define('CAT_TITLE','Tùtulo de la categorìa');
define('CAT_DESC','Descripciõn de la categorìa');

// lang_config_php
define('CONFIG_TITLE','Configuration');
define('RESTORE_CFG','Restaurar valores por defecto');
define('SAVE_CFG','Guardar la nueva configuraciõn');
define('NOTES','Notas');
//define('INFO', 'Information');
define('UPD_SUCCESS','La configuraciõn de Coppermine ha sido actualizada');
define('RESTORE_SUCCESS','Valores por defecto de Coppermine restaurados');
define('NAME_A','Ascendente por nombre');
define('NAME_D','Descendente por nombre');
define('TITLE_A','Ascendente por tùtulo');
define('TITLE_D','Descendente por tùtulo');
define('DATE_A','Ascendente por fecha');
define('DATE_D','Descendente por fecha');
define('RATING_A','Rating ascending');
define('RATING_D','Rating descending');
define('TH_ANY','Max Aspect');
define('TH_HT','Height');
define('TH_WD','Width');


// lang_db_input_php
define('EMPTY_NAME_OR_COM','Debes introducir tu nombre y un comentario');
define('COM_ADDED','Comentario aÃ±adido');
define('ALB_NEED_TITLE','Â¡Debes de introducir un tÃ­tulo para el album!');
define('NO_UDP_NEEDED','No se requiere ningÃºn cambio');
define('ALB_UPDATED','Album actualizado');
define('UNKNOWN_ALBUM','El album seleccionado no existe o no tienes permisos para aÃ±adir fotos en este album');
define('NO_PIC_UPLOADED','Â¡Ninguna foto fue aÃ±adida!<br /><br />Si habÃ­as seleccionado una foto para aÃ±adir, comprueba que el servidor admite subir ficheros...');
define('ERR_MKDIR','Â¡Fallo al crear el directorio %s!');
define('DEST_DIR_RO','Â¡El directorio destino %s no tiene permisos de escritura!');
define('ERR_MOVE','Â¡Imposible mover %s a %s !');
define('ERR_FSIZE_TOO_LARGE','El tamaño de la foto que quieres insertar es demasiago grande (el mÃ¡ximo permitido es de %s x %s)');
define('ERR_IMGSIZE_TOO_LARGE','El tamaño del fichero de la foto que quieres insertar es demasiado grande (el mÃ¡ximo permitido es de %s KB)');
define('ERR_INVALID_IMG','El fichero que quieres insertar no es una imagen vÃ¡lida');
define('ALLOWED_IMG_TYPES','Puedes insertar solamente %s fotos.');
define('ERR_INSERT_PIC','La foto \'%s\' no puede ser dada de alta en el album ');
//define('INFO', 'Information');
define('ERR_COMMENT_EMPTY','Â¡El comentario estÃ¡ vacio!');
define('ERR_INVALID_FEXT','Solamente estÃ¡n admitidas fotos con las siguientes extensiones : <br /><br />%s.');
define('NO_FLOOD','Perdona pero eres el autor/a del Ãºltimo comentario introducido para esta foto<br /><br />Puedes editar el comentario que has puesto si es que quieres modificarlo');
define('REDIRECT_MSG','EstÃ¡s siendo redirigido.<br /><br /><br />Pulsa \'CONTINUAR\' si la pÃ¡gina no se refresca automÃ¡ticamente');
define('UPL_SUCCESS','La foto se ha aÃ±adido correctamente');

// lang_delete_php
define('CAPTION','Caption');
define('FS_PIC','imagen tamaÃ±o completo');
define('DEL_SUCCESS','borrado correctamente');
define('NS_PIC','imagen tamaÃ±o normal');
define('ERR_DEL','no puede ser borrado');
define('THUMB_PIC','thumbnail');
//define('COMMENT', 'comment');
define('IM_IN_ALB','fotos en el album');
define('ALB_DEL_SUCCESS','Album \'%s\' borrado');
define('ALB_MGR','Organizador de albums');
define('ERR_INVALID_DATA','Datos invÃ¡lidos recibidos en \'%s\'');
define('CREATE_ALB','Creando el album \'%s\'');
define('UPDATE_ALB','Actualizando album \'%s\' con el tÃ­tulo \'%s\' y el Ã­ndice \'%s\'');
define('DEL_PIC','Borrar foto');
define('DEL_ALB','Borrar album');
define('DEL_USER','Borrar usuario');
//define('ERR_UNKNOWN_USER', 'The selected user does not exist !');
define('COMMENT_DELETED','El comentario ha sido borrado');

// lang_display_image_php
define('PIC_CONFIRM_DEL','Are you sure you want to DELETE this picture ? \nComments will also be deleted.');
define('DEL_THIS_PIC','DELETE THIS PICTURE');
define('SIZE','%s x %s pixels');
define('VIEWS','%s veces');
define('SLIDESHOW','Slideshow');
define('STOP_SLIDESHOW','DETENER SLIDESHOW');
define('VIEW_FS','Pulsa aqui para ver la imagen a tamaÃ±o completo');
define('EDIT_PIC','EDIT PICTURE INFO');

// lang_picinfo
define('PIC_INF_TITLE','Picture information');
define('PIC_INF_FILENAME','Filename');
define('ALBUM_NAME','Album name');
define('PIC_INFO_RATING','Rating (%s votes)');
define('KEYWORDS','Palabras clave (separadas por espacios)');
define('PIC_INF_FILE_SIZE','File Size');
define('PIC_INF_DIMENSIONS','Dimensions');
define('DISPLAYED','Se ha visto');
define('CAMERA','CÃ¡mara');
define('DATE_TAKEN','Date taken');
define('APERTURE','Apertura');
define('EXPOSURE_TIME','Exposure time');
define('FOCAL_LENGTH','Focal length');
define('COMMENT','Comentario');
define('ADDFAV','AÃ±adir a Favoritos');
define('ADDFAVPHRASE','Favoritos');
define('REMFAV','Quitar de Favoritos');
define('IPTCTITLE','IPTC Title');
define('IPTCCOPYRIGHT','IPTC Copyright');
define('IPTCKEYWORDS','IPTC Keywords');
define('IPTCCATEGORY','IPTC Category');
define('IPTCSUBCATEGORIES','IPTC Sub Categories');
define('BOOKMARK_PAGE','Bookmark Image');
define('REMOVEFAV','Removed from Favorites Album');
define('ADDEDTOFAV','Added to Favorites Album');

// lang_display_comments
define('OK','OK');
define('COM_EDIT_TITLE','Edit this comment');
define('CONFIRM_DELETE_COM','Are you sure you want to delete this comment ?');
define('ADD_YOUR_COMMENT','AÃ±adir un comentario');
define('COM_NAME','Name');
//define('COMMENT', 'Comment');
define('YOUR_NAME','Tu nombre');

// lang_fullsize_popup
define('CLICK_TO_CLOSE','Pulsa en la imagen para cerrar esta ventana');

// lang_ecard_php
define('E_TITLE','Send an e-card');
define('INVALID_EMAIL','<b>AtenciÃ³n</b> : Â¡direcciÃ³n e-mail incorrecta!');
define('E_ECARD_TITLE','An e-card from %s for you');
define('VIEW_ECARD','Si la foto no se ve correctamente, pulsa en este link');
define('VIEW_MORE_PICS','Â¡Pulsa aqui para ver mÃ¡s fotos!');
define('SEND_SUCCESS','La foto ha sido enviada');
define('SEND_FAILED','Disculpa, pero el servidor no puede enviar la foto...');
define('FROM','De');
define('_YOUR_NAME','Your name');
define('YOUR_EMAIL','Tu direcciÃ³n de e-mail');
define('TO','A');
define('RCPT_NAME','Nombre de tu amigo');
define('RCPT_EMAIL','DirecciÃ³n e-mail de tu amigo');
define('GREETINGS','TÃ­tulo del mensaje');
define('MESSAGE','Mensaje');
define('ECARD_LINK_CORRUPT','Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser');

// lang_editpics_php
define('PIC_INFO','Informaciõn');
define('ALBUM','Album');
define('EDIT_TITLE','Editar el comentario');
define('DESC','DescripciÃ³n');
//define('KEYWORDS', 'Keywords');
define('PIC_INFO_STR','%sx%s - %sKB - %s veces vista - %s votos');
define('APPROVE','Aprobar la foto');
define('POSTPONE_APP','Postponer aprobado de foto');
//define('DEL_PIC', 'Delete picture');
define('READ_EXIF','Read EXIF info again');
define('RESET_VIEW_COUNT','Poner a cero el contador de veces que se ha visto');
define('RESET_VOTES','Poner a cero los votos');
define('DEL_COMM','Borrar comentarios seleccionados');
define('UPL_APPROVAL','Aprobar uploads');
define('EDIT_PICS','EDITAR FOTOS');
define('SEE_NEXT','Ver el siguiente');
define('SEE_PREV','Ver el anterior');
define('N_PIC','%s foto/s');
define('N_OF_PIC_TO_DISP','NÃºmero de fotos a mostrar');
define('APPLY','Validar los cambios');

// lang_groupmgr_php
define('GROUP_NAME','Nombre del grupo');
define('DISK_QUOTA','Cuota de disco');
define('CAN_RATE','Los visitantes pueden valorar las fotos');
define('CAN_SEND_ECARDS','Pueden enviar ecards');
define('CAN_POST_COM','Pueden aÃ±adir comentarios');
define('CAN_UPLOAD','Los visitantes pueden aÃ±adir fotos');
define('CAN_HAVE_GALLERY','Pueden tener galerÃ­as personales');
//define('APPLY', 'Apply modifications');
define('CREATE_NEW_GROUP','Crear nuevo grupo');
define('DEL_GROUPS','Borrar el/los grupo(s) seleccionados');
define('CONFIRM_DEL','Â¿EstÃ¡s seguro de querer BORRAR este usuario? \nTodas sus fotos y albums serÃ¡n tambiÃ©n borrados.');
define('GROUP_TITLE','Manage user groups');
define('APPROVAL_1','AprobaciÃ³n album pÃºblico (1)');
define('APPROVAL_2','AprobaciÃ³n album privado (2)');
define('NOTE1','<b>(1)</b> AÃ±adir fotos en un album pÃºblico requerirÃ¡ aprobaciÃ³n de los administradores');
define('NOTE2','<b>(2)</b> AÃ±adir fotos en un album que pertenece al asuario requerirÃ¡ aprobaciÃ³n de los administradores');
//define('NOTES', 'Notes');

// lang_index_php
define('WELCOME','Â¡Bienvenido!');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB','Are you sure you want to DELETE this album ? \nAll pictures and comments will also be deleted.');
//define('DELETE', 'DELETE');
define('MODIFY','MODIFICAR');
//define('EDIT_PICS', 'EDIT PICS');

// lang_list_categories
define('HOME','Home');
define('STAT1','<b>[pictures]</b> fotos en <b>[albums]</b> albums y <b>[cat]</b> categorÃ­as con <b>[comments]</b> comentarios, vistas <b>[views]</b> veces');
define('STAT2','<b>[pictures]</b> fotos en <b>[albums]</b> albums, vistas <b>[views]</b> veces');
define('XX_S_GALLERY','GalerÃ­a de %s');
define('STAT3','<b>[pictures]</b> fotos en <b>[albums]</b> albums con <b>[comments]</b> comentarios, vistas <b>[views]</b> veces');

// lang_list_users
define('USER_LIST','Lista de usuarios');
define('NO_USER_GAL','No existen usuarios con permisos para tener albums');
define('N_ALBUMS','%s album(s)');
define('N_PICS','%s foto(s)');

// lang_list_albums
define('N_PICTURES','%s fotos');
define('LAST_ADDED',', el último uno agregó %s');

// lang_modifyalb_php
define('UPD_ALB_N','Modificar album %s');
define('GENERAL_SETTINGS','ConfiguraciÃ³n general');
define('ALB_TITLE','TÃ­tulo del album');
define('ALB_CAT','CategorÃ­a del album');
define('ALB_DESC','DescripciÃ³n del album');
define('ALB_THUMB','Thumbnail del album');
define('ALB_PERM','Permisos para este album');
define('CAN_VIEW','Este album puede ser visto por');
define('MOD_CAN_UPLOAD','Visitors can upload pictures');
define('CAN_POST_COMMENTS','Los visitantes pueden aÃ±adir comentarios');
define('MOD_CAN_RATE','Visitors can rate pictures');
define('USER_GAL','GalerÃ­a de usuario');
define('NO_CAT','* Sin categorÃ­a *');
define('ALB_EMPTY','El album estÃ¡ vacÃ­o');
define('LAST_UPLOADED','Ultima foto aÃ±adida');
define('PUBLIC_ALB','Todo el mundo (album pÃºblico)');
define('ME_ONLY','Solamente yo');
define('OWNER_ONLY','Solamente el dueÃ±o del album (%s)');
define('GROUPP_ONLY','Miembros del grupo \'%s\'');
define('ERR_NO_ALB_TO_MODIFY','No puedes modificar ningÃºn album en la base de datos.');
define('UPDATE','Actualizar thumbs y/o tamaÃ±os de fotos');

// lang_rate_pic_php
define('ALREADY_RATED','Perdona pero ya has votado anteriormente a esta foto');
define('RATE_OK','Tu voto ha sido contabilizado');

// lang_register_php
define('USERNAME','Nombre de usuario');
define('GROUP','Grupo');
define('DISK_USAGE','Uso de disco');
define('X_S_PROFILE','Perfil de %s');

// lang_reviewcom_php
define('REVIEW_TITLE','Review comments');
define('NO_COMMENT','No existen comentarios que mostrar');
define('N_COMM_DEL','%s comentario(s) borrado(s)');
define('N_COMM_DISP','NÃºmero de comentarios a mostrar');
define('R_SEE_PREV','See previous');
define('R_SEE_NEXT','See next');
define('R_DEL_COMM','Delete selected comments');

// lang_search_php
define('S_SEARCH','Search the image collection');

// lang_search_new_php
define('PAGE_TITLE','Buscar nuevas fotos');
define('SELECT_DIR','Selecciona directorio');
define('SELECT_DIR_MSG','Esta funciÃ³n te permite aÃ±adir de forma automÃ¡tica las fotos que hayas subido a tu servidor mediante FTP.<br /><br />Selecciona el directorio donde has subido tus fotos');
define('NO_PIC_TO_ADD','No hay ninguna foto para aÃ±adir');
define('NEED_ONE_ALBUM','Necesitas al menos un album para utilizar esta funciÃ³n');
define('WARNING','AtenciÃ³n');
define('CHANGE_PERM','Â¡El script no puede escribir en este directorio, necesitas cambiar sus permisos a modo 755 o 777 antes de intentarlo de nuevo!');
define('TARGET_ALBUM','<b>Colocar las fotos del dierctorio &quot;</b>%s<b>&quot; en el album </b>%s');
define('FOLDER','Carpeta');
define('IMAGE','Foto');
//define('ALBUM', 'Album');
define('RESULT','Resultado');
define('DIR_RO','No se puede escribir. ');
define('DIR_CANT_READ','No se puede leer. ');
define('INSERT','AÃ±adiendo nuevas fotos a la galerÃ­a');
define('LIST_NEW_PIC','Listado de nuevas fotos');
define('INSERT_SELECTED','AÃ±adir las fotos seleccionadas');
define('NO_PIC_FOUND','No se encontrÃ³ ninguna foto nueva');
define('BE_PATIENT','Por favor, se paciente, el script necesita tiempo para aÃ±adir las fotos');
define('SN_NOTES','<ul><li><b>OK</b> : means that the picture was succesfully added<li><b>DP</b> : means that the picture is a duplicate and is already in the database<li><b>PB</b> : means that the picture could not be added, check your configuration and the permission of directories where the pictures are located<li>If the OK, DP, PB \'signs\' does not appear click on the broken picture to see any error message produced by PHP<li>If your browser timeout, hit the reload button</ul>');
define('SELECT_ALBUM','Selecciona album');
define('NO_ALBUM','No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('UP_TITLE','Upload picture');
define('MAX_FSIZE','El tamaÃ±o mÃ¡ximo de fichero admitido es de %s KB');
//define('ALBUM', 'Album');
define('PICTURE','Foto');
define('PIC_TITLE','TÃ­tulo de la foto');
define('DESCRIPTION','DescripciÃ³n de la foto');
define('UP_KEYWORDS','Keywords (separate with spaces)');
define('ERR_NO_ALB_UPLOADABLES','Perdona pero no hay ningÃºn album donde estÃ© permitido insertar nuevas fotos');

// lang_usermgr_php
define('U_TITLE','Manage users');
//define('NAME_A', 'Name ascending');
//define('NAME_D', 'Name descending');
define('GROUP_A','Ascendente por grupo');
define('GROUP_D','Descendente por grupo');
define('REG_A','Ascendente por fecha de alta');
define('REG_D','Descendente por fecha de alta');
define('PIC_A','Ascendente por total de fotos');
define('PIC_D','Descendente por total de fotos');
define('DISKU_A','Ascendente por uso de disco');
define('DISKU_D','Descendente por uso de disco');
define('SORT_BY','Ordenar usuarios por');
define('ERR_NO_USERS','Â¡La tabla de usuarios estÃ¡ vacÃ­a!');
define('ERR_EDIT_SELF','No puedes editar tu propio perfil, usa la opciÃ³n \'Mi perfil de usuario\' para eso');
define('EDIT','EDITAR');
//define('DELETE', 'DELETE');
define('U_NAME','User name');
//define('GROUP', 'Group');
define('INACTIVE','Inactivo');
//define('OPERATIONS', 'Operations');
define('PICTURES','Fotos');
define('DISK_SPACE','Espacio usado / Cuota');
define('REGISTERED_ON','Registrado el dÃ­a');
define('U_USER_ON_P_PAGES','%d usuarios en %d pÃ¡gina(s)');
define('USER_CONFIRM_DEL','Are you sure you want to DELETE this user ? \nAll his pictures and albums will also be deleted.');
define('MAIL','MAIL');
define('ERR_UNKNOWN_USER','Â¡El usuario seleccionado no existe!');
define('MODIFY_USER','Modificar usuario');
//define('NOTES', 'Notes');
define('NOTE_LIST','<li>Si no quieres cambiar la contraseÃ±a actual, deja el campo "contraseÃ±a" vacÃ­o');
define('PASSWORD','ContraseÃ±a');
define('USER_ACTIVE_CP','User is active');
define('USER_GROUP_CP','User group');
define('USER_EMAIL','Email del usuario');
define('USER_WEB_SITE','PÃ¡gina web del usuario');
define('CREATE_NEW_USER','Crear nuevo usuario');
define('USER_FROM','Localidad del usuario');
define('USER_INTERESTS','Intereses del usuario');
define('USER_OCC','OcupaciÃ³n del usuario');

// lang_util_php
define('UTIL_TITLE','Resize pictures');
define('WHAT_IT_DOES','QuÃ© hace');
define('WHAT_UPDATE_TITLES','Actualiza los nombres de fichero');
define('WHAT_DELETE_TITLE','Borra los tÃ­tulos');
define('WHAT_REBUILD','Vuelve a crear los thumbnails y otros tamaÃ±os de las fotos');
define('WHAT_DELETE_ORIGINALS','Borra las fotos originales reemplazÃ¡ndolas con versiones de nuevo tamaÃ±o');
define('U_FILE','File');
define('TITLE_SET_TO','tÃ­tulo a poner');
define('SUBMIT_FORM','enviar');
define('UPDATED_SUCCESFULLY','actualizado con Ã©xito');
define('ERROR_CREATE','ERROR al crear');
define('CONTIN','Process more images');
define('MAIN_SUCCESS','El fichero %s ha sido usado como foto principal con Ã©xito');
define('ERROR_RENAME','Error renombrando %s a %s');
define('ERROR_NOT_FOUND','No se encuentra el fichero %s');
define('U_BACK','back to main');
define('THUMBS_WAIT','Actualizando thumbnails y/o tamaÃ±os de fotos, por favor espere...');
define('THUMBS_CONTINUE_WAIT','Continuando la actualizaciÃ³n de thumbnails y/o tamaÃ±os de fotos...');
define('TITLES_WAIT','Actualizando tÃ­tulos, por favor espere...');
define('DELETE_WAIT','Borrando tÃ­tulos, por favor espere...');
define('REPLACE_WAIT','Borrando originales y reemplazÃ¡ndolos con las fotos de nuevo tamaÃ±o, por favor espere...');
define('INSTRUCTION','Instrucciones rÃ¡pidas');
define('INSTRUCTION_ACTION','Selecionar acciÃ³n');
define('INSTRUCTION_PARAMETER','Poner parÃ¡metros');
define('INSTRUCTION_ALBUM','Seleccionar album');
define('INSTRUCTION_PRESS','Pulsar %s');
define('U_UPDATE','Update thumbs and/or resized photos');
define('UPDATE_WHAT','QuÃ© debe ser actualizado');
define('UPDATE_THUMB','Solo thumbnails');
define('UPDATE_PIC','Solo tamaÃ±os de fotos');
define('UPDATE_BOTH','Thumbnails y tamaÃ±os de fotos (ambos)');
define('UPDATE_NUMBER','NÃºmero de imÃ¡genes procesadas por cada click');
define('UPDATE_OPTION','(Prueba a poner un nÃºmero menor si experimentas problemas de timeout)');
define('FILENAME_TITLE','Fichero &rArr; TÃ­tulo de la foto');
define('FILENAME_HOW','CÃ³mo debe ser el fichero modificado');
define('FILENAME_REMOVE','Quitar .jpg del final y reemplazar _ (underscore) con espacios');
define('FILENAME_EURO','Cambiar 2003_11_23_13_20_20.jpg a 23/11/2003 13:20');
define('FILENAME_US','Cambiar 2003_11_23_13_20_20.jpg a 11/23/2003 13:20');
define('FILENAME_TIME','Cambiar 2003_11_23_13_20_20.jpg a 13:20');
define('UT_DELETE','Delete picture titles or original size photos');
define('DELETE_TITLE','Borrar tÃ­tulos de fotos');
define('DELETE_ORIGINAL','Borrar fotos de tamaÃ±o original');
define('DELETE_REPLACE','Borra las imÃ¡genes originales, reemplazÃ¡ndolas con otras de tamaÃ±o nuevo');
//define('SELECT_ALBUM', 'Select album');

// lang_pagetitle_php
define('VIEWING','Viewing Photo');
define('USR','\'s Photo Gallery');
define('PHOTOGALLERY','Photo Gallery');
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
$lang_day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');
$lang_meta_album_names = array(
    'random' => 'Random pictures',
    'lastup' => 'Last additions',
    'lastupby' => 'My Last additions', // new 1.2.2
    'lastalb' => 'Last updated albums',
    'lastcom' => 'Last comments',
    'lastcomby' => 'My Last comments', // new 1.2.2
    'topn' => 'Most viewed',
    'toprated' => 'Top rated',
    'lasthits' => 'Last viewed',
    'search' => 'Search results',
    'favpics' => 'Favorite Pictures' // changed in cpg1.2.0nuke
    );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array(
    'title' => 'Configuration',
    'restore_cfg' => 'Restore factory defaults',
    'save_cfg' => 'Save new configuration',
    'notes' => 'Notes',
    'info' => 'Information',
    'upd_success' => 'Coppermine configuration was updated',
    'restore_success' => 'Coppermine default configuration restored',
    'name_a' => 'Name ascending',
    'name_d' => 'Name descending',
    'title_a' => 'Title ascending',
    'title_d' => 'Title descending',
    'date_a' => 'Date ascending',
    'date_d' => 'Date descending',
    'rating_a' => 'Rating ascending', // new in cpg1.2.0nuke
    'rating_d' => 'Rating descending', // new in cpg1.2.0nuke
    'th_any' => 'Max Aspect',
    'th_ht' => 'Height',
    'th_wd' => 'Width',
    );
// start left side interpretation
$lang_config_data = array(
    'General settings',
    array('Gallery name', 'gallery_name', 0),
    array('Gallery description', 'gallery_description', 0),
    array('Gallery administrator email', 'gallery_admin_email', 0),
    array('Address to nuke folder ie http://www.mysite.tld/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
//    array('Language', 'lang', 5),
// for postnuke change
    array('Theme', 'theme', 6),
    array('Page Specific Titles instead of >Coppermine', 'nice_titles', 1),
    'Album list view',
    array('Width of the main table (pixels or %)', 'main_table_width', 0),
    array('Number of levels of sub-categories to display', 'subcat_level', 0),
    array('Number of albums to display', 'albums_per_page', 0),
    array('Number of columns for the album list', 'album_list_cols', 0),
    array('Size of thumbnails in pixels', 'alb_list_thumb_size', 0),
    array('The content of the main page', 'main_page_layout', 0),
    array('Show first level album thumbnails in categories', 'first_level', 1), 
    'Thumbnail view',
    array('Number of columns on thumbnail page', 'thumbcols', 0),
    array('Number of rows on thumbnail page', 'thumbrows', 0),
    array('Maximum number of tabs to display', 'max_tabs', 0),
    array('Display picture caption (in addition to title) below the thumbnail', 'caption_in_thumbview', 1),
    array('Display number of comments below the thumbnail', 'display_comment_count', 1),
    array('Default sort order for pictures', 'default_sort_order', 3),
    array('Minimum number of votes for a picture to appear in the \'top-rated\' list', 'min_votes_for_rating', 0),
    array('Alts and title tags of thumbnail show title and keyword instead of picinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
    'Display Image &amp; Comment settings',
    array('Width of the table for picture display (pixels or %)', 'picture_table_width', 0),
    array('Picture information are visible by default', 'display_pic_info', 1),
    array('Filter bad words in comments', 'filter_bad_words', 1),
    array('Allow smiles in comments', 'enable_smilies', 1),
    array('Allow several consecutive comments on one pic from the same user', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
    array('Email site admin upon comment submission' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
    array('Max length for an image description', 'max_img_desc_length', 0),
    array('Max number of characters in a word', 'max_com_wlength', 0),
    array('Max number of lines in a comment', 'max_com_lines', 0),
    array('Maximum length of a comment', 'max_com_size', 0),
    array('Show film strip', 'display_film_strip', 1),
    array('Number of items in film strip', 'max_film_strip_items', 0),
    array('Allow viewing of full size pic by anonymous', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
    array('Number of days between being able to vote on the same image','keep_votes_time',0), // new in cpg1.2.2c nuke
    array('Show fullsize picture in slideshow','fullsize_slideshow',1),
    array('Show blocks on the right of displayimage if right blocks are on at module level?', 'right_blocks', 1), // new 1.2.2
    'Pictures and thumbnails settings',
    array('Quality for JPEG files', 'jpeg_qual', 0),
    array('Max dimension of a thumbnail <b>*</b>', 'thumb_width', 0),
    array('Use dimension ( width or height or Max aspect for thumbnail )<b>*</b>', 'thumb_use', 7),
    array('Create intermediate pictures', 'make_intermediate', 1),
    array('Max width or height of an intermediate picture <b>*</b>', 'picture_width', 0),
    array('Max size for uploaded pictures (KB)', 'max_upl_size', 0),
    array('Max width or height for uploaded pictures (pixels)', 'max_upl_width_height', 0), 
    array('Allow multiple Files to be upload with same file name', 'samename', 1), 
    'User settings',
    array('Allow new user registrations', 'allow_user_registration', 1),
    /*array('User registration requires email verification', 'reg_requires_valid_email', 1),
    array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),*/
    array('Users can can have private albums', 'allow_private_albums', 1),
    array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
    'Custom fields for image description (leave blank if unused)',
    array('Field 1 name', 'user_field1_name', 0),
    array('Field 2 name', 'user_field2_name', 0),
    array('Field 3 name', 'user_field3_name', 0),
    array('Field 4 name', 'user_field4_name', 0), 
    'Pictures and thumbnails advanced settings',
    array('Show private album Icon to unlogged user', 'show_private', 1),
    array('Characters forbidden in filenames', 'forbiden_fname_char', 0),
    array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions', 0),
    array('Method for resizing images', 'thumb_method', 2),
    array('Path to ImageMagick / netpbm \'convert\' utility (example /usr/bin/X11/)', 'impath', 0),
    array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types', 0),
    array('Command line options for ImageMagick', 'im_options', 0),
    array('Read EXIF data in JPEG files', 'read_exif_data', 1),
    array('Read IPTC data in JPEG files', 'read_iptc_data', 1), // new in cpg1.2.0nuke
    array('The album directory <b>*</b>', 'fullpath', 0),
    array('The directory for user pictures <b>*</b>', 'userpics', 0),
    array('The prefix for intermediate pictures <b>*</b>', 'normal_pfx', 0),
    array('The prefix for thumbnails <b>*</b>', 'thumb_pfx', 0),
    array('Default mode for directories', 'default_dir_mode', 0),
    array('Default mode for pictures', 'default_file_mode', 0),
    array('Picinfo display filename', 'picinfo_display_filename', '1'), // new in cpg1.2.0nuke
    array('Picinfo display album name', 'picinfo_display_album_name', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_file_size', 'picinfo_display_file_size', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_dimensions', 'picinfo_display_dimensions', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_count_displayed', 'picinfo_display_count_displayed', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_URL', 'picinfo_display_URL', '1'), // new in cpg1.2.0nuke
    array('Picinfo display URL as bookmark link', 'picinfo_display_URL_bookmark', '1'), // new in cpg1.2.0nuke
    array('Picinfo display fav album link', 'picinfo_display_favorites', '1'), // new in cpg1.2.0nuke
    'Cookies &amp; Charset settings',
    array('Name of the cookie used by the script', 'cookie_name', 0),
    array('Path of the cookie used by the script', 'cookie_path', 0),
//    array('Character encoding', 'charset', 4), 
    'Miscellaneous settings',
    array('Enable debug mode', 'debug_mode', 1),
    array('Enable advanced debug mode', 'advanced_debug_mode', 1), // new in cpg1.2.0nuke
    array('Show Coppermine Update Alert to Admin', 'showupdate', 1), // new 1.2.2

    '<br /><div align="center">(*) Fields marked with * must not be changed if you already have pictures in your gallery</div><br />'
    );
// end left side interpretation
?>
