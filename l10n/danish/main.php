<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/danish/main.php,v $
  $Revision: 9.43 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:47 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','da');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %d %B %Y (%H:%M:%S)');
define('_DATESTRING2','%A, %d %B');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Næste side');
define('_PREVIOUSPAGE','Forrige side');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Søg');
define('_LOGIN','Log ind');
define('_WRITES','skriver');
define('_POSTEDON','Skrevet');
define('_NICKNAME','Brugernavn');
define('_PASSWORD','Kodeord');
define('_WELCOMETO','Velkommen til');
define('_EDIT','Rediger');
define('_DELETE','Slet');
define('_POSTEDBY','Skrevet af');
define('_READS','læst');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Tilbage</a>' : '<a href="javascript:history.go(-1)">Tilbage</a>').' ]');
define('_COMMENTS','kommentar');
define('_PASTARTICLES','Tidligere artikler');
define('_OLDERARTICLES','Ældre artikler');
define('_BY','af');
define('_ON',' ');
define('_LOGOUT','Log ud');
define('_WAITINGCONT','Ventende indhold');
define('_WREVIEWS','Anmeldelser');
define('_WLINKS','Links');
define('_ONEDAY','På en dag som denne...');
define('_ASREGISTERED','Er du ikke medlem endnu? Det er enkelt at <a href="'.getlink('Your_Account&amp;file=register').'">blive medlem</a>. Som registreret medlem har du flere fordele, og det er gratis at registrere sig!');
define('_MENUFOR','Menu for');
define('_NOBIGSTORY','Der findes ingen nyheder som er lagt ud i dag!');
define('_BIGSTORY','Dagens mest læste nyhed er:');
define('_SURVEY','Undersøgelse');
define('_POLLS','Afstemninger');
define('_PCOMMENTS','Kommentarer:');
define('_RESULTS','Resultat');
define('_HREADMORE','læs mere...');
define('_CURRENTLY','Der er for tiden,');
define('_GUESTS','gæst(er) og');
define('_MEMBERS','medlem(er) online.');
define('_YOUARELOGGED','Du er logget ind som');
define('_YOUHAVE','Du har');
define('_PRIVATEMSG','privat(e) besked(er).');
define('_YOUAREANON','Du er en anonym bruger. Du kan registrere dig gratis ved at udfylde <a href="'.getlink('Your_Account&amp;file=register').'">dette skema</a>');
define('_NOTE','Bemærk:');
define('_ADMIN','Administrator:');
define('_WERECEIVED','Vi har haft');
define('_PAGESVIEWS','sidevisninger siden');
define('_TOPIC','Emne');
define('_UDOWNLOADS','Downloads');
define('_VOTE','Stem');
define('_VOTES','Stemmer');
define('_MVIEWADMIN','Se: Kun administratorer');
define('_MVIEWUSERS','Se: Kun brugere');
define('_MVIEWANON','Se: Kun gæster');
define('_MVIEWALL','Se: Alle gæster');
define('_EXPIRELESSHOUR','Udløber inden en time');
define('_EXPIREIN','Udløber om');
define('_UNLIMITED','Ubegrænset');
define('_HOURS','Timer');
define('_RSSPROBLEM','Der er et problem med RSS feed fra dette websted');
define('_SELECTLANGUAGE','Vælg sprog');
define('_SELECTGUILANG','Vælg sprog:');
define('_NONE','Ingen');
define('_BLOCKPROBLEM','<center>Der er for tiden et problem med denne blok.</center>');
define('_BLOCKPROBLEM2','<center>Der er for tiden intet indhold til denne blok.</center>');
define('_MODULENOTACTIVE','Dette module er ikke aktivt!');
define('_NOACTIVEMODULES','Inaktive moduler');
define('_MODULENOEXIST','Desværre, men den ønskede fil, %s, ser ud til ikke at eksister');
define('_FORADMINTESTS','(for Admin-test)');
define('_BBFORUMS','Forum');
define('_ACCESSDENIED','Adgang nægtet');
define('_RESTRICTEDAREA','Du prøver at få adgang til et forbudt område.');
define('_MODULEUSERS','Denne del af vores site er kun for <i>tilmeldte brugere</i>.<br><br>');
define('_MODULEUSERS2','Du kan registrere dig gratis ved at klikke <a href="'.getlink('Your_Account&amp;file=register').'">her</a>, så vil du få<br>adgang til denne del uden Restriktioner. Tak.<br><br>');
define('_MODULESADMINS','Beklager, men denne del af vores sider er kun for <i>administratorer</i><br><br>');
define('_MODULESGROUPS','gruppe adgang kræves');
define('_HOME','Hjem');
define('_HOMEPROBLEM','Der er et stort problem: Vi har ingen forside!!');
define('_ADDAHOME','Tilføj en modul på forsiden');
define('_HOMEPROBLEMUSER','Vi har et problem med siden lige nu. Prøv venligst igen senere.');
define('_MORENEWS','Mere i nyheds sektionen');
define('_ALLCATEGORIES','Alle kategorier');
define('_SPAMGUARDPROTECTED','Du har sendt det maksimum nummer af e-mails som du er tildelt hver dag<br />Prøv igen i morgen');
define('_M_CHARS','Maximum: %s bogstaver');

