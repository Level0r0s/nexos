<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/galego/downloads.php,v $
  $Revision: 9.6 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:54 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','The download you\'ve requested doesn\'t exists.');
define('_CATEGORIES','Categorías');
define('_LVOTES','Votos');
define('_TOTALVOTES','Votos Totales:');
define('_THEREARE','Hai');
define('_NOMATCHES','Non hai rexistros para a súa consulta');
define('_SCOMMENTS','Comentarios');
define('_UNKNOWN','Descoñecido');
define('_AUTHORNAME','Author\'s Name');
define('_AUTHOREMAIL','Author\'s Email');
define('_DOWNLOADNAME','Program Name');
define('_ADDTHISFILE','Add this file');
define('_INBYTES','in bytes');
//define('_FILESIZE','Tamaño do Arquivo');
//define('_VERSION','Versión');
//define('_AUTHOR','Autor');
define('_HOMEPAGE','Páxina de Inicio');
define('_DOWNLOADNOW','Descargar este arquivo agora.');
define('_RATERESOURCE','Rate Resource');
define('_FILEURL','URL do arquivo');
define('_ADDDOWNLOAD','Engadir Descarga');
define('_DOWNLOADSMAIN','Índice');
define('_DOWNLOADCOMMENTS','Comentarios da descarga');
define('_DOWNLOADSMAINCAT','Categoría da descarga');
define('_ADDADOWNLOAD','Engadir unha descarga');
define('_DSUBMITONCE','Submit a unique download only once.');
define('_DPOSTPENDING','All downloads are posted pending verification.');
define('_RESSORTED','Resources currently sorted by');
define('_DOWNLOADSNOTUSER1','You are not a registered user or you have not logged in.');
define('_DOWNLOADSNOTUSER2','If you were registered you could add downloads on this website.');
define('_DOWNLOADSNOTUSER3','Becoming a registered user is a quick and easy process.');
define('_DOWNLOADSNOTUSER4','Why do we require registration for access to certain features?');
define('_DOWNLOADSNOTUSER5','So we can offer you only the highest quality content,');
define('_DOWNLOADSNOTUSER6','each item is individually reviewed and approved by our staff.');
define('_DOWNLOADSNOTUSER7','We hope to offer you only valuable information.');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink("Your_Account").'">Register for an Account</a>');
define('_DOWNLOADALREADYEXT','ERROR: ¡Esta URL xa está na nosa Base de Datos!');
define('_DOWNLOADNOTITLE','ERROR: ¡Necesita por un Título para a súa URL!');
define('_DOWNLOADNOURL','ERROR: ¡Necesita por unha URL para a súa URL!');
define('_DOWNLOADNODESC','ERROR: ¡Necesita por unha Descripción para a súa URL!');
define('_DOWNLOADRECEIVED','Recibimos a súa proposta. Gracias!');
define('_NEWDOWNLOADS','Novas Descargas');
define('_TOTALNEWDOWNLOADS','Número total de novos enlaces');
define('_DTOTALFORLAST','Total new downloads for last');
define('_DBESTRATED','Best Rated Downloads - Top');
define('_TRATEDDOWNLOADS','total de descargas valoradas');
define('_SORTDOWNLOADSBY','Ordea-los enlaces por');
define('_DCATNEWTODAY','New Downloads in this Category Added Today');
define('_DCATLAST3DAYS','New Downloads in this Category Added in the last 3 days');
define('_DCATTHISWEEK','New Downloads in this Category Added this week');
define('_DDATE1','Date (Old Downloads Listed First)');
define('_DDATE2','Date (New Downloads Listed First)');
define('_DOWNLOADS','Descargas');
define('_DOWNLOADPROFILE','Perfil de descarga');
define('_DOWNLOADRATINGDET','Detalles da valoración do enlace');
define('_EDITTHISDOWNLOAD','Editar esta descarga');
define('_DOWNLOADRATING','Valoración da descarga');
define('_DOWNLOADVOTE','¡Vote!');
define('_DONLYREGUSERSMODIFY','Only registered users can suggest downloads modifications. Please <a href="'.getlink("Your_Account").'">register or login</a>.');
define('_REQUESTDOWNLOADMOD','Pedi-la modificación da descarga');
define('_DOWNLOADID','ID da Descarga');
define('_DLETSDECIDE','Input from users such as yourself will help other visitors better decide which downloads to click on.');
define('_DRATENOTE4','You can view a list of the <a href="'.getlink("Downloads&amp;d_op=TopRated").'">Top Rated Resources</a>.');
define('_POPULAR','Popular');
define('_TOPRATED','Mellores valorados');
define('_ADDITIONALDET','Detalles adicionales');
define('_EDITORREVIEW','Reseña do editor');
define('_REPORTBROKEN','Informar dun enlace roto');
define('_AND','e');
define('_INDB','na nosa base de datos');
define('_INSTRUCTIONS','Instruccións');
define('_USERANDIP','O nome de usuario e a IP serán rexistrados, así que por favor non abuse do sistema.');
define('_LDESCRIPTION','Descripción: (255 caracteres máx.)');
define('_CHECKFORIT','Non escribiu un E-Mail. De tóda-las maneiras, revisaremos o seu enlace pronto.');
define('_LASTWEEK','Última Semana');
define('_LAST30DAYS','Últimos 30 días');
define('_1WEEK','1 Semana');
define('_2WEEKS','2 Semanas');
define('_30DAYS','30 Días');
define('_ADDEDON','Engadido o');
define('_RATING','Valoración');
define('_DETAILS','Detalles');
define('_OF','de');
define('_TVOTESREQ','mínimo de votos necesarios');
define('_SHOWTOP','Mostrar Top');
define('_MOSTPOPULAR','Máis Popular - Top');
define('_OFALL','de todo');
define('_POPULARITY','Popularidade');
define('_SELECTPAGE','Seleccionar Páxina');
define('_MAIN','Principal');
define('_NEWTODAY','Novo Hoxe');
define('_NEWLAST3DAYS','Novo nos últimos 3 días');
define('_NEWTHISWEEK','Novo esta semana');
define('_POPULARITY1','Popularidade (de menos a máis hits)');
define('_POPULARITY2','Popularidade (de máis a menos hits)');
define('_TITLEAZ','Título (A - Z)');
define('_TITLEZA','Título (Z - A)');
define('_RATING1','Valoración (de menor a maior)');
define('_RATING2','Valoración (de maior a menor)');
define('_SEARCHRESULTS4','Buscar resultados por');
define('_USUBCATEGORIES','Sub-Categorías');
define('_TRY2SEARCH','Intente buscar');
define('_INOTHERSENGINES','noutros Motores de Búsqueda');
define('_EDITORIAL','Editorial');
define('_EDITORIALBY','Editorial por');
define('_NOEDITORIAL','A editorial non está actualmente dispoñible neste sitio web.');
define('_RATETHISSITE','Valorar este sitio web');
define('_ISTHISYOURSITE','¿É este o seu recurso?');
define('_ALLOWTORATE','Permita que os usuarios o valoren desde o seu sitio Web!');
define('_OVERALLRATING','Valoración Xeral');
define('_TOTALOF','Total de');
define('_USER','Usuario');
define('_USERAVGRATING','Valoración promedio dos usuarios');
define('_NUMRATINGS','Num. de valoracións');
define('_REGISTEREDUSERS','Usuarios rexistrados');
define('_NUMBEROFRATINGS','Número de valoracións');
define('_NOREGUSERSVOTES','Non hai votos de usuarios rexistrados');
define('_BREAKDOWNBYVAL','Histograma por valoración');
define('_LTOTALVOTES','votos totales');
define('_HIGHRATING','Alta valoración');
define('_LOWRATING','Baixa valoración');
define('_NUMOFCOMMENTS','Número de comentarios');
define('_WEIGHNOTE','* Nota: Este sitio diferencia os votos dos usuarios rexistrados dos non rexistrados');
define('_NOUNREGUSERSVOTES','Non hai votos de non rexistrados');
define('_WEIGHOUTNOTE','** Nota: Este sitio diferencia os votos dos usuarios rexistrados dos demáis');
define('_NOOUTSIDEVOTES','Votos de usuarios');
define('_OUTSIDEVOTERS','Votos de anónimos');
define('_UNREGISTEREDUSERS','Usuarios non rexistrados');
define('_PROMOTEYOURSITE','Promove-lo seu sitio web');
define('_PROMOTE01','Tal vez lle interesa unha das opcións que temos para a \'Valoración de outros sitios\'. Éstas permítenlle por unha imaxe (ou un formulario de votación) no seu sitio Web para incrementa-los seus votos. Por favor escolla unha destas opcións:');
define('_TEXTLINK','Texto do enlace');
define('_PROMOTE02','Unha maneira de liga-lo formulario de evaluación é por este simple texto:');
define('_HTMLCODE1','O código HTML que pode usar neste caso, é o seguinte:');
define('_THENUMBER','O Número');
define('_IDREFER','no código HTML referencia o seu ID de sitio na Base de Datos de $sitename. Verifique que este número está presente.');
define('_BUTTONLINK','Botón de Enlace');
define('_PROMOTE03','Se quere máis que un simple texto, pode utilizar un pequeno botón como:');
define('_RATEIT','Valore este sitio');
define('_HTMLCODE2','O código fuente para o botón anterior é:');
define('_REMOTEFORM','Formulario de valoración remota');
define('_PROMOTE04','Se fai trampas nisto, quitaremos o seu enlace. Isto é como aparece o formulario de valoración.');
define('_VOTE4THISSITE','Votar por este sitio');
define('_HTMLCODE3','Usando este formulario permitirá ós usuarios valora-lo seu sitio directamente desde a súa páxina e será grabada aquí. O formulario anterior está desconectado, pero o seguinte código traballará se o copia e pega na súa páxina. O código é o seguinte:');
define('_PROMOTE05','¡Gracias!, e boa sorte coa súa valoración.');
define('_THANKSBROKEN','Gracias por axudar a mante-la integridade deste directorio.');
define('_SECURITYBROKEN','Por razóns de seguridade o seu nombre de usuario e dirección IP serán temporalmente rexistrados.');
define('_THANKSFORINFO','Gracias pola información.');
define('_LOOKTOREQUEST','Analizaremos a súa petición pronto.');
define('_SENDREQUEST','Enviar Petición');
define('_THANKSTOTAKETIME','Gracias polo seu tempo na evaluación deste sitio en');
define('_RETURNTO','Voltar a');
define('_RATENOTE1','Por favor non vote ó mesmo enlace máis dunha vez');
define('_RATENOTE2','A escala vai de 1 a 10, sendo 1 Pobre e 10 Excelente.');
define('_RATENOTE3','Sexa obxetivo no seu voto, se se recibe sempre 1 ou 10, a valoración non será útil.');
define('_RATENOTE5','Non vote polo seu propio recurso ou o do seu competidor.');
define('_YOUAREREGGED','Vostede é un usuario rexistrado e está conectado.');
define('_FEELFREE2ADD','Síntase libre de engadir un comentario sobre este sitio.');
define('_YOUARENOTREGGED','Vostede non é un usuario rexistrado ou non se conectou.');
define('_IFYOUWEREREG','Se vostede estivera rexistrado podería ter publicado comentarios neste sitio web.');
define('_MODIFY','Modificar');
define('_COMPLETEVOTE1','O seu voto é tido en conta.');
define('_COMPLETEVOTE2','Xa votou por este recurso nos último(s) $anonwaitdays día(s).');
define('_COMPLETEVOTE3','Vote por un recurso só unha vez.<br>Tódo-los votos son revisados.');
define('_COMPLETEVOTE4','Non pode votar por un enlace que vostede enviou.<br>Tódo-los votos son revisados.');
define('_COMPLETEVOTE5','Se non hai ratio seleccionado, os votos non serán contados');
define('_COMPLETEVOTE6','Só un voto permitido por direción IP cada $outsidewaitdays día(s).');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDDURL','Add this URL');
define('_EZTRANSFERDOWNLOAD','Transfer');
define('_EZTRANSFERDOWNLOADS','Transfer all downloads from category');
define('_DELEZDOWNLOADSCATWARNING','WARNING : Are you sure you want to delete this category? You will delete all sub-categories and attached downloads as well!');
define('_DELCONTENTCAT','WARNING: Are you sure you want to delete this category? Pages under this category, if they exist, will not be removed, but will not be attached to any category.');
define('_DELCATEGORY','Delete Category');
define('_DOWNLOADTITLE','Download Title');
define('_DOWNLOADSINDB','Downloads in our Database');
define('_DOWNLOADSWAITINGVAL','Downloads Waiting for Validation');
define('_CLEANDOWNLOADSDB','Clean Downloads Votes');
define('_BROKENDOWNLOADSREP','Broken Downloads Reports');
define('_DOWNLOADMODREQUEST','Download Modification Requests');
define('_ADDNEWDOWNLOAD','Add a New Download');
define('_MODDOWNLOAD','Modify a Download');
define('_WEBDOWNLOADSADMIN','Web Downloads Administration');
define('_DNOREPORTEDBROKEN','No reported broken downloads.');
define('_DUSERREPBROKEN','User Reported Broken Downloads');
define('_DIGNOREINFO','Ignore (Deletes all <b><i>requests</i></b> for a given download)');
define('_DDELETEINFO','Delete (Deletes <b><i>broken download</i></b> and <b><i>requests</i></b> for a given download)');
define('_DOWNLOADOWNER','Download Owner');
define('_DUSERMODREQUEST','User Download Modification Requests');
define('_DOWNLOADVALIDATION','Download Validation');
define('_CHECKALLDOWNLOADS','Check ALL Downloads');
define('_VALIDATEDOWNLOADS','Validate Downloads');
define('_NEWDOWNLOADADDED','New Download added to the Database');
