<?php
// lang_translation_info
define('LANG_NAME_ENGLISH', 'Swedish');
define('LANG_NAME_NATIVE', 'Swedish');
define('LANG_COUNTRY_CODE', 'se');
define('TRANS_NAME', 'David Garcia');
define('TRANS_EMAIL', 'lejonturbo@yahoo.se');
define('TRANS_WEBSITE', 'http://www.nope.com/');
define('TRANS_DATE', '2003-10-07');
define('CHARSET', 'iso-8859-1');
define('TEXT_DIR', 'ltr');
define('YES', 'Ja');
define('NO', 'Nej');
define('BACK', 'TILLBAKA');
define('CONTINUE', 'FORTSÄTT');
define('INFO', 'Information');
define('ERROR', 'Fel');
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%m/%d/%y at %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y at %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y at %I:%M %p');
// lang_meta_album_names
define('RANDOM', 'Slumpmässiga bilder');
define('LASTUP', 'Senast inlagda');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Senaste uppdaterade album');
define('LASTCOM', 'Senaste kommentarer');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Mest visade');
define('TOPRATED', 'Topplista');
define('LASTHITS', 'Senast visat');
define('SEARCH', 'Sökresultat');
define('FAVPICS', 'Favoritbilder');

// lang_errors
define('ACCESS_DENIED', 'Du har inte rättigheter till den här sidan.');
define('PERM_DENIED', 'Du har inte tillåtelse att göra den här operationen.');
define('PARAM_MISSING', 'Script called without the required parameter(s).');
define('NON_EXIST_AP', 'Det valda albumet/bilden finns inte !');
define('QUOTA_EXCEEDED', 'Diskkvota övertrasserad<br /><br />Du har en diskkvot på [quota]K, ditt bild är på [space]K, att lägga till den här bilden gör att du övertrasserar diskkvotan.');
define('GD_FILE_TYPE_ERR', 'Vid användande av GD image library, så är endast JPEG- och PNG-format tillåtna.');
define('INVALID_IMAGE', 'Bilden du laddade upp är skadad eller kan inte hanteras av GD library');
define('RESIZE_FAILED', 'Kan inte skapa miniatyrbild eller förändra bildstorleken.');
define('NO_IMG_TO_DISPLAY', 'Ingen bild att visa');
define('NON_EXIST_CAT', 'Den valda kategorin finns inte');
define('ORPHAN_CAT', 'En kategori har en s.k. non-existing parent, kör category manager för att rätta till problemet.');
define('DIRECTORY_RO', 'Biblioteket \'%s\' är inte skrivbart, bildenn kan inte raderas');
define('NON_EXIST_COMMENT', 'Den valda kommentaren finns inte.');
define('PIC_IN_INVALID_ALBUM', 'Bilden är i ett icke existerande album (%s)!?');
define('BANNED', 'Du är för tillfället blockerad från den här siten.');
define('NOT_WITH_UDB', 'Den här funktionen är inaktiverad i Coppermine för att den är integrerad med forumets mjukvara. Vad du än försöker göra så stöds det inte i den här konfigurationen, eller så ska funktionen skötas av forumets mjukvara.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', 'Gå till albumlistan');
define('ALB_LIST_LNK', 'Albumlista');
define('MY_GAL_TITLE', 'Gå till mitt privata galleri');
define('MY_GAL_LNK', 'Mitt galleri');
define('MY_PROF_LNK', 'Min profil');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Växla till adminläge');
define('ADM_MODE_LNK', 'Adminläge');
define('USR_MODE_TITLE', 'Växla till användarläge');
define('USR_MODE_LNK', 'Användarläge');
define('UPLOAD_PIC_TITLE', 'Ladda upp en bild till ett album');
define('UPLOAD_PIC_LNK', 'Ladda upp bild');
define('REGISTER_TITLE', 'Skapa ett konto');
define('REGISTER_LNK', 'Registrera');
define('LOGIN_LNK', 'Logga in');
define('LOGOUT_LNK', 'Logga ut');
define('LASTUP_LNK', 'Senaste uppladdningar');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Senaste kommentarer');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Mest visade');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Topplista');
define('SEARCH_LNK', 'Sök');
define('FAV_LNK', 'Mina Favoriter');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu

define('UPL_APP_LNK', 'Klara för publicering');
define('CONFIG_LNK', 'Konfigurera');
define('ALBUMS_LNK', 'Album');
define('CATEGORIES_LNK', 'Kategorier');
define('USERS_LNK', 'Användare');
define('GROUPS_LNK', 'Grupper');
define('COMMENTS_LNK', 'Kommentarer');
define('SEARCHNEW_LNK', 'Lägg till ett parti av bilder');
define('UTIL_LNK', 'Ändra storlek på bilden');
define('BAN_LNK', 'Blockera användare');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Skapa / sortera mina album');
define('MODIFYALB_LNK', 'Ändra i mina album');
define('MY_PROF_LNK', 'Min profil');

// lang_cat_list
define('CATEGORY', 'Kategori');
define('ALBUMS', 'Album');
define('PICTURES', 'Bilder');

// lang_album_list
define('ALBUM_ON_PAGE', '%d album på %d sida(or)');

