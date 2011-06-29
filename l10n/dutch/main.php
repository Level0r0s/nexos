<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/dutch/main.php,v $
  $Revision: 9.37 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:47 $
Encoding test: n-array summation ? latin ae w/ acute ?
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','nl');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A %d %B @ %T');
define('_DATESTRING2','%A %d %B');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%2$s %1$s %3$s');

define('_NEXTPAGE','Volgende Pagina');
define('_PREVIOUSPAGE','Vorige Pagina');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Zoek');
define('_LOGIN','Inloggen');
define('_WRITES','schrijft');
define('_POSTEDON','Geplaatst op');
define('_NICKNAME','Loginnaam');
define('_PASSWORD','Wachtwoord');
define('_WELCOMETO','Welkom op');
define('_EDIT','Bewerken');
define('_DELETE','Verwijder');
define('_POSTEDBY','Geplaatst door');
define('_READS','maal gelezen');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Ga terug</a>' : '<a href="javascript:history.go(-1)">Ga terug</a>').' ]');
define('_COMMENTS','opmerkingen');
define('_PASTARTICLES','Vorige artikelen');
define('_OLDERARTICLES','Oudere artikelen');
define('_BY','door');
define('_ON','op');
define('_LOGOUT','Afmelden');
define('_WAITINGCONT','Wachtende inhoud');
define('_WREVIEWS','Wachtende periodieken');
define('_WLINKS','Wachtende links');
define('_ONEDAY','Een dag zoals vandaag...');
define('_ASREGISTERED','Nog geen lid? U kunt een account <a href="'.getlink("Your_Account&amp;file=register").'">aanvragen</a>. Als geregistreerde gebruiker krijgt u voordelen zoals de Thema-manager, opmerkingsconfiguratie en kunt u opmerkingen plaatsen onder uw eigen naam.');
define('_MENUFOR','Menu voor');
define('_NOBIGSTORY','Vandaag is er nog geen groot verhaal geplaatst.');
define('_BIGSTORY','Het meest gelezen verhaal van vandaag is:');
define('_SURVEY','Onderzoek');
define('_POLLS','Peilingen');
define('_PCOMMENTS','Opmerkingen:');
define('_RESULTS','Uitslagen');
define('_HREADMORE','Lees meer...');
define('_CURRENTLY','Er zijn op dit moment,');
define('_GUESTS','gast(en) en');
define('_MEMBERS','lid(leden) die online zijn.');
define('_YOUARELOGGED','U bent ingelogd als');
define('_YOUHAVE','U heeft');
define('_PRIVATEMSG','privé-bericht(en).');
define('_YOUAREANON','U bent een gast. U kunt gratis een account aanvragen door <a href="'.getlink("Your_Account").'">hier</a> te klikken');
define('_NOTE','Noot:');
define('_ADMIN','Beheer:');
define('_WERECEIVED','We ontvingen');
define('_PAGESVIEWS','paginabezoeken sinds');
define('_TOPIC','Onderwerp');
define('_UDOWNLOADS','Downloads');
define('_VOTE','Stem');
define('_VOTES','Stemmen');
define('_MVIEWADMIN','Bekijk: alleen beheerders');
define('_MVIEWUSERS','Bekijk: alleen leden');
define('_MVIEWANON','Bekijk: alleen niet-leden');
define('_MVIEWALL','Bekijk: alle bezoekers');
define('_EXPIRELESSHOUR','Vervalt binnen één uur');
define('_EXPIREIN','Vervalt over');
define('_UNLIMITED','Ongelimiteerd');
define('_HOURS','Uren');
define('_RSSPROBLEM','Er is een probleem met de koppen van deze site');
define('_SELECTLANGUAGE','Kies taal');
define('_SELECTGUILANG','Kies interface taal:');
define('_NONE','Geen');
define('_BLOCKPROBLEM','<center>Er is een probleem met dit blok.</center>');
define('_BLOCKPROBLEM2','<center>Dit blok heeft geen inhoud.</center>');
define('_MODULENOTACTIVE','Sorry, deze module is niet actief');
define('_NOACTIVEMODULES','Inactieve Modules');
define('_MODULENOEXIST','Tot onze spijt bestaat het gevraagde bestand, %s, niet');
define('_FORADMINTESTS','(voor Admin testen)');
define('_BBFORUMS','Forums');
define('_ACCESSDENIED','Geen Toegang');
define('_RESTRICTEDAREA','Voorbehouden zone.');
define('_MODULEUSERS','Onze verontschuldigingen, dit onderdeel is enkel toegankelijk voor <i>geregistreerde bezoekers</i><br /><br />Je kan gratis registreren door <a href="'.getlink('Your_Account&amp;file=register').'">hier</a> te klikken,<br />daarna kan je dit onderdeel raadplegen zonder beperkingen.<br />Dank u.<br /><br />');
define('_MODULEUSERS2','Je kunt je gratis registreren door op<a href="'.getlink('Your_Account&amp;file=register').'">deze</a> link te drukken, dit geeft je toegang tot dit deel van de site.<br /><br />succes.');
define('_MODULESADMINS','Onze verontschuldigingen, dit onderdeel is enkel toegankelijk voor <i>Beheerders</i><br /><br />');
define('_MODULESGROUPS','groepstoegang vereist');
define('_HOME','Startpagina');
define('_HOMEPROBLEM','Oei... Probleem... Hier is geen startpagina!');
define('_ADDAHOME','Module toevoegen op startpagina');
define('_HOMEPROBLEMUSER','Er is een probleem op de startpagina. Gelieve dit nadien te controleren.');
define('_MORENEWS','Meer in het onderdeel NIEUWS');
define('_ALLCATEGORIES','Alle categorieën');
define('_SPAMGUARDPROTECTED','Spamguard heeft de verzending van deze email geblokkeerd');
define('_M_CHARS','Maximaal: %s karakters');

