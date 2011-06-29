<?php
####### locale time-format variables #######
define("_CALSHORTDATEFORMAT","%y/%m/%d");
define("_CALLONGDATEFORMAT","%A, %B %d, %Y");
define("_CALMONTHDATEFORMAT","%B %Y");
define("_CALINTERNATIONALDATES",0);    //0 = mm/dd/yyyy, 1 = dd/mm/yyyy
define("_CALTIME24HOUR",0);  // 1 = 24 hour time... 0 = AM/PM time
define("_CALLOCALE","zh_TW");
define("_CALTIMEFORMAT","%I:%M %p"); # ? AM/PM time
define("_CALWEEKBEGINN",0);        # the First Day in the Week: 0 = Sunday, 1 = Monday

####### main texts #######
define("_CALDOTCOLORALL","全部行程");    // desription of all Events (no colordot)
define("_CALSEND","送出");
define("_CALSUBMITEVENT", "建議一個行程");
define("_CALSUBMITNAME", "預定行程投遞表單");
define("_CALNAME", "行事曆");
define("_CALPREVIEW", "預覽行程");
define("_CALOK", "投遞行程");
define("_CALEVENTDATETEXT", "行程日期");
define("_CALSUBSENT", "已收到你的行程");
define("_CALTHANKSSUB", "感謝你的投遞!");
define("_CALSUBTEXT", "我們會在接下來數小時內檢查你投遞的行程, 假如它有意義的關連或有趣, 我們會很快發表它.");
define("_CALSUBTEXTADMIN", "已直接發佈你的文章.");
define("_CALWEHAVESUB", "此刻我們有");
define("_CALWAITING", "等待公佈的行程.");
define("_CALEVENTDATEPREVIEW", "行程日期");
define("_CALCHECKSTORY", "在送出你的行程前, 請檢查文字, 連結等等!");
define("_CALYOURNAME", "你的大名");
define("_CALLOGOUT", "登出");
define("_CALSUBTITLE", "標題");
define("_CALTOPIC", "主題分類");
define("_CALSELECTTOPIC", "選擇分類別");
define("_CALARTICLETEXT", "說明");
define("_CALHTMLISFINE", "可用 HTML 語法, 但請檢查網址與 HTML 標籤!");
define("_CALNEWSUBPREVIEW", "預覽投遞行程");
define("_CALSTORYLOOK", "你的行程看起來像這樣:");
define("_CALBEDESCRIPTIVE", "請說重點, 清楚簡單");
define("_CALSUBPREVIEW", "在你送出行程前, 你必須預覽一次");
define("_CALALLOWEDHTML", "允許 HTML");
define("_CALSUBMISSIONSADMIN", "行程投遞");
define("_CALNEWSUBMISSIONS", "新的行程投遞");
define("_CALNOSUBJECT", "沒有輸入標題!");
define("_CALNOSUBMISSIONS", "沒有新的投遞!");
define("_CALDELETE", "刪除");
define("_CALNAMEFIELD", "名稱");
define("_CALDELETESTORY", "刪除行程");
define("_CALPREVIEWSTORY", "預覽行程");
define("_CALPOSTSTORY", "儲存行程");
define("_CALSUBMITADVICE1", "請在以下空白表單寫你的行程, 並重覆檢查你要投遞的內容.");
define("_CALSUBMITADVICE2", "<br>你被告知不是所有投遞的行程會被公佈.<br>你的投遞會被審核並被站務人員以適當的文法修改.");
define("_CALPOSTEDBY",_POSTEDBY);
define("_CALPOSTEDON",_ON);
define("_CALACCEPTEDBY"," 審核者");
define("_CALcalViewEvent","行事曆");
define("_CALPREVIOUS","前一");
define("_CALNEXT","下一");
define("_CALSTARTTIME","開始時間");
define("_CALENDTIME","結束時間");
define("_CALALLDAYEVENT","整日");
define("_CALTIMEIGNORED","忽略開始與結束時間.");
define("_CALENDDATETEXT","結束日期");
define("_CALENDDATEPREVIEW","結束日期");
#define("_CALBARCOLORTEXT","為此行程選擇一個分類");
define("_CALBARCOLORTEXT","類別");
define("_CALLOGIN","登入");
define("_CALNO",_NO);// USES NUKE VARS no need to translate
define("_CALYES",_YES);// USES NUKE VARS no need to translate
define("_CALREMOVETEST","你確定要移除此行程?");
define("_CALNOTAUTHORIZED1","你無權移除, 或修改此行程");
define("_CALNOTAUTHORIZED2","有任何問題請連絡系統管理員");
define("_CALNOTAUTHORIZED3","很抱歉, 你無權移除, 或修改此行程!");
define("_CALTODAY","今日");
define("_CALLISTDESCRIPTION1","下一個");
define("_CALLISTDESCRIPTION2","行程");
define("_CALLISTSTART","自");
define("_CALLISTRANGE","至");
define("_CALHEADAPPOINTM","約會");
define("_CALDAYEVENTS","行程");
define("_CALDAYMORNING","早上");
define("_CALDAYEVENING","晚上");
define("_CALMORE","其它行程");
define("_CAL1EVENT","行程");
define("_CAL2EVENT","行程");
define("_CAL0EVENTS", "沒有查到行程");
define("_CAL0EVENTSBLOCK", "抱歉, 我們目前沒有預定行程.");
define("_CALNOTODAYEVENTS","今日沒有預定的行程.");
define("_CALADDASARTICLE","文章");
define("_CALADDASARTICLE2","從此行程增加一篇文章.");

