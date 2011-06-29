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
  $Source: /cvs/l10n/chinese_traditional/coppermine.php,v $
  $Revision: 9.8 $
  $Author: nanocaiordo $
  $Date: 2008/03/20 11:39:47 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Views');//new in 1.2.2nuke
define('PIC_VOTES', 'Votes');//new in 1.2.2nuke
define('PIC_COMMENTS', 'Comments');//new in 1.2.2nuke

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Chinese');
define('LANG_NAME_NATIVE', 'Mandarin');
define('LANG_COUNTRY_CODE', 'zh');
define('TRANS_NAME', 'Akamu Akamai');
define('TRANS_EMAIL', 'webmaster@nospam.nukephotogallery.com');
define('TRANS_WEBSITE', 'http://nukephotogallery.com/');
define('TRANS_DATE', '2003-04-20');
define('CHARSET', 'UTF-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', '是');
define('NO', '否');
// some common strings
define('BACK', '返回');
define('CONTINU', 'Finish');
define('INFO', 'Information');
//define('_ERROR', 'Error'); //already in main lang file
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%m/%d/%y @ %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y @ %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y @ %I:%M %p');

// lang_meta_album_names
define('RANDOM', '隨機圖片');
define('LASTUP', '最新上傳圖片');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', '最近更新相簿');
define('LASTCOM', '最新評論意見');
define('LASTCOMBY', 'My Last comments');
define('TOPN', '熱門圖片');
define('TOPRATED', '最高評分');
define('LASTHITS', '最後觀看');
define('SEARCH', '搜尋結果');
define('FAVPICS', '我的最愛');

// lang_errors
define('ACCESS_DENIED', '您沒有瀏覽本頁之權限.');
define('PERM_DENIED', '您沒有執行此動作之權限');
define('PARAM_MISSING', '缺乏必要參數,程式無法執行!');
define('NON_EXIST_AP', '您選擇之相本(片)不存在!');
define('QUOTA_EXCEEDED', '已達使用空間上限<br /><br />您所擁有使用空間為 [quota]K, 您實際使用已達 [space]K, 加入此圖片將會超過您的使用空間上限.');
define('GD_FILE_TYPE_ERR', '使用 GD 函式庫只允許 JPEG 和 PNG 格式.');
define('INVALID_IMAGE', '上傳圖片過程中斷或是GD函式庫無法處理.');
define('RESIZE_FAILED', '無法建立縮圖或是更改影像大小.');
define('NO_IMG_TO_DISPLAY', 'No image to display');
define('NON_EXIST_CAT', '選擇之類別不存在.');
define('ORPHAN_CAT', '一個子類別擁有一個不存在的父類別,請執行類別管理程式修正.');
define('DIRECTORY_RO', '目錄 \'%s\' 無法寫入,圖片無法刪除.');
define('NON_EXIST_COMMENT', '所選擇之意見不存在.');
define('PIC_IN_INVALID_ALBUM', '圖片存在於一個不存在的相本中 (%s)!?');
define('BANNED', '您已經被拒絕使用此網站,請聯絡系統管理者.');
define('NOT_WITH_UDB', '由於您設定將 Coppermine 與討論區程式結合,因此此功能無法使用.在這種設定模式下不支援此功能,或是已經由討論區程式處理.');
define('MEMBERS_ONLY', '本功能只提供註冊會員使用, 請先註冊或登入.');
define('MUSTBE_GOD', '本功能只限管理人使用. 您必需是本站管理員才可使用本功能');
define('NO_IMG_TO_APPROVE', 'No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE', '返回相簿列表');
define('ALB_LIST_LNK', '相簿列表');
define('MY_GAL_TITLE', '返回個人相簿');
define('MY_GAL_LNK', '我的相本');
define('MY_PROF_LNK', '我的個人資訊');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', '轉換到管理者模式');
define('ADM_MODE_LNK', '管理者模式');
define('USR_MODE_TITLE', '轉換到使用者模式');
define('USR_MODE_LNK', '使用者模式');
define('UPLOAD_PIC_TITLE', '上傳圖片至相本');
define('UPLOAD_PIC_LNK', '上傳圖片');
define('REGISTER_TITLE', '建立帳號');
define('REGISTER_LNK', '註冊');
define('LOGIN_LNK', '登入');
define('LOGOUT_LNK', '登出');
define('LASTUP_LNK', '最近上傳');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  '最新意見');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Most viewed');
define('TOPRATED_TITLE', '熱門瀏覽');
define('TOPRATED_LNK',  '最高評分');
define('SEARCH_TITLE', 'Search Photo Collection');
define('SEARCH_LNK', '搜尋');
define('FAV_TITLE', 'My Favorites');
define('FAV_LNK', '我的最愛');
define('HELP_TITLE', 'HELP');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', '核准上傳');
define('CONFIG_LNK', '組態');
define('ALBUMS_LNK', '相本');
define('CATEGORIES_LNK', '類別');
define('USERS_LNK', '使用者');
define('GROUPS_LNK', '群組');
define('COMMENTS_LNK', '評論意見');
define('SEARCHNEW_LNK', '大量新增圖片');
define('UTIL_LNK', '改變圖片規格');
define('BAN_LNK', '禁止使用者');