define('_SYS_MESSAGE','systeembericht');
define('_SYS_MESSAGES','systeemberichten');
define('_SYS_MAINTENANCE','U gebruikt de onderhouds mode');
define('_SYS_DEMO','U draait onder administratie demo mode</br /> U kunt geen veranderingen maken aan de database<br /><a href="'.adminlink('logout').'">Log me uit!</a>');

define('_DATE','Datum');
define('_HOUR','Uur');
define('_UMONTH','maand');
define('_YEAR','jaar');
define('_JANUARY','Januari');
define('_FEBRUARY','Februari');
define('_MARCH','Maart');
define('_APRIL','April');
define('_MAY','Mei');
define('_JUNE','Juni');
define('_JULY','Juli');
define('_AUGUST','Augustus');
define('_SEPTEMBER','September');
define('_OCTOBER','Oktober');
define('_NOVEMBER','November');
define('_DECEMBER','December');

define('_MONDAY','Maandag');
define('_TUESDAY','Dinsdag');
define('_WEDNESDAY','Woensdag');
define('_THURSDAY','Donderdag');
define('_FRIDAY','Vrijdag');
define('_SATURDAY','Zaterdag');
define('_SUNDAY','Zondag');
//three letter abbrev.
define('_ABR_MONDAY','Ma');
define('_ABR_TUESDAY','Di');
define('_ABR_WEDNESDAY','Wo');
define('_ABR_THURSDAY','Do');
define('_ABR_FRIDAY','Vr');
define('_ABR_SATURDAY','Za');
define('_ABR_SUNDAY','Zo');

define('_BWEL','Welkom');
define('_BPM','Privé-berichten');
define('_BUNREAD','Ongelezen');
define('_BREAD','Lees');
define('_BMEMP','Lidmaatschap');
define('_BLATEST','Laatste');
define('_BTD','Nieuw vandaag');
define('_BYD','Nieuw gisteren');
define('_BOVER','Algemeen');
define('_BVISIT','Bezoekers Online');
define('_BVIS','Bezoekers');
define('_BMEM','Leden');
define('_BTT','Totaal');
define('_BON','Nu Online');
define('_BREG','Registreer');
define('_BROADCAST','Verzonden publieke berichten');
define('_BROADCASTFROM','Publieke Berichten van');
define('_TURNOFFMSG','Zet Publieke Berichten uit');
define('_JOURNAL','Dagboek');
define('_READMYJOURNAL','Lees mijn dagboek');
define('_ADD','Toevoegen');
define('_YES','Ja');
define('_NO','Nee');
define('_INVISIBLEMODULES','Onzichtbare Modules');
define('_ACTIVEBUTNOTSEE','(Actieve maar onzichtbare link)');
define('_BOTS','Bots');

define('_UM','Dragonfly Versie Controle');
define('_UM_F','Verbinding met de versie-controle is mislukt.  Probeer het later nog een keer.');
define('_UM_G','Je gebruikt de meest recente versie van Dragonfly');
define('_UM_R','Je kunt <a href="%2$s" target="_blank">opwaarderen</a> naar Dragonfly %1$s');

