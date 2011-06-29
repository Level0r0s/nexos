<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version.
  This program comes without any warranty.
  $Source: /cvs/languages/macedonian/language/lang-macedonian.php,v $
  $Revision: 1.3 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:38 $

***********************************************************************/
if (!defined('CPG_NUKE')) { die('You do not have permission to access this file'); }
global $MAIN_CFG;
define('_CHARSET','UTF-8');
define('_BROWSER_LANGCODE','mk');
define('_DATESTRING','%A, %B %d @ %T %Z');
define('_DATESTRING2','%A, %B %d');
define('_DATESTRING3','%d-%b-%Y');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Барај');
define('_LOGIN','Логин');
define('_WRITES','пишува');
define('_POSTEDON','Објавено на');
define('_NICKNAME','<b>корисничко име</b>');
define('_PASSWORD','<b>лозинка</b>');
define('_WELCOMETO','Добредојде во');
define('_EDIT','Измени');
define('_DELETE','Бриши');
define('_POSTEDBY','Објавено од');
define('_READS','пати прочитано');
define('_GOBACK','[ <a href="javascript:history.go(-1)">назад</a> ]');
define('_COMMENTS','коментари');
define('_PASTARTICLES','стари вести');
define('_OLDERARTICLES','архива');
define('_BY','од');
define('_ON','на');
define('_LOGOUT','одлогирање');
define('_WAITINGCONT','Необјавени вести ');
define('_WREVIEWS','Необјавени критики');
define('_WLINKS','Необјавени линкови');
define('_ONEDAY','Еден ден како денес...');
define('_ASREGISTERED','Сакаш да го смениш изгледот на страната или да коментираш? Треба да се <a href="\'.getlink("Your_Account").\'">регистираш</a>. Информациите не ги продаваме, ниту пак даваме на трети лица.');
define('_MENUFOR','Мени за');
define('_NOBIGSTORY','За денес нема вести.');
define('_BIGSTORY','Најшитана вест денес е:');
define('_SURVEY','Анкета');
define('_POLLS','Анкети');
define('_PCOMMENTS','Коментари:');
define('_RESULTS','Резултати');
define('_HREADMORE','читај повеќе...');
define('_CURRENTLY','Сега има');
define('_GUESTS','гости и');
define('_MEMBERS','членови онлајн.');
define('_YOUARELOGGED','Ти си логиран(а) како');
define('_YOUHAVE','Имаш');
define('_PRIVATEMSG','лични пораки');
define('_YOUAREANON','Ти си анонимен корисник. Може да се регистрираш <a href="\'.getlink("Your_Account").\'">тука</a>.');
define('_NOTE','<b><i>Забелешка:</i></b>');
define('_ADMIN','Администратор:');
define('_WERECEIVED','');
define('_PAGESVIEWS','пристапи од');
define('_TOPIC','Тема');
define('_UDOWNLOADS','Преземања');
define('_VOTE','Гласај');
define('_VOTES','Гласови');
define('_MVIEWADMIN','Преглед: само администратори');
define('_MVIEWUSERS','Преглед: само регистрирани корисници');
define('_MVIEWANON','Преглед: само анонимни корисници');
define('_MVIEWALL','Преглед: сите корисници');
define('_EXPIRELESSHOUR','Престанува да важи: помалку од еден час');
define('_EXPIREIN','Престанува да важи за');
define('_UNLIMITED','Неограничено');
define('_HOURS','Часови');
define('_RSSPROBLEM','Моментално има проблеми со насловите од оваа страна');
define('_SELECTLANGUAGE','Избери јазик');
define('_SELECTGUILANG','Избери јазик за интерфејс');
define('_NONE','Нема');
define('_BLOCKPROBLEM','<center>Моментално има проблеми со овој блок.</center>');
define('_BLOCKPROBLEM2','<center>Моментално нема содржина за овој блок.</center>');
define('_MODULENOTACTIVE','Модулот не е активен!');
define('_NOACTIVEMODULES','Неактивни модули');
define('_MODULENOEXIST','We\'re sorry, but the requested file, %s, does not appear to exist');
define('_FORADMINTESTS','(за администраторски тестови)');
define('_BBFORUMS','Форум');
define('_ACCESSDENIED','Недозволен пристап');
define('_RESTRICTEDAREA','Се овидуваш да пристапиш во забранета зона.');
define('_MODULEUSERS','Жал ни е, но овој дел од нашата страна е само за <i>регистрирани корисници</i><br><br>Можеш да се регистрираш <a href="\'.getlink("Your_Account&amp;file=register").\'">овде</a>, и потоа<br>да пристапиш без ограничувања. Благодарам.<br><br>');
define('_MODULEUSERS2','You can register for free by following <a href=\'\'.getlink(\'Your_Account&amp;file=register\').\'\'>this</a> link, thus granting you permission to access this area of our site<br /><br />Thank you for your understanding');
define('_MODULESADMINS','Жал ни е, но овој дел од нашата страна е само за <i>администратори.</i><br><br>');
define('_MODULESGROUPS','group access required');
define('_HOME','Главна страна');
define('_HOMEPROBLEM','Има голем проблем: немаме главна страна!!');
define('_ADDAHOME','Додади модул кај тебе');
define('_HOMEPROBLEMUSER','Моментално има проблем на страната, ве молиме навратете подоцна.');
define('_MORENEWS','Повеќе во делот за вести');
define('_ALLCATEGORIES','Сите кадегории');
define('_SPAMGUARDPROTECTED','SpamGuard has blocked this email from being sent');
define('_M_CHARS','Maximum: %s characters');

