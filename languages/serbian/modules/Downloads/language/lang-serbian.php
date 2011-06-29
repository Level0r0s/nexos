<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com
  CPG-lang (c)2004 Akamu Akamai
  
  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version.
  This program comes without any warranty.
  $Source: /cvs/languages/serbian/modules/Downloads/language/lang-serbian.php,v $
  $Revision: 1.2 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:41 $
***********************************************************************/
if (!defined('CPG_NUKE')) { die('You do not have permission to access this file'); }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','The download you\'ve requested doesn\'t exists.');
define('_PREVIOUS','Prethodna stranica');
define('_NEXT','Slede�a stranica');
define('_CATEGORIES','kategorija');
define('_LVOTES','glasova');
define('_TOTALVOTES','Ukupno glasova:');
define('_THEREARE','Trenutno ima');
define('_NOMATCHES','Nije na�en sadr�aj koji ste tra�ili');
define('_SCOMMENTS','Komentari');
define('_UNKNOWN','Nepoznat');
define('_AUTHORNAME','Ime autora');
define('_AUTHOREMAIL','Email autora');
define('_DOWNLOADNAME','Naziv programa');
define('_ADDTHISFILE','Dodaj ovaj fajl');
define('_INBYTES','u bajtima');
define('_FILESIZE','Veli�ina fajla');
define('_VERSION','Verzija');
define('_AUTHOR','Autor');
define('_HOMEPAGE','HomePage');
define('_DOWNLOADNOW','Preuzmi ovaj file sada!');
define('_RATERESOURCE','Oceni izvor');
define('_FILEURL','Link fajla');
define('_ADDDOWNLOAD','Prilo�i fajl');
define('_DOWNLOADSMAIN','Polazna stranica Download sekcije');
define('_DOWNLOADCOMMENTS','Komentari fajlova');
define('_DOWNLOADSMAINCAT','Glavne kategorije');
define('_ADDADOWNLOAD','Prilo�i novi fajl');
define('_DSUBMITONCE','Po�alji pojedina�ni fajl samo jednom.');
define('_DPOSTPENDING','Svi fajlovi koji se po�alju moraju pro�i verifikaciju.');
define('_RESSORTED','Resoursi su trenutno slo�eni po');
define('_DOWNLOADSNOTUSER1','Niste registrovani korisnik ili se niste ulogovali.');
define('_DOWNLOADSNOTUSER2','Da ste se registrovali mogli biste da prilo�ite fajl na na� sajt.');
define('_DOWNLOADSNOTUSER3','Registracija je brz i kratak proces.');
define('_DOWNLOADSNOTUSER4','Za�to je neophodna registracija za pristup odre�enim delovima sajta?');
define('_DOWNLOADSNOTUSER5','Zato da bismo mogli da vam ponudimo najkvalitetniji sadr�aj,');
define('_DOWNLOADSNOTUSER6','svaki fajl se provera od strane na�eg osoblja.');
define('_DOWNLOADSNOTUSER7','Cilj nam je da vam pru�imo samo vredne informacije.');
define('_DOWNLOADSNOTUSER8','<a href="modules.php?name=Your_Account">Registrujte se</a>');
define('_DOWNLOADALREADYEXT','GRE�KA: Ovaj URL je ve� unet u bazu!');
define('_DOWNLOADNOTITLE','GRE�KA: Morate navesti NAZIV za va� URL!');
define('_DOWNLOADNOURL','GRE�KA: Morati uneti URL adresu!');
define('_DOWNLOADNODESC','GRE�KA: Morate uneti OPIS za va� URL!');
define('_DOWNLOADRECEIVED','Primili smo va� predlo�eni fajl . Hvala!');
define('_NEWDOWNLOADS','Novi fajlovi');
define('_TOTALNEWDOWNLOADS','Ukupno novih fajlova');
define('_DTOTALFORLAST','Ukupno novih fajlova za poslednjih');
define('_DBESTRATED','Najbolje ocenjeni fajlovi - Top');
define('_TRATEDDOWNLOADS','ukupno ocenjenih fajlova');
define('_SORTDOWNLOADSBY','Sortiraj fajlove po');
define('_DCATNEWTODAY','Novi fajlovi u ovoj kategoriji dodati danas');
define('_DCATLAST3DAYS','Novi fajlovi u ovoj kategoriji dodati u posljednja 3 dana');
define('_DCATTHISWEEK','Novi fajlovi u ovoj kategoriji dodati ove nedelje');
define('_DDATE1','Datum (Prvo pokazuj stare fajlove)');
define('_DDATE2','Datum (Prvo pokazuj nove fajlove)');
define('_DOWNLOADS','fajlova');
define('_DOWNLOADPROFILE','Profil fajla');
define('_DOWNLOADRATINGDET','Detalji ocene fajla');
define('_EDITTHISDOWNLOAD','Edituj ovaj Download');
define('_DOWNLOADRATING','Ocene fajlova');
define('_DOWNLOADVOTE','Glasaj!');
define('_DONLYREGUSERSMODIFY','Samo registrovani korisnici mogu predlagati modifikacije downloada. Ako to �elite <a href="modules.php?name=Your_Account">registrujte se ili se ulogujte</a>.');
define('_REQUESTDOWNLOADMOD','Po�aljite zahtev za modifikaciju downloada');
define('_DOWNLOADID','ID fajla');
define('_DLETSDECIDE','Va�e mi�ljenje �e pomo�i drugim korisnicima da lak�e odlu�e na koji link da kliknu.');
define('_DRATENOTE4','Mo�ete pogledati listu <a href="modules.php?name=Downloads&amp;d_op=TopRated">Resursa sa najvi�im ocenama</a>.');
define('_POPULAR','Popularno');
define('_TOPRATED','Najvi�e ocenjeno');
define('_ADDITIONALDET','Dodatni Detalji');
define('_EDITORREVIEW','Uredni�ka Recenzija');
define('_REPORTBROKEN','Prijavi neispravan Link');
define('_AND','i');
define('_INDB','u na�oj bazi');
define('_INSTRUCTIONS','Instrukcije');
define('_USERANDIP','Korisni�ko ime i IP broj se snimaju, nemojte zloupotrebljavati sistem.');
define('_LDESCRIPTION','Opis: (255 karaktera max)');
define('_CHECKFORIT','Niste dali Email adresu ali �emo proveriti va� link uskoro.');
define('_LASTWEEK','Pro�la nedelja');
define('_LAST30DAYS','Unazad 30 dana');
define('_1WEEK','1 Nedelja');
define('_2WEEKS','2 Nedelje');
define('_30DAYS','30 Dana');
define('_ADDEDON','Dodato');
define('_RATING','Ocena');
define('_DETAILS','Detalji');
define('_OF','od');
define('_TVOTESREQ','minimum glasova neophodno');
define('_SHOWTOP','Poka�i najbolje');
define('_MOSTPOPULAR','Najpopularniji - Top');
define('_OFALL','od svih');
define('_POPULARITY','Popularnost');
define('_SELECTPAGE','Odaberi stranicu');
define('_MAIN','Po�etak');
define('_NEWTODAY','Dodato Danas');
define('_NEWLAST3DAYS','Dodato u zadnja tri dana');
define('_NEWTHISWEEK','Dodato ove nedelje');
define('_POPULARITY1','Popularnost (rastu�i)');
define('_POPULARITY2','Popularnost (opadaju�i)');
define('_TITLEAZ','Naslov (A do Z)');
define('_TITLEZA','Naslov (Z do A)');
define('_RATING1','Ocena (rastu�i)');
define('_RATING2','Ocena (opadaju�i)');
define('_SEARCHRESULTS4','Rezultati pretrage za');
define('_USUBCATEGORIES','pod-Kategorije');
define('_TRY2SEARCH','Poku�aj da nadje�');
define('_INOTHERSENGINES','na drugim pretra�iva�ima');
define('_EDITORIAL','Editorial');
define('_EDITORIALBY','Editorial od');
define('_NOEDITORIAL','Nema editoriala za ovaj sajt.');
define('_RATETHISSITE','Ocenite ovaj resurs');
define('_ISTHISYOURSITE','Je li ovo va� resurs?');
define('_ALLOWTORATE','Omogu�ite ostalim korisnicima da ga ocenjuju sa va�eg web sajta!');
define('_OVERALLRATING','Ukupna ocena');
define('_TOTALOF','Ukupno od');
define('_USER','Korisnik');
define('_USERAVGRATING','Prose�na ocena');
define('_NUMRATINGS','# Ocena');
define('_REGISTEREDUSERS','Registrovanih korisnika');
define('_NUMBEROFRATINGS','Broj ocena');
define('_NOREGUSERSVOTES','Glasovi neregistrovanih korisnika');
define('_BREAKDOWNBYVAL','Analiza ocena po vrednosti');
define('_LTOTALVOTES','ukupno glasova');
define('_HIGHRATING','Najvi�a ocena');
define('_LOWRATING','Najni�a ocena');
define('_NUMOFCOMMENTS','Broj komentara');
define('_WEIGHNOTE','* Pa�nja: Vrednost glasova Registorovanih naspram Neregistrovanih korisnika je ');
define('_NOUNREGUSERSVOTES','Nema ocena neregistrovanih korisnika');
define('_WEIGHOUTNOTE','* Pa�nja: Vrednost glasova Registorovanih naspram Spoljnjih korisnika je ');
define('_NOOUTSIDEVOTES','Nema spoljnjih glasova');
define('_OUTSIDEVOTERS','Spoljnji glasa�i');
define('_UNREGISTEREDUSERS','Neregistrovani korisnici');
define('_PROMOTEYOURSITE','Promovi�ite svoju web stranicu');
define('_PROMOTE01','Mo�da ste zainteresovani za \'Oceni moj web sajt\' mogu�nost koju vam pru�amo. Mo�ete postaviti sli�icu (ili �ak i formular za ocenjivanje) na svoju web stranicu te tako pove�ati broj glasova koje dobija va� resurs. Odaberite jednu od ponu�enih opcija:');
define('_TEXTLINK','Tekstualni Link');
define('_PROMOTE02','Jedan od na�ina da linkujete svoju web stranicu sa formularom za ocenjivanje je uz pomo� jednostavnog tekstualnog linka:');
define('_HTMLCODE1','HTML kod za ovaj slu�aj je:');
define('_THENUMBER','Broj');
define('_IDREFER','u HTML kodu je ID broj va�eg sajta u $sitename bazi. Pazite da ga ne izostavite.');
define('_BUTTONLINK','Link Dugme');
define('_PROMOTE03','Ako vam treba ne�to malo lep�e od obi�nog texta, mo�da �e vam odgovarati malo dugme:');
define('_RATEIT','Ocenite ovu stranicu!');
define('_HTMLCODE2','Source kod za dugme iznad je:');
define('_REMOTEFORM','Formular za glasanje sa va�e web stranice');
define('_PROMOTE04','Ako budete varali, ukloni�emo va� link. Po�to znate pravila, evo kako izgleda formular za glasanje.');
define('_VOTE4THISSITE','Glasajte za ovaj sajt!');
define('_HTMLCODE3','Koriste�i ovaj formular korisnici mogu ocenjivati resurs na va�em sajtu a rezultati se skladi�ti ovde. Formular iznad je isklju�en, ali kod ispod �e raditi ako ga jednostavno dodate na svoju web stranicu. Source kod je dat ispod:');
define('_PROMOTE05','Hvala! i sre�no sa ocenama!');
define('_THANKSBROKEN','Hvala na pomo�i u odr�anju integriteta direktorijuma.');
define('_SECURITYBROKEN','Iz sigurnosnih razloga va�e korisni�ko ime i IP adresa �e privremeno biti sa�uvani.');
define('_THANKSFORINFO','Hvala na informacijama.');
define('_LOOKTOREQUEST','Uskoro �emo prou�iti va� zahtev.');
define('_SENDREQUEST','Po�aljite zahtev');
define('_THANKSTOTAKETIME','Hvala �to ste odvojili vreme da ocenite sajt ovde na ');
define('_RETURNTO','Vrati se na');
define('_RATENOTE1','Nemojte glasati za isti resurs dva puta.');
define('_RATENOTE2','Skala ide od 1 do 10, 1 kao najgore i 10 kao najblje.');
define('_RATENOTE3','Budite objektivni kad glasate, ako svi dobijaju 1 ili 10, ocene nemaju puno smisla.');
define('_RATENOTE5','Nemojte glasati za svoj ili za resurs konkurencije.');
define('_YOUAREREGGED','Vi ste registrovan i ulogovan korisnik.');
define('_FEELFREE2ADD','Slobodno dodajte komentar o ovom sajtu.');
define('_YOUARENOTREGGED','Niste registrovan korisnik ili se niste ulogovali.');
define('_IFYOUWEREREG','Da ste se registrovali mogli biste da napi�ete komentar o ovom sajtu.');
define('_MODIFY','Modifikuj');
define('_COMPLETEVOTE1','Tvoj glas se ceni!');
define('_COMPLETEVOTE2','Ve� ste glasali za ovaj resurs u pro�lih $anonwaitdays dan(a).');
define('_COMPLETEVOTE3','Glasajte za jedan resurs samo jednom.<br>Svi glasovi se loguju i pregledaju.');
define('_COMPLETEVOTE4','Ne mo�ete da  glasate za link koji ste poslali.<br>Svi glasovi se loguju i pregledaju.');
define('_COMPLETEVOTE5','Nije izabrana ocena - glas nije evidentiran');
define('_COMPLETEVOTE6','Samo jedan glas po IP adresi je dozvoljen unutar $outsidewaitdays dana.');

/**************************
  ADMNINISTRATION SECTION
**************************/
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

