<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG Dev Team
  http://cpgnuke.org

  Under the GNU General Public License version 2*/
/**************************************************************************/
/* Your_帳號 Module                                                    */
/* Last modification notes:
/*    $Id: lang-chinese_traditional.php,v 1.2 2004/08/02 03:27:03 akamu Exp $
/* Please change the second quoted phrase, not the capitalized one        */
/* If you need to use double quotes (") remember to add a backslash (\),  */
/* so your entry will look like: This is \"double quoted\" text.          */
/* Try to stay as close to the meaning of the english phrase.             */
/**************************************************************************/

// Admin Users Config
define("_REQUIREADMIN", "需要站長審核");
define("_ACTALLOWREG", "允許使用者註冊");
define("_ACTNOTIFYADD", "有會員註冊通知站長");
define("_ACTALLOWDELETE", "允許會員刪除自己帳號");
define("_ACTNOTIFYDELETE", "有會員自行刪除通知站長");
define("_ACTALLOWTHEME", "允許會員選擇佈景");
define("_ACTALLOWMAIL", "允許會員改變 Email");
define("_SERVERMAIL", "主機可以寄 Email");
define("_USEACTIVATE", "用 email 啟用帳號");
define("_USEREGISTERMSG", "註冊需站長審核");

define("_MA_HIDDEN", "隱藏");
define("_MA_VISIBLE", "顯示");
define("_MA_REQUIRED", "必要的");

// User Registration Config
define("_MA_PROFILE_INFO", "個人基本資料");
define("_MA_ADDITIONAL", "額外的資料");
define("_MA_REALNAME", "真實姓名");
define("_MA_FAKEMAIL", "偽裝的 Email");
define("_MA_HOMEPAGE", "首頁");
define("_MA_ICQ", "ICQ 號碼");
define("_MA_AIM", "AIM 帳號");
define("_MA_YIM", "Yahoo 帳號");
define("_MA_MSNM", "MSN 帳號");
define("_MA_LOCATION", "所在地");
define("_MA_OCCUPATION", "職業");
define("_MA_INTERESTS", "興趣");
define("_MA_SIGNATURE", "簽名檔");
define("_MA_EXTRAINFO", "額外資料");
define("_MA_PREFERENCES", "偏好設定");
define("_MA_TIMEZONE", "時區");
define("_MA_DATEFORMAT", "日期格式");
define("_MA_RECEIVENEWSLETTER", "訂閱電子報");
define("_MA_SHOWEMAIL", "顯示我的 Email 信箱");
define("_MA_SHOWONLINE", "顯示我的上線狀態");
define("_MA_ALLOWBBCODE", "允許 BBCode");
define("_MA_ALLOWHTML", "允許 HTML 碼");
define("_MA_ALLOWSMILIES", "打開表情符號功能");
define("_MA_NOTIFYREPLY", "有回應時通知我");
define("_MA_NOTIFYPM", "有新的私人訊息用 Email 通知我");
define("_MA_POPUPPM", "有新的私人訊息時彈出視窗");
define("_MA_ATTACHSIG", "總是附上我的簽名檔");
define("_MA_PRIVATE", "私密資料");
define("_MA_FIRSTNAME", "大名");
define("_MA_LASTNAME", "姓氏");
define("_MA_GENDER", "性別");
define("_MALE", "男");
define("_FEMALE", "女");
define("_MA_BIRTHDAY", "出生日期");
define("_MA_BIRTHDAYMSG", "格式如 月/日/年");
define("_MA_TELEPHONE", "電話號碼");
define("_MA_FAX", "傳真號碼");
define("_OSC_NEWSLETTER", "接受商店電子報");
define("_OSC_NEWSLETTERMSG", "這是一封個別的 e-mail 新的商品項目與折扣");

// License agreement
define("_BOUNDREGISTRATION", "藉由點擊以下的註冊表示你同意接受這些條款規範.");
define("_MA_REGISTRATION", "加入會員同意條款");
define("_MA_AGREE_OVER_13", "我<b>超過</b>或者<b>正當 13</b>歲並同意這些條款");
define("_MA_AGREE_UNDER_13", "我<b>未滿</b> 13 歲並同意這些條款");
define("_MA_DO_NOT_AGREE", "我不同意這些條款");

