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
  $Source: /cvs/languages/serbian/modules/coppermine/language/lang-serbian-utf-8.php,v $
  $Revision: 1.2 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:41 $
****************************************************************************/
global $module_name, $lang_usermgr_php,$lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;  
define('PIC_VIEWS','Views');
define('PIC_VOTES','Votes');
define('PIC_COMMENTS','Comments');

// lang_translation_info
define('LANG_NAME_ENGLISH','Serbian');
define('LANG_NAME_NATIVE','Српски');
define('LANG_COUNTRY_CODE','sr');
define('TRANS_NAME','Mihailo Stefanovic');
define('TRANS_EMAIL','prevodi@mikis.org');
define('TRANS_WEBSITE','http://mikis.org/');
define('TRANS_DATE','2004-01-03');
define('CHARSET','UTF-8');
define('TEXT_DIR','ltr');
define('YES','Да');
define('NO','Не');
define('BACK','назад на главну');
define('CONTINU','Finish');
define('INFO','Информације');
//define('_ERROR', 'Error'); //already in main lang file
define('ALBUM_DATE_FMT','%d.%m.%Y');
define('LASTCOM_DATE_FMT','%d.%m.%y @ %H:%M');
define('LASTUP_DATE_FMT','%d.%m.%Y');
define('REGISTER_DATE_FMT','%d.%m.%Y');
define('LASTHIT_DATE_FMT','%d. %B %Y у %H:%M');
define('COMMENT_DATE_FMT','%d. %B %Y у %H:%M');

// lang_meta_album_names
define('RANDOM','По случајном избору');
define('LASTUP','Ново додато');
define('LASTUPBY','My Last Additions');
define('LASTALB','Последњи ажуриран албум');
define('LASTCOM','Нови коментари');
define('LASTCOMBY','My Last comments');
define('TOPN','Најгледаније');
define('TOPRATED','Најбоље оцењено');
define('LASTHITS','Последње виђено');
define('SEARCH','Претражи колекцију слика');
define('FAVPICS','Омиљене слике');

// lang_errors
define('ACCESS_DENIED','Није вам дозвољено да приступите овој страни.');
define('PERM_DENIED','Није вам дозвољено да извршите ову операцију.');
define('PARAM_MISSING','Скрипт је позван без обавезних параметара.');
define('NON_EXIST_AP','Изабрани албум или слика не постоје!');
define('QUOTA_EXCEEDED','Диск квота је премашена<br /><br />Ваша диск квота је [quota]K, ваше слике требутно заузимају  [space]K. Додавањем ове слике премашили бисте квоту.');
define('GD_FILE_TYPE_ERR','Када користите GD библиотеку дозвољене су само JPEG и PNG врсте слика.');
define('INVALID_IMAGE','Слика коју сте послали је оштећена или је GD библиотека не подржава');
define('RESIZE_FAILED','Не могу да направим маркицу или смањим величину слике');
define('NO_IMG_TO_DISPLAY','Нема слика за приказивање');
define('NON_EXIST_CAT','Изабрана категорија не постоји');
define('ORPHAN_CAT','Категорија има непостојећег родитеља, покрените управљање категоријама да бисте исправили проблем.');
define('DIRECTORY_RO','У директоријум \'%s\' се не може уписивати, слике се не могу обрисати');
define('NON_EXIST_COMMENT','Изабрани коментар не постоји.');
define('PIC_IN_INVALID_ALBUM','Слика је у непостојећем албуму (%s)!?');
define('BANNED','Забрањено вам је да посећујете овај сајт.');
define('NOT_WITH_UDB','Ова функција је искључена у Coppermine-у јер је интегрисан са софтвером за форуме. Или то што покушавате да урадите није подржано у овој конфигурацији, или би за ту функцију требао да буде задужен софтвер за форуме.');
define('MEMBERS_ONLY','This function is for members only, please join.');
define('MUSTBE_GOD','This function is only for the site admin. You must be logged in as superadmin, god account to access this function');
define('NO_IMG_TO_APPROVE','No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE','Иди на листу албума');
define('ALB_LIST_LNK','Листа албума');
define('MY_GAL_TITLE','Иди у моју личну галерију');
define('MY_GAL_LNK','Моја галерија');
define('MY_PROF_LNK','Мој профил');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE','Пређи у административни режим');
define('ADM_MODE_LNK','Административни режим');
define('USR_MODE_TITLE','Пређи у кориснички режим');
define('USR_MODE_LNK','Кориснички режим');
define('UPLOAD_PIC_TITLE','Пошаљи слику у албум');
define('UPLOAD_PIC_LNK','Пошаљи слику');
define('REGISTER_TITLE','Направи налог');
define('REGISTER_LNK','Региструј се');
define('LOGIN_LNK','Пријава');
define('LOGOUT_LNK','Одјава');
define('LASTUP_LNK','Ново додато');
define('LASTUP_TITLE','Recently uploaded pictures');
define('TOPN_TITLE','Pictures that have been seen most');
define('TOPN_LNK','Најгледаније');
define('TOPRATED_TITLE','Top rated pictures');
define('TOPRATED_LNK','Top rated');
define('SEARCH_TITLE','Search Photo Collection');
define('SEARCH_LNK','Претрага');
define('FAV_TITLE','My Favorites');
define('FAV_LNK','Моје омиљене');
define('HELP_TITLE','HELP');

