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
  $Source: /cvs/l10n/arabic/coppermine.php,v $
  $Revision: 9.7 $
  $Author: nanocaiordo $
  $Date: 2008/03/20 11:59:21 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'مشاهدات ');//new in 1.2.2nuke
define('PIC_VOTES', 'Votes');//new in 1.2.2nuke
define('PIC_COMMENTS', 'تعليقات ');//new in 1.2.2nuke

// lang_translation_info
define('LANG_NAME_ENGLISH', 'انكليزية ');
define('LANG_NAME_NATIVE', 'انكليزية ');
define('LANG_COUNTRY_CODE', 'en');
define('TRANS_NAME', 'hadi00');
define('TRANS_EMAIL', 'ahlaalam00@hotmail.com');
define('TRANS_WEBSITE', 'http://ahlaalam.com/');
define('TRANS_DATE', '2003-04-20');
define('CHARSET', 'UTF-8');
define('TEXT_DIR', 'rtl');
// left is for port compliancy
define('YES', 'نعم');
define('NO', 'لا');
// some common strings
define('BACK', 'للخلف ');
define('CONTINU', 'انهاء ');
define('INFO', 'معلومات');
//define('_ERROR', 'Error'); //already in main lang file
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%m/%d/%y @ %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y @ %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y @ %I:%M %p');

// lang_meta_album_names
define('RANDOM', 'صور عشوائية ');
define('LASTUP', 'آخر الإضافات ');
define('LASTUPBY', 'آخر الصور المضافة من قبلي ');
define('LASTALB', 'آخر الألبومات المحدّثة ');
define('LASTCOM', 'آخر التعليقات ');
define('LASTCOMBY', 'آخر التعليقات المضافة من قبلي ');
define('TOPN', 'أكثر المشاهدات ');
define('TOPRATED', 'أعلى تقييم ');
define('LASTHITS', 'آخر الصور المستعرضة');
define('SEARCH', 'نتائج البحث ');
define('FAVPICS', 'صور المفضلة ');

// lang_errors
define('ACCESS_DENIED', 'ليس لديك الأذونات لاستعراض هذه الصفحة ');
define('PERM_DENIED', 'ليس لديك الإذن لتنفيذ هذه العملية ');
define('PARAM_MISSING', 'بارمتر مفقود : تم استدعاء سكربت بدون البارمترات المطلوبة ');
define('NON_EXIST_AP', 'الصورة - الالبوم المختار غير موجود ');
define('QUOTA_EXCEEDED', 'مساحة غير كافية <br /><br /لديك مسـاحة  [quota]K,وصورك حاليا تستهلك مساحة [space]K,بإضافة هذه الصورة ستكون المساحة الخاصة بك قد امتلأت');
define('GD_FILE_TYPE_ERR', 'عند استخدامك للكود الامني ، فالامتداد المسموح به للصورة فقط :JPEG / PNG.');
define('INVALID_IMAGE', 'صورة غير صالحة ');
define('RESIZE_FAILED', 'غير قادر على انشاء تصغير للصورة أو تقليل حجمها ');
define('NO_IMG_TO_DISPLAY', 'لا توجد صورة للعرض');
define('NON_EXIST_CAT', 'القســم الذي قمت باختياره غير موجود ');
define('ORPHAN_CAT', 'لا وجد قسم أعلى للقسم الفرعي ، قم بالدخول لإدارة الأقسام وحل المشكلة ');
define('DIRECTORY_RO', 'الدليل \'%s\' ليست له أذونات الكتابة ، لا يمكن حذف الصور');
define('NON_EXIST_COMMENT', 'التعليق الذي قمت باختياره غير موجود');
define('PIC_IN_INVALID_ALBUM', 'الصورة ليس لها البوم محدد (%s)!?');
define('BANNED', 'تم منعك من استخدام هذا الموقع');
define('NOT_WITH_UDB', 'This function is disabled in Coppermine because it is integrated with forum software. Either what you are trying to do is not supported in this configuration, or the function should be handled by the forum software.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');
define('NO_IMG_TO_APPROVE', 'No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE', 'الذهاب إلى قائمة الألبومات ');
define('ALB_LIST_LNK', 'قائمة الألبومات ');
define('MY_GAL_TITLE', 'إذاهب إلى معرض الصور الخاص بي');
define('MY_GAL_LNK', 'معرض الصور الخاص بي');
define('MY_PROF_LNK', 'ملفي الشخصي');
define('MY_PROF_TITLE','تحقق من المساحة الخاصة بك ومن المجموعات');
define('ADM_MODE_TITLE', 'تبديل إلى وضعية الإشراف');
define('ADM_MODE_LNK', 'وضعية الأشراف');
define('USR_MODE_TITLE', 'تبديل إلى وضعية المستخدم');
define('USR_MODE_LNK', 'وضعية المستخدم');
define('UPLOAD_PIC_TITLE', 'تبديل إلى رفع صورة إلى ألبوم معين');
define('UPLOAD_PIC_LNK', 'رفع صورة');
define('REGISTER_TITLE', 'تسجيل عضوية');
define('REGISTER_LNK', 'التسجيل');
define('LOGIN_LNK', 'تسجيل الخول');
define('LOGOUT_LNK', 'تسجيل الخروج');
define('LASTUP_LNK', 'آخر الصورة المضافة');
define('LASTUP_TITLE', 'الصورة المضافة حاليا');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'آخر التعليقات');
define('TOPN_TITLE', 'أكثر صور تمت مشاهدتها');
define('TOPN_LNK', 'الأكثر تقييما ');
define('TOPRATED_TITLE', 'الأعلى تقييـما');
define('TOPRATED_LNK', 'الأعلى تقييما ');
define('SEARCH_TITLE', 'ابحث في مجموعة الصور');
define('SEARCH_LNK', '<B>::بحث ');
define('FAV_TITLE', 'المفضلة');
define('FAV_LNK', 'المفضلة الخاصة بي');
define('HELP_TITLE', 'مساعدة ');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Upload approval');
define('CONFIG_LNK', 'إعدادات ');
define('ALBUMS_LNK', 'ألبومات ');
define('CATEGORIES_LNK', 'أقسام ');
define('USERS_LNK', 'مستخدمون ');
define('GROUPS_LNK', 'مجموعات');
define('COMMENTS_LNK', 'مراجعة التعليقات  ');
define('SEARCHNEW_LNK', 'Batch add pictures');
define('UTIL_LNK', 'إعادة تعيين حجم الصور ');
define('BAN_LNK', 'حظر المستخدمين ');

