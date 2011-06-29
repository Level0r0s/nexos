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
/*   $Id: lang-finnish.php,v 1.1 2004/07/27 20:01:09 akamu Exp $              */
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
define('CHARSET', 'iso-8859-15');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'Kyllä');
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
$lang_month = array('Tammikuu','Helmikuu','Maaliskuu','Huhtikuu','Toukokuu','Kesäkuu','Heinäkuu','Elokuu','Syyskuu','Lokakuu','Marraskuu','Joulukuu',);
// For the word censor
$lang_bad_words = array('*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*',);
// lang_meta_album_names
define('RANDOM', 'Satunaiset kuvat');
define('LASTUP', 'Uusimmat kuvat');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Viimeksi päivitetyt albumit');
define('LASTCOM', 'Uusimmat komentit');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Katsotuimmat');
define('TOPRATED', 'Suosituimmat');
define('LASTHITS', 'Viimeksi tarkasteltu');
define('SEARCH', 'Haun tulokset');
define('FAVPICS', 'Suosikkikini');

// lang_errors
define('ACCESS_DENIED', 'Ei oikeuksia tälle sivulle.');
define('PERM_DENIED', 'Ei oikeuksia kyseisen toiminnon suorittamiseen.');
define('PARAM_MISSING', 'Scriptiä kutsuttu ilman vaadittavia parametrejä.');
define('NON_EXIST_AP', 'Valittua albumia/kuvaa ei löydy !');
define('QUOTA_EXCEEDED', 'Levytilasi on täynnä<br /><br />Levytilasi on täynnä [quota]K, kuviesi vievä tila [space]K, lisäämällä tämän kuvan tilasi koko ylittyisi.');
define('GD_FILE_TYPE_ERR', 'Kun käytät GD:tä sallitut tiedostomuodot ovat JPEG ja PNG.');
define('INVALID_IMAGE', 'Kuva on korruptoitunut eikä sitä voi käsitellä GD:llä');
define('RESIZE_FAILED', 'Ongelma thumbnailien luomisessa.');
define('NO_IMG_TO_DISPLAY', 'Ei näyttettäviä kuvia');
define('NON_EXIST_CAT', 'Valittua kategoriaa ei löydy');
define('ORPHAN_CAT', 'Ongelmia kategoriassa, aja kategoria manageri selvitääksesi ongelma.');
define('DIRECTORY_RO', 'Hakemistoon \'%s\' ei ole määritelty kirjoitusoikeuksia. Kuvia ei voi poistaa');
define('NON_EXIST_COMMENT', 'Valittua kommenttia ei löydy.');
define('PIC_IN_INVALID_ALBUM', 'Kuvaa ei ole albumissa (%s)!?');
define('BANNED', 'Sinulta on evätty pääsy tälle sivulle.');
define('NOT_WITH_UDB', 'Tämä toiminto on poistettu käytöstä Coppermine gallerissa koska tämä on integroitu foorumi ohjelmistoon. Toiminto jota eritit tehdä ei ole tuettuna tässä kokoonpanossa, toiminto löytyy mahdollisesti foorumi ohjelmistosta.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', 'Mene albumi listaan');
define('ALB_LIST_LNK', 'Albumi lista');
define('MY_GAL_TITLE', 'Mene omaan galleriaan');
define('MY_GAL_LNK', 'Oma galleria');
define('MY_PROF_LNK', 'Omat asetukset');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Vaihda ylläpitotilaan');
define('ADM_MODE_LNK', 'Ylläpitotila');
define('USR_MODE_TITLE', 'Vaihda käyttäjätilaan');
define('USR_MODE_LNK', 'Käyttäjätila');
define('UPLOAD_PIC_TITLE', 'Lisää kuva albumiin');
define('UPLOAD_PIC_LNK', 'Lisää kuva');
define('REGISTER_TITLE', 'Luo uusi tili');
define('REGISTER_LNK', 'Rekisteröidy');
define('LOGIN_LNK', 'Kirjaudu');
define('LOGOUT_LNK', 'Poistu');
define('LASTUP_LNK', 'Viimeksi lisätty');
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
define('USERS_LNK', 'Käyttäjät');
define('GROUPS_LNK', 'Ryhmät');
define('COMMENTS_LNK', 'Kommentit');
define('SEARCHNEW_LNK', 'Lisää \"FTP\" kuvat');
define('UTIL_LNK', 'Käsittele Kuvia');
define('BAN_LNK', 'Kiellä Käyttäjiä');

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
define('SORT_DA', 'Järjestä päivämäärittäin nousevasti');
define('SORT_DD', 'Järjestä päivämäärittäin laskevasti');
define('SORT_NA', 'Järjestä nimellä nousevasti');
define('SORT_ND', 'Järjestä nimellä laskevasti');
define('SORT_TA', 'Järjestä otsikolla nousevasti');
define('SORT_TD', 'Järjestä otsikolla laskevasti');
define('PIC_ON_PAGE', '%d kuvaa %d sivu(a)');
define('USER_ON_PAGE', '%d käyttäjää %d sivu(a)');
define('SORT_RA', 'Sort by rating ascending');
define('SORT_RD', 'Sort by rating descending');
define('RATING', 'RATING');
define('SORT_TITLE', 'Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Takaisin thumbnail sivulle');
define('PIC_INFO_TITLE', 'Näytä/piilota kuvan tiedot');
define('SLIDESHOW_TITLE', 'diashow');
define('ECARD_TITLE', 'Lähetä tämä kuva e-korttina');
define('ECARD_DISABLED', 'e-kortit pois päältä');
define('ECARD_DISABLED_MSG', 'Sinulla ei ole oikeuksia lähettää e-kortteja');
define('PREV_TITLE', 'Näytä edellinen kuva');
define('NEXT_TITLE', 'See next picture');
define('PIC_POS', 'PICTURE %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', 'Äänestä tätä kuvaa ');
define('NO_VOTES', '(ei ääniä vielä)');
define('RATING', '(nykyinen taso : %s / 5 ja %s ääntä)');
define('RUBBISH', 'Roskaa');
define('POOR', 'Tylsää');
define('FAIR', 'Keskinkertainen');
define('GOOD', 'Hyvä');
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
define('DATE_ADDED', 'Lisätty : ');

