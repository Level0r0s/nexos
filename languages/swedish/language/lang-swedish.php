<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version.
  This program comes without any warranty.
  $Source: /cvs/languages/swedish/language/lang-swedish.php,v $
  $Revision: 1.6 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:45 $

***********************************************************************/
if (!defined('CPG_NUKE')) { die('You do not have permission to access this file'); }
global $MAIN_CFG;
define('_CHARSET','UTF-8');
define('_BROWSER_LANGCODE','sv');
define('_DATESTRING','%A, %d %B %Y (%H:%M:%S)');
define('_DATESTRING2','%A, %B %d');
define('_DATESTRING3','%d-%b-%Y');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Sök');
define('_LOGIN','Logga in');
define('_WRITES','skriver');
define('_POSTEDON','Postad');
define('_NICKNAME','Alias');
define('_PASSWORD','Lösenord');
define('_WELCOMETO','Välkommen till');
define('_EDIT','Redigera');
define('_DELETE','Radera');
define('_POSTEDBY','Postad av');
define('_READS','läsningar');
define('_GOBACK','[ <a href="javascript:history.go(-1)">Gå Tillbaka</a> ]');
define('_COMMENTS','kommentarer');
define('_PASTARTICLES','Föregående Artiklar');
define('_OLDERARTICLES','Äldre Artiklar');
define('_BY','av');
define('_ON',' ');
define('_LOGOUT','Logga ut');
define('_WAITINGCONT','Väntande Innehåll');
define('_WREVIEWS','Recensioner');
define('_WLINKS','Länkar');
define('_ONEDAY','På en dag som denna...');
define('_ASREGISTERED','Har du inget medlemskap än? Du kan <a href="modules.php?name=Your_Account">bli medlem</a>. Som registrerad medlem har du lite fördelar som en temaväljare, kommentarsinställningar och möjligheten att skriva kommentarer under ditt eget namn.');
define('_MENUFOR','Meny för');
define('_NOBIGSTORY','Det finns inget Het Nyhet för Dagen, ännu.');
define('_BIGSTORY','Dagens mest lästa Nyhet är:');
define('_SURVEY','Undersökning');
define('_POLLS','Undersökningar');
define('_PCOMMENTS','Kommentarer:');
define('_RESULTS','Resultat');
define('_HREADMORE','läs mer...');
define('_CURRENTLY','Det finns för närvarande,');
define('_GUESTS','gäst(er) och');
define('_MEMBERS','medlem(mar) som är online.');
define('_YOUARELOGGED','Du är inloggad som');
define('_YOUHAVE','Du har');
define('_PRIVATEMSG','privata meddelanden.');
define('_YOUAREANON','Du är en anonym besökare. Du kan registrera dig gratis genom att fylla i detta <a href="modules.php?name=Your_Account">formulär</a>');
define('_NOTE','Notera:');
define('_ADMIN','Admin:');
define('_WERECEIVED','Vi har haft');
define('_PAGESVIEWS','sidvisningar sedan');
define('_TOPIC','Ämne det ska postas under');
define('_UDOWNLOADS','Nedladdningar');
define('_VOTE','Rösta');
define('_VOTES','Röster');
define('_MVIEWADMIN','Vy: Endast Administratörer');
define('_MVIEWUSERS','Vy: Endast Medlemmar');
define('_MVIEWANON','Vy: Endast Anonyma besökare');
define('_MVIEWALL','Vy: Alla Besökare');
define('_EXPIRELESSHOUR','Förfaller inom en timme');
define('_EXPIREIN','Förfaller om');
define('_UNLIMITED','Obegränsat');
define('_HOURS','Timmar');
define('_RSSPROBLEM','Det är för närvarande problem med rubriker från denna webbplats');
define('_SELECTLANGUAGE','Välj Språk');
define('_SELECTGUILANG','Välj Språk för gränssnitt:');
define('_NONE','Ingen');
define('_BLOCKPROBLEM','<center>Det är ett problem med detta Block just nu.</center>');
define('_BLOCKPROBLEM2','<center>Deta finns inget innehåll i detta Block just nu.</center>');
define('_MODULENOTACTIVE','Ledsen, denna Modul är inte Aktiverad!');
define('_NOACTIVEMODULES','Inaktiva Moduler');
define('_MODULENOEXIST','We\'re sorry, but the requested file, %s, does not appear to exist');
define('_FORADMINTESTS','(för Admin test)');
define('_BBFORUMS','Forum');
define('_ACCESSDENIED','Tillgång Nekas');
define('_RESTRICTEDAREA','Du försöker komma åt en spärrad avdelning.');
define('_MODULEUSERS','Denna avdelning är bara öppen för <i>Registerade Besökare</i><br><br>Du kan Registrera dig helt gratis genom att klicka <a href="modules.php?name=Your_Account&op=new_user">här</a>, efter detta du registrerat dig och fått dina uppgifter<br>så kommer du åt denna avdelning. Tack!.<br><br>');
define('_MODULEUSERS2','You can register for free by following <a href=\'\'.getlink(\'Your_Account&amp;file=register\').\'\'>this</a> link, thus granting you permission to access this area of our site<br /><br />Thank you for your understanding');
define('_MODULESADMINS','Denna avdelning är endast tillgänglig för <i>Administratörer</i><br><br>');
define('_MODULESGROUPS','group access required');
define('_HOME','Hem');
define('_HOMEPROBLEM','Det finns ett problem: Vi har ingen hemsida!');
define('_ADDAHOME','Lägg till en modul i menyn');
define('_HOMEPROBLEMUSER','Vi har ett problem med hemsidan. Var God Försök Senare!');
define('_MORENEWS','Mer i nyhetssektionen');
define('_ALLCATEGORIES','Alla kategorier');
define('_SPAMGUARDPROTECTED','SpamGuard has blocked this email from being sent');
define('_M_CHARS','Maximum: %s characters');

