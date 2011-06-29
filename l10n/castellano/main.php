<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/castellano/main.php,v $
  $Revision: 1.26 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:46 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','es-es');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','- %A, %d de %B %Y a las %H:%M');
define('_DATESTRING2','%A, %d %B');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Página Siguiente');
define('_PREVIOUSPAGE','Página Anterior');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Buscar');
define('_LOGIN','Entrar');
define('_WRITES','escribió');
define('_POSTEDON','Enviado el');
define('_NICKNAME','Apodo');
define('_PASSWORD','Contraseña');
define('_WELCOMETO','Bienvenido a');
define('_EDIT','Editar');
define('_DELETE','Borrar');
define('_POSTEDBY','Enviado por');
define('_READS','Lecturas');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Volver Atrás</a>' : '<a href="javascript:history.go(-1)">Volver Atrás</a>').' ]');
define('_COMMENTS','Comentarios');
define('_PASTARTICLES','Artículos Anteriores');
define('_OLDERARTICLES','Artículos Viejos');
define('_BY','por');
define('_ON','el');
define('_LOGOUT','SALIR');
define('_WAITINGCONT','Contenido en Espera');
define('_WREVIEWS','Análisis');
define('_WLINKS','Enlaces');
define('_ONEDAY','Un día como hoy...');
define('_ASREGISTERED','¿Todavía no tienes una cuenta? Puedes <a href="'.getlink("Your_Account&amp;file=register").'">crearte una</a>. Como usuario registrado tendrás ventajas como seleccionar la apariencia de la página, configurar los comentarios y enviar los comentarios con tu nombre.');
define('_MENUFOR','Menú de');
define('_NOBIGSTORY','Hoy aún no hay una Gran Noticia.');
define('_BIGSTORY','La Noticia más leída hoy:');
define('_SURVEY','Encuesta');
define('_POLLS','Encuestas');
define('_PCOMMENTS','Comentarios:');
define('_RESULTS','Resultados');
define('_HREADMORE','Leer más ...');
define('_CURRENTLY','Actualmente hay');
define('_GUESTS','invitados,');
define('_MEMBERS','miembro(s) conectado(s).');
define('_YOUARELOGGED','Estás conectado como');
define('_YOUHAVE','Tienes');
define('_PRIVATEMSG','mensaje(s) privado(s).');
define('_YOUAREANON','Eres un usuario anónimo. Puedes registrarte <a href="'.getlink("Your_Account&amp;file=register").'">aquí</a>');
define('_NOTE','Nota:');
define('_ADMIN','Administración');
define('_WERECEIVED','Hemos recibido');
define('_PAGESVIEWS','impresiones desde');
define('_TOPIC','Tema');
define('_UDOWNLOADS','Descargas');
define('_VOTE','voto');
define('_VOTES','votos');
define('_MVIEWADMIN','Ver: Sólo Administradores');
define('_MVIEWUSERS','Ver: Sólo Usuarios Registrados');
define('_MVIEWANON','Ver: Sólo Usuarios Anónimos');
define('_MVIEWALL','Ver: Todos los Visitantes');
define('_EXPIRELESSHOUR','Caducidad: menos de una hora');
define('_EXPIREIN','Caduca en');
define('_UNLIMITED','Ilimitado');
define('_HOURS','Horas');
define('_RSSPROBLEM','Actualmente hay un problema con los titulares de esta web');
define('_SELECTLANGUAGE','Seleccionar Idioma');
define('_SELECTGUILANG','Selecciona el Idioma de la Interfaz:');
define('_NONE','Ninguno');
define('_BLOCKPROBLEM','<center>Hay un problema con este bloque.</center>');
define('_BLOCKPROBLEM2','<center>En este momento no existe contenido para este bloque.</center>');
define('_MODULENOTACTIVE','Disculpa, este Módulo está Inactivo!');
define('_NOACTIVEMODULES','Módulos Inactivos');
define('_MODULENOEXIST','Lo sentimos, pero la página solicitada %s no existe');
define('_FORADMINTESTS','(Para Pruebas de administradores)');
define('_BBFORUMS','Foros');
define('_ACCESSDENIED','Acceso Denegado');
define('_RESTRICTEDAREA','Estás intentando entrar en área restringida.');
define('_MODULEUSERS','Lo sentimos pero esta sección de nuestra web es sólo para <i>Usuarios Registrados</i>');
define('_MODULEUSERS2','Te puedes registrar gratis haciendo click <a href="'.getlink('Your_Account&amp;file=register').'">aquí</a> para acceder a esta parte de nuestra web. <br /> <br />Gracias por tu comprensión');
define('_MODULESADMINS','Lo sentimos pero esta sección de nuestra web es sólo para <i>Administradores</i><br /><br />');
define('_MODULESGROUPS','Necesario Acceso de Grupo');
define('_HOME','Inicio');
define('_HOMEPROBLEM','Tenemos un gran problema: ¡¡¡No tenemos una página de Inicio!!!');
define('_ADDAHOME','Añadir un módulo en la página de Inicio');
define('_HOMEPROBLEMUSER','Tenemos un problema en la web. Por favor inténtalo más tarde.');
define('_MORENEWS','Más en la Sección de Noticias');
define('_ALLCATEGORIES','Todas las Categorías');
define('_SPAMGUARDPROTECTED','SpamGuard ha evitado que este correo sea enviado');
define('_M_CHARS','Máximo: %s caracteres');

