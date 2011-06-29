<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/russian/main.php,v $
  $Revision: 9.38 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:54 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','ru');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%d/%m/%Y');
define('_DATESTRING2','%d/%m/%Y');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Следующая страница');
define('_PREVIOUSPAGE','Предыдущая страница');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Искать');
define('_LOGIN','Логин');
define('_WRITES','написал');
define('_POSTEDON','Помещено');
define('_NICKNAME','Ник');
define('_PASSWORD','Пароль');
define('_WELCOMETO','Добро Пожаловать');
define('_EDIT','Редактировать');
define('_DELETE','Удалить');
define('_POSTEDBY','Помещен: ');
define('_READS','прочитано');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Назад</a>' : '<a href="javascript:history.go(-1)">Назад</a>').' ]');
define('_COMMENTS','отзывов');
define('_PASTARTICLES','Последняя статья');
define('_OLDERARTICLES','Старая статья');
define('_BY','от');
define('_ON','на');
define('_LOGOUT','Выйти');
define('_WAITINGCONT','Ожидающие');
define('_WREVIEWS','Ожидающие ответа');
define('_WLINKS','Линки');
define('_ONEDAY','Каждый день, как сегодня...');
define('_ASREGISTERED','Не зарегистрировались? Вы можете зделать это нажав <a href="'.getlink('Your_Account').'">Здесь</a>. Когда вы зарегистрируетесь, вы получите полный доступ к управлению сайтом, сможите изменять его внешний вид по вашему желанию и т.д.');
define('_MENUFOR','Меню для');
define('_NOBIGSTORY','Сегодня новых статей еще не было.');
define('_BIGSTORY','Сегодня самая читаемая статья:');
define('_SURVEY','Опросы');
define('_POLLS','Голосования');
define('_PCOMMENTS','Комментарии:');
define('_RESULTS','Результаты');
define('_HREADMORE','читать остальное ...');
define('_CURRENTLY','Сейчас с вами,');
define('_GUESTS','гость(ей) и');
define('_MEMBERS','пользователь(ей).');
define('_YOUARELOGGED','Вы вошли как');
define('_YOUHAVE','У вас есть');
define('_PRIVATEMSG','приватное(ных) сообщение(ий).');
define('_YOUAREANON','Вы Анонимный пользователь. Вы можете зарегистрироваться нажав <a href="'.getlink('Your_Account').'">здесь</a>');
define('_NOTE','Запись:');
define('_ADMIN','Администрирование');
define('_WERECEIVED','Мы получили');
define('_PAGESVIEWS','просмотров наших страниц на');
define('_TOPIC','Тема');
define('_UDOWNLOADS','Файлы');
define('_VOTE','Голос');
define('_VOTES','Голоса');
define('_MVIEWADMIN','Просматривают: Только админы');
define('_MVIEWUSERS','Просмотривают: Только зарегистрированные пользователи');
define('_MVIEWANON','Просматривают: только ананимные пользователи');
define('_MVIEWALL','Просматривают: все посетители');
define('_EXPIRELESSHOUR','Срок истекает: меньше чем через 1 час');
define('_EXPIREIN','Срок истекает в');
define('_UNLIMITED','Неограниченно');
define('_HOURS','Часы');
define('_RSSPROBLEM','Проблемы с заголовками');
define('_SELECTLANGUAGE','Выберите язык');
define('_SELECTGUILANG','Выберите язык интерфейса:');
define('_NONE','Нет');
define('_BLOCKPROBLEM','<center>Существует проблема с этим блоком.</center>');
define('_BLOCKPROBLEM2','<center>Нет содержания для этого блока.</center>');
define('_MODULENOTACTIVE','Извините, этот модуль не активен!');
define('_NOACTIVEMODULES','Неактивные модули');
define('_MODULENOEXIST','Мы сожалеем, но запрошеный файл, %s, не существует');
define('_FORADMINTESTS','(только для админа)');
define('_BBFORUMS','Форумы');
define('_ACCESSDENIED','Доступ запрещен');
define('_RESTRICTEDAREA','Извините, для Вас доступ в этот раздел закрыт.');
define('_MODULEUSERS','Мы извиняемся, но этот раздел нашего сайта только для <i>зарегистрированных пользователей</i><br /><br />Вы можете свободно зарегистрироваться <a href="'.getlink('Your_Account&amp;file=register').'">здесь</a>, после чего сможете<br />получить доступ в этот раздел. Спасибо.<br /><br />');
define('_MODULEUSERS2','Вы можете зарегестрироваться <a href="'.getlink('Your_Account&amp;file=register').'">здесь</a>, и получить доступ к этой части нашего сайта<br /><br />Спасибо за понимание');
define('_MODULESADMINS','Мы извиняемся, но этот раздел нашего сайта только для <i>Администраторов</i><br /><br />');
define('_MODULESGROUPS','необходим доступ для группы');
define('_HOME','Главная');
define('_HOMEPROBLEM','Существует проблема: у вас нет домашней странички!!');
define('_ADDAHOME','Добавить модуль на вашу главную страницу');
define('_HOMEPROBLEMUSER','Существует проблема на вашей домашней страничке. Проверьте ее позже.');
define('_MORENEWS','Больше в секции новостей');
define('_ALLCATEGORIES','Все категории');
define('_SPAMGUARDPROTECTED','SpamGuard заблокировал это сообщение при отправке');
define('_M_CHARS','Не более: %s символов');

