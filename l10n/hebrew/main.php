<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/hebrew/main.php,v $
  $Revision: 9.31 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:50 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','he');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %d %B %Y (%H:%M:%S)');
define('_DATESTRING2','%A, %B %d');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Next Page');
define('_PREVIOUSPAGE','Previous Page');

define('_TEXT_DIR','rtl');
define('_ALIGN_TEXT','right');
define('_SEARCH','חיפוש');
define('_LOGIN','כניסה');
define('_WRITES','writes');
define('_POSTEDON','נכתב ב-');
define('_NICKNAME','סיסמא');
define('_PASSWORD','סיסמא');
define('_WELCOMETO','ברוכים הבאים ל');
define('_EDIT','עריכה');
define('_DELETE','מחיקה');
define('_POSTEDBY','פורסם ב');
define('_READS','reads');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Go Back</a>' : '<a href="javascript:history.go(-1)">Go Back</a>').' ]');
define('_COMMENTS','הערות');
define('_PASTARTICLES','מאמרים קודמים');
define('_OLDERARTICLES','מאמרים יש� ים');
define('_BY','על ידי');
define('_ON','ב');
define('_LOGOUT','התנתק');
define('_WAITINGCONT','תוכן המחכה לאישור');
define('_WREVIEWS','סקירות המחכות לאישור');
define('_WLINKS','קישורים המחכים לאישור');
define('_ONEDAY','One day like today...');
define('_ASREGISTERED','Don\'t have an account yet? You can <a href="'.getlink('Your_Account&amp;file=register').'">create one</a>. As a registered user you have some cool advantages like a theme manager, comments configuration and the ability to post comments with your name.');
define('_MENUFOR','תפריט עבור');
define('_NOBIGSTORY','אין סיפור גדול היום, בינתיים');
define('_BIGSTORY','הסיפור שנקרא הכי הרבה היום:');
define('_SURVEY','סקר');
define('_POLLS','סקרים');
define('_PCOMMENTS','הערות:');
define('_RESULTS','תוצאות');
define('_HREADMORE','קרא יותר...');
define('_CURRENTLY','יש כרגע,');
define('_GUESTS','אורח/ים');
define('_MEMBERS','וחבר/ים און-ליין.');
define('_YOUARELOGGED','אתה מחובר כ-');
define('_YOUHAVE','יש לך');
define('_PRIVATEMSG','הודעות פרטיות.');
define('_YOUAREANON','You are an anonymous user. You can register for free by following <a href="'.getlink('Your_Account&amp;file=register').'">this</a> link');
define('_NOTE','הערה:');
define('_ADMIN','מ� הל');
define('_WERECEIVED','א� ו קיבל� ו');
define('_PAGESVIEWS','page views since');
define('_TOPIC','נושא');
define('_UDOWNLOADS','הורדות');
define('_VOTE','הצבעה');
define('_VOTES','הצבעות');
define('_MVIEWADMIN','Visible to administrators only');
define('_MVIEWUSERS','Visible to registered users only');
define('_MVIEWANON','Visible to anonymous users only');
define('_MVIEWALL','Visible to all visitors');
define('_EXPIRELESSHOUR','Expires in less than 1 hour');
define('_EXPIREIN','Expires in');
define('_UNLIMITED','בלתי מוגבל');
define('_HOURS','שעות');
define('_RSSPROBLEM','יש שגיאה בקישור ה-RSS של האתר');
define('_SELECTLANGUAGE','בחר שפה');
define('_SELECTGUILANG','בחר שפת ממשק');
define('_NONE','ריק');
define('_BLOCKPROBLEM','<center>יש שגיאה בבלוק זה</center>');
define('_BLOCKPROBLEM2','<center>בלוק זה לא מכיל תוכן</center>');
define('_MODULENOTACTIVE','א� ו מצטערים,מודול זה מופסק');
define('_NOACTIVEMODULES','מודולים לא פעילים');
define('_MODULENOEXIST','א� ו מצטערים,עמוד זה %s לא קיים');
define('_FORADMINTESTS','(for Admin tests)');
define('_BBFORUMS','פורומים');
define('_ACCESSDENIED','הגישה נדחתה');
define('_RESTRICTEDAREA','אתה מנסה להכנס לאזור מוגבל.');
define('_MODULEUSERS','We\'re sorry, but we have reserved this area of our site for <i>registered users</i> only<br /><br />');
define('_MODULEUSERS2','You can register for free by following <a href="'.getlink('Your_Account&amp;file=register').'">this</a> link, thus granting you permission to access this area of our site.<br /><br />Thank you for your understanding');
define('_MODULESADMINS','We\'re sorry, but we have reserved this area of our site for <i>administrators</i> only<br /><br />Thank you for your understanding');
define('_MODULESGROUPS','גישת קבוצה � דרשת');
define('_HOME','בית');
define('_HOMEPROBLEM','� ראה שדף הבית � עלם');
define('_ADDAHOME','קבע עמוד בית');
define('_HOMEPROBLEMUSER','נראה שדף הבית נעלם');
define('_MORENEWS','עוד בחדשות');
define('_ALLCATEGORIES','כל הקטגוריות');
define('_SPAMGUARDPROTECTED','אימייל זה � חסם לשליחה ע"י SpamGuard');
define('_M_CHARS','מקסימום %s תווים');

