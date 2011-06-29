<?php
/*************************************************
 *                         lang_bbcode.php [english]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Source: /cvs/l10n/slovenian/Forums/lang_bbcode.php,v $
 *   $Revision: 9.2 $
 *   $Author: djmaze $
 *   $Date: 2006/02/12 16:02:23 $
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

/* CONTRIBUTORS
	2002-12-15	Philip M. White (pwhite@mailhaven.com)
Prevedel: Ladislav Golouh, Razmerje.com, Ladislavg@razmerje.com
Dodal sem alineji: Kaj so označbe in kako lahko napišem označbe.
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
  
$faq[] = array("--","Navodila");
$faq[] = array("Kaj so kode BBCode?", "BBCode kode so oblika HTML jezika. Ali lahko uporabljaš jezik BBCode v svojih objavah na forumu, odloči administrator. Poleg tega lahko sam onemogočiš BBCode kode v določeni objavi v obrazcu za pošiljanje sporočila. BBCode kode so preprostejša oblika HTML: označbe (ukazi) so obdani z oglatimi oklepaji [ in ], kar je bolje kot &lt; in &gt; ob tem ponuja boljši nadzor nad tem, kaj in kako nekdo želi nekaj prikazati. Odvisno od predloge, ki jo uporabljate, lahko najdete dodatke za BBCode kode, ki vam še olajšajo oblikovanje vašega sporočila preko gumbov za klikanje z miško nad poljem za vpis sporočila v obrazcu za pošiljanje. Pričujoči vodnik vam bo v pomoč tudi pri tem.");

$faq[] = array("Kaj so označbe", "Označba ali tag je ukaz, ki spremeni del besedila v želeno obliko. Vsaka označba ima začetek in zaključek, ki se od začetne označbe praviloma razlikuje s tem, da ima na začetku znotraj oklepaja še poševnico /. Znotraj oklepajev ni presledkov! Z označbami (tags) torej programirate besedilo za prikaz.");
$faq[] = array("Kako lahko napišem označbe", " Podrobnosti preberite spodaj. Tukaj na splošno. Lahko preprosto odtipkate oglati oklepaj (če prestavite na angleško tipkovnico, npr. s ctrl+shift, ali si ga kopirate) [, sledi ukaz, npr. b, oglati zaklepaj ]. In zaključni ukaz, ki vsebuje za prvim oklepajem [ poševnico / pred ukazom b]. Znotraj oklepajev ne sme biti nobenega presledka! Najlažji način je, da označite tekst in potem kliknete ustrezno označbo, ki omeji tekst z začetno in s končno označbo. Ko pišete, se na koncu teksta doda oznaka, ki jo dobite s tipko alt in prvo črko oznake (alt+b za krepko, alt+q za citiram). Ko naslednjič pritisnete alt+ prvo črko oznake, se izpiše zaključni ukaz. Ali ko pritisnite vrstico z besedilom <u>Zaključne oznake odprtih ukazov</u>, da se zaključijo odprti ukazi na koncu teksta. Namig: označbo lahko označite in jo z miško prestavite ali kopirate na želeno mesto v besedilu. Odvečne označbe izbrišite.");

$faq[] = array("--","Oblikovanje besedila");
$faq[] = array("Kako oblikujemo krepko, poševno in podčrtano besedilo", "BBCode kode vsebujejo označbe (ukaze), ki omogočajo hitre spremembe osnovnega sloga v vašem besedilu. To lahko dosežete na naslednje načine: <ul><li>Da bi del besedila označili krepko,ga zaprete med označbi <b>[b][/b]</b>, npr. <br /><br /><b>[b]</b>Zivijo<b>[/b]</b><br /><br />postane <b>Zivijo</b></li><li>Za podčrtano besedilo uporabite <b>[u][/u]</b>, na primer:<br /><br /><b>[u]</b>Dobro jutro<b>[/u]</b><br /><br />postane <u>Dobro jutro</u></li><li>Za poštevno besedilo uporabite <b>[i][/i]</b>, npr.<br /><br />Tukaj je <b>[i]</b>Čudovito!<b>[/i]</b><br /><br /> in dobite Tukaj je <i>Čudovito!</i></li></ul>");
$faq[] = array("Kako spremenimo barvo in velikost besedila", "Za spremembo barve ali velikosti besedila uporabite naslednje označbe. Vedite, da je odvisno od gledalčevega brskalnika in sistema to, kako bo potem izgledalo: <ul><li>Spremembo barve besedila dosežemo tako, da besedilo ogradimo, damo med oznaki <b>[color=][/color]</b>. Lahko določite bodisi znano ime barve (npr. red za rdeče, blue za modro, yellow za rumeno, itd.) bodisi vstavote heksadecimalni trojček za barve, npr. #FFFFFF, #000000. Za primer, da bi dobili rdeče besedilo, lahko uporabite:<br /><br /><b>[color=red]</b>Zivijo!<b>[/color]</b><br /><br />ali<br /><br /><b>[color=#FF0000]</b>Zivijo!<b>[/color]</b><br /><br />, oboje bo dalo <span style=\"color:red\">Zivijo!</span></li><li>Sprememba velikosti besedila dosežemo na preprost način z uporabo oznak <b>[size=][/size]</b>. Te označbe so odvisne od predloge, ki jo uporabaljate, toda zahtevani format je številčna oblika, ki predstavlja velikost pisave v pikslih, začne se pri 1 (je tako drobna, da je ne boste videli) do 29 (zelo velika). Za primer:<br /><br /><b>[size=9]</b>MAJHNO<b>[/size]</b><br /><br />bo običajno <span style=\"font-size:9px\">MAJHNO</span><br /><br />medtem ko:<br /><br /><b>[size=24]</b>OGROMNO!<b>[/size]</b><br /><br />bo <span style=\"font-size:24px\">OGROMNO!</span></li></ul>");
$faq[] = array("Ali lahko kombiniram oblikovne označbe?", "Ja, seveda lahko; na primer, da bi pritegnili pozornost nekoga, lahko napišete:<br /><br /><b>[size=18][color=red][b]</b>POGLEJ ME!<b>[/b][/color][/size]</b><br /><br />to se prikaže kot <span style=\"color:red;font-size:18px\"><b>POGLEJ ME!</b></span><br /><br />Kljub temu ne priporočamo, da prikazani deli izgledajo kot to! Vedite, da je odvisno od vas, ki objavljate, da so označbe pravilno zaključene. Na primer, tole ni pravilno:<br /><br /><b>[b][u]</b>Tole manjka<b>[/b][/u]</b>");

$faq[] = array("--","Citiranje in prikazovanje nespremenjenega besedila");
$faq[] = array("Citiranje besedila v odgovorih", "Dva načina sta, da lahko citirate besedilo: z imenom ali brez.<ul><li>Kadar uporabite funkcijo Citiraj za odgovor na sporočilo na plošči, upoštevajte, da je besedilo objave, na katero odgovarjate, v besedilnem oknu že ograjeno z <b>[quote=\"\"][/quote]</b> označbama. Ta način vam omogoči, da citirate z imenom osebe ali karkoli želite vnesti kot ime. Na primer, da bi citirali del besedila Gd. Debeljak je napisal, lahko vnesete:<br /><br /><b>[quote=\"Gd. Debeljak\"]</b>Besedilo Gd. Debeljaka bo tukaj<b>[/quote]</b><br /><br />V prikazenem besedilu bo avtomatično dodano: Gd. Debeljak je napisal/-a: pred citiranim besedilom. Pomnite, da <b>morate</b> dati med narekovaje \"\" ime, ki ga citirate -- to ni samo možnost.</li><li>Drugi način omogoča slepo citiranje nečesa. Ko npr. ponavljate citate istega avtorja. Da bi uporabili ta način, ogradite besedilo med <b>[quote][/quote]</b> označbi. Prikazano besedilo bo preprosto dodalo: Citiram: pred samim označenim besedilom.</li></ul>");
$faq[] = array("Prikazovanje kode ali nespremenjenih podatkov", "Če želite prikazati del kot kodo, pravzaprav karkoli želite ohraniti kot Courier-tip pisave, morate ograditi besedilo med <b>[code][/code]</b> označbi, npr.<br /><br /><b>[code]</b>echo \"To je del kode\";<b>[/code]</b><br /><br />Vse oblikovanje znotraj <b>[code][/code]</b> označb ostane nespremenjeno, ko ga pozneje prikažete.");

$faq[] = array("--","Ustvarjanje seznamov");
$faq[] = array("Ustvarjanje neurejenega seznama", "BBCode kode podpirajo dva tipa seznamov, neurejenega in urejenega. Oba sta v osnovi enaka kot HTML različica. Neurejen seznam prikaže vsako točko na vašem seznamu zaporedno enega za drugim znakom krogca. Da ustvarili neurejen seznam, uporabite <b>[list][/list]</b> in določite vsako točko znotraj seznama z uporabo <b>[*]</b>. Na primer, za seznam vaših najljubših barv, lahko uporabite:<br /><br /><b>[list]</b><br /><b>[*]</b>Rdeča<br /><b>[*]</b>Modra<br /><b>[*]</b>Rumena<br /><b>[/list]</b><br /><br />Tako boste izoblikovali naslednji seznam:<ul><li>Rdeča</li><li>Modra</li><li>Rumena</li></ul>");
$faq[] = array("Ustvarjanje urejenega seznama", "Drugi tip seznama, urejen seznam, vam omogoča nadzor nad prikazom pred vsako točko. Da bi ustvarili urejen seznam uporabite <b>[list=1][/list]</b> , da bi dobili oštevilčen seznam ali druga možnost <b>[list=a][/list]</b> za alfabetični (črkovni) seznam. Kot pri neurjenem seznamo točke določite z uporabo <b>[*]</b>. Na primer:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Pojdi v trgovine<br /><b>[*]</b>Kupi nov računalnik<br /><b>[*]</b>Preklinjaj računalnik, ko se raztrešči<br /><b>[/list]</b><br /><br /> bo prikazano kot:<ol type=\"1\"><li>Pojdi v trgovine</li><li>Kupi nov računalnik</li><li>Preklinjaj računalnik, ko se raztrešči</li></ol>Medtem ko pri alfabetičnem (črkovnem) seznamu uporabite:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Prvi možni odgovor<br /><b>[*]</b>Drugi možni odgovor<br /><b>[*]</b>Tretji možni odgovor<br /><b>[/list]</b><br /><br />daje<ol type=\"a\"><li>Prvi možni odgovor</li><li>Drugi možni odgovor</li><li>Tretji možni odgovor</li></ol>");

$faq[] = array("--", "Ustvarjanje povezav");
$faq[] = array("Povezava na neko drugo stran", "phpBB BBCode kode podpirajo številne načine ustvarjanja URI-jev, Uniform Resource Indicators bolje znanih kot URL-ji.<ul><li>Prva možna uporaba je <b>[url=][/url]</b> označba; karkoli natipkate za znakom = bo prikazano kot vsebina te označbe kot URL. Na primer, povezavo do phpBB.com lahko uporabite za:<br /><br /><b>[url=http://phpbb.com/]</b>Obišči phpBB!<b>[/url]</b><br /><br />To bo ustvarilo naslednjo povezavo, <a href=\"http://phpbb.com/\" target=\"_blank\">Obišči phpBB!</a> Opazili boste, da povezava odpre novo okno, tako da uporabniki lahko nadaljujejo brskanje po forumu, če želijo.</li><li>Če želite prikazati samoo URL kot povezavo, lahko preprosto uporabite:<br /><br /><b>[url]</b>http://phpbb.com/<b>[/url]</b><br /><br />To bo ustvarilo naslednjo povezavo: <a href=\"http://phpbb.com/\" target=\"_blank\">http://phpbb.com/</a></li><li>Poleg tega phpBB nekaj oblik naziva <i>Magične Povezave</i>, ki bodo katerokoli sintaktično pravilno URL v povezavo, ki ji ni treba dodati nobene posebne označbe ali celo začetni http://. Na primer, ko natipkate phpbb.com v vaše sporočilo, se avtomatično oblikuje v <a href=\"http://phpbb.com/\" target=\"_blank\">phpbb.com</a> ko prikažete sporočilo.</li><li>Enako se zgodi pri E-poštnjih naslovih; lahko določite naslov posebej, kot:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />, ki prikaže <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a> ali samo odtipkate no.one@domain.adr v vaše sporočilo in avtomatično se bo preoblikovalo med prikazom.</li></ul>Tako kot vse BBCode označbe lahko ogradite URL-je s katerokoli drugo označbo, kot npr. <b>[img][/img]</b> (Poglej nadaljnji vnos), <b>[b][/b]</b>, ipd. Kot pri oblikovnih označbah, morate tudi tukaj sami zagotoviti pravilno zaključevanje odprtih označb. Na primer:<br /><br /><b>[url=http://phpbb.com/][img]</b>http://phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br /> <u>ni</u> pravilno, in lahko vodi do tega, da se vaše sporočio izbriše, torej bodite pazljivi.");

$faq[] = array("--", "Prikazovanje slik v sporočilih");
$faq[] = array("Dodajanje slik v objavo", "phpBB BBCode kode imajo vgrajeno označbo za vključevanje slik v  vaše objave, sporočila. Dve zelo pomembni stvari si zapomnite,kadar uporabljate to označbo: večina uporanikov ne upošteva omejitve količine slik, ki naj bodo prikazane v prispevkih, in drugič, prikazana slika, ki jo prikazujete na strani, mora biti že nekje na internetu (ne more se nahajati samo v vašem računalniku, na primer, razen če je hkrati to spletni strežnik!). Trenutno ni možno shranjevati slik lokalno s phpBB (vsa dosedanja pričakovanja prelagajo to možnost na naslednjo izdano različico phpBB). Za prikaz slike,morate obdati URL tako, da prikaže sliko, z <b>[img][/img]</b> označbama. Na primer:<br /><br /><b>[img]</b>http://phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Kot smo opozorili pri URL razdelku zgoraj, lahko ogradite sliko z <b>[url][/url]</b> označbo, če želite, npr.<br /><br /><b>[url=http://phpbb.com/][img]</b>http://phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />bo izoblikovalo:<br /><br /><a href=\"http://phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Druge zadeve");
$faq[] = array("Ali lahko dodam svoje lastne označbe?", "Ne, bojimo se, da ne direktno v phpBB 2.0. Iščemo način, ki bi omogočal prilagodljive BBCode označbe pri naslednji večji različici izdaje programa phpBB.");

//
// This ends the BBCode guide entries
//