define('_SYS_MESSAGE','Системное сообщение');
define('_SYS_MESSAGES','Системные сообщения');
define('_SYS_MAINTENANCE','Сайт находится в режиме обслуживания');
define('_SYS_DEMO','Вы запустили демонстративный режим администрирования<br />Вы не можете производить изменения в базе данных<br /><a href="'.adminlink('logout').'">Вывести отчет!</a>');

define('_DATE','Дата');
define('_HOUR','Час');
define('_UMONTH','Месяц');
define('_YEAR','Год');
define('_JANUARY','Января');
define('_FEBRUARY','Февраля');
define('_MARCH','Марта');
define('_APRIL','Апреля');
define('_MAY','Мая');
define('_JUNE','Июня');
define('_JULY','Июля');
define('_AUGUST','Августа');
define('_SEPTEMBER','Сентября');
define('_OCTOBER','Октября');
define('_NOVEMBER','Ноября');
define('_DECEMBER','Декабря');

define('_MONDAY','Понедельник');
define('_TUESDAY','Вторник');
define('_WEDNESDAY','Среда');
define('_THURSDAY','Четверг');
define('_FRIDAY','Пятница');
define('_SATURDAY','Суббота');
define('_SUNDAY','Воскресенье');
//three letter abbrev.
define('_ABR_MONDAY','Пон.');
define('_ABR_TUESDAY','Вт.');
define('_ABR_WEDNESDAY','Ср.');
define('_ABR_THURSDAY','Четв.');
define('_ABR_FRIDAY','Пятн');
define('_ABR_SATURDAY','Субб.');
define('_ABR_SUNDAY','Воскр.');

define('_BWEL','Добро пожаловать');
define('_BPM','Частные сообщения');
define('_BUNREAD','Непрочтенные');
define('_BREAD','Прочтенные');
define('_BMEMP','Зарегистрировались');
define('_BLATEST','Последний');
define('_BTD','Сегодня');
define('_BYD','Вчера');
define('_BOVER','Всего');
define('_BVISIT','Посетителей онлайн');
define('_BVIS','Гости');
define('_BMEM','Пользователи');
define('_BTT','Всего');
define('_BON','Сейчас онлайн');
define('_BREG','Регистрация');
define('_BROADCAST','Сообщение для всех');
define('_BROADCASTFROM','Публичное сообщение для');
define('_TURNOFFMSG','Выключение публичных сообщений');
define('_JOURNAL','Журнал');
define('_READMYJOURNAL','Прочитать мой журнал');
define('_ADD','Добавить');
define('_YES','Да');
define('_NO','Нет');
define('_INVISIBLEMODULES','Невидимые модули');
define('_ACTIVEBUTNOTSEE','(Активные но невидимые ссылки)');
define('_BOTS','Боты');

