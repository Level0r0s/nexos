<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/chinese_simplified/downloads.php,v $
  $Revision: 9.6 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:50 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','The download you\'ve requested doesn\'t exists.');
define('_CATEGORIES','類別');
define('_LVOTES','投票一覽');
define('_TOTALVOTES','總票數：');
define('_THEREARE','有');
define('_NOMATCHES','找不到與您的詢問條件相符的資料');
define('_SCOMMENTS','評論');
define('_UNKNOWN','未知');
define('_AUTHORNAME','作者名稱');
define('_AUTHOREMAIL','作者Email');
define('_DOWNLOADNAME','程式名稱');
define('_ADDTHISFILE','新增這個檔案');
define('_INBYTES','用 bytes 計算');
//define('_FILESIZE','檔案大小');
//define('_VERSION','版本');
//define('_AUTHOR','作者');
define('_HOMEPAGE','首頁');
define('_DOWNLOADNOW','立刻下載此檔案！');
define('_RATERESOURCE','資源比例');
define('_FILEURL','檔案鏈結');
define('_ADDDOWNLOAD','新增下載資源');
define('_DOWNLOADSMAIN','下載資源專區');
define('_DOWNLOADCOMMENTS','下載資源意見');
define('_DOWNLOADSMAINCAT','下載資源主類別');
define('_ADDADOWNLOAD','新增下載資源');
define('_DSUBMITONCE','提交一個獨一無二的下載只要一次.');
define('_DPOSTPENDING','在確認期間,所有下載檔案會被發表.');
define('_RESSORTED','資源目前排序方式為');
define('_DOWNLOADSNOTUSER1','您尚未成為註冊使用者或你沒有登入');
define('_DOWNLOADSNOTUSER2','若您已在本站註冊，才能新增下載資源');
define('_DOWNLOADSNOTUSER3','成為一個註冊使用者是一件非常快速而容易的事');
define('_DOWNLOADSNOTUSER4','為什麼我們會對某些功能要求註冊資格呢？');
define('_DOWNLOADSNOTUSER5','為的是提供您更高品質的內容，');
define('_DOWNLOADSNOTUSER6','每一個項目都個別地被我們檢查與驗證');
define('_DOWNLOADSNOTUSER7','我們希望提供您真正有價值的資訊。');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink("Your_Account").'">請來註冊帳號</a>');
define('_DOWNLOADALREADYEXT','錯誤：本網址已存在於資料庫！');
define('_DOWNLOADNOTITLE','錯誤：您必須為您的網址輸入一個標題！');
define('_DOWNLOADNOURL','錯誤：您必須為您的網址輸入一個網址！');
define('_DOWNLOADNODESC','錯誤：您必須為您的網址輸入一些描述！');
define('_DOWNLOADRECEIVED','我們已收到了您所投遞的下載資源，多謝！');
define('_NEWDOWNLOADS','最新的下載資源');
define('_TOTALNEWDOWNLOADS','全部最新的下載資源');
define('_DTOTALFORLAST','所有新進檔案下載');
define('_DBESTRATED','點選率最高的檔案下載');
define('_TRATEDDOWNLOADS','全部被評分的下載資源');
define('_SORTDOWNLOADSBY','排序下載資源，依');
define('_DCATNEWTODAY','本類別於本日內新增的下載資源');
define('_DCATLAST3DAYS','本類別於三日內新增的下載資源');
define('_DCATTHISWEEK','本類別於本周內新增的下載資源');
define('_DDATE1','日期(舊的下載資源先)');
define('_DDATE2','日期(新的下載資源先)');
define('_DOWNLOADS','下載資源');
define('_DOWNLOADPROFILE','下載資源概述');
define('_DOWNLOADRATINGDET','下載資源評分細節');
define('_EDITTHISDOWNLOAD','編輯這個下載資源');
define('_DOWNLOADRATING','下載資源評分');
define('_DOWNLOADVOTE','投票！');
define('_DONLYREGUSERSMODIFY','Only registered users can suggest downloads modifications. Please <a href="'.getlink("Your_Account").'">register or login</a>.');
define('_REQUESTDOWNLOADMOD','請求下載資源修改');
define('_DOWNLOADID','下載資源識別碼');
define('_DLETSDECIDE','下載資源相關選擇資訊');
define('_DRATENOTE4','瀏覽清單請至<a href="'.getlink('Downloads&amp;d_op=TopRated').'">高評分資源</a>.');
define('_POPULAR','受歡迎的');
define('_TOPRATED','最高分的');
define('_ADDITIONALDET','附加細節');
define('_EDITORREVIEW','編輯評論');
define('_REPORTBROKEN','失效鏈結報告');
define('_AND','和');
define('_INDB','在我們的資料庫');
define('_INSTRUCTIONS','指示');
define('_USERANDIP','您的姓名和IP會被紀錄，請勿濫用本系統');
define('_LDESCRIPTION','描述： (最多一百個字)');
define('_CHECKFORIT','未收到您的電子郵件，不論如何，我們會盡快檢查您的下載資源');
define('_LASTWEEK','最近一周');
define('_LAST30DAYS','最近卅天');
define('_1WEEK','1 周');
define('_2WEEKS','2 周');
define('_30DAYS','30 天');
define('_ADDEDON','增加於');
define('_RATING','評分');
define('_DETAILS','細節');
define('_OF','之');
define('_TVOTESREQ','最少投票需要');
define('_SHOWTOP','排行顯示');
define('_MOSTPOPULAR','最受歡迎之');
define('_OFALL','全部有');
define('_POPULARITY','受歡迎程度');
define('_SELECTPAGE','選擇網頁');
define('_MAIN','主要的');
define('_NEWTODAY','本日內,新的');
define('_NEWLAST3DAYS','最近3天內,新的');
define('_NEWTHISWEEK','本週內,新的');
define('_POPULARITY1','流行度 (點閱數由小至大)');
define('_POPULARITY2','流行度 (點閱數由大至小)');
define('_TITLEAZ','標題 (A to Z)');
define('_TITLEZA','標題 (Z to A)');
define('_RATING1','評分 (低分至高分)');
define('_RATING2','評分 (高分至低分)');
define('_SEARCHRESULTS4','搜尋結果,對');
define('_USUBCATEGORIES','子類別');
define('_TRY2SEARCH','嘗試搜尋');
define('_INOTHERSENGINES','在其他搜尋引擎');
define('_EDITORIAL','編輯性');
define('_EDITORIALBY','編輯由');
define('_NOEDITORIAL','本站目前尚無相關編輯');
define('_RATETHISSITE','評分這個網站資源');
define('_ISTHISYOURSITE','這是您的資源嗎？');
define('_ALLOWTORATE','允許其他使用者在您的網站評分！');
define('_OVERALLRATING','總評分');
define('_TOTALOF','全部共');
define('_USER','使用者');
define('_USERAVGRATING','使用者平均分數');
define('_NUMRATINGS','評分次數');
define('_REGISTEREDUSERS','註冊使用者');
define('_NUMBEROFRATINGS','評分數目');
define('_NOREGUSERSVOTES','沒有註冊使用者投票');
define('_BREAKDOWNBYVAL','評分數值損壞');
define('_LTOTALVOTES','全部投票');
define('_HIGHRATING','高評分');
define('_LOWRATING','低評分');
define('_NUMOFCOMMENTS','評註數目');
define('_WEIGHNOTE','* 註：這個網站資源加重註冊使用者評分');
define('_NOUNREGUSERSVOTES','非註冊使用者無法投票');
define('_WEIGHOUTNOTE','* 註：這個網站資源加重註冊使用者評分');
define('_NOOUTSIDEVOTES','無外部投票');
define('_OUTSIDEVOTERS','外部投票');
define('_UNREGISTEREDUSERS','非註冊使用者');
define('_PROMOTEYOURSITE','宣傳您的網站');
define('_PROMOTE01','也許您會對我們所提供的幾種遠端\'評分網站\'的選項感到興趣。這讓您可以用圖片(或甚至一個評分格式)放在您的網站。網站可以增加您的網站資源的投票數。請選擇下列選項：');
define('_TEXTLINK','文字方式鏈結');
define('_PROMOTE02','一種對鏈結的評分格式，就是簡單地使用文字方式顯示鏈結：');
define('_HTMLCODE1','本情況中，您可使用的HTML格式如下：');
define('_THENUMBER','該數字');
define('_IDREFER','位在HTML參考來源，代表您網站的識別碼，在 $sitename 資料庫。請確定數字與現況相符。');
define('_BUTTONLINK','按鍵方式鏈結');
define('_PROMOTE03','除了用基本的文字方式顯示鏈結, 您還可以使用按鍵方式鏈結：');
define('_RATEIT','評分此網站！');
define('_HTMLCODE2','上述按鍵的原始碼為：');
define('_REMOTEFORM','遠端評分格式');
define('_PROMOTE04','若您作弊，我們將移除您的鏈結。這是目前被移除的評分格式');
define('_VOTE4THISSITE','投票給網站！');
define('_HTMLCODE3','本表單可讓使用者評分您的網站資源，直接在您的網站資源而且評分會被本站紀錄。請將下列原始碼貼至您的網站資源的網頁即可使用：');
define('_PROMOTE05','謝謝，祝您幸運！');
define('_THANKSBROKEN','感謝您協助維護此目錄之完整。');
define('_SECURITYBROKEN','為了安全的理由，您的使用者名稱和IP地址，也將被暫時紀錄。');
define('_THANKSFORINFO','感謝提供資訊');
define('_LOOKTOREQUEST','我們會立刻處理您的請求');
define('_SENDREQUEST','寄出請求');
define('_THANKSTOTAKETIME','感謝您對網站評分');
define('_RETURNTO','回到');
define('_RATENOTE1','請不要對同一個資源投一票以上');
define('_RATENOTE2','分數由1分到10分');
define('_RATENOTE3','請客觀地投票');
define('_RATENOTE5','請不要投給您自有的資源或是競爭者');
define('_YOUAREREGGED','您是一個已登入的註冊使用者');
define('_FEELFREE2ADD','請自由地評論這個網站.');
define('_YOUARENOTREGGED','您不是一個註冊使用者或您尚未登入');
define('_IFYOUWEREREG','已登記者可評註此網站');
define('_MODIFY','修改');
define('_COMPLETEVOTE1','您的投票是有價值的.');
define('_COMPLETEVOTE2','您在過去的 $anonwaitdays 天之內, 已經對這個資源投票過了.');
define('_COMPLETEVOTE3','只能對這個資源投一次票.<br>所有的投票已經紀錄下來, 且經過檢查了.');
define('_COMPLETEVOTE4','您不能對您自己登錄的連結投票<br>所有的投票已經紀錄下來, 且經過檢查了.');
define('_COMPLETEVOTE5','沒選擇評價,不投票計算');
define('_COMPLETEVOTE6','每個 IP 位址在 $outsidewaitdays 天之內只允許投一次票.');

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
