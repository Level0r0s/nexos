<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/ukrainian/main.php,v $
  $Revision: 9.30 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:58 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','uk');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%d/%m/%Y');
define('_DATESTRING2','%d/%m/%Y');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Далі');
define('_PREVIOUSPAGE','Попередня сторінка');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Пошук');
define('_LOGIN','Логін');
define('_WRITES','написав');
define('_POSTEDON','Розміщено');
define('_NICKNAME','Логін');
define('_PASSWORD','Пароль');
define('_WELCOMETO','вітаємо на сайті');
define('_EDIT','Редагувати');
define('_DELETE','Видалити');
define('_POSTEDBY','Додано: ');
define('_READS','переглядів');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Назад</a>' : '<a href="javascript:history.go(-1)">Назад</a>').' ]');
define('_COMMENTS','Коментарі');
define('_PASTARTICLES','Остання стаття');
define('_OLDERARTICLES','Старі статті');
define('_BY','від');
define('_ON','');
define('_LOGOUT','Вийти');
define('_WAITINGCONT','Очікують перевірки:');
define('_WREVIEWS','Рецензії');
define('_WLINKS','Web посилання');
define('_ONEDAY','Сьогодні, як завжди...');
define('_ASREGISTERED','Не зареєструвались? Для того, щоб це зробити, натисніть <a href="'.getlink('Your_Account&amp;file=register').'">тут</a>. Коли Ви зареєструєтесь, то отримаєте повний доступ до всіх розділів сайту.');
define('_MENUFOR','Меню для');
define('_NOBIGSTORY','Сьогодні нових статей ще не було.');
define('_BIGSTORY','Сьогодні найпопулярніша стаття:');
define('_SURVEY','Опитування');
define('_POLLS','Інші опитування');
define('_PCOMMENTS','Коментарів:');
define('_RESULTS','Результати');
define('_HREADMORE','Детальніше...');
define('_CURRENTLY','В даний момент на сайті');
define('_GUESTS','гостей і');
define('_MEMBERS','користувачів.');
define('_YOUARELOGGED','Ви увійшли як');
define('_YOUHAVE','У вас є');
define('_PRIVATEMSG','приватних повідомлень.');
define('_YOUAREANON','Ви Анонімний користувач. Для того, щоб зареєструватися, натисніть <a href="'.getlink('Your_Account&amp;file=register').'">тут</a>.');
define('_NOTE','Примітка:');
define('_ADMIN','Адміністратор:');
define('_WERECEIVED','Переглянуто');
define('_PAGESVIEWS','сторінок сайту на');
define('_TOPIC','Тема');
define('_UDOWNLOADS','Файли');
define('_VOTE','Голосувати');
define('_VOTES','Голосів');
define('_MVIEWADMIN','Переглядають: Тільки адміни');
define('_MVIEWUSERS','Переглядають: Тільки зареєстровані користувачі');
define('_MVIEWANON','Переглядають: тільки анонімні користувачі');
define('_MVIEWALL','Переглядають: всі відвідувачі');
define('_EXPIRELESSHOUR','Завершення терміну: менш ніж за 1 годину');
define('_EXPIREIN','Термін дії завершується через');
define('_UNLIMITED','Необмежено');
define('_HOURS','Години');
define('_RSSPROBLEM','Проблеми із заголовками');
define('_SELECTLANGUAGE','Оберіть мову');
define('_SELECTGUILANG','Оберіть мову інтерфейсу:');
define('_NONE','Немає');
define('_BLOCKPROBLEM','<center>Цей блок має проблеми</center>');
define('_BLOCKPROBLEM2','<center>Цей блок порожній</center>');
define('_MODULENOTACTIVE','Вибачте, але цей модуль неактивний!');
define('_NOACTIVEMODULES','Неактивні модулі');
define('_MODULENOEXIST','We\'re sorry, but the requested file, %s, does not appear to exist');
define('_FORADMINTESTS','(тільки для адміна)');
define('_BBFORUMS','Форуми');
define('_ACCESSDENIED','Доступ заборонено');
define('_RESTRICTEDAREA','Вибачте, але Ви не маєте прав доступу у цей розділ.');
define('_MODULEUSERS','Вибачте, але цей розділ нашого сайту доступний тільки для <i>зареєстрованих користувачів</i><br /><br />Ви можете вільно зареєструватися <a href="'.getlink('Your_Account&amp;file=register').'">тут</a>, після чого матимете<br />доступ в цей розділ. Дякуємо.<br /><br />');
define('_MODULEUSERS2','You can register for free by following <a href="'.getlink('Your_Account&amp;file=register').'">this</a> link, thus granting you permission to access this area of our site<br /><br />Thank you for your understanding');
define('_MODULESADMINS','Вибачте, але цей розділ нашого сайту доступний тільки для <i>Адміністраторів</i><br /><br />');
define('_MODULESGROUPS','group access required');
define('_HOME','Головна');
define('_HOMEPROBLEM','Виникла проблема: у Вас немає домашньої сторінки!!');
define('_ADDAHOME','Додати модуль на головну сторінку');
define('_HOMEPROBLEMUSER','Виникла проблема на Вашій домашній сторінці. Перевірте її пізніше.');
define('_MORENEWS','Більше в секції новин');
define('_ALLCATEGORIES','Всі категорії');
define('_SPAMGUARDPROTECTED','SpamGuard has blocked this email from being sent');
define('_M_CHARS','Maximum: %s characters');

