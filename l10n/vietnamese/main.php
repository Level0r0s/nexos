<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/vietnamese/main.php,v $
  $Revision: 9.29 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:58 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','vi');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %d, %B');
define('_DATESTRING2','%A, %d %B');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Trang k&#7871;');
define('_PREVIOUSPAGE','Trang tr&#432;&#7899;c');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Tìm ki&#7871;m');
define('_LOGIN','&#272;&#259;ng nh&#7853;p');
define('_WRITES','vi&#7871;t');
define('_POSTEDON','G&#7917;i vào');
define('_NICKNAME','Bi&#7879;t danh');
define('_PASSWORD','M&#7853;t kh&#7849;u');
define('_WELCOMETO','Welcome to');
define('_EDIT','S&#7917;a');
define('_DELETE','Xóa');
define('_POSTEDBY','G&#7917;i b&#7903;i');
define('_READS','l&#7847;n &#273;&#7885;c');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Quay l&#7841;i</a>' : '<a href="javascript:history.go(-1)">Quay l&#7841;i</a>').' ]');
define('_COMMENTS','l&#7901;i bình');
define('_PASTARTICLES','Past Articles');
define('_OLDERARTICLES','Older Articles');
define('_BY','b&#7903;i');
define('_ON','vào');
define('_LOGOUT','Thoát');
define('_WAITINGCONT','N&#7897;i dung &#273;ang &#273;&#7907;i');
define('_WREVIEWS','&#272;ánh giá');
define('_WLINKS','Liên k&#7871;t');
define('_ONEDAY','One Day like Today...');
define('_ASREGISTERED','Ch&#432;a có tài kho&#7843;n? B&#7841;n có th&#7875; <a href="'.getlink('Your_Account&amp;file=register').'">t&#7841;o 1 cái</a>. Sau khi &#273;&#259;ng kí, b&#7841;n có th&#7875; thay &#273;&#7893;i giao di&#7879;n, &#273;&#7883;nh d&#7841;ng và g&#7917;i l&#7901;i bình v&#7899;i bi&#7879;t danh c&#7911;a b&#7841;n.');
define('_MENUFOR','Menu for');
define('_NOBIGSTORY','There isn\'t a Biggest Story for Today, yet.');
define('_BIGSTORY','Bài vi&#7871;t &#273;&#432;&#7907;c &#273;&#7885;c nhi&#7873;u nh&#7845;t trong ngày là:');
define('_SURVEY','Th&#259;m dò ý ki&#7871;n');
define('_POLLS','T&#7845;t c&#7843; cu&#7897;c th&#259;m dò');
define('_PCOMMENTS','L&#7901;i bình:');
define('_RESULTS','K&#7871;t qu&#7843;');
define('_HREADMORE','&#273;&#7885;c thêm...');
define('_CURRENTLY','Hi&#7879;n t&#7841;i có');
define('_GUESTS','khách và');
define('_MEMBERS','thành viên &#273;ang online.');
define('_YOUARELOGGED','B&#7841;n &#273;ang &#273;&#259;ng nh&#7853;p v&#7899;i bi&#7879;t danh');
define('_YOUHAVE','B&#7841;n có');
define('_PRIVATEMSG','tin nh&#7855;n.');
define('_YOUAREANON','B&#7841;n là khách. B&#7841;n có th&#7875; &#273;&#259;ng kí b&#7857;ng cách nh&#7845;n <a href="'.getlink('Your_Account').'">vào &#273;ây</a>');
define('_NOTE','Chú ý:');
define('_ADMIN','Ng&#432;&#7901;i qu&#7843;n lý:');
define('_WERECEIVED','Chúng tôi &#273;ã nh&#7853;n');
define('_PAGESVIEWS','l&#432;&#7907;t xem t&#7915;');
define('_TOPIC','Ch&#7911; &#273;&#7873;');
define('_UDOWNLOADS','L&#7847;n t&#7843;i xu&#7889;ng');
define('_VOTE','B&#7887; phi&#7871;u');
define('_VOTES','S&#7889; phi&#7871;u');
define('_MVIEWADMIN','Xem: Ch&#7881; dành cho Ng&#432;&#7901;i qu&#7843;n lý');
define('_MVIEWUSERS','Xem: Ch&#7881; dành cho Thành viên &#273;ã &#273;&#259;ng ký');
define('_MVIEWANON','Xem: Ch&#7881; dành cho Khách');
define('_MVIEWALL','Xem: T&#7845;t c&#7843; Khách');
define('_EXPIRELESSHOUR','H&#7871;t h&#7841;n: ít h&#417;n 1 gi&#7901;');
define('_EXPIREIN','H&#7871;t h&#7841;n trong vòng');
define('_UNLIMITED','Không gi&#7899;i h&#7841;n');
define('_HOURS','Gi&#7901;');
define('_RSSPROBLEM','Currently there is a problem with headlines from this site');
define('_SELECTLANGUAGE','Ch&#7885;n ngôn ng&#7919;');
define('_SELECTGUILANG','Ch&#7885;n ngôn ng&#7919; dao di&#7879;n:');
define('_NONE','Không');
define('_BLOCKPROBLEM','<center>There is a problem right now with this block.</center>');
define('_BLOCKPROBLEM2','<center>There isn\'t content right now for this block.</center>');
define('_MODULENOTACTIVE','Sorry, this Module isn\'t active!');
define('_NOACTIVEMODULES','Inactive Modules');
define('_MODULENOEXIST','We\'re sorry, but the requested file, %s, does not appear to exist');
define('_FORADMINTESTS','(Dành riêng cho ban qu&#7843;n lý)');
define('_BBFORUMS','Di&#7877;n &#273;àn');
define('_ACCESSDENIED','T&#7915; ch&#7889;i truy nh&#7853;p');
define('_RESTRICTEDAREA','B&#7841;n &#273;ang c&#7889; g&#7855;ng truy nh&#7853;p vào khu v&#7921;c gi&#7899;i h&#7841;n.');
define('_MODULEUSERS','Chúng tôi r&#7845;t ti&#7871;c nh&#432;ng khu v&#7921;c này <i>ch&#7881; dành cho thành viên &#273;ã &#273;&#259;ng ký</i><br /><br />B&#7841;n có th&#7875; &#273;&#259;ng kí mi&#7877;n phí <a href="'.getlink('Your_Account&amp;file=register').'">&#7903; &#273;ây</a>, sau &#273;ó b&#7841;n có th&#7875;<br /> truy nh&#7853;p vào khu v&#7921;c này mà không b&#7883; gi&#7899;i h&#7841;n. Cám &#417;n.<br /><br />');
define('_MODULEUSERS2','You can register for free by following <a href="'.getlink('Your_Account&amp;file=register').'">this</a> link, thus granting you permission to access this area of our site<br /><br />Thank you for your understanding');
define('_MODULESADMINS','Chúng tôi r&#7845;t ti&#7871;c nh&#432;ng khu v&#7921;c này <i>ch&#7881; dành cho ng&#432;&#7901;i qu&#7843;n lý</i><br /><br />');
define('_MODULESGROUPS','group access required');
define('_HOME','Trang ch&#7911;');
define('_HOMEPROBLEM','Ðang có v&#7845;n &#273;&#7873; l&#7899;n: Chúng ta ch&#432;a có Trang Ch&#7911;!!!');
define('_ADDAHOME','Add a Module in your Home');
define('_HOMEPROBLEMUSER','Trang Ch&#7911; &#273;ang có v&#7845;n &#273;&#7873;. Xin b&#7841;n hãy xem l&#7841;i sau.');
define('_MORENEWS','More in News Section');
define('_ALLCATEGORIES','T&#7845;t c&#7843; danh m&#7909;c');
define('_SPAMGUARDPROTECTED','SpamGuard has blocked this email from being sent');
define('_M_CHARS','Maximum: %s characters');

