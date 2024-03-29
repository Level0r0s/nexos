<?php
/***************************************************************************
 *                          lang_faq.php [Polish]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_faq.php,v 1.1 2004/08/04 05:01:18 djmaze Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

/* CONTRIBUTORS:
	2002-12-15	Philip M. White (pwhite@mailhaven.com)
		Fixed many minor grammatical problems.
*/
 
// 
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\";
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//


$faq[] = array("--","Problemy Logowania i Rejestracji");
$faq[] = array("Dlaczego nie mog� si� zalogowa�?", "A zarejestrowa�e� si�? Naprawd� musisz si� zarejestrowa� aby m�c si� logowa�. A mo�e zosta�e� wyrzucony z forum (je�li tak si� sta�o zobaczysz odpowiedni� informacj�)? W takim wypadku skontaktuj si� z webmasterem lub administratorem forum aby pozna� pow�d tego. Je�eli zarejestrowa�e� si�, nie zosta�e� wyrzucony a i tak nie mo�esz si� logowa� sprawd� ponownie sw�j login i has�o. Zazwyczaj to w�a�nie b��dny login lub has�o s� problemem, ale je�li tak nie jest skontaktuj si� z administratorem forum, gdy� problem mo�e le�e� po stronie b��dnej konfiguracji skryptu.");
$faq[] = array("Dlaczego w og�le musz� si� rejestrowa�?", "By� mo�e nie musisz, zale�y to od administratora forum czy musisz si� rejestrowa� by m�c si� wypowiedzie�. Jednak�e rejestracja da ci dost�p do dodatkowych funkcji niedost�pnych dla go�ci, takich jak w�asny emblemat, prywatne wiadomo�ci, wysy�anie emaili, subskrypcja grup u�ytkownik�w itd. Rejestracja zajmuje tylko chwil� i naprawd� zalecamy jej dokonanie.");
$faq[] = array("Dlaczego wci�� jestem wylogowywany?", "Je�eli nie zaznaczysz opcji <i>Loguj mnie automatycznie</i> podczas logowania na forum b�dziesz zawsze wylogowywany po pewnym czasie. To zapobiega wykorzystaniu twojego konta przez kogokolwiek innego. Aby pozostawa� zalogowanym zaznacz powy�sz� opcj�. Nie jest to zalecane, gdy korzystasz z publicznego komputera, np. w bibliotece, kawiarni internetowej czy na uczelni.");
$faq[] = array("Jak mog� zapobiec wy�wietlaniu mojej ksywki na li�cie obecnych u�ytkownik�w?", "W swoim profilu znajdziesz opcj� <i>Ukryj moj� obecno�� na forum</i>. Je�eli j� <i>w��czysz</i> b�dziesz widoczny na li�cie tylko dla administrator�w oraz dla siebie. B�dziesz liczony jako u�ytkownik ukryty.");
$faq[] = array("Zgubi�em moje has�o!", "Nie panikuj! Twoje has�o co prawda nie mo�e zosta� odzyskane, ale mo�na je wyczy�ci�. Aby to zrobi� przejd� na stron� logowania i kliknij <u>Zapomnia�em has�a</u>, oraz post�puj zgodnie z podanymi instrukcjami a szybko wr�cisz na forum");
$faq[] = array("Zarejestrowa�em si� ale nie mog� si� zalogowa�!", "Na pocz�tek sprawd� czy wpisujesz poprawny login i has�o. Je�eli te s� w porz�dku to problemem mo�e by� jedna z dw�ch rzeczy. Je�eli w��czone s� funkcje COPPA i klikn��e� odno�nik <u>Mam mniej ni� 13 lat</u> podczas rejestracji musisz post�pi� zgodnie z otrzymanymi instrukcjami. Je�eli tak nie jest to mo�e twoje konto wymaga aktywacji? Niekt�re fora wymagaj� aktywacji wszystkich nowych kont, albo przez samych u�ytkownik�w, albo przez administratora, zanim mo�na si� na nie logowa�. Po rejestracji powiniene� otrzyma� wiadomo�� czy wymagana jest aktywacja. Je�eli otrzyma�e� email post�puj zgodnie z instrukcjami w nim zawartymi, a je�li nie otrzyma�e� email'a, to czy jeste� pewien, �e poda�e� w�a�ciwy adres? Jednym z powod�w wykorzystania aktywacji jest redukcja dost�pu do forum os�b nieporz�danych, kt�re zechc� je spamowa� lub obra�a� u�ytkownik�w. Je�eli jeste� pewien, �e poda�e� w�a�ciwy email spr�buj skontaktowa� si� z administratorem forum.");
$faq[] = array("Rejestrowa�em si� kiedy� ale nie mog� si� ju� logowa�!", "Najbardziej prawdopodobne powody takiego stanu to: wpisa�e� niew�a�ciwy login i has�o (poszukaj email'a, kt�ry dosta�e� po rejestracji) lub administrator usun�� twoje konto z jakiego� powodu. By� mo�e sta�o si� tak, poniewa� nic nie napisa�e�? Cz�sto administratorzy usuwaj� u�ytkownik�w, kt�rzy w og�le nic nie napisali aby zmniejszy� rozmiar bazy danych. Spr�buj zarejestrowa� si� ponownie i b�d� aktywny w dyskusjach.");