define('_SYS_MESSAGE','System Message');
define('_SYS_MESSAGES','System Messages');
define('_SYS_MAINTENANCE','You are running under maintenance mode');
define('_SYS_DEMO','You are running under administration demo mode<br />You cannot make any changes to the database<br /><a href="'.adminlink('logout').'">Log me out!</a>');

define('_DATE','Дата');
define('_HOUR','Час');
define('_UMONTH','Місяць');
define('_YEAR','Рік');
define('_JANUARY','Січня');
define('_FEBRUARY','Лютого');
define('_MARCH','Березня');
define('_APRIL','Квітня');
define('_MAY','Травня');
define('_JUNE','Червня');
define('_JULY','Липня');
define('_AUGUST','Серпня');
define('_SEPTEMBER','Вересня');
define('_OCTOBER','Жовтня');
define('_NOVEMBER','Листопада');
define('_DECEMBER','Грудня');

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

define('_BWEL','Ласкаво просимо');
define('_BPM','Приватні повідомлення');
define('_BUNREAD','Непрочитані');
define('_BREAD','Прочитані');
define('_BMEMP','Зареєструвались');
define('_BLATEST','Останній');
define('_BTD','Сьогодні');
define('_BYD','Вчора');
define('_BOVER','Всього');
define('_BVISIT','Відвідувачів у онлайні');
define('_BVIS','Гостей');
define('_BMEM','Учасників');
define('_BTT','Всього');
define('_BON','Зараз у онлайні');
define('_BREG','Реєстрація');
define('_BROADCAST','Повідомлення для всіх');
define('_BROADCASTFROM','Публічне повідомлення від');
define('_TURNOFFMSG','Вимкнення публічних повідомлень');
define('_JOURNAL','Журнал');
define('_READMYJOURNAL','Прочитати мій журнал');
define('_ADD','Додати');
define('_YES','Так');
define('_NO','Ні');
define('_INVISIBLEMODULES','Невидимі модулі');
define('_ACTIVEBUTNOTSEE','(Активні але невидимі посилання)');
define('_BOTS','Bots');

define('_UM','Dragonfly Update Service');
define('_UM_F','Failed to contact the update service. Please try again later.');
define('_UM_G','You are using the latest version of Dragonfly');
define('_UM_R','Please <a href="%2$s" target="_blank">upgrade</a> to Dragonfly %1$s');

