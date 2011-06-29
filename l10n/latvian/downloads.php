<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/latvian/downloads.php,v $
  $Revision: 9.7 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:57 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','Jūsu izvēlētā lejupilāde neeksistē');
define('_CATEGORIES','Kategorijas');
define('_LVOTES','balsis');
define('_TOTALVOTES','Kopējais balsu skaits:');
define('_THEREARE','Ir');
define('_NOMATCHES','Diemžēl nekas nav atrasts.');
define('_SCOMMENTS','Komentāri');
define('_UNKNOWN','Nezinams');
define('_AUTHORNAME','Autora Vārds');
define('_AUTHOREMAIL','Autora E-pasts');
define('_DOWNLOADNAME','Programmas nosaukums');
define('_ADDTHISFILE','Pievienot šo failu');
define('_INBYTES','bitos');
//define('_FILESIZE','Filesize');
//define('_VERSION','Version');
//define('_AUTHOR','Author');
define('_HOMEPAGE','Mājas lapa');
define('_DOWNLOADNOW','Lejupielādēt šo failu!');
define('_RATERESOURCE','Novērtēt šo resursu');
define('_FILEURL','Saite uz failu');
define('_ADDDOWNLOAD','Rievienot lejupielādi');
define('_DOWNLOADSMAIN','Lejupielažu galvenā lapa');
define('_DOWNLOADCOMMENTS','Lejupielāžu komentāri');
define('_DOWNLOADSMAINCAT','Galvenās lejupielāžu kategorijas');
define('_ADDADOWNLOAD','Pievienot jaunu lejupielādi');
define('_DSUBMITONCE','Katru unikālo lejupielādi pievienojiet tikai vienu reizi.');
define('_DPOSTPENDING','Visas lejupielādes ir pievienotas un gaida administrarota apstiprinājumu.');
define('_RESSORTED','Resursi atlasīti pēc');
define('_DOWNLOADSNOTUSER1','Jūs nēsat reģistrējies vai pieslēdzies sistēmai.');
define('_DOWNLOADSNOTUSER2','Tikai reģistrēti lietotāji var pievienot jaunas lejupielādes.');
define('_DOWNLOADSNOTUSER3','Reģistrēšanās ir ātra un vienkārša!');
define('_DOWNLOADSNOTUSER4','Kāpēc ir jāreģistrējas, lai piekļūtu zināmiem resursiem?');
define('_DOWNLOADSNOTUSER5','Lai mēs vaŗētu piedāvāt Jums tikai to labāko,');
define('_DOWNLOADSNOTUSER6','Katru pievienoto resursu individuali novērtē un apstiprina mūsu darbinieki.');
define('_DOWNLOADSNOTUSER7','Mēs ceram ka piedāvājjam Jums tikai noderīgu informāciju.');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink("Your_Account").'">Reģistrējies!</a>');
define('_DOWNLOADALREADYEXT','Kļūda: Šāda saite (URL) jau ir mūsu datubāzē!');
define('_DOWNLOADNOTITLE','Kļūda: Norādiet pievienojamās saites (URL) nosaulumu!');
define('_DOWNLOADNOURL','Kļūda: Norādiet pievienojamās saites saiti (URL)!');
define('_DOWNLOADNODESC','Kļūda: Norādiet pievienojamās saites (URL) aprakstu!');
define('_DOWNLOADRECEIVED','Jūsu resurss ir veiksmīgi pievienots. Paldies Jums!');
define('_NEWDOWNLOADS','Jaunākās Lejupielādes');
define('_TOTALNEWDOWNLOADS','Visas Jaunākās Lejupielādes');
define('_DTOTALFORLAST','Visas Jaunākās Lejupielādes (četras pēdējās)');
define('_DBESTRATED','Augstāk novērtētās lejupielādes (Tops)');
define('_TRATEDDOWNLOADS','kopā novērtētas lejupielādes');
define('_SORTDOWNLOADSBY','Sakārtot lejupielādes pēc');
define('_DCATNEWTODAY','Jaunās šīs kategorijas lejupielādes, kas pievienotas šodien');
define('_DCATLAST3DAYS','Jaunās šīs kategorijas lejupielādes, kas pievienotas pēdējo 3 dienu laikā');
define('_DCATTHISWEEK','Jaunās šīs kategorijas lejupielādes, kas pievienotas šonedēļ');
define('_DDATE1','Datuma (Sākot ar vecākām lejupielādēm)');
define('_DDATE2','Datuma (Sākot ar jaunākām lejupielādēm)');
define('_DOWNLOADS','Lejupielādes');
define('_DOWNLOADPROFILE','Lejupielāžu profils');
define('_DOWNLOADRATINGDET','Detalizētāks lejupielādes vērtējums');
define('_EDITTHISDOWNLOAD','Rediģēt šo resursu');
define('_DOWNLOADRATING','LEjupielāžu vērtējums');
define('_DOWNLOADVOTE','Balsot!');
define('_DONLYREGUSERSMODIFY','Tikai reģistrēti lietotāji var ierosināt izmaiņas. Lūdzu <a href="'.getlink("Your_Account").'">reģistrējies vai ienāc sistēmā</a>.');
define('_REQUESTDOWNLOADMOD','Ierosināt izmaiņas');
define('_DOWNLOADID','Lejupielādes ID');
define('_DLETSDECIDE','Lietotāju viedoklis var palīdzēt citiem izvēlēties labāko lejupielādi.');
define('_DRATENOTE4','Jūs varat apskatīt <a href="'.getlink("Downloads&amp;d_op=TopRated").'">Augstāk novērtēto resursu sarakstu</a>.');
define('_POPULAR','Populārs');
define('_TOPRATED','Augstu novērtēts');
define('_ADDITIONALDET','Papildus informācija');
define('_EDITORREVIEW','Redaktora vērtējums');
define('_REPORTBROKEN','Ziņot par bojātu saiti');
define('_AND','un');
define('_INDB','mūsu datubāzē');
define('_INSTRUCTIONS','Instrukcija');
define('_USERANDIP','Tavs lietotājvārds un IP ir piefiksēti, tā kā uzvedies pieklājīgi un nebojā sistēmu.');
define('_LDESCRIPTION','Apraksts: (maksimums 255 simboli)');
define('_CHECKFORIT','Tu neatstāji mums savu e-pasta adresi, taču mēs tavu saiti tāpat drīzumā pārbaudīsim.');
define('_LASTWEEK','Pagājušajā Nedēļā');
define('_LAST30DAYS','Pēdjo 30 dienu laikā');
define('_1WEEK','1 Nedēļa');
define('_2WEEKS','2 Nedēļas');
define('_30DAYS','30 Dienas');
define('_ADDEDON','Pievienots');
define('_RATING','Vētrtējums');
define('_DETAILS','Sīkāka informācija');
define('_OF','no');
define('_TVOTESREQ','nepieciešamais balsu minimums');
define('_SHOWTOP','Rādīt pēdējos');
define('_MOSTPOPULAR','Vis populārākos (Topu)');
define('_OFALL','no visiem');
define('_POPULARITY','Popularitāte');
define('_SELECTPAGE','Izvēlies visus');
define('_MAIN','Galvenā lapa');
define('_NEWTODAY','Šīsdienas jaunumi');
define('_NEWLAST3DAYS','Jaunākais pēdējo 3 dienu laikā');
define('_NEWTHISWEEK','Šīs nedēļas jaunumi');
define('_POPULARITY1','Popularitāte (No sākuma sliktākos)');
define('_POPULARITY2','Popularitāte (No sākuma labākos)');
define('_TITLEAZ','Pēc virsrakstiem (A - Z)');
define('_TITLEZA','Pēc virsrakstiem (Z - A)');
define('_RATING1','Pēc vērtējuma (Vispirms nepopulārākos)');
define('_RATING2','Pēc vērtējuma (Vispirms populārākos)');
define('_SEARCHRESULTS4','Meklēt');
define('_USUBCATEGORIES','Apakškategorijas');
define('_TRY2SEARCH','Mēģini meklēt');
define('_INOTHERSENGINES','citos meklētājos');
define('_EDITORIAL','Redaktora sleja');
define('_EDITORIALBY','Redaktors: ');
define('_NOEDITORIAL','Redaktora sleja šai lapai šobrīd nav pieejama.');
define('_RATETHISSITE','Novērtēt šo resursu');
define('_ISTHISYOURSITE','Vai tas ir tavs resurss?');
define('_ALLOWTORATE','Ļaut citiem vērtēt to no tavas tīmekļa lappuses!');
define('_OVERALLRATING','Vidējais vērtējums');
define('_TOTALOF','Kopā: ');
define('_USER','Lietotājs');
define('_USERAVGRATING','Lietotāja vidējais vērtējums');
define('_NUMRATINGS','# no vērtējumiem');
define('_REGISTEREDUSERS','Reģistrēti lietotāji');
define('_NUMBEROFRATINGS','Balsu Skaits');
define('_NOREGUSERSVOTES','Reģistrētu lietotāju balsu skaits');
define('_BREAKDOWNBYVAL','Izvērsti vērtējumi');
define('_LTOTALVOTES','kopējais balsu skaits');
define('_HIGHRATING','Augstākais novērtējums');
define('_LOWRATING','Zemākais novērtējums');
define('_NUMOFCOMMENTS','Komentāru skaits');
define('_WEIGHNOTE','* Piezīme: Šim resursam tiek ņemtas vērā gan reģistrētu, gan arī nereģistrētu lietotāju balsis.');
define('_NOUNREGUSERSVOTES','Nereģistrētu lietotāju balsojumu nav');
define('_WEIGHOUTNOTE','* Piezīme: Šim resursam tiek ņemtas vērā gan reģistrētu lietoāju balsis, gan arī ārējās balsis');
define('_NOOUTSIDEVOTES','Ārējo balsu nav');
define('_OUTSIDEVOTERS','Ārējie balsotāji');
define('_UNREGISTEREDUSERS','Nereģistrētie lietotāji');
define('_PROMOTEYOURSITE','Atbalsti savu tīmekļa lappusi');
define('_PROMOTE01','Varbūt tevi interesē kāda no attālinātajām tīmekļa lappuses vērtēšanas iespējām. Šīs iespējas ļauj tev savā lapā izvietot attēlu vai pat balsošanas formu, lai ietekmētu tava resursa vēŗtējumu šajā lapā. Izvēlies vienu no zemāk redzamajām iepējām:');
define('_TEXTLINK','Vienkārša saite');
define('_PROMOTE02','Kā saiti var izmantot vienkāršu tekstu:');
define('_HTMLCODE1','Šajā gadījumā tev jālieto šāds HTML kods:');
define('_THENUMBER','Skaitlis');
define('_IDREFER','HTML kodā attiecas uz tavas lapas ID numuru mūsu datubāzē. Pārliecinies, ka šis skaitlis ir pareizs.');
define('_BUTTONLINK','Saite vaur pogu');
define('_PROMOTE03','Ja tu meklē ko vairāk kā vienkārši saiti, vari izmantot šo pogu:');
define('_RATEIT','Novērtēt šo lapu!');
define('_HTMLCODE2','Šīs pogas pirmkods ir:');
define('_REMOTEFORM','Attālinātās balsošanas forma');
define('_PROMOTE04','Ja tu krāpsies, tagas lapas saite tiks dzēsta. Kad esi brīdināts, šādi izskatās attālinātās balsošanas forma:');
define('_VOTE4THISSITE','Balst par šo lapu!');
define('_HTMLCODE3','Izmantojot šo formu jūs varat ļaut lietoājiem novērtēt jūsu resursu no jūsu lapas. Augstāk redzamā forma ir neaktīva, bet sekojošais koda fragments strādā, jums atliek to tikai ievietot savā tīmekļa lappusē.');
define('_PROMOTE05','Paldies, un vēlam veiksmi balsojumos');
define('_THANKSBROKEN','Paldies, ka palīdzat saglabāt šo direktoriju struktūru.');
define('_SECURITYBROKEN','Drošības apsvēŗumu dēļ jūsu vārds un IP adrese arī tiks īslaicīgi saglabāta');
define('_THANKSFORINFO','Paldies par informāciju.');
define('_LOOKTOREQUEST','Mēs pec mirklīša apskatīsim jūsu lūgumu.');
define('_SENDREQUEST','Nosūtīt lūgumu');
define('_THANKSTOTAKETIME','Paldies, ka atradāt laiku, lai vovērtētu šo lapu ar');
define('_RETURNTO','Atgriezties uz');
define('_RATENOTE1','Lūdzu nebalsojiet par vienu un to pašu resursu vairāk kā vienu reizi.');
define('_RATENOTE2','Vērtējumi robežās no 1 līdz 10, 1 ir vis sliktākais, bet 10 vis labākais.');
define('_RATENOTE3','Lūdzu esiet objektīvi savos balsojumos. Ja visi saņem 1 vai 10, tad no šāda vērtējuma nav pārāk lielas jēgas');
define('_RATENOTE5','Nebalsojiet par savu vai sava konkurenta resursu.');
define('_YOUAREREGGED','Jūs esat reģistrēts lietotājs un esat veiksmīgi ienācis mūsu sistēmā.');
define('_FEELFREE2ADD','Droši pievienojiet komentāru par šo lapu.');
define('_YOUARENOTREGGED','Jūs nresat reģistrēts lietotājs vaiarī neesat ienācis mūsu sistēmā.');
define('_IFYOUWEREREG','Tikai reģistrēti lietotāji drīkst rakstīt komentārus.');
define('_MODIFY','Izmainīt');
define('_COMPLETEVOTE1','Paldies par balsojumu.');
define('_COMPLETEVOTE2','Pedejo '.$anonwaitdays.' dienu(as) laikā jūs ja uesat balsojis par šo resursu.');
define('_COMPLETEVOTE3','Balsojiet tikai vienu reizi.<br />Visi balsojumi tiek saglabāti un pārbaudīti.');
define('_COMPLETEVOTE4','Jūs nevarat balsot par paša pievienotu saiti.<br />Visi balsojumi tiek saglabāti un pārbaudīti.');
define('_COMPLETEVOTE5','Izvēlieties savu vērtējumu');
define('_COMPLETEVOTE6',''.$outsidewaitdays.' dienu(as) laikā no vienas IP var balsot tikai vienu reizi.');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDDURL','Add this URL');
define('_EZTRANSFERDOWNLOAD','Transfer');
define('_EZTRANSFERDOWNLOADS','Parvietot visas lejupielādes no karegorijas');
define('_DELEZDOWNLOADSCATWARNING','UZMANĪBU : Vai tiešām vēlaties dzēst šo sadaļu? Arī visas apakškategorijas un jelupilādes tiks izdzēstas!');
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
