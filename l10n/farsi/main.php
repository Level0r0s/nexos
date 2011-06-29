<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/farsi/main.php,v $
  $Revision: 9.29 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:48 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','fa');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %d %B %Y (%H:%M:%S)');
define('_DATESTRING2','%A, %B %d');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','صفحه بعد');
define('_PREVIOUSPAGE','صفحه قبل');

define('_TEXT_DIR','rtl');
define('_ALIGN_TEXT','right');
define('_SEARCH','جست و جو');
define('_LOGIN','ورود');
define('_WRITES','می نويسد');
define('_POSTEDON','پست شده در');
define('_NICKNAME','نام کاربری');
define('_PASSWORD','کلمه عبور');
define('_WELCOMETO','خوش آمدید به');
define('_EDIT','ویرایش');
define('_DELETE','حذف');
define('_POSTEDBY','پست شده توسط');
define('_READS','خوانده شده ها');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">صفحه قبل</a>' : '<a href="javascript:history.go(-1)">صفحه قبل</a>').' ]');
define('_COMMENTS','نظرات');
define('_PASTARTICLES','مقالات قبلی');
define('_OLDERARTICLES','مقالات قديمی تر');
define('_BY','به وسیله');
define('_ON','در تاريخ');
define('_LOGOUT','خروج');
define('_WAITINGCONT','مقاله های در حال بررسی');
define('_WREVIEWS','بازبینی های در حال بررسی');
define('_WLINKS','لینک های در حال بررسی');
define('_ONEDAY','روزی مانند امروز ...');
define('_ASREGISTERED','هنوز عضو نیستید؟ شما می توانید <a href="'.getlink('Your_Account&amp;file=register').'">عضو شوید</a>. یک کاربر عضو شده می تواند تم مخصوص برای خود انتخاب کند،با نام خودش پست دهد،پیام خصوصی برای دیگر کاربران بفرستد و ...');
define('_MENUFOR','منو برای');
define('_NOBIGSTORY','هنوز هيچ مطلب پربيننده اي براي امروز وجود ندارد');
define('_BIGSTORY','پربييننده ترين مطلب امروز...:');
define('_SURVEY','نظرسنجی');
define('_POLLS','رأی گيری ها');
define('_PCOMMENTS','نظرات:');
define('_RESULTS','نتایج');
define('_HREADMORE','بیشتر بخوانید...');
define('_CURRENTLY','هم اکنون وجود دارد...');
define('_GUESTS','مهمان و');
define('_MEMBERS','اعضا انلاین');
define('_YOUARELOGGED','شما با اين شناسه وارد شده ايد...');
define('_YOUHAVE','شما دارید');
define('_PRIVATEMSG','پيغام خصوصي.');
define('_YOUAREANON',' شما عضو نیستید.شما میتوانید از<a href="'.getlink('Your_Account&amp;file=register').'">این جا</a> وارد شوید.');
define('_NOTE','تذکر:');
define('_ADMIN','مدیر');
define('_WERECEIVED','ما دریافت کرده ایم');
define('_PAGESVIEWS','صفحه ديده شده در');
define('_TOPIC','موضوع');
define('_UDOWNLOADS','دريافت فايل');
define('_VOTE','رأي گيري');
define('_VOTES','رأي گيري ها');
define('_MVIEWADMIN','فقط برای مدیران قابل نمایش است');
define('_MVIEWUSERS','فقط برای کاربران قابل نمایش است');
define('_MVIEWANON','فقط برای مهمان ها قابل نمایش است');
define('_MVIEWALL','قابل نمایش برای همه');
define('_EXPIRELESSHOUR','مدت انقضا:کم تر از يک ساعت');
define('_EXPIREIN','انضا در');
define('_UNLIMITED','نامحدود');
define('_HOURS','ساعت');
define('_RSSPROBLEM','هم اکنون مشکلي در بخش موضوعات اين سايت وجود دارد ');
define('_SELECTLANGUAGE','انتخاب زمان');
define('_SELECTGUILANG','انتخاب زبان نمایش');
define('_NONE','هیچ کدام');
define('_BLOCKPROBLEM','<center>این بلاک موقتاً خراب است</center>');
define('_BLOCKPROBLEM2','<center>این بلاک فاقد مطلب است</center>');
define('_MODULENOTACTIVE','متأسفيم، اين ماژول غير فعال شده است.');
define('_NOACTIVEMODULES','ماژول های غیر فعال');
define('_MODULENOEXIST','متأسفيم، اين صفحه وجود ندارد');
define('_FORADMINTESTS','(برای آزمایش مدیر)');
define('_BBFORUMS','انجمن ها');
define('_ACCESSDENIED','امکان دسترسی نیست');
define('_RESTRICTEDAREA','شما سعي ميکنيد به يک قسمت محدود دسترسي پيدا کنيد.');
define('_MODULEUSERS','متأسفیم،اين قسمت فقط براي <i>کاربرام عضو شده</i>است.<br><br>');
define('_MODULEUSERS2','شما ميتوانيد يا کليک روي <a href=\"".getlink("Your_Account&op=new_user")."\">اين جا</a>ثبت نام کنيد, دسترسي پيدا کنيد<br>اين بخش بدون محدوديت قابل دسترسي است.<br><br>');
define('_MODULESADMINS','متأسفیم،اين قسمت تنها براي  <i>مديران </i>است.<br><br>');
define('_MODULESGROUPS','دسترسی به گروه لازم است');
define('_HOME','صفحه اصلی');
define('_HOMEPROBLEM','يک مشکل بزرگ اين جاست:ما صفحه ي اصلي نداريم!!!');
define('_ADDAHOME','انتخاب یک ماژول جدید برای صفحه ی اول');
define('_HOMEPROBLEMUSER','يک مشکلدر اين جا وجود دارد.لطفاً بعداً امتحان کنيد.');
define('_MORENEWS','بيشتر در بخش اخبار');
define('_ALLCATEGORIES','همه ی شاخه ها');
define('_SPAMGUARDPROTECTED','سپم گارد مانع فرستادن اين ايميل شده است');
define('_M_CHARS','حداکثر  % حرف');

