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
  $Source: /cvs/languages/slovak/modules/Web_Links/language/lang-slovak.php,v $
  $Revision: 1.2 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:41 $
***********************************************************************/
if (!defined('CPG_NUKE')) { die('You do not have permission to access this file'); }  
  
global $sitename, $anonwaitdays, $outsidewaitdays;
define('_PREVIOUS','Predchádzajúca strana');
define('_NEXT','Nasledujúca strana');
define('_YOURNAME','Vae meno');
define('_CATEGORIES','Kategórie');
define('_LVOTES','hlasovalo');
define('_TOTALVOTES','Celkom hlasovalo:');
define('_LINKTITLE','Názov odkazu');
define('_HITS',' krát čítané');
define('_THEREARE','V naej databáze sa nachádza');
define('_NOMATCHES','Nenaiel sa iadny výsledok');
define('_SCOMMENTS','Komentáre');
define('_ADDLINK','Prida odkaz');
define('_POPULAR','Obžúbené');
define('_TOPRATED','Vysoko hodnotené');
define('_RANDOM','Náhodné');
define('_LINKSMAIN','Hlavná stránka odkazov');
define('_LINKCOMMENTS','Komentár k odkazu');
define('_ADDITIONALDET','Detaily');
define('_EDITORREVIEW','Kontroloval');
define('_REPORTBROKEN','Správa o nesprávnom odkaze');
define('_LINKSMAINCAT','Hlavné kategórie odkazov');
define('_AND','a');
define('_INDB','v naej databáze');
define('_ADDALINK','Prida nový odkaz');
define('_INSTRUCTIONS','Intrukcie');
define('_SUBMITONCE','Prida jeden odkaz na webstránku iba raz.');
define('_POSTPENDING','Vetky odoslané odkazy na webstránky prejdú overením.');
define('_USERANDIP','Meno uívateža a IP adresa sú zaznamenané, prosím nezneuíva tento systém. Ak chcete prida kategóriu, resp. podkategóriu, zriadime.');
define('_PAGETITLE','Názov stránky');
define('_PAGEURL','URL stránky');
define('_YOUREMAIL','Vá e-mail');
define('_LDESCRIPTION','Popis: (max. 255 znakov)');
define('_ADDURL','Prida toto URL');
define('_LINKSNOTUSER1','Nie ste registrovaný uívatež alebo nie ste prihlásený.');
define('_LINKSNOTUSER2','Ako registrovaný uívatež môete pridáva odkazy na webstránku.');
define('_LINKSNOTUSER3','Sta sa registrovaným uívatežom je krátky a žahký proces.');
define('_LINKSNOTUSER4','Prečo vyadujeme registráciu pre prístup k istým funkciám?');
define('_LINKSNOTUSER5','Pretoe Vám chceme poskytnú čo najkvalitnejie sluby,');
define('_LINKSNOTUSER6','kadá poloka je individuálne skontrolovaná naim tímom.');
define('_LINKSNOTUSER7','Dúfame, e Vám poskytneme len hodnotné informácie.');
define('_LINKSNOTUSER8','<a href="modules.php?name=Your_Account">Zaregistrujte sa</a>');
define('_LINKALREADYEXT','CHYBA: Táto adresa je u v databáze!');
define('_LINKNOTITLE','CHYBA: Treba uvies názov stránky!');
define('_LINKNOURL','CHYBA: Treba uvies adresu stránky!');
define('_LINKNODESC','CHYBA: Treba uviest popis stránky!');
define('_LINKRECEIVED','Prijali sme vá odkaz na spracovanie. Vďaka.');
define('_EMAILWHENADD','Po preverení odkazu vám príde potvrdzujúci e-mail.');
define('_CHECKFORIT','Nezadali ste email. Vá odkaz aj tak preveríme čo najskôr.');
define('_NEWLINKS','Nové odkazy');
define('_TOTALNEWLINKS','Vetky nové odkazy');
define('_LASTWEEK','posledný týdeň');
define('_LAST30DAYS','Posledných 30 dní');
define('_1WEEK','1 týdeň');
define('_2WEEKS','2 týdne');
define('_30DAYS','30 dní');
define('_TOTALFORLAST','Nové odkazy pre posledných');
define('_ADDEDON','pridané');
define('_RATING','Hodnotenie');
define('_RATESITE','Ohodnoti túto stránku, nezabudnite sa vráti :-)');
define('_DETAILS','Detaily');
define('_BESTRATED','Najlepie hodnotené odkazy - Top');
define('_OF','z');
define('_TRATEDLINKS','celkom hodnotených odkazov');
define('_TVOTESREQ','je minimum potrebných hlasov');
define('_SHOWTOP','Zobrazi Top');
define('_MOSTPOPULAR','Najobžúbenejie odkazy - Top');
define('_OFALL','zo vetkých');
define('_SORTLINKSBY','Triedi podža');
define('_SITESSORTED','Odkazy na stránky sú triedené podža');
define('_POPULARITY','Obžúbené');
define('_SELECTPAGE','Vybra stranu');
define('_MAIN','Hlavné');
define('_NEWTODAY','Dnes nové');
define('_NEWLAST3DAYS','Nové za posledné 3 dni');
define('_NEWTHISWEEK','Nové za tento týdeň');
define('_CATNEWTODAY','Nové odkazy v tejto kategórii pridané dnes');
define('_CATLAST3DAYS','Nové odkazy v tejto kategórii pridané posledné 3 dni');
define('_CATTHISWEEK','Nové odkazy v tejto kategórii pridané tento týdeň');
define('_POPULARITY1','Obžúbenos (od menej po viac kliknutí)');
define('_POPULARITY2','Obžúbenos (od viac po menej kliknutí)');
define('_TITLEAZ','Názov (od A po Z)');
define('_TITLEZA','Názov (od Z po A)');
define('_DATE1','Dátum (starie odkazy prvé)');
define('_DATE2','Dátum (novie odkazy prvé)');
define('_RATING1','Hodnotenie (od najniieho po najvyie skóre)');
define('_RATING2','Hodnotenie (od najvyieho po najniie skóre)');
define('_SEARCHRESULTS4','Výsledky vyhžadávania pre heslo');
define('_USUBCATEGORIES','Podkategórie');
define('_LINKS','Odkazy');
define('_TRY2SEARCH','Skúsi vyhžada');
define('_INOTHERSENGINES','v iných vyhžadávačoch');
define('_EDITORIAL','Úvodník');
define('_LINKPROFILE','Profil webstránky');
define('_EDITORIALBY','Úvodník napísal');
define('_NOEDITORIAL','Pre tento web nie je dostupný iadny komentár.');
define('_VISITTHISSITE','Navtívi túto webstránku');
define('_RATETHISSITE','Hodnoti túto webstránku');
define('_ISTHISYOURSITE','Je to Vá výtvor?');
define('_ALLOWTORATE','Umoni ostatným uívatežom hodnoti priamo z ich webstránky!');
define('_LINKRATINGDET','Detaily hodnotenia webstránky');
define('_OVERALLRATING','Celkové hodnotenie');
define('_TOTALOF','Celkom z');
define('_USER','uívatež');
define('_USERAVGRATING','Priemerné uívatežské hodnotenie');
define('_NUMRATINGS','# z hodnotených');
define('_EDITTHISLINK','Upravi tento odkaz');
define('_REGISTEREDUSERS','Registrovaní uívatelia');
define('_NUMBEROFRATINGS','Počet hodnotených');
define('_NOREGUSERSVOTES','iadne hodnotenia registrovaných uívatežov.');
define('_BREAKDOWNBYVAL','Chyba v hodnotení u');
define('_LTOTALVOTES','hlasov celkom');
define('_LINKRATING','Hodnotenie odkazov');
define('_HIGHRATING','Vysoké hodnotenie');
define('_LOWRATING','Nízke hodnotenie');
define('_NUMOFCOMMENTS','Počet komentárov');
define('_WEIGHNOTE','Poznámka: Táto webstránka rozliuje registrovaných a neregistrovaných uívatežov.');
define('_NOUNREGUSERSVOTES','iadne hlasy od neregistrovaných uívatežov');
define('_WEIGHOUTNOTE','Poznámka: Táto webstránka rozliuje hodnotenie registrovaných a uívatežov z vonku.');
define('_NOOUTSIDEVOTES','iadne hlasy z vonku');
define('_OUTSIDEVOTERS','Hlasy z vonku');
define('_UNREGISTEREDUSERS','Neregistrovaní uívatelia');
define('_PROMOTEYOURSITE','Urobte reklamu Vaej stránke');
define('_PROMOTE01','Mono Vás bude zaujíma niekožko moností hodnotenia Vaej webstránky.');
define('_TEXTLINK','Textový odkaz');
define('_PROMOTE02','Jeden zo spôsobov ako sa dosta k hodnotiacemu formuláru je cez jednoduchý textový link:');
define('_HTMLCODE1','HTML kód, ktorý v tomto prípade môete poui, je nasledujúci:');
define('_THENUMBER','Číslo');
define('_IDREFER','v tomto HTML kóde znamená ID číslo Vaej stránky v databáze $sitename . Uistite sa, e skutočne odkazuje na Vau stránku.');
define('_BUTTONLINK','Tlačidlo');
define('_PROMOTE03','Ak chcete niečo viac, ako základný textový link, môete poui malé downloadové tlačidlo:');
define('_RATEIT','Hodnoti túto stránku!');
define('_HTMLCODE2','Zdrojový kód pre takéto tlačidlo je:');
define('_REMOTEFORM','Vzdialený formulár hodnotenia');
define('_PROMOTE04','Ak podvádzate, vymaeme Vá download. Toto je aktuálne hodnotenie:');
define('_VOTE4THISSITE','Hlasujte za túto stránku!');
define('_LINKVOTE','Hlasova!');
define('_HTMLCODE3','Tento formulár dovoluje uívatežom hodnoti zadaný link priamo z Vaej stránky a hodnotenie sa zaznamená sem. Zdrojový kód formulára:');
define('_PROMOTE05','Vďaka! A veža astia v hodnotení!');
define('_THANKSBROKEN','Ďakujeme za pomoc pri starostlivosti o celistvos adresára.');
define('_THANKSFORINFO','Vďaka za informáciu.');
define('_LOOKTOREQUEST','Vau poiadavku vybavíme čo najskôr.');
define('_ONLYREGUSERSMODIFY','Len registrovaní uívatežia môu da podnet na úpravu odkazu. Prosím <a href="modules.php?name=Your_Account">registeruj sa alebo sa prihlás</a>.');
define('_REQUESTLINKMOD','Poiadavka na úpravu odkazu');
define('_LINKID','Odkaz ID');
define('_SENDREQUEST','Odosla');
define('_THANKSTOTAKETIME','Vďaka, e ste si nali čas na ohodnotenie stránky');
define('_LETSDECIDE','Pomôte ostatným uívatežom rozhodnú sa na ktorý link je najlepie kliknú.');
define('_RETURNTO','Návrat na');
define('_RATENOTE1','Prosím, nehlasujte za tú istú webstránku viac ako raz.');
define('_RATENOTE2','Stupnica hodnotenia je 1 a 10, pričom 1 = úbohá a 10 = výborná úroveň.');
define('_RATENOTE3','Prosím, buďe pri hlasovaní objektívni, ak kadý dostane 1 alebo 10, hodnotenie nebude vežmi pouitežné.');
define('_RATENOTE4','Môete si pozrie <a href="modules.php?op=modload&name=Web_Links&file=index&l_op=TopRated">najlepie hodnotené zdroje</a>.');
define('_RATENOTE5','Nehlasujte za svoje vlastné príspevky.');
define('_YOUAREREGGED','Ste registrovaný uívatež a ste prihlásený.');
define('_FEELFREE2ADD','Neváhajte prida komentár k týmto webovým stránkam.');
define('_YOUARENOTREGGED','Nie ste registrovaný uívatež alebo nie ste prihlásený.');
define('_IFYOUWEREREG','Ako registrovaný uívatež môete prida vlastné komentáre k tejto stránke.');
define('_MODIFY','Zmeni');
define('_COMPLETEVOTE1','Ďakujeme za hlas.');
define('_COMPLETEVOTE2','ĄPred $anonwaitdays dňami ste u hlasovali za tento zdroj.');
define('_COMPLETEVOTE3','Hlasujte, prosím, iba raz.<br>Vetky hlasy sú zaznamenané a skontrolované.');
define('_COMPLETEVOTE4','Nemôete hlasova za link, ktorý ste sami pridali.<br>Vetky hlasy sú zaznamenané a skontrolované.');
define('_COMPLETEVOTE5','Nevybrali ste iadnu monos - hlas nebol uznaný');
define('_COMPLETEVOTE6','Z jednej IP adresy môete hlasova iba raz za $outsidewaitdays dní.');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDMAINCATEGORY','Prida hlavnú kategóriu');
define('_ADDSUBCATEGORY','Prida podkategóriu');
define('_WEBLINKSADMIN','Administrácia webových odkazov');
define('_EZTRANSFERLINKS','Presunú vetky linky z kategórie');
define('_CLEANLINKSDB','Vyčisti databázu hlasovaní');
define('_EZTRANSFER','Presun');
define('_BROKENLINKSREP','Hlásenia o zlých odkazoch');
define('_LINKMODREQUEST','Poiadavky na úpravu odkazov');
define('_ADDNEWLINK','Prida nový odkaz');
define('_MODLINK','Upravi odkaz');
define('_LINKSINDB','odkazov v databázi');
define('_LINKSWAITINGVAL','Odkazy čakajúce na overenie');
define('_ERRORURLEXIST','CHYBA: Toto URL je u v databáze!');
define('_ERRORNOTITLE','CHYBA: Treba uvies názov pre URL!');
define('_ERRORNOURL','CHYBA: Treba uvies adresu!');
define('_ERRORNODESCRIPTION','CHYBA: Treba uvies popis!');
define('_NEWLINKADDED','Nový odkaz pridaný do databázy');
define('_YOURLINKAT','Vá link na');
define('_LINKVALIDATION','Overenie odkazu');
define('_CHECKALLLINKS','Vybra vetky odkazy');
//define('_VALIDATELINKS','Validate Links');
//define('_FAILED','Failed!');
//define('_BEPATIENT','(please be patient)');
//define('_VALIDATINGCAT','Validating Category (and all subcategories)');
//define('_VALIDATINGSUBCAT','Validating Sub-Category');
?>