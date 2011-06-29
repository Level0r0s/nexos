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

//// translation by: http://www.cahor.com/    THX !!
///   NOT COMPLETE FOR VERSION 1.3 !!!!!!!
define("_EVENTS4U", "Events4U");
####### locale time-format variables #######
define("_CALSHORTDATEFORMAT","%d/%m/%y");
define("_CALLONGDATEFORMAT","%A, %d %B %Y");
define("_CALMONTHDATEFORMAT","%B %Y");
define("_CALINTERNATIONALDATES",1);    //0 = mm/dd/yyyy, 1 = dd/mm/yyyy
define("_CALTIME24HOUR",1);  // 1 = 24 hour time... 0 = AM/PM time
define("_CALLOCALE","en_EN"); 
define("_CALTIMEFORMAT","%I:%M %p"); # ? AM/PM time
define("_CALWEEKBEGINN",0);		# the First Day in the Week: 0 = Sunday, 1 = Monday

####### main texts #######
define("_CALDOTCOLORALL","tutti&nbsp;gli&nbsp;eventi");    // desription of all Events (no colordot)
define("_CALSEND","Invia");
define("_CALSUBMITEVENT", "Suggerisci un evento");
define("_CALSUBMITNAME", "Modulo Inserimento Evento");
define("_CALNAME", "Calendario Eventi");
define("_CALPREVIEW", "Preview Evento");
define("_CALOK", "Invio  Evento");
define("_CALEVENTDATETEXT", "Data Evento");
define("_CALSUBSENT", "Il tuo evento � stato ricevuto");
define("_CALTHANKSSUB", "Grazie per la segnalazione!");
define("_CALSUBTEXT", "Controlleremo la tua segnalazione e la pubblicheremo il prima possibile.");
define("_CALSUBTEXTADMIN", "La tua segnalazione � stata pubblicata direttamente.");
define("_CALWEHAVESUB", "In questo momento abbiamo");
define("_CALWAITING", "suggerimento in attesa di essere pubblicati.");
define("_CALEVENTDATEPREVIEW", "Data Evento");
define("_CALCHECKSTORY", "Prego controllare titolo, date, testo e tutti i dati  inseriti prima di inviare l'evento!");
define("_CALYOURNAME", "Nome");
define("_CALLOGOUT", "Logout");
define("_CALSUBTITLE", "Descrizione");
define("_CALTOPIC", "Argomento");
define("_CALSELECTTOPIC", "Scegli l'argomento");
define("_CALARTICLETEXT", "Descrizione");
define("_CALHTMLISFINE", "E' possibile utilizzare l'HTML ma controlla bene gli URL e il codice!");
define("_CALNEWSUBPREVIEW", "Anteprima dell'invio Evento");
define("_CALSTORYLOOK", "Il tuo evento avr� un'aspetto simile a:");
define("_CALBEDESCRIPTIVE", "Sii descrittivo, chiaro e diretto");
define("_CALSUBPREVIEW", "Devi vedere l'anteprima del tuo evento prima dell'invio finale");
define("_CALALLOWEDHTML", "Codice HTML ammesso");
define("_CALSUBMISSIONSADMIN", "Amministrazione Invii Eventi");
define("_CALNEWSUBMISSIONS", "Invii Nuovi eventi");
define("_CALNOSUBJECT", "Nessuna Descrizione Inserita!");
define("_CALNOSUBMISSIONS", "Non sono stati trovati eventi inviati!");
define("_CALDELETE", "Cancella");
define("_CALNAMEFIELD", "Nome");
define("_CALDELETESTORY", "Cancella Evento");
define("_CALPREVIEWSTORY", "Anteprima Event");
define("_CALPOSTSTORY", "Invia Evento");
define("_CALSUBMITADVICE1", "Inserisce il tuo evento compilando il modulo e controllando attentamente i dati.");
define("_CALSUBMITADVICE2", "<br>Ti avvisiamo che non tutte le segnalazioni saranno pubblicate.<br>La tua segnalazione sar� controllata e, se � necessario, corretta o modificata dal nostro staff.");
define("_CALPOSTEDBY","Segnalato da");
define("_CALPOSTEDON","il");
define("_CALACCEPTEDBY"," e approvato da");
define("_CALVIEWEVENT","Evento");
define("_CALPREVIOUS","Prec");
define("_CALNEXT","Succ");
define("_CALSTARTTIME","Ora Inizio");
define("_CALENDTIME","Ora Termine");
define("_CALALLDAYEVENT","Tutto il giorno");
define("_CALTIMEIGNORED","Gli orari di inizio e termine saranno ignorati.");
define("_CALENDDATETEXT","Data Termine");
define("_CALENDDATEPREVIEW","Data Finale");
#define("_CALBARCOLORTEXT","Scegli una categoria per questo evento");
define("_CALBARCOLORTEXT","Categoria");
define("_CALLOGIN","Login");
define("_CALNO","No");
define("_CALYES","S�");
define("_CALREMOVETEST","Sei sicuro di voler rimuovere questo evento?");
define("_CALNOTAUTHORIZED1","Non sei autorizzato a rimuovere questo evento o modificare questi dati");
define("_CALNOTAUTHORIZED2","Contatta l'amministratore di sistema per qualunque ulteriore informazione");
define("_CALNOTAUTHORIZED3","Non sei autorizzato a rimuovere questi dati!");
define("_CALTODAY","Oggi");
define("_CALLISTDESCRIPTION1","Successivo");
define("_CALLISTDESCRIPTION2","Eventi");
define("_CALLISTSTART","fino a");
define("_CALLISTRANGE","al");
define("_CALHEADAPPOINTM","Appuntamenti");
define("_CALDAYEVENTS","Eventi");
define("_CALDAYMORNING","Mattina");
define("_CALDAYEVENING","Sera");
define("_CALMORE","altri Eventi");
define("_CAL1EVENT","Evento");
define("_CAL2EVENT","Eventi");
define("_CAL0EVENTS", "Non ci sono eventi per questa ricerca");
define("_CAL0EVENTSBLOCK", "Non ci sono eventi disponibili");
define("_CALNOTODAYEVENTS","Nessun evento oggi.");
define("_CALADDASARTICLE","articoli");
define("_CALADDASARTICLE2","Aggiunti un articolo da questo evento.");

