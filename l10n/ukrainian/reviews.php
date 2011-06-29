<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/ukrainian/reviews.php,v $
  $Revision: 9.5 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:40:07 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
define('_YOURNAME','Ваше ім\'я');
define('_SORTASC','Сортувати по зростанню');
define('_SORTDESC','Сортувати по спаданню');
define('_CANCEL','Відмінити');
define('_SCORE','Оцінка:');
define('_REPLYMAIN','Надіслати коментар');
define('_ALLOWEDHTML','Дозволені HTML-теги:');
define('_POSTANON','Відправлено анонімно');
define('_WRITEREVIEW','Написати огляд');
define('_WRITEREVIEWFOR','Написати огляд про');
define('_ENTERINFO','Введіть інформацію по специфіці теми');
define('_PRODUCTTITLE','Назв');
define('_NAMEPRODUCT','Назва проглянутого.');
define('_REVIEW','Огляд');
define('_CHECKREVIEW','Ваш огляд. Будь ласка, не допускайте граматических помилок! Також ви можете використовувати HTML-теги.');
define('_FULLNAMEREQ','Ваше ім\'я і прізвище. Обов\'язково.');
define('_REMAIL','Ваш Email');
define('_REMAILREQ','Ваш Email адрес. Обов\'язково.');
define('_SELECTSCORE','Оцінка ');
define('_RELATEDLINK','Схожі ресурси');
define('_PRODUCTSITE','Офіційний сайт. Перевірте щоб ваш URL починався з "http://"');
define('_LINKTITLE','Назва ресурсу');
define('_LINKTITLEREQ','Потрібно, якщо є схожі ресурси.');
define('_RIMAGEFILE','Ім\'я файлу малюнка');
define('_RIMAGEFILEREQ','Назва файла, розмыщеного в images/reviews/. Не обов\'язково.');
define('_CHECKINFO','Будь ласка, переконайтесь,що введена вами ынформацыя вырна на 100%. Не вводьте ваш текст ВЕЛИКИМИ БУКВАМИ, це буде забраковано.');
define('_INVALIDTITLE','Назва неправильна (не може бути пустою).');
define('_INVALIDSCORE','Неправильна оцінка (від 1 до 10)');
define('_INVALIDTEXT','Заповніть текст огляду.');
define('_INVALIDHITS','Число хітів повинно бути додатнім.');
define('_CHECKNAME','Ви не вказали ваше ім\'я і email.');
define('_INVALIDEMAIL','Неправильний email.');
define('_INVALIDLINK','Ви повинні заповнити ОБИДВА поля або залишити їх пустими.');
define('_ADDED','Доданий:');
define('_REVIEWER','Оглядач:');
define('_REVIEWID','ID огляду');
define('_LOOKSRIGHT','Все виглядає правильно?');
define('_RMODIFIED','модифіковано');
define('_RADDED','додано');
define('_ADMINLOGGED','Ви зареєстровані як Адмін. Це огляд буде негайно опублікований.');
define('_RTHANKS','Дякуємо за написання огляду!');
define('_MODIFICATION','зміни');
define('_ISAVAILABLE','Це тепер доступно в базі оглядів.');
define('_EDITORWILLLOOK','Редактори переглянуть вашу статтю. Вона буде опублікована якнайшвидше.');
define('_RBACK','Назад в список оглядів');
define('_RWELCOME','Ласкаво просимо в список оглядів');
define('_10MOSTPOP','10 самих популярних оглядів');
define('_10MOSTREC','10 самих останніх оглядів');
define('_THEREARE','');
define('_REVIEWSINDB','Оглядів в базі даних');
define('_REVIEWSLETTER','Огляди листів');
define('_NOREVIEWS','Оглядів листів немає');
define('_TOTALREVIEWS','оглядів знайдено всього.');
define('_RETURN2MAIN','Назад в головне меню');
define('_REVIEWCOMMENT','Коментарі огляду:');
define('_YOURNICK','Ваше ім\'я:');
define('_RCREATEACCOUNT','<a href="'.getlink("Your_Account").'">створіть</a> рахунок');
define('_YOURCOMMENT','Ваш коментар:');
define('_MYSCORE','Моя оцінка:');
define('_REVIEWMOD','Попередній перегляд змін');
define('_RDATE','Дата:');
define('_RTITLE','Назва:');
define('_RTEXT','Текст:');
define('_REVEMAIL','Email:');
define('_RLINK','Ресурс:');
define('_RLINKTITLE','Назва ресурсу:');
define('_COVERIMAGE','Малюнок:');
define('_PREMODS','Попередній перегляд змін');
define('_PAGE','Сторінка');
define('NO_GET','Please use our form as no GET requests are allowed');

/**************************
  ADMNINISTRATION SECTION
**************************/

define('_REVADMIN','Адміністрування оглядів');
define('_REVTITLE','Назва оглядів');
define('_REVDESC','Опис оглядів');
define('_REVWAITING','Огляди, що очікують підтвердження');
define('_REVIMGINFO','Збережіть малюнок 150*150 в images/reviews');
define('_NOREVIEW2ADD','Немає нових оглядів');
define('_ADDREVIEW','Додати огляд');
define('_CLICK2ADDREVIEW','Напишіть огляд');
define('_DELMODREVIEW','Витерти/Змінити огляд');
define('_MODREVINFO','Ви можете витирати/редагувати <a href="'.getlink('Reviews').'">огляди</a> переглядаючи їх як адмін..');
