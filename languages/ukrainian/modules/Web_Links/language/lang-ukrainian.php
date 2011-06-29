<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com
  Based on Journey Links Hack
  Copyright (c) 2000 by James Knickelbein
  Journey Milwaukee
  http://www.journeymilwaukee.com
  
  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version.
  This program comes without any warranty.
  $Source: /cvs/languages/ukrainian/modules/Web_Links/language/lang-ukrainian.php,v $
  $Revision: 1.2 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:47 $
***********************************************************************/
if (!defined('CPG_NUKE')) { die('You do not have permission to access this file'); }  
  
global $sitename, $anonwaitdays, $outsidewaitdays;
define('_PREVIOUS','Попережня сторінка');
define('_NEXT','Наступна сторінка');
define('_YOURNAME','Ваше ім\'я');
define('_CATEGORIES','Категорії');
define('_LVOTES','голосів');
define('_TOTALVOTES','Всього голосів:');
define('_LINKTITLE','Назва ресурсу');
define('_HITS','Хітів');
define('_THEREARE','');
define('_NOMATCHES','По вашому запиту нічого не знайдено');
define('_SCOMMENTS','коментарях');
define('_ADDLINK','Додати');
define('_POPULAR','Популярні');
define('_TOPRATED','Кращі');
define('_RANDOM','Випадкові');
define('_LINKSMAIN','Каталог ресурсів');
define('_LINKCOMMENTS','Коментарі');
define('_ADDITIONALDET','Статистика');
define('_EDITORREVIEW','Огляди');
define('_REPORTBROKEN','Повідомити про неробочий ресурс');
define('_LINKSMAINCAT','Каталог ресурсів');
define('_AND','і');
define('_INDB','в нашій базі даних');
define('_ADDALINK','Додати новий ресурс');
define('_INSTRUCTIONS','Інструкції');
define('_SUBMITONCE','Пропонуйте тільки унікальні ресурси.');
define('_POSTPENDING','Всі ресурси публікуються тільки після перевірки.');
define('_USERANDIP','Не треба декілька разів добавляти один і той же ресурс.');
define('_PAGETITLE','Назва сторінки');
define('_PAGEURL','URL сторінки');
define('_YOUREMAIL','Ваш Email');
define('_LDESCRIPTION','Опис: (максимум 255 символів)');
define('_ADDURL','Додати URL');
define('_LINKSNOTUSER1','Ви незареєстрований користувач або ви не ввійшли в сисему.');
define('_LINKSNOTUSER2','Якщо ви зареєстровані, то ви можете добавляти ресурси в цей каталог.');
define('_LINKSNOTUSER3','Стати зареєстрованим користувачем легко і швидко.');
define('_LINKSNOTUSER4','Чому ми вимагаєм реєстрації для доступу до певних розділів?');
define('_LINKSNOTUSER5','Тільки так ми зможем запропонувати вам найкраще.');
define('_LINKSNOTUSER6','Кожний новий сайт проходить індивідуальну перевірку модератора.');
define('_LINKSNOTUSER7','Ми хочемо запропонувати вам тільки цінну інформацію.');
define('_LINKSNOTUSER8','<a href="modules.php?name=Your_Account">Реєстрація</a>');
define('_LINKALREADYEXT','ПОМИЛКА: Цей URL уже є в базі даних!');
define('_LINKNOTITLE','ПОМИЛКА: Ви не вказали НАЗВУ вашого ресурсу!');
define('_LINKNOURL','ПОМИЛКА: Ви не вказали URL вашого ресурсу!');
define('_LINKNODESC','ПОМИЛКА: Ви не вказали ОПИС вашого ресурсу!');
define('_LINKRECEIVED','Ми отримали ваш ресурс. Дякуємо!');
define('_EMAILWHENADD','Вас буде повідомлено по Email, коли його буде схвалено.');
define('_CHECKFORIT','Після перевірки ресурс буде опубліковано в каталозі.');
define('_NEWLINKS','Нові ресурси');
define('_TOTALNEWLINKS','Всього нових ресурсів');
define('_LASTWEEK','За останній тиждень');
define('_LAST30DAYS','За останні 30 днів');
define('_1WEEK','1 тиждень');
define('_2WEEKS','2 тижні');
define('_30DAYS','30 днів');
define('_TOTALFORLAST','Всього за останні');
define('_ADDEDON','Дата');
define('_RATING','Рейтинг');
define('_RATESITE','Оцініть цей сайт');
define('_DETAILS','Статистика');
define('_BESTRATED','Найкращі ресурси');
define('_OF','');
define('_TRATEDLINKS','всього оцінених ресурсів');
define('_TVOTESREQ','необхідний мінімум голосів');
define('_SHOWTOP','Показати найкращі');
define('_MOSTPOPULAR','Популярні ресурси');
define('_OFALL','всі');
define('_SORTLINKSBY','Сортувати ресурси по');
define('_SITESSORTED','Порядок');
define('_POPULARITY','Популярності');
define('_SELECTPAGE','Вибрати сторінку');
define('_MAIN','Головна');
define('_NEWTODAY','Сьогоднішні новинки');
define('_NEWLAST3DAYS','Новинки за останні три дні');
define('_NEWTHISWEEK','Новинки тижня');
define('_CATNEWTODAY','Файли цієї категорії добавлені сьогодні');
define('_CATLAST3DAYS','Файли цієї категорії добавлені за останні три дні');
define('_CATTHISWEEK','Файли цієї категорії добавлені на протязі тижня');
define('_POPULARITY1','найпопулярніші в кінець');
define('_POPULARITY2','найпопулярніні на початок');
define('_TITLEAZ','по назві (від A до Я)');
define('_TITLEZA','по назві (від Я до A)');
define('_DATE1','Старі файли на початок.');
define('_DATE2','Нові файли на початок.');
define('_RATING1','найкращі в кінець');
define('_RATING2','найкращі на початок');
define('_SEARCHRESULTS4','Результати пошуку');
define('_USUBCATEGORIES','Підрозділи');
define('_LINKS','ресурсів');
define('_TRY2SEARCH','Спробуйте пошукати');
define('_INOTHERSENGINES','в інших пошукових машинах');
define('_EDITORIAL','Огляд');
define('_LINKPROFILE','Опис ресурсу');
define('_EDITORIALBY','Огляд від');
define('_NOEDITORIAL',' Для цього сайту немає оглядів.');
define('_VISITTHISSITE','Відвідайте цей вебсайт');
define('_RATETHISSITE','Оцініть цей вебсайт');
define('_ISTHISYOURSITE','Це ваш ресурс?');
define('_ALLOWTORATE','Дозвольте відвідувачам інших сайтів його оцінити!');
define('_LINKRATINGDET','Деталі рейтингу ресурсів');
define('_OVERALLRATING','Загальний рейтинг');
define('_TOTALOF','Всього');
define('_USER','Користувача');
define('_USERAVGRATING','Середній рейтинг користувача');
define('_NUMRATINGS','# рейтингу');
define('_EDITTHISLINK','Відредагувати ресурс');
define('_REGISTEREDUSERS','Оцінки зареєстрованих користувачів');
define('_NUMBEROFRATINGS','Номер рейтингу');
define('_NOREGUSERSVOTES','Немає голосів зареєстрованих користувачів');
define('_BREAKDOWNBYVAL','Розподіл голосів');
define('_LTOTALVOTES','загальна кількість голосів');
define('_LINKRATING','Рейтинг ресурсів');
define('_HIGHRATING','Найвища оцінка');
define('_LOWRATING','Найнижча оцінка');
define('_NUMOFCOMMENTS','Кількість коментарів');
define('_WEIGHNOTE','* Примітка: Голоси зареєстрованих і незареєстрованих відвідувачів враховуються в співвідношенні');
define('_NOUNREGUSERSVOTES','Немає голосів незареєстрованих відвідувачів');
define('_WEIGHOUTNOTE','* Примітка: Голоси зареєстрованих відвідувачів і голоси з інших сайтів враховуються в співвідношенні');
define('_NOOUTSIDEVOTES','Немає голосів з інших сайтів');
define('_OUTSIDEVOTERS','Голосування з інших сайтів');
define('_UNREGISTEREDUSERS','Голоси незареєстрованих відвідувачів');
define('_PROMOTEYOURSITE','Рейтинг вашого веб-сайту');
define('_PROMOTE01','Можливо, ви захочете дати можливість відвідувачам вашого сайту проголосувати за нього в нашому рейтинзі. Це дозволить підняти рейтинг вашого сайту. Будь ласка виберіть оптимальний варіант для голосування:');
define('_TEXTLINK','Текст');
define('_PROMOTE02','');
define('_HTMLCODE1','HTML-код для голосування:');
define('_THENUMBER','Ван ID');
define('_IDREFER','Перевірте наявність ID вашого сайту в HTML коді.');
define('_BUTTONLINK','Кнопка');
define('_PROMOTE03','');
define('_RATEIT','Оціни цей сайт!');
define('_HTMLCODE2','Вихідний код для кнопки:');
define('_REMOTEFORM','Форма для оцінки');
define('_PROMOTE04','');
define('_VOTE4THISSITE','Проголосуй за цей сайт!');
define('_LINKVOTE','Проголосувати!');
define('_HTMLCODE3','Використання цієї форми дозволить відвідувачам вашого сайту проголосувати за нього безпосередньо на вашому сайті. Приведена форма неробоча, для її використання скористайтесь HTML-кодом. Просто вставте його в свою веб-сорінку.:');
define('_PROMOTE05','Успіхів вашому сайту!');
define('_THANKSBROKEN','Якщо цей сайт більше не існує, або його зміст не відповідає опису в каталозі<br> натисніть кнопку і модератор перевірить цей ресурс.');
define('_THANKSFORINFO','Дякуємо за інформацію.');
define('_LOOKTOREQUEST','Ми перевіримо ваш запит якомога швидше.');
define('_ONLYREGUSERSMODIFY','Тільки зареєстровані користувачі можуть скачувати модифікації. Будь ласка, <a href="modules.php?name=Your_Account">зареєструйтесь або ввійдіть в систему</a>.');
define('_REQUESTLINKMOD','Запропонуйте ваш варіант опису ресурсу');
define('_LINKID','ID ресурсу');
define('_SENDREQUEST','Надіслати запит');
define('_THANKSTOTAKETIME','Дякуємо вам за те, що ви знайшли час оцінити сайт');
define('_LETSDECIDE','Input from users such as yourself will help other visitors better decide which links to click on.');
define('_RETURNTO','Повернутись на ');
define('_RATENOTE1','Будь ласка, не голосуйте за один сайт двічі.');
define('_RATENOTE2','Шкала від 1 до 10. 1 - дуже погано і 10 - прекрасно.');
define('_RATENOTE3','Будь ласка, будьте об\'єктивні при голосуванні.');
define('_RATENOTE4','Ви можете поглянути на <a href="downloads.php?op=TopRated">список кращих ресурсів</a>.');
define('_RATENOTE5','Не треба голосувати за свій власний ресурс.');
define('_YOUAREREGGED','Ви зареєстрований відвідувач і ввійшли як');
define('_FEELFREE2ADD','Відчувайте себе вільно при написанні коментарів про цей сайт.');
define('_YOUARENOTREGGED','Ви - незареєстрований відвідувач або не ввійшли в систему.');
define('_IFYOUWEREREG','Коментарі на цей сайт можуть відправляти тільки зареєстровані відвідувачі.');
define('_MODIFY','Змінити');
define('_COMPLETEVOTE1','Your vote is appreciated.');
define('_COMPLETEVOTE2','You have already voted for this resource in the past $anonwaitdays day(s).');
define('_COMPLETEVOTE3','Vote for a resource only once.<br>All votes are logged and reviewed.');
define('_COMPLETEVOTE4','You cannot vote on a link you submitted.<br>All votes are logged and reviewed.');
define('_COMPLETEVOTE5','No rating selected - no vote tallied');
define('_COMPLETEVOTE6','Only one vote per IP address allowed every $outsidewaitdays day(s).');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDMAINCATEGORY','Додати головну категорію');
define('_ADDSUBCATEGORY','Додати підкатегорію');
define('_WEBLINKSADMIN','Адміністрування ресурсів');
define('_EZTRANSFERLINKS','Transfer all links from category');
define('_CLEANLINKSDB','Витерти всі ресурси');
define('_EZTRANSFER','Transfer');
define('_BROKENLINKSREP','Повідомлення про неробочі ресурси');
define('_LINKMODREQUEST','Запити на зміну ресурсів');
define('_ADDNEWLINK','Додати ресурс');
define('_MODLINK','Змінити ресурс');
define('_LINKSINDB','Ресурсів в базі даних');
define('_LINKSWAITINGVAL','ресурсів, що чекають на публікацію');
define('_ERRORURLEXIST','ПОМИЛКА: Цей URL уже є в базі даних!');
define('_ERRORNOTITLE','ПОМИЛКА: Вкажіть назву для URL!');
define('_ERRORNOURL','ПОМИЛКА: Вкажіть URL!');
define('_ERRORNODESCRIPTION','ПОМИЛКА: Заповніть опис для URL!');
define('_NEWLINKADDED','Новий ресурс занесено в базу даних');
define('_YOURLINKAT','Ваш ресурс в');
define('_LINKVALIDATION','Підтвердження ресурсу');
define('_CHECKALLLINKS','Проверить ВСЕ Ссылки');
//define('_VALIDATELINKS','Validate Links');
//define('_FAILED','Failed!');
//define('_BEPATIENT','(please be patient)');
//define('_VALIDATINGCAT','Validating Category (and all subcategories)');
//define('_VALIDATINGSUBCAT','Validating Sub-Category');
?>