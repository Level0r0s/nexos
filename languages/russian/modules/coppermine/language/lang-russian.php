<?php
/****************************************************************************/
/* Coppermine Photo Gallery 1.2.3 for CMS                                   */
/****************************************************************************/
/****************************************************************************/
/* Port Copyright (C) 2004 Coppermine for CMS Dev Team                                */
/* http://coppermine.findhere.org/                                          */
/****************************************************************************/
/* Updated by the Coppermine Dev Team  2003                                 */
/* (http://coppermine.sf.net/team/)                                         */
/* see /docs/credits.html for details                                       */
/****************************************************************************/
/* Copyright (C) 2002,2003  Gregory DEMAR <gdemar@wanadoo.fr>               */
/* http://www.chezgreg.net/coppermine/                                      */
/* This program is free software; you can redistribute it and/or modify     */
/* it under the terms of the GNU General Public License as published by     */
/* the Free Software Foundation; either version 2 of the License, or        */
/* (at your option) any later version.                                      */
/*****************************************************************************/
/*   $Id: lang-russian.php, v2.0 from Mike Dmitriev (технические переводы)   */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Russian');
define('LANG_NAME_NATIVE', 'Русский');
define('LANG_COUNTRY_CODE', 'ru');
define('TRANS_NAME', 'Israelin');
define('TRANS_EMAIL', 'admin@mdforum.dynu.com');
define('TRANS_WEBSITE', 'http://mdforum.dynu.com');
define('TRANS_DATE', '2004-05-28');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'windows-1251');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'Да');
define('NO', 'Нет');

// some common strings
define('BACK', 'Назад');
define('CONTINUE', 'Вперед');
define('INFO', 'Информация');
define('ERROR', 'Ошибка');

//// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%m/%d/%y at %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y at %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y at %I:%M %p');

// short names for Byte, Kilo, Mega
$lang_byte_units = array('Байт','KB','MB',);

// Day of week
$lang_day_of_week = array('Вск','Пон','Втор','Среда','Чет','Пят','Суб',);
// Day of the month
$lang_month = array('Янв','Февр','Март','Апр','Май','Июнь','Июль','Авг','Сент','Окт','Ноябрь','Дек',);
// For the word censor
$lang_bad_words = array('*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*',);
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

// lang_main_menu
define('ALB_LIST_TITLE', 'К списку альбомов');
define('ALB_LIST_LNK', 'Список альбомов');
define('MY_GAL_TITLE', 'Перейти к моей личной галерее');
define('MY_GAL_LNK', 'Моя галерея');
define('MY_PROF_LNK', 'Мои настройки');
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
define('SEARCH_LNK', 'Поиск');
define('FAV_LNK', 'Избранные');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu

define('UPL_APP_LNK', 'Загрузить выбранное');
define('CONFIG_LNK', 'Конфигурирование');
define('ALBUMS_LNK', 'Альбомы');
define('CATEGORIES_LNK', 'Категории');
define('USERS_LNK', 'Пользователи');
define('GROUPS_LNK', 'Группы');
define('COMMENTS_LNK', 'Комментарии');
define('SEARCHNEW_LNK', 'Массовое добавление изображений');
define('UTIL_LNK', 'Изменить размер');
define('BAN_LNK', 'Бан пользователей');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Создание/упорядочивание альбомов');
define('MODIFYALB_LNK', 'Изменение моих альбомов');
define('MY_PROF_LNK', 'Мой профиль');

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
define('INFORMATION', 'Информация');
define('ERROR', 'Ошибка');
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