define('_UM','Служба проверки обновлений Dragonfly:');
define('_UM_F','Ошибка при соединении с сервисом обновлений. Возможно, узел недоступен или временно не принимает соединения.');
define('_UM_G','Вы используете последнюю версию Dragonfly');
define('_UM_R','Это версия Dragonfly не последняя, <a href="%2$s" target="_blank">загрузите</a> обновленную версию %1$s.');
define('_TEAM','Команда');
define('_LINKAPPROVEDMSG','Поздравляем! Ссылка, которую Вы представили, была одобрена. Пожалуйсто, свяжитесь с нами.');
define('_MODREQLINKS','Измененные ссылки');
define('_BROKENLINKS','Недоступные ссылки');
define('_MODREQDOWN','Измененные файлы');
define('_BROKENDOWN','Недоступные файлы');
define('_PAGEGENERATION','Открытие страницы:');
define('_SECONDS','секунды');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Страница сгенерирована за %1$s секунд и %2$s DB запросов за %3$s секунд');
define('_YOUHAVEONEMSG','Для вас есть новое частное сообщение');
define('_NEWPMSG','Новые частные сообщения');
define('_CONTRIBUTEDBY','Внесенное');
define('_CHAT','Чат');
define('_REGISTERED','Зарегистрирован');
define('_CHATGUESTS','ГосьтьГосьти');
define('_USERSTALKINGNOW','Сейчас общаются');
define('_ENTERTOCHAT','Войти в чат');
define('_CHATROOMS','Свободные комнаты');
define('_ALLTOPICS','Все темы');
define('_ASSOTOPIC','Связанные темы');
define('_HELLO','Привет');
define('_ALL','Все');
define('_URL','URL');
define('_SUBJECT','Тема');
define('_PREVIEW','Предварительный Просмотр');
define('_SEND','Отправить');
define('_ANONYMOUS','Аноним');
define('_BREADCRUMB', 'Разделитель Breadcrumb разделяет слова в заголовках');
define('_BC_DELIM',''.isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&rsaquo;');//''. is for cpglang
define('_RESET','Reset');
define('_AT','at');
define('_LASTMSGS','Последних %s сообщений с форума');
define('_LASTPOSTBY','Последние сообщение было %1$s на %2$s в %3$s');
define('_PRINTER','Напечатать текущую страницу');

define('_CREDITS_TITLE','Credits');
define('_CREDITS_PRODUCT','Продукт');
define('_CREDITS_DESC','Подпись');
define('_CREDITS_AUTHORS','Автор(ы)');

define('_PP_TITLE','Политика приватности');
define('_PP_MODIFY','Изменить сообщение');

define('_SENDEREMAIL','Е-маил отправителя');
define('_SENDERNAME','Имя отправителя');
define('_RECIPIENTNAME','Имя получателя');
define('_RECIPIENTEMAIL','Email получателя');

define('_REASONS_0','Как');
define('_REASONS_1','Off Topic');
define('_REASONS_2','Flamebait');
define('_REASONS_3','Troll');
define('_REASONS_4','Redundant');
define('_REASONS_5','Интересный');
define('_REASONS_6','Interesting');
define('_REASONS_7','Информативный');
define('_REASONS_8','Забавный');
define('_REASONS_9','Переоцененный');
define('_REASONS_10','Недооцененный');

/* My Account Tools Block */
define('_TB_BLOCK','Мой профиль');
define('_TB_TASKS','Задачи');
define('_TB_INFO','Информация');
define('_TB_PROFILE_INFO','Публичный профиль');
define('_TB_EDIT_PROFILE','Профиль');
define('_TB_EDIT_REG','Данные регистрации');
define('_TB_EDIT_PRIVATE','Личная информация');
define('_TB_EDIT_AVATAR','Аватар');
define('_TB_DELETE','Удалить мою учетную запись');
define('_TB_CONFIG','Конфигурация');
define('_TB_EDIT_PREFS','Основная конфигурация');
define('_TB_EDIT_HOME','Личная настройка сайта');
define('_TB_EDIT_COMM','Настройки отзывов');
define('_TB_PERSONAL','Персональное');
define('_TB_PERSONAL_GALLERY','Галлерея');
define('_TB_PERSONAL_JOURNAL','Блог');
define('_TB_PRIVMSGS','Личные сообщения');
define('_TB_PRIVMSGS_INBOX','Входящие');
define('_TB_PRIVMSGS_OUTBOX','Исходящие');
define('_TB_PRIVMSGS_SENTBOX','Отправленные');
define('_TB_PRIVMSGS_SAVEBOX','Архив');
define('_TB_PRIVMSGS_SEND','Отправить сообщение');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','Пользователь');
define('_SECURITYCODE','Секретный код');
define('_TYPESECCODE','Повторить код');
define('_MEMBERSOPTIONS','Мой кабинет');
define('_READSEND','Читать персональные сообщения. Посылать сообщения остальным.');
define('_INBOX','Входящие');
define('_NEW','Новости');
define('_ACCOUNTOPTIONS','Ваш Акаунт. Изменить ваш профиль и прочитать ваши письма.');
define('_LOGOUTACCT','Выйти');
define('_LOGOUTADMINACCT','Выйти');
define('_BLOGIN','Ваш Акаунт');
define('_BFLOGIN','Профиль форума');
define('_BHID','Скрытый');
define('_WHOWHERE','Кто Где');
define('_STAFFONL','Персонал Онлайн');
define('_STAFFNONE','Весь Персонал в Оффлайн');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Сообщество');
define('_BlogsLANG','Блоги');
define('_ContentLANG','Содержание');
define('_coppermineLANG','Фотогалерея');
define('_CPGlangLANG','Помощь в переводе');
define('_DownloadsLANG','Загрузки');
define('_EncyclopediaLANG','Энциклопедия');
define('_ForumsLANG','Форумы');
define('_ContactLANG','Связаться с нами');
define('_FAQLANG','FAQ - Помощь');
define('_Members_ListLANG','Участники');
define('_NewsLANG','Новости');
define('_ReviewsLANG','Предпросмотр');
define('_SearchLANG','Всему');
define('_StatisticsLANG','Статистика');
define('_Stories_ArchiveLANG','Архив новостей');
define('_Submit_NewsLANG','Прислать новость');
define('_SurveysLANG','Опросы');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Статьи');
define('_Private_MessagesLANG','Почта сайта');
define('_Tell_a_FriendLANG','Сказать другу');
define('_Web_LinksLANG','Ссылки');
define('_Your_AccountLANG','Учетная запись');
define('_CPG_EventsLANG','Календарь');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Языки!');
define('_SmiliesLANG', 'Смайлики');
define('_GroupsLANG','Группы');
define('_RanksLANG', 'Ранги');
define('_HeadlinesLANG', 'Заголовки');

define('_COMMUNICATION','Связь');
define('_FRIENDS','Друзья');
define('_STORE','Магазин');
define('_PRODUCTS','Изделия');
define('_DONATE','Пожертвование');
define('_HELP','Справка');
define('_GALLERIES','Галереи');
define('_DOCS','Документация');
define('_RULES',' Правила и инструкции');
define('_MENU','Главное Меню');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','Вы <strong>подписаны</strong> на <br/>нашу рассылку');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','Вы <strong>не подписаны</strong> на <br/>нашу рассылку');
define('_NEWSLETTERBLOCKREGISTER','Вы должны <br/><strong>зарегистрироваться</strong><br/>, чтобы получать нашу рассылку');
define('_NEWSLETTERBLOCKSUBSCRIBE','Подписаться');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Отписаться');
define('_NEWSLETTERBLOCKREGISTERNOW','Зарегистрироваться!');
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
define('_SAVECHANGES','Сохранить изменения');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Язык');
define('_FUNCTIONS','Назначение');
define('_SHOW','Показать');
define('_TO','Кому');
define('_DAY','День');
define('_LAST','Последний');
define('_ACTIVE','Включить');
define('_DEACTIVATE','Выключить');
define('_INACTIVE','Неактивизированно ');
define('_ACTIVATE','Активизированно');
define('_ACTIVATE2','Активизировать ?');
define('_VIEW','Видимое для');
define('_VIEWPRIV','Показывать');
define('_MVADMIN','Только для администраторов');
define('_MVUSERS','Только для ЗАРЕГИСТРИРОВАННЫХ');
define('_MVANON','Только анонимные пользователи');
define('_MVALL','Все посетители');
define('_IMAGE','Картинка');
define('_GO','Далее...');
define('_OPTION','Опции');
define('_CATEGORY','Категории');
define('_SUBCATEGORY','Подкатегории');
define('_ID','Идентификатор');
define('_EXPIRATION','Срок');
define('_DAYS','дней');
define('_WARNING','Предупреждение');
define('_POLLTITLE','Название Опроса');
define('_POLLEACHFIELD','Пожалуйста введите допустимые значения');
define('_ADDCATEGORY','Добавить новую категорию');
define('_PAGEBREAK','Если вы хотите продолжение на множественных страницах, можете напечатать <b>&lt;!--pagebreak--&gt;</b> в том месте, где хотите прервать');
define('_SIGNATURE','Подпись');
define('_DESCRIPTION','Описание');
define('_EDITCATEGORY','Редактировать Категорию');
define('_IN','в');
define('_DESCRIPTION255','Описание: (не более 255 знаков)');
define('_MODCATEGORY','Изменить категорию');
define('_SUBMITTER','Поехали!');
define('_VISIT','Посещение');
define('_EXTENDEDTEXT','Подробный текст');
define('_CHECKCATEGORIES','Отметить категорию');
define('_INCLUDESUBCATEGORIES','(Включая подкатегории)');
define('_CHECKSUBCATEGORIES','Отметить подкатегории');
define('_VALIDATELINKS','Подтвердить ссылку');
define('_FAILED','Неудачно!');
define('_BEPATIENT','(пожалуйста потерпите)');
define('_VALIDATINGCAT','Подтвертидть категорию (и все подкатегории)');
define('_VALIDATINGSUBCAT','Подтвердить подкатегорию');
define('_OK','Хорошо!');
define('_CHECK','Посмотреть');
define('_IGNORE','Игнорировать');
define('_HITS','Хиты');
define('_FILESIZE', 'Размер файла');
define("_EZTHEREIS","Есть");
define("_EZSUBCAT","подкатегория");
define("_EZATTACHEDTOCAT","под этой категорией");
define("_EZBROKENLINKS","Битая ссылка");
define("_DELEZLINKCATWARNING","ВНИМАНИЕ: Вы действительно хотите удалить эту категорию?<br /> Вы также удалите суб-категории и прикрепленные к ним ссылки!");