// lang_gallery_admin_menu
define('UPL_APP_LNK','Одобравање послатих');
define('CONFIG_LNK','Подешавања');
define('ALBUMS_LNK','Албуми');
define('CATEGORIES_LNK','Категорије');
define('USERS_LNK','Корисници');
define('GROUPS_LNK','Групе');
define('COMMENTS_LNK','Коментари');
define('SEARCHNEW_LNK','Масовно додавање');
define('UTIL_LNK','Промена величине слика');
define('BAN_LNK','Забрана корисника');

// lang_user_admin_menu
define('ALBMGR_LNK','Направи / уреди моје албуме');
define('MODIFYALB_LNK','Измени моје албуме');
//define('MY_PROF_LNK', 'My profile');

// lang_cat_list
define('CATEGORY','Категорија');
define('ALBUMS','Албуми');
//define('PICTURES', 'Pictures');

// lang_album_list
define('ALBUM_ON_PAGE','%d албума на %d страна');
// lang_thumb_view
define('DATE','ДАТУМ');
define('NAME','Корисничко име');
define('TITLE','Промена димензија слике');
define('SORT_DA','Сортирај по датуму узлазно');
define('SORT_DD','Сортирај по датуму силазно');
define('SORT_NA','Сортирај по називу датотеке узлазно');
define('SORT_ND','Сортирај по називу датотекесилазно');
define('SORT_TA','Сортирај по наслову слике узлазно');
define('SORT_TD','Сортирај по наслову слике силазно');
define('PIC_ON_PAGE','%d слика на %d страна');
define('USER_ON_PAGE','%d корисника на %d страна');
define('SORT_RA','Sort by rating ascending');
define('SORT_RD','Sort by rating descending');
define('THUMB_RATING','RATING');
define('SORT_TITLE','Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE','Врати се на страну са маркицама');
define('PIC_INFO_TITLE','Прикажи/сакриј информације о слици');
define('SLIDESHOW_TITLE','Слајд шоу');
define('SLIDESHOW_DISABLED','Slideshow is disabled');
define('SLIDESHOW_DISABLED_MSG','This function is for members only, please join.');
define('ECARD_TITLE','Е-честитка од %s за Вас');
define('ECARD_DISABLED','Е-честике су искључене');
define('ECARD_DISABLED_MSG','Није вам дозвољено да шаљете е-честитке');
define('PREV_TITLE','Види претходну слику');
define('NEXT_TITLE','Види следећу слику');
define('PIC_POS','СЛИКА %s/%s');
define('NO_MORE_IMAGES','There are no more images in this galley');
define('NO_LESS_IMAGES','This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC','Оцени ову слику ');
define('NO_VOTES','(Нема гласова)');
define('RATING','Оцена (%s гласова)');
define('RUBBISH','Ђубре');
define('POOR','Слаба');
define('FAIR','Солидна');
define('GOOD','Добра');
define('EXCELLENT','Одлична');
define('GREAT','Изванредна');

