<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/l10n/estonian/Extra/downloads.php,v $
  $Revision: 1.5 $
  $Author: estlane $
  $Date: 2009/02/18 09:29:56 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','Sinu poolt soovitud faili ei ole olemas.');
define('_PREVIOUS','Eelmine');
define('_NEXT','Järgmine');
define('_CATEGORIES','Kategooriat');
define('_LVOTES','häält');
define('_TOTALVOTES','Hääli Kokku:');
define('_THEREARE','Praegu on');
define('_NOMATCHES','Sinu päringule ei leidunud vastust');
define('_SCOMMENTS','Kommentaar');
define('_UNKNOWN','Tundmatu');
define('_AUTHORNAME','Autori nimi');
define('_AUTHOREMAIL','Autori e-mail');
define('_DOWNLOADNAME','Programmi nimi');
define('_ADDTHISFILE','Lisa see fail');
define('_INBYTES','baitides');
//define('_FILESIZE','Faili suurus');
//define('_VERSION','Versioon');
//define('_AUTHOR','Autor');
define('_HOMEPAGE','Kodulehekülg');
define('_DOWNLOADNOW','Lae see fail kohe alla!');
define('_RATERESOURCE','Hinda faili');
define('_FILEURL','Faili Link');
define('_ADDDOWNLOAD','Lisa Fail');
define('_DOWNLOADSMAIN','Failide avaleht');
define('_DOWNLOADCOMMENTS','Failide kommentaarid');
define('_DOWNLOADSMAINCAT','Failide peakategooriad');
define('_ADDADOWNLOAD','Lisa uus fail');
define('_DSUBMITONCE','Saada unikaalne fail ainult ühe korra.');
define('_DPOSTPENDING','Kõik failid on saadetud sõltumata kinnitusest.');
define('_RESSORTED','Failid hetkel sorteeritud');
define('_DOWNLOADSNOTUSER1','Sa ei ole registreeritud kasutaja või sa ei ole sisse loginud.');
define('_DOWNLOADSNOTUSER2','Kui sa oled registreeritud, siis sa võid lisada faile sellelt webilehelt.');
define('_DOWNLOADSNOTUSER3','Registreeritud kasutajaks saamine on kiire ja lihtne protsess.');
define('_DOWNLOADSNOTUSER4','Miks me nõuame registratsiooni juurdepääsu teatud võimalustele?');
define('_DOWNLOADSNOTUSER5','Niisiis me võime pakkuda sulle ainult kõrgema kvaliteedi sisu,');
define('_DOWNLOADSNOTUSER6','iga asi on üksikult üle vaadatud ja heaks kiidetud meie koosseisu poolt.');
define('_DOWNLOADSNOTUSER7','Me loodame sulle pakkuda ainult väärtuslikku informatsiooni.');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink("Your_Account").'">Registreeri konto</a>');
define('_DOWNLOADALREADYEXT','VIGA: See URL on juba olemas Andmebaasis!');
define('_DOWNLOADNOTITLE','VIGA: Sa pead sisestama PEALKIRJA oma URL-ile!');
define('_DOWNLOADNOURL','VIGA: Sa pead sisestama AADRESSI oma URL-ile!');
define('_DOWNLOADNODESC','VIGA: Sa pead sisestama KIRJELDUSE oma URL-ile!');
define('_DOWNLOADRECEIVED','Me võtsime vastu sinu faili saadetise. Tänan!');
define('_NEWDOWNLOADS','Uued failid');
define('_TOTALNEWDOWNLOADS','Kokku uusi faile');
define('_DTOTALFORLAST','Kokku uusi faile viimasest');
define('_DBESTRATED','Enim hinnatud failid - Top');
define('_TRATEDDOWNLOADS','kokku hinnatud faili');
define('_SORTDOWNLOADSBY','Sorteeri faile');
define('_DCATNEWTODAY','Uued failid selles kategoorias lisatud täna');
define('_DCATLAST3DAYS','Uued failid selles kategoorias lisatud viimase 3 päeva jooksul');
define('_DCATTHISWEEK','Uued failid selles kategoorias lisatud sellel nädalal');
define('_DDATE1','Kuupäevalises järjekorras (Vanemad failid loendatud ennem)');
define('_DDATE2','Kuupäevalises järjekorras (Uuemad failid loendatud ennem)');
define('_DOWNLOADS','Allalaadimisi');
define('_DOWNLOADPROFILE','Faili profiil');
define('_DOWNLOADRATINGDET','Faili hinnagu Detailid');
define('_EDITTHISDOWNLOAD','Redigeeri faili');
define('_DOWNLOADRATING','Failide hindamine');
define('_DOWNLOADVOTE','Hääleta!');
define('_DONLYREGUSERSMODIFY','Ainult registreeritud kasutajad võivad soovitada failide modifikatsiooni. Palun <a href="'.getlink("Your_Account").'">registreeri või logi sisse</a>.');
define('_REQUESTDOWNLOADMOD','Soovita faili modifikatsiooni');
define('_DOWNLOADID','Faili ID');
define('_DLETSDECIDE','Sisesed kasutajad nagu Sina, aitavad teistele külastajatele paremini otsustada millisele failile klikkida.');
define('_DRATENOTE4','Sa võid näha nimekirja <a href="'.getlink('Downloads&amp;d_op=TopRated').'">Enim hinnatud failid</a>.');
define('_POPULAR','Populaarsemad');
define('_TOPRATED','Hinnatumad');
define('_ADDITIONALDET','Lisa detailid');
define('_EDITORREVIEW','Toimetaja ülevaade');
define('_REPORTBROKEN','Teavita vigasest lingist');
define('_AND','ja');
define('_INDB','meie andmebaasis');
define('_INSTRUCTIONS','Juhend');
define('_USERANDIP','Kasutajanimi ja IP on salvestatud, seega palun ära solva süsteemi.');
define('_LDESCRIPTION','Kirjeldus: (255 tähemärki max)');
define('_CHECKFORIT','Sa ei andnud e-maili addressi, aga me kontrollime sinu linki varsti.');
define('_LASTWEEK','Eelmine nädal');
define('_LAST30DAYS','Viimased 30 päeva');
define('_1WEEK','1 Nädal');
define('_2WEEKS','2 Nädalat');
define('_30DAYS','30 Päeva');
define('_ADDEDON','Lisatud');
define('_RATING','Hinnang');
define('_DETAILS','Täpsemalt');
define('_OF','');
define('_TVOTESREQ','miinimum häält nõutav');
define('_SHOWTOP','Näita topi');
define('_MOSTPOPULAR','Kõige populaarsem - Top');
define('_OFALL','Kõikidest');
define('_POPULARITY','Populaarsus');
define('_SELECTPAGE','Vali leht');
define('_MAIN','Falilide avaleht');
define('_NEWTODAY','Uued Täna');
define('_NEWLAST3DAYS','Uued viimase 3 päeva jooksul');
define('_NEWTHISWEEK','Uued sellel nädalal');
define('_POPULARITY1','Populaarsuse järgi (Vähimast tabamusest suuremani)');
define('_POPULARITY2','Populaarsuse järgi (Suuremast tabamusest vähimani)');
define('_TITLEAZ','Tähestikulises järjekorras (A-st Z-ni)');
define('_TITLEZA','Tähestikulises järjekorras (Z-st A-ni)');
define('_RATING1','Hinnangu järgi (Madalamatest punktidest kõrgemateni)');
define('_RATING2','Hinnangu järgi (Kõrgematest punktidest madalamateni )');
define('_SEARCHRESULTS4','Otsimise tulemused');
define('_USUBCATEGORIES','Alamkategooriad');
define('_TRY2SEARCH','Proovi Otsida');
define('_INOTHERSENGINES','Teistest otsingumootoritest');
define('_EDITORIAL','Toimetaja');
define('_EDITORIALBY','Toimetas');
define('_NOEDITORIAL','Toimetajat ei ole praegu saadaval selle webilehel.');
define('_RATETHISSITE','Hinda seda faili');
define('_ISTHISYOURSITE','Kas see on sinu fail?');
define('_ALLOWTORATE','Lase teistel kasutajatel hinnata seda oma webilehelt!');
define('_OVERALLRATING','Üldine hinnang');
define('_TOTALOF','Kokku');
define('_USER','Kasutaja');
define('_USERAVGRATING','Kasutajate keskimine hinnang');
define('_NUMRATINGS','# Hinnanguid');
define('_REGISTEREDUSERS','Registreeritud kasutajad');
define('_NUMBEROFRATINGS','Hindamisi kokku');
define('_NOREGUSERSVOTES','Registreerunud kasutaja hääli pole');
define('_BREAKDOWNBYVAL','Tabel hinnagu väärtuste järgi');
define('_LTOTALVOTES','hääli kokku');
define('_HIGHRATING','Kõrgeim hinne');
define('_LOWRATING','Madalaim hinne');
define('_NUMOFCOMMENTS','Kommentaaride arv');
define('_WEIGHNOTE','* NB: Selle faili kaal registreeritud ja registreerimata kasutajate hinnang');
define('_NOUNREGUSERSVOTES','Registreerimata kasutaja hääli ei ole');
define('_WEIGHOUTNOTE','* NB: Selle faili kaal registreeritud ja väliste hääletajate hinnang');
define('_NOOUTSIDEVOTES','Väliseid hääli ei ole');
define('_OUTSIDEVOTERS','Väliseid hääletajaid');
define('_UNREGISTEREDUSERS','Registreerimata kasutajaid');
define('_PROMOTEYOURSITE','Edenda oma veebilehte');
define('_PROMOTE01','Võibolla oled Sa huvitatud mitme kaug \'Hinda veebilehte\' valikust, mis on meil saadaval. Need lasevad sul asetada pildi (või isegi hindamise vormi) sinu veebilehele, tellides juurdekasvu numbrites hääli oma faili saamisel. Palun vali üks valikutest alljärgnevast nimekirjast:');
define('_TEXTLINK','Tekstilink');
define('_PROMOTE02','Üks võimalus linkida hindamisvormi, on läbi lihtsa tekstilingi:');
define('_HTMLCODE1','HTML koodi peaksid sa kasutama sellisel juhul alljärgnevalt:');
define('_THENUMBER','Number');
define('_IDREFER','HTML koodis viitab sinu lehe ID numbrile '.$sitename.' andmebaasis. Ole kindel, et number on olemas.');
define('_BUTTONLINK','Nupu link');
define('_PROMOTE03','Kui sa otsid natuke rohkemat kui tavalist tekstilinki võid sa kasutada seda väikest nupulinki:');
define('_RATEIT','Hinda seda lehte!');
define('_HTMLCODE2','Lähtekoodi üleval asuvast nupust:');
define('_REMOTEFORM','Kaughindamise vorm');
define('_PROMOTE04','Kui sa petad sellega, siis me kõrvaldame Sinu lingi.Siin on see kaughindamise vorm ja välja näeb sellisena.');
define('_VOTE4THISSITE','Hääleta seda lehte!');
define('_HTMLCODE3','Kasutades seda vormi, lased sa kasutajatel hinnata oma faili otse oma lehelt ja hinded salvestatakse siia. Alljärgnev lähtekood töötab, kui sa lihtsalt kopeerid ja lisad selle oma veebilehele. Selline näeb siis välja lähtekood:');
define('_PROMOTE05','Tänan! Edu sinu hindamistel!');
define('_THANKSBROKEN','Tänan sind abi eest, et aitad ülal hoida kataloogi terviklikkust.');
define('_SECURITYBROKEN','Turvalisuse põhjustel salvestatakse ajutiselt Sinu kasutajanimi ja IP aaddress.');
define('_THANKSFORINFO','Tänan informatsiooni eest.');
define('_LOOKTOREQUEST','Me vaatame sinu taotlust nii vara kui võimalik.');
define('_SENDREQUEST','Saada taotlus');
define('_THANKSTOTAKETIME','Tänan Sind, et leidsid aega hinnata seda siin');
define('_RETURNTO','Tagasi');
define('_RATENOTE1','Palun, ära hääleta sama faili rohkem kui üks kord.');
define('_RATENOTE2','Hindeid saab anda 1 - 10. 1 on väga halb ja 10 on väga hea.');
define('_RATENOTE3','Palun ole objektiivne oma hindega, kui kõik hindavad  1 või 10, siis  pole hinded eriti kasulikud.');
define('_RATENOTE5','Ära hinda oma faili või võistlejat.');
define('_YOUAREREGGED','Sa oled registreeritud kasutaja ja oled sisse loginud.');
define('_FEELFREE2ADD','Julgelt lisa kommentaare selle lehe kohta.');
define('_YOUARENOTREGGED','Sa ei ole registreeritud kasutaja või sa ei ole sisse loginud.');
define('_IFYOUWEREREG','Kui sa olid registreeritud, siis võid sa postitada kommentaare sellel webilehel.');
define('_MODIFY','Muuda');
define('_COMPLETEVOTE1','Sinu hinnang on lisatud.');
define('_COMPLETEVOTE2','Sa juba oled hinnanud seda faili viimasel '.$anonwaitdays.' päeva jooksul.');
define('_COMPLETEVOTE3','Hinda faili ainult korra.<br>Kõik hinnangud on logitud ja arvutatud.');
define('_COMPLETEVOTE4','Sa ei saa hindeid anda faili poolt, mille sa saatsid.<br>Kõik hinnangud on logitud ja arvutatud.');
define('_COMPLETEVOTE5','Hinnangut ei ole valitud - häält ei ole talletatud.');
define('_COMPLETEVOTE6','Ainult üks hinnag IP addressi kohta on lubatud iga '.$outsidewaitdays.' päeva järel.');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_EZTRANSFERDOWNLOADS','Kanna kõik failid sellest kategooriast');
define('_DELEZDOWNLOADSCATWARNING','HOIATUS : Oled kindel, et tahad selle kategooria kustutada? Sellega kaasneb ka kõikide alamkategooriate ja lisatud failide kustutamine!');
define('_DELCONTENTCAT','HOIATUS: Oled sa kindel, et tahad seda kategooriat kustutada? Selles kategoorias olevaid lehti, kui neid on, ei eemaldata aga ei lisata ühegi kategooria juurde.');
define('_DELCATEGORY','Kustuta kategooria');
define('_DOWNLOADTITLE','Faili pealkiri');
define('_DOWNLOADSINDB','Faile meie andmebaasis');
define('_DOWNLOADSWAITINGVAL','Failid mis ootavad kinnitust');
define('_CLEANDOWNLOADSDB','Tühjenda failide hääled');
define('_BROKENDOWNLOADSREP','Vigaste failide raportid');
define('_DOWNLOADMODREQUEST','Faili muudatuste soovid');
define('_ADDNEWDOWNLOAD','Lisa uus fail');
define('_MODDOWNLOAD','Muuda faili');
define('_WEBDOWNLOADSADMIN','Failide administratsioon');
define('_DNOREPORTEDBROKEN','Pole ühtegi teavitatud vigast faili.');
define('_DUSERREPBROKEN','Kasutaja poolt teavitatud vigased failid');
define('_DIGNOREINFO','Ignoreeri (Kustutab antud failil kõik <b><i>taotlused</i></b>)');
define('_DDELETEINFO','Kustuta (Eemaldab <b><i>vigased failid</i></b> ja antud faili <b><i>taotlused</i></b>)');
define('_DOWNLOADOWNER','Faili omanik');
define('_DUSERMODREQUEST','Kasutaja faili muutmise soov');
define('_DOWNLOADVALIDATION','Faili kinnitamine');
define('_CHECKALLDOWNLOADS','Märgista KÕIK failid');
define('_VALIDATEDOWNLOADS','Kinnita failid');
define('_NEWDOWNLOADADDED','Uus fail lisatud andmebaasi');


