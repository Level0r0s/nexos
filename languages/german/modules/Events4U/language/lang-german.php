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

define("_CHARSET", "UTF-8");
define("_BROWSER_LANGCODE", "de");
define("_EVENTS4U", "Events4U");
define("_MONTH", "Monat");
define("_DAY", "Tag");
define("_YEAR", "Jahr");
define("_CATEGORIE", "Kategorie");
define("_ALL", "Alle");
define("_SELECT", "Ansicht");
define("_TOP", "nach oben");
####### locale time-format variables #######
define("_CALSHORTDATEFORMAT","%d.%m.%y");
define("_CALLONGDATEFORMAT","%A, %d. %B %Y");
define("_CALMONTHDATEFORMAT","%B %Y");
define("_CALINTERNATIONALDATES",1);    //0 = mm/dd/yyyy, 1 = dd/mm/yyyy
define("_CALTIME24HOUR",1);  // 1 = 24 Stunden Zeit... 0 = AM/PM time
define("_CALLOCALE","de_DE");		# lokale Einstellungen z.B. Datumsformat fuer Linux/Unix
#define("_CALLOCALE","ge");   # lokale Einstellungen z.B. Datumsformat fuer Windows System!!
define("_CALTIMEFORMAT","%H:%Mh");
define("_CALWEEKBEGINN",1);  # the First Day in the Week: 0 = Sunday, 1 = Monday

define("_CWEEKBEGINN","Wochenanfang: 0 = Sonntag, 1 = Montag");	
define("_CALINTERDATE","Internationales Datum: Ja = mm/dd/yyyy, Nein = dd/mm/yyyy");	

####### main texts #######
define("_CALDOTCOLORALL","Alle Kategorien");     // desription of all Events (no colordot)
define("_CALSEND","Absenden");
define("_CALSUBMITEVENT", "Veranstaltung eintragen");
define("_CALSUBMITNAME", "Veranstaltung eintragen");
define("_CALNAME", "Veranstaltungskalender");
define("_CALPREVIEW", "Vorschau");
define("_CALOK", "Eintragen");
define("_CALEVENTDATETEXT", "Startdatum");
define("_CALSUBSENT", "Ihr Kalendereintrag ist eingegangen");
define("_CALTHANKSSUB", "Vielen Dank für Ihre Einsendung!");
define("_CALSUBTEXT", "In den nächsten Stunden wird Ihr Eintrag geprüft und gegebenenfalls veröffentlicht.");
define("_CALSUBTEXTADMIN", "Ihr Eintrag wurde sofort veröffentlicht.");
define("_CALWEHAVESUB", "Im Augenblick haben wir");
define("_CALWAITING", "Einsendungen, die darauf warten veröffentlicht zu werden.");
define("_CALEVENTDATEPREVIEW", "Veranstaltungsdatum");
define("_CALCHECKSTORY", "Bitte überprüfen Sie Text, Links, etc., BEVOR Sie Ihren Termin senden!");
define("_CALYOURNAME", "Ihr Name");
define("_CALLOGOUT", "Abmelden");
define("_CALSUBTITLE", "Titel");
define("_CALTOPIC", "Schwerpunkt");
define("_CALSELECTTOPIC", "Schwerpunkt auswählen");
define("_CALARTICLETEXT", "Beschreibung");
define("_CALHTMLISFINE", "HTML ist erlaubt, bitte stellen Sie sicher, dass der HTML-Code korrekt ist!");
define("_CALNEWSUBPREVIEW", "Terminvorschlag: Vorschau");
define("_CALSTORYLOOK", "Ihr Eintrag wird in etwa SO aussehen:");
define("_CALBEDESCRIPTIVE", "Beschreiben Sie bitte kurz und präzise!");
define("_CALSUBPREVIEW", "Vor der Übertragung müssen Sie zunächst die Vorschau ansehen");
define("_CALALLOWEDHTML", "Erlaubtes HTML");
define("_CALSUBMISSIONSADMIN", "Terminvorschläge");
define("_CALNEWSUBMISSIONS", "Neue Terminvorschläge");
define("_CALNOSUBJECT", "Titel fehlt!");
define("_CALNOSUBMISSIONS", "Keine neuen Terminvorschläge vorhanden!");
define("_CALDELETE", "Löschen");
define("_CALNAMEFIELD", "Name");
define("_CALDELETESTORY", "Termin löschen");
define("_CALPREVIEWSTORY", "Terminvorschau");
define("_CALPOSTSTORY", "Termin speichern");
define("_CALSUBMITADVICE1", "Füllen Sie bitte das folgende Formular aus.");
define("_CALSUBMITADVICE2", "Wir möchten Sie darauf hinweisen, dass nicht alle Termine veröffentlicht werden.<br>Eventuell nehmen wir uns die Freiheit, Ihren Termin zu überarbeiten.");
define("_CALPOSTEDBY","Veröffentlicht von");
define("_CALPOSTEDON","am");
define("_CALACCEPTEDBY"," und genehmigt von");
define("_CALcalViewEvent","Kalender-Termin");
define("_CALPREVIOUS","Vorherige");
define("_CALNEXT","Nächste");
define("_CALSTARTTIME","Startzeit");
define("_CALENDTIME","Ende");
define("_CALALLDAYEVENT","ganztägig");
define("_CALTIMEIGNORED","Start- und Endzeit werden ignoriert.");
define("_CALENDDATETEXT","Enddatum");
define("_CALENDDATEPREVIEW","Enddatum");
#define("_CALBARCOLORTEXT","Bitte waehlen Sie eine Kategorie für den Termin aus");
define("_CALBARCOLORTEXT","Kategorie");
define("_CALLOGIN","Login");
define("_CALNO","Nein");
define("_CALYES","Ja");
define("_CALREMOVETEST","Sind Sie sicher, dass Sie diesen Termin entfernen möchten?");
define("_CALNOTAUTHORIZED1","Sie sind nicht berechtigt, diesen Eintrag zu ändern oder zu entfernen!");
define("_CALNOTAUTHORIZED2","Für Fragen konsultieren Sie bitte den Systemadministrator");
define("_CALNOTAUTHORIZED3","Leider sind Sie sind nicht berechtigt, Einträge zu verändern oder zu löschen!");
define("_CALTODAY","Heute");
define("_CALLISTDESCRIPTION1","Übersicht der nächsten");
define("_CALLISTDESCRIPTION2","Termine");
define("_CALLISTSTART","ab");
define("_CALLISTRANGE","bis");
define("_CALHEADAPPOINTM","Termine");
define("_CALDAYEVENTS","Ereignisse");
define("_CALDAYMORNING","am Morgen");
define("_CALDAYEVENING","am Abend");
define("_CALMORE","weitere Termine");
define("_CAL1EVENT","Termin");
define("_CAL2EVENT","Termine");
define("_CAL0EVENTS", "Es sind keine Termine für diese Bedingung vorhanden");
define("_CAL0EVENTSBLOCK", "Leider haben wir zur Zeit keine aktuellen Termine zur Verfügung.");
define("_CALNOTODAYEVENTS","Keine Termine für heute.");
define("_CALADDASARTICLE","Artikel");
define("_CALADDASARTICLE2","Einen Artikel von diesem Termin erstellen.");

