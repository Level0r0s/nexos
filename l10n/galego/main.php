<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/galego/main.php,v $
  $Revision: 9.29 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:49 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','gl');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %d de %B ás %T');
define('_DATESTRING2','%A, %d %B');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Próxima Páxina');
define('_PREVIOUSPAGE','Páxina Previa');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Buscar');
define('_LOGIN','Login');
define('_WRITES','escribiu');
define('_POSTEDON','Enviado o');
define('_NICKNAME','Alias');
define('_PASSWORD','Clave');
define('_WELCOMETO','Benvido a');
define('_EDIT','Editar');
define('_DELETE','Borrar');
define('_POSTEDBY','Enviado por');
define('_READS','Lecturas');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Voltar</a>' : '<a href="javascript:history.go(-1)">Voltar</a>').' ]');
define('_COMMENTS','cometarios');
define('_PASTARTICLES','Artigos Pasados');
define('_OLDERARTICLES','Artigos Antigos');
define('_BY','por');
define('_ON','o');
define('_LOGOUT','Sair');
define('_WAITINGCONT','Contido Esperando');
define('_WREVIEWS','Reseñas esperando');
define('_WLINKS','Enlaces esperando');
define('_ONEDAY','Tal día coma hoxe ...');
define('_ASREGISTERED','¿Aínda non ten unha conta? Pode <a href="\'.getlink("Your_Account").\'">crear unha</a>. Como usuario rexistrado terá ventaxas como selecciona-la apariencia da páxina, configura-los comentarios e envia-los comentarios co seu nome.');
define('_MENUFOR','Menú de');
define('_NOBIGSTORY','Hoxe non hai Gran Historia.');
define('_BIGSTORY','A Historia máis lida hoxe:');
define('_SURVEY','Enquisa');
define('_POLLS','Votacións');
define('_PCOMMENTS','Comentarios:');
define('_RESULTS','Resultados');
define('_HREADMORE','Ler máis...');
define('_CURRENTLY','Actualmente hai');
define('_GUESTS','invitados,');
define('_MEMBERS','membro(s) conectado(s).');
define('_YOUARELOGGED','Está conectado como');
define('_YOUHAVE','Ten');
define('_PRIVATEMSG','mensaxe(s) privada(s).');
define('_YOUAREANON','É un usuario anónimo. Pode rexistrarse <a href="\'.getlink("Your_Account").\'">aquí</a>');
define('_NOTE','Nota:');
define('_ADMIN','Admin:');
define('_WERECEIVED','Recibimos');
define('_PAGESVIEWS','impresións desde');
define('_TOPIC','Tema');
define('_UDOWNLOADS','Descargas');
define('_VOTE','voto');
define('_VOTES','votos');
define('_MVIEWADMIN','Ver: Só Administradores');
define('_MVIEWUSERS','Ver: Só Usuarios Rexistrados');
define('_MVIEWANON','Ver: Só Usuarios Anónimos');
define('_MVIEWALL','Ver: Tódo-los Visitantes');
define('_EXPIRELESSHOUR','Caducidade: menos dunha hora');
define('_EXPIREIN','Caduca en');
define('_UNLIMITED','Ilimitado');
define('_HOURS','Horas');
define('_RSSPROBLEM','Actualmente hai un problema cos titulares deste sitio');
define('_SELECTLANGUAGE','Seleccionar Idioma');
define('_SELECTGUILANG','Seleccione Idioma da Interface:');
define('_NONE','Ningún');
define('_BLOCKPROBLEM','<center>Hai un problema con este bloque.</center>');
define('_BLOCKPROBLEM2','<center>Non hai contido para este bloque.</center>');
define('_MODULENOTACTIVE','Desculpe, este Módulo non está activo!');
define('_NOACTIVEMODULES','Módulos Inactivos');
define('_MODULENOEXIST','We\'re sorry, but the requested file, %s, does not appear to exist');
define('_FORADMINTESTS','(Test do Admin)');
define('_BBFORUMS','Foros');
define('_ACCESSDENIED','Acceso Denegado');
define('_RESTRICTEDAREA','Está intentando entrar en área restrinxida.');
define('_MODULEUSERS','Desculpe, pero esta sección do noso sitio é só para <i>Usuarios Rexistrados</i><br /><br />Pode rexistrarse de forma gratuíta <a href="'.getlink('Your_Account&amp;file=register').'">aquí</a>, despois poderá<br />acceder a esta sección sen restriccións. Gracias.<br /><br />');
define('_MODULEUSERS2','You can register for free by following <a href="'.getlink('Your_Account&amp;file=register').'">this</a> link, thus granting you permission to access this area of our site.<br /><br />Thank you for your understanding');
define('_MODULESADMINS','Desculpe pero esta sección do noso sitio é só para <i>Administradores</i><br /><br />');
define('_MODULESGROUPS','group access required');
define('_HOME','Home');
define('_HOMEPROBLEM','It appears that the homepage has disappeared');
define('_ADDAHOME','Assign a new default homepage module');
define('_HOMEPROBLEMUSER','We\'re experiencing some difficulties with our system<br />Please check back soon');
define('_MORENEWS','More in News Section');
define('_ALLCATEGORIES','All Categories');
define('_SPAMGUARDPROTECTED','SpamGuard has blocked this email from being sent');
define('_M_CHARS','Maximum: %s characters');

