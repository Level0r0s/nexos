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
/*   $Id: lang-vietnamese.php,v 1.1 2004/08/04 02:38:08 akamu Exp $              */
/*****************************************************************************/
// lang_translation_info
define('LANG_NAME_ENGLISH', 'VietNamese');
define('LANG_NAME_NATIVE', 'tiếng Việt');
define('LANG_COUNTRY_CODE', 'vn');
define('TRANS_NAME', 'Hữu Từ');
define('TRANS_EMAIL', 'cutu9@yahoo.com');
define('TRANS_WEBSITE', 'http://www.u2u.us');
define('TRANS_DATE', '2003-10-30');
define('CHARSET', 'utf-8');
define('TEXT_DIR', 'ltr');
define('YES', 'Có');
define('NO', 'Không');
define('BACK', 'TRỞ LẠI');
define('CONTINUE', 'TIẾP TỤC');
define('INFO', 'Thông tin');
define('ERROR', 'Lỗi');
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%m/%d/%y at %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y at %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y at %I:%M %p');
// lang_meta_album_names
define('RANDOM', 'Hình ngẫu nhiên');
define('LASTUP', 'Hình mới thêm vào');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Album vừa cập nhật');
define('LASTCOM', 'Nhận xét cuối');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Xem nhiều');
define('TOPRATED', 'Đánh giá cao');
define('LASTHITS', 'Xem lần cuối');
define('SEARCH', 'Kết quả tìm thấy');
define('FAVPICS', 'Yêu thích');

// lang_errors
define('ACCESS_DENIED', 'Bạn không có quyền ở trang này');
define('PERM_DENIED', 'Bạn không có quyền để thực hiện');
define('PARAM_MISSING', 'Gọi không có thông số');
define('NON_EXIST_AP', 'Lựa chọn album/hình không có!');
define('QUOTA_EXCEEDED', 'Hết dung lựơng<br /><br /Bạn chỉ có  [quota]K,hình của bạn đã chiếm  [space]K, thêm hình này vào sẽ vựơt khoảng trống cho phép.');
define('GD_FILE_TYPE_ERR', 'Khi dùng thư viện GD chỉ xử lý đựơc hình có đuôi là JPEG và PNG.');
define('INVALID_IMAGE', 'Hình bạn tải lên gặp trục trặc hoặc không thể đựơc  thư viện GD xử lý');
define('RESIZE_FAILED', 'Không thể tạo thumbnail hoặc thay đổi kích thứơc hình');
define('NO_IMG_TO_DISPLAY', 'Không có hình nào cả');
define('NON_EXIST_CAT', 'Phân loại bạn chọn không tồn tại');
define('ORPHAN_CAT', 'Phân loại bạn chọn không có Phân loại gôc, vào phần quản lý Phân loại để chỉnh lại.');
define('DIRECTORY_RO', 'Đừơng dẫn \'%s\' không thể thực thi, hình không thể xoá');
define('NON_EXIST_COMMENT', 'Nhận xét bạn chọn không tồn tại.');
define('PIC_IN_INVALID_ALBUM', 'PHình nằm trong Album không tồn tại (%s)!?');
define('BANNED', 'Bạn đang bị cấm tham gia site này.');
define('NOT_WITH_UDB', 'Chức năng này không đựơc phép sử dụng vì nó tương tác với forum. Bạn hãy cấu hình lại hoặc chỉnh trong chức năng của forum');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', 'Danh sách Album');
define('ALB_LIST_LNK', 'những Album');
define('MY_GAL_TITLE', 'Hình cá nhân');
define('MY_GAL_LNK', 'Hình của tôi');
define('MY_PROF_LNK', 'Góc cá nhân');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'chuyển admin mode');
define('ADM_MODE_LNK', 'Admin mode');
define('USR_MODE_TITLE', 'Chuyển user mode');
define('USR_MODE_LNK', 'Chuyển qua giao diện ngừơi dùng');
define('UPLOAD_PIC_TITLE', 'Tải hình vào Album');
define('UPLOAD_PIC_LNK', 'Tải  hình');
define('REGISTER_TITLE', 'Tạo tài khoản');
define('REGISTER_LNK', 'Đăng ký');
define('LOGIN_LNK', 'Đăng nhập');
define('LOGOUT_LNK', 'Thoát');
define('LASTUP_LNK', 'Mới tải lên');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Mới nhận xét');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Xem nhiều');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Đánh giá cao');
define('SEARCH_LNK', 'Tìm');
define('FAV_LNK', 'Yêu thích');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu

define('UPL_APP_LNK', 'Luật khi upload');
define('CONFIG_LNK', 'Cấu hình');
define('ALBUMS_LNK', 'Album');
define('CATEGORIES_LNK', 'Phân loại');
define('USERS_LNK', 'Users');
define('GROUPS_LNK', 'Nhóm');
define('COMMENTS_LNK', 'Nhận xét');
define('SEARCHNEW_LNK', 'Đừơng dẫn và Hình');
define('UTIL_LNK', 'chỉnh kích cỡ');
define('BAN_LNK', 'Cấm tham gia');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Tạo, sắp xếp');
define('MODIFYALB_LNK', 'Chỉnh Album của mình');
define('MY_PROF_LNK', 'Cá nhân');

// lang_cat_list
define('CATEGORY', 'Phân lọai');
define('ALBUMS', 'Albums');
define('PICTURES', 'Hình');

// lang_album_list
define('ALBUM_ON_PAGE', '%d album trên %d trang');