// lang_get_pic_data
define('N_COMMENTS', '%s kommenttia');
define('N_VIEWS', '%s tarkastelua');
define('N_VOTES', '(%s ääntä)');

// lang_smilies_inc_php
define('EXCLAMATION', 'Huuto');
define('QUESTION', 'Kysymys');
define('VERY HAPPY', 'Erittäin Iloinen');
define('SMILE', 'Hymy');
define('SAD', 'Suru');
define('SURPRISED', 'Yllättynyt');
define('SHOCKED', 'Järkyttynyt');
define('CONFUSED', 'Häkeltynyt');
define('COOL', 'Cool');
define('LAUGHING', 'Nauru');
define('MAD', 'Hullu');
define('RAZZ', 'Razz');
define('EMBARASSED', 'Embarassed');
define('CRYING OR VERY SAD', 'Itkeä');
define('EVIL OR VERY MAD', 'Erittäin Hullu');
define('TWISTED EVIL', 'Kieroutunut Hullu');
define('ROLLING EYES', 'Pyörivät silmät');
define('WINK', 'Vink');
define('IDEA', 'Idea');
define('ARROW', 'Nuoli');
define('NEUTRAL', 'Neutraali');
define('MR. GREEN', 'Mr. Vihreä');

// lang_admin_php
define('LV_ADMIN', 'Poistuu ylläpitotilasta...');
define('ENT_ADMIN', 'Sisään ylläpitotilaan...');

// lang_albmgr_php
define('ALB_NEED_NAME', 'Albumi tarvitsee nimen !');
define('CONFIRM_MODIFS', 'Haluatko varmasti tehdä nämä muutokset ?');
define('NO_CHANGE', 'Et tehnyt yhtään muutosta !');
define('NEW_ALBUM', 'Uusi albumi');
define('CONFIRM_DELETE1', 'Haluatko varmasti poistaa tämän albumin albumin ?');
define('CONFIRM_DELETE2', '\\nKaikki kuvat ja kommentit tulevat poistumaan !');
define('SELECT_FIRST', 'Valitse albumi ensin');
define('ALB_MRG', 'Albumi Manageri');
define('MY_GALLERY', '* Oma galleria *');
define('NO_CATEGORY', '* Ei kategoriaa *');
define('DELETE', 'Poista');
define('NEW', 'Uusi');
define('APPLY_MODIFS', 'Hyväksy muutokset');
define('SELECT_CATEGORY', 'Valitse Kategoria');

// lang_catmgr_php
define('MISS_PARAM', 'Toimintoa \'%s\'ei voitu suorittaa !');
define('UNKNOWN_CAT', 'Valittua kategoriaa ei ole enää tietokannassa');
define('USERGAL_CAT_RO', 'Käyttäjien gallerioiden kategorioita ei voi poistaa !');
define('MANAGE_CAT', 'Hallitse kategorioita');
define('CONFIRM_DELETE', 'Haluatko varmasti POISTAA tämän kategorian');
define('CATEGORY', 'Kategoria');
define('OPERATIONS', 'Toiminnot');
define('MOVE_INTO', 'Siirrä');
define('UPDATE_CREATE', 'Päivitä/Luo kategoria');
define('PARENT_CAT', 'Pääkategoria');
define('CAT_TITLE', 'Kategorian otsikko');
define('CAT_DESC', 'Kategorian tarkenne');

// lang_config_php
define('TITLE', 'Asetukset');
define('RESTORE_CFG', 'Palauta oletukset');
define('SAVE_CFG', 'Tallenna muutokset');
define('NOTES', 'Huomio');
define('INFO', 'Info');
define('UPD_SUCCESS', 'Coppermine asetukset päivitetty');
define('RESTORE_SUCCESS', 'Coppermine oletusasetukset palautettu');
define('NAME_A', 'Nimi nousevasti');
define('NAME_D', 'Nimi laskevasti');
define('TITLE_A', 'Otsikko nousevasti');
define('TITLE_D', 'Otsikko laskevasti');
define('DATE_A', 'Päivä nousevasti');
define('DATE_D', 'Päivä laskevasti');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Height');
define('TH_WD', 'Width');