define('_TEAM','Team.');
define('_LINKAPPROVEDMSG','Gefeliciteerd! De web link die u heeft verzonden naar onze link database is goedgekeurd. Voeg een link terug toe aan uw site en email ons de url van u site waar uw deze link heeft geplaatst');
define('_MODREQLINKS','Bewerk links');
define('_BROKENLINKS','Gebroken links');
define('_MODREQDOWN','Bewerk downloads');
define('_BROKENDOWN','Gebroken downloads');
define('_PAGEGENERATION','Pagina Rendering:');
define('_SECONDS','Seconden');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Pagina Gegenereerd in %1$s seconden en %2$s DB Queries in %3$s seconden');
define('_YOUHAVEONEMSG','Je hebt 1 nieuw privé bericht');
define('_NEWPMSG','nieuwe privé berichten');
define('_CONTRIBUTEDBY','Bijgedragen door');
define('_CHAT','Chat');
define('_REGISTERED','Geregistreerd');
define('_CHATGUESTS','Gasten');
define('_USERSTALKINGNOW','Gebruikers chatten nu');
define('_ENTERTOCHAT','Treed Chat binnen');
define('_CHATROOMS','Verkrijgbare kamers');
define('_ALLTOPICS','Alle onderwerpen');
define('_ASSOTOPIC','Geassocieerde Onderwerpen');
define('_HELLO','Hallo');
define('_ALL','Alle');
define('_URL','URL');
define('_SUBJECT','Onderwerp');
define('_PREVIEW','Voorbeeld');
define('_SEND','Verzenden');
define('_ANONYMOUS','Anoniem');
define('_BREADCRUMB','Breadcrumb Delimiter, verschijnt in de paginatitel tussen de woorden.');
define('_BC_DELIM',isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&gt;&gt;');
define('_RESET','Reset');
define('_AT','at');
define('_LASTMSGS','Last %s Forum Messages');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','Printervriendelijke pagina');

define('_CREDITS_TITLE','Credits');
define('_CREDITS_PRODUCT','Produkt');
define('_CREDITS_DESC','Omschrijving');
define('_CREDITS_AUTHORS','Auteur(s)');

define('_PP_TITLE','Privé Beleid');
define('_PP_MODIFY','Bewerk dit bericht');

define('_SENDEREMAIL','E-mail van Verzender');
define('_SENDERNAME','Naam van Verzender');
define('_RECIPIENTNAME','Naam Ontvanger');
define('_RECIPIENTEMAIL','Email van Ontvanger');

define('_REASONS_0','Is goed zo');
define('_REASONS_1','Off Topic');
define('_REASONS_2','Flamebait');
define('_REASONS_3','Troll');
define('_REASONS_4','Overtollig');
define('_REASONS_5','Insightful');
define('_REASONS_6','Interesssant');
define('_REASONS_7','Informatief');
define('_REASONS_8','Grappig');
define('_REASONS_9','Overschat');
define('_REASONS_10','Onderschat');

/* My Account Tools Block */
define('_TB_BLOCK','Mijn Account Opties');
define('_TB_TASKS','Taken');
define('_TB_INFO','Informatie');
define('_TB_PROFILE_INFO','Mijn publieke profiel');
define('_TB_EDIT_PROFILE','Mijn profiel');
define('_TB_EDIT_REG','Mijn registratie gegevens');
define('_TB_EDIT_PRIVATE','Mijn privé informatie');
define('_TB_EDIT_AVATAR','Mijn avatar');
define('_TB_DELETE','Verwijder mijn account');
define('_TB_CONFIG','Configuratie');
define('_TB_EDIT_PREFS','Voorkeuren');
define('_TB_EDIT_HOME','Mijn Homepagina instellingen');
define('_TB_EDIT_COMM','Mijn commentaar instellingen');
define('_TB_PERSONAL','Persoonlijk');
define('_TB_PERSONAL_GALLERY','Mijn galerij');
define('_TB_PERSONAL_JOURNAL','Mijn dagboek');
define('_TB_PRIVMSGS','Privé Berichten');
define('_TB_PRIVMSGS_INBOX','Ontvangen');
define('_TB_PRIVMSGS_OUTBOX','Outbox');
define('_TB_PRIVMSGS_SENTBOX','Verzonden');
define('_TB_PRIVMSGS_SAVEBOX','Savebox');
define('_TB_PRIVMSGS_SEND','Verzend');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','Lid Info');
define('_SECURITYCODE','Beveiligings Code');
define('_TYPESECCODE','Type Beveiligings Code');
define('_MEMBERSOPTIONS','Leden opties');
define('_READSEND','Lees je privé berichten. Verzend naar anderen.');
define('_INBOX','Inbox');
define('_NEW','Nieuw');
define('_ACCOUNTOPTIONS','Jouw Lidmaatschap. Wijzig opties en lees je berichten.');
define('_LOGOUTACCT','Log uit dit lidmaatschap.');
define('_LOGOUTADMINACCT','Log uit admin lidmaatschap.');
define('_BLOGIN','Jouw Lidmaatschap');
define('_BFLOGIN','Forum Profiel');
define('_BHID','Verborgen');
define('_WHOWHERE','Wie is Waar?');
define('_STAFFONL','Beheerder online');
define('_STAFFNONE','Er zijn geen beheerders online!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Gemeenschap');
define('_BlogsLANG','Blogs');
define('_ContentLANG','Inhoud');
define('_coppermineLANG','Foto galerij');
define('_CPGlangLANG','Help vertalen');
define('_DownloadsLANG','Downloads');
define('_EncyclopediaLANG','Encyclopedie');
define('_ForumsLANG','Gemeenschap Forums');
define('_ContactLANG','Contact Us');
define('_FAQLANG','FAQ - Help');
define('_Members_ListLANG','Leden Lijst');
define('_NewsLANG','Nieuws');
define('_ReviewsLANG','Recensies');
define('_SearchLANG','Zoek');
define('_StatisticsLANG','Statistieken');
define('_Stories_ArchiveLANG','Berichten Archief');
define('_Submit_NewsLANG','Verzend Nieuws');
define('_SurveysLANG','Opiniepeilingen');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Onderwerpen');
define('_Private_MessagesLANG','Mijn berichten');
define('_Tell_a_FriendLANG','Vertel een vriend(in)');
define('_Web_LinksLANG','Links');
define('_Your_AccountLANG','Mijn Account');
define('_CPG_EventsLANG','Kalender');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Languages!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Groups');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Headlines');

