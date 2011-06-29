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
define('BACK', 'ZP�T');
define('CONTINUE', 'POKRA�OVAT');
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
$lang_byte_units = array('Byt�','KB','MB',);

// Day of week
$lang_day_of_week = array('Ne','Po','�t','St','�t','P�','So',);
// Day of the month
$lang_month = array('Leden','�nor','B�ezen','Duben','Kv�ten','�erven','�ervenec','Srpen','Z���','��jen','Listopad','Prosinec',);
// For the word censor
$lang_bad_words = array('p��a','hovno','*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*',);
// lang_meta_album_names
define('RANDOM', 'N�hodn� obr�zky');
define('LASTUP', 'Nejnov�j��');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Naposledy aktualizovan� alba');
define('LASTCOM', 'Nejnov�j�� koment��e');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Nejprohl�en�j��');
define('TOPRATED', 'Nejl�pe hodnocen�');
define('LASTHITS', 'Naposledy zobrazen�');
define('SEARCH', 'V�sledky hled�n�');
define('FAVPICS', 'Obl�ben� obr�zky');

// lang_errors
define('ACCESS_DENIED', 'Nem�te opr�vn�n� na tuto str�nku');
define('PERM_DENIED', 'Nem�te dostate�n� pr�va pro potvrzen� t�to operace.');
define('PARAM_MISSING', 'Skriptu nebyly p�ed�ny pot�ebn� parametry');
define('NON_EXIST_AP', 'Vybran� album/obr�zek neexistuje');
define('QUOTA_EXCEEDED', 'Vy�erpal(a) jste m�sto na disku.<br /><br />Va�e kv�ta je[quota]K, Va�e obr�zky zb�raj� [space]K, p�id�n�m tohoto obr�zku by jste svoji kv�tu p�ekro�il');
define('GD_FILE_TYPE_ERR', 'Pokud pou��v�te GD knihovnu jsou podporov�ny jen obr�zky JPG a PNG');
define('INVALID_IMAGE', 'Tento obr�zek je po�kozen/poru�en GD knihovna s n�m nem��e pracovat.');
define('RESIZE_FAILED', 'Nelze vytvo�it n�hled �i zmen�en� obr�zek');
define('NO_IMG_TO_DISPLAY', 'Zde nen� obr�zek kter� by jste si mohl(a) prohl�dnout');
define('NON_EXIST_CAT', 'Vybran� kategorie neexistuje');
define('ORPHAN_CAT', 'Podkategorie nem� nad��zenou kategorii. Probl�m opravte p�es nastaven� kategori�.');
define('DIRECTORY_RO', 'Do adres��e \'%s\' nelze zapisovat (nedostate�n� pr�va), obr�zky nemohly b�t smaz�ny.');
define('NON_EXIST_COMMENT', 'Vybran� koment�� neexistuje');
define('PIC_IN_INVALID_ALBUM', 'Obr�zek(y) je/jsou v neexituj�c�m albu (%s)!?');
define('BANNED', 'Byl jse vykopnut z t�chto str�nek, nen� V�m umo�n�no je pou��vat.');
define('NOT_WITH_UDB', 'Tato funkce je vypnut� jeliko� je integrov�na ve f�ru. Bu� nen� po�adovan� fukce dostupn� na tomto syst�mu, nebo tuto/tyto funci/e pln� f�rum.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', 'P�ej�t na seznam galeri�');
define('ALB_LIST_LNK', 'Seznam galeri�');
define('MY_GAL_TITLE', 'P�ej�t do m� osobn� galerie');
define('MY_GAL_LNK', 'Moje galerie');
define('MY_PROF_LNK', 'M�j Profil');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Do Admin m�du');
define('ADM_MODE_LNK', 'Admin m�d');
define('USR_MODE_TITLE', 'Do U�ivatelsk�ho m�du');
define('USR_MODE_LNK', 'U�ivatelsk� m�d');
define('UPLOAD_PIC_TITLE', 'Nahr�t obr�zek do gallerie');
define('UPLOAD_PIC_LNK', 'Upload obr�zku');
define('REGISTER_TITLE', 'Vytvo�it ��et');
define('REGISTER_LNK', 'Registrovat se');
define('LOGIN_LNK', 'P�ihl�sit');
define('LOGOUT_LNK', 'Odhl�sit');
define('LASTUP_LNK', 'Nejnov�j�� obr�zky');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Posledn� koment��e');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Nejprohl�en�j��');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Nejl�pe hodnocen�');
define('SEARCH_LNK', 'Vyhled�v�n�');
define('FAV_LNK', 'Obl�ben�');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Potvrzen� uploadu');
define('CONFIG_LNK', 'Nastaven�');
define('ALBUMS_LNK', 'Galerie');
define('CATEGORIES_LNK', 'Kategorie');
define('USERS_LNK', 'U�ivatel�');
define('GROUPS_LNK', 'U�. skupiny');
define('COMMENTS_LNK', 'Koment��e');
define('SEARCHNEW_LNK', 'D�vkov� p�id�n� obr�zk�');
define('UTIL_LNK', 'Zm�nit velikost obr�zk�');
define('BAN_LNK', 'Vykopnout u�ivatele');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Vytvo�it / organizovat moje galerie');
define('MODIFYALB_LNK', 'Zm�nit moje galerie');
define('MY_PROF_LNK', 'M�j profil');

// lang_cat_list
define('CATEGORY', 'Kategorie');
define('ALBUMS', 'Galerie');
define('PICTURES', 'Obr�zky');

// lang_album_list
define('ALBUM_ON_PAGE', '%d Galeri� na %d str�nk�ch');

