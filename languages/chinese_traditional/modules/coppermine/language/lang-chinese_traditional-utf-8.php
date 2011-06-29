<?php 
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.2.3 nuke                                       //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003 Gregory DEMAR <gdemar@wanadoo.fr>                 //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// New Port by CPG-nuke Dev Team                                             //
// http://coppermine.findhere.org/                                           //
// Based on coppermine 1.1d by Surf  http://www.surf4all.net/                //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //
// error_reporting(E_ALL);

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Chinese');
define('LANG_NAME_NATIVE', 'Chinese');
define('LANG_COUNTRY_CODE', 'zh');
define('TRANS_NAME', 'Akamu Akamai');
define('TRANS_EMAIL', 'webmaster@nospam.nukephotogallery.com');
define('TRANS_WEBSITE', 'http://nukephotogallery.com/');
define('TRANS_DATE', '2003-04-20');
define('CHARSET', 'UTF-8');
define('TEXT_DIR', 'ltr');
define('YES', '是');
define('NO', '否');
define('BACK', '返回');
define('CONTINUE', '繼續');
define('INFO', '資訊');
define('ERROR', '錯誤');
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%m/%d/%y @ %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y @ %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y @ %I:%M %p');
//define('BYTE_UNITS', 'a:3:{i:0;s:5:"Bytes";i:1;s:2:"KB";i:2;s:2:"MB";}');
// Day of week
//$lang_day_of_week = array('Sun','Mon','Tue','Wed','Thu','Fri','Sat',);
// Day of the month
//$lang_month = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec',);
// For the word censor
//$lang_bad_words = array('*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*',);


// lang_meta_album_names
define('RANDOM', '隨機圖片');
define('LASTUP', '最近新增圖片');
define('LASTALB', '最近更新相簿');
define('LASTCOM', '最近評論');
define('TOPN', '點閱數最高');
define('TOPRATED', '評分最高');
define('LASTHITS', '最近點閱圖片');
define('SEARCH', '搜尋結果');
define('FAVPICS', '我的最愛');

// lang_errors
define('ACCESS_DENIED', '你沒有被授權可存取此頁.');
define('PERM_DENIED', '你沒有被授權可執行此操作.');
define('PARAM_MISSING', '被呼叫的程式沒有必要的參數.');
define('NON_EXIST_AP', '被選的相簿/圖片不存在!');
define('QUOTA_EXCEEDED', '磁碟空間配額已經超過<br /><br />你有 [quota]K 空間配額, 你所有圖片目前使用空間配額累計 [space]K, 增加此圖片會讓你超過你的空間配額.');
define('GD_FILE_TYPE_ERR', '當使用 GD 圖片函式庫允許圖片類型只有 JPEG 與 PNG.');
define('INVALID_IMAGE', '你上傳的圖片有錯誤或者不能被 GD 函式庫處理');
define('RESIZE_FAILED', '無法建立縮圖或者減少圖片檔案大小.');
define('NO_IMG_TO_DISPLAY', '沒有圖片可以顯示');
define('NON_EXIST_CAT', '被選的分類不存在');
define('ORPHAN_CAT', '有一分類沒有上層目錄, 請執行分類管理員來修正這個問題.');
define('DIRECTORY_RO', '資料夾 \'%s\' 不可寫, 圖片不能被刪除');
define('NON_EXIST_COMMENT', '所選的評論不存在.');
define('PIC_IN_INVALID_ALBUM', '圖片在不存在的相簿裡 (%s)!?');
define('BANNED', '你目前被禁止使用這個網站.');
define('NOT_WITH_UDB', '在 Coppermine 這個功能關閉因為它被整合到論壇程式中. 就算你要試著作, 不是在這個設定下不支援, 就是功能應該被論壇程式處理.');
define('MEMBERS_ONLY', '只有會員可用此功能, 請您加入會員.');
define('MUSTBE_GOD', '此功能只有給網站站長. 你必需以站長登入來存取這個功能');

// lang_main_menu
define('ALB_LIST_TITLE', '至相簿列表');
define('ALB_LIST_LNK', '相簿清單');
define('MY_GAL_TITLE', '至我個人的藝廊');
define('MY_GAL_LNK', '我的藝廊');
define('MY_PROF_LNK', '我的基本資料');
define('MY_PROF_TITLE','檢查你的磁碟空間配額與群組');
define('ADM_MODE_TITLE', '切換到站長管理模式');
define('ADM_MODE_LNK', '站長管理模式');
define('USR_MODE_TITLE', '切換到使用者模式');
define('USR_MODE_LNK', '使用者模式');
define('UPLOAD_PIC_TITLE', '上傳照片到相簿');
define('UPLOAD_PIC_LNK', '上傳照片');
define('REGISTER_TITLE', '建立一個帳號');
define('REGISTER_LNK', '註冊');
define('LOGIN_LNK', '登入');
define('LOGOUT_LNK', '登出');
define('LASTUP_LNK', '最近上傳圖片');
define('LASTUP_TITLE', '最近上傳圖片');
define('LASTCOM_TITLE',  '最近留言的圖片');
define('LASTCOM_LNK',  '最近評論');
define('TOPN_TITLE', '點閱最多圖片');
define('TOPN_LNK', '觀看最多的圖片');
define('TOPRATED_TITLE', '評分最好的圖片');
define('TOPRATED_LNK', '評分最好');
define('SEARCH_TITLE', '搜尋圖片');
define('SEARCH_LNK', '搜尋');
define('FAV_TITLE', '我的最愛');
define('FAV_LNK', '我的最愛');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', '等待加入圖片');
define('CONFIG_LNK', '設定');
define('ALBUMS_LNK', '相簿');
define('CATEGORIES_LNK', '類別');
define('USERS_LNK', '會員');
define('GROUPS_LNK', '群組');
define('COMMENTS_LNK', '觀看評論');
define('SEARCHNEW_LNK', '大量增加圖片');
define('UTIL_LNK', '重定圖片大小');
define('BAN_LNK', '查禁會員');

