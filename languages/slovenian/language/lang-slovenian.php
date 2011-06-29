<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version.
  This program comes without any warranty.
  $Source: /cvs/languages/slovenian/language/lang-slovenian.php,v $
  $Revision: 1.6 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:42 $

***********************************************************************/
if (!defined('CPG_NUKE')) { die('You do not have permission to access this file'); }
global $MAIN_CFG;
define('_CHARSET','UTF-8');
define('_BROWSER_LANGCODE','sl');
define('_DATESTRING','%d.%m.%Y');
define('_DATESTRING2','%A, %d.%m.');
define('_DATESTRING3','%d-%b-%Y');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Iskanje');
define('_LOGIN','Vstop');
define('_WRITES','Napisal');
define('_POSTEDON','Poslano');
define('_NICKNAME','Vzdevek');
define('_PASSWORD','Zapora');
define('_WELCOMETO','Dobrodošli na');
define('_EDIT','Zamenjaj');
define('_DELETE','Izbriši');
define('_POSTEDBY','Napisal je');
define('_READS','Vprašanja');
define('_GOBACK','[ <a href="javascript:history.go(-1)">Nazaj</a> ]');
define('_COMMENTS','komentarjev');
define('_PASTARTICLES','Prejšnji članki');
define('_OLDERARTICLES','Stari članki');
define('_BY','od');
define('_ON','-');
define('_LOGOUT','Izhod/odjava');
define('_WAITINGCONT','Vsebina na čakanju');
define('_WREVIEWS','Recenzije na čakanju');
define('_WLINKS','Povezave na čakanju');
define('_ONEDAY','Dan kot današnji...');
define('_ASREGISTERED','Nimate računa? Lahko ga <a href="\'.getlink(\'Your_Account\').\'">odprete brezplačno</a>. Kot');
define('_MENUFOR','Kazalo za');
define('_NOBIGSTORY','Danes ni bilo novih člankov.');
define('_BIGSTORY','Današnji najbolj brani članek je:');
define('_SURVEY','Anketa');
define('_POLLS','Ankete');
define('_PCOMMENTS','Komentarji:');
define('_RESULTS','Rezultati');
define('_HREADMORE','preberi več o tem...');
define('_CURRENTLY','Trenutno je(so)');
define('_GUESTS','obiskovalec(ov) in');
define('_MEMBERS','član(ov) online.');
define('_YOUARELOGGED','Prijavljeni ste kot');
define('_YOUHAVE','Imate');
define('_PRIVATEMSG','zasebno(ih) sporočil-o.');
define('_YOUAREANON','Vi ste neregistrirani obiskovalec. Lahko se registrirate brezplačno <a href="\'.getlink(\'Your_Account\').\'">tukaj</a>');
define('_NOTE','Opozorilo:');
define('_ADMIN','Administrator:');
define('_WERECEIVED','Imamo');
define('_PAGESVIEWS','pregledov strani od');
define('_TOPIC','Tema');
define('_UDOWNLOADS','Downloada');
define('_VOTE','Glas');
define('_VOTES','Glasov');
define('_MVIEWADMIN','Vidijo: samo administratorji');
define('_MVIEWUSERS','Vidijo: samo člani');
define('_MVIEWANON','Vidijo: samo obiskovalci');
define('_MVIEWALL','Vidijo: vsi');
define('_EXPIRELESSHOUR','Preteče: v manj kot 1h');
define('_EXPIREIN','Preteče čez');
define('_UNLIMITED','Neomejeno');
define('_HOURS','Ur');
define('_RSSPROBLEM','Trenutno obstaja problem z naslovnico(headline) s te strani');
define('_SELECTLANGUAGE','Izberite jezik');
define('_SELECTGUILANG','Izberite jezik uporabniškega vmesnika:');
define('_NONE','Ni');
define('_BLOCKPROBLEM','<center>Trenutno obstaja problem s tem blokom.</center>');
define('_BLOCKPROBLEM2','<center>Trenutno ta blok nima vsebine.</center>');
define('_MODULENOTACTIVE','Oprostite, ta modul ni aktiven!');
define('_NOACTIVEMODULES','Neaktivni moduli');
define('_MODULENOEXIST','We\'re sorry, but the requested file, %s, does not appear to exist');
define('_FORADMINTESTS','(za Admin teste)');
define('_BBFORUMS','Forums');
define('_ACCESSDENIED','Access Denied');
define('_RESTRICTEDAREA','Poskušate dostopati v območje z omejenim dostopom.');
define('_MODULEUSERS','Žal je ta del naših spletnih strani namenjen <i>samo za registrirane uporabnike.</i><br><br>Lahko se registrirate brezplačno, če kliknete <a href="\'.getlink(\'Your_Account&amp;file=register\').\'">tukaj</a>, nato boste do tega področja <br>lahko dostopali brez omejitev. Hvala.<br><br>');
define('_MODULEUSERS2','You can register for free by following <a href=\'\'.getlink(\'Your_Account&amp;file=register\').\'\'>this</a> link, thus granting you permission to access this area of our site<br /><br />Thank you for your understanding');
define('_MODULESADMINS','Žal je ta del naših spletnih strani namenjen <i>samo za administratorje</i><br><br> ');
define('_MODULESGROUPS','group access required');
define('_HOME','Home');
define('_HOMEPROBLEM','ukaj imamo velik problem: nimamo domače strani!!!');
define('_ADDAHOME','Dodaj modul na svojo domačo stran/label>');
define('_HOMEPROBLEMUSER','Trenutno so te?ave z domačo stranjo. Prosimo poskusite spet pozneje.');
define('_MORENEWS','Več v oddelku Novice');
define('_ALLCATEGORIES','All Categories');
define('_SPAMGUARDPROTECTED','SpamGuard has blocked this email from being sent');
define('_M_CHARS','Maximum: %s characters');

