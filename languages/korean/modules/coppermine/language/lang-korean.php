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
define('LANG_NAME_NATIVE', '�ѱ���');
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
define('YES', '��');
define('NO', '�ƴϿ�');

// some common strings
define('BACK', '�ڷ�');
define('CONTINUE', '����');
define('INFO', '�ȳ�');
define('ERROR', '����');

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
define('RANDOM', '���䴺�� ������');
define('LASTUP', '�ֱ� �̹���');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', '�ֱ� ������ �ٹ�');
define('LASTCOM', '�ֱ� �ڸ�Ʈ');
define('LASTCOMBY', 'My Last comments');
define('TOPN', '�ִ� ��ȸ');
define('TOPRATED', '�ְ� ����');
define('LASTHITS', '������ ��ȸ');
define('SEARCH', '�˻� ���');
define('FAVPICS', '��ȣ ����');

// lang_errors
define('ACCESS_DENIED', 'ȸ������ �������� �������� ���� �� �����ϴ�. �����ڿ��� �����ϼ���.');
define('PERM_DENIED', 'ȸ������ �������� ������ �� ���� ����Դϴ�.');
define('PARAM_MISSING', '�ʼ��׸��� Ȯ���ϼ���.');
define('NON_EXIST_AP', '������ �ٹ��̳� �̹����� �������� �ʽ��ϴ� !');
define('QUOTA_EXCEEDED', '�Ҵ�뷮 �ʰ�,<br /><br />�Ҵ�� ��ũ[quota]K, ��밡���� �뷮[space]K, �Ҵ�뷮 �ʰ��� ���ε��� �� ����.');
define('GD_FILE_TYPE_ERR', 'JPEG�� PNG���ϸ� ������.');
define('INVALID_IMAGE', '������ ���� �Ǵ� ���������� ���������ʴ� �����Դϴ�.');
define('RESIZE_FAILED', '������� �������� �ʾҽ��ϴ�.Ȥ�� ����ũ�⸦ �ٲ� �� �����ϴ�.');
define('NO_IMG_TO_DISPLAY', 'ǥ���� �̹����� �����ϴ�.');
define('NON_EXIST_CAT', '������ ī�װ��� �������� �ʽ��ϴ�.');
define('ORPHAN_CAT', '���� ī�װ��� ���������ʽ��ϴ�. �����ڿ��� �����ϼ���.');
define('DIRECTORY_RO', '���� \'%s\' �� ���⸦ �� �� �����ϴ�. ������ ���� �� �����ϴ�.');
define('NON_EXIST_COMMENT', '������ �ڸ�Ʈ�� �������� �ʽ��ϴ�.');
define('PIC_IN_INVALID_ALBUM', '���������ʴ� �ٹ��̹���(%s)!?');
define('BANNED', '���ϴ� ���� �̻���Ʈ�� �������ڸ�ܿ� �ֽ��ϴ�.');
define('NOT_WITH_UDB', '�̱���� ���۸��ο��� ����� �� �����ϴ�. �̱���� ��������Ʈ��� ������ �Ǿ� �ֱ� �����Դϴ�.');

// lang_main_menu
define('ALB_LIST_TITLE', '�ٹ��������');
define('ALB_LIST_LNK', '�ٹ����');
define('MY_GAL_TITLE', '���ΰ�������');
define('MY_GAL_LNK', '���ΰ�����');
define('MY_PROF_LNK', '��������');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', '�������� ��ȯ');
define('ADM_MODE_LNK', '�������');
define('USR_MODE_TITLE', '�Ϲݸ��� ��ȯ');
define('USR_MODE_LNK', '�Ϲݸ��');
define('UPLOAD_PIC_TITLE', '�ٹ��� �̹��� ���ε�');
define('UPLOAD_PIC_LNK', '�̹������ε�');
define('REGISTER_TITLE', '��������');
define('REGISTER_LNK', 'ȸ�����');
define('LOGIN_LNK', '�α���');
define('LOGOUT_LNK', '�α׾ƿ�');
define('LASTUP_LNK', '�ֱ��̹���');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  '�ֱ��ڸ�Ʈ');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', '�ִ���ȸ');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  '�ְ�����');
define('SEARCH_LNK', '�˻�');
define('FAV_LNK', '���ã��');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu

define('UPL_APP_LNK', '���ε����');
define('CONFIG_LNK', 'ȯ�漳��');
define('ALBUMS_LNK', '�ٹ�����');
define('CATEGORIES_LNK', 'ī�װ�����');
define('USERS_LNK', 'ȸ������');
define('GROUPS_LNK', '�׷����');
define('COMMENTS_LNK', '�ڸ�Ʈ����');
define('SEARCHNEW_LNK', 'FTP���ε����Ͽ���');
define('UTIL_LNK', '�̹���ũ�� ����');
define('BAN_LNK', '��������');

// lang_user_admin_menu
define('ALBMGR_LNK', '���ξٹ� ���� �� ����');
define('MODIFYALB_LNK', '���ξٹ� ����');
define('MY_PROF_LNK', '��������');

// lang_cat_list
define('CATEGORY', 'ī�װ�');
define('ALBUMS', '�ٹ�');
define('PICTURES', '�̹���');

// lang_album_list
define('ALBUM_ON_PAGE', '�ٹ� %d  ������ %d');