// lang_user_admin_menu
define('ALBMGR_LNK', 'إنشاء الألبومات الخاصة بي ');
define('MODIFYALB_LNK', 'تعديل ألبوماتي ');
//define('MY_PROF_LNK', 'ملفي الشخصي ');

// lang_cat_list
define('CATEGORY', 'قسم ');
define('ALBUMS', 'ألبومات ');
//define('PICTURES', 'Pictures');

// lang_album_list
define('ALBUM_ON_PAGE', '%d ألبوم  %d صفحة ');
// lang_thumb_view
define('DATE', 'التاريخ');
define('NAME', 'اسم الملف');
define('TITLE', 'العنوان');
define('SORT_DA', 'التاريخ حسب تصاعدي  فرز ');
define('SORT_DD', 'التاريخ حسب تنازلي  فرز ');
define('SORT_NA', 'الاسم حسب تصاعدي فرز  ');
define('SORT_ND', 'الاسم حسب تنازلي  فرز ');
define('SORT_TA', 'العنوان حسب تصاعدي فرز ');
define('SORT_TD', 'العنوان حسب تنازلي فرز ');
define('PIC_ON_PAGE', '%d صورة   %d صفحة)');
define('USER_ON_PAGE', '%d مستخدم  %d صفحة ');
define('SORT_RA', 'تقييما الأكثر حسب تصاعدي فرز ');
define('SORT_RD', 'تقييما الأكثر حسب تنازلي فرز ');
define('THUMB_RATING', 'تقييم ');
define('SORT_TITLE', 'فرز الصور بوساطة ');

// lang_img_nav_bar
define('THUMB_TITLE', 'عودة لصفحة المصغرات');
define('PIC_INFO_TITLE', 'إعرض / أخف معلومات الصورة');
define('SLIDESHOW_TITLE', 'عرض شرائح');
define('SLIDESHOW_DISABLED', 'عرض الشــرائح غير مسموح حاليا');
define('SLIDESHOW_DISABLED_MSG', 'هذه الخاصية للأعضاء فقط ، قم بتسجيل عضو جديد');
define('ECARD_TITLE', 'أرسل هذه الصورة بطاقة بريدية');
define('ECARD_DISABLED', 'إرسال البطاقات البريدية متوقف حاليا');
define('ECARD_DISABLED_MSG', 'You don\'t have permission to send ecards');
define('PREV_TITLE', 'عرض الصورة الســابقة');
define('NEXT_TITLE', 'عرض الصورة التالية');
define('PIC_POS', 'الصورة %s/%s');
define('NO_MORE_IMAGES', 'ليس هنالك أي صور أخرى في هذا القســم');
define('NO_LESS_IMAGES', 'هذه هي الصورة الأولى في القســم');

// lang_rate_pic
define('RATE_THIS_PIC', 'قييم هذه الصورة :: ');
define('NO_VOTES', 'لا تقييم حتى الآن ');
define('RATING', '(التقييم الحالي %s/5 عدد الأصوات %s )');
define('RUBBISH', '0/5');
define('POOR', '1/5');
define('FAIR', '2/5');
define('GOOD', '3/5 ');
define('EXCELLENT', '4/5');
define('GREAT', '5/5');

// lang_cpg_die
//define('INFO', 'Information');
//define('ERROR', 'Error');
define('_CRITICAL_ERROR', 'خطأ ');
define('FILE', 'ملف: ');
define('LINE', 'سطر  ');

// lang_display_thumbnails
define('FILENAME', 'اسم الملف  ');
define('FILESIZE', 'حجم الملف  ');
define('DIMENSIONS', 'القياس   ');
define('DATE_ADDED', 'تاريخ الإضافة  ');

// lang_get_pic_data
define('N_COMMENTS', '%s تعليق');
define('N_VIEWS', '%s مشاهدة');
define('N_VOTES', '(%s صوت )');