// lang_smilies_inc_php
define('EXCLAMATION', 'Восклицание');
define('QUESTION', 'Вопрос');
define('VERY HAPPY', 'Очень весёлый');
define('SMILE', 'Улыбочка');
define('SAD', 'Грустный');
define('SURPRISED', 'Удивлён');
define('SHOCKED', 'Шокирован');
define('CONFUSED', 'Сконфужен');
define('COOL', 'Круто!');
define('LAUGHING', 'Смеющийся');
define('MAD', 'Безумный');
define('RAZZ', 'Непристойный звук');
define('EMBARASSED', 'Смущённый');
define('CRYING OR VERY SAD', 'Плачущий или очень расстроенный');
define('EVIL OR VERY MAD', 'Дьявольский или очень безумный');
define('TWISTED EVIL', 'Крутящийся дьявол');
define('ROLLING EYES', 'Вращяющиеся глаза');
define('WINK', 'Подмигнуть');
define('IDEA', 'Идея');
define('ARROW', 'Стрелка');
define('NEUTRAL', 'Нейтральный');
define('MR. GREEN', 'Мистер Green');

// lang_admin_php
define('LV_ADMIN', 'Выход из панели администрирования');
define('ENT_ADMIN', 'Вход в панель администрирования');
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
define('CATEGORY', 'Категория');
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
define('INFO', 'Информация');
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