// index.php
define('_DEFHOMEMODULE','Домашня страничка по умолчанию');
define('_MODULEINHOME','Модуль загрузок на домашней страничке:');
define('_CHANGE','Изменить');
define('_WHOSONLINE','Кто Oнлайн');
define('_NP_ADMIN','Блокнот');
define('_NP_LOCKED','Блокнот заблокирован <br /> Только суперадмин может его разблокировать');
define('_NP_SAVE','Сохранить заметку');
define('_NP_UNLOCK','Разблокировать блокнот');
define('_NP_LOCK','Заблокировать блокнот');
// news
define('_STICKY','Закрепленные новости');
define('_ARTICLEUP','Передвинуть статью наверх');
define('_ARTICLEDOWN','Передвинуть статью вниз');
define('_UNSTICK','Отлепить');
define('_STICK','Прилепить');
define('_AUTOMATEDARTICLES','Скрытые новости');
define('_STORYID','Идентификатор Заметки');
define('_CURRENTPOLL','Опрос в данний момент');

// admin.php
define('_ADMINISTRATION','Администрирование');
define('_NOADMINYET','Нет учетной записи супрадминистратора, следует создать его учетную запись...');
define('_CREATEUSERDATA','Хотите создать учетную запись пользователя с этими же данными?');
define('_ADMINLOGIN','Вход Администрации Системы');
define('_ADMINID','Административный Идентификатор');
define('_EMAIL','Мыло');
define('_SUBMIT','Послать');
define('_YOUARELOGGEDOUT','Теперь Вы вышли из системы!');
define('_PASSWDNOMATCH','Пароль не соответсвует, попробуйте еще раз.');
define('_LOGIN_REMEMBERME','Запомнить меня');
define('_ADMINMENU_LOGOUT','Выйти из меню администратора');
define('_PASSWORD_MALFORMED','Пожалуйста включите по крайней мере одно число, одну заглавную букву и одну строчную в вашем пароле');

