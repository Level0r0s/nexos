<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/korean/downloads.php,v $
  $Revision: 9.7 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:56 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','The download you\'ve requested doesn\'t exists.');
define('_CATEGORIES','카陋磁�');
define('_LVOTES','표');
define('_TOTALVOTES','체 표 : ');
define('_THEREARE','');
define('_NOMATCHES','퓻 쨈 講 求');
define('_SCOMMENTS','美트 ');
define('_UNKNOWN','腔 ');
define('_AUTHORNAME','蒡 見 ');
define('_AUTHOREMAIL','蒡  ');
define('_DOWNLOADNAME','米 ');
define('_ADDTHISFILE','米 확');
define('_INBYTES','byte');
//define('_FILESIZE','크 ');
//define('_VERSION',' ');
//define('_AUTHOR','蒡 ');
define('_HOMEPAGE','홈 ');
define('_DOWNLOADNOW',' 牟琯 檳');
define('_RATERESOURCE','歐');
define('_FILEURL',' 치 ');
define('_ADDDOWNLOAD','牟琯 煞');
define('_DOWNLOADSMAIN','牟琯 ');
define('_DOWNLOADCOMMENTS','牟琯 美트');
define('_DOWNLOADSMAINCAT','牟琯  카陋磁�');
define('_ADDADOWNLOAD','牟琯 煞');
define('_DSUBMITONCE','牟琯恙� 溝  米搔�  玲.');
define('_DPOSTPENDING','米    拷  絳求.');
define('_RESSORTED',' 캣 ');
define('_DOWNLOADSNOTUSER1','溝 회 틈構킬 慣 刻努求.');
define('_DOWNLOADSNOTUSER2',' 溝 회決첩 米搔� 煞絿  笭求.');
define('_DOWNLOADSNOTUSER3','회 풔   爛求.');
define('_DOWNLOADSNOTUSER4','錚� 琉 歐  회  却 耐?');
define('_DOWNLOADSNOTUSER5','怜    殮 都求,');
define('_DOWNLOADSNOTUSER6','  痢�    품 琯퓸求.');
define('_DOWNLOADSNOTUSER7','치獵  絿챰綬� 帽求.');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink("Your_Account").'">회</a>');
define('_DOWNLOADALREADYEXT',' :  URL 譴 故決 溝퓸 笭求!');
define('_DOWNLOADNOTITLE',' :  치 迦韜都求 !');
define('_DOWNLOADNOURL',' : 치 트玲年 迦 韜都求 !');
define('_DOWNLOADNODESC',' : 米炤�  靡  韜 玲 !');
define('_DOWNLOADRECEIVED','米 청   퓸求. 爛求!');
define('_NEWDOWNLOADS','킥鍍溝 牟琯');
define('_TOTALNEWDOWNLOADS','체 킥鍍 牟琯 ');
define('_DTOTALFORLAST','체 牟琯 ');
define('_DBESTRATED','斂 牟琯');
define('_TRATEDDOWNLOADS','total rated downloads');
define('_SORTDOWNLOADSBY','캣 ');
define('_DCATNEWTODAY',' 恝 牟琯弱� 煞퓸求.');
define('_DCATLAST3DAYS','3溝효 煞 牟琯弱� 笭求.');
define('_DCATTHISWEEK','譴翎 煞 牟琯弱� 笭求.');
define('_DDATE1','짜 (故)');
define('_DDATE2','짜 (恝故)');
define('_DOWNLOADS','牟琯');
define('_DOWNLOADPROFILE','牟琯  ');
define('_DOWNLOADRATINGDET','牟琯  靡 ');
define('_EDITTHISDOWNLOAD','牟琯 ');
define('_DOWNLOADRATING','牟琯  ');
define('_DOWNLOADVOTE','표!');
define('_DONLYREGUSERSMODIFY','회 牟琯    笭求. <a href="'.getlink("Your_Account").'">隔</a> 慣究.');
define('_REQUESTDOWNLOADMOD','牟琯佯��');
define('_DOWNLOADID','牟琯 ID');
define('_DLETSDECIDE','<br>키 摸 湄 표   摸 湄涌� 米搔� 牟濱쨉 큰  絳求.');
define('_DRATENOTE4','<a href="'.getlink("Downloads&amp;d_op=TopRated").'">   米搔� 확究</a>.');
define('_POPULAR','慣獵 牟琯');
define('_TOPRATED','斂 牟琯');
define('_ADDITIONALDET','靡 ');
define('_EDITORREVIEW',' 煐�');
define('_REPORTBROKEN','크 키');
define('_AND','');
define('_INDB','故決 笭求.');
define('_INSTRUCTIONS','牟琯 홰 ');
define('_USERANDIP','牟琯 청척 絹 IP 溝絳求.');
define('_LDESCRIPTION',' : (獵 255米 玲)');
define('_CHECKFORIT',' 絿청 米搔� 構黴求.');
define('_LASTWEEK',' ');
define('_LAST30DAYS',' 30');
define('_1WEEK','1 ');
define('_2WEEKS','2 ');
define('_30DAYS','30 ');
define('_ADDEDON',' ');
define('_RATING','');
define('_DETAILS','靡 ');
define('_OF','of');
define('_TVOTESREQ',' 鵑 표 却爛求.');
define('_SHOWTOP',' ');
define('_MOSTPOPULAR',' 慣獵 牟琯 ');
define('_OFALL','of all');
define('_POPULARITY','慣竪�');
define('_SELECTPAGE',' ');
define('_MAIN','');
define('_NEWTODAY',' 킥');
define('_NEWLAST3DAYS','殮 3溝 킥');
define('_NEWTHISWEEK','譴  킥');
define('_POPULARITY1','慣竪� (故)');
define('_POPULARITY2','慣竪� (故)');
define('_TITLEAZ',' (A to Z)');
define('_TITLEZA',' (Z to A)');
define('_RATING1',' ( )');
define('_RATING2',' ( )');
define('_SEARCHRESULTS4','講 ');
define('_USUBCATEGORIES','카陋磁�');
define('_TRY2SEARCH','講');
define('_INOTHERSENGINES','摸 講 講');
define('_EDITORIAL','煐�');
define('_EDITORIALBY','煐� : ');
define('_NOEDITORIAL','   트 蒡 煐� 求.');
define('_RATETHISSITE','殮');
define('_ISTHISYOURSITE',' 米嘯�  米都歐?');
define('_ALLOWTORATE',' 트 표   笭求!');
define('_OVERALLRATING','체  ');
define('_TOTALOF','체 ');
define('_USER','회');
define('_USERAVGRATING','회 ');
define('_NUMRATINGS','殮 횟');
define('_REGISTEREDUSERS','溝 ');
define('_NUMBEROFRATINGS',' ');
define('_NOREGUSERSVOTES','溝  표');
define('_BREAKDOWNBYVAL','   劇');
define('_LTOTALVOTES','체 표 ');
define('_HIGHRATING','斂  ');
define('_LOWRATING','  ');
define('_NUMOFCOMMENTS','美트  ');
define('_WEIGHNOTE','*  :  姑 溝 悶 溝   都求');
define('_NOUNREGUSERSVOTES','溝   표');
define('_WEIGHOUTNOTE','*  :  姑 溝 悶 甁貫트 표 都求');
define('_NOOUTSIDEVOTES','甁貫트 표');
define('_OUTSIDEVOTERS','甁貫트 표');
define('_UNREGISTEREDUSERS','溝  ');
define('_PROMOTEYOURSITE',' 트 究');
define('_PROMOTE01','쩌  痢� 獵 \'트 \'  載�  琉  謗 隔   笭求.<br> 隔孤  표  키 臼   트 틔 米搔� 騁 譴(풔  ) 笭求.<br> 琯 틔 臼   琉 璣 臼 笭駕첼! :');
define('_TEXTLINK','灣트 크');
define('_PROMOTE02',' 커 潔 毬  秉 灣트 크 求  : ');
define('_HTMLCODE1','HTML 湄躍� 絿 ,   玲 :');
define('_THENUMBER','HTML 努 傷  ');
define('_IDREFER',' $sitename  決   트 ID 호都求.  美 확 玲.');
define('_BUTTONLINK',' 튼');
define('_PROMOTE03',' 羞� 灣트 크   秊 튼 크 歐 帽求.');
define('_RATEIT','트 殮!');
define('_HTMLCODE2',' 튼 努 湄 틔 笭求. :');
define('_REMOTEFORM',' 昇� ');
define('_PROMOTE04','  煞颯,  크  都求. 殮 求  都求.');
define('_VOTE4THISSITE',' 트 殮!');
define('_HTMLCODE3','  求  湄  트  獵 처  藪�  溝絳求. 틔 湄 활화 刻, 努 湄躍� 카漫 秉  見   笭求.   湄 틔 求. : ');
define('_PROMOTE05','표 玲탉 爛求!');
define('_THANKSBROKEN',' 訝� 怜 쨌   斂 玲탉 爛求.');
define('_SECURITYBROKEN','  絿 絹 IP 溝絳求.');
define('_THANKSFORINFO','  玲탉 爛求.');
define('_LOOKTOREQUEST',' 청  罹멋싹�.');
define('_SENDREQUEST','청 ');
define('_THANKSTOTAKETIME','챨  표 玲탉 爛求');
define('_RETURNTO','풩튼 ');
define('_RATENOTE1',' 米炤�   鵑 표 .');
define('_RATENOTE2',' 1 10   笭求.');
define('_RATENOTE3','米搔� 絿퓌   玲.');
define('_RATENOTE5','黴犬  米炤� 표 ');
define('_YOUAREREGGED','溝 회 慣 究.');
define('_FEELFREE2ADD','美트 표 緞 絿  笭求.');
define('_YOUARENOTREGGED','溝 회 틈構킬  慣 刻努求..');
define('_IFYOUWEREREG','美트 溝 회 爛求.');
define('_MODIFY','');
define('_COMPLETEVOTE1','표 玲탉 爛求.');
define('_COMPLETEVOTE2','$anonwaitdays  譴 표 究決求.');
define('_COMPLETEVOTE3','米炤�  표 慣 箕 爛求.');
define('_COMPLETEVOTE4','黴 蒡 牟琯恙� 표  求.');
define('_COMPLETEVOTE5','  刻努求 - 표 溝 刻努求.');
define('_COMPLETEVOTE6',' $outsidewaitdays 溝 IP玲年 箕 표 絳求.');

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