// Registration form
define("_MA_REGISTRATION_INFO", "註冊資訊");
define("_MA_ITEMS_REQUIRED", "標記 * 符號的項目是必要的.");
define("_MA_PROFILE_INFO_NOTICE", "這資料會被公開顯示");
define("_USERNAME", "用戶大名");
define("_EMAILADDRESS", "Email 信箱");
define("_BLANKFORAUTO", "留空白自動產生你的密碼");
define("_CONFIRMPASSWORD", "確認密碼");
define("_SUBMIT", "確定送出");
define("_RESET", "重來");
define("_MA_FAKEMAILMSG", "(這個 Email 會被公開. 為了防止廣告垃圾信件. 你只要輸入偽裝的信箱)");
define("_MA_DATEFORMATMSG", "所用的語法跟 PHP <a href=\"http://www.php.net/date\">date()</a> 功能相同");
define("_MA_SIGNATUREMSG", "這是一個文字區塊, 它會被加入到你所寫的每篇文章的後面. 有 255 個字元限制");
define("_MA_NOTIFYREPLYMSG", "當有人回覆你寫的文章時, 設定系統寄一封Email給你. 這功能會隨著你張貼文章的任何時候被改變");
define("_MA_POPUPPMMSG", "當你的私人密訊送達時, 設定系統開一個新的彈出視窗通知你");

// config options
define("_ACTDISABLED", "此功能已經由網站站長 <b>關閉</b> .");

// Register steps
define("_USERFINALSTEP", "會員註冊: 最後步驟");
define("_USERCHECKDATA", "請檢查以下資訊. 假如全部正確你可以點擊 \"完成\" 來執行註冊 , 否則請按 \"返回\" 來修正需要改變的任何資料.");
define("_YOURPASSWORD", "你的密碼是");
define("_YOUWILLRECEIVE", "你會收到一封確認信, 請你在 24 小時內訪問此信中的一個連結來啟用帳號, .");
define("_YOUWILLRECEIVE2", "你會收到一封有帳號資料的 email.");
define("_WAITAPPROVAL", "此站站長會重新檢視你的申請假如你已被審核通過會寄一封 email 通知你.");
define("_FINISH", "完成");

// Register finish
define("_YOUUSEDEMAIL", "你或別人已經用你的 Email 信箱");
define("_TOREGISTER", "要註冊一個帳號於");
define("_USERREGLOGIN", "會員註冊/登入");
define("_USERAPPLOGIN", "會員申請/登入");
define("_ACCOUNTCREATED", "新的會員帳號已建立!");
define("_YOUAREREGISTERED", "歡迎! 現在你已完成註冊成為本站的會員.");
define("_FINISHUSERCONF", "你要求一個新帳號已被處理. 在接下來幾秒, 你會接到一封電子郵件, 信件內容有在接下來 24 小時內應該訪問的啟用帳號連結.");
define("_FINISHUSERCONF2", "系統已經執行你的一個新的帳號的要求. 現在你可以 ");
define("_FINISHUSERCONF3", "登入於此");
define("_TOFINISHUSER", "要完成註冊手續你應該在24小時內訪問以下的連結以啟用你的會員帳號, 否則資料會被系統自動刪除, 只能再提出申請:");
define("_ACTIVATIONSUB", "會員帳號啟動");
define("_REGISTRATIONSUB", "會員帳號註冊");
define("_THANKSUSER", "感謝你加入會員於");
define("_FOLLOWINGMEM", "以下是會員資料:");
define("_TOAPPLY", "要申請一個帳號在");
define("_APPLICATIONSUB", "會員帳號申請");
define("_YOUAREPENDING", "歡迎! 你的新會員申請等待審核中. 當你的申請已被處理, 本站站長會連絡你.");
define("_THANKSAPPL", "感謝你申請於");
define("_MEMADD", "會員已加入");
define("_MEMAPL", "會員已申請");

