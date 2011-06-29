<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the CPG Open Source License Agreement version 1

  $Source: /cvs/languages/danish/language/lang-danish.php,v $
  $Revision: 1.14 $
  $Author: lexsus $
  $Date: 2004/10/10 13:02:19 $

***********************************************************************/
if (!defined('CPG_NUKE')) { die('Du har ingen adgang til denne fil'); }
global $MAIN_CFG;
define("_CHARSET", "UTF-8");
define("_BROWSER_LANGCODE", "da");
define('_DATESTRING', '%A, %d %B %Y (%H:%M:%S)');
define("_DATESTRING2", "%A, %B %d");
define("_DATESTRING3","%d-%b-%Y");

define('_TEXT_DIR', 'ltr');
define('_ALIGN_TEXT', 'left');
define("_SEARCH", "Søg");
define("_LOGIN", "Log ind");
define("_WRITES", "skriver");
define("_POSTEDON", "Postet");
define("_NICKNAME", "Brugernavn");
define("_PASSWORD", "Kodeord");
define("_WELCOMETO", "Velkommen til");
define("_EDIT", "Redigere");
define("_DELETE", "Slet");
define("_POSTEDBY", "Postet af");
define("_READS", "læst");
define('_GOBACK', '[ <a href="javascript:history.go(-1)">Tilbage</a> ]');
define("_COMMENTS", "kommentar");
define("_PASTARTICLES", "Tidligere artikler");
define("_OLDERARTICLES", "Ældre artikler");
define("_BY", "af");
define("_ON", " ");
define("_LOGOUT", "Log ud");
define("_WAITINGCONT", "Ventende indhold");
define("_WREVIEWS", "Anmeldelser");
define("_WLINKS", "Links");
define("_ONEDAY", "På en dag som denne...");
define('_ASREGISTERED', 'Er du ikke medlem endnu? Det er enkelt at <a href="'.getlink('Your_Account&amp;file=register').'">blive medlem</a>. Som registreret medlem har du flere fordele, og det er gratis at registrere sig!');
define("_MENUFOR", "Menu for");
define("_NOBIGSTORY", "Der findes ikke nyheder som er lagt ud i dag!");
define("_BIGSTORY", "Dagens mest læste nyhed er:");
define("_SURVEY", "Undersøgelse");
define("_POLLS", "Afstemninger");
define("_PCOMMENTS", "Kommentarer:");
define("_RESULTS", "Resultat");
define("_HREADMORE", "læs mere...");
define("_CURRENTLY", "Der er for tiden,");
define("_GUESTS", "gæst(er) og");
define("_MEMBERS", "medlem(er) online.");
define("_YOUARELOGGED", "Du er logget ind som");
define("_YOUHAVE", "Du har");
define("_PRIVATEMSG", "privat(e) besked(er).");
define('_YOUAREANON', 'Du er en anonym bruger. Du kan registrere dig gratis ved at udfylde <a href="'.getlink('Your_Account&amp;file=register').'">dette skema</a>');
define("_NOTE", "Bemærk:");
define("_ADMIN", "Administrator:");
define("_WERECEIVED", "Vi har haft");
define("_PAGESVIEWS", "sidevisninger siden");
define("_TOPIC", "Emne der skal postes under");
define("_UDOWNLOADS", "Downloads");
define("_VOTE", "Stem");
define("_VOTES", "Stemmer");
define("_MVIEWADMIN", "Se: Kun administratorer");
define("_MVIEWUSERS", "Se: Kun brugere");
define("_MVIEWANON", "Se: Kun anonyme besøgende");
define("_MVIEWALL", "Se: Alle besøgende");
define("_EXPIRELESSHOUR", "Udløber inden en time");
define("_EXPIREIN", "Udløber om");
define("_UNLIMITED", "Ubegrænset");
define("_HOURS", "Timer");
define("_RSSPROBLEM", "Der er et problem med rubrikkerne fra dette websted");
define("_SELECTLANGUAGE", "Vælg sprog");
define("_SELECTGUILANG", "Vælg sprog:");
define("_NONE", "Ingen");
define("_BLOCKPROBLEM", "<center>Der er ligenu et problem med denne blok.</center>");
define("_BLOCKPROBLEM2", "<center>Der er ligenu intet indhold til denne blok.</center>");
define("_MODULENOTACTIVE", "Denne modulen er ikke aktiv!");
define("_NOACTIVEMODULES", "Inaktive moduler");
define('_MODULENOEXIST', 'Desværre, men den ønskede fil, %s, ser ud til ikke at eksister');//NEW akamu
define("_FORADMINTESTS", "(for Admin-test)");
define("_BBFORUMS", "Forum");
define("_ACCESSDENIED", "Adgang nægtet");
define("_RESTRICTEDAREA", "Du prøver at få adgang til et beskyttet område.");
define("_MODULEUSERS", "Denne del af vores site er kun for <i>tilmeldte brugere</i>.<br><br>");
define('_MODULEUSERS2', 'Du kan registrere dig gratis ved at klikke <a href=\''.getlink('Your_Account&amp;file=register').'\'>her</a>, så vil du få<br>adgang til denne del uden Restriktioner. Tak.<br><br>');
define("_MODULESADMINS", "Beklager, men denne del af vores sider er kun for <i>administratorer</i><br><br>");
define('_MODULESGROUPS', 'gruppe adgang kræves');
define("_HOME", "Hjem");
define("_HOMEPROBLEM", "Der er et stort problem: Vi har ingen forside!!");
define("_ADDAHOME", "Tilføj en modul på forsiden");
define("_HOMEPROBLEMUSER", "Vi har et problem med siden lige nu. Prøv venligst igen senere.");
define("_MORENEWS", "Mere i nyheds sektionen");
define("_ALLCATEGORIES", "Alle kategorier");
define('_SPAMGUARDPROTECTED', 'Du har sendt det maksimum nummer af e-mails som du er tildelt hver dag<br />Prøv igen i morgen');
define('_M_CHARS', 'Maximum: %s bogstaver');