define('_SYS_MESSAGE','System Message');
define('_SYS_MESSAGES','System Messages');
define('_SYS_MAINTENANCE','You are running under maintenance mode');
define('_SYS_DEMO','You are running under administration demo mode<br />You cannot make any changes to the database<br /><a href="\'.adminlink(\'logout\').\'">Log me out!</a>');

define('_DATE','Datum');
define('_HOUR','Timme');
define('_UMONTH','Månad');
define('_YEAR','År');
define('_JANUARY','Januari');
define('_FEBRUARY','Februari');
define('_MARCH','Mars');
define('_APRIL','April');
define('_MAY','Maj');
define('_JUNE','Juni');
define('_JULY','Juli');
define('_AUGUST','Augusti');
define('_SEPTEMBER','September');
define('_OCTOBER','Oktober');
define('_NOVEMBER','November');
define('_DECEMBER','December');

define('_MONDAY','Monday');
define('_TUESDAY','Tuesday');
define('_WEDNESDAY','Wednesday');
define('_THURSDAY','Thursday');
define('_FRIDAY','Friday');
define('_SATURDAY','Saturday');
define('_SUNDAY','Sunday');

define('_ABR_MONDAY','Mon');
define('_ABR_TUESDAY','Tues');
define('_ABR_WEDNESDAY','Wed');
define('_ABR_THURSDAY','Thurs');
define('_ABR_FRIDAY','Fri');
define('_ABR_SATURDAY','Sat');
define('_ABR_SUNDAY','Sun');

define('_BWEL','Välkommen');
define('_BPM','Privata meddelanden');
define('_BUNREAD','Olästa');
define('_BREAD','Lästa');
define('_BMEMP','Medlemskap');
define('_BLATEST','Senaste');
define('_BTD','Nya idag');
define('_BYD','Nya igår');
define('_BOVER','Genomsnittligt');
define('_BVISIT','Besökare online');
define('_BVIS','Besökare');
define('_BMEM','medlemmar');
define('_BTT','Totalt');
define('_BON','Online nu');
define('_BREG','Registrera');
define('_BROADCAST','Skicka ut Publikt Meddelande');
define('_BROADCASTFROM','Publikt Meddelande från');
define('_TURNOFFMSG','Slå av Publikt Meddelande');
define('_JOURNAL','Dagbok');
define('_READMYJOURNAL','Läs min dagbok');
define('_ADD','lägg till');
define('_YES','Ja');
define('_NO','Nej');
define('_INVISIBLEMODULES','Osynliga Moduler');
define('_ACTIVEBUTNOTSEE','(Aktiva men osynlig länk)');