define('_SYS_MESSAGE','הודעת מערכת');
define('_SYS_MESSAGES','הודעות מערכת');
define('_SYS_MAINTENANCE','אתה משתמש במצב תחזוקה');
define('_SYS_DEMO','You are running under administration demo mode<br />You cannot make any changes to the database<br /><a href="'.adminlink('logout').'">Log me out!</a>');

define('_DATE','תאריך');
define('_HOUR','שעה');
define('_UMONTH','חודש');
define('_YEAR','שנה');
define('_JANUARY','ינואר');
define('_FEBRUARY','פבואר');
define('_MARCH','מרץ');
define('_APRIL','אפריל');
define('_MAY','מאי');
define('_JUNE','יוני');
define('_JULY','יולי');
define('_AUGUST','אוגוסט');
define('_SEPTEMBER','ספטמבר');
define('_OCTOBER','אוקטובר');
define('_NOVEMBER','נובמבר');
define('_DECEMBER','דצמבר');

define('_MONDAY','יום שני');
define('_TUESDAY','יום שלישי');
define('_WEDNESDAY','יום רביעי');
define('_THURSDAY','יום חמישי');
define('_FRIDAY','יום שישי');
define('_SATURDAY','יום שבת');
define('_SUNDAY','יום ראשון');
//three letter abbrev.
define('_ABR_MONDAY','שני');
define('_ABR_TUESDAY','שלישי');
define('_ABR_WEDNESDAY','רביעי');
define('_ABR_THURSDAY','חמישי');
define('_ABR_FRIDAY','שישי');
define('_ABR_SATURDAY','שבת');
define('_ABR_SUNDAY','ראשון');

define('_BWEL','ברוכים-הבאים');
define('_BPM','הודעות פרטיות');
define('_BUNREAD','לא נקראו');
define('_BREAD','נקראו');
define('_BMEMP','חברות');
define('_BLATEST','האחרון');
define('_BTD','חדשים היום');
define('_BYD','חדשים אתמול');
define('_BOVER','באופן כללי');
define('_BVISIT','אנשים מחוברים');
define('_BVIS','אורחים');
define('_BMEM','חברים');
define('_BTT','סך-הכול');
define('_BON','מחוברים עכשיו');
define('_BREG','הרשם');
define('_BROADCAST','Broadcast Public Message');
define('_BROADCASTFROM','הודעה ציבורית נשלחה על ידי');
define('_TURNOFFMSG','כבה הודעות פרטיות');
define('_JOURNAL','בלוג');
define('_READMYJOURNAL','קרא את הבלוג שלי');
define('_ADD','הוסף');
define('_YES','כן');
define('_NO','לא');
define('_INVISIBLEMODULES','מודולים בלתי נראים');
define('_ACTIVEBUTNOTSEE','(לי� ק מוסתר אך פעיל)');
define('_BOTS','בוטים');

