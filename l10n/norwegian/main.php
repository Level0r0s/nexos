<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/norwegian/main.php,v $
  $Revision: 9.56 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:54 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','no');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A %d %B @ %H:%M');
define('_DATESTRING2','%A, %d %B');
define('_DATESTRING3','%d-%B-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%2$s. %1$s %3$s');

define('_NEXTPAGE','Neste side');
define('_PREVIOUSPAGE','Forrige side');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Søk');
define('_LOGIN','Logg inn');
define('_WRITES','skriver');
define('_POSTEDON','Publisert på');
define('_NICKNAME','Brukernavn');
define('_PASSWORD','Passord');
define('_WELCOMETO','Velkommen til');
define('_EDIT','Rediger');
define('_DELETE','Slett');
define('_POSTEDBY','Skrevet av');
define('_READS','Lest');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Tilbake</a>' : '<a href="javascript:history.go(-1)">Tilbake</a>').' ]');
define('_COMMENTS','Kommentarer');
define('_PASTARTICLES','Tidligere artikler');
define('_OLDERARTICLES','Eldre artikler');
define('_BY','av');
define('_ON',' ');
define('_LOGOUT','Logg ut');
define('_WAITINGCONT','Ventende innhold');
define('_WREVIEWS','Anmeldelser');
define('_WLINKS','Linker');
define('_ONEDAY','På en dag som denne...');
define('_ASREGISTERED','Er du ikke medlem ennå? Du kan enkelt <a href="'.getlink("Your_Account").'">bli medlem</a>. Som registrert medlem har du flere fordeler, og det er gratis å registrere seg!');
define('_MENUFOR','Meny for');
define('_NOBIGSTORY','Det finnes ingen nyheter fra i dag!');
define('_BIGSTORY','Dagens mest leste nyhet er:');
define('_SURVEY','Undersøkelse');
define('_POLLS','Avstemninger');
define('_PCOMMENTS','Kommentarer:');
define('_RESULTS','Resultat');
define('_HREADMORE','les mer...');
define('_CURRENTLY','Det er for tiden,');
define('_GUESTS','gjest(er) og');
define('_MEMBERS','medlem(mer) online.');
define('_YOUARELOGGED','Du er innlogget som');
define('_YOUHAVE','Du har');
define('_PRIVATEMSG','privat(e) beskjed(er).');
define('_YOUAREANON','Du er en anonym bruker. Du kan registrere deg gratis ved å fylle ut <a href="'.getlink("Your_Account").'">dette skjemaet</a>');
define('_NOTE','Merk:');
define('_ADMIN','Administrator');
define('_WERECEIVED','Vi har hatt');
define('_PAGESVIEWS','sidevisninger siden');
define('_TOPIC','Emne det skal postes under');
define('_UDOWNLOADS','Nedlastinger');
define('_VOTE','Stem');
define('_VOTES','Stemmer');
define('_MVIEWADMIN','Se: Kun administratorer');
define('_MVIEWUSERS','Se: Kun medlemmer');
define('_MVIEWANON','Se: Kun anonyme besøkende');
define('_MVIEWALL','Se: Alle besøkende');
define('_EXPIRELESSHOUR','Utløper innen en time');
define('_EXPIREIN','Utløper om');
define('_UNLIMITED','Ubegrenset');
define('_HOURS','Timer');
define('_RSSPROBLEM','Det er et problem med rubrikkene fra dette webstedet');
define('_SELECTLANGUAGE','Velg språk');
define('_SELECTGUILANG','Velg språk for grensesnitt:');
define('_NONE','Ingen');
define('_BLOCKPROBLEM','<div align="center">Det er et problem med denne blokken.</div>');
define('_BLOCKPROBLEM2','<div align="center">Det er ikke innhold for denne blokken.</div>');
define('_MODULENOTACTIVE','Denne modulen er ikke aktiv!');
define('_NOACTIVEMODULES','Inaktive moduler');
define('_MODULENOEXIST','Vi beklager, men filen %s eksisterer ikke');
define('_FORADMINTESTS','(for Admin-tester)');
define('_BBFORUMS','Forum');
define('_ACCESSDENIED','Adgang nektet');
define('_RESTRICTEDAREA','Du prøver å nå et område du ikke har tilgang til');
define('_MODULEUSERS','Denne delen av våre sider er kun for <i>registrerte brukere</i>.<br /><br />');
define('_MODULEUSERS2','Du kan registrere deg gratis ved å klikke <a href="'.getlink("Your_Account&amp;file=register").'">her</a>, da vil du få<br />tilgang til denne delen uten restriksjoner. Takk.<br /><br />');
define('_MODULESADMINS','Beklager, men denne delen av våre sider er kun for <i>administratorer</i><br /><br />');
define('_MODULESGROUPS','gruppe tilgang behøves');
define('_HOME','Hjem');
define('_HOMEPROBLEM','Det ser ut som hjemmesiden har blitt borte');
define('_ADDAHOME','Legg inn en ny standard modul for hjemmesiden');
define('_HOMEPROBLEMUSER','Vi har et problem med sidene nå. Vennligst prøv igjen senere.');
define('_MORENEWS','Mer i nyhets-seksjonen');
define('_ALLCATEGORIES','Alle kategorier');
define('_SPAMGUARDPROTECTED','SpamGuard har blokkert denne E-Posten fra å bli sendt');
define('_M_CHARS','Maksimum: %s tegn');