// lang_albmgr_php
define('ALB_NEED_NAME', 'لابد من وجود اسم للألبوم ');
define('CONFIRM_MODIFS', 'متأكد من تنفيذ هذه التعديلات ؟');
define('NO_CHANGE', 'لم تقم بأي تعديل ');
define('NEW_ALBUM', 'ألبوم جديد ');
define('CONFIRM_DELETE1', 'متأكد من حذف هذا الألبوم ؟');
define('CONFIRM_DELETE2', 'جميع الصور والتعليقات ضمنه ستحذف أيضا ');
define('SELECT_FIRST', 'قم باختيار ألبوم أولا ');
define('ALB_MRG', 'إدارة الألبوم ');
define('MY_GALLERY', '*بي الخاص الصور معرض *');
define('NO_CATEGORY', '*قسم يوجد لا  *');
define('DELETE', 'حذف ');
define('NEW', 'جديد');
define('APPLY_MODIFS', 'تنفيذ التعديلات ');
define('SELECT_CATEGORY', 'اختر قسم ');

// lang_catmgr_php
define('MISS_PARAM', 'Parameters required for \'%s\'operation not supplied !');
define('UNKNOWN_CAT', 'Selected category does not exist in database');
define('USERGAL_CAT_RO', 'User galleries category can\'t be deleted !');
define('MANAGE_CAT', 'إدارة الأقســام الرئيسية');
define('CONFIRM_DELETE_CAT', 'هل تريد بالتأكيد حذف هذا القسـم؟');
//define('CATEGORY', 'Category');
define('OPERATIONS', 'العمليات');
define('MOVE_INTO', 'نقل إلى ');
define('UPDATE_CREATE', 'تحديث / إنشاء قسم ');
define('PARENT_CAT', 'القسم الرئيسي ');
define('CAT_TITLE', 'عنوان القسم ');
define('CAT_DESC', 'وصف القسم ');

// lang_config_php
define('CONFIG_TITLE', 'تشكيل ');
define('RESTORE_CFG', 'استعادة الافتراضي ');
define('SAVE_CFG', 'حفظ التعديلات ');
define('NOTES', 'ملاحظات ');
//define('INFO', 'Information');
define('UPD_SUCCESS', 'تم حفظ التعديلات ');
define('RESTORE_SUCCESS', 'تم استعادة الاعدادات الافتراضية ');
define('NAME_A', 'الاسم حسب تصاعدي فرز');
define('NAME_D', 'الاسم حسب تنازلي فرز');
define('TITLE_A', 'العنوان حسب تصاعدي فرز ');
define('TITLE_D', 'العنوان حسب تنازلي فرز');
define('DATE_A', 'التاريخ حسب تصاعدي فرز');
define('DATE_D', 'التاريخ حسب تنازلي فرز');
define('RATING_A', 'تقييما الأكثر حسب تصاعدي فرز');
define('RATING_D', 'تقييما الأكثر حسب تنازلي فرز');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'الارتفاع');
define('TH_WD', 'العرض');


// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'عليك كتابة اسمك وتعليقك ');
define('COM_ADDED', 'تم إضافة التعليق.');
define('ALB_NEED_TITLE', 'عليك تزويد الالبوم بعنوان ');
define('NO_UDP_NEEDED', 'لا توجد حاجة للتحديث ');
define('ALB_UPDATED', 'تم تحديث الألبوم ');
define('UNKNOWN_ALBUM', 'الألبوم الذي اخترته غير موجود ، أو لا يمكنك رفع ملف إليه ');
define('NO_PIC_UPLOADED', 'No picture was uploaded !<br /><br />If you have really selected a picture to upload, check that the server allows file uploads...or that the gif is not animated.');
define('ERR_MKDIR', 'Failed to create directory %s !');
define('DEST_DIR_RO', 'Destination directory %s is not writable by the script !');
define('ERR_MOVE', 'Impossible to move %s from %s to %s !');
define('ERR_FSIZE_TOO_LARGE', 'The size of picture you have uploaded is too large (maximum allowed is %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'The size of the file you have uploaded is too large (maximum allowed is %s KB) !');
define('ERR_INVALID_IMG', 'The file you have uploaded is not a valid image !');
define('ALLOWED_IMG_TYPES', 'You can only upload %s images.');
define('ERR_INSERT_PIC', 'The picture \'%s\' can\'t be inserted in the album ');
define('UPLOAD_SUCCESS', 'Your picture was uploaded successfully<br /><br />'.((is_admin())? '' :'It will be visible after admin approval'));
//define('INFO', 'Information');
define('ERR_COMMENT_EMPTY', 'تعليقك فارغ ؟؟ الرجاء كتابة التعليق ');
define('ERR_INVALID_FEXT', 'فقط الملفات ذات الامتدادات التالية مقبولة : <br /><br />%s.');
define('NO_FLOOD', 'عذرا ، ولكنك أنت كتبت توا آخر تعليق لهذه الصورة <br /><br /قم بتحرير التعليق إذا وددت تغييره ');
define('REDIRECT_MSG', 'You are being redirected.<br /><br /><br />Click \'CONTINUE\' if the page does not refresh automatically');
define('UPL_SUCCESS', 'Your picture was successfully added');

// lang_delete_php
define('CAPTION', 'Caption');
define('FS_PIC', 'الصورة بحجمها الطبيعي');
define('DEL_SUCCESS', 'تم الحذف بنجاح');
define('NS_PIC', 'الصورة بحجمها العادي');
define('ERR_DEL', 'can\'t be deleted');
define('THUMB_PIC', 'صورة مصغرة');
//define('COMMENT', 'comment');
define('IM_IN_ALB', 'image in album');
define('ALB_DEL_SUCCESS', 'Album \'%s\' deleted');
define('ALB_MGR', 'إدارة الألبومــات');
define('ERR_INVALID_DATA', 'Invalid data received in \'%s\'');
define('CREATE_ALB', 'Creating album \'%s\'');
define('UPDATE_ALB', 'Updating album \'%s\' with title \'%s\' and index \'%s\'');
define('DEL_PIC', 'Delete picture');
define('DEL_ALB', 'Delete album');
define('DEL_USER', 'Delete user');
//define('ERR_UNKNOWN_USER', 'The selected user does not exist !');
define('COMMENT_DELETED', 'Comment was succesfully deleted');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'متأكد من حذف هذه الصورة ? <br />التعليقات ستحذف أيضا ');
define('DEL_THIS_PIC', 'حذف الصورة ');
define('SIZE', '%s x %s بكسل ');
define('VIEWS', '%s مرة ');
define('SLIDESHOW', 'عرض تلقائي ');
define('STOP_SLIDESHOW', 'أوقف العرض ');
define('VIEW_FS', 'انقر على الصورة لمشاهدة الصورة بحجمها الطبيعي ');
define('EDIT_PIC', 'تعديل معلومات الصورة ');

