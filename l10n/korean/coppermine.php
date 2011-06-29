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
  $Source: /cvs/l10n/korean/coppermine.php,v $
  $Revision: 9.5 $
  $Author: djmaze $
  $Date: 2006/02/12 16:02:02 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', '본 횟수');//new in 1.2.2nuke
define('PIC_VOTES', '투표수');//new in 1.2.2nuke
define('PIC_COMMENTS', '의견 개진');//new in 1.2.2nuke

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Korean');
define('LANG_NAME_NATIVE', '한국어');
define('LANG_COUNTRY_CODE', 'kr');
define('TRANS_NAME', 'cholong');
define('TRANS_EMAIL', 'shanghi@nukekorea.net');
define('TRANS_WEBSITE', 'http://21cmiso.pe.kr');
define('TRANS_DATE', '2005-02-02');
define('CHARSET', 'UTF-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', '예');
define('NO', '아니오');
// some common strings
define('BACK', '뒤로');
define('CONTINU', '다음');
define('INFO', '안내');
//define('_ERROR', 'Error'); //already in main lang file
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%m/%d/%y @ %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y @ %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y @ %I:%M %p');

// lang_meta_album_names
define('RANDOM', '포토뉴스 갤러리');
define('LASTUP', '최근 이미지');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', '최근 수정된 앨범');
define('LASTCOM', '최근 코멘트');
define('LASTCOMBY', 'My Last comments');
define('TOPN', '최다 조회');
define('TOPRATED', '최고 평점');
define('LASTHITS', '마지막 조회');
define('SEARCH', '검색 결과');
define('FAVPICS', '좋아하는 사진');

// lang_errors
define('ACCESS_DENIED', '회원님의 권한으로 이페지를 보실 수 없습니다. 관리자에게 문의하세요.');
define('PERM_DENIED', '회원님의 권한으로 실행할 수 없는 명령입니다.');
define('PARAM_MISSING', '필수항목을 확인하세요.');
define('NON_EXIST_AP', '선택한 앨범이나 이미지가 존재하지 않습니다 !');
define('QUOTA_EXCEEDED', '할당용량 초과,<br /><br />할당된 디스크[quota]K, 사용가능한 용량[space]K, 할당용량 초과로 업로드할 수 없음.');
define('GD_FILE_TYPE_ERR', 'JPEG와 PNG파일만 지원됨.');
define('INVALID_IMAGE', '비정상 파일 또는 갤러리에서 지원되지않는 파일입니다.');
define('RESIZE_FAILED', '썸네일이 생성되지 않았습니다.혹은 사진크기를 바꿀 수 없습니다.');
define('NO_IMG_TO_DISPLAY', '표시할 이미지가 없습니다.');
define('NON_EXIST_CAT', '선택한 카테고리는 존재하지 않습니다.');
define('ORPHAN_CAT', '상위 카테고리가 존재하지않습니다. 관리자에게 문의하세요.');
define('DIRECTORY_RO', '폴더 \'%s\' 에 쓰기를 할 수 없습니다. 사진을 지울 수 없습니다.');
define('NON_EXIST_COMMENT', '선택한 코멘트는 존재하지 않습니다.');
define('PIC_IN_INVALID_ALBUM', '존재하지않는 앨범이미지(%s)!?');
define('BANNED', '귀하는 지금 이사이트의 사용금지자명단에 있습니다.');
define('NOT_WITH_UDB', '이기능을 쿠퍼마인에서 사용할 수 없습니다. 이기능은 포럼소프트웨어에 포함이 되어 있기 때문입니다.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');
define('NO_IMG_TO_APPROVE', 'No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE', '앨범목록으로');
define('ALB_LIST_LNK', '앨범목록');
define('MY_GAL_TITLE', '개인갤러리로');
define('MY_GAL_LNK', '개인갤러리');
define('MY_PROF_LNK', '개인정보');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', '관리모드로 전환');
define('ADM_MODE_LNK', '관리모드');
define('USR_MODE_TITLE', '일반모드로 전환');
define('USR_MODE_LNK', '일반모드');
define('UPLOAD_PIC_TITLE', '앨범에 이미지 업로드');
define('UPLOAD_PIC_LNK', '이미지업로드');
define('REGISTER_TITLE', '계정생성');
define('REGISTER_LNK', '회원등록');
define('LOGIN_LNK', '로그인');
define('LOGOUT_LNK', '로그아웃');
define('LASTUP_LNK', '최근이미지');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK', '최근코멘트');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', '최다조회');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK', '최고평점');
define('SEARCH_TITLE', 'Search Photo Collection');
define('SEARCH_LNK', '검색');
define('FAV_TITLE', 'My Favorites');
define('FAV_LNK', '즐겨찾기');
define('HELP_TITLE', 'HELP');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', '업로드승인');
define('CONFIG_LNK', '환경설정');
define('ALBUMS_LNK', '앨범관리');
define('CATEGORIES_LNK', '카테고리관리');
define('USERS_LNK', '회원관리');
define('GROUPS_LNK', '그룹관리');
define('COMMENTS_LNK', '코멘트관리');
define('SEARCHNEW_LNK', 'FTP업로드파일연결');
define('UTIL_LNK', '이미지크기 수정');
define('BAN_LNK', '사용금지자');

