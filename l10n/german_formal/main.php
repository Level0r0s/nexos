<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/german_formal/main.php,v $
  $Revision: 1.26 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:50 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','de');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %d %B %Y (%H:%M:%S) %Z');
define('_DATESTRING2','%A, %B %d');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Next Page');
define('_PREVIOUSPAGE','Previous Page');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Suchen');
define('_LOGIN','Anmelden');
define('_WRITES','schreibt');
define('_POSTEDON','Eingestellt am');
define('_NICKNAME','Benutzername');
define('_PASSWORD','Passwort');
define('_WELCOMETO','Willkommen auf');
define('_EDIT','Ändern');
define('_DELETE','Löschen');
define('_POSTEDBY','Eingestellt von');
define('_READS','gelesen');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Zurück</a>' : '<a href="javascript:history.go(-1)">Zurück</a>').' ]');
define('_COMMENTS','Kommentare');
define('_PASTARTICLES','Vorherige Artikel');
define('_OLDERARTICLES','Ältere Artikel');
define('_BY','von');
define('_ON','am');
define('_LOGOUT','Abmelden');
define('_WAITINGCONT','Wartende Einsendungen');
define('_WREVIEWS','Wartende Testberichte');
define('_WLINKS','Wartende Links');
define('_ONEDAY','An einem Tag wie heute...');
define('_ASREGISTERED','Sie haben noch kein Benutzerkonto? Sie können <a href="\'.getlink("Your_Account&amp;file=register").\'">hier</a> eines erstellen. Als registrierter Benutzer haben Sie einige Vorteile wie den Theme-Manager (Seitendesign), eigene Kommentareinstellungen und die Erfassung Ihrer Beiträge unter eigenem Namen.');
define('_MENUFOR','Menü für');
define('_NOBIGSTORY','Es gibt heute noch keinen Top-Artikel.');
define('_BIGSTORY','Der heutige Top-Artikel ist:');
define('_SURVEY','Umfrage');
define('_POLLS','Abstimmungen');
define('_PCOMMENTS','Kommentare:');
define('_RESULTS','Ergebnisse');
define('_HREADMORE','weiterlesen...');
define('_CURRENTLY','Es sind derzeit');
define('_GUESTS','Besucher und');
define('_MEMBERS','Mitgliede(r) online.');
define('_YOUARELOGGED','Sie sind angemeldet als');
define('_YOUHAVE','Sie haben');
define('_PRIVATEMSG','private Nachricht(en).');
define('_YOUAREANON','Sie sind ein anonymer Besucher. Sie können sich <a href="\'.getlink("Your_Account&amp;file=register").\'">hier</a> kostenlos registrieren.');
define('_NOTE','Hinweis:');
define('_ADMIN','Administrator:');
define('_WERECEIVED','Wir hatten');
define('_PAGESVIEWS','Seitenaufrufe seit');
define('_TOPIC','Thema');
define('_UDOWNLOADS','Downloads');
define('_VOTE','Stimme');
define('_VOTES','Stimmen');
define('_MVIEWADMIN','Ansicht: Nur Administratoren');
define('_MVIEWUSERS','Ansicht: Nur registrierte Benutzer');
define('_MVIEWANON','Ansicht: Nur anonyme Besucher');
define('_MVIEWALL','Ansicht: Alle');
define('_EXPIRELESSHOUR','Verfall: Unter 1 Stunde');
define('_EXPIREIN','Verfall in');
define('_UNLIMITED','Unbegrenzt');
define('_HOURS','Stunden');
define('_RSSPROBLEM','Es gibt zur Zeit ein Problem mit den Überschriften dieser Seite');
define('_SELECTLANGUAGE','Sprache wählen');
define('_SELECTGUILANG','Interface-Sprache wählen:');
define('_NONE','Keine');
define('_BLOCKPROBLEM','<center>Es gibt zur Zeit ein Problem mit diesem Block.</center>');
define('_BLOCKPROBLEM2','<center>Dieser Block hat zur Zeit keinen Inhalt.</center>');
define('_MODULENOTACTIVE','Dieses Modul ist zur Zeit leider nicht aktiviert!');
define('_NOACTIVEMODULES','Inaktive Module');
define('_MODULENOEXIST','Die angeforderte Datei %s existiert leider nicht.');
define('_FORADMINTESTS','(für Admin-Tests)');
define('_BBFORUMS','Forum');
define('_ACCESSDENIED','Zugriff verweigert');
define('_RESTRICTEDAREA','Sie versuchen auf einen geschützten Bereich zuzugreifen.');
define('_MODULEUSERS','Es tut uns leid, dieser Bereich unserer Seiten ist unseren <i>registrierten Benutzern</i> vorbehalten.<br /><br />');
define('_MODULEUSERS2','Sie können sich <a href="\'.getlink("Your_Account&file=register").\'">hier</a> kostenlos registrieren, um<br />Zugriff auf diesen Bereich zu erhalten. Danke für Ihr Verständnis.<br /><br />');
define('_MODULESADMINS','Es tut uns leid, dieser Bereich unserer Seiten ist unseren <i>Administratoren</i> vorbehalten.<br /><br />');
define('_MODULESGROUPS','Sie gehören nicht der erforderlichen Gruppe an');
define('_HOME','Startseite');
define('_HOMEPROBLEM','Es gibt ein grosses Problem: Es ist keine Startseite verfügbar!!!');
define('_ADDAHOME','Modul zur Startseite hinzufügen');
define('_HOMEPROBLEMUSER','Es gibt zur Zeit ein Problem mit der Startseite. Bitte versuchen Sie es später noch einmal.');
define('_MORENEWS','Mehr im Artikelbereich');
define('_ALLCATEGORIES','Alle Rubriken');
define('_SPAMGUARDPROTECTED','SpamGuard has blocked this email from being sent');
define('_M_CHARS','Maximal %s Zeichen');