// lang_user_admin_menu
define('ALBMGR_LNK', '建立 / 排序我的相簿');
define('MODIFYALB_LNK', '修改我的相簿');
define('MY_PROF_LNK', '我的基本資料');

// lang_cat_list
define('CATEGORY', '分類');
define('ALBUMS', '相簿');
define('PICTURES', '圖片');

// lang_album_list
define('ALBUM_ON_PAGE', '%d 相簿於 %d 頁');

// lang_thumb_view
define('DATE', '日期');
define('NAME', '檔案名稱');
define('TITLE', '標題');
define('SORT_DA', '以日期正向排序');
define('SORT_DD', '以日期反向排序');
define('SORT_NA', '以名稱正向排序');
define('SORT_ND', '以名稱反向排序');
define('SORT_TA', '以標題正向排序');
define('SORT_TD', '以標題反向排序');
define('PIC_ON_PAGE', '%d 圖片於 %d 頁');
define('USER_ON_PAGE', '%d 使用者於 %d 頁');
define('SORT_RA', '以評分正向排序');
define('SORT_RD', '以評分反向排序');
define('RATING', '評分');
define('SORT_TITLE', '排序圖片方式:');

// lang_img_nav_bar
define('THUMB_TITLE', '返回到縮圖頁');
define('PIC_INFO_TITLE', '顯示/隱藏圖片資訊');
define('SLIDESHOW_TITLE', '幻燈片播放');
define('SLIDESHOW_DISABLED', '電子賀卡功能被關閉');
define('SLIDESHOW_DISABLED_MSG', '只有會員可用此功能, 請您加入會員.');
define('ECARD_TITLE', '將此圖片當成電子賀卡寄出');
define('ECARD_DISABLED', '電子賀卡功能被關閉');
define('ECARD_DISABLED_MSG', '你無權寄發電子賀卡');
define('PREV_TITLE', '看前一圖片');
define('NEXT_TITLE', '看下一圖片');
define('PIC_POS', '圖片 %s/%s');
define('NO_MORE_IMAGES', '這個藝廊沒有更多圖片');
define('NO_LESS_IMAGES', '這是藝廊的第一個圖片');

// lang_rate_pic
define('RATE_THIS_PIC', '評比這個圖片');
define('NO_VOTES', '(尚無評分)');
define('RATING', '(目前得分 : %s / 5 累計 %s 票)');
define('RUBBISH', '廢物');
define('POOR', '拙劣');
define('FAIR', '普通');
define('GOOD', '好的');
define('EXCELLENT', '優良');
define('GREAT', '最好的');

// lang_cpg_die
define('INFORMATION', '資訊');
define('ERROR', '錯誤');
define('CRITICAL_ERROR', '嚴重錯誤');
define('FILE', '檔案: ');
define('LINE', '行數: ');

// lang_display_thumbnails
define('FILENAME', '檔案名稱 : ');
define('FILESIZE', '檔案大小 : ');
define('DIMENSIONS', '影像尺寸 : ');
define('DATE_ADDED', '加入日期 : ');

// lang_get_pic_data
define('N_COMMENTS', '%s 篇留言');
define('N_VIEWS', '%s 次觀看');
define('N_VOTES', '(%s 個評分)');



// lang_admin_php
define('LV_ADMIN', '正離開管理模式...');
define('ENT_ADMIN', '正進入管理模式...');
// lang_albmgr_php
define('ALB_NEED_NAME', '相簿需要有一個名稱 !');
define('CONFIRM_MODIFS', '請確定你要做這些修改?');
define('NO_CHANGE', '你沒有作任何修改!');
define('NEW_ALBUM', '新相簿');
define('CONFIRM_DELETE1', '請確定你要刪除這個相簿?');
define('CONFIRM_DELETE2', '\\n它包括的所有圖片與評論都會消失不見!');
define('SELECT_FIRST', '先選一個相簿');
define('ALB_MRG', '相簿管理員');
define('MY_GALLERY', '* 我的藝廊 *');
define('NO_CATEGORY', '* 沒有分類 *');
define('DELETE', '刪除');
define('NEW', '新增');
define('APPLY_MODIFS', '套用修改');
define('SELECT_CATEGORY', '選擇分類');