// lang_user_admin_menu
define('ALBMGR_LNK', '개인앨범 생성 및 관리');
define('MODIFYALB_LNK', '개인앨범 수정');
//define('MY_PROF_LNK', '개인정보');

// lang_cat_list
define('CATEGORY', '카테고리');
define('ALBUMS', '앨범');
//define('PICTURES', 'Pictures');

// lang_album_list
define('ALBUM_ON_PAGE', '앨범 %d 페이지 %d');
// lang_thumb_view
define('DATE', '일자');
define('NAME', '파일이름');
define('TITLE', '제목');
define('SORT_DA', '일자순 순차배열');
define('SORT_DD', '일자순 역차배열');
define('SORT_NA', '이름순 순차배열');
define('SORT_ND', '이름순 역차배열');
define('SORT_TA', '제목순 순차배열');
define('SORT_TD', '제목순 역차배열');
define('PIC_ON_PAGE', '사진: %d 페이지: %d');
define('USER_ON_PAGE', '사용자: %d 페이지: %d');
define('SORT_RA', 'Sort by rating ascending');
define('SORT_RD', 'Sort by rating descending');
define('THUMB_RATING', 'RATING');
define('SORT_TITLE', 'Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE', '목록으로 돌아가기');
define('PIC_INFO_TITLE', '상세정보 보기/숨기기');
define('SLIDESHOW_TITLE', '슬라이드쇼');
define('SLIDESHOW_DISABLED', 'Slideshow is disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', '이미지를 e-card로 보내기');
define('ECARD_DISABLED', 'e-card로 보내기 금지');
define('ECARD_DISABLED_MSG', 'e-card 보내기 권한없슴');
define('PREV_TITLE', '이전');
define('NEXT_TITLE', '다음');
define('PIC_POS', '등록 이미지 %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', '평가');
define('NO_VOTES', '(평가없음)');
define('RATING', '(현재평점 : %s / 5 평가횟수 %s 회)');
define('RUBBISH', '아주나쁨');
define('POOR', '나쁨');
define('FAIR', '보통');
define('GOOD', '좋음');
define('EXCELLENT', '아주좋음');
define('GREAT', '최상');

// lang_cpg_die
//define('INFORMATION', '안내');
//define('ERROR', '에러');
define('_CRITICAL_ERROR', '심각한 오류발생');
define('FILE', '파일: ');
define('LINE', '줄: ');

// lang_display_thumbnails
define('FILENAME', '파일이름 : ');
define('FILESIZE', '파일크기 : ');
define('DIMENSIONS', '가로,세로 : ');
define('DATE_ADDED', '등록일 : ');