define('_UM','Dragonfly Update Monitor');
define('_UM_F','Failed to contact the update service. Please try again later.');
define('_UM_G','אתה משתמש בגירסה החדשה ביותר של Dragonfly');
define('_UM_R','Please <a href="%2$s" target="_blank">upgrade</a> to Dragonfly %1$s');

define('_TEAM','קבוצה');
define('_LINKAPPROVEDMSG','מזל טוב! הקישור אותו שלחת אושר.');
define('_MODREQLINKS','Mod. Links');
define('_BROKENLINKS','לינקים שבורים');
define('_MODREQDOWN','Mod. Downloads');
define('_BROKENDOWN','הורדות שבורות');
define('_PAGEGENERATION','Page Generation:');
define('_SECONDS','שניות');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Page Generation in %1$s seconds and %2$s DB Queries in %3$s seconds');
define('_YOUHAVEONEMSG','יש לך הודעה פרטית חדשה');
define('_NEWPMSG','הודעות פרטיות חדשות');
define('_CONTRIBUTEDBY','נתרם על ידי');
define('_CHAT','צ\'ט');
define('_REGISTERED','רשומים');
define('_CHATGUESTS','אורחים');
define('_USERSTALKINGNOW','משתמשים שמדברים עכשיו');
define('_ENTERTOCHAT','הכנס לצ\'ט');
define('_CHATROOMS','חדרים אפשריים');
define('_ALLTOPICS','כל הנושאים');
define('_ASSOTOPIC','נושאים קשורים');
define('_HELLO','שלום');
define('_ALL','כל');
define('_URL','קישור');
define('_SUBJECT','נושא');
define('_PREVIEW','תצוגה מקדימה');
define('_SEND','שלח');
define('_ANONYMOUS','אנונימי');
define('_BREADCRUMB', 'Breadcrumb Delimiter, separates words in pagetitles');
define('_BC_DELIM',''.isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&rsaquo;');//''. is for cpglang
define('_RESET','Reset');
define('_AT','at');
define('_LASTMSGS','%s הודעות אחרונות');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','דף מתאים להדפסה');

define('_CREDITS_TITLE','Credits');
define('_CREDITS_PRODUCT','מוצר');
define('_CREDITS_DESC','תיאור');
define('_CREDITS_AUTHORS','מחבר/ים');

define('_PP_TITLE','מדי� יות פרטיות');
define('_PP_MODIFY','שנה את ההודעה הזו');

define('_SENDERNAME','שם השולח');
define('_SENDEREMAIL','אימייל השולח');
define('_RECIPIENTNAME','שם ה� מען');
define('_RECIPIENTEMAIL','אימייל של ה� מען');

define('_REASONS_0','אוף-טופיק');
define('_REASONS_1','מחוץ ל� ושא');
define('_REASONS_2','Flamebait');
define('_REASONS_3','טרול');
define('_REASONS_4','מיותר');
define('_REASONS_5','פותח עיניים');
define('_REASONS_6','מעניין');
define('_REASONS_7','מועיל');
define('_REASONS_8','מצחיק');
define('_REASONS_9','מוגזם');
define('_REASONS_10','Underrated');

/* My Account Tools Block */
define('_TB_BLOCK','הכלים שלי');
define('_TB_TASKS','משימות');
define('_TB_INFO','מידע');
define('_TB_PROFILE_INFO','פרופיל ציבורי');
define('_TB_EDIT_PROFILE','מידע הפרופיל שלי');
define('_TB_EDIT_REG','מידע ההרשמה שלי');
define('_TB_EDIT_PRIVATE','מידע פרטי שלי');
define('_TB_EDIT_AVATAR','סמלון');
define('_TB_DELETE','מחק את החשבון שלי');
define('_TB_CONFIG','הגדרות');
define('_TB_EDIT_PREFS','ההעדפות שלי');
define('_TB_EDIT_HOME','הגדרות דף הבית שלי');
define('_TB_EDIT_COMM','הגדרות הערות');
define('_TB_PERSONAL','פרטי');
define('_TB_PERSONAL_GALLERY','הגלריה שלי');
define('_TB_PERSONAL_JOURNAL','הבלוג שלי');
define('_TB_PRIVMSGS','הודעות פרטיות');
define('_TB_PRIVMSGS_INBOX','תיבת דואר נכנס');
define('_TB_PRIVMSGS_OUTBOX','תיבת דואר יוצא');
define('_TB_PRIVMSGS_SENTBOX','הודעות שנשלחו');
define('_TB_PRIVMSGS_SAVEBOX','הודעות שמורות');
define('_TB_PRIVMSGS_SEND','שלח הודעה');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','פרטי המשתמש');
define('_SECURITYCODE','קוד אבטחה');
define('_TYPESECCODE','הזן קוד');
define('_MEMBERSOPTIONS','אפשרויות משתמש');
define('_READSEND','Read my private messages. Send messages to others.');
define('_INBOX','תיבת דואר נכנס');
define('_NEW','חדש');
define('_ACCOUNTOPTIONS','My Account. Update preferences and read my messages.');
define('_LOGOUTACCT','התנתק מחשבון זה.');
define('_LOGOUTADMINACCT','התנתק מחשבון מנהל זה.');
define('_BLOGIN','החשבון שלך');
define('_BFLOGIN','הפרופיל שלי');
define('_BHID','מוחבא');
define('_WHOWHERE','מי נמצא איפה');
define('_STAFFONL','מנהלים אונליין');
define('_STAFFNONE','אין מנהלים אונליין');

/* For Multilingual Modules Block  */
define('_COMMUNITY','קהילה');
define('_BlogsLANG','בלוגים');
define('_ContentLANG','תוכן');
define('_coppermineLANG','גלריית תמונות');
define('_CPGlangLANG','עזור בתרגום');
define('_DownloadsLANG','הורדות');
define('_EncyclopediaLANG','אנציקלופדיה');
define('_ForumsLANG','פורומי קהילה');
define('_ContactLANG','צור קשר');
define('_FAQLANG','עזרה FAQ');
define('_Members_ListLANG','רשימת חברים');
define('_NewsLANG','חדשות');
define('_ReviewsLANG','סקירות');
define('_SearchLANG','חיפוש');
define('_StatisticsLANG','סטטיסטיקה');
define('_Stories_ArchiveLANG','ארכיון כתבות');
define('_Submit_NewsLANG','שלח חדשות');
define('_SurveysLANG','סקרים');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','נושאים');
define('_Private_MessagesLANG','ההודעות הפרטיות שלי');
define('_Tell_a_FriendLANG','ספר לחבר');
define('_Web_LinksLANG','לי� קים');
define('_Your_AccountLANG','החשבון שלי');
define('_CPG_EventsLANG','לוח ש� ה');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'שפות');
define('_SmiliesLANG', 'סמיילים');
define('_GroupsLANG','קבוצות');
define('_RanksLANG', 'דירוגים');
define('_HeadlinesLANG', 'כותרות');