// lang_thumb_view
define('DATE', 'DATE');
define('NAME', 'FILE NAME');
define('TITLE', 'TITLE');
define('SORT_DA', 'Sắp xếp tăng dần');
define('SORT_DD', 'Sắp xếp giảm dần');
define('SORT_NA', 'Sắp xếp tăng ');
define('SORT_ND', 'Sắp xếp giảm dần');
define('SORT_TA', 'Sắp xếp tăng dần');
define('SORT_TD', 'Sắp xếp giảm dần');
define('PIC_ON_PAGE', '%d hình trên %d trang');
define('USER_ON_PAGE', '%d hình trên %d trang');
define('SORT_RA', 'Sort by rating ascending');
define('SORT_RD', 'Sort by rating descending');
define('RATING', 'RATING');
define('SORT_TITLE', 'Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE', 'trở lại trang thumbnail');
define('PIC_INFO_TITLE', 'Hiện/Ẩn thông tin hình');
define('SLIDESHOW_TITLE', 'Lướt qua');
define('SLIDESHOW_DISABLED', 'e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'Gửi hình này làm thiệp tặng');
define('ECARD_DISABLED', 'e-cards không cho phép');
define('ECARD_DISABLED_MSG', 'Bạn không có quyền để gửi hình');
define('PREV_TITLE', 'Xem hình trứoc');
define('NEXT_TITLE', 'Xem hình sau');
define('PIC_POS', 'HÌNH %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', 'Đánh giá hình này ');
define('NO_VOTES', '(Chưa ai đánh giá)');
define('RATING', '(Mức đựơc đánh giá: %s / 5 với %s lần đánh giá)');
define('RUBBISH', 'Tệ');
define('POOR', 'Xấu');
define('FAIR', 'Đựơc');
define('GOOD', 'Tốt');
define('EXCELLENT', 'Rất tốt');
define('GREAT', 'Tuyệt vời');

// lang_cpg_die
define('INFORMATION', 'Thông tin');
define('ERROR', 'Lỗi');
define('CRITICAL_ERROR', 'Lỗi');
define('FILE', 'File: ');
define('LINE', 'Dòng: ');

// lang_display_thumbnails
define('FILENAME', 'Tên file : ');
define('FILESIZE', 'Dung luợng file : ');
define('DIMENSIONS', 'Định kích cỡ : ');
define('DATE_ADDED', 'Ngày đưa vào : ');

// lang_get_pic_data
define('N_COMMENTS', '%s nhận xét');
define('N_VIEWS', '%s lần xem');
define('N_VOTES', '(%s lần đánh giá)');

// lang_smilies_inc_php
define('EXCLAMATION', 'Thán phục');
define('QUESTION', 'Câu hỏi');
define('VERY HAPPY', 'Rất hạnh phúc');
define('SMILE', 'Cừơi');
define('SAD', 'Buồn');
define('SURPRISED', 'Ngạc nhiên');
define('SHOCKED', 'Choáng');
define('CONFUSED', 'Lúng túng');
define('COOL', 'Tuyệt');
define('LAUGHING', 'Cừơi to');
define('MAD', 'Khìn');
define('RAZZ', 'Chế giễu');
define('EMBARASSED', 'Ấn tựơng');
define('CRYING OR VERY SAD', 'Buồn khóc');
define('EVIL OR VERY MAD', 'Rất khùng');
define('TWISTED EVIL', 'Qủy');
define('ROLLING EYES', 'Liếc mắt');
define('WINK', 'Nháy mắt');
define('IDEA', 'Ý tửơng');
define('ARROW', 'Mũi tên');
define('NEUTRAL', 'Trung lập');
define('MR. GREEN', 'Mr. Green');

// lang_admin_php
define('LV_ADMIN', 'Thoát khỏi giao diện Quản trị....');
define('ENT_ADMIN', 'Đăng nhập vào giao diện Quản trị ...');

// lang_albmgr_php
define('ALB_NEED_NAME', 'Cần đặt tên cho Album');
define('CONFIRM_MODIFS', 'Chắc chắn là bạn muốn chỉnh sửa như thế chứ ?');
define('NO_CHANGE', 'Chưa chỉnh sửa gì cả !');
define('NEW_ALBUM', 'Album mới');
define('CONFIRM_DELETE1', 'Chắc chắn xoá Album này đi chứ ?');
define('CONFIRM_DELETE2', '\\n Tất cả hình trong này cũng sẽ bị xoá theo luôn');
define('SELECT_FIRST', 'Trứơc tiên phải chọn Album');
define('ALB_MRG', 'Quản lý Album ');
define('MY_GALLERY', '* Hình của tôi*');
define('NO_CATEGORY', '* Không phân loại *');
define('DELETE', 'Xoá');
define('NEW', 'Mới');
define('APPLY_MODIFS', 'Cập nhật chỉnh sửa');
define('SELECT_CATEGORY', 'Chọn phân loại');

// lang_catmgr_php
define('MISS_PARAM', 'Parameters required for \'%s\'operation not supplied !');
define('UNKNOWN_CAT', 'Phân loại này không nằm trong cơ sở dữ liệu');
define('USERGAL_CAT_RO', 'Hình của User không thể bị xoá');
define('MANAGE_CAT', 'Quản lý Phân loại');
define('CONFIRM_DELETE', 'Are you sure you want to DELETE this category');
define('CATEGORY', 'Phân loại');
define('OPERATIONS', 'Hoạt động');
define('MOVE_INTO', 'Chuyển vào');
define('UPDATE_CREATE', 'Cập nhật/Tạo Phân loại');
define('PARENT_CAT', 'Phân loại cha');
define('CAT_TITLE', 'Tên Phân loại');
define('CAT_DESC', 'Mô tả phân loại');

// lang_config_php
define('TITLE', 'Cấu hình');
define('RESTORE_CFG', 'Quay lại mặc định');
define('SAVE_CFG', 'Chấp nhận cấu hình mới');
define('NOTES', 'Ghi chú');
define('INFO', 'Thông tin');
define('UPD_SUCCESS', 'OK đã đựơc cập nhật!');
define('RESTORE_SUCCESS', 'Đã trở lại mặc định !');
define('NAME_A', 'Tên tăng dần');
define('NAME_D', 'Tên giảm dần');
define('TITLE_A', 'Tựa đề tăng dần');
define('TITLE_D', 'Tựa đề giảm dần');
define('DATE_A', 'Ngày tăng dần');
define('DATE_D', 'Ngày giảm dầ');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Height');
define('TH_WD', 'Width');

// lang_config_data
define('CONFIG_GENSET', 'Chung chung');
define('GALLERY_NAME', 'Tên trang web');
define('GALLERY_DESCRIPTION', 'Lời mô tả');
define('GALLERY_ADMIN_EMAIL', 'Mail của ngừơi quản trị');
define('ECARDS_MORE_PIC_TARGET', 'Address to nuke folder ie http://www.mysite.tld/html/');
define('LANG', 'Ngôn ngữ');
define('CPGTHEME', 'Giao diện');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'Xem danh sách Album');
define('MAIN_TABLE_WIDTH', 'Chiều ngang table chính (pixels hay %)');
define('SUBCAT_LEVEL', 'Số thứ tự phân loại sẽ hiển thị');
define('ALBUMS_PER_PAGE', 'Số của Album sẽ hiển thị');
define('ALBUM_LIST_COLS', 'Số cột của 1 Album');
define('ALB_LIST_THUMB_SIZE', 'Kích thứơc 1 ThumbNails');
define('MAIN_PAGE_LAYOUT', 'Nội dung của trang chính');
define('FIRST_LEVEL', 'Hiển thị Album đầu tiên dạng thumbnails trong Phân loại');
define('THUMB_VIEW_TITLE', 'Xem dạng Thumbnail');
define('THUMBCOLS', 'Số cột Thumbnail 1 trang');
define('THUMBROWS', 'Số dòng thumbnail 1 trang');
define('MAX_TABS', 'Tối đa  tabs thể hiện');
define('CAPTION_IN_THUMBVIEW', 'Hiển thị thông tin về tấm hình phía dứơi mỗi tấm hình');
define('DISPLAY_COMMENT_COUNT', 'Hiển thị số lần nhận xét dưới mỗi tấm hình');
define('DEFAULT_SORT_ORDER', 'Sắp xếp theo thứ tự hay như mặc định');
define('MIN_VOTES_FOR_RATING', 'Tối thiểu số lần đánh giá  1 tấm hình để đựơc xuất hiện trên danh sách đựơc đánh giá cao');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'Xem hình &amp; Lời nhận xét');
define('PICTURE_TABLE_WIDTH', 'Chiếu ngang cho 1 tấm hình hiển thị (pixels hay %)');
define('DISPLAY_PIC_INFO', 'Thông tin hình hiển thị như mặc định');
define('FILTER_BAD_WORDS', 'Lọc từ ngữ trong phần nhận xét');
define('ENABLE_SMILIES', 'Cho phép hiển thị Icon cừơi trong nhận xét ?');
define('DISABLE_FLOOD_PROTECTION', 'Allow several consecutive comments on one pic from the same user');
define('COMMENT_EMAIL_NOTIFICATION', 'Email site admin upon comment submission');
define('MAX_IMG_DESC_LENGTH', 'Độ dài cho lời miêu tả tấm hình');
define('MAX_COM_WLENGTH', 'Tối đa ký tự trong 1 từ');
define('MAX_COM_LINES', 'Tối đa số dòng trong lời nhận xét');
define('MAX_COM_SIZE', 'Tối đa 1 lời nhận xét');
define('DISPLAY_FILM_STRIP', 'Hiển thị như là hình 1 phim');
define('MAX_FILM_STRIP_ITEMS', 'Số hình ');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', 'Hình và Thumnail');
define('JPEG_QUAL', 'Chất lượng JPEG files');
define('THUMB_WIDTH', 'Kích thứơc cao nhất 1 thumnail <b>*</b>');
define('THUMB_USE', 'Kích thứơc bề ngoài Thumnail<b>*</b>');
define('MAKE_INTERMEDIATE', 'Tạo hình trung gian');
define('PICTURE_WIDTH', 'Tối đa chiều rộng hay cao 1 hình trung gian<b>*</b>');
define('MAX_UPL_SIZE', 'Dung lựơng tối đa 1 tấm hình đựơc tải lên(KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Tối đa kích thứơc 1 tấm hình đựơc tải lên');
define('USER_SETTING_TITLE', 'Ngừơi dùng');
define('ALLOW_USER_REGISTRATION', 'Cho phép ngừơi dùng đăng ký');
define('REG_REQUIRES_VALID_EMAIL', 'Khi đăng ký ngừơi dùng cần phải kích hoạt mail');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Cho phép trùng mail khi đăng ký');
define('ALLOW_PRIVATE_ALBUMS', 'Ngừơi dùng đựơc tạo Album riêng');
define('CUSTOM_FIELDS_TITLE', 'Chỉnh sửa chỗ điền lời mô tả cho tấm (bỏ trắng nếu không thích)');
define('USER_FIELD1_NAME', 'Phần 1 tên ');
define('USER_FIELD2_NAME', 'Phần 2 tên');
define('USER_FIELD3_NAME', 'Phần 3 tên');
define('USER_FIELD4_NAME', 'Phần 4 tên');
define('PIC_ADV_SETTING_TITLE', 'Chỉnh sửa chi tiết hơn Hình và Thumnail');
define('SHOW_PRIVATE', 'Hiển thị Album riêng cho ngừơi chưa đăng nhập ?');
define('FORBIDEN_FNAME_CHAR', 'Ký tự bị ngăn cấm');
define('ALLOWED_FILE_EXTENSIONS', 'Chấp nhận cho file mở rộng khi tải hình lên?');
define('THUMB_METHOD', 'Phương thức chỉnh sửa kích thứơc hình');
define('IMPATH', 'Đừơng dẫn\'convert\' tiện ích(ví dụ như /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Cho phép hình có đuôi dạng (chí có tác dụng khi dùng ImageMagick)');
define('IM_OPTIONS', 'Dòng lệnh tùy chọn  cho  ImageMagick');
define('READ_EXIF_DATA', 'Đọc EXIF dữ liệu trong JPEG files');
define('READ_ITPC_DATA', 'Đọc ITPC dữ liệu trong JPEG files');
define('FULLPATH', 'Đừơng dẫn Album <b>*</b>');
define('USERPICS', 'Đừơng dẫn đến nơi lưu giữ hình của User <b>*</b>');
define('NORMAL_PFX', 'Ký tự phía trứơc tên của mỗi file hình mở rộng  <b>*</b>');
define('THUMB_PFX', 'Ký tự phía trứơc mỗi thumnail <b>*</b>');
define('DEFAULT_DIR_MODE', 'Chế độ mặc định cho đừơng dẫn');
define('DEFAULT_FILE_MODE', 'Chế độ mặc định cho hình ');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', 'Cookies &amp; Charset ');
define('COOKIE_NAME', 'Tên của cookie');
define('COOKIE_PATH', 'Đừơng dẫn của cookie');
define('CHAR_SET', 'Kiểu mã hoá ký tự (charset)');
define('MISC_SETTING_TITLE', 'Linh tinh');
define('DEBUG_MODE', 'Cho phép chế độ báo lỗi');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) Những dòng có * không đựơc thay đổi khi hình đã có trong Album rồi</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Bạn cần viết tên và lời nhận xét vào');
define('COM_ADDED', 'Lời nhận xét đựơc chấp nhận');
define('ALB_NEED_TITLE', 'Bạn cần đặt tên cho Album!');
define('NO_UDP_NEEDED', 'Không cần sự cập nhật');
define('ALB_UPDATED', 'Album đựơc cập nhật!');
define('UNKNOWN_ALBUM', 'Album vừa chọn không có hoặc là bạn không có quyền để tải hình lên ở album này rồi ');
define('NO_PIC_UPLOADED', 'Không có hình nào đựơc tải lên cả!!<br /><br />Bạn coi lại xem tấm hình tải lên server này có hợp yêu cầu chưa ?');
define('ERR_MKDIR', 'Lỗi khi tạo đừơng dẫn %s !');
define('DEST_DIR_RO', 'Đừơng dẫn đến %s không thể truy cập  !');
define('ERR_MOVE', 'Không thể di chuyển %s đến %s !');
define('ERR_FSIZE_TOO_LARGE', 'Kích thứơc của tấm hình bạn tải lên quá lớn so với qui định (tối đa là %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Dung lượng file bạn tải lên quá lớn so với qui định (tối đa là %s KB) !');
define('ERR_INVALID_IMG', 'File bạn muốn tải lên đâu phải là hình ảnh !');
define('ALLOWED_IMG_TYPES', 'Chỉ đựơc phép tải  hình %s ');
define('ERR_INSERT_PIC', 'Hình \'%s\' không thể đựơc chèn vào Album ');
define('UPLOAD_SUCCESS', 'Hình của bạn đã đựơc tải lên thành công !<br /><br />Nó sẽ đựơc hiển thị khi Ban Quản Trị ch phép');
define('INFO', 'Thông tin');
define('ERR_COMMENT_EMPTY', 'Nhận xét của bạn trống!');
define('ERR_INVALID_FEXT', 'Chỉ có các loại file với đuôi sau đây đựơc chấp nhận : <br /><br />%s.');
define('NO_FLOOD', 'Xin lôi, bạn đã là tác giả của lời nhận xét hình nà rồi <br /><br />Sửa lại nhận xét này nếu bạn muốn !');
define('REDIRECT_MSG', 'Chúng tôi sẽ chuyển bạn đến<br /><br /><br />Click \'CONTINUE\' nếu trang này không tự động');
define('UPL_SUCCESS', 'Chúc mừng, hình của bạn đã đựơc tải lên thành công');

