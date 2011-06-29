<?php 
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.3                      //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003 Gregory DEMAR <gdemar@wanadoo.fr>                 //
// http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// New Port by CPG-nuke Dev Team                                                 //
// http://coppermine.findhere.org/                                          //
// Based on coppermine 1.1d by Surf  http://www.surf4all.net/               //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify     //
// it under the terms of the GNU General Public License as published by     //
// the Free Software Foundation; either version 2 of the License, or        //
// (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //
// to all devs: DO NOT DELETE this file again!
define('PIC_VIEWS', '點閱次數');//new in 1.2.2nuke
define('PIC_VOTES', '投票數累計');//new in 1.2.2nuke
define('PIC_COMMENTS', '評論數累計');//new in 1.2.2nuke

// info about translators and translated language
$lang_translation_info = array(
    'lang_name_english' => 'Chinese', // the name of your language in English, e.g. 'Greek' or 'Spanish'
    'lang_name_native' => 'Chinese', // the name of your language in your mother tongue (for non-latin alphabets, use unicode), e.g. '&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940;' or 'Espa&ntilde;ol'
    'lang_country_code' => 'zh', // the two-letter code for the country your language is most-often spoken (refer to http://www.iana.org/cctld/cctld-whois.htm), e.g. 'gr' or 'es'
    'trans_name' => 'Monkey', // the name of the translator - can be a nickname
    'trans_email' => 'dnfans@hotmail.com', // translator's email address (optional)
    'trans_website' => 'http://no_exist_anymore.com/', // translator's website (optional)
    'trans_date' => '2004-06-30', // the date the translation was created / last modified
    );

$lang_charset = 'UTF-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');
// Day of weeks and months
$lang_day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
// Some common strings
$lang_yes = '是';
$lang_no = '否';
$lang_back = '返回';
$lang_continue = '繼續';
$lang_info = '資訊';
$lang_error = '錯誤';
// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt = '%B %d, %Y';
$lastcom_date_fmt = '%m/%d/%y @ %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y @ %I:%M %p';
$comment_date_fmt = '%B %d, %Y @ %I:%M %p';
// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
    'random' => '隨機圖片',
    'lastup' => '最近新增圖片',
    'lastupby' => '我最近加入的圖片', // new 1.2.2
    'lastalb' => '最近更新相簿',
    'lastcom' => '最近評論',
    'lastcomby' => '我最近的評論', // new 1.2.2
    'topn' => '點閱數最高',
    'toprated' => '評分最高',
    'lasthits' => '最近點閱圖片',
    'search' => '搜尋結果',
    'favpics' => '我的最愛' // changed in cpg1.2.0nuke
    );

$lang_errors = array(
    'access_denied' => '你沒有授權可存取此頁.',
    'perm_denied' => '你沒有授權可執行此操作.',
    'param_missing' => '被呼叫的程式沒有必要的參數.',
    'non_exist_ap' => '被選的相簿/圖片不存在!',
    'quota_exceeded' => '磁碟空間配額已經超過<br /><br />你有 [quota]K 空間配額, 你所有圖片目前使用空間配額累計 [space]K, 增加此圖片會讓你超過你的空間配額.',
    'gd_file_type_err' => '當使用 GD 圖片函式庫允許圖片類型只有 JPEG 與 PNG.',
    'invalid_image' => '你上傳的圖片有錯誤或者不能被 GD 函式庫處理',
    'resize_failed' => '無法建立縮圖或者減少圖片檔案大小.',
    'no_img_to_display' => '沒有圖片可以顯示',
    'non_exist_cat' => '被選的分類不存在',
    'orphan_cat' => '有一分類沒有上層目錄, 請執行分類管理員來修正這個問題.',
    'directory_ro' => '資料夾 \'%s\' 不可寫, 圖片不能被刪除',
    'non_exist_comment' => '所選的評論不存在.',
    'pic_in_invalid_album' => '圖片在不存在的相簿裡 (%s)!?',
    'banned' => '你目前被禁止使用這個網站.',
    'not_with_udb' => '在 Coppermine 這個功能關閉因為它被整合到論壇程式中. 就算你要試著作, 不是在這個設定下不支援, 就是功能應該被論壇程式處理.',
    'members_only' => '只有會員可用此功能, 請您加入會員.', // changed in cpg1.2.0nuke
    'mustbe_god' => '此功能只有給網站站長. 你必需以站長登入來存取這個功能',
    );
// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //
$lang_main_menu = array(
    'alb_list_title' => '前進到相簿清單',
    'alb_list_lnk' => '相簿清單',
    'my_gal_title' => '前進到我個人的藝廊',
    'my_gal_lnk' => '我的藝廊',
    'my_prof_lnk' => '我的個人資料',
    'adm_mode_title' => '切換到站長模式',
    'adm_mode_lnk' => '站長模式',
    'usr_mode_title' => '切換到會員模式',
    'usr_mode_lnk' => '會員模式',
    'upload_pic_title' => '上傳一圖片到一相簿',
    'upload_pic_lnk' => '上傳圖片',
    'register_title' => '建立一個帳號',
    'register_lnk' => '註冊',
    'login_lnk' => '登入',
    'logout_lnk' => '登出',
    'lastup_lnk' => '最近上傳圖片',
    'lastcom_lnk' => '最近評論',
    'topn_lnk' => '熱門點閱圖片',
    'toprated_lnk' => '評分最好圖片',
    'search_lnk' => '搜尋',
    'fav_lnk' => '我的最愛',
    );

$lang_gallery_admin_menu = array(
    'upl_app_lnk' => '等待加入圖片',
    'config_lnk' => '設定',
    'albums_lnk' => '相簿',
    'categories_lnk' => '分類',
    'users_lnk' => '用戶',
    'groups_lnk' => '群組',
    'comments_lnk' => '圖片評論', // changed in cpg1.2.0nuke
    'searchnew_lnk' => '增加大批圖片',
    'util_lnk' => '重定圖片大小', //not used yet
    'ban_lnk' => '查禁會員',
    );