####### LINKS ########
define("_CALEVENTLINK","Crea un Evento");
define("_CALAPPTLINK","Crea an Appuntamento");
define("_CALTASKLINK","Aggiungi una nuova Sessione");
define("_CALDAYLINK","Vista Giorno");
define("_CALMONTHLINK","Vista Mensile");
define("_CALYEARLINK","Vista Annuale");
define("_CALJUMPTOTEXT","Vai alla seguente vista");
define("_CALJUMPBUTTON","Vai!");
define("_CALLISTLINK","prossimi Eventi");

####### MONTHS ########
define("_CALJAN","Gennaio");
define("_CALFEB","Febbraio");
define("_CALMAR","Marzo");
define("_CALAPR","Aprila");
define("_CALMAY","Maggio");
define("_CALJUN","Giugno");
define("_CALJUL","Luglio");
define("_CALAUG","Agosto");
define("_CALSEP","Settembre");
define("_CALOCT","Ottobre");
define("_CALNOV","Novembre");
define("_CALDEC","Dicembre");

####### DAYS OF THE WEEK ########
define("_CALFIRSTDAY","Dom");
define("_CALSECONDDAY","Lun");
define("_CALTHIRDDAY","Mar");
define("_CALFOURTHDAY","Mer");
define("_CALFIFTHDAY","Gio");
define("_CALSIXTHDAY","Ven");
define("_CALSEVENTHDAY","Sab");
define("_CALLONGFIRSTDAY","Domenica");
define("_CALLONGSECONDDAY","Luned�");
define("_CALLONGTHIRDDAY","Marted�");
define("_CALLONGFOURTHDAY","Mercoled�");
define("_CALLONGFIFTHDAY","Gioved�");
define("_CALLONGSIXTHDAY","Venerd�");
define("_CALLONGSEVENTHDAY","Sabato");