// lang_config_data
define('CONFIG_GENSET', 'Основные настройки');
define('GALLERY_NAME', 'Имя галереи');
define('GALLERY_DESCRIPTION', 'Описание галереи');
define('GALLERY_ADMIN_EMAIL', 'Почтовый адрес администратора галереи');
define('ECARDS_MORE_PIC_TARGET', 'Адрес в папке PHP-Nuke, например, http://www.mysite.tld/html/');
define('LANG', 'Язык');
define('CPGTHEME', 'Тема');
define('NICE_TITLES', 'Название вместо Coppermine');
define('RIGHT_BLOCKS', 'Показывать правые блоки');
define('ALB_LIST_VIEW_TITLE', 'Представление списка альбомов');
define('MAIN_TABLE_WIDTH', 'Ширина основной таблицы (пиксели или %)');
define('SUBCAT_LEVEL', 'Количество отображаемых уровней категорий');
define('ALBUMS_PER_PAGE', 'Количество отображаемых альбомов');
define('ALBUM_LIST_COLS', 'Количество столбцов в списке альбомов');
define('ALB_LIST_THUMB_SIZE', 'Размер эскизов в пикселях');
define('MAIN_PAGE_LAYOUT', 'Содержимое главной страницы');
define('FIRST_LEVEL', 'Показать первый уровень эскизов в категориях');
define('THUMB_VIEW_TITLE', 'Просмотр эскизов');
define('THUMBCOLS', 'Количество столбцов на странице с эскизами');
define('THUMBROWS', 'Количество строк на странице с эскизами');
define('MAX_TABS', 'Максимальное количество таблиц на странице');
define('CAPTION_IN_THUMBVIEW', 'Показывать заголовок изображения (в дополнение к названию) внизу эскиза');
define('DISPLAY_COMMENT_COUNT', 'Показывать количество комментариев внизу эскиза');
define('DEFAULT_SORT_ORDER', 'Сортировка изображений по умолчанию');
define('MIN_VOTES_FOR_RATING', 'Минимальное число баллов для голосования по списку \'лучшие\'');
define('SEO_ALTS', 'Включить в Теги Alts и title название и ключевые слова вместо picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'Просмотр изображения &amp; Настройки комментариев');
define('PICTURE_TABLE_WIDTH', 'Ширина таблицы для показываемых изображений (пиксели или %)');
define('DISPLAY_PIC_INFO', 'Информация об изображении по умолчанию видна');
define('FILTER_BAD_WORDS', 'Фильтр нецензурных слов в коммениариях');
define('ENABLE_SMILIES', 'Позволить смайлики в комментариях');
define('DISABLE_FLOOD_PROTECTION', 'Позволить несколько комментариев для одного изображения одному и тому же пользователю (Флуд)');
define('COMMENT_EMAIL_NOTIFICATION', 'Сообщать администратору сайта на почту о добавлении комментариев');
define('MAX_IMG_DESC_LENGTH', 'Максимальная длина описаня изображения');
define('MAX_COM_WLENGTH', 'Максимальное количество знаков в слове');
define('MAX_COM_LINES', 'Максимальное количество строк в комментарии');
define('MAX_COM_SIZE', 'Максимальная длина комментария');
define('DISPLAY_FILM_STRIP', 'Показывать диафильм');
define('MAX_FILM_STRIP_ITEMS', 'Число пунктов в диафильме');
define('ALLOW_ANON_FULLSIZE', 'Позволять анонимным пользователям просматривать полные изображения');
define('KEEP_VOTES_TIME', 'Число дней перед возможностью повторного голосования за одно и то же изображение');
define('PIC_THUMB_SETTING_TITLE', 'Настройки изображений и эскизов');
define('JPEG_QUAL', 'Качество файлов JPEG');
define('THUMB_WIDTH', 'Максимальное значение ограничения для эскиза <b>*</b>');
define('THUMB_USE', 'Какое ограничение? (высота или ширина, или максимальные параметры для эскиза) <b>*</b>');
define('MAKE_INTERMEDIATE', 'Создавать промежуточные изображения');
define('PICTURE_WIDTH', 'Максимальная высота или ширина для промежуточных изображений <b>*</b>');
define('MAX_UPL_SIZE', 'Максимальный размер загружаемых изображений (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Максимальная ширина или высота загружаемых изображений в пикселях');
define('USER_SETTING_TITLE', 'Пользовательские настройки');
define('ALLOW_USER_REGISTRATION', 'Позволить регистрацию новых пользователей');
define('REG_REQUIRES_VALID_EMAIL', 'Требовать проверку через электронную почту при регистрации');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Позволить двум пользователям использовать один и тот же адрес электронной почты');
define('ALLOW_PRIVATE_ALBUMS', 'Пользователи могут создавать собственные альбомы');
define('CUSTOM_FIELDS_TITLE', 'Выборочные поля для описаниий изображений (оставить пустым, если не используется)');
define('USER_FIELD1_NAME', 'Имя первого поля');
define('USER_FIELD2_NAME', 'Имя второго поля');
define('USER_FIELD3_NAME', 'Имя третьего поля');
define('USER_FIELD4_NAME', 'Имя четвёртого поля');
define('PIC_ADV_SETTING_TITLE', 'Расширенные настройки изображений и эскизов');
define('SHOW_PRIVATE', 'Показывать иконки личных альбомов незарегистрированным пользователям');
define('FORBIDEN_FNAME_CHAR', 'Символы, запрещённые в названиях файлов');
define('ALLOWED_FILE_EXTENSIONS', 'Разрешённые расширения файлов для загружаемых изображений');
define('THUMB_METHOD', 'Метод изменения размера изображений');
define('IMPATH', 'Путь к утилитам ImageMagick\Netpbm (например, /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Разрешённые типы файлов (только для ImageMagick)');
define('IM_OPTIONS', 'Опции коммандной строки для ImageMagick');
define('READ_EXIF_DATA', 'Читать данные EXIF в файлах JPEG');
define('READ_IPTC_DATA', 'Читать данные IPTC в файлах JPEG');
define('FULLPATH', 'Директория альбомов <b>*</b>');
define('USERPICS', 'Директория для пользовательских изображений <b>*</b>');
define('NORMAL_PFX', 'Префикс для промежуточных изображений <b>*</b>');
define('THUMB_PFX', 'Префикс для эскизов <b>*</b>');
define('DEFAULT_DIR_MODE', 'Значение CHMOD по умолчанию для директорий');
define('DEFAULT_FILE_MODE', 'Значение CHMOD по умолчанию для изображений');
define('PICINFO_DISPLAY_FILENAME', 'Показывать имя файла для Picinfo');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Показывать имя альбома для Picinfo');
define('PICINFO_DISPLAY_FILE_SIZE', 'Показывать размер файла Picinfo');
define('PICINFO_DISPLAY_DIMENSIONS', 'Показывать разрешение Picinfo');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Показывать счётчик для Picinfo');
define('PICINFO_DISPLAY_URL', 'Показывать URL Picinfo');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Показывать URL Picinfo как bookmark');
define('PICINFO_DISPLAY_FAVORITES', 'Показывать ссылку на альбом для Picinfo');
define('COOKIE_SETTING_TITLE', 'Куки &amp; Установки Charset');
define('COOKIE_NAME', 'Имя куки');
define('COOKIE_PATH', 'Путь куки');
define('CHAR_SET', 'Кодировка');
define('MISC_SETTING_TITLE', 'Другие настройки');
define('DEBUG_MODE', 'Включить режим отладки');
define('ADVANCED_DEBUG_MODE', 'Включить расширенный режим отладки');
define('SHOWUPDATE', 'Показывать извещение об обновлении Coppermine администратору');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) Файлы, помеченные значком * не должны изменяться, если в галерее уже есть изображения</div><br />');

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
define('INFO', 'Информация');
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
define('COMMENT', 'комментарий');
define('IM_IN_ALB', 'изображение в альбоме');
define('ALB_DEL_SUCCESS', 'Альбом \'%s\' удалён');
define('ALB_MGR', 'Управление альбомом');
define('ERR_INVALID_DATA', 'Дата получена неправильно в \'%s\'');
define('CREATE_ALB', 'Создание альбома \'%s\'');
define('UPDATE_ALB', 'Изменение альбома \'%s\' с названием \'%s\' и индексом \'%s\'');
define('DEL_PIC', 'Удалить изображение');
define('DEL_ALB', 'Удалить альбом');
define('DEL_USER', 'Удалить пользователя');
define('ERR_UNKNOWN_USER', 'Выбранный Вами пользователь не существует!');
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

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'Отредактировать');
define('CONFIRM_DELETE', 'Вы уверены?');
define('ADD_YOUR_COMMENT', 'Прокомментировать');
define('NAME', 'Имя');
define('COMMENT', 'Комментарий');
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