define('_SYS_MESSAGE','System Message');
define('_SYS_MESSAGES','System Messages');
define('_SYS_MAINTENANCE','You are running under maintenance mode');
define('_SYS_DEMO','You are running under administration demo mode<br />You cannot make any changes to the database<br /><a href="\'.adminlink(\'logout\').\'">Log me out!</a>');

define('_DATE','Datum');
define('_HOUR','Ura');
define('_UMONTH','Mesec');
define('_YEAR','Leto');
define('_JANUARY','January');
define('_FEBRUARY','February');
define('_MARCH','March');
define('_APRIL','April');
define('_MAY','May');
define('_JUNE','June');
define('_JULY','July');
define('_AUGUST','August');
define('_SEPTEMBER','September');
define('_OCTOBER','October');
define('_NOVEMBER','November');
define('_DECEMBER','December');

define('_MONDAY','Monday');
define('_TUESDAY','Tuesday');
define('_WEDNESDAY','Wednesday');
define('_THURSDAY','Thursday');
define('_FRIDAY','Friday');
define('_SATURDAY','Satday');
define('_SUNDAY','Sunday');

define('_ABR_MONDAY','Mon');
define('_ABR_TUESDAY','Tues');
define('_ABR_WEDNESDAY','Wed');
define('_ABR_THURSDAY','Thurs');
define('_ABR_FRIDAY','Fri');
define('_ABR_SATURDAY','Sat');
define('_ABR_SUNDAY','Sun');

define('_BWEL','Dobrodošli');
define('_BPM','Zasebna sporočila');
define('_BUNREAD','Unread');
define('_BREAD','Read');
define('_BMEMP','Članstvo');
define('_BLATEST','Latest');
define('_BTD','New Today');
define('_BYD','Včeraj novih');
define('_BOVER','Overall');
define('_BVISIT','People Online');
define('_BVIS','Visitors');
define('_BMEM','Člani');
define('_BTT','Total');
define('_BON','Online Now');
define('_BREG','Register');
define('_BROADCAST','Pošiljanje javnega sporočila');
define('_BROADCASTFROM','Javno sporočilo od:');
define('_TURNOFFMSG','Izključi javna sporočila');
define('_JOURNAL','Journal');
define('_READMYJOURNAL','Read My Journal');
define('_ADD','Dodaj');
define('_YES','Da');
define('_NO','Ne');
define('_INVISIBLEMODULES','Invisible Modules');
define('_ACTIVEBUTNOTSEE','(Active but invisible link)');