####### FIELD VALIDATION STRINGS ########
define("_CALVALIDERRORMSG","C'� stato un errore cercando di verificare i dati immessi!");
define("_CALVALIDFIXMSG","Correggere questi errori prima di inviare i dati inseriti.");
define("_CALVALIDSUBJECT","La 'Descrizione' � un campo obbligatorio.");
define("_CALVALIDENDDATE","La 'Data Termine' non � una data valida.");
define("_CALVALIDEVENTDATE","La 'Data Evento' non � una data valida.");
define("_CALVALIDDATES","La \"Data Termine\" deve essere successiva o uguale alla \"Data Evento\".");
define("_CALVALIDTIMES","L' \"Ora Termine\" deve essere successiva a' \"Ora Inizio\".");
define("_CALVALIDTOPIC", "Scegli un Argomento.");

#### TRANSLATE ??????????? #######################################################################
define("_CALINDEX", "show right blocks");  
define("_CALTEXTEVENTS", "image Bars for multiday events");  
define("_CALADDARTICLEBOX", "automatic News article permit");  
define("_CALPOSTUSERS","registered Uusers allow dates announce");
define("_CALUSETOPICS", "News-topics use");  
define("_CALUSETOPICS1", "Yes, but not necessarily");  
define("_CALUSETOPICS2", "Yes, necessarily");  
define("_CALDEFAULTVIEW", "Defaultview");  
define("_CALMINUTERANGE", "distance of the minutes with date time selection");  
define("_CALADMINEDITALL", "Admins may work on only own events");  
define("_CALADMINMENUSHOW", "use normal CMS Adminmenue");  
define("_CALADMINTYPE", "Admintyp, which Admins may work on events");  
define("_CALLISTCOUNT", "number of entries in list view");  
define("_CALLISTSHOWSTART", "starting time in list view indicate");  
define("_CALLISTENDDATE", "final date in list view indicate");  
define("_CALLISTENDTIME", "final time in list view indicate");  
define("_CALLISTENDDATE2", "final date in indicate, if equal the starting date");  
define("_CALLISTBR", "line-makeup between date and time in list view");  
define("_CALDAYTIMEARRAY", "time intervalls in daily view");  
define("_CALALLOWABLEHTML", "permitted HTML tags in description of date");  
define("_CALONLYWEN", "(only if final date indicated)"); 
define("_CALSHOWLINKS","show date in date view as link");  
define("_CALCALENDARCONFIG", "calendar configuration");  
define("_CALCONF1", "the settings could not be stored!");  
define("_CALCONF2", "the settings were stored!");  
define("_CALCONF3", "the file");  
define("_CALCONF4", "is write protected, <br>settings can not be stored!");  
define("_CALACTIV", "status actively");

define("_CALMENUROWS","Columns");
define("_CALMENUROWS2","Count of Columns in Categories-List");

define("_CALERREVENTNOTEXIST","Event doesn't exist in our database.");
define("_CALERRSQLERROR","Database-Error!");
define("_CALONLYDEACTIVATE","only deactivate");
define("_CALDEACTIVATED","deactivated events");
define("_CALNODEACTIVATED","no deactivated events");
define("_CALNAVIPREV","Events back");
define("_CALNAVINEXT","next Events");

/// ab 1.3
define("_CALPRINTER1","print");
define("_CALPRINTER2","send this page to printer");
define("_CALPOSTANONYMOUS", "anonymous allow dates announce");  
define("_CALUSERSAUTOPOST","gemeldete Termine von angemeldeten Benutzern sofort freischalten");
define("_CALANONYAUTOPOST","gemeldete Termine von anonymen Benutzern sofort freischalten");
define("_CALCATEGORIESADMIN","Category-Configuration");
define("_CALCATEGORIESLANG","select language");
define("_CALADMINMENU","Administration Menu");
define("_CALSHOWPOPS","popup for eventdescription");
define("_CALSOURCE","Source");
define("_CALGOAL","Goal");

