<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version.
  This program comes without any warranty.
  $Source: /cvs/languages/swahili/language/lang-swahili.php,v $
  $Revision: 1.4 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:42 $

***********************************************************************/
if (!defined('CPG_NUKE')) { die('You do not have permission to access this file'); }
global $MAIN_CFG;
define('_CHARSET','UTF-8');
define('_BROWSER_LANGCODE','sw');
define('_DATESTRING','%A, %B %d @ %T %Z');
define('_DATESTRING2','%A, %B %d');
define('_DATESTRING3','%d-%b-%Y');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Tafuta');
define('_LOGIN','Ingia');
define('_WRITES','andika');
define('_POSTEDON','Iliandikwa');
define('_NICKNAME','Jana la Utani');
define('_PASSWORD','Neno la Siri');
define('_WELCOMETO','Karibu Kwenye');
define('_EDIT','Badilisha');
define('_DELETE','Futa');
define('_POSTEDBY','Imeandikwa na');
define('_READS','soma');
define('_GOBACK','[ <a href="javascript:history.go(-1)">Go Back</a> ]');
define('_COMMENTS','maoni');
define('_PASTARTICLES','Nakala Zilizopita');
define('_OLDERARTICLES','Nakala za Zamani');
define('_BY','toka kwa');
define('_ON','lini');
define('_LOGOUT','Ondoka');
define('_WAITINGCONT','Subiri Makala');
define('_WREVIEWS','Subiri Maoni');
define('_WLINKS','Njia Mkato ');
define('_ONEDAY','Siku kama ya Leo...');
define('_ASREGISTERED','Bado Hauna Akanunti? Unaweza <a href="\'.getlink(\'Your_Account&amp;file=register\').\'">Kutengeneza Yako</a>. Kama Mtumiaji aliyesajiliwa unaweza kutumia theme manager, maoni, configuration na Kutuma Mawazo yako na jina lako.');
define('_MENUFOR','Ratiba ya');
define('_NOBIGSTORY','Hakuna Makala Kubwa kwa siku ya leo.');
define('_BIGSTORY','Makala iliyo somwa sana ni:');
define('_SURVEY','Kura Bubu');
define('_POLLS','Kura');
define('_PCOMMENTS','Maoni:');
define('_RESULTS','Majibu');
define('_HREADMORE','soma zaidi...');
define('_CURRENTLY','Kwa Wakati huu kuna,');
define('_GUESTS','Mgeni(wageni) na');
define('_MEMBERS','wanachama waliopo.');
define('_YOUARELOGGED','Umeingia Kama');
define('_YOUHAVE','Una');
define('_PRIVATEMSG','Barua za Siri.');
define('_YOUAREANON','Hauja Ingia. Unaweza <a href="\'.getlink(\'Your_Account\')."">Kuingia</a> au kujiandikisha bure <a href="\'.getlink(\'Your_Account&amp;file=register\').\'">here</a>');
define('_NOTE','Noti:');
define('_ADMIN','Admin:');
define('_WERECEIVED','Tumepokea');
define('_PAGESVIEWS','Kurasa zilizoangaliwa toka');
define('_TOPIC','Topiki');
define('_UDOWNLOADS','Downloads');
define('_VOTE','Kura');
define('_VOTES','Kura');
define('_MVIEWADMIN','Angalia: Wakubwa wa Mambo');
define('_MVIEWUSERS','Angalia: Watumiaji ');
define('_MVIEWANON','Angalia: Wageni wa Siri');
define('_MVIEWALL','Angalia: Wageni Wote');
define('_EXPIRELESSHOUR','Itaisha: Chini ya lisaa limoja');
define('_EXPIREIN','Itaisha');
define('_UNLIMITED','Unlimited');
define('_HOURS','Saa');
define('_RSSPROBLEM','Kwa Sasa kuna matatizo na vichwa vya habari');
define('_SELECTLANGUAGE','Chagua Lugha');
define('_SELECTGUILANG','Chagua Lugha ya Mtandao');
define('_NONE','Hakuna Kitu');
define('_BLOCKPROBLEM','<center>Kuna Matatizo sasa.</center>');
define('_BLOCKPROBLEM2','<center>Hakuna Kitu Hapa Sasa Hivi.</center>');
define('_MODULENOTACTIVE','Upande Huu hauja Funguliwa!');
define('_NOACTIVEMODULES','Module Haiko wazi');
define('_MODULENOEXIST','We\'re sorry, but the requested file, %s, does not appear to exist');
define('_FORADMINTESTS','(Kwa Admin peke yake)');
define('_BBFORUMS','Forums');
define('_ACCESSDENIED','Hauruhusiwi Kuingia');
define('_RESTRICTEDAREA','Unajaribu Kuingia Sehemu ambayo hairuhusiwi.');
define('_MODULEUSERS','Samahani, Sehemu Hii ni kwa <i>watumiaji waliojiandikisha tu.</i><br><br>Unaweza Kujiandikisha bure Bonyeza hapa <a href="\'.getlink(\'Your_Account&amp;file=register\').\'">here</a>, Unaweza<br>kuingia Hapa bila Matatizo. Asante.<br><br>');
define('_MODULEUSERS2','You can register for free by following <a href=\'\'.getlink(\'Your_Account&amp;file=register\').\'\'>this</a> link, thus granting you permission to access this area of our site<br /><br />Thank you for your understanding');
define('_MODULESADMINS','Samahani, Sehemu Hii ni kwa <i>Administrators Tu.</i><br><br>');
define('_MODULESGROUPS','group access required');
define('_HOME','Mwanzo');
define('_HOMEPROBLEM',' Matatizo: Hakuna Ukurasa wa Kwanza!!!');
define('_ADDAHOME','Weka Module Mpya ');
define('_HOMEPROBLEMUSER','Kuna Matatizo Kwenye Ukurasa wa Mwanzo. Tafadhali jaribu Baadaye.');
define('_MORENEWS','Zaidi Kwenye Habari');
define('_ALLCATEGORIES','Sehemu Zote');
define('_SPAMGUARDPROTECTED','SpamGuard has blocked this email from being sent');
define('_M_CHARS','Maximum: %s characters');

