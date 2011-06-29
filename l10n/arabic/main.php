<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/arabic/main.php,v $
  $Revision: 9.31 $
  $Author: nanocaiordo $
  $Date: 2010/02/22 10:40:28 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','ar');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %B %d');
define('_DATESTRING2','%A, %B %d');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','الصفحة التالية');
define('_PREVIOUSPAGE','الصفحة السابقة');

define('_TEXT_DIR','rtl');
define('_ALIGN_TEXT','right');
define('_SEARCH','بحث');
define('_LOGIN','دخول');
define('_WRITES','كتب');
define('_POSTEDON','أرسلت في');
define('_NICKNAME','الكنية');
define('_PASSWORD','كلمة المرور');
define('_WELCOMETO','مرحبا');
define('_EDIT','تعديل');
define('_DELETE','مسح');
define('_POSTEDBY','أرسلت بواسطة');
define('_READS','قراءة');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">رجوع</a>' : '<a href="javascript:history.go(-1)">رجوع</a>').' ]');
define('_COMMENTS','تعليقات');
define('_PASTARTICLES','مقالات سابقة');
define('_OLDERARTICLES','مقالات قديمة');
define('_BY','بواسطة');
define('_ON','في');
define('_LOGOUT','خروج');
define('_WAITINGCONT','محتويات للمراجعة');
define('_WREVIEWS','تعقيبات للمراجعة');
define('_WLINKS','روابط للمراجعة');
define('_ONEDAY','في مثل هذا اليوم...');
define('_ASREGISTERED','لم تسجل بعد؟ تستطيع <a href="'.getlink('Your_Account').'">التسجيل</a>. بعد التسجيل يمكنك تغيير شكل الموقع, والتحكم في التعليقات وإرسال تعليقات بإسمك.');
define('_MENUFOR','القائمة ل');
define('_NOBIGSTORY','لا يوجد مقال مشهور اليوم.');
define('_BIGSTORY','أكثر المقالات قراءة اليوم:');
define('_SURVEY','استفتاء');
define('_POLLS','تصويتات');
define('_PCOMMENTS','تعليقات:');
define('_RESULTS','نتائج');
define('_HREADMORE','قراءة المزيد...');
define('_CURRENTLY','يوجد حاليا,');
define('_GUESTS','ضيف/ضيوف');
define('_MEMBERS','عضو/أعضاء يتصفحون الموقع.');
define('_YOUARELOGGED','تم دخولك بإسم');
define('_YOUHAVE','يوجد لديك');
define('_PRIVATEMSG','رسالة خاصة.');
define('_YOUAREANON','أنت غير مسجل لدينا. تستطيع التسجيل مجانا بالضغط <a href="'.getlink('Your_Account').'">هنا</a>');
define('_NOTE','ملحوظة:');
define('_ADMIN','اسم المشرف:');
define('_WERECEIVED','تم استعراض');
define('_PAGESVIEWS','صفحة للعرض منذ');
define('_TOPIC','الموضوع');
define('_UDOWNLOADS','عداد');
define('_VOTE','تصويت');
define('_VOTES','تصويتات');
define('_MVIEWADMIN','عرض: المشرفين فقط');
define('_MVIEWUSERS','عرض: الأعضاء المسجلين فقط');
define('_MVIEWANON','عرض: المستخدمين غير المسجلين فقط');
define('_MVIEWALL','عرض: جميع الزوار');
define('_EXPIRELESSHOUR','تاريخ الإنتهاء:أقل من ساعة');
define('_EXPIREIN','تنتهي في');
define('_UNLIMITED','غير محدود');
define('_HOURS','ساعات');
define('_RSSPROBLEM','حاليا يوجد مشكلة في الأخبار من هذا الموقع');
define('_SELECTLANGUAGE','اختر اللغة');
define('_SELECTGUILANG','اختر لغة الواجهة:');
define('_NONE','لا يوجد');
define('_BLOCKPROBLEM','<center>يوجد مشكلة في هذه المجموعة.</center>');
define('_BLOCKPROBLEM2','<center>لا يوجد محتويات لهذه المجموعة حاليا.</center>');
define('_MODULENOTACTIVE','عفوا هذا البرنامج معطل!');
define('_NOACTIVEMODULES','البرامج المستقلة المعطلة');
define('_MODULENOEXIST','We\'re sorry, but the requested file, %s, does not appear to exist');
define('_FORADMINTESTS','(لعمل اختبار بواسطة المشرف)');
define('_BBFORUMS','المنتديات');
define('_ACCESSDENIED','الدخول غير مسموح');
define('_RESTRICTEDAREA','أنت تحاول الدخول الى صفحات خاصة.');
define('_MODULEUSERS','عفوا هذا القسم من الموقع <i>للأعضاء المسجلين فقط</i><br /><br />يمكنك التسجيل بالضغط <a href="'.getlink('Your_Account&amp;file=register').'">هنا</a>, بعد ذلك<br />يمكنك الدخول الى هذا القسم.<br /><br />');
define('_MODULEUSERS2','You can register for free by following <a href="'.getlink('Your_Account&amp;file=register').'">this</a> link, thus granting you permission to access this area of our site.<br /><br />Thank you for your understanding');
define('_MODULESADMINS','عفوا هذا القسم من الموقع  <i>للمشرفين فقط</i><br /><br />');
define('_MODULESGROUPS','مطلوب صلاحية دخول المجموعة');
define('_HOME','الصفحة الأولى');
define('_HOMEPROBLEM','يوجد مشكلة: لا يوجد صفحة اولى!!!');
define('_ADDAHOME','أضف برنامج مستقل الى الصفحة الأولى');
define('_HOMEPROBLEMUSER','يوجد مشكلة حاليا في الصفحة الأولى. الرجاء معاودة الزيارة لاحقا.');
define('_MORENEWS','المزيد في أخبار الأقسام الخاصة');
define('_ALLCATEGORIES','جميع الأقسام');
define('_SPAMGUARDPROTECTED','حامي البريد منع هذا البريد من الارسال');
define('_M_CHARS','الحدّ الأعلى: %s حروف');

