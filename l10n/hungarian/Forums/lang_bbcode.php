<?php
/*************************************************
 *                         lang_bbcode.php [Magyar]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Source: /cvs/l10n/hungarian/Forums/lang_bbcode.php,v $
 *   $Revision: 9.2 $
 *   $Author: djmaze $
 *   $Date: 2006/02/12 16:01:53 $
 *
 *     translated by	:  Szilard Andai
 *     web   	:  http://iranon.ezustkep.hu
 *     version	:  2.0.6
 *
 **********************************************************/ 

/*************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *********************************************************/

/* CONTRIBUTORS
	2002-12-15	Philip M. White (pwhite@mailhaven.com)
		Fixed many minor grammatical problems.
*/
 
// 
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\";
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//
  
$faq[] = array("--","Bevezető");
$faq[] = array("Mi az a BBCode?", "A BBCode egy speciális változata a HTML nyelvnek. A BBCode használatának engedélyezése a fórum Adminisztrátorától függ, de neked is lehetőséged van arra, hogy a hozzászólásaidban ki-, vagy bekapcsold a BBCode-t. A BBCode hasonló felépítésű, mint a HTML, kivéve hogy a tagek nem kacsacsőr között (&lt; és &gt;), hanem szögletes zárójelben \"[\" \"]\" vannak;  amellett  lehetőséget nyújt hogy hogyan és miként lehet a szövegeket szebben, jobban, tagoltabban megjeleníteni. A használatban lévő sablontól függ, hogy pontosan hol található meg a BBCode panel, melyről könnyedén és gyorsan be lehet illeszteni a tageket a szövegbe. Fontos, hogy mindig ügyeljünk a tagek lezárására. Az alábbiakban egy rövid bemutató található a BBCode lehetőségeiről.<br />");

$faq[] = array("--","Szövegformázás");
$faq[] = array("Hogyan készítsünk félkövér, dőlt és aláhúzott szöveget?", "A BBCode tagek lehetőséget adnak arra, hogy pillanatok alatt megváltoztathassuk a szöveg alapkinézetét. Ezt a következő módon érhetjük el: <ul><li>Félkövérhez <b>[b][/b]</b> közé zárjuk a szöveget, például: <b>[b]</b>Helló<b>[/b]</b><br /><br /> <b>Helló</b> lesz belőle<br /><br /></li><li>Aláhúzáshoz használjuk az <b>[u][/u]</b> taget, például: <b>[u]</b>Jó reggelt!<b>[/u]</b><br /><br /><u>Jó reggelt!</u> lesz belőle<br /><br /></li><li>Dőlt szöveghez használjunk <b>[i][/i]</b> taget, például: Ez <b>[i]</b>nagyszerű!<b>[/i]</b><br /><br />Ez <i>nagyszerű!</i></li></ul>");

$faq[] = array("Hogyan változtassuk meg a szöveg színét és méretét?", "A szín és méret megváltoztatásához az alábbi  tageket használhatjuk. Használat előtt vegyük figyelembe, hogy a megváltoztatott színű és méretű szöveg másként jelenítődhet meg a különféle böngészőkön és rendszereken, ezért ne vigyük túlzásba (pld. világos háttéren világos betűszín és/vagy túl apró betűméret használata).<ul><li>A szín megváltoztatásához: <b>[color=][/color]</b> tag szükséges. A szín megadható a nevével (piros, kék, fehér, zöld, stb.;  természetesen ezeket angolul, azaz \"red\", \"blue\", \"white\", \"green\"), vagy hexadecimális értékkel (#000000, #FFFFFF, stb.). Például egy piros szöveg készítése:<br /><br /><b>[color=red]</b>Helló!<b>[/color]</b><br /><br />vagy<br /><br /><b>[color=#FF0000]</b>Helló!<b>[/color]</b><br /><br />ugyanazt eredményezi: <span style=\"color:red\">Helló!</span><br /><br /></li><li>A szöveg átméretezése is hasonló a színezéshez: <b>[size=][/size]</b>. Ennek a tagnek a használata függ a használt sablontól, de az ajánlott használati forma az, hogy számmal (pixelben) adjuk meg a kívánt méretet; kezdve az 1-től (olyan apró, hogy nem is látható) a 29-ig (óriási). Például:<br /><br />A <b>[size=9]</b>KICSI<b>[/size]</b>-ből:<br /><br /><span style=\"font-size:9px\">KICSI</span> lesz<br /><br />Ehhez hasonlóan:<br /><br />az <b>[size=24]</b>ÓRIÁSI!<b>[/size]</b>-ból:<br /><br /><span style=\"font-size:24px\">ÓRIÁSI!</span></li></ul>");

