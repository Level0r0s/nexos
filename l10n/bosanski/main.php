<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/bosanski/main.php,v $
  $Revision: 9.33 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:45 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','bs');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %B %d @ %T %Z');
define('_DATESTRING2','%A, %B %d');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Next Page');
define('_PREVIOUSPAGE','Previous Page');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Traži');
define('_LOGIN','Login');
define('_WRITES','piše');
define('_POSTEDON','Postavljeno');
define('_NICKNAME','Nadimak');
define('_PASSWORD','Lozinka');
define('_WELCOMETO','Dobrodošao na');
define('_EDIT','Edituj');
define('_DELETE','Obriši');
define('_POSTEDBY','Postavio');
define('_READS','puta pročitano');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Idi nazad</a>' : '<a href="javascript:history.go(-1)">Idi nazad</a>').' ]');
define('_COMMENTS','komentara');
define('_PASTARTICLES','Prethodni članci');
define('_OLDERARTICLES','Stariji članci');
define('_BY','od');
define('_ON','u');
define('_LOGOUT','Logout');
define('_WAITINGCONT','Sadržaj na čekanju');
define('_WREVIEWS','Reviewi na čekanju');
define('_WLINKS','Linkovi na čekanju');
define('_ONEDAY','Jedan dan kao danas...');
define('_ASREGISTERED','Još uvijek se niste registrovali? Možete se <a href="'.getlink('Your_Account&amp;file=register').'">registrovati ovdje</a>. Kao registrovani korisnik dobijate mnoge benificije kao što su promjena izgleda, konfiguracija komentara i postavljanje komentara sa svojim imenom.');
define('_MENUFOR','Sadržaj za');
define('_NOBIGSTORY','Nema najčitanijeg članka danas.');
define('_BIGSTORY','Najčitaniji članak danas:');
define('_SURVEY','Anketa');
define('_POLLS','Sve Ankete');
define('_PCOMMENTS','Komentara:');
define('_RESULTS','Trenutni rezultati');
define('_HREADMORE','pročitaj još...');
define('_CURRENTLY','Trenutno je prisutno,');
define('_GUESTS','gostiju i');
define('_MEMBERS','članova koji su on-line.');
define('_YOUARELOGGED','Ulogovan si pod imenom');
define('_YOUHAVE','Imaš');
define('_PRIVATEMSG','privatnih poruka.');
define('_YOUAREANON','Vi ste anonimni korisnik. Možete se besplatno registrovati ako kliknete <a href="'.getlink('Your_Account&amp;file=register').'">ovdje</a>');
define('_NOTE','Napomena:');
define('_ADMIN','Admin:');
define('_WERECEIVED','Imali smo');
define('_PAGESVIEWS','posjeta stranici od');
define('_TOPIC','Tema');
define('_UDOWNLOADS','Download');
define('_VOTE','Glasaj');
define('_VOTES','Glasova');
define('_MVIEWADMIN','View: Samo admin');
define('_MVIEWUSERS','View: Samo registrovani korisnici');
define('_MVIEWANON','View: Samo gosti');
define('_MVIEWALL','View: Svi posjetioci');
define('_EXPIRELESSHOUR','Vrijeme trajanja: manje od jednog sata');
define('_EXPIREIN','Prestaje važiti');
define('_UNLIMITED','Neograničeno');
define('_HOURS','Sati');
define('_RSSPROBLEM','Trenutno imamo problem sa pregledom glavnih vijesti sa ove stranice');
define('_SELECTLANGUAGE','Odaberi jezik');
define('_SELECTGUILANG','Odaberi jezik interfacea:');
define('_NONE','Niko');
define('_BLOCKPROBLEM','<center>Trenutno imamo problem sa ovim blokom.</center>');
define('_BLOCKPROBLEM2','<center>Trenutno nema sadržaja za ovaj blok.</center>');
define('_MODULENOTACTIVE','Nažalost, ovaj modul nije aktivan');
define('_NOACTIVEMODULES','Neaktivni moduli');
define('_MODULENOEXIST','Zao nam je, ali trazeni fajl, %s, nije na ovoj lokaciji.');
define('_FORADMINTESTS','(za Admin testiranje)');
define('_BBFORUMS','Forum');
define('_ACCESSDENIED','Nemate ovlaštenje pristupa');
define('_RESTRICTEDAREA','Pokušali ste pristupiti restriktovanoj zoni.');
define('_MODULEUSERS','Nažalost, ova sekcija stranice je <i>isključivo za registrovane korisnike.</i><br /><br />Možete se besplatno registrovati ako kliknete <a href="'.getlink('Your_Account&amp;file=register').'">ovdje</a>, tada će te moći pristupiti ovoj sekciji<br />bez restrikcija. Hvala.<br /><br />');
define('_MODULEUSERS2','Možete se besplatno registrovati ako kliknete <a href="'.getlink('Your_Account&amp;file=register').'">na ovaj</a> link, to ce vam omogučiti pristup svim opcijama ovoga sajta.<br /><br />Hvala na razumijevanju.');
define('_MODULESADMINS','Ova sekcija stranice je isključivo za <i>Administratora.</i><br /><br />');
define('_MODULESGROUPS','Pristup samo članovima ove grupe');
define('_HOME','Start');
define('_HOMEPROBLEM','Imamo veliki problem: nemamo početne stranice!!!');
define('_ADDAHOME','Dodaj modul na svoj start');
define('_HOMEPROBLEMUSER','Trenutno imamo problem na početnoj stranici, molimo vas pokušajte pristupiti kasnije.');
define('_MORENEWS','Još u sekciji vijesti');
define('_ALLCATEGORIES','Sve kategorije');
define('_SPAMGUARDPROTECTED','Spam Protekcija ne dozvoljava ovaj e-mail da bude poslan');
define('_M_CHARS','Maximalan: %s karaktera');

