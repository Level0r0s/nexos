<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/castellano/downloads.php,v $
  $Revision: 1.6 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:49 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','La descarga no existe');
define('_CATEGORIES','Categorías');
define('_LVOTES','Votos');
define('_TOTALVOTES','Votos Totales:');
define('_THEREARE','Hay');
define('_NOMATCHES','No hay registros para su consulta');
define('_SCOMMENTS','Comentarios');
define('_UNKNOWN','Desconocido');
define('_AUTHORNAME','Nombre del Autor');
define('_AUTHOREMAIL','Correo del Autor');
define('_DOWNLOADNAME','Nombre del Programa');
define('_ADDTHISFILE','Añadir este archivo');
define('_INBYTES','en bytes');
//define('_FILESIZE','Tamaño del archivo');
//define('_VERSION','Versión');
//define('_AUTHOR','Autor');
define('_HOMEPAGE','Página de Inicio');
define('_DOWNLOADNOW','Descargar este archivo ahora.');
define('_RATERESOURCE','Valorar Recurso');
define('_FILEURL','URL del archivo');
define('_ADDDOWNLOAD','Añadir Descarga');
define('_DOWNLOADSMAIN','Índice');
define('_DOWNLOADCOMMENTS','Comentarios de la descarga');
define('_DOWNLOADSMAINCAT','Categoría de la descarga');
define('_ADDADOWNLOAD','Añadir una descarga');
define('_DSUBMITONCE','Enviar descargas sólo una vez.');
define('_DPOSTPENDING','Todos los recursos se verifican antes de publicar.');
define('_RESSORTED','Recurso ordenado por');
define('_DOWNLOADSNOTUSER1','No estás registrado o no has ingresado.');
define('_DOWNLOADSNOTUSER2','Si estuvieras registrado podrías añadir archivos para descargar en esta web.');
define('_DOWNLOADSNOTUSER3','Regístrate como usuario, es un proceso rápido y sencillo.');
define('_DOWNLOADSNOTUSER4','¿Por qué necesitas registrarte para acceder a ciertas funciones?');
define('_DOWNLOADSNOTUSER5','Para poder ofrecerte únicamente el contenido de la más alta calidad,');
define('_DOWNLOADSNOTUSER6','cada archivo es revisado individualmente y aprobado por un colaborador.');
define('_DOWNLOADSNOTUSER7','Confiamos en ofrecerte información valiosa.');
define('_DOWNLOADSNOTUSER8','<a href="\'.getlink("Your_Account").\'">Registrarse</a>');
define('_DOWNLOADALREADYEXT','ERROR: ¡Esta URL ya está en nuestra Base de Datos!');
define('_DOWNLOADNOTITLE','ERROR: ¡Necesitas poner un Título para tu URL!');
define('_DOWNLOADNOURL','ERROR: ¡Necesitas poner una URL para tu URL!');
define('_DOWNLOADNODESC','ERROR: ¡Necesitas poner una Descripción para tu URL!');
define('_DOWNLOADRECEIVED','Recibimos tu Propuesta. ¡Gracias!');
define('_NEWDOWNLOADS','Nuevas Descargas');
define('_TOTALNEWDOWNLOADS','Número total de nuevos enlaces');
define('_DTOTALFORLAST','Descargas nuevas de los últimos');
define('_DBESTRATED','Descargas Mejor Valoradas - Top');
define('_TRATEDDOWNLOADS','total descargas valoradas');
define('_SORTDOWNLOADSBY','Ordenar los enlaces por');
define('_DCATNEWTODAY','Descargas nuevas en esta categoría añadidas hoy');
define('_DCATLAST3DAYS','Descargas nuevas en esta categoría añadidas en los últimos 3 días');
define('_DCATTHISWEEK','Descargas nuevas en esta categoría añadidas esta semana');
define('_DDATE1','Fecha (Descargas antiguas mostradas primero)');
define('_DDATE2','Fecha (Descargas nuevas mostradas primero)');
define('_DOWNLOADS','Descargas');
define('_DOWNLOADPROFILE','Perfil de descarga');
define('_DOWNLOADRATINGDET','Detalles de la valoración del enlace');
define('_EDITTHISDOWNLOAD','Editar esta descarga');
define('_DOWNLOADRATING','Valoración de la descarga');
define('_DOWNLOADVOTE','¡Vota!');
define('_DONLYREGUSERSMODIFY','Solo los usuarios registrados pueden sugerir modificaciones en las descargas. Por favor <a href="'.getlink("Your_Account").'">regístrate o ingresa</a>.');
define('_REQUESTDOWNLOADMOD','Pedir la modificación de la descarga');
define('_DOWNLOADID','ID de la Descarga');
define('_DLETSDECIDE','Valoraciones de usuarios como tú ayudan a otros visitantes a decidir mejor que descargarse.');
define('_DRATENOTE4','Puedes ver una lista de <a href="'.getlink("Downloads&amp;d_op=TopRated").'">los recursos mejor valorados</a>.');
define('_POPULAR','Popular');
define('_TOPRATED','Mejores valorados');
define('_ADDITIONALDET','Detalles adicionales');
define('_EDITORREVIEW','Análisis del editor');
define('_REPORTBROKEN','Informar de un enlace roto');
define('_AND','y');
define('_INDB','en nuestra base de datos');
define('_INSTRUCTIONS','Instrucciones');
define('_USERANDIP','El nombre de usuario y el IP serán registrados, así que por favor no abuses del sistema.');
define('_LDESCRIPTION','Descripción: (255 caracteres máx.)');
define('_CHECKFORIT','No has escrito un Correo. De todas maneras, revisaremos tu enlace pronto.');
define('_LASTWEEK','Última Semana');
define('_LAST30DAYS','Últimos 30 días');
define('_1WEEK','1 Semana');
define('_2WEEKS','2 Semanas');
define('_30DAYS','30 Días');
define('_ADDEDON','Agregado el');
define('_RATING','Valoración');
define('_DETAILS','Detalles');
define('_OF','de');
define('_TVOTESREQ','mínimo de votos necesarios');
define('_SHOWTOP','Mostrar Top');
define('_MOSTPOPULAR','Más Popular - Top');
define('_OFALL','de todo');
define('_POPULARITY','Popularidad');
define('_SELECTPAGE','Seleccionar Página');
define('_MAIN','Principal');
define('_NEWTODAY','Nuevo Hoy');
define('_NEWLAST3DAYS','Nuevo en los últimos 3 días');
define('_NEWTHISWEEK','Nuevo esta semana');
define('_POPULARITY1','Popularidad (de menos a más visitas)');
define('_POPULARITY2','Popularidad (de más a menos visitas)');
define('_TITLEAZ','Título (A - Z)');
define('_TITLEZA','Título (Z - A)');
define('_RATING1','Valoración (de menor a mayor)');
define('_RATING2','Valoración (de mayor a menor)');
define('_SEARCHRESULTS4','Buscar resultados por');
define('_USUBCATEGORIES','Sub-Categorías');
define('_TRY2SEARCH','Intenta buscar');
define('_INOTHERSENGINES','en otros Motores de Búsqueda');
define('_EDITORIAL','Editorial');
define('_EDITORIALBY','Editorial por');
define('_NOEDITORIAL','El editorial no está actualmente disponible en esta web.');
define('_RATETHISSITE','Valorar esta Descarga');
define('_ISTHISYOURSITE','¿Es este tu recurso?');
define('_ALLOWTORATE','¡Permita que los usuarios lo valoren desde tu sitio Web!');
define('_OVERALLRATING','Valoración General');
define('_TOTALOF','Total de');
define('_USER','Usuario');
define('_USERAVGRATING','Valoración promedio de los usuarios');
define('_NUMRATINGS','Núm. de valoraciones');
define('_REGISTEREDUSERS','Usuarios registrados');
define('_NUMBEROFRATINGS','Número de valoraciones');
define('_NOREGUSERSVOTES','No hay votos de usuarios registrados');
define('_BREAKDOWNBYVAL','Histograma por valoración');
define('_LTOTALVOTES','votos totales');
define('_HIGHRATING','Alta valoración');
define('_LOWRATING','Baja valoración');
define('_NUMOFCOMMENTS','Número de comentarios');
define('_WEIGHNOTE','* Nota: Este sitio diferencia los votos de los usuarios registrados de los no registrados');
define('_NOUNREGUSERSVOTES','No hay votos de no registrados');
define('_WEIGHOUTNOTE','** Nota: Este sitio diferencia los votos de los usuarios registrados de los foráneos');
define('_NOOUTSIDEVOTES','Votos de usuarios');
define('_OUTSIDEVOTERS','Votos de anónimos');
define('_UNREGISTEREDUSERS','Usuarios no registrados');
define('_PROMOTEYOURSITE','Promociona tu Web');
define('_PROMOTE01','Tal vez te interesa unas de la opciones que tenemos para la \'Valoración de otras Webs\'. Estas te permiten poner una imagen (o un formulario de votación) en tu sitio Web para incrementar tus votos. Por favor elije una de estas opciones:');
define('_TEXTLINK','Texto del enlace');
define('_PROMOTE02','Una manera de enlazar el formulario de evaluación es poner un simple enlace de texto:');
define('_HTMLCODE1','El código HTML que puedes usar en este caso, es el siguiente:');
define('_THENUMBER','El Número');
define('_IDREFER','en el código HTML se registra tu ID de Descarga en la Base de Datos de $sitename. Comprueba que este número este presente.');
define('_BUTTONLINK','Botón de Enlace');
define('_PROMOTE03','Si quieres más que un simple texto, puedes utilizar un pequeño botón:');
define('_RATEIT','Valora esta Descarga');
define('_HTMLCODE2','El código fuente para el botón anterior es:');
define('_REMOTEFORM','Formulario de valoración remota');
define('_PROMOTE04','Si haces trampas, quitaremos tu enlace. Una vez aclarado esto, así es como se ve el formulario de valoración.');
define('_VOTE4THISSITE','¡Votar por esta Web!');
define('_HTMLCODE3','Usar este formulario permitirá a los usuarios valorar tu sitio directamente desde tu página y será grabada aquí. El formulario anterior está desconectado, pero el siguiente código trabajará si lo copias y pegas en tu página. El código es el siguiente:');
define('_PROMOTE05','¡Gracias!, y buena suerte con tu valoración.');
define('_THANKSBROKEN','Gracias por ayudar a mantener la integridad de este directorio.');
define('_SECURITYBROKEN','Por razones de seguridad tu nombre de usuario y dirección IP serán temporalmente registrados.');
define('_THANKSFORINFO','Gracias por la información.');
define('_LOOKTOREQUEST','Analizaremos tu petición pronto.');
define('_SENDREQUEST','Enviar Petición');
define('_THANKSTOTAKETIME','Gracias por tu tiempo evaluando esta web en');
define('_RETURNTO','Volver a');
define('_RATENOTE1','Por favor no votes por el mismo enlace más de una vez');
define('_RATENOTE2','La escala va de 1 a 10, siendo 1 Pobre y 10 Excelente.');
define('_RATENOTE3','Trate de ser objetivo en tu voto, si se recibe siempre 1 ó 10, la valoración no será útil.');
define('_RATENOTE5','No votes por tu propio recurso o el de tu competidor.');
define('_YOUAREREGGED','Eres un usuario registrado y estás conectado.');
define('_FEELFREE2ADD','Siéntete libre de añadir comentarios sobre esta web.');
define('_YOUARENOTREGGED','No eres un usuario registrado o no estás conectado.');
define('_IFYOUWEREREG','Si estuvieras registrado podrías haber publicado comentarios en esta web.');
define('_MODIFY','Modificar');
define('_COMPLETEVOTE1','Tu voto es apreciado.');
define('_COMPLETEVOTE2','Tú ya has votado por este recurso hace pocos día(s).');
define('_COMPLETEVOTE3','Vota por un recurso sólo una vez.<br>Todos los votos serán revisados.');
define('_COMPLETEVOTE4','No puedes votar por un recurso que tú enviaste.<br>Todos los votos serán revisados.');
define('_COMPLETEVOTE5','No has seleccionado un valor - Voto no registrado');
define('_COMPLETEVOTE6','Sólo se admite un voto por dirección IP cada $outsidewaitdays día(s).');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDDURL','Add this URL');
define('_EZTRANSFERDOWNLOAD','Transfer');
define('_EZTRANSFERDOWNLOADS','Cambiar todas las descargas de categoría');
define('_DELEZDOWNLOADSCATWARNING','CUIDADO: ¿Estás seguro de querer borrar esta categoría? Borrarás todas las sub-categorías y descargas también!');
define('_DELCONTENTCAT','CUIDADO: ¿Estás seguro que deseas borrar esta categoría? Las páginas bajo esta categoría, si existen, no serán borradas, pero no tendrán asignada ninguna categoría.');
define('_DELCATEGORY','Borrar Categoría');
define('_DOWNLOADTITLE','Título del programa');
define('_DOWNLOADSINDB','descargas en nuestra Base de Datos');
define('_DOWNLOADSWAITINGVAL','Descargas esperando aprobación');
define('_CLEANDOWNLOADSDB','Borrar los votos');
define('_BROKENDOWNLOADSREP','Reporte de enlaces rotos');
define('_DOWNLOADMODREQUEST','Peticiones de modificación');
define('_ADDNEWDOWNLOAD','Añadir nueva descarga');
define('_MODDOWNLOAD','Modificar descarga');
define('_WEBDOWNLOADSADMIN','Administración de Descargas');
define('_DNOREPORTEDBROKEN','No hay informe de enlaces rotos');
define('_DUSERREPBROKEN','Descarga rota reportada por usuario');
define('_DIGNOREINFO','Ignorar (Borra todas las <b><i>peticiones</i></b> para una descarga dada)');
define('_DDELETEINFO','Borrar (Borra las <b><i>descargas rotas</i></b> y las <b><i>peticiones</i></b> para una descarga dada)');
define('_DOWNLOADOWNER','Dueño de la descarga');
define('_DUSERMODREQUEST','Peticiones de modificación de descarga del usuario');
define('_DOWNLOADVALIDATION','Aprobar descarga');
define('_CHECKALLDOWNLOADS','Verificar todas las descargas');
define('_VALIDATEDOWNLOADS','Aprobar descargas');
define('_NEWDOWNLOADADDED','Nueva descarga añadida a la Base de Datos');