define('_SYS_MESSAGE','پیام سیستم');
define('_SYS_MESSAGES','پیام های سیستم');
define('_SYS_MAINTENANCE','You are running under maintenance mode');
define('_SYS_DEMO','You are running under administration demo mode<br />You cannot make any changes to the database<br /><a href="'.adminlink('logout').'">Log me out!</a>');

define('_DATE','تاریخ');
define('_HOUR','ساعت');
define('_UMONTH','ماه');
define('_YEAR','سال');
define('_JANUARY','ژانویه');
define('_FEBRUARY','فوریه');
define('_MARCH','مارس');
define('_APRIL','آوریل');
define('_MAY','مه');
define('_JUNE','ژوئن');
define('_JULY','ژوئیه');
define('_AUGUST','آگوست');
define('_SEPTEMBER','سپتامبر');
define('_OCTOBER','اکتبر');
define('_NOVEMBER','نوامبر');
define('_DECEMBER','دسامبر');

define('_MONDAY','دوشنبه');
define('_TUESDAY','سه شنبه');
define('_WEDNESDAY','چهار شنبه');
define('_THURSDAY','پنجشنبه');
define('_FRIDAY','جمعه');
define('_SATURDAY','شنبه');
define('_SUNDAY','یک شنبه');
//three letter abbrev.
define('_ABR_MONDAY','دوشنبه');
define('_ABR_TUESDAY','سه شنبه');
define('_ABR_WEDNESDAY','چهار شنبه');
define('_ABR_THURSDAY','پنجشنبه');
define('_ABR_FRIDAY','جمعه');
define('_ABR_SATURDAY','شنبه');
define('_ABR_SUNDAY','یک شنبه');

define('_BWEL','خوش آمدید');
define('_BPM','پیام خصوصی');
define('_BUNREAD','خوانده نشده');
define('_BREAD','خوانده شده');
define('_BMEMP','کاربران سایت');
define('_BLATEST','آخرین');
define('_BTD','تازه های امروز');
define('_BYD','تازه های دیروز');
define('_BOVER','مجموع');
define('_BVISIT','بازدیدکنندگان');
define('_BVIS','مهمان');
define('_BMEM','کاربران');
define('_BTT','همه');
define('_BON','کاربران حاضر در سایت');
define('_BREG','عضویت');
define('_BROADCAST','انتشار پيغام همگانی');
define('_BROADCASTFROM','پیام همگانی از طرف');
define('_TURNOFFMSG','بستن پیام خصوصی همگانی');
define('_JOURNAL','وبلاگ هاي کاربران');
define('_READMYJOURNAL','وبلاگ اين کاربر');
define('_ADD','اضافه کردن');
define('_YES','بله');
define('_NO','نه');
define('_INVISIBLEMODULES','ماژول های مخفی');
define('_ACTIVEBUTNOTSEE','(فعال ولی مخفی)');
define('_BOTS','Bots');

define('_UM','نمايش گر به روز رسانی دراگون فلای');
define('_UM_F','برقراری ارتباط برای ارتقا سیستم مقدور نیست.لطفاً بار دیگر تلاش کنید.');
define('_UM_G','شما جدیدترین سیستم Dragon Fly را استفاده می کنید.');
define('_UM_R','Please <a href="%2$s" target="_blank">upgrade</a> to build %1$s');