// Register errors
define("_ERRORINVEMAIL", "錯誤: Email 格式不正確");
define("_NICK2SHORT", "會員名稱太短. 它必需大於 3 個字元");
define("_SECCODEINCOR", "安全辨識碼不正確, 請返回並依照所給的正確地輸入它...");
define("_ERROREMAILSPACES", "錯誤: Email 信箱不能包括空格");
define("_ERRORINVNICK", "錯誤: 無效的會員名稱");
define("_NICK2LONG", "會員名稱太長. 他必須少於 26 個字元");
define("_NAMERESERVED", "錯誤: 這是保留的名字");
define("_NAMEDENIED","錯誤: 不可以使用你所選的用戶名稱的這個部份:");
define("_NICKNOSPACES", "錯誤: 在用戶名稱不能有任何空白");
define("_NICKTAKEN", "錯誤: 本站已有此會員名稱");
define("_EMAILREGISTERED", "錯誤: Email 信箱已經被註冊");
define("_PASSDIFFERENT", "兩個密碼是不相同的. 他們必需是相同的.");
define("_YOUPASSMUSTBE", "你的密碼必需是");
define("_CHARLONG", "字元長度");
define("_ACCOUNTRESERVED", "新會員帳號被保留!");
define("_EMAILNOTUSABLE", "錯誤: 無效的 Email 信箱");

// User activation
define("_ACTIVATIONYES", "會員啟用");
define("_ACTMSG", "你的帳號已啟用. 請用你的會員名稱及分配到的密碼從 <a href=\"".getlink()."\">這個連結</a> 來登入本站.");
define("_ACTIVATIONERROR", "會員帳號啟用錯誤");
define("_ACTERROR1", "會員驗證碼無效.<br /><br />請務必要點選你所收到的 email 上的連結或者請你<a href=\"".getlink()."\">點這裡</a>申請一個新的帳號.");
define("_ACTERROR2", "系統資料庫沒有這個會員資料.<br /><br />你可以<a href=\"".getlink()."\">在這裡點一下</a>註冊一個新的會員帳號.");

// Edit user profile
define("_CURRENTPASSWORD", "目前的密碼");
define("_CURRENTPASSWORDMSG", "假如你要改變密碼, 必須確認你目前的密碼或者是你的Email信箱");
define("_NEWPASSWORD", "新密碼");
define("_NEWPASSWORDMSG", "假如你想要改變密碼, 你只須提供一個新密碼");
define("_CONFIRMPASSWORDMSG", "假如你在上面改變密碼, 你只需確認你的新密碼");
define("_SUREDELETE", "請你確定你想要刪除你的帳號?");
define("_CURRENT_IMAGE", "目前的圖片");
define("_DELETE_IMAGE", "刪除圖片");
define("_AVATAR_CONTROL", "頭像控制台");
define("_AVATAR_INFO", "在你所張貼的文章中的你的個人資料顯示一個小圖片. 一次只會顯示一個圖片, 它的寬度不可大於 80 像素, 高度不可大於 80 像素, 檔案大小不可大於 6 KB.");
define("_AVATAR_OFFSITE","連到別的網站的頭像");
define("_AVATAR_OFFSITEMSG","輸入有你想要的頭像圖片位置的網址.");
define("_AVATAR_SELECT", "從藝廊選擇頭像");
define("_SHOW_GALLERY", "顯示藝廊");
define("_AVATAR_UPLOAD", "從你的電腦上傳頭像");

// Avatar section
define("_AVATAR_GALLERY", "頭像藝廊");
define("_CATEGORY_SELECT", "選擇類別");
define("_SELECT_AVATAR", "選擇頭像");
define("_CANCEL_AVATAR", "取消頭像");

// Profile page
define("_THISISYOURPAGE", "這是你的個人網頁");
define("_PERSONALINFO", "個人資料");
define("_ABOUT_USER", "全部資料關於");
define("_CONTACTINFO", "連絡資訊");
define("_PM", "私人密訊");
define("_JOINED", "已加入");
define("_RANK", "等級");
define("_LAST10BBTOPIC", "最近 10 篇論壇討論");
define("_LAST10BBTOPICS", "最近 10 篇論壇討論發起人");
define("_LAST10COMMENT", "最近 10 篇評論");
define("_LAST10DOWNLOAD", "最近 10 個檔案");
define("_LAST10DOWNLOADS", "最近 10 個檔案提供者");
define("_LAST10SUBMISSION", "最近 10 新聞投遞");
define("_LAST10WEBLINK", "最近 10 網站連結");
define("_LAST10WEBLINKS", "最近 10 網站連結提供者");
define("_MEMBERGROUPS", "Group Memberships");
define("_AVATAR", "頭像");
define("_WEBSITE", "網站");
define("_LOCATION", "所在地");
define("_OCCUPATION", "職業");
define("_INTERESTS", "興趣");
define("_SIGNATURE", "簽名");

