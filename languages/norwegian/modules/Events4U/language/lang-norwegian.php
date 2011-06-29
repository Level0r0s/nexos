<?php 
/************************************************************************/
/* Events 4U version 0.8     Date : 06.2004      UTF-8                  */
/* fur CPGNUKE 8.2 (www.cpgnuke.com)                 			              */
/* ==================================================================== */
/* Von cpgnuke germany													                        */
/* http://www.cpgnuke.de @ Ertan@cpgnuke.de   						            	*/
/* ==================================================================== */
/*   CPG-NUKE: Advanced Content Management System						            */
/* ==================================================================== */
/*   Copyright (c) 2004 by CPG Dev Team									                */
/*   http://cpgnuke.com													                        */
/* =based on ========================================================== */
/*  Calendar Module for vkpMx 2.x & phpNuke 5.5-7.0                     */
/*  Copyright (c) 2004 by A.Ellsel (kalender@pragmamx.org)              */
/*  http://www.pragmamx.org & http://ww.shiba-design.de                 */
/* -------------------------------------------------------------------- */
/* KalenderMx is based on EventCalendar 2.0                             */
/*  Copyright (c) 2001 Originally by Rob Sutton                         */
/*  http://smart.xnettech.net (Nuke Site)                               */
/*  Development continued by Aleks A.-Lessmann                          */
/* Included some ideas and changes by:                                  */
/*  flobee, bulli-frank, kicks, kochloeffel, FrankySz, Jubilee          */
/* -------------------------------------------------------------------- */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 or a newer version.   */
/************************************************************************/

define("_EVENTS4U", "Events4U");
define("_TOP", "Topp");
define("_MONTH", _UMONTH);//DEFINED IN MAIN LANGUAGE
define("_DAY", "Dag");
define("_CATEGORIE", "Kategori");
define("_SELECT", "Velg");
####### locale time-format variables #######
define("_CALSHORTDATEFORMAT","%y/%m/%d");
define("_CALLONGDATEFORMAT","%A, %B %d, %Y");
define("_CALMONTHDATEFORMAT","%B %Y");
define("_CALINTERNATIONALDATES",0);    //0 = mm/dd/yyyy, 1 = dd/mm/yyyy
define("_CALTIME24HOUR",1);  // 1 = 24 hour time... 0 = AM/PM time
define("_CALLOCALE","no_NO");
define("_CALTIMEFORMAT","%I:%M %p"); # ? AM/PM time
define("_CALWEEKBEGINN",1);		# the First Day in the Week: 0 = Sunday, 1 = Monday
define("_CWEEKBEGINN","Hvilken dag begynner uken på: 0 = Søn, 1 = Man");	
define("_CALINTERDATE","Internasjonal Dato format: Ja = m/d/y, Nei = d/m/y");	