define('_SYS_MESSAGE','Sistemska Poruka');
define('_SYS_MESSAGES','Sistemska Poruka');
define('_SYS_MAINTENANCE','Sajt radi u modu za odrzavanje');
define('_SYS_DEMO','Ovo je demo mod za administratore<br />Ne mogu se napraviti nikakve promjene u bazi<br /><a href="'.adminlink('logout').'">Log me out!</a>');

define('_DATE','Datum');
define('_HOUR','Sat');
define('_UMONTH','Mjesec');
define('_YEAR','Godina');
define('_JANUARY','Januar');
define('_FEBRUARY','Februar');
define('_MARCH','Mart');
define('_APRIL','April');
define('_MAY','Maj');
define('_JUNE','Juni');
define('_JULY','Juli');
define('_AUGUST','August');
define('_SEPTEMBER','Septembar');
define('_OCTOBER','Oktobar');
define('_NOVEMBER','Novembar');
define('_DECEMBER','Decembar');

define('_MONDAY','Ponedeljak');
define('_TUESDAY','Utorak');
define('_WEDNESDAY','Srijeda ');
define('_THURSDAY','Četvrtak');
define('_FRIDAY','Petak');
define('_SATURDAY','Subota');
define('_SUNDAY','Nedelja');
//three letter abbrev.
define('_ABR_MONDAY','Pon.');
define('_ABR_TUESDAY','Utr.');
define('_ABR_WEDNESDAY','Srd.');
define('_ABR_THURSDAY','Čtv.');
define('_ABR_FRIDAY','Ptk.');
define('_ABR_SATURDAY','Ptk.');
define('_ABR_SUNDAY','Ned.');

define('_BWEL','Vozdra');
define('_BPM','Privatne Poruke');
define('_BUNREAD','Nepročitanih');
define('_BREAD','Ukupno');
define('_BMEMP','Članovi');
define('_BLATEST','Najnoviji');
define('_BTD','Novih danas');
define('_BYD','Novih jučer');
define('_BOVER','Ukupno');
define('_BVISIT','Osoba Online');
define('_BVIS','Posjetioca');
define('_BMEM','Članova');
define('_BTT','Ukupno');
define('_BON','Online sada');
define('_BREG','Registruj se');
define('_BROADCAST','Pošalji Javnu Poruku');
define('_BROADCASTFROM','Javna Poruka od');
define('_TURNOFFMSG','Onemogući Javne Poruke');
define('_JOURNAL','Dnevnik');
define('_READMYJOURNAL','Pročitaj moj Dnevnik');
define('_ADD','Dodaj');
define('_YES','Da');
define('_NO','Ne');
define('_INVISIBLEMODULES','Nevidljivi moduli');
define('_ACTIVEBUTNOTSEE','(Aktivan ali nevidljiv link)');
define('_BOTS','Bots');

