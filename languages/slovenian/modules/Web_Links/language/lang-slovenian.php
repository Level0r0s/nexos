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
  $Source: /cvs/languages/slovenian/modules/Web_Links/language/lang-slovenian.php,v $
  $Revision: 1.2 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:42 $
***********************************************************************/
if (!defined('CPG_NUKE')) { die('You do not have permission to access this file'); }  
  
global $sitename, $anonwaitdays, $outsidewaitdays;
define('_PREVIOUS','Prejnja stran');
define('_NEXT','Naslednja stran');
define('_YOURNAME','Vae ime');
define('_CATEGORIES','Kategorije');
define('_LVOTES','glasovi');
define('_TOTALVOTES','Skupno glasov:');
define('_LINKTITLE','Naslov povezave');
define('_HITS','Prebrano');
define('_THEREARE','Trenutno se nahaja');
define('_NOMATCHES','Noben rezultat, ki bi odgovarjal vaemu iskanju ni bil najden');
define('_SCOMMENTS','Komentarji');
define('_ADDLINK','Dodaj povezavo');
define('_POPULAR','Popularno');
define('_TOPRATED','Najvije ocenjeno');
define('_RANDOM','Naključno');
define('_LINKSMAIN','Gl. kazalo povezav');
define('_LINKCOMMENTS','Komentarji povezav');
define('_ADDITIONALDET','Dodatni detajli');
define('_EDITORREVIEW','Recenzija urednika');
define('_REPORTBROKEN','Prijavi nepravilno povezavo');
define('_LINKSMAINCAT','Gl. kategorije povezav');
define('_AND','in');
define('_INDB','v nai bazi podatkov');
define('_ADDALINK','Dodaj novo povezavo');
define('_INSTRUCTIONS','Navodila');
define('_SUBMITONCE','Eno povezavo poljite samo enkrat.');
define('_POSTPENDING','Vse povezave se objavljajo po preverjanju.');
define('_USERANDIP','Uporabniko ime in IP se shranjuje, zato prosim da sistema ne zlouporabljate.');
define('_PAGETITLE','Naslov strani');
define('_PAGEURL','URL strani');
define('_YOUREMAIL','Va E-mail');
define('_LDESCRIPTION','Opis: (255 znakov max)');
define('_ADDURL','Dodaj ta URL');
define('_LINKSNOTUSER1','Niste član, ali pa se niste prijavili(login).');
define('_LINKSNOTUSER2','Samo člani lahko dodajajo povezave na to stran.');
define('_LINKSNOTUSER3','Registriranje je hiter in enostaven proces.');
define('_LINKSNOTUSER4','Zakaj zahtevamo registracijo za pristop določenim stvarem?');
define('_LINKSNOTUSER5','Zato, da Vam lahko ponudimo samo vsebino visoke kvalitete,');
define('_LINKSNOTUSER6','Zato, ker vsako postavko posebej pregleduje in preverja nae osebje.');
define('_LINKSNOTUSER7','Zato, ker Vam elimo Vam ponuditi samo točne in prave informacije.');
define('_LINKSNOTUSER8','<a href="modules.php?name=Your_Account">Registrirajte se</a>');
define('_LINKALREADYEXT','NAPAKA: Ta URL se e nahaja v bazi podatakov!');
define('_LINKNOTITLE','NAPAKA: Morate napisati naslov URL-ja!');
define('_LINKNOURL','NAPAKA: Morate napisati naslov URL-ja!');
define('_LINKNODESC','NAPAKA: Morate napisati opis URL-ja!');
define('_LINKRECEIVED','Va predlog je bil sprejet. Hvala!');
define('_EMAILWHENADD','Ko bo Va predlog odobren boste prejeli E-mail.');
define('_CHECKFORIT','Vaega e-mail naslova niste vpisali, vendar pa bomo vseeno kmalu preverili Vao povezavo.');
define('_NEWLINKS','Nove povezave');
define('_TOTALNEWLINKS','Skupno novih povezav');
define('_LASTWEEK','Prejnji teden');
define('_LAST30DAYS','Preteklih 30 dni');
define('_1WEEK','1 teden');
define('_2WEEKS','2 tedna');
define('_30DAYS','30 dni');
define('_TOTALFORLAST','Skupno novih povezav v zadnjih');
define('_ADDEDON','Dodano dne');
define('_RATING','Ocena');
define('_RATESITE','Oceni to stran');
define('_DETAILS','Podrobnosti');
define('_BESTRATED','Najvije ocenjene strani - Top');
define('_OF','od');
define('_TRATEDLINKS','skupno ocenjenih strani');
define('_TVOTESREQ','glasov je minimum');
define('_SHOWTOP','Pokai Top');
define('_MOSTPOPULAR','Najpopularneje - Top');
define('_OFALL','od vseh');
define('_SORTLINKSBY','Sortiraj povezave po');
define('_SITESSORTED','Strani so trenutno sortirane po');
define('_POPULARITY','Popularnosti');
define('_SELECTPAGE','Izberi stran');
define('_MAIN','Gl. kazalo');
define('_NEWTODAY','Nove danes');
define('_NEWLAST3DAYS','Nove zadnje tri dni');
define('_NEWTHISWEEK','Nove tega tedna');
define('_CATNEWTODAY','Nove povezave te kategorije dodane danes');
define('_CATLAST3DAYS','Nove povezave te kategorije dodane v zadnjih treh dnevih');
define('_CATTHISWEEK','Nove povezave te kategorije dodane ta teden');
define('_POPULARITY1','Popularnost (izpis povezav - od najmanj do največ obiska)');
define('_POPULARITY2','Popularnost (izpis povezav - od največ do najmanj obiska)');
define('_TITLEAZ','Naslovu (A do )');
define('_TITLEZA','Naslovu ( do A)');
define('_DATE1','Datumu (Stareje povezave prikazani prve)');
define('_DATE2','Datumu (Noveje povezave prikazane prve)');
define('_RATING1','Ocenah (od najnije do najvije ocenjenih)');
define('_RATING2','Ocenah (od najvije do najnije ocenjenih)');
define('_SEARCHRESULTS4','Rezultati iskanja za');
define('_USUBCATEGORIES','Pod-kategorije');
define('_LINKS','Povezav');
define('_TRY2SEARCH','Poizkusi iskati');
define('_INOTHERSENGINES','na drugih iskalnikih');
define('_EDITORIAL','Recenzija');
define('_LINKPROFILE','Profil povezave');
define('_EDITORIALBY','Recenzijo napisal');
define('_NOEDITORIAL','Zasedaj ni recenzij za to stran.');
define('_VISITTHISSITE','Običite to stran');
define('_RATETHISSITE','Ocenite to stran');
define('_ISTHISYOURSITE','Ali je to Vaa stran?');
define('_ALLOWTORATE','Omogočite ostalim obiskovalcem da ocenjujejo Vao povezavo na Vae strani!');
define('_LINKRATINGDET','Podrobnosti o oceni povezave');
define('_OVERALLRATING','Overall Rating');
define('_TOTALOF','Skupno od');
define('_USER','uporabnik');
define('_USERAVGRATING','Povprečna ocena uporabnika');
define('_NUMRATINGS','# ocen');
define('_EDITTHISLINK','Spremeni to povezavo');
define('_REGISTEREDUSERS','Registrirani uporabniki');
define('_NUMBEROFRATINGS','tevilo ocen');
define('_NOREGUSERSVOTES','Ni ocena registriranih uporabnikov');
define('_BREAKDOWNBYVAL','Razslojevanje ocen po vrednosti');
define('_LTOTALVOTES','skupno glasov');
define('_LINKRATING','Ocena povezave');
define('_HIGHRATING','Visoko ocenjeni');
define('_LOWRATING','Nizko ocenjeni');
define('_NUMOFCOMMENTS','tevilo komentarjev');
define('_WEIGHNOTE','* Opomba: Ocene registriranih uporabnikov imajo drugačno teo od ocen neregistriranih uporabnikov');
define('_NOUNREGUSERSVOTES','Ni ocen neregistriranih uporabnikov');
define('_WEIGHOUTNOTE','* Opomba: Ocene registriranih uporabnikov imaju drugačno teo od ocen zunajnih ocenjevalcev.');
define('_NOOUTSIDEVOTES','Ni zunanjih ocena');
define('_OUTSIDEVOTERS','Zunanji ocenjevalci');
define('_UNREGISTEREDUSERS','Neregistrirani uporabniki');
define('_PROMOTEYOURSITE','Promovirajte Vao stran');
define('_PROMOTE01','Morda Vas interesira nekaj remote \'Oceni stran\' opcij ki jih imamo. To Vam dopuča postavljanje slik (ali celo obrazca za ocenjevanje) na Vao stran z namenom večanja tevila glasov. Izberite eno od spodaj navedenih opcij:');
define('_TEXTLINK','Tekstualna povezava');
define('_PROMOTE02','Eden od načinov povezave na obrazec za ocenjevanje je preko običajne tekstualne povezave:');
define('_HTMLCODE1','V tom slučaju uporabite sledečo HTML kodo:');
define('_THENUMBER','tevilka');
define('_IDREFER','HTML koda  povezuje Va stran preko njene ID tevilke v $sitename bazi podatakov. PAZITE da postavite to tevilko(ID).');
define('_BUTTONLINK','Povezava preko gumba');
define('_PROMOTE03','Če ičete nekaj več od običjane tekstovne povezave, Vas morda zanima uporaba malega gumba za povezavo:');
define('_RATEIT','Oceni to stran!');
define('_HTMLCODE2','Source koda za gornji gumb je:');
define('_REMOTEFORM','Remote obrazec za ocenjevanje');
define('_PROMOTE04','Če boste pri tem varali bo Vaa povezava takoj izbrisana. Sedaj ko se razumemo, lahko pogledate kako trenutni remote obrazec izgleda.');
define('_VOTE4THISSITE','Glasujte za to stran!');
define('_LINKVOTE','Glasuj!');
define('_HTMLCODE3','Preko tega obrazca je omogočeno uporabnikom da ocenjujejo Vao stran direktno iz nje. Zgornji obrazec je onemogočen, vendar pa bo sledeča koda delovala če jo postavite na vao stran. Source koda je prikazana spodaj:');
define('_PROMOTE05','Hvala! In srečno z ocenami!');
define('_THANKSBROKEN','Hvala pri pomoči v ohranjevanju integritete.');
define('_THANKSFORINFO','Hvala za informacijo.');
define('_LOOKTOREQUEST','Hitro bomo pregledali Vao zahtevo.');
define('_ONLYREGUSERSMODIFY','Samo člani lahko predlagajo spremembe downloada. Prosim <a href="modules.php?name=Your_Account">registrirajte se ali pa se prijavite</a>.');
define('_REQUESTLINKMOD','Predlagaj izmenjavo povezav');
define('_LINKID','ID povezave');
define('_SENDREQUEST','Polji predlog');
define('_THANKSTOTAKETIME','Hvala za ocenjevanje strani na');
define('_LETSDECIDE','Komentarji in ocene uporabnika kakor Vi bo pomagalo ostalim uporabnikom pri odločitvi na katere povezave naj kliknejo.');
define('_RETURNTO','Nazaj na');
define('_RATENOTE1','Prosim, da ne glasujete za isto stvar večkrat.');
define('_RATENOTE2','Razpon ocen je 1 - 10, 1 je najslabe 10 najbolje.');
define('_RATENOTE3','Prosim bodite objektivni pri ocenjevanju. Če bodo vsi imeli oceno 1 ali 10, potem od  ocen ne bo nobene koristi.');
define('_RATENOTE4','Pogledate lahko listo <a href="modules.php?name=Web_Links&amp;l_op=TopRated">najvije ocenjenih strani</a>.');
define('_RATENOTE5','Ne glasujte za lastno ali nasprotnikovo stran.');
define('_YOUAREREGGED','Vi ste član in ste prijavljeni.');
define('_FEELFREE2ADD','Svobodno dodajte komentar o ter strani.');
define('_YOUARENOTREGGED','Vi niste član ali niste prijavljeni(login).');
define('_IFYOUWEREREG','Če bi bili član bi lahko komentirali to stran.');
define('_MODIFY','Spremeni');
define('_COMPLETEVOTE1','Hvala za Vae glasovanje.');
define('_COMPLETEVOTE2','Za to ste e glasovali tekom preteklih $anonwaitdays dni.');
define('_COMPLETEVOTE3','Glasujte samo enkrat.<br>Vsi glasovi se beleijo in bodo pregledani.');
define('_COMPLETEVOTE4','Ne morete glasovati za vao povezavo.<br>Vsi glasovi se beleijo in pregledujejo.');
define('_COMPLETEVOTE5','No rating selected - no vote tallied');
define('_COMPLETEVOTE6','Samo en glas po IP naslovu tekom $outsidewaitdays dni.');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDMAINCATEGORY','Dodaj glavno kategorijo');
define('_ADDSUBCATEGORY','Dodaj pod-kategorijo');
define('_WEBLINKSADMIN','Administracija povezav');
define('_EZTRANSFERLINKS','Transfer all links from category');
define('_CLEANLINKSDB','Očisti glaste linkov');
define('_EZTRANSFER','Transfer');
define('_BROKENLINKSREP','Prijave neizpravnih povezav');
define('_LINKMODREQUEST','Zahteve za spremembo povezav');
define('_ADDNEWLINK','Dodaj novo povezavo');
define('_MODLINK','Uredi povezavo');
define('_LINKSINDB','Povezav v bazi podatakov');
define('_LINKSWAITINGVAL','Povezav na čakanju');
define('_ERRORURLEXIST','NAPAKA: URL e obstaja v bazi podatakov!');
define('_ERRORNOTITLE','NAPAKA: Morate napisati naslov Vaega URL-ja!');
define('_ERRORNOURL','NAPAKA: Morate napisati URL!');
define('_ERRORNODESCRIPTION','NAPAKA: Morate napisati opis URL-ja!');
define('_NEWLINKADDED','Nova povezava dodana v bazo podatakov');
define('_YOURLINKAT','Vaa povezava na');
define('_LINKVALIDATION','Preverjanje povezave');
define('_CHECKALLLINKS','Preveri vse povezave');
//define('_VALIDATELINKS','Validate Links');
//define('_FAILED','Failed!');
//define('_BEPATIENT','(please be patient)');
//define('_VALIDATINGCAT','Validating Category (and all subcategories)');
//define('_VALIDATINGSUBCAT','Validating Sub-Category');
?>