// lang_delete_php
define('CAPTION', 'Mô tả');
define('FS_PIC', 'Kích thứơc hình');
define('DEL_SUCCESS', 'Xoá thành công!');
define('NS_PIC', 'kích thứơc hình bình thừơng');
define('ERR_DEL', 'không thể xóa');
define('THUMB_PIC', 'thumbnail');
define('COMMENT', 'nhận xét');
define('IM_IN_ALB', 'hình trong album');
define('ALB_DEL_SUCCESS', 'Album \'%s\' đã bị xoá');
define('ALB_MGR', 'Quản lý Album ');
define('ERR_INVALID_DATA', 'Dữ liệu không đúng ở \'%s\'');
define('CREATE_ALB', 'Đang tạo Album \'%s\'');
define('UPDATE_ALB', 'Đang cập nhật Album \'%s\' với tựa \'%s\' và chỉ mục \'%s\'');
define('DEL_PIC', 'Xoá hình');
define('DEL_ALB', 'Xoá Album');
define('DEL_USER', 'Xoá User');
define('ERR_UNKNOWN_USER', 'User này không tồn tại!');
define('COMMENT_DELETED', 'Nhận xét đã bị xóa bỏ');

// lang_display_image_php
define('CONFIRM_DEL', 'Có chắc chắn xóa hình này kô ? \\nNhận xét cũng sẽ bí xoá');
define('DEL_PIC', 'XOÁ HÌNH NÀY');
define('SIZE', '%s x %s pixels');
define('VIEWS', '%s lần');
define('SLIDESHOW', 'lứơt qua');
define('STOP_SLIDESHOW', 'Dừng lại');
define('VIEW_FS', 'Clik vào để xem hình to hơn');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('TITLE', 'thông tin hình');
define('FILENAME', 'Tên file');
define('ALBUM NAME', 'tên Album');
define('RATING', 'Đánh giá (%s lần)');
define('KEYWORDS', 'Từ khoá');
define('FILE SIZE', 'Dung lựơng file');
define('DIMENSIONS', 'Kích cỡ');
define('DISPLAYED', 'Đã hịiển thị');
define('CAMERA', 'Camera');
define('DATE TAKEN', 'Date taken');
define('APERTURE', 'Độ mở');
define('EXPOSURE TIME', 'Exposure time');
define('FOCAL LENGTH', 'Focal length');
define('COMMENT', 'Nhận xét');
define('ADDFAV', 'Thêm vào phần yêu thích');
define('ADDFAVPHRASE', 'Yêu thích');
define('REMFAV', 'Xoá khỏi phần yêu thích');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'Sửa lời nhận xét này');
define('CONFIRM_DELETE', 'Có chắc là muốn xoá nhận xét này không  ?');
define('ADD_YOUR_COMMENT', 'Thêm nhận xét vào');
define('NAME', 'Tên');
define('COMMENT', 'Nhận xét');
define('YOUR_NAME', 'nặc danh');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Click vào hình để đóng cửa sổ này');