define('_SYS_MESSAGE','System Besked');
define('_SYS_MESSAGES','System Beskeder');
define('_SYS_MAINTENANCE','Du kører i vedligeholdelse mode');
define('_SYS_DEMO','Du kører i administration demo mode<br />Du kan ikke ændre noget i database<br /><a href="'.adminlink('logout').'">Log mig ud!</a>');

define('_DATE','Dato');
define('_HOUR','Time');
define('_UMONTH','Måned');
define('_YEAR','År');
define('_JANUARY','Januar');
define('_FEBRUARY','Februar');
define('_MARCH','Marts');
define('_APRIL','April');
define('_MAY','Maj');
define('_JUNE','Juni');
define('_JULY','Juli');
define('_AUGUST','August');
define('_SEPTEMBER','September');
define('_OCTOBER','Oktober');
define('_NOVEMBER','November');
define('_DECEMBER','December');

define('_MONDAY','Mandag');
define('_TUESDAY','Tirsdag');
define('_WEDNESDAY','Onsdag');
define('_THURSDAY','Torsdag');
define('_FRIDAY','Fredag');
define('_SATURDAY','Lørdag');
define('_SUNDAY','Søndag');
//three letter abbrev.
define('_ABR_MONDAY','Man');
define('_ABR_TUESDAY','Tir');
define('_ABR_WEDNESDAY','Ons');
define('_ABR_THURSDAY','Tor');
define('_ABR_FRIDAY','Fre');
define('_ABR_SATURDAY','Lør');
define('_ABR_SUNDAY','Søn');

define('_BWEL','Velkommen');
define('_BPM','Private beskeder');
define('_BUNREAD','Ulæst');
define('_BREAD','Læst');
define('_BMEMP','Medlemskab');
define('_BLATEST','Sidste');
define('_BTD','Ny i dag');
define('_BYD','Ny i går');
define('_BOVER','Total');
define('_BVISIT','Personer online');
define('_BVIS','Gæster');
define('_BMEM','Brugere');
define('_BTT','Totalt');
define('_BON','Online nu');
define('_BREG','Registrer');
define('_BROADCAST','Udsend en offentlig besked');
define('_BROADCASTFROM','Offentlig besked fra');
define('_TURNOFFMSG','Slå offentlig besked fra');
define('_JOURNAL','Dagbog');
define('_READMYJOURNAL','Læs min dagbog');
define('_ADD','Tilføj');
define('_YES','Ja');
define('_NO','Nej');
define('_INVISIBLEMODULES','Usynlige moduler');
define('_ACTIVEBUTNOTSEE','(Aktiv men usynlig link)');
define('_BOTS','Søgemaskiner');

define('_UM','Dragonfly ajourføre Overvågning');
define('_UM_F','Forbindelsen til opdaterings service mislykkes. Prøv igen senere.');
define('_UM_G','Du bruger den senest version af Dragonfly');
define('_UM_R','Vær så venlig at <a href="%2$s" target="_blank">Opgrader</a> til Dragonfly %1$s');