define('_SYS_MESSAGE','Systemmeldung');
define('_SYS_MESSAGES','Systemmeldungen');
define('_SYS_MAINTENANCE','Sie arbeiten im Wartungsmode');
define('_SYS_DEMO','Sie arbeiten im administration demo mode<br />Sie können keine Änderungen an der Datenbank vornehmen<br /><a href="'.adminlink('logout').'">Abmelden</a>');

define('_DATE','Datum');
define('_HOUR','Stunde');
define('_UMONTH','Monat');
define('_YEAR','Jahr');
define('_JANUARY','Januar');
define('_FEBRUARY','Februar');
define('_MARCH','März');
define('_APRIL','April');
define('_MAY','Mai');
define('_JUNE','Juni');
define('_JULY','Juli');
define('_AUGUST','August');
define('_SEPTEMBER','September');
define('_OCTOBER','Oktober');
define('_NOVEMBER','November');
define('_DECEMBER','Dezember');

define('_MONDAY','Montag');
define('_TUESDAY','Dienstag');
define('_WEDNESDAY','Mittwoch');
define('_THURSDAY','Donnerstag');
define('_FRIDAY','Freitag');
define('_SATURDAY','Samstag');
define('_SUNDAY','Sonntag');

define('_ABR_MONDAY','Mo');
define('_ABR_TUESDAY','Di');
define('_ABR_WEDNESDAY','Mi');
define('_ABR_THURSDAY','Do');
define('_ABR_FRIDAY','Do');
define('_ABR_SATURDAY','Sa');
define('_ABR_SUNDAY','So');

define('_BWEL','Willkommen');
define('_BPM','Private Nachrichten');
define('_BUNREAD','Ungelesen');
define('_BREAD','Gelesen');
define('_BMEMP','Mitglieder');
define('_BLATEST','Neuestes');
define('_BTD','Heute neu');
define('_BYD','Gestern neu');
define('_BOVER','Gesamt');
define('_BVISIT','Anwesende Nutzer');
define('_BVIS','Besucher');
define('_BMEM','Mitglieder');
define('_BTT','Gesamt');
define('_BON','Jetzt online');
define('_BREG','Registrieren');
define('_BROADCAST','übertrage öffentliche Nachricht');
define('_BROADCASTFROM','öffentliche Nachricht von');
define('_TURNOFFMSG','öffentliche Nachrichten abschalten');
define('_JOURNAL','Tagebuch');
define('_READMYJOURNAL','Mein Tagebuch lesen');
define('_ADD','Hinzufügen');
define('_YES','Ja');
define('_NO','Nein');
define('_INVISIBLEMODULES','Unsichtbare Module');
define('_ACTIVEBUTNOTSEE','(Aktiv, aber ohne Link)');
define('_BOTS','Bots');

define('_UM','Dragonfly Update Monitor');
define('_UM_F','Keine Verbindung zum Updatedienst. Bitte versuchen Sie es später noch einmal.');
define('_UM_G','You are using the latest version of Dragonfly');
define('_UM_R','Bitte <a href="%2$s" target="_blank">aktualisieren</a> Sie auf Dragonfly %1$s');

