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
/*   $Id: lang-japanese.php,v 1.1 2004/07/24 21:27:59 akamu Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Japanese');
define('LANG_NAME_NATIVE', 'Japanese');
define('LANG_COUNTRY_CODE', 'jp');
define('TRANS_NAME', 'Mitsuhiro Yoshida');
define('TRANS_EMAIL', 'mits@mitstek.com');
define('TRANS_WEBSITE', 'http://mitstek.com/');
define('TRANS_DATE', '2003-11-07');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'EUC-JP');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'Yes');
define('NO', 'No');

// some common strings
define('BACK', '���');
define('CONTINUE', '³����');
define('INFO', '����');
define('ERROR', '���顼');

//// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
define('ALBUM_DATE_FMT', '%Yǯ%B��%d��');
define('LASTCOM_DATE_FMT', '%y/%m/%d/ %H:%M');
define('LASTUP_DATE_FMT', '%Yǯ%B��%d��');
define('REGISTER_DATE_FMT', '%Yǯ%B��%d��');
define('LASTHIT_DATE_FMT', '%Yǯ%B��%d�� %I:%M %p');
define('COMMENT_DATE_FMT', '%Yǯ%B��%d�� %I:%M %p');

// short names for Byte, Kilo, Mega
$lang_byte_units = array('�Х���','KB','MB',);

// Day of week
$lang_day_of_week = array('��','��','��','��','��','��','��',);
// Day of the month
$lang_month = array('01','02','03','04','05','06','07','08','09','10','11','12',);
// For the word censor
$lang_bad_words = array('*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*',);
// lang_meta_album_names
define('RANDOM', '������̿�');
define('LASTUP', '����̿�');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', '�ǿ�����Х�');
define('LASTCOM', '�ǿ�������');
define('LASTCOMBY', 'My Last comments');
define('TOPN', '��¿����');
define('TOPRATED', '�ȥåץ졼��');
define('LASTHITS', '�ǽ�����');
define('SEARCH', '�������');
define('FAVPICS', '����������');

// lang_errors
define('ACCESS_DENIED', '���Υڡ������Ф��륢��������������ޤ���');
define('PERM_DENIED', '��������Ԥ����¤�����ޤ���');
define('PARAM_MISSING', 'ɬ�פʥѥ�᡼��̵���ǥ�����ץȤ��¹Ԥ���ޤ�����');
define('NON_EXIST_AP', '���򤵤줿����Х�/�̿���¸�ߤ��ޤ��� !');
define('QUOTA_EXCEEDED', '�ǥ����������̥����С�<br /><br />���ʤ������ѤǤ���ǥ��������̤� [quota]K�Ǥ������� [space]K����Ѥ��Ƥ��ޤ������μ̿����ɲä���ȥǥ��������̤������С����ޤ���');
define('GD_FILE_TYPE_ERR', 'GD���᡼���饤�֥�꡼����Ѥ����硢JPEG��PNG�����Υե�����Τ����Ѳ�ǽ�Ǥ���');
define('INVALID_IMAGE', '���ʤ������åץ��ɤ�����������»��������GD�饤�֥�꡼�ǽ������뤳�Ȥ�����ޤ���');
define('RESIZE_FAILED', '���������������������ᡢ����ͥ�����������ޤ���');
define('NO_IMG_TO_DISPLAY', 'ɽ����������Ϥ���ޤ���');
define('NON_EXIST_CAT', '���򤷤����ƥ��꡼��¸�ߤ��ޤ���');
define('ORPHAN_CAT', '¸�ߤ��ʤ��ƥ��ƥ��꡼����äƤ��ޤ������ƥ��꡼�ޥ͡����㡼��Ȥä�������褷�Ƥ���������');
define('DIRECTORY_RO', '�ǥ��쥯�ȥ� \'%s\' �˽���߸�������ޤ��󡣼̿��κ���Ͻ���ޤ���');
define('NON_EXIST_COMMENT', '���򤷤������Ȥ�¸�ߤ��ޤ���');
define('PIC_IN_INVALID_ALBUM', '¸�ߤ��ʤ�����Х�(%s)��˼̿�������ޤ� !?');
define('BANNED', '���ʤ��ϸ��ߤ��Υ����ȤؤΥ�����������ݤ���Ƥ��ޤ���');
define('NOT_WITH_UDB', '�ե�����ॽ�եȤ����礵�줿�١����ε�ǽ��Coppermine��̵���ˤ���Ƥ��ޤ����ե�����ॽ�եȤǴ��������١����ε�ǽ�˴ؤ�������ϡ������ǥ��ݡ��Ȥ���ޤ���');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', '����Х�ꥹ�Ȥذ�ư');
define('ALB_LIST_LNK', '����Х�ꥹ��');
define('MY_GAL_TITLE', '�ѡ����ʥ륮���꡼�ذ�ư');
define('MY_GAL_LNK', '�ޥ������꡼');
define('MY_PROF_LNK', '�ޥ��ץ�ե�����');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', '�����ԥ⡼�ɤ��ѹ�');
define('ADM_MODE_LNK', '�����ԥ⡼��');
define('USR_MODE_TITLE', '�桼���⡼�ɤ��ѹ�');
define('USR_MODE_LNK', '�桼���⡼��');
define('UPLOAD_PIC_TITLE', '����Х�˼̿��򥢥åץ���');
define('UPLOAD_PIC_LNK', '�̿��Υ��åץ���');
define('REGISTER_TITLE', '��������Ȥκ���');
define('REGISTER_LNK', '�桼����Ͽ');
define('LOGIN_LNK', '������');
define('LOGOUT_LNK', '��������');
define('LASTUP_LNK', '�ǿ����åץ���');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  '�ǿ�������');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', '��¿����');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  '�ȥåץ졼��');
define('SEARCH_LNK', '����');
define('FAV_LNK', '����������');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu

define('UPL_APP_LNK', '���åץ��ɾ�ǧ');
define('CONFIG_LNK', '����');
define('ALBUMS_LNK', '����Х�');
define('CATEGORIES_LNK', '���ƥ���');
define('USERS_LNK', '�桼��');
define('GROUPS_LNK', '���롼��');
define('COMMENTS_LNK', '������');
define('SEARCHNEW_LNK', '�̿��ΰ����Ͽ');
define('UTIL_LNK', '�̿��Υꥵ����');
define('BAN_LNK', '���������ػߥ桼��');

// lang_user_admin_menu
define('ALBMGR_LNK', '�ޥ�����Х�κ��� / ����');
define('MODIFYALB_LNK', '�ޥ�����Х�ν���');
define('MY_PROF_LNK', '�ޥ��ץ�ե�����');

// lang_cat_list
define('CATEGORY', '���ƥ���');
define('ALBUMS', '����Х�');
define('PICTURES', '�̿�');

// lang_album_list
define('ALBUM_ON_PAGE', '����Х�� %d / %d�ڡ�����');

// lang_thumb_view
define('DATE', '����');
define('NAME', '�ե�����̾');
define('TITLE', '�����ȥ�');
define('SORT_DA', '���դξ�����¤��ؤ�');
define('SORT_DD', '���դι߽���¤��ؤ�');
define('SORT_NA', '�ե�����̾�ξ�����¤��ؤ�');
define('SORT_ND', '�ե�����̾�ι߽���¤��ؤ�');
define('SORT_TA', '�̿������ȥ�ξ�����¤��ؤ�');
define('SORT_TD', '�̿������ȥ�ι߽���¤��ؤ�');
define('PIC_ON_PAGE', '�̿���� %d / %d�ڡ�����');
define('USER_ON_PAGE', '�桼���� %d / %d�ڡ�����');

// lang_img_nav_bar
define('THUMB_TITLE', '����ͥ���ڡ��������');
define('PIC_INFO_TITLE', '�̿������ɽ��/��ɽ��');
define('SLIDESHOW_TITLE', '���饤�ɥ��硼');
define('SLIDESHOW_DISABLED', 'e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', '���μ̿���e-�����ɤȤ�����������');
define('ECARD_DISABLED', 'e-�����ɤ���������ޤ���');
define('ECARD_DISABLED_MSG', 'e-�����ɤ��������븢�¤�����ޤ���');
define('PREV_TITLE', '����');
define('NEXT_TITLE', '����');
define('PIC_POS', '�̿� %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', '���μ̿���ɾ������');
define('NO_VOTES', '(̤��ɼ)');
define('RATING', '(���ߤΥ졼�ƥ���: %s/5&nbsp;&nbsp;&nbsp;��ɼ�� %s��)');
define('RUBBISH', '��');
define('POOR', '����');
define('FAIR', '����');
define('GOOD', '�ɤ�');
define('EXCELLENT', '�����餷��');
define('GREAT', '����');

// lang_cpg_die
define('INFORMATION', '����');
define('ERROR', '���顼');
define('CRITICAL_ERROR', '��̿Ū�ʥ��顼');
define('FILE', '�ե�����: ');
define('LINE', '��: ');

// lang_display_thumbnails
define('FILENAME', '�ե�����̾ : ');
define('FILESIZE', '�ե����륵���� : ');
define('DIMENSIONS', '�礭�� : ');
define('DATE_ADDED', '��Ͽ�� : ');

// lang_get_pic_data
define('N_COMMENTS', '�����ȿ� %s');
define('N_VIEWS', '������� %s');
define('N_VOTES', '(��ɼ�� %s)');

// lang_smilies_inc_php
define('EXCLAMATION', '�ӥå���');
define('QUESTION', '����');
define('VERY HAPPY', '�ȤƤ⹬��');
define('SMILE', '���ޥ���');
define('SAD', '�ᤷ��');
define('SURPRISED', '�ä�');
define('SHOCKED', '����å�');
define('CONFUSED', '����');
define('COOL', '������');
define('LAUGHING', '�Ф�');
define('MAD', '�ܤ�');
define('RAZZ', '��Ф�');
define('EMBARASSED', '�Ѥ�������');
define('CRYING OR VERY SAD', '�㤯���ϤȤƤ��ᤷ��');
define('EVIL OR VERY MAD', '�������ϤȤƤ��ܤä�');
define('TWISTED EVIL', '���ϰ���');
define('ROLLING EYES', 'ž������');
define('WINK', '������');
define('IDEA', '�����ǥ���');
define('ARROW', '����');
define('NEUTRAL', '��Ω');
define('MR. GREEN', '�ߥ����������꡼��');

// lang_admin_php
define('LV_ADMIN', '�����ԥ⡼�ɤ�λ�� ...');
define('ENT_ADMIN', '�����ԥ⡼�ɤ˰ܹ��� ...');

// lang_albmgr_php
define('ALB_NEED_NAME', '����Х�ˤϥ���Х�̾��ɬ�פǤ� !');
define('CONFIRM_MODIFS', '�����˹������Ƥ⵹�����Ǥ��� ?');
define('NO_CHANGE', '�����ѹ�����Ƥ��ޤ��� !');
define('NEW_ALBUM', '����������Х�');
define('CONFIRM_DELETE1', '�����ˤ��Υ���Х�������Ƥ⵹�����Ǥ��� ?');
define('CONFIRM_DELETE2', '\\n����Х�˴ޤޤ�����Ƥμ̿��ȥ����ȤϺ������ޤ� !');
define('SELECT_FIRST', '�ǽ�˥���Х�����򤷤Ƥ���������');
define('ALB_MRG', '����Х����');
define('MY_GALLERY', '* �ޥ������꡼ *');
define('NO_CATEGORY', '* ���ƥ���̵�� *');
define('DELETE', '���');
define('NEW', '��������');
define('APPLY_MODIFS', '������Ŭ��');
define('SELECT_CATEGORY', '���ƥ�������');

// lang_catmgr_php
define('MISS_PARAM', '��%s�פ�����ɬ�פʥѥ�᡼�����Ϥ���Ƥ��ޤ��� !');
define('UNKNOWN_CAT', '���򤷤����ƥ���ϥǡ����١�����¸�ߤ��ޤ���');
define('USERGAL_CAT_RO', '�桼�������꡼�Υ��ƥ��꡼�Ϻ������ޤ��� !');
define('MANAGE_CAT', '���ƥ���δ���');
define('CONFIRM_DELETE', '�����ˤ��Υ��ƥ���������Ƥ⵹�����Ǥ��� ?');
define('CATEGORY', '���ƥ���');
define('OPERATIONS', '���');
define('MOVE_INTO', '��ư��');
define('UPDATE_CREATE', '���ƥ���κ���/����');
define('PARENT_CAT', '�ƥ��ƥ���');
define('CAT_TITLE', '���ƥ���̾');
define('CAT_DESC', '���ƥ�������');

// lang_config_php
define('TITLE', '����');
define('RESTORE_CFG', '���󥹥ȡ���ľ��ξ��֤��᤹');
define('SAVE_CFG', '�������������¸����');
define('NOTES', 'Notes');
define('INFO', '����');
define('UPD_SUCCESS', 'Coppermine�����꤬��������ޤ�����');
define('RESTORE_SUCCESS', 'Coppermine�ǥե���Ȥ�����˥ꥹ�ȥ�����ޤ�����');
define('NAME_A', '�̿�̾�ξ���');
define('NAME_D', '�̿�̾�ι߽�');
define('TITLE_A', '�����ȥ�ξ���');
define('TITLE_D', '�����ȥ�ι߽�');
define('DATE_A', '���դξ���');
define('DATE_D', '���դι߽�');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Height');
define('TH_WD', 'Width');

// lang_config_data
define('CONFIG_GENSET', '��������');
define('GALLERY_NAME', '�����꡼̾');
define('GALLERY_DESCRIPTION', '�����꡼������');
define('GALLERY_ADMIN_EMAIL', '�����ԤΥ᡼�륢�ɥ쥹');
define('ECARDS_MORE_PIC_TARGET', 'Address to nuke folder ie http://www.mysite.tld/html');
define('LANG', '����');
define('CPGTHEME', '�ơ���');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', '����Х�ꥹ��ɽ��');
define('MAIN_TABLE_WIDTH', '�ᥤ��ơ��֥���� (�ԥ���������%)');
define('SUBCAT_LEVEL', '���ƥ��곬�ؤ�ɽ����');
define('ALBUMS_PER_PAGE', '����Х��ɽ����');
define('ALBUM_LIST_COLS', '����Х�ꥹ�Ȥ����');
define('ALB_LIST_THUMB_SIZE', '����ͥ���Υ����� (�ԥ�����)');
define('MAIN_PAGE_LAYOUT', '�ᥤ��ڡ����Υ���ƥ��');
define('FIRST_LEVEL', '���ƥ��������٥�Υ���ͥ����ɽ������');
define('THUMB_VIEW_TITLE', '����ͥ���ɽ��');
define('THUMBCOLS', '����ͥ���ڡ��������');
define('THUMBROWS', '����ͥ���ڡ����ιԿ�');
define('MAX_TABS', '���֤κ���ɽ����');
define('CAPTION_IN_THUMBVIEW', '����ͥ���β��˼̿�������ɽ������ (�̿�̾���ɲ�)');
define('DISPLAY_COMMENT_COUNT', '����ͥ���β���ɽ�����륳���ȿ�');
define('DEFAULT_SORT_ORDER', '�̿�ɽ����Υǥե����');
define('MIN_VOTES_FOR_RATING', '�֥ȥåץ졼�ȡץꥹ�Ȥ�ɽ�������̿��κ�����ɼ��');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', '���������ȥ���������');
define('PICTURE_TABLE_WIDTH', '�̿�ɽ���Υơ��֥��� (�ԥ���������%)');
define('DISPLAY_PIC_INFO', '�̿������ǥե���Ȥ�ɽ������');
define('FILTER_BAD_WORDS', '��������ΰ������դ�����');
define('ENABLE_SMILIES', '�����ȤΥ��ޥ��꡼���Ѥ���Ĥ���');
define('DISABLE_FLOOD_PROTECTION', 'Allow several consecutive comments on one pic from the same user');
define('COMMENT_EMAIL_NOTIFICATION', 'Email site admin upon comment submission');
define('MAX_IMG_DESC_LENGTH', '�̿������κ���Ĺ');
define('MAX_COM_WLENGTH', '1�줢����κ���ʸ���� (���: ���ܸ�ξ�硢�����Ȥκ���Ĺ��Ʊ��)');
define('MAX_COM_LINES', '�����Ȥκ���Կ�');
define('MAX_COM_SIZE', '�����Ȥκ���Ĺ (Ⱦ�Ѵ���)');
define('DISPLAY_FILM_STRIP', '�ե���ॹ�ȥ�åפ�ɽ������');
define('MAX_FILM_STRIP_ITEMS', '�ե���ॹ�ȥ�å���ι���ɽ����');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', '�̿��ȥ���ͥ�������');
define('JPEG_QUAL', 'JPEG�ե�����Υ�����ƥ���');
define('THUMB_WIDTH', '����ͥ���κ��������Ϲ⤵ <b>*</b>');
define('THUMB_USE', '��ˡ����Ѥ��� ( �� �ޤ��� �⤵ �ޤ��� ����ͥ���κ��祵���� )<b>*</b>');
define('MAKE_INTERMEDIATE', '��ּ̿����������');
define('PICTURE_WIDTH', '��ּ̿��κ��������Ϲ⤵ <b>*</b>');
define('MAX_UPL_SIZE', '���åץ��ɼ̿��κ��祵���� (KB)');
define('MAX_UPL_WIDTH_HEIGHT', '���åץ��ɼ̿��κ��������Ϲ⤵ (�ԥ�����)');
define('USER_SETTING_TITLE', '�桼������');
define('ALLOW_USER_REGISTRATION', '�桼����Ͽ����Ĥ���');
define('REG_REQUIRES_VALID_EMAIL', '�桼����Ͽ�˥᡼�뾵ǧ��ɬ�פȤ���');
define('ALLOW_DUPLICATE_EMAILS_ADDR', '2�ͤΥ桼���ˤ��Ʊ��᡼�륢�ɥ쥹����Ͽ����Ĥ���');
define('ALLOW_PRIVATE_ALBUMS', '�桼�����ץ饤�١��ȥ���Х����������');
define('CUSTOM_FIELDS_TITLE', '���������Τ���Υ�������ե������ (���Ѥ��ʤ����϶���)');
define('USER_FIELD1_NAME', '�ե������̾ 1');
define('USER_FIELD2_NAME', '�ե������̾ 2');
define('USER_FIELD3_NAME', '�ե������̾ 3');
define('USER_FIELD4_NAME', '�ե������̾ 4');
define('PIC_ADV_SETTING_TITLE', '�̿��ȥ���ͥ���ι��٤�����');
define('SHOW_PRIVATE', '�����Ȥ˥ץ饤�١��ȥ���Х�Υ��������ɽ������');
define('FORBIDEN_FNAME_CHAR', '�ե�����̾�λ��Ѷػ�ʸ��');
define('ALLOWED_FILE_EXTENSIONS', '�̿��Υ��åץ��ɤǻ��ѽ����ե�����γ�ĥ��');
define('THUMB_METHOD', '���᡼���ꥵ��������ˡ');
define('IMPATH', 'ImageMagick convert�桼�ƥ���ƥ����Υѥ� (�� /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', '���ѤǤ������������ (ImageMagick�Τߤ�ͭ��)');
define('IM_OPTIONS', 'ImageMagick�Υ��ޥ�ɥ饤�󥪥ץ����');
define('READ_EXIF_DATA', 'JPEG�ե������EXIF�ǡ������ɤ߼��');
define('READ_IPTC_DATA', 'Read IPTC data in JPEG files');
define('FULLPATH', '����Х�ǥ��쥯�ȥ� <b>*</b>');
define('USERPICS', '�桼���̿��Υǥ��쥯�ȥ� <b>*</b>');
define('NORMAL_PFX', '��ּ̿�����Ƭ�� <b>*</b>');
define('THUMB_PFX', '����ͥ������Ƭ�� <b>*</b>');
define('DEFAULT_DIR_MODE', '�ǥ��쥯�ȥ�Υǥե���ȡ��ѡ��ߥå����⡼�ɥ⡼��');
define('DEFAULT_FILE_MODE', '�̿��Υǥե���ȡ��ѡ��ߥå����⡼��');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', '���å����ȥ���饯�������å�����');
define('COOKIE_NAME', '������ץȤǻ��Ѥ��륯�å���̾');
define('COOKIE_PATH', '������ץȤǻ��Ѥ��륯�å�������¸��');
define('CHAR_SET', '���󥳡���');
define('MISC_SETTING_TITLE', '����¾������');
define('DEBUG_MODE', '�ǥХå��⡼�ɤ���Ѥ���');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) ���˥����꡼�˼̿�����Ͽ����Ƥ����硢*�ޡ������դ��Ƥ���ե�����ɤ��ѹ����ʤ��Ǥ�������</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', '��̾���ȥ����Ȥ����Ϥ��Ƥ���������');
define('COM_ADDED', '�����Ȥ��ɲä���ޤ�����');
define('ALB_NEED_TITLE', '����Х�̾�����Ϥ��Ƥ������� !');
define('NO_UDP_NEEDED', '������ɬ�פ���ޤ���');
define('ALB_UPDATED', '����Хब��������ޤ�����');
define('UNKNOWN_ALBUM', '���򤷤�����Хब¸�ߤ��ʤ������Ϥ��Υ���Х�˥��åץ��ɤ��븢�¤�����ޤ���');
define('NO_PIC_UPLOADED', '�̿��ϥ��åץ��ɤ���ޤ���Ǥ��� !<br /><br />���åץ��ɤ���̿������������򤷤���硢�����Ф�</br>�ե�����Υ��åץ��ɤ���Ĥ��Ƥ��뤫��ǧ���Ƥ������� ...');
define('ERR_MKDIR', '�ǥ��쥯�ȥ� %s �κ����˼��Ԥ��ޤ��� !');
define('DEST_DIR_RO', '�оݥǥ��쥯�ȥ� %s �ϥ�����ץȤˤ�����ߤ�����ޤ��� !');
define('ERR_MOVE', '%s �� %s �˰�ư�Ǥ��ޤ��� !');
define('ERR_FSIZE_TOO_LARGE', '���ʤ������åץ��ɤ����̿��Υ��������礭�᤮�ޤ� (���祵������%sx%s�Ǥ�) !');
define('ERR_IMGSIZE_TOO_LARGE', '���ʤ������åץ��ɤ����ե�����Υ��������礭�᤮�ޤ� (���祵������%sKB�Ǥ�) !');
define('ERR_INVALID_IMG', '���ʤ������åץ��ɤ����ե������ͭ���ʲ����ǤϤ���ޤ��� !');
define('ALLOWED_IMG_TYPES', '%s �β����Τߥ��åץ��ɽ���ޤ���');
define('ERR_INSERT_PIC', '�̿���%s�פϥ���Х����Ͽ�Ǥ��ޤ��� ');
define('UPLOAD_SUCCESS', '���ʤ��μ̿�������˥��åץ��ɤ���ޤ���<br /><br />�����Ԥξ�ǧ���ɽ������ޤ���');
define('INFO', '����');
define('ERR_COMMENT_EMPTY', '�����Ȥ�����Ǥ� !');
define('ERR_INVALID_FEXT', '���γ�ĥ�ҤΥե�����Τ߻��ѤǤ��ޤ�: <br /><br />%s.');
define('NO_FLOOD', '�������������ޤ��󡢤��ʤ��ϴ��ˤ��μ̿��˺ǿ������Ȥ���Ƥ��Ƥ��ޤ�<br /><br />�������������ϡ������Ȥ��Խ����Ƥ���������');
define('REDIRECT_MSG', '������쥯�Ȥ���ޤ�����<br /><br /><br />�ڡ�������ưŪ�˹�������ʤ����ϡ���³���פ򥯥�å����Ƥ���������');
define('UPL_SUCCESS', '���ʤ��μ̿����������Ͽ����ޤ�����');

// lang_delete_php
define('CAPTION', 'Caption');
define('FS_PIC', '�ե륵��������');
define('DEL_SUCCESS', '�������');
define('NS_PIC', '�Ρ��ޥ륵��������');
define('ERR_DEL', '����Բ�');
define('THUMB_PIC', '����ͥ���');
define('COMMENT', '������');
define('IM_IN_ALB', '����Х���β���');
define('ALB_DEL_SUCCESS', '����Х��%s�פ��������ޤ�����');
define('ALB_MGR', '����Х�ޥ͡����㡼');
define('ERR_INVALID_DATA', '��%s�פ������ʥǡ�����ȯ�����ޤ�����');
define('CREATE_ALB', '����Х��%s�פκ�����');
define('UPDATE_ALB', '����Х��%s�� ����Х�̾��%s�� ����ǥå�����%s\\�פ򹹿����Ƥ��ޤ���');
define('DEL_PIC', '�̿��κ��');
define('DEL_ALB', '����Х�κ��');
define('DEL_USER', '�桼���κ��');
define('ERR_UNKNOWN_USER', '���򤷤��桼����¸�ߤ��ޤ��� !');
define('COMMENT_DELETED', '�����Ȥ��������ޤ�����');

// lang_display_image_php
define('CONFIRM_DEL', '�����ˤ��μ̿��������Ƥ⵹�����Ǥ��� ? \\nƱ���˥����Ȥ�������ޤ���');
define('DEL_PIC', '���μ̿���������');
define('SIZE', '%s x %s �ԥ�����');
define('VIEWS', '%s ��');
define('SLIDESHOW', '���饤�ɥ��硼');
define('STOP_SLIDESHOW', '���饤�ɥ��硼�����');
define('VIEW_FS', '����å��ǥե륵�����β�����ɽ��');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('TITLE', '�̿�����');
define('FILENAME', '�ե�����̾');
define('ALBUM NAME', '����Х�̾');
define('RATING', '�졼�ƥ��� (��ɼ�� %s��)');
define('KEYWORDS', '�������');
define('FILE SIZE', '�ե����륵����');
define('DIMENSIONS', '�礭��');
define('DISPLAYED', 'ɽ��');
define('CAMERA', '�����');
define('DATE TAKEN', '������');
define('APERTURE', '���');
define('EXPOSURE TIME', 'Ϫ�л���');
define('FOCAL LENGTH', '������Υ');
define('COMMENT', '������');
define('ADDFAV', '������������ɲ�');
define('ADDFAVPHRASE', '����������');
define('REMFAV', '���������꤫����');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', '���Υ����Ȥ��Խ�����');
define('CONFIRM_DELETE', '�����ˤ��Υ����Ȥ������Ƥ⵹�����Ǥ��� ?');
define('ADD_YOUR_COMMENT', '�����Ȥ��ɲä���');
define('NAME', '̾��');
define('COMMENT', '������');
define('YOUR_NAME', '��̾��');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', '�����Υ���å��ǥ�����ɥ����Ĥ���');

// lang_ecard_php
define('TITLE', 'e-�����ɤ�����');
define('INVALID_EMAIL', '<b>�ٹ�</b> : �᡼�륢�ɥ쥹������������ޤ��� !');
define('ECARD_TITLE', 'An e-card from %s for you');
define('VIEW_ECARD', 'e-�����ɤ������ɽ������ʤ����ϡ����Υ�󥯤򥯥�å����Ƥ���������');
define('VIEW_MORE_PICS', '��äȼ̿��򸫤���ϡ����Υ�󥯤򥯥�å����Ƥ������� !');
define('SEND_SUCCESS', 'e-�����ɤ���������ޤ�����');
define('SEND_FAILED', '�������������ޤ���e-card����������ޤ���Ǥ��� ...');
define('FROM', 'From');
define('YOUR_NAME', '��̾��');
define('YOUR_EMAIL', '�᡼�륢�ɥ쥹');
define('TO', 'To');
define('RCPT_NAME', '����ͤΤ�̾��');
define('RCPT_EMAIL', '����ͤΥ᡼�륢�ɥ쥹');
define('GREETINGS', '��������');
define('MESSAGE', '��å�����');

// lang_editpics_php
define('PIC_INFO', '�̿�����');
define('ALBUM', '����Х�');
define('TITLE', '�̿�̾');
define('DESC', '����');
define('KEYWORDS', '�������');
define('PIC_INFO_STR', '%s&times;%s - %sKB - ������� %s - ��ɼ�� %s');
define('APPROVE', '�̿��ξ�ǧ');
define('POSTPONE_APP', '��ǧ�α��');
define('DEL_PIC', '�̿��κ��');
define('RESET_VIEW_COUNT', '���������󥿤Υꥻ�å�');
define('RESET_VOTES', '��ɼ�Υꥻ�å�');
define('DEL_COMM', '�����Ȥκ��');
define('UPL_APPROVAL', '���åץ��ɾ�ǧ');
define('EDIT_PICS', '�̿����Խ�');
define('SEE_NEXT', '����');
define('SEE_PREV', '����');
define('N_PIC', '�̿���� %s');
define('N_OF_PIC_TO_DISP', '�̿�ɽ����');
define('APPLY', '������Ŭ��');

// lang_groupmgr_php
define('GROUP_NAME', '���롼��̾');
define('DISK_QUOTA', '�ǥ���������');
define('CAN_RATE', '�̿���ɾ����ǽ');
define('CAN_SEND_ECARDS', 'e-�����ɤ�������ǽ');
define('CAN_POST_COM', '�����Ȥ���Ʋ�ǽ');
define('CAN_UPLOAD', '�̿��򥢥åץ��ɲ�ǽ');
define('CAN_HAVE_GALLERY', '�ѡ����ʥ륮���꡼�������ǽ');
define('APPLY', '������Ŭ��');
define('CREATE_NEW_GROUP', '�������롼�פκ���');
define('DEL_GROUPS', '���򤷤����롼�פκ��');
define('CONFIRM_DEL', '�ٹ𡢥��롼�פ���������硢���롼�פ�°���Ƥ����桼����\'Registered\'���롼�פ˰�ư����ޤ� !\\n\\n������³���ޤ��� ?');
define('TITLE', '�桼�����롼�פδ���');
define('APPROVAL_1', '�ѥ֥�å����åץ��ɾ�ǧ (1)');
define('APPROVAL_2', '�ץ饤�١��ȥ��åץ��ɾ�ǧ (2)');
define('NOTE1', '<b>(1)</b> �ѥ֥�å�����Х�إ��åץ��ɤ��줿�̿��ϴ����Ԥξ�ǧ��ɬ�פǤ���');
define('NOTE2', '<b>(2)</b> �桼���Υ���Х�إ��åץ��ɤ��줿�̿��ϴ����Ԥξ�ǧ��ɬ�פǤ���');
define('NOTES', '���');

// lang_index_php
define('WELCOME', '�褦���� !');

// lang_album_admin_menu
define('CONFIRM_DELETE', '�����ˤ��Υ���Х�������Ƥ⵹�����Ǥ��� ? \\nƱ�������Ƥμ̿��ȥ����ȤϺ������ޤ���');
define('DELETE', '���');
define('MODIFY', '�ץ�ѥƥ�');
define('EDIT_PICS', '�̿����Խ�');

// lang_list_categories
define('HOME', 'Home');
define('STAT1', '���ƥ����:<b>[cat]</b>&nbsp;&nbsp;&nbsp;����Х��:<b>[albums]</b>&nbsp;&nbsp;&nbsp;�̿����:<b>[pictures]</b>&nbsp;&nbsp;&nbsp;�����ȿ�:<b>[comments]</b>&nbsp;&nbsp;&nbsp;�������:<b>[views]</b>');
define('STAT2', '����Х��:<b>[albums]</b>&nbsp;&nbsp;&nbsp;�̿����:<b>[pictures]</b>&nbsp;&nbsp;&nbsp;�������:<b>[views]</b>');
define('XX_S_GALLERY', '%s�Υ����꡼');
define('STAT3', '����Х��:<b>[albums]</b>&nbsp;&nbsp;&nbsp;�̿����:<b>[pictures]</b>&nbsp;&nbsp;&nbsp;�����ȿ�:<b>[comments]</b>&nbsp;&nbsp;&nbsp;�������:<b>[views]</b>');

// lang_list_users
define('USER_LIST', '�桼���ꥹ��');
define('NO_USER_GAL', '�桼�������꡼�Ϥ���ޤ���');
define('N_ALBUMS', '����Х�� %s');
define('N_PICS', '�̿���� %s');

// lang_list_albums
define('N_PICTURES', '�̿���� %s');
define('LAST_ADDED', '���ǽ��ɲ���:%s');

// lang_modifyalb_php
define('UPD_ALB_N', '����Х�ι��� %s');
define('GENERAL_SETTINGS', '��������');
define('ALB_TITLE', '����Х�̾');
define('ALB_CAT', '���ƥ���');
define('ALB_DESC', '����');
define('ALB_THUMB', '����ͥ���');
define('ALB_PERM', '���Υ���Х���Ф���ѡ��ߥå����');
define('CAN_VIEW', '����Х������ǽ');
define('CAN_UPLOAD', '�ӥ������ϼ̿��򥢥åץ��ɽ����');
define('CAN_POST_COMMENTS', '�ӥ������ϥ����Ȥ���ƤǤ���');
define('CAN_RATE', '�ӥ������ϼ̿���ɾ�������');
define('USER_GAL', '�桼�������꡼');
define('NO_CAT', '* ���ƥ��꡼̵�� *');
define('ALB_EMPTY', '����Х�ˤϲ������äƤ��ޤ���');
define('LAST_UPLOADED', '�ǿ����åץ���');
define('PUBLIC_ALB', '���� (�ѥ֥�å�����Х�)');
define('ME_ONLY', '��Τ�');
define('OWNER_ONLY', '����Х�ν�ͭ�� (%s) �Τ�');
define('GROUPP_ONLY', '%s���롼�ץ��С��Τ�');
define('ERR_NO_ALB_TO_MODIFY', '�����Ǥ��륢��Хब�ǡ����١����ˤ���ޤ���');
define('UPDATE', '����Х�ι���');

// lang_rate_pic_php
define('ALREADY_RATED', '�������������ޤ��󡢤��ʤ��ϴ��ˤ��μ̿���ɾ�����Ƥ��ޤ���');
define('RATE_OK', '���ʤ�����ɼ�ϼ�������ޤ�����');

// lang_register_disclamer
define('REGISTER_DISCLAMER', '{SITE_NAME}�δ����Ԥϡ�����Ū�˹��ޤ����ʤ���Ƥ��������®�䤫�˺������褦��ߤޤ��������Ƥ���Ƥ�������뤳�Ȥ��Բ�ǽ�Ǥ������äơ����Υ����Ȥ��Ф�������Ƥθ�����ƼԤˤ���ΤǤ��ꡢ�����Ԥ䥦���֥ޥ������Τ�Τ�̵��(�����ο͡�����ƤϽ���)�������Ԥ䥦���֥ޥ���������Ƥ���Ǥ��̵�����Ȥ򤢤ʤ���ǧ��ޤ���
<br>
<br>
���ʤ��ϡ�������¯��ȿ������Ƥ䡢�Ŀͤؤ������������ơ���Ū����ơ�����¾ˡ��ȿ������Ƥ򤷤ʤ�����Ʊ�դ��ޤ���
���ʤ��ϡ�{SITE_NAME}�δ����ԡ������֥ޥ���������ǥ졼������ǡ���ʤ����������Ƥ��Խ���������븢����ͭ���뤳�Ȥ�Ʊ�դ��ޤ������ʤ��ϡ��桼���Ȥ��Ƥ��ʤ�����Ƥ������󤬥ǡ����١�������¸����뤳�Ȥ�Ʊ�դ��ޤ������ξ���ϡ����ʤ���Ʊ��̵���˴����ԡ������֥ޥ���������軰�Ԥ˳�������뤳�ȤϤ���ޤ��󤬡��ǡ�����ή�Ф��붲��Τ���ϥå������ι԰٤��Ф��ƴ����ԡ������֥ޥ���������Ǥ���餦���ȤϤ���ޤ���
<br>
<br>
���Υ����ȤǤϡ����ʤ��Υ���ԥ塼���˾������¸���뤿��˥��å�������Ѥ��ޤ������å����Ϥ��ʤ��α������Ŭ�ˤ���٤����˻��Ѥ���ޤ����᡼�륢�ɥ쥹�ϡ����ʤ�����Ͽ�˴ؤ���ܺٵڤӥѥ���ɤ�ǧ�ڤΰ٤����˻��Ѥ���ޤ��� 
<br>
<br>
��Ʊ�դ��ޤ��פ򥯥�å����뤳�Ȥǡ����ʤ��Ͼ嵭�����ѵ����Ʊ�դ��ޤ���');

// lang_register_php
define('PAGE_TITLE', '�桼����Ͽ');
define('TERM_COND', '���ѵ���');
define('I_AGREE', 'Ʊ�դ��ޤ�');
define('SUBMIT', '��Ͽ�¹�');
define('ERR_USER_EXISTS', '���Ϥ��줿�桼��̾�ϴ�����Ͽ����Ƥ��ޤ����̤Υ桼��̾�����Ϥ��Ƥ���������');
define('ERR_PASSWORD_MISMATCH', '�ѥ���ɤ����פ��ޤ��󡢺������Ϥ��Ƥ���������');
define('ERR_UNAME_SHORT', '�桼��̾��2ʸ���ʾ�ˤ��Ƥ���������');
define('ERR_PASSWORD_SHORT', '�ѥ���ɤ�2ʸ���ʾ�ˤ��Ƥ���������');
define('ERR_UNAME_PASS_DIFF', '�桼��̾�ȥѥ���ɤϰۤʤ�ɬ�פ�����ޤ���');
define('ERR_INVALID_EMAIL', '�᡼�륢�ɥ쥹������������ޤ���');
define('ERR_DUPLICATE_EMAIL', '¾�Υ桼��������Ʊ���᡼�륢�ɥ쥹����Ͽ���Ƥ��ޤ���');
define('ENTER_INFO', '��Ͽ��������Ϥ��Ƥ���������');
define('REQUIRED_INFO', 'ɬ�ܹ���');
define('OPTIONAL_INFO', 'Ǥ�չ���');
define('USERNAME', '�桼��̾');
define('PASSWORD', '�ѥ����');
define('PASSWORD_AGAIN', '�ѥ���ɤ�⤦����');
define('EMAIL', '�᡼�륢�ɥ쥹');
define('LOCATION', '�ｻ��');
define('INTERESTS', '��̣�Τ��뤳��');
define('WEBSITE', '�ۡ���ڡ���');
define('OCCUPATION', '����');
define('ERROR', '���顼');
define('CONFIRM_EMAIL_SUBJECT', '%s - Registration confirmation');
define('INFORMATION', '����');
define('FAILED_SENDING_EMAIL', '��Ͽ��ǧ�᡼�뤬�����Ǥ��ޤ��� !');
define('THANK_YOU', '����Ͽ���꤬�Ȥ��������ޤ���<br /><br />��������Ȥγ������˴ؤ��������Ͽ���줿�᡼�륢�ɥ쥹������������ޤ�����');
define('ACCT_CREATED', '���ʤ��Υ�������Ȥ���������ޤ������桼��̾�ȥѥ���ɤǥ��������ޤ���');
define('ACCT_ACTIVE', '���ʤ��Υ�������Ȥ�����������ޤ������桼��̾�ȥѥ���ɤǥ��������ޤ���');
define('ACCT_ALREADY_ACT', '���ʤ��Υ�������Ȥϴ��˳���������Ƥ��ޤ� !');
define('ACCT_ACT_FAILED', '���Υ�������Ȥϳ���������ޤ��� !');
define('ERR_UNK_USER', '���򤷤��桼����¸�ߤ��ޤ��� !');
define('X_S_PROFILE', '%s �Υץ�ե�����');
define('GROUP', '���롼��');
define('REG_DATE', '��Ͽǯ����');
define('DISK_USAGE', '�ǥ�����������');
define('CHANGE_PASS', '�ѥ���ɤ��ѹ�');
define('CURRENT_PASS', '���ߤΥѥ����');
define('NEW_PASS', '�������ѥ����');
define('NEW_PASS_AGAIN', '�������ѥ���ɤ�⤦����');
define('ERR_CURR_PASS', '���ߤΥѥ���ɤ�����������ޤ���');
define('APPLY_MODIF', '������Ŭ��');
define('UPDATE_SUCCESS', '�ץ�ե����뤬��������ޤ�����');
define('PASS_CHG_SUCCESS', '�ѥ���ɤ��ѹ�����ޤ�����');
define('PASS_CHG_ERROR', '�ѥ���ɤ��ѹ�����ޤ���Ǥ�����');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', '{SITE_NAME} �ؤΤ���Ͽ���꤬�Ȥ��������ޤ���

���ʤ��Υ桼��̾�� "{USER_NAME}" �Ǥ���
���ʤ��Υѥ���ɤ� "{PASSWORD}" �Ǥ���

��������Ȥγ������򤹤�ˤϲ����Υ�󥯤򥯥�å�����
�֥饦���Υ��ɥ쥹��˥��ԡ����Ƥ���������

{ACT_LINK}������

{SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', '�����ȤΥ�ӥ塼');
define('NO_COMMENT', '��ӥ塼���륳���ȤϤ���ޤ���');
define('N_COMM_DEL', '%s��Υ����Ȥ��������ޤ�����');
define('N_COMM_DISP', 'ɽ�����륳���ȿ�');
define('SEE_PREV', '����');
define('SEE_NEXT', '����');
define('DEL_COMM', '���򤷤������Ȥ���');

// lang_search_php
define('SEARCH', '�̿��θ���');

// lang_search_new_php
define('PAGE_TITLE', '�������̿��θ���');
define('SELECT_DIR', '�ǥ��쥯�ȥ�����');
define('SELECT_DIR_MSG', '�����Ǥ�FTP�ˤ�ꥵ���Ф˥��åץ��ɤ����̿��򥢥�Х�˰����Ͽ���ޤ�<br /><br />�̿��򥢥åץ��ɤ����ǥ��쥯�ȥ�����򤷤Ƥ���������');
define('NO_PIC_TO_ADD', '�ɲä���̿��Ϥ���ޤ���');
define('NEED_ONE_ALBUM', '���ε�ǽ��Ȥ�����ˤ�1�İʾ�Υ���Хबɬ�פǤ���');
define('WARNING', '�ٹ�');
define('CHANGE_PERM', '������ץȤ����Υǥ��쥯�ȥ�˽����ޤ���Ǥ������̿����ɲä������˥ǥ��쥯�ȥ�Υѡ��ߥå����⡼�ɤ�755����777���ѹ�����ɬ�פ�����ޤ� !');
define('TARGET_ALBUM', '<b>��</b>%s<b>����μ̿���</b>%s<b>���ɲä���</b>');
define('FOLDER', '�ե����');
define('IMAGE', '����');
define('ALBUM', '����Х�');
define('RESULT', '���');
define('DIR_RO', '����߸�������ޤ���');
define('DIR_CANT_READ', '�ɼ�긢������ޤ���');
define('INSERT', '�����̿��Υ����꡼�ؤ��ɲ�');
define('LIST_NEW_PIC', '�����̿�����');
define('INSERT_SELECTED', '���򤷤��̿����ɲ�');
define('NO_PIC_FOUND', '�������̿��ϸ��Ĥ���ޤ���Ǥ�����');
define('BE_PATIENT', '�ä����Ԥ�����������������ץȤ��̿����ɲä���ˤϻ��֤�ɬ�פǤ���');
define('NOTES', '<ul><li><b>OK</b> : ����˼̿����ɲä���ޤ�����<li><b>DP</b> : �̿�����ʣ���ƴ��˥ǡ����١�������Ͽ����Ƥ��ޤ���<li><b>PB</b> : �̿����ɲý���ޤ���Ǥ���������ڤӼ̿�����Ͽ�����ǥ��쥯�ȥ�Υѡ��ߥå������ǧ���Ƥ���������<li>OK��DP��PB������Τ������ɽ������ʤ��ä����ϡ�PHP���顼��ɽ�����뤿�����»�����̿��򥯥�å����Ƥ���������<li>�����ॢ���Ȥ�ȯ��������硢�֥饦���ι����ܥ���򥯥�å����Ƥ���������</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('TITLE', '�̿��Υ��åץ���');
define('MAX_FSIZE', '���åץ��ɲ�ǽ�ʺ���ե����륵������%sKB�Ǥ���');
define('ALBUM', '����Х�');
define('PICTURE', '�̿�');
define('PIC_TITLE', '�̿�̾');
define('DESCRIPTION', '�̿�������');
define('KEYWORDS', '������� (Ⱦ�ѥ��ڡ����Ƕ��ڤ�)');
define('ERR_NO_ALB_UPLOADABLES', '�̿��Υ��åץ��ɤ����Ĥ��줿����Х�Ϥ���ޤ���');

// lang_usermgr_php
define('TITLE', '�桼���δ���');
define('NAME_A', '�桼��̾�ξ���');
define('NAME_D', '�桼��̾�ι߽�');
define('GROUP_A', '���롼��̾�ξ���');
define('GROUP_D', '���롼��̾�ι߽�');
define('REG_A', '��Ͽ���ξ���');
define('REG_D', '��Ͽ���ι߽�');
define('PIC_A', '�̿�����ξ���');
define('PIC_D', '�̿�����ι߽�');
define('DISKU_A', '�ǥ����������̤ξ���');
define('DISKU_D', '�ǥ����������̤ι߽�');
define('SORT_BY', '�桼�����¤��ؤ�');
define('ERR_NO_USERS', '�桼���ơ��֥뤬���Ǥ� !');
define('ERR_EDIT_SELF', '��ʬ���ȤΥץ�ե�������Խ��Ǥ��ޤ��󡣡֥ޥ��ץ�ե�����פ���Ѥ��Ƥ���������');
define('EDIT', '�Խ�');
define('DELETE', '���');
define('NAME', '�桼��̾');
define('GROUP', '���롼��');
define('INACTIVE', '�����');
define('OPERATIONS', '���');
define('PICTURES', '�̿�');
define('DISK_SPACE', '���ѺѤ����� / ����');
define('REGISTERED_ON', '��Ͽǯ����');
define('U_USER_ON_P_PAGES', '�桼���� %d / %d�ڡ�����');
define('CONFIRM_DEL', '�����ˤ��Υ桼���������Ƥ⵹�����Ǥ��� ? \\�桼����°�������Ƥμ̿��ȥ���Х�Ϻ������ޤ���');
define('MAIL', '�᡼��');
define('ERR_UNKNOWN_USER', '���򤷤��桼����¸�ߤ��ޤ��� !');
define('MODIFY_USER', '�桼�����ѹ�');
define('NOTES', '���');
define('NOTE_LIST', '<li>���ߤΥѥ���ɤ��ѹ��������ʤ����ϡ��֥ѥ���ɡץե�����ɤ����ˤ��Ƥ���������');
define('PASSWORD', '�ѥ����');
define('USER_ACTIVE', '�桼�������������');
define('USER_GROUP', '���롼��');
define('USER_EMAIL', '�᡼�륢�ɥ쥹');
define('USER_WEB_SITE', '�ۡ���ڡ���');
define('CREATE_NEW_USER', '�����桼���κ���');
define('USER_FROM', '�ｻ��');
define('USER_INTERESTS', '��̣�Τ��뤳��');
define('USER_OCC', '����');

// lang_util_php
define('TITLE', '�̿��Υꥵ����');
define('WHAT_IT_DOES', '��������');
define('WHAT_UPDATE_TITLES', '�����ȥ��ե�����̾�ǹ�������');
define('WHAT_DELETE_TITLE', '�����ȥ�κ��');
define('WHAT_REBUILD', '����ͥ���κƹ��۵ڤӼ̿��Υꥵ����');
define('WHAT_DELETE_ORIGINALS', '���ꥸ�ʥ륵�����β����������ơ��������ѹ���β����������ؤ���');
define('FILE', '�ե�����');
define('TITLE_SET_TO', '�����ȥ�����');
define('SUBMIT_FORM', '����');
define('UPDATED_SUCCESFULLY', '������λ');
define('ERROR_CREATE', '������˥��顼��ȯ�����ޤ���');
define('CONTINUE', '����˲������������');
define('MAIN_SUCCESS', '�ե����� %s ���ᥤ��̿������ꤵ��ޤ���');
define('ERROR_RENAME', '%s �� %s �˥�͡�����˥��顼��ȯ�����ޤ���');
define('ERROR_NOT_FOUND', '�ե����� %s �����Ĥ���ޤ���Ǥ���');
define('BACK', '�ᥤ������');
define('THUMBS_WAIT', '����ͥ���ι��� �ڤ�/�ޤ��� �̿��Υꥵ������ԤäƤ��ޤ������Ԥ���������...');
define('THUMBS_CONTINUE_WAIT', '����ͥ���ι��� �ڤ�/�ޤ��� �̿��Υꥵ������ԤäƤ��ޤ�...');
define('TITLES_WAIT', '�����ȥ�ι�����ԤäƤ��ޤ������Ԥ���������...');
define('DELETE_WAIT', '�����ȥ�������Ƥ��ޤ������Ԥ���������...');
define('REPLACE_WAIT', '���ꥸ�ʥ륵�����β������������ѹ���β����������ؤ���ԤäƤ��ޤ������Ԥ���������..');
define('INSTRUCTION', '�����å����󥹥ȥ饯�����');
define('INSTRUCTION_ACTION', '��������������');
define('INSTRUCTION_PARAMETER', '�ѥ�᡼��������');
define('INSTRUCTION_ALBUM', '����Х������');
define('INSTRUCTION_PRESS', '%s �򲡤�');
define('UPDATE', '����ͥ���ι��� �ڤ�/�ޤ��� �̿��Υꥵ����');
define('UPDATE_WHAT', '�����о�');
define('UPDATE_THUMB', '����ͥ���κ����Τ�');
define('UPDATE_PIC', '�̿��Υꥵ�����Τ�');
define('UPDATE_BOTH', '����ͥ���κ����ڤӼ̿��Υꥵ����');
define('UPDATE_NUMBER', '����å�������β���������');
define('UPDATE_OPTION', '(�����ॢ���Ȥ�����ϡ����ο��ͤ��������ꤷ�Ƥ�������)');
define('FILENAME_TITLE', '�ե�����̾ &rArr; �̿������ȥ�');
define('FILENAME_HOW', '�ե�����̾���ѹ���ˡ');
define('FILENAME_REMOVE', '.jpg������դ��� _ (�������������)���ѹ�����');
define('FILENAME_EURO', '2003_11_23_13_20_20.jpg �� 23/11/2003 13:20 ���ѹ�����');
define('FILENAME_US', '2003_11_23_13_20_20.jpg �� 11/23/2003 13:20 ���ѹ�����');
define('FILENAME_TIME', '2003_11_23_13_20_20.jpg �� 13:20 ���ѹ�����');
define('DELETE', '�̿������ȥ�ޤ��ϥ��ꥸ�ʥ륵�����μ̿���������');
define('DELETE_TITLE', '�̿��Υ����ȥ��������');
define('DELETE_ORIGINAL', '���ꥸ�ʥ륵�����μ̿���������');
define('DELETE_REPLACE', '���ꥸ�ʥ륵�����β����������ơ��������ѹ���β����������ؤ���');
define('SELECT_ALBUM', '����Х������');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>