//// ab 1.4
define("_CALHOURS","hours");
define("_CALMINUTES","minutes");
define("_CALDAYS","days");
define("_CALMONTHS","months");
define("_CALYEARS","years");
define("_CALPLSLOGIN","Please Log-In first");
define("_CALSAVESETT", "Save");

define("_CALALLWORDS","All words [ALL]");
define("_CALANYWORDS","Any words[OR]");
define("_CALSEARCH","Search");
define("_CALSEARCHEVENT","Search Events");
define("_CALFOR","for");
define("_CALSEARCHTITLE","Search in Event Calendar");
define("_CALCQUEUE","Your search results");
define("_CALTOMUCH1","There is more than ");
define("_CALTOMUCH2"," search results present. Please limit the search conditions.");
define("_CALSEARCHCOUNT", "Maximum number of search results");  
define("_CALSEARCHTOPICS","Search in News-Topics");
define("_CALMOREOPTIONINF","You find further options for the optical configuration of the calendar in the file:");
define("_CALSEFROMDATE","from Date");
define("_CALSELCATEGORY","Select Category");
define("_CALINTHIS","in");
define("_CALNOTOPICS", "There are no topics available");
define("_CALGOTOEDIT","edit again");
define("_CALGOTOADMIN","then goto Adminmenue");
define("_CALGOTOCALENDAR","then goto Calendarview");
define("_CALCONFVIEW1","Authorizations -Security");
define("_CALCONFVIEW2","Opinions - Optics");
define("_CALCONFVIEW3","News-Articles -Topics");
define("_CALLISTSHOWLINKS","Show date in list-view as link");  


//// faq
define("_TOP","Back to Top");
define("_GOBACK","Go Back");
define("_CALFAQ","Help");
define("_CALFAQ1","How do I view a different date ?");
define("_CALFAQ2","Can I see just 1 category ?");
define("_CALFAQ3","How do I use Select ?");
define("_CALFAQ4","How do I see more information on an Event ?");
define("_CALFAQ5","How can I print out a Calendar page ?");
define("_CALFAQ6","How does Search work ?");
define("_CALFAQ7","Can I create an Event ?");
define("_CALFAQ8","Can I edit or delete an Event ?");
define("_CALFAQ9","...");

define("_CALFAQA1","To change the calendar to show a different date, select an appropriate Month, Day and/or Year, and when the date is showing correctly correct click the Jump! Button to reset the calendar around your chosen date.  Repeat this as often as necessary to scan the dates that you are interested in.  To return to Today's date, you can use the shortcut Today button.");

define("_CALFAQA2","By default the Calendar displays all Categories on the same calendar.  If you are only interested in one of the Categories, then you can select the category from the pull-down menu, or click on the Category keyword below the calendar display.  To return to default All Categories mode, select All in the Category menu, or click on the All Events button.");

define("_CALFAQA3","The Select pull-down menu lets you chose how much of the calendar period you see on the page. <br><br>\r\n\r\nDay View - displays just information on events and appointments for the currently selected date.  Events are defined as all day Appointments.  This allows the maximum amount of detail on the events/appointments to be shown.<br><br>\r\n\r\nMonth View - displays the events for the entire currently selected month.  Today's date is always highlighted.  Only the times, titles and color keys are shown for each event.<br><br>\r\n\r\nYear View - displays the entire currently selected year, but only the date numbers are shown for each day.  Today's date is always highlighted.  A box is drawn around each day for which there is 1 or more events or appointments booked.  Clicking on any date will take you to the Day View for that date.<br><br>\r\n\r\nNext Event View - unlike the other views, this focuses on Events not dates, and will list the next few events/appointments following the currently selected date.  Thus entering a date of, say, April 1, 2004 may return an Event for May 1, 2004 if that is the first available event.<br><br>\r\n\r\nThe default view is typically the Month View, but can be set by the website's Administrator.");