// lang_thumb_view
define('DATE', 'DATUM');
define('NAME', 'FILNAMN');
define('TITLE', 'TITEL');
define('SORT_DA', 'Sortera datum stigande');
define('SORT_DD', 'Sortera datum fallande');
define('SORT_NA', 'Sortera namn stigande');
define('SORT_ND', 'Sortera namn fallande');
define('SORT_TA', 'Sortera titel stigande');
define('SORT_TD', 'Sortera titel fallande');
define('PIC_ON_PAGE', '%d bilder på %d sida(or)');
define('USER_ON_PAGE', '%d användare på %d sida(or)');
define('SORT_RA', 'Sort by rating ascending');
define('SORT_RD', 'Sort by rating descending');
define('RATING', 'RATING');
define('SORT_TITLE', 'Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Återvänd till miniatyrbildsida');
define('PIC_INFO_TITLE', 'Visa/dölj bild information');
define('SLIDESHOW_TITLE', 'Bildspel');
define('SLIDESHOW_DISABLED', 'e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'Skicka den här bilden som ett e-vykort');
define('ECARD_DISABLED', 'e-vykort är inaktiverat');
define('ECARD_DISABLED_MSG', 'Du har inte rättigheter att skicka e-vykort');
define('PREV_TITLE', 'Se föregående bild');
define('NEXT_TITLE', 'Se nästa bild');
define('PIC_POS', 'BILD %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', 'Betygsätt den här bilden ');
define('NO_VOTES', '(Ingen röst än)');
define('RATING', '(nuvarande betyg : %s / 5 från %s röster)');
define('RUBBISH', 'Skräp');
define('POOR', 'Kass');
define('FAIR', 'Godkänd');
define('GOOD', 'Bra');
define('EXCELLENT', 'Mycket bra');
define('GREAT', 'Bäst');

// lang_cpg_die
define('INFORMATION', 'Information');
define('ERROR', 'Fel');
define('CRITICAL_ERROR', 'Kritiskt fel');
define('FILE', 'Fil: ');
define('LINE', 'Rad: ');

// lang_display_thumbnails
define('FILENAME', 'Filnamn : ');
define('FILESIZE', 'Filstorlek : ');
define('DIMENSIONS', 'Bildstorlek : ');
define('DATE_ADDED', 'Inlagd den : ');

// lang_get_pic_data
define('N_COMMENTS', '%s kommentarer');
define('N_VIEWS', '%s visade');
define('N_VOTES', '(%s röster)');

// lang_smilies_inc_php
define('EXCLAMATION', 'Exclamation');
define('QUESTION', 'Fråga');
define('VERY HAPPY', 'Mycket glad');
define('SMILE', 'Smil');
define('SAD', 'Ledsen');
define('SURPRISED', 'Överraskad');
define('SHOCKED', 'Kvävd');
define('CONFUSED', 'Förbryllad');
define('COOL', 'Cool');
define('LAUGHING', 'Skrattande');
define('MAD', 'Galen');
define('RAZZ', 'Razz');
define('EMBARASSED', 'Förlägen');
define('CRYING OR VERY SAD', 'Gråter eller Mycket ledsen');
define('EVIL OR VERY MAD', 'Elak eller mycket arg');
define('TWISTED EVIL', 'Twisted Evil');
define('ROLLING EYES', 'Rullande ögon');
define('WINK', 'Blink');
define('IDEA', 'Idé');
define('ARROW', 'Pil');
define('NEUTRAL', 'Neutral');
define('MR. GREEN', 'Mr. Green');

// lang_admin_php
define('LV_ADMIN', 'Lämnar admin läge...');
define('ENT_ADMIN', 'Startar admin läge...');

// lang_albmgr_php
define('ALB_NEED_NAME', 'Album måste namnges!');
define('CONFIRM_MODIFS', 'Är du säker på att du vill göra dessa förändringar?');
define('NO_CHANGE', 'Du gjorde ingen förändring!');
define('NEW_ALBUM', 'Nytt album');
define('CONFIRM_DELETE1', 'Är du säker att du vill radera detta album?');
define('CONFIRM_DELETE2', '\\nAlla bilder och dess kommentarer kommer att förloras!');
define('SELECT_FIRST', 'Välj ett album först');
define('ALB_MRG', 'Album Manager');
define('MY_GALLERY', '* Mitt galleri *');
define('NO_CATEGORY', '* Ingen kategori *');
define('DELETE', 'Radera');
define('NEW', 'Nytt');
define('APPLY_MODIFS', 'Verkställ förändringar');
define('SELECT_CATEGORY', 'Välj kategori');

// lang_catmgr_php
define('MISS_PARAM', 'Parametrar som krävs för \'%s\'operationen stöds inte!');
define('UNKNOWN_CAT', 'Vald kategory finns inte i databasen');
define('USERGAL_CAT_RO', 'Kategorin Användargalleri kan inte raderas!');
define('MANAGE_CAT', 'Inställningar för kategorier');
define('CONFIRM_DELETE', 'Är du säker att du vill RADERA denna kategori');
define('CATEGORY', 'Kategori');
define('OPERATIONS', 'Operationer');
define('MOVE_INTO', 'Flytta till');
define('UPDATE_CREATE', 'Uppdatera/Skapa kategori');
define('PARENT_CAT', 'Huvudkategori');
define('CAT_TITLE', 'Kategorititel');
define('CAT_DESC', 'Kategoribeskrivning');

// lang_config_php
define('TITLE', 'Konfiguration');
define('RESTORE_CFG', 'Återställ systemets grundinställningar');
define('SAVE_CFG', 'Spara ny konfiguration');
define('NOTES', 'Anm.');
define('INFO', 'Information');
define('UPD_SUCCESS', 'Coppermine konfigurationen uppdaterades');
define('RESTORE_SUCCESS', 'Coppermines grundinställning återskapades');
define('NAME_A', 'Namn stigande');
define('NAME_D', 'Namn fallande');
define('TITLE_A', 'Titel stigande');
define('TITLE_D', 'Titel fallande');
define('DATE_A', 'Date stigande');
define('DATE_D', 'Date fallande');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Height');
define('TH_WD', 'Width');

// lang_config_data
define('CONFIG_GENSET', 'Generalla inställningar');
define('GALLERY_NAME', 'Galleri namn');
define('GALLERY_DESCRIPTION', 'Galleri beskrivning');
define('GALLERY_ADMIN_EMAIL', 'Galleri administratör e-post');
define('ECARDS_MORE_PIC_TARGET', 'Address to nuke folder ie http://www.mysite.tld/html/');
define('LANG', 'Språk');
define('CPGTHEME', 'Tema');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'Utseende för albumlista');
define('MAIN_TABLE_WIDTH', 'Bredd på huvudtabell (pixlar eller %)');
define('SUBCAT_LEVEL', 'Antal underkategorier att visa');
define('ALBUMS_PER_PAGE', 'Antal album att visa');
define('ALBUM_LIST_COLS', 'Antal kolumner i album lista');
define('ALB_LIST_THUMB_SIZE', 'Storlek på miniatyrbilder i pixlar');
define('MAIN_PAGE_LAYOUT', 'Innehåll på huvudsidan');
define('FIRST_LEVEL', 'Visa första underkategorins miniatyrbilder i kategorierna');
define('THUMB_VIEW_TITLE', 'Utseende för miniatyrbildsfunktion');
define('THUMBCOLS', 'Antal kolumner på miniatyrbildssida');
define('THUMBROWS', 'Antal rader på miniatyrbildssida');
define('MAX_TABS', 'Max antal flikar att visa');
define('CAPTION_IN_THUMBVIEW', 'Visa bildrubrik (inkl. titel) nedanför miniatyrbild');
define('DISPLAY_COMMENT_COUNT', 'Visa antalet kommentarer under miniatyrbild');
define('DEFAULT_SORT_ORDER', 'Grundinställning för sortering av bilder');
define('MIN_VOTES_FOR_RATING', 'Minimum antal röster för en bild för att det ska synas i \'topplistan\' ');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'Utseende för bilder &amp; inställningar för kommentarer');
define('PICTURE_TABLE_WIDTH', 'Tabellbredd för bildvisning (pixlar eller %)');
define('DISPLAY_PIC_INFO', 'Bildinformation är synlig som grundinställning');
define('FILTER_BAD_WORDS', 'Filtrera fula ord i kommentarer');
define('ENABLE_SMILIES', 'Tillåt smilies i kommentarer');
define('DISABLE_FLOOD_PROTECTION', 'Allow several consecutive comments on one pic from the same user');
define('COMMENT_EMAIL_NOTIFICATION', 'Email site admin upon comment submission');
define('MAX_IMG_DESC_LENGTH', 'Max längd på bildbeskrivning');
define('MAX_COM_WLENGTH', 'Max antal tecken i ett ord');
define('MAX_COM_LINES', 'Max antal på rader i en kommentar');
define('MAX_COM_SIZE', 'Max längd på en kommentar');
define('DISPLAY_FILM_STRIP', 'Visa filmsekvens');
define('MAX_FILM_STRIP_ITEMS', 'Antal objekt i en filmsekvens');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', 'Bild- och miniatyrbildsinställningar');
define('JPEG_QUAL', 'Kvalitet på JPEG filer');
define('THUMB_WIDTH', 'Max dimension på en miniatyrbild <b>*</b>');
define('THUMB_USE', 'Använda dimensioner (bredd eller höjd eller Maxstorlek för miniatyrbild)<b>*</b>');
define('MAKE_INTERMEDIATE', 'Skapa mellanliggande bilder');
define('PICTURE_WIDTH', 'Max bredd eller höjd på en mellanliggande bild <b>*</b>');
define('MAX_UPL_SIZE', 'Max storlek för uppladdade bilder (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Max bredd eller höjd för uppladdade bilder (pixlar)');
define('USER_SETTING_TITLE', 'Användarinställningar');
define('ALLOW_USER_REGISTRATION', 'Tillåt nya användare att registreras');
define('REG_REQUIRES_VALID_EMAIL', 'Användarregistrering kräver e-postverifiering');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Tillåt två användare att ha samma e-postadress');
define('ALLOW_PRIVATE_ALBUMS', 'Användare kan ha privata album');
define('CUSTOM_FIELDS_TITLE', 'Valfria fält för bildbeskrivningar (lämna blankt om du inte vill använda funktionen)');
define('USER_FIELD1_NAME', 'Fält 1 namn');
define('USER_FIELD2_NAME', 'Fält 2 namn');
define('USER_FIELD3_NAME', 'Fält 3 namn');
define('USER_FIELD4_NAME', 'Fält 4 namn');
define('PIC_ADV_SETTING_TITLE', 'Avancerade inställningar för bilder och miniatyrbilder');
define('SHOW_PRIVATE', 'Visa ikon för privata album för ej inloggade användare');
define('FORBIDEN_FNAME_CHAR', 'Förbjudna tecken i filnamn');
define('ALLOWED_FILE_EXTENSIONS', 'Accepterade filändelser för uppladdade bilder');
define('THUMB_METHOD', 'Metod för ändra bildstorleksförändring');
define('IMPATH', 'Sökväk till ImageMagick \'konverterings\' funktion (exempel /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Tillåtna bildformat (gäller endast för ImageMagick)');
define('IM_OPTIONS', 'Kommandolinjeval för ImageMagick');
define('READ_EXIF_DATA', 'Läs EXIF data i JPEG filer');
define('READ_IPTC_DATA', 'Läs IPTC data i JPEG filer');
define('FULLPATH', 'Albumbibliotek <b>*</b>');
define('USERPICS', 'Bibliotek för användarnas bilder <b>*</b>');
define('NORMAL_PFX', 'Prefix för mellanliggande bilder <b>*</b>');
define('THUMB_PFX', 'Prefix för miniatyrbilder <b>*</b>');
define('DEFAULT_DIR_MODE', 'Standardläge för bibliotek');
define('DEFAULT_FILE_MODE', 'Standardläge för bilder');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', 'Inställningar för cookies &amp; teckenkodning');
define('COOKIE_NAME', 'Namn på cookie som scriptet använder sig av');
define('COOKIE_PATH', 'Sökväg till cookie som scriptet använder sig av');
define('CHAR_SET', 'Teckenkodning');
define('MISC_SETTING_TITLE', 'Övriga inställningar');
define('DEBUG_MODE', 'Aktivera debug mode');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) Fält märkta med * får INTE ändras om du redan har bilder i ditt galleri</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Du måste skriva ditt namn och en kommentar');
define('COM_ADDED', 'Kommentar inlagd');
define('ALB_NEED_TITLE', 'Du måste ge albumet en titel!');
define('NO_UDP_NEEDED', 'Ingen uppdatering behövs.');
define('ALB_UPDATED', 'Album updaterat');
define('UNKNOWN_ALBUM', 'Valt album existerar inte eller så har du inte rättigheter att ladda upp i detta album');
define('NO_PIC_UPLOADED', 'Ingen bild laddades upp!<br /><br />Om du är säker på att du valt en bild för uppladdning, kontrollera att servern tillåter uppladdning...');
define('ERR_MKDIR', 'Misslyckades att skapa biblioteket %s !');
define('DEST_DIR_RO', 'Målbiblioteket %s är inte skrivbart av scriptet!');
define('ERR_MOVE', 'Omöjligt att flytta %s till %s !');
define('ERR_FSIZE_TOO_LARGE', 'Bildstorleken du laddat upp är för stor (max tillåtet är %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Storleken på filen du laddat upp är för stor (max tillåtet är %s KB) !');
define('ERR_INVALID_IMG', 'Filen du laddat upp är inte i tillåtet format!');
define('ALLOWED_IMG_TYPES', 'Du kan bara ladda upp %s bilder.');
define('ERR_INSERT_PIC', 'Bilden \'%s\' kan inte infogas i albumet ');
define('UPLOAD_SUCCESS', 'Din bild laddades upp utan problem<br /><br />Den kommer att bli synlig efter att admin godkänt den.');
define('INFO', 'Information');
define('ERR_COMMENT_EMPTY', 'Din kommentar är tom!');
define('ERR_INVALID_FEXT', 'Endast filer med följande ändelser är tillåtna: <br /><br />%s.');
define('NO_FLOOD', 'Ledsen men du är redan författare av den senaste kommentaren som är inlagd för den här bilden<br /><br />Ändra den redan inlagda kommentaren om du vill ämdra något');
define('REDIRECT_MSG', 'Du förflyttas.<br /><br /><br /Klicka \'FORTSÄTT\' om inte sidan uppdateras automatiskt');
define('UPL_SUCCESS', 'Din bild infogades utan problem.');