####### LINKS ########
define("_CALEVENTLINK","Termin eintragen");
define("_CALAPPTLINK","Termin eintragen");
define("_CALTASKLINK","Neue Aufgabe eintragen");
define("_CALDAYLINK","Tagesansicht");
define("_CALMONTHLINK","Monatsansicht");
define("_CALYEARLINK","Jahresansicht");
define("_CALJUMPTOTEXT","Auswahl vornehmen");
define("_CALJUMPBUTTON","Suchen");
define("_CALLISTLINK","nächste Termine");

####### MONTHS ########
define("_CALJAN","Januar");
define("_CALFEB","Februar");
define("_CALMAR","März");
define("_CALAPR","April");
define("_CALMAY","Mai");
define("_CALJUN","Juni");
define("_CALJUL","Juli");
define("_CALAUG","August");
define("_CALSEP","September");
define("_CALOCT","Oktober");
define("_CALNOV","November");
define("_CALDEC","Dezember");

####### DAYS OF THE WEEK ########
define("_CALFIRSTDAY","Mo");
define("_CALSECONDDAY","Di");
define("_CALTHIRDDAY","Mi");
define("_CALFOURTHDAY","Do");
define("_CALFIFTHDAY","Fr");
define("_CALSIXTHDAY","Sa");
define("_CALSEVENTHDAY","So");
define("_CALLONGFIRSTDAY","Montag");
define("_CALLONGSECONDDAY","Dienstag");
define("_CALLONGTHIRDDAY","Mittwoch");
define("_CALLONGFOURTHDAY","Donnerstag");
define("_CALLONGFIFTHDAY","Freitag");
define("_CALLONGSIXTHDAY","Samstag");
define("_CALLONGSEVENTHDAY","Sonntag");

