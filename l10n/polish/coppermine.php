<?php
/*********************************************
   Coppermine 1.3.1 for CPG Dragonfly™
  ********************************************
   Port Copyright © 2004-2006 CPG-Nuke Dev Team
  http://dragonflycms.org
  ********************************************
   v1.1 (c) by Grégory Demar http://coppermine.sf.net/
   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.
  ********************************************
  $Source: /cvs/l10n/polish/coppermine.php,v $
  $Revision: 9.5 $
  $Author: djmaze $
  $Date: 2006/02/12 16:02:14 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Wyświetleń');//new in 1.2.2nuke
define('PIC_VOTES', 'Głosów');//new in 1.2.2nuke
define('PIC_COMMENTS', 'Komentarzy');//new in 1.2.2nuke

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Polish');
define('LANG_NAME_NATIVE', 'Polski');
define('LANG_COUNTRY_CODE', 'pl');
define('TRANS_NAME', '');
define('TRANS_EMAIL', '');
define('TRANS_WEBSITE', '');
define('TRANS_DATE', '2004-11-30');
define('CHARSET', 'utf-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Tak');
define('NO', 'Nie');
// some common strings
define('BACK', 'Wstecz');
define('CONTINU', 'Dalej');
define('INFO', 'Informacja');
//define('ERROR', 'Błąd');
define('ALBUM_DATE_FMT', '%d.%m.%Y');
define('LASTCOM_DATE_FMT', '%d.%m.%y o %H:%M');
define('LASTUP_DATE_FMT', '%d.%m.%Y');
define('REGISTER_DATE_FMT', '%d.%m.%Y');
define('LASTHIT_DATE_FMT', '%d.%m.%Y o %H:%M');
define('COMMENT_DATE_FMT', '%d.%m.%Y o %H:%M');

// lang_meta_album_names
define('RANDOM', 'Losowo wybrane zdjęcia ');
define('LASTUP', 'Ostatnio dodane zdjęcia');
define('LASTUPBY', 'Moje ostatnie uzupełnienia');
define('LASTALB', 'Ostatnio dodane albumy');
define('LASTCOM', 'Ostatnio dodane komentarze');
define('LASTCOMBY', 'Moje ostatnie komentarze');
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
define('QUOTA_EXCEEDED', 'Przekroczono limit miejsca na pliki<br /><br />Twój przydział: [quota]K, Twoje zdjęcia zajmują obecnie: [space]K. Dodanie tego zdjęcia powoduje przekroczenie limitu.');
define('GD_FILE_TYPE_ERR', 'Jeżeli w użyciu jest biblioteka GD, dozwolone formaty zdjęć to wyłącznie JPEG i PNG.');
define('INVALID_IMAGE', 'Zdjęcie, które przesłano nie może być obsłużone przez bibliotekę GD.');
define('RESIZE_FAILED', 'Nie można utworzyć miniatury lub zdjęcia pośredniego.');
define('NO_IMG_TO_DISPLAY', 'Brak zdjęcia do wyświetlenia');
define('NON_EXIST_CAT', 'Wybrana kategoria nie istnieje');
define('ORPHAN_CAT', 'Kategoria nie ma nadrzędnej kategorii. Uruchom menedżera kategorii, aby rozwiązać ten problem.');
define('DIRECTORY_RO', 'Katalog \'%s\' jest zabezpieczony przed zapisem');
define('NON_EXIST_COMMENT', 'Wybrany komentarz nie istnieje.');
define('PIC_IN_INVALID_ALBUM', 'Zdjęcie znajduje się w nieistniejącym albumie (%s)!?');
define('BANNED', 'Obecnie Twój dostęp do strony został zablokowany.');
define('NOT_WITH_UDB', 'Ta funkcja jest zablokowana, ponieważ Coppermine jest zintegrowane z oprogramowaniem do obsługi forum. Alternatywnie funkcja nie jest obsługiwana przy bieżącej konfiguracji.');
define('MEMBERS_ONLY', 'Ta funkcja dostępna jest tylko dla zarejestrowanych użytkowników, zachęcamy do zarejsterowania się.');
define('MUSTBE_GOD', 'Ta funkcja dostępna jest tylko dla administratora witryny. Musisz być zalogowany jako superadministrator, aby mieć dostęp do tej funkcji');
define('NO_IMG_TO_APPROVE', 'Nie ma zdjęć do zaaprobowania');

// lang_main_menu
define('ALB_LIST_TITLE', 'Przejdź do listy albumów');
define('ALB_LIST_LNK', 'Albumy');
define('MY_GAL_TITLE', 'Do prywatnej galerii');
define('MY_GAL_LNK', 'Moja galeria');
define('MY_PROF_LNK', 'Mój profil');
define('MY_PROF_TITLE','Sprawdź swój przydział dysku i grupy');
define('ADM_MODE_TITLE', 'Przełącz w tryb administratora');
define('ADM_MODE_LNK', 'Tryb administratora');
define('USR_MODE_TITLE', 'Przełącz w tryb użytkownika');
define('USR_MODE_LNK', 'Tryb użytkownika');
define('UPLOAD_PIC_TITLE', 'Dodaj zdjęcia do albumu');
define('UPLOAD_PIC_LNK', 'Dodaj zdjęcia');
define('REGISTER_TITLE', 'Utwórz konto');
define('REGISTER_LNK', 'Zarejestruj się');
define('LOGIN_LNK', 'Zaloguj');
define('LOGOUT_LNK', 'Wyloguj');
define('LASTUP_LNK', 'Ostatnie dodania');
define('LASTUP_TITLE', 'Ostatnio dodane zdjęcia');
define('LASTCOM_TITLE',  'Zdjęcia w kolejności od ostatnio komentowanych');
define('LASTCOM_LNK',  'Ostatnie komentarze');
define('TOPN_TITLE', 'Zdjęcia, które były najczęściej oglądane');
define('TOPN_LNK', 'Najpopularniejsze');
define('TOPRATED_TITLE', 'Najwyżej oceniane zdjęcia');
define('TOPRATED_LNK',  'Toplista');
define('SEARCH_TITLE', 'Search Photo Collection');
define('SEARCH_LNK', 'Szukaj');
define('FAV_TITLE', 'Ulubione');
define('FAV_LNK', 'Ulubione');
define('HELP_TITLE', 'POMOC');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Akceptacja zdjęć');
define('CONFIG_LNK', 'Konfiguracja');
define('ALBUMS_LNK', 'Albumy');
define('CATEGORIES_LNK', 'Kategorie');
define('USERS_LNK', 'Użytkownicy');
define('GROUPS_LNK', 'Grupy');
define('COMMENTS_LNK', 'Komentarze');
define('SEARCHNEW_LNK', 'Wsadowe przetwarzanie zdjęć');
define('UTIL_LNK', 'Skalowanie zdjęć');
define('BAN_LNK', 'Banowanie');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Tworzenie/Porządkowanie albumów');
define('MODIFYALB_LNK', 'Modyfikacja moich albumów');
//define('MY_PROF_LNK', 'Mój profil');

// lang_cat_list
define('CATEGORY', 'Kategoria');
define('ALBUMS', 'Albumy');
//define('PICTURES', 'Zdjęcia');

// lang_album_list
define('ALBUM_ON_PAGE', 'albumów: %d, stron: %d');
// lang_thumb_view
define('DATE', 'DATA');
define('NAME', 'NAZWA PLIKU');
define('TITLE', 'TYTUŁ');
define('SORT_DA', 'Sortuj wg daty rosnąco');
define('SORT_DD', 'Sortuj wg daty malejąco');
define('SORT_NA', 'Sortuj wg nazwy rosnąco');
define('SORT_ND', 'Sortuj wg nazwy malejąco');
define('SORT_TA', 'Sortuj wg tytułu rosnąco');
define('SORT_TD', 'Sortuj wg tytułu malejąco');
define('PIC_ON_PAGE', 'zdjęć: %d, stron: %d');
define('USER_ON_PAGE', 'użytkowników: %d, stron: %d');
define('SORT_RA', 'Sortuj wg ocen rosnąco');
define('SORT_RD', 'Sortuj wg ocen malejąco');
define('THUMB_RATING', 'RATING');
define('SORT_TITLE', 'Sortuj zdjęcia wg:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Wróć do widoku miniatur');
define('PIC_INFO_TITLE', 'Wyświetl/Ukryj informacje o zdjęciu');
define('SLIDESHOW_TITLE', 'Pokaz slajdów');
define('SLIDESHOW_DISABLED', 'ekartki są wyłączone');
define('SLIDESHOW_DISABLED_MSG', 'Ta funkcja dostępna jest tylko dla członków, zachęcamy do zarejestrowania się.');
define('ECARD_TITLE', 'Wyślij jako ekartkę');
define('ECARD_DISABLED', 'ekartki są wyłączone');
define('ECARD_DISABLED_MSG', 'Nie masz uprawnień do wysyłania ekartek');
define('PREV_TITLE', 'Poprzednie zdjęcie');
define('NEXT_TITLE', 'Następne zdjęcie');
define('PIC_POS', 'Zdjęcie %s/%s');
define('NO_MORE_IMAGES', 'Nie ma więcej zdjęć w tej galerii');
define('NO_LESS_IMAGES', 'To jest pierwsze zdjęcie w tej galerii');

// lang_rate_pic
define('RATE_THIS_PIC', 'Oceń to zdjęcie ');
define('NO_VOTES', '(Brak głosów)');
define('RATING', '(obecna ocena : %s / 5 głosów: %s)');
define('RUBBISH', 'Kiepskie');
define('POOR', 'Słabe');
define('FAIR', 'Niezłe');
define('GOOD', 'Dobre');
define('EXCELLENT', 'Bardzo dobre');
define('GREAT', 'Doskonałe');

// lang_cpg_die
//define('INFORMATION','Informacja');
//define('ERROR', 'Błąd');
define('_CRITICAL_ERROR', 'Błąd krytyczny');
define('FILE', 'Plik: ');
define('LINE', 'Linia: ');

// lang_display_thumbnails
define('FILENAME', 'Nazwa pliku: ');
define('FILESIZE', 'Wielkość pliku: ');
define('DIMENSIONS', 'Wymiary: ');
define('DATE_ADDED', 'Data dodania: ');

// lang_get_pic_data
define('N_COMMENTS', 'komentarzy: %s ');
define('N_VIEWS', 'wyświetleń: %s ');
define('N_VOTES', '(głosów: %s)');


// lang_albmgr_php
define('ALB_NEED_NAME', 'Albumy muszą mieć nazwę!');
define('CONFIRM_MODIFS', 'Czy na pewno chcesz zastosować te zmiany?');
define('NO_CHANGE', 'Nie dokonałeś(aś) żadnej zmiany!');
define('NEW_ALBUM', 'Nowy album');
define('CONFIRM_DELETE1', 'Czy na pewno chcesz skasować ten album?');
define('CONFIRM_DELETE2', '\\nWszystkie zdjęcia i komentarze, które zawiera, zostaną utracone');
define('SELECT_FIRST', 'Wybierz pierwszy album');
define('ALB_MRG', 'Menedżer albumów');
define('MY_GALLERY', '* Moja galeria *');
define('NO_CATEGORY', '* Bez kategorii *');
define('DELETE', 'Usuń');
define('NEW', 'Nowy');
define('APPLY_MODIFS', 'Zastosuj zmiany');
define('SELECT_CATEGORY', 'Wybierz kategorię');

// lang_catmgr_php
define('MISS_PARAM', 'Brak parametrów do operacji \'%s\'!');
define('UNKNOWN_CAT', 'Wybrana kategoria nie istnieje w bazie danych');
define('USERGAL_CAT_RO', 'Galerie użytkowników nie mogą być usuwane!');
define('MANAGE_CAT', 'Zarządzaj kategoriami');
define('CONFIRM_DELETE_CAT', 'Czy na pewno chcesz USUNĄĆ tę kategorię');
//define('CATEGORY', 'Kategoria');
define('OPERATIONS', 'Operacje');
define('MOVE_INTO', 'Przesuń do');
define('UPDATE_CREATE', 'Uaktualnij/utwórz kategorię');
define('PARENT_CAT', 'Kategoria wyższego rzędu');
define('CAT_TITLE', 'Tytuł kategorii');
define('CAT_DESC', 'Opis kategorii');

// lang_config_php
define('CONFIG_TITLE', 'Konfiguracja');
define('RESTORE_CFG', 'Przywróć ustawienia domyślne');
define('SAVE_CFG', 'Zachowaj nową konfigurację');
define('NOTES', 'Notatki');
//define('INFO', 'Informacja');
define('UPD_SUCCESS', 'Konfiguracja została uaktualniona');
define('RESTORE_SUCCESS', 'Konfiguracja została przywrócona');
define('NAME_A', 'rosnąco wg nazwy');
define('NAME_D', 'malejąco wg nazwy');
define('TITLE_A', 'rosnąco wg tytułu');
define('TITLE_D', 'malejąco wg tytułu');
define('DATE_A', 'rosnąco wg daty');
define('DATE_D', 'malejąco wg daty');
define('RATING_A', 'rosnąco wg oceny');
define('RATING_D', 'malejąco wg oceny');
define('TH_ANY', 'Maksymalne wymiary');
define('TH_HT', 'Wysokość');
define('TH_WD', 'Szerokość');


// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Musisz podać swoje imię i napisać komentarz');
define('COM_ADDED', 'Dodano komentarz');
define('ALB_NEED_TITLE', 'Musisz podać tytuł albumu!');
define('NO_UDP_NEEDED', 'Zmiana nie jest konieczna.');
define('ALB_UPDATED', 'Uaktualniono album');
define('UNKNOWN_ALBUM', 'Wybrany album nie istnieje lub nie masz uprawnień do dodawania');
define('NO_PIC_UPLOADED', 'Zdjęcie nie zostało dodane!<br /><br />Jeżeli wybrano zdjęcie do przesłania, sprawdź czy serwer na to zezwala...');
define('ERR_MKDIR', 'Nie udało się utworzyć katalogu %s !');
define('DEST_DIR_RO', 'Katalog docelowy %s nie może być zapisany przez skrypt!');
define('ERR_MOVE', 'Nie można przenieść %s do %s !');
define('ERR_FSIZE_TOO_LARGE', 'Zdjęcie, które przesyłasz ma zbyt duży rozmiar (dopuszczalny to: %s x %s)!');
define('ERR_IMGSIZE_TOO_LARGE', 'Plik ze zdjęcie, który przesyłasz, ma zbyt dużą wielkość (dopuszczlana wielkość to: to %s kB) !');
define('ERR_INVALID_IMG', 'Przesyłane zdjęcie nie jest w dozwolonym formacie!');
define('ALLOWED_IMG_TYPES', 'Możesz przesłać tylko %s zdjęć.');
define('ERR_INSERT_PIC', 'Zdjęcie \'%s\' nie może zostać wstawione do albumu ');
define('UPLOAD_SUCCESS', 'Zdjęcie zostało przesłane<br /><br />Będzie widoczne po akceptacji przez administratora.');
//define('INFO','Informacja');
define('ERR_COMMENT_EMPTY', 'Twój komentarz jest pusty!');
define('ERR_INVALID_FEXT', 'Akceptowane są jedynie zdjęcia z następującymi rozszerzeniami: <br /><br />%s.');
define('NO_FLOOD', 'Przykro mi, ale jesteś autorem ostatniego dodanego komentarza<br /><br />Możesz zmienić jego treść');
define('REDIRECT_MSG', 'Jesteś przekierowywany.<br /><br /><br />Kliknij \'DALEJ\' jeżeli strona nie zmieni się automatycznie');
define('UPL_SUCCESS', 'Zdjęcie zostało przesłane');

// lang_delete_php
define('CAPTION', 'Tytuł');
define('FS_PIC', 'pełna wielkość');
define('DEL_SUCCESS', 'usunięto');
define('NS_PIC', 'normalna wielkość');
define('ERR_DEL', 'nie może być usunięte');
define('THUMB_PIC', 'miniatura');
//define('COMMENT','komentarz');
define('IM_IN_ALB', 'zdjęcie z albumu');
define('ALB_DEL_SUCCESS', 'Usunięto album \'%s\' ');
define('ALB_MGR', 'Menedżer albumów');
define('ERR_INVALID_DATA', 'Otrzymano niewłaściwe dane \'%s\'');
define('CREATE_ALB', 'Tworzenie albumu \'%s\'');
define('UPDATE_ALB', 'Uaktualnienie albumu: \'%s\' tytuł: \'%s\' index: \'%s\'');
define('DEL_PIC', 'Usuwanie zdjęcia');
define('DEL_ALB', 'Usuwanie albumu');
define('DEL_USER', 'Usuwanie użytkownika');
//define('ERR_UNKNOWN_USER','Wybrany użytkownik nie istnieje!');
define('COMMENT_DELETED', 'Komentarz został dodany');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'Czy na pewno chcesz usunąć to zdjęcie?? \\nZostaną usunięte również komentarze do niego.');
define('DEL_THIS_PIC', 'USUŃ TO ZDJĘCIE');
define('SIZE', '%s x %s pikseli');
define('VIEWS', '%s razy');
define('SLIDESHOW', 'Pokaz slajdów');
define('STOP_SLIDESHOW', 'ZATRZYMAJ POKAZ');
define('VIEW_FS', 'Kliknij, aby zobaczyć w rzeczywistej wielkości');
define('EDIT_PIC', 'EDYTUJ INFORMACJE O ZDJĘCIU');

// lang_picinfo
define('PIC_INF_TITLE', 'O zdjęciu');
define('PIC_INF_FILENAME', 'Nazwa pliku');
define('ALBUM_NAME', 'Nazwa albumu');
define('PIC_INFO_RATING', 'Ocena (%s głosów)');
define('KEYWORDS', 'Słowa kluczowe');
define('PIC_INF_FILE_SIZE', 'Wielkość pliku');
define('PIC_INF_DIMENSIONS', 'Wymiary');
define('DISPLAYED', 'Wyświetleń');
define('CAMERA', 'Aparat fotograficzny');
define('DATE_TAKEN', 'Data zrobienia zdjęcia');
define('APERTURE', 'Przesłona');
define('EXPOSURE_TIME', 'Czas ekspozycji');
define('FOCAL_LENGTH', 'Ogniskowa');
define('COMMENT', 'Komentarz');
define('ADDFAV', 'Dodaj do ulubionych');
define('ADDFAVPHRASE', 'Ulubione');
define('REMFAV', 'Usuń z ulubionych');
define('IPTCTITLE', 'Tytuł z IPTC');
define('IPTCCOPYRIGHT', 'Copyright z IPTC');
define('IPTCKEYWORDS', 'Słowa kluczowe z IPTC');
define('IPTCCATEGORY', 'Kategoria z IPTC');
define('IPTCSUBCATEGORIES', 'Podkategorie z IPTC');
define('BOOKMARK_PAGE', 'Załóż zakładkę na zdjęciu');
define('REMOVEFAV', 'Usunięto z Ulubionych');
define('ADDEDTOFAV', 'Dodano do Ulubionych');

// lang_display_comments
define('OK', 'OK');
define('COM_ EDIT_TITLE', 'Zmień ten komentarz');
define('CONFIRM_DELETE_COM', 'Czy na pewno chcesz usunąć ten komentarz?');
define('ADD_YOUR_COMMENT', 'Dodaj komentarz');
define('COM_NAME', 'Pseudonim');
//define('COMMENT', 'Komentarz');
define('YOUR_NAME', 'Nieznajomy');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Kliknij zdjęcie, aby zamknąć okno');

// lang_ecard_php
define('E_TITLE', 'Wyślij ekartkę');
define('INVALID_EMAIL', '<b>Uwaga!</b> : niepoprawny adres email!');
define('E_ECARD_TITLE', '%s przesyła Ci ekartkę');
define('VIEW_ECARD', 'Jeżeli ekartka nie wyświetla się poprawnie, kliknij ten link');
define('VIEW_MORE_PICS', 'Kliknij ten link, aby zobaczyć więcej zdjęć!');
define('SEND_SUCCESS', 'Twoja ekartka została wysłana');
define('SEND_FAILED', 'Niestety, serwer nie może wysłać Twojej ekartki...');
define('FROM', 'Od');
define('_YOUR_NAME', 'Twoje imię');
define('YOUR_EMAIL', 'Twój adres email');
define('TO', 'Do');
define('RCPT_NAME', 'Imię odbiorcy');
define('RCPT_EMAIL', 'Adres email odbiorcy');
define('GREETINGS', 'Temat');
define('MESSAGE', 'Wiadomość');
define('ECARD_LINK_CORRUPT', 'Przepraszamy, dane ekartki zostały uszkodzone przez Twój program pocztowy, spróbuj wkleić link do paska adresu przeglądarki'); //NEW

// lang_editpics_php
define('PIC_INFO', 'O&nbsp;zdjęciu');
define('ALBUM', 'Album');
define('EDIT_TITLE', 'Tytuł');
define('DESC', 'Opis');
//define('KEYWORDS','Słowa kluczowe');
define('PIC_INFO_STR', '%s razy, %s - %s kB, - %s odsłon, - %s głosów');
define('APPROVE', 'Akceptuj zdjęcie');
define('POSTPONE_APP', 'Odrocz akceptację');
//define('DEL_PIC','Usuń zdjęcie');
define('READ_EXIF', 'Ponownie odczytaj dane EXIF');
define('RESET_VIEW_COUNT', 'Wyzeruj licznik odsłon');
define('RESET_VOTES', 'Wyzeruj licznik głosów');
define('DEL_COMM', 'Usuń komentarze');
define('UPL_APPROVAL', 'Akceptacja dodania');
define('EDIT_PICS', 'Edytuj zdjęcia');
define('SEE_NEXT', 'Zobacz następne zdjęcia');
define('SEE_PREV', 'Zobacz poprzednie zdjęcia');
define('N_PIC', 'zdjęć: %s');
define('N_OF_PIC_TO_DISP', 'Liczba zdjęć do wyświetlenia');
define('APPLY', 'Zastosuj zmiany');

// lang_groupmgr_php
define('GROUP_NAME', 'Nazwa grupy');
define('DISK_QUOTA', 'Miejsce na dane');
define('CAN_RATE', 'Może oceniać zdjęcia');
define('CAN_SEND_ECARDS', 'Może wysyłać ekartki');
define('CAN_POST_COM', 'Może zamieszczać komentarze');
define('CAN_UPLOAD', 'Może przesyłać zdjęcia');
define('CAN_HAVE_GALLERY', 'Może mieć galerię osobistą');
//define('APPLY','Zastosuj zmiany');
define('CREATE_NEW_GROUP', 'Utwórz nową grupę');
define('DEL_GROUPS', 'Skasuj zaznaczoną grupę(y)');
define('CONFIRM_DEL', 'Uwaga: jeżeli usuniesz tę grupę, jej członkowie zostaną przeniesieni do grupy \'Zarejestrowani\'!\\n\\nKontynuować?');
define('GROUP_TITLE', 'Zarządzanie grupami');
define('APPROVAL_1', 'Zgoda na pub. dodania(1)');
define('APPROVAL_2', 'Zgoda na pryw. dodania(2)');
define('NOTE1', '<b>(1)</b> Przesyłanie zdjęć do albumu publicznego wymaga zgody administratora');
define('NOTE2', '<b>(2)</b> Przesyłanie zdjęć do albumu użytkownika wymaga zgody administratora');
//define('NOTES','Uwagi');

// lang_index_php
define('WELCOME', 'Witaj!');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'Czy na pewno chcesz usunąć ten album? \\nZostaną usunięte również wszystkie zdjęcia i komentarze.');
//define('DELETE', 'USUŃ');
define('MODIFY', 'WŁAŚCIWOŚCI');
//define('EDIT_PICS', 'EDYTUJ ZDJĘCIA');

// lang_list_categories
define('HOME', _HOME);
define('STAT1', 'zdjęcia: <b>[pictures]</b>, albumy: <b>[albums]</b>, kategorie: <b>[cat]</b>, komentarze: <b>[comments]</b>, wyświetlenia: <b>[views]</b>');
define('STAT2', 'zdjęcia: <b>[pictures]</b>, albumy: <b>[albums]</b>, wyświetlenia: <b>[views]</b>');
define('XX_S_GALLERY', 'Galeria użytkownika %s');
define('STAT3', 'zdjęcia: <b>[pictures]</b>, albumy: <b>[albums]</b>, komentarze: <b>[comments]</b>, wyświetlenia: <b>[views]</b>');

// lang_list_users
define('USER_LIST', 'Lista użytkowników');
define('NO_USER_GAL', 'Galerie użytkowników nie istnieją');
define('N_ALBUMS', 'alumów: %s');
define('N_PICS', 'zdjęć: %s');

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
define('MOD_CAN_UPLOAD', 'Goście mogą przesyłać zdjęcia');
define('CAN_POST_COMMENTS', 'Goście mogą dodawać komentarze');
define('MOD_CAN_RATE', 'Goście mogą oceniać zdjęcia');
define('USER_GAL', 'Galeria użytkownika');
define('NO_CAT', '* Bez kategorii *');
define('ALB_EMPTY', 'Album jest pusty');
define('LAST_UPLOADED', 'Ostatnio przesłane');
define('PUBLIC_ALB', 'Wszyscy (album publiczny)');
define('ME_ONLY', 'Tylko ja');
define('OWNER_ONLY', 'Tylko właściciel albumu: (%s)');
define('GROUPP_ONLY', 'Członkowie grupy: \'%s\'');
define('ERR_NO_ALB_TO_MODIFY', 'Nie można zmieniać żadnego albumu w bazie.');
define('UPDATE', 'Uaktualnij album');

// lang_rate_pic_php
define('ALREADY_RATED', 'Przykro nam, ale już oceniłeś te zdjęcie');
define('RATE_OK', 'Twój głos został zapisany');

// lang_register_php
define('USERNAME', 'Nazwa użytkownika');
define('X_S_PROFILE', 'profil: %s');
define('GROUP', 'Grupa');
define('DISK_USAGE', 'Wykorzystane miejsce');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Przeglądaj komentarze');
define('NO_COMMENT', 'Nie ma komentarzy do przeglądania');
define('N_COMM_DEL', 'Liczba usuniętych komentarzy: %s');
define('N_COMM_DISP', 'Liczba komentarzy do wyświetlenia');
define('R_SEE_PREV', 'Zobacz poprzednie');
define('R_SEE_NEXT', 'Zobacz następne');
define('R_DEL_COMM', 'Usuń wybrane komentarze');

// lang_search_php
define('S_SEARCH', 'Wyszukiwarka zdjęć');

// lang_search_new_php
define('PAGE_TITLE', 'Wyszukiwarka zdjęć');
define('SELECT_DIR', 'Wybierz katalog');
define('SELECT_DIR_MSG', 'Wybrana funkcja umożliwia wsadowe dodawanie do galerii zdjęć, które zostały przesłane na serwer.<br /><br />Zaznacz katalog, do którego zostały przesłane  zdjęcia');
define('NO_PIC_TO_ADD', 'Brak zdjęć do dodania');
define('NEED_ONE_ALBUM', 'Aby funkcja działała, potrzebny jest przynajmniej jeden album');
define('WARNING', 'Ostrzeżenie');
define('CHANGE_PERM', 'skrypt nie może zapisywać plików do wybranego katalogu. Zmień ustawienia na 755 lub 777 zanim spróbujesz dodać zdjęcia!');
define('TARGET_ALBUM', '<b>Zapisuje zdjęcia do katalogu &quot;</b>%s<b>&quot; </b>%s');
define('FOLDER', 'Katalog');
define('IMAGE', 'Zdjęcie');
//define('ALBUM','Album');
define('RESULT', 'Wynik');
define('DIR_RO', 'Nie można zapisać. ');
define('DIR_CANT_READ', 'Nie można odczytać. ');
define('INSERT', 'Dodawanie nowych zdjęć do galerii');
define('LIST_NEW_PIC', 'Lista nowych zdjęć');
define('INSERT_SELECTED', 'Wstaw wybrane zdjęcia');
define('NO_PIC_FOUND', 'Nie znaleziono nowych zdjęć');
define('BE_PATIENT', 'Zachowaj cierpliwość, skrypt potrzebuje czasu na dodanie zdjęć');
define('SN_NOTES', '<ul><li><b>OK</b>: oznacza, że zdjęcie zostało dodane<li><b>DP</b>: oznacza, że zdjęcie jest zdublowane i istnieje już w bazie<li><b>PB</b>: oznacza brak możliwości dodania zdjęcia. Sprawdź swoje uprawnienia do zapisywania katalogów i plików<li>Jeżeli OK, \'znaki\' DP, PB nie pojawiają się, kliknij na zdjęciu, aby otrzymać komunikat generowany przez PHP<li>Jeżeli przeglądarka nie załadowała strony, wciśnij klawisz F5 aby ją odświeżyć</ul>');
define('SELECT_ALBUM', 'Wybierz album');
define('NO_ALBUM', 'Nie wybrano żadnego albumu, powróć i wybierz album, do którego chcesz dodać zdjęcia');

// lang_upload_php
define('UP_TITLE', 'Prześlij zdjęcie');
define('MAX_FSIZE', 'Maksymalna wielkość pliku ze zdjęciem to %s kB');
//define('ALBUM','Album');
define('PICTURE', 'Zdjęcie');
define('PIC_TITLE', 'Tytuł zdjęcia');
define('DESCRIPTION', 'Opis zdjęcia');
define('UP_KEYWORDS', 'Słowa kluczowe (oddzielane odstępami)');
define('ERR_NO_ALB_UPLOADABLES', 'Przykro mi, ale nie ma albumu, do którego możnaby przesłać zdjęcia');

// lang_usermgr_php
define('U_TITLE', 'Zarządzanie użytkownikami');
//define('NAME_A', 'Nazwa rosnąco');
//define('NAME_D', 'Nazwa malejąco');
define('GROUP_A', 'Grupa rosnąco');
define('GROUP_D', 'Grupa malejąco');
define('REG_A', 'Data rej. rosnąco');
define('REG_D', 'Data rej. malejąco');
define('PIC_A', 'Liczba zdjęć rosnąco');
define('PIC_D', 'Liczba zdjęć malejąco');
define('DISKU_A', 'Wykorzystanie dysku rosnąco');
define('DISKU_D', 'Wykorzystanie dysku malejąco');
define('SORT_BY', 'Sortuj użytkowników wg');
define('ERR_NO_USERS', 'Tabela użytkowników jest pusta!');
define('ERR_EDIT_SELF', 'Nie możesz modyfikować teraz swojego profilu. Aby to zrobić kliknij łącze \'Mój profil\'');
define('EDIT', 'EDYTUJ');
//define('DELETE', 'USUŃ');
define('U_NAME', 'Nazwa użytkownika');
//define('GROUP','Grupa');
define('INACTIVE', 'Nieaktywny');
//define('OPERATIONS','Operacje');
define('PICTURES', 'Zdjęcia');
define('DISK_SPACE', 'Wykorzystane/Przydzielone miejsce');
define('REGISTERED_ON', 'Zarejestrowano');
define('U_USER_ON_P_PAGES', 'użytkowników: %d na stronach: %d');
define('USER_CONFIRM_DEL', 'Czy na pewno chcesz usunąć tego użytkownika? \\nWszystkie jego zdjęcia i albumy zostaną automatycznie skasowane.');
define('MAIL', 'EMAIL');
define('ERR_UNKNOWN_USER', 'Taki użytkownik nie istnieje');
define('MODIFY_USER', 'Zmień dane użytkownika');
//define('NOTES', 'Uwagi');
define('NOTE_LIST', '<li>Jeżeli nie chcesz zmieniać swojego obecnego hasła teraz, zostaw pole \"hasło\" puste');
define('PASSWORD', 'Hasło');
define('USER_ACTIVE_CP', 'Użytkownik jest aktywny');
define('USER_GROUP_CP', 'Grupa użytkowników');
define('USER_EMAIL', 'Adres email użytkownika');
define('USER_WEB_SITE', 'Witryna użytkownika');
define('CREATE_NEW_USER', 'Dodaj nowego użytkownika');
define('USER_FROM', 'Miejsce pobytu użytkownika');
define('USER_INTERESTS', 'Zainteresowania');
define('USER_OCC', 'Zajęcie, zawód');

// lang_util_php
define('UTIL_TITLE', 'Zmień rozmiar zdjęć');
define('WHAT_IT_DOES', 'Do czego to służy');
define('WHAT_UPDATE_TITLES', 'Uaktualnia tytuły nazwami plików');
define('WHAT_DELETE_TITLE', 'Usuwa tytuły');
define('WHAT_REBUILD', 'Odbudowuje miniatury i zdjęcia pośrednie');
define('WHAT_DELETE_ORIGINALS', 'Usuwa zdjęcia oryginalne, zastępując ję zdjęciami przeskalowanymi');
define('U_FILE', 'Plik');
define('TITLE_SET_TO', 'tytuł');
define('SUBMIT_FORM', 'prześlij');
define('UPDATED_SUCCESFULLY', 'zaktualizowano');
define('ERROR_CREATE', 'BŁĄD tworzenia');
define('CONTIN', 'Przetwarzaj więcej zdjęć');
define('MAIN_SUCCESS', 'Plik %s został ustawiony jako zdjęcie główne');
define('ERROR_RENAME', 'Błąd przy zmianie nazwy z %s na %s');
define('ERROR_NOT_FOUND', 'Plik %s nie został znaleziony');
define('U_BACK', 'powrót na stronę główną');
define('THUMBS_WAIT', 'Uaktualniam miniatury i/lub przeskalowane zdjęcia, proszę czekać...');
define('THUMBS_CONTINUE_WAIT', 'Trwa uaktualnianie miniatur i/lub przeskalowanych zdjęć...');
define('TITLES_WAIT', 'Uaktualnianie tytułów, proszę czekać...');
define('DELETE_WAIT', 'Usuwanie tytułów, proszę czekać...');
define('REPLACE_WAIT', 'Usuwanie oryginałów i zamienianie ich na zdjęcia o zmienionych wymiarach.');
define('INSTRUCTION', 'Szybkie instrukcje');
define('INSTRUCTION_ACTION', 'Wybierz akcję');
define('INSTRUCTION_PARAMETER', 'Ustaw parametry');
define('INSTRUCTION_ALBUM', 'Wybierz album');
define('INSTRUCTION_PRESS', 'Naciśnij %s');
define('U_UPDATE', 'Uaktualnij miniatury i/lub przeskalowane zdjęcia');
define('UPDATE_WHAT', 'Do uaktualnienia');
define('UPDATE_THUMB', 'Tylko miniatury');
define('UPDATE_PIC', 'Tylko zdjęcia o zmienionych wymiarach');
define('UPDATE_BOTH', 'Zarówno miniatury jak i przeskalowane zdjęcia');
define('UPDATE_NUMBER', 'Ilość przetworzonych zdjęć/kliknięcie');
define('UPDATE_OPTION', '(Spróbuj zmniejszyć tę liczbę, jeżeli zaobserwujesz problem z przekraczeniem czasu)');
define('FILENAME_TITLE', 'Nazwa pliku &rArr; Tytuł zdjęcia');
define('FILENAME_HOW', 'Jak modyfikować nazwę pliku');
define('FILENAME_REMOVE', 'Usuń rozszerzenie .jpg i zamień _ (podkreślenie) na odstępy');
define('FILENAME_EURO', 'Zmienia 2003_11_23_13_20_20.jpg na 23/11/2003 13:20');
define('FILENAME_US', 'Zmienia 2003_11_23_13_20_20.jpg na 11/23/2003 13:20');
define('FILENAME_TIME', 'Zmienia 2003_11_23_13_20_20.jpg na 13:20');
define('UT_DELETE', 'Usuwanie tytułów lub oryginalnych zdjęć');
define('DELETE_TITLE', 'Usuń tytuły zdjęć');
define('DELETE_ORIGINAL', 'Usuń oryginalne zdjęcia');
define('DELETE_REPLACE', 'Usuwa oryginalne zdjęcia zastępując je zdjęciami przeskalowanymi');
//define('SELECT_ALBUM', 'Wybierz album');

// lang_pagetitle_php
define('VIEWING', 'Wyświetlanie zdjęcia');
define('USR', ' - Fotogaleria');
define('PHOTOGALLERY', 'Fotogaleria');
$lang_usermgr_php = array(
    'name_a' => 'Name ascending',
    'name_d' => 'Name descending',
    'group_a' => 'Group ascending',
    'group_d' => 'Group descending',
    'reg_a' => 'Reg date ascending',
    'reg_d' => 'Reg date descending',
    'pic_a' => 'Pic count ascending',
    'pic_d' => 'Pic count descending',
    'disku_a' => 'Disk usage ascending',
    'disku_d' => 'Disk usage descending',
    );
$lang_byte_units = array('Bajty','KB','MB',);
// Day of weeks and months
$lang_day_of_week = array(	'Niedziela','Poniedziałek','Wtorek','Środa','Czwartek','Piątek','Sobota');
$lang_month = array('stycznia', 'lutego', 'marca', 'kwietnia', 'maja', 'czerwca', 'lipca', 'sierpnia', 'września', 'października', 'listopada', 'grudnia');
$lang_meta_album_names = array(
    'random' => 'Losowo wybrane zdjęcia',
    'lastup' => 'Ostatnio dodane zdjęcia',
    'lastupby' => 'Moje ostatnie uzupełnienia', // new 1.2.2
    'lastalb' => 'Ostatnio uaktualnione albumy',
    'lastcom' => 'Ostatnio dodane komentarze',
    'lastcomby' => 'Moje ostatnie komentarze', // new 1.2.2
    'topn' => 'Najczęściej oglądane zdjęcia',
    'toprated' => 'Najwyżej oceniane zdjęcia',
    'lasthits' => 'Ostatnio oglądane zdjęcia',
    'search' => 'Wyniki wyszukiwania',
    'favpics' => 'Ulubione zdjęcia' // changed in cpg1.2.0nuke
    );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array(
    'title' => 'Konfiguracja',
    'restore_cfg' => 'Przywróć ustawienia domyślne',
    'save_cfg' => 'Zachowaj nową konfigurację',
    'notes' => 'Notatki',
    'info' => 'Informacja',
    'upd_success' => 'Konfiguracja została uaktualniona',
    'restore_success' => 'Konfiguracja została przywrócona',
    'name_a' => 'rosnąco wg nazwy',
    'name_d' => 'malejąco  wg nazwy',
    'title_a' => 'rosnąco wg tytułu',
    'title_d' => 'malejąco wg tytułu',
    'date_a' => 'rosnąco wg daty',
    'date_d' => 'malejąco wg daty',
    'rating_a' => 'rosnąco wg oceny', // new in cpg1.2.0nuke
    'rating_d' => 'malejąco wg oceny', // new in cpg1.2.0nuke
    'th_any' => 'Maksymalne wymiary',
    'th_ht' => 'Wysokość',
    'th_wd' => 'Szerokość',
    );
// start left side interpretation
$lang_config_data = array(
// General settings
    'Ustawienia ogólne',
	array('Nazwa galerii', 'gallery_name', 0),
	array('Opis galerii', 'gallery_description', 0),
	array('Email administratora galerii', 'gallery_admin_email', 0),
    array('Adresy do podkatalogu ze zdjęciami, np. http://example.com/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
    array('Styl', 'theme', 6),
	array('Tytuły stron zamiast >Coppermine', 'nice_titles', 1),
//'Album list view',
'Przeglądanie listy albumów',
    array('Szerokość głównej tabeli (piksele lub %)', 'main_table_width', 0),
	array('Liczba kategorii do wyświetlenia', 'subcat_level', 0),
	array('Liczba albumów do wyświetlenia', 'albums_per_page', 0),
    array('Liczba kolumn listy albumów', 'album_list_cols', 0),
	array('Rozmiar miniatur w pikselach', 'alb_list_thumb_size', 0),
	array('Zawartość strony głównej', 'main_page_layout', 0),
    array('Pokazuj miniatury albumu pierwszego poziomu w kategoriach', 'first_level', 1), 
//'Thumbnail view',
'Widok miniatur',
    array('Liczba kolumn na stronie miniatur', 'thumbcols', 0),
    array('Liczba wierszy na stronie miniatur', 'thumbrows', 0),
    array('Maksymalna liczba zakładek do wyświetlenia', 'max_tabs', 0),
    array('Wyświetlaj opis zdjęcia (oprócz tytułu) poniżej miniatury', 'caption_in_thumbview', 1),
    array('Wyświetlaj liczbę komentarzy poniżej miniatury', 'display_comment_count', 1),
    array('Domyślna kolejność sortowania zdjęć', 'default_sort_order', 3),
    array('Minimalna liczba głosów niezbędna do umieszczenia zdjęcia w kategorii \'Toplista\'', 'min_votes_for_rating', 0),
    array('Znaczniki alt i title miniatur pokazują tytuł i słowo kluczowe zamiast informacji o zdjęciu', 'seo_alts', 1), // new in cpg1.2.0nuke
     //'Display Image &amp; Comment settings',
    'Ustawienia wyświetlania zdjęć i komentarzy',
    array('Szerokość tabeli wyświetlającej zdjęcia (piksele lub %)', 'picture_table_width', 0),
    array('Domyślne wyświetlanie informacji o zdjęciu', 'display_pic_info', 1),
    array('Blokowanie słów z "listy zakazanych" w komentarzach', 'filter_bad_words', 1),
    array('Wyświetlanie buziek w komentarzach', 'enable_smilies', 1),
    array('Zezwalaj na kilka kolejnych komentarzy jednego użytkownika do jednego zdjęcia', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
    array('Wysyłaj list do administratora po dodaniu komentarza' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
    array('Maksymalna długość opisu zdjęcia', 'max_img_desc_length', 0),
    array('Maksymalna liczba znaków w słowie', 'max_com_wlength', 0),
    array('Maksymalna liczba linii w komentarzu', 'max_com_lines', 0),
    array('Maksymalna długość komentarza (znaków)', 'max_com_size', 0),
    array('Wyświetlaj "pasek filmu" z miniaturami', 'display_film_strip', 1),
    array('Liczba elementów wyświetlanych w "pasku filmu" z miniaturami', 'max_film_strip_items', 0),
    array('Zezwalaj na wyświetlanie pełnowymiarowych zdjęć użytkownikom anonimowym', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
    array('Liczba dni, po których upływie użytkownik będzie mógł ponownie zagłosować na to samo zdjęcie','keep_votes_time',0), // new in cpg1.2.2c nuke
    array('Wyświetlaj pełnowymiarowe zdjęcia na pokazie zdjęć','fullsize_slideshow',1),
    array('Wyświetlaj bloki po prawej', 'right_blocks', 1), // new 1.2.2
    // 'Pictures and thumbnails settings',
    'Ustawienia zdjęć i miniatur',
    array('Jakość plików JPEG', 'jpeg_qual', 0),
    array('Umieszczaj znak wodny na zdjęciach', 'watermark', 1),
    array('Maksymalna szerokość miniatury <b>*</b>', 'thumb_width', 0),
    array('Użyj wymiaru (szerokość, wysokość lub maksymalny wymiar dla miniatury)<b>*</b>', 'thumb_use', 7),
    array('Twórz zdjęcia pośrednie', 'make_intermediate', 1),
    array('Maksymalna szerokość zdjęcia pośredniego<b>*</b>', 'picture_width', 0),
    array('Maksymalna wielkość pliku dodawanych zdjęć (kB)', 'max_upl_size', 0),
    array('Maksymalna wysokość lub szerokość dodawanych zdjęć (w pikselach)', 'max_upl_width_height', 0), 
    array('Zezwalaj na dodawanie wielu plików o tych samych nazwach', 'samename', 1), 
	//'User settings',
    'Ustawienia użytkownika',

    array('Zezwalaj na rejestrację nowych użytkowników', 'allow_user_registration', 1),
/*
    array('Rejestracja użytkownika wymaga potwierdzenia listem', 'reg_requires_valid_email', 1),
    array('Zezwalaj na posiadanie tego samego adresu email przez dwóch użytkowników', 'allow_duplicate_emails_addr', 1),
*/
    array('Użytkownicy mogą zakładać albumy prywatne', 'allow_private_albums', 1),
    array('Pokazuj emblemat użytkownika zamiast obrazka albumu prywatnego', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',
    'Nazwy dodatkowych pól do opisu zdjęcia (pozostaw je puste jeżeli nie będą używane)',
    array('Nazwa pola 1', 'user_field1_name', 0),
    array('Nazwa pola 2', 'user_field2_name', 0),
    array('Nazwa pola 3', 'user_field3_name', 0),
    array('Nazwa pola 4', 'user_field4_name', 0), 
     // 'Pictures and thumbnails advanced settings',
    'Zaawansowane ustawienia zdjęć i miniatur',
    array('Niezalogowanemu użytkownikowi pokazuj ikonę albumu prywatnego', 'show_private', 1),
    array('Znaki zabronione w nazwach plików', 'forbiden_fname_char', 0),
    array('Akceptowane rozszerzenia uploadowanych plików', 'allowed_file_extensions', 0),
    array('Metoda skalowania zdjęć', 'thumb_method', 2),
    array('Ścieżka dostępu do narzędzia konwertującego ImageMagick / netpbm \'convert\' (na przykład /usr/bin/X11/)', 'impath', 0),
    array('Dozwolone nazwy plików (właściwe dla ImageMagick)', 'allowed_img_types', 0),
    array('Opcje komend linii poleceń  ImageMagick', 'im_options', 0),
    array('Odczytuj dane EXIF z plików JPEG', 'read_exif_data', 1),
    array('Odczytuj dane IPTC z plików JPEG', 'read_iptc_data', 1), // new in cpg1.2.0nuke
    array('Ścieżka do katalogu z albumami<b>*</b>', 'fullpath', 0),
    array('Nazwa katalogu na zdjęcia użytkowników<b>*</b>', 'userpics', 0),
    array('Przedrostek dla zdjęć pośrednich <b>*</b>', 'normal_pfx', 0),
    array('Przedrostek dla miniatur<b>*</b>', 'thumb_pfx', 0),
    array('Pokazuj nazwę pliku w danych zdjęcia', 'picinfo_display_filename', '1'), // new in cpg1.2.0nuke
    array('Pokazuj tytuł albumu w danych zdjęcia', 'picinfo_display_album_name', '1'), // new in cpg1.2.0nuke
    array('Pokazuj wielkość pliku w danych zdjęcia', 'picinfo_display_file_size', '1'), // new in cpg1.2.0nuke
    array('Pokazuj wymiary zdjęcia w danych zdjęcia', 'picinfo_display_dimensions', '1'), // new in cpg1.2.0nuke
    array('Pokazuj liczbę wyświetleń w danych zdjęcia', 'picinfo_display_count_displayed', '1'), // new in cpg1.2.0nuke
    array('Pokazuj URL zdjęcia w danych zdjęcia', 'picinfo_display_URL', '1'), // new in cpg1.2.0nuke
    array('Pokazuj URL jako link z zakładką w danych zdjęcia', 'picinfo_display_URL_bookmark', '1'), // new in cpg1.2.0nuke
    array('Pokazuj link jako Ulubione w danych zdjęcia', 'picinfo_display_favorites', '1'), // new in cpg1.2.0nuke
//    'Cookies &amp; Charset settings',
    'Ustawienia cookies i zestawu znaków',
    array('Nazwa plików cookie tworzonych przez skrypt', 'cookie_name', 0),
    array('Ścieżka plików cookie tworzonych przez skrypt', 'cookie_path', 0),
//    array('Zestaw znaków', 'charset', 4), 
    'Różne ustawienia',
    array('Włącz tryb debugowania', 'debug_mode', 1),
    '<br /><div align="center">(*) Pola oznaczone gwiazdką nie mogą być zmienione, jeżeli w galerii już są zdjęcia</div><br />'
    );
// end left side interpretation
