<?php 
/***************************************************************************  
   Coppermine Photo Gallery 1.3.1 for CPG-Nuke                                
  **************************************************************************  
   Port Copyright (C) 2004 Coppermine/CPG-Nuke Dev Team                        
   http://cpgnuke.com/                                               
  **************************************************************************  
   Copyright (C) 2002,2003  Gr�gory DEMAR <gdemar@wanadoo.fr>                 
   http://coppermine.sf.net/team/                                        
   This program is free software; you can redistribute it and/or modify       
   it under the terms of the GNU General Public License as published by       
   the Free Software Foundation; either version 2 of the License, or          
   (at your option) any later version.                                        
  **************************************************************************  
  Last modification notes:
  $Source: /cvs/languages/russian/modules/coppermine/language/lang-russian-utf-8.php,v $
  $Revision: 1.2 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:41 $
****************************************************************************/
global $module_name, $lang_usermgr_php,$lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;  
define('PIC_VIEWS','Views');
define('PIC_VOTES','Votes');
define('PIC_COMMENTS','Comments');

// lang_translation_info
define('LANG_NAME_ENGLISH','Russian');
define('LANG_NAME_NATIVE','Русский');
define('LANG_COUNTRY_CODE','ru');
define('TRANS_NAME','Israelin');
define('TRANS_EMAIL','admin@mdforum.dynu.com');
define('TRANS_WEBSITE','http://mdforum.dynu.com');
define('TRANS_DATE','2004-05-28');
define('CHARSET','windows-1251');
define('TEXT_DIR','ltr');
define('YES','Да');
define('NO','Нет');
define('BACK','назад на главную');
define('CONTINU','Finish');
define('INFO','Информация');
//define('_ERROR', 'Error'); //already in main lang file
define('ALBUM_DATE_FMT','%B %d, %Y');
define('LASTCOM_DATE_FMT','%m/%d/%y at %H:%M');
define('LASTUP_DATE_FMT','%B %d, %Y');
define('REGISTER_DATE_FMT','%B %d, %Y');
define('LASTHIT_DATE_FMT','%B %d, %Y at %I:%M %p');
define('COMMENT_DATE_FMT','%B %d, %Y at %I:%M %p');

// lang_meta_album_names
define('RANDOM','Случайные изображения');
define('LASTUP','Последний добавления');
define('LASTUPBY','Мои последние добавления');
define('LASTALB','Последнее обновление альбома');
define('LASTCOM','Последние комментарии');
define('LASTCOMBY','Мои последние комментарии');
define('TOPN','Часто просматриваемые');
define('TOPRATED','Лучшие по рейтингу');
define('LASTHITS','Последние просмотренные');
define('SEARCH','Поиск коллекции изображений');
define('FAVPICS','Избранные');

// lang_errors
define('ACCESS_DENIED','У Вас нет доступа сюда.');
define('PERM_DENIED','Нет доступа для выполнения команды.');
define('PARAM_MISSING','Скрипт был вызван без необходимых параметров.');
define('NON_EXIST_AP','Выбранный альбом/изображение не существует !');
define('QUOTA_EXCEEDED','Ваше место закончилось<br /><br />Ваща квота составляет [quota]K, Вы уже используете [space]K, добавление этого изображения может превысить Вашу квоту.');
define('GD_FILE_TYPE_ERR','При использовании библиотеки GD image разрешено использовать только типы JPEG и PNG.');
define('INVALID_IMAGE','Загружаемое Вами изображение повреждено или не соответствует типам изображений библиотеки GD.');
define('RESIZE_FAILED','Невозможно подготовить эскиз или изменить размер изображения.');
define('NO_IMG_TO_DISPLAY','Изображений нет');
define('NON_EXIST_CAT','Выбранная категория не существует');
define('ORPHAN_CAT','Категория не имеет родительскую категорию, используйте менеджер категорий для решения проблемы.');
define('DIRECTORY_RO','В категорию \'%s\' невозможна запись, изображение не может быть удалено.');
define('NON_EXIST_COMMENT','Выбранный Вами комментарий не существует.');
define('PIC_IN_INVALID_ALBUM','Изображение  находится в несуществующем альбоме (%s)!?');
define('BANNED','Вы забанены на этом сайте.');
define('NOT_WITH_UDB','Эта функция выключена в Coppermine, потому, что объединена с форумом. Или то, что вы пытаетесь сделать, не поддерживается в этой конфигурации, или эта функция должна быть обработана форумом.');
define('MEMBERS_ONLY','Это действие разрешено только зарегистрированным пользователям, пожалуйста, зарегистрируйтесь.');
define('MUSTBE_GOD','Это действие разрешено только администраторам сайта. Вы должны быть зарегистрированы как суперамин или как админинстратор сайта');
define('NO_IMG_TO_APPROVE','No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE','К списку альбомов');
define('ALB_LIST_LNK','Список альбомов');
define('MY_GAL_TITLE','Перейти к моей личной галерее');
define('MY_GAL_LNK','Моя галерея');
define('MY_PROF_LNK','Мой профиль');
define('MY_PROF_TITLE','Проверьте дисковую квоту и группы');
define('ADM_MODE_TITLE','Включить режим админа');
define('ADM_MODE_LNK','Режим админа');
define('USR_MODE_TITLE','Включить режим пользователя');
define('USR_MODE_LNK','Режим пользователя');
define('UPLOAD_PIC_TITLE','Загрузить изображение в данный альбом');
define('UPLOAD_PIC_LNK','Загрузить изображение');
define('REGISTER_TITLE','Создать аккунт');
define('REGISTER_LNK','Зарегистрироваться');
define('LOGIN_LNK','Войти');
define('LOGOUT_LNK','Выйти');
define('LASTUP_LNK','Последние закачки');
define('LASTUP_TITLE','Изображения, загруженные недавно');
define('TOPN_TITLE','Изображения, отмеченные больше всего');
define('TOPN_LNK','Самые популярные');
define('TOPRATED_TITLE','Изображения с высшим рейтингом');
define('TOPRATED_LNK','Top rated');
define('SEARCH_TITLE','Search Photo Collection');
define('SEARCH_LNK','Поиск');
define('FAV_TITLE','My Favorites');
define('FAV_LNK','Избранные');
define('HELP_TITLE','HELP');