define('_SYS_MESSAGE','Mensaje del Sistema');
define('_SYS_MESSAGES','Mensajes del Sistema');
define('_SYS_MAINTENANCE','Estás trabajando en Modo de Mantenimiento');
define('_SYS_DEMO','La web está funcionando bajo la modalidad de Demo de Administración<br/>No puedes realizar ningún cambio a la Base de Datos<br/>><a href="'.adminlink('logout').'">¡Cerrar mi sesión!</a> ');

define('_DATE','Fecha');
define('_HOUR','Hora');
define('_UMONTH','Mes');
define('_YEAR','Año');
define('_JANUARY','Enero');
define('_FEBRUARY','Febrero');
define('_MARCH','Marzo');
define('_APRIL','Abril');
define('_MAY','Mayo');
define('_JUNE','Junio');
define('_JULY','Julio');
define('_AUGUST','Agosto');
define('_SEPTEMBER','Septiembre');
define('_OCTOBER','Octubre');
define('_NOVEMBER','Noviembre');
define('_DECEMBER','Diciembre');

define('_MONDAY','Lunes');
define('_TUESDAY','Martes');
define('_WEDNESDAY','Miércoles');
define('_THURSDAY','Jueves');
define('_FRIDAY','Viernes');
define('_SATURDAY','Sábado');
define('_SUNDAY','Domingo');
//three letter abbrev.
define('_ABR_MONDAY','Lun');
define('_ABR_TUESDAY','Mar');
define('_ABR_WEDNESDAY','Mie');
define('_ABR_THURSDAY','Jue');
define('_ABR_FRIDAY','Vie');
define('_ABR_SATURDAY','Sab');
define('_ABR_SUNDAY','Dom');

define('_BWEL','Bienvenido');
define('_BPM','Mensaje Privados');
define('_BUNREAD','Sin Leer');
define('_BREAD','Leídos');
define('_BMEMP','Lista de miembros');
define('_BLATEST','Último');
define('_BTD','Nuevos Hoy');
define('_BYD','Nuevos Ayer');
define('_BOVER','Total');
define('_BVISIT','Gente OnLine');
define('_BVIS','Visitantes');
define('_BMEM','Miembros');
define('_BTT','Total');
define('_BON','Usuarios OnLine en este momento');
define('_BREG','Regístrate');
define('_BROADCAST','Enviar un Mensaje Público');
define('_BROADCASTFROM','Mensaje Público de');
define('_TURNOFFMSG','Desactivar Mensajes Públicos');
define('_JOURNAL','Blog');
define('_READMYJOURNAL','Leer Mi Blog');
define('_ADD','Añadir');
define('_YES','Si');
define('_NO','No');
define('_INVISIBLEMODULES','Módulos Invisibles');
define('_ACTIVEBUTNOTSEE','(Activos pero con enlace no visible)');
define('_BOTS','Robots');

define('_UM','Monitor de actualización de Dragonfly');
define('_UM_F','Fallo al contactar con el servicio de actualización.');
define('_UM_G','Estás usando la última versión de Dragonfly');
define('_UM_R','Porfavor <a href="%2$s" target="_blank">actualiza</a> a Dragonfly %1$s');

