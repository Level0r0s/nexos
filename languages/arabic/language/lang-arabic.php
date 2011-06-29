<?php
/**************************************************************  
  CPG-NUKE: Advanced Content Management System
********************************************
  A highly modified version of PHP-Nuke 6.5
  which is Copyright (c) 2002 by Francisco Burzi
  http://phpnuke.org
  Under the GNU General Public License version 2
***************************************************************
  Main language file
  Last modification: 
  Now UTF-8 encoded                                                    
  $Id: lang-arabic.php,v 1.3 2004/08/18 04:23:17 akamu Exp $    
***************************************************************/
/* For Multilingual Modules Block  */
define("_CPGlangLANG", "Help Translate");
define("_ContentLANG", 'Content');
define("_coppermineLANG", 'Photo Gallery');
define("_DownloadsLANG", 'Downloads');
define("_EncyclopediaLANG", 'Encyclopedia');
define("_ForumsLANG", 'Community Forums');
define("_ContactLANG", 'Contact Us');
define("_FAQLANG", 'FAQ - Help');
define("_JournalLANG", 'Journal');
define("_Members_ListLANG", 'Members List');
define("_NewsLANG", 'News');
define("_ReviewsLANG", 'Reviews');
define("_SearchLANG", 'Search');
define("_SectionsLANG", 'Sections');
define("_StatisticsLANG", 'Statistics');
define("_Stories_ArchiveLANG", 'Stories Archive');
define("_Submit_NewsLANG", 'Submit News');
define("_SurveysLANG", 'Surveys');
define("_TopLANG", 'Top 10');
define("_TopicsLANG", 'Topics');
define("_Private_MessagesLANG", 'My Private_Messages');
define("_Recommend_UsLANG", 'Recommend Us');
define("_Web_LinksLANG", 'Links');
define("_Your_AccountLANG", 'My Account');
define("_EVENTS4ULANG", "Calendar");
define("_COMMUNITY", "Community");
define("_COMMUNICATION", "Communication");
define("_FRIENDS", "Friends");
define("_STORE", "Store");
define("_PRODUCTS", "Products");
define("_DONATE", "Donate");
define("_HELP", "Help");
define("_GALLERIES", "Galleries");
define("_DOCS", "Documentation");
define("_RULES", "Rules & regulations");

/* END Multilingual Modules Block */
/* START Newsletter Block */
define("_NEWSLETTERBLOCKSUBSCRIBED", "You <strong>are</strong> subscribed to<br />our newsletter");
define("_NEWSLETTERBLOCKNOTSUBSCRIBED", "You are <strong>not</strong> subscribed to<br />our newsletter");
define("_NEWSLETTERBLOCKREGISTER", "You must be a<br /><strong>registered user</strong><br />to receive our newsletter");
define("_NEWSLETTERBLOCKSUBSCRIBE", "Subscribe");
define("_NEWSLETTERBLOCKUNSUBSCRIBE", "Unsubscribe");
define("_NEWSLETTERBLOCKREGISTERNOW", "Register Now!");
define("_NEWSLETTERBLOCKNEWSLETTER", "Newsletter");
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



/*****************************************************/
/* Function to translate Datestrings                 */
/*****************************************************/
 
define("_CHARSET", "UTF-8"); // windows-1256
define("_BROWSER_LANGCODE", "ar");
define('_TEXT_DIR', 'rtl');
define('_ALIGN_TEXT', 'right');

