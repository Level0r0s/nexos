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
/*   $Id: lang-arabic.php,v 1.1 2004/07/15 20:39:00 akamu Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Arabic');
define('LANG_NAME_NATIVE', '����');
define('LANG_COUNTRY_CODE', 'ar');
define('TRANS_NAME', 'Waheed Alsayer');
define('TRANS_EMAIL', 'waheed@shamayel.com');
define('TRANS_WEBSITE', 'http://www.shamayel.com/');
define('TRANS_DATE', '2003-10-02');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'windows-1256');

// ltr or rtl
define('TEXT_DIR', 'rtl');

// left is for port compliancy
define('YES', '���');
define('NO', '��');

// some common strings
define('BACK', '����');
define('CONTINUE', '�����');
define('INFO', '�������');
define('ERROR', '���');

//// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%d/%m/%y at %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y at %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y at %I:%M %p');

// short names for Byte, Kilo, Mega
$lang_byte_units = array('����','�.�','�.�',);

// Day of week
$lang_day_of_week = array('���','�����','������','������','����','����','���',);
// Day of the month
$lang_month = array('�����','������','����','�����','����','�����','�����','�����','������','������','������','������');
// For the word censor
$lang_bad_words = array('*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*',);
// lang_meta_album_names
define('RANDOM', '��� ����������');
define('LASTUP', '����� ��������');
define('LASTUPBY', '������� �������');
define('LASTALB', '��� ������� �� �������');
define('LASTCOM', '��� ���������');
define('LASTCOMBY', '�������� �������');
define('TOPN', '������ ������');
define('TOPRATED', '������ ������');
define('LASTHITS', '��� �� ����');
define('SEARCH', '����� ������');
define('FAVPICS', '��� �����');

// lang_errors
define('ACCESS_DENIED', '���� ���� �������� ����� ��� ������.');
define('PERM_DENIED', '��� ���� �������� ������ ���� ��������.');
define('PARAM_MISSING', '��� ���� �������� ���� �������.');
define('NON_EXIST_AP', '������� �� ������ �������� ��� ������!');
define('QUOTA_EXCEEDED', '����� ���� �������<br /><br />������� �������� �� [quota]K, ���� ���� ����� [space]K, ������� ��� ������ ��� ����� ���� ������� �������� ��.');
define('GD_FILE_TYPE_ERR', '��� ������� ����� GD ������� �� ���� ��� �������  JPEG � PNG.');
define('INVALID_IMAGE', '������ ������� ��� ����� �� �� ����� ������ GD');
define('RESIZE_FAILED', '�� ����� ����� ������ ������ �� �������.');
define('NO_IMG_TO_DISPLAY', '�� ���� ���� �����');
define('NON_EXIST_CAT', '������� ������� ��� �����');
define('ORPHAN_CAT', '����� ��� �� ����� �����, ��� ���� ��������� ����� �������.');
define('DIRECTORY_RO', '������ \'%s\' ��� ���� �������, �� ������ ����� ������');
define('NON_EXIST_COMMENT', '������� ������� ��� �����.');
define('PIC_IN_INVALID_ALBUM', '������ ��� ������ �� ������� (%s)!?');
define('BANNED', '��� ����� �� ������� ������ �����.');
define('NOT_WITH_UDB', '��� ������ ����� �� Coppermine ����� ������ �� �������. ��� �� ��� ������ �� ��� �����, �� �� ������ ������� ���� ���� ������.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', '����� ��� ����� ���������');
define('ALB_LIST_LNK', '����� ���������');
define('MY_GAL_TITLE', '����� ��� ������ �����');
define('MY_GAL_LNK', '������ �����');
define('MY_PROF_LNK', '������');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', '����� ��� ����� �������');
define('ADM_MODE_LNK', '���� �������');
define('USR_MODE_TITLE', '����� ��� ����� ���������');
define('USR_MODE_LNK', '���� ��������');
define('UPLOAD_PIC_TITLE', '����� ������ �� �������');
define('UPLOAD_PIC_LNK', '����� ������');
define('REGISTER_TITLE', '����� ����');
define('REGISTER_LNK', '�����');
define('LOGIN_LNK', '����');
define('LOGOUT_LNK', '����');
define('LASTUP_LNK', '��� �����');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  '��� �������');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', '���� ����� ������');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  '���� ����� ������');
define('SEARCH_LNK', '����');
define('FAV_LNK', '�������');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', '�������� ��� �������');
define('CONFIG_LNK', '�����');
define('ALBUMS_LNK', '���������');
define('CATEGORIES_LNK', '���������');
define('USERS_LNK', '����������');
define('GROUPS_LNK', '�������');
define('COMMENTS_LNK', '�������');
define('SEARCHNEW_LNK', '��� ������ �� �����');
define('UTIL_LNK', '����� ������ �����');
define('BAN_LNK', '��� ����������');

// lang_user_admin_menu
define('ALBMGR_LNK', '���� / ���� ��������');
define('MODIFYALB_LNK', '����� ��������');
define('MY_PROF_LNK', '����� ������');

// lang_cat_list
define('CATEGORY', '�������');
define('ALBUMS', '���������');
define('PICTURES', '�����');

// lang_album_list
define('ALBUM_ON_PAGE', '%d ����� �� %d ����');

// lang_thumb_view
define('DATE', '�������');
define('NAME', '��� �����');
define('TITLE', '�������');
define('SORT_DA', '����� ������ ��� �������');
define('SORT_DD', '����� ������ �������');
define('SORT_NA', '����� ������ �����');
define('SORT_ND', '����� ������ �����');
define('SORT_TA', '����� ������� ������');
define('SORT_TD', '����� ������� ������');
define('PIC_ON_PAGE', '%d ���� �� %d ����/�����');
define('USER_ON_PAGE', '%d ������ �� %d ����');
define('SORT_RA', '����� ������� �������');
define('SORT_RD', '����� ������� �������');
define('RATING', '�������');
define('SORT_TITLE', '����� ����� ���:');

// lang_img_nav_bar
define('THUMB_TITLE', '������ ��� ���������');
define('PIC_INFO_TITLE', '����/���� ������� �����');
define('SLIDESHOW_TITLE', '��� ���');
define('SLIDESHOW_DISABLED', '�������� ����������� �����');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', '���� ������ �����');
define('ECARD_DISABLED', '����� ������� �����');
define('ECARD_DISABLED_MSG', '��� ���� �������� ������ ��� ������');
define('PREV_TITLE', '������ �������');
define('NEXT_TITLE', '������ ���� ������');
define('PIC_POS', '����� %s/%s');
define('NO_MORE_IMAGES', '�� ���� ��� ������ �� ������');
define('NO_LESS_IMAGES', '��� �� ��� ���� �� ������');

// lang_rate_pic
define('RATE_THIS_PIC', '���� ��� ������');
define('NO_VOTES', '(�� ���� �����)');
define('RATING', '(������� ������: %s / 5 �� %s �����)');
define('RUBBISH', '�����');
define('POOR', '��� ������');
define('FAIR', '������');
define('GOOD', '�����');
define('EXCELLENT', '�������');
define('GREAT', '������');

// lang_cpg_die
define('INFORMATION', '�������');
define('ERROR', '���');
define('CRITICAL_ERROR', '��� ����');
define('FILE', '���: ');
define('LINE', '�����: ');

// lang_display_thumbnails
define('FILENAME', '��� ����� : ');
define('FILESIZE', '����� : ');
define('DIMENSIONS', '������� : ');
define('DATE_ADDED', '���� �� : ');

// lang_get_pic_data
define('N_COMMENTS', '%s �����');
define('N_VIEWS', '%s ������');
define('N_VOTES', '(%s �����)');

// lang_smilies_inc_php
define('EXCLAMATION', '����');
define('QUESTION', '�������');
define('VERY HAPPY', '���� ���');
define('SMILE', '�������');
define('SAD', '����');
define('SURPRISED', '����');
define('SHOCKED', '�����');
define('CONFUSED', '�����');
define('COOL', '����');
define('LAUGHING', '����');
define('MAD', '����');
define('RAZZ', 'Razz');
define('EMBARASSED', '����');
define('CRYING OR VERY SAD', '���� �� ���� ���');
define('EVIL OR VERY MAD', '������ �� ���� ���');
define('TWISTED EVIL', 'Twisted Evil');
define('ROLLING EYES', '���� �����');
define('WINK', '����');
define('IDEA', '����');
define('ARROW', '���');
define('NEUTRAL', '����');
define('MR. GREEN', 'Mr. Green');

// lang_admin_php
define('LV_ADMIN', '��� ���� ���� ���� �������...');
define('ENT_ADMIN', '��� ���� ���� ���� �������...');

// lang_albmgr_php
define('ALB_NEED_NAME', '������� ����� ��� ���� !');
define('CONFIRM_MODIFS', '�� ��� ������ ���� ���� ��� ��� ����������  ?');
define('NO_CHANGE', '�� ��� ��� ����� !');
define('NEW_ALBUM', '������ ����');
define('CONFIRM_DELETE1', '�� ��� ����� ������ ��� ������� ?');
define('CONFIRM_DELETE2', '\\n��� ��� ��� ����� � ��������� !');
define('SELECT_FIRST', '���� ��� ������� �����');
define('ALB_MRG', '������ ��������');
define('MY_GALLERY', '* ������ *');
define('NO_CATEGORY', '* ������ ��� ����� *');
define('DELETE', '������');
define('NEW', '����');
define('APPLY_MODIFS', '������ ���������� ');
define('SELECT_CATEGORY', '������ ������� ');

// lang_catmgr_php
define('MISS_PARAM', '��������� �������� ������� \'%s\'�� ���� !');
define('UNKNOWN_CAT', '������� ������� ��� �����');
define('USERGAL_CAT_RO', '������ ������ ����� ���������� !');
define('MANAGE_CAT', '����� ���������');
define('CONFIRM_DELETE', '�� ��� ����� �� ����� ��� �������');
define('CATEGORY', '�������');
define('OPERATIONS', '��������');
define('MOVE_INTO', '���� ���');
define('UPDATE_CREATE', '����� �� ����� �����');
define('PARENT_CAT', '������� ����');
define('CAT_TITLE', '����� �������');
define('CAT_DESC', '��� �������');

// lang_config_php
define('TITLE', '�����������');
define('RESTORE_CFG', '������ ���������');
define('SAVE_CFG', '����� ���������');
define('NOTES', '���������');
define('INFO', '�����������');
define('UPD_SUCCESS', '��� �� ����� ���������');
define('RESTORE_SUCCESS', '�� ����� ��������� �������');
define('NAME_A', '������ ��� �����');
define('NAME_D', '������ ��� �����');
define('TITLE_A', '������ ��� �������');
define('TITLE_D', '������ ��� �������');
define('DATE_A', '����� ������');
define('DATE_D', '����� ������');
define('RATING_A', '������� �������');
define('RATING_D', '������� �������');
define('TH_ANY', '���� ����');
define('TH_HT', '��������');
define('TH_WD', '�����');

// lang_config_data
define('CONFIG_GENSET', '������� ����');
define('GALLERY_NAME', '��� ������');
define('GALLERY_DESCRIPTION', '��� ������');
define('GALLERY_ADMIN_EMAIL', '������ ���������� ����� ������');
define('ECARDS_MORE_PIC_TARGET', '������� ����� ����� \'���� ������ �� �����\' �� ������');
define('LANG', '�����');
define('THEME', '�����');
define('NICE_TITLES', '������ ����� ������� ���� �� >Coppermine');
define('ALB_LIST_VIEW_TITLE', '���� ������� ������');
define('MAIN_TABLE_WIDTH', '��� ������ ������� ���� ����� (������� �� �������)');
define('SUBCAT_LEVEL', '��� ������� ������� ���� ����');
define('ALBUMS_PER_PAGE', '��� ��������� ���� ����');
define('ALBUM_LIST_COLS', '��� ������� ���� �������');
define('ALB_LIST_THUMB_SIZE', '���� �������� �������');
define('MAIN_PAGE_LAYOUT', '������� ������ ��������');
define('FIRST_LEVEL', '���� ������� ����� ������� ����� �� ��������� ');
define('THUMB_VIEW_TITLE', '��� ���������');
define('THUMBCOLS', '��� ������� �� ���� ������� �����');
define('THUMBROWS', '��� ������ �� ���� ������� �����');
define('MAX_TABS', '���� ��� ������� ���� �����');
define('CAPTION_IN_THUMBVIEW', '��� ����� ����� ���� ������');
define('DISPLAY_COMMENT_COUNT', '���� ��� ��������� ���� ������');
define('DEFAULT_SORT_ORDER', '������� �������� �����');
define('MIN_VOTES_FOR_RATING', '��� ��� �� ��������� ����� ������ �� �����  \'���� �����\'');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', '������� ���� ����� ����������');
define('PICTURE_TABLE_WIDTH', '��� ������ ���� ����� (������� �� �������)');
define('DISPLAY_PIC_INFO', '������� ����� ��� �������');
define('FILTER_BAD_WORDS', '����� ������� ������ �� ��������� (���� ����� ��� ������� �� �������� ����)');
define('ENABLE_SMILIES', '������ ������� ������� �� ���������');
define('DISABLE_FLOOD_PROTECTION', 'Allow several consecutive comments on one pic from the same user');
define('COMMENT_EMAIL_NOTIFICATION', 'Email site admin upon comment submission');
define('MAX_IMG_DESC_LENGTH', '���� ��� ���� ������');
define('MAX_COM_WLENGTH', '���� ��� �� ������ �� ������');
define('MAX_COM_LINES', '���� ��� �� ������ �� �������');
define('MAX_COM_SIZE', '���� ��� �������');
define('DISPLAY_FILM_STRIP', '���� ���� �����');
define('MAX_FILM_STRIP_ITEMS', '��� ����� �� ���� �����');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('39', '������� ����� ��������');
define('JPEG_QUAL', '���� ���� �� ���');
define('THUMB_WIDTH', '���� ���� ������ ������ <b>*</b>');
define('THUMB_USE', '������ �������� (��� �� ������ �� ���� ����� ������ ����� )<b>*</b>');
define('MAKE_INTERMEDIATE', '��� ��� �����');
define('PICTURE_WIDTH', '���� ��� �� ������ ����� ����� <b>*</b>');
define('MAX_UPL_SIZE', '���� ��� ����� ����� (������� ����)');
define('MAX_UPL_WIDTH_HEIGHT', '���� ��� �� ������ ����� ����� �������');
define('47', '������� ��������');
define('ALLOW_USER_REGISTRATION', '������ ������� ���� ��������');
define('REG_REQUIRES_VALID_EMAIL', '����� �������� ����� ������� ������� ����������');
define('ALLOW_DUPLICATE_EMAILS_ADDR', '������ ��������� ����� �� ���� ��� ��� ������ ����������');
define('ALLOW_PRIVATE_ALBUMS', '���� ���������� �� ���� ��� ����� ���');
define('52', '������ ������ ���� ����� (����� ����� �� ��� �� ���� ��������)');
define('USER_FIELD1_NAME', '��� ����� �����');
define('USER_FIELD2_NAME', '��� ����� ������');
define('USER_FIELD3_NAME', '��� ����� ������');
define('USER_FIELD4_NAME', '��� ����� ������');
define('57', '������� ����� �������� ����� ��������');
define('SHOW_PRIVATE', '���� ��� ����� ��� �������� �������');
define('FORBIDEN_FNAME_CHAR', '������ �������� �� ����� �������');
define('ALLOWED_FILE_EXTENSIONS', '���������� ������� ��� �� ������� �������');
define('THUMB_METHOD', '����� ����� ���� ������');
define('IMPATH', '������ ��� ���� ImageMagick/Netpbm \'�������\'  (���� /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', '����� ����� ������� ��� (������ ��� �� ImageMagick)');
define('IM_OPTIONS', '����� �������� ImageMagick');
define('READ_EXIF_DATA', '���� ������ EXIF �� ����� JPEG');
define('READ_IPTC_DATA', 'Read IPTC data in JPEG files');
define('FULLPATH', '���� ������� <b>*</b>');
define('USERPICS', '���� ��� ���������� <b>*</b>');
define('NORMAL_PFX', '������ ������ ����� �������(��� �� ���� �������� <b>*</b>');
define('THUMB_PFX', '������ ������ �������� ����� <b>*</b>');
define('DEFAULT_DIR_MODE', '����� ��������� ��������');
define('DEFAULT_FILE_MODE', '����� ��������� �����');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('81', '������� ������� ���� ������');
define('COOKIE_NAME', '��� ������ �������� �� ��������');
define('COOKIE_PATH', '���� ������� �������� �� ��������');
define('CHAR_SET', '��� ������ ���������');
define('MISC_SETTING_TITLE', '������� ����');
define('DEBUG_MODE', '����� ��� ������');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) Fields marked with * must not be changed if you already have pictures in your gallery</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', '��� �� ���� ���� �������');
define('COM_ADDED', '�� ����� �������');
define('ALB_NEED_TITLE', '��� �� ���� ����� ������� !');
define('NO_UDP_NEEDED', '�� ���� �������.');
define('ALB_UPDATED', '�� ����� �������');
define('UNKNOWN_ALBUM', '������� ������� ��� ����� �� ��� �� �������� ������� �� ��� �������');
define('NO_PIC_UPLOADED', '�� ���� ��� ����� !<br /><br />��� ��� ���� ����� ��� �������, ���� �� �� ���� ������� ���� ��������...');
define('ERR_MKDIR', '�� ����� ����� ������ %s !');
define('DEST_DIR_RO', '���� ����� %s ��� ���� ������� !');
define('ERR_MOVE', '�� �������� ��� %s ��� %s !');
define('ERR_FSIZE_TOO_LARGE', '����� ���� ���� ������� ����� ��� (���� ��� ������ �� %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', '����� ���� ���� ������� ����� ��� (���� ��� ������ �� %s KB) !');
define('ERR_INVALID_IMG', '������ ���� �� ������� ��� ����� !');
define('ALLOWED_IMG_TYPES', '������ ����� %s ����.');
define('ERR_INSERT_PIC', '������ \'%s\' �� ���� ������ �� ������� ');
define('UPLOAD_SUCCESS', '��� ����� ������ �����<br /><br />��� ����� ��� ������ ������.');
define('INFO', '�������');
define('ERR_COMMENT_EMPTY', '�� ���� ������� !');
define('ERR_INVALID_FEXT', '��� ���� �������� ���� ����� �� : <br /><br />%s.');
define('NO_FLOOD', '���� ���� ��� ��� ��� ���� ��� ��� ������<br /><br />������ ����� ������ ��� ������');
define('REDIRECT_MSG', '���� ������ ��� ���� ����.<br /><br /><br />���� ���  \'�������\' �� �� ��� ����� ����� ������ �������');
define('UPL_SUCCESS', '�� ����� ������ �����');

// lang_delete_php
define('CAPTION', '�������');
define('FS_PIC', '���� ������ �������');
define('DEL_SUCCESS', '�� ������� �����');
define('NS_PIC', '���� ������ �������');
define('ERR_DEL', '�� ���� ������');
define('THUMB_PIC', '�����');
define('COMMENT', '�����');
define('IM_IN_ALB', '���� �� �������');
define('ALB_DEL_SUCCESS', '������� \'%s\' �� ������');
define('ALB_MGR', '���� �������');
define('ERR_INVALID_DATA', '������ ��� ����� �� ��������� �� \'%s\'');
define('CREATE_ALB', '���� ����� ������� \'%s\'');
define('UPDATE_ALB', '���� ����� ������� \'%s\' �������� \'%s\' ������� \'%s\'');
define('DEL_PIC', '����� ������');
define('DEL_ALB', '���� �������');
define('DEL_USER', '���� ��������');
define('ERR_UNKNOWN_USER', '�������� ������� ��� ����� !');
define('COMMENT_DELETED', '�� ����� ������� �����');

// lang_display_image_php
define('CONFIRM_DEL', '�� ��� ����� ������ ������ ? \\n���� ����� ��������� ����.');
define('DEL_PIC', '���� ����� ��� ������');
define('SIZE', '%s �� %s ����');
define('VIEWS', '%s �����');
define('SLIDESHOW', '��� �������');
define('STOP_SLIDESHOW', '������ ��� �������');
define('VIEW_FS', '���� ������� ������');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('TITLE', '������� �� ������');
define('FILENAME', '��� �����');
define('ALBUM NAME', '��� �������');
define('RATING', '����� (%s �����)');
define('KEYWORDS', '������� ���������� ');
define('FILE SIZE', '��� �����');
define('DIMENSIONS', '������� ');
define('DISPLAYED', '��� ���� �������');
define('CAMERA', '��� �������');
define('DATE TAKEN', '����� ������ ������');
define('APERTURE', '������ ');
define('EXPOSURE TIME', '��� �������� ');
define('FOCAL LENGTH', '����� ������� ');
define('COMMENT', '�������');
define('ADDFAV', '��� ��� �������');
define('ADDFAVPHRASE', '�������');
define('REMFAV', '��� �� �������');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', '�����');
define('EDIT_TITLE', '������� ���������');
define('CONFIRM_DELETE', '�� ��� ������ ����� ��� ��������� ?');
define('ADD_YOUR_COMMENT', '����� ��������');
define('NAME', '�����');
define('COMMENT', '�����');
define('YOUR_NAME', '�����');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', '���� ��� ������ ������ �������');

// lang_ecard_php
define('TITLE', '����� ��� ������');
define('INVALID_EMAIL', '<b>������</b> : ������ ���������� ��� !');
define('ECARD_TITLE', '��� ��  %s ��');
define('VIEW_ECARD', '�� �� ���� ����� ������� �������, ���� ���');
define('VIEW_MORE_PICS', '���� ��� ����� ������ �� ����� !');
define('SEND_SUCCESS', '�� ����� ����');
define('SEND_FAILED', '���� ��� ������ �� ������ ����� �����...');
define('FROM', '��');
define('YOUR_NAME', '����');
define('YOUR_EMAIL', '������ ����������');
define('TO', '���');
define('RCPT_NAME', '��� ������ ����');
define('RCPT_EMAIL', '���� ������ ���� ����������');
define('GREETINGS', '������');
define('MESSAGE', '�������');

// lang_editpics_php
define('PIC_INFO', '������� ������');
define('ALBUM', '�����');
define('TITLE', '����� ������');
define('DESC', '���� �� ������');
define('KEYWORDS', '������� ���������� ');
define('PIC_INFO_STR', '%sx%s - %s�������� - %s ������ - %s �������');
define('APPROVE', '����� ������');
define('POSTPONE_APP', '����� ��������');
define('DEL_PIC', '����� ������');
define('READ_EXIF', 'Read EXIF info again');
define('RESET_VIEW_COUNT', '��� ������');
define('RESET_VOTES', '����� �������');
define('DEL_COMM', '��� ���������');
define('UPL_APPROVAL', '������ �������');
define('EDIT_PICS', '������ �����');
define('SEE_NEXT', '����� ��������');
define('SEE_PREV', '����� �������');
define('N_PIC', '%s ������');
define('N_OF_PIC_TO_DISP', '��� ����� ��������');
define('APPLY', '����� �������');

// lang_groupmgr_php
define('GROUP_NAME', '��� ��������');
define('DISK_QUOTA', '����� ������� ��������');
define('CAN_RATE', '�� ������ ����� �����');
define('CAN_SEND_ECARDS', '������ ����� ������ �����');
define('CAN_POST_COM', '������ ����� �������');
define('CAN_UPLOAD', '������ ����� �����');
define('CAN_HAVE_GALLERY', '������ ������ ��� ���� ����');
define('APPLY', '����� ���������');
define('CREATE_NEW_GROUP', '����� ������ �������� �����');
define('DEL_GROUPS', '����� ��������� ��������');
define('CONFIRM_DEL', '�����, ����� ���� ������, ���� ��� ���������� �� ��� �������� ��� ����� \'��������\' !\\n\\n�� ��� ������� �������  ?');
define('TITLE', '����� ������� ����������');
define('APPROVAL_1', '������ ����� ���� (1)');
define('APPROVAL_2', '������ ����� ���� (2)');
define('NOTE1', '<b>(1)</b> ������� �� ������� ����� ����� ������ ������');
define('NOTE2', '<b>(2)</b> ��������� ���� ������ �������� ����� ������ ������');
define('NOTES', '�������');

// lang_index_php
define('WELCOME', '������ ������� �� ���');

// lang_album_admin_menu
define('CONFIRM_DELETE', '�� ��� ����� ������ ��� ������ ? \\nAll pictures and comments will also be deleted.');
define('DELETE', '����� ������');
define('MODIFY', '����� �������');
define('EDIT_PICS', '����� ������');

// lang_list_categories
define('HOME', 'Home');
define('STAT1', '<b>[pictures]</b> ���� �� <b>[albums]</b> ����� � <b>[cat]</b> ������� �� <b>[comments]</b> ������� ����� <b>[views]</b> ���');
define('STAT2', '<b>[pictures]</b> ���� �� <b>[albums]</b> ����� ������ <b>[views]</b> ���');
define('XX_S_GALLERY', '���� %s');
define('STAT3', '<b>[pictures]</b> ���� �� <b>[albums]</b> ����� �� <b>[comments]</b> ������� ����� <b>[views]</b> ���');

// lang_list_users
define('USER_LIST', '����� ����������');
define('NO_USER_GAL', '�� ���� �������� ���� �� ���� ��� �������');
define('N_ALBUMS', '%s �����');
define('N_PICS', '%s ����/���');

// lang_list_albums
define('N_PICTURES', '%s ����');
define('LAST_ADDED', ', ��� ���� ����� �� %s');

// lang_modifyalb_php
define('UPD_ALB_N', '����� ������� %s');
define('GENERAL_SETTINGS', '������� ����');
define('ALB_TITLE', '����� �������');
define('ALB_CAT', '����� �������');
define('ALB_DESC', '��� �������');
define('ALB_THUMB', '���� �������');
define('ALB_PERM', '������� �������');
define('CAN_VIEW', '������� ������� ��');
define('CAN_UPLOAD', '������ �������� ����� ���');
define('CAN_POST_COMMENTS', '������ �������� ����� �������');
define('CAN_RATE', '������ �������� �������');
define('USER_GAL', '����� ����������');
define('NO_CAT', '* ��� ���� *');
define('ALB_EMPTY', '������� ����');
define('LAST_UPLOADED', '��� �����');
define('PUBLIC_ALB', '������ (����� ���)');
define('ME_ONLY', '�� ���');
define('OWNER_ONLY', '���� ������� (%s) ���');
define('GROUPP_ONLY', '����� �������� \'%s\'');
define('ERR_NO_ALB_TO_MODIFY', '�� ���� ����� ������ ������ �� ����� ��������.');
define('UPDATE', '����� �������');

// lang_rate_pic_php
define('ALREADY_RATED', '���� ��� ��� �� ���� ��� ������ �����');
define('RATE_OK', '�� ���� ������');

// lang_register_disclamer
define('REGISTER_DISCLAMER', '��� �� ����� ������ {SITE_NAME} ������� ������ �� ����� ����� ����� ����� ����, ��� ����� ������ ���� �����. ��� ��� ���� ����� �� ����� ���� ������� ��� ���� ��� ����� �������� �� ������� ������ (��� ��� ���� �� ����) �������� �� ������ ������� ��� �����.<br />
<br />
��� ����� ��� �� ���� ������ �� ��� ������, ����, ����� �� ������� ������, ���� �����, ������, ���� �����, ����� �� �� ��� ����� �� ���� �������. ��� ����� �� ����� ������, ������ ��������� �� ������ {SITE_NAME} ��� ���� �� ����� ������ �� ����� �� �� ��� ����� ������. ���� ����� �� ���� �������� ���� ������ ��� ���� �� ����� ������. ���� �� ��� ��������� �� ���� ���� ���� ��� ������� �� ����� ������� �� ���� ������ �� ���� ������ ��� ������ ��� �� ����� ��� ���������.<br />
<br />
��� ������ ������ ������� ������ ��������� ��� �����. ��� ������� ���� �� ������ ��� ����� ���. ������� ������ ���������� ������ ����� ������ ����� ����.<br />
<br />
������ ��� �� \'�����\' �� ����� ����� ���� ������.');

// lang_register_php
define('PAGE_TITLE', '����� ��������');
define('TERM_COND', '������ ��������');
define('I_AGREE', '�����');
define('SUBMIT', '����� �����');
define('ERR_USER_EXISTS', '����� ���� ������ ����� �����, ������ ������� ��� ���');
define('ERR_PASSWORD_MISMATCH', '����� ���� �� ������� ���� �������� ��� ����');
define('ERR_UNAME_SHORT', '��� �� ���� ������ ��� ����� �����');
define('ERR_PASSWORD_SHORT', '��� �� ���� ���� ���� ��� ����� �����');
define('ERR_UNAME_PASS_DIFF', '��� �� ���� ������ ������ �� ���� ����');
define('ERR_INVALID_EMAIL', '������ ���������� ���� ����� �� ����');
define('ERR_DUPLICATE_EMAIL', '������ ��� ���� �� ��� ������ ����������');
define('ENTER_INFO', '���� ������ �������');
define('REQUIRED_INFO', '������� ������');
define('OPTIONAL_INFO', '������� ������');
define('USERNAME', '������');
define('PASSWORD', '���� ����');
define('PASSWORD_AGAIN', '��� ����� ���� ����');
define('EMAIL', '������ ����������');
define('LOCATION', '������');
define('INTERESTS', '����������');
define('WEBSITE', '�����');
define('OCCUPATION', '�������');
define('ERROR', '���');
define('CONFIRM_EMAIL_SUBJECT', '%s - ����� �������');
define('INFORMATION', '������');
define('FAILED_SENDING_EMAIL', '�� ������ ����� ����� ����� ������� !');
define('THANK_YOU', '���� ��� �������.<br /><br />�� ����� ���� ���� ����� ����� ��������.');
define('ACCT_CREATED', '�� ����� ������� ������� ������ ������ ����� ����');
define('ACCT_ACTIVE', '������� ���� ���� ������� ������ ������ ����� ����');
define('ACCT_ALREADY_ACT', '������� ���� ����� !');
define('ACCT_ACT_FAILED', '�� ���� ����� ��� ������ !');
define('ERR_UNK_USER', '�������� ������� ��� ����� !');
define('X_S_PROFILE', '������ %s');
define('GROUP', '��������');
define('REG_DATE', '�����');
define('DISK_USAGE', '������� �������');
define('CHANGE_PASS', '��� ���� ����');
define('CURRENT_PASS', '���� ���� �������');
define('NEW_PASS', '���� �� �����');
define('NEW_PASS_AGAIN', '���� ���� ������� ��� ����');
define('ERR_CURR_PASS', '���� ���� ������� ��� �����');
define('APPLY_MODIF', '����� ���������');
define('UPDATE_SUCCESS', '�� ����� �������');
define('PASS_CHG_SUCCESS', '�� ����� ���� ����');
define('PASS_CHG_ERROR', '�� ����� ���� ����');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Thank you for registering at {SITE_NAME}

Your username is : "{USER_NAME}"
Your password is : "{PASSWORD}"

������ ������ ���� ����� ��� ������ �������
�� ���� ����� ������ �� ����� �������� ����.

{ACT_LINK}

Regards,

The management of {SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', '������ ���������');
define('NO_COMMENT', '�� ������� ��������');
define('N_COMM_DEL', '%s ����� ����');
define('N_COMM_DISP', '��� ��������� ��������');
define('SEE_PREV', '������');
define('SEE_NEXT', '������');
define('DEL_COMM', '����� ��������� ��������');

// lang_search_php
define('SEARCH', '���� ������ �����');

// lang_search_new_php
define('PAGE_TITLE', '���� ����� �������');
define('SELECT_DIR', '���� ����');
define('SELECT_DIR_MSG', '��� ������� ����� �� ����� ���� �� ����� �� ������� ������ FTP ��� ���� ������� ����.<br /><br />���� ������ ��� ��� ������ ������� �����');
define('NO_PIC_TO_ADD', '�� ���� ���� ������');
define('NEED_ONE_ALBUM', '����� ��� ����� ������ ����� ���� �������');
define('WARNING', '�����');
define('CHANGE_PERM', '�� ������ �������� ������� �� ��� ������, ����� ����� ������� ������ ��� 755 �� 777 ��� ����� ����� !');
define('TARGET_ALBUM', '<b>�� ��� &quot;</b>%s<b>&quot; �� </b>%s');
define('FOLDER', '����');
define('IMAGE', '����');
define('ALBUM', '�����');
define('RESULT', '�����');
define('DIR_RO', '��� ���� �������. ');
define('DIR_CANT_READ', '��� ���� �������. ');
define('INSERT', '����� ��� ����� ������');
define('LIST_NEW_PIC', '����� ����� �������');
define('INSERT_SELECTED', '����� ����� ��������');
define('NO_PIC_FOUND', '�� ���� ��� �����');
define('BE_PATIENT', '������ ����ѡ ��� ����� �������� ���� �� ����� ������ �����');
define('NOTES', '<ul><li><b>OK</b> : ���� ��� �� ����� ����� �����<li><b>DP</b> : ���� �� ������ ����� �� ����� �������� ��� ������ ����<li><b>PB</b> : ���� ���� �� ����� �� ����� ������, ���� �� ��������� ��� �������� �� ����� ������ �� ��� ������<li>��� ��� ����� OK, DP, PB �� ���� ���� ��� ������ �������� ������ ��� ��� ������ PHP<li>�� �� ��� ��� ������� ��� ��� ���, ���� ��� �� ����� ����� ������</ul>');

// lang_upload_php
define('TITLE', '����� ����');
define('MAX_FSIZE', '���� ��� ���� ������ �� %s ���� ����');
define('ALBUM', '�����');
define('PICTURE', '����');
define('PIC_TITLE', '����� ����');
define('DESCRIPTION', '��� ������');
define('KEYWORDS', '����� ��� (���� ������ ������)');
define('ERR_NO_ALB_UPLOADABLES', '���� ��� �� ���� ����� ������ ����� ����� ����');

// lang_usermgr_php
define('TITLE', '����� ����������');
define('NAME_A', '������ ��� �����');
define('NAME_D', '������ ��� �����');
define('GROUP_A', '������ ��� ��������');
define('GROUP_D', '������ ��� ��������');
define('REG_A', '������ ��� ����� �������');
define('REG_D', '������ ��� ����� �������');
define('PIC_A', '������ ��� �� �����');
define('PIC_D', '������ ��� �� �����');
define('DISKU_A', '������ ��� ����� �������');
define('DISKU_D', '������ ��� ����� �������');
define('SORT_BY', '��� ���������� ���');
define('ERR_NO_USERS', '���� �������� ���� !');
define('ERR_EDIT_SELF', '�� ������ ����� ������� ������, ������ �� \'�������\' ����');
define('EDIT', '�����');
define('DELETE', '�����');
define('NAME', '��� ��������');
define('GROUP', '��������');
define('INACTIVE', '����');
define('OPERATIONS', '��������');
define('PICTURES', '�����');
define('DISK_SPACE', '����� ������� �������� / ����');
define('REGISTERED_ON', '�� ������ ��');
define('U_USER_ON_P_PAGES', '%d ������ �� %d ����/�����');
define('CONFIRM_DEL', '�� ��� ����� �� ����� ��� �������� ? \\n�� ���� ��������� ��� ����.');
define('MAIL', '����');
define('ERR_UNKNOWN_USER', '�������� ������� ��� ����� !');
define('MODIFY_USER', '����� ��������');
define('NOTES', '�������');
define('NOTE_LIST', '<li>�� �� ���� ����� ���� ����, ���� ���� ���� ���� �����');
define('PASSWORD', '���� ����');
define('USER_ACTIVE_CP', '�������� ����');
define('USER_GROUP_CP', '������ ����������');
define('USER_EMAIL', '���� ��������');
define('USER_WEB_SITE', '���� ��������');
define('CREATE_NEW_USER', '����� ������ ����');
define('USER_FROM', '���� ��������');
define('USER_INTERESTS', '�������� ��������');
define('USER_OCC', '����� ��������');

// lang_util_php
define('TITLE', '����� ���� ������');
define('WHAT_IT_DOES', '���� ����');
define('WHAT_UPDATE_TITLES', '����� �������� �� ����� �������');
define('WHAT_DELETE_TITLE', '����� ��������');
define('WHAT_REBUILD', '���� ���� ������� ����� ����� ���� �����');
define('WHAT_DELETE_ORIGINALS', '���� ����� ������ ������ ������� � �������� ���� ���� ������');
define('FILE', '���');
define('TITLE_SET_TO', '������� ���� ���');
define('SUBMIT_FORM', '���');
define('UPDATED_SUCCESFULLY', '�� ������ �����');
define('ERROR_CREATE', '��� �� �����');
define('CONTINUE', '������ ������ �� �����');
define('MAIN_SUCCESS', '����� %s �� �������� ������� ��������');
define('ERROR_RENAME', '��� �� ����� ����� %s ��� %s');
define('ERROR_NOT_FOUND', '����� %s ��� �����');
define('BACK', '������ ��� ��������');
define('THUMBS_WAIT', '����� ������� ����� �/�� ����� ������ ������, ������ ��������...');
define('THUMBS_CONTINUE_WAIT', '����� �� ����� ������� ����� ��/� ����� ������ ������...');
define('TITLES_WAIT', '����� ��������, ������ ��������...');
define('DELETE_WAIT', '����� ��������, ������ ��������...');
define('REPLACE_WAIT', '��� ����� ����� ������� ���� �������� ����� ���� ������, ������ ��������..');
define('INSTRUCTION', '������� �����');
define('INSTRUCTION_ACTION', '����� �����');
define('INSTRUCTION_PARAMETER', '����� ���������');
define('INSTRUCTION_ALBUM', '���� �������');
define('INSTRUCTION_PRESS', '���� ��� %s');
define('UPDATE', '����� ��������� �/�� ����� ����� �����');
define('UPDATE_WHAT', '���� ��� ������');
define('UPDATE_THUMB', '������� ����� ���');
define('UPDATE_PIC', '����� ������ ������ ���');
define('UPDATE_BOTH', '����� �������� ������� ������ ���');
define('UPDATE_NUMBER', '��� ����� �������� �������');
define('UPDATE_OPTION', '(��� ������� �� ��� ������� �� ����� ����� ������ �����)');
define('FILENAME_TITLE', '��� ����� &rArr; ����� ������');
define('FILENAME_HOW', '����� ����� ��� �����');
define('FILENAME_REMOVE', '����� ����� .jpg � ������� _ (���� �����) ���������');
define('FILENAME_EURO', '��� 2003_11_23_13_20_20.jpg ��� 23/11/2003 13:20');
define('FILENAME_US', '����  2003_11_23_13_20_20.jpg ���  11/23/2003 13:20');
define('FILENAME_TIME', '����  2003_11_23_13_20_20.jpg ��� 13:20');
define('DELETE', '���� ������ ����� �� ��� ������ �������');
define('DELETE_TITLE', '���� ������ �����');
define('DELETE_ORIGINAL', '���� ��� ������ �������');
define('DELETE_REPLACE', '���� ����� ������� ��������� ����� ����� �����');
define('SELECT_ALBUM', '����� �������');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>