// lang_config_data
define('CONFIG_GENSET', 'Yleiset asetukset');
define('GALLERY_NAME', 'Gallerian nimi');
define('GALLERY_DESCRIPTION', 'Gallerian tarkenne');
define('GALLERY_ADMIN_EMAIL', 'Gallerian ylläpitäjän sähköposti');
define('ECARDS_MORE_PIC_TARGET', 'Address to nuke folder ie http://www.mysite.tld/html/');
define('LANG', 'Kieli');
define('CPGTHEME', 'Teema');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'Albumin "näyttö" asetukset');
define('MAIN_TABLE_WIDTH', 'Päätaulukon leveys (pikseleissä tai %)');
define('SUBCAT_LEVEL', 'Kuinka monta kategoriaa näytetään tasolla');
define('ALBUMS_PER_PAGE', 'Kuinka monta albumia näytetään sivulla');
define('ALBUM_LIST_COLS', 'Kuinka monta saraketta näytetään albumi listassa');
define('ALB_LIST_THUMB_SIZE', 'Thumbnailien koko pikseleissä');
define('MAIN_PAGE_LAYOUT', 'Mitä tietoja etusivulla näytetään');
define('FIRST_LEVEL', 'Näytä ensimmäisen tason albumin thumbnailit kategoriassa');
define('THUMB_VIEW_TITLE', 'Thumbnailien näyttö');
define('THUMBCOLS', 'Sarakkeita thumbnail sivulla');
define('THUMBROWS', 'Rivejä thumbnail sivulla');
define('MAX_TABS', 'Kaistaleiden maksimi määrä');
define('CAPTION_IN_THUMBVIEW', 'Näytä kuvateksti thumbnaileissa');
define('DISPLAY_COMMENT_COUNT', 'Näytä kommenttien määrä thumbnaileissa');
define('DEFAULT_SORT_ORDER', 'Kuvien oletus järjestys');
define('MIN_VOTES_FOR_RATING', 'Tarvittavien äänien määrä ennen \'suosituimmat\' listalle pääsyä');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'Kuvien näyttö &amp; Kommentti asetukset');
define('PICTURE_TABLE_WIDTH', 'Kuvan näyttö taulukon leveys (pikseleinä tai %)');
define('DISPLAY_PIC_INFO', 'Kuvan info oletuksena piilotettu');
define('FILTER_BAD_WORDS', 'Rumasana filtteri');
define('ENABLE_SMILIES', 'Hyväksy hymiöt kommentissa');
define('DISABLE_FLOOD_PROTECTION', 'Allow several consecutive comments on one pic from the same user');
define('COMMENT_EMAIL_NOTIFICATION', 'Email site admin upon comment submission');
define('MAX_IMG_DESC_LENGTH', 'Kuvatekstin maksimi pituus');
define('MAX_COM_WLENGTH', 'Maksimi määrä merkkejä sanassa');
define('MAX_COM_LINES', 'Kommentti rivien maksimi määrä');
define('MAX_COM_SIZE', 'Kommentin maksimi pituus');
define('DISPLAY_FILM_STRIP', 'Näytä thumbnaileja kuva sivulla');
define('MAX_FILM_STRIP_ITEMS', 'Thumbnaileja kuva sivulla');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', 'Kuvien ja thumbnailien asetukset');
define('JPEG_QUAL', 'Tarkkuus JPEG tiedostoilla');
define('THUMB_WIDTH', 'Thumbnail maksimi leveys tai korkeus <b>*</b>');
define('THUMB_USE', 'Käytä mittaa ( leveys tai korkeus tai Maksimi mitta thumbnaileissa )<b>*</b>');
define('MAKE_INTERMEDIATE', 'Luo väliaikaiset kuvat');
define('PICTURE_WIDTH', 'Väliaikaiset kuvien maksimi leveys tai korkeus <b>*</b>');
define('MAX_UPL_SIZE', 'Ladattavien kuvien maksimi koko (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Ladattavien kuvien maksimi leveys (pikseleinä)');
define('USER_SETTING_TITLE', 'Käyttäjä asetukset');
define('ALLOW_USER_REGISTRATION', 'Salli uusien käyttäjien rekisteröityä');
define('REG_REQUIRES_VALID_EMAIL', 'Rekisteröinti vaatii sähköposti varmistuksen');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Salli kahdelle käyttäjälle sama sähköposti osoite');
define('ALLOW_PRIVATE_ALBUMS', 'Käyttäjät saavat yksityiset albumit');
define('CUSTOM_FIELDS_TITLE', 'Valinnaiset kentät kuvan näytössä (jätä tyhjäksi jos et halua käyttää)');
define('USER_FIELD1_NAME', 'Kenttä 1 nimi');
define('USER_FIELD2_NAME', 'Kenttä 2 nimi');
define('USER_FIELD3_NAME', 'Kenttä 3 nimi');
define('USER_FIELD4_NAME', 'Kenttä 4 nimi');
define('PIC_ADV_SETTING_TITLE', 'Kuvien ja thumbnailien lisä asetukset');
define('SHOW_PRIVATE', 'Näytä yksityisessa albumissa Ikoni kirjautumattomalle käyttäjälle');
define('FORBIDEN_FNAME_CHAR', 'Kielletyt merkit tiedostonimissä');
define('ALLOWED_FILE_EXTENSIONS', 'Hyväksytyt tiedotopäätteet');
define('THUMB_METHOD', 'Kuvien koot muutetaan käyttämällä');
define('IMPATH', 'Täydellinen ImageMagick/netpbm polku \'konventteri\' (esimerkiksi /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Kyväksytyt kuva tyypit (kelpaa vain ImageMagickia käytettäessä)');
define('IM_OPTIONS', 'ImageMagick komentorivin asetukset');
define('READ_EXIF_DATA', 'Lue EXIF tiedot JPEG kuvista');
define('READ_IPTC_DATA', 'Read IPTC data in JPEG files');
define('FULLPATH', 'Albumi hakemisto <b>*</b>');
define('USERPICS', 'Käyttäjien kuvien hakemisto <b>*</b>');
define('NORMAL_PFX', 'Väliaikaisten kuvien etuliite <b>*</b>');
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
define('COOKIE_SETTING_TITLE', 'Eväste &amp; koodaus asetukset');
define('COOKIE_NAME', 'Evästeen nimi');
define('COOKIE_PATH', 'Evästeen polku');
define('CHAR_SET', 'Käytettävä koodaus');
define('MISC_SETTING_TITLE', 'Muut asetukset');
define('DEBUG_MODE', 'Näytä palvelimen virheilmoitukset');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) Kentät joissa on * merkki ei saa muuttaa jos galleriassa on jo kuvia.</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Sinun on kirjoitettava nimesi kommenttiin');
define('COM_ADDED', 'Kommentti lisätty');
define('ALB_NEED_TITLE', 'Albumin otsikko puuttuu !');
define('NO_UDP_NEEDED', 'Päivitysta ei tarvita.');
define('ALB_UPDATED', 'Albumi päivitetty');
define('UNKNOWN_ALBUM', 'Valittua albumia ei löydy tai sinulla ei ole oikeuksia siihen');
define('NO_PIC_UPLOADED', 'Ei lisättyä kuvaa !<br /><br />Jos todella valitsit lisättävän kuvan pyydä ylläpitäjää tarkistamaan palvelimen asetukset...');
define('ERR_MKDIR', 'Virhe hakemiston luomisessa %s !');
define('DEST_DIR_RO', 'Lähde hakemisto %s ei ole luettavissa !');
define('ERR_MOVE', 'Mahdotonta siirtää %s - %s !');
define('ERR_FSIZE_TOO_LARGE', 'Tiedosto jota yritit lisätä oli liian suuri (suurin sallittu koko %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Tiedosto jota yritit lisätä oli liian suuri (suurin sallittu koko on %s KB) !');
define('ERR_INVALID_IMG', 'Tiedosto jota yritit lisätä ei hyväksytä !');
define('ALLOWED_IMG_TYPES', 'Voit lisätä ainostaan %s kuvia.');
define('ERR_INSERT_PIC', 'Kuvaa \'%s\' ei voi liittää albumiin ');
define('UPLOAD_SUCCESS', 'Kuva lisätty onnistuneesti<br /><br />Se tulee julkiseksi jos ylläpitäjä hyväksyy sen.');
define('INFO', 'Info');
define('ERR_COMMENT_EMPTY', 'Kommenttisi oli tyhjä !');
define('ERR_INVALID_FEXT', 'Vain seuraavat tiedostopäätteet ovat sallittuja : <br /><br />%s.');
define('NO_FLOOD', 'Viimeinen kommentti on jo lisätty<br /><br />Muokkaa kommenttia jos haluat muuttaa sitä');
define('REDIRECT_MSG', 'Sinut siirretään.<br /><br /><br />Klikkaa \'JATKA\' jos sivu ei päivity automaattisesti');
define('UPL_SUCCESS', 'Kuvasi lisätty onnistuneesti');

