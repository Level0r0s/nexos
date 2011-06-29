<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.2.2   nuke - Language Pack 0.93                //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003 Gregory DEMAR <gdemar@wanadoo.fr>                 //
// http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// New Port by CPG-nuke Dev Team                                                 //
// http://coppermine.findhere.org/                                          //
// Based on coppermine 1.1d by Surf  http://www.surf4all.net/               //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify     //
// it under the terms of the GNU General Public License as published by     //
// the Free Software Foundation; either version 2 of the License, or        //
// (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //
define('PIC_VIEWS', 'Views');
define('PIC_VOTES', 'Votes');
define('PIC_COMMENTS', 'Comments');

// Greek language by lykman, ÅëëçíéêÞ ìåôÜöñáóç áðü Ëõêïýñãï Ì., ver. 1.0   //
// You can mail me for errors or suggestions about GReek, lykman@freemail.gr //
// Ãéá ôõ÷üí ëÜèç Þ ðñïôÜóåéò óôá ÅëëçíéêÜ, óôåßëôå mail, lykman@freemail.gr //
// ------------------------------------------------------------------------- //
// info about translators and translated language
$lang_translation_info = array(
    'lang_name_english' => 'Greek', // the name of your language in English, e.g. 'Greek' or 'Spanish'
    'lang_name_native' => '&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940;', // the name of your language in your mother tongue (for non-latin alphabets, use unicode), e.g. '&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940;' or 'Español'
    'lang_country_code' => 'GR', // the two-letter code for the country your language is most-often spoken (refer to http://www.iana.org/cctld/cctld-whois.htm), e.g. 'gr' or 'es'
    'trans_name' => 'lykman', // the name of the translator - can be a nickname
    'trans_email' => 'lykman@freemail.gr', // translator's email address (optional)
    'trans_website' => 'http://www.lykman.com', // translator's website (optional)
    'trans_date' => '03-10-2003', // the date the translation was created / last modified
    );

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');
// Day of weeks and months
$lang_day_of_week = array('Êõñ', 'Äåõ', 'Tñé', 'Ôåô', 'Ðåì', 'Ðáñ', 'Óáâ');
$lang_month = array('Éáí', 'Öåâ', 'Máñ', 'Aðñ', 'Máé', 'Éïõí', 'Éïõë', 'Aõã', 'Óåð', 'Ïêô', 'Noå', 'Äåê');
// Some common strings
$lang_yes = 'Íáé';
$lang_no = 'Ï÷é';
$lang_back = 'ÐÉÓÙ';
$lang_continue = 'ÓÕÍÅ×ÅÉÁ';
$lang_info = 'Ðëçñïöïñßåò';
$lang_error = 'ËÜèïò';
// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt = '%B %d, %Y';
$lastcom_date_fmt = '%m/%d/%y at %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y at %I:%M %p';
$comment_date_fmt = '%B %d, %Y at %I:%M %p';
// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array('random' => 'Ôõ÷áßåò öùôïãñáößåò',
    'lastup' => 'Ôåëåõôáßåò ðñïóèÞêåò',
    'lastupby' => 'My Last Additions', // new 1.2.2
    'lastalb' => 'Ðñüóöáôá åíçìåñùìÝíá Üëìðïõì',
    'lastcom' => 'Ôåëåõôáßá ó÷üëéá',
    'lastcomby' => 'My Last comments', // new 1.2.2
    'topn' => 'Ðåñéóóüôåñåò åìöáíßóåéò',
    'toprated' => 'Õøçëüôåñç âáèìïëïãßá',
    'lasthits' => 'Ôåëåõôáßåò åìöáíßóåéò',
    'search' => 'ÁðïôåëÝóìáôá áíáæÞôçóçò',
    'favpics' => 'ÁãáðçìÝíåò öùôïãñáößåò'
    );

$lang_errors = array('access_denied' => 'Äåí åðéôñÝðåôå ç ðñüóâáóç óå áõôÞí ôçí óåëßäá.',
    'perm_denied' => 'Äåí åðéôñÝðåôå íá åêôåëÝóåôå áõôÞí ôçí ëåéôïõñãßá.',
    'param_missing' => 'Åëåéðåßò ðáñÜìåôñïé ãéá ôçí åêôÝëåóç.',
    'non_exist_ap' => 'Ôï åðéëåãìÝíï Üëìðïõì/öùôïãñáößá äåí õðÜñ÷åé!',
    'quota_exceeded' => 'Ï ÷þñïò óáò ãÝìéóå<br /><br />Óáò áíáëïãåß ÷þñïò [quota]K, ïé öùôïãñáößåò óáò áõôÞ ôçí óôéãìÞ ÷ñçóéìïðïéïýí [space]K, ðñïóèÝôïíôáò áõôÞí ôçí öùôïãñáößá èá õðåñâåßôå ôï üñéï.',
    'gd_file_type_err' => '×ñçóéìïðïéþíôáò ôï GD image library, åðéôñåðüìåíá öïñìÜ åßíáé ìüíï ôá JPEG êáé PNG.',
    'invalid_image' => 'Ç öùôïãñáößá ðïõ áíåâÜóáôå åßíáé ðñïâëçìáôéêÞ Þ åëåéðÞò.',
    'resize_failed' => 'Äåí Þôáí äõíáôüí íá äçìéïõñãçèåß thumbnail Þ åéêüíá ìåéùìÝíïõ ìåãÝèïõò.',
    'no_img_to_display' => 'Êáììßá åéêüíá ðñïò åìöÜíéóç',
    'non_exist_cat' => 'Ç åðéëåãìÝíç êáôçãïñßá äåí õðÜñ÷åé',
    'orphan_cat' => 'Ç êáôçãïñßá äåí Ý÷åé äçìéïõñãü, åêôåëåß ôïí category manager ãéá íá äéïñèþóåé ôï ðñüâëçìá.',
    'directory_ro' => 'Ï êáôÜëïãïò \'%s\' äåí åßíáé äéáèÝóéìïò ãéá ôñïðïðïßçóç, ïé öùôïãñáößåò äåí ìðïñïýí íá äéáãñáöïýí',
    'non_exist_comment' => 'Ôï åðéëåãìÝíï ó÷üëéï äåí õðÜñ÷åé.',
    'pic_in_invalid_album' => 'Ç öùôïãñáößá åßíáé óå áíýðáñêôï Üëìðïõì (%s)!?',
    'banned' => 'Å÷åôå áðïêëåéóôåß áðü áõôü ôï site.',
    'not_with_udb' => 'ÁõôÞ ç ëåéôïõñãßá åßíáé áðåíåñãïðïéçìÝíç óôï Coppermine ãéáôß åßíáé áëëçëåðéäñáóôéêÞ ìå ôï software ôïõ öüñïõì. Ç áõôü ðïõ ðñïóðáèåßôå íá êÜíåôå äåí õðïóôçñßæåôáé óôçí ðáñïýóá äéáìüñöùóç, Þ ôçí ëåéôïõñãßá èá ðñÝðåé íá ôçí ÷åéñßæåôáé ôï ßäéï ôï öüñïõì.',
    'members_only' => 'This function is for members only, please join.', // changed in cpg1.2.0nuke
    'mustbe_god' => 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function'
    ); 
// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //
$lang_main_menu = array('alb_list_title' => 'Ìåôáêßíçóç óôçí ëßóôá ôùí Üëìðïõì',
    'alb_list_lnk' => 'Ëßóôá ôùí Üëìðïõì',
    'my_gal_title' => 'Ìåôáêßíçóç óôo ðñïóùðéêü öþôï Üëìðïõì',
    'my_gal_lnk' => 'Ôï öþôï Üëìðïõì ìïõ',
    'my_prof_lnk' => 'Ôï ðñïößë ìïõ',
    'adm_mode_title' => 'Ëåéôïõñãßåò äéá÷åßñçóçò',
    'adm_mode_lnk' => 'ÊáôÜóôáóç äéá÷åßñçóçò',
    'usr_mode_title' => 'Ëåéôïõñãßåò ÷ñÞóôç',
    'usr_mode_lnk' => 'ÊáôÜóôáóç ÷ñÞóôç',
    'upload_pic_title' => 'ÐñïóèÞêç öùôïãñáößáò óå Üëìðïõì',
    'upload_pic_lnk' => 'ÐñïóèÞêç öùôïãñáößáò',
    'register_title' => 'Äçìéïõñãßá ëïãáñéáóìïý',
    'register_lnk' => 'ÅããñáöÞ',
    'login_lnk' => 'Åßóïäïò',
    'logout_lnk' => 'Åîïäïò',
    'lastup_lnk' => 'Ôåëåõôáßåò ðñïóèÞêåò',
    'lastcom_lnk' => 'Ôåëåõôáßá ó÷üëéá',
    'topn_lnk' => 'Ðåñéóóüôåñåò åìöáíßóåéò',
    'toprated_lnk' => 'Õøçëüôåñç âáèìïëïãßá',
    'search_lnk' => 'ÁíáæÞôçóç',
    'fav_lnk' => 'Ôá áãáðçìÝíá ìïõ',
    );

$lang_gallery_admin_menu = array('upl_app_lnk' => 'Åãêñéóç ðñïóèÞêçò',
    'config_lnk' => 'Ñõèìßóåéò',
    'albums_lnk' => 'Áëìðïõì',
    'categories_lnk' => 'Êáôçãïñßåò',
    'users_lnk' => '×ñÞóôåò',
    'groups_lnk' => 'ÏìÜäåò',
    'comments_lnk' => 'Ó÷üëéá',
    'searchnew_lnk' => 'ÐñïóèÞêç ðëÞèïõò öùôïãñáöéþí',
    'util_lnk' => 'ÁëëáãÞ ìåãÝèïõò öùôïãñáöéþí',
    'ban_lnk' => 'Áðïêëåéóìüò ÷ñçóôþí',
    );

$lang_user_admin_menu = array('albmgr_lnk' => 'Äçìéïõñãßá / ôáîéíüìçóç Üëìðïõì',
    'modifyalb_lnk' => 'Ôñïðïðïßçóç ôùí Üëìðïõì',
    'my_prof_lnk' => 'Ôï ðñïößë ìïõ',
    );

$lang_cat_list = array('category' => 'Êáôçãïñßá',
    'albums' => 'Aëìðïõì',
    'pictures' => 'Öùôïãñáößåò',
    );

$lang_album_list = array('album_on_page' => '%d Üëìðïõì óå %d óåëßäá(åò)'
    );

$lang_thumb_view = array('date' => 'ÇÌ/ÍÉÁ',
    'name' => 'ÏÍÏÌÁ ÁÑ×ÅÉÏÕ',
    'title' => 'ÔÉÔËÏÓ',
    'sort_da' => 'Óôïß÷éóç áðü ðáëáéüôåñç ðñïò íåüôåñç çìåñïìçíßá',
    'sort_dd' => 'Óôïß÷éóç áðü íåüôåñç ðñïò ðáëáéüôåñç çìåñïìçíßá',
    'sort_na' => 'Óôïß÷éóç áëöáâçôéêÜ áýîïõóá',
    'sort_nd' => 'Óôïß÷éóç áëöáâçôéêÜ öèßíïõóá',
    'sort_ta' => 'Óôïß÷éóç ìå ôßôëï áýîïõóá',
    'sort_td' => 'Óôïß÷éóç ìå ôßôëï öèßíïõóá',
    'pic_on_page' => '%d öùôïãñáößá(åò) óå %d óåëßäá(åò)',
    'user_on_page' => '%d ÷ñÞóôçò(åò) óå %d óåëßäá(åò)',
    'sort_ra' => 'Sort by rating ascending', // new in cpg1.2.0nuke
    'sort_rd' => 'Sort by rating descending', // new in cpg1.2.0nuke
    'rating' => 'RATING', // new in cpg1.2.0nuke
    'sort_title' => 'Sort pictures by:', // new in cpg1.2.0nuke
    );