####### FIELD VALIDATION STRINGS ########
define("_CALVALIDERRORMSG","Es sind Fehler aufgetreten beim Versuch, den Eintrag zu bestätigen!");
define("_CALVALIDFIXMSG","Bitte diese Fehler VOR der Vorschau oder Übertragung ändern.");
define("_CALVALIDSUBJECT","Das Feld 'Titel' ist zwingend notwendig.");
define("_CALVALIDENDDATE","Das Feld 'Enddatum' hat einen ungültigen Eintrag.");
define("_CALVALIDEVENTDATE","Das Feld 'Termindatum' hat einen ungültigen Eintrag.");
define("_CALVALIDDATES","Das 'Enddatum' muss nach oder gleich dem 'Termindatum' liegen.");
define("_CALVALIDTIMES","Das 'Enddatum' muss nach dem 'Startdatum' liegen'.");
define("_CALVALIDTOPIC", "Es muss ein Thema ausgewählt werden.");

define("_CALINDEX","Sollen rechte Blöcke angezeigt werden?");
define("_CALTEXTEVENTS","Sollen Bildlaufleisten für mehrtägige Termine verwendet werden?");
define("_CALADDARTICLEBOX","Sollen automatische Artikel erlaubt werden?");
define("_CALPOSTUSERS","Dürfen registrierte Benutzer Termine melden?");
define("_CALUSETOPICS","Sollen aus Veranstaltungen Artikel gebildet werden dürfen?");
define("_CALUSETOPICS1","Ja, aber nicht erforderlich");
define("_CALUSETOPICS2","Ja, erforderlich");
define("_CALDEFAULTVIEW","Standardansicht");
define("_CALMINUTERANGE","Abstand der Minuten bei Terminzeit-Auswahl");
define("_CALADMINEDITALL","Dürfen die Admins nur ihre eigene Termine bearbeiten?");
define("_CALADMINMENUSHOW","Soll das normale CMS-Adminmenü verwendet werden?");
define("_CALADMINTYPE","Welche Betreuer (Admins und Moderatoren) dürfen Veranstaltungen bearbeiten?");
define("_CALLISTCOUNT","Anzahl der Einträge in der Listenansicht");
define("_CALLISTSHOWSTART","Soll die Startzeit in der Listenansicht angezeigt werden?");
define("_CALLISTENDDATE","Soll das Enddatum in der Listenansicht angezeigt werden?");
define("_CALLISTENDTIME","Soll die Endzeit in der Listenansicht angezeigt werden?");
define("_CALLISTENDDATE2","Soll das Enddatum in der Listenansicht angezeigt werden, wenn es gleich dem Startdatum ist?");
define("_CALLISTBR","Soll ein Zeilenumbruch zwischen Datum und Zeit in der Listenansicht eingefügt werden?");
define("_CALDAYTIMEARRAY","Zeitbereiche in der Tagesansicht");
define("_CALALLOWABLEHTML","erlaubte HTML-Befehle in Terminbeschreibung");
define("_CALONLYWEN","(nur wenn Enddatum angezeigt)");
define("_CALSHOWLINKS","Datum in Terminansicht als Link zeigen");
define("_CALCALENDARCONFIG","Administration der Einstellungen");
define("_CALCONF1","Die Einstellungen konnten nicht gespeichert werden!");
define("_CALCONF2","Die Einstellungen wurden gespeichert!");
define("_CALCONF3","Die Datei ");
define("_CALCONF4","ist schreibgeschützt, <br>Änderungen können nicht gespeichert werden!");
define("_CALACTIV","Veranstaltung aktiv");
define("_CALMENUROWS","Spalten");
define("_CALMENUROWS2","Anzahl der Spalten in der Kategorieliste");

define("_CALERREVENTNOTEXIST","Dieser Termin existiert nicht in unserer Datenbank.");
define("_CALERRSQLERROR","Fehler beim Zugriff auf die Datenbank!");
define("_CALONLYDEACTIVATE","nur deaktivieren");
define("_CALDEACTIVATED","deaktivierte Termine");
define("_CALNODEACTIVATED","keine deaktivierten Termine");
define("_CALNAVIPREV","Termine zurück");
define("_CALNAVINEXT","Termine vor");