define('_SYS_MESSAGE','رسالة نظام');
define('_SYS_MESSAGES','رسائل نظام');
define('_SYS_MAINTENANCE','انت تعمل في وضع  الصيانة');
define('_SYS_DEMO','You are running under administration demo mode<br />You cannot make any changes to the database<br /><a href="'.adminlink('logout').'">Log me out!</a>');

define('_DATE','التاريخ');
define('_HOUR','الساعة');
define('_UMONTH','الشهر');
define('_YEAR','السنة');
define('_JANUARY','يناير');
define('_FEBRUARY','فبراير');
define('_MARCH','مارس');
define('_APRIL','ابريل');
define('_MAY','مايو');
define('_JUNE','يونيو');
define('_JULY','يوليو');
define('_AUGUST','اغسطس');
define('_SEPTEMBER','سبتمبر');
define('_OCTOBER','اكتوبر');
define('_NOVEMBER','نوفمبر');
define('_DECEMBER','ديسمبر');

define('_MONDAY','الاثنين');
define('_TUESDAY','الثلاثاء');
define('_WEDNESDAY','الاربعاء');
define('_THURSDAY','الخميس');
define('_FRIDAY','الجمعة');
define('_SATURDAY','السبت');
define('_SUNDAY','الاحد');
//three letter abbrev.
define('_ABR_MONDAY','اثن');
define('_ABR_TUESDAY','ثلا ');
define('_ABR_WEDNESDAY','ارب');
define('_ABR_THURSDAY','خمس');
define('_ABR_FRIDAY','جمع ');
define('_ABR_SATURDAY','سبت');
define('_ABR_SUNDAY','احد');