define('_TEAM','Das Seitenteam.');
define('_LINKAPPROVEDMSG','Gratulation! Der von Ihnen übermittelte Link wurde aufgenommen. Bitte verlinken Sie zurück zu uns und senden Sie uns danach ein E-Mail.');
define('_MODREQLINKS','Linkänderungen');
define('_BROKENLINKS','Tote Links');
define('_MODREQDOWN','Downloadänderungen');
define('_BROKENDOWN','Tote Downloads');
define('_PAGEGENERATION','Seitenerstellung:');
define('_SECONDS','Sekunden');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Page Generation in %1$s seconds and %2$s DB Queries in %3$s seconds');
define('_YOUHAVEONEMSG','Sie haben 1 neue private Nachricht');
define('_NEWPMSG','Neue private Nachrichten');
define('_CONTRIBUTEDBY','Eingereicht von');
define('_CHAT','Chat');
define('_REGISTERED','Registriert');
define('_CHATGUESTS','Gäste');
define('_USERSTALKINGNOW','Benutzer im Chat');
define('_ENTERTOCHAT','Chat betreten');
define('_CHATROOMS','Verfügbare Räume');
define('_ALLTOPICS','Alle Überschriften');
define('_ASSOTOPIC','Verwandte Themen');
define('_HELLO','Hallo');
define('_ALL','Alle');
define('_URL','URL');
define('_SUBJECT','Betreff');
define('_PREVIEW','Vorschau');
define('_SEND','Senden');
define('_ANONYMOUS','Anonymous');
define('_BREADCRUMB', 'Breadcrumb Delimiter, appears in page titles between the words');
define('_BC_DELIM',isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&gt;&gt;');
define('_RESET','Reset');
define('_AT','at');
define('_LASTMSGS','Last %s Forum Messages');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','Druckbare Version');

define('_CREDITS_TITLE','Credits');
define('_CREDITS_PRODUCT','Produkt');
define('_CREDITS_DESC','Beschreibung');
define('_CREDITS_AUTHORS','Autor(en)');

define('_PP_TITLE','Datenschutzerklärung');
define('_PP_MODIFY','Nachricht verändern');

define('_SENDERNAME','Sender Name');
define('_SENDEREMAIL','Sender Email');
define('_RECIPIENTNAME','Recipient Name');
define('_RECIPIENTEMAIL','Recipient Email');

define('_REASONS_0','As Is');
define('_REASONS_1','Off Topic');
define('_REASONS_2','Flamebait');
define('_REASONS_3','Troll');
define('_REASONS_4','Redundant');
define('_REASONS_5','Insightful');
define('_REASONS_6','Interesting');
define('_REASONS_7','Informative');
define('_REASONS_8','Funny');
define('_REASONS_9','Overrated');
define('_REASONS_10','Underrated');

/* My Account Tools Block */
define('_TB_BLOCK','Benutzer-Tools');
define('_TB_TASKS','Aufgaben');
define('_TB_INFO','Information');
define('_TB_PROFILE_INFO','Meine Öffentliches Profil');
define('_TB_EDIT_PROFILE','Meine Profil-Informationen');
define('_TB_EDIT_REG','Meine Registrierungs-Details');
define('_TB_EDIT_PRIVATE','Meine Private Informationen');
define('_TB_EDIT_AVATAR','Mein Avatar');
define('_TB_DELETE','Account löschen');
define('_TB_CONFIG','Konfiguration');
define('_TB_EDIT_PREFS','Meine Einstellungen');
define('_TB_EDIT_HOME','Meine Homepage Einstellungen');
define('_TB_EDIT_COMM','Meine Kommentar Einstellungen');
define('_TB_PERSONAL','Persönlich');
define('_TB_PERSONAL_GALLERY','Meine Bildergalerie');
define('_TB_PERSONAL_JOURNAL','Mein Blog');
define('_TB_PRIVMSGS','Meine Private Nachrichten');
define('_TB_PRIVMSGS_INBOX','Inbox');
define('_TB_PRIVMSGS_OUTBOX','Outbox');
define('_TB_PRIVMSGS_SENTBOX','Sentbox');
define('_TB_PRIVMSGS_SAVEBOX','Savebox');
define('_TB_PRIVMSGS_SEND','Mail senden');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','User Info');
define('_SECURITYCODE','Sicherheitscode');
define('_TYPESECCODE','Code eingeben');
define('_MEMBERSOPTIONS','Mitgliedsoptionen');
define('_READSEND','Lesen Sie Ihre privaten Nachrichten oder schreiben Sie welche.');
define('_INBOX','Eingang');
define('_NEW','Neu');
define('_ACCOUNTOPTIONS','Ihr Benutzerkonto. ändern Sie Ihre Einstellungen und lesen Sie Ihre Nachrichten.');
define('_LOGOUTACCT','Von diesem Konto abmelden.');
define('_LOGOUTADMINACCT','Administrator abmelden.');
define('_BLOGIN','Ihr Benutzerkonto');
define('_BFLOGIN','Foren-Profil');
define('_BHID','Versteckt');
define('_WHOWHERE','Wer ist wo?');
define('_STAFFONL','Wir ist online');
define('_STAFFNONE','Keine Mitglieder online!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Community');
define('_BlogsLANG','Tagebuch');
define('_ContentLANG','Inhalte');
define('_coppermineLANG','Bildergalerie');
define('_CPGlangLANG','Hilf übersetzen');
define('_DownloadsLANG','Downloads');
define('_EncyclopediaLANG','Wörterbuch');
define('_ForumsLANG','Gemeinschafts-Foren');
define('_ContactLANG','Kontakt');
define('_FAQLANG','FAQ - Hilfe');
define('_Members_ListLANG','Mitgliederliste');
define('_NewsLANG','Artikel');
define('_ReviewsLANG','Testberichte');
define('_SearchLANG','Suchen');
define('_StatisticsLANG','Statistiken');
define('_Stories_ArchiveLANG','Artikelarchiv');
define('_Submit_NewsLANG','Artikel einreichen');
define('_SurveysLANG','Umfragen');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Themen');
define('_Private_MessagesLANG','Ihre privaten Nachrichten');
define('_Tell_a_FriendLANG','Weiterempfehlen');
define('_Web_LinksLANG','Links');
define('_Your_AccountLANG','Ihr Benutzerkonto');
define('_CPG_EventsLANG','Kalender');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Languages!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Groups');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Headlines');