// lang_catmgr_php
define('MISS_PARAM', '沒有提供必要的參數來執行\'%s\'操作!');
define('UNKNOWN_CAT', '在系統資料庫中所選的分類不存在');
define('USERGAL_CAT_RO', '會員藝廊分類沒有被刪除!');
define('MANAGE_CAT', '管理分類');
define('CONFIRM_DELETE', '請確定你想要刪除此分類');
define('CATEGORY', '分類');
define('OPERATIONS', '操作');
define('MOVE_INTO', '移到');
define('UPDATE_CREATE', '更新/建立分類');
define('PARENT_CAT', '上層目錄');
define('CAT_TITLE', '分類標題');
define('CAT_DESC', '分類說明');

// lang_config_php
define('TITLE', '組態設定');
define('RESTORE_CFG', '回存程式預設值');
define('SAVE_CFG', '儲存新的組態設定n');
define('NOTES', '註');
define('INFO', '資訊');
define('UPD_SUCCESS', 'Coppermine 設定已更新');
define('RESTORE_SUCCESS', 'Coppermine 預設值已回存');
define('NAME_A', '依名稱正向排序');
define('NAME_D', '依名稱反向排序');
define('TITLE_A', '依標題正向排序');
define('TITLE_D', '依標題反向排序');
define('DATE_A', '依日期正向排序');
define('DATE_D', '依日期反向排序');
define('RATING_A', '依評分正向排序');
define('RATING_D', '依評分反向排序');
define('TH_ANY', '最大外觀');
define('TH_HT', '高度');
define('TH_WD', '寬度');