// lang_thumb_view
define('DATE', '����');
define('NAME', '�����̸�');
define('TITLE', '����');
define('SORT_DA', '���ڼ� �����迭');
define('SORT_DD', '���ڼ� �����迭');
define('SORT_NA', '�̸��� �����迭');
define('SORT_ND', '�̸��� �����迭');
define('SORT_TA', '����� �����迭');
define('SORT_TD', '����� �����迭');
define('PIC_ON_PAGE', '����: %d  ������: %d');
define('USER_ON_PAGE', '�����: %d  ������: %d');

// lang_img_nav_bar
define('THUMB_TITLE', '������� ���ư���');
define('PIC_INFO_TITLE', '������ ����/�����');
define('SLIDESHOW_TITLE', '�����̵��');
define('ECARD_TITLE', '�̹����� e-card�� ������');
define('ECARD_DISABLED', 'e-card�� ������ ����');
define('ECARD_DISABLED_MSG', 'e-card ������ ���Ѿ���');
define('PREV_TITLE', '����');
define('NEXT_TITLE', '����');
define('PIC_POS', '��� �̹��� %s/%s');

// lang_rate_pic
define('RATE_THIS_PIC', '��');
define('NO_VOTES', '(�򰡾���)');
define('RATING', '(�������� : %s / 5 ��Ƚ�� %s ȸ)');
define('RUBBISH', '���ֳ���');
define('POOR', '����');
define('FAIR', '����');
define('GOOD', '����');
define('EXCELLENT', '��������');
define('GREAT', '�ֻ�');

// lang_cpg_die
define('INFORMATION', '�ȳ�');
define('ERROR', '����');
define('CRITICAL_ERROR', '�ɰ��� �����߻�');
define('FILE', '����: ');
define('LINE', '��: ');

// lang_display_thumbnails
define('FILENAME', '�����̸� : ');
define('FILESIZE', '����ũ�� : ');
define('DIMENSIONS', '����,���� : ');
define('DATE_ADDED', '����� : ');

// lang_get_pic_data
define('N_COMMENTS', '%s �ڸ�Ʈ');
define('N_VIEWS', '%s ��ȸ');
define('N_VOTES', '%s ��');

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
define('LV_ADMIN', '�Ϲݸ��� ��ȯ�մϴ�...');
define('ENT_ADMIN', '�������� ��ȯ�մϴ�...');

// lang_albmgr_php
define('ALB_NEED_NAME', '�ٹ��̸��� �ʿ��մϴ� !');
define('CONFIRM_MODIFS', '��������� �����Ͻðڽ��ϱ� ?');
define('NO_CHANGE', '��������� �����ϴ� !');
define('NEW_ALBUM', '�� �ٹ�');
define('CONFIRM_DELETE1', '�ٹ��� �����Ͻðڽ��ϱ� ?');
define('CONFIRM_DELETE2', '\\n�ٹ��� ��ϵ� �̹����� �ڸ�Ʈ�� ��� �����մϴ� !');
define('SELECT_FIRST', '���� �ٹ��� �����ϼ���');
define('ALB_MRG', '�ٹ�����');
define('MY_GALLERY', '* ���ξٹ� *');
define('NO_CATEGORY', '* �ֻ��� ī�װ�(����) *');
define('DELETE', '����');
define('NEW', '����');
define('APPLY_MODIFS', '������');
define('SELECT_CATEGORY', 'ī�װ� ����');

// lang_catmgr_php
define('MISS_PARAM', 'Parameters required for \'%s\'operation not supplied !');
define('UNKNOWN_CAT', '������ ī�װ��� �������� �ʽ��ϴ�.');
define('USERGAL_CAT_RO', 'ȸ�� �������� ������ �� �����ϴ� !');
define('MANAGE_CAT', 'ī�װ�����');
define('CONFIRM_DELETE', 'ī�װ��� �����Ͻðڽ��ϱ� ?');
define('CATEGORY', 'ī�װ�');
define('OPERATIONS', '����޴�');
define('MOVE_INTO', 'ī�װ� ����');
define('UPDATE_CREATE', 'ī�װ� ����/����');
define('PARENT_CAT', '���� ī�װ�');
define('CAT_TITLE', 'ī�װ� �̸�');
define('CAT_DESC', 'ī�װ� ����');

// lang_config_php
define('TITLE', '��������');
define('RESTORE_CFG', '�⺻��������');
define('SAVE_CFG', '�����������');
define('NOTES', '��Ʈ');
define('INFO', '����');
define('UPD_SUCCESS', '��������� ����Ǿ����ϴ�!');
define('RESTORE_SUCCESS', '�⺻�������� ����Ǿ����ϴ�');
define('NAME_A', '�̸��� �����迭');
define('NAME_D', '�̸��� �����迭');
define('TITLE_A', '����� �����迭');
define('TITLE_D', '����� �����迭');
define('DATE_A', '���ڼ� �����迭');
define('DATE_D', '���ڼ� �����迭');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Height');
define('TH_WD', 'Width');

