<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/bulgarian/reviews.php,v $
  $Revision: 9.5 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:49 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
define('_YOURNAME','Вашето Име');
define('_SORTASC','Сортирай по Възходящ Ред');
define('_SORTDESC','Сортирай по Низходящ Ред');
define('_CANCEL','Отмяна');
define('_SCORE','Резултат:');
define('_REPLYMAIN','Публикуване на Коментар');
define('_ALLOWEDHTML','Разрешен HTML:');
define('_POSTANON','Публикуване като Анонимно');
define('_WRITEREVIEW','Писане на Рецензия');
define('_WRITEREVIEWFOR','Писане на Рецензия за');
define('_ENTERINFO','Моля, въведете информация, съобразно спецификациите');
define('_PRODUCTTITLE','Име на Продукт');
define('_NAMEPRODUCT','Име на Разглеждания Продукт.');
define('_REVIEW','Рецензия');
define('_CHECKREVIEW','Вашата актуална рецензия. Моля, спазвайте правилната граматика! Напишете не по-малко от 100 думи! Също така, можете да използвате HTML етикети, ако знаете как да ги употребявате.');
define('_FULLNAMEREQ','Вашето Пълно Име. Задължително.');
define('_REMAIL','Вашият E-M@IL');
define('_REMAILREQ','Вашият E-M@IL адрес. Задължително.');
define('_SELECTSCORE','Резултат на Този Продукт');
define('_RELATEDLINK','Връзка');
define('_PRODUCTSITE','Официален Сайт на Продукта. Уверете се, че URL започва с "http://"');
define('_LINKTITLE','Заглавие на Връзката');
define('_LINKTITLEREQ','Задължително, ако притежавате Връзка, иначе не е задължително.');
define('_RIMAGEFILE','Файл за Изображение');
define('_RIMAGEFILEREQ','Името на изсквания фаий се намира в  images/reviews/. Не е задължително.');
define('_CHECKINFO','Моля, убедете се, че въведената информация е 100% действителна и използвате правилни граматика и главни букви. За илюстрация, моля, не въвеждайте Вашият текст в ALL CAPS, след което това трябва да бъде отхвърлено.');
define('_INVALIDTITLE','Невалидно Заглавие... Не трябва да е празно');
define('_INVALIDSCORE','Невалиден Резултат... Трябва да бъде в интервала от 1 до 10');
define('_INVALIDTEXT','Невалиден Текст на Рецензия... Не трябва да е празно');
define('_INVALIDHITS','Посещенията трябва да са положително число');
define('_CHECKNAME','Трябва да въведете и двете - Вашето име и Вашият E-M@IL');
define('_INVALIDEMAIL','Невалиден E-M@IL (пример: you@informator.org)');
define('_INVALIDLINK','Трябва да въведете и ДВЕТЕ - име на връзка и самта връзка или разрешените две полета');
define('_ADDED','Добавил:');
define('_REVIEWER','Рецензент:');
define('_REVIEWID','ID на Рецензия');
define('_LOOKSRIGHT','Считате ли това за правилно?');
define('_RMODIFIED','промяна');
define('_RADDED','добавяне');
define('_ADMINLOGGED','Текущото Ви включване е като Администратор... тази рецензия ще бъде незабавно публикувана');
define('_RTHANKS','Благодарим Ви, за това, че изпратихте тази рецензия');
define('_MODIFICATION','изменение');
define('_ISAVAILABLE','Вашата Рецензия е включена в Базата от Данни за Рецензии.');
define('_EDITORWILLLOOK','Редакторът ще разгледа това което сте изпратили. Много скоро рецензията ще бъде достъпна за останалите!');
define('_RBACK','Обратно в Указателя за Рецензии');
define('_RWELCOME','Добре дошли в Секция Рецензии');
define('_10MOSTPOP','10 най-популярни рецензии');
define('_10MOSTREC','10 най-нови рецензии');
define('_THEREARE','Има');
define('_REVIEWSINDB','Рецензии в Базата от Данни');
define('_REVIEWSLETTER','Рецензии за буква');
define('_NOREVIEWS','Няма каквато и да е Рецензия за буква');
define('_TOTALREVIEWS','Налични Рецензии.');
define('_RETURN2MAIN','Връщане в Главното Меню');
define('_REVIEWCOMMENT','Коментар на Рецензия:');
define('_YOURNICK','Вашият Псевдоним:');
define('_RCREATEACCOUNT','<a href="'.getlink("Your_Account").'">Създайте</a> акаунт');
define('_YOURCOMMENT','Вашият Коментар:');
define('_MYSCORE','Моят Резултат:');
define('_REVIEWMOD','Промяна на Рецензия');
define('_RDATE','Дата:');
define('_RTITLE','Заглавие:');
define('_RTEXT','Текст:');
define('_REVEMAIL','E-M@IL:');
define('_RLINK','Връзка:');
define('_RLINKTITLE','Заглавие на Връзка:');
define('_COVERIMAGE','Изображение:');
define('_PREMODS','Предварителен преглед на Промените');
define('_PAGE','Страница');
define('NO_GET','Please use our form as no GET requests are allowed');

/**************************
  ADMNINISTRATION SECTION
**************************/

define('_REVADMIN','Reviews Administration');
define('_REVTITLE','Reviews Page Title');
define('_REVDESC','Reviews Page Description');
define('_REVWAITING','Reviews Waiting for Validation');
define('_REVIMGINFO','Store your 150*150 image in images/reviews');
define('_NOREVIEW2ADD','No reviews to add');
define('_ADDREVIEW','Add Review');
define('_CLICK2ADDREVIEW','Click here to write a review');
define('_DELMODREVIEW','Delete / Modify a review');
define('_MODREVINFO','You can simply delete/modify reviews by browsing <a href="'.getlink('Reviews').'">Reviews</a> as Admin.');
