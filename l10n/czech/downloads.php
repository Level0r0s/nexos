<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/czech/downloads.php,v $
  $Revision: 9.6 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:50 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','Download, který požadujete, neexistuje.');
define('_CATEGORIES','Kategorie');
define('_LVOTES','hlasovalo');
define('_TOTALVOTES','Celkem hlasovalo:');
define('_THEREARE','V současné době je');
define('_NOMATCHES','Nebyl nalezen záznam na váš požadavek');
define('_SCOMMENTS','Komentáře');
define('_UNKNOWN','Neznámé');
define('_AUTHORNAME','Jméno autora');
define('_AUTHOREMAIL','Autorův e-mail');
define('_DOWNLOADNAME','Název souboru');
define('_ADDTHISFILE','Přidat tento soubor');
define('_INBYTES','v bytech');
//define('_FILESIZE','Velikost souboru');
//define('_VERSION','Verze');
//define('_AUTHOR','Autor');
define('_HOMEPAGE','Domovská stránka');
define('_DOWNLOADNOW','Začít stahovat tento soubor!');
define('_RATERESOURCE','Ohodnoťte tento produkt');
define('_FILEURL','Adresa souboru');
define('_ADDDOWNLOAD','Přidat ke stažení');
define('_DOWNLOADSMAIN','Hlavní kategorie');
define('_DOWNLOADCOMMENTS','Komentáře');
define('_DOWNLOADSMAINCAT','Hlavní kategorie');
define('_ADDADOWNLOAD','Přidat soubor ke stažení');
define('_DSUBMITONCE','Pošlete soubor pouze jednou.');
define('_DPOSTPENDING','Všechny poslané soubory musí být ověřeny.');
define('_RESSORTED','Soubory jsou momentálně řazeny');
define('_DOWNLOADSNOTUSER1','Nejste registrovaný uživatel nebo nejste přihláen(a).');
define('_DOWNLOADSNOTUSER2','Pokud se zaregistrujete, můžete přidávat soubory ke stažení na tomto webu.');
define('_DOWNLOADSNOTUSER3','Stát se registrovaným uživatelem je snadný a rychlý proces...');
define('_DOWNLOADSNOTUSER4','Proč vyžadujeme registraci?');
define('_DOWNLOADSNOTUSER5','Chceme vám poskytnou služby nejvyšší kvality,');
define('_DOWNLOADSNOTUSER6','Každá položka je samostaně zkontrolována a odsouhlasena našimi spolupracovníky.');
define('_DOWNLOADSNOTUSER7','Doufáme, že vám budeme poskytovat pouze hodnotné informace.');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink("Your_Account").'">Založit účet</a> 
define('_DOWNLOADALREADYEXT','CHYBA: Toto URL je již obsaženo v databázi!');
define('_DOWNLOADNOTITLE','CHYBA: Musíte zadat název souboru ke stažení!');
define('_DOWNLOADNOURL','CHYBA: Musíte zadat adresu souboru ke stažení!');
define('_DOWNLOADNODESC','CHYBA: Musíte zadat popis souboru ke stažení!');
define('_DOWNLOADRECEIVED','Přijali jsme váš odkaz ke zpracování. Díky!!');
define('_NEWDOWNLOADS','nových souborů');
define('_TOTALNEWDOWNLOADS','Celkem nových downloadů');
define('_DTOTALFORLAST','Celkem nových souborů za posledních ');
define('_DBESTRATED','Top');
define('_TRATEDDOWNLOADS','vech hodnocených souborů');
define('_SORTDOWNLOADSBY','Třídit podle');
define('_DCATNEWTODAY','Nové dnes');
define('_DCATLAST3DAYS','Nové za poslední 3 dny');
define('_DCATTHISWEEK','Nové za tento týden');
define('_DDATE1','data (nejdříve starší)');
define('_DDATE2','data (nejdříve novější)');
define('_DOWNLOADS','stažení');
define('_DOWNLOADPROFILE','Profil');
define('_DOWNLOADRATINGDET','Detaily hodnocení');
define('_EDITTHISDOWNLOAD','Upravit tento soubor');
define('_DOWNLOADRATING','Hodnocení');
define('_DOWNLOADVOTE','Hlasovat!');
define('_DONLYREGUSERSMODIFY','Pouze registrovaní uživatelé mohou navrhovat změny.  Prosím <a href="'.getlink("Your_Account").'">zaregistrujte se, nebo se přihlašte</a>.');
define('_REQUESTDOWNLOADMOD','Požadavek na úpravu souboru pro stažení');
define('_DOWNLOADID','ID souboru ke stažení');
define('_DLETSDECIDE','Hlasováním pomáháte ostatním uživatelům při rozhodování který soubor stáhnout.');
define('_DRATENOTE4','You can view a list of the <a href="'.getlink("Downloads&amp;d_op=TopRated").'">Top Rated Resources</a>.');
define('_POPULAR','Populární');
define('_TOPRATED','Nejlépe hodnocené');
define('_ADDITIONALDET','Detaily');
define('_EDITORREVIEW','Kontroloval');
define('_REPORTBROKEN','Zpráva o neplatném odkazu');
define('_AND','a');
define('_INDB','v naší databázii');
define('_INSTRUCTIONS','Instrukce');
define('_USERANDIP','Přezdívka a IP adresa jsou zaznamenávány, netýrejte prosím náš systém.');
define('_LDESCRIPTION','Popis: (max. 255 znaků)');
define('_CHECKFORIT','Nepište nám e-maily. Váš odkaz bude prověřen co nejdříve.');
define('_LASTWEEK','Poslední týden');
define('_LAST30DAYS','Posledních 30 dní');
define('_1WEEK','1 týden');
define('_2WEEKS','2 týdny');
define('_30DAYS','30 dní');
define('_ADDEDON','Přidáno dne:');
define('_RATING','Hodnocení');
define('_DETAILS','Detaily');
define('_OF','ze');
define('_TVOTESREQ','je minimum poadovaných hlasů');
define('_SHOWTOP','Ukázat TOP');
define('_MOSTPOPULAR','Nejpopulárnější - TOP');
define('_OFALL','ze všech');
define('_POPULARITY','Oblíbené');
define('_SELECTPAGE','Vybrat stránku');
define('_MAIN','Hlavní');
define('_NEWTODAY','Nové dnes');
define('_NEWLAST3DAYS','Nové za poslední 3 dny');
define('_NEWTHISWEEK','Nové za tento týden');
define('_POPULARITY1','Oblíbeností (od nejméně po nejvíce)');
define('_POPULARITY2','Oblíbeností (od nejvíce po nejméně)');
define('_TITLEAZ','Názvu (od A do Z)');
define('_TITLEZA','Názvu (od Z do A)');
define('_RATING1','Hodnocení (od nejniího k nejvyímu)');
define('_RATING2','Hodnocení (od nejvyího k nejniímu)');
define('_SEARCHRESULTS4','Výsledky hledání pro heslo');
define('_USUBCATEGORIES','Subkategorie');
define('_TRY2SEARCH','Pokuste se najít');
define('_INOTHERSENGINES','v dalších vyhledávačích');
define('_EDITORIAL','Úvodník');
define('_EDITORIALBY','Úvodník napsal');
define('_NOEDITORIAL','Není dostupný žádný komentář k tomuto webu.');
define('_RATETHISSITE','Hodnotit tento web');
define('_ISTHISYOURSITE','Je to váš web?');
define('_ALLOWTORATE','Umožněte vašim uživatelům hodnotit přímo z vaší stránky!');
define('_OVERALLRATING','Celkové hodnocení');
define('_TOTALOF','Celkem z');
define('_USER','uživatel');
define('_USERAVGRATING','průměrné hodnocení');
define('_NUMRATINGS','# z hodnocených');
define('_REGISTEREDUSERS','Registrovaní uživatelé');
define('_NUMBEROFRATINGS','Počet hodnocených');
define('_NOREGUSERSVOTES','Nehlasoval žádný registrovaný uživatel');
define('_BREAKDOWNBYVAL','Chyba v hodnocení u');
define('_LTOTALVOTES','celkem hlasů');
define('_HIGHRATING','Vysoké hodnocení');
define('_LOWRATING','Nízké hodnocení');
define('_NUMOFCOMMENTS','Počet komentářů');
define('_WEIGHNOTE','* Poznámka: Porovnávají se hlasy registrovaných a neregistrovaných uživatelů');
define('_NOUNREGUSERSVOTES','žádný neregistrovaný uživatel nehlasoval');
define('_WEIGHOUTNOTE','* Poznámka: Děláme rozdíl mezi hodnocením registrovaných a hodnotitelů od jinud');
define('_NOOUTSIDEVOTES','Nehodnotil nikdo od jinud');
define('_OUTSIDEVOTERS','Hlasy od jinud');
define('_UNREGISTEREDUSERS','Neregistrovaní uživatelé');
define('_PROMOTEYOURSITE','Podporujte svůj web');
define('_PROMOTE01','Připravili jsme pro vás několik moností, jak hodnotit vaí stránku v naem Archívu odkazů.');
define('_TEXTLINK','Textový odkaz');
define('_PROMOTE02','Jednou z cest k hodnocení vaich stránek je jednoduchý textový odkaz');
define('_HTMLCODE1','Zkopírujte si tento HTML kód na svou stránku:');
define('_THENUMBER','Číslo');
define('_IDREFER','v tomto kódu znamená ID, pod kterým je uložen odkaz v naši databázi. Přesvědčte se, prosím, že odkaz skutečně odkazuje na vaši stránku.');
define('_BUTTONLINK','Tlačítko');
define('_PROMOTE03','Pokud hledáte něco jiného než jednoduchý textový odkaz, můžete použít toto tlačítko:');
define('_RATEIT','Hodnotit tuto stránku!');
define('_HTMLCODE2','Kód pro přidání je zde:');
define('_REMOTEFORM','Dálkový hodnotící formulář');
define('_PROMOTE04','Nezneužívejte hodnotící formuláře. Naše pravidla jsou jednoduchá: Pokud najdeme web s formulářem, který neodpovídá zápisu v databázi, zablokujeme možnost hodnocení tohoto webu nebo ho vyřadíme z naší databáze. ');
define('_VOTE4THISSITE','Hlasujte pro tuto stránku!');
define('_HTMLCODE3','Pokud použijete tento formulář, mohou návštěvníci vaší stránky hodnotit váš web přímo na vaší stránce. Předchozí dva typy to neumožňují. Zdrojový kód formuláře je zde:');
define('_PROMOTE05','Díky a hodně štěstí v hodnocení!');
define('_THANKSBROKEN','Díky za vaši pomoc při udržování platnosti databáze.');
define('_SECURITYBROKEN','Z bezpečnostních důvodů bude dočasně zaznamenána vae IP adresa a u.jméno.');
define('_THANKSFORINFO','Díky za informaci.');
define('_LOOKTOREQUEST','Co nejdříve váši žádost vyřídíme.');
define('_SENDREQUEST','Poslat žádost');
define('_THANKSTOTAKETIME','Díky za čas věnovaný hodnocení stránky na');
define('_RETURNTO','Zpět na');
define('_RATENOTE1','Nehlasujte, prosím, pro jeden odkaz více než jednou..');
define('_RATENOTE2','Stupnice je 1 - 10, kde 1 je nejhorší a 10 nejlepší.');
define('_RATENOTE3','Prosím buďte objektivní, pokud bude kadý hlasovat 1 nebo 10, není hodnocení k ničemu.');
define('_RATENOTE5','Nehlasujte pro svůj příspěvek.');
define('_YOUAREREGGED','Jste registrovaný uživatel a jste přihláen(a).');
define('_FEELFREE2ADD','Neostýchejte se komentovat tuto stránku.');
define('_YOUARENOTREGGED','Nejste registrovaný uživatel nebo nejste přihlášen(a). ');
define('_IFYOUWEREREG','Pokud se zaregistrujete, můžete komentovat na tomto webu. ');
define('_MODIFY','Upravit');
define('_COMPLETEVOTE1','Your vote is appreciated.');
define('_COMPLETEVOTE2','You have already voted for this resource in the past '.$anonwaitdays.' day(s).');
define('_COMPLETEVOTE3','Vote for a resource only once.<br />All votes are logged and reviewed.');
define('_COMPLETEVOTE4','You cannot vote on a link you submitted.<br />All votes are logged and reviewed.');
define('_COMPLETEVOTE5','No rating selected - no vote tallied');
define('_COMPLETEVOTE6','Only one vote per IP address allowed every '.$outsidewaitdays.' day(s).');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDDURL','Add this URL');
define('_EZTRANSFERDOWNLOAD','Transfer');
define('_EZTRANSFERDOWNLOADS','Transfer all downloads from category');
define('_DELEZDOWNLOADSCATWARNING','WARNING : Are you sure you want to delete this category? You will delete all sub-categories and attached downloads as well!');
define('_DELCONTENTCAT','WARNING: Are you sure you want to delete this category? Pages under this category, if they exist, will not be removed, but will not be attached to any category.');
define('_DELCATEGORY','Smazat kategorii');
define('_DOWNLOADTITLE','Download Title');
define('_DOWNLOADSINDB','Downloads in our Database');
define('_DOWNLOADSWAITINGVAL','Downloads Waiting for Validation');
define('_CLEANDOWNLOADSDB','Clean Downloads Votes');
define('_BROKENDOWNLOADSREP','Broken Downloads Reports');
define('_DOWNLOADMODREQUEST','Download Modification Requests');
define('_ADDNEWDOWNLOAD','Přidat nový download');
define('_MODDOWNLOAD','Změnit download');
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
define('_NEWDOWNLOADADDED','Nový download přidán do databáze');
