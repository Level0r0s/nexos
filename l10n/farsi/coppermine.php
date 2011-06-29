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
  $Source: /cvs/l10n/farsi/coppermine.php,v $
  $Revision: 9.10 $
  $Author: nanocaiordo $
  $Date: 2008/03/20 11:59:27 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Views');//new in 1.2.2nuke
define('PIC_VOTES', 'Votes');//new in 1.2.2nuke
define('PIC_COMMENTS', 'Comments');//new in 1.2.2nuke

// lang_translation_info
define('LANG_NAME_ENGLISH', 'persian');
define('LANG_NAME_NATIVE', 'farsi');
define('LANG_COUNTRY_CODE', 'fa');
define('TRANS_NAME', 'سينا کهنمويی');
define('TRANS_EMAIL', 'webmaster@nospam.nukephotogallery.com');
define('TRANS_WEBSITE', 'http://nukephotogallery.com/');
define('TRANS_DATE', '2005-06-22');
define('CHARSET', 'UTF-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'بله');
define('NO', 'خیر');
// some common strings
define('BACK', 'برگشت');
define('CONTINUE', 'ادامه');
define('INFO', 'اطلاعات');
//define('_ERROR', 'Error'); //already in main lang file
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%m/%d/%y @ %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y @ %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y @ %I:%M %p');

// lang_meta_album_names
define('RANDOM', 'عکس تصادفی');
define('LASTUP', 'تازه ترین اضافه شده ها');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'تازه ترین آلبوم های ایجاد شده');
define('LASTCOM', 'جدیدترین نظر ها');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'بیشترین بازدید');
define('TOPRATED', 'بیشترین امتیاز');
define('LASTHITS', 'جدیدترین بازدیدها');
define('SEARCH', 'نتیجه جستجو');
define('FAVPICS', 'تصویرهای مورد علاقه');

// lang_errors
define('ACCESS_DENIED', 'شما حق مشاهده این صفحه را ندارید.');
define('PERM_DENIED', 'شما حق انجام این عمل را ندارید.');
define('PARAM_MISSING', 'Script called without the required parameter(s).');
define('NON_EXIST_AP', 'آلبوم/تصویر انتخابی وجود ندارد !');
define('QUOTA_EXCEEDED', 'Disk quota exceeded<br /><br />You have a space quota of [quota]K, your pictures currently use [space]K, adding this picture would make you exceed your quota.');
define('GD_FILE_TYPE_ERR', 'When using the GD image library allowed image types are only JPEG and PNG.');
define('INVALID_IMAGE', 'The image you have uploaded is corrupted or can\'t be handled by the GD library');
define('RESIZE_FAILED', 'Unable to create thumbnail or reduced size image.');
define('NO_IMG_TO_DISPLAY', 'تصویری برای نمایش وجود ندارد');
define('NON_EXIST_CAT', 'شاخه انتخابی وجود ندارد');
define('ORPHAN_CAT', 'A category has a non-existing parent, runs the category manager to correct the problem.');
define('DIRECTORY_RO', 'Directory \'%s\' is not writable, pictures can\'t be deleted');
define('NON_EXIST_COMMENT', 'نظر انتخابی وجود ندارد.');
define('PIC_IN_INVALID_ALBUM', 'Picture is in a non existant album (%s)!?');
define('BANNED', 'شما از دیدن سایت منع شده اید.');
define('NOT_WITH_UDB', 'This function is disabled in Coppermine because it is integrated with forum software. Either what you are trying to do is not supported in this configuration, or the function should be handled by the forum software.');
define('MEMBERS_ONLY', 'این عمل بای کاربران عضو فعال است, لطفا وارد شوید.');
define('MUSTBE_GOD', 'این عمل فقط برای مدیران سایت فعال است. شما باید به قسمت مدیریت وارد شوید تا بتوانید این عمل را انجام دهید ');
define('NO_IMG_TO_APPROVE', 'No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE', 'برو به فهرست آلبوم ها');
define('ALB_LIST_LNK', 'لیست آلبوم ها');
define('MY_GAL_TITLE', 'برو به گالری شخصی من');
define('MY_GAL_LNK', 'گالری من');
define('MY_PROF_LNK', 'اطلاعات من');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'رفتن به حالت مدیریت');
define('ADM_MODE_LNK', 'حالت مدیریت');
define('USR_MODE_TITLE', 'رفتن به حالت کاربری');
define('USR_MODE_LNK', 'حالت کاربری');
define('UPLOAD_PIC_TITLE', 'بارگذاری تصویر در یک آلبوم');
define('UPLOAD_PIC_LNK', 'بارگذاری تصویر');
define('REGISTER_TITLE', 'ساخت حساب کاربری');
define('REGISTER_LNK', 'ثبت نام');
define('LOGIN_LNK', 'ورود');
define('LOGOUT_LNK', 'خروج');
define('LASTUP_LNK', 'اخرین به روز رسانی');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'آخرین نظرها');
define('TOPN_TITLE', 'تصاوير داراي بيشترين بازديد');
define('TOPN_LNK', 'بیشترین نمایش');
define('TOPRATED_TITLE', 'تصویرهای دارای بیشترین امتیاز');
define('TOPRATED_LNK', 'بیشترین امتیاز');
define('SEARCH_TITLE', 'جستجو در گالری تصاویر');
define('SEARCH_LNK', 'جستجو');
define('FAV_TITLE', 'علاقه مندی های من');
define('FAV_LNK', 'علاقه مندی های من');
define('HELP_TITLE', 'HELP');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'اجازه بارگذاری');
define('CONFIG_LNK', 'تنظیم');
define('ALBUMS_LNK', 'آلبوم ها');
define('CATEGORIES_LNK', 'شاخه ها');
define('USERS_LNK', 'کاربران');
define('GROUPS_LNK', 'گروه ها');
define('COMMENTS_LNK', 'مشاهده نظر ها');
define('SEARCHNEW_LNK', 'تصاویر اظافه شده');
define('UTIL_LNK', 'باز اندازه سازی تصویر');
define('BAN_LNK', 'کاربران ممنوع');

