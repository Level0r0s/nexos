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
/*   $Id: lang-greek-utf-8.php,v 1.1 2004/07/31 19:48:41 akamu Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Greek');
define('LANG_NAME_NATIVE', '&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940;');
define('LANG_COUNTRY_CODE', 'GR');
define('TRANS_NAME', 'lykman');
define('TRANS_EMAIL', 'lykman@freemail.gr');
define('TRANS_WEBSITE', 'http://www.lykman.com');
define('TRANS_DATE', '03-10-2003');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'UTF-8');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'Íáé');
define('NO', 'Ï÷é');

// some common strings
define('BACK', 'ÐÉÓÙ');
define('CONTINUE', 'ÓÕÍÅ×ÅÉÁ');
define('INFO', 'Ðëçñïöïñßåò');
define('ERROR', 'ËÜèïò');

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
$lang_day_of_week = array('Êõñ','Äåõ','Tñé','Ôåô','Ðåì','Ðáñ','Óáâ',);
// Day of the month
$lang_month = array('Éáí','Öåâ','Máñ','Aðñ','Máé','Éïõí','Éïõë','Aõã','Óåð','Ïêô','Noå','Äåê',);
// For the word censor
$lang_bad_words = array('*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*',);
// lang_meta_album_names
define('RANDOM', 'Ôõ÷áßåò öùôïãñáößåò');
define('LASTUP', 'Ôåëåõôáßåò ðñïóèÞêåò');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Ðñüóöáôá åíçìåñùìÝíá Üëìðïõì');
define('LASTCOM', 'Ôåëåõôáßá ó÷üëéá');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Ðåñéóóüôåñåò åìöáíßóåéò');
define('TOPRATED', 'Õøçëüôåñç âáèìïëïãßá');
define('LASTHITS', 'Ôåëåõôáßåò åìöáíßóåéò');
define('SEARCH', 'ÁðïôåëÝóìáôá áíáæÞôçóçò');
define('FAVPICS', 'ÁãáðçìÝíåò öùôïãñáößåò');

// lang_errors
define('ACCESS_DENIED', 'Äåí åðéôñÝðåôå ç ðñüóâáóç óå áõôÞí ôçí óåëßäá.');
define('PERM_DENIED', 'Äåí åðéôñÝðåôå íá åêôåëÝóåôå áõôÞí ôçí ëåéôïõñãßá.');
define('PARAM_MISSING', 'Åëåéðåßò ðáñÜìåôñïé ãéá ôçí åêôÝëåóç.');
define('NON_EXIST_AP', 'Ôï åðéëåãìÝíï Üëìðïõì/öùôïãñáößá äåí õðÜñ÷åé!');
define('QUOTA_EXCEEDED', 'Ï ÷þñïò óáò ãÝìéóå<br /><br />Óáò áíáëïãåß ÷þñïò [quota]K, ïé öùôïãñáößåò óáò áõôÞ ôçí óôéãìÞ ÷ñçóéìïðïéïýí [space]K, ðñïóèÝôïíôáò áõôÞí ôçí öùôïãñáößá èá õðåñâåßôå ôï üñéï.');
define('GD_FILE_TYPE_ERR', '×ñçóéìïðïéþíôáò ôï GD image library, åðéôñåðüìåíá öïñìÜ åßíáé ìüíï ôá JPEG êáé PNG.');
define('INVALID_IMAGE', 'Ç öùôïãñáößá ðïõ áíåâÜóáôå åßíáé ðñïâëçìáôéêÞ Þ åëåéðÞò.');
define('RESIZE_FAILED', 'Äåí Þôáí äõíáôüí íá äçìéïõñãçèåß thumbnail Þ åéêüíá ìåéùìÝíïõ ìåãÝèïõò.');
define('NO_IMG_TO_DISPLAY', 'Êáììßá åéêüíá ðñïò åìöÜíéóç');
define('NON_EXIST_CAT', 'Ç åðéëåãìÝíç êáôçãïñßá äåí õðÜñ÷åé');
define('ORPHAN_CAT', 'Ç êáôçãïñßá äåí Ý÷åé äçìéïõñãü, åêôåëåß ôïí category manager ãéá íá äéïñèþóåé ôï ðñüâëçìá.');
define('DIRECTORY_RO', 'Ï êáôÜëïãïò \'%s\' äåí åßíáé äéáèÝóéìïò ãéá ôñïðïðïßçóç, ïé öùôïãñáößåò äåí ìðïñïýí íá äéáãñáöïýí');
define('NON_EXIST_COMMENT', 'Ôï åðéëåãìÝíï ó÷üëéï äåí õðÜñ÷åé.');
define('PIC_IN_INVALID_ALBUM', 'Ç öùôïãñáößá åßíáé óå áíýðáñêôï Üëìðïõì (%s)!?');
define('BANNED', 'Å÷åôå áðïêëåéóôåß áðü áõôü ôï site.');
define('NOT_WITH_UDB', 'ÁõôÞ ç ëåéôïõñãßá åßíáé áðåíåñãïðïéçìÝíç óôï Coppermine ãéáôß åßíáé áëëçëåðéäñáóôéêÞ ìå ôï software ôïõ öüñïõì. Ç áõôü ðïõ ðñïóðáèåßôå íá êÜíåôå äåí õðïóôçñßæåôáé óôçí ðáñïýóá äéáìüñöùóç, Þ ôçí ëåéôïõñãßá èá ðñÝðåé íá ôçí ÷åéñßæåôáé ôï ßäéï ôï öüñïõì.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', 'Ìåôáêßíçóç óôçí ëßóôá ôùí Üëìðïõì');
define('ALB_LIST_LNK', 'Ëßóôá ôùí Üëìðïõì');
define('MY_GAL_TITLE', 'Ìåôáêßíçóç óôo ðñïóùðéêü öþôï Üëìðïõì');
define('MY_GAL_LNK', 'Ôï öþôï Üëìðïõì ìïõ');
define('MY_PROF_LNK', 'Ôï ðñïößë ìïõ');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Ëåéôïõñãßåò äéá÷åßñçóçò');
define('ADM_MODE_LNK', 'ÊáôÜóôáóç äéá÷åßñçóçò');
define('USR_MODE_TITLE', 'Ëåéôïõñãßåò ÷ñÞóôç');
define('USR_MODE_LNK', 'ÊáôÜóôáóç ÷ñÞóôç');
define('UPLOAD_PIC_TITLE', 'ÐñïóèÞêç öùôïãñáößáò óå Üëìðïõì');
define('UPLOAD_PIC_LNK', 'ÐñïóèÞêç öùôïãñáößáò');
define('REGISTER_TITLE', 'Äçìéïõñãßá ëïãáñéáóìïý');
define('REGISTER_LNK', 'ÅããñáöÞ');
define('LOGIN_LNK', 'Åßóïäïò');
define('LOGOUT_LNK', 'Åîïäïò');
define('LASTUP_LNK', 'Ôåëåõôáßåò ðñïóèÞêåò');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Ôåëåõôáßá ó÷üëéá');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Ðåñéóóüôåñåò åìöáíßóåéò');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Õøçëüôåñç âáèìïëïãßá');
define('SEARCH_LNK', 'ÁíáæÞôçóç');
define('FAV_LNK', 'Ôá áãáðçìÝíá ìïõ');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Åãêñéóç ðñïóèÞêçò');
define('CONFIG_LNK', 'Ñõèìßóåéò');
define('ALBUMS_LNK', 'Áëìðïõì');
define('CATEGORIES_LNK', 'Êáôçãïñßåò');
define('USERS_LNK', '×ñÞóôåò');
define('GROUPS_LNK', 'ÏìÜäåò');
define('COMMENTS_LNK', 'Ó÷üëéá');
define('SEARCHNEW_LNK', 'ÐñïóèÞêç ðëÞèïõò öùôïãñáöéþí');
define('UTIL_LNK', 'ÁëëáãÞ ìåãÝèïõò öùôïãñáöéþí');
define('BAN_LNK', 'Áðïêëåéóìüò ÷ñçóôþí');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Äçìéïõñãßá / ôáîéíüìçóç Üëìðïõì');
define('MODIFYALB_LNK', 'Ôñïðïðïßçóç ôùí Üëìðïõì');
define('MY_PROF_LNK', 'Ôï ðñïößë ìïõ');

// lang_cat_list
define('CATEGORY', 'Êáôçãïñßá');
define('ALBUMS', 'Aëìðïõì');
define('PICTURES', 'Öùôïãñáößåò');

// lang_album_list
define('ALBUM_ON_PAGE', '%d Üëìðïõì óå %d óåëßäá(åò)');

// lang_thumb_view
define('DATE', 'ÇÌ/ÍÉÁ');
define('NAME', 'ÏÍÏÌÁ ÁÑ×ÅÉÏÕ');
define('TITLE', 'ÔÉÔËÏÓ');
define('SORT_DA', 'Óôïß÷éóç áðü ðáëáéüôåñç ðñïò íåüôåñç çìåñïìçíßá');
define('SORT_DD', 'Óôïß÷éóç áðü íåüôåñç ðñïò ðáëáéüôåñç çìåñïìçíßá');
define('SORT_NA', 'Óôïß÷éóç áëöáâçôéêÜ áýîïõóá');
define('SORT_ND', 'Óôïß÷éóç áëöáâçôéêÜ öèßíïõóá');
define('SORT_TA', 'Óôïß÷éóç ìå ôßôëï áýîïõóá');
define('SORT_TD', 'Óôïß÷éóç ìå ôßôëï öèßíïõóá');
define('PIC_ON_PAGE', '%d öùôïãñáößá(åò) óå %d óåëßäá(åò)');
define('USER_ON_PAGE', '%d ÷ñÞóôçò(åò) óå %d óåëßäá(åò)');
define('SORT_RA', 'Sort by rating ascending');
define('SORT_RD', 'Sort by rating descending');
define('RATING', 'RATING');
define('SORT_TITLE', 'Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE', 'ÅðéóôñïöÞ óôçí óåëßäá ìå ôá thumbnail');
define('PIC_INFO_TITLE', 'ÅìöÜíéóç/áðüêñõøç ðëçñïöïñéþí öùôïãñáößáò');
define('SLIDESHOW_TITLE', 'Slideshow');
define('SLIDESHOW_DISABLED', 'e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'ÁðïóôïëÞ áõôÞò ôçò åéêüíáò óáí çëåêôñïíéêÞ êÜñôá');
define('ECARD_DISABLED', 'Ïé çëåêôñïíéêÝò êÜñôåò Ý÷ïõí áðåíåñãïðïéçèåß');
define('ECARD_DISABLED_MSG', 'Äåí óáò åðéôñÝðåôå íá óôåßëåôå çëåêôñïíéêÝò êÜñôåò');
define('PREV_TITLE', 'ÅìöÜíéóç ðñïçãïýìåíçò öùôïãñáößáò');
define('NEXT_TITLE', 'ÅìöÜíéóç åðüìåíçò öùôïãñáößáò');
define('PIC_POS', 'ÖÙÔÏÃÑÁÖÉÁ %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', 'ÂáèìïëïãÞóôå áõôÞí ôçí öùôïãñáößá ');
define('NO_VOTES', '(×ùñßò øÞöï áêüìá)');
define('RATING', '(ôùñéíÞ âáèìïëïãßá : %s / 5 ìå %s øÞöïõò)');
define('RUBBISH', '×Üëéá');
define('POOR', 'ÊáêÞ');
define('FAIR', 'ÌÝôñéá');
define('GOOD', 'ÊáëÞ');
define('EXCELLENT', 'Áøïãç');
define('GREAT', 'ÊáôáðëçêôéêÞ');

// lang_cpg_die
define('INFORMATION', 'Ðëçñïöïñßåò');
define('ERROR', 'ËÜèïò');
define('CRITICAL_ERROR', 'Critical error');
define('FILE', 'Áñ÷åßï: ');
define('LINE', 'ÃñáììÞ: ');

// lang_display_thumbnails
define('FILENAME', 'Ïíïìá áñ÷åßïõ : ');
define('FILESIZE', 'ÌÝãåèïò áñ÷åßïõ : ');
define('DIMENSIONS', 'ÄéáóôÜóåéò : ');
define('DATE_ADDED', 'Çìåñïìçíßá ðñïóèÞêçò : ');

// lang_get_pic_data
define('N_COMMENTS', '%s ó÷üëéá');
define('N_VIEWS', '%s åìöáíßóåéò');
define('N_VOTES', '(%s øÞöïé)');

// lang_admin_php
define('LV_ADMIN', 'Åãêáôáëåßðïíôáò ôéò ëåéôïõñãßåò äéá÷åßñçóçò...');
define('ENT_ADMIN', 'Åéóïäïò óôéò ëåéôïõñãßåò äéá÷åßñçóçò...');

// lang_albmgr_php
define('ALB_NEED_NAME', 'Ôá Üëìðïõì ðñÝðåé íá Ý÷ïõí üíïìá !');
define('CONFIRM_MODIFS', 'Åéóôå óßãïõñïò ðùò èÝëåôå íá êÜíåôå áõôÝò ôéò áëëáãÝò ?');
define('NO_CHANGE', 'Äåí êÜíáôå êáìßá áëëáãÞ !');
define('NEW_ALBUM', 'NÝï Üëìðïõì');
define('CONFIRM_DELETE1', 'Åéóôå óßãïõñïò ðùò èÝëåôå íá äéáãñÜøåôå áõôü ôï Üëìðïõì ?');
define('CONFIRM_DELETE2', '\\nÏëåò ïé öùôïãñáößåò êáé ôá ó÷üëéá ðïõ ðåñéÝ÷ïíôáé èá ÷áèïýí !');
define('SELECT_FIRST', 'ÅðéëÝîôå Ýíá áëìðïõì ðñþôá');
define('ALB_MRG', 'Äéá÷åßñçóç Aëìðïõì');
define('MY_GALLERY', '* Ôï öþôï Üëìðïõì ìïõ *');
define('NO_CATEGORY', '* ×ùñßò êáôçãïñßá *');
define('DELETE', 'ÄéáãñáöÞ');
define('NEW', 'NÝï');
define('APPLY_MODIFS', 'ÅöáñìïãÞ áëëáãþí');
define('SELECT_CATEGORY', 'Select category');

// lang_catmgr_php
define('MISS_PARAM', 'Ïé ðáñÜìåôñïé ðïõ áðáéôïýíôáé ãéá \'%s\'ëåéôïõñãßá äåí äüèçêáí !');
define('UNKNOWN_CAT', 'Ç åðéëåãìÝíç êáôçãïñßá äåí õðÜñ÷åé óôçí database');
define('USERGAL_CAT_RO', 'Ôá öþôï Üëìðïõì ôùí ÷ñçóôþí äåí ìðïñïýí íá äéáãñáöïýí !');
define('MANAGE_CAT', 'Äéá÷åßñçóç êáôçãïñéþí');
define('CONFIRM_DELETE', 'Åßóôå óßãïõñïò ðùò èÝëåôå íá äéáãñÜøåôå áõôÞí ôçí êáôçãïñßá');
define('CATEGORY', 'Êáôçãïñßá');
define('OPERATIONS', 'Ëåéôïõñãßåò');
define('MOVE_INTO', 'Måôáêßíçóç óå');
define('UPDATE_CREATE', 'ÁíáíÝùóç/Äçìéïõñãßá êáôçãïñßáò');
define('PARENT_CAT', 'Äçìéïõñãüò êáôçãïñßáò');
define('CAT_TITLE', 'Ôßôëïò êáôçãïñßáò');
define('CAT_DESC', 'ÐåñéãñáöÞ êáôçãïñßáò');

// lang_config_php
define('TITLE', 'Ñõèìßóåéò');
define('RESTORE_CFG', 'ÅðáíáöïñÜ áñ÷éêþí ñõèìßóåùí');
define('SAVE_CFG', 'ÁðïèÞêåõóç íÝùí ñõèìßóåùí');
define('NOTES', 'Óçìåéþóåéò');
define('INFO', 'Ðëçñïöïñßåò');
define('UPD_SUCCESS', 'Ïé ñõèìßóåéò ôïõ Coppermine áíáíåþèçêáí');
define('RESTORE_SUCCESS', 'Ïé ðñïåãêáôåóôçìÝíåò ñõèìßóåéò ôïõ Coppermine åðáíáöÝñèçêáí');
define('NAME_A', 'Áõîùí üíïìá');
define('NAME_D', 'Öèßíùí üíïìá');
define('TITLE_A', 'Áýîùí ôßôëïò');
define('TITLE_D', 'Öèßíùí ôßôëïò');
define('DATE_A', 'Áõîïõóá çìåñïìçíßá');
define('DATE_D', 'Öèßíïõóá çìåñïìçíßá');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Height');
define('TH_WD', 'Width');

// lang_config_data
define('CONFIG_GENSET', 'ÃåíéêÝò åðéëïãÝò');
define('GALLERY_NAME', 'Ïíïìá ãêÜëåñé');
define('GALLERY_DESCRIPTION', 'ÐåñéãñáöÞ öþôï Üëìðïõì');
define('GALLERY_ADMIN_EMAIL', 'Å-mail äéá÷åéñéóôÞ ôïõ öþôï Üëìðïõì');
define('ECARDS_MORE_PIC_TARGET', 'Äéåýèõíóç ðáñáëÞðôç ãéá \'Äåßôå ðåñéóóüôåñåò öùôïãñáößåò\' äéáóýíäåóç óôéò çëåêôñïíéêÝò êÜñôåò');
define('LANG', 'Ãëþóóá');
define('CPGTHEME', 'ÈÝìá');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'ÅìöÜíéóç Ëßóôáò Áëìðïõì');
define('MAIN_TABLE_WIDTH', 'ÐëÜôïò êõñßùò ðßíáêá (ðßîåë Þ %)');
define('SUBCAT_LEVEL', 'ÐëÞèïò õðïêáôçãïñéþí ðñïò åìöÜíéóç');
define('ALBUMS_PER_PAGE', 'ÐëÞèïò Üëìðïõì ðñïò åìöÜíéóç');
define('ALBUM_LIST_COLS', 'ÐëÞèïò óôçëþí ãéá ôçí ëßóôá ôùí Üëìðïõì');
define('ALB_LIST_THUMB_SIZE', 'ÌÝãåèïò ôùí thumbnails óå ðßîåë');
define('MAIN_PAGE_LAYOUT', 'Ðåñéå÷üìåíï ôçò êåíôñéêÞò óåëßäáò');
define('FIRST_LEVEL', 'ÅìöÜíéóç ðñþôïõ åðéðÝäïõ thumbnails ôïõ Üëìðïõì óôéò êáôçãïñßåò');
define('THUMB_VIEW_TITLE', 'ÅìöÜíéóç Thumbnail');
define('THUMBCOLS', 'ÐëÞèïò óôçëþí óôçí óåëßäá ôùí thumbnail');
define('THUMBROWS', 'ÐëÞèïò ãñáììþí óôçí óåëßäá ôùí thumbnail');
define('MAX_TABS', 'ÌÝãéóôï ðëÞèïò tabs ãéá åìöÜíéóç');
define('CAPTION_IN_THUMBVIEW', 'ÅìöÜíéóç åíóùìáôùìÝíïõ ó÷üëéïõ (åðéðñüóèåôá ôïõ ôßôëïõ) êÜôù áðü ôï thumbnail');
define('DISPLAY_COMMENT_COUNT', 'ÅìöÜíéóç ðëÞèïõò ó÷üëéùí êÜôù áðü ôï thumbnail');
define('DEFAULT_SORT_ORDER', 'ÐñïåðéëïãÞ ñýèìéóçò óôïß÷çóçò ãéá ôéò öùôïãñáößåò');
define('MIN_VOTES_FOR_RATING', 'ÅëÜ÷éóôï ðëÞèïò øÞöùí ãéá ìéá öùôïãñáößá ãéá íá åìöáíéóôåß áõôÞ óôçí ëßóôá ìå ôçí \'top-rated\' .');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'ÅìöÜíéóç åéêüíùí &amp; Ñõèìßóåéò ó÷üëéùí');
define('PICTURE_TABLE_WIDTH', 'ÐëÜôïò ðßíáêá ãéá åìöÜíéóç öùôïãñáöéþí (ðßîåë Þ %)');
define('DISPLAY_PIC_INFO', 'Íá åìöáíßæïíôáé ïé ðëçñïöïñßåò ôùí öùôïãñáöéþí ðÜíôá?');
define('FILTER_BAD_WORDS', 'ÖéëôñÜñéóìá áðáãïñåõìÝíùí ëÝîåùí óôá ó÷üëéá');
define('ENABLE_SMILIES', 'Íá åðéôñáðïýí ïé öáôóïýëåò óôá ó÷üëéá');
define('DISABLE_FLOOD_PROTECTION', 'Allow several consecutive comments on one pic from the same user');
define('COMMENT_EMAIL_NOTIFICATION', 'Email site admin upon comment submission');
define('MAX_IMG_DESC_LENGTH', 'MÝãéóôï ìÞêïò ãéá ôçí ðåñéãñáöÞ ìéáò öùôïãñáößáò');
define('MAX_COM_WLENGTH', 'MÝãéóôï ðëÞèïò ÷áñáêôÞñùí áíÜ ëÝîç');
define('MAX_COM_LINES', 'MÝãéóôïò áñéèìüò ãñáììþí áíÜ ó÷üëéï');
define('MAX_COM_SIZE', 'MÝãéóôï ìÞêïò ó÷ïëßïõ');
define('DISPLAY_FILM_STRIP', 'ÅìöÜíéóç film strip');
define('MAX_FILM_STRIP_ITEMS', 'Áñéèìüò áíôéêåéìÝíùí ìÝóá óôï film strip');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', 'Põèìßóåéò öùôïãñáöéþí êáé thumbnails');
define('JPEG_QUAL', 'Ðïéüôçôá ôùí JPEG áñ÷åßùí');
define('THUMB_WIDTH', 'ÌÝãéóôç äéÜóôáóç ôïõ thumbnail <b>*</b>');
define('THUMB_USE', '×ñÞóç äéÜóôáóçò ( ðëÜôïò Þ ýøïò Þ ÌÝãéóôç áíáëïãßá ãéá ôï thumbnail )<b>*</b>');
define('MAKE_INTERMEDIATE', 'Äçìéïõñãßá åíäéÜìåóùí öùôïãñáöéþí');
define('PICTURE_WIDTH', 'MÝãéóôï ðëÜôïò Þ ýøïò åíäéÜìåóçò öùôïãñáößáò <b>*</b>');
define('MAX_UPL_SIZE', 'MÝãéóôï ìÝãåèïò ãéá ôéò öùôïãñáößåò ãéá ðñïóèÞêç (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'MÝãéóôï ðëÜôïò Þ ýøïò ãéá ôéò öùôïãñáößåò ãéá ðñïóèÞêç (ðßîåë)');
define('USER_SETTING_TITLE', 'Ñõèìßóåéò ÷ñçóôþí');
define('ALLOW_USER_REGISTRATION', 'ÅðéôñÝðåôå ç åããñáöÞ íÝïõ ÷ñÞóôç');
define('REG_REQUIRES_VALID_EMAIL', 'Ç åããñáöÞ íÝïõ ÷ñÞóôç íá áðáéôåß åðáëÞèåõóç email');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'ÅðéôñÝðåôå äýï ÷ñÞóôåò íá Ý÷ïõí êïéíÞ äéåýèõíóç email');
define('ALLOW_PRIVATE_ALBUMS', 'Ïé ÷ñÞóôåò ìðïñïýí íá Ý÷ïõí ðñïóùðéêÜ Üëìðïõì');
define('CUSTOM_FIELDS_TITLE', 'Custom ðåäßá ãéá ðåñéãñáöÞ ôùí öùôïãñáöéþí (áöÞóôå êåíü åáí äåí èá ôï ÷ñçóéìïðïéÞóåôå)');
define('USER_FIELD1_NAME', 'Ïíïìá 1ïõ ðåäßïõ');
define('USER_FIELD2_NAME', 'Ïíïìá 2ïõ ðåäßïõ');
define('USER_FIELD3_NAME', 'Ïíïìá 3ïõ ðåäßïõ');
define('USER_FIELD4_NAME', 'Ïíïìá 4ïõ ðåäßïõ');
define('PIC_ADV_SETTING_TITLE', 'ÅîéäåéêåõìÝíåò ñõèìßóåéò öùôïãñáöéþí êáé thumbnails');
define('SHOW_PRIVATE', 'ÅìöÜíéóç åéêïíéäßïõ éäéùôéêïý Üëìïõì óôïí åðéóêÝðôç');
define('FORBIDEN_FNAME_CHAR', 'ÁðáãïñåõìÝíïé ÷áñáêôÞñåò óå üíïìá áñ÷åßïõ');
define('ALLOWED_FILE_EXTENSIONS', 'ÄåêôÝò åðåêôÜóåéò áñ÷åßùí ãéá ôéò ðñïóôéèÝìåíåò öùôïãñáößåò');
define('THUMB_METHOD', 'MÝèïäïò ãéá áëëáãÞ ìåãÝèïõò öùôïãñáößáò');
define('IMPATH', 'ÄéáäñïìÞ ãéá ôçí åöáñìïãÞ ImageMagick/netpbm \'convert\' (ðáñÜäåéãìá /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Äåêôïß ôýðïé áñ÷åßùí (ìüíï ãéá ôï ImageMagick)');
define('IM_OPTIONS', 'ÅðéëïãÝò åíôïëþí ãñáììÞò ãéá ôï ImageMagick');
define('READ_EXIF_DATA', 'ÁíÜãíùóç ðëçñïöïñéþí EXIF óôá JPEG áñ÷åßá');
define('FULLPATH', 'ÊáôÜëïãïò Üëìðïõì <b>*</b>');
define('USERPICS', 'Ï êáôÜëïãïò ãéá ôéò öùôïãñáößåò ôùí ÷ñçóôþí <b>*</b>');
define('NORMAL_PFX', 'Ðñüèåìá ôùí åíäéÜìåóùí öùôïãñáöéþí <b>*</b>');
define('THUMB_PFX', 'Ðñüèåìá ôùí thumbnails <b>*</b>');
define('DEFAULT_DIR_MODE', 'ÐñïåãêáôáóôçìÝíåò ñõèìßóåéò ãéá êáôáëüãïõò');
define('DEFAULT_FILE_MODE', 'ÐñïåãêáôáóôçìÝíåò ñõèìßóåéò ãéá öùôïãñáößåò');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', 'Ñõèìßóåéò ãéá ôá Cookies &amp; êáé ôéò êùäéêïðïéÞóåéò ÷áñáêôÞñùí');
define('COOKIE_NAME', 'Ïíïìá ôïõ cookie ðïõ ÷ñçóéìïðïéåß ôï ðñüãñáììá');
define('COOKIE_PATH', 'ÄéáäñïìÞ ãéá ôï cookie ðïõ ÷ñçóéìïðïéåß ôï ðñüãñáììá');
define('CHAR_SET', 'Êùäéêïðïßçóç ÷áñáêôÞñùí');
define('MISC_SETTING_TITLE', 'ËïéðÝò ñõèìßóåéò');
define('DEBUG_MODE', 'Eíåñãïðïßçóç ëåéôïõñãßáò åíôïðéóìïý ëáèþí');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) Ôá ðåäßá ìå * äåí ðñÝðåé íá áëëá÷ôïýí åáí Ý÷åôå Þäç öùôïãñáößåò óôá áëìðïõì óáò.</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'ÐñÝðåé íá ãñÜøåôå ôï üíïìá óáò êáé êÜðïéï ó÷üëéï');
define('COM_ADDED', 'Ôï ó÷üëéï ðñïóôÝèçêå');
define('ALB_NEED_TITLE', 'ÐñÝðåé íá äþóåôå êÜðïéï ôßôëï ãéá ôï Üëìðïõì !');
define('NO_UDP_NEEDED', 'Äåí ÷ñåéÜæåôáé åíçìÝñùóç.');
define('ALB_UPDATED', 'Ôï Üëìðïõì áíáíåþèçêå');
define('UNKNOWN_ALBUM', 'Ôï åðéëåãìÝíï Üëìðïõì äåí õðÜñ÷åé, Þ äåí óáò åðéôñÝðåôå íá ðñïóèÝóåôå öùôïãñáößåò óå áõôü');
define('NO_PIC_UPLOADED', 'Äåí ðñïóôÝèçêå öùôïãñáößá !<br /><br />Åáí åß÷áôå åðéëÝîåé êÜðïéá íá ðñïóèÝóåôå, åëÝíîôå áí ï äéáêïìéóôÞò åðéôñÝðåé ðñïóèÞêåò...');
define('ERR_MKDIR', 'Áðïôõ÷ßá íá äçìéïõñãÞóåé ôïí êáôÜëïãï %s !');
define('DEST_DIR_RO', 'Ï êáôÜëïãïò %s óôïí ïðïßï ðñïóðáèÞôå íá ãñÜøåôå, äåí ìðïñåß íá áëëá÷ôåß áðü ôï ðñüãñáììá !');
define('ERR_MOVE', 'Äåí óôÜèçêå äõíáôÞ ç ìåôáêßíçóç áðü ôïí %s óôïí %s !');
define('ERR_FSIZE_TOO_LARGE', 'Tï ìÝãåèïò ôçò öùôïãñáößáò ðïõ áíåâÜæåôå åßíáé ðïëý ìåãÜëï (ìÝãéóôï åðéôñåðüìåíï åßíáé %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Tï ìÝãåèïò ôïõ áñ÷åßïõ ðïõ áíåâÜæåôå åßíáé ðïëý ìåãÜëï (ìÝãéóôï åðéôñåðüìåíï åßíáé %s KB) !');
define('ERR_INVALID_IMG', 'Tï áñ÷åßï ðïõ áíåâÜæåôå, äåí åßíáé åãêõñï óáí öùôïãñáößá!');
define('ALLOWED_IMG_TYPES', 'Ìðïñåßôå íá áíåâÜóåôå ìüíï %s öùôïãñáößåò.');
define('ERR_INSERT_PIC', 'Ç öùôïãñáößá \'%s\' äåí ìðïñåß íá ðñïóôåèåß óôï Üëìðïõì ');
define('UPLOAD_SUCCESS', 'Ç öùôïãñáößá óáò ðñïóôÝèçêå åðéôõ÷þò<br /><br />Èá åßíáé äéáèÝóéìç ìåôÜ ôçí Ýãêñéóç ôïõ äéá÷åéñéóôÞ.');
define('INFO', 'Ðëçñïöïñßåò');
define('ERR_COMMENT_EMPTY', 'Ôï ó÷üëéï óáò äåí Ý÷åé ðåñéå÷üìåíï !');
define('ERR_INVALID_FEXT', 'Ìüíï ôá áñ÷åßá ìå ôéò áêüëïõèåò åðåêôÜóåéò åðéôñÝðïíôáé : <br /><br />%s.');
define('NO_FLOOD', 'Óõãíþìç áëëÜ åßóôå áõôüò ðïõ Ýãñáøå ôï ôåëåõôáßï ó÷üëéï ãéá áõôÞí ôçí öùôïãñáößá<br /><br />ÔñïðïðïéÞóôå ôï ó÷üëéï ðïõ äçìïóéåýóáôå åáí èÝëåôå íá ôï áëëÜîåôå');
define('REDIRECT_MSG', 'Ìåôáöåñüóáóôå...<br /><br /><br />ÐáôÞóôå \'CONTINUE\' åÜí ç óåëßäá äåí áíáíåùèåß áõôüìáôá');
define('UPL_SUCCESS', 'Ç öùôïãñáößá óáò ðñïóôÝèçêå åðéôõ÷þò');

// lang_delete_php
define('CAPTION', 'ËåæÜíôá');
define('FS_PIC', 'åéêüíá ðëÞñïõò ìåãÝèïõò');
define('DEL_SUCCESS', 'äéáãñÜöç åðéôõ÷þò');
define('NS_PIC', 'öùôïãñáößá êáíïíéêïý ìåãÝèïõò');
define('ERR_DEL', 'äåí ìðïñåß íá äéáãñáöåß');
define('THUMB_PIC', 'thumbnail');
define('COMMENT', 'ó÷üëéï');
define('IM_IN_ALB', 'öùôïãñáößá óå Üëìðïõì');
define('ALB_DEL_SUCCESS', 'Aëìðïõì \'%s\' äéåãñÜöåé');
define('ALB_MGR', 'Äéá÷åßñçóç Aëìðïõì');
define('ERR_INVALID_DATA', 'Ìç Ýãêõñá äåäïìÝíá ðáñåëÞöèçóáí óôï \'%s\'');
define('CREATE_ALB', 'Äçìéïõñãßá Üëìðïõì \'%s\'');
define('UPDATE_ALB', 'ÁíáíÝùóç Üëìðïõì \'%s\' ìå ôßôëï \'%s\' êáé åõñåôÞñéï \'%s\'');
define('DEL_PIC', 'ÄéáãñáöÞ öùôïãñáößáò');
define('DEL_ALB', 'ÄéáãñáöÞ Üëìðïõì');
define('DEL_USER', 'ÄéáãñáöÞ ÷ñÞóôç');
define('ERR_UNKNOWN_USER', 'Ï åðéëåãìÝíïò ÷ñÞóôçò äåí õðÜñ÷åé !');
define('COMMENT_DELETED', 'Ôï ó÷üëéï äéåãñÜöåé åðéôõ÷þò');

// lang_display_image_php
define('CONFIRM_DEL', 'Åßóôå óßãïõñïò ðùò èÝëåôå íá ÄÉÁÃÑÁØÅÔÅ áõôÞ ôçí öùôïãñáößá ? \\nÔá Ó÷üëéá åðßóçò èá äéáãñáöïýí.');
define('DEL_PIC', 'ÄÉÁÃÑÁÖÇ ÖÙÔÏÃÑÁÖÉÁÓ');
define('SIZE', '%s x %s ðßîåë');
define('VIEWS', '%s öïñÝò');
define('SLIDESHOW', 'Slideshow');
define('STOP_SLIDESHOW', 'ÔÅËÏÓ SLIDESHOW');
define('VIEW_FS', 'Click to view full size image');

// lang_picinfo
define('TITLE', 'Ðëçñïöïñßåò öùôïãñáößáò');
define('FILENAME', 'Ïíïìá áñ÷åßïõ');
define('ALBUM NAME', 'Ïíïìá Üëìðïõì');
define('RATING', 'Âáèìïëïãßá (%s øÞöïé)');
define('KEYWORDS', 'ËÝîåéò ÊëåéäéÜ');
define('FILE SIZE', 'ÌÝãåèïò áñ÷åßïõ');
define('DIMENSIONS', 'ÄéáóôÜóåéò');
define('DISPLAYED', 'Åìöáíßóåéò');
define('CAMERA', 'ÖùôïãñáöéêÞ Ìç÷áíÞ');
define('DATE TAKEN', 'Çìåñïìçíßá ëÞøçò');
define('APERTURE', 'ÄéÜöñáãìá');
define('EXPOSURE TIME', '×ñüíïò Ýêèåóçò');
define('FOCAL LENGTH', 'ÅóôéáêÞ áðüóôáóç');
define('COMMENT', 'Ó÷üëéï');
define('ADDFAV', 'ÐñïóèÞêç óôá ÁãáðçìÝíá');
define('ADDFAVPHRASE', 'ÁãáðçìÝíá');
define('REMFAV', 'Áöáßñåóç áðü ôá ÁãáðçìÝíá');
define('FLASH', 'Öëáò');
define('ISOSPEEDRATINGS', 'ISO');
define('EXPOSUREPROGRAM', 'Ðñüãñáììá Ýêèåóçò');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'ÌåôáôñïðÞ ó÷üëéïõ');
define('CONFIRM_DELETE', 'Åßóôå óßãïõñïò ðùò èÝëåôå íá äéáãñÜøåôå áõôü ôï ó÷üëéï ?');
define('ADD_YOUR_COMMENT', 'ÐñïóèÞêç ó÷üëéïõ');
define('NAME', 'Ïíïìá');
define('COMMENT', 'Ó÷üëéï');
define('YOUR_NAME', 'Áíþíõìïò');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'ÐáôÞóôå óôçí åéêüíá ãéá íá êëåßóåôå áõôü ôï ðáñÜèõñï');

// lang_ecard_php
define('TITLE', 'Óôåßëôå ìéá çëåêôñïíéêÞ êÜñôá');
define('INVALID_EMAIL', '<b>Ðñïåéäïðïßçóç</b> : ç äéåýèõíóç e-mail äåí åßíáé åãêõñç !');
define('ECARD_TITLE', 'Ìéá çëåêôñïíéêÞ êÜñôá áðü ôïí %s ãéá åóÜò');
define('VIEW_ECARD', 'Åáí ç çëåêôñïíéêÞ êÜñôá äåí åìöáíéóôåß óùóôÜ, ðáôÞóáôå áõôÞí ôçí äéáóýíäåóç');
define('VIEW_MORE_PICS', 'ÐáôÞóáôå áõôÞ ôçí äéáóýíäåóç ãéá íá äåßôå ðåñéóóüôåñåò öùôïãñáößåò !');
define('SEND_SUCCESS', 'Ç çëåêôñïíéêÞ óáò êÜñôá áðïóôÜëåé');
define('SEND_FAILED', 'Óõãíþìç, áëëÜ ï äéáêïìéóôÞò äåí ìðïñåß íá óôåßëåé ôçí çëåêôñïíéêÞ óáò êÜñôá...');
define('FROM', 'Áðü');
define('YOUR_NAME', 'ÔÏ üíïìá óáò');
define('YOUR_EMAIL', 'Ç äéåýèõíóç email óáò');
define('TO', 'Ðñïò');
define('RCPT_NAME', 'Ïíïìá ðáñáëÞðôç');
define('RCPT_EMAIL', 'Äéåýèõíóç email ðáñáëÞðôç');
define('GREETINGS', 'Ìå öéëéêïýò ÷áéñåôéóìïýò');
define('MESSAGE', 'ÌÞíõìá');

// lang_editpics_php
define('PIC_INFO', 'Ðëçñïöïñßåò&nbsp;öùôïãñáößáò');
define('ALBUM', 'Aëìðïõì');
define('TITLE', 'Tßôëïò');
define('DESC', 'ÐåñéãñáöÞ');
define('KEYWORDS', 'ËÝîåéò êëåéäéÜ');
define('PIC_INFO_STR', '%sx%s - %sKB - %s åìöáíßóåéò - %s øÞöïé');
define('APPROVE', 'Åãêñéóç öùôïãñáößáò');
define('POSTPONE_APP', 'Áñíçóç Ýãêñéóçò');
define('DEL_PIC', 'ÄéáãñáöÞ öùôïãñáößáò');
define('RESET_VIEW_COUNT', 'Ìçäåíéóìüò ìåôñçôÞ åìöáíßóåùí');
define('RESET_VOTES', 'Ìçäåíéóìüò øÞöùí');
define('DEL_COMM', 'ÄéáãñáöÞ ó÷üëéùí');
define('UPL_APPROVAL', 'Åãêñéóç ðñïóèÞêçò');
define('EDIT_PICS', 'ÌåôáôñïðÞ öùôïãñáößáò');
define('SEE_NEXT', 'ÅìöÜíéóç åðüìåíçò öùôïãñáößáò');
define('SEE_PREV', 'ÅìöÜíéóç ðñïçãïýìåíçò öùôïãñáößáò');
define('N_PIC', '%s öùôïãñáößåò');
define('N_OF_PIC_TO_DISP', 'Áñéèìüò öùôïãñáöéþí ðñïò åìöÜíéóç');
define('APPLY', 'ÅöáñìïãÞ ôñïðïðïéÞóåùí');

// lang_groupmgr_php
define('GROUP_NAME', 'Ïíïìá ïìÜäáò');
define('DISK_QUOTA', 'ÄéáèÝóéìïò ÷þñïò');
define('CAN_RATE', 'Ìðïñïýí íá âáèìïëïãÞóïõí öùôïãñáößåò');
define('CAN_SEND_ECARDS', 'Ìðïñïýí íá óôåßëïõí çëåêôñïíéêÝò êÜñôåò');
define('CAN_POST_COM', 'Ìðïñïýí íá äçìïóéåýóïõí ó÷üëéá');
define('CAN_UPLOAD', 'Ìðïñïýí íá ðñïóèÝóïõí öùôïãñáößåò');
define('CAN_HAVE_GALLERY', 'Ìðïñïýí íá Ý÷ïõí ðñïóùðéêü öþôï Üëìðïõì');
define('APPLY', 'ÅöáñìïãÞ ôñïðïðïéÞóåùí');
define('CREATE_NEW_GROUP', 'Äçìéïõñãßá íÝáò ïìÜäáò');
define('DEL_GROUPS', 'ÄéáãñáöÞ åðéëåãìÝíçò ïìÜäáò');
define('CONFIRM_DEL', 'Ðñïóï÷Þ, üôáí äéáãñÜöåôå ìéá ïìÜäá, ïé ÷ñÞóôåò ðïõ áíÞêïõí óå áõôÞí ôçí ïìÜäá èá ìåôáöåñèïõí óôçí ïìÜäá ôùí \'ÅããåãñáìÝíùí\' !\\n\\nÈÝëåôå íá óõíå÷ßóåôå ?');
define('TITLE', 'Äéá÷åßñçóç ïìÜäùí ÷ñçóôþí');
define('APPROVAL_1', 'Äçìïó. Ðñïóè. äåêôÞ (1)');
define('APPROVAL_2', 'Ðñïóùð. Ðñïóè. äåêôÞ (2)');
define('NOTE1', '<b>(1)</b> ÐñïóèÞêåò óå Ýíá äçìüóéï Üëìðïõì áðáéôåß ôçí Ýãêñéóç ôïõ äéá÷åéñéóôÞ');
define('NOTE2', '<b>(2)</b> ÐñïóèÞêåò óå Ýíá ðñïóùðéêü Üëìðïõì áðáéôåß ôçí Ýãêñéóç ôïõ äéá÷åéñéóôÞ');
define('NOTES', 'Óçìåéþóåéò');

// lang_index_php
define('WELCOME', 'ÊáëùóÞñèáôå !');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Åéóôå óßãïõñïò ðùò èÝëåôå íá äéáãñÜøåôå áõôï ôï Üëìðïõì ? \\nÏëåò ïé öùôïãñáößåò êáé ôá ó÷üëéá èá ÷áèïýí.');
define('DELETE', 'ÄÉÁÃÑÁÖÇ');
define('MODIFY', 'ÔÑÏÐÏÐÏÉÇÓÇ');
define('EDIT_PICS', 'ÅÐÅÎÅÑÃÁÓÉÁ ÖÙÔÏÃÑÁÖÉÙÍ');

// lang_list_categories
define('HOME', 'Áñ÷éêÞ');
define('STAT1', '<b>[pictures]</b> öùôïãñáößåò óå <b>[albums]</b> Üëìðïõì êáé <b>[cat]</b> êáôçãïñßåò ìå <b>[comments]</b> ó÷üëéá, ïé ïðïßåò Ý÷ïõí åìöáíéóôåß <b>[views]</b> öïñÝò');
define('STAT2', '<b>[pictures]</b> öùôïãñáößåò óå <b>[albums]</b> áëìðïõì, ïé ïðïßåò Ý÷ïõí åìöáíéóôåß <b>[views]</b> öïñÝò');
define('XX_S_GALLERY', '%s\'s Öþôï Üëìðïõì');
define('STAT3', '<b>[pictures]</b> öùôïãñáößåò óå <b>[albums]</b> Üëìðïõì ìå <b>[comments]</b> ó÷üëéá, ïé ïðïßåò Ý÷ïõí åìöáíéóôåß <b>[views]</b> öïñÝò');

// lang_list_users
define('USER_LIST', 'ÊáôÜëïãïò ×ñçóôþí');
define('NO_USER_GAL', 'Äåí õðÜñ÷ïõí ÷ñÞóôåò ðïõ íá ôïõò åðéôñÝðåôå íá Ý÷ïõí Üëìðïõì');
define('N_ALBUMS', '%s Üëìðïõì');
define('N_PICS', '%s öùôïãñáößá(åò)');

// lang_list_albums
define('N_PICTURES', '%s öùôïãñáößåò');
define('LAST_ADDED', ', ç ôåëåõôáßá ðñïóôÝèçêå óôéò %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'ÅíçìÝñùóç Üëìðïõì %s');
define('GENERAL_SETTINGS', 'ÃåíéêÝò ñõèìßóåéò');
define('ALB_TITLE', 'Ôßôëïò Üëìðïõì');
define('ALB_CAT', 'Êáôçãïñßá Üëìðïõì');
define('ALB_DESC', 'ÐåñéãñáöÞ Üëìðïõì');
define('ALB_THUMB', 'Aëìðïõì thumbnail');
define('ALB_PERM', 'Äéáêáéþìáôá ãéá áõôü ôï Üëìðïõì');
define('CAN_VIEW', 'Ôï Üëìðïõì ìðïñåß íá åìöáíéóôåß óôïõò');
define('CAN_UPLOAD', 'Ïé åðéóêÝðôåò ìðïñïýí íá ðñïóèÝóïõí öùôïãñáößåò');
define('CAN_POST_COMMENTS', 'Ïé åðéóêÝðôåò ìðïñïýí íá äçìïóéåýóïõí ó÷üëéá');
define('CAN_RATE', 'Ïé åðéóêÝðôåò ìðïñïýí íá âáèìïëïãÞóïõí ôéò öùôïãñáößåò');
define('USER_GAL', 'Öþôï Üëìðïõì ÷ñçóôþí');
define('NO_CAT', '* Ìç êáôçãïñéïðïéçìÝíï *');
define('ALB_EMPTY', 'Ôï Üëìðïõì åßíáé Üäåéï');
define('LAST_UPLOADED', 'Ôåëåõôáßá ðñïóèÞêç');
define('PUBLIC_ALB', 'Ïëïé (äçìüóéï Üëìðïõì)');
define('ME_ONLY', 'Müíï åãþ');
define('OWNER_ONLY', 'Ï (%s) , éäéïêôÞôçò ôïõ Üëìðïõì');
define('GROUPP_ONLY', 'Ôá ìÝëç ôçò ïìÜäáò \'%s\' ');
define('ERR_NO_ALB_TO_MODIFY', 'ÊáíÝíá Üëìðïõì ãéá ôñïðïðïßçóç óôçí âÜóç äåäïìÝíùí.');
define('UPDATE', 'ÅíçìÝñùóç Üëìðïõì');

// lang_rate_pic_php
define('ALREADY_RATED', 'Óõãíþìç áëëÜ Ý÷åôå Þäç âáèìïëïãÞóåé áõôÞ ôçí öùôïãñáößá');
define('RATE_OK', 'Ç øÞöïò óáò Ýãéíå äåêôÞ');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'Ðáñüëï ðïõ ïé äéá÷åéñéóôÝò ôïõ {SITE_NAME} èá ðñïóðáèÞóïõí íá áöáéñÝóïõí Þ íá ôñïðïðïéÞóïõí êÜèå ðñïóðÜèåéá ðñïóâïëÞò ôï óõíôïìüôåñï äõíáôü, åßíáé áäýíáôï íá åðéâëÝðïõí êÜèå äçìïóéåõìÝíï ó÷üëéï. Ãéá áõôü áðïäÝ÷åóôå üôé êÜèå ó÷üëéï ðïõ äçìïóéåýåôáé óå áõôü ôï site åêöñÜæåé ìüíï ôçí Üðïøç êáé ôçí ãíþìç ôïõ óõíôÜêôç ôïõ êáé êáíåíüò Üëëïõ.<br />
<br />
Ìå ôï ðáñüí, óõìöùíåßôå íá ìçí äçìïóéåýóåôå åéñùíéêÜ, ìåéùôéêÜ, õâñéóôéêÜ, êáêïÞèç, óåîïõáëéêÜ Þ Üëëïõ åßäïõò ðñïóâëçôéêÜ ó÷üëéá ðïõ åíáíôéþíïíôáé óôïõò ôñÝ÷ïíôåò íüìïõò êáé Þèç. ÁðïäÝ÷åóôå üôé ïé äéá÷åéñéóôÝò ôïõ {SITE_NAME} Ý÷ïõí ôï äéêáßùìá íá áöáéñÝóïõí Þ íá ôñïðïðïéÞóïõí êÜèå ôé êáôÜ ôçí êñßóç ôïõò. Óáí ÷ñÞóôçò áðïäÝ÷åóôå üôé êÜèå ðëçñïöïñßá ðïõ Ý÷åôå åéóÜãåé èá êáôá÷ùñçèåß óôçí âÜóç äåäïìÝíùí. Ðáñüëï ðïõ êÜèå ðëçñïöïñßá óáò èåùñåßôå åìðéóôåõôéêÞ, êáé äåí èá äïèåß ðïõèåíÜ ÷ùñßò ôçí Üäåéá óáò ïé äéá÷åéñéóôÝò äåí ìðïñïýí íá óáò äéáóöáëßóïõí óå ðåñßðôùóç ðñïóðÜèåéáò hacking ðïõ ìðïñåß íá ïäçãÞóåé óå êëïðÞ ðëçñïöïñéþí.<br />
<br />
Áõôü ôï site ÷ñçóéìïðïéåß cookies ãéá íá áðïèçêåýóåé ðëçñïöïñßåò ôïðéêÜ óôïí õðïëïãéóôÞ óáò. ÁõôÜ ôá cookies åîõðçñåôïýí ìüíï ôçí äéêéÜ óáò éêáíïðïßçóç êáôÜ ôçí ðåñéÞãçóç óôéò óåëßäåò. Ç äéåýèõíóç email ðïõ óáò æçôåßôå åßíáé ìüíï ãéá íá ðéóôïðïéÞóåé ãéá ôçí åããñáöÞ óáò ôéò ðëçñïöïñßåò êáé ôïí Êùäéêü óáò.<br />
<br />
ÅðéëÝãïíôáò \'Óõìöùíþ\' ðáñáêÜôù, áðïäÝ÷åóôå áõôïýò ôïõò üñïõò.');

// lang_register_php
define('PAGE_TITLE', 'ÅããñáöÞ ÷ñÞóôç');
define('TERM_COND', 'Ïñïé ÷ñÞóçò');
define('I_AGREE', 'Óõìöùíþ');
define('SUBMIT', 'ÁðïóôïëÞ åããñáöÞò');
define('ERR_USER_EXISTS', 'Ôï Ïíïìá ×ñÞóôç ðïõ åéóÜãáôå õðÜñ÷åé Þäç, ðáñáêáëþ äéáëÝîôå êÜðïéï Üëëï');
define('ERR_PASSWORD_MISMATCH', 'Ïé äýï Êùäéêïß äåí åßíáé ßäéïé, ðáñáêáëþ åéóÜãåôÝ ôïõò îáíÜ');
define('ERR_UNAME_SHORT', 'Ôï Ïíïìá ×ñÞóôç ðñÝðåé íá åßíáé ôïõëÜ÷éóôïí 2 ÷áñáêôÞñåò');
define('ERR_PASSWORD_SHORT', 'Ï Êùäéêüò ðñÝðåé íá åßíáé ôïõëÜ÷éóôï 2 ÷áñáêôÞñåò');
define('ERR_UNAME_PASS_DIFF', 'Ôï Ïíïìá ×ñÞóôç êáé ï Êùäéêüò ðñÝðåé íá åßíáé äéáöïñåôéêÜ');
define('ERR_INVALID_EMAIL', 'Ç äéåýèõíóç email äåí åßíáé Ýãêõñç');
define('ERR_DUPLICATE_EMAIL', 'ÊÜðïéïò Üëëïò ÷ñÞóôçò Ý÷åé Þäç åããñáöåß ìå ôçí äéåýèõíóç email ðïõ äþóáôå');
define('ENTER_INFO', 'Êáôá÷þñçóç ðëçñïöïñéþí åããñáöÞò');
define('REQUIRED_INFO', 'Õðï÷ñåùôéêÝò ðëçñïöïñßåò');
define('OPTIONAL_INFO', 'ÐñïáéñåôéêÝò ðëçñïöïñßåò');
define('USERNAME', 'Ïíïìá ×ñÞóôç');
define('PASSWORD', 'Êùäéêüò');
define('PASSWORD_AGAIN', 'Îáíáäþóôå ôïí Êùäéêü');
define('EMAIL', 'Email');
define('LOCATION', 'Ôïðïèåóßá');
define('INTERESTS', 'ÅíäéáöÝñïíôá');
define('WEBSITE', 'ÐñïóùðéêÞ óåëßäá');
define('OCCUPATION', 'ÅðÜããåëìá');
define('ERROR', 'ËÁÈÏÓ');
define('CONFIRM_EMAIL_SUBJECT', '%s - Ðéóôïðïéçóç åããñáöÞò');
define('INFORMATION', 'Ðëçñïöïñßåò');
define('FAILED_SENDING_EMAIL', 'Ôï email ãéá ôçí ðéóôïðïßçóç åããñáöÞò äåí ìðïñåß íá áðïóôáëåß !');
define('THANK_YOU', 'Åõ÷áñéóôïýìå ãéá ôçí åããñáöÞ óáò.<br /><br />Åíá email ìå ðëçñïöïñßåò ãéá ôï ðùò èá åíåñãïðïéÞóåôå ôïí ëïãáñéáóìü óáò áðåóôÜëåé óôçí äéåýèõíóç email ðïõ äþóáôå.');
define('ACCT_CREATED', 'Ï ëïãáñéáóìüò óáò ðëÝïí õðÜñ÷åé êáé ìðïñåßôå íá åéóÝñèåôå ÷ñçóéìïðïéþíôáò ôï Ïíïìá ×ñÞóôç êáé ôïí Êùäéêü óáò');
define('ACCT_ACTIVE', 'Ï ëïãáñéáóìüò óáò åßíáé ðëÝïí åíåñãüò êáé ìðïñåßôå íá åéóÝñèåôå ìå ôï Ïíïìá ×ñÞóôç êáé ôïí Êùäéêü óáò');
define('ACCT_ALREADY_ACT', 'Ï ëïãáñéáóìüò óáò åßíáé Þäç åíåñãüò !');
define('ACCT_ACT_FAILED', 'Áõôüò ï ëïãáñéáóìüò äåí ìðïñåß íá åíåñãïðïéçèåß !');
define('ERR_UNK_USER', 'Ï åðéëåãìÝíïò ÷ñÞóôçò äåí õðÜñ÷åé !');
define('X_S_PROFILE', 'Ôï ðñïößë ôïõ %s');
define('GROUP', 'ÏìÜäá');
define('REG_DATE', 'ÐñïóÞëèå');
define('DISK_USAGE', '×ñÞóç ÷þñïõ');
define('CHANGE_PASS', 'ÁëáãÞ ôïõ Êùäéêïý ìïõ');
define('CURRENT_PASS', 'Ðáñþí Êùäéêüò');
define('NEW_PASS', 'NÝïò Êùäéêüò');
define('NEW_PASS_AGAIN', 'Äþóôå ðÜëé ôïí ÍÝï Êùäéêü');
define('ERR_CURR_PASS', 'Ï ðáñþí Êùäéêüò åßíáé ëáèáóìÝíïò');
define('APPLY_MODIF', 'ÅöáñìïãÞ ôñïðïðïéÞóåùí');
define('UPDATE_SUCCESS', 'Ôï ðñïößë áíáíåþèçêå');
define('PASS_CHG_SUCCESS', 'Ï Êùäéêüò óáò Üëëáîå');
define('PASS_CHG_ERROR', 'Ï Êùäéêüò óáò äåí Üëëáîå');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Åõ÷áñéóôïýìå ðïõ åããñáöÞêáôå óôï {SITE_NAME}

Ôï Ïíïìá ×ñÞóôç óáò åßíáé : "{USER_NAME}"
Ï Êùäéêüò óáò åßíáé : "{PASSWORD}"

Ãéá íá åíåñãïðïéÞóåôå ôïí ëïãáñéáóìü óáò, ðñÝðåé íá ðáôÞóåôå ôçí ðáñáêÜôù äéáóýíäåóç
Þ íá ôçí áíôéãñÜøåôå óôïí web browser óáò.

{ACT_LINK}

Ìå öéëéêïýò ÷áéñåôéóìïýò,

Ïé äéá÷åéñéóôÝò ôïõ {SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', 'Åðéóêüðçóç ó÷ïëéùí');
define('NO_COMMENT', 'Äåí õðÜñ÷ïõí ó÷üëéá ãéá åðéóêüðçóç');
define('N_COMM_DEL', '%s ó÷üëéï(á) äéáãñÜöçêå(áí)');
define('N_COMM_DISP', 'Áñéèìüò ó÷üëéùí ðñïò åìöÜíéóç');
define('SEE_PREV', 'ÅìöÜíéóç ðñïçãïýìåíïõ');
define('SEE_NEXT', 'ÅìöÜíéóç åðüìåíïõ');
define('DEL_COMM', 'ÄéáãñáöÞ åðéëåãìÝíùí ó÷ïëéùí');

// lang_search_php
define('SEARCH', 'ÁíáæÞôçóç óôçí óõëëïãÞ öùôïãñáöéþí');

// lang_search_new_php
define('PAGE_TITLE', 'ÁíáæÞôçóç íÝùí öùôïãñáöéþí');
define('SELECT_DIR', 'ÅðéëïãÞ êáôáëüãïõ');
define('SELECT_DIR_MSG', 'ÁõôÞ ç ëåéôïõñãßá óáò åðéôñÝðåé íá ðñïóèÝóåôå ðëÞèïò öùôïãñáöéþí ðïõ Ý÷åôå áíåâÜóåé óôïí äéáêïìéóôÞ óáò ìÝóù FTP.<br /><br />ÅðéëÝîôå ôïí êáôÜëïãï ïðïõ áíåâÜóáôå ôéò öùôïãñáößåò óáò');
define('NO_PIC_TO_ADD', 'Äåí õðÜñ÷åé öùôïãñáößá ãéá ðñïóèÞêç');
define('NEED_ONE_ALBUM', '×ñåéÜæåóôå ôïõëÜ÷éóôï Ýíá Üëìðïõì ãéá íá ÷ñçóéìïðïéÞóåôå áõôÞ ôçí ëåéôïõñãßá');
define('WARNING', 'Ðñïåéäïðïßçóç');
define('CHANGE_PERM', 'ôï ðñüãñáììá äåí ìðïñåß íá ãñÜøåé óå áõôü ôïí êáôÜëïãï, ðñÝðåé íá áëëÜîåôå ôçí êáôÜóôáóç ôïõ êáôáëüãïõ (CHMOD) óå 755 Þ 777 ðñéí ðñïóðáèÞóåôå íá ðñïóèÝóåôå öùôïãñáößåò !');
define('TARGET_ALBUM', '<b>ÅéóáãùãÞ öùôïãñáöéþí &quot;</b>%s<b>&quot; óôï </b>%s');
define('FOLDER', 'ÊáôÜëïãïò');
define('IMAGE', 'Åéêüíá');
define('ALBUM', 'Aëìðïõì');
define('RESULT', 'ÁðïôÝëåóìá');
define('DIR_RO', 'Äåí ìðïñåß íá åããñáöåß. ');
define('DIR_CANT_READ', 'Äåí ìðïñåß íá äéáâáóôåß. ');
define('INSERT', 'ÐñïóèÝôïíôáò íÝåò öùôïãñáößåò óôï öþôï Üëìðïõì');
define('LIST_NEW_PIC', 'Ëßóôá öùôïãñáöéþí');
define('INSERT_SELECTED', 'ÅéóáãùãÞ åðéëåãìÝíùí öùôïãñáöéþí');
define('NO_PIC_FOUND', 'Äåí âñÝèçêáí íÝåò öùôïãñáößåò');
define('BE_PATIENT', 'Ðáñáêáëþ íá åßóôå õðïìïíåôéêïß, ôï ðñüãñáììá ÷ñåéÜæåôå ëßãç þñá ãéá íá ðñïóèÝóåé ôéò öùôïãñáößåò...');
define('NOTES', '<ul><li><b>OK</b> : óçìáßíåé ðùò ç öùôïãñáößá åéóÞ÷èåé åðéôõ÷þò<li><b>DP</b> : óçìáßíåé ðùò ç öùôïãñáößá õðÜñ÷åé Þäç óôçí âÜóç äåäïìÝíùí<li><b>PB</b> : óçìáßíåé ðùò ç öùôïãñáößá äåí ìðïñåß íá ðñïóôåèåß, åëÝíîôå ôéò ñõèìßóåéò óáò êáé áí Ý÷åôå Üäåéá íá ÷ñçóéìïðïéÞóåôå ôïõò êáôáëüãïõò ðïõ âñßóêïíôáé ïé öùôïãñáößåò<li>Åáí ôá OK, DP, PB \'signs\' äåí åìöáíßæïíôáé, åðéëÝîôå ðÜíù óôçí ìç åìöáíéèåßóá åéêüíá ôïõò íá äåßôå ôé ðñüâëçìá ðáñïõóéÜóôçêå áðü ôçí ãëþóóá PHP<li>Åáí åìöáíßóåé ï browser óáò timeout, îáíáöïñôþóôå ôçí óåëßäá ìå reload</ul>');

// lang_upload_php
define('TITLE', 'ÐñïóèÞêç öùôïãñáößáò');
define('MAX_FSIZE', 'Ôï ìÝãéóôï åðéôñåðüìåíï ìÝãåèïò áñ÷åßïõ åßíáé %s KB');
define('ALBUM', 'Aëìðïõì');
define('PICTURE', 'Öùôïãñáößá');
define('PIC_TITLE', 'Ôßôëïò öùôïãñáößáò');
define('DESCRIPTION', 'ÐåñéãñáöÞ öùôïãñáößáò');
define('KEYWORDS', 'ËÝîåéò ÊëåéäéÜ (äéá÷ùñéóìÝíåò ìå êåíÜ)');
define('ERR_NO_ALB_UPLOADABLES', 'Óõãíþìç, äåí õðÜñ÷åé Üëìðïõì ðïõ íá óáò åðéôñÝðåôå ç ðñïóèÞêç öùôïãñáöéþí');

// lang_usermgr_php
define('TITLE', 'Äéá÷åßñçóç ÷ñçóôþí');
define('NAME_A', 'üíïìá, áýîïõóá óåéñÜ');
define('NAME_D', 'üíïìá, öèßíïõóá óåéñÜ');
define('GROUP_A', 'ïìÜäá, áýîïõóá óåéñÜ');
define('GROUP_D', 'ïìÜäá, öèßíïõóá óåéñÜ');
define('REG_A', 'çìåñïìçíßá åããñáöÞò, áýîïõóá óåéñÜ');
define('REG_D', 'çìåñïìçíßá åããñáöÞò, öèßíïõóá óåéñÜ');
define('PIC_A', 'áñßèìçóç öùôïãñáöéþí, Üõîïõóá óåéñÜ');
define('PIC_D', 'áñßèìçóç öùôïãñáöéþí, öèßíïõóá óåéñÜ');
define('DISKU_A', '÷ñÞóç ÷þñïõ, áýîïõóá óåéñÜ');
define('DISKU_D', '÷ñÞóç ÷þñïõ, öèßíïõóá óåéñÜ');
define('SORT_BY', 'Óôïß÷çóç ÷ñçóôþí óýìöùíá ìå');
define('ERR_NO_USERS', 'Ï ðßíáêáò ÷ñçóôþí åßíáé Üäåéïò !');
define('ERR_EDIT_SELF', 'Äåí ìðïñåßôå íá ôñïðïðïéÞóåôå ôï ðñïößë óáò, ÷ñçóéìïðïéÞóôå ôçí äéáóýíäåóç \'My profile\' ãéá áõôü');
define('EDIT', 'ÔÑÏÐÏÐÏÉÇÓÇ');
define('DELETE', 'ÄÉÁÃÑÁÖÇ');
define('NAME', 'Ïíïìá ×ñÞóôç');
define('GROUP', 'ÏìÜäá');
define('INACTIVE', 'Áíåíåñãüò');
define('OPERATIONS', 'Ëåéôïõñãßåò');
define('PICTURES', 'Öùôïãñáößåò');
define('DISK_SPACE', '×þñïò óå ÷ñÞóç / ÄéáèÝóéìïò');
define('REGISTERED_ON', 'ÅããñÜöçêå óôéò');
define('U_USER_ON_P_PAGES', '%d ÷ñÞóôåò óå %d óåëßäá(åò)');
define('CONFIRM_DEL', 'Åßóôå óßãïõñïò ðùò èÝëåôå íá ÄÉÁÃÑÁØÅÔÅ áõôüí ôïí ÷ñÞóôç ? \\nÏëåò ïé öùôïãñáößåò êáé ôá Üëìðïõì ôïõ èá äéáãñáöïýí åðßóçò.');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'Ï åðéëåãìÝíïò ÷ñÞóôçò äåí õðÜñ÷åé !');
define('MODIFY_USER', 'Ôñïðïðïßçóç ÷ñÞóôç');
define('NOTES', 'Óçìåéþóåéò');
define('NOTE_LIST', '<li>Åáí äåí èÝëåôå íá áëëÜîåôå ôï ðáñþí Êùäéêü óáò, áöÞóôå ôï ðåäßï \"Êùäéêüò\" êåíü');
define('PASSWORD', 'Êùäéêüò');
define('USER_ACTIVE', 'Ï ÷ñÞóôçò åßíáé åíåñãüò');
define('USER_GROUP', 'ÏìÜäá ÷ñçóôþí');
define('USER_EMAIL', 'Åmail ÷ñÞóôç');
define('USER_WEB_SITE', 'ÐñïóùðéêÞ óåëßäá ÷ñÞóôç');
define('CREATE_NEW_USER', 'Äçìéïõñãßá íÝïõ ÷ñÞóôç');
define('USER_LOCATION', 'Ôïðïèåóßá ÷ñÞóôç');
define('USER_INTERESTS', 'ÅíäéáöÝñïíôá ÷ñÞóôç');
define('USER_OCCUPATION', 'ÅðÜããåëìá ÷ñÞóôç');

// lang_util_php
define('TITLE', 'ÁëëáãÞ ìåãÝèïõò öùôïãñáöéþí');
define('WHAT_IT_DOES', 'Ôé êÜíåé...');
define('WHAT_UPDATE_TITLES', 'Åíçìåñþíåé ôßôëïõò áðü üíïìá áñ÷åßïõ');
define('WHAT_DELETE_TITLE', 'ÄéáãñÜöåé ôßôëïõò');
define('WHAT_REBUILD', 'ÎáíáöôéÜ÷íåé ôá thumbnails êáé ôéò öùôïãñáößåò áëëáãìÝíïõ ìåãÝèïõò');
define('WHAT_DELETE_ORIGINALS', 'ÄéáãñÜöåé ôéò öùôïãñáößåò ìå ôï áñ÷éêü ìÝãåèïò, áíôéêáèéóôþíôáò ôéò ìå ôéò Üëëåò áëëáãìÝíïõ ìåãÝèïõò');
define('FILE', 'Áñ÷åßï');
define('TITLE_SET_TO', 'ï ôßôëïò íá ãßíåé');
define('SUBMIT_FORM', 'õðïâïëÞ');
define('UPDATED_SUCCESFULLY', 'åíçìåñþèçêå åðéôõ÷þò');
define('ERROR_CREATE', 'ËÁÈÏ¡êáôá ôçí äçìéïõñãßá');
define('CONTINUE', 'ÓõíÝ÷åéá ìå åðüìåíåò öùôü');
define('MAIN_SUCCESS', 'Ôï áñ÷åßï %s ÷ñçóéìïðïéÞèçêå åðéôõ÷þò óáí ç êõñßùò öùôïãñáößá');
define('ERROR_RENAME', 'ËÜèïò êáôÜ ôçí ìåôïíïìáóßá áðü %s óå %s');
define('ERROR_NOT_FOUND', 'Ôï áñ÷åßï %s äåí âñÝèçêå');
define('BACK', 'ðßóù óôçí êåíôñéêÞ');
define('THUMBS_WAIT', 'ÅíçìÝñùóç ôùí thumbnails Þ/êáé ôùí öùôïãñáöéþí áëëáãìÝíïõ ìåãÝèïõò, ðáñáêáëþ ðåñéìÝíåôå...');
define('THUMBS_CONTINUE_WAIT', 'ÓõíÝ÷åéá ìå ôçí åíçìÝñùóç ôùí thumbnails Þ/êáé ôùí öùôïãñáöéþí áëëáãìÝíïõ ìåãÝèïõò...');
define('TITLES_WAIT', 'ÅíçìÝñùóç ôßôëùí, ðáñáêáëþ ðåñéìÝíåôå...');
define('DELETE_WAIT', 'ÄéáãñáöÞ ôéôëùí, ðáñáêáëþ ðåñéìÝíåôå...');
define('REPLACE_WAIT', 'ÄéáãñáöÞ ðñïôïôýðùí êáé áíôéêáôÜóôáóç ìå ôéò öùôïãñáößåò áëëáãìÝíïõ ìåãÝèïõò, ðáñáêáëþ ðåñéìÝíåôå...');
define('INSTRUCTION', 'ÃñÞãïñåò ïäçãßåò');
define('INSTRUCTION_ACTION', 'ÅðéëïãÞ ëåéôïõñãßáò');
define('INSTRUCTION_PARAMETER', 'ÅðéëïãÞ ðáñáìÝôñùí');
define('INSTRUCTION_ALBUM', 'ÅðéëïãÞ áëìðïõì');
define('INSTRUCTION_PRESS', 'ÐáôÞóôå %s');
define('UPDATE', 'ÅíçìÝñùóç thumbs Þ/êáé öùôïãñáöéþí áëëáãìÝíïõ ìåãÝèïõò');
define('UPDATE_WHAT', 'Ôé èá ðñÝðåé íá åíçìåñùèåß');
define('UPDATE_THUMB', 'Ìüíï ôá thumbnails');
define('UPDATE_PIC', 'Ìüíï ïé öùôïãñáößåò áëëáãìÝíïõ ìåãÝèïõò');
define('UPDATE_BOTH', 'Êáé ôá thumbnails êáé ïé öùôïãñáößåò áëëáãìÝíïõ ìåãÝèïõò');
define('UPDATE_NUMBER', 'ÐëÞèïò öùôïãñáöéþí ðïõ åðåîåñãÜóôçêáí áíÜ êëéê');
define('UPDATE_OPTION', '(Äçëþóôå áõôÞí ôçí åðéëïãÞ ìå áñéèìü ÷áìçëüôåñï áí óáò åìöáíßæåé timeout )');
define('FILENAME_TITLE', 'Ïíïìá áñ÷åßïõ ? Ôßôëïò Öùôïãñáößáò');
define('FILENAME_HOW', 'Ðùò èá ðñåðåé íá ìåôáâëçèåß ï ôßôëïò ôïõ áñ÷åßïõ');
define('FILENAME_REMOVE', 'Áöáßñåóç ôçò åðÝêôáóçò .jpg êáé áíôéêáôÜóôáóç ìå _ (êÜôù ðáýëá) êáé êåíÜ');
define('FILENAME_EURO', 'ÁëëáãÞ 2003_11_23_13_20_20.jpg óå 23/11/2003 13:20');
define('FILENAME_US', 'ÁëëáãÞ 2003_11_23_13_20_20.jpg óå 11/23/2003 13:20');
define('FILENAME_TIME', 'ÁëëáãÞ 2003_11_23_13_20_20.jpg óå 13:20');
define('DELETE', 'ÄéáãñáöÞ ôßôëùí öùôïãñáöéþí Þ öùôïãñáöéþí áñ÷éêïý ìåãÝèïõò');
define('DELETE_TITLE', 'ÄéáãñáöÞ ôßôëùí öùôïãñáöéþí');
define('DELETE_ORIGINAL', 'ÄéáãñáöÞ öùôïãñáöéþí áñ÷éêïý ìåãÝèïõò');
define('DELETE_REPLACE', 'ÄéáãñáöÞ ðñùôüôõðùí öùôïãñáöéþí ìå áíôéêáôÜóôáóç ôïõò áðü ôéò öùôïãñáößåò áëëáãìÝíïõ ìåãÝèïõò');
define('SELECT_ALBUM', 'ÅðéëïãÞ Üëìðïõì');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>