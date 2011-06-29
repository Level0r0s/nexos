<?php
/*************************************************
 *                          lang_faq.php [czech]
 *                          --------------------
 *     characterset         : Windows-1250
 *     phpBB version        : 2.0.2
 *     copyright            : (c) 2002 The phpBB CZ Group
 *     translation          : info@emilio.cz
 *     www                  : phpbb.atmplus.cz
 *
 *     $Id: lang_faq.php,v 9.2 2006/02/12 16:01:43 djmaze Exp $
 *
 *
 *********************************************************/

/*************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *********************************************************/

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


$faq[] = array("--","Registrace a přihlášení");
$faq[] = array("Proč se nemohu přihlásit ?", "Už jste se zaregistrovali ? Před přihlášením je nutné se nejdříve registrovat. Byla vám na fóru zakázána činnost (v takovém případě se tato skutečnost zobrazí) ? Pokud ano, kontaktujte administrátora a ptejte se na důvody. Pokud jste se registrovali, nebyli jste z fóra vyloučeni a stále se nemůžete přihlásit, znovu zkontrolujte přihlašovací jméno a heslo. Obvykle toto bývá ten problém a pokud není, kontaktujte administrátora, možná má chybné nastavení fóra.");
$faq[] = array("Je vůbec potřeba se registrovat ?", "Nemusíte. Vše je na administrátorovi fóra, zda je potřeba se registrovat ke vkládání příspěvků. Samozřejmě, že registrace vám dá přístup k ostatním službám nedostupným anonymním uživatelům, jako např. postavičky, soukromé zprávy, emailování uživatelů, přihlášení do skupin, atd. Vřele vám tedy registraci doporučujeme. Zabere to jen pár chvil.");
$faq[] = array("Proč jsem automaticky odhlášen ?", "Pokud nezaškrtnete tlačítko <i>Automatické přihlášení</i>, když se přihlásíte, budete přihlášeni jen po dobu práce na fóru. Toto má zabránit zneužití vašeho účtu někým jiným. Abyste zůstali přihlášeni, zaškrtněte toto políčko, když se přihlásíte.Toto ovšem nedoporučujeme, když se přihlašujete z veřejného počítače, např. v knihovně, internetové kavárně, univerzitě atd.");
$faq[] = array("Jak zabráním, aby se moje uživatelské jméno objevilo v seznamu právě přihlášených ?", "Ve vašem nastavení najdete možnost <i>Ukrýt se při přihlášení</i>, pokud tuto možnost <i>zvolíte</i> budete viditelní jen pro administrátory nebo sami sobě. Budete počítáni jako ukrytý uživatel.");
$faq[] = array("Zapomněl jsem heslo!", "Nepanikařte! Vaše heslo můžeme obnovit. V tomto případě zmáčkněte na přihlašovací stránce tlačítko <u>Zapomněl jsem svoje heslo</u>, pokračujte dle instrukcí a téměř ihned budete přihlášeni");
$faq[] = array("Zaregistroval jsem se, ale nemohu se přihlásit!", "Nejprve zkontrolujte, že zadáváte správné uživatelské jméno a heslo. Pokud jsou v pořádku, pak se mohla odehrát jedna z následujících dvou věcí. Pokud je umožněna podpora COPPA a klikli jste při registraci na odkaz <u>Je mi méně než 13 let</u>  budete muset následovat zaslané instrukce. Pokud toto není ten případ, pak váš účet musí být aktivován. Některé boardy potřebují aktivaci všech nových registrací, buď Vámi nebo administrátorem před tím, než se můžete přihlásit. Když jste registrovali, byli byste k tomuto vyzváni. Pokud vám byl zaslán e-mail, následujte instrukce v něm obsažené, pokud jste tento email neobdrželi, ujistěte se, že vámi zadaná emailová adresa je platná ? Jeden důvod, proč se aktivace používá je zmenšit možnost <i>červených</i> uživatelů obtěžujících board anonymně. Pokud si jste jisti, emailová adresa, kterou jste použili je platná, zkontaktujte administrátora boardu.");
$faq[] = array("V minulosti jsem se zaregistroval, ovšem nyní se nemohu přihlásit ?!", "Nejpravděpodobnější důvody; zadali jste chybné uživatelské jméno nebo heslo (zkontrolujte email, který jste obdrželi, když jste se zaregistrovali) nebo administrátor z nějakého důvodu smazal váš účet. Pokud je to ten druhý případ, pak jste možná nevložili žádný příspěvek ? Je to obvyklé, že pravidelně se odstraňují uživatelé, kteří ničím nepřispěli, aby se zmenšila velikost databáze. Zkuste se zaregistrovat znovu a zapojte se do diskuzí.");


