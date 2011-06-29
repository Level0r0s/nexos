<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/swedish/main.php,v $
  $Revision: 9.35 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:56 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','sv');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %d %B %Y (%H:%M:%S)');
define('_DATESTRING2','%A, %B %d');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Nästa sida');
define('_PREVIOUSPAGE','Föregående sida');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Sök');
define('_LOGIN','Logga in');
define('_WRITES','skriver');
define('_POSTEDON','Skriven');
define('_NICKNAME','Alias');
define('_PASSWORD','Lösenord');
define('_WELCOMETO','Välkommen till');
define('_EDIT','Redigera');
define('_DELETE','Radera');
define('_POSTEDBY','Postad av');
define('_READS','läsningar');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Gå Tillbaka</a>' : '<a href="javascript:history.go(-1)">Gå Tillbaka</a>').' ]');
define('_COMMENTS','kommentarer');
define('_PASTARTICLES','Föregående artiklar');
define('_OLDERARTICLES','Äldre artiklar');
define('_BY','av');
define('_ON',' ');
define('_LOGOUT','Logga ut');
define('_WAITINGCONT','Väntande innehåll');
define('_WREVIEWS','Recensioner');
define('_WLINKS','Länkar');
define('_ONEDAY','På en dag som denna...');
define('_ASREGISTERED','Har du inget medlemskap än? Du kan <a href="'.getlink('Your_Account&amp;file=register').'">bli medlem</a>. Som registrerad medlem har du lite fördelar som en temaväljare, kommentarsinställningar och möjligheten att skriva kommentarer under ditt eget namn.');
define('_MENUFOR','Meny för');
define('_NOBIGSTORY','Det finns inget Het Nyhet för Dagen, ännu.');
define('_BIGSTORY','Dagens mest lästa nyhet är:');
define('_SURVEY','Undersökning');
define('_POLLS','Undersökningar');
define('_PCOMMENTS','Kommentarer:');
define('_RESULTS','Resultat');
define('_HREADMORE','Läs mer...');
define('_CURRENTLY','Det finns för närvarande,');
define('_GUESTS','gäst(er) och');
define('_MEMBERS','medlem(mar) som är online.');
define('_YOUARELOGGED','Du är inloggad som');
define('_YOUHAVE','Du har');
define('_PRIVATEMSG','privata meddelanden.');
define('_YOUAREANON','Du är en anonym besökare. Du kan registrera dig gratis genom att fylla i detta <a href="'.getlink('Your_Account&amp;file=register').'">formulär</a>');
define('_NOTE','Notera:');
define('_ADMIN','Admin:');
define('_WERECEIVED','Vi har haft');
define('_PAGESVIEWS','Sidvisningar sedan');
define('_TOPIC','Ämne det ska postas under');
define('_UDOWNLOADS','Nedladdningar');
define('_VOTE','Rösta');
define('_VOTES','Röster');
define('_MVIEWADMIN','Visa för: Endast Administratörer');
define('_MVIEWUSERS','Visa för: Endast Medlemmar');
define('_MVIEWANON','Visa för Endast Anonyma besökare');
define('_MVIEWALL','Visa för: Alla Besökare');
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
define('_MODULEUSERS','Denna avdelning är bara öppen för <i>Registerade användare</i><br /><br />Du kan Registrera dig helt gratis genom att klicka <a href="'.getlink('Your_Account&amp;file=register').'\">här</a>, efter det att du registrerat dig och fått dina uppgifter<br />så kommer du åt denna avdelning. Tack!.<br /><br />');
define('_MODULEUSERS2','Du kan registrera dig gratis genom att följa <a href="'.getlink('Your_Account&amp;file=register').'">den här</a> länken, och därigenom få tillgång till den här delev av sidan<br /><br />Tack för din försåtelse.');
define('_MODULESADMINS','Denna avdelning är endast tillgänglig för <i>Administratörer</i><br /><br />');
define('_MODULESGROUPS','grupptillhörighet krävs');
define('_HOME','Hem');
define('_HOMEPROBLEM','Det finns ett problem: Vi har ingen hemsida!');
define('_ADDAHOME','Lägg till en modul i menyn');
define('_HOMEPROBLEMUSER','Vi har ett problem med hemsidan. Var god försök senare!');
define('_MORENEWS','Mer i nyhetssektionen');
define('_ALLCATEGORIES','Alla kategorier');
define('_SPAMGUARDPROTECTED','SpamGuard har hindrat detta meddelnade från att skickas');
define('_M_CHARS','Max: %s tecken');