$lang_user_admin_menu = array(
    'albmgr_lnk' => '建立 / 排序我的相簿',
    'modifyalb_lnk' => '修改我的相簿',
    'my_prof_lnk' => '我的基本資料',
    );

$lang_cat_list = array(
    'category' => '分類',
    'albums' => '相簿',
    'pictures' => '圖片',
    );

$lang_album_list = array(
    'album_on_page' => '%d 相簿於 %d 頁'
    );

$lang_thumb_view = array(
    'date' => '日期',
    'name' => '檔案名稱',
    'title' => '標題',
    'sort_da' => '以日期正向排序',
    'sort_dd' => '以日期反向排序',
    'sort_na' => '以名稱正向排序',
    'sort_nd' => '以名稱反向排序',
    'sort_ta' => '以標題正向排序',
    'sort_td' => '以標題反向排序',
    'pic_on_page' => '%d 圖片於 %d 頁',
    'user_on_page' => '%d 使用者於 %d 頁',
    'sort_ra' => '以評分正向排序', // new in cpg1.2.0nuke
    'sort_rd' => '以評分反向排序', // new in cpg1.2.0nuke
    'rating' => '評分', // new in cpg1.2.0nuke
    'sort_title' => '排序圖片方式:', // new in cpg1.2.0nuke
    );

$lang_img_nav_bar = array(
    'thumb_title' => '返回到縮圖頁',
    'pic_info_title' => '顯示/隱藏圖片資訊',
    'slideshow_title' => '幻燈片播放',
    'slideshow_disabled' => '電子賀卡功能被關閉', // new in cpg1.2.0nuke
    'slideshow_disabled_msg' => $lang_errors['members_only'], // new in cpg1.2.0nuke
    'ecard_title' => '將此圖片當成電子賀卡寄出',
    'ecard_disabled' => '電子賀卡功能被關閉',
    'ecard_disabled_msg' => '你無權寄發電子賀卡',
    'prev_title' => '看前一圖片',
    'next_title' => '看下一圖片',
    'pic_pos' => '圖片 %s/%s',
    'no_more_images' => '這個藝廊沒有更多圖片', // new in cpg1.2.0nuke
    'no_less_images' => '這是藝廊的第一個圖片', // new in cpg1.2.0nuke
    );

$lang_rate_pic = array(
    'rate_this_pic' => '評比這個圖片',
    'no_votes' => '(尚無評分)',
    'rating' => '(目前得分 : %s / 5 累計 %s 票)',
    'rubbish' => '廢物',
    'poor' => '拙劣',
    'fair' => '普通',
    'good' => '好的',
    'excellent' => '優良',
    'great' => '最好的',
    );
// ------------------------------------------------------------------------- //
// File include/exif.inc.php
// ------------------------------------------------------------------------- //
// void
// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //
$lang_cpg_die = array(
    INFORMATION => $lang_info,
    ERROR => $lang_error,
    CRITICAL_ERROR => '嚴重錯誤',
    'file' => '檔案: ',
    'line' => '行數: ',
    );

$lang_display_thumbnails = array(
    'filename' => '檔案名稱 : ',
    'filesize' => '檔案大小 : ',
    'dimensions' => '影像尺寸 : ',
    'date_added' => '加入日期 : '
    );

$lang_get_pic_data = array(
    'n_comments' => '%s 個評論',
    'n_views' => '%s 次觀看',
    'n_votes' => '(%s 個評分)'
    );
// ------------------------------------------------------------------------- //
// File include/init.inc.php
// ------------------------------------------------------------------------- //
// void
// ------------------------------------------------------------------------- //
// File include/picmgmt.inc.php
// ------------------------------------------------------------------------- //
// void
// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
    'Exclamation' => '感歎',
        'Question' => '疑問',
        'Very Happy' => '很高興',
        'Smile' => '微笑',
        'Sad' => '悲哀',
        'Surprised' => '驚訝',
        'Shocked' => '震驚',
	'Confused' => '昏倒',
	'Cool' => '酷',
	'Laughing' => '發笑',
	'Mad' => '發狂',
	'Razz' => '嘲笑',
	'Embarassed' => '尷尬',
	'Crying or Very sad' => '嚎哭',
	'Evil or Very Mad' => '惡毒',
	'Twisted Evil' => '古怪',
	'Rolling Eyes' => '旋轉的眼睛',
	'Wink' => '眨眼',
	'Idea' => '主意',
	'Arrow' => '箭頭',
	'Neutral' => '中立',
	'Mr. Green' => '格林先生',       
        );
// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //
// void
// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) $lang_admin_php = array(0 => '正離開管理模式...',
        1 => '正進入管理模式...',
        );
// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
    'alb_need_name' => '相簿需要有一個名稱 !',
        'confirm_modifs' => '請確定你要做這些修改?',
        'no_change' => '你沒有作任何修改!',
        'new_album' => '新相簿',
        'confirm_delete1' => '請確定你要刪除這個相簿?',
        'confirm_delete2' => '\n它包括的所有圖片與評論都會消失不見!',
        'select_first' => '先選一個相簿',
        'alb_mrg' => '相簿管理員',
        'my_gallery' => '* 我的藝廊 *',
        'no_category' => '* 沒有分類 *',
        'delete' => '刪除',
        'new' => '新增',
        'apply_modifs' => '套用修改',
        'select_category' => '選擇分類',
        );
// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
    'miss_param' => '沒有提供必要的參數來執行\'%s\'操作!',
        'unknown_cat' => '在系統資料庫中所選的分類不存在',
        'usergal_cat_ro' => '會員藝廊分類沒有被刪除!',
        'manage_cat' => '管理分類',
        'confirm_delete' => '請確定你想要刪除此分類',
        'category' => '分類',
        'operations' => '操作',
        'move_into' => '移到',
        'update_create' => '更新/建立分類',
        'parent_cat' => '上層目錄',
        'cat_title' => '分類標題',
        'cat_desc' => '分類說明'
        );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