// lang_ecard_php
define('TITLE', 'Gửi an e-card');
define('INVALID_EMAIL', '<b>Cảnh báo</b> : địa chỉ mail không hợp lý !');
define('ECARD_TITLE', 'thiệp từ %s cho bạn');
define('VIEW_ECARD', 'nếu tấm thiệp này không hiển thị đúng thì hãy click vào đây');
define('VIEW_MORE_PICS', 'Click vào đây để có thể xem nhiều hình hơn');
define('SEND_SUCCESS', 'thiệp của bạn đã đựơc gửi');
define('SEND_FAILED', 'Xin lỗi, server không thể gửi thiệp của bạn đi đựơc');
define('FROM', 'Từ');
define('YOUR_NAME', 'Tên của bạn');
define('YOUR_EMAIL', 'Mail của bạn');
define('TO', 'Đến');
define('RCPT_NAME', 'tên ngừơi nhận');
define('RCPT_EMAIL', 'Mail của ngừơi nhận');
define('GREETINGS', 'lời chào');
define('MESSAGE', 'Nội dung chúc');

// lang_editpics_php
define('PIC_INFO', 'Hình&nbsp;thông tin');
define('ALBUM', 'Album');
define('TITLE', 'Tựa đề');
define('DESC', 'Mô tả');
define('KEYWORDS', 'Từ khoá');
define('PIC_INFO_STR', '%sx%s - %sKB - %s lần xem - %s lần đánh giá');
define('APPROVE', 'chấp nhận hình');
define('POSTPONE_APP', 'khoan chấp nhận');
define('DEL_PIC', 'Xoá hình');
define('RESET_VIEW_COUNT', 'trả lại số lần xem');
define('RESET_VOTES', 'trả lại số lần đánh giá');
define('DEL_COMM', 'Xóa nhận xét');
define('UPL_APPROVAL', 'cho phép tải lên');
define('EDIT_PICS', 'Sửa hình');
define('SEE_NEXT', 'Xem hình kế tiếp');
define('SEE_PREV', 'Xem hình trứơc');
define('N_PIC', '%s hình');
define('N_OF_PIC_TO_DISP', 'Số hình đựơc hiển thị');
define('APPLY', 'Cập nhật thay đổi này');