define('_SYS_MESSAGE','System Message');
define('_SYS_MESSAGES','System Messages');
define('_SYS_MAINTENANCE','You are running under maintenance mode');
define('_SYS_DEMO','You are running under administration demo mode<br />You cannot make any changes to the database<br /><a href="\'.adminlink(\'logout\').\'">Log me out!</a>');

define('_DATE','Tarehe');
define('_HOUR','Saa');
define('_UMONTH','Mwezi');
define('_YEAR','Mwaka');
define('_JANUARY','Januari');
define('_FEBRUARY','Februari');
define('_MARCH','Machi');
define('_APRIL','Aprili');
define('_MAY','May');
define('_JUNE','June');
define('_JULY','Julai');
define('_AUGUST','Agusti');
define('_SEPTEMBER','September');
define('_OCTOBER','October');
define('_NOVEMBER','November');
define('_DECEMBER','Disemba');

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

define('_BWEL','Karibu');
define('_BPM','Barua za Siri');
define('_BUNREAD','Hazijasomwa');
define('_BREAD','Soma');
define('_BMEMP','Wanachama');
define('_BLATEST','Mpya');
define('_BTD','Mpya za Leo');
define('_BYD','Mpya za Jana');
define('_BOVER','Zote');
define('_BVISIT','Watu waliopo');
define('_BVIS','Wageni');
define('_BMEM','Wanachama');
define('_BTT','Jumla');
define('_BON','Waliopo Sasa');
define('_BREG','Jiunge');
define('_BROADCAST','Tangaza Ujumbe kwa Wote');
define('_BROADCASTFROM','Ujumbe wa Wote');
define('_TURNOFFMSG','Zima Ujumbe wa Wote');
define('_JOURNAL','Jonali');
define('_READMYJOURNAL','Soma Jonali yangu');
define('_ADD','Weka');
define('_YES','Ndiyo');
define('_NO','Hapana');
define('_INVISIBLEMODULES','Moduli zilizofichwa');
define('_ACTIVEBUTNOTSEE','(Active but invisible link)');