define('_SYS_MESSAGE','System Message');
define('_SYS_MESSAGES','System Messages');
define('_SYS_MAINTENANCE','You are running under maintenance mode');
define('_SYS_DEMO','You are running under administration demo mode<br />You cannot make any changes to the database<br /><a href="'.adminlink('logout').'">Log me out!</a>');

define('_DATE','Date');
define('_HOUR','Gi&#7901;');
define('_UMONTH','Tháng');
define('_YEAR','N&#259;m');
define('_JANUARY','Tháng 1');
define('_FEBRUARY','Tháng 2');
define('_MARCH','Tháng 3');
define('_APRIL','Tháng 4');
define('_MAY','Tháng 5');
define('_JUNE','Tháng 6');
define('_JULY','Tháng 7');
define('_AUGUST','Tháng 8');
define('_SEPTEMBER','Tháng 9');
define('_OCTOBER','Tháng 10');
define('_NOVEMBER','Tháng 11');
define('_DECEMBER','Tháng 12');

define('_MONDAY','Monday');
define('_TUESDAY','Tuesday');
define('_WEDNESDAY','Wednesday');
define('_THURSDAY','Thursday');
define('_FRIDAY','Friday');
define('_SATURDAY','Saturday');
define('_SUNDAY','Sunday');
//three letter abbrev.
define('_ABR_MONDAY','Mon');
define('_ABR_TUESDAY','Tue');
define('_ABR_WEDNESDAY','Wed');
define('_ABR_THURSDAY','Thu');
define('_ABR_FRIDAY','Fri');
define('_ABR_SATURDAY','Sat');
define('_ABR_SUNDAY','Sun');