// lang_config_data
define('CONFIG_GENSET', '�⺻����');
define('GALLERY_NAME', '������ �̸�');
define('GALLERY_DESCRIPTION', '������ ����');
define('GALLERY_ADMIN_EMAIL', '������ �̸���');
define('ECARDS_MORE_PIC_TARGET', 'e-card�� �������� ��ũ�� URL');
define('LANG', '����');
define('CPGTHEME', '�׸�����');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', '�ٹ���� ����');
define('MAIN_TABLE_WIDTH', '�������̺��� �� (pixels or %)');
define('SUBCAT_LEVEL', 'ǥ���� ī�װ� ������');
define('ALBUMS_PER_PAGE', 'ǥ���� �ٹ� ��');
define('ALBUM_LIST_COLS', '�ٹ��� ���� ��');
define('ALB_LIST_THUMB_SIZE', '����� ũ��(pixels)');
define('MAIN_PAGE_LAYOUT', '������������ �ҷ��� ����Ʈ');
define('FIRST_LEVEL', 'ī�װ��� 1������ �ٹ������ ����');
define('THUMB_VIEW_TITLE', '����ϸ�� ����');
define('THUMBCOLS', '����� �÷���');
define('THUMBROWS', '����� ���');
define('MAX_TABS', '�ҷ��� ����� �Ѽ�');
define('CAPTION_IN_THUMBVIEW', '����ϰ� �Բ� ������ ���');
define('DISPLAY_COMMENT_COUNT', '����ϰ� �Բ� �ڸ�Ʈ���� ���');
define('DEFAULT_SORT_ORDER', '�̹��� ���Ĺ��');
define('MIN_VOTES_FOR_RATING', '�ְ������� ��Ÿ�� �ּ� ��Ƚ��');
define('IMAGE_COMMENT_VIEW_TITLE', '�̹�������޴� �� �ڸ�Ʈ ����');
define('PICTURE_TABLE_WIDTH', '�̹������� ���̺��� ��(pixels or %)');
define('DISPLAY_PIC_INFO', '�̹����� �������� �⺻������ ���');
define('FILTER_BAD_WORDS', '�������� ���͸� ���');
define('ENABLE_SMILIES', '�ڸ�Ʈ�� ������ ������ ���');
define('MAX_IMG_DESC_LENGTH', '�̹��� ���� �ִ� ���ڼ�');
define('MAX_COM_WLENGTH', '�ܾ�� ����(����������)');
define('MAX_COM_LINES', '�ڸ�Ʈ ���� ����');
define('MAX_COM_SIZE', '�ڸ�Ʈ �ʴ� ���ڼ�');
define('DISPLAY_FILM_STRIP', '�ʸ���Ʈ�� ����');
define('MAX_FILM_STRIP_ITEMS', '�ʸ���Ʈ���� �׸񰹼�');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', '�̹��� �� ����� ����');
define('JPEG_QUAL', 'JPEG ����Ƽ');
define('THUMB_WIDTH', '����� ����,���� �ִ�<b>*</b>');
define('THUMB_USE', '����Ի�� (���� Ȥ�� ���� Ȥ�� ������� �ִ���)<b>*</b>');
define('MAKE_INTERMEDIATE', '�̹��� ���⿡ ���ο� ���ϻ���');
define('PICTURE_WIDTH', '���� ������ ������ �ִ�ũ��(��)<b>*</b>');
define('MAX_UPL_SIZE', '���ε� �̹��� �ִ�뷮 (KB)');
define('MAX_UPL_WIDTH_HEIGHT', '���ε� �̹��� ����,���� �ִ�ũ��(pixels)');
define('USER_SETTING_TITLE', '����(ȸ��)����');
define('ALLOW_USER_REGISTRATION', 'ȸ������ ���');
define('REG_REQUIRES_VALID_EMAIL', 'ȸ�����Խ� �̸��� ��ȿ���� ����');
define('ALLOW_DUPLICATE_EMAILS_ADDR', '�̸��� �ߺ���� ����');
define('ALLOW_PRIVATE_ALBUMS', '����� ���ξٹ� ���� ���');
define('CUSTOM_FIELDS_TITLE', 'Custom fields for image description (leave blank if unused)');
define('USER_FIELD1_NAME', 'Field 1 name');
define('USER_FIELD2_NAME', 'Field 2 name');
define('USER_FIELD3_NAME', 'Field 3 name');
define('USER_FIELD4_NAME', 'Field 4 name');
define('PIC_THUMB_SETTING_TITLE', '�̹����� ����� ��޼���');
define('SHOW_PRIVATE', '�α��� ���� ���� ����ڿ��� ���Ͼٹ� ������ �����ֱ�');
define('FORBIDEN_FNAME_CHAR', '���� �̸��� �������� ����');
define('ALLOWED_FILE_EXTENSIONS', '����� �̹������� Ȯ����');
define('THUMB_METHOD', '�̹��� ũ������ ���');
define('IMPATH', 'Path to ImageMagick\Netpbm \'convert\' utility (example /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Allowed image types (only valid for ImageMagick)');
define('IM_OPTIONS', 'Command line options for ImageMagick');
define('READ_EXIF_DATA', 'Read EXIF data in JPEG files');
define('FULLPATH', '�ٹ� ���丮 ��� <b>*</b>');
define('USERPICS', '�����(ȸ��) ���ε� �̹��� ��� <b>*</b>');
define('NORMAL_PFX', '���� ������ �̹����� ���ξ� <b>*</b>');
define('THUMB_PFX', '������� ���ξ� <b>*</b>');
define('DEFAULT_DIR_MODE', '���丮 �⺻ �۹̼�');
define('DEFAULT_FILE_MODE', '�̹��� �⺻ �۹̼�');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', 'Cookies &amp; Charset settings');
define('COOKIE_NAME', '��Ű�̸�');
define('COOKIE_PATH', '��Ű���');
define('CHAR_SET', '���ڵ�');
define('DEBUG_MODE', 'Enable debug mode');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) Fields marked with * must not be changed if you already have pictures in your gallery</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', '�̸��� �Է��ϼ���.');
define('COM_ADDED', '�ڸ�Ʈ ���');
define('ALB_NEED_TITLE', '������ �ٹ� Ÿ��Ʋ�� ���ϼ��� !');
define('NO_UDP_NEEDED', '������Ʈ�� �ʿ����.');
define('ALB_UPDATED', '�ٹ� ����');
define('UNKNOWN_ALBUM', '������ �ٹ��� ���ų�, ���ε��� ������ �����ڿ� ���� ���ѵǾ��ֽ��ϴ�.');
define('NO_PIC_UPLOADED', '���ε� �̹��� �����ϴ� !<br /><br />�������� ���Ǵ� �̹��� ������ ���ε��ϼ���.');
define('ERR_MKDIR', '%s ���丮 �������� !');
define('DEST_DIR_RO', '%s ���丮�� ��������Ǿ��ֽ��ϴ� !');
define('ERR_MOVE', '%s�� %s�� �����������߽��ϴ�  !');
define('ERR_FSIZE_TOO_LARGE', '�������ʰ�(maximum %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', '�뷮�ʰ� (maximum %s KB) !');
define('ERR_INVALID_IMG', '������ �̹����� ���ε��Ͻʽÿ� !');
define('ALLOWED_IMG_TYPES', '%s �̹����� ���ε��� �� �ֽ��ϴ�.');
define('ERR_INSERT_PIC', '\'%s\' �̹����� �ٹ��� ����� �� �����ϴ�. ');
define('UPLOAD_SUCCESS', '�̹����� ���������� ���ε� �Ǿ����ϴ�.<br /><br />�������� ������ �Խõ˴ϴ�.');
define('INFO', '�ȳ�');
define('ERR_COMMENT_EMPTY', '�ڸ�Ʈ ����ֽ� !');
define('ERR_INVALID_FEXT', 'Only files with the following extensions are accepted : <br /><br />%s.');
define('NO_FLOOD', '�ڸ�Ʈ�� �����ϰų� ����� �� �����ϴ�.');
define('REDIRECT_MSG', '\'����\' ��ư�� ������ ���� �������� ���ΰ�ħ ��ư�� ������� ������.');
define('UPL_SUCCESS', '�̹����� ���������� ���ε�Ǿ����ϴ�.');