define('_TEAM','Team');
define('_LINKAPPROVEDMSG','Congratulations! The web link you submitted has been approved. Please link back to us and send an email with the url where you have done so.');
define('_MODREQLINKS','Mod. Links');
define('_BROKENLINKS','Broken Links');
define('_MODREQDOWN','Mod. Downloads');
define('_BROKENDOWN','Broken Downloads');
define('_PAGEGENERATION','Page Generation:');
define('_SECONDS','Sekunde');
define('_YOUHAVEONEMSG','Una Ujumbe 1 wa Siri');
define('_NEWPMSG','Ujumbe Mpya wa Siri');
define('_CONTRIBUTEDBY','Contributed by');
define('_CHAT','Chati');
define('_REGISTERED','Registered');
define('_CHATGUESTS','Wageni');
define('_USERSTALKINGNOW','watu Wanaongea Sasa');
define('_ENTERTOCHAT','Ingia Kuongea');
define('_CHATROOMS','Vyumba vilipyo');
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
define('_SECURITYCODE','Namba ya Siri');
define('_TYPESECCODE','Andika Namba ya Siri');
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
define('_VIEWPRIV','Who can View This?');
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
define('_MODULEINHOME','Module Loaded in the Homepage:');
define('_CHANGE','Change');
define('_WHOSONLINE','Who\'s Online');
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
define('_AUTOMATEDARTICLES','Programmed Articles');
define('_STORYID','Story ID');
define('_CURRENTPOLL','Current Poll');

// admin.php
define('_ADMINISTRATION','Administration');
define('_NOADMINYET','There are no Administrators Accounts yet, proceeed to create the Super User:');
define('_CREATEUSERDATA','Do you want to create a normal user with the same data?');
define('_ADMINLOGIN','Administration System Login');
define('_ADMINID','Admin ID');
define('_EMAIL','Email');
define('_SUBMIT','Submit');
define('_YOUARELOGGEDOUT','You are now logged out!');
define('_PASSWDNOMATCH','Sorry, the new passwords doesn\'t match. Go Back and Try Again');
define('_LOGIN_REMEMBERME','Remember me?');
define('_ADMINMENU_LOGOUT','Administration Menu Logout');
define('_PASSWORD_MALFORMED','Please include at least one number, one capital letter and one lowercase letter in your password');

// admins.php
define('_AUTHORSADMIN','Author\'s Administration');
define('_NAME','Name');
define('_REQUIRED','(required)');
define('_MODIFYINFO','Modify Info');
define('_DELAUTHOR','Delete Author');
define('_ADDAUTHOR','Add a New Administrator');
define('_PERMISSIONS','Permissions');
define('_SUPERUSER','Super User');
define('_SUPERWARNING','WARNING: If Super User is checked, the user will get full access!');
define('_ADDAUTHOR2','Add Author');
define('_RETYPEPASSWD','Retype Password');
define('_FORCHANGES','(For Changes Only)');
define('_COMPLETEFIELDS','You must complete all compulsory fields');
define('_CREATIONERROR','Author\'s Creation Error');
define('_AUTHORDEL','Delete Autor');
define('_PUBLISHEDSTORIES','This administrator has published stories');
define('_SELECTNEWADMIN','Please select a new admin to re-assign them');
define('_GODNOTDEL','*(GOD account can\'t be deleted)');
define('_MAINACCOUNT','God Admin*');
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
define('_RSSFILE','RSS/RDF file URL');
define('_ONLYHEADLINES','(Only for Headlines)');
define('_REFRESHTIME','Refresh Time');
define('_CREATEBLOCK','Create Block');
define('_EDITBLOCK','Edit Block');
define('_BLOCK','Block');
define('_SAVEBLOCK','Save Block');
define('_BLOCKACTIVATION','Block Activation');
define('_BLOCKPREVIEW','This is the preview for Block');
define('_WANT2ACTIVATE','Do you want to Activate this block?');
define('_ARESUREDELBLOCK','Are you sure you want to remove Block');
define('_BLOCKUP','Block UP');
define('_BLOCKDOWN','Block DOWN');
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
define('_FILEINCLUDE','(Select a custom Block to be included. All other fields will be ignored)');

