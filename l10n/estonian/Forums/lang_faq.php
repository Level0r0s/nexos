<?php
/***************************************************************************
 *                          lang_faq.php [estonian]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_faq.php,v 9.5 2006/12/29 21:57:20 estlane Exp $
 *
 * Encoding test n-array summation ∑ latin ae with acute ǽ 
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

/* CONTRIBUTORS:
    2002-12-15    Philip M. White (pwhite@mailhaven.com)
   Fixed many minor grammatical problems.
*/
 
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
 
  
$faq[] = array("--","Sisselogimine ja Liitumine");
$faq[] = array("Miks ma ei saa sisse logida?", "Oled sa ikka registreerinud? Sisse logimiseks peab olema registreeritud liige. Võib-olla oled foorumilt bannitud (kui jah, siis kuvatakse sulle vastavat teadet). Igaks juhuks kontrolli üle ka oma kasutajanimi ja parool. Ja kui miski ei aita, siis võta ühendust foorumi administraatoriga - tal võib olla foorumil vigane konfiguratsioon.");
$faq[] = array("Miks ma üldse pean registreeruma?", "Võib-olla ei peagi. Foorumi administraator otsustab, kas teadete postitamiseks on vaja eelnevalt registreeruda või mitte. Igal juhul annab liitumine sulle lisavõimalusi, mida külastajatel ei ole. Näiteks avatari ja signatuuri panemine, kasutajagruppidesse liitumine, erasõnumite saatmine jne. Registreerumine võtab ainult paar minutit aega.");
$faq[] = array("Miks ma automaatselt välja login?", "Kui sa ei märgi <i>Automaatse Sisselogimise</i> kasti, siis sa jääd sisselogituks ainult foorumi kasutamise ajaks. Kui tahad alati sisse logitud olla, märgi see kastike sisselogimisel. Seda ei ole soovitatav teha avalikes arvutites.");
$faq[] = array("Kuidas saan keelata oma kasutajanime ilmumist foorumil olijate nimekirja?", "Oma profiilist leiad sa valiku <i>Varja oma foorumilolekut</i>; Kui sa selle aktiveerid, näevad sind ainult administraator ja sa ise. Sa oled varjatud kasutaja.");
$faq[] = array("Kaotasin parooli!", "Parooli ei saa küll taastada aga selle saab uue panna. Selleks mine sisselogimise lehele ja vajuta linki <u>Unustasin parooli</u>. Jälgi juhiseid ja peaksidki taas saama sisse logida.");
$faq[] = array("Ma registreerusin aga ei saa sisse logida!", "Kõigepealt kontrolli oma kasutajanime ja parooli. Kui need on kindlasti õiged, siis võib-olla registreerusid COPPA tingimustega - jälgi sulle saadetud juhiseid. On veel võimalik, et su konto vajab aktiveerimist või administraator on su konto sulgenud.");
$faq[] = array("Kunagi ammu liitusin aga nüüd ei saa enam sisse!", "Kõigepealt kontrolli oma kasutajanime ja paroole. Teine võimalus on, et administraator on su konto kustutanud. Foorumitel on tavaks kustutada ebaaktiivseid kasutajaid, et vähendada andmebaasi suurust.");


$faq[] = array("--","Kasutaja eelistused ja seaded");
$faq[] = array("Kuidas saan ma oma seadeid muuta?", "Sinu andmed on salvestatud andmebaasi ja nende muutmiseks kasuta <u>Profiil</u> linki foorumis.");
$faq[] = array("Ajad on valed!", "Tõenäoliselt on ajad õiged, aga sa oled lihtsalt teises ajavööndis. Oma konto alt saad sättida enda ajavööndi(Eestis GMT +2 ning üleminekuperiood valige \"European Union Time Eastern (GMT +2)\").");
$faq[] = array("Muutsin oma ajatsooni aga ajad on ikka valed!", "Sellisel juhul on tõenäoliselt tegemist suveajale üleminekuga. Teatud kuudel võivad esineda selle tõttu väikesed nihked kellaajas.");
$faq[] = array("Minu keelt ei ole nimekirjas!", "Tõenäoliselt ei installeerinud administraator seda keelt või ei ole keegi seda veel tõlkinud. Võta temaga ühendust ja palu tal see installeerida. Või kui seda tõlgitud pole, siis võid muidugi ka ise tõlkida.");
$faq[] = array("Kuidas ma panen kasutajanime alla omale pildi?", "Kasutajanime all saab olla kaks pilti. Esimene on seotud kasutajakirjeldusega ja selle paneb administraator. Teine on avatar ja selle saad ise panna oma konto alt (juhul kui avataride kasutamine pole keelatud).");
$faq[] = array("Kuidas ma muudan oma kasutajakirjeldust?", "Tavaliselt ei saagi seda muuta ja kasutajakirjeldus muutub koos sinu postituste arvuga. Mõnedel kasutajatel (näiteks moderaatoritel) võivad olla ka erikirjeldused.");
$faq[] = array("Kui ma vajutan kasutaja maili lingi peale, siis küsib foorum mult sisselogimist.", "Ainult registreeritud kasutajad saavad foorumi kaudu e-maile saata.");