define('_SYS_MESSAGE','Systemmelding');
define('_SYS_MESSAGES','Systemmeldinger');
define('_SYS_MAINTENANCE','Du kjører under vedlikeholdsmodus');
define('_SYS_DEMO','Du kjører under Administrator demostrasjonsmodus<br />Du kan ikke foreta endringer i databasen<br /><a href="'.adminlink('logout').'">Logg meg ut!</a>');

define('_DATE','Dato');
define('_HOUR','Time');
define('_UMONTH','Måned');
define('_YEAR','År');
define('_JANUARY','Januar');
define('_FEBRUARY','Februar');
define('_MARCH','Mars');
define('_APRIL','April');
define('_MAY','Mai');
define('_JUNE','Juni');
define('_JULY','Juli');
define('_AUGUST','August');
define('_SEPTEMBER','September');
define('_OCTOBER','Oktober');
define('_NOVEMBER','November');
define('_DECEMBER','Desember');

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
define('_BPM','Private Meldinger');
define('_BUNREAD','Ulest');
define('_BREAD','Lest');
define('_BMEMP','Medlemskap');
define('_BLATEST','Siste');
define('_BTD','Ny i dag');
define('_BYD','Ny i går');
define('_BOVER','Totalt');
define('_BVISIT','Personer pålogget');
define('_BVIS','Besøkende');
define('_BMEM','Medlemmer');
define('_BTT','Totalt');
define('_BON','Online nå');
define('_BREG','Registrer');
define('_BROADCAST','Kringkast offentlige beskjeder');
define('_BROADCASTFROM','Offentlig beskjed fra');
define('_TURNOFFMSG','Slå av offentlige beskjeder');
define('_JOURNAL','Blog');
define('_READMYJOURNAL','Les min Blog');
define('_ADD','Legg til');
define('_YES','Ja');
define('_NO','Nei');
define('_INVISIBLEMODULES','Usynlige moduler');
define('_ACTIVEBUTNOTSEE','(Aktiv, men usynlig link)');
define('_BOTS','Søkeroboter');

define('_UM','Dragonfly Oppdaterings-Monitor');
define('_UM_F','Kunne ikke kontakte oppdateringsservice. Vennligst prøv igjen senere.');
define('_UM_G','Du bruker siste versjon av Dragonfly');
define('_UM_R','Vennligst <a href="%2$s" target="_blank">oppdater</a> til Dragonfly %1$s');