// lang_editpics_php
define('PIC_INFO', 'Информация&nbsp;об изображении');
define('ALBUM', 'Альбом');
define('TITLE', 'Заголовок');
define('DESC', 'Описание');
define('KEYWORDS', 'Ключевые слова');
define('PIC_INFO_STR', '%sx%s - %sKB - %s просмотр(а,ов) - %s голос(а,ов)');
define('APPROVE', 'Одобрить изображение');
define('POSTPONE_APP', 'Отложенное одобрение');
define('DEL_PIC', 'Удалить изображение');
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
define('APPLY', 'Применить');
define('CREATE_NEW_GROUP', 'Создать новую группу');
define('DEL_GROUPS', 'Удалить выбранную(ые) группу(ы)');
define('CONFIRM_DEL', 'Внимание! После удаления группы, пользователи которые находились в ней, будут перемещены в группу \'Зарегистрированные\'!\\n\\nХотите продолжить?');
define('TITLE', 'Управление группами пользователей');
define('APPROVAL_1', 'Одобрение загрузки - общие альбомы(1)');
define('APPROVAL_2', 'Одобрение загрузки - личные альбомы (2)');
define('NOTE1', '<b>(1)</b> Загрузка в общие альбомы требует одобрения администратора');
define('NOTE2', '<b>(2)</b> Загрузка в частные альбомы требует одобрения администратора');
define('NOTES', 'Заметки');