// lang_delete_php
define('CAPTION', 'Rubrik');
define('FS_PIC', 'full storlek på bild');
define('DEL_SUCCESS', 'Radering lyckades');
define('NS_PIC', 'normal storlek på bild');
define('ERR_DEL', 'kan inte raderas');
define('THUMB_PIC', 'miniatyrbild');
define('COMMENT', 'kommentar');
define('IM_IN_ALB', 'bild i album');
define('ALB_DEL_SUCCESS', 'Album \'%s\' raderades');
define('ALB_MGR', 'Album Manager');
define('ERR_INVALID_DATA', 'Ogiltig data mottogs i \'%s\'');
define('CREATE_ALB', 'Skapar album \'%s\'');
define('UPDATE_ALB', 'Uppdaterar album \'%s\' med titeln \'%s\' och index \'%s\'');
define('DEL_PIC', 'Radera bild');
define('DEL_ALB', 'Radera album');
define('DEL_USER', 'Radera användare');
define('ERR_UNKNOWN_USER', 'Vald användare finns inte!');
define('COMMENT_DELETED', 'Kommentaren raderades utan problem');

// lang_display_image_php
define('CONFIRM_DEL', 'Är du säker på att du vill RADERA denna bild? \\nComments will also be deleted.');
define('DEL_PIC', 'RADERA DENNA BILD');
define('SIZE', '%s x %s pixlar');
define('VIEWS', '%s gånger');
define('SLIDESHOW', 'Bildspel');
define('STOP_SLIDESHOW', 'STOPPA BILDSPEL');
define('VIEW_FS', 'Klicka för att se fullstorlek på bilden');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('TITLE', 'Bildinformation');
define('FILENAME', 'Filnamn');
define('ALBUM NAME', 'Albumnamn');
define('RATING', 'Betyg (%s röster)');
define('KEYWORDS', 'Nyckelords');
define('FILE SIZE', 'Filstorlek');
define('DIMENSIONS', 'Dimensioner');
define('DISPLAYED', 'Visat');
define('CAMERA', 'Kamera');
define('DATE TAKEN', 'Datum för fototillfälle');
define('APERTURE', 'Slutare');
define('EXPOSURE TIME', 'Exponeringstid');
define('FOCAL LENGTH', 'Focallängd');
define('COMMENT', 'Kommentar');
define('ADDFAV', 'Lägg till Fav');
define('ADDFAVPHRASE', 'Favoriter');
define('REMFAV', 'Ta bort från Fav');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'Redigera denna kommentar');
define('CONFIRM_DELETE', 'Är du säker på att du vill radera denna kommentar?');
define('ADD_YOUR_COMMENT', 'Lägg till din kommentar');
define('NAME', 'Namn');
define('COMMENT', 'Kommentar');
define('YOUR_NAME', 'Anonym');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Klicka på bilden för att stänga det här fönstret');