define('_TEAM','Equipo');
define('_LINKAPPROVEDMSG','¡Felicidades! El enlace web que enviaste ha sido aprobado. Por favor crea un enlace hacia nosotros y envíanos un correo electrónico con la URL donde lo hiciste.');
define('_MODREQLINKS','Modif. Enlaces');
define('_BROKENLINKS','Enlaces Rotos');
define('_MODREQDOWN','Modif. Descargas');
define('_BROKENDOWN','Descargas Rotas');
define('_PAGEGENERATION','Página Generada en:');
define('_SECONDS','Segundos');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Página generada en %1$s segundos y %2$s consultas a la DB en %3$s segundos');
define('_YOUHAVEONEMSG','Tienes 1 Nuevo Mensaje Privado');
define('_NEWPMSG','Nuevos Mensajes Privados');
define('_CONTRIBUTEDBY','Contribución de');
define('_CHAT','Chat');
define('_REGISTERED','Registrados');
define('_CHATGUESTS','Invitados');
define('_USERSTALKINGNOW','Usuarios Chateando');
define('_ENTERTOCHAT','Entrar al Chat');
define('_CHATROOMS','Salas de Chat');
define('_ALLTOPICS','Todos los Temas');
define('_ASSOTOPIC','Temas Asociados');
define('_HELLO','Hola');
define('_ALL','Todo');
define('_URL','URL');
define('_SUBJECT','Título');
define('_PREVIEW','Vista Previa');
define('_SEND','Enviar');
define('_ANONYMOUS','Anónimo');
define('_BREADCRUMB', 'Delimitador, separa las palabras en los títulos de página');
define('_BC_DELIM',isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&gt;&gt;');
define('_RESET','Reiniciar');
define('_AT','at');
define('_LASTMSGS','Last %s Forum Messages');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','Versión Imprimible');

define('_CREDITS_TITLE','Créditos');
define('_CREDITS_PRODUCT','Producto');
define('_CREDITS_DESC','Descripción');
define('_CREDITS_AUTHORS','Autor(es)');

define('_PP_TITLE','Política de Privacidad');
define('_PP_MODIFY','Modificar este Mensaje');

define('_SENDEREMAIL','Tu Correo');
define('_SENDERNAME','Tu Nombre');
define('_RECIPIENTNAME','Nombre de tu amigo');
define('_RECIPIENTEMAIL',' Correo de tu amigo');

define('_REASONS_0','As Is');
define('_REASONS_1','Off Topic');
define('_REASONS_2','Flamebait');
define('_REASONS_3','Troll');
define('_REASONS_4','Redundant');
define('_REASONS_5','Insightful');
define('_REASONS_6','Interesting');
define('_REASONS_7','Informative');
define('_REASONS_8','Funny');
define('_REASONS_9','Overrated');
define('_REASONS_10','Underrated');

/* My Account Tools Block */
define('_TB_BLOCK','Herramientas de Mi Cuenta');
define('_TB_TASKS','Tareas');
define('_TB_INFO','Información');
define('_TB_PROFILE_INFO','Mi Perfil Público');
define('_TB_EDIT_PROFILE','Información de mi perfil');
define('_TB_EDIT_REG','Detalles de mi registro');
define('_TB_EDIT_PRIVATE','Mi información privada');
define('_TB_EDIT_AVATAR','Mi avatar');
define('_TB_DELETE','Eliminar mi cuenta');
define('_TB_CONFIG','Configuración');
define('_TB_EDIT_PREFS','Mis preferencias');
define('_TB_EDIT_HOME','Configuración de mi página personal');
define('_TB_EDIT_COMM','Configuración de mis comentarios');
define('_TB_PERSONAL','Personal');
define('_TB_PERSONAL_GALLERY','Mi galería');
define('_TB_PERSONAL_JOURNAL','Mi Blog');
define('_TB_PRIVMSGS','Mensajes Privados');
define('_TB_PRIVMSGS_INBOX','Buzón de Entrada');
define('_TB_PRIVMSGS_OUTBOX','Buzón de Salida');
define('_TB_PRIVMSGS_SENTBOX','Buzón de Enviados');
define('_TB_PRIVMSGS_SAVEBOX','Buzón de Guardados');
define('_TB_PRIVMSGS_SEND','Enviar mensaje');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','Info de Usuario');
define('_SECURITYCODE','Código de Seguridad');
define('_TYPESECCODE','Inserta el Código de Seguridad');
define('_MEMBERSOPTIONS','Opciones de Miembros');
define('_READSEND','Lee tus mensajes privados. Envía mensajes a otros.');
define('_INBOX','Buzón');
define('_NEW','Nuevo');
define('_ACCOUNTOPTIONS','Tu Cuenta. Cambia opciones y lee tus mensajes.');
define('_LOGOUTACCT','Desconectarse de esta cuenta.');
define('_LOGOUTADMINACCT','Desconectarse de esta cuenta de administrador.');
define('_BLOGIN','Tu Cuenta');
define('_BFLOGIN','Mi Perfil');
define('_BHID','Oculto');
define('_WHOWHERE','Donde están todos');
define('_STAFFONL','Administradores conectados');
define('_STAFFNONE','No hay Administradores conectados!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Grupos');
define('_BlogLANG','Blogs');
define('_ContentLANG','Contenido');
define('_coppermineLANG','Galería');
define('_CPGlangLANG','Ayuda a Traducir');
define('_DownloadsLANG','Descargas');
define('_EncyclopediaLANG','Enciclopedia');
define('_ForumsLANG','Foros');
define('_ContactLANG','Escríbenos');
define('_FAQLANG','FAQ - Ayuda');
define('_Members_ListLANG','Lista de Miembros');
define('_NewsLANG','Noticias');
define('_ReviewsLANG','Análisis');
define('_SearchLANG','Búsqueda');
define('_StatisticsLANG','Estadística');
define('_Stories_ArchiveLANG','Archivo de Noticias');
define('_Submit_NewsLANG','Enviar Noticias');
define('_SurveysLANG','Encuestas');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Temas');
define('_Private_MessagesLANG','Mis Mensajes Privados');
define('_Tell_a_FriendLANG','Recomiéndanos');
define('_Web_LinksLANG','Enlaces');
define('_Your_AccountLANG','Mi Cuenta');
define('_CPG_EventsLANG','Calendario');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Languages!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Groups');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Headlines');