define('_COMMUNICATION','Communicatie');
define('_FRIENDS','Vrienden');
define('_STORE','Opslaan');
define('_PRODUCTS','Produkten');
define('_DONATE','Doneer');
define('_HELP','Help');
define('_GALLERIES','Galerijen');
define('_DOCS','Documentatie');
define('_RULES','Huishoudelijke reglementen');
define('_MENU','Hoofdmenu');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','Je <strong>bent</strong> aangemeld voor<br />onze nieuwsbrief');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','Je bent <strong>niet</strong> aangemeld voor<br />onze nieuwsbrief ');
define('_NEWSLETTERBLOCKREGISTER','Je moet een<br /><strong>geregistreerde gebruiker</strong><br />zijn om onze nieuwsbrief te ontvangen');
define('_NEWSLETTERBLOCKSUBSCRIBE','Je moet een<br /><strong>geregistreerde gebruiker</strong><br />zijn om onze nieuwsbrief te ontvangen');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Zeg op');
define('_NEWSLETTERBLOCKREGISTERNOW','Registreer nu!');
/* END Newsletter Block */

/* START class phpmailer lang array */
$PHPMAILER_LANG = array();
$PHPMAILER_LANG['provide_address'] = 'Er moet tenmiste één ontvanger emailadres opgegeven worden.';
$PHPMAILER_LANG['mailer_not_supported'] = ' mailer wordt niet ondersteund.';
$PHPMAILER_LANG['execute'] = 'Kon niet uitvoeren: ';
$PHPMAILER_LANG['instantiate'] = 'Kon mail functie niet initialiseren.';
$PHPMAILER_LANG['authenticate'] = 'SMTP Fout: authenticatie mislukt.';
$PHPMAILER_LANG['from_failed'] = 'De volgende afzender adressen zijn mislukt: ';
$PHPMAILER_LANG['recipients_failed'] = 'SMTP Fout: De volgende ontvangers zijn mislukt: ';
$PHPMAILER_LANG['data_not_accepted'] = 'SMTP Fout: Data niet geaccepteerd.';
$PHPMAILER_LANG['connect_host'] = 'SMTP Fout: Kon niet verbinden met SMTP host.';
$PHPMAILER_LANG['file_access'] = 'Kreeg geen toegang tot bestand: ';
$PHPMAILER_LANG['file_open'] = 'Bestandsfout: Kon bestand niet openen: ';
$PHPMAILER_LANG['encoding'] = 'Onbekende codering: ';
/* END class phpmailer lang array */

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_SAVECHANGES','Opslaan');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Taal');
define('_FUNCTIONS','Functies');
define('_SHOW','Toon');
define('_TO','Aan');
define('_DAY','dag');
define('_LAST','Laatste');
define('_ACTIVE','Actief');
define('_DEACTIVATE','Deactiveren');
define('_INACTIVE','Inactief');
define('_ACTIVATE','Activeren');
define('_ACTIVATE2','Activeren?');
define('_VIEW','Zichtbaar voor');
define('_VIEWPRIV','Wie kan dit bekijken?');
define('_MVADMIN','Alleen de beheerder');
define('_MVUSERS','Alleen leden');
define('_MVANON','Alleen niet-leden (anonymous gebruikers)');
define('_MVALL','Alle bezoekers');
define('_IMAGE','Afbeelding');
define('_GO','Begin!');
define('_OPTION','Optie');
define('_CATEGORY','Categorie');
define('_SUBCATEGORY','Sub-Categorie');
define('_ID','ID');
define('_EXPIRATION','Vervalt');
define('_DAYS','dagen');
define('_WARNING','Waarschuwing');
define('_POLLTITLE','Peilingstitel');
define('_POLLEACHFIELD','A.u.b. ieder beschikbare optie in een enkel veld inbrengen');
define('_ADDCATEGORY','Nieuwe categorie toevoegen');
define('_PAGEBREAK','Als u meerdere pagina\'s wilt, voer dan <b>&lt;!--pagebreak--&gt;</b> in voor elke nieuwe pagina.');
define('_SIGNATURE','Handtekening');
define('_DESCRIPTION','Beschrijving');
define('_EDITCATEGORY','Categorie bewerken');
define('_IN','in');
define('_DESCRIPTION255','Beschrijving: (max. 255 karakters)');
define('_MODCATEGORY','Wijzig een categorie');
define('_SUBMITTER','Afzender');
define('_VISIT','Bezoek');
define('_EXTENDEDTEXT','Verlengde tekst');
define('_CHECKCATEGORIES','Controleer categorieën');
define('_INCLUDESUBCATEGORIES','(Subcategorieën inbegrepen)');
define('_CHECKSUBCATEGORIES','Controleer subcategorieën');
define('_VALIDATELINKS','Links goedkeuren');
define('_FAILED','Mislukt!');
define('_BEPATIENT','(even geduld a.u.b.)');
define('_VALIDATINGCAT','Categorie wordt goedgekeurd (inclusief alle subcategorieën)');
define('_VALIDATINGSUBCAT','Subcategorie wordt goedgekeurd');
define('_OK','Ok!');
define('_CHECK','Controleer');
define('_IGNORE','Negeer');
define('_HITS','Hits:');
define('_FILESIZE', 'Bestandsgrootte');
define("_EZTHEREIS","Er zijn");
define("_EZSUBCAT","sub-categorieeën");
define("_EZATTACHEDTOCAT","onder deze categorie");
define("_EZBROKENLINKS","Gebroken Links");
define("_DELEZLINKCATWARNING","LET OP: Weet u zeker dat u deze categorie wilt verwijderen?<br />U zult alle sub-categorieën en de ingevoegde links ook verwijderen!");

