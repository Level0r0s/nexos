<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/polish/main.php,v $
  $Revision: 9.35 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:54 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','pl');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%d-%m-%Y o godz. %T');
define('_DATESTRING2','%d-%m-%Y');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%2$s %1$s %3$s');

define('_NEXTPAGE','Następna strona');
define('_PREVIOUSPAGE','Poprzednia strona');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Szukaj');
define('_LOGIN','Zaloguj się');
define('_WRITES','napisał(a)');
define('_POSTEDON','Nadesłano dnia');
define('_NICKNAME','Pseudonim');
define('_PASSWORD','Hasło');
define('_WELCOMETO','Witaj w');
define('_EDIT','Edytuj');
define('_DELETE','Usuń');
define('_POSTEDBY','Nadesłane przez');
define('_READS','wyświetleń');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Powróć</a>' : '<a href="javascript:history.go(-1)">Powróć</a>').' ]');
define('_COMMENTS','komentarzy');
define('_PASTARTICLES','Ostatnie artykuły');
define('_OLDERARTICLES','Starsze artykuły');
define('_BY','przez');
define('_ON','dnia');
define('_LOGOUT','Wyloguj');
define('_WAITINGCONT','Oczekująca treść');
define('_WREVIEWS','Oczekujące recenzje');
define('_WLINKS','Oczekujące linki');
define('_ONEDAY','Pewnego dnia, jak dzisiaj...');
define('_ASREGISTERED','Nie masz jeszcze konta? <a href="'.getlink("Your_Account&amp;file=register").'"> Załóż je</a>. Jako zarejestrowany użytkownik będziesz mieć kilka przywilejów.');
define('_MENUFOR','Menu dla');
define('_NOBIGSTORY','Dziś jeszcze nie było najważniejszego artykułu.');
define('_BIGSTORY','Dzisiaj najczęściej czytanym artykułem jest:');
define('_SURVEY','Sondaż');
define('_POLLS','Ankiety');
define('_PCOMMENTS','Komentarzy:');
define('_RESULTS','Wyniki');
define('_HREADMORE','przeczytaj dalej...');
define('_CURRENTLY','Aktualnie jest');
define('_GUESTS','gość(ci) i');
define('_MEMBERS','użytkownik(ów) online.');
define('_YOUARELOGGED','Jesteś zalogowany jako');
define('_YOUHAVE','Masz');
define('_PRIVATEMSG','prywatną wiadomość(ci).');
define('_YOUAREANON','Jesteś anonimowym użytkownikiem. Możesz się zarejestrować za darmo klikając <a href="'.getlink("Your_Account&amp;file=register").'">tutaj</a>');
define('_NOTE','Notatka:');
define('_ADMIN','Administrator:');
define('_WERECEIVED','Odnotowano');
define('_PAGESVIEWS','odsłon od');
define('_TOPIC','Temat');
define('_UDOWNLOADS','Pobrań');
define('_VOTE','Głosuj');
define('_VOTES','Głosów');
define('_MVIEWADMIN','Zobaczą: tylko administratorzy');
define('_MVIEWUSERS','Zobaczą: tylko zarejestrowani użytkownicy');
define('_MVIEWANON','Zobaczą: tylko anonimowi użytkownicy');
define('_MVIEWALL','Zobaczą: wszyscy odwiedzający');
define('_EXPIRELESSHOUR','Ważność: poniżej 1 godziny');
define('_EXPIREIN','Ważność w');
define('_UNLIMITED','bez ograniczeń');
define('_HOURS','godz.');
define('_RSSPROBLEM','Aktualnie mamy problem z nagłówkami na tej stronie');
define('_SELECTLANGUAGE','Wybierz język');
define('_SELECTGUILANG','Wybierz język interfejsu:');
define('_NONE','Brak');
define('_BLOCKPROBLEM','<center>Teraz występuje problem z tym blokiem.</center>');
define('_BLOCKPROBLEM2','<center>Teraz nie ma zawartości dla tego bloku.</center>');
define('_MODULENOTACTIVE','Przepraszamy, ten moduł nie został aktywowany!!');
define('_NOACTIVEMODULES','Nieaktywne moduły');
define('_MODULENOEXIST','Przepraszamy, żądany plik %s nie istnieje');
define('_FORADMINTESTS','(wyłącznie do testowania przez administratora)');
define('_BBFORUMS','Forum');
define('_ACCESSDENIED','Dostęp zabroniony');
define('_RESTRICTEDAREA','Próbujesz się dostać do strefy dostępnej tylko dla zarejestrowanych użytkowników.');
define('_MODULEUSERS','Przepraszamy, ale ta część naszej strony jest dostępna <i>wyłącznie dla zarejestrowanych użytkowników</i><br/><br/>Możesz zarejestrować się bezpłatnie klikając <a href="'.getlink("Your_Account&amp;file=register").'">tutaj</a>, wtedy będziesz mieć<br />dostęp do tego modułu bez ograniczeń.<br /><br />');
define('_MODULEUSERS2','Możesz zarejestrować się bezpłatnie klikając <a href="'.getlink('Your_Account&amp;file=register').'">tutaj</a>, aby otrzymać dostęp do tej części witryny<br /><br />Dziekujemy za zrozumienie');
define('_MODULESADMINS','Przepraszamy, ale ta część naszej strony jest <i>wyłącznie dla Administratorów</i><br /><br />');
define('_MODULESGROUPS','wymagany jest dostęp grupowy');
define('_HOME','Strona główna');
define('_HOMEPROBLEM','Występuje spory problem: nie ma strony startowej!!!');
define('_ADDAHOME','Dodaj moduł na stronie startowej');
define('_HOMEPROBLEMUSER','W tej chwili istnieje problem ze stroną startową. Zapraszamy ponownie później.');
define('_MORENEWS','Więcej artykułów w sekcji');
define('_ALLCATEGORIES','Wszystkie kategorie');
define('_SPAMGUARDPROTECTED','SpamGuard zablokował wysłanie tego listu');
define('_M_CHARS','Maksymalnie %s znaków');

