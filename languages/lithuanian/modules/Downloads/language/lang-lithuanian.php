<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com
  CPG-lang (c)2004 Akamu Akamai
  
  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version.
  This program comes without any warranty.
  $Source: /cvs/languages/lithuanian/modules/Downloads/language/lang-lithuanian.php,v $
  $Revision: 1.2 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:37 $
***********************************************************************/
if (!defined('CPG_NUKE')) { die('You do not have permission to access this file'); }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','The download you\'ve requested doesn\'t exists.');
define('_PREVIOUS','Atgal');
define('_NEXT','Pirmyn');
define('_CATEGORIES','Kategorijos');
define('_LVOTES','balsų');
define('_TOTALVOTES','Balsų iš viso:');
define('_THEREARE','Čia yra');
define('_NOMATCHES','Nerasta rezultato atitinkančio užklausą');
define('_SCOMMENTS','Komentarai');
define('_UNKNOWN','Nežinoma');
define('_AUTHORNAME','Autoriaus vardas');
define('_AUTHOREMAIL','Autoriaus E-Mail');
define('_DOWNLOADNAME','Programos pavadinimas');
define('_ADDTHISFILE','Pridėti bylą');
define('_INBYTES','baitais');
define('_FILESIZE','Failo dydis');
define('_VERSION','Versija');
define('_AUTHOR','Autorius');
define('_HOMEPAGE','Svetainė');
define('_DOWNLOADNOW','Atsisiųsti failą dabar!');
define('_RATERESOURCE','Įvertinti resursą');
define('_FILEURL','Failo nuoroda');
define('_ADDDOWNLOAD','Pridėti bylą');
define('_DOWNLOADSMAIN','Programų puslapis');
define('_DOWNLOADCOMMENTS','Programų komentarai');
define('_DOWNLOADSMAINCAT','Programų pagrindinės kategorijos');
define('_ADDADOWNLOAD','Pridėti naują programą');
define('_DSUBMITONCE','Pridėkite kiekvieną programą tik po kartą.');
define('_DPOSTPENDING','Visos talpinamos programos laukia tikrinimo.');
define('_RESSORTED','Dabar resursai rušiuojami pagal');
define('_DOWNLOADSNOTUSER1','Jūs nesate registruotas vartotojas arba neprisijungėte.');
define('_DOWNLOADSNOTUSER2','Jei užsiregistruotumėte, galėtumėte talpinti programas šioje svetainėje.');
define('_DOWNLOADSNOTUSER3','Registracija yra greitas bei lengvas procesas');
define('_DOWNLOADSNOTUSER4','Kodėl mes reikalaujame registracijos tam tikroms funkcijoms?');
define('_DOWNLOADSNOTUSER5','Todėl, kad taip mes galime pasiūlyti kokybiškesnį turinį,');
define('_DOWNLOADSNOTUSER6','kiekvienas failas yra patikrinamas ir patvirtinamas mūsų personalo.');
define('_DOWNLOADSNOTUSER7','Mes tikimės siūlyti jums tik vertingą informaciją.');
define('_DOWNLOADSNOTUSER8','<a href="modules.php?name=Your_Account">Registruokitės</a>');
define('_DOWNLOADALREADYEXT','KLAIDA: Ši programa jau yra mūsų duomenų bazėje!');
define('_DOWNLOADNOTITLE','KLAIDA: Jūs turite įrašyti programos pavadinimą!');
define('_DOWNLOADNOURL','KLAIDA: Jūs turite įrašyti adresą!');
define('_DOWNLOADNODESC','KLAIDA: Jūs turite aprašyti programą!');
define('_DOWNLOADRECEIVED','Mes gavome jūsų siūlymą patalpinti programą. Dėkojame!');
define('_NEWDOWNLOADS','Naujos programos');
define('_TOTALNEWDOWNLOADS','Viso naujų programų');
define('_DTOTALFORLAST','Viso naujų programų');
define('_DBESTRATED','Geriausiai įvertintos programos');
define('_TRATEDDOWNLOADS','įvertintų programų');
define('_SORTDOWNLOADSBY','Programas rušiuoti pagal');
define('_DCATNEWTODAY','Naujos šiandien pridėtos šios kategorijos programos');
define('_DCATLAST3DAYS','Naujos per pastarąsias 3 dienas pridėtos šios kategorijos programos');
define('_DCATTHISWEEK','Naujos per pastarąją savaitę pridėtos šios kategorijos programos');
define('_DDATE1','Data (Senos programos pirmiau)');
define('_DDATE2','Data (Naujos programos pirmiau)');
define('_DOWNLOADS','Programos');
define('_DOWNLOADPROFILE','Programos profilis');
define('_DOWNLOADRATINGDET','Programos reitingo detalės');
define('_EDITTHISDOWNLOAD','Redaguoti programą');
define('_DOWNLOADRATING','Programų reitingas');
define('_DOWNLOADVOTE','Balsuoti!');
define('_DONLYREGUSERSMODIFY','Tik registruoti vartotojai gali siūlyti programų pakeitimus. Prašome <a href="modules.php?name=Your_Account">užsiregistruoti arba prisijungti</a>.');
define('_REQUESTDOWNLOADMOD','Reikalauti programos pakeitimo');
define('_DOWNLOADID','Programos Nr');
define('_DLETSDECIDE','Tokių vartotojų kaip jūs pagalba leis kitiems lankytojams lengviau pasirinkti kokias programas siųstis.');
define('_DRATENOTE4','Jūs galite pažiūrėti <a href="modules.php?name=Downloads&amp;d_op=TopRated">geriausių programų sąrašą</a>.');
define('_POPULAR','Populiarios');
define('_TOPRATED','Geriausiai įvertintos');
define('_ADDITIONALDET','Papildoma informacija');
define('_EDITORREVIEW','Redaktoriaus apžvalga');
define('_REPORTBROKEN','Pranešti apie neveikiančią nuorodą');
define('_AND','ir');
define('_INDB','mūsų duomenų bazėje');
define('_INSTRUCTIONS','Instrukcijos');
define('_USERANDIP','Vartotojo vardas ir IP išsaugotas, todėl prašome nepiktnaudžiauti sistema.');
define('_LDESCRIPTION','Aprašymas: (maks. 255 simboliai)');
define('_CHECKFORIT','Jūs nepateikėti E-Mail adreso, bet mes patikrinsime programą artimiausiu metu.');
define('_LASTWEEK','Praėjusi savaitė');
define('_LAST30DAYS','Pastarosios 30 dienų');
define('_1WEEK','1 savaitė');
define('_2WEEKS','2 savaitės');
define('_30DAYS','30 dienų');
define('_ADDEDON','Papildyta');
define('_RATING','Reitingas');
define('_DETAILS','Detalės');
define('_OF','iš');
define('_TVOTESREQ','balsai būtini');
define('_SHOWTOP','Rodyti TOP');
define('_MOSTPOPULAR','Populiariausios');
define('_OFALL','iš visų');
define('_POPULARITY','Populiarumas');
define('_SELECTPAGE','Pasirinkite puslapį');
define('_MAIN','Pagrindinis');
define('_NEWTODAY','Naujos šiandien');
define('_NEWLAST3DAYS','Naujos per pastarasias 3 dienas');
define('_NEWTHISWEEK','Naujos šią savaitę');
define('_POPULARITY1','Populiarumas (Nuo mažiau iki daugiau paspaudimų)');
define('_POPULARITY2','Populiarumas (Nuo daugiau iki mažiau paspaudimų)');
define('_TITLEAZ','Pavadinimas (nuo A iki Z)');
define('_TITLEZA','Pavadinimas (nuo Z iki A)');
define('_RATING1','Reitingas (nuo žemiausių iki aukščiausių)');
define('_RATING2','Reitingas (nuo aukščiausių iki žemiausių)');
define('_SEARCHRESULTS4','Paieškos rezultatai');
define('_USUBCATEGORIES','Sub-kategorijos');
define('_TRY2SEARCH','Bandyti ieškoti');
define('_INOTHERSENGINES','kitose paieškos sistemose');
define('_EDITORIAL','Redakcinis');
define('_EDITORIALBY','Redakcinis straipsnis');
define('_NOEDITORIAL','Šiuo metu svetainėje nėra redakcinio straipsnio.');
define('_RATETHISSITE','Įvertinti resursą');
define('_ISTHISYOURSITE','Ar šis resursas jūsų?');
define('_ALLOWTORATE','Leisti kitiems vartotojams vertinti jį!');
define('_OVERALLRATING','Bendras reitingas');
define('_TOTALOF','Viso iš');
define('_USER','Vartotojas');
define('_USERAVGRATING','Vidutinis vartotojo reitingas');
define('_NUMRATINGS','Reitingų skaičius');
define('_REGISTEREDUSERS','Registruoti vartotojai');
define('_NUMBEROFRATINGS','Reitingų skaičius');
define('_NOREGUSERSVOTES','Nėra registruotų vartotojų balsų');
define('_BREAKDOWNBYVAL','Reitingų pasidalinimas vertėmis');
define('_LTOTALVOTES','balsų iš viso');
define('_HIGHRATING','Aukštas reitingas');
define('_LOWRATING','Žemas reitingas');
define('_NUMOFCOMMENTS','Komentarų skaičius');
define('_WEIGHNOTE','* Pastaba: Šis resursas vertinamas pagal registruotų prieš neregistruotų vartotojų balsus');
define('_NOUNREGUSERSVOTES','Nėra neregistruotų vartotojų balsų');
define('_WEIGHOUTNOTE','* Pastaba: Šis resursas vertinamas pagal registruotų prieš išorinių balsuotojų balsus');
define('_NOOUTSIDEVOTES','Nėra išorinių balsų');
define('_OUTSIDEVOTERS','Išoriniai balsuotojai');
define('_UNREGISTEREDUSERS','Neregistruoti balsai');
define('_PROMOTEYOURSITE','Reklamuoti svetainę');
define('_PROMOTE01','Gal jus sudomintų \'Įvertinkite svetainę\' galimybė jūsų svetainėje. Tai leis jums patalpinti paveiksliuką (arba net balsavimo formą) savo svetainę, o tai leis padidinti balsų jūsų svetainei skaičių. Prašome pasirinkti vieną iš kelių pasiūlymų žemiau:');
define('_TEXTLINK','Tekstinė nuoroda');
define('_PROMOTE02','Vienas iš būdų yra patalpinti paprasto teksto nuorodą:');
define('_HTMLCODE1','Šiuo atveju naudojamas HTML kodas:');
define('_THENUMBER','Numeris');
define('_IDREFER','HTML šaltinyje ID numeris yra $sitename duomenų bazėje. Įsitikinkite, kad šis numeris yra.');
define('_BUTTONLINK','Mygtuko nuoroda');
define('_PROMOTE03','Jei jūs ieškote daugiau nei paprasto teksto nuorodas, galite naudoti mažą mygtuką:');
define('_RATEIT','Įvertinkite svetainę!');
define('_HTMLCODE2','Mygtuko HTML kodas:');
define('_REMOTEFORM','Nuotolinė reitingo forma');
define('_PROMOTE04','Jei sukčiausite, mes pašalinsime jūsų nuorodą. Taip atrodo nuotolinio reitingo forma.');
define('_VOTE4THISSITE','Balsuokite už šią svetainę!');
define('_HTMLCODE3','Naudodami šia formą, jūs leisite vartotojams vertinti jūsų resursą tiesiog iš jūsų svetainės ir reitingas bus įrašytas čia. Aukščiau esanti forma neveikia, bet žemiau esantis kodas veiks jei jūs nukopijuosit ir patalpinsit šį HTML kodą savo svetainėje. HTML kodas žemiau:');
define('_PROMOTE05','Dėkojame! ir linkime sėkmės!');
define('_THANKSBROKEN','Dėkojame už pagalbą palaikant duomenų bazės integralumą.');
define('_SECURITYBROKEN','Saugumo sumetimais jūsų vartotojo vardas bei IP adresas laikinai bus įrašyas.');
define('_THANKSFORINFO','Dėkojame už informaciją.');
define('_LOOKTOREQUEST','Mes peržiūrėsime jūsų prašymą artimiausiu metu.');
define('_SENDREQUEST','Siųsti prašymą');
define('_THANKSTOTAKETIME','Dėkojame už sugaištą laiką vertinant svetainę čia');
define('_RETURNTO','Sugrįžti į');
define('_RATENOTE1','Prašome nebalsuoti už tą patį resursą daugiau nei kartą.');
define('_RATENOTE2','Vertinimo skalė 1 - 10, kai 1 reiškią prastą, o 10 puikų rezultatą.');
define('_RATENOTE3','Prašome būti objektyviu balsuojant, nes jei kiekvienas gaus 1 ar 10 reitingai nebus naudingi.');
define('_RATENOTE5','Nebalsuokite už savo ar konkurento resursus.');
define('_YOUAREREGGED','Jūs esate registruotas bei prisijungęs vartotojas.');
define('_FEELFREE2ADD','Laisvai komentuokite šią svetainę.');
define('_YOUARENOTREGGED','Jūs nesate registruotas vartotojas arba jūs neprisijungėte.');
define('_IFYOUWEREREG','Jei būtumėte registruotas vartotojas galėtumėte komentuoti šią svetainę.');
define('_MODIFY','Keisti');
define('_COMPLETEVOTE1','Jūsų balsas vertinamas.');
define('_COMPLETEVOTE2','Jūs jau balsavote už šį resursą prieš $anonwaitdays dienas.');
define('_COMPLETEVOTE3','Balsuokite už resursą tik kartą.<br>Visi balsai yra įrašomi bei patikrinami.');
define('_COMPLETEVOTE4','Jūs negalite balsuoti už nuorodą, kurią atsiuntėte.<br>Visi balsai yra įrašomi bei patikrinami.');
define('_COMPLETEVOTE5','Nėra parinkto reitingo');
define('_COMPLETEVOTE6','Leidžiamas tik vienas balsas iš atskiro IP adreso $outsidewaitdays dienų laikotarpyje.');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_EZTRANSFERDOWNLOADS','Transfer all downloads from category');
define('_DELEZDOWNLOADSCATWARNING','WARNING : Are you sure you want to delete this category? You will delete all sub-categories and attached downloads as well!');
define('_DELCONTENTCAT','WARNING: Are you sure you want to delete this category? Pages under this category, if they exist, will not be removed, but will not be attached to any category.');
define('_DELCATEGORY','Delete Category');
define('_DOWNLOADTITLE','Download Title');
define('_DOWNLOADSINDB','Downloads in our Database');
define('_DOWNLOADSWAITINGVAL','Downloads Waiting for Validation');
define('_CLEANDOWNLOADSDB','Clean Downloads Votes');
define('_BROKENDOWNLOADSREP','Broken Downloads Reports');
define('_DOWNLOADMODREQUEST','Download Modification Requests');
define('_ADDNEWDOWNLOAD','Add a New Download');
define('_MODDOWNLOAD','Modify a Download');
define('_WEBDOWNLOADSADMIN','Web Downloads Administration');
define('_DNOREPORTEDBROKEN','No reported broken downloads.');
define('_DUSERREPBROKEN','User Reported Broken Downloads');
define('_DIGNOREINFO','Ignore (Deletes all <b><i>requests</i></b> for a given download)');
define('_DDELETEINFO','Delete (Deletes <b><i>broken download</i></b> and <b><i>requests</i></b> for a given download)');
define('_DOWNLOADOWNER','Download Owner');
define('_DUSERMODREQUEST','User Download Modification Requests');
define('_DOWNLOADVALIDATION','Download Validation');
define('_CHECKALLDOWNLOADS','Check ALL Downloads');
define('_VALIDATEDOWNLOADS','Validate Downloads');
define('_NEWDOWNLOADADDED','New Download added to the Database');

