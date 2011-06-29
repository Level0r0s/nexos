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

//  !!!!!!!!!! this file is not completely translated   !!!!!!
define("_EVENTS4U", "Events4U");
####### locale time-format variables #######
define("_CALSHORTDATEFORMAT","%d/%m/%y");
define("_CALLONGDATEFORMAT","%A, %B %d, %Y");
define("_CALMONTHDATEFORMAT","%B %Y");
define("_CALINTERNATIONALDATES",1);    //0 = mm/dd/yyyy, 1 = dd/mm/yyyy
define("_CALTIME24HOUR",0);  // 1 = 24 hour time... 0 = AM/PM time
define("_CALLOCALE","en_EN");
define("_CALTIMEFORMAT","%I:%M %p"); # ? AM/PM time
define("_CALWEEKBEGINN",0);		# el primer dia de la semana: 0 = Domingo, 1 = Lunes

####### main texts #######
define("_CALDOTCOLORALL","Todo&nbsp;eventos");    // desription of all Events (no colordot)
define("_CALSEND","Enviar");
define("_CALSUBMITEVENT", "Suger� un evento");
define("_CALSUBMITNAME", "Formulario para el  envio de un evento");
define("_CALNAME", "Calendario de Eventos");
define("_CALPREVIEW", "Previsualizar el evento");
define("_CALOK", "Enviar evento");
define("_CALEVENTDATETEXT", "Fecha del evento");
define("_CALSUBSENT", "Tu evento ha sido recibido");
define("_CALTHANKSSUB", "Gracias por tu envio!");
define("_CALSUBTEXT", "revisaremos tu evento en las proximas horas,ser� publicado enseguida.");
define("_CALSUBTEXTADMIN", "Tu envio ser� publicado directamente.");
define("_CALWEHAVESUB", "hasta el momento tenemos");
define("_CALWAITING", "envios esperando ser publicados.");
define("_CALEVENTDATEPREVIEW", "Fecha del evento");
define("_CALCHECKSTORY", "Chequea los links y los textos, antes de enviar!");
define("_CALYOURNAME", "Tu Nombre");
define("_CALLOGOUT", "Salir");
define("_CALSUBTITLE", "T�tulo");
define("_CALTOPIC", "Tema");
define("_CALSELECTTOPIC", "Selecciona tema");
define("_CALARTICLETEXT", "Descripci�n");
define("_CALHTMLISFINE", "HTML esta permitido, pero revisa bien!");
define("_CALNEWSUBPREVIEW", "Previsualizar el evento");
define("_CALSTORYLOOK", "Tu evento se ver� algo as�:");
define("_CALBEDESCRIPTIVE", "Se descriptivo, claro y simple");
define("_CALSUBPREVIEW", "Deb�s previsualizar el evento antes de enviarlo");
define("_CALALLOWEDHTML", "Esta permitido HTML");
define("_CALSUBMISSIONSADMIN", "Administracion de eventos");
define("_CALNEWSUBMISSIONS", "Nuevos eventos enviados");
define("_CALNOSUBJECT", "No ingresaste el titulo!");
define("_CALNOSUBMISSIONS", "No se encontraron envios!");
define("_CALDELETE", "BORRAR");
define("_CALNAMEFIELD", "Nombre");
define("_CALDELETESTORY", "Borrar evento");
define("_CALPREVIEWSTORY", "Previsualizar evento");
define("_CALPOSTSTORY", "Enviar Evento");
define("_CALSUBMITADVICE1", "Por favor complet� este formulario con tu evento");
define("_CALSUBMITADVICE2", "<br>Te comunicamos que no se publican todos los eventos.<br>Tu envio ser� revisado y corregido por el webmaster...");
define("_CALPOSTEDBY","Enviado por");
define("_CALPOSTEDON","el");
define("_CALACCEPTEDBY"," y aprovado por");
define("_CALVIEWEVENT","Evento");
define("_CALPREVIOUS","Anterior");
define("_CALNEXT","Pr�ximo");
define("_CALSTARTTIME","Hora que comienza");
define("_CALENDTIME","Hora que termina");
define("_CALALLDAYEVENT","todo el d�a");
define("_CALTIMEIGNORED","la hora del comienzo y final del evento ser�n ignorados.");
define("_CALENDDATETEXT","Fecha que finaliza");
define("_CALENDDATEPREVIEW","Fecha que finaliza");
#define("_CALBARCOLORTEXT","Selecciona una categor�a para este evento");
define("_CALBARCOLORTEXT","Categor�a");
define("_CALLOGIN","Login");
define("_CALNO","No");
define("_CALYES","Si");
define("_CALREMOVETEST","Estas seguro que quer�s borrar el evento?");
define("_CALNOTAUTHORIZED1","NO estas autorizado a borrar o editar este evento");
define("_CALNOTAUTHORIZED2","Contacta al webmaster por cualquier duda");
define("_CALNOTAUTHORIZED3","NO estas autorizado a borrar o editar este evento");
define("_CALTODAY","Hoy");
define("_CALLISTDESCRIPTION1","El pr�ximo");
define("_CALLISTDESCRIPTION2","Eventos");
define("_CALLISTSTART","desde");
define("_CALLISTRANGE","hasta");
define("_CALHEADAPPOINTM","Festivales");
define("_CALDAYEVENTS","Eventos");
define("_CALDAYMORNING","Ma�ana");
define("_CALDAYEVENING","Tarde");
define("_CALMORE","mas eventos");
define("_CAL1EVENT","Evento");
define("_CAL2EVENT","Eventos");
define("_CAL0EVENTS", "No hay eventos en esta b�squeda");
define("_CAL0EVENTSBLOCK", "No tenemos eventos disponibles.");
define("_CALNOTODAYEVENTS","Hoy no hay eventos.");
define("_CALADDASARTICLE","articulo");
define("_CALADDASARTICLE2","Agregar un art�culo a este evento.");