define('_TEAM','Team');
define('_LINKAPPROVEDMSG','Tillykke! Linket du har givet os er blevet godkendt, link venligst tilbage til os.');
define('_MODREQLINKS','Mod. links');
define('_BROKENLINKS','Ødelagte links');
define('_MODREQDOWN','Mod. downloads');
define('_BROKENDOWN','Ødelagte downloads');
define('_PAGEGENERATION','Sidegenerering:');
define('_SECONDS','Sekunder');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Side Generering tog %1$s sekunder og %2$s Database Opkald på %3$s sekunder');
define('_YOUHAVEONEMSG','Du har 1 ny privat besked');
define('_NEWPMSG','Nye private beskeder');
define('_CONTRIBUTEDBY','indsendt af');
define('_CHAT','Chat');
define('_REGISTERED','Registret');
define('_CHATGUESTS','Gæster');
define('_USERSTALKINGNOW','Brugere som snakker nu');
define('_ENTERTOCHAT','Kom ind for at chatte');
define('_CHATROOMS','Tilgængelige rum');
define('_ALLTOPICS','Alle emner');
define('_ASSOTOPIC','Tilknyttede emner');
define('_HELLO','Hallo');
define('_ALL','Alle');
define('_URL','URL');
define('_SUBJECT','Emne');
define('_PREVIEW','Gennemse');
define('_SEND','Send');
define('_ANONYMOUS','Gæst');
define('_BREADCRUMB', 'Symbol ved Splitning af overskrift');
define('_BC_DELIM',''.isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&gt;&gt;');//''. is for cpglang
define('_RESET','Nulstil');
define('_AT','på');
define('_LASTMSGS','Sidste %s Forum Beskeder');
define('_LASTPOSTBY','Sidste post af %1$s i %2$s den %3$s');
define('_PRINTER','Printvenlig side');

define('_CREDITS_TITLE','Kredit');
define('_CREDITS_PRODUCT','Produkt');
define('_CREDITS_DESC','Beskrivelse');
define('_CREDITS_AUTHORS','Ophavsmand');

define('_PP_TITLE','Fortroligheds-Aftale');
define('_PP_MODIFY','Ændre denne besked');

define('_SENDEREMAIL','Afsenders e-mail');
define('_SENDERNAME','Afsenders Navn');
define('_RECIPIENTNAME','Modtagers navn');
define('_RECIPIENTEMAIL','Modtagers e-mail-adresse');

define('_REASONS_0','Ingen');
define('_REASONS_1','Off Topic');
define('_REASONS_2','Flamebait');
define('_REASONS_3','Synge');
define('_REASONS_4','Overflødig');
define('_REASONS_5','Indbliksfuldt');
define('_REASONS_6','Interessant');
define('_REASONS_7','Oplysende');
define('_REASONS_8','Morsom');
define('_REASONS_9','Overvurderet');
define('_REASONS_10','undervurderet');

/* My Account Tools Block */
define('_TB_BLOCK','konto Værktøj');
define('_TB_TASKS','Opgaver');
define('_TB_INFO','Information');
define('_TB_PROFILE_INFO','Offentlig profil');
define('_TB_EDIT_PROFILE','Profil information');
define('_TB_EDIT_REG','Registrerings detaljer');
define('_TB_EDIT_PRIVATE','Privat information');
define('_TB_EDIT_AVATAR','Avatar');
define('_TB_DELETE','Slet min konto');
define('_TB_CONFIG','Konfiguration');
define('_TB_EDIT_PREFS','Indstillinger');
define('_TB_EDIT_HOME','Hjemmeside indstillinger');
define('_TB_EDIT_COMM','Kommentar indstillinger');
define('_TB_PERSONAL','Personlig');
define('_TB_PERSONAL_GALLERY','Fotoalbum');
define('_TB_PERSONAL_JOURNAL','Dagbog');
define('_TB_PRIVMSGS','Private Beskeder');
define('_TB_PRIVMSGS_INBOX','Indbakke');
define('_TB_PRIVMSGS_OUTBOX','Udbakke');
define('_TB_PRIVMSGS_SENTBOX','Sendtboks');
define('_TB_PRIVMSGS_SAVEBOX','Opbevarings–boks');
define('_TB_PRIVMSGS_SEND','Send besked');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','Bruger Info');
define('_SECURITYCODE','Sikkerhedskode');
define('_TYPESECCODE','Skriv sikkerhedskode');
define('_MEMBERSOPTIONS','Brugere');
define('_READSEND','Læs dine private beskeder. Send beskeder til andre. ');
define('_INBOX','Indbakke');
define('_NEW','Ny');
define('_ACCOUNTOPTIONS','Din konto. Ændre indstillinger og læs dine beskeder.');
define('_LOGOUTACCT','Log af denne konto.');
define('_LOGOUTADMINACCT','Log ud af administratorkontoen.');
define('_BLOGIN','Din konto');
define('_BFLOGIN','Forum profil');
define('_BHID','Skjult');
define('_WHOWHERE','Hvem er hvor');
define('_STAFFONL','Administratorer online');
define('_STAFFNONE','Ingen administratorer er online!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Fællesskab');
define('_BlogsLANG','Webdagbog');
define('_ContentLANG','Indhold');
define('_coppermineLANG','Fotoalbum');
define('_CPGlangLANG','Hjælp med Oversættelse');
define('_DownloadsLANG','Downloads');
define('_EncyclopediaLANG','Leksikon');
define('_ForumsLANG','Forum');
define('_ContactLANG','Kontakt os');
define('_FAQLANG','FAQ - Hjælp');
define('_Members_ListLANG','Brugeoversigt');
define('_NewsLANG','Nyheder');
define('_ReviewsLANG','Anmeldelser');
define('_SearchLANG','Søg');
define('_StatisticsLANG','Statistik');
define('_Stories_ArchiveLANG','Nyhedsarkiv');
define('_Submit_NewsLANG','Tilføj nyhed');
define('_SurveysLANG','Spørgeundersøgelser');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Emner');
define('_Private_MessagesLANG','Private beskeder');
define('_Tell_a_FriendLANG','Anbefal os');
define('_Web_LinksLANG','Links');
define('_Your_AccountLANG','Min konto');
define('_CPG_EventsLANG','Kalender');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Sprog!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Gruppe');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Rubrikker');