// lang_gallery_admin_menu
define('UPL_APP_LNK','Загрузить выбранное');
define('CONFIG_LNK','Конфигурирование');
define('ALBUMS_LNK','Альбомы');
define('CATEGORIES_LNK','Категории');
define('USERS_LNK','Пользователи');
define('GROUPS_LNK','Группы');
define('COMMENTS_LNK','Комментарии');
define('SEARCHNEW_LNK','Массовое добавление изображений');
define('UTIL_LNK','Изменить размер');
define('BAN_LNK','Бан пользователей');

// lang_user_admin_menu
define('ALBMGR_LNK','Создание/упорядочивание альбомов');
define('MODIFYALB_LNK','Изменение моих альбомов');
//define('MY_PROF_LNK', 'My profile');

// lang_cat_list
define('CATEGORY','Категория');
define('ALBUMS','Альбомы');
//define('PICTURES', 'Pictures');

// lang_album_list
define('ALBUM_ON_PAGE','%d альбомов на %d страницах');
// lang_thumb_view
define('DATE','Дата');
define('NAME','Имя пользователя');
define('TITLE','Изменить размер');
define('SORT_DA','Сортировка по дате (возрастание)');
define('SORT_DD','Сортировка по дате (убывание)');
define('SORT_NA','Сортировка по имени (возрастание)');
define('SORT_ND','Сортировка по имени (убывание)');
define('SORT_TA','Сортировка по названию (возрастание)');
define('SORT_TD','Сортировка по названию (убывание)');
define('PIC_ON_PAGE','%d изображений на %d странице(ах)');
define('USER_ON_PAGE','%d пользователей на %d странице(ах)');
define('SORT_RA','Сортировка по рейтингу (возрастание)');
define('SORT_RD','Сортировка по рейтингу (убывание)');
define('THUMB_RATING','RATING');
define('SORT_TITLE','Сортировка изображений по:');

// lang_img_nav_bar
define('THUMB_TITLE','Вернуться к странице эскизов');
define('PIC_INFO_TITLE','Показать/скрыть информацию об изображении');
define('SLIDESHOW_TITLE','Слайд-шоу');
define('SLIDESHOW_DISABLED','Слайд-шоу отключено');
define('SLIDESHOW_DISABLED_MSG','Это действие разрешено только зарегистрированным пользователям, пожалуйста, зарегистрируйтесь.');
define('ECARD_TITLE','Для Вас открытка от %s');
define('ECARD_DISABLED','Возможность отправки открыток отключена');
define('ECARD_DISABLED_MSG','У Вас нет прав отсылать открытки');
define('PREV_TITLE','Посмотреть предыдушее изображение');
define('NEXT_TITLE','Посмотреть следующее изображение');
define('PIC_POS','Изображение %s/%s');
define('NO_MORE_IMAGES','В этой галерее нет больше изображений');
define('NO_LESS_IMAGES','Первое изображение в этой галерее');

// lang_rate_pic
define('RATE_THIS_PIC','Оценить изображение (звездочки)');
define('NO_VOTES','(Никто не проголосовал)');
define('RATING','Рейтинг (%s голос(ов))');
define('RUBBISH','Мусор');
define('POOR','Плохо');
define('FAIR','Средне');
define('GOOD','Хорошо');
define('EXCELLENT','Отлично');
define('GREAT','Великолепно!');

// lang_cpg_die
//define('INFO', 'Information');
//define('ERROR', 'Error');
define('_CRITICAL_ERROR','Critical error');
define('FILE','Файл');
define('LINE','Строка: ');

// lang_display_thumbnails
define('FILENAME','Имя файла');
define('FILESIZE','Размер файла : ');
define('DIMENSIONS','Разрешение');
define('DATE_ADDED','Дата добавления : ');

// lang_get_pic_data
define('N_COMMENTS','%s комментариий(ев)');
define('N_VIEWS','%s просмотр(а,ов)');
define('N_VOTES','(%s голос(а,ов))');