####### main texts #######
define("_CALDOTCOLORALL","Alle&nbsp;Events");    // description of all Events (no colordot)
define("_CALSEND","Send");
define("_CALSUBMITEVENT", "Foreslå en Event");
define("_CALSUBMITNAME", "Kalender Event Skjema");
define("_CALNAME", "Event Kalender");
define("_CALPREVIEW", "Forhåndvis Event");
define("_CALOK", "Send Event");
define("_CALEVENTDATETEXT", "Event Dato");
define("_CALSUBSENT", "Din event har blitt motatt");
define("_CALTHANKSSUB", "Takk for ditt bidrag!");
define("_CALSUBTEXT", "Vi vil sjekke ditt forslag innen få timer, hvis det er interesant og relevant vil vi publisere det snart.");
define("_CALSUBTEXTADMIN", "Ditt forslag ble publisert direkte.");
define("_CALWEHAVESUB", "Akkurat nå har vi");
define("_CALWAITING", "Forslag ventende for publisering.");
define("_CALEVENTDATEPREVIEW", "Event Dato");
define("_CALCHECKSTORY", "Vennligst forhåndvis din event minst en gang, så kan du velge Lagre Event for å sende inn ditt forslag.");
define("_CALYOURNAME", "Ditt Navn");
define("_CALLOGOUT", "Logg Ut");
define("_CALSUBTITLE", "Overskrift");
define("_CALTOPIC", "Emne");
define("_CALSELECTTOPIC", "Velg Emne");
define("_CALARTICLETEXT", "Beskrivelse");
define("_CALHTMLISFINE", "HTML er greit, men dobbelt sjekk URLs og HTML kode!");
define("_CALNEWSUBPREVIEW", "Event Forhåndvisning");
define("_CALSTORYLOOK", "Din event vil se slik ut:");
define("_CALBEDESCRIPTIVE", "Vær Beskrivende, Klar og Enkel");
define("_CALSUBPREVIEW", "Du må forhåndvise din event en gang, før du kan sende inn.");
define("_CALALLOWEDHTML", "Tilatte HTML");
define("_CALSUBMISSIONSADMIN", "Event Innsendelser");
define("_CALNEWSUBMISSIONS", "Nye Event Innsendelser");
define("_CALNOSUBJECT", "Ingen Overskrift!");
define("_CALNOSUBMISSIONS", "Det er ingen nye Innsendelser!");
define("_CALDELETE", "Slett");
define("_CALNAMEFIELD", "Navn");
define("_CALDELETESTORY", "Slett Event");
define("_CALPREVIEWSTORY", "Forhåndvis Event");
define("_CALPOSTSTORY", "Lagre Event");
define("_CALSUBMITADVICE1", "Vennligst skriv din Kalender event ved å fylle ut følgende skjema.");
define("_CALSUBMITADVICE2", "<br>Ikke alle innsendelser vil bli publisert i kalenderen<br>Ditt forslag vil bli sjekket grammatisk og kan eventuelt bli redigert av en administrator.");
define("_CALPOSTEDBY","Innsendt av");
define("_CALPOSTEDON"," ");
define("_CALACCEPTEDBY"," og godkjent av");
define("_CALcalViewEvent","Kalender Event");
define("_CALPREVIOUS","Forrige");
define("_CALNEXT","Neste");
define("_CALSTARTTIME","Start Tid");
define("_CALENDTIME","Stopp Tid");
define("_CALALLDAYEVENT","Alle dager");
define("_CALTIMEIGNORED","start og stopp tid ignoreres.");
define("_CALENDDATETEXT","Slutt Dato");
define("_CALENDDATEPREVIEW","Slutt Dato");
#define("_CALBARCOLORTEXT","Select a category for this event");
define("_CALBARCOLORTEXT","Kategori");
define("_CALLOGIN","Logg Inn");
define("_CALNO","Nei");
define("_CALYES","Ja");
define("_CALREMOVETEST","Er du sikker på at du vil fjerne denne eventen?");
define("_CALNOTAUTHORIZED1","Du har ikke tilgang til å fjerne eller editere dette innlegget");
define("_CALNOTAUTHORIZED2","Kontakt din administrator for eventuelle spørsmål du måtte ha");
define("_CALNOTAUTHORIZED3","Beklager, Du har ikke tilgang til å fjerne eller redigere innlegg!");
define("_CALTODAY","Idag");
define("_CALLISTDESCRIPTION1","Neste");
define("_CALLISTDESCRIPTION2","Events");
define("_CALLISTSTART","siden");
define("_CALLISTRANGE","til");
define("_CALHEADAPPOINTM","Avtaler");
define("_CALDAYEVENTS","Events");
define("_CALDAYMORNING","Morgen");
define("_CALDAYEVENING","Kveld");
define("_CALMORE","flere Events");
define("_CAL1EVENT","Event");
define("_CAL2EVENT","Events");
define("_CAL0EVENTS", "Det finnes ingen events på dette..");
define("_CAL0EVENTSBLOCK", "Beklager, vi har ingen events tilgjengelig.");
define("_CALNOTODAYEVENTS","Ingen events idag.");
define("_CALADDASARTICLE","Artikkel");
define("_CALADDASARTICLE2","Legg til en Artikkel fra denne eventen.");

