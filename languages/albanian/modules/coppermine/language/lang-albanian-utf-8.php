<?php 
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.3.1 nuke                                       //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003 Gregory DEMAR <gdemar@wanadoo.fr>                 //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// New Port by CPG-nuke Dev Team                                             //
// http://nukephotogallery.com/                                              //
// Based on coppermine 1.1d by Surf  http://www.surf4all.net/                //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //
// error_reporting(E_ALL);
define('PIC_VIEWS', 'Views');//new in 1.2.2nuke
define('PIC_VOTES', 'Votes');//new in 1.2.2nuke
define('PIC_COMMENTS', 'Comments');//new in 1.2.2nuke

// lang_translation_info
define('LANG_NAME_ENGLISH', 'English');
define('LANG_NAME_NATIVE', 'English');
define('LANG_COUNTRY_CODE', 'en');
define('TRANS_NAME', 'Akamu Akamai');
define('TRANS_EMAIL', 'webmaster@nospam.nukephotogallery.com');
define('TRANS_WEBSITE', 'http://nukephotogallery.com/   ');
define('TRANS_DATE', '2003-04-20');
define('CHARSET', 'UTF-8');
define('TEXT_DIR', 'ltr');
define('YES', 'Yes');
define('NO', 'No');
define('BACK', 'BACK');
define('CONTINU', 'Finish');
define('INFO', 'Information');
define('_ERROR', 'Error');
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%m/%d/%y @ %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y @ %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y @ %I:%M %p');


// lang_meta_album_names
define('RANDOM', 'Random pictures');
define('LASTUP', 'Last additions');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Last updated albums');
define('LASTCOM', 'Last comments');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Most viewed');
define('TOPRATED', 'Top rated');
define('LASTHITS', 'Last viewed');
define('SEARCH', 'Search results');
define('FAVPICS', 'Favorite Pictures');

// lang_errors
define('ACCESS_DENIED', 'You don\'t have permission to access this page.');
define('PERM_DENIED', 'You don\'t have permission to perform this operation.');
define('PARAM_MISSING', 'Script called without the required parameter(s).');
define('NON_EXIST_AP', 'The selected album/picture does not exist !');
define('QUOTA_EXCEEDED', 'Disk quota exceeded<br /><br />You have a space quota of [quota]K, your pictures currently use [space]K, adding this picture would make you exceed your quota.');
define('GD_FILE_TYPE_ERR', 'When using the GD image library allowed image types are only JPEG and PNG.');
define('INVALID_IMAGE', 'The image you have uploaded is corrupted or can\'t be handled by the GD library');
define('RESIZE_FAILED', 'Unable to create thumbnail or reduced size image.');
define('NO_IMG_TO_DISPLAY', 'No image to display');
define('NON_EXIST_CAT', 'The selected category does not exist');
define('ORPHAN_CAT', 'A category has a non-existing parent, runs the category manager to correct the problem.');
define('DIRECTORY_RO', 'Directory \'%s\' is not writable, pictures can\'t be deleted');
define('NON_EXIST_COMMENT', 'The selected comment does not exist.');
define('PIC_IN_INVALID_ALBUM', 'Picture is in a non existant album (%s)!?');
define('BANNED', 'You are currently banned from using this site.');
define('NOT_WITH_UDB', 'This function is disabled in Coppermine because it is integrated with forum software. Either what you are trying to do is not supported in this configuration, or the function should be handled by the forum software.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', 'Go to the album list');
define('ALB_LIST_LNK', 'Album list');
define('MY_GAL_TITLE', 'Go to my personal gallery');
define('MY_GAL_LNK', 'My gallery');
define('MY_PROF_LNK', 'My profile');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Switch to admin mode');
define('ADM_MODE_LNK', 'Admin mode');
define('USR_MODE_TITLE', 'Switch to user mode');
define('USR_MODE_LNK', 'User mode');
define('UPLOAD_PIC_TITLE', 'Upload a picture into an album');
define('UPLOAD_PIC_LNK', 'Upload picture');
define('REGISTER_TITLE', 'Create an account');
define('REGISTER_LNK', 'Register');
define('LOGIN_LNK', 'Login');
define('LOGOUT_LNK', 'Logout');
define('LASTUP_LNK', 'Last uploads');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Last comments');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Most viewed');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK', 'Top rated');
define('SEARCH_TITLE', 'Search Photo Collection');
define('SEARCH_LNK', 'Search');
define('FAV_TITLE', 'My Favorites');
define('FAV_LNK', 'My Favorites');
define('HELP_TITLE', 'HELP');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");
// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Upload approval');
define('CONFIG_LNK', 'Config');
define('ALBUMS_LNK', 'Albums');
define('CATEGORIES_LNK', 'Categories');
define('USERS_LNK', 'Users');
define('GROUPS_LNK', 'Groups');
define('COMMENTS_LNK', 'Review Comments');
define('SEARCHNEW_LNK', 'Batch add pictures');
define('UTIL_LNK', 'Resize pictures');
define('BAN_LNK', 'Ban Users');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Create / order my albums');
define('MODIFYALB_LNK', 'Modify my albums');
//define('MY_PROF_LNK', 'My profile');