// lang_user_admin_menu
define('ALBMGR_LNK', '建立 / 排序 我的相簿');
define('MODIFYALB_LNK', '編輯我的相簿');
//define('MY_PROF_LNK', 'My profile');

// lang_cat_list
define('CATEGORY', '類別');
define('ALBUMS', '相簿');
//define('PICTURES', 'Pictures');

// lang_album_list
define('ALBUM_ON_PAGE', '%d 本相簿於 %d 頁次');
// lang_thumb_view
define('DATE', '日期');
define('NAME', '檔名');
define('TITLE', '標題');
define('SORT_DA', '依日期升次排序');
define('SORT_DD', '依日期降次排序');
define('SORT_NA', '依名稱升次排序');
define('SORT_ND', '依名稱降次排序');
define('SORT_TA', '依標題升次排序');
define('SORT_TD', '依標題降次排序');
define('PIC_ON_PAGE', '%d 張圖片於 %d 頁次');
define('USER_ON_PAGE', '%d 位使用者於 %d 頁次');
define('SORT_RA', '依評分升次排序');
define('SORT_RD', '依評分降次排序');
define('THUMB_RATING', '評分');
define('SORT_TITLE', '圖片排序依:');

// lang_img_nav_bar
define('THUMB_TITLE', '返回縮圖頁');
define('PIC_INFO_TITLE', '顯示/隱藏圖片資訊');
define('SLIDESHOW_TITLE', '投影片播放');
define('SLIDESHOW_DISABLED', '投影片功能未啟動');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', '寄送 e-card');
define('ECARD_DISABLED', 'e-cards 功能未啟動');
define('ECARD_DISABLED_MSG', '您沒有權限寄送 ecards');
define('PREV_TITLE', '觀看上一張圖片');
define('NEXT_TITLE', '觀看下一張圖片');
define('PIC_POS', '圖片 %s/%s');
define('NO_MORE_IMAGES', '這個相本已沒有其他圖片');
define('NO_LESS_IMAGES', '這是這個相本的第一張圖片');

// lang_rate_pic
define('RATE_THIS_PIC', '替這張圖片評分 ');
define('NO_VOTES', '(尚未有評分)');
define('RATING', '(目前得分 : %s / 5 於 %s 次)');
define('RUBBISH', '無聊');
define('POOR', '拙劣');
define('FAIR', '尚可');
define('GOOD', '不錯');
define('EXCELLENT', '一流');
define('GREAT', '傑出');

// lang_cpg_die
//define('INFO', 'Information');
//define('ERROR', 'Error');
define('_CRITICAL_ERROR', '嚴重錯誤');
define('FILE', '檔名: ');
define('LINE', '行數: ');

// lang_display_thumbnails
define('FILENAME', '檔名 : ');
define('FILESIZE', '大小 : ');
define('DIMENSIONS', '維度 : ');
define('DATE_ADDED', '加入日期 : ');

// lang_get_pic_data
define('N_COMMENTS', '%s 個意見');
define('N_VIEWS', '%s 次觀看');
define('N_VOTES', '(%s 次投票)');