$faq[] = array("--","Uživatelská nastavení ");
$faq[] = array("Jak změním svoje nastavení ?", "Všechna vaše nastavení (pokud jste registrováni) jsou uloženy v databázi. Ke změně stačí zmáčknout tlačítko odkazu <u>Profil</u> (obvykle se objevuje na horní části stránky, ale toto nemusí být ten případ). Takto si můžete změnit veškerá svá nastavení.");
$faq[] = array("Časy jsou špatně!", "Časy jsou téměř vždy v pořádku, ovšem to, co vidíte jsou časy zobrazené v jiném časovém pásmu než v tom, ve kterém se nacházíte. Pokud je to tak, změňte si časové pásmo v profilu. Berte na vědomí, že změnou časového pásma a podobná nastavení mohou měnit jen registrovaní uživatelé. Takže pokud nejste registrováni, toto je dobrý důvod, proč tak učinit!");
$faq[] = array("Změnil jsem čas. pásmo, ale je to stále špatně!", "Jste si jisti, že jste zadali čas.pásmo správně a přesto se liší od toho správného, pak tou nejpravděpodobnější odpovědí je, že se jedná o letní čas. Fórum není stavěno na registrování rozdílů mezi standardním a letním časem, takže se může jednat o 1 hodinový rozdíl.");
$faq[] = array("Můj jazyk není na seznamu!", "Zřejmě administrátor nenainstaloval tento jazyk, neboť jej nikdo do tohoto jazyka zatím nepřeložil. Kontaktujte administrátora, případně si překlad vytvořte sami. Pro více informací se podívejte na stránky phpBB Group");
$faq[] = array("Jak zobrazím obrázek pod uživ. jménem ?", "Možná, že jste zaregistrovali při prohlížení příspěvků dva obrázky pod uživatelským jménem. Ten první je obrázek spojený s vaší úrovní, obvykle ve tvaru hvězdiček nebo kostiček ukazující, kolik příspěvků jste již přidali, nebo vaší pozici ve fóru. Pod ním se může nacházet větší obrázek, známý jako \"postavička\" (avatar), což je vlastně unikátní obrázek každého uživatele. Záleží na administrátorovimini, zda postavičky povolí či jak s nimi naloží (v jaké podobě se zobrazí). Pokud nemůžete využívat postavičky, pak právě tehdy toto administrátoři zakázali, a vy byste se měli zeptat na důvody (věříme, že se šiknou!)");
$faq[] = array("Jak změní svoje zařazení ?", "Obecně vzato, svoje zařazení změnit přímo nemůžete (úrovně se objevují pod vaším uživatelským jménem v tématech a na vašem profilu, což záleží na použitém vzhledu). Většina nástěnek používají hodnocení úrovní k rozlišení počtu vámi přidaných příspěvků a k identifikaci určitých uživatelů, např. označení moderátorů a administrátorů může mít zvláštní vzhled. Prosím, nezatěžujte board zbytečným přispívánímjen, abyste dosáhli vyšší úrovně. Moderátor nebo administrátor pak může počet vašich příspěvků snížit.");
$faq[] = array("Když kliknu na emailový odkaz na uživatele, jsem vyzván k přihlášení", "Pouze registrovaní uživatelé mohou posílat email lidem přes nastavený emailový formulář (pokud administrátor tuto možnost povolil). Toto umožňuje se zbavit otravných anonymních vzkazů.");