// comments.php
define('_REMOVECOMMENTS','Delete Comments');
define('_SURETODELCOMMENTS','Are you sure you want to delete selected Comment and all its replies?');

// database.php
define('_SAVEDATABASE','Backup DB');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Current Status');
define('_ACTIVATEPAGE','Activate This Page?');

// history.php
define('_EPHEMADMIN','Ephemerids Administration');
define('_ADDEPHEM','Add a New Ephemerid');
define('_EPHEMDESC','Ephemerid Description');
define('_EPHEMMAINT','Ephemerid Maintenance (Edit/Delete):');
define('_EPHEMEDIT','Edit Ephemerids');
define('_EPHEMDELETE','Delete Entry');

// headlines.php
define('_RSSFAIL','There is a problem with the RSS file URL');
define('_RSSTRYAGAIN','Please check the URL and RSS file name, then try again.');
define('_RSSCONTENT','(RSS/RDF Content)');
define('_IFRSSWARNING','If you fill the URL the content you write will not be displayed!');
define('_SETUPHEADLINES','(Select Custom and write the URL or just select a Site from the list to grab news headlines)');
define('_HEADLINESADMIN','Headlines Administration');
define('_ADDHEADLINE','Add Headline');
define('_EDITHEADLINE','Edit Headlines');
define('_SURE2DELHEADLINE','WARNING: Are you sure you want to delete this Headline?');

// messages.php
define('_MESSAGESADMIN','Messages Administration');
define('_MESSAGETITLE','Title');
define('_MESSAGECONTENT','Content');
define('_ALLMESSAGES','Overview messages');
define('_EDITMSG','Edit message');
define('_ADDMSG','Add message');
define('_REMOVEMSG','Are you sure you want to remove this message ? ');
define('_CHANGEDATE','Change start date to today?');
define('_IFYOUACTIVE','(If you Active this Message now, the start date will be today)');

// modules.php
define('_MODULESADMIN','Modules Administration');
define('_HOMECONFIG','Home Configuration');
define('_MODULESADDONS','Modules and Addons');
define('_INHOME','In Home');
define('_MODULEHOMENOTE','<b>-= WARNING =-</b><br>Bold module\'s title represents the module you have in the Homepage.<br>You can\'t Deactivate or Restrict this module while it\'s the default one!<br>If you delete the module\'s directory you\'ll see and error in the Homepage.<br>Also, this module has been replaced with <i>Home</i> link in the modules block.');
define('_PUTINHOME','Put in Home');
define('_SURETOCHANGEMOD','Are you sure you want to change your Homepage from');
define('_NOTINMENU','[ <big><strong>&middot;</strong></big> ] means a module which name and link will not be visible in Modules Block');
define('_SHOWINMENU','Visible in Modules Block?');
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
define('_SUBSCRIBEDUSERS','Subscribed Users');
define('_NL_ALLUSERS','All Members');
define('_NL_ADMINS','Administrators');
define('_NL_REGARDS','Best Regards');
define('_DISCARD','Discard');
define('_REVIEWTEXT','Please review and check your text:');
define('_MANYUSERSNOTE','WARNING! There are many users that will receive this text. Please wait until the script finish the operation. This can take some minutes to complete!');
define('_NL_NOUSERS','The group selected to receive this newsletter has zero users<br />Please go back and select a different group');
define('_NUSERWILLRECEIVE','Users will receive this Newsletter.');
define('_NEWSLETTERSENT','The Newsletter has been sent.');

// referers.php
define('_WHOLINKS','Who\'s linking our site?');
define('_DELETEREFERERS','Delete Referers');