define("_SEARCH", "بحث");
define("_LOGIN", "دخول");
define("_WRITES", "كتب");
define("_POSTEDON", "أرسلت في");
define("_NICKNAME", "الكنية");
define("_PASSWORD", "كلمة المرور");
define("_WELCOMETO", "مرحبا");
define("_EDIT", "تعديل");
define("_DELETE", "مسح");
define("_POSTEDBY", "أرسلت بواسطة");
define("_READS", "قراءة");
define("_GOBACK", "[ <a href=\"javascript:history.go(-1)\">رجوع</a> ]");
define("_COMMENTS", "تعليقات");
define("_PASTARTICLES", "مقالات سابقة");
define("_OLDERARTICLES", "مقالات قديمة");
define("_BY", "بواسطة");
define("_ON", "في");
define("_LOGOUT", "خروج");
define("_WAITINGCONT", "محتويات للمراجعة");
define("_SUBMISSIONS", "مواضيع");
define("_WREVIEWS", "تعقيبات للمراجعة");
define("_WLINKS", "روابط للمراجعة");
define("_EPHEMERIDS", "الأحداث التاريخية");
define("_ONEDAY", "في مثل هذا اليوم...");
define("_ASREGISTERED", "لم تسجل بعد؟ تستطيع <a href=\"modules.php?name=Your_Account\">التسجيل</a>. بعد التسجيل يمكنك تغيير شكل الموقع, والتحكم في التعليقات وإرسال تعليقات بإسمك.");
define("_MENUFOR", "القائمة ل");
define("_NOBIGSTORY", "لا يوجد مقال مشهور اليوم.");
define("_BIGSTORY", "أكثر المقالات قراءة اليوم:");
define("_SURVEY", "استفتاء");
define("_POLLS", "تصويتات");
define("_PCOMMENTS", "تعليقات:");
define("_RESULTS", "نتائج");
define("_HREADMORE", "قراءة المزيد...");
define("_CURRENTLY", "يوجد حاليا,");
define("_GUESTS", "ضيف/ضيوف");
define("_MEMBERS", "عضو/أعضاء يتصفحون الموقع.");
define("_YOUARELOGGED", "تم دخولك بإسم");
define("_YOUHAVE", "يوجد لديك");
define("_PRIVATEMSG", "رسالة خاصة.");
define("_YOUAREANON", "أنت غير مسجل لدينا. تستطيع التسجيل مجانا بالضغط <a href=\"modules.php?name=Your_Account\">هنا</a>");
define("_NOTE", "ملحوظة:");
define("_ADMIN", "اسم المشرف:");
define("_WERECEIVED", "تم استعراض");
define("_PAGESVIEWS", "صفحة للعرض منذ");
define("_TOPIC", "الموضوع");
define("_UDOWNLOADS", "عداد");
define("_VOTE", "تصويت");
define("_VOTES", "تصويتات");
define("_MVIEWADMIN", "عرض: المشرفين فقط");
define("_MVIEWUSERS", "عرض: الأعضاء المسجلين فقط");
define("_MVIEWANON", "عرض: المستخدمين غير المسجلين فقط");
define("_MVIEWALL", "عرض: جميع الزوار");
define("_EXPIRELESSHOUR", "تاريخ الإنتهاء:أقل من ساعة");
define("_EXPIREIN", "تنتهي في");
define("_HTTPREFERERS", "مرجعية العناوين");
define("_UNLIMITED", "غير محدود");
define("_HOURS", "ساعات");
define("_RSSPROBLEM", "حاليا يوجد مشكلة في الأخبار من هذا الموقع");
define("_SELECTLANGUAGE", "اختر اللغة");
define("_SELECTGUILANG", "اختر لغة الواجهة:");
define("_NONE", "لا يوجد");
define("_BLOCKPROBLEM", "<center>يوجد مشكلة في هذه المجموعة.</center>");
define("_BLOCKPROBLEM2", "<center>لا يوجد محتويات لهذه المجموعة حاليا.</center>");
define("_MODULENOTACTIVE", "عفوا هذا البرنامج معطل!");
define("_NOACTIVEMODULES", "البرامج المستقلة المعطلة");
define('_MODULENOEXIST', 'We\'re sorry, but the requested file, %s, does not appear to exist');//NEW akamu
define("_FORADMINTESTS", "(لعمل اختبار بواسطة المشرف)");
define("_BBFORUMS", "المنتديات");
define("_ACCESSDENIED", "الدخول غير مسموح");
define("_RESTRICTEDAREA", "أنت تحاول الدخول الى صفحات خاصة.");
define("_MODULEUSERS", "عفوا هذا القسم من الموقع <i>للأعضاء المسجلين فقط</i><br><br>يمكنك التسجيل بالضغط <a href=\"modules.php?name=Your_Account&op=new_user\">هنا</a>, بعد ذلك<br>يمكنك الدخول الى هذا القسم.<br><br>");
define("_MODULESADMINS", "عفوا هذا القسم من الموقع  <i>للمشرفين فقط</i><br><br>");
define("_HOME", "الصفحة الأولى");
define("_HOMEPROBLEM", "يوجد مشكلة: لا يوجد صفحة اولى!!!");
define("_ADDAHOME", "أضف برنامج مستقل الى الصفحة الأولى");
define("_HOMEPROBLEMUSER", "يوجد مشكلة حاليا في الصفحة الأولى. الرجاء معاودة الزيارة لاحقا.");
define("_MORENEWS", "المزيد في أخبار الأقسام الخاصة");
define("_ALLCATEGORIES", "جميع الأقسام");
define("_DATESTRING", "%A, %B %d");
define("_DATESTRING2", "%A, %B %d");
define("_DATE", "التاريخ");
define("_HOUR", "الساعة");
define("_UMONTH", "الشهر");
define("_YEAR", "السنة");
define("_JANUARY", "يناير");
define("_FEBRUARY", "فبراير");
define("_MARCH", "مارس");
define("_APRIL", "ابريل");
define("_MAY", "مايو");
define("_JUNE", "يونيو");
define("_JULY", "يوليو");
define("_AUGUST", "اغسطس");
define("_SEPTEMBER", "سبتمبر");
define("_OCTOBER", "اكتوبر");
define("_NOVEMBER", "نوفمبر");
define("_DECEMBER", "ديسمبر");
define("_BWEL", "مرحبا");
define("_BPM", "الرسائل الخاصة");
define("_BUNREAD", "لم يقرأ");
define("_BREAD", "قراءة");
define("_BMEMP", "عضوية");
define("_BLATEST", "الأخير");
define("_BTD", "جديد اليوم");
define("_BYD", "جديد بالأمس");
define("_BOVER", "الكل");
define("_BVISIT", "المتصفحون الآن");
define("_BVIS", "الزوار");
define("_BMEM", "الأعضاء");
define("_BTT", "المجموع");
define("_BON", "المتصفحون حاليا");
define("_BREG", "تسجيل");
define("_BROADCAST", "أرسل رسالة عامة");
define("_BROADCASTFROM", "رسالة عامة من");
define("_TURNOFFMSG", "اغلاق الرسائل العامة");
define("_JOURNAL", "المجلة");
define("_READMYJOURNAL", "اقرأ مجلتي");
define("_ADD", "اضافة");
define("_YES", "نعم");
define("_NO", "لا");
define("_INVISIBLEMODULES", "البرامج المستقلة المخفية");
define("_ACTIVEBUTNOTSEE", "(منشطة ولكن الرابط مخفي)");
/* Moved to module
*/
define("_TEAM", "فريق العمل");
define("_MODREQLINKS", "تعديل مواقع");
define("_BROKENLINKS", "مواقع لا تعمل");
define("_MODREQDOWN", "تعديل برامج");
define("_BROKENDOWN", "برامج لا تعمل");
define("_PAGEGENERATION", "انشاء الصفحة:");
define("_SECONDS", "ثانية");
define("_YOUHAVEONEMSG", "You Have 1 New Private Message");
define("_NEWPMSG", "New Private Messages");
define("_CONTRIBUTEDBY", "Contributed by");
define("_CHAT", "Chat");
define("_REGISTERED", "Registered");
define("_CHATGUESTS", "Guests");
define("_USERSTALKINGNOW", "Users Talking Now");
define("_ENTERTOCHAT", "Enter To Chat");
define("_CHATROOMS", "Available Rooms");
define("_TOPICS", "Topics");
define("_ALLTOPICS", "All Topics");
define("_ASSOTOPIC", "Associated Topics");
define("_HELLO", "Hello");

