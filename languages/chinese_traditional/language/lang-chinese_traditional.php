<?php
/*****************************************************************************************************************  
  CPG-NUKE: Advanced Content Management System
  ********************************************
  A highly modified version of PHP-Nuke 6.5
  which is Copyright (c) 2002 by Francisco Burzi
  http://phpnuke.org
  Under the GNU General Public License version 2
*******************************************************************************************************************
  Main language file
  Last modification:                                                     
 
 $Id: lang-chinese_traditional.php,v 1.3 2004/08/18 04:23:18 akamu Exp $            
*******************************************************************************************************************/
define("_CHARSET","UTF-8");
define("_BROWSER_LANGCODE", "zh");
define('_TEXT_DIR', 'ltr');
define('_ALIGN_TEXT', 'right');
define("_SEARCH","站內搜尋");
define("_LOGIN","登入");
define("_WRITES","寫道");
define("_POSTEDON","發表於");
define("_NICKNAME","登入名稱");
define("_PASSWORD","密碼");
define("_WELCOMETO","歡迎來到");
define("_EDIT","編輯");
define("_DELETE","刪除");
define("_POSTEDBY","貼出者為");
define("_READS","閱讀");
define("_GOBACK","[ <a href=\"javascript:history.go(-1)\">回到上一頁</a> ]");
define("_COMMENTS","意見");
define("_PASTARTICLES","以前的文章");
define("_OLDERARTICLES","更舊的文章");
define("_BY","由");
define("_ON","於");
define("_LOGOUT","登出");
define("_WAITINGCONT","內容等待中");
define("_SUBMISSIONS","投遞");
define("_WREVIEWS","作品評論等待中");
define("_WLINKS","鏈結等待中");
define("_EPHEMERIDS","臨時公告");
define("_ONEDAY","歷史上的今天...");
define("_ASREGISTERED","還沒有帳號嗎？<a href=\"".getlink("Your_Account")."\">請建立帳號</a>。完成註冊的使用者可以享受佈景主題管理，評註的組態調整及具名發表評論等功能。");
define("_MENUFOR","選單於");
define("_NOBIGSTORY","今日尚無大事發生");
define("_BIGSTORY","本日點閱率最高的報導：");
define("_SURVEY","投票");
define("_POLLS","投票一覽");
define("_PCOMMENTS","評論：");
define("_RESULTS","結果");
define("_HREADMORE","閱讀詳細內容...");
define("_CURRENTLY","目前有");
define("_GUESTS","位來賓和");
define("_MEMBERS","會員在線上");
define("_YOUARELOGGED","您的登入身分為");
define("_YOUHAVE","您有");
define("_PRIVATEMSG","個私人訊息");
define("_YOUAREANON","您正匿名使用中, 請來<a href=\"".getlink("Your_Account")."\">免費註冊</a>");
define("_NOTE","註：");
define("_ADMIN","管理");
define("_WERECEIVED","本站共有");
define("_PAGESVIEWS","次瀏覽。起始日期：");
define("_TOPIC","新聞主題");
define("_UDOWNLOADS","下載資源");
define("_VOTE","投票");
define("_VOTES","投票");
define("_MVIEWADMIN","查看：只有管理員能看到");
define("_MVIEWUSERS","查看：只有註冊使用者能看到");
define("_MVIEWANON","查看：只有匿名使用者能看到");
define("_MVIEWALL","查看：所有訪客");
define("_EXPIRELESSHOUR","期限：小於一小時");
define("_EXPIREIN","期限為");
define("_HTTPREFERERS","HTTP 來源");
define("_UNLIMITED","無限");
define("_HOURS","小時");
define("_RSSPROBLEM","目前該網站新聞標題有些問題");
define("_SELECTLANGUAGE","選擇語言");
define("_SELECTGUILANG","選擇語言：");
define("_NONE","無");
define("_BLOCKPROBLEM","<center>這個區塊發生問題。</center>");
define("_BLOCKPROBLEM2","<center>這個區塊現在沒有內容.</center>");
define("_MODULENOTACTIVE","對不起, 這個模組沒有啟動!");
define("_NOACTIVEMODULES","不啟動模組");
define('_MODULENOEXIST', 'We\'re sorry, but the requested file, %s, does not appear to exist');//NEW akamu
define("_FORADMINTESTS","(管理者測試用)");
define("_BBFORUMS","討論區管理");
define("_ACCESSDENIED", "拒絕存取");
define("_RESTRICTEDAREA", "您正嘗試存取一個被限制的區域。");
define("_MODULEUSERS", "對不起，這個區域只有<i>已註冊使用者</i>才能讀取。<br><br>您可以<a href=\"".getlink("Your_Account&amp;op=new_user")."\">點這裡</a>免費註冊, 註冊後<br>您便可以自由讀取此區域。謝謝。<br><br>");
define("_MODULESADMINS", "對不起，這個區域只有<i>管理者</i>才能讀取。<br><br>");
define("_HOME","首頁");
define("_HOMEPROBLEM","問題大條了： 我們居然沒有首頁！！！");
define("_ADDAHOME","增加一個模組到您的首頁");
define("_HOMEPROBLEMUSER","目前的首頁有點問題，請檢查。");
define("_MORENEWS","More in News Section");
define("_ALLCATEGORIES","所有類別");
define("_DATESTRING","%A, %B %d @ %T %Z");
define("_DATESTRING2","%A, %B %d");
define("_DATE","日");
define("_HOUR","時");
define("_UMONTH","月");
define("_YEAR","年");
define("_JANUARY","一月");
define("_FEBRUARY","二月");
define("_MARCH","三月");
define("_APRIL","四月");
define("_MAY","五月");
define("_JUNE","六月");
define("_JULY","七月");
define("_AUGUST","八月");
define("_SEPTEMBER","九月");
define("_OCTOBER","十月");
define("_NOVEMBER","十一月");
define("_DECEMBER","十二月");