// lang_delete_php
define('CAPTION', 'Kuvateksti');
define('FS_PIC', 'täysikokoinen kuva');
define('DEL_SUCCESS', 'onnistuneesti poistettu');
define('NS_PIC', 'normaali kokoinen kuva');
define('ERR_DEL', 'ei voi poistaa');
define('THUMB_PIC', 'thumbnaili');
define('COMMENT', 'kommentti');
define('IM_IN_ALB', 'kuva albumissa');
define('ALB_DEL_SUCCESS', 'Albumi \'%s\' poistettu');
define('ALB_MGR', 'Albumin Hallinta');
define('ERR_INVALID_DATA', 'Virhellistä dataa välitetty \'%s\'');
define('CREATE_ALB', 'Luodaan albumia \'%s\'');
define('UPDATE_ALB', 'Päivitetään albumia \'%s\' otsikko \'%s\' ja indeksi \'%s\'');
define('DEL_PIC', 'Poista kuva');
define('DEL_ALB', 'Poista albumi');
define('DEL_USER', 'Poista käyttäjä');
define('ERR_UNKNOWN_USER', 'Valittua käyttäjää ei löydy !');
define('COMMENT_DELETED', 'Komentti poistettu onnistuneesti');

// lang_display_image_php
define('CONFIRM_DEL', 'Haluatko varmasti POISTAA tämän kuvan ? \\nKommentit poistetaan samalla.');
define('DEL_PIC', 'POISTA TÄMÄ KUVA');
define('SIZE', '%s x %s pikseliä');
define('VIEWS', '%s kertaa');
define('SLIDESHOW', 'Diashow');
define('STOP_SLIDESHOW', 'PYSÄYTÄ DIASHOW');
define('VIEW_FS', 'Klikkaamalla kuvaa voit tarkastella sitä täysikokoisena');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('TITLE', 'Kuvan tiedot');
define('FILENAME', 'Tiedostonimi');
define('ALBUM NAME', 'Albumin nimi');
define('RATING', 'Arvo (%s ääntä)');
define('KEYWORDS', 'Hakusanat');
define('FILE SIZE', 'Tiedostokoko');
define('DIMENSIONS', 'Tarkkuus');
define('DISPLAYED', 'Tarkasteltu');
define('CAMERA', 'Kamera');
define('DATE TAKEN', 'Kuva otettu');
define('APERTURE', 'Aukko');
define('EXPOSURE TIME', 'Valotusaika');
define('FOCAL LENGTH', 'Polttoväli');
define('COMMENT', 'Kommentti');
define('ADDFAV', 'Lisää suosikkeihin');
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
define('CONFIRM_DELETE', 'Haluatko varmasti poistaa tämän kommentin ?');
define('ADD_YOUR_COMMENT', 'Lisää kommenttisi');
define('NAME', 'Nimi');
define('COMMENT', 'Komenti');
define('YOUR_NAME', 'Nimesi');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Klikkaa kuvaa sulkeaksesi tämä ikkuna');