$faq[] = array("--","Preferencje i Ustawienia U�ytkownik�w");
$faq[] = array("Jak mog� zmieni� swoje ustawienia?", "Wszystkie twoje ustawienia (je�li jeste� zarejestrowany) s� przechowywane w bazie danych. Aby je zmieni� kliknij w odno�nik <u>Profil</u> (najcz�ciej znajduje si� na g�rze strony, chocia� nie zawsze). To pozwoli ci zmieni� wszystkie ustawienia.");
$faq[] = array("Czasy nie s� w�a�ciwe!", "Podane czasy s� prawie na pewno w�a�ciwe, ale by� mo�e widzisz czasy ze strefy czasowej innej ni� twoja. Je�eli tak jest, to powiniene� zmieni� ustawienia twojego profilu, wybieraj�c stref� czasow� odpowiedni� dla twojego obszaru. Pami�taj, �e zmiana strefy czasowej, jak wi�kszo�� ustawie�, mo�e by� dokonana jedynie przez u�ytkownik�w zarejestrowanych. Je�li wi�c jeszcze si� nie zarejestrowa�e�, teraz jest dobry moment, �eby to zrobi�.");
$faq[] = array("Zmieni�em stref� czasow� ale czasy s� nadal nieprawid�owe!", "Je�eli jeste� pewien, �e ustawienia twojej strefy czasowej s� poprawne problemem mo�e by� czas letni. Forum nie jest zaprojektowane do osb�ugi zmian mi�dzy czasem zimowym i letnim, wi�c w okresie obowi�zywania czasu letniego podane czasy mog� r�ni� si� o godzin� od prawdziwych.");
$faq[] = array("Mojego j�zyka nie ma na li�cie!", "Najbardziej prawdopodobne powody to albo poniewa� administrator nie zainstalowa� twojego j�zyka albo program nie zosta� jeszcze przet�umaczony na tw�j j�zyk. Spr�buj spyta� si� administratora forum, czy mo�e zainstalowa� odpowiedni j�zyk, a je�li t�umaczenie nie istnieje mo�esz sam je zrobi�. Wi�cej informacji znajdziesz na stronie Grupy phpBB (odno�nik znajdziesz na dole strony).");
$faq[] = array("Jak mog� wy�wietli� obrazek pod moj� ksywk�?", "Pod twoj� nazw� u�ytkownika przy czytaniu post�w mog� by� dwa obrazki. Pierwszy jest zwi�zany z twoj� rang�, zwykle ma form� gwiazdek lub innych znaczk�w pokazuj�cych jak du�o napisa�e� post�w lub jaki masz na nich status. Pod nim mo�e znajdowa� si� wi�kszy obrazek nazywany Emblematem, kt�ry z regu�y dla ka�dego jest inny. To od administratora zale�y czy zechce udost�pni� funkcje Emblemat�w i w jaki spos�b je udost�pni. Je�eli nie mo�esz z nich korzysta�, to taka jest decyzja administratora i do niego mo�esz kierowa� pytania o jej pow�d (na pewno jest dobry!)");
$faq[] = array("Jak mog� zmieni� swoj� rang�?", "Przewa�nie nie mo�esz zmieni� nazwy swojej rangi (pojawiaj� si� one pod nazw� u�ytkownika przy przegl�daniu tematu, oraz w twoim profilu, zale�nie od szablonu). Wi�kszo�� for u�ywa rang aby zaznaczy� liczb� post�w, kt�re napisa�e�, i aby wyr�ni� konkretne osoby, np. moderatorzy czy administratorzy mog� mie� specjaln� rang�. Prosimy nie pisa� specjalnie post�w tylko po to, aby otrzyma� wy�sz� rang�. W takim wypadku moderator lub administrator po prostu r�cznie j� zmniejszy.");
$faq[] = array("Kiedy klikam odno�nik email, forum wymaga logowania", "Jedynie zarejestrowani u�ytkownicy mog� wysy�a� email przez wbudowany w forum system (je�eli admin go w��czy�). Jest tak aby zapobiec niew�a�ciwemu wykorzystaniu adres�w na forum przez anonimowych u�ytkownik�w.");


