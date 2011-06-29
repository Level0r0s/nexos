<?php
/*************************************************
 *                          lang_faq.php [slovenian]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_faq.php,v 9.2 2006/02/12 16:02:23 djmaze Exp $
 *    Popravek in dodatni prevod prvega slovenskega prevoda: Tomaž Koštial (m5@cyberdude.com) 13/10/2002
 *    Dodal prvo poglavje: Pozdravljeni v slovenski različici (naslov in 4 alineje): Lado Golouh, razmerje.com
 *
 * Encoding test n-array summation ∑ latin ae with acute ǽ 
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
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\";
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//


$faq[] = array("--","Pozdravljeni v slovenski različici foruma phpBB"); 
$faq[] = array("Kaj je uporabniško ime?", "To je ime, pod katerim boste prepoznavni. Lahko je vaše pravo ali izmišljeno ime, sestavljeno iz poljubnih črk in številk. Priporočamo, da si izberete ime, ki vam je všeč.");
$faq[] = array("Zakaj potrebujem geslo?", "Geslo si izbereš, potrebuješ pa ga kot ključ za varen vstop pod tvojim uporabniškim imenom. Ko si prijavljen/-a lahko ne samo objavljaš pod svojim imenom, temveč pišeš in bereš zasebna sporočila, spreminjaš podatke o sebi v profilu, ipd. zato je prav, da je tvoja identiteta varovana.");
$faq[] = array("Kako se znajdem na forumu", "Najlažje tako, da s klikanjem preizkušaš in se pri tem učiš. Pomoč poiščeš na dveh mestih: <b>a.</b> <i>Pogosta vpašanja in odgovori</i> v menijski vrstici zgoraj na osnovni strani in <b>b.</b> levo ob okenčku, ki se odpre za vpis sporočila, so navodila, kako oblikovati izgled sporočila: <i>(Navodila) BBkoda</i>. Ne pozabi: že utečeni člani povečini zelo radi pomagajo začetnikom.");
$faq[] = array("Ali lahko ostanem anonimen?", "Imaš dve možnosti: <b>a.</b> prikrita ideniteta, ker se prijaviš z izmišljenim uporabniškim imenom. Če administrator dovoli, lahko sodeluješ le <b>b.</b>kot gost, namesto imena se izpiše <i>gost</i>. Kljub temu odgovarjaš za svoje objave, da so v okviru splošnih norm, ob zlorabi lahko administrator onemogoči dostop na stran. Objava pod imenom omogoča večjo preglednost sporočil.");
  
$faq[] = array("--","Vprašanja v zvezi s prijavo in registracijo");
$faq[] = array("Zakaj se ne morem prijaviti?", "Ali si se registriral? Ne? To je povsem resno vprašanje, saj se moraš za prijavo predhodno registrirati. Ti je bil mogoče vstop onemogočen (v tem primeru se ti bo prikazalo ustrezno obvestilo)? Če je bilo res tako, potem kontaktiraj administratorja, ki ti bo povedal vzrok prepovedi vstopa. Če pa ni nič od navedenega,  natančno preveri uporabniško ime in geslo, ki si ga vnesel pri prijavi. To so namreč najpogostejši vzroki za nastali problem. Ča pa še kljub temu, da vstopa nimaš onemogočenega s strani administratorja, ne boš uspel odpraviti problema, kontaktiraj administratorja foruma, saj je možno, da nastavitve le-tega niso ustrezne.");
$faq[] = array("Zakaj se moram registrirati?", "Registriranje ni 100% potrebno. Vse je odvisno od administratorja oz. od tega, kako je nastavil forum. Brez registracije boš verjetno lahko objavljal in odgovarjal na objave v določenih forumih, na določene (običajno največkrat) pa verjetno ne! Torej, z registracijo boš prišel do dodatnih opcij (izbira avatarja - podobe, pošiljanje zasebnih sporočil, ...), katere ti kot gostu (neregistriranemu uporabniku) ne bodo na voljo! Ker ti bo registracija vzela le slabo minutko, ti priporočamo, da le-to izvedeš.");
$faq[] = array("Čemu avtomatska odjava?", "Če ob prijavi ne odkljukaš polja <i>Samodejna prijava</i>, boš ostal prijavljen le v času obiska strani. Ta (ne)nastavitev preprečuje zlorabo tvojega uporabniškega računa. Če želiš ostati prijavljen, odkljukaj nastavitev <i>Samodejno prijava</i>, kar pa ni priporočljivo, če <b>ne dostopaš</b> do strani preko svojega računalnika ampak od drugod (knjižnice, cyber cafe, ...). Za vse uporabnike na domačem, svojem računalniku priporočamo avtomatsko prijavljanje.");
$faq[] = array("Kako odstranim vidnost uporabniškega imena z liste na zvezi (online) uporabnikov?", "V svojem profilu boš našel opcijo <i>Skrij prisotnost</i>. Če jo postaviš na <i>Da</i>, se bo prisotnost kazala le administratorju in tebi. Obravnavan boš kot <i>skriti uporabnik</i>.");
$faq[] = array("Pozabil sem geslo!", "Ne zganjaj panike! Ker tvojega gesla ni moč vpogledati, boš dobil novega, in sicer tako, da na strani, kjer se prijaviš, klikneš na <u>Pozabil sem geslo</u>, ter slediš navodilom, tako da boš v trenutku zopet na zvezi, online!");
$faq[] = array("Registriral sem se, vendar se ne morem prijaviti!", "Preveri, če vnašaš pravilno uporabniško ime in geslo. Če je temu tako, potem sta se lahko zgodili dve stvari, in sicer sledeči:<br>
- če je vključena opcija 'COPPA support' in si pri registraciji kliknil <u>Sem mlajši od 13 let</u>, potem boš moral slediti navodilom, ki si jih tedaj prejel. Če pa temu ni tako, ...<br>
- potem je verjetno potrebno vaš račun aktivirati. Nekateri forumi namreč pred prijavo zahtevajo aktivacijo računov vseh novo registriranih uporabnikov, bodisi s strani administratorja ali samega uporabnika. To zahtevo si mogel opaziti pri sami prijavi. Če si prejel email-elektronsko sporočilo, potem sledi navodilom, če pa sporočila nisi prejel, si verjetno vnesel napačen e-mail naslov. Aktivacija računa je v večini primerov uporabljena za zaščito forumov pred anonimno zlorabo le-teh. Če si popolnoma prepričan, da si vnesel pravi e-mail naslov, skušaj kontaktirati administratorja.");
$faq[] = array("Naenkrat se ne morem več prijaviti?!", "Najbolj pogosti razlogi za to so:<br>
- vnesel si napačno uporabniško ime ali geslo (preveri elektronsko sporočilo, ki si ga prijel ob registraciji)<br>
- administrator je z določenim razlogom odstranili tvoj račun. Pogosto so nastavitve forumov take, da se po določenih dneh neobjavljanja sledeči račun odstrani in s tem zmanjša velikost baze podatkov. Zatorej se ponovno registriraj in se vključi v debato!");


$faq[] = array("--","Uporabniške nastavitve");
$faq[] = array("Kako spremenim svoje nastavitve?", "Vse tvoje nastavitve (če si registriran) so shranjene v bazi podatkov. V primeru, da si želiš spremeniti le-te, klikni na povezavo Profil (ponavadi v zgornjem predelu strani, vendar ni nujno tako). V profilu lahko spreminjaš vse svoje nastavitve.");
$faq[] = array("Čas ni pravilen!", "Čas ki ga vidiš je skoraj zagotovo pravilen. Tisto, kar ti vidiš je lahko čas iz drugega časovnega pasu. Če je temu tako, potem bi bilo dobro, če bi spremenil nastavitve časovnega pasu v svojem profilu in sicer za Slovenijo je ustrezna nastavitev: (GMT + 1:00 ura) Ljubljana, Amsterdam, ... Te in ostale nastavitve pa lahko spreminjajo samo registrirani uporabniki. Če torej še nisi registriran, je sedaj zadnji čas, da se registriraš!");
$faq[] = array("Spremenil sem časovni pas, čas pa je še vedno ni pravilen!", "Če si prepričan, da si pravilno nastavil časovni pas, čas pa še vedno ni ustrezen, je najverjetneje vzrok v razliki letnih časov (pomlad, poletje, jesen, zima). Ker forum nima vgrajene opcije za pretvorbo časa zaradi letnih časov, je možno, da bo le ta odstopal za 1 uro.");
$faq[] = array("Mojega materinega jezika ni na spisku!", "Razlog tiči v tem, da je za privzeti jezik nastavljen slovenski, saj se v tem forumu uporablja slovenščina.");
$faq[] = array("Kako dodam sliko poleg uporabniškega imena?", "Poleg uporabniškega imena imaš lahko dve slikici in sicer:<br>
- prva slikica je lahko povezana s tvojim rangom, ki se s pridnostjo in pogostostjo objavljanja postopoma zvišuje,
- pod to pa je lahko večja slikica, avatar, je podoba, ki je ponavadi edinstvena, pripada samo enemu uporabniku, razen če je izbrana iz galerije. Če je izbira avatarja (podobe) onemogočena, je to pač odločitev administratorja foruma, prepričani smo, da ima dober razlog za svojo odločitev. Sliko lahko prispevaš iz svojega arhiva ali narišeš, ali se povežeš z neko sličico na internetu.");
$faq[] = array("Kako spremenim rang?", "V splošnem ni moč spreminjati ranga (pojavi se nad uporabniškim imenom). Večina forumov uporablja range za identifikacijo množičnosti objav posameznega uporabnika, ter posebne range za obeležitev posebnih uporabnikov. Prosim, ne zlorabi množičnega objavljanja (brez vsebine) z namenom, da bi si pridobil višji rang, saj bo moderator ali administrator v tem primeru znižal število tvojih objav.");
$faq[] = array("Ob kliku na povezavo e-mail uporabnika sem pozvan k prijavi?", "Ja, tako je! Samo registrirani uporabniki lahko pošiljajo elektronska sporočila uporabnikom foruma. S tem je preprečena uporaba sistema pošiljanja elektronskih sporočil anonimnim uporabnikom!");


$faq[] = array("--","Poglavje o objavljanju");
$faq[] = array("Kako objavim novo temo?", "Povsem preprosto! Klikni na ustrezen gumb (Nova tema) v forumu. Pred objavo pa se je v večini primerov potrebno registrirati!");
$faq[] = array("Kako uredim ali izbrišem sporočilo?", "V primeru, da nisi administrator ali moderator foruma, lahko urejaš in brišeš le svoja sporočila. Svoje sporočilo lahko urediš (včasih samo nekaj časa po objavi) tako, da klikneš na gumb uredi, v desnem zgornjem kotu posameznega sporočila. V primeru, da je na tvoje sporočilo nekdo že odgovoril, običajni uporabnik ne more več izbrisati objave!");
$faq[] = array("Kako k objavi dodam podpis?", "Pred dodajanjem podpisa, je le-tega potrebno predhodno vpisati, to pa storiš v svojem Profilu. Ko ga enkrat ustvariš, ga enostavno vključiš v sporočilo s tem, da na obrazcu za oddajo sporočila, dodaš kljukico pred <b>Dodaj podpis</b>. Dodajanje podpisa pa lahko nastaviš tudi kot privzeto (se pravi da se ta prilepi k vsaki objavi) in sicer tako, da v nastavitvah svojega Profila odkljukaš ustrezeno opcijo. Podpis lahko kasneje (pri vsaki objavi posebej) tudi izključiš.");
$faq[] = array("Kako ustvarim anketo?", "Povsem preprosto, če ti seveda forum to dovoljuje. Ob objavi nove teme ali ob prvi objavi za neko temo se ti mora v obrazcu prikazati tudi del za izpolnitev podatkov za anketo. Če tega ne vidiš, je opcija za vstavitev ankete onemogočena! Podatke za anketo izpolniš tako, da najprej vneseš <i>Naslov ankete</i>, nato pa vsaj dve opciji za glasovanje. Prav tako lahko omejiš čas zbiranja glasov (0 pomeni neskončno). Seveda pa obstaja tudi zgornja meja števila možnosti, ki pa jo nastavi administrator (npr. 10).");
$faq[] = array("Kako uredim ali izbrišem anketo?", "S tem je tako kot pri objavah. Se pravi da jih lahko ureja le lastnik - postavitelj, moderator ali administrator. Za urejanje ankete kliknite na gumb uredi pri prvi objavi v tej temi. Ko je bil enkrat sprejet glas, lahko uredi ali izbriše anketo le moderator ali administrator.");
$faq[] = array("Zakaj ne morem dostopati do določenega foruma?", "Dostop do nekaterih forumov (razdelkov) je dovoljen samo določenim uporabnikom ali skupini uporabnikov. Za dostop (pregled, branje, objavo, ...) do teh potrebuješ posebno avtorizacijo, ki ti jo lahko omogoči le moderator ali administrator tistega dela foruma.");
$faq[] = array("Zakaj ne morem glasovati v anketi?", "Glasovanje je omogočeno le registriranim uporabnikom (s tem je preprečeno masivno glasovanje enega uporabnika). Če si registriran in še vedno ne moreš glasovati, potem najbrž nimač ustreznih dostopnih pravic.");

$faq[] = array("--","Oblikovanje foruma in vrste tem");
$faq[] = array("Kaj je koda BBCode?", "BBCode je posebna izboljšava HTML-jezika, katerega uporabo omogoči (ali ne) administrator (lahko jo tudi onemogočiš v obrazcu za vnos sporočila, s tem da pred objavo odkljukaš ustrezno polje). BBCode je sama po sebi zelo podobna HTML-ju (označbe so v oglatih oklepajih [xyz] kar omogoča boljši pregled nad tem kaj in kakšen bo izpis.Za več informacij o tej temi si oglejte dodatno razlago, do katere lahko dostopate tako, da v obrazcu za objavo kliknete na povezavo BBCode (ponavadi se nahaja v drugi vrstici naštetih <b>Možnosti</b>) levo obokencu za vpis sporočila.");
$faq[] = array("Ali lahko uporabim HTML?", "Odvisno od tega ali to administrator dopušča. Če je njegova uporaba omogočena, boš kmalu spoznal da delujejo le določene označbe (tags). Prav tako lahko HTML tudi onemogočiš in sicer tako, da pred objavo sporočila odkljukaš polje <i>Onemogoči HTML</i>.");
$faq[] = array("Kaj so Smeški?", "Smeški (Angl.: Smileys, Emoticons) so majhne grafične slike, ki omogočajo, da izraziš določena čustva (Primer>> :) pomeni da si srečen, :( pomeni da si žalosten, ...). Celoten spisek Smeškov lahko vidiš v obrazcu za pošiljanje sporočila.");
$faq[] = array("Ali lahko sporočilu dodam sliko?", "Slike so lahko dodane sporočilom, pri čemer pa ni omogočen prenos slik direktno na strežnik, ampak v objavo lahko vključiš le slike, ki so shranjene na javnosti dostopnih strežnikih (Primer>> http://moj-naslov.net/moja-slikca.gif). Povezave do slik, shranjenih na tvojem računalniku, razen če ni javnosti dostopen strežnik, niso mogoče. Prav tako ni mogoče vključevanje slik, ki so shranjene za avtorizacijskimi mehanizmi (Primer>> Hotmail-ov in Yahoo-jev poštni predal, strani zaščitene z geslom, ...). Za vključitev slike uporabi bodisi BBCode-ovo označbo [img] ali ustrezno HTML označbo, če je uporaba le-tega omogočena.");
$faq[] = array("Kaj so Obvestila?", "Obvestila so sporočila, ki vsebujejo pomembne informacije, tako da bi jih moral prebrati čimprej. Pojavijo se na vrhu vsake strani foruma, kjer so bila objavljena. Od pravic, ki so zahtevane za objavljanje obvestil, je odvisno ali jih lahko objaviš tudi ti! Vse je zopet v rokah administratorja.");
$faq[] = array("Kaj predstavljajo NE PREZRI! (Vedno na vrhu, Sticky) teme?", "Pojavijo se na vrhu prve strani razdelka foruma, v katerem so bile objavljene, takoj pod zgoraj omenjenimi obvestili. To so ponavadi dokaj pomembne teme, tako da jih je priporočljivo prebrati. Prav tako tudi tu administrator določi pravice, ki so potrebne za objavljanje teh tem v posameznih forumih!");
$faq[] = array("Kaj so Zaklenjene teme?", "Zaklenjene teme so teme, na katere ni mogoče več odgovarjati. Ankete teh tem se avtomatsko končajo. Zaklenjene so bodisi s strani administratorja bodisi s strani moderatorja, ponavadi zaradi različnih razlogov, zagotovo pa so vsi tehtni.");


$faq[] = array("--","Uporabniški nivoji in skupine");
$faq[] = array("Kaj so Administratorji?", "Administrator je uporabnik, ki ima najvišjo stopnjo kontrole nad celotnim forumom (nastavitev pravic, nadzor nad uporabniki, kreiranje uporabniških skupin, določanje moderatorjev, ...). Prav tako vključuje vse pravice moderatorjev posameznih forumov.");
$faq[] = array("Kaj so Moderatorji?", "Moderatorji so uporabniki, katerih naloga je, da dan za dnem bdijo nad dogajanjem v forumu, ki jim je dodeljen. Poleg tega imajo pravico urejanja in brisanja objav, zaklepanja, odklepanja, premikanja, brisanja in deljenja tem forumov, ki jih moderirajo. Poskrbeti morajo, da uporabniki z objavami ne zaidejo izven teme, zaradi katere je bil forum ustvarjen ter za to, da se objave z žaljivo in neustrezno vsebino čimprej odstranijo.");
$faq[] = array("Kaj so Uporabniške skupine?", "To so skupine, po katerih lahko administrator razvrsti uporabnike. Vsak uporabnik lahko pripada več skupinam (tu je razlika v primerjavi z ostalimi forumi), vsaki skupini pa se lahko priredijo dostopne pravice. S tem je olajšano delo administratorju, saj tako lahko hitreje določi moderatorje foruma ali jim dodeli pravice za dostop do zasebnega foruma, ....");
$faq[] = array("Kako se pridružim določeni Uporabniški skupini?", "Za pristop k določeni skupini klikni na povezavo Uporabniške skupine, ki se nahaja v glavi strani (ponavadi zgornji del strani), kjer lahko pregledaš tebi vidne skupine. Vpogled v vse obstoječe skupine ponavadi ni mogoč, saj so nekatere zaprte , nekatere pa imajo celo zakrito članstvo. Če je skupina odprtega tipa, lahko zaprosiš za članstvo s klikom na ustrezen gumb. Za zavrnjene prošnje se ne znašajte nad moderatorjem skupine, saj imajo gotovo dobre razloge za zavrnitev.");
$faq[] = array("Kako postanem moderator Uporabniške skupine?", "Uporabniške skupine ustvari administrator in so jim prav tako dodeljeni moderatorji. Če si zainteresiran za kreiranje Uporabniške skupine, o tem interesu obvesti admninistratorja, ponavadi je dovolj že zasebno sporočilo.");


$faq[] = array("--","Pošiljanje zasebnih sporočil");
$faq[] = array("Ne morem pošiljati zasebnih sporočil!", "Za to obstajajo trije vzroki in sicer:<br> 
- nisi registriran/a in/ali prijavljen/a;<br>
- administrator je onemogočil pošiljanje zasebnih sporočil;<br>
- administrator ti je onemogočil pošiljati zasebna sporočila.<br>
V zadnjem primeru kontaktiraj administratorja in ga prosi za pojasnilo!");
$faq[] = array("Nenehno dobivam nezaželena zasebna sporočila!", "V prihodnosti bo v sistem pošiljanja sporočil vključena tudi t.i. Ignore lista (seznam naslovov od katerih ne želimo prejemati sporočil), do takrat pa o problemu, s katerim se srečuješ, obvesti administratorja foruma, ki lahko posamezniku onemogoči pošiljanje zasebnih sporočil.");
$faq[] = array("Od nekoga iz foruma sem prejel vsiljeno (spam) ali žaljivo elektronsko sporočilo!", "Za nastalo situacijo nam je zelo žal! Obrazec za pošiljanje elektronske pošte vsebuje varnostne točke, preko katerih poskušamo zaslediti uporabnike, ki izrabljajo to storitev. V tem primeru je zelo pomembno, da administratorju pošlješ celotno kopijo sporočila, še posebej t.i. header (vsebuje podatke o uporabniku, ki ga je poslal). Šele tedaj bo moč ukrepati proti storilcu.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","O programu phpBB 2");
$faq[] = array("Kdo je ustvaril ta forum?", "Ta program je (v nespremenjeni obliki) avtorsko delo <a href=\"http://phpbb.com/\" target=\"_blank\">phpBB Group</a>. Javnosti je na voljo pod pogoji GNU General Public Licence in se lahko prosto posreduje drugim uporabnikom. Za več informacij obiščite povezavo.");
$faq[] = array("Zakaj v forumu ni na voljo funkcija X?", "Ta software je delo skupine phpBB Group, ki ima zanj tudi licenco. Če mislite, da bi bilo treba dodati kakšno dodatno funkcijo, potem obiščite stran phpbb.com in si oglejte, kaj o tem pravi phpBB Group. Prosimo vas, da na forumu na strani phpbb.com ne objavljate prošenj za nove funkcije. phpBB Group za te namene uporablja forume za izmenjavo mnenj (sourceforge). Prosimo, da preberete forume in si ogledate, kakšno je naše mnenje glede posameznih funkcij in potem sledite navodilom, ki jih boste dobili tam.");
$faq[] = array("Koga lahko kontaktiram glede zlorabe in pravnih zadev povezanih s tem forumom?", "Obrnite se na administratorja tega foruma. Če ne najdete njegovega kontaktnega naslova, se obrnite na enega od moderatorjev in vprašajte koga morate kontaktirati. Če še vedno ne dobite odziva, se obrnite na lastnika domene (do podatkov pridete preko <i>whois lookup</i>). Če forum gostuje na brezplačnem serverju (npr. yahoo, free.fr, f2s.com, etc.), se obrnite na njihov oddelek za zlorabo storitev. Zavedati se morate, da phpBB Group nima popolnoma nobenega nadzora in zato ne more biti odgovorna za to, kdo uporablja njihov forum. Popolnoma nesmiselno je kontaktirati phpBB Group v zvezi s pravnimi zadevami, ki niso direktno povezane s stranjo phpbb.com ali z njihovim programom. Če boste vseeno poslali sporočilo phpBB Group o uporabi njihovega foruma, se zavedajte, da boste v najboljšem primeru dobili le kratek odgovor, v večini primerov pa sploh ne boste dobili odgovora.");

//
// This ends the FAQ entries
//