/// ab 1.3
define("_CALPRINTER1","Drucken");
define("_CALPRINTER2","Diese Seite ausdrucken");
define("_CALPOSTANONYMOUS","Dürfen Gäste Termine melden?");
define("_CALUSERSAUTOPOST","Sollen von registrierten Benutzern gemeldete Termine sofort freigeschaltet werden?");
define("_CALANONYAUTOPOST","Sollen von Gästen gemeldete Termine sofort freigeschaltet werden?");
define("_CALCATEGORIESADMIN","Administration der Kategorien");
define("_CALCATEGORIESLANG","Andere Sprachen wählen");
define("_CALADMINMENU","Zurück zum CPG-Nuke Administrationsmenü");
define("_CALSHOWPOPS","Soll im Veranstaltungstitel die Terminbeschreibung als Popup angezeigt werden?");
define("_CALSOURCE","Quelle");
define("_CALGOAL","Ziel");

/// ab 1.4
define('_CALHOURS','Stunden');
define('_CALMINUTES','Minuten');
define('_CALDAYS','Tage');
define('_CALMONTHS','Monate');
define('_CALYEARS','Jahre');
define("_CALPLSLOGIN","Bitte erst einloggen");
define("_CALSAVESETT", "Speichern");

define('_CALALLWORDS','Alle Wörter [ALLE]');
define('_CALANYWORDS','Einige Wörter [ODER]');
define('_CALSEARCH','Termin');
define('_CALSEARCHEVENT','Termin suchen');
define('_CALFOR','für');
define('_CALSEARCHTITLE','Suche in Kalender');
define('_CALCQUEUE','Suchergebnisse');
define('_CALTOMUCH1','Es sind mehr als ');
define('_CALTOMUCH2',' Es gibt zu viele Ergebnisse. Bitte schränken Sie Ihre Suche ein');
define("_CALSEARCHCOUNT", "max. Anzahl der Suchergebnisse");  
define('_CALSEARCHTOPICS','Suche in Artikeln');
define('_CALMOREOPTIONINF','Weitere Optionen für das Design des Kalenders finden Sie in dieser Datei:');
define('_CALSEFROMDATE','ab Datum');
define('_CALSELCATEGORY','Kategorie wählen');
define('_CALINTHIS','in');
define("_CALNOTOPICS", "Keine Themen vorhanden");
define('_CALGOTOEDIT','Erneut editieren');
define('_CALGOTOADMIN','Adminmenü');
define('_CALGOTOCALENDAR','Kalenderansicht');
define('_CALCONFVIEW1','Authorizations & Security');
define('_CALCONFVIEW2','Opinions & Optics');
define('_CALCONFVIEW3','Artikel');
define("_CALLISTSHOWLINKS","Zeige Datum in der Listenansicht als link");  


//// faq
define("_CALFAQ","Hilfe");
define("_CALFAQ1","Wie kann ich die Einträge eines anderen Datums ansehen?");
define("_CALFAQ2","Kann ich nur eine Kategorie einsehen?");
define("_CALFAQ3","Wie kann ich die Auswahl verwenden?");
define("_CALFAQ4","Wie kann ich mir zu einer Veranstaltung detaillierte Informationen anzeigen lassen?");
define("_CALFAQ5","Wie kann ich eine Kalenderseite ausdrucken?");
define("_CALFAQ6","Wie funktioniert die Suchfunktion?");
define("_CALFAQ7","Wie kann ich eine Veranstaltung eingeben?");
define("_CALFAQ8","Kann ich eine Veranstaltung noch verändern oder löschen?");
define("_CALFAQ9","");

