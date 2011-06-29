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
/*   $Id: lang-finnish-utf-8.php,v 1.1 2004/07/27 20:01:09 akamu Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Finnish');
define('LANG_NAME_NATIVE', 'Suomea');
define('LANG_COUNTRY_CODE', 'fi');
define('TRANS_NAME', 'V.Taavila');
define('TRANS_EMAIL', 'quandox@kastema.to');
define('TRANS_WEBSITE', 'http://');
define('TRANS_DATE', '2003-10-14');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'UTF-8');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'KyllÃ¤');
define('NO', 'Ei');

// some common strings
define('BACK', 'TAKAISIN');
define('CONTINUE', 'JATKA');
define('INFO', 'Info');
define('ERROR', 'Virhe');

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
$lang_day_of_week = array('Su','Ma','Ti','Ke','To','Pe','La',);
// Day of the month
$lang_month = array('Tammikuu','Helmikuu','Maaliskuu','Huhtikuu','Toukokuu','KesÃ¤kuu','HeinÃ¤kuu','Elokuu','Syyskuu','Lokakuu','Marraskuu','Joulukuu',);
// For the word censor
$lang_bad_words = array('*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*',);
// lang_meta_album_names
define('RANDOM', 'Satunaiset kuvat');
define('LASTUP', 'Uusimmat kuvat');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Viimeksi pÃ¤ivitetyt albumit');
define('LASTCOM', 'Uusimmat komentit');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Katsotuimmat');
define('TOPRATED', 'Suosituimmat');
define('LASTHITS', 'Viimeksi tarkasteltu');
define('SEARCH', 'Haun tulokset');
define('FAVPICS', 'Suosikkikini');

// lang_errors
define('ACCESS_DENIED', 'Ei oikeuksia tÃ¤lle sivulle.');
define('PERM_DENIED', 'Ei oikeuksia kyseisen toiminnon suorittamiseen.');
define('PARAM_MISSING', 'ScriptiÃ¤ kutsuttu ilman vaadittavia parametrejÃ¤.');
define('NON_EXIST_AP', 'Valittua albumia/kuvaa ei lÃ¶ydy !');
define('QUOTA_EXCEEDED', 'Levytilasi on tÃ¤ynnÃ¤<br /><br />Levytilasi on tÃ¤ynnÃ¤ [quota]K, kuviesi vievÃ¤ tila [space]K, lisÃ¤Ã¤mÃ¤llÃ¤ tÃ¤mÃ¤n kuvan tilasi koko ylittyisi.');
define('GD_FILE_TYPE_ERR', 'Kun kÃ¤ytÃ¤t GD:tÃ¤ sallitut tiedostomuodot ovat JPEG ja PNG.');
define('INVALID_IMAGE', 'Kuva on korruptoitunut eikÃ¤ sitÃ¤ voi kÃ¤sitellÃ¤ GD:llÃ¤');
define('RESIZE_FAILED', 'Ongelma thumbnailien luomisessa.');
define('NO_IMG_TO_DISPLAY', 'Ei nÃ¤yttettÃ¤viÃ¤ kuvia');
define('NON_EXIST_CAT', 'Valittua kategoriaa ei lÃ¶ydy');
define('ORPHAN_CAT', 'Ongelmia kategoriassa, aja kategoria manageri selvitÃ¤Ã¤ksesi ongelma.');
define('DIRECTORY_RO', 'Hakemistoon \'%s\' ei ole mÃ¤Ã¤ritelty kirjoitusoikeuksia. Kuvia ei voi poistaa');
define('NON_EXIST_COMMENT', 'Valittua kommenttia ei lÃ¶ydy.');
define('PIC_IN_INVALID_ALBUM', 'Kuvaa ei ole albumissa (%s)!?');
define('BANNED', 'Sinulta on evÃ¤tty pÃ¤Ã¤sy tÃ¤lle sivulle.');
define('NOT_WITH_UDB', 'TÃ¤mÃ¤ toiminto on poistettu kÃ¤ytÃ¶stÃ¤ Coppermine gallerissa koska tÃ¤mÃ¤ on integroitu foorumi ohjelmistoon. Toiminto jota eritit tehdÃ¤ ei ole tuettuna tÃ¤ssÃ¤ kokoonpanossa, toiminto lÃ¶ytyy mahdollisesti foorumi ohjelmistosta.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', 'Mene albumi listaan');
define('ALB_LIST_LNK', 'Albumi lista');
define('MY_GAL_TITLE', 'Mene omaan galleriaan');
define('MY_GAL_LNK', 'Oma galleria');
define('MY_PROF_LNK', 'Omat asetukset');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Vaihda yllÃ¤pitotilaan');
define('ADM_MODE_LNK', 'YllÃ¤pitotila');
define('USR_MODE_TITLE', 'Vaihda kÃ¤yttÃ¤jÃ¤tilaan');
define('USR_MODE_LNK', 'KÃ¤yttÃ¤jÃ¤tila');
define('UPLOAD_PIC_TITLE', 'LisÃ¤Ã¤ kuva albumiin');
define('UPLOAD_PIC_LNK', 'LisÃ¤Ã¤ kuva');
define('REGISTER_TITLE', 'Luo uusi tili');
define('REGISTER_LNK', 'RekisterÃ¶idy');
define('LOGIN_LNK', 'Kirjaudu');
define('LOGOUT_LNK', 'Poistu');
define('LASTUP_LNK', 'Viimeksi lisÃ¤tty');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Uusimmat kommentit');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Katsotuimmat');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Suosituimmat');
define('SEARCH_LNK', 'Haku');
define('FAV_LNK', 'Suosikkini');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Tarkistettavat');
define('CONFIG_LNK', 'Asetukset');
define('ALBUMS_LNK', 'Albumit');
define('CATEGORIES_LNK', 'Kategoriat');
define('USERS_LNK', 'KÃ¤yttÃ¤jÃ¤t');
define('GROUPS_LNK', 'RyhmÃ¤t');
define('COMMENTS_LNK', 'Kommentit');
define('SEARCHNEW_LNK', 'LisÃ¤Ã¤ \"FTP\" kuvat');
define('UTIL_LNK', 'KÃ¤sittele Kuvia');
define('BAN_LNK', 'KiellÃ¤ KÃ¤yttÃ¤jiÃ¤');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Luo / muokkaa albumeita');
define('MODIFYALB_LNK', 'Muokkaa omaa albumia');
define('MY_PROF_LNK', 'Omat asetukset');

// lang_cat_list
define('CATEGORY', 'Kategoria');
define('ALBUMS', 'Albumit');
define('PICTURES', 'Kuvat');

// lang_album_list
define('ALBUM_ON_PAGE', '%d albumia %d sivu(a)');

// lang_thumb_view
define('DATE', 'PVM');
define('NAME', 'NIMI');
define('TITLE', 'OTSIKKO');
define('SORT_DA', 'JÃ¤rjestÃ¤ pÃ¤ivÃ¤mÃ¤Ã¤rittÃ¤in nousevasti');
define('SORT_DD', 'JÃ¤rjestÃ¤ pÃ¤ivÃ¤mÃ¤Ã¤rittÃ¤in laskevasti');
define('SORT_NA', 'JÃ¤rjestÃ¤ nimellÃ¤ nousevasti');
define('SORT_ND', 'JÃ¤rjestÃ¤ nimellÃ¤ laskevasti');
define('SORT_TA', 'JÃ¤rjestÃ¤ otsikolla nousevasti');
define('SORT_TD', 'JÃ¤rjestÃ¤ otsikolla laskevasti');
define('PIC_ON_PAGE', '%d kuvaa %d sivu(a)');
define('USER_ON_PAGE', '%d kÃ¤yttÃ¤jÃ¤Ã¤ %d sivu(a)');

// lang_img_nav_bar
define('THUMB_TITLE', 'Takaisin thumbnail sivulle');
define('PIC_INFO_TITLE', 'NÃ¤ytÃ¤/piilota kuvan tiedot');
define('SLIDESHOW_TITLE', 'diashow');
define('ECARD_TITLE', 'LÃ¤hetÃ¤ tÃ¤mÃ¤ kuva e-korttina');
define('ECARD_DISABLED', 'e-kortit pois pÃ¤Ã¤ltÃ¤');
define('ECARD_DISABLED_MSG', 'Sinulla ei ole oikeuksia lÃ¤hettÃ¤Ã¤ e-kortteja');
define('PREV_TITLE', 'NÃ¤ytÃ¤ edellinen kuva');
define('NEXT_TITLE', 'See next picture');
define('PIC_POS', 'PICTURE %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', 'Ã„Ã¤nestÃ¤ tÃ¤tÃ¤ kuvaa ');
define('NO_VOTES', '(ei Ã¤Ã¤niÃ¤ vielÃ¤)');
define('RATING', '(nykyinen taso : %s / 5 ja %s Ã¤Ã¤ntÃ¤)');
define('RUBBISH', 'Roskaa');
define('POOR', 'TylsÃ¤Ã¤');
define('FAIR', 'Keskinkertainen');
define('GOOD', 'HyvÃ¤');
define('EXCELLENT', 'Loistava');
define('GREAT', 'Mahtava');

// lang_cpg_die
define('INFORMATION', 'Info');
define('ERROR', 'Virhe');
define('CRITICAL_ERROR', 'Kriittinen Virhe');
define('FILE', 'Tiedosto: ');
define('LINE', 'Rivi: ');

// lang_display_thumbnails
define('FILENAME', 'Tiedostonimi : ');
define('FILESIZE', 'Tiedostokoko : ');
define('DIMENSIONS', 'Tarkkuus : ');
define('DATE_ADDED', 'LisÃ¤tty : ');

// lang_get_pic_data
define('N_COMMENTS', '%s kommenttia');
define('N_VIEWS', '%s tarkastelua');
define('N_VOTES', '(%s Ã¤Ã¤ntÃ¤)');

// lang_smilies_inc_php
define('EXCLAMATION', 'Huuto');
define('QUESTION', 'Kysymys');
define('VERY HAPPY', 'ErittÃ¤in Iloinen');
define('SMILE', 'Hymy');
define('SAD', 'Suru');
define('SURPRISED', 'YllÃ¤ttynyt');
define('SHOCKED', 'JÃ¤rkyttynyt');
define('CONFUSED', 'HÃ¤keltynyt');
define('COOL', 'Cool');
define('LAUGHING', 'Nauru');
define('MAD', 'Hullu');
define('RAZZ', 'Razz');
define('EMBARASSED', 'Embarassed');
define('CRYING OR VERY SAD', 'ItkeÃ¤');
define('EVIL OR VERY MAD', 'ErittÃ¤in Hullu');
define('TWISTED EVIL', 'Kieroutunut Hullu');
define('ROLLING EYES', 'PyÃ¶rivÃ¤t silmÃ¤t');
define('WINK', 'Vink');
define('IDEA', 'Idea');
define('ARROW', 'Nuoli');
define('NEUTRAL', 'Neutraali');
define('MR. GREEN', 'Mr. VihreÃ¤');

// lang_admin_php
define('LV_ADMIN', 'Poistuu yllÃ¤pitotilasta...');
define('ENT_ADMIN', 'SisÃ¤Ã¤n yllÃ¤pitotilaan...');

// lang_albmgr_php
define('ALB_NEED_NAME', 'Albumi tarvitsee nimen !');
define('CONFIRM_MODIFS', 'Haluatko varmasti tehdÃ¤ nÃ¤mÃ¤ muutokset ?');
define('NO_CHANGE', 'Et tehnyt yhtÃ¤Ã¤n muutosta !');
define('NEW_ALBUM', 'Uusi albumi');
define('CONFIRM_DELETE1', 'Haluatko varmasti poistaa tÃ¤mÃ¤n albumin albumin ?');
define('CONFIRM_DELETE2', '\\nKaikki kuvat ja kommentit tulevat poistumaan !');
define('SELECT_FIRST', 'Valitse albumi ensin');
define('ALB_MRG', 'Albumi Manageri');
define('MY_GALLERY', '* Oma galleria *');
define('NO_CATEGORY', '* Ei kategoriaa *');
define('DELETE', 'Poista');
define('NEW', 'Uusi');
define('APPLY_MODIFS', 'HyvÃ¤ksy muutokset');
define('SELECT_CATEGORY', 'Valitse Kategoria');

// lang_catmgr_php
define('MISS_PARAM', 'Toimintoa \'%s\'ei voitu suorittaa !');
define('UNKNOWN_CAT', 'Valittua kategoriaa ei ole enÃ¤Ã¤ tietokannassa');
define('USERGAL_CAT_RO', 'KÃ¤yttÃ¤jien gallerioiden kategorioita ei voi poistaa !');
define('MANAGE_CAT', 'Hallitse kategorioita');
define('CONFIRM_DELETE', 'Haluatko varmasti POISTAA tÃ¤mÃ¤n kategorian');
define('CATEGORY', 'Kategoria');
define('OPERATIONS', 'Toiminnot');
define('MOVE_INTO', 'SiirrÃ¤');
define('UPDATE_CREATE', 'PÃ¤ivitÃ¤/Luo kategoria');
define('PARENT_CAT', 'PÃ¤Ã¤kategoria');
define('CAT_TITLE', 'Kategorian otsikko');
define('CAT_DESC', 'Kategorian tarkenne');

// lang_config_php
define('TITLE', 'Asetukset');
define('RESTORE_CFG', 'Palauta oletukset');
define('SAVE_CFG', 'Tallenna muutokset');
define('NOTES', 'Huomio');
define('INFO', 'Info');
define('UPD_SUCCESS', 'Coppermine asetukset pÃ¤ivitetty');
define('RESTORE_SUCCESS', 'Coppermine oletusasetukset palautettu');
define('NAME_A', 'Nimi nousevasti');
define('NAME_D', 'Nimi laskevasti');
define('TITLE_A', 'Otsikko nousevasti');
define('TITLE_D', 'Otsikko laskevasti');
define('DATE_A', 'PÃ¤ivÃ¤ nousevasti');
define('DATE_D', 'PÃ¤ivÃ¤ laskevasti');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Height');
define('TH_WD', 'Width');

// lang_config_data
define('GALLERY_NAME', 'Gallerian nimi');
define('GALLERY_DESCRIPTION', 'Gallerian tarkenne');
define('GALLERY_ADMIN_EMAIL', 'Gallerian yllÃ¤pitÃ¤jÃ¤n sÃ¤hkÃ¶posti');
define('ECARDS_MORE_PIC_TARGET', 'Address to nuke folder ie http://www.mysite.tld/html/');
define('LANG', 'Kieli');
define('CPGTHEME', 'Teema');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'Albumin "nÃ¤yttÃ¶" asetukset');
define('MAIN_TABLE_WIDTH', 'PÃ¤Ã¤taulukon leveys (pikseleissÃ¤ tai %)');
define('SUBCAT_LEVEL', 'Kuinka monta kategoriaa nÃ¤ytetÃ¤Ã¤n tasolla');
define('ALBUMS_PER_PAGE', 'Kuinka monta albumia nÃ¤ytetÃ¤Ã¤n sivulla');
define('ALBUM_LIST_COLS', 'Kuinka monta saraketta nÃ¤ytetÃ¤Ã¤n albumi listassa');
define('ALB_LIST_THUMB_SIZE', 'Thumbnailien koko pikseleissÃ¤');
define('MAIN_PAGE_LAYOUT', 'MitÃ¤ tietoja etusivulla nÃ¤ytetÃ¤Ã¤n');
define('FIRST_LEVEL', 'NÃ¤ytÃ¤ ensimmÃ¤isen tason albumin thumbnailit kategoriassa');
define('THUMB_VIEW_TITLE', 'Thumbnailien nÃ¤yttÃ¶');
define('THUMBCOLS', 'Sarakkeita thumbnail sivulla');
define('THUMBROWS', 'RivejÃ¤ thumbnail sivulla');
define('MAX_TABS', 'Kaistaleiden maksimi mÃ¤Ã¤rÃ¤');
define('CAPTION_IN_THUMBVIEW', 'NÃ¤ytÃ¤ kuvateksti thumbnaileissa');
define('DISPLAY_COMMENT_COUNT', 'NÃ¤ytÃ¤ kommenttien mÃ¤Ã¤rÃ¤ thumbnaileissa');
define('DEFAULT_SORT_ORDER', 'Kuvien oletus jÃ¤rjestys');
define('MIN_VOTES_FOR_RATING', 'Tarvittavien Ã¤Ã¤nien mÃ¤Ã¤rÃ¤ ennen \'suosituimmat\' listalle pÃ¤Ã¤syÃ¤');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'Kuvien nÃ¤yttÃ¶ &amp; Kommentti asetukset');
define('PICTURE_TABLE_WIDTH', 'Kuvan nÃ¤yttÃ¶ taulukon leveys (pikseleinÃ¤ tai %)');
define('DISPLAY_PIC_INFO', 'Kuvan info oletuksena piilotettu');
define('FILTER_BAD_WORDS', 'Rumasana filtteri');
define('ENABLE_SMILIES', 'HyvÃ¤ksy hymiÃ¶t kommentissa');
define('DISABLE_FLOOD_PROTECTION', 'Allow several consecutive comments on one pic from the same user');
define('COMMENT_EMAIL_NOTIFICATION', 'Email site admin upon comment submission');
define('MAX_IMG_DESC_LENGTH', 'Kuvatekstin maksimi pituus');
define('MAX_COM_WLENGTH', 'Maksimi mÃ¤Ã¤rÃ¤ merkkejÃ¤ sanassa');
define('MAX_COM_LINES', 'Kommentti rivien maksimi mÃ¤Ã¤rÃ¤');
define('MAX_COM_SIZE', 'Kommentin maksimi pituus');
define('DISPLAY_FILM_STRIP', 'NÃ¤ytÃ¤ thumbnaileja kuva sivulla');
define('MAX_FILM_STRIP_ITEMS', 'Thumbnaileja kuva sivulla');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE',  'Kuvien ja thumbnailien asetukset');
define('JPEG_QUAL', 'Tarkkuus JPEG tiedostoilla');
define('THUMB_WIDTH', 'Thumbnail maksimi leveys tai korkeus <b>*</b>');
define('THUMB_USE', 'KÃ¤ytÃ¤ mittaa ( leveys tai korkeus tai Maksimi mitta thumbnaileissa )<b>*</b>');
define('MAKE_INTERMEDIATE', 'Luo vÃ¤liaikaiset kuvat');
define('PICTURE_WIDTH', 'VÃ¤liaikaiset kuvien maksimi leveys tai korkeus <b>*</b>');
define('MAX_UPL_SIZE', 'Ladattavien kuvien maksimi koko (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Ladattavien kuvien maksimi leveys (pikseleinÃ¤)');
define('USER_SETTING_TITLE',   'KÃ¤yttÃ¤jÃ¤ asetukset');
define('ALLOW_USER_REGISTRATION', 'Salli uusien kÃ¤yttÃ¤jien rekisterÃ¶ityÃ¤');
define('REG_REQUIRES_VALID_EMAIL', 'RekisterÃ¶inti vaatii sÃ¤hkÃ¶posti varmistuksen');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Salli kahdelle kÃ¤yttÃ¤jÃ¤lle sama sÃ¤hkÃ¶posti osoite');
define('ALLOW_PRIVATE_ALBUMS', 'KÃ¤yttÃ¤jÃ¤t saavat yksityiset albumit');
define('CUSTOM_FIELDS_TITLE', 'Valinnaiset kentÃ¤t kuvan nÃ¤ytÃ¶ssÃ¤ (jÃ¤tÃ¤ tyhjÃ¤ksi jos et halua kÃ¤yttÃ¤Ã¤)');
define('USER_FIELD1_NAME', 'KenttÃ¤ 1 nimi');
define('USER_FIELD2_NAME', 'KenttÃ¤ 2 nimi');
define('USER_FIELD3_NAME', 'KenttÃ¤ 3 nimi');
define('USER_FIELD4_NAME', 'KenttÃ¤ 4 nimi');
define('58', 'Kuvien ja thumbnailien lisÃ¤ asetukset');
define('SHOW_PRIVATE', 'NÃ¤ytÃ¤ yksityisessa albumissa Ikoni kirjautumattomalle kÃ¤yttÃ¤jÃ¤lle');
define('FORBIDEN_FNAME_CHAR', 'Kielletyt merkit tiedostonimissÃ¤');
define('ALLOWED_FILE_EXTENSIONS', 'HyvÃ¤ksytyt tiedotopÃ¤Ã¤tteet');
define('THUMB_METHOD', 'Kuvien koot muutetaan kÃ¤yttÃ¤mÃ¤llÃ¤');
define('IMPATH', 'TÃ¤ydellinen ImageMagick/netpbm polku \'konventteri\' (esimerkiksi /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'KyvÃ¤ksytyt kuva tyypit (kelpaa vain ImageMagickia kÃ¤ytettÃ¤essÃ¤)');
define('IM_OPTIONS', 'ImageMagick komentorivin asetukset');
define('READ_EXIF_DATA', 'Lue EXIF tiedot JPEG kuvista');
define('READ_IPTC_DATA', 'Read IPTC data in JPEG files');
define('FULLPATH', 'Albumi hakemisto <b>*</b>');
define('USERPICS', 'KÃ¤yttÃ¤jien kuvien hakemisto <b>*</b>');
define('NORMAL_PFX', 'VÃ¤liaikaisten kuvien etuliite <b>*</b>');
define('THUMB_PFX', 'Thumbnailien etuliite <b>*</b>');
define('DEFAULT_DIR_MODE', 'Hakemistojen oletus oikeudet');
define('DEFAULT_FILE_MODE', 'Kuvien oletus oikeudet');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', 'EvÃ¤ste &amp; koodaus asetukset');
define('COOKIE_NAME', 'EvÃ¤steen nimi');
define('COOKIE_PATH', 'EvÃ¤steen polku');
define('CHAR_SET', 'KÃ¤ytettÃ¤vÃ¤ koodaus');
define('MISC_SETTING_TITLE', 'Muut asetukset');
define('DEBUG_MODE', 'NÃ¤ytÃ¤ palvelimen virheilmoitukset');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) KentÃ¤t joissa on * merkki ei saa muuttaa jos galleriassa on jo kuvia.</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Sinun on kirjoitettava nimesi kommenttiin');
define('COM_ADDED', 'Kommentti lisÃ¤tty');
define('ALB_NEED_TITLE', 'Albumin otsikko puuttuu !');
define('NO_UDP_NEEDED', 'PÃ¤ivitysta ei tarvita.');
define('ALB_UPDATED', 'Albumi pÃ¤ivitetty');
define('UNKNOWN_ALBUM', 'Valittua albumia ei lÃ¶ydy tai sinulla ei ole oikeuksia siihen');
define('NO_PIC_UPLOADED', 'Ei lisÃ¤ttyÃ¤ kuvaa !<br /><br />Jos todella valitsit lisÃ¤ttÃ¤vÃ¤n kuvan pyydÃ¤ yllÃ¤pitÃ¤jÃ¤Ã¤ tarkistamaan palvelimen asetukset...');
define('ERR_MKDIR', 'Virhe hakemiston luomisessa %s !');
define('DEST_DIR_RO', 'LÃ¤hde hakemisto %s ei ole luettavissa !');
define('ERR_MOVE', 'Mahdotonta siirtÃ¤Ã¤ %s - %s !');
define('ERR_FSIZE_TOO_LARGE', 'Tiedosto jota yritit lisÃ¤tÃ¤ oli liian suuri (suurin sallittu koko %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Tiedosto jota yritit lisÃ¤tÃ¤ oli liian suuri (suurin sallittu koko on %s KB) !');
define('ERR_INVALID_IMG', 'Tiedosto jota yritit lisÃ¤tÃ¤ ei hyvÃ¤ksytÃ¤ !');
define('ALLOWED_IMG_TYPES', 'Voit lisÃ¤tÃ¤ ainostaan %s kuvia.');
define('ERR_INSERT_PIC', 'Kuvaa \'%s\' ei voi liittÃ¤Ã¤ albumiin ');
define('UPLOAD_SUCCESS', 'Kuva lisÃ¤tty onnistuneesti<br /><br />Se tulee julkiseksi jos yllÃ¤pitÃ¤jÃ¤ hyvÃ¤ksyy sen.');
define('INFO', 'Info');
define('ERR_COMMENT_EMPTY', 'Kommenttisi oli tyhjÃ¤ !');
define('ERR_INVALID_FEXT', 'Vain seuraavat tiedostopÃ¤Ã¤tteet ovat sallittuja : <br /><br />%s.');
define('NO_FLOOD', 'Viimeinen kommentti on jo lisÃ¤tty<br /><br />Muokkaa kommenttia jos haluat muuttaa sitÃ¤');
define('REDIRECT_MSG', 'Sinut siirretÃ¤Ã¤n.<br /><br /><br />Klikkaa \'JATKA\' jos sivu ei pÃ¤ivity automaattisesti');
define('UPL_SUCCESS', 'Kuvasi lisÃ¤tty onnistuneesti');

// lang_delete_php
define('CAPTION', 'Kuvateksti');
define('FS_PIC', 'tÃ¤ysikokoinen kuva');
define('DEL_SUCCESS', 'onnistuneesti poistettu');
define('NS_PIC', 'normaali kokoinen kuva');
define('ERR_DEL', 'ei voi poistaa');
define('THUMB_PIC', 'thumbnaili');
define('COMMENT', 'kommentti');
define('IM_IN_ALB', 'kuva albumissa');
define('ALB_DEL_SUCCESS', 'Albumi \'%s\' poistettu');
define('ALB_MGR', 'Albumin Hallinta');
define('ERR_INVALID_DATA', 'VirhellistÃ¤ dataa vÃ¤litetty \'%s\'');
define('CREATE_ALB', 'Luodaan albumia \'%s\'');
define('UPDATE_ALB', 'PÃ¤ivitetÃ¤Ã¤n albumia \'%s\' otsikko \'%s\' ja indeksi \'%s\'');
define('DEL_PIC', 'Poista kuva');
define('DEL_ALB', 'Poista albumi');
define('DEL_USER', 'Poista kÃ¤yttÃ¤jÃ¤');
define('ERR_UNKNOWN_USER', 'Valittua kÃ¤yttÃ¤jÃ¤Ã¤ ei lÃ¶ydy !');
define('COMMENT_DELETED', 'Komentti poistettu onnistuneesti');

// lang_display_image_php
define('CONFIRM_DEL', 'Haluatko varmasti POISTAA tÃ¤mÃ¤n kuvan ? \\nKommentit poistetaan samalla.');
define('DEL_PIC', 'POISTA TÃ„MÃ„ KUVA');
define('SIZE', '%s x %s pikseliÃ¤');
define('VIEWS', '%s kertaa');
define('SLIDESHOW', 'Diashow');
define('STOP_SLIDESHOW', 'PYSÃ„YTÃ„ DIASHOW');
define('VIEW_FS', 'Klikkaamalla kuvaa voit tarkastella sitÃ¤ tÃ¤ysikokoisena');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('TITLE', 'Kuvan tiedot');
define('FILENAME', 'Tiedostonimi');
define('ALBUM NAME', 'Albumin nimi');
define('RATING', 'Arvo (%s Ã¤Ã¤ntÃ¤)');
define('KEYWORDS', 'Hakusanat');
define('FILE SIZE', 'Tiedostokoko');
define('DIMENSIONS', 'Tarkkuus');
define('DISPLAYED', 'Tarkasteltu');
define('CAMERA', 'Kamera');
define('DATE TAKEN', 'Kuva otettu');
define('APERTURE', 'Aukko');
define('EXPOSURE TIME', 'Valotusaika');
define('FOCAL LENGTH', 'PolttovÃ¤li');
define('COMMENT', 'Kommentti');
define('ADDFAV', 'LisÃ¤Ã¤ suosikkeihin');
define('ADDFAVPHRASE', 'Suosikit');
define('REMFAV', 'Poista suosikeista');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'Muokkaa kommenttia');
define('CONFIRM_DELETE', 'Haluatko varmasti poistaa tÃ¤mÃ¤n kommentin ?');
define('ADD_YOUR_COMMENT', 'LisÃ¤Ã¤ kommenttisi');
define('NAME', 'Nimi');
define('COMMENT', 'Komenti');
define('YOUR_NAME', 'Nimesi');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Klikkaa kuvaa sulkeaksesi tÃ¤mÃ¤ ikkuna');

// lang_ecard_php
define('TITLE', 'lÃ¤hetÃ¤ e-kortti');
define('INVALID_EMAIL', '<b>Varoitus</b> : virheellinen sÃ¤hkÃ¶posti osoite!');
define('ECARD_TITLE', 'E-kortti %s sinulle');
define('VIEW_ECARD', 'Jos e-kortti nÃ¤kyy virheellisesti klikkaa tÃ¤stÃ¤');
define('VIEW_MORE_PICS', 'Klikkaa tÃ¤sta nÃ¤hdÃ¤ksesi lisÃ¤Ã¤ kuvia !');
define('SEND_SUCCESS', 'E-kortti lÃ¤hetetty');
define('SEND_FAILED', 'Palvelin ei salli e-korttien lÃ¤hetystÃ¤...');
define('FROM', 'LÃ¤hettÃ¤jÃ¤');
define('YOUR_NAME', 'Nimesi');
define('YOUR_EMAIL', 'SÃ¤hkÃ¶posti');
define('TO', 'Vastaanottaja');
define('RCPT_NAME', 'Vastaanottajan nimi');
define('RCPT_EMAIL', 'Vastaanottaja sÃ¤hkÃ¶posti');
define('GREETINGS', 'Terveiset');
define('MESSAGE', 'Viesti');

// lang_editpics_php
define('PIC_INFO', 'Kuvan&nbsp;tiedot');
define('ALBUM', 'Albumi');
define('TITLE', 'Otsikko');
define('DESC', 'Tarkenne');
define('KEYWORDS', 'Hakusanat');
define('PIC_INFO_STR', '%sx%s - %sKB - %s tarkastelua - %s Ã¤Ã¤ntÃ¤');
define('APPROVE', 'HyvÃ¤ksy kuva');
define('POSTPONE_APP', 'LykkÃ¤Ã¤ vahvistamista');
define('DEL_PIC', 'Poista kuva');
define('READ_EXIF', 'Read EXIF info again');
define('RESET_VIEW_COUNT', 'Nollaa laskuri');
define('RESET_VOTES', 'Nollaa Ã¤Ã¤net');
define('DEL_COMM', 'Poista kommentit');
define('UPL_APPROVAL', 'LisÃ¤tyt hyvÃ¤ksyttÃ¤vÃ¤t');
define('EDIT_PICS', 'Muokkaa kuvia');
define('SEE_NEXT', 'NÃ¤ytÃ¤ seuraavat kuvat');
define('SEE_PREV', 'NÃ¤ytÃ¤ edelliset kuvat');
define('N_PIC', '%s kuvat');
define('N_OF_PIC_TO_DISP', 'Kuinka monta kuvaa nÃ¤ytetÃ¤Ã¤n');
define('APPLY', 'HyvÃ¤ksy muutokset');

// lang_groupmgr_php
define('GROUP_NAME', 'RyhmÃ¤n nimi');
define('DISK_QUOTA', 'Levytila');
define('CAN_RATE', 'Voi Ã¤Ã¤nestÃ¤Ã¤ kuvia');
define('CAN_SEND_ECARDS', 'Voi lÃ¤hettÃ¤Ã¤ e-kortteja');
define('CAN_POST_COM', 'Voi kommentoida');
define('CAN_UPLOAD', 'Voi lisÃ¤tÃ¤ kuvia');
define('CAN_HAVE_GALLERY', 'Voi saada oman gallerian');
define('APPLY', 'HyvÃ¤ksy muutokset');
define('CREATE_NEW_GROUP', 'Luo uusi ryhmÃ¤');
define('DEL_GROUPS', 'Poista valitut ryhmÃ¤t');
define('CONFIRM_DEL', 'Varoitus, kun poistat ryhmÃ¤n, kÃ¤yttÃ¤jÃ¤t ketkÃ¤ kuuluvat ryhmÃ¤Ã¤n siirretÃ¤Ã¤n \'RekisterÃ¶idyt\' ryhmÃ¤Ã¤n !\\n\\nHaluatko jatkaa ?');
define('TITLE', 'Muokkaa kÃ¤yttÃ¤jÃ¤ ryhmiÃ¤');
define('APPROVAL_1', 'HyvÃ¤ksyntÃ¤ asetus (1)');
define('APPROVAL_2', 'HyvÃ¤ksyntÃ¤ asetus (2)');
define('NOTE1', '<b>(1)</b> LisÃ¤ykset julkiseen albumiin tarvitsevat yllÃ¤pidon hyvÃ¤ksynnÃ¤n');
define('NOTE2', '<b>(2)</b> LisÃ¤ykset kÃ¤yttÃ¤jÃ¤n albumiin tarvitsevat yllÃ¤pidon hyvÃ¤ksynnÃ¤n');
define('NOTES', 'Huomio');

// lang_index_php
define('WELCOME', 'Tervetuloa !');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Haluatko varmasti POISTAA tÃ¤mÃ¤n albumin ? \\nKaikki kuvat ja kommentit poistetaan myÃ¶s.');
define('DELETE', 'POISTA');
define('MODIFY', 'MUOKKAA');
define('EDIT_PICS', 'MUOKKAA KUVIA');

// lang_list_categories
define('HOME', 'Etusivu');
define('STAT1', '<b>[pictures]</b> kuvaa <b>[albums]</b> albumia ja <b>[cat]</b> kategoriaa sekÃ¤ <b>[comments]</b> kommentia. Kuvia tarkasteltu <b>[views]</b> kertaa');
define('STAT2', '<b>[pictures]</b> kuvaa <b>[albums]</b> albumia tarkasteltu <b>[views]</b> kertaa');
define('XX_S_GALLERY', '%s\'s Galleria');
define('STAT3', '<b>[pictures]</b> kuvaa <b>[albums]</b> albumia jossa <b>[comments]</b> kommenttia. Kuvia tarkasteltu <b>[views]</b> kertaa');

// lang_list_users
define('USER_LIST', 'KÃ¤yttÃ¤jÃ¤ lista');
define('NO_USER_GAL', 'Ei ole kÃ¤yttÃ¤jiÃ¤ joilla oikeus albumiin');
define('N_ALBUMS', '%s albumi(t)');
define('N_PICS', '%s kuva(a)');

// lang_list_albums
define('N_PICTURES', '%s kuvaa');
define('LAST_ADDED', ', viimeisin lisÃ¤tty %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'PÃ¤ivitÃ¤ albumi %s');
define('GENERAL_SETTINGS', 'Yleiset asetukset');
define('ALB_TITLE', 'Albumin otsikko');
define('ALB_CAT', 'Albumin kategoria');
define('ALB_DESC', 'Albumin tarkenne');
define('ALB_THUMB', 'Albumi thumbnailit');
define('ALB_PERM', 'Albumin oikeudet');
define('CAN_VIEW', 'Albumia voi tarkastella');
define('CAN_UPLOAD', 'Vierailijat voivat lisÃ¤tÃ¤ kuvia');
define('CAN_POST_COMMENTS', 'Vierailijat voivat kommentoida');
define('CAN_RATE', 'VierÃ¤ilijat voivat arvostella');
define('USER_GAL', 'KÃ¤yttÃ¤jÃ¤n Galleria');
define('NO_CAT', '* Ei kategoriaa *');
define('ALB_EMPTY', 'Albumi on tyhja');
define('LAST_UPLOADED', 'Viimeksi lisÃ¤tty');
define('PUBLIC_ALB', 'Kaikki (julkinen albumi)');
define('ME_ONLY', 'MinÃ¤ ainoastaan');
define('OWNER_ONLY', 'Albumin omistaja (%s) ainoastaan');
define('GROUPP_ONLY', 'JÃ¤senet ryhmÃ¤stÃ¤ \'%s\' ');
define('ERR_NO_ALB_TO_MODIFY', 'Ei muokattavia albumeita tietokannassa.');
define('UPDATE', 'PÃ¤ivitÃ¤ albumi');

// lang_rate_pic_php
define('ALREADY_RATED', 'Olet jo arvostellut tÃ¤mÃ¤n kuvan');
define('RATE_OK', 'Ã„Ã¤nesi hyvÃ¤ksytty');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'Sivuston {SITE_NAME} yllÃ¤pitÃ¤jÃ¤t poistavat kaiken sopimattoman materiaalin niin nopeasti kuin mahdollista. SÃ¤hkÃ¶posti osoitteen on oltava toimiva koska asetuksista riippuen saatat joutua aktivoimaan tilisi sÃ¤hkÃ¶postin vÃ¤lityksellÃ¤.<br />
<br />
HyvÃ¤ksymÃ¤llÃ¤ tÃ¤mÃ¤n sopimuksen sitoudut olemaan lÃ¤hettÃ¤mÃ¤ttÃ¤ laitonta, seksuaalista tai muuten sopimatonta materiaalia muuten {SITE_NAME} yllÃ¤pitÃ¤jÃ¤t ovat tapauksen sattuessa oikeutettu poistamaan kuvat sekÃ¤ tunnuksesi varoituksetta.<br />
<br />
Sivu kÃ¤yttÃ¤Ã¤ evÃ¤steitÃ¤ tallentamaa informaatiota. EvÃ¤steiden tarkoitus on ainoastaa helpottaa sivun kÃ¤yttÃ¶Ã¤. SÃ¤hkÃ¶posti osoitetta ei luovuteta ulkopuolisten tietoon tarkoituksellisesti.<br />
<br />
Klikkaamalla \'HyvÃ¤ksyn\' hyvÃ¤ksyt nÃ¤mÃ¤ sÃ¤Ã¤nnÃ¶t.');

// lang_register_php
define('PAGE_TITLE', 'RekisterÃ¶inti');
define('TERM_COND', 'KÃ¤yttÃ¶sopimus');
define('I_AGREE', 'HyvÃ¤ksyn');
define('SUBMIT', 'LÃ¤hetÃ¤ rekisterÃ¶inti');
define('ERR_USER_EXISTS', 'Tunnus on jo kÃ¤ytÃ¶ssÃ¤, ole hyvÃ¤ ja valitse toinen');
define('ERR_PASSWORD_MISMATCH', 'Salasanat eivÃ¤t tÃ¤smÃ¤Ã¤');
define('ERR_UNAME_SHORT', 'Tunnuksen on oltava vÃ¤hintÃ¤Ã¤n 2 merkkiÃ¤ pitkÃ¤');
define('ERR_PASSWORD_SHORT', 'Salasanan on oltava vÃ¤hintÃ¤Ã¤n 2 merkkiÃ¤ pitkÃ¤');
define('ERR_UNAME_PASS_DIFF', 'Tunnuksen ja salasanan on oltava eri');
define('ERR_INVALID_EMAIL', 'SÃ¤hkÃ¶posti osoite on virhellinen');
define('ERR_DUPLICATE_EMAIL', 'Joku on jo rekisterÃ¶itynyt samalla sÃ¤hkÃ¶posti osoitteella');
define('ENTER_INFO', 'LisÃ¤Ã¤ rekisterÃ¶inti tiedot');
define('REQUIRED_INFO', 'Pakolliset tiedot');
define('OPTIONAL_INFO', 'Vapaaehtoiset tiedot');
define('USERNAME', 'KÃ¤yttÃ¤jÃ¤nimi');
define('PASSWORD', 'Salasana');
define('PASSWORD_AGAIN', 'Salasana uudestaan');
define('EMAIL', 'SÃ¤hkÃ¶posti');
define('LOCATION', 'Sijainti');
define('INTERESTS', 'Kiinnostukset');
define('WEBSITE', 'Kotisivu');
define('OCCUPATION', 'Koulutus');
define('ERROR', 'VIRHE');
define('CONFIRM_EMAIL_SUBJECT', '%s - RekisterÃ¶inti tiedot');
define('INFORMATION', 'Info');
define('FAILED_SENDING_EMAIL', 'RekisterÃ¶innin varmistavaa sÃ¤hkÃ¶postia ei voi lÃ¤hettÃ¤Ã¤!');
define('THANK_YOU', 'Kiitos rekisterÃ¶itymisestÃ¤.<br /><br />Tilisi tÃ¤ytyy vielÃ¤ aktivoida. Valitsemaasi sÃ¤hkÃ¶posti osoitteeseen on lÃ¤hetty ohjeet kÃ¤yttÃ¤jÃ¤tilisi aktivointiin.');
define('ACCT_CREATED', 'KÃ¤yttÃ¤jÃ¤tilisi on nyt luotu. Voit kirjautua sisÃ¤Ã¤n kÃ¤yttÃ¤mÃ¤llÃ¤ tunnustasi sekÃ¤ salasanaasi');
define('ACCT_ACTIVE', 'KÃ¤yttÃ¤jÃ¤tilisi on nyt aktivoitu. Voit kirjautua sisÃ¤Ã¤n kÃ¤yttÃ¤mÃ¤llÃ¤ tunnustasi sekÃ¤ salasanaasi');
define('ACCT_ALREADY_ACT', 'Tilisi on jo aktiivinen !');
define('ACCT_ACT_FAILED', 'TiliÃ¤si ei voi aktivoida !');
define('ERR_UNK_USER', 'Valittua kÃ¤yttÃ¤jÃ¤Ã¤ ei lÃ¶ydy !');
define('X_S_PROFILE', '%s\' asetukset');
define('GROUP', 'RyhmÃ¤');
define('REG_DATE', 'Liittynyt');
define('DISK_USAGE', 'Levyn kÃ¤yttÃ¶');
define('CHANGE_PASS', 'Vaihda salasana');
define('CURRENT_PASS', 'Nykyinen salasana');
define('NEW_PASS', 'uusi salasana');
define('NEW_PASS_AGAIN', 'Uusi salasana uudestaan');
define('ERR_CURR_PASS', 'Nykyinen salasana vÃ¤Ã¤rin');
define('APPLY_MODIF', 'HyvÃ¤ksy muutokset');
define('UPDATE_SUCCESS', 'Profiilisi pÃ¤ivitetty');
define('PASS_CHG_SUCCESS', 'Salasanasi vaihdettu');
define('PASS_CHG_ERROR', 'Salasanaasi ei vaihdettu');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Kiitos rekisterÃ¶itymisestÃ¤ {SITE_NAME} sivulle.

Tunnus : "{USER_NAME}"
Salasana : "{PASSWORD}"

Sinun on aktivoitava tilisi, tarvitsee vain klikata alla olevaa linkkiÃ¤
tai leikkaa/liitÃ¤ (copy/paste) se www selaimeesi.

{ACT_LINK}

Terveisin,

Sivun {SITE_NAME} yllÃ¤pitÃ¤jÃ¤.
');

// lang_reviewcom_php
define('TITLE', 'NÃ¤ytÃ¤ kommentit');
define('NO_COMMENT', 'Ei kommentteja');
define('N_COMM_DEL', '%s kommentti poistettu');
define('N_COMM_DISP', 'Kuinka monta kommenttia nÃ¤ytetÃ¤Ã¤n');
define('SEE_PREV', 'Edellinen');
define('SEE_NEXT', 'Seuraava');
define('DEL_COMM', 'Poista valitut kommentit');

// lang_search_php
define('SEARCH', 'Hae kuva');

// lang_search_new_php
define('PAGE_TITLE', 'Etsi uusia kuvia');
define('SELECT_DIR', 'Valitse hakemisto');
define('SELECT_DIR_MSG', 'Voit lisÃ¤tÃ¤ FTP:llÃ¤ lisÃ¤tyt kuvat hakemistoihin<br /><br />Valitse hakemisto johon laitoit kuvat');
define('NO_PIC_TO_ADD', 'Ei lisÃ¤ttÃ¤viÃ¤ kuvia');
define('NEED_ONE_ALBUM', 'Tarvitset vÃ¤hintÃ¤Ã¤n yhden albumin voidaksesi kÃ¤yttÃ¤Ã¤ toimintoa');
define('WARNING', 'Varoitus');
define('CHANGE_PERM', 'scripti ei voi kirjoittaa tÃ¤hÃ¤n hakemistoon. Oikeuksien tÃ¤ytyy olla 755 tai 777 ennen kuin yritÃ¤t lisÃ¤tÃ¤ kuvia !');
define('TARGET_ALBUM', '<b>Laita kuvat hakemistosta &quot;</b>%s<b>&quot;</b>%s albumiin');
define('FOLDER', 'Hakemisto');
define('IMAGE', 'Kuva');
define('ALBUM', 'Albumi');
define('RESULT', 'Tulos');
define('DIR_RO', 'Ei kirjoitettavissa. ');
define('DIR_CANT_READ', 'Ei luettavissa. ');
define('INSERT', 'LisÃ¤tÃ¤Ã¤n uusia kuvia galleriaan');
define('LIST_NEW_PIC', 'Lista uusista kuvista');
define('INSERT_SELECTED', 'LisÃ¤Ã¤ valitut kuvat');
define('NO_PIC_FOUND', 'Uusia kuvia ei lÃ¶ytynyt');
define('BE_PATIENT', 'Odota hetki. Menee pikkuisen aikaa kuvien kÃ¤sittelyssÃ¤');
define('NOTES', '<ul><li><b>OK</b> : tarkoittaa kuva lisÃ¤tty onnistuneesti<li><b>DP</b> : tarkoittaa kuva on jo aiemmin lisÃ¤tty<li><b>PB</b> : tarkoittaa kuvaa ei voitu lisÃ¤tÃ¤, tarkista asetukset ja oikeudet<li>Jos OK, DP, PB \'merkit\' eivÃ¤t ilmesty klikkaa rikkinÃ¤istÃ¤ kuvaa nÃ¤hdÃ¤ksesi PHP: virheilmoituksen<li>Jos selaimesi menee timeouttiin, lataa sivu uudestaan</ul>');

// lang_upload_php
define('TITLE', 'LisÃ¤Ã¤ kuva');
define('MAX_FSIZE', 'Suurin sallittu tiedostokoko %s KB');
define('ALBUM', 'Albumi');
define('PICTURE', 'Kuva');
define('PIC_TITLE', 'Kuvan otsikko');
define('DESCRIPTION', 'Kuvan tarkenne');
define('KEYWORDS', 'Hakusana (erota vÃ¤lilyÃ¶nnillÃ¤)');
define('ERR_NO_ALB_UPLOADABLES', 'Ei albumeita joille oikeus lisÃ¤tÃ¤ kuvia');

// lang_usermgr_php
define('TITLE', 'Muokkaa kÃ¤yttÃ¤jiÃ¤');
define('NAME_A', 'NimellÃ¤ nousevasti');
define('NAME_D', 'NimellÃ¤ laskevasti');
define('GROUP_A', 'RyhmittÃ¤in nousevasti');
define('GROUP_D', 'RyhmittÃ¤in laskevasti');
define('REG_A', 'RekisterÃ¶inti pÃ¤ivÃ¤llÃ¤ nousevasti');
define('REG_D', 'RekisterÃ¶inti pÃ¤ivÃ¤llÃ¤ laskevasti');
define('PIC_A', 'Kuvien mÃ¤Ã¤rÃ¤llÃ¤ nousevasti');
define('PIC_D', 'Kuvien mÃ¤Ã¤rÃ¤llÃ¤ laskevasti');
define('DISKU_A', 'Levyn kÃ¤yttÃ¶ nousevasti');
define('DISKU_D', 'Levyn kÃ¤yttÃ¶ laskevasti');
define('SORT_BY', 'JÃ¤rjestÃ¤ kÃ¤yttÃ¤jÃ¤t');
define('ERR_NO_USERS', 'KÃ¤yttÃ¤jÃ¤taulu on tyhjÃ¤ !');
define('ERR_EDIT_SELF', 'Et voi muokata profiiliasi tÃ¤Ã¤ltÃ¤ \'Omat asetukset\' linkistÃ¤ pÃ¤Ã¤set tekemÃ¤Ã¤n sen');
define('EDIT', 'MUOKKAA');
define('DELETE', 'POISTA');
define('NAME', 'Tunnus');
define('GROUP', 'RyhmÃ¤');
define('INACTIVE', 'Passiivinen');
define('OPERATIONS', 'Toiminto');
define('PICTURES', 'Kuvat');
define('DISK_SPACE', 'Tilaa kÃ¤ytetty / Maksimi');
define('REGISTERED_ON', 'RekisterÃ¶itynyt');
define('U_USER_ON_P_PAGES', '%d kÃ¤yttÃ¤jÃ¤Ã¤ %d sivu(a)');
define('CONFIRM_DEL', 'Haluatko varmasti POISTAA tÃ¤mÃ¤n kÃ¤yttÃ¤jÃ¤n ? \\nKaikki albumit ja kuvat poistuvat myÃ¶s.');
define('MAIL', 'POSTI');
define('ERR_UNKNOWN_USER', 'Valittua kÃ¤yttÃ¤jÃ¤Ã¤ ei lÃ¶ydy !');
define('MODIFY_USER', 'Muokkaa kÃ¤yttÃ¤jÃ¤Ã¤');
define('NOTES', 'Huomio');
define('NOTE_LIST', '<li>Jos et halua vaihtaa salasanaa, jÃ¤tÃ¤ \"salasana\" kenttÃ¤ tyhjÃ¤ksi');
define('PASSWORD', 'Salasana');
define('USER_ACTIVE', 'KÃ¤yttÃ¤jÃ¤ aktiivinen');
define('USER_GROUP', 'KÃ¤yttÃ¤jÃ¤n ryhmÃ¤');
define('USER_EMAIL', 'KÃ¤yttÃ¤jÃ¤n sÃ¤hkÃ¶posti');
define('USER_WEB_SITE', 'KÃ¤yttÃ¤jÃ¤n kotisivu');
define('CREATE_NEW_USER', 'Luo uusi kÃ¤yttÃ¤jÃ¤');
define('USER_LOCATION', 'KÃ¤yttÃ¤jÃ¤n sijainti');
define('USER_INTERESTS', 'KÃ¤yttÃ¤jÃ¤n kiinnostukset');
define('USER_OCCUPATION', 'KÃ¤yttÃ¤jÃ¤n koulutus');

// lang_util_php
define('TITLE', 'PienennÃ¤ kuvia');
define('WHAT_IT_DOES', 'Ominaisuudet');
define('WHAT_UPDATE_TITLES', 'PÃ¤ivittÃ¤Ã¤ otsikot tiedostonimiin');
define('WHAT_DELETE_TITLE', 'Poistaa otsikot');
define('WHAT_REBUILD', 'Tekee uudet thumbnailit ja pienentÃ¤Ã¤ kuvat');
define('WHAT_DELETE_ORIGINALS', 'Poistaa alkuperÃ¤isen kokoiset kuvat ja korvaa ne pienennetyillÃ¤ versioilla');
define('FILE', 'Tiedosto');
define('TITLE_SET_TO', 'otsikon asetti');
define('SUBMIT_FORM', 'lÃ¤hetÃ¤');
define('UPDATED_SUCCESFULLY', 'pÃ¤ivitetty onnistuneesti');
define('ERROR_CREATE', 'VIRHE tapahtumassa');
define('CONTINUE', 'KÃ¤sittele lisÃ¤Ã¤ kuvia');
define('MAIN_SUCCESS', 'Tiedostoa %s on onnistuneesti kÃ¤ytetty pÃ¤Ã¤kuvana');
define('ERROR_RENAME', 'Virhe uudelleen nimeÃ¤misessÃ¤ %s ei voitu nimetÃ¤ %s');
define('ERROR_NOT_FOUND', 'Tiedostoa %s ei lÃ¶ydy');
define('BACK', 'takaisin');
define('THUMBS_WAIT', 'PÃ¤ivitÃ¤Ã¤ thumbnaileja ja/tai pienentÃ¤Ã¤ kuvia, odota hetki...');
define('THUMBS_CONTINUE_WAIT', 'Jatkaa thumbnailien pÃ¤ivittÃ¤mistÃ¤ ja/tai kuvien pienentÃ¤mistÃ¤...');
define('TITLES_WAIT', 'PÃ¤ivittÃ¤Ã¤ otsikoita, odota hetki...');
define('DELETE_WAIT', 'Poistaa otsikoita, odota hetki...');
define('REPLACE_WAIT', 'Poistaa alkuperÃ¤isia kuvia ja korvaa ne pienennetyillÃ¤, odota hetki..');
define('INSTRUCTION', 'Pikaohje');
define('INSTRUCTION_ACTION', 'Valitse toiminto');
define('INSTRUCTION_PARAMETER', 'Aseta arvot');
define('INSTRUCTION_ALBUM', 'Valitse albumi');
define('INSTRUCTION_PRESS', 'Paina %s');
define('UPDATE', 'PÃ¤ivitÃ¤ thumbnailit ja/tai pienennÃ¤ kuvat');
define('UPDATE_WHAT', 'MitÃ¤ pÃ¤ivitetÃ¤Ã¤n');
define('UPDATE_THUMB', 'Ainoastaan thumbnailit');
define('UPDATE_PIC', 'PienennetÃ¤Ã¤n pelkÃ¤t kuvat');
define('UPDATE_BOTH', 'PienennetÃ¤Ã¤n kuvat ja pÃ¤ivitetÃ¤Ã¤n thumbnailit');
define('UPDATE_NUMBER', 'Kuinka monta kuvaa kÃ¤sitellÃ¤Ã¤n joka klikkauksella');
define('UPDATE_OPTION', '(Kokeile sÃ¤Ã¤tÃ¤Ã¤ toimintoa pienemmÃ¤lle jos tulee timeout ongelmia)');
define('FILENAME_TITLE', 'Tiedostonimi ? Kuvan otsikko');
define('FILENAME_HOW', 'Kuinka tiedostonimet muokatann');
define('FILENAME_REMOVE', 'Poista .jpg pÃ¤Ã¤te ja korvaa vÃ¤lit _ (alleviivaus)');
define('FILENAME_EURO', 'Muuta 2003_11_23_13_20_20.jpg tÃ¤mmÃ¶iseksi 23/11/2003 13:20');
define('FILENAME_US', 'Muuta 2003_11_23_13_20_20.jpg tÃ¤mmÃ¶iseksi 11/23/2003 13:20');
define('FILENAME_TIME', 'Muuta 2003_11_23_13_20_20.jpg tÃ¤mmÃ¶iseksi 13:20');
define('DELETE', 'Poista otsikot tai alkuperÃ¤isen kokoiset kuvat');
define('DELETE_TITLE', 'Poista kuvien otsikot');
define('DELETE_ORIGINAL', 'Poista alkuperÃ¤isen kokoiset kuvat');
define('DELETE_REPLACE', 'Poistaa alkuperÃ¤iset kuvat ja korvaa ne pienennetyillÃ¤ versioilla');
define('SELECT_ALBUM', 'Valitse albumi');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?> 