define('_UM','Provjeri za nove verzije Dragonfly');
define('_UM_F','Neuspio pokušaj nadgradnje servisa. Probaj kasnije ponovo.');
define('_UM_G','Koristiš zadnju verziju od Dragonfly');
define('_UM_R','Molimo <a href="%2$s" target="_blank">nadgradi na novu verziju</a> od Dragonfly %1$s');

define('_TEAM','Tim');
define('_LINKAPPROVEDMSG','Čestitamo! Link koji ste prijavili je odobren, molimo dodajte naš link na vaš sajt.');
define('_MODREQLINKS','Mod. linkovi');
define('_BROKENLINKS','Izgubljeni liknovi');
define('_MODREQDOWN','Mod. downloadi');
define('_BROKENDOWN','Izgubljeni downloadi');
define('_PAGEGENERATION','Stranica generisana:');
define('_SECONDS','Sekundi');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Stranica generisana za %1$s sekundi and %2$s DB Queries in %3$s seconds');
define('_YOUHAVEONEMSG','Imaš jednu novu privatnu poruku');
define('_NEWPMSG','novih privatnih poruka');
define('_CONTRIBUTEDBY','Postavio');
define('_CHAT','Chat');
define('_REGISTERED','Registrovanih');
define('_CHATGUESTS','Gostiju');
define('_USERSTALKINGNOW','Korisnici koji trenutno chataju');
define('_ENTERTOCHAT','Ulazak na Chat');
define('_CHATROOMS','Dostupne sobe');
define('_ALLTOPICS','All Topics');
define('_ASSOTOPIC','Srodne teme');
define('_HELLO','Vozdra');
define('_ALL','All');
define('_URL','URL');
define('_SUBJECT','Subjekat');
define('_PREVIEW','Provjeri');
define('_SEND','Posalji');
define('_ANONYMOUS','Nepoznat');
define('_BREADCRUMB', 'Breadcrumb Delimiter, appears in page titles between the words');
define('_BC_DELIM',isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&gt;&gt;');
define('_RESET','Reset');
define('_AT','at');
define('_LASTMSGS','Last %s Forum Messages');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','Printer Friendly Page');

define('_CREDITS_TITLE','Krediti');
define('_CREDITS_PRODUCT','Proizvod');
define('_CREDITS_DESC','Opi');
define('_CREDITS_AUTHORS','Autor/i');

define('_PP_TITLE','Privacy Policy');
define('_PP_MODIFY','Prepravi ovu poruku');

define('_SENDEREMAIL','Email pošiljaoca');
define('_SENDERNAME','Ime pošiljaoca');
define('_RECIPIENTNAME','Ime Primaoca');
define('_RECIPIENTEMAIL','E-mail Primaoca');

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
define('_TB_BLOCK','Moj Alat');
define('_TB_TASKS','Ciljevi');
define('_TB_INFO','Informacije');
define('_TB_PROFILE_INFO','Moj profil');
define('_TB_EDIT_PROFILE','Informacije iz mog profila');
define('_TB_EDIT_REG','Moji registrovani detalji ');
define('_TB_EDIT_PRIVATE','Moje privatne informacije');
define('_TB_EDIT_AVATAR','Moja sličica');
define('_TB_DELETE','Izbriši me sa ovog sajta');
define('_TB_CONFIG','Konfiguracija');
define('_TB_EDIT_PREFS','My preferences');
define('_TB_EDIT_HOME','Moje Opcije Stranice');
define('_TB_EDIT_COMM','My comment settings');
define('_TB_PERSONAL','Lično');
define('_TB_PERSONAL_GALLERY','Moje slike');
define('_TB_PERSONAL_JOURNAL','Moj dnevnik');
define('_TB_PRIVMSGS','Privatne poruke');
define('_TB_PRIVMSGS_INBOX','Pristigle poruke');
define('_TB_PRIVMSGS_OUTBOX','Poruke spremne za slanje');
define('_TB_PRIVMSGS_SENTBOX','Poslane poruke');
define('_TB_PRIVMSGS_SAVEBOX','Sačuvane poruke');
define('_TB_PRIVMSGS_SEND','Pošalji poruku');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','Korisnikove Informacije');
define('_SECURITYCODE','Sigurnosni kod');
define('_TYPESECCODE','Otkucaj svoj sigurnosni kod');
define('_MEMBERSOPTIONS','Opcije za članove');
define('_READSEND','Čitaj svoje privatne poruke ili pošalji poruke drugima.');
define('_INBOX','Pristigle poruke');
define('_NEW','Nove');
define('_ACCOUNTOPTIONS','Your Account. Change options and read your messages.');
define('_LOGOUTACCT','Log out of this account.');
define('_LOGOUTADMINACCT','Log out of admin account.');
define('_BLOGIN','Vas Nalog');
define('_BFLOGIN','Forum Profil');
define('_BHID','Sakriveno');
define('_WHOWHERE','Ko je Gdje');
define('_STAFFONL','Staff Online');
define('_STAFFNONE','Nema nikog Od Glavnih online!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Community');
define('_BlogsLANG','Blogs');
define('_ContentLANG','Content');
define('_coppermineLANG','Galerija Slika');
define('_CPGlangLANG','Pomoc u Prevodjenju');
define('_DownloadsLANG','Downloads');
define('_EncyclopediaLANG','Encyclopedia');
define('_ForumsLANG','Community Forums');
define('_ContactLANG','Contact Us');
define('_FAQLANG','FAQ - Help');
define('_Members_ListLANG','Members List');
define('_NewsLANG','News');
define('_ReviewsLANG','Reviews');
define('_SearchLANG','Search');
define('_StatisticsLANG','Statistics');
define('_Stories_ArchiveLANG','Stories Archive');
define('_Submit_NewsLANG','Submit News');
define('_SurveysLANG','Surveys');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Topics');
define('_Private_MessagesLANG','My Private Messages');
define('_Tell_a_FriendLANG','Tell a Friend');
define('_Web_LinksLANG','Links');
define('_Your_AccountLANG','My Account');
define('_CPG_EventsLANG','Calendar');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Languages!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Groups');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Headlines');

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
$PHPMAILER_LANG['provide_address'] = 'You must provide at least one recipient email address.';
$PHPMAILER_LANG['mailer_not_supported'] = ' mailer is not supported.';
$PHPMAILER_LANG['execute'] = 'Could not execute: ';
$PHPMAILER_LANG['instantiate'] = 'Could not instantiate mail function.';
$PHPMAILER_LANG['authenticate'] = 'SMTP Error: Could not authenticate.';
$PHPMAILER_LANG['from_failed'] = 'The following From address failed: ';
$PHPMAILER_LANG['recipients_failed'] = 'SMTP Error: The following recipients failed: ';
$PHPMAILER_LANG['data_not_accepted'] = 'SMTP Error: Data not accepted.';
$PHPMAILER_LANG['connect_host'] = 'SMTP Error: Could not connect to SMTP host.';
$PHPMAILER_LANG['file_access'] = 'Could not access file: ';
$PHPMAILER_LANG['file_open'] = 'File Error: Could not open file: ';
$PHPMAILER_LANG['encoding'] = 'Unknown encoding: ';
/* END class phpmailer lang array */

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_SAVECHANGES','Save Changes');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Language');
define('_FUNCTIONS','Functions');
define('_SHOW','Show');
define('_TO','To');
define('_DAY','Day');
define('_LAST','Last');
define('_ACTIVE','Active');
define('_DEACTIVATE','Deactivate');
define('_INACTIVE','Inactive');
define('_ACTIVATE','Activate');
define('_ACTIVATE2','Activate?');
define('_VIEW','Visible to');
define('_VIEWPRIV','Show this to');
define('_MVADMIN','Administrators Only');
define('_MVUSERS','Registered Users Only');
define('_MVANON','Anonymous Users Only');
define('_MVALL','All Visitors');
define('_IMAGE','Image');
define('_GO','Go!');
define('_OPTION','Option');
define('_CATEGORY','Category');
define('_SUBCATEGORY','Sub-Category');
define('_ID','ID');
define('_EXPIRATION','Expiration');
define('_DAYS','days');
define('_WARNING','Warning');
define('_POLLTITLE','Poll Title');
define('_POLLEACHFIELD','Please enter each available option into a single field');
define('_ADDCATEGORY','Add a New Category');
define('_PAGEBREAK','If you want multiple pages you can write <b>&lt;!--pagebreak--&gt;</b> where you want to cut.');
define('_SIGNATURE','Signature');
define('_DESCRIPTION','Description');
define('_EDITCATEGORY','Edit Category');
define('_IN','in');
define('_DESCRIPTION255','Description: (255 characters max)');
define('_MODCATEGORY','Modify a Category');
define('_SUBMITTER','Submitter');
define('_VISIT','Visit');
define('_EXTENDEDTEXT','Extended Text');
define('_CHECKCATEGORIES','Check Categories');
define('_INCLUDESUBCATEGORIES','(include Sub-Categories)');
define('_CHECKSUBCATEGORIES','Check Sub-Categories');
define('_VALIDATELINKS','Validate Links');
define('_FAILED','Failed!');
define('_BEPATIENT','(please be patient)');
define('_VALIDATINGCAT','Validating Category (and all subcategories)');
define('_VALIDATINGSUBCAT','Validating Sub-Category');
define('_OK','Ok!');
define('_CHECK','Check');
define('_IGNORE','Ignore');
define('_HITS','Hits');
define('_FILESIZE', 'File Size');
define("_EZTHEREIS","There are");
define("_EZSUBCAT","sub-categories");
define("_EZATTACHEDTOCAT","under this category");
define("_EZBROKENLINKS","Broken Links");
define("_DELEZLINKCATWARNING","WARNING : Are you sure you want to delete this category ?<br /> You will delete all sub-categories and attached links as well !");

