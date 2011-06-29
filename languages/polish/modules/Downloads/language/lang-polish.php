<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com
  CPG-lang (c)2004 Akamu Akamai
  
  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version.
  This program comes without any warranty.
  $Source: /cvs/languages/polish/modules/Downloads/language/lang-polish.php,v $
  $Revision: 1.2 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:39 $
***********************************************************************/
if (!defined('CPG_NUKE')) { die('You do not have permission to access this file'); }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','The download you\'ve requested doesn\'t exists.');
define('_PREVIOUS','Poprzednia strona');
define('_NEXT','Następna strona');
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
define('_FILESIZE','Rozmiar pliku');
define('_VERSION','Wersja');
define('_AUTHOR','Autor');
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
define('_DOWNLOADSNOTUSER8','<a href="modules.php?name=Your_Account&amp;op=new_user">Zarejestruj konto</a>');
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
define('_DONLYREGUSERSMODIFY','Only registered users can suggest downloads modifications. Please <a href="'.getlink("Your_Account").'">register or login</a>.');
define('_REQUESTDOWNLOADMOD','Zażądaj modyfikacji pliku');
define('_DOWNLOADID','ID pliku');
define('_DLETSDECIDE','Wpisy od użytkowników, takich jak Ty, pomogą innym odwiedzającym zdecydować się, który z plików warto ściągnąć.');
define('_DRATENOTE4','Możesz zobaczyć listę <a href="modules.php?name=Downloads&d_op=TopRated">najwyżej ocenionych zasobów</a>.');
define('_POPULAR','Popularność');
define('_TOPRATED','Najwyżej ocenione');
define('_ADDITIONALDET','Dodatkowe informacje');
define('_EDITORREVIEW','Przegląd redaktora');
define('_REPORTBROKEN','Zgłoś nieczynne linki');
define('_AND','i');
define('_INDB','w naszej bazie');
define('_INSTRUCTIONS','Instrukcje');
define('_USERANDIP','Nazwa użytkownika i adres IP są rejestrowane, więc prosimy nie atakować systemu.');
define('_LDESCRIPTION','Opis: (maks. 255 znaków)');
define('_CHECKFORIT','Nie odpisuj na list. Sprawdzimy wkrótce Twój link.');
define('_LASTWEEK','Ostatni tydzień');
define('_LAST30DAYS','Ostatnie 30 dni');
define('_1WEEK','1 tydzień');
define('_2WEEKS','2 tygodnie');
define('_30DAYS','30 dni');
define('_ADDEDON','Dodano');
define('_RATING','Oceny');
define('_DETAILS','Detale');
define('_OF','z');
define('_TVOTESREQ','minimalna ilość wymaganych głosów');
define('_SHOWTOP','Pokaż Top');
define('_MOSTPOPULAR','Najbardziej popularne - Top');
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
define('_NUMBEROFRATINGS','Ilość ocen');
define('_NOREGUSERSVOTES','Brak głosów zarejestrowanych użytkowników');
define('_BREAKDOWNBYVAL','Awaria oceniania poprzez wartość');
define('_LTOTALVOTES','razem głosów');
define('_HIGHRATING','Najwyższe oceny');
define('_LOWRATING','Najniższe oceny');
define('_NUMOFCOMMENTS','Liczba komentarzy');
define('_WEIGHNOTE','* Nota: Stosunek ocen użytkowników zarejestrowanych do ocen użytkowników niezarejestrowanych');
define('_NOUNREGUSERSVOTES','Brak głosów niezarejestrowanych użytkowników');
define('_WEIGHOUTNOTE','* Nota: Stosunek ocen użytkowników zarejestrowanych do ocen innych użytkowników');
define('_NOOUTSIDEVOTES','Brak zewnętrznych głosów');
define('_OUTSIDEVOTERS','Głosujący z zewnątrz');
define('_UNREGISTEREDUSERS','Niezarejestrowanych użytkowników');
define('_PROMOTEYOURSITE','Wypromuj swoją stronę');
define('_PROMOTE01','Może jesteś zainteresowany(a) kilkoma dostępnymi opcjami zdalnego oceniania strony? To pozwoli Ci umieścić obraz (lub nawet formularz) na Twojej stronie, aby podnieść liczbę głosów na Twoją stronę. Prosimy wybrać jedną z opcji umieszczonych poniżej:');
define('_TEXTLINK','Tekst linku');
define('_PROMOTE02','Jedyny sposób podłączenia się do formularza ocen to prosty link tekstowy:');
define('_HTMLCODE1','Kod HTML, który trzeba zastosować w tym przypadku, to:');
define('_THENUMBER','Numer');
define('_IDREFER','Numer ID Twojej strony w bazie danych $sitename. Upewnij się, czy taki numer istnieje.');
define('_BUTTONLINK','Link przyciskowy');
define('_PROMOTE03','Jeśli szukasz niewiele ponad prosty link tekstowy, to może chcesz zastosować link przyciskowy:');
define('_RATEIT','Oceń tę stronę!');
define('_HTMLCODE2','Kod źródłowy powyższego przycisku to:');
define('_REMOTEFORM','Zdalny formularz głosowania');
define('_PROMOTE04','Jeżeli będziesz tu oszukiwać, usuniemy Twój link. Mówimy, że to jest zdalny formularz głosowania, który wygląda tak');
define('_VOTE4THISSITE','Głosuj na tę stronę!');
define('_HTMLCODE3','Użycie tego formularza powoli użytkownikom na ocenę Twego zasobu bezpośrednio z Twojej strony i zapisanie wyniku tutaj. Powyższy formularz jest wyłączony, ale następujący kod źródłowy będzie działał jeżeli po prostu skopiujesz go i wkleisz na swoją stronę. Kod źródłowy pokazujemy poniżej:');
define('_PROMOTE05','Dziękujemy! Powodzenia w ocenach!');
define('_THANKSBROKEN','Dziękujemy za pomoc w utrzymaniu integralności tego katalogu.');
define('_SECURITYBROKEN','Z powodów bezpieczeństwa Twoja nazwa użytkownika i adres IP będą zapisywane.');
define('_THANKSFORINFO','Dziękujemy za informacje.');
define('_LOOKTOREQUEST','Zajrzymy niebawem w Twoją sugestię.');
define('_SENDREQUEST','Wyślij żądanie');
define('_THANKSTOTAKETIME','Dziękujemy za spędzenie czasu na ocenę strony');
define('_RETURNTO','Powrót do');
define('_RATENOTE1','Prosimy nie głosować na ten sam zasób więcej niż raz.');
define('_RATENOTE2','Skala jest od 1 do 10, gdzie 1 znaczy kiepski i 10 znaczy wspaniały.');
define('_RATENOTE3','Prosimy o obiektywizm w głosowaniu, jeśli ktoś otrzyma 1 i 10, ocena nie będzie zbyt użyteczna.');
define('_RATENOTE5','Nie głosuj na własne zasoby lub zasoby konkurencji.');
define('_YOUAREREGGED','Jesteś zarejestrowanym i zalogowanym użytkownikiem.');
define('_FEELFREE2ADD','Swobodnie dodaj komentarz na temat tego pliku.');
define('_YOUARENOTREGGED','Nie jesteś zarejestrowanym użytkownikiem lub się nie zalogowałeś(aś).');
define('_IFYOUWEREREG','Jeśli się zarejestrujesz, możesz dodawać komentarze na tej stronie.');
define('_MODIFY','Modyfikuj');
define('_COMPLETEVOTE1','Twój głos ma duże znaczenie dla nas.');
define('_COMPLETEVOTE2','Głosowałeś na ten zasób $anonwaitdays dni temu.');
define('_COMPLETEVOTE3','Głosuj tylko raz.<br>Wszystkie głosy są logowane i sprawdzane.');
define('_COMPLETEVOTE4','Nie możesz głosować na link, który sam dodałeś.<br>Wszystkie głosy są logowane i sprawdzane.');
define('_COMPLETEVOTE5','Nie wybrana ocena - głos nie zaliczony');
define('_COMPLETEVOTE6','Tylko jeden głos dozwolony raz na $outsidewaitdays dni.');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_EZTRANSFERDOWNLOADS','Transfer all downloads from category');
define('_DELEZDOWNLOADSCATWARNING','WARNING : Are you sure you want to delete this category? You will delete all sub-categories and attached downloads as well!');
define('_DELCONTENTCAT','WARNING: Are you sure you want to delete this category? Pages under this category, if they exist, will not be removed, but will not be attached to any category.');
define('_DELCATEGORY','Delete Category');
define('_DOWNLOADTITLE','Download Title');
define('_DOWNLOADSINDB','Downloads in our Database');
define('_DOWNLOADSWAITINGVAL','Downloads Waiting for Validation');
define('_CLEANDOWNLOADSDB','Clean Downloads Votes');
define('_BROKENDOWNLOADSREP','Broken Downloads Reports');
define('_DOWNLOADMODREQUEST','Download Modification Requests');
define('_ADDNEWDOWNLOAD','Add a New Download');
define('_MODDOWNLOAD','Modify a Download');
define('_WEBDOWNLOADSADMIN','Web Downloads Administration');
define('_DNOREPORTEDBROKEN','No reported broken downloads.');
define('_DUSERREPBROKEN','User Reported Broken Downloads');
define('_DIGNOREINFO','Ignore (Deletes all <b><i>requests</i></b> for a given download)');
define('_DDELETEINFO','Delete (Deletes <b><i>broken download</i></b> and <b><i>requests</i></b> for a given download)');
define('_DOWNLOADOWNER','Download Owner');
define('_DUSERMODREQUEST','User Download Modification Requests');
define('_DOWNLOADVALIDATION','Download Validation');
define('_CHECKALLDOWNLOADS','Check ALL Downloads');
define('_VALIDATEDOWNLOADS','Validate Downloads');
define('_NEWDOWNLOADADDED','New Download added to the Database');

