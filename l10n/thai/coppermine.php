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
  $Source: /cvs/l10n/thai/coppermine.php,v $
  $Revision: 9.4 $
  $Author: nanocaiordo $
  $Date: 2006/02/12 14:46:14 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Views');
define('PIC_VOTES', 'Votes');
define('PIC_COMMENTS', 'Comments');

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Thai');
define('LANG_NAME_NATIVE', 'Thai');
define('LANG_COUNTRY_CODE', 'th');
define('TRANS_NAME', 'CenturY');
define('TRANS_EMAIL', 'century_100@hotmail.com');
define('TRANS_WEBSITE', 'http://mem9.dochost.net/');
define('TRANS_DATE', '2003-12-10');
define('CHARSET', 'utf-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'ใช่');
define('NO', 'ไม่');
// some common strings
define('BACK', 'กลับ');
define('CONTINU', 'ต่อไป');
define('INFO', 'รายละเอียด');
//define('ERROR', 'ผิดพลาด');
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%m/%d/%y @ %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y @ %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y @ %I:%M %p');

// lang_meta_album_names
define('RANDOM', 'ภาพแบบสุ่ม');
define('LASTUP', 'ส่งภาพล่าสุด');
define('LASTUPBY', 'ภาพล่าสุดของฉัน');
define('LASTALB', 'อัลบั้มปรับปรุงล่าสุด');
define('LASTCOM', 'วิจารณ์ล่าสุด');
define('LASTCOMBY', 'คำวิจารณ์ล่าสุดของฉัน');
define('TOPN', 'เข้าชมมากสุด');
define('TOPRATED', 'อันดับสูงสุด');
define('LASTHITS', 'เข้าชมล่าสุด');
define('SEARCH', 'ผลการค้นหา');
define('FAVPICS', 'ภาพที่โปรดปราน');

// lang_errors
define('ACCESS_DENIED', 'คุณไม่ได้รับอนุญาตให้เข้ามายังส่วนนี้');
define('PERM_DENIED', 'คุณไม่สามารถกระทำการได้');
define('PARAM_MISSING', 'Script ทำงานโดยปราศจากตัวแปรที่จำเป็น');
define('NON_EXIST_AP', ' ไม่มี อัลบั้ม/ภาพ ที่ท่านเลือก !');
define('QUOTA_EXCEEDED', 'ใช้พื้นที่เกินกำหนด<br /><br />คุณได้รับพื้นที่ [quota] กิโลไบต์  ขณะนี้คุณใช้พื้นที่ [space] กิโลไบต์, การเพิ่มรูปจะทำให้คุณใช้พื้นที่เกินกำหนด');
define('GD_FILE_TYPE_ERR', 'เมื่อใช้งาน GD image library สามารถใช้งานภาพในแบบ JPEG และ PNG เท่านั้น');
define('INVALID_IMAGE', 'ภาพที่คุณส่งขึ้นไปมีปัญหาหรือไม่สามารถจัดการด้วย GD library');
define('RESIZE_FAILED', 'ไม่สามารถสร้าง thumbnail หรือลดขนาดภาพได้');
define('NO_IMG_TO_DISPLAY', 'ไม่มีภาพที่จะแสดง');
define('NON_EXIST_CAT', 'ไม่มีหมวดหมู่ที่เลือก');
define('ORPHAN_CAT', 'หมวดหมู่มีปัญหา กรุณาจัดการผ่านระบบการจัดการภาพ');
define('DIRECTORY_RO', 'ไม่สามารถเขียน Directory \'%s\' ได้ ไม่สามารถลบภาพได้');
define('NON_EXIST_COMMENT', 'ไม่มีคำวิจารณ์ที่เลือก');
define('PIC_IN_INVALID_ALBUM', 'ไม่มีภาพในอัลบั้ม (%s)!?');
define('BANNED', 'คุณถูกห้ามเข้าชมเวบไซต์นี้');
define('NOT_WITH_UDB', 'ไม่สามารถใช้งานฟังก์ชันนี้ได้ใน coppermine เนื่องจากได้ถูกรวมกับระบบกระดานข่าว หรือค่าระบบไม่รองรับความสามารถนี้ หรือระบบกระดานข่าวไม่สามารถจัดการความสามารถนี้ได้');
define('MEMBERS_ONLY', 'ความสามารถนี้ใช้ได้เฉพาะสมาชิกเท่านั้น กรุณาสมัครสมาชิกก่อน');
define('MUSTBE_GOD', 'ความสามารถนี้ใช้ได้เฉพาะผู้ดูแลเท่านั้น คุณจะต้องเข้าสู่ระบบในฐานะผู้ดูแล จึงจะสามารถใช้งานได้');
define('NO_IMG_TO_APPROVE', 'No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE', 'ไปยังรายการอัลบั้ม');
define('ALB_LIST_LNK', 'รายการอัลบั้ม');
define('MY_GAL_TITLE', 'ไปยังแกลอรีส่วนตัว');
define('MY_GAL_LNK', 'แกลอรีส่วนตัว');
define('MY_PROF_LNK', 'ข้อมูลส่วนตัว');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'เปลี่ยนเป็นสถานะผู้ดูแล');
define('ADM_MODE_LNK', 'สถานะผู้ดูแล');
define('USR_MODE_TITLE', 'เปลี่ยนเป็นสถานะผู้ใช้งาน');
define('USR_MODE_LNK', 'สถานะผู้ใช้');
define('UPLOAD_PIC_TITLE', 'ส่งภาพภาพสู่อัลบั้ม');
define('UPLOAD_PIC_LNK', 'ส่งภาพ');
define('REGISTER_TITLE', 'สร้างรายชื่อผู้ใช้');
define('REGISTER_LNK', 'ลงทะเบียน');
define('LOGIN_LNK', 'เข้าสู่ระบบ');
define('LOGOUT_LNK', 'ออกจากระบบ');
define('LASTUP_LNK', 'ส่งภาพล่าสุด');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'วิจารณ์ล่าสุด');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'เข้าชมมากสุด');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK', 'อันดับสูงสุด');
define('SEARCH_TITLE', 'Search Photo Collection');
define('SEARCH_LNK', 'ค้นหา');
define('FAV_TITLE', 'ภาพที่โปรดปราน');
define('FAV_LNK', 'ภาพที่โปรดปราน');
define('HELP_TITLE', 'HELP');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'ตรวจสอบการส่งภาพ ');
define('CONFIG_LNK', 'กำหนดค่า');
define('ALBUMS_LNK', 'อัลบั้ม');
define('CATEGORIES_LNK', 'หมวดหมู่');
define('USERS_LNK', 'ผู้ใช้งาน');
define('GROUPS_LNK', 'กลุ่ม');
define('COMMENTS_LNK', 'คำวิจารณ์');
define('SEARCHNEW_LNK', 'เพิ่มภาพต่อเนื่อง');
define('UTIL_LNK', 'ปรับขนาดภาพ');
define('BAN_LNK', 'ห้ามผู้ใช้');