// index.php
define('_DEFHOMEMODULE','Default Homepage Module');
define('_MODULEINHOME','Module loaded in the homepage:');
define('_CHANGE','Change');
define('_WHOSONLINE','Who\'s Online');
define('_NP_ADMIN','Notepad');
define('_NP_LOCKED','The notepad has been locked<br />Only a root administrator (super user) can unlock it');
define('_NP_SAVE','Save Notes');
define('_NP_UNLOCK','Unlock Notepad');
define('_NP_LOCK','Lock Notepad');
// news
define('_STICKY','Sticky Articles');
define('_ARTICLEUP','Move article up');
define('_ARTICLEDOWN','Move article down');
define('_UNSTICK','Unstick');
define('_STICK','Sticky');
define('_AUTOMATEDARTICLES','Scheduled Articles');
define('_STORYID','Story ID');
define('_CURRENTPOLL','Current Survey');

// admin.php
define('_ADMINISTRATION','Administration');
define('_NOADMINYET','There are no administrator accounts yet, proceed to create the super user...');
define('_CREATEUSERDATA','Would you like to create a regular user with the same data?');
define('_ADMINLOGIN','Login to administration menu');
define('_ADMINID','Nickname');
define('_EMAIL','Email');
define('_SUBMIT','Submit');
define('_YOUARELOGGEDOUT','The system has successfully logged you out');
define('_PASSWDNOMATCH','The passwords do not match. Please go back and re-enter them.');
define('_LOGIN_REMEMBERME','Remember me?');
define('_ADMINMENU_LOGOUT','Administration Menu Logout');
define('_PASSWORD_MALFORMED','Please include at least one number, one capital letter and one lowercase letter in your password');