define('_SYS_MESSAGE','System Message');
define('_SYS_MESSAGES','System Messages');
define('_SYS_MAINTENANCE','You are running under maintenance mode');
define('_SYS_DEMO','You are running under administration demo mode<br />You cannot make any changes to the database<br /><a href="'.adminlink('logout').'">Log me out!</a>');

define('_DATE','Fecha');
define('_HOUR','Hora');
define('_UMONTH','Mes');
define('_YEAR','Ano');
define('_JANUARY','January');
define('_FEBRUARY','February');
define('_MARCH','March');
define('_APRIL','April');
define('_MAY','May');
define('_JUNE','June');
define('_JULY','July');
define('_AUGUST','August');
define('_SEPTEMBER','September');
define('_OCTOBER','October');
define('_NOVEMBER','November');
define('_DECEMBER','December');

define('_MONDAY','Monday');
define('_TUESDAY','Tuesday');
define('_WEDNESDAY','Wednesday');
define('_THURSDAY','Thursday');
define('_FRIDAY','Friday');
define('_SATURDAY','Satday');
define('_SUNDAY','Sunday');
//three letter abbrev.
define('_ABR_MONDAY','Mon');
define('_ABR_TUESDAY','Tues');
define('_ABR_WEDNESDAY','Wed');
define('_ABR_THURSDAY','Thurs');
define('_ABR_FRIDAY','Fri');
define('_ABR_SATURDAY','Sat');
define('_ABR_SUNDAY','Sun');

define('_BWEL','Welcome');
define('_BPM','Private Messages');
define('_BUNREAD','Unread');
define('_BREAD','Read');
define('_BMEMP','Membership');
define('_BLATEST','Latest');
define('_BTD','New Today');
define('_BYD','New Yesterday');
define('_BOVER','Overall');
define('_BVISIT','People Online');
define('_BVIS','Visitors');
define('_BMEM','Members');
define('_BTT','Total');
define('_BON','Online Now');
define('_BREG','Register');
define('_BROADCAST','Broadcast Public Message');
define('_BROADCASTFROM','Public Message sent by');
define('_TURNOFFMSG','Turn off Public Messages');
define('_JOURNAL','Blog');
define('_READMYJOURNAL','Read My Blog');
define('_ADD','Engadir');
define('_YES','Sí');
define('_NO','Non');
define('_INVISIBLEMODULES','Invisible Modules');
define('_ACTIVEBUTNOTSEE','(Active but invisible link)');
define('_BOTS','Bots');

define('_UM','Dragonfly Update Service');
define('_UM_F','Failed to contact the update service. Please try again later.');
define('_UM_G','You are using the latest version of Dragonfly');
define('_UM_R','Please <a href="%2$s" target="_blank">upgrade</a> to Dragonfly %1$s');