define("_CALFAQA4","To see some more detail on any event in any of the Next Event, Day or Month Views, simply hover your mouse over the Event's Title.  A pop-over display will give a few lines of detail from the event's information.<br><br>\r\n\r\nFor a full view of the entire information for an event, you will need to click on the Event's Title.  To return to the prior view, click on the Jump! button, changing the date first if you wish to go to a different date.<br><br>\r\n\r\n[Javascript must be enabled on your browser for the pop-over display to function.]");

define("_CALFAQA5","Prior to printing your calendar, set up the date and view to suit your requirements, then click on the Print button.  A pop-up window will appear containing just the calendar information, with little or no graphical information.  You can print the window using your browser's normal print functions, or click the provided Send to printer button.  After it has printed, you may close the pop-up window.<br><br>\r\n\r\n[The print pop-up window should open even if you have a pop-up blocker in place, because the pop-up is being requested locally.  However some pop-up blockers may prevent this print function from operating unless temporarily or permanently disabled for this site.]");

define("_CALFAQA6","To search for an event you will need to know one or more words from the Event's Title and/or Description.  Click on the Search Events button to display the search conditions page.<br><br>\r\n\r\nEnter 1 or more words in the Search for: field.  More words will reduce the accuracy of the search results, but may result in 0 results returned.  If entering more than 1 word, select the type of search required from the adjacent pull-down menu - All words if each and every word must be present somewhere in the Event's Title or Description (the AND condition); or Any words if you want to see all Event's that contain any 1 of the listed words in their Title or Description (the OR condition).<br><br>\r\n\r\nSelect the start date for the search - the search will not return any matches for Events earlier than this date.  The default start date is always Today's date.<br><br>\r\n\r\nTo optionally narrow the search to a specific Category, select a Category.  Only the selected Category will be searched.  To search all Categories, leave this pull-down at its default setting.<br><br>\r\n\r\nThe search is not case sensitive.\r\n\r\nTo return to your prior view after the search has completed, click the Jump! button.");

define("_CALFAQA7","Depending on your privileges, you may be able to create and submit an event directly to the Calendar, suggest an event for later inclusion in the Calendar following appropriate approvals by your Administrator, or you may not be able to suggest an event at all.<br><br>\r\n\r\nIf you have the necessary privileges you will see a Suggest an Event button between the Search Event and Print buttons.<br><br>\r\n\r\nThe Suggest an Event page has a number of fields, some of which may or may not be present for you, depending again on your privileges:<br><br>\r\n\r\nYour Name - if you are already logged in to the site, this field will have been preset.<br><br>\r\n\r\nSubject - Enter a short descriptive title.<br><br>\r\n\r\nEvent Date - Select the start date and time.<br><br>\r\n\r\nEnd Date - Unless you check the All day checkbox (see below), select the end date and time.  The End Date/Time must be equal to or later than the Start Date/Time.<br><br>\r\n\r\nAll day - Check this box if you want the Event to occupy the entire day.  The End Date/Time will be disregarded if you select this option.<br><br>\r\n\r\nDescription - Enter your description for the event.<br><br>\r\n\r\nCategory - Select the appropriate Category.<br><br>\r\n\r\nTopic - Select the appropriate Topic for your event.<br><br>\r\n\r\nArticle - Check this box if you would like a News Story submitted automatically from the Title and Description of your Event.  Note that any News story will probably need to be separately approved by your Administrator before it appears in the News.<br><br>\r\n\r\nSet active - Select No if you do not want this event to be visible in the Calendar at this time.<br><br>\r\n\r\nSubmit - Select Preview Event at least once before selecting Save Event, in order to check formatting, included links, etc.  You must select Save Event and click Submit before you leave your browser page in order to save your Event in the Calendar.<br><br>\r\n\r\nAny errors with your submission will be reported to you immediately on submitting your Preview, or Save, Event.<br><br>\r\n\r\nDepending on your privileges, you will either see the event posted in the Calendar, or be advised that your event is scheduled for approval by the administrator(s).");


define("_CALFAQA8","To edit or delete an event, click on the Event's Title.  If you have sufficient privileges to edit or delete this event, appropriate icons will be displayed below the Event's information panel.");
define("_CALFAQA9","");
define("_CALFAQA10","");
?>
?>