define('_SYS_MESSAGE','Komunikat systemowy');
define('_SYS_MESSAGES','Komunikaty systemowe');
define('_SYS_MAINTENANCE','Przerwa techniczna w działaniu witryny');
define('_SYS_DEMO','Działasz w trybie demonstracyjnym jako administrator. <br />Nie możesz dokonywać żadnych zmian w bazie danych<br /><a href="\'.adminlink(\'logout\').\'">Wyloguj mnie!</a>');

define('_DATE','Data');
define('_HOUR','godz.');
define('_UMONTH','Miesiąc');
define('_YEAR','Rok');
define('_JANUARY','Styczeń');
define('_FEBRUARY','Luty');
define('_MARCH','Marzec');
define('_APRIL','Kwiecień');
define('_MAY','Maj');
define('_JUNE','Czerwiec');
define('_JULY','Lipiec');
define('_AUGUST','Sierpień');
define('_SEPTEMBER','Wrzesień');
define('_OCTOBER','Październik');
define('_NOVEMBER','Listopad');
define('_DECEMBER','Grudzień');

define('_MONDAY','Poniedziałek');
define('_TUESDAY','Wtorek');
define('_WEDNESDAY','Środa');
define('_THURSDAY','Czwartek');
define('_FRIDAY','Piątek');
define('_SATURDAY','Sobota');
define('_SUNDAY','Niedziela');

define('_ABR_MONDAY','Pn');
define('_ABR_TUESDAY','Wt');
define('_ABR_WEDNESDAY','Śr');
define('_ABR_THURSDAY','Cz');
define('_ABR_FRIDAY','Pt');
define('_ABR_SATURDAY','Sb');
define('_ABR_SUNDAY','Nd');

define('_BWEL','Witaj');
define('_BPM','Prywatne wiadomości');
define('_BUNREAD','Nieczytane');
define('_BREAD','Czytane');
define('_BMEMP','Członkowie');
define('_BLATEST','Ostatni');
define('_BTD','Nowych dzisiaj');
define('_BYD','Nowych wczoraj');
define('_BOVER','Wszystkich');
define('_BVISIT','Na stronie');
define('_BVIS','Goście');
define('_BMEM','Użytkownicy');
define('_BTT','Razem');
define('_BON','Teraz online');
define('_BREG','Zarejestruj się');
define('_BROADCAST','Wyślij wiadomość publiczną');
define('_BROADCASTFROM','Wiadomość publiczna od');
define('_TURNOFFMSG','Wyłącz wiadomości publiczne');
define('_JOURNAL','Dziennik');
define('_READMYJOURNAL','Czytaj mój dziennik');
define('_ADD','Dodaj');
define('_YES','Tak');
define('_NO','Nie');
define('_INVISIBLEMODULES','Niewidoczne moduły');
define('_ACTIVEBUTNOTSEE','(Link aktywny, lecz niewidoczny)');
define('_BOTS','Roboty');

define('_UM','Monitor aktualizacji Dragonfly');
define('_UM_F','Nie udało się połączyć z usługą aktualizującą. Spróbuj ponownie później.');
define('_UM_G','Działasz na najnowszej wersji Dragonfly');
define('_UM_R','Proszę <a href="%2$s" target="_blank">uaktualnić</a> do Dragonfly %1$s');