// lang_index_php
define('WELCOME', 'Добро пожаловать!');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Вы действительно хотите удалить этот альбом ? \\nВсе изображения и комментарии также будут удалены.');
define('DELETE', 'УДАЛИТЬ');
define('MODIFY', 'ИЗМЕНИТЬ');
define('EDIT_PICS', 'РЕДАКТИРОВАТЬ ИЗОБРАЖЕНИЕ');

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

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'В то время как администраторы {SITE_NAME} пытаются удалить или редактировать любой вообще нежелательный материал настолько быстро насколько возможно, невозможно рассмотреть каждый пост. Поэтому Вы признаете, что все посты, сделанные к этому участку выражают представления и мнения относительно автора, а не администраторов или вебмастеров (за исключением постов этих людей) и, следовательно, не будут считаться ответственными. <br />
<br />
Вы согласны с тем, что материал, который Вы располагаете на сайте никого не оскорбляет, не унижает, не является клеветническим, не призывает к насилию и не нарущет законов государст и человеческой морали. В то же время, администрация оставляет за слблй правл удалять материалы, по её мнению, не совиестимые с тематикой и правилами самого сайта. В то же время,  эта информация не будет раскрыта никакому третьему лицу без Вашего согласия.<br />
 <br />
Этот сайт использует КУКИ на Вашем локальном компьютере. Куки используются только для облегчения Вашей регистрации на этом сайте.<br />
<br />
Нажав \'Я согласен\', Вы соглашаетесь с данными условиями');

// lang_register_php
define('PAGE_TITLE', 'Регистрация пользователя');
define('TERM_COND', 'Соглашения и обязательства');
define('I_AGREE', 'Согласен');
define('SUBMIT', 'Подтвердить регистрацию');
define('ERR_USER_EXISTS', 'К сожалению, такое имя уже существует. Придумайте другое');
define('ERR_PASSWORD_MISMATCH', 'Пароли не совпадают. Попробуйте снова');
define('ERR_UNAME_SHORT', 'Имя должно состять из как минимум двух букв');
define('ERR_PASSWORD_SHORT', 'Пароль должен содержать как минимум два символа');
define('ERR_UNAME_PASS_DIFF', 'Имя и пароль должны быть разные');
define('ERR_INVALID_EMAIL', 'Неправильный почтовый адрес');
define('ERR_DUPLICATE_EMAIL', 'Пользователь с таким почтовым адресом уже существует.');
define('ENTER_INFO', 'Введите информацию');
define('REQUIRED_INFO', 'Необходимо');
define('OPTIONAL_INFO', 'По желанию');
define('USERNAME', 'Имя пользователя');
define('PASSWORD', 'Пароль');
define('PASSWORD_AGAIN', 'Еще раз пароль');
define('EMAIL', 'Почтовый адрес');
define('LOCATION', 'Месторасположение');
define('INTERESTS', 'Интересы');
define('WEBSITE', 'Сайт');
define('OCCUPATION', 'Род деятельности');
define('ERROR', 'ОШИБКА');
define('CONFIRM_EMAIL_SUBJECT', '%s - Подтверждение регистрации');
define('INFORMATION', 'Информация');
define('FAILED_SENDING_EMAIL', 'Сообщение о подтверждении регистрации не может быть выслано!');
define('THANK_YOU', 'Спасибо за регистрацию.<br /><br />ключ для активизации был выслан на введённый вами адрес. Проверьте свою почту для более подробной информации.');
define('ACCT_CREATED', 'Спасибо за регистрацию, учётная запись была создана. Вы можете войти в систему, используя ваше имя и пароль.');
define('ACCT_ACTIVE', 'Ваша учётная запись была активизирована. Вы можете войти в систему, используя Ваше имя и пароль.');
define('ACCT_ALREADY_ACT', 'Ваша учётная запись уже активна!');
define('ACCT_ACT_FAILED', 'Эта учётная запись не может быть активизирована!');
define('ERR_UNK_USER', 'Выбранный пользователь не существует!');
define('X_S_PROFILE', 'Профиль для пользователя %s\'s');
define('GROUP', 'Группа');
define('REG_DATE', 'Зарегистрирован');
define('DISK_USAGE', 'Использование дисковой квоты');
define('CHANGE_PASS', 'Изменить пароль');
define('CURRENT_PASS', 'Существующий пароль');
define('NEW_PASS', 'Новый пароль');
define('NEW_PASS_AGAIN', 'Повторить новый пароль');
define('ERR_CURR_PASS', 'Существующий пароль некорректен');
define('APPLY_MODIF', 'Применить');
define('UPDATE_SUCCESS', 'Ваш профиль был изменён');
define('PASS_CHG_SUCCESS', 'Ваш пароль был изменён');
define('PASS_CHG_ERROR', 'Ваш пароль НЕ был изменён');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Спасибо за регистрацию на сайте {SITE_NAME}