define('_SYS_MESSAGE','Systemmeddelande');
define('_SYS_MESSAGES','Systemmeddelanden');
define('_SYS_MAINTENANCE','Systemet är för närvarande i underhållsläge.');
define('_SYS_DEMO','Du kör i administrativt demoläge.<br />Du kan inte göra några ändringar i databasen<br /><a href="'.adminlink('logout').'">Logga ut mig!</a>');

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

define('_MONDAY','Måndag');
define('_TUESDAY','Tisdag');
define('_WEDNESDAY','Onsdag');
define('_THURSDAY','Torsdag');
define('_FRIDAY','Fredag');
define('_SATURDAY','Lördag');
define('_SUNDAY','Söndag');

define('_ABR_MONDAY','Mån');
define('_ABR_TUESDAY','Tis');
define('_ABR_WEDNESDAY','Ons');
define('_ABR_THURSDAY','Tors');
define('_ABR_FRIDAY','Fre');
define('_ABR_SATURDAY','Lör');
define('_ABR_SUNDAY','Sön');

define('_BWEL','Välkommen');
define('_BPM','Privata meddelanden');
define('_BUNREAD','Olästa');
define('_BREAD','Lästa');
define('_BMEMP','Medlemskap');
define('_BLATEST','Senaste');
define('_BTD','Nya idag');
define('_BYD','Nya igår');
define('_BOVER','Genomsnittligt');
define('_BVISIT','Besökare on-line');
define('_BVIS','Besökare');
define('_BMEM','Medlemmar');
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
define('_ACTIVEBUTNOTSEE','(Aktiv men osynlig länk)');
define('_BOTS','Bots');

define('_UM','Dragonfly Update Service');
define('_UM_F','Kunde inte kontakta uppdateringsservern. Försök igen senare.');
define('_UM_G','Du använder den senaste versionen av Dragonfly');
define('_UM_R','Vänligen <a href="%2$s" target="_blank">uppgradera</a> till Dragonfly %1$s');