$faq[] = array("--","Problemy z Pisaniem");
$faq[] = array("Jak mog� napisa� temat na forum?", "To proste, kliknij w odpowiedni temat na jedym z for lub temat�w. Mo�liwe, �e b�dziesz musia� si� zarejestrowa� zanim b�dziesz m�g� co� napisa�; twoje uprawnienia s� wypisane na dole stron for i temat�w (lista <i>Mo�esz pisa� nowe tematy, Mo�esz g�osowa� w ankietach, itp.</i>)");
$faq[] = array("Jak mog� zmieni� lub usun�� post?", "Je�eli nie jeste� administratorem lub moderatorem forum mo�esz jedynie zmienia� lub usuwa� w�asne posty. Aby zmieni� post (czasem jest to mo�liwe jedynie przez jaki� czas po jego napisaniu) kliknij w przycisk <i>zmie�</i> przy danym po�cie. Je�eli kto� ju� na niego odpowiedzia� po edycji pod postem pojawi si� tekst drobnymi literami informuj�cy, ile razy dany post zmieniano. Nie zostanie on dodany je�li kto� ju� odpowiedzia� na post, lub je�li zosta� on zmieniony przez administrator�w lub moderator�w (powinni oni powiadomi� co zmienili i dlaczego). Pami�taj, �e zwykli u�ytkownicy nie mog� usun�� postu, na kt�ry kto� ju� odpowiedzia�.");
$faq[] = array("Jak mog� doda� podpis do mojego postu?", "Aby doda� podpis do wiadomo�ci musisz najpierw go stworzy� w swoim profilu. Kiedy ju� to zrobisz mo�esz zaznaczy� pole <i>Dodaj podpis</i> przy formularzu wysy�ania postu, aby doda� podpis. Mo�esz tak�e domy�lnie dodawa� podpis do wszystkich swoich post�w zaznaczaj�c odpowiedni� opcj� w swoim profilu (przy czym ka�dorazowo pisz�c post mo�esz zadecydowa� o nie dodawaniu do niego podpisu, przez odznaczenie pola w formularzu wysy�ania)");
$faq[] = array("Jak mog� utworzy� ankiet�?", "Tworzenie ankiet jest proste, kiedy piszesz nowy temat (lub zmieniasz pierwszy post w temacie, je�li masz do tego uprawnienia) powiniene� zobaczy� formularz <i>Dodaj Ankiet�</i> pod g��wnym polem wiadomo�ci (je�eli nie widzisz go, to prawdopodobnie nie masz uprawnie� do tworzenia ankiet). Musisz wpisa� tytu� ankiety i poda� przynajmniej dwie opcje (kolejne opcje mo�esz dodawa� przyciskiem <i>Dodaj opcj�</i>). Mo�esz tak�e wyznaczy� limit czasowy dla ankiety, ustaw 0 dla nieko�cz�cej si�. Liczba mo�liwych do ustawienia opcji jest okre�lana przez administratora.");
$faq[] = array("Jak mog� zmieni� lub usun�� ankiet�?", "Podobnie jak z postami, ankiety mog� by� zmieniane jedynie przez ich tw�rc�w, moderator�w lub administrator�w. Aby zmieni� ankiet� musisz zmieni� pierwszy post w danym temacie (z kt�rym zawsze zwi�zana jest ankieta). Je�eli nikt jeszcze nie g�osowa� u�ytkownicy mog� usun�� ankiet� lub zmienia� kt�r�kolwiek z opcji, jednak�e je�li zosta�y ju� oddane g�osy tylko moderatorzy i administratorzy mog� ankiet� zmieni� lub usun��. Jest to ustawione w ten spos�b aby zapobiec fa�szowaniu ankiet przez zmian� opcji w po�owie g�osowania.");
$faq[] = array("Dlaczego nie mam dost�pu do forum?", "Niet�re fora mog� by� przeznaczone dla konkretnych u�ytkownik�w lub grup. Aby przegl�da�, czyta�, pisa� itp. mo�e by� potrzebna specjalna autoryzacja. Dost�pu do nich mog� udzieli� jedynie moderatorzy forum oraz administratorzy i z nimi powiniene� si� skontaktowa�.");
$faq[] = array("Dlaczego nie mog� g�osowa� w ankietach?", "Tylko zarejestrowani u�ytkownicy mog� g�osowa� w ankietach (aby zapobiec fa�szowaniu wynik�w). Je�eli zarejestrowa�e� si� i nadal nie mo�esz g�osowa�, prawdopodobnie nie masz odpowiednich uprawnie�.");