$faq[] = array("--","Postitamine");
$faq[] = array("Kuidas ma foorumisse uue teema teen?", "Lihtsalt kasuta vastavat nuppu mingis alateemas. Sul võib olla tarvis eelnevalt registreerida.");
$faq[] = array("Kuidas ma muudan/kustutan postitusi?", "Kui sa pole moderaator, saad sa kustutada ja muuta ainult oma postitusi. Muutmiseks kasuta postituse kõrval olevat nuppu. Kui keegi on su teatele vastanud, sa seda enam kustutada ei saa ja muutes tuleb teate alla kiri selle kohta, millal sa seda viimati muutsid.");
$faq[] = array("Kuidas ma panen oma postitusele signatuuri juurde?", "Signatuuri saad sa panna Profiili alt.");
$faq[] = array("Kuidas ma küsitlust teen?", "Küsitluste tegemine on lihte - kui postitad teema (või muudad teema esimest teadet) peaksite te nägema Lisa küsitlus vormi, mis asu põhi postitusvormi all (kui te seda ei näe, siis arvatavasti puuduvad teil õigused küsitluse algatamiseks). Te peaksite sisestama küsitluse pealkirja ja vähemalt kaks vastusevarianti (selleks, et määrata vastusevarianti sisestage see vastavale reale ja kasutage <i>Lisa vastusevariant</i> nuppu. Küsitlusele saab ka määrata ajalimiidi, 0 tähendab piiramatut aega. Valikvastuste arv võib olla piiratud, selle määrab foorumi administraator.");
$faq[] = array("Kuidas ma muudan või kustutan küsitlust?", "Küsitlusi saab muuda, muutes esimest postitust. Kui keegi on juba hääletanud, saavad seda muuta ainult moderaatorid ja administraatorid.");
$faq[] = array("Miks ma ei pääse alafoorumisse?", "Mõnedesse alafoorumitesse on ligipääs ainult teatud kasutajatel või gruppidel.");
$faq[] = array("Miks ma hääletada ei saa?", "Ainult registreeritud kasutajad saavad hääletada. Kui sa oled registreeritud ja ikka hääletada ei saa, siis pole sul selleks lihtsalt volitusi.");


$faq[] = array("--","Formaadid ja teemade tüübid");
$faq[] = array("Mis asi on BBkood?", "BBkood on kood, mis põhineb HTMLil ning mis on abiks postitamisel. Seda saab postitustes keelata. Täpsemad juhised saab lingilt postitamise lehel.");
$faq[] = array("Kas ma HTMLi saan kasutada?", "See oleneb administraatori otsusest. Kui HTML on lubatud, siis ilmselt ainult mõned tagid, et külastajad ei saaks HTML'iga foorumi välimust rikkuda.");
$faq[] = array("Mis on smailid?", "Smailid (tuntud ka kui emotikonid) on väikesed pildikesed, mis aitavad sul postituses oma emotsioone väljendada. Neid saad teatesse lisada postitamise lehelt. Katsu nendega mitte liialdada.");
$faq[] = array("Kas ma saan pilte postitada?", "Pilte saab postituses kuvada, kuid selleks peavad nad olema avalikus serveris. Neid ei saa kuvada oma arvutist (kui see pole server) ja samuti parooliga kaitstud kohtadest. Piltide lisamiseks kasuta BBkoodi või HTML'i (kui see on lubatud).");
$faq[] = array("Mis on teadeanded?", "Teadeanded ilmuvad alafoorumis teiste postituste kohale ja sisaldavad tähtsat informatsiooni, mida sa peaksid lugema.");
$faq[] = array("Mis on kleepsud?", "Kleepsud on teemade liik, mille puhul kleeps asub alafoorumis teadeannete all. Need sisaldavad tihti tähtsat informatsiooni.");
$faq[] = array("Mis on suletud teemad?", "Teemasid saavad sulgeda administraatorid ja moderaatorid. Suletud teemasse ei saa enam postitada.");