// lang_picinfo
define('PIC_INF_TITLE', 'معلومات الصورة ');
define('PIC_INF_FILENAME', 'اسم الملف');
define('ALBUM_NAME', 'اسم الالبوم ');
define('PIC_INFO_RATING', 'التقييم  (%s صوت )');
define('KEYWORDS', 'كلمات مفتاحية ');
define('PIC_INF_FILE_SIZE', 'حجم الملف ');
define('PIC_INF_DIMENSIONS', 'قياس ');
define('DISPLAYED', 'Displayed');
define('CAMERA', 'كاميرا ');
define('DATE_TAKEN', 'Date taken');
define('APERTURE', 'Aperture');
define('EXPOSURE_TIME', 'Exposure time');
define('FOCAL_LENGTH', 'Focal length');
define('COMMENT', 'تعليق');
define('ADDFAV', 'أضف الصورة إلى المفضلة');
define('ADDFAVPHRASE', 'الصورة المفضلة');
define('REMFAV', 'Remove from Favorites Album');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'إجعلها الأولى');
define('REMOVEFAV', 'Removed from Favorites Album');
define('ADDEDTOFAV', 'Added to Favorites Album');

// lang_display_comments
define('OK', 'OK');
define('COM_EDIT_TITLE', 'تحرير التعليق ');
define('CONFIRM_DELETE_COM', 'متأكد من حذف التعليق ');
define('ADD_YOUR_COMMENT', 'أضف تعليق ');
define('COM_NAME', 'الاسم');
//define('COMMENT', 'Comment');
define('YOUR_NAME', 'Anon');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'انقر على صورة لإغلاق هذه النافذة ');

// lang_ecard_php
define('E_TITLE', 'أرسل بطاقة الكترونية ');
define('INVALID_EMAIL', '<b>تحذير </b> :بريد الكتروني خاطيء !');
define('E_ECARD_TITLE', 'بطاقة الكترونية من  %s  اليك ');
define('VIEW_ECARD', 'اذا لم تعرض البطاقة بشكل صحيح ، انقر على هذا الرابط ');
define('VIEW_MORE_PICS', 'انقر على هذا الرابط لاستعراض المزيد من الصور ');
define('SEND_SUCCESS', 'تم ارسال البطاقة ');
define('SEND_FAILED', 'عذرا ، ولكن السيرفر لم يتمكن من ارسال بطاقتك ');
define('FROM', 'معلومات المرسل ');
define('_YOUR_NAME', 'اسمك');
define('YOUR_EMAIL', 'بريدك ');
define('TO', 'المرسل إليه ');
define('RCPT_NAME', 'اسم المستقبل ');
define('RCPT_EMAIL', 'بريده ');
define('GREETINGS', 'عنوان الرسالة ');
define('MESSAGE', 'نص الرسالة ');
define('ECARD_LINK_CORRUPT', 'Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser'); //NEW

// lang_editpics_php
define('PIC_INFO', 'Picture&nbsp;info');
define('ALBUM', 'ألبوم ');
define('EDIT_TITLE', 'العنوان ');
define('DESC', 'الوصف ');
//define('KEYWORDS', 'Keywords');
define('PIC_INFO_STR', '%sx%s - %sKB - %s views - %s votes');
define('APPROVE', 'Approve picture');
define('POSTPONE_APP', 'Postpone approval');
//define('DEL_PIC', 'Delete picture');
define('READ_EXIF', 'Read EXIF info again');
define('RESET_VIEW_COUNT', 'Reset view counter');
define('RESET_VOTES', 'Reset votes');
define('DEL_COMM', 'Delete comments');
define('UPL_APPROVAL', 'Upload approval');
define('EDIT_PICS', 'Edit pictures');
define('SEE_NEXT', 'See next pictures');
define('SEE_PREV', 'See previous pictures');
define('N_PIC', '%s pictures');
define('N_OF_PIC_TO_DISP', 'Number of picture to display');
define('APPLY', 'Apply modifications');

