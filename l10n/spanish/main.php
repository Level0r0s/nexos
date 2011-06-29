<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/spanish/main.php,v $
  $Revision: 9.34 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:56 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','es');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %d %B a las %T');
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
define('_GOBACK','[ <a href="javascript:history.go(-1)">Volver Atrás</a> ]');
define('_COMMENTS','Comentarios');
define('_PASTARTICLES','Artículos Pasados');
define('_OLDERARTICLES','Artículos Viejos');
define('_BY','por');
define('_ON','el');
define('_LOGOUT','SALIR');
define('_WAITINGCONT','Contenido en Espera');
define('_WREVIEWS','Críticas');
define('_WLINKS','Enlaces');
define('_ONEDAY','Un día como hoy...');
define('_ASREGISTERED','¿Todavía no tienes una cuenta? Puedes <a href="'.getlink("Your_Account&amp;file=register").'">crearte una</a>. Como usuario registrado tendrás ventajas como seleccionar la apariencia de la página, configurar los comentarios y enviar los comentarios con tu nombre.');
define('_MENUFOR','Menú de');
define('_NOBIGSTORY','Hoy aún no hay una Gran Historia.');
define('_BIGSTORY','La Historia más leída hoy:');
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
define('_ADMIN','ADMIN:');
define('_WERECEIVED','Hemos recibido');
define('_PAGESVIEWS','impresiones desde');
define('_TOPIC','Tópico');
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
define('_RSSPROBLEM','Actualmente hay un problema con los titulares de este sitio');
define('_SELECTLANGUAGE','Seleccionar Idioma');
define('_SELECTGUILANG','Selecciona el Idioma:');
define('_NONE','Ninguno');
define('_BLOCKPROBLEM','<center>Hay un problema con este bloque.</center>');
define('_BLOCKPROBLEM2','<center>En este momento no existe contenido para este bloque.</center>');
define('_MODULENOTACTIVE','Disculpa, este Módulo no está Activo!');
define('_NOACTIVEMODULES','Módulos Inactivos');
define('_MODULENOEXIST','Lo sentimos, pero el archivo solicitado, %s, parece no existir');
define('_FORADMINTESTS','(Para Pruebas)');
define('_BBFORUMS','Foros');
define('_ACCESSDENIED','Acceso Denegado');
define('_RESTRICTEDAREA','Estás intentando entrar en área restringida.');
define('_MODULEUSERS','Lo sentimos pero esta sección de nuestro sitio es sólo para <i>Usuarios Registrados</i><br /><br />Puedes registrarte de forma gratuíta <a href="'.getlink("Your_Account&amp;file=register").'">aquí</a>, luego podrás<br />acceder a esta sección sin restricciones. Gracias.<br /><br />');
define('_MODULEUSERS2','Te puedes registrar gratis haciendo click <a href="'.getlink('Your_Account&amp;file=register').'">aquí</a> para acceder a esta parte de nuestro sitio. <br /> <br />Gracias por tu comprensión');
define('_MODULESADMINS','Lo sentimos pero esta sección de nuestro sitio es sólo para <i>Administradores</i><br /><br />');
define('_MODULESGROUPS','Acceso de grupo requerido');
define('_HOME','Inicio');
define('_HOMEPROBLEM','Hay un gran problema aquí: No tenemos una página de Inicio!!!');
define('_ADDAHOME','Agregar un módulo en el Home');
define('_HOMEPROBLEMUSER','Existe un problema en nuestro sitio. Por favor intentalo más tarde.');
define('_MORENEWS','Más en la Sección de Noticias');
define('_ALLCATEGORIES','Todas las Categorías');
define('_SPAMGUARDPROTECTED','SpamGuard ha evitado que este correo sea enviado');
define('_M_CHARS','Máximo: %s caracteres');