define('_TEAM','Zespół');
define('_LINKAPPROVEDMSG','Gratulacje! Zgłoszony link został zaakceptowany, prosimy o wzajemne umieszczenie linku także do naszej witryny.');
define('_MODREQLINKS','Zmienione linki');
define('_BROKENLINKS','Niedziałające linki');
define('_MODREQDOWN','Zmienione pliki');
define('_BROKENDOWN','Niedziałające pliki');
define('_PAGEGENERATION','Tworzenie strony:');
define('_SECONDS','sekund');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Utworzenie strony zajęło %1$s sekund, wykonano %2$s zapytań do bazy danych w ciągu %3$s sekund');
define('_YOUHAVEONEMSG','Masz 1 nową prywatną wiadomość');
define('_NEWPMSG','Nowa prywatna wiadomość');
define('_CONTRIBUTEDBY','Nadesłał(a)');
define('_CHAT','Czat');
define('_REGISTERED','Zarejestrowani');
define('_CHATGUESTS','Goście');
define('_USERSTALKINGNOW','Rozmawiający użytkownicy');
define('_ENTERTOCHAT','Wejdź na czat');
define('_CHATROOMS','Dostępne pokoje');
define('_ALLTOPICS','Wszystkie tematy');
define('_ASSOTOPIC','Powiązane tematy');
define('_HELLO','Hej');
define('_ALL','Wszystkie');
define('_URL','URL');
define('_SUBJECT','Temat');
define('_PREVIEW','Podgląd');
define('_SEND','Wyślij');
define('_ANONYMOUS','Nieznajomy');
define('_BREADCRUMB', 'Rozdzielacz lokalizatora, widoczny jest w tytułach stron pomiędzy wyrazami');
define('_BC_DELIM',isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&gt;&gt;');
define('_RESET','Wyczyść');
define('_AT','at');
define('_LASTMSGS','Ostatnie %s wiadomości na forum');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','Wersja do druku');

define('_CREDITS_TITLE','Podziękowania');
define('_CREDITS_PRODUCT','Produkt');
define('_CREDITS_DESC','Opis');
define('_CREDITS_AUTHORS','Autorzy');

define('_PP_TITLE','Polityka prywatności');
define('_PP_MODIFY','Zmień tę wiadomość');

define('_SENDERNAME','Imię nadawcy');
define('_SENDEREMAIL','Email nadawcy');
define('_RECIPIENTNAME','Imię odbiorcy');
define('_RECIPIENTEMAIL','Email odbiorcy');

define('_REASONS_0','Tak jak jest');
define('_REASONS_1','Nie na temat');
define('_REASONS_2','Flamebait');
define('_REASONS_3','Troll');
define('_REASONS_4','Zbędne');
define('_REASONS_5','Insightful');
define('_REASONS_6','Interesujące');
define('_REASONS_7','Informative');
define('_REASONS_8','Zabawne');
define('_REASONS_9','Przecenione');
define('_REASONS_10','NIedocenione');

/* My Account Tools Block */
define('_TB_BLOCK','Narzędzia mojego konta');
define('_TB_TASKS','Zadania');
define('_TB_INFO','Informacja');
define('_TB_PROFILE_INFO','Mój profil publiczny');
define('_TB_EDIT_PROFILE','Informacje o profilu');
define('_TB_EDIT_REG','Informacje rejestracyjne');
define('_TB_EDIT_PRIVATE','Informacje osobiste');
define('_TB_EDIT_AVATAR','Mój emblemat');
define('_TB_DELETE','Usuń moje konto');
define('_TB_CONFIG','Konfiguracja');
define('_TB_EDIT_PREFS','Moje preferencje');
define('_TB_EDIT_HOME','Moje ustawienia strony startowej');
define('_TB_EDIT_COMM','Moje ustawienia komentarzy');
define('_TB_PERSONAL','Osobiste');
define('_TB_PERSONAL_GALLERY','Moja galeria');
define('_TB_PERSONAL_JOURNAL','Mój dziennik');
define('_TB_PRIVMSGS','Wiadomości prywatne');
define('_TB_PRIVMSGS_INBOX','Skrzynka odbiorcza');
define('_TB_PRIVMSGS_OUTBOX','Skrzynka nadawcza');
define('_TB_PRIVMSGS_SENTBOX','Wysłane');
define('_TB_PRIVMSGS_SAVEBOX','Zapisane');
define('_TB_PRIVMSGS_SEND','Wyślij wiadomość');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','O użytkowniku');
define('_SECURITYCODE','Kod zabezpieczający');
define('_TYPESECCODE','Wpisz kod zabezpieczający');
define('_MEMBERSOPTIONS','Opcje użytkownika');
define('_READSEND','Przeczytaj swoje prywatne wiadomości. Wyślij wiadomości innym.');
define('_INBOX','Skrzynka odbiorcza');
define('_NEW','Nowe');
define('_ACCOUNTOPTIONS','Twoje konto. Zmień opcje i przeczytaj swoje wiadomości.');
define('_LOGOUTACCT','Wyloguj się z tego konta.');
define('_LOGOUTADMINACCT','Wyloguj się z konta administratora.');
define('_BLOGIN','Twoje konto');
define('_BFLOGIN','Profil na forum');
define('_BHID','Ukryte');
define('_WHOWHERE','Kto gdzie jest');
define('_STAFFONL','Zespół online');
define('_STAFFNONE','Nie ma nikogo z zespołu online!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Społeczność');
define('_BlogsLANG','Dziennik');
define('_ContentLANG','Treść');
define('_coppermineLANG','Fotogaleria');
define('_CPGlangLANG','Pomóż w tłumaczeniu');
define('_DownloadsLANG','Pliki');
define('_EncyclopediaLANG','Encyklopedia');
define('_ForumsLANG','Forum społeczności');
define('_ContactLANG','Kontakt');
define('_FAQLANG','CZP - Pomoc');
define('_Members_ListLANG','Lista członków');
define('_NewsLANG','Artykuły');
define('_ReviewsLANG','Opinie');
define('_SearchLANG','Szukaj');
define('_StatisticsLANG','Statystyki');
define('_Stories_ArchiveLANG','Archiwum artykułów');
define('_Submit_NewsLANG','Dodaj artykuł');
define('_SurveysLANG','Ankiety');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Tematy');
define('_Private_MessagesLANG','Moje wiadomości prywatne');
define('_Tell_a_FriendLANG','Powiadom znajomych');
define('_Web_LinksLANG','Linki');
define('_Your_AccountLANG','Moje konto');
define('_CPG_EventsLANG','Kalendarz');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Languages!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Groups');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Headlines');