// lang_config_data
define('CONFIG_GENSET', 'General settings');
define('GALLERY_NAME', 'Gallery name');
define('GALLERY_DESCRIPTION', 'Gallery description');
define('GALLERY_ADMIN_EMAIL', 'Gallery administrator email');
define('ECARDS_MORE_PIC_TARGET', 'Address to nuke folder ie http://www.mysite.tld/html/');
define('LANG', 'Language');
define('CPGTHEME', 'Theme');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'Album list view');
define('MAIN_TABLE_WIDTH', 'Width of the main table (pixels or %)');
define('SUBCAT_LEVEL', 'Number of levels of categories to display');
define('ALBUMS_PER_PAGE', 'Number of albums to display');
define('ALBUM_LIST_COLS', 'Number of columns for the album list');
define('ALB_LIST_THUMB_SIZE', 'Size of thumbnails in pixels');
define('MAIN_PAGE_LAYOUT', 'The content of the main page');
define('FIRST_LEVEL', 'Show first level album thumbnails in categories');
define('THUMB_VIEW_TITLE', 'Thumbnail view');
define('THUMBCOLS', 'Number of columns on thumbnail page');
define('THUMBROWS', 'Number of rows on thumbnail page');
define('MAX_TABS', 'Maximum number of tabs to display');
define('CAPTION_IN_THUMBVIEW', 'Display picture caption (in addition to title) below the thumbnail');
define('DISPLAY_COMMENT_COUNT', 'Display number of comments below the thumbnail');
define('DEFAULT_SORT_ORDER', 'Default sort order for pictures');
define('MIN_VOTES_FOR_RATING', 'Minimum number of votes for a picture to appear in the \'top-rated\' list');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'Image view &amp; Comment settings');
define('PICTURE_TABLE_WIDTH', 'Width of the table for picture display (pixels or %)');
define('DISPLAY_PIC_INFO', 'Picture information are visible by default');
define('FILTER_BAD_WORDS', 'Filter bad words in comments');
define('ENABLE_SMILIES', 'Allow smiles in comments');
define('DISABLE_FLOOD_PROTECTION', 'Allow several consecutive comments on one pic from the same user');
define('COMMENT_EMAIL_NOTIFICATION', 'Email site admin upon comment submission');
define('MAX_IMG_DESC_LENGTH', 'Max length for an image description');
define('MAX_COM_WLENGTH', 'Max number of characters in a word');
define('MAX_COM_LINES', 'Max number of lines in a comment');
define('MAX_COM_SIZE', 'Maximum length of a comment');
define('DISPLAY_FILM_STRIP', 'Show film strip');
define('MAX_FILM_STRIP_ITEMS', 'Number of items in film strip');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('PIC_THUMB_SETTING_TITLE',  'Pictures and thumbnails settings');
define('JPEG_QUAL', 'Quality for JPEG files');
define('THUMB_WIDTH', 'Max dimension of a thumbnail <b>*</b>');
define('THUMB_USE', 'Use dimension ( width or height or Max aspect for thumbnail )<b>*</b>');
define('MAKE_INTERMEDIATE', 'Create intermediate pictures');
define('PICTURE_WIDTH', 'Max width or height of an intermediate picture <b>*</b>');
define('MAX_UPL_SIZE', 'Max size for uploaded pictures (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Max width or height for uploaded pictures (pixels)');
define('USER_SETTING_TITLE',   'User settings');
define('ALLOW_USER_REGISTRATION', 'Allow new user registrations');
define('REG_REQUIRES_VALID_EMAIL', 'User registration requires email verification');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Allow two users to have the same email address');
define('ALLOW_PRIVATE_ALBUMS', 'Users can can have private albums');
define('CUSTOM_FIELDS_TITLE', 'Custom fields for image description (leave blank if unused)');
define('USER_FIELD1_NAME', 'Field 1 name');
define('USER_FIELD2_NAME', 'Field 2 name');
define('USER_FIELD3_NAME', 'Field 3 name');
define('USER_FIELD4_NAME', 'Field 4 name');
define('58', 'Pictures and thumbnails advanced settings');
define('SHOW_PRIVATE', 'Show private album Icon to unlogged user');
define('FORBIDEN_FNAME_CHAR', 'Characters forbidden in filenames');
define('ALLOWED_FILE_EXTENSIONS', 'Accepted file extensions for uploaded pictures');
define('THUMB_METHOD', 'Method for resizing images');
define('IMPATH', 'Path to ImageMagick/Netpbm \'convert\' utility (example /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Allowed image types (only valid for ImageMagick)');
define('IM_OPTIONS', 'Command line options for ImageMagick');
define('READ_EXIF_DATA', 'Read EXIF data in JPEG files');
define('READ_IPTC_DATA', 'Read IPTC data in JPEG files');
define('FULLPATH', 'The album directory <b>*</b>');
define('USERPICS', 'The directory for user pictures <b>*</b>');
define('NORMAL_PFX', 'The prefix for intermediate pictures <b>*</b>');
define('THUMB_PFX', 'The prefix for thumbnails <b>*</b>');
define('DEFAULT_DIR_MODE', 'Default mode for directories');
define('DEFAULT_FILE_MODE', 'Default mode for pictures');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', 'Cookies &amp; Charset settings');
define('COOKIE_NAME', 'Name of the cookie used by the script');
define('COOKIE_PATH', 'Path of the cookie used by the script');
define('CHARSET', 'Character encoding');
define('MISC_SETTING_TITLE', 'Miscellaneous settings');
define('DEBUG_MODE', 'Enable debug mode');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', '對管理者顯示 Coppermine 更新警告');
define('90', '<br /><div align="center">(*)假如你的藝廊已經有你的圖片, 有 * 標記的欄位必須不得改變</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', '請輸入你的名字和留言');
define('COM_ADDED', '您的留言已經加入');
define('ALB_NEED_TITLE', '您必須為相簿提供一個標題 !');
define('NO_UDP_NEEDED', '沒有更新的必要.');
define('ALB_UPDATED', '相簿已經更新');
define('UNKNOWN_ALBUM', '所選擇的相簿不存在或您沒有權限上傳檔案到此相簿');
define('NO_PIC_UPLOADED', '沒有檔案被上傳 !<br /><br />如果您確定有選擇檔案上傳, 請檢查伺服器是否允許上傳檔案...');
define('ERR_MKDIR', '無法建立目錄 %s !');
define('DEST_DIR_RO', '目錄 %s 無法寫入 !');
define('ERR_MOVE', '無法搬移 %s 到 %s !');
define('ERR_FSIZE_TOO_LARGE', '您上傳的圖片太大 (不能超過 %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', '您上傳的圖檔太大 (不能超過 %s KB) !');
define('ERR_INVALID_IMG', '上傳的檔案並不是容許的圖片格式 !');
define('ALLOWED_IMG_TYPES', '您只可以上傳 %s 張圖片.');
define('ERR_INSERT_PIC', '檔案 %s 無法加入此相簿 ');
define('UPLOAD_SUCCESS', '檔案上傳完成!<br /><br />當管理者核准後就可以看到檔案了.');
define('INFO', '訊息');
define('ERR_COMMENT_EMPTY', '留言是空的 !');
define('ERR_INVALID_FEXT', '只有下列的副檔名才容許 : <br /><br />%s.');
define('NO_FLOOD', '抱歉, 此圖片最後一個留言是您提供<br /><br />您可以修改您的留言');
define('REDIRECT_MSG', '頁面轉移中.<br /><br /><br />按\'繼續\'如果頁面沒有自動刷新');
define('UPL_SUCCESS', '已經加入您的圖片');

// lang_delete_php
define('CAPTION', '說明');
define('FS_PIC', '原圖');
define('DEL_SUCCESS', '完成刪除');
define('NS_PIC', '標準尺寸圖片');
define('ERR_DEL', '無法刪除');
define('THUMB_PIC', '縮圖');
define('COMMENT', '留言');
define('IM_IN_ALB', '相簿內圖片');
define('ALB_DEL_SUCCESS', '相簿 \'%s\' 已刪除');
define('ALB_MGR', '相簿管理');
define('ERR_INVALID_DATA', '接收到不正確的資料於 \'%s\'');
define('CREATE_ALB', '建立相簿 \'%s\'');
define('UPDATE_ALB', '更新相簿 \'%s\' 標題為 \'%s\' 索引為 \'%s\'');
define('DEL_PIC', '刪除圖片');
define('DEL_ALB', '刪除相簿');
define('DEL_USER', '刪除會員');
define('ERR_UNKNOWN_USER', '所選擇的會員不存在 !');
define('COMMENT_DELETED', '留言已刪除');