define('_TEAM','Team');
define('_LINKAPPROVEDMSG','Congratulations! The web link you submitted has been approved. Please link back to us and send an email with the url where you have done so.');
define('_MODREQLINKS','Mod. Länkar');
define('_BROKENLINKS','Brutna Länkar');
define('_MODREQDOWN','Mod. Nedladdningar');
define('_BROKENDOWN','Brutna Nedladdningar');
define('_PAGEGENERATION','SidGenerering:');
define('_SECONDS','Sekunder');
define('_YOUHAVEONEMSG','Du har 1 Nytt Privat Meddelande');
define('_NEWPMSG','Nytt Privat Meddelande');
define('_CONTRIBUTEDBY','inskickat av');
define('_CHAT','Chat');
define('_REGISTERED','Registrerade');
define('_CHATGUESTS','Gäster');
define('_USERSTALKINGNOW','Användare sokm Chattar just nu');
define('_ENTERTOCHAT','Enter för att Chatta');
define('_CHATROOMS','Tillgängliga Rum');
define('_ALLTOPICS','Alla Ämnen');
define('_ASSOTOPIC','Associerade Ämnen');
define('_HELLO','Hej');
define('_ALL','Alla');
define('_URL','URL');
define('_SUBJECT','Ämne');
define('_PREVIEW','Förhandsgranska');
define('_SEND','Skicka');
define('_ANONYMOUS','Anonymous');

define('_CREDITS_TITLE','Credits');
define('_CREDITS_PRODUCT','Product');
define('_CREDITS_DESC','Description');
define('_CREDITS_AUTHORS','Author(s)');

define('_PP_TITLE','Privacy Policy');
define('_PP_MODIFY','Modify this message');

/* My Account Tools Block */
define('_TB_BLOCK','My Account Tools');
define('_TB_TASKS','Tasks');
define('_TB_INFO','Information');
define('_TB_PROFILE_INFO','My public profile');
define('_TB_EDIT_PROFILE','My profile information');
define('_TB_EDIT_REG','My registration details');
define('_TB_EDIT_PRIVATE','My private information');
define('_TB_EDIT_AVATAR','My avatar');
define('_TB_DELETE','Delete my account');
define('_TB_CONFIG','Configuration');
define('_TB_EDIT_PREFS','My preferences');
define('_TB_EDIT_HOME','My homepage settings');
define('_TB_EDIT_COMM','My comment settings');
define('_TB_PERSONAL','Personal');
define('_TB_PERSONAL_GALLERY','My gallery');
define('_TB_PERSONAL_JOURNAL','My journal');
define('_TB_PRIVMSGS','Private Messages');
define('_TB_PRIVMSGS_INBOX','Inbox');
define('_TB_PRIVMSGS_OUTBOX','Outbox');
define('_TB_PRIVMSGS_SENTBOX','Sentbox');
define('_TB_PRIVMSGS_SAVEBOX','Savebox');
define('_TB_PRIVMSGS_SEND','Send message');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','User Info');
define('_SECURITYCODE','Säkerhetskod');
define('_TYPESECCODE','Skriv Säkerhetskod');
define('_MEMBERSOPTIONS','Medlems Inställningar');
define('_READSEND','Läs dina Privata Meddelande. Skicka till andra.');
define('_INBOX','Inkommande');
define('_NEW','Nya');
define('_ACCOUNTOPTIONS','Ditt Konto. Ändra inställningar och läs dina meddelanden..');
define('_LOGOUTACCT','Logga ut.');
define('_LOGOUTADMINACCT','Logga ut som Admin.');
define('_BLOGIN','Ditt Konto');
define('_BFLOGIN','Forumprofil');
define('_BHID','Dold');
define('_WHOWHERE','Vem är härinne');
define('_STAFFONL','Ansvariga Inloggade');
define('_STAFFNONE','Inga Ansvariga Inloggade!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Community');
define('_ContentLANG','Content');
define('_coppermineLANG','Photo Gallery');
define('_CPGlangLANG','Help Translate');
define('_DownloadsLANG','Downloads');
define('_EncyclopediaLANG','Encyclopedia');
define('_ForumsLANG','Community Forums');
define('_ContactLANG','Contact Us');
define('_FAQLANG','FAQ - Help');
define('_JournalLANG','Journal');
define('_Members_ListLANG','Members List');
define('_NewsLANG','News');
define('_ReviewsLANG','Reviews');
define('_SearchLANG','Search');
define('_StatisticsLANG','Statistics');
define('_Stories_ArchiveLANG','Stories Archive');
define('_Submit_NewsLANG','Submit News');
define('_SurveysLANG','Surveys');
define('_TopicsLANG','Topics');
define('_Private_MessagesLANG','My Private Messages');
define('_Recommend_UsLANG','Tell a Friend');
define('_Web_LinksLANG','Links');
define('_Your_AccountLANG','My Account');
define('_Events4ULANG','Calendar');
define('_COMMUNICATION','Communication');
define('_FRIENDS','Friends');
define('_STORE','Store');
define('_PRODUCTS','Products');
define('_DONATE','Donate');
define('_HELP','Help');
define('_GALLERIES','Galleries');
define('_DOCS','Documentation');
define('_RULES','Rules & regulations');
define('_MENU','Main Menu');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','You <strong>are</strong> subscribed to<br />our newsletter');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','You are <strong>not</strong> subscribed to<br />our newsletter');
define('_NEWSLETTERBLOCKREGISTER','You must be a<br /><strong>registered user</strong><br />to receive our newsletter');
define('_NEWSLETTERBLOCKSUBSCRIBE','Subscribe');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Unsubscribe');
define('_NEWSLETTERBLOCKREGISTERNOW','Register Now!');
/* END Newsletter Block */