// lang_albmgr_php
define('ALB_NEED_NAME', '必需給相簿一個名稱 !');
define('CONFIRM_MODIFS', '確定要做這些修改嗎 ?');
define('NO_CHANGE', '您沒有做任何改變 !');
define('NEW_ALBUM', '新相簿');
define('CONFIRM_DELETE1', '確定要刪除這個相簿嗎 ?');
define('CONFIRM_DELETE2', 'n此相簿內所有圖片及意見都會刪除 !');
define('SELECT_FIRST', '請先選擇相簿');
define('ALB_MRG', '相簿管理');
define('MY_GALLERY', '* 我的相本 *');
define('NO_CATEGORY', '* 沒有類別 *');
define('DELETE', '刪除');
define('NEW', '新');
define('APPLY_MODIFS', '請求修改');
define('SELECT_CATEGORY', '選擇類別');

// lang_catmgr_php
define('MISS_PARAM', '%s 該操作所需的參數未提供 !');
define('UNKNOWN_CAT', '選擇之類別不存在於資料庫中');
define('USERGAL_CAT_RO', '使用者相簿類別無法刪除 !');
define('MANAGE_CAT', '管理類別');
define('CONFIRM_DELETE_CAT', '你確定你要 *刪除* 此類別 ?');
//define('CATEGORY', 'Category');
define('OPERATIONS', '操作');
define('MOVE_INTO', '搬移');
define('UPDATE_CREATE', '更新/新建 類別');
define('PARENT_CAT', '父類別');
define('CAT_TITLE', '類別標題');
define('CAT_DESC', '類別描述');

// lang_config_php
define('CONFIG_TITLE', '系統組態');
define('RESTORE_CFG', '回覆預設組態');
define('SAVE_CFG', '儲存新組態');
define('NOTES', '注意');
//define('INFO', 'Information');
define('UPD_SUCCESS', 'Coppermine 組態已經更新');
define('RESTORE_SUCCESS', 'Coppermine 已經回存初始設');
define('NAME_A', '依名稱升冪排序');
define('NAME_D', '依名稱降冪排序');
define('TITLE_A', '依標題升冪排序');
define('TITLE_D', '依標題降冪排序');
define('DATE_A', '依日期升冪排序');
define('DATE_D', '依日期降冪排序');
define('RATING_A', '依投票升冪排序');
define('RATING_D', '依投票降冪排序');
define('TH_ANY', '最大接受度');
define('TH_HT', '高度');
define('TH_WD', '寬度');


// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'You need to type your name and a comment');
define('COM_ADDED', 'Comment added');
define('ALB_NEED_TITLE', 'You have to provide a title for the album !');
define('NO_UDP_NEEDED', 'No update needed.');
define('ALB_UPDATED', 'Album updated');
define('UNKNOWN_ALBUM', 'Selected album does not exist or you don\'t have permission to upload in this album');
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
define('ERR_COMMENT_EMPTY', 'Your comment is empty !');
define('ERR_INVALID_FEXT', 'Only files with the following extensions are accepted : <br /><br />%s.');
define('NO_FLOOD', 'Sorry but you are already the author of the last comment posted for this picture<br /><br />Edit the comment you have posted if you want to modify it');
define('REDIRECT_MSG', 'You are being redirected.<br /><br /><br />Click \'CONTINUE\' if the page does not refresh automatically');
define('UPL_SUCCESS', 'Your picture was successfully added');

