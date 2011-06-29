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
define('_NEXT','Sledeæa stranica');
define('_CATEGORIES','kategorija');
define('_LVOTES','glasova');
define('_TOTALVOTES','Ukupno glasova:');
define('_THEREARE','Trenutno ima');
define('_NOMATCHES','Nije naðen sadržaj koji ste tražili');
define('_SCOMMENTS','Komentari');
define('_UNKNOWN','Nepoznat');
define('_AUTHORNAME','Ime autora');
define('_AUTHOREMAIL','Email autora');
define('_DOWNLOADNAME','Naziv programa');
define('_ADDTHISFILE','Dodaj ovaj fajl');
define('_INBYTES','u bajtima');
define('_FILESIZE','Velièina fajla');
define('_VERSION','Verzija');
define('_AUTHOR','Autor');
define('_HOMEPAGE','HomePage');
define('_DOWNLOADNOW','Preuzmi ovaj file sada!');
define('_RATERESOURCE','Oceni izvor');
define('_FILEURL','Link fajla');
define('_ADDDOWNLOAD','Priloži fajl');
define('_DOWNLOADSMAIN','Polazna stranica Download sekcije');
define('_DOWNLOADCOMMENTS','Komentari fajlova');
define('_DOWNLOADSMAINCAT','Glavne kategorije');
define('_ADDADOWNLOAD','Priloži novi fajl');
define('_DSUBMITONCE','Pošalji pojedinaèni fajl samo jednom.');
define('_DPOSTPENDING','Svi fajlovi koji se pošalju moraju proæi verifikaciju.');
define('_RESSORTED','Resoursi su trenutno složeni po');
define('_DOWNLOADSNOTUSER1','Niste registrovani korisnik ili se niste ulogovali.');
define('_DOWNLOADSNOTUSER2','Da ste se registrovali mogli biste da priložite fajl na naš sajt.');
define('_DOWNLOADSNOTUSER3','Registracija je brz i kratak proces.');
define('_DOWNLOADSNOTUSER4','Zašto je neophodna registracija za pristup odreðenim delovima sajta?');
define('_DOWNLOADSNOTUSER5','Zato da bismo mogli da vam ponudimo najkvalitetniji sadržaj,');
define('_DOWNLOADSNOTUSER6','svaki fajl se provera od strane našeg osoblja.');
define('_DOWNLOADSNOTUSER7','Cilj nam je da vam pružimo samo vredne informacije.');
define('_DOWNLOADSNOTUSER8','<a href="modules.php?name=Your_Account">Registrujte se</a>');
define('_DOWNLOADALREADYEXT','GREŠKA: Ovaj URL je veæ unet u bazu!');
define('_DOWNLOADNOTITLE','GREŠKA: Morate navesti NAZIV za vaš URL!');
define('_DOWNLOADNOURL','GREŠKA: Morati uneti URL adresu!');
define('_DOWNLOADNODESC','GREŠKA: Morate uneti OPIS za vaš URL!');
define('_DOWNLOADRECEIVED','Primili smo vaš predloženi fajl . Hvala!');
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
define('_DONLYREGUSERSMODIFY','Samo registrovani korisnici mogu predlagati modifikacije downloada. Ako to želite <a href="modules.php?name=Your_Account">registrujte se ili se ulogujte</a>.');
define('_REQUESTDOWNLOADMOD','Pošaljite zahtev za modifikaciju downloada');
define('_DOWNLOADID','ID fajla');
define('_DLETSDECIDE','Vaše mišljenje æe pomoæi drugim korisnicima da lakše odluèe na koji link da kliknu.');
define('_DRATENOTE4','Možete pogledati listu <a href="modules.php?name=Downloads&amp;d_op=TopRated">Resursa sa najvišim ocenama</a>.');
define('_POPULAR','Popularno');
define('_TOPRATED','Najviše ocenjeno');
define('_ADDITIONALDET','Dodatni Detalji');
define('_EDITORREVIEW','Urednièka Recenzija');
define('_REPORTBROKEN','Prijavi neispravan Link');
define('_AND','i');
define('_INDB','u našoj bazi');
define('_INSTRUCTIONS','Instrukcije');
define('_USERANDIP','Korisnièko ime i IP broj se snimaju, nemojte zloupotrebljavati sistem.');
define('_LDESCRIPTION','Opis: (255 karaktera max)');
define('_CHECKFORIT','Niste dali Email adresu ali æemo proveriti vaš link uskoro.');
define('_LASTWEEK','Prošla nedelja');
define('_LAST30DAYS','Unazad 30 dana');
define('_1WEEK','1 Nedelja');
define('_2WEEKS','2 Nedelje');
define('_30DAYS','30 Dana');
define('_ADDEDON','Dodato');
define('_RATING','Ocena');
define('_DETAILS','Detalji');
define('_OF','od');
define('_TVOTESREQ','minimum glasova neophodno');
define('_SHOWTOP','Pokaži najbolje');
define('_MOSTPOPULAR','Najpopularniji - Top');
define('_OFALL','od svih');
define('_POPULARITY','Popularnost');
define('_SELECTPAGE','Odaberi stranicu');
define('_MAIN','Poèetak');
define('_NEWTODAY','Dodato Danas');
define('_NEWLAST3DAYS','Dodato u zadnja tri dana');
define('_NEWTHISWEEK','Dodato ove nedelje');
define('_POPULARITY1','Popularnost (rastuæi)');
define('_POPULARITY2','Popularnost (opadajuæi)');
define('_TITLEAZ','Naslov (A do Z)');
define('_TITLEZA','Naslov (Z do A)');
define('_RATING1','Ocena (rastuæi)');
define('_RATING2','Ocena (opadajuæi)');
define('_SEARCHRESULTS4','Rezultati pretrage za');
define('_USUBCATEGORIES','pod-Kategorije');
define('_TRY2SEARCH','Pokušaj da nadješ');
define('_INOTHERSENGINES','na drugim pretraživaèima');
define('_EDITORIAL','Editorial');
define('_EDITORIALBY','Editorial od');
define('_NOEDITORIAL','Nema editoriala za ovaj sajt.');
define('_RATETHISSITE','Ocenite ovaj resurs');
define('_ISTHISYOURSITE','Je li ovo vaš resurs?');
define('_ALLOWTORATE','Omoguæite ostalim korisnicima da ga ocenjuju sa vašeg web sajta!');
define('_OVERALLRATING','Ukupna ocena');
define('_TOTALOF','Ukupno od');
define('_USER','Korisnik');
define('_USERAVGRATING','Proseèna ocena');
define('_NUMRATINGS','# Ocena');
define('_REGISTEREDUSERS','Registrovanih korisnika');
define('_NUMBEROFRATINGS','Broj ocena');
define('_NOREGUSERSVOTES','Glasovi neregistrovanih korisnika');
define('_BREAKDOWNBYVAL','Analiza ocena po vrednosti');
define('_LTOTALVOTES','ukupno glasova');
define('_HIGHRATING','Najviša ocena');
define('_LOWRATING','Najniža ocena');
define('_NUMOFCOMMENTS','Broj komentara');
define('_WEIGHNOTE','* Pažnja: Vrednost glasova Registorovanih naspram Neregistrovanih korisnika je ');
define('_NOUNREGUSERSVOTES','Nema ocena neregistrovanih korisnika');
define('_WEIGHOUTNOTE','* Pažnja: Vrednost glasova Registorovanih naspram Spoljnjih korisnika je ');
define('_NOOUTSIDEVOTES','Nema spoljnjih glasova');
define('_OUTSIDEVOTERS','Spoljnji glasaèi');
define('_UNREGISTEREDUSERS','Neregistrovani korisnici');
define('_PROMOTEYOURSITE','Promovišite svoju web stranicu');
define('_PROMOTE01','Možda ste zainteresovani za \'Oceni moj web sajt\' moguænost koju vam pružamo. Možete postaviti slièicu (ili èak i formular za ocenjivanje) na svoju web stranicu te tako poveæati broj glasova koje dobija vaš resurs. Odaberite jednu od ponuðenih opcija:');
define('_TEXTLINK','Tekstualni Link');
define('_PROMOTE02','Jedan od naèina da linkujete svoju web stranicu sa formularom za ocenjivanje je uz pomoæ jednostavnog tekstualnog linka:');
define('_HTMLCODE1','HTML kod za ovaj sluèaj je:');
define('_THENUMBER','Broj');
define('_IDREFER','u HTML kodu je ID broj vašeg sajta u $sitename bazi. Pazite da ga ne izostavite.');
define('_BUTTONLINK','Link Dugme');
define('_PROMOTE03','Ako vam treba nešto malo lepše od obiènog texta, možda æe vam odgovarati malo dugme:');
define('_RATEIT','Ocenite ovu stranicu!');
define('_HTMLCODE2','Source kod za dugme iznad je:');
define('_REMOTEFORM','Formular za glasanje sa vaše web stranice');
define('_PROMOTE04','Ako budete varali, ukloniæemo vaš link. Pošto znate pravila, evo kako izgleda formular za glasanje.');
define('_VOTE4THISSITE','Glasajte za ovaj sajt!');
define('_HTMLCODE3','Koristeæi ovaj formular korisnici mogu ocenjivati resurs na vašem sajtu a rezultati se skladišti ovde. Formular iznad je iskljuèen, ali kod ispod æe raditi ako ga jednostavno dodate na svoju web stranicu. Source kod je dat ispod:');
define('_PROMOTE05','Hvala! i sreæno sa ocenama!');
define('_THANKSBROKEN','Hvala na pomoæi u održanju integriteta direktorijuma.');
define('_SECURITYBROKEN','Iz sigurnosnih razloga vaše korisnièko ime i IP adresa æe privremeno biti saèuvani.');
define('_THANKSFORINFO','Hvala na informacijama.');
define('_LOOKTOREQUEST','Uskoro æemo prouèiti vaš zahtev.');
define('_SENDREQUEST','Pošaljite zahtev');
define('_THANKSTOTAKETIME','Hvala što ste odvojili vreme da ocenite sajt ovde na ');
define('_RETURNTO','Vrati se na');
define('_RATENOTE1','Nemojte glasati za isti resurs dva puta.');
define('_RATENOTE2','Skala ide od 1 do 10, 1 kao najgore i 10 kao najblje.');
define('_RATENOTE3','Budite objektivni kad glasate, ako svi dobijaju 1 ili 10, ocene nemaju puno smisla.');
define('_RATENOTE5','Nemojte glasati za svoj ili za resurs konkurencije.');
define('_YOUAREREGGED','Vi ste registrovan i ulogovan korisnik.');
define('_FEELFREE2ADD','Slobodno dodajte komentar o ovom sajtu.');
define('_YOUARENOTREGGED','Niste registrovan korisnik ili se niste ulogovali.');
define('_IFYOUWEREREG','Da ste se registrovali mogli biste da napišete komentar o ovom sajtu.');
define('_MODIFY','Modifikuj');
define('_COMPLETEVOTE1','Tvoj glas se ceni!');
define('_COMPLETEVOTE2','Veæ ste glasali za ovaj resurs u prošlih $anonwaitdays dan(a).');
define('_COMPLETEVOTE3','Glasajte za jedan resurs samo jednom.<br>Svi glasovi se loguju i pregledaju.');
define('_COMPLETEVOTE4','Ne možete da  glasate za link koji ste poslali.<br>Svi glasovi se loguju i pregledaju.');
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