// lang_albmgr_php
define('ALB_NEED_NAME','У альбома должно быть имя!');
define('CONFIRM_MODIFS','Вы действительно хотите сделать эти изменения?');
define('NO_CHANGE','Вы не сделали никаких изменений!');
define('NEW_ALBUM','Новый альбом');
define('CONFIRM_DELETE1','Вы действительно хотите удалить этот альбом?');
define('CONFIRM_DELETE2','\nВсе изображения и комментарии будут утеряны!');
define('SELECT_FIRST','Сначала выберете альбом');
define('ALB_MRG','Управление альбомами');
define('MY_GALLERY','* Моя галерея *');
define('NO_CATEGORY','* Категорий нет *');
define('DELETE','Удалить название изображения и оригинальный размер');
define('NEW','Новый');
define('APPLY_MODIFS','Произвести изменения');
define('SELECT_CATEGORY','Выбрать категорию');

// lang_catmgr_php
define('MISS_PARAM','Параметры, затребованные для \'%s\'операции не поддерживаются!');
define('UNKNOWN_CAT','Выбранная категория не существует в базе данных');
define('USERGAL_CAT_RO','Пользовательские категории не могут быть удалены!');
define('MANAGE_CAT','Управление категориями');
define('CONFIRM_DELETE_CAT','Are you sure you want to DELETE this category');
//define('CATEGORY', 'Category');
define('OPERATIONS','Операции');
define('MOVE_INTO','Переместить в');
define('UPDATE_CREATE','Создание/изменение категории');
define('PARENT_CAT','Родительская категория');
define('CAT_TITLE','Заголовок категории');
define('CAT_DESC','Описание категории');

// lang_config_php
define('CONFIG_TITLE','Configuration');
define('RESTORE_CFG','Восстановить настройки по умолчанию');
define('SAVE_CFG','Сохранить изменения');
define('NOTES','Заметки');
//define('INFO', 'Information');
define('UPD_SUCCESS','Конфигурация Coppermine изменена');
define('RESTORE_SUCCESS','Настройки Coppermine по умолчанию восстановлены');
define('NAME_A','Имя по возрастанию');
define('NAME_D','Имя по убыванию');
define('TITLE_A','Заголовок по возрастанию');
define('TITLE_D','Заголовок по убыванию');
define('DATE_A','Дата по возрастанию');
define('DATE_D','Дата по убыванию');
define('RATING_A','Рейтинг по возрастанию');
define('RATING_D','Рейтинг по убыванию');
define('TH_ANY','Максимальный аспект');
define('TH_HT','Высота');
define('TH_WD','Ширина');


// lang_db_input_php
define('EMPTY_NAME_OR_COM','Вам нужно ввести Ваше имя и комментарий');
define('COM_ADDED','Комментарий добавлен');
define('ALB_NEED_TITLE','Вы должны дать название для альбома!');
define('NO_UDP_NEEDED','Никаких изменений не требуется.');
define('ALB_UPDATED','Альбом изменён');
define('UNKNOWN_ALBUM','Выбранный альбом не существует или у Вас нет прав на загрузку изображений в этот альбом');
define('NO_PIC_UPLOADED','Изображение не загружено !<br /><br />Если Вы выбрали действительно существующее изображение для загрузки, убелитесь, что сервер имеет возможность загружать файлы (CHMOD)...');
define('ERR_MKDIR','Ошибка при создании директории %s');
define('DEST_DIR_RO','Директория назначения %s закрыта для записи!');
define('ERR_MOVE','Невозможно переместить %s в %s!');
define('ERR_FSIZE_TOO_LARGE','Размер загружаемого файла больше разрешённого (максимально разрешённый размер -  %s x %s)');
define('ERR_IMGSIZE_TOO_LARGE','Размер загружаемого файла больше разрешённого (максимально разрешённый размер - %s KB)');
define('ERR_INVALID_IMG','Файл, который Вы пытаетесь загрузить, не является изображением!');
define('ALLOWED_IMG_TYPES','Вы можете загружать только %s изображения.');
define('ERR_INSERT_PIC','Изображение \'%s\' не не может быть загружено в альбом ');
//define('INFO', 'Information');
define('ERR_COMMENT_EMPTY','Ваш комментарий пуст!');
define('ERR_INVALID_FEXT','Разрешены к загрузке файлы со следующими расширениями : <br /><br />%s.');
define('NO_FLOOD','Извините, но Вы уже являетесь автором последнего комментария к этому изображению.<br /><br />Если хотите, можете изменить Ваш комментарий');
define('REDIRECT_MSG','Вы были перенаправлены.<br /><br /><br />Нажмите \'ПРОДОЛЖИТЬ\', если перенаправление не произошло автоманически');
define('UPL_SUCCESS','Ваше изображение добавлено');

// lang_delete_php
define('CAPTION','Заголовок');
define('FS_PIC','Полный размер изображения');
define('DEL_SUCCESS','удалено');
define('NS_PIC','нормальный размер изображения');
define('ERR_DEL','не может быть удалено');
define('THUMB_PIC','эскиз');
//define('COMMENT', 'comment');
define('IM_IN_ALB','изображение в альбоме');
define('ALB_DEL_SUCCESS','Альбом \'%s\' удалён');
define('ALB_MGR','Управление альбомом');
define('ERR_INVALID_DATA','Дата получена неправильно в \'%s\'');
define('CREATE_ALB','Создание альбома \'%s\'');
define('UPDATE_ALB','Изменение альбома \'%s\' с названием \'%s\' и индексом \'%s\'');
define('DEL_PIC','Удалить изображение');
define('DEL_ALB','Удалить альбом');
define('DEL_USER','Удалить пользователя');
//define('ERR_UNKNOWN_USER', 'The selected user does not exist !');
define('COMMENT_DELETED','Комментарий удалён');