// lang_delete_php
define('CAPTION', 'Caption');
define('FS_PIC', 'full size image');
define('DEL_SUCCESS', 'successfully deleted');
define('NS_PIC', 'normal size image');
define('ERR_DEL', 'can\'t be deleted');
define('THUMB_PIC', 'thumbnail');
//define('COMMENT', 'comment');
define('IM_IN_ALB', 'image in album');
define('ALB_DEL_SUCCESS', 'Album \'%s\' deleted');
define('ALB_MGR', 'Album Manager');
define('ERR_INVALID_DATA', 'Invalid data received in \'%s\'');
define('CREATE_ALB', 'Creating album \'%s\'');
define('UPDATE_ALB', 'Updating album \'%s\' with title \'%s\' and index \'%s\'');
define('DEL_PIC', 'Delete picture');
define('DEL_ALB', 'Delete album');
define('DEL_USER', 'Delete user');
//define('ERR_UNKNOWN_USER', 'The selected user does not exist !');
define('COMMENT_DELETED', 'Comment was succesfully deleted');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'Are you sure you want to DELETE this picture ? <br />Comments will also be deleted.');
define('DEL_THIS_PIC', 'DELETE THIS PICTURE');
define('SIZE', '%s x %s pixels');
define('VIEWS', '%s times');
define('SLIDESHOW', 'Slideshow');
define('STOP_SLIDESHOW', 'STOP SLIDESHOW');
define('VIEW_FS', 'Click to view full size image');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('PIC_INF_TITLE', 'Picture information');
define('PIC_INF_FILENAME', 'Filename');
define('ALBUM_NAME', 'Album name');
define('PIC_INFO_RATING', 'Rating (%s votes)');
define('KEYWORDS', 'Keywords');
define('PIC_INF_FILE_SIZE', 'File Size');
define('PIC_INF_DIMENSIONS', 'Dimensions');
define('DISPLAYED', 'Displayed');
define('CAMERA', 'Camera');
define('DATE_TAKEN', 'Date taken');
define('APERTURE', 'Aperture');
define('EXPOSURE_TIME', 'Exposure time');
define('FOCAL_LENGTH', 'Focal length');
define('COMMENT', 'Comment');
define('ADDFAV', 'Add to Favorites Album');
define('ADDFAVPHRASE', 'Favorites');
define('REMFAV', 'Remove from Favorites Album');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');
define('REMOVEFAV', 'Removed from Favorites Album');
define('ADDEDTOFAV', 'Added to Favorites Album');

// lang_display_comments
define('OK', 'OK');
define('COM_EDIT_TITLE', 'Edit this comment');
define('CONFIRM_DELETE_COM', 'Are you sure you want to delete this comment ?');
define('ADD_YOUR_COMMENT', 'Add your comment');
define('COM_NAME', 'Name');
//define('COMMENT', 'Comment');
define('YOUR_NAME', 'Anon');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Click image to close this window');

// lang_ecard_php
define('E_TITLE', 'Send an e-card');
define('INVALID_EMAIL', '<b>Warning</b> : invalid email address !');
define('E_ECARD_TITLE', 'An e-card from %s for you');
define('VIEW_ECARD', 'If the e-card does not display correctly, click this link');
define('VIEW_MORE_PICS', 'Click this link to view more pictures !');
define('SEND_SUCCESS', 'Your ecard was sent');
define('SEND_FAILED', 'Sorry but the server can\'t send your e-card...');
define('FROM', 'From');
define('_YOUR_NAME', 'Your name');
define('YOUR_EMAIL', 'Your email address');
define('TO', 'To');
define('RCPT_NAME', 'Recipient name');
define('RCPT_EMAIL', 'Recipient email address');
define('GREETINGS', 'Greetings');
define('MESSAGE', 'Message');
define('ECARD_LINK_CORRUPT', 'Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser'); //NEW

// lang_editpics_php
define('PIC_INFO', 'Picture&nbsp;info');
define('ALBUM', 'Album');
define('EDIT_TITLE', 'Title');
define('DESC', 'Description');
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
define('WELCOME', 'Welcome !');

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
define('N_PICTURES', '%s pictures');
define('LAST_ADDED', ', last one added on %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Update album %s');
define('GENERAL_SETTINGS', 'General settings');
define('ALB_TITLE', 'Album title');
define('ALB_CAT', 'Album category');
define('ALB_DESC', 'Album description');
define('ALB_THUMB', 'Album thumbnail');
define('ALB_PERM', 'Permissions for this album');
define('CAN_VIEW', 'Album can be viewed by');
define('MOD_CAN_UPLOAD', 'Visitors can upload pictures');
define('CAN_POST_COMMENTS', 'Visitors can post comments');
define('MOD_CAN_RATE', 'Visitors can rate pictures');
define('USER_GAL', 'User Gallery');
define('NO_CAT', '* No category *');
define('ALB_EMPTY', 'Album is empty');
define('LAST_UPLOADED', 'Last uploaded');
define('PUBLIC_ALB', 'Everybody (public album)');
define('ME_ONLY', 'Me only');
define('OWNER_ONLY', 'Album owner (%s) only');
define('GROUPP_ONLY', 'Members of the \'%s\' group');
define('ERR_NO_ALB_TO_MODIFY', 'There is no album you may modify. Create an allbum first!');
define('UPDATE', 'Update album');