$faq[] = array("--","Formatowanie i Typy Temat�w");
$faq[] = array("Czym jest BBCode?", "BBCode jest specjaln� implementacj� HTML'a, a mo�liwo�� jego u�ywania jest uzale�niona od ustawie� dokonanych przez administratora (mo�esz tak�e wy��cza� go dla ka�dego postu osobno w formularzu wysy�ania). Sam BBCode jest podobny stylowo do HTML'a, znaczniki s� zawarte w nawiasach kwadratowych [ i ] a nie &lt; i &gt; oraz oferuje wi�ksz� kontrol� nad tym co i jak b�dzie wy�wietlane. Wi�cej informacji o BBCode znajdziesz w przewodniku, do kt�rego dostaniesz si� ze strony wysy�ania postu.");
$faq[] = array("Czy mog� u�ywa� HTML?", "Zale�y to od decyzji administratora, kt�ry ma pe�n� kontrol� nad mo�liwo�ci� u�ywania HTML'a. Je�eli mo�esz go u�ywa�, prawdopodobnie tylko niekt�re znaczniki b�d� dzia�a�y. Jest to podyktowane wzgl�dami <i>bezpiecze�stwa</i>, aby zapobiec wstawianiu przez ludzi kodu, kt�ry zepsuje wygl�d strony czy sprawi inne k�opoty. Je�eli HTML jest w��czony, mo�esz wy��czy� go dla ka�dego postu wybieraj�c odpowiedni� opcj� w formularzu wys�ania postu.");
$faq[] = array("Czym s� U�mieszki?", "U�mieszki, albo Ikony Emocji s� ma�ymi grafikami, kt�re mog� by� u�ywane do wyra�enia jakiego� uczucia przez wstawienie kr�tkiego kodu, np. :) oznacza szcz�cie, :( oznacza smutek. Pe�na lista ikon jest dost�pna z formularza wysy�ania postu. Spr�buj jednak nie nadu�ywa� tych ikon, poniewa� mog� spowodowa� nieczytelno�� postu i moderator mo�e zdecydowa� o usuni�ciu ich lub ca�ego postu.");
$faq[] = array("Czy mog� dodawa� Obrazki?", "Jak najbardziej mo�esz wstawia� obrazki do swoich post�w. Jednak�e obecnie nie istnieje mo�liwo�� przesy�ania obrazk�w bezpo�rednio na forum. Musisz wi�c wstawia� obrazki, kt�re znajduj� si� na innym, og�lnodost�pnym serwerze, np. http://www.moj-serwer.pl/moj-obraz.gif. Nie mo�esz wstawia� obrazk�w znajduj�cych si� na twoim komputerze (chyba �e jest on publicznie dost�pnym serwerem) ani obrazk�w przechowywanych na stronach wymagaj�cych autoryzacji, np. skrzynki pocztowe, strony chronione has�em itp. Aby wstawi� obrazek u�yj znacznika BBCode [img] lub odpowiedniego znacznika HTML (je�li jest to dozwolone).");
$faq[] = array("Czym s� Og�oszenia?", "Og�oszenia cz�sto zawieraj� istotne informacje i powiniene� czyta� je gdy tylko si� pojawi�. Og�oszenia pojawiaj� si� na g�rze ka�dej strony na forum, w kt�rym zosta�y napisane. To czy mo�esz wysy�a� og�oszenia zale�y od tego, jakich wymaga to uprawnie� dost�pu, ustawianych przez administratora.");
$faq[] = array("Czym s� Tematy Przyklejone?", "Tematy Przyklejone pojawiaj� si� pod og�oszeniami w przegl�dzie for i tylko na pierwszej jego stronie. Najcz�ciej s� dosy� wa�ne, wi�c w miar� mo�liwo�ci powiniene� je czyta�. Podobnie jak z og�oszeniami, administrator decyduje jakie uprawnienia s� konieczne do pisania temat�w przyklejonych na ka�dym forum.");
$faq[] = array("Czym s� Tematy Zablokowane?", "Zablokowane Tematy s� ustawiane w ten spos�b przez moderatora lub administratora. Nie mo�esz pisa� w nich dalszych odpowiedzi oraz ka�da zawarta w nich ankieta jest automatycznie ko�czona. Powod�w dla zamkni�cia tematu mo�e by� bardzo wiele.");