define('_COMMUNICATION','Kommunikation');
define('_FRIENDS','Freunde');
define('_STORE','Store');
define('_PRODUCTS','Produkte');
define('_DONATE','Spenden');
define('_HELP','Hilfe');
define('_GALLERIES','Gallerien');
define('_DOCS','Dokumentation');
define('_RULES','Regeln & Einschränkungen');
define('_MENU','Main Menu');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','You <strong>are</strong> subscribed to<br />our newsletter');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','You are <strong>not</strong> subscribed to<br />our newsletter');
define('_NEWSLETTERBLOCKREGISTER','You must be a<br /><strong>registered user</strong><br />to receive our newsletter');
define('_NEWSLETTERBLOCKSUBSCRIBE','Anmelden');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Abmelden');
define('_NEWSLETTERBLOCKREGISTERNOW','Jetzt registrieren');
/* END Newsletter Block */

/* START class phpmailer lang array */
$PHPMAILER_LANG = array();
$PHPMAILER_LANG['provide_address'] = 'Sie mÃÂ¼ssen mindestens eine EmpfÃÂ¤ngeradresse angeben.';
$PHPMAILER_LANG['mailer_not_supported'] = ' Mailer nicht unterstützt.';
$PHPMAILER_LANG['execute'] = 'Ausführung gescheitert: ';
$PHPMAILER_LANG['instantiate'] = 'Konnte Mailfunktion nicht ansprechen.';
$PHPMAILER_LANG['authenticate'] = 'SMTP-Fehler: Anmeldung fehlgeschlagen.';
$PHPMAILER_LANG['from_failed'] = 'Die folgende Absenderadresse schlug fehl: ';
$PHPMAILER_LANG['recipients_failed'] = 'SMTP-Fehler: Der folgende Empfänger schlug fehl: ';
$PHPMAILER_LANG['data_not_accepted'] = 'SMTP-Fehler: Daten nicht akzeptiert.';
$PHPMAILER_LANG['connect_host'] = 'SMTP-Fehler: Konnte nicht mit SMTP-Host verbinden.';
$PHPMAILER_LANG['file_access'] = 'Dateizugriff verweigert: ';
$PHPMAILER_LANG['file_open'] = 'File Error: Konnte Datei nicht öffnen: ';
$PHPMAILER_LANG['encoding'] = 'Unbekannte Codierung: ';
/* END class phpmailer lang array */

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_SAVECHANGES','Änderungen speichern');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Sprache');
define('_FUNCTIONS','Funktionen');
define('_SHOW','Zeigen');
define('_TO','an');
define('_DAY','Tag');
define('_LAST','Letzten');
define('_ACTIVE','Aktiv');
define('_DEACTIVATE','Deaktivieren');
define('_INACTIVE','Inaktiv');
define('_ACTIVATE','Aktivieren');
define('_ACTIVATE2','Aktivieren?');
define('_VIEW','Zu sehen für');
define('_VIEWPRIV','Für wen anzeigen?');
define('_MVADMIN','Nur Administratoren');
define('_MVUSERS','Nur angemeldete Benutzer');
define('_MVANON','Nur Anonyme Benutzer');
define('_MVALL','Alle Besucher');
define('_IMAGE','Bild');
define('_GO','Los!');
define('_OPTION','Optionen');
define('_CATEGORY','Bereich');
define('_SUBCATEGORY','Sub-Category');
define('_ID','ID');
define('_EXPIRATION','Verfall');
define('_DAYS','Tagen');
define('_WARNING','Warnung');
define('_POLLTITLE','Umfrage-Titel');
define('_POLLEACHFIELD','Bitte für jede Auswahlmöglichkeit eine Zeile erstellen');
define('_ADDCATEGORY','Neue Kategorie hinzufügen');
define('_PAGEBREAK','Wenn Sie mehrere Seiten möchten, fügen Sie bitte <b>&lt;!--pagebreak--&gt;</b> für einen Seitenumbruch ein.');
define('_SIGNATURE','Signatur');
define('_DESCRIPTION','Beschreibung');
define('_EDITCATEGORY','Kategorie ändern');
define('_IN','in');
define('_DESCRIPTION255','Beschreibung: (maximal 255 Zeichen)');
define('_MODCATEGORY','Ändere eine Kategorie');
define('_SUBMITTER','gemeldet von');
define('_VISIT','Besuche');
define('_EXTENDEDTEXT','Erweiterter Text');
define('_CHECKCATEGORIES','Teste Kategorie');
define('_INCLUDESUBCATEGORIES','(inklusive Unterkategorien)');
define('_CHECKSUBCATEGORIES','Teste Unterkategorien');
define('_VALIDATELINKS','Überprüfe Links');
define('_FAILED','Fehler!');
define('_BEPATIENT','(...bitte etwas Geduld...)');
define('_VALIDATINGCAT','Getestete Kategorie (und alle Unterkategorien)');
define('_VALIDATINGSUBCAT','Überprüfe Unterkategorien');
define('_OK','Ok!');
define('_CHECK','Prüfen');
define('_IGNORE','Ignorieren');
define('_HITS','Hits');
define('_FILESIZE', 'File Size');
define("_EZTHEREIS","There are");
define("_EZSUBCAT","sub-categories");
define("_EZATTACHEDTOCAT","under this category");
define("_EZBROKENLINKS","Broken Links");
define("_DELEZLINKCATWARNING","WARNING : Are you sure you want to delete this category ?<br /> You will delete all sub-categories and attached links as well !");