// lang_user_admin_menu
define('ALBMGR_LNK', 'สร้างอัลบั้ม');
define('MODIFYALB_LNK', 'แก้ไขอัลบั้ม');
//define('MY_PROF_LNK', 'ข้อมูลส่วนตัว');

// lang_cat_list
define('CATEGORY', 'หมวดหมู่');
define('ALBUMS', 'อัลบั้ม');
//define('PICTURES', 'ภาพ');

// lang_album_list
define('ALBUM_ON_PAGE', '%d อัลบั้ม จำนวน %d หน้า');
// lang_thumb_view
define('DATE', 'วันที่');
define('NAME', 'ชื่อ');
define('TITLE', 'TITLE');
define('SORT_DA', 'เรียงตามวัน จากน้อยไปมาก');
define('SORT_DD', 'เรียงตามวัน จากมากไปน้อย');
define('SORT_NA', 'เรียงตามชื่อ จากน้อยไปมาก');
define('SORT_ND', 'เรียงตามชื่อ จากมากไปน้อย');
define('SORT_TA', 'เรียงตามหัวเรื่อง จากน้อยไปมาก');
define('SORT_TD', 'เรียงตามหัวเรื่อง จากมากไปน้อย');
define('PIC_ON_PAGE', '%d ภาพ จำนวน %d หน้า');
define('USER_ON_PAGE', '%d ผู้ใช้งาน จำนวน %d หน้า');
define('SORT_RA', 'เรียงตามอันดับ จากน้อยไปมาก');
define('SORT_RD', 'เรียงตามอันดับ จากมากไปน้อย');
define('THUMB_RATING', 'จัดอันดับ');
define('SORT_TITLE', 'เรียงภาพโดย:');

// lang_img_nav_bar
define('THUMB_TITLE', 'กลับไปยังหน้าแสดงภาพย่อ ');
define('PIC_INFO_TITLE', 'แสดง/ซ่อน รายละเอียดของภาพ');
define('SLIDESHOW_TITLE', 'แสดงสไลด์');
define('SLIDESHOW_DISABLED', 'ไม่สามารถใช้งาน e-cards ได้');
define('SLIDESHOW_DISABLED_MSG', 'ความสามารถนี้ใช้ได้เฉพาะสมาชิกเท่านั้น กรุณาสมัครสมาชิกก่อน');
define('ECARD_TITLE', 'ส่งภาพแบบ e-card');
define('ECARD_DISABLED', 'ไม่สามารถใช้งาน e-cards ได้ ');
define('ECARD_DISABLED_MSG', 'คุณไม่สามารถส่ง ecards ได้');
define('PREV_TITLE', 'ภาพก่อนหน้า');
define('NEXT_TITLE', 'ภาพถัดไป');
define('PIC_POS', 'ภาพ %s/%s');
define('NO_MORE_IMAGES', 'ไม่มีภาพเพิ่มเติมอีกแล้ว');
define('NO_LESS_IMAGES', 'ภาพนี้ เป็นภาพแรกในแกลอรี');

// lang_rate_pic
define('RATE_THIS_PIC', 'ให้คะแนน ');
define('NO_VOTES', '(ยังไม่มีการโหวต)');
define('RATING', '(คะแนน : %s / 5 จาก %s โหวต)');
define('RUBBISH', 'แย่มาก');
define('POOR', 'แย่');
define('FAIR', 'พอใช้');
define('GOOD', 'ดี');
define('EXCELLENT', 'ดีมาก');
define('GREAT', 'วิเศษ!');

// lang_cpg_die
//define('INFORMATION', 'รายละเอียด');
//define('ERROR', 'ผิดพลาด');
define('_CRITICAL_ERROR', 'ผิดพลาดร้ายแรง');
define('FILE', 'ไฟล์ : ');
define('LINE', 'บรรทัด : ');

// lang_display_thumbnails
define('FILENAME', 'ชื่อไฟล์ : ');
define('FILESIZE', 'ขนาดไฟล์ : ');
define('DIMENSIONS', 'ขนาดภาพ : ');
define('DATE_ADDED', 'เพิ่มเมื่อวันที่ : ');

// lang_get_pic_data
define('N_COMMENTS', '%s คำวิจารณ์');
define('N_VIEWS', '%s เข้าชม');
define('N_VOTES', '(%s โหวต)');


// lang_albmgr_php
define('ALB_NEED_NAME', 'กรุณาใส่ชื่ออัลบั้ม !');
define('CONFIRM_MODIFS', 'แน่ใจว่า จะเปลี่ยนแปลงค่านี้ ?');
define('NO_CHANGE', 'คุณยังไม่ได้เปลี่ยนแปลงอะไร !');
define('NEW_ALBUM', 'อัลบั้มใหม่');
define('CONFIRM_DELETE1', 'แน่ใจว่า จะลบอัลบั้มนี้ ?');
define('CONFIRM_DELETE2', '\\n ภาพและคำวิจารณ์ทั้งหมดจะถูกลบ !');
define('SELECT_FIRST', 'กรุณาเลือกอัลบั้มก่อน');
define('ALB_MRG', 'ระบบจัดการอัลบั้ม');
define('MY_GALLERY', '*  แกลอรีส่วนตัว*');
define('NO_CATEGORY', '* ไม่มีหมวดหมู่ *');
define('DELETE', 'ลบ');
define('NEW', 'สร้างใหม่');
define('APPLY_MODIFS', 'บันทึกการเปลี่ยนแปลง');
define('SELECT_CATEGORY', 'เลือกหมวดหมู่');

// lang_catmgr_php
define('MISS_PARAM', 'ตัวแปรสำหรับ \'%s\'ไม่ถูกต้อง !');
define('UNKNOWN_CAT', 'ไม่มีหมวดหมู่ที่เลือก');
define('USERGAL_CAT_RO', 'ไม่สามารถลบแกลอรีได้ !');
define('MANAGE_CAT', 'จัดการหมวดหมู่');
define('CONFIRM_DELETE_CAT', 'แน่ใจว่า จะลบหมวดหมู่นี้');
//define('CATEGORY', 'หมวดหมู่');
define('OPERATIONS', 'กระทำ');
define('MOVE_INTO', 'ย้ายไปยัง');
define('UPDATE_CREATE', 'ปรับปรุง/สร้างหมวดหมู่');
define('PARENT_CAT', 'หมวดหมู่หลัก');
define('CAT_TITLE', 'ชื่อหมวดหมู่');
define('CAT_DESC', 'รายละเอียดหมวดหมู่');