define('_TEAM','Team');
define('_LINKAPPROVEDMSG','Gratulerer! Linken du har gitt oss har blitt godkjent, vennligst link tilbake til oss.');
define('_MODREQLINKS','Mod. linker');
define('_BROKENLINKS','Ødelagte linker');
define('_MODREQDOWN','Mod. nedlastinger');
define('_BROKENDOWN','Ødelagte nedlastinger');
define('_PAGEGENERATION','Sidegenerering:');
define('_SECONDS','Sekunder');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Side Generering tok %1$s sekunder og %2$s Database Oppkall på %3$s sekunder');
define('_YOUHAVEONEMSG','Du har 1 ny privat melding');
define('_NEWPMSG','Nye private meldinger');
define('_CONTRIBUTEDBY','Sendt inn av');
define('_CHAT','Chat');
define('_REGISTERED','Registrert');
define('_CHATGUESTS','Gjester');
define('_USERSTALKINGNOW','Brukere som snakker nå');
define('_ENTERTOCHAT','Kom inn for å chatte');
define('_CHATROOMS','Tilgjengelige rom');
define('_ALLTOPICS','Alle emner');
define('_ASSOTOPIC','Tilknyttede emner');
define('_HELLO','Hallo');
define('_ALL','Alle');
define('_URL','URL');
define('_SUBJECT','Emne');
define('_PREVIEW','Forhåndsvis');
define('_SEND','Send');
define('_ANONYMOUS','Anonym');
define('_BREADCRUMB', 'Symbol ved Splitting av overskrift');
define('_BC_DELIM',isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&raquo;');
define('_RESET','Nullstill');
define('_AT','');
define('_LASTMSGS','Siste %s Forum Posteringer');
define('_LASTPOSTBY','Siste postering av %1$s i %2$s %3$s');
define('_PRINTER','Utskriftsvennlig side');

define('_CREDITS_TITLE','Kreditt');
define('_CREDITS_PRODUCT','Produkt');
define('_CREDITS_DESC','Beskrivelse');
define('_CREDITS_AUTHORS','Forfatter(e)');

define('_PP_TITLE','Fortrolighetsavtale');
define('_PP_MODIFY','Endre denne teksten');

define('_SENDERNAME','Senderens Navn');
define('_SENDEREMAIL','Senderens E-Post Adresse');
define('_RECIPIENTNAME','Mottakers Navn');
define('_RECIPIENTEMAIL','Mottakerst E-Post Adresse');

define('_REASONS_0','Ingen');
define('_REASONS_1','Off Topic');
define('_REASONS_2','Banning');
define('_REASONS_3','Hensynsløs');
define('_REASONS_4','Overflødig');
define('_REASONS_5','Innsiktsfull');
define('_REASONS_6','Interessant');
define('_REASONS_7','Informasjonsrik');
define('_REASONS_8','Morsom');
define('_REASONS_9','Overrangert');
define('_REASONS_10','Underrangert');

/* My Account Tools Block */
define('_TB_BLOCK','Konto Verktøy');
define('_TB_TASKS','Oppgaver');
define('_TB_INFO','Informasjon');
define('_TB_PROFILE_INFO','Offentlig profil');
define('_TB_EDIT_PROFILE','Profil informasjon');
define('_TB_EDIT_REG','Registrerte detaljer');
define('_TB_EDIT_PRIVATE','Privat informasjon');
define('_TB_EDIT_AVATAR','Avatar');
define('_TB_DELETE','Slett min konto');
define('_TB_CONFIG','Konfigurasjon');
define('_TB_EDIT_PREFS','Innstillinger');
define('_TB_EDIT_HOME','Hjemmeside innstillinger');
define('_TB_EDIT_COMM','Kommentar innstillinger');
define('_TB_PERSONAL','Personlig');
define('_TB_PERSONAL_GALLERY','Galleri');
define('_TB_PERSONAL_JOURNAL','Blogg');
define('_TB_PRIVMSGS','Private Beskjeder');
define('_TB_PRIVMSGS_INBOX','Innboks');
define('_TB_PRIVMSGS_OUTBOX','Utboks');
define('_TB_PRIVMSGS_SENTBOX','Sendtboks');
define('_TB_PRIVMSGS_SAVEBOX','Oppbevaringsboks');
define('_TB_PRIVMSGS_SEND','Send beskjed');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','Brukerinfo');
define('_SECURITYCODE','Sikkerhetskode');
define('_TYPESECCODE','Skriv sikkerhetskode');
define('_MEMBERSOPTIONS','Medlemmer');
define('_READSEND','Les dine private beskjeder. Send beskjeder til andre. ');
define('_INBOX','Innboks');
define('_NEW','Ny');
define('_ACCOUNTOPTIONS','Din konto. Endre innstillinger og les dine beskjeder.');
define('_LOGOUTACCT','Logg ut av denne kontoen.');
define('_LOGOUTADMINACCT','Logg ut av admin kontoen.');
define('_BLOGIN','Din konto');
define('_BFLOGIN','Forumprofil');
define('_BHID','Skjult');
define('_WHOWHERE','Hvem er hvor');
define('_STAFFONL','Administratorer pålogget');
define('_STAFFNONE','Ingen administratorer er pålogget!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Fellesskap');
define('_ContentLANG','Innhold');
define('_coppermineLANG','Foto Galleri');
define('_CPGlangLANG','Hjelp med Oversettelse');
define('_DownloadsLANG','Nedlastninger');
define('_EncyclopediaLANG','Leksikon');
define('_ForumsLANG','Forum');
define('_ContactLANG','Kontakt oss');
define('_FAQLANG','FAQ - Hjelp');
define('_BlogsLANG','Blogg');
define('_Members_ListLANG','Medlemsliste');
define('_NewsLANG','Nyheter');
define('_ReviewsLANG','Anmeldelser');
define('_SearchLANG','Søk');
define('_StatisticsLANG','Statistikker');
define('_Stories_ArchiveLANG','Nyhetsarkiv');
define('_Submit_NewsLANG','Send inn nyheter');
define('_SurveysLANG','Spørreundersøkelser');
define('_TopLANG', 'Topp '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Emner');
define('_Private_MessagesLANG','Private Meldinger');
define('_Tell_a_FriendLANG','Anbefall Oss');
define('_Web_LinksLANG','Linker');
define('_Your_AccountLANG','Min Konto');
define('_CPG_EventsLANG','Kalender');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Språk');
define('_SmiliesLANG', 'Smilefjes');
define('_GroupsLANG','Grupper');
define('_RanksLANG', 'Rangeringer');
define('_HeadlinesLANG', 'Rubrikker');

define('_COMMUNICATION','Kommunikasjon');
define('_FRIENDS','Venner');
define('_STORE','Butikk');
define('_PRODUCTS','Produkter');
define('_DONATE','Donere');
define('_HELP','Hjelp');
define('_GALLERIES','Gallerier');
define('_DOCS','Dokumentasjon');
define('_RULES','Regler & Restriksjoner');
define('_MENU','Hovedmeny');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','Du <strong>abonnerer</strong> på<br />vårt nyhetsbrev');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','Du abonnerer <strong>ikke</strong> på<br />vårt nyhetsbrev');
define('_NEWSLETTERBLOCKREGISTER','Du må være en<br /><strong>registrert bruker</strong><br />for å motta vårt nyhetsbrev');
define('_NEWSLETTERBLOCKSUBSCRIBE','Abonnere');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Avslutte Abonnement');
define('_NEWSLETTERBLOCKREGISTERNOW','Registrer deg nå!');
/* END Newsletter Block */

/* START class phpmailer lang array */
$PHPMAILER_LANG = array();
$PHPMAILER_LANG['provide_address'] = 'Du må angi minst en E-Post adresse til motaker.';
$PHPMAILER_LANG['mailer_not_supported'] = ' mailer støttes ikke.';
$PHPMAILER_LANG['execute'] = 'Kunne ikke kjøre: ';
$PHPMAILER_LANG['instantiate'] = 'Kunne ikke initiere E-Post funksjon.';
$PHPMAILER_LANG['authenticate'] = 'SMTP Feil: Kunne ikke godkjenne.';
$PHPMAILER_LANG['from_failed'] = 'Følgende avsender adresse er feil: ';
$PHPMAILER_LANG['recipients_failed'] = 'SMTP Feil: Følgende motaker er feil: ';
$PHPMAILER_LANG['data_not_accepted'] = 'SMTP Feil: Data er ikke godkjent.';
$PHPMAILER_LANG['connect_host'] = 'SMTP Feil: Kunne ikke nå frem til SMTP host.';
$PHPMAILER_LANG['file_access'] = 'Kan ikke nå filen: ';
$PHPMAILER_LANG['file_open'] = 'Fil Feil: Kan ikke åpne filen: ';
$PHPMAILER_LANG['encoding'] = 'Ukjent encode-format: ';
/* END class phpmailer lang array */

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_SAVECHANGES','Lagre endringer');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Språk');
define('_FUNCTIONS','Funksjoner');
define('_SHOW','Vis');
define('_TO','Til');
define('_DAY','Dag');
define('_LAST','Siste');
define('_ACTIVE','Aktiv');
define('_DEACTIVATE','Deaktiver');
define('_INACTIVE','Inaktiv');
define('_ACTIVATE','Aktivere');
define('_ACTIVATE2','Aktivere?');
define('_VIEW','Kan leses av');
define('_VIEWPRIV','Hvem kan lese dette?');
define('_MVADMIN','Kun administratorer');
define('_MVUSERS','Kun medlemmer');
define('_MVANON','Kun anonyme');
define('_MVALL','Alle besøkende');
define('_IMAGE','Bilde');
define('_GO','Gå!');
define('_OPTION','Valgfritt');
define('_SUBCATEGORY','Underkategori');
define('_CATEGORY','Kategori');
define('_ID','ID');
define('_EXPIRATION','Utløpsdato');
define('_DAYS','dager');
define('_WARNING','Advarsel');
define('_POLLTITLE','Avstemningstittel');
define('_POLLEACHFIELD','Angi hver valgmulighet på egen linje');
define('_ADDCATEGORY','Legg til ny Kategori');
define('_PAGEBREAK','Hvis du vil ha flere sider, kan du skrive <strong>&lt;!--pagebreak--&gt;</strong> hvor du vil ha sideskift.');
define('_SIGNATURE','Signatur');
define('_DESCRIPTION','Beskrivelse');
define('_EDITCATEGORY','Redigere kategori');
define('_IN','i');
define('_DESCRIPTION255','Beskrivelse: (Maks 255 tegn)');
define('_MODCATEGORY','Endre en kategori');
define('_SUBMITTER','Lagt inn av');
define('_VISIT','Besøk');
define('_EXTENDEDTEXT','Forlenget tekst');
define('_CHECKCATEGORIES','Sjekk kategorier');
define('_INCLUDESUBCATEGORIES','(inkluder Under-Kategorier)');
define('_CHECKSUBCATEGORIES','Sjekk Under-Kategorier');
define('_VALIDATELINKS','Godkjenne linker');
define('_FAILED','(vennligst vær tålmodig)');
define('_BEPATIENT','(vennligst vær tolmodig)');
define('_VALIDATINGCAT','Godkjenner Kategori (og alle Under-Kategorier)');
define('_VALIDATINGSUBCAT','Godkjenner Under-Kategori');
define('_OK','Ok!');
define('_CHECK','Sjekk');
define('_IGNORE','Ignorer');
define('_HITS','Treff');
define('_FILESIZE','Filstørrelse');
define("_EZTHEREIS","Det er");
define("_EZSUBCAT","underkategorier");
define("_EZATTACHEDTOCAT","under denne kategorien");
define("_EZBROKENLINKS","Ødelagte Linker");
define("_DELEZLINKCATWARNING","ADVARSEL : Er du sikker på at du vil slette denne kategorien?<br /> Alle underkategorier og linker vil også bli slettet!");