// index.php
define('_DEFHOMEMODULE','Standard-Startseitenmodul');
define('_MODULEINHOME','geladenes Modul auf der Startseite:');
define('_CHANGE','Ändern');
define('_WHOSONLINE','Wer ist Online');
define('_NP_ADMIN','Notizbuch');
define('_NP_LOCKED','Das Notizbuch ist gesperrt<br />Nur ein root administrator (super user) kann es wieder freigeben');
define('_NP_SAVE','Notizen sichern');
define('_NP_UNLOCK','Notizbuch freigeben');
define('_NP_LOCK','Notizbuch sperren');
// news
define('_STICKY','Ständige Artikel');
define('_ARTICLEUP','Article UP');
define('_ARTICLEDOWN','Article DOWN');
define('_UNSTICK','Unstick');
define('_STICK','Sticky');
define('_AUTOMATEDARTICLES','Zeitgesteuerte Beiträge');
define('_STORYID','Story ID');
define('_CURRENTPOLL','Aktuelle Umfrage');

// admin.php
define('_ADMINISTRATION','Administration');
define('_NOADMINYET','Es existiert derzeit kein administratives Benutzerkonto, weiter um einen neuen Administrator anzulegen:');
define('_CREATEUSERDATA','Wollen Sie einen normalen Benutzer mit den gleichen Daten anlegen?');
define('_ADMINLOGIN','Administrator-LogIn');
define('_ADMINID','Admin ID');
define('_EMAIL','<b>eMail</b>');
define('_SUBMIT','Abschicken');
define('_YOUARELOGGEDOUT','Sie sind jetzt abgemeldet.');
define('_PASSWDNOMATCH','Sorry, die Passworte stimmen nicht überein. Bitte noch einmal versuchen');
define('_LOGIN_REMEMBERME','Passwort speichern ?');
define('_ADMINMENU_LOGOUT','Administration Menu Logout');
define('_PASSWORD_MALFORMED','Bitte verwenden Sie zumindest eine Zahl, einen Großbuchstaben und einen Kleinbuchstaben in Ihrem Passwort');

// admins.php
define('_AUTHORSADMIN','Autoren verwalten');
define('_NAME','Name');
define('_REQUIRED','(erforderlich)');
define('_MODIFYINFO','Informationen ändern');
define('_DELAUTHOR','Autor löschen');
define('_ADDAUTHOR','Neuen Administrator hinzufügen');
define('_PERMISSIONS','Zugriffsrechte');
define('_SUPERUSER','Super User');
define('_SUPERWARNING','WARNUNG: Wenn Super User markiert ist, erhält der Benutzer unbeschränkten Zugriff!');
define('_ADDAUTHOR2','Admin hinzufügen');
define('_RETYPEPASSWD','Passwort wiederholen');
define('_FORCHANGES','(Nur für Änderungen)');
define('_COMPLETEFIELDS','Es müssen alle benötigten Felder ausgefüllt werden');
define('_CREATIONERROR','Fehler bei Erstellung eines Autors aufgetreten');
define('_AUTHORDEL','Autor löschen');
define('_PUBLISHEDSTORIES','Dieser Administrator hat Beiträge veröffentlicht');
define('_SELECTNEWADMIN','Bitte einen neuen Administrator auswählen, zum Neuordnen');
define('_GODNOTDEL','*(GOD Benutzerkonto kann nicht gelöscht werden)');
define('_MAINACCOUNT','God Admin*');
define('_USERS','Benutzer');

// banners.php
define('_BANNERSADMIN','Banner');
define('_DELETEBANNER','Banner löschen');
define('_SURETODELBANNER','Sind Sie sicher, dass Sie das Banner löschen möchten?');
define('_EDITBANNER','Banner bearbeiten');