// admins.php
define('_AUTHORSADMIN','Administrator Control');
define('_NAME','Name');
define('_REQUIRED','(required)');
define('_MODIFYINFO','Modify Info');
define('_DELAUTHOR','Delete Administrator');
define('_ADDAUTHOR','Add a new administrator');
define('_PERMISSIONS','Permissions');
define('_SUPERUSER','Super User');
define('_SUPERWARNING','Warning: If Super User is checked, the administrator will be granted full permissions');
define('_ADDAUTHOR2','Add Administrator');
define('_RETYPEPASSWD','Retype Password');
define('_FORCHANGES','(For Changes Only)');
define('_COMPLETEFIELDS','You must complete all compulsory fields');
define('_CREATIONERROR','Creation of new administrator failed');
define('_AUTHORDEL','Delete Administrator');
define('_PUBLISHEDSTORIES','This administrator has published stories');
define('_SELECTNEWADMIN','Please choose an existing administrator to assign the stories to');
define('_GODNOTDEL','The super user cannot be deleted!');
define('_MAINACCOUNT','Super User *');
define('_USERS','Users');

// banners.php
define('_BANNERSADMIN','Banners Administration');
define('_DELETEBANNER','Delete Banner');
define('_SURETODELBANNER','Are you sure you want to delete this banner?');
define('_EDITBANNER','Edit Banner');