define('_SYS_MESSAGE','Mensaje del Sistema');
define('_SYS_MESSAGES','Mensajes del Sistema');
define('_SYS_MAINTENANCE','Estás trabajando bajo el modo de mantenimiento');
define('_SYS_DEMO','El sitio está funcionando bajo la modalidad de demo de administración<br/>No puedes realizar ningún cambio a la base de datos<br/>><a href="'.adminlink('logout').'">Cerrar mi sesión!</a> ');

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
define('_BLATEST','Ultimo');
define('_BTD','Nuevos Hoy');
define('_BYD','Nuevos Ayer');
define('_BOVER','Total');
define('_BVISIT','Gente en línea');
define('_BVIS','Visitantes');
define('_BMEM','Miembros');
define('_BTT','Total');
define('_BON','En línea ahora');
define('_BREG','Regístrate');
define('_BROADCAST','Transmisión de Mensaje Público');
define('_BROADCASTFROM','Mensaje Público de');
define('_TURNOFFMSG','Desactivar Mensajes Públicos');
define('_JOURNAL','Diario');
define('_READMYJOURNAL','Leer Mi Diario');
define('_ADD','Agregar');
define('_YES','Si');
define('_NO','No');
define('_INVISIBLEMODULES','Módulos Invisibles');
define('_ACTIVEBUTNOTSEE','(Activos con nombre invisible)');
define('_BOTS','Bots');

define('_UM','Centinela de actualización de Dragonfly');
define('_UM_F','Fallo al contactar con el servicio de actualización.');
define('_UM_G','Estás usando la última versión de Dragonfly');
define('_UM_R','Porfavor <a href="%2$s" target="_blank">actualiza</a> a Dragonfly %1$s');