// lang_config_php
define('CONFIG_TITLE', 'กำหนดค่า');
define('RESTORE_CFG', 'กลับยังค่าเดิม');
define('SAVE_CFG', 'บันทึกค่าใหม่');
define('NOTES', 'บันทึก');
//define('INFO', 'รายละเอียด');
define('UPD_SUCCESS', 'ปรับปรุงค่าของ Coppermine แล้ว');
define('RESTORE_SUCCESS', 'กลับไปใช้ค่าเดิมของ Coppermine แล้ว');
define('NAME_A', 'ชื่อ จากน้อยไปมาก');
define('NAME_D', 'ชื่อ จากมากไปน้อย');
define('TITLE_A', 'หัวเรื่อง จากน้อยไปมาก');
define('TITLE_D', 'หัวเรื่อง จากมากไปน้อย');
define('DATE_A', 'วันที่ จากน้อยไปมาก');
define('DATE_D', 'วันที่ จากมากไปน้อย');
define('RATING_A', 'อันดับ จากน้อยไปมาก');
define('RATING_D', 'อันดับ จากมากไปน้อย');
define('TH_ANY', 'ขนาดมากสุด');
define('TH_HT', 'สูง');
define('TH_WD', 'กว้าง');


// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'กรุณาเติมชื่อและคำวิจารณ์');
define('COM_ADDED', 'เพิ่มคำวิจารณ์แล้ว');
define('ALB_NEED_TITLE', 'กรุณาใส่หัวเรื่องของอัลบั้ม !');
define('NO_UDP_NEEDED', 'ไม่จำเป็นต้องปรับปรุง');
define('ALB_UPDATED', 'ปรับปรุงอัลบั้มแล้ว');
define('UNKNOWN_ALBUM', 'ไม่มีอัลบั้มที่คุณเลือก หรือคุณไม่มีสิทธิ์ส่งภาพเข้าอัลบั้ม');
define('NO_PIC_UPLOADED', 'ไม่มีการส่งภาพเข้ามา!<br /><br />ถ้าคุณเลือกภาพที่จะส่งแล้วกรุณาตรวจสอบการตั้งค่าอนุญาตสำหรับแม่ข่าย');
define('ERR_MKDIR', 'ไม่สามารถสร้าง directory %s !');
define('DEST_DIR_RO', 'directory ปลายทาง %s ไม่สามารถเขียนได้ โดยscript !');
define('ERR_MOVE', 'ไม่สามารถเคลื่อนย้าย %s ไปยัง %s !');
define('ERR_FSIZE_TOO_LARGE', 'ขนาดของภาพที่คุณส่งเข้ามาใหญ่เกินไป (ขนาดมากสุดที่อนุญาต คือ %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'ขนาดของไฟล์ที่คุณส่งเข้ามาใหญ่เกินไป  (ขนาดมากสุดที่อนุญาต คือ %s กิโลไบต์) !');
define('ERR_INVALID_IMG', 'รูปแบบของไฟล์ที่คุณส่งเข้ามาไม่ถูกต้อง !');
define('ALLOWED_IMG_TYPES', 'คุณสามารถส่งภาพเข้ามาเพียง %s ภาพ');
define('ERR_INSERT_PIC', 'ไม่สามารถส่งภาพ  \'%s\' เข้าอัลบั้มได้ ');
define('UPLOAD_SUCCESS', 'ส่งภาพเรียบร้อยแล้ว<br /><br />จะแสดงได้ เมื่อผู้ดูแลได้ตรวจสอบแล้ว');
//define('INFO', 'รายละเอียด');
define('ERR_COMMENT_EMPTY', 'คำวิจารณ์ของคุณว่างเปล่า !');
define('ERR_INVALID_FEXT', 'ไฟล์ที่อนุญาตจะต้องมีนามสกุล : <br /><br />%s.');
define('NO_FLOOD', 'เสียใจด้วย เนื่องจากคุณเป็นผู้เขียนคำวิจารณ์ล่าสุด<br /><br />คุณสามาถแก้ไขคำวิจารณ์ของคุณได้เท่านั้น');
define('REDIRECT_MSG', 'คุณกำลังถูกส่งไปยัง<br /><br /><br />กดปุ่ม \'ต่อไป\' ถ้าหากยังไม่มีการเปลี่ยนหน้าจอ');
define('UPL_SUCCESS', 'เพิ่มภาพของคุณเรียบร้อยแล้ว');

// lang_delete_php
define('CAPTION', 'ข้อความจั่วหน้า');
define('FS_PIC', 'ภาพขนาดเต็ม');
define('DEL_SUCCESS', 'ลบเรียบร้อยแล้ว');
define('NS_PIC', 'ขนาดภาพปกติ');
define('ERR_DEL', 'ไม่สามารถลบได้');
define('THUMB_PIC', 'ภาพแบบย่อ');
//define('COMMENT', 'คำวิจารณ์');
define('IM_IN_ALB', 'ภาพในอัลบั้ม');
define('ALB_DEL_SUCCESS', 'ลบอัลบั้ม  \'%s\' ');
define('ALB_MGR', 'ระบบจัดการอัลบั้ม');
define('ERR_INVALID_DATA', 'มีความผิดพลาดของข้อมูลใน \'%s\'');
define('CREATE_ALB', 'สร้างอัลบั้ม \'%s\'');
define('UPDATE_ALB', 'ปรับปรุงอัลบั้ม \'%s\' ด้วยหัวเรื่อง  \'%s\' และดัชนี \'%s\'');
define('DEL_PIC', 'ลบภาพ');
define('DEL_ALB', 'ลบอัลบั้ม');
define('DEL_USER', 'ลบผู้ใช้งาน');
//define('ERR_UNKNOWN_USER', 'ไม่มีผู้ใช้งานที่เลือก !');
define('COMMENT_DELETED', 'ลบคำวิจารณ์เรียบร้อยแล้ว');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'คุณแน่ใจว่า จะลบภาพนี้ ? \\n คำวิจารณ์จะถูกลบไปด้วย');
define('DEL_THIS_PIC', 'ลบภาพ');
define('SIZE', '%s x %s pixels');
define('VIEWS', '%s ครั้ง');
define('SLIDESHOW', 'แสดงสไลด์');
define('STOP_SLIDESHOW', 'หยุดการแสดงสไลด์');
define('VIEW_FS', 'ดูภาพขนาดเต็ม');
define('EDIT_PIC', 'แก้ไขรายละเอียดของภาพ');

// lang_picinfo
define('PIC_INF_TITLE', 'รายละเอียดของภาพ');
define('PIC_INF_FILENAME', 'ชื่อไฟล์');
define('ALBUM_NAME', 'ชื่ออัลบั้ม');
define('PIC_INFO_RATING', 'อันดับ (%s โหวต)');
define('KEYWORDS', 'คำสำคัญ');
define('PIC_INF_FILE_SIZE', 'ขนาดไฟล์');
define('PIC_INF_DIMENSIONS', 'ขนาดภาพ');
define('DISPLAYED', 'แสดงเกี่ยวกับ');
define('CAMERA', 'กล้อง');
define('DATE_TAKEN', 'ถ่ายเมื่อวันที่');
define('APERTURE', 'รูรับแสง');
define('EXPOSURE_TIME', 'ระยะเวลารับแสง');
define('FOCAL_LENGTH', 'ความยาวโฟกัส');
define('COMMENT', 'คำวิจารณ์');
define('ADDFAV', 'เพิ่มไปยังอัลบั้มที่โปรดปราน');
define('ADDFAVPHRASE', 'โปรดปราน');
define('REMFAV', 'ลบออกจากอัลบั้มที่โปรดปราน');
define('IPTCTITLE', 'หัวเรื่อง IPTC ');
define('IPTCCOPYRIGHT', 'ลิขสิทธิ์ IPTC ');
define('IPTCKEYWORDS', 'คำสำคัญ IPTC ');
define('IPTCCATEGORY', 'หมวด IPTC ');
define('IPTCSUBCATEGORIES', 'หมวดย่อย IPTC ');
define('BOOKMARK_PAGE', 'Bookmark ภาพ ');
define('REMOVEFAV', 'Removed from Favorites Album');
define('ADDEDTOFAV', 'Added to Favorites Album');

