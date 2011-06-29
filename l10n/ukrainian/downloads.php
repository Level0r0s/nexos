<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/ukrainian/downloads.php,v $
  $Revision: 9.7 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:40:07 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','The download you\'ve requested doesn\'t exists.');
define('_CATEGORIES','категорій');
define('_LVOTES','голосів');
define('_TOTALVOTES','Всього голосів:');
define('_THEREARE','Зараз');
define('_NOMATCHES','За Вашим запитом нічого не знайдено');
define('_SCOMMENTS','коментарі');
define('_UNKNOWN','Невідомі');
define('_AUTHORNAME','Ім\'я автора');
define('_AUTHOREMAIL','Email автора');
define('_DOWNLOADNAME','Ім\'я програми');
define('_ADDTHISFILE','Додати цей файл');
define('_INBYTES','в байтах');
//define('_FILESIZE','Розмір');
//define('_VERSION','Версія');
//define('_AUTHOR','Автор');
define('_HOMEPAGE','Домашня сторінка');
define('_DOWNLOADNOW','Завантажте цей файл зараз!');
define('_RATERESOURCE','Рейтинг');
define('_FILEURL','Посилання на файл');
define('_ADDDOWNLOAD','Додати файл');
define('_DOWNLOADSMAIN','Головна ДомівкаSoft');
define('_DOWNLOADCOMMENTS','Коментарі до файлів');
define('_DOWNLOADSMAINCAT','Головні категорії файлів');
define('_ADDADOWNLOAD','Інструкції');
define('_DSUBMITONCE','Повідомляйте тільки унікальний шлях до файлів');
define('_DPOSTPENDING','Всі файли проходять перевірку');
define('_RESSORTED','Вы не указали Email, но мы проверим Вашу программу.');
define('_DOWNLOADSNOTUSER1','Ви незареєстрований користувач, або ви не ввійшли в систему.');
define('_DOWNLOADSNOTUSER2','Тільки зареєстровані користувачі можуть додавати файли на сайт.');
define('_DOWNLOADSNOTUSER3','Зареєструйтесь! Це швидко і безболісно!');
define('_DOWNLOADSNOTUSER4','Чому ми вимагаємо реєстрації для доступу до певних розділів?');
define('_DOWNLOADSNOTUSER5','Так ми зможем запропонувати вам тільки найкраще,');
define('_DOWNLOADSNOTUSER6','всі файли пройдуть індивідуальну перевірку нашим персоналом.');
define('_DOWNLOADSNOTUSER7','Ми хочемо запропонувати вам тільки цінну інформацію.');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink("Your_Account").'">Зареєструйтесь</a>');
define('_DOWNLOADALREADYEXT','ПОМИЛКА: Цей URL уже є в базі даних!');
define('_DOWNLOADNOTITLE','ПОМИЛКА: Вам потрібно вказати НАЗВУ вашого!');
define('_DOWNLOADNOURL','ПОМИЛКА: Вам потрібно вказати ваш URL!');
define('_DOWNLOADNODESC','ПОМИЛКА: Вам треба зробити ОПИС вашого URL!');
define('_DOWNLOADRECEIVED','Ми отримали ваш файл, дякуємо!');
define('_NEWDOWNLOADS','Нові');
define('_TOTALNEWDOWNLOADS','Всього');
define('_DTOTALFORLAST','Всього нових файлів');
define('_DBESTRATED','Найкращі завантаження - краші');
define('_TRATEDDOWNLOADS','загальна оцінка файлів');
define('_SORTDOWNLOADSBY','Файли відсортовані по');
define('_DCATNEWTODAY','Новые за последние 3 дня');
define('_DCATLAST3DAYS','Новые на этой неделе');
define('_DCATTHISWEEK','Популярность (от меньшей к большей)');
define('_DDATE1','Популярность (от большей к меньшей)');
define('_DDATE2','Заголовок (от A до Z)');
define('_DOWNLOADS','завантажень');
define('_DOWNLOADPROFILE','Профіль файлу');
define('_DOWNLOADRATINGDET','Детальна оцінка файлу');
define('_EDITTHISDOWNLOAD','Редагувати файл');
define('_DOWNLOADRATING','Оцінка файлів');
define('_DOWNLOADVOTE','Проголосувати!');
define('_DONLYREGUSERSMODIFY','<a href="'.getlink("Your_Account").'">в других поисковых системах</a>');
define('_REQUESTDOWNLOADMOD','Запит на модифікацію файлу');
define('_DOWNLOADID','ID файлу');
define('_DLETSDECIDE','В настоящее время нет лучших статей на этом сайте');
define('_DRATENOTE4','Ви можете проглянути список <a href="'.getlink("Downloads&amp;d_op=TopRated").'">Рейтингу ресурсів</a>.');
define('_POPULAR','Популярні');
define('_TOPRATED','Кращі');
define('_ADDITIONALDET','Статистика');
define('_EDITORREVIEW','Огляди');
define('_REPORTBROKEN','Повідомити про неробочий ресурс');
define('_AND','і');
define('_INDB','в нашій базі даних');
define('_INSTRUCTIONS','Інструкції');
define('_USERANDIP','Не треба декілька разів додавати один і той же ресурс.');
define('_LDESCRIPTION','Опис: (максимум 255 символів)');
define('_CHECKFORIT','Після перевірки ресурс буде опубліковано в каталозі.');
define('_LASTWEEK','За останній тиждень');
define('_LAST30DAYS','За останні 30 днів');
define('_1WEEK','1 тиждень');
define('_2WEEKS','2 тижні');
define('_30DAYS','30 днів');
define('_ADDEDON','Дата');
define('_RATING','Рейтинг');
define('_DETAILS','Статистика');
define('_OF','із');
define('_TVOTESREQ','необхідний мінімум голосів');
define('_SHOWTOP','Показати найкращі');
define('_MOSTPOPULAR','Популярні ресурси');
define('_OFALL','всі');
define('_POPULARITY','Популярність');
define('_SELECTPAGE','Вибрати сторінку');
define('_MAIN','Головна');
define('_NEWTODAY','Сьогоднішні новинки');
define('_NEWLAST3DAYS','Новинки за останні три дні');
define('_NEWTHISWEEK','Новинки тижня');
define('_POPULARITY1','найпопулярніші в кінець');
define('_POPULARITY2','найпопулярніні на початок');
define('_TITLEAZ','за назвою (від A до Я)');
define('_TITLEZA','за назвою (від Я до А)');
define('_RATING1','найкращі в кінець');
define('_RATING2','найкращі на початок');
define('_SEARCHRESULTS4','Результати пошуку');
define('_USUBCATEGORIES','Підрозділи');
define('_TRY2SEARCH','Спробуйте пошукати');
define('_INOTHERSENGINES','в інших пошукових машинах');
define('_EDITORIAL','Огляд');
define('_EDITORIALBY','Огляд від');
define('_NOEDITORIAL',' Для цього сайту немає оглядів.');
define('_RATETHISSITE','Оцініть цей ресурс ');
define('_ISTHISYOURSITE','Це ваш ресурс?');
define('_ALLOWTORATE','Дозвольте відвідувачам інших сайтів його оцінити!');
define('_OVERALLRATING','Загальний рейтинг');
define('_TOTALOF','Всього');
define('_USER','Користувача');
define('_USERAVGRATING','Середній рейтинг користувача');
define('_NUMRATINGS','# рейтинги');
define('_REGISTEREDUSERS','Оцінки зареєстрованих користувачів');
define('_NUMBEROFRATINGS','Номер рейтингу');
define('_NOREGUSERSVOTES','Немає голосів зареєстрованих користувачів');
define('_BREAKDOWNBYVAL','Розподіл голосів');
define('_LTOTALVOTES','загальна кількість голосів');
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
define('_PROMOTE02','Один зі способів зв\'язатися з формою для оцінки - через просте текстове посилання:');
define('_HTMLCODE1','HTML-код для голосування:');
define('_THENUMBER','Ваш ID');
define('_IDREFER','Перевірте наявність ID вашого сайту в HTML коді.');
define('_BUTTONLINK','Кнопка');
define('_PROMOTE03','Якщо Вас не влаштовує просте текстове посилання, то Ви можете використовувати невелику кнопку:');
define('_RATEIT','Оціни цей сайт!');
define('_HTMLCODE2','Вихідний код для кнопки:');
define('_REMOTEFORM','Форма для оцінки');
define('_PROMOTE04','Форма оцінки прямо на сторінках Вашого сайту:');
define('_VOTE4THISSITE','Проголосуй за цей сайт!');
define('_HTMLCODE3','Використання цієї форми дозволить відвідувачам вашого сайту проголосувати за нього безпосередньо на вашому сайті. Приведена форма неробоча, для її використання скористайтесь HTML-кодом. Просто вставте його в свою веб-сорінку.:');
define('_PROMOTE05','Успіхів вашому сайту!');
define('_THANKSBROKEN','Якщо цей сайт більше не існує, або його зміст не відповідає опису в каталозі<br> натисніть кнопку і модератор перевірить цей ресурс.');
define('_SECURITYBROKEN','Для забезпечення безпеки Ваше ім\'я й адреса ІP також тимчасово будуть записані.');
define('_THANKSFORINFO','Дякуємо за інформацію.');
define('_LOOKTOREQUEST','Ми перевіримо ваш запит якомога швидше.');
define('_SENDREQUEST','Надіслати запит');
define('_THANKSTOTAKETIME','Дякуємо вам за те, що ви знайшли час оцінити сайт');
define('_RETURNTO','Повернутись на ');
define('_RATENOTE1','Будь ласка, не голосуйте за один ресурс двічі.');
define('_RATENOTE2','Шкала від 1 до 10. 1 - дуже погано і 10 - прекрасно.');
define('_RATENOTE3','Будь ласка, будьте об\'єктивні при голосуванні.');
define('_RATENOTE5','Не треба голосувати за свій власний ресурс.');
define('_YOUAREREGGED','Ви зареєстрований відвідувач і ввійшли як');
define('_FEELFREE2ADD','Відчувайте себе вільно при написанні коментарів про цей сайт.');
define('_YOUARENOTREGGED','Ви - незареєстрований відвідувач або не ввійшли в систему.');
define('_IFYOUWEREREG','Коментарі на цей сайт можуть відправляти тільки зареєстровані відвідувачі.');
define('_MODIFY','Змінити');
define('_COMPLETEVOTE1','Ваш голос врахований.');
define('_COMPLETEVOTE2','Ви вже голосували за цей ресурс $anonwaitdays день(днів) назад.');
define('_COMPLETEVOTE3','Голосуйте за ресурс тільки один раз<br>Усі голоси реєструються і розглядаються.');
define('_COMPLETEVOTE4','Ви не можете голосувати за посилання, що Ви надали<br>Усі голоси зареєстровані і розглянуті.');
define('_COMPLETEVOTE5','Оцінка не обрана - голос не зарахований');
define('_COMPLETEVOTE6','Тільки один голос з ІP адреси дозволений кожен $outsidewaitdays день(дня).');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDDURL','Add this URL');
define('_EZTRANSFERDOWNLOAD','Transfer');
define('_EZTRANSFERDOWNLOADS','Transfer all downloads from category');
define('_DELEZDOWNLOADSCATWARNING','WARNING : Are you sure you want to delete this category? You will delete all sub-categories and attached downloads as well!');
define('_DELCONTENTCAT','WARNING: Are you sure you want to delete this category? Pages under this category, if they exist, will not be removed, but will not be attached to any category.');
define('_DELCATEGORY','Delete Category');
define('_DOWNLOADTITLE','Назва програми');
define('_DOWNLOADSINDB','Файлів в базі даних');
define('_DOWNLOADSWAITINGVAL','Файли, що очікують на публікацію');
define('_CLEANDOWNLOADSDB','Очистити голосування');
define('_BROKENDOWNLOADSREP','Повідомлення про пошкоджені файли');
define('_DOWNLOADMODREQUEST','Запити на зміну файлів');
define('_ADDNEWDOWNLOAD','Додати новий файл');
define('_MODDOWNLOAD','Змінити файл');
define('_WEBDOWNLOADSADMIN','Адміністрування файлів');
define('_DNOREPORTEDBROKEN','No reported broken downloads.');
define('_DUSERREPBROKEN','User Reported Broken Downloads');
define('_DIGNOREINFO','Ignore (Deletes all <b><i>requests</i></b> for a given download)');
define('_DDELETEINFO','Delete (Deletes <b><i>broken download</i></b> and <b><i>requests</i></b> for a given download)');
define('_DOWNLOADOWNER','Власник файлу');
define('_DUSERMODREQUEST','User Download Modification Requests');
define('_DOWNLOADVALIDATION','Підтвердження файлу');
define('_CHECKALLDOWNLOADS','Перевірити ВСІ файли');
define('_VALIDATEDOWNLOADS','Підтвердити файли');
define('_NEWDOWNLOADADDED','Новий файл добавлено в базу даних');
