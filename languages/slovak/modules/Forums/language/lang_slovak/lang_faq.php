<?php
/***************************************************************************
 *                          lang_faq.php [Slovak]
 *                          --------------------
 *     characterset         : Windows-1250
 *     begin                : 09-08-2002
 *     copyright            : (c) 2002 The phpBB CZ Group
 *     translation          : kolenkas@stonline.sk
 *     convert2iso          : Kukymann
 *     www                  : 
 *
 *     $Id: lang_faq.php,v 1.1 2004/08/04 01:20:54 akamu Exp $
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
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\"
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//
 
  
$faq[] = array("--","Registrácia a prihlásenie");
$faq[] = array("Prečo sa nemôžem prihlásiť?", "Už ste sa zaregistrovali? Pred prihlásením je potrebné najskôr sa zaregistrovať. Bola Vám na fóre zakázaná činnosť (v takom prípade sa táto skutočnosť zobrazí)? Pokiaľ áno, kontaktujte administrátora a pýtajte sa na dôvody. Pokiaľ ste sa zaregistrovali, neboli ste z fóra vylúčení a stále sa nemôžete prihlásiť, znova skontrolujte svoje prihlasovacie meno a heslo. Obyčajne toto býva ten problém a pokiaľ nie je, kontaktujte administrátora, možno má chybné nastavenia fóra.");
$faq[] = array("Je vôbec potrebné sa zaregistrovať?", "Nemusíte. Všetko záleží na administrátorovi fóra, či je potrebné sa zaregistrovať ku vkladaniu príspevkov. Samozrejme, že registrácia Vám umožní prístup k ostatným službám nedostupným anonymným užívateľom, ako napr. smajlíky, súkromné správy, emailovanie užívateľov, prihlásenie do skupín, atď. Vrele Vám teda registráciu doporučujeme. Zaberie to len chvíľu.");  
$faq[] = array("Prečo som automaticky odhlásený?", "Pokiaľ nezaškrtnete tlačítko <i>Automatické prihlásenie</i>, keď sa prihlásite, budete prihlásený len počas práce vo fóre. Toto má zabrániť zneužitiu Vášho účtu niekým iným. Aby ste zostali prihlásený, zaškrtnite toto políčko, keď se prihlásite. Toto však nedoporučujeme, keď sa prihlasujete z verejného počítača, napr. v knižnici, z internetovej kaviarne, na univerzite atď.");
$faq[] = array("Ako zabránim, aby sa moje užívateľské meno objavilo v zozname práve prihlásených ?", "Vo Vašom nastavení nájdete možnosť <i>Ukryť sa pri prihlásení</i>, pokiaľ túto možnosť <i>zvolíte</i> budete viditeľný len pre administrátorov alebo sami sebe. Budete počítáný ako ukrytý užívateľ.");
$faq[] = array("Zabudol som heslo!", "Nepanikárte! Vaše heslo môžeme obnovit. V tomto prípade stlačte na prihlasovacej stránke tlačítko <u>Zabudol som svoje heslo</u>, pokračujte podľa inštrukcií a takmer ihneď budete prihlásený");
$faq[] = array("Zaregistroval som sa, ale nemôžem sa prihlásiť!", "Najskôr skontrolujte, že zadávate správne užívateľské meno a heslo. Pokiaľ sú v poriadku, potom sa mohla stať jedna z nasledovných dvoch vecí. Pokiaľ je povolená podpora COPPA a klikli ste pri registrácii na odkaz <u>Mám menej ako 13 rokov</u>  budete musieť postupovať podľa zaslaných inštrukcií. Pokiaľ toto nie je ten prípad, potom Váš účet musí byť aktivovaný. Niektoré boardy potrebujú aktiváciu všetkých nových registrácií, buď Vami alebo administrátorom pred tým, ako sa môžete prihlásiť. Keď ste sa registrovali, boli by ste k tomu vyzvaný. Pokiaľ Vám bol zaslaný e-mail, postupujte podľa inštrukcií v ňom uvedených, pokiaľ ste tento e-mail neobdržali, potom teda ste si istý, že Vaša emailová adresa bola platná ? Jeden dôvod, prečo sa aktivácia používa, je zmenšiť možnosť <i>červených</i> užívateľov obťažujúcich board anonymne. Pokiaľ si ste istí, emailová adresa, ktorú ste použili je platná, skontaktujte administrátora boardu.");
$faq[] = array("V minulosti som sa zaregistroval, avšak teraz sa nemôžem prihlásiť?!", "Najpravdepodobnejšie dôvody; zadali ste chybné uživateľské meno alebo heslo (skontrolujte e-mail, ktorý ste obdržali, keď ste sa zaregistrovali) alebo administrátor z nejakého dôvodu zmazal Váš účet. Pokiaľ je to ten druhý prípad, potom ste možno nevložili žiadny príspevok ? Je to bežné, že sa pravidelne odstraňujú užívatelia, ktorí ničím neprispeli, aby sa zmenšila veľkosť databázy. Skúste sa zaregistrovať znova a zapojte sa do diskusií.");


$faq[] = array("--","Užívateľské nastavenia ");
$faq[] = array("Ako zmením svoje nastavenia ?", "Všetky Vaše nastavenia (pokiaľ ste zaregistrovaný) sú uložené v databáze. Ku zmene stačí stlačiť tlačítko odkazu <u>Profil</u> (zvyčajne sa objavuje na hornej časti stránky, ale toto nemusí byť ten prípad). Toto Vám umožní zmeniť si všetky Vaše nastavenia");
$faq[] = array("Časy sú chybné!", "Časy sú takmer vždy v poriadku, avšak to, čo vidíte sú časy zobrazené v inom časovom pásme než v tom, v kterom sa nachádzate. Pokiaľ je to tak, zmeňte si časové pásmo v profile. Berte na vedomie, že zmenu časového pásma a podobné nastavenia môžu meniť len registrovaní uživatelia. Takže pokiaľ nie ste registrovaný, toto je dobrý dôvod, prečo tak urobiť!");
$faq[] = array("Zmenil som časové pásmo, ale je to stále chybne!", "Ak ste si istí, že ste zadali časové pásmo správne a aj tak sa líši od toho správneho, tak tou najpravdepodobnejšou odpoveďou je, že sa jedná o letný čas. Fórum nie je stavané na registrovanie rozdielov medzi štandardným a letným časom, takže sa môže jednať o 1 hodinový rozdiel.");
$faq[] = array("Môj jazyk nie je na zozname!", "Pravdepodobne administrátor nenainštaloval tento jazyk, alebo ho nikto do tohoto jazyka zatiaľ nepreložil. Kontaktujte administrátora, prípadne si preklad vytvorte sami. Pre viac informácií navštívte stránky phpBB Group");
$faq[] = array("Ako zobrazím obrázok pod užívateľským menom ?", "Možno ste zaregistrovali pri prezeraní príspevkov dva obrázky pod užívateľským menom. Ten prvý je obrázok spojený s Vašou úrovňou, zvyčajne v tvare hviezdičiek alebo kocočiek ukazujúcich, koľko príspevkov ste už pridali, alebo Vašu pozíciu vo fóre. Pod ním sa môže nachádzať väčší obrázok, známy ako \"postavička\" (avatar), čo je vlastne unikátny obrázok každého užívateľe. Záleží na administrátorovi fóra, či postavičky povolí, či ako s nimi naloží (v akej podobe sa zobrazia). Pokiaľ nemôžete využívať postavičky, potom práve vtedy toto administrátori zakázali, a Vy by ste sa mali spýtať na dôvody (veríme, že se hodia!)");
$faq[] = array("Ako zmeniť svoje zaradenie?", "Zvyčajne svoje zaradenie zmeniť priamo nemôžete (úrovne sa objavujú pod Vašim užívateľským menom v témach a vo Vašom profile, čo záleží na použitom vzhľade). Väčšina diskusných fór používa hodnotenie úrovní k rozlíšeniu počtu Vami pridaných príspevkov a k identifikácii určitých užívateľov, napr. označenie moderátorov a administrátorov môže mať zvláštny vzhľad. Prosím, nezaťažujte board zbytočným prispievaním len aby ste dosiahli vyššej úrovne. Moderátor alebo administrátor potom môže počet Vašich príspevkov znížiť.");
$faq[] = array("Keď kliknem na emailový odkaz na užívateľa, som vyzvaný k prihláseniu", "Len zaregistrovaní užívatelia môžu posielať e-mail ľuďom cez      nastavený emailový formulár (pokiaľ administrátor túto možnosť povolil). Toto umožňuje zbaviť sa otravných anonymných správ.");


$faq[] = array("--","Vkladanie príspevkov");
$faq[] = array("Ako vložím tému do fóra ?", "Jednoucho. Kliknete na príslušné tlačítko na obrazovke fóra alebo témy. Možno bude potrebné sa zaregistrovať, skôr ako budete môcť prispieť do diskusie, to čo máte povolené môžete vidieť na spodnej časti fóra alebo témy (Napr.<i>Môžete pridávať nové témy, Môžete voliť v anketách, atd.<i>)");
$faq[] = array("Ako zmením alebo zmažem príspevok ?", "V prípade, že nie ste moderátor alebo administrátor, tak môžete upravovať alebo mazať len svoje príspevky. Môžete upraviť správu (niekedy len do obmedzeného času po prispení) kliknutím na tlačítko <i>upraviť</i>.  Pokiaľ už niekto odpovedal na Váš príspevok, objaví sa Vám malinký výstup textíku pod príspevkom, keď sa vrátite k téme, čo ukazuje koľkokrát ste tento príspevok upravovali. Toto sa objaví, pokiaľ nikto neodpovedal, alebo pokiaľ moderátor či administrátor zmenili príspevok (mali by zanechať odkaz prečo ho zmenili). Normálni užívatelia nemôžu  príspevok zmazať, pokiaľ naň niekto už odpovedal.");
$faq[] = array("Ako pridám podpis k môjmu príspevku ?", "Pridať podpis znamená, že si musíte najprv nejaký vytvoriť. To urobíte cez položku profil. Po vytvorení si skontrolujte položku <i>Pridať podpis</i>. Môžete tiež pridať rovnaký podpis pre všetky Vaše príspevky zaškrtnutím príslušného políčka v profile (je možné nepridávať podpis k vybratým príspevkom odstránením tohoto zaškrtnutia");
$faq[] = array("Ako vytvorím anketu ?", "Vytvorenie ankety je jednoduché. Keď pridáte nový príspevok (alebo upravovať prvý príspevok, pokiaľ môžete) mali by ste vidieť tlačítko <i>Pridať anketu</i> pod hlavným oknom na pridávanie príspevkov (pokiaľ to nevidíte, zrejme nemáte oprávnenie vytvárať ankety). Mali by ste zadať názov ankety a potom aspoň 2 možnosti (nastavte napísaním názov otázky a kliknite na <i>Pridať možnosť</i>. Môžete tiež pridať časový limit pre anketu, kde 0 znamená neobmedzenú voľbu. Nastavením administrátora tak vznikne limit pre možnosti, ktoré uvediete");
$faq[] = array("Ako zmením alebo zmažem anketu ?", "Je to rovnaké ako s príspevkami, ankety môžu byť editované pôvodným autorom, moderátorom alebo adminom. Editáciu zahájite kliknutím na prvý príspevok v téme (toto je vždy s anketou spojené). Pokiaľ nikto zatiaľ nehlasoval, potom môžu užívatelia vymazať alebo zmeniť položku v ankete, v prípade už uskutočnenej voľby to tak môže urobiť len moderátor nebo administrátor. Toto by malo zabrániť v manipulácii s výsledkami ankety");
$faq[] = array("Prečo sa nemôžem dostať k fóru ?", "Niektoré fóra môžu byť zneprístupnené určitým ľuďom či skupinám. K čítaniu, prehliadaniu, či prispievaniu atď. potrebujete zvláštnu autorizáciu, ktorú môže poskytnúť len moderátor a administrátor, takže kontaktujte niekoho z nich.");
$faq[] = array("Prečo nemôžem hlasovať v ankete ?", "Hlasovať môžu len registrovaní užívatelia (aby neboli skreslené výsledky). Pokiaľ ste zaregistrovaný a stále nemôžete hlasovať, pravdepodobne nemáte oprávnený prístup.");


$faq[] = array("--","Formátovanie a typy príspevkov");
$faq[] = array("Čo je BBCode?", "BBCode je zvláštna implementácia HTML, kde použitie BBCode je rozhodnutie administrátora (môžete toto nepovoliť pre jednotlivé príspevky). BBCode sám o sebe je podobný štýlom HTML, tagy sú uzavreté v hranatých zátvorkách [ a ] viac ako &lt; a &gt; a ponúka väčšiu kontrolu nad tým, čo a ako sa zobrazí. Pre viac informácií o BBCode si pozritee si sprievodcu.");
$faq[] = array("Môžem používať HTML?", "To závisí na tom, či to administrátorpovolí. Pokiaľ to máte povolené, zistíte že fungujú len niektoré tagy. Čo je <i>bezpečnostná</i> funkcia, ktorá zamedzí zneužitiu alebo zničeniu vzhľadu či spôsobenie iných problémov. Pokiaľ je HTML povolené, môžete túto voľbu príspevok od příspěvku zakázať.");
$faq[] = array("Čo to sú smajlíky ?", "Smajlíky, či Emotikony sú malé grafické obrázky, ktoré sa používají k vyjadreniu výrazu emócií za použitia malého kódu, napr. :) znamená šťastný, :( znamená smutný. Plný zoznam smajlíkov si môžete prohliadnuť cez príspevkový formulár. Prosím, skúste tieto smajlíky nadmerne nepoužívať, aby sa príspevok nestal nečitateľným. Eventuálne môže moderátor Váš príspevok v tomto smere zmeniť");
$faq[] = array("Môžem pridávať obrázky ?", "Obrázky sa môžu zobrazovať vo Vašich príspevkoch. Aj keď v súčasnej dobe neexistuje žiadna funkcia k nahratiu obrázkov priamo na board. Z tohto dôvodu musíte uviesť na takýto obrázok odkaz, napr. http://www.niekde-na-internete.sk/moj-obrazok.gif. Nemôžete urobiť odkazy na obrázky na vlastnom PC (pokiaľ to nie je verejne prístupná stanica) alebo obrázky za preverujúcimi mechanizmami, napr. schránky hotmail alebo yahoo, zaheslované odkazy, atď. K zobrazeniu obrázku použite buď BBCode [img] tag alebo príslušné HTML (ak je povolené).");
$faq[] = array("Čo sú to oznámenia ?", "Oznámenia často prinášajú dôležité informácie a mali by ste ich čítať čo najskôr. Oznámenia sa objavujú na hornej časti každej stránky fóra, kde sú uvedené. Tu môžete či nemôžete prispievať oznámeniami. To záleží na dostupných povoleniach, ktoré sú nastavené administrátorom.");
$faq[] = array("Čo sú to prilepené témy ?", "Prilepené témy sa objavujú dole a len na prvej stránke. Sú často veľmi dôležité, takže si ich prčítajte tam kde sú. Rovnako ako pri oznámeniach rozhoduje administrátor, ktoré povolenia sú    potrebné k prilepeniu takýchto tém v každom fóre.");
$faq[] = array("Čo sú to uzamknuté témy ?", "Uzamknuté témy sú nastavené moderátorom alebo administrátorom. Nemôžete odpovedať na uzamknuté témy a každá taká anketa je automaticky ukončená. Témy môžu byť uzavreté z rôznych dôvodov.");


$faq[] = array("--","Užívateľské úrovne a skupiny");
$faq[] = array("Kto sú to administrátori ?", "Administrátori sú ľudia poverení nejvyššou kontrolou nad celým fórom. Títo ľudia môžu kontrolovať celý chod boardu vrátane povoľovaní, zakazovaní užívateľov, vytvárenie užívateľských skupín alebo moderátorov, atď. Majú tiež všetky oprávnenia moderátorov v celom fóre.");
$faq[] = array("Kto sú to moderátori ?", "Moderátori sú jednotlivci (alebo skupiny jednotlivcov), ktorých práca je starať se o chod boardov každý deň. Majú právo upravovať alebo mazať príspevky, zamykať/odomykať, presúvať, mazať a rozdeľovať témy, ktoré spravujú. Dá sa povedať, že moderátori sú od toho, aby ľudia neprispievali <i>mimo témy<i> alebo nepridávali otravný materiál.");
$faq[] = array("Čo sú to užívateťské skupiny ?", "Užívateľské skupiny sú cestou, ktorou administrátori môžu zoskupovať užívateľov. Každý užívateľ môže patriť do niekoľkých skupín (to záleží aj na ostatných boardoch) a každej skupine môže byť pripísaný individuálny prístup. To umožňuje administrátorom ľahšie nastaviť niekoľko užívateľov ako moderátorov fóra, alebo im dať prístup na privátne fórum, atď.");
$faq[] = array("Ako sa môžem zapojiť do užívateľskej skupiny?", "Pripojiť sa do užívateľskej skupiny stačí kliknúť na odkaz užívateľskej skupiny na titulku stránky (záleží na vzhľade), a potom môžete vidieť všetky skupiny. Nie všetky skupiny majú <i>otvorený prístup</i>, niektoré sú uzavreté a niektoré majú utajené členstvo. Pokiaľ je board otvorený, môžete požiadať o zaradenie kliknutím na príslušné tlačítko. Moderátor užívateľskej skupiny musí Vašu žiadosť schváliť, a môže sa Vás opýtať na dôvody, prečo chcete do skupiny vstúpiť. Prosím, nenadávajte moderátorovi, pokiaľ Vašej žiadosti nevyhovie. Má svoj dôvod.");
$faq[] = array("Ako sa stanem moderátorom užívateľskej skupiny?", "Užívateľské skupiny sú pôvodne vytvorené administrátorom a môžu tiež ustanoviť moderátora. Ak máte záujem vytvoriť užívateľskú skupinu, potom ako prvného kontaktujte administrátora súkromnou správou.");


$faq[] = array("--","Súkromné správy");
$faq[] = array("Nemôžem posielať súkromné správy!", "Existujú 3 dôvody pre toto; nie ste zaregistrovaní alebo nie ste prihlásený, administrátor znemožnil posielanie súkromných správ pre celý board alebo to administrátor zakázal Vám. Pokiaľ toto je ten dôvod, spýtajte sa administrátora, prečo tomu tak je.");
$faq[] = array("Dostávam nechcené súkromné správy!", "Plánujeme pridanie zoznamu ignorovaných v systéme pre zasielanie privátnych správ. Pokiaľ dostáváte takéto správy, kontaktujte svojho administrátora, ktorý má tú moc takému užívateľovi posielanie správ zakázať.");
$faq[] = array("Dostal som spamový a otravný e-mail od niekoho z fóra!", "To je nám ľúto. Príspevkové formuláre obsahujú obranné mechanizmy, ktorými sa snažíme vystopovať takéhoto užívateľa. Mali by ste napísať administrátorovi a zaslať mu plnú kópiu e-mailu, ktorý ste obdržali, čo je veľmi dôležité (kvôli hlavičke, ktorá potrebné informácie obsahuje). Oni potom môžu konať.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","Záležitosti okolo phpBB 2");
$faq[] = array("Kto napísal tento program?", "Tento software (v jeho nemodifikovanej forme) je vytvorený, zverejnený a chránený autorskými právami <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. Je dostupný pod the GNU General Public Licence a môže byť voľne distribuovaný, kliknite pre viacíce detailov");
$faq[] = array("Prečo nie je k dispozícii funkcia X ?", "Tento software bol napísaný a licencovaný cez phpBB Group. Ak máte dojem, že je potrebné pridať nejakú funkciu, navštívte stránku phpbb.com a overte si, čo phpBB Group povie. Prosím, nevkladajte tieto požiadavky na fóre phpbb.com, the Group používa sourceforge ku skúšaniu nových volieb. Prosím, prečítajte si fóra a overte si, či už sa niečo také nezkúšalo a riaďte sa príslušnými inštrukciami.");
$faq[] = array("Koho mám kontaktovať ohľadom otravných e-mailov alebo právnych záležitostí boardu?", "Mali by ste kontaktovať administrátora tohoto fóra. Keď ho nemôžete nájsť, skúste najskôr kontaktovať moderátora fóra a opýtajte sa na kontakt. Pokiaľ sa nič nedeje, kontaktujte majiteľa domény (skúste vyhľadaľ na \"whois\") alebo, pokiaľ táto služba beží na freeserveri (napr. yahoo, free.fr, f2s.com, atď.), management alebo oddelenie sťažností takéhoto prevádzkovateľa. Berte na vedomie, že phpBB Group nemá vôbec žiadnu moc a nemôže nijako ovplyvniť to ako, kto a kde spravuje board. Je teda absolutne bezpredmetné kontaktovať phpBB Group v akejkoľvek právnej záležitosti (nactiutrhanie, ohováranie, atď.) nepriamo spojenej s phpbb.com alebo so samotným software phpBB. Pokiaľ zašlete e-mail phpBB Group o použití softwaru treťou stranou neočakávajte žiadnu odpoveď.");

//
// This ends the FAQ entries
//

?>