// index.php
define('_DEFHOMEMODULE','Standard modul for førstesiden');
define('_MODULEINHOME','Modul lastet på førstesiden:');
define('_CHANGE','Endre');
define('_WHOSONLINE','Hvem er online');
define('_NP_ADMIN','Filstørrelse');
define('_NP_LOCKED','Notisblokk har blitt stengt<br />Kun hoved administrator (super bruker) kan åpne den');
define('_NP_SAVE','Lagre Notater');
define('_NP_UNLOCK','Åpne Notisblokk');
define('_NP_LOCK','Stenge Notisblokk');
// news
define('_STICKY','Prioriterte Artikler');
define('_ARTICLEUP','Artikkel Opp');
define('_ARTICLEDOWN','Artikkel Ned');
define('_UNSTICK','Tilbake til normal prioritet');
define('_STICK','Prioritert');
define('_AUTOMATEDARTICLES','Programsatte artikler');
define('_STORYID','Nyhets ID');
define('_CURRENTPOLL','Nåværende avstemning');

// admin.php
define('_ADMINISTRATION','Administrasjon');
define('_NOADMINYET','Det finnes ingen administrasjonskontoer ennå. Fortsett for å opprette Super Bruker:');
define('_CREATEUSERDATA','Vil du opprette en normal bruker med de samme dataene?');
define('_ADMINLOGIN','Admin innlogging');
define('_ADMINID','Admin ID');
define('_EMAIL','E-post');
define('_SUBMIT','Send');
define('_YOUARELOGGEDOUT','Du har nå logget ut!');
define('_PASSWDNOMATCH','Passordene er ikke like. Gå tilbake og prøv igjen');
define('_LOGIN_REMEMBERME','Husk meg?');
define('_ADMINMENU_LOGOUT','Administrasjon Meny Logg ut');
define('_PASSWORD_MALFORMED','Vennligst inkluder minst ett nummer, en stor bokstav og en liten bokstav i ditt passord');

