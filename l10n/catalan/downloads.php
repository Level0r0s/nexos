<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/catalan/downloads.php,v $
  $Revision: 1.4 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:49 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','La descàrrega no existeix.');
define('_CATEGORIES','Categories');
define('_LVOTES','vots');
define('_TOTALVOTES','Vots totals:');
define('_THEREARE','Hi ha');
define('_NOMATCHES','No hi ha registres per la seva consulta');
define('_SCOMMENTS','Comentaris');
define('_UNKNOWN','Desconegut');
define('_AUTHORNAME','Nom de l\'autor');
define('_AUTHOREMAIL','Email de l\'autor');
define('_DOWNLOADNAME','Nom del programa');
define('_ADDTHISFILE','Agregar aquest arxiu');
define('_INBYTES','en bytes');
//define('_FILESIZE','Tamany de l'arxiu');
//define('_VERSION','Versió');
//define('_AUTHOR','Autor');
define('_HOMEPAGE','Pàgina d\'inici');
define('_DOWNLOADNOW','Descarregar aquest arxiu ara!');
define('_RATERESOURCE','Valorar recurs');
define('_FILEURL','URL de l\'arxiu');
define('_ADDDOWNLOAD','Afegir descàrrega');
define('_DOWNLOADSMAIN','Índex');
define('_DOWNLOADCOMMENTS','Comentaris de la descàrrega');
define('_DOWNLOADSMAINCAT','Categoria de la descàrrega');
define('_ADDADOWNLOAD','Afegir una descàrrega');
define('_DSUBMITONCE','Enviar descàrrega només una vegada.');
define('_DPOSTPENDING','Tots els recursos es verifiquen abans de publicar.');
define('_RESSORTED','Recurs ordenat per');
define('_DOWNLOADSNOTUSER1','No estàs registrat o no t\'has connectat com a usuari.');
define('_DOWNLOADSNOTUSER2','Si estiguessis registrat podries afegir arxius per a descarregar en aquest espai web.');
define('_DOWNLOADSNOTUSER3','Registrar-te com a usuari és un procés ràpid i senzill.');
define('_DOWNLOADSNOTUSER4','Per què requerim registre per accedir a certes funcions?');
define('_DOWNLOADSNOTUSER5','Per a poder oferir-te únicament el contingut de més alta qualitat,');
define('_DOWNLOADSNOTUSER6','cada ítem és revisat individualment i aprovat pel nostre staff.');
define('_DOWNLOADSNOTUSER7','confiem en oferir-te informació valuosa.');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink("Your_Account").'">Registrar-se</a>');
define('_DOWNLOADALREADYEXT','ERROR: Aquesta URL ja és a la nostra base de dades!');
define('_DOWNLOADNOTITLE','ERROR: Necessites posar un títol per la teva URL!');
define('_DOWNLOADNOURL','ERROR: Necessites posar una URL per la teva URL!');
define('_DOWNLOADNODESC','ERROR: Necessites posa una descripció per la teva URL!');
define('_DOWNLOADRECEIVED','Hem rebut la teva proposta. Gràcies!');
define('_NEWDOWNLOADS','Noves descàrregues');
define('_TOTALNEWDOWNLOADS','Descàrregues noves dels últims');
define('_DTOTALFORLAST','Total new downloads for last');
define('_DBESTRATED','Descàrregues millor valorades - Top');
define('_TRATEDDOWNLOADS','total de descàrregues valorades');
define('_SORTDOWNLOADSBY','Ordenar els enllaços per');
define('_DCATNEWTODAY','Descàrregues noves en aquesta categoria afegides avui');
define('_DCATLAST3DAYS','Descàrregues noves en aquesta categoria afegides en els darrers 3 dies');
define('_DCATTHISWEEK','Descàrregues noves en aquesta categoria afegides durant aquesta setmana');
define('_DDATE1','Data (descàrregues antigues mostrades primer)');
define('_DDATE2','Data (descàrregues noves mostrades primer)');
define('_DOWNLOADS','Descàrregues');
define('_DOWNLOADPROFILE','Perfil de descàrrega');
define('_DOWNLOADRATINGDET','Detalls de la valoració de l\'enllaç');
define('_EDITTHISDOWNLOAD','Editar aquesta descàrrega');
define('_DOWNLOADRATING','Valoració de la descàrrega');
define('_DOWNLOADVOTE','Vota!');
define('_DONLYREGUSERSMODIFY','Només els usuaris registrats poden suggerir modificacions de descàrregues. Si us plau <a href="'.getlink("Your_Account").'">registra\'t o inicia la sessió</a>.');
define('_REQUESTDOWNLOADMOD','Demanar informació de la descàrrega');
define('_DOWNLOADID','ID de la descàrrega');
define('_DLETSDECIDE','Valoracions d\'usuaris com tu ajuden a altres visitants a decidir millor què descarregar-se.');
define('_DRATENOTE4','Pots veure una llista dels <a href="'.getlink("Downloads&amp;d_op=TopRated").'">recursos millor valorats</a>.');
define('_POPULAR','Popular');
define('_TOPRATED','Millor valorats');
define('_ADDITIONALDET','Detalls addicionals');
define('_EDITORREVIEW','Ressenya de l\'editor');
define('_REPORTBROKEN','Informar d\'un enllaç trencat');
define('_AND','i');
define('_INDB','a la nostra base de dades');
define('_INSTRUCTIONS','Instruccions');
define('_USERANDIP','El nom d\'usuari la IP seran registrades, així que si us plau, no abuseu del sistema.');
define('_LDESCRIPTION','Descripció: (255 caràcters màxim)');
define('_CHECKFORIT','No has escrit un email. Igualment, revisarem el teu enllaç aviat.');
define('_LASTWEEK','Darrera setmana');
define('_LAST30DAYS','Darrers 30 dies');
define('_1WEEK','1 setmana');
define('_2WEEKS','2 setmanes');
define('_30DAYS','30 dies');
define('_ADDEDON','Agregat el');
define('_RATING','Valoració');
define('_DETAILS','Detalls');
define('_OF','de');
define('_TVOTESREQ','Mínim de vots necessaris');
define('_SHOWTOP','Mostrar Top');
define('_MOSTPOPULAR','Més popular - Top');
define('_OFALL','de tot');
define('_POPULARITY','Popularitat');
define('_SELECTPAGE','Seleccionar pàgina');
define('_MAIN','Principal');
define('_NEWTODAY','Nou avui');
define('_NEWLAST3DAYS','Nou en els darrers 3 dies');
define('_NEWTHISWEEK','Nou aquesta setmana');
define('_POPULARITY1','Popularitat (de menys a més hits)');
define('_POPULARITY2','Popularitat (de més a menys hits)');
define('_TITLEAZ','Títol (A - Z)');
define('_TITLEZA','Títol (Z - A)');
define('_RATING1','Valoració (de menor a major)');
define('_RATING2','Valoració (de major a menor)');
define('_SEARCHRESULTS4','Cercar resultats per');
define('_USUBCATEGORIES','Sub-categories');
define('_TRY2SEARCH','Intenta cercar');
define('_INOTHERSENGINES','en altres motors de recerca');
define('_EDITORIAL','Editorial');
define('_EDITORIALBY','Editorial per');
define('_NOEDITORIAL','L\'editorial no està actualment disponible en aquest espai web.');
define('_RATETHISSITE','Valorar aquest espai web');
define('_ISTHISYOURSITE','És aquest el teu recurs?');
define('_ALLOWTORATE','Permet que els usuaris ho valorin des del teu lloc web!');
define('_OVERALLRATING','Valoració general!');
define('_TOTALOF','Total de');
define('_USER','Usuari');
define('_USERAVGRATING','Valoració promitja dels usuaris');
define('_NUMRATINGS','Número de valoracions');
define('_REGISTEREDUSERS','Usuaris registrats');
define('_NUMBEROFRATINGS','Número de valoracions');
define('_NOREGUSERSVOTES','No hi ha vots d\'usuaris registrats');
define('_BREAKDOWNBYVAL','Histograma per valoració');
define('_LTOTALVOTES','vots totals');
define('_HIGHRATING','Alta valoració');
define('_LOWRATING','Baixa valoració');
define('_NUMOFCOMMENTS','Número de comentaris');
define('_WEIGHNOTE','* Note: This Resource weighs Registered vs. Unregistered users ratings');
define('_NOUNREGUSERSVOTES','No hi ha vots de no registrats');
define('_WEIGHOUTNOTE','* Nota: Aquest espai diferencia els vots dels usuaris registrats dels foranis');
define('_NOOUTSIDEVOTES','Vots d\'usuaris');
define('_OUTSIDEVOTERS','Outside Voters');
define('_UNREGISTEREDUSERS','Usuaris no registrats');
define('_PROMOTEYOURSITE','Promoure el teu lloc web');
define('_PROMOTE01','Potser t\'interessa una de les opcions que tenim per a la "Valoració d\'altres llocs". Aquestes et permeten posar una imatge (o un formulari de votació) al teu lloc web per tal d\'incrementar els seus vots. Si et plau, tria una d\'aquestes opcions:');
define('_TEXTLINK','Text de l\'enllaç');
define('_PROMOTE02','Una manera de lligar el formulari d\'avaluació és posar aquest simple text:');
define('_HTMLCODE1','El codi HTML que pots utilitzar en aquest cas, és el següent:');
define('_THENUMBER','El número');
define('_IDREFER','en el codi HTML de referència de la teva ID del lloc a la base de dades de '.$sitename.'. Verifica que aquest número hi és present.');
define('_BUTTONLINK','Botó d\'enllaç');
define('_PROMOTE03','Si vols més que un simple text, pots utilitzar un petit botó com:');
define('_RATEIT','Vota per aquest lloc!');
define('_HTMLCODE2','El codi font pel botó anterior és:');
define('_REMOTEFORM','Formulari de valoració remota');
define('_PROMOTE04','Si fas trampes en això, treurem el teu enllaç. Una vegada declarat això, així és com es veu el formulari de valoració.');
define('_VOTE4THISSITE','Votar per aquest lloc!');
define('_HTMLCODE3','Utilitzant aquest formulari permetrà als usuaris valorar el seu lloc directament des de la seva pàgina i serà gravada aquí. El formulari anterior està desconnectat, però el següent codi treballarà si el copia i enganxa a la seva pàgina. El codi és el següent:');
define('_PROMOTE05','Gràcies!, i bona sort amb la valoració!');
define('_THANKSBROKEN','Gràcies per ajudar a mantenir íntegrament aquest directori.');
define('_SECURITYBROKEN','Per raons de seguretat el teu nom d\'usuari i la direcció IP seran registrats temporalment.');
define('_THANKSFORINFO','Gràcies per la informació.');
define('_LOOKTOREQUEST','Analitzarem la petició aviat.');
define('_SENDREQUEST','Enviar petició');
define('_THANKSTOTAKETIME','Gràcies pel seu temps en l'avaluació d'aquest espai a');
define('_RETURNTO','Tornar a');
define('_RATENOTE1','Si us plau, no voteu el mateix enllaç més d\'un cop.');
define('_RATENOTE2','L\'escala va de 1 a 10, essent 1 pobre i 10 excel·lent.');
define('_RATENOTE3','Tracti de ser objectiu en el vot, si rep sempre 1 o 10 la valoració no serà útil.');
define('_RATENOTE5','No votis pel teu propi recurs o el del teu competidor.');
define('_YOUAREREGGED','Ets un usuari registrat i estàs connectat.');
define('_FEELFREE2ADD','Ets lliure d\'agregar un comentari sobre aquest espai.');
define('_YOUARENOTREGGED','No ets un usuari registrat o no estàs connectat.');
define('_IFYOUWEREREG','Si estiguessis registrat podries haver publicat comentaris en aquest espai web.');
define('_MODIFY','Modificar');
define('_COMPLETEVOTE1','El teu vot és apreciat.');
define('_COMPLETEVOTE2','You have already voted for this resource in the past '.$anonwaitdays.' day(s).');
define('_COMPLETEVOTE3','Vota per un recurs una sola vegada. <br />Tots els vots seran revisats.');
define('_COMPLETEVOTE4','No pots votar per un recurs que tu has enviat. <br />Tots els vots seran revisats.');
define('_COMPLETEVOTE5','No has seleccionat un valor - vot no registrat');
define('_COMPLETEVOTE6','Només s\'admet un vot per direcció IP cada '.$outsidewaitdays.' dia.');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDDURL','Afegeix aquesta URL');
define('_EZTRANSFERDOWNLOAD','Transfereix');
define('_EZTRANSFERDOWNLOADS','Transfereix tots els downloads de categoria');
define('_DELEZDOWNLOADSCATWARNING','COMPTE: Estàs segur de voler esborrar aquesta categoria? Esborraràs totes les subcategories i descàrregues, també!');
define('_DELCONTENTCAT','COMPTE: Estàs segur que desitges esborrar aquesta categoria? Les pàgines sota aquesta categoria, si existeixen, no seran esborrades, però no tindran assignada cap categoria.');
define('_DELCATEGORY','Esborrar categoria');
define('_DOWNLOADTITLE','Títol del programa');
define('_DOWNLOADSINDB','descàrregues a la nostra Base de Dades');
define('_DOWNLOADSWAITINGVAL','Descàrregues esperant validació');
define('_CLEANDOWNLOADSDB','Esborrar els vots');
define('_BROKENDOWNLOADSREP','Notificar enllaços trencats');
define('_DOWNLOADMODREQUEST','Peticions de modificació');
define('_ADDNEWDOWNLOAD','Afegir nova descàrrega');
define('_MODDOWNLOAD','Modificar descàrrega');
define('_WEBDOWNLOADSADMIN','Administració de descàrregues');
define('_DNOREPORTEDBROKEN','No hi ha informe d\'enllaços trencats.');
define('_DUSERREPBROKEN','Descàrrega reportada per l\'usuari');
define('_DIGNOREINFO','Ignorar (Esborra totes les <b><i>peticions</b></i> per a una descàrrega donada)');
define('_DDELETEINFO','Esborrar (Esborra les <b><i>descàrregues trencades</b></i> i les <b><i>peticions</b></i> per a una descàrrega donada)');
define('_DOWNLOADOWNER','Propietari de la descàrrega');
define('_DUSERMODREQUEST','Peticions de modificació de descàrrega de l\'usuari');
define('_DOWNLOADVALIDATION','Aprovar la descàrrega');
define('_CHECKALLDOWNLOADS','Verificar totes les descàrregues');
define('_VALIDATEDOWNLOADS','Aprovar descàrregues');
define('_NEWDOWNLOADADDED','Nova descàrrega afegida a la base de dades');
