<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version.
  This program comes without any warranty.
  $Source: /cvs/languages/lithuanian/language/lang-lithuanian.php,v $
  $Revision: 1.3 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:37 $

***********************************************************************/
if (!defined('CPG_NUKE')) { die('You do not have permission to access this file'); }
global $MAIN_CFG;
define('_CHARSET','UTF-8');
define('_BROWSER_LANGCODE','en');
define('_DATESTRING','%Y %m %d @ %T');
define('_DATESTRING2','%A, %B %d');
define('_DATESTRING3','%d-%b-%Y');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Ieškoti');
define('_LOGIN','Prisijungti');
define('_WRITES','rašo');
define('_POSTEDON','Patalpinta');
define('_NICKNAME','Pravardė');
define('_PASSWORD','Slaptažodis');
define('_WELCOMETO','Sveiki atvykę į');
define('_EDIT','Redaguoti');
define('_DELETE','Trinti');
define('_POSTEDBY','Patalpino');
define('_READS','perskaitė');
define('_GOBACK','[ <a href="javascript:history.go(-1)">Grįžti</a> ]');
define('_COMMENTS','komentarai');
define('_PASTARTICLES','Archyvas');
define('_OLDERARTICLES','Archyvas');
define('_BY','');
define('_ON','');
define('_LOGOUT','Atsijungti');
define('_WAITINGCONT','Siuntimai');
define('_WREVIEWS','Apžvalgos');
define('_WLINKS','Nuorodos');
define('_ONEDAY','Vieną panašią į šiandien dieną...');
define('_ASREGISTERED','Dar neprisiregistravote? Tai galite <a href="\'.getlink(\'Your_Account\').\'">užsiregistruoti</a>. Registruoti vartotojai gali keisti išvaizdą, tinkinti komentarus bei komentuoti savo vardu.');
define('_MENUFOR','Meniu skirtas');
define('_NOBIGSTORY','Populiariausios šios dienos naujienos dar nėra.');
define('_BIGSTORY','Šios dienos populiariausia naujiena yra:');
define('_SURVEY','Apklausa');
define('_POLLS','Apklausos');
define('_PCOMMENTS','Komentarai:');
define('_RESULTS','Rezultatai');
define('_HREADMORE','plačiau...');
define('_CURRENTLY','Šiuo metu prisijungę');
define('_GUESTS','svečių ir');
define('_MEMBERS','narių.');
define('_YOUARELOGGED','Jūs prisijungėte kaip');
define('_YOUHAVE','Jūs turite');
define('_PRIVATEMSG','privačių žinučių.');
define('_YOUAREANON','Jūs esate anoniminis vartotojas. Jūs galite prisiregistruoti nemokamai <a href="\'.getlink(\'Your_Account\').\'">čia</a>');
define('_NOTE','Pastaba:');
define('_ADMIN','Administratorius:');
define('_WERECEIVED','Musų puslapius matė');
define('_PAGESVIEWS','kartus nuo');
define('_TOPIC','Tema ');
define('_UDOWNLOADS','Programos');
define('_VOTE','Balsuoti');
define('_VOTES','Balsai');
define('_MVIEWADMIN','Matymas: Tik administratoriams');
define('_MVIEWUSERS','Matymas: Tik registruotiems vartotojams');
define('_MVIEWANON','Matymas: Tik anoniminiams vartotojams');
define('_MVIEWALL','Matymas: Visi lankytojai');
define('_EXPIRELESSHOUR','Galiojimas: Mažiau nei 1 valanda');
define('_EXPIREIN','Galiojimas baigsis po');
define('_UNLIMITED','Neribota');
define('_HOURS','Valandos');
define('_RSSPROBLEM','Dabar turime problemų su šios svetainės antraštėmis');
define('_SELECTLANGUAGE','Pasirinkite kalbą');
define('_SELECTGUILANG','Pasirinkite sąsajos kalbą:');
define('_NONE','Pasirinkite');
define('_BLOCKPROBLEM','<center>Turime problemų su šiuo bloku.</center>');
define('_BLOCKPROBLEM2','<center>Šiame bloke informacijos dabar nėra.</center>');
define('_MODULENOTACTIVE','Atsiprašome, bet šis modulis pasyvus!');
define('_NOACTIVEMODULES','Neaktyvūs moduliai');
define('_MODULENOEXIST','We\'re sorry, but the requested file, %s, does not appear to exist');
define('_FORADMINTESTS','(Administratoriaus bandymams)');
define('_BBFORUMS','Diskusijos');
define('_ACCESSDENIED','Priėjimas uždraustas');
define('_RESTRICTEDAREA','Jūs bandote patekti į uždraustą vietą.');
define('_MODULEUSERS','Atsiprašome, bet šis svetainės skyrius skirtas <i>tik registruotiems vartotojams.</i><br><br>Jūs galite nemokamai užsiregistruoti <a href="\'.getlink(\'Your_Account&amp;file=register\').\'">čia</a>, o tada galėsite<br>pasiekti šį skyrių be apribojimų. Dėkojame.<br><br>');
define('_MODULEUSERS2','You can register for free by following <a href=\'\'.getlink(\'Your_Account&amp;file=register\').\'\'>this</a> link, thus granting you permission to access this area of our site<br /><br />Thank you for your understanding');
define('_MODULESADMINS','Atsiprašome, bet šis svetainės skyrius skirtas <i>tik administratoriams.</i><br><br>');
define('_MODULESGROUPS','group access required');
define('_HOME','Pradžia');
define('_HOMEPROBLEM','Didelė problema: nėra svetainės!!!');
define('_ADDAHOME','Patalpinti modulį į pirmą puslapį');
define('_HOMEPROBLEMUSER','Turime problemų pirmame puslapyje. Prašome užsukti vėliau.');
define('_MORENEWS','Plačiau naujienų skyriuje');
define('_ALLCATEGORIES','Visos kategorijos');
define('_SPAMGUARDPROTECTED','SpamGuard has blocked this email from being sent');
define('_M_CHARS','Maximum: %s characters');