$lang_img_nav_bar = array('thumb_title' => 'ÅðéóôñïöÞ óôçí óåëßäá ìå ôá thumbnail',
    'pic_info_title' => 'ÅìöÜíéóç/áðüêñõøç ðëçñïöïñéþí öùôïãñáößáò',
    'slideshow_title' => 'Slideshow',
    'slideshow_disabled' => 'e-cards are disabled', // new in cpg1.2.0nuke
    'slideshow_disabled_msg' => $lang_errors['members_only'], // new in cpg1.2.0nuke
    'ecard_title' => 'ÁðïóôïëÞ áõôÞò ôçò åéêüíáò óáí çëåêôñïíéêÞ êÜñôá',
    'ecard_disabled' => 'Ïé çëåêôñïíéêÝò êÜñôåò Ý÷ïõí áðåíåñãïðïéçèåß',
    'ecard_disabled_msg' => 'Äåí óáò åðéôñÝðåôå íá óôåßëåôå çëåêôñïíéêÝò êÜñôåò',
    'prev_title' => 'ÅìöÜíéóç ðñïçãïýìåíçò öùôïãñáößáò',
    'next_title' => 'ÅìöÜíéóç åðüìåíçò öùôïãñáößáò',
    'pic_pos' => 'ÖÙÔÏÃÑÁÖÉÁ %s/%s',
    'no_more_images' => 'There are no more images in this galley', // new in cpg1.2.0nuke
    'no_less_images' => 'This is the first image in the gallery', // new in cpg1.2.0nuke
    );

$lang_rate_pic = array('rate_this_pic' => 'ÂáèìïëïãÞóôå áõôÞí ôçí öùôïãñáößá ',
    'no_votes' => '(×ùñßò øÞöï áêüìá)',
    'rating' => '(ôùñéíÞ âáèìïëïãßá : %s / 5 ìå %s øÞöïõò)',
    'rubbish' => '×Üëéá',
    'poor' => 'ÊáêÞ',
    'fair' => 'ÌÝôñéá',
    'good' => 'ÊáëÞ',
    'excellent' => 'Áøïãç',
    'great' => 'ÊáôáðëçêôéêÞ',
    );
// ------------------------------------------------------------------------- //
// File include/exif.inc.php
// ------------------------------------------------------------------------- //
// void
// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //
$lang_cpg_die = array(
    INFORMATION => $lang_info,
    ERROR => $lang_error,
    CRITICAL_ERROR => 'Critical error',
    'file' => 'Áñ÷åßï: ',
    'line' => 'ÃñáììÞ: ',
    );

$lang_display_thumbnails = array('filename' => 'Ïíïìá áñ÷åßïõ : ',
    'filesize' => 'ÌÝãåèïò áñ÷åßïõ : ',
    'dimensions' => 'ÄéáóôÜóåéò : ',
    'date_added' => 'Çìåñïìçíßá ðñïóèÞêçò : '
    );

$lang_get_pic_data = array('n_comments' => '%s ó÷üëéá',
    'n_views' => '%s åìöáíßóåéò',
    'n_votes' => '(%s øÞöïé)'
    );
// ------------------------------------------------------------------------- //
// File include/init.inc.php
// ------------------------------------------------------------------------- //
// void
// ------------------------------------------------------------------------- //
// File include/picmgmt.inc.php
// ------------------------------------------------------------------------- //
// void
// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array('Exclamation' => 'ÅðåîÞãçóç',
        'Question' => 'Åñþôçóç',
        'Very Happy' => 'Ðïëý ÷áñïýìåíïò',
        'Smile' => '×áìüãåëï',
        'Sad' => 'ËõðçìÝíïò',
        'Surprised' => 'Åêðëçêôïò',
        'Shocked' => 'ÓïêáñéóìÝíïò',
        'Confused' => 'ÌðåñäåìÝíïò',
        'Cool' => 'Cool',
        'Laughing' => 'Ãåëáóôüò',
        'Mad' => 'Ôñåëüò',
        'Razz' => 'Razz',
        'Embarassed' => 'ÍôñïðéáóìÝíïò',
        'Crying or Very sad' => 'ÊëáìÝíïò',
        'Evil or Very Mad' => 'Äéáâïëéêüò',
        'Twisted Evil' => 'ÄéáâïëåìÝíïò',
        'Rolling Eyes' => 'ÃõñéóôÜ ìÜôéá',
        'Wink' => 'Wink',
        'Idea' => 'IäÝá',
        'Arrow' => 'ÂÝëïò',
        'Neutral' => 'ÏõäÝôåñïò',
        'Mr. Green' => 'Mr. ÐñÜóéíïò',
        );
// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //
// void
// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) $lang_admin_php = array(0 => 'Åãêáôáëåßðïíôáò ôéò ëåéôïõñãßåò äéá÷åßñçóçò...',
        1 => 'Åéóïäïò óôéò ëåéôïõñãßåò äéá÷åßñçóçò...',
        );
// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) $lang_albmgr_php = array('alb_need_name' => 'Ôá Üëìðïõì ðñÝðåé íá Ý÷ïõí üíïìá !',
        'confirm_modifs' => 'Åéóôå óßãïõñïò ðùò èÝëåôå íá êÜíåôå áõôÝò ôéò áëëáãÝò ?',
        'no_change' => 'Äåí êÜíáôå êáìßá áëëáãÞ !',
        'new_album' => 'NÝï Üëìðïõì',
        'confirm_delete1' => 'Åéóôå óßãïõñïò ðùò èÝëåôå íá äéáãñÜøåôå áõôü ôï Üëìðïõì ?',
        'confirm_delete2' => '\nÏëåò ïé öùôïãñáößåò êáé ôá ó÷üëéá ðïõ ðåñéÝ÷ïíôáé èá ÷áèïýí !',
        'select_first' => 'ÅðéëÝîôå Ýíá áëìðïõì ðñþôá',
        'alb_mrg' => 'Äéá÷åßñçóç Aëìðïõì',
        'my_gallery' => '* Ôï öþôï Üëìðïõì ìïõ *',
        'no_category' => '* ×ùñßò êáôçãïñßá *',
        'delete' => 'ÄéáãñáöÞ',
        'new' => 'NÝï',
        'apply_modifs' => 'ÅöáñìïãÞ áëëáãþí',
        'select_category' => 'Select category',
        );
// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) $lang_catmgr_php = array('miss_param' => 'Ïé ðáñÜìåôñïé ðïõ áðáéôïýíôáé ãéá \'%s\'ëåéôïõñãßá äåí äüèçêáí !',
        'unknown_cat' => 'Ç åðéëåãìÝíç êáôçãïñßá äåí õðÜñ÷åé óôçí database',
        'usergal_cat_ro' => 'Ôá öþôï Üëìðïõì ôùí ÷ñçóôþí äåí ìðïñïýí íá äéáãñáöïýí !',
        'manage_cat' => 'Äéá÷åßñçóç êáôçãïñéþí',
        'confirm_delete' => 'Åßóôå óßãïõñïò ðùò èÝëåôå íá äéáãñÜøåôå áõôÞí ôçí êáôçãïñßá',
        'category' => 'Êáôçãïñßá',
        'operations' => 'Ëåéôïõñãßåò',
        'move_into' => 'Måôáêßíçóç óå',
        'update_create' => 'ÁíáíÝùóç/Äçìéïõñãßá êáôçãïñßáò',
        'parent_cat' => 'Äçìéïõñãüò êáôçãïñßáò',
        'cat_title' => 'Ôßôëïò êáôçãïñßáò',
        'cat_desc' => 'ÐåñéãñáöÞ êáôçãïñßáò'
        );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
if (defined('CONFIG_PHP')) $lang_config_php = array('title' => 'Ñõèìßóåéò',
        'restore_cfg' => 'ÅðáíáöïñÜ áñ÷éêþí ñõèìßóåùí',
        'save_cfg' => 'ÁðïèÞêåõóç íÝùí ñõèìßóåùí',
        'notes' => 'Óçìåéþóåéò',
        'info' => 'Ðëçñïöïñßåò',
        'upd_success' => 'Ïé ñõèìßóåéò ôïõ Coppermine áíáíåþèçêáí',
        'restore_success' => 'Ïé ðñïåãêáôåóôçìÝíåò ñõèìßóåéò ôïõ Coppermine åðáíáöÝñèçêáí',
        'name_a' => 'Áõîùí üíïìá',
        'name_d' => 'Öèßíùí üíïìá',
        'title_a' => 'Áýîùí ôßôëïò',
        'title_d' => 'Öèßíùí ôßôëïò',
        'date_a' => 'Áõîïõóá çìåñïìçíßá',
        'date_d' => 'Öèßíïõóá çìåñïìçíßá',
        'rating_a' => 'Rating ascending', // new in cpg1.2.0nuke
        'rating_d' => 'Rating descending', // new in cpg1.2.0nuke
        'th_any' => 'Max Aspect',
        'th_ht' => 'Height',
        'th_wd' => 'Width',
        );