define('_COMMUNICATION','Kommunikation');
define('_FRIENDS','Venner');
define('_STORE','Butik');
define('_PRODUCTS','Produkter');
define('_DONATE','Give');
define('_HELP','Hjælp');
define('_GALLERIES','Billedgallerier');
define('_DOCS','Dokumentation');
define('_RULES','Regler &amp; bestemmelser');
define('_MENU','Hovedmenu');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','Du <strong>abonnerer</strong> på<br />vores nyhedsbrev');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','Du abonnerer <strong>ikke</strong> på<br />vores nyhedsbrev');
define('_NEWSLETTERBLOCKREGISTER','Du skal være<br /><strong>registreret bruger</strong><br />for at modtage vores nyhedsbrev');
define('_NEWSLETTERBLOCKSUBSCRIBE','Abonnér');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Afslut abonnement');
define('_NEWSLETTERBLOCKREGISTERNOW','Registrer dig nu!');
/* END Newsletter Block */

/* START class phpmailer lang array */
$PHPMAILER_LANG = array();
$PHPMAILER_LANG['provide_address'] = 'Du skal angive mindst en e-mail-adresse til modtager.';
$PHPMAILER_LANG['mailer_not_supported'] = ' mailer understøttes ikke.';
$PHPMAILER_LANG['execute'] = 'Kunne ikke køre: ';
$PHPMAILER_LANG['instantiate'] = 'Kunne ikke initiere e-mail funktion.';
$PHPMAILER_LANG['authenticate'] = 'SMTP Fejl: Kunne ikke få adgang.';
$PHPMAILER_LANG['from_failed'] = 'Følgende afsender adresse er forkert: ';
$PHPMAILER_LANG['recipients_failed'] = 'SMTP Fejl: Følgende modtager er forkert: ';
$PHPMAILER_LANG['data_not_accepted'] = 'SMTP Fejl: Data er ikke godkendt.';
$PHPMAILER_LANG['connect_host'] = 'SMTP Fejl: Kunne ikke nå frem til SMTP host.';
$PHPMAILER_LANG['file_access'] = 'Kan ikke nå filen: ';
$PHPMAILER_LANG['file_open'] = 'Fil Fejl: Kan ikke åbne filen: ';
$PHPMAILER_LANG['encoding'] = 'Ukendt encode-format: ';
/* END class phpmailer lang array */

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_SAVECHANGES','Gem ændringer');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Sprog');
define('_FUNCTIONS','Funktioner');
define('_SHOW','Vis');
define('_TO','Til');
define('_DAY','Dag');
define('_LAST','Sidste');
define('_ACTIVE','Aktiv');
define('_DEACTIVATE','Deaktiver');
define('_INACTIVE','Inaktiv');
define('_ACTIVATE','Aktivere');
define('_ACTIVATE2','Aktivere?');
define('_VIEW','Kan ses af');
define('_VIEWPRIV','Hvem kan se dette?');
define('_MVADMIN','Kun administratorer');
define('_MVUSERS','Kun brugerne');
define('_MVANON','Kun gæster');
define('_MVALL','Alle gæster');
define('_IMAGE','Billede');
define('_GO','Ok!');
define('_OPTION','Valgfrit');
define('_CATEGORY','Kategori');
define('_SUBCATEGORY','Under-kategori');
define('_ID','ID');
define('_EXPIRATION','Udløbsdato');
define('_DAYS','dage');
define('_WARNING','Advarsel');
define('_POLLTITLE','Afstemningstitel');
define('_POLLEACHFIELD','Angiv hver valgmulighed på egen linje');
define('_ADDCATEGORY','Tilføj ny Kategori');
define('_PAGEBREAK','Hvis du vil have flere sider, kan du skrive <b>&lt;!--pagebreak--&gt;</b> hvor du vil have sideskift');
define('_SIGNATURE','Signatur');
define('_DESCRIPTION','Beskrivelse');
define('_EDITCATEGORY','Editere Kategori');
define('_IN','i');
define('_DESCRIPTION255','Beskrivelse: (Maks. 255 tegn)');
define('_MODCATEGORY','Ændre en Kategori');
define('_SUBMITTER','Tilføjet af');
define('_VISIT','Besøg');
define('_EXTENDEDTEXT','Forlænget tekst');
define('_CHECKCATEGORIES','Tjek Kategorier');
define('_INCLUDESUBCATEGORIES','(inkluder Under-Kategorier)');
define('_CHECKSUBCATEGORIES','Tjek Under-Kategorier');
define('_VALIDATELINKS','Godkende Links');
define('_FAILED','mislykkes!');
define('_BEPATIENT','(vær venligst tålmodig)');
define('_VALIDATINGCAT','Godkender Kategori (og alle Under-Kategorier)');
define('_VALIDATINGSUBCAT','Godkender Under-Kategori');
define('_OK','Ok!');
define('_CHECK','Tjek');
define('_IGNORE','Ignorer');
define('_HITS','Hits');
define('_FILESIZE', 'Fil Størrelse');
define("_EZTHEREIS","Der er");
define("_EZSUBCAT","under-kategorier");
define("_EZATTACHEDTOCAT","under denne kategori");
define("_EZBROKENLINKS","Afbrudte Links");
define("_DELEZLINKCATWARNING","ADVARSEL : Er du sikker på at du vil slette denne kategori ?<br /> Alle under-kategorier og links vil også blive slettet! !");