// index.php
define('_DEFHOMEMODULE','Module op Voorpagina');
define('_MODULEINHOME','Huidige Module :');
define('_CHANGE','Verander');
define('_WHOSONLINE','Wie is er online?');
define('_NP_ADMIN','Notepad');
define('_NP_LOCKED','Het kladblok is gesloten<br /> Alleen een hoofd Administrator (super lid) kan deze openen');
define('_NP_SAVE','Bewaar');
define('_NP_UNLOCK','Open kladblok');
define('_NP_LOCK','Sluit kladblok');
// news
define('_STICKY','Sticky Artikel');
define('_ARTICLEUP','Volgend artikel');
define('_ARTICLEDOWN','Vorig artikel');
define('_UNSTICK','Unstick');
define('_STICK','Sticky');
define('_AUTOMATEDARTICLES','Geprogrammeerde artikelen');
define('_STORYID','Verhaal ID');
define('_CURRENTPOLL','Huidige peiling');

// admin.php
define('_ADMINISTRATION','Beheer');
define('_NOADMINYET','Er zijn nog geen Beheerders, vervolg om een Super Gebruiker aan te maken:');
define('_CREATEUSERDATA','Wil je een normale gebruiker aanmaken met dezelfde gegevens?');
define('_ADMINLOGIN','Systeembeheer login');
define('_ADMINID','Beheerders ID');
define('_EMAIL','E-mail');
define('_SUBMIT','Verzenden');
define('_YOUARELOGGEDOUT','U bent nu uitgelogd!');
define('_PASSWDNOMATCH','Sorry, de nieuwe wachtwoorden zijn ongelijk. Ga terug en probeer Opnieuw');
define('_LOGIN_REMEMBERME','Onthoud mij?');
define('_ADMINMENU_LOGOUT','Administratie Menu Log uit');
define('_PASSWORD_MALFORMED','Uw paswoord dient tenminste een cijfer, een hoofdletter en een kleine letter te bevatten');

// admins.php
define('_AUTHORSADMIN','Auteursadministratie');
define('_NAME','Naam');
define('_REQUIRED','(vereist)');
define('_MODIFYINFO','Wijzig info');
define('_DELAUTHOR','Verwijder auteur');
define('_ADDAUTHOR','Nieuwe auteur toevoegen');
define('_PERMISSIONS','Toestemmingen');
define('_SUPERUSER','Beheerder');
define('_SUPERWARNING','WAARSCHUWING: Als Beheerder is aangevinkt, krijgt de gebruiker volledige toegang!');
define('_ADDAUTHOR2','Auteur toevoegen');
define('_RETYPEPASSWD','Wachtwoord opnieuw invoeren');
define('_FORCHANGES','(Alleen voor wijzigingen)');
define('_COMPLETEFIELDS','U moet alle verplichte velden invullen');
define('_CREATIONERROR','Toevoegen van auteur mislukt!');
define('_AUTHORDEL','Auteur verwijderen');
define('_PUBLISHEDSTORIES','De beheerder heeft de verhalen gepubliceerd');
define('_SELECTNEWADMIN','Kies een nieuwe beheerder om deze opnieuw toe te wijzen');
define('_GODNOTDEL','*(GOD account kan <b>niet</b> verwijderd worden)');
define('_MAINACCOUNT','God Admin*');
define('_USERS','Gebruikers');

// banners.php
define('_BANNERSADMIN','Bannerbeheer');
define('_DELETEBANNER','Verwijder banner');
define('_SURETODELBANNER','Weet u zeker dat u deze banner wil verwijderen');
define('_EDITBANNER','Bewerk Banner');