// admins.php
define('_AUTHORSADMIN','Administratorer');
define('_NAME','Navn');
define('_REQUIRED','(obligatorisk)');
define('_MODIFYINFO','Rediger informasjon');
define('_DELAUTHOR','Slett administrator');
define('_ADDAUTHOR','Legg til ny administrator');
define('_PERMISSIONS','Rettigheter');
define('_SUPERUSER','Superbruker');
define('_SUPERWARNING','ADVARSEL: om Superbruker er valgt kommer administratoren til å få full tilgang til alt!');
define('_ADDAUTHOR2','Legg til administrator');
define('_RETYPEPASSWD','Skriv passordet igjen');
define('_FORCHANGES','(Kun for endringer)');
define('_COMPLETEFIELDS','Du må fylle ut alle obligatoriske felt');
define('_CREATIONERROR','Det oppstod en feil ved opprettelsen av administrator');
define('_AUTHORDEL','Slett administrator');
define('_PUBLISHEDSTORIES','Denne Administratoren har publisert artikler');
define('_SELECTNEWADMIN','Vennligst velg en ny administrator for å beholde de');
define('_GODNOTDEL','*(Superbruker kontoer kan ikke slettes)');
define('_MAINACCOUNT','Superbruker*');
define('_USERS','Brukere');

// banners.php
define('_BANNERSADMIN','Administrasjon av Bannere');
define('_DELETEBANNER','Slett Banner');
define('_SURETODELBANNER','Er du sikker på at du vil slette denne Banneren?');
define('_EDITBANNER','Redigere Banner');

// blocks.php
define('_BLOCKSADMIN','Administrere blokker');
define('_CENTER','Midtstilt');
define('_CENTERUP','Midstilt opp');
define('_CENTERDOWN','Midtstilt ned');
define('_BLOCKFILE','(Blokk fil)');
define('_BLOCKFILE2','FIL');
define('_BLOCKSYSTEM','SYSTEM');
define('_ADDNEWBLOCK','Legg til en ny blokk');
define('_RSSFILE','RSS/RDF filadresse');
define('_ONLYHEADLINES','(Bare for overskrifter)');
define('_REFRESHTIME','Oppdateringsintervall');
define('_CREATEBLOCK','Lage blokk');
define('_EDITBLOCK','Redigere blokk');
define('_BLOCK','Blokk');
define('_SAVEBLOCK','Lagre blokk');
define('_BLOCKACTIVATION','Blokkaktivering');
define('_BLOCKPREVIEW','Dette er en forhåndsvisning av blokken');
define('_WANT2ACTIVATE','Vil du aktivere denne blokken?');
define('_ARESUREDELBLOCK','Er du sikker på at du vil slette blokken');
define('_BLOCKUP','Flytt Blokken et steg opp');
define('_BLOCKDOWN','Flytt Blokken et sted ned');
define('_BLOCKTOP','Flytt blokk til toppen');
define('_BLOCKBOTTOM','Flytt blokk til bunnen');
define('_TITLE','Tittel');
define('_POSITION','Posisjon');
define('_WEIGHT','Vekt');
define('_STATUS','Status');
define('_LEFTBLOCK','Venstreblokk');
define('_LEFT','Venstre');
define('_RIGHTBLOCK','Høyreblokk');
define('_RIGHT','Høyre');
define('_TYPE','Type');
define('_CUSTOM','Egendefinert');
define('_FILENAME','Filnavn');
define('_FILEINCLUDE','(Velg en blokk som skal inkluderes. Alle andre felt vil bli ignorert)');