// lang_ecard_php
define('TITLE', 'lähetä e-kortti');
define('INVALID_EMAIL', '<b>Varoitus</b> : virheellinen sähköposti osoite!');
define('ECARD_TITLE', 'E-kortti %s sinulle');
define('VIEW_ECARD', 'Jos e-kortti näkyy virheellisesti klikkaa tästä');
define('VIEW_MORE_PICS', 'Klikkaa tästa nähdäksesi lisää kuvia !');
define('SEND_SUCCESS', 'E-kortti lähetetty');
define('SEND_FAILED', 'Palvelin ei salli e-korttien lähetystä...');
define('FROM', 'Lähettäjä');
define('YOUR_NAME', 'Nimesi');
define('YOUR_EMAIL', 'Sähköposti');
define('TO', 'Vastaanottaja');
define('RCPT_NAME', 'Vastaanottajan nimi');
define('RCPT_EMAIL', 'Vastaanottaja sähköposti');
define('GREETINGS', 'Terveiset');
define('MESSAGE', 'Viesti');

// lang_editpics_php
define('PIC_INFO', 'Kuvan&nbsp;tiedot');
define('ALBUM', 'Albumi');
define('TITLE', 'Otsikko');
define('DESC', 'Tarkenne');
define('KEYWORDS', 'Hakusanat');
define('PIC_INFO_STR', '%sx%s - %sKB - %s tarkastelua - %s ääntä');
define('APPROVE', 'Hyväksy kuva');
define('POSTPONE_APP', 'Lykkää vahvistamista');
define('DEL_PIC', 'Poista kuva');
define('READ_EXIF', 'Read EXIF info again');
define('RESET_VIEW_COUNT', 'Nollaa laskuri');
define('RESET_VOTES', 'Nollaa äänet');
define('DEL_COMM', 'Poista kommentit');
define('UPL_APPROVAL', 'Lisätyt hyväksyttävät');
define('EDIT_PICS', 'Muokkaa kuvia');
define('SEE_NEXT', 'Näytä seuraavat kuvat');
define('SEE_PREV', 'Näytä edelliset kuvat');
define('N_PIC', '%s kuvat');
define('N_OF_PIC_TO_DISP', 'Kuinka monta kuvaa näytetään');
define('APPLY', 'Hyväksy muutokset');

// lang_groupmgr_php
define('GROUP_NAME', 'Ryhmän nimi');
define('DISK_QUOTA', 'Levytila');
define('CAN_RATE', 'Voi äänestää kuvia');
define('CAN_SEND_ECARDS', 'Voi lähettää e-kortteja');
define('CAN_POST_COM', 'Voi kommentoida');
define('CAN_UPLOAD', 'Voi lisätä kuvia');
define('CAN_HAVE_GALLERY', 'Voi saada oman gallerian');
define('APPLY', 'Hyväksy muutokset');
define('CREATE_NEW_GROUP', 'Luo uusi ryhmä');
define('DEL_GROUPS', 'Poista valitut ryhmät');
define('CONFIRM_DEL', 'Varoitus, kun poistat ryhmän, käyttäjät ketkä kuuluvat ryhmään siirretään \'Rekisteröidyt\' ryhmään !\\n\\nHaluatko jatkaa ?');
define('TITLE', 'Muokkaa käyttäjä ryhmiä');
define('APPROVAL_1', 'Hyväksyntä asetus (1)');
define('APPROVAL_2', 'Hyväksyntä asetus (2)');
define('NOTE1', '<b>(1)</b> Lisäykset julkiseen albumiin tarvitsevat ylläpidon hyväksynnän');
define('NOTE2', '<b>(2)</b> Lisäykset käyttäjän albumiin tarvitsevat ylläpidon hyväksynnän');
define('NOTES', 'Huomio');

// lang_index_php
define('WELCOME', 'Tervetuloa !');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Haluatko varmasti POISTAA tämän albumin ? \\nKaikki kuvat ja kommentit poistetaan myös.');
define('DELETE', 'POISTA');
define('MODIFY', 'MUOKKAA');
define('EDIT_PICS', 'MUOKKAA KUVIA');

// lang_list_categories
define('HOME', 'Etusivu');
define('STAT1', '<b>[pictures]</b> kuvaa <b>[albums]</b> albumia ja <b>[cat]</b> kategoriaa sekä <b>[comments]</b> kommentia. Kuvia tarkasteltu <b>[views]</b> kertaa');
define('STAT2', '<b>[pictures]</b> kuvaa <b>[albums]</b> albumia tarkasteltu <b>[views]</b> kertaa');
define('XX_S_GALLERY', '%s\'s Galleria');
define('STAT3', '<b>[pictures]</b> kuvaa <b>[albums]</b> albumia jossa <b>[comments]</b> kommenttia. Kuvia tarkasteltu <b>[views]</b> kertaa');

// lang_list_users
define('USER_LIST', 'Käyttäjä lista');
define('NO_USER_GAL', 'Ei ole käyttäjiä joilla oikeus albumiin');
define('N_ALBUMS', '%s albumi(t)');
define('N_PICS', '%s kuva(a)');