// lang_delete_php
define('CAPTION', 'ĸ��');
define('FS_PIC', '���� �̹���');
define('DEL_SUCCESS', '�����Ǿ����ϴ�!');
define('NS_PIC', '���ø� ���� ���̹���');
define('ERR_DEL', '�������� �ʾҽ��ϴ�!!');
define('THUMB_PIC', '�����');
define('COMMENT', '�ڸ�Ʈ');
define('IM_IN_ALB', '�ٹ� �̹���');
define('ALB_DEL_SUCCESS', '\'%s\' �ٹ�����');
define('ALB_MGR', '�ٹ�����');
define('ERR_INVALID_DATA', '\'%s\' ����Ÿ �����ϴ�!');
define('CREATE_ALB', '\'%s\' �ٹ�����');
define('UPDATE_ALB', '\'%s\' �ٹ� ������Ʈ \'%s\' �̹��� \'%s\' �ε���');
define('DEL_PIC', '�̹�������');
define('DEL_ALB', '�ٹ�����');
define('DEL_USER', '����ڻ���');
define('ERR_UNKNOWN_USER', '������ ����ڴ� �����ϴ� !');
define('COMMENT_DELETED', '�ڸ�Ʈ�� ���������� �����Ǿ����ϴ�.');

// lang_display_image_php
define('CONFIRM_DEL', '�̹����� �����Ͻðڽ��ϱ� ? \\n�ڸ�Ʈ�� �Բ� �����˴ϴ�.');
define('DEL_PIC', '�̹�������');
define('SIZE', '%s x %s pixels');
define('VIEWS', '%s times');
define('SLIDESHOW', '�����̵��');
define('STOP_SLIDESHOW', '�����̵��-����');
define('VIEW_FS', '���� �̹��� ����');

// lang_picinfo
define('TITLE', '���� ����');
define('FILENAME', '�����̸�');
define('ALBUM NAME', '�ٹ��̸�');
define('RATING', '���� (%s ��)');
define('KEYWORDS', 'Ű����');
define('FILE SIZE', '���� ũ��');
define('DIMENSIONS', 'Dimensions');
define('DISPLAYED', 'Displayed');
define('CAMERA', 'ī�޶�');
define('DATE TAKEN', '�Կ�����');
define('APERTURE', 'Aperture');
define('EXPOSURE TIME', 'Exposure time');
define('FOCAL LENGTH', 'Focal length');
define('COMMENT', '�ڸ�Ʈ');
define('ADDFAV', '���ã�⿡ �߰�');
define('ADDFAVPHRASE', '���ã��');
define('REMFAV', '���ã�⿡�� ����');

// lang_display_comments
define('OK', '���');
define('EDIT_TITLE', '�ڸ�Ʈ ����');
define('CONFIRM_DELETE', '�ڸ�Ʈ�� �����Ͻðڽ��ϱ� ?');
define('ADD_YOUR_COMMENT', '�ڸ�Ʈ ���');
define('NAME', '�̸�');
define('COMMENT', '�ڸ�Ʈ');
define('YOUR_NAME', '������');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'ȭ��ݱ�:�̹����� Ŭ��');