define('_COMMUNICATION','תקשורת');
define('_FRIENDS','חברים');
define('_STORE','ח� ות');
define('_PRODUCTS','מוצרים');
define('_DONATE','תרום');
define('_HELP','עזרה');
define('_GALLERIES','גלריות');
define('_DOCS','תיעוד');
define('_RULES','חוקים ותק� ות');
define('_MENU','תפריט ראשי');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','You <strong>are</strong> subscribed to<br />our newsletter');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','You are <strong>not</strong> subscribed to<br />our newsletter');
define('_NEWSLETTERBLOCKREGISTER','You must be a<br /><strong>registered user</strong><br />to receive our newsletter');
define('_NEWSLETTERBLOCKSUBSCRIBE','הרשם');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','בטל הרשמה');
define('_NEWSLETTERBLOCKREGISTERNOW','הרשם!');
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
define('_SAVECHANGES','שמור');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','שפה');
define('_FUNCTIONS','פו� קציות');
define('_SHOW','הצג');
define('_TO','ל');
define('_DAY','יום');
define('_LAST','אחרון');
define('_ACTIVE','פעיל');
define('_DEACTIVATE','כבה');
define('_INACTIVE','לא פעיל');
define('_ACTIVATE','הפעל');
define('_ACTIVATE2','להפעיל?');
define('_VIEW','גלוי ל');
define('_VIEWPRIV','הראה את זה ל');
define('_MVADMIN','רק מ� הלים');
define('_MVUSERS','רק משתמשים רשומים');
define('_MVANON','רק מבקרים');
define('_MVALL','כל הגולשים');
define('_IMAGE','תמו� ה');
define('_GO','קדימה!');
define('_OPTION','אפשרות');
define('_CATEGORY','קטגוריה');
define('_SUBCATEGORY','תת-קטגוריה');
define('_ID','ID');
define('_EXPIRATION','תפוגה');
define('_DAYS','ימים');
define('_WARNING','אזהרה');
define('_POLLTITLE','כותרת סקר');
define('_POLLEACHFIELD','Please enter each available option into a single field');
define('_ADDCATEGORY','הוסף קטגוריה חדשה');
define('_PAGEBREAK','If you want multiple pages you can write <b>&lt;!--pagebreak--&gt;</b> where you want to cut.');
define('_SIGNATURE','חתימה');
define('_DESCRIPTION','תיאור');
define('_EDITCATEGORY','ערוך קטגוריה');
define('_IN','ב');
define('_DESCRIPTION255','תיאור: (אורך מירבי 255 תווים)');
define('_MODCATEGORY','ש� ה קטגוריה');
define('_SUBMITTER','שולח');
define('_VISIT','ביקור');
define('_EXTENDEDTEXT','Extended Text');
define('_CHECKCATEGORIES','בדוק קטגוריות');
define('_INCLUDESUBCATEGORIES','(כלול תתי-קטגוריות)');
define('_CHECKSUBCATEGORIES','בדוק תתי-קטגוריות');
define('_VALIDATELINKS','בדוק קישורים');
define('_FAILED','נכשל!');
define('_BEPATIENT','(סבלנות)');
define('_VALIDATINGCAT','Validating Category (and all subcategories)');
define('_VALIDATINGSUBCAT','Validating Sub-Category');
define('_OK','סבבה!');
define('_CHECK','בדוק');
define('_IGNORE','התעלם');
define('_HITS','כניסות');
define('_FILESIZE', 'גודל קובץ');
define('_EZTHEREIS','יש');
define('_EZSUBCAT','תתי-קטגוריות');
define('_EZATTACHEDTOCAT','תחת קטגוריה זו');
define('_EZBROKENLINKS','לינקים שבורים');
define('_DELEZLINKCATWARNING','WARNING : Are you sure you want to delete this category ?<br /> You will delete all sub-categories and attached links as well !');