// blocks.php
define('_BLOCKSADMIN','Block Einstellungen');
define('_CENTER','zentrieren');
define('_CENTERUP','oben zentrieren');
define('_CENTERDOWN','unten zentrieren');
define('_BLOCKFILE','(Block-Datei)');
define('_BLOCKFILE2','DATEI');
define('_BLOCKSYSTEM','SYSTEM');
define('_ADDNEWBLOCK','Neuen Block hinzufügen');
define('_RSSFILE','RSS/RDF Datei-URL');
define('_ONLYHEADLINES','(Nur für Überschriften)');
define('_REFRESHTIME','Aktualisieren nach');
define('_CREATEBLOCK','Block erstellen');
define('_EDITBLOCK','Block bearbeiten');
define('_BLOCK','Block');
define('_SAVEBLOCK','Block speichern');
define('_BLOCKACTIVATION','Block aktivieren');
define('_BLOCKPREVIEW','Dies ist die Block-Voransicht');
define('_WANT2ACTIVATE','Möchten Sie diesen Block aktivieren?');
define('_ARESUREDELBLOCK','Sind Sie sicher, dass Sie diesen Block entfernen wollen?');
define('_BLOCKUP','Block HÖHER');
define('_BLOCKDOWN','Block TIEFER');
define('_BLOCKTOP','Move block to top');
define('_BLOCKBOTTOM','Move block to bottom');
define('_TITLE','Titel');
define('_POSITION','Position');
define('_WEIGHT','Reihenfolge');
define('_STATUS','Status');
define('_LEFTBLOCK','Linker Block');
define('_LEFT','Links');
define('_RIGHTBLOCK','Rechter Block');
define('_RIGHT','Rechts');
define('_TYPE','Typ');
define('_CUSTOM','Benutzerdefiniert');
define('_FILENAME','Dateiname');
define('_FILEINCLUDE','(Wählen Sie einen spezifischen Block. Alle anderen Felder werden ignoriert.)');
define('_VISIBLEINMODULES', 'Visible in modules');

// comments.php
define('_REMOVECOMMENTS','Kommentare Löschen');
define('_SURETODELCOMMENTS','Sind Sie sicher, dass Sie den gewählten Kommentar und die zugehörigen Antworten löschen wollen?');

// database.php
define('_SAVEDATABASE','Datenbank-Backup');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Derzeitiger Status');
define('_ACTIVATEPAGE','Diese Seite aktivieren?');

// history.php
define('_EPHEMADMIN','Tagesmotto verwalten');
define('_ADDEPHEM','Neues Tagesmotto hinzufügen');
define('_EPHEMDESC','Tagesmotto-Beschreibung');
define('_EPHEMMAINT','\'Tagesmotto\' verwalten (editieren/löschen):');
define('_EPHEMEDIT','Tagesmotto bearbeiten');
define('_EPHEMDELETE','Eintrag löschen');

// headlines.php
define('_RSSFAIL','Es gibt Probleme mit der RSS Datei-URL');
define('_RSSTRYAGAIN','Bitte URL und RSS Dateinamen überprüfen und noch einmal versuchen.');
define('_RSSCONTENT','(RSS/RDF Inhalt)');
define('_IFRSSWARNING','Bei Angabe einer URL wird der geschriebene Inhalt nicht angezeigt!');
define('_SETUPHEADLINES','(<i>Benutzerdefiniert</i> auswählen und die URL eingeben oder einfach eine Site aus der Liste wählen, um Nachrichtenüberschriften einzufügen)');
define('_HEADLINESADMIN','Adminbereich Überschriften');
define('_ADDHEADLINE','Überschrift hinzufügen');
define('_EDITHEADLINE','Überschrift ändern');
define('_SURE2DELHEADLINE','WARNUNG: Sind Sie sicher, dass Sie diese Überschrift löschen wollen?');

// messages.php
define('_MESSAGESADMIN','Mitteilungs-Administration');
define('_MESSAGETITLE','Titel');
define('_MESSAGECONTENT','Inhalt');
define('_ALLMESSAGES','Nachrichten-Übersicht');
define('_EDITMSG','Bearbeite Nachricht');
define('_ADDMSG','Nachricht Hinzufügen');
define('_REMOVEMSG','Sind Sie sicher, dass Sie diese Nachricht löschen wollen?');
define('_CHANGEDATE','Start-Datum auf heute stellen?');
define('_IFYOUACTIVE','(Wenn Sie diese Nachricht jetzt aktivieren, wird das Start-Datum auf heute gestellt)');

// modules.php
define('_MODULESADMIN','Modul-Administration');
define('_HOMECONFIG','Startseitenlänge');
define('_MODULESADDONS','Module und Addons');
define('_INHOME','Auf Startseite');
define('_MODULEHOMENOTE','<b>-= Hinweis =-</b><br />Der Modul-Titel in Fettschrift markiert das Modul, das auf der Startseite geladen wird.<br />Dieses Modul kann nicht deaktiviert oder gelöscht werden, solange es das Standardmodul ist!<br />Wird das Standardmodul aus dem Modulverzeichnis gelöscht, erscheint eine Fehlermeldung auf der Startseite.<br />Dieses Modul wird auch beim Anklicken des Links <i>Startseite</i> geladen.');
define('_PUTINHOME','Auf Startseite legen');
define('_SURETOCHANGEMOD','Sind Sie sicher, dass sie die Startseite ändern möchten von ');
define('_NOTINMENU','[ <big><strong>&middot;</strong></big> ] Definiert ein Modul, dessen Name und Link nicht im Modulblock sichtbar wird');
define('_SHOWINMENU','Im Modulblock sichtbar?');
define('_CUSTOMTITLE','Spezieller Titel');
define('_MODULEEDIT','Module bearbeiten');
define('_VERSION','Version');
define('_UPGRADE','Aktualisieren auf %s');
define('_DBSIZE','Datenbankgröße');
define('_CVS_EXPLAIN','Thru CVS you can recieve the latest builds of files very easily.<br /><b>BUT</b> the latest version of a file could have bugs since it is not an official release.<br />If you are familiar with PHP you can do an update of the files by clicking the link below.<br />Don\'t forget to make an backup first !!!');
define('_CVS_UPDATE','CVS Dateien aktualisieren');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','Von');
define('_STAFF','Die Mitarbeiter');
define('_NL_RECIPS','Empfänger');
define('_SUBSCRIBEDUSERS','Abonnenten');
define('_NL_ALLUSERS','Alle Mitglieder');
define('_NL_ADMINS','Administratoren');
define('_NL_REGARDS','Mit freundlichen Grüßen');
define('_DISCARD','Verwerfen');
define('_REVIEWTEXT','Bitte überprüfen Sie noch einmal den Text:');
define('_MANYUSERSNOTE','WARNUNG! Es sind sehr viele Benutzer, die diesen Text erhalten werden. Bitte warten Sie, bis das Script mit dieser Aktion fertig ist. Dies kann mehrere Minuten dauern!');
define('_NL_NOUSERS','Die Gruppe, die als Empfänger für diese Mail angegeben wurde, hat keine Mitglieder');
define('_NUSERWILLRECEIVE','Benutzer werden diesen Newsletter erhalten.');
define('_NLUNSUBSCRIBE',"We sent you this message because you have selected to receive newsletters from our site\n\nYou can choose to unsubscribe from our mailings at any time by following <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">this</a> link\n\nIf you would like further assistance, please send an email to <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">our administrator</a>");
define('_NEWSLETTERSENT','Newsletter wurde versandt.');