// lang_cpg_die
//define('INFO', 'Information');
//define('ERROR', 'Error');
define('_CRITICAL_ERROR','Critical error');
define('FILE','Датотека');
define('LINE','Ред: ');

// lang_display_thumbnails
define('FILENAME','Назив датотеке');
define('FILESIZE','Величина датотеке: ');
define('DIMENSIONS','Димензије');
define('DATE_ADDED','Датум додавања: ');

// lang_get_pic_data
define('N_COMMENTS','%s коментара');
define('N_VIEWS','%s прегледа');
define('N_VOTES','(%s гласова)');


// lang_albmgr_php
define('ALB_NEED_NAME','Албуми морају имати име!');
define('CONFIRM_MODIFS','Да ли сте сигурни да желите да направите ове измене?');
define('NO_CHANGE','Нисте направили ни једну измену!');
define('NEW_ALBUM','Нови албум');
define('CONFIRM_DELETE1','Да ли сте сигурни да желите да обришете овај албум?');
define('CONFIRM_DELETE2','\nСве слике и коментари биће изгубљени!');
define('SELECT_FIRST','Прво одаберите албум');
define('ALB_MRG','Управљање албумима');
define('MY_GALLERY','* Моја галерија *');
define('NO_CATEGORY','* Нема категорије *');
define('DELETE','Обриши називе слика или оригиналне слике');
define('NEW','Нови');
define('APPLY_MODIFS','Примени измене');
define('SELECT_CATEGORY','Изабери категорију');

// lang_catmgr_php
define('MISS_PARAM','Неопходни параметри за операцију \'%s\'нису задати!');
define('UNKNOWN_CAT','Изабрана категорија не постоји у бази');
define('USERGAL_CAT_RO','Категорија "корисничке галерије" се не може избрисати!');
define('MANAGE_CAT','Уреди категорије');
define('CONFIRM_DELETE_CAT','Are you sure you want to DELETE this category');
//define('CATEGORY', 'Category');
define('OPERATIONS','Операције');
define('MOVE_INTO','Премести у ');
define('UPDATE_CREATE','Измени / направи категорију');
define('PARENT_CAT','Надређена категорија');
define('CAT_TITLE','Назив категорије');
define('CAT_DESC','Опис категорије');

// lang_config_php
define('CONFIG_TITLE','Configuration');
define('RESTORE_CFG','Врати подразумевана подешавања');
define('SAVE_CFG','Сачувај нова подешавања');
define('NOTES','Напомене');
//define('INFO', 'Information');
define('UPD_SUCCESS','Coppermine подешавања су сачувана');
define('RESTORE_SUCCESS','Враћена су подразумевана подешавања Coppermine-а');
define('NAME_A','имену узлазно');
define('NAME_D','имену силазно');
define('TITLE_A','По називу узлазно');
define('TITLE_D','По називу силазно');
define('DATE_A','По датуму узлазно');
define('DATE_D','По имену силазно');
define('RATING_A','Rating ascending');
define('RATING_D','Rating descending');
define('TH_ANY','Макс. однос');
define('TH_HT','Висина');
define('TH_WD','Ширина');