// lang_thumb_view
define('DATE', 'DATUM');
define('NAME', 'JM�NO SOUBORU');
define('TITLE', 'NADPIS');
define('SORT_DA', '�adit vzestupn� podle data');
define('SORT_DD', '�adit sestupn� podle data');
define('SORT_NA', '�adit vzestupn� podle jm�na');
define('SORT_ND', '�adit sestupn� podle jm�na');
define('SORT_TA', '�adit podle nadpisu vzestupn�');
define('SORT_TD', '�adit podle nadpisu sestupn�');
define('PIC_ON_PAGE', '%d obr�zkk� na %d str�nk�ch');
define('USER_ON_PAGE', '%d u�ivatel� na %d str�nk�ch');
define('SORT_RA', 'Sort by rating ascending');
define('SORT_RD', 'Sort by rating descending');
define('RATING', 'RATING');
define('SORT_TITLE', 'Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Zp�t na str�nku s n�hledy');
define('PIC_INFO_TITLE', 'Zobraz/skryj informace o obr�zku');
define('SLIDESHOW_TITLE', 'Slideshow');
define('SLIDESHOW_DISABLED', 'e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'Poslat tento obr�zek jako pohlednici');
define('ECARD_DISABLED', 'Pohlednice jsou vypnut�');
define('ECARD_DISABLED_MSG', 'Nem�te dostate�n� pr�va pro zasl�n� pohlednice');
define('PREV_TITLE', 'P�edchoz� obr�zek');
define('NEXT_TITLE', 'Dal�� obr�zek');
define('PIC_POS', 'OBR�ZEK %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', 'Hodnotit tento obr�zek ');
define('NO_VOTES', '(��dn� hodnocen�)');
define('RATING', '(Aktualn� hodnocen� : %s / z 5, hlasov�no %s kr�t)');
define('RUBBISH', 'Hnusn�');
define('POOR', 'Mizern�');
define('FAIR', 'Ujde to');
define('GOOD', 'Dobr�');
define('EXCELLENT', 'V�born�');
define('GREAT', 'Dokonal�');

// lang_cpg_die
define('INFORMATION', 'Informace');
define('ERROR', 'Chyba');
define('CRITICAL_ERROR', 'Kritick� chyba');
define('FILE', 'Soubor: ');
define('LINE', '��dka: ');

// lang_display_thumbnails
define('FILENAME', 'Jm�no souboru : ');
define('FILESIZE', 'Velikost souboru : ');
define('DIMENSIONS', 'Rozm�ry : ');
define('DATE_ADDED', 'Datum p�id�n� : ');

// lang_get_pic_data
define('N_COMMENTS', '%s Koment��(�)');
define('N_VIEWS', '%s zobrazen�');
define('N_VOTES', '(%s hlas(�))');

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
define('LV_ADMIN', 'Opou�t�m Admin M�d....:-(');
define('ENT_ADMIN', 'Vstupuji do Admin M�du....:-)');

// lang_albmgr_php
define('ALB_NEED_NAME', 'Galerie mus� m�t jm�no');
define('CONFIRM_MODIFS', 'Ste si jist(a) t�mito zm�nami ?');
define('NO_CHANGE', 'Neud�lal(a) jste ��dn� zm�ny !');
define('NEW_ALBUM', 'Nov� galerie');
define('CONFIRM_DELETE1', 'Jste si jist(a), �e chcete smazat tuto galerii ?');
define('CONFIRM_DELETE2', '\\nV�echny obr�zky a koment��e budou smaz�ny !');
define('SELECT_FIRST', 'Nejprve vyberte galerii');
define('ALB_MRG', 'Spr�vce galeri�');
define('MY_GALLERY', '* Moje galerie *');
define('NO_CATEGORY', '* Nen� kategorie *');
define('DELETE', 'Smazat');
define('NEW', 'Nov�/�');
define('APPLY_MODIFS', 'Potvrdit zm�ny');
define('SELECT_CATEGORY', 'Vybrat kategorii');

// lang_catmgr_php
define('MISS_PARAM', 'Parametry pot�ebn� pro \'%s\'operaci not supplied !');
define('UNKNOWN_CAT', 'Vybran� kategorie v datab�zi neexistuje');
define('USERGAL_CAT_RO', 'Nelze smazat u�ivatelsk� galerie !');
define('MANAGE_CAT', 'Spravovat kategorie');
define('CONFIRM_DELETE', 'Opravdu chcete SMAZAT tuto kategorii');
define('CATEGORY', 'Kategorie');
define('OPERATIONS', 'Operace');
define('MOVE_INTO', 'P�esunout do');
define('UPDATE_CREATE', 'Aktualizovat/Vytvo�it kategorii');
define('PARENT_CAT', 'Nad�azen� kategorie');
define('CAT_TITLE', 'Nadpis kategorie');
define('CAT_DESC', 'Popis kategorie');

// lang_config_php
define('TITLE', 'Nastaven�');
define('RESTORE_CFG', 'Nastavit v�choz�');
define('SAVE_CFG', 'Ulo�it konfiguraci');
define('NOTES', 'Pozn�mky');
define('INFO', 'Informace');
define('UPD_SUCCESS', 'Konfigurace byla zm�n�na');
define('RESTORE_SUCCESS', 'Konfigurace byla nastavena na v�choz� nastaven�');
define('NAME_A', 'Jm�no vzestupn�');
define('NAME_D', 'Jm�no sestupn�');
define('TITLE_A', 'Nadpis vzestupn�');
define('TITLE_D', 'Nadpis sestupn�');
define('DATE_A', 'Datum vzestupn�');
define('DATE_D', 'Datum sestupn�');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Height');
define('TH_WD', 'Width');

// lang_config_data
define('CONFIG_GENSET', 'Z�kladn� nastaven�');
define('GALLERY_NAME', 'Jm�no gallerie');
define('GALLERY_DESCRIPTION', 'Popis Galerie');
define('GALLERY_ADMIN_EMAIL', 'Email administr�tora galerie');
define('ECARDS_MORE_PIC_TARGET', 'Address to nuke folder ie http://www.mysite.tld/html/');
define('LANG', 'Jazyk');
define('CPGTHEME', 'T�m�tko');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'Nastaven� zobrazen�');
define('MAIN_TABLE_WIDTH', '���ka hlavn� tabulky v (pixelech nebo %)');
define('SUBCAT_LEVEL', 'Po�et �rovn� subkategori�');
define('ALBUMS_PER_PAGE', 'Po�et galeri� na str�nku');
define('ALBUM_LIST_COLS', 'Po�et sloupc� v p�ehledu galeri�');
define('ALB_LIST_THUMB_SIZE', 'Velikost n�hled� v pixelech');
define('MAIN_PAGE_LAYOUT', 'Obsah hlavn� str�nky');
define('FIRST_LEVEL', 'Ukazovat v kategori�ch n�hledy galeri� prvn� �rovn�');
define('THUMB_VIEW_TITLE', 'Zobrazen� n�hled�');
define('THUMBCOLS', 'Po�et sloupc� na str�nku');
define('THUMBROWS', 'Po�et ��dk� na str�nku');
define('MAX_TABS', 'Maxim�ln� mno�stv� z�lo�ek');
define('CAPTION_IN_THUMBVIEW', 'Zobrazit legendu obr�zku pod n�hledem');
define('DISPLAY_COMMENT_COUNT', 'Zobrazit po�et koment��� pod n�hldem');
define('DEFAULT_SORT_ORDER', 'Z�kladn� �azen� n�hled�');
define('MIN_VOTES_FOR_RATING', 'Min. po�et hlas� pot�ebn� k za�azen� do seznamu \'Nejl�pe hodnocen�\'');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'Zobrazen� obr�zk� &amp; Nastaven� koment���');
define('PICTURE_TABLE_WIDTH', '���ka tabulky pro zobrazen� obr�zku (v pixelech nebo %)');
define('DISPLAY_PIC_INFO', 'V�dy zobrazit podrobn� info');
define('FILTER_BAD_WORDS', 'CENZUROVAT slova v koment���ch');
define('ENABLE_SMILIES', 'Povilit smajl�ky v koment���ch');
define('DISABLE_FLOOD_PROTECTION', 'Allow several consecutive comments on one pic from the same user');
define('COMMENT_EMAIL_NOTIFICATION', 'Email site admin upon comment submission');
define('MAX_IMG_DESC_LENGTH', 'Maxim�ln� d�lka popisu obr�zku');
define('MAX_COM_WLENGTH', 'Maxim�ln� d�lka slova v koment��i');
define('MAX_COM_LINES', 'Maxim�ln� mno�stv� ��dk� v koment��i');
define('MAX_COM_SIZE', 'Maxim�ln� d�lka koment��e');
define('DISPLAY_FILM_STRIP', 'Uk�zat filmov� prou�ek');
define('MAX_FILM_STRIP_ITEMS', 'Po�et polo�ek ve filmov�m prou�ku');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', 'Obr�zky a nastaven� n�hled�');
define('JPEG_QUAL', 'Kvalita soubor� JPEG');
define('THUMB_WIDTH', 'Maxim�ln� rozm�ry n�hledu <b>*</b>');
define('THUMB_USE', 'Pou��t rozm�r ( ���ka nebo v��ka nebo maxim�ln� rozm�r n�hledu )<b>*</b>');
define('MAKE_INTERMEDIATE', 'Vytvo�it st�edn� obr�zek');
define('PICTURE_WIDTH', 'Maxim�ln� ���ka nebo v��ka st�en�ho obr�zku <b>*</b>');
define('MAX_UPL_SIZE', 'Maxim�ln� velikost uploadovan�ch obr�zk� (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Maxim�ln� rozm�ry uploadovan�ch obr�zk� (v pixelech)');
define('USER_SETTING_TITLE', 'Nastaven� u�ivatel�');
define('ALLOW_USER_REGISTRATION', 'Povolit registraci nov�ch u�ivatel�');
define('REG_REQUIRES_VALID_EMAIL', 'Pro registraci vy�adovat potvrzen� admina');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Povolit pro dva u�ivatele stejn� email');
define('ALLOW_PRIVATE_ALBUMS', 'Maj� m�t u�ivatel� vlastn� galerii?');
define('CUSTOM_FIELDS_TITLE', 'Custom fields for image description (Nechte pr�zn� a nezobraz� se)');
define('USER_FIELD1_NAME', 'Jm�no polo�ky 1');
define('USER_FIELD2_NAME', 'Jm�no polo�ky 2');
define('USER_FIELD3_NAME', 'Jm�no polo�ky 3');
define('USER_FIELD4_NAME', 'Jm�no polo�ky 4');
define('PIC_ADV_SETTING_TITLE', 'Obr�zky a n�hledy roz���en� nastaven�');
define('SHOW_PRIVATE', 'Zobrazit ikonu zamknut� galerie nep�ihl�en�mu u�ivateli.');
define('FORBIDEN_FNAME_CHAR', 'Znaky zak�zan� v n�zvech soubor�');
define('ALLOWED_FILE_EXTENSIONS', 'Povolen� koncovky uploadovan�ch soubor�');
define('THUMB_METHOD', 'Metoda zm�ny velikosti obr�zk�');
define('IMPATH', 'Cesta k ImageMagicu (p��klad /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Povolen� typy obr�zk� (pouze pro ImageMagic)');
define('IM_OPTIONS', 'Parametry pro ImageMagic');
define('READ_EXIF_DATA', '��st EXIF data ze soubor� JPEG');
define('READ_IPTC_DATA', 'Read IPTC data in JPEG files');
define('FULLPATH', 'Adres�� pro galerie <b>*</b>');
define('USERPICS', 'Adres�� pro galerie u�ivatel� <b>*</b>');
define('NORMAL_PFX', 'Prefix pro st�edn� velk� obr�zky <b>*</b>');
define('THUMB_PFX', 'Prefix pro n�hledy <b>*</b>');
define('DEFAULT_DIR_MODE', 'Z�kladn� m�d pro adres��e');
define('DEFAULT_FILE_MODE', 'Z�kladn� m�d pro obr�zky');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', 'Cookies &amp; K�dov� str�ka');
define('COOKIE_NAME', 'Jm�no cookies u��van� programem (expertn� volba)');
define('COOKIE_PATH', 'Cesta pro cookies u��van� programem (expertn� volba)');
define('CHAR_SET', 'K�dov� str�nka');
define('MISC_SETTING_TITLE', 'Dal�� nastaven�');
define('DEBUG_MODE', 'Zapnour debug m�d (jen pro testov�n�)');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) Polo�ky ozna�en� * se NESM� zm�nit pokud ji� m�te ve va�� Galerii nahran� obr�zky</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Vlo�te jm�no a V� koment��');
define('COM_ADDED', 'Koment��u p�id�no');
define('ALB_NEED_TITLE', 'Pros�m, dejte galerii nadpis !');
define('NO_UDP_NEEDED', 'Aktualizace nen� t�eba.');
define('ALB_UPDATED', 'Galerie aktualizov�na');
define('UNKNOWN_ALBUM', 'Vybran� album neexistuje nebo nem�te pr�va pro upload do tohoto alba');
define('NO_PIC_UPLOADED', 'Obr�zek nebyl uploadov�n!<br /><br />zkontrolujte zda server podporuje upload soubor�, �i zda jste opravdu zadal(a) obr�zek k uploadu...');
define('ERR_MKDIR', '  ERROR: Chyba p�i vytv��en� adres��e (nebyl vytvo�en) %s !');
define('DEST_DIR_RO', 'Do c�lov�ho adres��e %s nem��e skript zapisovat (zkontrolujte pr�va) !');
define('ERR_MOVE', 'Nelze p�esunout %s do %s !');
define('ERR_FSIZE_TOO_LARGE', 'Rozm�ry obr�zku, kter� se sna��te uploadovat, jsou p��li� velk� (max. velikost je %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Velikost souboru, kter� se sna��te uploadovat, je p��li� velk� (max. velikost je %s KB) !');
define('ERR_INVALID_IMG', 'Soubor kter� jste nahr�l(a) na server nen� validn�m obr�zkem !');
define('ALLOWED_IMG_TYPES', 'M��ete uploadovat pouze obr�zky %s .');
define('ERR_INSERT_PIC', 'Obr�zek \'%s\' nelze vlo�it do galerie ');
define('UPLOAD_SUCCESS', 'V� obr�zek byl nahr�n na server bez probl�m�<br /><br />Bude viditeln� po schv�len� adminem.');
define('INFO', 'Informace');
define('ERR_COMMENT_EMPTY', 'V� koment�� je pr�zdn� !');
define('ERR_INVALID_FEXT', 'Pouze soubory s n�sleduj�c�mi koncovkami jsou podporovan� : <br /><br />%s.');
define('NO_FLOOD', 'Jste autor posledn�ho koment��e k tomuto obr�zku<br /><br />Pokud ho chcete zm�nit pou�ijte volbu upravit ');
define('REDIRECT_MSG', 'Pr�v� jste p�esm�rov�v�n(a).<br /><br /><br />Klikn�te na \'POKRA�OVAT\' pokud se str�nka nep�esm�ruje sama');
define('UPL_SUCCESS', 'V� obr�zek byl v po��dku p�id�n');