define('_TEAM','Equipo');
define('_LINKAPPROVEDMSG','¡Felicidades! El enlace web que enviaste ha sido aprobada. Por favor crea un enlace hacia nosotros y envíanos un correo electrónico con la URL donde lo hiciste.');
define('_MODREQLINKS','Modif. Links');
define('_BROKENLINKS','Links Rotos');
define('_MODREQDOWN','Modif. Downloads');
define('_BROKENDOWN','Downloads Rotos');
define('_PAGEGENERATION','Página Generada en:');
define('_SECONDS','Segundos');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Se Genero la Pagina en %1$s segundos y %2$s Consultas a la BD en %3$s segundos');
define('_YOUHAVEONEMSG','Tienes 1 Mensaje Privado Nuevo');
define('_NEWPMSG','Mensajes Privados Nuevos');
define('_CONTRIBUTEDBY','Contribución de');
define('_CHAT','Chat');
define('_REGISTERED','Registrados');
define('_CHATGUESTS','Invitados');
define('_USERSTALKINGNOW','Usuarios Chateando');
define('_ENTERTOCHAT','Entrar al Chat');
define('_CHATROOMS','Salas de Chat');
define('_ALLTOPICS','Todos los Tópicos');
define('_ASSOTOPIC','Topicos Asociados');
define('_HELLO','Hola');
define('_ALL','Todo');
define('_URL','URL');
define('_SUBJECT','Título');
define('_PREVIEW','Vista Previa');
define('_SEND','Enviar');
define('_ANONYMOUS','Anónimo');
define('_BREADCRUMB', 'Delimitador, aparece en los títulos de las páginas entre las palabras');
define('_BC_DELIM',isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&gt;&gt;');
define('_RESET','Reset');
define('_AT','en');
define('_LASTMSGS','Ultimos %s Mensajes de Foros ');
define('_LASTPOSTBY','Ultimo mensaje de %1$s en %2$ a %3$s');
define('_PRINTER','Versión Imprimible');

define('_CREDITS_TITLE','Créditos');
define('_CREDITS_PRODUCT','Producto');
define('_CREDITS_DESC','Descripción');
define('_CREDITS_AUTHORS','Autor(es)');

define('_PP_TITLE','Política de Privacidad');
define('_PP_MODIFY','Modificar este Mensaje');

define('_SENDERNAME','Tu Nombre');
define('_SENDEREMAIL','Tu E-Mail');
define('_RECIPIENTNAME','Nombre de su amigo');
define('_RECIPIENTEMAIL','E-Mail de su amigo');

define('_REASONS_0','As Is');
define('_REASONS_1','Off Topic');
define('_REASONS_2','Flamebait');
define('_REASONS_3','Troll');
define('_REASONS_4','Redundante');
define('_REASONS_5','Insightful');
define('_REASONS_6','Interesante');
define('_REASONS_7','Informativo');
define('_REASONS_8','Gracioso');
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
define('_TB_EDIT_HOME','Configuracion de mi página personal');
define('_TB_EDIT_COMM','Configuración de comentarios');
define('_TB_PERSONAL','Personal');
define('_TB_PERSONAL_GALLERY','Mi galeria');
define('_TB_PERSONAL_JOURNAL','Mi diario');
define('_TB_PRIVMSGS','Mensajes Privados');
define('_TB_PRIVMSGS_INBOX','Buzón de Entrada');
define('_TB_PRIVMSGS_OUTBOX','Buzón de Salida');
define('_TB_PRIVMSGS_SENTBOX','Buzón de Enviados');
define('_TB_PRIVMSGS_SAVEBOX','Buzón de Guardados');
define('_TB_PRIVMSGS_SEND','Enviar mensaje');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','Info de Usuario');
define('_SECURITYCODE','Codigo de Seguridad');
define('_TYPESECCODE','Inserta el Código de Seguridad');
define('_MEMBERSOPTIONS','Opciones de Miembros');
define('_READSEND','Lee tus mensajes privados. Envia mensajes a otros.');
define('_INBOX','BUZON');
define('_NEW','NUEVO');
define('_ACCOUNTOPTIONS','Tu Cuenta. Cambia opciones y lee tus mensajes.');
define('_LOGOUTACCT','Desconectarse de esta cuenta.');
define('_LOGOUTADMINACCT','Desconectarse de esta cuenta de administrador.');
define('_BLOGIN','MI ESPACIO');
define('_BFLOGIN','Perfil del Foro');
define('_BHID','Oculto');
define('_WHOWHERE','Donde estan todos');
define('_STAFFONL','Administradores conectados');
define('_STAFFNONE','No hay Administradores conectados!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Grupos');
define('_ContentLANG','Contenido');
define('_coppermineLANG','Galería de Fotos');
define('_CPGlangLANG','Ayuda a Traducir');
define('_DownloadsLANG','Descargas');
define('_EncyclopediaLANG','Enciclopedia');
define('_ForumsLANG','Foros Comunitarios');
define('_ContactLANG','Contáctanos');
define('_FAQLANG','FAQ - Ayuda');
define('_BlogsLANG','Diario');
define('_Members_ListLANG','Lista de Miembros');
define('_NewsLANG','Noticias');
define('_ReviewsLANG','Revisiones');
define('_SearchLANG','Búsqueda');
define('_StatisticsLANG','Estadística');
define('_Stories_ArchiveLANG','Archivo de Noticias');
define('_Submit_NewsLANG','Enviar Noticias');
define('_SurveysLANG','Encuestas');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Tópicos');
define('_Private_MessagesLANG','Mis Mensajes Privados');
define('_Tell_a_FriendLANG','Dile a un amigo');
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
define('_DONATE','Donacion');
define('_HELP','Ayuda');
define('_GALLERIES','Galerías');
define('_DOCS','Documentación');
define('_RULES','Reglas y normas');
define('_MENU','Menú principal');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','<strong>Estás</strong> suscripto a<br />nuestro boletín');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','<strong>No estás</strong> suscripto a<br />nuestro boletín');
define('_NEWSLETTERBLOCKREGISTER','Debes ser un<br /><strong>usuario registrado</strong><br />para recibir nuestro boletín');
define('_NEWSLETTERBLOCKSUBSCRIBE','Suscribirse');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Des-suscribirse / Desregistrarse');
define('_NEWSLETTERBLOCKREGISTERNOW','¡Regístrate Ahora!');
/* END Newsletter Block */