// lang_display_image_php
define('CONFIRM_DEL', '確定要刪除此圖片嗎 ? \\n留言也會被刪除.');
define('DEL_PIC', '刪除此圖片');
define('SIZE', '%s x %s 像素');
define('VIEWS', '%s 次');
define('SLIDESHOW', '幻燈片播放');
define('STOP_SLIDESHOW', '停止幻燈片播放');
define('VIEW_FS', '點選圖片以觀看原圖');
define('EDIT_PIC', '編輯圖片資訊');

// lang_picinfo
define('TITLE', '圖片資訊');
define('FILENAME', '檔案名稱');
define('ALBUM NAME', '相簿名稱');
define('RATING', '評分 (%s 次投票)');
define('KEYWORDS', '關鍵字');
define('FILE SIZE', '檔案大小');
define('DIMENSIONS', '尺寸');
define('DISPLAYED', '顯示');
define('CAMERA', '相機');
define('DATE TAKEN', '拍攝日期');
define('APERTURE', '光圈');
define('EXPOSURE TIME', '曝光時間');
define('FOCAL LENGTH', '焦距');
define('COMMENT', '留言');
define('ADDFAV', '加到我的最愛');
define('ADDFAVPHRASE', '我的最愛');
define('REMFAV', '從我的最愛移除');
define('IPTCTITLE', 'IPTC 標題');
define('IPTCCOPYRIGHT', 'IPTC 版權');
define('IPTCKEYWORDS', 'IPTC 關鍵字');
define('IPTCCATEGORY', 'IPTC 類別');
define('IPTCSUBCATEGORIES', 'IPTC 子類別');
define('BOOKMARK_PAGE', '書籤圖片');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', '編輯此留言');
define('CONFIRM_DELETE', '確定要刪除此留言 ?');
define('ADD_YOUR_COMMENT', '加入你的留言');
define('NAME', '名稱');
define('COMMENT', '留言');
define('YOUR_NAME', 'Anon');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', '按圖片關這個視窗');

// lang_ecard_php
define('TITLE', '寄出電子卡片');
define('INVALID_EMAIL', '<b>警告</b> : 不正確的電子郵件地址 !');
define('ECARD_TITLE', '%s 寄來給你的電子卡片');
define('VIEW_ECARD', '如果電子卡片無法正確顯示, 請按此連結');
define('VIEW_MORE_PICS', '按此連結看更多圖片 !');
define('SEND_SUCCESS', '你的電子卡片寄出');
define('SEND_FAILED', '抱歉, 系統無法為你寄出電子卡片...');
define('FROM', '由');
define('YOUR_NAME', '你的名稱');
define('YOUR_EMAIL', '你的電子郵件地址');
define('TO', '給');
define('RCPT_NAME', '收件者名稱');
define('RCPT_EMAIL', '收件者電子郵件地址');
define('GREETINGS', '問候語');
define('MESSAGE', '訊息內容');

// lang_editpics_php
define('PIC_INFO', '圖片&nbsp;資訊');
define('ALBUM', '相簿');
define('TITLE', '標題');
define('DESC', '描述');
define('KEYWORDS', '關鍵字');
define('PIC_INFO_STR', '%sx%s - %sKB - %s 次觀看 - %s 次評分');
define('APPROVE', '核准圖片');
define('POSTPONE_APP', '延遲核准');
define('DEL_PIC', '刪除圖片');
define('READ_EXIF', '再次讀取EXIF 訊息');
define('RESET_VIEW_COUNT', '重設觀看計數器');
define('RESET_VOTES', '重設評分');
define('DEL_COMM', '刪除留言');
define('UPL_APPROVAL', '核准上傳');
define('EDIT_PICS', '編輯圖片');
define('SEE_NEXT', '觀看下一張圖片');
define('SEE_PREV', '觀看前一張圖片');
define('N_PIC', '%s 張圖片');
define('N_OF_PIC_TO_DISP', '顯示圖片數量');
define('APPLY', '套用修改');

// lang_groupmgr_php
define('GROUP_NAME', '群組名稱');
define('DISK_QUOTA', '磁碟配額');
define('CAN_RATE', '容許為圖片評分');
define('CAN_SEND_ECARDS', '容許寄出卡片');
define('CAN_POST_COM', '容許貼出留言');
define('CAN_UPLOAD', '容許上傳檔案');
define('CAN_HAVE_GALLERY', '容許有個人相簿');
define('APPLY', '套用修改');
define('CREATE_NEW_GROUP', '建立新群組');
define('DEL_GROUPS', '刪除所選擇的群組');
define('CONFIRM_DEL', '警告, 當刪除了一個群組, 屬於該群組的用戶將被轉移至 \'Registered\' 群組中 !\\n\\n確定要刪除 ? ?');
define('TITLE', '管理會員群組');
define('APPROVAL_1', '公開相簿上傳核准 (1)');
define('APPROVAL_2', '私人相簿上傳核准 (2)');
define('NOTE1', '<b>(1)</b> 上傳圖片至公開相簿需管理員核准');
define('NOTE2', '<b>(2)</b> 上傳圖片至私人相簿需管理員核准');
define('NOTES', '注意');