// admins.php
define('_AUTHORSADMIN','Администрирование');
define('_NAME','Имя');
define('_REQUIRED','(обязательно)');
define('_MODIFYINFO','Изменить информацию');
define('_DELAUTHOR','Удалить администратора');
define('_ADDAUTHOR','Добавить нового администратора');
define('_PERMISSIONS','Разрешения');
define('_SUPERUSER','Суперадмин');
define('_SUPERWARNING','Предупреждение: если суперадмин проверен, то администратору будут присвоены все права ');
define('_ADDAUTHOR2','Добавить администратора');
define('_RETYPEPASSWD','Сменить пароль');
define('_FORCHANGES','(Только для изменений)');
define('_COMPLETEFIELDS','Вы должны звполнить все поля');
define('_CREATIONERROR','Не удалось создать нового администратора');
define('_AUTHORDEL','Удалить администратора');
define('_PUBLISHEDSTORIES','Этот администратор написал');
define('_SELECTNEWADMIN','Пожалуйста выберите существующего администратора, чтобы назначить  на');
define('_GODNOTDEL','Суперадмина нельзя удалить!');
define('_MAINACCOUNT','Суперадмин *');
define('_USERS','Пользователи');

// banners.php
define('_BANNERSADMIN','Банерные настройки');
define('_DELETEBANNER','Удалить баннер');
define('_SURETODELBANNER','Вы уверены, что хотите удалить этот баннер?');
define('_EDITBANNER','Редактировать баннер');

