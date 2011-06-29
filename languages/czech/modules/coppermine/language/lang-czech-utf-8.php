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
/*   $Id: lang-czech-utf-8.php,v 1.1 2004/07/31 21:13:45 akamu Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Czech');
define('LANG_NAME_NATIVE', '&#x10C;esky');
define('LANG_COUNTRY_CODE', 'cz');
define('TRANS_NAME', 'Michal Soukup aka migon');
define('TRANS_EMAIL', 'migon@boule.cz');
define('TRANS_WEBSITE', 'http://www.boule.cz/');
define('TRANS_DATE', '2003-10-02');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'UTF-8');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'Ano');
define('NO', 'Ne');

// some common strings
define('BACK', 'ZPÃŒT');
define('CONTINUE', 'POKRAÃˆOVAT');
define('INFO', 'Informace');
define('ERROR', 'Chyba');

//// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%m/%d/%y at %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y at %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y at %I:%M %p');

// short names for Byte, Kilo, Mega
$lang_byte_units = array('BytÃ¹','KB','MB',);

// Day of week
$lang_day_of_week = array('Ne','Po','Ãšt','St','Ãˆt','PÃ¡','So',);
// Day of the month
$lang_month = array('Leden','Ãšnor','BÃ¸ezen','Duben','KvÃ¬ten','Ãˆerven','Ãˆervenec','Srpen','ZÃ¡Ã¸Ã­','Ã˜Ã­jen','Listopad','Prosinec',);
// For the word censor
$lang_bad_words = array('pÃ­Ã¨a','hovno','*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*',);
// lang_meta_album_names
define('RANDOM', 'NÃ¡hodnÃ© obrÃ¡zky');
define('LASTUP', 'NejnovÃ¬jÂ¹Ã­');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Naposledy aktualizovanÃ¡ alba');
define('LASTCOM', 'NejnovÃ¬jÂ¹Ã­ komentÃ¡Ã¸e');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'NejprohlÃ­Â¾enÃ¬jÂ¹Ã­');
define('TOPRATED', 'NejlÃ©pe hodnocenÃ©');
define('LASTHITS', 'Naposledy zobrazenÃ©');
define('SEARCH', 'VÃ½sledky hledÃ¡nÃ­');
define('FAVPICS', 'OblÃ­benÃ© obrÃ¡zky');

// lang_errors
define('ACCESS_DENIED', 'NemÃ¡te oprÃ¡vnÃ¬nÃ­ na tuto strÃ¡nku');
define('PERM_DENIED', 'NemÃ¡te dostateÃ¨nÃ¡ prÃ¡va pro potvrzenÃ­ tÃ©to operace.');
define('PARAM_MISSING', 'Skriptu nebyly pÃ¸edÃ¡ny potÃ¸ebnÃ© parametry');
define('NON_EXIST_AP', 'VybranÃ© album/obrÃ¡zek neexistuje');
define('QUOTA_EXCEEDED', 'VyÃ¨erpal(a) jste mÃ­sto na disku.<br /><br />VaÂ¹e kvÃ³ta je[quota]K, VaÂ¹e obrÃ¡zky zbÃ­rajÃ­ [space]K, pÃ¸idÃ¡nÃ­m tohoto obrÃ¡zku by jste svoji kvÃ³tu pÃ¸ekroÃ¨il');
define('GD_FILE_TYPE_ERR', 'Pokud pouÂ¾Ã­vÃ¡te GD knihovnu jsou podporovÃ¡ny jen obrÃ¡zky JPG a PNG');
define('INVALID_IMAGE', 'Tento obrÃ¡zek je poÂ¹kozen/poruÂ¹en GD knihovna s nÃ­m nemÃ¹Â¾e pracovat.');
define('RESIZE_FAILED', 'Nelze vytvoÃ¸it nÃ¡hled Ã¨i zmenÂ¹enÃ½ obrÃ¡zek');
define('NO_IMG_TO_DISPLAY', 'Zde nenÃ­ obrÃ¡zek kterÃ½ by jste si mohl(a) prohlÃ©dnout');
define('NON_EXIST_CAT', 'VybranÃ¡ kategorie neexistuje');
define('ORPHAN_CAT', 'Podkategorie nemÃ¡ nadÃ¸Ã­zenou kategorii. ProblÃ©m opravte pÃ¸es nastavenÃ­ kategoriÃ­.');
define('DIRECTORY_RO', 'Do adresÃ¡Ã¸e \'%s\' nelze zapisovat (nedostateÃ¨nÃ¡ prÃ¡va), obrÃ¡zky nemohly bÃ½t smazÃ¡ny.');
define('NON_EXIST_COMMENT', 'VybranÃ½ komentÃ¡Ã¸ neexistuje');
define('PIC_IN_INVALID_ALBUM', 'ObrÃ¡zek(y) je/jsou v neexitujÃ­cÃ­m albu (%s)!?');
define('BANNED', 'Byl jse vykopnut z tÃ¬chto strÃ¡nek, nenÃ­ VÃ¡m umoÂ¾nÃ¬no je pouÂ¾Ã­vat.');
define('NOT_WITH_UDB', 'Tato funkce je vypnutÃ¡ jelikoÂ¾ je integrovÃ¡na ve fÃ³ru. BuÃ¯ nenÃ­ poÂ¾adovanÃ¡ fukce dostupnÃ¡ na tomto systÃ©mu, nebo tuto/tyto funci/e plnÃ­ fÃ³rum.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', 'PÃ¸ejÃ­t na seznam galeriÃ­');
define('ALB_LIST_LNK', 'Seznam galeriÃ­');
define('MY_GAL_TITLE', 'PÃ¸ejÃ­t do mÃ© osobnÃ­ galerie');
define('MY_GAL_LNK', 'Moje galerie');
define('MY_PROF_LNK', 'MÃ¹j Profil');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Do Admin mÃ³du');
define('ADM_MODE_LNK', 'Admin mÃ³d');
define('USR_MODE_TITLE', 'Do UÂ¾ivatelskÃ©ho mÃ³du');
define('USR_MODE_LNK', 'UÂ¾ivatelskÃ½ mÃ³d');
define('UPLOAD_PIC_TITLE', 'NahrÃ¡t obrÃ¡zek do gallerie');
define('UPLOAD_PIC_LNK', 'Upload obrÃ¡zku');
define('REGISTER_TITLE', 'VytvoÃ¸it ÃºÃ¨et');
define('REGISTER_LNK', 'Registrovat se');
define('LOGIN_LNK', 'PÃ¸ihlÃ¡sit');
define('LOGOUT_LNK', 'OdhlÃ¡sit');
define('LASTUP_LNK', 'NejnovÃ¬jÂ¹Ã­ obrÃ¡zky');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'PoslednÃ­ komentÃ¡Ã¸e');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'NejprohlÃ­Â¾enÃ¬jÂ¹Ã­');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'NejlÃ©pe hodnocenÃ©');
define('SEARCH_LNK', 'VyhledÃ¡vÃ¡nÃ­');
define('FAV_LNK', 'OblÃ­benÃ©');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'PotvrzenÃ­ uploadu');
define('CONFIG_LNK', 'NastavenÃ­');
define('ALBUMS_LNK', 'Galerie');
define('CATEGORIES_LNK', 'Kategorie');
define('USERS_LNK', 'UÂ¾ivatelÃ©');
define('GROUPS_LNK', 'UÂ¾. skupiny');
define('COMMENTS_LNK', 'KomentÃ¡Ã¸e');
define('SEARCHNEW_LNK', 'DÃ¡vkovÃ© pÃ¸idÃ¡nÃ­ obrÃ¡zkÃ¹');
define('UTIL_LNK', 'ZmÃ¬nit velikost obrÃ¡zkÃ¹');
define('BAN_LNK', 'Vykopnout uÂ¾ivatele');

// lang_user_admin_menu
define('ALBMGR_LNK', 'VytvoÃ¸it / organizovat moje galerie');
define('MODIFYALB_LNK', 'ZmÃ¬nit moje galerie');
define('MY_PROF_LNK', 'MÃ¹j profil');

// lang_cat_list
define('CATEGORY', 'Kategorie');
define('ALBUMS', 'Galerie');
define('PICTURES', 'ObrÃ¡zky');

// lang_album_list
define('ALBUM_ON_PAGE', '%d GaleriÃ­ na %d strÃ¡nkÃ¡ch');

// lang_thumb_view
define('DATE', 'DATUM');
define('NAME', 'JMÃ‰NO SOUBORU');
define('TITLE', 'NADPIS');
define('SORT_DA', 'Ã˜adit vzestupnÃ¬ podle data');
define('SORT_DD', 'Ã˜adit sestupnÃ¬ podle data');
define('SORT_NA', 'Ã˜adit vzestupnÃ¬ podle jmÃ©na');
define('SORT_ND', 'Ã˜adit sestupnÃ¬ podle jmÃ©na');
define('SORT_TA', 'Ã˜adit podle nadpisu vzestupnÃ¬');
define('SORT_TD', 'Ã˜adit podle nadpisu sestupnÃ¬');
define('PIC_ON_PAGE', '%d obrÃ¡zkkÃ¹ na %d strÃ¡nkÃ¡ch');
define('USER_ON_PAGE', '%d uÂ¾ivatelÃ¹ na %d strÃ¡nkÃ¡ch');
define('SORT_RA', 'Sort by rating ascending');
define('SORT_RD', 'Sort by rating descending');
define('RATING', 'RATING');
define('SORT_TITLE', 'Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE', 'ZpÃ¬t na strÃ¡nku s nÃ¡hledy');
define('PIC_INFO_TITLE', 'Zobraz/skryj informace o obrÃ¡zku');
define('SLIDESHOW_TITLE', 'Slideshow');
define('SLIDESHOW_DISABLED', 'e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'Poslat tento obrÃ¡zek jako pohlednici');
define('ECARD_DISABLED', 'Pohlednice jsou vypnutÃ©');
define('ECARD_DISABLED_MSG', 'NemÃ¡te dostateÃ¨nÃ¡ prÃ¡va pro zaslÃ¡nÃ­ pohlednice');
define('PREV_TITLE', 'PÃ¸edchozÃ­ obrÃ¡zek');
define('NEXT_TITLE', 'DalÂ¹Ã­ obrÃ¡zek');
define('PIC_POS', 'OBRÃZEK %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', 'Hodnotit tento obrÃ¡zek ');
define('NO_VOTES', '(Â¾Ã¡dnÃ© hodnocenÃ­)');
define('RATING', '(AktualnÃ­ hodnocenÃ­ : %s / z 5, hlasovÃ¡no %s krÃ¡t)');
define('RUBBISH', 'HnusnÃ½');
define('POOR', 'MizernÃ½');
define('FAIR', 'Ujde to');
define('GOOD', 'DobrÃ½');
define('EXCELLENT', 'VÃ½bornÃ½');
define('GREAT', 'DokonalÃ½');

// lang_cpg_die
define('INFORMATION', 'Informace');
define('ERROR', 'Chyba');
define('CRITICAL_ERROR', 'KritickÃ¡ chyba');
define('FILE', 'Soubor: ');
define('LINE', 'Ã˜Ã¡dka: ');

// lang_display_thumbnails
define('FILENAME', 'JmÃ©no souboru : ');
define('FILESIZE', 'Velikost souboru : ');
define('DIMENSIONS', 'RozmÃ¬ry : ');
define('DATE_ADDED', 'Datum pÃ¸idÃ¡nÃ­ : ');

// lang_get_pic_data
define('N_COMMENTS', '%s KomentÃ¡Ã¸(Ã¹)');
define('N_VIEWS', '%s zobrazenÃ­');
define('N_VOTES', '(%s hlas(Ã¹))');

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
define('LV_ADMIN', 'OpouÂ¹tÃ­m Admin MÃ³d....:-(');
define('ENT_ADMIN', 'Vstupuji do Admin MÃ³du....:-)');

// lang_albmgr_php
define('ALB_NEED_NAME', 'Galerie musÃ­ mÃ­t jmÃ©no');
define('CONFIRM_MODIFS', 'Ste si jist(a) tÃ¬mito zmÃ¬nami ?');
define('NO_CHANGE', 'NeudÃ¬lal(a) jste Â¾Ã¡dnÃ© zmÃ¬ny !');
define('NEW_ALBUM', 'NovÃ¡ galerie');
define('CONFIRM_DELETE1', 'Jste si jist(a), Â¾e chcete smazat tuto galerii ?');
define('CONFIRM_DELETE2', '\\nVÂ¹echny obrÃ¡zky a komentÃ¡Ã¸e budou smazÃ¡ny !');
define('SELECT_FIRST', 'Nejprve vyberte galerii');
define('ALB_MRG', 'SprÃ¡vce galeriÃ­');
define('MY_GALLERY', '* Moje galerie *');
define('NO_CATEGORY', '* NenÃ­ kategorie *');
define('DELETE', 'Smazat');
define('NEW', 'NovÃ½/Ã¡');
define('APPLY_MODIFS', 'Potvrdit zmÃ¬ny');
define('SELECT_CATEGORY', 'Vybrat kategorii');

// lang_catmgr_php
define('MISS_PARAM', 'Parametry potÃ¸ebnÃ© pro \'%s\'operaci not supplied !');
define('UNKNOWN_CAT', 'VybranÃ¡ kategorie v databÃ¡zi neexistuje');
define('USERGAL_CAT_RO', 'Nelze smazat uÂ¾ivatelskÃ© galerie !');
define('MANAGE_CAT', 'Spravovat kategorie');
define('CONFIRM_DELETE', 'Opravdu chcete SMAZAT tuto kategorii');
define('CATEGORY', 'Kategorie');
define('OPERATIONS', 'Operace');
define('MOVE_INTO', 'PÃ¸esunout do');
define('UPDATE_CREATE', 'Aktualizovat/VytvoÃ¸it kategorii');
define('PARENT_CAT', 'NadÃ¸azenÃ¡ kategorie');
define('CAT_TITLE', 'Nadpis kategorie');
define('CAT_DESC', 'Popis kategorie');

// lang_config_php
define('TITLE', 'NastavenÃ­');
define('RESTORE_CFG', 'Nastavit vÃ½chozÃ­');
define('SAVE_CFG', 'UloÂ¾it konfiguraci');
define('NOTES', 'PoznÃ¡mky');
define('INFO', 'Informace');
define('UPD_SUCCESS', 'Konfigurace byla zmÃ¬nÃ¬na');
define('RESTORE_SUCCESS', 'Konfigurace byla nastavena na vÃ½chozÃ­ nastavenÃ­');
define('NAME_A', 'JmÃ©no vzestupnÃ¬');
define('NAME_D', 'JmÃ©no sestupnÃ¬');
define('DATE_A', 'Datum vzestupnÃ¬');
define('DATE_D', 'Datum sestupnÃ¬');
define('TITLE_A', 'Nadpis vzestupnÃ¬');
define('TITLE_D', 'Nadpis sestupnÃ¬');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Height');
define('TH_WD', 'Width');

// lang_config_data
define('CONFIG_GENSET', 'ZÃ¡kladnÃ­ nastavenÃ­');
define('GALLERY_NAME', 'JmÃ©no gallerie');
define('GALLERY_DESCRIPTION', 'Popis Galerie');
define('GALLERY_ADMIN_EMAIL', 'Email administrÃ¡tora galerie');
define('ECARDS_MORE_PIC_TARGET', 'Address to nuke folder ie http://www.mysite.tld/html/');
define('LANG', 'Jazyk');
define('CPGTHEME', 'TÃ©mÃ¡tko');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'NastavenÃ­ zobrazenÃ­');
define('MAIN_TABLE_WIDTH', 'Â©Ã­Ã¸ka hlavnÃ­ tabulky v (pixelech nebo %)');
define('SUBCAT_LEVEL', 'PoÃ¨et ÃºrovnÃ­ subkategoriÃ­');
define('ALBUMS_PER_PAGE', 'PoÃ¨et galeriÃ­ na strÃ¡nku');
define('ALBUM_LIST_COLS', 'PoÃ¨et sloupcÃ¹ v pÃ¸ehledu galeriÃ­');
define('ALB_LIST_THUMB_SIZE', 'Velikost nÃ¡hledÃ¹ v pixelech');
define('MAIN_PAGE_LAYOUT', 'Obsah hlavnÃ­ strÃ¡nky');
define('FIRST_LEVEL', 'Ukazovat v kategoriÃ­ch nÃ¡hledy galeriÃ­ prvnÃ­ ÃºrovnÃ¬');
define('THUMB_VIEW_TITLE', 'ZobrazenÃ­ nÃ¡hledÃ¹');
define('THUMBCOLS', 'PoÃ¨et sloupcÃ¹ na strÃ¡nku');
define('THUMBROWS', 'PoÃ¨et Ã¸Ã¡dkÃ¹ na strÃ¡nku');
define('MAX_TABS', 'MaximÃ¡lnÃ­ mnoÂ¾stvÃ­ zÃ¡loÂ¾ek');
define('CAPTION_IN_THUMBVIEW', 'Zobrazit legendu obrÃ¡zku pod nÃ¡hledem');
define('DISPLAY_COMMENT_COUNT', 'Zobrazit poÃ¨et komentÃ¡Ã¸Ã¹ pod nÃ¡hldem');
define('DEFAULT_SORT_ORDER', 'ZÃ¡kladnÃ­ Ã¸azenÃ­ nÃ¡hledÃ¹');
define('MIN_VOTES_FOR_RATING', 'Min. poÃ¨et hlasÃ¹ potÃ¸ebnÃ½ k zaÃ¸azenÃ­ do seznamu \'NejlÃ©pe hodnocenÃ©\'');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'ZobrazenÃ­ obrÃ¡zkÃ¹ &amp; NastavenÃ­ komentÃ¡Ã¸Ã¹');
define('PICTURE_TABLE_WIDTH', 'Â©Ã­Ã¸ka tabulky pro zobrazenÃ­ obrÃ¡zku (v pixelech nebo %)');
define('DISPLAY_PIC_INFO', 'VÂ¾dy zobrazit podrobnÃ© info');
define('FILTER_BAD_WORDS', 'CENZUROVAT slova v komentÃ¡Ã¸Ã­ch');
define('ENABLE_SMILIES', 'Povilit smajlÃ­ky v komentÃ¡Ã¸Ã­ch');
define('DISABLE_FLOOD_PROTECTION', 'Allow several consecutive comments on one pic from the same user');
define('COMMENT_EMAIL_NOTIFICATION', 'Email site admin upon comment submission');
define('MAX_IMG_DESC_LENGTH', 'MaximÃ¡lnÃ­ dÃ¡lka popisu obrÃ¡zku');
define('MAX_COM_WLENGTH', 'MaximÃ¡lnÃ­ dÃ©lka slova v komentÃ¡Ã¸i');
define('MAX_COM_LINES', 'MaximÃ¡lnÃ­ mnoÂ¾stvÃ­ Ã¸Ã¡dkÃ¹ v komentÃ¡Ã¸i');
define('MAX_COM_SIZE', 'MaximÃ¡lnÃ­ dÃ©lka komentÃ¡Ã¸e');
define('DISPLAY_FILM_STRIP', 'UkÃ¡zat filmovÃ½ prouÂ¾ek');
define('MAX_FILM_STRIP_ITEMS', 'PoÃ¨et poloÂ¾ek ve filmovÃ©m prouÂ¾ku');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', 'ObrÃ¡zky a nastavenÃ­ nÃ¡hledÃ¹');
define('JPEG_QUAL', 'Kvalita souborÃ¹ JPEG');
define('THUMB_WIDTH', 'MaximÃ¡lnÃ­ rozmÃ¬ry nÃ¡hledu <b>*</b>');
define('THUMB_USE', 'PouÂ¾Ã­t rozmÃ¬r ( Â¹Ã­Ã¸ka nebo vÃ½Â¹ka nebo maximÃ¡lnÃ­ rozmÃ¬r nÃ¡hledu )<b>*</b>');
define('MAKE_INTERMEDIATE', 'VytvoÃ¸it stÃ¸ednÃ­ obrÃ¡zek');
define('PICTURE_WIDTH', 'MaximÃ¡lnÃ­ Â¹Ã­Ã¸ka nebo vÃ½Â¹ka stÃ¸enÃ­ho obrÃ¡zku <b>*</b>');
define('MAX_UPL_SIZE', 'MaximÃ¡lnÃ­ velikost uploadovanÃ½ch obrÃ¡zkÃ¹ (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'MaximÃ¡lnÃ­ rozmÃ¬ry uploadovanÃ½ch obrÃ¡zkÃ¹ (v pixelech)');
define('USER_SETTING_TITLE', 'NastavenÃ­ uÂ¾ivatelÃ¹');
define('ALLOW_USER_REGISTRATION', 'Povolit registraci novÃ½ch uÂ¾ivatelÃ¹');
define('REG_REQUIRES_VALID_EMAIL', 'Pro registraci vyÂ¾adovat potvrzenÃ­ admina');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Povolit pro dva uÂ¾ivatele stejnÃ½ email');
define('ALLOW_PRIVATE_ALBUMS', 'MajÃ­ mÃ­t uÂ¾ivatelÃ© vlastnÃ­ galerii?');
define('CUSTOM_FIELDS_TITLE', 'Custom fields for image description (Nechte prÃ¡znÃ© a nezobrazÃ­ se)');
define('USER_FIELD1_NAME', 'JmÃ©no poloÂ¾ky 1');
define('USER_FIELD2_NAME', 'JmÃ©no poloÂ¾ky 2');
define('USER_FIELD3_NAME', 'JmÃ©no poloÂ¾ky 3');
define('USER_FIELD4_NAME', 'JmÃ©no poloÂ¾ky 4');
define('PIC_ADV_SETTING_TITLE', 'ObrÃ¡zky a nÃ¡hledy rozÂ¹Ã­Ã¸enÃ© nastavenÃ­');
define('SHOW_PRIVATE', 'Zobrazit ikonu zamknutÃ© galerie nepÃ¸ihlÃ¡Â¹enÃ©mu uÂ¾ivateli.');
define('FORBIDEN_FNAME_CHAR', 'Znaky zakÃ¡zanÃ© v nÃ¡zvech souborÃ¹');
define('ALLOWED_FILE_EXTENSIONS', 'PovolenÃ© koncovky uploadovanÃ½ch souborÃ¹');
define('THUMB_METHOD', 'Metoda zmÃ¬ny velikosti obrÃ¡zkÃ¹');
define('IMPATH', 'Cesta k ImageMagicu (pÃ¸Ã­klad /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'PovolenÃ© typy obrÃ¡zkÃ¹ (pouze pro ImageMagic)');
define('IM_OPTIONS', 'Parametry pro ImageMagic');
define('READ_EXIF_DATA', 'ÃˆÃ­st EXIF data ze souborÃ¹ JPEG');
define('READ_IPTC_DATA', 'Read IPTC data in JPEG files');
define('FULLPATH', 'AdresÃ¡Ã¸ pro galerie <b>*</b>');
define('USERPICS', 'AdresÃ¡Ã¸ pro galerie uÂ¾ivatelÃ¹ <b>*</b>');
define('NORMAL_PFX', 'Prefix pro stÃ¸ednÃ¬ velkÃ© obrÃ¡zky <b>*</b>');
define('THUMB_PFX', 'Prefix pro nÃ¡hledy <b>*</b>');
define('DEFAULT_DIR_MODE', 'ZÃ¡kladnÃ­ mÃ³d pro adresÃ¡Ã¸e');
define('DEFAULT_FILE_MODE', 'ZÃ¡kladnÃ­ mÃ³d pro obrÃ¡zky');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', 'Cookies &amp; KÃ³dovÃ¡ strÃ¡ka');
define('COOKIE_NAME', 'JmÃ©no cookies uÂ¾Ã­vanÃ© programem (expertnÃ­ volba)');
define('COOKIE_PATH', 'Cesta pro cookies uÂ¾Ã­vanÃ¡ programem (expertnÃ­ volba)');
define('CHAR_SET', 'KÃ³dovÃ¡ strÃ¡nka');
define('MISC_SETTING_TITLE', 'DalÂ¹Ã­ nastavenÃ­');
define('DEBUG_MODE', 'Zapnour debug mÃ³d (jen pro testovÃ¡nÃ­)');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) PoloÂ¾ky oznaÃ¨enÃ© * se NESMÃ zmÃ¬nit pokud jiÂ¾ mÃ¡te ve vaÂ¹Ã­ Galerii nahranÃ© obrÃ¡zky</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'VloÂ¾te jmÃ©no a VÃ¡Â¹ komentÃ¡Ã¸');
define('COM_ADDED', 'KomentÃ¡Ã¸u pÃ¸idÃ¡no');
define('ALB_NEED_TITLE', 'ProsÃ­m, dejte galerii nadpis !');
define('NO_UDP_NEEDED', 'Aktualizace nenÃ­ tÃ¸eba.');
define('ALB_UPDATED', 'Galerie aktualizovÃ¡na');
define('UNKNOWN_ALBUM', 'VybranÃ© album neexistuje nebo nemÃ¡te prÃ¡va pro upload do tohoto alba');
define('NO_PIC_UPLOADED', 'ObrÃ¡zek nebyl uploadovÃ¡n!<br /><br />zkontrolujte zda server podporuje upload souborÃ¹, Ã¨i zda jste opravdu zadal(a) obrÃ¡zek k uploadu...');
define('ERR_MKDIR', '  ERROR: Chyba pÃ¸i vytvÃ¡Ã¸enÃ­ adresÃ¡Ã¸e (nebyl vytvoÃ¸en) %s !');
define('DEST_DIR_RO', 'Do cÃ­lovÃ©ho adresÃ¡Ã¸e %s nemÃ¹Â¾e skript zapisovat (zkontrolujte prÃ¡va) !');
define('ERR_MOVE', 'Nelze pÃ¸esunout %s do %s !');
define('ERR_FSIZE_TOO_LARGE', 'RozmÃ¬ry obrÃ¡zku, kterÃ½ se snaÂ¾Ã­te uploadovat, jsou pÃ¸Ã­liÂ¹ velkÃ© (max. velikost je %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Velikost souboru, kterÃ½ se snaÂ¾Ã­te uploadovat, je pÃ¸Ã­liÂ¹ velkÃ¡ (max. velikost je %s KB) !');
define('ERR_INVALID_IMG', 'Soubor kterÃ½ jste nahrÃ¡l(a) na server nenÃ­ validnÃ­m obrÃ¡zkem !');
define('ALLOWED_IMG_TYPES', 'MÃ¹Â¾ete uploadovat pouze obrÃ¡zky %s .');
define('ERR_INSERT_PIC', 'ObrÃ¡zek \'%s\' nelze vloÂ¾it do galerie ');
define('UPLOAD_SUCCESS', 'VÃ¡Â¹ obrÃ¡zek byl nahrÃ¡n na server bez problÃ©mÃ¹<br /><br />Bude viditelnÃ½ po schvÃ¡lenÃ­ adminem.');
define('INFO', 'Informace');
define('ERR_COMMENT_EMPTY', 'VÃ¡Â¹ komentÃ¡Ã¸ je prÃ¡zdnÃ½ !');
define('ERR_INVALID_FEXT', 'Pouze soubory s nÃ¡sledujÃ­cÃ­mi koncovkami jsou podporovanÃ© : <br /><br />%s.');
define('NO_FLOOD', 'Jste autor poslednÃ­ho komentÃ¡Ã¸e k tomuto obrÃ¡zku<br /><br />Pokud ho chcete zmÃ¬nit pouÂ¾ijte volbu upravit ');
define('REDIRECT_MSG', 'PrÃ¡vÃ¬ jste pÃ¸esmÃ¬rovÃ¡vÃ¡n(a).<br /><br /><br />KliknÃ¬te na \'POKRAÃˆOVAT\' pokud se strÃ¡nka nepÃ¸esmÃ¬ruje sama');
define('UPL_SUCCESS', 'VÃ¡Â¹ obrÃ¡zek byl v poÃ¸Ã¡dku pÃ¸idÃ¡n');

// lang_delete_php
define('CAPTION', 'Legenda(popisek)');
define('FS_PIC', 'pÃ¹vodnÃ­ velikost obrÃ¡zku');
define('DEL_SUCCESS', 'bezchybnÃ¬ smazÃ¡no');
define('NS_PIC', 'normÃ¡lnÃ­ velikost obrÃ¡zku');
define('ERR_DEL', 'nelze smazat');
define('THUMB_PIC', 'nÃ¡hled');
define('COMMENT', 'komentÃ¡Ã¸');
define('IM_IN_ALB', 'patÃ¸Ã­ do galerie');
define('ALB_DEL_SUCCESS', 'Galerie \'%s\' smazÃ¡na');
define('ALB_MGR', 'SprÃ¡vce galeriÃ­');
define('ERR_INVALID_DATA', 'ObdrÂ¾ena chybnÃ¡ data \'%s\'');
define('CREATE_ALB', 'VytvÃ¡Ã¸Ã­m galerii \'%s\'');
define('UPDATE_ALB', 'Aktualizuji galerii \'%s\' s nadpisem \'%s\' a seznamem \'%s\'');
define('DEL_PIC', 'Smazat obrÃ¡zek');
define('DEL_ALB', 'Smazat galerii');
define('DEL_USER', 'Smazat uÂ¾ivatele');
define('ERR_UNKNOWN_USER', 'VybranÃ½ uÂ¾ivatel neexistuje !');
define('COMMENT_DELETED', 'KomentÃ¡Ã¸ bezchybnÃ¬ smazÃ¡n ! ');

// lang_display_image_php
define('CONFIRM_DEL', 'Jste si jist, Â¾e chcete smazat tento obrÃ¡zek ? \\nPÃ¸iloÂ¾enÃ© komentÃ¡Ã¸e budou straceny.');
define('DEL_PIC', 'SMAZAT TENTO OBRÃZEK');
define('SIZE', '%s x %s pixelelÃ¹');
define('VIEWS', '%s krÃ¡t');
define('SLIDESHOW', 'Slideshow');
define('STOP_SLIDESHOW', 'ZASTAVIT SLIDESHOW');
define('VIEW_FS', 'kliknÃ¬te pro zobrazenÃ­ pÃ¹vodnÃ­ho obrÃ¡zku');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('TITLE', 'Informace o obrÃ¡zku');
define('FILENAME', 'JmÃ©no souboru');
define('ALBUM NAME', 'JmÃ©no galerie');
define('RATING', 'HodnocenÃ­ (%s hlas(Ã¹))');
define('KEYWORDS', 'KlÃ­Ã¨ovÃ¡ slova');
define('FILE SIZE', 'Velikost souboru');
define('DIMENSIONS', 'RozmÃ¬ry');
define('DISPLAYED', 'Zobrazeno');
define('CAMERA', 'FotoaparÃ¡t');
define('DATE TAKEN', 'Datum poÃ¸Ã­zenÃ­ snÃ­mku');
define('APERTURE', 'Clona');
define('EXPOSURE TIME', 'ExpoziÃ¨nÃ­ Ã¨as');
define('FOCAL LENGTH', 'OhniskovÃ¡ vzdÃ¡lenost');
define('COMMENT', 'KomentÃ¡Ã¸e');
define('ADDFAV', 'PÃ¸idat k oblÃ­benÃ½m');
define('ADDFAVPHRASE', 'OblÃ­benÃ©');
define('REMFAV', 'Odstranit z oblÃ­benÃ½ch');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'Upravit tento komentÃ¡Ã¸');
define('CONFIRM_DELETE', 'Jste si jist(a), Â¾e chcete smazat tento komentÃ¡Ã¸ ?');
define('ADD_YOUR_COMMENT', 'PÃ¸idat komentÃ¡Ã¸');
define('NAME', 'JmÃ©no');
define('COMMENT', 'KomentÃ¡Ã¸');
define('YOUR_NAME', 'Anonym');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'KliknutÃ­m na obrÃ¡zek zavÃ¸ete okno');

// lang_ecard_php
define('TITLE', 'Poslat pohlednici');
define('INVALID_EMAIL', '<b>VarovÃ¡nÃ­</b> : neplatnÃ¡ emailovÃ¡ adresa !');
define('ECARD_TITLE', 'Pohlednice ze serveru %s pro vÃ¡s/tebe');
define('VIEW_ECARD', 'Pokud se pohlednice nezobrazila klikni na link');
define('VIEW_MORE_PICS', 'Klikni pro dalÂ¹Ã­ obrÃ¡zky !');
define('SEND_SUCCESS', 'VaÂ¹e pohlednice byla odeslÃ¡na');
define('SEND_FAILED', 'OmlouvÃ¡me se, ale server nebyl schopen odeslat VaÂ¹Ã­ pohlednici zkuste
     to znovu za chvÃ­li...');
define('FROM', 'Od');
define('YOUR_NAME', 'VaÂ¹e jmÃ©no');
define('YOUR_EMAIL', 'VÃ¡Â¹ email');
define('TO', 'Komu');
define('RCPT_NAME', 'JmÃ©no pÃ¸Ã­jemce');
define('RCPT_EMAIL', 'DoruÃ¨it na email');
define('GREETINGS', 'Pozdrav/oslovenÃ­');
define('MESSAGE', 'ZprÃ¡va');

// lang_editpics_php
define('PIC_INFO', 'Info&nbsp;o obrÃ¡zku');
define('ALBUM', 'Galerie');
define('TITLE', 'Nadpis');
define('DESC', 'Popis');
define('KEYWORDS', 'KlÃ­Ã¨ovÃ¡ slova');
define('PIC_INFO_STR', '%sx%s - %sKB - %s zobrazenÃ­ - %s hlas(Ã¹)');
define('APPROVE', 'SchvÃ¡lit obrÃ¡zek');
define('POSTPONE_APP', 'OdloÂ¾it schvÃ¡lenÃ­');
define('DEL_PIC', 'Smazat obrÃ¡zek');
define('RESET_VIEW_COUNT', 'Vynulovat poÃ¨Ã­tadlo zobrazenÃ­');
define('RESET_VOTES', 'Vynulovat hlasy');
define('DEL_COMM', 'Smazat komentÃ¡Ã¸e');
define('UPL_APPROVAL', 'PotvrzenÃ­ uploadu');
define('EDIT_PICS', 'Upravit obrÃ¡zky');
define('SEE_NEXT', 'Zobrazit dalÂ¹Ã­ obrÃ¡zky');
define('SEE_PREV', 'Zobrazit pÃ¸edchozÃ­ obrÃ¡zky');
define('N_PIC', '%s obrÃ¡zkÃ¹');
define('N_OF_PIC_TO_DISP', 'PoÃ¨et obrÃ¡zku k zobrazenÃ­');
define('APPLY', 'UloÂ¾it zmÃ¬ny');

// lang_groupmgr_php
define('GROUP_NAME', 'JmÃ©no skupiny');
define('DISK_QUOTA', 'DiskovÃ¡ kvÃ³ta');
define('CAN_RATE', 'Mohou hodnotit obrÃ¡zky');
define('CAN_SEND_ECARDS', 'mohou posÃ­lat pohlednice');
define('CAN_POST_COM', 'Mohou posÃ­lat komentÃ¡Ã¸e');
define('CAN_UPLOAD', 'Mohou nahrÃ¡vat obrÃ¡zky');
define('CAN_HAVE_GALLERY', 'Mohou mÃ­t osobnÃ­ galerii');
define('APPLY', 'UloÂ¾it zmÃ¬ny');
define('CREATE_NEW_GROUP', 'VytvoÃ¸it novou skupinu');
define('DEL_GROUPS', 'Smazat vybranÃ© skupiny');
define('CONFIRM_DEL', 'Pokud smaÂ¾ete tuto skupinu vÂ¹ichni uÂ¾ivatelÃ©, patÃ¸Ã­cÃ­ do tÃ©to skupiny budou pÃ¸esunuti do skupiny \'Registered\' !\\n\\nPÃ¸ejete si pokraÃ¨ovat ?');
define('TITLE', 'Spravovat uÂ¾ivatelskÃ© skupiny');
define('APPROVAL_1', 'PotvrzenÃ­ veÃ¸ejnÃ©ho. Upl. (1)');
define('APPROVAL_2', 'PotvrzenÃ­ soukromÃ©ho. Upl. (2)');
define('NOTE1', '<b>(1)</b> Upload do veÃ¸ejnÃ½ch galeriÃ­ vyÂ¾aduje potvrzenÃ­ adminem');
define('NOTE2', '<b>(2)</b> Upload do galerie patÃ¸Ã­cÃ­ uÂ¾ivateli vyÂ¾aduje potvrzenÃ­ adminem');
define('NOTES', 'PoznÃ¡mky');

// lang_index_php
define('WELCOME', 'Welcome !');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Jste si jist(a), Â¾e chcete smazat tuto galerii? \\nVÂ¹echny obrÃ¡zky a komentÃ¡Ã¸e pÃ¹jdou do pekla taky. PÃ¸ejete si pokraÃ¨ovat.');
define('DELETE', 'SMAZAT');
define('MODIFY', 'VLASTNOSTI');
define('EDIT_PICS', 'UPRAVIT OBR.');

// lang_list_categories
define('HOME', 'DomÃ¹');
define('STAT1', '<b>[pictures]</b> obrÃ¡zky v <b>[albums]</b> glalerii <b>[cat]</b>v kategorii s <b>[comments]</b> komentÃ¡Ã¸i zobrazeno <b>[views]</b> krÃ¡t');
define('STAT2', '<b>[pictures]</b> obrÃ¡zky v <b>[albums]</b> galerii zobrazeno <b>[views]</b> krÃ¡t');
define('XX_S_GALLERY', '%s\' Galerie');
define('STAT3', '<b>[pictures]</b> obrÃ¡zkÃ¹ v <b>[albums]</b> galserii s <b>[comments]</b> komentÃ¡Ã¸i zobrazeno <b>[views]</b> krÃ¡t');

// lang_list_users
define('USER_LIST', 'Seznam uÂ¾ivatelÃ¹');
define('NO_USER_GAL', 'Nejsou Â¾Ã¡dnÃ© uÂ¾ivatelskÃ© alerie');
define('N_ALBUMS', '%s galeriÃ­');
define('N_PICS', '%s obrÃ¡zkÃ¹');

// lang_list_albums
define('N_PICTURES', '%s obrÃ¡zkÃ¹');
define('LAST_ADDED', ', poslednÃ­ pÃ¸idÃ¡n %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Aktualizovat album %s');
define('GENERAL_SETTINGS', 'ZÃ¡kladnÃ­ nastavenÃ­');
define('ALB_TITLE', 'Nadpis galerie');
define('ALB_CAT', 'Kategorie galerie');
define('ALB_DESC', 'Popis galerie');
define('ALB_THUMB', 'NÃ¡hled reprezentujÃ­cÃ­ album');
define('ALB_PERM', 'PÃ¸Ã­stupovÃ¡ prÃ¡va pro tuto galerii');
define('CAN_VIEW', 'Album mÃ¹Â¾ou prohlÃ­Â¾et');
define('CAN_UPLOAD', 'NÃ¡vÂ¹tÃ¬vnÃ­ci smÃ¬jÃ­ pÃ¸idÃ¡vat obrÃ¡zky');
define('CAN_POST_COMMENTS', 'Povolit komentÃ¡Ã¸e');
define('CAN_RATE', 'NÃ¡vÂ¹tÃ¬vnÃ­ci mohou hlasovat');
define('USER_GAL', 'User Gallery');
define('NO_CAT', '* NenÃ­ kategorie *');
define('ALB_EMPTY', 'Galerie je prÃ¡zdnÃ¡');
define('LAST_UPLOADED', 'NejnovÃ¬jÂ¹Ã­ obrÃ¡zek');
define('PUBLIC_ALB', 'kdokoliv (veÃ¸ejnÃ¡ galerie)');
define('ME_ONLY', 'Pouze jÃ¡');
define('OWNER_ONLY', 'Pouze vlastnÃ­k (%s)');
define('GROUPP_ONLY', 'ÃˆlenovÃ© skupiny \'%s\'');
define('ERR_NO_ALB_TO_MODIFY', 'Album nelze modifikovat v databÃ¡zi.');
define('UPDATE', 'Aktualizovat album');

// lang_rate_pic_php
define('ALREADY_RATED', 'Tento obÃ¡zek jste jiÂ¾ hodnotil(a)');
define('RATE_OK', 'VÃ¡s hlas byl pÃ¸ijat. DÃ¬kujeme.');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'AdministrÃ¡toÃ¸i serveru {SITE_NAME}, potaÂ¾mo tÃ©to galerie si vyhrazujÃ­ prÃ¡vo zÃ¡sahu do obsahu galerie napÃ¸. komentÃ¡Ã¸e, mazÃ¡nÃ­ obrÃ¡zkÃ¹ pÃ¸Ã­padnÃ¬ Ãºprava (pokud poruÂ¹ujÃ­ pravidla galerie nebo dobrÃ© mravy).
Pokud budou obrÃ¡zky nahranÃ© uÂ¾ivetelem poruÂ¹ovat zÃ¡kon(y) budou ihned po zjiÂ¹tÃ¬nÃ­ jejich umÃ­stÃ¬nÃ­ na serveru smazÃ¡ny. AdministrÃ¡toÃ¸i/provozovatelÃ© tÃ©to galerie si distancujÃ­ od
pÃ¸Ã­padnÃ©ho zÃ¡vadnÃ©ho obsahu nahranÃ©ho na server uÂ¾ivateli. VlastnÃ­kem dat v galerii jsou jejich autoÃ¸i. AdministrÃ¡toÃ¸i pÃ¸edpoklÃ¡dajÃ­, Â¾e na server jsou umÃ­sÂ»ovanÃ¡ uÂ¾ivateli pouze obrÃ¡zky k nÃ­mÂ¾ vlastnÃ­ uÂ¾ivatel autorskÃ¡ prÃ¡va.
<br />
Pokud souhlasÃ­te, Â¾e nebudete posÃ­lat jakÃ½koliv zÃ¡vadnÃ½ materiÃ¡l jako vulgÃ¡rnÃ­ a obscÃ©nÃ­ obrÃ¡zky/komentÃ¡Ã¸e, jakÃ½koliv materiÃ¡l vzbuzujÃ­cÃ­ nenÃ¡vist, rasismus, nebo jinÃ½ materiÃ¡l poruÂ¹ujÃ­cÃ­ zÃ¡kony. SouhlasÃ­te, Â¾e administrÃ¡toÃ¸i, provozovatelÃ© a moderÃ¡toÃ¸i  {SITE_NAME}   majÃ­ prÃ¡vo smazat pÃ¸Ã­padnÃ¬ upravit jakÃ½koliv materiÃ¡l kdykoliv to uznajÃ­ za vhodnÃ©. VloÂ¾enÃ© informace budou uloÂ¾enÃ© na serveru a v databÃ¡zi a nebudou poskytnuty Â¾Ã¡dnÃ© tÃ¸etÃ­ stranÃ¬ bez vaÂ¹eho souhlasu. AdministÃ¡toÃ¸i/povozovatelÃ© serveru  vÂ¹ak nejsou ani nebudou ruÃ¨it za data na serveru uloÂ¾enÃ¡ pokud dojde k jakÃ©mukoliv Ãºtoku na sever.
<br />
<br />
Tyto strÃ¡nky vyuÂ¾Ã­vajÃ­ k uloÂ¾enÃ­ uÂ¾ivatelskÃ½ch dat cookies. Cookies slouÂ¾Ã­ pouze pro zvÃ½Â¹enÃ­ konfortu pÃ¸i pouÂ¾Ã­vÃ¡nÃ­ tÃ©to aplikace. EmailovÃ¡ adresa slouÂ¾Ã­ jen pro potvrzenÃ­ vaÂ¹ich ÃºdajÃ¹ a poslÃ¡nÃ­ hesla.<br />
<br />
KliknutÃ­m na \'SouhlasÃ­m\' souhlasÃ­te z vÃ½Â¹e uvedenÃ½mi pravidly..');

// lang_register_php
define('PAGE_TITLE', 'Registrace novÃ©ho uÂ¾ivatele');
define('TERM_COND', 'PodmÃ­nky a pravidla');
define('I_AGREE', 'SouhlasÃ­m');
define('SUBMIT', 'Poslat registraci');
define('ERR_USER_EXISTS', 'ZadanÃ© uÂ¾ivatelskÃ© jmÃ©no jiÂ¾ existuje vyberte si prosÃ­m jinÃ©');
define('ERR_PASSWORD_MISMATCH', 'Hesla se musÃ­ schodovat pokuste je obÃ¬ zadat znovu');
define('ERR_UNAME_SHORT', 'MinimÃ¡lnÃ­ dÃ©lka uÂ¾ivatelskÃ©ho jmÃ©na je 2 znaky');
define('ERR_PASSWORD_SHORT', 'Heslo musÃ­ bÃ½t alespoÃ² 2 znaky dlouhÃ©');
define('ERR_UNAME_PASS_DIFF', 'JmÃ©no a heslo se nesmÃ­ shodovat');
define('ERR_INVALID_EMAIL', 'Byla zadÃ¡na neplatnÃ¡ emailovÃ¡ adresa');
define('ERR_DUPLICATE_EMAIL', 'JinÃ½ uÂ¾ivatel se zaregistroval se zadanÃ½m emailem. Email musÃ­ bÃ½t jedineÃ¨nÃ½');
define('ENTER_INFO', 'ZadanÃ© registraÃ¨nÃ­ informace');
define('REQUIRED_INFO', 'VyÂ¾adovanÃ© informace');
define('OPTIONAL_INFO', 'VolitelnÃ© informace');
define('USERNAME', 'JmÃ©no');
define('PASSWORD', 'Heslo');
define('PASSWORD_AGAIN', 'Heslo (potvrzenÃ­)');
define('EMAIL', 'Email');
define('LOCATION', 'MÃ­sto (napÃ¸. Brno apod.)');
define('INTERESTS', 'ZÃ¡jmy');
define('WEBSITE', 'DomÃ¡cÃ­ strÃ¡nka');
define('OCCUPATION', 'PovolÃ¡nÃ­');
define('ERROR', 'CHYBA');
define('CONFIRM_EMAIL_SUBJECT', '%s - PotvrzenÃ­ registracce');
define('INFORMATION', 'Informace');
define('FAILED_SENDING_EMAIL', 'Nelze odeslat potvrzenÃ­ registace !');
define('THANK_YOU', 'DÃ¬kujeme za registraci.<br /><br />Na adresu zadanou pÃ¸i registraci VÃ¡m budou doruÃ¨eny informace o aktivaci vaÂ¹eho ÃºÃ¨tu');
define('ACCT_CREATED', 'VÃ¡Â¹ uÂ¾ivatelskÃ½ ÃºÃ¨et byl bezchybnÃ¬ vytvoÃ¸en. NynÃ­ se pÃ¸ihlaÂ¹te pomocÃ­ vaÂ¹eho jmÃ©na a hesla');
define('ACCT_ACTIVE', 'VÃ¡Â¹ ÃºÃ¨et je nynÃ­ aktivnÃ­ pÃ¸ihlaÂ¹te se pomocÃ­ vaÂ¹eho jmÃ©na a hesla.');
define('ACCT_ALREADY_ACT', 'VÃ¡Â¹ ÃºÃ¨et je jiÂ¾ aktivnÃ­ !');
define('ACCT_ACT_FAILED', 'Tento ÃºÃ¨et nmÃ¹Â¾e bÃ½t aktivovÃ¡n !');
define('ERR_UNK_USER', 'VybranÃ½ uÂ¾ivatel neexistuje !');
define('X_S_PROFILE', '%s\' profil');
define('GROUP', 'Skupina');
define('REG_DATE', 'PÃ¸ipojen');
define('DISK_USAGE', 'VyuÂ¾itÃ­ disku');
define('CHANGE_PASS', 'ZmÃ¬nit heslo');
define('CURRENT_PASS', 'SouÃ¨asnÃ© heslo');
define('NEW_PASS', 'NovÃ© heslo');
define('NEW_PASS_AGAIN', 'NovÃ© heslo (kontola)');
define('ERR_CURR_PASS', 'SouÃ¨asnÃ© heslo zadÃ¡no nesprÃ¡vnÃ¬');
define('APPLY_MODIF', 'potvrdit zmÃ¬ny');
define('UPDATE_SUCCESS', 'VÃ¡Â¹ profil byl aktualizovÃ¡n');
define('PASS_CHG_SUCCESS', 'VyÂ¹e heslo bylo zmÃ¬nÃ¬no');
define('PASS_CHG_ERROR', 'VaÂ¹e heslo nebylo zmÃ¬nÃ¬no');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'DÃ¬kujeme za registraci na {SITE_NAME}

VaÂ¹e jmÃ©no je : "{USER_NAME}"
VaÂ¹e heslo je: "{PASSWORD}"

Pro aktivaci vaÂ¹eho ÃºÃ¨tu je pÃ¸eba kliknout na odkaz nÃ­Â¾e nebo ho zkopÃ­rovat
do adresnÃ­ho Ã¸Ã¡dku vaÂ¹eho browseru a pÃ¸ejÃ­t na tuto strÃ¡nku


{ACT_LINK}

S Pozdravem,

SprÃ¡va serveru {SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', 'Kontrola komentÃ¡Ã¸Ã¹');
define('NO_COMMENT', 'Zde nejsou komentÃ¡Ã¸e ke kontrole');
define('N_COMM_DEL', '%s komentÃ¡Ã¸(Ã¹) smazÃ¡n(o)');
define('N_COMM_DISP', 'PoÃ¨et komentÃ¡Ã¸Ã¹ k zobrazenÃ­');
define('SEE_PREV', 'PÃ¸edchozÃ­');
define('SEE_NEXT', 'DalÂ¹Ã­');
define('DEL_COMM', 'Smazat vybranÃ© komentÃ¡Ã¸e');

// lang_search_php
define('SEARCH', 'ProhledÃ¡vat obrÃ¡zky');

// lang_search_new_php
define('PAGE_TITLE', 'NajÃ­t novÃ© obrÃ¡zky');
define('SELECT_DIR', 'Vybrat adresÃ¡Ã¸');
define('SELECT_DIR_MSG', 'Tato funkce vÃ¡m umoÂ¾nÃ­ dÃ¡vkovÃ¬ zpracovat obrÃ¡zky nahranÃ© pÃ¸es FTP.<br /><br />Vyberte adresÃ¡Ã¸ kde se nachÃ¡zejÃ­ obrÃ¡zky k spracovÃ¡nÃ­');
define('NO_PIC_TO_ADD', 'Nejsou zde Â¾Ã¡dnÃ© obrÃ¡zky k pÃ¸idÃ¡nÃ­');
define('NEED_ONE_ALBUM', 'PoÃ¸ebujete mÃ­t vytvoÃ¸enu alespoÃ² jednu galerii');
define('WARNING', 'VarovÃ¡nÃ­');
define('CHANGE_PERM', 'Skript nemÃ¹Â¾e zapisovat do tohoto adresÃ¡Ã¸e, musÃ­te ho nastavit na CHMOD 755 nebo 777 pÃ¸ed pÃ¸idÃ¡nÃ­m obrÃ¡zkÃ¹ !');
define('TARGET_ALBUM', '<b>VloÂ¾it obrÃ¡zky z &quot;</b>%s<b>&quot; do </b>%s');
define('FOLDER', 'SloÂ¾ka');
define('IMAGE', 'ObrÃ¡zek');
define('ALBUM', 'Galerie');
define('RESULT', 'VÃ½sledek');
define('DIR_RO', 'NezapisovatelnÃ¡. ');
define('DIR_CANT_READ', 'NeÃ¨itelnÃ¡. ');
define('INSERT', 'PÃ¸idÃ¡vÃ¡m novÃ© obrÃ¡zky do galerie');
define('LIST_NEW_PIC', 'Seznam obrÃ¡zkÃ¹');
define('INSERT_SELECTED', 'VloÂ¾it vybranÃ© obrÃ¡zky');
define('NO_PIC_FOUND', 'NovÃ© obrÃ¡zky nenalezeny');
define('BE_PATIENT', 'ProsÃ­m buÃ¯te trpÃ¬livÃ½(Ã¡), program potÃ¸ebuje na zpracovÃ¡nÃ­ obrÃ¡zku nÃ¬jaÃ½ ten Ã¨as.');
define('NOTES', '<ul><li><b>OK</b> : Tyto obrÃ¡zky byly pÃ¸idÃ¡ny<li><b>DP</b> : ZdvojenÃ­!, Tento obrÃ¡zek ji existuje<li><b>PB</b> : tento obrÃ¡zek nelze pÃ¸idat, skontrolujte konfiguraci pÃ¸Ã­padnÃ¬ pÃ¸Ã­stupovÃ¡ prÃ¡va<li>KdyÂ¾ se neukÃ¡Â¾e \'oznaÃ¨enÃ­\' OK, DP, PB klepnÃ¬te na obrÃ¡zek a uvidÃ­te chybovou hlÃ¡Â¹ku generovanou PHP, kterÃ¡ VÃ¡m pomÃ¹Â¾e zjistit pÃ¸Ã­Ã¨inu problÃ©mu<li>Pokud dojde k timeoutu F5 nebo reload strÃ¡nky by mÃ¬l pomoci</ul>');

// lang_upload_php
define('TITLE', 'Uploadnout obrÃ¡zek');
define('MAX_FSIZE', 'Max. velikost souboru je %s KB');
define('ALBUM', 'Galerie');
define('PICTURE', 'ObrÃ¡zek');
define('PIC_TITLE', 'Nadpis obrÃ¡zku');
define('DESCRIPTION', 'Popis obrÃ¡zku');
define('KEYWORDS', 'KlÃ­Ã¨ovÃ¡ slova (oddÃ¬lenÃ¡ mezerou)');
define('ERR_NO_ALB_UPLOADABLES', 'Zde se nenalÃ©zÃ¡ galerie do kterÃ© je povolen upload.');

// lang_usermgr_php
define('TITLE', 'Spravovat uÂ¾ivatele');
define('NAME_A', 'JmÃ©no vzestup.');
define('NAME_D', 'JmÃ©no sestup.');
define('GROUP_A', 'Skupina vzestup.');
define('GROUP_D', 'Skupina sestup.');
define('REG_A', 'Datum registrace vzestup.');
define('REG_D', 'Datum registrace sestup.');
define('PIC_A', 'PoÃ¨et obrÃ¡zkÃ¹ vzestup.');
define('PIC_D', 'PoÃ¨et obrÃ¡zkÃ¹ sestup.');
define('DISKU_A', 'VyuÂ¾itÃ­ disku vzestup.');
define('DISKU_D', 'VyuÂ¾itÃ­ disku sestup.');
define('SORT_BY', 'Ã˜adit uÂ¾Ã¸ivatele podle');
define('ERR_NO_USERS', 'Tabulka uÂ¾ivatelÃ¹ je prÃ¡zdnÃ¡!');
define('ERR_EDIT_SELF', 'Zde nelze editovat vlastnÃ­ profil pouÂ¾ijte pÃ¸Ã­sluÂ¹nou volbu pracujÃ­cÃ­ s vaÂ¹Ã­m profilem');
define('EDIT', 'UPRAVIT');
define('DELETE', 'SMAZAT');
define('NAME', 'UÂ¾iv. jmÃ©no');
define('GROUP', 'Skupina UÂ¾iv.');
define('INACTIVE', 'NeaktivnÃ­');
define('OPERATIONS', 'Operace');
define('PICTURES', 'ObrÃ¡zky');
define('DISK_SPACE', 'MÃ­sto vyuÂ¾itÃ© / kvÃ³ta');
define('REGISTERED_ON', 'RegistrovÃ¡n');
define('U_USER_ON_P_PAGES', '%d uÂ¾ivatelÃ¹ na %d strÃ¡nkÃ¡ch');
define('CONFIRM_DEL', 'Jste si jist(a), Â¾e chcete smazat tohoto uÂ¾ivatele ? \\nVÂ¹echny jeho obrÃ¡zky, galerie a komentÃ¡Ã¸e budou smazÃ¡ny.');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'VybranÃ½ uÂ¾iv. neexistuje !');
define('MODIFY_USER', 'ZmÃ¬nit uÂ¾iv.');
define('NOTES', 'PoznÃ¡mky');
define('NOTE_LIST', '<li>Pokud nechcete zmÃ¬nit heslo ponechte polÃ­Ã¨ko pro heslo prÃ¡zdnÃ©');
define('PASSWORD', 'Heslo');
define('USER_ACTIVE', 'UÂ¾iv. je aktivnÃ­');
define('USER_GROUP', 'UÂ¾iv. Skupina');
define('USER_EMAIL', 'UÂ¾iv. emaill');
define('USER_WEB_SITE', 'UÂ¾iv. domÃ¡cÃ­ strÃ¡nka');
define('CREATE_NEW_USER', 'VytvoÃ¸it novÃ©ho uÂ¾ivatle.');
define('USER_LOCATION', 'MÃ­sto UÂ¾iv. (napÃ¸. Praha apod.)');
define('USER_INTERESTS', 'UÂ¾iv. zÃ¡jmy');
define('USER_OCCUPATION', 'UÂ¾iv. povolÃ¡nÃ­');

// lang_util_php
define('TITLE', 'ZmÃ¬nit velikost obrÃ¡zku');
define('WHAT_IT_DOES', 'Co to dÃ¬lÃ¡?');
define('WHAT_UPDATE_TITLES', 'Aktualizovat nadpisy podle jmÃ©na souborÃ¹');
define('WHAT_DELETE_TITLE', 'Smazat nadpisy');
define('WHAT_REBUILD', 'PÃ¸edÃ¬lat nahledy a zmÃ¬nÃ¬nÃ© obrÃ¡zky');
define('WHAT_DELETE_ORIGINALS', 'Smazat originÃ¡ly a nahradit je stÃ¸ednÃ­mi obrÃ¡zky');
define('FILE', 'Soubor');
define('TITLE_SET_TO', 'Nastavit nadpis na');
define('SUBMIT_FORM', 'odeslat');
define('UPDATED_SUCCESFULLY', 'Aktualizace probÃ¬hla OK');
define('ERROR_CREATE', 'CHYBA pÃ¸i vytvÃ¡Ã¸enÃ­');
define('CONTINUE', 'ZpracovatvÃ­ce obrÃ¡zkÃ¹');
define('MAIN_SUCCESS', 'Skoubor %s byl uspÃ¬Â¹nÃ¬ pouÂ¾it jako hlavnÃ­ obrÃ¡zek');
define('ERROR_RENAME', 'Chyba pÃ¸ejmenovÃ¡nÃ­ %s na %s');
define('ERROR_NOT_FOUND', 'Soubor %s nebyl nalezen');
define('BACK', 'zpÃ¬t na halvnÃ­');
define('THUMBS_WAIT', 'Aktualizuji nÃ¡hledy a/nebo stÃ¸ednÃ­ obrÃ¡zky, prosÃ­m Ã¨ekejte...');
define('THUMBS_CONTINUE_WAIT', 'PokraÃ¨uji v aktualizaci nÃ¡hledÃ¹ a/nebo stÃ¸ednÃ­ch obrÃ¡zkÃ¹...');
define('TITLES_WAIT', 'Aktualizuji nadpisy, prosÃ­m Ã¨ekejte...');
define('DELETE_WAIT', 'MaÂ¾u nadpisy, prosÃ­m Ã¨ekejte...');
define('REPLACE_WAIT', 'MaÂ¾u originÃ¡ly a nahrazuji je stÃ¸ednÃ­mi obrÃ¡zky, prosÃ­m Ã¨ekejte...');
define('INSTRUCTION', 'RychlÃ© instrukce');
define('INSTRUCTION_ACTION', 'Vyberte akci');
define('INSTRUCTION_PARAMETER', 'Nastavit parametry');
define('INSTRUCTION_ALBUM', 'Vybrat galerii');
define('INSTRUCTION_PRESS', 'StisknÃ¬te %s');
define('UPDATE', 'Aktualizovat nÃ¡hledy a/nebo stÃ¸ednÃ­ obrÃ¡zky');
define('UPDATE_WHAT', 'Co mÃ¡ bÃ½t aktualizovÃ¡no');
define('UPDATE_THUMB', 'Jen nÃ¡hledy');
define('UPDATE_PIC', 'Pouze stÃ¸ednÃ­ obrÃ¡zky');
define('UPDATE_BOTH', 'ObojÃ­ nÃ¡hledy i stÃ¸ednÃ­ obrÃ¡zky');
define('UPDATE_NUMBER', 'PoÃ¨et obrÃ¡zkÃ¹, kterÃ© zpracovat na 1 kliknutÃ­');
define('UPDATE_OPTION', '(SniÂ¾te Ã¨Ã­slo pokud mÃ¡te problÃ©my s timeoutem)');
define('FILENAME_TITLE', 'JmÃ©no souboru ? Nadpis obrÃ¡zku');
define('FILENAME_HOW', 'Jak se mÃ¡ zmÃ¬nit jmÃ©no obrÃ¡zku?');
define('FILENAME_REMOVE', 'Odstranit .jpg koncovku a pÃ¸epsat _ (podtrÂ¾Ã­tka mezerami)');
define('FILENAME_EURO', 'ZmÃ¬nit 2003_11_23_13_20_20.jpg na 23/11/2003 13:20');
define('FILENAME_US', 'ZmÃ¬nit 2003_11_23_13_20_20.jpg na 11/23/2003 13:20');
define('FILENAME_TIME', 'ZmÃ¬nit 2003_11_23_13_20_20.jpg na 13:20');
define('DELETE', 'Smazat nadpisy obrÃ¡zkÃ¹ nebo originÃ¡lnÃ­ obrÃ¡zky');
define('DELETE_TITLE', 'Smazat nadpisy obrÃ¡zkÃ¹');
define('DELETE_ORIGINAL', 'Smazat originÃ¡lnÃ­ obrÃ¡zky');
define('DELETE_REPLACE', 'Smazat originÃ¡ly a nahradit je stÃ¸ednÃ­ verzÃ­ obrÃ¡zkÃ¹');
define('SELECT_ALBUM', 'Vybrat galerii');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?> 