// lang_get_pic_data
define('N_COMMENTS', '%s 코멘트');
define('N_VIEWS', '%s 조회');
define('N_VOTES', '(%s 투표)');


// lang_albmgr_php
define('ALB_NEED_NAME', '앨범이름이 필요합니다 !');
define('CONFIRM_MODIFS', '변경사항을 저장하시겠습니까 ?');
define('NO_CHANGE', '변경사항이 없습니다 !');
define('NEW_ALBUM', '새 앨범');
define('CONFIRM_DELETE1', '앨범을 삭제하시겠습니까 ?');
define('CONFIRM_DELETE2', '\\n앨범에 등록된 이미지와 코멘트를 모두 삭제합니다 !');
define('SELECT_FIRST', '먼저 앨범을 선택하세요');
define('ALB_MRG', '앨범관리');
define('MY_GALLERY', '* 개인앨범 *');
define('NO_CATEGORY', '* 최상위 카테고리(메인) *');
define('DELETE', '삭제');
define('NEW', '생성');
define('APPLY_MODIFS', '변경등록');
define('SELECT_CATEGORY', '카테고리 선택');

// lang_catmgr_php
define('MISS_PARAM', 'Parameters required for \'%s\'operation not supplied !');
define('UNKNOWN_CAT', '선택한 카테고리는 존재하지 않습니다.');
define('USERGAL_CAT_RO', '회원 갤러리는 삭제할 수 없습니다 !');
define('MANAGE_CAT', '카테고리관리');
define('CONFIRM_DELETE_CAT', '정말로 이 카테고리를 삭제하시겠습니까?');
//define('CATEGORY', '카테고리');
define('OPERATIONS', '실행메뉴');
define('MOVE_INTO', '카테고리 변경');
define('UPDATE_CREATE', '카테고리 생성/변경');
define('PARENT_CAT', '상위 카테고리');
define('CAT_TITLE', '카테고리 이름');
define('CAT_DESC', '카테고리 설명');

// lang_config_php
define('CONFIG_TITLE', '설정변경');
define('RESTORE_CFG', '기본설정으로');
define('SAVE_CFG', '변경사항저장');
define('NOTES', '노트');
//define('INFO', '정보');
define('UPD_SUCCESS', '변경사항이 적용되었습니다!');
define('RESTORE_SUCCESS', '기본설정으로 변경되었습니다');
define('NAME_A', '이름순 순차배열');
define('NAME_D', '이름순 역차배열');
define('TITLE_A', '제목순 순차배열');
define('TITLE_D', '제목순 역차배열');
define('DATE_A', '일자순 순차배열');
define('DATE_D', '일자순 역차배열');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Height');
define('TH_WD', 'Width');


// lang_db_input_php
define('EMPTY_NAME_OR_COM', '이름을 입력하세요.');
define('COM_ADDED', '코멘트 등록');
define('ALB_NEED_TITLE', '건전한 앨범 타이틀을 정하세요 !');
define('NO_UDP_NEEDED', '업데이트할 필요없슴.');
define('ALB_UPDATED', '앨범 수정');
define('UNKNOWN_ALBUM', '선택한 앨범이 없거나, 업로드할 권한이 관리자에 의해 제한되어있습니다.');
define('NO_PIC_UPLOADED', '업로드 이미지 없습니다 !<br /><br />서버에서 허용되는 이미지 파일을 업로드하세요.');
define('ERR_MKDIR', '%s 디렉토리 생성실패 !');
define('DEST_DIR_RO', '%s 디렉토리는 쓰기금지되어있습니다 !');
define('ERR_MOVE', '%s과 %s를 연결하지못했습니다 !');
define('ERR_FSIZE_TOO_LARGE', '사이즈초과(maximum %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', '용량초과 (maximum %s KB) !');
define('ERR_INVALID_IMG', '정당한 이미지만 업로드하십시오 !');
define('ALLOWED_IMG_TYPES', '%s 이미지만 업로드할 수 있습니다.');
define('ERR_INSERT_PIC', '\'%s\' 이미지는 앨범에 등록할 수 없습니다. ');
define('UPLOAD_SUCCESS', '이미지가 성공적으로 업로드 되었습니다.<br /><br />관리자의 승인후 게시됩니다.');
//define('INFO', '안내');
define('ERR_COMMENT_EMPTY', '코멘트 비어있슴 !');
define('ERR_INVALID_FEXT', 'Only files with the following extensions are accepted : <br /><br />%s.');
define('NO_FLOOD', '코멘트를 수정하거나 등록할 수 없습니다.');
define('REDIRECT_MSG', '\'다음\' 버튼을 누르기 전에 브라우저의 새로고침 버튼을 사용하지 마세요.');
define('UPL_SUCCESS', '이미지가 성공적으로 업로드되었습니다.');