// index.php
define('_DEFHOMEMODULE','Standard-modul for forsiden');
define('_MODULEINHOME','Modul placeret på forsiden:');
define('_CHANGE','Ændre');
define('_WHOSONLINE','Hvem er online');
define('_NP_ADMIN','Notepad');
define('_NP_LOCKED','Notepad er låst<br />Kun en root administrator (super bruger) kan låse den op');
define('_NP_SAVE','Gem notes');
define('_NP_UNLOCK','Åben notepad');
define('_NP_LOCK','Lås notepad');
// news
define('_STICKY','Prioriterede artikler');
define('_ARTICLEUP','Artikel op');
define('_ARTICLEDOWN','Artikel ned');
define('_UNSTICK','Fjern prioritering');
define('_STICK','Prioriter');
define('_AUTOMATEDARTICLES','Programsatte artikler');
define('_STORYID','Nyheds ID');
define('_CURRENTPOLL','Nuværende afstemning');

// admin.php
define('_ADMINISTRATION','Administration');
define('_NOADMINYET','Der er ingen Administrationkontoer endnu. Forsæt for at oprette Super Bruger:');
define('_CREATEUSERDATA','Vil du oprette en normal bruger med de samme data?');
define('_ADMINLOGIN','Admin logind');
define('_ADMINID','Admin ID');
define('_EMAIL','E-mail');
define('_SUBMIT','Send');
define('_YOUARELOGGEDOUT','Du er nu logget ud!');
define('_PASSWDNOMATCH','Kodeordene er ikke ens. Gå tilbage og prøv igen');
define('_LOGIN_REMEMBERME','Husk mig?');
define('_ADMINMENU_LOGOUT','Administration Menu');
define('_PASSWORD_MALFORMED','Venligst inkluder mindst et tal, et stort bogstav og et lille bogstav i dit kodeord');

// admins.php
define('_AUTHORSADMIN','Administratorer');
define('_NAME','Navn');
define('_REQUIRED','(obligatorisk)');
define('_MODIFYINFO','Rediger information');
define('_DELAUTHOR','Slet administrator');
define('_ADDAUTHOR','Tilføj ny administrator');
define('_PERMISSIONS','Rettigheder');
define('_SUPERUSER','Superbruger');
define('_SUPERWARNING','ADVARSEL: hvis Superbruger er valgt får administratoren fuld adgang til alt!');
define('_ADDAUTHOR2','Tilføj administrator');
define('_RETYPEPASSWD','Skriv kodeordet igen');
define('_FORCHANGES','(Kun for ændringer)');
define('_COMPLETEFIELDS','Du skal udfylde alle obligatoriske felter');
define('_CREATIONERROR','Det opstod en fejl ved oprettelsen af administrator');
define('_AUTHORDEL','Slet administrator');
define('_PUBLISHEDSTORIES','Denne administrator har offentliggjort artikler');
define('_SELECTNEWADMIN','Vælg Venligst en ny administrator for at beholde dem');
define('_GODNOTDEL','(GOD kontoen kan ikke slettes)');
define('_MAINACCOUNT','God Admin*');
define('_USERS','Brugere');

// banners.php
define('_BANNERSADMIN','Banneradministration');
define('_DELETEBANNER','Slet banner');
define('_SURETODELBANNER','Er du sikker på, at du vil slette denne banner?');
define('_EDITBANNER','Editere banner');

// blocks.php
define('_BLOCKSADMIN','Administrere blokke');
define('_CENTER','Center');
define('_CENTERUP','Center op');
define('_CENTERDOWN','Center ned');
define('_BLOCKFILE','(Blok fil)');
define('_BLOCKFILE2','FIL');
define('_BLOCKSYSTEM','SYSTEM');
define('_ADDNEWBLOCK','Tilføj en ny blok');
define('_RSSFILE','RSS/RDF filadresse');
define('_ONLYHEADLINES','(Kun for overskrifter)');
define('_REFRESHTIME','Opdateringsinterval');
define('_CREATEBLOCK','Gem blok');
define('_EDITBLOCK','Redigere blok');
define('_BLOCK','Blok');
define('_SAVEBLOCK','Gem blok');
define('_BLOCKACTIVATION','Blokaktivering');
define('_BLOCKPREVIEW','Dette er en forhåndsvisning af blokken');
define('_WANT2ACTIVATE','Vil du aktivere denne blok?');
define('_ARESUREDELBLOCK','Er du sikker på at du vil slette blokken');
define('_BLOCKUP','Blok OP');
define('_BLOCKDOWN','Blok NED');
define('_BLOCKTOP','Flyt blok til toppen');
define('_BLOCKBOTTOM','flyt blok til bunden');
define('_TITLE','Titel');
define('_POSITION','Position');
define('_WEIGHT','vægt');
define('_STATUS','Status');
define('_LEFTBLOCK','Venstreblok');
define('_LEFT','Venstre');
define('_RIGHTBLOCK','Højreblok');
define('_RIGHT','Højre');
define('_TYPE','Type');
define('_CUSTOM','Egendefineret');
define('_FILENAME','Filnavn');
define('_FILEINCLUDE','(Vælg en blok som skal inkluderes. Alle andre felter vil ignoreres)');
define('_VISIBLEINMODULES', 'Synlig i moduler');

