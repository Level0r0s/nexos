<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com
  Based on Journey Links Hack
  Copyright (c) 2000 by James Knickelbein
  Journey Milwaukee
  http://www.journeymilwaukee.com
  
  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version.
  This program comes without any warranty.
  $Source: /cvs/languages/polish/modules/Web_Links/language/lang-polish.php,v $
  $Revision: 1.2 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:40 $
***********************************************************************/
if (!defined('CPG_NUKE')) { die('You do not have permission to access this file'); }  
  
global $sitename, $anonwaitdays, $outsidewaitdays;
define('_PREVIOUS','Poprzednia strona');
define('_NEXT','Następna strona');
define('_YOURNAME','Twoje imię i nazwisko');
define('_CATEGORIES','Kategorie');
define('_LVOTES','Głosów');
define('_TOTALVOTES','Razem głosów:');
define('_LINKTITLE','Tytuł linku');
define('_HITS','Odsłon');
define('_THEREARE','Aktualnie jest(są)');
define('_NOMATCHES','Brak rezultatów wyszukiwania');
define('_SCOMMENTS','Komentarze');
define('_ADDLINK','Dodaj link');
define('_POPULAR','Popularność');
define('_TOPRATED','Najwyżej ocenione');
define('_RANDOM','Losowo');
define('_LINKSMAIN','Główna');
define('_LINKCOMMENTS','Komentarze do linków');
define('_ADDITIONALDET','Dodatkowe informacje');
define('_EDITORREVIEW','Przegląd redaktora');
define('_REPORTBROKEN','Zgłoś nieczynne linki');
define('_LINKSMAINCAT','Główne kategorie');
define('_AND','i');
define('_INDB','w naszej bazie');
define('_ADDALINK','Dodaj nowy link');
define('_INSTRUCTIONS','Instrukcje');
define('_SUBMITONCE','Wyślij dany link tylko raz.');
define('_POSTPENDING','Wszystkie wysyłane linki będą weryfikowane.');
define('_USERANDIP','Nazwa użytkownika i adres IP są rejestrowane, więc prosimy nie atakować systemu.');
define('_PAGETITLE','Tytuł strony');
define('_PAGEURL','Adres strony');
define('_YOUREMAIL','Twój adres e-mail');
define('_LDESCRIPTION','Opis: (maks. 255 znaków)');
define('_ADDURL','Dodaj ten adres');
define('_LINKSNOTUSER1','Nie jesteś zarejestrowany(a) lub zalogowany(a) jako użytkownik.');
define('_LINKSNOTUSER2','Jeśli się zarejestrujesz, będziesz mógł(mogła) dodawać linki na tej stronie.');
define('_LINKSNOTUSER3','Rejestracja użytkownika to łatwy i szybki proces.');
define('_LINKSNOTUSER4','Dlaczego wymagamy rejestracji, aby mieć dostęp do niektórych opcji?');
define('_LINKSNOTUSER5','Dlatego, że oferujemy zawartość wyłącznie wysokiej jakości,');
define('_LINKSNOTUSER6','każda pozycja jest indywidualnie sprawdzana i zatwierdzana przez nasz zespół.');
define('_LINKSNOTUSER7','Mamy nadzieję, że oferujemy Ci wyłącznie wartościowe informacje.');
define('_LINKSNOTUSER8','<a href="modules.php?name=Your_Account&amp;op=new_user">Zarejestruj konto</a>');
define('_LINKALREADYEXT','BŁĄD: Ten adres już istnieje w bazie!');
define('_LINKNOTITLE','BŁĄD: Musisz podać TYTUŁ Twego URL-a!');
define('_LINKNOURL','BŁĄD: Musisz podać Twój URL!');
define('_LINKNODESC','BŁĄD: Musisz podać OPIS Twego URL-a!');
define('_LINKRECEIVED','Otrzymaliśmy Twoją propozycję linku. Dziękujemy!');
define('_EMAILWHENADD','Otrzymasz e-mail, kiedy go zatwierdzimy.');
define('_CHECKFORIT','Nie odpisuj na list. Wkrótce sprawdzimy Twój link.');
define('_NEWLINKS','Nowe linki');
define('_TOTALNEWLINKS','W sumie nowych linków');
define('_LASTWEEK','Ostatni tydzień');
define('_LAST30DAYS','Ostatnie 30 dni');
define('_1WEEK','1 tydzień');
define('_2WEEKS','2 tygodnie');
define('_30DAYS','30 dni');
define('_TOTALFORLAST','W sumie nowych linków przez');
define('_ADDEDON','Dodano');
define('_RATING','Oceny');
define('_RATESITE','Oceń tę stronę');
define('_DETAILS','Detale');
define('_BESTRATED','Najwyżej ocenione linki - NAJ');
define('_OF','z');
define('_TRATEDLINKS','w sumie ocenionych linków');
define('_TVOTESREQ','minimalna ilość wymaganych głosów');
define('_SHOWTOP','Pokaż NAJ');
define('_MOSTPOPULAR','Najbardziej popularne - NAJ');
define('_OFALL','ze wszystkich');
define('_SORTLINKSBY','Sortuj linki według');
define('_SITESSORTED','Strona aktualnie sortowana według');
define('_POPULARITY','Popularność');
define('_SELECTPAGE','Wybierz stronę');
define('_MAIN','Główna');
define('_NEWTODAY','Nowe dzisiaj');
define('_NEWLAST3DAYS','Nowe w ostatnich 3 dniach');
define('_NEWTHISWEEK','Nowe w tym tygodniu');
define('_CATNEWTODAY','Nowe linki w tej kategorii dodane dzisiaj');
define('_CATLAST3DAYS','Nowe linki w tej kategorii dodane w ostatnich 3 dniach');
define('_CATTHISWEEK','Nowe linki w tej kategorii dodane w tym tygodniu');
define('_POPULARITY1','Popularność (Od najmniej do najczęściej odwiedzanych)');
define('_POPULARITY2','Popularność (Od najczęściej do najmniej odwiedzanych)');
define('_TITLEAZ','Tytuły (od A do Z)');
define('_TITLEZA','Tytuły (od Z do A)');
define('_DATE1','Data (stare linki pokazane na początku)');
define('_DATE2','Data (nowe linki pokazane na początku)');
define('_RATING1','Ocena (od najniższych do najniższych wyników)');
define('_RATING2','Ocena (od najwyższych do najniższych wyników)');
define('_SEARCHRESULTS4','Wyniki wyszukiwania dla');
define('_USUBCATEGORIES','podkategorie');
define('_LINKS','Linki');
define('_TRY2SEARCH','Spróbuj poszukać');
define('_INOTHERSENGINES','w innych wyszukiwarkach');
define('_EDITORIAL','Redagowany');
define('_LINKPROFILE','Profil linku');
define('_EDITORIALBY','Redagowany przez');
define('_NOEDITORIAL','Aktualnie brak na tej stronie.');
define('_VISITTHISSITE','Odwiedź tę stronę');
define('_RATETHISSITE','Oceń ten zasób');
define('_ISTHISYOURSITE','Czy to Twój zasób?');
define('_ALLOWTORATE','Pozwól innym użytkownikom na ocenianie!');
define('_LINKRATINGDET','Szczegóły oceny linku');
define('_OVERALLRATING','Ocena ogólna');
define('_TOTALOF','Razem');
define('_USER','Użytkownik');
define('_USERAVGRATING','Ocena średnia użytkownika');
define('_NUMRATINGS','# ocen');
define('_EDITTHISLINK','Edytuj ten link');
define('_REGISTEREDUSERS','Zarejestrowanych użytkowników');
define('_NUMBEROFRATINGS','Ilość ocen');
define('_NOREGUSERSVOTES','Brak głosów zarejestrowanych użytkowników');
define('_BREAKDOWNBYVAL','Awaria oceniania poprzez wartość');
define('_LTOTALVOTES','razem głosów');
define('_LINKRATING','Oceny linków');
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
define('_PROMOTE01','Może jesteś zainteresowany(a) kilkoma dostępnymi opcjami zdalnego oceniania strony?. To pozwoli Ci umieścić obraz (lub nawet formularz) na Twojej stronie, aby podnieść liczbę głosów na Twoją stronę. Prosimy wybrać jedną z opcji umieszczonych poniżej:');
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
define('_LINKVOTE','Głosuj!');
define('_HTMLCODE3','Użycie tego formularza powoli użytkownikom na ocenę Twego zasobu bezpośrednio z Twojej strony i zapisanie wyniku tutaj. Powyższy formularz jest wyłączony, ale następujący kod źródłowy będzie działał gdy po prostu skopiujesz go i wkleisz na swoją stronę. Kod źródłowy pokazujemy poniżej:');
define('_PROMOTE05','Dziękujemy! Powodzenia w ocenach!');
define('_THANKSBROKEN','Dziękujemy za pomoc w utrzymaniu integralności tego katalogu.');
define('_THANKSFORINFO','Dziękujemy za informacje.');
define('_LOOKTOREQUEST','Zajrzymy niebawem w Twoją sugestię.');
define('_ONLYREGUSERSMODIFY','Tylko zarejestrowany użytkownik może zasugerować modyfikacje. Proszę się <a href="modules.php?name=Your_Account&amp;op=new_user">zarejestrować lub zalogować</a>.');
define('_REQUESTLINKMOD','Żądanie modyfikacji linku');
define('_LINKID','ID linku');
define('_SENDREQUEST','Wyślij żądanie');
define('_THANKSTOTAKETIME','Dziękujemy za spędzenie czasu na ocenę strony');
define('_LETSDECIDE','Wpisy od użytkowników, takich jak Ty, pomogą innym odwiedzającym zdecydować się, który z linków warto odwiedzić');
define('_RETURNTO','Powrót do');
define('_RATENOTE1','Prosimy nie głosować na ten sam zasób więcej niż raz.');
define('_RATENOTE2','Skala jest od 1 do 10, gdzie 1 znaczy kiepski i 10 znaczy wspaniały.');
define('_RATENOTE3','Prosimy o obiektywizm w głosowaniu, jeśli ktoś otrzyma 1 i 10, ocena nie będzie zbyt użyteczna.');
define('_RATENOTE4','Możesz zobaczyć listę <a href="modules.php?name=Web_Links&l_op=TopRated">najwyżej ocenionych zasobów</a>.');
define('_RATENOTE5','Nie głosuj na własne zasoby lub zasoby konkurencji.');
define('_YOUAREREGGED','Jesteś zarejestrowanym i zalogowanym użytkownikiem.');
define('_FEELFREE2ADD','Swobodnie dodaj komentarz na temat tej strony.');
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
define('_ADDMAINCATEGORY','Add a MAIN Category');
define('_ADDSUBCATEGORY','Add a SUB-Category');
define('_WEBLINKSADMIN','Web Links Administration');
define('_EZTRANSFERLINKS','Transfer all links from category');
define('_CLEANLINKSDB','Clean Links Votes');
define('_EZTRANSFER','Transfer');
define('_BROKENLINKSREP','Broken Links Reports');
define('_LINKMODREQUEST','Link Modification Requests');
define('_ADDNEWLINK','Add a New Link');
define('_MODLINK','Modify a Link');
define('_LINKSINDB','Links in our Database');
define('_LINKSWAITINGVAL','Links Waiting for Validation');
define('_ERRORURLEXIST','ERROR: This URL is already listed in the Database!');
define('_ERRORNOTITLE','ERROR: You need to type a TITLE for your URL!');
define('_ERRORNOURL','ERROR: You need to type a URL for your URL!');
define('_ERRORNODESCRIPTION','ERROR: You need to type a DESCRIPTION for your URL!');
define('_NEWLINKADDED','New Link added to the Database');
define('_YOURLINKAT','Your Link at');
define('_LINKVALIDATION','Link Validation');
define('_CHECKALLLINKS','Check ALL Links');
//define('_VALIDATELINKS','Validate Links');
//define('_FAILED','Failed!');
//define('_BEPATIENT','(please be patient)');
//define('_VALIDATINGCAT','Validating Category (and all subcategories)');
//define('_VALIDATINGSUBCAT','Validating Sub-Category');
?>