// lang_display_image_php
define('PIC_CONFIRM_DEL','Are you sure you want to DELETE this picture ? \nComments will also be deleted.');
define('DEL_THIS_PIC','DELETE THIS PICTURE');
define('SIZE','%s x %s пиксель(ей)');
define('VIEWS','%s раз(а)');
define('SLIDESHOW','Слайд-шоу');
define('STOP_SLIDESHOW','Остановить Слайд-шоу');
define('VIEW_FS','Нажмите для просмотра полного изображения');
define('EDIT_PIC','Редактировать информацию об изображении');

// lang_picinfo
define('PIC_INF_TITLE','Picture information');
define('PIC_INF_FILENAME','Filename');
define('ALBUM_NAME','Album name');
define('PIC_INFO_RATING','Rating (%s votes)');
define('KEYWORDS','Ключевые слова (разделять пробелом)');
define('PIC_INF_FILE_SIZE','File Size');
define('PIC_INF_DIMENSIONS','Dimensions');
define('DISPLAYED','Показано');
define('CAMERA','Камера');
define('DATE_TAKEN','Date taken');
define('APERTURE','Апертура');
define('EXPOSURE_TIME','Exposure time');
define('FOCAL_LENGTH','Focal length');
define('COMMENT','Комментарий');
define('ADDFAV','Добавить в избранное');
define('ADDFAVPHRASE','Избранное');
define('REMFAV','Удалить из избранного');
define('IPTCTITLE','Заголовок IPTC');
define('IPTCCOPYRIGHT','Копирайт IPTC');
define('IPTCKEYWORDS','Ключевые слова IPTC');
define('IPTCCATEGORY','Категория IPTC');
define('IPTCSUBCATEGORIES','Подкатегория IPTC');
define('BOOKMARK_PAGE','Изображение закладки');
define('REMOVEFAV','Removed from Favorites Album');
define('ADDEDTOFAV','Added to Favorites Album');

// lang_display_comments
define('OK','OK');
define('COM_EDIT_TITLE','Edit this comment');
define('CONFIRM_DELETE_COM','Are you sure you want to delete this comment ?');
define('ADD_YOUR_COMMENT','Прокомментировать');
define('COM_NAME','Name');
//define('COMMENT', 'Comment');
define('YOUR_NAME','Ваше имя');

// lang_fullsize_popup
define('CLICK_TO_CLOSE','Нажмите на изображение, чтобы закрыть окно');

// lang_ecard_php
define('E_TITLE','Send an e-card');
define('INVALID_EMAIL','<b>Внимание</b> : неправильный адрес электронной почты !');
define('E_ECARD_TITLE','An e-card from %s for you');
define('VIEW_ECARD','Если открытка отображается неправильно, то нажмите здесь');
define('VIEW_MORE_PICS','Нажмите на эту ссылку для просмотра других изображений');
define('SEND_SUCCESS','Ваша открытка была отослана');
define('SEND_FAILED','Извините, но Ваша открытка не может быть отправлена сервером...');
define('FROM','От');
define('_YOUR_NAME','Your name');
define('YOUR_EMAIL','Ваш адрес электронной почты');
define('TO','Кому');
define('RCPT_NAME','Имя получателя');
define('RCPT_EMAIL','Адрес получателя');
define('GREETINGS','Заголовок');
define('MESSAGE','Сообщение');
define('ECARD_LINK_CORRUPT','Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser');

// lang_editpics_php
define('PIC_INFO','Информация&nbsp;об изображении');
define('ALBUM','Альбом');
define('EDIT_TITLE','Отредактировать');
define('DESC','Описание');
//define('KEYWORDS', 'Keywords');
define('PIC_INFO_STR','%sx%s - %sKB - %s просмотр(а,ов) - %s голос(а,ов)');
define('APPROVE','Одобрить изображение');
define('POSTPONE_APP','Отложенное одобрение');
//define('DEL_PIC', 'Delete picture');
define('READ_EXIF','Перечитать информацию EXIF заново');
define('RESET_VIEW_COUNT','Сбросить счётчик просмотров');
define('RESET_VOTES','Сбросить голосование');
define('DEL_COMM','Удалить выбранные комментарии');
define('UPL_APPROVAL','Одобрить');
define('EDIT_PICS','РЕДАКТИРОВАТЬ ИЗОБРАЖЕНИЕ');
define('SEE_NEXT','Посмотреть следующий');
define('SEE_PREV','Посмотреть предыдущий');
define('N_PIC','%s изображение(ий)');
define('N_OF_PIC_TO_DISP','Количество изображений к показу');
define('APPLY','Применить');