/* START class phpmailer lang array */
$PHPMAILER_LANG = array();
$PHPMAILER_LANG['provide_address'] = 'Debe proveer al menos una dirección de email como destinatario.';
$PHPMAILER_LANG['mailer_not_supported'] = ' mailer no está soportado.';
$PHPMAILER_LANG['execute'] = 'No puedo ejecutar: ';
$PHPMAILER_LANG['instantiate'] = 'No pude crear una instancia de la función Mail.';
$PHPMAILER_LANG['authenticate'] = 'Error SMTP: No se pudo autentificar.';
$PHPMAILER_LANG['from_failed'] = 'La(s) siguiente(s) direcciones de remitente fallaron: ';
$PHPMAILER_LANG['recipients_failed'] = 'Error SMTP: Los siguientes destinatarios fallaron: ';
$PHPMAILER_LANG['data_not_accepte'] = 'Error SMTP: Datos no aceptados.';
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
define('_LAST','Ultimo');
define('_ACTIVE','Activo');
define('_DEACTIVATE','Desactivar');
define('_INACTIVE','Inactivo');
define('_ACTIVATE','Activar');
define('_ACTIVATE2','¿Activar?');
define('_VIEW','Visible para');
define('_VIEWPRIV','¿Qui&#233;n puede ver esto?');
define('_MVADMIN','Sólo Administradores');
define('_MVUSERS','Sólo Usuarios Registrados');
define('_MVANON','Sólo Usuarios Anónimos');
define('_MVALL','Todo el mundo');
define('_IMAGE','Imagen');
define('_GO','Ir!');
define('_OPTION','Opción');
define('_CATEGORY','Categoría');
define('_SUBCATEGORY','Subcategoria');
define('_ID','ID');
define('_EXPIRATION','Caducidad');
define('_DAYS','días');
define('_WARNING','Cuidado');
define('_POLLTITLE','Título de la Encuesta');
define('_POLLEACHFIELD','Por favor escribe cada opción de la encuesta');
define('_ADDCATEGORY','Agregar Categoría');
define('_PAGEBREAK','Si quieres dividir en varias páginas, puede escribir <b>&lt;!--pagebreak--&gt;</b> donde quieras cortar');
define('_SIGNATURE','Firma');
define('_DESCRIPTION','Descripción');
define('_EDITCATEGORY','Editar Categoría');
define('_IN','en');
define('_DESCRIPTION255','Descripción (255 caracteres máx.)');
define('_MODCATEGORY','Modificar una Categoría');
define('_SUBMITTER','Usuario');
define('_VISIT','Visita');
define('_EXTENDEDTEXT','Texto Extendido');
define('_CHECKCATEGORIES','Verificar las categorías');
define('_INCLUDESUBCATEGORIES','(Incluir Sub-Categorías)');
define('_CHECKSUBCATEGORIES','Verificar Sub-Categorías');
define('_VALIDATELINKS','Validar Enlaces');
define('_FAILED','¡Ha Fallado!');
define('_BEPATIENT','(espera, por favor)');
define('_VALIDATINGCAT','Validando las Categorías (y todas las Sub-Categorías)');
define('_VALIDATINGSUBCAT','Validando la Sub-Categoría');
define('_OK','Aceptar');
define('_CHECK','Check');
define('_IGNORE','Ignorar');
define('_HITS','Hits');
define('_FILESIZE', 'Tamaño de Archivo');
define("_EZTHEREIS","Estos son");
define("_EZSUBCAT","sub-categorías");
define("_EZATTACHEDTOCAT","debajo de esta categoria");
define("_EZBROKENLINKS","Enlaces Defectuoso");
define("_DELEZLINKCATWARNING","ATENCION : ¿Está seguro que quiere borrar esta categoría?<br /> ¡Debes borrar todas las sub-categorías y Links adjuntos para poder hacerlo!");

// index.php
define('_DEFHOMEMODULE','Módulo por defecto de la página de inicio');
define('_MODULEINHOME','Módulo  en la pagina de inicio:');
define('_CHANGE','Cambiar');
define('_WHOSONLINE','¿Quién está conectado?');
define('_NP_ADMIN','Block de notas');
define('_NP_LOCKED','El block de notas ha sido bloqueado<br />Solo un administrador raíz (super usuario) puede desbloquearlo');
define('_NP_SAVE','Guardar notas');
define('_NP_UNLOCK','Desbloquear block de notas');
define('_NP_LOCK','Bloquear block de notas');
// news
define('_STICKY','Artículos Post-It');
define('_ARTICLEUP','SUBIR artículo');
define('_ARTICLEDOWN','BAJAR artículo');
define('_UNSTICK','Quitar Post-It');
define('_STICK','Post-It');
define('_AUTOMATEDARTICLES','Artículos Programados');
define('_STORYID','ID Noticia');
define('_CURRENTPOLL','Encuesta Actual');