$faq[] = array("Használhatok egyszerre többféle formázást?", "Igen, természetesen ezeket lehet kombinálni; például ha fel akarod hívni valakinek a figyelmét a szövegre:<br /><br />Az <b>[size=18][color=red][b]</b>OLVASD EL!<b>[/b][/color][/size]</b><br /><br /> kombináció ezt eredményezi: <span style=\"color:red;font-size:18px\"><b>OLVASD EL!</b></span><br /><br />Nem ajánlatos egyszerre sok ilyet használni, mert a szöveg nehezen lesz olvasható. Emlékeztetőül, mindig figyelj a tagek sorrendjére. A következő példa hibás:<br /><br /><b>[b][u]</b>Ez így hibás<b>[/b][/u]</b><br />");

$faq[] = array("--","Idézetek");
$faq[] = array("Idézés", "Két módon lehet lehet idézni: vagy megadva az illetőt, akitől idézünk, vagy anélkül.<ul><li>Ha valakinek válaszolni akarunk, akkor a <b>[quote=\"\"][/quote]</b> taget használjuk, ahol az idézőjel közé írjuk az idézett személy nevét (vagy bármi mást). Ugyanez történik, ha valakinek a hozzászólásában az \"Idézés\"-re kattintunk: ekkor egy új hozzászólás készül, melyben a <b>[quote=\"\"][/quote]</b> tagek közé kerül az illető hozzászólása.<br />Ha például Pacák úrtól akarunk idézni, akkor a következőt írjuk:<br /><br /><b>[quote=\"Pacák úr\"]</b>Ide a Pacák úr által írt szöveg kerül<b>[/quote]</b><br /><br />A beírt szöveg elé automatikusan odakerül hogy: Pacák úr írta. Fontos, az egyenlőségjel után <b>kötelező</b> idézőjelbe tenni az idéző nevét, ezt nem lehet lehagyni.<br /><br /></li><li>A második módszerrel egyszerűen idézhetünk bárkitől. Ehhez a a szöveget egy <b>[quote][/quote]</b> tagbe zárjuk. Az elküldés után látjuk, hogy az idézet elé csak egy \"Idézet\" szöveg került.</li></ul>");

$faq[] = array("Kódok megjelenítése", "Ha valamilyen programkódot, vagy fix szélességet igénylő szöveget szeretnél beírni (pld. Courier betűtípussal), akkor a <b>[code][/code]</b> tag közé kell tenni. Például:<br /><br /><b>[code]</b>echo \"Ez valami kód\";<b>[/code]</b><br /><br />A <b>[code][/code]</b> tagen belül ne használj más formázást, mivel azok érvényüket vesztik.<br />");

$faq[] = array("--","Listák készítése");
$faq[] = array("Rendezetlen lista készítése", "A BBCode kétfajta listakészítést támogat, a rendezetlen és rendezett listát. A rendezetlen listában minden elem elkülönül egymástól , és mindegyik elé egy pont kerül. A lista készítéséhez a <b>[list][/list]</b> taget használjuk, és minden elemet egy <b>[*]</b> taggel definiálunk (a többi taggel ellentétben ezt nem kell lezárni). Például:<br /><br /><b>[list]</b><br /><b>[*]</b>Piros<br /><b>[*]</b>Kék<br /><b>[*]</b>Sárga<br /><b>[/list]</b><br /><br />Ez a következőt eredményezi:<ul><li>Piros</li><li>Kék</li><li>Sárga</li></ul>");

$faq[] = array("Rendezett lista készítése", "A másik típus a rendezett lista. A rendezett listával sorszámozhatjuk, sorrendet állíthatunk fel az elemek között. Ezt a <b>[list=1][/list]</b> taggel tehetjük meg. Készíthetünk betű általi sorolást is, a <b>[list=a][/list]</b> taggel. Az egyes elemeket itt is a [*] taggel határozzuk meg. Példa:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Elmenni a boltba<br /><b>[*]</b>Új számítógép vásárlása<br /><b>[*]</b>Rácsapni a gépre, ha lefagy<br /><b>[/list]</b><br /><br />eredménye a következő:<ol type=\"1\"><li>Elmenni a boltba</li><li>Új számítógép vásárlása</li><li>Rácsapni a gépre, ha lefagy</li></ol>Alfabetikus listánál a következőképp használjuk:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Első lehetséges válasz<br /><b>[*]</b>Második lehetséges válasz<br /><b>[*]</b>Harmadik lehetséges válasz<br /><b>[/list]</b><br /><br />eredménye:<ol type=\"a\"><li>Első lehetséges válasz</li><li>Második lehetséges válasz</li><li>Harmadik lehetséges válasz</li></ol>");