define("_USERSTATUS", "會員目前狀態");
define("_ONLINE", "上線");
define("_OFFLINE", "離線");
define("_NOTSUBSCRIBED", "你沒有訂閱我們的電子報");
define("_SUBSCRIBED", "你已訂閱我們的電子報");

define("_BROADCAST", "廣播公開訊息");
define("_BROADCASTTEXT", "你可以從這裡寄一則 <i>公開信息</i>  (最大 255 字元). 此信息在接下來 10 分鐘會被顯示給所有線上會員. 任何會員上線會在網站識別圖案下方的紅色長條圖旨看到你的訊息, 只有一次. 任何會員可以從 <a href=\"".getlink("Your_帳號&amp;op=edithome")."\">這裡</a> 選擇不啟用接收公開訊息這項功能 . 請您不要濫用此功能. 這裡不允許 HTML 語法.");
define("_SEND", "確定寄出");
define("_BROADCASTSENT", "你的廣播訊息已經寄出.");
define("_BROADCASTNOTSENT", "<b>錯誤:</b> 你的廣播訊息是空的或者你最近已經廣播一信息. 要廣播另一訊息你需要等10分鐘.");
define("_RETURNPAGE", "返回到你的個人首頁");

define("_MYHEADLINES", "我的頭條新聞");
define("_SELECTASITE", "請選擇你想閱讀其頭條的網站:");
define("_SELECTASITE2", "選擇一個網站");
define("_ORTYPEURL", "或者輸入你偏愛的 RSS/XML 頭條網址:");
define("_GO", "Go");
define("_HEADLINESFROM", "頭條新聞來自");

define("_READMYJOURNAL", "閱讀我的期刊");

// Errors
define("_ACCDELETED", "帳號已被刪除");
define("_SERVERNOMAIL", "這個主機沒有傳送郵件功能. 請連絡站長求助.");
define("_ACCSUSPENDED", "帳號已被暫時中止");
define("_BESUREACT", "請確定你有啟用你的帳號.");
define("_MEMDEL", "會員已刪除");
define("_YOUBAD", "錯誤: 你企圖要執行不合法的操作!");
define("_NOINFOFOR", "沒有可用的資訊於");
define("_SORRYNOUSERINFO", "抱歉, 沒有找到會員資料");
define("_LOGININCOR", "登入錯誤! 請再試一次...");
define("_UPDATEFAILED", "無法更新會員資料. 請連絡站長.");

// Navbar
define("_ACCTCHANGE", "改變<br />資訊");
define("_ACCTCOMMENTS", "評論<br />設定");
define("_ACCTEXIT", "登出<br />離開");
define("_ACCTHOME", "改變<br />首頁");
define("_ACCTJOURNAL", "你的<br />期刊");
define("_ACCTTHEME", "選擇<br />怖景");
define("_CHANGEHOME", "你的首頁");
define("_CHANGEYOURINFO", "你的資料");
define("_CONFIGCOMMENTS", "評論");
define("_DELETEACCT", "刪除<br />帳號");
define("_LOGOUTEXIT", "登出/離開");
define("_MESSAGES", "信息");
define("_RETURNACCOUNT", "回到我的帳號頁面");
define("_SELECTTHETHEME", "佈景");