// admin.php
define('_ADMINISTRATION','Administración');
define('_NOADMINYET','No existen cuentas de administradores aún, procede a crear el Super Usuario:');
define('_CREATEUSERDATA','¿Deseas crear un usuario común con los mismos datos?');
define('_ADMINLOGIN','Sistema de Administración');
define('_ADMINID','Admin ID');
define('_EMAIL','Correo electrónico');
define('_SUBMIT','Enviar');
define('_YOUARELOGGEDOUT','Usted está desconectado!');
define('_PASSWDNOMATCH','Lo siento, la nueva contraseña no concuerda. Inténtelo de nuevo');
define('_LOGIN_REMEMBERME','¿Recordarme?');
define('_ADMINMENU_LOGOUT','Salir del Menú de Administración');
define('_PASSWORD_MALFORMED','Por favor incluye por lo menos un número, una letra mayúscula y una minúscula en tu contraseña');

// admins.php
define('_AUTHORSADMIN','Administración de Autores');
define('_NAME','Nombre');
define('_REQUIRED','Requerido');
define('_MODIFYINFO','Modificar Información');
define('_DELAUTHOR','Borrar Autor');
define('_ADDAUTHOR','Agregar Autor');
define('_PERMISSIONS','Permisos');
define('_SUPERUSER','Super Usuario');
define('_SUPERWARNING','ATENCIÓN: si seleccionas Super Usuario, tendrá acceso total');
define('_ADDAUTHOR2','Agregar Autor');
define('_RETYPEPASSWD','Re-escribir Clave');
define('_FORCHANGES','(Sólo para cambiar)');
define('_COMPLETEFIELDS','Debes completar todos los campos requeridos');
define('_CREATIONERROR','Error en la creación del Autor');
define('_AUTHORDEL','Borrar Autor');
define('_PUBLISHEDSTORIES','Este administrador ha publicado historias');
define('_SELECTNEWADMIN','Selecciona un nuevo administrador para reasignar');
define('_GODNOTDEL','*(la cuenta GOD no puede borrarse)');
define('_MAINACCOUNT','Administrador God*');
define('_USERS','Usuarios');

// banners.php
define('_BANNERSADMIN','Administración de Banners');
define('_DELETEBANNER','Borrar banner');
define('_SURETODELBANNER','Esta seguro de querer borrar este banner?');
define('_EDITBANNER','Editar Banner');

// blocks.php
define('_BLOCKSADMIN','Administración de Bloques');
define('_CENTER','Centro');
define('_CENTERUP','Centro Arriba');
define('_CENTERDOWN','Centro Abajo');
define('_BLOCKFILE','(Archivo de Bloque)');
define('_BLOCKFILE2','ARCHIVO');
define('_BLOCKSYSTEM','SISTEMA');
define('_ADDNEWBLOCK','Agregar Bloque');
define('_RSSFILE','Archivo RSS/RDF del sitio');
define('_ONLYHEADLINES','(Sólo para Titulares)');
define('_REFRESHTIME','Tiempo de Recarga');
define('_CREATEBLOCK','Crear Bloque');
define('_EDITBLOCK','Editar Bloque');
define('_BLOCK','Bloque');
define('_SAVEBLOCK','Guardar Bloque');
define('_BLOCKACTIVATION','Activación del Bloque');
define('_BLOCKPREVIEW','Esto es una Vista Previa del Bloque');
define('_WANT2ACTIVATE','¿Quieres activar este Bloque?');
define('_ARESUREDELBLOCK','¿Estás seguro de querer quitar el Bloque');
define('_BLOCKUP','Arriba');
define('_BLOCKDOWN','Abajo');
define('_BLOCKTOP','Mover Bloque Al principio');
define('_BLOCKBOTTOM','Mover Bloque al final');
define('_TITLE','Título');
define('_POSITION','Posición');
define('_WEIGHT','Peso');
define('_STATUS','Estado');
define('_LEFTBLOCK','Bloque Izquierdo');
define('_LEFT','Izquierda');
define('_RIGHTBLOCK','Bloque Derecho');
define('_RIGHT','Derecha');
define('_TYPE','Tipo');
define('_CUSTOM','No Definido');
define('_FILENAME','Nombre de Archivo');
define('_FILEINCLUDE','(Selecciona un bloque a ser incluído. Todos los demás campos serán ignorados)');
define('_VISIBLEINMODULES', 'Visible in modules');

// comments.php
define('_REMOVECOMMENTS','Borrar Comentarios');
define('_SURETODELCOMMENTS','¿Estás seguro de querer borrar este comentario y todas sus respuestas?');

// database.php
define('_SAVEDATABASE','Respaldo');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Estado Actual');
define('_ACTIVATEPAGE','¿Activar esta Página?');