// lang_list_albums
define('N_PICTURES', '%s kuvaa');
define('LAST_ADDED', ', viimeisin lisätty %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Päivitä albumi %s');
define('GENERAL_SETTINGS', 'Yleiset asetukset');
define('ALB_TITLE', 'Albumin otsikko');
define('ALB_CAT', 'Albumin kategoria');
define('ALB_DESC', 'Albumin tarkenne');
define('ALB_THUMB', 'Albumi thumbnailit');
define('ALB_PERM', 'Albumin oikeudet');
define('CAN_VIEW', 'Albumia voi tarkastella');
define('CAN_UPLOAD', 'Vierailijat voivat lisätä kuvia');
define('CAN_POST_COMMENTS', 'Vierailijat voivat kommentoida');
define('CAN_RATE', 'Vieräilijat voivat arvostella');
define('USER_GAL', 'Käyttäjän Galleria');
define('NO_CAT', '* Ei kategoriaa *');
define('ALB_EMPTY', 'Albumi on tyhja');
define('LAST_UPLOADED', 'Viimeksi lisätty');
define('PUBLIC_ALB', 'Kaikki (julkinen albumi)');
define('ME_ONLY', 'Minä ainoastaan');
define('OWNER_ONLY', 'Albumin omistaja (%s) ainoastaan');
define('GROUPP_ONLY', 'Jäsenet ryhmästä \'%s\' ');
define('ERR_NO_ALB_TO_MODIFY', 'Ei muokattavia albumeita tietokannassa.');
define('UPDATE', 'Päivitä albumi');

// lang_rate_pic_php
define('ALREADY_RATED', 'Olet jo arvostellut tämän kuvan');
define('RATE_OK', 'Äänesi hyväksytty');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'Sivuston {SITE_NAME} ylläpitäjät poistavat kaiken sopimattoman materiaalin niin nopeasti kuin mahdollista. Sähköposti osoitteen on oltava toimiva koska asetuksista riippuen saatat joutua aktivoimaan tilisi sähköpostin välityksellä.<br />
<br />
Hyväksymällä tämän sopimuksen sitoudut olemaan lähettämättä laitonta, seksuaalista tai muuten sopimatonta materiaalia muuten {SITE_NAME} ylläpitäjät ovat tapauksen sattuessa oikeutettu poistamaan kuvat sekä tunnuksesi varoituksetta.<br />
<br />
Sivu käyttää evästeitä tallentamaa informaatiota. Evästeiden tarkoitus on ainoastaa helpottaa sivun käyttöä. Sähköposti osoitetta ei luovuteta ulkopuolisten tietoon tarkoituksellisesti.<br />
<br />
Klikkaamalla \'Hyväksyn\' hyväksyt nämä säännöt.');

// lang_register_php
define('PAGE_TITLE', 'Rekisteröinti');
define('TERM_COND', 'Käyttösopimus');
define('I_AGREE', 'Hyväksyn');
define('SUBMIT', 'Lähetä rekisteröinti');
define('ERR_USER_EXISTS', 'Tunnus on jo käytössä, ole hyvä ja valitse toinen');
define('ERR_PASSWORD_MISMATCH', 'Salasanat eivät täsmää');
define('ERR_UNAME_SHORT', 'Tunnuksen on oltava vähintään 2 merkkiä pitkä');
define('ERR_PASSWORD_SHORT', 'Salasanan on oltava vähintään 2 merkkiä pitkä');
define('ERR_UNAME_PASS_DIFF', 'Tunnuksen ja salasanan on oltava eri');
define('ERR_INVALID_EMAIL', 'Sähköposti osoite on virhellinen');
define('ERR_DUPLICATE_EMAIL', 'Joku on jo rekisteröitynyt samalla sähköposti osoitteella');
define('ENTER_INFO', 'Lisää rekisteröinti tiedot');
define('REQUIRED_INFO', 'Pakolliset tiedot');
define('OPTIONAL_INFO', 'Vapaaehtoiset tiedot');
define('USERNAME', 'Käyttäjänimi');
define('PASSWORD', 'Salasana');
define('PASSWORD_AGAIN', 'Salasana uudestaan');
define('EMAIL', 'Sähköposti');
define('LOCATION', 'Sijainti');
define('INTERESTS', 'Kiinnostukset');
define('WEBSITE', 'Kotisivu');
define('OCCUPATION', 'Koulutus');
define('ERROR', 'VIRHE');
define('CONFIRM_EMAIL_SUBJECT', '%s - Rekisteröinti tiedot');
define('INFORMATION', 'Info');
define('FAILED_SENDING_EMAIL', 'Rekisteröinnin varmistavaa sähköpostia ei voi lähettää!');
define('THANK_YOU', 'Kiitos rekisteröitymisestä.<br /><br />Tilisi täytyy vielä aktivoida. Valitsemaasi sähköposti osoitteeseen on lähetty ohjeet käyttäjätilisi aktivointiin.');
define('ACCT_CREATED', 'Käyttäjätilisi on nyt luotu. Voit kirjautua sisään käyttämällä tunnustasi sekä salasanaasi');
define('ACCT_ACTIVE', 'Käyttäjätilisi on nyt aktivoitu. Voit kirjautua sisään käyttämällä tunnustasi sekä salasanaasi');
define('ACCT_ALREADY_ACT', 'Tilisi on jo aktiivinen !');
define('ACCT_ACT_FAILED', 'Tiliäsi ei voi aktivoida !');
define('ERR_UNK_USER', 'Valittua käyttäjää ei löydy !');
define('X_S_PROFILE', '%s\' asetukset');
define('GROUP', 'Ryhmä');
define('REG_DATE', 'Liittynyt');
define('DISK_USAGE', 'Levyn käyttö');
define('CHANGE_PASS', 'Vaihda salasana');
define('CURRENT_PASS', 'Nykyinen salasana');
define('NEW_PASS', 'uusi salasana');
define('NEW_PASS_AGAIN', 'Uusi salasana uudestaan');
define('ERR_CURR_PASS', 'Nykyinen salasana väärin');
define('APPLY_MODIF', 'Hyväksy muutokset');
define('UPDATE_SUCCESS', 'Profiilisi päivitetty');
define('PASS_CHG_SUCCESS', 'Salasanasi vaihdettu');
define('PASS_CHG_ERROR', 'Salasanaasi ei vaihdettu');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Kiitos rekisteröitymisestä {SITE_NAME} sivulle.

