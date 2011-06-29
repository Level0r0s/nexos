<?php 
/************************************************************************/
/* Events 4U version 0.8     Date : 06.2004      UTF-8                  */
/* (Deutsch & Englisch  & Tuerkisch )             						*/
/* fur CPGNUKE 8.2 (www.cpgnuke.com)                 			        */
/* ==================================================================== */
/* Von cpgnuke germany													*/
/* http://www.cpgnuke.de @ Ertan@cpgnuke.de   							*/
/* ==================================================================== */
/*   CPG-NUKE: Advanced Content Management System						*/
/* ==================================================================== */
/*   Copyright (c) 2004 by CPG Dev Team									*/
/*   http://cpgnuke.com													*/
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
# Danish translation done by Jesper Sachmann
#
####### locale time-format variables ####### 
define("_CALSHORTDATEFORMAT","%y/%m/%d"); 
define("_CALLONGDATEFORMAT","%A, %B %d, %Y"); 
define("_CALMONTHDATEFORMAT","%B %Y"); 
define("_CALINTERNATIONALDATES",0);    //0 = mm/dd/yyyy, 1 = dd/mm/yyyy 
define("_CALTIME24HOUR",0);  // 1 = 24 timers format... 0 = AM/PM format 
define("_CALLOCALE","en_EN"); 
define("_CALTIMEFORMAT","%I:%M %p"); # ? AM/PM time 
define("_CALWEEKBEGINN",0);        # the First Day in the Week: 0 = Sunday, 1 = Monday 

####### main texts ####### 
define("_CALDOTCOLORALL","alle&nbsp;events");    // desription of all Events (no colordot) 
define("_CALSEND","Send"); 
define("_CALSUBMITEVENT", "Foreslå en event"); 
define("_CALSUBMITNAME", "Kalender event fomular"); 
define("_CALNAME", "Event kalender"); 
define("_CALPREVIEW", "Se en event"); 
define("_CALOK", "Send event"); 
define("_CALEVENTDATETEXT", "Event dato"); 
define("_CALSUBSENT", "Din event er modtaget"); 
define("_CALTHANKSSUB", "Tak for afsendelse!"); 
define("_CALSUBTEXT", "vi vil se på dit forslag inden for de næste par timer, hvis det er relevant og interesant at indføje vil vi publisere det snarest."); 
define("_CALSUBTEXTADMIN", "Dit forslag er publiseret direkte."); 
define("_CALWEHAVESUB", "I øjeblikket er der"); 
define("_CALWAITING", "forslag som afventer publisering."); 
define("_CALEVENTDATEPREVIEW", "Event dato"); 
define("_CALCHECKSTORY", "Vær venlig at checke tekster, links, etc. før du afsender din event!"); 
define("_CALYOURNAME", "Dit navn"); 
define("_CALLOGOUT", "Logout"); 
define("_CALSUBTITLE", "Titel"); 
define("_CALTOPIC", "Emne"); 
define("_CALSELECTTOPIC", "Vælg emne"); 
define("_CALARTICLETEXT", "Beskrivelse"); 
define("_CALHTMLISFINE", "HTML er fint, men dobbeltcheck URL's og HTML tags!"); 
define("_CALNEWSUBPREVIEW", "Event afsendelse preview"); 
define("_CALSTORYLOOK", "Din event kommer til at se ud som dette:"); 
define("_CALBEDESCRIPTIVE", "Vær beskrivende, klar og enkel"); 
define("_CALSUBPREVIEW", "You must preview your event once before you can submit"); 
define("_CALALLOWEDHTML", "Tilladt HTML"); 
define("_CALSUBMISSIONSADMIN", "Event Afsendelser"); 
define("_CALNEWSUBMISSIONS", "Nye event afsendelser"); 
define("_CALNOSUBJECT", "Ingen titel indtastet!"); 
define("_CALNOSUBMISSIONS", "Der er ingen nye afsendelser!"); 
define("_CALDELETE", "Slet"); 
define("_CALNAMEFIELD", "Navn"); 
define("_CALDELETESTORY", "Slet event"); 
define("_CALPREVIEWSTORY", "Preview event"); 
define("_CALPOSTSTORY", "Gem Event"); 
define("_CALSUBMITADVICE1", "Skriv venligst din event på følgende format og dobbeltcheck din afsendelse."); 
define("_CALSUBMITADVICE2", "<br>Ikke alle afsendelser vil blive publiseret i kalenderen<br>Dit forslag vil blive checket grammatisk og kan evt. blive redigeret."); 
define("_CALPOSTEDBY",_POSTEDBY); 
define("_CALPOSTEDON",_ON); 
define("_CALACCEPTEDBY"," godkendt af"); 
define("_CALcalViewEvent","Kalender event"); 
define("_CALPREVIOUS","Forr."); 
define("_CALNEXT","Næste"); 
define("_CALSTARTTIME","Start Tidspunkt"); 
define("_CALENDTIME","Slut Tidspunkt"); 
define("_CALALLDAYEVENT","hele dagen"); 
define("_CALTIMEIGNORED","Start og sluttidspunkter ignoreres."); 
define("_CALENDDATETEXT","Slut dato"); 
define("_CALENDDATEPREVIEW","Slut dato"); 
#define("_CALBARCOLORTEXT","vælg en kategori for denne event"); 
define("_CALBARCOLORTEXT","Kategori"); 
define("_CALLOGIN","Login"); 
define("_CALNO",_NO);// USES NUKE VARS no need to translate 
define("_CALYES",_YES);// USES NUKE VARS no need to translate 
define("_CALREMOVETEST","Er du sikker på at du vil slette denne event?"); 
define("_CALNOTAUTHORIZED1","Du har ikke rettigheder til at slette eller rette dette"); 
define("_CALNOTAUTHORIZED2","Kontakt din system administrator med de spørgsmål du måtte have"); 
define("_CALNOTAUTHORIZED3","Beklager, du har ikke rettigheder til at slette eller rette events!"); 
define("_CALTODAY","Idag"); 
define("_CALLISTDESCRIPTION1","Den næste"); 
define("_CALLISTDESCRIPTION2","Events"); 
define("_CALLISTSTART","siden"); 
define("_CALLISTRANGE","til"); 
define("_CALHEADAPPOINTM","Aftaler"); 
define("_CALDAYEVENTS","Events"); 
define("_CALDAYMORNING","Morgen"); 
define("_CALDAYEVENING","Aften"); 
define("_CALMORE","flere Events"); 
define("_CAL1EVENT","Event"); 
define("_CAL2EVENT","Events"); 
define("_CAL0EVENTS", "Der er ingen events der tilfredsstiller forespørgslen"); 
define("_CAL0EVENTSBLOCK", "Beklager, der er ingen events for nu."); 
define("_CALNOTODAYEVENTS","Ingen events idag."); 
define("_CALADDASARTICLE","artikel"); 
define("_CALADDASARTICLE2","Tilføj en artikel fra denne event."); 