// history.php
define('_EPHEMADMIN','Administración de Efem&#233;rides');
define('_ADDEPHEM','Agregar Efem&#233;ride');
define('_EPHEMDESC','Descripción de la Efem&#233;ride');
define('_EPHEMMAINT','Mantenimiento de Efem&#233;rides (Editar/Borrar):');
define('_EPHEMEDIT','Editar Efem&#233;rides');
define('_EPHEMDELETE','Borrar entrada');

// headlines.php
define('_RSSFAIL','Hay un problema con el archivo RSS del URL');
define('_RSSTRYAGAIN','Revisa el URL y el archivo RSS, y vuelve a probar.');
define('_RSSCONTENT','(Contenido RSS/RDF)');
define('_IFRSSWARNING','¡Si pones un URL el contenido no se verá!');
define('_SETUPHEADLINES','(Selecciona "No Definido" y escribe el URL o selecciona simplemente un sitio en la lista para desplegar sus noticias)');
define('_HEADLINESADMIN','Administración de Titulares');
define('_ADDHEADLINE','Agregar Titular');
define('_EDITHEADLINE','Editar Titular');
define('_SURE2DELHEADLINE','¿Estás seguro de querer borrar este titular?');

// messages.php
define('_MESSAGESADMIN','Administración de Mensajes');
define('_MESSAGETITLE','Título');
define('_MESSAGECONTENT','Contenido');
define('_ALLMESSAGES','Lista de Mensajes');
define('_EDITMSG','Editar Mensaje');
define('_ADDMSG','Agregar Mensaje');
define('_REMOVEMSG','¿Estás seguro de querer quitar este Mensaje? ');
define('_CHANGEDATE','¿Cambiar la fecha de comienzo a hoy?');
define('_IFYOUACTIVE','(Si activa este Mensaje ahora, la fecha de comienzo será hoy)');

// modules.php
define('_MODULESADMIN','Administración de Módulos');
define('_HOMECONFIG','Configuración de la Página de Inicio');
define('_MODULESADDONS','Módulos y Addons');
define('_INHOME','En Home');
define('_MODULEHOMENOTE','<b>-= CUIDADO =-</b><br />El título en negritas del módulo representa el módulo que tienes actualmente en el Homepage.<br />No podrás desactivar este módulo o especificar restricciones mientras sea el módulo del Home!<br />Si borras el directorio del módulo verás un error en el Homepage.<br />Tambi&#233;n, este módulo ha sido reemplazado con un link al <i>Home</i> desde el bloque de módulos.');
define('_PUTINHOME','Al inicio');
define('_SURETOCHANGEMOD','¿Estas seguro de querer cambiar tu pagina de inicio?');
define('_NOTINMENU','[ <big><strong>&middot;</strong></big> ] implica un módulo cuyo nombre y enlace no son visibles en el Bloque de Módulos');
define('_SHOWINMENU','¿Visible en Bloque Módulos?');
define('_CUSTOMTITLE','Título Propio');
define('_MODULEEDIT','Editar Módulos');
define('_VERSION','Versión');
define('_UPGRADE','Actualizar a %s');
define('_DBSIZE','Tamaño de la base de datos');
define('_CVS_EXPLAIN','A través de CVS puedes recibir las últimas versiones de los archivos, de un modo muy fácil..<br /><b>PERO</b>la versión más nueva de un archivo podría tener bugs debido a que no es una versión oficial.<br/>Si conoces PHP puedes actualizar los archivos haciendo click en la liga de abajo.<br/> Recuerda realizar primero un respaldo.');
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
define('_NL_REGARDS','Recuerdos');
define('_DISCARD','Desechar');
define('_REVIEWTEXT','Por favor revisa bien el texto:');
define('_MANYUSERSNOTE','CUIDADO! Hay muchos usuarios que recibirán este correo. Por favor espera que el script termine su operación. Esto puede llevar varios minutos en completarse!');
define('_NL_NOUSERS','El grupo seleccionado para recibir este mensaje no tiene ningún usuario<br/>Por favor regresa y selecciona un grupo distinto');
define('_NUSERWILLRECEIVE','usuarios recibirán este Boletín.');
define('_NLUNSUBSCRIBE','Te enviamos este mensaje por que has seleccionado recibir Boletines de nuestro sitio, tu puedes elegir desincrbirte de nuestro Boletin en cualquier momento haciendo click <a href="'.getlink('Your_Account&amp;edit=prefs', true, true).'">aquí</a> Si deseas ayuda envia un mail a <a href="mailto:'.$MAIN_CFG['global']['adminmail'].'">nuestro administrador</a>');
define('_NEWSLETTERSENT','El Boletín ha sido enviado.');

