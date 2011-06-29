<?php
/***************************************************************************
 *                         lang_bbcode.php [Czech]
 *                         -----------------------
 *     characterset         : Windows-1250
 *     phpBB version        : 2.0.2
 *     copyright            : (c) 2002 The phpBB CZ Group
 *     email                : azu@atmplus.cz
 *     www                  : phpbb.atmplus.cz
 *
 *     $Id: lang_bbcode.php,v 1.1 2004/07/31 21:13:45 akamu Exp $
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
$faq[] = array("Co jsou značky ?", "Značky jsou zvláštní příkazy vložené do HTML. Puožívání značek ve vašich příspěvcích ve fóru povoluje administrátor. Můžete si dodatečně zakázat používání značek v jednotlivých příspěvcích ve formuláři k zaslání příspěvku. Značky jsou velmi podobné stylu HTML, příkazy jsou zapsány ve složenýchch závorkách [] a uzavírají vždy nějaký text, který se následně chová dle těchto příkazů. Značky vám umožní rychlé formátovaní psaného textu. Sami se tedy můžete rozhodnout zda budete chtít používat tyto značky, které jsou zahrnuty ve formuláři pro odeslání příspěvku či budete používat HTML.");

$faq[] = array("--","Formátování textu");
$faq[] = array("Jak vytvořit text psaný tučně, kurzívou či podtrženě", "Značky obsahují příkazy pro rychlou změnu stylu vašeho textu. Můžete se podívat jak můžete snadno dosáhnout požadovaného výsledku.<ul><li>Pro vytvoření tučně psaného textu, obklopíte text mezi <b>[b][/b]</b><br /><br /><p>příklad: <b>[b]</b>Ahoj<b>[/b]</b><br />Výsledkem je <b>Ahoj</b></li></p><p><li>Pro podtržení textu, obklopíte text mezi <b>[u][/u]</b><br /><br />příklad: <b>[u]</b>Dobrý den<b>[/u]</b><br />Výsledkem je <u>Dobrý den</u></li></p><p><li>Pro text psaný kurzívou, obklopíte text mezi <b>[i][/i]</b><br /><br />příklad: Toto je <b>[i]</b>ukázka<b>[/i]</b><br />Výsledkem je Toto je <i>ukázka</i></li></p></ul>");
$faq[] = array("Jak změnit barvu a velikost písma", "Pro změnu barvy nebo velikosti textu je určeno několik příkazů. Dejte si pozor na to jak bude výstup zobrazen v závislosti na vašem prohlížeči a systému:<ul><li>pro změnu barvy textu, obklopíte požadovaný text mezi <b>[color=][/color]</b>. Můžete použít buď názvy barev (př. red, blue, yellow, atd.) nebo odpovídající hexadecimální kód barvy, př. #FFFFFF, #000000. Na příkladu si ukážeme jak vytvořit červený text:<br /><br /><b>[color=red]</b>Ahoj!<b>[/color]</b><br /><br />nebo<br /><br /><b>[color=#FF0000]</b>Ahoj!<b>[/color]</b><br /><br />Výsledkem bude <span style=\"color:red\">Ahoj!</span></li><li>Změnu velikosti textu provedeme obdobně použitím <b>[size=][/size]</b>. Tento příkaz má předdefinované číselné hodnoty, které mají přiřazenu odpovídající velikosti písma v bodech, počínaje 1 (velice malé písmo, nejmenší viditelné) až po 29 (velmi velké). Pro ukázku:<br /><br /><b>[size=9]</b>MALÉ<b>[/size]</b><br /><br />Výsledkem je <span style=\"font-size:9px\">MALÉ</span><br /><br />zatímco:<br /><br /><b>[size=24]</b>VELKÉ<b>[/size]</b><br /><br />zobrazí <span style=\"font-size:24px\">VELKÉ</span></li></ul>");
$faq[] = array("Je možno spojovat formátovací značky ?", "Ano, toto je možné, na následujícím příkladu si ukážeme jak správně tyto značky zapsat. Je velice důležité dodržet i jejich sled.<br /><br /><b>[size=18][color=red][b]</b>Podívej se<b>[/b][/color][/size]</b><br /><br />Výsledkem je <span style=\"color:red;font-size:18px\"><b>Podívej se</b></span><br /><br />Pokud nedodržíte sled ukončení značek v pořadí v jakém byly vkládány, bude text zobrazen chybně! Vždy je zapotřebí uzavírat značky ve sledu v jaké byly zadány. Podívejte se na následující ukázku kde jsou značky nekorektně uzavřeny:<br /><br /><p><b>[b][u]</b>Toto je špatně<b>[/b][/u]</b></p>");

$faq[] = array("--","Citace a pevná šířka textu při odeslání");
$faq[] = array("Citace textu v odpovědi", "Jsou dva způsoby zadání citovaného textu, s poukázáním a bez něj.<ul><li>Když je to vhodné můžete použít citát k příspěvku, který přidá poukázání a text do zvláštního boxu v příspěvku. Text citace uzavřete mezi <b>[quote=\"\"][/quote]</b>. Tento způsob přidá k citaci vaše poukázání koho citujete nebo komu je určen. V následujícím příkladu si ukážeme jak zadáme text, který vyslovil Karel Novák:<br /><br /><b>[quote=\"Karel Novák\"]</b>Toto je text, který vyslovil tento pán.<b>[/quote]</b><br /><br /> Výsledkem bude automatické přidání poukázání Karel Novák napsal: a text citace. Pokud chcete zadat text jako svůj vlastní citát případně nikoho neurčovat, zadáte jen závorky \"\". Tato volba není povinná.</li><p><li>Druhým způsobem je citovat text bez poukázání. Požadovaný text, který chcete citovat uzavřete mezi <b>[quote][/quote]</b>. Když si zobrazíte výsledek takovéto zprávy, bude zde nejprve namísto poukázání jen napsal: a text citátu.</li></p></ul>");

$faq[] = array("Výstup kódu nebo pevná šířka dat", "Jestliže chcete vložit kus kódu nebo cokoliv co vyžaduje pevnou šířku (font typu Courier), obklopte text mezi <b>[code][/code]</b><br /><br /><p>například: <b>[code]</b>echo \"Toto je kod\";<b>[/code]</b></p>");

$faq[] = array("--","Generování seznamu");
$faq[] = array("Vytváření jednoduchého seznamu", "Značky obsahují i příkazy pro vytváření seznamů. Podporovány jsou dva druhy seznamů, jednoduchý a struktorovaný. Jednoduchý seznam zobrazí jednotlive položky seznamu postupně pod sebou oddělené puntíkem. Pro vytvoření seznamu použijte <b>[list][/list]</b> a definujte jednotlivé položky pomocí <b>[*]</b>. Podívejte se na následující ukázku jednoduchého seznamu:<br /><br /><b>[list]</b><br /><b>[*]</b>červená<br /><b>[*]</b>modrá<br /><b>[*]</b>zelená<br /><b>[/list]</b><br /><br />Výsledkem by bylo:<ul><li>červená</li><li>modrá</li><li>zelená</li></ul>");
$faq[] = array("Vytváření strukturovaného seznamu", "Druhým způsobem je vytváření strukturovaných seznamů. Od předchozího typu se liší znakem před textem jednotlivých položek, namísto tečky je zde použit některý ze dvou způsobů vzestupného označení položek seznamu. Pro vytvoření číslovaného seznamu použijte <b>[list=1][/list]</b> a pro abecední seznam <b>[list=a][/list]</b>. Jednotlivé položky seznamu definujete pomocí <b>[*]</b>. Podívejte se na následující ukázku:<br /><br /><b>[list=1]</b><br /><b>[*]</b>červená<br /><b>[*]</b>modrá<br /><b>[*]</b>zelená<br /><b>[/list]</b><br /><br />Výsledkem bude:<ol type=\"1\"><li>červená</li><li>modrá</li><li>zelená</li></ol>Pro vytvoření abecedního seznamu použijte:<br /><br /><b>[list=a]</b><br /><b>[*]</b>první možná odpověď<br /><b>[*]</b>druhá možná odpověď<br /><b>[*]</b>třetí možná odpověď<br /><b>[/list]</b><br /><br />Výsledek:<ol type=\"a\"><li>první možná odpověď</li><li>druhá možná odpověď</li><li>třetí možná odpověď</li></ol>");

$faq[] = array("--", "Vytvoření odkazu");
$faq[] = array("Odkaz na jiné webové stránky", "phpBB značky podporují vytvoření URL odkazů odkazujících se na jiné internetové stránky či emailové adresy.<ul><li>Prvním způsobem je použít <b>[url=][/url]</b> značky, za znak = pak doplníte URL adresu na kterou chcete odkazovat. Text mezi oběma značkama bude zvýrazněn a sloužit jako odkaz na uvedenou URL adresu. Podívejte se na následující přiklad odkazující na server phpbb.com:<br /><br /><b>[url=http://www.phpbb.com/]</b>Stránky phpBB<b>[/url]</b><br /><br />Tímto se vygeneruje odkaz, <a href=\"http://www.phpbb.com/\" target=\"_blank\">Stránky phpBB</a> Pokud kliknete na tento vytvořený odkaz, otevře se vám v novém okně prohlížeče odkaz na který směřujete.</li><li>Jestliže chcete zobrazit URL přímo jako odkaz použijte následující postup:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Tímto se vygeneruje odkaz, <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>V případě zadání syntakticky správného URL i bez počátečního http:// do textu příspěvky automaticky odkaz na zadanou URL adresu. Pro ukázku si můžete zkusit napsat do příspěvku www.phpbb.com a uvidíte, že se vám text ve výsledku zobrazí automaticky jako odkaz <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a>.</li><li>Obdobným způsobem se dají vytvářet i odkazy na emailové adresy, zadejte požadovanou emailovou adresu dle příkladu:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />Výsledekm pak bude <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a> nebo můžete zadat v textu přípspěvku no.one@domain.adr a adresa se opět automaticky přemění na odkaz.</li></ul>URL odkaz můžete zadat mezi kterékoliv další značky: Uzavřete-li URL mezi <b>[img][/img]</b> (viz následující kapitola) může být odkazem i obrázek. Pouze opět nezapoměňte na správnou posloupnost uzavírání značek.");

$faq[] = array("--", "Zobrazení obrázků v příspěvcích");
$faq[] = array("Přidání obrázku do příspěvku", "phpBB značky dále umožňují vkládání obrázků do textu příspěvku či zprávy. Toto je velice užitečná vlastnost, díky níž nemusíte odkazovat na soubory obrázků o kterých například píšete, ale všichni uživatelé je ihned vidí ve vašem příspěvku. Jak bylo uvedeno výše, můžete využít obrázku k vytvoření URL odkazu na váš server nabo například pro zvětšeninu malého obrázku zde v příspěvku. Obrázek se musí ovšem vždy nacházet na internetu a být tak dostupný pro všechny uživatele, nelze se tedy odkazovat na soubory které máte například na lokálním disku vašeho počítače, jelikož k nim by uživatelé internetu neměli přístup. Pro zobrazení obrázku musíte uzavřít URL obrázku mezi <b>[img][/img]</b>.<br /><br />příklad: <b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Jestliže zadáte URL adresu obrázku mezi <b>[url][/url]</b>, může být odkazem obrázek.<br /><br />příklad: <b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />Výsledkem bude:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

//
// This ends the BBCode guide entries
//

?>