define('_TEAM','تیم');
define('_LINKAPPROVEDMSG','تبريک. لينکی که شما برای سايت فرستاده بوديد تاييد شد.');
define('_MODREQLINKS','لينک ها  آماده ي تأييد');
define('_BROKENLINKS','لینک خراب');
define('_MODREQDOWN','فايل هاي آماده ي تأييد');
define('_BROKENDOWN','فایل خراب');
define('_PAGEGENERATION','ساخت صفحه');
define('_SECONDS','ثانیه');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','توليد صفحه در:%1$s ثانيه  و %2$s ساخت ديتابيس در %3$s ثانيه');
define('_YOUHAVEONEMSG','شما یک پیام خصوصی جدید دارید');
define('_NEWPMSG','پیام های خصوصی جدید');
define('_CONTRIBUTEDBY','همکاری توسط:');
define('_CHAT','چت');
define('_REGISTERED','عضو شده');
define('_CHATGUESTS','مهمان');
define('_USERSTALKINGNOW','اعضا در حال گفتگو');
define('_ENTERTOCHAT','وارد شدن به چت');
define('_CHATROOMS','روم های در دسترس');
define('_ALLTOPICS','همه ی موضوعات');
define('_ASSOTOPIC','موضوعات وابسته');
define('_HELLO','سلام');
define('_ALL','همه');
define('_URL','آدرس');
define('_SUBJECT','موضوع');
define('_PREVIEW','پيش نمايش');
define('_SEND','فرستادن');
define('_ANONYMOUS','مهمان');
define('_BREADCRUMB', 'Breadcrumb Delimiter, separates words in pagetitles');
define('_BC_DELIM',''.isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&gt;&gt;');//''. is for cpglang
define('_RESET','دوباره');
define('_AT','در');
define('_LASTMSGS',' % پيغام آخر انجمن');
define('_LASTPOSTBY','آخرين ارسال توسط: %1$s in %2$s on %3$s');
define('_PRINTER','ويرايش قابل چاپ');

define('_CREDITS_TITLE','سازندگان');
define('_CREDITS_PRODUCT','محصول');
define('_CREDITS_DESC','توضيحات');
define('_CREDITS_AUTHORS','نويسنده');

define('_PP_TITLE','قوانين');
define('_PP_MODIFY','ويرايش اين پيغام');

define('_SENDERNAME','نام ارسال کننده');
define('_SENDEREMAIL','ايميل ارسال کننده');
define('_RECIPIENTNAME','نام گيرنده');
define('_RECIPIENTEMAIL','ايميل گيرنده');

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
define('_TB_BLOCK','ابزار صفحه شخصی ');
define('_TB_TASKS','وظايف');
define('_TB_INFO','اطلاعات');
define('_TB_PROFILE_INFO','پروفایل همگانی ');
define('_TB_EDIT_PROFILE','اطلاعات پروفایل ');
define('_TB_EDIT_REG','جزئیات عضویت');
define('_TB_EDIT_PRIVATE','اطلاعات شخصی ');
define('_TB_EDIT_AVATAR','آواتار ');
define('_TB_DELETE','پاک کردن اکانت');
define('_TB_CONFIG','تنظیمات');
define('_TB_EDIT_PREFS','اختيارات ');
define('_TB_EDIT_HOME',' تنظیمات صفحه ی اصلی');
define('_TB_EDIT_COMM','تنظیمات نظرات ');
define('_TB_PERSONAL','شخصی');
define('_TB_PERSONAL_GALLERY','گالری من');
define('_TB_PERSONAL_JOURNAL','وبلاگ من');
define('_TB_PRIVMSGS','پيغام های خصوصی');
define('_TB_PRIVMSGS_INBOX','پیام های رسیده');
define('_TB_PRIVMSGS_OUTBOX','پیام های فرستاده شده ولی خوانده نشده');
define('_TB_PRIVMSGS_SENTBOX','پيام های فرستاده شده و خوانده شده');
define('_TB_PRIVMSGS_SAVEBOX','پیام های ذخیره شده');
define('_TB_PRIVMSGS_SEND','فرستادن پیام');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','اطلاعات کاربر');
define('_SECURITYCODE','کد امنیتی');
define('_TYPESECCODE','کد را وارد کنيد');
define('_MEMBERSOPTIONS','انتخاب های کاربران');
define('_READSEND','خواندن پیام خصوصی .فرستادن پیام خصوصی  به دیگران');
define('_INBOX','پیام های رسیده');
define('_NEW','جدید');
define('_ACCOUNTOPTIONS','اکانت کاربري شما و تنظيمات آن.');
define('_LOGOUTACCT','خارج شدن از این اکانت.');
define('_LOGOUTADMINACCT','خارج شدن از اکانت مدیریت.');
define('_BLOGIN','صفحه شخصی');
define('_BFLOGIN','اکانت شما ');
define('_BHID','مخفی');
define('_WHOWHERE','چه کسی کجاست');
define('_STAFFONL','مدیران آنلاین');
define('_STAFFNONE','هیچ مدیری آنلاین نیست.');

/* For Multilingual Modules Block  */
define('_COMMUNITY','ارتباط');
define('_BlogLANG','وبلاگ ها');
define('_ContentLANG','مقالات');
define('_coppermineLANG','گالری تصاویر');
define('_CPGlangLANG','کمک ترجمه');
define('_DownloadsLANG','دریافت فایل');
define('_EncyclopediaLANG','فرهنگ نامه');
define('_ForumsLANG','انجمن های گفتگو');
define('_ContactLANG','ارتباط با ما');
define('_FAQLANG','سئوالات همگانی - کمک');
define('_Members_ListLANG','لیست کاربران');
define('_NewsLANG','اخبار');
define('_ReviewsLANG','نقدنامه ها');
define('_SearchLANG','جست و جو');
define('_StatisticsLANG','آمار سایت');
define('_Stories_ArchiveLANG','آرشيو اخبار');
define('_Submit_NewsLANG','فرستادن خبر/مقاله');
define('_SurveysLANG','نظرسنجی ها');
define('_TopLANG', 'برترین ها');
define('_TopicsLANG','موضوع ها');
define('_Private_MessagesLANG','پیام خصوصی ');
define('_Recommend_UsLANG','معرفی به دوستان');
define('_Web_LinksLANG','لینک ها');
define('_Your_AccountLANG','تنظيمات کاربري شما');
define('_CPG_EventsLANG','تقویم');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Languages!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Groups');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Headlines');