// lang_user_admin_menu
define('ALBMGR_LNK', 'ساختن / مرتب کردن آلبوم');
define('MODIFYALB_LNK', 'اصلاح آلبو م من');
//define('MY_PROF_LNK', 'اطلاعات من');

// lang_cat_list
define('CATEGORY', 'شاخه');
define('ALBUMS', 'آلبوم ها');
define('PICTURES', 'تصویر ها');

// lang_album_list
define('ALBUM_ON_PAGE', '%d آلبوم در %d صفحه');
// lang_thumb_view
define('DATE', 'تاریخ');
define('NAME', 'نام فایل');
define('TITLE', 'عنوان');
define('SORT_DA', 'مرتب سازی بر اساس تاریخ صعودی');
define('SORT_DD', 'مرتب سازی بر اساس تاریخ نزولی');
define('SORT_NA', 'مرتب سازی بر اساس نام صعودی');
define('SORT_ND', 'مرتب سازی بر اساس نام نزولی');
define('SORT_TA', 'مرتب سازی بر اساس عنوان صعودی');
define('SORT_TD', 'مرتب سازی بر اساس عنوان نزولی');
define('PIC_ON_PAGE', '%d تصویر ها در %d صفحه');
define('USER_ON_PAGE', '%d کاربران در %d صفحه');
define('SORT_RA', 'مرتب سازی بر اساس امتیاز صعودی');
define('SORT_RD', 'مرتب سازی بر اساس امتیاز نزولی');
define('RATING', 'امتیاز');
define('SORT_TITLE', 'مرتب سازی تصاویر بر اساس:');

// lang_img_nav_bar
define('THUMB_TITLE', 'برگشت به صفحه بزرگنمایی');
define('PIC_INFO_TITLE', 'نمایش/مخفی کردن اطلاعات تصاویر');
define('SLIDESHOW_TITLE', 'نمایش به صورت اسلاید');
define('SLIDESHOW_DISABLED', 'کارت تبریک غیر فعال است');
define('SLIDESHOW_DISABLED_MSG', 'این عمل برای کاربران عضو فعال است, لطفا وارد شوید.');
define('ECARD_TITLE', 'اسال این تصویر به صورت کارت تبریک');
define('ECARD_DISABLED', 'کارت تبریک غیر فعال است');
define('ECARD_DISABLED_MSG', 'شما حق ارسال کارت تبریک را ندارید');
define('PREV_TITLE', 'مشاهده تصویر قبلی');
define('NEXT_TITLE', 'مشاهده تصویر بعدی');
define('PIC_POS', 'PICTURE %s/%s');
define('NO_MORE_IMAGES', 'عکس بیشتری در این گالری موجود نیست');
define('NO_LESS_IMAGES', 'این اولین عکس در این گالری می باشد');