// lang_ecard_php
define('TITLE', 'Skicka ett e-vykort');
define('INVALID_EMAIL', '<b>Varning</b> : felaktig e-postadress !');
define('ECARD_TITLE', 'Ett e-vykort från %s till dig!');
define('VIEW_ECARD', 'Klicka på den här länken om inte e-vykortet visas riktigt');
define('VIEW_MORE_PICS', 'Klicka på den här länken för att se fler bilder!');
define('SEND_SUCCESS', 'Ditt e-vykort skickades');
define('SEND_FAILED', 'Ledsen men servern kan inte skicka ditt e-vykort...');
define('FROM', 'Från');
define('YOUR_NAME', 'Ditt namn');
define('YOUR_EMAIL', 'Din e-postadress');
define('TO', 'Till');
define('RCPT_NAME', 'Mottagarens namn');
define('RCPT_EMAIL', 'Mottagarens e-postadress');
define('GREETINGS', 'Hej!');
define('MESSAGE', 'Meddelande');

// lang_editpics_php
define('PIC_INFO', 'Bild&nbsp;info');
define('ALBUM', 'Album');
define('TITLE', 'Titel');
define('DESC', 'Beskrivning');
define('KEYWORDS', 'Nyckelord');
define('PIC_INFO_STR', '%sx%s - %sKB - %s visningar - %s röster');
define('APPROVE', 'Godkänn bild');
define('POSTPONE_APP', 'Senarelägg godkännande');
define('DEL_PIC', 'Radera bild');
define('RESET_VIEW_COUNT', 'Nollställ räknare för bildbesökare');
define('RESET_VOTES', 'Nollställ röster');
define('DEL_COMM', 'Radera kommentarer');
define('UPL_APPROVAL', 'Godkännande för uppladdning');
define('EDIT_PICS', 'Redigera bilder');
define('SEE_NEXT', 'Se kommande bild');
define('SEE_PREV', 'Se föregående bilder');
define('N_PIC', '%s bilder');
define('N_OF_PIC_TO_DISP', 'Antal bilder att visa');
define('APPLY', 'Verkställ förändringar');