define("_MONDAY","Monday");
define("_TUESDAY","Tuesday");
define("_WEDNESDAY","Wednesday");
define("_THURSDAY", "Thursday");
define("_FRIDAY","Friday");
define("_SATURDAY","Satday");
define("_SUNDAY","Sunday");

define("_ABR_MONDAY","Mon");
define("_ABR_TUESDAY","Tues");
define("_ABR_WEDNESDAY","Wed");
define("_ABR_THURSDAY", "Thurs");
define("_ABR_FRIDAY","Fri");
define("_ABR_SATURDAY","Sat");
define("_ABR_SUNDAY","Sun");

define("_BWEL","歡迎");
define("_BPM","私人訊息");
define("_BUNREAD","未讀");
define("_BREAD","已讀");
define("_BMEMP","會員");
define("_BLATEST","Latest");
define("_BTD","今日新增會員");
define("_BYD","昨日新增會員");
define("_BOVER","全部");
define("_BVISIT","線上成員");
define("_BVIS","訪客");
define("_BMEM","會員");
define("_BTT","全部");
define("_BON","目前上線");
define("_BREG","註冊");
define("_BROADCAST","廣播公開訊息");
define("_BROADCASTFROM","公開訊息由");
define("_TURNOFFMSG","關閉公開訊息");
define("_JOURNAL","日誌");
define("_READMYJOURNAL","讀取我的日誌");
define("_ADD","新增");
define("_YES","是");
define("_NO","否");
define("_INVISIBLEMODULES","隱藏模組");
define("_ACTIVEBUTNOTSEE","(啟動但是隱藏連結)");
/* MOVED */

define("_MODREQLINKS","熱門網站修正");
define("_BROKENLINKS","失效連結");
define("_MODREQDOWN","下載資源修正");
define("_BROKENDOWN","失效下載資源");
define("_PAGEGENERATION","本頁產生時間:");
define("_SECONDS","秒");
define("_YOUHAVEONEMSG","您有一個新私人訊息");
define("_YOUHAVE","您有");
define("_NEWPMSG","個新私人訊息");
define("_CONTRIBUTEDBY","由誰提供:");
define("_CHAT","聊天");
define("_REGISTERED","已註冊");
define("_CHATGUESTS","訪客");
define("_USERSTALKINGNOW","用家談話中");
define("_ENTERTOCHAT","進入聊天室");
define("_CHATROOMS","可選頻道");
define("_SECURITYCODE","安全確認碼");
define("_TYPESECCODE","在此輸入安全確認碼");
define("_ASSOTOPIC","相關主題");


define("_HELLO", "您好");

/* ---- Begin modified block-User_Info english ----*/

define("_MEMBERSOPTIONS", "會員選項");
define("_READSEND", "Read your private messages. Send messages to others.");
define("_INBOX", "Inbox");
define("_NEW", "New");
define("_ACCOUNTOPTIONS", "Your Account. Change options and read your messages.");
define("_LOGOUTACCT", "Log out of this account.");
define("_LOGOUTADMINACCT", "Log out of admin account.");
define("_BLOGIN", "Your Account");
define("_BFLOGIN", "Forum Profile");
define("_BHID", "Hidden");
define("_WHOWHERE", "Who Is Where");
define("_STAFFONL", "Staff Online");
define("_STAFFNONE", "No staff members are online!");

