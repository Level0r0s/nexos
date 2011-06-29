<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/basque/downloads.php,v $
  $Revision: 9.7 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:47 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','The download you\'ve requested doesn\'t exists.');
define('_CATEGORIES','Kategoria');
define('_LVOTES','Botoak');
define('_TOTALVOTES','Guztirako Botoak:');
define('_THEREARE','Guztira');
define('_NOMATCHES','Bilaketan ez da aurkitu erregistrorik');
define('_SCOMMENTS','Komentarioak');
define('_UNKNOWN','Ezezaguna');
define('_AUTHORNAME','Autorearen Izena');
define('_AUTHOREMAIL','Autorearen Emaila');
define('_DOWNLOADNAME','Programaren Izena');
define('_ADDTHISFILE','Artxibo hau gehitu');
define('_INBYTES','byte-etan');
//define('_FILESIZE','Artxiboaren tamaina');
//define('_VERSION','Bertsioa');
//define('_AUTHOR','Autorea');
define('_HOMEPAGE','Hasierako Orria');
define('_DOWNLOADNOW','Fitxero hau une honetan deskargatu.');
define('_RATERESOURCE','Errekurtsoa bozkatu');
define('_FILEURL','Artxiboaren URL-a');
define('_ADDDOWNLOAD','Fitxero bat bidali');
define('_DOWNLOADSMAIN','Deskargak atalaren aurkibidea');
define('_DOWNLOADCOMMENTS','Comentarios de la descarga');
define('_DOWNLOADSMAINCAT','Deskargak atal nagusia');
define('_ADDADOWNLOAD','Fitxero bat bidali');
define('_DSUBMITONCE','Sisteman dagoen artxiborik ez bidali berriz.');
define('_DPOSTPENDING','Bidaltzen diren artxibo guztiak egiaztatu egiten dira.');
define('_RESSORTED','Errekurtsoak honegatik ordenatu:');
define('_DOWNLOADSNOTUSER1','Sisteman erregistratu gabe zaude edo saiorik ez duzu hasi.');
define('_DOWNLOADSNOTUSER2','Erregistratuta egon ezkero, aukeran zenuke deskargak gehitzea sistema honetan.');
define('_DOWNLOADSNOTUSER3','Sistema-kide erregistratua izatea azkar eta erraz lortzen da.');
define('_DOWNLOADSNOTUSER4','Zergatik erregistratu behar eduki batzuetara sartzeko?');
define('_DOWNLOADSNOTUSER5','Sistemako parte izan ezkero, seguro animatzen zarela zerbaiten laguntzera,');
define('_DOWNLOADSNOTUSER6','eta gainera aukera izango duzu atal berri bat sortzeko edo dinamizatzeko.');
define('_DOWNLOADSNOTUSER7','Horrela, agertzen den informazioa gaurkotua eta ahalik eta zabalena izatea lortuko dugu.');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink("Your_Account").'">Erregistratu</a>');
define('_DOWNLOADALREADYEXT','ERROREA: URL hau iadanik badago gure datubasean!');
define('_DOWNLOADNOTITLE','ERROREA: URLari Tituloa ipini behar diozu!');
define('_DOWNLOADNOURL','ERROREA: Horra Lotura erabilgarria, URLa ez baduzu idazten!');
define('_DOWNLOADNODESC','ERROREA: URLak azalpen bat izan behar du!');
define('_DOWNLOADRECEIVED','Zure bidalketa jaso da. Eskerrikasko!');
define('_NEWDOWNLOADS','Deskarga berri');
define('_TOTALNEWDOWNLOADS','Lotura berriak guztira,');
define('_DTOTALFORLAST','Deskarga berriak beherago');
define('_DBESTRATED','Ondoen baloratutako deskargak - Top');
define('_TRATEDDOWNLOADS','Baloratutako deskargak guztira');
define('_SORTDOWNLOADSBY','Loturak ordenatu kontutan izanda');
define('_DCATNEWTODAY','Gaur atal honetara gehitu diren Deskarga berriak');
define('_DCATLAST3DAYS','Azken 3 egunetan atal honetara gehitu diren Deskarga berriak');
define('_DCATTHISWEEK','Aste honetan atal honetara gehitu diren Deskarga berriak');
define('_DDATE1','Data (lehenengo deskarga zarrenak)');
define('_DDATE2','Data (lehenengo deskarga berrienak)');
define('_DOWNLOADS','Deskargak');
define('_DOWNLOADPROFILE','Deskarga Profila');
define('_DOWNLOADRATINGDET','Deskargaren balorazio zehaztasunak');
define('_EDITTHISDOWNLOAD','Deskarga hau editatu');
define('_DOWNLOADRATING','Deskargaren balorazioa');
define('_DOWNLOADVOTE','Bozkatu!');
define('_DONLYREGUSERSMODIFY','Only registered users can suggest downloads modifications. Please <a href="'.getlink("Your_Account").'">register or login</a>.');
define('_REQUESTDOWNLOADMOD','Deskargaren aldaketa eskatu');
define('_DOWNLOADID','Deskargaren IDa (identifikazio zenbakia)');
define('_DLETSDECIDE','Ematen duzun informazioa, lagungarria izango da deskargatu behar duenak erabaki hori hartzeko.');
define('_DRATENOTE4','Gehien baloratuta dauden deskargen zerrenda bat <a href="'.getlink("Downloads&amp;d_op=TopRated").'">ikusi</a> dezakezu.');
define('_POPULAR','Popularrenak');
define('_TOPRATED','Gehien baloratuak');
define('_ADDITIONALDET','Xehetasun gehiago');
define('_EDITORREVIEW','Editorearen Berrikuspena');
define('_REPORTBROKEN','Informatu funzionatzen ez duen Lotura bateri buruz');
define('_AND','eta');
define('_INDB','daude gure datubasean');
define('_INSTRUCTIONS','Instrukzioak');
define('_USERANDIP','Zure Izena eta IP-a gorde giten dira, zure esku dago bidalketa lagungarria izatea');
define('_LDESCRIPTION','Azalpena (Gehien 255 hizki):');
define('_CHECKFORIT','Ez duzu idatzi Emaila. Dana dalako, bidalitako Lotura laister baieztatuko dugu');
define('_LASTWEEK','Azkenengo astean:');
define('_LAST30DAYS','Azkenengo 30 egunetan:');
define('_1WEEK','Aste honetan:');
define('_2WEEKS','Bi astetan:');
define('_30DAYS','30 egunetan:');
define('_ADDEDON','Gehitutakoa egun honetan:');
define('_RATING','Balorazioa');
define('_DETAILS','Zehaztasunak');
define('_OF','zenbatetik');
define('_TVOTESREQ','gutxienez behar diren botoak');
define('_SHOWTOP','Top-a erakutsi');
define('_MOSTPOPULAR','Aukeratuena - Top-a');
define('_OFALL','denetik');
define('_POPULARITY','Popularitatea');
define('_SELECTPAGE','Orria aukeratu');
define('_MAIN','Nagusia');
define('_NEWTODAY','Berria gaur');
define('_NEWLAST3DAYS','Berria azkenengo hiru egunetan');
define('_NEWTHISWEEK','Berria aste honetan');
define('_POPULARITY1','Popularitatea (gutxien aukeratuenetik gehienera)');
define('_POPULARITY2','Popularitatea (gehien aukeratuenetik gutxienera)');
define('_TITLEAZ','Tituloa (A - Z)');
define('_TITLEZA','Tituloa (Z - A)');
define('_RATING1','Balorazioa (gutxienetik gehienera)');
define('_RATING2','Balorazioa (gehienetik gutxienera)');
define('_SEARCHRESULTS4','Bilatu emaitzak kontutan izanda:');
define('_USUBCATEGORIES','Azpikategori');
define('_TRY2SEARCH','Ahalegindu bilatzen');
define('_INOTHERSENGINES','beste Bilatzaile Sistema batzuetan');
define('_EDITORIAL','Editoriala');
define('_EDITORIALBY','Editoriala kontutan izanda');
define('_NOEDITORIAL','Editoriala ez dago erabilgarri Sistema honetan.');
define('_RATETHISSITE','Web Toki hau baloratu');
define('_ISTHISYOURSITE','Hau da zure errekurtsoa');
define('_ALLOWTORATE','Utzi Sistema-kideek baloratu dezazuten zure Web tokitik');
define('_OVERALLRATING','Balorazio Orokorra');
define('_TOTALOF','Guztira');
define('_USER','Sistema-kide');
define('_USERAVGRATING','Sistema-kideek egin duten balorazioaren batez bestekoa');
define('_NUMRATINGS','Balorazioak guztira');
define('_REGISTEREDUSERS','Sistema-kideak guztira (erregistratuak sisteman)');
define('_NUMBEROFRATINGS','Balorazioak guztira');
define('_NOREGUSERSVOTES','Ez dago Sistema-kidea den inoren botorik');
define('_BREAKDOWNBYVAL','Balorazioko Histograma');
define('_LTOTALVOTES','botoak guztira');
define('_HIGHRATING','Balorazio haundia');
define('_LOWRATING','Balorazio txikia');
define('_NUMOFCOMMENTS','Komentarioak guztira');
define('_WEIGHNOTE','* Oharra: Web Toki honek desberdindu egiten ditu Sistema-kideek direnen edo ez direnen botoak');
define('_NOUNREGUSERSVOTES','Ez dago erregistratu gabekoen botorik');
define('_WEIGHOUTNOTE','** Oharra: Web Toki honek desberdindu egiten ditu Sistema-kideek direnen edo ez direnen botoak');
define('_NOOUTSIDEVOTES','Sistema-kideen botoak');
define('_OUTSIDEVOTERS','Sistema-kideak ez direnen (anonymous deritzonak) botoak');
define('_UNREGISTEREDUSERS','Erregistratu gabeko erabiltzaileak');
define('_PROMOTEYOURSITE','Zure Web Tokia sustatu');
define('_PROMOTE01','Agian erabili nahi izango dituzu \'Beste toki batzuen balorazioa\' erabiliz ditugun aukerak. Hauekin posible izango duzu irudi bat edo bozketetarako formulario bat zure botoak gehitzeko. Aukeratu bat:');
define('_TEXTLINK','Loturaren testua');
define('_PROMOTE02','Formularioarekin Lotura egiteko era erraz bat, testu hau erabiltzea da:');
define('_HTMLCODE1','Erabili dezakezun HTML kodea hau da:');
define('_THENUMBER','Zenbakia');
define('_IDREFER','erreferiantzako HTML kodean $sitename -ko datubasean daukazun ID-a dago. Ziurtatu zenbaki hau kode horretan dagoela.');
define('_BUTTONLINK','Lotura botoia');
define('_PROMOTE03','Lotura arrunta bat izatea nahi ez baduzu, aukeratu dezakezu boti txiki bat erabiltzea.');
define('_RATEIT','Baloratu Toki hau');
define('_HTMLCODE2','Aurreko botoiaren HTML kodea hau da:');
define('_REMOTEFORM','Urruneko balorazio formularioa');
define('_PROMOTE04','Tranparik egiten baduzu, zure Lotura kendu egingo dugu. Balorazio formularioa honela agertuko da:');
define('_VOTE4THISSITE','Toki honeri bozkatu');
define('_HTMLCODE3','Formulario hau erabiliz, erabiltzaileek zure Tokia baloratu dezakete zure Sisteman eta emaitzak hemen gorde. Aurreko formularioa desaktibatuta dago, baina kode honek funzionatuko du zure tokian orrialde batetan jartzen baduzu. su pÃ¡gina. Hau da kodea:');
define('_PROMOTE05','Eskerrikasko! eta sorte on zure balorazioarekin.');
define('_THANKSBROKEN','Eskerrikasko zure laguntzagatik.');
define('_SECURITYBROKEN','Segurtasun neurriak direla eta, zure izena eta IP helbidea gorde egingo dira.');
define('_THANKSFORINFO','Eskerrikasko informazioagatik.');
define('_LOOKTOREQUEST','Zure eskaera laister aztertuko dugu.');
define('_SENDREQUEST','Eskaera bidali');
define('_THANKSTOTAKETIME','Eskerrikasko zure denboragatik aztertzen');
define('_RETURNTO','Bueltatu hona:');
define('_RATENOTE1','Mesedez, ez bozkatu behin baino gehiagotan Lotura berdinari');
define('_RATENOTE2','Aukerak 1etik 10era doiaz, 1 oso txarra eta 10 bikaina izanik.');
define('_RATENOTE3','Objetiboa izan zure botoan, beti 1 edo 10 jasotzea ez da izango ezanguratsua.');
define('_RATENOTE5','Ez bozkatu zure Errekurtso bateri edo zure kontrako batenari.');
define('_YOUAREREGGED','Sistema-kidea zara eta konektatuta zaude.');
define('_FEELFREE2ADD','Bidali komentario bat Toki honetaz nahi baduzu.');
define('_YOUARENOTREGGED','Ez zara Sistema-kidea edo ez zaude konektatuta.');
define('_IFYOUWEREREG','Erregistratuta egon ezkero, aukera izango zenuke komentarioak bidaltzeko.');
define('_MODIFY','Aldatu');
define('_COMPLETEVOTE1','Zure botoa eskertzen dugu.');
define('_COMPLETEVOTE2','Azken $anonwaitdays egunetan botatu duzu errekurtso honegatik!');
define('_COMPLETEVOTE3','Mesedez, ez bozkatu behin baino gehiagotan errekurtso berdinari');
define('_COMPLETEVOTE4','Ezin duzu bozkatu zuk bidalitako errekurtso bati.<br>Boto guztiak erregistratuak izaten dira.');
define('_COMPLETEVOTE5','Puntuaziorik aukeratu gabe - ez da markatu botorik');
define('_COMPLETEVOTE6','IP helbideko eta $outsidewaitdays egunen barruan boto bat onartzen da bakarrik');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDDURL','Add this URL');
define('_EZTRANSFERDOWNLOAD','Transfer');
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