define('_BWEL','مرحبا');
define('_BPM','الرسائل الخاصة');
define('_BUNREAD','لم يقرأ');
define('_BREAD','قراءة');
define('_BMEMP','عضوية');
define('_BLATEST','الأخير');
define('_BTD','جديد اليوم');
define('_BYD','جديد بالأمس');
define('_BOVER','الكل');
define('_BVISIT','المتصفحون الآن');
define('_BVIS','الزوار');
define('_BMEM','الأعضاء');
define('_BTT','المجموع');
define('_BON','المتصفحون حاليا');
define('_BREG','تسجيل');
define('_BROADCAST','أرسل رسالة عامة');
define('_BROADCASTFROM','رسالة عامة من');
define('_TURNOFFMSG','اغلاق الرسائل العامة');
define('_JOURNAL','المجلة');
define('_READMYJOURNAL','اقرأ مجلتي');
define('_ADD','اضافة');
define('_YES','نعم');
define('_NO','لا');
define('_INVISIBLEMODULES','البرامج المستقلة المخفية');
define('_ACTIVEBUTNOTSEE','(منشطة ولكن الرابط مخفي)');
define('_BOTS','Bots');

define('_UM','مراقب التحديث');
define('_UM_F','أخفق في الإتّصال بخدمة التجديد. رجاء حاول ثانية فيما بعد.');
define('_UM_G','انت تستعمل آخر اصدار من البرنامج');
define('_UM_R','Please <a href="%2$s" target="_blank">upgrade</a> to Dragonfly %1$s');

define('_TEAM','فريق العمل');
define('_LINKAPPROVEDMSG','مبروك! اللينك إستلم ، رجاء إرتبط إلينا');
define('_MODREQLINKS','تعديل مواقع');
define('_BROKENLINKS','مواقع لا تعمل');
define('_MODREQDOWN','تعديل برامج');
define('_BROKENDOWN','برامج لا تعمل');
define('_PAGEGENERATION','انشاء الصفحة:');
define('_SECONDS','ثانية');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Page Generation in %1$s seconds and %2$s DB Queries in %3$s seconds');
define('_YOUHAVEONEMSG','لديك رسالة خاصة واحدة فقط');
define('_NEWPMSG','رسائل خاصة جديدة');
define('_CONTRIBUTEDBY','مقدم من');
define('_CHAT','محادثة');
define('_REGISTERED','مسجل');
define('_CHATGUESTS','زائر');
define('_USERSTALKINGNOW','الحضور يتكلمون الآن');
define('_ENTERTOCHAT','ادخل للمحادثة');
define('_CHATROOMS','الغرف المتاحة');
define('_ALLTOPICS','جميع المواضيع');
define('_ASSOTOPIC','مواضيع مرتبطة');
define('_HELLO','اهلا');
define('_ALL','جميع');
define('_URL','URL');
define('_SUBJECT','موضوع');
define('_PREVIEW','معاينة');
define('_SEND','ارسل');
define('_ANONYMOUS','مجهول');
define('_BREADCRUMB', 'Breadcrumb Delimiter, appears in page titles between the words');
define('_BC_DELIM',isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&gt;&gt;');
define('_RESET','Reset');
define('_AT','at');
define('_LASTMSGS','آخر %s رسائل منتدى');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','صفحة للطباعة');

define('_CREDITS_TITLE','Credits');
define('_CREDITS_PRODUCT','المنت');
define('_CREDITS_DESC','الوصف');
define('_CREDITS_AUTHORS','المؤلف - المؤلفي');

define('_PP_TITLE','Privacy Policy');
define('_PP_MODIFY','Modify this message');

define('_SENDEREMAIL','بريد المرسل');
define('_SENDERNAME','اسم المرسل');
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
define('_REASONS_8','مضحك');
define('_REASONS_9','مبالغ في التقدي');
define('_REASONS_10','غير مقدر حق قدره');

/* My Account Tools Block */
define('_TB_BLOCK','أدوات الحساب الشخص');
define('_TB_TASKS','مهام');
define('_TB_INFO','معلومات');
define('_TB_PROFILE_INFO','المعلومات العامة');
define('_TB_EDIT_PROFILE','معلومات الملف الشخص');
define('_TB_EDIT_REG','معلومات الحساب');
define('_TB_EDIT_PRIVATE','المعلومات الخاص');
define('_TB_EDIT_AVATAR','الصورة الشخصي');
define('_TB_DELETE','حذف العضوي');
define('_TB_CONFIG','التشكي');
define('_TB_EDIT_PREFS','لخصائص');
define('_TB_EDIT_HOME','إعدادات الصفحة الشخصي');
define('_TB_EDIT_COMM','إعدادات التعليقات');
define('_TB_PERSONAL','شخص');
define('_TB_PERSONAL_GALLERY','معرض الصور الشخص');
define('_TB_PERSONAL_JOURNAL','معرض الصور الشخص');
define('_TB_PRIVMSGS','رسالة خاص');
define('_TB_PRIVMSGS_INBOX','صندوق الوارد');
define('_TB_PRIVMSGS_OUTBOX','صندوق الصادر');
define('_TB_PRIVMSGS_SENTBOX','صندوق المرس');
define('_TB_PRIVMSGS_SAVEBOX','صندوق المحفوظات');
define('_TB_PRIVMSGS_SEND','أرسل رسال');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','معلومات المستخدم');
define('_SECURITYCODE','الكود الأمن');
define('_TYPESECCODE','أكتب الكود');
define('_MEMBERSOPTIONS','خيارات الأعضاء');
define('_READSEND','قراءة الرسالئل الخاصة وإرسال الرسائل للأخري');
define('_INBOX','الوارد');
define('_NEW','جدي');
define('_ACCOUNTOPTIONS','الحساب الشخصي ، تحديث المعلومات وقراءة الرسائل');
define('_LOGOUTACCT','تسجيل الخروج من الحساب');
define('_LOGOUTADMINACCT','تسجيل الخروج كمشرف');
define('_BLOGIN','الحساب الشخص');
define('_BFLOGIN','الملف الشخص');
define('_BHID','مخف');
define('_WHOWHERE','من و أي');
define('_STAFFONL','فريق العمل متص');
define('_STAFFNONE','لا أحد من فريق العمل متص');

/* For Multilingual Modules Block  */
define('_COMMUNITY','حيوي');
define('_BlogsLANG','بلوكات');
define('_ContentLANG','المحتوى');
define('_coppermineLANG','معرض الصور');
define('_CPGlangLANG','ساعد في الترجمة');
define('_DownloadsLANG','التحمي');
define('_EncyclopediaLANG','الموسوعة');
define('_ForumsLANG','المنتديات');
define('_ContactLANG','راسل');
define('_FAQLANG','مساعدة');
define('_Members_ListLANG','قائمة الأعضاء');
define('_NewsLANG','الأخب');
define('_ReviewsLANG','مراجعات');
define('_SearchLANG','بحث');
define('_StatisticsLANG','الإحصائيات');
define('_Stories_ArchiveLANG','أرشيف المقالات');
define('_Submit_NewsLANG','إرسال خب');
define('_SurveysLANG','التصوي');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','المواضي');
define('_Private_MessagesLANG','My Private Messages');
define('_Tell_a_FriendLANG','أخبر صدي');
define('_Web_LinksLANG','رواب');
define('_Your_AccountLANG','الحساب الشخص');
define('_CPG_EventsLANG','الروزنامة');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'اللغات');
define('_SmiliesLANG', 'الابتسامات');
define('_GroupsLANG','المجموعات');
define('_RanksLANG', 'الرت');
define('_HeadlinesLANG', 'العنواين الرئيس');