/* For Multilingual Modules Block  */
define("_ContentLANG", "Content");
define("_coppermineLANG", "Photo Gallery");
define("_CPGlangLANG", "Help Translate");
define("_DownloadsLANG", "Downloads");
define("_EncyclopediaLANG", "Encyclopedia");
define("_ForumsLANG", "Community Forums");
define("_ContactLANG", "Contact Us");
define("_FAQLANG", "FAQ - Help");
define("_JournalLANG", "Journal");
define("_Members_ListLANG", "Members List");
define("_NewsLANG", "News");
define("_ReviewsLANG", "Reviews");
define("_SearchLANG", "Search");
define("_SectionsLANG", "Sections");
define("_StatisticsLANG", "Statistics");
define("_Stories_ArchiveLANG", "Stories Archive");
define("_Submit_NewsLANG", "Submit News");
define("_SurveysLANG", "Surveys");
define("_TopLANG", "Top 10");
define("_TopicsLANG", "Topics");
define("_Private_MessagesLANG", "My Private_Messages");
define("_Recommend_UsLANG", "Recommend Us");
define("_Web_LinksLANG", "Links");
define("_Your_AccountLANG", "My Account");
define("_EVENTS4ULANG", "Calendar");
define("_COMMUNITY", "Community");
define("_COMMUNICATION", "Communication");
define("_FRIENDS", "Friends");
define("_STORE", "Store");
define("_PRODUCTS", "Products");
define("_DONATE", "Donate");
define("_HELP", "Help");
define("_GALLERIES", "Galleries");
define("_DOCS", "Documentation");
define("_RULES", "Rules &amp; regulations");
/* END Multilingual Modules Block */
/* START Newsletter Block */
define("_NEWSLETTERBLOCKSUBSCRIBED", "You <strong>are</strong> subscribed to<br />our newsletter");
define("_NEWSLETTERBLOCKNOTSUBSCRIBED", "You are <strong>not</strong> subscribed to<br />our newsletter");
define("_NEWSLETTERBLOCKREGISTER", "You must be a<br /><strong>registered user</strong><br />to receive our newsletter");
define("_NEWSLETTERBLOCKSUBSCRIBE", "Subscribe");
define("_NEWSLETTERBLOCKUNSUBSCRIBE", "Unsubscribe");
define("_NEWSLETTERBLOCKREGISTERNOW", "Register Now!");
define("_NEWSLETTERBLOCKNEWSLETTER", "Newsletter");
/* END Newsletter Block */

/* START class phpmailer lang array */
$PHPMAILER_LANG = array();

$PHPMAILER_LANG["provide_address"] = 'You must provide at least one recipient email address.';
$PHPMAILER_LANG["mailer_not_supported"] = ' mailer is not supported.';
$PHPMAILER_LANG["execute"] = 'Could not execute: ';
$PHPMAILER_LANG["instantiate"] = 'Could not instantiate mail function.';
$PHPMAILER_LANG["authenticate"] = 'SMTP Error: Could not authenticate.';
$PHPMAILER_LANG["from_failed"] = 'The following From address failed: ';
$PHPMAILER_LANG["recipients_failed"] = 'SMTP Error: The following recipients failed: ';
$PHPMAILER_LANG["data_not_accepted"] = 'SMTP Error: Data not accepted.';
$PHPMAILER_LANG["connect_host"] = 'SMTP Error: Could not connect to SMTP host.';
$PHPMAILER_LANG["file_access"] = 'Could not access file: ';
$PHPMAILER_LANG["file_open"] = 'File Error: Could not open file: ';
$PHPMAILER_LANG["encoding"] = 'Unknown encoding: ';
/* END class phpmailer lang array */



/*****************************************************/
/* Function to translate Datestrings                 */
/*****************************************************/
function translate($phrase) {
    switch($phrase) {
	case "xdatestring":	$tmp = "%A, %B %d @ %T %Z"; break;
	case "linksdatestring":	$tmp = "%d-%b-%Y"; break;
	case "xdatestring2":	$tmp = "%A, %B %d"; break;
	default:		$tmp = "$phrase"; break;
    }
    return $tmp;
}

?>