define('_TEAM','Equipo');
define('_LINKAPPROVEDMSG','Congratulations! The web link you submitted has been approved, please link back to us.');
define('_MODREQLINKS','Mod. Links');
define('_BROKENLINKS','Broken Links');
define('_MODREQDOWN','Mod. Downloads');
define('_BROKENDOWN','Broken Downloads');
define('_PAGEGENERATION','Page Generation:');
define('_SECONDS','seconds');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','This page generated in %1$s seconds with %2$s DB Queries in %3$s seconds');
define('_YOUHAVEONEMSG','You have one new private message');
define('_NEWPMSG','New Private Messages');
define('_CONTRIBUTEDBY','Contributed by');
define('_CHAT','Chat');
define('_REGISTERED','Registered');
define('_CHATGUESTS','Guests');
define('_USERSTALKINGNOW','Users Talking Now');
define('_ENTERTOCHAT','Enter To Chat');
define('_CHATROOMS','Available Rooms');
define('_ALLTOPICS','Tódo-los temas');
define('_ASSOTOPIC','Associated Topics');
define('_HELLO','Hola');
define('_ALL','Todo');
define('_URL','URL');
define('_SUBJECT','Asunto');
define('_PREVIEW','Vista Previa');
define('_SEND','Enviar');
define('_ANONYMOUS','Anonymous');
define('_BREADCRUMB', 'Breadcrumb Delimiter, separates words in pagetitles');
define('_BC_DELIM',''.isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&rsaquo;');//''. is for cpglang
define('_RESET','Reset');
define('_AT','at');
define('_LASTMSGS','Last %s Forum Messages');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','Versión para imprimir');

define('_CREDITS_TITLE','Credits');
define('_CREDITS_PRODUCT','Product');
define('_CREDITS_DESC','Description');
define('_CREDITS_AUTHORS','Author(s)');

define('_PP_TITLE','Privacy Policy');
define('_PP_MODIFY','Modify this message');

define('_SENDERNAME','Sender Name');
define('_SENDEREMAIL','Sender Email');
define('_RECIPIENTNAME','Recipient Name');
define('_RECIPIENTEMAIL','Recipient Email');

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
define('_TB_BLOCK','My Account Tools');
define('_TB_TASKS','Tasks');
define('_TB_INFO','Information');
define('_TB_PROFILE_INFO','My public profile');
define('_TB_EDIT_PROFILE','My profile information');
define('_TB_EDIT_REG','My registration details');
define('_TB_EDIT_PRIVATE','My private information');
define('_TB_EDIT_AVATAR','My avatar');
define('_TB_DELETE','Delete my account');
define('_TB_CONFIG','Configuration');
define('_TB_EDIT_PREFS','My preferences');
define('_TB_EDIT_HOME','My homepage settings');
define('_TB_EDIT_COMM','My comment settings');
define('_TB_PERSONAL','Personal');
define('_TB_PERSONAL_GALLERY','My gallery');
define('_TB_PERSONAL_JOURNAL','My blog');
define('_TB_PRIVMSGS','Private Messages');
define('_TB_PRIVMSGS_INBOX','Inbox');
define('_TB_PRIVMSGS_OUTBOX','Outbox');
define('_TB_PRIVMSGS_SENTBOX','Sentbox');
define('_TB_PRIVMSGS_SAVEBOX','Savebox');
define('_TB_PRIVMSGS_SEND','Send message');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','User Info');
define('_SECURITYCODE','Security Code');
define('_TYPESECCODE','Type Code');
define('_MEMBERSOPTIONS','Members options');
define('_READSEND','Read my private messages. Send messages to others.');
define('_INBOX','Inbox');
define('_NEW','New');
define('_ACCOUNTOPTIONS','My Account. Update preferences and read my messages.');
define('_LOGOUTACCT','Log out of this account.');
define('_LOGOUTADMINACCT','Log out of admin account.');
define('_BLOGIN','Your Account');
define('_BFLOGIN','My Profile');
define('_BHID','Hidden');
define('_WHOWHERE','Who Is Where');
define('_STAFFONL','Staff Online');
define('_STAFFNONE','No staff members are online!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Community');
define('_BlogsLANG','Blogs');
define('_ContentLANG','Content');
define('_coppermineLANG','Photo Gallery');
define('_CPGlangLANG','Help Translate');
define('_DownloadsLANG','Downloads');
define('_EncyclopediaLANG','Encyclopedia');
define('_ForumsLANG','Community Forums');
define('_ContactLANG','Contact Us');
define('_FAQLANG','FAQ - Help');
define('_Members_ListLANG','Members List');
define('_NewsLANG','News');
define('_ReviewsLANG','Reviews');
define('_SearchLANG','Search');
define('_StatisticsLANG','Statistics');
define('_Stories_ArchiveLANG','Stories Archive');
define('_Submit_NewsLANG','Submit News');
define('_SurveysLANG','Surveys');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Topics');
define('_Private_MessagesLANG','My Private Messages');
define('_Tell_a_FriendLANG','Tell a Friend');
define('_Web_LinksLANG','Links');
define('_Your_AccountLANG','My Account');
define('_CPG_EventsLANG','Calendar');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Languages!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Groups');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Headlines');