// blocks.php
define('_BLOCKSADMIN','Blokkenadministratie');
define('_CENTER','Centreer');
define('_CENTERUP','Centreer Op');
define('_CENTERDOWN','Centreer Neer');
define('_BLOCKFILE','(Blokbestand)');
define('_BLOCKFILE2','BESTAND');
define('_BLOCKSYSTEM','SYSTEEM');
define('_ADDNEWBLOCK','Nieuw blok toevoegen');
define('_RSSFILE','RSS/RDF bestand URL');
define('_ONLYHEADLINES','(Alleen voor koppen)');
define('_REFRESHTIME','Verversingstijd');
define('_CREATEBLOCK','Creëer blok');
define('_EDITBLOCK','Bewerk blok');
define('_BLOCK','Blok');
define('_SAVEBLOCK','Blok opslaan');
define('_BLOCKACTIVATION','Blok activering');
define('_BLOCKPREVIEW','Dit is het voorbeeld voor blok');
define('_WANT2ACTIVATE','Wilt u dit blok activeren?');
define('_ARESUREDELBLOCK','Wilt u het blok echt verwijderen ?');
define('_BLOCKUP','Vorig blok');
define('_BLOCKDOWN','Volgend blok');
define('_BLOCKTOP','Plaats blok bovenaan');
define('_BLOCKBOTTOM','Plaats blok onderaan');
define('_TITLE','Titel');
define('_POSITION','Positie');
define('_WEIGHT','Gewicht');
define('_STATUS','Status');
define('_LEFTBLOCK','Linkerblok');
define('_LEFT','Links');
define('_RIGHTBLOCK','Rechterblok');
define('_RIGHT','Rechts');
define('_TYPE','Type');
define('_CUSTOM','Aangepast');
define('_FILENAME','Bestandsnaam');
define('_FILEINCLUDE','(Kies een aangepast blok. Alle andere waarden zullen genegeerd worden)');

// comments.php
define('_REMOVECOMMENTS','Verwijder opmerkingen');
define('_SURETODELCOMMENTS','Weet u zeker dat u de geselecteerde opmerking en alle antwoorden wilt verwijderen?');

// database.php
define('_SAVEDATABASE','Backup DB');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Huidige Status');
define('_ACTIVATEPAGE','Deze pagina activeren?');

// history.php
define('_EPHEMADMIN','Ephemeridenadministratie');
define('_ADDEPHEM','Nieuwe Ephemerid toevoegen');
define('_EPHEMDESC','Ephemeridbeschrijving');
define('_EPHEMMAINT','Ephemeridonderhoud (bewerken/verwijderen):');
define('_EPHEMEDIT','Ephemeriden bewerken');
define('_EPHEMDELETE','Verwijder Entry');

// headlines.php
define('_RSSFAIL','Er is een problem met het RSS-bestand URL');
define('_RSSTRYAGAIN','Controleer de URL en de RSS bestandsnaam, probeer het daarna opnieuw.');
define('_RSSCONTENT','(RSS/RDF Inhoud)');
define('_IFRSSWARNING','Als U de URL invult, wordt de inhoud die u schrijft niet getoond!');
define('_SETUPHEADLINES','(kies Aangepast en voer de URL in of kies een site uit de lijst om nieuwskoppen binnen te halen)');
define('_HEADLINESADMIN','Koppenadministratie');
define('_ADDHEADLINE','Kop toevoegen');
define('_EDITHEADLINE','Kop bewerken');
define('_SURE2DELHEADLINE','WAARSCHUWING: Weet u zeker dat u deze kop wilt verwijderen?');

// messages.php
define('_MESSAGESADMIN','Berichtenadministratie');
define('_MESSAGETITLE','Titel');
define('_MESSAGECONTENT','Inhoud');
define('_ALLMESSAGES','Overzicht berichten');
define('_EDITMSG','Bericht bewerken');
define('_ADDMSG','Bericht toevoegen');
define('_REMOVEMSG','Weet u zeker dat u dit bericht wilt verwijderen? ');
define('_CHANGEDATE','Startdatum veranderen in vandaag?');
define('_IFYOUACTIVE','(Als U dit bericht nu activeert, wordt de huidige datum als startdatum ingesteld)');

