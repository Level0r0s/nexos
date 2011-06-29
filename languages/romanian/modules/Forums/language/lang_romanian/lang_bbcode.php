<?php
/***************************************************************************
 *                         lang_bbcode.php [română]
 *                            -------------------
 *   begin                : Wednesday Aug 7, 2002
 *   last update          : May 29, 2003
 *   language version     : 3.0
 *   copyright            : Romanian phpBB online community
 *   website              : http://www.phpbb.ro
 *   copyright 1          : (C) Robert Munteanu
 *   email     1          : rombert@go.ro
 *   copyright 2          : (C) Bogdan Toma
 *   email     2          : bogdan@phpbb.ro
 *
 *   $Id: lang_bbcode.php,v 1.2 2004/08/05 01:37:35 akamu Exp $
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
 
// 
// To add an entry to your codul BB guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your codul BB guide entries, if you absolutely must then escape them ie. \"something\";
//
// The codul BB guide items will appear on the codul BB guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to codul BB any section, if you do
// users browsing in your language may be confused to find they're codul BB doesn't work :D You can change
// references which are 'in-line' within the text though.
//
  
$faq[] = array("--","Introducere");
$faq[] = array("Ce este codul BB?", "Codul BB este o implementare specială a HTML-ului. Dacă puteţi folosi codul BB sau nu în mesajele dumneavoastră este alegerea administratorului. În plus, puteţi dezactiva codul BB de la mesaj la mesaj din formularul de publicare. Codul BB este similar cu HTML-ul, balizele (tag-urile) sunt scrise între paranteze pătrate [ şi ] decât între &lt; şi &gt; şi oferă un control mai bun asupra ce şi cum este afişat. În funcţie de şablonul pe care îl folosiţi puteţi descoperi că adăugarea de cod BB la mesajele dumneavoastră este mai uşoară printr-un set de butoane. Chiar şi aşa probabil că veţi găsi acest ghid folositor.");


$faq[] = array("--","Formatarea textului");
$faq[] = array("Cum să creaţi text îngroşat, cursiv şi subliniat", "Codul BB include balize pentru a vă permite să schimbaţi rapid stilul textului dumneavoastră. Acest lucru poate fi obţinut în urmatoarele moduri: <ul><li>Pentru a face o bucată de text îngroşată (bold), includeţi-o între <b>[b][/b]</b> , spre exemplu <br /><br /><b>[b]</b>Salut<b>[/b]</b><br /><br /> va deveni <b>Salut</b></li><li>Pentru subliniere folosiţi <b>[u][/u]</b>, spre exemplu <br /><br /><b>[u]</b>Bună dimineaţa<b>[/u]</b><br /><br />devine <u>Buna dimineata</u></li><li>Pentru a scrie cu font cursiv (italic) folosiţi <b>[i][/i]</b> , spre exemplu <br /><br /><b>[i]</b>Super!<b>[/i]</b><br /><br />va deveni <i>Super!</i></li></ul>");
$faq[] = array("Cum să schimbaţi culoarea textului sau mărimea", "Pentru a schimba culoarea sau marimea textului dumneavoastră puteţi folosi mai multe balize. Ţineţi minte că felul cum apare mesajul depinde de browser-ul şi sistemul clientului :<ul><li> Schimbarea culorii textului se face prin trecerea între <b>[color=][/color]</b>. Puteţi specifica fie o culoare cunoscută, în limba engleză, (<i>red</i> pentru roşu), <i>blue</i> pentru albastru, <i>yellow</i> pentru galben) sau un triplet hexazecimal (#FFFFFF, #000000). Spre exemplu, pentru a scrie cu roşu veţi folosi :<br /><br /><b>[color=red]</b>Salut!<b>[/color]</b><br /><br />sau<br /><br /><b>[color=#FF0000]</b>Salut!<b>[/color]</b><br /><br /> Amblele vor avea ca rezultat <span style=\"color:red\">Salut!</span></li><li>Schimbarea mărimii textului este facută în acelaşi fel folosind <b>[size=][/size]</b>. Această baliză depinde de şablonul pe care îl folosiţi dar formatul recomandat este o valoare numerică reprezentând mărimea textului în pixeli, pornind de la 1 (extrem de mic) şi ajungând până la 29 (foarte mare). Spre exemplu: <br /><br /><b>[size=9]</b>MIC<b>[/size]</b><br /><br /> în general va avea ca rezultat <span style=\"font-size:9px\">MIC</span><br /><br /> în vreme ce <br /><br /><b>[size=24]</b>ENORM!<b>[/size]</b><br /><br />va fi <span style=\"font-size:24px\">ENORM!</span></li></ul>");
$faq[] = array("Pot combina balizele (tag-urile) de formatare?", "Desigur. Spre exemplu, pentru a atrage atenţia cuiva aţi putea să scrieţi <br /><br /><b>[size=18][color=red][b]</b>PRIVEŞTE-MĂ!<b>[/b][/color][/size]</b><br /><br />şi rezultatul va fi <span style=\"color:red;font-size:18px\"><b>PRIVEŞTE-MĂ!</b></span><br /><br /> Totuşi, nu vă recomandăm să scrieţi prea mult text astfel ! Tineţi minte că depinde de dumneavoastră să vă asiguraţi că balizele sunt închise corect. Spre exemplu, urmatoarea secvenţă este incorectă: <br /><br /><b>[b][u]</b>Aşa este greşit<b>[/b][/u]</b>");

$faq[] = array("--","Citate şi text cu lăţime fixă");
$faq[] = array("Citarea textului în răspunsuri", "Există două modalităţi de a cita textul, cu referinţă şi fără.<ul><li>Când utilizaţi funcţia de răspuns inclusiv mesajul, ar trebui să observaţi că mesajul respectiv este adăgat în fereastra de publicare inclus într-un bloc <b>[quote=\"\"][/quote]</b>. Această metodă vă permite să îl citaţi cu referinţă la o persoană sau orice altceva doriţi să scrieţi ! Spre exemplu, pentru a cita o bucată de text scrisă de Dl. Ionescu aţi scrie :<br /><br /><b>[quote=\"Dl. Ionescu\"]</b> Textul scris de Dl. Ionescu <b>[/quote]</b><br /><br /> Rezultatul va fi că Dl. Ionescu a scris: va fi adăugat înainte de textul citat. Ţine-ţi minte că <b>trebuie</b> să includeţi ghilimelele \"\" în jurul numelui pe care îl citaţi. Acestea nu sunt opţionale.</li><li> A doua metodă vă permite să citaţi fără un autor. Pentru a folosi acest lucru introduceţi textul între balizele <b>[quote][/quote]</b>. Când îl citaţi, mesajul va arăta pur şi simplu Citat: înainte de textul propriu-zis.</li></ul>");
$faq[] = array("Generarea de cod sau de text cu mărime fixă", "Dacă doriţi să scrieţi o bucată de cod sau - de fapt - orice altceva care are nevoie de o lăţime fixă, cum ar fi un font de tip Courier, ar trebui să introduceţi textul între balize <b>[code][/code]</b> , spre exemplu: <br /><br /><b>[code]</b>echo \"O linie de cod\";<b>[/code]</b><br /><br />Toate formatările folosite între balizele <b>[code][/code]</b> sunt reţinute când citiţi mesajul.");


$faq[] = array("--","Generarea listelor");
$faq[] = array("Crearea unei liste neordonate", "Codul BB include două tipuri de liste, neordonate şi ordonate. În mare sunt la fel cu echivalentele lor HTML. O listă neordonată scrie fiecare obiect din listă secvenţial adăugându-le un alineat şi un caracter <i>bullet</i>. Pentru a crea o listă neordonată folosiţi <b>[list][/list]</b> şi definiţi fiecare obiect din lista folosind <b>[*]</b>. Spre exemplu, pentru a vă scrie culorile preferate aţi putea folosi : <br /><br /><b>[list]</b><br /><b>[*]</b>roşu<br /><b>[*]</b>albastru<br /><b>[*]</b>galben<br /><b>[/list]</b><br /><br />Aceasta ar genera urmatoarea listă: <ul><li>roşu</li><li>albastru</li><li>galben</li></ul>");
$faq[] = array("Crearea unei liste ordonate", "Al doilea tip de listă, lista ordonată vă oferă controlul asupra ceea ce este afişat înaintea fiecărui obiect. Pentru a crea o listă ordonată folosiţi <b>[list=1][/list]</b> pentru o listă numerică sau <b>[list=a][/list]</b> pentru o listă alfabetică. Ca şi la listele neordonate, obiectele sunt indicate folosind <b>[*]</b>. Spre exemplu: <br /><br /><b>[list=1]</b><br /><b>[*]</b>Mergi la magazin<br /><b>[*]</b>Cumpară un calculator<br /><b>[*]</b>Tipă la el când crapă<br /><b>[/list]</b><br /><br /> va genera urmatoarele:<ol type=\"1\"><li>Mergi la magazin</li><li>Cumpară un calculator</li><li>Tipă la el când crapă</li></ol> pe când pentru o lista alfabetică aţi folosi :<br /><br /><b>[list=a]</b><br /><b>[*]</b>Primul răspuns<br /><b>[*]</b>Al doilea răspuns<br /><b>[*]</b>Al treilea răspuns<br /><b>[/list]</b><br /><br /> având ca rezultat: <ol type=\"a\"><li>Primul răspuns</li><li>Al doilea răspuns</li><li>Al treilea răspuns</li></ol>");


$faq[] = array("--", "Crearea legăturilor");
$faq[] = array("Legături către alte site-uri", "Codul BB oferă multe resurse de creare a legăturilor, cunoscute mai bine ca URL-uri. <ul><li>Prima din acestea foloseşte baliza <b>[url=][/url]</b>, şi orice veţi scrie după semnul egal va determina conţinutul acelei balize să se comporte ca un URL. Spre exemplu, o legătură către phpBB ar fi: <br /><br /><b>[url=http://www.phpbb.com/]</b>Vizitaţi phpBB!<b>[/url]</b><br /><br />Rezultatul ar fi următorea legătură: <a href=\"http://www.phpbb.com/\" target=\"_blank\">Vizitaţi phpBB!</a>. Veţi observa că legătura se va deschide într-o fereastră nouă pentru ca utilizatorul să poată continua să utilizeze forumul dacă doreşte.</li></li> Dacă doriţi să fie afişat chiar URL-ul atunci puteţi să scrieţi: <br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br /> Acesta va genera urmatoarea legatură: <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li> Alte facilităţi phpBB includ şi ceva numit <i>legături magice</i>, care vă transformă un URL corect din punct de vedere sintactic într-un URL fără ca dumneavoastră să specificaţi vreo baliza sau să începeţi cu <i>http://</i>. Spre exemplu, dacă veţi scrie www.phpbb.com aceasta va deveni direct <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a>. Acelaşi lucru se întâmplă şi cu adresele de mail. Puteţi folosi o adresă explicit spre exemplu: <br /><br /><b>[email]</b>cineva@domeniu.adr<b>[/email]</b><br /><br />care va rezulta în <a href=\"mailto:cineva@domeniu.adr\">cineva@domeniu.adr</a> sau puteţi să scrieţi direct cineva@domeniu.adr şi mesajul dumneavoastră va fi automat convertit când îl veţi vizualiza. </li></ul> La fel ca tag-urile codului BB puteţi folosi pentru URL-uri orice tip de tag, ca şi <b>[img][/img]</b> (citiţi punctul următor), <b>[b][/b]</b> etc. Ca şi în cazul balizelor de formatare depinde de dumneavoastră să vă asiguraţi de ordinea corectă de deschidere şi închidere. Spre exemplu: <br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br /> <u>nu</u> este corect, lucru care ar putea duce la ştergerea mesajului, aşa că aveţi mare grijă.");


$faq[] = array("--", "Afişarea imaginilor în mesaje");
$faq[] = array("Adăugarea unei imagini în mesaj", "Codul BB include o baliză pentru includerea imaginilor în mesajele dumneavoastră. Doua lucruri foarte importante trebuie ţinute minte: mulţi utilizatori nu apreciază afişarea multor imagini într-un mesaj şi imaginea trebuie să fie deja disponibilă pe internet (nu poate exista doar pe calculatorul dumneavoastră, doar dacă nu rulaţi un server de web). Nu există în prezent nici o modalitate de stocare a imaginilor local cu phpBB (toate aceste probleme vor fi luate în discuţie la urmatoarea versiune). Pentru a afişa o imagine trebuie sa închideţi URL-ul imaginii în balize <b>[img][/img]</b>. Spre exemplu: <br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b>.<br /><br /> Aşa cum s-a văzut în secţiunea anterioară despre URL-uri, puteţi include o imagine într-o baliză <b>[url][/url]</b> dacă doriţi, spre exemplu :<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br /> ar genera: <br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Diverse");
$faq[] = array("Pot să îmi adaug propriile balize (tag-uri)?", "Nu, din nefericire; nu direct în phpBB 2.0 . Căutăm modalităţi de a oferi balize modificabile pentru urmatoarea versiune majoră.");

//
// This ends the codul BB guide entries
//

?>