// lang_display_comments
define('OK', 'ตกลง');
define('COM_EDIT_TITLE', 'แก้ไขคำวิจารณ์');
define('CONFIRM_DELETE_COM', 'คุณแน่ใจว่าจะลบคำวิจารณ์นี้ ?');
define('ADD_YOUR_COMMENT', 'เพิ่มคำวิจารณ์');
define('COM_NAME', 'ชื่อ');
//define('COMMENT', 'คำวิจารณ์');
define('YOUR_NAME', 'ชื่อของคุณ');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'กดที่ภาพ เพื่อปิดหน้าต่างนี้');

// lang_ecard_php
define('E_TITLE', 'ส่งเป็น e-card');
define('INVALID_EMAIL', '<b>คำเตือน</b> : email ไม่ถูกต้อง !');
define('E_ECARD_TITLE', ' e-card จาก %s ถึงคุณ');
define('VIEW_ECARD', 'ถ้าหาก e-card แสดงผลไม่ถูกต้อง กรุณากด link นี้');
define('VIEW_MORE_PICS', 'กด link นี้เพื่อดูภาพอื่นๆอีก !');
define('SEND_SUCCESS', 'ส่ง ecard เรียบร้อยแล้ว');
define('SEND_FAILED', 'ขออภัย เครื่องแม่ข่ายไม่สามารถส่ง  e-card ของคุณได้');
define('FROM', 'จาก');
define('_YOUR_NAME', 'ชื่อของคุณ');
define('YOUR_EMAIL', 'email ของคุณ');
define('TO', 'ถึง');
define('RCPT_NAME', 'นามผู้รับ');
define('RCPT_EMAIL', 'email ผู้รับ');
define('GREETINGS', 'ขอแสดงความยินดี');
define('MESSAGE', 'ข้อความ');
define('ECARD_LINK_CORRUPT', 'Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser'); //NEW

// lang_editpics_php
define('PIC_INFO', 'รายละเอียดภาพ');
define('ALBUM', 'อัลบั้ม');
define('EDIT_TITLE', 'หัวเรื่อง');
define('DESC', 'คำจำกัดความ');
//define('KEYWORDS', 'คำสำคัญ');
define('PIC_INFO_STR', '%sx%s - %s กิโลไบต์ - เข้าชม %s ครั้ง - %s โหวต');
define('APPROVE', 'ภาพที่ยอมรับ');
define('POSTPONE_APP', 'เลื่อนการยอมรับ');
//define('DEL_PIC', 'ลบภาพ');
define('READ_EXIF', 'อ่านข้อมูล EXIF อีกครั้ง');
define('RESET_VIEW_COUNT', 'ตั้งค่าตัวนับการเข้าชมใหม่');
define('RESET_VOTES', 'ตั้งค่าโหวตใหม่');
define('DEL_COMM', 'ลบคำวิจารณ์');
define('UPL_APPROVAL', 'ตรวจสอบภาพที่ส่งเข้ามา');
define('EDIT_PICS', 'แก้ไขภาพ');
define('SEE_NEXT', 'ภาพต่อไป');
define('SEE_PREV', 'ภาพก่อนหน้า');
define('N_PIC', '%s ภาพ');
define('N_OF_PIC_TO_DISP', 'จำนวนภาพที่แสดง');
define('APPLY', 'บันทึกการเปลี่ยนแปลง');

// lang_groupmgr_php
define('GROUP_NAME', 'ชื่อกลุ่ม');
define('DISK_QUOTA', 'โควต้าพื้นที่');
define('CAN_RATE', 'สามารถจัดระดับภาพ (rate)ได้');
define('CAN_SEND_ECARDS', 'สามารถส่ง ecards ได้');
define('CAN_POST_COM', 'สามารถวิจารณ์ได้');
define('CAN_UPLOAD', 'สามารถส่งภาพได้');
define('CAN_HAVE_GALLERY', 'สามารถมีแกลอรีส่วนตัวได้');
//define('APPLY', 'บันทึกการเปลี่ยนแปลง');
define('CREATE_NEW_GROUP', 'สร้างกลุ่มใหม่');
define('DEL_GROUPS', 'ลบกลุ่มที่เลือก');
define('CONFIRM_DEL', 'คำเตือน !! เมื่อลบกลุ่มแล้ว สมาชิกในกลุ่มนั้นจะถูกย้ายไปยังกลุ่ม  \'ลงทะเบียน\' แทน!\\n\\nต้องการทำต่อหรือไม่ ?');
define('GROUP_TITLE', 'จัดการกลุ่ม');
define('APPROVAL_1', 'ตรวจสอบการส่งภาพสาธารณะ (1)');
define('APPROVAL_2', 'ตรวจสอบการส่งภาพส่วนตัว (2)');
define('NOTE1', '<b>(1)</b> การส่งภาพสู่อัลบั้มสาธารณะ จะต้องได้รับการตรวจสอบจากผู้ดูแล');
define('NOTE2', '<b>(2)</b> การส่งภาพสู่อัลบั้มส่วนตัว จะต้องได้รับการตรวจสอบจากผู้ดูแล');
//define('NOTES', 'บันทึก');

// lang_index_php
define('WELCOME', 'ยินดีต้อนรับ !');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'คุณแน่ใจว่าจะลบอัลบั้มนี้ ? \\nภาพและคำวิจารณ์ทั้งหมดจะถูกลบไปด้วย');
//define('DELETE', 'ลบ');
define('MODIFY', 'คุณสมบัติ');
//define('EDIT_PICS', 'แก้ไขภาพ');

// lang_list_categories
define('HOME', _HOME);
define('STAT1', '<b>[pictures]</b> ภาพ  ใน <b>[albums]</b> อัลบั้ม และ <b>[cat]</b> หมวดหมู่  <b>[comments]</b> คำวิจารณ์  มีการเข้าชม<b>[views]</b> ครั้ง');
define('STAT2', '<b>[pictures]</b>ภาพ ใน <b>[albums]</b> อัลบั้ม มีการเข้าชม <b>[views]</b> ครั้ง');
define('XX_S_GALLERY', '%s\'s แกลอรี');
define('STAT3', '<b>[pictures]</b> ภาพ ใน <b>[albums]</b> อัลบั้ม  <b>[comments]</b> คำวิจารณ์ มีการเข้าชม <b>[views]</b> ครั้ง');