define('_COMMUNICATION','اتصال');
define('_FRIENDS','أصدقاء');
define('_STORE','متجر');
define('_PRODUCTS','المنتجات');
define('_DONATE','إدعمن');
define('_HELP','ساعد');
define('_GALLERIES','معارض');
define('_DOCS','المستندات');
define('_RULES','الشروط والنظم');
define('_MENU','القائمة الرئيسي');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','أنت مشترك في نشرتنا البريدي');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','أنت غير مشترك في نشرتنا البريدي');
define('_NEWSLETTERBLOCKREGISTER','يجب أن تكون عضو كي تتمكن من الاشتراك في نشرتنا البريدي');
define('_NEWSLETTERBLOCKSUBSCRIBE','اشتراك');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','الغاء الاشتراك');
define('_NEWSLETTERBLOCKREGISTERNOW','التسجيل الان');
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
define('_SAVECHANGES','حفظ التعديلات');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','لغات');
define('_FUNCTIONS','تواب');
define('_SHOW','إظهار');
define('_TO','إل');
define('_DAY','يوم');
define('_LAST','آخر');
define('_ACTIVE','مفعل');
define('_DEACTIVATE','إيقاف');
define('_INACTIVE','غير نش');
define('_ACTIVATE','تنشي');
define('_ACTIVATE2','تنشيط ؟');
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
define('_NEWSLETTERSENT','الرسالة الإخبارية  قد أرسلت');