// lang_groupmgr_php
define('GROUP_NAME', 'Group name');
define('DISK_QUOTA', 'Disk quota');
define('CAN_RATE', 'Can rate pictures');
define('CAN_SEND_ECARDS', 'Can send ecards');
define('CAN_POST_COM', 'Can post comments');
define('CAN_UPLOAD', 'Can upload pictures');
define('CAN_HAVE_GALLERY', 'Can have a personal gallery');
//define('APPLY', 'Apply modifications');
define('CREATE_NEW_GROUP', 'Create new group');
define('DEL_GROUPS', 'Delete selected group(s)');
define('CONFIRM_DEL', 'Warning, when you delete a group, users that belong to this group will be transfered to the \'Registered\' group !\\n\\nDo you want to proceed ?');
define('GROUP_TITLE', 'Manage user groups');
define('APPROVAL_1', 'Pub. Upl. approval (1)');
define('APPROVAL_2', 'Priv. Upl. approval (2)');
define('NOTE1', '<b>(1)</b> Uploads in a public album need admin approval');
define('NOTE2', '<b>(2)</b> Uploads in an album that belong to the user need admin approval');
//define('NOTES', 'Notes');

// lang_index_php
define('WELCOME', 'أهلا ');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'Are you sure you want to DELETE this album ? <br />All pictures and comments will also be deleted.');
//define('DELETE', 'DELETE');
define('MODIFY', 'PROPERTIES');
//define('EDIT_PICS', 'EDIT PICS');

// lang_list_categories
define('HOME', _HOME);
define('STAT1', '<b>[pictures]</b> pictures in <b>[albums]</b> albums and <b>[cat]</b> categories with <b>[comments]</b> comments viewed <b>[views]</b> times');
define('STAT2', '<b>[pictures]</b> pictures in <b>[albums]</b> albums viewed <b>[views]</b> times');
define('XX_S_GALLERY', '%s\'s Gallery');
define('STAT3', '<b>[pictures]</b> pictures in <b>[albums]</b> albums with <b>[comments]</b> comments viewed <b>[views]</b> times');

// lang_list_users
define('USER_LIST', 'User list');
define('NO_USER_GAL', 'There are no user galleries');
define('N_ALBUMS', '%s album(s)');
define('N_PICS', '%s picture(s)');

// lang_list_albums
define('N_PICTURES', '%s صورة');
define('LAST_ADDED', ', الأخيرة أضيفت في  %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Update album %s');
define('GENERAL_SETTINGS', 'إعدادات عامـــــة');
define('ALB_TITLE', 'Album title');
define('ALB_CAT', 'Album category');
define('ALB_DESC', 'وصف الألبوم');
define('ALB_THUMB', 'أيقونة الألبوم');
define('ALB_PERM', 'أذونات هذا الألبوم');
define('CAN_VIEW', 'يمكن استعراض الألبوم من قبل');
define('MOD_CAN_UPLOAD', 'يمكن للزوار رفع الصور');
define('CAN_POST_COMMENTS', 'يمكن للزوار إدراج تعليقاتهم');
define('MOD_CAN_RATE', 'يمكن للزوار تقييم الصور');
define('USER_GAL', 'User Gallery');
define('NO_CAT', '*رئيسي قسم يوجد لا*');
define('ALB_EMPTY', 'الألبوم فارغ');
define('LAST_UPLOADED', 'الصـــور أحدث');
define('PUBLIC_ALB', 'الــــزوار جمــــيع ');
define('ME_ONLY', 'العام المشرف فقط');
define('OWNER_ONLY', 'Album owner (%s) only');
define('GROUPP_ONLY', ' \'%s\' ');
define('ERR_NO_ALB_TO_MODIFY', 'ليس هنالـك أي البوم لتقوم بالتعديلات عليه ، الرجاء إنشاء ألبوم أولا');
define('UPDATE', 'تحديث المعلومات');

// lang_rate_pic_php
define('ALREADY_RATED', 'عذرا ، انت قمت بتقييم الصورة مسبقا ');
define('RATE_OK', 'تم قبول تصويتك ');

// lang_register_php
define('USERNAME', 'اسم المستخدم ');
define('GROUP', 'المجموعة');
define('DISK_USAGE', 'استخدام القرص ');
define('X_S_PROFILE', '%s\'s profile');

// lang_reviewcom_php
define('REVIEW_TITLE', 'مراجعـة التعليــقات ');
define('NO_COMMENT', 'ليس هنالك من تعليقات لمراجعتها');
define('N_COMM_DEL', '%s تعليق حذف');
define('N_COMM_DISP', 'عدد التعليقات الظاهرة');
define('R_SEE_PREV', 'إعرض الســابق');
define('R_SEE_NEXT', 'إعرض التالـي');
define('R_DEL_COMM', 'حذف التعليقات المحددة');

// lang_search_php
define('S_SEARCH', 'إبحث في مجموعة الصور');