// lang_list_users
define('USER_LIST', 'รายชื่อผู้ใช้งาน');
define('NO_USER_GAL', 'ไม่มีผู้ใช้งานที่ได้รับอนุญาตให้มีอัลบั้ม ');
define('N_ALBUMS', '%s อัลบั้ม');
define('N_PICS', '%s ภาพ');

// lang_list_albums
define('N_PICTURES', '%s ภาพ');
define('LAST_ADDED', ', เพิ่มล่าสุดเมื่อ %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'ปรับปรุงอัลบั้ม %s');
define('GENERAL_SETTINGS', 'ตั้งค่าทั่วไป');
define('ALB_TITLE', 'หัวเรื่องอัลบั้ม');
define('ALB_CAT', 'หมวดหมู่อัลบั้ม');
define('ALB_DESC', 'คำจำกัดความอัลบั้ม');
define('ALB_THUMB', 'ภาพแบบย่อของอัลบั้ม');
define('ALB_PERM', 'การอนุญาตสำหรับอัลบั้ม');
define('CAN_VIEW', 'อัลบั้ม สามารถดูได้โดย');
define('MOD_CAN_UPLOAD', 'ผู้มาเยือนสามารถส่งภาพได้');
define('CAN_POST_COMMENTS', 'ผู้มาเยือนสามารถวิจารณ์ได้');
define('MOD_CAN_RATE', 'ผู้มาเยือนสามารถจัดระดับภาพได้');
define('USER_GAL', 'แกลอรีของผู้ใช้งาน');
define('NO_CAT', '* ไม่มีหมวดหมู่ *');
define('ALB_EMPTY', 'ไม่มีอัลบั้ม');
define('LAST_UPLOADED', 'ส่งภาพล่าสุด');
define('PUBLIC_ALB', 'อัลบั้มสาธารณะ');
define('ME_ONLY', 'อัลบั้มส่วนตัว');
define('OWNER_ONLY', 'เจ้าของอัลบั้ม (%s) เท่านั้น');
define('GROUPP_ONLY', 'สมาชิกกลุ่ม \'%s\' ');
define('ERR_NO_ALB_TO_MODIFY', 'ไม่มีอัลบั้มที่คุณสามารถแก้ไข ในฐานข้อมูล');
define('UPDATE', 'ปรับปรุงอัลบั้ม');

// lang_rate_pic_php
define('ALREADY_RATED', 'ขออภัย คุณได้จัดระดับภาพนี้แล้ว');
define('RATE_OK', 'การโหวตของคุณได้รับการยอมรับ');

// lang_register_php
define('USERNAME', 'ชื่อผู้ใช้');
define('X_S_PROFILE', 'ข้อมูลของ %s\'s ');
define('GROUP', 'กลุ่ม');
define('DISK_USAGE', 'พื้นที่ที่ใช้ไป');

// lang_reviewcom_php
define('REVIEW_TITLE', 'ทบทวนคำวิจารณ์');
define('NO_COMMENT', 'ไม่มีคำวิจารณ์');
define('N_COMM_DEL', 'ลบ %s คำวิจารณ์ ');
define('N_COMM_DISP', 'จำนวนคำวิจารณ์ที่จะแสดง');
define('R_SEE_PREV', 'ดูก่อนหน้า');
define('R_SEE_NEXT', 'ดูถัดไป');
define('R_DEL_COMM', 'ลบคำวิจารณ์ที่ถูกเลือก');

// lang_search_php
define('S_SEARCH', 'ค้นหาภาพ');

// lang_search_new_php
define('PAGE_TITLE', 'ค้นภาพใหม่');
define('SELECT_DIR', 'เลือก directory');
define('SELECT_DIR_MSG', 'ด้วยคำสั่งนี้ คุณสามารถส่งภาพต่อเนื่องมายังเครื่องแม่ข่ายโดยผ่านทาง FTP<br /><br />กรุณาเลือก directory ที่ต้องการส่งภาพ');
define('NO_PIC_TO_ADD', 'ไม่มีภาพที่จะเพิ่ม');
define('NEED_ONE_ALBUM', 'ในการใช้คำสั่งนี้ คุณจะต้องมีอย่างน้อย 1 อัลบั้ม');
define('WARNING', 'คำเตือน');
define('CHANGE_PERM', 'ชุดคำสั่งไม่สามารถบันทึก directory นี้ได้ คุณจะต้องเปลี่ยน mode เป็น 755 หรือ 777 ก่อนที่จะทำการเพิ่มภาพ !');
define('TARGET_ALBUM', '<b>เพิ่มภาพ &quot;</b>%s<b>&quot; ไปยัง </b>%s');
define('FOLDER', 'โฟลเดอร์');
define('IMAGE', 'ภาพ');
//define('ALBUM', 'อัลบั้ม');
define('RESULT', 'แสดงผล');
define('DIR_RO', 'ไม่สามารถบันทึกได้ ');
define('DIR_CANT_READ', 'ไม่สามารถอ่านได้. ');
define('INSERT', 'เพิ่มภาพใหม่ในแกลอรี');
define('LIST_NEW_PIC', 'แสดงรายการภาพใหม่');
define('INSERT_SELECTED', 'เพิ่มภาพที่เลือก');
define('NO_PIC_FOUND', 'ไม่พบภาพใหม่');
define('BE_PATIENT', 'กรุณารอซักครู่ เนื่องจากชุดคำสั่งต้องใช้เวลาในการเพิ่มภาพ');
define('SN_NOTES', '<ul><li><b>OK</b> : หมายถึง เพิ่มภาพสำเร็จ<li><b>DP</b> : หมายถึง มีภาพซ้ำ หรือมีอยู่แล้วในฐานข้อมูล<li><b>PB</b> : หมายถึง ไม่สามารถเพิ่มภาพได้ กรุณาตรวจสอบค่าติดตั้งและการอนุญาตของ directories ให้ถูกต้อง<li>ถ้าหาก สัญลักษณ์ OK, DP, PB ไม่ปรากฏ  ให้กดบนภาพที่มีปัญหาเพื่อดูข้อผิดพลาดที่เกิดขึ้น<li>ถ้าหากบราวเซอร์หมดเวลา กรุณากดปุ่ม Refresh </ul>');
define('SELECT_ALBUM', 'เลือกอัลบั้ม');
define('NO_ALBUM', 'ยังไม่ได้เลือกอัลบั้ม กรุณากลับไปเลือกอัลบั้มที่ต้องการจะเพิ่มภาพ');

// lang_upload_php
define('UP_TITLE', 'ส่งภาพ');
define('MAX_FSIZE', 'ขนาดไฟล์ใหญ่สุดที่อนุญาต คือ  %s KB');
//define('ALBUM', 'อัลบั้ม');
define('PICTURE', 'ภาพ');
define('PIC_TITLE', 'หัวเรื่องภาพ');
define('DESCRIPTION', 'คำจำกัดความ');
define('UP_KEYWORDS', 'คำสำคัญ (แยกจากกันด้วยช่องว่าง)');
define('ERR_NO_ALB_UPLOADABLES', 'ขออภัย ไม่มีอัลบั้มที่คุณสามารถส่งภาพได้');

// lang_usermgr_php
define('U_TITLE', 'จัดการผู้ใช้งาน');
//define('NAME_A', 'ชื่อ จากน้อยไปมาก');
//define('NAME_D', 'ชื่อ จากมากไปน้อย');
define('GROUP_A', 'กลุ่ม จากน้อยไปมาก');
define('GROUP_D', 'กลุ่ม จากมากไปน้อย');
define('REG_A', 'วันที่ลงทะเบียน จากน้อยไปมาก');
define('REG_D', 'วันที่ลงทะเบียน จากมากไปน้อย');
define('PIC_A', 'จำนวนภาพ จากน้อยไปมาก');
define('PIC_D', 'จำนวนภาพ จากมากไปน้อย');
define('DISKU_A', 'การใช้พื้นที่ จากน้อยไปมาก');
define('DISKU_D', 'การใช้พื้นที่ จากมากไปน้อย');
define('SORT_BY', 'จัดเรียงผู้ใช้งานโดย');
define('ERR_NO_USERS', 'ตารางผู้ใช้งานว่างเปล่า !');
define('ERR_EDIT_SELF', 'คุณไม่สามารถแก้ไขข้อมูลส่วนตัวได้  ให้ใช้ link  \'ข้อมูลส่วนตัว\' แทน');
define('EDIT', 'แก้ไข');
//define('DELETE', 'ลบ');
define('U_NAME', 'ชื่อผู้ใช้');
//define('GROUP', 'กลุ่ม');
define('INACTIVE', 'ไม่ทำงาน');
//define('OPERATIONS', 'การกระทำ');
define('PICTURES', 'ภาพ');
define('DISK_SPACE', 'พื้นที่ใช้ / พื้นที่กำหนด');
define('REGISTERED_ON', 'ลงทะเบียน เมื่อ');
define('U_USER_ON_P_PAGES', '%d ผู้ใช้งาน จำนวน %d หน้า');
define('USER_CONFIRM_DEL', 'คุณแน่ใจที่จะลบผู้ใช้งานคนนี้ ? \\nภาพและอัลบั้มทั้งหมดของเขาจะถูกลบไปด้วย');
define('MAIL', 'เมล');
define('ERR_UNKNOWN_USER', 'ไม่มีผู้ใช้งานที่คุณเลือก !');
define('MODIFY_USER', 'เปลี่ยนแปลงผู้ใช้งาน');
//define('NOTES', 'บันทึก');
define('NOTE_LIST', '<li>ถ้าคุณไม่ต้องการเปลี่ยนแปลงรหัสผ่านปัจจุบัน กรุณาปล่อยว่างฟิลด์ \"รหัสผ่าน\" ');
define('PASSWORD', 'รหัสผ่าน');
define('USER_ACTIVE_CP', 'ผู้ใช้สามารถใช้งานได้');
define('USER_GROUP_CP', 'กลุ่มของผู้ใช้');
define('USER_EMAIL', 'email');
define('USER_WEB_SITE', 'web site');
define('CREATE_NEW_USER', 'สร้างผู้ใช้ใหม่');
define('USER_FROM', 'สถานที่อยู่');
define('USER_INTERESTS', 'ความสนใจ');
define('USER_OCC', 'อาชีพ');

// lang_util_php
define('UTIL_TITLE', 'ปรับขนาดภาพ');
define('WHAT_IT_DOES', 'ทำได้ยังไง');
define('WHAT_UPDATE_TITLES', 'ปรับปรุงหัวเรื่องจากชื่อไฟล์');
define('WHAT_DELETE_TITLE', 'ลบหัวเรื่อง');
define('WHAT_REBUILD', 'สร้างภาพขนาดย่อ และปรับขนาดภาพใหม่');
define('WHAT_DELETE_ORIGINALS', 'ลบขนาดภาพต้นฉบับ และแทนที่ด้วยรุ่นที่ปรับขนาดใหม่');
define('U_FILE', 'ไฟล์');
define('TITLE_SET_TO', 'ตั้งหัวเรื่องเป็น');
define('SUBMIT_FORM', 'ตกลง');
define('UPDATED_SUCCESFULLY', 'ปรับปรุงเรียบร้อยแล้ว');
define('ERROR_CREATE', 'มีข้อผิดพลาดในการสร้าง');
define('CONTIN', 'ดำเนินการกับภาพอื่นๆอีก');
define('MAIN_SUCCESS', 'ไฟล์ %s ถูกใช้เป็นภาพหลักแล้ว');
define('ERROR_RENAME', 'มีข้อผิดพลาดในการเปลี่ยนชื่อจาก  %s ไปเป็น %s');
define('ERROR_NOT_FOUND', 'ไม่พบไฟล์ %s ');
define('U_BACK', 'กลับไปยังหน้าจอหลัก');
define('THUMBS_WAIT', 'กำลังปรับปรุงภาพขนาดย่อ และ/หรือปรับขนาดภาพ  กรุณารอซักครู่...');
define('THUMBS_CONTINUE_WAIT', 'กำลังดำเนินการปรับปรุงภาพขนาดย่อ และ/หรือ ปรับขนาดภาพ...');
define('TITLES_WAIT', 'กำลังปรับปรุงหัวเรื่อง  กรุณารอซักครู่...');
define('DELETE_WAIT', 'กำลังลบหัวเรื่อง  กรุณารอซักครู่...');
define('REPLACE_WAIT', 'กำลังลบต้นฉบับ และแทนที่ด้วยภาพที่ปรับขนาดแล้ว กรุณารอซักครู่..');
define('INSTRUCTION', 'คำแนะนำแบบเร่งด่วน');
define('INSTRUCTION_ACTION', 'เลือกรายการที่ต้องการ');
define('INSTRUCTION_PARAMETER', 'ตั้งค่าต่างๆ');
define('INSTRUCTION_ALBUM', 'เลือกอัลบั้ม');
define('INSTRUCTION_PRESS', 'กด %s');
define('U_UPDATE', 'ปรับปรุงภาพขนาดย่อ และ/หรือปรับขนาดภาพ');
define('UPDATE_WHAT', 'จะทำการปรับปรุงอะไร');
define('UPDATE_THUMB', 'เฉพาะภาพขนาดย่อ');
define('UPDATE_PIC', 'เฉพาะปรับขนาดภาพ');
define('UPDATE_BOTH', 'ทั้งภาพขนาดย่อ และปรับขนาดภาพ');
define('UPDATE_NUMBER', 'จำนวนภาพที่ดำเนินการต่อครั้ง');
define('UPDATE_OPTION', '(พยายามตั้งค่าให้ต่ำ ถ้าคุณเคยมีปัญหาเรื่องเวลาในการทำคำสั่งไม่เพียงพอ)');
define('FILENAME_TITLE', 'ชื่อไฟล์ &rArr; หัวเรื่องภาพ');
define('FILENAME_HOW', 'จะแก้ไขชื่อไฟล์ได้อย่างไร');
define('FILENAME_REMOVE', 'ลบ .jpg ที่อยู่ข้างหลังออก แล้วแทนที่ด้วย _ (underscore) พร้อมช่องว่าง');
define('FILENAME_EURO', 'เปลี่ยนจาก 2003_11_23_13_20_20.jpg ไปเป็น 23/11/2003 13:20');
define('FILENAME_US', 'เปลี่ยนจาก 2003_11_23_13_20_20.jpg ไปเป็น 11/23/2003 13:20');
define('FILENAME_TIME', 'เปลี่ยนจาก 2003_11_23_13_20_20.jpg ไปเป็น 13:20');
define('UT_DELETE', 'ลบหัวเรื่องภาพ หรือภาพต้นฉบับ');
define('DELETE_TITLE', 'ลบหัวเรื่องภาพ');
define('DELETE_ORIGINAL', 'ลบภาพต้นฉบับ');
define('DELETE_REPLACE', 'ลบภาพต้นฉบับ แล้วแทนที่ด้วยภาพที่ปรับขนาดแล้ว');
//define('SELECT_ALBUM', 'เลือกอัลบั้ม');

// lang_pagetitle_php
define('VIEWING', 'กำลังชมภาพ');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'แกลอรีภาพ');
$lang_usermgr_php = array(
    'name_a' => 'ชื่อ จากน้อยไปมาก',
    'name_d' => 'ชื่อ จากมากไปน้อย',
    'group_a' => 'กลุ่ม จากน้อยไปมาก',
    'group_d' => 'กลุ่ม จากมากไปน้อย',
    'reg_a' => 'วันที่ลงทะเบียน จากน้อยไปมาก',
    'reg_d' => 'วันที่ลงทะเบียน จากมากไปน้อย',
    'pic_a' => 'จำนวนภาพ จากน้อยไปมาก',
    'pic_d' => 'จำนวนภาพ จากมากไปน้อย',
    'disku_a' => 'การใช้พื้นที่ จากน้อยไปมาก',
    'disku_d' => 'การใช้พื้นที่ จากมากไปน้อย',
          );
