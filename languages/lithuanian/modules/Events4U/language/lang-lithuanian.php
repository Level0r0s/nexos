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

//define("_CHARSET", "UTF-8");DEFINED IN MAIN LANGUAGE
//define("_BROWSER_LANGCODE", "en");
define("_EVENTS4U", "Events4U");
define("_TOP", "Top");
define("_MONTH", _UMONTH);//DEFINED IN MAIN LANGUAGE
define("_DAY", "Day");
//define("_YEAR", "Year");//DEFINED IN MAIN LANGUAGE
define("_CATEGORIE", "Category");
//define("_ALL", "All");//DEFINED IN MAIN LANGUAGE
define("_SELECT", "Select");
####### locale time-format variables #######
define("_CALSHORTDATEFORMAT","%y/%m/%d");
define("_CALLONGDATEFORMAT","%A, %B %d, %Y");
define("_CALMONTHDATEFORMAT","%B %Y");
define("_CALINTERNATIONALDATES",0);    //0 = mm/dd/yyyy, 1 = dd/mm/yyyy
define("_CALTIME24HOUR",1);  // 1 = 24 hour time... 0 = AM/PM time
define("_CALLOCALE","en_EN");
define("_CALTIMEFORMAT","%I:%M %p"); # ? AM/PM time
define("_CALWEEKBEGINN",0);		# the First Day in the Week: 0 = Sunday, 1 = Monday
define("_CWEEKBEGINN","Day the Week begins on: 0 = Sun, 1 = Mon");	
define("_CALINTERDATE","International Date format: Yes = m/d/y, No = d/m/y");	

####### main texts #######
define("_CALDOTCOLORALL","All&nbsp;Events");    // description of all Events (no colordot)
define("_CALSEND","Submit");
define("_CALSUBMITEVENT", "Suggest an Event");
define("_CALSUBMITNAME", "Calendar Event Submission Form");
define("_CALNAME", "Event Calendar");
define("_CALPREVIEW", "Preview Event");
define("_CALOK", "Submit Event");
define("_CALEVENTDATETEXT", "Event Date");
define("_CALSUBSENT", "Your event has been received");
define("_CALTHANKSSUB", "Thanks for your submission!");
define("_CALSUBTEXT", "We will check your submission in the next few hours, if it is interesting and relevant we will publish it soon.");
define("_CALSUBTEXTADMIN", "Your entry was published directly.");
define("_CALWEHAVESUB", "At this moment we have");
define("_CALWAITING", "Submissions waiting to be published.");
define("_CALEVENTDATEPREVIEW", "Event Date");
define("_CALCHECKSTORY", "Please Preview your event at least once, then select Save Event to submit your event.");
define("_CALYOURNAME", "Your Name");
define("_CALLOGOUT", "Logout");
define("_CALSUBTITLE", "Subject");
define("_CALTOPIC", "Topic");
define("_CALSELECTTOPIC", "Select Topic");
define("_CALARTICLETEXT", "Description");
define("_CALHTMLISFINE", "HTML is fine, but double check those URLs and HTML tags!");
define("_CALNEWSUBPREVIEW", "Event Submission Preview");
define("_CALSTORYLOOK", "Your event will look something like this:");
define("_CALBEDESCRIPTIVE", "Be Descriptive, Clear and Simple");
define("_CALSUBPREVIEW", "You must preview your event once before you can submit");
define("_CALALLOWEDHTML", "Allowed HTML");
define("_CALSUBMISSIONSADMIN", "Event Submissions");
define("_CALNEWSUBMISSIONS", "New Event Submissions");
define("_CALNOSUBJECT", "No Subject Entered!");
define("_CALNOSUBMISSIONS", "There are no new Submissions!");
define("_CALDELETE", "Delete");
define("_CALNAMEFIELD", "Name");
define("_CALDELETESTORY", "Delete Event");
define("_CALPREVIEWSTORY", "Preview Event");
define("_CALPOSTSTORY", "Save Event");
define("_CALSUBMITADVICE1", "Please write your calendar event filling in the following form and double check your submission.");
define("_CALSUBMITADVICE2", "<br>You&acute;re advised that not all submission will be posted.<br>Your submission will be checked for proper grammar and may be edited by our staff.");
define("_CALPOSTEDBY","Posted by");
define("_CALPOSTEDON","on");
define("_CALACCEPTEDBY"," and approved by");
define("_CALcalViewEvent","Calendar Event");
define("_CALPREVIOUS","Prev");
define("_CALNEXT","Next");
define("_CALSTARTTIME","Start Time");
define("_CALENDTIME","Ending Time");
define("_CALALLDAYEVENT","All day");
define("_CALTIMEIGNORED","The start and end times are ignored.");
define("_CALENDDATETEXT","End Date");
define("_CALENDDATEPREVIEW","End Date");
#define("_CALBARCOLORTEXT","Select a category for this event");
define("_CALBARCOLORTEXT","Category");
define("_CALLOGIN","Login");
define("_CALNO","No");
define("_CALYES","Yes");
define("_CALREMOVETEST","Are you sure, you want to remove this event?");
define("_CALNOTAUTHORIZED1","You are not authorized to remove, or edit that entry");
define("_CALNOTAUTHORIZED2","Contact your system administrator for any questions you may have");
define("_CALNOTAUTHORIZED3","Sorry, You are not authorized to remove or edit entries!");
define("_CALTODAY","Today");
define("_CALLISTDESCRIPTION1","The Next");
define("_CALLISTDESCRIPTION2","Events");
define("_CALLISTSTART","since");
define("_CALLISTRANGE","to");
define("_CALHEADAPPOINTM","Appointments");
define("_CALDAYEVENTS","Events");
define("_CALDAYMORNING","Morning");
define("_CALDAYEVENING","Evening");
define("_CALMORE","more Events");
define("_CAL1EVENT","Event");
define("_CAL2EVENT","Events");
define("_CAL0EVENTS", "There are no events for this query");
define("_CAL0EVENTSBLOCK", "Sorry, we have no current events available.");
define("_CALNOTODAYEVENTS","No events today.");
define("_CALADDASARTICLE","Article");
define("_CALADDASARTICLE2","Add an article from this event.");