$faq[] = array("--", "Hivatkozások készítése");
$faq[] = array("Hivatkozás egy másik weboldalra", "A phpBB BBCode-ja több lehetőséget biztosít a hivatkozások készítésére. A hivatkozásnak egy URL-re (Universe Resource Locator; ezt jelenti magát a webcímet) kell mutatnia.<ul><li>Az egyik, az <b>[url=][/url]</b> tag használata. Az egyenlőségjel után írt szövegnek az URL-nek kell lennie. Például, egy link a phpBB oldalára a következőképpen néz ki:<br /><br /><b>[url=http://phpbb.com/]</b>A phpBB weboldala!<b>[/url]</b><br /><br />Ez a következő linket eredményezi: <a href=\"http://phpbb.com/\" target=\"_blank\">A phpBB weboldala!</a> A weboldal egy új ablakban fog megnyílni, így a témát nyugodtan lehet olvasni közben.<br /><br /></li><li>Ha csak magát az URL-t akarod megjeleníteni, akkor a következőt használd:<br /><br /><b>[url]</b>http://phpbb.com/<b>[/url]</b><br /><br />Ez a következőt eredményezi: <a href=\"http://phpbb.com/\" target=\"_blank\">http://phpbb.com/</a><br /><br /></li><li>Ezenkívül a phpBB egy <i>Link Varázsló</i> lehetőséggel is rendelkezik: ha szintaktikailag megfelelő a szöveg, akkor azt automatikusan linkké alakítja át; ha a cím \"www\"-vel, vagy \"http://\"-rel kezdődik. Például a phpbb.com-ból automatikusan <a href=\"http://phpbb.com/\" target=\"_blank\">phpbb.com</a> lesz.<br /><br /></li><li>Ehhez hasonlóan működik az emailcímek kezelése is, például a <br /><br /><b>[email]</b>nem.letezo@email.cim<b>[/email]</b><br /><br />eredménye a <a href=\"emailto:nem.letezo@email.cim\">nem.letezo@email.cim</a>. Vagy egyszerűen csak írd be az emailcímet, és az automatikusan átkonvertálódik email hivatkozássá.</li></ul>Hasonlóan a többi BBCode taghez, a webcímeket is körbe lehet venni más formázó taggel: <b>[img][/img]</b> (lásd a következő példát), <b>[b][/b]</b>, stb. Mint a formázó tageknél, itt is ügyelni kell a megfelelő sorrendre, és a tagek lezárására:<br /><br /><b>[url=http://phpbb.com/][img]</b>http:e//phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br />Ez <u>hibás</u> hivatkozás, amiért akár törölhetik is a hozzászólást.<br />");

$faq[] = array("--", "Képek megtekintése");
$faq[] = array("Képek beszúrása a hozzászólásba", "A phpBB BBCode-ja lehetőséget nyújt, hogy képeket illeszünk be egy hozzászólásba. Három dolgot ne felejtsünk ezzel kapcsolatban: számos felhasználó nem szereti, ha sok kép van a fórumban (a sok kép megnöveli az oldal letöltésének idejét), a képek ne legyenek túl nagy felbontásúak (egy nagy kép széttöri az oldalt), és hogy a képnek elérhetőnek kell lennie az interneten (nem elég ha a helyi számítógépen van; kivétel ha webszerver fut a gépen!). Jelenleg nincs lehetőség arra, hogy a képeket itt a Fórumon tárold. Egy kép megjelenítéséhez a következő taget kell használni: <b>[img][/img]</b>. Például:<br /><br /><b>[img]</b>http://phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Mint a hivatkozásoknál, úgy a képeknél is van lehetőség a tagek egymásba ágyazására, pld. a képet egy  <b>[url][/url]</b> tag köré is írhatod, stb.<br /><br /><b>[url=http://phpbb.com/][img]</b>http://phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />eredménye:<br /><br /><a href=\"http://phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Egyéb dolgok");
$faq[] = array("Használhatok saját tageket?", "A jelenlegi 2.0-ás fórum nem teszi lehetővé a saját tagek használatát.");

//
// This ends the BBCode guide entries
//