$lang_byte_units = array('ไบต์', 'กิโลไบต์', 'เมกกะไบต์');
// Day of weeks and months
$lang_day_of_week = array('อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.');
$lang_month = array('ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.');
$lang_meta_album_names = array(
    'random' => 'ภาพแบบสุ่ม',
    'lastup' => 'ส่งภาพล่าสุด',
    'lastupby' => 'ภาพล่าสุดของฉัน', // new 1.2.2
    'lastalb' => 'อัลบั้มปรับปรุงล่าสุด',// new 1.2.2
    'lastcom' => 'วิจารณ์ล่าสุด',
    'lastcomby' => 'คำวิจารณ์ล่าสุดของฉัน', // new 1.2.2
    'topn' => 'เข้าชมมากสุด',
    'toprated' => 'อันดับสูงสุด',
    'lasthits' => 'เข้าชมล่าสุด',
    'search' => 'ผลการค้นหา',
    'favpics' => 'ภาพที่โปรดปราน', // changed in cpg1.2.0nuke
    );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array(
    'title' => 'กำหนดค่า',
    'restore_cfg' => 'กลับยังค่าเดิม',
    'save_cfg' => 'บันทึกค่าใหม่',
    'notes' => 'บันทึก',
    'info' => 'รายละเอียด',
    'upd_success' => 'ปรับปรุงค่าของ Coppermine แล้ว',
    'restore_success' => 'กลับไปใช้ค่าเดิมของ Coppermine แล้ว',
    'name_a' => 'ชื่อ จากน้อยไปมาก',
    'name_d' => 'ชื่อ จากมากไปน้อย',
    'title_a' => 'หัวเรื่อง จากน้อยไปมาก',
    'title_d' => 'หัวเรื่อง จากมากไปน้อย',
    'date_a' => 'วันที่ จากน้อยไปมาก',
    'date_d' => 'วันที่ จากมากไปน้อย',
    'rating_a' => 'อันดับ จากน้อยไปมาก', // new in cpg1.2.0nuke
    'rating_d' => 'อันดับ จากมากไปน้อย', // new in cpg1.2.0nuke
    'th_any' => 'ขนาดมากสุด',
    'th_ht' => 'สูง',
    'th_wd' => 'กว้าง',
        );