// modules.php
define('_MODULESADMIN','Modulebeheer');
define('_HOMECONFIG','Home-configuratie');
define('_MODULESADDONS','Modules en Toevoegingen');
define('_INHOME','Op Voorpagina');
define('_MODULEHOMENOTE','<b>-= WAARSCHUWING =-</b><br />De titel van de module in <b>vet</b> duidt de module aan die momenteel wordt opgenomen in de voorpagina.<br />Deze module kan niet geactiveerd of desactiveerd worden zolang het de huidige standaard-instelling is!<br />Als de map van de module verwijderd wordt, zal je een foutmelding in de voorpagina vinden.<br />Bovendien, zal deze module vervangen worden door een <i>link naar de voorpagina</i> in het blok met modules.');
define('_PUTINHOME','Op voorpagina opnemen');
define('_SURETOCHANGEMOD','Ben je zeker dat je je voorpagina wilt veranderen van');
define('_NOTINMENU','[ <big><strong>&middot;</strong></big> ] is een modulenaam en link dat niet getoond wordt in de Modules Blok');
define('_SHOWINMENU','Zichtbaar in Modules Blok?');
define('_CUSTOMTITLE','Eigen Titel');
define('_MODULEEDIT','Bewerk Modules');
define('_VERSION','Versie');
define('_UPGRADE','Upgrade naar %s');
define('_DBSIZE','DB size');
define('_CVS_EXPLAIN','Door CVS kan u de laaste versie van bestanden makelijk verkrijgen.<br /><b>MAAR</b> de laaste versie van een bestand kan fouten bevatten omdat he niet een officieele uitgave is/<br /> Als u verstand heeft van PHP dan kan u de bestanden updaten door op de link hieronder te klikken.<br />Vergeet niet eerst een backup te maken!!!');
define('_CVS_UPDATE','Werk CVS bestanden bij');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','Van');
define('_STAFF','Staf');
define('_NL_RECIPS','Ontvangers');
define('_SUBSCRIBEDUSERS','Geregistreerde gebruikers');
define('_NL_ALLUSERS','Alle Leden');
define('_NL_ADMINS','Beheerders');
define('_NL_REGARDS','Met vriendelijke groet,');
define('_DISCARD','Verwerpen');
define('_REVIEWTEXT','Herlees en controleer de tekst:');
define('_MANYUSERSNOTE','WAARSCHUWING! Er zijn veel gebruikers die deze tekst zullen ontvangen.  Wacht tot het script de verwerking beëindigd heeft.  Dit kan enkele minuten duren!');
define('_NL_NOUSERS','De groep die u heeft geselecteerd on de nieuwsbrief te ontaven heeft geen leden<br /> Ga alsteblieft  a.u.b terug en selecteer een andere groep');
define('_NUSERWILLRECEIVE','Gebruikers zullen deze Nieuwsbrief ontvangen.');
define('_NLUNSUBSCRIBE','Wij sturen u dit bericht omdat u heeft gekozen om onze niewsbrief van onze site te krijgen. U kunt zichzelf uitschrijven om deze te krijgen op elk ogenblik dat u wilt door <a href="'.getlink('Your_Account&amp;edit=prefs', true, true).'">deze</a> linknn Als u verdere assistentie wil stuur dan een email aan <a href="mailto:'.$MAIN_CFG['global']['adminmail'].'">onze administrator</a>');
define('_NEWSLETTERSENT','De nieuwsbrief is verzonden.');

// referers.php
define('_WHOLINKS','Wie/welke site linkt naar onze site?');
define('_DELETEREFERERS','Verwijder Referers');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Footer');
define('_DEBUG', 'Debug');
define('_SITECONFIG','Website configuratie');
define('_GENSITEINFO','Algemene site-info');
define('_SITENAME','Sitenaam');
define('_SITEURL','Site URL');
define('_SITELOGO','Site logo');
define('_SITESLOGAN','Site slogan');
define('_STARTDATE','Begindatum site');
define('_ADMINEMAIL','Beheerders E-mail');
define('_ITEMSTOP','Aantal items in Top-Pagina');
define('_STORIESHOME','Aantal verhalen in voorpagina');
define('_OLDSTORIES','Aantal verhalen in oude artikelen map');
define('_ALLOWANONPOST','Laat niet-leden plaatsen?');
define('_DEFAULTTHEME','Standaard thema voor uw site');
define('_SHOWSEC','Toon beveligingscode');
define('_TOOLTIPS','Show tooltips on designated fields');
define('_UM_TOGGLE','Schakel Update Monitor in');
define('_UM_EXPLAIN','This will retrieve two pieces of information from our website, dragonflycms.org: the current build of Dragonfly, and any important messages that pertain to your version of Dragonfly. The only data sent to our site is your Dragonfly version number; we do <strong>not</strong> log these requests to our server.');
// maintenance
define('_MAINTENANCE','Onderhoud');
define('_MESSAGE','Bericht');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','Meerdere-talen opties');
define('_SELLANGUAGE','Selecteer de taal voor uw Site');
define('_LOCALEFORMAT','Lokaal tijdformaat');
define('_ACTMULTILINGUAL','Meerdere-talen-eigenschappen aanzetten? ');
define('_ACTUSEFLAGS','Toon vlaggen in plaats van een lijst in een dropdown box?');
// banners
define('_BANNERSOPT','Banner-opties');
define('_ACTBANNERS','Banners op uw site activeren?');
// footer
define('_FOOTERMSG','Voettekst');
define('_FOOTERLINE1','Voettekst regel 1');
define('_FOOTERLINE2','Voettekst regel 2');
define('_FOOTERLINE3','Voettekst regel 3');
// backend
define('_BACKENDCONF','Backend configuratie');
define('_BACKENDTITLE','Backend titel');
define('_BACKENDLANG','Backend taal');
// mail stories
define('_MAIL2ADMIN','Mail nieuwe verhalen naar beheerder');
define('_NOTIFYSUBMISSION','Op de hoogte houden van nieuwe inzendingen per E-mail?');
define('_EMAIL2SENDMSG','E-mailadres om het bericht te verzenden');
define('_EMAILSUBJECT','E-mailonderwerp');
define('_EMAILMSG','E-mailbericht');
define('_EMAILFROM','E-mailaccount (van)');
// comments
define('_COMMENTSOPT','Opmerkingen optie');
define('_COMMENTSLIMIT','Opmerkingenlimiet in bytes');
define('_COMMENTSMOD','Opmerkingen wijziging');
define('_MODADMIN','Wijziging door beheerder');
define('_MODUSERS','Wijziging door gebruikers');
define('_NOMOD','Geen wijziging');
// adminmenu
define('_GRAPHICOPT','Visuele opties');
define('_BOTH','Beide');
define('_GRAPHICAL','Grafisch');
define('_SIDEBLOCK','Zij-blok');
// miscellaneous
define('_MISCOPT','Diverse opties');
define('_ACTIVATEHTTPREF','Activeer HTTP-Referers?');
define('_MAXREF','Hoeveel referers als maximum?');
define('_COMMENTSPOLLS','Activeer opmerkingen in peilingen?');
define('_COMMENTSARTICLES','Commentaar activeren in artikelen?');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','Censuur Opties');
define('_CENSORMODE','Censuur Modus');
define('_NOFILTERING','Geen filtering');
define('_EXACTMATCH','Identieke benadering');
define('_MATCHBEG','Identiek woord aan begin');
define('_MATCHANY','Willekeurige benadering in de tekst');
define('_CENSORREPLACE','Verplaats gecensureerde worden met:');
// email
define('_EMAILOPTIONS','Instellingen voor email van het Contact Module en Nieuwsbrief');
define('_ALLOW_HTML_EMAIL','HTML email toestaan');
define('_USE_SMTP','Gebruikt SMTP voor email in plaats van php');
define('_SMTP_HOST','Adres voor SMTP host(smtp.example.com)');
define('_USE_SMTP_AUTH','Server gebruikt SMTP authenticatie');
define('_SMTP_USER_NAME','SMTP gebruikersnaam');
define('_SMTP_USER_PASS','SMTP paswoord');