####### LINKS ######## 
define("_CALEVENTLINK","Tilføj en event"); 
define("_CALAPPTLINK","Tilføh en aftale"); 
define("_CALTASKLINK","Til en opgave"); 
define("_CALDAYLINK","Dags overblik"); 
define("_CALMONTHLINK","Måneds overblik"); 
define("_CALYEARLINK","Års overblik"); 
define("_CALJUMPTOTEXT","Hop til følgende overblik"); 
define("_CALJUMPBUTTON","Hop!"); 
define("_CALLISTLINK","næste event"); 

####### MONTHS ######## USES NUKE VARS no need to translate 
define("_CALJAN",_JANUARY); 
define("_CALFEB",_FEBRUARY); 
define("_CALMAR",_MARCH); 
define("_CALAPR",_APRIL); 
define("_CALMAY",_MAY); 
define("_CALJUN",_JUNE); 
define("_CALJUL",_JULY); 
define("_CALAUG",_AUGUST); 
define("_CALSEP",_SEPTEMBER); 
define("_CALOCT",_OCTOBER); 
define("_CALNOV",_NOVEMBER); 
define("_CALDEC",_DECEMBER); 

####### DAYS OF THE WEEK ######## 
define("_CALFIRSTDAY","Søn"); 
define("_CALSECONDDAY","Man"); 
define("_CALTHIRDDAY","Tirs"); 
define("_CALFOURTHDAY","Ons"); 
define("_CALFIFTHDAY","Tors"); 
define("_CALSIXTHDAY","Fre"); 
define("_CALSEVENTHDAY","Lør"); 
define("_CALLONGFIRSTDAY","Søndag"); 
define("_CALLONGSECONDDAY","Mandag"); 
define("_CALLONGTHIRDDAY","Tirsdag"); 
define("_CALLONGFOURTHDAY","Onsdag"); 
define("_CALLONGFIFTHDAY","Torsdag"); 
define("_CALLONGSIXTHDAY","Fredag"); 
define("_CALLONGSEVENTHDAY","Lørdag"); 