$faq[] = array("--","Kasutajad ja grupid");
$faq[] = array("Kes on administraatorid?", "Administraatorid on auastmelt foorumis kõige kõrgemal. Nad saavad sättida foorumi väljanägemist ja seadeid ning määrata moderaatoreid. Neil on moderaatoriõigused kõigis alafoorumis.");
$faq[] = array("Kes on moderaatorid?", "Moderaatorite ülesanne on hoolitseda korra eest foorumis. Nad saavad kustutada, muuta ja liigutada teemasid.");
$faq[] = array("Mis on kasutajagrupid?", "Kasutajagrupid on võimalus liikmeid gruppidesse jagada. Üks inimene saab kuuluda mitmesse gruppi ning gruppidel saab olla eriõiguseid. Nii saab näiteks anda mõnele grupile õiguse mõnda alafoorumite kasutada, kuigi teised seda teha ei saa.");
$faq[] = array("Kuidas kasutajagrupiga liituda?", "Olemasolevaid gruppe saad vaadata menüüst Gruppide alt. Seal saad ka oma liitumisavalduse esitada. Grupid võivad olla ka varjatud.");
$faq[] = array("Kuidas kasutajagrupi moderaatoriks saada?", "Kasutajagruppe loovad administraatorid. Kui oled huvitatud grupi loomisest, siis võta temaga ühendust.");