define('_TEAM','Team');
define('_LINKAPPROVEDMSG','Gratulerar! Den webb-länk som du registrerade har blivit godkänd. Vänligen länka tillbaka till oss och skicka ett mail med URL:en när du gjort så.');
define('_MODREQLINKS','Mod. Länkar');
define('_BROKENLINKS','Brutna Länkar');
define('_MODREQDOWN','Mod. Nedladdningar');
define('_BROKENDOWN','Brutna Nedladdningar');
define('_PAGEGENERATION','Sidgenerering:');
define('_SECONDS','Sekunder');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','This page generated in %1$s seconds with %2$s DB Queries in %3$s seconds');
define('_YOUHAVEONEMSG','Du har 1 Nytt privat meddelande');
define('_NEWPMSG','Nytt privat meddelande');
define('_CONTRIBUTEDBY','Inskickat av');
define('_CHAT','Chat');
define('_REGISTERED','Registrerade');
define('_CHATGUESTS','Gäster');
define('_USERSTALKINGNOW','Användare som chattar just nu');
define('_ENTERTOCHAT','Enter för att chatta');
define('_CHATROOMS','Tillgängliga rum');
define('_ALLTOPICS','Alla ämnen');
define('_ASSOTOPIC','Associerade ämnen');
define('_HELLO','Hej');
define('_ALL','Alla');
define('_URL','URL');
define('_SUBJECT','Ämne');
define('_PREVIEW','Förhandsgranska');
define('_SEND','Skicka');
define('_ANONYMOUS','Anonym');
define('_BREADCRUMB', 'Avskiljare, visas i sidtiteln mellan orden');
define('_BC_DELIM',isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&gt;&gt;');
define('_RESET','Återställ');
define('_AT','för');
define('_LASTMSGS','Sista %s Forum Meddelande');
define('_LASTPOSTBY','Sista meddelandet %1$s in %2$s på %3$s');
define('_PRINTER','Utskriftsvänlig sida');

define('_CREDITS_TITLE','Credits');
define('_CREDITS_PRODUCT','Produkt');
define('_CREDITS_DESC','Beskrivning');
define('_CREDITS_AUTHORS','Upphovsmän');

define('_PP_TITLE','Integritetspolicy');
define('_PP_MODIFY','Modifiera detta meddelande');

define('_SENDERNAME','Ditt namn');
define('_SENDEREMAIL','Din e-post adress');
define('_RECIPIENTNAME','Din väns namn ');
define('_RECIPIENTEMAIL','Din väns e-post adress');

define('_REASONS_0','Som Är');
define('_REASONS_1','Off Topic');
define('_REASONS_2','Flamebait');
define('_REASONS_3','Troll');
define('_REASONS_4','Upprepad');
define('_REASONS_5','Insiktfull');
define('_REASONS_6','Intressant');
define('_REASONS_7','Informativ');
define('_REASONS_8','Rolig');
define('_REASONS_9','Överskattad');
define('_REASONS_10','Underskattad');

/* My Account Tools Block */
define('_TB_BLOCK','Mitt Konto-verktyg');
define('_TB_TASKS','Uppgifter');
define('_TB_INFO','Information');
define('_TB_PROFILE_INFO','Min publika profil');
define('_TB_EDIT_PROFILE','Min publika information');
define('_TB_EDIT_REG','Mina registreringsdetaljer');
define('_TB_EDIT_PRIVATE','Min privata information');
define('_TB_EDIT_AVATAR','Min ikon');
define('_TB_DELETE','Radera mitt konto');
define('_TB_CONFIG','Inställningar');
define('_TB_EDIT_PREFS','Mina inställningar');
define('_TB_EDIT_HOME','Inställningar för min hemsida');
define('_TB_EDIT_COMM','Inställningar för mina kommentarer');
define('_TB_PERSONAL','Personligt');
define('_TB_PERSONAL_GALLERY','Mitt galleri');
define('_TB_PERSONAL_JOURNAL','Min Blog');
define('_TB_PRIVMSGS','Privata Meddelanden');
define('_TB_PRIVMSGS_INBOX','Inkorg');
define('_TB_PRIVMSGS_OUTBOX','Utkorg');
define('_TB_PRIVMSGS_SENTBOX','Skickat');
define('_TB_PRIVMSGS_SAVEBOX','Sparat');
define('_TB_PRIVMSGS_SEND','Skicka meddelande');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','Användarinformation');
define('_SECURITYCODE','Säkerhetskod');
define('_TYPESECCODE','Skriv säkerhetskod');
define('_MEMBERSOPTIONS','Medlemsinställningar');
define('_READSEND','Läs dina privata meddelande. Skicka till andra.');
define('_INBOX','Inkommande');
define('_NEW','Nya');
define('_ACCOUNTOPTIONS','Ditt Konto. Ändra inställningar och läs dina meddelanden..');
define('_LOGOUTACCT','Logga ut.');
define('_LOGOUTADMINACCT','Logga ut som admin.');
define('_BLOGIN','Ditt konto');
define('_BFLOGIN','Forumprofil');
define('_BHID','Dold');
define('_WHOWHERE','Vem är här inne');
define('_STAFFONL','Ansvariga inloggade');
define('_STAFFNONE','Inga ansvariga inloggade!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Gemenskap');
define('_ContentLANG','Innehåll');
define('_coppermineLANG','Fotogalleri');
define('_CPGlangLANG','Hjälp översätta');
define('_DownloadsLANG','Nedladdningar');
define('_EncyclopediaLANG','Encyklopedi');
define('_ForumsLANG','Forum');
define('_ContactLANG','Kontakta oss');
define('_FAQLANG','FAQ - Hjälp');
define('_BlogsLANG','Blog');
define('_Members_ListLANG','Medlemslista');
define('_NewsLANG','Nyheter');
define('_ReviewsLANG','Recensioner');
define('_SearchLANG','Sök');
define('_StatisticsLANG','Statistik');
define('_Stories_ArchiveLANG','Nyhetsarkiv');
define('_Submit_NewsLANG','Skicka in nyheter');
define('_SurveysLANG','Undersökningar');
define('_TopLANG', 'Topp '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Ämnen');
define('_Private_MessagesLANG','Mina privata meddelanden');
define('_Tell_a_FriendLANG','Berätta för en vän');
define('_Web_LinksLANG','Länkar');
define('_Your_AccountLANG','Mitt konto');
define('_CPG_EventsLANG','Kalender');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Languages!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Groups');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Headlines');

define('_COMMUNICATION','Kommunikation');
define('_FRIENDS','Vänner');
define('_STORE','Affär');
define('_PRODUCTS','Produkter');
define('_DONATE','Donera');
define('_HELP','Hjälp');
define('_GALLERIES','Gallerier');
define('_DOCS','Documentation');
define('_RULES','Regler & föreskrifter');
define('_MENU','Huvudmeny');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','Du <strong>är</strong> prenumerant på<br />vårt nyhetsbrev.');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','Du är <strong>inte</strong> prenumerant på<br />vårt nyhetsbrev.');
define('_NEWSLETTERBLOCKREGISTER','Du måste vara en <br /><strong>registrerad användare</strong><br />för att få nyhetsbrevet');
define('_NEWSLETTERBLOCKSUBSCRIBE','Prenumerera');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Säg upp prenumerationen');
define('_NEWSLETTERBLOCKREGISTERNOW','Registrera nu!');
/* END Newsletter Block */