// comments.php
define('_REMOVECOMMENTS','Slet kommentarer');
define('_SURETODELCOMMENTS','Er du sikker på at du vil slette den valgte kommentar og alle svarene på denne?');

// database.php
define('_SAVEDATABASE','Opret en sikkerheds kopi af databasen');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Nuværende status');
define('_ACTIVATEPAGE','Aktiver denne side?');

// history.php
define('_EPHEMADMIN','Idag i Historie');
define('_ADDEPHEM','Tilføj ny');
define('_EPHEMDESC','Beskrivelse');
define('_EPHEMMAINT','Se efter');
define('_EPHEMEDIT','Ændre');
define('_EPHEMDELETE','Slet');

// headlines.php
define('_RSSFAIL','Der opstod et problem med RSS filadressen');
define('_RSSTRYAGAIN','Kontroller adressen og RSS filnavnet og prøv igen.');
define('_RSSCONTENT','(RSS/RDF indhold)');
define('_IFRSSWARNING','Hvis du udfylder adressefeltet vises indholdet du skriver ikke!');
define('_SETUPHEADLINES','\'Vælg Egendefineret\' og skriv adressen eller vælg en website fra listen for at indsætte deres overskrifter)');
define('_HEADLINESADMIN','Overskrift administration');
define('_ADDHEADLINE','Tilføj overskrift');
define('_EDITHEADLINE','Redigerer overskrifter');
define('_SURE2DELHEADLINE','ADVARSEL: Er du sikker på at du vil slette denne overskrift?');

// messages.php
define('_MESSAGESADMIN','Beskedadministration');
define('_MESSAGETITLE','Titel');
define('_MESSAGECONTENT','Indhold');
define('_ALLMESSAGES','Oversigt over beskeder');
define('_EDITMSG','Rediger besked');
define('_ADDMSG','Tilføj besked');
define('_REMOVEMSG','Er du sikker på at du vil slette denne besked ? ');
define('_CHANGEDATE','Ændre startdato til i dag?');
define('_IFYOUACTIVE','(Hvis du aktiverer denne besked nu sættes startdato til i dag)');

// modules.php
define('_MODULESADMIN','Moduler administration');
define('_HOMECONFIG','Indstillinger for forsiden');
define('_MODULESADDONS','Moduler og addons');
define('_INHOME','På Forsiden');
define('_MODULEHOMENOTE','<b>-= ADVARSEL =-</b><br>Modul i <b>fed</b> repræsenterer modulet du har lagt på forsiden..<br>Du kan ikke deaktivere eller sætte restriktioner på dette modul, når det er standardmodul!<br>Hvis du sletter modulets mappe vil du se en fejlmelding på forsiden.<br>Dette modul er også blevet erstattet af link <i>Hjem</i> i moduler-blokken.');
define('_PUTINHOME','Tilføj på forsiden');
define('_SURETOCHANGEMOD','Er du sikker på at du vil ændre din forside fra');
define('_NOTINMENU','[ <strong>&middot;</strong> ] betyder at en modul hvis navn og link ikke bliver synlige i modul-blokken');
define('_SHOWINMENU','Vises i modulblokken?');
define('_CUSTOMTITLE','Egendefineret titel');
define('_MODULEEDIT','Redigering af Moduler');
define('_VERSION','Version');
define('_UPGRADE','Opgrader til %s');
define('_DBSIZE','DB størrelse');
define('_CVS_EXPLAIN','Det ser ud til at denne modul har en CVS folder. CVS betyder Concurrent Versioning System.<br /> Igennem CVS kan du modtage sidste version af filer meget let.<br /> <b>MEN</b> sidste version af en fil kan have fejl siden den ikke er en "officiel" version.<br />Hvis du er kendt med PHP kan du køre en opdatering på filene ved at klikke på linket nedenfor.<br />Glem ikke at tage en backup først!!!');
define('_CVS_UPDATE','Opdatere CVS filer');
define('_LOADNEWCVS', 'Hent nyt modul fra CVS');
define('_SUREALL', 'Er du sikker på %s alle %s');
define('_UPGRADEFAILED', 'Opgrader fejlede');
define('_EXAMPLE', 'Brugs eksempel');