// lang_search_new_php
define('PAGE_TITLE', 'Search new pictures');
define('SELECT_DIR', 'Select directory');
define('SELECT_DIR_MSG', 'This function allows you to add a batch of picture that your have uploaded on your server by FTP.<br /><br />Select the directory where you have uploaded your pictures');
define('NO_PIC_TO_ADD', 'There is no picture to add');
define('NEED_ONE_ALBUM', 'You need at least one album to use this function');
define('WARNING', 'Warning');
define('CHANGE_PERM', 'the script can\'t write in this directory, you need to change its mode to 755 or 777 before trying to add the pictures !');
define('TARGET_ALBUM', '<b>ضع الصور الموجودة في &quot;</b>%s<b>&quot; into </b>%s');
define('FOLDER', 'مجلد');
define('IMAGE', 'صورة');
//define('ALBUM', 'Album');
define('RESULT', 'النتيجة ');
define('DIR_RO', 'غير قابل للكتابة  ');
define('DIR_CANT_READ', 'غير قابل للقراءة  ');
define('INSERT', 'إضافة صور جديدة للمعرض');
define('LIST_NEW_PIC', 'قائمة بالصور الجديدة');
define('INSERT_SELECTED', 'إدراج الصور الحددة');
define('NO_PIC_FOUND', 'ليس هناك أي صورة جديدة');
define('BE_PATIENT', 'الرجاء الإنتظار قليلا ، يلزم بعض الوقت لإضافة الصور');
define('SN_NOTES', '<ul><li><b>OK</b> : هذه الإشارة تعني أنه قد تم إضافة الصور بنجاح<li><b>DP</b> : هذه الإشارة تعني أن الصور موجودة مسبقا لدينا<li><b>PB</b> : هذه الإشارة تعني أنه لم تنجح إضافة الصور ، يرجى التحقق من أذونات المجلد الذي يحتويها<liإذا لم تظهر أي من الإشارات الســابقة ، انقر على الصورة المعطلة لاستعراض رسالة بي اتش بي<li><BR>حدث الصفحة لاستعراض النتائج</ul>');
define('SELECT_ALBUM', 'ألبـوم أختر');
define('NO_ALBUM', 'لم تقم باختيار ألبوم ، قم بالروجع للخلف لاختيار ألبوم ووضع صورك فيه');

// lang_upload_php
define('UP_TITLE', 'حمل الآن ');
define('MAX_FSIZE', 'أقصى حجم مسموح به  %s كيلو بايت ');
//define('ALBUM', 'Album');
define('PICTURE', 'الصورة ');
define('PIC_TITLE', 'عنوان الصورة ');
define('DESCRIPTION', 'وصف الصورة ');
define('UP_KEYWORDS', 'كلمات البحث ... فراغات فيما بينها ');
define('ERR_NO_ALB_UPLOADABLES', 'عذرا لا يوجد أي البوم لترفع الصورة إليه ، لذا قم بانشاء ألبوم أولا ');

// lang_usermgr_php
define('U_TITLE', 'إدارة الأعضاء ');
//define('NAME_A', 'Name ascending');
//define('NAME_D', 'Name descending');
define('GROUP_A', 'Group ascending');
define('GROUP_D', 'Group descending');
define('REG_A', 'Reg date ascending');
define('REG_D', 'Reg date descending');
define('PIC_A', 'Pic count ascending');
define('PIC_D', 'Pic count descending');
define('DISKU_A', 'Disk usage ascending');
define('DISKU_D', 'Disk usage descending');
define('SORT_BY', 'Sort users by');
define('ERR_NO_USERS', 'جدول المستخدمين فـــارغ');
define('ERR_EDIT_SELF', 'لتعديل ملفك الشخصي ، اختر "ملفي الشخصي" لتقوم بذلك');
define('EDIT', 'تعديل');
//define('DELETE', 'DELETE');
define('U_NAME', 'اسم المستخدم');
//define('GROUP', 'Group');
define('INACTIVE', 'غير فعّـال');
//define('OPERATIONS', 'Operations');
define('PICTURES', 'Pictures');
define('DISK_SPACE', 'Space used / Quota');
define('REGISTERED_ON', 'Registered on');
define('U_USER_ON_P_PAGES', '%d users on %d page(s)');
define('USER_CONFIRM_DEL', 'Are you sure you want to DELETE this user ? <br />All his pictures and albums will also be deleted.');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'Selected user does not exist !');
define('MODIFY_USER', 'Modify user');
//define('NOTES', 'Notes');
define('NOTE_LIST', '<li>If you don\'t want to change the current password, leave the \"password\" field blank');
define('PASSWORD', 'Password');
define('USER_ACTIVE_CP', 'User is active');
define('USER_GROUP_CP', 'User group');
define('USER_EMAIL', 'User email');
define('USER_WEB_SITE', 'User web site');
define('CREATE_NEW_USER', 'Create new user');
define('USER_FROM', 'User location');
define('USER_INTERESTS', 'User interests');
define('USER_OCC', 'User occupation');