####### LINKS ########
define("_CALEVENTLINK","建立一行程");
define("_CALAPPTLINK","建立一約會");
define("_CALTASKLINK","增加一新的工作");
define("_CALDAYLINK","日報表");
define("_CALMONTHLINK","月報表");
define("_CALYEARLINK","年報表");
define("_CALJUMPTOTEXT","跳到以下的報表");
define("_CALJUMPBUTTON","跳至!");
define("_CALLISTLINK","下一行程");

####### MONTHS ######## USES NUKE VARS no need to translate
define("_CALJAN",_JANUARY);
define("_CALFEB",_FEBRUARY);
define("_CALMAR",_MARCH);
define("_CALAPR",_APRIL);
define("_CALMAY",_MAY);
define("_CALJUN",_JUNE);
define("_CALJUL",_JULY);
define("_CALAUG",_AUGUST);
define("_CALSEP",_SEPTEMBER);
define("_CALOCT",_OCTOBER);
define("_CALNOV",_NOVEMBER);
define("_CALDEC",_DECEMBER);

####### DAYS OF THE WEEK ########
define("_CALFIRSTDAY","日");
define("_CALSECONDDAY","一");
define("_CALTHIRDDAY","二");
define("_CALFOURTHDAY","三");
define("_CALFIFTHDAY","四");
define("_CALSIXTHDAY","五");
define("_CALSEVENTHDAY","六");
define("_CALLONGFIRSTDAY","週日");
define("_CALLONGSECONDDAY","週一");
define("_CALLONGTHIRDDAY","週二");
define("_CALLONGFOURTHDAY","週三");
define("_CALLONGFIFTHDAY","週四");
define("_CALLONGSIXTHDAY","週五");
define("_CALLONGSEVENTHDAY","週六");

####### FIELD VALIDATION STRINGS ########
define("_CALVALIDERRORMSG","檢查此內容時發現錯誤!");
define("_CALVALIDFIXMSG","請在你預覽或投遞此內容時修正這些錯誤.");
define("_CALVALIDSUBJECT","'標題' 為必要填入的欄位.");
define("_CALVALIDENDDATE","'結束日期' 格式不正確.");
define("_CALVALIDEVENTDATE","'行程日期' 格式不正確.");
define("_CALVALIDDATES","'結束日期' 必須相等或在 '行程日期' 之後.");
define("_CALVALIDTIMES","'結束時間' 必須在 '開始時間' 之後.");
define("_CALVALIDTOPIC", "請選一主題類別.");