$faq[] = array("--","Vkládání příspěvků");
$faq[] = array("Jak vložím téma do fóra ?", "Jednouše. Klikněte na příslušné tlačítko na obrazovce fóra nebo tématu. Možná bude nutné se registrovat, než budete moci přispět do diskuze, to, co vám je povoleno můžete vidět na spodní části fóra nebo tématu (Např.<i>Můžete přidávat nová témata, Můžete volit v anketách, atd.<i>)");
$faq[] = array("Jak změním nebo smažu příspěvek ?", "V případě, že nejste moderátor nebo administrátor, tak můžete upravovat nebo mazat jen svoje příspěvky. Můžete upravit zprávu (někdy jen do omezeného času po přispění) kliknutím na tlačítko <i>upravit</i>.  Pokud již někdo odpověděl na váš příspěvek, objeví se vám malinký výstup textíku pod příspěvkem, když se vrátíte k tématu, což ukazuje, kolikrát jste tento příspěvek upravovali. Toto se objeví, pokud nikdo neodpovídal, nebo pokud moderátor či administrátor změnili příspěvek (měli by zanechat vzkaz proč jej změnili). Normální uživatelé nemohou příspěvek smazat, pokud na něj někdo již odpověděl.");
$faq[] = array("Jak přidám podpis k mému příspěvku ?", "Přidat podpis znamená, že si musíte nejdřív nějaký vytvořit. To uděláte přes položku profil. Po vytvoření si zkontrolujte položku <i>Přidat podpis</i>. Můžete rovněž přidat stejný podpis pro všechny vaše příspěvky zaškrtnutím příslušného políčka v profilu (je možné nepřidávat podpis k vybraným příspěvkům odstraněním tohoto zaškrtnutí");
$faq[] = array("Jak vytvořím anketu ?", "Vytvoření ankety je jednoduché. Když přidáte nový příspěvek (nebo upravovat první příspěvek, pokud můžete) měli byste vidět tlačítko <i>Přidat anketu</i> pod hlavním oknem na přidávání příspěvků (pokud to nevidíte, zřejmě nemáte oprávnění vytvářet ankety). Měli byste zadat název ankety a pak alespoň 2 možnosti (nastavte napsáním název otázky a klikněte na <i>Přidat možnost</i>. Můžete také přidat časový limit pro anketu, kde 0 znamená neomezenou volbu. Nastavením administrátora tak vznikne limit pro možnosti, které uvedete");
$faq[] = array("Jak změním nebo smažu anketu ?", "Je to stejné jako s příspěvky, ankety mohou být editovány původním autorem, moderátorem nebo adminem. Editaci zahájíte kliknutím na první příspěvek v tématu (toto je vždy s anketou spojeno). Pokud nikdo zatím nehlasovat, pak uživatelé mohou vymazat nebo změnit položku v anketě, v případě již uskutečněné volby to tak může učinit jen moderátor nebo admin. Toto by mělo zabránit v manipulaci s výsledky ankety");
$faq[] = array("Proč se nemohu dostat k fóru ?", "Některá fóra mohou být znepřístupněna určitým lidem či skupinám. Ke čtení, prohlížení, či přispívat atd. potřebujete  zvláštní autorizaci, kterou může poskytnout jen moderátor a admin, takže kontaktujte je.");
$faq[] = array("Proč nemohu hlasovat v anketě ?", "Hlasovat mohou jen registrovaní uživatelé (aby nebyly zkresleny výsledky). Pokud jste registrováni a stále nemůžete volit, zřejmě nemáte oprávněný přístup.");