####### LINKS ########
define("_CALEVENTLINK","Create an Event");
define("_CALAPPTLINK","Create an Appointment");
define("_CALTASKLINK","Add a new Task");
define("_CALDAYLINK","Day View");
define("_CALMONTHLINK","Month View");
define("_CALYEARLINK","Year View");
define("_CALJUMPTOTEXT","Jump to the following view");
define("_CALJUMPBUTTON","Jump!");
define("_CALLISTLINK","Next Events");

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
define("_CALVALIDERRORMSG","Errors were found when attempting to validate this entry!");
define("_CALVALIDFIXMSG","Please correct these errors before you preview or submit the entry.");
define("_CALVALIDSUBJECT","The &acute;Subject&acute; is a required field.");
define("_CALVALIDENDDATE","The &acute;End Date&acute; is not a valid date.");
define("_CALVALIDEVENTDATE","The &acute;Event Date&acute; is not a valid date.");
define("_CALVALIDDATES","The &acute;End Date&acute; must be after or equal to the &acute;Event Date&acute;.");
define("_CALVALIDTIMES","The &acute;End Time&acute; must be after the &acute;Start Time&acute;.");
define("_CALVALIDTOPIC", "Please select a topic.");

#### TRANSLATE ??????????? #######################################################################
define("_CALINDEX", "Show Right Column blocks");  
define("_CALTEXTEVENTS", "Image Bars for multi-day events");  
define("_CALADDARTICLEBOX", "Show option for Automatic News Article from Event");  
define("_CALPOSTUSERS","Registered Users allowed to submit events");
define("_CALUSETOPICS", "Use News Topics icons");  
define("_CALUSETOPICS1", "Yes - Optional");  
define("_CALUSETOPICS2", "Yes - Required");  
define("_CALDEFAULTVIEW", "Default View for Calendar");  
define("_CALMINUTERANGE", "Time Increment for Start/End selection - in minutes");  
define("_CALADMINEDITALL", "Admins can edit all events");  
define("_CALADMINMENUSHOW", "Hide CPG Admin Menu link in Calendar Admin");  
define("_CALADMINTYPE", "Admin type, which Admins may work on events");  
define("_CALLISTCOUNT", "Number of entries in Next Event list view");  
define("_CALLISTSHOWSTART", "Show Starting Time in Next Event list view");  
define("_CALLISTENDDATE", "Show Final Date in Next Event list view");  
define("_CALLISTENDTIME", "Show Final Time in Next Event list view");  
define("_CALLISTENDDATE2", "Suppress Final Date if equal to Starting Date");  
define("_CALLISTBR", "Show Time on second line in Next Event list view");  
define("_CALDAYTIMEARRAY", "Time Periods to display in Daily View");  
define("_CALALLOWABLEHTML", "permitted HTML tags in description of date");  
define("_CALONLYWEN", "(only if Show Final Date = Yes)"); 
define("_CALSHOWLINKS","Show date in Date View as a link");  
define("_CALCALENDARCONFIG", "Calendar Configuration");  
define("_CALCONF1", "The settings could not be stored!");  
define("_CALCONF2", "The settings were stored!");  
define("_CALCONF3", "The file");  
define("_CALCONF4", "is write protected, <br>settings can not be stored!");  
define("_CALACTIV", "Set active");

define("_CALMENUROWS","Number of Columns in Category Key Table");
define("_CALMENUROWS2","");

define("_CALERREVENTNOTEXIST","Event doesn&acute;t exist in our database.");
define("_CALERRSQLERROR","Database-Error!");
define("_CALONLYDEACTIVATE","Only deactivate");
define("_CALDEACTIVATED","Deactivated Events");
define("_CALNODEACTIVATED","No Deactivated Events");
define("_CALNAVIPREV","Prev Events");
define("_CALNAVINEXT","Next Events");

/// ab 1.3
define("_CALPRINTER1","Print");
define("_CALPRINTER2","Send this page to printer");
define("_CALPOSTANONYMOUS", "Anonymous Users allowed to submit events");  
define("_CALUSERSAUTOPOST","Events from Registered Users approve automatically");
define("_CALANONYAUTOPOST","Events from Anonymous Users approve automatically");
define("_CALCATEGORIESADMIN","Category Configuration");
define("_CALCATEGORIESLANG","Select language");
define("_CALADMINMENU","Administration Menu");
define("_CALSHOWPOPS","Popup for Event Description");
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