define('_COMMUNICATION','Komunikacja');
define('_FRIENDS','Przyjaciele');
define('_STORE','Sklep');
define('_PRODUCTS','Produkty');
define('_DONATE','Wspomóż');
define('_HELP','Pomoc');
define('_GALLERIES','Galerie');
define('_DOCS','Dokumentacja');
define('_RULES','Zasady i uregulowania');
define('_MENU','Menu główne');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','<strong>Jesteś</strong> subskrybentem<br />naszego biuletynu');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','<strong>Nie jesteś</strong> subskrybentem<br />naszego biuletynu');
define('_NEWSLETTERBLOCKREGISTER','Musisz się<br /><strong>zarejestrować</strong>,<br />aby otrzymywać nasz biuletyn');
define('_NEWSLETTERBLOCKSUBSCRIBE','Zapisz się');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Wypisz się');
define('_NEWSLETTERBLOCKREGISTERNOW','Zarejestruj się teraz!');
/* END Newsletter Block */

/* START class phpmailer lang array */
$PHPMAILER_LANG = array();
$PHPMAILER_LANG['provide_address'] = 'Musisz podać przynajmniej jeden adres odbiorczy.';
$PHPMAILER_LANG['mailer_not_supported'] = ' program wysyłający pocztę nie jest obsługiwany.';
$PHPMAILER_LANG['execute'] = 'Nie można wykonać: ';
$PHPMAILER_LANG['instantiate'] = 'Could not instantiate mail function.';
$PHPMAILER_LANG['authenticate'] = 'Błąd SMTP: Nie można uwierzytelnić.';
$PHPMAILER_LANG['from_failed'] = 'Nie udało się wysłać Z następujących adresów: ';
$PHPMAILER_LANG['recipients_failed'] = 'Błąd SMTP: Nie udało się wysłać do następujących odbiorców: ';
$PHPMAILER_LANG['data_not_accepted'] = 'Błąd SMTP: Dane nie zostały przyjęte.';
$PHPMAILER_LANG['connect_host'] = 'Błąd SMTP: Nie można połączyć się z hostem SMTP.';
$PHPMAILER_LANG['file_access'] = 'Nie można uzyskać dostępu do pliku: ';
$PHPMAILER_LANG['file_open'] = 'Błąd: Nie można otworzyć pliku: ';
$PHPMAILER_LANG['encoding'] = 'Nieznane kodowanie: ';
/* END class phpmailer lang array */

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_SAVECHANGES','Zapisz zmiany');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Język');
define('_FUNCTIONS','Funkcje');
define('_SHOW','Pokaż');
define('_TO','Do');
define('_DAY','Dzień');
define('_LAST','Ostatnich');
define('_ACTIVE','Aktywny');
define('_DEACTIVATE','Deaktywuj');
define('_INACTIVE','Nieaktywny');
define('_ACTIVATE','Aktywuj');
define('_ACTIVATE2','Aktywować?');
define('_VIEW','Wyświetlaj');
define('_VIEWPRIV','Wyświetlaj');
define('_MVADMIN','tylko administratorom');
define('_MVUSERS','tylko zarejestrowanym użytkownikom');
define('_MVANON','tylko anonimowym użytkownikom');
define('_MVALL','wszystkim odwiedzającym');
define('_IMAGE','Obrazek');
define('_GO','Dalej!');
define('_OPTION','Opcja');
define('_CATEGORY','Kategoria');
define('_SUBCATEGORY','Podkategoria');
define('_ID','ID');
define('_EXPIRATION','Ważność');
define('_DAYS','dni');
define('_WARNING','Uwaga');
define('_POLLTITLE','Tytuł ankiety');
define('_POLLEACHFIELD','Wpisz po jednej opcji w polu');
define('_ADDCATEGORY','Dodaj nową kategorię');
define('_PAGEBREAK','Jeśli chcesz utworzyć artykuł wielostronicowy wpisz <b>&lt;!--pagebreak--&gt;</b> w miejscu przełamania strony.');
define('_SIGNATURE','Podpis');
define('_DESCRIPTION','Opis');
define('_EDITCATEGORY','Edytuj kategorię');
define('_IN','w');
define('_DESCRIPTION255','Opis: (do 255 znaków)');
define('_MODCATEGORY','Zmień kategorię');
define('_SUBMITTER','Zgłaszający');
define('_VISIT','Odwiedź');
define('_EXTENDEDTEXT','Dalszy ciąg tekstu');
define('_CHECKCATEGORIES','Zaznacz kategorie');
define('_INCLUDESUBCATEGORIES','(włącz podkategorie)');
define('_CHECKSUBCATEGORIES','zaznacz podkategorie');
define('_VALIDATELINKS','Sprawdź linki');
define('_FAILED','Nie powiodło się!');
define('_BEPATIENT','(prosimy zachować cierpliwość)');
define('_VALIDATINGCAT','Sprawdzanie kategorii (i wszystkich podkategorii)');
define('_VALIDATINGSUBCAT','Sprawdzanie podkategorii');
define('_OK','W porządku!');
define('_CHECK','Zaznacz');
define('_IGNORE','Pomiń');
define('_HITS','Wywołań');
define('_FILESIZE', 'Wielkość pliku');
define("_EZTHEREIS","Są");
define("_EZSUBCAT","podkategorie");
define("_EZATTACHEDTOCAT","w tej kategorii");
define("_EZBROKENLINKS","Niedziałające linki");
define("_DELEZLINKCATWARNING","UWAGA: Czy na pewno chcesz usunąć tę kategorię?<br /> Usuniesz jednocześnie wszystkie podkategorie wraz ze wszystkimi podkategoriami i znajdującymi się w nich linkami!");