define('_BWEL','Hoan nghênh');
define('_BPM','Ði&#7879;n th&#432; cá nhân');
define('_BUNREAD','Ch&#432;a &#273;&#7885;c');
define('_BREAD','Ð&#7885;c');
define('_BMEMP','H&#7897;i viên');
define('_BLATEST','G&#7847;n &#273;ây nh&#7845;t');
define('_BTD','New Today');
define('_BYD','New Yesterday');
define('_BOVER','Toàn b&#7897;');
define('_BVISIT','People Online');
define('_BVIS','Khách');
define('_BMEM','Thành viên');
define('_BTT','T&#7893;ng c&#7897;ng');
define('_BON','Online Now');
define('_BREG','Ð&#259;ng ký');
define('_BROADCAST','Broadcast Public Message');
define('_BROADCASTFROM','Public Message sent by');
define('_TURNOFFMSG','Turn off Public Messages');
define('_JOURNAL','T&#7853;p san');
define('_READMYJOURNAL','Ð&#7885;c T&#7853;p san c&#7911;a tôi');
define('_ADD','Thêm');
define('_YES','Có');
define('_NO','Không');
define('_INVISIBLEMODULES','Nh&#7919;ng kh&#7889;i n&#259;ng vô hình');
define('_ACTIVEBUTNOTSEE','(Active but invisible link)');
define('_BOTS','Bots');

define('_UM','Dragonfly Update Service');
define('_UM_F','Failed to contact the update service. Please try again later.');
define('_UM_G','You are using the latest version of Dragonfly');
define('_UM_R','Please <a href="%2$s" target="_blank">upgrade</a> to Dragonfly %1$s');