####### LINKS ########
define("_CALEVENTLINK","Lage en Event");
define("_CALAPPTLINK","Lage en Avtale");
define("_CALTASKLINK","Legge til en ny Task");
define("_CALDAYLINK","Vis dag");
define("_CALMONTHLINK","Vis Måned");
define("_CALYEARLINK","Vis År");
define("_CALJUMPTOTEXT","Gå til følgende visning");
define("_CALJUMPBUTTON","Gå!");
define("_CALLISTLINK","Neste Event");

####### MONTHS ########
//DEFINED IN MAIN LANGUAGE define("_CALJAN","January");
//DEFINED IN MAIN LANGUAGE define("_CALFEB","February");
//DEFINED IN MAIN LANGUAGE define("_CALMAR","March");
//DEFINED IN MAIN LANGUAGE define("_CALAPR","April");
//DEFINED IN MAIN LANGUAGE define("_CALMAY","May");
//DEFINED IN MAIN LANGUAGE define("_CALJUN","June");
//DEFINED IN MAIN LANGUAGE define("_CALJUL","July");
//DEFINED IN MAIN LANGUAGE define("_CALAUG","August");
//DEFINED IN MAIN LANGUAGE define("_CALSEP","September");
//DEFINED IN MAIN LANGUAGE define("_CALOCT","October");
//DEFINED IN MAIN LANGUAGE define("_CALNOV","November");
//DEFINED IN MAIN LANGUAGE define("_CALDEC","December");

####### DAYS OF THE WEEK ########
//DEFINED IN MAIN LANGUAGE define("_CALFIRSTDAY","Sun");
//DEFINED IN MAIN LANGUAGE define("_CALSECONDDAY","Mon");
//DEFINED IN MAIN LANGUAGE define("_CALTHIRDDAY","Tues");
//DEFINED IN MAIN LANGUAGE define("_CALFOURTHDAY","Wed");
//DEFINED IN MAIN LANGUAGE define("_CALFIFTHDAY","Thurs");
//DEFINED IN MAIN LANGUAGE define("_CALSIXTHDAY","Fri");
//DEFINED IN MAIN LANGUAGE define("_CALSEVENTHDAY","Sat");
//DEFINED IN MAIN LANGUAGE define("_CALLONGFIRSTDAY","Sunday");
//DEFINED IN MAIN LANGUAGE define("_CALLONGSECONDDAY","Monday");
//DEFINED IN MAIN LANGUAGE define("_CALLONGTHIRDDAY","Tuesday");
//DEFINED IN MAIN LANGUAGE define("_CALLONGFOURTHDAY","Wednesday");
//DEFINED IN MAIN LANGUAGE define("_CALLONGFIFTHDAY","Thursday");
//DEFINED IN MAIN LANGUAGE define("_CALLONGSIXTHDAY","Friday");
//DEFINED IN MAIN LANGUAGE define("_CALLONGSEVENTHDAY","Saturday");

####### FIELD VALIDATION STRINGS ########
define("_CALVALIDERRORMSG","Feil ble funnet under godkjenning av denne Eventen!");
define("_CALVALIDFIXMSG","Vennligst rett opp disse feilene før du forhåndviser eller legger til denne Eventen.");
define("_CALVALIDSUBJECT","&acute;Overskrift&acute; mangler.");
define("_CALVALIDENDDATE","&acute;Stopp Dato&acute; er ikke en gyldig dato.");
define("_CALVALIDEVENTDATE","&acute;Event Dato&acute; er ikke en gyldig dato.");
define("_CALVALIDDATES","&acute;SLutt Dato&acute; må være etter eller lik &acute;Event Dato&acute;.");
define("_CALVALIDTIMES","&acute;Stopp Tid&acute; må være etter &acute;Start Tid&acute;.");
define("_CALVALIDTOPIC", "Vennligst velg et Emne.");