// referers.php
define('_WHOLINKS','من يرتبط بموقعنا ');
define('_DELETEREFERERS','Delete Referers');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Footer');
define('_DEBUG', 'Debug');
define('_SITECONFIG','تشكيلة الموقع ');
define('_GENSITEINFO','تكوين معلومات الموقع ');
define('_SITENAME','اسم الموقع');
define('_SITEURL','رابط الموقع');
define('_SITELOGO','اسم شعار موقعي ( محفوظة في مجدل /images)');
define('_SITESLOGAN','My site\'s slogan');
define('_STARTDATE','أين وجد موقعي');
define('_ADMINEMAIL','بريد المشرف العام');
define('_ITEMSTOP','No. of items to rank in Top module');
define('_STORIESHOME','No. of stories to show on main news page');
define('_OLDSTORIES','No. of stories to show in Old Articles block');
define('_ALLOWANONPOST','Allow unregistered users to post news articles');
define('_DEFAULTTHEME','الموديل الافتراضي لموقعي');
define('_SHOWSEC','أظهر الكود الأمني');
define('_TOOLTIPS','Show tooltips on designated fields');
define('_UM_TOGGLE','Enable Update Service');
define('_UM_EXPLAIN','This will retrieve two pieces of information from our website, dragonflycms.org: the current build of Dragonfly, and any important messages that pertain to your version of Dragonfly. The only data sent to our site is your Dragonfly version number; we do <strong>not</strong> log these requests to our server.');
// maintenance
define('_MAINTENANCE','الصيانة ');
define('_MESSAGE','رسالة');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','إدارة  اللغة');
define('_SELLANGUAGE','اللغة الافتراضية لموقعي');
define('_LOCALEFORMAT','تنسيق الوقت المحلي');
define('_ACTMULTILINGUAL','فعّل ميزة اللغات المتعددة ');
define('_ACTUSEFLAGS','استخدم أعلام الدول بدل من القائمة المنسدلة ');
// banners
define('_BANNERSOPT','إدارة  الشعار');
define('_ACTBANNERS','فعل نظام الشعار');
// footer
define('_FOOTERMSG','ذيل الصفحة');
define('_FOOTERLINE1','السطر الأول في ذيل الصفحة');
define('_FOOTERLINE2','السطر الثاني في ذيل الصفحة');
define('_FOOTERLINE3','السطر الثالث في ذيل الصفحة ');
// backend
define('_BACKENDCONF','RSS Feed');
define('_BACKENDTITLE','Feed title');
define('_BACKENDLANG','Feed language');
// mail stories
define('_MAIL2ADMIN','انتظار السماح بالاخبار');
define('_NOTIFYSUBMISSION','أعلم المشرف حول المقالات المنتظرة');
define('_EMAIL2SENDMSG','بريد المرسل اليه');
define('_EMAILSUBJECT','موضوع الرسالة');
define('_EMAILMSG','نص الراسلة');
define('_EMAILFROM','بريد المرسل للرسالة ');
// comments
define('_COMMENTSOPT','إدارة  التعليقات ');
define('_COMMENTSLIMIT','Truncate comments after __ characters');
define('_COMMENTSMOD','Allow moderations of comments');
define('_MODADMIN','نعم ، من قبل المشرفين');
define('_MODUSERS','نعم من قبل الأعضاء');
define('_NOMOD','لا لا تستخدم الإدارة ');
// adminmenu
define('_GRAPHICOPT','Administration Menu Layout');
define('_BOTH','كليهما ');
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
define('_SMTP_HOST','عنوان ملقم الصادر SMTP');
define('_USE_SMTP_AUTH','هل يحتاج السيرفر لترخيص ملقم SMTP');
define('_SMTP_USER_NAME','اسم مستخدم ملقم الصادر SMTP');
define('_SMTP_USER_PASS','كلمة سر ملقم الصادر');

