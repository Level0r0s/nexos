<?php
/*************************************************
 *                         lang_bbcode.php [Serbian]
 *                            -------------------
 *     begin                : Monday Sep 30 2002
 *     copyright            : (C) 2002 Simic Vladan
 *     email                : vlada@cybercom.co.yu
 *
 *     $Source: /cvs/l10n/serbian/Forums/lang_bbcode.php,v $
 *     $Revision: 9.2 $
 *     $Author: djmaze $
 *     $Date: 2006/02/12 16:02:22 $
 *Encoding test n-array summation ∑ latin ae with acute ǽ
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

$faq[] = array("--","Uvod");
$faq[] = array("ta je BBKod?", "BBKod je specijalna implementacija HTML-a. Da li moete koristiti BBKod u vaim porukama na forumu odreuje administrator. Moete onemoguiti BBKod na formi za slanje poruka. BBKod sam po sebi je slian stilu u HTML, tagovi su umetnuti u vitiastim zagradama [ i ] radije nego &lt; i &gt; i nudi veu kontrolu kako je neto prikazano. U zavisnosti od podloge koju koristite videete da je dodavanje BBKoda vaim porukama mnogo lakke kliktanjem mia na polja iznad poruke na formi za unos poruka. ak i sa tim moda e vam ovaj vodi biti od koristi.");

$faq[] = array("--","Formatiranje teksta");
$faq[] = array("Kako napisati podebljan, kosi i podrueni tekst", "BBKod sadri tagove  koji vam omoguuju da brzo promenite osnovni stil vaeg teksta. Ovo se postie na vie naina: <ul><li>Da bi ste napisali tekst podebljano umetnite ga u <b>[b][/b]</b>, npr. <br /><br /><b>[b]</b>Zdravo<b>[/b]</b><br /><br />e postati <b>Zdravo</b></li><li>Za podvlaenje koristite <b>[u][/u]</b>, na primer:<br /><br /><b>[u]</b>Dobro jutro<b>[/u]</b><br /><br />postaje <u>Dobro jutro</u></li><li>Da iskosite tekst koristite <b>[i][/i]</b>, npr.<br /><br />Ovo je <b>[i]</b>sjajno!<b>[/i]</b><br /><br />e dati Ovo je <i>sjajno!</i></li></ul>");
$faq[] = array("Kako da promenim boju teksta ili veliinu", "Da bi ste izmenili boju ili veliinu teksta moete koristiti sledee tagove. Zapamtite da e krajnji rezujtat zavisiti od browsera itaa i sistema: <ul><li>Menjanje boje teksta mogue je tako to ete ga umetnuti u <b>[color=][/color]</b>. Moete odrediti prepoznatljiv naziv boje (npr. crvena, plava, uta, itd.) ili u heksadecimalnom obliku, npr. #FFFFFF, #000000. Na primer, za crveni tekst koristite:<br /><br /><b>[color=red]</b>Zdravo!<b>[/color]</b><br /><br />ili<br /><br /><b>[color=#FF0000]</b>Zdravo!<b>[/color]</b><br /><br />e u oba sluaja dati <span style=\"color:red\">Zdravo!</span></li><li>Menjanje veliine teksta je slino koristei <b>[size=][/size]</b>. Ovaj tag zavisi od podloge koju koristite ali preporueni format je numerika vrednost koja predstavlja veliinu teksta u pikselima, poevi od 1 (toliko malo da ga neete ni videti) pa sve do 29 (veoma veliko). Na primer:<br /><br /><b>[size=9]</b>MALO<b>[/size]</b><br /><br />e generalno biti <span style=\"font-size:9px\">MALO</span><br /><br />dok e:<br /><br /><b>[size=24]</b>OGROMNO!<b>[/size]</b><br /><br />biti <span style=\"font-size:24px\">OGROMNO!</span></li></ul>");
$faq[] = array("Da li mogu da kombinujem tagove za formatiranje?", "Da, naravno da moete, na primer da biste privukli panju moete pisati:<br /><br /><b>[size=18][color=red][b]</b>POGLEDAJ ME!<b>[/b][/color][/size]</b><br /><br />ovo e dati <span style=\"color:red;font-size:18px\"><b>POGLEDAJ ME!</b></span><br /><br />Ne preporuujemo da piete puno teksta koji izgleda ovako! Zapamtite da je na vama, tj, piscu da se pobrine da su tagovi pravilno zatvoreni. Na primer ovo je netano:<br /><br /><b>[b][u]</b>Ovo je netano<b>[/b][/u]</b>");

$faq[] = array("--","Citiranje i dobijanje teksta fiksne irine");
$faq[] = array("Citiranje teksta u odgovorima", "Postoje dva naina kojima moete citirati tekst, sa ili bez reference.<ul><li>Kada koristite Quote funkciju za odgovor na poruku primetiete da je tekst poruke dodat u prozoru poruke umetnut u <b>[quote=\"\"][/quote]</b> bloku. Ovaj metod vam omoguava da citirate sa referencom na osobu ili bilo ta drugo to elite da stavite! Na primer da biste citirali deo tekst Mr. Bloby upiite:<br /><br /><b>[quote=\"Mr. Blobby\"]</b>Tekst Mr. Blobby koji ste napisali e otii ovde<b>[/quote]</b><br /><br />Rezultujua poruka e automatski dodati, Mr. Blobby wrote: pre samog teksta. Zapamtite da <b>morate</b> ubaciti zagrade \"\" oko imena koga citirate, jer nisu opcione.</li><li>Drugi metod vam omoguava da slepo citirate neto. Da biste ovo iskoristili umetnite tekst u <b>[quote][/quote]</b> tagove. Kada pogledate poruku jednostavno e se prikazati, Quote: pre samog teksta.</li></ul>");
$faq[] = array("Dobijanje koda ili podatke fiksne irine", "Ako elite da prikaete deo koda ili u stvari bilo ta to zahteva fiksnu irinu, npr. Courier font - treba umetnuti tekst u <b>[code][/code]</b> tagove, npr.<br /><br /><b>[code]</b>echo \"Ovo je neki kod\";<b>[/code]</b><br /><br />Sva formatiranja koriena izmeu <b>[code][/code]</b> tagova su zapamena kada ih kasnije pogledate.");

$faq[] = array("--","Generisanje lista");
$faq[] = array("Pravljenje nesreene liste", "BBKod podrava dva tipa lista, nesreene i sreene. One su bitne isto koliko i njihova HTML zamena. Nesreena lista daje svaku stavku dosledno jednu za drugom drugom uvlaei svaku stavku. Da biste napravili nesreenu lisu koristite <b>[list][/list]</b> i definiite svaku stavku liste koristei <b>[*]</b>. Na primer da biste izlistali vae omiljene boje koristite:<br /><br /><b>[list]</b><br /><b>[*]</b>Crvena<br /><b>[*]</b>Plava<br /><b>[*]</b>uta<br /><b>[/list]</b><br /><br />Ovim se dobija sledea lista:<ul><li>Crvena</li><li>Plava</li><li>uta</li></ul>");
$faq[] = array("Pravljenje sreene liste", "Drugi tip liste, sreena lista daje vam kontrolu kakav e biti rezultat pre svake stavke. Da biste napravili sreenu listu koristite <b>[list=1][/list]</b> da napravite listu brojeva ili alternativno <b>[list=a][/list]</b> za abecednu listu. Kao i kod nesreene liste stavke se oznaavaju sa <b>[*]</b>. Na primer:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Idite u prodavnicu<br /><b>[*]</b>Kupite nov kompjuter<br /><b>[*]</b>Zakunite se pred kompjuterom da kada se razbije<br /><b>[/list]</b><br /><br />e dati sledee:<ol type=\"1\"><li>Idite u prodavnicu</li><li>Kupite nov kompjuter</li><li>Zakunite se pred kompjuterom da kada se razbije</li></ol>Dok za abecednu listukoristite:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Prvi mogui odgovor<br /><b>[*]</b>Drugi mogui odgovor<br /><b>[*]</b>Trei mogui odgovor<br /><b>[/list]</b><br /><br />daje<ol type=\"a\"><li>Prvi mogui odgovor</li><li>Drugi mogui odgovor</li><li>Trei mogui odgovor</li></ol>");

$faq[] = array("--", "Pravljenje linkova");
$faq[] = array("Link na drugi sajt", "phpBB BBKod vie naina da napravite URI-e, Uniform Resource Indicators poznatije kao URLs.<ul><li>Prvi od njih koristi <b>[url=][/url]</b> tag, ta god ukucali posle = znaka e prouzrokovati da se sadraj taga ponaa kao URL. Na primer da bi ste linkovali na phpBB.com koristite:<br /><br /><b>[url=http://phpbb.com/]</b>Posetite phpBB!<b>[/url]</b><br /><br />Ovo e generisati sledei link, <a href=\"http://phpbb.com/\" target=\"_blank\">Posetite phpBB!</a> Primetiete da se link otvara u novom prozoru pa korisnik moe nastaviti rad na forumu ako eli.</li><li>Ako elite da se URL prikae kao link moete to jednostavno izvesti koristei:<br /><br /><b>[url]</b>http://phpbb.com/<b>[/url]</b><br /><br />Ovo e generisati sledei link, <a href=\"http://phpbb.com/\" target=\"_blank\">http://phpbb.com/</a></li><li>Dodatne phpBB mogunosti zvane <i>Magini linkovi</i>, e pretvoriti svaki sintaksno taan URL u link bez potrebe da definiete bilo kakav tag ili ak i prefiks http://. Na primer kucanjem phpbb.com u vaoj poruci automatski dobijate <a href=\"http://phpbb.com/\" target=\"_blank\">phpbb.com</a> kada pogledate poruku.</li><li>Isto se deava i sa email adresama, moete ili naznaiti adresu na primer:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />to e rezultovati <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a> ili moete jednostavno uneti no.one@domain.adr u vaoj poruci i bie automatski konvertovano kada pogledate poruku.</li></ul>Kao to sa svim BBKod tagovima moete umotati URLs oko bilo kojeg taga kao to je <b>[img][/img]</b> (Vidi sledei pasus), <b>[b][/b]</b>, itd. tako i sa tagovima za formatiranje morate paziti da se pravilno zatvore, na primer:<br /><br /><b>[url=http://phpbb.com/][img]</b>http://phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br /><u>nije</u> tano to moe dovesti da se vaa poruka izbrie pa zato pazite.");

$faq[] = array("--", "Prikazivanje slika u porukama");
$faq[] = array("Dodavanje slike u poruku", "phpBB BBKod sadri tag sa ubacivanje slika u vae poruke. Dve vrlo vane stvari koje trebate da upamtite prilikom korienja ovog taga su; mnogi korisnici ne cene puno slika u porukama i drugo slika koju prikazujete mora ve biti dostupna na internetu (ne moe postojati na vaek kompjuteru na primer, osim ako nemate web server!). Trenutno ne postoji nain uvanja slika lokalno sa phpBB (sva ova ogranienja bi trebalo da budu ugraena u sledeu verziju phpBB). Da biste prikazali sliku morate okruiti URL koji vodi do slike sa <b>[img][/img]</b> tagovima. Na primer:<br /><br /><b>[img]</b>http://phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Kao to ste primetili u URL delu iznad moete okruiti sliku u <b>[url][/url]</b> tag ako elite , npr.<br /><br /><b>[url=http://phpbb.com/][img]</b>http://phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />e dati:<br /><br /><a href=\"http://phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Ostalo");
$faq[] = array("Mogu li da dodam sopstvene tagove?", "Ne, bar ne direktno u verziji phpBB 2.0. Gledaemo da ponudimo proizvoljne tagove u sledeoj verziji");

//
// This ends the BBCode guide entries
//