// index.php
define('_DEFHOMEMODULE','Default Homepage Module');
define('_MODULEINHOME','Module loaded in the homepage:');
define('_CHANGE','שנה');
define('_WHOSONLINE','מי מחובר');
define('_NP_ADMIN','כתבן');
define('_NP_LOCKED','The notepad has been locked<br />Only a root administrator (super user) can unlock it');
define('_NP_SAVE','שמור הערות');
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
define('_EMAIL','דואל');
define('_SUBMIT','שלח');
define('_YOUARELOGGEDOUT','The system has successfully logged you out');
define('_PASSWDNOMATCH','סיסמאות לא זהות. חזור אחורה ותקן.');
define('_LOGIN_REMEMBERME','זכור אותי?');
define('_ADMINMENU_LOGOUT','Administration Menu Logout');
define('_PASSWORD_MALFORMED','Please include at least one number, one capital letter and one lowercase letter in your password');

// admins.php
define('_AUTHORSADMIN','Administrator Control');
define('_NAME','שם');
define('_REQUIRED','(נדרש)');
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
define('_SUBMISSIONS','Submissions');
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
'l' => array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'),
'D' => array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'),
'F' => array(1=>'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
'M' => array(1=>'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
));
$LNG['_time']['l'][7] =& $LNG['_time']['l'][0];
$LNG['_time']['D'][7] =& $LNG['_time']['D'][0];