// lang_db_input_php
define('EMPTY_NAME_OR_COM','Морате унети своје име и коментар');
define('COM_ADDED','Коментар додат');
define('ALB_NEED_TITLE','Морате дати наслов албуму!');
define('NO_UDP_NEEDED','Ажурирање није потребно.');
define('ALB_UPDATED','Албум је ажуриран');
define('UNKNOWN_ALBUM','Одабрани албум не постоји или ви немате права да додајете слике у њега');
define('NO_PIC_UPLOADED','Слика није послата!<br /><br />Ако сте заиста изабрали слику за слање, проверите да ли сервер дозвољава слање фајлова...');
define('ERR_MKDIR','Није успело креирање директоријума %s !');
define('DEST_DIR_RO','Скрипт не може да пише у одредишни директоријум %s !');
define('ERR_MOVE','Није могуће преместити %s у %s !');
define('ERR_FSIZE_TOO_LARGE','Слика коју сте послали је превеликих димензија (максимално је дозвољено %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE','Слика коју сте послали је превелика (максимално је дозвољено %s KB) !');
define('ERR_INVALID_IMG','Датотека који сте послали није исправна слика!');
define('ALLOWED_IMG_TYPES','Можете послати само %s слика.');
define('ERR_INSERT_PIC','Слика \'%s\' се не може додати у албум ');
//define('INFO', 'Information');
define('ERR_COMMENT_EMPTY','Ваш коментар је празан!');
define('ERR_INVALID_FEXT','Дозвољене су датотеке само са следећим екстензијама: <br /><br />%s.');
define('NO_FLOOD','Ви сте већ аутор последњег послатог коментара уз ову слику<br /><br />Можете изменити свој претходни коментар уколико то желите');
define('REDIRECT_MSG','Бићете преусмерени.<br /><br /><br />Кликните \'НАСТАВИ\' ако се нова страна не уGита аутоматски');
define('UPL_SUCCESS','Слика је успешно додата');

// lang_delete_php
define('CAPTION','Назив');
define('FS_PIC','слика пуне величине');
define('DEL_SUCCESS','успешно обрисано');
define('NS_PIC','слика нормалне величине');
define('ERR_DEL','не може се обрисати');
define('THUMB_PIC','маркица');
//define('COMMENT', 'comment');
define('IM_IN_ALB','слика у албуму');
define('ALB_DEL_SUCCESS','Албум \'%s\' је обрисан');
define('ALB_MGR','Уређивање албума');
define('ERR_INVALID_DATA','Неисправни подаци примљени у \'%s\'');
define('CREATE_ALB','Правим албум \'%s\'');
define('UPDATE_ALB','Ажурирам албум \'%s\' са називом \'%s\' и индексом \'%s\'');
define('DEL_PIC','Обриши слику');
define('DEL_ALB','Обриши албум');
define('DEL_USER','Обриши корисника');
//define('ERR_UNKNOWN_USER', 'The selected user does not exist !');
define('COMMENT_DELETED','Коментар је обрисан');

// lang_display_image_php
define('PIC_CONFIRM_DEL','Are you sure you want to DELETE this picture ? \nComments will also be deleted.');
define('DEL_THIS_PIC','DELETE THIS PICTURE');
define('SIZE','%s x %s тачака');
define('VIEWS','%s пута');
define('SLIDESHOW','Слајд шоу');
define('STOP_SLIDESHOW','ЗАУСТАВИ СЛАЈД ШОУ');
define('VIEW_FS','Кликни за слику у пуној величини');
define('EDIT_PIC','EDIT PICTURE INFO');