define('_COMMUNICATION','ارتباطات');
define('_FRIENDS','دوستان');
define('_STORE','مغازه');
define('_PRODUCTS','محصولات');
define('_DONATE','هديه');
define('_HELP','کمک');
define('_GALLERIES','گالری های عکس');
define('_DOCS','مستند سازی');
define('_RULES','قوانين و مقررات');
define('_MENU','منو اصلی');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','شما <strong>هستید</strong> عضو<br />خبرنامه ی ما');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','شما <strong>نیستید</strong> عضو<br />خبر نامه ی ما');
define('_NEWSLETTERBLOCKREGISTER','شما باید یک <br /><strong>کاربر عضو شده باشید</strong><br />تا خبرنامه ی ما را دریافت کنید.');
define('_NEWSLETTERBLOCKSUBSCRIBE','عضو');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','غیر عضو');
define('_NEWSLETTERBLOCKREGISTERNOW','هم اکنون عضو شوید!');
/* END Newsletter Block */

/* START class phpmailer lang array */
$PHPMAILER_LANG = array();
$PHPMAILER_LANG['provide_address'] = 'شما حد اقل باید یک ایمیل گیرنده فراهم کنید..';
$PHPMAILER_LANG['mailer_not_supported'] = ' فرستنده پشتیبانی نشده.';
$PHPMAILER_LANG['execute'] = ' قابل اداره کردن نیست:';
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
define('_SAVECHANGES','ذخیره ی تغییرات');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','زبان');
define('_FUNCTIONS','وظایف');
define('_SHOW','نمایش');
define('_TO','به');
define('_DAY','روز');
define('_LAST','آخرین');
define('_ACTIVE','فعال');
define('_DEACTIVATE','غیر فعال کردن');
define('_INACTIVE','غیر فعال');
define('_ACTIVATE','فعال کردن');
define('_ACTIVATE2','فعال ؟');
define('_VIEW','قابل نمایش به');
define('_VIEWPRIV','نشان بده این را به');
define('_MVADMIN','تنها مدیران');
define('_MVUSERS','تنها اعضا');
define('_MVANON','تنها مهمان ها');
define('_MVALL','همه ی بازدید کنندگان');
define('_IMAGE','تصویر');
define('_GO','برو!');
define('_OPTION','اختبارات');
define('_CATEGORY','شاخه');
define('_SUBCATEGORY','Sub-Category');
define('_ID','شناسه');
define('_EXPIRATION','انقضا');
define('_DAYS','روز');
define('_WARNING','هشدار');
define('_POLLTITLE','عنوان نظرسنجی');
define('_POLLEACHFIELD','لطفاً هر گزینه را در یک فیلد جدا وارد کنید');
define('_ADDCATEGORY','اضافه کردن یک شاخه ی جدید');
define('_PAGEBREAK','اگر شما می خواهید مقاله ی شما چند صفحه باشد،در پایان هر صفحه <b>&lt;!--pagebreak--&gt;</b> را وارد کنید.');
define('_SIGNATURE','امضا');
define('_DESCRIPTION','توضیح');
define('_EDITCATEGORY','ویرایش شاخه');
define('_IN','در');
define('_DESCRIPTION255','توضیح: (255 حداکثر)');
define('_MODCATEGORY','اصلاح یک شاخه');
define('_SUBMITTER','فرستنده');
define('_VISIT','دیدن');
define('_EXTENDEDTEXT','گسترش متن');
define('_CHECKCATEGORIES','چک کردن شاخه ها');
define('_INCLUDESUBCATEGORIES','(شامل بودن زیر شاخه ها)');
define('_CHECKSUBCATEGORIES','چک کردن زیر شاخه ها');
define('_VALIDATELINKS','قبول لینک ها');
define('_FAILED','موفق نشد!');
define('_BEPATIENT','(لطفاً صبور باشید)');
define('_VALIDATINGCAT','قبول کردن شاخه ها (و همه ی زیر شاخه ها)');
define('_VALIDATINGSUBCAT','قبول زیر شاخه ها');
define('_OK','قبول!');
define('_CHECK','بررسی');
define('_IGNORE','نادیده گرفتن');
define('_HITS','بازدید کنندگان');
define('_FILESIZE', 'حجم فایل');
define("_EZTHEREIS","There are");
define("_EZSUBCAT","sub-categories");
define("_EZATTACHEDTOCAT","under this category");
define("_EZBROKENLINKS","Broken Links");
define("_DELEZLINKCATWARNING","WARNING : Are you sure you want to delete this category ?<br /> You will delete all sub-categories and attached links as well !");