/* START class phpmailer lang array */
$PHPMAILER_LANG = array();
$PHPMAILER_LANG['provide_address'] = 'Du måste ange minst en mottagares e-postadress.';
$PHPMAILER_LANG['mailer_not_supported'] = ' mailer stöds inte.';
$PHPMAILER_LANG['execute'] = 'Kunde inte köra: ';
$PHPMAILER_LANG['instantiate'] = 'Kunde inte initiera e-postfunktion.';
$PHPMAILER_LANG['authenticate'] = 'SMTP fel: Kunde inte autentisera.';
$PHPMAILER_LANG['from_failed'] = 'Följande avsändaradress är felaktig: ';
$PHPMAILER_LANG['recipients_failed'] = 'SMTP fel: Följande mottagare är felaktig: ';
$PHPMAILER_LANG['data_not_accepted'] = 'SMTP fel: Data accepterades inte.';
$PHPMAILER_LANG['connect_host'] = 'SMTP fel: Kunde inte ansluta till SMTP-server.';
$PHPMAILER_LANG['file_access'] = 'Ingen åtkomst till fil: ';
$PHPMAILER_LANG['file_open'] = 'Fil fel: Kunde inte öppna fil: ';
$PHPMAILER_LANG['encoding'] = 'Okänt kodningsformat: ';
/* END class phpmailer lang array */

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_SAVECHANGES','Spara Ändringar');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Språk');
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
define('_MVADMIN','Endast administratörer');
define('_MVUSERS','Endast medlemmar');
define('_MVANON','Endast anonyma besökare');
define('_MVALL','Alla besökare');
define('_IMAGE','Bild');
define('_GO','Kör!');
define('_OPTION','Valfritt');
define('_CATEGORY','Kategori');
define('_SUBCATEGORY','Underkategori');
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
define('_DESCRIPTION255','Beskrivning (max 255 tecken):');
define('_MODCATEGORY','Modifiera en Kategori');
define('_SUBMITTER','Inskickad av');
define('_VISIT','Besök');
define('_EXTENDEDTEXT','Brödtext');
define('_CHECKCATEGORIES','Kontrollera kategorier');
define('_INCLUDESUBCATEGORIES','(inkludera underkategorier)');
define('_CHECKSUBCATEGORIES','Kontrollera underkategorier');
define('_VALIDATELINKS','Validera Länkar');
define('_FAILED','Fungerade inte!');
define('_BEPATIENT','(ha tålamod tack)');
define('_VALIDATINGCAT','Kontrollerar kategori (och alla underkategorier)');
define('_VALIDATINGSUBCAT','Kontrollerar underkategori');
define('_OK','Ok!');
define('_CHECK','Kontrollera');
define('_IGNORE','Ignorera');
define('_HITS','Träffar');
define('_FILESIZE', 'Filstorlek');
define("_EZTHEREIS","Det finns");
define("_EZSUBCAT","Underkategorier");
define("_EZATTACHEDTOCAT","i denna kategori");
define("_EZBROKENLINKS","Brutna länkar");
define("_DELEZLINKCATWARNING","VARNING: Är du säker på att du vill radera den här kategrin?<br /> Även alla underkategorier och tillhörande länkar kommer att raderas!");