// index.php
define('_DEFHOMEMODULE','Domyślny moduł na stronie startowej');
define('_MODULEINHOME','Moduł ładowany na stronie startowej:');
define('_CHANGE','Zmień');
define('_WHOSONLINE','Kto jest online');
define('_NP_ADMIN','Notatnik');
define('_NP_LOCKED','Notatnik został zablokowany<br />Tylko administrator (superużytkownik) może go odblokować');
define('_NP_SAVE','Zapisz notatki');
define('_NP_UNLOCK','Odblokuj notatnik');
define('_NP_LOCK','Zablokuj notatnik');
// news
define('_STICKY','Artykuły przyklejone');
define('_ARTICLEUP','Przesuń artykuł wyżej');
define('_ARTICLEDOWN','Przesuń artykuł niżej');
define('_UNSTICK','Odklej');
define('_STICK','Przyklejony');
define('_AUTOMATEDARTICLES','Zaplanowane artykuły');
define('_STORYID','ID artykułu');
define('_CURRENTPOLL','Obecny sondaż');

// admin.php
define('_ADMINISTRATION','Administracja');
define('_NOADMINYET','Jeszcze nie ma konta administratora, kontynuuj w celu utworzenia superużytkownika...');
define('_CREATEUSERDATA','Czy chcesz równocześnie utworzyć konto zwykłego użytkownika z tymi samymi danymi?');
define('_ADMINLOGIN','Zaloguj się do menu administracyjnego');
define('_ADMINID','Pseudonim');
define('_EMAIL','Email');
define('_SUBMIT','Wyślij');
define('_YOUARELOGGEDOUT','System pomyślnie Cię wylogował');
define('_PASSWDNOMATCH','Hasła nie są jednakowe. Powróć i podaj je jeszcze raz.');
define('_LOGIN_REMEMBERME','Zapamiętaj mnie');
define('_ADMINMENU_LOGOUT','Wyloguj się z menu administracyjnego');
define('_PASSWORD_MALFORMED','Hasło musi zawierać przynajmniej jedną cyfrę, jedną wielką literę i jedną małą');

// admins.php
define('_AUTHORSADMIN','Kontrola administratora');
define('_NAME','Imię');
define('_REQUIRED','(wymagane)');
define('_MODIFYINFO','Zmień informacje');
define('_DELAUTHOR','Usuń administratora');
define('_ADDAUTHOR','Dodaj nowego administratora');
define('_PERMISSIONS','Uprawnienia');
define('_SUPERUSER','Superużytkownik');
define('_SUPERWARNING','Ostrzeżenie: jeśli superużytkownik jest zaznaczony, administrator otrzyma pełne uprawnienia');
define('_ADDAUTHOR2','Dodaj administratora');
define('_RETYPEPASSWD','Ponownie wpisz hasło');
define('_FORCHANGES','(tylko w przypadku zmiany)');
define('_COMPLETEFIELDS','Musisz uzupełnić wszystkie wymagane pola');
define('_CREATIONERROR','Nie powiodło się dodawanie nowego administratora');
define('_AUTHORDEL','Usuń administratora');
define('_PUBLISHEDSTORIES','Ten administrator opublikował artykuły');
define('_SELECTNEWADMIN','Wybierz istniejącego administratora, któremu przypiszesz artykuły');
define('_GODNOTDEL','Superużytkownik nie może zostać usunięty!');
define('_MAINACCOUNT','Superużytkownik *');
define('_USERS','Użytkownicy');

// banners.php
define('_BANNERSADMIN','Administracja bannerami');
define('_DELETEBANNER','Usuń banner');
define('_SURETODELBANNER','Czy na pewno chcesz usunąć ten banner?');
define('_EDITBANNER','Edytuj banner');

// blocks.php
define('_BLOCKSADMIN','Administracja blokami');
define('_CENTER','na środku');
define('_CENTERUP','na środku u góry');
define('_CENTERDOWN','na środku u dołu');
define('_BLOCKFILE','(Plik bloku)');
define('_BLOCKFILE2','PLIK');
define('_BLOCKSYSTEM','SYSTEM');
define('_ADDNEWBLOCK','Dodaj nowy blok');
define('_RSSFILE','URL pliku RSS/RDF');
define('_ONLYHEADLINES','(tylko dla nagłówków)');
define('_REFRESHTIME','Częstotliwość odświeżania');
define('_CREATEBLOCK','Utwórz blok');
define('_EDITBLOCK','Edytuj blok');
define('_BLOCK','Blok');
define('_SAVEBLOCK','Zapisz blok');
define('_BLOCKACTIVATION','Aktywacja bloku');
define('_BLOCKPREVIEW','To jest podgląd');
define('_WANT2ACTIVATE','Chcesz aktywować ten blok?');
define('_ARESUREDELBLOCK','Czy na pewno chcesz usunąć');
define('_BLOCKUP','Przesuń blok wyżej');
define('_BLOCKDOWN','Przesuń blok niżej');
define('_BLOCKTOP','Przesuń blok na samą górę');
define('_BLOCKBOTTOM','Przesuń blok na sam dół');
define('_TITLE','Tytuł');
define('_POSITION','Pozycja');
define('_WEIGHT','Waga');
define('_STATUS','Status');
define('_LEFTBLOCK','Lewy blok');
define('_LEFT','po lewej');
define('_RIGHTBLOCK','Prawy blok');
define('_RIGHT','po prawej');
define('_TYPE','Typ');
define('_CUSTOM','Własny');
define('_FILENAME','Nazwa pliku');
define('_FILEINCLUDE','Jeśli wykorzystasz tę opcję, pomiń pola Treść i Częstotliwość odświeżania');
define('_VISIBLEINMODULES', 'Visible in modules');