// lang_groupmgr_php
define('GROUP_NAME', 'tên nhóm');
define('DISK_QUOTA', 'Dung lựơng đĩa');
define('CAN_RATE', 'Có thể đánh giá hình');
define('CAN_SEND_ECARDS', 'Có thể gửi thiệp');
define('CAN_POST_COM', 'Có thể viết nhận xét');
define('CAN_UPLOAD', 'Có thể tải hình lên');
define('CAN_HAVE_GALLERY', 'Có góc cá nhân riêng');
define('APPLY', 'Cập nhật thay đổi này');
define('CREATE_NEW_GROUP', 'Tạo nhóm mới');
define('DEL_GROUPS', 'Xoá các nhóm đã chọn');
define('CONFIRM_DEL', 'Chú ý, khi xoá 1 nhóm thì các thành viên trong nhóm này sẽ đựơc chuyển đến nhóm \'Registered\' !\\n\\n Bạn có muốn tiến hành ?');
define('TITLE', 'Điều khiển nhóm');
define('APPROVAL_1', 'Pub. Upl. chấp nhận (1)');
define('APPROVAL_2', 'Priv. Upl. chấp nhận (2)');
define('NOTE1', '<b>(1)</b> đựơc tải hỉnh lên chỗ cần đựơc Ban Quản Trị đồng ý ');
define('NOTE2', '<b>(2)</b> đựơc upload lên nơi mà user cần Ban Quản Tri cho phép');
define('NOTES', 'Ghi chú');