// newsletter.php
define('_FROM','Fra');
define('_STAFF','Stab');
define('_NL_RECIPS','Modtagere');
define('_SUBSCRIBEDUSERS','Abonnerende Brugere');
define('_NL_ALLUSERS','Alle medlemmer');
define('_NL_ADMINS','Administratorer');
define('_NL_REGARDS','Venlig hilsen');
define('_DISCARD','kassere');
define('_REVIEWTEXT','Vær venlig at tjekke hele teksten, for eventuelle stavefejl:');
define('_MANYUSERSNOTE','VIGTIGT! Der er mange brugere, som vil modtage denne tekst. Vær venlig at vente til scriptet er færdig med sin operation. Dette kan tage helt op til et par minutter!');
define('_NL_NOUSERS','Den valgte gruppe til at modtage dette nyhedsbrev har ingen medlemmer<br />Gå tilbage og vælg en anden gruppe');
define('_NUSERWILLRECEIVE','Brugerne vil modtage denne Nyhedsbrev.');
define('_NLUNSUBSCRIBE',"Du modtager dette nyhedsbrev fordi du har tilmeldt dig til vores nyhedsbrev fra vores site\n\nDu kan framelde dig når som helst ved at klikke <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">her</a> \n\nHvis Du har brug for hjælp kontakt da venligst <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">vores administrator</a>");
define('_NEWSLETTERSENT','Nyhedsbrevet er sendt.');

// referers.php
define('_WHOLINKS','Hvem linker til os?');
define('_DELETEREFERERS','Slet linkene');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Fodnote');
define('_DEBUG', 'Fejlbehandling');
define('_SITECONFIG','Systemopsætning');
define('_GENSITEINFO','Generelle websiteoplysninger');
define('_SITENAME','Websites navn');
define('_SITEURL','Websitets internetadresse');
define('_SITELOGO','Logo');
define('_SITESLOGAN','Slogan');
define('_STARTDATE','Startdato for dette site');
define('_ADMINEMAIL','Administrators e-mail-adresse');
define('_ITEMSTOP','Antal emner på top-siden');
define('_STORIESHOME','Antal artikler som skal vises på forsiden');
define('_OLDSTORIES','Antal artikler i blokken med gamle artikler/nyheder');
define('_ALLOWANONPOST','Tillade gæster at sende indlæg?');
define('_DEFAULTTHEME','Standard tema');
define('_SHOWSEC','Vis Sikkerhedskode');
define('_TOOLTIPS','Vis sidenavn i browserens top');
define('_UM_TOGGLE','Aktiver opdaterings Monitor');
define('_UM_EXPLAIN','Denne vil modtage to informationsdele fra vores hovedwebsite, dragonflycms.org: sidste nye version af Dragonfly, og hvis der er nogen vigtige beskeder for den version af Dragonfly du bruger. Den eneste data der sendes til vores site er dit Dragonfly version nummer. Vi logger <strong>ikke</strong> disse data på vore server.');
// maintenance
define('_MAINTENANCE','Vedligeholdelse');
define('_MESSAGE','Besked');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','Multi-sprog indstillinger');
define('_SELLANGUAGE','Standard sprog');
define('_LOCALEFORMAT','Tidsformat');
define('_ACTMULTILINGUAL','Aktiver Multi-sprog? ');
define('_ACTUSEFLAGS','Vis flag istedet for rullegardin? ');
// banners
define('_BANNERSOPT','Banner indstillinger');
define('_ACTBANNERS','Aktivere bannere?');
// footer
define('_FOOTERMSG','Fodnote');
define('_FOOTERLINE1','Fodnote line 1');
define('_FOOTERLINE2','Fodnote line 2');
define('_FOOTERLINE3','Fodnote line 3');
// backend
define('_BACKENDCONF','Backend konfiguration');
define('_BACKENDTITLE','Backend titel');
define('_BACKENDLANG','Backend sprog');
// mail stories
define('_MAIL2ADMIN','Besked til administrator ved nye indlæg');
define('_NOTIFYSUBMISSION','Giv besked om nye indlæg via e-mail?');
define('_EMAIL2SENDMSG','E-mailadresse hvortil beskeden skal sendes');
define('_EMAILSUBJECT','Emne på e-mail');
define('_EMAILMSG','Besked i e-mailen');
define('_EMAILFROM','Afsender');
// comments
define('_COMMENTSOPT','Kommentar');
define('_COMMENTSLIMIT','Bytesgrænse for kommentarer');
define('_COMMENTSMOD','Kommentarændring');
define('_MODADMIN','Moderation af administratorer');
define('_MODUSERS','Moderation af medlemmer');
define('_NOMOD','Ingen moderation');
// adminmenu
define('_GRAPHICOPT','Grafikfunktioner');
define('_BOTH','Begge');
define('_GRAPHICAL','Grafisk');
define('_SIDEBLOCK','Sideblok');
// miscellaneous
define('_MISCOPT','Andre indstillinger');
define('_ACTIVATEHTTPREF','Aktivere HTTP henvisninger?');
define('_MAXREF','Hvor mange henvisninger skal der maksimalt vises?');
define('_COMMENTSPOLLS','Aktiver kommentarer i afstemninger?');
define('_COMMENTSARTICLES','Aktiver kommentarer i artikler?');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','Censurering');
define('_CENSORMODE','Censurerings tilstand');
define('_NOFILTERING','Ingen filtrering');
define('_EXACTMATCH','Præcis det samme match');
define('_MATCHBEG','Matcher ord i starten');
define('_MATCHANY','Matcher overalt i teksten');
define('_CENSORREPLACE','Udskift censureret ord med:');
// email
define('_EMAILOPTIONS','E-mail');
define('_ALLOW_HTML_EMAIL','Tillade html i E-mail');
define('_USE_SMTP','Bruge SMTP for E-mail frem for PHP');
define('_SMTP_HOST','SMTP host adresse (smtp.example.com)');
define('_USE_SMTP_AUTH','Serveren kræver SMTP godkendelse');
define('_SMTP_USER_NAME','SMTP Brugernavn');
define('_SMTP_USER_PASS','SMTP Kodeord');