// comments.php
define('_REMOVECOMMENTS','Usuń komentarze');
define('_SURETODELCOMMENTS','Czy na pewno chcesz usunąć zaznaczony komentarz i wszystkie dotyczące go odpowiedzi?');

// database.php
define('_SAVEDATABASE','Kopia zapasowa');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Obecny status');
define('_ACTIVATEPAGE','Aktywować tę stronę?');

// history.php
define('_EPHEMADMIN','Dziś w historii');
define('_ADDEPHEM','Dodaj nowy wpis');
define('_EPHEMDESC','Opis wpisu');
define('_EPHEMMAINT','Sprawdzanie wpisu');
define('_EPHEMEDIT','Edytuj wpis');
define('_EPHEMDELETE','Usuń wpis');

// headlines.php
define('_RSSFAIL','Zdaje się, że wystąpił problem z URL dotyczącym tej wstawki RSS');
define('_RSSTRYAGAIN','Sprawdź URL oraz nazwę pliku RSS i spróbuj ponownie');
define('_RSSCONTENT','(Treść RSS/RDF)');
define('_IFRSSWARNING','Jeśli podasz URL, wprowadzona treść zostanie pominięta');
define('_SETUPHEADLINES','Wybierz "Własny" i podaj URL do wstawki RSS lub po prostu wybierz witrynę z rozwijanej listy, z której chcesz pobierać nagłówki');
define('_HEADLINESADMIN','Administracja nagłówkami');
define('_ADDHEADLINE','Dodaj nagłówek');
define('_EDITHEADLINE','Edytuj nagłówki');
define('_SURE2DELHEADLINE','Czy na  pewno chcesz usunąć ten nagłówek?');

// messages.php
define('_MESSAGESADMIN','Administracja wiadomościami');
define('_MESSAGETITLE','Tytuł');
define('_MESSAGECONTENT','Treść');
define('_ALLMESSAGES','Przegląd wiadomości');
define('_EDITMSG','Edytuj wiadomość');
define('_ADDMSG','Dodaj wiadomość');
define('_REMOVEMSG','Czy na pewno chcesz usunąć tę wiadomość?');
define('_CHANGEDATE','Ustawić datę uruchomienia na dzisiejszą?');
define('_IFYOUACTIVE','Jeśli aktywujesz teraz tę wiadomość, data uruchomienia zostanie przestawiona na dzisiejszą');

// modules.php
define('_MODULESADMIN','Administracja modułami');
define('_HOMECONFIG','Konfiguracja strony startowej');
define('_MODULESADDONS','Moduły i dodatki');
define('_INHOME','Ustaw jako moduł strony startowej');
define('_MODULEHOMENOTE','<strong>.: Ważna informacja :.</strong><br />Nowe moduły dodane do folderu /modules/ zostaną automatycznie dodane do systemu<br />Usunięcie folderu modułu z tego katalogu automatycznie spowoduje usunięcie modułu z systemu<br /><br />Moduł o pogrubionym tytule oznacza moduł ustawiony jako strona startowa<br />Ten moduł nie może zostać deaktywowany lub ograniczony tylko do niektórych użytkowników');
define('_PUTINHOME','Ustaw jako stronę startową');
define('_SURETOCHANGEMOD','Czy na pewno chcesz zmienić swoją stronę startową z');
define('_NOTINMENU','[ <strong>&middot;</strong> ] oznacza moduł, który nie jest widoczny w bloku Moduły');
define('_SHOWINMENU','Pokazywać w bloku Moduły?');
define('_CUSTOMTITLE','Tytuł własny');
define('_MODULEEDIT','Edycja modułów');
define('_VERSION','Wersja');
define('_UPGRADE','Uaktualnij do %s');
define('_DBSIZE','Wielkość BD');
define('_CVS_EXPLAIN','Poprzez CVS możesz łatwo otrzymywać najświeższe wersje plików,<br /><b>ALE</b> te najświeższe wersje mogą zwierać błędy, ponieważ nie są to wersje oficjalne.<br />Jeśli znasz PHP możesz uaktualnić pliki klikając poniższy link.<br />Nie zapomnij o wcześniejszym zrobieniu zapasowej kopii zastępowanych plików!!!');
define('_CVS_UPDATE','Uaktualnij pliki CVS');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','Od');
define('_STAFF','Zespół');
define('_NL_RECIPS','Odbiorcy');
define('_SUBSCRIBEDUSERS','Subskrybenci');
define('_NL_ALLUSERS','Wszyscy użytkownicy');
define('_NL_ADMINS','Administratorzy');
define('_NL_REGARDS','Z najlepszymi pozdrowieniami');
define('_DISCARD','Zaniechaj');
define('_REVIEWTEXT','Przejrzyj swoją wiadomość i sprawdź pisownię');
define('_MANYUSERSNOTE','Z powodu dużej liczby użytkowników, którzy mają otrzymać ten biuletyn, zadanie to może trochę potrwać<br />Prosimy o zachowanie cierpliwości!');
define('_NL_NOUSERS','W wybranej grupie, do której ma być wysłany biuletyn, nie ma żadnego użytkownika<br />Powróć i wybierz inną grupę');
define('_NUSERWILLRECEIVE','użytkownicy otrzymają ten biuletyn');
define('_NLUNSUBSCRIBE',"Otrzymujesz tę wiadomość, ponieważ zaznaczyłeś, że chcesz otrzymywać biuletyny z naszej witryny.nnMożesz zrezygnować z tego w dowolnej chwili i kliknąć <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">ten</a> link.\n\nJeśli potrzebujesz więcej informacji na ten temat, wyślij list do <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">naszego administratora</a>");
define('_NEWSLETTERSENT','Biuletyn został wysłany');