// lang_index_php
define('WELCOME', 'Chào mừng !');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Có chắc là bạn muốn xóa Album này  ? \\n Tất cả hình và nhận xét cũng sẽ bị xoá.');
define('DELETE', 'XÓA');
define('MODIFY', 'THUỘC TÍNH');
define('EDIT_PICS', 'SỬA HÌNH');

// lang_list_categories
define('HOME', 'Trang chủ');
define('STAT1', '<b>[pictures] </b> hình trong <b>[albums]</b> album và <b>[cat]</b> Phân loại với <b>[comments]</b> nhận xét, xem <b>[views]</b> lần');
define('STAT2', '<b>[pictures]</b> hình trong <b>[albums]</b> album đựơc xem <b>[views]</b> lần');
define('XX_S_GALLERY', 'hình của %s\\ ');
define('STAT3', '<b>[pictures]</b> hình trong <b>[albums]</b> album với <b>[comments]</b> nhận xét, đựơc xem <b>[views]</b> lần');

// lang_list_users
define('USER_LIST', 'Danh sách ngừơi dùng');
define('NO_USER_GAL', 'Không có hình ngừơi dùng');
define('N_ALBUMS', '%s album');
define('N_PICS', '%s hình');

// lang_list_albums
define('N_PICTURES', '%s hình');
define('LAST_ADDED', ', lần cuối thêm vào: %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Cập nhật album %s');
define('GENERAL_SETTINGS', 'Chung chung');
define('ALB_TITLE', 'tựa đề Album');
define('ALB_CAT', 'phân loại Album ');
define('ALB_DESC', 'mô tả Album');
define('ALB_THUMB', 'Album thumbnail');
define('ALB_PERM', 'Quyền hạn cho Album này');
define('CAN_VIEW', 'Album này có thể đựơc xem bởi');
define('CAN_UPLOAD', 'Khách có thể tải hình lên');
define('CAN_POST_COMMENTS', 'Khách có thể nhận xét');
define('CAN_RATE', 'Khách có thể đánh giá hình');
define('USER_GAL', 'hình của ngừơi dùng');
define('NO_CAT', '* Không có phân loại *');
define('ALB_EMPTY', 'Album trống');
define('LAST_UPLOADED', 'Cập nhật lần cuối');
define('PUBLIC_ALB', 'Tất cả mọi người (album công cộng)');
define('ME_ONLY', 'Chỉ riêng tôi');
define('OWNER_ONLY', 'chỉ chủ của Album (%s)');
define('GROUPP_ONLY', 'Thành vien nhóm \'%s\' ');
define('ERR_NO_ALB_TO_MODIFY', 'không có album nào bạn có thể thay đổi trong dữ liệu.');
define('UPDATE', 'Cập nhật album');

// lang_rate_pic_php
define('ALREADY_RATED', 'Xin lỗi, bạn đã đánh giá hình này 1 lần rồi');
define('RATE_OK', 'Cám ơn bạn đã đánh giá');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'Trong khi Ban Quản Trị của {SITE_NAME} will attempt to remove or edit any generally objectionable material as quickly as possible, it is impossible to review every post. Therefore you acknowledge that all posts made to this site express the views and opinions of the author and not the administrators or webmaster (except for posts by these people) and hence will not be held liable.<br />
<br />
You agree not to post any abusive, obscene, vulgar, slanderous, hateful, threatening, sexually-orientated or any other material that may violate any applicable laws. You agree that the webmaster, administrator and moderators of {SITE_NAME} have the right to remove or edit any content at any time should they see fit. As a user you agree to any information you have entered above being stored in a database. While this information will not be disclosed to any third party without your consent the webmaster and administrator cannot be held responsible for any hacking attempt that may lead to the data being compromised.<br />
<br />
This site uses cookies to store information on your local computer. These cookies serve only to improve your viewing pleasure. The email address is used only for confirming your registration details and password.<br />
<br />
Nếu đồng ý bạn vui lòng click vào  \'I agree\' dứơi đây.');