// lang_groupmgr_php
define('GROUP_NAME','Имя группы');
define('DISK_QUOTA','Дисковая квота');
define('CAN_RATE','Посетители могут оценивать изображения');
define('CAN_SEND_ECARDS','Может посылать открытки');
define('CAN_POST_COM','Может размещать комментарии');
define('CAN_UPLOAD','Посетители могут загружать изображения');
define('CAN_HAVE_GALLERY','Может иметь собственные галереи');
//define('APPLY', 'Apply modifications');
define('CREATE_NEW_GROUP','Создать новую группу');
define('DEL_GROUPS','Удалить выбранную(ые) группу(ы)');
define('CONFIRM_DEL','Вы действительно хотите удалить данного пользователя ? \nВсе его изображения и альбомы также будут удалены.');
define('GROUP_TITLE','Manage user groups');
define('APPROVAL_1','Одобрение загрузки - общие альбомы(1)');
define('APPROVAL_2','Одобрение загрузки - личные альбомы (2)');
define('NOTE1','<b>(1)</b> Загрузка в общие альбомы требует одобрения администратора');
define('NOTE2','<b>(2)</b> Загрузка в частные альбомы требует одобрения администратора');
//define('NOTES', 'Notes');

// lang_index_php
define('WELCOME','Добро пожаловать!');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB','Are you sure you want to DELETE this album ? \nAll pictures and comments will also be deleted.');
//define('DELETE', 'DELETE');
define('MODIFY','ИЗМЕНИТЬ');
//define('EDIT_PICS', 'EDIT PICS');

// lang_list_categories
define('HOME','В начало');
define('STAT1','<b>[pictures]</b> изображение(ий) в <b>[albums]</b> альбоме(ах) и <b>[cat]</b> категориях с <b>[comments]</b> комментарием(ями). Просмотрено <b>[views]</b> раз(а)');
define('STAT2','<b>[pictures]</b> изображение(ий) в <b>[albums]</b> альбоме(ах) просмотрено <b>[views]</b> раз(а)');
define('XX_S_GALLERY','%s\'s Галерея(и,ей)');
define('STAT3','<b>[pictures]</b> изображение(ий) в <b>[albums]</b> альбоме(ах) с <b>[comments]</b> комметнарием(ями) просмотрено <b>[views]</b> раз(а)');

// lang_list_users
define('USER_LIST','Список пользователей');
define('NO_USER_GAL','Нет пользователей, которым позволено создавать собственные альбомы');
define('N_ALBUMS','%s альбом(а,ов)');
define('N_PICS','%s изображение(ий)');

// lang_list_albums
define('N_PICTURES','%s изображение(ий)');
define('LAST_ADDED',', последнее добавленное %s');

// lang_modifyalb_php
define('UPD_ALB_N','Изменить альбом %s');
define('GENERAL_SETTINGS','Основные настройки');
define('ALB_TITLE','Название альбома');
define('ALB_CAT','Категория альбома');
define('ALB_DESC','Описание альбома');
define('ALB_THUMB','Предосмотр альбома');
define('ALB_PERM','Права для этого альбома');
define('CAN_VIEW','Альбом может быть просмотрен');
define('MOD_CAN_UPLOAD','Visitors can upload pictures');
define('CAN_POST_COMMENTS','Посетители могут размещать комментарии');
define('MOD_CAN_RATE','Visitors can rate pictures');
define('USER_GAL','Пользовательские галереи');
define('NO_CAT','* Нет категорий *');
define('ALB_EMPTY','Альбом пуст');
define('LAST_UPLOADED','Последнее загруженное');
define('PUBLIC_ALB','Все (общий альбом)');
define('ME_ONLY','Только я');
define('OWNER_ONLY','Владелец альбома (%s) только');
define('GROUPP_ONLY','Члены группы \'%s\' ');
define('ERR_NO_ALB_TO_MODIFY','Нет альбомов, которые Вы можете редактировать.');
define('UPDATE','Обновление эксизов и/или размеров изображений');

// lang_rate_pic_php
define('ALREADY_RATED','Вы уже голосовали');
define('RATE_OK','Спасибо за голос');

// lang_register_php
define('USERNAME','Имя пользователя');
define('GROUP','Группа');
define('DISK_USAGE','Использование дисковой квоты');
define('X_S_PROFILE','Профиль для пользователя %s\'s');

// lang_reviewcom_php
define('REVIEW_TITLE','Review comments');
define('NO_COMMENT','Нет комментариев для просмотра');
define('N_COMM_DEL','%s комментарий(ев) удалён(ены)');
define('N_COMM_DISP','Количество отображаемых комментариев');
define('R_SEE_PREV','See previous');
define('R_SEE_NEXT','See next');
define('R_DEL_COMM','Delete selected comments');

// lang_search_php
define('S_SEARCH','Search the image collection');