// lang_delete_php
define('CAPTION', '캡션');
define('FS_PIC', '원본 이미지');
define('DEL_SUCCESS', '삭제되었습니다!');
define('NS_PIC', '전시를 위한 새이미지');
define('ERR_DEL', '삭제되지 않았습니다!!');
define('THUMB_PIC', '썸네일');
//define('COMMENT', '코멘트');
define('IM_IN_ALB', '앨범 이미지');
define('ALB_DEL_SUCCESS', '\'%s\' 앨범삭제');
define('ALB_MGR', '앨범관리');
define('ERR_INVALID_DATA', '\'%s\' 데이타 없습니다!');
define('CREATE_ALB', '\'%s\' 앨범생성');
define('UPDATE_ALB', '\'%s\' 앨범 업데이트 \'%s\' 이미지 \'%s\' 인덱스');
define('DEL_PIC', '이미지삭제');
define('DEL_ALB', '앨범삭제');
define('DEL_USER', '사용자삭제');
//define('ERR_UNKNOWN_USER', '선택한 사용자는 없습니다 !');
define('COMMENT_DELETED', '코멘트가 성공적으로 삭제되었습니다.');

// lang_display_image_php
define('PIC_CONFIRM_DEL', '이미지를 삭제하시겠습니까 ? \\n코멘트도 함께 삭제됩니다.');
define('DEL_THIS_PIC', '이미지삭제');
define('SIZE', '%s x %s pixels');
define('VIEWS', '%s times');
define('SLIDESHOW', '슬라이드쇼');
define('STOP_SLIDESHOW', '슬라이드쇼-정지');
define('VIEW_FS', '원본 이미지 보기');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('PIC_INF_TITLE', '사진 정보');
define('PIC_INF_FILENAME', '파일이름');
define('ALBUM_NAME', '앨범이름');
define('PIC_INFO_RATING', '평점 (%s 평가)');
define('KEYWORDS', '키워드');
define('PIC_INF_FILE_SIZE', '파일 크기');
define('PIC_INF_DIMENSIONS', 'Dimensions');
define('DISPLAYED', 'Displayed');
define('CAMERA', '카메라');
define('DATE_TAKEN', '촬영일자');
define('APERTURE', 'Aperture');
define('EXPOSURE_TIME', 'Exposure time');
define('FOCAL_LENGTH', 'Focal length');
define('COMMENT', '코멘트');
define('ADDFAV', '즐겨찾기에 추가');
define('ADDFAVPHRASE', '즐겨찾기');
define('REMFAV', '즐겨찾기에서 삭제');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');
define('REMOVEFAV', 'Removed from Favorites Album');
define('ADDEDTOFAV', 'Added to Favorites Album');

// lang_display_comments
define('OK', '등록');
define('COM_EDIT_TITLE', '코멘트 수정');
define('CONFIRM_DELETE_COM', '코멘트를 삭제하시겠습니까 ?');
define('ADD_YOUR_COMMENT', '코멘트 등록');
define('COM_NAME', '이름');
//define('COMMENT', '코멘트');
define('YOUR_NAME', '일지매');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', '화면닫기:이미지에 클릭');