// Admin area
define("_DELETEREASON", "刪除理由");
define("_SUSPENDREASON", "暫時停止理由");
define("_DENYREASON", "拒絕理由");
define("_CHECKNUM", "啟用編號 #");
define("_REGDATE", "已加入日期");
define("_ACCTAPPROVE", "帳號已同意");
define("_ACCTDELETE", "帳號已刪除");
define("_ACCTDENY", "帳號已拒絕");
define("_ACCTREMOVE", "帳號已移除");
define("_ACCTRESTORE", "帳號已回存");
define("_ACCTSUSPEND", "帳號已中止");
define("_ACTIVEUSERS", "啟用的會員");
define("_ADDUSER", "增加一位新的會員");
define("_ADDUSERBUT", "增加會員");
define("_ALLOWUSERS", "允許其它會員看我的 email 信箱");
define("_APPROVE", "同意");
define("_APPROVEUSER", "同意會員申請");
define("_DELETEUSER", "刪除會員");
define("_DELETEUSERS", "已刪除的會員");
define("_DENY", "拒絕");
define("_DENYUSER", "拒絕會員申請");
define("_DETUSER", "會員明細");
define("_EDITUSER", "修改會員");
define("_FORCHANGES", "(只為改變)");
define("_FUNCTIONS", "功能");
define("_HASAPPROVE", "已核准.");
define("_HASDELETE", "已被刪除.");
define("_HASDENY", "已被拒絕.");
define("_HASREMOVE", "已被移除.");
define("_HASRESTORE", "已被回存.");
define("_HASSUSPEND", "已被暫時中止.");
define("_ID", "ID");
define("_MODIFY", "修改");
define("_NAME", "大名");
define("_NEWSLETTER", "電子報");
define("_OK", "Ok!");
define("_OPTION", "選項");
define("_OR", "or");
define("_PERMISSIONS", "權限");
define("_PROMOTE", "升級");
define("_PROMOTEUSER", "升級會員");
define("_REMOVE", "移除");
define("_REMOVEUSER", "移除會員");
define("_REQUIREDNOCHANGE", "(必要的, 以後不能改變)");
define("_RESEND", "重寄");
define("_RESENDMAIL", "重寄啟用帳號 Email");
define("_RESTORE", "回存");
define("_RESTOREUSER", "回存會員");
define("_RETYPEPASSWD", "重新輸入密碼");
define("_SAVECHANGES", "儲存改變");
define("_SHOWMAIL", "顯示 Email");
define("_SORRYTO", "你的帳號於");
define("_SURE2APPROVE", "你確定要同意使用者申請會員");
define("_SURE2DELETE", "你確定要刪除會員");
define("_SURE2DENY", "你確定要拒絕使用者申請會員");
define("_SURE2PROMOTE", "你確定要升級會員");
define("_SURE2REMOVE", "你確定要移除會員");
define("_SURE2RESEND", "你確定要重新寄送啟用帳號的 email");
define("_SURE2RESTORE", "你確定要回存會員");
define("_SURE2SUSPEND", "你確定要暫停會員");
define("_SUSPEND", "暫停");
define("_SUSPENDUSER", "暫停的會員");
define("_SUSPENDUSERS", "暫停的會員");
define("_URL", "網址");
define("_USERADMIN", "會員管理 ");
define("_USERID", "會員 ID");
define("_USERPROMOTED", "會員已被升級為站長.");
define("_USERUPDATE", "更新會員");
define("_WAITINGUSER", "等待的會員");
define("_WAITINGUSERS", "等待的會員");

define("_ARTICLES", "文章");
define("_BBFORUM", "討論區");
define("_CONTENT", "內容");
define("_DOWNLOAD", "檔案");
define("_ENCYCLOPEDIA", "百科全書");
define("_FAQ", "常見問答");
define("_REVIEWS", "作品評論");
define("_SECTIONS", "專欄");
define("_SURVEYS", "問卷調查");
define("_TOPICS", "新聞類別");
define("_WEBLINKS", "網站連結");

// Admin errors
define("_ADDERROR", "錯誤: 資料庫有問題.");
define("_NAMEERROR", "錯誤: 此站長大名已在使用中.");
define("_NEEDTOCOMPLETE", "你需要完成所有必要的欄位");
define("_PASSWDNOMATCH", "抱歉, 新密碼不符合. 返回並且重試");
define("_USERNOEXIST", "會員不存在!");

/*****************************************************/
/* Originals : modules/Your_帳號/*.*              */
/*****************************************************/
define("_USERLOGIN", "會員登入");
define("_USERREGLOGIN", "會員註冊/登入");
define("_REGNEWUSER", "新會員註冊");
define("_PASSWORDLOST", "忘記密碼?");

define("_NOPROBLEM", "沒問題. 只要輸入你的用戶名稱並按寄出鍵. 系統會自動寄出有確認碼的 Email 給你, 然後你需要重打你的會員名稱與輸入你的確認碼, 系統會自動寄給你有新密碼的 Email .");
define("_CONFIRMATIONCODE", "確認碼");
define("_SENDPASSWORD", "確定送出");