// lang_rate_pic
define('RATE_THIS_PIC', 'امتیاز دهی به این تصویر ');
define('NO_VOTES', '(امتیازی وجود ندارد)');
define('RATING', '(امتیاز کنونی : %s / 5 با %s رای)');
define('RUBBISH', 'بی ارزش');
define('POOR', 'ضعیف');
define('FAIR', 'متوسط');
define('GOOD', 'خوب');
define('EXCELLENT', 'عالی');
define('GREAT', 'بی نظیر');

// lang_cpg_die
//define('INFORMATION', 'اطلاعات');
//define('ERROR', 'خطا');
define('CRITICAL_ERROR', 'خطای بحرانی');
define('FILE', 'فایل: ');
define('LINE', 'خط: ');

// lang_display_thumbnails
define('FILENAME', 'نام فایل : ');
define('FILESIZE', 'حجم فایل : ');
define('DIMENSIONS', 'ابعاد : ');
define('DATE_ADDED', 'تاریخ افزودن : ');

// lang_get_pic_data
define('N_COMMENTS', '%s نظرها');
define('N_VIEWS', '%s نمایش');
define('N_VOTES', '(%s رای)');


// lang_albmgr_php
define('ALB_NEED_NAME', 'آلبوم نیاز به یک نام دارد !');
define('CONFIRM_MODIFS', 'Are you sure you want to make these modifications ?');
define('NO_CHANGE', 'شما تغییری ایجاد نکرده اید !');
define('NEW_ALBUM', 'آلبوم جدید');
define('CONFIRM_DELETE1', 'ایا شما از پاک کردن این آلبوم مطمئن هستید ?');
define('CONFIRM_DELETE2', '\\nAll pictures and comments it contains will be lost !');
define('SELECT_FIRST', 'ابتدا آلوم را انتخاب کنیدt');
define('ALB_MRG', 'مدیریت آلبوم');
define('MY_GALLERY', '* گالری من *');
define('NO_CATEGORY', '* بدون شاخه *');
define('DELETE', 'پاک کردن');
define('NEW', 'جدید');
define('APPLY_MODIFS', 'به کار بردن ویرایش');
define('SELECT_CATEGORY', 'انتخاب شاخه');

// lang_catmgr_php
define('MISS_PARAM', 'Parameters required for \'%s\'operation not supplied !');
define('UNKNOWN_CAT', 'شاخه انتخابی موجود نیست');
define('USERGAL_CAT_RO', 'شاخه گالری کاربری قابل حذف نیست !');
define('MANAGE_CAT', 'مدیریت شاخه ها');
define('CONFIRM_DELETE_CAT', 'آیا شما از پاک کردن این شاخه مطمئن هستید');
//define('CATEGORY', 'شاخه');
define('OPERATIONS', 'عملیات');
define('MOVE_INTO', 'انتقال به');
define('UPDATE_CREATE', 'به روز رسانی/ایجاد شاخه');
define('PARENT_CAT', 'شاخه اصلی');
define('CAT_TITLE', 'عنوان شاخه');
define('CAT_DESC', 'توضیح شاخه');

// lang_config_php
define('CONFIG_TITLE', 'تنظیمات');
define('RESTORE_CFG', 'باز سازی به صورت پیش فرض');
define('SAVE_CFG', 'ذخیره تنظیمات تازه');
define('NOTES', 'نکته ها');
//define('INFO', 'اطلاعات');
define('UPD_SUCCESS', 'تنظیمات گالری به روز شد');
define('RESTORE_SUCCESS', 'تنظیمات گالری بازسازی شد');
define('NAME_A', 'نام صعودی');
define('NAME_D', 'نام نزولی');
define('TITLE_A', 'عنوان صعودی');
define('TITLE_D', 'عنوان نزولی');
define('DATE_A', 'تاریخ صعودی');
define('DATE_D', 'تاریخ نزولی');
define('RATING_A', 'امتیاز صعودی');
define('RATING_D', 'امتیاز نزولی');
define('TH_ANY', 'بیشترین اندازه');
define('TH_HT', 'طول');
define('TH_WD', 'عرض');


// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'شما باید نام و نظر خود ار وارد کنید');
define('COM_ADDED', 'نظر اظافه شد');
define('ALB_NEED_TITLE', 'برای آلبوم یک عنوان انتخاب کنید !');
define('NO_UDP_NEEDED', 'نیازی به روز رسانی نیست.');
define('ALB_UPDATED', 'آلبوم به روز شد');
define('UNKNOWN_ALBUM', 'Selected album does not exist or you don\'t have permission to upload in this album');
define('NO_PIC_UPLOADED', 'تصویری ارسالی نشده !<br /><br />اگر شما مطمئن هستید که تصویری رابرای ارسال انتخاب کرده اید, سرور را برای ارسال تصویر چک کنید...');
define('ERR_MKDIR', 'Failed to create directory %s !');
define('DEST_DIR_RO', 'Destination directory %s is not writable by the script !');
define('ERR_MOVE', 'Impossible to move %s from %s to %s !');
define('ERR_FSIZE_TOO_LARGE', 'The size of picture you have uploaded is too large (maximum allowed is %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'The size of the file you have uploaded is too large (maximum allowed is %s KB) !');
define('ERR_INVALID_IMG', 'The file you have uploaded is not a valid image !');
define('ALLOWED_IMG_TYPES', 'You can only upload %s images.');
define('ERR_INSERT_PIC', 'The picture \'%s\' can\'t be inserted in the album ');
define('UPLOAD_SUCCESS', 'تصویر شما با موفقیت ارسال شد<br /><br />پس از تائید مدیر برای نمایش در آلبوم قرار خواهد گرفت.');
//define('INFO', 'اطلاعات');
define('ERR_COMMENT_EMPTY', 'شما نظر خود را وارد نکرده اید !');
define('ERR_INVALID_FEXT', 'Only files with the following extensions are accepted : <br /><br />%s.');
define('NO_FLOOD', 'Sorry but you are already the author of the last comment posted for this picture<br /><br />Edit the comment you have posted if you want to modify it');
define('REDIRECT_MSG', 'You are being redirected.<br /><br /><br />Click \'CONTINUE\' if the page does not refresh automatically');
define('UPL_SUCCESS', 'عكس شما با موفقيت اضافه شد');

// lang_delete_php
define('CAPTION', 'عنوان');
define('FS_PIC', 'تصویر در اندازه واقعی');
define('DEL_SUCCESS', 'موفقیت در حذف');
define('NS_PIC', 'تصویر در اندازه معمولی');
define('ERR_DEL', 'نمی تواند حذف شود');
define('THUMB_PIC', 'پیش نمایش');
//define('COMMENT', 'نظر');
define('IM_IN_ALB', 'تصویر در آلبوم');
define('ALB_DEL_SUCCESS', 'Album \'%s\' deleted');
define('ALB_MGR', 'مدیریت آلبوم');
define('ERR_INVALID_DATA', 'Invalid data received in \'%s\'');
define('CREATE_ALB', 'ساخت آلبوم \'%s\'');
define('UPDATE_ALB', 'به روز کردن آلبوم \'%s\' with title \'%s\' and index \'%s\'');
define('DEL_PIC', 'حذف تصویر');
define('DEL_ALB', 'حذف آلبوم');
define('DEL_USER', 'حذف کاربر');
//define('ERR_UNKNOWN_USER', 'کاربر انتخابی وجود ندارد !');
define('COMMENT_DELETED', 'نظر با موفقیت پاک شد');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'آیا شما از حذف این تصویر مطمئن هستید ? \\nComments will also be deleted.');
define('DEL_PIC', 'حذف این تصویر');
define('SIZE', '%s x %s pixels');
define('VIEWS', '%s times');
define('SLIDESHOW', 'نمایش به صورت اسلاید');
define('STOP_SLIDESHOW', 'توقف نمایش به صورت اسلاید');
define('VIEW_FS', 'برای دیدن عکس در اندازه واقعی کلیک کنید');
define('EDIT_PIC', 'ویرایش اطلاات تصویر');

// lang_picinfo
define('PIC_INF_TITLE', 'اطلاعات تصویر');
define('PIC_INF_FILENAME', 'نام فایل');
define('ALBUM NAME', 'نام آلبوم');
define('PIC_INFO_RATING', 'امتیاز (%s رای)');
define('KEYWORDS', 'کلمات کلیدی');
define('PIC_INF_FILE SIZE', 'اندازه فایل');
define('PIC_INF_DIMENSIONS', 'ابعاد');
define('DISPLAYED', 'Displayed');
define('CAMERA', 'دوربین');
define('DATE_TAKEN', 'Date taken');
define('APERTURE', 'روزنه');
define('EXPOSURE_TIME', 'مدت باز ماندن دیافراگم');
define('FOCAL LENGTH', 'فاصله کانونی');
define('COMMENT', 'نظر');
define('ADDFAV', 'اظافه کردن به آلبوم علاقه مندی ها');
define('ADDFAVPHRASE', 'علاقه مندی ها');
define('REMFAV', 'پاک کردن از آلبوم علاقه مندی ها');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');
define('REMOVEFAV', 'Removed from Favorites Album');
define('ADDEDTOFAV', 'Added to Favorites Album');