define('_SYS_MESSAGE','System Message');
define('_SYS_MESSAGES','System Messages');
define('_SYS_MAINTENANCE','You are running under maintenance mode');
define('_SYS_DEMO','You are running under administration demo mode<br />You cannot make any changes to the database<br /><a href="\'.adminlink(\'logout\').\'">Log me out!</a>');

define('_DATE','Дата');
define('_HOUR','Час');
define('_UMONTH','месец');
define('_YEAR','година');
define('_JANUARY','јануари');
define('_FEBRUARY','февруари');
define('_MARCH','март');
define('_APRIL','април');
define('_MAY','мај');
define('_JUNE','јуни');
define('_JULY','јули');
define('_AUGUST','август');
define('_SEPTEMBER','септември');
define('_OCTOBER','октомври');
define('_NOVEMBER','ноември');
define('_DECEMBER','декември');

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

define('_BWEL','Добредојде');
define('_BPM','Приватни пораки');
define('_BUNREAD','Непрочитани');
define('_BREAD','Читај');
define('_BMEMP','Членство');
define('_BLATEST','Последни');
define('_BTD','Нови денес');
define('_BYD','Нови од Вчера');
define('_BOVER','Се на се');
define('_BVISIT','Луѓе он-лајн');
define('_BVIS','Посетители');
define('_BMEM','Челенови');
define('_BTT','вкупно');
define('_BON','Он-лајн сега');
define('_BREG','Регистрирај се');
define('_BROADCAST','Broadcast Public Message');
define('_BROADCASTFROM','Public Message from');
define('_TURNOFFMSG','Turn Off Public Messages');
define('_JOURNAL','Journal');
define('_READMYJOURNAL','Read My Journal');
define('_ADD','Add');
define('_YES','Yes');
define('_NO','No');
define('_INVISIBLEMODULES','Invisible Modules');
define('_ACTIVEBUTNOTSEE','(Active but invisible link)');

define('_TEAM','Team');
define('_LINKAPPROVEDMSG','Congratulations! The web link you submitted has been approved, please link back to us.');
define('_MODREQLINKS','Mod. Links');
define('_BROKENLINKS','Broken Links');
define('_MODREQDOWN','Mod. Downloads');
define('_BROKENDOWN','Broken Downloads');
define('_PAGEGENERATION','Page Generation:');
define('_SECONDS','Seconds');
define('_YOUHAVEONEMSG','You Have 1 New Private Message');
define('_NEWPMSG','New Private Messages');
define('_CONTRIBUTEDBY','Contributed by');
define('_CHAT','Chat');
define('_REGISTERED','Registered');
define('_CHATGUESTS','Guests');
define('_USERSTALKINGNOW','Users Talking Now');
define('_ENTERTOCHAT','Enter To Chat');
define('_CHATROOMS','Available Rooms');
define('_ALLTOPICS','All Topics');
define('_ASSOTOPIC','Associated Topics');
define('_HELLO','Hello');
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
define('_SECURITYCODE','Security Code');
define('_TYPESECCODE','Type Security Code');
define('_MEMBERSOPTIONS','Members options');
define('_READSEND','Read your private messages. Send messages to others.');
define('_INBOX','Inbox');
define('_NEW','New');
define('_ACCOUNTOPTIONS','Your Account. Change options and read your messages.');
define('_LOGOUTACCT','Log out of this account.');
define('_LOGOUTADMINACCT','Log out of admin account.');
define('_BLOGIN','Your Account');
define('_BFLOGIN','Forum Profile');
define('_BHID','Hidden');
define('_WHOWHERE','Who Is Where');
define('_STAFFONL','Staff Online');
define('_STAFFNONE','No staff members are online!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Community');
define('_ContentLANG','Content');
define('_coppermineLANG','Photo Gallery');
define('_CPGlangLANG','Помош за превод');
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
define('_HTTPREFERERS','HTTP препораки');
define('_EDITUSERS','Members');
define('_USERSCONFIG','Members Config');
define('_NEWSLETTER','Newsletter');
define('_SUBMISSIONS','Доставувања');
define('_ADDSTORY','Add Story');
define('_TOPICS','Topics');
define('_ADMPOLLS','Surveys');
define('_EPHEMERIDS','Дневно мото');
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