define('_TEAM','Osebje.');
define('_LINKAPPROVEDMSG','Congratulations! The web link you submitted has been approved. Please link back to us and send an email with the url where you have done so.');
define('_MODREQLINKS','Mod. Links');
define('_BROKENLINKS','Broken Links');
define('_MODREQDOWN','Mod. Downloads');
define('_BROKENDOWN','Broken Downloads');
define('_PAGEGENERATION','Page Generation:');
define('_SECONDS','Seconds');
define('_YOUHAVEONEMSG','Imate 1 novo zasebno sporočilo');
define('_NEWPMSG','Nova zasebna sporočila');
define('_CONTRIBUTEDBY','Contributed by');
define('_CHAT','Chat');
define('_REGISTERED','Registered');
define('_CHATGUESTS','Guests');
define('_USERSTALKINGNOW','Users Talking Now');
define('_ENTERTOCHAT','Enter To Chat');
define('_CHATROOMS','Available Rooms');
define('_ALLTOPICS','Vse teme');
define('_ASSOTOPIC','Associated Topics');
define('_HELLO','Pozdravljen');
define('_ALL','Vsi');
define('_URL','URL');
define('_SUBJECT','Naslov');
define('_PREVIEW','Pregled');
define('_SEND','Pošlji');
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
define('_SECURITYCODE','Security Code');
define('_TYPESECCODE','Type Security Code');
define('_MEMBERSOPTIONS','Opcije za člane');
define('_READSEND','Preberite svoja zasebna sporočila. Pošiljanje sporočil drugim.');
define('_INBOX','Prejeto');
define('_NEW','Novo');
define('_ACCOUNTOPTIONS','Vaš račun. Spremenite nastavitve in preberite svoja sporočila.');
define('_LOGOUTACCT','Odjavite se s tega uporabniškega računa.');
define('_LOGOUTADMINACCT','Odjavite se z admin računa.');
define('_BLOGIN','Vaš račun');
define('_BFLOGIN','Profil foruma');
define('_BHID','Skrito');
define('_WHOWHERE','Kdo je kje');
define('_STAFFONL','Prijavljeno osebje');
define('_STAFFNONE','Noben član osebja ni prijavljen!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Community');
define('_ContentLANG','Content');
define('_coppermineLANG','Photo Gallery');
define('_CPGlangLANG','Pomoč pri prevajanju');
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
$PHPMAILER_LANG["provide_address"] = 'You must provide at least one recipient email address.';
$PHPMAILER_LANG["mailer_not_supported"] = ' mailer is not supported.';
$PHPMAILER_LANG["execute"] = 'Could not execute: ';
$PHPMAILER_LANG["instantiate"] = 'Could not instantiate mail function.';
$PHPMAILER_LANG["authenticate"] = 'SMTP Error: Could not authenticate.';
$PHPMAILER_LANG["from_failed"] = 'The following From address failed: ';
$PHPMAILER_LANG["recipients_failed"] = 'SMTP Error: The following recipients failed: ';
$PHPMAILER_LANG["data_not_accepted"] = 'SMTP Error: Data not accepted.';
$PHPMAILER_LANG["connect_host"] = 'SMTP Error: Could not connect to SMTP host.';
$PHPMAILER_LANG["file_access"] = 'Could not access file: ';
$PHPMAILER_LANG["file_open"] = 'File Error: Could not open file: ';
$PHPMAILER_LANG["encoding"] = 'Unknown encoding: ';
/* END class phpmailer lang array */

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_SAVECHANGES','Shrani spremembe');
define('_LANGUAGE','Jezik');
define('_FUNCTIONS','Funkcije');
define('_SHOW','Pokai');
define('_TO','Prejemnik');
define('_DAY','Dan');
define('_LAST','Zadnji');
define('_ACTIVE','Aktiven');
define('_DEACTIVATE','Deaktiviraj');
define('_INACTIVE','Neaktiven');
define('_ACTIVATE','Aktiviraj');
define('_ACTIVATE2','Aktiviraj?');
define('_VIEW','Vidijo');
define('_VIEWPRIV','Kdo to lahko vidi?');
define('_MVADMIN','Samo administratorji');
define('_MVUSERS','Samo člani');
define('_MVANON','Samo obiskovalci');
define('_MVALL','Vsi uporabniki');
define('_IMAGE','Slika');
define('_GO','Pojdi!');
define('_OPTION','Opcija');
define('_CATEGORY','Kategorija');
define('_ID','ifra');
define('_EXPIRATION','Veljavnost');
define('_DAYS','dni');
define('_WARNING','Opozorilo');
define('_POLLTITLE','Naslov ankete');
define('_POLLEACHFIELD','Vsako mono izbiro vnesite v posebno polje');
define('_ADDCATEGORY','Dodaj novo kategorijo');
define('_PAGEBREAK','Če elite članek na več straneh napiite <b>&lt;!--pagebreak--&gt;</b> tam kjer elite prelom strani.');
define('_SIGNATURE','Podpis');
define('_DESCRIPTION','Opis');
define('_EDITCATEGORY','Uredi kategorijo');
define('_IN','v');
define('_DESCRIPTION255','Opis: (255 znakov max)');
define('_MODCATEGORY','Uredi kategorijo');
define('_SUBMITTER','Poiljatelj');
define('_VISIT','Običi');
define('_EXTENDEDTEXT','Razirjeni tekst');
define('_CHECKCATEGORIES','Preveri kategorije');
define('_INCLUDESUBCATEGORIES','(vključi pod-kategorije)');
define('_CHECKSUBCATEGORIES','Preveri pod-kategorije');
define('_VALIDATELINKS','Verificiraj povezave');
define('_FAILED','Neuspelo!');
define('_BEPATIENT','(prosim bodite potrpeljivi)');
define('_VALIDATINGCAT','Verificiram kategorije (in vse pod-kategorije)');
define('_VALIDATINGSUBCAT','Verificiram pod-kategorije');
define('_OK','V redu');
define('_CHECK','Preveri');
define('_IGNORE','Ignoriraj');
define('_HITS','Prebrano');
// index.php
define('_DEFHOMEMODULE','Default Homepage Module');
define('_MODULEINHOME','Module Loaded in the Homepage:');
define('_CHANGE','Change');
define('_WHOSONLINE','Kdo je online');
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
define('_STICK','Sticky');
define('_AUTOMATEDARTICLES','Programirani članki');
define('_STORYID','ID članka');
define('_CURRENTPOLL','Trenutna anketa');