#### TRANSLATE ??????????? #######################################################################
define("_CALINDEX", "Vise høyre blokker");  
define("_CALTEXTEVENTS", "Bilde Barer for multi-dag events");  
define("_CALADDARTICLEBOX", "Vis valg for Automatisk Nyhets Artikkel fra Event");  
define("_CALPOSTUSERS","Registrerte Brukere har tilgang til å legge til nye events");
define("_CALUSETOPICS", "Bruk Nyhetsemne ikoner");  
define("_CALUSETOPICS1", "Ja - Valgfritt");  
define("_CALUSETOPICS2", "Ja - Påkrevet");  
define("_CALDEFAULTVIEW", "Standard Visning for Kalender");  
define("_CALMINUTERANGE", "Tids intervall for Start/Slutt - i minutter");  
define("_CALADMINEDITALL", "Administratorer kan redigere alle events");  
define("_CALADMINMENUSHOW", "Sjule CPG Admin Meny link i Kalender Admin");  
define("_CALADMINTYPE", "Admin type, vilke Administratorer kan jobbe med events");  
define("_CALLISTCOUNT", "Antall oppføringer i Neste Event Liste Visning");  
define("_CALLISTSHOWSTART", "Vise start tid i Neste Event Liste Visning");  
define("_CALLISTENDDATE", "Vise Slutt Dato i Neste Event Liste Visning");  
define("_CALLISTENDTIME", "Vise Slutt Tid i Neste Event Liste Visning");  
define("_CALLISTENDDATE2", "Suppress Final Date if equal to Starting Date");  
define("_CALLISTBR", "Vise Tiden på egen linje i Neste Event Liste Visning");  
define("_CALDAYTIMEARRAY", "Tids periode for å vise i Daglig Visning");  
define("_CALALLOWABLEHTML", "Tilatte HTML tags i beskrivelse i dato");  
define("_CALONLYWEN", "(bare hvis slutt dato = Ja)"); 
define("_CALSHOWLINKS","Vise dato som en link i dato visning");  
define("_CALCALENDARCONFIG", "Kalender Konfigurasjon");  
define("_CALCONF1", "Innstillingene kan ikke lagres!");  
define("_CALCONF2", "Innstillingene er lagret!");  
define("_CALCONF3", "filen");  
define("_CALCONF4", "er skrive beskyttet, <br>innstillingene kan ikke lagres!");  
define("_CALACTIV", "Sett aktiv");

define("_CALMENUROWS","Antall kolonner i Kategori nøkkeltabell");
define("_CALMENUROWS2","");

define("_CALERREVENTNOTEXIST","Event eksisterer ikke i vår database.");
define("_CALERRSQLERROR","Database-Feil!");
define("_CALONLYDEACTIVATE","Bare deaktiver");
define("_CALDEACTIVATED","Deaktiverte Events");
define("_CALNODEACTIVATED","Ingen Deaktiverte Events");
define("_CALNAVIPREV","Forrige Events");
define("_CALNAVINEXT","Neste Events");

/// ab 1.3
define("_CALPRINTER1","Print");
define("_CALPRINTER2","Skriv ut denne siden");
define("_CALPOSTANONYMOUS", "Anonyme brukere kan legge til events");  
define("_CALUSERSAUTOPOST","Events fra registrerte brukere godkjennes automatisk");
define("_CALANONYAUTOPOST","Events fra anonyme brukere godkjennes automatisk");
define("_CALCATEGORIESADMIN","Kategori Konfigurasjon");
define("_CALCATEGORIESLANG","Velg Språk");
define("_CALADMINMENU","Administrasjon Meny");
define("_CALSHOWPOPS","Popup for Event Beskrivelse");
define("_CALSOURCE","Kilde");
define("_CALGOAL","Mål");

//// ab 1.4
define("_CALHOURS","timer");
define("_CALMINUTES","minutter");
define("_CALDAYS","dager");
define("_CALMONTHS","måneder");
define("_CALYEARS","år");
define("_CALPLSLOGIN","Vennligst Logg deg inn først");
define("_CALSAVESETT", "Lagre");