// lang_index_php
define('WELCOME', '歡 迎 !');

// lang_album_admin_menu
define('CONFIRM_DELETE', '確定要刪除這相簿 ? \\n所有圖片及留言都會刪除.');
define('DELETE', '刪除');
define('MODIFY', '屬性');
define('EDIT_PICS', '編輯');

// lang_list_categories
define('HOME', '相簿首頁');
define('STAT1', '<b>[pictures]</b> 張影像於 <b>[albums]</b> 個相簿及 <b>[cat]</b> 個類別, 有<b>[comments]</b> 個留言, 被觀看 <b>[views]</b> 次');
define('STAT2', '<b>[pictures]</b> 張影像於 <b>[albums]</b> 個相簿, 被觀看 <b>[views]</b> 次');
define('XX_S_GALLERY', '%s\'s Gallery');
define('STAT3', '<b>[pictures]</b> 張影像於 <b>[albums]</b> 個相簿, 有 <b>[comments]</b> 個留言, 被觀看 <b>[views]</b> 次');

// lang_list_users
define('USER_LIST', '會員列表');
define('NO_USER_GAL', '還沒有會員相簿');
define('N_ALBUMS', '%s 個相簿');
define('N_PICS', '%s 張影像');

// lang_list_albums
define('N_PICTURES', '%s 張影像');
define('LAST_ADDED', ', 最新影像於 %s');

// lang_modifyalb_php
define('UPD_ALB_N', '更新相簿 %s');
define('GENERAL_SETTINGS', '一般設定');
define('ALB_TITLE', '相簿標題');
define('ALB_CAT', '相簿類別');
define('ALB_DESC', '相簿描述');
define('ALB_THUMB', '相簿縮圖');
define('ALB_PERM', '相簿權限');
define('CAN_VIEW', '相簿可觀看');
define('CAN_UPLOAD', '訪客可上傳圖片');
define('CAN_POST_COMMENTS', '訪客可發表留言');
define('CAN_RATE', '訪客可為圖片評分');
define('USER_GAL', '會員相簿');
define('NO_CAT', '* 沒有類別 *');
define('ALB_EMPTY', '相簿是空的');
define('LAST_UPLOADED', '任何人 (公開相簿)');
define('PUBLIC_ALB', '任何人 (公開相簿)');
define('ME_ONLY', '只有我');
define('OWNER_ONLY', '只有相簿擁有人 (%s) ');
define('GROUPP_ONLY', '只給群組 \'%s\' 會員');
define('ERR_NO_ALB_TO_MODIFY', '資料庫內沒有您可修改的相簿.');
define('UPDATE', '更新相簿');

// lang_rate_pic_php
define('ALREADY_RATED', '抱歉, 您已經為此圖片評分');
define('RATE_OK', '您的評分已經被接受');

// lang_register_disclamer
define('REGISTER_DISCLAMER', '{SITE_NAME} 的管理員會儘快整理會引起反感的資料, 但我們不可能審查每一份文件. 因此您必需同意所有文件只是代表作者的立場及意見, 不代表管理人員的立場 (除了由他們貼出) 並不負任何法律責任.<br />
<br />
您必需同意不可張貼任何色情, 暴力, 不良, 不正當, 不健康, 妨害國家安全, 或任何可能違法的文件.  {SITE_NAME} 人員在任何時候都有權過濾並編輯您張貼的內容. 並且會員留在本站內的資料已存在資料庫中. 末經您的同意, 我們不會將您的資料轉給其他人使用, 不過我們不會為任何因駭客行為而外洩的資料負任何責任.<br />
<br />
本站使用 cookies 在您的電腦上來儲存資訊. 這樣是方便您更愉快瀏覽. 您的電子郵件地址只是讓我們認證您的資料而已.<br />
<br />
按下 \'我同意\' 代表您同意以上條款.');

