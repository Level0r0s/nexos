<?php
/***************************************************************************
 *                         lang_bbcode.php [Slovak]
 *                         -----------------------
 *     characterset         : Windows-1250
 *     begin                : 08-08-2002
 *     copyright            : (c) 2002 The phpBB SK Group
 *     email                : kolenkas@stonline.sk
 *     convert2iso          : Kukymann
 *     www                  : 
 *
 *     $Id: lang_bbcode.php,v 1.1 2004/08/04 01:20:54 akamu Exp $
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
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\"
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//
  
$faq[] = array("--","Úvod");
$faq[] = array("Čo sú značky ?", "Značky sú zvláštne príkazy vložené do HTML. Používanie značiek vo vašich príspevkoch vo fóre povoľuje administrátor. Môžete si dodatočně zakázať používanie značiek v jednotlivých príspevkoch vo formulári k zaslaniu príspěvku. Značky sú veľmi podobné štýlu HTML, príkazy sú zapísané v zložených zátvorkách [] a uzavierajú vždy nejaký text, ktorý sa následne chová podľa týchto príkazov. Značky vám umožnia rýchle formátovanie písaného textu. Sami sa teda môžete rozhodnúť, či budete chcieť používať tieto značky, ktoré sú zahrnuté vo formulári pre odoslanie príspevku, či budete používať HTML.");

$faq[] = array("--","Formátovanie textu");
$faq[] = array("Ako vytvoriť text písaný tučne, kurzívou či podčiarknutý", "Značky obsahujú príkazy pre rýchlu zmenu štýlu vášho textu. Môžete sa pozrieť ako ľahko dosiahnuť požadovaný výsledok.<ul><li>Pre vytvorenie tučne písaného textu, obklopíte text medzi <b>[b][/b]</b><br /><br /><p>príklad: <b>[b]</b>Ahoj<b>[/b]</b><br />Výsledkum je <b>Ahoj</b></li></p><p><li>Pre podčiarknutie textu, obklopíte text medzi <b>[u][/u]</b><br /><br />príklad: <b>[u]</b>Dobrý deň<b>[/u]</b><br />Výsledkom je <u>Dobrý deň</u></li></p><p><li>Pre text písaný kurzívou, obklopíte text medzi <b>[i][/i]</b><br /><br />príklad: Toto je <b>[i]</b>ukážka<b>[/i]</b><br />Výsledkom je Toto je <i>ukážka</i></li></p></ul>");
$faq[] = array("Ako zmeniť farbu a veľkosť písma", "Pre zmenu farby alebo veľkosti textu je určených niekoľko príkazov. Dajte si pozor na to ako bude výstup zobrazený v závislosti na vašom prehliadači a systéme:<ul><li>pre zmenu farby textu, obklopíte požadovaný text medzi <b>[color=][/color]</b>. Môžete použiť buď názvy farieb (napr. red, blue, yellow, atď.) alebo odpovedajúce hexadecimálne kódy farby, napr. #FFFFFF, #000000. Na príklade si ukážeme ako vytvoriť červený text:<br /><br /><b>[color=red]</b>Ahoj!<b>[/color]</b><br /><br />alebo<br /><br /><b>[color=#FF0000]</b>Ahoj!<b>[/color]</b><br /><br />Výsledkom bude <span style=\"color:red\">Ahoj!</span></li><li>Zmenu veľkosti textu vykonáme podobne použitím <b>[size=][/size]</b>. Tento príkaz má předdefinované číselné hodnoty, které mají přiřazenu odpovídající velikosti písma v bodoch, začínajúc od 1 (veľmi malé písmo, nejmenšie viditeľné) až po 29 (veľmi veľké). Pre ukážku:<br /><br /><b>[size=9]</b>MALÉ<b>[/size]</b><br /><br />Výsledkom je <span style=\"font-size:9px\">MALÉ</span><br /><br />zatiaľ čo:<br /><br /><b>[size=24]</b>VEĽKÉ<b>[/size]</b><br /><br />zobrazí <span style=\"font-size:24px\">VEĽKÉ</span></li></ul>");
$faq[] = array("Je možné spájať formátovacie značky ?", "Áno, toto je možné, na nasledujúcom príklade si ukážeme ako správne tieto značky zapísať. Je veľmi dôležité dodržať aj ich postupnosť.<br /><br /><b>[size=18][color=red][b]</b>Pozri sa<b>[/b][/color][/size]</b><br /><br />Výsledkom je <span style=\"color:red;font-size:18px\"><b>Pozri sa</b></span><br /><br />Pokiaľ nedodržíte postupnosť ukončení značiek v poradí v akom boli vkladané, bude text zobrazený chybne! Vždy je potrebné uzavierať značky v postupnosti v akej boli zadané. Pozrite sa na nasledujúcu ukážku, kde sú značky nekorektne uzavreté:<br /><br /><p><b>[b][u]</b>Toto je chyba!<b>[/b][/u]</b></p>");

$faq[] = array("--","Citácia a pevná šírka textu pri odoslaní");
$faq[] = array("Citácia textu v odpovedi", "Sú dva spôsoby zadania citovaného textu, s poukázaním a bez neho.<ul><li>Keď je to vhodné môžete použiť citát k príspevku, ktorý pridá poukázanie a text do zvláštneho boxu v príspevku. Text citácie uzavrite medzi <b>[quote=\"\"][/quote]</b>. Tento zpôsob pridá k citácii vaše poukázanie koho citujete alebo komu je určená. V nasledujúcom príklade si ukážeme ako zadáme text, ktorý vyslovil Karol Novák:<br /><br /><b>[quote=\"Karol Novák\"]</b>Toto je text, ktorý vyslovil tento pán.<b>[/quote]</b><br /><br /> Výsledkom bude automatické pridanie poukázania Karol Novák napísal: a text citácie. Pokiaľ chcete zadať text ako svoj vlastný citát, prípadne nikoho neurčovať, zadáte len zátvorky \"\". Táto voľba nie je povinná.</li><p><li>Druhým spôsobom je citovať text bez poukázania. Požadovaný text, ktorý chcete citovať uzavrite medzi <b>[quote][/quote]</b>. Keď si zobrazíte výsledok takejto správy, bude tu nejprv namiesto poukázánia len napísal: a text citátu.</li></p></ul>");
 
$faq[] = array("Výstup kódu alebo pevná šírka dát", "Ak chcete vložiť kus kódu alebo čokoľvek čo vyžaduje pevnú šírku (font typu Courier), obklopte text medzi <b>[code][/code]</b><br /><br /><p>napríklad: <b>[code]</b>echo \"Toto je kód\";<b>[/code]</b></p>");

$faq[] = array("--","Generovanie zoznamu");
$faq[] = array("Vytváranie jednoduchého zoznamu", "Značky obsahujú aj príkazy pre vytváranie zoznamov. Podporované sú dva druhy zoznamov, jednoduchý a štrukturovaný. Jednoduchý zoznam zobrazí jednotlivé položky zoznamu postupne pod sebou oddelené odrážkou. Pre vytvorenie zoznamu použite <b>[list][/list]</b> a definujte jednotlivé položky pomocou <b>[*]</b>. Pozrite sa na nasledujúcu ukážku jednoduchého zoznamu:<br /><br /><b>[list]</b><br /><b>[*]</b>červená<br /><b>[*]</b>modrá<br /><b>[*]</b>zelená<br /><b>[/list]</b><br /><br />Výsledkom by bolo:<ul><li>červená</li><li>modrá</li><li>zelená</li></ul>");
$faq[] = array("Vytváranie štrukturovaného zoznamu", "Druhým spôsobom je vytváranie štrukturovaných zoznamov. Od predchádzajúceho typu sa líši znakom pred textom jednotlivých položiek, namiesto bodky je tu použitý niektorý z dvoch spôsobov vzostupného označenia položiek zoznamu. Pre vytvorenie číslovaného zoznamu použite <b>[list=1][/list]</b> a pre abecedný zoznam <b>[list=a][/list]</b>. Jednotlivé položky zoznamu definujete pomocou <b>[*]</b>. Pozrite sa na nasledujúcu ukážku:<br /><br /><b>[list=1]</b><br /><b>[*]</b>červená<br /><b>[*]</b>modrá<br /><b>[*]</b>zelená<br /><b>[/list]</b><br /><br />Výsledkom bude:<ol type=\"1\"><li>červená</li><li>modrá</li><li>zelená</li></ol>Pre vytvorenie abecedného zoznamu použite:<br /><br /><b>[list=a]</b><br /><b>[*]</b>prvá možná odpoveď<br /><b>[*]</b>druhá možná odpoveď<br /><b>[*]</b>tretia možná odpoveď<br /><b>[/list]</b><br /><br />Výsledok:<ol type=\"a\"><li>prvá možná odpoveď</li><li>druhá možná odpoveď</li><li>tretia možná odpoveď</li></ol>");

$faq[] = array("--", "Vytvorenie odkazu");
$faq[] = array("Odkaz na iné webové stránky", "phpBB značky podporujú vytvorenie URL odkazov odkazujúcich sa na iné internetové stránky či emailové adresy.<ul><li>Prvým spôsobom je použiť <b>[url=][/url]</b> značky, za znak = p doplníte URL adresu, na ktorú chcete odkazovať. Text medzi obomi značkami bude zvýraznený a zároveň bude slúžiť ako odkaz na uvedenú URL adresu. Pozrite sa na nasledujúcí príklad odkazujúci na server phpbb.com:<br /><br /><b>[url=http://www.phpbb.com/]</b>Stránky phpBB<b>[/url]</b><br /><br />Týmto sa vygeneruje odkaz, <a href=\"http://www.phpbb.com/\" target=\"_blank\">Stránky phpBB</a> Pokiaľ kliknete na tento vytvorený odkaz, otvorí sa vám v novom okne prehliadača odkaz na ktorý smerujete.</li><li>Ak chcete zobraziť URL priamo ako odkaz použite nasledujúci postup:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Týmto sa vygeneruje odkaz, <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>V prípade zadania syntakticky správneho URL aj bez začiatočného http:// do textu príspevku automaticky odkaz na zadanú URL adresu. Pre ukážku si môžete skúsiť napísať do príspevku www.phpbb.com a uvidíte, že sa vám text vo výsledku zobrazí automaticky jako odkaz <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a>.</li><li>Obdobným zpôsobom sa dajú vytvárať aj odkazy na emailové adresy, zadajte požadovanú emailovú adresu podľa príkladu:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />Výsledok potom bude <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a> alebo môžete zadať v texte prípspevku no.one@domain.adr a adresa sa opäť automaticky premení na odkaz.</li></ul>URL odkaz môžete zadať medzi ktorékoľvek ďalšie značky: Ak uzavriete URL medzi <b>[img][/img]</b> (viď nasledujúca kapitola) môže byť odkazom aj obrázok. Len potom nezabudnite na správnu postupnosť uzatvárania značiek.");

$faq[] = array("--", "Zobrazenie obrázkov v príspevkoch");
$faq[] = array("Pridanie obrázku do príspevku", "phpBB značky ďalej umožňujú vkladanie obrázkov do textu príspevku či správy. Toto je veľmi užitočná vlastnosť, vďaka ktorej nemusíte odkazovať na súbory obrázkov o ktorých napríklad píšete, ale všetci užívatelia ich hneď vidia vo vašom príspevku. Ako bolo uvedené vyššie, môžete využiť obrázok k vytvoreniu URL odkazu na váš server alebo napríklad pre zväčšeninu malého obrázku tu v príspevku. Obrázok sa musí však vždy nachádzať na internete a byť tak dostupný pre všetkých užívateľov, nie je možné sa teda odkazovať na súbory, ktoré máte napríklad na lokálnom disku vášho počítača, pretože k nim by užívatelia internetu nemali prístup. Pre zobrazenie obrázku musíte uzavřieť URL obrázku medzi <b>[img][/img]</b>.<br /><br />príklad: <b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Ak zadáte URL adresu obrázku medzi <b>[url][/url]</b>, môže byť odkazom obrázok.<br /><br />príklad: <b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />Výsledkom bude:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

//
// This ends the BBCode guide entries
//

?>