// comments.php
define('_REMOVECOMMENTS','Slett kommentarer');
define('_SURETODELCOMMENTS','Er du sikker på at du vil slette den valgte kommentaren og alle svarene på denne?');

// database.php
define('_SAVEDATABASE','Ta sikkerhetskopi av databasen');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Nåværende status');
define('_ACTIVATEPAGE','Aktiver denne siden?');

// history.php
define('_EPHEMADMIN','Idag i Historie');
define('_ADDEPHEM','Legg til ny');
define('_EPHEMDESC','Beskrivelse');
define('_EPHEMMAINT','Se etter');
define('_EPHEMEDIT','Redigere');
define('_EPHEMDELETE','Slett');

// headlines.php
define('_RSSFAIL','Det oppstod et problem med RSS filadressen');
define('_RSSTRYAGAIN','Kontroller adressen og RSS filnavnet og prøv igjen.');
define('_RSSCONTENT','(RSS/RDF innhold)');
define('_IFRSSWARNING','Dersom du fyller ut adressefeltet kommer innholdet du skriver ikke til å vises!');
define('_SETUPHEADLINES','(Velg Egendefinert og skriv adressen eller velg en nettside fra listen for å få inn deres overskrifter)');
define('_HEADLINESADMIN','Rubrikkadministration');
define('_ADDHEADLINE','Legg til rubrikk');
define('_EDITHEADLINE','Rediger rubrikker');
define('_SURE2DELHEADLINE','ADVARSEL: Er du sikker på at du vil slette denne rubrikken?');

// messages.php
define('_MESSAGESADMIN','Beskjedsadministrasjon');
define('_MESSAGETITLE','Tittel');
define('_MESSAGECONTENT','Innhold');
define('_ALLMESSAGES','Oversikt over beskjeder');
define('_EDITMSG','Rediger beskjed');
define('_ADDMSG','Legg til beskjed');
define('_REMOVEMSG','Er du sikker på at du vil slette denne beskjeden ? ');
define('_CHANGEDATE','Endre startdato til i dag?');
define('_IFYOUACTIVE','(Om du aktiverer denne beskjeden nå, kommer startdato til å settes til i dag)');

// modules.php
define('_MODULESADMIN','Moduler administrasjon');
define('_HOMECONFIG','Innstillinger for førstesiden');
define('_MODULESADDONS','Moduler og addons');
define('_INHOME','På Førstesiden');
define('_MODULEHOMENOTE','<b>-= ADVARSEL =-</b><br />Modul i <b>fet</b> representerer modulen du har lastet på hovedsiden..<br />Du kan ikke deaktivere eller sette restriksjoner på denne modulen mens den er standardmodul!<br />Dersom du sletter modulens mappe vil du se en feilmelding på hovedsiden.<br />Denne modulen har også blitt erstattet av linken <i>Hjem</i> i moduler blokken.');
define('_PUTINHOME','Legg på førsteside');
define('_SURETOCHANGEMOD','Er du sikker på at du vil forandre din hovedside fra');
define('_NOTINMENU','[ <big><strong>&middot;</strong></big> ] betyr at en modul hvis navn og link ikke bli synlige i modul blokken');
define('_SHOWINMENU','Vises i modulblokken?');
define('_CUSTOMTITLE','Egendefinert tittel');
define('_MODULEEDIT','Redigering av moduler');
define('_VERSION','Versjon');
define('_UPGRADE','Oppgrader til %s');
define('_DBSIZE','DB størrelse');
define('_CVS_EXPLAIN','Gjennom CVS kan du motta seneste versjon av filer veldig enkelt.<br /><b>MEN</b> seneste versjon av en fil kan inneholde feil og mangler.<br />Hvis du er kjent med PHP kan du ta en oppdatering av filer ved å klikke på linken under.<br />Ikke glem å ta en sikkerhetskopi først !!!');
define('_CVS_UPDATE','Oppdatere CVS filer');
define('_LOADNEWCVS', 'Laste inn ny modul fra CVS');
define('_SUREALL', 'Er du sikker på å  %s alle %s');
define('_UPGRADEFAILED', 'Oppgraderingen feilet');
define('_EXAMPLE', 'Eksempel på bruk');