// lang_register_php
define('PAGE_TITLE', '會員註冊');
define('TERM_COND', '條款與規則');
define('I_AGREE', '我同意');
define('SUBMIT', '確認註冊');
define('ERR_USER_EXISTS', '您所填寫的會員名稱已被人使用, 請重選一個');
define('ERR_PASSWORD_MISMATCH', '兩個密碼不合, 請重填一次');
define('ERR_UNAME_SHORT', '會員名稱至少需 2 個字元');
define('ERR_PASSWORD_SHORT', '密碼至少需 2 個字元');
define('ERR_UNAME_PASS_DIFF', '會員名稱和密碼不可以相同');
define('ERR_INVALID_EMAIL', '電子郵件地址不正確');
define('ERR_DUPLICATE_EMAIL', '這個電子郵件地址已經被其他人使用過了');
define('ENTER_INFO', '輸入註冊資料');
define('REQUIRED_INFO', '必填的資料');
define('OPTIONAL_INFO', '選填的資料');
define('USERNAME', '會員名稱');
define('PASSWORD', '密碼');
define('PASSWORD_AGAIN', '確認密碼');
define('EMAIL', '電子郵件地址');
define('LOCATION', '所在地區');
define('INTERESTS', '興趣');
define('WEBSITE', '個人網站');
define('OCCUPATION', '職業');
define('ERROR', '錯娛');
define('CONFIRM_EMAIL_SUBJECT', '%s - 註冊認證');
define('INFORMATION', '訊息');
define('FAILED_SENDING_EMAIL', '所註冊的電子郵件地址無法寄出!');
define('THANK_YOU', '感謝您的註冊.<br /><br />一封內含有如何啟用帳號的資訊電子郵件將被送到您所提供的信箱.');
define('ACCT_CREATED', '您的帳號已經建立, 現在您可以登入');
define('ACCT_ACTIVE', '您的帳號已經啟用, 現在您可以登入');
define('ACCT_ALREADY_ACT', '您的帳號已經啟用 !');
define('ACCT_ACT_FAILED', '此帳號無法啟用 !');
define('ERR_UNK_USER', '所選擇的會員並不存在 !');
define('X_S_PROFILE', '%s的個人資料');
define('GROUP', '群組');
define('REG_DATE', '加入');
define('DISK_USAGE', '磁碟使用量');
define('CHANGE_PASS', '修改密碼');
define('CURRENT_PASS', '現行密碼');
define('NEW_PASS', '新密碼');
define('NEW_PASS_AGAIN', '確認新密碼');
define('ERR_CURR_PASS', '現行密碼不正確');
define('APPLY_MODIF', '套用修改');
define('UPDATE_SUCCESS', '你的個人資料已經更新');
define('PASS_CHG_SUCCESS', '你的密碼已經修改');
define('PASS_CHG_ERROR', '你的密碼沒有修改');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', '感謝您在 {SITE_NAME} 的註冊

您的會員名稱 : "{USER_NAME}"
您的密碼 : "{PASSWORD}"

請您按下面的連結以啟動您的帳號
或者把此連結貼上瀏覽器上.

{ACT_LINK}

歡迎你(妳),

{SITE_NAME} 敬上
');

// lang_reviewcom_php
define('TITLE', '觀看留言');
define('NO_COMMENT', '還沒有留言可以觀看');
define('N_COMM_DEL', '%s 個留言已刪除');
define('N_COMM_DISP', '顯示留言數量');
define('SEE_PREV', '看前一個');
define('SEE_NEXT', '看下一個');
define('DEL_COMM', '刪除所選的留言');

// lang_search_php
define('SEARCH', '搜尋圖片內容');

// lang_search_new_php
define('PAGE_TITLE', '搜尋新圖片');
define('SELECT_DIR', '選擇目錄');
define('SELECT_DIR_MSG', '本功能可以讓你用 FTP 上傳整批圖片.<br /><br />請選擇你已上傳圖片的目錄');
define('NO_PIC_TO_ADD', '沒有圖片可以加入');
define('NEED_ONE_ALBUM', '使用此功能必需少要有一個相簿');
define('WARNING', '警告');
define('CHANGE_PERM', '程式無法寫入這個目錄, 請修改權限至 755 或 777 後再試一次 !');
define('TARGET_ALBUM', '<b>把圖片由 &quot;</b>%s<b>&quot; 到 </b>%s');
define('FOLDER', '資料夾');
define('IMAGE', '圖片');
define('ALBUM', '相簿');
define('RESULT', '結果');
define('DIR_RO', '無法寫入. ');
define('DIR_CANT_READ', '無法讀取. ');
define('INSERT', '新增圖片至相簿');
define('LIST_NEW_PIC', '列出新圖片');
define('INSERT_SELECTED', '加入所選擇的圖片');
define('NO_PIC_FOUND', '沒有找到新圖片');
define('BE_PATIENT', '請耐心等候, 程式需要一點時間來加入所選圖片');
define('NOTES', '<ul><li><b>OK</b> : 表示圖片已成功被加入<li><b>DP</b> : 表示圖片重覆或已存在資料庫<li><b>PB</b> : 表示圖片無法加入, 請檢查設定或圖片存放目錄的權限<li>如果 OK, DP, PB \'符號\' 沒有顯示請按壞掉的圖片查看 PHP 顯示的錯誤訊息<li>如果瀏覽器逾時, 請按重新整理</ul>');
define('SELECT_ALBUM', '選擇相簿');
define('NO_ALBUM', '沒有相簿被選擇, 請按返回並選一相簿要放你的照片進來');

// lang_upload_php
define('TITLE', '上傳圖片');
define('MAX_FSIZE', '最大允許檔案大小是 %s KB');
define('ALBUM', '相簿');
define('PICTURE', '圖片');
define('PIC_TITLE', '圖片標題');
define('DESCRIPTION', '圖片描述');
define('KEYWORDS', '關鍵字 (以空格區隔)');
define('ERR_NO_ALB_UPLOADABLES', '目前尚未有相簿可以上傳圖片');