// lang_ecard_php
define('E_TITLE', 'e-card 보내기');
define('INVALID_EMAIL', '<b>Warning</b> : 유효하지 않은 이메일입니다 !');
define('E_ECARD_TITLE', '%s님께서 보내신 e-card 입니다!');
define('VIEW_ECARD', '카드가 보이지않는 사용자께서는 이링크를 클릭하세요 !');
define('VIEW_MORE_PICS', '더 많은 이미지를 감상하시려면 클릭하세요 !');
define('SEND_SUCCESS', 'e-card를 보냈습니다!');
define('SEND_FAILED', '죄송합니다, e-card 발송에 실패하였습니다.');
define('FROM', 'e-card 작성폼');
define('_YOUR_NAME', '보내는 사람 이름');
define('YOUR_EMAIL', '보내는 사람 이메일');
define('TO', 'To');
define('RCPT_NAME', '받는 사람 이름');
define('RCPT_EMAIL', '받는 사람 이메일');
define('GREETINGS', '제목');
define('MESSAGE', '메세지');
define('ECARD_LINK_CORRUPT', 'Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser'); //NEW

// lang_editpics_php
define('PIC_INFO', '이미지 상세정보');
define('ALBUM', '앨범');
define('EDIT_TITLE', '이미지 제목');
define('DESC', '이미지 설명');
//define('KEYWORDS', '검색 키워드');
define('PIC_INFO_STR', '%sx%s - %sKB - %s views - %s votes');
define('APPROVE', '이미지 승인');
define('POSTPONE_APP', '승인 보류');
//define('DEL_PIC', '이미지 삭제');
define('READ_EXIF', 'Read EXIF info again');
define('RESET_VIEW_COUNT', '조회수 초기화');
define('RESET_VOTES', '평가 초기화');
define('DEL_COMM', '코멘트 삭제');
define('UPL_APPROVAL', '업로드 승인');
define('EDIT_PICS', '이미지 편집');
define('SEE_NEXT', '다음');
define('SEE_PREV', '이전');
define('N_PIC', '대기중인 이미지 (%s)');
define('N_OF_PIC_TO_DISP', '페이지당 출력할 이미지');
define('APPLY', '변경사항 적용');

// lang_groupmgr_php
define('GROUP_NAME', '그룹이름');
define('DISK_QUOTA', '디스크 할당');
define('CAN_RATE', '평가가능');
define('CAN_SEND_ECARDS', 'e-card 발송가능');
define('CAN_POST_COM', '코멘트 등록가능');
define('CAN_UPLOAD', '이미지 업로드가능');
define('CAN_HAVE_GALLERY', '개인앨범 생성가능');
//define('APPLY', '변경사항 적용');
define('CREATE_NEW_GROUP', '새그룹 생성');
define('DEL_GROUPS', '선택한 그룹삭제');
define('CONFIRM_DEL', 'Warning, when you delete a group, users that belong to this group will be transfered to the \'Registered\' group !\\n\\nDo you want to proceed ?');
define('GROUP_TITLE', '사용자 그룹관리');
define('APPROVAL_1', 'Pub. Upl. approval (1)');
define('APPROVAL_2', 'Priv. Upl. approval (2)');
define('NOTE1', '<b>(1)</b> public album 에 업로드할 이미지는 관리자의 승인절차를 거쳐 게시됩니다.');
define('NOTE2', '<b>(2)</b> 사용자(회원)가 업로드한 이미지는 저작권법에 위배되지 않아야 게시됩니다. ');
//define('NOTES', 'Notes');

// lang_index_php
define('WELCOME', '환영합니다 !');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', '앨범을 삭제하시겠습니까 ? \\n모든 이미지와 코멘트도 함께 삭제됩니다.');
//define('DELETE', '삭제');
define('MODIFY', '앨범설정');
//define('EDIT_PICS', '이미지별 정보수정 ');