define('_COMMUNICATION','Comunicación');
define('_FRIENDS','Amigos');
define('_STORE','Tienda');
define('_PRODUCTS','Productos');
define('_DONATE','Donación');
define('_HELP','Ayuda');
define('_GALLERIES','Galerías');
define('_DOCS','Documentación');
define('_RULES','Reglas y normas');
define('_MENU','Menú principal');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','<strong>Estás</strong> suscrito a<br />nuestro boletín');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','<strong>No estás</strong> suscrito a<br />nuestro boletín');
define('_NEWSLETTERBLOCKREGISTER','Debes ser un<br /><strong>usuario registrado</strong><br />para recibir nuestro boletín');
define('_NEWSLETTERBLOCKSUBSCRIBE','Suscribirme');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Quitar mi suscripción');
define('_NEWSLETTERBLOCKREGISTERNOW','¡Regístrate Ahora!');
/* END Newsletter Block */

/* START class phpmailer lang array */
$PHPMAILER_LANG = array();
$PHPMAILER_LANG['provide_address'] = 'Debe escribir al menos una dirección de email como destinatario.';
$PHPMAILER_LANG['mailer_not_supported'] = ' el envío de correo no está soportado.';
$PHPMAILER_LANG['execute'] = 'No se puede ejecutar: ';
$PHPMAILER_LANG['instantiate'] = 'No se puede crear una instancia de la función correo().';
$PHPMAILER_LANG['authenticate'] = 'Error SMTP: No se pudo autentificar.';
$PHPMAILER_LANG['from_failed'] = 'La(s) siguiente(s) direcciones de remitente fallaron: ';
$PHPMAILER_LANG['recipients_failed'] = 'Error SMTP: Los siguientes destinatarios fallaron: ';
$PHPMAILER_LANG['data_not_accepted'] = 'Error SMTP: Datos no aceptados.';
$PHPMAILER_LANG['connect_host'] = 'Error SMTP: No puedo conectar al servidor SMTP.';
$PHPMAILER_LANG['file_access'] = 'No puedo acceder al archivo: ';
$PHPMAILER_LANG['file_open'] = 'Error de Archivo: No puede abrir el archivo: ';
$PHPMAILER_LANG['encoding'] = 'Codificación desconocida: ';
/* END class phpmailer lang array */

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_SAVECHANGES','Guardar Cambios');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Lenguaje');
define('_FUNCTIONS','Funciones');
define('_SHOW','Ver');
define('_TO','Para');
define('_DAY','Día');
define('_LAST','Últimos');
define('_ACTIVE','Activo');
define('_DEACTIVATE','Desactivar');
define('_INACTIVE','Inactivo');
define('_ACTIVATE','Activar');
define('_ACTIVATE2','¿Activar?');
define('_VIEW','Visible para');
define('_VIEWPRIV','¿Quién puede ver esto?');
define('_MVADMIN','Sólo Administradores');
define('_MVUSERS','Sólo Usuarios Registrados');
define('_MVANON','Sólo Usuarios Anónimos');
define('_MVALL','Todo el mundo');
define('_IMAGE','Imagen');
define('_GO','Ir!');
define('_OPTION','Opción');
define('_CATEGORY','Categoría');
define('_SUBCATEGORY','Sub-Categoría');
define('_ID','ID');
define('_EXPIRATION','Caducidad');
define('_DAYS','días');
define('_WARNING','Aviso');
define('_POLLTITLE','Título de la Encuesta');
define('_POLLEACHFIELD','Por favor escribe cada opción de la encuesta en una casilla');
define('_ADDCATEGORY','Añadir Categoría');
define('_PAGEBREAK','Si quieres dividir en varias páginas, puede escribir <b>&lt;!--pagebreak--&gt;</b> donde quieras cortar');
define('_SIGNATURE','Firma');
define('_DESCRIPTION','Descripción');
define('_EDITCATEGORY','Editar Categoría');
define('_IN','en');
define('_DESCRIPTION255','Descripción (255 caracteres máx.)');
define('_MODCATEGORY','Modificar una Categoría');
define('_SUBMITTER','Usuario');
define('_VISIT','Visitar');
define('_EXTENDEDTEXT','Texto Extendido');
define('_CHECKCATEGORIES','Verificar las categorías');
define('_INCLUDESUBCATEGORIES','(incluir Sub-Categorías)');
define('_CHECKSUBCATEGORIES','Verificar Sub-Categorías');
define('_VALIDATELINKS','Aprobar Enlaces');
define('_FAILED','¡Falló!');
define('_BEPATIENT','(se paciente, por favor)');
define('_VALIDATINGCAT','Aprobando las Categorías (y todas las Sub-Categorías)');
define('_VALIDATINGSUBCAT','Aprobando Sub-Categoría');
define('_OK','Aceptar');
define('_CHECK','Marcar');
define('_IGNORE','Ignorar');
define('_HITS','Visitas');
define('_FILESIZE', 'Tamaño de archivo');
define("_EZTHEREIS","Hay");
define("_EZSUBCAT","sub-categorías");
define("_EZATTACHEDTOCAT","por debajo de esta categoría");
define("_EZBROKENLINKS","Enlaces rotos");
define("_DELEZLINKCATWARNING","Aviso: ¿Estás seguro de querer borrar esta categoría?<br /> ¡Borrarás todas las sub-categorías y los enlaces que contengan!");