// lang_util_php
define('UTIL_TITLE', 'Resize pictures');
define('WHAT_IT_DOES', 'What it does');
define('WHAT_UPDATE_TITLES', 'Updates titles from filename');
define('WHAT_DELETE_TITLE', 'Deletes titles');
define('WHAT_REBUILD', 'Rebuilds thumbnails and resized photos');
define('WHAT_DELETE_ORIGINALS', 'Deletes original sized photos replacing them with the resized version');
define('U_FILE', 'File');
define('TITLE_SET_TO', 'title set to');
define('SUBMIT_FORM', 'submit');
define('UPDATED_SUCCESFULLY', 'updated succesfully');
define('ERROR_CREATE', 'ERROR creating');
define('CONTIN', 'Process more images');
define('MAIN_SUCCESS', 'The file %s was successfully used as main picture');
define('ERROR_RENAME', 'Error renaming %s to %s');
define('ERROR_NOT_FOUND', 'The file %s was not found');
define('U_BACK', 'back to main');
define('THUMBS_WAIT', 'Updating thumbnails and/or resized images, please wait...');
define('THUMBS_CONTINUE_WAIT', 'Continuing to update thumbnails and/or resized images...');
define('TITLES_WAIT', 'Updating titles, please wait...');
define('DELETE_WAIT', 'Deleting titles, please wait...');
define('REPLACE_WAIT', 'Deleting originals and replacing them with resized images, please wait..');
define('INSTRUCTION', 'Quick instructions');
define('INSTRUCTION_ACTION', 'Select action');
define('INSTRUCTION_PARAMETER', 'Set parameters');
define('INSTRUCTION_ALBUM', 'Select album');
define('INSTRUCTION_PRESS', 'Press %s');
define('U_UPDATE', 'Update thumbs and/or resized photos');
define('UPDATE_WHAT', 'What should be updated');
define('UPDATE_THUMB', 'Only thumbnails');
define('UPDATE_PIC', 'Only resized pictures');
define('UPDATE_BOTH', 'Both thumbnails and resized pictures');
define('UPDATE_NUMBER', 'Number of processed images per click');
define('UPDATE_OPTION', '(Try setting this option lower if you experience timeout problems)');
define('FILENAME_TITLE', 'Filename &rArr; Picture title');
define('FILENAME_HOW', 'How should the filename be modified');
define('FILENAME_REMOVE', 'Remove the .jpg ending and replace _ (underscore) with spaces');
define('FILENAME_EURO', 'Change 2003_11_23_13_20_20.jpg to 23/11/2003 13:20');
define('FILENAME_US', 'Change 2003_11_23_13_20_20.jpg to 11/23/2003 13:20');
define('FILENAME_TIME', 'Change 2003_11_23_13_20_20.jpg to 13:20');
define('UT_DELETE', 'Delete picture titles or original size photos');
define('DELETE_TITLE', 'Delete picture titles');
define('DELETE_ORIGINAL', 'Delete original size photos');
define('DELETE_REPLACE', 'Deletes the original images replacing them with the sized versions');
//define('SELECT_ALBUM', 'Select album');