define("_CALALLWORDS","Alle ord [ALL]");
define("_CALANYWORDS","Vilke som helst ord [OR]");
define("_CALSEARCH","Søk");
define("_CALSEARCHEVENT","Søk Events");
define("_CALFOR","for");
define("_CALSEARCHTITLE","Søk i Event Kalender");
define("_CALCQUEUE","Søke resultater");
define("_CALTOMUCH1","Det er mer en ");
define("_CALTOMUCH2"," søke resultater. Vennligst sett maks søke resultater.");
define("_CALSEARCHCOUNT", "Maks søke resultater");  
define("_CALSEARCHTOPICS","Søk i Nyheter");
define("_CALMOREOPTIONINF","You find further options for the optical configuration of the calendar in the file:");
define("_CALSEFROMDATE","fra Dato");
define("_CALSELCATEGORY","Velg Kategori");
define("_CALINTHIS","i");
define("_CALNOTOPICS", "Det er ingen Emner tilgjengelig");
define("_CALGOTOEDIT","Rediger igjen");
define("_CALGOTOADMIN","så gå til Admin meny");
define("_CALGOTOCALENDAR","så gå til Kalendervisning");
define("_CALCONFVIEW1","Authorizations -Security");
define("_CALCONFVIEW2","Opinions - Optics");
define("_CALCONFVIEW3","News-Articles -Topics");
define("_CALLISTSHOWLINKS","Vise dato som en link i Liste Visning");  


//// faq
define("_TOP","Tilbake til Toppen");
define("_GOBACK","Gå Tilbake");
define("_CALFAQ","Hjelp");
define("_CALFAQ1","Hvordan vise en annen dato ?");
define("_CALFAQ2","Kan jeg kun se 1 Kategori ?");
define("_CALFAQ3","Hvordan bruker jeg Velg ?");
define("_CALFAQ4","Hvordan ser jeg mer informasjon på en Event ?");
define("_CALFAQ5","Hvordan printer jeg ut en Kalender side ?");
define("_CALFAQ6","Hvordan virker Søk ?");
define("_CALFAQ7","Kan jeg lage en Event ?");
define("_CALFAQ8","...");
define("_CALFAQ9","...");