// lang_display_comments
define('OK', 'تائید');
define('COM_EDIT_TITLE', 'ویرایش این نظر');
define('CONFIRM_DELETE_COM', 'آیا شما از حذف این نظر مطمئن هستید ?');
define('ADD_YOUR_COMMENT', 'اظافه کردن نظر');
define('COM_NAME', 'نام');
//define('COMMENT', 'نظر');
define('YOUR_NAME', 'ناشناس');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'براي بستن پنجره روي تصوير كليك كنيد');

// lang_ecard_php
define('E_TITLE', 'ارسال کارپستال');
define('INVALID_EMAIL', '<b>خطا</b> : آدرس ایمیل موجود نیست !');
define('E_ECARD_TITLE', 'کارت پستال از طرف %s برای');
define('VIEW_ECARD', 'اگر کارت پستال به درستی مشاهده نمی شود, بر روی این لینک کلیک کنید');
define('VIEW_MORE_PICS', 'برای دیدن تصاویر بیشتر برروی این لینک کلیک کنید !');
define('SEND_SUCCESS', 'کارت پستال ارسال شد');
define('SEND_FAILED', 'متاسفم سرور قادر به ارسال کارت پستال نمی باشد...');
define('FROM', 'از طرف');
define('_YOUR_NAME', 'نام شما');
define('YOUR_EMAIL', 'آدرس ایمیل');
define('TO', 'به');
define('RCPT_NAME', 'نام گیرنده');
define('RCPT_EMAIL', 'ایمیل آدرس گیرنده');
define('GREETINGS', 'تبریکات');
define('MESSAGE', 'پیغام');
define('ECARD_LINK_CORRUPT', 'Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser'); //NEW

// lang_editpics_php
define('PIC_INFO', 'Picture&nbsp;info');
define('ALBUM', 'آلبوم');
define('TITLE', 'عنوان');
define('DESC', 'توضیح');
//define('KEYWORDS', 'کلمات کلیدی');
define('PIC_INFO_STR', '%sx%s - %sKB - %s views - %s votes');
define('APPROVE', 'Approve picture');
define('POSTPONE_APP', 'Postpone approval');
//define('DEL_PIC', 'Delete picture');
define('READ_EXIF', 'Read EXIF info again');
define('RESET_VIEW_COUNT', 'Reset view counter');
define('RESET_VOTES', 'Reset votes');
define('DEL_COMM', 'حذف نظرات');
define('UPL_APPROVAL', 'Upload approval');
define('EDIT_PICS', 'ويرايش تصوير');
define('SEE_NEXT', 'ديدن تصوير بعدي');
define('SEE_PREV', 'ديدن تصوير قبلي');
define('N_PIC', '%s تصوير');
define('N_OF_PIC_TO_DISP', 'تعداد تصوير ها براي نمايش');
define('APPLY', 'Apply modifications');

// lang_groupmgr_php
define('GROUP_NAME', 'نام گروه');
define('DISK_QUOTA', 'Disk quota');
define('CAN_RATE', 'اجازه ارزيابي تصوير');
define('CAN_SEND_ECARDS', 'اجازه ارسال كارت پستال الكترونيك');
define('CAN_POST_COM', 'اجازه ارسال نظر');
define('CAN_UPLOAD', 'اجازه ارسال عكس');
define('CAN_HAVE_GALLERY', 'اجازه براي داشتن گالري شخصي');
//define('APPLY', 'Apply modifications');
define('CREATE_NEW_GROUP', 'ايجاد گروه جديد');
define('DEL_GROUPS', 'Delete selected group(s)');
define('CONFIRM_DEL', 'Warning, when you delete a group, users that belong to this group will be transfered to the \'Registered\' group !\\n\\nDo you want to proceed ?');
define('GROUP_TITLE', 'Manage user groups');
define('APPROVAL_1', 'Pub. Upl. approval (1)');
define('APPROVAL_2', 'Priv. Upl. approval (2)');
define('NOTE1', '<b>(1)</b> Uploads in a public album need admin approval');
define('NOTE2', '<b>(2)</b> Uploads in an album that belong to the user need admin approval');
//define('NOTES', 'Notes');