Ваше имя : "{USER_NAME}"
Ваш пароль : "{PASSWORD}"

Для активации новой учетной записи Вам нужно нажать на нижеследуюшую ссылку

{ACT_LINK}

Всего хорошего,

Администрация сайта {SITE_NAME}
');

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
define('ALBUM', 'Альбом');
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
define('ALBUM', 'Альбом');
define('PICTURE', 'Изображение');
define('PIC_TITLE', 'Заголовок изображения');
define('DESCRIPTION', 'Описание изображения');
define('KEYWORDS', 'Ключевые слова (разделять пробелом)');
define('ERR_NO_ALB_UPLOADABLES', 'Извините, но альбомов, в которые Вы можете загружать изображения, не существует');

// lang_usermgr_php
define('TITLE', 'Управление пользователями');
define('NAME_A', 'Имя по возрастанию');
define('NAME_D', 'Имя по убыванию');
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
define('DELETE', 'УДАЛИТЬ');
define('NAME', 'Имя пользователя');
define('GROUP', 'Группа');
define('INACTIVE', 'Неактивный');
define('OPERATIONS', 'Операции');
define('PICTURES', 'Изображения');
define('DISK_SPACE', 'Используемое дисковое пространство/дисковая квота');
define('REGISTERED_ON', 'Зарегистрирован в ');
define('U_USER_ON_P_PAGES', '%d пользователь(ей) на %d странице(ах)');
define('CONFIRM_DEL', 'Вы действительно хотите удалить данного пользователя ? \\nВсе его изображения и альбомы также будут удалены.');
define('MAIL', 'ПОЧТА');
define('ERR_UNKNOWN_USER', 'Выбранный пользователь не существует!');
define('MODIFY_USER', 'Редактировать пользователя');
define('NOTES', 'Заметки');
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
define('TITLE', 'Изменить размер');
define('WHAT_IT_DOES', 'Что это делает');
define('WHAT_UPDATE_TITLES', 'Обновить название из имени файла');
define('WHAT_DELETE_TITLE', 'Удалить названия');
define('WHAT_REBUILD', 'Перестроить эксизы и изменить размер фото');
define('WHAT_DELETE_ORIGINALS', 'Замена оригинальных изображений на изображения с измененным размером');
define('FILE', 'Файл');
define('TITLE_SET_TO', 'установлено название в');
define('SUBMIT_FORM', 'отправить');
define('UPDATED_SUCCESFULLY', 'обновление прошло успешно');
define('ERROR_CREATE', 'ОШИБКА создания');
define('CONTINUE', 'В процессе много излбражений');
define('MAIN_SUCCESS', 'Файл %s используетсяся как главное изображение');
define('ERROR_RENAME', 'Ошибка переменования %s в %s');
define('ERROR_NOT_FOUND', 'Файл %s не найден');
define('BACK', 'назад на главную');
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
define('UPDATE', 'Обновление эксизов и/или размеров изображений');
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
define('DELETE', 'Удалить название изображения и оригинальный размер');
define('DELETE_TITLE', 'Удалить название картинки');
define('DELETE_ORIGINAL', 'Удалить оригинальный размер изображения');
define('DELETE_REPLACE', 'Замена оригинальных изображений на изображения с измененным размером');
define('SELECT_ALBUM', 'Выбрать альбом');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Просмотр изображений');
define('USR', '\'s галерея');
define('PHOTOGALLERY', 'Фотогалерея');
?>