#### TRANSLATE ??????????? #######################################################################
define("_CALINDEX", "顯示右區塊");  
define("_CALTEXTEVENTS", "多日行程的長條圖");  
define("_CALADDARTICLEBOX", "允許排定時間發表的新聞報導");  
define("_CALPOSTUSERS","允許會員公佈約會");
define("_CALUSETOPICS", "套用新聞主題分類");  
define("_CALUSETOPICS1", "是, 不必要的");  
define("_CALUSETOPICS2", "是, 必要的");  
define("_CALDEFAULTVIEW", "預設報表");  
define("_CALMINUTERANGE", "請選擇日期時間的分鐘間隔");  
define("_CALADMINEDITALL", "站長只能管理自己的行程");  
define("_CALADMINMENUSHOW", "使用一般 CMS 管理選單");  
define("_CALADMINTYPE", "管理方式, 那一種方式來管理行程");  
define("_CALLISTCOUNT", "在列表頁面的行程數目");  
define("_CALLISTSHOWSTART", "在列表顯示開始時間");  
define("_CALLISTENDDATE", "在列表顯示結束日期");  
define("_CALLISTENDTIME", "在列表顯示結束時間");  
define("_CALLISTENDDATE2", "顯示結束日期, 如果結束日期與開始日期相同");  
define("_CALLISTBR", "列出報表時, 以線分隔在日期與時間之間");  
define("_CALDAYTIMEARRAY", "日報表時間間隔");  
define("_CALALLOWABLEHTML", "在日期說明允許 HTML 標籤");  
define("_CALONLYWEN", "(只有在結束日期顯示時)");
define("_CALSHOWLINKS","在日報表顯示日期連結");  
define("_CALCALENDARCONFIG", "行事曆設定");  
define("_CALCONF1", "設定無法被儲存!");  
define("_CALCONF2", "設定已儲存!");  
define("_CALCONF3", "檔案");  
define("_CALCONF4", "是寫入保護, <br>設定將不儲存!");  
define("_CALACTIV", "啟用統計");

define("_CALMENUROWS","欄位數");
define("_CALMENUROWS2","在類別清單的欄位數");

define("_CALERREVENTNOTEXIST","資料庫無此行程.");
define("_CALERRSQLERROR","資料庫錯誤!");
define("_CALONLYDEACTIVATE","只限未啟用");
define("_CALDEACTIVATED","未啟用的行程");
define("_CALNODEACTIVATED","沒有未啟用行程");
define("_CALNAVIPREV","返回上一行程");
define("_CALNAVINEXT","下一行程");



/// ab 1.3
define("_CALPRINTER1","列印");
define("_CALPRINTER2","將此頁列印");
define("_CALPOSTANONYMOUS", "允許訪客公告約會");  
define("_CALCATEGORIESADMIN","分類目錄設定");
define("_CALCATEGORIESLANG","選擇語言");
define("_CALADMINMENU","管理選單");
define("_CALSHOWPOPS","以彈出視窗說明行程");
define("_CALSOURCE","來源");
define("_CALGOAL","目標");
define("_CALUSERSAUTOPOST","會員的行程立刻公佈發表");
define("_CALANONYAUTOPOST","訪客的行程立刻公佈發表");

//// ab 1.4
define("_CALHOURS","時");
define("_CALMINUTES","分");
define("_CALDAYS","星期");
define("_CALMONTHS","月");
define("_CALYEARS","年");
define("_CALPLSLOGIN","請先登入");
define("_CALSAVESETT", "儲存");