// lang_ecard_php
define('TITLE', 'e-card ������');
define('INVALID_EMAIL', '<b>Warning</b> : ��ȿ���� ���� �̸����Դϴ� !');
define('ECARD_TITLE', '%s�Բ��� ������ e-card �Դϴ�!');
define('VIEW_ECARD', 'ī�尡 �������ʴ� ����ڲ����� �̸�ũ�� Ŭ���ϼ��� !');
define('VIEW_MORE_PICS', '�� ���� �̹����� �����Ͻ÷��� Ŭ���ϼ��� !');
define('SEND_SUCCESS', 'e-card�� ���½��ϴ�!');
define('SEND_FAILED', '�˼��մϴ�, e-card �߼ۿ� �����Ͽ����ϴ�.');
define('FROM', 'e-card �ۼ���');
define('YOUR_NAME', '������ ��� �̸�');
define('YOUR_EMAIL', '������ ��� �̸���');
define('TO', 'To');
define('RCPT_NAME', '�޴� ��� �̸�');
define('RCPT_EMAIL', '�޴� ��� �̸���');
define('GREETINGS', '����');
define('MESSAGE', '�޼���');

// lang_editpics_php
define('PIC_INFO', '�̹��� ������');
define('ALBUM', '�ٹ�');
define('TITLE', '�̹��� ����');
define('DESC', '�̹��� ����');
define('KEYWORDS', '�˻� Ű����');
define('PIC_INFO_STR', '%sx%s - %sKB - %s views - %s votes');
define('APPROVE', '�̹��� ����');
define('POSTPONE_APP', '���� ����');
define('DEL_PIC', '�̹��� ����');
define('RESET_VIEW_COUNT', '��ȸ�� �ʱ�ȭ');
define('RESET_VOTES', '�� �ʱ�ȭ');
define('DEL_COMM', '�ڸ�Ʈ ����');
define('UPL_APPROVAL', '���ε� ����');
define('EDIT_PICS', '�̹��� ����');
define('SEE_NEXT', '����');
define('SEE_PREV', '����');
define('N_PIC', '������� �̹��� (%s)');
define('N_OF_PIC_TO_DISP', '�������� ����� �̹���');
define('APPLY', '������� ����');

// lang_groupmgr_php
define('GROUP_NAME', '�׷��̸�');
define('DISK_QUOTA', '��ũ �Ҵ�');
define('CAN_RATE', '�򰡰���');
define('CAN_SEND_ECARDS', 'e-card �߼۰���');
define('CAN_POST_COM', '�ڸ�Ʈ ��ϰ���');
define('CAN_UPLOAD', '�̹��� ���ε尡��');
define('CAN_HAVE_GALLERY', '���ξٹ� ��������');
define('APPLY', '������� ����');
define('CREATE_NEW_GROUP', '���׷� ����');
define('DEL_GROUPS', '������ �׷����');
define('CONFIRM_DEL', 'Warning, when you delete a group, users that belong to this group will be transfered to the \'Registered\' group !\\n\\nDo you want to proceed ?');
define('TITLE', '����� �׷����');
define('APPROVAL_1', 'Pub. Upl. approval (1)');
define('APPROVAL_2', 'Priv. Upl. approval (2)');
define('NOTE1', '<b>(1)</b> public album �� ���ε��� �̹����� �������� ���������� ���� �Խõ˴ϴ�.');
define('NOTE2', '<b>(2)</b> �����(ȸ��)�� ���ε��� �̹����� ���۱ǹ��� ������� �ʾƾ� �Խõ˴ϴ�. ');
define('NOTES', 'Notes');

// lang_index_php
define('WELCOME', 'ȯ���մϴ� !');

// lang_album_admin_menu
define('CONFIRM_DELETE', '�ٹ��� �����Ͻðڽ��ϱ� ? \\n��� �̹����� �ڸ�Ʈ�� �Բ� �����˴ϴ�.');
define('DELETE', '����');
define('MODIFY', '�ٹ�����');
define('EDIT_PICS', '�̹����� �������� ');

// lang_list_categories
define('HOME', '������ ����');
define('STAT1', '<b>ī�װ�:[cat] �ٹ�:[albums] �̹���:[pictures] �ڸ�Ʈ:[comments] ��ȸ:[views]</b>');
define('STAT2', '<b>�ٹ�:[albums] �̹���:[pictures] ��ȸ:[views]</b>');
define('XX_S_GALLERY', '%s\'������');
define('STAT3', '<b>ī�װ�:[cat] �ٹ�:[albums] �̹���:[pictures] �ڸ�Ʈ:[comments] ��ȸ:[views]</b>');

// lang_list_users
define('USER_LIST', '�����(ȸ��)���');
define('NO_USER_GAL', '�����(ȸ��) �������� �����ϴ�.');
define('N_ALBUMS', '%s �ٹ�');
define('N_PICS', '%s �̹���');

// lang_list_albums
define('N_PICTURES', '%s �̹���');
define('LAST_ADDED', ', last one added on %s');