////////////////////////////////////////////////////////////////////
///////////////// *** NEW TERMS *** ////////////////////////////////
///////////////////////////////////////////////////////////////////

// Misc
define('_DLP_INACTIVE','Mitteaktiivne');
define('_DLP_PENDING','Ootel');
define('_DLP_NEW','Uus!');
define('_DLP_UPD','Uuendatud!');
define('_DLP_SHORTDESC','Lühike kirjeldus');
define('_DLP_GO2DL','Mine uusima faili juurde');
define('_DLP_ROOT','Algus');
define('_DLP_PAGE','Leht');
define('_DLP_BACK2TOP','Tagasi üles');
define('_DLP_ASC','Tõusev');
define('_DLP_DESC','Vähenev');
define('_DLP_PUBLISHED','Väljalastud');
define('_DLP_UPDATED','Uuendatud');
define('_DLP_SUBCAT','Alamkategooria');
define('_DLP_SUBCATS','Alamkategooriad');
define('_DLP_LASTADD','Viimati lisatud');
define('_DLP_SUB','Alam');
define('_DLP_APPROVE','Luba');
define('_DLP_REJECT','Ära luba');
define('_DLP_CLOSEWINDOW','Sulge aken');
define('_DLP_SCREENSHOTS','Pildid');
define('_DLP_NOSCREENSHOTS','Ilma pildita');
define('_DLP_ALLCATS','Kõik kategooriad');
define('_DLP_SUBMITTEDTO','Lisatud asukohta');
define('_DLP_EDITDL','Muuda faili');
define('_DLP_ALLFIELDSRQR','Kõik väljad on nõutud, kui pole teistmoodi väidetud.');
define('_DLP_XML','XML samastus');
define('_DLP_SORT','Järjesta');