// lang_register_php
define('PAGE_TITLE', 'Đăng ký làm thành viên');
define('TERM_COND', 'Nội qui');
define('I_AGREE', 'tôi đồng ý');
define('SUBMIT', 'Gửi thông tin đăng ký đi');
define('ERR_USER_EXISTS', 'Tên bạn đăng ký đã có ngừơi sử dụng, vui lòng chọn 1 cái khac ');
define('ERR_PASSWORD_MISMATCH', 'Mật khuẩu bạn nhập 2 lần không trùng nhau, điền lại.');
define('ERR_UNAME_SHORT', 'Tên tối thiểu phải 2 ký tự trở lên');
define('ERR_PASSWORD_SHORT', 'Mật khẩu phải trên 2 ký tự');
define('ERR_UNAME_PASS_DIFF', 'Tên và mật khẩu không đựơc giống nhau');
define('ERR_INVALID_EMAIL', 'Email không hợp lý');
define('ERR_DUPLICATE_EMAIL', 'Tài khoản khác đã xài Mail này rồi, bạn vui lòng dùng cai khác');
define('ENTER_INFO', 'Điền thông tin đăng ký');
define('REQUIRED_INFO', 'Thông tin bắt buộc phải điền');
define('OPTIONAL_INFO', 'Thông tin thêm');
define('USERNAME', 'Tên');
define('PASSWORD', 'Mật khẩu');
define('PASSWORD_AGAIN', 'Nhập lại mật khẩu');
define('EMAIL', 'Email');
define('LOCATION', 'Nơi đang sống');
define('INTERESTS', 'Yêu thích');
define('WEBSITE', 'website riêng cua bạn');
define('OCCUPATION', 'Công việc');
define('ERROR', 'LỖi');
define('CONFIRM_EMAIL_SUBJECT', '%s - Thông tin đăng ký');
define('INFORMATION', 'Thông tin');
define('FAILED_SENDING_EMAIL', 'Không thể gửi bản đang ký này đến mail đựơc!');
define('THANK_YOU', 'Cám ơn bạn đã đăng ký.<br /><br />Một eMail với thông tin hứơng dẫn bạn kích hoạt tài khoản của bạn  đã đựoc gửi đến mail mà bạn đã cung cấp cho chúng tôi.');
define('ACCT_CREATED', 'OK, tài khoản của bạn đã đựơc kích hoạt, bây giờ bạn có thể đăng nhập với Tên và mật khẩu của bạn');
define('ACCT_ACTIVE', 'Hãy đăng nhập với Tên và mật khẩu của bạn');
define('ACCT_ALREADY_ACT', 'Tài khoản đã đựơc kích hoạt!');
define('ACCT_ACT_FAILED', 'Tài khoản này không thể đựơc kích hoạt!');
define('ERR_UNK_USER', 'Tài khoản này không tồn tại!');
define('X_S_PROFILE', 'thông tin của %s ');
define('GROUP', 'nhóm');
define('REG_DATE', 'tham gia từ');
define('DISK_USAGE', 'dung lựơng');
define('CHANGE_PASS', 'Thay đổi mật khẩu');
define('CURRENT_PASS', 'Mật khẩu hiện tại');
define('NEW_PASS', 'Mật khẩu mới');
define('NEW_PASS_AGAIN', 'Nhập lại mật khẩu mới 1 lần nữa');
define('ERR_CURR_PASS', 'Mật khẩu hiện thời bạn nhập không chính xác');
define('APPLY_MODIF', 'Cập nhật thay đổi');
define('UPDATE_SUCCESS', 'Thông tin của bạn đã đựơc chỉnh sửa');
define('PASS_CHG_SUCCESS', 'Mật khẩu đã đựơc thay đổi');
define('PASS_CHG_ERROR', 'Mật khẩu của bạn không đựơc thay đổi');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Cám ơn bạn đã đăng ký với chúng tôi tại {SITE_NAME}

Tên tà khoản của bạn là : "{USER_NAME}" 
Mật khẩu là : "{PASSWORD}"

Để kích hoạt tài khoản, bạn cần click vào link sau .

{ACT_LINK}

thân,

