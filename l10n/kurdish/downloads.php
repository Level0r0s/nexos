<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/kurdish/downloads.php,v $
  $Revision: 9.7 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:56 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','The download you\'ve requested doesn\'t exists.');
define('_CATEGORIES','Kategorîyan');
define('_LVOTES','Deng');
define('_TOTALVOTES','Deng Giştî:');
define('_THEREARE','');
define('_NOMATCHES','Encamek nehat dîtin');
define('_SCOMMENTS','şîrove');
define('_UNKNOWN','nezan');
define('_AUTHORNAME','Navê Nivîskar');
define('_AUTHOREMAIL','E-maila Nivîskar');
define('_DOWNLOADNAME','Navê Programê');
define('_ADDTHISFILE','Programek pêvebike');
define('_INBYTES','byte');
//define('_FILESIZE','Mezinahî');
//define('_VERSION','Version');
//define('_AUTHOR','Nivîskar');
define('_HOMEPAGE','Sermalper');
define('_DOWNLOADNOW','Programê dakişîne!');
define('_RATERESOURCE','Pûan bide');
define('_FILEURL','Grêdanka Programê');
define('_ADDDOWNLOAD','Programek pêvebike');
define('_DOWNLOADSMAIN','Serrûpela Dakişandinê');
define('_DOWNLOADCOMMENTS','Dîtinên li ser programê');
define('_DOWNLOADSMAINCAT','Kategorîyên Programan');
define('_ADDADOWNLOAD','Programek teze pêvebike');
define('_DSUBMITONCE','Programek tenê carek pêvebike.');
define('_DPOSTPENDING','Programên, tu bo me dişîne, ewil gerek ji Birêvebir bêne serbestkirin/qebulkirin.');
define('_RESSORTED','Rêzkirina Niha');
define('_DOWNLOADSNOTUSER1','Tu qeytkirî nîn î yan jî tu têneketî.');
define('_DOWNLOADSNOTUSER2','Eger tu qeydkirî be, tu dikarî grêdana programek pêvebike.');
define('_DOWNLOADSNOTUSER3','Bikarhênerek xeydkirîbûn bi rêyek kin û asan dibe.');
define('_DOWNLOADSNOTUSER4','Boçi, ji bo hinek taybetîyan qeydkirin lazim e?');
define('_DOWNLOADSNOTUSER5','Çimkî, em dixwazin naverokek bilind û hêja bo we avabikin,');
define('_DOWNLOADSNOTUSER6','her pêvedanek ewil ji birêvebirê me tê berçavkirin û rast be, ew tê qebulkirin.');
define('_DOWNLOADSNOTUSER7','em dixwazin bo we tenê naverokên granbiha pêşkêş bikin.');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink("Your_Account").'">Bikarhêner Teze</a>');
define('_DOWNLOADALREADYEXT','ÇEWT: Ev URL-grêdank berê hatibû pêvekirin!');
define('_DOWNLOADNOTITLE','ÇEWT: Bo URL-Grêdank sernivîsarek binivîsin!');
define('_DOWNLOADNOURL','ÇEWT: Bo URL-Grêdank navnîşanek binivîsin!');
define('_DOWNLOADNODESC','ÇEWT: Bo UR-Grêdank nasînek binivîsin!');
define('_DOWNLOADRECEIVED','Me pêşnîyaza we bidestxist. Sipasî bo we.... Emê lê binêrin!');
define('_NEWDOWNLOADS','Programên Teze');
define('_TOTALNEWDOWNLOADS','Giştî programên teze me bidestxistine');
define('_DTOTALFORLAST','Giştî Programên Teze:');
define('_DBESTRATED','Programên Granbiha - Baştir - Top');
define('_TRATEDDOWNLOADS','giştî programên pûankirî');
define('_SORTDOWNLOADSBY','Programan birêzbike:');
define('_DCATNEWTODAY','Programên iro hatine pêvegrêdan');
define('_DCATLAST3DAYS','Programên sê rojên dawî hatine pêvegrêdan');
define('_DCATTHISWEEK','Programên vê heftê hatine pêvegrêdan');
define('_DDATE1','Wext (Yên teze li pêşî)');
define('_DDATE2','Tarih (Yên kevn li paşî)');
define('_DOWNLOADS','Dakişandin');
define('_DOWNLOADPROFILE','Profîla Programê');
define('_DOWNLOADRATINGDET','Zêdetir agahdarî li ser pûandana programan');
define('_EDITTHISDOWNLOAD','Program birêzbike');
define('_DOWNLOADRATING','Pûanên Programê');
define('_DOWNLOADVOTE','Deng bide!');
define('_DONLYREGUSERSMODIFY','Only registered users can suggest downloads modifications. Please <a href="'.getlink("Your_Account").'">register or login</a>.');
define('_REQUESTDOWNLOADMOD','Daxwaza guhertinê ji bo programê');
define('_DOWNLOADID','Program');
define('_DLETSDECIDE','Programên ji destê Te hatine, ewê bo bikarhênerên din bibe xweşîyek û ew bikaribin ji xwe ra dakivîne.');
define('_DRATENOTE4','<a href="'.getlink("Downloads&amp;d_op=TopRated").'">Lîsteya Çavkanîyên Baştir</a> tu dikarî bibinî.');
define('_POPULAR','Nasdar');
define('_TOPRATED','Baştirîn');
define('_ADDITIONALDET','Zêdetir..');
define('_EDITORREVIEW','Bo Birêvebir');
define('_REPORTBROKEN','Grêdanek şkestî bide zanîn');
define('_AND','û');
define('_INDB','hene');
define('_INSTRUCTIONS','Ravakirin');
define('_USERANDIP','Navê bikarhêner û nimreya IP tê qeydkirin. Tika ye, tiştên xerab nenivîsin, em we derdixin.');
define('_LDESCRIPTION','Nasîn: (Zêdetir 255 nîşan, tîp)');
define('_CHECKFORIT','We e-mail navnîşan nenivîsand. Lê emê dîsa jî li grêdana programa we binêrin.');
define('_LASTWEEK','Hefta Bihurî');
define('_LAST30DAYS','30 Rojên li Dawî');
define('_1WEEK','1 Hefte');
define('_2WEEKS','2 Hefte');
define('_30DAYS','30 Roj');
define('_ADDEDON','Pêvedanîn');
define('_RATING','Pûan');
define('_DETAILS','zêdetir');
define('_OF','Girtî');
define('_TVOTESREQ','kêmtir deng lazim e');
define('_SHOWTOP','Baştirîn');
define('_MOSTPOPULAR','Nastirîn - Top');
define('_OFALL','Giştî Girtî');
define('_POPULARITY','Nastir');
define('_SELECTPAGE','Rûpel Hilbijêre');
define('_MAIN','Ser Mal');
define('_NEWTODAY','Îro');
define('_NEWLAST3DAYS','3 Rojên Dawî');
define('_NEWTHISWEEK','Vê Heftê');
define('_POPULARITY1','Nastir (Ji nîzmtir ber bi bilintir)');
define('_POPULARITY2','Nastir (Ji bilintir ber bi nîzmtir)');
define('_TITLEAZ','Mijar (A - Z)');
define('_TITLEZA','Mijar (Z - A)');
define('_RATING1','Pûan (Ji jêr ber bi jor)');
define('_RATING2','Pûan (Ji jor ber bi jêr)');
define('_SEARCHRESULTS4','Encama Lêgerînê:');
define('_USUBCATEGORIES','Jêr-Kategorî');
define('_TRY2SEARCH','Hewl dide bo lêgerîn');
define('_INOTHERSENGINES','lêgerînên din bikarbîne');
define('_EDITORIAL','Bo Edîtor');
define('_EDITORIALBY','Bo Edîtor:');
define('_NOEDITORIAL','Bo vê sîteyê niha edîtor tune.');
define('_RATETHISSITE','Pûan bide bo vê programê');
define('_ISTHISYOURSITE','Ev programa te ye?');
define('_ALLOWTORATE','Rê bide bo bikarhênerên din jî, ew jî bikaribin dengê xwe bidin!');
define('_OVERALLRATING','Pûan');
define('_TOTALOF','Giştî');
define('_USER','Bikarhêner');
define('_USERAVGRATING','Pûan ji Sedîsed');
define('_NUMRATINGS','Hêjmara Pûanan');
define('_REGISTEREDUSERS','Bikarhênerên Qeydkirî');
define('_NUMBEROFRATINGS','Hêjmara Pûanan');
define('_NOREGUSERSVOTES','Dengê bikarhênerên qeydkirî hîn tune');
define('_BREAKDOWNBYVAL','Deng');
define('_LTOTALVOTES','Deng Giştî');
define('_HIGHRATING','Pûanê Bilind');
define('_LOWRATING','Pûanê Nîzm');
define('_NUMOFCOMMENTS','Hêjmara Nirxandinan');
define('_WEIGHNOTE','* Têbinî: Ev çavkanî li ser qeydkirin û yên qeytkirî ne');
define('_NOUNREGUSERSVOTES','Dengê neqeytkirîyan nabe');
define('_WEIGHOUTNOTE','* Têbinî: Ev çavkanî li ser dengdanên qeydkirîyan û derve ne');
define('_NOOUTSIDEVOTES','Ji derva deng tune');
define('_OUTSIDEVOTERS','Yên ji derva dengê xwe dane');
define('_UNREGISTEREDUSERS','Bikarhênerên neqeydkirî');
define('_PROMOTEYOURSITE','Malpera xwe bide nasîn');
define('_PROMOTE01','Belkî \'Pûan bide bo programê\' bala te vê vebijarka me kişand. Vana dikarin pûanên we zêde bikin. Kerema xwe ji jêr tiştek hilbijêre:');
define('_TEXTLINK','Grêdana Nivîsarê');
define('_PROMOTE02','Bo gihîştina pûankirina forumê rêyek asan jî rêya grêdanka nivîsarê ye:');
define('_HTMLCODE1','Di vê rewşê da kodên ko bo HTML pêwist e, li jêr in:');
define('_THENUMBER','Hêjmar');
define('_IDREFER','IP-nimreya we di nav $sitename HTML-ê da heye . Tu bi rastiya nimreyê bawer î?.');
define('_BUTTONLINK','Buton Grêdank');
define('_PROMOTE03','Tu dikarî vê kodê li cîhek din li ser mapera xwe bicîhbike û em dîsa dikarin wan dengên li ser malpera we bijmêrin bo pirsîna xwe, li vir kodê kopî bike:');
define('_RATEIT','Pûanek bide bo vê programê!');
define('_HTMLCODE2','Bo dîtina HTML-ê li jor vê kodê bikarbîne:');
define('_REMOTEFORM','Ji dûr ve kodê pûankirinê bo malpera we:');
define('_PROMOTE04','Eger tu fen û fîskek bikî, em grêdanka te jêdibin. Kodê pûankirinê ji dûr ve wîha dixuye.');
define('_VOTE4THISSITE','Dengê xwe bide bo vê programê!');
define('_HTMLCODE3','Bikarhêner û serdanêr dikarin vê formê bikarbînin û ji dûr ve  di malperek xerîb de dikarin dengê xwe bidin. Forma lijor neaktîv e, lê eger tu kodên li jêr bike nav malpera xwe, ewê bixebite:');
define('_PROMOTE05','Sipasî! û di pûankirinê da serkeftin!');
define('_THANKSBROKEN','Sipasî bo te, te grêdanka şkestî bi me da zanîn.');
define('_SECURITYBROKEN','Bo ewlekarî, navê te û minreya IP a te bo demekî tê qeydkirin.');
define('_THANKSFORINFO','Bo agahîyan spasî.');
define('_LOOKTOREQUEST','Daxwaza we di nav demek nêzîk de tê berçavkirin û lêkolandin.');
define('_SENDREQUEST','Daxwazek bişîne');
define('_THANKSTOTAKETIME','Spasî bo te, te bo vê programê pûana xwe da:');
define('_RETURNTO','Vegere:');
define('_RATENOTE1','Ji kerema xwe, ji carek zêdetir dengê xwe nedene.');
define('_RATENOTE2','Granbihabûn di nav  1 - 10 , 1 xerab e û  10 jî baş e.');
define('_RATENOTE3','Tika ye, objektîv bibin, ne tenê yek û deh ( 1-10) hilbijêrin, bo encamek zelal divêt, hêjmarên din jî bistînin.');
define('_RATENOTE5','Bo programa xwe deng nedin.');
define('_YOUAREREGGED','Tu bikarhênerek qeydkirî yî û tu têketî yî.');
define('_FEELFREE2ADD','Tu dikarî li ser vê grêdankê binivîsî.');
define('_YOUARENOTREGGED','Tu ne qeydkirî yî, yan jî tu bi şîfreya xwe têneketî.');
define('_IFYOUWEREREG','Eger tu qeydkirî be, tu dikarî li ser vê programê nirxandina xwe binivîse.');
define('_MODIFY','Biguherîne');
define('_COMPLETEVOTE1','Dengê te hat qebulkirin.');
define('_COMPLETEVOTE2','Jixwe te $anonwaitdays rojan da carek dengê xwe dabû.');
define('_COMPLETEVOTE3','Tenê carek dengê xwe bidin.<br>Deng giştî têne qeydkirin û lêkolandin.');
define('_COMPLETEVOTE4','Tu nikarî bo lînkek, ko, ji te hatî qeydkirin, deng bide.<br>Deng giştî têne qeydkirin û lêkolandin.');
define('_COMPLETEVOTE5','Pûan nehatî hilbijartin - deng neda');
define('_COMPLETEVOTE6','Her navnîşana IP-ê $outsidewaitdays dikare carek serê rojê da deng bide.');

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