// lang_delete_php
define('CAPTION', 'Legenda(popisek)');
define('FS_PIC', 'p�vodn� velikost obr�zku');
define('DEL_SUCCESS', 'bezchybn� smaz�no');
define('NS_PIC', 'norm�ln� velikost obr�zku');
define('ERR_DEL', 'nelze smazat');
define('THUMB_PIC', 'n�hled');
define('COMMENT', 'koment��');
define('IM_IN_ALB', 'pat�� do galerie');
define('ALB_DEL_SUCCESS', 'Galerie \'%s\' smaz�na');
define('ALB_MGR', 'Spr�vce galeri�');
define('ERR_INVALID_DATA', 'Obdr�ena chybn� data \'%s\'');
define('CREATE_ALB', 'Vytv���m galerii \'%s\'');
define('UPDATE_ALB', 'Aktualizuji galerii \'%s\' s nadpisem \'%s\' a seznamem \'%s\'');
define('DEL_PIC', 'Smazat obr�zek');
define('DEL_ALB', 'Smazat galerii');
define('DEL_USER', 'Smazat u�ivatele');
define('ERR_UNKNOWN_USER', 'Vybran� u�ivatel neexistuje !');
define('COMMENT_DELETED', 'Koment�� bezchybn� smaz�n ! ');