// lang_modifyalb_php
define('UPD_ALB_N', '%s�� �ٹ� ������Ʈ');
define('GENERAL_SETTINGS', '�⺻����');
define('ALB_TITLE', '�ٹ� ����');
define('ALB_CAT', '�ٹ� ī�װ�');
define('ALB_DESC', '�ٹ� ����');
define('ALB_THUMB', '�ٹ� �����');
define('ALB_PERM', '�ٹ� ���Ѽ���');
define('CAN_VIEW', '�ٹ� ��������');
define('CAN_UPLOAD', '�湮�ڰ� �̹����� ���ε��Ҽ� ����');
define('CAN_POST_COMMENTS', '�湮�ڰ� �ڸ�Ʈ�� ���� ����');
define('CAN_RATE', '�湮�ڰ� ���� �� ����');
define('USER_GAL', '�����(ȸ��) ������');
define('NO_CAT', '*�ֻ��� ī�װ�(����)');
define('ALB_EMPTY', '�ٹ��� ����ֽ��ϴ�.');
define('LAST_UPLOADED', '������ ���ε�');
define('PUBLIC_ALB', '��ΰ���(public album)');
define('ME_ONLY', '��������');
define('OWNER_ONLY', '(%s)�� ����');
define('GROUPP_ONLY', '\'%s\' �׷�');
define('ERR_NO_ALB_TO_MODIFY', '������ �� �����ϴ�.');
define('UPDATE', '�ٹ� ������Ʈ');

// lang_rate_pic_php
define('ALREADY_RATED', '�˼��մϴ�. �̹� ���ϼ̽��ϴ�.');
define('RATE_OK', '���� �ּż� �����մϴ� !');