// lang_usermgr_php
define('TITLE', '會員管理');
define('NAME_A', '名稱 由小至大');
define('NAME_D', '名稱 由大至小');
define('GROUP_A', '群組 由小至大');
define('GROUP_D', '群組 由大至小');
define('REG_A', '註冊日期 由遠至近');
define('REG_D', '註冊日期 由近至遠');
define('PIC_A', '圖片數 由小至大');
define('PIC_D', '圖片數 由大至小');
define('DISKU_A', '磁碟用量 由小至大');
define('DISKU_D', '磁碟用量 由大至小');
define('SORT_BY', '會員排序方式');
define('ERR_NO_USERS', '會員資料表是空的 !');
define('ERR_EDIT_SELF', '您無法編輯您的個人資料, 請利用 \'我的個人資料\' 來編輯');
define('EDIT', '編輯');
define('DELETE', '刪除');
define('NAME', '會員名稱');
define('GROUP', '群組');
define('INACTIVE', '未啟動');
define('OPERATIONS', '操作');
define('PICTURES', '圖片');
define('DISK_SPACE', '磁碟 用量 / 限額');
define('REGISTERED_ON', '註冊日');
define('U_USER_ON_P_PAGES', '%d 個會員於 %d 頁');
define('CONFIRM_DEL', '確定要刪除這個會員嗎? \\n所有他的相簿及圖片都會被刪除.');
define('MAIL', '電子郵件');
define('ERR_UNKNOWN_USER', '所選擇的會員並不存在 !');
define('MODIFY_USER', '編輯會員');
define('NOTES', '注意');
define('NOTE_LIST', '<li>如果不想改變現行密碼, 請將 \"密碼\" 位留下空白');
define('PASSWORD', '密碼');
define('USER_ACTIVE_CP', '會員已啟動');
define('USER_GROUP_CP', '會員群組');
define('USER_EMAIL', '會員電子郵件');
define('USER_WEB_SITE', '會員網址');
define('CREATE_NEW_USER', '建立新會員');
define('USER_FROM', '會員地區');
define('USER_INTERESTS', '會員興趣');
define('USER_OCC', '會員職業');

// lang_util_php
define('TITLE', '調整圖片大小');
define('WHAT_IT_DOES', '功能');
define('WHAT_UPDATE_TITLES', '從檔案名稱更新圖片標題');
define('WHAT_DELETE_TITLE', '刪除標題');
define('WHAT_REBUILD', '重建縮圖及調整圖片大小');
define('WHAT_DELETE_ORIGINALS', '重新調整後的圖片將取代原有的圖片');
define('FILE', '檔案');
define('TITLE_SET_TO', '標題變更為');
define('SUBMIT_FORM', '確認');
define('UPDATED_SUCCESFULLY', '更新已經成功');
define('ERROR_CREATE', '產生錯誤');
define('CONTINUE', '繼續執行其他的影像');
define('MAIN_SUCCESS', '檔案 %s 已設為主圖');
define('ERROR_RENAME', '錯誤 %s 改名為 %s');
define('ERROR_NOT_FOUND', '找不到檔案 %s');
define('BACK', '回主頁');
define('THUMBS_WAIT', '更新縮圖 且/或 調整影像尺寸, 請稍待...');
define('THUMBS_CONTINUE_WAIT', '繼續 更新縮圖 且/或 調整影像尺寸...');
define('TITLES_WAIT', '更新標題, 請稍待...');
define('DELETE_WAIT', '刪除標題, 請稍待...');
define('REPLACE_WAIT', '重新調整後的圖片將 取代原有的圖片中, 請稍待..');
define('INSTRUCTION', '簡易操作說明');
define('INSTRUCTION_ACTION', '請選擇操作');
define('INSTRUCTION_PARAMETER', '設定參數');
define('INSTRUCTION_ALBUM', '選擇相簿');
define('INSTRUCTION_PRESS', '請按 %s');
define('UPDATE', '更新縮圖 且/或 調整圖片大小');
define('UPDATE_WHAT', '要更新什麼');
define('UPDATE_THUMB', '只有縮圖');
define('UPDATE_PIC', '只調整圖片大小');
define('UPDATE_BOTH', '更新縮圖且調整圖片尺寸');
define('UPDATE_NUMBER', '每點選一次要處理的圖片數目');
define('UPDATE_OPTION', '(如果您遇到操作程序逾時的問題，請試著降低此設定)');
define('FILENAME_TITLE', '檔案名稱 &rArr; 圖片標題');
define('FILENAME_HOW', '如何修改檔名');
define('FILENAME_REMOVE', '刪除 .jpg 並將 _ (底線) 用空格取代');
define('FILENAME_EURO', '將 2003_11_23_13_20_20.jpg 改為 23/11/2003 13:20');
define('FILENAME_US', '將 2003_11_23_13_20_20.jpg 改為 11/23/2003 13:20');
define('FILENAME_TIME', '將 2003_11_23_13_20_20.jpg 改為 13:20');
define('DELETE', '刪除圖片標題或原始尺寸的圖片');
define('DELETE_TITLE', '刪除圖片標題');
define('DELETE_ORIGINAL', '刪除原始尺寸的圖片');
define('DELETE_REPLACE', '刪除原始尺寸的圖片並以調整尺寸的圖片取代');
define('SELECT_ALBUM', '選擇相簿');

// lang_pagetitle_php
define('VIEWING', '觀看圖片');
define('USR', '\'s 圖片藝廊');
define('PHOTOGALLERY', '圖片藝廊');
?>
