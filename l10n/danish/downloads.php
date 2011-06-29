<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/danish/downloads.php,v $
  $Revision: 9.7 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:51 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','Den download du anmoder om findes ikke.');
define('_CATEGORIES','Kategorier');
define('_LVOTES','stemmer');
define('_TOTALVOTES','Antal stemmer:');
define('_THEREARE','Der er');
define('_NOMATCHES','Søgningen gav ingen resultater');
define('_SCOMMENTS','Kommentarer');
define('_UNKNOWN','Ukendt');
define('_AUTHORNAME','Forfatternavn');
define('_AUTHOREMAIL','Forfatters e-mail-adresse');
define('_DOWNLOADNAME','Programnavn');
define('_ADDTHISFILE','Tilføj denne fil');
define('_INBYTES','i bytes');
//define('_FILESIZE','Filstørrelse');
//define('_VERSION','Version');
//define('_AUTHOR','Forfatter');
define('_HOMEPAGE','Hjemmeside');
define('_DOWNLOADNOW','Hent denne fil nu!');
define('_RATERESOURCE','Vurdere download');
define('_FILEURL','Adresse til fil');
define('_ADDDOWNLOAD','Foreslå nyt download');
define('_DOWNLOADSMAIN','Hovedkategorien i downloads');
define('_DOWNLOADCOMMENTS','Kommentarer til download');
define('_DOWNLOADSMAINCAT','Hovedkategorier i downloads');
define('_ADDADOWNLOAD','Foreslå nyt download');
define('_DSUBMITONCE','Indsend kun et forslag en gang.');
define('_DPOSTPENDING','Alle forslag skal godkendes før de aktiveres.');
define('_RESSORTED','Downloads sorteret efter');
define('_DOWNLOADSNOTUSER1','Du er ikke oprettet som bruger eller du er ikke logget ind.');
define('_DOWNLOADSNOTUSER2','Som bruger kan du foreslå nye downloads.');
define('_DOWNLOADSNOTUSER3','At blive oprettet som bruger er hurtigt og nemt.');
define('_DOWNLOADSNOTUSER4','Hvorfor kræver vi registrering for at opnå adgang til dele af vores site?');
define('_DOWNLOADSNOTUSER5','Fordi vi så kan tilbyde dig det bedst mulige kvalitetsindhold,');
define('_DOWNLOADSNOTUSER6','alt indhold bliver individuelt gennemgået og godkendt af vores team.');
define('_DOWNLOADSNOTUSER7','Vi ønsker udelukkende at kunne tilbyde dig kvalitetsindhold.');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink("Your_Account").'">Bliv oprettet som bruger</a>');
define('_DOWNLOADALREADYEXT','FEJL: Denne internetadresse findes allerede i databasen!');
define('_DOWNLOADNOTITLE','FEJL: Du skal indtaste et NAVN på din internetadresse!');
define('_DOWNLOADNOURL','FEJL: Du skal indtaste internetadressen!');
define('_DOWNLOADNODESC','FEJL: Du skal indtaste en BESKRIVELSE af din internetadresse!');
define('_DOWNLOADRECEIVED','Vi har modtaget dit forslag til download. Tak!');
define('_NEWDOWNLOADS','Nye downloads');
define('_TOTALNEWDOWNLOADS','Antal nye downloads');
define('_DTOTALFORLAST','Antal downloads for de sidste');
define('_DBESTRATED','Bedst vurderede downloads - Top');
define('_TRATEDDOWNLOADS','tantal vurderede downloads');
define('_SORTDOWNLOADSBY','Sorter downloads efter');
define('_DCATNEWTODAY','Nye downloads i denne kategori oprettet i dag');
define('_DCATLAST3DAYS','Nye downloads i denne kategori oprettet indenfor de sidste tre dage');
define('_DCATTHISWEEK','Nye downloads i denne kategori oprettet i denne uge');
define('_DDATE1','Dato (Gamle downloads først)');
define('_DDATE2','Dato (Nye downloads først)');
define('_DOWNLOADS','Downloads');
define('_DOWNLOADPROFILE','Downloadprofil');
define('_DOWNLOADRATINGDET','Oplysninger om vurdering af download');
define('_EDITTHISDOWNLOAD','Rediger denne download');
define('_DOWNLOADRATING','Download vurderinger');
define('_DOWNLOADVOTE','Stem!');
define('_DONLYREGUSERSMODIFY','Kun oprettet brugere kan foreslå ændring til Downloads. Venligst <a href="'.getlink("Your_Account").'">registrer dig eller log ind</a>.');
define('_REQUESTDOWNLOADMOD','Foreslå ændring af downloads');
define('_DOWNLOADID','Download ID');
define('_DLETSDECIDE','Tilbagemeldinger fra brugere som dig selv, hjælper andre brugere til at beslutte hvad de skal downloade.');
define('_DRATENOTE4','Du kan se en liste med de <a href="'.getlink("Downloads&amp;d_op=TopRated").'">Bedst Vurderede downloads</a>.');
define('_POPULAR','Populære');
define('_TOPRATED','Bedste');
define('_ADDITIONALDET','Yderligere oplysninger');
define('_EDITORREVIEW','Anmeldelse');
define('_REPORTBROKEN','Anmeld et ødelagt link');
define('_AND','og');
define('_INDB','i vores database');
define('_INSTRUCTIONS','Vejledning');
define('_USERANDIP','Brugernavn og IP-adresse bliver registreret, så vær venlig ikke at misbruge systemet.');
define('_LDESCRIPTION','Beskrivelse: (maks 255 tegn)');
define('_CHECKFORIT','Du skrev ikke en e-mail-adresse. Vi vil alligevel gennemse dit forslag snarest.');
define('_LASTWEEK','Sidste uge');
define('_LAST30DAYS','Sidste 30 dage');
define('_1WEEK','1 uge');
define('_2WEEKS','2 uger');
define('_30DAYS','30 dage');
define('_ADDEDON','Oprettet');
define('_RATING','Vurdering');
define('_DETAILS','Yderligere oplysninger');
define('_OF','af');
define('_TVOTESREQ','stemmer er påkrævet som minimum');
define('_SHOWTOP','Vis bedste');
define('_MOSTPOPULAR','Mest populære - Top');
define('_OFALL','af alle');
define('_POPULARITY','Popularitet');
define('_SELECTPAGE','Vælg side');
define('_MAIN','Hovedkategori');
define('_NEWTODAY','Nye i dag');
define('_NEWLAST3DAYS','Nye de sidste tre dage');
define('_NEWTHISWEEK','Nye denne uge');
define('_POPULARITY1','Popularitet (Færrest til flest hits)');
define('_POPULARITY2','Popularitet (Flest til færrest hits)');
define('_TITLEAZ','Titel (A til Å)');
define('_TITLEZA','Titel (Å til A)');
define('_RATING1','Vurdering (Laveste score til højeste score)');
define('_RATING2','Vurdering (Højeste score til laveste score)');
define('_SEARCHRESULTS4','Søgeresultater for');
define('_USUBCATEGORIES','Underkategorier');
define('_TRY2SEARCH','Prøv at søge');
define('_INOTHERSENGINES','i andre søgemaskiner');
define('_EDITORIAL','Redaktionel leder');
define('_EDITORIALBY','Anmeldelse af');
define('_NOEDITORIAL','Ingen anmeldelse er tilgængeligt for dette website.');
define('_RATETHISSITE','Vurdere denne side');
define('_ISTHISYOURSITE','Er dette dit website?');
define('_ALLOWTORATE','Tillad andre at Vurdere den fra dit website!');
define('_OVERALLRATING','Samlet vurdering');
define('_TOTALOF','Antal af');
define('_USER','Bruger');
define('_USERAVGRATING','Brugernes gennemsnitlige vurdering');
define('_NUMRATINGS','# af vurderinger');
define('_REGISTEREDUSERS','Registrerede brugere');
define('_NUMBEROFRATINGS','Antal vurdering');
define('_NOREGUSERSVOTES','Ingen registrerede brugerstemmer');
define('_BREAKDOWNBYVAL','Nedbryd vurdering efter værdi');
define('_LTOTALVOTES','Antal stemmer');
define('_HIGHRATING','Høje vurderinger');
define('_LOWRATING','Lave vurderinger');
define('_NUMOFCOMMENTS','Antal kommentarer');
define('_WEIGHNOTE','* Note: Vi vægter registrerede mod uregistrerede brugeres vurderinger.');
define('_NOUNREGUSERSVOTES','Ingen uregistrerede brugerstemmer.');
define('_WEIGHOUTNOTE','Note: Vi vægter registrerede mod udefrakommende stemme vurderinger');
define('_NOOUTSIDEVOTES','Ingen udefrakommende stemmer');
define('_OUTSIDEVOTERS','Udefrakommende stemmer');
define('_UNREGISTEREDUSERS','Uregistrerede brugere');
define('_PROMOTEYOURSITE','Reklamer for dit website');
define('_PROMOTE01','Måske vil du være interesseret i muligheden for at \'Vurdere et Website\' på din eget site. Vi har flere muligheder til rådighed. De tillader, at du kan placere et billede (eller en vurderings form) på dit website for at forøge antallet af stemmer som dit website modtager. Vælg mellem de forskellige muligheder nedenfor:');
define('_TEXTLINK','Tekstlink');
define('_PROMOTE02','en mulighed er at linke via et simpelt tekstlink:');
define('_HTMLCODE1','HTML-koden du skal bruger er som følger:');
define('_THENUMBER','Nummeret');
define('_IDREFER','i HTML-kilden refererer til dit sites ID-nummer i '.$sitename.' databasen. Vær sikker på, at nummeret er tilstede.');
define('_BUTTONLINK','Knaplink');
define('_PROMOTE03','Hvis du er på udkig efter noget mere end bare et simpelt tekstlink, kan du bruge et lille knaplink:');
define('_RATEIT','vurdere dette site!');
define('_HTMLCODE2','Kildekoden for ovenstående knap er:');
define('_REMOTEFORM','Udefrakommende vurderings form');
define('_PROMOTE04','Vi tillader ikke snyd og vi holder øje med forsøg herpå. Hvis vi opdager snyd vil linket blive slettet fra databasen. Med det i baghovedet så ser den nuværende den eksterne vurderings form ud således:');
define('_VOTE4THISSITE','Stem på denne side!');
define('_HTMLCODE3','Hvis du bruger denne vurderings form kan dine brugere stemme på dit website i vores database direkte fra dit eget site. vurdering vil blive gemt i vores database. Ovenstående form er delaktiveret, men den nedenstående kildekode virker hvis du laver kopier og sæt ind i din side. Husk, at tallet 14 angiver dit sites nummer i vores database. Kontroller, at det passer!');
define('_PROMOTE05','Held og lykke med dine ratings!');
define('_THANKSBROKEN','Tak for din hjælp!');
define('_SECURITYBROKEN','Af sikkerhedsmæssige årsager er dit brugernavn og IP-adresse midlertidigt gemt.');
define('_THANKSFORINFO','Tak for oplysningerne.');
define('_LOOKTOREQUEST','Vi vil snarest gennemse din forslag.');
define('_SENDREQUEST','Send anmodning');
define('_THANKSTOTAKETIME','Tak fordi du tog dig tid til at vurdere et site her hos');
define('_RETURNTO','Tilbage til');
define('_RATENOTE1','Stem ikke på den samme mere end en gang.');
define('_RATENOTE2','Skalaen er 1 til 10, hvor 1 er det laveste og 10 det højeste.');
define('_RATENOTE3','Vær så objektiv som muligt i din stemmeafgivelse, hvis alle modtager 1 eller 10, kan vurderingerne ikke bruges til noget.');
define('_RATENOTE5','Stem ikke på din egen site eller på et konkurrerende site.');
define('_YOUAREREGGED','Du er oprettet som bruger og er logget ind.');
define('_FEELFREE2ADD','Skriv en kommentar om denne side hvis du har lyst.');
define('_YOUARENOTREGGED','Du er ikke oprettet som bruger eller også er du ikke logget ind.');
define('_IFYOUWEREREG','Hvis du var oprettet som bruger kunne du komme med kommentarer på dette website.');
define('_MODIFY','Ændring');
define('_COMPLETEVOTE1','Tak for din stemme!');
define('_COMPLETEVOTE2','Du har allerede stemt på denne download indenfor '.$anonwaitdays.' dage');
define('_COMPLETEVOTE3','Stem kun en gang på en download.<br>Alle stemmer gemmes og gennemses.');
define('_COMPLETEVOTE4','Du kan ikke stemme på et download du selv er kommet med.<br>Alle stemmer gemmes og gennemses.');
define('_COMPLETEVOTE5','Der er ingen stemme valgt - der bliver derfor ikke afgivet nogen stemme');
define('_COMPLETEVOTE6','Det er kun muligt at stemme en gang pr. IP adresse hver '.$outsidewaitdays.' dag(e).');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDDURL','Tilføj denne URL');
define('_EZTRANSFERDOWNLOAD','Overfør');
define('_EZTRANSFERDOWNLOADS','Overfør alle downloads fra kategori');
define('_DELEZDOWNLOADSCATWARNING','VIGTIGT: Er du sikker på at ville slette denne kategori? Du vil også slette under-kategorier samt vedhæftede downloads!');
define('_DELCONTENTCAT','VIGTIGT: Er du sikker på at ville slette denne kategori? Sider under denne kategori, vil blive slettet!');
define('_DELCATEGORY','Slet kategori');
define('_DOWNLOADTITLE','Download titel');
define('_DOWNLOADSINDB','Downloads i databasen');
define('_DOWNLOADSWAITINGVAL','Downloads som venter på at blive godkendt');
define('_CLEANDOWNLOADSDB','Slet stemmer på Downloads');
define('_BROKENDOWNLOADSREP','Anmeld ødelagte downloadlinks');
define('_DOWNLOADMODREQUEST','Forslag til ændring af download');
define('_ADDNEWDOWNLOAD','Opret et nyt download');
define('_MODDOWNLOAD','Ændre en download');
define('_WEBDOWNLOADSADMIN','Administration af downloads');
define('_DNOREPORTEDBROKEN','Ingen anmeldelser om ødelagte downloadlinks.');
define('_DUSERREPBROKEN','Anmeldelser om ødelagte downloadlinks');
define('_DIGNOREINFO','Ignorer (Sletter alle <b><i>forslag</i></b> om en given download');
define('_DDELETEINFO','Slet (Sletter <b><i>ødelagte downloadlinks</i></b> og <b><i>forslag</i></b> for en given download)');
define('_DOWNLOADOWNER','Ejer af download');
define('_DUSERMODREQUEST','Brugerønskede downloadændringer');
define('_DOWNLOADVALIDATION','Efterprøve downloads');
define('_CHECKALLDOWNLOADS','Kontroller ALLE downloads');
define('_VALIDATEDOWNLOADS','Kontroller downloads');
define('_NEWDOWNLOADADDED','Nyt download oprettet i databasen');
