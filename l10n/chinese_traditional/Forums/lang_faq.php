<?php
/*************************************************
 *                          lang_faq.php [english]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_faq.php,v 9.2 2006/02/12 16:01:43 djmaze Exp $
 *
 *
 *********************************************************/

/*************************************************
 *                            Traditional Chinese Translation [繁體中文語系] 
 *                              -------------------
 *     begin                : Thu Nov 26 2001
 *     by                   : 小竹子, OOHOO, 皇家騎士, 思
 *     email                : kyo.yoshika@msa.hinet.net
 *                            webdev@hotmail.com
 *                            sjwu1@ms12.hinet.net
 *                            f8806077@mail.dyu.edu.tw
 *
 *     last modify          : Sun Dec 30 2001
 *                             
 *********************************************************/

/*************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *********************************************************/
 
// 
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\"
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//
 
  
$faq[] = array("--","登入及註冊的問題");
$faq[] = array("我為什麼不能登入?", "您有註冊嗎? 您必須要先註冊才能登入. 如果您是被封鎖了 (假如您有看到這個訊息)? 如果是這樣, 您必須聯絡管理人員, 找出問題的所在. 如果您已經註冊了, 而且也沒有被禁止進入, 那麼您必須再次檢查您的會員帳號及密碼. 這是一個很常見的問題, 若不是此問題, 請儘速聯絡管理人員, 也許是他們的設定發生錯誤了.");
$faq[] = array("為什麼我要註冊呢?", "您不一定要這麼做, 這是由討論版的管理人員所決定的, 您必須註冊後才能在版上發表文章. 對於註冊成功的會員, 系統將會允許您使用一些完整的討論版的功能, 這些功能是未註冊的訪客所無法使用的, 例如: 可自行定義的個人圖像, 私人訊息, 會員之間的電子郵件發送, 使用者群組的認證 ...等等. 建議您註冊成為正式會員, 因為那只需要花您一點點的時間而已.");
$faq[] = array("為什麼我會自動登出?", "如果您沒有勾選 <i>自動登入</i> 的選項, 當您登入討論版時, 系統只會允許您停留一會兒 (系統預設的SESSION時間). 這樣是為了防止別人誤用您的帳號. 若您想長期處於登入的狀態, 請勾選那個選項. 若您是使用共用的電腦時, 我們就不建議您勾選這個選項了, 例如: 圖書館,網咖,大學的校園內...等等.");
$faq[] = array("我該如何讓我的使用者帳號, 不要出現於線上使用者的列表中呢?", "在您的個人資料中, 您可以發現一個 <i>隱藏您的狀態</i> 的選項, 若您選擇此功能, 您在線上狀態就只有討論版管理員及您自己知道. 您將成為一個隱形會員");
$faq[] = array("我遺失密碼了, 該怎麼辦!", "不要擔心! 當您無法找回您的密碼時, 系統可以為您重設. 請到登入畫面下, 並按下 <u>忘記密碼</u>, 此功能將能讓您儘快的回到討論版");
$faq[] = array("我已經註冊了, 但是卻不能登入!", "首先, 先確認您輸入的是正確的帳號和密碼. 如果都沒有問題的話, 或許是以下兩種情形之一. 若 COPPA 的功能啟動了, 而且您在註冊時按下了 <u>我未滿十三歲</u> 的連結, 您必須按照您所收到的程序說明啟用您的帳號. 若是這樣還沒解決問題的話, 是否您的帳號需要啟用呢? 有一些討論版在註冊程序完成後需要啟用帳號 (會員自行啟用或由系統管理員為您啟用)? 如果您已收到了確認信, 請按照您所收到的程序說明啟用您的帳號. 如果您沒有收到確認信, 請檢查您的電子郵件信箱是否填寫正確? 另一個沒收到信的原因,可能是您所使用的電子郵件網域被系統封鎖了, 這是為了防止討論版遭受濫用. 如果您確定電子郵件地址無誤的話, 請向討論版管理人員聯繫以取得答案.");
$faq[] = array("我已經按照以上步驟註冊, 但是還是無法登入?!", "最有可能的原因是您輸入的帳號和名稱並不正確 (在註冊後請至電子信箱收取確認信) 或是討論版管理人員因為某些原因刪除了您的帳號. 如果為後者的話, 很有可能是因為您並未發表任何文章所導致? 通常討論版會定期刪除一些沒有發表任何文章的會員, 來降低資料庫的使用量. 試著重新再註冊一次, 並參與討論吧!!");