/* START class phpmailer lang array */
$PHPMAILER_LANG = array();
$PHPMAILER_LANG["provide_address"] = 'Du måste ange minst en mottagares e-postadress.';
$PHPMAILER_LANG["mailer_not_supported"] = ' mailer stöds inte.';
$PHPMAILER_LANG["execute"] = 'Kunde inte köra: ';
$PHPMAILER_LANG["instantiate"] = 'Kunde inte initiera e-postfunktion.';
$PHPMAILER_LANG["authenticate"] = 'SMTP fel: Kunde inte autentisera.';
$PHPMAILER_LANG["from_failed"] = 'Följande avsändaradress är felaktig: ';
$PHPMAILER_LANG["recipients_failed"] = 'SMTP fel: Följande mottagare är felaktig: ';
$PHPMAILER_LANG["data_not_accepted"] = 'SMTP fel: Data accepterades inte.';
$PHPMAILER_LANG["connect_host"] = 'SMTP fel: Kunde inte ansluta till SMTP-server.';
$PHPMAILER_LANG["file_access"] = 'Ingen åtkomst till fil: ';
$PHPMAILER_LANG["file_open"] = 'Fil fel: Kunde inte öppna fil: ';
$PHPMAILER_LANG["encoding"] = 'Okänt encode-format: ';
/* END class phpmailer lang array */

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_SAVECHANGES','Spara Ändringar');
define('_LANGUAGE','Språlk');
define('_FUNCTIONS','Funktioner');
define('_SHOW','Visa');
define('_TO','Till');
define('_DAY','Dag');
define('_LAST','Senast');
define('_ACTIVE','Aktiv');
define('_DEACTIVATE','Inaktivera');
define('_INACTIVE','Inaktiv');
define('_ACTIVATE','Aktivera');
define('_ACTIVATE2','Aktivera?');
define('_VIEW','Synligt för');
define('_VIEWPRIV','Vem kan se detta?');
define('_MVADMIN','Endast Administratörer');
define('_MVUSERS','Endast Medlemmar');
define('_MVANON','Endast Anonyma Besökare');
define('_MVALL','Alla Besökare');
define('_IMAGE','Bild');
define('_GO','Kör!');
define('_OPTION','Valfritt');
define('_CATEGORY','Kategori');
define('_ID','ID');
define('_EXPIRATION','Förfaller');
define('_DAYS','dagarna');
define('_WARNING','Varning');
define('_POLLTITLE','Undersökningstitel');
define('_POLLEACHFIELD','Ange varje valmöjlighet på en egen rad');
define('_ADDCATEGORY','Addera en Ny Kategori');
define('_PAGEBREAK','Om du vill ha artikeln uppdelad på ett antal sidor så kan du skriva <b>&lt;!--pagebreak--&gt;</b> där du vill ha sidbyte.');
define('_SIGNATURE','Signatur');
define('_DESCRIPTION','Beskrivning');
define('_EDITCATEGORY','Redigera Kategori');
define('_IN','i');
define('_DESCRIPTION255','Beskrivning: (max 255 tecken)');
define('_MODCATEGORY','Modifiera en Kategori');
define('_SUBMITTER','Inskickad av');
define('_VISIT','Besök');
define('_EXTENDEDTEXT','Brödtext');
define('_CHECKCATEGORIES','Kontrollera Kategorier');
define('_INCLUDESUBCATEGORIES','(inkludera Underkategorier)');
define('_CHECKSUBCATEGORIES','Kontrollera Underkategorier');
define('_VALIDATELINKS','Validera Länkar');
define('_FAILED','Fungerade inte!');
define('_BEPATIENT','(var uthållig tack)');
define('_VALIDATINGCAT','Kontrollerar kategori (och alla underkategorier)');
define('_VALIDATINGSUBCAT','Kontrollerar underkategori');
define('_OK','Ok!');
define('_CHECK','Kontrollera');
define('_IGNORE','Ignorera');
define('_HITS','Träffar');
// index.php
define('_DEFHOMEMODULE','Standardmodule för Hemsidan');
define('_MODULEINHOME','Moduler som är Laddade på Hemsidan:');
define('_CHANGE','Ändra');
define('_WHOSONLINE','Vilka är Online');
define('_NP_ADMIN','Notepad');
define('_NP_LOCKED','The notepad has been locked<br />Only a root administrator (super user) can unlock it');
define('_NP_SAVE','Save Notes');
define('_NP_UNLOCK','Unlock Notepad');
define('_NP_LOCK','Lock Notepad');
// news
define('_STICKY','Sticky Articles');
define('_ARTICLEUP','Article UP');
define('_ARTICLEDOWN','Article DOWN');
define('_UNSTICK','Unstick');
define('_STICK','Klistrad');
define('_AUTOMATEDARTICLES','Programmerade Artiklar');
define('_STORYID','Nyhets ID');
define('_CURRENTPOLL','Nuvarande undersökning');