// start left side interpretation
    $lang_config_data = array(
    // 'General settings',
    'ตั้งค่าทั่วไป',
	array('ชื่อแกลอรี ', 'gallery_name',0),
    array('รายละเอียดแกลอรี ', 'gallery_description',0),
    array('E-mail ผู้ดูแลแกลอรี ', 'gallery_admin_email',0),
    array('address สำหรับ links  \'ดูภาพอีก...\' ของ e-cards', 'ecards_more_pic_target',0),
    array('ธีม', 'theme', 6),
    array('หัวเรื่องที่ระบุแทน >Coppermine', 'nice_titles', 1),
//'Album list view',
'แสดงอัลบั้ม',
    array('ความกว้างตารางหลัก (pixels or %)', 'main_table_width',0),
    array('จำนวนระดับของหมวดหมู่', 'subcat_level',0),
    array('จำนวนอัลบั้ม', 'albums_per_page',0),
    array('จำนวนสดมภ์ของอัลบั้ม', 'album_list_cols',0),
    array('ขนาดของภาพแบบย่อ หน่วย pixels', 'alb_list_thumb_size',0),
    array('เนื้อหาของหน้าจอหลัก', 'main_page_layout',0),
    array('แสดงลำดับแรกของภาพขนาดย่อของอัลบั้มในหมวด', 'first_level', 1), 
//'Thumbnail view',
'แสดงภาพแบบย่อ',
    array('จำนวนสดมภ์ในหน้าภาพแบบย่อ', 'thumbcols',0),
    array('จำนวนแถวในหน้าภาพแบบย่อ', 'thumbrows',0),
    array('จำนวนแถบมากสุดที่จะแสดง', 'max_tabs',0),
    array('แสดงข้อความจั่วหน้าภายใต้ภาพแบบย่อ', 'caption_in_thumbview', 1),
    array('แสดงจำนวนคำวิจารณ์ภายใต้ภาพแบบย่อ', 'display_comment_count', 1),
    array('การเรียงลำดับภาพโดยปริยาย', 'default_sort_order', 3),
    array('จำนวนน้อยที่สุดของการโหวตสำหรับภาพที่จะแสดงในรายการที่นิยมมากที่สุด', 'min_votes_for_rating',0),
    array('หัวเรื่องของภาพขนาดย่อ และคำสำคัญแทนรายละเอียดภาพ', 'seo_alts', 1), // new in cpg1.2.0nuke
 //'Display Image &amp; Comment settings',
'การตั้งค่าการวิจารณ์ของการแสดงภาพ',
   array('ความกว้างของตารางของการแสดงภาพ(pixels or %)', 'picture_table_width',0),
    array('แสดงรายละเอียดของภาพโดยปริยาย', 'display_pic_info', 1),
    array('กรองคำหยาบในคำวิจารณ์', 'filter_bad_words', 1),
    array('ใช้รูปยิ้มในคำวิจารณ์ได้', 'enable_smilies', 1),
    array('ยอมให้ผู้ใช้คนเดียวกันวิจารณ์หลายครั้งติดต่อกันใน 1 ภาพ ', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
    array('Email ไปยังผู้ดูแล เมื่อมีคำวิจารณ์' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
    array('ความยาวมากสุดของคำจำกัดความของภาพ', 'max_img_desc_length',0),
    array('จำนวนอักขระมากสุด', 'max_com_wlength',0),
    array('จำนวนบรรทัดมากสุด', 'max_com_lines',0),
    array('ความยาวมากสุดของคำวิจารณ์', 'max_com_size',0),
    array('แสดงแถบฟิล์ม', 'display_film_strip', 1),
    array('จำนวนมากสุดของภาพแถบฟิล์ม', 'max_film_strip_items',0),
    array('ยอมให้ผู้ไม่ประสงค์ออกนามดูภาพขนาดเต็ม ', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke		
	array('Number of days between being able to vote on the same image','keep_votes_time',0), // new in cpg1.2.2c nuke
    array('Show fullsize picture in slideshow','fullsize_slideshow',1),
    array('Show blocks on the right of displayimage if right blocks are on at module level?', 'right_blocks', 1), // new 1.2.2
// 'Pictures and thumbnails settings',		
'การตั้งค่าภาพและภาพแบบย่อ',
    array('คุณภาพของไฟล์ JPEG ', 'jpeg_qual',0),
    array('Place watermark on image', 'watermark', 1),
    array('ความกว้างหรือความสูงมากสุดของภาพแบบย่อ <b>*</b>', 'thumb_width',0),
    array('ใช้ขนาดภาพ ( ความกว้าง หรือความสูงของภาพแบบย่อ )<b>*</b>', 'thumb_use', 7),
    array('สร้างภาพในทันที','make_intermediate',1),
    array('ความกว้างหรือความสูงมากสุดของภาพที่แสดงในทันที <b>*</b>', 'picture_width',0),
    array('ขนาดมากสุดของภาพที่ส่งเข้ามา (KB)', 'max_upl_size',0),
    array('ความกว้างหรือความสูงมากสุดของภาพที่ส่งเข้ามา (pixels)', 'max_upl_width_height',0),
    array('Allow multiple Files to be upload with same file name', 'samename', 1), 
//'User settings',
'ตั้งค่าผู้ใช้งาน',
    array('อนุญาตให้มีการลงทะเบียนผู้ใช้งานใหม่', 'allow_user_registration', 1),
/*
    array('ต้องยืนยัน email สำหรับการลงทะเบียน', 'reg_requires_valid_email', 1),
    array('ยอมให้ผู้ใช้งาน 2 คน ใช้ email ซ้ำกัน', 'allow_duplicate_emails_addr', 1),
*/
    array('ผู้ใช้งานสามารถมีอัลบั้มส่วนตัว', 'allow_private_albums', 1),
	array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',
'ฟิลด์ที่กำหนดเองสำหรับคำจำกัดความของภาพ (ปล่อยว่าง ถ้าไม่ต้องการใช้งาน)',
    array('ชื่อฟิลด์ 1', 'user_field1_name',0),
    array('ชื่อฟิลด์ 2 ', 'user_field2_name',0),
    array('ชื่อฟิลด์ 3 ', 'user_field3_name',0),
    array('ชื่อฟิลด์ 4 ', 'user_field4_name',0),
 // 'Pictures and thumbnails advanced settings',
'ตั้งค่าแบบก้าวหน้าของภาพและภาพแบบย่อ',
    array('แสดงสัญลักษณ์อัลบั้มส่วนตัว สำหรับผู้ใช้ที่ไม่ได้เข้าสู่ระบบ', 'show_private', 1),
    array('อักขระต้องห้ามในชื่อไฟล์', 'forbiden_fname_char',0),
    array('นามสกุลของภาพที่ยอมให้ส่งเข้ามา', 'allowed_file_extensions',0),
    array('วิธีการลดขนาดภาพ','thumb_method',2),
    array('ที่อยู่ของตัวแปลงภาพของ ImageMagick (เช่น /usr/bin/X11/)', 'impath',0),
    array('ชนิดของภาพที่อนุญาต(ใช้สำหรับ ImageMagick เท่านั้น)', 'allowed_img_types',0),
    array('คำสั่งเพิ่มเติมสำหรับ ImageMagick', 'im_options',0),
    array('อ่านข้อมูล EXIF ในไฟล์ JPEG ', 'read_exif_data', 1),
    array('อ่านข้อมูล IPTC ในไฟล์ JPEG ', 'read_iptc_data', 1), // new in cpg1.2.0nuke
    array('directory ของอัลบั้ม <b>*</b>', 'fullpath',0),
    array('directory สำหรับอัลบั้มของผู้ใช้งาน <b>*</b>', 'userpics',0),
    array('คำนำหน้าสำหรับภาพในทันที <b>*</b>', 'normal_pfx',0),
    array('คำนำหน้าสำหรับภาพแบบย่อ <b>*</b>', 'thumb_pfx',0),
	array('แสดงชื่อไฟล์', 'picinfo_display_filename',1), // new in cpg1.2.0nuke
    array('แสดงชื่ออัลบั้ม', 'picinfo_display_album_name',1), // new in cpg1.2.0nuke
    array('แสดงขนาดไฟล์', 'picinfo_display_file_size',1), // new in cpg1.2.0nuke
    array('แสดงขนาดภาพ', 'picinfo_display_dimensions',1), // new in cpg1.2.0nuke
    array('แสดงจำนวนนับ', 'picinfo_display_count_displayed',1), // new in cpg1.2.0nuke
    array('แสดง URL', 'picinfo_display_URL',1), // new in cpg1.2.0nuke
    array('แสดง URL ในรูปแบบลิงค์ bookmark ', 'picinfo_display_URL_bookmark',1), // new in cpg1.2.0nuke
    array('แสดงลิงค์อัลบั้มที่โปรดปราน', 'picinfo_display_favorites',1), // new in cpg1.2.0nuke
//    'Cookies &amp; Charset settings',
'การตั้งค่า Cookies ',
    array('ชื่อของ cookie ที่ใช้งานโดย script', 'cookie_name',0),
    array('ที่อยู่ของ cookie ที่ใช้งานโดย script', 'cookie_path',0),
//    'Miscellaneous settings',
'ตั้งค่าอื่นๆ',
    array('ใช้ debug mode', 'debug_mode', 1),
'<br /><div align="center">(*) ช่องที่มี * จะต้องไม่มีการเปลี่ยนแปลง ถ้าหากคุณมีรูปอยู่ใน gallery แล้ว</div><br />'
);
// end left side interpretation
