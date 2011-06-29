<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com
  CPG-lang (c)2004 Akamu Akamai
  
  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version.
  This program comes without any warranty.
  $Source: /cvs/languages/russian/modules/Downloads/language/lang-russian.php,v $
  $Revision: 1.2 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:41 $
***********************************************************************/
if (!defined('CPG_NUKE')) { die('You do not have permission to access this file'); }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','The download you\'ve requested doesn\'t exists.');
define('_PREVIOUS','Предыдущая страница');
define('_NEXT','Следующая страница');
define('_CATEGORIES','Категории');
define('_LVOTES','голоса');
define('_TOTALVOTES','Всего голосов:');
define('_THEREARE','Сейчас');
define('_NOMATCHES','Ничего не найдено по вашему запросу');
define('_SCOMMENTS','Комментарии');
define('_UNKNOWN','Неизвестное');
define('_AUTHORNAME','Имя автора');
define('_AUTHOREMAIL','Email автора');
define('_DOWNLOADNAME','Название программы');
define('_ADDTHISFILE','Добавить файл');
define('_INBYTES','в байтах');
define('_FILESIZE','Размер файла');
define('_VERSION','Версия');
define('_AUTHOR','Автор');
define('_HOMEPAGE','Домашняя страничка');
define('_DOWNLOADNOW','Загрузить файл');
define('_RATERESOURCE','Голосовать за файл');
define('_FILEURL','Ссылка на файл');
define('_ADDDOWNLOAD','Добавить');
define('_DOWNLOADSMAIN','Главная');
define('_DOWNLOADCOMMENTS','Комментарии');
define('_DOWNLOADSMAINCAT','Главная категория');
define('_ADDADOWNLOAD','Добавить новый файл / программу');
define('_DSUBMITONCE','Будьте внимательны при указании ссылок.');
define('_DPOSTPENDING','Все файлы перед публикацией проверяются.');
define('_RESSORTED','Ресурсы сортируются по');
define('_DOWNLOADSNOTUSER1','Вы не зарегистрированы или не вошли в систему.');
define('_DOWNLOADSNOTUSER2','Зарегистрированные пользователи имеют возможность добавлять файлы.');
define('_DOWNLOADSNOTUSER3','Регистрация пользователя - быстрый и легкий процесс.');
define('_DOWNLOADSNOTUSER4','Почему мы требуем регистрацию пользователя?');
define('_DOWNLOADSNOTUSER5','Итак, мы предлагаем Вам только самое лучшее,');
define('_DOWNLOADSNOTUSER6','каждый пункт индивидуально просмотрен и одобрен нашим персоналом.');
define('_DOWNLOADSNOTUSER7','Мы надеемся, что предлагаем Вам только ценную информацию.');
define('_DOWNLOADSNOTUSER8','<a href="modules.php?name=Your_Account">Зарегистрироваться</a>');
define('_DOWNLOADALREADYEXT','Ошибка: Этот URL уже имеется в наше базе!');
define('_DOWNLOADNOTITLE','Ошибка: Вы должны указать название для вашего файла!');
define('_DOWNLOADNOURL','Ошибка: Вы должны указать арес вашего файла!');
define('_DOWNLOADNODESC','Ошибка: Вы должны указать описание вашей программы / файла!');
define('_DOWNLOADRECEIVED','Спасибо! Мы получили Ваше добавление в наш каталог программ.');
define('_NEWDOWNLOADS','Новое в Downloads');
define('_TOTALNEWDOWNLOADS','Всего нового в Downloads');
define('_DTOTALFORLAST','Всего новых файлов');
define('_DBESTRATED','Лучшие загрузки - лучшие');
define('_TRATEDDOWNLOADS','Всего оцениваемых файлов');
define('_SORTDOWNLOADSBY','Сортировать по');
define('_DCATNEWTODAY','Новые файлы в этой категории, добавленные сегодня');
define('_DCATLAST3DAYS','Новые файлы в этой категории, добавленные за последние 3 дня');
define('_DCATTHISWEEK','Новые файлы в этой категории, добавленные за неделю');
define('_DDATE1','Дата (Сначала показываются старые)');
define('_DDATE2','Дата (Сначала показываются новые)');
define('_DOWNLOADS','Файлы');
define('_DOWNLOADPROFILE','Подробности файла ');
define('_DOWNLOADRATINGDET','Детали рейтинга файлов');
define('_EDITTHISDOWNLOAD','Редактировать файл');
define('_DOWNLOADRATING','Рейтинг файлов');
define('_DOWNLOADVOTE','Голосовать');
define('_DONLYREGUSERSMODIFY','Только зарегистрированные пользователи могут вносить здесь свои изменения. Пожалуйста, <a href="modules.php?name=Your_Account">зарегистрируйтесь или войдите под своим именем</a>.');
define('_REQUESTDOWNLOADMOD','Требуется изменение файла');
define('_DOWNLOADID','ID файла');
define('_DLETSDECIDE','Информация от таких же, как и Вы, пользователей поможет другим пользователям лучше подобрать себе файл.');
define('_DRATENOTE4','Вы можете посмотреть список <a href="modules.php?name=Downloads&amp;d_op=TopRated">Оценки лучших файлов</a>.');
define('_POPULAR','Популярные');
define('_TOPRATED','Лучшие');
define('_ADDITIONALDET','Детали');
define('_EDITORREVIEW','Обзор рецензий');
define('_REPORTBROKEN','Сообщить о недоступном файле');
define('_AND','и');
define('_INDB','в нашей базе');
define('_INSTRUCTIONS','Инструкции');
define('_USERANDIP','Имя пользователя и IP регистрируются.');
define('_LDESCRIPTION','Описание: (не более 255 символов)');
define('_CHECKFORIT','Вы не указали Email, но мы проверим Вашу программу.');
define('_LASTWEEK','Последняя неделя');
define('_LAST30DAYS','Последние 30 дней');
define('_1WEEK','1 неделя');
define('_2WEEKS','2 недели');
define('_30DAYS','30 дней');
define('_ADDEDON','Добавлен');
define('_RATING','Рейтинг');
define('_DETAILS','Детали');
define('_OF','из');
define('_TVOTESREQ','необходимые минимальные голоса');
define('_SHOWTOP','Показать лучшие');
define('_MOSTPOPULAR','Самые популярные - Лучшие');
define('_OFALL','из всех');
define('_POPULARITY','Популярность');
define('_SELECTPAGE','Выбирайте страницу');
define('_MAIN','Главная');
define('_NEWTODAY','Новые сегодня');
define('_NEWLAST3DAYS','Новые за последние 3 дня');
define('_NEWTHISWEEK','Новые на этой неделе');
define('_POPULARITY1','Популярность (от меньшей к большей)');
define('_POPULARITY2','Популярность (от большей к меньшей)');
define('_TITLEAZ','Заголовок (от A до Z)');
define('_TITLEZA','Заголовок (от Z до A)');
define('_RATING1','Оценка (от самых низких оценок к самым высоким)');
define('_RATING2','Оценка (от самых высоких оценок к самым низким)');
define('_SEARCHRESULTS4','Результат поиска для');
define('_USUBCATEGORIES','Подкатегория');
define('_TRY2SEARCH','Поиск');
define('_INOTHERSENGINES','в других поисковых системах');
define('_EDITORIAL','Лучшая статья');
define('_EDITORIALBY','Лучшая статья от');
define('_NOEDITORIAL','В настоящее время нет лучших статей на этом сайте');
define('_RATETHISSITE','Голосовать за файл');
define('_ISTHISYOURSITE','Это Ваш ресурс?');
define('_ALLOWTORATE','Дополнительная возможность увеличить его популярность!');
define('_OVERALLRATING','Общий рейтинг');
define('_TOTALOF','Всего из');
define('_USER','Пользователь');
define('_USERAVGRATING','Средняя оценка пользователей');
define('_NUMRATINGS','# Рейтинга');
define('_REGISTEREDUSERS','Зарегистрированный пользователь');
define('_NUMBEROFRATINGS','Номер в рейтинге');
define('_NOREGUSERSVOTES','Нет голосов зарегистрированных пользователей');
define('_BREAKDOWNBYVAL','Изменить значение рейтинга');
define('_LTOTALVOTES','всего голосов');
define('_HIGHRATING','Наибольший рейтинг');
define('_LOWRATING','Наименьший рейтинг');
define('_NUMOFCOMMENTS','Номер комментария');
define('_WEIGHNOTE','* Примечание: Оценка этого ресурса зарегистрированными пользователями к незарегистрированным');
define('_NOUNREGUSERSVOTES','Нет голосов незарегистрированных пользователей');
define('_WEIGHOUTNOTE','* Примечание: Оценка этого ресурса зарегистрированными пользователями к внешних голосам');
define('_NOOUTSIDEVOTES','Нет внешних оценок');
define('_OUTSIDEVOTERS','Внешние оценки');
define('_UNREGISTEREDUSERS','Незарегистрированные пользователи');
define('_PROMOTEYOURSITE','Возможность увеличить популярность Вашей программы');
define('_PROMOTE01','Вы можете учавствовать в \'Рейтингах\', которые мы имеем в распоряжении. Они позволят Вам устанавливать значок (или даже форму оценки) на Вашем сайте для того, чтобы увеличить количество голосов. Пожалуйста, сделайте выбор:');
define('_TEXTLINK','Текстовая ссылка');
define('_PROMOTE02','Один из способов связаться с оценивающей формой - через простую текстовую ссылку:');
define('_HTMLCODE1','Код HTML, который Вы должны использовать в этом случае:');
define('_THENUMBER','Номер');
define('_IDREFER','в HTML коде, это ID вашего файла в базе данных сайта $sitename. Проверте правильно ли Вы указали данный параметр в HTML коде, иначе голоса отданные Вашей программе достанутся другому.');
define('_BUTTONLINK','Кнопка');
define('_PROMOTE03','Если Вас неустраивает простая текстовая ссылка, то Вы можете использовать небольшую кнопку:');
define('_RATEIT','Голосуй за это!');
define('_HTMLCODE2','Исходный код для вышеуказанной кнопки:');
define('_REMOTEFORM','Форма оценки');
define('_PROMOTE04','Форма оценки прямо на страницах Вашего сайта:');
define('_VOTE4THISSITE','Оцени эту программу');
define('_HTMLCODE3','Использование этой формы позволит оценивать Вашу программу непосредственно со страниц Вашего сайта. Вышеуказанная форма показана только для примера, но следующий исходный код будет работать если Вы скопируете его и вставите на страницы Вашего сайта. Исходный код показан ниже:');
define('_PROMOTE05','Спасибо! И удачи в нашем Рейтинге!');
define('_THANKSBROKEN','Благодарим Вас за помощь в поддержке нашего сайта.');
define('_SECURITYBROKEN','Для обеспечения безопасности Ваше имя и адрес IP также временно будет записан.');
define('_THANKSFORINFO','Спасибо за информацию.');
define('_LOOKTOREQUEST','Мы проверим Вашу информацию.');
define('_SENDREQUEST','Послать просьбу');
define('_THANKSTOTAKETIME','Благодарим Вас за время, потраченное на оценку');
define('_RETURNTO','Вернуться в');
define('_RATENOTE1','Пожалуйста, не голосуйте за один и тот же ресурс неоднократно.');
define('_RATENOTE2','Шкала - 1 - 10, с 1 плохо и 10 отлично.');
define('_RATENOTE3','Пожалуйста, будьте объективным в Вашем голосе, если каждый проголосует 1 или 10, то результаты будут не очень интересны.');
define('_RATENOTE5','Не голосуйте за Ваш собственный ресурс или ресурс конкурента.');
define('_YOUAREREGGED','Вы - зарегистрированный пользователь и вошли.');
define('_FEELFREE2ADD','Не стесняйтесь добавлять комментарий относительно этого сайта.');
define('_YOUARENOTREGGED','Вы не зарегистрированный пользователь или не вошли под своим именем.');
define('_IFYOUWEREREG','Если Вы зарегистрируетесь, то сможете давать комментарии этому ресурсу.');
define('_MODIFY','Изменить');
define('_COMPLETEVOTE1','Ваш голос учтен.');
define('_COMPLETEVOTE2','Вы уже голосовали за этот ресурс $anonwaitdays день(дней) назад.');
define('_COMPLETEVOTE3','Голосуйте за ресурс только один раз.<br>Все голоса регистрируются и рассматриваются.');
define('_COMPLETEVOTE4','Вы не можете голосовать за ссылку, которую Вы предоставили.<br>Все голоса зарегистрированы и рассмотрены.');
define('_COMPLETEVOTE5','Оценка не выбрана - голос не засчитан');
define('_COMPLETEVOTE6','Только один голос с IP адреса разрешен каждый $outsidewaitdays день(дня).');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_EZTRANSFERDOWNLOADS','Transfer all downloads from category');
define('_DELEZDOWNLOADSCATWARNING','WARNING : Are you sure you want to delete this category? You will delete all sub-categories and attached downloads as well!');
define('_DELCONTENTCAT','WARNING: Are you sure you want to delete this category? Pages under this category, if they exist, will not be removed, but will not be attached to any category.');
define('_DELCATEGORY','Delete Category');
define('_DOWNLOADTITLE','Download Title');
define('_DOWNLOADSINDB','Downloads in our Database');
define('_DOWNLOADSWAITINGVAL','Downloads Waiting for Validation');
define('_CLEANDOWNLOADSDB','Clean Downloads Votes');
define('_BROKENDOWNLOADSREP','Broken Downloads Reports');
define('_DOWNLOADMODREQUEST','Download Modification Requests');
define('_ADDNEWDOWNLOAD','Add a New Download');
define('_MODDOWNLOAD','Modify a Download');
define('_WEBDOWNLOADSADMIN','Web Downloads Administration');
define('_DNOREPORTEDBROKEN','No reported broken downloads.');
define('_DUSERREPBROKEN','User Reported Broken Downloads');
define('_DIGNOREINFO','Ignore (Deletes all <b><i>requests</i></b> for a given download)');
define('_DDELETEINFO','Delete (Deletes <b><i>broken download</i></b> and <b><i>requests</i></b> for a given download)');
define('_DOWNLOADOWNER','Download Owner');
define('_DUSERMODREQUEST','User Download Modification Requests');
define('_DOWNLOADVALIDATION','Download Validation');
define('_CHECKALLDOWNLOADS','Check ALL Downloads');
define('_VALIDATEDOWNLOADS','Validate Downloads');
define('_NEWDOWNLOADADDED','New Download added to the Database');