// index.php
define('_DEFHOMEMODULE','Módulo por Defecto de la Página de Inicio');
define('_MODULEINHOME','Módulo de la Página de Inicio:');
define('_CHANGE','Cambiar');
define('_WHOSONLINE','¿Quién está conectado?');
define('_NP_ADMIN','Block de notas');
define('_NP_LOCKED','El block de notas ha sido bloqueado<br />Solo un administrador root (super usuario) puede desbloquearlo');
define('_NP_SAVE','Guardar notas');
define('_NP_UNLOCK','Desbloquear block de notas');
define('_NP_LOCK','Bloquear block de notas');
// news
define('_STICKY','Artículos Post-It');
define('_ARTICLEUP','Subir artículo');
define('_ARTICLEDOWN','Bajar artículo');
define('_UNSTICK','Quitar Post-It');
define('_STICK','Post-It');
define('_AUTOMATEDARTICLES','Artículos Programados');
define('_STORYID','ID Noticia');
define('_CURRENTPOLL','Encuesta Actual');

// admin.php
define('_ADMINISTRATION','Administración');
define('_NOADMINYET','No existen cuentas de administradores aún, procede a crear el Super Usuario...');
define('_CREATEUSERDATA','¿Deseas crear un usuario común con los mismos datos?');
define('_ADMINLOGIN','Sistema de Administración');
define('_ADMINID','Admin ID');
define('_EMAIL','Correo');
define('_SUBMIT','Enviar');
define('_YOUARELOGGEDOUT','Usted está desconectado!');
define('_PASSWDNOMATCH','Lo siento, la nueva contraseña no concuerda. Inténtalo de nuevo');
define('_LOGIN_REMEMBERME','¿Recordarme?');
define('_ADMINMENU_LOGOUT','Salir del Menú de Administración');
define('_PASSWORD_MALFORMED','Por favor incluye por lo menos un número, una letra mayúscula y una minúscula en tu contraseña');

// admins.php
define('_AUTHORSADMIN','Administración de Administradores');
define('_NAME','Nombre');
define('_REQUIRED','Necesario');
define('_MODIFYINFO','Modificar Información');
define('_DELAUTHOR','Borrar Administrador');
define('_ADDAUTHOR','Añadir Administrador');
define('_PERMISSIONS','Permisos');
define('_SUPERUSER','Super Usuario');
define('_SUPERWARNING','ATENCIÓN: si seleccionas Super Usuario, el administrador tendrá acceso total');
define('_ADDAUTHOR2','Añadir Administrador');
define('_RETYPEPASSWD','Reescribir Contraseña');
define('_FORCHANGES','(Sólo para cambios)');
define('_COMPLETEFIELDS','Debes completar todos los campos necesarios');
define('_CREATIONERROR','Error en la creación del Administrador');
define('_AUTHORDEL','Borrar Administrador');
define('_PUBLISHEDSTORIES','Este administrador ha publicado Noticias');
define('_SELECTNEWADMIN','Selecciona un nuevo administrador para reasignar');
define('_GODNOTDEL','*(la cuenta Super Administrador no puede borrarse)');
define('_MAINACCOUNT','Super Usuario *');
define('_USERS','Usuarios');

// banners.php
define('_BANNERSADMIN','Administración de Banners');
define('_DELETEBANNER','Borrar Banner');
define('_SURETODELBANNER','¿Estás seguro de querer borrar este banner?');
define('_EDITBANNER','Editar Banner');

// blocks.php
define('_BLOCKSADMIN','Administración de Bloques');
define('_CENTER','Centro');
define('_CENTERUP','Centro Arriba');
define('_CENTERDOWN','Centro Abajo');
define('_BLOCKFILE','(Archivo de Bloque)');
define('_BLOCKFILE2','ARCHIVO');
define('_BLOCKSYSTEM','SISTEMA');
define('_ADDNEWBLOCK','Añadir Nuevo Bloque');
define('_RSSFILE','Archivo RSS/RDF de la web');
define('_ONLYHEADLINES','(Sólo para Titulares)');
define('_REFRESHTIME','Tiempo de Recarga');
define('_CREATEBLOCK','Crear Bloque');
define('_EDITBLOCK','Editar Bloque');
define('_BLOCK','Bloque');
define('_SAVEBLOCK','Guardar Bloque');
define('_BLOCKACTIVATION','Activación del Bloque');
define('_BLOCKPREVIEW','Esta es una Vista Previa del Bloque');
define('_WANT2ACTIVATE','¿Quieres activar este Bloque?');
define('_ARESUREDELBLOCK','¿Estás seguro de querer quitar el Bloque?');
define('_BLOCKUP','Arriba');
define('_BLOCKDOWN','Abajo');
define('_BLOCKTOP','Mover bloque arriba del todo');
define('_BLOCKBOTTOM','Mover bloque abajo del todo');
define('_TITLE','Título');
define('_POSITION','Posición');
define('_WEIGHT','Peso');
define('_STATUS','Estado');
define('_LEFTBLOCK','Bloque Izquierdo');
define('_LEFT','Izquierda');
define('_RIGHTBLOCK','Bloque Derecho');
define('_RIGHT','Derecha');
define('_TYPE','Tipo');
define('_CUSTOM','Personalizado');
define('_FILENAME','Nombre de Archivo');
define('_FILEINCLUDE','Si usas esta opción, ignora los campos de contenido y tiempo de refresco');
define('_VISIBLEINMODULES', 'Visible in modules');