####### LINKS ########
define("_CALEVENTLINK","Crear un evento");
define("_CALAPPTLINK","Crear un encuentro");
define("_CALTASKLINK","Agregar una tarea");
define("_CALDAYLINK","Ver d�a");
define("_CALMONTHLINK","Ver mes");
define("_CALYEARLINK","Ver a�o");
define("_CALJUMPTOTEXT","Ir a los pr�ximos");
define("_CALJUMPBUTTON","Ir!");
define("_CALLISTLINK","pr�ximos eventos");

####### MONTHS ########
define("_CALJAN","Enero");
define("_CALFEB","Febrero");
define("_CALMAR","Marzo");
define("_CALAPR","Abril");
define("_CALMAY","Mayo");
define("_CALJUN","Junio");
define("_CALJUL","Julio");
define("_CALAUG","Augosto");
define("_CALSEP","Septiembre");
define("_CALOCT","Octubre");
define("_CALNOV","Noviembre");
define("_CALDEC","Deciembre");

####### DAYS OF THE WEEK ########
define("_CALFIRSTDAY","Dom");
define("_CALSECONDDAY","Lun");
define("_CALTHIRDDAY","Mar");
define("_CALFOURTHDAY","Mie");
define("_CALFIFTHDAY","Jue");
define("_CALSIXTHDAY","Vie");
define("_CALSEVENTHDAY","S�b");
define("_CALLONGFIRSTDAY","Domingo");
define("_CALLONGSECONDDAY","Lunes");
define("_CALLONGTHIRDDAY","Martes");
define("_CALLONGFOURTHDAY","Mi�rcoles");
define("_CALLONGFIFTHDAY","Jueves");
define("_CALLONGSIXTHDAY","Viernes");
define("_CALLONGSEVENTHDAY","S�bado");

####### FIELD VALIDATION STRINGS ########
define("_CALVALIDERRORMSG","Se encontraron errores intentando validar un evento!");
define("_CALVALIDFIXMSG","Por favor corrige estos errores antes de previsualizar o enviar el evento.");
define("_CALVALIDSUBJECT","Te olvidaste el T�tulo.");
define("_CALVALIDENDDATE","No es una fecha v�lida la de finalizaci�n.");
define("_CALVALIDEVENTDATE","No es una fecha v�lida la del evento.");
define("_CALVALIDDATES","La fecha de finalizaci�n debe ser igual o posterior a la del evento!.");
define("_CALVALIDTIMES","La hora de finalizaci�n debe ser posterior a la del comienzo!.");
define("_CALVALIDTOPIC", "Selecciona un tema.");

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