// lang_picinfo
define('PIC_INF_TITLE','Picture information');
define('PIC_INF_FILENAME','Filename');
define('ALBUM_NAME','Album name');
define('PIC_INFO_RATING','Rating (%s votes)');
define('KEYWORDS','Кључне речи (одвоји размаком)');
define('PIC_INF_FILE_SIZE','File Size');
define('PIC_INF_DIMENSIONS','Dimensions');
define('DISPLAYED','Приказано');
define('CAMERA','Камера');
define('DATE_TAKEN','Date taken');
define('APERTURE','Aperture');
define('EXPOSURE_TIME','Exposure time');
define('FOCAL_LENGTH','Focal length');
define('COMMENT','Коментар');
define('ADDFAV','Додај у омиљене');
define('ADDFAVPHRASE','Омиљене');
define('REMFAV','Уклони из омиљених');
define('IPTCTITLE','IPTC Title');
define('IPTCCOPYRIGHT','IPTC Copyright');
define('IPTCKEYWORDS','IPTC Keywords');
define('IPTCCATEGORY','IPTC Category');
define('IPTCSUBCATEGORIES','IPTC Sub Categories');
define('BOOKMARK_PAGE','Bookmark Image');
define('REMOVEFAV','Removed from Favorites Album');
define('ADDEDTOFAV','Added to Favorites Album');

// lang_display_comments
define('OK','У РЕДУ');
define('COM_EDIT_TITLE','Edit this comment');
define('CONFIRM_DELETE_COM','Are you sure you want to delete this comment ?');
define('ADD_YOUR_COMMENT','Додајте свој коментар');
define('COM_NAME','Name');
//define('COMMENT', 'Comment');
define('YOUR_NAME','Ваше име');

// lang_fullsize_popup
define('CLICK_TO_CLOSE','Кликните на слику да затворите овај прозор');

// lang_ecard_php
define('E_TITLE','Send an e-card');
define('INVALID_EMAIL','<b>Упозорење</b> : неисправна адреса е-поште!');
define('E_ECARD_TITLE','An e-card from %s for you');
define('VIEW_ECARD','Ако се честитка не прикаже исправно, кликните на овај линк');
define('VIEW_MORE_PICS','Кликните овде да видите још слика!');
define('SEND_SUCCESS','Ваша е-честитка је послата');
define('SEND_FAILED','Жао нам је али сервер не може да пошаље вашу е-честитку...');
define('FROM','Од');
define('_YOUR_NAME','Your name');
define('YOUR_EMAIL','Ваша е-адреса');
define('TO','За');
define('RCPT_NAME','Име примаоца');
define('RCPT_EMAIL','Е-адреса примаоца');
define('GREETINGS','Поздрав');
define('MESSAGE','Порука');
define('ECARD_LINK_CORRUPT','Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser');

// lang_editpics_php
define('PIC_INFO','Picture&nbsp;info');
define('ALBUM','Албум');
define('EDIT_TITLE','Измени овај коментар');
define('DESC','Опис');
//define('KEYWORDS', 'Keywords');
define('PIC_INFO_STR','%s &times; %s - %s KB - %s приказа - %s гласова');
define('APPROVE','Одобри слику');
define('POSTPONE_APP','Одложи одобравање');
//define('DEL_PIC', 'Delete picture');
define('READ_EXIF','Read EXIF info again');
define('RESET_VIEW_COUNT','Поништи бројач приказивања');
define('RESET_VOTES','Поништи гласање');
define('DEL_COMM','Обриши изабране коментаре');
define('UPL_APPROVAL','Одобравање послатог');
define('EDIT_PICS','УРЕДИ СЛИКЕ');
define('SEE_NEXT','Види следеће');
define('SEE_PREV','Види претходне');
define('N_PIC','%s слика');
define('N_OF_PIC_TO_DISP','Број приказаних слика');
define('APPLY','Примени измене');

// lang_groupmgr_php
define('GROUP_NAME','Назив групе');
define('DISK_QUOTA','Диск квота');
define('CAN_RATE','Посетиоци могу да оцењују слике');
define('CAN_SEND_ECARDS','Могу да шаљу е-честитке');
define('CAN_POST_COM','Могу да пишу коментаре');
define('CAN_UPLOAD','Посетиоци могу да шаљу слике');
define('CAN_HAVE_GALLERY','Могу да имају личне галерије');
//define('APPLY', 'Apply modifications');
define('CREATE_NEW_GROUP','Направи нову групу');
define('DEL_GROUPS','Обриши изабране групе');
define('CONFIRM_DEL','Да ли сте сигурни да желите да ОБРИШЕТЕ овог корисника? \nСве његове слике и албуми биће такође обрисани.');
define('GROUP_TITLE','Manage user groups');
define('APPROVAL_1','Одобрење јавног слања (1)');
define('APPROVAL_2','Одобрење приватног слања (2)');
define('NOTE1','<b>(1)</b> За слање у јавни албум потребно је одобрење администратора');
define('NOTE2','<b>(2)</b> За слање у корисников албум потребно је одобрење администратора');
//define('NOTES', 'Notes');