// referers.php
define('_WHOLINKS','¿Qui&#233;n enlaza nuestro sitio?');
define('_DELETEREFERERS','Borrar los Datos');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Pie de página');
define('_DEBUG', 'Depurar');
define('_SITECONFIG','Configuración del Sitio Web');
define('_GENSITEINFO','Información General del Sitio');
define('_SITENAME','Nombre del Sitio');
define('_SITEURL','URL del sitio');
define('_SITELOGO','Logotipo del sitio');
define('_SITESLOGAN','Slogan del sitio');
define('_STARTDATE','Fecha de Inicio del Sitio');
define('_ADMINEMAIL','E-Mail del Administrador');
define('_ITEMSTOP','Número de artículos en la Página de los Top');
define('_STORIESHOME','Número de Noticias en el Home');
define('_OLDSTORIES','Noticias en el Bloque de Noticias Anteriores');
define('_ALLOWANONPOST','Permitir envíos anónimos');
define('_DEFAULTTHEME','Tema por defecto del sitio');
define('_SHOWSEC','Mostrar código de seguridad');
define('_TOOLTIPS','Mostrar ayudas en campos específicos');
define('_UM_TOGGLE','Activar Monitor de Actualización');
define('_UM_EXPLAIN','Esto recuperará dos trozos de información desde nuestro sitio web, dragonflycms.org: la construcción actual de Dragonfly, y si hay mensajes importantes que pertenezcan a su versión de Dragonfly.  La única información enviada a nuestro sitio es nuestro número de versión de Dragonfly.  Nosotros <strong>no</strong> almacenamos estas consultas en nuestro servidor.');
// maintenance
define('_MAINTENANCE','Mantenimiento');
define('_MESSAGE','Mensaje');
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
define('_SELLANGUAGE','Seleccionar Idioma para el sitio');
define('_LOCALEFORMAT','Formato de Tiempo Local');
define('_ACTMULTILINGUAL','¿Activar Opciones Multilenguaje? ');
define('_ACTUSEFLAGS','Mostrar Banderas en cambio de texto? ');
// banners
define('_BANNERSOPT','Opciones de Banners');
define('_ACTBANNERS','¿Activar Banners en tu Sitio?');
// footer
define('_FOOTERMSG','Mensajes de Pi&#233; de Página');
define('_FOOTERLINE1','Pi&#233; de Página 1');
define('_FOOTERLINE2','Pi&#233; de Página 2');
define('_FOOTERLINE3','Pi&#233; de Página 3');
// backend
define('_BACKENDCONF','Configuración del Backend');
define('_BACKENDTITLE','Título del Backend');
define('_BACKENDLANG','Idioma del Backend');
// mail stories
define('_MAIL2ADMIN','Enviar Nuevas Noticias al Administrador');
define('_NOTIFYSUBMISSION','¿Notificar por E-Mail los Nuevos Envíos?');
define('_EMAIL2SENDMSG','E-Mail para enviar el mensaje');
define('_EMAILSUBJECT','Asunto del E-Mail');
define('_EMAILMSG','Mensaje del E-Mail');
define('_EMAILFROM','Cuenta de E-Mail (De)');
// comments
define('_COMMENTSOPT','Opción de Comentarios');
define('_COMMENTSLIMIT','Límite en Bytes de los comentarios');
define('_COMMENTSMOD','Moderación de los Comentarios');
define('_MODADMIN','Moderación por Admins');
define('_MODUSERS','Moderación por Usuarios');
define('_NOMOD','Sin Moderación');
// adminmenu
define('_GRAPHICOPT','Opciones Gráficas');
define('_BOTH','ambos');
define('_GRAPHICAL','Gráfico');
define('_SIDEBLOCK','Bloque de lado');
// miscellaneous
define('_MISCOPT','Opciones Variadas');
define('_ACTIVATEHTTPREF','Activar referencias HTTP');
define('_MAXREF','¿Cuántos Referers quieres como máximo?');
define('_COMMENTSPOLLS','¿Activar Comentarios en las Encuestas?');
define('_COMMENTSARTICLES','¿Activar Comentarios para las Noticias?');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','Opciones de Censura');
define('_CENSORMODE','Modo de censura');
define('_NOFILTERING','No filtrado');
define('_EXACTMATCH','Búsqueda exacta');
define('_MATCHBEG','Coincidir la palabra al inicio');
define('_MATCHANY','Coincidir en cualquier parte del texto');
define('_CENSORREPLACE','Reemplazar Palabras Censuradas con:');
// email
define('_EMAILOPTIONS','Opciones para el email en el módulo de Contacto y Boletín');
define('_ALLOW_HTML_EMAIL','Permitir html en e-mails');
define('_USE_SMTP','Utilizar SMTP para e-mails en lugar de php');
define('_SMTP_HOST','Dirección del servidor smtp (smtp.servidor.tld)');
define('_USE_SMTP_AUTH','El servidor requiere autorización SMTP');
define('_SMTP_USER_NAME','Usuario SMTP');
define('_SMTP_USER_PASS','Contraseña de Usuario SMTP');