define('_TEAM','Team');
define('_LINKAPPROVEDMSG','Congratulations! The web link you submitted has been approved, please link back to us.');
define('_MODREQLINKS','Mod. Links');
define('_BROKENLINKS','Broken Links');
define('_MODREQDOWN','Mod. Downloads');
define('_BROKENDOWN','Broken Downloads');
define('_PAGEGENERATION','Page Generation:');
define('_SECONDS','Giây');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','This page generated in %1$s seconds with %2$s DB Queries in %3$s seconds');
define('_YOUHAVEONEMSG','You have one new private message');
define('_NEWPMSG','New Private Messages');
define('_CONTRIBUTEDBY','Contributed by');
define('_CHAT','Chat');
define('_REGISTERED','Registered');
define('_CHATGUESTS','Guests');
define('_USERSTALKINGNOW','Users Talking Now');
define('_ENTERTOCHAT','Enter To Chat');
define('_CHATROOMS','Available Rooms');
define('_ALLTOPICS','T&#7845;t c&#7843; ch&#7911; &#273;&#7873;');
define('_ASSOTOPIC','Associated Topics');
define('_HELLO','Chào');
define('_ALL','T&#7845;t c&#7843;');
define('_URL','URL');
define('_SUBJECT','Ch&#7911; &#273;&#7873;');
define('_PREVIEW','Xem tr&#432;&#7899;c');
define('_SEND','G&#7917;i');
define('_ANONYMOUS','Anonymous');
define('_BREADCRUMB', 'Breadcrumb Delimiter, separates words in pagetitles');
define('_BC_DELIM',''.isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&rsaquo;');//''. is for cpglang
define('_RESET','Reset');
define('_AT','at');
define('_LASTMSGS','Last %s Forum Messages');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','Trang in');

define('_CREDITS_TITLE','Credits');
define('_CREDITS_PRODUCT','Product');
define('_CREDITS_DESC','Description');
define('_CREDITS_AUTHORS','Author(s)');

define('_PP_TITLE','Privacy Policy');
define('_PP_MODIFY','Modify this message');

define('_SENDEREMAIL','Email c&#7911;a ng&#432;&#7901;i g&#7917;i');
define('_SENDERNAME','Tên ng&#432;&#7901;i g&#7917;i');
define('_RECIPIENTNAME','Recipient Name');
define('_RECIPIENTEMAIL','Recipient Email');

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
define('_TB_PERSONAL_JOURNAL','My blog');
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
define('_TYPESECCODE','Type Code');
define('_MEMBERSOPTIONS','Members options');
define('_READSEND','Read my private messages. Send messages to others.');
define('_INBOX','Inbox');
define('_NEW','New');
define('_ACCOUNTOPTIONS','My Account. Update preferences and read my messages.');
define('_LOGOUTACCT','Log out of this account.');
define('_LOGOUTADMINACCT','Log out of admin account.');
define('_BLOGIN','Your Account');
define('_BFLOGIN','My Profile');
define('_BHID','Hidden');
define('_WHOWHERE','Who Is Where');
define('_STAFFONL','Staff Online');
define('_STAFFNONE','No staff members are online!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Community');
define('_BlogsLANG','Blogs');
define('_ContentLANG','Content');
define('_coppermineLANG','Photo Gallery');
define('_CPGlangLANG','Help Translate');
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
define('_SAVECHANGES','L&#432;u tr&#7919; s&#7921; thay &#273;&#7893;i');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Ngôn ng&#7919;');
define('_FUNCTIONS','Ch&#7913;c n&#259;ng');
define('_SHOW','Xem');
define('_TO','To');
define('_DAY','Ngày');
define('_LAST','');
define('_ACTIVE','Ho&#7841;t &#273;&#7897;ng');
define('_DEACTIVATE','Ng&#7915;ng ho&#7841;t &#273;&#7897;ng');
define('_INACTIVE','Không ho&#7841;t &#273;&#7897;ng');
define('_ACTIVATE','Kích ho&#7841;t');
define('_ACTIVATE2','Ho&#7841;t &#273;&#7897;ng?');
define('_VIEW','Ng&#432;&#7901;i xem');
define('_VIEWPRIV','Ai có th&#7875; xem cái này?');
define('_MVADMIN','Ch&#7881; dành cho ng&#432;&#7901;i qu&#7843;n lý');
define('_MVUSERS','Ch&#7881; cho thành viên &#273;ã &#273;&#259;ng ký');
define('_MVANON','Ch&#7881; cho khách');
define('_MVALL','T&#7845;t c&#7843; khách');
define('_IMAGE','Hình');
define('_GO','Go!');
define('_OPTION','L&#7921;a ch&#7885;n');
define('_CATEGORY','Danh m&#7909;c');
define('_SUBCATEGORY','Sub-Category');
define('_ID','S&#7889;');
define('_EXPIRATION','K&#7871;t thúc');
define('_DAYS','days');
define('_WARNING','C&#7843;nh báo');
define('_POLLTITLE','Poll Title');
define('_POLLEACHFIELD','Please enter each available option into a single field');
define('_ADDCATEGORY','Add a New Category');
define('_PAGEBREAK','N&#7871;u b&#7841;n mu&#7889;n có nhi&#7873;u trang, b&#7841;n có th&#7875; vi&#7871;t <b>&lt;!--pagebreak--&gt;</b> &#7903; ch&#7895; mà b&#7841;n mu&#7889;n c&#7855;t.');
define('_SIGNATURE','Ch&#7919; ký');
define('_DESCRIPTION','Description');
define('_EDITCATEGORY','Edit Category');
define('_IN','in');
define('_DESCRIPTION255','Description: (255 characters max)');
define('_MODCATEGORY','Modify a Category');
define('_SUBMITTER','Submitter');
define('_VISIT','Visit');
define('_EXTENDEDTEXT','Chi ti&#7871;t');
define('_CHECKCATEGORIES','Check Categories');
define('_INCLUDESUBCATEGORIES','(include Sub-Categories)');
define('_CHECKSUBCATEGORIES','Check Sub-Categories');
define('_VALIDATELINKS','Validate Links');
define('_FAILED','Failed!');
define('_BEPATIENT','(please be patient)');
define('_VALIDATINGCAT','Validating Category (and all subcategories)');
define('_VALIDATINGSUBCAT','Validating Sub-Category');
define('_OK','Ok!');
define('_CHECK','Ki&#7875;m tra');
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
define('_AUTOMATEDARTICLES','Tin t&#7913;c &#273;ã &#273;&#432;&#7907;c s&#7855;p &#273;&#7863;t');
define('_STORYID','Story ID');
define('_CURRENTPOLL','Current Survey');

// admin.php
define('_ADMINISTRATION','Administration');
define('_NOADMINYET','Hi&#7879;n không có b&#7843;n kê khai ng&#432;&#7901;i qu&#7843;n lý, ti&#7871;p t&#7909;c &#273;&#7875; t&#7841;o account cho ng&#432;&#7901;i qu&#7843;n lý:');
define('_CREATEUSERDATA','B&#7841;n có mu&#7889;n t&#7841;o 1 thành viên bình th&#432;&#7901;ng chung m&#7897;t c&#417; s&#7903; d&#7919; li&#7879;u?');
define('_ADMINLOGIN','Administration System Login');
define('_ADMINID','Admin ID');
define('_EMAIL','Ði&#7879;n th&#432;');
define('_SUBMIT','G&#7903;i');
define('_YOUARELOGGEDOUT','B&#7841;n &#273;ã thoát ra ngoài!');
define('_PASSWDNOMATCH','Xin l&#7895;i, m&#7853;t mã m&#7899;i không t&#432;&#417;ng x&#7913;ng. Hãy quay l&#7841;i trang tr&#432;&#7899;c và làm l&#7841;i');
define('_LOGIN_REMEMBERME','Remember me?');
define('_ADMINMENU_LOGOUT','Administration Menu Logout');
define('_PASSWORD_MALFORMED','Please include at least one number, one capital letter and one lowercase letter in your password');

// admins.php
define('_AUTHORSADMIN','Administrator Control');
define('_NAME','Name');
define('_REQUIRED','(c&#7847;n thi&#7871;t)');
define('_MODIFYINFO','Thay &#273;&#7893;i tin');
define('_DELAUTHOR','Xoá tác gi&#7843;');
define('_ADDAUTHOR','Thêm ng&#432;&#7901;i &#273;i&#7873;u hành m&#7899;i');
define('_PERMISSIONS','Cho phép');
define('_SUPERUSER','Super User');
define('_SUPERWARNING','WARNING: If Super User is checked, the user will get full access!');
define('_ADDAUTHOR2','Thêm tác gi&#7843;');
define('_RETYPEPASSWD','Gõ l&#7841;i m&#7853;t kh&#7849;u');
define('_FORCHANGES','(Ch&#7881; gõ n&#7871;u b&#7841;n mu&#7889;n thay &#273;&#7893;i)');
define('_COMPLETEFIELDS','B&#7841;n ph&#7843;i &#273;i&#7873;n vào t&#7845;t c&#7843; m&#7885;i ch&#7893; c&#7847;n thi&#7871;t');
define('_CREATIONERROR','B&#7883; tr&#7909;c tr&#7863;c khi thêm tác gi&#7843;');
define('_AUTHORDEL','Xóa tác gi&#7843;');
define('_PUBLISHEDSTORIES','This administrator has published stories');
define('_SELECTNEWADMIN','Please choose an existing administrator to assign the stories to');
define('_GODNOTDEL','The super user cannot be deleted!');
define('_MAINACCOUNT','Super User *');
define('_USERS','thành viên');

// banners.php
define('_BANNERSADMIN','Qu&#7843;n lý Bi&#7875;u ng&#7919;');
define('_DELETEBANNER','Delete Banner');
define('_SURETODELBANNER','Are you sure you want to delete this banner?');
define('_EDITBANNER','Edit Banner');

// blocks.php
define('_BLOCKSADMIN','Qu&#7843;n lý Kh&#7889;i');
define('_CENTER','Gi&#7919;a');
define('_CENTERUP','Center Up');
define('_CENTERDOWN','Center Down');
define('_BLOCKFILE','(Block File)');
define('_BLOCKFILE2','FILE');
define('_BLOCKSYSTEM','SYSTEM');
define('_ADDNEWBLOCK','Thêm kh&#7889;i m&#7899;i');
define('_RSSFILE','RSS/RDF file URL');
define('_ONLYHEADLINES','(Only for Headlines)');
define('_REFRESHTIME','Th&#7901;i gian t&#7843;i l&#7841;i');
define('_CREATEBLOCK','T&#7841;o kh&#7889;i');
define('_EDITBLOCK','S&#7917;a kh&#7889;i');
define('_BLOCK','Kh&#7889;i');
define('_SAVEBLOCK','L&#432;u kh&#7889;i');
define('_BLOCKACTIVATION','Ho&#7841;t &#273;&#7897;ng kh&#7889;i n&#259;ng');
define('_BLOCKPREVIEW','This is the preview for Block');
define('_WANT2ACTIVATE','B&#7841;n có mu&#7889;n ho&#7841;t &#273;&#7897;ng kh&#7889;i n&#259;ng này không?');
define('_ARESUREDELBLOCK','B&#7841;n có ch&#7855;c mu&#7889;n xóa Kh&#7889;i');
define('_BLOCKUP','Block UP');
define('_BLOCKDOWN','Block DOWN');
define('_BLOCKTOP','Move block to top');
define('_BLOCKBOTTOM','Move block to bottom');
define('_TITLE','Tiêu &#273;&#7873;');
define('_POSITION','V&#7883; trí');
define('_WEIGHT','Weight');
define('_STATUS','Tình tr&#7841;ng');
define('_LEFTBLOCK','Kh&#7889;i n&#259;ng bên trái');
define('_LEFT','Trái');
define('_RIGHTBLOCK','Kh&#7889;i n&#259;ng bên ph&#7843;i');
define('_RIGHT','Ph&#7843;i');
define('_TYPE','Ki&#7875;u');
define('_CUSTOM','Custom');
define('_FILENAME','Filename');
define('_FILEINCLUDE','If you use this option, ignore the Content and Refresh time fields');
define('_VISIBLEINMODULES', 'Visible in modules');

// comments.php
define('_REMOVECOMMENTS','Xoá l&#7901;i bình lu&#7853;n');
define('_SURETODELCOMMENTS','B&#7841;n có ch&#7855;c ch&#7855;n mu&#7889;n xoá l&#7901;i bình lu&#7853;n b&#7841;n ch&#7885;n?');

// database.php
define('_SAVEDATABASE','L&#432;u tr&#7919; c&#417; s&#7903; d&#7919; li&#7879;u');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Current Status');
define('_ACTIVATEPAGE','Kích ho&#7841;t trang này?');

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
define('_MESSAGESADMIN','Qu&#7843;n lý tin nh&#7855;n');
define('_MESSAGETITLE','Tiêu &#273;&#7873;');
define('_MESSAGECONTENT','N&#7897;i dung');
define('_ALLMESSAGES','Overview messages');
define('_EDITMSG','S&#7917;a tin nh&#7855;n');
define('_ADDMSG','Thêm tin nh&#7855;n');
define('_REMOVEMSG','B&#7841;n có ch&#7855;c mu&#7889;n xóa tin nh&#7855;n này ? ');
define('_CHANGEDATE','Change start date to today?');
define('_IFYOUACTIVE','(If you Active this Message now, the start date will be today)');

// modules.php
define('_MODULESADMIN','Qu&#7843;n lý Khâu');
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
define('_FROM','T&#7915;');
define('_STAFF','Staff');
define('_NL_RECIPS','Recipients');
define('_SUBSCRIBEDUSERS','thành viên &#273;&#7891;ng ý');
define('_NL_ALLUSERS','All Members');
define('_NL_ADMINS','Administrators');
define('_NL_REGARDS','Best Regards');
define('_DISCARD','Discard');
define('_REVIEWTEXT','Hãy xem và ki&#7875;m tra l&#7841;i &#273;o&#7841;n v&#259;n b&#7843;n c&#7911;a b&#7841;n:');
define('_MANYUSERSNOTE','Due to the large number of users that will receive this newsletter, the task may take several minutes to complete<br />Please be patient!');
define('_NL_NOUSERS','The group selected to receive this newsletter has zero users<br />Please go back and select a different group');
define('_NUSERWILLRECEIVE','users will receive this newsletter');
define('_NLUNSUBSCRIBE',"We sent you this message because you have selected to receive newsletters from our site\n\nYou can choose to unsubscribe from our mailings at any time by following <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">this</a> link\n\nIf you would like further assistance, please send an email to <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">our administrator</a>");
define('_NEWSLETTERSENT','The newsletter has been sent');

// referers.php
define('_WHOLINKS','Ai liên k&#7871;t v&#7899;i trang c&#7911;a chúng ta?');
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
define('_SITENAME','Tên c&#7911;a website');
define('_SITEURL','Site URL');
define('_SITELOGO','Site Logo');
define('_SITESLOGAN','Kh&#7849;u hi&#7879;u');
define('_STARTDATE','Ngày b&#7855;t &#273;&#7847;u c&#7911;a trang này');
define('_ADMINEMAIL','Ði&#7879;n th&#432; ng&#432;&#7901;i qu&#7843;n lý');
define('_ITEMSTOP','# tin t&#7913;c &#7903; trang &#273;&#7847;u');
define('_STORIESHOME','# tin t&#7913;c &#7903; trang ch&#7911;');
define('_OLDSTORIES','Stories in Old Articles Box');
define('_ALLOWANONPOST','Allow Anonymous to Post?');
define('_DEFAULTTHEME','Default Theme for your site');
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
define('_SELLANGUAGE','Ngôn ng&#7919; chính cho site c&#7911;a b&#7841;n');
define('_LOCALEFORMAT','Th&#7875; th&#7913;c gi&#7901;');
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
define('_MAIL2ADMIN','G&#7903;i &#273;i&#7879;n th&#432; khi có tin t&#7913;c m&#7899;i cho ng&#432;&#7901;i qu&#7843;n lý');
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
define('_ADMINMENU','Menu qu&#7843;n lý');
define('_ADMINLOGOUT','Thoát');
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
define('_PREFERENCES','C&#7845;u hình');
define('_DATABASE','Database');
define('_BLOCKS','Kh&#7889;i');
define('_MODULES','Khâu');
define('_EDITADMINS','S&#7917;a Ban Qu&#7843;n Lý');
define('_MESSAGES','Tin nh&#7855;n');
define('_BANNERS','Banners');
define('_HTTPREFERERS','HTTP Referers');
define('_EDITUSERS','S&#7917;a thành viên');
define('_USERSCONFIG','Members Config');
define('_NEWSLETTER','Tin th&#432;&#7901;ng xuyên');
define('_SUBMISSIONS','Bài g&#7917;i');
define('_ADDSTORY','Thêm bài');
define('_TOPICS','Ch&#7911; &#273;&#7873;');
define('_ADMPOLLS','Th&#259;m dò ý ki&#7871;n');
define('_EPHEMERIDS','L&#7883;ch thiên v&#259;n');
define('_REVIEWS','&#272;ánh giá');
define('_ENCYCLOPEDIA','Encyclopedia');
define('_SURVEYS','Surveys');
define('_SECTIONS','Phân chi');
define('_ARTICLES','bài vi&#7871;t');
define('_FAQ','FAQ');
define('_DOWNLOAD','Downloads');
define('_WEBLINKS','Liên K&#7871;t');
define('_CONTENT','N&#7897;i dung');
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
'l' => array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'),
'D' => array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'),
'F' => array(1=>'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
'M' => array(1=>'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
));
$LNG['_time']['l'][7] =& $LNG['_time']['l'][0];
$LNG['_time']['D'][7] =& $LNG['_time']['D'][0];