$faq[] = array("--","Formátování a typy příspěvků");
$faq[] = array("Co je BBCode ?", "BBCode je zvláštní implementace HTML, kde použití BBCode je rozhodnutí administrátora (můžete toto nepovolit pro jednotlivé příspěvky). BBCode sám o sobě je podobný stylem HTML, tagy jsou uzavřeny v hranatých závorkách [ a ] více než &lt; a &gt; a nabízí větší kontrolu nad tím, co a jak se zobrazí. Pro více informací o BBCode prohlédněte si průvodce.");
$faq[] = array("Můžu používat HTML ?", "To závisí na tom, zda vám to administrátor povolí. Pokud to máte povoleno, zjistíte, že jen některé tagy fungují. Což je <i>bezpečnostní</i> funkce, která zamezí zneužití nebo zničení vzhledu či způsobení jiných problémů. Pokud je HTML povoleno můžete je zase příspěvek od příspěvku tuto volbu zakázat.");
$faq[] = array("Co to jsou smajlíky ?", "Smajlíky, neboli Emotikony jsou malé grafické obrázky, které se používají k vyjádření výrazu emocí za použití malého kódu, např. :) znamená šťastný, :( znamená smutný. Plný seznam smajlíků si můžete prohlédnout přes příspěvkový formulář. Prosím, zkuste tyto smajlíky nepřeužívat, aby se příspěvek nestal nečitelným. Moderátor může také případně váš příspěvek v tomto směru změnit.");
$faq[] = array("Mohu přidávat obrázky ?", "Obrázky se mohou zobrazovat ve vašich příspěvcích. Ačkoliv v současné době neexistuje žádná funkce k nahrání obrázků přímo na board. Z tohoto důvodu musíte uvést na takový obrázek odkaz, např. http://nekde-na-internetu.cz/muj-obrazek.gif. Nemůžete udělat odkazy na obrázky na vlastním PC (pokud to není veřejně přístupná stanice) nebo obrázky za prověřujícími mechanismy, např. schránky hotmail nebo yahoo, zaheslované odkazy, atd. K zobrazení obrázku použijte buď BBCode [img] tag nebo příslušné HTML (je-li povoleno).");
$faq[] = array("Co to jsou oznámení ?", "Oznámení často přinášejí důležité informace a měli byste je číst co nejdříve. Oznámení se objevují na horní části každé stránky fóra, kde jsou uvedeny. Zda můžete či nemůžete přispívat oznámeními záleží na dostupných povoleních, které jsou nastaveny administrátorem.");
$faq[] = array("Co to jsou přilepená témata ?", "Přilepená témata se objevují dole a pouze na první stránce. Jsou často velmi důležitá, takže si je přečtěte tam, kde jsou. Stejně jako u oznámení rozhoduje administrátor, která povolení jsou potřeba k přilepení takových témat v každém fóru.");
$faq[] = array("Co to jsou uzamčená témata ?", "Uzamčená témata jsou nastavena moderátorem nebo administrátorem. Nemůžete odpovídat na zamčená témata a každá taková anketa je automaticky ukončena. Témata mohou být uzavřena z mnoha důvodů.");


$faq[] = array("--","Uživatelské úrovně a skupiny");
$faq[] = array("Kdo jsou administrátoři ?", "Administrátoři jsou lidé pověření nejvyšší kontrolou nad celým fórem. Tito lidé mohou kontrolovat veškerý chod boardu včetně povolování, zakazování uživatelů, vytváření uživatelských skupin nebo moderátorů, atd. Mají také všechny pravomoci moderátorů v celém fóru.");
$faq[] = array("Kdo jsou moderátoři ?", "Moderátoři jsou jednotlivci (nebo skupiny jednotlivců), jejichž práce je starat se o chod boardů každý den. Mají právo upravovat nebo mazat příspěvky, zamykat/odmykat, přesouvat, mazat a rozdělovat témata, která spravují. Obecně řečeno, moderátoři jsou od toho, aby lidé nepřispívali <i>mimo téma<i> nebo nepřidávali otravný materiál.");
$faq[] = array("Co jsou uživatelské skupiny ?", "Uživatelské skupiny jsou cestou, kterou administrátoři mohou seskupovat uživatele. Každý uživatel může patřit do několika skupin (to záleží i na ostatních boardech) a každé skupině může být připsán individuální přístup. To umožňuje administrátorům snáze nastavit několik uživatelů jako moderátory fóra, nebo jim dát přístup na privátní fórum, atd.");
$faq[] = array("Jak se mohu zapojit do uživ. skupiny ?", "Připojit se do uživatelské skupiny stačí kliknout na odkaz uživatelské skupiny na titulku stránky (záleží na vzoru), a pak můžete vidět všechny skupiny. Ne všechny skupiny mají <i>otevřený přístup</i>, některé jsou uzavřené a některé mají utajené členství. Pokud je board otevřený, můžete zažádat o zařazení kliknutím na příslušné tlačítko. Moderátor uživatelské skupiny musí vaši žádost schválit, a může se vás zeptat na důvody, proč chcete do skupiny vstoupit. Prosím, nenadávejte moderátorovi, pokud vaší žádosti nevyhoví. Má svůj důvod.");
$faq[] = array("Jak se stanu moderátorem uživatelské skupiny ?", "Uživatelské skupiny jsou původně vytvořeny adminem a mohou také ustanovit moderátora. Máte-li zájem vytvořit uživatelskou skupinu, pak jako prvního kontaktujte administrátora soukromou zprávou.");