// cpg_adminmenu.php
define('_ADMINMENU','قائمة');
define('_ADMINLOGOUT','تسجيل الخروج');
define('_AMENU0','System');
define('_AMENU1','عام');
define('_AMENU2','الأعضاء');
define('_AMENU3','الرسائل');
define('_AMENU4','المنتديات');
define('_AMENU5','Informative');
define('_AMENU6','Linking');
define('_AMENU7','Commerce');
define('_AMENU8','Multimedia');
define('_AMENU9','البرامج المستقلة');
define('_BMENU1','Help');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','الإعدادات العامة');
define('_DATABASE','قواعد البيانات');
define('_BLOCKS','البلوكات');
define('_MODULES','البرامج المستقلة');
define('_EDITADMINS','المشرفين');
define('_MESSAGES','رسائل');
define('_BANNERS','شعارات');
define('_HTTPREFERERS','مرجعية العناوين');
define('_EDITUSERS','الأعضاء');
define('_USERSCONFIG','إعددادات المستخدمين');
define('_NEWSLETTER','صحيفة');
define('_SUBMISSIONS','مواضيع');
define('_ADDSTORY','أضف مقال');
define('_TOPICS','عنواين');
define('_ADMPOLLS','معاينة');
define('_EPHEMERIDS','الأحداث التاريخية');
define('_REVIEWS','مراجعات');
define('_ENCYCLOPEDIA','موسوعة');
define('_SURVEYS','معاينة');
define('_SECTIONS','أقسام');
define('_ARTICLES','مقالات');
define('_FAQ','شروحات');
define('_DOWNLOAD','تحميل');
define('_WEBLINKS','روابط ويب');
define('_CONTENT','المحتوى');
define('_SYSINFO','System Info');
define('_REPORTABUG','أرسل تقرير عن المشكلة .');
//coppermine admin
define('_W_INSTALL','أي تنصيب؟');
define('_W_PAGE','أي صفحة ؟');
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
define('_ERROR','خطأ');
define('_SEC_ERROR','خطأ أمن');
define('_ERROR_NOT_SET','%s was not set');
define('_ERROR_NO_POST','Posting from another host is disallowed...');
define('_ERROR_NO_GET','GET requests are not allowed for this function...');
define('_ERROR_BAD_CHAR','The characters that you tried to include in your %s request are forbidden...');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','قمت بمحاولة الدخول لهذه الصفحة من خلال رابط غير صالح');
define('_ERROR_NONE_TO_DISPLAY','لا يوجد s%');
define('_ERROR_DELETE_CONF','هل أنت متاكد انك تريد حذف s%');
define('_ERROR_NO_EXIST','%s غير موجود');
define('_ERROR_ALREADYEXIST','%s already exists');
define('_TASK_COMPLETED','العملية تمت !');
define('_CONFIRM','Confirm');
define('_FOOTER_COPYRIGHTS', 'Interactive software released under <a href="http://dragonflycms.org/GNUGPL.html" target="_blank" title="GNU Public License Agreement">GNU GPL</a>,	<a href="'.getlink('credits').'">Code Credits</a>,	<a href="'.getlink('privacy_policy').'">Privacy Policy</a>');

# time
$LNG = array('_time' => array(
'l' => array('الاحد', 'الاثنين', 'الثلاثاء', 'الاربعاء', 'الخميس', 'الجمعة', 'السبت'),
'D' => array('الاحد', 'الاثنين', 'الثلاثاء', 'الاربعاء', 'الخميس', 'الجمعة', 'السبت'),
'F' => array(1=>'يناير', 'فبراير', 'مارس', 'ابريل', 'مايو', 'يونيو', 'يوليو', 'اغسطس', 'سبتمبر', 'اكتوبر', 'نوفمبر', 'ديسمبر'),
'M' => array(1=>'يناير', 'فبراير', 'مارس', 'ابريل', 'مايو', 'يونيو', 'يوليو', 'اغسطس', 'سبتمبر', 'اكتوبر', 'نوفمبر', 'ديسمبر'),
));
$LNG['_time']['l'][7] =& $LNG['_time']['l'][0];
$LNG['_time']['D'][7] =& $LNG['_time']['D'][0];

define('_JS_ALERT', '<script type="text/javascript">alert("%s");</script>');