// start left side interpretation
if (defined('CONFIG_PHP')) $lang_config_data = array(
        // General settings
        'ÃåíéêÝò åðéëïãÝò',
        array(
            'Ïíïìá ãêÜëåñé', 'gallery_name', 0),
        array(
            'ÐåñéãñáöÞ öþôï Üëìðïõì', 'gallery_description', 0),
        array(
            'Å-mail äéá÷åéñéóôÞ ôïõ öþôï Üëìðïõì', 'gallery_admin_email', 0),
        array(
            'Äéåýèõíóç ðáñáëÞðôç ãéá \'Äåßôå ðåñéóóüôåñåò öùôïãñáößåò\' äéáóýíäåóç óôéò çëåêôñïíéêÝò êÜñôåò', 'ecards_more_pic_target', 0),
        array(
            'Ãëþóóá', 'lang', 5),
// for postnuke change
        array('ÈÝìá', 'cpgtheme', 6),
        array(
            'Page Specific Titles instead of >Coppermine', 'nice_titles', 1), 
        array('Show blocks on the right', 'right_blocks', 1), // new 1.2.2
        // 'Album list view',
        'ÅìöÜíéóç Ëßóôáò Áëìðïõì',
        array(
            'ÐëÜôïò êõñßùò ðßíáêá (ðßîåë Þ %)', 'main_table_width', 0),
        array(
            'ÐëÞèïò õðïêáôçãïñéþí ðñïò åìöÜíéóç', 'subcat_level', 0),
        array(
            'ÐëÞèïò Üëìðïõì ðñïò åìöÜíéóç', 'albums_per_page', 0),
        array(
            'ÐëÞèïò óôçëþí ãéá ôçí ëßóôá ôùí Üëìðïõì', 'album_list_cols', 0),
        array(
            'ÌÝãåèïò ôùí thumbnails óå ðßîåë', 'alb_list_thumb_size', 0),
        array(
            'Ðåñéå÷üìåíï ôçò êåíôñéêÞò óåëßäáò', 'main_page_layout', 0),
        array(
            'ÅìöÜíéóç ðñþôïõ åðéðÝäïõ thumbnails ôïõ Üëìðïõì óôéò êáôçãïñßåò', 'first_level', 1), 
        // 'Thumbnail view',
        'ÅìöÜíéóç Thumbnail',
        array(
            'ÐëÞèïò óôçëþí óôçí óåëßäá ôùí thumbnail', 'thumbcols', 0),
        array(
            'ÐëÞèïò ãñáììþí óôçí óåëßäá ôùí thumbnail', 'thumbrows', 0),
        array(
            'ÌÝãéóôï ðëÞèïò tabs ãéá åìöÜíéóç', 'max_tabs', 0),
        array(
            'ÅìöÜíéóç åíóùìáôùìÝíïõ ó÷üëéïõ (åðéðñüóèåôá ôïõ ôßôëïõ) êÜôù áðü ôï thumbnail', 'caption_in_thumbview', 1),
        array(
            'ÅìöÜíéóç ðëÞèïõò ó÷üëéùí êÜôù áðü ôï thumbnail', 'display_comment_count', 1),
        array(
            'ÐñïåðéëïãÞ ñýèìéóçò óôïß÷çóçò ãéá ôéò öùôïãñáößåò', 'default_sort_order', 3),
        array(
            'ÅëÜ÷éóôï ðëÞèïò øÞöùí ãéá ìéá öùôïãñáößá ãéá íá åìöáíéóôåß áõôÞ óôçí ëßóôá ìå ôçí \'top-rated\' .', 'min_votes_for_rating', 0),
        array(
            'Alts and title tags of thumbnail show title and keyword instead of picinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
        // 'Image view &amp; Comment settings',
        'ÅìöÜíéóç åéêüíùí &amp; Ñõèìßóåéò ó÷üëéùí',
        array(
            'ÐëÜôïò ðßíáêá ãéá åìöÜíéóç öùôïãñáöéþí (ðßîåë Þ %)', 'picture_table_width', 0),
        array(
            'Íá åìöáíßæïíôáé ïé ðëçñïöïñßåò ôùí öùôïãñáöéþí ðÜíôá?', 'display_pic_info', 1),
        array(
            'ÖéëôñÜñéóìá áðáãïñåõìÝíùí ëÝîåùí óôá ó÷üëéá', 'filter_bad_words', 1),
        array(
            'Íá åðéôñáðïýí ïé öáôóïýëåò óôá ó÷üëéá', 'enable_smilies', 1),
        array(
            'Allow several consecutive comments on one pic from the same user', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
        array(
            'Email site admin upon comment submission' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
        array(
            'MÝãéóôï ìÞêïò ãéá ôçí ðåñéãñáöÞ ìéáò öùôïãñáößáò', 'max_img_desc_length', 0),

        array(
            'MÝãéóôï ðëÞèïò ÷áñáêôÞñùí áíÜ ëÝîç', 'max_com_wlength', 0),
        array(
            'MÝãéóôïò áñéèìüò ãñáììþí áíÜ ó÷üëéï', 'max_com_lines', 0),
        array(
            'MÝãéóôï ìÞêïò ó÷ïëßïõ', 'max_com_size', 0),
        array(
            'ÅìöÜíéóç film strip', 'display_film_strip', 1),
        array(
            'Áñéèìüò áíôéêåéìÝíùí ìÝóá óôï film strip', 'max_film_strip_items', 0),
        array(
            'Allow viewing of full size pic by anonymous', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
        array('Number of days between being able to vote on the same image','keep_votes_time',0), // new in cpg1.2.2c nuke
//'Pictures and thumbnails settings',
        'Põèìßóåéò öùôïãñáöéþí êáé thumbnails',
        array(
            'Ðïéüôçôá ôùí JPEG áñ÷åßùí', 'jpeg_qual', 0),
        array(
            'ÌÝãéóôç äéÜóôáóç ôïõ thumbnail <b>*</b>', 'thumb_width', 0),
        array(
            '×ñÞóç äéÜóôáóçò ( ðëÜôïò Þ ýøïò Þ ÌÝãéóôç áíáëïãßá ãéá ôï thumbnail )<b>*</b>', 'thumb_use', 7),
        array(
            'Äçìéïõñãßá åíäéÜìåóùí öùôïãñáöéþí', 'make_intermediate', 1),
        array(
            'MÝãéóôï ðëÜôïò Þ ýøïò åíäéÜìåóçò öùôïãñáößáò <b>*</b>', 'picture_width', 0),
        array(
            'MÝãéóôï ìÝãåèïò ãéá ôéò öùôïãñáößåò ãéá ðñïóèÞêç (KB)', 'max_upl_size', 0),
        array(
            'MÝãéóôï ðëÜôïò Þ ýøïò ãéá ôéò öùôïãñáößåò ãéá ðñïóèÞêç (ðßîåë)', 'max_upl_width_height', 0), 
        array('Allow multiple Files to be upload with same file name', 'samename', 1), 
        // 'User settings',
        'Ñõèìßóåéò ÷ñçóôþí',
        array(
            'ÅðéôñÝðåôå ç åããñáöÞ íÝïõ ÷ñÞóôç', 'allow_user_registration', 1),
        array(
            'Ç åããñáöÞ íÝïõ ÷ñÞóôç íá áðáéôåß åðáëÞèåõóç email', 'reg_requires_valid_email', 1),
        array(
            'ÅðéôñÝðåôå äýï ÷ñÞóôåò íá Ý÷ïõí êïéíÞ äéåýèõíóç email', 'allow_duplicate_emails_addr', 1),
        array(
            'Ïé ÷ñÞóôåò ìðïñïýí íá Ý÷ïõí ðñïóùðéêÜ Üëìðïõì', 'allow_private_albums', 1), 
        array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',
        'Custom ðåäßá ãéá ðåñéãñáöÞ ôùí öùôïãñáöéþí (áöÞóôå êåíü åáí äåí èá ôï ÷ñçóéìïðïéÞóåôå)',
        array(
            'Ïíïìá 1ïõ ðåäßïõ', 'user_field1_name', 0),
        array(
            'Ïíïìá 2ïõ ðåäßïõ', 'user_field2_name', 0),
        array(
            'Ïíïìá 3ïõ ðåäßïõ', 'user_field3_name', 0),
        array(
            'Ïíïìá 4ïõ ðåäßïõ', 'user_field4_name', 0), 
        // 'Pictures and thumbnails advanced settings',
        'ÅîéäåéêåõìÝíåò ñõèìßóåéò öùôïãñáöéþí êáé thumbnails',
        array(
            'ÅìöÜíéóç åéêïíéäßïõ éäéùôéêïý Üëìïõì óôïí åðéóêÝðôç', 'show_private', 1),
        array(
            'ÁðáãïñåõìÝíïé ÷áñáêôÞñåò óå üíïìá áñ÷åßïõ', 'forbiden_fname_char', 0),
        array(
            'ÄåêôÝò åðåêôÜóåéò áñ÷åßùí ãéá ôéò ðñïóôéèÝìåíåò öùôïãñáößåò', 'allowed_file_extensions', 0),
        array(
            'MÝèïäïò ãéá áëëáãÞ ìåãÝèïõò öùôïãñáößáò', 'thumb_method', 2),
        array(
            'ÄéáäñïìÞ ãéá ôçí åöáñìïãÞ ImageMagick / netpbm \'convert\' (ðáñÜäåéãìá /usr/bin/X11/)', 'impath', 0),
        array(
            'Äåêôïß ôýðïé áñ÷åßùí (ìüíï ãéá ôï ImageMagick)', 'allowed_img_types', 0),
        array(
            'ÅðéëïãÝò åíôïëþí ãñáììÞò ãéá ôï ImageMagick', 'im_options', 0),
        array(
            'ÁíÜãíùóç ðëçñïöïñéþí EXIF óôá JPEG áñ÷åßá', 'read_exif_data', 1),
        array(
            'ÊáôÜëïãïò Üëìðïõì <b>*</b>', 'fullpath', 0),
        array(
            'Ï êáôÜëïãïò ãéá ôéò öùôïãñáößåò ôùí ÷ñçóôþí <b>*</b>', 'userpics', 0),
        array(
            'Ðñüèåìá ôùí åíäéÜìåóùí öùôïãñáöéþí <b>*</b>', 'normal_pfx', 0),
        array(
            'Ðñüèåìá ôùí thumbnails <b>*</b>', 'thumb_pfx', 0),
        array(
            'ÐñïåãêáôáóôçìÝíåò ñõèìßóåéò ãéá êáôáëüãïõò', 'default_dir_mode', 0),
        array(
            'ÐñïåãêáôáóôçìÝíåò ñõèìßóåéò ãéá öùôïãñáößåò', 'default_file_mode', 0),
        array(
            'Picinfo display filename', 'picinfo_display_filename', '1'), // new in cpg1.2.0nuke
        array(
            'Picinfo display album name', 'picinfo_display_album_name', '1'), // new in cpg1.2.0nuke
        array(
            'Picinfo display_file_size', 'picinfo_display_file_size', '1'), // new in cpg1.2.0nuke
        array(
            'Picinfo display_dimensions', 'picinfo_display_dimensions', '1'), // new in cpg1.2.0nuke
        array(
            'Picinfo display_count_displayed', 'picinfo_display_count_displayed', '1'), // new in cpg1.2.0nuke
        array(
            'Picinfo display_URL', 'picinfo_display_URL', '1'), // new in cpg1.2.0nuke
        array(
            'Picinfo display URL as bookmark link', 'picinfo_display_URL_bookmark', '1'), // new in cpg1.2.0nuke
        array(
            'Picinfo display fav album link', 'picinfo_display_favorites', '1'), // new in cpg1.2.0nuke
        // 'Cookies &amp; Charset settings',
        'Ñõèìßóåéò ãéá ôá Cookies &amp; êáé ôéò êùäéêïðïéÞóåéò ÷áñáêôÞñùí',
        array(
            'Ïíïìá ôïõ cookie ðïõ ÷ñçóéìïðïéåß ôï ðñüãñáììá', 'cookie_name', 0),
        array(
            'ÄéáäñïìÞ ãéá ôï cookie ðïõ ÷ñçóéìïðïéåß ôï ðñüãñáììá', 'cookie_path', 0),
        array(
            'Êùäéêïðïßçóç ÷áñáêôÞñùí', 'charset', 4), 
        // 'Miscellaneous settings',
        'ËïéðÝò ñõèìßóåéò',
        array(
            'Eíåñãïðïßçóç ëåéôïõñãßáò åíôïðéóìïý ëáèþí', 'debug_mode', 1),
        array(
'Enable advanced debug mode', 'advanced_debug_mode', 1), // new in cpg1.2.0nuke
array(
'Show Coppermine Update Alert to Admin', 'showupdate', 1), // new 1.2.2
        '<br /><div align="center">(*) Ôá ðåäßá ìå * äåí ðñÝðåé íá áëëá÷ôïýí åáí Ý÷åôå Þäç öùôïãñáößåò óôá áëìðïõì óáò.</div><br />'
        );
// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) $lang_db_input_php = array('empty_name_or_com' => 'ÐñÝðåé íá ãñÜøåôå ôï üíïìá óáò êáé êÜðïéï ó÷üëéï',
        'com_added' => 'Ôï ó÷üëéï óáò ðñïóôÝèçêå',
        'alb_need_title' => 'ÐñÝðåé íá äþóåôå êÜðïéï ôßôëï ãéá ôï Üëìðïõì !',
        'no_udp_needed' => 'Äåí ÷ñåéÜæåôáé åíçìÝñùóç.',
        'alb_updated' => 'Tï Üëìðïõì åíçìåñþèçêå',
        'unknown_album' => 'Ôï åðéëåãìÝíï Üëìðïõì äåí õðÜñ÷åé, Þ äåí óáò åðéôñÝðåôå íá ðñïóèÝóåôå öùôïãñáößåò óå áõôü',
        'no_pic_uploaded' => 'Äåí ðñïóôÝèçêå öùôïãñáößá !<br /><br />Åáí åß÷áôå åðéëÝîåé êÜðïéá íá ðñïóèÝóåôå, åëÝíîôå áí ï äéáêïìéóôÞò åðéôñÝðåé ðñïóèÞêåò...',
        'err_mkdir' => 'Áðïôõ÷ßá íá äçìéïõñãÞóåé ôïí êáôÜëïãï %s !',
        'dest_dir_ro' => 'Ï êáôÜëïãïò %s óôïí ïðïßï ðñïóðáèÞôå íá ãñÜøåôå, äåí ìðïñåß íá áëëá÷ôåß áðü ôï ðñüãñáììá !',
        'err_move' => 'Äåí óôÜèçêå äõíáôÞ ç ìåôáêßíçóç áðü ôïí %s óôïí %s !',
        'err_fsize_too_large' => 'Tï ìÝãåèïò ôçò öùôïãñáößáò ðïõ áíåâÜæåôå åßíáé ðïëý ìåãÜëï (ìÝãéóôï åðéôñåðüìåíï åßíáé %s x %s) !',
        'err_imgsize_too_large' => 'Tï ìÝãåèïò ôïõ áñ÷åßïõ ðïõ áíåâÜæåôå åßíáé ðïëý ìåãÜëï (ìÝãéóôï åðéôñåðüìåíï åßíáé %s KB) !',
        'err_invalid_img' => 'Tï áñ÷åßï ðïõ áíåâÜæåôå, äåí åßíáé åãêõñï óáí öùôïãñáößá!',
        'allowed_img_types' => 'Ìðïñåßôå íá áíåâÜóåôå ìüíï %s öùôïãñáößåò.',
        'err_insert_pic' => 'Ç öùôïãñáößá \'%s\' äåí ìðïñåß íá ðñïóôåèåß óôï Üëìðïõì ',
        'upload_success' => 'Ç öùôïãñáößá óáò ðñïóôÝèçêå åðéôõ÷þò<br /><br />Èá åßíáé äéáèÝóéìç ìåôÜ ôçí Ýãêñéóç ôïõ äéá÷åéñéóôÞ.',
        'info' => 'Ðëçñïöïñßåò',
        'com_added' => 'Ôï ó÷üëéï ðñïóôÝèçêå',
        'alb_updated' => 'Ôï Üëìðïõì áíáíåþèçêå',
        'err_comment_empty' => 'Ôï ó÷üëéï óáò äåí Ý÷åé ðåñéå÷üìåíï !',
        'err_invalid_fext' => 'Ìüíï ôá áñ÷åßá ìå ôéò áêüëïõèåò åðåêôÜóåéò åðéôñÝðïíôáé : <br /><br />%s.',
        'no_flood' => 'Óõãíþìç áëëÜ åßóôå áõôüò ðïõ Ýãñáøå ôï ôåëåõôáßï ó÷üëéï ãéá áõôÞí ôçí öùôïãñáößá<br /><br />ÔñïðïðïéÞóôå ôï ó÷üëéï ðïõ äçìïóéåýóáôå åáí èÝëåôå íá ôï áëëÜîåôå',
        'redirect_msg' => 'Ìåôáöåñüóáóôå...<br /><br /><br />ÐáôÞóôå \'CONTINUE\' åÜí ç óåëßäá äåí áíáíåùèåß áõôüìáôá',
        'upl_success' => 'Ç öùôïãñáößá óáò ðñïóôÝèçêå åðéôõ÷þò',
        );
// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) $lang_delete_php = array('caption' => 'ËåæÜíôá',
        'fs_pic' => 'åéêüíá ðëÞñïõò ìåãÝèïõò',
        'del_success' => 'äéáãñÜöç åðéôõ÷þò',
        'ns_pic' => 'öùôïãñáößá êáíïíéêïý ìåãÝèïõò',
        'err_del' => 'äåí ìðïñåß íá äéáãñáöåß',
        'thumb_pic' => 'thumbnail',
        'comment' => 'ó÷üëéï',
        'im_in_alb' => 'öùôïãñáößá óå Üëìðïõì',
        'alb_del_success' => 'Aëìðïõì \'%s\' äéåãñÜöåé',
        'alb_mgr' => 'Äéá÷åßñçóç Aëìðïõì',
        'err_invalid_data' => 'Ìç Ýãêõñá äåäïìÝíá ðáñåëÞöèçóáí óôï \'%s\'',
        'create_alb' => 'Äçìéïõñãßá Üëìðïõì \'%s\'',
        'update_alb' => 'ÁíáíÝùóç Üëìðïõì \'%s\' ìå ôßôëï \'%s\' êáé åõñåôÞñéï \'%s\'',
        'del_pic' => 'ÄéáãñáöÞ öùôïãñáößáò',
        'del_alb' => 'ÄéáãñáöÞ Üëìðïõì',
        'del_user' => 'ÄéáãñáöÞ ÷ñÞóôç',
        'err_unknown_user' => 'Ï åðéëåãìÝíïò ÷ñÞóôçò äåí õðÜñ÷åé !',
        'comment_deleted' => 'Ôï ó÷üëéï äéåãñÜöåé åðéôõ÷þò',
        );
// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //
// Void
// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')) {
    $lang_display_image_php = array('confirm_del' => 'Åßóôå óßãïõñïò ðùò èÝëåôå íá ÄÉÁÃÑÁØÅÔÅ áõôÞ ôçí öùôïãñáößá ? \\nÔá Ó÷üëéá åðßóçò èá äéáãñáöïýí.',
        'del_pic' => 'ÄÉÁÃÑÁÖÇ ÖÙÔÏÃÑÁÖÉÁÓ',
        'size' => '%s x %s ðßîåë',
        'views' => '%s öïñÝò',
        'slideshow' => 'Slideshow',
        'stop_slideshow' => 'ÔÅËÏÓ SLIDESHOW',
        'view_fs' => 'Click to view full size image',
        );

    $lang_picinfo = array('title' => 'Ðëçñïöïñßåò öùôïãñáößáò',
        'Filename' => 'Ïíïìá áñ÷åßïõ',
        'Album name' => 'Ïíïìá Üëìðïõì',
        'Rating' => 'Âáèìïëïãßá (%s øÞöïé)',
        'Keywords' => 'ËÝîåéò ÊëåéäéÜ',
        'File Size' => 'ÌÝãåèïò áñ÷åßïõ',
        'Dimensions' => 'ÄéáóôÜóåéò',
        'Displayed' => 'Åìöáíßóåéò',
        'Camera' => 'ÖùôïãñáöéêÞ Ìç÷áíÞ',
        'Date taken' => 'Çìåñïìçíßá ëÞøçò',
        'Aperture' => 'ÄéÜöñáãìá',
        'Exposure time' => '×ñüíïò Ýêèåóçò',
        'Focal length' => 'ÅóôéáêÞ áðüóôáóç',
        'Comment' => 'Ó÷üëéï',
        'addFav' => 'ÐñïóèÞêç óôá ÁãáðçìÝíá',
        'addFavPhrase' => 'ÁãáðçìÝíá',
        'remFav' => 'Áöáßñåóç áðü ôá ÁãáðçìÝíá',
        'Flash' => 'Öëáò',
        'ISOSpeedRatings' => 'ISO',
        'ExposureProgram' => 'Ðñüãñáììá Ýêèåóçò',
        'iptcTitle' => 'IPTC Title', // new in cpg1.2.0nuke
        'iptcCopyright' => 'IPTC Copyright', // new in cpg1.2.0nuke
        'iptcKeywords' => 'IPTC Keywords', // new in cpg1.2.0nuke
        'iptcCategory' => 'IPTC Category', // new in cpg1.2.0nuke
        'iptcSubCategories' => 'IPTC Sub Categories', // new in cpg1.2.0nuke
        'bookmark_page' => 'Bookmark Image', // new in cpg1.2.0nuke
        );

    $lang_display_comments = array('OK' => 'OK',
        'edit_title' => 'ÌåôáôñïðÞ ó÷üëéïõ',
        'confirm_delete' => 'Åßóôå óßãïõñïò ðùò èÝëåôå íá äéáãñÜøåôå áõôü ôï ó÷üëéï ?',
        'add_your_comment' => 'ÐñïóèÞêç ó÷üëéïõ',
        'name' => 'Ïíïìá',
        'comment' => 'Ó÷üëéï',
        'your_name' => 'Áíþíõìïò',
        );

    $lang_fullsize_popup = array('click_to_close' => 'ÐáôÞóôå óôçí åéêüíá ãéá íá êëåßóåôå áõôü ôï ðáñÜèõñï',
        );
} 
// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //
if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php = array('title' => 'Óôåßëôå ìéá çëåêôñïíéêÞ êÜñôá',
        'invalid_email' => '<b>Ðñïåéäïðïßçóç</b> : ç äéåýèõíóç e-mail äåí åßíáé åãêõñç !',
        'ecard_title' => 'Ìéá çëåêôñïíéêÞ êÜñôá áðü ôïí %s ãéá åóÜò',
        'view_ecard' => 'Åáí ç çëåêôñïíéêÞ êÜñôá äåí åìöáíéóôåß óùóôÜ, ðáôÞóáôå áõôÞí ôçí äéáóýíäåóç',
        'view_more_pics' => 'ÐáôÞóáôå áõôÞ ôçí äéáóýíäåóç ãéá íá äåßôå ðåñéóóüôåñåò öùôïãñáößåò !',
        'send_success' => 'Ç çëåêôñïíéêÞ óáò êÜñôá áðïóôÜëåé',
        'send_failed' => 'Óõãíþìç, áëëÜ ï äéáêïìéóôÞò äåí ìðïñåß íá óôåßëåé ôçí çëåêôñïíéêÞ óáò êÜñôá...',
        'from' => 'Áðü',
        'your_name' => 'ÔÏ üíïìá óáò',
        'your_email' => 'Ç äéåýèõíóç email óáò',
        'to' => 'Ðñïò',
        'rcpt_name' => 'Ïíïìá ðáñáëÞðôç',
        'rcpt_email' => 'Äéåýèõíóç email ðáñáëÞðôç',
        'greetings' => 'Ìå öéëéêïýò ÷áéñåôéóìïýò',
        'message' => 'ÌÞíõìá',
        );
// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //
if (defined('EDITPICS_PHP')) $lang_editpics_php = array('pic_info' => 'Ðëçñïöïñßåò&nbsp;öùôïãñáößáò',
        'album' => 'Aëìðïõì',
        'title' => 'Tßôëïò',
        'desc' => 'ÐåñéãñáöÞ',
        'keywords' => 'ËÝîåéò êëåéäéÜ',
        'pic_info_str' => '%sx%s - %sKB - %s åìöáíßóåéò - %s øÞöïé',
        'approve' => 'Åãêñéóç öùôïãñáößáò',
        'postpone_app' => 'Áñíçóç Ýãêñéóçò',
        'del_pic' => 'ÄéáãñáöÞ öùôïãñáößáò',
        'reset_view_count' => 'Ìçäåíéóìüò ìåôñçôÞ åìöáíßóåùí',
        'reset_votes' => 'Ìçäåíéóìüò øÞöùí',
        'del_comm' => 'ÄéáãñáöÞ ó÷üëéùí',
        'upl_approval' => 'Åãêñéóç ðñïóèÞêçò',
        'edit_pics' => 'ÌåôáôñïðÞ öùôïãñáößáò',
        'see_next' => 'ÅìöÜíéóç åðüìåíçò öùôïãñáößáò',
        'see_prev' => 'ÅìöÜíéóç ðñïçãïýìåíçò öùôïãñáößáò',
        'n_pic' => '%s öùôïãñáößåò',
        'n_of_pic_to_disp' => 'Áñéèìüò öùôïãñáöéþí ðñïò åìöÜíéóç',
        'apply' => 'ÅöáñìïãÞ ôñïðïðïéÞóåùí'
        );
// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array('group_name' 㸀 ✀케 �✀Ⰰഀ਀        ✀搀椀猀欀开焀甀漀琀愀✀ 㴀㸀 ✀쐀� ︀✀Ⰰഀ਀        ✀挀愀渀开爀愀琀攀✀ 㴀㸀 ✀찀ﴀ  � 豈�✀Ⰰഀ਀        ✀挀愀渀开猀攀渀搀开攀挀愀爀搀猀✀ 㴀㸀 ✀찀ﴀ  � � �✀Ⰰഀ਀        ✀挀愀渀开瀀漀猀琀开挀漀洀✀ 㴀㸀 ✀찀ﴀ  ﴀ ﰀ✀Ⰰഀ਀        ✀挀愀渀开甀瀀氀漀愀搀✀ 㴀㸀 ✀찀ﴀ  � 豈�✀Ⰰഀ਀        ✀挀愀渀开栀愀瘀攀开最愀氀氀攀爀礀✀ 㴀㸀 ✀찀ﴀ  � 豈ﰀ ︀ �✀Ⰰഀ਀        ✀愀瀀瀀氀礀✀ 㴀㸀 ✀씀� �豈✀Ⰰഀ਀        ✀挀爀攀愀琀攀开渀攀眀开最爀漀甀瀀✀ 㴀㸀 ✀쐀� � �✀Ⰰഀ਀        ✀搀攀氀开最爀漀甀瀀猀✀ 㴀㸀 ✀쐀� � �✀Ⰰഀ਀        ✀挀漀渀昀椀爀洀开搀攀氀✀ 㴀㸀 ✀퀀�Ⰰ ﰀ �  �Ⰰ  �  �  �  �    � 豈 尀✀씀�豈尀✀ ℀尀渀尀渀저�  � 㼀✀Ⰰഀ਀        ✀琀椀琀氀攀✀ 㴀㸀 ✀쐀� �豈 ︀✀Ⰰഀ਀        ✀愀瀀瀀爀漀瘀愀氀开㄀✀ 㴀㸀 ✀쐀⸀ 퀀⸀ � ⠀㄀⤀✀Ⰰഀ਀        ✀愀瀀瀀爀漀瘀愀氀开㈀✀ 㴀㸀 ✀퀀豈⸀ 퀀⸀ � ⠀㈀⤀✀Ⰰഀ਀        ✀渀漀琀攀㄀✀ 㴀㸀 ✀㰀戀㸀⠀㄀⤀㰀⼀戀㸀 퀀�  � ﰀ � �  �  �✀Ⰰഀ਀        ✀渀漀琀攀㈀✀ 㴀㸀 ✀㰀戀㸀⠀㈀⤀㰀⼀戀㸀 퀀�  � 豈ﰀ � �  �  �✀Ⰰഀ਀        ✀渀漀琀攀猀✀ 㴀㸀 ✀팀︀✀ഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 椀渀搀攀砀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀䤀一䐀䔀堀开倀䠀倀✀⤀⤀ 笀ഀ਀    ␀氀愀渀最开椀渀搀攀砀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀眀攀氀挀漀洀攀✀ 㴀㸀 ✀쨀豈� ℀✀ഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开愀氀戀甀洀开愀搀洀椀渀开洀攀渀甀 㴀 愀爀爀愀礀⠀✀挀漀渀昀椀爀洀开搀攀氀攀琀攀✀ 㴀㸀 ✀씀 � 豈 �  �   � 㼀 尀尀渀케  豈�   ﰀ  ﴀ⸀✀Ⰰഀ਀        ✀搀攀氀攀琀攀✀ 㴀㸀 ✀쐀준섀쌀턀섀혀윀✀Ⰰഀ਀        ✀洀漀搀椀昀礀✀ 㴀㸀 ✀퐀턀케퀀케퀀케준윀팀윀✀Ⰰഀ਀        ✀攀搀椀琀开瀀椀挀猀✀ 㴀㸀 ✀씀퀀씀츀씀턀쌀섀팀준섀 혀�퐀케쌀턀섀혀준�촀✀Ⰰഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开氀椀猀琀开挀愀琀攀最漀爀椀攀猀 㴀 愀爀爀愀礀⠀✀栀漀洀攀✀ 㴀㸀 ✀섀�✀Ⰰഀ਀        ✀猀琀愀琀㄀✀ 㴀㸀 ✀㰀戀㸀嬀瀀椀挀琀甀爀攀猀崀㰀⼀戀㸀 豈�  㰀戀㸀嬀愀氀戀甀洀猀崀㰀⼀戀㸀 �  㰀戀㸀嬀挀愀琀崀㰀⼀戀㸀 �  㰀戀㸀嬀挀漀洀洀攀渀琀猀崀㰀⼀戀㸀 ﰀⰀ  � � � 㰀戀㸀嬀瘀椀攀眀猀崀㰀⼀戀㸀 �✀Ⰰഀ਀        ✀猀琀愀琀㈀✀ 㴀㸀 ✀㰀戀㸀嬀瀀椀挀琀甀爀攀猀崀㰀⼀戀㸀 豈�  㰀戀㸀嬀愀氀戀甀洀猀崀㰀⼀戀㸀 Ⰰ  � � � 㰀戀㸀嬀瘀椀攀眀猀崀㰀⼀戀㸀 �✀Ⰰഀ਀        ✀砀砀开猀开最愀氀氀攀爀礀✀ 㴀㸀 ✀─猀尀✀猀 혀︀ �✀Ⰰഀ਀        ✀猀琀愀琀㌀✀ 㴀㸀 ✀㰀戀㸀嬀瀀椀挀琀甀爀攀猀崀㰀⼀戀㸀 豈�  㰀戀㸀嬀愀氀戀甀洀猀崀㰀⼀戀㸀 �  㰀戀㸀嬀挀漀洀洀攀渀琀猀崀㰀⼀戀㸀 ﰀⰀ  � � � 㰀戀㸀嬀瘀椀攀眀猀崀㰀⼀戀㸀 �✀ഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开氀椀猀琀开甀猀攀爀猀 㴀 愀爀爀愀礀⠀✀甀猀攀爀开氀椀猀琀✀ 㴀㸀 ✀쨀� 휀︀✀Ⰰഀ਀        ✀渀漀开甀猀攀爀开最愀氀✀ 㴀㸀 ✀쐀 � �    �  � �✀Ⰰഀ਀        ✀渀开愀氀戀甀洀猀✀ 㴀㸀 ✀─猀 �✀Ⰰഀ਀        ✀渀开瀀椀挀猀✀ 㴀㸀 ✀─猀 豈�⠀⤀✀ഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开氀椀猀琀开愀氀戀甀洀猀 㴀 愀爀爀愀礀⠀✀渀开瀀椀挀琀甀爀攀猀✀ 㴀㸀 ✀─猀 豈�✀Ⰰഀ਀        ✀氀愀猀琀开愀搀搀攀搀✀ 㴀㸀 ✀Ⰰ  � �  ─猀✀ഀ਀        ⤀㬀ഀ਀紀 ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 氀漀最椀渀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 一唀䰀䰀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 氀漀最漀甀琀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 一唀䰀䰀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 洀漀搀椀昀礀愀氀戀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀䴀伀䐀䤀䘀夀䄀䰀䈀开倀䠀倀✀⤀⤀ ␀氀愀渀最开洀漀搀椀昀礀愀氀戀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀甀瀀搀开愀氀戀开渀✀ 㴀㸀 ✀씀�豈 � ─猀✀Ⰰഀ਀        ✀最攀渀攀爀愀氀开猀攀琀琀椀渀最猀✀ 㴀㸀 ✀쌀� �✀Ⰰഀ਀        ✀愀氀戀开琀椀琀氀攀✀ 㴀㸀 ✀퐀� �✀Ⰰഀ਀        ✀愀氀戀开挀愀琀✀ 㴀㸀 ✀쨀� �✀Ⰰഀ਀        ✀愀氀戀开搀攀猀挀✀ 㴀㸀 ✀퀀� �✀Ⰰഀ਀        ✀愀氀戀开琀栀甀洀戀✀ 㴀㸀 ✀䄀 琀栀甀洀戀渀愀椀氀✀Ⰰഀ਀        ✀愀氀戀开瀀攀爀洀✀ 㴀㸀 ✀쐀︀  ﰀ  �✀Ⰰഀ਀        ✀挀愀渀开瘀椀攀眀✀ 㴀㸀 ✀퐀 � �  � ✀Ⰰഀ਀        ✀挀愀渀开甀瀀氀漀愀搀✀ 㴀㸀 ✀케 � ﴀ  � 豈�✀Ⰰഀ਀        ✀挀愀渀开瀀漀猀琀开挀漀洀洀攀渀琀猀✀ 㴀㸀 ✀케 � ﴀ  ﴀ ﰀ✀Ⰰഀ਀        ✀挀愀渀开爀愀琀攀✀ 㴀㸀 ✀케 � ﴀ  �  豈�✀Ⰰഀ਀        ✀甀猀攀爀开最愀氀✀ 㴀㸀 ✀혀︀ � ︀✀Ⰰഀ਀        ✀渀漀开挀愀琀✀ 㴀㸀 ✀⨀ 찀 � ⨀✀Ⰰഀ਀        ✀愀氀戀开攀洀瀀琀礀✀ 㴀㸀 ✀퐀 � � �✀Ⰰഀ਀        ✀氀愀猀琀开甀瀀氀漀愀搀攀搀✀ 㴀㸀 ✀퐀� �✀Ⰰഀ਀        ✀瀀甀戀氀椀挀开愀氀戀✀ 㴀㸀 ✀케 ⠀ﰀ �⤀✀Ⰰഀ਀        ✀洀攀开漀渀氀礀✀ 㴀㸀 ✀䴀ﰀ ︀✀Ⰰഀ਀        ✀漀眀渀攀爀开漀渀氀礀✀ 㴀㸀 ✀케 ⠀─猀⤀ Ⰰ �  �✀Ⰰഀ਀        ✀最爀漀甀瀀瀀开漀渀氀礀✀ 㴀㸀 ✀퐀 �  � 尀✀─猀尀✀ ✀Ⰰഀ਀        ✀攀爀爀开渀漀开愀氀戀开琀漀开洀漀搀椀昀礀✀ 㴀㸀 ✀쨀� �  �  � �豈⸀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀✀ 㴀㸀 ✀씀�豈 �✀ഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 爀愀琀攀瀀椀挀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀刀䄀吀䔀倀䤀䌀开倀䠀倀✀⤀⤀ ␀氀愀渀最开爀愀琀攀开瀀椀挀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀愀氀爀攀愀搀礀开爀愀琀攀搀✀ 㴀㸀 ✀팀︀ � � � � �  豈�✀Ⰰഀ਀        ✀爀愀琀攀开漀欀✀ 㴀㸀 ✀윀 �  � �✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 爀攀最椀猀琀攀爀⸀瀀栀瀀 ☀ 瀀爀漀昀椀氀攀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀刀䔀䜀䤀匀吀䔀刀开倀䠀倀✀⤀ 簀簀 搀攀昀椀渀攀搀⠀✀倀刀伀䘀䤀䰀䔀开倀䠀倀✀⤀⤀ 笀ഀ਀    ␀氀愀渀最开爀攀最椀猀琀攀爀开搀椀猀挀氀愀洀攀爀 㴀 㰀㰀㰀䔀伀吀ഀ਀퀀ﰀ   �  笀匀䤀吀䔀开一䄀䴀䔀紀  �  � �  � � � �  ﰀ ﰀⰀ � ﴀ  � � � ﰀ⸀ 쌀 ﰀ � ﰀ � ﰀ  ﴀ  ﰀ  猀椀琀攀 � ﰀ  �   ︀  �   ﰀ �⸀㰀戀爀 ⼀㸀ഀ਀㰀戀爀 ⼀㸀ഀ਀찀  ﰀⰀ 豈�   ﴀ 豈�Ⰰ 豈�Ⰰ �Ⰰ �Ⰰ � � � � � ﰀ  ︀  � ﰀ  �⸀ 섀� ﰀ  �  笀匀䤀吀䔀开一䄀䴀䔀紀 �  �豈  � �  � �  �  � ⸀ 팀 � � ﰀ � �  � �  豈�  � �豈⸀ 퀀ﰀ  � �  豈� �Ⰰ    � � 豈�  �   �  ﴀ   �  �豈 � 栀愀挀欀椀渀最  �  �  � ︀⸀㰀戀爀 ⼀㸀ഀ਀㰀戀爀 ⼀㸀ഀ਀섀ﰀ  猀椀琀攀 � 挀漀漀欀椀攀猀   ﴀ � �  � ⸀ 섀�  挀漀漀欀椀攀猀 ﴀ ﰀ  �  � �  �  �⸀ 윀 ﴀ 攀洀愀椀氀   � � ﰀ   �   �   �   쨀豈ﰀ ⸀㰀戀爀 ⼀㸀ഀ਀㰀戀爀 ⼀㸀ഀ਀씀� ✀팀豈︀✀ �豈Ⰰ � ﴀ  ﰀ⸀ഀ਀䔀伀吀㬀ഀ਀ഀ਀    ␀氀愀渀最开爀攀最椀猀琀攀爀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀瀀愀最攀开琀椀琀氀攀✀ 㴀㸀 ✀씀� �✀Ⰰഀ਀        ✀琀攀爀洀开挀漀渀搀✀ 㴀㸀 ✀케 �✀Ⰰഀ਀        ✀椀开愀最爀攀攀✀ 㴀㸀 ✀팀豈︀✀Ⰰഀ਀        ✀猀甀戀洀椀琀✀ 㴀㸀 ✀섀� �✀Ⰰഀ਀        ✀攀爀爀开甀猀攀爀开攀砀椀猀琀猀✀ 㴀㸀 ✀퐀 케 휀�  � � �Ⰰ ︀ � � �✀Ⰰഀ਀        ✀攀爀爀开瀀愀猀猀眀漀爀搀开洀椀猀洀愀琀挀栀✀ 㴀㸀 ✀케 ﴀ 쨀豈�  � �Ⰰ ︀ ��  �✀Ⰰഀ਀        ✀攀爀爀开甀渀愀洀攀开猀栀漀爀琀✀ 㴀㸀 ✀퐀 케 휀� �  � � ㈀ �✀Ⰰഀ਀        ✀攀爀爀开瀀愀猀猀眀漀爀搀开猀栀漀爀琀✀ 㴀㸀 ✀케 쨀豈ﰀ �  � � ㈀ �✀Ⰰഀ਀        ✀攀爀爀开甀渀愀洀攀开瀀愀猀猀开搀椀昀昀✀ 㴀㸀 ✀퐀 케 휀�   쨀豈ﰀ �  � �✀Ⰰഀ਀        ✀攀爀爀开椀渀瘀愀氀椀搀开攀洀愀椀氀✀ 㴀㸀 ✀윀 ﴀ 攀洀愀椀氀  � �✀Ⰰഀ਀        ✀攀爀爀开搀甀瀀氀椀挀愀琀攀开攀洀愀椀氀✀ 㴀㸀 ✀쨀� � � � � �   ﴀ 攀洀愀椀氀  ︀✀Ⰰഀ਀        ✀攀渀琀攀爀开椀渀昀漀✀ 㴀㸀 ✀쨀︀ ︀ �✀Ⰰഀ਀        ✀爀攀焀甀椀爀攀搀开椀渀昀漀✀ 㴀㸀 ✀픀豈� �✀Ⰰഀ਀        ✀漀瀀琀椀漀渀愀氀开椀渀昀漀✀ 㴀㸀 ✀퀀� �✀Ⰰഀ਀        ✀甀猀攀爀渀愀洀攀✀ 㴀㸀 ✀케 휀�✀Ⰰഀ਀        ✀瀀愀猀猀眀漀爀搀✀ 㴀㸀 ✀쨀豈ﰀ✀Ⰰഀ਀        ✀瀀愀猀猀眀漀爀搀开愀最愀椀渀✀ 㴀㸀 ✀츀︀  쨀豈ﰀ✀Ⰰഀ਀        ✀攀洀愀椀氀✀ 㴀㸀 ✀䔀洀愀椀氀✀Ⰰഀ਀        ✀氀漀挀愀琀椀漀渀✀ 㴀㸀 ✀퐀�✀Ⰰഀ਀        ✀椀渀琀攀爀攀猀琀猀✀ 㴀㸀 ✀씀�✀Ⰰഀ਀        ✀眀攀戀猀椀琀攀✀ 㴀㸀 ✀퀀豈� �✀Ⰰഀ਀        ✀漀挀挀甀瀀愀琀椀漀渀✀ 㴀㸀 ✀씀�✀Ⰰഀ਀        ✀攀爀爀漀爀✀ 㴀㸀 ✀쬀섀저케팀✀Ⰰഀ਀        ✀挀漀渀昀椀爀洀开攀洀愀椀氀开猀甀戀樀攀挀琀✀ 㴀㸀 ✀─猀 ⴀ 퀀 �✀Ⰰഀ਀        ✀椀渀昀漀爀洀愀琀椀漀渀✀ 㴀㸀 ✀퀀�✀Ⰰഀ਀        ✀昀愀椀氀攀搀开猀攀渀搀椀渀最开攀洀愀椀氀✀ 㴀㸀 ✀퐀 攀洀愀椀氀   � �  �  � ℀✀Ⰰഀ਀        ✀琀栀愀渀欀开礀漀甀✀ 㴀㸀 ✀씀ﴀ   � ⸀㰀戀爀 ⼀㸀㰀戀爀 ⼀㸀씀 攀洀愀椀氀  �   豈  �  ﰀ  �  ﴀ 攀洀愀椀氀  ︀⸀✀Ⰰഀ਀        ✀愀挀挀琀开挀爀攀愀琀攀搀✀ 㴀㸀 ✀케 ﰀ  � �  �  � ︀  케 휀�   쨀豈ﰀ ✀Ⰰഀ਀        ✀愀挀挀琀开愀挀琀椀瘀攀✀ 㴀㸀 ✀케 ﰀ  � � ﰀ  �  �   케 휀�   쨀豈ﰀ ✀Ⰰഀ਀        ✀愀挀挀琀开愀氀爀攀愀搀礀开愀挀琀✀ 㴀㸀 ✀케 ﰀ  � � ﰀ ℀✀Ⰰഀ਀        ✀愀挀挀琀开愀挀琀开昀愀椀氀攀搀✀ 㴀㸀 ✀섀ﰀ  ﰀ  �  � ℀✀Ⰰഀ਀        ✀攀爀爀开甀渀欀开甀猀攀爀✀ 㴀㸀 ✀케 � �  � ℀✀Ⰰഀ਀        ✀砀开猀开瀀爀漀昀椀氀攀✀ 㴀㸀 ✀퐀 �  ─猀✀Ⰰഀ਀        ✀最爀漀甀瀀✀ 㴀㸀 ✀케�✀Ⰰഀ਀        ✀爀攀最开搀愀琀攀✀ 㴀㸀 ✀퀀�✀Ⰰഀ਀        ✀搀椀猀欀开甀猀愀最攀✀ 㴀㸀 ✀휀� ︀✀Ⰰഀ਀        ✀挀栀愀渀最攀开瀀愀猀猀✀ 㴀㸀 ✀섀� 쨀豈ﴀ✀Ⰰഀ਀        ✀挀甀爀爀攀渀琀开瀀愀猀猀✀ 㴀㸀 ✀퀀︀ 쨀豈ﰀ✀Ⰰഀ਀        ✀渀攀眀开瀀愀猀猀✀ 㴀㸀 ✀一� 쨀豈ﰀ✀Ⰰഀ਀        ✀渀攀眀开瀀愀猀猀开愀最愀椀渀✀ 㴀㸀 ✀쐀︀ �  촀� 쨀豈ﰀ✀Ⰰഀ਀        ✀攀爀爀开挀甀爀爀开瀀愀猀猀✀ 㴀㸀 ✀케 ︀ 쨀豈ﰀ � �✀Ⰰഀ਀        ✀愀瀀瀀氀礀开洀漀搀椀昀✀ 㴀㸀 ✀씀� �豈✀Ⰰഀ਀        ✀挀栀愀渀最攀开瀀愀猀猀✀ 㴀㸀 ✀섀�  쨀豈ﴀ ✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开猀甀挀挀攀猀猀✀ 㴀㸀 ✀퐀 � ︀✀Ⰰഀ਀        ✀瀀愀猀猀开挀栀最开猀甀挀挀攀猀猀✀ 㴀㸀 ✀케 쨀豈ﰀ  �✀Ⰰഀ਀        ✀瀀愀猀猀开挀栀最开攀爀爀漀爀✀ 㴀㸀 ✀케 쨀豈ﰀ   �✀Ⰰഀ਀        ⤀㬀ഀ਀ഀ਀    ␀氀愀渀最开爀攀最椀猀琀攀爀开挀漀渀昀椀爀洀开攀洀愀椀氀 㴀 㰀㰀㰀䔀伀吀ഀ਀씀ﴀ  �  笀匀䤀吀䔀开一䄀䴀䔀紀ഀ਀ഀ਀퐀 케 휀�  � 㨀 ∀笀唀匀䔀刀开一䄀䴀䔀紀∀ഀ਀케 쨀豈ﰀ  � 㨀 ∀笀倀䄀匀匀圀伀刀䐀紀∀ഀ਀ഀ਀쌀  �  ﰀ Ⰰ �  �  �豈 ﴀഀ਀�   �  眀攀戀 戀爀漀眀猀攀爀 ⸀ഀ਀ഀ਀笀䄀䌀吀开䰀䤀一䬀紀ഀ਀ഀ਀찀 ﴀ ﴀⰀഀ਀ഀ਀케 �  笀匀䤀吀䔀开一䄀䴀䔀紀ഀ਀ഀ਀䔀伀吀㬀ഀ਀紀 ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 爀攀瘀椀攀眀挀漀洀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀刀䔀嘀䤀䔀圀䌀伀䴀开倀䠀倀✀⤀⤀ ␀氀愀渀最开爀攀瘀椀攀眀挀漀洀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀씀ﰀ 豈✀Ⰰഀ਀        ✀渀漀开挀漀洀洀攀渀琀✀ 㴀㸀 ✀쐀 � ﰀ  ﰀ✀Ⰰഀ਀        ✀渀开挀漀洀洀开搀攀氀✀ 㴀㸀 ✀─猀 ﰀ⠀⤀ �⠀⤀✀Ⰰഀ਀        ✀渀开挀漀洀洀开搀椀猀瀀✀ 㴀㸀 ✀섀ﰀ ﰀ豈  �✀Ⰰഀ਀        ✀猀攀攀开瀀爀攀瘀✀ 㴀㸀 ✀씀� ﴀ✀Ⰰഀ਀        ✀猀攀攀开渀攀砀琀✀ 㴀㸀 ✀씀� ﰀ✀Ⰰഀ਀        ✀搀攀氀开挀漀洀洀✀ 㴀㸀 ✀쐀� �豈 豈✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 猀攀愀爀挀栀⸀瀀栀瀀 ⴀ 伀䬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 椀昀 ⠀搀攀昀椀渀攀搀⠀✀匀䔀䄀刀䌀䠀开倀䠀倀✀⤀⤀ഀ਀    ␀氀愀渀最开猀攀愀爀挀栀开瀀栀瀀 㴀 愀爀爀愀礀⠀　 㴀㸀 ✀섀�  � 豈︀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 猀攀愀爀挀栀渀攀眀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀匀䔀䄀刀䌀䠀一䔀圀开倀䠀倀✀⤀⤀ ␀氀愀渀最开猀攀愀爀挀栀开渀攀眀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀瀀愀最攀开琀椀琀氀攀✀ 㴀㸀 ✀섀� �豈 豈︀✀Ⰰഀ਀        ✀猀攀氀攀挀琀开搀椀爀✀ 㴀㸀 ✀씀� ﰀ✀Ⰰഀ਀        ✀猀攀氀攀挀琀开搀椀爀开洀猀最✀ 㴀㸀 ✀섀�  �  �  � � 豈︀  � �  �  �豈 䘀吀倀⸀㰀戀爀 ⼀㸀㰀戀爀 ⼀㸀씀�  �  �  豈� ✀Ⰰഀ਀        ✀渀漀开瀀椀挀开琀漀开愀搀搀✀ 㴀㸀 ✀쐀 � 豈�  �✀Ⰰഀ਀        ✀渀攀攀搀开漀渀攀开愀氀戀甀洀✀ 㴀㸀 ✀휀� � � �   � �  �✀Ⰰഀ਀        ✀眀愀爀渀椀渀最✀ 㴀㸀 ✀퀀�✀Ⰰഀ਀        ✀挀栀愀渀最攀开瀀攀爀洀✀ 㴀㸀 ✀ ﰀ  �  �  ﰀ  �Ⰰ �  �  �  ﰀ ⠀䌀䠀䴀伀䐀⤀  㜀㔀㔀 � 㜀㜀㜀  �  � 豈� ℀✀Ⰰഀ਀        ✀琀愀爀最攀琀开愀氀戀甀洀✀ 㴀㸀 ✀㰀戀㸀씀豈� 豈︀ ☀焀甀漀琀㬀㰀⼀戀㸀─猀㰀戀㸀☀焀甀漀琀㬀  㰀⼀戀㸀─猀✀Ⰰഀ਀        ✀昀漀氀搀攀爀✀ 㴀㸀 ✀쨀�✀Ⰰഀ਀        ✀椀洀愀最攀✀ 㴀㸀 ✀씀ﰀ✀Ⰰഀ਀        ✀愀氀戀甀洀✀ 㴀㸀 ✀䄀✀Ⰰഀ਀        ✀爀攀猀甀氀琀✀ 㴀㸀 ✀섀�✀Ⰰഀ਀        ✀搀椀爀开爀漀✀ 㴀㸀 ✀쐀 �  �⸀ ✀Ⰰഀ਀        ✀搀椀爀开挀愀渀琀开爀攀愀搀✀ 㴀㸀 ✀쐀 �  �⸀ ✀Ⰰഀ਀        ✀椀渀猀攀爀琀✀ 㴀㸀 ✀퀀� � 豈�  ︀ �✀Ⰰഀ਀        ✀氀椀猀琀开渀攀眀开瀀椀挀✀ 㴀㸀 ✀쬀� 豈︀✀Ⰰഀ਀        ✀椀渀猀攀爀琀开猀攀氀攀挀琀攀搀✀ 㴀㸀 ✀씀豈� �豈 豈︀✀Ⰰഀ਀        ✀渀漀开瀀椀挀开昀漀甀渀搀✀ 㴀㸀 ✀쐀 � � 豈�✀Ⰰഀ਀        ✀戀攀开瀀愀琀椀攀渀琀✀ 㴀㸀 ✀퀀︀  � �Ⰰ  ﰀ � � ︀   �  豈�⸀⸀⸀✀Ⰰഀ਀        ✀渀漀琀攀猀✀ 㴀㸀 ✀㰀甀氀㸀✀ ⸀ ✀㰀氀椀㸀㰀戀㸀伀䬀㰀⼀戀㸀 㨀 � 豈  豈� � ︀✀ ⸀ ✀㰀氀椀㸀㰀戀㸀䐀倀㰀⼀戀㸀 㨀 � 豈  豈� � �  � �豈✀ ⸀ ✀㰀氀椀㸀㰀戀㸀倀䈀㰀⼀戀㸀 㨀 � 豈  豈�  �  �Ⰰ �  �    � �  �  ﰀ  �  豈�✀ ⸀ ✀㰀氀椀㸀씀  伀䬀Ⰰ 䐀倀Ⰰ 倀䈀 尀✀猀椀最渀猀尀✀  �Ⰰ � �豈   � ﰀ   �  ﰀ � ﰀ  ︀ 倀䠀倀✀ ⸀ ✀㰀氀椀㸀씀 �  戀爀漀眀猀攀爀  琀椀洀攀漀甀琀Ⰰ ︀  �  爀攀氀漀愀搀✀ ⸀ ✀㰀⼀甀氀㸀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 琀栀甀洀戀渀愀椀氀猀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 嘀漀椀搀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 戀愀渀渀椀渀最⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 嘀漀椀搀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 甀瀀氀漀愀搀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀唀倀䰀伀䄀䐀开倀䠀倀✀⤀⤀ ␀氀愀渀最开甀瀀氀漀愀搀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀퀀� 豈�✀Ⰰഀ਀        ✀洀愀砀开昀猀椀稀攀✀ 㴀㸀 ✀퐀 � ﰀ � � � ─猀 䬀䈀✀Ⰰഀ਀        ✀愀氀戀甀洀✀ 㴀㸀 ✀䄀✀Ⰰഀ਀        ✀瀀椀挀琀甀爀攀✀ 㴀㸀 ✀혀豈�✀Ⰰഀ਀        ✀瀀椀挀开琀椀琀氀攀✀ 㴀㸀 ✀퐀� 豈�✀Ⰰഀ਀        ✀搀攀猀挀爀椀瀀琀椀漀渀✀ 㴀㸀 ✀퀀� 豈�✀Ⰰഀ਀        ✀欀攀礀眀漀爀搀猀✀ 㴀㸀 ✀쬀� 쨀� ⠀豈�  �⤀✀Ⰰഀ਀        ✀攀爀爀开渀漀开愀氀戀开甀瀀氀漀愀搀愀戀氀攀猀✀ 㴀㸀 ✀팀︀Ⰰ  � �    �  � 豈︀✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 甀猀攀爀洀最爀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀唀匀䔀刀䴀䜀刀开倀䠀倀✀⤀⤀ ␀氀愀渀最开甀猀攀爀洀最爀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀쐀� ︀✀Ⰰഀ਀        ✀渀愀洀攀开愀✀ 㴀㸀 ✀ﰀⰀ ﴀ �✀Ⰰഀ਀        ✀渀愀洀攀开搀✀ 㴀㸀 ✀ﰀⰀ � �✀Ⰰഀ਀        ✀最爀漀甀瀀开愀✀ 㴀㸀 ✀�Ⰰ ﴀ �✀Ⰰഀ਀        ✀最爀漀甀瀀开搀✀ 㴀㸀 ✀�Ⰰ � �✀Ⰰഀ਀        ✀爀攀最开愀✀ 㴀㸀 ✀� �Ⰰ ﴀ �✀Ⰰഀ਀        ✀爀攀最开搀✀ 㴀㸀 ✀� �Ⰰ � �✀Ⰰഀ਀        ✀瀀椀挀开愀✀ 㴀㸀 ✀� 豈︀Ⰰ � �✀Ⰰഀ਀        ✀瀀椀挀开搀✀ 㴀㸀 ✀� 豈︀Ⰰ � �✀Ⰰഀ਀        ✀搀椀猀欀甀开愀✀ 㴀㸀 ✀� ︀Ⰰ ﴀ �✀Ⰰഀ਀        ✀搀椀猀欀甀开搀✀ 㴀㸀 ✀� ︀Ⰰ � �✀Ⰰഀ਀        ✀猀漀爀琀开戀礀✀ 㴀㸀 ✀팀� ︀ ﴀ豈 ✀Ⰰഀ਀        ✀攀爀爀开渀漀开甀猀攀爀猀✀ 㴀㸀 ✀케 � ︀ � � ℀✀Ⰰഀ਀        ✀攀爀爀开攀搀椀琀开猀攀氀昀✀ 㴀㸀 ✀쐀 �  �  � Ⰰ �  ﴀ 尀✀䴀礀 瀀爀漀昀椀氀攀尀✀  ﰀ✀Ⰰഀ਀        ✀攀搀椀琀✀ 㴀㸀 ✀퐀턀케퀀케퀀케준윀팀윀✀Ⰰഀ਀        ✀搀攀氀攀琀攀✀ 㴀㸀 ✀쐀준섀쌀턀섀혀윀✀Ⰰഀ਀        ✀渀愀洀攀✀ 㴀㸀 ✀케 휀�✀Ⰰഀ਀        ✀最爀漀甀瀀✀ 㴀㸀 ✀케�✀Ⰰഀ਀        ✀椀渀愀挀琀椀瘀攀✀ 㴀㸀 ✀섀ﰀ✀Ⰰഀ਀        ✀漀瀀攀爀愀琀椀漀渀猀✀ 㴀㸀 ✀쬀�✀Ⰰഀ਀        ✀瀀椀挀琀甀爀攀猀✀ 㴀㸀 ✀혀豈�✀Ⰰഀ਀        ✀搀椀猀欀开猀瀀愀挀攀✀ 㴀㸀 ✀휀︀  � ⼀ 쐀�✀Ⰰഀ਀        ✀爀攀最椀猀琀攀爀攀搀开漀渀✀ 㴀㸀 ✀씀� ✀Ⰰഀ਀        ✀甀开甀猀攀爀开漀渀开瀀开瀀愀最攀猀✀ 㴀㸀 ✀─搀 �  ─搀 �⠀⤀✀Ⰰഀ਀        ✀挀漀渀昀椀爀洀开搀攀氀✀ 㴀㸀 ✀씀� � 豈 �  쐀준섀쌀턀섀�씀퐀씀 ﰀ  � 㼀 尀尀渀케  豈�   �   ﴀ �⸀✀Ⰰഀ਀        ✀洀愀椀氀✀ 㴀㸀 ✀䴀䄀䤀䰀✀Ⰰഀ਀        ✀攀爀爀开甀渀欀渀漀眀渀开甀猀攀爀✀ 㴀㸀 ✀케 � �  � ℀✀Ⰰഀ਀        ✀洀漀搀椀昀礀开甀猀攀爀✀ 㴀㸀 ✀퐀� �✀Ⰰഀ਀        ✀渀漀琀攀猀✀ 㴀㸀 ✀팀︀✀Ⰰഀ਀        ✀渀漀琀攀开氀椀猀琀✀ 㴀㸀 ✀㰀氀椀㸀씀  �  �  ︀ 쨀豈ﰀ Ⰰ �  � ∀쨀豈ﰀ∀ ﰀ✀Ⰰഀ਀        ✀瀀愀猀猀眀漀爀搀✀ 㴀㸀 ✀쨀豈ﰀ✀Ⰰഀ਀        ✀甀猀攀爀开愀挀琀椀瘀攀✀ 㴀㸀 ✀케 � � ﰀ✀Ⰰഀ਀        ✀甀猀攀爀开最爀漀甀瀀✀ 㴀㸀 ✀케� ︀✀Ⰰഀ਀        ✀甀猀攀爀开攀洀愀椀氀✀ 㴀㸀 ✀씀洀愀椀氀 �✀Ⰰഀ਀        ✀甀猀攀爀开眀攀戀开猀椀琀攀✀ 㴀㸀 ✀퀀豈� � �✀Ⰰഀ਀        ✀挀爀攀愀琀攀开渀攀眀开甀猀攀爀✀ 㴀㸀 ✀쐀� � �✀Ⰰഀ਀        ✀甀猀攀爀开氀漀挀愀琀椀漀渀✀ 㴀㸀 ✀퐀� �✀Ⰰഀ਀        ✀甀猀攀爀开椀渀琀攀爀攀猀琀猀✀ 㴀㸀 ✀씀� �✀Ⰰഀ਀        ✀甀猀攀爀开漀挀挀甀瀀愀琀椀漀渀✀ 㴀㸀 ✀씀� �✀Ⰰഀ਀        ⤀㬀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 甀琀椀氀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀椀昀 ⠀搀攀昀椀渀攀搀⠀✀唀吀䤀䰀开倀䠀倀✀⤀⤀ ␀氀愀渀最开甀琀椀氀开瀀栀瀀 㴀 愀爀爀愀礀⠀✀琀椀琀氀攀✀ 㴀㸀 ✀섀� � 豈︀✀Ⰰഀ਀        ✀眀栀愀琀开椀琀开搀漀攀猀✀ 㴀㸀 ✀퐀 �⸀⸀⸀✀Ⰰഀ਀        ✀眀栀愀琀开甀瀀搀愀琀攀开琀椀琀氀攀猀✀ 㴀㸀 ✀씀︀ � ﰀ ﰀ �✀Ⰰഀ਀        ✀眀栀愀琀开搀攀氀攀琀攀开琀椀琀氀攀✀ 㴀㸀 ✀쐀� �✀Ⰰഀ਀        ✀眀栀愀琀开爀攀戀甀椀氀搀✀ 㴀㸀 ✀츀�  琀栀甀洀戀渀愀椀氀猀   豈� � �✀Ⰰഀ਀        ✀眀栀愀琀开搀攀氀攀琀攀开漀爀椀最椀渀愀氀猀✀ 㴀㸀 ✀쐀�  豈�   ﰀ �Ⰰ ︀    � � �✀Ⰰഀ਀        ✀昀椀氀攀✀ 㴀㸀 ✀섀�✀Ⰰഀ਀        ✀琀椀琀氀攀开猀攀琀开琀漀✀ 㴀㸀 ✀ �  �✀Ⰰഀ਀        ✀猀甀戀洀椀琀开昀漀爀洀✀ 㴀㸀 ✀�✀Ⰰഀ਀        ✀甀瀀搀愀琀攀搀开猀甀挀挀攀猀昀甀氀氀礀✀ 㴀㸀 ✀︀ ︀✀Ⰰഀ਀        ✀攀爀爀漀爀开挀爀攀愀琀攀✀ 㴀㸀 ✀쬀섀저케ꄀ  �✀Ⰰഀ਀        ✀挀漀渀琀椀渀甀攀✀ 㴀㸀 ✀팀�  ﰀ 豈ﰀ✀Ⰰഀ਀        ✀洀愀椀渀开猀甀挀挀攀猀猀✀ 㴀㸀 ✀퐀 � ─猀 � ︀   �豈 豈�✀Ⰰഀ਀        ✀攀爀爀漀爀开爀攀渀愀洀攀✀ 㴀㸀 ✀쬀� �  � ﰀ ─猀  ─猀✀Ⰰഀ਀        ✀攀爀爀漀爀开渀漀琀开昀漀甀渀搀✀ 㴀㸀 ✀퐀 � ─猀  �✀Ⰰഀ਀        ✀戀愀挀欀✀ 㴀㸀 ✀�豈  �✀Ⰰഀ਀        ✀琀栀甀洀戀猀开眀愀椀琀✀ 㴀㸀 ✀씀�豈 豈 琀栀甀洀戀渀愀椀氀猀 �⼀ 豈 豈︀ � �Ⰰ ︀ �⸀⸀⸀✀Ⰰഀ਀        ✀琀栀甀洀戀猀开挀漀渀琀椀渀甀攀开眀愀椀琀✀ 㴀㸀 ✀팀�   �豈 豈 琀栀甀洀戀渀愀椀氀猀 �⼀ 豈 豈︀ � �⸀⸀⸀✀Ⰰഀ਀        ✀琀椀琀氀攀猀开眀愀椀琀✀ 㴀㸀 ✀씀�豈 �豈Ⰰ ︀ �⸀⸀⸀✀Ⰰഀ਀        ✀搀攀氀攀琀攀开眀愀椀琀✀ 㴀㸀 ✀쐀� 豈Ⰰ ︀ �⸀⸀⸀✀Ⰰഀ਀        ✀爀攀瀀氀愀挀攀开眀愀椀琀✀ 㴀㸀 ✀쐀� ﴀ豈  �   豈� � �Ⰰ ︀ �⸀⸀⸀✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀✀ 㴀㸀 ✀쌀� �✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开愀挀琀椀漀渀✀ 㴀㸀 ✀씀� �✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开瀀愀爀愀洀攀琀攀爀✀ 㴀㸀 ✀씀� �豈✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开愀氀戀甀洀✀ 㴀㸀 ✀씀� ✀Ⰰഀ਀        ✀椀渀猀琀爀甀挀琀椀漀渀开瀀爀攀猀猀✀ 㴀㸀 ✀퀀� ─猀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀✀ 㴀㸀 ✀씀�豈 琀栀甀洀戀猀 �⼀ 豈︀ � �✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开眀栀愀琀✀ 㴀㸀 ✀퐀  �  豈�✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开琀栀甀洀戀✀ 㴀㸀 ✀찀ﰀ  琀栀甀洀戀渀愀椀氀猀✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开瀀椀挀✀ 㴀㸀 ✀찀ﰀ  豈� � �✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开戀漀琀栀✀ 㴀㸀 ✀쨀  琀栀甀洀戀渀愀椀氀猀   豈� � �✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开渀甀洀戀攀爀✀ 㴀㸀 ✀퀀� 豈︀  � � ✀Ⰰഀ਀        ✀甀瀀搀愀琀攀开漀瀀琀椀漀渀✀ 㴀㸀 ✀⠀쐀︀ �  �  ﰀ ﰀ   � 琀椀洀攀漀甀琀 ⤀✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开琀椀琀氀攀✀ 㴀㸀 ✀케 � 㼀 퐀� 혀豈�✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开栀漀眀✀ 㴀㸀 ✀퀀豈    �  �  �✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开爀攀洀漀瘀攀✀ 㴀㸀 ✀섀�  � ⸀樀瀀最  �  开 ⠀�豈 ﴀ⤀  �✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开攀甀爀漀✀ 㴀㸀 ✀섀� ㈀　　㌀开㄀㄀开㈀㌀开㄀㌀开㈀　开㈀　⸀樀瀀最  ㈀㌀⼀㄀㄀⼀㈀　　㌀ ㄀㌀㨀㈀　✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开甀猀✀ 㴀㸀 ✀섀� ㈀　　㌀开㄀㄀开㈀㌀开㄀㌀开㈀　开㈀　⸀樀瀀最  ㄀㄀⼀㈀㌀⼀㈀　　㌀ ㄀㌀㨀㈀　✀Ⰰഀ਀        ✀昀椀氀攀渀愀洀攀开琀椀洀攀✀ 㴀㸀 ✀섀� ㈀　　㌀开㄀㄀开㈀㌀开㄀㌀开㈀　开㈀　⸀樀瀀最  ㄀㌀㨀㈀　✀Ⰰഀ਀        ✀搀攀氀攀琀攀✀ 㴀㸀 ✀쐀� �豈 豈︀ � 豈︀ ﴀ �✀Ⰰഀ਀        ✀搀攀氀攀琀攀开琀椀琀氀攀✀ 㴀㸀 ✀쐀� �豈 豈︀✀Ⰰഀ਀        ✀搀攀氀攀琀攀开漀爀椀最椀渀愀氀✀ 㴀㸀 ✀쐀� 豈︀ ﴀ �✀Ⰰഀ਀        ✀搀攀氀攀琀攀开爀攀瀀氀愀挀攀✀ 㴀㸀 ✀쐀� 豈ﰀ豈 豈︀  �  ﰀ  豈� � �✀Ⰰഀ਀        ✀猀攀氀攀挀琀开愀氀戀甀洀✀ 㴀㸀 ✀씀� �✀Ⰰഀ਀        ⤀㬀 ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀⼀⼀ 䘀椀氀攀 瀀愀最攀琀椀琀氀攀⸀椀渀挀⸀瀀栀瀀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ ⼀⼀ഀ਀␀氀愀渀最开瀀愀最攀琀椀琀氀攀开瀀栀瀀 㴀 愀爀爀愀礀⠀ഀ਀✀搀椀瘀椀搀攀爀✀ 㴀㸀 ✀㸀✀Ⰰഀ਀    ✀瘀椀攀眀椀渀最✀ 㴀㸀 ✀嘀椀攀眀椀渀最 倀栀漀琀漀✀Ⰰഀ਀    ✀甀猀爀✀ 㴀㸀 ∀✀猀 倀栀漀琀漀 䜀愀氀氀攀爀礀∀Ⰰഀ਀    ✀瀀栀漀琀漀最愀氀氀攀爀礀✀ 㴀㸀 ✀倀栀漀琀漀 䜀愀氀氀攀爀礀✀Ⰰഀ਀    ⤀㬀ഀ਀ഀ਀㼀㸀 