// blocks.php
define('_BLOCKSADMIN','Административние блоки');
define('_CENTER','Центр');
define('_CENTERUP','Центр сверху');
define('_CENTERDOWN','Центр снизу');
define('_BLOCKFILE','(Блок файлов)');
define('_BLOCKFILE2','ФАЙЛЫ');
define('_BLOCKSYSTEM','СИСТЕМА');
define('_ADDNEWBLOCK','Добавить новый блок');
define('_RSSFILE','Ссылка файла RSS/RDF');
define('_ONLYHEADLINES','(Только для заголовков)');
define('_REFRESHTIME','Обновить время');
define('_CREATEBLOCK','Создать блок');
define('_EDITBLOCK','Редактировать блок');
define('_BLOCK','Блок');
define('_SAVEBLOCK','Сохранить блок');
define('_BLOCKACTIVATION','Активировать блок');
define('_BLOCKPREVIEW','Предпросмотр для');
define('_WANT2ACTIVATE','Хотели бы Вы активизировать этот блок?');
define('_ARESUREDELBLOCK','Вы уверены, что хотите удалить');
define('_BLOCKUP','Сместить блок вверх');
define('_BLOCKDOWN','Сместить блок вниз');
define('_BLOCKTOP','Поставить блок сверху');
define('_BLOCKBOTTOM','Поставить блок снизу');
define('_TITLE','Название');
define('_POSITION','Позиция');
define('_WEIGHT','Вес');
define('_STATUS','Статус');
define('_LEFTBLOCK','Блок слева');
define('_LEFT','Налево');
define('_RIGHTBLOCK','Блок справа');
define('_RIGHT','направо');
define('_TYPE','Тип');
define('_CUSTOM','Обычное');
define('_FILENAME','Имя файла');
define('_FILEINCLUDE','Если Вы используете этот выбор, игнорируете Содержание и Обновление области времени');

// comments.php
define('_REMOVECOMMENTS','Стереть комментарии');
define('_SURETODELCOMMENTS','Вы уверены, что хотите стереть выбранний комментарий и все ответы к нему?');

// database.php
define('_SAVEDATABASE','Сохранить');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Текущий Статус');
define('_ACTIVATEPAGE','Активизировать страницу?');

// history.php
define('_EPHEMADMIN','Сегодня в истории');
define('_ADDEPHEM','Добавить новую запись');
define('_EPHEMDESC','Описание записи');
define('_EPHEMMAINT','Просмотр записи');
define('_EPHEMEDIT','Редактировать запись');
define('_EPHEMDELETE','Delete Entry');

// headlines.php
define('_RSSFAIL','Проблема со ссылкой на RSS канал');
define('_RSSTRYAGAIN','Проверьте URL и RSS имя файла а повторите действие');
define('_RSSCONTENT','(RSS/RDF Содержание)');
define('_IFRSSWARNING','Если Вы добавите ссылку, содержание будет проинорировано');
define('_SETUPHEADLINES','Select \'Custom\' and supply the URL to the RSS feed, or just select a site from the dropdown to fetch news headlines');
define('_HEADLINESADMIN','Управление заголовками');
define('_ADDHEADLINE','Добавить заголовок');
define('_EDITHEADLINE','Редактировать заголовки');
define('_SURE2DELHEADLINE','Are you sure you want to delete this headline?');

// messages.php
define('_MESSAGESADMIN','Сообщение администрации');
define('_MESSAGETITLE','Название');
define('_MESSAGECONTENT','Контент');
define('_ALLMESSAGES','Просмотр сообщений');
define('_EDITMSG','Редактировать сообщение');
define('_ADDMSG','Добавить сообщение');
define('_REMOVEMSG','Хотите удалить сообщение?');
define('_CHANGEDATE','Установить стартовую дату на сегодня?');
define('_IFYOUACTIVE','Если активировать сообщение сейчас, то стартовая дата будет установлена на сегодня');

// modules.php
define('_MODULESADMIN','Административный модуль');
define('_HOMECONFIG','Конфигурация Домашней странички');
define('_MODULESADDONS','Модули и дополнения');
define('_INHOME','Установить как модуль домашней странички');
define('_MODULEHOMENOTE','New modules added to the /modules/ folder will automatically be added to the system<br />Removing a module\'s folder from this directory will automatically remove the module from the system<br /><br />The module with a bold title denotes the module set as my homepage<br />This module cannot be deactivated or restricted to certain users');
define('_PUTINHOME','Установить как домашную');
define('_SURETOCHANGEMOD','Are you sure you want to change your Homepage from');
define('_NOTINMENU','[ <strong>&middot;</strong> ] denotes a module hidden from view in the Modules block');
define('_SHOWINMENU','Показывать в меню?');
define('_CUSTOMTITLE','Custom Title');
define('_MODULEEDIT','Modules Edit');
define('_VERSION','Версия');
define('_UPGRADE','Обновлено до %s');
define('_DBSIZE','Размер базы данных');
define('_CVS_EXPLAIN','This module appears to be able to receive updates through our CVS (Concurrent Versioning System). With CVS, you are able to receive the latest updates of a file very easily, but the latest version of a file may contain bugs as it is likely not part of our stable release.<br /><br />If you are familiar with PHP, you can update this module with the latest CVS files by using the link below. <strong>Backup all files first!</strong>');
define('_CVS_UPDATE','Обновить файлы CVS');
define('_LOADNEWCVS', 'Загрузить новый модуль из CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Обновление прервано');
define('_EXAMPLE', 'Пример использования');