// settings.php
define('_SITECONFIG','Web Site Configuration');
define('_GENSITEINFO','General Site Info');
define('_SITENAME','Site Name');
define('_SITEURL','Site URL');
define('_SITELOGO','Site Logo');
define('_SITESLOGAN','Site Slogan');
define('_STARTDATE','Site Start Date');
define('_ADMINEMAIL','Administrator Email');
define('_ITEMSTOP','Number of Items in Top Page');
define('_STORIESHOME','Stories Number in Home');
define('_OLDSTORIES','Stories in Old Articles Box');
define('_ALLOWANONPOST','Allow Anonymous to Post?');
define('_DEFAULTTHEME','Default Theme for your site');
define('_SHOWSEC','Show security code');
// maintenance
define('_MAINTENANCE','Maintenance');
define('_MESSAGE','Message');
// multilingual
define('_MULTILINGUALOPT','Multilingual Options');
define('_SELLANGUAGE','Select the Language for your Site');
define('_LOCALEFORMAT','Locale Time Format');
define('_ACTMULTILINGUAL','Activate Multilingual features? ');
define('_ACTUSEFLAGS','Display flags instead of a dropdown box? ');
// banners
define('_BANNERSOPT','Banners Options');
define('_ACTBANNERS','Activate Banners in your site?');
// footer
define('_FOOTERMSG','Footer Messages');
define('_FOOTERLINE1','Footer Line 1');
define('_FOOTERLINE2','Footer Line 2');
define('_FOOTERLINE3','Footer Line 3');
// backend
define('_BACKENDCONF','Backend Configuration');
define('_BACKENDTITLE','Backend Title');
define('_BACKENDLANG','Backend Language');
// mail stories
define('_MAIL2ADMIN','Mail New Stories to Admin');
define('_NOTIFYSUBMISSION','Notify new submissions by email?');
define('_EMAIL2SENDMSG','Email to send the message');
define('_EMAILSUBJECT','Email Subject');
define('_EMAILMSG','Email Message');
define('_EMAILFROM','Email Account (From)');
// comments
define('_COMMENTSOPT','Comments Option');
define('_COMMENTSLIMIT','Comments Limit in Bytes');
define('_COMMENTSMOD','Comments Moderation');
define('_MODADMIN','Moderation by Admin');
define('_MODUSERS','Moderation by Users');
define('_NOMOD','No Moderation');
// adminmenu
define('_GRAPHICOPT','Graphics Options');
define('_BOTH','Both');
define('_GRAPHICAL','Graphical');
define('_SIDEBLOCK','Sideblock');
// miscellaneous
define('_MISCOPT','Miscelaneous Options');
define('_ACTIVATEHTTPREF','Activate HTTP Referers?');
define('_MAXREF','How Many Referers you want as Maximum?');
define('_COMMENTSPOLLS','Activate Comments in Polls?');
define('_COMMENTSARTICLES','Activate Comments in Articles?');
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
define('_ADMINMENU','Administration Menu');
define('_ADMINLOGOUT','Logout / Exit');
define('_AMENU1','General');
define('_AMENU2','Members');
define('_AMENU3','Messages');
define('_AMENU4','Forums');
define('_AMENU5','Informative');
define('_AMENU6','Linking');
define('_AMENU9','Modules');
// menu items
define('_PREFERENCES','Preferences');
define('_DATABASE','Database');
define('_BLOCKS','Blocks');
define('_MODULES','Modules');
define('_EDITADMINS','Edit Admins');
define('_MESSAGES','Messages');
define('_BANNERS','Banners');
define('_HTTPREFERERS','HTTP Referers');
define('_EDITUSERS','Edit Users');
define('_USERSCONFIG','Members Config');
define('_NEWSLETTER','Newsletter');
define('_SUBMISSIONS','Tuma');
define('_ADDSTORY','Add Story');
define('_TOPICS','Topics');
define('_ADMPOLLS','Surveys/Polls');
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