// index.php
define('_DEFHOMEMODULE','ماژول پیش فرض صفحه ی اول');
define('_MODULEINHOME','ماژول لود شده در صفحه ی اول:');
define('_CHANGE','تعویض');
define('_WHOSONLINE','چه کسی آنلاین است ؟');
define('_NP_ADMIN','دفترچه یادداشت');
define('_NP_LOCKED','دفترچه یادداشت قفل شده است.<br />تنها یک مدیر کل(کاربر سوپر) می تواند آن را باز کند.');
define('_NP_SAVE','نوشته ذخیره شد');
define('_NP_UNLOCK','باز کردن دفترچچه یادداشت');
define('_NP_LOCK','قفل کردن دفترچه یادداشت');
// news
define('_STICKY','مقالات مهم');
define('_ARTICLEUP','بالا بردن مقاله');
define('_ARTICLEDOWN','پایین بردن مقاله');
define('_UNSTICK','غیر مهم');
define('_STICK','مهم');
define('_AUTOMATEDARTICLES','فهرست کردن مقالات');
define('_STORYID','شناسه ی مقاله');
define('_CURRENTPOLL','نظرسنجی کنونی');

// admin.php
define('_ADMINISTRATION','مدیریت');
define('_NOADMINYET','هیچ اکانت مدیری وجود ندارد،برای ساخت یک اکانت مدیر تلاش کنید.');
define('_CREATEUSERDATA','آیا کی خواهید یک کاربر منظم با مشخصات مشابه بسازید ؟');
define('_ADMINLOGIN','ورود به منوی مدیریت');
define('_ADMINID','نام کاربری');
define('_EMAIL','ایمیل');
define('_SUBMIT','بفرست');
define('_YOUARELOGGEDOUT','سیستم شما را با موفقیت خارج کرد');
define('_PASSWDNOMATCH','کلمه های عبور متفاوت هستند.لطفاً باز گردید و آن ها را دوباره وارد کنید.');
define('_LOGIN_REMEMBERME','یاد آوری من ؟');
define('_ADMINMENU_LOGOUT','منوی مدیریت خارج شد.');
define('_PASSWORD_MALFORMED','لطفاً در کلمه ی عبور خود حد اقل یک حرف بزرگ،یک عدد و یک حرف کوچک بنویسید.');

// admins.php
define('_AUTHORSADMIN','کنترل مدیریت');
define('_NAME','نام');
define('_REQUIRED','(ضروری)');
define('_MODIFYINFO','اصلاح اطلاعات');
define('_DELAUTHOR','پاک کردن مدیر');
define('_ADDAUTHOR','یک مدير جدید اضافه کنید.');
define('_PERMISSIONS','حد دسترسی و اجازه');
define('_SUPERUSER','کاربر سوپر');
define('_SUPERWARNING','اخطار: اگر کاربر سوپر را انتخاب کنيد کاربر اختيارات کامل مديريتی خواهد داشت');
define('_ADDAUTHOR2','اضافه کردن مدیر');
define('_RETYPEPASSWD','دوباره کلمه ی عبور را وارد کنید.');
define('_FORCHANGES','(تنها برای تغییرات)');
define('_COMPLETEFIELDS','شما باید همه ی فیلدهای اجباری را کامل کنید');
define('_CREATIONERROR','ساخت یک مدیر جدید موفقیت آمیز نبود.');
define('_AUTHORDEL','پاک کردن مدیر');
define('_PUBLISHEDSTORIES','این مدیر مقالات را منتشر کرد.');
define('_SELECTNEWADMIN','لطفاً مدیری را انتخاب کنید که وجو داشته باشد تا مقالات را به او واگذار کنید');
define('_GODNOTDEL','کاربر سوپر پاک نمی شود.');
define('_MAINACCOUNT','*کاربر سوپر*');
define('_USERS','کاربران');

// banners.php
define('_BANNERSADMIN','مدیریت بنرها');
define('_DELETEBANNER','پاک کردن بنر');
define('_SURETODELBANNER','آیا مطمئنید که می خواهید این بنر را پاک کنید ؟');
define('_EDITBANNER','ویرایش بنر');