$faq[] = array("--","Privaatsõnumid");
$faq[] = array("Ma ei saa privaatsõnumeid saata!", "Sa ei ole kas sisse loginud või administraator on keelanud foorumis privaatsõnumite saatmise. Võib ka olla, et sinul individuaalselt on mingil põhjusel teadete saatmine keelatud.");
$faq[] = array("Ma saan soovimatuid privaatsõnumeid!", "Tulevastes versioonides on plaanis lisada ka eiramise funktsioon. Praegu aga lihtsalt teavita sellest administraatorilt. Ta saab keelata teatud inimestel privaatsõnumite saatmise.");
$faq[] = array("Sain spämmi või solvava kirja foorumi vahendusel!", "Saada foorumi administraatorile koopia kogu kirjast ja loodetavasti kasutab ta enda käsutuses olevaid meetmeid selle lõpetamiseks.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","phpBB 2 Info");
$faq[] = array("Kes kirjutas selle foorumi?", "See tarkvara on autorikaitse seaduse all saadaval <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Grupi kodulehel</a>. See on tasuta saadavalt GNU litsentsi all.");
$faq[] = array("Miks siin ei ole X võimalust?", "Oma soove tulvaste versioonide suhtes saad avaldata phpBB kodulehel ametlikus foorumis.");
$faq[] = array("Kellega ma võtan ühendust seoses solvavate või legaalsete asjaoludega?", "Proovi ühendust võtta administraatori või moderaatoriga. Kui see tulemusi ei anna, võta ühendust teenusepakkujaga (serveri omanikuga). pbpBB autorid ei saa kontrollida foorumitesse postitatud teadete sisu ja seetõttu ei ole nemad selle eest vastutavad.");
//
// Attachment Mod Admin Language Variables
//
$faq[] = array("--","Manused");
$faq[] = array("Kuidas lisada manust?", "Manust saab lisada uut postitust tehes. Sa peaksid postitusaknast allpool nägema linki <i>Lisa manus</i>. Kui sa vajutad nupule <i>Browse...</i> või <i>Sirvi..</i>, siis avaneb su arvutis tavaline avamisdialoogi aken. Otsi üles fail, mida sa tahad lisada, vali see ja kliki nupul OK/Open/Ava või tee failil topeltklõps. (See sõltub su arvuti seadetest, kas on piisab ühest klikist või on vaja topeltklõpsu). Kui sa lisad <i>Faili kommentaari</i>reale kommentaari, siis kasutatakse seda lingina lisatud faili juurde. Kui sa kommentaari ei lisa, kasutatakse lingina faili nime. Kui lehe administraator on lubanud lisada samamoodi mitu faili, siis võid sa seda teha seni, kuni sa jõuad maksimaalse manuste arvuni postituse kohta.<br/><br/>Lehe administraator määrab faili suuruse ülemise piiri, lubatud failitüübid ja teised manuste piirangud. Pea meeles, et sinu vastutusel on su manuste sobivus meie lehe reeglitega ja et need võidakse kustutada ilma ettehoiatamata.<br/><br/>Lehe omanik, hooldaja, administraator ega moderaatorid ei ole vastutavad kaotsi minevate andmete eest.");
$faq[] = array("Kuidas lisada manust pärast postituse tegemist?", "Et lisada manust pärast postituse tegemist, pead sa oma postitust muutma ja järgima kirjeldust eelmisest punktist. Uus manus lisatakse postitusele, kui sa vajutad nupule <i>Saada</i>.");
$faq[] = array("Kuidas kustutada manust?", "Manuse kustutamiseks pead sa oma postitust muutma ja <i>Postitatud manuste</i> aknas klikkima kustutava manuse järel oleval lingil <i>Kustuta manus</i>. Manus kustutatakse, kui sa vajutad nupule <i>Saada</i>.");
$faq[] = array("Kuidas uuendada faili kommentaari?", "Faili kommentaari uuendamiseks pead sa oma postitust muutma, <i>Postitatud manuste</i> aknas muuda <i>Faili kommentaari</i> välja teksti ja kliki muudetava faili kommentaari järel oleval nupul <i>Uuenda kommentaari</i>. Faili kommentaari uuendatakse, kui sa vajutad nupule <i>Saada</i>.");
$faq[] = array("Miks ma ei näe postitustes oma lisatud manuseid?", "Arvatavasti pole see fail või faililaiend enam foorumis lubatud või on moderaator või administraator selle kustutanud, kuna see oli vastuolus meie reeglitega.");
$faq[] = array("Miks ma ei saa manuseid lisada?", "Mõned foorumites võib manuste lisamine teatud gruppidele piiratud olla. Manuste lisamiseks võid sa vajada eriõigusi, mida võivad anda ainult foorumi moderaator ja lehe administraator, seega peaksid sa nendega ühendust võtma.");
$faq[] = array("Mul on vajalikud õigused olemas, miks ma ei saa manuseid lisada?", "Lehe administraator määrab faili maksimaalse suuruse, failide laiendid ja teised manustega seotud piirangud. Moderaator või administraator on su õigusi võib-olla piiranud, või keelanud manuste lisamise mõnes kindlas foorumis. Kui sa püüad manust lisada, peaksid ja veateates saama ka selgituse, kui ei saa, siis võid ühendust võtta moderaatori või administraatoriga.");
$faq[] = array("Miks ma ei saa kustutada manuseid?", "Mõnedes foorumites võib manuste kustutamise õigus olla vaid kindlatel kasutajatel või kasutajagruppidel. Manuste kustutamiseks võid sa vajada eriõigusi, mida võivad anda ainult foorumi moderaator ja lehe administraator, seega peaksid sa nendega ühendust võtma.");
$faq[] = array("Miks ma ei saa manuseid vaadata/alla laadida?", "Mõnedes foorumites võib manuste vaatamise/allalaadimise õigus olla vaid kindlatel kasutajatel või kasutajagruppidel. Manuste vaatamiseks/allalaadimiseks võid sa vajada eriõigusi, mida võivad anda ainult foorumi moderaator ja lehe administraator, seega peaksid sa nendega ühendust võtma");
$faq[] = array("Kellele peaksin ma teatama ebaseaduslikest või arvatavasti ebaseaduslikest manustest?", "Sa peaksid ühendust võtma lehe administraatoriga. Kui sa ei leia, kes see on, siis peaksid sa seda küsima mõne foorumi moderaatori käest. Kui sa ei saa ikka teada, kellega ühendust võtta, siis kontakteeru domeeni omanikuga (tee whois otsing) või kui see on tasuta teenus (nt yahoo, free.fr, f2s.com jt.), siis administratsiooniga või antud teenusepakkuja rikkumiste kontrollijaga. phpBB Grupp ei vastu selle eest, kes, kus ja kuidas seda süsteemi kasutab, seega pole meiega mõtet selle probleemi tõttu ühendust võtta. Kui sa seda siiski teed, võid sa saada väga lühisõnalise vastu või ei saa sa üldse vastust.");

//
// This ends the FAQ entries
//