// comments.php
define('_REMOVECOMMENTS','Borrar Comentarios');
define('_SURETODELCOMMENTS','¿Estás seguro de querer borrar este comentario y todas sus respuestas?');

// database.php
define('_SAVEDATABASE','Copia de seguridad');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Estado Actual');
define('_ACTIVATEPAGE','¿Activar esta Página?');

// history.php
define('_EPHEMADMIN','Administración de Efemérides');
define('_ADDEPHEM','Añadir Efeméride');
define('_EPHEMDESC','Descripción de la Efeméride');
define('_EPHEMMAINT','Mantenimiento de Efemérides (Editar/Borrar):');
define('_EPHEMEDIT','Editar Efemérides');
define('_EPHEMDELETE','Borrar entrada');

// headlines.php
define('_RSSFAIL','Hay un problema con el archivo RSS de la URL');
define('_RSSTRYAGAIN','Revisa el URL y el archivo RSS, y vuelve a probar.');
define('_RSSCONTENT','(Contenido RSS/RDF)');
define('_IFRSSWARNING','Si pones una URL el contenido no será visualizado!');
define('_SETUPHEADLINES','(Selecciona "Personalizado" y escribe la URL o selecciona simplemente una web en la lista para mostrar sus noticias)');
define('_HEADLINESADMIN','Administración de Titulares');
define('_ADDHEADLINE','Añadir Titular');
define('_EDITHEADLINE','Editar Titular');
define('_SURE2DELHEADLINE','¿Estás seguro de querer borrar este titular?');

// messages.php
define('_MESSAGESADMIN','Administración de Mensajes');
define('_MESSAGETITLE','Título');
define('_MESSAGECONTENT','Contenido');
define('_ALLMESSAGES','Lista de Mensajes');
define('_EDITMSG','Editar Mensaje');
define('_ADDMSG','Añadir Mensaje');
define('_REMOVEMSG','¿Estás seguro de querer quitar este Mensaje? ');
define('_CHANGEDATE','¿Cambiar la fecha de comienzo a hoy?');
define('_IFYOUACTIVE','(Si activas este Mensaje ahora, la fecha de comienzo será hoy)');

// modules.php
define('_MODULESADMIN','Administración de Módulos');
define('_HOMECONFIG','Configuración de la Página de Inicio');
define('_MODULESADDONS','Módulos y Añadidos');
define('_INHOME','Configurar como módulo del Inicio');
define('_MODULEHOMENOTE','<strong>.: Aviso Importante :.</strong><br />Los nuevos módulos añadidos a la carpeta /modules/ serán añadidos automáticamente al menú de módulos de CPGNuke<br />Eliminar la carpeta de un módulo automáticamente eliminará ese módulo de CPGNuke<br /><br />El título del módulo en negrita representa el módulo que tienes actualmente en la página de Inicio.<br />¡No podrás desactivar este módulo o especificar restricciones mientras sea el módulo del Inicio!');
define('_PUTINHOME','Poner en la Página de Inicio');
define('_SURETOCHANGEMOD','¿Estás seguro de querer cambiar tu página de Inicio de?');
define('_NOTINMENU','[ <big><strong>&middot;</strong></big> ] Sigfica que el nombre y el enlace de ese módulo no son visibles en el Módulo de \'Bloques\'');
define('_SHOWINMENU','¿Visible en el Bloque de Módulos?');
define('_CUSTOMTITLE','Título Propio');
define('_MODULEEDIT','Editar Módulos');
define('_VERSION','Versión');
define('_UPGRADE','Actualizar a %s');
define('_DBSIZE','Tamaño de la BD');
define('_CVS_EXPLAIN','Parece que este módulo tiene un directorio CVS que significa Sistema de Versiones Concurrente.<br /> A través de CVS puedes recibir las últimas versiones de los archivos, de manera sencilla.<br /><b>PERO</b> la versión más nueva de un archivo podría tener fallos debido a que no es una versión oficial.<br/>Si estás familiarizado con PHP puedes actualizar los archivos haciendo click en el enlace de abajo.<br/> ¡¡¡Recuerda haz primero una copia de seguridad!!!.');
define('_CVS_UPDATE','Actualizar archivos CVS');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','De');
define('_STAFF','Plantilla');
define('_NL_RECIPS','Destinatarios');
define('_SUBSCRIBEDUSERS','Usuarios Suscritos');
define('_NL_ALLUSERS','Todos los Miembros');
define('_NL_ADMINS','Administradores');
define('_NL_REGARDS','Con los mejores deseos');
define('_DISCARD','Desechar');
define('_REVIEWTEXT','Por favor revisa bien el texto:');
define('_MANYUSERSNOTE','¡CUIDADO! Hay muchos usuarios que recibirán este correo. Por favor espera que el script termine su operación. Esto puede llevar varios minutos en completarse!');
define('_NL_NOUSERS','El grupo seleccionado para recibir este mensaje no tiene ningún usuario<br/>Por favor regresa y selecciona un grupo distinto');
define('_NUSERWILLRECEIVE','usuarios recibirán este Boletín.');
define('_NLUNSUBSCRIBE','Te enviamos este mensaje por que has seleccionado recibir Boletines de nuestra web, tu puedes elegir quitar la suscripción de nuestro Boletín en cualquier momento haciendo click <a href="'.getlink('Your_Account&amp;edit=prefs', true, true).'">aquí</a> Si deseas ayuda envía un correo a <a href="mailto:'.$MAIN_CFG['global']['adminmail'].'">nuestro administrador</a>');
define('_NEWSLETTERSENT','El Boletín ha sido enviado.');