$faq[] = array("--","Poziomy U�ytkownik�w i Grupy");
$faq[] = array("Kim s� Administratorzy?", "Administratorzy s� lud�mi, kt�rym przydzielono najwy�szy poziom kontroli nad ca�ym forum. Mog� oni kontrolowa� wszystkie aspekty dzia�ania forum, w��cznie z ustawianiem uprawnie� dost�pu, usuwaniem u�ytkownik�w, tworzeniem grup, okre�laniem moderator�w itp. Maj� tak�e pe�ne mo�liwo�ci moderacji na forach.");
$faq[] = array("Kim s� Moderatorzy?", "Moderatorzy s� osobami (albo grupami os�b), kt�rych zadaniem jest dogl�danie forum od czasu do czasu. Maj� mo�liwo�� zmieniania tre�ci lub usuwania post�w oraz blokowania, odblokowywania, przenoszenia, usuwania i dzielenia temat�w w forum, kt�re moderuj�. Generalnie czuwaj� aby ludzie nie schodzili <i>z tematu</i> w dyskusjach oraz nie publikowali nieodpowiednich materia�ow.");
$faq[] = array("Czym s� Grupy U�ytkownik�w?", "Grupy U�ytkownik�w s� sposobem, w jaki administratorzy mog� grupowa� u�ytkownik�w. Ka�dy u�ytkownik mo�e nale�e� do wielu grup (co przewa�nie nie jest mo�liwe w innych forach) i ka�da grupa mo�e mie� w�asne prawa dost�pu. Dzi�ku temu administratorzy mog� �atwo ustawi� wielu u�ytkownik�w jako moderator�w lub da� im dost�p do prywatnego forum itp.");
$faq[] = array("Jak mog� do��czy� do Grupy?", "Aby do��czy� do grupy u�ytkownik�w kliknij w odno�nik grup u�ytkownik�w na g�rze strony (zale�nie od szablonu), gdzie mo�esz przegl�da� wszystkie grupy. Nie wszystkie s� dost�pne dla ka�dego, niekt�re mog� by� zamkni�te a inne mog� mie� nawet ukryte cz�onkowstwo. Je�eli grupa jest otwarta mo�esz poprosi� o cz�onkowstwo klikaj�c w odpowiedni przycisk. Twoja pro�ba musi zosta� zaakceptowana przez moderatora grupy, przy czym mo�e on spyta� o pow�d twojej decyzji. Prosimy nie nagabywa� moderatora w przypadku negatywnej decyzji, ma swoje powody.");
$faq[] = array("Jak mog� zosta� Moderatorem Grupy?", "Grupy u�ytkownik�w s� tworzone przez administratora forum i to on wyznacza moderatora. Je�eli jeste� zainteresowany stworzeniem nowej grupy powiniene� w pierwszej kolejno�ci z nim si� skontaktowa�, na przyk�ad przez prywatn� wiadomo��.");