// lang_groupmgr_php
define('GROUP_NAME', 'Grupp namn');
define('DISK_QUOTA', 'Diskkvot');
define('CAN_RATE', 'Kan betygsätta bilder');
define('CAN_SEND_ECARDS', 'Kan skicka e-vykort');
define('CAN_POST_COM', 'Kan skriva kommentarer');
define('CAN_UPLOAD', 'Kan ladda upp bilder');
define('CAN_HAVE_GALLERY', 'Kan ha ett personligt galleri');
define('APPLY', 'Verkställ förändringar');
define('CREATE_NEW_GROUP', 'Skapa ny grupp');
define('DEL_GROUPS', 'Radera vald grupp(er)');
define('CONFIRM_DEL', 'Varning, när du raderar en grupp kommer användare i den gruppen att flyttas till gruppen \'Registrerad\' !\\n\\nVill du fortsätta ?');
define('TITLE', 'Behandla användargrupper');
define('APPROVAL_1', 'Pub. Uppl. godkännande (1)');
define('APPROVAL_2', 'Priv. Uppl. godkännande (2)');
define('NOTE1', '<b>(1)</b> Uppladdningar i ett publikt album kräver godkännande från admin');
define('NOTE2', '<b>(2)</b> Uppladdningar i ett album som tillhör användare kräver godkännande från admin');
define('NOTES', 'Anteckningar');

// lang_index_php
define('WELCOME', 'Välkommen!');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Är du säker att du vill RADERA detta album? \\nAlla bilder och kommentarer kommer även att radaras.');
define('DELETE', 'RADERA');
define('MODIFY', 'EGENSKAPER');
define('EDIT_PICS', 'REDIGERA BILDER');

// lang_list_categories
define('HOME', 'Hem');
define('STAT1', '<b>[pictures]</b> bilder i <b>[albums]</b> album och <b>[cat]</b> kategorier med <b>[comments]</b> kommentarer visade <b>[views]</b> gånger');
define('STAT2', '<b>[pictures]</b> bilder i <b>[albums]</b> album visade <b>[views]</b> gånger');
define('XX_S_GALLERY', '%s\'s Galleri');
define('STAT3', '<b>[pictures]</b> bilder i <b>[albums]</b> album med <b>[comments]</b> kommentarer visade <b>[views]</b> gånger');

