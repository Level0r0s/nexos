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
/*   $Id: lang-polish.php,v 1.1 2004/08/04 05:01:20 djmaze Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Polish');
define('LANG_NAME_NATIVE', 'Polish');
define('LANG_COUNTRY_CODE', 'pl');
define('TRANS_NAME', 'Jacek Domoń');
define('TRANS_EMAIL', 'plusz@plusnet.pl');
define('TRANS_WEBSITE', 'http://www.plusz.futuremedia.pl/');
define('TRANS_DATE', '2003-04-20');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'iso-8859-2');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'Tak');
define('NO', 'Nie');

// some common strings
define('BACK', 'Wstecz');
define('CONTINUE', 'Dalej');
define('INFO', 'Informacja');
define('ERROR', 'Błąd');

//// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%m/%d/%y @ %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y @ %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y @ %I:%M %p');

// short names for Byte, Kilo, Mega
$lang_byte_units = array('Bajty','KB','MB',);

// Day of week
$lang_day_of_week = array('Niedziela','Poniedziałek','Wtorek','Środa','Czwartek','Piątek','Sobota',);
// Day of the month
$lang_month = array('Styczeń','Luty','Marzec','Kwiecień','Maj','Czerwiec','Lipiec','Sierpień','Wrzesień','Październik','Listopad','Grudzień',);
// For the word censor
$lang_bad_words = array('',);
// lang_meta_album_names
define('RANDOM', 'Losowo wybrane zdjęcia ');
define('LASTUP', 'Ostatnio dodane zdjęcia');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Ostatnio dodane albumy');
define('LASTCOM', 'Ostatnio dodane komentarze');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Najpopularniejsze zdjęcia');
define('TOPRATED', 'Najwyżej oceniane zdjęcia');
define('LASTHITS', 'Ostatnio oglądane zdjęcia');
define('SEARCH', 'Wyniki wyszukiwania');
define('FAVPICS', 'Ulubione zdjęcia');

// lang_errors
define('ACCESS_DENIED', 'Nie masz uprawnień aby oglądać tę stronę.');
define('PERM_DENIED', 'Nie masz uprawnień aby wykonać tę operację.');
define('PARAM_MISSING', 'Skrypt został wywołany bez wymaganego parametru/ów.');
define('NON_EXIST_AP', 'Wybrany album/zdjęcie nie istnieje!!');
define('QUOTA_EXCEEDED', 'Przekroczono limit miejsca na pliki<br /><br />Twój przydział: [quota]K, Twoje zdjęcia używają obecnie: [space]K. Dodanie tego zdjęcia powoduje przekroczenie limitu.');
define('GD_FILE_TYPE_ERR', 'Jeżli w użyciu jest biblioteka GD, dozwolone formaty zdjęć to wyłącznie JPEG i PNG.');
define('INVALID_IMAGE', 'Zdjęcie które przesłano nie może być obsłużone przez bibliotekę GD.');
define('RESIZE_FAILED', 'Nie można stworzyć miniatury lub zdjęcia pośredniego.');
define('NO_IMG_TO_DISPLAY', 'Brak zdjęcia do wyświetlenia');
define('NON_EXIST_CAT', 'Wybrana kategoria nie istnieje');
define('ORPHAN_CAT', 'Kategoria nie ma nadrzędnej gałęzi, uruchom menedżera kategorii aby rozwiązać ten problem.');
define('DIRECTORY_RO', 'Katalog \'%s\' jest zabezpieczony przed zapisem');
define('NON_EXIST_COMMENT', 'Wybrany komentarz nie istnieje.');
define('PIC_IN_INVALID_ALBUM', 'Zdjęcie znajduje się w nieistniejącym albumie (%s)!?');
define('BANNED', 'Obecnie Twój dostęp do strony został zablokowany.');
define('NOT_WITH_UDB', 'Ta funkcja jest zablokowana, ponieważ Coppermine jest zintegrowane z oprogramowaniem do obsługi forum. Alternatywnie funkcja nie jest obsługiwana przy bieżącej konfiguracji.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', 'Przejdź do listy albumów');
define('ALB_LIST_LNK', 'Albumy');
define('MY_GAL_TITLE', 'Do prywatnej galerii');
define('MY_GAL_LNK', 'Moja galeria');
define('MY_PROF_LNK', 'Mój profil');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Przełącz w tryb administratora');
define('ADM_MODE_LNK', 'Tryb administratora');
define('USR_MODE_TITLE', 'Przełącz w tryb użytkownika');
define('USR_MODE_LNK', 'Tryb użytkownika');
define('UPLOAD_PIC_TITLE', 'Upload zdjęcia do albumu');
define('UPLOAD_PIC_LNK', 'Upload zdjęcia');
define('REGISTER_TITLE', 'Utwórz konto');
define('REGISTER_LNK', 'Zarejestruj się');
define('LOGIN_LNK', 'Zaloguj');
define('LOGOUT_LNK', 'Wyloguj');
define('LASTUP_LNK', 'Ostatnie uploady');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Ostatnie komentarze');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Najpopularniejsze');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Top Lista');
define('SEARCH_LNK', 'Szukaj');
define('FAV_LNK', 'Ulubione');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu

define('UPL_APP_LNK', 'Akceptacja zdjęć');
define('CONFIG_LNK', 'Konfiguracja');
define('ALBUMS_LNK', 'Albumy');
define('CATEGORIES_LNK', 'Kategorie');
define('USERS_LNK', 'Użytkownicy');
define('GROUPS_LNK', 'Grupy');
define('COMMENTS_LNK', 'Komentarze');
define('SEARCHNEW_LNK', 'Wsadowe przetwarzanie zdjęć');
define('UTIL_LNK', 'Zmiana rozmiaru zdjęć');
define('BAN_LNK', 'Banowanie');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Tworzenie / porządkowanie albumów');
define('MODIFYALB_LNK', 'Modyfikacja moich albumów');
define('MY_PROF_LNK', 'Mój profil');

// lang_cat_list
define('CATEGORY', 'Kategoria');
define('ALBUMS', 'Albumy');
define('PICTURES', 'Zdjęcia');

// lang_album_list
define('ALBUM_ON_PAGE', 'albumów: %d stron: %d');

// lang_thumb_view
define('DATE', 'DATA');
define('NAME', 'NAZWA PLIKU');
define('TITLE', 'TYTUŁ');
define('SORT_DA', 'Sortowanie wg daty rosnąco');
define('SORT_DD', 'Sortowanie wg daty malejąco');
define('SORT_NA', 'Sortowanie wg nazwy rosnąco');
define('SORT_ND', 'Sortowanie wg nazwy malejąco');
define('SORT_TA', 'Sortowanie wg tytułu rosnąco');
define('SORT_TD', 'Sortowanie wg tytułu malejąco');
define('PIC_ON_PAGE', 'zdjęć: %d stron: %d');
define('USER_ON_PAGE', 'użytkowników: %d stron: %d');
define('SORT_RA', 'Sort by rating ascending');
define('SORT_RD', 'Sort by rating descending');
define('RATING', 'RATING');
define('SORT_TITLE', 'Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Wróć do widoku miniatur');
define('PIC_INFO_TITLE', 'Wyświetl/ukryj info o zdjęciu');
define('SLIDESHOW_TITLE', 'Pokaz slajdów');
define('SLIDESHOW_DISABLED', 'e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'Wyślij jako e-kartkę');
define('ECARD_DISABLED', 'e-kartki są wyłączone');
define('ECARD_DISABLED_MSG', 'Nie masz uprawnień do wysyłania e-kartek');
define('PREV_TITLE', 'Poprzednie zdjęcie');
define('NEXT_TITLE', 'Następne zdjęcie');
define('PIC_POS', 'Zdjęcie %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', 'Oceń te zdjęcie ');
define('NO_VOTES', '(Brak głosów)');
define('RATING', '(obecna ocena : %s / 5 głosów: %s)');
define('RUBBISH', 'Do niczego');
define('POOR', 'Słabe');
define('FAIR', 'Niezłe');
define('GOOD', 'Dobre');
define('EXCELLENT', 'B. dobre');
define('GREAT', 'Doskonałe');

// lang_cpg_die
define('INFORMATION', 'Informacja');
define('ERROR', 'Błąd');
define('CRITICAL_ERROR', 'Błąd krytyczny');
define('FILE', 'Plik: ');
define('LINE', 'Linia: ');

// lang_display_thumbnails
define('FILENAME', 'Nazwa pliku: ');
define('FILESIZE', 'Rozmiar pliku: ');
define('DIMENSIONS', 'Wymiary: ');
define('DATE_ADDED', 'Data dodania: ');

// lang_get_pic_data
define('N_COMMENTS', 'komentarzy: %s ');
define('N_VIEWS', 'odsłon: %s ');
define('N_VOTES', '(głosów: %s)');

// lang_smilies_inc_php
define('EXCLAMATION', 'Wykrzyknik');
define('QUESTION', 'Pytanie');
define('VERY HAPPY', 'Bardzo zadowolony');
define('SMILE', 'Uśmiechnięty');
define('SAD', 'Smutny');
define('SURPRISED', 'Zaskoczony');
define('SHOCKED', 'Zszokowany');
define('CONFUSED', 'Zniesmaczony');
define('COOL', 'Luzak');
define('LAUGHING', 'Śmieje się');
define('MAD', 'Wściekły');
define('RAZZ', 'Jęzorek');
define('EMBARASSED', 'Zawstydzony / gafa');
define('CRYING OR VERY SAD', 'Zrozpaczony');
define('EVIL OR VERY MAD', 'Wściekły do kwadratu');
define('TWISTED EVIL', 'Twisted Evil');
define('ROLLING EYES', 'Przewraca oczami');
define('WINK', 'Puszcza oczko');
define('IDEA', 'Pomysł');
define('ARROW', 'Strzałka');
define('NEUTRAL', 'Neutralny');
define('MR. GREEN', 'Mr. Green');

// lang_admin_php
define('LV_ADMIN', 'Zakończono pracę administratora...');
define('ENT_ADMIN', 'Przełączanie do trybu administratora...');

// lang_albmgr_php
define('ALB_NEED_NAME', 'Albumy muszą mieć nazwę !');
define('CONFIRM_MODIFS', 'Czy na pewno chcesz dokonać tych modyfikacji ?');
define('NO_CHANGE', 'Nie dokonałeś/aś żadnej zmiany !');
define('NEW_ALBUM', 'Nowy album');
define('CONFIRM_DELETE1', 'Czy na pewno chcesz skasować ten album ?');
define('CONFIRM_DELETE2', '\\nWszystkie zdjęcia i komentarze które zawiera zostaną stracone !');
define('SELECT_FIRST', 'Wybierz pierwszy album');
define('ALB_MRG', 'Menedżer albumów');
define('MY_GALLERY', '* Moja galeria *');
define('NO_CATEGORY', '* Bez kategorii *');
define('DELETE', 'Kasuj');
define('NEW', 'Nowy');
define('APPLY_MODIFS', 'Wykonaj modyfikacje');
define('SELECT_CATEGORY', 'Wybierz kategorię');

// lang_catmgr_php
define('MISS_PARAM', 'Brak parametrów do operacji \'%s\'!');
define('UNKNOWN_CAT', 'Wybrana kategoria nie istnieje w bazie danych');
define('USERGAL_CAT_RO', 'Galerie użytkowników nie mogą być kasowane!');
define('MANAGE_CAT', 'Zarządzaj kategoriami');
define('CONFIRM_DELETE', 'Czy jesteś pewny/a że chcesz SKASOWAĆ tę kategorię');
define('CATEGORY', 'Kategoria');
define('OPERATIONS', 'Operacje');
define('MOVE_INTO', 'Przesuń do');
define('UPDATE_CREATE', 'Uaktualnij / stwórz kategorię');
define('PARENT_CAT', 'Kategoria wyższego rzędu');
define('CAT_TITLE', 'Tytuł kategorii');
define('CAT_DESC', 'Opis kategorii');

// lang_config_php
define('TITLE', 'Konfiguracja');
define('RESTORE_CFG', 'Przywróć ustawienia domyślne');
define('SAVE_CFG', 'Zachowaj nową konfigurację');
define('NOTES', 'Notatki');
define('INFO', 'Informacja');
define('UPD_SUCCESS', 'Konfiguracja Coppermine została uaktualniona');
define('RESTORE_SUCCESS', 'Konfiguracja Coppermine została przywrócona');
define('NAME_A', 'Nazwa rosnąco');
define('NAME_D', 'Nazwa malejąco');
define('TITLE_A', 'Tytuł rosnąco');
define('TITLE_D', 'Tytuł malejąco');
define('DATE_A', 'Data rosnąco');
define('DATE_D', 'Data malejąco');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Maksymalne rozmiary');
define('TH_HT', 'Wysokość');
define('TH_WD', 'Szerokość');

// lang_config_data
define('CONFIG_GENSET', 'Ustawienia główne');
define('GALLERY_NAME', 'Nazwa galerii');
define('GALLERY_DESCRIPTION', 'Opis galerii');
define('GALLERY_ADMIN_EMAIL', 'E-mail administratora galerii');
define('ECARDS_MORE_PIC_TARGET', 'Address to nuke folder ie http://www.mysite.tld/html/');
define('LANG', 'Język');
define('THEME', 'Styl galerii');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'Przeglądanie listy albumów');
define('MAIN_TABLE_WIDTH', 'Szerokość głównej galerii (piksele lub %)');
define('SUBCAT_LEVEL', 'Ilość kategorii do wyświetlenia');
define('ALBUMS_PER_PAGE', 'Ilość albumów do wyświetlenia');
define('ALBUM_LIST_COLS', 'Ilość kolumn w liście albumów');
define('ALB_LIST_THUMB_SIZE', 'Rozmiar miniatur w pikselach');
define('MAIN_PAGE_LAYOUT', 'Zawartość strony głównej');
define('FIRST_LEVEL', 'Pokaż miniaturę pierwszego poziomu w miniaturach albumu');
define('THUMB_VIEW_TITLE', 'Widok miniatur');
define('THUMBCOLS', 'Ilość kolumn na stronie miniatur');
define('THUMBROWS', 'Ilość wierszy na stronie miniatur');
define('MAX_TABS', 'Maksymalna ilość pasków do wyświetlenia');
define('CAPTION_IN_THUMBVIEW', 'Wyświetl opis zdjęcia (oprócz tytułu) poniżej miniatury');
define('DISPLAY_COMMENT_COUNT', 'Wyświetl ilość komentarzy poniżej miniatury');
define('DEFAULT_SORT_ORDER', 'Domyślny porządek sortowania zdjęć');
define('MIN_VOTES_FOR_RATING', 'Minimalna ilość głosów niezbędna do umieszczenia zdjęcia w kategorii \'Top Lista\'');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'Ustawienia wyświetlania zdjęć &amp; komentarzy');
define('PICTURE_TABLE_WIDTH', 'Szerokość tabeli wyświetlającej zdjęcia (piksele lub %)');
define('DISPLAY_PIC_INFO', 'Domyślne pokazywanie Informacji o zdjęciu');
define('FILTER_BAD_WORDS', 'Blokowanie słów z "listy zakazanych" w komentarzach');
define('ENABLE_SMILIES', 'Wyświetlanie emotikon w komentarzach');
define('DISABLE_FLOOD_PROTECTION', 'Allow several consecutive comments on one pic from the same user');
define('COMMENT_EMAIL_NOTIFICATION', 'Email site admin upon comment submission');
define('MAX_IMG_DESC_LENGTH', 'Maksymalna długość opisu zdjęcia');
define('MAX_COM_WLENGTH', 'Maksymalna ilość znaków w słowie');
define('MAX_COM_LINES', 'Maksymalna ilość linii w komentarzu');
define('MAX_COM_SIZE', 'Maksymalna długość komentarza (znaków)');
define('DISPLAY_FILM_STRIP', 'Pokaż "pasek filmu" z miniaturami');
define('MAX_FILM_STRIP_ITEMS', 'Ilość elementów wyświetlanych w "pasku filmu" z miniaturami');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', 'Ustawienia zdjęć i miniatur');
define('JPEG_QUAL', 'Jakość plików JPEG');
define('THUMB_WIDTH', 'Maksymalny rozmiar miniatury <b>*</b>');
define('THUMB_USE', 'Użyj wymiaru (szerokość, wysokość lub maksymalny widok dla miniatury)<b>*</b>');
define('MAKE_INTERMEDIATE', 'Twórz zdjęcia pośrednie');
define('PICTURE_WIDTH', 'Maksymalna szerokość zdjęcia pośredniego <b>*</b>');
define('MAX_UPL_SIZE', 'Maksymalny rozmiar uploadowanych zdjęć (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Maksymana wysokość lub szerokość uploadowanych zdjęć (w pikselach)');
define('USER_SETTING_TITLE', 'Ustawienia użytkowników');
define('ALLOW_USER_REGISTRATION', 'Zezwalanie na rejestrację nowych użytkowników');
define('REG_REQUIRES_VALID_EMAIL', 'Rejestracja użytkownika wymaga potwierdzenia e-mail');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Zezwalanie posiadania tego samego adresu e-mail przez dwóch użytkowników');
define('ALLOW_PRIVATE_ALBUMS', 'Użytkownicy mogą tworzyć albumy prywatne');
define('CUSTOM_FIELDS_TITLE', 'Nazwy dodatkowych pól do opisu zdjęcia (pozostaw je puste jeżeli nie są używane)');
define('USER_FIELD1_NAME', 'Nazwa pola 1');
define('USER_FIELD2_NAME', 'Nazwa pola 2');
define('USER_FIELD3_NAME', 'Nazwa pola 3');
define('USER_FIELD4_NAME', 'Nazwa pola 4');
define('PIC_ADV_SETTING_TITLE', 'Zaawansowane ustawienia zdjęć i miniatur');
define('SHOW_PRIVATE', 'Pokazuj prywatną ikonę albumu niezalogowanemu użytkownikowi');
define('FORBIDEN_FNAME_CHAR', 'Znaki zabronione w nazwach plików');
define('ALLOWED_FILE_EXTENSIONS', 'Akceptowane rozszerzenia uploadowanych plików');
define('THUMB_METHOD', 'Metoda zmiany rozmiaru zdjęć');
define('IMPATH', 'Ścieżka dostępu do narzędzia konwertującego ImageMagick/netpbm \'convert\' (na przykład /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Dozwolone nazwy plików (właściwe dla ImageMagick)');
define('IM_OPTIONS', 'Komendy linii poleceń dla ImageMagick');
define('READ_EXIF_DATA', 'Czytaj dane EXIF w plikach JPEG');
define('READ_IPTC_DATA', 'Read IPTC data in JPEG files');
define('FULLPATH', 'Ścieżka katalogu z albumami<b>*</b>');
define('USERPICS', 'Nazwa katalogu na zdjęcia użytkowników<b>*</b>');
define('NORMAL_PFX', 'Prefix dla zdjęć pośrednich <b>*</b>');
define('THUMB_PFX', 'Prefix dla miniatur<b>*</b>');
define('DEFAULT_DIR_MODE', 'Domyślne uprawnienia katalogów (LINUX i podobne systemy)');
define('DEFAULT_FILE_MODE', 'Domyślne uprawnienia plików ze zdjęciami (LINUX i podobne systemy)');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', 'Ustawienia cookies &amp; zestawu znaków');
define('COOKIE_NAME', 'Nazwa plików cookie tworzonych przez skrypt');
define('COOKIE_PATH', 'Ścieżka plików cookie tworzonych przez skrypt');
define('CHAR_SET', 'Zestaw znaków');
define('MISC_SETTING_TITLE', 'Różne ustawienia');
define('DEBUG_MODE', 'Włącz tryb debugowania');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) Pola oznaczone gwiazdką nie mogą być zmienione jeżeli w galerii są już zdjęcia</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Musisz podać swoje imię i napisać komentarz');
define('COM_ADDED', 'Dodano komentarz');
define('ALB_NEED_TITLE', 'Musisz podać tytuł dla albumu!');
define('NO_UDP_NEEDED', 'Zmiana nie jest konieczna.');
define('ALB_UPDATED', 'Uaktualniono album');
define('UNKNOWN_ALBUM', 'Wybrany album nie istnieje, lub nie masz uprawnień do uploadu');
define('NO_PIC_UPLOADED', 'Zdjęcie nie zostało dodane!<br /><br />Jeżeli wybrano zdjęcie do przesłania, sprawdź czy serwer na to zezwala...');
define('ERR_MKDIR', 'Nie udało się utworzyć katalogu %s !');
define('DEST_DIR_RO', 'Katalog docelowy %s nie może być zapisany przez skrypt!');
define('ERR_MOVE', 'Nie można przenieść %s do %s !');
define('ERR_FSIZE_TOO_LARGE', 'Zdjęcie które przesyłasz ma zbyt duży rozmiar (maksymalnie dozwolony: %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Zdjęcie które przesyłasz ma zbyt duży rozmiar (maksymalnie dozwolony: to %s KB) !');
define('ERR_INVALID_IMG', 'Przesłane zdjęcie nie jest w dozwolonym formacie!');
define('ALLOWED_IMG_TYPES', 'Możesz przesłać tylko %s zdjęć.');
define('ERR_INSERT_PIC', 'Zdjęcie \'%s\' nie może zostać wstawione do albumu ');
define('UPLOAD_SUCCESS', 'Zdjęcie zostało przesłane<br /><br />Będzie widoczne po akceptacji przez administratora.');
define('INFO', 'Informacja');
define('ERR_COMMENT_EMPTY', 'Twój komentarz jest pusty!');
define('ERR_INVALID_FEXT', 'Akceptowane są jedynie zdjęcia z następującymi rozszerzeniami: <br /><br />%s.');
define('NO_FLOOD', 'Przykro mi ale jesteś/aś autorem ostatniego dodanego komentarza<br /><br />Możesz go edytować aby zmienić treść');
define('REDIRECT_MSG', 'Jesteś przekierowywany.<br /><br /><br />Kliknij \'DALEJ\' jeżeli strona nie zmieni się automatycznie');
define('UPL_SUCCESS', 'Zdjęcie zostało przesłane');

// lang_delete_php
define('CAPTION', 'Tytuł');
define('FS_PIC', 'pełny rozmiar');
define('DEL_SUCCESS', 'skasowano');
define('NS_PIC', 'normalny rozmiar');
define('ERR_DEL', 'nie może być skasowane');
define('THUMB_PIC', 'miniatura');
define('COMMENT', 'komentarz');
define('IM_IN_ALB', 'zdjęcie z albumu');
define('ALB_DEL_SUCCESS', 'Skasowano album \'%s\' ');
define('ALB_MGR', 'Menedżer albumów');
define('ERR_INVALID_DATA', 'Otrzymano niewłaściwe dane \'%s\'');
define('CREATE_ALB', 'Tworzenie albumu \'%s\'');
define('UPDATE_ALB', 'Uaktualnienie albumu: \'%s\' tytuł: \'%s\' index: \'%s\'');
define('DEL_PIC', 'Kasowanie zdjęcia');
define('DEL_ALB', 'Kasowanie albumu');
define('DEL_USER', 'Kasowanie użytkownika');
define('ERR_UNKNOWN_USER', 'Wybrany użytkownik nie istnieje!');
define('COMMENT_DELETED', 'Komentarz został dodany');

// lang_display_image_php
define('CONFIRM_DEL', 'Czy na pewno chcesz skasować te zdjęcie? \\nZostaną skasowane również komentarze do niego.');
define('DEL_PIC', 'SKASUJ TE ZDJĘCIE');
define('SIZE', '%s x %s pixels');
define('VIEWS', '%s times');
define('SLIDESHOW', 'Pokaz slajdów');
define('STOP_SLIDESHOW', 'ZATRZYMAJ POKAZ');
define('VIEW_FS', 'Kliknij aby zobaczyć pełny rozmiar');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('TITLE', 'Informacja');
define('FILENAME', 'Nazwa pliku');
define('ALBUM NAME', 'Nazwa albumu');
define('RATING', 'Ocena (%s głosów)');
define('KEYWORDS', 'Słowa kluczowe');
define('FILE SIZE', 'Rozmiar pliku');
define('DIMENSIONS', 'Wymiary');
define('DISPLAYED', 'Wyświetleń');
define('CAMERA', 'Aparat fotograficzny');
define('DATE TAKEN', 'Data zrobienia zdjcia');
define('APERTURE', 'Przesłona');
define('EXPOSURE TIME', 'Czas ekspozycji');
define('FOCAL LENGTH', 'Ogniskowa');
define('COMMENT', 'Komentarz');
define('ADDFAV', 'Dodaj do Ulubionych');
define('ADDFAVPHRASE', 'Ulubione');
define('REMFAV', 'Usuń z Ulubionych');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'Edytuj ten komentarz');
define('CONFIRM_DELETE', 'Czy na pewno chcesz skasować ten komentarz ?');
define('ADD_YOUR_COMMENT', 'Dodaj komentarz');
define('NAME', 'Pseudonim');
define('COMMENT', 'Komentarz');
define('YOUR_NAME', 'Anonim');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Kliknij zdjęcie aby zamknąć okno');

// lang_ecard_php
define('TITLE', 'Wyślij e-kartkę');
define('INVALID_EMAIL', '<b>Uwaga!</b> : niepoprawny adres e-mail !');
define('ECARD_TITLE', 'e-kartka od %s dla Ciebie');
define('VIEW_ECARD', 'Jeżeli e-kartka nie wyświetla się poprawnie, kliknij ten link');
define('VIEW_MORE_PICS', 'Kliknij ten link aby zobaczyć więcej zdjęć!');
define('SEND_SUCCESS', 'Twoja e-kartka została wysłana');
define('SEND_FAILED', 'Niestety, serwer nie może wysłać Twojej e-kartki...');
define('FROM', 'Od');
define('YOUR_NAME', 'Twoje imię');
define('YOUR_EMAIL', 'Twój adres e-mail');
define('TO', 'Do');
define('RCPT_NAME', 'Nazwa odbiorcy');
define('RCPT_EMAIL', 'Adres e-mail odbiorcy');
define('GREETINGS', 'Temat');
define('MESSAGE', 'Wiadomość');

// lang_editpics_php
define('PIC_INFO', 'Zdjęcie&nbsp;Info');
define('ALBUM', 'Album');
define('TITLE', 'Tytuł');
define('DESC', 'Opis');
define('KEYWORDS', 'Słowa kluczowe');
define('PIC_INFO_STR', '%s &razy; %s - %s KB - %s odsłon - %s głosów');
define('APPROVE', 'Akceptuj zdjęcie');
define('POSTPONE_APP', 'Odrocz akceptację');
define('DEL_PIC', 'Skasuj zdjęcie');
define('RESET_VIEW_COUNT', 'Resetuj licznik odsłon');
define('RESET_VOTES', 'Resetuj głosowania');
define('DEL_COMM', 'Skasuj komentarze');
define('UPL_APPROVAL', 'Akceptacja uploadu');
define('EDIT_PICS', 'Edytuj zdjęcia');
define('SEE_NEXT', 'Zobacz następne zdjęcia');
define('SEE_PREV', 'Zobacz poprzednie zdjęcia');
define('N_PIC', 'zdjęć: %s');
define('N_OF_PIC_TO_DISP', 'Ilość zdjęć do wyświetlenia');
define('APPLY', 'Zastosuj zmiany');

// lang_groupmgr_php
define('GROUP_NAME', 'Nazwa grupy');
define('DISK_QUOTA', 'Miejsce na dane');
define('CAN_RATE', 'Może oceniać zdjęcia');
define('CAN_SEND_ECARDS', 'Może wysyłać e-kartki');
define('CAN_POST_COM', 'Może zamieszczać komentarze');
define('CAN_UPLOAD', 'Może przesyłać zdjęcia');
define('CAN_HAVE_GALLERY', 'Może mieć galerię osobistą');
define('APPLY', 'Zastosuj zmiany');
define('CREATE_NEW_GROUP', 'Stwórz nową grupę');
define('DEL_GROUPS', 'Skasuj zaznaczoną grupę/y');
define('CONFIRM_DEL', 'Uwaga: jeżeli skasujesz tę grupę jej członkowie zostaną przeniesieni do grupy \'Zarejestrowani\'!\\n\\nKontynuować?');
define('TITLE', 'Zarządzanie grupami');
define('APPROVAL_1', 'Zgoda na pub. upl.(1)');
define('APPROVAL_2', 'Zgoda na priv. upl.(2)');
define('NOTE1', '<b>(1)</b> Przesyłanie zdjęć do albumu publicznego wymaga zgody administratora');
define('NOTE2', '<b>(2)</b> Przesyłanie zdjęć do albumu użytkownika wymaga zgody administratora');
define('NOTES', 'Uwagi');

// lang_index_php
define('WELCOME', 'Witaj!');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Czy na pewno chcesz skasować ten album? \\nZostaną skasowane również wszystkie zdjęcia i komentarze.');
define('DELETE', 'KASUJ');
define('MODIFY', 'WŁAŚCIWOŚCI');
define('EDIT_PICS', 'EDYTUJ ZDJĘCIA');

// lang_list_categories
define('HOME', 'Strona główna');
define('STAT1', 'zdjęcia: <b>[pictures]</b>, albumy: <b>[albums]</b>, kategorie: <b>[cat]</b>, komentarze: <b>[comments]</b>, odsłony: <b>[views]</b>');
define('STAT2', 'zdjęcia: <b>[pictures]</b>, albumy: <b>[albums]</b>, odsłony: <b>[views]</b>');
define('XX_S_GALLERY', '%s\'s galeria');
define('STAT3', 'zdjęcia: <b>[pictures]</b>, albumy: <b>[albums]</b>, komentarze: <b>[comments]</b>, odsłony: <b>[views]</b>');

// lang_list_users
define('USER_LIST', 'Lista użytkowników');
define('NO_USER_GAL', 'Galerie użytkowników nie istnieją');
define('N_ALBUMS', '%s album/y');
define('N_PICS', '%s zdjęcie/ęć');

// lang_list_albums
define('N_PICTURES', 'zdjęć: %s');
define('LAST_ADDED', ', ostatnie dodano: %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Uaktualnij album %s');
define('GENERAL_SETTINGS', 'Ustawienia ogólne');
define('ALB_TITLE', 'Tytuł albumu');
define('ALB_CAT', 'Kategoria albumu');
define('ALB_DESC', 'Opis albumu');
define('ALB_THUMB', 'Miniatury');
define('ALB_PERM', 'Uprawnienia albumu');
define('CAN_VIEW', 'Może być oglądany przez');
define('CAN_UPLOAD', 'Goście mogą przesyłać zdjęcia');
define('CAN_POST_COMMENTS', 'Goście mogą dodawać komentarze');
define('CAN_RATE', 'Goście mogą oceniać zdjęcia');
define('USER_GAL', 'Galeria użytkownika');
define('NO_CAT', '* Bez kategorii *');
define('ALB_EMPTY', 'Album jest pusty');
define('LAST_UPLOADED', 'Ostatnio przesłane');
define('PUBLIC_ALB', 'Wszyscy (album publiczny)');
define('ME_ONLY', 'Tylko ja');
define('OWNER_ONLY', 'Tylko właściciel albumu: (%s)');
define('GROUPP_ONLY', 'Członkowie grupy: \'%s\'');
define('ERR_NO_ALB_TO_MODIFY', 'Nie można modyfikować żadnego albumu w bazie.');
define('UPDATE', 'Uaktualnij album');

// lang_rate_pic_php
define('ALREADY_RATED', 'Przykro nam, ale już oceniłeś te zdjęcie');
define('RATE_OK', 'Twój głos został zapisany');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'While the administrators of {SITE_NAME} will attempt to remove or edit any generally objectionable material as quickly as possible, it is impossible to review every post. Therefore you acknowledge that all posts made to this site express the views and opinions of the author and not the administrators or webmaster (except for posts by these people) and hence will not be held liable.<br />
<br />
You agree not to post any abusive, obscene, vulgar, slanderous, hateful, threatening, sexually-orientated or any other material that may violate any applicable laws. You agree that the webmaster, administrator and moderators of {SITE_NAME} have the right to remove or edit any content at any time should they see fit. As a user you agree to any information you have entered above being stored in a database. While this information will not be disclosed to any third party without your consent the webmaster and administrator cannot be held responsible for any hacking attempt that may lead to the data being compromised.<br />
<br />
This site uses cookies to store information on your local computer. These cookies serve only to improve your viewing pleasure. The email address is used only for confirming your registration details and password.<br />
<br />
By clicking \'I agree\' below you agree to be bound by these conditions.');

// lang_register_php
define('PAGE_TITLE', 'Rejestrowanie użytkownika');
define('TERM_COND', 'Warunki korzystania z serwisu');
define('I_AGREE', 'Zgadzam się');
define('SUBMIT', 'Wykonaj rejestrację');
define('ERR_USER_EXISTS', 'Nazwa użytkownika którą wybrałeś już istnieje. Wybierz inną');
define('ERR_PASSWORD_MISMATCH', 'Hasła nie pasują do siebie. Wpisz je ponownie');
define('ERR_UNAME_SHORT', 'Nazwa użytkownika musi mieć co najmniej 2 znaki');
define('ERR_PASSWORD_SHORT', 'Hasło musi mieć co najmniej 2 znaki');
define('ERR_UNAME_PASS_DIFF', 'Nazwa użytkownika i hasło muszą się od siebie różnić');
define('ERR_INVALID_EMAIL', 'Adres e-mail jest niepoprawny');
define('ERR_DUPLICATE_EMAIL', 'W bazie jest już użytkownik o podanym przez Ciebie adresie e-mail');
define('ENTER_INFO', 'Wprowadź informacje potrzebne do rejestracji');
define('REQUIRED_INFO', 'Informacje wymagane');
define('OPTIONAL_INFO', 'Informacje opcjonalne');
define('USERNAME', 'Nazwa użytkownika');
define('PASSWORD', 'Hasło');
define('PASSWORD_AGAIN', 'Wprowadź ponownie hasło');
define('EMAIL', 'E-mail');
define('LOCATION', 'Lokalizacja');
define('INTERESTS', 'Zainteresowania');
define('WEBSITE', 'Strona domowa');
define('OCCUPATION', 'Zajęcie / zawód');
define('ERROR', 'BŁĄD');
define('CONFIRM_EMAIL_SUBJECT', '%s - Informacja o rejestracji');
define('INFORMATION', 'Informacja');
define('FAILED_SENDING_EMAIL', 'E-mail z potwierdzeniem nie może być wysłany!');
define('THANK_YOU', 'Dziękujemy za rejestrację.<br /><br />Na podany przez Ciebie adres e-mail został wysłany list z prośbą o potwierdzenie.');
define('ACCT_CREATED', 'Konto zostało utworzone. Możesz już zalogować się podając wybraną wczesniej nazwę użytkownika, oraz hasło');
define('ACCT_ACTIVE', 'Konto jest już aktywne. Możesz już zalogować się podając wybraną wczesniej nazwę użytkownika, oraz hasło');
define('ACCT_ALREADY_ACT', 'Twoje konto zostało już aktywowane!');
define('ACCT_ACT_FAILED', 'Te konto nie może być aktywowane!');
define('ERR_UNK_USER', 'Podany użytkownik nie istnieje!');
define('X_S_PROFILE', 'profil: %s');
define('GROUP', 'Grupa');
define('REG_DATE', 'Dołączył/a');
define('DISK_USAGE', 'Użyte miejsce');
define('CHANGE_PASS', 'Zmiań moje hasło');
define('CURRENT_PASS', 'Bieżące hasło');
define('NEW_PASS', 'Nowe hasło');
define('NEW_PASS_AGAIN', 'Podaj ponownie nowe hasło');
define('ERR_CURR_PASS', 'Bieżące hasło jest niepoprawne');
define('APPLY_MODIF', 'Zastosuj zmiany');
define('UPDATE_SUCCESS', 'Twój profil został uaktualniony');
define('PASS_CHG_SUCCESS', 'Twoje hasło zostało zmienione');
define('PASS_CHG_ERROR', 'Twoje hasło nie zostało zmienione');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Dziękujemy za rejestrację w witrynie {SITE_NAME}

Twoja nazwa użytkownika to: "{USER_NAME}"
Twoje hasło to: "{PASSWORD}"

Aby aktywować konto kliknij na poniższy link albo skopiuj go
i wklej do swojej przeglądarki internetowej.

{ACT_LINK}

Pozdrowienia,

Zespół strony {SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', 'Przeglądaj komentarze');
define('NO_COMMENT', 'Nie ma komentarzy do przeglądania');
define('N_COMM_DEL', 'Skasowano komentarzy: %s');
define('N_COMM_DISP', 'Ilość komentarzy do wyświetlenia');
define('SEE_PREV', 'Zobacz poprzednie');
define('SEE_NEXT', 'Zobacz następne');
define('DEL_COMM', 'Skasuj wybrane komentarze');

// lang_search_php
define('SEARCH', 'Wyszukiwarka zdjęć');

// lang_search_new_php
define('PAGE_TITLE', 'Wyszukiwarka zdjęć');
define('SELECT_DIR', 'Wybierz katalog');
define('SELECT_DIR_MSG', 'Wybrana funkcja umożliwia wsadowe dodawanie do galerii zdjęć które zostały przesłane na serwer.<br /><br />Wybierz katalog do którego zostały przesłane wybrane zdjęcia');
define('NO_PIC_TO_ADD', 'Brak zdjęć do dodania');
define('NEED_ONE_ALBUM', 'Aby funkcja działała, potrzebny jest przynajmniej jeden album');
define('WARNING', 'Ostrzeżenie');
define('CHANGE_PERM', 'skrypt nie może zapisywać plików do wybranego katalogu. Zmień ustawienia na 755 lub 777 zanim spróbujesz dodać zdjęcia!');
define('TARGET_ALBUM', '<b>Zapisuje zdjęcia do katalogu &quot;</b>%s<b>&quot; </b>%s');
define('FOLDER', 'Katalog');
define('IMAGE', 'Zdjęcie');
define('ALBUM', 'Album');
define('RESULT', 'Wynik');
define('DIR_RO', 'Nie można zapisać. ');
define('DIR_CANT_READ', 'Nie można odczytać. ');
define('INSERT', 'Dodawanie nowych zdjęć do galerii');
define('LIST_NEW_PIC', 'Lista nowych zdjęć');
define('INSERT_SELECTED', 'Wstaw wybrane zdjęcia');
define('NO_PIC_FOUND', 'Nie znaleziono nowych zdjęć');
define('BE_PATIENT', 'Proszę o cierpliwość, skrypt potrzebuje czasu na dodanie zdjęć');
define('NOTES', '<ul><li><b>OK</b> : oznacza, że zdjęcie zostało dodane<li><b>DP</b> : oznacza, że zdjęcie jest zduplikowane i istnieje już w bazie<li><b>PB</b> : oznacza brak możliwości dodania zdjęcia. Sprawdź swoje uprawnienia do zapisywania katalogów i plików<li>Jeżeli OK, \'znaki\' DP, PB nie pojawiają się, kliknij na zdjęciu aby otrzymać komunikat generowany przez PHP<li>Jeżeli przeglądarka nie załadowała strony, wciśnij klawisz F5 aby ją odświeżyć</ul>');

// lang_upload_php
define('TITLE', 'Prześlij zdjęcie');
define('MAX_FSIZE', 'Maksymalny rozmiar zdjęcia to %s KB');
define('ALBUM', 'Album');
define('PICTURE', 'Zdjęcie');
define('PIC_TITLE', 'Tytuł zdjęcia');
define('DESCRIPTION', 'Opis zdjęcia');
define('KEYWORDS', 'Słowa kluczowe (oddzielone spacjami)');
define('ERR_NO_ALB_UPLOADABLES', 'Przykro mi, ale nie ma albumu do którego mógłbyś/aś przesłać zdjęcia');

// lang_usermgr_php
define('TITLE', 'Zarządzanie użytkownikami');
define('NAME_A', 'Nazwa rosnąco');
define('NAME_D', 'Nazwa malejąco');
define('GROUP_A', 'Grupa rosnąco');
define('GROUP_D', 'Grupa malejąco');
define('REG_A', 'Data rej. rosnąco');
define('REG_D', 'Data rej. malejąco');
define('PIC_A', 'Liczba zdjęć rosnąco');
define('PIC_D', 'Liczba zdjęć malejąco');
define('DISKU_A', 'Użycie dysku rosnąco');
define('DISKU_D', 'Użycie dysku malejąco');
define('SORT_BY', 'Posortuj użytkowników wg');
define('ERR_NO_USERS', 'Tabela użytkowników jest pusta!');
define('ERR_EDIT_SELF', 'Nie możesz modyfikować teraz swojego profilu. Aby to zrobić kliknij łącze \'Mój profil\'');
define('EDIT', 'EDYTUJ');
define('DELETE', 'KASUJ');
define('NAME', 'Nazwa użytkownika');
define('GROUP', 'Grupa');
define('INACTIVE', 'Nieaktywny');
define('OPERATIONS', 'Operacje');
define('PICTURES', 'Pictures');
define('DISK_SPACE', 'Użyte miejsce / Quota');
define('REGISTERED_ON', 'Zerejestrowano');
define('U_USER_ON_P_PAGES', 'użytkowników: %d na stronach: %d');
define('CONFIRM_DEL', 'Czy na pewno chcesz skasować tego użytkownika? \\nWszystkie jego zdjęcia i alumy zostaną automatycznie skasowane.');
define('MAIL', 'E-MAIL');
define('ERR_UNKNOWN_USER', 'Wybrany użytkownik nie istnieje');
define('MODIFY_USER', 'Modyfikuj użytkownika');
define('NOTES', 'Uwagi');
define('NOTE_LIST', '<li>Jeżeli nie chcesz zmieniać swojego ulubionego hasła teraz, zostaw pole \"hasło\" puste');
define('PASSWORD', 'Hasło');
define('USER_ACTIVE', 'Użytkownik jest aktywny');
define('USER_GROUP', 'Grupa użytkowników');
define('USER_EMAIL', 'Adres e-mail użytkownika');
define('USER_WEB_SITE', 'Strona sieci web użytkownika');
define('CREATE_NEW_USER', 'Utwórz nowego użytkownika');
define('USER_FROM', 'Lokacja użytkownika');
define('USER_INTERESTS', 'Zainteresowania');
define('USER_OCC', 'Zajęcie');

// lang_util_php
define('TITLE', 'Zmień rozmiar zdjęć');
define('WHAT_IT_DOES', 'Do czego to służy');
define('WHAT_UPDATE_TITLES', 'Uaktualnia tytuły nazwami plików');
define('WHAT_DELETE_TITLE', 'Kasuje tytuły');
define('WHAT_REBUILD', 'Odbudowuje miniatury i zdjęcia pośrednie');
define('WHAT_DELETE_ORIGINALS', 'Kasuje zdjęcia źródłowe, zastępując je zdjęciami o zmienionych wymiarach');
define('FILE', 'Plik');
define('TITLE_SET_TO', 'tytuł');
define('SUBMIT_FORM', 'prześlij');
define('UPDATED_SUCCESFULLY', 'zaktualizowano');
define('ERROR_CREATE', 'BŁĄD tworzenia');
define('CONTINUE', 'Przetwarza więcej zdjęć');
define('MAIN_SUCCESS', 'Plik %s został ustawiony jako zdjęcie główne');
define('ERROR_RENAME', 'Błąd przy zmiany nazwy z %s na %s');
define('ERROR_NOT_FOUND', 'Plik %s nie został znaleziony');
define('BACK', 'powrót na stronę główną');
define('THUMBS_WAIT', 'Uaktualniam miniatury i/lub zrewymiarowane zdjęcia, proszę czekać...');
define('THUMBS_CONTINUE_WAIT', 'Trwa uaktualnianie miniatur i/lub zrewymiarowanych zdjęć...');
define('TITLES_WAIT', 'Uaktualnianie tytułów, proszę czekać...');
define('DELETE_WAIT', 'Kasowanie tytułów, proszę czekać...');
define('REPLACE_WAIT', 'Kasowanie oryginałów i zamienianie ich na zdjęcia o zmienionych wymiarach..');
define('INSTRUCTION', 'Szybkie instrukcje');
define('INSTRUCTION_ACTION', 'Wybierz akcję');
define('INSTRUCTION_PARAMETER', 'Ustaw parametry');
define('INSTRUCTION_ALBUM', 'Wybierz album');
define('INSTRUCTION_PRESS', 'Naciśnij %s');
define('UPDATE', 'Uaktualnij miniatury i/lub zrewymiarowane zdjęcia');
define('UPDATE_WHAT', 'Do uaktualnienia');
define('UPDATE_THUMB', 'Tylko miniatury');
define('UPDATE_PIC', 'Tylko zdjęcia o zmienionych wymiarach');
define('UPDATE_BOTH', 'Zarówno miniatury jak i zrewymiarowane zdjęcia');
define('UPDATE_NUMBER', 'Ilość przetworzonych zdjęć/kliknięcie');
define('UPDATE_OPTION', '(Spróbuj zmniejszyć tę ilość, jeżeli zaobserwujesz problem z timeoutem)');
define('FILENAME_TITLE', 'Nazwa pliku &rArr; Tytuł zdjęcia');
define('FILENAME_HOW', 'Jak modyfikować nazwę pliku');
define('FILENAME_REMOVE', 'Usuń rozszerzenie .jpg i zamień _ (podkreślenie) na spacje');
define('FILENAME_EURO', 'Zmienia 2003_11_23_13_20_20.jpg na 23/11/2003 13:20');
define('FILENAME_US', 'Zmienia 2003_11_23_13_20_20.jpg na 11/23/2003 13:20');
define('FILENAME_TIME', 'Zmienia 2003_11_23_13_20_20.jpg na 13:20');
define('DELETE', 'Kasowanie tytułów lub oryginalnych zdjęć');
define('DELETE_TITLE', 'Skasuj tytuły zdjęć');
define('DELETE_ORIGINAL', 'Skasuj oryginalne zdjęcia');
define('DELETE_REPLACE', 'Kasuje oryginalne zdjęcia zastępując je zdjęciami zrewymiarowanymi');
define('SELECT_ALBUM', 'Wybierz album');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>