// admin.php
define('_ADMINISTRATION','Administration');
define('_NOADMINYET','Det finns inget Administratörs Konto ännu, fortsätt med Skapa Super Användare:');
define('_CREATEUSERDATA','Vill du skapa en Vanligt användare med samma information?');
define('_ADMINLOGIN','Administrationsystem Login');
define('_ADMINID','Admin ID');
define('_EMAIL','E-post');
define('_SUBMIT','Skicka');
define('_YOUARELOGGEDOUT','Du har nu loggat ut!');
define('_PASSWDNOMATCH','De nya lösenorden matchar inte varandra. Gå tillbaka och försök igen');
define('_LOGIN_REMEMBERME','Remember me?');
define('_ADMINMENU_LOGOUT','Administration Menu Logout');
define('_PASSWORD_MALFORMED','Please include at least one number, one capital letter and one lowercase letter in your password');

// admins.php
define('_AUTHORSADMIN','Administratörer');
define('_NAME','Namn');
define('_REQUIRED','(krävs)');
define('_MODIFYINFO','Modifiera Info');
define('_DELAUTHOR','Radera Administratör');
define('_ADDAUTHOR','Addera en Ny Administratör');
define('_PERMISSIONS','Rättigheter');
define('_SUPERUSER','Super User');
define('_SUPERWARNING','VARNING: Om Super User är ikryssad kommer administratören få full tillgång till systemet!');
define('_ADDAUTHOR2','Addera Administratör');
define('_RETYPEPASSWD','Skriv Lösenordet igen');
define('_FORCHANGES','(Endast för ändringar)');
define('_COMPLETEFIELDS','Du måste fylla i alla obligatoriska fält');
define('_CREATIONERROR','Det uppstod ett fel vid Skapande av Administratör');
define('_AUTHORDEL','Radera Administratör');
define('_PUBLISHEDSTORIES','Denna Administratör har publicerade artiklar');
define('_SELECTNEWADMIN','Vänligen välj en ny administratör för att behålla dem');
define('_GODNOTDEL','*(GOD kontot kan inte raderas)');
define('_MAINACCOUNT','God Admin*');
define('_USERS','Medlemmar');

// banners.php
define('_BANNERSADMIN','Banneradministration');
define('_DELETEBANNER','Delete Banner');
define('_SURETODELBANNER','Are you sure you want to delete this banner?');
define('_EDITBANNER','Edit Banner');