// blocks.php
define('_BLOCKSADMIN','Blocks Administration');
define('_CENTER','Center');
define('_CENTERUP','Center Up');
define('_CENTERDOWN','Center Down');
define('_BLOCKFILE','(Block File)');
define('_BLOCKFILE2','FILE');
define('_BLOCKSYSTEM','SYSTEM');
define('_ADDNEWBLOCK','Add a New Block');
define('_RSSFILE','RSS/RDF File URL');
define('_ONLYHEADLINES','(Only for headlines)');
define('_REFRESHTIME','Refresh Time');
define('_CREATEBLOCK','Create Block');
define('_EDITBLOCK','Edit Block');
define('_BLOCK','Block');
define('_SAVEBLOCK','Save Block');
define('_BLOCKACTIVATION','Block Activation');
define('_BLOCKPREVIEW','This is the preview for');
define('_WANT2ACTIVATE','Would you like to activate this block?');
define('_ARESUREDELBLOCK','Are you sure you want to remove');
define('_BLOCKUP','Move block up');
define('_BLOCKDOWN','Move block down');
define('_BLOCKTOP','Move block to top');
define('_BLOCKBOTTOM','Move block to bottom');
define('_TITLE','Title');
define('_POSITION','Position');
define('_WEIGHT','Weight');
define('_STATUS','Status');
define('_LEFTBLOCK','Left Block');
define('_LEFT','Left');
define('_RIGHTBLOCK','Right Block');
define('_RIGHT','Right');
define('_TYPE','Type');
define('_CUSTOM','Custom');
define('_FILENAME','Filename');
define('_FILEINCLUDE','If you use this option, ignore the Content and Refresh time fields');
define('_VISIBLEINMODULES', 'Visible in modules');

// comments.php
define('_REMOVECOMMENTS','Delete Comments');
define('_SURETODELCOMMENTS','Are you sure you want to delete the selected comment and all replies associated with it?');

// database.php
define('_SAVEDATABASE','Backup');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Current Status');
define('_ACTIVATEPAGE','Activate This Page?');

// history.php
define('_EPHEMADMIN','Today in History');
define('_ADDEPHEM','Add a new entry');
define('_EPHEMDESC','Entry description');
define('_EPHEMMAINT','Entry Lookup');
define('_EPHEMEDIT','Edit Entry');
define('_EPHEMDELETE','Delete Entry');

// headlines.php
define('_RSSFAIL','There seems to be a problem with the URL for this RSS feed');
define('_RSSTRYAGAIN','Please check the URL and RSS filename and try again');
define('_RSSCONTENT','(RSS/RDF Content)');
define('_IFRSSWARNING','If you supply a URL, the content you supply will be ignored');
define('_SETUPHEADLINES','Select \'Custom\' and supply the URL to the RSS feed, or just select a site from the dropdown to fetch news headlines');
define('_HEADLINESADMIN','Headlines Administration');
define('_ADDHEADLINE','Add Headline');
define('_EDITHEADLINE','Edit Headlines');
define('_SURE2DELHEADLINE','Are you sure you want to delete this headline?');

// messages.php
define('_MESSAGESADMIN','Messages Administration');
define('_MESSAGETITLE','Title');
define('_MESSAGECONTENT','Content');
define('_ALLMESSAGES','Overview messages');
define('_EDITMSG','Edit message');
define('_ADDMSG','Add message');
define('_REMOVEMSG','Are you sure that you want to delete this message?');
define('_CHANGEDATE','Reset start date to today?');
define('_IFYOUACTIVE','If you activate this message now, the start date will be set to today');

// modules.php
define('_MODULESADMIN','Modules Administration');
define('_HOMECONFIG','Home Configuration');
define('_MODULESADDONS','Modules and Addons');
define('_INHOME','Set as Home Module');
define('_MODULEHOMENOTE','New modules added to the /modules/ folder will automatically be added to the system<br />Removing a module\'s folder from this directory will automatically remove the module from the system<br /><br />The module with a bold title denotes the module set as my homepage<br />This module cannot be deactivated or restricted to certain users');
define('_PUTINHOME','Set as Home');
define('_SURETOCHANGEMOD','Are you sure you want to change your Homepage from');
define('_NOTINMENU','[ <strong>&middot;</strong> ] denotes a module hidden from view in the Modules block');
define('_SHOWINMENU','Show in menu?');
define('_CUSTOMTITLE','Custom Title');
define('_MODULEEDIT','Modules Edit');
define('_VERSION','Version');
define('_UPGRADE','Upgrade to %s');
define('_DBSIZE','DB size');
define('_CVS_EXPLAIN','This module appears to be able to receive updates through our CVS (Concurrent Versioning System). With CVS, you are able to receive the latest updates of a file very easily, but the latest version of a file may contain bugs as it is likely not part of our stable release.<br /><br />If you are familiar with PHP, you can update this module with the latest CVS files by using the link below. <strong>Backup all files first!</strong>');
define('_CVS_UPDATE','Update CVS files');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','From');
define('_STAFF','Staff');
define('_NL_RECIPS','Recipients');
define('_SUBSCRIBEDUSERS','Subscribed Members');
define('_NL_ALLUSERS','All Members');
define('_NL_ADMINS','Administrators');
define('_NL_REGARDS','Best Regards');
define('_DISCARD','Discard');
define('_REVIEWTEXT','Please look over your message and check for typos');
define('_MANYUSERSNOTE','Due to the large number of users that will receive this newsletter, the task may take several minutes to complete<br />Please be patient!');
define('_NL_NOUSERS','The group selected to receive this newsletter has zero users<br />Please go back and select a different group');
define('_NUSERWILLRECEIVE','users will receive this newsletter');
define('_NLUNSUBSCRIBE',"We sent you this message because you have selected to receive newsletters from our site\n\nYou can choose to unsubscribe from our mailings at any time by following <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">this</a> link\n\nIf you would like further assistance, please send an email to <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">our administrator</a>");
define('_NEWSLETTERSENT','The newsletter has been sent');