// referers.php
define('_WHOLINKS','Które strony odsyłają do naszej witryny?');
define('_DELETEREFERERS','Usuń strony odsyłające');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Stopka');
define('_DEBUG', 'Debug');
define('_SITECONFIG','Konfiguracja witryny');
define('_GENSITEINFO','Ogólne informacje o witrynie');
define('_SITENAME','Tytuł witryny');
define('_SITEURL','URL witryny');
define('_SITELOGO','Nazwa pliku z logo witryny (znajdującego się w /images)');
define('_SITESLOGAN','Slogan witryny');
define('_STARTDATE','Kiedy witryna została uruchomiona');
define('_ADMINEMAIL','Email administratora');
define('_ITEMSTOP','Liczba pozycji w rankingu modułu Naj');
define('_STORIESHOME','Liczba artykułów widocznych na stronie głównej');
define('_OLDSTORIES','Liczba artykułów widocznych w bloku Starsze artykuły');
define('_ALLOWANONPOST','Zezwalaj niezarejestrowanym użytkownikom na przysyłanie artykułów');
define('_DEFAULTTHEME','Domyślny styl witryny');
define('_SHOWSEC','Pokazuj kod zabezpieczający');
define('_TOOLTIPS','Wyświetlaj podpowiedzi przy polach');
define('_UM_TOGGLE','Włącz monitor aktualizacji');
define('_UM_EXPLAIN','To spowoduje pobranie dwóch kawałków informacji z naszej strony, dragonflycms.org: aktualną wersję Dragonfly i sprawdzenie czy istnieją jakies ważne wiadomości odnoszące się do twojej wersji Dragonfly. Jedyne dane przesyłane na naszą stronę to numer wersj Dragonfly. <strong>Nie</strong> logujemy tych zapytań do naszego serwera.');
// maintenance
define('_MAINTENANCE','Tryb konserwacji');
define('_MESSAGE','Wiadomość');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','System językowy');
define('_SELLANGUAGE','Domyślny język witryny');
define('_LOCALEFORMAT','Miejscowy format czasu');
define('_ACTMULTILINGUAL','Aktywuj wielojęzyczny charakter witryny');
define('_ACTUSEFLAGS','Używaj flag zamiast rozwijanej listy');
// banners
define('_BANNERSOPT','System bannerowy');
define('_ACTBANNERS','Aktywować system bannerowy?');
// footer
define('_FOOTERMSG','Stopka strony');
define('_FOOTERLINE1','Stopka, pierwsza linijka');
define('_FOOTERLINE2','Stopka, druga linijka');
define('_FOOTERLINE3','Stopka, trzecia linijka');
// backend
define('_BACKENDCONF','Wstawka RSS');
define('_BACKENDTITLE','Tytuł wstawki');
define('_BACKENDLANG','Język wstawki');
// mail stories
define('_MAIL2ADMIN','Nadesłane artykuły oczekujące na rozpatrzenie');
define('_NOTIFYSUBMISSION','Powiadamiać administratora o artykułach oczekujących na rozpatrzenie?');
define('_EMAIL2SENDMSG','Adres email odbiorcy');
define('_EMAILSUBJECT','Temat listu');
define('_EMAILMSG','Treść listu');
define('_EMAILFROM','Adres email nadawcy');
// comments
define('_COMMENTSOPT','System komentarzy');
define('_COMMENTSLIMIT','Ucinaj komentarze dłuższe niż __ znaków ');
define('_COMMENTSMOD','Zezwalać na moderowanie komentarzy?');
define('_MODADMIN','Tak, przez administratorów');
define('_MODUSERS','Tak, przez użytkowników');
define('_NOMOD','NIe, nie używaj moderowania');
// adminmenu
define('_GRAPHICOPT','Układ menu administracyjnego');
define('_BOTH','Jeden i drugi');
define('_GRAPHICAL','Graficzny');
define('_SIDEBLOCK','W bloku bocznym');
// miscellaneous
define('_MISCOPT','Różne');
define('_ACTIVATEHTTPREF','Aktywować rejestrowanie stron odsyłających?');
define('_MAXREF','Ustal limit liczby stron odsyłających');
define('_COMMENTSPOLLS','Aktywować system komentarzy do ankiet?');
define('_COMMENTSARTICLES','Aktywować system komentarzy do artykułów?');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','System cenzurowania');
define('_CENSORMODE','Tryb dopasowywania');
define('_NOFILTERING','Bez filtrowania');
define('_EXACTMATCH','Dokładne dopasowanie');
define('_MATCHBEG','Dopasowanie do początku tesktu');
define('_MATCHANY','Dopasowanie do dowolnej części tekstu');
define('_CENSORREPLACE','Zastąpienie niedozwolonego słowa');
// email
define('_EMAILOPTIONS','System pocztowy');
define('_ALLOW_HTML_EMAIL','Zezwalać na używanie HTML w listach?');
define('_USE_SMTP','Używaj serwera SMTP zamiast funkcji pocztowej PHP');
define('_SMTP_HOST','Adres hosta SMTP  (smtp.example.com)');
define('_USE_SMTP_AUTH','Czy serwer SMTP wymaga uwierzytelnienia?');
define('_SMTP_USER_NAME','Użytkownik SMTP');
define('_SMTP_USER_PASS','Hasło SMTP');

