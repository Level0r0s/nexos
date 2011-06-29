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
  $Source: /cvs/languages/norwegian/modules/Downloads/language/lang-norwegian.php,v $
  $Revision: 1.3 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:39 $
***********************************************************************/
if (!defined('CPG_NUKE')) { die('You do not have permission to access this file'); }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','Nedlastningen du har spurt etter, eksisterer ikke.');
define('_PREVIOUS','Forrige side');
define('_NEXT','Neste side');
define('_CATEGORIES','Kategorier');
define('_LVOTES','stemmer');
define('_TOTALVOTES','Totalt antall stemmer:');
define('_THEREARE','Det finnes');
define('_NOMATCHES','Ingen treff på din forespørsel');
define('_SCOMMENTS','Kommentarer');
define('_UNKNOWN','Ukjent');
define('_AUTHORNAME','Forfatterens navn');
define('_AUTHOREMAIL','Forfatterens E-postadresse');
define('_DOWNLOADNAME','Programnavn');
define('_ADDTHISFILE','Legg til denne filen');
define('_INBYTES','i bytes');
define('_FILESIZE','Filstørrelse');
define('_VERSION','Versjon');
define('_AUTHOR','Forfatter');
define('_HOMEPAGE','Hjemmeside');
define('_DOWNLOADNOW','Last ned denne filen nå!');
define('_RATERESOURCE','Poengsetting');
define('_FILEURL','Fil-link');
define('_ADDDOWNLOAD','Legg til nedlastning');
define('_DOWNLOADSMAIN','Nedlastningsindeks');
define('_DOWNLOADCOMMENTS','Nedlastningskommentarer');
define('_DOWNLOADSMAINCAT','Nedlastningsavdelingens hovedkategorier');
define('_ADDADOWNLOAD','Legg til ny nedlastning');
define('_DSUBMITONCE','Legg til unike nedlastninger kun en gang.');
define('_DPOSTPENDING','Alle nedlastninger blir lagret i databasen i påvente av godkjenning.');
define('_RESSORTED','Resursene sorteres nå etter');
define('_DOWNLOADSNOTUSER1','Du er ikke et registrert medlem eller du har ikke logget inn.');
define('_DOWNLOADSNOTUSER2','Når du registrerer deg kan du legge til filer for nedlastning på denne siten.');
define('_DOWNLOADSNOTUSER3','Å bli medlem er en enkel og smertefri prosess.');
define('_DOWNLOADSNOTUSER4','Hvorfor krever vi registrering for visse funksjoner?');
define('_DOWNLOADSNOTUSER5','Det er fordi vi vil gi deg høyest mulig kvalitet på innholdet.');
define('_DOWNLOADSNOTUSER6','Hver detalj blir kontrollert av vårt personale.');
define('_DOWNLOADSNOTUSER7','Vi håper å kunne tilby deg kun verdifull informasjon.');
define('_DOWNLOADSNOTUSER8','<a href="modules.php?name=Your_Account">Registrer deg som medlem</a>');
define('_DOWNLOADALREADYEXT','FEIL: Denne URLen er allerede i vår database!');
define('_DOWNLOADNOTITLE','FEIL: Du må skrive en TITTEL for din URL!');
define('_DOWNLOADNOURL','FEIL: Du må angi en URL!');
define('_DOWNLOADNODESC','FEIL: Du må angi en BESKRIVELSE for din URL!');
define('_DOWNLOADRECEIVED','Vi har mottatt ditt forslag. Takk!');
define('_NEWDOWNLOADS','Nye nedlastninger');
define('_TOTALNEWDOWNLOADS','Totalt antall nye nedlastninger');
define('_DTOTALFORLAST','Totalt antall nye nedlastninger de siste');
define('_DBESTRATED','Nedlastninger med høyst poengsum - Topp');
define('_TRATEDDOWNLOADS','totalt antall nedlastninger med poengsum');
define('_SORTDOWNLOADSBY','Sorter nedlastninger etter');
define('_DCATNEWTODAY','Dagens nye nedlastninger i denne kategorien');
define('_DCATLAST3DAYS','De siste 3 dagers nye nedlasninger i denne kategorien');
define('_DCATTHISWEEK','Denne ukens nye nedlastninger i denne kategorien');
define('_DDATE1','Dato (De eldste vises først)');
define('_DDATE2','Dato (De nyeste vises først)');
define('_DOWNLOADS','nedlastninger');
define('_DOWNLOADPROFILE','Nedlastningsprofil');
define('_DOWNLOADRATINGDET','Poengsettingsdetaljer');
define('_EDITTHISDOWNLOAD','Rediger denne nedlastningen');
define('_DOWNLOADRATING','Poengsetting');
define('_DOWNLOADVOTE','Stem!');
define('_DONLYREGUSERSMODIFY','Bare registrerte brukere kan foreslå nedlastingsendringer. Vennligst <a href="'.getlink("Your_Account").'">registrer deg eller logg inn</a>.');
define('_REQUESTDOWNLOADMOD','Be om modifisering av nedlastning');
define('_DOWNLOADID','NedlastningsID');
define('_DLETSDECIDE','Innspill fra brukere som deg vil hjelpe våre besøkende til bedre å velge hvilke nedlastninger som er best.');
define('_DRATENOTE4','Du kan se en liste over nedlastningene med høyest poengsum <a href="'.getlink("Downloads&amp;d_op=TopRated").'">her</a>.');
define('_POPULAR','Populær');
define('_TOPRATED','Høyest poengsum');
define('_ADDITIONALDET','Fler detaljer');
define('_EDITORREVIEW','Anmeldelse av redaktør');
define('_REPORTBROKEN','Rapporter ødelagt link');
define('_AND','og');
define('_INDB','i vår database');
define('_INSTRUCTIONS','Instruksjoner');
define('_USERANDIP','Brukernavn og IPadresse blir lagret. Ikke misbruk systemet.');
define('_LDESCRIPTION','Beskrivelse: (Maks 255 tegn)');
define('_CHECKFORIT','Du skrev ingen E-postadresse. Vi vil likevel se på din link.');
define('_LASTWEEK','Siste uken');
define('_LAST30DAYS','Siste 30 dager');
define('_1WEEK','1 uke');
define('_2WEEKS','2 uker');
define('_30DAYS','30 dager');
define('_ADDEDON','Lagt til');
define('_RATING','Karakter');
define('_DETAILS','Detaljer');
define('_OF','av');
define('_TVOTESREQ','minste antall stemmer som kreves');
define('_SHOWTOP','Vis Topp');
define('_MOSTPOPULAR','Mest Populære');
define('_OFALL','av alle');
define('_POPULARITY','Populæritet');
define('_SELECTPAGE','Velg side');
define('_MAIN','Hovedside');
define('_NEWTODAY','Nye i dag');
define('_NEWLAST3DAYS','Nye de siste 3 dagene');
define('_NEWTHISWEEK','Nye denne uken');
define('_POPULARITY1','Populæritet (Fra minst til mest treff)');
define('_POPULARITY2','Populæritet (Fra mest til minst treff)');
define('_TITLEAZ','Tittel (Fra A til Å)');
define('_TITLEZA','Tittel (Fra Å til A)');
define('_RATING1','Poengsum (Fra lavest til høyest)');
define('_RATING2','Poengsum (Fra høyest til lavest)');
define('_SEARCHRESULTS4','Søkeresultat for');
define('_USUBCATEGORIES','Underkategorier');
define('_TRY2SEARCH','Prøv å søke');
define('_INOTHERSENGINES','i andre søkemotorer');
define('_EDITORIAL','Leder');
define('_EDITORIALBY','Leder av');
define('_NOEDITORIAL','Ingen ledere er tilgjengelig for denne siten.');
define('_RATETHISSITE','Poengsett denne siten');
define('_ISTHISYOURSITE','Er dette din site?');
define('_ALLOWTORATE','La andre få stemme fra ditt egen site!');
define('_OVERALLRATING','Gjennomstnittlig poengsum');
define('_TOTALOF','Totalt');
define('_USER','Medlemer');
define('_USERAVGRATING','Medlemers gjennomsnittssum');
define('_NUMRATINGS','# av stemmer');
define('_REGISTEREDUSERS','Medlemer');
define('_NUMBEROFRATINGS','Antall stemmer');
define('_NOREGUSERSVOTES','Ingen medlemer har stemt');
define('_BREAKDOWNBYVAL','Fordelingen av stemmer basert på verdi');
define('_LTOTALVOTES','totalt antall stemmer');
define('_HIGHRATING','Høyeste poengsum');
define('_LOWRATING','Laveste poengsum');
define('_NUMOFCOMMENTS','Antall kommentarer');
define('_WEIGHNOTE','* Obs: Denne siten veier medlemers poengsum opp mot ikke-medlemers');
define('_NOUNREGUSERSVOTES','Ingen ikke-medlemer har stemt');
define('_WEIGHOUTNOTE','* Obs: Denne siten veier medlemers poengsum opp mot poengsummer fra andre siter');
define('_NOOUTSIDEVOTES','Ingen poengsummer fra andre siter');
define('_OUTSIDEVOTERS','Poengsummer fra andre siter');
define('_UNREGISTEREDUSERS','Ikke-registrerte medlemer');
define('_PROMOTEYOURSITE','Markedsfør din site');
define('_PROMOTE01','Du er kanskje interessert i de ulike \'Poengsettingsmodellene\' vi kan tilby. Disse gjør at du kan legge et bilde eller et skjema på din egen site slik at dine brukere kan stemme på deg direkte. Velg en av mulighetene under:');
define('_TEXTLINK','Tekstlink');
define('_PROMOTE02','En måte å linke på er ganske enkelt en tekstlink:');
define('_HTMLCODE1','HTML koden du bør bruke er følgende:');
define('_THENUMBER','Nummeret');
define('_IDREFER','i HTML koden refererer til din site IDnummer i $sitename database. Påse at dette nummeret er med.');
define('_BUTTONLINK','Knapp');
define('_PROMOTE03','Dersom du vil ha mer enn en vanlig tekst-link kan du bruke en knapp i steden:');
define('_RATEIT','Stem på dette webstedet!');
define('_HTMLCODE2','HTML koden for knappen over er:');
define('_REMOTEFORM','Skjema');
define('_PROMOTE04','Jukser du med dette skjemaet vil din link fjernes. Skjemaet ser slik ut.');
define('_VOTE4THISSITE','Stem på dette webstedet!');
define('_HTMLCODE3','Ved å bruke dette skjemaet blir poengsummen registrert direkte fra ditt websted. Skjemaet over er låst, men følgende HTML-kode virker, det er bare å klippe det ut og lime det inn på din side. HTML-koden vises under:');
define('_PROMOTE05','Takk! Og lykke til med dine stemmer!');
define('_THANKSBROKEN','Takk for at du hjelper til å vedlikeholde vår integritet.');
define('_SECURITYBROKEN','Av sikkerhetshensyn blir ditt brukernavn og din IPadresse midlertidig lagret.');
define('_THANKSFORINFO','Takk for informasjonen!');
define('_LOOKTOREQUEST','Vi vil se på dette så snart vi kan.');
define('_SENDREQUEST','Send');
define('_THANKSTOTAKETIME','Takk for at du stemte på en site her på');
define('_RETURNTO','Gå tilbake til');
define('_RATENOTE1','Stem ikke på samme sted mer enn en gang.');
define('_RATENOTE2','Skalaen går fra 1 til 10, der 1 er dårligst.');
define('_RATENOTE3','Vær objektiv i din stemming! Om alle får 10 mister poengene sin betydning');
define('_RATENOTE5','Stem ikke på ditt eget eller en motstanders websted.');
define('_YOUAREREGGED','Du er medlem og innlogget.');
define('_FEELFREE2ADD','Kommenter gjerne denne siten.');
define('_YOUARENOTREGGED','Du er ikke medlem eller ikke innlogget.');
define('_IFYOUWEREREG','Når du blir medlem kan du kommentere denne siten.');
define('_MODIFY','Modifisere');
define('_COMPLETEVOTE1','Vi setter pris på din stemme.');
define('_COMPLETEVOTE2','Du har allerede stemt på denne de(n) siste $anonwaitdays dagen(e).');
define('_COMPLETEVOTE3','Stem kun en gang.<br>Alle stemmer er logget og blir gjennomgått.');
define('_COMPLETEVOTE4','Du kan ikke stemme på en nedlastning du selv har lagt til.<br>Alle stemmer blir lagret og gjennomgått.');
define('_COMPLETEVOTE5','Ingen poengsum valgt - stemme ikke registrert');
define('_COMPLETEVOTE6','Kun en stemme per IP-adresse er tillat per $outsidewaitdays dag(er).');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_EZTRANSFERDOWNLOADS','Flytt alle nedlastninger fra kategori');
define('_DELEZDOWNLOADSCATWARNING','ADVARSEL: Er du sikker på at du vil slette denne kategorien? Du vil samtidig slette alle under-kategorier samt tilknyttede nedlastninger!');
define('_DELCONTENTCAT','ADVARSEL: Er du sikker på at du vil slette denne kategorien? Sider under denne kategorien, hvis det er noen, vil ikke slettes, men de vil ikke lenger være tilknyttet noen kategori.');
define('_DELCATEGORY','Slett kategori');
define('_DOWNLOADTITLE','Tittel');
define('_DOWNLOADSINDB','Filer for nedlastning i vår database');
define('_DOWNLOADSWAITINGVAL','Nedlastninger som venter på godkjenning');
define('_CLEANDOWNLOADSDB','Slett avstemninger på nedlastninger');
define('_BROKENDOWNLOADSREP','Ødelagte nedlastninger');
define('_DOWNLOADMODREQUEST','Redigeringsbegjæring på nedlastninger');
define('_ADDNEWDOWNLOAD','Legg til ny fil');
define('_MODDOWNLOAD','Rediger en nedlastning');
define('_WEBDOWNLOADSADMIN','Administrasjon av Nedlastninger');
define('_DNOREPORTEDBROKEN','Ingen ødelagte linker er rapportert.');
define('_DUSERREPBROKEN','Bruker-rapporterte ødelagte linker');
define('_DIGNOREINFO','Ignorere (Slette alle <b><i>rapporter</i></b> for en gitt nedlastning)');
define('_DDELETEINFO','Slett (Sletter <b><i>ødelagt link</i></b> samt <b><i>rapporter</i></b> for en gitt nedlastning)');
define('_DOWNLOADOWNER','Filens eier');
define('_DUSERMODREQUEST','Bruker-rapporterte modifiserings-ønsker');
define('_DOWNLOADVALIDATION','Godkjenning av nedlastning');
define('_CHECKALLDOWNLOADS','Kontroller ALLE nedlastninger');
define('_VALIDATEDOWNLOADS','Godkjenn nedlastninger');
define('_NEWDOWNLOADADDED','Filen er lagt til i databasen');

