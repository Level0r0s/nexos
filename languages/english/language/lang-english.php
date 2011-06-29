<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU General Public License version 2

  Last modification notes:

$Header: 
/cvs/languages/english/language/lang-english.php,v 1.5 
2004/08/24 
01:09:20 
akamu 
Exp $

*************************************************************/
global $MAIN_CFG;
define('_CHARSET', 'utf-8');
define('_BROWSER_LANGCODE', 'en');
define('_DATESTRING', '%A, %d %B %Y (%H:%M:%S)');
define('_DATESTRING2', '%A, %B %d');
define('_DATESTRING3','%d-%b-%Y');

define('_TEXT_DIR', 'ltr');
define('_ALIGN_TEXT', 'left');
define('_SEARCH', 'Search');
define('_LOGIN', 'Login');
define('_WRITES', 'writes');
define('_POSTEDON', 'Posted on');
define('_NICKNAME', 'Nickname');
define('_PASSWORD', 'Password');
define('_WELCOMETO', 'Welcome to');
define('_EDIT', 'Edit');
define('_DELETE', 'Delete');
define('_POSTEDBY', 'Posted by');
define('_READS', 'reads');
define('_GOBACK', '[ <a href="javascript:history.go(-1)">Go Back</a> ]');
define('_COMMENTS', 'comments');
define('_PASTARTICLES', 'Past Articles');
define('_OLDERARTICLES', 'Older Articles');
define('_BY', 'by');
define('_ON', 'on');
define('_LOGOUT', 'Logout');
define('_WAITINGCONT', 'Waiting Content');
define('_WREVIEWS', 'Waiting Reviews');
define('_WLINKS', 'Waiting Links');
define('_ONEDAY', 'One day like today...');
define('_ASREGISTERED', 'Don\'t have an account yet? You can <a href="'.getlink('Your_Account&amp;file=register').'">create one</a>. As a registered user you have some cool advantages like a theme manager, comments configuration and the ability to post comments with your name.');
define('_MENUFOR', 'Menu for');
define('_NOBIGSTORY', 'There isn\'t a biggest story for today, yet');
define('_BIGSTORY', 'Today\'s most read story is:');
define('_SURVEY', 'Survey');
define('_POLLS', 'Polls');
define('_PCOMMENTS', 'Comments:');
define('_RESULTS', 'Results');
define('_HREADMORE', 'read more...');
define('_CURRENTLY', 'There are currently,');
define('_GUESTS', 'guest(s) and');
define('_MEMBERS', 'member(s) that are online.');
define('_YOUARELOGGED', 'You are logged in as');
define('_YOUHAVE', 'You have');
define('_PRIVATEMSG', 'private message(s).');
define('_YOUAREANON', 'You are an anonymous user. You can register for free by following <a href="'.getlink('Your_Account&amp;file=register').'">this</a> link');
define('_NOTE', 'Note:');
define('_ADMIN', 'Admin:');
define('_WERECEIVED', 'We received');
define('_PAGESVIEWS', 'page views since');
define('_TOPIC', 'Topic');
define('_UDOWNLOADS', 'Downloads');
define('_VOTE', 'Vote');
define('_VOTES', 'Votes');
define('_MVIEWADMIN', 'Visible to administrators only');
define('_MVIEWUSERS', 'Visible to registered users only');
define('_MVIEWANON', 'Visible to anonymous users only');
define('_MVIEWALL', 'Visible to all visitors');
define('_EXPIRELESSHOUR', 'Expires in less than 1 hour');
define('_EXPIREIN', 'Expires in');
define('_UNLIMITED', 'Unlimited');
define('_HOURS', 'Hours');
define('_RSSPROBLEM', 'There appears to be a problem with the RSS feed from this site');
define('_SELECTLANGUAGE', 'Select Language');
define('_SELECTGUILANG', 'Select Interface Language');
define('_NONE', 'None');
define('_BLOCKPROBLEM', '<center>There appears to be a problem with this block</center>');
define('_BLOCKPROBLEM2', '<center>This block does not have any content</center>');
define('_MODULENOTACTIVE', 'We\'re sorry, but this module has been disabled');
define('_NOACTIVEMODULES', 'Inactive Modules');
define('_MODULENOEXIST', 'We\'re sorry, but the requested file, %s, does not appear to exist');//NEW akamu
define('_FORADMINTESTS', '(for Admin tests)');
define('_BBFORUMS', 'Forums');
define('_ACCESSDENIED', 'Access Denied');
define('_RESTRICTEDAREA', 'You are trying to access a restricted area.');
define('_MODULEUSERS', 'We\'re sorry, but we have reserved this area of our site for <i>registered users</i> only<br /><br />');
define('_MODULEUSERS2', 'You can register for free by following <a href=\''.getlink('Your_Account&amp;file=register').'\'>this</a> link, granting you permission to access this area of our site.<br />Thank you for your understanding<br /><br />');
define('_MODULESADMINS', 'We\'re sorry, but we have reserved this area of our site for <i>administrators</i> only<br /><br />');
define('_HOME', 'Home');
define('_HOMEPROBLEM', 'It appears that the homepage has disappeared');
define('_ADDAHOME', 'Assign a new default homepage module');
define('_HOMEPROBLEMUSER', 'We\'re experiencing some difficulties with our system.<br />Please check back soon.');
define('_MORENEWS', 'More in News Section');
define('_ALLCATEGORIES', 'All Categories');
define('_SPAMGUARDPROTECTED', 'SpamGuard has blocked this email from being sent');