// lang_pagetitle_php
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
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
$lang_byte_units = array('بايت','ك.ب','م.ب',);
// Day of weeks and months
$lang_day_of_week = array('احد','اثنين','ثلاثاء','اربعاء','خميس','جمعة','سبت',);
$lang_month = array('يناير','فبراير','مارس','ابريل','مايو','يونيو','يوليو','اغسطس','سبتمبر','اكتوبر','نوفمبر','ديسمبر');
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
    // 'General settings',
    'إعدادات عامـــــة',
	array('اسم المعرض', 'gallery_name', 0),
    array('وضف المعرض', 'gallery_description', 0),
    array('بريد المشرف على المعارض', 'gallery_admin_email', 0),
    array('رابط المجلة<BR> http://example.com/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
    array('القالب المســخدم', 'theme', 6),
    array('أظهر عناوين الصفحات بدلا من إظهار اسم المعرض فقط', 'nice_titles', 1),
    //'Album list view',
    'التحكــم بقائمة الألبومات',
    array('عرض الجدول الرئيسي<BR>(pixels or %)', 'main_table_width', 0),
    array('عدد الأقســـام الفرعية المعروضة', 'subcat_level', 0),
    array('عدد الألبومـــات المعروضة', 'albums_per_page', 0),
    array('عدد أعمدة جدول قائمة الألبومـــات', 'album_list_cols', 0),
    array('حجم الصور المصغرة بالبكسل', 'alb_list_thumb_size', 0),
	array('محتويات الصفحة الرئيسية', 'main_page_layout', 0),
    array('إظهار مصغرات ألبومات المستوى الأول في الأقسام الرئيسية', 'first_level', 1), 
    //'Thumbnail view',
    'التحكم بالصور المصغرة',
    array('عدد الأعمدة في صفحة الصور المصغرة', 'thumbcols', 0),
    array('عدد القطاعات الأفقية في صفحة الصور المصغرة', 'thumbrows', 0),
    array('Maximum number of tabs to display', 'max_tabs', 0),
    array('إظـهار شروحات الصورة إضافة إلى عنوانها تحت الصور المصغرة', 'caption_in_thumbview', 1),
    array('إظـهار عدد التعليقات تحت الصورة المصغرة', 'display_comment_count', 1),
    array('فرز افتراضي للصور', 'default_sort_order', 3),
    array('أدنى عدد أصوات مطلوب لتظهر الصورة في قائمة الأكثر تقييما', 'min_votes_for_rating', 0),
    array('إظهار عنوان الصورة و كلمات البحث بدلا عن معلومات الصورة عند وضع الماوس فوقها ؟', 'seo_alts', 1), // new in cpg1.2.0nuke
     //'Display Image &amp; Comment settings',
    'إعدادات عرض الصور ، والتحكم بإعدادات التعليقات',
    array('عرض جدول استعراض الصورة<BR>(pixels or %)', 'picture_table_width', 0),
    array('معلومات الصورة ظاهرة افتراضيـــا', 'display_pic_info', 1),
    array('تفعيل نظــام منع الكلمات السيئة في التعليقات؟', 'filter_bad_words', 1),
    array('الســـماح باستخدام الابتسامات', 'enable_smilies', 1),
    array('السـماح بتعليقات متعاقبة من نفس المستخدم', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
    array('ارسال ايميل للمشرف للسماح للتعليقات ؟' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
    array('الطول الأعظمي لوصف الصورة', 'max_img_desc_length', 0),
    array('العدد الأعظمي لعدد حروف كلمة ', 'max_com_wlength', 0),
    array('العدد الأعظمي لعدد السطور في التعليقات', 'max_com_lines', 0),
    array('الطول الأعظمي للتعليق', 'max_com_size', 0),
    array('إظهار خلفية فلم سينمائي', 'display_film_strip', 1),
    array('عدد الصور المعروضة في الشريط السينمائي', 'max_film_strip_items', 0),
    array('الســماح للزوار باستعراض الصور بحجمها الطبيعي', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
    array('عدد الأيم للسماح بالتصويت على نفس الصورة','keep_votes_time',0), // new in cpg1.2.2c nuke
    array('إظار الحجم الأصلي للصورة في عرض الشرائح ','fullsize_slideshow',1),
    array('Show blocks on the right of displayimage if right blocks are on at module level?', 'right_blocks', 1), // new 1.2.2
    // 'Pictures and thumbnails settings',
    'إعدادات الصــور و التحكم بالصــور المصــغرة',
    array('Quality for JPEG files', 'jpeg_qual', 0),
    array('إدراج علامة مائية للصورة', 'watermark', 1),
    array('المقياس الأعظمي للصورة المصغرة<b>*</b>', 'thumb_width', 0),
    array('Use dimension ( width or height or Max aspect for thumbnail )<b>*</b>', 'thumb_use', 7),
    array('انشاء صور متوسـطة', 'make_intermediate', 1),
    array('أقصى عرض أو ارتفاع للصور المتوسطة <b>*</b>', 'picture_width', 0),
    array('أقصى حجم للصور المرفوعة<BR>(KB)', 'max_upl_size', 0),
    array('أقصى عرض أو ارتفاع للصور  المرفوعة<BR> (pixels)', 'max_upl_width_height', 0), 
    array('السمـــاح برفع ملفات متعددة لها نفس الاسم', 'samename', 1), 
    //'User settings',
    'إعدادات الأعضــاء',
	array('السماح لمستخدم جديد بالتسجيل', 'allow_user_registration', 1),
/*
	array('تسجيل المستخدم يحتاج التأكيد بالبريد الالكتروني', 'reg_requires_valid_email', 1),
	array('السماح لمستخدمين اثنين ان يكون لهم نفس البريد الالكتروني', 'allow_duplicate_emails_addr', 1),
*/
    array('الأعضاء يمكنهم إنشاء ألبومات خاصة بهم', 'allow_private_albums', 1),
    array('إظهار رمز المستخدم بدلا من عبارة ألبوم خــاص', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',
    'حقــول مخصصة لوصف الصور - اتركها فارغة إذا لم تستخدمها',
    array('اسم الحقل الأول', 'user_field1_name', 0),
	array('اسم الحقل الثاني', 'user_field2_name', 0),
	array('اسم الحقل الثالث', 'user_field3_name', 0),
	array('اسم الحقل الرابع', 'user_field4_name', 0),
     // 'Pictures and thumbnails advanced settings',
    'الصور والصور المصغرة - خيارات متقدمة',
    array('إظهار أيقونة "ألبوم خـــاص" للزوار', 'show_private', 1),
    array('حروف محجوبة في أسماء الملفات', 'forbiden_fname_char', 0),
    array('إمتدادات مسموحة للصور المرفوعة', 'allowed_file_extensions', 0),
    array('طريقة تصغير الصور', 'thumb_method', 2),
	array('الدليل الى اداة ImageMagick / netpbm \'للتحويل\'  (مثال /usr/bin/X11/)', 'impath', 0),
	array('انواع الصور المسموح بها (يستعمل فقط لـ ImageMagick)', 'allowed_img_types',0),
	array('اوامر البرنامج ImageMagick', 'im_options', 0),
	array('اقرء بيانات EXIF في ملفات JPEG', 'read_exif_data', 1),
        array('Read IPTC data in JPEG files', 'read_iptc_data', 1), // new in cpg1.2.0nuke
	array('دليل الالبوم <b>*</b>', 'fullpath', 0),
	array('دليل صور المستخدمين <b>*</b>', 'userpics', 0),
	array('الحروف الاولى للصور الوسيطة(يجب ان تكون انجليزية <b>*</b>', 'normal_pfx', 0),
	array('الحروف الاولى لمختصرات الصور <b>*</b>', 'thumb_pfx', 0),
        array('Picinfo display filename', 'picinfo_display_filename', '1'), // new in cpg1.2.0nuke
        array('Picinfo display album name', 'picinfo_display_album_name', '1'), // new in cpg1.2.0nuke
        array('Picinfo display_file_size', 'picinfo_display_file_size', '1'), // new in cpg1.2.0nuke
        array('Picinfo display_dimensions', 'picinfo_display_dimensions', '1'), // new in cpg1.2.0nuke
        array('Picinfo display_count_displayed', 'picinfo_display_count_displayed', '1'), // new in cpg1.2.0nuke
        array('Picinfo display_URL', 'picinfo_display_URL', '1'), // new in cpg1.2.0nuke
        array('Picinfo display URL as bookmark link', 'picinfo_display_URL_bookmark', '1'), // new in cpg1.2.0nuke
        array('Picinfo display fav album link', 'picinfo_display_favorites', '1'), // new in cpg1.2.0nuke
//    'Cookies &amp; Charset settings',
	'اعدادات الكوكيز ونوع الحروف',
	array('اسم الكوكي المستعمل في البرنامج', 'cookie_name', 0),
	array('دليل الكوكيز المستعمل في البرنامج', 'cookie_path', 0),
//    'Miscellaneous settings',
	'اعدادات اخرى',
	array('تمكين وضع التتبع', 'debug_mode', 1),
        '<br /><div align="center">(*) Fields marked with * must not be changed if you already have pictures in your gallery</div><br />'
);
// end left side interpretation