$faq[] = array("--","Soukromé zprávy");
$faq[] = array("Nemůžu posílat soukromé zprávy!", "Pro toto existují 3 důvody. Nejste registrovaní nebo nejste přihlášeni, administrátor znemožnil posílání soukromých zpráv pro celý board nebo to admin zakázal vám. Pokud toto je ten důvod, zeptejte se admina, proč to tomu tak je.");
$faq[] = array("Dostávám nechtěné soukromé zprávy!", "Plánujeme přidání seznamu ignorovaných v systému zasílání privátních zpráv. Nyní, pokus dostáváte takové vzkazy, kontaktujte svého admina, který má tu moc takovému uživateli zasílání zpráv zakázat.");
$faq[] = array("Dostal jsem spamový a obtížný mail od někoho z fóra!", "To je nám líto. Příspěvkové formuláře obsahují obranné mechanismy, kterými se snažíme vystopovat takového uživatele. Měli byste napsat administrátorovi a zaslat plnou kopii emailu, který jste obdrželi, což je velmi důležité (kvůli hlavičce, která potřebné informace obsahuje). Oni pak mohou konat.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","Záležitosti okolo phpBB 2");
$faq[] = array("Kdo napsal tento program ?", "Tento software (v její nemodifikované formě) je vytvořen, zveřejněn a chráněn autorskými právy <a href=\"http://phpbb.com/\" target=\"_blank\">phpBB Group</a>. Je dostupný pod the GNU General Public Licence a může být volně distribuován. Pro více informací klikněte <a href=\"http://phpbb.com/\" target=\"_blank\">zde</a>");
$faq[] = array("Proč není k dispozici funkce X ?", "Tento software byl napsán a licencován přes phpBB Group. Máte-li dojem, že je potřeba přidat nějakou funkci, navštivte stránku phpbb.com a ověřte si, co phpBB Group řekne. Prosím, nevkládejte tyto požadavky na fóru phpbb.com, the Group používá sourceforge ke zkoušení nových voleb. Prosím, pročtěte si fóra a ověřte si, zda už se něco takového nezkoušelo a následujte příslušné instrukce.");
$faq[] = array("Koho mám kontaktovat ohledně obtížných emailů nebo právních záležitostí boardu ?", "Měli byste kontaktovat administrátora tohoto fóra. Když ho nemůžete najít, zkuste nejprve kontaktovat moderátora fóra a přeptejte se na kontakt. Pokud se nic neděje, kontaktujte majitele domény (zkuste vyhledat na \"whois\") nebo, pokud tato služba běží na freeserveru (např. yahoo, free.fr, f2s.com, atd.), management nebo oddělení stížností takového provozovatele. Berte na vědomí, že phpBB Group nemá vůbec žádnou moc a nemůže nijak ovlivnit to jak, kdo a kde spravuje board. Je tedy absolutně bezpředmětné kontaktovat phpBB Group v jakékoliv právní záležitosti (nactiutrhání, pomluvy, atd.) nepřímo spojený s phpbb.com nebo se samotným software phpBB. Pokud zašlete email phpBB Group o použití softwaru třetí stranou neočekávejte žádnou odpověď.");

//
// This ends the FAQ entries
//