// lang_list_categories
define('HOME', '갤러리 메인');
define('STAT1', '<b>카테고리:[cat] 앨범:[albums] 이미지:[pictures] 코멘트:[comments] 조회:[views]</b>');
define('STAT2', '<b>앨범:[albums] 이미지:[pictures] 조회:[views]</b>');
define('XX_S_GALLERY', '%s\'갤러리');
define('STAT3', '<b>카테고리:[cat] 앨범:[albums] 이미지:[pictures] 코멘트:[comments] 조회:[views]</b>');

// lang_list_users
define('USER_LIST', '사용자(회원)목록');
define('NO_USER_GAL', '사용자(회원) 갤러리가 없습니다.');
define('N_ALBUMS', '%s 앨범');
define('N_PICS', '%s 이미지');

// lang_list_albums
define('N_PICTURES', '%s 이미지');
define('LAST_ADDED', ', last one added on %s');

// lang_modifyalb_php
define('UPD_ALB_N', '%s님 앨범 업데이트');
define('GENERAL_SETTINGS', '기본설정');
define('ALB_TITLE', '앨범 제목');
define('ALB_CAT', '앨범 카테고리');
define('ALB_DESC', '앨범 설명');
define('ALB_THUMB', '앨범 썸네일');
define('ALB_PERM', '앨범 권한설정');
define('CAN_VIEW', '앨범 공개설정');
define('MOD_CAN_UPLOAD', '방문자가 이미지를 업로드할수 있음');
define('CAN_POST_COMMENTS', '방문자가 코멘트를 쓸수 있음');
define('MOD_CAN_RATE', '방문자가 평가할 수 있음');
define('USER_GAL', '사용자(회원) 갤러리');
define('NO_CAT', '*최상위 카테고리(메인)');
define('ALB_EMPTY', '앨범이 비어있습니다.');
define('LAST_UPLOADED', '마지막 업로드');
define('PUBLIC_ALB', '모두공개(public album)');
define('ME_ONLY', '나만보기');
define('OWNER_ONLY', '(%s)만 보기');
define('GROUPP_ONLY', '\'%s\' 그룹');
define('ERR_NO_ALB_TO_MODIFY', '수정할 수 없습니다.');
define('UPDATE', '앨범 업데이트');

// lang_rate_pic_php
define('ALREADY_RATED', '죄송합니다. 이미 평가하셨습니다.');
define('RATE_OK', '평가해 주셔서 감사합니다 !');

// lang_register_php
define('USERNAME', '아이디');
define('GROUP', '그룹');
define('DISK_USAGE', '디스크 사용량');
define('X_S_PROFILE', '%s\'님의 개인정보');

// lang_reviewcom_php
define('REVIEW_TITLE', '코멘트 다시보기');
define('NO_COMMENT', '코멘트 없습니다.');
define('N_COMM_DEL', '%s comment(s) deleted');
define('N_COMM_DISP', '페이지당 출력글수');
define('R_SEE_PREV', '이전');
define('R_SEE_NEXT', '다음');
define('R_DEL_COMM', '선택한 코멘트 삭제');

// lang_search_php
define('S_SEARCH', '이미지 갤러리 검색');

