<?php
/****************************************************************************/
/* Coppermine Photo Gallery 1.2.3 for CMS                                   */
/****************************************************************************/
/****************************************************************************/
/* Port Copyright (C) 2004 Coppermine for CMS Dev Team  		              */
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
/*   $Id: lang-arabic-utf-8.php,v 1.1 2004/07/15 20:39:00 akamu Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Arabic');
define('LANG_NAME_NATIVE', 'عربي');
define('LANG_COUNTRY_CODE', 'ar');
define('TRANS_NAME', 'Waheed Alsayer');
define('TRANS_EMAIL', 'waheed@shamayel.com');
define('TRANS_WEBSITE', 'http://www.shamayel.com/');
define('TRANS_DATE', '2003-10-02');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'UTF-8');

// ltr or rtl
define('TEXT_DIR', 'rtl');

// left is for port compliancy
define('YES', 'نعم');
define('NO', 'لا');

// some common strings
define('BACK', 'رجوع');
define('CONTINUE', 'استمر');
define('INFO', 'معلومات');
define('ERROR', 'خطأ');

//// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%d/%m/%y at %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y at %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y at %I:%M %p');

// short names for Byte, Kilo, Mega
$lang_byte_units = array('بايت','ك.ب','م.ب',);

// Day of week
$lang_day_of_week = array('احد','اثنين','ثلاثاء','اربعاء','خميس','جمعة','سبت',);
// Day of the month
$lang_month = array('يناير','فبراير','مارس','ابريل','مايو','يونيو','يوليو','اغسطس','سبتمبر','اكتوبر','نوفمبر','ديسمبر');
// For the word censor
$lang_bad_words = array('*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*',);
// lang_meta_album_names
define('RANDOM', 'صور عشوائيـــة');
define('LASTUP', 'آخــر اضافــات');
define('LASTUPBY', 'اضافاتي الأخيرة');
define('LASTALB', 'آخر ألبومات تم تحديثها');
define('LASTCOM', 'آخر ملاحظــات');
define('LASTCOMBY', 'تعليقاتي الأخيرة');
define('TOPN', 'اكثرها مشاهدة');
define('TOPRATED', 'اعلاها تقييما');
define('LASTHITS', 'آخر ما شوهد');
define('SEARCH', 'نتائج البحـث');
define('FAVPICS', 'صور مفضلة');

// lang_errors
define('ACCESS_DENIED', 'ليـس لديك الصلاحية لدخول هذه الصفحة.');
define('PERM_DENIED', 'ليس لديك الصلاحية للقيام بتلك الصلاحية.');
define('PARAM_MISSING', 'لقد نودي البرنامج بدون متغيرات.');
define('NON_EXIST_AP', 'الألبوم أو الصورة المختارة غير موجودة!');
define('QUOTA_EXCEEDED', 'تخطيت حدود التخزين<br /><br />المساحة المسموحة لك [quota]K, صورك تحتل مساحة [space]K, وبإضافة هذه الصورة سوف تتخطى حدود التخزين المسموحة لك.');
define('GD_FILE_TYPE_ERR', 'عند استعمال مكتبة GD للبرامج لا يسمح إلا بـملفات  JPEG و PNG.');
define('INVALID_IMAGE', 'الصورة المحملة غير صالحة او لم تعالج بمكتبة GD');
define('RESIZE_FAILED', 'لم استطع تكوين اختصار الصورة او تصغيرها.');
define('NO_IMG_TO_DISPLAY', 'لا توجد صورة للعرض');
define('NON_EXIST_CAT', 'التصنيف المختار غير موجود');
define('ORPHAN_CAT', 'تصنيف ليس له تصنيف رئيسي, شغل مدير التصنيفات لعلاج المشكلة.');
define('DIRECTORY_RO', 'الدليل \'%s\' غير قابل للكتابة, لا استطيع الغاء الصورة');
define('NON_EXIST_COMMENT', 'التعليق المختار غير موجود.');
define('PIC_IN_INVALID_ALBUM', 'الصورة غير موجودة في الالبوم (%s)!?');
define('BANNED', 'انت ممنوع من استعمال الموقع حاليا.');
define('NOT_WITH_UDB', 'هذه الميزة معطلة في Coppermine لأنها مدموجة مع المنتدى. اما ما تود القيام به غير مدعوم, أو ان برنامج المنتدى يقوم بنفس المهمة.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', 'انتقل الى قائمة الالبومات');
define('ALB_LIST_LNK', 'قائمة الالبومات');
define('MY_GAL_TITLE', 'انتقل الى البومي الخاص');
define('MY_GAL_LNK', 'البومي الخاص');
define('MY_PROF_LNK', 'تعريفي');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'تحويل الى واجهة الادارة');
define('ADM_MODE_LNK', 'حالة الادارة');
define('USR_MODE_TITLE', 'تحويل الى واجهة الاستعمال');
define('USR_MODE_LNK', 'حالة المستخدم');
define('UPLOAD_PIC_TITLE', 'تحميل الصورة في الالبوم');
define('UPLOAD_PIC_LNK', 'تحميل الصورة');
define('REGISTER_TITLE', 'تكوين حساب');
define('REGISTER_LNK', 'تسجيل');
define('LOGIN_LNK', 'دخول');
define('LOGOUT_LNK', 'خروج');
define('LASTUP_LNK', 'آخر تحميل');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'آخر تعليقات');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'اكثر الصور مطالعة');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'اعلى الصور تقييما');
define('SEARCH_LNK', 'ابحث');
define('FAV_LNK', 'المفضلة');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'الموافقة على التحميل');
define('CONFIG_LNK', 'تعيير');
define('ALBUMS_LNK', 'الالبومات');
define('CATEGORIES_LNK', 'التصنيفات');
define('USERS_LNK', 'المستخدمين');
define('GROUPS_LNK', 'مجموعات');
define('COMMENTS_LNK', 'تعليقات');
define('SEARCHNEW_LNK', 'اضف مجموعة من الصور');
define('UTIL_LNK', 'تغيير قياسات الصور');
define('BAN_LNK', 'منع المستخدمين');

// lang_user_admin_menu
define('ALBMGR_LNK', 'اخلق / افرز البوماتي');
define('MODIFYALB_LNK', 'تعديل البوماتي');
define('MY_PROF_LNK', 'الملف الشخصي');

// lang_cat_list
define('CATEGORY', 'التصنيف');
define('ALBUMS', 'الالبومات');
define('PICTURES', 'الصور');

// lang_album_list
define('ALBUM_ON_PAGE', '%d البوم في %d صفحة');

// lang_thumb_view
define('DATE', 'التاريخ');
define('NAME', 'اسم الملف');
define('TITLE', 'العنوان');
define('SORT_DA', 'ترتيب تصاعدي حسب التاريخ');
define('SORT_DD', 'ترتيب تنازلي للتاريخ');
define('SORT_NA', 'ترتيب تصاعدي للاسم');
define('SORT_ND', 'ترتيب تنازلي للاسم');
define('SORT_TA', 'ترتيب العنوان تصاعدي');
define('SORT_TD', 'ترتيب العنوان تنازلي');
define('PIC_ON_PAGE', '%d صورة في %d صفحة/صفحات');
define('USER_ON_PAGE', '%d مستخدم في %d صفحة');
define('SORT_RA', 'ترتيب التقييم تصاعديا');
define('SORT_RD', 'ترتيب التقييم تنازليا');
define('RATING', 'التقييم');
define('SORT_TITLE', 'ترتيب الصور حسب:');

// lang_img_nav_bar
define('THUMB_TITLE', 'الرجوع الى المختصرات');
define('PIC_INFO_TITLE', 'اظهر/اخفي معلومات الصور');
define('SLIDESHOW_TITLE', 'عرض آلي');
define('SLIDESHOW_DISABLED', 'البطاقات الالكترونية معطلة');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'ارسل الصورة كبريد');
define('ECARD_DISABLED', 'الصور البريدة معطلة');
define('ECARD_DISABLED_MSG', 'ليس لديك الصلاحية لارسال صور بريدية');
define('PREV_TITLE', 'الصورة السابقة');
define('NEXT_TITLE', 'الصورة التي تليهـا');
define('PIC_POS', 'صـوره %s/%s');
define('NO_MORE_IMAGES', 'لا توجد صور اضافية في المعرض');
define('NO_LESS_IMAGES', 'هذه هي اول صورة في المعرض');

// lang_rate_pic
define('RATE_THIS_PIC', 'قيـم هذه الصورة');
define('NO_VOTES', '(لا يوجد تصويت)');
define('RATING', '(التصويت الحالي: %s / 5 من %s تصويت)');
define('RUBBISH', 'سيـئة');
define('POOR', 'غير مقبولة');
define('FAIR', 'مقبولة');
define('GOOD', 'جيـدة');
define('EXCELLENT', 'ممتـازة');
define('GREAT', 'مذهلـة');

// lang_cpg_die
define('INFORMATION', 'معلومات');
define('ERROR', 'خطأ');
define('CRITICAL_ERROR', 'خطأ خطير');
define('FILE', 'ملف: ');
define('LINE', 'السطر: ');

// lang_display_thumbnails
define('FILENAME', 'اسم الملف : ');
define('FILESIZE', 'الحجم : ');
define('DIMENSIONS', 'الابعاد : ');
define('DATE_ADDED', 'اضيف في : ');

// lang_get_pic_data
define('N_COMMENTS', '%s تعليق');
define('N_VIEWS', '%s مشاهدة');
define('N_VOTES', '(%s تصويت)');

// lang_smilies_inc_php

// lang_admin_php
define('LV_ADMIN', 'انت الآن تترك حالة الادارة...');
define('ENT_ADMIN', 'انت الآن تدخل حالة الادارة...');

// lang_albmgr_php
define('ALB_NEED_NAME', 'الألبوم بحاجة الى إسـم !');
define('CONFIRM_MODIFS', 'هل أنت متأكّد أنّك تريد عمل هذه التّعديلات  ?');
define('NO_CHANGE', 'لم تقم بأي تغيير !');
define('NEW_ALBUM', 'البـوم جديد');
define('CONFIRM_DELETE1', 'هل أنت متأكد للأغاء هذا الألبوم ?');
define('CONFIRM_DELETE2', '\\nسوف يتم حذف الصور و الملاحظات !');
define('SELECT_FIRST', 'ادخل اسم الألبوم أولاً');
define('ALB_MRG', 'التحكم بالألبوم');
define('MY_GALLERY', '* معرضـي *');
define('NO_CATEGORY', '* المعرض غير موجود *');
define('DELETE', 'الغـاء');
define('NEW', 'جديد');
define('APPLY_MODIFS', 'استعمل التّعديلات ');
define('SELECT_CATEGORY', 'الصّنف المختار ');

// lang_catmgr_php
define('MISS_PARAM', 'المعلومات المطلوبة للعملية \'%s\'لم تعطى !');
define('UNKNOWN_CAT', 'التصنيف المختار غير معروف');
define('USERGAL_CAT_RO', 'لايسمح بالغاء تصنيف المستخدمين !');
define('MANAGE_CAT', 'ادارة التصنيفات');
define('CONFIRM_DELETE', 'هل انت متأكد من الغاء هذا التصنيف');
define('CATEGORY', 'التصنيف');
define('OPERATIONS', 'العمليات');
define('MOVE_INTO', 'انقل الى');
define('UPDATE_CREATE', 'تحديث أو تكوين تصنيف');
define('PARENT_CAT', 'التصنيف الأب');
define('CAT_TITLE', 'عنوان التصنيف');
define('CAT_DESC', 'شرح التصنيف');

// lang_config_php
define('TITLE', 'الإعـــدادت');
define('RESTORE_CFG', 'تجاهـل التغييرات');
define('SAVE_CFG', 'لحفـظ الإعدادات');
define('NOTES', 'ملاحظــات');
define('INFO', 'المعـلومـات');
define('UPD_SUCCESS', 'لقد تم تحديث الإعـدادت');
define('RESTORE_SUCCESS', 'تم ارجاع الاعدادات الاصلية');
define('NAME_A', 'تصاعدي على الاسم');
define('NAME_D', 'تنازلي على الاسم');
define('TITLE_A', 'تصاعدي على العنوان');
define('TITLE_D', 'تنازلي على العنوان');
define('DATE_A', 'تاريخ تصاعدي');
define('DATE_D', 'تاريخ تنازلي');
define('RATING_A', 'التقييم تصاعديا');
define('RATING_D', 'التقييم تنازليا');
define('TH_ANY', 'اكبر قياس');
define('TH_HT', 'الارتفاع');
define('TH_WD', 'العرض');

// lang_config_data
define('CONFIG_GENSET', 'اعدادات عامة');
define('GALLERY_NAME', 'اسم المعرض');
define('GALLERY_DESCRIPTION', 'شرح المعرض');
define('GALLERY_ADMIN_EMAIL', 'البريد الالكتروني لمدير المعرض');
define('ECARDS_MORE_PIC_TARGET', 'العنوان الهدف لوصلة \'رؤية المزيد من الصور\' في الكروت');
define('LANG', 'اللغة');
define('CPGTHEME', 'السمة');
define('NICE_TITLES', 'عناوين محددة للصفحات بدلا من >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'رؤية الالبوم كقائمة');
define('MAIN_TABLE_WIDTH', 'عرض الجدول الرئيسي لعرض الصور (بالنقاط أو بالنسبة)');
define('SUBCAT_LEVEL', 'عدد مستويات التصنيف التي تعرض');
define('ALBUMS_PER_PAGE', 'عدد الالبومات التي تعرض');
define('ALBUM_LIST_COLS', 'عدد الاعمدة لعرض الالبوم');
define('ALB_LIST_THUMB_SIZE', 'قياس الاختصار بالنقاط');
define('MAIN_PAGE_LAYOUT', 'محتويات الصفحة الرئيسية');
define('FIRST_LEVEL', 'اعرض مختصرات البوم المستوى الاول في التصنيفات ');
define('THUMB_VIEW_TITLE', 'عرض المختصرات');
define('THUMBCOLS', 'عدد الاعمدة في صفحة مختصرات الصور');
define('THUMBROWS', 'عدد الاسطر في صفحة مختصرات الصور');
define('MAX_TABS', 'اكبر عدد للصفحات التي ستعرض');
define('CAPTION_IN_THUMBVIEW', 'عرض عنوان الصور اسفل الصورة');
define('DISPLAY_COMMENT_COUNT', 'اظهر عدد التعليقات اسفل الصورة');
define('DEFAULT_SORT_ORDER', 'الترتيب التقليدي للصور');
define('MIN_VOTES_FOR_RATING', 'اقل عدد من التصويتات لظهور الصورة في قائمة  \'اعلى تقييم\'');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'اعدادات منظر الصور والتعليقات');
define('PICTURE_TABLE_WIDTH', 'عرض الجدول لعرض الصور (بالنقاط أو بالنسبة)');
define('DISPLAY_PIC_INFO', 'معلومات الصور ترى تلقائيا');
define('FILTER_BAD_WORDS', 'تصفية الكلمات السيئة في التعليقات (عليك تخزين تلك الكلمات في البرنامج اولا)');
define('ENABLE_SMILIES', 'السماح بالوجوه الضاحكة في التعليقات');
define('DISABLE_FLOOD_PROTECTION', 'Allow several consecutive comments on one pic from the same user');
define('COMMENT_EMAIL_NOTIFICATION', 'Email site admin upon comment submission');
define('MAX_IMG_DESC_LENGTH', 'اكبر طول لوصف الصورة');
define('MAX_COM_WLENGTH', 'اكبر عدد من الحروف في الكلمة');
define('MAX_COM_LINES', 'اكبر عدد من الاسطر في التعليق');
define('MAX_COM_SIZE', 'اكبر طول للتعليق');
define('DISPLAY_FILM_STRIP', 'اظهر شريط الفلم');
define('MAX_FILM_STRIP_ITEMS', 'عدد الصور في شريط الفلم');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', 'اعدادات الصور ومختصرات');
define('JPEG_QUAL', 'وضوح صورة جي بيج');
define('THUMB_WIDTH', 'اكبر قياس لمختصر الصورة <b>*</b>');
define('THUMB_USE', 'استعمل القياسات (عرض او ارتفاع أو اكبر تباعد لمختصر الصور )<b>*</b>');
define('MAKE_INTERMEDIATE', 'كون صور وسيطة');
define('PICTURE_WIDTH', 'اكبر عرض او ارتفاع لصورة وسطية <b>*</b>');
define('MAX_UPL_SIZE', 'اكبر حجم لصورة محملة (بالكيلو بايت)');
define('MAX_UPL_WIDTH_HEIGHT', 'اكبر عرض او ارتفاع لصورة محملة بالنقاط');
define('USER_SETTING_TITLE', 'اعدادات المستخدم');
define('ALLOW_USER_REGISTRATION', 'السماح لمستخدم جديد بالتسجيل');
define('REG_REQUIRES_VALID_EMAIL', 'تسجيل المستخدم يحتاج التأكيد بالبريد الالكتروني');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'السماح لمستخدمين اثنين ان يكون لهم نفس البريد الالكتروني');
define('ALLOW_PRIVATE_ALBUMS', 'يمكن للمستخدمين ان يكون لهم البوم خاص');
define('CUSTOM_FIELDS_TITLE', 'بيانات اضافية لشرح الصور (اتركه فارغا ان كنت لا تريد استعماله)');
define('USER_FIELD1_NAME', 'اسم الحقل الاول');
define('USER_FIELD2_NAME', 'اسم الحقل الثاني');
define('USER_FIELD3_NAME', 'اسم الحقل الثالث');
define('USER_FIELD4_NAME', 'اسم الحقل الرابع');
define('PIC_THUMB_SETTING_TITLE', 'اعدادات الصور ومختصرات الصور المتقدمة');
define('SHOW_PRIVATE', 'اظهر رمز البوم خاص للمستخدم المجهول');
define('FORBIDEN_FNAME_CHAR', 'الحروف الممنوعة في اسماء الملفات');
define('ALLOWED_FILE_EXTENSIONS', 'الامتدادات المسموح بها في الملفات المرسلة');
define('THUMB_METHOD', 'طريقة اعادة قياص الصورة');
define('IMPATH', 'الدليل الى اداة ImageMagick/Netpbm \'للتحويل\'  (مثال /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'انواع الصور المسموح بها (يستعمل فقط لـ ImageMagick)');
define('IM_OPTIONS', 'اوامر البرنامج ImageMagick');
define('READ_EXIF_DATA', 'اقرء بيانات EXIF في ملفات JPEG');
define('READ_IPTC_DATA', 'Read IPTC data in JPEG files');
define('FULLPATH', 'دليل الالبوم <b>*</b>');
define('USERPICS', 'دليل صور المستخدمين <b>*</b>');
define('NORMAL_PFX', 'الحروف الاولى للصور الوسيطة(يجب ان تكون انجليزية <b>*</b>');
define('THUMB_PFX', 'الحروف الاولى لمختصرات الصور <b>*</b>');
define('DEFAULT_DIR_MODE', 'الوضع الاعتيادي للمجلدات');
define('DEFAULT_FILE_MODE', 'الوضع الاعتيادي للصور');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('81', 'اعدادات الكوكيز ونوع الحروف');
define('COOKIE_NAME', 'اسم الكوكي المستعمل في البرنامج');
define('COOKIE_PATH', 'دليل الكوكيز المستعمل في البرنامج');
define('CHAR_SET', 'نوع الحروف المستعملة');
define('85', 'اعدادات اخرى');
define('DEBUG_MODE', 'تمكين وضع التتبع');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('89', '<br /><div align="center">(*) Fields marked with * must not be changed if you already have pictures in your gallery</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'يجب ان تكتب اسمك وتعليقك');
define('COM_ADDED', 'تم اضافة التعليق');
define('ALB_NEED_TITLE', 'يجب ان تحدد عنوان للالبوم !');
define('NO_UDP_NEEDED', 'لا حاجة للتحديث.');
define('ALB_UPDATED', 'تم تحديث الالبوم');
define('UNKNOWN_ALBUM', 'الالبوم المختار غير موجود او ليس لك الصلاحية للتحميل في هذا الالبوم');
define('NO_PIC_UPLOADED', 'لا توجد صور محملة !<br /><br />اذا كنت فعلا اخترت صور للتحميل, تأكد من ان خادم الصفحات يسمح بالتحميل...');
define('ERR_MKDIR', 'لم استطع تكوين المجلد %s !');
define('DEST_DIR_RO', 'وجهة الملف %s غير قابل للكتابة !');
define('ERR_MOVE', 'من المستحيل نقل %s الى %s !');
define('ERR_FSIZE_TOO_LARGE', 'الصور التي تريد تحميلها كبيرة جدا (اكبر حجم للصورة هو %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'الصور التي تريد تحميلها كبيرة جدا (اكبر حجم للصورة هو %s KB) !');
define('ERR_INVALID_IMG', 'الصورة التي تم تحميلها غير صالحة !');
define('ALLOWED_IMG_TYPES', 'تستطيع تحميل %s صورة.');
define('ERR_INSERT_PIC', 'الصورة \'%s\' لا يمكن تخزيها في الالبوم ');
define('UPLOAD_SUCCESS', 'تمم تحميل الصورة بنجاح<br /><br />سوف تراها بعد موافقة المدير.');
define('INFO', 'معلومات');
define('ERR_COMMENT_EMPTY', 'لم تكتب التعليق !');
define('ERR_INVALID_FEXT', 'سوف يسمح بالملفات التي تنتهي بـ : <br /><br />%s.');
define('NO_FLOOD', 'نأسف لكنك انت كنت آخر معلق على هذه الصورة<br /><br />تستطيع تغيير تعليقك على الصورة');
define('REDIRECT_MSG', 'سيتم تحوليك الى صفحة اخرى.<br /><br /><br />اضغط على  \'استمــر\' ان لم يتم اعادة تنشيط الصفحة تلقائيا');
define('UPL_SUCCESS', 'تم تحميل الصورة بنجاح');

// lang_delete_php
define('CAPTION', 'العنوان');
define('FS_PIC', 'صورة بالحجم الطبيعي');
define('DEL_SUCCESS', 'تم الغاءها بنجاح');
define('NS_PIC', 'صورة بالحجم الطبيعي');
define('ERR_DEL', 'لا يمكن الغاءه');
define('THUMB_PIC', 'مختصر');
define('COMMENT', 'تعليق');
define('IM_IN_ALB', 'صورة في الالبوم');
define('ALB_DEL_SUCCESS', 'الالبوم \'%s\' تم الغاءه');
define('ALB_MGR', 'مدير الالبوم');
define('ERR_INVALID_DATA', 'بيانات غير صالحة تم استقبالها في \'%s\'');
define('CREATE_ALB', 'جاري تكوين الالبوم \'%s\'');
define('UPDATE_ALB', 'جاري تحديث الالبوم \'%s\' بالعنوان \'%s\' والفهرس \'%s\'');
define('DEL_PIC', 'الغاء الصورة');
define('DEL_ALB', 'الغي الالبوم');
define('DEL_USER', 'الغي المستخدم');
define('ERR_UNKNOWN_USER', 'المستخدم المختار غير موجود !');
define('COMMENT_DELETED', 'تم الغاء التعليق بنجاح');

// lang_display_image_php
define('CONFIRM_DEL', 'هل أنت متأكد لإلغاء الصورة ? \\nسيتم الغاء التعليقات ايضا.');
define('DEL_PIC', 'أضغط لمسـح هذه الصورة');
define('SIZE', '%s في %s نقطة');
define('VIEWS', '%s مـرات');
define('SLIDESHOW', 'عرض الشرائح');
define('STOP_SLIDESHOW', 'لتوقيف عرض الشرائح');
define('VIEW_FS', 'اضغط لتكبيـر الصورة');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('TITLE', 'معلومات عن الصورة');
define('FILENAME', 'اسم الملف');
define('ALBUM NAME', 'اسم الألبوم');
define('RATING', 'تقييم (%s تصويت)');
define('KEYWORDS', 'الكلمات الرّئيسيّة ');
define('FILE SIZE', 'حجم الملف');
define('DIMENSIONS', 'الأبعاد ');
define('DISPLAYED', 'عدد مرات الإضهار');
define('CAMERA', 'آلة التصوير');
define('DATE TAKEN', 'تاريخ التقاط الصورة');
define('APERTURE', 'العدسة ');
define('EXPOSURE TIME', 'وقت التّعرّض ');
define('FOCAL LENGTH', 'البعد البؤريّ ');
define('COMMENT', 'ملاحظات');
define('ADDFAV', 'اضف الى المفضلة');
define('ADDFAVPHRASE', 'المفضلة');
define('REMFAV', 'الغ من المفضلة');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', 'حسنـا');
define('EDIT_TITLE', 'لتحـرير الملاحظات');
define('CONFIRM_DELETE_COM', 'هل أنت متأكـد لحـذف هذه الملاحظات ?');
define('ADD_YOUR_COMMENT', 'أدخـل ملاحظاتك');
define('NAME', 'الاسم');
define('COMMENT', 'تعليق');
define('YOUR_NAME', 'مجهول');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'اضغط على الصورة لاغلاق النافذة');

// lang_ecard_php
define('TITLE', 'ارسال كرت معايدة');
define('INVALID_EMAIL', '<b>تنبـيه</b> : البريد الالكتروني خطأ !');
define('ECARD_TITLE', 'كرت من  %s لك');
define('VIEW_ECARD', 'ان لم يظهر الكرت بالصورة الصحيحة, اضغط هنا');
define('VIEW_MORE_PICS', 'اضغط هنا لرؤية المزيد من الصور !');
define('SEND_SUCCESS', 'تم ارسال كرتك');
define('SEND_FAILED', 'نأسف لكن الخادم لا يستطيع ارسال الكرت...');
define('FROM', 'من');
define('YOUR_NAME', 'اسمك');
define('YOUR_EMAIL', 'البريد الألكتروني');
define('TO', 'الى');
define('RCPT_NAME', 'اسم المرسل اليه');
define('RCPT_EMAIL', 'بريد المرسل اليه الالكتروني');
define('GREETINGS', 'التحية');
define('MESSAGE', 'الرسالة');

// lang_editpics_php
define('PIC_INFO', 'معلومات الصورة');
define('ALBUM', 'البوم');
define('TITLE', 'عنوان الصورة');
define('DESC', 'بيان عن الصورة');
define('KEYWORDS', 'الكلمات الرّئيسيّة ');
define('PIC_INFO_STR', '%sx%s - %sكيلوبايت - %s مشاهدة - %s تصويتات');
define('APPROVE', 'اعتمد الصورة');
define('POSTPONE_APP', 'تأجيل الموافقة');
define('DEL_PIC', 'الغاء الصورة');
define('READ_EXIF', 'Read EXIF info again');
define('RESET_VIEW_COUNT', 'مسح العداد');
define('RESET_VOTES', 'الغاء التصويت');
define('DEL_COMM', 'مسح الملاحظات');
define('UPL_APPROVAL', 'موافقة التحميل');
define('EDIT_PICS', 'تحـرير الصور');
define('SEE_NEXT', 'الصور التاليـة');
define('SEE_PREV', 'الصور السابقة');
define('N_PIC', '%s الصـور');
define('N_OF_PIC_TO_DISP', 'عدد الصور المعروضة');
define('APPLY', 'تطبيق التعديل');

// lang_groupmgr_php
define('GROUP_NAME', 'اسم المجموعة');
define('DISK_QUOTA', 'مساحة التخزين المسموحة');
define('CAN_RATE', 'لا استطيع تقييم الصور');
define('CAN_SEND_ECARDS', 'يستطيع ارسال الصورة كبريد');
define('CAN_POST_COM', 'يستطيع اضافة تعليقات');
define('CAN_UPLOAD', 'يستطيع تحميل الصور');
define('CAN_HAVE_GALLERY', 'يستطيع الحصول على معرض شخصي');
define('APPLY', 'تخزين التعديلات');
define('CREATE_NEW_GROUP', 'تكوين مجموعة مستخدمين جديدة');
define('DEL_GROUPS', 'الغاء المجموعات المختارة');
define('CONFIRM_DEL', 'تحذير, عندما تمسح مجموعة, سيتم نقل المستخدمين في هذه المجموعة الى قائمة \'المسجلين\' !\\n\\nهل تود استكمال العملية  ?');
define('TITLE', 'ادارة مجموعات المستخدمين');
define('APPROVAL_1', 'موافقة تحميل عامة (1)');
define('APPROVAL_2', 'موافقة تحميل عامة (2)');
define('NOTE1', '<b>(1)</b> التحميل في الالبوم العام يحتاج موافقة المدير');
define('NOTE2', '<b>(2)</b> التحميلات التي يمكلها المستخدم تحتاج موافقة المدير');
define('NOTES', 'ملاحظات');

// lang_index_php
define('WELCOME', 'أهـلاً وسـهلاً بك يـا');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'هل أنت متأكد لألغاء هذه الصورة ? \\nAll pictures and comments will also be deleted.');
define('DELETE', 'الغاء الصورة');
define('MODIFY', 'تحديث الألبوم');
define('EDIT_PICS', 'تحرير الصورة');

// lang_list_categories
define('HOME', 'Home');
define('STAT1', '<b>[pictures]</b> صورة في <b>[albums]</b> البوم و <b>[cat]</b> تصنيفات مع <b>[comments]</b> تعليقات شوهدت <b>[views]</b> مرة');
define('STAT2', '<b>[pictures]</b> صورة في <b>[albums]</b> البوم وشوهدت <b>[views]</b> مرة');
define('XX_S_GALLERY', 'معرض %s');
define('STAT3', '<b>[pictures]</b> صورة في <b>[albums]</b> البوم مع <b>[comments]</b> تعليقات شوهدت <b>[views]</b> مرة');

// lang_list_users
define('USER_LIST', 'قائمة المستخدمين');
define('NO_USER_GAL', 'لا يوجد مستخدمين يمكن ان يكون لهم البومات');
define('N_ALBUMS', '%s البوم');
define('N_PICS', '%s صورة/صور');

// lang_list_albums
define('N_PICTURES', '%s صورة');
define('LAST_ADDED', ', آخر صورة اضيفت في %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'تحديث الالبوم %s');
define('GENERAL_SETTINGS', 'اعدادات عامة');
define('ALB_TITLE', 'عنوان الالبوم');
define('ALB_CAT', 'تصنيف الالبوم');
define('ALB_DESC', 'شرح الالبوم');
define('ALB_THUMB', 'نبذة الالبوم');
define('ALB_PERM', 'صلاحيات الالبوم');
define('CAN_VIEW', 'مشاهدين الالبوم هم');
define('CAN_UPLOAD', 'الزوار يستطيعون تحميل صور');
define('CAN_POST_COMMENTS', 'الزوار يستطيعون تسجيل تعليقات');
define('CAN_RATE', 'الزوار يستطيعون التقييم');
define('USER_GAL', 'البوم المستخدمين');
define('NO_CAT', '* غير مصنف *');
define('ALB_EMPTY', 'الالبوم فارغ');
define('LAST_UPLOADED', 'آخر تحميل');
define('PUBLIC_ALB', 'للجميع (البوم عام)');
define('ME_ONLY', 'لي فقط');
define('OWNER_ONLY', 'مالك الالبوم (%s) فقط');
define('GROUPP_ONLY', 'اعضاء المجموعة \'%s\'');
define('ERR_NO_ALB_TO_MODIFY', 'لا يوجد البوم تستطيع تعديله في قاعدة البيانات.');
define('UPDATE', 'تحديث الالبوم');

// lang_rate_pic_php
define('ALREADY_RATED', 'نأسف لكن كنت قد قيمت هذه الصورة مسبقا');
define('RATE_OK', 'تم قبول تقييمك');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'حيث ان مدراء الموقع {SITE_NAME} سيقومون بتعديل او الغاء الصور الغير مرغوب فيها, فمن الصعب مراجعة جميع الصور. لذا يجب عليك العلم ان الصور تمثل اصحابها فقط وليس لها علاقة بالمدراء أو مسؤولين الصفحة (الى اذا قامو هم بذلك) وبالتالي لن يتحملو مسؤولية تلك الصور.<br />
<br />
انت توافق انك لن تقوم بتحميل اي صور مرفوضة, وقحة, خارجة عن اللياقة العامة, تقذف الغير, كراهية, تهدد الغير, جنسية أو اي صور خارجة عن نطاق القانون. انت توافق ان مسؤول الصفحة, المدير والمشرفين في الموقع {SITE_NAME} لهم الحق في تعديل وازالة اي محتوى في اي وقت يرونه مناسبا. وكما توافق ان تكون البيانات التي تدخلها سوف تخزن في قاعدة بيانات. وحيث ان هذه المعلومات لن تعلن لشخص ثالث دون مواققتك لن يتحمل المسؤول او مدير الموقع اي دخول تخريبي على الموقع يتم به معرفة هذه المعلومات.<br />
<br />
هذا الموقع يستعمل الكوكيز لتخزين المعلومات على جهازك. هذه الكوكيز تحسن من اطلاعك على الصور فقط. ويستعمل البريد الالكتروني لتأكيد عملية تسجيلك وكلمة السر.<br />
<br />
بالضغط على زر \'اوافق\' ان توافق وتلزم بهذه الشروط.');

// lang_register_php
define('PAGE_TITLE', 'تسجيل المستخدم');
define('TERM_COND', 'الشروط والقواعد');
define('I_AGREE', 'اوافق');
define('SUBMIT', 'تسجيل الطلب');
define('ERR_USER_EXISTS', 'الاسم الذي ادخلته موجود مسبقا, الرجاء استخدام اسم آخر');
define('ERR_PASSWORD_MISMATCH', 'كلمتي السر لا ينطبقان، عليك ادخالهما مرة اخرى');
define('ERR_UNAME_SHORT', 'يجب ان تكون الكنية على الاقل حرفين');
define('ERR_PASSWORD_SHORT', 'يجب ان تكون كلمة السر على الاقل حرفين');
define('ERR_UNAME_PASS_DIFF', 'يجب ان تكون الكنية مختلفة عن كلمة السر');
define('ERR_INVALID_EMAIL', 'البريد الالكتروني الذي كتبته لا يعمل');
define('ERR_DUPLICATE_EMAIL', 'مستخدم آخر مسجل له نفص البريد الالكتروني');
define('ENTER_INFO', 'ادخل بيانات التسجيل');
define('REQUIRED_INFO', 'معلومات مطلوبة');
define('OPTIONAL_INFO', 'معلومات اضافية');
define('USERNAME', 'الكنية');
define('PASSWORD', 'كلمة السر');
define('PASSWORD_AGAIN', 'اعد ادخال كلمة السر');
define('EMAIL', 'البريد الالكتروني');
define('LOCATION', 'المكان');
define('INTERESTS', 'الاهتمامات');
define('WEBSITE', 'صفحتك');
define('OCCUPATION', 'الوظيفة');
define('ERROR', 'خطأ');
define('CONFIRM_EMAIL_SUBJECT', '%s - تأكيد التسجيل');
define('INFORMATION', 'بيانات');
define('FAILED_SENDING_EMAIL', 'لم استطيع ارسال رسالة تأكيد التسجيل !');
define('THANK_YOU', 'شكرا على التسجيل.<br /><br />تم ارسال بريد يوضح كيفية تفعيل الاشتراك.');
define('ACCT_CREATED', 'تم تكوين اشتراكك وتستطيع الدخول بكنيتك وكلمة السر');
define('ACCT_ACTIVE', 'اشتراكك فعال الآن وتستطيع الدخول بكنيتك وكلمة السر');
define('ACCT_ALREADY_ACT', 'اشتراكك فعال مسبقا !');
define('ACCT_ACT_FAILED', 'لا يمكن تفعيل هذا الحساب !');
define('ERR_UNK_USER', 'المستخدم المختار غير موجود !');
define('X_S_PROFILE', 'بيانات %s');
define('GROUP', 'المجموعة');
define('REG_DATE', 'مشارك');
define('DISK_USAGE', 'استهلاك التخزين');
define('CHANGE_PASS', 'غير كلمة السر');
define('CURRENT_PASS', 'كلمة السر الحالية');
define('NEW_PASS', 'كلمة سر جديدة');
define('NEW_PASS_AGAIN', 'كلمة السر الجديدة مرة اخرى');
define('ERR_CURR_PASS', 'كلمة السر الحالية غير صحيحة');
define('APPLY_MODIF', 'تطبيق التغييرات');
define('UPDATE_SUCCESS', 'تم تحديث بياناتك');
define('PASS_CHG_SUCCESS', 'تم تغيير كلمة السر');
define('PASS_CHG_ERROR', 'لم تتغير كلمة السر');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Thank you for registering at {SITE_NAME}

Your username is : "{USER_NAME}"
Your password is : "{PASSWORD}"

لتفعيل الحساب عليك الضغط على الوصلة بالاسفل
او انسخ والصق الوصلة في متصفح الانترنت لديك.

{ACT_LINK}

Regards,

The management of {SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', 'مراجعة التعليقات');
define('NO_COMMENT', 'لا تعليقات للمراجعة');
define('N_COMM_DEL', '%s تعليق الغي');
define('N_COMM_DISP', 'عدد التعليقات المعروضة');
define('SEE_PREV', 'السابق');
define('SEE_NEXT', 'التالي');
define('DEL_COMM', 'الغاء التعليقات المختارة');

// lang_search_php
define('SEARCH', 'ابحث مجموعة الصور');

// lang_search_new_php
define('PAGE_TITLE', 'ابحث الصور الجديدة');
define('SELECT_DIR', 'اختر مجلد');
define('SELECT_DIR_MSG', 'هذه العملية تمكنك من اضافة كمية من الصور تم تحميلها بواسطة FTP الى خادم الصفحات لديك.<br /><br />اختر الدليل حيث قمت بعملية التحميل مسبقا');
define('NO_PIC_TO_ADD', 'لا توجد صورة اضيفها');
define('NEED_ONE_ALBUM', 'تحتاج على الاقل البوما واحدا لهذه العملية');
define('WARNING', 'تحذير');
define('CHANGE_PERM', 'لا يستطيع البرنامج التخزين في هذا الدليل, تحتاج تغيير صلاحيات الدليل الى 755 او 777 قبل اضافة الصور !');
define('TARGET_ALBUM', '<b>ضع صور &quot;</b>%s<b>&quot; في </b>%s');
define('FOLDER', 'مجلد');
define('IMAGE', 'صورة');
define('ALBUM', 'البوم');
define('RESULT', 'نتيجة');
define('DIR_RO', 'غير قابل للتخزين. ');
define('DIR_CANT_READ', 'غير قابل للقراءة. ');
define('INSERT', 'اضافة صور جديدة للمعرض');
define('LIST_NEW_PIC', 'قائمة الصور الجديدة');
define('INSERT_SELECTED', 'تخزين الصور المختارة');
define('NO_PIC_FOUND', 'لا توجد صور جديدة');
define('BE_PATIENT', 'الرجاء الصبر، حيث يحتاج البرنامج لبعض من الوقت لاضافة الصور');
define('NOTES', '<ul><li><b>OK</b> : يعني انه تم اضافة الصور بنجاح<li><b>DP</b> : يعني ان الصورة مكررة في قاعدة البيانات وهي موجودة فعلا<li><b>PB</b> : تعني انني لم اتمكن من اضافة الصورة, تأكد من الاعدادات ومن صلاحياتك في تخزين الصورة في هذا المجلد<li>اذا كان الرمز OK, DP, PB لا يظهر اضغط على الوصلة المكسورة لمعرفة سبب عدم ظهورها PHP<li>ان لم يرد على المتصفح بعد وقت كاف, اضغط على زر اعادة تحميل الصفحة</ul>');

// lang_upload_php
define('TITLE', 'تحميل صورة');
define('MAX_FSIZE', 'اكبر حجم لملف الصورة هو %s كيلو بايت');
define('ALBUM', 'البوم');
define('PICTURE', 'صورة');
define('PIC_TITLE', 'عنوان صورة');
define('DESCRIPTION', 'شرح الصورة');
define('KEYWORDS', 'كلمات بحث (افصل بينهما بمسافة)');
define('ERR_NO_ALB_UPLOADABLES', 'نأسف لكن لا يوجد البوم تستطيع تحميل الصور اليه');

// lang_usermgr_php
define('TITLE', 'ادارة المستخدمين');
define('NAME_A', 'تصاعدي حسب الاسم');
define('NAME_D', 'تنازلي حسب الاسم');
define('GROUP_A', 'تصاعدي حسب المجموعة');
define('GROUP_D', 'تنازلي حسب المجموعة');
define('REG_A', 'تصاعدي حسب تاريخ التسجيل');
define('REG_D', 'تنازلي حسب تاريخ التسجيل');
define('PIC_A', 'تصاعدي حسب عد الصور');
define('PIC_D', 'تنازلي حسب عد الصور');
define('DISKU_A', 'تصاعدي حسب مساحة التخزين');
define('DISKU_D', 'تنازلي حسب مساحة التخزين');
define('SORT_BY', 'رتب المستخدمين حسب');
define('ERR_NO_USERS', 'جدول المستخدم فارغ !');
define('ERR_EDIT_SELF', 'لا تستطيع تعديل بياناتك الخاصة, استعمل زر \'بياناتي\' لذلك');
define('EDIT', 'تعديل');
define('DELETE', 'الغاء');
define('NAME', 'اسم المستخدم');
define('GROUP', 'المجموعة');
define('INACTIVE', 'معطل');
define('OPERATIONS', 'العمليات');
define('PICTURES', 'الصور');
define('DISK_SPACE', 'مساحة التخزين المسموحة / كوتا');
define('REGISTERED_ON', 'تم تسجيله في');
define('U_USER_ON_P_PAGES', '%d مستخدم في %d صفحة/صفحات');
define('CONFIRM_DEL', 'هل انت متأكد من الغاء هذا المستخدم ? \\nكل صوره والبوماته سوف تلغى.');
define('MAIL', 'بريد');
define('ERR_UNKNOWN_USER', 'المستخدم المختار غير موجود !');
define('MODIFY_USER', 'تغيير المستخدم');
define('NOTES', 'ملاحظات');
define('NOTE_LIST', '<li>ان لم تريد تغيير كلمة السر, اترك مربع كلمة السر فارغا');
define('PASSWORD', 'كلمة السر');
define('USER_ACTIVE_CP', 'المستخدم معطل');
define('USER_GROUP_CP', 'مجموعة المستخدمين');
define('USER_EMAIL', 'بريد المستخدم');
define('USER_WEB_SITE', 'صفحة المستخدم');
define('CREATE_NEW_USER', 'تكوين مستخدم جديد');
define('USER_FROM', 'موقع المستخدم');
define('USER_INTERESTS', 'اهتمامات المتسخدم');
define('USER_OCC', 'وظيفة المستخدم');

// lang_util_php
define('TITLE', 'تغيير قياص الصورة');
define('WHAT_IT_DOES', 'ماذا تعمل');
define('WHAT_UPDATE_TITLES', 'تحديث العناوين من اسماء الملفات');
define('WHAT_DELETE_TITLE', 'الغاء العناوين');
define('WHAT_REBUILD', 'يعبد بناء مختصرات الصور ويعيد قياس الصور');
define('WHAT_DELETE_ORIGINALS', 'يلغي الصور المعاد قياسها الاصلية و يستبدلهم بصور معاد قياسها');
define('FILE', 'ملف');
define('TITLE_SET_TO', 'العنوان محدد الى');
define('SUBMIT_FORM', 'سجل');
define('UPDATED_SUCCESFULLY', 'تم تحديثه بنجاح');
define('ERROR_CREATE', 'خطأ في تكوين');
define('CONTINUE', 'معالجة المزيد من الصور');
define('MAIN_SUCCESS', 'الملف %s تم استعماله كالصورة الرئيسية');
define('ERROR_RENAME', 'خطأ في تغيير الاسم %s الى %s');
define('ERROR_NOT_FOUND', 'الملف %s غير موجود');
define('BACK', 'الرجوع الى الرئيسية');
define('THUMBS_WAIT', 'تحديث مختصرات الصور و/او الصور المعاد قياسها, الرجاء الانتظار...');
define('THUMBS_CONTINUE_WAIT', 'مستمر في تحديث مختصرات الصور او/و الصور المعاد قياسها...');
define('TITLES_WAIT', 'تحديث العناوين, الرجاء الانتظار...');
define('DELETE_WAIT', 'الغاء العناوين, الرجاء الانتظار...');
define('REPLACE_WAIT', 'يتم الغاء الصور الاصلية ويتم استبداله باخرى معاد قياسها, الرجاء الانتظار..');
define('INSTRUCTION', 'تعليمات سريعة');
define('INSTRUCTION_ACTION', 'اختار عملية');
define('INSTRUCTION_PARAMETER', 'تحديد المتغيرات');
define('INSTRUCTION_ALBUM', 'اختر الالبوم');
define('INSTRUCTION_PRESS', 'اضغط على %s');
define('UPDATE', 'تحديث المختصرات و/أو اعادة تقييس الصور');
define('UPDATE_WHAT', 'ماذا يجب تحديثه');
define('UPDATE_THUMB', 'مختصرات الصور فقط');
define('UPDATE_PIC', 'الصور المعاد قياسها فقط');
define('UPDATE_BOTH', 'الصور المختصرة والمعاد قياسها معا');
define('UPDATE_NUMBER', 'عدد الصور المعالجة بالضغطة');
define('UPDATE_OPTION', '(حال التقليل من هذا الاعداد ان واجهت مشاكل انتهاء الوقت)');
define('FILENAME_TITLE', 'اسم الملف &rArr; عنوان الصورة');
define('FILENAME_HOW', 'كيفية تغيير اسم الملف');
define('FILENAME_REMOVE', 'ازالة نهاية .jpg و استبدال _ (شرطة سفلية) بالمسافات');
define('FILENAME_EURO', 'غير 2003_11_23_13_20_20.jpg الى 23/11/2003 13:20');
define('FILENAME_US', 'يغير  2003_11_23_13_20_20.jpg الى  11/23/2003 13:20');
define('FILENAME_TIME', 'يغير  2003_11_23_13_20_20.jpg الى 13:20');
define('DELETE', 'يلغي عناوين الصور او صور القياس الاصلية');
define('DELETE_TITLE', 'الغي عناوين الصور');
define('DELETE_ORIGINAL', 'الغي صور القياس الاصلية');
define('DELETE_REPLACE', 'يلغي الصور الاصلية ويستبدلهم باخرى بقياس مختلف');
define('SELECT_ALBUM', 'اختار الالبوم');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>