// referers.php
define('_WHOLINKS','Von woher kommen die Seitenbesucher?');
define('_DELETEREFERERS','Referer löschen');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Footer');
define('_DEBUG', 'Debug');
define('_SITECONFIG','Webseite konfiguieren');
define('_GENSITEINFO','Generelle Seitenangaben');
define('_SITENAME','Name der Seite');
define('_SITEURL','Seitenadresse');
define('_SITELOGO','Seitenlogo');
define('_SITESLOGAN','Seitenspruch');
define('_STARTDATE','Seiten-Startdatum');
define('_ADMINEMAIL','Administrator-eMail');
define('_ITEMSTOP','Zahl der Einträge auf der Topseite');
define('_STORIESHOME','Zahl der Artikel auf der Startseite');
define('_OLDSTORIES','Vorherige Artikel');
define('_ALLOWANONPOST','Dürfen unangemeldete Benutzer schreiben?');
define('_DEFAULTTHEME','Standardtheme Ihrer Seite');
define('_SHOWSEC','Show security code');
define('_TOOLTIPS','Sicherheits-Code anzeigen');
define('_UM_TOGGLE','Update Monitor starten');
define('_UM_EXPLAIN','This will retrieve two pieces of information from our website, dragonflycms.org: the current build of Dragonfly, and if there are any important messages that pertain to your version of Dragonfly. The only data sent to our site is your Dragonfly version number. We do <strong>not</strong> log these requests to our server.');
// maintenance
define('_MAINTENANCE','Wartung');
define('_MESSAGE','Meldung');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','Mehrsprachigkeits-Optionen');
define('_SELLANGUAGE','Sprache Ihrer Seite');
define('_LOCALEFORMAT','Lokales Zeitformat');
define('_ACTMULTILINGUAL','Aktiviere mehrsprachige Funktionen? ');
define('_ACTUSEFLAGS','Zeige Flaggen anstatt Auswahl-Dropdwon? ');
// banners
define('_BANNERSOPT','Bannereinstellungen');
define('_ACTBANNERS','Aktiviere Banner auf Ihrer Seite?');
// footer
define('_FOOTERMSG','Fussnachricht');
define('_FOOTERLINE1','Fusszeile 1');
define('_FOOTERLINE2','Fusszeile 2');
define('_FOOTERLINE3','Fusszeile 3');
// backend
define('_BACKENDCONF','Backend-Einstellungen');
define('_BACKENDTITLE','Backendname');
define('_BACKENDLANG','Backendsprache');
// mail stories
define('_MAIL2ADMIN','Mail über neue Artikel an Admin');
define('_NOTIFYSUBMISSION','Über neue Einsendungen per eMail informiert werden?');
define('_EMAIL2SENDMSG','eMail an wen senden');
define('_EMAILSUBJECT','Betreff der eMail');
define('_EMAILMSG','eMail-Nachricht');
define('_EMAILFROM','eMail von wem (Absender)');
// comments
define('_COMMENTSOPT','Kommentar-Einstellungen');
define('_COMMENTSLIMIT','Längenlimit in Bytes');
define('_COMMENTSMOD','Kommentare moderieren');
define('_MODADMIN','Moderation durch Admin');
define('_MODUSERS','Moderation durch User');
define('_NOMOD','Keine Moderation');
// adminmenu
define('_GRAPHICOPT','Grafische Einstellungen');
define('_BOTH','Both');
define('_GRAPHICAL','Grafisch');
define('_SIDEBLOCK','Sideblock');
// miscellaneous
define('_MISCOPT','Sonstige Einstellungen');
define('_ACTIVATEHTTPREF','HTTP-Referers aktivieren?');
define('_MAXREF','Maximal wie viele Referer-Angaben?');
define('_COMMENTSPOLLS','Kommentare in Umfragen aktivieren?');
define('_COMMENTSARTICLES','Kommentare für diesen Artikel aktivieren?');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','Zensuroption');
define('_CENSORMODE','Zensurmodus');
define('_NOFILTERING','keine Filterung');
define('_EXACTMATCH','exakter Treffer');
define('_MATCHBEG','Treffer für das Wort am Anfang');
define('_MATCHANY','Treffer für das Wort irgendwo im Text');
define('_CENSORREPLACE','Ersetze zensierte Wörter durch:');
// email
define('_EMAILOPTIONS','Optionen für Contact Modul und Newsletter');
define('_ALLOW_HTML_EMAIL','HTML E-Mail zulassen');
define('_USE_SMTP','Mails über SMTP und nicht über PHP verschicken');
define('_SMTP_HOST','SMTP Server (smtp.example.com)');
define('_USE_SMTP_AUTH','Server verlangt Login');
define('_SMTP_USER_NAME','SMTP User Name');
define('_SMTP_USER_PASS','SMTP User Password');