// cpg_adminmenu.php
define('_ADMINMENU','Menu administracyjne');
define('_ADMINLOGOUT','Wyloguj się');
define('_AMENU0','System');
define('_AMENU1','Ogólne');
define('_AMENU2','Użytkownicy');
define('_AMENU3','Wiadomości');
define('_AMENU4','Fora');
define('_AMENU5','Informacyjne');
define('_AMENU6','Odsyłające');
define('_AMENU7','Commerce');
define('_AMENU8','Multimedia');
define('_AMENU9','Moduły');
define('_BMENU1','Help');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','Ustawienia główne');
define('_DATABASE','Baza danych');
define('_BLOCKS','Bloki');
define('_MODULES','Moduły');
define('_EDITADMINS','Administratorzy');
define('_MESSAGES','Wiadomości');
define('_BANNERS','Bannery');
define('_HTTPREFERERS','Strony odsyłające');
define('_EDITUSERS','Użytkownicy');
define('_USERSCONFIG','Konfiguracja użytkowników');
define('_NEWSLETTER','Biuletyn');
define('_SUBMISSIONS','Zgłoszenia');
define('_ADDSTORY','Dodaj artykuł');
define('_TOPICS','Tematy');
define('_ADMPOLLS','Ankiety');
define('_EPHEMERIDS','Efemerydy');
define('_REVIEWS','Recenzje');
define('_ENCYCLOPEDIA','Encyklopedia');
define('_SURVEYS','Sondaże');
define('_SECTIONS','Sekcje');
define('_ARTICLES','Artykuły');
define('_FAQ','CZP');
define('_DOWNLOAD','Pliki');
define('_WEBLINKS','Linki');
define('_CONTENT','Treść');
define('_SYSINFO','System Info');
define('_REPORTABUG','Powiadom o błędzie');
//coppermine admin
define('_W_INSTALL','Która instalacja?');
define('_W_PAGE','Która strona?');
//security admin
define('_SECURITY','Security');
define('_PROTECTION','Protection');
define('_EMAIL_DOMAINS','E-Mail Domains');
define('_FLOODING','Flooding');
define('_UUA','Unknown User-Agents');
define('_FLOODING_TIP','Flooding: Delay<br /><em>timing between each warning</em>');
define('_BAN_TIP','Flooding: Ban Duration<br /><em>how long the ban will last for</em>');
define('_AUTO_UNBAN_TIP','Flooding: Auto Unban<br /><em>clean ban after duration time expires</em>');
define('_FOREVER','forever');
define('_REMOVE_SELECTED','Remove selected');

//errors for cpg_error
define('_ERROR','BŁĄD');
define('_SEC_ERROR','Błąd zabezpieczeń');
define('_ERROR_NOT_SET','%s nie jest ustalone');
define('_ERROR_NO_POST','Przysyłanie z innego hosta jest niedozwolone...');
define('_ERROR_NO_GET','Żądanie GET nie jest dozwolone w tej funkcji...');
define('_ERROR_BAD_CHAR','Znaki użyte w Twoim żądaniu %s są zabronione...');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','Próbowałeś(aś) otworzyć stronę z nieprawidłowego odsyłacza...');
define('_ERROR_NONE_TO_DISPLAY','Brak %s do wyświetlenia');
define('_ERROR_DELETE_CONF','Czy na pewno chcesz usunąć %s?');
define('_ERROR_NO_EXIST','%s nie istnieje');
define('_ERROR_ALREADYEXIST','%s już istnieje');
define('_TASK_COMPLETED','Operacja zakończona!');
define('_CONFIRM','Confirm');
define('_FOOTER_COPYRIGHTS', 'Interactive software released under <a href="http://dragonflycms.org/GNUGPL.html" target="_blank" title="GNU Public License Agreement">GNU GPL</a>,	<a href="'.getlink('credits').'">Code Credits</a>,	<a href="'.getlink('privacy_policy').'">Privacy Policy</a>');

# time
$LNG = array('_time' => array(
'l' => array('Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota'),
'D' => array('Pn', 'Pn', 'Wt', 'Śr', 'Cz', 'Pt', 'Sb'),
'F' => array(1=>'Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień'),
'M' => array(1=>'stycz', 'lut', 'marca', 'kwiet', 'May', 'czerw', 'lip', 'sierp', 'wrz', 'paźdź', 'list', 'grud'),
));
$LNG['_time']['l'][7] =& $LNG['_time']['l'][0];
$LNG['_time']['D'][7] =& $LNG['_time']['D'][0];