define("_CALFAQA1","For å forandre Kalenderen til å vise forsjellig dato, velg ønsket måned, Dag og/eller år, og når datoen vises riktig klikk Gå! Knappen for å nullstille kalenderen til din valgte dato.  Gjenta dette for å scanne de datoene du er interesert i.  For å gå tilbake til dagens dato, kan du bruke snarveien Idag knappen.");
define("_CALFAQA2","Som standard viser Kalender alle kategoriene i samme Kalender.  Hvis du kun er interesert i en av kategoriene, så kan du velge kategori fra rullgardin menyen, eller klikke på nøkkelordet under Kalenderen.  For å returnere til standard modus, velg Alle i kategori menyen, eller klikk på Alle Events knappen.");
define("_CALFAQA3","Rullgardin menyen lar deg velge hvor mye av kalender perioden du ser på siden. <br><br>\r\n\r\nDag Visning - viser kun informasjon på events og avtaler for den valgte dato.  Events er definert som alle dag Avtaler.  Dette tilater maks antall av detaljer på events/avtaler.<br><br>\r\n\r\nMåned Visning - viser events for hele måneden som er valgt.  Dagens dato er alltid uthevet.  Kun tid, overskrift og farge nøkler vises for hver event.<br><br>\r\n\r\nÅr Visning - viser hele året som er valgt, men kun datoen blir vist for hver dag.  Dagen dato er alltid uthevet.  En boks blir tegnet rundt hver dag som har 1 eller flere events eller avtaler.  Klikker du på en dato vil du bli ført til Dag Visning for den datoen.<br><br>\r\n\r\nNeste Event Visning - ulikt de andre visningene, er denne fokusert på Events og ikke dato, og vil liste ut de neste få events/avtaler etter valgte dato.<br><br>\r\n\r\nStandard visning er måned visning, men dette kan forandres av admin.");
define("_CALFAQA4","For å se en mer detaljert info på en event i Neste Event, Dag eller Måned Visning, så før musen over Event Overskriften.  En pop-over vindu vil gi deg noen få linjer fra Event informasjonen.<br><br>\r\n\r\nFor en full visning av all informasjon for en event, må du klikke på Event Overskriften.  For å gå tilbake til forrige, klikk på Gå! knappen, forandre dato først hvis du vil gå til en annen dato.<br><br>\r\n\r\n[Javascript må være tilgjengelig i browseren din for at pop-over vinduet skal fungere.]");
define("_CALFAQA5","For å printe ut din kalender, sett opp dato og visning etter dine ønsker, så klikk på Print knappen.  Et pop-up vindu vil bli synlig og inneholder kun kalender informasjon, med lite eller ingen bilder.  Du kan printe vinduet ved å bruke din nettlesers normale printer funksjon, eller klikk Send til printer knappen.  Etter printer jobben, kan du lukke pop-up vinduet.<br><br>\r\n\r\n[printer pop-up vinduet skal åpnes selv om du har installert en pop-up blocker, fordi forespørselen for vinduet skjer lokalt.]");
define("_CALFAQA6","For å søke etter en event må du vite ett eller flere ord fra overskriften eller beskrivelsen.  Klikk på Søk Events knappen for å få frem søke siden.<br><br>\r\n\r\nSkriv inn ett eller flere ord for: felt.  Flere ord vil øke treffsikkerheten på søket, men kan føre til at du den ikke finner noe.  Hvis du skriver inn mer en ett ord, velg type søk fra rullgardin menyen - Alle ord hvis hvert ord må være med i Overskriften eller beskrivelsen (AND); eller hvilket som helst ord hvis du vil se alle Events som inneholder ett eller flere ord fra overskriften eller beskrivelsen (OR).<br><br>\r\n\r\nVelg start dato for søket - søket vil ikke returnere funn tidligere en angitt dato.  Standard start datoen er alltid dagens dato.<br><br>\r\n\r\nHvis du vil kan du spesifisere en kategori for søket.  Bare den kategorien vil da bli søkt.  For å søke alle kategorier, la rullgardin menyen stå i standard posisjon.<br><br>\r\n\r\nFor å returnere til den siden du var på etter søket bruk Gå! knappen.");
define("_CALFAQA7","Avhengig av din tilgang, kan du lage og sende inn event direkte til Kalender, foreslå en event for senere a bli lagt inn av en Administrator, eller du kan ikke legge til noe som helst.<br><br>\r\n\r\nHvis du har tilstrekkelig tilgang vil du se en Foreslå en Event knapp mellom Søk og Print knappene.<br><br>\r\n\r\nForeslå en Event siden har flere felter, som kan og ikke kan bli vist til deg, som igjen avhenger av dine rettigheter:<br><br>\r\n\r\nDitt Navn - hvis du er logget inn vil dette feltet bli automatisk fyllt inn med ditt navn.<br><br>\r\n\r\nOverskrift - Skriv inn en kort beskrivende overskrift.<br><br>\r\n\r\nEvent Dato - Velg start dato og tid.<br><br>\r\n\r\nSlutt Dato - Hvis du ikke velger alle dager (se nedenfor), velg slutt dato og tid.  Slutt datoen må være lik eller senere en start datoen.<br><br>\r\n\r\nAlle dager - Velg dette hvis du vil Eventen skal gjelde hele dagen.  Slutt Dato/Tid vil da ikke gjelde.<br><br>\r\n\r\nBeskrivelse - Skriv inn beskrivelse for Eventen.<br><br>\r\n\r\nKategori - Velg hvilken kategori eventen hører til under.<br><br>\r\n\r\nEmne - Velg emne for din event.<br><br>\r\n\r\nArtikkel - Velg dette hvis du vil ha en nyhet laget automatisk fra Overskrift og Beskrivelse av din Event.  Merk at en nyhet må antagelivis bli godkjent av en administrator før du kan se den dukker opp i Nyheter.<br><br>\r\n\r\nSett aktiv - Velg Nei hvis du ikke vil at denne eventen skal bli synlig i Kalender nå.<br><br>\r\n\r\nSend - Velg forhåndvis Event minst en gang før du lagrer Eventen, for å sjekke skrivefeil og linker etc...<br><br>\r\n\r\nHvis det er noen feil, vil du øyeblikkelig få bedskjed om dette under forhåndvisning, eller lagre.<br><br>\r\n\r\nAvhengig av dine rettigheter, vil du enten se eventen bli postet i Kalender, eller at din event ventes på godkjenning av administrator.");
define("_CALFAQA8","");
define("_CALFAQA9","");
define("_CALFAQA10","");
?>