define('_COMMUNICATION','Communication');
define('_FRIENDS','Friends');
define('_STORE','Store');
define('_PRODUCTS','Products');
define('_DONATE','Donate');
define('_HELP','Help');
define('_GALLERIES','Galleries');
define('_DOCS','Documentation');
define('_RULES','Rules & regulations');
define('_MENU','Main Menu');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','You <strong>are</strong> subscribed to<br />our newsletter');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','You are <strong>not</strong> subscribed to<br />our newsletter');
define('_NEWSLETTERBLOCKREGISTER','You must be a<br /><strong>registered user</strong><br />to receive our newsletter');
define('_NEWSLETTERBLOCKSUBSCRIBE','Subscribe');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Unsubscribe');
define('_NEWSLETTERBLOCKREGISTERNOW','Register Now!');
/* END Newsletter Block */

/* START class phpmailer lang array */
$PHPMAILER_LANG = array();
$PHPMAILER_LANG['provide_address'] = 'You must provide at least one recipient email address.';
$PHPMAILER_LANG['mailer_not_supported'] = ' mailer is not supported.';
$PHPMAILER_LANG['execute'] = 'Could not execute: ';
$PHPMAILER_LANG['instantiate'] = 'Could not instantiate mail function.';
$PHPMAILER_LANG['authenticate'] = 'SMTP Error: Could not authenticate.';
$PHPMAILER_LANG['from_failed'] = 'The following From address failed: ';
$PHPMAILER_LANG['recipients_failed'] = 'SMTP Error: The following recipients failed: ';
$PHPMAILER_LANG['data_not_accepted'] = 'SMTP Error: Data not accepted.';
$PHPMAILER_LANG['connect_host'] = 'SMTP Error: Could not connect to SMTP host.';
$PHPMAILER_LANG['file_access'] = 'Could not access file: ';
$PHPMAILER_LANG['file_open'] = 'File Error: Could not open file: ';
$PHPMAILER_LANG['encoding'] = 'Unknown encoding: ';
/* END class phpmailer lang array */

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_SAVECHANGES','Gardar cambios');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Idioma');
define('_FUNCTIONS','Funcións');
define('_SHOW','Ver');
define('_TO','Para');
define('_DAY','Día');
define('_LAST','Último');
define('_ACTIVE','Activo');
define('_DEACTIVATE','Desactivar');
define('_INACTIVE','Inactivo');
define('_ACTIVATE','Activar');
define('_ACTIVATE2','¿Activar?');
define('_VIEW','Visible a');
define('_VIEWPRIV','¿Quén pode ver isto?');
define('_MVADMIN','Só os Administradores');
define('_MVUSERS','Só os Usuarios Rexistrados');
define('_MVANON','Só os Usuarios Anónimos');
define('_MVALL','Todo o mundo');
define('_IMAGE','Imaxe');
define('_GO','¡Ir!');
define('_OPTION','Opción');
define('_CATEGORY','Categoría');
define('_SUBCATEGORY','Sub-Category');
define('_ID','ID');
define('_EXPIRATION','Caducidade');
define('_DAYS','días');
define('_WARNING','Coidado');
define('_POLLTITLE','Título da Enquisa');
define('_POLLEACHFIELD','Por favor escriba cada opción da enquisa');
define('_ADDCATEGORY','Engadir Categoría');
define('_PAGEBREAK','Se quere dividir en varias páxinas, pode escribir <b>&lt;!--pagebreak--&gt;</b> onde queira cortar');
define('_SIGNATURE','Firma');
define('_DESCRIPTION','Descripción');
define('_EDITCATEGORY','Editar Categoría');
define('_IN','en');
define('_DESCRIPTION255','Descripción (255 caracteres máx.)');
define('_MODCATEGORY','Modificar unha Categoría');
define('_SUBMITTER','Usuario');
define('_VISIT','Visita');
define('_EXTENDEDTEXT','Texto Extendido');
define('_CHECKCATEGORIES','Verifica-las categorías');
define('_INCLUDESUBCATEGORIES','(Incluir Sub-Categorías)');
define('_CHECKSUBCATEGORIES','Verificar Sub-Categorías');
define('_VALIDATELINKS','Validar Enlaces');
define('_FAILED','¡Fallou!');
define('_BEPATIENT','(espere, por favor)');
define('_VALIDATINGCAT','Validando as Categorías (e tóda-las Sub-Categorías)');
define('_VALIDATINGSUBCAT','Validando a Sub-Categoría');
define('_OK','Aceptar');
define('_CHECK','Check');
define('_IGNORE','Ignorar');
define('_HITS','Hits');
define('_FILESIZE', 'File Size');
define("_EZTHEREIS","There are");
define("_EZSUBCAT","sub-categories");
define("_EZATTACHEDTOCAT","under this category");
define("_EZBROKENLINKS","Broken Links");
define("_DELEZLINKCATWARNING","WARNING : Are you sure you want to delete this category ?<br /> You will delete all sub-categories and attached links as well !");