// lang_cat_list
define('CATEGORY', 'Category');
define('ALBUMS', 'Albums');
//define('PICTURES', 'Pictures');

// lang_album_list
define('ALBUM_ON_PAGE', '%d albums on %d page(s)');

// lang_thumb_view
define('DATE', 'DATE');
define('NAME', 'FILE NAME');
define('TITLE', 'TITLE');
define('SORT_DA', 'Sort by date ascending');
define('SORT_DD', 'Sort by date descending');
define('SORT_NA', 'Sort by name ascending');
define('SORT_ND', 'Sort by name descending');
define('SORT_TA', 'Sort by title ascending');
define('SORT_TD', 'Sort by title descending');
define('PIC_ON_PAGE', '%d pictures on %d page(s)');
define('USER_ON_PAGE', '%d users on %d page(s)');
define('SORT_RA', 'Sort by rating ascending');
define('SORT_RD', 'Sort by rating descending');
define('THUMB_RATING', 'RATING');
define('SORT_TITLE', 'Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Return to the thumbnail page');
define('PIC_INFO_TITLE', 'Display/hide picture information');
define('SLIDESHOW_TITLE', 'Slideshow');
define('SLIDESHOW_DISABLED', 'Slideshow is disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'Send this picture as an e-card');
define('ECARD_DISABLED', 'e-cards are disabled');
define('ECARD_DISABLED_MSG', 'You don\'t have permission to send ecards');
define('PREV_TITLE', 'See previous picture');
define('NEXT_TITLE', 'See next picture');
define('PIC_POS', 'PICTURE %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', 'Rate this picture ');
define('NO_VOTES', '(No vote yet)');
define('RATING', '(current rating : %s / 5 with %s votes)');
define('RUBBISH', 'Rubbish');
define('POOR', 'Poor');
define('FAIR', 'Fair');
define('GOOD', 'Good');
define('EXCELLENT', 'Excellent');
define('GREAT', 'Great');

// lang_cpg_die
//define('INFO', 'Information');
//define('ERROR', 'Error');
define('_CRITICAL_ERROR', 'Critical error');
define('FILE', 'File: ');
define('LINE', 'Line: ');

// lang_display_thumbnails
define('FILENAME', 'Filename : ');
define('FILESIZE', 'Filesize : ');
define('DIMENSIONS', 'Dimensions : ');
define('DATE_ADDED', 'Date added : ');

// lang_get_pic_data
define('N_COMMENTS', '%s comments');
define('N_VIEWS', '%s views');
define('N_VOTES', '(%s votes)');


// lang_albmgr_php
define('ALB_NEED_NAME', 'Albums need to have a name !');
define('CONFIRM_MODIFS', 'Are you sure you want to make these modifications ?');
define('NO_CHANGE', 'You did not make any change !');
define('NEW_ALBUM', 'New album');
define('CONFIRM_DELETE1', 'Are you sure you want to delete this album ?');
define('CONFIRM_DELETE2', '\\nAll pictures and comments it contains will be lost !');
define('SELECT_FIRST', 'Select an album first');
define('ALB_MRG', 'Album Manager');
define('MY_GALLERY', '* My gallery *');
define('NO_CATEGORY', '* No category *');
define('DELETE', 'Delete');
define('NEW', 'New');
define('APPLY_MODIFS', 'Apply modifications');
define('SELECT_CATEGORY', 'Select category');

// lang_catmgr_php
define('MISS_PARAM', 'Parameters required for \'%s\'operation not supplied !');
define('UNKNOWN_CAT', 'Selected category does not exist in database');
define('USERGAL_CAT_RO', 'User galleries category can\'t be deleted !');
define('MANAGE_CAT', 'Manage categories');
define('CONFIRM_DELETE_CAT', 'Are you sure you want to DELETE this category');
//define('CATEGORY', 'Category');
define('OPERATIONS', 'Operations');
define('MOVE_INTO', 'Move into');
define('UPDATE_CREATE', 'Update/Create category');
define('PARENT_CAT', 'Parent category');
define('CAT_TITLE', 'Category title');
define('CAT_DESC', 'Category description');

// lang_config_php
define('CONFIG_TITLE', 'Configuration');
define('RESTORE_CFG', 'Restore factory defaults');
define('SAVE_CFG', 'Save new configuration');
define('NOTES', 'Notes');
//define('INFO', 'Information');
define('UPD_SUCCESS', 'Coppermine configuration was updated');
define('RESTORE_SUCCESS', 'Coppermine default configuration restored');
define('NAME_A', 'Name ascending');
define('NAME_D', 'Name descending');
define('TITLE_A', 'Title ascending');
define('TITLE_D', 'Title descending');
define('DATE_A', 'Date ascending');
define('DATE_D', 'Date descending');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Height');
define('TH_WD', 'Width');


// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'You need to type your name and a comment');
define('COM_ADDED', 'Comment added');
define('ALB_NEED_TITLE', 'You have to provide a title for the album !');
define('NO_UDP_NEEDED', 'No update needed.');
define('ALB_UPDATED', 'Album updated');
define('UNKNOWN_ALBUM', 'Selected album does not exist or you don\'t have permission to upload in this album');
define('NO_PIC_UPLOADED', 'No picture was uploaded !<br /><br />If you have really selected a picture to upload, check that the server allows file uploads...');
define('ERR_MKDIR', 'Failed to create directory %s !');
define('DEST_DIR_RO', 'Destination directory %s is not writable by the script !');
define('ERR_MOVE', 'Impossible to move %s to %s !');
define('ERR_FSIZE_TOO_LARGE', 'The size of picture you have uploaded is too large (maximum allowed is %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'The size of the file you have uploaded is too large (maximum allowed is %s KB) !');
define('ERR_INVALID_IMG', 'The file you have uploaded is not a valid image !');
define('ALLOWED_IMG_TYPES', 'You can only upload %s images.');
define('ERR_INSERT_PIC', 'The picture \'%s\' can\'t be inserted in the album ');
define('UPLOAD_SUCCESS', 'Your picture was uploaded successfully<br /><br />It will be visible after admin approval.');
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
define('PIC_CONFIRM_DEL', 'Are you sure you want to DELETE this picture ? \\nComments will also be deleted.');
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
define('CONFIRM_DELETE_ALB', 'Are you sure you want to DELETE this album ? \\nAll pictures and comments will also be deleted.');
//define('DELETE', 'DELETE');
define('MODIFY', 'PROPERTIES');
//define('EDIT_PICS', 'EDIT PICS');

// lang_list_categories
define('HOME', 'Home');
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
define('ERR_NO_ALB_TO_MODIFY', 'There is no album you may modify.');
define('UPDATE', 'Update album');

// lang_rate_pic_php
define('ALREADY_RATED', 'Sorry but you have already rated this picture');
define('RATE_OK', 'Your vote was accepted');


// lang_reviewcom_php
define('REVIEW_TITLE', 'Review comments');
define('NO_COMMENT', 'There is no comment to review');
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
define('ERR_NO_ALB_UPLOADABLES', 'Sorry there is no album where you are allowed to upload pictures');

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
define('USER_CONFIRM_DEL', 'Are you sure you want to DELETE this user ? \\nAll his pictures and albums will also be deleted.');
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
define('CONTINUE', 'Process more images');
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
define('DELETE_ORIGINAL', 'Delete original size photos');
define('DELETE_REPLACE', 'Deletes the original images replacing them with the sized versions');
//define('SELECT_ALBUM', 'Select album');

// lang_pagetitle_php
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
$lang_byte_units = array('Bytes', 'KB', 'MB');
$lang_day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');
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
if (defined('CONFIG_PHP')) 
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
        'General settings',
        array('Gallery name', 'gallery_name', 0),
        array('Gallery description', 'gallery_description', 0),
        array('Gallery administrator email', 'gallery_admin_email', 0),
        array('Address to nuke folder ie http://www.mysite.tld/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
        array('Language', 'lang', 5),
// for postnuke change
        array('Theme', 'cpgtheme', 6),
        array('Page Specific Titles instead of >Coppermine', 'nice_titles', 1),
        array('Show blocks on the right', 'right_blocks', 1), // new 1.2.2
        'Album list view',
        array('Width of the main table (pixels or %)', 'main_table_width', 0),
        array('Number of levels of categories to display', 'subcat_level', 0),
        array('Number of albums to display', 'albums_per_page', 0),
        array('Number of columns for the album list', 'album_list_cols', 0),
        array('Size of thumbnails in pixels', 'alb_list_thumb_size', 0),
        array('The content of the main page', 'main_page_layout', 0),
        array('Show first level album thumbnails in categories', 'first_level', 1), 
        'Thumbnail view',
        array('Number of columns on thumbnail page', 'thumbcols', 0),
        array('Number of rows on thumbnail page', 'thumbrows', 0),
        array('Maximum number of tabs to display', 'max_tabs', 0),
        array('Display picture caption (in addition to title) bel睯 琀栀攀 琀栀甀洀戀渀愀椀氀✀Ⰰ ✀挀愀瀀琀椀漀渀开椀渀开琀栀甀洀戀瘀椀攀眀✀Ⰰ ㄀⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䐀椀猀瀀氀愀礀 渀甀洀戀攀爀 漀昀 挀漀洀洀攀渀琀猀 戀攀氀漀眀 琀栀攀 琀栀甀洀戀渀愀椀氀✀Ⰰ ✀搀椀猀瀀氀愀礀开挀漀洀洀攀渀琀开挀漀甀渀琀✀Ⰰ ㄀⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䐀攀昀愀甀氀琀 猀漀爀琀 漀爀搀攀爀 昀漀爀 瀀椀挀琀甀爀攀猀✀Ⰰ ✀搀攀昀愀甀氀琀开猀漀爀琀开漀爀搀攀爀✀Ⰰ ㌀⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䴀椀渀椀洀甀洀 渀甀洀戀攀爀 漀昀 瘀漀琀攀猀 昀漀爀 愀 瀀椀挀琀甀爀攀 琀漀 愀瀀瀀攀愀爀 椀渀 琀栀攀 尀✀琀漀瀀ⴀ爀愀琀攀搀尀✀ 氀椀猀琀✀Ⰰ ✀洀椀渀开瘀漀琀攀猀开昀漀爀开爀愀琀椀渀最✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䄀氀琀猀 愀渀搀 琀椀琀氀攀 琀愀最猀 漀昀 琀栀甀洀戀渀愀椀氀 猀栀漀眀 琀椀琀氀攀 愀渀搀 欀攀礀眀漀爀搀 椀渀猀琀攀愀搀 漀昀 瀀椀挀椀渀昀漀✀Ⰰ ✀猀攀漀开愀氀琀猀✀Ⰰ ㄀⤀Ⰰ ⼀⼀ 渀攀眀 椀渀 挀瀀最㄀⸀㈀⸀　渀甀欀攀ഀ਀        ✀䤀洀愀最攀 瘀椀攀眀 ☀愀洀瀀㬀 䌀漀洀洀攀渀琀 猀攀琀琀椀渀最猀✀Ⰰഀ਀        愀爀爀愀礀⠀✀圀椀搀琀栀 漀昀 琀栀攀 琀愀戀氀攀 昀漀爀 瀀椀挀琀甀爀攀 搀椀猀瀀氀愀礀 ⠀瀀椀砀攀氀猀 漀爀 ─⤀✀Ⰰ ✀瀀椀挀琀甀爀攀开琀愀戀氀攀开眀椀搀琀栀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀倀椀挀琀甀爀攀 椀渀昀漀爀洀愀琀椀漀渀 愀爀攀 瘀椀猀椀戀氀攀 戀礀 搀攀昀愀甀氀琀✀Ⰰ ✀搀椀猀瀀氀愀礀开瀀椀挀开椀渀昀漀✀Ⰰ ㄀⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䘀椀氀琀攀爀 戀愀搀 眀漀爀搀猀 椀渀 挀漀洀洀攀渀琀猀✀Ⰰ ✀昀椀氀琀攀爀开戀愀搀开眀漀爀搀猀✀Ⰰ ㄀⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䄀氀氀漀眀 猀洀椀氀攀猀 椀渀 挀漀洀洀攀渀琀猀✀Ⰰ ✀攀渀愀戀氀攀开猀洀椀氀椀攀猀✀Ⰰ ㄀⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䄀氀氀漀眀 猀攀瘀攀爀愀氀 挀漀渀猀攀挀甀琀椀瘀攀 挀漀洀洀攀渀琀猀 漀渀 漀渀攀 瀀椀挀 昀爀漀洀 琀栀攀 猀愀洀攀 甀猀攀爀✀Ⰰ ✀搀椀猀愀戀氀攀开昀氀漀漀搀开瀀爀漀琀攀挀琀椀漀渀✀Ⰰ ㄀⤀Ⰰ ⼀⼀ 渀攀眀 椀渀 挀瀀最㄀⸀㈀⸀　渀甀欀攀ഀ਀        愀爀爀愀礀⠀✀䔀洀愀椀氀 猀椀琀攀 愀搀洀椀渀 甀瀀漀渀 挀漀洀洀攀渀琀 猀甀戀洀椀猀猀椀漀渀✀ Ⰰ ✀挀漀洀洀攀渀琀开攀洀愀椀氀开渀漀琀椀昀椀挀愀琀椀漀渀✀Ⰰ ㄀⤀Ⰰ ⼀⼀ 渀攀眀 椀渀 挀瀀最㄀⸀㈀⸀　渀甀欀攀ഀ਀        愀爀爀愀礀⠀✀䴀愀砀 氀攀渀最琀栀 昀漀爀 愀渀 椀洀愀最攀 搀攀猀挀爀椀瀀琀椀漀渀✀Ⰰ ✀洀愀砀开椀洀最开搀攀猀挀开氀攀渀最琀栀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䴀愀砀 渀甀洀戀攀爀 漀昀 挀栀愀爀愀挀琀攀爀猀 椀渀 愀 眀漀爀搀✀Ⰰ ✀洀愀砀开挀漀洀开眀氀攀渀最琀栀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䴀愀砀 渀甀洀戀攀爀 漀昀 氀椀渀攀猀 椀渀 愀 挀漀洀洀攀渀琀✀Ⰰ ✀洀愀砀开挀漀洀开氀椀渀攀猀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䴀愀砀椀洀甀洀 氀攀渀最琀栀 漀昀 愀 挀漀洀洀攀渀琀✀Ⰰ ✀洀愀砀开挀漀洀开猀椀稀攀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀匀栀漀眀 昀椀氀洀 猀琀爀椀瀀✀Ⰰ ✀搀椀猀瀀氀愀礀开昀椀氀洀开猀琀爀椀瀀✀Ⰰ ㄀⤀Ⰰഀ਀        愀爀爀愀礀⠀✀一甀洀戀攀爀 漀昀 椀琀攀洀猀 椀渀 昀椀氀洀 猀琀爀椀瀀✀Ⰰ ✀洀愀砀开昀椀氀洀开猀琀爀椀瀀开椀琀攀洀猀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䄀氀氀漀眀 瘀椀攀眀椀渀最 漀昀 昀甀氀氀 猀椀稀攀 瀀椀挀 戀礀 愀渀漀渀礀洀漀甀猀✀Ⰰ ✀愀氀氀漀眀开愀渀漀渀开昀甀氀氀猀椀稀攀✀Ⰰ ㄀⤀Ⰰ ⼀⼀ 渀攀眀 椀渀 挀瀀最㄀⸀㈀⸀　渀甀欀攀ഀ਀        愀爀爀愀礀⠀✀一甀洀戀攀爀 漀昀 搀愀礀猀 戀攀琀眀攀攀渀 戀攀椀渀最 愀戀氀攀 琀漀 瘀漀琀攀 漀渀 琀栀攀 猀愀洀攀 椀洀愀最攀✀Ⰰ✀欀攀攀瀀开瘀漀琀攀猀开琀椀洀攀✀Ⰰ　⤀Ⰰ ⼀⼀ 渀攀眀 椀渀 挀瀀最㄀⸀㈀⸀㈀挀 渀甀欀攀ഀ਀        ✀倀椀挀琀甀爀攀猀 愀渀搀 琀栀甀洀戀渀愀椀氀猀 猀攀琀琀椀渀最猀✀Ⰰഀ਀        愀爀爀愀礀⠀✀儀甀愀氀椀琀礀 昀漀爀 䨀倀䔀䜀 昀椀氀攀猀✀Ⰰ ✀樀瀀攀最开焀甀愀氀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䴀愀砀 搀椀洀攀渀猀椀漀渀 漀昀 愀 琀栀甀洀戀渀愀椀氀 㰀戀㸀⨀㰀⼀戀㸀✀Ⰰ ✀琀栀甀洀戀开眀椀搀琀栀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀唀猀攀 搀椀洀攀渀猀椀漀渀 ⠀ 眀椀搀琀栀 漀爀 栀攀椀最栀琀 漀爀 䴀愀砀 愀猀瀀攀挀琀 昀漀爀 琀栀甀洀戀渀愀椀氀 ⤀㰀戀㸀⨀㰀⼀戀㸀✀Ⰰ ✀琀栀甀洀戀开甀猀攀✀Ⰰ 㜀⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䌀爀攀愀琀攀 椀渀琀攀爀洀攀搀椀愀琀攀 瀀椀挀琀甀爀攀猀✀Ⰰ ✀洀愀欀攀开椀渀琀攀爀洀攀搀椀愀琀攀✀Ⰰ ㄀⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䴀愀砀 眀椀搀琀栀 漀爀 栀攀椀最栀琀 漀昀 愀渀 椀渀琀攀爀洀攀搀椀愀琀攀 瀀椀挀琀甀爀攀 㰀戀㸀⨀㰀⼀戀㸀✀Ⰰ ✀瀀椀挀琀甀爀攀开眀椀搀琀栀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䴀愀砀 猀椀稀攀 昀漀爀 甀瀀氀漀愀搀攀搀 瀀椀挀琀甀爀攀猀 ⠀䬀䈀⤀✀Ⰰ ✀洀愀砀开甀瀀氀开猀椀稀攀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䴀愀砀 眀椀搀琀栀 漀爀 栀攀椀最栀琀 昀漀爀 甀瀀氀漀愀搀攀搀 瀀椀挀琀甀爀攀猀 ⠀瀀椀砀攀氀猀⤀✀Ⰰ ✀洀愀砀开甀瀀氀开眀椀搀琀栀开栀攀椀最栀琀✀Ⰰ 　⤀Ⰰ ഀ਀        愀爀爀愀礀⠀✀䄀氀氀漀眀 洀甀氀琀椀瀀氀攀 䘀椀氀攀猀 琀漀 戀攀 甀瀀氀漀愀搀 眀椀琀栀 猀愀洀攀 昀椀氀攀 渀愀洀攀✀Ⰰ ✀猀愀洀攀渀愀洀攀✀Ⰰ ㄀⤀Ⰰ ഀ਀        ✀唀猀攀爀 猀攀琀琀椀渀最猀✀Ⰰഀ਀        愀爀爀愀礀⠀✀䄀氀氀漀眀 渀攀眀 甀猀攀爀 爀攀最椀猀琀爀愀琀椀漀渀猀✀Ⰰ ✀愀氀氀漀眀开甀猀攀爀开爀攀最椀猀琀爀愀琀椀漀渀✀Ⰰ ㄀⤀Ⰰഀ਀        愀爀爀愀礀⠀✀唀猀攀爀 爀攀最椀猀琀爀愀琀椀漀渀 爀攀焀甀椀爀攀猀 攀洀愀椀氀 瘀攀爀椀昀椀挀愀琀椀漀渀✀Ⰰ ✀爀攀最开爀攀焀甀椀爀攀猀开瘀愀氀椀搀开攀洀愀椀氀✀Ⰰ ㄀⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䄀氀氀漀眀 琀眀漀 甀猀攀爀猀 琀漀 栀愀瘀攀 琀栀攀 猀愀洀攀 攀洀愀椀氀 愀搀搀爀攀猀猀✀Ⰰ ✀愀氀氀漀眀开搀甀瀀氀椀挀愀琀攀开攀洀愀椀氀猀开愀搀搀爀✀Ⰰ ㄀⤀Ⰰഀ਀        愀爀爀愀礀⠀✀唀猀攀爀猀 挀愀渀 挀愀渀 栀愀瘀攀 瀀爀椀瘀愀琀攀 愀氀戀甀洀猀✀Ⰰ ✀愀氀氀漀眀开瀀爀椀瘀愀琀攀开愀氀戀甀洀猀✀Ⰰ ㄀⤀Ⰰഀ਀        愀爀爀愀礀⠀✀匀栀漀眀 唀猀攀爀猀 愀瘀愀琀愀爀 椀渀猀琀攀愀搀 漀昀 瀀爀椀瘀愀琀攀 愀氀戀甀洀 瀀椀挀琀甀爀攀✀Ⰰ ✀愀瘀愀琀愀爀开瀀爀椀瘀愀琀攀开愀氀戀甀洀✀Ⰰ ㄀⤀Ⰰഀ਀        ✀䌀甀猀琀漀洀 昀椀攀氀搀猀 昀漀爀 椀洀愀最攀 搀攀猀挀爀椀瀀琀椀漀渀 ⠀氀攀愀瘀攀 戀氀愀渀欀 椀昀 甀渀甀猀攀搀⤀✀Ⰰഀ਀        愀爀爀愀礀⠀✀䘀椀攀氀搀 ㄀ 渀愀洀攀✀Ⰰ ✀甀猀攀爀开昀椀攀氀搀㄀开渀愀洀攀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䘀椀攀氀搀 ㈀ 渀愀洀攀✀Ⰰ ✀甀猀攀爀开昀椀攀氀搀㈀开渀愀洀攀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䘀椀攀氀搀 ㌀ 渀愀洀攀✀Ⰰ ✀甀猀攀爀开昀椀攀氀搀㌀开渀愀洀攀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䘀椀攀氀搀 㐀 渀愀洀攀✀Ⰰ ✀甀猀攀爀开昀椀攀氀搀㐀开渀愀洀攀✀Ⰰ 　⤀Ⰰ ഀ਀        ✀倀椀挀琀甀爀攀猀 愀渀搀 琀栀甀洀戀渀愀椀氀猀 愀搀瘀愀渀挀攀搀 猀攀琀琀椀渀最猀✀Ⰰഀ਀        愀爀爀愀礀⠀✀匀栀漀眀 瀀爀椀瘀愀琀攀 愀氀戀甀洀 䤀挀漀渀 琀漀 甀渀氀漀最最攀搀 甀猀攀爀✀Ⰰ ✀猀栀漀眀开瀀爀椀瘀愀琀攀✀Ⰰ ㄀⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䌀栀愀爀愀挀琀攀爀猀 昀漀爀戀椀搀搀攀渀 椀渀 昀椀氀攀渀愀洀攀猀✀Ⰰ ✀昀漀爀戀椀搀攀渀开昀渀愀洀攀开挀栀愀爀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䄀挀挀攀瀀琀攀搀 昀椀氀攀 攀砀琀攀渀猀椀漀渀猀 昀漀爀 甀瀀氀漀愀搀攀搀 瀀椀挀琀甀爀攀猀✀Ⰰ ✀愀氀氀漀眀攀搀开昀椀氀攀开攀砀琀攀渀猀椀漀渀猀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䴀攀琀栀漀搀 昀漀爀 爀攀猀椀稀椀渀最 椀洀愀最攀猀✀Ⰰ ✀琀栀甀洀戀开洀攀琀栀漀搀✀Ⰰ ㈀⤀Ⰰഀ਀        愀爀爀愀礀⠀✀倀愀琀栀 琀漀 䤀洀愀最攀䴀愀最椀挀欀 ⼀ 渀攀琀瀀戀洀 尀✀挀漀渀瘀攀爀琀尀✀ 甀琀椀氀椀琀礀 ⠀攀砀愀洀瀀氀攀 ⼀甀猀爀⼀戀椀渀⼀堀㄀㄀⼀⤀✀Ⰰ ✀椀洀瀀愀琀栀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䄀氀氀漀眀攀搀 椀洀愀最攀 琀礀瀀攀猀 ⠀漀渀氀礀 瘀愀氀椀搀 昀漀爀 䤀洀愀最攀䴀愀最椀挀欀⤀✀Ⰰ ✀愀氀氀漀眀攀搀开椀洀最开琀礀瀀攀猀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䌀漀洀洀愀渀搀 氀椀渀攀 漀瀀琀椀漀渀猀 昀漀爀 䤀洀愀最攀䴀愀最椀挀欀✀Ⰰ ✀椀洀开漀瀀琀椀漀渀猀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀刀攀愀搀 䔀堀䤀䘀 搀愀琀愀 椀渀 䨀倀䔀䜀 昀椀氀攀猀✀Ⰰ ✀爀攀愀搀开攀砀椀昀开搀愀琀愀✀Ⰰ ㄀⤀Ⰰഀ਀        愀爀爀愀礀⠀✀刀攀愀搀 䤀倀吀䌀 搀愀琀愀 椀渀 䨀倀䔀䜀 昀椀氀攀猀✀Ⰰ ✀爀攀愀搀开椀瀀琀挀开搀愀琀愀✀Ⰰ ㄀⤀Ⰰ ⼀⼀ 渀攀眀 椀渀 挀瀀最㄀⸀㈀⸀　渀甀欀攀ഀ਀        愀爀爀愀礀⠀✀吀栀攀 愀氀戀甀洀 搀椀爀攀挀琀漀爀礀 㰀戀㸀⨀㰀⼀戀㸀✀Ⰰ ✀昀甀氀氀瀀愀琀栀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀吀栀攀 搀椀爀攀挀琀漀爀礀 昀漀爀 甀猀攀爀 瀀椀挀琀甀爀攀猀 㰀戀㸀⨀㰀⼀戀㸀✀Ⰰ ✀甀猀攀爀瀀椀挀猀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀吀栀攀 瀀爀攀昀椀砀 昀漀爀 椀渀琀攀爀洀攀搀椀愀琀攀 瀀椀挀琀甀爀攀猀 㰀戀㸀⨀㰀⼀戀㸀✀Ⰰ ✀渀漀爀洀愀氀开瀀昀砀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀吀栀攀 瀀爀攀昀椀砀 昀漀爀 琀栀甀洀戀渀愀椀氀猀 㰀戀㸀⨀㰀⼀戀㸀✀Ⰰ ✀琀栀甀洀戀开瀀昀砀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䐀攀昀愀甀氀琀 洀漀搀攀 昀漀爀 搀椀爀攀挀琀漀爀椀攀猀✀Ⰰ ✀搀攀昀愀甀氀琀开搀椀爀开洀漀搀攀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䐀攀昀愀甀氀琀 洀漀搀攀 昀漀爀 瀀椀挀琀甀爀攀猀✀Ⰰ ✀搀攀昀愀甀氀琀开昀椀氀攀开洀漀搀攀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀倀椀挀椀渀昀漀 搀椀猀瀀氀愀礀 昀椀氀攀渀愀洀攀✀Ⰰ ✀瀀椀挀椀渀昀漀开搀椀猀瀀氀愀礀开昀椀氀攀渀愀洀攀✀Ⰰ ✀㄀✀⤀Ⰰ ⼀⼀ 渀攀眀 椀渀 挀瀀最㄀⸀㈀⸀　渀甀欀攀ഀ਀        愀爀爀愀礀⠀✀倀椀挀椀渀昀漀 搀椀猀瀀氀愀礀 愀氀戀甀洀 渀愀洀攀✀Ⰰ ✀瀀椀挀椀渀昀漀开搀椀猀瀀氀愀礀开愀氀戀甀洀开渀愀洀攀✀Ⰰ ✀㄀✀⤀Ⰰ ⼀⼀ 渀攀眀 椀渀 挀瀀最㄀⸀㈀⸀　渀甀欀攀ഀ਀        愀爀爀愀礀⠀✀倀椀挀椀渀昀漀 搀椀猀瀀氀愀礀开昀椀氀攀开猀椀稀攀✀Ⰰ ✀瀀椀挀椀渀昀漀开搀椀猀瀀氀愀礀开昀椀氀攀开猀椀稀攀✀Ⰰ ✀㄀✀⤀Ⰰ ⼀⼀ 渀攀眀 椀渀 挀瀀最㄀⸀㈀⸀　渀甀欀攀ഀ਀        愀爀爀愀礀⠀✀倀椀挀椀渀昀漀 搀椀猀瀀氀愀礀开搀椀洀攀渀猀椀漀渀猀✀Ⰰ ✀瀀椀挀椀渀昀漀开搀椀猀瀀氀愀礀开搀椀洀攀渀猀椀漀渀猀✀Ⰰ ✀㄀✀⤀Ⰰ ⼀⼀ 渀攀眀 椀渀 挀瀀最㄀⸀㈀⸀　渀甀欀攀ഀ਀        愀爀爀愀礀⠀✀倀椀挀椀渀昀漀 搀椀猀瀀氀愀礀开挀漀甀渀琀开搀椀猀瀀氀愀礀攀搀✀Ⰰ ✀瀀椀挀椀渀昀漀开搀椀猀瀀氀愀礀开挀漀甀渀琀开搀椀猀瀀氀愀礀攀搀✀Ⰰ ✀㄀✀⤀Ⰰ ⼀⼀ 渀攀眀 椀渀 挀瀀最㄀⸀㈀⸀　渀甀欀攀ഀ਀        愀爀爀愀礀⠀✀倀椀挀椀渀昀漀 搀椀猀瀀氀愀礀开唀刀䰀✀Ⰰ ✀瀀椀挀椀渀昀漀开搀椀猀瀀氀愀礀开唀刀䰀✀Ⰰ ✀㄀✀⤀Ⰰ ⼀⼀ 渀攀眀 椀渀 挀瀀最㄀⸀㈀⸀　渀甀欀攀ഀ਀        愀爀爀愀礀⠀✀倀椀挀椀渀昀漀 搀椀猀瀀氀愀礀 唀刀䰀 愀猀 戀漀漀欀洀愀爀欀 氀椀渀欀✀Ⰰ ✀瀀椀挀椀渀昀漀开搀椀猀瀀氀愀礀开唀刀䰀开戀漀漀欀洀愀爀欀✀Ⰰ ✀㄀✀⤀Ⰰ ⼀⼀ 渀攀眀 椀渀 挀瀀最㄀⸀㈀⸀　渀甀欀攀ഀ਀        愀爀爀愀礀⠀✀倀椀挀椀渀昀漀 搀椀猀瀀氀愀礀 昀愀瘀 愀氀戀甀洀 氀椀渀欀✀Ⰰ ✀瀀椀挀椀渀昀漀开搀椀猀瀀氀愀礀开昀愀瘀漀爀椀琀攀猀✀Ⰰ ✀㄀✀⤀Ⰰ ⼀⼀ 渀攀眀 椀渀 挀瀀最㄀⸀㈀⸀　渀甀欀攀ഀ਀        ✀䌀漀漀欀椀攀猀 ☀愀洀瀀㬀 䌀栀愀爀猀攀琀 猀攀琀琀椀渀最猀✀Ⰰഀ਀        愀爀爀愀礀⠀✀一愀洀攀 漀昀 琀栀攀 挀漀漀欀椀攀 甀猀攀搀 戀礀 琀栀攀 猀挀爀椀瀀琀✀Ⰰ ✀挀漀漀欀椀攀开渀愀洀攀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀倀愀琀栀 漀昀 琀栀攀 挀漀漀欀椀攀 甀猀攀搀 戀礀 琀栀攀 猀挀爀椀瀀琀✀Ⰰ ✀挀漀漀欀椀攀开瀀愀琀栀✀Ⰰ 　⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䌀栀愀爀愀挀琀攀爀 攀渀挀漀搀椀渀最✀Ⰰ ✀挀栀愀爀猀攀琀✀Ⰰ 㐀⤀Ⰰ ഀ਀        ✀䴀椀猀挀攀氀氀愀渀攀漀甀猀 猀攀琀琀椀渀最猀✀Ⰰഀ਀        愀爀爀愀礀⠀✀䔀渀愀戀氀攀 搀攀戀甀最 洀漀搀攀✀Ⰰ ✀搀攀戀甀最开洀漀搀攀✀Ⰰ ㄀⤀Ⰰഀ਀        愀爀爀愀礀⠀✀䔀渀愀戀氀攀 愀搀瘀愀渀挀攀搀 搀攀戀甀最 洀漀搀攀✀Ⰰ ✀愀搀瘀愀渀挀攀搀开搀攀戀甀最开洀漀搀攀✀Ⰰ ㄀⤀Ⰰ ⼀⼀ 渀攀眀 椀渀 挀瀀最㄀⸀㈀⸀　渀甀欀攀ഀ਀愀爀爀愀礀⠀✀匀栀漀眀 䌀漀瀀瀀攀爀洀椀渀攀 唀瀀搀愀琀攀 䄀氀攀爀琀 琀漀 䄀搀洀椀渀✀Ⰰ ✀猀栀漀眀甀瀀搀愀琀攀✀Ⰰ ㄀⤀Ⰰ ⼀⼀ 渀攀眀 ㄀⸀㈀⸀㈀ഀ਀ഀ਀        ✀㰀戀爀 ⼀㸀㰀搀椀瘀 愀氀椀最渀㴀∀挀攀渀琀攀爀∀㸀⠀⨀⤀ 䘀椀攀氀搀猀 洀愀爀欀攀搀 眀椀琀栀 ⨀ 洀甀猀琀 渀漀琀 戀攀 挀栀愀渀最攀搀 椀昀 礀漀甀 愀氀爀攀愀搀礀 栀愀瘀攀 瀀椀挀琀甀爀攀猀 椀渀 礀漀甀爀 最愀氀氀攀爀礀㰀⼀搀椀瘀㸀㰀戀爀 ⼀㸀✀ഀ਀        ⤀㬀ഀ਀⼀⼀ 攀渀搀 氀攀昀琀 猀椀搀攀 椀渀琀攀爀瀀爀攀琀愀琀椀漀渀ഀ਀㼀㸀  开