// lang_index_php
define('WELCOME', 'خوش آمديد!');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'Are you sure you want to DELETE this album ? <br />All pictures and comments will also be deleted.');
//define('DELETE', 'DELETE');
define('MODIFY', 'تنظيمات');
//define('EDIT_PICS', 'EDIT PICS');

// lang_list_categories
define('HOME', _HOME);
define('STAT1', '<b>[pictures]</b> pictures in <b>[albums]</b> albums and <b>[cat]</b> categories with <b>[comments]</b> comments viewed <b>[views]</b> times');
define('STAT2', '<b>[pictures]</b> pictures in <b>[albums]</b> albums viewed <b>[views]</b> times');
define('XX_S_GALLERY', '%s\'s Gallery');
define('STAT3', '<b>[pictures]</b> pictures in <b>[albums]</b> albums with <b>[comments]</b> comments viewed <b>[views]</b> times');

// lang_list_users
define('USER_LIST', 'ليست كاربران');
define('NO_USER_GAL', 'There are no user galleries');
define('N_ALBUMS', '%s البوم(ها)');
define('N_PICS', '%s تصوير(ها)');

// lang_list_albums
define('N_PICTURES', '%s تصويرها');
define('LAST_ADDED', ', last one added on %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Update album %s');
define('GENERAL_SETTINGS', 'General settings');
define('ALB_TITLE', 'عنوان آلبوم');
define('ALB_CAT', 'Album category');
define('ALB_DESC', 'Album description');
define('ALB_THUMB', 'Album thumbnail');
define('ALB_PERM', 'Permissions for this album');
define('CAN_VIEW', 'چه كساني قادر به ديدن آلبوم باشند');
define('MOD_CAN_UPLOAD', 'بينندگان اجازه ارسال عكس دارند');
define('CAN_POST_COMMENTS', 'بينندگان اجازه ارسال نظر دارند');
define('MOD_CAN_RATE', 'بينندگان اجازه ارزيابي تصوير را دارند');
define('USER_GAL', 'گالري كاربران');
define('NO_CAT', '* No category *');
define('ALB_EMPTY', 'آلبوم خالي است');
define('LAST_UPLOADED', 'آخرين ارسال ها');
define('PUBLIC_ALB', 'Everybody (public album)');
define('ME_ONLY', 'فقط من');
define('OWNER_ONLY', 'Album owner (%s) only');
define('GROUPP_ONLY', 'اعضاي گروه \'%s\'');
define('ERR_NO_ALB_TO_MODIFY', 'There is no album you may modify. Create an allbum first!');
define('UPDATE', 'به روز كردن آلبوم');

// lang_rate_pic_php
define('ALREADY_RATED', 'متاسفم شما قبلا اين تصوير را ارزيابي كرده ايد');
define('RATE_OK', 'راي شما پذيرفته شد');

// lang_register_php
define('USERNAME', 'نام كاربري');
define('GROUP', 'گروه');
define('DISK_USAGE', 'Disk usage');
define('X_S_PROFILE', '%s\'s profile');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Review comments');
define('NO_COMMENT', 'There are no comments to review');
define('N_COMM_DEL', '%s comment(s) deleted');
define('N_COMM_DISP', 'تعداد نظرها براي نمايش');
define('R_SEE_PREV', 'ديدن قبلي');
define('R_SEE_NEXT', 'ديدن بعدي');
define('R_DEL_COMM', 'حذف نظر انتخاب شده');

// lang_search_php
define('S_SEARCH', 'Search the image collection');