// referers.php
define('_WHOLINKS','¿Quién enlaza nuestra web?');
define('_DELETEREFERERS','Borrar datos de Referentes');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Footer');
define('_DEBUG', 'Debug');
define('_SITECONFIG','Configuración del Sitio Web');
define('_GENSITEINFO','Información General del Sitio');
define('_SITENAME','Nombre de la Web');
define('_SITEURL','URL de la Web');
define('_SITELOGO','Logotipo de la Web');
define('_SITESLOGAN','Slogan de la Web');
define('_STARTDATE','Fecha de inauguración de la Web');
define('_ADMINEMAIL','Correo del Administrador');
define('_ITEMSTOP','Número de artículos en la Página de los Top');
define('_STORIESHOME','Número de Noticias en la Página de Inicio');
define('_OLDSTORIES','Noticias en el Bloque de Noticias Anteriores');
define('_ALLOWANONPOST','Permitir envíos anónimos');
define('_DEFAULTTHEME','Plantilla por defecto de la Web');
define('_SHOWSEC','Mostrar código de seguridad');
define('_TOOLTIPS','Mostrar ayudas en campos específicos');
define('_UM_TOGGLE','Activar Monitor de Actualización');
define('_UM_EXPLAIN','This will retrieve two pieces of information from our website, dragonflycms.org: the current build of Dragonfly, and if there are any important messages that pertain to your version of Dragonfly. The only data sent to our site is your Dragonfly version number. We do <strong>not</strong> log these requests to our server.');
// maintenance
define('_MAINTENANCE','Modo de Mantenimiento');
define('_MESSAGE','Mensaje que se mostrará a los que visiten la web durante el Modo de Mantenimiento');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','Opciones Multilenguaje');
define('_SELLANGUAGE','Seleccionar el Idioma de la web');
define('_LOCALEFORMAT','Formato de Tiempo Local');
define('_ACTMULTILINGUAL','¿Activar Opciones Multilenguaje? ');
define('_ACTUSEFLAGS','¿Mostrar Banderas en lugar de una lista? ');
// banners
define('_BANNERSOPT','Opciones de Banners');
define('_ACTBANNERS','¿Activar Banners en tu Web?');
// footer
define('_FOOTERMSG','Mensajes de Pie de Página');
define('_FOOTERLINE1','Pie de Página 1');
define('_FOOTERLINE2','Pie de Página 2');
define('_FOOTERLINE3','Pie de Página 3');
// backend
define('_BACKENDCONF','Titulares en RSS');
define('_BACKENDTITLE','Nombre de los titulares');
define('_BACKENDLANG','Idioma de los titulares');
// mail stories
define('_MAIL2ADMIN','Enviar Noticias pendientes al Administrador');
define('_NOTIFYSUBMISSION','¿Notificar por Correo los Artículos pendientes?');
define('_EMAIL2SENDMSG','Correo para enviar el mensaje');
define('_EMAILSUBJECT','Asunto del Correo');
define('_EMAILMSG','Mensaje del Correo');
define('_EMAILFROM','Cuenta de Correo (De)');
// comments
define('_COMMENTSOPT','Sistema de Comentarios');
define('_COMMENTSLIMIT','Se cortarán después de __ caracteres');
define('_COMMENTSMOD','¿Permitir moderación de los Comentarios?');
define('_MODADMIN','Si, Moderación por Administradores');
define('_MODUSERS','Si, Moderación por Usuarios');
define('_NOMOD','No, no usar la Moderación');
// adminmenu
define('_GRAPHICOPT','Menú de Administración');
define('_BOTH','Ambos');
define('_GRAPHICAL','Gráfico');
define('_SIDEBLOCK','Bloque a un lado');
// miscellaneous
define('_MISCOPT','Opciones Variadas');
define('_ACTIVATEHTTPREF','Activar el seguimiento de Referentes HTTP');
define('_MAXREF','Pon un límite de Referentes');
define('_COMMENTSPOLLS','¿Activar Comentarios en las Encuestas?');
define('_COMMENTSARTICLES','¿Activar Comentarios para las Noticias?');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','Opciones de Censura');
define('_CENSORMODE','Modo de búsqueda');
define('_NOFILTERING','No filtrar');
define('_EXACTMATCH','Coincidencia exacta');
define('_MATCHBEG','Coincidir al principio de la palabra');
define('_MATCHANY','Coincidir en cualquier parte de la palabra');
define('_CENSORREPLACE','Reemplazar Palabras Censuradas con:');
// email
define('_EMAILOPTIONS','Opciones de Correo');
define('_ALLOW_HTML_EMAIL','¿Permitir el uso de código HTML?');
define('_USE_SMTP','Utilizar un servidor SMTP para el correo en lugar de la función mail() de PHP');
define('_SMTP_HOST','Dirección del servidor smtp (smtp.example.com)');
define('_USE_SMTP_AUTH','El servidor requiere autorización SMTP');
define('_SMTP_USER_NAME','Usuario SMTP');
define('_SMTP_USER_PASS','Contraseña de Usuario SMTP');