// Broken mirrors
define('_DLP_REPORTBROKEN','Teavita vigasest lingist');
define('_DLP_BRKNGIVEINFO','Palun anna meile informatsiooni mis sorti probleemid sul tekkisid seda kindlat faili asukohta kasutades. Kasulik info sisaldab:');
define('_DLP_BRKNINFODATE','Kuupäeva ja kellaaeg faili allalaadimise katse ajal');
define('_DLP_BRKNRESPCODE','Vealehe koodi (nt. 404, 500)');
define('_DLP_BRKNFIRSTTIME','Kas see on esimene kord mil sul on esinenud probleeme selle faili asukohaga');
define('_DLP_BRKNTHANKS','Täname informatsiooni eest. Me uurime su raportit nii pea kui võimalik.');

// MD5
define('_DLP_MD5UPDATE','Uuenda MD5 summat teises serveris asuva faili asukoha jaoks');
define('_DLP_MD5UPDATED','MD5 summa uuendatud');
define('_DLP_MD5NOTREM','See väli on ainult teistes serverites hoitavate failide jaoks. Üleslaetud failid tekitavad MD5 summasid automaatselt');

// Mirrors
define('_DLP_MIRRORACTIVE','Faili asukoht on juba aktiivne');
define('_DLP_MIRRORAPP','Faili asukoht lubatud');
define('_DLP_MIRRORREJ','Faili asukoht tagasilükatud');