// admin.php
define('_ADMINISTRATION','Administration');
define('_NOADMINYET','There are no Administrators Accounts yet, proceeed to create the Super User:');
define('_CREATEUSERDATA','Do you want to create a normal user with the same data?');
define('_ADMINLOGIN','Vstop v administracijski sistem');
define('_ADMINID','ID administratorja');
define('_EMAIL','E-mail');
define('_SUBMIT','Pošlji');
define('_YOUARELOGGEDOUT','Odjavljeni ste(logged out)!');
define('_PASSWDNOMATCH','Vaa gesla nista identična, vrnite se in poizkusite ponovno');
define('_LOGIN_REMEMBERME','Remember me?');
define('_ADMINMENU_LOGOUT','Administration Menu Logout');
define('_PASSWORD_MALFORMED','Please include at least one number, one capital letter and one lowercase letter in your password');

// admins.php
define('_AUTHORSADMIN','Administracija avtorjev');
define('_NAME','Ime');
define('_REQUIRED','(obvezno)');
define('_MODIFYINFO','Uredi podatke');
define('_DELAUTHOR','Izbrii avtorja');
define('_ADDAUTHOR','Dodaj novega administratorja');
define('_PERMISSIONS','Dovoljenja');
define('_SUPERUSER','Super uporabnik');
define('_SUPERWARNING','OPOZORILO: Če izberete Super uporabnik, bo le-ta imel polni pristop(100%)!');
define('_ADDAUTHOR2','Dodaj avtorja');
define('_RETYPEPASSWD','Ponovi geslo');
define('_FORCHANGES','(Samo za spremembe)');
define('_COMPLETEFIELDS','Izpolniti morate vsa obvezna polja');
define('_CREATIONERROR','Napaka pri kreiranju avtorja');
define('_AUTHORDEL','Izbrii avtorja');
define('_PUBLISHEDSTORIES','Ta administrator je objavil članke');
define('_SELECTNEWADMIN','Izberite new admin da ga ponovno opredelite');
define('_GODNOTDEL','*(GOD račun ne more biti izbrisan)');
define('_MAINACCOUNT','GOD Admin*');
define('_USERS','Člani');