// index.php
define('_DEFHOMEMODULE','Default Homepage Module');
define('_MODULEINHOME','Module loaded in the homepage:');
define('_CHANGE','Change');
define('_WHOSONLINE','¿Quén está conectado?');
define('_NP_ADMIN','Notepad');
define('_NP_LOCKED','The notepad has been locked<br />Only a root administrator (super user) can unlock it');
define('_NP_SAVE','Save Notes');
define('_NP_UNLOCK','Unlock Notepad');
define('_NP_LOCK','Lock Notepad');
// news
define('_STICKY','Sticky Articles');
define('_ARTICLEUP','Move article up');
define('_ARTICLEDOWN','Move article down');
define('_UNSTICK','Unstick');
define('_STICK','Sticky');
define('_AUTOMATEDARTICLES','Artigos programados');
define('_STORYID','ID Noticia');
define('_CURRENTPOLL','Enquisa Actual');

// admin.php
define('_ADMINISTRATION','Administration');
define('_NOADMINYET','There are no administrator accounts yet, proceed to create the super user...');
define('_CREATEUSERDATA','Would you like to create a regular user with the same data?');
define('_ADMINLOGIN','Login do Sistema de Administración');
define('_ADMINID','Admin ID');
define('_EMAIL','E-Mail');
define('_SUBMIT','Enviar');
define('_YOUARELOGGEDOUT','¡Agora está desconectado!');
define('_PASSWDNOMATCH','Desculpe, a nova contraseña non concorda. Inténteo de novo');
define('_LOGIN_REMEMBERME','Remember me?');
define('_ADMINMENU_LOGOUT','Administration Menu Logout');
define('_PASSWORD_MALFORMED','Please include at least one number, one capital letter and one lowercase letter in your password');

// admins.php
define('_AUTHORSADMIN','Administración de Autores');
define('_NAME','Nome');
define('_REQUIRED','Obrigatorio');
define('_MODIFYINFO','Modificar Información');
define('_DELAUTHOR','Borrar Autor');
define('_ADDAUTHOR','Engadir Autor');
define('_PERMISSIONS','Permisos');
define('_SUPERUSER','Súper Usuario');
define('_SUPERWARNING','ATENCIÓN: se selecciona Súper Usuario, terá acceso total');
define('_ADDAUTHOR2','Engadir Autor');
define('_RETYPEPASSWD','Re-escribir Clave');
define('_FORCHANGES','(Só se cambia)');
define('_COMPLETEFIELDS','Debe completar tódo-los campos obrigatorios');
define('_CREATIONERROR','Error na creación do Autor');
define('_AUTHORDEL','Borrar Autor');
define('_PUBLISHEDSTORIES','Este administrador publicou historias');
define('_SELECTNEWADMIN','Seleccione un novo administrador para reasignar');
define('_GODNOTDEL','*(a conta GOD non pode borrarse)');
define('_MAINACCOUNT','Administrador God*');
define('_USERS','Usuarios');

// banners.php
define('_BANNERSADMIN','Administración de Anuncios');
define('_DELETEBANNER','Delete Banner');
define('_SURETODELBANNER','Are you sure you want to delete this banner?');
define('_EDITBANNER','Edit Banner');