// Errors
define('_DLP_FIXERRORS','Palun paranda järgmised vead enne jätkamist');
define('_DLP_RQR','%s on nõutud');
define('_DLP_INACTIVEDL','Fail ei ole aktiivne');
define('_DLP_UNKNOWNDL','Faili ei leitud');
define('_DLP_DLFORBIDDEN','Sul ei ole lubatud seda faili allalaadida');
define('_DLP_FILEINLIST','URL/näidispilt mida sa püüdsid lisada, on juba su nimekirjas');
define('_DLP_FILEEXISTS','URL/näidispilt mida sa püüdsid lisada, on olemas juba teises failis');
define('_DLP_FILEASSOC','URL/näidispilt mida sa püüdsid lisada on juba olemas ja on seotud <a href="%s">selle</a> failiga');
define('_DLP_FAIL2GETINFO','Faili %s informatsiooni saamine ebõnnestus');
define('_DLP_INVALIDFNAME','%s ei ole sobiv failinimi');
define('_DLP_ISWEBSITE','%s on veebileht mitte õige fail');
define('_DLP_FILETOOBIG','Failisuurus on suurem kui lubatud: %s');
define('_DLP_FILETOOSMALL','Failisuurus on liiga väike');
define('_DLP_EXTFORBIDDEN','Laiend ei ole lubatud');
define('_DLP_FILEERROR','Sinu faili/näidispildi läbivaatamisel tekkis viga');
define('_DLP_INVALIDFILE','Ebasobiv fail/pilt');
define('_DLP_REGISTER2DL','Sa pead olema <a href="'.getlink('Your_Account').'">registreeritud</a> liige et allalaadida seda faili');
define('_DLP_ADMINDL','See fail on kättesaadav ainult administraatoritele');
define('_DLP_GROUPDL','See fail on kättesaadav ainult neile, kes on grupis %s');