// blocks.php
define('_BLOCKSADMIN','مدیریت بلاک ها');
define('_CENTER','مرکز');
define('_CENTERUP','مرکز بالا');
define('_CENTERDOWN','مرکز پایین');
define('_BLOCKFILE','(فایل بلاک)');
define('_BLOCKFILE2','فایل');
define('_BLOCKSYSTEM','سیستم');
define('_ADDNEWBLOCK','اضافه کردن یه بلاک');
define('_RSSFILE','آدرس RSS/RDF');
define('_ONLYHEADLINES','(تنها برای سرمقالات)');
define('_REFRESHTIME','زمان بازسازی');
define('_CREATEBLOCK','ساخت بلاک');
define('_EDITBLOCK','ویرایش بلاک');
define('_BLOCK','بلاک');
define('_SAVEBLOCK','ذخیره ی بلاک');
define('_BLOCKACTIVATION','فعال کردن بلاک');
define('_BLOCKPREVIEW','این نمایش داده می شود برای');
define('_WANT2ACTIVATE','آیا می خواهید این بلاک را فعال کنید ؟');
define('_ARESUREDELBLOCK','آيا مطمئن هستيد که ميخواهيد حذف کنيد ');
define('_BLOCKUP','انتقال بلاک به بالا');
define('_BLOCKDOWN','انتقال بلاک به پایین');
define('_BLOCKTOP','انتقال به بالاترین نقطه');
define('_BLOCKBOTTOM','انتقال به پایین ترین نقطه');
define('_TITLE','موضوع');
define('_POSITION','موقعیت');
define('_WEIGHT','وزن');
define('_STATUS','وضعیت');
define('_LEFTBLOCK','بلاک راست');
define('_LEFT','راست');
define('_RIGHTBLOCK','بلاک چپ');
define('_RIGHT','چپ');
define('_TYPE','نوع');
define('_CUSTOM','دلخواه');
define('_FILENAME','نام فایل');
define('_FILEINCLUDE','اگر این انتخاب را به کار ببرید،زمان بازسازی نادیده گرفته خواهد شد.');

// comments.php
define('_REMOVECOMMENTS','پاک کردن نظر');
define('_SURETODELCOMMENTS','آیا مطمئنید که می خواهید این نظر و همه ی نظرهای مربوطه را پاک کنید ؟');

// database.php
define('_SAVEDATABASE','پشتیبان گیری');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','وضعیت کنونی');
define('_ACTIVATEPAGE','فعال کردن صفحه ؟');

// history.php
define('_EPHEMADMIN','امروز در تارخچه بماند');
define('_ADDEPHEM','اضافه کردن یک مطلب');
define('_EPHEMDESC','توضیح مطلب');
define('_EPHEMMAINT','پیش فرض مطلب');
define('_EPHEMEDIT','ویرایش مطلب');
define('_EPHEMDELETE','پاک کردن مطلب');

// headlines.php
define('_RSSFAIL','There seems to be a problem with the URL for this RSS feed');
define('_RSSTRYAGAIN','Please check the URL and RSS filename and try again');
define('_RSSCONTENT','(RSS/RDF Content)');
define('_IFRSSWARNING','If you supply a URL, the content you supply will be ignored');
define('_SETUPHEADLINES','Select \'Custom\' and supply the URL to the RSS feed, or just select a site from the dropdown to fetch news headlines');
define('_HEADLINESADMIN','مدیریت سرمقاله ها');
define('_ADDHEADLINE','اضافه کردن سرمقاله');
define('_EDITHEADLINE','ویرایش سرمقاله');
define('_SURE2DELHEADLINE','آیا از پاک کردن این سرمقاله مطمئنید ؟');

// messages.php
define('_MESSAGESADMIN','مدیریت پیام ها');
define('_MESSAGETITLE','موضوع');
define('_MESSAGECONTENT','محتوی');
define('_ALLMESSAGES','Overview messages');
define('_EDITMSG','ویرایش پیام');
define('_ADDMSG','اضافه کردن پیام');
define('_REMOVEMSG','آیا مطمئنید که می خواهید این پیام را پاک کنید ؟');
define('_CHANGEDATE','تغییر تاریخ شروع به امروز');
define('_IFYOUACTIVE','اگر شما هم اکنون این پیام را فعال کنید تاریخ شروع به امروز تغییر خواهد کرد.');