// lang_register_disclamer
define('REGISTER_DISCLAMER', '{SITE_NAME}�� ���� ���� ȯ���մϴ�.<br />
ȸ������ ���ξٹ��� ���� �����Ҽ� �ִ� �ý����� �غ��߿� �ֽ��ϴ�.<br />
����� �׽�Ʈ���̹Ƿ�, ȸ�������̳� ��Ÿ ������ ���α׷������� ���� ���ǵ��� å������ �ʽ��ϴ�.<br />
�ϴ� ȸ������� �в��� ���� ���½� �̸����� ���� �˷��帱 ���̸�, ���� �Ⱓ���� ������ ȸ���� ������� Ư���� �̺�Ʈ�� �غ��ϰ� �ֽ��ϴ�.<br />ȸ�����Խ� �̸����� ��ȿ�� üũ�� ���� ��ȿ���� ���� �̸����� ��ϵ��� �ʴ��� �����ϼ���.<br /><br />
�ٽ��ѹ� {SITE_NAME}�� �湮�� �ּż� �����մϴ�.');

// lang_register_php
define('PAGE_TITLE', 'ȸ�����');
define('TERM_COND', '��Ͼ�� �� �̿�ȳ�');
define('I_AGREE', '�����մϴ�!');
define('SUBMIT', 'ȸ�����');
define('ERR_USER_EXISTS', '�̹� ������� ���̵��Դϴ�. �ٸ� ���̵�� ����ϼ���.');
define('ERR_PASSWORD_MISMATCH', '�� ��й�ȣ�� ��ġ���� �ʽ��ϴ�.');
define('ERR_UNAME_SHORT', '���̵�� �ּ�4~10�� �̳��� �ۼ��ؾ� �մϴ�.');
define('ERR_PASSWORD_SHORT', '��й�ȣ�� �ּ�4~12�� �̳��� �ۼ��ؾ� �մϴ�.');
define('ERR_UNAME_PASS_DIFF', '���̵�� ��й�ȣ�� ��ġ���� �ʽ��ϴ�.');
define('ERR_INVALID_EMAIL', '�̸����� �Է��ϼ���.');
define('ERR_DUPLICATE_EMAIL', '�̹� ��ϵ� �̸��� �ּ��Դϴ�.');
define('ENTER_INFO', 'ȸ����� ��');
define('REQUIRED_INFO', '�ʼ��Է� �׸�');
define('OPTIONAL_INFO', '�߰�����');
define('USERNAME', '���̵�');
define('PASSWORD', '��й�ȣ');
define('PASSWORD_AGAIN', '��й�ȣ ���Է�');
define('EMAIL', '�̸���');
define('LOCATION', '����');
define('INTERESTS', '���ɺо�');
define('WEBSITE', 'Ȩ������');
define('OCCUPATION', '�Ͻô� ��');
define('ERROR', '����..');
define('CONFIRM_EMAIL_SUBJECT', '%s ȸ�����');
define('INFORMATION', '�ȳ�');
define('FAILED_SENDING_EMAIL', '������� �̸��� �߼۽��� !');
define('THANK_YOU', '������ּż� �����մϴ�.<br />�Է��� �̸��� �ּҷ� Ȱ��ȭ �ڵ尡 ��� �̸����� ���½��ϴ�.<br />��������� �Ϸ��Ϸ��� �̸����� Ȱ��ȭ �ڵ带 Ŭ�����ֽʽÿ�.');
define('ACCT_CREATED', 'ȸ������ ��������� ���������� �Ϸ�Ǿ����ϴ�. �α����� ���������� �������ֽʽÿ�.');
define('ACCT_ACTIVE', 'ȸ������ ������ ���������� Ȱ��ȭ�Ǿ����ϴ�. �α����� �̿����ֽʽÿ�.');
define('ACCT_ALREADY_ACT', 'ȸ������ ������ �̹� Ȱ��ȭ�Ǿ����ϴ� !');
define('ACCT_ACT_FAILED', '�� ������ Ȱ��ȭ���� �ʾҽ��ϴ� !');
define('ERR_UNK_USER', '������ ����ڴ� �������� �ʽ��ϴ� !');
define('X_S_PROFILE', '%s\'���� ��������');
define('GROUP', '�׷�');
define('REG_DATE', 'ȸ������');
define('DISK_USAGE', '��ũ ��뷮');
define('CHANGE_PASS', '��й�ȣ ����');
define('CURRENT_PASS', '���� ��й�ȣ');
define('NEW_PASS', '���ο� ��й�ȣ');
define('NEW_PASS_AGAIN', '��й�ȣ ���Է�');
define('ERR_CURR_PASS', '���� ��й�ȣ�� Ʋ���ϴ�.');
define('APPLY_MODIF', '������� ����');
define('UPDATE_SUCCESS', '���������� ������Ʈ �Ǿ����ϴ�.');
define('PASS_CHG_SUCCESS', '��й�ȣ�� ���� �Ǿ����ϴ�.');
define('PASS_CHG_ERROR', '��й�ȣ�� ������� �ʾҽ��ϴ�.');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', '�ݰ����ϴ� !! 

�� ������ '{SITE_NAME}' ȸ����� ��û�ڿ��� �����帮�� �����Դϴ�.

�Ʒ� ���̵�� ��й�ȣ�� �����ʵ��� �޸��صνñ� �ٶ��ϴ�.

���̵� : '{USER_NAME}'
��й�ȣ : '{PASSWORD}'

�߰��� �Ʒ� ��ũ�� Ŭ���ؼ� ȸ������ ������ Ȱ��ȭ ��Ų���� �α����ϼ���. 

{ACT_LINK}

��Ÿ ���ǻ����� ��� ���� tmax@puchonphoto.com �� �ֽñ� �ٶ��ϴ�.

{SITE_NAME} ���
');

// lang_reviewcom_php
define('TITLE', '�ڸ�Ʈ �ٽú���');
define('NO_COMMENT', '�ڸ�Ʈ �����ϴ�.');
define('N_COMM_DEL', '%s comment(s) deleted');
define('N_COMM_DISP', '�������� ��±ۼ�');
define('SEE_PREV', '����');
define('SEE_NEXT', '����');
define('DEL_COMM', '������ �ڸ�Ʈ ����');

// lang_search_php
define('SEARCH', '�̹��� ������ �˻�');

// lang_search_new_php
define('PAGE_TITLE', '�� �̹��� �˻�');
define('SELECT_DIR', '���ε� ���丮');
define('SELECT_DIR_MSG', 'FTP�� �̿� ������ ������ �̹� ���ε��� ������ ���ϴ� �������� ������� �ִ� �۾��� �ϴ� ���Դϴ�. <br /><br />*�̹��� ������(public_html/gallery/Albums/userpics)������ ������ ���� �Ʒ� �۾��� �����մϴ�.<br /><br />1) userpics �� Ŭ���ϸ� ��ü ����Ʈ ��� ���� ���ε�� ���ϸ� üũ�Ǿ� �ֽ��ϴ�.<br />2) ���ϴ� �������� ������ ���� \"������ �̹��� ����\" ��ư�� Ŭ�� ����մϴ�.<br /><br />*�ϳ��� ������ �� ���� �������� ��ũ�� �� �����ϴ�. �ش� ���������� ������ ���� �ϼ���.');
define('NO_PIC_TO_ADD', '����� �̹��� �����ϴ�.');
define('NEED_ONE_ALBUM', '�ϳ� �̻��� �ٹ��� ������ ���� �̿��ϼ���.');
define('WARNING', '����');
define('CHANGE_PERM', '�̹����� ���ε��ϱ� ���� �ش� ���丮�� �۹̼��� 755 �Ǵ� 777 �� �����ؾ� �մϴ� !');
define('TARGET_ALBUM', '<b>&quot; %s &quot; ������ �̹����� ������ ������ ���� </b>%s');
define('FOLDER', '���ε� ����');
define('IMAGE', '�̹���');
define('ALBUM', '������');
define('RESULT', '���');
define('DIR_RO', '���� ���� �����ϴ�. ');
define('DIR_CANT_READ', '�б� ���� �����ϴ�. ');
define('INSERT', '�������� ���ο� �̹��� ����');
define('LIST_NEW_PIC', '�� �̹��� ���');
define('INSERT_SELECTED', '������ �̹��� ����');
define('NO_PIC_FOUND', '�� �̹����� ã�� ���Ͽ����ϴ�.');
define('BE_PATIENT', '��� �������� �����ϼ���.');
define('NOTES', '<ul><li><b>OK</b> : ���Ἲ��<li><b>DP</b> : �ٸ� �������� �̹� ��ϵǾ�����<li><b>PB</b> : ����, ���ε� ���丮�� �۹̼ǵ� �߰��۾� �ʿ�<li>���� ���â�� OK, DP, PB ���� �������� ǥ�õ��� �ʾҴٸ� ���α׷��� �����ϼ���.</ul>');

// lang_upload_php
define('TITLE', '�̹��� ���ε�');
define('MAX_FSIZE', '���ε� ��� �ִ� ����ũ�� %s KB');
define('ALBUM', '�ٹ�');
define('PICTURE', '�̹���');
define('PIC_TITLE', '�̹��� ����');
define('DESCRIPTION', '�̹��� ����');
define('KEYWORDS', 'Ű���� (�˻���)');
define('ERR_NO_ALB_UPLOADABLES', '�ش� ���� �����ϴ�.');

// lang_usermgr_php
define('TITLE', '�����(ȸ��)����');
define('NAME_A', '�̸� (a-z)');
define('NAME_D', '�̸� (z-a)');
define('GROUP_A', '�׷� (a-z)');
define('GROUP_D', '�׷� (z-a)');
define('REG_A', '��� (a-z)');
define('REG_D', '��� (z-a)');
define('PIC_A', '��ȸ (a-z)');
define('PIC_D', '��ȸ (z-a)');
define('DISKU_A', '��뷮 (a-z)');
define('DISKU_D', '��뷮 (z-a)');
define('SORT_BY', '���ļ���');
define('ERR_NO_USERS', '�����(ȸ��) ���̺��� ����ֽ��ϴ� !');
define('ERR_EDIT_SELF', '������ �� �����ϴ�. �������� ���� �������� �̿��ϼ���.');
define('EDIT', '����');
define('DELETE', '����');
define('NAME', '����� �̸�');
define('GROUP', '�׷�');
define('INACTIVE', '��Ȱ��');
define('OPERATIONS', '����޴�');
define('PICTURES', '�̹���');
define('DISK_SPACE', '��뷮/�Ҵ緮');
define('REGISTERED_ON', 'ȸ��');
define('U_USER_ON_P_PAGES', '%d ��ü %d ������');
define('CONFIRM_DEL', '���� �Ͻðڽ��ϱ� ? \\n��ϵ� ��� ������ �����˴ϴ�.');
define('MAIL', '�̸���');
define('ERR_UNKNOWN_USER', '������ ȸ���� �������� �ʽ��ϴ� !');
define('MODIFY_USER', 'ȸ������ ����');
define('NOTES', '�޸�');
define('NOTE_LIST', '<li>��й�ȣ�� �������� ������� ����νø� �˴ϴ�.');
define('PASSWORD', '��й�ȣ');
define('USER_ACTIVE', 'Ȱ��ȭ�� �����');
define('USER_GROUP', '����� �׷�');
define('USER_EMAIL', '����� �̸���');
define('USER_WEB_SITE', '����� Ȩ������');
define('CREATE_NEW_USER', '���ο� ����� ����');
define('USER_LOCATION', '������');
define('USER_INTERESTS', '���ɺо�');
define('USER_OCCUPATION', '�Ͻô� ��');

// lang_util_php
define('TITLE', '�̹���ũ�����');
define('WHAT_IT_DOES', 'What it does');
define('WHAT_UPDATE_TITLES', '�����̸����� �������');
define('WHAT_DELETE_TITLE', '�������');
define('WHAT_REBUILD', '����� ���ۼ��� �̹���ũ�⺯��');
define('WHAT_DELETE_ORIGINALS', 'Deletes original sized photos replacing them with the sized version');
define('FILE', '����');
define('TITLE_SET_TO', '������ ');
define('SUBMIT_FORM', '����');
define('UPDATED_SUCCESFULLY', '���� ����');
define('ERROR_CREATE', '�����߻�');
define('CONTINUE', 'Process more images');
define('MAIN_SUCCESS', 'The file %s was successfully used as main picture');
define('ERROR_RENAME', '%s �� %s\' �� �̸� ������ �����߻�');
define('ERROR_NOT_FOUND', '���� %s �� ã���� �����ϴ�.');
define('BACK', '��������');
define('THUMBS_WAIT', '����ϰ� ũ�Ⱑ ������ �̹����� �����ϰ� �ֽ��ϴ�, ��ٸ�����...');
define('THUMBS_CONTINUE_WAIT', '����� Ȥ�� �������� �̹����� �����ϰ� �ֽ��ϴ�...');
define('TITLES_WAIT', '���������, ��ٸ�����...');
define('DELETE_WAIT', '���������, ��ٸ�����...');
define('REPLACE_WAIT', '�����̹��� ������ ���������� �̹����� ��ü��, ��ٸ�����..');
define('INSTRUCTION', 'Quick instructions');
define('INSTRUCTION_ACTION', 'Select action');
define('INSTRUCTION_PARAMETER', '���� ����');
define('INSTRUCTION_ALBUM', '�ٹ�����');
define('INSTRUCTION_PRESS', 'Press %s');
define('UPDATE', '����� Ȥ�� ��������� �̹��� ����');
define('UPDATE_WHAT', 'What should be updated');
define('UPDATE_THUMB', '����ϸ�');
define('UPDATE_PIC', 'ũ������� �̹�����');
define('UPDATE_BOTH', '����ϰ� ũ������� �̹���');
define('UPDATE_NUMBER', 'Number of processed images per click');
define('UPDATE_OPTION', '(�ð���������� �߻��ϸ� �� �ɼ��� ���� �����ϼ���)');
define('FILENAME_TITLE', '�����̸� &rArr; �̹��� ����');
define('FILENAME_HOW', 'How should the filename be modified');
define('FILENAME_REMOVE', 'Remove the .jpg ending and replace _ (underscore) with spaces');
define('FILENAME_EURO', 'Change 2003_11_23_13_20_20.jpg to 23/11/2003 13:20');
define('FILENAME_US', 'Change 2003_11_23_13_20_20.jpg to 11/23/2003 13:20');
define('FILENAME_TIME', 'Change 2003_11_23_13_20_20.jpg to 13:20');
define('DELETE', '�̹������� Ȥ�� �����̹��� ����');
define('DELETE_TITLE', '�̹������� ����');
define('DELETE_ORIGINAL', '�����̹��� ����');
define('DELETE_REPLACE', '�����̹��� ������ �������� �̹����� ��ü');
define('SELECT_ALBUM', '�ٹ� ����');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>