// Menu
define('_DLP_RANDOM','Suvaline');
define('_DLP_HISTORY','Ajalugu');
define('_DLP_PROMOTE','Edenda');
define('_DLP_WRITEREVIEW','Kirjuta ülevaade');
define('_DLP_MYDL','Minu failid');

// Admin menu
define('_DLP_CONFIG','Seadistus');
define('_DLP_CFIELDS','Lisaväljad');
define('_DLP_PENDDL','Ootel failid');
define('_DLP_PENDMIR','Ootel failide asukohad');
define('_DLP_BRMIR','Katkised failide asukohad');
// broken mirrors
define('_DLP_DOWNLOAD','Lae alla');
define('_DLP_MIRROR','Faili asukoht');
define('_DLP_OWNEDBY','Omaja');
define('_DLP_REPSUBMITTER','Raporti saatja on');
define('_DLP_REPDISMISS','Lükka raport tagasi');
define('_DLP_REPNOTIFY','Teata omanikule');
define('_DLP_REPREM','Eemalda faili asukoht');
// custom fields
define('_DLP_CHANGESSAVED','Sinu muudatused on salvestatud');
define('_DLP_FNAMEFORBIDDEN','Välja nimi "%s" ei ole lubatud');
define('_DLP_FSIZEFORBIDDEN','Välja suurus peab mahtuma piiridesse');
define('_DLP_FIELDADDED','Väli "%s" on lisatud');
define('_DLP_FIELDPERMANENT','Välja ei saa eemaldada');
define('_DLP_FIELDREMOVED','Väli "%s" on eemaldatud');
define('_DLP_REMFIELD','Eemalda väli');
define('_DLP_REMFIELDCONF','Oled sa kindel, et tahad eemaldada välja "%s"?');
define('_DLP_ADDFIELD','Lisa väli');
define('_DLP_FIELDNAME','Välja nimi');
define('_DLP_FIELDTYPE','Välja tüüp');
define('_DLP_FTYPETEXT','Tekst');
define('_DLP_FTYPETEXTAREA','Tekstikast');
define('_DLP_FTYPEIMG','Pilt');
define('_DLP_FIMGPATH','Pilti rada');
define('_DLP_FIMGONLY','Ainult <em>pildi</em> väljatüübi jaoks');
define('_DLP_FIMGALT','Pildi asendustekst');
define('_DLP_FIELDSIZE','Välja suurus');
define('_DLP_FSIZEONLY','<em>pildi</em> ning <em>jah/ei</em> väljatüüpide jaoks kasuta EI jaoks 0 ning JAH jaoks 1');
define('_DLP_EDITFIELD','Muuda välja');
define('_DLP_FIELD','Väli');
define('_DLP_FORMDISPLAY','Vormi näitamine');
define('_DLP_VISIBLE','Nähtav');
define('_DLP_REQUIRED','Nõutud');
define('_DLP_ADMINONLY','Ainult adminnile');