define('_SYS_MESSAGE','System Message');
define('_SYS_MESSAGES','System Messages');
define('_SYS_MAINTENANCE','You are running under maintenance mode');
define('_SYS_DEMO','You are running under administration demo mode<br />You cannot make any changes to the database<br /><a href="\'.adminlink(\'logout\').\'">Log me out!</a>');

define('_DATE','Data');
define('_HOUR','Valanda');
define('_UMONTH','Mėnuo');
define('_YEAR','Metai');
define('_JANUARY','Sausis');
define('_FEBRUARY','Vasaris');
define('_MARCH','Kovas');
define('_APRIL','Balandis');
define('_MAY','Gegužė');
define('_JUNE','Birželis');
define('_JULY','Liepa');
define('_AUGUST','Rugpjūtis');
define('_SEPTEMBER','Rugsėjis');
define('_OCTOBER','Spalis');
define('_NOVEMBER','Lapkritis');
define('_DECEMBER','Gruodis');

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

define('_BWEL','Sveiki');
define('_BPM','Privačios žinutės');
define('_BUNREAD','Naujos');
define('_BREAD','Skaitytos');
define('_BMEMP','Narystė');
define('_BLATEST','Naujausias');
define('_BTD','Nauji šiandien');
define('_BYD','Nauji vakar');
define('_BOVER','Viso');
define('_BVISIT','Prisijungę');
define('_BVIS','Svečiai');
define('_BMEM','Nariai');
define('_BTT','Viso');
define('_BON','Dabar prisijungę');
define('_BREG','Registracija');
define('_BROADCAST','Viešos žinutės siuntimas');
define('_BROADCASTFROM','Vieša žinutė nuo');
define('_TURNOFFMSG','Išjungti viešas žinutes');
define('_JOURNAL','Dienoraštis');
define('_READMYJOURNAL','Skaityti dienoraštį');
define('_ADD','Pridėti');
define('_YES','Taip');
define('_NO','Ne');
define('_INVISIBLEMODULES','Nematomi moduliai');
define('_ACTIVEBUTNOTSEE','(Aktyvios nematomos nuorodos)');