// index.php
define('_DEFHOMEMODULE','Standardmodul för hemsidan');
define('_MODULEINHOME','Moduler som är laddade på hemsidan:');
define('_CHANGE','Ändra');
define('_WHOSONLINE','Vilka är On-line');
define('_NP_ADMIN','Notepad');
define('_NP_LOCKED','Anteckningslocket har låsts.<br />Endast en administratör (super user) kan låsa upp det');
define('_NP_SAVE','Sparade anteckningar');
define('_NP_UNLOCK','Lås upp anteckningsblocket');
define('_NP_LOCK','Lås anteckningsblocket');
// news
define('_STICKY','Klistrade artiklar');
define('_ARTICLEUP','Artikel UPP');
define('_ARTICLEDOWN','Artikel NED');
define('_UNSTICK','Ta bort klister');
define('_STICK','Klistrad');
define('_AUTOMATEDARTICLES','Programmerade Artiklar');
define('_STORYID','Nyhets ID');
define('_CURRENTPOLL','Nuvarande undersökning');

// admin.php
define('_ADMINISTRATION','Administration');
define('_NOADMINYET','Det finns inget Administratörskonto ännu, fortsätt med att Skapa Superanvändare:');
define('_CREATEUSERDATA','Vill du skapa en normal användare med samma information?');
define('_ADMINLOGIN','Administrationsystem Login');
define('_ADMINID','Admin ID');
define('_EMAIL','E-post');
define('_SUBMIT','Skicka');
define('_YOUARELOGGEDOUT','Du har nu loggats ut!');
define('_PASSWDNOMATCH','De nya lösenorden matchar inte varandra. Gå tillbaka och försök igen');
define('_LOGIN_REMEMBERME','Kom ihåg mig?');
define('_ADMINMENU_LOGOUT','Administration Meny Logga ut');
define('_PASSWORD_MALFORMED','Var god inkludera åtminstone en siffra, en versal och en gemen i ditt lösenord');

// admins.php
define('_AUTHORSADMIN','Administratörer');
define('_NAME','Namn');
define('_REQUIRED','(krävs)');
define('_MODIFYINFO','Modifiera info');
define('_DELAUTHOR','Radera administratör');
define('_ADDAUTHOR','Lägg till en ny Administratör');
define('_PERMISSIONS','Rättigheter');
define('_SUPERUSER','Super Användare');
define('_SUPERWARNING','VARNING: Om Super Användaren är ikryssad kommer användarenfå full tillgång till systemet!');
define('_ADDAUTHOR2','Addera administratör');
define('_RETYPEPASSWD','Skriv lösenordet igen');
define('_FORCHANGES','(endast för ändringar)');
define('_COMPLETEFIELDS','Du måste fylla i alla obligatoriska fält');
define('_CREATIONERROR','Det uppstod ett fel vid Skapande av administratör');
define('_AUTHORDEL','Radera administratör');
define('_PUBLISHEDSTORIES','Denna administratör har publicerade artiklar');
define('_SELECTNEWADMIN','Vänligen välj en ny administratör för att behålla dem');
define('_GODNOTDEL','*(Guds kontot kan inte raderas)');
define('_MAINACCOUNT','Gud admin*');
define('_USERS','Medlemmar');

// banners.php
define('_BANNERSADMIN','Banderolladministration');
define('_DELETEBANNER','Radera banderoll');
define('_SURETODELBANNER','Är du säker på att du vill radera den här banderollen?');
define('_EDITBANNER','Redigera banderoll');

// blocks.php
define('_BLOCKSADMIN','Administrera block');
define('_CENTER','Centrera');
define('_CENTERUP','Centrera UPP');
define('_CENTERDOWN','Centrera NED');
define('_BLOCKFILE','(Block fil)');
define('_BLOCKFILE2','FIL');
define('_BLOCKSYSTEM','SYSTEM');
define('_ADDNEWBLOCK','Lägg till ett ny block');
define('_RSSFILE','RSS/RDF filadress');
define('_ONLYHEADLINES','(Bara för rubriker)');
define('_REFRESHTIME','Uppdateringsintervall');
define('_CREATEBLOCK','Skapa block');
define('_EDITBLOCK','Redigera block');
define('_BLOCK','Block');
define('_SAVEBLOCK','Spara block');
define('_BLOCKACTIVATION','Blockaktivering');
define('_BLOCKPREVIEW','Detta är en förhandsvisning av block');
define('_WANT2ACTIVATE','Vill du aktivera detta block?');
define('_ARESUREDELBLOCK','Är du säker på att du vill ta bort block');
define('_BLOCKUP','Block UPP');
define('_BLOCKDOWN','Block NER');
define('_BLOCKTOP','Flytta blocket till toppen');
define('_BLOCKBOTTOM','Flytta blocket till botten');
define('_TITLE','Titel');
define('_POSITION','Position');
define('_WEIGHT','Vikt');
define('_STATUS','Status');
define('_LEFTBLOCK','Vänsterblock');
define('_LEFT','Vänster');
define('_RIGHTBLOCK','Högerblock');
define('_RIGHT','Höger');
define('_TYPE','Typ');
define('_CUSTOM','Egendefinierat');
define('_FILENAME','Filnamn');
define('_FILEINCLUDE','(Välj ett egendefinierat block som ska läggas in. Övriga fält ignoreras.)');