ban quản trị {SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', 'xem lại nhận xét');
define('NO_COMMENT', 'Không có nhận xét nào để xem cả');
define('N_COMM_DEL', '%s nhận xét bị xoá');
define('N_COMM_DISP', 'Số nhận xét đựơc hiển thị');
define('SEE_PREV', 'Xem nhận xét trứơc');
define('SEE_NEXT', 'Xem nhận xét sau');
define('DEL_COMM', 'Xóa nhận xét đã chọn');

// lang_search_php
define('SEARCH', 'Tìm kiếm hình tổng hợp');

// lang_search_new_php
define('PAGE_TITLE', 'Tìm hình mới');
define('SELECT_DIR', 'Chọn đừơng dẫn');
define('SELECT_DIR_MSG', 'Chức năng này cho phép bạn thêm đừơng dẫn của hình mà đã đựơc tải lên  server bằng FTP.<br /><br />Chọn đừơng dẫn mà bạn muốn tải hình lên');
define('NO_PIC_TO_ADD', 'Không có hình để thêm vào');
define('NEED_ONE_ALBUM', 'Bạn phải có ít nhất 1 album để xài chức năng này');
define('WARNING', 'Cảnh báo');
define('CHANGE_PERM', 'tkhông thể chép vào thư mục này, cần phải Chmod là 755 hay 777 !');
define('TARGET_ALBUM', '<b>Đặt hình của  &quot;</b>%s<b>&quot; vào </b>%s');
define('FOLDER', 'Thư mục');
define('IMAGE', 'Hình');
define('ALBUM', 'Album');
define('RESULT', 'Kết quả');
define('DIR_RO', 'Không thể chỉnh sửa');
define('DIR_CANT_READ', 'Không thể xem');
define('INSERT', 'Thêm hình vào');
define('LIST_NEW_PIC', 'Danh sách hình mới');
define('INSERT_SELECTED', 'Chèn hình đã chọn');
define('NO_PIC_FOUND', 'Không tìm thấy hình mơi nào cả');
define('BE_PATIENT', 'Please be patient, the script needs time to add the pictures');
define('NOTES', '<ul><li><b>OK</b> : hình đã đựơc thêm vào<li><b>DP</b> : hình này trùng lặp và đã có trong cơ sở dữ liệu<li><b>PB</b> : hình của bạn không thể đựơc thêm vào, kiểm tra lại cấu hình hoặc quyền.<li>Nếu OK, DP, PB \'signs\' không xuất hiện thì click vào hình để PHP thông báo lỗi gặp phải<li>Nếu web bị đứng, bấm F5 hoặc refresh</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('TITLE', 'Tải hình lên');
define('MAX_FSIZE', 'Dung lựơng tối đa cho phép là %s KB');
define('ALBUM', 'Album');
define('PICTURE', 'Hình');
define('PIC_TITLE', 'Tựa đề hình');
define('DESCRIPTION', 'Mô tả hình');
define('KEYWORDS', 'Từ khoá');
define('ERR_NO_ALB_UPLOADABLES', 'Không có Album đó');

// lang_usermgr_php
define('TITLE', 'Quản lý ngừơi dùng');
define('NAME_A', 'Tên tăng dần');
define('NAME_D', 'Tên giảm dần');
define('GROUP_A', 'Nhóm tăng dần');
define('GROUP_D', 'Nhóm giảm dần');
define('REG_A', 'Ngày tham gia tăng dần');
define('REG_D', 'Ngày tham gia giảm dần');
define('PIC_A', 'Số hình tăng');
define('PIC_D', 'Số hình giảm');
define('DISKU_A', 'Dung lựơng tăng');
define('DISKU_D', 'Dung lương giảm');
define('SORT_BY', 'Sắp xếp ngừơi dùng theo');
define('ERR_NO_USERS', 'Bảng quản lý ngừơi dùng trống !');
define('ERR_EDIT_SELF', 'Bạn không thể tự mình thay đổi thông tin cá nhân, sử dụng  \'My profile\' để làm');
define('EDIT', 'THAY ĐỔI');
define('DELETE', 'XOÁ');
define('NAME', 'tên tài khoản');
define('GROUP', 'Nhóm');
define('INACTIVE', 'không hoạt động');
define('OPERATIONS', 'Hệ điều hành');
define('PICTURES', 'hình');
define('DISK_SPACE', 'Dung lượng cho phép xài');
define('REGISTERED_ON', 'Đăng kí');
define('U_USER_ON_P_PAGES', '%d ngừơi trên %d trang');
define('CONFIRM_DEL', 'Chắc chắn xoá tài khoản này chứ ? \\n Tất cả hình, nhận xét của họ cũng sẽ bị xoá.');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'Tài khoản này không tồn tại!');
define('MODIFY_USER', 'Sửa đổi');
define('NOTES', 'ghi chú');
define('NOTE_LIST', '<li>Nếu không muốn thay đổi mật khẩu thì để trống.');
define('PASSWORD', 'Mật khẩu');
define('USER_ACTIVE', 'Tài khoản này đựơc kích hoạt');
define('USER_GROUP', 'Nhóm');
define('USER_EMAIL', 'email');
define('USER_WEB_SITE', 'website ');
define('CREATE_NEW_USER', 'Tạo tài khoản mới');
define('USER_LOCATION', 'Nơi cư ngụ');
define('USER_INTERESTS', 'Việc làm');

// lang_util_php
define('TITLE', 'Chỉnh kích cỡ hình');
define('WHAT_IT_DOES', 'Nó là cái gì');
define('WHAT_UPDATE_TITLES', 'Sửa tự đề từ tên file tải lên');
define('WHAT_DELETE_TITLE', 'Xoá tựa đề');
define('WHAT_REBUILD', 'Chỉnh lại thumbnail và kích cỡ hình');
define('WHAT_DELETE_ORIGINALS', 'Xoá dung lựơng cũ và thay thế với dung lương mới ');
define('FILE', 'File');
define('TITLE_SET_TO', 'đặt tên cho');
define('SUBMIT_FORM', 'Gửi đi');
define('UPDATED_SUCCESFULLY', 'Cập nhật thành công');
define('ERROR_CREATE', 'LỖI !');
define('CONTINUE', 'xử lý thêm hình');
define('MAIN_SUCCESS', 'File %s đựơc dùng như hình chính');
define('ERROR_RENAME', 'Lỗi trong khoảng  %s đến %s');
define('ERROR_NOT_FOUND', 'File %s không tìm thấy');
define('BACK', 'Trở về trang chính');
define('THUMBS_WAIT', 'Đang chỉnh sửa, vui lòng chờ ...');
define('THUMBS_CONTINUE_WAIT', 'Tiếp tục chỉnh sửa ...');
define('TITLES_WAIT', 'Sửa tên, vui lòng chờ ...');
define('DELETE_WAIT', 'Xoá tên,  vui lòng chờ ...');
define('REPLACE_WAIT', 'Sửa, xoá dung lựơng cũ, thay với dung lương mới, vui lòng chờ ...');
define('INSTRUCTION', 'Tài liệu nhanh');
define('INSTRUCTION_ACTION', 'Chọn hoạt động');
define('INSTRUCTION_PARAMETER', 'Chọn thông số');
define('INSTRUCTION_ALBUM', 'chọn album');
define('INSTRUCTION_PRESS', 'Nhấn %s');
define('UPDATE', 'Đang xử lý');
define('UPDATE_WHAT', 'Cái gì cần cập nhật');
define('UPDATE_THUMB', 'Chỉthumbnails');
define('UPDATE_PIC', 'Chỉ chỉnh dung lượng hình');
define('UPDATE_BOTH', 'Cả thumbnails và dung lượng hình');
define('UPDATE_NUMBER', 'Số lần thực thi sau mỗi lần click');
define('UPDATE_OPTION', '(giảm nó xuống nếu bạn gặp vấn đề về timeout)');
define('FILENAME_TITLE', 'Tên file &rArr; Tựa đề hình');
define('FILENAME_HOW', 'Làm sao để đổi tên file');
define('FILENAME_REMOVE', 'xoá file .jpg và thay thế  _ với  khoảng trống');
define('FILENAME_EURO', 'Thay 2003_11_23_13_20_20.jpg bằng 23/11/2003 13:20');
define('FILENAME_US', 'Thay 2003_11_23_13_20_20.jpg bằng 11/23/2003 13:20');
define('FILENAME_TIME', 'Thay 2003_11_23_13_20_20.jpg thành 13:20');
define('DELETE', 'Thay tên hình hoặc dung lượng của hình');
define('DELETE_TITLE', 'Xoá tên hình');
define('DELETE_ORIGINAL', 'Xoá dung lượng hình');
define('DELETE_REPLACE', 'Xoá dung lượng cũ của hình và thay thế với cái mới');
define('SELECT_ALBUM', 'Chọn album');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>