define("_CALALLWORDS","完全相符[ALL]");
define("_CALANYWORDS","任何字[OR]");
define("_CALSEARCH","搜尋");
define("_CALSEARCHEVENT","搜尋行程");
define("_CALFOR","給");
define("_CALSEARCHTITLE","搜尋行事曆");
define("_CALCQUEUE","你的搜尋結果");
define("_CALTOMUCH1","搜尋結果大於 ");
define("_CALTOMUCH2"," . 請限制搜尋條件.");
define("_CALSEARCHCOUNT", "搜尋結果最大值");  
define("_CALSEARCHTOPICS","在新聞-類別搜尋");
define("_CALMOREOPTIONINF","你可以在此檔中找到行事曆外觀設定的進一步選項:");
define("_CALSEFROMDATE","開始日期");
define("_CALSELCATEGORY","選擇分類");
define("_CALINTHIS","於");
define("_CALNOTOPICS", "沒有可用的類別");
define("_CALGOTOEDIT","再修改");
define("_CALGOTOADMIN","然後到管理選單");
define("_CALGOTOCALENDAR","然後到檢視行事曆");
define("_CALCONFVIEW1","認證 -保全");
define("_CALCONFVIEW2","選項 - 外觀");
define("_CALCONFVIEW3","新聞-報導 -類別");
define("_CALLISTSHOWLINKS","在檢視報表顯示日期連結");  


//// faq
define("_TOP","回頂部");
define("_GOBACK","返回");
define("_CALFAQ","求助");
define("_CALFAQ1","我如何看不同的日期 ?");
define("_CALFAQ2","我只能看 1 個類別嗎 ?");
define("_CALFAQ3","如何使用選擇 ?");
define("_CALFAQ4","我如何才可以閱讀 1 個行程的更多資訊 ?");
define("_CALFAQ5","我要如何才能列印行事曆頁面 ?");
define("_CALFAQ6","搜尋如何運作 ?");
define("_CALFAQ7","我可以建立行程嗎 ?");
define("_CALFAQ8","我可以修改或刪除行程嗎 ?");
define("_CALFAQ9","...");

define("_CALFAQA1","To change the calendar to show a different date, select an appropriate Month, Day and/or Year, and when the date is showing correctly correct click the Jump! Button to reset the calendar around your chosen date.  Repeat this as often as necessary to scan the dates that you are interested in.  To return to Today's date, you can use the shortcut Today button.");

define("_CALFAQA2","By default the Calendar displays all Categories on the same calendar.  If you are only interested in one of the Categories, then you can select the category from the pull-down menu, or click on the Category keyword below the calendar display.  To return to default All Categories mode, select All in the Category menu, or click on the All Events button.");

define("_CALFAQA3","The Select pull-down menu lets you chose how much of the calendar period you see on the page. <br><br>\r\n\r\nDay View - displays just information on events and appointments for the currently selected date.  Events are defined as all day Appointments.  This allows the maximum amount of detail on the events/appointments to be shown.<br><br>\r\n\r\nMonth View - displays the events for the entire currently selected month.  Today's date is always highlighted.  Only the times, titles and color keys are shown for each event.<br><br>\r\n\r\nYear View - displays the entire currently selected year, but only the date numbers are shown for each day.  Today's date is always highlighted.  A box is drawn around each day for which there is 1 or more events or appointments booked.  Clicking on any date will take you to the Day View for that date.<br><br>\r\n\r\nNext Event View - unlike the other views, this focuses on Events not dates, and will list the next few events/appointments following the currently selected date.  Thus entering a date of, say, April 1, 2004 may return an Event for May 1, 2004 if that is the first available event.<br><br>\r\n\r\nThe default view is typically the Month View, but can be set by the website's Administrator.");

define("_CALFAQA4","To see some more detail on any event in any of the Next Event, Day or Month Views, simply hover your mouse over the Event's Title.  A pop-over display will give a few lines of detail from the event's information.<br><br>\r\n\r\nFor a full view of the entire information for an event, you will need to click on the Event's Title.  To return to the prior view, click on the Jump! button, changing the date first if you wish to go to a different date.<br><br>\r\n\r\n[Javascript must be enabled on your browser for the pop-over display to function.]");