// comments.php
define('_REMOVECOMMENTS','Radera kommentarer');
define('_SURETODELCOMMENTS','Är du säker på att du vill radera den valda kommentaren och alla dess svar?');

// database.php
define('_SAVEDATABASE','Säkerhetskopiera databas');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Nuvarande status');
define('_ACTIVATEPAGE','Akivera denna sida?');

// history.php
define('_EPHEMADMIN','Dagens ord administration');
define('_ADDEPHEM','Lägg till ett nytt Dagens ord');
define('_EPHEMDESC','Beskrivning av Dagens Ord');
define('_EPHEMMAINT','Administration av Dagens Ord (Redigera/Radera):');
define('_EPHEMEDIT','Redigera Dagens Ord');
define('_EPHEMDELETE','Radera inlägg');

// headlines.php
define('_RSSFAIL','Det uppstod ett problem med RSS filadressen');
define('_RSSTRYAGAIN','Kontrollera adressen och rss-filnamnet, och försök sedan igen.');
define('_RSSCONTENT','(RSS/RDF Innehåll)');
define('_IFRSSWARNING','Om du fyller i adressfältet så kommer innehållet du skriver inte att visas!');
define('_SETUPHEADLINES','(Välj egendefinierat och skriv adressen eller välj en webbplats från listan för att få in deras rubriker)');
define('_HEADLINESADMIN','Rubrikadministration');
define('_ADDHEADLINE','Lägg till rubrik');
define('_EDITHEADLINE','Redigera rubriker');
define('_SURE2DELHEADLINE','VARNING: Är du säker på att du vill radera denna rubrik?');

// messages.php
define('_MESSAGESADMIN','Meddelande administration');
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
define('_MODULESADDONS','Moduler och Extra');
define('_INHOME','I Hem');
define('_MODULEHOMENOTE','<b>-= VARNING =-</b><br />Modul som visas med fet text är den modul som visas på din hemsida.<br />Du kan inte deaktivera denna modul eftersom det är standardmodulen!<br />Om du raderar modulens bibliotek så visa ett felmeddelande.<br />Modulen ersätts också med en <i>Hem</i> länk i modul blocket.');
define('_PUTINHOME','Lägg i Hem');
define('_SURETOCHANGEMOD','Är du säker på att du vill ändra din hemsida från');
define('_NOTINMENU','[ <big><strong>&middot;</strong></big> ] betyder att modulen inte kommer att visas med namn och länk i modul blocket/menyn');
define('_SHOWINMENU','Visa i modul block?');
define('_CUSTOMTITLE','Egen rubrik');
define('_MODULEEDIT','Ändra moduler');
define('_VERSION','Version');
define('_UPGRADE','Uppgradera till %s');
define('_DBSIZE','DB storlek');
define('_CVS_EXPLAIN','Genom CVS kan du komma åt de senaste versionerna av filerna på ett smidigt sätt.<br /><b>MEN</b> den senaste verionen av filerna kan innehålla fel eftersom de inte är en officiell version.<br />Om du är bekant med PHP kan du uppdatera filerna genom att klicka på länken nedan.<br />Glöm inte göra en säkerhetskopia först !!!');
define('_CVS_UPDATE','Uppdatera från CVS');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','Från');
define('_STAFF','Personalen');
define('_NL_RECIPS','Mottagare');
define('_SUBSCRIBEDUSERS','Prenumeranter på Nyhetsbrev');
define('_NL_ALLUSERS','Alla medlemmar');
define('_NL_ADMINS','Administratörer');
define('_NL_REGARDS','Med vänliga hälningar');
define('_DISCARD','Börja om med nytt brev');
define('_REVIEWTEXT','Var god kontrollera innehållet i din text:');
define('_MANYUSERSNOTE','VARNING! Deta är många mottagare av detta Nyhetsbrev. Var God vänta tills att scriptet har körts klart. Det kan ta några minuter!');
define('_NL_NOUSERS', 'Den valda mottagargruppen har inte några användare.<br />Gå tillbaka och välj en annan grupp.');
define('_NUSERWILLRECEIVE','Användare kommer att få detta Nyhetsbrev.');
define('_NLUNSUBSCRIBE',"= Du har fått detta medelande för att du har valt att ta emot nyhetsbrev från våran sida och kan välja att inte ta emot dem mer genom att gå <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">här</a>\n\n och om du vill ha mer hjälp med detta så kan du skicka ett mail till våran <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">AdministratÖr</a>");
define('_NEWSLETTERSENT','Nyhetsbrevet har skickats.');