// referers.php
define('_WHOLINKS','Who\'s linking to our site?');
define('_DELETEREFERERS','Delete Referers');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Footer');
define('_DEBUG', 'Debug');
define('_SITECONFIG','Web Site Configuration');
define('_GENSITEINFO','General Site Information');
define('_SITENAME','Site Name');
define('_SITEURL','Site URL');
define('_SITELOGO','The filename of my site\'s logo (stored in /images)');
define('_SITESLOGAN','My site\'s slogan');
define('_STARTDATE','When my site was founded');
define('_ADMINEMAIL','Administrator Email');
define('_ITEMSTOP','No. of items to rank in Top module');
define('_STORIESHOME','No. of stories to show on main news page');
define('_OLDSTORIES','No. of stories to show in Old Articles block');
define('_ALLOWANONPOST','Allow unregistered users to post news articles');
define('_DEFAULTTHEME','The default theme for my site');
define('_SHOWSEC','Show security code');
define('_TOOLTIPS','Show tooltips on designated fields');
define('_UM_TOGGLE','Enable Update Service');
define('_UM_EXPLAIN','This will retrieve two pieces of information from our website, dragonflycms.org: the current build of Dragonfly, and any important messages that pertain to your version of Dragonfly. The only data sent to our site is your Dragonfly version number; we do <strong>not</strong> log these requests to our server.');
// maintenance
define('_MAINTENANCE','Maintenance');
define('_MESSAGE','Message');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','Language System');
define('_SELLANGUAGE','Default language for my site');
define('_LOCALEFORMAT','Local time format');
define('_ACTMULTILINGUAL','Activate site-wide multi-lingual features');
define('_ACTUSEFLAGS','Use flags instead of a drop-down box');
// banners
define('_BANNERSOPT','Banner System');
define('_ACTBANNERS','Activate the banner system');
// footer
define('_FOOTERMSG','Page Footer (optional)');
define('_FOOTERLINE1','Footer, line one');
define('_FOOTERLINE2','Footer, line two');
define('_FOOTERLINE3','Footer, line three');
// backend
define('_BACKENDCONF','Syndication');
define('_BACKENDTITLE','Feed title');
define('_BACKENDLANG','Feed language');
// mail stories
define('_MAIL2ADMIN','Pending News Submissions');
define('_NOTIFYSUBMISSION','Notify administrator of pending articles');
define('_EMAIL2SENDMSG','Recipient email address');
define('_EMAILSUBJECT','Subject of email');
define('_EMAILMSG','Message body of email');
define('_EMAILFROM','Sender email address');
// comments
define('_COMMENTSOPT','Comments');
define('_COMMENTSLIMIT','Truncate comments after __ characters');
define('_COMMENTSMOD','Allow moderations of comments');
define('_MODADMIN','Yes, by administrators');
define('_MODUSERS','Yes, by users');
define('_NOMOD','No, do not use moderation');
// adminmenu
define('_GRAPHICOPT','Administration Menu Layout');
define('_BOTH','Both');
define('_GRAPHICAL','Graphical');
define('_SIDEBLOCK','Side-block');
// miscellaneous
define('_MISCOPT','Miscellaneous');
define('_ACTIVATEHTTPREF','Activate logging of HTTP referers');
define('_MAXREF','Set limit on number of referers');
define('_COMMENTSPOLLS','Activate the comment system in surveys');
define('_COMMENTSARTICLES','Activate the comment system in news articles');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','Censor');
define('_CENSORMODE','Mode for matching');
define('_NOFILTERING','No filtering');
define('_EXACTMATCH','Exact match');
define('_MATCHBEG','Match at beginning of text');
define('_MATCHANY','Match anywhere in the text');
define('_CENSORREPLACE','Replacement for restricted word');
// email
define('_EMAILOPTIONS','Mail');
define('_ALLOW_HTML_EMAIL','Allow the use of HTML in email');
define('_USE_SMTP','Use SMTP server as opposed to PHP\'s mailer');
define('_SMTP_HOST','SMTP host address (smtp.example.com)');
define('_USE_SMTP_AUTH','Does server require SMTP authorization');
define('_SMTP_USER_NAME','SMTP username');
define('_SMTP_USER_PASS','SMTP password');

