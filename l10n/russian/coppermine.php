<?php
/*********************************************
   Coppermine 1.3.1 for CPG Dragonfly™
  ********************************************
   Port Copyright © 2004-2006 CPG-Nuke Dev Team
  http://dragonflycms.org
  ********************************************
   v1.1 (c) by Grégory Demar http://coppermine.sf.net/
   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.
  ********************************************
  $Source: /cvs/l10n/russian/coppermine.php,v $
  $Revision: 9.8 $
  $Author: nanocaiordo $
  $Date: 2008/02/16 05:53:31 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Views');//new in 1.2.2nuke
define('PIC_VOTES', 'Votes');//new in 1.2.2nuke
define('PIC_COMMENTS', 'Comments');//new in 1.2.2nuke

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Russian');
define('LANG_NAME_NATIVE', 'Русский');
define('LANG_COUNTRY_CODE', 'ru');
define('TRANS_NAME', 'Israelin');
define('TRANS_EMAIL', 'admin@mdforum.dynu.com');
define('TRANS_WEBSITE', 'http://mdforum.dynu.com');
define('TRANS_DATE', '2004-05-28');
define('CHARSET', 'utf-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Да');
define('NO', 'Нет');
// some common strings
define('BACK', 'Назад');
define('CONTINU', 'Вперед');
//define('INFO', 'Информация');
define('ERROR', 'Ошибка');
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%m/%d/%y at %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y at %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y at %I:%M %p');

// lang_meta_album_names
define('RANDOM', 'Случайные изображения');
define('LASTUP', 'Последний добавления');
define('LASTUPBY', 'Мои последние добавления');
define('LASTALB', 'Последнее обновление альбома');
define('LASTCOM', 'Последние комментарии');
define('LASTCOMBY', 'Мои последние комментарии');
define('TOPN', 'Часто просматриваемые');
define('TOPRATED', 'Лучшие по рейтингу');
define('LASTHITS', 'Последние просмотренные');
define('SEARCH', 'Результаты поиска');
define('FAVPICS', 'Избранные');

// lang_errors
define('ACCESS_DENIED', 'У Вас нет доступа сюда.');
define('PERM_DENIED', 'Нет доступа для выполнения команды.');
define('PARAM_MISSING', 'Скрипт был вызван без необходимых параметров.');
define('NON_EXIST_AP', 'Выбранный альбом/изображение не существует !');
define('QUOTA_EXCEEDED', 'Ваше место закончилось<br /><br />Ваща квота составляет [quota]K, Вы уже используете [space]K, добавление этого изображения может превысить Вашу квоту.');
define('GD_FILE_TYPE_ERR', 'При использовании библиотеки GD image разрешено использовать только типы JPEG и PNG.');
define('INVALID_IMAGE', 'Загружаемое Вами изображение повреждено или не соответствует типам изображений библиотеки GD.');
define('RESIZE_FAILED', 'Невозможно подготовить эскиз или изменить размер изображения.');
define('NO_IMG_TO_DISPLAY', 'Изображений нет');
define('NON_EXIST_CAT', 'Выбранная категория не существует');
define('ORPHAN_CAT', 'Категория не имеет родительскую категорию, используйте менеджер категорий для решения проблемы.');
define('DIRECTORY_RO', 'В категорию \'%s\' невозможна запись, изображение не может быть удалено.');
define('NON_EXIST_COMMENT', 'Выбранный Вами комментарий не существует.');
define('PIC_IN_INVALID_ALBUM', 'Изображение  находится в несуществующем альбоме (%s)!?');
define('BANNED', 'Вы забанены на этом сайте.');
define('NOT_WITH_UDB', 'Эта функция выключена в Coppermine, потому, что объединена с форумом. Или то, что вы пытаетесь сделать, не поддерживается в этой конфигурации, или эта функция должна быть обработана форумом.');
define('MEMBERS_ONLY', 'Это действие разрешено только зарегистрированным пользователям, пожалуйста, зарегистрируйтесь.');
define('MUSTBE_GOD', 'Это действие разрешено только администраторам сайта. Вы должны быть зарегистрированы как суперамин или как админинстратор сайта');
define('NO_IMG_TO_APPROVE', 'No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE', 'К списку альбомов');
define('ALB_LIST_LNK', 'Список альбомов');
define('MY_GAL_TITLE', 'Перейти к моей личной галерее');
define('MY_GAL_LNK', 'Моя галерея');
define('MY_PROF_LNK', 'Настройки');
define('MY_PROF_TITLE','Проверьте дисковую квоту и группы');
define('ADM_MODE_TITLE', 'Включить режим админа');
define('ADM_MODE_LNK', 'Режим админа');
define('USR_MODE_TITLE', 'Включить режим пользователя');
define('USR_MODE_LNK', 'Режим пользователя');
define('UPLOAD_PIC_TITLE', 'Загрузить изображение в данный альбом');
define('UPLOAD_PIC_LNK', 'Загрузить изображение');
define('REGISTER_TITLE', 'Создать аккунт');
define('REGISTER_LNK', 'Зарегистрироваться');
define('LOGIN_LNK', 'Войти');
define('LOGOUT_LNK', 'Выйти');
define('LASTUP_LNK', 'Последние закачки');
define('LASTUP_TITLE', 'Изображения, загруженные недавно');
define('LASTCOM_TITLE',  'Изображения в порядке последних комментариев к ним');
define('LASTCOM_LNK',  'Последние комментарии');
define('TOPN_TITLE', 'Изображения, отмеченные больше всего');
define('TOPN_LNK', 'Самые популярные');
define('TOPRATED_TITLE', 'Изображения с высшим рейтингом');
define('TOPRATED_LNK',  'Лучшие по рейтингу');
define('SEARCH_TITLE', 'Search Photo Collection');
define('SEARCH_LNK', 'Поиск');
define('FAV_TITLE', 'My Favorites');
define('FAV_LNK', 'Избранные');
define('HELP_TITLE', 'HELP');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Загрузить выбранное');
define('CONFIG_LNK', 'Конфигурирование');
define('ALBUMS_LNK', 'Альбомы');
define('CATEGORIES_LNK', 'Категории');
define('USERS_LNK', 'Пользователи');
define('GROUPS_LNK', 'Группы');
define('COMMENTS_LNK', 'Комментарии');
define('SEARCHNEW_LNK', 'Мультиимпорт');
define('UTIL_LNK', 'Изменить размер');
define('BAN_LNK', 'Бан пользователей');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Менеджер');
define('MODIFYALB_LNK', 'Редактирование');
define('MY_PROF_LNK', 'Профиль');

// lang_cat_list
define('CATEGORY', 'Категория');
define('ALBUMS', 'Альбомы');
define('PICTURES', 'Изображения');

// lang_album_list
define('ALBUM_ON_PAGE', '%d альбомов на %d страницах');
// lang_thumb_view
define('DATE', 'Дата');
define('NAME', 'Имя файла');
define('TITLE', 'Названиее');
define('SORT_DA', 'Сортировка по дате (возрастание)');
define('SORT_DD', 'Сортировка по дате (убывание)');
define('SORT_NA', 'Сортировка по имени (возрастание)');
define('SORT_ND', 'Сортировка по имени (убывание)');
define('SORT_TA', 'Сортировка по названию (возрастание)');
define('SORT_TD', 'Сортировка по названию (убывание)');
define('PIC_ON_PAGE', '%d изображений на %d странице(ах)');
define('USER_ON_PAGE', '%d пользователей на %d странице(ах)');
define('SORT_RA', 'Сортировка по рейтингу (возрастание)');
define('SORT_RD', 'Сортировка по рейтингу (убывание)');
define('RATING', 'РЕЙТИНГ');
define('SORT_TITLE', 'Сортировка изображений по:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Вернуться к странице эскизов');
define('PIC_INFO_TITLE', 'Показать/скрыть информацию об изображении');
define('SLIDESHOW_TITLE', 'Слайд-шоу');
define('SLIDESHOW_DISABLED', 'Слайд-шоу отключено');
define('SLIDESHOW_DISABLED_MSG', 'Это действие разрешено только зарегистрированным пользователям, пожалуйста, зарегистрируйтесь.');
define('ECARD_TITLE', 'Послать это изображение как открытку');
define('ECARD_DISABLED', 'Возможность отправки открыток отключена');
define('ECARD_DISABLED_MSG', 'У Вас нет прав отсылать открытки');
define('PREV_TITLE', 'Посмотреть предыдушее изображение');
define('NEXT_TITLE', 'Посмотреть следующее изображение');
define('PIC_POS', 'Изображение %s/%s');
define('NO_MORE_IMAGES', 'В этой галерее нет больше изображений');
define('NO_LESS_IMAGES', 'Первое изображение в этой галерее');

// lang_rate_pic
define('RATE_THIS_PIC', 'Оценить изображение (звездочки)');
define('NO_VOTES', '(Никто не проголосовал)');
define('RATING', '(На данный момент : %s / 5 с %s голосом(ами))');
define('RUBBISH', 'Мусор');
define('POOR', 'Плохо');
define('FAIR', 'Средне');
define('GOOD', 'Хорошо');
define('EXCELLENT', 'Отлично');
define('GREAT', 'Великолепно!');

// lang_cpg_die
//define('INFORMATION', 'Информация');
//define('ERROR', 'Ошибка');
define('CRITICAL_ERROR', 'Критическая ошибка');
define('FILE', 'Файл: ');
define('LINE', 'Строка: ');

// lang_display_thumbnails
define('FILENAME', 'Имя файла : ');
define('FILESIZE', 'Размер файла : ');
define('DIMENSIONS', 'Расширение : ');
define('DATE_ADDED', 'Дата добавления : ');

// lang_get_pic_data
define('N_COMMENTS', '%s комментариий(ев)');
define('N_VIEWS', '%s просмотр(а,ов)');
define('N_VOTES', '(%s голос(а,ов))');


// lang_albmgr_php
define('ALB_NEED_NAME', 'У альбома должно быть имя!');
define('CONFIRM_MODIFS', 'Вы действительно хотите сделать эти изменения?');
define('NO_CHANGE', 'Вы не сделали никаких изменений!');
define('NEW_ALBUM', 'Новый альбом');
define('CONFIRM_DELETE1', 'Вы действительно хотите удалить этот альбом?');
define('CONFIRM_DELETE2', '\\nВсе изображения и комментарии будут утеряны!');
define('SELECT_FIRST', 'Сначала выберете альбом');
define('ALB_MRG', 'Управление альбомами');
define('MY_GALLERY', '* Моя галерея *');
define('NO_CATEGORY', '* Категорий нет *');
define('DELETE', 'Удалить');
define('NEW', 'Новый');
define('APPLY_MODIFS', 'Произвести изменения');
define('SELECT_CATEGORY', 'Выбрать категорию');

// lang_catmgr_php
define('MISS_PARAM', 'Параметры, затребованные для \'%s\'операции не поддерживаются!');
define('UNKNOWN_CAT', 'Выбранная категория не существует в базе данных');
define('USERGAL_CAT_RO', 'Пользовательские категории не могут быть удалены!');
define('MANAGE_CAT', 'Управление категориями');
define('CONFIRM_DELETE', 'Вы уверены, что хотите удалить эту категорию?');
//define('CATEGORY', 'Категория');
define('OPERATIONS', 'Операции');
define('MOVE_INTO', 'Переместить в');
define('UPDATE_CREATE', 'Создание/изменение категории');
define('PARENT_CAT', 'Родительская категория');
define('CAT_TITLE', 'Заголовок категории');
define('CAT_DESC', 'Описание категории');

// lang_config_php
define('TITLE', 'Конфигурация');
define('RESTORE_CFG', 'Восстановить настройки по умолчанию');
define('SAVE_CFG', 'Сохранить изменения');
define('NOTES', 'Заметки');
//define('INFO', 'Информация');
define('UPD_SUCCESS', 'Конфигурация Coppermine изменена');
define('RESTORE_SUCCESS', 'Настройки Coppermine по умолчанию восстановлены');
define('NAME_A', 'Имя по возрастанию');
define('NAME_D', 'Имя по убыванию');
define('TITLE_A', 'Заголовок по возрастанию');
define('TITLE_D', 'Заголовок по убыванию');
define('DATE_A', 'Дата по возрастанию');
define('DATE_D', 'Дата по убыванию');
define('RATING_A', 'Рейтинг по возрастанию');
define('RATING_D', 'Рейтинг по убыванию');
define('TH_ANY', 'Максимальный аспект');
define('TH_HT', 'Высота');
define('TH_WD', 'Ширина');


// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Вам нужно ввести Ваше имя и комментарий');
define('COM_ADDED', 'Комментарий добавлен');
define('ALB_NEED_TITLE', 'Вы должны дать название для альбома!');
define('NO_UDP_NEEDED', 'Никаких изменений не требуется.');
define('ALB_UPDATED', 'Альбом изменён');
define('UNKNOWN_ALBUM', 'Выбранный альбом не существует или у Вас нет прав на загрузку изображений в этот альбом');
define('NO_PIC_UPLOADED', 'Изображение не загружено !<br /><br />Если Вы выбрали действительно существующее изображение для загрузки, убелитесь, что сервер имеет возможность загружать файлы (CHMOD)...');
define('ERR_MKDIR', 'Ошибка при создании директории %s');
define('DEST_DIR_RO', 'Директория назначения %s закрыта для записи!');
define('ERR_MOVE', 'Невозможно переместить %s в %s!');
define('ERR_FSIZE_TOO_LARGE', 'Размер загружаемого файла больше разрешённого (максимально разрешённый размер -  %s x %s)');
define('ERR_IMGSIZE_TOO_LARGE', 'Размер загружаемого файла больше разрешённого (максимально разрешённый размер - %s KB)');
define('ERR_INVALID_IMG', 'Файл, который Вы пытаетесь загрузить, не является изображением!');
define('ALLOWED_IMG_TYPES', 'Вы можете загружать только %s изображения.');
define('ERR_INSERT_PIC', 'Изображение \'%s\' не не может быть загружено в альбом ');
define('UPLOAD_SUCCESS', 'Ваше изображение загружено.<br /><br />Оно станет доступным после проверки администратором.');
//define('INFO', 'Информация');
define('ERR_COMMENT_EMPTY', 'Ваш комментарий пуст!');
define('ERR_INVALID_FEXT', 'Разрешены к загрузке файлы со следующими расширениями : <br /><br />%s.');
define('NO_FLOOD', 'Извините, но Вы уже являетесь автором последнего комментария к этому изображению.<br /><br />Если хотите, можете изменить Ваш комментарий');
define('REDIRECT_MSG', 'Вы были перенаправлены.<br /><br /><br />Нажмите \'ПРОДОЛЖИТЬ\', если перенаправление не произошло автоманически');
define('UPL_SUCCESS', 'Ваше изображение добавлено');

// lang_delete_php
define('CAPTION', 'Заголовок');
define('FS_PIC', 'Полный размер изображения');
define('DEL_SUCCESS', 'удалено');
define('NS_PIC', 'нормальный размер изображения');
define('ERR_DEL', 'не может быть удалено');
define('THUMB_PIC', 'эскиз');
//define('COMMENT', 'комментарий');
define('IM_IN_ALB', 'изображение в альбоме');
define('ALB_DEL_SUCCESS', 'Альбом \'%s\' удалён');
define('ALB_MGR', 'Управление альбомом');
define('ERR_INVALID_DATA', 'Дата получена неправильно в \'%s\'');
define('CREATE_ALB', 'Создание альбома \'%s\'');
define('UPDATE_ALB', 'Изменение альбома \'%s\' с названием \'%s\' и индексом \'%s\'');
define('DEL_PIC', 'Удалить изображение');
define('DEL_ALB', 'Удалить альбом');
define('DEL_USER', 'Удалить пользователя');
//define('ERR_UNKNOWN_USER', 'Выбранный Вами пользователь не существует!');
define('COMMENT_DELETED', 'Комментарий удалён');

// lang_display_image_php
define('CONFIRM_DEL', 'Вы действительно хотите удалить это изображение ? \\nкомментарий(ев) тоже будет(ут) удалён(ы).');
define('DEL_PIC', 'Удалить это изображение');
define('SIZE', '%s x %s пиксель(ей)');
define('VIEWS', '%s раз(а)');
define('SLIDESHOW', 'Слайд-шоу');
define('STOP_SLIDESHOW', 'Остановить Слайд-шоу');
define('VIEW_FS', 'Нажмите для просмотра полного изображения');
define('EDIT_PIC', 'Редактировать информацию об изображении');

// lang_picinfo
define('TITLE', 'Информация об изображении');
define('FILENAME', 'Имя файла');
define('ALBUM NAME', 'Имя альбома');
define('RATING', 'Рейтинг (%s голос(ов))');
define('KEYWORDS', 'Ключевые слова');
define('FILE SIZE', 'Размер файла');
define('DIMENSIONS', 'Разрешение');
define('DISPLAYED', 'Показано');
define('CAMERA', 'Камера');
define('DATE TAKEN', 'Дата');
define('APERTURE', 'Апертура');
define('EXPOSURE TIME', 'Экспозиция');
define('FOCAL LENGTH', 'Фокусное расстояние');
define('COMMENT', 'Коментарий');
define('ADDFAV', 'Добавить в избранное');
define('ADDFAVPHRASE', 'Избранное');
define('REMFAV', 'Удалить из избранного');
define('IPTCTITLE', 'Заголовок IPTC');
define('IPTCCOPYRIGHT', 'Копирайт IPTC');
define('IPTCKEYWORDS', 'Ключевые слова IPTC');
define('IPTCCATEGORY', 'Категория IPTC');
define('IPTCSUBCATEGORIES', 'Подкатегория IPTC');
define('BOOKMARK_PAGE', 'Изображение закладки');
define('REMOVEFAV', 'Removed from Favorites Album');
define('ADDEDTOFAV', 'Added to Favorites Album');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'Отредактировать');
define('CONFIRM_DELETE', 'Вы уверены?');
define('ADD_YOUR_COMMENT', 'Прокомментировать');
define('NAME', 'Имя');
//define('COMMENT', 'Комментарий');
define('YOUR_NAME', 'Анонимный');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Нажмите на изображение, чтобы закрыть окно');

// lang_ecard_php
define('TITLE', 'Послать открытку');
define('INVALID_EMAIL', '<b>Внимание</b> : неправильный адрес электронной почты !');
define('ECARD_TITLE', 'Для Вас открытка от %s');
define('VIEW_ECARD', 'Если открытка отображается неправильно, то нажмите здесь');
define('VIEW_MORE_PICS', 'Нажмите на эту ссылку для просмотра других изображений');
define('SEND_SUCCESS', 'Ваша открытка была отослана');
define('SEND_FAILED', 'Извините, но Ваша открытка не может быть отправлена сервером...');
define('FROM', 'От');
define('YOUR_NAME', 'Ваше имя');
define('YOUR_EMAIL', 'Ваш адрес электронной почты');
define('TO', 'Кому');
define('RCPT_NAME', 'Имя получателя');
define('RCPT_EMAIL', 'Адрес получателя');
define('GREETINGS', 'Заголовок');
define('MESSAGE', 'Сообщение');
define('ECARD_LINK_CORRUPT', 'Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser'); //NEW

// lang_editpics_php
define('PIC_INFO', 'Информация&nbsp;об изображении');
define('ALBUM', 'Альбом');
define('TITLE', 'Заголовок');
define('DESC', 'Описание');
//define('KEYWORDS', 'Ключевые слова');
define('PIC_INFO_STR', '%sx%s - %sKB - %s просмотр(а,ов) - %s голос(а,ов)');
define('APPROVE', 'Одобрить изображение');
define('POSTPONE_APP', 'Отложенное одобрение');
//define('DEL_PIC', 'Удалить изображение');
define('READ_EXIF', 'Перечитать информацию EXIF заново');
define('RESET_VIEW_COUNT', 'Сбросить счётчик просмотров');
define('RESET_VOTES', 'Сбросить голосование');
define('DEL_COMM', 'Удалить комментарии');
define('UPL_APPROVAL', 'Одобрить');
define('EDIT_PICS', 'Редактировать изображение');
define('SEE_NEXT', 'Посмотреть следующее изображение');
define('SEE_PREV', 'Посмотреть предыдущее изображение');
define('N_PIC', '%s изображение(ий)');
define('N_OF_PIC_TO_DISP', 'Количество изображений к показу');
define('APPLY', 'Применить');

// lang_groupmgr_php
define('GROUP_NAME', 'Имя группы');
define('DISK_QUOTA', 'Дисковая квота');
define('CAN_RATE', 'Может оценивать изображения');
define('CAN_SEND_ECARDS', 'Может посылать открытки');
define('CAN_POST_COM', 'Может размещать комментарии');
define('CAN_UPLOAD', 'Может загружать изображения');
define('CAN_HAVE_GALLERY', 'Может иметь собственные галереи');
//define('APPLY', 'Применить');
define('CREATE_NEW_GROUP', 'Создать новую группу');
define('DEL_GROUPS', 'Удалить выбранную(ые) группу(ы)');
define('CONFIRM_DEL', 'Внимание! После удаления группы, пользователи которые находились в ней, будут перемещены в группу \'Зарегистрированные\'!\\n\\nХотите продолжить?');
define('TITLE', 'Управление группами пользователей');
define('APPROVAL_1', 'Одобрение загрузки - общие альбомы(1)');
define('APPROVAL_2', 'Одобрение загрузки - личные альбомы (2)');
define('NOTE1', '<b>(1)</b> Загрузка в общие альбомы требует одобрения администратора');
define('NOTE2', '<b>(2)</b> Загрузка в частные альбомы требует одобрения администратора');
//define('NOTES', 'Заметки');

// lang_index_php
define('WELCOME', 'Добро пожаловать!');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Вы действительно хотите удалить этот альбом ? \\nВсе изображения и комментарии также будут удалены.');
//define('DELETE', 'УДАЛИТЬ');
define('MODIFY', 'ИЗМЕНИТЬ');
//define('EDIT_PICS', 'РЕДАКТИРОВАТЬ ИЗОБРАЖЕНИЕ');

// lang_list_categories
define('HOME', 'В начало');
define('STAT1', '<b>[pictures]</b> изображение(ий) в <b>[albums]</b> альбоме(ах) и <b>[cat]</b> категориях с <b>[comments]</b> комментарием(ями). Просмотрено <b>[views]</b> раз(а)');
define('STAT2', '<b>[pictures]</b> изображение(ий) в <b>[albums]</b> альбоме(ах) просмотрено <b>[views]</b> раз(а)');
define('XX_S_GALLERY', '%s\'s Галерея(и,ей)');
define('STAT3', '<b>[pictures]</b> изображение(ий) в <b>[albums]</b> альбоме(ах) с <b>[comments]</b> комметнарием(ями) просмотрено <b>[views]</b> раз(а)');

// lang_list_users
define('USER_LIST', 'Список пользователей');
define('NO_USER_GAL', 'Нет пользователей, которым позволено создавать собственные альбомы');
define('N_ALBUMS', '%s альбом(а,ов)');
define('N_PICS', '%s изображение(ий)');

// lang_list_albums
define('N_PICTURES', '%s изображение(ий)');
define('LAST_ADDED', ', последнее добавленное %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Изменить альбом %s');
define('GENERAL_SETTINGS', 'Основные настройки');
define('ALB_TITLE', 'Название альбома');
define('ALB_CAT', 'Категория альбома');
define('ALB_DESC', 'Описание альбома');
define('ALB_THUMB', 'Предосмотр альбома');
define('ALB_PERM', 'Права для этого альбома');
define('CAN_VIEW', 'Альбом может быть просмотрен');
define('CAN_UPLOAD', 'Посетители могут загружать изображения');
define('CAN_POST_COMMENTS', 'Посетители могут размещать комментарии');
define('CAN_RATE', 'Посетители могут оценивать изображения');
define('USER_GAL', 'Пользовательские галереи');
define('NO_CAT', '* Нет категорий *');
define('ALB_EMPTY', 'Альбом пуст');
define('LAST_UPLOADED', 'Последнее загруженное');
define('PUBLIC_ALB', 'Все (общий альбом)');
define('ME_ONLY', 'Только я');
define('OWNER_ONLY', 'Владелец альбома (%s) только');
define('GROUPP_ONLY', 'Члены группы \'%s\' ');
define('ERR_NO_ALB_TO_MODIFY', 'Нет альбомов, которые Вы можете редактировать.');
define('UPDATE', 'Изменить альбом');

// lang_rate_pic_php
define('ALREADY_RATED', 'Вы уже голосовали');
define('RATE_OK', 'Спасибо за голос');

// lang_register_php
define('USERNAME', 'Имя пользователя');
define('GROUP', 'Группа');
define('DISK_USAGE', 'Использование дисковой квоты');
define('X_S_PROFILE', 'Профиль для пользователя %s\'s');

// lang_reviewcom_php
define('TITLE', 'Просмотр комментариев');
define('NO_COMMENT', 'Нет комментариев для просмотра');
define('N_COMM_DEL', '%s комментарий(ев) удалён(ены)');
define('N_COMM_DISP', 'Количество отображаемых комментариев');
define('SEE_PREV', 'Посмотреть предыдущий');
define('SEE_NEXT', 'Посмотреть следующий');
define('DEL_COMM', 'Удалить выбранные комментарии');

// lang_search_php
define('SEARCH', 'Поиск коллекции изображений');

// lang_search_new_php
define('PAGE_TITLE', 'Искать новые изображения');
define('SELECT_DIR', 'Выбрать директорию');
define('SELECT_DIR_MSG', 'Эта функция позволит Вам добавить сразу несколько изображений для загрузки по протоколу FTP.<br /><br />Выберете директортю, в которую Вы хотите разместить эти изображения');
define('NO_PIC_TO_ADD', 'Нет изображений для добавления');
define('NEED_ONE_ALBUM', 'Чтобы использовать эту функцию, Вам нужно иметь как минимум один альбом');
define('WARNING', 'Внимание');
define('CHANGE_PERM', 'Невозможно произвести запись в эту директорию, Вам нужно изменить CHMOD на 755 или 777 перед тем, как пробовать добавлять изображения в эту директорию!');
define('TARGET_ALBUM', '<b>Разместите изображение &quot;</b>%s<b>&quot; в </b>%s');
define('FOLDER', 'Папка (Директория)');
define('IMAGE', 'Изображение');
//define('ALBUM', 'Альбом');
define('RESULT', 'Результат');
define('DIR_RO', 'Запись невозможна. ');
define('DIR_CANT_READ', 'Чтение невозможно. ');
define('INSERT', 'Добавление нового изображения в категорию');
define('LIST_NEW_PIC', 'Просмотр новых изображений');
define('INSERT_SELECTED', 'Вставить выбранные изображения');
define('NO_PIC_FOUND', 'Новых изображений не найдено');
define('BE_PATIENT', 'Пожалуйста, будьте терпеливы. Для добавления изображений в директорию требуется время');
define('NOTES', '<ul><li><b>OK</b> : изображение добавлено<li><b>DP</b> : изображение уже существует в базе данных<li><b>PB</b> : изображение не было добавлено, проверьте конфигурацию и разрешения для этой директории<li>Если OK, DP, PB \'signs\' не появились, нажмите на  потерянное изображение для просмотра ошибки, сгенерированной PHP<li>Если Ваш браузер не отвечает, обновите окно</ul>');
define('SELECT_ALBUM', 'Выбрать альбом');
define('NO_ALBUM', 'Не было выбрано ни одного альбома. Вернитесь назад и выберете альбом для размещения изображения');

// lang_upload_php
define('TITLE', 'Загрузка изображения');
define('MAX_FSIZE', 'Максимально разрешённый размер %s KB');
//define('ALBUM', 'Альбом');
define('PICTURE', 'Изображение');
define('PIC_TITLE', 'Заголовок изображения');
define('DESCRIPTION', 'Описание изображения');
define('KEYWORDS', 'Ключевые слова (разделять пробелом)');
define('ERR_NO_ALB_UPLOADABLES', 'Извините, но альбомов, в которые Вы можете загружать изображения, не существует');

// lang_usermgr_php
define('TITLE', 'Управление пользователями');
//define('NAME_A', 'Имя по возрастанию');
//define('NAME_D', 'Имя по убыванию');
define('GROUP_A', 'Группы по возрастанию');
define('GROUP_D', 'Группы по убыванию');
define('REG_A', 'Дата регистрации по возрастанию');
define('REG_D', 'Дата регистрации по убыванию');
define('PIC_A', 'Счётчик по возрастанию');
define('PIC_D', 'Счётчик по убыванию');
define('DISKU_A', 'Использование дискового пространства по возрастанию');
define('DISKU_D', 'Использование дискового пространства по убыванию');
define('SORT_BY', 'Сортировать пользователей по');
define('ERR_NO_USERS', 'Таблица пользователей пуста!');
define('ERR_EDIT_SELF', 'Вы не можете редактировать свой профиль, используйте для этого ссылку \'Мой профиль\'');
define('EDIT', 'РЕДАКТИРОВАТЬ');
//define('DELETE', 'УДАЛИТЬ');
define('NAME', 'Имя пользователя');
//define('GROUP', 'Группа');
define('INACTIVE', 'Неактивный');
//define('OPERATIONS', 'Операции');
define('PICTURES', 'Изображения');
define('DISK_SPACE', 'Используемое дисковое пространство/дисковая квота');
define('REGISTERED_ON', 'Зарегистрирован в ');
define('U_USER_ON_P_PAGES', '%d пользователь(ей) на %d странице(ах)');
define('CONFIRM_DEL', 'Вы действительно хотите удалить данного пользователя ? \\nВсе его изображения и альбомы также будут удалены.');
define('MAIL', 'ПОЧТА');
define('ERR_UNKNOWN_USER', 'Выбранный пользователь не существует!');
define('MODIFY_USER', 'Редактировать пользователя');
//define('NOTES', 'Заметки');
define('NOTE_LIST', '<li>Если Вы не хотите изменять пароль, оставьте поле \"Пароль\" пустым');
define('PASSWORD', 'Пароль');
define('USER_ACTIVE_CP', 'Пользователь активен');
define('USER_GROUP_CP', 'Группа пользователя');
define('USER_EMAIL', 'Адрес электронной почты');
define('USER_WEB_SITE', 'Сайт пользователя');
define('CREATE_NEW_USER', 'Создать пользователя');
define('USER_FROM', 'Месторасположение пользователя');
define('USER_INTERESTS', 'Интересы');
define('USER_OCC', 'Занятия');

// lang_util_php
define('UTIL_TITLE', 'Изменить размер');
define('WHAT_IT_DOES', 'Что это делает');
define('WHAT_UPDATE_TITLES', 'Обновить название из имени файла');
define('WHAT_DELETE_TITLE', 'Удалить названия');
define('WHAT_REBUILD', 'Перестроить эксизы и изменить размер фото');
define('WHAT_DELETE_ORIGINALS', 'Замена оригинальных изображений на изображения с измененным размером');
define('U_FILE', 'Файл');
define('TITLE_SET_TO', 'установлено название в');
define('SUBMIT_FORM', 'отправить');
define('UPDATED_SUCCESFULLY', 'обновление прошло успешно');
define('ERROR_CREATE', 'ОШИБКА создания');
define('CONTINUE', 'В процессе много излбражений');
define('MAIN_SUCCESS', 'Файл %s используетсяся как главное изображение');
define('ERROR_RENAME', 'Ошибка переменования %s в %s');
define('ERROR_NOT_FOUND', 'Файл %s не найден');
define('U_BACK', 'назад на главную');
define('THUMBS_WAIT', 'Обновление эксизов и/или изменения размеров изображения, пожалуйста подождите...');
define('THUMBS_CONTINUE_WAIT', 'Продолжение обновления эксиза и/или изменения размеров изображения...');
define('TITLES_WAIT', 'Обновление заголовков, пожалуйста подождите...');
define('DELETE_WAIT', 'Удаление заголовков, пожалуйста подождите...');
define('REPLACE_WAIT', 'Удаление оригинальных изображений и замена их измененными, пожалуйста подождите..');
define('INSTRUCTION', 'Быстрые инструкции');
define('INSTRUCTION_ACTION', 'Выберите действие');
define('INSTRUCTION_PARAMETER', 'Установить параметры');
define('INSTRUCTION_ALBUM', 'Выбрать альбом');
define('INSTRUCTION_PRESS', 'Нажмите %s');
define('U_UPDATE', 'Обновление эксизов и/или размеров изображений');
define('UPDATE_WHAT', 'Что должно быть обновлено');
define('UPDATE_THUMB', 'Только эксизы');
define('UPDATE_PIC', 'Только изменение размеров');
define('UPDATE_BOTH', 'Эксизы и изменения размеров');
define('UPDATE_NUMBER', 'Число обработанных изображений');
define('UPDATE_OPTION', '(Попробуйте настроить опцию ниже, если у вас проблемы с timeout)');
define('FILENAME_TITLE', 'Имя файла ? Название изображения');
define('FILENAME_HOW', 'Как должно быть изменено имя файла');
define('FILENAME_REMOVE', 'Удалить в конце .jpg и заменить _ (подчеркивание) с пробелами');
define('FILENAME_EURO', 'Изменить 2004_11_23_13_20_20.jpg на 23/11/2003 13:20');
define('FILENAME_US', 'Изменить 2004_11_23_13_20_20.jpg на 11/23/2003 13:20');
define('FILENAME_TIME', 'Изменить 2004_11_23_13_20_20.jpg на 13:20');
define('UT_DELETE', 'Удалить название изображения и оригинальный размер');
define('DELETE_TITLE', 'Удалить название картинки');
define('DELETE_ORIGINAL', 'Удалить оригинальный размер изображения');
define('DELETE_REPLACE', 'Замена оригинальных изображений на изображения с измененным размером');
//define('SELECT_ALBUM', 'Выбрать альбом');

// lang_pagetitle_php
define('VIEWING', 'Просмотр изображений');
define('USR', '\'s галерея');
define('PHOTOGALLERY', 'Фотогалерея');
$lang_usermgr_php = array(
    'name_a' => 'Имя по возрастанию',
    'name_d' => 'Имя по убыванию',
    'group_a' => 'Группы по возрастанию',
    'group_d' => 'Группы по убыванию',
    'reg_a' => 'Дата регистрации по возрастанию',
    'reg_d' => 'Дата регистрации по убыванию',
    'pic_a' => 'Счётчик по возрастанию',
    'pic_d' => 'Счётчик по убыванию',
    'disku_a' => 'Использование дискового пространства по возрастанию',
    'disku_d' => 'Использование дискового пространства по убыванию',
    );
$lang_byte_units = array('Байт','KB','MB',);
// Day of weeks and months
$lang_day_of_week = array('Вск','Пон','Втор','Среда','Чет','Пят','Суб',);
$lang_month = array('Янв','Февр','Март','Апр','Май','Июнь','Июль','Авг','Сент','Окт','Ноябрь','Дек',);
$lang_meta_album_names = array(
    'random' => 'Случайные изображения',
    'lastup' => 'Последний добавления',
    'lastupby' => 'Мои последние добавления', // new 1.2.2
    'lastalb' => 'Последнее обновление альбома',
    'lastcom' => 'Последние комментарии',
    'lastcomby' => 'Мои последние комментарии', // new 1.2.2
    'topn' => 'Часто просматриваемые',
    'toprated' => 'Лучшие по рейтингу',
    'lasthits' => 'Последние просмотренные',
    'search' => 'Результаты поиска',
    'favpics' => 'Избранные' // changed in cpg1.2.0nuke
    );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array(
    'title' => 'Конфигурация',
    'restore_cfg' => 'Восстановить настройки по умолчанию',
    'save_cfg' => 'Сохранить изменения',
    'notes' => 'Заметки',
    'info' => 'Информация',
    'upd_success' => 'Конфигурация Coppermine изменена',
    'restore_success' => 'Настройки Coppermine по умолчанию восстановлены',
    'name_a' => 'Имя по возрастанию',
    'name_d' => 'Имя по убыванию',
    'title_a' => 'Заголовок по возрастанию',
    'title_d' => 'Заголовок по убыванию',
    'date_a' => 'Дата по возрастанию',
    'date_d' => 'Дата по убыванию',
    'rating_a' => 'Рейтинг по возрастанию', // new in cpg1.2.0nuke
    'rating_d' => 'Рейтинг по убыванию', // new in cpg1.2.0nuke
    'th_any' => 'Максимальный аспект',
    'th_ht' => 'Высота',
    'th_wd' => 'Ширина',
    );
// start left side interpretation
$lang_config_data = array(
    // 'General settings',
    'General settings',
    array('Имя галереи', 'gallery_name', 0),
    array('Описание галереи', 'gallery_description', 0),
    array('Почтовый адрес администратора галереи', 'gallery_admin_email', 0),
    array('Адрес в папке PHP-Nuke, например, http://example.com/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
    array('Тема', 'theme', 6),
    array('Название вместо Coppermine', 'nice_titles', 1),
//'Album list view',
    'Представление списка альбомов',
    array('Ширина основной таблицы (пиксели или %)', 'main_table_width', 0),
    array('Количество отображаемых уровней категорий', 'subcat_level', 0),
    array('Количество отображаемых альбомов', 'albums_per_page', 0),
    array('Количество столбцов в списке альбомов', 'album_list_cols', 0),
    array('Размер эскизов в пикселях', 'alb_list_thumb_size', 0),
    array('Содержимое главной страницы', 'main_page_layout', 0),
    array('Показать первый уровень эскизов в категориях', 'first_level', 1), 
//'Thumbnail view',
    'Просмотр эскизов',
    array('Количество столбцов на странице с эскизами', 'thumbcols', 0),
    array('Количество строк на странице с эскизами', 'thumbrows', 0),
    array('Максимальное количество таблиц на странице', 'max_tabs', 0),
    array('Показывать заголовок изображения (в дополнение к названию) внизу эскиза', 'caption_in_thumbview', 1),
    array('Показывать количество комментариев внизу эскиза', 'display_comment_count', 1),
    array('Сортировка изображений по умолчанию', 'default_sort_order', 3),
    array('Минимальное число баллов для голосования по списку \'лучшие\'', 'min_votes_for_rating', 0),
    array('Включить в Теги Alts и title название и ключевые слова вместо picinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
 //'Display Image &amp; Comment settings',
    'Просмотр изображения &amp; Настройки комментариев',
    array('Ширина таблицы для показываемых изображений (пиксели или %)', 'picture_table_width', 0),
    array('Информация об изображении по умолчанию видна', 'display_pic_info', 1),
    array('Фильтр нецензурных слов в коммениариях', 'filter_bad_words', 1),
    array('Позволить смайлики в комментариях', 'enable_smilies', 1),
    array('Позволить несколько комментариев для одного изображения одному и тому же пользователю (Флуд)', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
    array('Сообщать администратору сайта на почту о добавлении комментариев' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
    array('Максимальная длина описаня изображения', 'max_img_desc_length', 0),
    array('Максимальное количество знаков в слове', 'max_com_wlength', 0),
    array('Максимальное количество строк в комментарии', 'max_com_lines', 0),
    array('Максимальная длина комментария', 'max_com_size', 0),
    array('Показывать диафильм', 'display_film_strip', 1),
    array('Число пунктов в диафильме', 'max_film_strip_items', 0),
    array('Позволять анонимным пользователям просматривать полные изображения', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
    array('Число дней перед возможностью повторного голосования за одно и то же изображение','keep_votes_time',0), // new in cpg1.2.2c nuke
    array('Show fullsize picture in slideshow','fullsize_slideshow',1),
    array('Показывать правые блоки?', 'right_blocks', 1), // new 1.2.2
// 'Pictures and thumbnails settings',
    'Pictures and thumbnails settings',
    array('Качество файлов JPEG', 'jpeg_qual', 0),
    array('Place watermark on image', 'watermark', 1),
    array('Максимальное значение ограничения для эскиза <b>*</b>', 'thumb_width', 0),
    array('Какое ограничение? (высота или ширина, или максимальные параметры для эскиза) <b>*</b>', 'thumb_use', 7),
    array('Создавать промежуточные изображения', 'make_intermediate', 1),
    array('Максимальная высота или ширина для промежуточных изображений <b>*</b>', 'picture_width', 0),
    array('Максимальный размер загружаемых изображений (KB)', 'max_upl_size', 0),
    array('Максимальная ширина или высота загружаемых изображений в пикселях', 'max_upl_width_height', 0), 
    array('Allow multiple Files to be upload with same file name', 'samename', 1), 
//'User settings',
    'Пользовательские настройки',
    array('Позволить регистрацию новых пользователей', 'allow_user_registration', 1),
/*
    array('Требовать проверку через электронную почту при регистрации', 'reg_requires_valid_email', 1),
    array('Позволить двум пользователям использовать один и тот же адрес электронной почты', 'allow_duplicate_emails_addr', 1),
*/
    array('Пользователи могут создавать собственные альбомы', 'allow_private_albums', 1),
    array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',
    'Выборочные поля для описаниий изображений (оставить пустым, если не используется)',
    array('Имя первого поля', 'user_field1_name', 0),
    array('Имя второго поля', 'user_field2_name', 0),
    array('Имя третьего поля', 'user_field3_name', 0),
    array('Имя четвёртого поля', 'user_field4_name', 0), 
	//'Pictures and thumbnails advanced settings',
    'Расширенные настройки изображений и эскизов',
    array('Показывать иконки личных альбомов незарегистрированным пользователям', 'show_private', 1),
    array('Символы, запрещённые в названиях файлов', 'forbiden_fname_char', 0),
    array('Разрешённые расширения файлов для загружаемых изображений', 'allowed_file_extensions', 0),
    array('Метод изменения размера изображений', 'thumb_method', 2),
    array('Путь к утилитам ImageMagick\Netpbm (например, /usr/bin/X11/)', 'impath', 0),
    array('AРазрешённые типы файлов (только для ImageMagick)', 'allowed_img_types', 0),
    array('Опции коммандной строки для ImageMagick', 'im_options', 0),
    array('Читать данные EXIF в файлах JPEG', 'read_exif_data', 1),
    array('Читать данные IPTC в файлах JPEG', 'read_iptc_data', 1), // new in cpg1.2.0nuke
    array('Директория альбомов <b>*</b>', 'fullpath', 0),
    array('Директория для пользовательских изображений <b>*</b>', 'userpics', 0),
    array('Префикс для промежуточных изображений <b>*</b>', 'normal_pfx', 0),
    array('Префикс для эскизов <b>*</b>', 'thumb_pfx', 0),
    array('Показывать имя файла для Picinfo', 'picinfo_display_filename', 1), 
    array('Показывать имя альбома для Picinfo', 'picinfo_display_album_name', 1), 
    array('Показывать размер файла Picinfo', 'picinfo_display_file_size', 1), 
    array('Показывать разрешение Picinfo', 'picinfo_display_dimensions', 1), 
    array('Показывать счётчик для Picinfo', 'picinfo_display_count_displayed', 1), 
    array('Показывать URL Picinfo', 'picinfo_display_URL', 1), 
    array('Показывать URL Picinfo как bookmark', 'picinfo_display_URL_bookmark', 1), 
    array('Показывать ссылку на альбом для Picinfo', 'picinfo_display_favorites', 1), 
//    'Cookies &amp; Charset settings',
    'Куки &amp; Установки Charset',
    array('Имя куки', 'cookie_name', 0),
    array('Путь куки', 'cookie_path', 0),
//    'Miscellaneous settings',
    'Другие настройки',
    array('Включить режим отладки', 'debug_mode', 1),
    '<br /><div align="center">(*) Файлы, помеченные значком * не должны изменяться, если в галерее уже есть изображения</div><br />'
    );
// end left side interpretation