define('_SYS_MESSAGE', 'System Besked');
define('_SYS_MESSAGES', 'System Beskeder');
define('_SYS_MAINTENANCE', 'Du køre i maintenance mode');
define('_SYS_DEMO', 'Du køre i administration demo mode<br />Du kan ikke ændre noget i database<br /><a href="'.adminlink('logout').'">Log mig ud!</a>');

define("_DATE", "Dato");
define("_HOUR", "Time");
define("_UMONTH", "Måned");
define("_YEAR", "År");
define("_JANUARY", "Januar");
define("_FEBRUARY", "Februar");
define("_MARCH", "Marts");
define("_APRIL", "April");
define("_MAY", "Maj");
define("_JUNE", "Juni");
define("_JULY", "Juli");
define("_AUGUST", "August");
define("_SEPTEMBER", "September");
define("_OCTOBER", "Oktober");
define("_NOVEMBER", "November");
define("_DECEMBER", "December");

define("_MONDAY","Mandag");
define("_TUESDAY","Tirsdag");
define("_WEDNESDAY","Onsdag");
define("_THURSDAY", "Torsdag");
define("_FRIDAY","Fredag");
define("_SATURDAY","Lørdag");
define("_SUNDAY","Søndag");

define("_ABR_MONDAY","Man");
define("_ABR_TUESDAY","Tir");
define("_ABR_WEDNESDAY","Ons");
define("_ABR_THURSDAY", "Tor");
define("_ABR_FRIDAY","Fre");
define("_ABR_SATURDAY","Lør");
define("_ABR_SUNDAY","Søn");

define("_BWEL", "Velkommen");
define("_BPM", "Private Beskeder");
define("_BUNREAD", "Ulæst");
define("_BREAD", "Læst");
define("_BMEMP", "Medlemsskab");
define("_BLATEST", "Sidste");
define("_BTD", "Ny i dag");
define("_BYD", "Ny i går");
define("_BOVER", "Totalt");
define("_BVISIT", "Personer online");
define("_BVIS", "Besøgende");
define("_BMEM", "Medlemmer");
define("_BTT", "Totalt");
define("_BON", "Online nu");
define("_BREG", "Registrer");
define("_BROADCAST", "Udsend en Offentlig besked");
define("_BROADCASTFROM", "Offentlig besked fra");
define("_TURNOFFMSG", "Slå Offentlig besked fra");
define("_JOURNAL", "Dagbog");
define("_READMYJOURNAL", "Læs min dagbog");
define("_ADD", "Tilføj");
define("_YES", "Ja");
define("_NO", "Nej");
define("_INVISIBLEMODULES", "Usynlige moduler");
define("_ACTIVEBUTNOTSEE", "(Aktiv men usynlig link)");