define('_DATE', 'Date');
define('_HOUR', 'Hour');
define('_UMONTH', 'Month');
define('_YEAR', 'Year');
define('_JANUARY', 'January');
define('_FEBRUARY', 'February');
define('_MARCH', 'March');
define('_APRIL', 'April');
define('_MAY', 'May');
define('_JUNE', 'June');
define('_JULY', 'July');
define('_AUGUST', 'August');
define('_SEPTEMBER', 'September');
define('_OCTOBER', 'October');
define('_NOVEMBER', 'November');
define('_DECEMBER', 'December');

define('_MONDAY','Monday');
define('_TUESDAY','Tuesday');
define('_WEDNESDAY','Wednesday');
define('_THURSDAY', 'Thursday');
define('_FRIDAY','Friday');
define('_SATURDAY','Satday');
define('_SUNDAY','Sunday');

define('_ABR_MONDAY','Mon');
define('_ABR_TUESDAY','Tues');
define('_ABR_WEDNESDAY','Wed');
define('_ABR_THURSDAY', 'Thurs');
define('_ABR_FRIDAY','Fri');
define('_ABR_SATURDAY','Sat');
define('_ABR_SUNDAY','Sun');

define('_BWEL', 'Welcome');
define('_BPM', 'Private Messages');
define('_BUNREAD', 'Unread');
define('_BREAD', 'Read');
define('_BMEMP', 'Membership');
define('_BLATEST', 'Latest');
define('_BTD', 'New Today');
define('_BYD', 'New Yesterday');
define('_BOVER', 'Overall');
define('_BVISIT', 'People Online');
define('_BVIS', 'Visitors');
define('_BMEM', 'Members');
define('_BTT', 'Total');
define('_BON', 'Online Now');
define('_BREG', 'Register');
define('_BROADCAST', 'Broadcast Public Message');
define('_BROADCASTFROM', 'Public Message sent by');
define('_TURNOFFMSG', 'Turn off Public Messages');
define('_JOURNAL', 'Journal');
define('_READMYJOURNAL', 'Read My Journal');
define('_ADD', 'Add');
define('_YES', 'Yes');
define('_NO', 'No');
define('_INVISIBLEMODULES', 'Invisible Modules');
define('_ACTIVEBUTNOTSEE', '(Active but invisible link)');

define('_TEAM', 'Team');
define('_LINKAPPROVEDMSG', 'Congratulations! The web link you submitted has been approved, please link back to us.');
define('_MODREQLINKS', 'Mod. Links');
define('_BROKENLINKS', 'Broken Links');
define('_MODREQDOWN', 'Mod. Downloads');
define('_BROKENDOWN', 'Broken Downloads');
define('_PAGEGENERATION', 'Page Generation:');
define('_SECONDS', 'Seconds');
define('_YOUHAVEONEMSG', 'You Have 1 New Private Message');
define('_NEWPMSG', 'New Private Messages');
define('_CONTRIBUTEDBY', 'Contributed by');
define('_CHAT', 'Chat');
define('_REGISTERED', 'Registered');
define('_CHATGUESTS', 'Guests');
define('_USERSTALKINGNOW', 'Users Talking Now');
define('_ENTERTOCHAT', 'Enter To Chat');
define('_CHATROOMS', 'Available Rooms');
define('_ALLTOPICS', 'All Topics');
define('_ASSOTOPIC', 'Associated Topics');
define('_HELLO', 'Hello');
define('_ALL','All');
define('_URL', 'URL');
define('_SUBJECT','Subject');
define('_PREVIEW','Preview');
define('_SEND', 'Send');
define('_ANONYMOUS', 'Anonymous');
define('_BC_DELIM', isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '>>');