// lang_index_php
define('WELCOME','Добродошли!');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB','Are you sure you want to DELETE this album ? \nAll pictures and comments will also be deleted.');
//define('DELETE', 'DELETE');
define('MODIFY','СВОЈСТВА');
//define('EDIT_PICS', 'EDIT PICS');

// lang_list_categories
define('HOME','Насловна');
define('STAT1','<b>[pictures]</b> слика у <b>[albums]</b> албума и <b>[cat]</b> категорија са <b>[comments]</b> коментара приказаних <b>[views]</b> пута');
define('STAT2','<b>[pictures]</b> слика у <b>[albums]</b> албума приказаних <b>[views]</b> пута');
define('XX_S_GALLERY','Галерија %s');
define('STAT3','<b>[pictures]</b> слика у <b>[albums]</b> албума са <b>[comments]</b> коментара приказаних <b>[views]</b> пута');

// lang_list_users
define('USER_LIST','Листа корисника');
define('NO_USER_GAL','Нема корисничких галерија');
define('N_ALBUMS','%s албум(а)');
define('N_PICS','%s слика(е)');

// lang_list_albums
define('N_PICTURES','%s слика');
define('LAST_ADDED',', последња додата %s');

// lang_modifyalb_php
define('UPD_ALB_N','Ажурирај албуме %s');
define('GENERAL_SETTINGS','Општа подешавања');
define('ALB_TITLE','Назив албума');
define('ALB_CAT','Категорија албума');
define('ALB_DESC','Опис албума');
define('ALB_THUMB','маркица албума');
define('ALB_PERM','Дозволе за овај албум');
define('CAN_VIEW','Албум могу да виде');
define('MOD_CAN_UPLOAD','Visitors can upload pictures');
define('CAN_POST_COMMENTS','Посетиоци могу да дају коментаре');
define('MOD_CAN_RATE','Visitors can rate pictures');
define('USER_GAL','Корисничка галерија');
define('NO_CAT','* Нема категорије *');
define('ALB_EMPTY','Албум је празан');
define('LAST_UPLOADED','Последње послати');
define('PUBLIC_ALB','Сви (јавни албум)');
define('ME_ONLY','Само ја');
define('OWNER_ONLY','Само власник албума (%s)');
define('GROUPP_ONLY','Чланови групе \'%s\'');
define('ERR_NO_ALB_TO_MODIFY','У бази нема албума који можете да мењате.');
define('UPDATE','Ажурирај маркице и/или измењене слике');

// lang_rate_pic_php
define('ALREADY_RATED','Жао ми је, али већ сте оценили ову слику');
define('RATE_OK','Ваш глас је прихваћен');

// lang_register_php
define('USERNAME','Корисничко име');
define('GROUP','Група');
define('DISK_USAGE','Искоришћен простор');
define('X_S_PROFILE','Профил корисника %s');

// lang_reviewcom_php
define('REVIEW_TITLE','Review comments');
define('NO_COMMENT','Нема комента за приказивање');
define('N_COMM_DEL','%s коментара обрисано');
define('N_COMM_DISP','Број приказаних коментара');
define('R_SEE_PREV','See previous');
define('R_SEE_NEXT','See next');
define('R_DEL_COMM','Delete selected comments');

// lang_search_php
define('S_SEARCH','Search the image collection');