// lang_display_image_php
define('CONFIRM_DEL', 'Jste si jist, �e chcete smazat tento obr�zek ? \\nP�ilo�en� koment��e budou straceny.');
define('DEL_PIC', 'SMAZAT TENTO OBR�ZEK');
define('SIZE', '%s x %s pixelel�');
define('VIEWS', '%s kr�t');
define('SLIDESHOW', 'Slideshow');
define('STOP_SLIDESHOW', 'ZASTAVIT SLIDESHOW');
define('VIEW_FS', 'klikn�te pro zobrazen� p�vodn�ho obr�zku');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('TITLE', 'Informace o obr�zku');
define('FILENAME', 'Jm�no souboru');
define('ALBUM NAME', 'Jm�no galerie');
define('RATING', 'Hodnocen� (%s hlas(�))');
define('KEYWORDS', 'Kl��ov� slova');
define('FILE SIZE', 'Velikost souboru');
define('DIMENSIONS', 'Rozm�ry');
define('DISPLAYED', 'Zobrazeno');
define('CAMERA', 'Fotoapar�t');
define('DATE TAKEN', 'Datum po��zen� sn�mku');
define('APERTURE', 'Clona');
define('EXPOSURE TIME', 'Expozi�n� �as');
define('FOCAL LENGTH', 'Ohniskov� vzd�lenost');
define('COMMENT', 'Koment��e');
define('ADDFAV', 'P�idat k obl�ben�m');
define('ADDFAVPHRASE', 'Obl�ben�');
define('REMFAV', 'Odstranit z obl�ben�ch');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'Upravit tento koment��');
define('CONFIRM_DELETE', 'Jste si jist(a), �e chcete smazat tento koment�� ?');
define('ADD_YOUR_COMMENT', 'P�idat koment��');
define('NAME', 'Jm�no');
define('COMMENT', 'Koment��');
define('YOUR_NAME', 'Anonym');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Kliknut�m na obr�zek zav�ete okno');