// lang_list_users
define('USER_LIST', 'Användarlista');
define('NO_USER_GAL', 'Det finns inga användargallerier');
define('N_ALBUMS', '%s album');
define('N_PICS', '%s bild(er)');

// lang_list_albums
define('N_PICTURES', '%s bilder');
define('LAST_ADDED', ', senaste inlagd den %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Uppdatera album %s');
define('GENERAL_SETTINGS', 'Generella inställningar');
define('ALB_TITLE', 'Album titel');
define('ALB_CAT', 'Album kategori');
define('ALB_DESC', 'Album beskrivning');
define('ALB_THUMB', 'Album miniatyrbild');
define('ALB_PERM', 'Rättigheter för detta album');
define('CAN_VIEW', 'Album kan ses av');
define('CAN_UPLOAD', 'Besökare kan ladda upp bilder');
define('CAN_POST_COMMENTS', 'Besökare kan kommentera');
define('CAN_RATE', 'Besökare kan betygsätta bilder');
define('USER_GAL', 'Användargalleri');
define('NO_CAT', '* Ingen kategori *');
define('ALB_EMPTY', 'Album är tomt');
define('LAST_UPLOADED', 'Senast uppladdat');
define('PUBLIC_ALB', 'Alla (publikt album)');
define('ME_ONLY', 'Endast jag');
define('OWNER_ONLY', 'Endast albumägare (%s)');
define('GROUPP_ONLY', 'Medlemmar av gruppen \'%s\'');
define('ERR_NO_ALB_TO_MODIFY', 'Inget album att redigera i databasen.');
define('UPDATE', 'Uppdatera album');

// lang_rate_pic_php
define('ALREADY_RATED', 'Ledsen men du har redan betygsatt den här bilden');
define('RATE_OK', 'Din röst är registrerad');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'Fastän administratörer på den här siten (SITE_NAME) försöker att ta bort eller ändra allt störande eller stötande material så fort som möjligt, är det omöjligt att gå igenom alla meddelanden. Vi vill därför meddela dig om att alla inlägg som skrivits på de här forumet uttrycker vad författaren tänker och tycker, och administratörer inte skall stå till ansvar för det (förutom för det de själva lagt in).<br />
<br />
Du går med på att inte posta något störande, stötande, rasistiskt, sexistiskt, vulgärt, hatiskt, hotande eller något annat material som kan tänkas bryta mot någon tillämplig lag. Om du bryter mot det här kan det leda till att du blir permanent avstängd från forumen (och din Internet leverantör blir kontaktad). Ip adressen av alla meddelanden sparas för att stärka de här vilkoren. Du går med på att webmaster, administratör och moderatorer har rätt att ta bort, ändra, flytta eller stänga vilka inlägg som helst när som helst. Som en användare går du med på att all information som du skrivit in sparas i databasen. Den informationen kommer INTE att distribueras till någon 3:e part utan ditt samtycke. Webmastern, administratören eller moderatorer kan inte hållas ansvariga vid hackningsförsök som kan leda till att data stjäls. <br />
<br />
Det här systemet använder cookies till att spara information på din dator. Dessa cookies innehåller inte något av den information du skrivit in, utan används endast för att göra ditt användande av forumet bättre och smidigare. E-post adressen används bara för att aktivera din registrering, samt för omregistrering vid t.ex. byte av din e-post adress.<br />
<br />
Genom att klicka på knappen "Ja" nedan godkänner du ovan vilkor.
');

// lang_register_php
define('PAGE_TITLE', 'Användarregistrering');
define('TERM_COND', 'Användarvillkor');
define('I_AGREE', 'Jag godkänner');
define('SUBMIT', 'Skicka registrering');
define('ERR_USER_EXISTS', 'Användarnamnet du skrev in finns redan, vänligen väl ett nytt');
define('ERR_PASSWORD_MISMATCH', 'Lösenorden stämmer inte med varandra, vänligen skriv in dem igen');
define('ERR_UNAME_SHORT', 'Användarnamnet måste vara minst 2 tecken långt');
define('ERR_PASSWORD_SHORT', 'Lösenordet måste vara minst 2 tecken långt');
define('ERR_UNAME_PASS_DIFF', 'Användarnamn och lösenord får inte vara olika');
define('ERR_INVALID_EMAIL', 'E-postadressen är ogiltig');
define('ERR_DUPLICATE_EMAIL', 'En annan användare har redan registrerat den e-postadress du skrev');
define('ENTER_INFO', 'Fyll i registreringsinformation');
define('REQUIRED_INFO', 'Obligatorisk information');
define('OPTIONAL_INFO', 'Valfri information');
define('USERNAME', 'Användarnamn');
define('PASSWORD', 'Lösenord');
define('PASSWORD_AGAIN', 'Skriv lösenordet igen');
define('EMAIL', 'E-post');
define('LOCATION', 'Plats');
define('INTERESTS', 'Intressen');
define('WEBSITE', 'Hemsida');
define('OCCUPATION', 'Yrke');
define('ERROR', 'FEL');
define('CONFIRM_EMAIL_SUBJECT', '%s - Registreringsinformation');
define('INFORMATION', 'Information');
define('FAILED_SENDING_EMAIL', 'Registreringsinformationen kan inte skickas!');
define('THANK_YOU', 'Tack för din registrering.<br /><br />Ett e-postmeddelande med information om hur du ska aktivera ditt konto skickades till den e-postadress du angav.');
define('ACCT_CREATED', 'Ditt konto har skapats och du kan nu logga in med ditt användarnamn och lösenord');
define('ACCT_ACTIVE', 'Ditt konto är nu aktivt och du kan nu logga in med ditt användarnamn och lösenord');
define('ACCT_ALREADY_ACT', 'Ditt konto är redan aktiverat!');
define('ACCT_ACT_FAILED', 'Detta konto kan inte aktiveras!');
define('ERR_UNK_USER', 'Vald användare finns inte!');
define('X_S_PROFILE', '%s\'s profil');
define('GROUP', 'Grupp');
define('REG_DATE', 'Blev medlem');
define('DISK_USAGE', 'Diskanvändning');
define('CHANGE_PASS', 'Ändra mitt lösenord');
define('CURRENT_PASS', 'Nuvarande lösenord');
define('NEW_PASS', 'Nytt lösenord');
define('NEW_PASS_AGAIN', 'Nytt lösenord igen');
define('ERR_CURR_PASS', 'Detta lösenord är inte korrekt');
define('APPLY_MODIF', 'Verkställ ändringar');
define('UPDATE_SUCCESS', 'Din profil uppdaterades');
define('PASS_CHG_SUCCESS', 'Ditt lösenord ändrades');
define('PASS_CHG_ERROR', 'Ditt lösenord ändrades inte');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Tack för att du registrerade dig på {SITE_NAME}