// newsletter.php
define('_FROM','От');
define('_STAFF','Сотрудники');
define('_NL_RECIPS','Получатели');
define('_SUBSCRIBEDUSERS','Подписанные Участники');
define('_NL_ALLUSERS','Все участники');
define('_NL_ADMINS','Администраторы');
define('_NL_REGARDS','Наилучшие пожелания');
define('_DISCARD','Брак');
define('_REVIEWTEXT','Проверьте ваше сообщение на наличие опечаток');
define('_MANYUSERSNOTE','В связи с тем, что письмо доставляется большому количеству пользователей, это может занять несколько минут.<br />Пожалуйста, подождите!');
define('_NL_NOUSERS','В выбранной для отправки письма группе нет пользователей<br />Пожалуйста, вернитесь и выберите другую группу');
define('_NUSERWILLRECEIVE','пользователи получат это письмо');
define('_NLUNSUBSCRIBE',"Мы направили Вам это письмо, так как Вы подписались на рассылку с нашего сайта.\n\nВы можете отказаться от подписки в любое время перейдя по этой <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">ссылке</a>.\n\nЕсли Вам понадобится дальнейшая помощь, пожалуйста, направьте письмо нашему <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">администратору</a>");
define('_NEWSLETTERSENT','Записка отправлена');

// referers.php
define('_WHOLINKS','Кто ссылается на наш сайт?');
define('_DELETEREFERERS','Удалить рефералов');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Подвал');
define('_DEBUG', 'Отладка');
define('_SITECONFIG','Конфигурация сайта');
define('_GENSITEINFO','Основная информация о сайте');
define('_SITENAME','Имя сайта');
define('_SITEURL','URL сайта');
define('_SITELOGO','Имя файла логотипа моего сайта (сохранено в /images)');
define('_SITESLOGAN','Девиз');
define('_STARTDATE','Когда мой сайт был запущен');
define('_ADMINEMAIL','Почтовый адрес');
define('_ITEMSTOP','Кол-во полей в верхнем модуле');
define('_STORIESHOME','Количество новостей на главной странице');
define('_OLDSTORIES','Количество новостей для показа в блоке истории новостей');
define('_ALLOWANONPOST','Разрешать анонимным пользователям создавать новости');
define('_DEFAULTTHEME','Тема для сайта по умолчанию');
define('_SHOWSEC','Показать секретный код');
define('_TOOLTIPS','Показать подсказки для полей');
define('_UM_TOGGLE','Включить сервис проверки обновлений');
define('_UM_EXPLAIN','This will retrieve two pieces of information from our website, dragonflycms.org: the current build of Dragonfly, and any important messages that pertain to your version of Dragonfly. The only data sent to our site is your Dragonfly version number; we do <strong>not</strong> log these requests to our server.');
// maintenance
define('_MAINTENANCE','Обслуживание');
define('_MESSAGE','Сообщение');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','Язык системы');
define('_SELLANGUAGE','Язык сайта по умолчанию');
define('_LOCALEFORMAT','Формат местного времени');
define('_ACTMULTILINGUAL','Включить систему поддержки многоязычности');
define('_ACTUSEFLAGS','Использовать флаги вместо выпадающих меню');
// banners
define('_BANNERSOPT','Баннерная система');
define('_ACTBANNERS','Активировать баннерную систему');
// footer
define('_FOOTERMSG','Подвал страницы (опционально)');
define('_FOOTERLINE1','Подвал, строка 1');
define('_FOOTERLINE2','Подвал, строка 2');
define('_FOOTERLINE3','Подвал, строка 3');
// backend
define('_BACKENDCONF','Syndication');
define('_BACKENDTITLE','Подача названия');
define('_BACKENDLANG','язык подачи');
// mail stories
define('_MAIL2ADMIN','Очередь новостей');
define('_NOTIFYSUBMISSION','Уведомить администратора об очереди статей');
define('_EMAIL2SENDMSG','Адрес email получателя');
define('_EMAILSUBJECT','Тема электронного сообщения');
define('_EMAILMSG','Тело электронного сообщения');
define('_EMAILFROM','Адрес email отправителя');
// comments
define('_COMMENTSOPT','Отзыв');
define('_COMMENTSLIMIT','Truncate comments after __ characters');
define('_COMMENTSMOD','Разрешить модерирование комментариев');
define('_MODADMIN','Да, администраторами');
define('_MODUSERS','Да, пользователями');
define('_NOMOD','Нет, не использовать модерирование');
// adminmenu
define('_GRAPHICOPT','Administration Menu Layout');
define('_BOTH','Оба');
define('_GRAPHICAL','Графический');
define('_SIDEBLOCK','Боковой блок');
// miscellaneous
define('_MISCOPT','Разное');
define('_ACTIVATEHTTPREF','Активировать журналирование HTTP рефералов');
define('_MAXREF','Установит лимит количества рефералов');
define('_COMMENTSPOLLS','Активировать систему комментариев в опросах');
define('_COMMENTSARTICLES','Активировать систему комментариев в новостных статьях');
define('_PAGE','Страница');
define('_PAGES','Страницы');
define('_TOGGLE','Перемешать содержание');