// blocks.php
define('_BLOCKSADMIN','Administrera Block');
define('_CENTER','Centrera');
define('_CENTERUP','Centrera UPP');
define('_CENTERDOWN','Centrera NED');
define('_BLOCKFILE','(Block Fil)');
define('_BLOCKFILE2','FIL');
define('_BLOCKSYSTEM','SYSTEM');
define('_ADDNEWBLOCK','Lägg till ett Nytt Block');
define('_RSSFILE','RSS/RDF fil adress');
define('_ONLYHEADLINES','(Bara för rubriker)');
define('_REFRESHTIME','Uppdateringsintervall');
define('_CREATEBLOCK','Skapa Block');
define('_EDITBLOCK','Redigera Block');
define('_BLOCK','Block');
define('_SAVEBLOCK','Spara Block');
define('_BLOCKACTIVATION','Blockaktivering');
define('_BLOCKPREVIEW','Detta är en förhandsvisning av Block');
define('_WANT2ACTIVATE','Vill du aktivera detta block?');
define('_ARESUREDELBLOCK','Är du säker på att du vill ta bort Block');
define('_BLOCKUP','Block UPP');
define('_BLOCKDOWN','Block NER');
define('_TITLE','Titel');
define('_POSITION','Position');
define('_WEIGHT','Vikt');
define('_STATUS','Status');
define('_LEFTBLOCK','Vänsterblock');
define('_LEFT','Vänster');
define('_RIGHTBLOCK','Högerblock');
define('_RIGHT','Höger');
define('_TYPE','Typ');
define('_CUSTOM','Custom');
define('_FILENAME','Filnamn');
define('_FILEINCLUDE','(Välj ett custom Block som ska läggas in. Övriga fält ignoreras.)');

// comments.php
define('_REMOVECOMMENTS','Radera Kommentarer');
define('_SURETODELCOMMENTS','Är du säker på att du vill radera den valda kommentaren och alla dess svar?');

// database.php
define('_SAVEDATABASE','Säkerhetskopiera DB');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Nuvarande Status');
define('_ACTIVATEPAGE','Akivera denna Sida?');

// history.php
define('_EPHEMADMIN','Dagens Ord Administration');
define('_ADDEPHEM','Lägg till ett nytt Dagens Ord');
define('_EPHEMDESC','Beskrivning av Dagens Ord');
define('_EPHEMMAINT','Administration av Dagens Ord (Redigera/Radera):');
define('_EPHEMEDIT','Redigera Dagens Ord');
define('_EPHEMDELETE','Delete Entry');

// headlines.php
define('_RSSFAIL','Det uppstod ett problem med RSS filadressen');
define('_RSSTRYAGAIN','Kontrollera adressen och rss-filnamnet, och försök sedan igen.');
define('_RSSCONTENT','(RSS/RDF Innehåll)');
define('_IFRSSWARNING','Om du fyller i adressfältet så kommer innehållet du skriver inte att visas!');
define('_SETUPHEADLINES','(Välj Custom och skriv adressen eller välj en webbplats från listan för att få in deras rubriker)');
define('_HEADLINESADMIN','Rubrikadministration');
define('_ADDHEADLINE','Addera Rubrik');
define('_EDITHEADLINE','Redigera Rubriker');
define('_SURE2DELHEADLINE','VARNING: Är du säker på att du vill radera denna rubrik?');

// messages.php
define('_MESSAGESADMIN','Meddelande Administration');
define('_MESSAGETITLE','Titel');
define('_MESSAGECONTENT','Innehåll');
define('_ALLMESSAGES','Översikt av meddelanden');
define('_EDITMSG','Ändra meddelande');
define('_ADDMSG','Lägg till meddelande');
define('_REMOVEMSG','Är du säker på att du vill radera detta meddelande? ');
define('_CHANGEDATE','Ändra startdatum till idag?');
define('_IFYOUACTIVE','(Om du aktiverar detta meddelande nu, kommer startdatum att sättas till idag)');