$faq[] = array("--","使用者的偏好設定");
$faq[] = array("我要如何更改我的設定呢?", "您所有的設定(如果您已經註冊成功的話)都已經被儲存在資料庫裡. 如欲修改設定請點選 <u>個人資料</u> 的連結(在預設首頁的上方但是您也可以不變更設定). 這樣將會允許您改變您所有的設定值");
$faq[] = array("討論版顯示的時間不正確!", "討論版的時間可以確定是沒有問題的, 然而若您來自於跟討論區不同時區的地方時, 就有可能發生時間顯示錯誤. 假如您遇到這個問題的話請到您的個人資料裡面更改符合您所在地時區的設定, 例如: London (倫敦), Paris (巴黎), New York (紐約), Sydney (雪梨)... 等等.  請注意只有註冊會員可以變更時區設定, 假如您尚未註冊的話, 請趕緊註冊, 不然您就必須容許這個錯誤的存在!");
$faq[] = array("我已經更改時區了, 但是時間依然是錯誤的!", "如果您確定您設定的時區正確, 然而版面時間仍然是錯誤的話, 最接近的答案是 \"日光節約時間\" (或 \"夏日時間\" 就如英國和其它地方的表示一樣). 討論版不被設計來處理日光時間與正常時間之間的轉換問題, 所以在夏天的月份時間與正確時間相比, 或許會有大約一個小時的差距.");
$faq[] = array("語系清單中沒有我的語系!", "最有可能的原因應該是, 討論版管理人員沒有安裝您的語系或在此討論版上並沒有人翻譯您的語系. 試著連繫系統管理員是否能安裝您需要的語系檔, 如果這檔案是不存在的, 請試著建立新的翻譯語系. 更多的資訊會在 phpBB Group website 裡被找到 (請按頁面上的按鈕連結)");
$faq[] = array("要如何在我的帳號下秀出個人圖像?", "在觀看文章時可能有兩個圖像在帳號下. 首先的圖像是關於您的 \"群組&身分\", 一般而言,這些會是版面上的星星或者是區塊, 用來顯示您已發表了多少篇文章, 或是您在版面上的某些 \"狀態\". 在此之下, 或許是一個很大的個人圖像, 一般而言這圖像是獨一無二的或可以代表個人的. 這將取決於系統管理員, 是否有啟動這個圖像功能, 而且他們具有選擇圖像限制的權利. 如果您無法使用個人圖像, 這是系統管理員所決定的, 所以您可以詢間他們原因為何? (我們相信他們會為您解釋的!)");
$faq[] = array("要如何改變我的等級?", "基本上您無法直接更改任何有關階級身分的顯示文字 (階級身分將在您所發表的文章標題的帳號下顯示出來, 並且您的個人資料將使用此身分風格). 許多討論版使用階級身分功能去指出哪些文章是您所發表的, 並且鑑定您是否為可疑的使用者, 例如: 版主跟討論區管理者都有個特別的身分. 請不要為了提升您的身分而胡亂張貼文章, 您將會因此而看到版主或討論版管理人員將您的文章標上警告標語.");
$faq[] = array("當我按下使用者電子郵件連結時, 系統會要求要登入?", "很抱歉, 只有註冊的會員才能夠經由內建的電子郵件發送功能, 發送電子郵件 (如果系統管理員有啟動這個功能). 這是為了防止匿名訪客惡意的使用電子郵件系統.");


