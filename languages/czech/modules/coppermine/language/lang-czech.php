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
/*   $Id: lang-czech.php,v 1.1 2004/07/31 21:13:45 akamu Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Czech');
define('LANG_NAME_NATIVE', '&#x10C;esky');
define('LANG_COUNTRY_CODE', 'cz');
define('TRANS_NAME', 'Michal Soukup aka migon');
define('TRANS_EMAIL', 'migon@boule.cz');
define('TRANS_WEBSITE', 'http://www.boule.cz/');
define('TRANS_DATE', '2003-10-02');

// charset this should be utf-8 or the same as nuke uses windows-1250 for this language
define('CHARSET', 'iso-8859-2');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'Ano');
define('NO', 'Ne');

// some common strings
define('BACK', 'ZPÌT');
define('CONTINUE', 'POKRAÈOVAT');
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
$lang_byte_units = array('Bytù','KB','MB',);

// Day of week
$lang_day_of_week = array('Ne','Po','Út','St','Èt','Pá','So',);
// Day of the month
$lang_month = array('Leden','Únor','Bøezen','Duben','Kvìten','Èerven','Èervenec','Srpen','Záøí','Øíjen','Listopad','Prosinec',);
// For the word censor
$lang_bad_words = array('píèa','hovno','*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*',);
// lang_meta_album_names
define('RANDOM', 'Náhodné obrázky');
define('LASTUP', 'Nejnovìj¹í');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Naposledy aktualizovaná alba');
define('LASTCOM', 'Nejnovìj¹í komentáøe');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Nejprohlí¾enìj¹í');
define('TOPRATED', 'Nejlépe hodnocené');
define('LASTHITS', 'Naposledy zobrazené');
define('SEARCH', 'Výsledky hledání');
define('FAVPICS', 'Oblíbené obrázky');

// lang_errors
define('ACCESS_DENIED', 'Nemáte oprávnìní na tuto stránku');
define('PERM_DENIED', 'Nemáte dostateèná práva pro potvrzení této operace.');
define('PARAM_MISSING', 'Skriptu nebyly pøedány potøebné parametry');
define('NON_EXIST_AP', 'Vybrané album/obrázek neexistuje');
define('QUOTA_EXCEEDED', 'Vyèerpal(a) jste místo na disku.<br /><br />Va¹e kvóta je[quota]K, Va¹e obrázky zbírají [space]K, pøidáním tohoto obrázku by jste svoji kvótu pøekroèil');
define('GD_FILE_TYPE_ERR', 'Pokud pou¾íváte GD knihovnu jsou podporovány jen obrázky JPG a PNG');
define('INVALID_IMAGE', 'Tento obrázek je po¹kozen/poru¹en GD knihovna s ním nemù¾e pracovat.');
define('RESIZE_FAILED', 'Nelze vytvoøit náhled èi zmen¹ený obrázek');
define('NO_IMG_TO_DISPLAY', 'Zde není obrázek který by jste si mohl(a) prohlédnout');
define('NON_EXIST_CAT', 'Vybraná kategorie neexistuje');
define('ORPHAN_CAT', 'Podkategorie nemá nadøízenou kategorii. Problém opravte pøes nastavení kategorií.');
define('DIRECTORY_RO', 'Do adresáøe \'%s\' nelze zapisovat (nedostateèná práva), obrázky nemohly být smazány.');
define('NON_EXIST_COMMENT', 'Vybraný komentáø neexistuje');
define('PIC_IN_INVALID_ALBUM', 'Obrázek(y) je/jsou v neexitujícím albu (%s)!?');
define('BANNED', 'Byl jse vykopnut z tìchto stránek, není Vám umo¾nìno je pou¾ívat.');
define('NOT_WITH_UDB', 'Tato funkce je vypnutá jeliko¾ je integrována ve fóru. Buï není po¾adovaná fukce dostupná na tomto systému, nebo tuto/tyto funci/e plní fórum.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', 'Pøejít na seznam galerií');
define('ALB_LIST_LNK', 'Seznam galerií');
define('MY_GAL_TITLE', 'Pøejít do mé osobní galerie');
define('MY_GAL_LNK', 'Moje galerie');
define('MY_PROF_LNK', 'Mùj Profil');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Do Admin módu');
define('ADM_MODE_LNK', 'Admin mód');
define('USR_MODE_TITLE', 'Do U¾ivatelského módu');
define('USR_MODE_LNK', 'U¾ivatelský mód');
define('UPLOAD_PIC_TITLE', 'Nahrát obrázek do gallerie');
define('UPLOAD_PIC_LNK', 'Upload obrázku');
define('REGISTER_TITLE', 'Vytvoøit úèet');
define('REGISTER_LNK', 'Registrovat se');
define('LOGIN_LNK', 'Pøihlásit');
define('LOGOUT_LNK', 'Odhlásit');
define('LASTUP_LNK', 'Nejnovìj¹í obrázky');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Poslední komentáøe');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Nejprohlí¾enìj¹í');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Nejlépe hodnocené');
define('SEARCH_LNK', 'Vyhledávání');
define('FAV_LNK', 'Oblíbené');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Potvrzení uploadu');
define('CONFIG_LNK', 'Nastavení');
define('ALBUMS_LNK', 'Galerie');
define('CATEGORIES_LNK', 'Kategorie');
define('USERS_LNK', 'U¾ivatelé');
define('GROUPS_LNK', 'U¾. skupiny');
define('COMMENTS_LNK', 'Komentáøe');
define('SEARCHNEW_LNK', 'Dávkové pøidání obrázkù');
define('UTIL_LNK', 'Zmìnit velikost obrázkù');
define('BAN_LNK', 'Vykopnout u¾ivatele');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Vytvoøit / organizovat moje galerie');
define('MODIFYALB_LNK', 'Zmìnit moje galerie');
define('MY_PROF_LNK', 'Mùj profil');

// lang_cat_list
define('CATEGORY', 'Kategorie');
define('ALBUMS', 'Galerie');
define('PICTURES', 'Obrázky');

// lang_album_list
define('ALBUM_ON_PAGE', '%d Galerií na %d stránkách');

// lang_thumb_view
define('DATE', 'DATUM');
define('NAME', 'JMÉNO SOUBORU');
define('TITLE', 'NADPIS');
define('SORT_DA', 'Øadit vzestupnì podle data');
define('SORT_DD', 'Øadit sestupnì podle data');
define('SORT_NA', 'Øadit vzestupnì podle jména');
define('SORT_ND', 'Øadit sestupnì podle jména');
define('SORT_TA', 'Øadit podle nadpisu vzestupnì');
define('SORT_TD', 'Øadit podle nadpisu sestupnì');
define('PIC_ON_PAGE', '%d obrázkkù na %d stránkách');
define('USER_ON_PAGE', '%d u¾ivatelù na %d stránkách');
define('SORT_RA', 'Sort by rating ascending');
define('SORT_RD', 'Sort by rating descending');
define('RATING', 'RATING');
define('SORT_TITLE', 'Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Zpìt na stránku s náhledy');
define('PIC_INFO_TITLE', 'Zobraz/skryj informace o obrázku');
define('SLIDESHOW_TITLE', 'Slideshow');
define('SLIDESHOW_DISABLED', 'e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'Poslat tento obrázek jako pohlednici');
define('ECARD_DISABLED', 'Pohlednice jsou vypnuté');
define('ECARD_DISABLED_MSG', 'Nemáte dostateèná práva pro zaslání pohlednice');
define('PREV_TITLE', 'Pøedchozí obrázek');
define('NEXT_TITLE', 'Dal¹í obrázek');
define('PIC_POS', 'OBRÁZEK %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', 'Hodnotit tento obrázek ');
define('NO_VOTES', '(¾ádné hodnocení)');
define('RATING', '(Aktualní hodnocení : %s / z 5, hlasováno %s krát)');
define('RUBBISH', 'Hnusný');
define('POOR', 'Mizerný');
define('FAIR', 'Ujde to');
define('GOOD', 'Dobrý');
define('EXCELLENT', 'Výborný');
define('GREAT', 'Dokonalý');

// lang_cpg_die
define('INFORMATION', 'Informace');
define('ERROR', 'Chyba');
define('CRITICAL_ERROR', 'Kritická chyba');
define('FILE', 'Soubor: ');
define('LINE', 'Øádka: ');

// lang_display_thumbnails
define('FILENAME', 'Jméno souboru : ');
define('FILESIZE', 'Velikost souboru : ');
define('DIMENSIONS', 'Rozmìry : ');
define('DATE_ADDED', 'Datum pøidání : ');

// lang_get_pic_data
define('N_COMMENTS', '%s Komentáø(ù)');
define('N_VIEWS', '%s zobrazení');
define('N_VOTES', '(%s hlas(ù))');

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
define('LV_ADMIN', 'Opou¹tím Admin Mód....:-(');
define('ENT_ADMIN', 'Vstupuji do Admin Módu....:-)');

// lang_albmgr_php
define('ALB_NEED_NAME', 'Galerie musí mít jméno');
define('CONFIRM_MODIFS', 'Ste si jist(a) tìmito zmìnami ?');
define('NO_CHANGE', 'Neudìlal(a) jste ¾ádné zmìny !');
define('NEW_ALBUM', 'Nová galerie');
define('CONFIRM_DELETE1', 'Jste si jist(a), ¾e chcete smazat tuto galerii ?');
define('CONFIRM_DELETE2', '\\nV¹echny obrázky a komentáøe budou smazány !');
define('SELECT_FIRST', 'Nejprve vyberte galerii');
define('ALB_MRG', 'Správce galerií');
define('MY_GALLERY', '* Moje galerie *');
define('NO_CATEGORY', '* Není kategorie *');
define('DELETE', 'Smazat');
define('NEW', 'Nový/á');
define('APPLY_MODIFS', 'Potvrdit zmìny');
define('SELECT_CATEGORY', 'Vybrat kategorii');

// lang_catmgr_php
define('MISS_PARAM', 'Parametry potøebné pro \'%s\'operaci not supplied !');
define('UNKNOWN_CAT', 'Vybraná kategorie v databázi neexistuje');
define('USERGAL_CAT_RO', 'Nelze smazat u¾ivatelské galerie !');
define('MANAGE_CAT', 'Spravovat kategorie');
define('CONFIRM_DELETE', 'Opravdu chcete SMAZAT tuto kategorii');
define('CATEGORY', 'Kategorie');
define('OPERATIONS', 'Operace');
define('MOVE_INTO', 'Pøesunout do');
define('UPDATE_CREATE', 'Aktualizovat/Vytvoøit kategorii');
define('PARENT_CAT', 'Nadøazená kategorie');
define('CAT_TITLE', 'Nadpis kategorie');
define('CAT_DESC', 'Popis kategorie');

// lang_config_php
define('TITLE', 'Nastavení');
define('RESTORE_CFG', 'Nastavit výchozí');
define('SAVE_CFG', 'Ulo¾it konfiguraci');
define('NOTES', 'Poznámky');
define('INFO', 'Informace');
define('UPD_SUCCESS', 'Konfigurace byla zmìnìna');
define('RESTORE_SUCCESS', 'Konfigurace byla nastavena na výchozí nastavení');
define('NAME_A', 'Jméno vzestupnì');
define('NAME_D', 'Jméno sestupnì');
define('TITLE_A', 'Nadpis vzestupnì');
define('TITLE_D', 'Nadpis sestupnì');
define('DATE_A', 'Datum vzestupnì');
define('DATE_D', 'Datum sestupnì');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Height');
define('TH_WD', 'Width');

// lang_config_data
define('CONFIG_GENSET', 'Základní nastavení');
define('GALLERY_NAME', 'Jméno gallerie');
define('GALLERY_DESCRIPTION', 'Popis Galerie');
define('GALLERY_ADMIN_EMAIL', 'Email administrátora galerie');
define('ECARDS_MORE_PIC_TARGET', 'Address to nuke folder ie http://www.mysite.tld/html/');
define('LANG', 'Jazyk');
define('CPGTHEME', 'Témátko');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'Nastavení zobrazení');
define('MAIN_TABLE_WIDTH', '©íøka hlavní tabulky v (pixelech nebo %)');
define('SUBCAT_LEVEL', 'Poèet úrovní subkategorií');
define('ALBUMS_PER_PAGE', 'Poèet galerií na stránku');
define('ALBUM_LIST_COLS', 'Poèet sloupcù v pøehledu galerií');
define('ALB_LIST_THUMB_SIZE', 'Velikost náhledù v pixelech');
define('MAIN_PAGE_LAYOUT', 'Obsah hlavní stránky');
define('FIRST_LEVEL', 'Ukazovat v kategoriích náhledy galerií první úrovnì');
define('THUMB_VIEW_TITLE', 'Zobrazení náhledù');
define('THUMBCOLS', 'Poèet sloupcù na stránku');
define('THUMBROWS', 'Poèet øádkù na stránku');
define('MAX_TABS', 'Maximální mno¾ství zálo¾ek');
define('CAPTION_IN_THUMBVIEW', 'Zobrazit legendu obrázku pod náhledem');
define('DISPLAY_COMMENT_COUNT', 'Zobrazit poèet komentáøù pod náhldem');
define('DEFAULT_SORT_ORDER', 'Základní øazení náhledù');
define('MIN_VOTES_FOR_RATING', 'Min. poèet hlasù potøebný k zaøazení do seznamu \'Nejlépe hodnocené\'');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'Zobrazení obrázkù &amp; Nastavení komentáøù');
define('PICTURE_TABLE_WIDTH', '©íøka tabulky pro zobrazení obrázku (v pixelech nebo %)');
define('DISPLAY_PIC_INFO', 'V¾dy zobrazit podrobné info');
define('FILTER_BAD_WORDS', 'CENZUROVAT slova v komentáøích');
define('ENABLE_SMILIES', 'Povilit smajlíky v komentáøích');
define('DISABLE_FLOOD_PROTECTION', 'Allow several consecutive comments on one pic from the same user');
define('COMMENT_EMAIL_NOTIFICATION', 'Email site admin upon comment submission');
define('MAX_IMG_DESC_LENGTH', 'Maximální dálka popisu obrázku');
define('MAX_COM_WLENGTH', 'Maximální délka slova v komentáøi');
define('MAX_COM_LINES', 'Maximální mno¾ství øádkù v komentáøi');
define('MAX_COM_SIZE', 'Maximální délka komentáøe');
define('DISPLAY_FILM_STRIP', 'Ukázat filmový prou¾ek');
define('MAX_FILM_STRIP_ITEMS', 'Poèet polo¾ek ve filmovém prou¾ku');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', 'Obrázky a nastavení náhledù');
define('JPEG_QUAL', 'Kvalita souborù JPEG');
define('THUMB_WIDTH', 'Maximální rozmìry náhledu <b>*</b>');
define('THUMB_USE', 'Pou¾ít rozmìr ( ¹íøka nebo vý¹ka nebo maximální rozmìr náhledu )<b>*</b>');
define('MAKE_INTERMEDIATE', 'Vytvoøit støední obrázek');
define('PICTURE_WIDTH', 'Maximální ¹íøka nebo vý¹ka støeního obrázku <b>*</b>');
define('MAX_UPL_SIZE', 'Maximální velikost uploadovaných obrázkù (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Maximální rozmìry uploadovaných obrázkù (v pixelech)');
define('USER_SETTING_TITLE', 'Nastavení u¾ivatelù');
define('ALLOW_USER_REGISTRATION', 'Povolit registraci nových u¾ivatelù');
define('REG_REQUIRES_VALID_EMAIL', 'Pro registraci vy¾adovat potvrzení admina');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Povolit pro dva u¾ivatele stejný email');
define('ALLOW_PRIVATE_ALBUMS', 'Mají mít u¾ivatelé vlastní galerii?');
define('CUSTOM_FIELDS_TITLE', 'Custom fields for image description (Nechte prázné a nezobrazí se)');
define('USER_FIELD1_NAME', 'Jméno polo¾ky 1');
define('USER_FIELD2_NAME', 'Jméno polo¾ky 2');
define('USER_FIELD3_NAME', 'Jméno polo¾ky 3');
define('USER_FIELD4_NAME', 'Jméno polo¾ky 4');
define('PIC_ADV_SETTING_TITLE', 'Obrázky a náhledy roz¹íøené nastavení');
define('SHOW_PRIVATE', 'Zobrazit ikonu zamknuté galerie nepøihlá¹enému u¾ivateli.');
define('FORBIDEN_FNAME_CHAR', 'Znaky zakázané v názvech souborù');
define('ALLOWED_FILE_EXTENSIONS', 'Povolené koncovky uploadovaných souborù');
define('THUMB_METHOD', 'Metoda zmìny velikosti obrázkù');
define('IMPATH', 'Cesta k ImageMagicu (pøíklad /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Povolené typy obrázkù (pouze pro ImageMagic)');
define('IM_OPTIONS', 'Parametry pro ImageMagic');
define('READ_EXIF_DATA', 'Èíst EXIF data ze souborù JPEG');
define('READ_IPTC_DATA', 'Read IPTC data in JPEG files');
define('FULLPATH', 'Adresáø pro galerie <b>*</b>');
define('USERPICS', 'Adresáø pro galerie u¾ivatelù <b>*</b>');
define('NORMAL_PFX', 'Prefix pro støednì velké obrázky <b>*</b>');
define('THUMB_PFX', 'Prefix pro náhledy <b>*</b>');
define('DEFAULT_DIR_MODE', 'Základní mód pro adresáøe');
define('DEFAULT_FILE_MODE', 'Základní mód pro obrázky');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', 'Cookies &amp; Kódová stráka');
define('COOKIE_NAME', 'Jméno cookies u¾ívané programem (expertní volba)');
define('COOKIE_PATH', 'Cesta pro cookies u¾ívaná programem (expertní volba)');
define('CHAR_SET', 'Kódová stránka');
define('MISC_SETTING_TITLE', 'Dal¹í nastavení');
define('DEBUG_MODE', 'Zapnour debug mód (jen pro testování)');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) Polo¾ky oznaèené * se NESMÍ zmìnit pokud ji¾ máte ve va¹í Galerii nahrané obrázky</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Vlo¾te jméno a Vá¹ komentáø');
define('COM_ADDED', 'Komentáøu pøidáno');
define('ALB_NEED_TITLE', 'Prosím, dejte galerii nadpis !');
define('NO_UDP_NEEDED', 'Aktualizace není tøeba.');
define('ALB_UPDATED', 'Galerie aktualizována');
define('UNKNOWN_ALBUM', 'Vybrané album neexistuje nebo nemáte práva pro upload do tohoto alba');
define('NO_PIC_UPLOADED', 'Obrázek nebyl uploadován!<br /><br />zkontrolujte zda server podporuje upload souborù, èi zda jste opravdu zadal(a) obrázek k uploadu...');
define('ERR_MKDIR', '  ERROR: Chyba pøi vytváøení adresáøe (nebyl vytvoøen) %s !');
define('DEST_DIR_RO', 'Do cílového adresáøe %s nemù¾e skript zapisovat (zkontrolujte práva) !');
define('ERR_MOVE', 'Nelze pøesunout %s do %s !');
define('ERR_FSIZE_TOO_LARGE', 'Rozmìry obrázku, který se sna¾íte uploadovat, jsou pøíli¹ velké (max. velikost je %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Velikost souboru, který se sna¾íte uploadovat, je pøíli¹ velká (max. velikost je %s KB) !');
define('ERR_INVALID_IMG', 'Soubor který jste nahrál(a) na server není validním obrázkem !');
define('ALLOWED_IMG_TYPES', 'Mù¾ete uploadovat pouze obrázky %s .');
define('ERR_INSERT_PIC', 'Obrázek \'%s\' nelze vlo¾it do galerie ');
define('UPLOAD_SUCCESS', 'Vá¹ obrázek byl nahrán na server bez problémù<br /><br />Bude viditelný po schválení adminem.');
define('INFO', 'Informace');
define('ERR_COMMENT_EMPTY', 'Vá¹ komentáø je prázdný !');
define('ERR_INVALID_FEXT', 'Pouze soubory s následujícími koncovkami jsou podporované : <br /><br />%s.');
define('NO_FLOOD', 'Jste autor posledního komentáøe k tomuto obrázku<br /><br />Pokud ho chcete zmìnit pou¾ijte volbu upravit ');
define('REDIRECT_MSG', 'Právì jste pøesmìrováván(a).<br /><br /><br />Kliknìte na \'POKRAÈOVAT\' pokud se stránka nepøesmìruje sama');
define('UPL_SUCCESS', 'Vá¹ obrázek byl v poøádku pøidán');

// lang_delete_php
define('CAPTION', 'Legenda(popisek)');
define('FS_PIC', 'pùvodní velikost obrázku');
define('DEL_SUCCESS', 'bezchybnì smazáno');
define('NS_PIC', 'normální velikost obrázku');
define('ERR_DEL', 'nelze smazat');
define('THUMB_PIC', 'náhled');
define('COMMENT', 'komentáø');
define('IM_IN_ALB', 'patøí do galerie');
define('ALB_DEL_SUCCESS', 'Galerie \'%s\' smazána');
define('ALB_MGR', 'Správce galerií');
define('ERR_INVALID_DATA', 'Obdr¾ena chybná data \'%s\'');
define('CREATE_ALB', 'Vytváøím galerii \'%s\'');
define('UPDATE_ALB', 'Aktualizuji galerii \'%s\' s nadpisem \'%s\' a seznamem \'%s\'');
define('DEL_PIC', 'Smazat obrázek');
define('DEL_ALB', 'Smazat galerii');
define('DEL_USER', 'Smazat u¾ivatele');
define('ERR_UNKNOWN_USER', 'Vybraný u¾ivatel neexistuje !');
define('COMMENT_DELETED', 'Komentáø bezchybnì smazán ! ');

// lang_display_image_php
define('CONFIRM_DEL', 'Jste si jist, ¾e chcete smazat tento obrázek ? \\nPøilo¾ené komentáøe budou straceny.');
define('DEL_PIC', 'SMAZAT TENTO OBRÁZEK');
define('SIZE', '%s x %s pixelelù');
define('VIEWS', '%s krát');
define('SLIDESHOW', 'Slideshow');
define('STOP_SLIDESHOW', 'ZASTAVIT SLIDESHOW');
define('VIEW_FS', 'kliknìte pro zobrazení pùvodního obrázku');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('TITLE', 'Informace o obrázku');
define('FILENAME', 'Jméno souboru');
define('ALBUM NAME', 'Jméno galerie');
define('RATING', 'Hodnocení (%s hlas(ù))');
define('KEYWORDS', 'Klíèová slova');
define('FILE SIZE', 'Velikost souboru');
define('DIMENSIONS', 'Rozmìry');
define('DISPLAYED', 'Zobrazeno');
define('CAMERA', 'Fotoaparát');
define('DATE TAKEN', 'Datum poøízení snímku');
define('APERTURE', 'Clona');
define('EXPOSURE TIME', 'Expozièní èas');
define('FOCAL LENGTH', 'Ohnisková vzdálenost');
define('COMMENT', 'Komentáøe');
define('ADDFAV', 'Pøidat k oblíbeným');
define('ADDFAVPHRASE', 'Oblíbené');
define('REMFAV', 'Odstranit z oblíbených');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'Upravit tento komentáø');
define('CONFIRM_DELETE', 'Jste si jist(a), ¾e chcete smazat tento komentáø ?');
define('ADD_YOUR_COMMENT', 'Pøidat komentáø');
define('NAME', 'Jméno');
define('COMMENT', 'Komentáø');
define('YOUR_NAME', 'Anonym');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Kliknutím na obrázek zavøete okno');

// lang_ecard_php
define('TITLE', 'Poslat pohlednici');
define('INVALID_EMAIL', '<b>Varování</b> : neplatná emailová adresa !');
define('ECARD_TITLE', 'Pohlednice ze serveru %s pro vás/tebe');
define('VIEW_ECARD', 'Pokud se pohlednice nezobrazila klikni na link');
define('VIEW_MORE_PICS', 'Klikni pro dal¹í obrázky !');
define('SEND_SUCCESS', 'Va¹e pohlednice byla odeslána');
define('SEND_FAILED', 'Omlouváme se, ale server nebyl schopen odeslat Va¹í pohlednici zkuste
     to znovu za chvíli...');
define('FROM', 'Od');
define('YOUR_NAME', 'Va¹e jméno');
define('YOUR_EMAIL', 'Vá¹ email');
define('TO', 'Komu');
define('RCPT_NAME', 'Jméno pøíjemce');
define('RCPT_EMAIL', 'Doruèit na email');
define('GREETINGS', 'Pozdrav/oslovení');
define('MESSAGE', 'Zpráva');

// lang_editpics_php
define('PIC_INFO', 'Info&nbsp;o obrázku');
define('ALBUM', 'Galerie');
define('TITLE', 'Nadpis');
define('DESC', 'Popis');
define('KEYWORDS', 'Klíèová slova');
define('PIC_INFO_STR', '%sx%s - %sKB - %s zobrazení - %s hlas(ù)');
define('APPROVE', 'Schválit obrázek');
define('POSTPONE_APP', 'Odlo¾it schválení');
define('DEL_PIC', 'Smazat obrázek');
define('RESET_VIEW_COUNT', 'Vynulovat poèítadlo zobrazení');
define('RESET_VOTES', 'Vynulovat hlasy');
define('DEL_COMM', 'Smazat komentáøe');
define('UPL_APPROVAL', 'Potvrzení uploadu');
define('EDIT_PICS', 'Upravit obrázky');
define('SEE_NEXT', 'Zobrazit dal¹í obrázky');
define('SEE_PREV', 'Zobrazit pøedchozí obrázky');
define('N_PIC', '%s obrázkù');
define('N_OF_PIC_TO_DISP', 'Poèet obrázku k zobrazení');
define('APPLY', 'Ulo¾it zmìny');

// lang_groupmgr_php
define('GROUP_NAME', 'Jméno skupiny');
define('DISK_QUOTA', 'Disková kvóta');
define('CAN_RATE', 'Mohou hodnotit obrázky');
define('CAN_SEND_ECARDS', 'mohou posílat pohlednice');
define('CAN_POST_COM', 'Mohou posílat komentáøe');
define('CAN_UPLOAD', 'Mohou nahrávat obrázky');
define('CAN_HAVE_GALLERY', 'Mohou mít osobní galerii');
define('APPLY', 'Ulo¾it zmìny');
define('CREATE_NEW_GROUP', 'Vytvoøit novou skupinu');
define('DEL_GROUPS', 'Smazat vybrané skupiny');
define('CONFIRM_DEL', 'Pokud sma¾ete tuto skupinu v¹ichni u¾ivatelé, patøící do této skupiny budou pøesunuti do skupiny \'Registered\' !\\n\\nPøejete si pokraèovat ?');
define('TITLE', 'Spravovat u¾ivatelské skupiny');
define('APPROVAL_1', 'Potvrzení veøejného. Upl. (1)');
define('APPROVAL_2', 'Potvrzení soukromého. Upl. (2)');
define('NOTE1', '<b>(1)</b> Upload do veøejných galerií vy¾aduje potvrzení adminem');
define('NOTE2', '<b>(2)</b> Upload do galerie patøící u¾ivateli vy¾aduje potvrzení adminem');
define('NOTES', 'Poznámky');

// lang_index_php
define('WELCOME', 'Welcome !');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Jste si jist(a), ¾e chcete smazat tuto galerii? \\nV¹echny obrázky a komentáøe pùjdou do pekla taky. Pøejete si pokraèovat.');
define('DELETE', 'SMAZAT');
define('MODIFY', 'VLASTNOSTI');
define('EDIT_PICS', 'UPRAVIT OBR.');

// lang_list_categories
define('HOME', 'Domù');
define('STAT1', '<b>[pictures]</b> obrázky v <b>[albums]</b> glalerii <b>[cat]</b>v kategorii s <b>[comments]</b> komentáøi zobrazeno <b>[views]</b> krát');
define('STAT2', '<b>[pictures]</b> obrázky v <b>[albums]</b> galerii zobrazeno <b>[views]</b> krát');
define('XX_S_GALLERY', '%s\' Galerie');
define('STAT3', '<b>[pictures]</b> obrázkù v <b>[albums]</b> galserii s <b>[comments]</b> komentáøi zobrazeno <b>[views]</b> krát');

// lang_list_users
define('USER_LIST', 'Seznam u¾ivatelù');
define('NO_USER_GAL', 'Nejsou ¾ádné u¾ivatelské alerie');
define('N_ALBUMS', '%s galerií');
define('N_PICS', '%s obrázkù');

// lang_list_albums
define('N_PICTURES', '%s obrázkù');
define('LAST_ADDED', ', poslední pøidán %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Aktualizovat album %s');
define('GENERAL_SETTINGS', 'Základní nastavení');
define('ALB_TITLE', 'Nadpis galerie');
define('ALB_CAT', 'Kategorie galerie');
define('ALB_DESC', 'Popis galerie');
define('ALB_THUMB', 'Náhled reprezentující album');
define('ALB_PERM', 'Pøístupová práva pro tuto galerii');
define('CAN_VIEW', 'Album mù¾ou prohlí¾et');
define('CAN_UPLOAD', 'Náv¹tìvníci smìjí pøidávat obrázky');
define('CAN_POST_COMMENTS', 'Povolit komentáøe');
define('CAN_RATE', 'Náv¹tìvníci mohou hlasovat');
define('USER_GAL', 'User Gallery');
define('NO_CAT', '* Není kategorie *');
define('ALB_EMPTY', 'Galerie je prázdná');
define('LAST_UPLOADED', 'Nejnovìj¹í obrázek');
define('PUBLIC_ALB', 'kdokoliv (veøejná galerie)');
define('ME_ONLY', 'Pouze já');
define('OWNER_ONLY', 'Pouze vlastník (%s)');
define('GROUPP_ONLY', 'Èlenové skupiny \'%s\'');
define('ERR_NO_ALB_TO_MODIFY', 'Album nelze modifikovat v databázi.');
define('UPDATE', 'Aktualizovat album');

// lang_rate_pic_php
define('ALREADY_RATED', 'Tento obázek jste ji¾ hodnotil(a)');
define('RATE_OK', 'Vás hlas byl pøijat. Dìkujeme.');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'Administrátoøi serveru {SITE_NAME}, pota¾mo této galerie si vyhrazují právo zásahu do obsahu galerie napø. komentáøe, mazání obrázkù pøípadnì úprava (pokud poru¹ují pravidla galerie nebo dobré mravy).
Pokud budou obrázky nahrané u¾ivetelem poru¹ovat zákon(y) budou ihned po zji¹tìní jejich umístìní na serveru smazány. Administrátoøi/provozovatelé této galerie si distancují od
pøípadného závadného obsahu nahraného na server u¾ivateli. Vlastníkem dat v galerii jsou jejich autoøi. Administrátoøi pøedpokládají, ¾e na server jsou umís»ovaná u¾ivateli pouze obrázky k ním¾ vlastní u¾ivatel autorská práva.
<br />
Pokud souhlasíte, ¾e nebudete posílat jakýkoliv závadný materiál jako vulgární a obscéní obrázky/komentáøe, jakýkoliv materiál vzbuzující nenávist, rasismus, nebo jiný materiál poru¹ující zákony. Souhlasíte, ¾e administrátoøi, provozovatelé a moderátoøi  {SITE_NAME}   mají právo smazat pøípadnì upravit jakýkoliv materiál kdykoliv to uznají za vhodné. Vlo¾ené informace budou ulo¾ené na serveru a v databázi a nebudou poskytnuty ¾ádné tøetí stranì bez va¹eho souhlasu. Administátoøi/povozovatelé serveru  v¹ak nejsou ani nebudou ruèit za data na serveru ulo¾ená pokud dojde k jakémukoliv útoku na sever.
<br />
<br />
Tyto stránky vyu¾ívají k ulo¾ení u¾ivatelských dat cookies. Cookies slou¾í pouze pro zvý¹ení konfortu pøi pou¾ívání této aplikace. Emailová adresa slou¾í jen pro potvrzení va¹ich údajù a poslání hesla.<br />
<br />
Kliknutím na \'Souhlasím\' souhlasíte z vý¹e uvedenými pravidly..');

// lang_register_php
define('PAGE_TITLE', 'Registrace nového u¾ivatele');
define('TERM_COND', 'Podmínky a pravidla');
define('I_AGREE', 'Souhlasím');
define('SUBMIT', 'Poslat registraci');
define('ERR_USER_EXISTS', 'Zadané u¾ivatelské jméno ji¾ existuje vyberte si prosím jiné');
define('ERR_PASSWORD_MISMATCH', 'Hesla se musí schodovat pokuste je obì zadat znovu');
define('ERR_UNAME_SHORT', 'Minimální délka u¾ivatelského jména je 2 znaky');
define('ERR_PASSWORD_SHORT', 'Heslo musí být alespoò 2 znaky dlouhé');
define('ERR_UNAME_PASS_DIFF', 'Jméno a heslo se nesmí shodovat');
define('ERR_INVALID_EMAIL', 'Byla zadána neplatná emailová adresa');
define('ERR_DUPLICATE_EMAIL', 'Jiný u¾ivatel se zaregistroval se zadaným emailem. Email musí být jedineèný');
define('ENTER_INFO', 'Zadané registraèní informace');
define('REQUIRED_INFO', 'Vy¾adované informace');
define('OPTIONAL_INFO', 'Volitelné informace');
define('USERNAME', 'Jméno');
define('PASSWORD', 'Heslo');
define('PASSWORD_AGAIN', 'Heslo (potvrzení)');
define('EMAIL', 'Email');
define('LOCATION', 'Místo (napø. Brno apod.)');
define('INTERESTS', 'Zájmy');
define('WEBSITE', 'Domácí stránka');
define('OCCUPATION', 'Povolání');
define('ERROR', 'CHYBA');
define('CONFIRM_EMAIL_SUBJECT', '%s - Potvrzení registracce');
define('INFORMATION', 'Informace');
define('FAILED_SENDING_EMAIL', 'Nelze odeslat potvrzení registace !');
define('THANK_YOU', 'Dìkujeme za registraci.<br /><br />Na adresu zadanou pøi registraci Vám budou doruèeny informace o aktivaci va¹eho úètu');
define('ACCT_CREATED', 'Vá¹ u¾ivatelský úèet byl bezchybnì vytvoøen. Nyní se pøihla¹te pomocí va¹eho jména a hesla');
define('ACCT_ACTIVE', 'Vá¹ úèet je nyní aktivní pøihla¹te se pomocí va¹eho jména a hesla.');
define('ACCT_ALREADY_ACT', 'Vá¹ úèet je ji¾ aktivní !');
define('ACCT_ACT_FAILED', 'Tento úèet nmù¾e být aktivován !');
define('ERR_UNK_USER', 'Vybraný u¾ivatel neexistuje !');
define('X_S_PROFILE', '%s\' profil');
define('GROUP', 'Skupina');
define('REG_DATE', 'Pøipojen');
define('DISK_USAGE', 'Vyu¾ití disku');
define('CHANGE_PASS', 'Zmìnit heslo');
define('CURRENT_PASS', 'Souèasné heslo');
define('NEW_PASS', 'Nové heslo');
define('NEW_PASS_AGAIN', 'Nové heslo (kontola)');
define('ERR_CURR_PASS', 'Souèasné heslo zadáno nesprávnì');
define('APPLY_MODIF', 'potvrdit zmìny');
define('UPDATE_SUCCESS', 'Vá¹ profil byl aktualizován');
define('PASS_CHG_SUCCESS', 'Vy¹e heslo bylo zmìnìno');
define('PASS_CHG_ERROR', 'Va¹e heslo nebylo zmìnìno');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Dìkujeme za registraci na {SITE_NAME}

Va¹e jméno je : "{USER_NAME}"
Va¹e heslo je: "{PASSWORD}"

Pro aktivaci va¹eho úètu je pøeba kliknout na odkaz ní¾e nebo ho zkopírovat
do adresního øádku va¹eho browseru a pøejít na tuto stránku


{ACT_LINK}

S Pozdravem,

Správa serveru {SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', 'Kontrola komentáøù');
define('NO_COMMENT', 'Zde nejsou komentáøe ke kontrole');
define('N_COMM_DEL', '%s komentáø(ù) smazán(o)');
define('N_COMM_DISP', 'Poèet komentáøù k zobrazení');
define('SEE_PREV', 'Pøedchozí');
define('SEE_NEXT', 'Dal¹í');
define('DEL_COMM', 'Smazat vybrané komentáøe');

// lang_search_php
define('SEARCH', 'Prohledávat obrázky');

// lang_search_new_php
define('PAGE_TITLE', 'Najít nové obrázky');
define('SELECT_DIR', 'Vybrat adresáø');
define('SELECT_DIR_MSG', 'Tato funkce vám umo¾ní dávkovì zpracovat obrázky nahrané pøes FTP.<br /><br />Vyberte adresáø kde se nacházejí obrázky k spracování');
define('NO_PIC_TO_ADD', 'Nejsou zde ¾ádné obrázky k pøidání');
define('NEED_ONE_ALBUM', 'Poøebujete mít vytvoøenu alespoò jednu galerii');
define('WARNING', 'Varování');
define('CHANGE_PERM', 'Skript nemù¾e zapisovat do tohoto adresáøe, musíte ho nastavit na CHMOD 755 nebo 777 pøed pøidáním obrázkù !');
define('TARGET_ALBUM', '<b>Vlo¾it obrázky z &quot;</b>%s<b>&quot; do </b>%s');
define('FOLDER', 'Slo¾ka');
define('IMAGE', 'Obrázek');
define('ALBUM', 'Galerie');
define('RESULT', 'Výsledek');
define('DIR_RO', 'Nezapisovatelná. ');
define('DIR_CANT_READ', 'Neèitelná. ');
define('INSERT', 'Pøidávám nové obrázky do galerie');
define('LIST_NEW_PIC', 'Seznam obrázkù');
define('INSERT_SELECTED', 'Vlo¾it vybrané obrázky');
define('NO_PIC_FOUND', 'Nové obrázky nenalezeny');
define('BE_PATIENT', 'Prosím buïte trpìlivý(á), program potøebuje na zpracování obrázku nìjaý ten èas.');
define('NOTES', '<ul><li><b>OK</b> : Tyto obrázky byly pøidány<li><b>DP</b> : Zdvojení!, Tento obrázek ji existuje<li><b>PB</b> : tento obrázek nelze pøidat, skontrolujte konfiguraci pøípadnì pøístupová práva<li>Kdy¾ se neuká¾e \'oznaèení\' OK, DP, PB klepnìte na obrázek a uvidíte chybovou hlá¹ku generovanou PHP, která Vám pomù¾e zjistit pøíèinu problému<li>Pokud dojde k timeoutu F5 nebo reload stránky by mìl pomoci</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('TITLE', 'Uploadnout obrázek');
define('MAX_FSIZE', 'Max. velikost souboru je %s KB');
define('ALBUM', 'Galerie');
define('PICTURE', 'Obrázek');
define('PIC_TITLE', 'Nadpis obrázku');
define('DESCRIPTION', 'Popis obrázku');
define('KEYWORDS', 'Klíèová slova (oddìlená mezerou)');
define('ERR_NO_ALB_UPLOADABLES', 'Zde se nenalézá galerie do které je povolen upload.');

// lang_usermgr_php
define('TITLE', 'Spravovat u¾ivatele');
define('NAME_A', 'Jméno vzestup.');
define('NAME_D', 'Jméno sestup.');
define('GROUP_A', 'Skupina vzestup.');
define('GROUP_D', 'Skupina sestup.');
define('REG_A', 'Datum registrace vzestup.');
define('REG_D', 'Datum registrace sestup.');
define('PIC_A', 'Poèet obrázkù vzestup.');
define('PIC_D', 'Poèet obrázkù sestup.');
define('DISKU_A', 'Vyu¾ití disku vzestup.');
define('DISKU_D', 'Vyu¾ití disku sestup.');
define('SORT_BY', 'Øadit u¾øivatele podle');
define('ERR_NO_USERS', 'Tabulka u¾ivatelù je prázdná!');
define('ERR_EDIT_SELF', 'Zde nelze editovat vlastní profil pou¾ijte pøíslu¹nou volbu pracující s va¹ím profilem');
define('EDIT', 'UPRAVIT');
define('DELETE', 'SMAZAT');
define('NAME', 'U¾iv. jméno');
define('GROUP', 'Skupina U¾iv.');
define('INACTIVE', 'Neaktivní');
define('OPERATIONS', 'Operace');
define('PICTURES', 'Obrázky');
define('DISK_SPACE', 'Místo vyu¾ité / kvóta');
define('REGISTERED_ON', 'Registrován');
define('U_USER_ON_P_PAGES', '%d u¾ivatelù na %d stránkách');
define('CONFIRM_DEL', 'Jste si jist(a), ¾e chcete smazat tohoto u¾ivatele ? \\nV¹echny jeho obrázky, galerie a komentáøe budou smazány.');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'Vybraný u¾iv. neexistuje !');
define('MODIFY_USER', 'Zmìnit u¾iv.');
define('NOTES', 'Poznámky');
define('NOTE_LIST', '<li>Pokud nechcete zmìnit heslo ponechte políèko pro heslo prázdné');
define('PASSWORD', 'Heslo');
define('USER_ACTIVE', 'U¾iv. je aktivní');
define('USER_GROUP', 'U¾iv. Skupina');
define('USER_EMAIL', 'U¾iv. emaill');
define('USER_WEB_SITE', 'U¾iv. domácí stránka');
define('CREATE_NEW_USER', 'Vytvoøit nového u¾ivatle.');
define('USER_LOCATION', 'Místo U¾iv. (napø. Praha apod.)');
define('USER_INTERESTS', 'U¾iv. zájmy');
define('USER_OCCUPATION', 'U¾iv. povolání');

// lang_util_php
define('TITLE', 'Zmìnit velikost obrázku');
define('WHAT_IT_DOES', 'Co to dìlá?');
define('WHAT_UPDATE_TITLES', 'Aktualizovat nadpisy podle jména souborù');
define('WHAT_DELETE_TITLE', 'Smazat nadpisy');
define('WHAT_REBUILD', 'Pøedìlat nahledy a zmìnìné obrázky');
define('WHAT_DELETE_ORIGINALS', 'Smazat originály a nahradit je støedními obrázky');
define('FILE', 'Soubor');
define('TITLE_SET_TO', 'Nastavit nadpis na');
define('SUBMIT_FORM', 'odeslat');
define('UPDATED_SUCCESFULLY', 'Aktualizace probìhla OK');
define('ERROR_CREATE', 'CHYBA pøi vytváøení');
define('CONTINUE', 'Zpracovatvíce obrázkù');
define('MAIN_SUCCESS', 'Skoubor %s byl uspì¹nì pou¾it jako hlavní obrázek');
define('ERROR_RENAME', 'Chyba pøejmenování %s na %s');
define('ERROR_NOT_FOUND', 'Soubor %s nebyl nalezen');
define('BACK', 'zpìt na halvní');
define('THUMBS_WAIT', 'Aktualizuji náhledy a/nebo støední obrázky, prosím èekejte...');
define('THUMBS_CONTINUE_WAIT', 'Pokraèuji v aktualizaci náhledù a/nebo støedních obrázkù...');
define('TITLES_WAIT', 'Aktualizuji nadpisy, prosím èekejte...');
define('DELETE_WAIT', 'Ma¾u nadpisy, prosím èekejte...');
define('REPLACE_WAIT', 'Ma¾u originály a nahrazuji je støedními obrázky, prosím èekejte...');
define('INSTRUCTION', 'Rychlé instrukce');
define('INSTRUCTION_ACTION', 'Vyberte akci');
define('INSTRUCTION_PARAMETER', 'Nastavit parametry');
define('INSTRUCTION_ALBUM', 'Vybrat galerii');
define('INSTRUCTION_PRESS', 'Stisknìte %s');
define('UPDATE', 'Aktualizovat náhledy a/nebo støední obrázky');
define('UPDATE_WHAT', 'Co má být aktualizováno');
define('UPDATE_THUMB', 'Jen náhledy');
define('UPDATE_PIC', 'Pouze støední obrázky');
define('UPDATE_BOTH', 'Obojí náhledy i støední obrázky');
define('UPDATE_NUMBER', 'Poèet obrázkù, které zpracovat na 1 kliknutí');
define('UPDATE_OPTION', '(Sni¾te èíslo pokud máte problémy s timeoutem)');
define('FILENAME_TITLE', 'Jméno souboru ? Nadpis obrázku');
define('FILENAME_HOW', 'Jak se má zmìnit jméno obrázku?');
define('FILENAME_REMOVE', 'Odstranit .jpg koncovku a pøepsat _ (podtr¾ítka mezerami)');
define('FILENAME_EURO', 'Zmìnit 2003_11_23_13_20_20.jpg na 23/11/2003 13:20');
define('FILENAME_US', 'Zmìnit 2003_11_23_13_20_20.jpg na 11/23/2003 13:20');
define('FILENAME_TIME', 'Zmìnit 2003_11_23_13_20_20.jpg na 13:20');
define('DELETE', 'Smazat nadpisy obrázkù nebo originální obrázky');
define('DELETE_TITLE', 'Smazat nadpisy obrázkù');
define('DELETE_ORIGINAL', 'Smazat originální obrázky');
define('DELETE_REPLACE', 'Smazat originály a nahradit je støední verzí obrázkù');
define('SELECT_ALBUM', 'Vybrat galerii');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>