/* ---- Begin modified block-User_Info english ----*/

define('_SECURITYCODE', 'Security Code');
define('_TYPESECCODE', 'Type Code');
define('_MEMBERSOPTIONS', 'Members options');
define('_READSEND', 'Read my private messages. Send messages to others.');
define('_INBOX', 'Inbox');
define('_NEW', 'New');
define('_ACCOUNTOPTIONS', 'My Account. Update preferences and read my messages.');
define('_LOGOUTACCT', 'Log out of this account.');
define('_LOGOUTADMINACCT', 'Log out of admin account.');
define('_BLOGIN', 'Your Account');
define('_BFLOGIN', 'Forum Profile');
define('_BHID', 'Hidden');
define('_WHOWHERE', 'Who Is Where');
define('_STAFFONL', 'Staff Online');
define('_STAFFNONE', 'No staff members are online!');

/* For Multilingual Modules Block  */
define('_COMMUNITY', 'Community');
define('_ContentLANG', 'Content');
define('_coppermineLANG', 'Photo Gallery');
define('_CPGlangLANG', 'Help Translate');
define('_DownloadsLANG', 'Downloads');
define('_EncyclopediaLANG', 'Encyclopedia');
define('_ForumsLANG', 'Community Forums');
define('_ContactLANG', 'Contact Us');
define('_FAQLANG', 'FAQ - Help');
define('_JournalLANG', 'Journal');
define('_Members_ListLANG', 'Members List');
define('_NewsLANG', 'News');
define('_ReviewsLANG', 'Reviews');
define('_SearchLANG', 'Search');
define('_StatisticsLANG', 'Statistics');
define('_Stories_ArchiveLANG', 'Stories Archive');
define('_Submit_NewsLANG', 'Submit News');
define('_SurveysLANG', 'Surveys');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG', 'Topics');
define('_Private_MessagesLANG', 'My Private Messages');
define('_Recommend_UsLANG', 'Tell a Friend');
define('_Web_LinksLANG', 'Links');
define('_Your_AccountLANG', 'My Account');
/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED', 'You <strong>are</strong> subscribed to<br />our newsletter');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED', 'You are <strong>not</strong> subscribed to<br />our newsletter');
define('_NEWSLETTERBLOCKREGISTER', 'You must be a<br /><strong>registered user</strong><br />to receive our newsletter');
define('_NEWSLETTERBLOCKSUBSCRIBE', 'Subscribe');
define('_NEWSLETTERBLOCKUNSUBSCRIBE', 'Unsubscribe');
define('_NEWSLETTERBLOCKREGISTERNOW', 'Register Now!');
define('_NEWSLETTERBLOCKNEWSLETTER', 'Newsletter');
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
define('_CATEGORY', 'Category');
define('_ID','ID');
define('_EXPIRATION','Expiration');
define('_DAYS','days');
define('_WARNING','Warning');
define('_POLLTITLE','Poll Title');
define('_POLLEACHFIELD','Please enter each available option into a single field');

// index.php
define('_DEFHOMEMODULE','Default Homepage Module');
define('_MODULEINHOME','Module loaded in the homepage:');
define('_CHANGE','Change');
define('_WHOSONLINE','Who\'s Online');
// news
define('_STICKY','Sticky Articles');
define('_ARTICLEUP','Move article up');
define('_ARTICLEDOWN','Move article down');
define('_UNSTICK','Unstick');
define('_STICK','Sticky');
define('_AUTOMATEDARTICLES','Scheduled Articles');
define('_NOAUTOARTICLES','There are no scheduled articles');
define('_NOSTICKYARTICLES','There are no sticky articles');
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