define('_TEAM','Komanda');
define('_LINKAPPROVEDMSG','Congratulations! The web link you submitted has been approved, please link back to us.');
define('_MODREQLINKS','Keistinos nuorodos');
define('_BROKENLINKS','Neveikiančios nuorodos');
define('_MODREQDOWN','Keistinos programos');
define('_BROKENDOWN','Neveikiančios programos');
define('_PAGEGENERATION','Puslapių generavimas:');
define('_SECONDS','Sekundžių');
define('_YOUHAVEONEMSG','Jūs gavote 1 žinutę');
define('_NEWPMSG','naujas žinutes');
define('_CONTRIBUTEDBY','Suteikė');
define('_CHAT','Chat');
define('_REGISTERED','Užsiregistravęs');
define('_CHATGUESTS','Svečiai');
define('_USERSTALKINGNOW','Dalyviai dabar šnekasi');
define('_ENTERTOCHAT','Įeiti į pokalbių kambarį');
define('_CHATROOMS','Galimi kambariai');
define('_ALLTOPICS','Visos temos');
define('_ASSOTOPIC','Susiję temos');
define('_HELLO','Labas');
define('_ALL','All');
define('_URL','URL');
define('_SUBJECT','Subject');
define('_PREVIEW','Preview');
define('_SEND','Send');
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
define('_SECURITYCODE','Saugos kodas');
define('_TYPESECCODE','Įrašykite saugos kodą');
define('_MEMBERSOPTIONS','Members options');
define('_READSEND','Read your private messages. Send messages to others.');
define('_INBOX','Inbox');
define('_NEW','New');
define('_ACCOUNTOPTIONS','Your Account. Change options and read your messages.');
define('_LOGOUTACCT','Log out of this account.');
define('_LOGOUTADMINACCT','Log out of admin account.');
define('_BLOGIN','Your Account');
define('_BFLOGIN','Forumo profailas');
define('_BHID','Paslčpta');
define('_WHOWHERE','Who Is Where');
define('_STAFFONL','Staff Online');
define('_STAFFNONE','No staff members are online!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Community');
define('_ContentLANG','Turinys');
define('_coppermineLANG','Photo Gallery');
define('_CPGlangLANG','Help Translate');
define('_DownloadsLANG','Downloads');
define('_EncyclopediaLANG','Enciklopedija');
define('_ForumsLANG','Community Forums');
define('_ContactLANG','Kontaktai');
define('_FAQLANG','DUK-Pagalba');
define('_JournalLANG','Journal');
define('_Members_ListLANG','Nauraas');
define('_NewsLANG','Naujienos');
define('_ReviewsLANG','Ap˛valgos');
define('_SearchLANG','Paieka');
define('_StatisticsLANG','Statistika');
define('_Stories_ArchiveLANG','Straipsniu; archyvas');
define('_Submit_NewsLANG','Siu;sti naujienas');
define('_SurveysLANG','Apklausos');
define('_TopicsLANG','Temos');
define('_Private_MessagesLANG','Mano ˛inute.s');
define('_Recommend_UsLANG','Rekomenduok mus');
define('_Web_LinksLANG','Nuorodos');
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
define('_SAVECHANGES','Save Changes');
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
define('_MODULEHOMENOTE','<strong>.: Important Information :.</strong><br />New modules added to the /modules/ folder will automatically be added to the system<br />Removing a module\'s folder from this directory will automatically remove the module from the system<br /><br />The module with a bold title denotes the module set as my homepage<br />This module cannot be deactivated or restricted to certain users');
define('_PUTINHOME','Set as Home');
define('_SURETOCHANGEMOD','Are you sure you want to change your Homepage from');
define('_NOTINMENU','[ <strong>&middot;</strong> ] denotes a module hidden from view in the Modules block');
define('_SHOWINMENU','Show in Modules block?');
define('_CUSTOMTITLE','Custom Title');
define('_MODULEEDIT','Modules Edit');
define('_VERSION','Version');
define('_UPGRADE','Upgrade to %s');
define('_DBSIZE','DB size');
Thru CVS you can recieve the latest builds of files very easily.<br />
<b>BUT</b> the latest version of a file could have bugs since it is not an official release.<br />
If you are familiar with PHP you can do an update of the files by clicking the link below.<br />
Don\'t forget to make an backup first !!!');
define('_CVS_UPDATE','Update CVS files');

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
define('_NEWSLETTERSENT','The newsletter has been sent');

