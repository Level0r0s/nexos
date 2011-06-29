<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/bosanski/downloads.php,v $
  $Revision: 9.8 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:48 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','Download Fajl koji ste tražili nepostoji.');
define('_CATEGORIES','Kategorije');
define('_LVOTES','glasova');
define('_TOTALVOTES','Ukupno glasova:');
define('_THEREARE','Trenutno ima');
define('_NOMATCHES','Nije nađen sadržaj koji ste tražili');
define('_SCOMMENTS','Komentari');
define('_UNKNOWN','Nepoznat');
define('_AUTHORNAME','Ime autora');
define('_AUTHOREMAIL','Email autora');
define('_DOWNLOADNAME','Naziv programa');
define('_ADDTHISFILE','Dodaj ovaj file');
define('_INBYTES','u bajtima');
//define('_FILESIZE','Veličina file');
//define('_VERSION','Verzija');
//define('_AUTHOR','Autor');
define('_HOMEPAGE','Stranica');
define('_DOWNLOADNOW','Downloaduj ovaj file odmah!');
define('_RATERESOURCE','Ocjeni');
define('_FILEURL','Fajl Link');
define('_ADDDOWNLOAD','Dodaj Download');
define('_DOWNLOADSMAIN','Download početak');
define('_DOWNLOADCOMMENTS','Download komentari');
define('_DOWNLOADSMAINCAT','Downloadi glavne kategorije');
define('_ADDADOWNLOAD','Dodaj novi Download');
define('_DSUBMITONCE','Pošalji jedinstven download samo jedanput.');
define('_DPOSTPENDING','Svi downloadi koji se pošalju moraju proći verifikaciju.');
define('_RESSORTED','Resoursi su trenutno složeni po');
define('_DOWNLOADSNOTUSER1','Niste registrovani korisnik ili se niste logovali.');
define('_DOWNLOADSNOTUSER2','Da ste se registrovali mogli bi dodati download na ovu stranicu.');
define('_DOWNLOADSNOTUSER3','Registracija je brz i kratak proces.');
define('_DOWNLOADSNOTUSER4','Zašto je neophodna registracija za pristup određenom dijelu stranice?');
define('_DOWNLOADSNOTUSER5','Zato da bi vam mogli ponuditi najkvalitetniji sadraj,');
define('_DOWNLOADSNOTUSER6','svako download se provjera od strane našeg osoblja.');
define('_DOWNLOADSNOTUSER7','Cilj nam je pružiti vam samo vrijedne informacije.');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink("Your_Account").'">Registrijte se</a>');
define('_DOWNLOADALREADYEXT','GREŠKA: Ovaj URL je već unesen u bazi!');
define('_DOWNLOADNOTITLE','GREŠKA: Morate navesti NAZIV za vaš URL!');
define('_DOWNLOADNOURL','GREŠKA: Morati unijeti URL za vaš URL!');
define('_DOWNLOADNODESC','GREŠKA: Morate unijeti OPIS za vaš URL!');
define('_DOWNLOADRECEIVED','Primili smo vaš Download prijedlog. Hvala!');
define('_NEWDOWNLOADS','Novi Downloadi');
define('_TOTALNEWDOWNLOADS','Ukupno novih Downloada');
define('_DTOTALFORLAST','Ukupno novih downloada za posljednjih');
define('_DBESTRATED','Najbolje ocijenjeni Downloadi - Top');
define('_TRATEDDOWNLOADS','ukupno ocijenjenih downloada');
define('_SORTDOWNLOADSBY','Sortiraj Downloade po');
define('_DCATNEWTODAY','Novi Downloadi u ovoj kategoriji dodani danas');
define('_DCATLAST3DAYS','Novi Downloadi u ovoj kategoriji dodani u posljednja 3 dana');
define('_DCATTHISWEEK','Novi Downloadi u ovoj kategoriji dodani ove sedmice');
define('_DDATE1','Datum (Prvo pokazuj stare downloade)');
define('_DDATE2','Datum (Prvo pokazuj noove downloade)');
define('_DOWNLOADS','Downloada');
define('_DOWNLOADPROFILE','Download Profil');
define('_DOWNLOADRATINGDET','Download detalji ocjene');
define('_EDITTHISDOWNLOAD','Edituj ovaj Download');
define('_DOWNLOADRATING','Ocjene Downloada');
define('_DOWNLOADVOTE','Glasaj!');
define('_DONLYREGUSERSMODIFY','Samo registrovani korisnici mogu predlagati modifikacije downloada. Ako to želiš <a href="'.getlink("Your_Account").'">registrujte se ili se logujte</a>.');
define('_REQUESTDOWNLOADMOD','Pošalji zahtjev za modifikacijom downloada');
define('_DOWNLOADID','Download ID');
define('_DLETSDECIDE','Tvoje mišljenje će pomoći drugim korisnicima da lakše odluče na koji download link da kliknu.');
define('_DRATENOTE4','Možeš pogledati listu <a href="'.getlink('Downloads&amp;d_op=TopRated').'">Resursa sa najvišim ocjenama</a>.');
define('_POPULAR','Popularno');
define('_TOPRATED','Najviše ocijenjeno');
define('_ADDITIONALDET','Dodatni Detalji');
define('_EDITORREVIEW','Editor Review');
define('_REPORTBROKEN','Prijavi neispravan Link');
define('_AND','i');
define('_INDB','u našoj bazi');
define('_INSTRUCTIONS','Instrukcije');
define('_USERANDIP','Username i IP se loguju, nemojte zloupotrebljavati stranicu.');
define('_LDESCRIPTION','Opis: (255 karaktera max)');
define('_CHECKFORIT','Nisi dao Email adresu ali mi ćemo provjeriti tvoj link uskoro.');
define('_LASTWEEK','Prošla sedmica');
define('_LAST30DAYS','Unazad 30 dana');
define('_1WEEK','1 Sedmica');
define('_2WEEKS','2 Sedmice');
define('_30DAYS','30 Dana');
define('_ADDEDON','Dodano');
define('_RATING','Ocjena');
define('_DETAILS','Detalji');
define('_OF','od');
define('_TVOTESREQ','minimum glasova neophodno');
define('_SHOWTOP','Pokaži najbolje');
define('_MOSTPOPULAR','Najpopularniji - Top');
define('_OFALL','od svih');
define('_POPULARITY','Popularnost');
define('_SELECTPAGE','Odaberi stranicu');
define('_MAIN','Početak');
define('_NEWTODAY','Dodano Danas');
define('_NEWLAST3DAYS','Dodano u zadnja tri dana');
define('_NEWTHISWEEK','Dodano ove sedmice');
define('_POPULARITY1','Popularnost (rastući)');
define('_POPULARITY2','Popularnost (opadajući)');
define('_TITLEAZ','Naslov (A do Z)');
define('_TITLEZA','Naslov (Z do A)');
define('_RATING1','Ocjena (rastući)');
define('_RATING2','Rating (opadajući)');
define('_SEARCHRESULTS4','Traži rezultate za');
define('_USUBCATEGORIES','pod-Kategorije');
define('_TRY2SEARCH','Pokušaj naći');
define('_INOTHERSENGINES','u drugim pretraživačima');
define('_EDITORIAL','Editorial');
define('_EDITORIALBY','Editorial od');
define('_NOEDITORIAL','Nijedan editorial nije dostupan za ovu web stranicu.');
define('_RATETHISSITE','Ocjeni ovaj resurs');
define('_ISTHISYOURSITE','Je li ovo tvoj resurs?');
define('_ALLOWTORATE','Omogući drugim korisnicima da ga ocjenjuju sa tvoje web stranice!');
define('_OVERALLRATING','Ukupna ocjena');
define('_TOTALOF','Totalno od');
define('_USER','Korisnik');
define('_USERAVGRATING','Prosječna ocjena korisnika');
define('_NUMRATINGS','# Ocjena');
define('_REGISTEREDUSERS','Registrovanih korisnika');
define('_NUMBEROFRATINGS','Broj ocjena');
define('_NOREGUSERSVOTES','Glasovi ne registrovanih korisnika');
define('_BREAKDOWNBYVAL','Breakdown ocjena po vrijednosti');
define('_LTOTALVOTES','ukupno glasova');
define('_HIGHRATING','Najviša ocjena');
define('_LOWRATING','Najniža ocjena');
define('_NUMOFCOMMENTS','Broj komentara');
define('_WEIGHNOTE','* Pažnja: Vrijednost glasova Registorovanih naspram Ne registrovanih korisnika je ');
define('_NOUNREGUSERSVOTES','Nema ocjena od ne registrovanih korisnika');
define('_WEIGHOUTNOTE','* Pažnja: Vrijednost glasova Registorovanih naspram Vanjskih korisnika je ');
define('_NOOUTSIDEVOTES','Nema vanjskih glasova');
define('_OUTSIDEVOTERS','Vanjski glasači');
define('_UNREGISTEREDUSERS','Ne registrovani korisnici');
define('_PROMOTEYOURSITE','Promoviši svoju web stranicu');
define('_PROMOTE01','Možda si zainteresovan za \'Ocjeni moju web Stranicu\' mogućnost koju ti pružamo. Može postaviti slikicu (ili čak i formular za ocjenjivanje) na svoju web stranicu te tako povećati broj glasova koje dobija tvoj resurs. Odaberi jednu od ponuđenih opcije:');
define('_TEXTLINK','Text Link');
define('_PROMOTE02','Jedan od načina da linkuješ svoju web stranicu sa formularom za ocjenjivanje je uz pomoć jednostavnog text linka:');
define('_HTMLCODE1','HTML kod za ovaj slučaj, je:');
define('_THENUMBER','Broj');
define('_IDREFER','u HTML kodu je ID broj tvog sajta u $sitename bazi. Pazi da ga ne izostaviš.');
define('_BUTTONLINK','Link Dugme');
define('_PROMOTE03','Ako ti treba nešto malo ljepše od običnog texta, možda će ti odgovarati malo dugme:');
define('_RATEIT','Ocjeni ovu stranicu!');
define('_HTMLCODE2','Izvorišni kod za dugme iznad je:');
define('_REMOTEFORM','Formular za glasanje sa tvoje web stranice');
define('_PROMOTE04','Ako budeš varao, uklonićemo tvoj link. Pošto znaš pravila, evo kako izgleda formular za glasanje.');
define('_VOTE4THISSITE','Glasaj za ovu stranicu!');
define('_HTMLCODE3','Koristeći ovaj formular korisnici mogu ocjenjivati resurs na tvojoj stranici a rezultati se spremaju ovdje. Formular iznad je isključen, ali kod ispod će raditi ako ga jednostavno dodaš na svoju web stranicu. Source kod je dat ispod:');
define('_PROMOTE05','Hvala! i sretno sa ocjenama!');
define('_THANKSBROKEN','Hvala na pomoći u održanju integriteta direktorija.');
define('_SECURITYBROKEN','Iz sigurnosnih razloga tvoj username i IP adresa će privremeno biti sačuvani.');
define('_THANKSFORINFO','Hvala na informacijama.');
define('_LOOKTOREQUEST','Uskoro ćemo pogledati tvoj zahtjev.');
define('_SENDREQUEST','Pošalji zahtjev');
define('_THANKSTOTAKETIME','Hvala što si odvojio vrijeme da ocijeniš stranicu ovdje na ');
define('_RETURNTO','Vrati se na');
define('_RATENOTE1','Nemoj glasati za isti resurs dva puta.');
define('_RATENOTE2','Skala ide od 1 do 10, 1 kao najgore i 10 kao najblje.');
define('_RATENOTE3','Budi objektivan kad glasaš, ako svi dobijaju 1 ili 10, ocjene nemaju puno smisla.');
define('_RATENOTE5','Nemoj glasati za svoj ili za resurs konkurencije.');
define('_YOUAREREGGED','Ti si registrovan i ulogovan korisnik.');
define('_FEELFREE2ADD','Slobodno dodaj komentar o ovoj stranici.');
define('_YOUARENOTREGGED','Nisi registrovan korisnik ili se nisi ulogovao.');
define('_IFYOUWEREREG','Da si se registrovao mogao bi dodati komentar na ovu stranicu.');
define('_MODIFY','Modifikuj');
define('_COMPLETEVOTE1','Tvoj glas se cijeni!');
define('_COMPLETEVOTE2','Već si glasao za ovaj resurs u prošlih $anonwaitdays dan(a).');
define('_COMPLETEVOTE3','Glasaj za jedan resurs samo jedanput.<br>Svi glasovi se loguju i pregledaju.');
define('_COMPLETEVOTE4','Ne možeš glasati za link koji si ti poslao.<br>Svi glasovi se loguju i pregledaju.');
define('_COMPLETEVOTE5','Nije izabrana ocjena - glas nije dodat');
define('_COMPLETEVOTE6','Samo jedan glas po IP adresi je dozvoljen unutar $outsidewaitdays dana.');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDDURL','Add this URL');
define('_EZTRANSFERDOWNLOAD','Transfer');
define('_EZTRANSFERDOWNLOADS','Transferiši sve downloade iz ove kategorije');
define('_DELEZDOWNLOADSCATWARNING','UPOZORENJE : Dali ste sigurni da želite obrisati ovu kategoriju? Također će te obrisati sve podkategorije i dodane downloade!');
define('_DELCONTENTCAT','UPOZORENJE: Dali ste sigurni da želite izbrisati ovu kategoriju? Stranice pod ovom kategorijom, ako postoje, neće biti izbrisane, niti će biti dodane drugim kategorijama.');
define('_DELCATEGORY','Obriši Kategoriju');
define('_DOWNLOADTITLE','Skini Naslov');
define('_DOWNLOADSINDB','Download u našoj bazi podataka');
define('_DOWNLOADSWAITINGVAL','Downloadi koji čekaju odobrenje');
define('_CLEANDOWNLOADSDB','Obriši glasove Downloada');
define('_BROKENDOWNLOADSREP','Izvješća lomljenih Download Linkova');
define('_DOWNLOADMODREQUEST','Potražena Download Modifikacija');
define('_ADDNEWDOWNLOAD','Dodaj Novi Download');
define('_MODDOWNLOAD','Modifikuj Download');
define('_WEBDOWNLOADSADMIN','Kontrol Panel Downloada');
define('_DNOREPORTEDBROKEN','Nema prijavljenih slomljenih linkova.');
define('_DUSERREPBROKEN','Korisnik prijavio slomljeni link');
define('_DIGNOREINFO','Ignriši (Briše sve <b><i>prijave</i></b> za dati download)');
define('_DDELETEINFO','Obriši (Briše sve <b><i>neispravne downloade</i></b> i <b><i>prijave</i></b> za dati download)');
define('_DOWNLOADOWNER','Vlasnik Downloada');
define('_DUSERMODREQUEST','Korisnik zahtjeva modifikaciju Downloada');
define('_DOWNLOADVALIDATION','Odobravanje Downloada');
define('_CHECKALLDOWNLOADS','Provjeri Sve Downloade');
define('_VALIDATEDOWNLOADS','Odobri Download');
define('_NEWDOWNLOADADDED','Novi Download Dodan Bazi Podataka');