// modules.php
define('_MODULESADMIN','مدیریت ماژول ها');
define('_HOMECONFIG','تنظیمات صفحه ی اول');
define('_MODULESADDONS','ماژول ها و اضافه ها');
define('_INHOME','تغییر به ماژول صفحه ی اول');
define('_MODULEHOMENOTE','<strong>.: اطلاعات ممکن :.</strong><br />ماژول های جدید وعرفی شده به فولدر /modules خودکار به سیستم معرفی می شوند<br />پاک کردن یک ماژول از این شاخه به پاک شدن آن از سیستم منتهی نی شود.<br /><br />ماژولی که پررنگ نوشته شده ماژول صفحه ی اصلی است<br />این ماژول نمی تواند غیر فعال شود یا برای کاربران خاصی قابل نمایش باشد.');
define('_PUTINHOME','تغییر به ماژول صفحه ی اول');
define('_SURETOCHANGEMOD','آیا شما مطمئنید که می خواهید ماژول صفحه ی اصلی را تغییر بدهید از');
define('_NOTINMENU','[ <strong>&middot;</strong> ] علامت گذاری یک ماژول برای مخفی بودن در بلاک ماژول ها');
define('_SHOWINMENU','نمایش در منو ؟');
define('_CUSTOMTITLE','عنوان دلخواه');
define('_MODULEEDIT','ویرایش ماژول ها');
define('_VERSION','نسخه');
define('_UPGRADE','ارتقا به %s');
define('_DBSIZE','حجم دیتا بیس');
define('_CVS_EXPLAIN','It seems this module has a CVS directory. CVS means Concurrent Versioning System.<br />Thru CVS you can recieve the latest builds of files very easily.<br /><b>BUT</b> the latest version of a file could have bugs since it is not an official release.<br />If you are familiar with PHP you can do an update of the files by clicking the link below.<br />Don\'t forget to make an backup first !!!');
define('_CVS_UPDATE','به روز کردن فایل CVS');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','از');
define('_STAFF','مدیر');
define('_NL_RECIPS','گیرنده');
define('_SUBSCRIBEDUSERS','اعضا مشترک');
define('_NL_ALLUSERS','همه ی اعضا');
define('_NL_ADMINS','مدیران');
define('_NL_REGARDS','بهترین توجه ها');
define('_DISCARD','ول کردن');
define('_REVIEWTEXT','Please look over your message and check for typos');
define('_MANYUSERSNOTE','به علت زياد بودن کاربرانی که خبر نامه را دريافت ميکنند ممکن است چند دقيقه فرستادن آن طول بکشد، لطفاً صبور باشيد.!');
define('_NL_NOUSERS','گروهی را که شما انتخاب کرده ايد که خبرنامه را دريافت کنند عضوی ندارد، لطفاً بازگرديد و گروه ديگری را انتخاب کنيد. ');
define('_NUSERWILLRECEIVE','کاربرا خبرنامه را دریافت خواهند کرد');
define('_NLUNSUBSCRIBE',"We sent you this message because you have selected to receive newsletters from our site\n\nYou can choose to unsubscribe from our mailings at any time by following <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">this</a> link\n\nIf you would like further assistance, please send an email to <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">our administrator</a>");
define('_NEWSLETTERSENT','خبرنامه فرستاده شد');

// referers.php
define('_WHOLINKS','چه کسی سایت ما را نگاه می کند ؟');
define('_DELETEREFERERS','پاک کردن ریفرها');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Footer');
define('_DEBUG', 'Debug');
define('_SITECONFIG','تنظیمات وب سایت');
define('_GENSITEINFO','اطلاعات همگانی سایت');
define('_SITENAME','نام سایت');
define('_SITEURL','آدرس سایت');
define('_SITELOGO','نام فایل لوگوی سایت(در /images درج شود(');
define('_SITESLOGAN','شعار سایت');
define('_STARTDATE','تاريخ تأسيس سايت');
define('_ADMINEMAIL','ایمیل مدیر');
define('_ITEMSTOP','تعداد آیتم ها برای رتبه بندی در بهترین ها');
define('_STORIESHOME','تعداد مقالات برای نمایش در صفحه ی اصلی اخبار');
define('_OLDSTORIES','تعداد مقالات برای نمایش در بلاک مقالات قدیمی');
define('_ALLOWANONPOST','اجازه به مهمان ها برای پست خبر');
define('_DEFAULTTHEME','قالب پیش فرض سایت');
define('_SHOWSEC','نشان دادن کد امنیتی');
define('_TOOLTIPS','Show tooltips on designated fields');
define('_UM_TOGGLE','فعال کردن نمايشگر بروز رسانی');
define('_UM_EXPLAIN','This will retrieve two pieces of information from our website, dragonflycms.org: the current build of Dragonfly, and if there are any important messages that pertain to your version of Dragonfly. The only data sent to our site is your Dragonfly version number. We do <strong>not</strong> log these requests to our server.');
// maintenance
define('_MAINTENANCE','بستن موقت سایت');
define('_MESSAGE','پیام');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','سیستم زبان');
define('_SELLANGUAGE','زبان پیش فرض سایت');
define('_LOCALEFORMAT','فرمت زمان محلی');
define('_ACTMULTILINGUAL','فعال کردن سيستم چند زبانی سايت');
define('_ACTUSEFLAGS','به کار بردن پرچم به جای منوی کشویی برای تغییر زبان');
// banners
define('_BANNERSOPT','سیستم بنر');
define('_ACTBANNERS','فعال کردن سیستم بنر ؟');
// footer
define('_FOOTERMSG','پاورقی(اختیاری)');
define('_FOOTERLINE1','پاورقی،خط اول');
define('_FOOTERLINE2','پاورقی،خط دوم');
define('_FOOTERLINE3','پاورقی،خط سوم');
// backend
define('_BACKENDCONF','تغذيه RSS');
define('_BACKENDTITLE','تغذيه عنوان');
define('_BACKENDLANG','تغذيه زبان');
// mail stories
define('_MAIL2ADMIN','مطالب ارسالی');
define('_NOTIFYSUBMISSION','خبر کردن مدير  ابرای اخبار در حال انتظار (مطالب ارسالی) ؟');
define('_EMAIL2SENDMSG','آدرس ايميل گيرنده');
define('_EMAILSUBJECT','عنوان ايميل');
define('_EMAILMSG','متن و نوشته ايميل');
define('_EMAILFROM','آدرس ايميل فرستنده');
// comments
define('_COMMENTSOPT','سيستم نظر دهی');
define('_COMMENTSLIMIT','Truncate comments after __ characters');
define('_COMMENTSMOD','اجازه مديريت نظر ها؟');
define('_MODADMIN','بله ,توسط مديرها');
define('_MODUSERS','بله، توسط کاربر ها');
define('_NOMOD','، از مديريت استفاده نکن');
// adminmenu
define('_GRAPHICOPT','طرز نمايش منو مديريت');
define('_BOTH','هر دو');
define('_GRAPHICAL','گرافيکی');
define('_SIDEBLOCK','بلوک کنار');
// miscellaneous
define('_MISCOPT','گوناگون');
define('_ACTIVATEHTTPREF','Activate logging of HTTP referers?');
define('_MAXREF','يک عدد محدودی را برای ارجاع دهنده ها معين کنيدs');
define('_COMMENTSPOLLS','فعال کردن سيستم نظر دهی در قسمت نظرسنجی؟');
define('_COMMENTSARTICLES','فعال کردن سيستم نظر دهی در قسمت اخبار؟');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','سيستم سانسور');
define('_CENSORMODE','Mode for matching');
define('_NOFILTERING','بدون فيلتر کردن');
define('_EXACTMATCH','Exact match');
define('_MATCHBEG','Match at beginning of text');
define('_MATCHANY','Match anywhere in the text');
define('_CENSORREPLACE','Replacement for restricted word');
// email
define('_EMAILOPTIONS','سيستم ايميل');
define('_ALLOW_HTML_EMAIL','اجازه استفاده از html در ايميل ؟');
define('_USE_SMTP','Use SMTP server as opposed to PHP\'s mailer');
define('_SMTP_HOST','SMTP host address (smtp.example.com)');
define('_USE_SMTP_AUTH','آيا server اجازه smtp را ميخواهد؟');
define('_SMTP_USER_NAME','نام کاربری SMTP');
define('_SMTP_USER_PASS','پسورد SMTP');