// lang_search_new_php
define('PAGE_TITLE', 'جستجوي تصوير جديد');
define('SELECT_DIR', 'Select directory');
define('SELECT_DIR_MSG', 'This function allows you to add a batch of picture that your have uploaded on your server by FTP.<br /><br />Select the directory where you have uploaded your pictures');
define('NO_PIC_TO_ADD', 'تصويري براي افزودن وجود ندارد');
define('NEED_ONE_ALBUM', 'You need at least one album to use this function');
define('WARNING', 'هشدار');
define('CHANGE_PERM', 'the script can\'t write in this directory, you need to change its mode to 755 or 777 before trying to add the pictures !');
define('TARGET_ALBUM', '<b>Put pictures of &quot;</b>%s<b>&quot; into </b>%s');
define('FOLDER', 'Folder');
define('IMAGE', 'Image');
//define('ALBUM', 'Album');
define('RESULT', 'نتايج');
define('DIR_RO', 'بدون قابليت نوشتن ');
define('DIR_CANT_READ', 'بدون قابليت خواندن ');
define('INSERT', 'اضافه كردن تصوير جديد به گالري');
define('LIST_NEW_PIC', 'ليست تصاوير جديد');
define('INSERT_SELECTED', 'Insert selected pictures');
define('NO_PIC_FOUND', 'تصوير جديدي پيدا نشد');
define('BE_PATIENT', 'Please be patient, the script needs time to add the pictures');
define('SN_NOTES', '<ul><li><b>OK</b> : means that the picture was succesfully added<li><b>DP</b> : means that the picture is a duplicate and is already in the database<li><b>PB</b> : means that the picture could not be added, check your configuration and the permission of directories where the pictures are located<li>If the OK, DP, PB \'signs\' does not appear click on the broken picture to see any error message produced by PHP<li>If your browser timeout, hit the reload button</ul>');
define('SELECT_ALBUM', 'انتخاب آلبوم');
define('NO_ALBUM', 'No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('UP_TITLE', 'ارسال تصوير');
define('MAX_FSIZE', 'حداكثر سايز فايل بايد %s KB باشد');
//define('ALBUM', 'Album');
define('PICTURE', 'تصوير');
define('PIC_TITLE', 'عنوان تصوير');
define('DESCRIPTION', 'Picture description');
define('UP_KEYWORDS', 'Keywords (separate with spaces)');
define('ERR_NO_ALB_UPLOADABLES', 'Sorry there is no album where you are allowed to upload pictures. Please create an album first!');

// lang_usermgr_php
define('U_TITLE', 'مديريت كاربران');
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
define('SORT_BY', 'مرتب سازي كاربران بر اساس');
define('ERR_NO_USERS', 'User table is empty !');
define('ERR_EDIT_SELF', 'You can\'t edit your own profile, use the \'My profile\' link for that');
define('EDIT', 'ويرايش');
//define('DELETE', 'DELETE');
define('U_NAME', 'نام كاربري');
//define('GROUP', 'Group');
define('INACTIVE', 'غيرفعال');
//define('OPERATIONS', 'Operations');
define('PICTURES', 'تصاوير');
define('DISK_SPACE', 'Space used / Quota');
define('REGISTERED_ON', 'عضو شده در');
define('U_USER_ON_P_PAGES', '%d users on %d page(s)');
define('USER_CONFIRM_DEL', 'Are you sure you want to DELETE this user ? <br />All his pictures and albums will also be deleted.');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'كاربر انتخابي در پايگاه داده وجود ندارد!');
define('MODIFY_USER', 'Modify user');
//define('NOTES', 'Notes');
define('NOTE_LIST', '<li>If you don\'t want to change the current password, leave the \"password\" field blank');
define('PASSWORD', 'كلمه رمز');
define('USER_ACTIVE_CP', 'User is active');
define('USER_GROUP_CP', 'گروه كاربري');
define('USER_EMAIL', 'User email');
define('USER_WEB_SITE', 'وب سايت كاربر');
define('CREATE_NEW_USER', 'ايجاد كاربر جديد');
define('USER_FROM', 'محل زندگي كاربر');
define('USER_INTERESTS', 'User interests');
define('USER_OCC', 'شغل كاربر');