Tunnus : "{USER_NAME}"
Salasana : "{PASSWORD}"

Sinun on aktivoitava tilisi, tarvitsee vain klikata alla olevaa linkkiä
tai leikkaa/liitä (copy/paste) se www selaimeesi.

{ACT_LINK}

Terveisin,

Sivun {SITE_NAME} ylläpitäjä.
');

// lang_reviewcom_php
define('TITLE', 'Näytä kommentit');
define('NO_COMMENT', 'Ei kommentteja');
define('N_COMM_DEL', '%s kommentti poistettu');
define('N_COMM_DISP', 'Kuinka monta kommenttia näytetään');
define('SEE_PREV', 'Edellinen');
define('SEE_NEXT', 'Seuraava');
define('DEL_COMM', 'Poista valitut kommentit');

// lang_search_php
define('SEARCH', 'Hae kuva');

// lang_search_new_php
define('PAGE_TITLE', 'Etsi uusia kuvia');
define('SELECT_DIR', 'Valitse hakemisto');
define('SELECT_DIR_MSG', 'Voit lisätä FTP:llä lisätyt kuvat hakemistoihin<br /><br />Valitse hakemisto johon laitoit kuvat');
define('NO_PIC_TO_ADD', 'Ei lisättäviä kuvia');
define('NEED_ONE_ALBUM', 'Tarvitset vähintään yhden albumin voidaksesi käyttää toimintoa');
define('WARNING', 'Varoitus');
define('CHANGE_PERM', 'scripti ei voi kirjoittaa tähän hakemistoon. Oikeuksien täytyy olla 755 tai 777 ennen kuin yrität lisätä kuvia !');
define('TARGET_ALBUM', '<b>Laita kuvat hakemistosta &quot;</b>%s<b>&quot;</b>%s albumiin');
define('FOLDER', 'Hakemisto');
define('IMAGE', 'Kuva');
define('ALBUM', 'Albumi');
define('RESULT', 'Tulos');
define('DIR_RO', 'Ei kirjoitettavissa. ');
define('DIR_CANT_READ', 'Ei luettavissa. ');
define('INSERT', 'Lisätään uusia kuvia galleriaan');
define('LIST_NEW_PIC', 'Lista uusista kuvista');
define('INSERT_SELECTED', 'Lisää valitut kuvat');
define('NO_PIC_FOUND', 'Uusia kuvia ei löytynyt');
define('BE_PATIENT', 'Odota hetki. Menee pikkuisen aikaa kuvien käsittelyssä');
define('NOTES', '<ul><li><b>OK</b> : tarkoittaa kuva lisätty onnistuneesti<li><b>DP</b> : tarkoittaa kuva on jo aiemmin lisätty<li><b>PB</b> : tarkoittaa kuvaa ei voitu lisätä, tarkista asetukset ja oikeudet<li>Jos OK, DP, PB \'merkit\' eivät ilmesty klikkaa rikkinäistä kuvaa nähdäksesi PHP: virheilmoituksen<li>Jos selaimesi menee timeouttiin, lataa sivu uudestaan</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('TITLE', 'Lisää kuva');
define('MAX_FSIZE', 'Suurin sallittu tiedostokoko %s KB');
define('ALBUM', 'Albumi');
define('PICTURE', 'Kuva');
define('PIC_TITLE', 'Kuvan otsikko');
define('DESCRIPTION', 'Kuvan tarkenne');
define('KEYWORDS', 'Hakusana (erota välilyönnillä)');
define('ERR_NO_ALB_UPLOADABLES', 'Ei albumeita joille oikeus lisätä kuvia');

// lang_usermgr_php
define('TITLE', 'Muokkaa käyttäjiä');
define('NAME_A', 'Nimellä nousevasti');
define('NAME_D', 'Nimellä laskevasti');
define('GROUP_A', 'Ryhmittäin nousevasti');
define('GROUP_D', 'Ryhmittäin laskevasti');
define('REG_A', 'Rekisteröinti päivällä nousevasti');
define('REG_D', 'Rekisteröinti päivällä laskevasti');
define('PIC_A', 'Kuvien määrällä nousevasti');
define('PIC_D', 'Kuvien määrällä laskevasti');
define('DISKU_A', 'Levyn käyttö nousevasti');
define('DISKU_D', 'Levyn käyttö laskevasti');
define('SORT_BY', 'Järjestä käyttäjät');
define('ERR_NO_USERS', 'Käyttäjätaulu on tyhjä !');
define('ERR_EDIT_SELF', 'Et voi muokata profiiliasi täältä \'Omat asetukset\' linkistä pääset tekemään sen');
define('EDIT', 'MUOKKAA');
define('DELETE', 'POISTA');
define('NAME', 'Tunnus');
define('GROUP', 'Ryhmä');
define('INACTIVE', 'Passiivinen');
define('OPERATIONS', 'Toiminto');
define('PICTURES', 'Kuvat');
define('DISK_SPACE', 'Tilaa käytetty / Maksimi');
define('REGISTERED_ON', 'Rekisteröitynyt');
define('U_USER_ON_P_PAGES', '%d käyttäjää %d sivu(a)');
define('CONFIRM_DEL', 'Haluatko varmasti POISTAA tämän käyttäjän ? \\nKaikki albumit ja kuvat poistuvat myös.');
define('MAIL', 'POSTI');
define('ERR_UNKNOWN_USER', 'Valittua käyttäjää ei löydy !');
define('MODIFY_USER', 'Muokkaa käyttäjää');
define('NOTES', 'Huomio');
define('NOTE_LIST', '<li>Jos et halua vaihtaa salasanaa, jätä \"salasana\" kenttä tyhjäksi');
define('PASSWORD', 'Salasana');
define('USER_ACTIVE_CP', 'Käyttäjä aktiivinen');
define('USER_GROUP_CP', 'Käyttäjän ryhmä');
define('USER_EMAIL', 'Käyttäjän sähköposti');
define('USER_WEB_SITE', 'Käyttäjän kotisivu');
define('CREATE_NEW_USER', 'Luo uusi käyttäjä');
define('USER_FROM', 'Käyttäjän sijainti');
define('USER_INTERESTS', 'Käyttäjän kiinnostukset');
define('USER_OCC', 'Käyttäjän koulutus');

// lang_util_php
define('TITLE', 'Pienennä kuvia');
define('WHAT_IT_DOES', 'Ominaisuudet');
define('WHAT_UPDATE_TITLES', 'Päivittää otsikot tiedostonimiin');
define('WHAT_DELETE_TITLE', 'Poistaa otsikot');
define('WHAT_REBUILD', 'Tekee uudet thumbnailit ja pienentää kuvat');
define('WHAT_DELETE_ORIGINALS', 'Poistaa alkuperäisen kokoiset kuvat ja korvaa ne pienennetyillä versioilla');
define('FILE', 'Tiedosto');
define('TITLE_SET_TO', 'otsikon asetti');
define('SUBMIT_FORM', 'lähetä');
define('UPDATED_SUCCESFULLY', 'päivitetty onnistuneesti');
define('ERROR_CREATE', 'VIRHE tapahtumassa');
define('CONTINUE', 'Käsittele lisää kuvia');
define('MAIN_SUCCESS', 'Tiedostoa %s on onnistuneesti käytetty pääkuvana');
define('ERROR_RENAME', 'Virhe uudelleen nimeämisessä %s ei voitu nimetä %s');
define('ERROR_NOT_FOUND', 'Tiedostoa %s ei löydy');
define('BACK', 'takaisin');
define('THUMBS_WAIT', 'Päivitää thumbnaileja ja/tai pienentää kuvia, odota hetki...');
define('THUMBS_CONTINUE_WAIT', 'Jatkaa thumbnailien päivittämistä ja/tai kuvien pienentämistä...');
define('TITLES_WAIT', 'Päivittää otsikoita, odota hetki...');
define('DELETE_WAIT', 'Poistaa otsikoita, odota hetki...');
define('REPLACE_WAIT', 'Poistaa alkuperäisia kuvia ja korvaa ne pienennetyillä, odota hetki..');
define('INSTRUCTION', 'Pikaohje');
define('INSTRUCTION_ACTION', 'Valitse toiminto');
define('INSTRUCTION_PARAMETER', 'Aseta arvot');
define('INSTRUCTION_ALBUM', 'Valitse albumi');
define('INSTRUCTION_PRESS', 'Paina %s');
define('UPDATE', 'Päivitä thumbnailit ja/tai pienennä kuvat');
define('UPDATE_WHAT', 'Mitä päivitetään');
define('UPDATE_THUMB', 'Ainoastaan thumbnailit');
define('UPDATE_PIC', 'Pienennetään pelkät kuvat');
define('UPDATE_BOTH', 'Pienennetään kuvat ja päivitetään thumbnailit');
define('UPDATE_NUMBER', 'Kuinka monta kuvaa käsitellään joka klikkauksella');
define('UPDATE_OPTION', '(Kokeile säätää toimintoa pienemmälle jos tulee timeout ongelmia)');
define('FILENAME_TITLE', 'Tiedostonimi ? Kuvan otsikko');
define('FILENAME_HOW', 'Kuinka tiedostonimet muokatann');
define('FILENAME_REMOVE', 'Poista .jpg pääte ja korvaa välit _ (alleviivaus)');
define('FILENAME_EURO', 'Muuta 2003_11_23_13_20_20.jpg tämmöiseksi 23/11/2003 13:20');
define('FILENAME_US', 'Muuta 2003_11_23_13_20_20.jpg tämmöiseksi 11/23/2003 13:20');
define('FILENAME_TIME', 'Muuta 2003_11_23_13_20_20.jpg tämmöiseksi 13:20');
define('DELETE', 'Poista otsikot tai alkuperäisen kokoiset kuvat');
define('DELETE_TITLE', 'Poista kuvien otsikot');
define('DELETE_ORIGINAL', 'Poista alkuperäisen kokoiset kuvat');
define('DELETE_REPLACE', 'Poistaa alkuperäiset kuvat ja korvaa ne pienennetyillä versioilla');
define('SELECT_ALBUM', 'Valitse albumi');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>