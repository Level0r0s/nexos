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
  $Source: /cvs/languages/uighur/modules/Web_Links/language/lang-uighur.php,v $
  $Revision: 1.2 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:47 $
***********************************************************************/
if (!defined('CPG_NUKE')) { die('You do not have permission to access this file'); }  
  
global $sitename, $anonwaitdays, $outsidewaitdays;
define('_PREVIOUS','Aldinqi Bet');
define('_NEXT','Kéyinki Bet');
define('_YOURNAME','Namingiz');
define('_CATEGORIES','Katégoriyeler');
define('_LVOTES','awaz');
define('_TOTALVOTES','Jem\'iy Awaz:');
define('_LINKTITLE','Ulanma Mawzusi');
define('_HITS','Chékilishler');
define('_THEREARE','Bu yerde');
define('_NOMATCHES','shertingizge uyghun ulanma tépilmidi');
define('_SCOMMENTS','Pikirler');
define('_ADDLINK','Ulanma Qoshush');
define('_POPULAR','Ammabap');
define('_TOPRATED','Yuqiri Bahalan\'ghan');
define('_RANDOM','Random');
define('_LINKSMAIN','Ulanma Bash Sehipisi');
define('_LINKCOMMENTS','Ulanma Pikirliri');
define('_ADDITIONALDET','Qoshumche Détallar');
define('_EDITORREVIEW','Tehrir Obzori');
define('_REPORTBROKEN','Üzülgen Ulanma Dokilati');
define('_LINKSMAINCAT','Ulanma Bash Katégoriyeliri');
define('_AND','we');
define('_INDB','sanliq ambirimizda');
define('_ADDALINK','Yéngi ulanma qoshush');
define('_INSTRUCTIONS','Körsetmiler');
define('_SUBMITONCE','Bir ulanma peqet birla qétim yollinidu.');
define('_POSTPENDING','Öchrettiki barliq ulanmilar.');
define('_USERANDIP',' Qollanchi nami we IP adrési xatérlendi, bu sistémini qalaymiqan ishletmeng.');
define('_PAGETITLE','Bet Mawzusi');
define('_PAGEURL','Bet URL Adrési');
define('_YOUREMAIL','E-mail Adrésingiz');
define('_LDESCRIPTION','Chüshendürüsh: (maksimum 255 herp)');
define('_ADDURL','Bu URL ni qoshush');
define('_LINKSNOTUSER1','Siz tizimlatqan qollanchi emes yaki tizimlitip kirmidingiz.');
define('_LINKSNOTUSER2','Eger siz tizimlatsingiz, andin bu betke yük qoshalaysiz.');
define('_LINKSNOTUSER3','Tizimlatqan qollanchi bolush téz hem asan bir ish.');
define('_LINKSNOTUSER4','Nimishke bezi iqtidarlar üchün tizimlitish kérek?');
define('_LINKSNOTUSER5','Chünki yuqiri süpetlik mezmunlar bilen teminlesh üchün,');
define('_LINKSNOTUSER6','herbir höjjet bashqurghuchi teripidin qarap chiqilidu we tekshürilidu.');
define('_LINKSNOTUSER7','Sizning qimmiti bar uchurlar bilen teminlishingizni ümid qilimiz.');
define('_LINKSNOTUSER8','<a href="modules.php?name=Your_Account"> Yéngi Hésab</a>');
define('_LINKALREADYEXT','Xataliq: Bu URL sanliqambarda allaqachan mewjut!');
define('_LINKNOTITLE','Xataliq: URL üchün mawzu kirgüzüng!');
define('_LINKNOURL','Xataliq: URL üchün bir URL adrési kirgüzüng!');
define('_LINKNODESC','Xataliq: URL üchün bir chüshendürüsh kirgüzüng!');
define('_LINKRECEIVED','Biz sizning höjjitingizni tapshurup alduq. Teshekkürler!');
define('_EMAILWHENADD','Tekshürüshtin ötkendin kéyin e-mail tapshuriwalisiz.');
define('_CHECKFORIT','E-mail adrési yazmapsiz, biraq biz yollighan höjjitingizni pat arida tekshürüp chiqimiz.');
define('_NEWLINKS','Yéngi Ulanma');
define('_TOTALNEWLINKS','Toplam Yéngi Ulanmilar');
define('_LASTWEEK','Ötken Hepte');
define('_LAST30DAYS','Aldinqi 30 Kün');
define('_1WEEK','1 Hepte');
define('_2WEEKS','2 Hepte');
define('_30DAYS','30 Kün');
define('_TOTALFORLAST','Toplam yéngi ulanma:');
define('_ADDEDON','Qoshuldi:');
define('_RATING','Baha');
define('_RATESITE','Bu betni bahalash');
define('_DETAILS','Détallar');
define('_BESTRATED','Yuqiri bahalan\'ghan ulanma - Aldinqi');
define('_OF','');
define('_TRATEDLINKS','Omumiy bahalan\'ghan ulanmilar');
define('_TVOTESREQ','minimum awaz zörür');
define('_SHOWTOP','Eng Yéngi');
define('_MOSTPOPULAR','Eng Ammiwiy - Aldinqi');
define('_OFALL','');
define('_SORTLINKSBY','Ulanma Sortlash:');
define('_SITESSORTED','Betning hazirqi tertipi:');
define('_POPULARITY','Ammibapliqi');
define('_SELECTPAGE','Bet Tallash');
define('_MAIN','Bash Sehipe');
define('_NEWTODAY','Bügünki Yéngi');
define('_NEWLAST3DAYS','Ötken 3 künki yéngi');
define('_NEWTHISWEEK','Bu heptidiki yéngi');
define('_CATNEWTODAY','New Links in this Category Added Today');
define('_CATLAST3DAYS','New Links in this Category Added in the last 3 days');
define('_CATTHISWEEK','New Links in this Category Added this week');
define('_POPULARITY1','Ammibapliqi (Qétimi Artma)');
define('_POPULARITY2','Ammibapliqi (Qétimi Azaytma)');
define('_TITLEAZ','Mawzu (A din Z)');
define('_TITLEZA','Mawzu (Z din A)');
define('_DATE1','Date (Old Links Listed First)');
define('_DATE2','Date (New Links Listed First)');
define('_RATING1','Nomur (Töwendin yuqirigha)');
define('_RATING2','Nomur (Yuqiridin töwenge)');
define('_SEARCHRESULTS4','Izdesh Netijisi:');
define('_USUBCATEGORIES','Subkatégoriye');
define('_LINKS','Ulanmilar');
define('_TRY2SEARCH','Izdeshni sinash');
define('_INOTHERSENGINES','bashqa izdesh motorliri');
define('_EDITORIAL','Bashmaqale');
define('_LINKPROFILE','Ulanma Profili');
define('_EDITORIALBY','Bashmaqale:');
define('_NOEDITORIAL','Hazirche bu Torbette bashmaqale yoq.');
define('_VISITTHISSITE','Bu Torbetni ziyaret qilish');
define('_RATETHISSITE','Bu betke baha bérish');
define('_ISTHISYOURSITE','Bu sizning bétingizmu?');
define('_ALLOWTORATE',' Bashqa qollanchilarning bétingizde baha bérishige ijazetmu!');
define('_LINKRATINGDET','Nomur Bérish Détalliri');
define('_OVERALLRATING','Omumiy Baha');
define('_TOTALOF','Jem\'iy:');
define('_USER','Qollanchi');
define('_USERAVGRATING','Otturche Baha');
define('_NUMRATINGS','Baha Qétimi');
define('_EDITTHISLINK','Bu ulanmini tehrirlesh');
define('_REGISTEREDUSERS','Tizimlatqan Qollanchi');
define('_NUMBEROFRATINGS','Baha Sani');
define('_NOREGUSERSVOTES','Tizmlatmighan qollanchi awazi ');
define('_BREAKDOWNBYVAL','Buzulghan Awaz');
define('_LTOTALVOTES','Omumiy Awaz');
define('_LINKRATING','Ulanma Nomuri');
define('_HIGHRATING','Yuqiri Nomur');
define('_LOWRATING','Töwen Nomur');
define('_NUMOFCOMMENTS','Pikir Sani');
define('_WEIGHNOTE','* Diqqet: Peqet tizimlatqan qollanchila baha béreleydu.');
define('_NOUNREGUSERSVOTES','Tizimlatmighan qollanchi awaz bérelmeydu ');
define('_WEIGHOUTNOTE','* Diqqet: Peqet tizimlatqan qollanchila baha béreleydu.');
define('_NOOUTSIDEVOTES','Sirttin awazlar yoq');
define('_OUTSIDEVOTERS','Sirttin awazlar');
define('_UNREGISTEREDUSERS','Tizimlatmighan qollanchilar');
define('_PROMOTEYOURSITE','Tor bétingizni teshwiq qiling ');
define('_PROMOTE01','Belkim siz, biz teminligen \'Bétimni Bahalang\' dégen tallashqa qiziqidighansiz. Bu sizning bu yerdin baha sanigha érishishingiz üchün  bir resim (hetta bir jedwel)ni bétingzge orunlashturush ijazet bérilgen. Töwende bérilgen shekildin bétingizge muwapiq bolghinidin birni tallang:');
define('_TEXTLINK','Tékst Ulanmisi');
define('_PROMOTE02','Bir xil addiy bolghan tékst ulanmisi arqiliq bahalash shekli:');
define('_HTMLCODE1','HTML kodi ishletsingiz bolidu, u töwendikiche:');
define('_THENUMBER','Sani');
define('_IDREFER','HTML diki orni bolup, $sitename bettiki sanliqambarning ID nomuri. Bu nomurning mas kélidighanliqini jezimleng.');
define('_BUTTONLINK','Kunupka Ulanmisi');
define('_PROMOTE03','Tékst ulanmisidn bashqa kichik kunupka raqiliqmu ulunush qilsingiz bolidu:');
define('_RATEIT','Bu betni bahalang!');
define('_HTMLCODE2','Bu kunupkining esli kodi:');
define('_REMOTEFORM','Baha bérishni éliwétish');
define('_PROMOTE04','Eger xilapliq qilsingiz, ulanmingizni éliwétimiz. Bular hazirche éliwétilgen ulanmilar.');
define('_VOTE4THISSITE','Bu betke awaz béring!');
define('_LINKVOTE','Vote!');
define('_HTMLCODE3','Bu jedwel arqiliq ziyaretchiliringiz bétingizdin biwasite awaz béreleydu hem bu awazlar bizning sanliqambirimizda saqlinidu. Töwendiki esli kodni bétingizge chaplisingizla bolidu. HTML Kodi töwendikiche:');
define('_PROMOTE05','Teshekkürler! Ulanmiliringzge utuqlar tileymiz!');
define('_THANKSBROKEN','Bu munderijini asrashqa yerdem qilghiningiz üchün rehmet.');
define('_THANKSFORINFO','Uchurlar üchün teshekkürler.');
define('_LOOKTOREQUEST','Bu teklipni bat arida birterep qilimz.');
define('_ONLYREGUSERSMODIFY','Peqet tizimlatqan qollanchila özgertish teklipi béreleydu. <a href="modules.php?name=Your_Account">Awwal tizimliting yaki kiring </a>.');
define('_REQUESTLINKMOD','Ulanma Özgertish Iltimasi');
define('_LINKID','Ulanma ID');
define('_SENDREQUEST','Iltimas Yollash');
define('_THANKSTOTAKETIME','Bu betke baha bérishke ketken waqtingiz üchün teshekkür éytimiz.');
define('_LETSDECIDE','Bashqilarning qaysi yüklerni chékishini belgilishige yardem qilish üchün uchurlarni kirgüzüng.');
define('_RETURNTO','Qaytish:');
define('_RATENOTE1','Oxshash bir menbege tekrar awaz bermeng.');
define('_RATENOTE2','Shikalidiki san 1  10 bolup, 1 nacharni, 10 eng yaxshini ipadileydu.');
define('_RATENOTE3','Obyéktip halda awaz béring, hemme adem 1 yaki 10 nila berse, bu anche qollunushluq emes.');
define('_RATENOTE4','Bu yerdin siz <a href="modules.php?name=Downloads&amp;d_op=TopRated">Eng yuquri nomurluq ulanmilar </a> tizimini köreleysiz.');
define('_RATENOTE5','Özingizning yükige awaz bermeng.');
define('_YOUAREREGGED','Siz tizimlitip kirgen qollanchi.');
define('_FEELFREE2ADD','Bu bet heqqide baha béring.');
define('_YOUARENOTREGGED','Siz tizimlatqan qollanchi emes yaki téxi tizimlitip kirmidingiz.');
define('_IFYOUWEREREG','Eger siz tizimlatsingiz bu betke baha béreleysiz.');
define('_MODIFY','Özgertish');
define('_COMPLETEVOTE1','Awazingiz qollashqa irishti.');
define('_COMPLETEVOTE2','Aldinqi $anonwaitdays kün ichide siz bir awaz bérip boldingiz.');
define('_COMPLETEVOTE3','Awaz peqet birla qétim bérilidu.<br>Barliq awazlar tizmlandi we tékshürüldi.');
define('_COMPLETEVOTE4','Özingiz yollighan ualanma üchün awaz bérelmeysiz.<br>Barliq awazlar tizmlandi we tékshürüldi.');
define('_COMPLETEVOTE5','Nomur tallanmidi  awaz bérilmidi');
define('_COMPLETEVOTE6','Herbir IP adresi $outsidewaitdays kün ichide bir awazgha ijazet.');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDMAINCATEGORY','Bash Katégoriye Qoshush');
define('_ADDSUBCATEGORY','Tarmaq Katégoriye Qoshush');
define('_WEBLINKSADMIN','Ulanma Bashqurush');
define('_EZTRANSFERLINKS','Katégoriyedin barliq ulanmilarni yötkesh');
define('_CLEANLINKSDB','Ulanma raydiki awazlarni öchürüsh');
define('_EZTRANSFER','Yötkesh');
define('_BROKENLINKSREP','Üzülgen Ulanmilar Dokilatliri');
define('_LINKMODREQUEST','Ulanma Özgertish Iltimasliri');
define('_ADDNEWLINK','Yéngi Ulanma Qoshush');
define('_MODLINK','Ulanma Özgertish');
define('_LINKSINDB','Sanliqambargha Ulash');
define('_LINKSWAITINGVAL','Tekshürüshni kütiwatqan ulanma ');
define('_ERRORURLEXIST','Xata: Bu URL sanliqambarda ezeldin mewjut!');
define('_ERRORNOTITLE','Xata: URL üchün bir Mawzu zörürdur!');
define('_ERRORNOURL','Xata: URL üchün bir Isim kirgüzüsh zörürdur!');
define('_ERRORNODESCRIPTION','Xata: URL üchün bir Chüshendürüsh zörürdur!');
define('_NEWLINKADDED','Yéngi ulanma sanliqambargha qoshuldi');
define('_YOURLINKAT','Ulanmingiz:');
define('_LINKVALIDATION','Ulanma Tekshürüsh');
define('_CHECKALLLINKS','Barliq Ulanmilarni Tekshürüsh');
//define('_VALIDATELINKS','Validate Links');
//define('_FAILED','Failed!');
//define('_BEPATIENT','(please be patient)');
//define('_VALIDATINGCAT','Validating Category (and all subcategories)');
//define('_VALIDATINGSUBCAT','Validating Sub-Category');
?>