// referers.php
define('_WHOLINKS','Vem länkar till vår webbplats?');
define('_DELETEREFERERS','Radera Länkare');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Footer');
define('_DEBUG', 'Debug');
define('_SITECONFIG','Webbplats Konfiguration');
define('_GENSITEINFO','Generell Webbplatsinformation');
define('_SITENAME','Webbplatsens namn');
define('_SITEURL','Webbplatsens adress');
define('_SITELOGO','Webbplatsens logotyp');
define('_SITESLOGAN','Webbplatsens slogan');
define('_STARTDATE','Webbplatsens öppningsdatum');
define('_ADMINEMAIL','E-postadress till administratör');
define('_ITEMSTOP','Antalet saker att gradera i Topp-modulen');
define('_STORIESHOME','Antal artiklar som visas på förstasidan');
define('_OLDSTORIES','Antal artiklar som visas i äldre artiklar-blocket');
define('_ALLOWANONPOST','Tillåt anonyma gäster att posta?');
define('_DEFAULTTHEME','Standardtema för din webbplats');
define('_SHOWSEC','Visa säkerhetskod');
define('_TOOLTIPS','Visa tooltips för angivna fält');
define('_UM_TOGGLE','Aktivera uppdaterings bevakaren');
define('_UM_EXPLAIN','This will retrieve two pieces of information from our website, dragonflycms.org: the current build of Dragonfly, and if there are any important messages that pertain to your version of Dragonfly. The only data sent to our site is your Dragonfly version number. We do <strong>not</strong> log these requests to our server.');
// maintenance
define('_MAINTENANCE','Underhåll');
define('_MESSAGE','Meddelande');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','Flerspråkig möjlighet');
define('_SELLANGUAGE','Välj språk för din webbplats');
define('_LOCALEFORMAT','Lokalt tidsformat');
define('_ACTMULTILINGUAL','Aktivera flerspråksstöd?');
define('_ACTUSEFLAGS','Visa flaggor istället?');
// banners
define('_BANNERSOPT','Banderrollinställningar');
define('_ACTBANNERS','Aktivera banderoller på din webbplats?');
// footer
define('_FOOTERMSG','Sidfot');
define('_FOOTERLINE1','Sidfot rad 1');
define('_FOOTERLINE2','Sidfot rad 2');
define('_FOOTERLINE3','Sidfot rad 3');
// backend
define('_BACKENDCONF','Backend konfiguration');
define('_BACKENDTITLE','Backend titel');
define('_BACKENDLANG','Backend språk');
// mail stories
define('_MAIL2ADMIN','E-posta nya artiklar till administratören');
define('_NOTIFYSUBMISSION','Skicka e-post om nya inlägg?');
define('_EMAIL2SENDMSG','E-postadress att skicka meddelandet till');
define('_EMAILSUBJECT','Ämne för e-postmeddelandet');
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
define('_COMMENTSPOLLS','Aktivera kommentarer i undersökningar?');
define('_COMMENTSARTICLES','Aktivera på kommentarer för artiklar?');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','Censur inställningar');
define('_CENSORMODE','Censurläge');
define('_NOFILTERING','Ingen filtrering');
define('_EXACTMATCH','Exakt matchning');
define('_MATCHBEG','Matcha ord i början');
define('_MATCHANY','Matcha var som helst i texten');
define('_CENSORREPLACE','Ersätt censurerade ord med:');
// email
define('_EMAILOPTIONS','Inställningar för e-post from kontakt- och nyhetsbrevmodulen');
define('_ALLOW_HTML_EMAIL','Tillåt HTML i e-posten');
define('_USE_SMTP','Använd SMTP för att skicka mail istället för PHP');
define('_SMTP_HOST','Adressen för SMTP servern(smtp.example.com)');
define('_USE_SMTP_AUTH','SMTP servern kräver autentisiering');
define('_SMTP_USER_NAME','SMTP användarnamn');
define('_SMTP_USER_PASS','SMTP lösenord');