// banners.php
define('_BANNERSADMIN','Administracija bannerjev');
define('_DELETEBANNER','Delete Banner');
define('_SURETODELBANNER','Are you sure you want to delete this banner?');
define('_EDITBANNER','Edit Banner');

// blocks.php
define('_BLOCKSADMIN','Administracija blokov');
define('_CENTER','Center');
define('_CENTERUP','Center Up');
define('_CENTERDOWN','Center Down');
define('_BLOCKFILE','(Datoteka Bloka)');
define('_BLOCKFILE2','FILE');
define('_BLOCKSYSTEM','SYSTEM');
define('_ADDNEWBLOCK','Dodaj nov blok');
define('_RSSFILE','URL datoteke RSS/RDF');
define('_ONLYHEADLINES','(Samo za Headlines)');
define('_REFRESHTIME','Čas osveevanja');
define('_CREATEBLOCK','Izdelaj blok');
define('_EDITBLOCK','Uredi blok');
define('_BLOCK','Blok');
define('_SAVEBLOCK','Shrani blok');
define('_BLOCKACTIVATION','Aktivacija bloka');
define('_BLOCKPREVIEW','to je pregled bloka');
define('_WANT2ACTIVATE','Ali elite aktivirati ta blok?');
define('_ARESUREDELBLOCK','Ali ste sigurni da elite izbrisati ta blok?');
define('_BLOCKUP','Blok GOR');
define('_BLOCKDOWN','Blok DOL');
define('_TITLE','Naslov');
define('_POSITION','Pozicija');
define('_WEIGHT','Tea');
define('_STATUS','Status');
define('_LEFTBLOCK','Levi blok');
define('_LEFT','Levo');
define('_RIGHTBLOCK','Desni blok');
define('_RIGHT','Desno');
define('_TYPE','Tip');
define('_CUSTOM','Custom');
define('_FILENAME','Ime datoteke');
define('_FILEINCLUDE','(Izberite blok za priključitev. Vsa ostala polja bodo ignorirana)');

// comments.php
define('_REMOVECOMMENTS','Delete Comments');
define('_SURETODELCOMMENTS','Ali ste sigurni da elite izbrisati izbrani komentar in vse njegove odgovore?');

// database.php
define('_SAVEDATABASE','Backup DB');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Current Status');
define('_ACTIVATEPAGE','Activate This Page?');

// history.php
define('_EPHEMADMIN','Administracija Enkrat na dananji dan');
define('_ADDEPHEM','Dodaj nov');
define('_EPHEMDESC','Opis');
define('_EPHEMMAINT','Urejanje (Uredi/Izbrii):');
define('_EPHEMEDIT','Uredi');
define('_EPHEMDELETE','Delete Entry');

// headlines.php
define('_RSSFAIL','Problem z naslovom RSS datoteke');
define('_RSSTRYAGAIN','Preverite naslov in ime RSS datoteke in poizkusite ponovno.');
define('_RSSCONTENT','(RSS/RDF vsebina)');
define('_IFRSSWARNING','Če vpiete URL vsebina ki jo napiete ne bo prikazana!');
define('_SETUPHEADLINES','(Izberite Custom in vpiite URL ali samo selektirajte stran s popisa s katere naj se vzema naslovnica)');
define('_HEADLINESADMIN','Administracija naslovnice');
define('_ADDHEADLINE','Dodaj naslovnico');
define('_EDITHEADLINE','Uredi naslovnico');
define('_SURE2DELHEADLINE','OPOZORilo: Ali ste sigurni da elite izbrisati to naslovnico?');

// messages.php
define('_MESSAGESADMIN','Administracija sporočil');
define('_MESSAGETITLE','Naslov');
define('_MESSAGECONTENT','Vsebina');
define('_ALLMESSAGES','Pregled sporočil');
define('_EDITMSG','Uredi sporočilo');
define('_ADDMSG','Dodaj sporočilo');
define('_REMOVEMSG','Are you sure that you want to delete this message?');
define('_CHANGEDATE','Spremeni datum vključitve na dananji?');
define('_IFYOUACTIVE','(Če sedaj aktivirate to sporočilo, bo datum vključitve dananji datum)');