define("_YOUARELOGGEDOUT", "你現在已經登出!");

define("_USERACCOUNT", "會員帳號");
define("_AT", "at");
define("_HASTHISEMAIL", "有這封 email 隨著它.");
define("_AWEBUSERFROM", "一位網站使用者來自");
define("_HASREQUESTED", "剛來要求寄出密碼.");
define("_YOURNEWPASSWORD", "你的新密碼是:");
define("_YOUCANCHANGE", "你可以改變它在你登入於");
define("_IFYOUDIDNOTASK", "假如你沒有要求這個, 別擔心. 是你看到此信, 不是 '他們'. 假如這是一個測試, 你只要用你的新密碼登入本站.");

define("_PASSWORD4", "密碼給");
define("_MAILED", "已寄出.");

define("_CODEREQUESTED", "剛才要求確認碼來變更密碼.");
define("_YOURCODEIS", "你的確認碼是:");
define("_WITHTHISCODE", "你現在可以用這確認碼來指派一個新的密碼於");
define("_IFYOUDIDNOTASK2", "假如你沒有要求這個, 別擔心. 只要刪除此封 Email.");

define("_CODEFOR", "確認碼給");
define("_USERPASSWORD4", "會員密碼給");

define("_255CHARMAX", "(最大 255 個字元. 輸入你的簽名檔可以有 HTML 網頁語法)");
define("_CANKNOWABOUT", "(最大 255 個字元. 請輸入你的自我介紹以讓別人認識你)");
define("_SOMETHINGWRONG", "Something screwed up... don't you hate that?");
define("_CHARLONG", "字元長度");

// Edit comments view
define("_COMMENTSCONFIG", "評論設定");
define("_DISPLAYMODE", "顯示模式");
define("_NOCOMMENTS", "沒有評論");
define("_NESTED", "巢狀");
define("_FLAT", "平面展開");
define("_THREAD", "穿線成串");
define("_SORTORDER", "排序方向");
define("_OLDEST", "最舊的先");
define("_NEWEST", "最新的先");
define("_HIGHEST", "最高分先");
define("_THRESHOLD", "門檻");
define("_COMMENTSWILLIGNORED", "評論分數小於此設定值會被忽略.");
define("_UNCUT", "不修改的");
define("_EVERYTHING", "幾乎每一樣");
define("_FILTERMOSTANON", "過濾大部份的匿名信息");
define("_USCORE", "分數");
define("_SCORENOTE", "匿名張貼開始於 0, 會員張貼開始於 1. 裁判有資格加減點數.");
define("_NOSCORES", "不要顯示分數");
define("_HIDDESCORES", "(隱藏分數: 它們仍在運作, 只是你看不到它們.)");
define("_MAXCOMMENT", "最大評論長度");
define("_TRUNCATES", "(縮短長的評論, 並且增加一個詳全文連結. 關閉此功能請將值設大一點)");
define("_BYTESNOTE", "位元組 (1024 位元組 = 1K)");

define("_PRIVATEMESSAGES", "你的私人訊息");
define("_BROWSEUSERS", "瀏覽會員");
define("_SEARCHUSERS", "搜尋會員");
define("_SENDPRIVATEMSG", "送一個私人密訊給");

// Change theme
define("_THEMESELECTION", "佈景選擇");
define("_SELECTTHEME", "選擇一個主題");
define("_THEMETEXT1", "此選項會改變整個網站的外觀.");
define("_THEMETEXT2", "改變只對你有效.");
define("_THEMETEXT3", "每個會員可以用不同的佈景觀看本網站.");

// Edit home
define("_HOMECONFIG", "首頁設定");
define("_NEWSINHOME", "在首頁新聞號碼");
define("_MAX127", "(最大 127):");
define("_MESSAGEACTIVATE", "啟用廣播公開訊息?");
define("_ACTIVATEPERSONAL", "啟用個人的選單");
define("_CHECKTHISOPTION", "(核選此選項, 在首頁會出現以下文字)");
define("_YOUCANUSEHTML", "(你可以使用 HTML 碼來放連結, 譬如)");
#modules/Your_Account/language
define("_NAMEDENIED","錯誤: 你選的會員名稱的這部份不可以使用:");

?>