// lang_search_new_php
define('PAGE_TITLE','Тражење нових слика');
define('SELECT_DIR','Одабери директоријум');
define('SELECT_DIR_MSG','Ова функција омогућава додавање групе слика коју сте путем ФТП-а послали на свој сервер.<br /><br />Одаберите директоријум у који сте послали слике');
define('NO_PIC_TO_ADD','Нема слика за додавање');
define('NEED_ONE_ALBUM','Морате имати бар један албум да бисте користили ову функцију');
define('WARNING','упозорење');
define('CHANGE_PERM','скрипт не може да пише у овај директријум, морате му променити мод у 755 или 777 пре додавања нових слика!');
define('TARGET_ALBUM','<b>Додај слике из &quot;</b>%s<b>&quot; у </b>%s');
define('FOLDER','Фолдер');
define('IMAGE','Слика');
//define('ALBUM', 'Album');
define('RESULT','Резултат');
define('DIR_RO','Није могућ упис. ');
define('DIR_CANT_READ','Није могуће читање. ');
define('INSERT','Додавање нових слика у галерију');
define('LIST_NEW_PIC','Листа нових слика');
define('INSERT_SELECTED','Убаци одабране слике');
define('NO_PIC_FOUND','Нове слике нису пронађене');
define('BE_PATIENT','Молимо будите стрпљиви, скрипту је потребно неко време да дода слике');
define('SN_NOTES','<ul><li><b>OK</b> : means that the picture was succesfully added<li><b>DP</b> : means that the picture is a duplicate and is already in the database<li><b>PB</b> : means that the picture could not be added, check your configuration and the permission of directories where the pictures are located<li>If the OK, DP, PB \'signs\' does not appear click on the broken picture to see any error message produced by PHP<li>If your browser timeout, hit the reload button</ul>');
define('SELECT_ALBUM','Одабери албум');
define('NO_ALBUM','No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('UP_TITLE','Upload picture');
define('MAX_FSIZE','Максимално дизвољена величина фајла је %s KB');
//define('ALBUM', 'Album');
define('PICTURE','Слика');
define('PIC_TITLE','Назив слике');
define('DESCRIPTION','Опис слике');
define('UP_KEYWORDS','Keywords (separate with spaces)');
define('ERR_NO_ALB_UPLOADABLES','Жао ми је, али нема албума у који вам је дозвољено да шаљете слике');

// lang_usermgr_php
define('U_TITLE','Manage users');
//define('NAME_A', 'Name ascending');
//define('NAME_D', 'Name descending');
define('GROUP_A','групи узлазно');
define('GROUP_D','групи силазно');
define('REG_A','датуму рег. узлазно');
define('REG_D','датуму рег. силазно');
define('PIC_A','броју слика узлазно');
define('PIC_D','броју слика силазно');
define('DISKU_A','простору узлазно');
define('DISKU_D','простору силазно');
define('SORT_BY','Сортирај кориснике по');
define('ERR_NO_USERS','Табела корисника је празна!');
define('ERR_EDIT_SELF','Не можете уређивати сопствени профил, користите линк \'Мој профил\' за то');
define('EDIT','ИЗМЕНИ');
//define('DELETE', 'DELETE');
define('U_NAME','User name');
//define('GROUP', 'Group');
define('INACTIVE','Неактиван');
//define('OPERATIONS', 'Operations');
define('PICTURES','Слике');
define('DISK_SPACE','Искоришћен простор / квота');
define('REGISTERED_ON','Регистрован');
define('U_USER_ON_P_PAGES','%d корисника на %d страна');
define('USER_CONFIRM_DEL','Are you sure you want to DELETE this user ? \nAll his pictures and albums will also be deleted.');
define('MAIL','ПОШТА');
define('ERR_UNKNOWN_USER','Изабрани корисник не постоји!');
define('MODIFY_USER','Измени корисника');
//define('NOTES', 'Notes');
define('NOTE_LIST','<li>Ако не желите да промените тренутну лозинку, поље "лозинка" оставите празно');
define('PASSWORD','Лозинка');
define('USER_ACTIVE_CP','User is active');
define('USER_GROUP_CP','User group');
define('USER_EMAIL','Адреса е-поште');
define('USER_WEB_SITE','Адреса корисниковог сајта');
define('CREATE_NEW_USER','Додај новог корисника');
define('USER_FROM','User location');
define('USER_INTERESTS','Интересовања корисника');
define('USER_OCC','User occupation');

// lang_util_php
define('UTIL_TITLE','Resize pictures');
define('WHAT_IT_DOES','Шта ради');
define('WHAT_UPDATE_TITLES','Ажурира наслове по имену фајла');
define('WHAT_DELETE_TITLE','Брише наслове');
define('WHAT_REBUILD','Прави маркице и слике промењених димензија');
define('WHAT_DELETE_ORIGINALS','Брише оригиналне слике замењујући их верзијама промењене величине');
define('U_FILE','File');
define('TITLE_SET_TO','наслов постави на');
define('SUBMIT_FORM','изврши');
define('UPDATED_SUCCESFULLY','успешно измењена');
define('ERROR_CREATE','ГРЕШКА при креирању');
define('CONTIN','Process more images');
define('MAIN_SUCCESS','Датотека %s је успешно искоришћена као главна слика');
define('ERROR_RENAME','Грешка при преименовању %s у %s');
define('ERROR_NOT_FOUND','Датотека %s није пронађена');
define('U_BACK','back to main');
define('THUMBS_WAIT','Ажурирам маркице и/или измењене слике, молим сачекајте...');
define('THUMBS_CONTINUE_WAIT','Настављам да ажурирам маркице и/или слике измењене величине...');
define('TITLES_WAIT','Ажурирам наслове, молим сачекајте...');
define('DELETE_WAIT','Бришем наслове, молим сачекајте...');
define('REPLACE_WAIT','Бришем оригинале и мењам их са измењеним сликама, молим сачекајте...');
define('INSTRUCTION','Кратко упутство');
define('INSTRUCTION_ACTION','Одабери акцију');
define('INSTRUCTION_PARAMETER','Подеси параметре');
define('INSTRUCTION_ALBUM','Одабери албум');
define('INSTRUCTION_PRESS','Притисни \'%s\'');
define('U_UPDATE','Update thumbs and/or resized photos');
define('UPDATE_WHAT','Шта треба изменити');
define('UPDATE_THUMB','Само маркице');
define('UPDATE_PIC','Само слике измењене величине');
define('UPDATE_BOTH','И маркице и слике измењене величине');
define('UPDATE_NUMBER','Број обрађених слика по клику');
define('UPDATE_OPTION','(Покушајте да поставите на мању вредност ако вам време истиче)');
define('FILENAME_TITLE','Назив датотеке &rArr; назив слике');
define('FILENAME_HOW','Како треба изменити име датотеке');
define('FILENAME_REMOVE','Уклони .jpg завршетак и замени _ (доњу цртицу) размаком');
define('FILENAME_EURO','Промени 2003_11_23_13_20_20.jpg у 23/11/2003 13:20');
define('FILENAME_US','Промени 2003_11_23_13_20_20.jpg у 11/23/2003 13:20');
define('FILENAME_TIME','Промени 2003_11_23_13_20_20.jpg у 13:20');
define('UT_DELETE','Delete picture titles or original size photos');
define('DELETE_TITLE','Обриши називе слика');
define('DELETE_ORIGINAL','Обриши оригиналне слике');
define('DELETE_REPLACE','Брише оригиналне слике и мења их сликама промењених димензија');
//define('SELECT_ALBUM', 'Select album');

// lang_pagetitle_php
define('VIEWING','Viewing Photo');
define('USR','\'s Photo Gallery');
define('PHOTOGALLERY','Photo Gallery');
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