// lang_ecard_php
define('TITLE', 'Poslat pohlednici');
define('INVALID_EMAIL', '<b>Varov�n�</b> : neplatn� emailov� adresa !');
define('ECARD_TITLE', 'Pohlednice ze serveru %s pro v�s/tebe');
define('VIEW_ECARD', 'Pokud se pohlednice nezobrazila klikni na link');
define('VIEW_MORE_PICS', 'Klikni pro dal�� obr�zky !');
define('SEND_SUCCESS', 'Va�e pohlednice byla odesl�na');
define('SEND_FAILED', 'Omlouv�me se, ale server nebyl schopen odeslat Va�� pohlednici zkuste
     to znovu za chv�li...');
define('FROM', 'Od');
define('YOUR_NAME', 'Va�e jm�no');
define('YOUR_EMAIL', 'V� email');
define('TO', 'Komu');
define('RCPT_NAME', 'Jm�no p��jemce');
define('RCPT_EMAIL', 'Doru�it na email');
define('GREETINGS', 'Pozdrav/osloven�');
define('MESSAGE', 'Zpr�va');

// lang_editpics_php
define('PIC_INFO', 'Info&nbsp;o obr�zku');
define('ALBUM', 'Galerie');
define('TITLE', 'Nadpis');
define('DESC', 'Popis');
define('KEYWORDS', 'Kl��ov� slova');
define('PIC_INFO_STR', '%sx%s - %sKB - %s zobrazen� - %s hlas(�)');
define('APPROVE', 'Schv�lit obr�zek');
define('POSTPONE_APP', 'Odlo�it schv�len�');
define('DEL_PIC', 'Smazat obr�zek');
define('RESET_VIEW_COUNT', 'Vynulovat po��tadlo zobrazen�');
define('RESET_VOTES', 'Vynulovat hlasy');
define('DEL_COMM', 'Smazat koment��e');
define('UPL_APPROVAL', 'Potvrzen� uploadu');
define('EDIT_PICS', 'Upravit obr�zky');
define('SEE_NEXT', 'Zobrazit dal�� obr�zky');
define('SEE_PREV', 'Zobrazit p�edchoz� obr�zky');
define('N_PIC', '%s obr�zk�');
define('N_OF_PIC_TO_DISP', 'Po�et obr�zku k zobrazen�');
define('APPLY', 'Ulo�it zm�ny');

// lang_groupmgr_php
define('GROUP_NAME', 'Jm�no skupiny');
define('DISK_QUOTA', 'Diskov� kv�ta');
define('CAN_RATE', 'Mohou hodnotit obr�zky');
define('CAN_SEND_ECARDS', 'mohou pos�lat pohlednice');
define('CAN_POST_COM', 'Mohou pos�lat koment��e');
define('CAN_UPLOAD', 'Mohou nahr�vat obr�zky');
define('CAN_HAVE_GALLERY', 'Mohou m�t osobn� galerii');
define('APPLY', 'Ulo�it zm�ny');
define('CREATE_NEW_GROUP', 'Vytvo�it novou skupinu');
define('DEL_GROUPS', 'Smazat vybran� skupiny');
define('CONFIRM_DEL', 'Pokud sma�ete tuto skupinu v�ichni u�ivatel�, pat��c� do t�to skupiny budou p�esunuti do skupiny \'Registered\' !\\n\\nP�ejete si pokra�ovat ?');
define('TITLE', 'Spravovat u�ivatelsk� skupiny');
define('APPROVAL_1', 'Potvrzen� ve�ejn�ho. Upl. (1)');
define('APPROVAL_2', 'Potvrzen� soukrom�ho. Upl. (2)');
define('NOTE1', '<b>(1)</b> Upload do ve�ejn�ch galeri� vy�aduje potvrzen� adminem');
define('NOTE2', '<b>(2)</b> Upload do galerie pat��c� u�ivateli vy�aduje potvrzen� adminem');
define('NOTES', 'Pozn�mky');

// lang_index_php
define('WELCOME', 'Welcome !');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Jste si jist(a), �e chcete smazat tuto galerii? \\nV�echny obr�zky a koment��e p�jdou do pekla taky. P�ejete si pokra�ovat.');
define('DELETE', 'SMAZAT');
define('MODIFY', 'VLASTNOSTI');
define('EDIT_PICS', 'UPRAVIT OBR.');

// lang_list_categories
define('HOME', 'Dom�');
define('STAT1', '<b>[pictures]</b> obr�zky v <b>[albums]</b> glalerii <b>[cat]</b>v kategorii s <b>[comments]</b> koment��i zobrazeno <b>[views]</b> kr�t');
define('STAT2', '<b>[pictures]</b> obr�zky v <b>[albums]</b> galerii zobrazeno <b>[views]</b> kr�t');
define('XX_S_GALLERY', '%s\' Galerie');
define('STAT3', '<b>[pictures]</b> obr�zk� v <b>[albums]</b> galserii s <b>[comments]</b> koment��i zobrazeno <b>[views]</b> kr�t');

// lang_list_users
define('USER_LIST', 'Seznam u�ivatel�');
define('NO_USER_GAL', 'Nejsou ��dn� u�ivatelsk� alerie');
define('N_ALBUMS', '%s galeri�');
define('N_PICS', '%s obr�zk�');

// lang_list_albums
define('N_PICTURES', '%s obr�zk�');
define('LAST_ADDED', ', posledn� p�id�n %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Aktualizovat album %s');
define('GENERAL_SETTINGS', 'Z�kladn� nastaven�');
define('ALB_TITLE', 'Nadpis galerie');
define('ALB_CAT', 'Kategorie galerie');
define('ALB_DESC', 'Popis galerie');
define('ALB_THUMB', 'N�hled reprezentuj�c� album');
define('ALB_PERM', 'P��stupov� pr�va pro tuto galerii');
define('CAN_VIEW', 'Album m��ou prohl�et');
define('CAN_UPLOAD', 'N�v�t�vn�ci sm�j� p�id�vat obr�zky');
define('CAN_POST_COMMENTS', 'Povolit koment��e');
define('CAN_RATE', 'N�v�t�vn�ci mohou hlasovat');
define('USER_GAL', 'User Gallery');
define('NO_CAT', '* Nen� kategorie *');
define('ALB_EMPTY', 'Galerie je pr�zdn�');
define('LAST_UPLOADED', 'Nejnov�j�� obr�zek');
define('PUBLIC_ALB', 'kdokoliv (ve�ejn� galerie)');
define('ME_ONLY', 'Pouze j�');
define('OWNER_ONLY', 'Pouze vlastn�k (%s)');
define('GROUPP_ONLY', '�lenov� skupiny \'%s\'');
define('ERR_NO_ALB_TO_MODIFY', 'Album nelze modifikovat v datab�zi.');
define('UPDATE', 'Aktualizovat album');

// lang_rate_pic_php
define('ALREADY_RATED', 'Tento ob�zek jste ji� hodnotil(a)');
define('RATE_OK', 'V�s hlas byl p�ijat. D�kujeme.');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'Administr�to�i serveru {SITE_NAME}, pota�mo t�to galerie si vyhrazuj� pr�vo z�sahu do obsahu galerie nap�. koment��e, maz�n� obr�zk� p��padn� �prava (pokud poru�uj� pravidla galerie nebo dobr� mravy).
Pokud budou obr�zky nahran� u�ivetelem poru�ovat z�kon(y) budou ihned po zji�t�n� jejich um�st�n� na serveru smaz�ny. Administr�to�i/provozovatel� t�to galerie si distancuj� od
p��padn�ho z�vadn�ho obsahu nahran�ho na server u�ivateli. Vlastn�kem dat v galerii jsou jejich auto�i. Administr�to�i p�edpokl�daj�, �e na server jsou um�s�ovan� u�ivateli pouze obr�zky k n�m� vlastn� u�ivatel autorsk� pr�va.
<br />
Pokud souhlas�te, �e nebudete pos�lat jak�koliv z�vadn� materi�l jako vulg�rn� a obsc�n� obr�zky/koment��e, jak�koliv materi�l vzbuzuj�c� nen�vist, rasismus, nebo jin� materi�l poru�uj�c� z�kony. Souhlas�te, �e administr�to�i, provozovatel� a moder�to�i  {SITE_NAME}   maj� pr�vo smazat p��padn� upravit jak�koliv materi�l kdykoliv to uznaj� za vhodn�. Vlo�en� informace budou ulo�en� na serveru a v datab�zi a nebudou poskytnuty ��dn� t�et� stran� bez va�eho souhlasu. Administ�to�i/povozovatel� serveru  v�ak nejsou ani nebudou ru�it za data na serveru ulo�en� pokud dojde k jak�mukoliv �toku na sever.
<br />
<br />
Tyto str�nky vyu��vaj� k ulo�en� u�ivatelsk�ch dat cookies. Cookies slou�� pouze pro zv��en� konfortu p�i pou��v�n� t�to aplikace. Emailov� adresa slou�� jen pro potvrzen� va�ich �daj� a posl�n� hesla.<br />
<br />
Kliknut�m na \'Souhlas�m\' souhlas�te z v��e uveden�mi pravidly..');