// modules.php
define('_MODULESADMIN','Administracija modula');
define('_HOMECONFIG','Konfiguracija začetne strani');
define('_MODULESADDONS','Moduli in Addoni');
define('_INHOME','In Home');
define('_MODULEHOMENOTE','<b>-= WARNING =-</b><br>Bold module\'s title represents the module you have in the Homepage.<br>You can\'t Deactivate or Restrict this module while it\'s the default one!<br>If you delete the module\'s directory you\'ll see and error in the Homepage.<br>Also, this module has been replaced with <i>Home</i> link in the modules block.');
define('_PUTINHOME','Put in Home');
define('_SURETOCHANGEMOD','Are you sure you want to change your Homepage from');
define('_NOTINMENU','[ <big><strong>&middot;</strong></big> ] means a module which name and link will not be visible in Modules Block');
define('_SHOWINMENU','Visible in Modules Block?');
define('_CUSTOMTITLE','Custom Title');
define('_MODULEEDIT','Modules Edit');
define('_VERSION','Verzija');
define('_UPGRADE','Upgrade to %s');
define('_DBSIZE','DB size');
Thru CVS you can recieve the latest builds of files very easily.<br />
<b>BUT</b> the latest version of a file could have bugs since it is not an official release.<br />
If you are familiar with PHP you can do an update of the files by clicking the link below.<br />
Don\'t forget to make an backup first !!!');
define('_CVS_UPDATE','Update CVS files');

// newsletter.php
define('_FROM','Od');
define('_STAFF','Osebje');
define('_NL_RECIPS','Recipients');
define('_SUBSCRIBEDUSERS','Naročniki');
define('_NL_ALLUSERS','All Members');
define('_NL_ADMINS','Administrators');
define('_NL_REGARDS','Best Regards');
define('_DISCARD','Discard');
define('_REVIEWTEXT','Prosim preglejte:');
define('_MANYUSERSNOTE','OPOZORILO! Veliko ljudi bo prejelo tekst. Prosim počakajte dokler skripta ne konča naloge. To bi lahko trajalo tudi nekaj minut!');
define('_NL_NOUSERS','The group selected to receive this newsletter has zero users<br />Please go back and select a different group');
define('_NUSERWILLRECEIVE','Naročniki bodo prejeli to Pismo z novicami.');
define('_NEWSLETTERSENT','Pismo z novicami je poslano.');

// referers.php
define('_WHOLINKS','Od kje nam prihajajo obiski?');
define('_DELETEREFERERS','Izbrii listo');