// admins.php
define('_AUTHORSADMIN','Administrator Control');
define('_NAME','Name');
define('_REQUIRED','(required)');
define('_MODIFYINFO','Modify Info');
define('_DELAUTHOR','Delete Author');
define('_ADDAUTHOR','Add a new administrator');
define('_PERMISSIONS','Permissions');
define('_SUPERUSER','Super User');
define('_SUPERWARNING','Warning: If Super User is checked, the administrator will be granted full permissions');
define('_ADDAUTHOR2','Add Author');
define('_RETYPEPASSWD','Retype Password');
define('_FORCHANGES','(For Changes Only)');
define('_COMPLETEFIELDS','You must complete all compulsory fields');
define('_CREATIONERROR','Creation of new administrator failed');
define('_AUTHORDELSURE','Are you sure you want to delete');
define('_AUTHORDEL','Delete Autor');
// define('_REQUIREDNOCHANGE','(required, can\'t be changed later)');
define('_PUBLISHEDSTORIES','This administrator has published stories');
define('_SELECTNEWADMIN','Please choose an existing administrator to assign the stories to');
define('_GODNOTDEL','* The super user cannot be deleted!');
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

// ephemerids.php
define('_EPHEMADMIN','Ephemerids Administration');
define('_ADDEPHEM','Add a new ephemerid');
define('_EPHEMDESC','Description of ephemerid');
define('_EPHEMMAINT','Ephemerid Lookup');
define('_EPHEMEDIT','Edit Ephemerids');

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
define('_CHANGEMODNAME','Change Module Name');
define('_CUSTOMMODNAME','Custom Module Name:');
define('_MODULEEDIT','Modules Edit');

// newsletter.php
define('_FROM','From');
define('_STAFF','Staff');
define('_MASSMAIL','A special message to all users');
define('_ANEWSLETTER','A standard newsletter to subscribed users only');
define('_WHATTODO','Choose an action to perform');
define('_SUBSCRIBEDUSERS','Subscribed Users');
define('_NYOUAREABOUTTOSEND','The following message will be sent to subscribed users');
define('_NUSERWILLRECEIVE','users will receive this message');
define('_REVIEWTEXT','Please look over your message and check for typos');
define('_NAREYOUSURE2SEND','Would you like to send this message now?');
define('_MYOUAREABOUTTOSEND','The following message will be sent to all users');
define('_MUSERWILLRECEIVE','users will receive this message');
define('_MAREYOUSURE2SEND','Would you like to send this special message now?');
define('_POSSIBLESPAM','Please note that some users may consider this message as spam!');
define('_MASSEMAIL','Special Message');
define('_MANYUSERSNOTE','Due to the large amount of users that will receive this message, the task may take several minutes to complete.<br />Please be patient!');
define('_NLUNSUBSCRIBE',"We sent you this message because you have selected to receive newsletters from our site\n\nYou can choose to unsubscribe from our mailings at any time by following <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">this</a> link\n\nIf you would like further assistance, please send an email to <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">our administrator</a>");
define('_NEWSLETTERSENT','The newsletter has been sent');
define('_MASSEMAILSENT','The special message to all users has been sent');
define('_MASSEMAILMSG',"We have sent this special message to all registered users on our site\n\nWe hope that this email did not disturb you, and hope that it will contribute to the improvement of our services\n\nIf you would like to share your feedback with us, please send an email to <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">our administrator</a>");

// referers.php
define('_WHOLINKS','Who\'s linking our site?');
define('_DELETEREFERERS','Delete Referers');

// settings.php
define('_SITECONFIG','Web Site Configuration');
define('_GENSITEINFO','General Site Information');
define('_SITENAME','Site Name');
define('_SITEURL','Site URL');
define('_SITELOGO','The filename of my site\'s logo (stored in /images/)');
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
define('_MAINTENANCE','Maintenance System');
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
define('_USE_SMTP_AUTH','Does server requires SMTP authorization?');
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
define('_HTTPREFERERS', 'HTTP Referers');
define('_EDITUSERS','Members');
define('_USERSCONFIG', 'Members Config');
define('_NEWSLETTER','Newsletter');
define('_SUBMISSIONS', 'Submissions');
define('_ADDSTORY','Add Story');
define('_TOPICS', 'Topics');
define('_ADMPOLLS','Surveys');
define('_EPHEMERIDS', 'Ephemerids');
define('_REVIEWS','Reviews');
define('_ENCYCLOPEDIA','Encyclopedia');
define('_SURVEYS','Surveys');
define('_SECTIONS','Sections');
define('_ARTICLES','Articles');
define('_FAQ','FAQ');
define('_DOWNLOAD','Downloads');
define('_WEBLINKS','Web Links');
define('_CONTENT','Content');