// blocks.php
define('_BLOCKSADMIN','Administración de bloques');
define('_CENTER','Center');
define('_CENTERUP','Center Up');
define('_CENTERDOWN','Center Down');
define('_BLOCKFILE','(Arquivo do Bloque)');
define('_BLOCKFILE2','ARQUIVO');
define('_BLOCKSYSTEM','SISTEMA');
define('_ADDNEWBLOCK','Engadir Bloque');
define('_RSSFILE','Arquivo RSS/RDF do sitio');
define('_ONLYHEADLINES','(Só para Titulares)');
define('_REFRESHTIME','Tempo de Recarga');
define('_CREATEBLOCK','Crear Bloque');
define('_EDITBLOCK','Editar Bloque');
define('_BLOCK','Bloque');
define('_SAVEBLOCK','Gardar Bloque');
define('_BLOCKACTIVATION','Activación do Bloque');
define('_BLOCKPREVIEW','Isto é unha Vista Previa do Bloque');
define('_WANT2ACTIVATE','¿Quere activar este Bloque?');
define('_ARESUREDELBLOCK','¿Está seguro de querer quitar o Bloque');
define('_BLOCKUP','Arriba');
define('_BLOCKDOWN','Abaixo');
define('_BLOCKTOP','Move block to top');
define('_BLOCKBOTTOM','Move block to bottom');
define('_TITLE','Título');
define('_POSITION','Posición');
define('_WEIGHT','Peso');
define('_STATUS','Estado');
define('_LEFTBLOCK','Bloque Esquerdo');
define('_LEFT','Esquerda');
define('_RIGHTBLOCK','Bloque Dereito');
define('_RIGHT','Dereita');
define('_TYPE','Tipo');
define('_CUSTOM','Non definido');
define('_FILENAME','Nome Arquivo');
define('_FILEINCLUDE','(Seleccione o Bloque persoal a incluir. Os demáis campos serán ignorados.)');

// comments.php
define('_REMOVECOMMENTS','Borrar comentarios');
define('_SURETODELCOMMENTS','¿Está seguro de querer borrar este comentario e tóda-las súas respostas?');

// database.php
define('_SAVEDATABASE','Backup DB');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Estado Actual');
define('_ACTIVATEPAGE','¿Activar Esta Páxina?');

// history.php
define('_EPHEMADMIN','Administración de Efemérides');
define('_ADDEPHEM','Engadir Efeméride');
define('_EPHEMDESC','Descripción da Efeméride');
define('_EPHEMMAINT','Mantemento de Efemérides (Editar/Borrar):');
define('_EPHEMEDIT','Editar Efemérides');
define('_EPHEMDELETE','Delete Entry');

// headlines.php
define('_RSSFAIL','Hai un problema co arquivo RSS da URL');
define('_RSSTRYAGAIN','Revise a URL e os arquivos RSS, e volva a probar.');
define('_RSSCONTENT','(Contido RSS/RDF)');
define('_IFRSSWARNING','Se pon unha URL o contido non será visualizado!');
define('_SETUPHEADLINES','(Seleccione "Non definido" e escriba a URL ou seleccione simplemente un sitio na lista para desplegar as súas noticias)');
define('_HEADLINESADMIN','Administración de Titulares');
define('_ADDHEADLINE','Engadir titular');
define('_EDITHEADLINE','Editar titular');
define('_SURE2DELHEADLINE','¿Está seguro de querer borrar este titular?');

// messages.php
define('_MESSAGESADMIN','Administración de Mensaxes');
define('_MESSAGETITLE','Título');
define('_MESSAGECONTENT','Contido');
define('_ALLMESSAGES','Ver mensaxes');
define('_EDITMSG','Editar mensaxe');
define('_ADDMSG','Engadir mensaxe');
define('_REMOVEMSG','¿Está seguro de eliminar esta mensaxe? ');
define('_CHANGEDATE','¿Cambia-la fecha de comezo a hoxe?');
define('_IFYOUACTIVE','(Se activa esta Mensaxe agora, a fecha de comezo será hoxe)');