// lang_search_new_php
define('PAGE_TITLE','Искать новые изображения');
define('SELECT_DIR','Выбрать директорию');
define('SELECT_DIR_MSG','Эта функция позволит Вам добавить сразу несколько изображений для загрузки по протоколу FTP.<br /><br />Выберете директортю, в которую Вы хотите разместить эти изображения');
define('NO_PIC_TO_ADD','Нет изображений для добавления');
define('NEED_ONE_ALBUM','Чтобы использовать эту функцию, Вам нужно иметь как минимум один альбом');
define('WARNING','Внимание');
define('CHANGE_PERM','Невозможно произвести запись в эту директорию, Вам нужно изменить CHMOD на 755 или 777 перед тем, как пробовать добавлять изображения в эту директорию!');
define('TARGET_ALBUM','<b>Разместите изображение &quot;</b>%s<b>&quot; в </b>%s');
define('FOLDER','Папка (Директория)');
define('IMAGE','Изображение');
//define('ALBUM', 'Album');
define('RESULT','Результат');
define('DIR_RO','Запись невозможна. ');
define('DIR_CANT_READ','Чтение невозможно. ');
define('INSERT','Добавление нового изображения в категорию');
define('LIST_NEW_PIC','Просмотр новых изображений');
define('INSERT_SELECTED','Вставить выбранные изображения');
define('NO_PIC_FOUND','Новых изображений не найдено');
define('BE_PATIENT','Пожалуйста, будьте терпеливы. Для добавления изображений в директорию требуется время');
define('SN_NOTES','<ul><li><b>OK</b> : means that the picture was succesfully added<li><b>DP</b> : means that the picture is a duplicate and is already in the database<li><b>PB</b> : means that the picture could not be added, check your configuration and the permission of directories where the pictures are located<li>If the OK, DP, PB \'signs\' does not appear click on the broken picture to see any error message produced by PHP<li>If your browser timeout, hit the reload button</ul>');
define('SELECT_ALBUM','Выбрать альбом');
define('NO_ALBUM','Не было выбрано ни одного альбома. Вернитесь назад и выберете альбом для размещения изображения');

// lang_upload_php
define('UP_TITLE','Upload picture');
define('MAX_FSIZE','Максимально разрешённый размер %s KB');
//define('ALBUM', 'Album');
define('PICTURE','Изображение');
define('PIC_TITLE','Заголовок изображения');
define('DESCRIPTION','Описание изображения');
define('UP_KEYWORDS','Keywords (separate with spaces)');
define('ERR_NO_ALB_UPLOADABLES','Извините, но альбомов, в которые Вы можете загружать изображения, не существует');

// lang_usermgr_php
define('U_TITLE','Manage users');
//define('NAME_A', 'Name ascending');
//define('NAME_D', 'Name descending');
define('GROUP_A','Группы по возрастанию');
define('GROUP_D','Группы по убыванию');
define('REG_A','Дата регистрации по возрастанию');
define('REG_D','Дата регистрации по убыванию');
define('PIC_A','Счётчик по возрастанию');
define('PIC_D','Счётчик по убыванию');
define('DISKU_A','Использование дискового пространства по возрастанию');
define('DISKU_D','Использование дискового пространства по убыванию');
define('SORT_BY','Сортировать пользователей по');
define('ERR_NO_USERS','Таблица пользователей пуста!');
define('ERR_EDIT_SELF','Вы не можете редактировать свой профиль, используйте для этого ссылку \'Мой профиль\'');
define('EDIT','РЕДАКТИРОВАТЬ');
//define('DELETE', 'DELETE');
define('U_NAME','User name');
//define('GROUP', 'Group');
define('INACTIVE','Неактивный');
//define('OPERATIONS', 'Operations');
define('PICTURES','Изображения');
define('DISK_SPACE','Используемое дисковое пространство/дисковая квота');
define('REGISTERED_ON','Зарегистрирован в ');
define('U_USER_ON_P_PAGES','%d пользователь(ей) на %d странице(ах)');
define('USER_CONFIRM_DEL','Are you sure you want to DELETE this user ? \nAll his pictures and albums will also be deleted.');
define('MAIL','ПОЧТА');
define('ERR_UNKNOWN_USER','Выбранный пользователь не существует!');
define('MODIFY_USER','Редактировать пользователя');
//define('NOTES', 'Notes');
define('NOTE_LIST','<li>Если Вы не хотите изменять пароль, оставьте поле "Пароль" пустым');
define('PASSWORD','Пароль');
define('USER_ACTIVE_CP','Пользователь активен');
define('USER_GROUP_CP','Группа пользователя');
define('USER_EMAIL','Адрес электронной почты');
define('USER_WEB_SITE','Сайт пользователя');
define('CREATE_NEW_USER','Создать пользователя');
define('USER_FROM','Месторасположение пользователя');
define('USER_INTERESTS','Интересы');
define('USER_OCC','Занятия');

