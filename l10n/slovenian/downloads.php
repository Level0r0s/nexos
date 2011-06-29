<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/slovenian/downloads.php,v $
  $Revision: 9.11 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:40:02 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','The download you\'ve requested doesn\'t exists.');
define('_CATEGORIES','Kategorije');
define('_LVOTES','glasovi');
define('_TOTALVOTES','Skupno glasov:');
define('_THEREARE','Trenutno se nahaja');
define('_NOMATCHES','Najden ni bil noben rezultat, ki bi ustrezal vašemu iskanju');
define('_SCOMMENTS','Komentarji');
define('_UNKNOWN','Nepoznano');
define('_AUTHORNAME','Ime avtorja');
define('_AUTHOREMAIL','Avtorjev e-mail');
define('_DOWNLOADNAME','Ime programa');
define('_ADDTHISFILE','Dodaj to datoteko');
define('_INBYTES','v bytih');
//define('_FILESIZE','Velikost datoteke');
//define('_VERSION','Verzija');
//define('_AUTHOR','Avtor');
define('_HOMEPAGE','Domača stran ');
define('_DOWNLOADNOW','Prenesi to datoteko!');
define('_RATERESOURCE','Oceni datoteko(program)');
define('_FILEURL','Povezava na datoteko');
define('_ADDDOWNLOAD','Dodaj download');
define('_DOWNLOADSMAIN','Gl. kazalo downloada');
define('_DOWNLOADCOMMENTS','Komentarji downloada');
define('_DOWNLOADSMAINCAT','Gl. kategorije downloada');
define('_ADDADOWNLOAD','Dodaj nov download');
define('_DSUBMITONCE','Download pošljite samo enkrat.');
define('_DPOSTPENDING','Vse downloadi se objavljajo po preverjanju.');
define('_RESSORTED','Datoteke(programi) so trenutno sortirani po');
define('_DOWNLOADSNOTUSER1','Niste registriran član ali pa se niste prijavili.');
define('_DOWNLOADSNOTUSER2','Če bi bili registrirani, bi lahko dodajali downloade na to stran.');
define('_DOWNLOADSNOTUSER3','Registriranje je hiter in enostaven proces.');
define('_DOWNLOADSNOTUSER4','Zakaj zahtevamo registracijo za pristop do določenih stvari?');
define('_DOWNLOADSNOTUSER5','Zato, da Vam lahko ponudimo samo vsebino visoke kvalitete,');
define('_DOWNLOADSNOTUSER6','vsako datoteko pregleda in preveri');
define('_DOWNLOADSNOTUSER7','Delamo z namenom, da vam ponudimo samo koristne informacije..');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink("Your_Account").'">Registrirajte se</a>');
define('_DOWNLOADALREADYEXT','NAPAKA: URL že obstaja v bazi podatkov!');
define('_DOWNLOADNOTITLE','NAPAKA: Morate vpisat naslov URL-ja!');
define('_DOWNLOADNOURL','NAPAKA: Morate vnesti naslov URL-ja!');
define('_DOWNLOADNODESC','NAPAKA: Morate napisati opis URL-ja!');
define('_DOWNLOADRECEIVED','Prejeli smo vaš predlog. Hvala!');
define('_NEWDOWNLOADS','Novi downloadi');
define('_TOTALNEWDOWNLOADS','Skupno novih downloadov');
define('_DTOTALFORLAST','Skupno novih downloadov v zadnjih');
define('_DBESTRATED','Downloadi z najboljšimi ocenami - Top');
define('_TRATEDDOWNLOADS','skupno ocenjenih downloadov');
define('_SORTDOWNLOADSBY','Sortiraj downloade po');
define('_DCATNEWTODAY','Novi downloadi v tej kategoriji, dodani danes');
define('_DCATLAST3DAYS','Novi downloadi v tej kategoriji, dodani v zadnjih treh dnevih');
define('_DCATTHISWEEK','Novi downloadi v tej kategoriji, dodani ta teden');
define('_DDATE1','Datum (Stari downloadi se izpisujejo prvi)');
define('_DDATE2','Datum (Novi downloadi se ispisujejo prvi)');
define('_DOWNLOADS','downloadov');
define('_DOWNLOADPROFILE','Download profila');
define('_DOWNLOADRATINGDET','Download podrobnosti ocena');
define('_EDITTHISDOWNLOAD','Spremeni ta download');
define('_DOWNLOADRATING','Ocena downloada');
define('_DOWNLOADVOTE','Oceni!');
define('_DONLYREGUSERSMODIFY','Samo registrirani uporabniki lahko modificirajo download. Prosimo <a href="'.getlink("Your_Account").'">regisitrirajte se ali vpišite</a>.');
define('_REQUESTDOWNLOADMOD','Zahtevaj spremembo downloada');
define('_DOWNLOADID','ID downloada');
define('_DLETSDECIDE','Komentarji uporabnikov, kot ste vi, bodo pomagali drugim da se laže odločijo, na kateri download naj kliknejo.');
define('_DRATENOTE4','Lahko pogledate listo <a href="'.getlink("Downloads&amp;d_op=TopRated").'">najbolje ocenjenih downloadov</a>.');
define('_POPULAR','Popularno');
define('_TOPRATED','Najvišje ocenjeno');
define('_ADDITIONALDET','Dodatne podrobnosti');
define('_EDITORREVIEW','Recenzija urednika');
define('_REPORTBROKEN','Prijavi nepravilno povezavo');
define('_AND','in');
define('_INDB','v naši bazi podatkov');
define('_INSTRUCTIONS','Navodila');
define('_USERANDIP','Uporabniško ime in IP se shranjuje, zato prosimo, da sistema ne zlorabljate.');
define('_LDESCRIPTION','Opis: (255 znakov max)');
define('_CHECKFORIT','Niste vpisali svojega e-mail naslova, vendar pa bomo vseeno kmalu preverili vašo povezavo.');
define('_LASTWEEK','Prejšnji teden');
define('_LAST30DAYS','Preteklih 30 dni');
define('_1WEEK','1 teden');
define('_2WEEKS','2 tedna');
define('_30DAYS','30 dni');
define('_ADDEDON','Dodano dne');
define('_RATING','Ocena');
define('_DETAILS','Podrobnosti');
define('_OF','od');
define('_TVOTESREQ','glasov je minimum');
define('_SHOWTOP','Pokaži Top');
define('_MOSTPOPULAR','Najpopularnejše - Top');
define('_OFALL','od vseh');
define('_POPULARITY','Popularnosti');
define('_SELECTPAGE','Izberi stran');
define('_MAIN','Gl. kazalo');
define('_NEWTODAY','Nove danes');
define('_NEWLAST3DAYS','Nove zadnje tri dni');
define('_NEWTHISWEEK','Nove tega tedna');
define('_POPULARITY1','Popularnost (izpis povezav - od najmanj do največ obiska)');
define('_POPULARITY2','Popularnost (izpis povezav - od največ do najmanj obiska)');
define('_TITLEAZ','Naslovu (A do Ž)');
define('_TITLEZA','Naslovu (Ž do A)');
define('_RATING1','Ocenah (od najnižje do najvišje ocenjenih)');
define('_RATING2','Ocenah (od najvišje do najnižje ocenjenih)');
define('_SEARCHRESULTS4','Rezultati iskanja za');
define('_USUBCATEGORIES','Podkategorijee');
define('_TRY2SEARCH','Poskusi iskati');
define('_INOTHERSENGINES','na drugih iskalnikih');
define('_EDITORIAL','Recenzija');
define('_EDITORIALBY','Recenzijo napisal');
define('_NOEDITORIAL','Doslej ni recenzij za to stran.');
define('_RATETHISSITE','Ocenite to stran');
define('_ISTHISYOURSITE','Ali je to vaša stran?');
define('_ALLOWTORATE','Omogočite ostalim obiskovalcem ocenjevanje vaše povezave na vaše strani!');
define('_OVERALLRATING','Skupna ocena');
define('_TOTALOF','Skupno od');
define('_USER','uporabnik');
define('_USERAVGRATING','Povprečna ocena uporabnika');
define('_NUMRATINGS','# ocen');
define('_REGISTEREDUSERS','Registrirani uporabniki');
define('_NUMBEROFRATINGS','Število ocen');
define('_NOREGUSERSVOTES','Ni ocen registriranih uporabnikov');
define('_BREAKDOWNBYVAL','Segmentiranje ocen po vrednosti');
define('_LTOTALVOTES','skupno glasov');
define('_HIGHRATING','Visoko ocenjeni');
define('_LOWRATING','Nizko ocenjeni');
define('_NUMOFCOMMENTS','Število komentarjev');
define('_WEIGHNOTE','* Opomba: Ocene registriranih uporabnikov imajo drugačno teo od ocen neregistriranih uporabnikov');
define('_NOUNREGUSERSVOTES','Ni ocen neregistriranih uporabnikov');
define('_WEIGHOUTNOTE','* Opomba: Ocene registriranih uporabnikov imaju drugačno težo od ocen zunajnih ocenjevalcev.');
define('_NOOUTSIDEVOTES','Ni zunanjih ocen');
define('_OUTSIDEVOTERS','Zunanji ocenjevalci');
define('_UNREGISTEREDUSERS','Neregistrirani uporabniki');
define('_PROMOTEYOURSITE','Promovirajte svojo stran');
define('_PROMOTE01','Morda Vas zanimajo nekatere remote opcije \'Oceni stran\', ki jih imamo. To Vam omogoča postavljanje slik (ali celo obrazca za ocenjevanje) na vašo stran zato, da se poveča število glasov. Izberite eno od spodaj navedenih opcij:');
define('_TEXTLINK','Besedilna povezava:');
define('_PROMOTE02','Eden od načinov povezave na obrazec za ocenjevanje je preko običajne besedilne povezave:');
define('_HTMLCODE1','V tem primeru uporabite naslednjo HTML kodo:');
define('_THENUMBER','številka');
define('_IDREFER','HTML koda povezuje vašo stran preko njene ID številke v $sitename bazi podatakov. PAZITE, da določite to številko(ID).');
define('_BUTTONLINK','Povezava preko gumba');
define('_PROMOTE03','Če želite nekaj več od običajne besedilne povezave, vas morda zanima uporaba malega gumba za povezavo:');
define('_RATEIT','Oceni to stran!');
define('_HTMLCODE2','Izvorna koda za zgornji gumb je: ');
define('_REMOTEFORM','Remote obrazec za ocenjevanje');
define('_PROMOTE04','Če boste pri tem goljufali, bo vaša povezava takoj izbrisana. Ko smo to razčistili, lahko pogledate, kakšen je videti trenutni remote obrazec.');
define('_VOTE4THISSITE','Glasujte za to stran!');
define('_HTMLCODE3','Preko tega obrazca je uporabnikom omogočeno, da ocenjujejo vašo stran neposredno iz nje. Zgornji obrazec je onemogočen, vendar pa bo naslednja koda delovala, če jo postavite na vašo stran. Izvorna koda je prikazana spodaj:');
define('_PROMOTE05','Hvala! In srečno z ocenami!');
define('_THANKSBROKEN','Hvala za pomoč pri ohranjevanju integritete.');
define('_SECURITYBROKEN','Iz varnostnih razlogov sta vaše uporabniško ime in IP naslov začasno zabeležena.');
define('_THANKSFORINFO','Hvala za informacijo.');
define('_LOOKTOREQUEST','Vaš zahtevek bomo kmalu pregledali.');
define('_SENDREQUEST','Pošlji predlog');
define('_THANKSTOTAKETIME','Hvala za ocenjevanje strani na');
define('_RETURNTO','Nazaj na');
define('_RATENOTE1','Prosim, da ne glasujete za isto stvar večkrat.');
define('_RATENOTE2','Razpon ocen je 1 - 10, 1 je najslabše 10 najboljše.');
define('_RATENOTE3','Prosimo, bodite objektivni pri ocenjevanju. Če bodo vsi imeli oceno 1 ali 10, potem od ocen ne bo nobene koristi.');
define('_RATENOTE5','Ne glasujte za lastno ali nasprotnikovo stran.');
define('_YOUAREREGGED','Vi ste član in ste prijavljeni.');
define('_FEELFREE2ADD','Dodajte komentar o tej strani.');
define('_YOUARENOTREGGED','Vi niste član ali niste prijavljeni(login).');
define('_IFYOUWEREREG','Če bi bili član, bi lahko komentirali to stran.');
define('_MODIFY','Spremeni');
define('_COMPLETEVOTE1','Hvala za vaše glasovanje.');
define('_COMPLETEVOTE2','Za to ste že glasovali v teku preteklih $anonwaitdays dni.');
define('_COMPLETEVOTE3','Glasujte samo enkrat.<br>Vsi glasovi se beležijo in bodo pregledani.');
define('_COMPLETEVOTE4','Ne morete glasovati za svojo povezavo.<br>Vsi glasovi se beležijo in pregledujejo.');
define('_COMPLETEVOTE5','Ni izbrana ocena - glas ni upoštevan');
define('_COMPLETEVOTE6','Samo en glas za en IP naslov v teku $outsidewaitdays dni.');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDDURL','Dodaj tale URL');
define('_EZTRANSFERDOWNLOAD','Premakni');
define('_EZTRANSFERDOWNLOADS','Premakni vse downloade iz kategorije');
define('_DELEZDOWNLOADSCATWARNING','POZOR : Ste prepričani izbrisati tole kategorijo? Izbrisali boste tudi vse pod-kategorije in vse downloade!!');
define('_DELCONTENTCAT','POZOR : Ste prepričani izbrisati tole kategorijo? Strani pod kategorijo, če obstajajo, ne bodo odstranjene, ampak ne bodo dodane drugim kategorijam.');
define('_DELCATEGORY','Izbriši kategorijo');
define('_DOWNLOADTITLE','Naslov downloada');
define('_DOWNLOADSINDB','Download datotek v bazi podatakov');
define('_DOWNLOADSWAITINGVAL','Download datotek na čakanju');
define('_CLEANDOWNLOADSDB','Očisti glaste download datotek');
define('_BROKENDOWNLOADSREP','Prijave neizpravnih downloadal');
define('_DOWNLOADMODREQUEST','Zahteve za spremembe downloada');
define('_ADDNEWDOWNLOAD','Dodaj nov download');
define('_MODDOWNLOAD','Uredi download');
define('_WEBDOWNLOADSADMIN','Administracija downloada');
define('_DNOREPORTEDBROKEN','Ni prijave o neizpravnih downloadih.');
define('_DUSERREPBROKEN','uporabnik je prijavil Nepravilen(ne) download(e)');
define('_DIGNOREINFO','Ignoriraj (Brie vse <b><i>prijave</i></b> za dani download)');
define('_DDELETEINFO','Izbriši (Brie <b><i>Nepravilen download</i></b> in <b><i>prijave</i></b> za njega)');
define('_DOWNLOADOWNER','Lastnik downloada');
define('_DUSERMODREQUEST','Zahteva uporabnika za spremembo downloada');
define('_DOWNLOADVALIDATION','Preverjanje downloada');
define('_CHECKALLDOWNLOADS','Preveri vse downloade');
define('_VALIDATEDOWNLOADS','Preveri downloade');
define('_NEWDOWNLOADADDED','Nov download dodan v bazo podatakov');