####### FIELD VALIDATION STRINGS ######## 
define("_CALVALIDERRORMSG","Der er fundet fejl i valideringen af din indtastning!"); 
define("_CALVALIDFIXMSG","Ret venligst disse fejl inden du previewer eller afsender igen."); 
define("_CALVALIDSUBJECT","'Titel' feltet skal udfyldes."); 
define("_CALVALIDENDDATE","'Slut dato' er indtastet i et forkert format."); 
define("_CALVALIDEVENTDATE","'Event dato' er indtastet i et forkert format."); 
define("_CALVALIDDATES","'Slut dato' skal være senere eller samme som 'Event dato'."); 
define("_CALVALIDTIMES","'Slut Tidspunkt' skal være senere end 'Start Tidspunkt'."); 
define("_CALVALIDTOPIC", "Vælg venligst et emne."); 

#### TRANSLATE ??????????? ####################################################################### 
define("_CALINDEX", "vis højre blokke");   
define("_CALTEXTEVENTS", "bjælker til at markere events over flere dage");   
define("_CALADDARTICLEBOX", "tillad automatisk News artikel");   
define("_CALPOSTUSERS","registrede bruger tillad dato annoncering"); 
define("_CALUSETOPICS", "News-brug emner");   
define("_CALUSETOPICS1", "Ja, men optionelt");   
define("_CALUSETOPICS2", "Ja, tvungen");   
define("_CALDEFAULTVIEW", "Defaultview");   
define("_CALMINUTERANGE", "minutintervaller for dato/tidspunkt valg");   
define("_CALADMINEDITALL", "Admins må kun redigere egne events");   
define("_CALADMINMENUSHOW", "brug almindelige admin menu");   
define("_CALADMINTYPE", "Admintyp, hvilke Admins må redigere events");   
define("_CALLISTCOUNT", "antal events på liste overblik");   
define("_CALLISTSHOWSTART", "start tidspunkt i liste overblik");   
define("_CALLISTENDDATE", "Sidste dato i liste overblik");   
define("_CALLISTENDTIME", "sidste tidspunkt i listeoverblik");   
define("_CALLISTENDDATE2", "sidste dato, hvis denne svarer til start dato");   
define("_CALLISTBR", "line-makeup mellem dato og tidspunkt i liste overblik");   
define("_CALDAYTIMEARRAY", "tidsintervaller i dags overblik");   
define("_CALALLOWABLEHTML", "tilladte HTML tags i beskrivelse af dato");   
define("_CALONLYWEN", "(kun hvis sidste dato er angivet)"); 
define("_CALSHOWLINKS","vis dato i dagsoverblik som link");   
define("_CALCALENDARCONFIG", "kalender Konfiguration");   
define("_CALCONF1", "indstillinger kunne ikke gemmes!");   
define("_CALCONF2", "instillinger er gemt!");   
define("_CALCONF3", "filen");   
define("_CALCONF4", "er skrivebeskyttet, <br>indstillingerne kan ikke gemmes!");   
define("_CALACTIV", "status aktiv"); 

define("_CALMENUROWS","Kolonner"); 
define("_CALMENUROWS2","Antal kolonner i kategori-liste"); 

define("_CALERREVENTNOTEXIST","Event eksisterer ikke i database."); 
define("_CALERRSQLERROR","Database-Fejl!"); 
define("_CALONLYDEACTIVATE","kun deaktiverede"); 
define("_CALDEACTIVATED","deaktiverede events"); 
define("_CALNODEACTIVATED","ingen deaktiverede events"); 
define("_CALNAVIPREV","Events tilbage"); 
define("_CALNAVINEXT","næste Events"); 

/// ab 1.3 
define("_CALPRINTER1","print"); 
define("_CALPRINTER2","send denne side til printeren"); 
define("_CALPOSTANONYMOUS", "anonymous tillades dato annoncering");   
define("_CALUSERSAUTOPOST","publiser events fra registrerede brugere med det samme"); 
define("_CALANONYAUTOPOST","publiser events fra anonyme brugere med det samme"); 
define("_CALCATEGORIESADMIN","Kategori-Konfiguration"); 
define("_CALCATEGORIESLANG","vælg sprog"); 
define("_CALADMINMENU","Administrations Menu"); 
define("_CALSHOWPOPS","popup til eventbeskrivelse"); 
define("_CALSOURCE","Kilde"); 
define("_CALGOAL","Mål"); 

?>