$faq[] = array("--","Prywatne Wiadomo�ci");
$faq[] = array("Nie mog� wysy�a� prywatnych wiadomo�ci!", "Mog� by� tego trzy powody; nie jeste� zarejestrowany lub i/lub zalogowany, administrator wy��czy� prywatne wiadomo�ci dla ca�ego forum lub wy��czy� mo�liwo�� ich wysy�ania dla ciebie. W ostatnim przypadku powiniene� skontaktowa� si� z administratorem i spyta� o pow�d jego decyzji.");
$faq[] = array("Wci�� dostaj� niechciane prywatne wiadomo�ci!", "W przysz�o�ci planowane jest dodanie listy ignorowanych u�ytkownik�w dla systemu prywatnych wiadomo�ci. Obecnie jednak je�li dostajesz niechciane wiadomo�ci od kogo� poinformuj o tym administratora, mo�e on wy��czy� mo�liwo�� wysy�ania wiadomo�ci dla danego u�ytkownika.");
$faq[] = array("Dosta�em spam lub obra�liwy email od kogo� z tego forum!", "Przykro nam z tego powodu. System wysy�ania email'i tego forum zawiera funkcje umo�liwiaj�ce odnalezienie u�ytkownik�w, kt�rzy pisz� takie listy. Prze�lij administratorowi forum pe�n� kopi� listu, kt�ry otrzyma�e�. Wa�ne jest by zawiera�a wszystkie nag��wki (w kt�rych zawarte s� informacje o nadawcy). Wtedy mo�e on odpowiednio zadzia�a�.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","Sprawy phpBB 2");
$faq[] = array("Kto napisa� ten skrypt?", "Ten program (w niezmodyfikowanej formie) zosta� stworzony, opublikowany i jest w�asno�ci� <a href=\"http://www.phpbb.com/\" target=\"_blank\">Grupy phpBB</a>. Jest udost�pniany na zasadach licencji GNU General Public Licence i mo�e by� dowolnie dystrybuowany. Wi�cej szczeg��w pod odno�nikiem.");
$faq[] = array("Dlaczego funkcja X nie jest dost�pna?", "To oprogramowanie jest dzie�em i w�asno�ci� Grupy phpBB. Je�eli s�dzisz, �e jaka� funkcja powinna zosta� do niego dodana odwied� stron� phpbb.com i zobacz co w tej sprawie ma do powiedzenia Grupa phpBB. Prosimy nie pisa� pr�b o nowe funkcje na forum z phpbb.com. Grupa wykorzystuje system SourceForge do zarz�dzania tymi pro�bami. Poszukaj na forum opinii Grupy phpBB na temat danej funkcji, je�li taka ju� tam si� znajduje, a w przeciwnym wypadku post�puj zgodnie z podan� tam procedur� zg�aszania pro�b.");
$faq[] = array("Z kim mam si� skontaktowa� w sprawach nadu�y� i prawnych dotycz�cych tego forum?", "Powiniene� skontaktowa� si� z administratorem forum. Je�eli nie mo�esz dowiedzie� si� kto nim jest spr�buj skontaktowa� si� z kt�rym� z moderator�w forum i jego spyta� do kogo si� zwr�ci�. Je�eli nadal nie dostaniesz odpowiedzi skontaktuj si� z w�a�cicielem domeny (poszukaj go przez whois) lub, je�li strona jest na serwerze darmowych kont (republika.pl, wp.pl, hg.pl, phg.pl itp.) skontaktuj si� z dzia�em nadu�y� firmy zarz�dzaj�cej serwerem. Pami�taj, �e Grupa phpBB nie ma �adnej kontroli i nie mo�e by� w �aden spos�b odpowiedzialna za to jak, gdzie i przez kogo u�ywane jest forum. Nie ma sensu kontaktowa� si� z Grup� phpBB w sprawach prawnych nie zwi�zanych bezpo�rednio ze stron� phpbb.com lub oprogramowaniem phpBB. Je�li napiszesz do Grupy phpBB w sprawie wykorzystania skryptu przez osoby trzecie otrzymasz prawdopodobnie zwi�z�� odpowied� lub te� nie otrzymasz jej wcale.");

//
// This ends the FAQ entries
//

?>