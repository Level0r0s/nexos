<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/polish/downloads.php,v $
  $Revision: 9.7 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:59 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','Żądany zasób nie istnieje.');
define('_CATEGORIES','Kategorie');
define('_LVOTES','Głosów');
define('_TOTALVOTES','Razem głosów:');
define('_THEREARE','Aktualnie jest(są)');
define('_NOMATCHES','Brak rezultatów wyszukiwania');
define('_SCOMMENTS','Komentarze');
define('_UNKNOWN','Nieznany');
define('_AUTHORNAME','Imię autora');
define('_AUTHOREMAIL','Adres email autora');
define('_DOWNLOADNAME','Nazwa programu');
define('_ADDTHISFILE','Dodaj ten plik');
define('_INBYTES','w bajtach');
//define('_FILESIZE','Rozmiar pliku');
//define('_VERSION','Wersja');
//define('_AUTHOR','Autor');
define('_HOMEPAGE','Strona WWW');
define('_DOWNLOADNOW','Ściągnij ten plik teraz!');
define('_RATERESOURCE','Oceń ten zasób');
define('_FILEURL','Link do pliku');
define('_ADDDOWNLOAD','Dodaj plik');
define('_DOWNLOADSMAIN','Główna');
define('_DOWNLOADCOMMENTS','Komentarz');
define('_DOWNLOADSMAINCAT','Główne kategorie działu plików');
define('_ADDADOWNLOAD','Dodaj nowy plik');
define('_DSUBMITONCE','Wyślij dany plik tylko raz.');
define('_DPOSTPENDING','Wszystkie pliki i linki przed ich opublikowaniem będą sprawdzane.');
define('_RESSORTED','Zawartość aktualnie sortowana według');
define('_DOWNLOADSNOTUSER1','Nie jesteś zarejestrowanym użytkownikiem albo się nie zalogowałeś(aś).');
define('_DOWNLOADSNOTUSER2','Jeśli się zarejestrujesz, będziesz mógł(mogła) dodać pliki na tę stronę.');
define('_DOWNLOADSNOTUSER3','Rejestracja użytkownika to łatwy i szybki proces.');
define('_DOWNLOADSNOTUSER4','Dlaczego wymagamy rejestracji, abyś miał(a) dostęp do niektórych opcji?');
define('_DOWNLOADSNOTUSER5','Dlatego, że oferujemy zawartość wyłącznie wysokiej jakości,');
define('_DOWNLOADSNOTUSER6','Każda pozycja jest indywidualnie sprawdzana i zatwierdzana przez nasz zespół.');
define('_DOWNLOADSNOTUSER7','Mamy nadzieję, że oferujemy Ci wyłącznie wartościowe pliki.');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink("Your_Account").'">Zarejestruj konto</a>');
define('_DOWNLOADALREADYEXT','BŁĄD: Ten adres już istnieje w bazie!');
define('_DOWNLOADNOTITLE','BŁĄD: Musisz podać TYTUŁ Twego URL-a!');
define('_DOWNLOADNOURL','BŁĄD: Musisz podać Twój URL-a!');
define('_DOWNLOADNODESC','BŁĄD: Musisz podać OPIS Twego URL-a!');
define('_DOWNLOADRECEIVED','Otrzymaliśmy Twoją propozycję do działu plików. Dziękujemy!');
define('_NEWDOWNLOADS','Nowe pliki');
define('_TOTALNEWDOWNLOADS','W sumie nowych plików');
define('_DTOTALFORLAST','W sumie nowych plików w ostatnich');
define('_DBESTRATED','Najwyżej ocenione pliki - Top');
define('_TRATEDDOWNLOADS','razem ocenionych plików');
define('_SORTDOWNLOADSBY','Sortuj pliki według');
define('_DCATNEWTODAY','Nowe pliki w tej kategorii dodane dzisiaj');
define('_DCATLAST3DAYS','Nowe pliki w tej kategorii dodane w ciągu ostatnich 3 dni');
define('_DCATTHISWEEK','Nowe pliki w tej kategorii dodane w ciągu ostatniego tygodnia');
define('_DDATE1','Data (stare pliki umieszczone na początku)');
define('_DDATE2','Data (nowe pliki umieszczone na początku)');
define('_DOWNLOADS','razy ściągany');
define('_DOWNLOADPROFILE','Profil');
define('_DOWNLOADRATINGDET','Szczegóły oceniania');
define('_EDITTHISDOWNLOAD','Edytuj ten wpis');
define('_DOWNLOADRATING','Oceny');
define('_DOWNLOADVOTE','Głosuj!');
define('_DONLYREGUSERSMODIFY','Tylko zarejestrowani użytkownicy mogą zgłaszać propozycje zmiany zasobów. <a href="'.getlink("Your_Account").'">Zarejestruj lub zaloguj się</a>.');
define('_REQUESTDOWNLOADMOD','Poproś o wprowadzenie zmiany zasobu');
define('_DOWNLOADID','ID pliku');
define('_DLETSDECIDE','Uwagi użytkowników, takich jak Ty, pomogą innym odwiedzającym zdecydować się, który z plików warto ściągnąć.');
define('_DRATENOTE4','Możesz zobaczyć listę <a href="'.getlink("Downloads&amp;d_op=TopRated").'">najwyżej ocenianych zasobów</a>.');
define('_POPULAR','Popularność');
define('_TOPRATED','Najwyżej oceniane');
define('_ADDITIONALDET','Dodatkowe informacje');
define('_EDITORREVIEW','Opinia redaktora');
define('_REPORTBROKEN','Zgłoś nieczynne linki');
define('_AND','i');
define('_INDB','w naszej bazie');
define('_INSTRUCTIONS','Instrukcje');
define('_USERANDIP','Nazwa użytkownika i adres IP są rejestrowane, prosimy więc nie atakować systemu.');
define('_LDESCRIPTION','Opis: (maks. 255 znaków)');
define('_CHECKFORIT','Nie odpisuj na list. Twój link zostanie wkrótce sprawdzony.');
define('_LASTWEEK','Ostatni tydzień');
define('_LAST30DAYS','Ostatnie 30 dni');
define('_1WEEK','1 tydzień');
define('_2WEEKS','2 tygodnie');
define('_30DAYS','30 dni');
define('_ADDEDON','Dodano');
define('_RATING','Oceny');
define('_DETAILS','Szczegóły');
define('_OF','z');
define('_TVOTESREQ','minimalna liczba wymaganych głosów');
define('_SHOWTOP','Pokaż Naj');
define('_MOSTPOPULAR','Najbardziej popularne - Naj');
define('_OFALL','wszystkich');
define('_POPULARITY','Popularność');
define('_SELECTPAGE','Wybierz stronę');
define('_MAIN','Główna');
define('_NEWTODAY','Nowe dzisiaj');
define('_NEWLAST3DAYS','Nowe w ostatnich 3 dniach');
define('_NEWTHISWEEK','Nowe w tym tygodniu');
define('_POPULARITY1','Popularność (od najmniej do najczęściej ściąganych)');
define('_POPULARITY2','Popularność (Od najczęściej do najmniej ściąganych)');
define('_TITLEAZ','Tytuły (od A do Z)');
define('_TITLEZA','Tytuły (od Z do A)');
define('_RATING1','Ocena (od najniższych do najwyższych wyników)');
define('_RATING2','Ocena (od najwyższych do najniższych wyników)');
define('_SEARCHRESULTS4','Wyniki wyszukiwania dla');
define('_USUBCATEGORIES','podkategorie');
define('_TRY2SEARCH','Spróbuj poszukać');
define('_INOTHERSENGINES','w innych wyszukiwarkach');
define('_EDITORIAL','Redagowany');
define('_EDITORIALBY','Redagowany przez');
define('_NOEDITORIAL','Aktualnie brak na tej stronie.');
define('_RATETHISSITE','Oceń ten zasób');
define('_ISTHISYOURSITE','Czy to Twój zasób?');
define('_ALLOWTORATE','Pozwól innym użytkownikom na ocenianie!');
define('_OVERALLRATING','Ocena ogólna');
define('_TOTALOF','Razem');
define('_USER','Użytkownik');
define('_USERAVGRATING','Ocena średnia użytkownika');
define('_NUMRATINGS','# ocen');
define('_REGISTEREDUSERS','Zarejestrowanych użytkowników');
define('_NUMBEROFRATINGS','Liczba ocen');
define('_NOREGUSERSVOTES','Brak głosów zarejestrowanych użytkowników');
define('_BREAKDOWNBYVAL','Podział ocen wg wartości');
define('_LTOTALVOTES','razem głosów');
define('_HIGHRATING','Najwyższe oceny');
define('_LOWRATING','Najniższe oceny');
define('_NUMOFCOMMENTS','Liczba komentarzy');
define('_WEIGHNOTE','*Uwaga: Stosunek ocen użytkowników zarejestrowanych do ocen użytkowników niezarejestrowanych');
define('_NOUNREGUSERSVOTES','Brak głosów niezarejestrowanych użytkowników');
define('_WEIGHOUTNOTE','*Uwaga: Stosunek ocen użytkowników zarejestrowanych do ocen innych użytkowników');
define('_NOOUTSIDEVOTES','Brak zewnętrznych głosów');
define('_OUTSIDEVOTERS','Głosujący z zewnątrz');
define('_UNREGISTEREDUSERS','Niezarejestrowanych użytkowników');
define('_PROMOTEYOURSITE','Wypromuj swoją stronę');
define('_PROMOTE01','Może jesteś zainteresowany(a) kilkoma dostępnymi opcjami zdalnego oceniania strony? To pozwoli Ci umieścić obraz (lub nawet formularz) na Twojej stronie, aby podnieść liczbę głosów na Twoją stronę. Prosimy wybrać jedną z opcji umieszczonych poniżej:');
define('_TEXTLINK','Tekst linku');
define('_PROMOTE02','Jeden ze sposobów utworzena linku do formularza ocen to prosty link tekstowy:');
define('_HTMLCODE1','Kod HTML, który trzeba zastosować w tym przypadku to:');
define('_THENUMBER','Numer');
define('_IDREFER','Numer ID Twojej strony w bazie danych witryny '.$sitename.'. Upewnij się, czy taki numer istnieje.');
define('_BUTTONLINK','Link przyciskowy');
define('_PROMOTE03','Jeśli szukasz nieco więcej ponad prosty link tekstowy, to może chcesz zastosować link przyciskowy:');
define('_RATEIT','Oceń tę stronę!');
define('_HTMLCODE2','Kod źródłowy powyższego przycisku to:');
define('_REMOTEFORM','Formularz zdalnego głosowania');
define('_PROMOTE04','Jeżeli będziesz oszukiwać, Twój link zostanie usunięty. Mówimy, że to jest formularz zdalnego głosowania, który wygląda tak');
define('_VOTE4THISSITE','Głosuj na tę stronę!');
define('_HTMLCODE3','Użycie tego formularza powoli użytkownikom na ocenę Twojego zasobu bezpośrednio z Twojej strony i zapisanie wyniku tutaj. Powyższy formularz jest wyłączony, ale następujący kod źródłowy będzie działał, jeżeli po prostu skopiujesz go i wkleisz na swoją stronę. Kod źródłowy pokazujemy poniżej:');
define('_PROMOTE05','Dziękujemy! Powodzenia w ocenach!');
define('_THANKSBROKEN','Dziękujemy za pomoc w utrzymaniu integralności tego katalogu.');
define('_SECURITYBROKEN','Z powodów bezpieczeństwa Twoja nazwa użytkownika i adres IP będą zapisywane.');
define('_THANKSFORINFO','Dziękujemy za informacje.');
define('_LOOKTOREQUEST','Wkrótce zapoznamy się z Twoją sugestią.');
define('_SENDREQUEST','Wyślij żądanie');
define('_THANKSTOTAKETIME','Dziękujemy za poświęcenie czasu na ocenę strony');
define('_RETURNTO','Powrót do');
define('_RATENOTE1','Prosimy nie głosować na ten sam zasób więcej niż jeden raz.');
define('_RATENOTE2','Skala jest od 1 do 10, gdzie 1 znaczy kiepski i 10 znaczy wspaniały.');
define('_RATENOTE3','Prosimy o obiektywizm w głosowaniu, jeśli ktoś otrzyma 1 i 10, ocena nie będzie zbyt użyteczna.');
define('_RATENOTE5','Nie głosuj na własne zasoby lub zasoby konkurencji.');
define('_YOUAREREGGED','Jesteś zarejestrowanym i zalogowanym użytkownikiem.');
define('_FEELFREE2ADD','Możesz dodać komentarz na temat tego pliku.');
define('_YOUARENOTREGGED','Nie jesteś zarejestrowanym użytkownikiem lub się nie zalogowałeś(aś).');
define('_IFYOUWEREREG','Jeśli się zarejestrujesz, możesz dodawać komentarze na tej stronie.');
define('_MODIFY','Zmień');
define('_COMPLETEVOTE1','Twój głos ma duże znaczenie dla nas.');
define('_COMPLETEVOTE2','Głosowałeś na ten zasób '.$anonwaitdays.' dni temu.');
define('_COMPLETEVOTE3','Głosuj tylko raz.<br>Wszystkie głosy są logowane i sprawdzane.');
define('_COMPLETEVOTE4','Nie możesz głosować na link, który sam dodałeś.<br>Wszystkie głosy są logowane i sprawdzane.');
define('_COMPLETEVOTE5','Nie wybrana ocena - głos nie zaliczony');
define('_COMPLETEVOTE6','Tylko jeden głos dozwolony raz na '.$outsidewaitdays.' dni.');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDDURL','Add this URL');
define('_EZTRANSFERDOWNLOAD','Transfer');
define('_EZTRANSFERDOWNLOADS','Transferuj wszystkie zasoby z kategorii');
define('_DELEZDOWNLOADSCATWARNING','UWAGA: Czy na pewno chcesz usunąć tę kategorię? Usuniesz także wszystkie podkategorie i ich zasoby!');
define('_DELCONTENTCAT','UWAGA: Czy na pewno chcesz usunąć tę kategorię? Należące do tej kategorii strony nie zostaną usunięte, ale nie będą przypisane do żadnej kategorii.');
define('_DELCATEGORY','Usuń kategorię');
define('_DOWNLOADTITLE','Tytuł zasobu');
define('_DOWNLOADSINDB','Zasoby w naszej bazie danych');
define('_DOWNLOADSWAITINGVAL','Zasoby oczekujące na sprawdzenie');
define('_CLEANDOWNLOADSDB','Wyczyść głosy oddane na zasoby');
define('_BROKENDOWNLOADSREP','Uszkodzone raporty pobrań');
define('_DOWNLOADMODREQUEST','Prośby o zmiany w zasobach');
define('_ADDNEWDOWNLOAD','Dodaj nowy zasób');
define('_MODDOWNLOAD','Zmień zasób');
define('_WEBDOWNLOADSADMIN','Administracja zasobami');
define('_DNOREPORTEDBROKEN','Nie ma informacji o uszkodzonych zasobach.');
define('_DUSERREPBROKEN','Uszkodzone zasoby zgłoszone przez użytkowników');
define('_DIGNOREINFO','Pomiń (Usuwa wszystkie <b><i>żądania</i></b> dotyczące danego zasobu)');
define('_DDELETEINFO','Usuń (Usuwa <b><i>uszkodzone zasoby</i></b> i <b><i>żądania</i></b> dotyczące danego zasobu)');
define('_DOWNLOADOWNER','Właściciel zasobu');
define('_DUSERMODREQUEST','Prośby użytkowników o zmianę zasobu');
define('_DOWNLOADVALIDATION','Sprawdzanie zasobów');
define('_CHECKALLDOWNLOADS','Sprawdź WSZYSTKIE zasoby');
define('_VALIDATEDOWNLOADS','Sprawdź zasoby');
define('_NEWDOWNLOADADDED','Do bazy danych dodano nowy zasób');