// newsletter.php
define('_FROM','Fra');
define('_STAFF','Stab');
define('_NL_RECIPS','Motakere');
define('_SUBSCRIBEDUSERS','Abonnenter');
define('_NL_ALLUSERS','Alle Medlemmer');
define('_NL_ADMINS','Administratorer');
define('_NL_REGARDS','Vennlig Hilsen');
define('_DISCARD','Angre');
define('_REVIEWTEXT','Vennligst se over nyhetsbrevet for eventuelle skrivefeil');
define('_MANYUSERSNOTE','MANGE brukere vil motta dette nyhetsbrevet. Vent til scriptet er ferdig med operasjonen.<br />Denne operasjonen kan ta noen minutter!');
define('_NL_NOUSERS','Gruppen som er valgt har ingen brukere<br />Vennligst gå tilbake og velg en annen gruppe');
define('_NUSERWILLRECEIVE','brukere vil motta dette nyhetsbrevet');
define('_NLUNSUBSCRIBE',"Vi har sendt deg denne E-Posten fordi du har valgt å motta nyhetsbrev fra vår nettside.\n\nDu kan melde deg ut av vårt nyhetsbrev når du vil ved å gå til <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">denne</a> linken\n\nHvis du vil ha ytterligere assistanse, vennligst send en E-Post til <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">vår administrator</a>");
define('_NEWSLETTERSENT','Nyhetsbrevet har blitt sendt');

// referers.php
define('_WHOLINKS','Hvem linker til oss?');
define('_DELETEREFERERS','Slett linkerne');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Undertekst');
define('_DEBUG', 'Feilsøking');
define('_SITECONFIG','Systemoppsett');
define('_GENSITEINFO','Generelle opplysninger for siten');
define('_SITENAME','Webstedets Navn');
define('_SITEURL','Webadresse');
define('_SITELOGO','Logo');
define('_SITESLOGAN','Slagord');
define('_STARTDATE','Startdato');
define('_ADMINEMAIL','E-postadresse til administrator');
define('_ITEMSTOP','Antall toppsaker på topplistesiden');
define('_STORIESHOME','Antall artikler som vises på hovedsiden');
define('_OLDSTORIES','Antall artikler som skal vises i boksen "eldre artikler"');
define('_ALLOWANONPOST','Tillate anonyme gjester å poste?');
define('_DEFAULTTHEME','Standard Tema');
define('_SHOWSEC','Vis Sikkerhetskode');
define('_TOOLTIPS','Vise hjelpetekst på tekst-felter der dette er tilgjengelig');
define('_UM_TOGGLE','Slå på oppdateringsmonitor');
define('_UM_EXPLAIN','Denne vil motta to deler av informasjon fra vår website, dragonflycms.org: siste versjon av Dragonfly, og hvis det er noen viktige meldinger for din versjon av Dragonfly. Eneste data sendt til vår site er ditt Dragonfly versjon nummer. Vi logger <strong>ikke</strong> disse data på vår server.');
// maintenance
define('_MAINTENANCE','Vedlikehold');
define('_MESSAGE','Beskjed');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','Flerspråksvalg');
define('_SELLANGUAGE','Standard språk');
define('_LOCALEFORMAT','Tidsformat');
define('_ACTMULTILINGUAL','Aktiver fler språk? ');
define('_ACTUSEFLAGS','Vise flagg i steden for rullgardinboks? ');
// banners
define('_BANNERSOPT','Banner innstillinger');
define('_ACTBANNERS','Aktivere bannere?');
// footer
define('_FOOTERMSG','Undertekst');
define('_FOOTERLINE1','Undertekst linje 1');
define('_FOOTERLINE2','Undertekst linje 2');
define('_FOOTERLINE3','Undertekst linje 3');
// backend
define('_BACKENDCONF','Backend konfigurasjon');
define('_BACKENDTITLE','Backend tittel');
define('_BACKENDLANG','Backend språk');
// mail stories
define('_MAIL2ADMIN','Sende nye artikler til administrator via E-post');
define('_NOTIFYSUBMISSION','Gi beskjed om nye innsendinger per E-post?');
define('_EMAIL2SENDMSG','E-postadresse å sende beskjeden til');
define('_EMAILSUBJECT','emne for E-postbeskjeden');
define('_EMAILMSG','E-postbeskjeden');
define('_EMAILFROM','E-postkonto (Fra)');
// comments
define('_COMMENTSOPT','Kommentar innstillinger');
define('_COMMENTSLIMIT','Begrensning av kommentarstørrelse');
define('_COMMENTSMOD','Kommentarendring');
define('_MODADMIN','Moderering av admin');
define('_MODUSERS','Moderering av medlemmer');
define('_NOMOD','Ingen moderering');
// adminmenu
define('_GRAPHICOPT','Grafikk innstillinger');
define('_BOTH','Begge');
define('_GRAPHICAL','Grafisk');
define('_SIDEBLOCK','Sideblokk');
// miscellaneous
define('_MISCOPT','Andre innstillinger');
define('_ACTIVATEHTTPREF','Aktivere HTTP Referers?');
define('_MAXREF','Hvor mange linkere vil du maksimalt ha?');
define('_COMMENTSPOLLS','Aktivere kommentarer i avstemninger?');
define('_COMMENTSARTICLES','Aktivere kommentarer i artikler?');
define('_PAGE','Side');
define('_PAGES','Sider');
define('_TOGGLE','Gjør om');