// lang_util_php
define('UTIL_TITLE','Resize pictures');
define('WHAT_IT_DOES','Что это делает');
define('WHAT_UPDATE_TITLES','Обновить название из имени файла');
define('WHAT_DELETE_TITLE','Удалить названия');
define('WHAT_REBUILD','Перестроить эксизы и изменить размер фото');
define('WHAT_DELETE_ORIGINALS','Замена оригинальных изображений на изображения с измененным размером');
define('U_FILE','File');
define('TITLE_SET_TO','установлено название в');
define('SUBMIT_FORM','отправить');
define('UPDATED_SUCCESFULLY','обновление прошло успешно');
define('ERROR_CREATE','ОШИБКА создания');
define('CONTIN','Process more images');
define('MAIN_SUCCESS','Файл %s используетсяся как главное изображение');
define('ERROR_RENAME','Ошибка переменования %s в %s');
define('ERROR_NOT_FOUND','Файл %s не найден');
define('U_BACK','back to main');
define('THUMBS_WAIT','Обновление эксизов и/или изменения размеров изображения, пожалуйста подождите...');
define('THUMBS_CONTINUE_WAIT','Продолжение обновления эксиза и/или изменения размеров изображения...');
define('TITLES_WAIT','Обновление заголовков, пожалуйста подождите...');
define('DELETE_WAIT','Удаление заголовков, пожалуйста подождите...');
define('REPLACE_WAIT','Удаление оригинальных изображений и замена их измененными, пожалуйста подождите..');
define('INSTRUCTION','Быстрые инструкции');
define('INSTRUCTION_ACTION','Выберите действие');
define('INSTRUCTION_PARAMETER','Установить параметры');
define('INSTRUCTION_ALBUM','Выбрать альбом');
define('INSTRUCTION_PRESS','Нажмите %s');
define('U_UPDATE','Update thumbs and/or resized photos');
define('UPDATE_WHAT','Что должно быть обновлено');
define('UPDATE_THUMB','Только эксизы');
define('UPDATE_PIC','Только изменение размеров');
define('UPDATE_BOTH','Эксизы и изменения размеров');
define('UPDATE_NUMBER','Число обработанных изображений');
define('UPDATE_OPTION','(Попробуйте настроить опцию ниже, если у вас проблемы с timeout)');
define('FILENAME_TITLE','Имя файла ? Название изображения');
define('FILENAME_HOW','Как должно быть изменено имя файла');
define('FILENAME_REMOVE','Удалить в конце .jpg и заменить _ (подчеркивание) с пробелами');
define('FILENAME_EURO','Изменить 2004_11_23_13_20_20.jpg на 23/11/2003 13:20');
define('FILENAME_US','Изменить 2004_11_23_13_20_20.jpg на 11/23/2003 13:20');
define('FILENAME_TIME','Изменить 2004_11_23_13_20_20.jpg на 13:20');
define('UT_DELETE','Delete picture titles or original size photos');
define('DELETE_TITLE','Удалить название картинки');
define('DELETE_ORIGINAL','Удалить оригинальный размер изображения');
define('DELETE_REPLACE','Замена оригинальных изображений на изображения с измененным размером');
//define('SELECT_ALBUM', 'Select album');

// lang_pagetitle_php
define('VIEWING','Просмотр изображений');
define('USR','\'s галерея');
define('PHOTOGALLERY','Фотогалерея');
$lang_usermgr_php = array(
    'name_a' => 'Name ascending',
    'name_d' => 'Name descending',
    'group_a' => 'Group ascending',
    'group_d' => 'Group descending',
    'reg_a' => 'Reg date ascending',
    'reg_d' => 'Reg date descending',
    'pic_a' => 'Pic count ascending',
    'pic_d' => 'Pic count descending',
    'disku_a' => 'Disk usage ascending',
    'disku_d' => 'Disk usage descending',
    );
$lang_byte_units = array('Bytes', 'KB', 'MB');
$lang_day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');
$lang_meta_album_names = array(
    'random' => 'Random pictures',
    'lastup' => 'Last additions',
    'lastupby' => 'My Last additions', // new 1.2.2
    'lastalb' => 'Last updated albums',
    'lastcom' => 'Last comments',
    'lastcomby' => 'My Last comments', // new 1.2.2
    'topn' => 'Most viewed',
    'toprated' => 'Top rated',
    'lasthits' => 'Last viewed',
    'search' => 'Search results',
    'favpics' => 'Favorite Pictures' // changed in cpg1.2.0nuke
    );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array(
    'title' => 'Configuration',
    'restore_cfg' => 'Restore factory defaults',
    'save_cfg' => 'Save new configuration',
    'notes' => 'Notes',
    'info' => 'Information',
    'upd_success' => 'Coppermine configuration was updated',
    'restore_success' => 'Coppermine default configuration restored',
    'name_a' => 'Name ascending',
    'name_d' => 'Name descending',
    'title_a' => 'Title ascending',
    'title_d' => 'Title descending',
    'date_a' => 'Date ascending',
    'date_d' => 'Date descending',
    'rating_a' => 'Rating ascending', // new in cpg1.2.0nuke
    'rating_d' => 'Rating descending', // new in cpg1.2.0nuke
    'th_any' => 'Max Aspect',
    'th_ht' => 'Height',
    'th_wd' => 'Width',
    );