// Ratings
define('_DLP_NRATED','Hindamata');
define('_DLP_RUBBISH','Rämps');
define('_DLP_BELOWAVG','Alla keskmise');
define('_DLP_AVG','Keskmine');
define('_DLP_GOOD','Hea');
define('_DLP_VGOOD','Väga hea');
define('_DLP_EXCELLENT','Täiuslik');

// Popularity
define('_DLP_NPOPULAR','Ebapopulaarne');
define('_DLP_SBAVG','Natukene alla keskmist');
//define('_DLP_POPULAR','Popular');
define('_DLP_VPOPULAR','Väga populaarne');

// Details
define('_DLP_SUBMITTEDBY','Faili lisaja');
define('_DLP_ISDLOWNER','See fail on sinu lisatud. Sa võid <a href="%s">seda muuta</a> millal iganes tahad.');
define('_DLP_MIRSUB','<a href="%s">Lisa oma faili asukoht</a> sellele failile');
define('_DLP_EDNOTE','Toimetuse märge');
define('_DLP_MEMREVIEWS','Liikmete ülevaated');
define('_DLP_PENDREVIEWS','Ootel ülevaated');
define('_DLP_VIEWALLSCREENS','Vaata kõiki pilte');
define('_DLP_PAGEVIEWS','Lehte vaadatud');
define('_DLP_EDPICK','Toimetaja valik');
define('_DLP_DLNOW','Lae alla');
define('_DLP_NADL','Allalaadimine keelatud');
define('_DLP_REVIEW','Ülevaade');