// cpg_adminmenu.php
define('_ADMINMENU','Menú de Admin.');
define('_ADMINLOGOUT','Desconectar / Salir');
define('_AMENU0','System');
define('_AMENU1','Conf. General');
define('_AMENU2','Conf. Miembros');
define('_AMENU3','Conf. Artículos');
define('_AMENU4','Conf. Foros');
define('_AMENU5','Conf. Informativos');
define('_AMENU6','Conf. Enlaces');
define('_AMENU7','Conf. Tienda');
define('_AMENU8','Multimedia');
define('_AMENU9','Conf. Módulos');
define('_BMENU1','Help');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','Preferencias');
define('_DATABASE','Base de Datos');
define('_BLOCKS','Bloques');
define('_MODULES','Módulos');
define('_EDITADMINS','Administradores');
define('_MESSAGES','Mensajes');
define('_BANNERS','Banners');
define('_HTTPREFERERS','Referentes HTTP');
define('_EDITUSERS','Usuarios');
define('_USERSCONFIG','Configuración de usuarios');
define('_NEWSLETTER','Boletín');
define('_SUBMISSIONS','Envíos');
define('_ADDSTORY','Nueva Noticia');
define('_TOPICS','Temas');
define('_ADMPOLLS','Encuestas');
define('_EPHEMERIDS','Efemérides');
define('_REVIEWS','Análisis');
define('_ENCYCLOPEDIA','Enciclopedia');
define('_SURVEYS','Encuestas');
define('_SECTIONS','Secciones');
define('_ARTICLES','Artículos');
define('_FAQ','FAQ');
define('_DOWNLOAD','Descargas');
define('_WEBLINKS','Enlaces');
define('_CONTENT','Contenido');
define('_SYSINFO','System Info');
define('_REPORTABUG','Avisar de fallo');
//coppermine admin
define('_W_INSTALL','¿Qué instalación?');
define('_W_PAGE','¿Qué página?');
//security admin
define('_SECURITY','Security');
define('_PROTECTION','Protection');
define('_EMAIL_DOMAINS','E-Mail Domains');
define('_FLOODING','Flooding');
define('_UUA','Unknown User-Agents');
define('_FLOODING_TIP','Flooding: Delay<br /><em>timing between each warning</em>');
define('_BAN_TIP','Flooding: Ban Duration<br /><em>how long the ban will last for</em>');
define('_AUTO_UNBAN_TIP','Flooding: Auto Unban<br /><em>clean ban after duration time expires</em>');
define('_FOREVER','forever');
define('_REMOVE_SELECTED','Remove selected');

//errors for cpg_error
define('_ERROR','ERROR');
define('_SEC_ERROR','Error de Seguridad');
define('_ERROR_NOT_SET','%s no estaba establecido');
define('_ERROR_NO_POST','Escribir desde otro dominio no esta permitido...');
define('_ERROR_NO_GET','Peticiones GET no están permitidas para esta función');
define('_ERROR_BAD_CHAR','Los caracteres: %s , que intentaste poner en tu petición están prohibidos');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','Intentaste acceder a esta página desde un enlace erróneo');
define('_ERROR_NONE_TO_DISPLAY','No hay %s que mostrar');
define('_ERROR_DELETE_CONF','¿Estás seguro de querer borrar %s?');
define('_ERROR_NO_EXIST','%s no existe');
define('_ERROR_ALREADYEXIST','%s ya existe');
define('_TASK_COMPLETED','¡Operación finalizada!');
define('_CONFIRM','Confirm');
define('_FOOTER_COPYRIGHTS', 'Interactive software released under <a href="http://dragonflycms.org/GNUGPL.html" target="_blank" title="GNU Public License Agreement">GNU GPL</a>,	<a href="'.getlink('credits').'">Code Credits</a>,	<a href="'.getlink('privacy_policy').'">Privacy Policy</a>');

# time
$LNG = array('_time' => array(
'l' => array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'),
'D' => array('Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'),
'F' => array(1=>'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'),
'M' => array(1=>'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'),
));
$LNG['_time']['l'][7] =& $LNG['_time']['l'][0];
$LNG['_time']['D'][7] =& $LNG['_time']['D'][0];