// cpg_adminmenu.php
define('_ADMINMENU','Administrationsmenu');
define('_ADMINLOGOUT','Log ud');
define('_AMENU0','System');
define('_AMENU1','Generelt');
define('_AMENU2','Brugere');
define('_AMENU3','Beskeder');
define('_AMENU4','Forum');
define('_AMENU5','Informativ');
define('_AMENU6','Linking');
define('_AMENU7','Kommerciel');
define('_AMENU8','Multimedia');
define('_AMENU9','Moduler');
define('_BMENU1','Hjælp');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','Indstillinger');
define('_DATABASE','Database');
define('_BLOCKS','Blokke');
define('_MODULES','Moduler');
define('_EDITADMINS','Admins');
define('_MESSAGES','Forside beskeder');
define('_BANNERS','Bannere');
define('_HTTPREFERERS','Hvem linker til os');
define('_EDITUSERS','Brugere');
define('_USERSCONFIG','Brugeropsætning');
define('_NEWSLETTER','Nyhedsbrev');
define('_SUBMISSIONS','Forslag');
define('_ADDSTORY','Tilføj ny artikel');
define('_TOPICS','Emner');
define('_ADMPOLLS','Afstemninger');
define('_EPHEMERIDS','Dagens ord');
define('_REVIEWS','Anmeldelser');
define('_ENCYCLOPEDIA','Opslagsværk');
define('_SURVEYS','Afstemninger');
define('_SECTIONS','Sektioner');
define('_ARTICLES','Artikler');
define('_FAQ','FAQ');
define('_DOWNLOAD','Downloads');
define('_WEBLINKS','Weblinks');
define('_CONTENT','Indhold');
define('_SYSINFO','System Info');
define('_REPORTABUG','Rapporter en fejl');
//coppermine admin
define('_W_INSTALL','Hvilken installation?');
define('_W_PAGE','Hvilken Side?');
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
define('_ERROR','FEJL');
define('_SEC_ERROR','Sikkerheds fejl');
define('_ERROR_NOT_SET','%s var ikke sat');
define('_ERROR_NO_POST','Post fra andre værter er ikke tilladt...');
define('_ERROR_NO_GET','GET anmodning er ikke tilladt for denne funktion...');
define('_ERROR_BAD_CHAR','De karakterer du prøver at inkluderer i din %s anmodning er ikke tilladt...');
define('_ERROR_BAD_FORMAT','%s formatet er ikke gyldigt');
define('_ERROR_BAD_LINK','Du prøver at få adgang til denne side igennem et falsk link...');
define('_ERROR_NONE_TO_DISPLAY','Der er ingen %s at vise');
define('_ERROR_DELETE_CONF','Er du sikker på at du vil slette %s?');
define('_ERROR_NO_EXIST','%s eksisterer ikke');
define('_ERROR_ALREADYEXIST','%s eksisterer alleredes');
define('_TASK_COMPLETED','opgaven fuldført!');
define('_CONFIRM','Confirm');
define('_FOOTER_COPYRIGHTS', 'Interactive software released under <a href="http://dragonflycms.org/GNUGPL.html" target="_blank" title="GNU Public License Agreement">GNU GPL</a>,	<a href="'.getlink('credits').'">Code Credits</a>,	<a href="'.getlink('privacy_policy').'">Privacy Policy</a>');

# time
$LNG = array('_time' => array(
'l' => array('Søndag', 'Mandag', 'Tirsdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lørdag'),
'D' => array('Søn', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'Lør'),
'F' => array(1=>'Januar', 'Februar', 'Marts', 'April', 'Maj', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'December'),
'M' => array(1=>'Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec'),
));
$LNG['_time']['l'][7] =& $LNG['_time']['l'][0];
$LNG['_time']['D'][7] =& $LNG['_time']['D'][0];