// cpg_adminmenu.php
define('_ADMINMENU','منوی مدیریت');
define('_ADMINLOGOUT','خروج');
define('_AMENU0','System');
define('_AMENU1','عمومی');
define('_AMENU2','اعضا');
define('_AMENU3','پیام ها');
define('_AMENU4','انجمن ها');
define('_AMENU5','اطلاعات مفید');
define('_AMENU6','اتصالات');
define('_AMENU7','تجارت');
define('_AMENU8','Multimedia');
define('_AMENU9','ماژول ها');
define('_BMENU1','Help');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','تنظیمات اصلی');
define('_DATABASE','دیتا بیس');
define('_BLOCKS','بلاک ها');
define('_MODULES','ماژول ها');
define('_EDITADMINS','مدیران');
define('_MESSAGES','پیام ها');
define('_BANNERS','بنرها');
define('_HTTPREFERERS','ریفرهای HTTP');
define('_EDITUSERS','اعضا');
define('_USERSCONFIG','پیکربندی اعضا');
define('_NEWSLETTER','خبرنامه');
define('_SUBMISSIONS','مطالب ارسالی');
define('_ADDSTORY','اضافه کردن خبر');
define('_TOPICS','موضوعات');
define('_ADMPOLLS','نظرسنجی ها');
define('_EPHEMERIDS','امروز در تاریخچه');
define('_REVIEWS','بازبینی ها');
define('_ENCYCLOPEDIA','فرهنگ نامه');
define('_SURVEYS','نظرسنجی ها');
define('_SECTIONS','مقالات ویژه');
define('_ARTICLES','اخبار');
define('_FAQ','سئوالات همگانی');
define('_DOWNLOAD','داون لود');
define('_WEBLINKS','لینک ها');
define('_CONTENT','مقالات');
define('_SYSINFO','System Info');
define('_REPORTABUG','گزارش یک حفره');
//coppermine admin
define('_W_INSTALL','کدام نصب ؟');
define('_W_PAGE','کدام صفحه ؟');
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
define('_ERROR','خطا');
define('_SEC_ERROR','خطاء امنیتی');
define('_ERROR_NOT_SET','%s یکی نبود');
define('_ERROR_NO_POST','Posting from another host is disallowed...');
define('_ERROR_NO_GET','GET requests are not allowed for this function...');
define('_ERROR_BAD_CHAR','The characters that you tried to include in your %s request are forbidden...');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','شما برای دسترسی به این صفحه با یک آدرس بد تلاش می کنید...');
define('_ERROR_NONE_TO_DISPLAY','هیچ % برای نمایش نیست');
define('_ERROR_DELETE_CONF','آیا مطمئنید که می خواهید پاک کنید % را ؟');
define('_ERROR_NO_EXIST','%s وجود ندارد');
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