// lang_register_php
define('PAGE_TITLE', 'Registrace nov�ho u�ivatele');
define('TERM_COND', 'Podm�nky a pravidla');
define('I_AGREE', 'Souhlas�m');
define('SUBMIT', 'Poslat registraci');
define('ERR_USER_EXISTS', 'Zadan� u�ivatelsk� jm�no ji� existuje vyberte si pros�m jin�');
define('ERR_PASSWORD_MISMATCH', 'Hesla se mus� schodovat pokuste je ob� zadat znovu');
define('ERR_UNAME_SHORT', 'Minim�ln� d�lka u�ivatelsk�ho jm�na je 2 znaky');
define('ERR_PASSWORD_SHORT', 'Heslo mus� b�t alespo� 2 znaky dlouh�');
define('ERR_UNAME_PASS_DIFF', 'Jm�no a heslo se nesm� shodovat');
define('ERR_INVALID_EMAIL', 'Byla zad�na neplatn� emailov� adresa');
define('ERR_DUPLICATE_EMAIL', 'Jin� u�ivatel se zaregistroval se zadan�m emailem. Email mus� b�t jedine�n�');
define('ENTER_INFO', 'Zadan� registra�n� informace');
define('REQUIRED_INFO', 'Vy�adovan� informace');
define('OPTIONAL_INFO', 'Voliteln� informace');
define('USERNAME', 'Jm�no');
define('PASSWORD', 'Heslo');
define('PASSWORD_AGAIN', 'Heslo (potvrzen�)');
define('EMAIL', 'Email');
define('LOCATION', 'M�sto (nap�. Brno apod.)');
define('INTERESTS', 'Z�jmy');
define('WEBSITE', 'Dom�c� str�nka');
define('OCCUPATION', 'Povol�n�');
define('ERROR', 'CHYBA');
define('CONFIRM_EMAIL_SUBJECT', '%s - Potvrzen� registracce');
define('INFORMATION', 'Informace');
define('FAILED_SENDING_EMAIL', 'Nelze odeslat potvrzen� registace !');
define('THANK_YOU', 'D�kujeme za registraci.<br /><br />Na adresu zadanou p�i registraci V�m budou doru�eny informace o aktivaci va�eho ��tu');
define('ACCT_CREATED', 'V� u�ivatelsk� ��et byl bezchybn� vytvo�en. Nyn� se p�ihla�te pomoc� va�eho jm�na a hesla');
define('ACCT_ACTIVE', 'V� ��et je nyn� aktivn� p�ihla�te se pomoc� va�eho jm�na a hesla.');
define('ACCT_ALREADY_ACT', 'V� ��et je ji� aktivn� !');
define('ACCT_ACT_FAILED', 'Tento ��et nm��e b�t aktivov�n !');
define('ERR_UNK_USER', 'Vybran� u�ivatel neexistuje !');
define('X_S_PROFILE', '%s\' profil');
define('GROUP', 'Skupina');
define('REG_DATE', 'P�ipojen');
define('DISK_USAGE', 'Vyu�it� disku');
define('CHANGE_PASS', 'Zm�nit heslo');
define('CURRENT_PASS', 'Sou�asn� heslo');
define('NEW_PASS', 'Nov� heslo');
define('NEW_PASS_AGAIN', 'Nov� heslo (kontola)');
define('ERR_CURR_PASS', 'Sou�asn� heslo zad�no nespr�vn�');
define('APPLY_MODIF', 'potvrdit zm�ny');
define('UPDATE_SUCCESS', 'V� profil byl aktualizov�n');
define('PASS_CHG_SUCCESS', 'Vy�e heslo bylo zm�n�no');
define('PASS_CHG_ERROR', 'Va�e heslo nebylo zm�n�no');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'D�kujeme za registraci na {SITE_NAME}