define("_CALFAQA1","Um im Kalender ein anderes Datum einzusehen wählen Sie bitte unter 'Auswahl vornehmen' den gewünschten Tag, Monat und das Jahr aus und klicken Sie auf 'Suchen'. Der Kalender springt nun auf das gewünschte Datum um. Sie können so für jedes beliebige Datum verfahren, das sie interessiert. Um zum heutigen Tag zurückzukehren, klicken Sie bitte auf die Schaltfläche 'Heute'.");
define("_CALFAQA2","Standardmäßig zeigt der Kalender alle Kategorien im gleichen Kalenderblatt. Wenn Sie nur Veranstaltungen einer bestimmten Kategorie sehen möchten, dann wählen Sie diese Kategorie bitte mit dem Auswahlfeld 'Kategorie', oder klicken Sie auf das Kategorie-Schlüsselwort unter dem Kalender. Um wieder alle Kategorien anzuzeigen, wählen Sie bitte 'Alle' im Kategorien-Menü oder klicken Sie auf die Schaltfläche 'Alle Kategorien'.");
define("_CALFAQA3","Mit dem Auswahlfeld 'Ansicht' können Sie den Zeitraum wählen der im Kalender angezeigt werden soll. <br><br>\r\n\r\n<strong>Tagesansicht:</strong> Zeigt lediglich Veranstaltungen und Verabredungen für den aktuell gewählten Tag. Veranstaltungen sind definiert als ganztägige Termine. Hier wird der höchstmögliche Detailgrad der Veranstaltung oder des Termins angezeigt.<br><br>\r\n\r\n<strong>Monatsansicht:</strong> Zeigt die Veranstaltungen des aktuell gewählten Monats. Der aktuelle Tag ist optisch hervorgehoben. Lediglich die Zeit, der Titel sowie die farbliche Gestaltung werden zu jeder Veranstaltung angezeigt.<br><br>\r\n\r\n<strong>Jahresansicht:</strong> Zeigt das komplette Jahr, allerdings werden nur die Wochentage angezeigt. Das Tagesdatum ist immer optisch hervorgehoben.  Wenn ein Tag umrandet ist, bedeutet dies, dass ein oder mehrere Veranstaltungen an diesem Tag stattfinden. Wenn Sie hier auf ein Tagesdatum klicken, werden Sie automatisch auf die Tagesansicht weitergeleitet.<br><br>\r\n\r\n<strong>Nächste Termine:</strong> Diese Ansicht basiert entgegen der bisher beschriebenen Ansichten nicht auf den Tages- Wochen- oder Jahresdaten, sondern auf den Veranstaltungsdaten selbst. Die zukünftigen Veranstaltungen oder Termine ab dem Tagesdatum werden hier angezeigt.<br><br>\r\n\r\nNormalerweise sollte die Monatsansicht eingeschaltet sein, allerdings kann der Administrator auch eine andere Ansicht bevorzugen.");
define("_CALFAQA4","Um zu einer Veranstaltung nähere Informationen zu erhalten, bewegen Sie einfach die Maus über den Veranstaltungstitel. Eine Kurzanzeige zeigt dann direkt ohne zu Klicken einige Zeilen der hinterlegten Informationen zu dieser Veranstaltung. <br><br>\r\n\r\nUm alle Informationen zu einer Veranstaltung zu erhalten klicken Sie bitte direkt auf den Veranstaltungstitel. Um zur zuletzt gewählten Ansicht zurückzukehren klicken Sie einfach wieder auf 'Suchen'.<br><br>\r\n\r\n[Um die Kurzansicht nutzen zu können müssen Sie Javascript in Ihrem Browser aktiviert haben.]");
define("_CALFAQA5","Bevor Sie Ihren Kalender ausdrucken sollten Sie das Datum und die Ansicht Ihren Erfordernissen angepasst haben. Klicken Sie dann bitte auf 'Drucken'. Es öffnet sich die Druckansicht, die die druckoptimierte Variante Ihres Kalenders beinhaltet. Über die Druckfunktion Ihres Browsers können Sie diese Seite nun ausdrucken, alternativ können Sie auch auf 'Diese Seite drucken' klicken. Wenn der Druck beendet ist können Sie das Fenster wieder schließen.<br><br>\r\n\r\nDie Druckansicht ist mit den meisten PopUp-Blockern kompatibel, daher sollte sich die optimierte Druckansicht öffnen lassen, da zudem das Fenster lokal auf Ihrem PC geöffnet wird. Trotzdem verhindern manche PopUp-Blocker das Öffnen der Druckansicht. Geben Sie in diesem Fall in Ihrem PopUp-Blocker mittels einer Regeldefinition die URL des Forums frei.");
define("_CALFAQA6","Wenn Sie eine Veranstaltung suchen, sollten Sie zumindest ein Wort vom Veranstaltungstitel oder der -beschreibung kennen. Klicken Sie auf 'Veranstaltung suchen' um die Suche zu öffnen.<br><br>\r\n\r\n Bitte geben Sie ein oder mehrere Wörter in das Feld 'Suche nach:' ein. Mehrere Wörter werden die Genauigkeit der Suche beeinflussen, allerdings kann dadurch auch eventuell gar nichts gefunden werden. Wenn Sie mehr als ein Wort eingeben wählen Sie bitte den Suchtyp mit dem Auswahlfeld aus. ALLE bedeutet, dass alle in der Suche spezifizierten Wörter im Veranstaltungstitel oder der -beschreibung vorkommen müssen. ODER bedeutet, dass mindestens ein Wort von den angegebenen im Veranstaltungstitel oder der -beschreibung vorkommen müssen.<br><br>\r\n\r\n Wählen Sie bitte das Startdatum für die Suche, es werden keine Ergebnisse vor diesem Datum angezeigt. Standardmäßig beginnt die Suche ab dem heutigen Datum.<br><br>\r\n\r\nUm die Suche auf eine spezielle Kategorie einzuschränken, wählen Sie bitte eine Kategorie aus. Die Suchfunktion ist nun auf diese Kategorie beschränkt. Um in allen Kategorien zu suchen lassen Sie bitte das Auswahlfeld auf 'Alle Kategorien' stehen.<br><br>\r\n\r\nDie Suche unterscheidet nicht zwischen Groß- und Kleinschreibung.");
define("_CALFAQA7","Abhängig von Ihren Rechten können Sie Veranstaltungen entweder direkt in den Kalender eintragen oder den Betreuern zum Publizieren vorschlagen. Es kann auch sein, dass Sie lediglich Leserechte am Kalender haben.<br><br>\r\n\r\nDie Seite zum Vorschlagen einer Veranstaltung hat eine Vielzahl von Feldern, von denen einige wiederum abhängig von den Ihnen zugewiesenen Rechten gesperrt sein können.<br><br>\r\n\r\n<strong>Dein Name:</strong> Wenn Sie bereits eingeloggt sind wird dieses Feld vorausgefüllt sein.<br><br>\r\n\r\n<strong>Titel:</strong> Bitte geben Sie einen kurzen aussagekräftigen Titel an.<br><br>\r\n\r\n<strong>Startdatum:</strong> Setzen Sie bitte das Datum und die Zeit des Veranstaltungsbeginns.<br><br>\r\n\r\n<strong>Endedatum:</strong> Sofern Sie nicht 'ganztägig' angeklickt haben, geben Sie hier bitte das Datum und die Zeit des Veranstaltungsendes an. Dies muss logischerweise nach dem Veranstaltungsbeginn liegen.<br><br>\r\n\r\n<strong>ganztägig:</strong> Aktivieren Sie dieses Feld, wenn die Veranstaltung den ganzen Tag dauert. In diesem Fall wird das Veranstaltungsende nicht berücksichtigt.<br><br>\r\n\r\n<strong>Beschreibung:</strong> Beschreiben Sie hier bitte detailliert die Veranstaltung.<br><br>\r\n\r\n<strong>Kategorie:</strong> Setzen Sie hier bitte die Kategorie der Veranstaltung.<br><br>\r\n\r\n<strong>Schwerpunkt:</strong> Geben Sie hier bitte den Schwerpunkt an, zu dem die Veranstaltung passt.<br><br>\r\n\r\n<strong>Artikel:</strong> Aktivieren Sie dieses Feld, wenn Sie automatisch einen Artikel aus dem Titel und der Beschreibung der Veranstaltung erzeugen möchten. Bitte beachten Sie, dass jeder Artikel seperat vom Betreuerteam freigegeben werden muss, bevor er bei den Artikeln veröffentlicht wird.<br><br>\r\n\r\n<strong>Aktiv:</strong> Wählen Sie bitte 'Nein', wenn die Veranstaltung erst zu einem späteren Zeitpunkt im Kalender erscheinen soll.<br><br>\r\n\r\n<strong>Senden:</strong> Bitte verwenden Sie die Vorschau, bevor Sie die Veranstaltung speichern. In der Vorschau sehen Sie alle Formatierungen und Sie können die Hyperlinks überprüfen. Sie müssen 'Speichern' auswählen und dann auf 'Senden' gehen, damit die Veranstaltung in den Kalender übernommen wird.<br><br>\r\n\r\nSollten Sie bei der Eingabe Fehler gemacht haben, so wird Ihnen dies direkt, bei der Vorschau oder beim Speichern mitgeteilt.<br><br>\r\n\r\nAbhängig von den Ihnen zugewiesenen Rechten können Sie die Veranstaltung gleich im Kalender sehen, oder Sie werden informiert, dass ein Betreuer den Eintrag erst freigeben muss.");
define("_CALFAQA8","Um eine Veranstaltung zu editieren oder zu löschen klicken Sie einfach auf den Veranstaltungstitel. Wenn Sie die Rechte haben, Veranstaltungen zu verändern oder zu löschen, werden unterhalb der Veranstaltungsinformationen die entsprechenden Piktogramme angezeigt.");
define("_CALFAQA9","");
?>