Ditt användarnamn är : "{USER_NAME}"
Ditt lösenord är : "{PASSWORD}"

För att ditt konto ska aktiveras måste du klicka på nedanstående link
eller copy och klistra in den i din browser.

{ACT_LINK}

Vänligen,

Administratören av {SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', 'Granska kommentarer');
define('NO_COMMENT', 'Det finns ingen kommentar att granska');
define('N_COMM_DEL', '%s kommentar(er) raderade');
define('N_COMM_DISP', 'Antal kommentarer att visa');
define('SEE_PREV', 'Se föregående');
define('SEE_NEXT', 'Se nästa');
define('DEL_COMM', 'Radera valda kommentarer');

// lang_search_php
define('SEARCH', 'Sök i bildkollektionen');

// lang_search_new_php
define('PAGE_TITLE', 'Sök efter nya bilder');
define('SELECT_DIR', 'Välj bibliotek');
define('SELECT_DIR_MSG', 'Den här funktionen gör det möjligt att lägga till ett parti med foton som du laddat upp på servern via FTP.<br /><br />Välj biblioteket där bilderna finns.');
define('NO_PIC_TO_ADD', 'Det finns ingen bild att lägga till');
define('NEED_ONE_ALBUM', 'Du måste minst ha ett album för att kunna använda denna funktion');
define('WARNING', 'Varning');
define('CHANGE_PERM', 'scriptet kan inte skriva i detta bibliotek, du måste ändra rättigheterna i det till 755 eller 777 innan du kan lägga till bilder!');
define('TARGET_ALBUM', '<b>Lägg bilderna &quot;</b>%s<b>&quot; i </b>%s');
define('FOLDER', 'Mapp');
define('IMAGE', 'Bild');
define('ALBUM', 'Album');
define('RESULT', 'Resultar');
define('DIR_RO', 'Inte skrivbart. ');
define('DIR_CANT_READ', 'Inte läsbart. ');
define('INSERT', 'Lägger till nya bilder i galleriet');
define('LIST_NEW_PIC', 'Förteckning på nya bilder');
define('INSERT_SELECTED', 'Sätt in valda bilder');
define('NO_PIC_FOUND', 'Ingen ny bild hittades');
define('BE_PATIENT', 'Ha tålamod, scriptet behöver lite tid att bearbeta bilderna');
define('NOTES', '<ul><li><b>OK</b> : betyder att bilden blev inlagd<li><b>DP</b> : betyder att bilden är en kopia och redan finns i databasen<li><b>PB</b> : betyder att bilden inte kunde läggas till, kontrollera din konfiguration och rättigheterna i biblioteken där bilderna ska placeras<li>Om OK, DP, PB \'symbolen\' inte visas, klicka på den felaktiga bilden för att se felmeddelandet som skapats av PHP<li>Om din din browser gör timeout, tryck på knappen \'Uppdatera\'</ul>');

// lang_upload_php
define('TITLE', 'Ladda upp bild');
define('MAX_FSIZE', 'Max filstorlek är %s KB');
define('ALBUM', 'Album');
define('PICTURE', 'Bild');
define('PIC_TITLE', 'Bildtitel');
define('DESCRIPTION', 'Bildbeskrivning');
define('KEYWORDS', 'Nyckelord (avskiljda med mellanslag)');
define('ERR_NO_ALB_UPLOADABLES', 'Ledsen, men det finns inget album där du har tillåtelse att ladda upp bilder i');

// lang_usermgr_php
define('TITLE', 'Användarinställningar');
define('NAME_A', 'Namn stigande');
define('NAME_D', 'Namn fallande');
define('GROUP_A', 'Grupp stigande');
define('GROUP_D', 'Grupp fallande');
define('REG_A', 'Reg datum stigande');
define('REG_D', 'Reg datum fallande');
define('PIC_A', 'Bildräknare stigande');
define('PIC_D', 'Bildräknare fallande');
define('DISKU_A', 'Diskanvändande stigande');
define('DISKU_D', 'Diskanvändande fallande');
define('SORT_BY', 'Sortera användare i');
define('ERR_NO_USERS', 'Användartabell är tom!');
define('ERR_EDIT_SELF', 'Du kan inte redigera din egen profil, använd \'Min profil\' länken för det');
define('EDIT', 'REDIGERA');
define('DELETE', 'RADERA');
define('NAME', 'Användarnamn');
define('GROUP', 'Grupp');
define('INACTIVE', 'Inaktiv');
define('OPERATIONS', 'Funktioner');
define('PICTURES', 'Bilder');
define('DISK_SPACE', 'Utrymme använt / Kvot');
define('REGISTERED_ON', 'Registrerad den');
define('U_USER_ON_P_PAGES', '%d användare på %d sida(or)');
define('CONFIRM_DEL', 'Är du säker att du vill RADERA denna användare? \\nAlla bilder och album kommer även att raderas för denna användare.');
define('MAIL', 'E-POST');
define('ERR_UNKNOWN_USER', 'Vald användare finns inte!');
define('MODIFY_USER', 'Spara användare');
define('NOTES', 'Anteckningar');
define('NOTE_LIST', '<li>Om du inte vill ändra nuvarande lösenord, lämna \"lösenord\" fältet blankt');
define('PASSWORD', 'Lösenord');
define('USER_ACTIVE', 'Användaren är aktiv');
define('USER_GROUP', 'Användargrupp');
define('USER_EMAIL', 'Användar e-post');
define('USER_WEB_SITE', 'Användarens hemsida');
define('CREATE_NEW_USER', 'Skapa ny användare');
define('USER_FROM', 'Användarens plats');
define('USER_INTERESTS', 'Användarens intressen');
define('USER_OCC', 'Användarens yrke');

// lang_util_php
define('TITLE', 'Storleksändra bilder');
define('WHAT_IT_DOES', 'Vad den gör');
define('WHAT_UPDATE_TITLES', 'Uppdatera titlar från filnamnet');
define('WHAT_DELETE_TITLE', 'Radera titlar');
define('WHAT_REBUILD', 'Återuppbygger miniatyrbilder och storleksändrade bilder');
define('WHAT_DELETE_ORIGINALS', 'Raderar bildstorlek på originalet och ersätter den med den storleksändrade versionen');
define('FILE', 'Fil');
define('TITLE_SET_TO', 'titel satt till');
define('SUBMIT_FORM', 'skicka');
define('UPDATED_SUCCESFULLY', 'uppdatering lyckades');
define('ERROR_CREATE', 'ERROR vid skapande av');
define('CONTINUE', 'Bearbeta fler bilder');
define('MAIN_SUCCESS', 'Filen %s används nu som huvudbild');
define('ERROR_RENAME', 'Fel vid namnbyte från %s till %s');
define('ERROR_NOT_FOUND', 'Filen %s hittades inte');
define('BACK', 'tillbaka till huvudsidan');
define('THUMBS_WAIT', 'Uppdaterar miniatyrbilder och/eller storleksändrade bilder, v.v. vänta...');
define('THUMBS_CONTINUE_WAIT', 'Fortsätter att uppdatera miniatyrbilder och/eller storleksförändrade bilder...');
define('TITLES_WAIT', 'Uppdaterar titlar, v.v. vänta...');
define('DELETE_WAIT', 'Raderar titlar, v.v. vänta...');
define('REPLACE_WAIT', 'Raderar original och ersätter dem med storleksförändrade bilder, v.v. vänta..');
define('INSTRUCTION', 'Snabbinstruktioner');
define('INSTRUCTION_ACTION', 'Välj funktion');
define('INSTRUCTION_PARAMETER', 'Sätt parametrar');
define('INSTRUCTION_ALBUM', 'Välj album');
define('INSTRUCTION_PRESS', 'Tryck %s');
define('UPDATE', 'Uppdatera miniatyrbilder och/eller storleksförändra bilder');
define('UPDATE_WHAT', 'Vad som ska uppdateras');
define('UPDATE_THUMB', 'Endast miniatyrbilder');
define('UPDATE_PIC', 'Endast storleksförändrade bilder');
define('UPDATE_BOTH', 'Både miniatyrbilder och storleksförändrade bilder');
define('UPDATE_NUMBER', 'Antal bearbetade bilder per klick');
define('UPDATE_OPTION', '(Försök att ställa detta alternativ lägre om du får timeout problem)');
define('FILENAME_TITLE', 'Filnamn &rArr; Bildtitel');
define('FILENAME_HOW', 'Hur ska filnamnet ändras');
define('FILENAME_REMOVE', 'Ta bort .jpg ändelsen och ersätt _ (underscore) med mellanslag');
define('FILENAME_EURO', 'Ändra 2003_11_23_13_20_20.jpg till 23/11/2003 13:20');
define('FILENAME_US', 'Ändra 2003_11_23_13_20_20.jpg till 11/23/2003 13:20');
define('FILENAME_TIME', 'Ändra 2003_11_23_13_20_20.jpg till 13:20');
define('DELETE', 'Radera bildtitlar eller originalbildstorlek');
define('DELETE_TITLE', 'Radera bildtitlar');
define('DELETE_ORIGINAL', 'Radera originalbildstorlek');
define('DELETE_REPLACE', 'Raderar orginalbilder och ersätter med storleksförändrade versioner');
define('SELECT_ALBUM', 'Välj album');

// lang_pagetitle_php
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>