define("_CALFAQA5","Prior to printing your calendar, set up the date and view to suit your requirements, then click on the Print button.  A pop-up window will appear containing just the calendar information, with little or no graphical information.  You can print the window using your browser's normal print functions, or click the provided Send to printer button.  After it has printed, you may close the pop-up window.<br><br>\r\n\r\n[The print pop-up window should open even if you have a pop-up blocker in place, because the pop-up is being requested locally.  However some pop-up blockers may prevent this print function from operating unless temporarily or permanently disabled for this site.]");

define("_CALFAQA6","To search for an event you will need to know one or more words from the Event's Title and/or Description.  Click on the Search Events button to display the search conditions page.<br><br>\r\n\r\nEnter 1 or more words in the Search for: field.  More words will reduce the accuracy of the search results, but may result in 0 results returned.  If entering more than 1 word, select the type of search required from the adjacent pull-down menu - All words if each and every word must be present somewhere in the Event's Title or Description (the AND condition); or Any words if you want to see all Event's that contain any 1 of the listed words in their Title or Description (the OR condition).<br><br>\r\n\r\nSelect the start date for the search - the search will not return any matches for Events earlier than this date.  The default start date is always Today's date.<br><br>\r\n\r\nTo optionally narrow the search to a specific Category, select a Category.  Only the selected Category will be searched.  To search all Categories, leave this pull-down at its default setting.<br><br>\r\n\r\nThe search is not case sensitive.\r\n\r\nTo return to your prior view after the search has completed, click the Jump! button.");

define("_CALFAQA7","Depending on your privileges, you may be able to create and submit an event directly to the Calendar, suggest an event for later inclusion in the Calendar following appropriate approvals by your Administrator, or you may not be able to suggest an event at all.<br><br>\r\n\r\nIf you have the necessary privileges you will see a Suggest an Event button between the Search Event and Print buttons.<br><br>\r\n\r\nThe Suggest an Event page has a number of fields, some of which may or may not be present for you, depending again on your privileges:<br><br>\r\n\r\nYour Name - if you are already logged in to the site, this field will have been preset.<br><br>\r\n\r\nSubject - Enter a short descriptive title.<br><br>\r\n\r\nEvent Date - Select the start date and time.<br><br>\r\n\r\nEnd Date - Unless you check the All day checkbox (see below), select the end date and time.  The End Date/Time must be equal to or later than the Start Date/Time.<br><br>\r\n\r\nAll day - Check this box if you want the Event to occupy the entire day.  The End Date/Time will be disregarded if you select this option.<br><br>\r\n\r\nDescription - Enter your description for the event.<br><br>\r\n\r\nCategory - Select the appropriate Category.<br><br>\r\n\r\nTopic - Select the appropriate Topic for your event.<br><br>\r\n\r\nArticle - Check this box if you would like a News Story submitted automatically from the Title and Description of your Event.  Note that any News story will probably need to be separately approved by your Administrator before it appears in the News.<br><br>\r\n\r\nSet active - Select No if you do not want this event to be visible in the Calendar at this time.<br><br>\r\n\r\nSubmit - Select Preview Event at least once before selecting Save Event, in order to check formatting, included links, etc.  You must select Save Event and click Submit before you leave your browser page in order to save your Event in the Calendar.<br><br>\r\n\r\nAny errors with your submission will be reported to you immediately on submitting your Preview, or Save, Event.<br><br>\r\n\r\nDepending on your privileges, you will either see the event posted in the Calendar, or be advised that your event is scheduled for approval by the administrator(s).");


define("_CALFAQA8","To edit or delete an event, click on the Event's Title.  If you have sufficient privileges to edit or delete this event, appropriate icons will be displayed below the Event's information panel.");
define("_CALFAQA9","");
define("_CALFAQA10","");
?>