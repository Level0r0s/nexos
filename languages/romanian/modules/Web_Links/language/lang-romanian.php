<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com
  Based on Journey Links Hack
  Copyright (c) 2000 by James Knickelbein
  Journey Milwaukee
  http://www.journeymilwaukee.com
  
  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version.
  This program comes without any warranty.
  $Source: /cvs/languages/romanian/modules/Web_Links/language/lang-romanian.php,v $
  $Revision: 1.5 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:41 $
***********************************************************************/
if (!defined('CPG_NUKE')) { die('You do not have permission to access this file'); }  
  
global $sitename, $anonwaitdays, $outsidewaitdays;
define('_PREVIOUS','Pagina anterioară');
define('_NEXT','Pagina următoare');
define('_YOURNAME','Numele Dvs.');
define('_CATEGORIES','Categorii');
define('_LVOTES','voturi');
define('_TOTALVOTES','Total voturi:');
define('_LINKTITLE','Titlul linkului');
define('_HITS','Vizite');
define('_THEREARE','Sunt');
define('_NOMATCHES','Nu au fost găsiţi termeni potriviţi cererii Dvs.');
define('_SCOMMENTS','Comentarii');
define('_ADDLINK','Adăugaţi link');
define('_POPULAR','Popular');
define('_TOPRATED','Cele mai populare');
define('_RANDOM','Aleator');
define('_LINKSMAIN','Pagina principală de linkuri');
define('_LINKCOMMENTS','Comentarii link');
define('_ADDITIONALDET','Detalii suplimentare');
define('_EDITORREVIEW','Editorul review-ului');
define('_REPORTBROKEN','Anuntaţi un link defect');
define('_LINKSMAINCAT','Categorii principale de linkuri');
define('_AND','şi');
define('_INDB','în baza noastră de date');
define('_ADDALINK','Adăugaţi link');
define('_INSTRUCTIONS','Instrucţiuni');
define('_SUBMITONCE','Trimiteţi un singur link doar o singură dată.');
define('_POSTPENDING','Toate linkurile sunt verificate înainte de publicare');
define('_USERANDIP','Numele de utilizator şi IP-ul sunt înregistrate, aşa că vă rugăm nu abuzaţi de sistem.');
define('_PAGETITLE','Titlul paginii');
define('_PAGEURL','URL-ul paginii');
define('_YOUREMAIL','Email-ul Dvs.');
define('_LDESCRIPTION','Descriere: (maxim 255 caractere)');
define('_ADDURL','Adăugaţi acest URL');
define('_LINKSNOTUSER1','Nu sunteţi utilizator înregistrat sau nu v-aţi logat.');
define('_LINKSNOTUSER2','Dacă sunteţi înregistrat puteţi adăuga linkuri în acest sit.');
define('_LINKSNOTUSER3','Procesul de înregistrare usor şi rapid.');
define('_LINKSNOTUSER4','De ce este necesară înregistrarea pentru accesul la anumite facilitati?');
define('_LINKSNOTUSER5','Doar aşa vă putem oferi conţinut de cea mai bună calitate.');
define('_LINKSNOTUSER6','fiecare articol este verificat individual şi aprobat de catre personalul nostru.');
define('_LINKSNOTUSER7','Sperăm să vă oferim doar informaţii de valoare.');
define('_LINKSNOTUSER8','<a href="modules.php?name=Your_Account">Înregistraţi-vă pentru a vă crea un cont</a>');
define('_LINKALREADYEXT','EROARE: Acest URL este prezent deja în baza noastra de date!');
define('_LINKNOTITLE','EROARE: Trebuie sa scrieţi un TITLU pentru URL-ul dvs.!');
define('_LINKNOURL','EROARE: Trebuie sa scrieţi un URL!');
define('_LINKNODESC','EROARE: Trebuie sa scrieţi o DESCRIERE pentru URL-ul dvs.');
define('_LINKRECEIVED','Am primit linkul trimis de Dvs. Vă mulţumim!');
define('_EMAILWHENADD','Veţi primi un e-mail când va fi aprobat.');
define('_CHECKFORIT','Nu aţi furnizat o adresa de e-mail dar vom verifica linkul Dvs. curând.');
define('_NEWLINKS','Linkuri noi');
define('_TOTALNEWLINKS','Total linkuri noi');
define('_LASTWEEK','Săptămâna trecută');
define('_LAST30DAYS','Ultimele 30 zile');
define('_1WEEK','1 săptămână');
define('_2WEEKS','2 săptămâni');
define('_30DAYS','30 zile');
define('_TOTALFORLAST','Total linkuri noi în ultimele');
define('_ADDEDON','Adăugat la');
define('_RATING','Apreciere');
define('_RATESITE','Apreciaţi acest sit');
define('_DETAILS','Detalii');
define('_BESTRATED','Cele mai apreciate linkuri - Top');
define('_OF','din');
define('_TRATEDLINKS',' linkuri clasificate');
define('_TVOTESREQ','minimum de voturi necesare');
define('_SHOWTOP','Arătaţi Top');
define('_MOSTPOPULAR','Cele mai populare - Top');
define('_OFALL','din toate');
define('_SORTLINKSBY','Sortaţi linkuri pe');
define('_SITESSORTED','Situri sortate pe');
define('_POPULARITY','Popularitate');
define('_SELECTPAGE','Selectaţi pagina');
define('_MAIN','Start');
define('_NEWTODAY','Noi, astăzi');
define('_NEWLAST3DAYS','Noi, în ultimele 3 zile');
define('_NEWTHISWEEK','Noi, săptămâna aceasta');
define('_CATNEWTODAY','Linkuri noi în această categorie adăugate astăzi');
define('_CATLAST3DAYS','Linkuri noi în această categorie adăugate în ultimele 3 zile');
define('_CATTHISWEEK','Linkuri noi în această categorie adăugate săptămâna aceasta');
define('_POPULARITY1','Popularitate (de jos în sus)');
define('_POPULARITY2','Popularitate (de sus în jos)');
define('_TITLEAZ','Titlu (A to Z)');
define('_TITLEZA','Titlu (Z to A)');
define('_DATE1','Data (Începind cu linkuri vechi)');
define('_DATE2','Data (Începind cu linkuri noi)');
define('_RATING1','Apreciere (De la punctaj mic la mare)');
define('_RATING2','Apreciere (De la punctaj mare la mic)');
define('_SEARCHRESULTS4','Rezultatele cautări pentru');
define('_USUBCATEGORIES','Subcategorii');
define('_LINKS','Linkuri');
define('_TRY2SEARCH','Încercaţi să căutaţi');
define('_INOTHERSENGINES','în alte motoare de căutare');
define('_EDITORIAL','Editorial');
define('_LINKPROFILE','Profilul linkului');
define('_EDITORIALBY','Editorial de');
define('_NOEDITORIAL','Momentan nu există nici un editorial pentru acest sit.');
define('_VISITTHISSITE','Vizitaţi acest website');
define('_RATETHISSITE','Apreciaţi această resursă');
define('_ISTHISYOURSITE','Resursa aceasta este a Dvs.?');
define('_ALLOWTORATE','Permiteţi altor utilizatori să aprecieze situl dvs.!');
define('_LINKRATINGDET','Detalii despre aprecierea linkului');
define('_OVERALLRATING','Apreciere globală');
define('_TOTALOF','Total din');
define('_USER','Utilizator');
define('_USERAVGRATING','Aprecierea medie a utilizatorilor');
define('_NUMRATINGS','# de Aprecieri');
define('_EDITTHISLINK','Editaţi acest link');
define('_REGISTEREDUSERS','Utilizatori înregistraţi');
define('_NUMBEROFRATINGS','Numărul de aprecieri');
define('_NOREGUSERSVOTES','Nici un vot de la useri înregistraţi');
define('_BREAKDOWNBYVAL','Impărţirea aprecierilor pe valoare');
define('_LTOTALVOTES','total voturi');
define('_LINKRATING','Apreciere linkuri');
define('_HIGHRATING','Apreciere ridicată');
define('_LOWRATING','Apreciere scăzută');
define('_NUMOFCOMMENTS','Numărul de comentarii');
define('_WEIGHNOTE','* Notiţă: Această resursă stabileşte aprecierea utilizatorilor înregistraţi vis-a-vis de cei neînregistraţi');
define('_NOUNREGUSERSVOTES','Nici un vot de utilizator neînregistrat');
define('_WEIGHOUTNOTE','* Notiţă: Această resursă stabileşte aprecierea votanţilor înregistraţi vis-a-vis de cei neînregistraţi');
define('_NOOUTSIDEVOTES','Nici un vot din afară');
define('_OUTSIDEVOTERS','Votanţi din afară');
define('_UNREGISTEREDUSERS','Utilizatori neînregistraţi');
define('_PROMOTEYOURSITE','Promovaţi situl Dvs.');
define('_PROMOTE01','Poate sunteţi interesat de opţiunile multiple pe care le avem la secţiunea \'Apreciaţi un sit\'. Acestea vă permit să puneţi o imagine (sau chiar un formular de notare) pe situl dumneavoastră pentru a mări numărul de voturi pe care le primeşte resursa dumneavoastră. Vă rugăm sa alegeţi una din opţiunile de mai jos:');
define('_TEXTLINK','Textul linkului ');
define('_PROMOTE02','O metodă de legare către formularul de votare este printr-un simplu text tip link:');
define('_HTMLCODE1','Codul HTML pe care ar trebui să îl folositi este, în acest caz:');
define('_THENUMBER','Numărul');
define('_IDREFER','în sursa HTML numărul este ID-ul Dvs. în banca de date de pe situl $sitename. Asiguraţi-vă ca acest număr să fie prezent.');
define('_BUTTONLINK','Buton Link ');
define('_PROMOTE03','Dacă doriţi mai mult decât un texp tip link puteţi să folosiţi un buton link:');
define('_RATEIT','Apreciaţi acest sit!');
define('_HTMLCODE2','Codul sursă pentru butonul de mai sus este:');
define('_REMOTEFORM','Formular de apreciere de la distanţă');
define('_PROMOTE04','Dacă încercaţi să ne păcăliţi vă vom şterge linkul. Acestea fiind spuse, aşa va arăta formularul Dvs. de notare de la distanţă.');
define('_VOTE4THISSITE','Votaţi pentru acest sit!');
define('_LINKVOTE','Votaţi!');
define('_HTMLCODE3','Folosind acest formular veţi permite utilizatorilor să aprecieze resursa Dvs. direct de pe situl dvs. (celălat sit) însă notarea va fi înregistrată aici. Formularul de mai sus este dezactivat, dar următorul cod sursă va funcţiona dacă îl veţi scrie în pagina Dvs. Codul sursă arată ca şi mai jos:');
define('_PROMOTE05','Vă mulţumim! Mult succes!');
define('_THANKSBROKEN','Vă mulţumim pentru că ne-aţi ajutat să menţinem integritatea acestui director.');
define('_THANKSFORINFO','Vă mulţumim pentru informaţie.');
define('_LOOKTOREQUEST','Vom analiza cererea Dvs. în scurt timp.');
define('_ONLYREGUSERSMODIFY','Numai utilizatorii înregistraţi pot sugera o modificare de linkuri. Vă rugăm <a href="modules.php?name=Your_Account">înregistraţi-vă sau login</a>.');
define('_REQUESTLINKMOD','Cerere modificare de link');
define('_LINKID','ID-ul linkului');
define('_SENDREQUEST','Trimiteţi cererea');
define('_THANKSTOTAKETIME','Vă mulţumim pentru timpul acordat aprecierii sitului');
define('_LETSDECIDE','Colaborarea cu acei utilizatori ca Dvs. ajută alţi vizitatorii să decidă mai bine ce link să urmeze.');
define('_RETURNTO','Înapoi la');
define('_RATENOTE1','Vă rugăm să nu votaţi pentru aceeaşi resursă mai mult de o singură dată.');
define('_RATENOTE2','Scara este de la 1 la 10, 1 fiind cel mai prost iar 10 fiind excelent.');
define('_RATENOTE3','Vă rugăm să fiţi obiectiv în notare, dacă veţi da numai 1 şi 10, notările nu vor fi concludente.');
define('_RATENOTE4','Puteţi vedea o listă a <a href="modules.php?name=Web_Links&amp;l_op=TopRated">Celor mai apreciate resurse</a>.');
define('_RATENOTE5','Nu votaţi pentru resursa Dvs. sau a unui competitor.');
define('_YOUAREREGGED','Sunteţi utilizator înregistrat şi sunteţi logat.');
define('_FEELFREE2ADD','Dacă doriţi puteţi să adăugaţi un comentariu despre acest sit.');
define('_YOUARENOTREGGED','Nu sunteţi un utilizator înregistrat sau nu sunteţi logat.');
define('_IFYOUWEREREG','Dacă aţi fi înregistrat aţi putea să adăugaţi comentarii despre acest sit.');
define('_MODIFY','Modificaţi');
define('_COMPLETEVOTE1','Mulţumim pentru votul Dvs.');
define('_COMPLETEVOTE2','Aţi mai votat pentru această resursă acum $anonwaitdays zile.');
define('_COMPLETEVOTE3','Votaţi pentru o resursă, o singură dată.<br>Toate voturile sunt înregistrate şi revăzute.');
define('_COMPLETEVOTE4','Nu puteţi vota pentru un link pe care l-aţi trimis.<br>Toate voturile sunt înregistrate şi revăzute.');
define('_COMPLETEVOTE5','Nu aţi selectat o notă - nu s-a adaugat nici un vot');
define('_COMPLETEVOTE6','Este permis numai un singur vot de la o adresa IP, la un interval de cel puţin $outsidewaitdays zile.');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDMAINCATEGORY','Adăugaţi o categorie principală');
define('_ADDSUBCATEGORY','Adăugaţi o sub-categorie');
define('_WEBLINKSADMIN','Adminstrare Linkuri');
define('_EZTRANSFERLINKS','Transferaţi toate linkurile din această categorie');
define('_CLEANLINKSDB','Ştergeţi voturile pentru link-uri');
define('_EZTRANSFER','Transferaţi');
define('_BROKENLINKSREP','Raportări de link-uri defecte');
define('_LINKMODREQUEST','Cerere de modificare link-uri');
define('_ADDNEWLINK','Adăugaţi un link nou');
define('_MODLINK','Modificaţi un link');
define('_LINKSINDB','linkuri în baza noastră de date');
define('_LINKSWAITINGVAL','Linkuri în aşteptare pentru validare');
define('_ERRORURLEXIST','EROARE: Acest URL este deja în baza de date!');
define('_ERRORNOTITLE','EROARE: Trebuie să daţi un titlu pentru URL-ul Dvs,!');
define('_ERRORNOURL','EROARE: Trebuie să introduceţi un URL pentru URL-ul dvs.!');
define('_ERRORNODESCRIPTION','EROARE: trebuie să faceţi o DESCRIERE pentru URL-ul Dvs.!');
define('_NEWLINKADDED','Link nou adăugat în baza de date');
define('_YOURLINKAT','Linkul Dvs. la');
define('_LINKVALIDATION','Validare link');
define('_CHECKALLLINKS','Verificaţi toate linkurile');
//define('_VALIDATELINKS','Validate Links');
//define('_FAILED','Failed!');
//define('_BEPATIENT','(please be patient)');
//define('_VALIDATINGCAT','Validating Category (and all subcategories)');
//define('_VALIDATINGSUBCAT','Validating Sub-Category');
?>