$faq[] = array("--","張貼文章的問題");
$faq[] = array("我該如何在版面上發表一篇新的主題?", "很簡單, 只需按下討論版面或主題版面內的發表文章按鈕即可. 當您發表文章時, 必須要先註冊成為會員, 您所能使用的討論版功能將列在畫面下方 (這列表包含了 <i>您可以發表新的話題, 您可以發起投票...等等<i>.)");
$faq[] = array("我要如何編輯或是刪除文章??", "除非您為系統管理員或是討論版管理人員, 不然您只可以編輯或刪除您所發表的文章. 您可以按下標題旁的 \"編輯\" 的按鈕來編輯一篇文章 (有時候只能在文章發表後限制的時間內). 如果有人已經回覆您的文章時, 當您回到主題時, 您將會發現在您所發表的文章下方有一小塊文字資訊出現, 那些資訊列出了您所編輯文章的那個時間.當沒有人回覆您的文章時, 那些資訊將不會出現, 當版主或是系統管理員編輯您的文章時, 這些資訊也不會出現 (管理者將會給您一個訊息說明為何要修改您的文章). 請注意, 普通會員沒有辦法刪除已經有人回覆的文章.");
$faq[] = array("我要如何建立個人的簽名檔?", "若想要在您張貼的文章下顯示您的簽名檔, 您必須先經由個人資料區建立一個簽名檔. 當建立好簽名檔後, 您可以在發表文章下的選項內, 勾選 <i>附上簽名</i> 的選項來附加您的簽名檔. 您也可以在您的個人資料內選取 \"發表文章時附加簽名檔\" 的選項 (這樣可以預防您再發表文章時, 忘了勾選 \"附加簽名\" 的選項, 而沒有顯示個人的簽名檔)");
$faq[] = array("我要如何建立投票?", "建立投票是很簡單的, 當您發表一個新主題時 (或修改之前發表文章的主題, 如果您被允許的話), 您可以在主要發表欄裡看到 \"加入投票\" 的選項 (如果您不能看到這項功能, 或許是因為您沒有建立投票的權利). 您必須輸入一個投票的標題並且至少要有兩個選項 (要設定選項請在投票問題內輸文並且按下 '增加選項' 的按鈕. 您可以同時設定投票期限, 0 是代表無限期的投票. 而選項的數量也許會由討論版管理人員設定限制");
$faq[] = array("我如何修改或刪除投票?", "跟文章一樣, 投票可以被文章發表者, 系統管理或是討論版管理人員所修改. 要修改投票請按下主題的第一篇發表文章 (這裡通常與投票相連). 如果沒有人放棄投票的話, 使用者可以刪除或修改投票的項目, 無論如何, 如果已經有人投票, 就只有系統管理員或是版面管理人員可以修改或刪除. 這是為了預防在投票過程中途更改意見而產生錯誤的投票");
$faq[] = array("為什麼我不能進入版面?", "一些版面也許是有限制會員或是群組進入的. 要瀏覽, 讀取, 發表...等等功能, 您必須要有特別的授權, 只有系統管理員和版面管理人員才能准許這個申請, 您必須聯繫他們試試.");
$faq[] = array("為什麼我不能投票?", "只有已註冊的會員能夠使用投票的功能 (一樣是為了避免錯誤的結果出現). 如果您已經註冊但是仍然無法投票的話, 您也許沒有被允許使用這個功能.");


$faq[] = array("--","版面和主題形式");
$faq[] = array("什麼是 BBCode?", "BBCode 是一種整合HTML的特別語法, 您可不可以使用 BBCode 取決於系統管理員的開放與否  (您也可以在每個版面的發表中取消這個功能). BBCode 的型式類似 HTML, Tags可以用 [ 及 ] 包含著而不需要使用 &lt; 及 &gt; 而且也提供了較佳的操作性方便使用者控制版面的編排. 要找尋更多的 BBCode 資訊, 從發表的頁面會提示您如何使用.");
$faq[] = array("我可以使用 HTML 嗎?", "這個取決於系統管理員的開放與否, 他們擁有完全的權力. 如果您被允許使用的話, 您可以發覺到其具有標示的功能, 這是個 <i>安全的</i> 保護措施來預防會員在版上發表漫罵等會造成其他會員困擾的文章. 如果 HTML 是啟用的, 您可以在發表的文章上取消這個功能.");
$faq[] = array("什麼是表情符號?", "表情符號, 或情緒符號是一個小的圖形符號用以表現一種情緒, 例如: :)  表示快樂, :( 表示沮喪. 所有的表情符號可以在發表文章的版面找到. 試著不要過度使用這個表情符號, 他們可能會造成文章閱讀的不便而使得版主必須修改或是移除掉這些符號");
$faq[] = array("我可以貼圖嗎?", "圖像可以在您的發表的文章中出現, 您不一定要把圖像上傳到討論版上, 您只要指定圖像的連結位置, 例如: http://some-unknown-place.net/my-picture.gif. 您不能將路徑指向您的電腦中 (除非您的電腦是開放性的伺服器) 以及將圖像存在需要確認的主機中, 例如: hotmail 或是 yahoo 的信箱, 以及需要確認密碼的地方, 等等. 要顯示圖像必須使用 BBCode [img] 標示或使用 HTML (如果允許的話).");
$faq[] = array("什麼是公告?", "公告通常包含重要的訊息, 您必須儘可能的去閱讀所有的公告. 公告可以在每個版面的最上方找到. 您要發布公告則視您的權限程度, 這也是取決於系統管理員.");
$faq[] = array("什麼是置頂主題?", "置頂主題可以在在公告之下一般文章之上的位置找到. 他們通常是重要的, 所以您也必須儘可能的去閱讀它. 就如同公告一般, 版面管理人員會決定什麼是重要的文章, 來置於版面的頂端.");
$faq[] = array("什麼是鎖定的主題?", "鎖定的主題通常是由版主或是討論版管理人員所設定. 您不能在鎖定的主題中回覆文章, 而且所有的投票都會終止. 主題可能由許多的原因而被鎖定.");