// lang_search_new_php
define('PAGE_TITLE', '새 이미지 검색');
define('SELECT_DIR', '업로드 디렉토리');
define('SELECT_DIR_MSG', 'FTP를 이용 정해진 폴더에 이미 업로드한 파일을 원하는 갤러리와 연결시켜 주는 작업을 하는 곳입니다. <br /><br />*이미지 파일을(public_html/gallery/Albums/userpics)폴더로 전송한 다음 아래 작업을 진행합니다.<br /><br />1) userpics 를 클릭하면 전체 리스트 가운데 새로 업로드된 파일만 체크되어 있습니다.<br />2) 원하는 갤러리를 선택한 다음 \"선택한 이미지 연결\" 버튼을 클릭 등록합니다.<br /><br />*하나의 파일을 두 곳의 갤러리에 링크할 수 없습니다. 해당 갤러리에서 삭제후 재등록 하세요.');
define('NO_PIC_TO_ADD', '연결된 이미지 없습니다.');
define('NEED_ONE_ALBUM', '하나 이상의 앨범을 생성한 다음 이용하세요.');
define('WARNING', '주의');
define('CHANGE_PERM', '이미지를 업로드하기 전에 해당 디렉토리의 퍼미션을 755 또는 777 로 변경해야 합니다 !');
define('TARGET_ALBUM', '<b>&quot; %s &quot; 폴더의 이미지를 연결할 갤러리 선택 </b>%s');
define('FOLDER', '업로드 폴더');
define('IMAGE', '이미지');
//define('ALBUM', 'Album');
define('RESULT', '결과');
define('DIR_RO', '쓰기 권한 없습니다. ');
define('DIR_CANT_READ', '읽기 권한 없습니다. ');
define('INSERT', '갤러리에 새로운 이미지 연결');
define('LIST_NEW_PIC', '새 이미지 목록');
define('INSERT_SELECTED', '선택한 이미지 연결');
define('NO_PIC_FOUND', '새 이미지를 찾지 못하였습니다.');
define('BE_PATIENT', '결과 아이콘을 참조하세요.');
define('SN_NOTES', '<ul><li><b>OK</b> : means that the picture was succesfully added<li><b>DP</b> : means that the picture is a duplicate and is already in the database<li><b>PB</b> : means that the picture could not be added, check your configuration and the permission of directories where the pictures are located<li>If the OK, DP, PB \'signs\' does not appear click on the broken picture to see any error message produced by PHP<li>If your browser timeout, hit the reload button</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('UP_TITLE', '이미지 업로드');
define('MAX_FSIZE', '업로드 허용 최대 파일크기 %s KB');
//define('ALBUM', '앨범');
define('PICTURE', '이미지');
define('PIC_TITLE', '이미지 제목');
define('DESCRIPTION', '이미지 설명');
define('UP_KEYWORDS', '키워드 (검색어)');
define('ERR_NO_ALB_UPLOADABLES', '해당 파일 없습니다.');

// lang_usermgr_php
define('U_TITLE', '사용자(회원)관리');
//define('NAME_A', '이름 (a-z)');
//define('NAME_D', '이름 (z-a)');
define('GROUP_A', '그룹 (a-z)');
define('GROUP_D', '그룹 (z-a)');
define('REG_A', '등록 (a-z)');
define('REG_D', '등록 (z-a)');
define('PIC_A', '조회 (a-z)');
define('PIC_D', '조회 (z-a)');
define('DISKU_A', '사용량 (a-z)');
define('DISKU_D', '사용량 (z-a)');
define('SORT_BY', '정렬순서');
define('ERR_NO_USERS', '사용자(회원) 테이블이 비어있습니다 !');
define('ERR_EDIT_SELF', '수정할 수 없습니다. 개인정보 수정 페이지를 이용하세요.');
define('EDIT', '편집');
//define('DELETE', '삭제');
define('U_NAME', '사용자 이름');
//define('GROUP', '그룹');
define('INACTIVE', '비활성');
//define('OPERATIONS', '실행메뉴');
define('PICTURES', '이미지');
define('DISK_SPACE', '사용량/할당량');
define('REGISTERED_ON', '회원');
define('U_USER_ON_P_PAGES', '%d 전체 %d 페이지');
define('USER_CONFIRM_DEL', '삭제 하시겠습니까 ? \\n등록된 모든 파일이 삭제됩니다.');
define('MAIL', '이메일');
define('ERR_UNKNOWN_USER', '선택한 회원이 존재하지 않습니다 !');
define('MODIFY_USER', '회원정보 수정');
//define('NOTES', '메모');
define('NOTE_LIST', '<li>비밀번호를 수정하지 않을경우 비워두시면 됩니다.');
define('PASSWORD', '비밀번호');
define('USER_ACTIVE_CP', '활성화된 사용자');
define('USER_GROUP_CP', '사용자 그룹');
define('USER_EMAIL', '사용자 이메일');
define('USER_WEB_SITE', '사용자 홈페이지');
define('CREATE_NEW_USER', '새로운 사용자 생성');
define('USER_LOCATION', '접속지');
define('USER_INTERESTS', '관심분야');
define('USER_OCC', '하시는 일');

// lang_util_php
define('UTIL_TITLE', '이미지크기수정');
define('WHAT_IT_DOES', 'What it does');
define('WHAT_UPDATE_TITLES', '파일이름으로 제목수정');
define('WHAT_DELETE_TITLE', '제목삭제');
define('WHAT_REBUILD', '썸네일 재작성과 이미지크기변경');
define('WHAT_DELETE_ORIGINALS', 'Deletes original sized photos replacing them with the resized version');
define('U_FILE', '파일');
define('TITLE_SET_TO', '제목을 ');
define('SUBMIT_FORM', '제출');
define('UPDATED_SUCCESFULLY', '변경 성공');
define('ERROR_CREATE', '오류발생');
define('CONTIN', 'Process more images');
define('MAIN_SUCCESS', 'The file %s was successfully used as main picture');
define('ERROR_RENAME', '%s 을 %s\' 로 이름 변경중 오류발생');
define('ERROR_NOT_FOUND', '파일 %s 을 찾을수 없습니다.');
define('U_BACK', '메인으로');
define('THUMBS_WAIT', '썸네일과 크기가 수정된 이미지를 변경하고 있습니다, 기다리세요...');
define('THUMBS_CONTINUE_WAIT', '썸네일 혹은 리사이즈 이미지를 수정하고 있습니다...');
define('TITLES_WAIT', '제목수정중, 기다리세요...');
define('DELETE_WAIT', '제목삭제중, 기다리세요...');
define('REPLACE_WAIT', '원래이미지 삭제후 리사이지된 이미지로 대체중, 기다리세요..');
define('INSTRUCTION', 'Quick instructions');
define('INSTRUCTION_ACTION', 'Select action');
define('INSTRUCTION_PARAMETER', '변수 설정');
define('INSTRUCTION_ALBUM', '앨범선택');
define('INSTRUCTION_PRESS', 'Press %s');
define('U_UPDATE', '썸네일 혹은 리사이즈된 이미지 수정');
define('UPDATE_WHAT', 'What should be updated');
define('UPDATE_THUMB', '썸네일만');
define('UPDATE_PIC', '크기수정된 이미지만');
define('UPDATE_BOTH', '썸네일과 크기수정된 이미지');
define('UPDATE_NUMBER', 'Number of processed images per click');
define('UPDATE_OPTION', '(시간경과문제가 발생하면 이 옵션을 낮게 설정하세요)');
define('FILENAME_TITLE', '파일이름 &rArr; 이미지 제목');
define('FILENAME_HOW', 'How should the filename be modified');
define('FILENAME_REMOVE', 'Remove the .jpg ending and replace _ (underscore) with spaces');
define('FILENAME_EURO', 'Change 2003_11_23_13_20_20.jpg to 23/11/2003 13:20');
define('FILENAME_US', 'Change 2003_11_23_13_20_20.jpg to 11/23/2003 13:20');
define('FILENAME_TIME', 'Change 2003_11_23_13_20_20.jpg to 13:20');
define('UT_DELETE', '이미지제목 혹은 원래이미지 삭제');
define('DELETE_TITLE', '이미지제목 삭제');
define('DELETE_ORIGINAL', '원래이미지 삭제');
define('DELETE_REPLACE', '원래이미지 삭제후 리사이즈 이미지로 대체');
//define('SELECT_ALBUM', '앨범 선택');

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