// censor
define('_CENSOROPTIONS','Цензор');
define('_CENSORMODE','Режим для поиска совпадений');
define('_NOFILTERING','Без фильтра');
define('_EXACTMATCH','Точное соответствие');
define('_MATCHBEG','Совпадение в начале текста');
define('_MATCHANY','Совпадение в любом месте текста');
define('_CENSORREPLACE','Замена для запрещенного слова');
// email
define('_EMAILOPTIONS','Почта');
define('_ALLOW_HTML_EMAIL','Разрешить использование HTML в электронных письмах');
define('_USE_SMTP','Использовать SMTP сервер вместо PHP мэйлера');
define('_SMTP_HOST','Адрес сервера SMTP (smtp.example.com)');
define('_USE_SMTP_AUTH','Сервер SMTP требует авторизацию');
define('_SMTP_USER_NAME','Имя пользователя SMTP');
define('_SMTP_USER_PASS','Пароль SMTP');

// cpg_adminmenu.php
define('_ADMINMENU','Меню управления');
define('_ADMINLOGOUT','Выход');
define('_AMENU0','System');
define('_AMENU1','Общие');
define('_AMENU2','Пользователи');
define('_AMENU3','Сообщения');
define('_AMENU4','Форумы');
define('_AMENU5','Информативный');
define('_AMENU6','Ссылки');
define('_AMENU7','Коммерция');
define('_AMENU8','Мультимедия');
define('_AMENU9','Модули');
define('_BMENU1','Помощь');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','Главные Настройки');
define('_DATABASE','База данных');
define('_BLOCKS','Блоки');
define('_MODULES','Модули');
define('_EDITADMINS','Администраторы');
define('_MESSAGES','Новости');
define('_BANNERS','Банеры');
define('_HTTPREFERERS','Каталоги');
define('_EDITUSERS','Подписчики');
define('_USERSCONFIG','Конфигурация для подписчиков');
define('_NEWSLETTER','Рассылка');
define('_SUBMISSIONS','Подписка');
define('_ADDSTORY','Создать новость');
define('_TOPICS','Темы');
define('_ADMPOLLS','Опросы');
define('_EPHEMERIDS','События');
define('_REVIEWS','Ревью');
define('_ENCYCLOPEDIA','Энциклопедия');
define('_SURVEYS','Опросы');
define('_SECTIONS','Секции');
define('_ARTICLES','новостей');
define('_FAQ','ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ');
define('_DOWNLOAD','Файлы для закачивания');
define('_WEBLINKS','Ссылки');
define('_CONTENT','Содержание');
define('_SYSINFO','System Info');
define('_REPORTABUG','Сообщить об ошибках');
//coppermine admin
define('_W_INSTALL','Какая установка?');
define('_W_PAGE','Какая страница?');
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
define('_ERROR','ОШИБКА');
define('_SEC_ERROR','Ошибка Безопасности');
define('_ERROR_NOT_SET','%s не установлено');
define('_ERROR_NO_POST','Отправка с другого хоста запрещена...');
define('_ERROR_NO_GET','Запросы GET не разрешены для этой функции...');
define('_ERROR_BAD_CHAR','Вы ввели запрещенные символы в запросе %s');
define('_ERROR_BAD_FORMAT','Неверный формат %s');
define('_ERROR_BAD_LINK','Неверная ссылка при загрузке страницы.');
define('_ERROR_NONE_TO_DISPLAY','Здесь нет % для отображения');
define('_ERROR_DELETE_CONF','Вы уверены, что хотите удалить %?');
define('_ERROR_NO_EXIST','% не содержит');
define('_ERROR_ALREADYEXIST','% уже содержит');
define('_TASK_COMPLETED','Операция завершена!');
define('_CONFIRM','Подтвердить');
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