// cpg_adminmenu.php
define('_ADMINMENU','Administratie menu');
define('_ADMINLOGOUT','Afmelden/verlaten');
define('_AMENU0','System');
define('_AMENU1','Algemeen');
define('_AMENU2','Leden');
define('_AMENU3','Berichten');
define('_AMENU4','Forums');
define('_AMENU5','Informatief');
define('_AMENU6','Linken');
define('_AMENU7','Commercie');
define('_AMENU8','Multimedia');
define('_AMENU9','Modules');
define('_BMENU1','Help');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','Voorkeuren');
define('_DATABASE','Database');
define('_BLOCKS','Blokken');
define('_MODULES','Modules');
define('_EDITADMINS','Beheerders bewerken');
define('_MESSAGES','Berichten');
define('_BANNERS','Banners');
define('_HTTPREFERERS','HTTP Referentie');
define('_EDITUSERS','Gebruikers bewerken');
define('_USERSCONFIG','Leden Config');
define('_NEWSLETTER','Nieuwsbrief');
define('_SUBMISSIONS','Ingeleverde stukken');
define('_ADDSTORY','Verhaal toevoegen');
define('_TOPICS','Onderwerpen');
define('_ADMPOLLS','Onderzoeken/peilingen');
define('_EPHEMERIDS','Efemeriden');
define('_REVIEWS','Recensies');
define('_ENCYCLOPEDIA','Woordenlijst');
define('_SURVEYS','Onderzoeken');
define('_SECTIONS','Secties');
define('_ARTICLES','Artikelen');
define('_FAQ','FAQ');
define('_DOWNLOAD','Download');
define('_WEBLINKS','Weblinks');
define('_CONTENT','Inhoud');
define('_SYSINFO','System Info');
define('_REPORTABUG','Meld een fout aan');
//coppermine admin
define('_W_INSTALL','Welke Installatie?');
define('_W_PAGE','Welke Pagina?');
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
define('_ERROR','FOUT');
define('_SEC_ERROR','Beveiligings fout');
define('_ERROR_NOT_SET','%s was niet verzet');
define('_ERROR_NO_POST','Posten vanaf een andere host is niet toegestaan..');
define('_ERROR_NO_GET','GET aanvragen zijn niet toegestaan voor deze functie...');
define('_ERROR_BAD_CHAR','De karakters die je probeerden te includen %s zijn verboden...');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','Je probeerde deze site te bezoeken vanaf een BAD LINK...');
define('_ERROR_NONE_TO_DISPLAY','Er zijn geen %s om weer te geven');
define('_ERROR_DELETE_CONF','Weet je zeker dat je %s wilt verwijderen?');
define('_ERROR_NO_EXIST','%s bestaat niet');
define('_ERROR_ALREADYEXIST','%s bestaal al');
define('_TASK_COMPLETED','Bewerking voltooid!');
define('_CONFIRM','Confirm');
define('_FOOTER_COPYRIGHTS', 'Interactive software released under <a href="http://dragonflycms.org/GNUGPL.html" target="_blank" title="GNU Public License Agreement">GNU GPL</a>,	<a href="'.getlink('credits').'">Code Credits</a>,	<a href="'.getlink('privacy_policy').'">Privacy Policy</a>');

# time
$LNG = array('_time' => array(
'l' => array('Zondag', 'Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', 'Vrijdag', 'Zaterdag'),
'D' => array('Zo', 'Ma', 'Di', 'Wo', 'Do', 'Vr', 'Za'),
'F' => array(1=>'Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'),
'M' => array(1=>'Jan', 'Feb', 'Mrt', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec'),
));
$LNG['_time']['l'][7] =& $LNG['_time']['l'][0];
$LNG['_time']['D'][7] =& $LNG['_time']['D'][0];