// modules.php
define('_MODULESADMIN','Administrera moduler');
define('_HOMECONFIG','Inställningar för förstasidan');
define('_MODULESADDONS','Moduler och Xtra');
define('_INHOME','I Hem');
define('_MODULEHOMENOTE','<b>-= VARNING =-</b><br>Modul som visas med fet text är Moduler på din Hemsida.<br>Du kan inte Deaktivera denna Moudl eftersom det är standardmodulen!<br>Om du raderar Modulens bibliotek så visa ett felmeddelande.<br>Modulens ersätta också med en <i>Home</i> länk i Modul Blocket.');
define('_PUTINHOME','Lägg i Hem');
define('_SURETOCHANGEMOD','Är du säker på att du vill ändra din Hemsida från');
define('_NOTINMENU','[ <big><strong>&middot;</strong></big> ] betyder att Modulen inte kommer att visas med namn och länk i Modul Blocket/Menyn');
define('_SHOWINMENU','Visas i Modul Block?');
define('_CUSTOMTITLE','Egen Rubrik');
define('_MODULEEDIT','Ändra Moduler');
define('_VERSION','Version');
define('_UPGRADE','Upgrade to %s');
define('_DBSIZE','DB size');
Thru CVS you can recieve the latest builds of files very easily.<br />
<b>BUT</b> the latest version of a file could have bugs since it is not an official release.<br />
If you are familiar with PHP you can do an update of the files by clicking the link below.<br />
Don\'t forget to make an backup first !!!');
define('_CVS_UPDATE','Update CVS files');

// newsletter.php
define('_FROM','Från');
define('_STAFF','Staff');
define('_NL_RECIPS','Recipients');
define('_SUBSCRIBEDUSERS','Prenumeranter på Nyhetsbrev');
define('_NL_ALLUSERS','All Members');
define('_NL_ADMINS','Administrators');
define('_NL_REGARDS','Best Regards');
define('_DISCARD','Discard');
define('_REVIEWTEXT','Var god kontrollera innehållet i din text:');
define('_MANYUSERSNOTE','VARNING! Deta är många mottagare av detta Nyhetsbrev. Var God vänta tills att scriptet har körts klart. Det kan ta några minuter!');
define('_NL_NOUSERS','The group selected to receive this newsletter has zero users<br />Please go back and select a different group');
define('_NUSERWILLRECEIVE','Användare kommer att få detta Nyhetsbrev.');
define('_NEWSLETTERSENT','Nyhetsbrevet har skickats.');

// referers.php
define('_WHOLINKS','Vem länkar till vår webbplats?');
define('_DELETEREFERERS','Radera Länkare');

// settings.php
define('_SITECONFIG','Webbplats Konfiguration');
define('_GENSITEINFO','Generell Webbplatsinformation');
define('_SITENAME','Webbplatsens Namn');
define('_SITEURL','Webbplatsens Adress');
define('_SITELOGO','Webbplatsens Logo');
define('_SITESLOGAN','Webbplatsens Slogan');
define('_STARTDATE','Webbplatsens Startdatum');
define('_ADMINEMAIL','E-postadress till Administratör');
define('_ITEMSTOP','Antalet Toppsaker på Topplistesidan');
define('_STORIESHOME','Antal artiklar som visas på förstasidan');
define('_OLDSTORIES','Antal artiklar som visas i äldre artiklarboxen');
define('_ALLOWANONPOST','Tillåt Anonyma gäster att posta?');
define('_DEFAULTTHEME','Standardtema för din webbplats');
define('_SHOWSEC','Show security code');
// maintenance
define('_MAINTENANCE','Maintenance');
define('_MESSAGE','Message');
// multilingual
define('_MULTILINGUALOPT','Flerspråkig möjlighet');
define('_SELLANGUAGE','Välj språk för din webbplats');
define('_LOCALEFORMAT','Lokalt Tidsformat');
define('_ACTMULTILINGUAL','Aktivera flerspråkigt?');
define('_ACTUSEFLAGS','Visa flaggor istället?');
// banners
define('_BANNERSOPT','Bannerinställningar');
define('_ACTBANNERS','Aktivera Banners på din webbplats?');
// footer
define('_FOOTERMSG','Sidfot');
define('_FOOTERLINE1','Sidfot rad 1');
define('_FOOTERLINE2','Sidfot rad 2');
define('_FOOTERLINE3','Sidfot rad 3');
// backend
define('_BACKENDCONF','Backend Konfiguration');
define('_BACKENDTITLE','Backend Titel');
define('_BACKENDLANG','Backend Språk');
// mail stories
define('_MAIL2ADMIN','E-posta Nya Artiklar till Admin');
define('_NOTIFYSUBMISSION','Skicka e-post om nya postningar?');
define('_EMAIL2SENDMSG','E-postadress att skicka meddelandet till');
define('_EMAILSUBJECT','Ämne för E-postmeddelandet');
define('_EMAILMSG','E-postmeddelandet');
define('_EMAILFROM','E-postkonto (Från)');
// comments
define('_COMMENTSOPT','Kommentarsinställningar');
define('_COMMENTSLIMIT','Begränsning av kommentarsstorlek');
define('_COMMENTSMOD','Kommentarsmoderering');
define('_MODADMIN','Moderering av Admin');
define('_MODUSERS','Moderering av Medlemmar');
define('_NOMOD','Ingen Moderering');
// adminmenu
define('_GRAPHICOPT','Grafikinställningar');
define('_BOTH','Båda');
define('_GRAPHICAL','Grafiskt');
define('_SIDEBLOCK','Sidblock');
// miscellaneous
define('_MISCOPT','Övriga Inställningar');
define('_ACTIVATEHTTPREF','Aktivera HTTP Referers?');
define('_MAXREF','Hur många länkare vill du ha som max?');
define('_COMMENTSPOLLS','Aktivera kommentarer i Undersökningar?');
define('_COMMENTSARTICLES','Slå på kommentarer för artiklar?');
// censor
define('_CENSOROPTIONS','Censur Inställningar');
define('_CENSORMODE','Censur Mode');
define('_NOFILTERING','Ingen filtrering');
define('_EXACTMATCH','Exakt matchning');
define('_MATCHBEG','Matcha ord i början');
define('_MATCHANY','Matcha var som helst i texten');
define('_CENSORREPLACE','Ersätt censurerade ord med:');
// email
define('_EMAILOPTIONS','Options for email from Contact Module and Newsletter');
define('_ALLOW_HTML_EMAIL','Allow html email');
define('_USE_SMTP','Use SMTP for email instead of php');
define('_SMTP_HOST','Address of smtp host(smtp.host.tld)');
define('_USE_SMTP_AUTH','Server requires SMTP authorization');
define('_SMTP_USER_NAME','SMTP User Name');
define('_SMTP_USER_PASS','SMTP User Password');

