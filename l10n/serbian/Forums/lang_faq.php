<?php
/*************************************************
 *                          lang_faq.php [Serbian]
 *                            -------------------
 *     begin                : Monday Sep 30 2002 
 *     copyright            : (C) 2002 Simic Vladan
 *     email                : vlada@cybercom.co.yu
 *
 *   $Id: lang_faq.php,v 9.2 2006/02/12 16:02:23 djmaze Exp $
 *
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
 
  
$faq[] = array("--","Problemi prilikom prijave i registracije");
$faq[] = array("Zato ne mogu da se prijavim?", "Da li ste se registrovali? Morate se registrovati ukoliko elite da se prijavite. Da li imate zabranu pristupa boardu (ako jeste bie prikazana poruka)? Ako je to u pitanju, trebalo bi da kontaktirate webmastera ili administratora i saznate ato je tako. Ako ste registrovani i nemate zabranu i jo uvek ne moete da se prijavite onda ponovo proverite vae korisniko ime i ifru. Obino je ovo problem, a ako nije onda kontaktirajte administratora jer moda neto nije u redu sa boardom.");
$faq[] = array("Zato uopte moram da se registrujem?", "Ne morate takoe, na administratoru boarda je da odlui da li moete slati poruke ako niste registrovani. U svakom sluaju registracija vam omoguuje pristu dodatnim mogunostima koje nisu dostupne gostima kao to su biranje avatar slika, privatne poruke, slanje emaila drugim korisnicima, prikljuivanje grupama itd. Potrebno je svega nekoliko minuta za registraciju pa vam preporuujemo da se registrujete.");
$faq[] = array("Zato se odjavljujem automatski?", "Ako ne ukljuite <i>Prijavi me automatski</i> kada se prijavljujete board e vas pamtiti kao prijavljenog svo prisutno vreme. Ovo spreava da se neko drugi prijavi kao vi. Da biste ostali prijavljeni tiklirajte kutijicu prilikom prijavljivanja, mada ovo ne preporuujemo ako boardu pristupate sa deljenog kompjutera, npr. biblioteke, internet cafea, fakulteta itd.");
$faq[] = array("Kako da spreim da se moje ime ne pojavljuje na listi korisnika koji su trenutno na forumu?", "U vaem profilu ete nai opciju <i>Sakrij moj onlajn status</i>, ako ovo promenite na <i>Ukljueno</i> biete vidljivi samo administrators ili sami sebi. Biete brojani kao skriveni korisnik.");
$faq[] = array("Izgubio sam ifru!", "Ne paniite! Iako vaa ifra ne moe biti vraena, ona moe biti resetovana. Da biste ovo uradili idite na stranicu za prijavu i kliknite na <u>Zaboravio sam ifru</u>, pratite instrukcije i brzo ete ponovo biti u mogunosti da se prijavite");
$faq[] = array("Registrovao sam se ali ne mogu da se prijavim!", "Prvo proverite da li ste uneli tano korisniko ime i ifru. Ako je to u redu onda je mogua jedna od ove dve greke. Ako je COPPA podrka ukljuena i kliknuli ste na <u>Mlai-a sam od 13 godina</u> prilikom registracije onda ete morati da pratite uputstva koja ste dobili. Ukoliko i ovo ne pomogne proverite da li va nalog treba reaktivirati? Neki boardi e zahtevati da ponovo budete registrovani, ili sami ili od strane administratora pre nego [to budete u mogunosti da se prijavite. Kada se registrujete bie vam reeno da li trebate da reaktivirate nalog. Ako vam je poslat email onda pratite instrukcije, a ako niste proverite da li je taan va email? Jedan razlog za aktivacijom je da bi se smanjila mogunost da <i>korisnici koji varaju </i> anonimno vreaju board. Ako ste sigurni da je email adresa koju ste koristili tana onda kontaktirajte administratora.");
$faq[] = array("Ranije sam se registrovao ali vie ne mogu da se prijavim?!", "Najei razlozo za ovo su; uneli ste pogreno korisniko ime ili ifru (proverite u mailu koji vam je poslat prilikom registracije) ili je administrator obrisao va nalog iz nekog razloga. Ako je ovo drugo razlog onda moda niste pisali nita? esto boardi periodino briu korisnike koji ne piu da bi smanjili veliinu baze. Probajte da se ponovo registrujete i ukljuite u diskusije.");


$faq[] = array("--","Podeavanja korisnika");
$faq[] = array("Kako da promenim moja podeavanja?", "Sva vaa podeavanja (ako ste registrovani) su sauvana u bazi. Da biste im pristupili kliknite na <u>Profil</u> link (obino je pri vrhu stranice ali moda to nije sluaj). To e vam omoguiti da promenite podeavanja");
$faq[] = array("Vreme je pogreno!", "Vreme je obino tano, u svakom sluaju ono to vidite je vreme prikazano u vremenskoj zoni razliitoj od vae. U tom sluaju trebalo bi da promenite vaa podeavanja za vremensku zonu da bi se poklopila sa megtom gde se vi nalazite, npr. London, Pariz, Njujork, Sidnej, itd. Znajte da promena vremenske zone, kao i mnoga druga podeavanja mogu promeniti samo registrovani korisnici. Ako niste registrovani sada je dobro vreme da to i uinite!");
$faq[] = array("Promenio sam svoju vremensku zonu i sat je jo uvek netaan!", "Ukoliko ste sigurni da ste tano podesili vremensku zonu i vreme je jo uvek pogreno najverovatnije je problem u pomeranju vremena (ili letnje vreme kako je to poznato u UK i drugim mestima). Board nije dizajniran da razlikuje promene izmeu standardnog i pomerenog vremena pa e u letnjim mesecima vreme biti za sat vremena razliito od stvarnog lokalnog vremena.");
$faq[] = array("Moj jezik nije na listi!", "Najei razlog ovome su ili administrator nije instalirao va jezik ili neko jo uvek nije preveo ovaj board na va jezik. Pitajte administratora da li moe da instalira jeziki paket koji vam je potreban, a ako ne postoji oseajte se slobodnim da napravite prevod. Vie informacija moete pronai na sajtu phpBB grupe (pogledajte link pri dnu stranica)");
$faq[] = array("Kako da prikaem sliku pored mog korisnikog imena?", "Mogu postojati dve slike ispod korisnikog imena kada pregledate poruke. Prva slika je asocijacija na tvoju poziciju i izgleda kao skup zvezdica ili kvadratia koji pokazuju kojiko ste poruka napisali na forumu. Ispod ove moe biti vea slika poznatija kao avatar, ona je generalno unikatna ili lina za svakog korisnika. Na administratoru je da omogui avatare i oni imaju izbor na koji nain e avatars biti dostupni. Ukoliko niste u mogunosti da koristite avatare onda je to odluka administratora, trebalo bi da ih upitate za razlog tome (sirurni smo da e biti dobar!)");
$faq[] = array("Kako menjam svoju poziciju?", "Generalno ne moete direktno menjati naziv bilo koje pozicije (pozicije se pojavljuju ispod korisnikog imena u temama i u vaem profilu u zavisnosti od stila). Mnogi boardi koriste pozicije da prikau broj poruka koje ste napisali i da bi identifikovali odreene korisnike, npr. urednici i administratori mogu imati specijalne pozicije. Molimo vas da ne zloupotrebljavate board piui nepotreptine samo da bi poveali svoju poziciju, verovatno e vam urednik ili administrator jednostavno smanjiti rank.");
$faq[] = array("Kada kliknem na email link za korisnika trai se da se prijavim?", "ao nam je ali samo registrovani korisnici mogu slati email drugima putem ugraene email forme (ako administrator omogui ovu opciju). Ovo je da bi se spreila zlonamerna upotreba email-a od strane anonimnih korisnika.");


$faq[] = array("--","Problemi prilikom pisanja");
$faq[] = array("Kako da napiem poruku na forumu?", "Jednostavno, kliknite na relevantno dugme na bilo kojem ekranu foruma ili teme. Moda ete morati da se registrujete pre nego to ete biti u mogunosti da aljete poruke, mogunosti koje su vam dostupne su izlistane na dnu ekrana foruma i tema (to su <i>Moete pisati nove teme, Moete glasati, itd.</i>)");
$faq[] = array("Kako da izmenim ili izbriem poruku?", "Ukoliko niste urednik ili moderator moete samo menjati i brisati sopstvene poruke. Moete izmrniti poruku  (ponekad za samo odreeno vreme posle pisanja) tako to ete kliknuti na <i>izmeni</i> dugme za relevantnu poruku. Ako je neko ve odgovorio na poruku primetiete mali tekst ispod poruke kada se vratite na teme, ovo pokazuje broj koliko puta ste menjali poruku. Ovo e se pojaviti samo ako niko nije odgovorio, i takoe se nee pojaviti ako urednici ili administratori izmene poruku (trebalo bi da ostave poruku ta su menjali i zato). Znajte i to da obini korisnici ne mogu brisati poruke kada neko na njih odgovori.");
$faq[] = array("Kako da dodam potpis mojoj poruci?", "Da biste dodali potpis prvo ga morate napraviti, ovo ete uratiti putem vaeg profila. Kada ga napravite moete tiklirati <i>Dodaj potpis</i> kutijicu na formi da bi dodali potpis. Moete takoe standardno dodati potpis svim vaim porukama ukljuivanjem relevantnog radio dugmeta u vaem profilu (jo uvek moete spreiti dodavanje potpisa pojedinanim porukama tako to ete odekirati kutijicu na formi)");
$faq[] = array("Kako da napravim glasanje?", "Pravljenje glasanja je lako, kada aljete novu poruku (ili editujete prvu poruku u temi, ako imate dozvolu) videete <i>Dodaj glasanje</i> formu ispod glavne forme za poruke (ako je ne vidite onda verovatno nemate prava da napravite glasanje). Trebate da unesete naslov glasanja a onda i najmanje dve opcije (da biste dodali opcije upiite ime pitanja i kliknite na <i>Dodaj opciju</i> dugme. Takoe moete podesiti vremenski limit za glasanje, 0 je beskonano glasanje. Postoji limit broja opcija koje odreuje administrator");
$faq[] = array("Kako da izmenim ili izbriem glasanje?", "Kao sa porukama, glasanje moe biti izmenjeno od onoga ko je napravio glasanje, urednika ili administratora boarda. Da biste izmenili glasanje kliknite na prvu poruku u temi (ona uvek ima pridrueno glasanje). Ako niko nije glasao onda korisnici mogu izbrisati glasanje ili menjati bilo koju opciju glasanja, ali ako su korisnici ve glasali samo urednici ili administratori mogu mogu izmeniti ili brisati glasanje. Ovo spreava nametanje glasanja menjanjem opcija na pola glasanja");
$faq[] = array("Zato ne mogu pristupiti forumu?", "Neki forumi mogu biti ogranieni za odreene korisnike ili grupe. Da biste pregledali, itali, pisali itd. trebae vam posebna dozvola, samo urednik i administrator mogu garantovati ovakav pristup, trebalo bi da ih kontaktirate.");
$faq[] = array("Zato ne mogu da glasam?", "Samo registrovani korisnici mogu glasati. Ako ste registrovani i jo uvek ne moete glasati onda verovatno nemate adekvatna prava pristupa.");


$faq[] = array("--","Formatiranje i tipovi tema");
$faq[] = array("ta je BBKod?", "BBKod je specijalna implementacija HTML-a, a da li moete da ga koristite zavisi od administratora (moete ga takoe iskljuiti na formi za slanje). BBKode je slian stilovima u HTML-u, tagovi su ubaeni izmeu vitiastih zagrada [ i ] pre nego &lt; i &gt; i nude veu kontrolu koko i ta se prikazuje. Za vie informacija o BBKodu pogledajte uputstvo kome moete pristupiti sa strane za pisanje.");
$faq[] = array("Da li mogu da koristim HTML?", "To zavisi od toga da li vam to administrator dozvoljava, imaju potpunu kontrolu nad njim. Ako vam je dozvoljeno da ga koristite videete da samo neki tagovi rade. Ovo je <i>mera bezbednosti</i> da bi spreila ljude da uznemiravaju board koristei tagove koji mogu poremetiti izgled ili prouzrokovati probleme. Ako je HTML ukljuen moete ga iskljuiti na formi za pisanje.");
$faq[] = array("ta su smajliji?", "Smajliji ili emotivne ikonice su male sliice koje se koriste da bi iskazali oseanja koristei kratak kod, npr. :) znai srean, :( znai tuan. Kompletnu listu smajlija moete videti na formi sa slanje poruke. Pokuajte da ne preterujete sa smajlijima, mogu vrlo lako prouzrokovati da poruka postane neitljiva i urednik moe odluiti da ih izmeni ili izbrie sve poruke zajedno");
$faq[] = array("Mogu li slati slike?", "Slike moete zaista prikazati u vaim porukama. Ipak trenutno nema mogunosti da poaljete sliku direktno na board. Morate linkovati sliku koja postoji na javno dostupno web serveru, npr. http://some-unknown-place.net/my-picture.gif. Ne moete linkovati slike koje se nalaze na vaem PC-u (osim ako nije javno dostupan server) niti slike koje se nalaze iza authentifikacionih mehanizama, npr. hotmail ili yahoo sanduii, ifrom zatieni sajtovi, itd. Da biste prikazali sliku koridtite ili BBKod [img] tag ili odgovarajui HTML (ako je dozvoljeno).");
$faq[] = array("ta su obavetenja?", "Obavetenja esto sadre vanu informaciju i trebalo bi da ih to pre proitate. Obavetenja se pojavljuju na vrhu svake strane u forumu na kome su postavljene. Da li moete ili ne moete da aljete obavetenja zavisi od dozvola koje su podeene od strane administratora.");
$faq[] = array("ta su lepljive teme?", "Lepljive teme se prikazuju ispod obavetenja u pregledu foruma i samo na prvoj stranici. Obino su prilino vane pa bi trebalo da ih proitate to pre. Kao i sa obavetenjima board administrator odluuje o dozvolama koje su potrebne da biste poslali lepljive teme u svakom forumu.");
$faq[] = array("ta su zakljuane teme?", "Zakljuane teme su postavljene na ovaj nain bilo od urednika ili administratora. Ne moete odgovarati na zakljuane teme i bilo koje glasanje koje sadri je automatski zavreno. Teme mogu biti zakljuane iz mnogo razloga.");


$faq[] = array("--","Korisniki nivoi i grupe");
$faq[] = array("ta su administratori?", "Administratori su ljudi kojima su dodeljeni najvii nivoi kontrole za ceo board. Ovi ljudi mogu da kontroliu saki deli i sve operacije boarda koje ukljuuju postavljanje dozvola, zabranjivanje pristupa korisnicima, pravljenje korisnikih grupa ili urednika, itd. Takoe imaju kompletne mogunosti ureivanja u svim forumima.");
$faq[] = array("ta su urednici?", "Urednici su pojedinci (ili grupa pojedinaca) iji je posao da prate rad foruma iz dana u dan. Imaju dozvole da menjaju ili briu poruke i zakljuavaju ili oktljuavaju, pomeraju, briu i dele teme u forumima koje ureuju. Uopte urednici su tu da spree ljude da <i>odlutaju sa teme</i> ili alju uvredljiv ili neprikladan materijal.");
$faq[] = array("ta su korisnike grupe?", "Korisnike grupe su naim putem koga administratori mogu da grupiu korisnike. Svaki korisnik moe pripadati u vie grupa (za razliku od veine drugih boarda) i svakoj grupi mogu biti dodeljena individualna prava pristupa. Ovo olakava administratorima da podese vie korisnika kao urednike foruma, ili da im daju pristup privatnom forumu itd.");
$faq[] = array("Kako da se pridruim korisnikoj grupi?", "Da biste se pridruili korisnikoj grupi kliknite na link Korisnike grupe u zaglavlju stranice (zavisi od dizajna podloge), i tada moete videti sve korisnike grupe. Nisu sve grupe <i>otvorenog pristupa</i>, neke su zatvorene i neke mogu ak imati skrivene lanove. Ako je board otvren onda moete zahtevati da se prikljuite grupi klikom na odgovarajue dugme. Urednik grupe e morati da vam odobri va zahtev, mogu vas pitati i zato elite da se prikljuite. Molimo vas da ne uznemiravate urednike ukoliko va zahtev ne bude odobren, sigurno da za to imaju razloga.");
$faq[] = array("Kako da postanem urednik korisnike grupe?", "Korisnike grupe su prvobitno napravljene od administratora boarda, i takoe imaju dodeljenog urednika. Ako ste zainteresovani za stvaranje korisnike grupe onda prvo trebata da kontaktirate administratora, probajte da mu poaljete privatnu poruku.");


$faq[] = array("--","Privatne poruke");
$faq[] = array("Ne mogu da aljem privatne poruke!", "Za ovo postoji tri razloga; niste registrovani i/ili niste prijavljeni, administrator je iskljuio privatne poruke za ceo board ili vas je spreio da aljete poruke. Ako je ovo poslednje u pitanju, trebali biste da pitate administratora zato je tako.");
$faq[] = array("Uporno dobijam neeljene privatne poruke!", "U budue emo dodati listu ignorisanja za privatne poruke. Za sada ako i dalje dobijate neeljene privatne poruke od nekog obavestite administratora, oni imaju mogunost da spree korisnika da uopte alje privatne poruke.");
$faq[] = array("Dobio sam spam ili uvredljiv materijal od nekog sa ovog boarda!", "ao nam je to to ujemo. email forma ovog boarda ima mere bezbednosti da pokua i prati korisnike koji alju takve poruke. Trebalo bi da poaljete email administratoru sa punom kopijom email-a kojeg ste dobili, vrlo je vano da mail poaljete sa zaglavljem (ovde se nalaze detalji o korisniku koji je poslao email). Onda oni mogu stupiti u akciju.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","O phpBB 2");
$faq[] = array("Ko je napisao ovaj bilten board?", "Ovaj softver (u svojoj nemodifikovanoj formi) je proizveden, puten i ima kopirajt <a href=\"http://phpbb.com/\" target=\"_blank\">phpBB Grupe</a>. Dostupan je pod GNU General Public Licence i moe se slobodno distribuirati, pogledajte link za vie detalja");
$faq[] = array("Zato nije dostupna mogunost X-a?", "Ovaj softver je napisan i licenciran kroz phpBB Grupu. Ako verujete da bi ova mogunost trebala biti dodata onda vas molimo da posetite phpbb.com web sajt i pogledate ta phpBB Grupa ima da kae. Molimo vas da ne aljete zahteve za mogunostima na board na phpbb.com, Grupa koristi izvore znanja za prihvatanje novih mogunosti. Molimo vas da progitate kroz forume i pogledate ta, i koliko, naa pozicija je moda ve za tu mogunost i onda pratite procedutu da biste doli dotle.");
$faq[] = array("Zato da vas kontaktiram o uvredljivom materijalu i/ili legalnim stvarima pripisanim ovom boardu?", "Trebalo bi da kontaktirate administratora ovog boarda. Ukoliko neznate ko je on, trebalo bi da prvo kontaktirate jednog od urednika foruma i pitate ga kome da se obratite. Ako jo uvek nema odgovora trebalo bi da kontaktirate vlasnika domena (uradite pretragu ko je) ili, ako je board na besplatnom serveru (npr. yahoo, free.fr, f2s.com, itd.), menadera ili odeljenje za uvrede tog servisa. Znajte da phpBB Grupa apsolutno nema kontrolu i ne moe na bilo koji nain da sazna kako, gde ili ko koristi ovaj board. Apsolutno je besmisleno kontaktirati phpBB Grupu i povezati je sa bilo kojim legalnim (stati i prestati, obavezan, klevetniki komentar, itd.) injenicama koje nisu direktno povezane sa phpbb.com web sajtom ili softwerom phpBB-a. Ako poaljete email phpBB Grupi o bilo kom treerazrednom korienju ovog softvera onda bi trebalo da oekujete saet odgovor ili nikakav odgovor uopte.");

//
// This ends the FAQ entries
//

