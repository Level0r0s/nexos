<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/romanian/downloads.php,v $
  $Revision: 9.8 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:40:00 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','Downloadul cerut de Dvs. nu există.');
define('_CATEGORIES','Categorii');
define('_LVOTES','voturi');
define('_TOTALVOTES','Total voturi:');
define('_THEREARE','Sunt');
define('_NOMATCHES','Nu s-a găsit nici un rezultat');
define('_SCOMMENTS','Comentarii');
define('_UNKNOWN','Necunoscut');
define('_AUTHORNAME','Numele autorului');
define('_AUTHOREMAIL','Email-ul autorului');
define('_DOWNLOADNAME','Numele programului');
define('_ADDTHISFILE','Adăugaţi acest fişier');
define('_INBYTES','în octeţi');
//define('_FILESIZE','Dimensiune');
//define('_VERSION','Versiune');
//define('_AUTHOR','Autor');
define('_HOMEPAGE','Pagina web');
define('_DOWNLOADNOW','Descărcaţi acest fişier acum!');
define('_RATERESOURCE','Daţi o notă');
define('_FILEURL','Link');
define('_ADDDOWNLOAD','Adăugaţi download');
define('_DOWNLOADSMAIN','Downloaduri');
define('_DOWNLOADCOMMENTS','Comentarii download');
define('_DOWNLOADSMAINCAT','Categorii principale Download');
define('_ADDADOWNLOAD','Adăugaţi un download nou');
define('_DSUBMITONCE','Trimiteţi un singur download, o singură dată.');
define('_DPOSTPENDING','Toate downloadurile vor apărea după o verificare prealabilă.');
define('_RESSORTED','Resurse sortate după');
define('_DOWNLOADSNOTUSER1','Nu sunteţi un user înregistrat sau nu v-aţi logat încă.');
define('_DOWNLOADSNOTUSER2','Daca aţi fi înregistrat aţi putea adăuga downloaduri pe acest site.');
define('_DOWNLOADSNOTUSER3','Puteţi deveni utilizator înregistrat uşor şi repede.');
define('_DOWNLOADSNOTUSER4','De ce vă cerem sa fiţi înregistrat? Ca să aveţi acces la anumite facilităţi.');
define('_DOWNLOADSNOTUSER5','Să vă putem oferi cel mai bun conţinut posibil,');
define('_DOWNLOADSNOTUSER6','fiecare element este analizat şi aprobat de personalul nostru.');
define('_DOWNLOADSNOTUSER7','Sperăm să va oferim numai informaţii utile.');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink("Your_Account").'">Înregistraţi-vă pentru un cont</a>');
define('_DOWNLOADALREADYEXT','EROARE: Acest URL se afla deja în baza de date!');
define('_DOWNLOADNOTITLE','EROARE: Trebuie să scrieţi un TITLU pentru URL-ul Dvs.!');
define('_DOWNLOADNOURL','EROARE: Trebuie să scrieţi un URL!');
define('_DOWNLOADNODESC','EROARE: Trebuie să scrieţi o DESCRIERE pentru URL-ul Dvs.!');
define('_DOWNLOADRECEIVED','Am primit cererea Dvs. pentru Download. Vă mulţumim!');
define('_NEWDOWNLOADS','Downloaduri noi');
define('_TOTALNEWDOWNLOADS','Număr downloaduri');
define('_DTOTALFORLAST','Număr downloaduri în ultimele');
define('_DBESTRATED','Cele mai bine cotate downloaduri - Top');
define('_TRATEDDOWNLOADS',' downloaduri clasificate');
define('_SORTDOWNLOADSBY','Sortati downloadurile după');
define('_DCATNEWTODAY','Noi downloaduri din această categorie adăugate azi');
define('_DCATLAST3DAYS','Noi downloaduri din această categorie din ultimele 3 zie');
define('_DCATTHISWEEK','Noi downloaduri din această categorie din această săptămână');
define('_DDATE1','Data (Downloadurile vechi listate primele)');
define('_DDATE2','Data (Downloadurile noi listate primele)');
define('_DOWNLOADS','downloaduri');
define('_DOWNLOADPROFILE','Profil download');
define('_DOWNLOADRATINGDET','Detalii notare downloaduri');
define('_EDITTHISDOWNLOAD','Editaţi acest download');
define('_DOWNLOADRATING','Notare downloaduri');
define('_DOWNLOADVOTE','Votaţi!');
define('_DONLYREGUSERSMODIFY','Numai utilizatorii înregistraţi pot sugera modificări. Vă rugăm să vă <a href="'.getlink("Your_Account").'">înregistraţi sau să vă logaţi</a>.');
define('_REQUESTDOWNLOADMOD','Cerere de modificare download');
define('_DOWNLOADID','ID-ul downloadului');
define('_DLETSDECIDE','Părerile Dvs. vor ajuta alţi vizitatori să hotărască ce fişiere să downloadeze.');
define('_DRATENOTE4','Puteţi vedea o listă a <a href="'.getlink("Downloads&amp;d_op=TopRated").'">Celor mai bune resurse</a>.');
define('_POPULAR','Popular');
define('_TOPRATED','Cel mai bine cotat');
define('_ADDITIONALDET','Detalii suplimentare');
define('_EDITORREVIEW','Părerea editorului');
define('_REPORTBROKEN','Raportaţi un link defect');
define('_AND','şi');
define('_INDB','în baza noastra de date');
define('_INSTRUCTIONS','Instrucţiuni');
define('_USERANDIP','Numele utilizatorului şi adresa IP sunt înregistrate, aşa că vă rugăm să nu abuzaţi.');
define('_LDESCRIPTION','Descriere: (255 de caractere maxim)');
define('_CHECKFORIT','Nu ne-aţi dat o adresa de e-mail dar vom verifica linkul Dvs. în curând.');
define('_LASTWEEK','Ultima săptămână');
define('_LAST30DAYS','Ultimele 30 de zile');
define('_1WEEK','pe o săptămână');
define('_2WEEKS','pe 2 săptămâni');
define('_30DAYS','pe 30 de zile');
define('_ADDEDON','Adăugate pe');
define('_RATING','Clasificare');
define('_DETAILS','Detalii');
define('_OF','din');
define('_TVOTESREQ','este numărul minim de voturi necesare');
define('_SHOWTOP','Afişaţi primele');
define('_MOSTPOPULAR','Cele mai populare - Primele');
define('_OFALL','din toate');
define('_POPULARITY','Popularitate');
define('_SELECTPAGE','Selectaţi pagina');
define('_MAIN','Principal');
define('_NEWTODAY','Noutăţile de azi');
define('_NEWLAST3DAYS','Noutăţile din ultimele 3 zile');
define('_NEWTHISWEEK','Noutăţile din săptămâna asta');
define('_POPULARITY1','Popularitate (De la cele mai puţine la cele mai multe accesări)');
define('_POPULARITY2','Popularitate (De la cele mai multe la cele mai puţine accesări)');
define('_TITLEAZ','Titlu (de la A la Z)');
define('_TITLEZA','Titlu (de la Z la A)');
define('_RATING1','Cotare (De la cele mai mici punctaje la cele mai mari punctaje)');
define('_RATING2','Cotare (De la cele mai mari punctaje la cele mai mici punctaje)');
define('_SEARCHRESULTS4','Rezultatele căutării pentru');
define('_USUBCATEGORIES','Subcategorii');
define('_TRY2SEARCH','Încercaţi să căutaţi');
define('_INOTHERSENGINES','în alte motoare de căutare');
define('_EDITORIAL','Editorial');
define('_EDITORIALBY','Editorial de');
define('_NOEDITORIAL','Nu este disponibil nici un editorial pe acest site.');
define('_RATETHISSITE','Notaţi această resursă');
define('_ISTHISYOURSITE','Este această resursă a Dvs?');
define('_ALLOWTORATE','Permiteţi altor utilizatori din situl Dvs. să o noteze!');
define('_OVERALLRATING','Clasificare pe ansamblu');
define('_TOTALOF','Total din');
define('_USER','Utilizator');
define('_USERAVGRATING','Cotare medie utilizator');
define('_NUMRATINGS','# de notări');
define('_REGISTEREDUSERS','Utilizatori înregistraţi');
define('_NUMBEROFRATINGS','Număr de notări');
define('_NOREGUSERSVOTES','Voturi ale utilizatorilor neînregistraţi');
define('_BREAKDOWNBYVAL','Împărţire a notelor după valoare');
define('_LTOTALVOTES','total voturi');
define('_HIGHRATING','Foarte apreciat');
define('_LOWRATING','Puţin apreciat');
define('_NUMOFCOMMENTS','Număr de comentarii');
define('_WEIGHNOTE','* Notiţă: Această resursă favorizează notările utilizatorilor Înregistraţi faţă de cei Neînregistraţi: de la ');
define('_NOUNREGUSERSVOTES','Nu sunt voturi ale utilizatorilor neînregistraţi');
define('_WEIGHOUTNOTE','* Notiţă: Această resursă favorizează notările utilizatorilor Înregistraţi faţă de cei externi(Anonimi): de la');
define('_NOOUTSIDEVOTES','Nu sunt voturi ale utilizatorilor externi');
define('_OUTSIDEVOTERS','Votanţi externi');
define('_UNREGISTEREDUSERS','Utilizatori neînregistraţi');
define('_PROMOTEYOURSITE','Promovaţi-vă situl');
define('_PROMOTE01','Poate că sunteţi interesat de opţiunile de notare, pe care le avem la dispoziţie, a unui sit de la distanţa. Acestea vă permit sa puneti o imagine (sau chiar un formular de notare) pe situl Dvs. pentru a mări numărul de voturi pe care le primeşte resursa Dvs.. Vă rugăm să alegeţi una din opţiunile de mai jos:');
define('_TEXTLINK','Text tip link');
define('_PROMOTE02','O metodă de link către formularul de votare este printr-un simplu text de tip link:');
define('_HTMLCODE1','Codul HTML pe carea ar trebui să îl folositi, este în acest caz:');
define('_THENUMBER','Numărul');
define('_IDREFER','din sursa HTML se referă la ID-ul Dvs. în baza de date a sitului $sitename. Asiguraţi-vă ca acest număr să fie prezent.');
define('_BUTTONLINK','Buton pentru link');
define('_PROMOTE03','Dacă doriţi mai mult decât un link text puteţi să folosiţi un buton pentru link:');
define('_RATEIT','Notaţi acest sit!');
define('_HTMLCODE2','Codul sursă pentru butonul de mai sus este:');
define('_REMOTEFORM','Formular de notare de la distanţă');
define('_PROMOTE04','Dacă ne păcăliţi vă vom şterge linkul. Acestea fiind spuse, aşa arată formularul Dvs. de notare de la distanţă.');
define('_VOTE4THISSITE','Votaţi pentru aceste sit!');
define('_HTMLCODE3','Folosind acest formular veţi permite utilizatorilor să noteze resursa Dvs. direct de pe celălalt sit, notarea însă va fi înregistrată aici. Formularul de mai sus este dezactivat, dar următorul cod sursa va funcţiona dacă îl veţi scrie în pagina Dvs. (de pe celalalt sit). Codul sursă arată ca şi mai jos:');
define('_PROMOTE05','Vă mulţumim! Mult succes!');
define('_THANKSBROKEN','Vă mulţumim pentru că ne-aţi ajutat să întreţinem acest director.');
define('_SECURITYBROKEN','Din motive de securitate numele de utilizator şi adresa IP vor fi înregistrate temporar.');
define('_THANKSFORINFO','Vă mulţumim pentru infomaţie.');
define('_LOOKTOREQUEST','Vom analiza cererea Dvs. în scurt timp.');
define('_SENDREQUEST','Trimiteţi Cererea');
define('_THANKSTOTAKETIME','Vă mulţumim pentru timpul acordat notării site-ului ');
define('_RETURNTO','Întoarcere la');
define('_RATENOTE1','Vă rugăm să nu votaţi pentru aceeaşi resursă mai mult de o singură dată.');
define('_RATENOTE2','Scara este de la 1 la 10, 1 fiind cel mai prost iar 10 fiind excellent.');
define('_RATENOTE3','Vă rugăm să fiţi obiectiv în notare, dacă veţi da numai 1 şi 10, notările nu vor fi prea concludente.');
define('_RATENOTE5','Nu votaţi pentru resursa Dvs. sau a competitorului.');
define('_YOUAREREGGED','Sunteţi utilizatori înregistrat şi sunteţi logat.');
define('_FEELFREE2ADD','Dacă doriţi puteţi să adaugaţi un comentariu despre acest sit.');
define('_YOUARENOTREGGED','Nu sunteţi un utilizator înregistrat sau nu sunteţi logat.');
define('_IFYOUWEREREG','Dacă aţi fi înregistrat aţi putea să trimiteţi comentarii despre acest sit.');
define('_MODIFY','Modificaţi');
define('_COMPLETEVOTE1','Mulţumim pentru votul Dvs..');
define('_COMPLETEVOTE2','Aţi mai votat pentru aceasta resursă acum $anonwaitdays zile.');
define('_COMPLETEVOTE3','Votaţi pentru o resursă o singura dată.<br>Toate voturile sunt înregistrate şi supravegeate.');
define('_COMPLETEVOTE4','Nu puteţi vota pentru un link pe care l-aţi trimis.<br>Toate voturile sunt înregistrate şi supravegheate.');
define('_COMPLETEVOTE5','Nu aţi selectat o notă - nu s-a adăugat nici un vot');
define('_COMPLETEVOTE6','Este permis un singur vot, de la o adresă IP la un interval de minimum $outsidewaitdays zile.');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDDURL','Add this URL');
define('_EZTRANSFERDOWNLOAD','Transfer');
define('_EZTRANSFERDOWNLOADS','Transferaţi toate downloadurile din categoria');
define('_DELEZDOWNLOADSCATWARNING','ATENŢIUNE: Sunteţi sigur că doriţi să ştergeţi această categorie? Veti şterge toate sub-categoriile şi downloadurile ataşate de asemenea!');
define('_DELCONTENTCAT','ATENTIE: Sunteţi sigur că doriţi să ştergeţi această categorie? Paginile din această categorie, dacă există, nu vor fi şterse, dar nu vor fi încadrate în nici o categorie.');
define('_DELCATEGORY','ştergeţi categorie');
define('_DOWNLOADTITLE','Titlul downloadului');
define('_DOWNLOADSINDB','Downloaduri în baza noastra de date');
define('_DOWNLOADSWAITINGVAL','Downloaduri în aşteptare pentru validare');
define('_CLEANDOWNLOADSDB','Ştergeţi voturile pentru downloaduri');
define('_BROKENDOWNLOADSREP','Raportaţi Downloaduri defecte');
define('_DOWNLOADMODREQUEST','Cereri de modificare a downloadurilor');
define('_ADDNEWDOWNLOAD','Adăugaţi un download nou');
define('_MODDOWNLOAD','Modificaţi un download');
define('_WEBDOWNLOADSADMIN','Adminstrare de download-uri de pe Web');
define('_DNOREPORTEDBROKEN','Nu au fost raportate download-uri defecte.');
define('_DUSERREPBROKEN','Download-uri defecte raportate de utilizatori');
define('_DIGNOREINFO','Ignoraţi (Ştergeţi toate <b><i>cererile</i></b> pentru un anumit download)');
define('_DDELETEINFO','Ştergeţi (Ştergeţi <b><i>downloadurile defecte</i></b> şi <b><i>cererile</i></b> pentru un anumit download)');
define('_DOWNLOADOWNER','Proprietarul downloadului');
define('_DUSERMODREQUEST','Cereri de modificare a downloadului de la utilizatori');
define('_DOWNLOADVALIDATION','Validare download');
define('_CHECKALLDOWNLOADS','Verificaţi toate downloadurile');
define('_VALIDATEDOWNLOADS','Validaţi downloaduri');
define('_NEWDOWNLOADADDED','Download nou adăugat în baza de date');