Va�e jm�no je : "{USER_NAME}"
Va�e heslo je: "{PASSWORD}"

Pro aktivaci va�eho ��tu je p�eba kliknout na odkaz n�e nebo ho zkop�rovat
do adresn�ho ��dku va�eho browseru a p�ej�t na tuto str�nku


{ACT_LINK}

S Pozdravem,

Spr�va serveru {SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', 'Kontrola koment���');
define('NO_COMMENT', 'Zde nejsou koment��e ke kontrole');
define('N_COMM_DEL', '%s koment��(�) smaz�n(o)');
define('N_COMM_DISP', 'Po�et koment��� k zobrazen�');
define('SEE_PREV', 'P�edchoz�');
define('SEE_NEXT', 'Dal��');
define('DEL_COMM', 'Smazat vybran� koment��e');

// lang_search_php
define('SEARCH', 'Prohled�vat obr�zky');

// lang_search_new_php
define('PAGE_TITLE', 'Naj�t nov� obr�zky');
define('SELECT_DIR', 'Vybrat adres��');
define('SELECT_DIR_MSG', 'Tato funkce v�m umo�n� d�vkov� zpracovat obr�zky nahran� p�es FTP.<br /><br />Vyberte adres�� kde se nach�zej� obr�zky k spracov�n�');
define('NO_PIC_TO_ADD', 'Nejsou zde ��dn� obr�zky k p�id�n�');
define('NEED_ONE_ALBUM', 'Po�ebujete m�t vytvo�enu alespo� jednu galerii');
define('WARNING', 'Varov�n�');
define('CHANGE_PERM', 'Skript nem��e zapisovat do tohoto adres��e, mus�te ho nastavit na CHMOD 755 nebo 777 p�ed p�id�n�m obr�zk� !');
define('TARGET_ALBUM', '<b>Vlo�it obr�zky z &quot;</b>%s<b>&quot; do </b>%s');
define('FOLDER', 'Slo�ka');
define('IMAGE', 'Obr�zek');
define('ALBUM', 'Galerie');
define('RESULT', 'V�sledek');
define('DIR_RO', 'Nezapisovateln�. ');
define('DIR_CANT_READ', 'Ne�iteln�. ');
define('INSERT', 'P�id�v�m nov� obr�zky do galerie');
define('LIST_NEW_PIC', 'Seznam obr�zk�');
define('INSERT_SELECTED', 'Vlo�it vybran� obr�zky');
define('NO_PIC_FOUND', 'Nov� obr�zky nenalezeny');
define('BE_PATIENT', 'Pros�m bu�te trp�liv�(�), program pot�ebuje na zpracov�n� obr�zku n�ja� ten �as.');
define('NOTES', '<ul><li><b>OK</b> : Tyto obr�zky byly p�id�ny<li><b>DP</b> : Zdvojen�!, Tento obr�zek ji existuje<li><b>PB</b> : tento obr�zek nelze p�idat, skontrolujte konfiguraci p��padn� p��stupov� pr�va<li>Kdy� se neuk�e \'ozna�en�\' OK, DP, PB klepn�te na obr�zek a uvid�te chybovou hl�ku generovanou PHP, kter� V�m pom��e zjistit p���inu probl�mu<li>Pokud dojde k timeoutu F5 nebo reload str�nky by m�l pomoci</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('TITLE', 'Uploadnout obr�zek');
define('MAX_FSIZE', 'Max. velikost souboru je %s KB');
define('ALBUM', 'Galerie');
define('PICTURE', 'Obr�zek');
define('PIC_TITLE', 'Nadpis obr�zku');
define('DESCRIPTION', 'Popis obr�zku');
define('KEYWORDS', 'Kl��ov� slova (odd�len� mezerou)');
define('ERR_NO_ALB_UPLOADABLES', 'Zde se nenal�z� galerie do kter� je povolen upload.');

// lang_usermgr_php
define('TITLE', 'Spravovat u�ivatele');
define('NAME_A', 'Jm�no vzestup.');
define('NAME_D', 'Jm�no sestup.');
define('GROUP_A', 'Skupina vzestup.');
define('GROUP_D', 'Skupina sestup.');
define('REG_A', 'Datum registrace vzestup.');
define('REG_D', 'Datum registrace sestup.');
define('PIC_A', 'Po�et obr�zk� vzestup.');
define('PIC_D', 'Po�et obr�zk� sestup.');
define('DISKU_A', 'Vyu�it� disku vzestup.');
define('DISKU_D', 'Vyu�it� disku sestup.');
define('SORT_BY', '�adit u��ivatele podle');
define('ERR_NO_USERS', 'Tabulka u�ivatel� je pr�zdn�!');
define('ERR_EDIT_SELF', 'Zde nelze editovat vlastn� profil pou�ijte p��slu�nou volbu pracuj�c� s va��m profilem');
define('EDIT', 'UPRAVIT');
define('DELETE', 'SMAZAT');
define('NAME', 'U�iv. jm�no');
define('GROUP', 'Skupina U�iv.');
define('INACTIVE', 'Neaktivn�');
define('OPERATIONS', 'Operace');
define('PICTURES', 'Obr�zky');
define('DISK_SPACE', 'M�sto vyu�it� / kv�ta');
define('REGISTERED_ON', 'Registrov�n');
define('U_USER_ON_P_PAGES', '%d u�ivatel� na %d str�nk�ch');
define('CONFIRM_DEL', 'Jste si jist(a), �e chcete smazat tohoto u�ivatele ? \\nV�echny jeho obr�zky, galerie a koment��e budou smaz�ny.');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'Vybran� u�iv. neexistuje !');
define('MODIFY_USER', 'Zm�nit u�iv.');
define('NOTES', 'Pozn�mky');
define('NOTE_LIST', '<li>Pokud nechcete zm�nit heslo ponechte pol��ko pro heslo pr�zdn�');
define('PASSWORD', 'Heslo');
define('USER_ACTIVE', 'U�iv. je aktivn�');
define('USER_GROUP', 'U�iv. Skupina');
define('USER_EMAIL', 'U�iv. emaill');
define('USER_WEB_SITE', 'U�iv. dom�c� str�nka');
define('CREATE_NEW_USER', 'Vytvo�it nov�ho u�ivatle.');
define('USER_LOCATION', 'M�sto U�iv. (nap�. Praha apod.)');
define('USER_INTERESTS', 'U�iv. z�jmy');
define('USER_OCCUPATION', 'U�iv. povol�n�');

// lang_util_php
define('TITLE', 'Zm�nit velikost obr�zku');
define('WHAT_IT_DOES', 'Co to d�l�?');
define('WHAT_UPDATE_TITLES', 'Aktualizovat nadpisy podle jm�na soubor�');
define('WHAT_DELETE_TITLE', 'Smazat nadpisy');
define('WHAT_REBUILD', 'P�ed�lat nahledy a zm�n�n� obr�zky');
define('WHAT_DELETE_ORIGINALS', 'Smazat origin�ly a nahradit je st�edn�mi obr�zky');
define('FILE', 'Soubor');
define('TITLE_SET_TO', 'Nastavit nadpis na');
define('SUBMIT_FORM', 'odeslat');
define('UPDATED_SUCCESFULLY', 'Aktualizace prob�hla OK');
define('ERROR_CREATE', 'CHYBA p�i vytv��en�');
define('CONTINUE', 'Zpracovatv�ce obr�zk�');
define('MAIN_SUCCESS', 'Skoubor %s byl usp�n� pou�it jako hlavn� obr�zek');
define('ERROR_RENAME', 'Chyba p�ejmenov�n� %s na %s');
define('ERROR_NOT_FOUND', 'Soubor %s nebyl nalezen');
define('BACK', 'zp�t na halvn�');
define('THUMBS_WAIT', 'Aktualizuji n�hledy a/nebo st�edn� obr�zky, pros�m �ekejte...');
define('THUMBS_CONTINUE_WAIT', 'Pokra�uji v aktualizaci n�hled� a/nebo st�edn�ch obr�zk�...');
define('TITLES_WAIT', 'Aktualizuji nadpisy, pros�m �ekejte...');
define('DELETE_WAIT', 'Ma�u nadpisy, pros�m �ekejte...');
define('REPLACE_WAIT', 'Ma�u origin�ly a nahrazuji je st�edn�mi obr�zky, pros�m �ekejte...');
define('INSTRUCTION', 'Rychl� instrukce');
define('INSTRUCTION_ACTION', 'Vyberte akci');
define('INSTRUCTION_PARAMETER', 'Nastavit parametry');
define('INSTRUCTION_ALBUM', 'Vybrat galerii');
define('INSTRUCTION_PRESS', 'Stiskn�te %s');
define('UPDATE', 'Aktualizovat n�hledy a/nebo st�edn� obr�zky');
define('UPDATE_WHAT', 'Co m� b�t aktualizov�no');
define('UPDATE_THUMB', 'Jen n�hledy');
define('UPDATE_PIC', 'Pouze st�edn� obr�zky');
define('UPDATE_BOTH', 'Oboj� n�hledy i st�edn� obr�zky');
define('UPDATE_NUMBER', 'Po�et obr�zk�, kter� zpracovat na 1 kliknut�');
define('UPDATE_OPTION', '(Sni�te ��slo pokud m�te probl�my s timeoutem)');
define('FILENAME_TITLE', 'Jm�no souboru ? Nadpis obr�zku');
define('FILENAME_HOW', 'Jak se m� zm�nit jm�no obr�zku?');
define('FILENAME_REMOVE', 'Odstranit .jpg koncovku a p�epsat _ (podtr��tka mezerami)');
define('FILENAME_EURO', 'Zm�nit 2003_11_23_13_20_20.jpg na 23/11/2003 13:20');
define('FILENAME_US', 'Zm�nit 2003_11_23_13_20_20.jpg na 11/23/2003 13:20');
define('FILENAME_TIME', 'Zm�nit 2003_11_23_13_20_20.jpg na 13:20');
define('DELETE', 'Smazat nadpisy obr�zk� nebo origin�ln� obr�zky');
define('DELETE_TITLE', 'Smazat nadpisy obr�zk�');
define('DELETE_ORIGINAL', 'Smazat origin�ln� obr�zky');
define('DELETE_REPLACE', 'Smazat origin�ly a nahradit je st�edn� verz� obr�zk�');
define('SELECT_ALBUM', 'Vybrat galerii');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>