// referers.php
define('_WHOLINKS','Who\'s linking to our site?');
define('_DELETEREFERERS','Delete Referers');

// settings.php
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
// maintenance
define('_MAINTENANCE','Maintenance');
define('_MESSAGE','Message');
// multilingual
define('_MULTILINGUALOPT','Language System');
define('_SELLANGUAGE','Default language for my site');
define('_LOCALEFORMAT','Local time format');
define('_ACTMULTILINGUAL','Activate site-wide multi-lingual features');
define('_ACTUSEFLAGS','Use flags instead of a drop-down box');
// banners
define('_BANNERSOPT','Banner System');
define('_ACTBANNERS','Activate the banner system?');
// footer
define('_FOOTERMSG','Page Footer');
define('_FOOTERLINE1','Footer, line one');
define('_FOOTERLINE2','Footer, line two');
define('_FOOTERLINE3','Footer, line three');
// backend
define('_BACKENDCONF','RSS Feed');
define('_BACKENDTITLE','Feed title');
define('_BACKENDLANG','Feed language');
// mail stories
define('_MAIL2ADMIN','Pending News Submissions');
define('_NOTIFYSUBMISSION','Notify administrator of pending articles?');
define('_EMAIL2SENDMSG','Recipient email address');
define('_EMAILSUBJECT','Subject of email');
define('_EMAILMSG','Message body of email');
define('_EMAILFROM','Sender email address');
// comments
define('_COMMENTSOPT','Comments System');
define('_COMMENTSLIMIT','Truncate comments after __ characters');
define('_COMMENTSMOD','Allow moderations of comments?');
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
define('_ACTIVATEHTTPREF','Activate logging of HTTP referers?');
define('_MAXREF','Set limit on number of referers');
define('_COMMENTSPOLLS','Activate the comment system in surveys?');
define('_COMMENTSARTICLES','Activate the comment system in news articles?');
// censor
define('_CENSOROPTIONS','Censor System');
define('_CENSORMODE','Mode for matching');
define('_NOFILTERING','No filtering');
define('_EXACTMATCH','Exact match');
define('_MATCHBEG','Match at beginning of text');
define('_MATCHANY','Match anywhere in the text');
define('_CENSORREPLACE','Replacement for restricted word');
// email
define('_EMAILOPTIONS','Mail System');
define('_ALLOW_HTML_EMAIL','Allow the use of HTML in email?');
define('_USE_SMTP','Use SMTP server as opposed to PHP\'s mailer');
define('_SMTP_HOST','SMTP host address (smtp.host.tld)');
define('_USE_SMTP_AUTH','Does server require SMTP authorization?');
define('_SMTP_USER_NAME','SMTP username');
define('_SMTP_USER_PASS','SMTP password');

// cpg_adminmenu.php
define('_ADMINMENU','Administration Menu');
define('_ADMINLOGOUT','Log Out');
define('_AMENU1','General');
define('_AMENU2','Members');
define('_AMENU3','Messages');
define('_AMENU4','Forums');
define('_AMENU5','Informative');
define('_AMENU6','Linking');
define('_AMENU9','Modules');
// menu items
define('_PREFERENCES','Main Settings');
define('_DATABASE','Database');
define('_BLOCKS','Blocks');
define('_MODULES','Modules');
define('_EDITADMINS','Admins');
define('_MESSAGES','Messages');
define('_BANNERS','Banners');
define('_HTTPREFERERS','Rekomendacijos');
define('_EDITUSERS','Members');
define('_USERSCONFIG','Members Config');
define('_NEWSLETTER','Newsletter');
define('_SUBMISSIONS','Siuntimai');
define('_ADDSTORY','Add Story');
define('_TOPICS','Temos');
define('_ADMPOLLS','Surveys');
define('_EPHEMERIDS','Ephemerids');
define('_REVIEWS','Reviews');
define('_ENCYCLOPEDIA','Encyclopedia');
define('_SURVEYS','Surveys');
define('_SECTIONS','Sections');
define('_ARTICLES','Articles');
define('_FAQ','FAQ');
define('_DOWNLOAD','Downloads');
define('_WEBLINKS','Web Links');
define('_CONTENT','Content');
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