// censor
define('_CENSOROPTIONS','Sensurvalg');
define('_CENSORMODE','Sensurmåte');
define('_NOFILTERING','Ingen filtrering');
define('_EXACTMATCH','Nøyaktig treff');
define('_MATCHBEG','Undersøk begynnelsen av ordet');
define('_MATCHANY','Undersøk hvor som helst i teksten');
define('_CENSORREPLACE','Erstatt sensurert ord med:');
// email
define('_EMAILOPTIONS','Innstillinger for E-Post for Kontakt modul og Nyhetsbrev');
define('_ALLOW_HTML_EMAIL','Tillate html i E-Post');
define('_USE_SMTP','Bruke SMTP for E-Post istedenfor PHP');
define('_SMTP_HOST','SMTP host adresse (smtp.example.com)');
define('_USE_SMTP_AUTH','Serveren krever SMTP godkjenning');
define('_SMTP_USER_NAME','SMTP Brukernavn');
define('_SMTP_USER_PASS','SMTP Passord');

// cpg_adminmenu.php
define('_ADMINMENU','Administrasjonsmeny');
define('_ADMINLOGOUT','Logg ut');
define('_AMENU0','System');
define('_AMENU1','Generelt');
define('_AMENU2','Medlemmer');
define('_AMENU3','Meldinger');
define('_AMENU4','Forum');
define('_AMENU5','Innformativ');
define('_AMENU6','Linker');
define('_AMENU7','Kommersiellt');
define('_AMENU8','Multimedia');
define('_AMENU9','Moduler');
define('_BMENU1','Hjelp');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','Innstillinger');
define('_DATABASE','Database');
define('_BLOCKS','Blokker');
define('_MODULES','Moduler');
define('_EDITADMINS','Administratorer');
define('_MESSAGES','Beskjeder');
define('_BANNERS','Bannere');
define('_HTTPREFERERS','Hvem linker til oss');
define('_EDITUSERS','Redigere medlemmer');
define('_USERSCONFIG','Ny Bruker Konfigurasjon');
define('_NEWSLETTER','Nyhetsbrev');
define('_SUBMISSIONS','Posteringer');
define('_ADDSTORY','Legg til ny artikkel');
define('_TOPICS','Emner');
define('_ADMPOLLS','Avstemninger');
define('_EPHEMERIDS','Dagens Ord');
define('_REVIEWS','Anmeldelser');
define('_ENCYCLOPEDIA','Oppslagsverk');
define('_SURVEYS','Avstemninger');
define('_SECTIONS','Seksjoner');
define('_ARTICLES','Artikler');
define('_FAQ','FAQ');
define('_DOWNLOAD','Nedlastinger');
define('_WEBLINKS','Weblinker');
define('_CONTENT','Innhold');
define('_SYSINFO','System Info');
define('_REPORTABUG','Rapporter en feil');
//coppermine admin
define('_W_INSTALL','Hvilken installasjon?');
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
define('_ERROR','FEIL');
define('_SEC_ERROR','Sikkerhetsfeil');
define('_ERROR_NOT_SET','%s var ikke satt');
define('_ERROR_NO_POST','Posteringer fra en annen host er ikke tillatt...');
define('_ERROR_NO_GET','GET oppkall er ikke tillatt for denne funksjonen...');
define('_ERROR_BAD_CHAR','Tegnene du prøvde å inkludere i %s oppkallet er forbudt...');
define('_ERROR_BAD_FORMAT','%s formatet er ikke gyldig.');
define('_ERROR_BAD_LINK','Du prøvde å få tilgang til siden via en ikke godkjent link...');
define('_ERROR_NONE_TO_DISPLAY','Det er ingen %s å vise');
define('_ERROR_DELETE_CONF','Er du sikker på at du vil slette %s?');
define('_ERROR_NO_EXIST','%s finnes ikke');
define('_ERROR_ALREADYEXIST','%s eksisterer allerede');
define('_TASK_COMPLETED','Oppgaven er fullført!');
define('_CONFIRM','Bekreft');
define('_FOOTER_COPYRIGHTS', 'Interaktiv programvare lansert under <a href="http://dragonflycms.org/GNUGPL.html" target="_blank" title="GNU Public License Agreement">GNU GPL</a>,	<a href="'.getlink('credits').'">Code Credits</a>,	<a href="'.getlink('privacy_policy').'">Fortrolighetsavtale</a>');

# time
$LNG = array('_time' => array(
'l' => array('Søndag', 'Mandag', 'Tirsdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lørdag'),
'D' => array('Søn', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'Lør'),
'F' => array(1=>'Januar', 'Februar', 'Mars', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Desember'),
'M' => array(1=>'Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des'),
));
$LNG['_time']['l'][7] =& $LNG['_time']['l'][0];
$LNG['_time']['D'][7] =& $LNG['_time']['D'][0];