// lang_rate_pic_php
define('ALREADY_RATED', 'Sorry but you have already rated this picture');
define('RATE_OK', 'Your vote was accepted');

// lang_register_php
define('USERNAME', 'Username');
define('GROUP', 'Group');
define('DISK_USAGE', 'Disk usage');
define('X_S_PROFILE', '%s\'s profile');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Review comments');
define('NO_COMMENT', 'There are no comments to review');
define('N_COMM_DEL', '%s comment(s) deleted');
define('N_COMM_DISP', 'Number of comments to display');
define('R_SEE_PREV', 'See previous');
define('R_SEE_NEXT', 'See next');
define('R_DEL_COMM', 'Delete selected comments');

// lang_search_php
define('S_SEARCH', 'Search the image collection');

// lang_search_new_php
define('PAGE_TITLE', 'Search new pictures');
define('SELECT_DIR', 'Select directory');
define('SELECT_DIR_MSG', 'This function allows you to add a batch of picture that your have uploaded on your server by FTP.<br /><br />Select the directory where you have uploaded your pictures');
define('NO_PIC_TO_ADD', 'There is no picture to add');
define('NEED_ONE_ALBUM', 'You need at least one album to use this function');
define('WARNING', 'Warning');
define('CHANGE_PERM', 'the script can\'t write in this directory, you need to change its mode to 755 or 777 before trying to add the pictures !');
define('TARGET_ALBUM', '<b>Put pictures of &quot;</b>%s<b>&quot; into </b>%s');
define('FOLDER', 'Folder');
define('IMAGE', 'Image');
//define('ALBUM', 'Album');
define('RESULT', 'Result');
define('DIR_RO', 'Not writable. ');
define('DIR_CANT_READ', 'Not readable. ');
define('INSERT', 'Adding new pictures to the gallery');
define('LIST_NEW_PIC', 'List of new pictures');
define('INSERT_SELECTED', 'Insert selected pictures');
define('NO_PIC_FOUND', 'No new picture was found');
define('BE_PATIENT', 'Please be patient, the script needs time to add the pictures');
define('SN_NOTES', '<ul><li><b>OK</b> : means that the picture was succesfully added<li><b>DP</b> : means that the picture is a duplicate and is already in the database<li><b>PB</b> : means that the picture could not be added, check your configuration and the permission of directories where the pictures are located<li>If the OK, DP, PB \'signs\' does not appear click on the broken picture to see any error message produced by PHP<li>If your browser timeout, hit the reload button</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('UP_TITLE', 'Upload picture');
define('MAX_FSIZE', 'Maximum allowed file size is %s KB');
//define('ALBUM', 'Album');
define('PICTURE', 'Picture');
define('PIC_TITLE', 'Picture title');
define('DESCRIPTION', 'Picture description');
define('UP_KEYWORDS', 'Keywords (separate with spaces)');
define('ERR_NO_ALB_UPLOADABLES', 'Sorry there is no album where you are allowed to upload pictures. Please create an album first!');

// lang_usermgr_php
define('U_TITLE', 'Manage users');
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
define('ERR_NO_USERS', 'User table is empty !');
define('ERR_EDIT_SELF', 'You can\'t edit your own profile, use the \'My profile\' link for that');
define('EDIT', 'EDIT');
//define('DELETE', 'DELETE');
define('U_NAME', 'User name');
//define('GROUP', 'Group');
define('INACTIVE', 'Inactive');
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
define('DELETE_ORIGINAL', '刪除原始大小的照片');
define('DELETE_REPLACE', 'Deletes the original images replacing them with the sized versions');
//define('SELECT_ALBUM', 'Select album');

// lang_pagetitle_php
define('VIEWING', 'Viewing Photo');
define('USR', '的照相簿');
define('PHOTOGALLERY', '照相簿');
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
$lang_day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
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