/* ---- Begin modified block-User_Info english ----*/

define("_SECURITYCODE", "Security Code");
define("_TYPESECCODE", "Type Security Code");
define("_MEMBERSOPTIONS", "Members options");
define("_READSEND", "Read your private messages. Send messages to others.");
define("_INBOX", "Inbox");
define("_NEW", "New");
define("_ACCOUNTOPTIONS", "Your Account. Change options and read your messages.");
define("_LOGOUTACCT", "Log out of this account.");
define("_LOGOUTADMINACCT", "Log out of admin account.");
define("_BLOGIN", "Your Account");
define("_BFLOGIN", "Forum Profile");
define("_BHID", "Hidden");
define("_WHOWHERE", "Who Is Where");
define("_STAFFONL", "Staff Online");
define("_STAFFNONE", "No staff members are online!");

/*****************************************************/
/* Function to translate Datestrings                 */
/*****************************************************/

function translate($phrase) {
    switch($phrase) {
    case "xdatestring":    $tmp = "%A, %B %d @ %T %Z"; break;
    case "linksdatestring":    $tmp = "%d-%b-%Y"; break;
    case "xdatestring2":    $tmp = "%A, %B %d"; break;
    default:        $tmp = "$phrase"; break;
    }
    return $tmp;
}

?>