// cpg_adminmenu.php
define('_ADMINMENU','Administrationsmeny');
define('_ADMINLOGOUT','Logga ut / Sluta');
define('_AMENU0','System');
define('_AMENU1','Generellt');
define('_AMENU2','Medlemmar');
define('_AMENU3','Meddelanden');
define('_AMENU4','Forum');
define('_AMENU5','Information');
define('_AMENU6','Länkning');
define('_AMENU7','Handel');
define('_AMENU8','Multimedia');
define('_AMENU9','Moduler');
define('_BMENU1','Hjälp');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','Inställningar');
define('_DATABASE','Databas');
define('_BLOCKS','Block');
define('_MODULES','Moduler');
define('_EDITADMINS','Redigera administratörer');
define('_MESSAGES','Meddelanden');
define('_BANNERS','Banderoller');
define('_HTTPREFERERS','Vilka länkar till oss');
define('_EDITUSERS','Redigera medlemmar');
define('_USERSCONFIG','Användarinställningar');
define('_NEWSLETTER','Nyhetsbrev');
define('_SUBMISSIONS','Inskickade texter');
define('_ADDSTORY','Lägg till artikel');
define('_TOPICS','Ämnen');
define('_ADMPOLLS','Omröstningar');
define('_EPHEMERIDS','Dagens Ord');
define('_REVIEWS','Recensioner');
define('_ENCYCLOPEDIA','Uppslagsbok');
define('_SURVEYS','Undersökningar');
define('_SECTIONS','Sektioner');
define('_ARTICLES','Artiklar');
define('_FAQ','FAQ');
define('_DOWNLOAD','Nedladdning');
define('_WEBLINKS','Webblänkar');
define('_CONTENT','Innehåll');
define('_SYSINFO','System Info');
define('_REPORTABUG','Rapportera en bug');
//coppermine admin
define('_W_INSTALL','Vilken installation?');
define('_W_PAGE','Vilken sida?');
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
define('_ERROR','FEL');
define('_SEC_ERROR','Säkerhetsfel');
define('_ERROR_NOT_SET','%s var inte satt');
define('_ERROR_NO_POST','Postning från en annan server är inte tillåtet...');
define('_ERROR_NO_GET','GET anrop är inte tillåtet för den här funktionen...');
define('_ERROR_BAD_CHAR','De tecken du försökte inkludera i din %s förfrågan är ej tillåtna...');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','Du försökte komma åt denna sidan via en ej godkänd länk...');
define('_ERROR_NONE_TO_DISPLAY','Det finns inga %s att visa');
define('_ERROR_DELETE_CONF','Är du säker på att du vill radera %s?');
define('_ERROR_NO_EXIST','%s existerar inte');
define('_ERROR_ALREADYEXIST','%s existerar redan');
define('_TASK_COMPLETED','Operation klar!');
define('_CONFIRM','Confirm');
define('_FOOTER_COPYRIGHTS', 'Interactive software released under <a href="http://dragonflycms.org/GNUGPL.html" target="_blank" title="GNU Public License Agreement">GNU GPL</a>,	<a href="'.getlink('credits').'">Code Credits</a>,	<a href="'.getlink('privacy_policy').'">Privacy Policy</a>');

# time
$LNG = array('_time' => array(
'l' => array('Söndag', 'Måndag', 'Tisdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lördag'),
'D' => array('Sön', 'Mån', 'Tis', 'Ons', 'Tor', 'Fre', 'Lör'),
'F' => array(1=>'Januari', 'Februari', 'Mars', 'April', 'Maj', 'Juni', 'Juli', 'Augusti', 'September', 'October', 'November', 'December'),
'M' => array(1=>'Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
));
$LNG['_time']['l'][7] =& $LNG['_time']['l'][0];
$LNG['_time']['D'][7] =& $LNG['_time']['D'][0];
