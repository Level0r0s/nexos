<?
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
/*   $Id: lang-korean.php,v 1.1 2004/07/24 20:31:22 akamu Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Korean');
define('LANG_NAME_NATIVE', '한국어');
define('LANG_COUNTRY_CODE', 'kr');
define('TRANS_NAME', 'mle21');
define('TRANS_EMAIL', 'mle21@netian.com');
define('TRANS_WEBSITE', '');
define('TRANS_DATE', '2003-10-09');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'euc-kr');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', '예');
define('NO', '아니오');

// some common strings
define('BACK', '뒤로');
define('CONTINUE', '다음');
define('INFO', '안내');
define('ERROR', '에러');

//// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%m/%d/%y at %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y at %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y at %I:%M %p');

// short names for Byte, Kilo, Mega
$lang_byte_units = array('Bytes','KB','MB',);

// Day of week
$lang_day_of_week = array('Sun','Mon','Tue','Wed','Thu','Fri','Sat',);
// Day of the month
$lang_month = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec',);
// For the word censor
$lang_bad_words = array('*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*',);
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
define('FAVPICS', '선호 사진');

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
define('LASTCOM_LNK',  '최근코멘트');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', '최다조회');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  '최고평점');
define('SEARCH_LNK', '검색');
define('FAV_LNK', '즐겨찾기');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

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
define('MY_PROF_LNK', '개인정보');

// lang_cat_list
define('CATEGORY', '카테고리');
define('ALBUMS', '앨범');
define('PICTURES', '이미지');

// lang_album_list
define('ALBUM_ON_PAGE', '앨범 %d  페이지 %d');

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
define('PIC_ON_PAGE', '사진: %d  페이지: %d');
define('USER_ON_PAGE', '사용자: %d  페이지: %d');

// lang_img_nav_bar
define('THUMB_TITLE', '목록으로 돌아가기');
define('PIC_INFO_TITLE', '상세정보 보기/숨기기');
define('SLIDESHOW_TITLE', '슬라이드쇼');
define('ECARD_TITLE', '이미지를 e-card로 보내기');
define('ECARD_DISABLED', 'e-card로 보내기 금지');
define('ECARD_DISABLED_MSG', 'e-card 보내기 권한없슴');
define('PREV_TITLE', '이전');
define('NEXT_TITLE', '다음');
define('PIC_POS', '등록 이미지 %s/%s');

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
define('INFORMATION', '안내');
define('ERROR', '에러');
define('CRITICAL_ERROR', '심각한 오류발생');
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
define('N_VOTES', '%s 평가');

// lang_smilies_inc_php
define('EXCLAMATION', 'Exclamation');
define('QUESTION', 'Question');
define('VERY HAPPY', 'Very Happy');
define('SMILE', 'Smile');
define('SAD', 'Sad');
define('SURPRISED', 'Surprised');
define('SHOCKED', 'Shocked');
define('CONFUSED', 'Confused');
define('COOL', 'Cool');
define('LAUGHING', 'Laughing');
define('MAD', 'Mad');
define('RAZZ', 'Razz');
define('EMBARASSED', 'Embarassed');
define('CRYING OR VERY SAD', 'Crying or Very sad');
define('EVIL OR VERY MAD', 'Evil or Very Mad');
define('TWISTED EVIL', 'Twisted Evil');
define('ROLLING EYES', 'Rolling Eyes');
define('WINK', 'Wink');
define('IDEA', 'Idea');
define('ARROW', 'Arrow');
define('NEUTRAL', 'Neutral');
define('MR. GREEN', 'Mr. Green');

// lang_admin_php
define('LV_ADMIN', '일반모드로 전환합니다...');
define('ENT_ADMIN', '관리모드로 전환합니다...');

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
define('CONFIRM_DELETE', '카테고리를 삭제하시겠습니까 ?');
define('CATEGORY', '카테고리');
define('OPERATIONS', '실행메뉴');
define('MOVE_INTO', '카테고리 변경');
define('UPDATE_CREATE', '카테고리 생성/변경');
define('PARENT_CAT', '상위 카테고리');
define('CAT_TITLE', '카테고리 이름');
define('CAT_DESC', '카테고리 설명');

// lang_config_php
define('TITLE', '설정변경');
define('RESTORE_CFG', '기본설정으로');
define('SAVE_CFG', '변경사항저장');
define('NOTES', '노트');
define('INFO', '정보');
define('UPD_SUCCESS', '변경사항이 적용되었습니다!');
define('RESTORE_SUCCESS', '기본설정으로 변경되었습니다');
define('NAME_A', '이름순 순차배열');
define('NAME_D', '이름순 역차배열');
define('TITLE_A', '제목순 순차배열');
define('TITLE_D', '제목순 역차배열');
define('DATE_A', '일자순 순차배열');
define('DATE_D', '일자순 역차배열');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Height');
define('TH_WD', 'Width');

// lang_config_data
define('CONFIG_GENSET', '기본설정');
define('GALLERY_NAME', '갤러리 이름');
define('GALLERY_DESCRIPTION', '갤러리 설명');
define('GALLERY_ADMIN_EMAIL', '관리자 이메일');
define('ECARDS_MORE_PIC_TARGET', 'e-card의 상세정보에 링크될 URL');
define('LANG', '언어선택');
define('CPGTHEME', '테마선택');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', '앨범목록 설정');
define('MAIN_TABLE_WIDTH', '메인테이블의 폭 (pixels or %)');
define('SUBCAT_LEVEL', '표시할 카테고리 레벨수');
define('ALBUMS_PER_PAGE', '표시할 앨범 수');
define('ALBUM_LIST_COLS', '앨범의 세로 열');
define('ALB_LIST_THUMB_SIZE', '썸네일 크기(pixels)');
define('MAIN_PAGE_LAYOUT', '메인페이지에 불러올 컨텐트');
define('FIRST_LEVEL', '카테고리의 1차레벨 앨범썸네일 보기');
define('THUMB_VIEW_TITLE', '썸네일목록 설정');
define('THUMBCOLS', '썸네일 컬럼수');
define('THUMBROWS', '썸네일 행수');
define('MAX_TABS', '불러올 썸네일 총수');
define('CAPTION_IN_THUMBVIEW', '썸네일과 함께 상세정보 출력');
define('DISPLAY_COMMENT_COUNT', '썸네일과 함께 코멘트수를 출력');
define('DEFAULT_SORT_ORDER', '이미지 정렬방법');
define('MIN_VOTES_FOR_RATING', '최고평점에 나타낼 최소 평가횟수');
define('IMAGE_COMMENT_VIEW_TITLE', '이미지보기메뉴 및 코멘트 설정');
define('PICTURE_TABLE_WIDTH', '이미지보기 테이블의 폭(pixels or %)');
define('DISPLAY_PIC_INFO', '이미지의 상세정보를 기본적으로 출력');
define('FILTER_BAD_WORDS', '사용금지어 필터링 사용');
define('ENABLE_SMILIES', '코멘트에 스마일 아이콘 사용');
define('MAX_IMG_DESC_LENGTH', '이미지 설명 최대 문자수');
define('MAX_COM_WLENGTH', '단어문자 길이(띄워쓰기없이)');
define('MAX_COM_LINES', '코멘트 라인 제한');
define('MAX_COM_SIZE', '코멘트 초대 문자수');
define('DISPLAY_FILM_STRIP', '필름스트립 보기');
define('MAX_FILM_STRIP_ITEMS', '필름스트립의 항목갯수');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', '이미지 및 썸네일 설정');
define('JPEG_QUAL', 'JPEG 퀄리티');
define('THUMB_WIDTH', '썸네일 가로,세로 최대<b>*</b>');
define('THUMB_USE', '디멘죤사용 (가로 혹은 세로 혹은 썸네일의 최대모양)<b>*</b>');
define('MAKE_INTERMEDIATE', '이미지 보기에 새로운 파일생성');
define('PICTURE_WIDTH', '새로 생성될 파일의 최대크기(폭)<b>*</b>');
define('MAX_UPL_SIZE', '업로드 이미지 최대용량 (KB)');
define('MAX_UPL_WIDTH_HEIGHT', '업로드 이미지 가로,세로 최대크기(pixels)');
define('USER_SETTING_TITLE', '사용사(회원)설정');
define('ALLOW_USER_REGISTRATION', '회원가입 허용');
define('REG_REQUIRES_VALID_EMAIL', '회원가입시 이메일 유효여부 검증');
define('ALLOW_DUPLICATE_EMAILS_ADDR', '이메일 중복허용 여부');
define('ALLOW_PRIVATE_ALBUMS', '사용자 개인앨범 생성 허용');
define('CUSTOM_FIELDS_TITLE', 'Custom fields for image description (leave blank if unused)');
define('USER_FIELD1_NAME', 'Field 1 name');
define('USER_FIELD2_NAME', 'Field 2 name');
define('USER_FIELD3_NAME', 'Field 3 name');
define('USER_FIELD4_NAME', 'Field 4 name');
define('PIC_THUMB_SETTING_TITLE', '이미지와 썸네일 고급설정');
define('SHOW_PRIVATE', '로그인 되지 않은 사용자에게 개일앨범 아이콘 보여주기');
define('FORBIDEN_FNAME_CHAR', '파일 이름에 사용금지할 문자');
define('ALLOWED_FILE_EXTENSIONS', '허용할 이미지파일 확장자');
define('THUMB_METHOD', '이미지 크기조절 방법');
define('IMPATH', 'Path to ImageMagick\Netpbm \'convert\' utility (example /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Allowed image types (only valid for ImageMagick)');
define('IM_OPTIONS', 'Command line options for ImageMagick');
define('READ_EXIF_DATA', 'Read EXIF data in JPEG files');
define('FULLPATH', '앨범 디렉토리 경로 <b>*</b>');
define('USERPICS', '사용자(회원) 업로드 이미지 경로 <b>*</b>');
define('NORMAL_PFX', '새로 생성될 이미지의 접두어 <b>*</b>');
define('THUMB_PFX', '썸네일의 접두어 <b>*</b>');
define('DEFAULT_DIR_MODE', '디렉토리 기본 퍼미션');
define('DEFAULT_FILE_MODE', '이미지 기본 퍼미션');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', 'Cookies &amp; Charset settings');
define('COOKIE_NAME', '쿠키이름');
define('COOKIE_PATH', '쿠키경로');
define('CHAR_SET', '인코딩');
define('DEBUG_MODE', 'Enable debug mode');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) Fields marked with * must not be changed if you already have pictures in your gallery</div><br />');

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
define('ERR_MOVE', '%s과 %s를 연결하지못했습니다  !');
define('ERR_FSIZE_TOO_LARGE', '사이즈초과(maximum %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', '용량초과 (maximum %s KB) !');
define('ERR_INVALID_IMG', '정당한 이미지만 업로드하십시오 !');
define('ALLOWED_IMG_TYPES', '%s 이미지만 업로드할 수 있습니다.');
define('ERR_INSERT_PIC', '\'%s\' 이미지는 앨범에 등록할 수 없습니다. ');
define('UPLOAD_SUCCESS', '이미지가 성공적으로 업로드 되었습니다.<br /><br />관리자의 승인후 게시됩니다.');
define('INFO', '안내');
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
define('COMMENT', '코멘트');
define('IM_IN_ALB', '앨범 이미지');
define('ALB_DEL_SUCCESS', '\'%s\' 앨범삭제');
define('ALB_MGR', '앨범관리');
define('ERR_INVALID_DATA', '\'%s\' 데이타 없습니다!');
define('CREATE_ALB', '\'%s\' 앨범생성');
define('UPDATE_ALB', '\'%s\' 앨범 업데이트 \'%s\' 이미지 \'%s\' 인덱스');
define('DEL_PIC', '이미지삭제');
define('DEL_ALB', '앨범삭제');
define('DEL_USER', '사용자삭제');
define('ERR_UNKNOWN_USER', '선택한 사용자는 없습니다 !');
define('COMMENT_DELETED', '코멘트가 성공적으로 삭제되었습니다.');

// lang_display_image_php
define('CONFIRM_DEL', '이미지를 삭제하시겠습니까 ? \\n코멘트도 함께 삭제됩니다.');
define('DEL_PIC', '이미지삭제');
define('SIZE', '%s x %s pixels');
define('VIEWS', '%s times');
define('SLIDESHOW', '슬라이드쇼');
define('STOP_SLIDESHOW', '슬라이드쇼-정지');
define('VIEW_FS', '원본 이미지 보기');

// lang_picinfo
define('TITLE', '사진 정보');
define('FILENAME', '파일이름');
define('ALBUM NAME', '앨범이름');
define('RATING', '평점 (%s 평가)');
define('KEYWORDS', '키워드');
define('FILE SIZE', '파일 크기');
define('DIMENSIONS', 'Dimensions');
define('DISPLAYED', 'Displayed');
define('CAMERA', '카메라');
define('DATE TAKEN', '촬영일자');
define('APERTURE', 'Aperture');
define('EXPOSURE TIME', 'Exposure time');
define('FOCAL LENGTH', 'Focal length');
define('COMMENT', '코멘트');
define('ADDFAV', '즐겨찾기에 추가');
define('ADDFAVPHRASE', '즐겨찾기');
define('REMFAV', '즐겨찾기에서 삭제');

// lang_display_comments
define('OK', '등록');
define('EDIT_TITLE', '코멘트 수정');
define('CONFIRM_DELETE', '코멘트를 삭제하시겠습니까 ?');
define('ADD_YOUR_COMMENT', '코멘트 등록');
define('NAME', '이름');
define('COMMENT', '코멘트');
define('YOUR_NAME', '일지매');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', '화면닫기:이미지에 클릭');

// lang_ecard_php
define('TITLE', 'e-card 보내기');
define('INVALID_EMAIL', '<b>Warning</b> : 유효하지 않은 이메일입니다 !');
define('ECARD_TITLE', '%s님께서 보내신 e-card 입니다!');
define('VIEW_ECARD', '카드가 보이지않는 사용자께서는 이링크를 클릭하세요 !');
define('VIEW_MORE_PICS', '더 많은 이미지를 감상하시려면 클릭하세요 !');
define('SEND_SUCCESS', 'e-card를 보냈습니다!');
define('SEND_FAILED', '죄송합니다, e-card 발송에 실패하였습니다.');
define('FROM', 'e-card 작성폼');
define('YOUR_NAME', '보내는 사람 이름');
define('YOUR_EMAIL', '보내는 사람 이메일');
define('TO', 'To');
define('RCPT_NAME', '받는 사람 이름');
define('RCPT_EMAIL', '받는 사람 이메일');
define('GREETINGS', '제목');
define('MESSAGE', '메세지');

// lang_editpics_php
define('PIC_INFO', '이미지 상세정보');
define('ALBUM', '앨범');
define('TITLE', '이미지 제목');
define('DESC', '이미지 설명');
define('KEYWORDS', '검색 키워드');
define('PIC_INFO_STR', '%sx%s - %sKB - %s views - %s votes');
define('APPROVE', '이미지 승인');
define('POSTPONE_APP', '승인 보류');
define('DEL_PIC', '이미지 삭제');
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
define('APPLY', '변경사항 적용');
define('CREATE_NEW_GROUP', '새그룹 생성');
define('DEL_GROUPS', '선택한 그룹삭제');
define('CONFIRM_DEL', 'Warning, when you delete a group, users that belong to this group will be transfered to the \'Registered\' group !\\n\\nDo you want to proceed ?');
define('TITLE', '사용자 그룹관리');
define('APPROVAL_1', 'Pub. Upl. approval (1)');
define('APPROVAL_2', 'Priv. Upl. approval (2)');
define('NOTE1', '<b>(1)</b> public album 에 업로드할 이미지는 관리자의 승인절차를 거쳐 게시됩니다.');
define('NOTE2', '<b>(2)</b> 사용자(회원)가 업로드한 이미지는 저작권법에 위배되지 않아야 게시됩니다. ');
define('NOTES', 'Notes');

// lang_index_php
define('WELCOME', '환영합니다 !');

// lang_album_admin_menu
define('CONFIRM_DELETE', '앨범을 삭제하시겠습니까 ? \\n모든 이미지와 코멘트도 함께 삭제됩니다.');
define('DELETE', '삭제');
define('MODIFY', '앨범설정');
define('EDIT_PICS', '이미지별 정보수정 ');

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
define('CAN_UPLOAD', '방문자가 이미지를 업로드할수 있음');
define('CAN_POST_COMMENTS', '방문자가 코멘트를 쓸수 있음');
define('CAN_RATE', '방문자가 평가할 수 있음');
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

// lang_register_disclamer
define('REGISTER_DISCLAMER', '{SITE_NAME}에 오신 것을 환영합니다.<br />
회원님의 개인앨범을 생성 관리할수 있는 시스템을 준비중에 있습니다.<br />
현재는 테스트중이므로, 회원가입이나 기타 갤러리 프로그램에서의 파일 유실등은 책임지지 않습니다.<br />
일단 회원등록한 분께는 정식 오픈시 이메일을 통해 알려드릴 것이며, 시험 기간동안 가입한 회원을 대상으로 특별한 이벤트를 준비하고 있습니다.<br />회원가입시 이메일의 유효성 체크를 통해 유효하지 않은 이메일은 등록되지 않는점 참고하세요.<br /><br />
다시한번 {SITE_NAME}를 방문해 주셔서 감사합니다.');

// lang_register_php
define('PAGE_TITLE', '회원등록');
define('TERM_COND', '등록약관 및 이용안내');
define('I_AGREE', '동의합니다!');
define('SUBMIT', '회원등록');
define('ERR_USER_EXISTS', '이미 사용중인 아이디입니다. 다른 아이디로 등록하세요.');
define('ERR_PASSWORD_MISMATCH', '두 비밀번호가 일치하지 않습니다.');
define('ERR_UNAME_SHORT', '아이디는 최소4~10자 이내로 작성해야 합니다.');
define('ERR_PASSWORD_SHORT', '비밀번호는 최소4~12자 이내로 작성해야 합니다.');
define('ERR_UNAME_PASS_DIFF', '아이디와 비밀번호가 일치하지 않습니다.');
define('ERR_INVALID_EMAIL', '이메일을 입력하세요.');
define('ERR_DUPLICATE_EMAIL', '이미 등록된 이메일 주소입니다.');
define('ENTER_INFO', '회원등록 폼');
define('REQUIRED_INFO', '필수입력 항목');
define('OPTIONAL_INFO', '추가정보');
define('USERNAME', '아이디');
define('PASSWORD', '비밀번호');
define('PASSWORD_AGAIN', '비밀번호 재입력');
define('EMAIL', '이메일');
define('LOCATION', '지역');
define('INTERESTS', '관심분야');
define('WEBSITE', '홈페이지');
define('OCCUPATION', '하시는 일');
define('ERROR', '에러..');
define('CONFIRM_EMAIL_SUBJECT', '%s 회원등록');
define('INFORMATION', '안내');
define('FAILED_SENDING_EMAIL', '등록정보 이메일 발송실패 !');
define('THANK_YOU', '등록해주셔서 감사합니다.<br />입력한 이메일 주소로 활성화 코드가 담긴 이메일을 보냈습니다.<br />등록절차를 완료하려면 이메일의 활성화 코드를 클릭해주십시오.');
define('ACCT_CREATED', '회원님의 등록절차가 정상적으로 완료되었습니다. 로그인후 개인정보를 수정해주십시오.');
define('ACCT_ACTIVE', '회원님의 계정이 정상적으로 활성화되었습니다. 로그인후 이용해주십시오.');
define('ACCT_ALREADY_ACT', '회원님의 계정이 이미 활성화되었습니다 !');
define('ACCT_ACT_FAILED', '이 계정은 활성화되지 않았습니다 !');
define('ERR_UNK_USER', '선택한 사용자는 존재하지 않습니다 !');
define('X_S_PROFILE', '%s\'님의 개인정보');
define('GROUP', '그룹');
define('REG_DATE', '회원가입');
define('DISK_USAGE', '디스크 사용량');
define('CHANGE_PASS', '비밀번호 변경');
define('CURRENT_PASS', '현재 비밀번호');
define('NEW_PASS', '새로운 비밀번호');
define('NEW_PASS_AGAIN', '비밀번호 재입력');
define('ERR_CURR_PASS', '현재 비밀번호가 틀립니다.');
define('APPLY_MODIF', '변경사항 저장');
define('UPDATE_SUCCESS', '개인정보가 업데이트 되었습니다.');
define('PASS_CHG_SUCCESS', '비밀번호가 변경 되었습니다.');
define('PASS_CHG_ERROR', '비밀번호가 변경되지 않았습니다.');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', '반갑습니다 !! 

이 메일은 '{SITE_NAME}' 회원등록 신청자에게 보내드리는 메일입니다.

아래 아이디와 비밀번호는 잊지않도록 메모해두시기 바랍니다.

아이디 : '{USER_NAME}'
비밀번호 : '{PASSWORD}'

추가로 아래 링크를 클릭해서 회원님의 계정을 활성화 시킨다음 로그인하세요. 

{ACT_LINK}

기타 문의사항은 운영자 메일 tmax@puchonphoto.com 로 주시기 바랍니다.

{SITE_NAME} 운영자
');

// lang_reviewcom_php
define('TITLE', '코멘트 다시보기');
define('NO_COMMENT', '코멘트 없습니다.');
define('N_COMM_DEL', '%s comment(s) deleted');
define('N_COMM_DISP', '페이지당 출력글수');
define('SEE_PREV', '이전');
define('SEE_NEXT', '다음');
define('DEL_COMM', '선택한 코멘트 삭제');

// lang_search_php
define('SEARCH', '이미지 갤러리 검색');

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
define('ALBUM', '갤러리');
define('RESULT', '결과');
define('DIR_RO', '쓰기 권한 없습니다. ');
define('DIR_CANT_READ', '읽기 권한 없습니다. ');
define('INSERT', '갤러리에 새로운 이미지 연결');
define('LIST_NEW_PIC', '새 이미지 목록');
define('INSERT_SELECTED', '선택한 이미지 연결');
define('NO_PIC_FOUND', '새 이미지를 찾지 못하였습니다.');
define('BE_PATIENT', '결과 아이콘을 참조하세요.');
define('NOTES', '<ul><li><b>OK</b> : 연결성공<li><b>DP</b> : 다른 갤러리에 이미 등록되어있음<li><b>PB</b> : 실패, 업로드 디렉토리의 퍼미션등 추가작업 필요<li>만약 결과창에 OK, DP, PB 등의 아이콘이 표시되지 않았다면 프로그램을 점검하세요.</ul>');

// lang_upload_php
define('TITLE', '이미지 업로드');
define('MAX_FSIZE', '업로드 허용 최대 파일크기 %s KB');
define('ALBUM', '앨범');
define('PICTURE', '이미지');
define('PIC_TITLE', '이미지 제목');
define('DESCRIPTION', '이미지 설명');
define('KEYWORDS', '키워드 (검색어)');
define('ERR_NO_ALB_UPLOADABLES', '해당 파일 없습니다.');

// lang_usermgr_php
define('TITLE', '사용자(회원)관리');
define('NAME_A', '이름 (a-z)');
define('NAME_D', '이름 (z-a)');
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
define('DELETE', '삭제');
define('NAME', '사용자 이름');
define('GROUP', '그룹');
define('INACTIVE', '비활성');
define('OPERATIONS', '실행메뉴');
define('PICTURES', '이미지');
define('DISK_SPACE', '사용량/할당량');
define('REGISTERED_ON', '회원');
define('U_USER_ON_P_PAGES', '%d 전체 %d 페이지');
define('CONFIRM_DEL', '삭제 하시겠습니까 ? \\n등록된 모든 파일이 삭제됩니다.');
define('MAIL', '이메일');
define('ERR_UNKNOWN_USER', '선택한 회원이 존재하지 않습니다 !');
define('MODIFY_USER', '회원정보 수정');
define('NOTES', '메모');
define('NOTE_LIST', '<li>비밀번호를 수정하지 않을경우 비워두시면 됩니다.');
define('PASSWORD', '비밀번호');
define('USER_ACTIVE', '활성화된 사용자');
define('USER_GROUP', '사용자 그룹');
define('USER_EMAIL', '사용자 이메일');
define('USER_WEB_SITE', '사용자 홈페이지');
define('CREATE_NEW_USER', '새로운 사용자 생성');
define('USER_LOCATION', '접속지');
define('USER_INTERESTS', '관심분야');
define('USER_OCCUPATION', '하시는 일');

// lang_util_php
define('TITLE', '이미지크기수정');
define('WHAT_IT_DOES', 'What it does');
define('WHAT_UPDATE_TITLES', '파일이름으로 제목수정');
define('WHAT_DELETE_TITLE', '제목삭제');
define('WHAT_REBUILD', '썸네일 재작성과 이미지크기변경');
define('WHAT_DELETE_ORIGINALS', 'Deletes original sized photos replacing them with the sized version');
define('FILE', '파일');
define('TITLE_SET_TO', '제목을 ');
define('SUBMIT_FORM', '제출');
define('UPDATED_SUCCESFULLY', '변경 성공');
define('ERROR_CREATE', '오류발생');
define('CONTINUE', 'Process more images');
define('MAIN_SUCCESS', 'The file %s was successfully used as main picture');
define('ERROR_RENAME', '%s 을 %s\' 로 이름 변경중 오류발생');
define('ERROR_NOT_FOUND', '파일 %s 을 찾을수 없습니다.');
define('BACK', '메인으로');
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
define('UPDATE', '썸네일 혹은 리사이즈된 이미지 수정');
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
define('DELETE', '이미지제목 혹은 원래이미지 삭제');
define('DELETE_TITLE', '이미지제목 삭제');
define('DELETE_ORIGINAL', '원래이미지 삭제');
define('DELETE_REPLACE', '원래이미지 삭제후 리사이즈 이미지로 대체');
define('SELECT_ALBUM', '앨범 선택');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>