// lang_util_php
define('UTIL_TITLE', 'تغيير سايز تصوير');
define('WHAT_IT_DOES', 'What it does');
define('WHAT_UPDATE_TITLES', 'Updates titles from filename');
define('WHAT_DELETE_TITLE', 'حذف عنوان');
define('WHAT_REBUILD', 'Rebuilds thumbnails and resized photos');
define('WHAT_DELETE_ORIGINALS', 'Deletes original sized photos replacing them with the resized version');
define('U_FILE', 'File');
define('TITLE_SET_TO', 'title set to');
define('SUBMIT_FORM', 'ارسال');
define('UPDATED_SUCCESFULLY', 'با موفقيت به روز شد');
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
define('INSTRUCTION_ALBUM', 'انتخاب آلبوم');
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
define('VIEWING', 'نمايش عکس');
define('USR',' گالری عکس');
define('PHOTOGALLERY', 'گالری عکس');
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
// Day of weeks and months
$lang_day_of_week = array('یکشنبه','دوشنبه','سه شنبه','چهارشنبه','پنج شنبه','جمعه','شنبه',);
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
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
    'General settings',
    array('Gallery name', 'gallery_name', 0),
    array('Gallery description', 'gallery_description', 0),
    array('Gallery administrator email', 'gallery_admin_email', 0),
    array('Address to nuke folder ie http://example.com/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
    array('Theme', 'theme', 6),
    array('Page Specific Titles instead of >Coppermine', 'nice_titles', 1),
//'Album list view',
    'Album list view',
    array('Width of the main table (pixels or %)', 'main_table_width', 0),
    array('Number of levels of sub-categories to display', 'subcat_level', 0),
    array('Number of albums to display', 'albums_per_page', 0),
    array('Number of columns for the album list', 'album_list_cols', 0),
    array('Size of thumbnails in pixels', 'alb_list_thumb_size', 0),
    array('The content of the main page', 'main_page_layout', 0),
    array('Show first level album thumbnails in categories', 'first_level', 1), 
//'Thumbnail view',
    'Thumbnail view',
    array('Number of columns on thumbnail page', 'thumbcols', 0),
    array('Number of rows on thumbnail page', 'thumbrows', 0),
    array('Maximum number of tabs to display', 'max_tabs', 0),
    array('Display picture caption (in addition to title) below the thumbnail', 'caption_in_thumbview', 1),
    array('Display number of comments below the thumbnail', 'display_comment_count', 1),
    array('Default sort order for pictures', 'default_sort_order', 3),
    array('Minimum number of votes for a picture to appear in the \'top-rated\' list', 'min_votes_for_rating', 0),
    array('Alts and title tags of thumbnail show title and keyword instead of picinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
 //'Display Image &amp; Comment settings',
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
// 'Pictures and thumbnails settings',
    'Pictures and thumbnails settings',
    array('Quality for JPEG files', 'jpeg_qual', 0),
    array('Place watermark on image', 'watermark', 1),
    array('Max dimension of a thumbnail <b>*</b>', 'thumb_width', 0),
    array('Use dimension ( width or height or Max aspect for thumbnail )<b>*</b>', 'thumb_use', 7),
    array('Create intermediate pictures', 'make_intermediate', 1),
    array('Max width or height of an intermediate picture <b>*</b>', 'picture_width', 0),
    array('Max size for uploaded pictures (KB)', 'max_upl_size', 0),
    array('Max width or height for uploaded pictures (pixels)', 'max_upl_width_height', 0), 
    array('Allow multiple Files to be upload with same file name', 'samename', 1), 
//'User settings',
    'User settings',
    array('Allow new user registrations', 'allow_user_registration', 1),
/*
    array('User registration requires email verification', 'reg_requires_valid_email', 1),
    array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),
*/
    array('Users can can have private albums', 'allow_private_albums', 1),
    array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',
    'Custom fields for image description (leave blank if unused)',
    array('Field 1 name', 'user_field1_name', 0),
    array('Field 2 name', 'user_field2_name', 0),
    array('Field 3 name', 'user_field3_name', 0),
    array('Field 4 name', 'user_field4_name', 0), 
	//'Pictures and thumbnails advanced settings',
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
    array('Picinfo display filename', 'picinfo_display_filename', 1), 
    array('Picinfo display album name', 'picinfo_display_album_name', 1), 
    array('Picinfo display_file_size', 'picinfo_display_file_size', 1), 
    array('Picinfo display_dimensions', 'picinfo_display_dimensions', 1), 
    array('Picinfo display_count_displayed', 'picinfo_display_count_displayed', 1), 
    array('Picinfo display_URL', 'picinfo_display_URL', 1), 
    array('Picinfo display URL as bookmark link', 'picinfo_display_URL_bookmark', 1), 
    array('Picinfo display fav album link', 'picinfo_display_favorites', 1), 
//    'Cookies &amp; Charset settings',
    'Cookies &amp; Charset settings',
    array('Name of the cookie used by the script', 'cookie_name', 0),
    array('Path of the cookie used by the script', 'cookie_path', 0),
//    'Miscellaneous settings',
    'Miscellaneous settings',
    array('Enable debug mode', 'debug_mode', 1),
    '<br /><div align="center">(*) Fields marked with * must not be changed if you already have pictures in your gallery</div><br />'
    );
// end left side interpretation