// modules.php
define('_MODULESADMIN','Administración de Módulos');
define('_HOMECONFIG','Configuración da Páxina de Inicio');
define('_MODULESADDONS','Módulos e Addons');
define('_INHOME','Set as Home Module');
define('_MODULEHOMENOTE','New modules added to the /modules/ folder will automatically be added to the system<br />Removing a module\'s folder from this directory will automatically remove the module from the system<br /><br />The module with a bold title denotes the module set as my homepage<br />This module cannot be deactivated or restricted to certain users');
define('_PUTINHOME','Set as Home');
define('_SURETOCHANGEMOD','Are you sure you want to change your Homepage from');
define('_NOTINMENU','[ <strong>&middot;</strong> ] denotes a module hidden from view in the Modules block');
define('_SHOWINMENU','Show in menu?');
define('_CUSTOMTITLE','Título Persoal');
define('_MODULEEDIT','Editar Módulo');
define('_VERSION','Versión');
define('_UPGRADE','Upgrade to %s');
define('_DBSIZE','DB size');
define('_CVS_EXPLAIN','This module appears to be able to receive updates through our CVS (Concurrent Versioning System). With CVS, you are able to receive the latest updates of a file very easily, but the latest version of a file may contain bugs as it is likely not part of our stable release.<br /><br />If you are familiar with PHP, you can update this module with the latest CVS files by using the link below. <strong>Backup all files first!</strong>');
define('_CVS_UPDATE','Update CVS files');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','De');
define('_STAFF','Plantilla');
define('_NL_RECIPS','Recipients');
define('_SUBSCRIBEDUSERS','Usuarios Rexistrados');
define('_NL_ALLUSERS','All Members');
define('_NL_ADMINS','Administrators');
define('_NL_REGARDS','Best Regards');
define('_DISCARD','Discard');
define('_REVIEWTEXT','Por favor revise e chequee o texto:');
define('_MANYUSERSNOTE','AVISO: Hai moitos usuarios que recibirán este texto. Espere ata que o script finalice a operación. Pode levar algúns minutos!');
define('_NL_NOUSERS','The group selected to receive this newsletter has zero users<br />Please go back and select a different group');
define('_NUSERWILLRECEIVE','Os usuarios recibirán este correo.');
define('_NLUNSUBSCRIBE',"We sent you this message because you have selected to receive newsletters from our site\n\nYou can choose to unsubscribe from our mailings at any time by following <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">this</a> link\n\nIf you would like further assistance, please send an email to <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">our administrator</a>");
define('_NEWSLETTERSENT','O Correo enviouse.');

// referers.php
define('_WHOLINKS','¿Quen enlaza o noso sitio?');
define('_DELETEREFERERS','Borra-los Datos');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Footer');
define('_DEBUG', 'Debug');
define('_SITECONFIG','Configuración do Sitio Web');
define('_GENSITEINFO','Información Xeral do Sitio');
define('_SITENAME','Nome do sitio');
define('_SITEURL','URL do sitio');
define('_SITELOGO','Logotipo do sitio');
define('_SITESLOGAN','Eslogan do sitio');
define('_STARTDATE','Fecha de Inicio do Sitio');
define('_ADMINEMAIL','E-Mail do Administrador');
define('_ITEMSTOP','Número de artículos na Páxina Top');
define('_STORIESHOME','Número de Noticias na Páxina de Inicio');
define('_OLDSTORIES','Noticias na Caixa de Noticias Anteriores');
define('_ALLOWANONPOST','Permitir envíos anónimos');
define('_DEFAULTTHEME','Tema por defecto do sitio');
define('_SHOWSEC','Show security code');
define('_TOOLTIPS','Show tooltips on designated fields');
define('_UM_TOGGLE','Enable Update Service');
define('_UM_EXPLAIN','This will retrieve two pieces of information from our website, dragonflycms.org: the current build of Dragonfly, and any important messages that pertain to your version of Dragonfly. The only data sent to our site is your Dragonfly version number; we do <strong>not</strong> log these requests to our server.');
// maintenance
define('_MAINTENANCE','Maintenance');
define('_MESSAGE','Message');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','Opcións Multilingua');
define('_SELLANGUAGE','Seleccionar Idioma para o seu sitio');
define('_LOCALEFORMAT','Formato de Tempo Local');
define('_ACTMULTILINGUAL','¿Activar características Multilingua? ');
define('_ACTUSEFLAGS','¿Mostrar bandeiras en lugar de desplegable con nomes? ');
// banners
define('_BANNERSOPT','Opcións de Banners');
define('_ACTBANNERS','¿Activar Banners no seu Sitio?');
// footer
define('_FOOTERMSG','Mensaxes de Pé de Páxina');
define('_FOOTERLINE1','Pé de Páxina 1');
define('_FOOTERLINE2','Pé de Páxina 2');
define('_FOOTERLINE3','Pé de Páxina 3');
// backend
define('_BACKENDCONF','Configuración do Backend');
define('_BACKENDTITLE','Título do Backend');
define('_BACKENDLANG','Idioma do Backend');
// mail stories
define('_MAIL2ADMIN','Enviar novas Noticias ó Administrador');
define('_NOTIFYSUBMISSION','¿Notificar por E-Mail os Novos Envíos?');
define('_EMAIL2SENDMSG','E-Mail para enviar a mensaxe');
define('_EMAILSUBJECT','Asunto do E-Mail');
define('_EMAILMSG','Mensaxe do E-Mail');
define('_EMAILFROM','Conta de E-Mail (De)');
// comments
define('_COMMENTSOPT','Opción de Comentarios');
define('_COMMENTSLIMIT','Límite en Bytes dos comentarios');
define('_COMMENTSMOD','Moderación dos Comentarios');
define('_MODADMIN','Moderación por Admins');
define('_MODUSERS','Moderación por Usuarios');
define('_NOMOD','Sen Moderación');
// adminmenu
define('_GRAPHICOPT','Opcións Gráficas');
define('_BOTH','Both');
define('_GRAPHICAL','Graphical');
define('_SIDEBLOCK','Side-block');
// miscellaneous
define('_MISCOPT','Opcións Variadas');
define('_ACTIVATEHTTPREF','Activar Ref. de páxinas');
define('_MAXREF','¿Cántas referencias quere como máximo?');
define('_COMMENTSPOLLS','¿Activar Comentarios nas Enquisas?');
define('_COMMENTSARTICLES','Activar Comentarios en Artigos?');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','Censor');
define('_CENSORMODE','Mode for matching');
define('_NOFILTERING','No filtering');
define('_EXACTMATCH','Exact match');
define('_MATCHBEG','Match at beginning of text');
define('_MATCHANY','Match anywhere in the text');
define('_CENSORREPLACE','Replacement for restricted word');
// email
define('_EMAILOPTIONS','Mail');
define('_ALLOW_HTML_EMAIL','Allow the use of HTML in email');
define('_USE_SMTP','Use SMTP server as opposed to PHP\'s mailer');
define('_SMTP_HOST','SMTP host address (smtp.example.com)');
define('_USE_SMTP_AUTH','Does server require SMTP authorization');
define('_SMTP_USER_NAME','SMTP username');
define('_SMTP_USER_PASS','SMTP password');