$faq[] = array("--","會員等級及群組");
$faq[] = array("什麼是系統管理員?", "系統管理員被設定為擁有版面最高管理權限的人員. 系統管理人員可以控制討論版上的基本設定包括允許, 封鎖帳號, 建立群組或選擇版面管理者等等. 他們也擁有版面管理者的完全權力.");
$faq[] = array("什麼是版面管理員?", "版面管理員是一個獨立的 (或是群組), 其工作是管理版面 . 版面管理員擁有權力去修改, 刪除, 鎖定, 開放, 移動或分割版面的文章. 一般來說, 版面管理人員是預防會員發表上的錯誤, 離題或是有爭議性的文章.");
$faq[] = array("什麼是會員群組?", "會員群組是討論版管理員分組管理會員的一種方法 (這是和其它許多討論版不同的地方) 而且每個群組可以設定不同的權力. 這可以讓系統管理員更容易的去建立數個類似版主功能的帳號管理者, 或是讓限定群組進入限制版面等等.");
$faq[] = array("我該如何加入一個群組?", "要加入一個群組請按頁面上的會員群組連結 (由版面設計而決定), 您可以預覽所有的群組. 但是不是所有的群組都是'開放性'的, 有些是封閉群組或隱藏群組. 如果討論版是開放的, 您可以按申請鈕來要求加入. 而群組管理者將處理您的要求, 他們或許會問您為什麼要加入這個群組. 如果不幸申請駁回, 請不要一直重覆申請, 因為群組管理者有其考量 .");
$faq[] = array("我要如何成為一個群組管理者呢?", "會員群組都是由討論版管理者所建立, 同樣的版面管理者也是由其指派. 如果您對於建立一個群組很有興趣您可以寄訊息聯絡系統管理員.");


$faq[] = array("--","私人訊息");
$faq[] = array("我無法寄出私人訊息!", "有三個可能性; 您可能沒有登入, 系統管理員關閉了寄送私人訊息功能或是版面管理員設定您無法寄出訊息. 請聯絡管理人員詢問原因.");
$faq[] = array("我持續收到不想要的私人訊息!", "在私人訊息系統中您可以將其加入黑名單. 如果您還是持續收到由某人發送的不受歡迎私人訊息請通知管理人員, 他們可以幫助您避免持續受到這種騷擾.");
$faq[] = array("我持續收到由討論版某人寄出的漫罵信件!", "很抱歉聽到這個消息. 這個討論版的電子信件包含安全防護用以查出發信者. 您可以轉寄這封信給管理員, 這是一件很重大的事件 (寄出這封信的發信者清單). 他們會採取實際的行動.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","phpBB 2 聲明");
$faq[] = array("誰寫了這個討論版?", "這個程式 (未經修改的格式) 由 phpBB Group 所開發及釋出, 著作版權歸 <a href=\"http://phpbb.com/\" target=\"_blank\">phpBB Group</a> 所有. 依照「革奴大眾公有版權」(GNU General Public License) 的聲明, 這個程式可以自由的使用及散布, 如果您需要更多的資訊可以參考 <a href=\"http://gnu.org/copyleft/gpl.html\" target=\"_blank\">GNU General Public License</a>.");
$faq[] = array("為什麼不能使用更多的功能 ?", "這個軟體是由 phpBB Group 所製作. 如果您認為需要加入更多功能請參觀 phpbb.com website 的說明. 請不要發表進階功能要求到 phpbb.com 的討論版, 這會使得開發小組分心無法致力新功能的開發. 請在版面瀏覽, 如果有任何我們已開發且經過測試的程式我們會放在版面上的.");
$faq[] = array("我該向誰聯繫有關這個討論版誤用或法律上的相關事務?", "您可以連絡這個討論版的管理者. 如果您不能找到這個版面的管理者以尋求更進一步的的聯繫. 如果您連絡管理者之後仍然沒有回應 (尋找 whois ) 或者其是屬於一個執行中的免費服務 (例如: yahoo, free.fr, f2s.com...等等), 管理者或誤用此服務的部門. 請記住 phpBB Group 是完全沒有控制權而且完全不負任何責任的, 這個討論版位居何處以及何人擁有. 在相關法令下, 完全沒有向 phpBB Group 指示 (cease and desist, liable, defamatory comment...等等). 也許不是直接由 phpbb.com website 路徑而得, 或者是只有 phpBB 此軟體的部份而已. 如果您 email 到 phpBB Group 有關任何第三者使用軟體上的問題, 您的答案將會非常簡單或是根本不予回應.");

//
// This ends the FAQ entries
//