// cpg_adminmenu.php
define('_ADMINMENU','Administrationsmenü');
define('_ADMINLOGOUT','Abmelden');
define('_AMENU0','System');
define('_AMENU1','Allgemein');
define('_AMENU2','Mitglieder');
define('_AMENU3','Meldungen');
define('_AMENU4','Foren');
define('_AMENU5','Informative');
define('_AMENU6','Linking');
define('_AMENU7','Commerce');
define('_AMENU8','Multimedia');
define('_AMENU9','Modules');
define('_BMENU1','Help');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','Einstellungen');
define('_DATABASE','Datenbank');
define('_BLOCKS','Blöcke');
define('_MODULES','Module');
define('_EDITADMINS','Administratoren');
define('_MESSAGES','Mitteilungen');
define('_BANNERS','Banner');
define('_HTTPREFERERS','HTTP Referers');
define('_EDITUSERS','Benutzer');
define('_USERSCONFIG','Einstellungen');
define('_NEWSLETTER','Newsletter');
define('_SUBMISSIONS','Einsendungen');
define('_ADDSTORY','Neuen Artikel');
define('_TOPICS','Themen');
define('_ADMPOLLS','Umfragen');
define('_EPHEMERIDS','Tages-Zitate');
define('_REVIEWS','Testberichte');
define('_ENCYCLOPEDIA','Wörterbuch');
define('_SURVEYS','Umfragen');
define('_SECTIONS','Bereiche');
define('_ARTICLES','Artikel');
define('_FAQ','FAQ');
define('_DOWNLOAD','Downloads');
define('_WEBLINKS','Links');
define('_CONTENT','Inhalt');
define('_SYSINFO','System Info');
define('_REPORTABUG','Fehler Melden');
//coppermine admin
define('_W_INSTALL','Welche Installation?');
define('_W_PAGE','Welche Seite?');
//security admin
define('_SECURITY','Security');
define('_PROTECTION','Protection');
define('_EMAIL_DOMAINS','E-Mail Domains');
define('_FLOODING','Flooding');
define('_UUA','Unknown User-Agents');
define('_FLOODING_TIP','Flooding: Delay<br /><em>timing between each warning</em>');
define('_BAN_TIP','Flooding: Ban Duration<br /><em>how long the ban will last for</em>');
define('_AUTO_UNBAN_TIP','Flooding: Auto Unban<br /><em>clean ban after duration time expires</em>');
define('_FOREVER','forever');
define('_REMOVE_SELECTED','Remove selected');

//errors for cpg_error
define('_ERROR','ERROR');
define('_SEC_ERROR','Security Error');
define('_ERROR_NOT_SET','%s was not set');
define('_ERROR_NO_POST','Posting from another host is disallowed...');
define('_ERROR_NO_GET','GET Requests sind nicht erlaubt in dieser Funktion!.');
define('_ERROR_BAD_CHAR','The characters that you tried to include in your %s request are forbidden...');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','You tried to access this page through a bad link...');
define('_ERROR_NONE_TO_DISPLAY','There are no %s to display');
define('_ERROR_DELETE_CONF','Sind Sie sicher, daß Sie %s löschen wollen?');
define('_ERROR_NO_EXIST','%s existiert nicht');
define('_ERROR_ALREADYEXIST','%s already exists');
define('_TASK_COMPLETED','Operation complete!');
define('_CONFIRM','Confirm');
define('_FOOTER_COPYRIGHTS', 'Interactive software released under <a href="http://dragonflycms.org/GNUGPL.html" target="_blank" title="GNU Public License Agreement">GNU GPL</a>,	<a href="'.getlink('credits').'">Code Credits</a>,	<a href="'.getlink('privacy_policy').'">Privacy Policy</a>');

# time
$LNG = array('_time' => array(
'l' => array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'),
'D' => array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'),
'F' => array(1=>'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
'M' => array(1=>'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
));
$LNG['_time']['l'][7] =& $LNG['_time']['l'][0];
$LNG['_time']['D'][7] =& $LNG['_time']['D'][0];