// cpg_adminmenu.php
define('_ADMINMENU','Administrationsmeny');
define('_ADMINLOGOUT','Logga ut / Sluta');
define('_AMENU1','General');
define('_AMENU2','Medlemmer');
define('_AMENU3','Meddelanden');
define('_AMENU4','Forum');
define('_AMENU5','Information');
define('_AMENU6','Länkning');
define('_AMENU9','Moduler');
// menu items
define('_PREFERENCES','Inställningar');
define('_DATABASE','DataBas');
define('_BLOCKS','Block');
define('_MODULES','Moduler');
define('_EDITADMINS','Redigera Administratörer');
define('_MESSAGES','Meddelanden');
define('_BANNERS','Banners');
define('_HTTPREFERERS','Vilkar länkar till oss');
define('_EDITUSERS','Redigera Medlemmar');
define('_USERSCONFIG','Användarinställningar');
define('_NEWSLETTER','Nyhetsbrev');
define('_SUBMISSIONS','Postningar');
define('_ADDSTORY','Lägg till Artikel');
define('_TOPICS','Ämnen');
define('_ADMPOLLS','Omröstningar');
define('_EPHEMERIDS','Dagens Ord');
define('_REVIEWS','Recensioner');
define('_ENCYCLOPEDIA','Uppslagsbok');
define('_SURVEYS','Undersökningar');
define('_SECTIONS','Sektioner');
define('_ARTICLES','Artiklarna');
define('_FAQ','FAQ');
define('_DOWNLOAD','Nedladdning');
define('_WEBLINKS','Webblänkar');
define('_CONTENT','Innehåll');
define('_REPORTABUG','Report a Bug');
//coppermine admin
define('_W_INSTALL','Which Installation?');
define('_W_PAGE','Which Page?');

//errors for cpg_error
define('_ERROR','ERROR');
define('_SEC_ERROR','Security Error');
define('_ERROR_NOT_SET','%s was not set');
define('_ERROR_NO_POST','Posting from another host is disallowed...');
define('_ERROR_NO_GET','GET requests are not allowed for this function...');
define('_ERROR_BAD_CHAR','The characters that you tried to include in your %s request are forbidden...');
define('_ERROR_BAD_LINK','You tried to access this page through a bad link...');
define('_ERROR_NONE_TO_DISPLAY','There are no %s to display');
define('_ERROR_DELETE_CONF','Are you sure that you want to delete %s?');
define('_ERROR_NO_EXIST','%s does not exist');
define('_TASK_COMPLETED','Operation complete!');