define('_TEAM','Команда');
define('_LINKAPPROVEDMSG','Congratulations! The web link you submitted has been approved. Please link back to us and send an email with the url where you have done so.');
define('_MODREQLINKS','Змінені посилання');
define('_BROKENLINKS','Недоступні посилання');
define('_MODREQDOWN','Змінені файли');
define('_BROKENDOWN','Недоступні файли');
define('_PAGEGENERATION','Відкриття сторінки:');
define('_SECONDS','секунди');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','This page generated in %1$s seconds with %2$s DB Queries in %3$s seconds');
define('_YOUHAVEONEMSG','Для Вас є нове приватне повідомлення');
define('_NEWPMSG','Нові приватні повідомлення');
define('_CONTRIBUTEDBY','Внесене');
define('_CHAT','Chat');
define('_REGISTERED','Registered');
define('_CHATGUESTS','Guests');
define('_USERSTALKINGNOW','Users Talking Now');
define('_ENTERTOCHAT','Enter To Chat');
define('_CHATROOMS','Available Rooms');
define('_ALLTOPICS','All Topics');
define('_ASSOTOPIC','Associated Topics');
define('_HELLO','Hello');
define('_ALL','Всі');
define('_URL','URL');
define('_SUBJECT','Тема');
define('_PREVIEW','Попередній перегляд');
define('_SEND','Відправити');
define('_ANONYMOUS','Anonymous');
define('_BREADCRUMB', 'Breadcrumb Delimiter, separates words in pagetitles');
define('_BC_DELIM',''.isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&rsaquo;');//''. is for cpglang
define('_RESET','Reset');
define('_AT','at');
define('_LASTMSGS','Last %s Forum Messages');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','Сторінка для друку');

define('_CREDITS_TITLE','Credits');
define('_CREDITS_PRODUCT','Product');
define('_CREDITS_DESC','Description');
define('_CREDITS_AUTHORS','Author(s)');

define('_PP_TITLE','Privacy Policy');
define('_PP_MODIFY','Modify this message');

define('_SENDEREMAIL','Emaіl відправника');
define('_SENDERNAME','Ім\'я відправника');
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
define('_SAVECHANGES','Зберегти зміни');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Language');
define('_FUNCTIONS','Функції');
define('_SHOW','Показати');
define('_TO','до');
define('_DAY','День');
define('_LAST','Останні');
define('_ACTIVE','Активний');
define('_DEACTIVATE','Зробити неактивним');
define('_INACTIVE','Неактивний');
define('_ACTIVATE','Зробити активним');
define('_ACTIVATE2','Активний?');
define('_VIEW','Visible to');
define('_VIEWPRIV','Хто може це переглядати?');
define('_MVADMIN','Тільки для адмінів');
define('_MVUSERS','тільки зареєстровані користувачі');
define('_MVANON',' тільки анонімні відвідувачі');
define('_MVALL','Всі відвідувачі');
define('_IMAGE','Малюнок');
define('_GO','Вперед!');
define('_OPTION','Опція');
define('_CATEGORY','Категорія');
define('_SUBCATEGORY','Sub-Category');
define('_ID','ID');
define('_EXPIRATION','Термін');
define('_DAYS','днів');
define('_WARNING','Попередження');
define('_POLLTITLE','Назва голосування');
define('_POLLEACHFIELD','Кожний варіант введіть в окреме поле');
define('_ADDCATEGORY','Створити нову категорію');
define('_PAGEBREAK','Если Вы хотите некоторые страницы, Вы можете написать <b>&lt;!--pagebreak--&gt;</b> там, где хотите вырезать.');
define('_SIGNATURE','Підпис');
define('_DESCRIPTION','Опис');
define('_EDITCATEGORY','Редагувати категорію');
define('_IN','в');
define('_DESCRIPTION255','Опис: (максимум 255 символів)');
define('_MODCATEGORY','Змінити категорію');
define('_SUBMITTER','Автор');
define('_VISIT','Візит');
define('_EXTENDEDTEXT','Розширений текст');
define('_CHECKCATEGORIES','Перевірити всі ресурси');
define('_INCLUDESUBCATEGORIES','(включаючи підкатегорії)');
define('_CHECKSUBCATEGORIES','перевірити підкатегорії');
define('_VALIDATELINKS','Підтвердити ресурс');
define('_FAILED','Невдача!');
define('_BEPATIENT','(будьте терплячі)');
define('_VALIDATINGCAT','Підтвердження категорії (і всіх підкатегорій)');
define('_VALIDATINGSUBCAT','Підтвердження підкатегорії');
define('_OK','Ok!');
define('_CHECK','Check');
define('_IGNORE','Ігнорувати');
define('_HITS','Хітів');
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
define('_WHOSONLINE','Хто в Online');
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
define('_AUTOMATEDARTICLES','Програмування статей');
define('_STORYID','ID Статті');
define('_CURRENTPOLL','Поточне голосування');

// admin.php
define('_ADMINISTRATION','Administration');
define('_NOADMINYET','There are no administrator accounts yet, proceed to create the super user...');
define('_CREATEUSERDATA','Would you like to create a regular user with the same data?');
define('_ADMINLOGIN','Вхід в систему адміністрування');
define('_ADMINID','ID адміна');
define('_EMAIL','Email');
define('_SUBMIT','Надіслати');
define('_YOUARELOGGEDOUT','Тепер ви вийшли!');
define('_PASSWDNOMATCH','Новий пароль не співпадає, аерніться назад і введіть заново');
define('_LOGIN_REMEMBERME','Remember me?');
define('_ADMINMENU_LOGOUT','Administration Menu Logout');
define('_PASSWORD_MALFORMED','Please include at least one number, one capital letter and one lowercase letter in your password');

// admins.php
define('_AUTHORSADMIN','Адміністратори');
define('_NAME','Ім\'я');
define('_REQUIRED','(обов\'язково)');
define('_MODIFYINFO','Змінити інформацію');
define('_DELAUTHOR','Витерти адміна');
define('_ADDAUTHOR','Створити нового адміна');
define('_PERMISSIONS','Права');
define('_SUPERUSER','Суперадмін');
define('_SUPERWARNING','Попередження: Після перевірки суперадмін отримає повний доступ!');
define('_ADDAUTHOR2','Додати адміна');
define('_RETYPEPASSWD','Повторіть пароль');
define('_FORCHANGES','(Тільки для зміни)');
define('_COMPLETEFIELDS','Ви повинні заповнити всі обов\'язкові поля');
define('_CREATIONERROR','ПОМИЛКА при створенні адміністратора');
define('_AUTHORDEL','Витирання адміна');
define('_PUBLISHEDSTORIES','Цей адміністратор опублікував повідомлення');
define('_SELECTNEWADMIN','Виберіть нового адміна, наступника попереднього');
define('_GODNOTDEL','*(Рахунок GOD не можна витерти)');
define('_MAINACCOUNT','Адмін God*');
define('_USERS','Користувачі');

// banners.php
define('_BANNERSADMIN','Адміністрування банерів');
define('_DELETEBANNER','Delete Banner');
define('_SURETODELBANNER','Are you sure you want to delete this banner?');
define('_EDITBANNER','Edit Banner');

// blocks.php
define('_BLOCKSADMIN','Управління блоками');
define('_CENTER','Center');
define('_CENTERUP','Center Up');
define('_CENTERDOWN','Center Down');
define('_BLOCKFILE','(Block File)');
define('_BLOCKFILE2','FILE');
define('_BLOCKSYSTEM','SYSTEM');
define('_ADDNEWBLOCK','Додати новий блок');
define('_RSSFILE','RSS/RDF File URL');
define('_ONLYHEADLINES','(Тільки для заголовків)');
define('_REFRESHTIME','Встановити час');
define('_CREATEBLOCK','Створити блок');
define('_EDITBLOCK','Редагувати блок');
define('_BLOCK','Блок');
define('_SAVEBLOCK','Зберегти Блок');
define('_BLOCKACTIVATION','Акивізувати блок');
define('_BLOCKPREVIEW','Попередній перегляд блоку');
define('_WANT2ACTIVATE','Хочете зробити блок активним?');
define('_ARESUREDELBLOCK','Ви дійсно хочете витерти цей блок?');
define('_BLOCKUP','Блок вверх');
define('_BLOCKDOWN','Блок вниз');
define('_BLOCKTOP','Move block to top');
define('_BLOCKBOTTOM','Move block to bottom');
define('_TITLE','Назва');
define('_POSITION','Позиція');
define('_WEIGHT','Положення');
define('_STATUS','Статус');
define('_LEFTBLOCK','Лівий блок');
define('_LEFT','Лівий');
define('_RIGHTBLOCK','Правий блок');
define('_RIGHT','Правий');
define('_TYPE','Тип');
define('_CUSTOM','Вибрати');
define('_FILENAME','Filename');
define('_FILEINCLUDE','If you use this option, ignore the Content and Refresh time fields');

// comments.php
define('_REMOVECOMMENTS','Витерти коментарі');
define('_SURETODELCOMMENTS','Ви дійсно хочете витерти цей коментар і всі відповіді на нього?');

// database.php
define('_SAVEDATABASE','Backup');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Current Status');
define('_ACTIVATEPAGE','Activate This Page?');

// history.php
define('_EPHEMADMIN','Адміністрування висловів');
define('_ADDEPHEM','Додати вислів');
define('_EPHEMDESC','Опис');
define('_EPHEMMAINT','Операції (Редагувати/Витерти):');
define('_EPHEMEDIT','Редагувати вислови');
define('_EPHEMDELETE','Delete Entry');

// headlines.php
define('_RSSFAIL','Виникли проблеми с  RSS-файлом');
define('_RSSTRYAGAIN','Будь-ласка, перевірте URL і ім\'я RSS і спробуйте ще раз.');
define('_RSSCONTENT','(Зміст RSS/RDF)');
define('_IFRSSWARNING','Якщо ви заповните URL, то текст блоку не буде показуватись!');
define('_SETUPHEADLINES','(Виберіть "Custom" і вкажіть URL або просто виберіть сайт з списку)');
define('_HEADLINESADMIN','Адміністрування заголовків');
define('_ADDHEADLINE','Додаити заголовок');
define('_EDITHEADLINE','Редагувати заголовки');
define('_SURE2DELHEADLINE','Попередження: ви дійсно хочете витерти цей заголовок?');

// messages.php
define('_MESSAGESADMIN','Адміністрування повідомлень');
define('_MESSAGETITLE','Назва');
define('_MESSAGECONTENT','Зміст');
define('_ALLMESSAGES','Overview messages');
define('_EDITMSG','Edit message');
define('_ADDMSG','Add message');
define('_REMOVEMSG','Are you sure that you want to delete this message?');
define('_CHANGEDATE','Змінити початкову дату на сьогодні?');
define('_IFYOUACTIVE','(якщо ви зараз активізуєте це повідомлення, о початковою датою стане сьогоднішнє число)');

// modules.php
define('_MODULESADMIN','Modules Administration');
define('_HOMECONFIG','Конфігурація головної сторінки');
define('_MODULESADDONS','Modules and Addons');
define('_INHOME','Set as Home Module');
define('_MODULEHOMENOTE','New modules added to the /modules/ folder will automatically be added to the system<br />Removing a module\'s folder from this directory will automatically remove the module from the system<br /><br />The module with a bold title denotes the module set as my homepage<br />This module cannot be deactivated or restricted to certain users');
define('_PUTINHOME','Set as Home');
define('_SURETOCHANGEMOD','Are you sure you want to change your Homepage from');
define('_NOTINMENU','[ <strong>&middot;</strong> ] denotes a module hidden from view in the Modules block');
define('_SHOWINMENU','Show in menu?');
define('_CUSTOMTITLE','Custom Title');
define('_MODULEEDIT','Modules Edit');
define('_VERSION','Версія');
define('_UPGRADE','Upgrade to %s');
define('_DBSIZE','DB size');
define('_CVS_EXPLAIN','This module appears to be able to receive updates through our CVS (Concurrent Versioning System). With CVS, you are able to receive the latest updates of a file very easily, but the latest version of a file may contain bugs as it is likely not part of our stable release.<br /><br />If you are familiar with PHP, you can update this module with the latest CVS files by using the link below. <strong>Backup all files first!</strong>');
define('_CVS_UPDATE','Update CVS files');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','Від');
define('_STAFF','Персонал');
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
define('_WHOLINKS','З яких сайтів до нас прийшли');
define('_DELETEREFERERS','Очистити Referers');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Footer');
define('_DEBUG', 'Debug');
define('_SITECONFIG','Конфігурація сайту');
define('_GENSITEINFO','Головна інформація про сайт');
define('_SITENAME','Назва сайту');
define('_SITEURL','URL сайту');
define('_SITELOGO','Логотип сайту');
define('_SITESLOGAN','Девіз сайту');
define('_STARTDATE','Дата відкриття сайту');
define('_ADMINEMAIL','Email адміна');
define('_ITEMSTOP','Кількість позицій в топі (найкраще)');
define('_STORIESHOME','Кількість статей на головній сторінці');
define('_OLDSTORIES','Статей в архіві');
define('_ALLOWANONPOST','Дозволити незареєстрованим присилати повідомлення?');
define('_DEFAULTTHEME','Тема сайту');
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
define('_SELLANGUAGE','Мова');
define('_LOCALEFORMAT','Формат часу');
define('_ACTMULTILINGUAL','Activate site-wide multi-lingual features');
define('_ACTUSEFLAGS','Use flags instead of a drop-down box');
// banners
define('_BANNERSOPT','Банери');
define('_ACTBANNERS','Показувати банери?');
// footer
define('_FOOTERMSG','Нижній колонтитул');
define('_FOOTERLINE1','Блок 1');
define('_FOOTERLINE2','Блок 2');
define('_FOOTERLINE3','Блок 3');
// backend
define('_BACKENDCONF','Вихідний буфер');
define('_BACKENDTITLE','Назва вихідного буферу');
define('_BACKENDLANG','Мова');
// mail stories
define('_MAIL2ADMIN','Відправляти нові статті адміну');
define('_NOTIFYSUBMISSION','Повідомляти про нові надходження по email?');
define('_EMAIL2SENDMSG',' Email, для відправки повідомлень');
define('_EMAILSUBJECT','Тема Email');
define('_EMAILMSG','Повідомлення Email');
define('_EMAILFROM','Email посланий від');
// comments
define('_COMMENTSOPT','Параметри коментарів');
define('_COMMENTSLIMIT','Макс. розмір коментарів');
define('_COMMENTSMOD','Модерування коментарів');
define('_MODADMIN','Адміном');
define('_MODUSERS','Користувачами');
define('_NOMOD','Без модерування');
// adminmenu
define('_GRAPHICOPT','Параметри графіки');
define('_BOTH','Both');
define('_GRAPHICAL','Graphical');
define('_SIDEBLOCK','Side-block');
// miscellaneous
define('_MISCOPT','Різні параметри');
define('_ACTIVATEHTTPREF','Записувати вхідні ссилки (HTTP Referers)?');
define('_MAXREF','Максимальна кількість Refferers?');
define('_COMMENTSPOLLS','Дозволити коментарі до голосувань?');
define('_COMMENTSARTICLES','Activate Comments in Articles?');
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
define('_ADMINMENU','Меню адміністрування');
define('_ADMINLOGOUT','Вихід');
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
define('_PREFERENCES','Параметри');
define('_DATABASE','Database');
define('_BLOCKS','Блоки');
define('_MODULES','Modules');
define('_EDITADMINS','Адміни');
define('_MESSAGES','Повідомлення');
define('_BANNERS','Banners');
define('_HTTPREFERERS','Звернення');
define('_EDITUSERS','Користувачі');
define('_USERSCONFIG','Members Config');
define('_NEWSLETTER','Newsletter');
define('_SUBMISSIONS','Нові статті');
define('_ADDSTORY','Опублікувати статтю');
define('_TOPICS','Topics');
define('_ADMPOLLS','Опитування');
define('_EPHEMERIDS','Дати');
define('_REVIEWS','Огляди');
define('_ENCYCLOPEDIA','Encyclopedia');
define('_SURVEYS','Голосування');
define('_SECTIONS','Розділи');
define('_ARTICLES','Нотатки');
define('_FAQ','FAQ');
define('_DOWNLOAD','Файли (Download)');
define('_WEBLINKS','Ресурси');
define('_CONTENT','Зміст');
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