if (defined('CONFIG_PHP')) 
$lang_config_php = array(
    'title' => '組態設定',
        'restore_cfg' => '回存程式預設值',
        'save_cfg' => '儲存新的組態設定',
        'notes' => '註',
        'info' => '資訊',
        'upd_success' => 'Coppermine 設定已更新',
        'restore_success' => 'Coppermine 預設值已回存',
        'name_a' => '依名稱正向排序',
        'name_d' => '依名稱反向排序',
        'title_a' => '依標題正向排序',
        'title_d' => '依標題反向排序',
        'date_a' => '依日期正向排序',
        'date_d' => '依日期反向排序',
        'rating_a' => '依評分正向排序', // new in cpg1.2.0nuke
        'rating_d' => '依評分反向排序', // new in cpg1.2.0nuke
        'th_any' => '最大外觀',
        'th_ht' => '高度',
        'th_wd' => '寬度',
        );
// start left side interpretation
if (defined('CONFIG_PHP'))
    $lang_config_data = array(
        '一般設定',
        array('藝廊名稱', 'gallery_name', 0),
        array('藝廊說明', 'gallery_description', 0),
        array('藝廊管理者 email', 'gallery_admin_email', 0),
        array('nuke 資料夾網址如 http://www.mysite.tld/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
        array('語言', 'lang', 5),
// for postnuke change
        array('佈景', 'cpgtheme', 6),
        array('指定網頁標題取代 >Coppermine', 'nice_titles', 1),
        array('在右邊顯示區塊', 'right_blocks', 1), // new 1.2.2
        '相簿清單顯示',
        array('主表格寬度 (像素或者 %)', 'main_table_width', 0),
        array('要顯示類別的等級的數目', 'subcat_level', 0),
        array('要顯示相簿的數目', 'albums_per_page', 0),
        array('相簿清單欄位數目', 'album_list_cols', 0),
        array('縮圖大小以像素為單位', 'alb_list_thumb_size', 0),
        array('主頁內容', 'main_page_layout', 0),
        array('在類別中顯示第一等級相簿縮圖', 'first_level', 1), 
        '縮圖顯示',
        array('在縮圖頁欄位數目', 'thumbcols', 0),
        array('在縮圖頁列數目', 'thumbrows', 0),
        array('要顯示標籤最大數', 'max_tabs', 0),
        array('在縮圖下方顯示圖片簡短說明(除了標題之外)', 'caption_in_thumbview', 1),
        array('在縮圖下方顯示評論數目', 'display_comment_count', 1),
        array('圖片預設的排序方式', 'default_sort_order', 3),
        array('一張圖片要出現在 熱門評分 清單的最小票數', 'min_votes_for_rating', 0),
        array('縮圖的html語法 Alts 與 title 標籤, 顯示標題與關鍵字取代圖片資訊', 'seo_alts', 1), // new in cpg1.2.0nuke
        '圖片顯示 &amp; 評論設定',
        array('圖片顯示的表單寬度 (像素或者 %)', 'picture_table_width', 0),
        array('預設值圖片資訊是可見的', 'display_pic_info', 1),
        array('在評論中過濾不雅文字', 'filter_bad_words', 1),
        array('在評論中允許表情符號', 'enable_smilies', 1),
        array('在一圖片允許同一使用者發表數個連續不斷的評論', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
        array('一旦有人張貼評論就發一封信給站長' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
        array('一圖片說明的最大長度', 'max_img_desc_length', 0),
        array('在一字中的最大字母數目', 'max_com_wlength', 0),
        array('在一篇評論中最大行數', 'max_com_lines', 0),
        array('一篇評論的最大長度', 'max_com_size', 0),
        array('顯示幻燈片預覽列', 'display_film_strip', 1),
        array('幻燈片預覽列的圖片數', 'max_film_strip_items', 0),
        array('允許訪客觀看圖片原尺寸', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
        array('相隔多少天才能投票給同一圖片','keep_votes_time',0), // new in cpg1.2.2c nuke
        '圖片與縮圖設定',
        array('JPEG 格式品質', 'jpeg_qual', 0),
        array('縮圖最大尺寸 <b>*</b>', 'thumb_width', 0),
        array('使用尺寸 ( 寬、高或縮圖最大邊長 ) <b>*</b>', 'thumb_use', 7),
        array('建立中級圖片', 'make_intermediate', 1),
        array('中級圖片最大寬度高度尺寸 <b>*</b>', 'picture_width', 0),
        array('上傳圖檔的最大限制 (KB)', 'max_upl_size', 0),
        array('上傳圖片最大寬或高尺寸 (像素)', 'max_upl_width_height', 0), 
        array('Allow multiple Files to be upload with same file name', 'samename', 1), 
        '會員設定',
        array('允許新會員註冊', 'allow_user_registration', 1),
        array('註冊需要電子郵件信箱驗證', 'reg_requires_valid_email', 1),
        array('允許兩個會員使用同一個電子郵件地址', 'allow_duplicate_emails_addr', 1),
        array('會員可以有私人的相簿', 'allow_private_albums', 1),
        array('顯示以會員頭像取代私人的相簿圖片', 'avatar_private_album', 1),
        '影像描述的自訂欄位 (如果不使用請留下空白)',
        array('欄位 1 名稱', 'user_field1_name', 0),
        array('欄位 2 名稱', 'user_field2_name', 0),
        array('欄位 3 名稱', 'user_field3_name', 0),
        array('欄位 4 名稱', 'user_field4_name', 0), 
        '圖片和縮圖的進階設定',
        array('顯示私人相簿圖片給未登入會員', 'show_private', 1),
        array('檔案名稱不接受的字符', 'forbiden_fname_char', 0),
        array('上傳可接受圖檔的副檔名', 'allowed_file_extensions', 0),
        array('建立縮圖的方法', 'thumb_method', 2),
        array('ImageMagick / netpbm 轉圖 工具程式的路徑(譬如 /usr/bin/X11/)', 'impath', 0),
        array('可接受的圖片檔類型 (only valid for ImageMagick)', 'allowed_img_types', 0),
        array('ImageMagick 的命令列選項', 'im_options', 0),
        array('讀取 JPEG 檔案的 EXIF 資料', 'read_exif_data', 1),
        array('讀取 JPEG 檔案的 IPTC 資料', 'read_iptc_data', 1), // new in cpg1.2.0nuke
        array('相簿資料夾路徑 <b>*</b>', 'fullpath', 0),
        array('會員圖檔資料夾路徑 <b>*</b>', 'userpics', 0),
        array('中級圖檔的前置字元 <b>*</b>', 'normal_pfx', 0),
        array('縮圖檔的前置字元 <b>*</b>', 'thumb_pfx', 0),
        array('放置圖檔目錄的預設權限', 'default_dir_mode', 0),
        array('上傳圖片的預設權限', 'default_file_mode', 0),
        array('圖片資訊顯示檔案名稱', 'picinfo_display_filename', '1'), // new in cpg1.2.0nuke
        array('圖片資訊顯示相簿名稱', 'picinfo_display_album_name', '1'), // new in cpg1.2.0nuke
        array('圖片資訊顯示檔案大小', 'picinfo_display_file_size', '1'), // new in cpg1.2.0nuke
        array('圖片資訊顯示尺寸', 'picinfo_display_dimensions', '1'), // new in cpg1.2.0nuke
        array('圖片資訊顯示點閱次數', 'picinfo_display_count_displayed', '1'), // new in cpg1.2.0nuke
        array('圖片資訊顯示網址', 'picinfo_display_URL', '1'), // new in cpg1.2.0nuke
        array('圖片資訊顯示以書籤方式連結網址', 'picinfo_display_URL_bookmark', '1'), // new in cpg1.2.0nuke
        array('圖片資訊顯示最愛相簿連結', 'picinfo_display_favorites', '1'), // new in cpg1.2.0nuke
        'Cookies &amp; Charset 設定',
        array('使用的 cookie 名稱', 'cookie_name', 0),
        array('使用的 cookie 路徑', 'cookie_path', 0),
        array('字元編碼', 'charset', 4), 
        '雜項設定',
        array('打開除錯模式', 'debug_mode', 1),
        array(
'打開進階除錯模式', 'advanced_debug_mode', 1), // new in cpg1.2.0nuke
array(
'對管理者顯示 Coppermine 更新警告', 'showupdate', 0), // new 1.2.2

        '<br /><div align="center">(*)假如你的藝廊已經有你的圖片, 有 * 標記的欄位必須不得改變</div><br />'
        );
// end left side interpretation
// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) 
$lang_db_input_php = array(
  'empty_name_or_com' => '請輸入你的名字和留言',
  'com_added' => '您的留言已經加入',
  'alb_need_title' => '您必須為相簿提供一個標題 !',
  'no_udp_needed' => '沒有更新的必要',
  'alb_updated' => '相簿已經更新',
  'unknown_album' => '所選擇的相簿不存在或您沒有權限上傳檔案到此相簿',
  'no_pic_uploaded' => '沒有檔案被上傳 !<br /><br />如果您確定有選擇檔案上傳, 請檢查伺服器是否允許上傳檔案...', //cpg1.3.0
  'err_mkdir' => '無法建立目錄 %s !',
  'dest_dir_ro' => '目錄 %s 無法寫入 !',
  'err_move' => '無法搬移 %s 到 %s !',
  'err_fsize_too_large' => '您上傳的圖片太大 (不能超過 %s x %s) !', //cpg1.3.0
  'err_imgsize_too_large' => '您上傳的圖檔太大 (不能超過 %s KB) !',
  'err_invalid_img' => '上傳的檔案並不是容許的圖片格式 !',
  'allowed_img_types' => '您只可以上傳 %s 張圖片.',
  'err_insert_pic' => '檔案 %s 無法加入此相簿 ', //cpg1.3.0
  'upload_success' => '檔案上傳完成!<br /><br />當管理者核准後就可以看到檔案了.', //cpg1.3.0
  'notify_admin_email_subject' => '%s - 上傳檔案通知', //cpg1.3.0
  'notify_admin_email_body' => '%s有上傳檔案 需要你的核准. 請查閱 %s', //cpg1.3.0
  'info' => '訊息',
  'com_added' => '留言已加入',
  'alb_updated' => '相簿已經更新',
  'err_comment_empty' => '留言是空的 !',
  'err_invalid_fext' => '只有下列的副檔名才容許 : <br /><br />%s.',
  'no_flood' => '抱歉, 此圖片最後一個留言是您提供<br /><br />您可以修改您的留言', //cpg1.3.0
  'redirect_msg' => '頁面轉移中.<br /><br /><br />按\'繼續\'如果頁面沒有自動刷新',
  'upl_success' => '已經加入您的圖片', //cpg1.3.0
  'email_comment_subject' => '已經有留言發表在網路相簿', //cpg1.3.0
  'email_comment_body' => '已經有留言發表在您的相簿.請查閱', //cpg1.3.0
        );
// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => '說明',
  'fs_pic' => '原圖',
  'del_success' => '完成刪除',
  'ns_pic' => '標準尺寸圖片',
  'err_del' => '無法刪除',
  'thumb_pic' => '縮圖',
  'comment' => '留言',
  'im_in_alb' => '相簿內圖片',
  'alb_del_success' => '相簿 \'%s\' 已刪除',
  'alb_mgr' => '相簿管理',
  'err_invalid_data' => '接收到不正確的資料於 \'%s\'',
  'create_alb' => '建立相簿 \'%s\'',
  'update_alb' => '更新相簿 \'%s\' 標題為 \'%s\' 索引為 \'%s\'',
  'del_pic' => '刪除圖片', //cpg1.3.0
  'del_alb' => '刪除相簿',
  'del_user' => '刪除會員',
  'err_unknown_user' => '所選擇的會員不存在 !',
  'comment_deleted' => '留言已刪除',
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //
// Void
// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')) {
$lang_display_image_php = array(
 'confirm_del' => '確定要刪除此圖片嗎 ? \\n留言也會被刪除.', //js-alert //cpg1.3.0
  'del_pic' => '刪除此圖片', //cpg1.3.0
  'size' => '%s x %s 像素',
  'views' => '%s 次',
  'slideshow' => '幻燈片播放',
  'stop_slideshow' => '停止播放',
  'view_fs' => '點選圖片以觀看原圖',
  'edit_pic' => '編輯說明', //cpg1.3.0
  'crop_pic' => '裁剪與旋轉', //cpg1.3.0
      );

    $lang_picinfo = array('title' => '圖片資訊',
'title' =>'圖片資訊', //cpg1.3.0
  'Filename' => '檔案名稱',
  'Album name' => '相簿名稱',
  'Rating' => '評分 (%s 次投票)',
  'Keywords' => '關鍵字',
  'File Size' => '檔案大小',
  'Dimensions' => '尺寸',
  'Displayed' => '顯示',
  'Camera' => '相機',
  'Date taken' => '拍攝日期',
  'Aperture' => '光圈',
  'Exposure time' => '曝光時間',
  'Focal length' => '焦距',
  'Comment' => '留言',
  'addFav'=>'加到我的最愛', //cpg1.3.0
  'addFavPhrase'=>'我的最愛', //cpg1.3.0
  'remFav'=>'從我的最愛移除', //cpg1.3.0
  'iptcTitle'=>'IPTC 標題', //cpg1.3.0
  'iptcCopyright'=>'IPTC 版權', //cpg1.3.0
  'iptcKeywords'=>'IPTC 關鍵字', //cpg1.3.0
  'iptcCategory'=>'IPTC 類別', //cpg1.3.0
  'iptcSubCategories'=>'IPTC 子類別', //cpg1.3.0
        'bookmark_page' => '書籤圖片', // new in cpg1.2.0nuke
        );

    $lang_display_comments = array('OK' => 'OK',
  'edit_title' => '編輯此留言',
  'confirm_delete' => '確定要刪除此留言 ?', //js-alert
  'add_your_comment' => '加入你的留言',
  'name'=>'名稱',
  'comment'=>'留言',
  'your_name' => 'Anon',
        );

    $lang_fullsize_popup = array('click_to_close' => '按圖片關這個視窗',
        );
} 
// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //
$lang_ecard_php = array(
'title' => '寄出電子卡片',
  'invalid_email' => '<b>警告</b> : 不正確的電子郵件地址 !',
  'ecard_title' => '%s 寄來給你的電子卡片',
  'error_not_image' => '電子卡片只能寄出圖片.', //cpg1.3.0
  'view_ecard' => '如果 電子卡片 無法正確顯示, 請按此連結',
  'view_more_pics' => '按此連結看更多圖片 !',
  'send_success' => '你的電子卡片寄出',
  'send_failed' => '抱歉, 本伺服器無法為你寄出 電子卡片...',
  'from' => '由',
  'your_name' => '你的名稱',
  'your_email' => '你的電子郵件地址',
  'to' => '給',
  'rcpt_name' => '收件者名稱',
  'rcpt_email' => '收件者電子郵件地址',
  'greetings' => '問候語',
  'message' => '訊息內容',
       );
// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //
if (defined('EDITPICS_PHP')) $lang_editpics_php = array('pic_info' => '圖片&nbsp;資訊',
'album' => '相簿',
  'title' => '標題',
  'desc' => '描述',
  'keywords' => '關鍵字',
  'pic_info_str' => '%s &times; %s - %s KB - %s 次觀看 - %s 次評分',
  'approve' => '核准圖片', //cpg1.3.0
  'postpone_app' => '延遲核准',
  'del_pic' => '刪除圖片', //cpg1.3.0
  'read_exif' => '再次讀取EXIF 訊息', //cpg1.3.0
  'reset_view_count' => '重設觀看計數器',
  'reset_votes' => '重設評分',
  'del_comm' => '刪除留言',
  'upl_approval' => '核准上傳',
  'edit_pics' => '編輯圖片', //cpg1.3.0
  'see_next' => '觀看下一張圖片', //cpg1.3.0
  'see_prev' => '觀看前一張圖片', //cpg1.3.0
  'n_pic' => '%s 張圖片', //cpg1.3.0
  'n_of_pic_to_disp' => '圖片顯示數量', //cpg1.3.0
  'apply' => '套用修改', //cpg1.3.0
  'crop_title' => 'Coppermine 圖片編輯器', //cpg1.3.0
  'preview' => '預覽', //cpg1.3.0
  'save' => '存檔', //cpg1.3.0
  'save_thumb' =>'存成縮圖', //cpg1.3.0
  'sel_on_img' =>'動作已經完成!', //js-alert //cpg1.3.0
      );
// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array('group_name' => 'Group name',
'group_name' => '群組名稱',
  'disk_quota' => '磁碟配額',
  'can_rate' => '容許為圖片評分', //cpg1.3.0
  'can_send_ecards' => '容許寄出卡片',
  'can_post_com' => '容許貼出留言',
  'can_upload' => '容許上傳檔案', //cpg1.3.0
  'can_have_gallery' => '容許有個人相簿',
  'apply' => '套用修改',
  'create_new_group' => '建立新群組',
  'del_groups' => '刪除所選擇的群組',
  'confirm_del' => '警告, 當刪除了一個群組, 屬於該群組的用戶將被轉移至 \'Registered\' 群組中 !\n\nn確定要刪除 ?', //js-alert //cpg1.3.0
  'title' => '管理會員群組',
  'approval_1' => '公開相簿上傳核准 (1)',
  'approval_2' => '私人相簿上傳核准 (2)',
  'upload_form_config' => '上傳格式設定', //cpg1.3.0
  'upload_form_config_values' => array( '上傳一個檔案', '多檔上傳', '只上傳URI ', '只上傳ZIP ', 'File-URI', 'File-ZIP', 'URI-ZIP', 'File-URI-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'會員可用的上傳框數量?', //cpg1.3.0
  'num_file_upload'=>'最大/實際 檔案 上傳框數量', //cpg1.3.0
  'num_URI_upload'=>'最大/實際 URI 上傳框數量', //cpg1.3.0
  'note1' => '<b>(1)</b> 上傳圖片至公開相簿需管理員核准',
  'note2' => '<b>(2)</b> 上傳圖片至私人相簿需管理員核准',
  'notes' => '注意',
      );
// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')) {
$lang_index_php = array(
  'welcome' => '歡 迎 !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => '確定要刪除這相簿 ? \\n所有圖片及留言都會刪除.', //js-alert //cpg1.3.0
  'delete' => '刪除',
  'modify' => '屬性',
  'edit_pics' => '編輯', //cpg1.3.0
);

$lang_list_categories = array(
  'home' => '相簿首頁',
  'stat1' => '<b>[pictures]</b> 張影像於 <b>[albums]</b> 個相簿及 <b>[cat]</b> 個類別, 有 <b>[comments]</b> 個留言, 被觀看 <b>[views]</b> 次', //cpg1.3.0
  'stat2' => '<b>[pictures]</b> 張影像於 <b>[albums]</b> 個相簿, 被觀看 <b>[views]</b> 次', //cpg1.3.0
  'xx_s_gallery' => '%s\'s 相簿',
  'stat3' => '<b>[pictures]</b> 張影像於 <b>[albums]</b> 個相簿, 有 <b>[comments]</b> 個留言, 被觀看 <b>[views]</b> 次', //cpg1.3.0
);

$lang_list_users = array(
  'user_list' => '會員列表',
  'no_user_gal' => '還沒有會員相簿',
  'n_albums' => '%s 個相簿',
  'n_pics' => '%s 張影像', //cpg1.3.0
);

$lang_list_albums = array(
  'n_pictures' => '%s 張影像', //cpg1.3.0
  'last_added' => ', 最新影像於 %s',
           );
} 
// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
// NULL
// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //
// NULL
// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => '更新相簿 %s',
  'general_settings' => '一般設定',
  'alb_title' => '相簿標題',
  'alb_cat' => '相簿類別',
  'alb_desc' => '相簿描述',
  'alb_thumb' => '相簿縮圖',
  'alb_perm' => '相簿權限',
  'can_view' => '相簿可觀看',
  'can_upload' => '訪客可上傳圖片',
  'can_post_comments' => '訪客可發表留言',
  'can_rate' => '訪客可為圖片評分',
  'user_gal' => '會員相簿',
  'no_cat' => '* 沒有類別 *',
  'alb_empty' => '相簿是空的',
  'last_uploaded' => '最近上傳',
  'public_alb' => '任何人 (公開相簿)',
  'me_only' => '只有我',
  'owner_only' => '只有相簿擁有人 (%s) ',
  'groupp_only' => '群組 \'%s\' 會員',
  'err_no_alb_to_modify' => '資料庫內沒有您可修改的相簿.',
  'update' => '更新相簿', //cpg1.3.0
  'notice1' => '(*) 根據 %s群組%s 設定', //cpg1.3.0 (do not translate %s!)
       );
// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) 
$lang_rate_pic_php = array(
   'already_rated' => '抱歉, 您已經為此圖片評分', //cpg1.3.0
  'rate_ok' => '您的評分已經被接受',
  'forbidden' => '你不能對你自己的圖片評分.', //cpg1.3.0
      );
// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
    $lang_register_disclamer = <<<EOT
{SITE_NAME} 的管理員會儘快整理會引起反感的資料, 但我們不可能審查每一份文件. 因此您必需同意所有文件只是代表作者的立場及意見, 不代表管理人員的立場 (除了由他們貼出) 並不負任何法律責任.<br />
<br />
您必需同意不可張貼任何色情, 暴力, 不良, 不正當, 不健康, 妨害國家安全, 或任何可能違法的文件.  {SITE_NAME} 人員在任何時候都有權過濾並編輯您張貼的內容. 並且會員留在本站內的資料已存在資料庫中. 末經您的同意, 我們不會將您的資料轉給其他人使用, 不過我們不會為任何因駭客行為而外洩的資料負任何責任.<br />
<br />
本站使用 cookies 在您的電腦上來儲存資訊. 這樣是方便您更愉快瀏覽. 您的電子郵件地址只是讓我們認證您的資料而已.<br />
<br />
按下 '我同意' 代表您同意以上條款.
EOT;

    $lang_register_php = array(
'page_title' => '會員註冊',
  'term_cond' => '條款與規則',
  'i_agree' => '我同意',
  'submit' => '確認註冊',
  'err_user_exists' => '您所填寫的會員名稱已被人使用, 請重選一個',
  'err_password_mismatch' => '兩個密碼不合, 請重填一次',
  'err_uname_short' => '會員名稱至少需 2 個字元',
  'err_password_short' => '密碼至少需 2 個字元',
  'err_uname_pass_diff' => '會員名稱和密碼不可以相同',
  'err_invalid_email' => '電子郵件地址不正確',
  'err_duplicate_email' => '這個電子郵件地址已經被其他人使用過了',
  'enter_info' => '輸入註冊資料',
  'required_info' => '必填的資料',
  'optional_info' => '選填的資料',
  'username' => '會員名稱',
  'password' => '密碼',
  'password_again' => '確認密碼',
  'email' => '電子郵件地址',
  'location' => '所在地區',
  'interests' => '興趣',
  'website' => '個人網站',
  'occupation' => '職業',
  'error' => '錯娛',
  'confirm_email_subject' => '%s - 註冊認證',
  'information' => '訊息',
  'failed_sending_email' => '所註冊的電子郵件地址無法寄出 !',
  'thank_you' => '感謝您的註冊.<br /><br />一封內含有如何啟用帳號的資訊電子郵件將被送到您所提供的信箱.',
  'acct_created' => '您的帳號已經建立, 現在您可以登入',
  'acct_active' => '您的帳號已經啟用, 現在您可以登入',
  'acct_already_act' => '您的帳號已經啟用 !',
  'acct_act_failed' => '此帳號無法啟用 !',
  'err_unk_user' => '所選擇的會員並不存在 !',
  'x_s_profile' => '%s的個人資料',
  'group' => '群組',
  'reg_date' => '加入',
  'disk_usage' => '磁碟使用量',
  'change_pass' => '修改密碼',
  'current_pass' => '現行密碼',
  'new_pass' => '新密碼',
  'new_pass_again' => '確認新密碼',
  'err_curr_pass' => '現行密碼不正確',
  'apply_modif' => '修改',
  'change_pass' => '修改密碼',
  'update_success' => '你的個人資料已經更新',
  'pass_chg_success' => '你的密碼已經修改',
  'pass_chg_error' => '你的密碼沒有修改',
  'notify_admin_email_subject' => '%s - 註冊通知', //cpg1.3.0
  'notify_admin_email_body' => '有一個新會員名稱 "%s" 已經在你的相簿註冊', //cpg1.3.0
   );

    $lang_register_confirm_email = <<<EOT
感謝您在 {SITE_NAME} 的註冊

您的會員名稱 : "{USER_NAME}"
您的密碼 : "{PASSWORD}"

請您按下面的連結以啟動您的帳號
或者把此連結貼上瀏覽器上.

{ACT_LINK}

歡迎你(妳),

{SITE_NAME} 敬上

EOT;
} 
// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
'title' => '觀看留言',
  'no_comment' => '還沒有留言可以觀看',
  'n_comm_del' => '%s 個留言已刪除',
  'n_comm_disp' => '顯示的留言數量',
  'see_prev' => '看前一個',
  'see_next' => '看下一個',
  'del_comm' => '刪除所選的留言',
        );
// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //
// if (defined('SEARCH_PHP'))
    $lang_search_php = array(0 => '搜尋圖片內容',
        );
// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => '搜尋新圖片', //cpg1.3.0
  'select_dir' => '選擇目錄',
  'select_dir_msg' => '本功能可以讓你用 FTP 上傳整批圖片.<br /><br />請選擇你已上傳圖片的目錄', //cpg1.3.0
  'no_pic_to_add' => '沒有圖片可以加入', //cpg1.3.0
  'need_one_album' => '使用此功能必需少要有一個相簿',
  'warning' => '警告',
  'change_perm' => '程式無法寫入這個目錄, 請修改權限至 755 或 777 後再試一次 !', //cpg1.3.0
  'target_album' => '<b>把圖片由 &quot;</b>%s<b>&quot; 到 </b>%s', //cpg1.3.0
  'folder' => '資料夾',
  'image' => '圖片',
  'album' => '相簿',
  'result' => '結果',
  'dir_ro' => '無法寫入. ',
  'dir_cant_read' => '無法讀取. ',
  'insert' => '新增圖片至相簿', //cpg1.3.0
  'list_new_pic' => '列出新圖片', //cpg1.3.0
  'insert_selected' => '加入所選擇的圖片', //cpg1.3.0
  'no_pic_found' => '沒有找到新圖片', //cpg1.3.0
  'be_patient' => '請耐心等候, 程式需要一點時間來加入所選圖片', //cpg1.3.0
  'no_album' => '沒有相簿被選擇',  //cpg1.3.0
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : 表示圖片已成功被加入'.
                          '<li><b>DP</b> : 表示圖片重覆或已存在資料庫'.
                          '<li><b>PB</b> : 表示圖片無法加入, 請檢查設定或圖片存放目錄的權限'.
                          '<li><b>NA</b> : 表示你還沒有選擇圖片的相簿, 按 \'<a href="javascript:history.back(1)">返回</a>\' 並選擇相簿. 如果你沒有相簿 <a href="albmgr.php">請先建立一個</a></li>'.
                          '<li>如果 OK, DP, PB \'符號\' 沒有顯示請按壞掉的圖片查看 PHP 顯示的錯誤訊息'.
                          '<li>如果瀏覽器逾時, 請按重新整理'.
                          '</ul>', //cpg1.3.0
  'select_album' => '選擇相簿', //cpg1.3.0
  'check_all' => '全選', //cpg1.3.0
  'uncheck_all' => '都不選', //cpg1.3.0     
);
// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //
// Void
// ------------------------------------------------------------------------- //
// File banning.php  not used in cpg1.2.0-nuke   //
// ------------------------------------------------------------------------- //
// Void
// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //
if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => '上傳檔案', //cpg1.3.0
  'max_fsize' => '最大允許檔案大小是 %s KB',
  'album' => '相簿',
  'picture' => '圖片', //cpg1.3.0
  'pic_title' => '圖片標題', //cpg1.3.0
  'description' => '圖片描述', //cpg1.3.0
  'keywords' => '關鍵字 (以空格區隔)',
  'err_no_alb_uploadables' => '目前尚未有相簿可以上傳圖片', //cpg1.3.0
     );
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
'title' => '會員管理',
  'name_a' => '名稱 由小至大',
  'name_d' => '名稱 由大至小',
  'group_a' => '群組 由小至大',
  'group_d' => '群組 由大至小',
  'reg_a' => '註冊日期 由遠至近',
  'reg_d' => '註冊日期 由近至遠',
  'pic_a' => '圖片數 由小至大',
  'pic_d' => '圖片數 由大至小',
  'disku_a' => '磁碟用量 由小至大',
  'disku_d' => '磁碟用量 由大至小',
  'lv_a' => '最近來訪 由近至遠', //cpg1.3.0
  'lv_d' => '最近來訪 由遠至近', //cpg1.3.0
  'sort_by' => '會員排序依',
  'err_no_users' => '會員資料表是空的 !',
  'err_edit_self' => '您無法編輯您的個人資料, 請利用 \'我的個人資料\' 來編輯',
  'edit' => '編輯',
  'delete' => '刪除',
  'name' => '會員名稱',
  'group' => '群組',
  'inactive' => '未啟動',
  'operations' => '操作',
  'pictures' => '圖片', //cpg1.3.0
  'disk_space' => '磁碟 用量 / 限額',
  'registered_on' => '註冊日',
  'last_visit' => '最近來訪', //cpg1.3.0
  'u_user_on_p_pages' => '%d 個會員於 %d 頁',
  'confirm_del' => '確定要刪除這個會員嗎? \\n所有他的相簿及圖片都會被刪除.', //js-alert //cpg1.3.0
  'mail' => '電子郵件',
  'err_unknown_user' => '所選擇的會員並不存在 !',
  'modify_user' => '編輯會員',
  'notes' => '注意',
  'note_list' => '<li>如果不想改變現行密碼, 請將 \"密碼\" 位留下空白',
  'password' => '密碼',
  'user_active_cp' => '會員已啟動',
  'user_group_cp' => '會員群組',
  'user_email' => '會員電子郵件',
  'user_web_site' => '會員網址',
  'create_new_user' => '建立新會員',
  'user_from' => '會員地區',
  'user_interests' => '會員興趣',
  'user_occ' => '會員職業',
  'latest_upload' => '最新上傳', //cpg1.3.0
  'never' => '從未有', //cpg1.3.0
          );
// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) $lang_util_php = array(
'title' => '管理員工具 (調整圖片大小)', //cpg1.3.0
  'what_it_does' => '功能',
  'what_update_titles' => '從檔案名稱更新圖片標題',
  'what_delete_title' => '刪除標題',
  'what_rebuild' => '重建縮圖及調整圖片大小',
  'what_delete_originals' => '重新調整後的圖片將取代原有的圖片',
  'file' => '檔案',
  'title_set_to' => '標題變更為',
  'submit_form' => '確認',
  'updated_succesfully' => '更新已經成功',
  'error_create' => '產生錯誤',
  'continue' => '繼續執行其他的影像',
  'main_success' => '檔案 %s 已設為主圖',  //cpg1.3.0
  'error_rename' => '錯誤 %s 改名為 %s', 
  'error_not_found' => '找不到檔案 %s ',
  'back' => '回主頁',
  'thumbs_wait' => '更新縮圖 且/或 調整影像尺寸, 請稍待...',
  'thumbs_continue_wait' => '繼續 更新縮圖 且/或 調整影像尺寸...',
  'titles_wait' => '更新標題, 請稍待...',
  'delete_wait' => '刪除標題, 請稍待...',
  'replace_wait' => '重新調整後的圖片將 取代原有的圖片中, 請稍待...',
  'instruction' => '簡易操作說明',
  'instruction_action' => '請選擇操作',
  'instruction_parameter' => '設定參數',
  'instruction_album' => '選擇相簿',
  'instruction_press' => '請按 %s',
  'update' => '更新縮圖 且/或 調整圖片大小',
  'update_what' => '要更新什麼',
  'update_thumb' => '只有縮圖',
  'update_pic' => '只調整圖片大小',
  'update_both' => '更新縮圖且調整圖片尺寸',
  'update_number' => '每點選一次要處理的圖片數目',
  'update_option' => '(如果您遇到操作程序逾時的問題，請試著降低此設定)',
  'filename_title' => '檔案名稱 &rArr; 圖片標題', //cpg1.3.0
  'filename_how' => '如何修改檔名', 
  'filename_remove' => '刪除 .jpg 並將 _ (底線) 用空格取代', 
  'filename_euro' => '將 2003_11_23_13_20_20.jpg 改為 23/11/2003 13:20', 
  'filename_us' => '將 2003_11_23_13_20_20.jpg 改為 11/23/2003 13:20', 
  'filename_time' => '將 2003_11_23_13_20_20.jpg 改為 13:20', 
  'delete' => '刪除圖片標題或原始尺寸的圖片', //cpg1.3.0
  'delete_title' => '刪除圖片標題', //cpg1.3.0
  'delete_original' => '刪除原始尺寸的圖片',
  'delete_replace' => '刪除原始尺寸的圖片並以調整尺寸的圖片取代',
  'select_album' => '選擇相簿',
  'delete_orphans' => '刪除零散的留言(對全部的相簿)', //cpg1.3.0
  'orphan_comment' => '發現零散的留言', //cpg1.3.0
  'delete' => '刪除', //cpg1.3.0
  'delete_all' => '全部刪除', //cpg1.3.0
  'comment' => '留言: ', //cpg1.3.0
  'nonexist' => '要附加的檔案不存在 # ', //cpg1.3.0
  'phpinfo' => '顯示php資訊', //cpg1.3.0
  'update_db' => '更新資料庫', //cpg1.3.0
  'update_db_explanation' => '如果妳有更新 coppermine 檔案, 加入修改或由以前的版本升級, 請確定執行一次資料庫更新. 這將會在coppermine資料庫新增必要的資料表 及/或 設定值.', //cpg1.3.0
        );
// ------------------------------------------------------------------------- //
// File pagetitle.inc.php
// ------------------------------------------------------------------------- //
$lang_pagetitle_php = array(   
'divider' => '>',
    'viewing' => '觀看圖片',
    'usr' => "'s 圖片藝廊",
    'photogallery' => '圖片藝廊',
    );

?>
