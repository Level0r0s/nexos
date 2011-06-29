<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com
  Based on Journey Links Hack
  Copyright (c) 2000 by James Knickelbein
  Journey Milwaukee
  http://www.journeymilwaukee.com
  
  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version.
  This program comes without any warranty.
  $Source: /cvs/languages/lithuanian/modules/Web_Links/language/lang-lithuanian.php,v $
  $Revision: 1.2 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:38 $
***********************************************************************/
if (!defined('CPG_NUKE')) { die('You do not have permission to access this file'); }  
  
global $sitename, $anonwaitdays, $outsidewaitdays;
define('_PREVIOUS','Sekantis puslapis');
define('_NEXT','Buvęs puslapis');
define('_YOURNAME','Jūsų vardas');
define('_CATEGORIES','kategorijos');
define('_LVOTES','balsai');
define('_TOTALVOTES','Viso balsų:');
define('_LINKTITLE','Nuorodos pavadinimas');
define('_HITS','Apsilankymai');
define('_THEREARE','Čia yra');
define('_NOMATCHES','Nerasta');
define('_SCOMMENTS','Komentarai');
define('_ADDLINK','Pridėti nuorodą');
define('_POPULAR','Populiaru');
define('_TOPRATED','Geriausiai įvertinta');
define('_RANDOM','Atsitiktinis');
define('_LINKSMAIN','Nuorodų pagrindinis puslapis');
define('_LINKCOMMENTS','Nuorodų komentarai');
define('_ADDITIONALDET','Papildomos smulkmenos');
define('_EDITORREVIEW','Apžvalga');
define('_REPORTBROKEN','Pranešti apie neveikiančią nuorodą');
define('_LINKSMAINCAT','Nuorodų pagrindinės kategorijos');
define('_AND','ir');
define('_INDB','mūsų duomenų bazėje');
define('_ADDALINK','Pridėti naują nuorodą');
define('_INSTRUCTIONS','Instrukcijos');
define('_SUBMITONCE','Siųskite unikalę nuorodą tik vieną kartą.');
define('_POSTPENDING','Visos nuorodos paskelbiamos tik praėjusios patvirtinimą.');
define('_USERANDIP','Vartotojo vardas ir IP įrašomi, todėl prašome nepiknaudžiauti sistema.');
define('_PAGETITLE','Puslapio pavadinimas');
define('_PAGEURL','Puslapio adresas');
define('_YOUREMAIL','Jūsų e-paštas');
define('_LDESCRIPTION','Aprašymas: (maks. 255 simboliai)');
define('_ADDURL','Pridėti šį adresą');
define('_LINKSNOTUSER1','Jūs neprisiregistravęs vartotojas arba Jūs neprisijungęs.');
define('_LINKSNOTUSER2','Jei Jūs būtumėte prisiregistravęs, galėtumėte rašyti naujas nuorodas.');
define('_LINKSNOTUSER3','Tapti registruotu vartotoju labai paprasta.');
define('_LINKSNOTUSER4','Kodėl mes prašome prisiregistruoti?');
define('_LINKSNOTUSER5','Todėl, kad mes norime Jums pasiūlyti auksčiausios kokybės informaciją.');
define('_LINKSNOTUSER6','Kiekvieną naują straipsnį peržiūri mūsų personalas.');
define('_LINKSNOTUSER7','Mes tikimės, kad siūlome aukšto lygio informaciją.');
define('_LINKSNOTUSER8','<a href="modules.php?name=Your_Account">Prisiregistruokite</a>');
define('_LINKALREADYEXT','KLAIDA: Šis adresas jau yra duomenų bazėje!');
define('_LINKNOTITLE','KLAIDA: Jūs turite parašyti pavadinimą nuorodai!');
define('_LINKNOURL','KLAIDA: Jūs turite parašyti adresą nuorodai!');
define('_LINKNODESC','KLAIDA: Jūs turite parašyti aprašymą nuorodai!');
define('_LINKRECEIVED','Mes gavome Jūsų naują nuorodą. Dėkui!');
define('_EMAILWHENADD','Mes pranešime Jums e-paštu kai nuoroda bus patvirtinta.');
define('_CHECKFORIT','Jūs nenurodėte savo e-pašto adreso, tačiau mes nuorodą greitai patikrinsime.');
define('_NEWLINKS','naujos(ų) nuorodos(ų)');
define('_TOTALNEWLINKS','Viso naujų nuorodų');
define('_LASTWEEK','Praėjusią savaitę');
define('_LAST30DAYS','Praėjusias 30 dienų');
define('_1WEEK','1 savaitė');
define('_2WEEKS','2 savaitės');
define('_30DAYS','30 dienų');
define('_TOTALFORLAST','Viso naujų nuorodų per paskutinę(es) ');
define('_ADDEDON','Paskelbta');
define('_RATING','Įvertinimas');
define('_RATESITE','Įvertinkite šį puslapį');
define('_DETAILS','Detalės');
define('_BESTRATED','Geriausiai įvertintos nuorodos - Top');
define('_OF','of');
define('_TRATEDLINKS','viso įverintų nuorodų');
define('_TVOTESREQ','įvertinimų reikia mažiausiai');
define('_SHOWTOP','Rodyti ');
define('_MOSTPOPULAR','Populiariausia - Top');
define('_OFALL','iš visų');
define('_SORTLINKSBY','Rušiuoti nuorodas pagal');
define('_SITESSORTED','Šiuo metu surūšiuota pagal');
define('_POPULARITY','Populiarumas');
define('_SELECTPAGE','Rodyti puslapį');
define('_MAIN','Pagrindinis');
define('_NEWTODAY','Nauja šiandien');
define('_NEWLAST3DAYS','Naujos per paskutines 3 dienas');
define('_NEWTHISWEEK','Naujos šią savaitę');
define('_CATNEWTODAY','Naujos nuorodos šioje kategorijoje, pridėtos šandien');
define('_CATLAST3DAYS','Naujos nuorodos šioje kategorijoje, pridėtos per paskutines 3 dienas');
define('_CATTHISWEEK','Naujos nuorodos šioje kategorijoje, pridėtos šią savaitę');
define('_POPULARITY1','Populiarumas (nuo daugiau iki mažiau)');
define('_POPULARITY2','Populiarumas (nuo mažiau iki daugiau)');
define('_TITLEAZ','Pavadinimas (A to Ž)');
define('_TITLEZA','Pavadinimas (Ž to A)');
define('_DATE1','Data (senos nuorodos pirmiausiai)');
define('_DATE2','Data (naujos nuorodos pirmiausiai)');
define('_RATING1','Reitingas (nuo mažiausio iki didžiausio)');
define('_RATING2','Reitingas (nuo didžiausio iki mažiausio)');
define('_SEARCHRESULTS4','Ieškoti');
define('_USUBCATEGORIES','Šalutinės kategorijos');
define('_LINKS','nuorodos');
define('_TRY2SEARCH','Bandykite ieškoti');
define('_INOTHERSENGINES','kitose paieškos tarnybose');
define('_EDITORIAL','Vedamasis');
define('_LINKPROFILE','Nuorodos profilis');
define('_EDITORIALBY','Vedamasis parašytas dalyvio');
define('_NOEDITORIAL','Nėra vedamojo.');
define('_VISITTHISSITE','Aplankykite šį puslapį');
define('_RATETHISSITE','Įvertinkite šį šaltinį');
define('_ISTHISYOURSITE','Ar tai Jūsų šaltinis?');
define('_ALLOWTORATE','Leisti kitiems vartitojams įvertinti šią nuorodą iš Jūsų puslapio!');
define('_LINKRATINGDET','Nuorodos įvertinimo detalės');
define('_OVERALLRATING','Bendras įvertinimas');
define('_TOTALOF','Viso ');
define('_USER','Vartotojas');
define('_USERAVGRATING','Vidutinis vartotojo įvertinimas');
define('_NUMRATINGS','# įvertinimų');
define('_EDITTHISLINK','Redaguoti šią nuorodą');
define('_REGISTEREDUSERS','Registruoti dalyviai');
define('_NUMBEROFRATINGS','Įvertinimų skaičius');
define('_NOREGUSERSVOTES','Nėra registruotų dalyvių įvertinimų');
define('_BREAKDOWNBYVAL','Suskirstyti įvertinimus pagal vertę');
define('_LTOTALVOTES','viso balsų');
define('_LINKRATING','Nuorodų įvertinimas');
define('_HIGHRATING','Aukštas įvertinimas');
define('_LOWRATING','Žemas įvertinimas');
define('_NUMOFCOMMENTS','Komentarų skaičius');
define('_WEIGHNOTE','* Pastaba: Šis šaltinis sveria registruotų dalyvių balsus prieš neregistruotų');
define('_NOUNREGUSERSVOTES','Nėra neregistruotų dalyvių balsų');
define('_WEIGHOUTNOTE','* Pastaba: Šis šaltinis sveria registruotų dalyvių balsus prieš išorinių');
define('_NOOUTSIDEVOTES','Nėra išorinių įvertinimų');
define('_OUTSIDEVOTERS','Išoriniai balsuotojai');
define('_UNREGISTEREDUSERS','Neregistruoti vartotojai');
define('_PROMOTEYOURSITE','Reklamuokite savo puslapį');
define('_PROMOTE01','Galbūt Jūs sudomins keletas distancinio puslapio įvertinimo sprendimų. Jie leidžia Jums patalpinti paveikslėlį Jūsų puslapyje, kad padidintibalsuotojų skaičių. Prašau pasirinkti vieną iš išvardintų variantų:');
define('_TEXTLINK','Tekstinė nuoroda');
define('_PROMOTE02','Vienas būdas balsuoti yra paprasta tekstinė nuoroda:');
define('_HTMLCODE1','HTML kodas šiuo atveju būtų toks:');
define('_THENUMBER','Skaičius');
define('_IDREFER','HTML išeities kode nurodomas Jūsų puslapio ID numeris $puslapio duomenų bazėje. Būkite tikri, kad šis numeris yra.');
define('_BUTTONLINK','Mygtukinė nuoroda');
define('_PROMOTE03','Jei Jūs ieškote kažko daugiau nei paprastos tekstinės nuorodos, gal norėsite naudoti maža mygtuką-nuorodą:');
define('_RATEIT','Įvertinkite šį puslapį!');
define('_HTMLCODE2','Išeities kodas šiuo atveju būtų toks:');
define('_REMOTEFORM','Distancinio įvertinimo forma');
define('_PROMOTE04','Jei Jūs sukčiausite, mes pašalinsime Jūsų nuorodą. Štai kaip toks distancinis įvrtinimas atrodys.');
define('_VOTE4THISSITE','Balsuokite už šį puslapį!');
define('_LINKVOTE','Balsuoti!');
define('_HTMLCODE3','Šios formos naudojimas leis vartotojams įvertinti šaltinį tiesiogiai iš Jūsų puslapio ir įvertinimas bus užrašomas čia. Minėta forma yra išjungta, tašiau šis kodas veiks, jei Jūs nukopijuosite jį iš čia į savo puslapį. Šis kodas yra toks:');
define('_PROMOTE05','Ačiū! Ir sekmes su įvertinimais!');
define('_THANKSBROKEN','Ačiū, kad padedate išlaikyti šio katalogo vientisumą.');
define('_THANKSFORINFO','Dėkui už informaciją.');
define('_LOOKTOREQUEST','Mes peržiūrėsime Jūsų prašymą.');
define('_ONLYREGUSERSMODIFY','Tik registruoti vartotojai gali siųlyti nuorodų modifikavimą. Prašau <a href="modules.php?name=Your_Account">užsiregistruoti</a>.');
define('_REQUESTLINKMOD','Prašyti nuorodos modifikavimo');
define('_LINKID','Nuorodos ID');
define('_SENDREQUEST','Siųsti');
define('_THANKSTOTAKETIME','Ačiū, kad skyrėte laiko šio puslapio įvertinimui čia');
define('_LETSDECIDE','Įrašai iš tokių kaip Jūs padės kitiems lankytojams apsispręsti, kuriuos puslapius aplankyti.');
define('_RETURNTO','Grįžti į');
define('_RATENOTE1','Prašau nebalsuoti už tą patį šaltinį daugiau nei vieną kartą.');
define('_RATENOTE2','Skalė yra nuo 1 iki 10, kur 1 - prastai, o 10 - puikiai..');
define('_RATENOTE3','Prašau būti objektyviu balsuojant. Jei visi gaus tik 1 arba 10, įvertinimai nebus labai vertingi.');
define('_RATENOTE4','Jūs galite peržiūrėti sąrašą <a href="modules.php?name=Web_Links&amp;l_op=TopRated">geriausiai įvertintų šaltinių</a>.');
define('_RATENOTE5','Nebalsuokite už savo šaltinį arba jo varžovus.');
define('_YOUAREREGGED','Jūs esate registruotas vartotojas ir šiuo metu prisijungęs.');
define('_FEELFREE2ADD','Jauskitės laisvai rašydami komentarus apie šį puslapį.');
define('_YOUARENOTREGGED','Jūs nesate registruotas vartotojas arba šiuo metu neprisijungęs.');
define('_IFYOUWEREREG','ei Jūs būtumėte prisijungęs, galėtumėte parašyti komentarus apie šį puslapį.');
define('_MODIFY','Keisti');
define('_COMPLETEVOTE1','Jūsų balsas įvertintas.');
define('_COMPLETEVOTE2','Jūs jau balsavote už šį šaltinį per paskutinę(es) $anonwaitdays dieną(as).');
define('_COMPLETEVOTE3','Už kiekvieną šaltinį balsuokite tik vieną kartą.<br>Visi balsai įrašomi ir peržiūrimi.');
define('_COMPLETEVOTE4','Jūs negalite balsuoti už nuorodą, kurią pats pasiųlėte.<br>Visi balsai įrašomi ir peržiūrimi.');
define('_COMPLETEVOTE5','Nepasirinktas įvertinimas - nėra įvertinimo');
define('_COMPLETEVOTE6','Tik vieną kartą su vienu IP adresu galima balsuoti kas $outsidewaitdays dienų.');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDMAINCATEGORY','Add a MAIN Category');
define('_ADDSUBCATEGORY','Add a SUB-Category');
define('_WEBLINKSADMIN','Web Links Administration');
define('_EZTRANSFERLINKS','Transfer all links from category');
define('_CLEANLINKSDB','Clean Links Votes');
define('_EZTRANSFER','Transfer');
define('_BROKENLINKSREP','Broken Links Reports');
define('_LINKMODREQUEST','Link Modification Requests');
define('_ADDNEWLINK','Add a New Link');
define('_MODLINK','Modify a Link');
define('_LINKSINDB','Links in our Database');
define('_LINKSWAITINGVAL','Links Waiting for Validation');
define('_ERRORURLEXIST','ERROR: This URL is already listed in the Database!');
define('_ERRORNOTITLE','ERROR: You need to type a TITLE for your URL!');
define('_ERRORNOURL','ERROR: You need to type a URL for your URL!');
define('_ERRORNODESCRIPTION','ERROR: You need to type a DESCRIPTION for your URL!');
define('_NEWLINKADDED','New Link added to the Database');
define('_YOURLINKAT','Your Link at');
define('_LINKVALIDATION','Link Validation');
define('_CHECKALLLINKS','Check ALL Links');
//define('_VALIDATELINKS','Validate Links');
//define('_FAILED','Failed!');
//define('_BEPATIENT','(please be patient)');
//define('_VALIDATINGCAT','Validating Category (and all subcategories)');
//define('_VALIDATINGSUBCAT','Validating Sub-Category');
?>