// start left side interpretation
$lang_config_data = array(
    'General settings',
    array('Gallery name', 'gallery_name', 0),
    array('Gallery description', 'gallery_description', 0),
    array('Gallery administrator email', 'gallery_admin_email', 0),
    array('Address to nuke folder ie http://www.mysite.tld/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
//    array('Language', 'lang', 5),
// for postnuke change
    array('Theme', 'theme', 6),
    array('Page Specific Titles instead of >Coppermine', 'nice_titles', 1),
    'Album list view',
    array('Width of the main table (pixels or %)', 'main_table_width', 0),
    array('Number of levels of sub-categories to display', 'subcat_level', 0),
    array('Number of albums to display', 'albums_per_page', 0),
    array('Number of columns for the album list', 'album_list_cols', 0),
    array('Size of thumbnails in pixels', 'alb_list_thumb_size', 0),
    array('The content of the main page', 'main_page_layout', 0),
    array('Show first level album thumbnails in categories', 'first_level', 1), 
    'Thumbnail view',
    array('Number of columns on thumbnail page', 'thumbcols', 0),
    array('Number of rows on thumbnail page', 'thumbrows', 0),
    array('Maximum number of tabs to display', 'max_tabs', 0),
    array('Display picture caption (in addition to title) below the thumbnail', 'caption_in_thumbview', 1),
    array('Display number of comments below the thumbnail', 'display_comment_count', 1),
    array('Default sort order for pictures', 'default_sort_order', 3),
    array('Minimum number of votes for a picture to appear in the \'top-rated\' list', 'min_votes_for_rating', 0),
    array('Alts and title tags of thumbnail show title and keyword instead of picinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
    'Display Image &amp; Comment settings',
    array('Width of the table for picture display (pixels or %)', 'picture_table_width', 0),
    array('Picture information are visible by default', 'display_pic_info', 1),
    array('Filter bad words in comments', 'filter_bad_words', 1),
    array('Allow smiles in comments', 'enable_smilies', 1),
    array('Allow several consecutive comments on one pic from the same user', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
    array('Email site admin upon comment submission' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
    array('Max length for an image description', 'max_img_desc_length', 0),
    array('Max number of characters in a word', 'max_com_wlength', 0),
    array('Max number of lines in a comment', 'max_com_lines', 0),
    array('Maximum length of a comment', 'max_com_size', 0),
    array('Show film strip', 'display_film_strip', 1),
    array('Number of items in film strip', 'max_film_strip_items', 0),
    array('Allow viewing of full size pic by anonymous', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
    array('Number of days between being able to vote on the same image','keep_votes_time',0), // new in cpg1.2.2c nuke
    array('Show fullsize picture in slideshow','fullsize_slideshow',1),
    array('Show blocks on the right of displayimage if right blocks are on at module level?', 'right_blocks', 1), // new 1.2.2
    'Pictures and thumbnails settings',
    array('Quality for JPEG files', 'jpeg_qual', 0),
    array('Max dimension of a thumbnail <b>*</b>', 'thumb_width', 0),
    array('Use dimension ( width or height or Max aspect for thumbnail )<b>*</b>', 'thumb_use', 7),
    array('Create intermediate pictures', 'make_intermediate', 1),
    array('Max width or height of an intermediate picture <b>*</b>', 'picture_width', 0),
    array('Max size for uploaded pictures (KB)', 'max_upl_size', 0),
    array('Max width or height for uploaded pictures (pixels)', 'max_upl_width_height', 0), 
    array('Allow multiple Files to be upload with same file name', 'samename', 1), 
    'User settings',
    array('Allow new user registrations', 'allow_user_registration', 1),
    /*array('User registration requires email verification', 'reg_requires_valid_email', 1),
    array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),*/
    array('Users can can have private albums', 'allow_private_albums', 1),
    array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
    'Custom fields for image description (leave blank if unused)',
    array('Field 1 name', 'user_field1_name', 0),
    array('Field 2 name', 'user_field2_name', 0),
    array('Field 3 name', 'user_field3_name', 0),
    array('Field 4 name', 'user_field4_name', 0), 
    'Pictures and thumbnails advanced settings',
    array('Show private album Icon to unlogged user', 'show_private', 1),
    array('Characters forbidden in filenames', 'forbiden_fname_char', 0),
    array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions', 0),
    array('Method for resizing images', 'thumb_method', 2),
    array('Path to ImageMagick / netpbm \'convert\' utility (example /usr/bin/X11/)', 'impath', 0),
    array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types', 0),
    array('Command line options for ImageMagick', 'im_options', 0),
    array('Read EXIF data in JPEG files', 'read_exif_data', 1),
    array('Read IPTC data in JPEG files', 'read_iptc_data', 1), // new in cpg1.2.0nuke
    array('The album directory <b>*</b>', 'fullpath', 0),
    array('The directory for user pictures <b>*</b>', 'userpics', 0),
    array('The prefix for intermediate pictures <b>*</b>', 'normal_pfx', 0),
    array('The prefix for thumbnails <b>*</b>', 'thumb_pfx', 0),
    array('Default mode for directories', 'default_dir_mode', 0),
    array('Default mode for pictures', 'default_file_mode', 0),
    array('Picinfo display filename', 'picinfo_display_filename', '1'), // new in cpg1.2.0nuke
    array('Picinfo display album name', 'picinfo_display_album_name', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_file_size', 'picinfo_display_file_size', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_dimensions', 'picinfo_display_dimensions', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_count_displayed', 'picinfo_display_count_displayed', '1'), // new in cpg1.2.0nuke
    array('Picinfo display_URL', 'picinfo_display_URL', '1'), // new in cpg1.2.0nuke
    array('Picinfo display URL as bookmark link', 'picinfo_display_URL_bookmark', '1'), // new in cpg1.2.0nuke
    array('Picinfo display fav album link', 'picinfo_display_favorites', '1'), // new in cpg1.2.0nuke
    'Cookies &amp; Charset settings',
    array('Name of the cookie used by the script', 'cookie_name', 0),
    array('Path of the cookie used by the script', 'cookie_path', 0),
//    array('Character encoding', 'charset', 4), 
    'Miscellaneous settings',
    array('Enable debug mode', 'debug_mode', 1),
    array('Enable advanced debug mode', 'advanced_debug_mode', 1), // new in cpg1.2.0nuke
    array('Show Coppermine Update Alert to Admin', 'showupdate', 1), // new 1.2.2

    '<br /><div align="center">(*) Fields marked with * must not be changed if you already have pictures in your gallery</div><br />'
    );
// end left side interpretation
?>