// cpg_adminmenu.php
define('_ADMINMENU','Menú Administración');
define('_ADMINLOGOUT','Logout / Sair');
define('_AMENU0','System');
define('_AMENU1','General');
define('_AMENU2','Members');
define('_AMENU3','Messages');
define('_AMENU4','Forums');
define('_AMENU5','Informative');
define('_AMENU6','Linking');
define('_AMENU7','Commerce');
define('_AMENU8','Multimedia');
define('_AMENU9','Modules');
define('_BMENU1','Help');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','Preferencias');
define('_DATABASE','Database');
define('_BLOCKS','Bloques');
define('_MODULES','Módulos');
define('_EDITADMINS','Editar Admins');
define('_MESSAGES','Mensaxes');
define('_BANNERS','Banners');
define('_HTTPREFERERS','Referencias HTTP');
define('_EDITUSERS','Editar Usuarios');
define('_USERSCONFIG','Members Config');
define('_NEWSLETTER','Correo de Noticias');
define('_SUBMISSIONS','Envíos');
define('_ADDSTORY','Nova Noticia');
define('_TOPICS','Temas');
define('_ADMPOLLS','Enquisas/Votacións');
define('_EPHEMERIDS','Efemérides');
define('_REVIEWS','Reseñas');
define('_ENCYCLOPEDIA','Enciclopedia');
define('_SURVEYS','Enquisas');
define('_SECTIONS','Seccións');
define('_ARTICLES','Artigos');
define('_FAQ','PUF');
define('_DOWNLOAD','Descargas');
define('_WEBLINKS','Enlaces');
define('_CONTENT','Contido');
define('_SYSINFO','System Info');
define('_REPORTABUG','Report a Bug');
//coppermine admin
define('_W_INSTALL','Which Installation?');
define('_W_PAGE','Which Page?');
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
define('_SEC_ERROR','Security Error');
define('_ERROR_NOT_SET','%s was not set');
define('_ERROR_NO_POST','Posting from another host is disallowed...');
define('_ERROR_NO_GET','GET requests are not allowed for this function...');
define('_ERROR_BAD_CHAR','The characters that you tried to include in your %s request are forbidden...');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','You tried to access this page through a bad link...');
define('_ERROR_NONE_TO_DISPLAY','There are no %s to display');
define('_ERROR_DELETE_CONF','Are you sure that you want to delete %s?');
define('_ERROR_NO_EXIST','%s does not exist');
define('_ERROR_ALREADYEXIST','%s already exists');
define('_TASK_COMPLETED','Operation complete!');
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