// cpg_adminmenu.php
define('_ADMINMENU','Administration Menu');
define('_ADMINLOGOUT','Log Out');
define('_AMENU0','System');
define('_AMENU1','General');
define('_AMENU2','Members');
define('_AMENU3','Messages');
define('_AMENU4','Forums');
define('_AMENU5','Informative');
define('_AMENU6','Linking');
define('_AMENU7','Commerce');
define('_AMENU8','Multimedia');
define('_AMENU9','Modules');
define('_BMENU1','Help');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','Main Settings');
define('_DATABASE','Database');
define('_BLOCKS','Blocks');
define('_MODULES','Modules');
define('_EDITADMINS','Admins');
define('_MESSAGES','Messages');
define('_BANNERS','Banners');
define('_HTTPREFERERS','HTTP Referers');
define('_EDITUSERS','Members');
define('_USERSCONFIG','Members Config');
define('_NEWSLETTER','Newsletter');
define('_SUBMISSIONS','Poslano');
define('_ADDSTORY','Add Story');
define('_TOPICS','Topics');
define('_ADMPOLLS','Surveys');
define('_EPHEMERIDS','Today in History');
define('_REVIEWS','Reviews');
define('_ENCYCLOPEDIA','Encyclopedia');
define('_SURVEYS','Surveys');
define('_SECTIONS','Sections');
define('_ARTICLES','Articles');
define('_FAQ','FAQ');
define('_DOWNLOAD','Downloads');
define('_WEBLINKS','Web Links');
define('_CONTENT','Content');
define('_SYSINFO','System Info');
define('_REPORTABUG','Report a Bug');
//coppermine admin
define('_W_INSTALL','Which Installation?');
define('_W_PAGE','Which Page?');
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
define('_ERROR_NO_GET','GET requests are not allowed for this function...');
define('_ERROR_BAD_CHAR','The characters that you tried to include in your %s request are forbidden...');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','You tried to access this page through a bad link...');
define('_ERROR_NONE_TO_DISPLAY','There are no %s to display');
define('_ERROR_DELETE_CONF','Are you sure that you want to delete %s?');
define('_ERROR_NO_EXIST','%s does not exist');
define('_ERROR_ALREADYEXIST','%s already exists');
define('_TASK_COMPLETED','Operation complete!');
define('_CONFIRM','Confirm');
define('_FOOTER_COPYRIGHTS', 'Interactive software released under <a href="http://dragonflycms.org/GNUGPL.html" target="_blank" title="GNU Public License Agreement">GNU GPL</a>,	<a href="'.getlink('credits').'">Code Credits</a>,	<a href="'.getlink('privacy_policy').'">Privacy Policy</a>');

# time
$LNG = array('_time' => array(
'l' => array('Nedelja', 'Ponedeljak', 'Utorak', 'Srijeda', 'Četvrtak', 'Petak', 'Subota'),
'D' => array('Ned', 'Pon', 'Utr', 'Srd', 'Čtv', 'Ptk', 'Ptk'),
'F' => array(1=>'Januar', 'Februar', 'Mart', 'April', 'Maj', 'Juni', 'Juli', 'August', 'Septembar', 'Oktobar', 'Novembar', 'Decembar'),
'M' => array(1=>'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
));
$LNG['_time']['l'][7] =& $LNG['_time']['l'][0];
$LNG['_time']['D'][7] =& $LNG['_time']['D'][0];