// cpg_adminmenu.php
define('_ADMINMENU','Menú de Administración');
define('_ADMINLOGOUT','Logout / Salir');
define('_AMENU0','System');
define('_AMENU1','General');
define('_AMENU2','Miembros');
define('_AMENU3','Mensajes');
define('_AMENU4','Foros');
define('_AMENU5','Informativo');
define('_AMENU6','Enlazar');
define('_AMENU7','Comercio');
define('_AMENU8','Multimedia');
define('_AMENU9','Módulos');
define('_BMENU1','Help');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','Preferencias');
define('_DATABASE','Base de Datos');
define('_BLOCKS','Bloques');
define('_MODULES','Módulos');
define('_EDITADMINS','Editar Administradores');
define('_MESSAGES','Mensajes');
define('_BANNERS','Banners');
define('_HTTPREFERERS','Referencias HTTP');
define('_EDITUSERS','Editar Usuarios');
define('_USERSCONFIG','Configuración de usuarios');
define('_NEWSLETTER','Boletín');
define('_SUBMISSIONS','Envíos');
define('_ADDSTORY','Nueva Noticia');
define('_TOPICS','Temas');
define('_ADMPOLLS','Encuestas');
define('_EPHEMERIDS','Efem&#233;rides');
define('_REVIEWS','Reviews');
define('_ENCYCLOPEDIA','Enciclopedia');
define('_SURVEYS','Encuestas');
define('_SECTIONS','Secciones');
define('_ARTICLES','Artículos');
define('_FAQ','FAQ');
define('_DOWNLOAD','Descargas');
define('_WEBLINKS','Enlaces');
define('_CONTENT','Contenido');
define('_SYSINFO','System Info');
define('_REPORTABUG','Reportar un Error');
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
define('_ERROR_NO_POST','Escribir desde otro host no esta permitido...');
define('_ERROR_NO_GET','Peticiones GET no están permitidas para esta función');
define('_ERROR_BAD_CHAR','Los caracteres que intentaste poner en tu petición %s están prohibidos');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','Intentaste acceder a esta página desde un link erróneo');
define('_ERROR_NONE_TO_DISPLAY','No hay %s que mostrar');
define('_ERROR_DELETE_CONF','¿Estás seguro de querer borrar %s?');
define('_ERROR_NO_EXIST','%s no existe');
define('_ERROR_ALREADYEXIST','%s ya existe');
define('_TASK_COMPLETED','¡Operación finalizada!');
define('_CONFIRM','Confirm');
define('_FOOTER_COPYRIGHTS', 'Interactive software released under <a href="http://dragonflycms.org/GNUGPL.html" target="_blank" title="GNU Public License Agreement">GNU GPL</a>,	<a href="'.getlink('credits').'">Code Credits</a>,	<a href="'.getlink('privacy_policy').'">Privacy Policy</a>');

# time
$LNG = array('_time' => array(
'l' => array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'),
'D' => array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'),
'F' => array(1=>'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
'M' => array(1=>'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
));
$LNG['_time']['l'][7] =& $LNG['_time']['l'][0];
$LNG['_time']['D'][7] =& $LNG['_time']['D'][0];
