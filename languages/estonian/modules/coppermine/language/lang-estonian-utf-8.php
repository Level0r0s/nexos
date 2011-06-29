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
/*   $Id: lang-estonian-utf-8.php,v 1.1 2004/07/18 10:29:10 akamu Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Estonian');
define('LANG_NAME_NATIVE', 'Eesti');
define('LANG_COUNTRY_CODE', 'ee');
define('TRANS_NAME', 'Meelis RÃ¼Ã¼tli');
define('TRANS_DATE', '2003-10-19');
define('TRANS_NAME2', 'Vallo JÃµeorg');
define('TRANS_EMAIL2', 'vallo@infonet.ee');
define('TRANS_WEBSITE2', 'http://pontu.infonet.ee');
define('TRANS_NAME3', 'homeros');
define('TRANS_EMAIL3', 'rix_homeros@hotmail.com');
define('TRANS_DATE3', '2004-05-31');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'UTF-8');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'Jah');
define('NO', 'Ei');

// some common strings
define('BACK', 'TAGASI');
define('CONTINUE', 'JÃ„TKA');
define('INFO', 'Informatsioon');
define('ERROR', 'Viga');

//// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
define('ALBUM_DATE_FMT', '%A %d %B %Y');
define('LASTCOM_DATE_FMT', '%d %B %Y kell %H:%M');
define('LASTUP_DATE_FMT', '%A %d %B %Y');
define('REGISTER_DATE_FMT', '%A %d %B %Y');
define('LASTHIT_DATE_FMT', '%d %B %Y kell %H:%M');
define('COMMENT_DATE_FMT', '%d %B %Y kell %H:%M');

// short names for Byte, Kilo, Mega
$lang_byte_units = array('Baiti','KB','MB',);

// Day of week
$lang_day_of_week = array('PÃ¼hapÃ¤ev','EsmaspÃ¤ev','TeisipÃ¤ev','KolmapÃ¤ev','NeljapÃ¤ev','Reede','LaupÃ¤ev',);
// Day of the month
$lang_month = array('Jaanuar','Veebruar','MÃ¤rts','Aprill','Mai','Juuni','Juuli','August','September','Oktoober','November','Detsember',);
// For the word censor
$lang_bad_words = array('*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*',);
// lang_meta_album_names
define('RANDOM', 'Juhuslikud pildid');
define('LASTUP', 'Viimati lisatud');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Viimati lisatud album');
define('LASTCOM', 'Viimati kommenteeritud');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Enim vaadatud');
define('TOPRATED', 'Edetabel');
define('LASTHITS', 'Viimati vaadatud');
define('SEARCH', 'Otsingu tulemused');
define('FAVPICS', 'Eelistatud pildid');

// lang_errors
define('ACCESS_DENIED', 'Teil pole Ãµigusi sellele lehele pÃ¤Ã¤suks');
define('PERM_DENIED', 'Teil pole Ãµigust toimingu tegemiseks');
define('PARAM_MISSING', 'Skripti kÃ¤ivitamiseks puuduvad vajalikud parameetrid.');
define('NON_EXIST_AP', 'Valitud pilt vÃµi album puudub.');
define('QUOTA_EXCEEDED', 'Lubatud kettakasutus Ã¼letatud<br /><br />Teil on lubatud kasutada [quota]K kettaruumi, Teie pildid vÃµtavad hetkel [space]K  ruumi, selle pildi lisamisel vÃµib lubatud maht olla Ã¼letatud.');
define('GD_FILE_TYPE_ERR', 'GD teegi puhul on lubatud ainult JPEG ja PNG tÃ¼Ã¼pi pildid.');
define('INVALID_IMAGE', 'Pilt on vigane vÃµi seda pole vÃµimalik kÃ¤sitleda GD teegi poolt.');
define('RESIZE_FAILED', 'Ei suuda luua pisipilti vÃµi vÃ¤hendada pildi suurust.');
define('NO_IMG_TO_DISPLAY', 'Pole Ã¼htegi pilti.');
define('NON_EXIST_CAT', 'Valitud kategooria puudub.');
define('ORPHAN_CAT', 'Kategoorial puudub vanem, kasuta kategooria-haldurit probleemi lahendamiseks.');
define('DIRECTORY_RO', 'Kataloogil \'%s\' puudub kirjutamisÃµigus, Ã¼ilte ei saa kustutada.');
define('NON_EXIST_COMMENT', 'Valitud kommentaar puudub.');
define('PIC_IN_INVALID_ALBUM', 'Pilt asub olematus albumis (%s)!?');
define('BANNED', 'Sul on hetkel keelatud selle albumi kasutamine.');
define('NOT_WITH_UDB', 'See funktsioon on keelatud, kuna album on integreeritud foorumiga. Ehk tegevus mida Sa Ã¼ritad ei ole toetatud antud konfiguratsioonis vÃµi tuleks teha kasutades foorumi tarkvara.');
define('MEMBERS_ONLY', 'See funktsioon on ainult liikmetele. Soovil võid liituda!');
define('MUSTBE_GOD', 'See funktsioon on ainult administraatoritele. Sa pead superadminina sisselogima, et ligipääsu saavutada!');

// lang_main_menu
define('ALB_LIST_TITLE', 'Mine albumite loetellu');
define('ALB_LIST_LNK', 'Albumite loetelu');
define('MY_GAL_TITLE', 'Mine minu personaalsesse galeriisse');
define('MY_GAL_LNK', 'Minu Galerii');
define('MY_PROF_LNK', 'Minu Profiil');
define('MY_PROF_TITLE','Kontrolli oma ketta mahtu ja gruppe!');
define('ADM_MODE_TITLE', 'LÃ¼litu admin olekusse');
define('ADM_MODE_LNK', 'Admin olek');
define('USR_MODE_TITLE', 'LÃ¼litu kasutaja olekusse');
define('USR_MODE_LNK', 'Kasutaja olek');
define('UPLOAD_PIC_TITLE', 'Lisa pilt albumisse');
define('UPLOAD_PIC_LNK', 'Lisa pilt');
define('REGISTER_TITLE', 'Loo konto');
define('REGISTER_LNK', 'Registreeri');
define('LOGIN_LNK', 'Logi sisse');
define('LOGOUT_LNK', 'Logi vÃ¤lja');
define('LASTUP_LNK', 'Viimati lisatud');
define('LASTUP_TITLE', 'Hiljuti uploaditud pildid');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Viimased kommentaarid');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Enim vaadatud');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Edetabel');
define('SEARCH_LNK', 'Otsing');
define('FAV_LNK', 'Minu eelistused');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Lisamise kinnitus');
define('CONFIG_LNK', 'Konfiguratsioon');
define('ALBUMS_LNK', 'Albumid');
define('CATEGORIES_LNK', 'Kategooriad');
define('USERS_LNK', 'Kasutajad');
define('GROUPS_LNK', 'Grupid');
define('COMMENTS_LNK', 'Kommentaarid');
define('SEARCHNEW_LNK', 'Lisa Ã¼les laetud pilte');
define('UTIL_LNK', 'Muuda piltide suurust');
define('BAN_LNK', 'Blokeeri kasutajaid');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Loo / telli minu albumeid');
define('MODIFYALB_LNK', 'Muuda minu albumeid');
define('MY_PROF_LNK', 'Minu profiil');

// lang_cat_list
define('CATEGORY', 'Kategooria');
define('ALBUMS', 'Albumid');
define('PICTURES', 'Pildid');

// lang_album_list
define('ALBUM_ON_PAGE', '%d albumit %d lehel');

// lang_thumb_view
define('DATE', 'KUUPÃ„EV');
define('NAME', 'FAILI NIMI');
define('TITLE', 'PEALKIRI');
define('SORT_DA', 'JÃ¤rjesta kuupÃ¤eva jÃ¤rgi kasvavalt');
define('SORT_DD', 'JÃ¤rjesta kuupÃ¤eva jÃ¤rgi kahanevalt');
define('SORT_NA', 'JÃ¤rjesta nime jÃ¤rgi kasvavalt');
define('SORT_ND', 'JÃ¤rjesta nime jÃ¤rgi kahanevalt');
define('SORT_TA', 'JÃ¤rjesta pealkirja jÃ¤rgi kasvavalt');
define('SORT_TD', 'JÃ¤rjesta pealkirja jÃ¤rgi kahanevalt');
define('PIC_ON_PAGE', '%d pilti on %d-el lehel');
define('USER_ON_PAGE', '%d kasutajat on %d-el lehel');

// lang_img_nav_bar
define('THUMB_TITLE', 'Tagasi pisipiltide lehele');
define('PIC_INFO_TITLE', 'NÃ¤ita/peida pildi info');
define('SLIDESHOW_TITLE', 'Slaidiesitus');
define('SLIDESHOW_DISABLED', 'e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'Saada see pilt e-kaardina');
define('ECARD_DISABLED', 'e-kaartid on keelatud');
define('ECARD_DISABLED_MSG', 'Teil pole Ãµigust saata e-kaarte');
define('PREV_TITLE', 'Vaata eelmist pilti');
define('NEXT_TITLE', 'Vaata jÃ¤rgmist pilti');
define('PIC_POS', 'PILT %s/%s');
define('NO_MORE_IMAGES', 'Siin galeriis ei ole rohkem pilte');
define('NO_LESS_IMAGES', 'See on galerii esimene pilt');

// lang_rate_pic
define('RATE_THIS_PIC', 'Hinda seda pilti ');
define('NO_VOTES', '(Veel hindamata)');
define('RATING', '(Hetke hinne : %s / 5-st %s hÃ¤Ã¤lega)');
define('RUBBISH', 'KÃµlbmatu');
define('POOR', 'Kasin');
define('FAIR', 'Keskmine');
define('GOOD', 'Hea');
define('EXCELLENT', 'SuurepÃ¤rane');
define('GREAT', 'Fantastiline');

// lang_cpg_die
define('INFORMATION', 'Informatsioon');
define('ERROR', 'Viga');
define('CRITICAL_ERROR', 'Kriitiline viga');
define('FILE', 'Fail: ');
define('LINE', 'Rida: ');

// lang_display_thumbnails
define('FILENAME', 'Failinimi : ');
define('FILESIZE', 'Failisuurus : ');
define('DIMENSIONS', 'MÃµÃµtmed : ');
define('DATE_ADDED', 'Lisamise kuupÃ¤ev : ');

// lang_get_pic_data
define('N_COMMENTS', '%s kommentaari');
define('N_VIEWS', '%s kord(a)');
define('N_VOTES', '(%s hÃ¶Ã¶l(t))');

// lang_smilies_inc_php
define('EXCLAMATION', 'HÃ¼Ã¼atus');
define('QUESTION', 'KÃ¼simus');
define('VERY HAPPY', 'VÃ¤ga Ãµnnelik');
define('SMILE', 'RÃµÃµmus');
define('SAD', 'Kurb');
define('SURPRISED', 'Ãœllatunud');
define('SHOCKED', 'Vapustaud');
define('CONFUSED', 'Hammeldunud');
define('COOL', 'Lahe');
define('LAUGHING', 'Naerev');
define('MAD', 'Hull');
define('RAZZ', 'Razz');
define('EMBARASSED', 'HÃ¤bistatud');
define('CRYING OR VERY SAD', 'Nuttev vÃµi vÃ¤ga kurb');
define('EVIL OR VERY MAD', 'Ã•el vÃµi PÃ¤ris hull');
define('TWISTED EVIL', 'Eelarvamuslik Ãµel');
define('ROLLING EYES', 'Silmi pÃ¶Ã¶ritav');
define('WINK', 'Silmapilgutus');
define('IDEA', 'Idee');
define('ARROW', 'Nool');
define('NEUTRAL', 'Neutraalne');
define('MR. GREEN', 'Mr. Roheline');

// lang_admin_php
define('LV_ADMIN', 'Lahkumine admin olekust...');
define('ENT_ADMIN', 'Sisenemine admin olekusse...');

// lang_albmgr_php
define('ALB_NEED_NAME', 'Albumitel peab olema nimi !');
define('CONFIRM_MODIFS', 'Oled kindel, et tahad teha neid muudatusi ?');
define('NO_CHANGE', 'Sa ei muutnud midagi !');
define('NEW_ALBUM', 'Uus album');
define('CONFIRM_DELETE1', 'Kindel, et tahad albumit kustutada ?');
define('CONFIRM_DELETE2', '\\nKÃµik siin sisalduvad pildid ja kommentaarid lÃ¤hevad kaduma !');
define('SELECT_FIRST', 'Vali enne album');
define('ALB_MRG', 'Albumi-haldur');
define('MY_GALLERY', '* Minu Galerii *');
define('NO_CATEGORY', '* Kategooriata *');
define('DELETE', 'Kustuta');
define('NEW', 'Uus');
define('APPLY_MODIFS', 'Omista muudatused');
define('SELECT_CATEGORY', 'Vali kategooria');

// lang_catmgr_php
define('MISS_PARAM', 'Puuduvad parameetrid \'%s\'tooimingut ei tehtud !');
define('UNKNOWN_CAT', 'Valitud kategooria puudub andmebaasis');
define('USERGAL_CAT_RO', 'Kasutaja galeriisid ei saa kustutada !');
define('MANAGE_CAT', 'Halda kategooriaid');
define('CONFIRM_DELETE', 'Oled kindel, et tahad KUSTUTADA seda kategooriat');
define('CATEGORY', 'Kategooria');
define('OPERATIONS', 'Toimingud');
define('MOVE_INTO', 'Liigu');
define('UPDATE_CREATE', 'Uuenda/Loo Kategooria');
define('PARENT_CAT', 'Juurkategooria');
define('CAT_TITLE', 'Kategooria tiitel');
define('CAT_DESC', 'Kategooria kirjeldus');

// lang_config_php
define('TITLE', 'Konfiguratsioon');
define('RESTORE_CFG', 'Taasta tehase vaikeseaded');
define('SAVE_CFG', 'Salvesta uus konfiguratsioon');
define('NOTES', 'MÃ¤rkused');
define('INFO', 'Informatsioon');
define('UPD_SUCCESS', 'Konfiguratsioon uuendatud');
define('RESTORE_SUCCESS', 'Vaikekonfiguratsioon taastatud');
define('NAME_A', 'Nimed kasvavalt');
define('NAME_D', 'Nimed kahanevalt');
define('TITLE_A', 'Pealkirjad kasvavalt');
define('TITLE_D', 'Pealkirjad kahanevalt');
define('DATE_A', 'KuupÃ¤ev kasvavalt');
define('DATE_D', 'KuupÃ¤ev kahanevalt');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Height');
define('TH_WD', 'Width');

// lang_config_data
define('CONFIG_GENSET', 'Ãœldised seaded');
define('GALLERY_NAME', 'Galerii nimi');
define('GALLERY_DESCRIPTION', 'Galrii kirjeldus');
define('GALLERY_ADMIN_EMAIL', 'Galerii administraatorile epost');
define('ECARDS_MORE_PIC_TARGET', 'Address to nuke folder ie http://www.mysite.tld/html/');
define('LANG', 'Keel');
define('CPGTHEME', 'Teema');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'Albumite loetelu vaade');
define('MAIN_TABLE_WIDTH', 'Peatabeli laius (pixelites vÃµi %)');
define('SUBCAT_LEVEL', 'Number kategooria tasandeid kuvamiseks');
define('ALBUMS_PER_PAGE', 'Number albumeid kuvamiseks');
define('ALBUM_LIST_COLS', 'Number veergusid albumi loeteluks');
define('ALB_LIST_THUMB_SIZE', 'pisipildi suurus pixelites');
define('MAIN_PAGE_LAYOUT', 'Pealehe sisu');
define('FIRST_LEVEL', 'NÃ¤ita esimese taseme albumite pisipilte kategooriates');
define('THUMB_VIEW_TITLE', 'Pisipiltide vaade');
define('THUMBCOLS', 'Veergude arv pisipiltide lehel');
define('THUMBROWS', 'Ridade arv pisipiltide lehel');
define('MAX_TABS', 'Maksimaalne lahtrite arv kuvamiseks');
define('CAPTION_IN_THUMBVIEW', 'Kuva pildi selgitus (lisaks tiitlile) pisipildi all');
define('DISPLAY_COMMENT_COUNT', 'Kuva kommentaaraide arv  pisipildi all');
define('DEFAULT_SORT_ORDER', 'VaikejÃ¤rjestus piltidele');
define('MIN_VOTES_FOR_RATING', 'Minimaalne hÃ¤Ã¤lte arv pildi sattumiseks \'Edetabel\' nimekirja');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'Pildivaade &amp; Kommentaaride seaded');
define('PICTURE_TABLE_WIDTH', 'Tabeli laius pildi kuvamiseks (pixelites vÃµi %)');
define('DISPLAY_PIC_INFO', 'Pildi info on vaikimisi nÃ¤htav');
define('FILTER_BAD_WORDS', 'Filtreeri pahad sÃµnad kommentaarides');
define('ENABLE_SMILIES', 'Luba smile\'isi kommentaarides');
define('DISABLE_FLOOD_PROTECTION', 'Allow several consecutive comments on one pic from the same user');
define('COMMENT_EMAIL_NOTIFICATION', 'Email site admin upon comment submission');
define('MAX_IMG_DESC_LENGTH', 'Maksimaalne pildikirjelduse pikkus');
define('MAX_COM_WLENGTH', 'Maksimaalne tÃ¤htede arv sÃµnas');
define('MAX_COM_LINES', 'Maksimaalne ridade arv kommentaaris');
define('MAX_COM_SIZE', 'Maksimaalne kommentaari pikkus');
define('DISPLAY_FILM_STRIP', 'NÃ¤ita filmilinti');
define('MAX_FILM_STRIP_ITEMS', 'Kaadrite arv filmilindil');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', 'Piltide ja pisipiltide seaded');
define('JPEG_QUAL', 'JPEG failide kvaliteet');
define('THUMB_WIDTH', 'Pisipildi max laius vÃµi kÃµrgus <b>*</b>');
define('THUMB_USE', 'Kasuta mÃµÃµte (kÃµrgus vÃµi laius vÃµi Max aspect pisipiltide jaoks )<b>*</b>');
define('MAKE_INTERMEDIATE', 'Loo keskmised pildid');
define('PICTURE_WIDTH', 'Keskmiste piltide laius vÃµi kÃµrgus <b>*</b>');
define('MAX_UPL_SIZE', 'Salvestatud piltide max suurus (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Salvestatud piltide max laius vÃµi kÃµrgus (pixelites)');
define('USER_SETTING_TITLE', 'Kasutaja seaded');
define('ALLOW_USER_REGISTRATION', 'Luba uue kasutaja registreerimist');
define('REG_REQUIRES_VALID_EMAIL', 'Kasutaja registreerimine nÃµuab eposti-kinnitust');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Luba kahel kasutajal Ã¼hte-sama eposti aadressi');
define('ALLOW_PRIVATE_ALBUMS', 'Kasutajatel vÃµib olla privaat-albumid');
define('CUSTOM_FIELDS_TITLE', 'Kohandatavad vÃ¤ljad pildi kirjelduseks (jÃ¤ta tÃ¼hjaks kui ei kasuta)');
define('USER_FIELD1_NAME', 'VÃ¤lja 1 nimi');
define('USER_FIELD2_NAME', 'VÃ¤lja 2 nimi');
define('USER_FIELD3_NAME', 'VÃ¤lja 3 nimi');
define('USER_FIELD4_NAME', 'VÃ¤lja 4 nimi');
define('PIC_ADV_SETTING_TITLE', 'Piltide ja pisipiltide lisaseaded');
define('FORBIDEN_FNAME_CHAR', 'Faili nimes keelatud tÃ¤hemÃ¤rgid');
define('ALLOWED_FILE_EXTENSIONS', 'Lubatud failitÃ¼Ã¼bid salvestatavatele piltidele');
define('THUMB_METHOD', 'Piltide suurusemuutmise meetod');
define('IMPATH', 'ImageMagick\'u/netpbm \'konvertimise\' abiprogrammi tee (nÃ¤iteks /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Lubatud pilditÃ¼Ã¼bid (ainult ImageMagick\'u jaoks)');
define('IM_OPTIONS', 'KÃ¤surea parameetrid ImageMagick\'ule');
define('READ_EXIF_DATA', 'Lugeda EXIF andmed JPEG failides');
define('READ_IPTC_DATA', 'Read IPTC data in JPEG files');
define('FULLPATH', 'Albumi kataloog <b>*</b>');
define('USERPICS', 'Kasutajapiltide kataloog <b>*</b>');
define('NORMAL_PFX', 'Eesliide keskmistele piltidele <b>*</b>');
define('THUMB_PFX', 'Eesliide pisipiltidele <b>*</b>');
define('DEFAULT_DIR_MODE', 'Vaikemood kataloogidele');
define('DEFAULT_FILE_MODE', 'Vaikemood piltidele');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', 'PrÃ¤Ã¤nikud &amp; TÃ¤hestiku seaded');
define('COOKIE_NAME', 'Skripti poolt kasutatava prÃ¤Ã¤niku nimi');
define('COOKIE_PATH', 'Skripti poolt kasutatava prÃ¤Ã¤niku failitee');
define('CHAR_SET', 'TÃ¤htekodeering');
define('MISC_SETTING_TITLE', 'Muud seaded');
define('DEBUG_MODE', 'VÃµimalda parandusmood');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) * MÃ¤rgitud vÃ¤lju ei tohi muuta kui galeriis on juba pilte</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Sa pead trÃ¼kkima oma nime ja kommentaari');
define('COM_ADDED', 'Kommentaar lisatud');
define('ALB_NEED_TITLE', 'Sinult oodatakse pealkirja albumile !');
define('NO_UDP_NEEDED', 'Uuendust pole vaja.');
define('ALB_UPDATED', 'Album uuendatud');
define('UNKNOWN_ALBUM', 'Valitud album puudub vÃµi sul pole Ãµigusi salvestada sellesse albumisse');
define('NO_PIC_UPLOADED', 'Ãœhtegi pilti ei salvestatud !<br /><br />Kui sul tÃµesti on valitud pilt salvestamiseks, kontrolli et server lubaks failide salvestamist...');
define('ERR_MKDIR', 'Viga kataloogi %s loomisel !');
define('DEST_DIR_RO', 'Sihtkataloog %s pole skripti poolt kirjutamisÃµiguslik !');
define('ERR_MOVE', 'VÃµimatu liigutada %s -> %s !');
define('ERR_FSIZE_TOO_LARGE', 'Sinu poolt salvestatava pildi suurus liiga suur (maksimum lubatud %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Sinu poolt salvestatava faili suurus liiga suur (maksimum lubatud %s KB) !');
define('ERR_INVALID_IMG', 'Sinu poolt salvestatav fail pole sobiv pilt !');
define('ALLOWED_IMG_TYPES', 'Sa vÃµid salvestada ainult %s pilti.');
define('ERR_INSERT_PIC', 'Pilti  \'%s\' ei saa lisada albumisse ');
define('UPLOAD_SUCCESS', 'Sinu pilt salvestati edukalt<br /><br />See saab nÃ¤htavaks pÃ¤rast admini heakskiitu.');
define('INFO', 'Informatsioon');
define('ERR_COMMENT_EMPTY', 'Sinu kommentaar on tÃ¼hi !');
define('ERR_INVALID_FEXT', 'Ainult jÃ¤rgmised failitÃ¼Ã¼bid aksepteeritakse : <br /><br />%s.');
define('NO_FLOOD', 'Vabandust, aga sa oled juba selle pildile viimati lisatud kommentaari autor<br /><br />Paranda oma lisatud kommentaari kui soovid seda muuta');
define('REDIRECT_MSG', 'Sind suunatakse Ã¼mber.<br /><br /><br />Klikka \'JÃ„TKA\' kui lehekÃ¼lg automaatselt ei uuene');
define('UPL_SUCCESS', 'Sinu pilt edukalt lisatud');

// lang_delete_php
define('CAPTION', 'Selgitus');
define('FS_PIC', 'TÃ¤is suuruses pilt');
define('DEL_SUCCESS', 'edukalt kustutatud');
define('NS_PIC', 'normaal suuruses pilt');
define('ERR_DEL', 'ei saa kustutada');
define('THUMB_PIC', 'pisipilt');
define('COMMENT', 'kommentaar');
define('IM_IN_ALB', 'pilt albumis');
define('ALB_DEL_SUCCESS', 'Album \'%s\' kustutatud');
define('ALB_MGR', 'Albumi Haldur');
define('ERR_INVALID_DATA', 'Vigased andmed laekunud \'%s\'');
define('CREATE_ALB', 'Loon albumit \'%s\'');
define('UPDATE_ALB', 'Uuendan albumit \'%s\' pealkirjaga \'%s\' ja indeksiga \'%s\'');
define('DEL_PIC', 'Kustuta pilt');
define('DEL_ALB', 'Kustuta album');
define('DEL_USER', 'Kustuta kasutaja');
define('ERR_UNKNOWN_USER', 'Valitud kasutajat pole olemas !');
define('COMMENT_DELETED', 'Kommentaar edukalt kustutatud');

// lang_display_image_php
define('CONFIRM_DEL', 'Oled kindel, et tahad seda pilti KUSTUTADA ? \\nKommentaarid kustutatakse samuti.');
define('DEL_PIC', 'KUSTUTA SEE PILT');
define('SIZE', '%s x %s pixelit');
define('VIEWS', '%s korda');
define('SLIDESHOW', 'Slaidivaade');
define('STOP_SLIDESHOW', 'PEATA SLAIDIVAADE');
define('VIEW_FS', 'Klikka vaatamaks tÃ¤issuuruses pilti');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('TITLE', 'Pildi Informatsioon');
define('FILENAME', 'Faili nimi');
define('ALBUM NAME', 'Albumi nimi');
define('RATING', 'Reiting (%s votes)');
define('KEYWORDS', 'MÃ¤rksÃµnad');
define('FILE SIZE', 'Faili suurus');
define('DIMENSIONS', 'MÃµÃµdud');
define('DISPLAYED', 'Kuvatud');
define('CAMERA', 'Kaamera');
define('DATE TAKEN', 'ÃœlesvÃµtte kuupÃ¤ev');
define('APERTURE', 'Ava');
define('EXPOSURE TIME', 'SÃ¤riaeg');
define('FOCAL LENGTH', 'Fookus kaugus');
define('COMMENT', 'Kommentaar');
define('ADDFAV', 'Lisa eelistustele');
define('ADDFAVPHRASE', 'Eelistused');
define('REMFAV', 'Eemalda eelistustest');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'Muuda komentaari');
define('CONFIRM_DELETE', 'Oled kindel, et tahad seda kommentaari kustutada ?');
define('ADD_YOUR_COMMENT', 'Lisa komentaar');
define('NAME', 'Nimi');
define('COMMENT', 'Kommentaar');
define('YOUR_NAME', 'Sinu nimi');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Akna sulgemiseks klÃµpsa pildil');

// lang_ecard_php
define('TITLE', 'Saada e-kaart');
define('INVALID_EMAIL', '<b>Hoiatus</b> : Vigane e-posti aadress !');
define('ECARD_TITLE', 'Sulle on e-kaart %s\' lt');
define('VIEW_ECARD', 'Kui e-kaarti ei kuvata korrektselt, klÃµpsake lingil');
define('VIEW_MORE_PICS', 'Rohkemate piltide vaatamiseks klÃµpsake lingil !');
define('SEND_SUCCESS', 'Sinu e-kaart on saadetud');
define('SEND_FAILED', 'Vabandust, kuid serveril ei Ãµnnestu Sinu e-kaardi saatmine...');
define('FROM', 'Kellelt');
define('YOUR_NAME', 'Sinu Nimi');
define('YOUR_EMAIL', 'Sinu e-posti aadress');
define('TO', 'Kellele');
define('RCPT_NAME', 'Aadressaadi nimi');
define('RCPT_EMAIL', 'Aadressaadi e-posti aadress');
define('GREETINGS', 'Tervitused');
define('MESSAGE', 'SÃµnum');

// lang_editpics_php
define('PIC_INFO', 'Pildi&nbsp;info');
define('ALBUM', 'Album');
define('TITLE', 'Pealkiri');
define('DESC', 'Kirjeldus');
define('KEYWORDS', 'MÃ¤rksÃµnad');
define('PIC_INFO_STR', '%sx%s - %sKB - %s vaadet - %s hÃ¤Ã¤lt');
define('APPROVE', 'Kinnita pilt');
define('POSTPONE_APP', 'LÃ¼kka kinnitus edasi');
define('DEL_PIC', 'Kustuta pilt');
define('RESET_VIEW_COUNT', 'Nulli vaadete loendur');
define('RESET_VOTES', 'Nulli hÃ¤Ã¤led');
define('DEL_COMM', 'Kustuta kommendaarid');
define('UPL_APPROVAL', 'Salvestuse kinnitus');
define('EDIT_PICS', 'Paranda pilte');
define('SEE_NEXT', 'Vaata jÃ¤rgmisi pilte');
define('SEE_PREV', 'Vaata eelmisi pilte');
define('N_PIC', '%s pilti');
define('N_OF_PIC_TO_DISP', 'Piltide arv kuvamiseks');
define('APPLY', 'Omista muudatused');

// lang_groupmgr_php
define('GROUP_NAME', 'Grupi nimi');
define('DISK_QUOTA', 'Ketta kvoot');
define('CAN_RATE', 'VÃµib hinnata pilte');
define('CAN_SEND_ECARDS', 'VÃµib saata e-kaarte');
define('CAN_POST_COM', 'VÃµib kommenteerida');
define('CAN_UPLOAD', 'VÃµib salvestada pilte');
define('CAN_HAVE_GALLERY', 'VÃµib luua isikliku galerii');
define('APPLY', 'Omista muudatused');
define('CREATE_NEW_GROUP', 'Loo uus grupp');
define('DEL_GROUPS', 'Kustuta valitud grupp(id)');
define('CONFIRM_DEL', 'Hoiatus, kui sa kustutad grupi, siis kustutava grupi kasutajad kantakse \'Registereeritud\' gruppi !\\n\\nTahad sa jÃ¤tkata ?');
define('TITLE', 'Korralda kasutajagruppe');
define('APPROVAL_1', 'Av. salv. kinnitus (1)');
define('APPROVAL_2', 'Isik. salv. kinnitus (2)');
define('NOTE1', '<b>(1)</b> Salvestused avalikku albumisse vajavad admini kinnitust');
define('NOTE2', '<b>(2)</b> Salvestused kasutaja albumisse vajavad admini kinnitust');
define('NOTES', 'MÃ¤rkused');

// lang_index_php
define('WELCOME', 'Tere tulemast !');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Oled kindel, et tahad seda albumit KUSTUDADA ? \\nKÃµik pildid ja kommentaarid kustutakse samuti.');
define('DELETE', 'KUSTUTA');
define('MODIFY', 'OMADUSED');
define('EDIT_PICS', 'REDIGEERI PILTE');

// lang_list_categories
define('HOME', 'Avaleht');
define('STAT1', '<b>[pictures]</b> pilti <b>[albums]</b> albumit ja <b>[cat]</b> kategooriat koos <b>[comments]</b> kommentaariga vaadatud <b>[views]</b> korda');
define('STAT2', '<b>[pictures]</b> pilti <b>[albums]</b> albumit vaadatud <b>[views]</b> korda');
define('XX_S_GALLERY', '%s\' Galerii');
define('STAT3', '<b>[pictures]</b> pilti <b>[albums]</b> albumit koos <b>[comments]</b> kommentaariga vaadatud <b>[views]</b> korda');

// lang_list_users
define('USER_LIST', 'Kasutajate loetelu');
define('NO_USER_GAL', 'Siin pole kasutajate galeriisid');
define('N_ALBUMS', '%s album(it)');
define('N_PICS', '%s pilt(i)');

// lang_list_albums
define('N_PICTURES', '%s pilt(i)');
define('LAST_ADDED', ', viimane lisati %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Uuenda album %s');
define('GENERAL_SETTINGS', 'Ãœldised seaded');
define('ALB_TITLE', 'Albumi pealkiri');
define('ALB_CAT', 'Albumi kategooria');
define('ALB_DESC', 'Albumi kirjeldus');
define('ALB_THUMB', 'Albumi pisipilt');
define('ALB_PERM', 'Ã•igused sellele albumile');
define('CAN_VIEW', 'Albumit vÃµivad vaadata');
define('CAN_UPLOAD', 'KÃ¼lastajad vÃµivad salvestada pilte');
define('CAN_POST_COMMENTS', 'KÃ¼lastajad vÃµivad kommenteerida');
define('CAN_RATE', 'KÃ¼lastajad vÃµivad hinnata pilte');
define('USER_GAL', 'Kasutaja Galerii');
define('NO_CAT', '* Kategooriata *');
define('ALB_EMPTY', 'Album on tÃ¼hi');
define('LAST_UPLOADED', 'Viimati salvestatud');
define('PUBLIC_ALB', 'IgaÃ¼ks (avalik album)');
define('ME_ONLY', 'Ainult mina');
define('OWNER_ONLY', 'Albumi omanik (%s) ainult');
define('GROUPP_ONLY', 'Grupi \'%s\' liikmed');
define('ERR_NO_ALB_TO_MODIFY', 'Ãœhtegi albumit sa ei saa muuta andmebaasis.');
define('UPDATE', 'Uuenda album');

// lang_rate_pic_php
define('ALREADY_RATED', 'Vabandust, aga sa oled juba seda pilti hinnanud');
define('RATE_OK', 'Sinu hÃ¤Ã¤l on vastu vÃµetud');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'Kuigi saidi {SITE_NAME} administraatorid pÃ¼Ã¼avad eemaldada vÃµi muuta mistahes Ã¼ldiselt pahaks-pandavad materjalid niipea kui vÃµimalik, pole vÃµimalik nendegi poolt kohe nÃ¤ha iga postitust. SeetÃµttu pead tunnistama, et kÃµik postitused, mis siia kiirvÃ¤ljaandesse tehakse (pildid, kommentaarid, arvamused) teiste autorite poolt, nende eest administraatorid ja webmasterid ei saa vastutada (vÃ¤ljaarvatud nende endi postitused).<br />
<br />
Sa nÃµustud mitte postitama sÃµimu, roppusi, rÃµvedusi, laimu, solvanguid, Ã¤hvardusi, soolisi- ega muid mÃ¤rkusi ja kommentaare ning materjale, mis oleksid vastuolus kehtivate seadustega. Sa nÃµustud et webmaster, administraator ja saidi {SITE_NAME} vahekohtunikud omavad Ãµigust kustutada vÃµi parandada mistahes sisu kuidas ja millal neile sobib. Kasutajana sa nÃµustud, et kogu sinu Ã¼lal sisestatud info salvestatakse andmebaasi. Kuigi seda infot ei avaldata kolmandatele isikutele ilma sinu nÃµusolekuta, ei saa webmaster ja administraator vÃµtta endale vastutust  hÃ¤kkimiskatsete eest, mis vÃµivad andmed ohtu seada.<br />
<br />
See sait kasutab prÃ¤Ã¤nikuid slavestamaks infot sinu lokaalses arvutis. Need prÃ¤Ã¤nikud on mÃµeldud ainult tÃµstmaks sinu vaatamise rÃµÃµmu. Eposti aadressi kasutatakse ainult kinnitamaks sinu registreerumise detaile ja parooli.<br />
<br />
Kilkates \'Olen nÃµus\' allpool, nÃµustud sa nende nÃµuete ja tingimustega.');

// lang_register_php
define('PAGE_TITLE', 'Kasutaja registreerimine');
define('TERM_COND', 'Terminid ja tingimused');
define('I_AGREE', 'Olen nÃµus');
define('SUBMIT', 'Saada registreerimine');
define('ERR_USER_EXISTS', 'Sinu siseatud kasutajanimi juba olemas, palun vali muu');
define('ERR_PASSWORD_MISMATCH', 'Kaks parooli ei lange kokku, palun sisesta nad uuesti');
define('ERR_UNAME_SHORT', 'Kasutajanimi peab olema vÃ¤hemalt 2 tÃ¤hte');
define('ERR_PASSWORD_SHORT', 'Parool peab olema vÃ¤hemalt 2 tÃ¤hte');
define('ERR_UNAME_PASS_DIFF', 'Kasutajanimi peab paroolist erinema');
define('ERR_INVALID_EMAIL', 'Vigane e-posti aadress');
define('ERR_DUPLICATE_EMAIL', 'Keegi on juba registreerunud sinu sisestatud e-posti aadressiga');
define('ENTER_INFO', 'Sisesta registreerimisinfo');
define('REQUIRED_INFO', 'Vajalik info');
define('OPTIONAL_INFO', 'Vabatahtlik info');
define('USERNAME', 'Kasutajanimi');
define('PASSWORD', 'Parool');
define('PASSWORD_AGAIN', 'Parool uuesti');
define('EMAIL', 'E-post');
define('LOCATION', 'Elukoht');
define('INTERESTS', 'Huvid');
define('WEBSITE', 'Koduleht');
define('OCCUPATION', 'Elukutse');
define('ERROR', 'VIGA');
define('CONFIRM_EMAIL_SUBJECT', '%s - Registreerumise kinnitus');
define('INFORMATION', 'Informatsioon');
define('FAILED_SENDING_EMAIL', 'Reigistreerumise kinnituse e-posti ei saa saata !');
define('THANK_YOU', 'TÃ¤name Teid registreerumast.<br /><br />E-post infoga, kuidas oma kontot aktiveerida, saadeti sinu antud e-posti aadressile.');
define('ACCT_CREATED', 'Sinu konto on loodud ja nÃ¼Ã¼d sa vÃµid sisse logida oma kasutajanime ja parooliga');
define('ACCT_ACTIVE', 'Sinu konto on nÃ¼Ã¼d aktiveeritud ja sa vÃµid sisse logida oma kasutajanime ja parooliga');
define('ACCT_ALREADY_ACT', 'Sinu konto on juba aktiivne !');
define('ACCT_ACT_FAILED', 'Seda kontot ei saa aktiveerida !');
define('ERR_UNK_USER', 'Valitud kasutaja puudub !');
define('X_S_PROFILE', '%s\'i profiil');
define('GROUP', 'Grupp');
define('REG_DATE', 'Liitutud');
define('DISK_USAGE', 'Ketta kasutus');
define('CHANGE_PASS', 'Muuda minu parool');
define('CURRENT_PASS', 'Kehtiv parool');
define('NEW_PASS', 'Uus parool');
define('NEW_PASS_AGAIN', 'Uus parool veelkord');
define('ERR_CURR_PASS', 'Praegune parool on vale');
define('APPLY_MODIF', 'Omista muudatused');
define('UPDATE_SUCCESS', 'Sinu profiil on uuendatud');
define('PASS_CHG_SUCCESS', 'Sinu parool on muudetud');
define('PASS_CHG_ERROR', 'Sinu parooli ei muudetud');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'TÃ¤name sind registreerumast {SITE_NAME}\'s

Sinu kasutajanimi on : "{USER_NAME}"
Sinu parool on : "{PASSWORD}"

JÃ¤rgnevalt et aktiveerida oma konto, pead klikkama lingile allpool
vÃµi kopeeri ja kleebi see oma weebisirvijasse.

{ACT_LINK}

Tervitustega,

{SITE_NAME} 
');

// lang_reviewcom_php
define('TITLE', 'Kommentaaride Ã¼levaade');
define('NO_COMMENT', 'Siin pole Ã¼htegi kommentaari Ã¼le vaadata');
define('N_COMM_DEL', '%s kommentaar(i) kustutatud');
define('N_COMM_DISP', 'Kommentaaride arv kuvamiseks');
define('SEE_PREV', 'Vaata eelmist');
define('SEE_NEXT', 'Vaata jÃ¤rgmist');
define('DEL_COMM', 'Kustuta valitud kommentaarid');

// lang_search_php
define('SEARCH', 'Otsi pildikogumikku');

// lang_search_new_php
define('PAGE_TITLE', 'Otsi uusi pilte');
define('SELECT_DIR', 'Vali kataloog');
define('SELECT_DIR_MSG', 'See funktsioon lubab sul lisada kogumiku pilte, mis sa oled salvestanud oma serverisse FTP\'ga.<br /><br />Vali kataloog kuhu sa oma pildid oled salvestanud');
define('NO_PIC_TO_ADD', 'Siin pole pilte lisada');
define('NEED_ONE_ALBUM', 'Sa vajad vÃ¤hemalt Ã¼hte albumit selle funktsiooni kasutamiseks');
define('WARNING', 'Hoiatus');
define('CHANGE_PERM', 'see skript ei saa kirjutada sellesse kataloogi, sa pead muutma selle Ãµigusi (mood 755 vÃµi 777) enne kui Ã¼ritad uuesti lisada pilte !');
define('TARGET_ALBUM', '<b>Pane &quot;</b>%s<b>&quot; pildid albumisse </b>%s');
define('FOLDER', 'Kaust');
define('IMAGE', 'Pilt');
define('ALBUM', 'Album');
define('RESULT', 'Tulemus');
define('DIR_RO', 'Pole kirjutatav. ');
define('DIR_CANT_READ', 'Pole loetav. ');
define('INSERT', 'Lisan uued pildid galeriisse');
define('LIST_NEW_PIC', 'Uute piltide loetelu');
define('INSERT_SELECTED', 'Lisa valitud pildid');
define('NO_PIC_FOUND', 'Ei leitud uusi pilte');
define('BE_PATIENT', 'Palun ole kannatlik, skript vajab piltide lisamiseks aega');
define('NOTES', '<ul><li><b>OK</b> : tÃ¤hendab, et pilt lisati edukalt<li><b>DP</b> : tÃ¤hendab, et pilt on dublikaat ja sisaldub juba andmebaasis<li><b>PB</b> : tÃ¤hendab, et pilti ei saa lisada, kontrolli oma seadeid ja kataloogi Ãµigusi kus su pildid asuvad<li>Kui mÃ¤rgid \'OK, DP, PB\' ei ilmu, klikka katkenud pildil nÃ¤gemaks mistahes PHP poolt antud veateadet<li>Kui su sirvijal on \'timeout\', vajuta reload nuppu</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('TITLE', 'Salvesta pilt');
define('MAX_FSIZE', 'Maksimaalne lubatud failisuurus on %s KB');
define('ALBUM', 'Album');
define('PICTURE', 'Pilt');
define('PIC_TITLE', 'Pildi pealkiri');
define('DESCRIPTION', 'Pildi kirjeldus');
define('KEYWORDS', 'MÃ¤rksÃµnad (eralda tÃ¼hikutega)');
define('ERR_NO_ALB_UPLOADABLES', 'Vabandust, kuid siin pole albumit kuhu sul oleks piltide salvestamine lubatud');

// lang_usermgr_php
define('TITLE', 'Halda kasutajaid');
define('NAME_A', 'Nimed kasvavalt');
define('NAME_D', 'Nimed kahanevalt');
define('GROUP_A', 'Grupid kasvavalt');
define('GROUP_D', 'Grupid kahanevalt');
define('REG_A', 'Reg kuupÃ¤ev kasvavalt');
define('REG_D', 'Reg kuupÃ¤ev kahanevalt');
define('PIC_A', 'Piltide arv kasvavalt');
define('PIC_D', 'Piltide arv kahanevalt');
define('DISKU_A', 'Ketta kasutus kasvavalt');
define('DISKU_D', 'Ketta kasutus kahanevalt');
define('SORT_BY', 'Sordi kasutajaid');
define('ERR_NO_USERS', 'Kasutajate tabel tÃ¼hi !');
define('ERR_EDIT_SELF', 'Sa vÃµid muuta oma profiili, kasuta \'Minu profiil\' linki selleks');
define('EDIT', 'MUUDA');
define('DELETE', 'KUSTUTA');
define('NAME', 'Kasutajanimi');
define('GROUP', 'Grupp');
define('INACTIVE', 'Mitteaktiivne');
define('OPERATIONS', 'Funktsioonid');
define('PICTURES', 'Pildid');
define('DISK_SPACE', 'Kasutatud ruumi / Kvoot');
define('REGISTERED_ON', 'Registreeritud');
define('U_USER_ON_P_PAGES', '%d kasutajat %d-el lehel');
define('CONFIRM_DEL', 'Oled kindel, et tahad selle kasutaja KUSTUTADA ? \\nKÃµik tema pildid ja albumid kustutatakse samuti.');
define('MAIL', 'POST');
define('ERR_UNKNOWN_USER', 'Valitud kasutajat pole !');
define('MODIFY_USER', 'Muuda kasutaja');
define('NOTES', 'MÃ¤rkused');
define('NOTE_LIST', '<li>Kui sa ei taha muuta kasutuselolevat parooli, jÃ¤ta \"parool\" vÃ¤li tÃ¼hjaks');
define('PASSWORD', 'Parool');
define('USER_ACTIVE', 'Kasutaja aktiivne');
define('USER_GROUP', 'Kasutaja grupp');
define('USER_EMAIL', 'Kasutaja epost');
define('USER_WEB_SITE', 'Kasutaja kodukas');
define('CREATE_NEW_USER', 'Loo uus kasutaja');
define('USER_LOCATION', 'Kasutaja elukoht');
define('USER_INTERESTS', 'Kasutaja huvid');
define('USER_OCCUPATION', 'Kasutaja elukutse');

// lang_util_php
define('TITLE', 'Pildisuuruse muutmine');
define('WHAT_IT_DOES', 'Mida see teeb');
define('WHAT_UPDATE_TITLES', 'uuendab failist pealkirju');
define('WHAT_DELETE_TITLE', 'Kustutab pealkirju');
define('WHAT_REBUILD', 'Genereerib uued pisipildid ja muudetud suurusega pildid');
define('WHAT_DELETE_ORIGINALS', 'Kustutab orginaalsuurusega pildid, asendades need uue suurusega piltidega');
define('FILE', 'Fail');
define('TITLE_SET_TO', 'pealkiri muudetud ');
define('SUBMIT_FORM', 'sisesta');
define('UPDATED_SUCCESFULLY', 'uuendatud edukalt');
define('ERROR_CREATE', 'VIGA tekitamisel');
define('CONTINUE', 'Process more images');
define('MAIN_SUCCESS', 'Fail %s was successfully used as main picture');
define('ERROR_RENAME', ' %s Ã¼mbernimetamine %s ebaÃµnnestus');
define('ERROR_NOT_FOUND', 'Faili %s ei leitud');
define('BACK', 'Tagasi pealehele');
define('THUMBS_WAIT', 'Uuendan pisipilte ja/vÃµi muudetud suurusega pilte, palun oota...');
define('THUMBS_CONTINUE_WAIT', 'JÃ¤tkan pisipiltidde ja/vÃµi muudetud suurusega piltide uuendamist...');
define('TITLES_WAIT', 'Uuendan pealkirju, palun oota...');
define('DELETE_WAIT', 'Kustutan pealkirju, palun oota...');
define('REPLACE_WAIT', 'Kustutan orginaalid ja asendan muudetud suurusega piltidega, palun oota ...');
define('INSTRUCTION', 'LÃ¼hijuhend');
define('INSTRUCTION_ACTION', 'Vali tegevus');
define('INSTRUCTION_PARAMETER', 'Sea parameetrid');
define('INSTRUCTION_ALBUM', 'Vali album');
define('INSTRUCTION_PRESS', 'Vajuta %s');
define('UPDATE', 'Uuenda pisipildid ja/vÃµi muudetud suurusega fotod');
define('UPDATE_WHAT', 'Mida tuleks uuendada');
define('UPDATE_THUMB', 'Ainult pisipildid');
define('UPDATE_PIC', 'Ainult muudetud suurusega pildid');
define('UPDATE_BOTH', 'MÃµlemad, pisipildid ja muudetud suurusga pildid');
define('UPDATE_NUMBER', 'TÃ¶Ã¶deldud piltide arv kliki kohta');
define('UPDATE_OPTION', '(Sea see valik vÃ¤iksemaks kui tekkib probleem ajalimiidiga (timeout))');
define('FILENAME_TITLE', 'Failinimi &rArr; Pildi pealkiri');
define('FILENAME_HOW', 'Kuidas tuleks failinime muuta');
define('FILENAME_REMOVE', 'Eemalda .jpg lÃµpp ja asenda _ (alakriipsud) tÃ¼hikutega');
define('FILENAME_EURO', 'Muuda 2003_11_23_13_20_20.jpg to 23/11/2003 13:20');
define('FILENAME_US', 'Muuda 2003_11_23_13_20_20.jpg to 11/23/2003 13:20');
define('FILENAME_TIME', 'Muuda 2003_11_23_13_20_20.jpg to 13:20');
define('DELETE', 'Pildi pealkirjade vÃµi orginaalsuurusega piltide kustutamine');
define('DELETE_TITLE', 'Kustuta pildi pealkirjad');
define('DELETE_ORIGINAL', 'Kustusta orginaalsuurusega fotod');
define('DELETE_REPLACE', 'Kustuta orginaalsuurusega fotod asendades need muudetud suurusega piltidega');
define('SELECT_ALBUM', 'Vali album');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>