define("_TEAM", "Team");
define('_LINKAPPROVEDMSG', 'Tillykke! Linket du har givet os er blevet godkendt, link venligst tilbage til os.');
define("_MODREQLINKS", "Mod. links");
define("_BROKENLINKS", "Ødelagte links");
define("_MODREQDOWN", "Mod. downloads");
define("_BROKENDOWN", "Ødelagte downloads");
define("_PAGEGENERATION", "Sidegenerering:");
define("_SECONDS", "Sekunder");
define("_YOUHAVEONEMSG", "Du har 1 ny privat besked");
define("_NEWPMSG", "Nye private beskeder");
define("_CONTRIBUTEDBY", "indsendt af");
define("_CHAT", "Chat");
define("_REGISTERED", "Registret");
define("_CHATGUESTS", "Gæster");
define("_USERSTALKINGNOW", "Brugere som snakker nu");
define("_ENTERTOCHAT", "Kom ind for at chatte");
define("_CHATROOMS", "Tilgængelige rum");
define("_ALLTOPICS", "Alle emner");
define("_ASSOTOPIC", "Tilknyttede emner");
define("_HELLO", "Hallo");
define("_ALL","Alle");
define('_URL', 'URL');
define('_SUBJECT','Emne');
define('_PREVIEW','Gennemse');
define('_SEND', 'Send');
define('_ANONYMOUS', 'anonym');
define('_BC_DELIM', isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&gt;&gt;');

define('_CREDITS_TITLE', 'Kredit');
define('_CREDITS_PRODUCT', 'Produkt');
define('_CREDITS_DESC', 'Beskrivelse');
define('_CREDITS_AUTHORS', 'Ophavsmand');

define('_PP_TITLE', 'Fortroligheds-Aftale');
define('_PP_MODIFY', 'Ændre denne besked'); 

/* My Account Tools Block */
define('_TB_BLOCK', 'Min konto Værktøj');
define('_TB_TASKS', 'Skema');
define('_TB_INFO', 'Information');
define('_TB_PROFILE_INFO', 'Min offentlig profil');
define('_TB_EDIT_PROFILE', 'Min profil information');
define('_TB_EDIT_REG', 'Mine Registrerings detaljer');
define('_TB_EDIT_PRIVATE', 'Mine private information');
define('_TB_EDIT_AVATAR', 'Min avatar');
define('_TB_DELETE', 'Slet min konto');
define('_TB_CONFIG', 'Konfiguration');
define('_TB_EDIT_PREFS', 'Mine Præferencer');
define('_TB_EDIT_HOME', 'Min hjemmeside Indstillinger');
define('_TB_EDIT_COMM', 'Min kommentar Indstillinger');
define('_TB_PERSONAL', 'Personlig');
define('_TB_PERSONAL_GALLERY', 'Mit galleri');
define('_TB_PERSONAL_JOURNAL', 'Min dagbog');
define('_TB_PRIVMSGS', 'Private Beskeder');
define('_TB_PRIVMSGS_INBOX', 'Indboks');
define('_TB_PRIVMSGS_OUTBOX', 'Udboks');
define('_TB_PRIVMSGS_SENTBOX', 'Sendtboks');
define('_TB_PRIVMSGS_SAVEBOX', 'Opbevarings–boks');
define('_TB_PRIVMSGS_SEND', 'Send besked');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info danmark ----*/
define("_USER_INFO", "Bruger Info");
define("_SECURITYCODE", "Sikkerhedskode");
define("_TYPESECCODE", "Skriv sikkerhedskode");
define("_MEMBERSOPTIONS", "Medlemmer");
define("_READSEND", "Læs dine private beskeder. Send beskeder til andre. ");
define("_INBOX", "Indboks");
define("_NEW", "Ny");
define("_ACCOUNTOPTIONS", "Din konto. Ændre indstillinger og læs dine beskeder.");
define("_LOGOUTACCT", "Log af denne konto.");
define("_LOGOUTADMINACCT", "Log ud af administratorkontoen.");
define("_BLOGIN", "Din konto");
define("_BFLOGIN", "Forum Profil");
define("_BHID", "Skjult");
define("_WHOWHERE", "Hvem er hvor");
define("_STAFFONL", "Administratorer Online");
define("_STAFFNONE", "Ingen administratorer er online!");

/* For Multilingual Modules Block  */
define("_COMMUNITY", "Fællesskab");
define("_ContentLANG", "Indhold");
define("_coppermineLANG", "Fotoalbum");
define("_CPGlangLANG", "Hjælp med Oversættelse");
define("_DownloadsLANG", "Downloads");
define("_EncyclopediaLANG", "Leksikon");
define("_ForumsLANG", "Medlemsforum");
define("_ContactLANG", "Kontakt os");
define("_FAQLANG", "FAQ - Hjælp");
define("_JournalLANG", 'Dagbog');
define("_Members_ListLANG", "Medlemsliste");
define("_NewsLANG", "Nyheder");
define("_ReviewsLANG", "Anmeldelser");
define("_SearchLANG", "Søg");
define("_StatisticsLANG", "Statistik");
define("_Stories_ArchiveLANG", "Nyhedsarkiv");
define("_Submit_NewsLANG", "Tilføj nyheder");
define("_SurveysLANG", "Spørgeundersøgelser");
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define("_TopicsLANG", "Emner");
define("_Private_MessagesLANG", "Mine private beskeder");
define("_Recommend_UsLANG", "Anbefal os");
define("_Web_LinksLANG", "Links");
define("_Your_AccountLANG", "Min konto");
define("_Events4ULANG", "Kalender");
define("_COMMUNICATION", "Kommunikation");
define("_FRIENDS", "Venner");
define("_STORE", "Butik");
define("_PRODUCTS", "Produkter");
define("_DONATE", "Give");
define("_HELP", "Hjælp");
define("_GALLERIES", "Billedgallerier");
define("_DOCS", "Dokumentation");
define("_RULES", "Regler & bestemmelser");
define('_MENU', 'Hoved Menu');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define("_NEWSLETTERBLOCKSUBSCRIBED", "Du <strong>abonnerer</strong> på<br />vort nyhedsbrev");
define("_NEWSLETTERBLOCKNOTSUBSCRIBED", "Du abonnerer <strong>ikke</strong> på<br />vort nyhedsbrev");
define("_NEWSLETTERBLOCKREGISTER", "Du skal være en<br /><strong>registreret bruger</strong><br />for at modtage vort nyhedsbrev");
define("_NEWSLETTERBLOCKSUBSCRIBE", "Abonnerer");
define("_NEWSLETTERBLOCKUNSUBSCRIBE", "Afslut Abonnement");
define("_NEWSLETTERBLOCKREGISTERNOW", "Registrer dig nu!");
/* END Newsletter Block */

/* START class phpmailer lang array */
$PHPMAILER_LANG = array();
$PHPMAILER_LANG["provide_address"] = 'Du skal angive mindst en E-mail adresse til modtager.';
$PHPMAILER_LANG["mailer_not_supported"] = ' mailer understøttes ikke.';
$PHPMAILER_LANG["execute"] = 'Kunne ikke køre: ';
$PHPMAILER_LANG["instantiate"] = 'Kunne ikke initiere E-mail funktion.';
$PHPMAILER_LANG["authenticate"] = 'SMTP Fejl: Kunne ikke få adgang.';
$PHPMAILER_LANG["from_failed"] = 'Følgende afsender adresse er forkert: ';
$PHPMAILER_LANG["recipients_failed"] = 'SMTP Fejl: Følgende modtager er forkert: ';
$PHPMAILER_LANG["data_not_accepted"] = 'SMTP Fejl: Data er ikke godkendt.';
$PHPMAILER_LANG["connect_host"] = 'SMTP Fejl: Kunne ikke nå frem til SMTP host.';
$PHPMAILER_LANG["file_access"] = 'Kan ikke nå filen: ';
$PHPMAILER_LANG["file_open"] = 'Fil Fejl: Kan ikke åbne filen: ';
$PHPMAILER_LANG["encoding"] = 'Ukendt encode-format: ';
/* END class phpmailer lang array */

/**************************
  ADMNINISTRATION SECTION
**************************/
define("_SAVECHANGES","Gem ændringer");
define("_LANGUAGE","Sprog");
define("_FUNCTIONS","Funktioner");
define("_SHOW","Vis");
define("_TO","Til");
define("_DAY","Dag");
define("_LAST","Sidste");
define("_ACTIVE","Aktiv");
define("_DEACTIVATE","Deaktiver");
define("_INACTIVE","Inaktiv");
define("_ACTIVATE","Aktivere");
define("_ACTIVATE2","Aktivere?");
define("_VIEW","Kan læses af");
define("_VIEWPRIV","Hvem kan læse dette?");
define("_MVADMIN","Kun administratorer");
define("_MVUSERS","Kun medlemmer");
define("_MVANON","Kun anonyme besøgende");
define("_MVALL","Alle besøgende");
define("_IMAGE","Bilde");
define("_GO","Gå!");
define("_OPTION","Valgfrit");
define("_CATEGORY","Kategori");
define("_ID","ID");
define("_EXPIRATION","Udløbsdato");
define("_DAYS","dager");
define("_WARNING","Advarsel");
define("_POLLTITLE","Afstemningstitel");
define("_POLLEACHFIELD","Angiv hver valgmulighed på egen linje");
define("_ADDCATEGORY","Tilføj ny Kategori");
define("_PAGEBREAK","Hvis du vil have flere sider, kan du skrive <b>&lt;!--pagebreak--&gt;</b> hvor du vil have sideskift");
define("_SIGNATURE","Signatur");
define("_DESCRIPTION","Beskrivelse");
define("_EDITCATEGORY","Editere Kategori");
define("_IN","i");
define("_DESCRIPTION255","Beskrivelse: (Maks. 255 tegn)");
define("_MODCATEGORY","Ændre en Kategori");
define("_SUBMITTER", "Tilføjet af");
define("_VISIT", "Besøg");
define("_EXTENDEDTEXT", "Forlænget tekst");
define("_CHECKCATEGORIES","Tjek Kategorier");
define("_INCLUDESUBCATEGORIES","(inkluder Under-Kategorier)");
define("_CHECKSUBCATEGORIES","Tjek Under-Kategorier");
define("_VALIDATELINKS","Godkende Links");
define("_FAILED","mislykkes!");
define("_BEPATIENT","(være venligst tålmodig)");
define("_VALIDATINGCAT","Godkender Kategori (og alle Under-Kategorier)");
define("_VALIDATINGSUBCAT","Godkender Under-Kategori");
define("_OK","Ok!");
define("_CHECK", "Tjek"); 
define("_IGNORE", "Ignorer");
define("_HITS", "Hits");
// index.php
define("_DEFHOMEMODULE","Standard-modul for forsiden");
define("_MODULEINHOME","Modul belagt på forsiden:");
define("_CHANGE","Ændre");
define("_WHOSONLINE","Hvem er online");
define('_NP_ADMIN','Notepad');
define('_NP_LOCKED','Notepad er låst<br />Kun en root administrator (super bruger) kan låse den op');
define('_NP_SAVE','Gem Notes');
define('_NP_UNLOCK','Åben Notepad');
define('_NP_LOCK','Lås Notepad');
// news
define("_STICKY","Klæbrige Artikler");
define("_ARTICLEUP","Artikel Op");
define("_ARTICLEDOWN","Artikel Ned");
define("_UNSTICK","Fjern klæbrig");
define("_STICK","Klæbrig");
define("_AUTOMATEDARTICLES","Programsatte artikler");
define("_STORYID","Nyheds ID");
define("_CURRENTPOLL","Nuværende afstemning");

// admin.php
define("_ADMINISTRATION","Administration");
define("_NOADMINYET","Der er ingen Administrationkontoer endnu. Forsæt for at oprette Super Bruger:");
define("_CREATEUSERDATA","Vil du oprette en normal bruger med de samme data?");
define("_ADMINLOGIN","Admin logind");
define("_ADMINID","Admin ID");
define("_EMAIL","E-mail");
define("_SUBMIT","Send");
define("_YOUARELOGGEDOUT","Du er nu logget ud!");
define("_PASSWDNOMATCH","Kodeordene er ikke ens. Gå tilbage og prøv igen");
define('_LOGIN_REMEMBERME','Husk mig?');
define('_ADMINMENU_LOGOUT','Administration Menu Logud');
define('_PASSWORD_MALFORMED','Venligst inkluder mindst et tal, et stort bogstav og et lille bogstav i dit kodeord');

// admins.php
define("_AUTHORSADMIN","Administratorer");
define("_NAME","Navn");
define("_REQUIRED","(obligatorisk)");
define("_MODIFYINFO","Rediger information");
define("_DELAUTHOR","Slet administrator");
define("_ADDAUTHOR","Tilføj ny administrator");
define("_PERMISSIONS","Rettigheder");
define("_SUPERUSER","Superbruger");
define("_SUPERWARNING","ADVARSEL: hvis Superbruger er valgt får administratoren fuld adgang til alt!");
define("_ADDAUTHOR2","Tilføj administrator");
define("_RETYPEPASSWD","Skriv kodeordet igen");
define("_FORCHANGES","(Kun for ændringer)");
define("_COMPLETEFIELDS","Du skal udfylde alle obligatoriske felter");
define("_CREATIONERROR","Det opstod en fejl ved oprettelsen af administrator");
define("_AUTHORDEL","Slet administrator");
define("_PUBLISHEDSTORIES","Denne administrator har publisert artikler");
define("_SELECTNEWADMIN","Vælg Venligst en ny administrator for at beholde dem");
define("_GODNOTDEL","(GOD kontoen kan ikke slettes)");
define("_MAINACCOUNT","God Admin*");
define("_USERS","Medlemmer");

// banners.php
define("_BANNERSADMIN","Banneradministration");
define("_DELETEBANNER","Slet Banner");
define("_SURETODELBANNER","Er du sikker på at du vil slette denne Banner?");
define("_EDITBANNER","Editere Banner");

// blocks.php
define("_BLOCKSADMIN","Administrere blokke");
define("_CENTER","Center");
define("_CENTERUP","Center op");
define("_CENTERDOWN","Center ned");
define("_BLOCKFILE","(Blok fil)");
define("_BLOCKFILE2","FIL");
define("_BLOCKSYSTEM","SYSTEM");
define("_ADDNEWBLOCK","Tilføj en ny blok");
define("_RSSFILE","RSS/RDF filadresse");
define("_ONLYHEADLINES","(Kun for overskrifter)");
define("_REFRESHTIME","Opdateringsinterval");
define("_CREATEBLOCK","Gem blok");
define("_EDITBLOCK","Redigere blok");
define("_BLOCK","Blok");
define("_SAVEBLOCK","Gem blok");
define("_BLOCKACTIVATION","Blokaktivering");
define("_BLOCKPREVIEW","Dette er en forhåndsvisning af blokken");
define("_WANT2ACTIVATE","Vil du aktivere denne blok?");
define("_ARESUREDELBLOCK","Er du sikker på at du vil slette blokken");
define("_BLOCKUP","Blok OP");
define("_BLOCKDOWN","Blok NED");
define("_TITLE","Titel");
define("_POSITION","Position");
define("_WEIGHT","vægt");
define("_STATUS","Status");
define("_LEFTBLOCK","Venstreblok");
define("_LEFT","Venstre");
define("_RIGHTBLOCK","Højreblok");
define("_RIGHT","Højre");
define("_TYPE","Type");
define("_CUSTOM","Egendefineret");
define("_FILENAME","Filnavn");
define("_FILEINCLUDE","(Vælg en blok som skal inkluderes. Alle andre felter vil ignoreres)");

// comments.php
define("_REMOVECOMMENTS","Slet kommentarer");
define("_SURETODELCOMMENTS","Er du sikker på at du vil slette den valgte kommentar og alle svarene på denne?");

// database.php
define("_SAVEDATABASE","Lav en sikkerheds kopi af databasen");

// encyclopedia.php, content.php
define("_CURRENTSTATUS","Nuværende status");
define("_ACTIVATEPAGE","Aktiver denne side?");

// history.php
define("_EPHEMADMIN","Dagens Ord administration");
define("_ADDEPHEM","Tilføj Dagens Ord");
define("_EPHEMDESC","Beskrivelse af Dagens Ord");
define("_EPHEMMAINT","Administration af Dagens Ord (Rediger/Slet):");
define("_EPHEMEDIT","Rediger Dagens Ord");
define('_EPHEMDELETE','Slet Dagens Ord');

// headlines.php
define("_RSSFAIL","Der opstod et problem med RSS filadressen");
define("_RSSTRYAGAIN","Kontroller adressen og RSS filnavnet og prøv igen.");
define("_RSSCONTENT","(RSS/RDF indhold)");
define("_IFRSSWARNING","Hvis du udfylder adressefeltet kommer indholdet du skriver ikke til at vises!");
define('_SETUPHEADLINES','\'Vælg Egendefineret\' og skriv adressen eller vælg en website fra listen for at indsætte deres overskrifter)');
define("_HEADLINESADMIN","Rubrikadministration");
define("_ADDHEADLINE","Tilføj rubrik");
define("_EDITHEADLINE","Rediger rubrikker");
define("_SURE2DELHEADLINE","ADVARSEL: Er du sikker på at du vil slette denne rubrik?");

// messages.php
define("_MESSAGESADMIN","Beskedadministration");
define("_MESSAGETITLE","Titel");
define("_MESSAGECONTENT","Indhold");
define("_ALLMESSAGES","Oversigt over beskeder");
define("_EDITMSG","Rediger besked");
define("_ADDMSG","Tilføj besked");
define("_REMOVEMSG","Er du sikker på at du vil slette denne besked ? ");
define("_CHANGEDATE","Ændre startdato til i dag?");
define("_IFYOUACTIVE","(Hvis du aktiverer denne besked nu sættes startdato til i dag)");

// modules.php
define("_MODULESADMIN","Moduler administration");
define("_HOMECONFIG","Indstillinger for forsiden");
define("_MODULESADDONS","Moduler og addons");
define("_INHOME","På Forsiden");
define("_MODULEHOMENOTE","<b>-= ADVARSEL =-</b><br>Modul i <b>fed</b> repræsenterer modulen du har lagt på forsiden..<br>Du kan ikke deaktivere eller sætter restriktioner på denne modul mens den er standardmodul!<br>Hvis du sletter modulens mappe vil du se en fejlmelding på forsiden.<br>Denne modul er også blevet erstattet af link <i>Hjem</i> i moduler-blokken.");
define("_PUTINHOME","Tilføj på forsiden");
define("_SURETOCHANGEMOD","Er du sikker på at du vil ændre din forside fra");
define('_NOTINMENU','[ <strong>&middot;</strong> ] betyder at en modul hvis navn og link ikke bliver synlige i modul-blokken');
define("_SHOWINMENU","Vises i modulblokken?");
define("_CUSTOMTITLE","Egendefineret titel");
define("_MODULEEDIT","Redigering af Moduler");
define('_VERSION','Version');
define('_UPGRADE','Upgrade to %s');
define('_DBSIZE','DB størrelse');
define('_CVS_EXPLAIN','Det ser ud til at dette modul har en CVS folder. CVS betyder Concurrent Versioning System.<br />
Igennem CVS kan du modtage sidste version af filer meget let.<br />
<b>MEN</b> sidste version af en fil kan have fejl siden den ikke er en "officiel" version.<br />
Hvis du er kendt med PHP kan du køre en opdatering på filene ved at klikke på linket nedenfor.<br />
Glem ikke at tage en backup først!!!');
define('_CVS_UPDATE','Opdatere CVS filer');

// newsletter.php
define("_FROM","Fra");
define("_STAFF","Stab");
define('_NL_RECIPS','Modtagere');
define('_SUBSCRIBEDUSERS','Abonnerende Medlemmer');
define('_NL_ALLUSERS','Alle Medlemmer');
define('_NL_ADMINS','Administratorer');
define('_NL_REGARDS','Venlig Hilsen');
define('_DISCARD','kassere');
define("_REVIEWTEXT","Vær venlig at tjekke hele teksten, for eventuelle stavefejl:");
define('_MANYUSERSNOTE', 'VIGTIGT! Der er mange brugere der vil modtage denne tekst. Vær venlig med at vente til at scriptet at færdig med sin operation. Dette kan tage helt op til et par minutter!');
define('_NL_NOUSERS','Den valgte gruppe til at modtage dette nyhedsbrev har ingen medlemmer<br />Gå tilbage og vælg en anden gruppe');
define('_NUSERWILLRECEIVE','Brugerne vil modtage denne Nyhedsbrev.');
define('_NLUNSUBSCRIBE',"Du modtager dette nyhedsbrev fordi du har tilmeldt dig til vores nyhedsbrev fra vores site\n\nDu kan framelde dig når som helst ved at klikke <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">her</a>\n\nHvis Du har brug for hjælp vær da venlig at kontakte <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">vores administrator</a>");
define("_NEWSLETTERSENT","Nyhedsbrevet er sendt.");

// referers.php
define("_WHOLINKS","Hvem linker til os?");
define("_DELETEREFERERS","Slet linkene");

// settings.php
define("_SITECONFIG","Systemopsætning");
define("_GENSITEINFO","Generele websiteoplysninger");
define('_SITENAME','Websidens Navn');
define("_SITEURL","Websitets internetadresse");
define('_SITELOGO','Fil navnet på min site\'s logo (gemt i /images/)');
define("_SITESLOGAN","Slogan");
define("_STARTDATE","Startdato for dette site");
define("_ADMINEMAIL","Administrators e-mailadresse");
define("_ITEMSTOP","Antal emner på top-siden");
define("_STORIESHOME","Antal artikler i hovedsektionen");
define("_OLDSTORIES","Antal artikler i blokken med gamle artikler/nyheder");
define("_ALLOWANONPOST","Tillad anonyme brugere at sende indlæg?");
define("_DEFAULTTHEME","Standard Theme");
define("_SHOWSEC","Vis Sikkerhedskode");
// maintenance
define("_MAINTENANCE", "Vedligehold");
define("_MESSAGE", "Besked");
// multilingual
define("_MULTILINGUALOPT","Multi-sprog indstillinger");
define("_SELLANGUAGE","Standard sprog");
define("_LOCALEFORMAT","Tidsformat");
define("_ACTMULTILINGUAL","Aktiver Multi-sprog? ");
define("_ACTUSEFLAGS","Vis flag istedet for rulegardiner? ");
// banners
define("_BANNERSOPT","Banner indstillinger");
define("_ACTBANNERS","Aktivere bannere?");
// footer
define("_FOOTERMSG","Undertekst");
define("_FOOTERLINE1","Undertekst line 1");
define("_FOOTERLINE2","Undertekst line 2");
define("_FOOTERLINE3","Undertekst line 3");
// backend
define("_BACKENDCONF","Backend konfiguration");
define("_BACKENDTITLE","Backend titel");
define("_BACKENDLANG","Backend sprog");
// mail stories
define("_MAIL2ADMIN","Besked til administrator ved nye indlæg");
define("_NOTIFYSUBMISSION","Giv besked om nye indlæg via e-mail?");
define("_EMAIL2SENDMSG","E-mailadresse hvortil beskeden skal tilsendes");
define("_EMAILSUBJECT","Emne på e-mail");
define("_EMAILMSG","Besked i e-mailen");
define("_EMAILFROM","Afsender");
// comments
define("_COMMENTSOPT","Kommentarfunktioner");
define("_COMMENTSLIMIT","Bytesgrænse for kommentarer");
define("_COMMENTSMOD","Kommentarændring");
define("_MODADMIN","Moderering af administratorer");
define("_MODUSERS","Moderering af medlemmer");
define("_NOMOD","Ingen moderering");
// adminmenu
define("_GRAPHICOPT","Grafikfunktioner");
define("_BOTH", "Begge");
define("_GRAPHICAL", "Grafisk");
define("_SIDEBLOCK", "Sideblok");
// miscellaneous
define("_MISCOPT","Diverse andre indstillinger");
define("_ACTIVATEHTTPREF","Anvend sidehenvisningssystemet (Hvem linker til sitet)?");
define("_MAXREF","Hvor mange henvisere skal der maksimalt vises?");
define("_COMMENTSPOLLS","aktiver kommentarer i afstemninger?");
define("_COMMENTSARTICLES","Aktiver kommentarer i artikler?");
// censor
define("_CENSOROPTIONS","Censurerings Indstillinger");
define("_CENSORMODE","Censurerings tilstand");
define("_NOFILTERING","Ingen filtrering");
define("_EXACTMATCH","Præcis det samme match");
define("_MATCHBEG","Matcher ord i starten");
define("_MATCHANY","Matcher overalt i teksten");
define("_CENSORREPLACE","Udskift censoreret ord med:");
// email
define('_EMAILOPTIONS', 'Indstillinger for E-mail');
define("_ALLOW_HTML_EMAIL", "Tillade html i E-mail");
define("_USE_SMTP", "Bruge SMTP for E-mail frem for PHP");
define('_SMTP_HOST', 'Address of smtp host(smtp.host.tld)');
define("_USE_SMTP_AUTH", "Serveren kræver SMTP godkendelse");
define("_SMTP_USER_NAME", "SMTP Brugernavn");
define("_SMTP_USER_PASS", "SMTP Kodeord");

// cpg_adminmenu.php
define("_ADMINMENU","Administrationsmenu");
define("_ADMINLOGOUT","Log ud / Afslut");
define("_AMENU1", "Generelt");
define("_AMENU2", "Medlemmer");
define("_AMENU3", "Beskeder");
define("_AMENU4", "Forum");
define("_AMENU5", "Informativ");
define("_AMENU6", "Linking");
define("_AMENU9", "Moduler");
// menu items
define("_PREFERENCES","Indstillinger");
define("_DATABASE","Database");
define("_BLOCKS","Blokke");
define("_MODULES","Moduler");
define("_EDITADMINS","Admins");
define("_MESSAGES","Beskeder");
define("_BANNERS","Bannere");
define("_HTTPREFERERS", "HTTP Referers");
define("_EDITUSERS","medlemmer");
define("_USERSCONFIG", "Bruger Opsætning");
define("_NEWSLETTER","Nyhedsbrev");
define("_SUBMISSIONS", "Forslag");
define("_ADDSTORY","Tilføj ny artikel");
define("_TOPICS", "Emner");
define("_ADMPOLLS","Afstemninger");
define("_EPHEMERIDS", "Dagens Ord");
define("_REVIEWS","Anmeldelser");
define("_ENCYCLOPEDIA","Opslagsværk");
define("_SURVEYS","Afstemninger");
define("_SECTIONS","Sektioner");
define("_ARTICLES","Artikler");
define("_FAQ","FAQ");
define("_DOWNLOAD","Downloads");
define("_WEBLINKS","Weblinks");
define("_CONTENT","Indhold");
define('_REPORTABUG','Rapporter en Bug');
//coppermine admin
define('_W_INSTALL','Hvilken installation?');
define('_W_PAGE','Hvilken Side?');

//errors for cpg_error
define('_ERROR','FEJL');
define('_SEC_ERROR','Sikkerheds Fejl');
define('_ERROR_NOT_SET','%s var ikke sat');
define('_ERROR_NO_POST','Post fra andre værter er ikke tilladt...');
define('_ERROR_NO_GET','GET anmodning er ikke tilladt for denne funktion...');
define('_ERROR_BAD_CHAR','De karakterer du prøver at inkluder i din %s anmodning er ikke tilladt...');
define('_ERROR_BAD_LINK','Du prøver at få adgang til denne side igennem et falsk link...');
define('_ERROR_NONE_TO_DISPLAY','Der er ingen %s at vise');
define('_ERROR_DELETE_CONF','Er du sikker på at du vil slette %s?');
define('_ERROR_NO_EXIST','%s eksistere ikke');
define('_TASK_COMPLETED', 'opgaven fuldføret!');
?>