// settings.php
define('_SITECONFIG','Konfiguracija strani');
define('_GENSITEINFO','Splone informacije o strani');
define('_SITENAME','Ime strani');
define('_SITEURL','URL strani');
define('_SITELOGO','Logotip');
define('_SITESLOGAN','Slogan');
define('_STARTDATE','Datum aktiviranja strani');
define('_ADMINEMAIL','E-mail administratorja');
define('_ITEMSTOP','tevilo informacij v Top strani');
define('_STORIESHOME','tevilo člankov na začetni strani');
define('_OLDSTORIES','Članek v bloku starih člankov');
define('_ALLOWANONPOST','Ali dovolite anonimnim obiskovalcem da poiljajo članke?');
define('_DEFAULTTHEME','Glavna tema');
define('_SHOWSEC','Show security code');
// maintenance
define('_MAINTENANCE','Maintenance');
define('_MESSAGE','Message');
// multilingual
define('_MULTILINGUALOPT','Večjezične opcije');
define('_SELLANGUAGE','Izberite glavni jezik');
define('_LOCALEFORMAT','Lokalni format časa');
define('_ACTMULTILINGUAL','Aktiviraj večjezične monosti? ');
define('_ACTUSEFLAGS','Prikai zastave namesto dropdown menujev? ');
// banners
define('_BANNERSOPT','Opcije za bannerje');
define('_ACTBANNERS','Aktivirajte bannerje?');
// footer
define('_FOOTERMSG','Sporočila v podnoju strani');
define('_FOOTERLINE1','1 vrsta');
define('_FOOTERLINE2','2 vrsta');
define('_FOOTERLINE3','3 vrsta');
// backend
define('_BACKENDCONF','Backend konfiguracija');
define('_BACKENDTITLE','Backend naslov');
define('_BACKENDLANG','Backend jezik');
// mail stories
define('_MAIL2ADMIN','Poljite administratorju vse članke po e-mailu');
define('_NOTIFYSUBMISSION','Obvestilo o prejemu člankov po e-mailu(za admina)?');
define('_EMAIL2SENDMSG','E-mail na katerega gre obvestilo');
define('_EMAILSUBJECT','E-mail zadeva');
define('_EMAILMSG','E-mail sporočilo');
define('_EMAILFROM','E-mail račun (od)');
// comments
define('_COMMENTSOPT','Opcije komentarja');
define('_COMMENTSLIMIT','MAX dolina v byt-ih');
define('_COMMENTSMOD','Spremembe komentarja');
define('_MODADMIN','Administratorjeve spremembe');
define('_MODUSERS','Uporabnikove spremembe');
define('_NOMOD','Ni sprememb');
// adminmenu
define('_GRAPHICOPT','Grafične opcije');
define('_BOTH','Both');
define('_GRAPHICAL','Graphical');
define('_SIDEBLOCK','Sideblock');
// miscellaneous
define('_MISCOPT','Razne opcije');
define('_ACTIVATEHTTPREF','Aktiviraj HTTP Referere?');
define('_MAXREF','Koliko referera elite kot MAX?');
define('_COMMENTSPOLLS','Aktiviraj komentarje v anketah?');
define('_COMMENTSARTICLES','Aktiviraj komentarje v člankih?');
// censor
define('_CENSOROPTIONS','Censure Options');
define('_CENSORMODE','Censor Mode');
define('_NOFILTERING','No filtering');
define('_EXACTMATCH','Exact match');
define('_MATCHBEG','Match word at the beginning');
define('_MATCHANY','Match anywhere in the text');
define('_CENSORREPLACE','Replace Censored Words with:');
// email
define('_EMAILOPTIONS','Options for email from Contact Module and Newsletter');
define('_ALLOW_HTML_EMAIL','Allow html email');
define('_USE_SMTP','Use SMTP for email instead of php');
define('_SMTP_HOST','Address of smtp host(smtp.host.tld)');
define('_USE_SMTP_AUTH','Server requires SMTP authorization');
define('_SMTP_USER_NAME','SMTP User Name');
define('_SMTP_USER_PASS','SMTP User Password');

// cpg_adminmenu.php
define('_ADMINMENU','Administracijsko kazalo');
define('_ADMINLOGOUT','Izhod/odjava');
define('_AMENU1','General');
define('_AMENU2','Members');
define('_AMENU3','Messages');
define('_AMENU4','Forums');
define('_AMENU5','Informative');
define('_AMENU6','Linking');
define('_AMENU9','Modules');
// menu items
define('_PREFERENCES','Nastavitve sistema');
define('_DATABASE','Database');
define('_BLOCKS','Bloki');
define('_MODULES','Moduli');
define('_EDITADMINS','Spremeni administratorje');
define('_MESSAGES','Sporočila');
define('_BANNERS','Banners');
define('_HTTPREFERERS','Od kod prihajajo obiskovalci');
define('_EDITUSERS','Spremeni članek');
define('_USERSCONFIG','Members Config');
define('_NEWSLETTER','Pismo z novicami');
define('_SUBMISSIONS','Novo poslani članki');
define('_ADDSTORY','Dodaj članek');
define('_TOPICS','Teme');
define('_ADMPOLLS','Ankete');
define('_EPHEMERIDS','Nekoč davno...');
define('_REVIEWS','Recenzije');
define('_ENCYCLOPEDIA','Encyclopedia');
define('_SURVEYS','Ankete');
define('_SECTIONS','Oddelke');
define('_ARTICLES','Člankih');
define('_FAQ','FAQ');
define('_DOWNLOAD','Download');
define('_WEBLINKS','Povezave');
define('_CONTENT','Vsebina');
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
