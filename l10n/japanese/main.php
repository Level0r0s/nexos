<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/japanese/main.php,v $
  $Revision: 9.34 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:52 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','jp');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%b %d日 (%a) @ %T %Z');
define('_DATESTRING2','%b %d日 (%a)');
define('_DATESTRING3','%Y-%b-%d');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','次ページ');
define('_PREVIOUSPAGE','前ページ');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','検索');
define('_LOGIN','ログイン');
define('_WRITES','投稿');
define('_POSTEDON','投稿日');
define('_NICKNAME','ユーザー名');
define('_PASSWORD','パスワード');
define('_WELCOMETO','ようこそ ');
define('_EDIT','編集');
define('_DELETE','削除');
define('_POSTEDBY','投稿者：');
define('_READS','閲覧数');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">戻る</a>' : '<a href="javascript:history.go(-1)">戻る</a>').' ]');
define('_COMMENTS','コメント');
define('_PASTARTICLES','過去記事');
define('_OLDERARTICLES','古い記事');
define('_BY','書いた人：');
define('_ON','日付');
define('_LOGOUT','ログアウト');
define('_WAITINGCONT','承認待ちコンテンツ');
define('_WREVIEWS','レビュー');
define('_WLINKS','リンク');
define('_ONEDAY','今日のお知らせ...');
define('_ASREGISTERED','まだアカウントをお持ちではありませんか？ <a href="'.getlink("Your_Account").'">こちらから登録できます</a>。登録ユーザーになると、外観の変更やコメントの設定、自分の名前でコメントの投稿ができるなど、さまざまな特典があります。');
define('_MENUFOR','ユーザー用メニュー：');
define('_NOBIGSTORY','今日はまだ特ダネはありません。');
define('_BIGSTORY','本日もっとも読まれた記事：');
define('_SURVEY','調査');
define('_POLLS','投票');
define('_PCOMMENTS','コメント：');
define('_RESULTS','結果');
define('_HREADMORE','もっと読む');
define('_CURRENTLY','現在');
define('_GUESTS','人のゲストと');
define('_MEMBERS','人のメンバーがオンライン中です');
define('_YOUARELOGGED','あなたのログイン名：');
define('_YOUHAVE','新しいプライベートメッセージが');
define('_PRIVATEMSG','通のプライベートメッセージがあります');
define('_YOUAREANON','あなたは未登録ユーザーです。<a href="'.getlink("Your_Account").'">こちらをクリック</a>すれば無料で登録することができます。');
define('_NOTE','注：');
define('_ADMIN','管理者：');
define('_WERECEIVED','これまでに');
define('_PAGESVIEWS','ページビューがありました。カウント開始日：');
define('_TOPIC','トピック');
define('_UDOWNLOADS','ダウンロード');
define('_VOTE','投票');
define('_VOTES','投票');
define('_MVIEWADMIN','閲覧可能：管理者のみ');
define('_MVIEWUSERS','閲覧可能：登録ユーザーのみ');
define('_MVIEWANON','閲覧可能：未登録ユーザーのみ');
define('_MVIEWALL','閲覧可能：全ての訪問者');
define('_EXPIRELESSHOUR','掲載期限：１時間以内');
define('_EXPIREIN','掲載期限');
define('_UNLIMITED','無制限');
define('_HOURS','時間');
define('_RSSPROBLEM','現在、このサイトからのヘッドラインに問題が発生しています');
define('_SELECTLANGUAGE','言語の選択');
define('_SELECTGUILANG','表示する言語を選択してください：');
define('_NONE','なし');
define('_BLOCKPROBLEM','<center>現在このブロックに問題が発生しています。</center>');
define('_BLOCKPROBLEM2','<center>今のところこのブロックにはまだコンテンツがありません。</center>');
define('_MODULENOTACTIVE','申し訳ありません、この機能は現在ご利用できません。');
define('_NOACTIVEMODULES','非アクティブなモジュール');
define('_MODULENOEXIST','申し訳ありません、リクエストされた%sは削除されています。');
define('_FORADMINTESTS','(管理者テスト用)');
define('_BBFORUMS','フォーラム');
define('_ACCESSDENIED','アクセスできません');
define('_RESTRICTEDAREA','閲覧禁止エリアにアクセスしようとしています。');
define('_MODULEUSERS','申し訳ありません、こちらは<i>登録メンバーのみ</i>ご利用いただけます。<br /><br /><a href="modules.php?name=Your_Account&op=new_user">こちらから</a>無料で登録されると<br />このセクションをご利用いただけます。よろしくお願いいたします。<br /><br />');
define('_MODULEUSERS2','You can register for free by following <a href="\'.getlink(\'Your_Account&amp;file=register\').\'">this</a> link, thus granting you permission to access this area of our site.<br /><br />Thank you for your understanding');
define('_MODULESADMINS','申し訳ありません、こちらは<i>管理者のみ</i>閲覧できます。<br /><br />');
define('_MODULESGROUPS','グループのみ閲覧できます。');
define('_HOME','トップへ');
define('_HOMEPROBLEM','大問題発生：トップページがありません！');
define('_ADDAHOME','ホームにモジュールを追加する');
define('_HOMEPROBLEMUSER','現在トラブルが発生したため当サイトをご利用いただけません。後ほどまたお越し下さい。');
define('_MORENEWS','記事の全文');
define('_ALLCATEGORIES','全カテゴリー');
define('_SPAMGUARDPROTECTED','スパム防止機能によりこのメールは送信できません');
define('_M_CHARS','最大文字数： %s');

define('_SYS_MESSAGE','システムメッセージ');
define('_SYS_MESSAGES','システムメッセージ');
define('_SYS_MAINTENANCE','メンテナンスモードで実行されています');
define('_SYS_DEMO','管理者デモモードで実行されています<br />データベースは変更できません<br /><a href="'.adminlink('logout').'">ログアウト</a>');

define('_DATE','日付');
define('_HOUR','時間');
define('_UMONTH','月');
define('_YEAR','年');
define('_JANUARY','１月');
define('_FEBRUARY','２月');
define('_MARCH','３月');
define('_APRIL','４月');
define('_MAY','５月');
define('_JUNE','６月');
define('_JULY','７月');
define('_AUGUST','８月');
define('_SEPTEMBER','９月');
define('_OCTOBER','１０月');
define('_NOVEMBER','１１月');
define('_DECEMBER','１２月');

define('_MONDAY','月曜日');
define('_TUESDAY','火曜日');
define('_WEDNESDAY','水曜日');
define('_THURSDAY','木曜日');
define('_FRIDAY','金曜日');
define('_SATURDAY','土曜日');
define('_SUNDAY','日曜日');

define('_ABR_MONDAY','月');
define('_ABR_TUESDAY','火');
define('_ABR_WEDNESDAY','水');
define('_ABR_THURSDAY','木');
define('_ABR_FRIDAY','金');
define('_ABR_SATURDAY','土');
define('_ABR_SUNDAY','日');

define('_BWEL','ようこそ');
define('_BPM','プライベートメッセージ');
define('_BUNREAD','未読');
define('_BREAD','既読');
define('_BMEMP','メンバー登録');
define('_BLATEST','最新');
define('_BTD','本日新規登録者');
define('_BYD','昨日新規登録者');
define('_BOVER','全体');
define('_BVISIT','オンライン中');
define('_BVIS','ゲスト');
define('_BMEM','メンバー');
define('_BTT','合計');
define('_BON','オンライン中');
define('_BREG','登録');
define('_BROADCAST','公開メッセージを出す');
define('_BROADCASTFROM','メッセージの送り主：');
define('_TURNOFFMSG','公開メッセージをオフにする');
define('_JOURNAL','ブログ');
define('_READMYJOURNAL','このユーザーの ブログ を読む');
define('_ADD','追加');
define('_YES','はい');
define('_NO','いいえ');
define('_INVISIBLEMODULES','隠しモジュール');
define('_ACTIVEBUTNOTSEE','(アクティブです)');
define('_BOTS','自動巡回');

define('_UM','Dragonfly Update Monitor');
define('_UM_F','Dragonfly Updateにアクセスできません、少し待ってからアクセスしてください。');
define('_UM_G','最新の Dragonfly を使用しています');
define('_UM_R','Dragonfly %1$sへ<a href="%2$s" target="_blank">バージョンアップ</a>');

define('_TEAM','チーム');
define('_LINKAPPROVEDMSG','Congratulations! The web link you submitted has been approved. Please link back to us and send an email with the url where you have done so.');
define('_MODREQLINKS','リンク先の評価');
define('_BROKENLINKS','無効リンク管理');
define('_MODREQDOWN','ダウンロードファイル管理');
define('_BROKENDOWN','無効ダウンロード管理');
define('_PAGEGENERATION','ページ作成時間：');
define('_SECONDS','秒');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Page Generation in %1$s seconds and %2$s DB Queries in %3$s seconds');
define('_YOUHAVEONEMSG','新しいプライベートメッセージが１通あります');
define('_NEWPMSG','通あります');
define('_CONTRIBUTEDBY','Contributed by');
define('_CHAT','チャット');
define('_REGISTERED','登録ユーザー');
define('_CHATGUESTS','ゲスト');
define('_USERSTALKINGNOW','チャット中のユーザー');
define('_ENTERTOCHAT','チャットに参加');
define('_CHATROOMS','利用できるチャットルーム');
define('_ALLTOPICS','全トピック');
define('_ASSOTOPIC','関連トピック');
define('_HELLO','こんにちは');
define('_ALL','全て');
define('_URL','URL');
define('_SUBJECT','タイトル');
define('_PREVIEW','プレビュー');
define('_SEND','送信');
define('_ANONYMOUS','ゲスト');
define('_BREADCRUMB', 'Breadcrumb Delimiter, separates words in pagetitles');
define('_BC_DELIM',''.isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&rsaquo;');//''. is for cpglang
define('_RESET','リセット');
define('_AT','at');
define('_LASTMSGS','Last %s Forum Messages');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','印刷用表示');

define('_CREDITS_TITLE','Credits');
define('_CREDITS_PRODUCT','Product');
define('_CREDITS_DESC','Description');
define('_CREDITS_AUTHORS','Author(s)');

define('_PP_TITLE','プライバシーポリシー');
define('_PP_MODIFY','Modify this message');

define('_SENDERNAME','送信者の名前');
define('_SENDEREMAIL','送信者のメールアドレス');
define('_RECIPIENTNAME','受信者の名前');
define('_RECIPIENTEMAIL','受信者のメールアドレス');

define('_REASONS_0','As Is');
define('_REASONS_1','Off Topic');
define('_REASONS_2','Flamebait');
define('_REASONS_3','Troll');
define('_REASONS_4','Redundant');
define('_REASONS_5','Insightful');
define('_REASONS_6','Interesting');
define('_REASONS_7','Informative');
define('_REASONS_8','Funny');
define('_REASONS_9','Overrated');
define('_REASONS_10','Underrated');

/* My Account Tools Block */
define('_TB_BLOCK','My Account Tools');
define('_TB_TASKS','Tasks');
define('_TB_INFO','Information');
define('_TB_PROFILE_INFO','My public profile');
define('_TB_EDIT_PROFILE','My profile information');
define('_TB_EDIT_REG','My registration details');
define('_TB_EDIT_PRIVATE','My private information');
define('_TB_EDIT_AVATAR','My avatar');
define('_TB_DELETE','Delete my account');
define('_TB_CONFIG','コンフィギュレーション');
define('_TB_EDIT_PREFS','My preferences');
define('_TB_EDIT_HOME','サイト設定');
define('_TB_EDIT_COMM','コメント設定');
define('_TB_PERSONAL','パーソナル');
define('_TB_PERSONAL_GALLERY','マイギャラリー');
define('_TB_PERSONAL_JOURNAL','マイジャーナル');
define('_TB_PRIVMSGS','私書箱');
define('_TB_PRIVMSGS_INBOX','受信箱');
define('_TB_PRIVMSGS_OUTBOX','送信済箱');
define('_TB_PRIVMSGS_SENTBOX','未送信箱');
define('_TB_PRIVMSGS_SAVEBOX','保存箱');
define('_TB_PRIVMSGS_SEND','メッセージを送信');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','ユーザー情報');
define('_SECURITYCODE','セキュリティコード');
define('_TYPESECCODE','セキュリティコードを入力');
define('_MEMBERSOPTIONS','メンバーオプション');
define('_READSEND','Read my private messages. Send messages to others.');
define('_INBOX','Inbox');
define('_NEW','New');
define('_ACCOUNTOPTIONS','My Account. Update preferences and read my messages.');
define('_LOGOUTACCT','Log out of this account.');
define('_LOGOUTADMINACCT','Log out of admin account.');
define('_BLOGIN','Your Account');
define('_BFLOGIN','My Profile');
define('_BHID','Hidden');
define('_WHOWHERE','Who Is Where');
define('_STAFFONL','Staff Online');
define('_STAFFNONE','No staff members are online!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Community');
define('_BlogsLANG','ブログ');
define('_ContentLANG','Content');
define('_coppermineLANG','写真集');
define('_CPGlangLANG','翻訳を手伝う');
define('_DownloadsLANG','ダウンロード');
define('_EncyclopediaLANG','Encyclopedia');
define('_ForumsLANG','Community Forums');
define('_ContactLANG','お問い合わせ');
define('_FAQLANG','FAQ - Help');
define('_Members_ListLANG','登録者一覧');
define('_NewsLANG','ニュース');
define('_ReviewsLANG','レビュー');
define('_SearchLANG','検索');
define('_StatisticsLANG','統計');
define('_Stories_ArchiveLANG','過去ログ');
define('_Submit_NewsLANG','ニュース投稿');
define('_SurveysLANG','調査');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','トピック');
define('_Private_MessagesLANG','私書箱');
define('_Tell_a_FriendLANG','友達に教える');
define('_Web_LinksLANG','リンク集');
define('_Your_AccountLANG','マイアカウント');
define('_CPG_EventsLANG','カレンダ');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Languages!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Groups');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Headlines');

define('_COMMUNICATION','コミュニケーション');
define('_FRIENDS','友達');
define('_STORE','Store');
define('_PRODUCTS','Products');
define('_DONATE','寄付');
define('_HELP','ヘルプ');
define('_GALLERIES','ギャラリー');
define('_DOCS','ドキュメント');
define('_RULES','Rules & regulations');
define('_MENU','メインメニュー');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','You <strong>are</strong> subscribed to<br />our newsletter');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','You are <strong>not</strong> subscribed to<br />our newsletter');
define('_NEWSLETTERBLOCKREGISTER','You must be a<br /><strong>registered user</strong><br />to receive our newsletter');
define('_NEWSLETTERBLOCKSUBSCRIBE','Subscribe');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Unsubscribe');
define('_NEWSLETTERBLOCKREGISTERNOW','登録できました！');
/* END Newsletter Block */

/* START class phpmailer lang array */
$PHPMAILER_LANG = array();
$PHPMAILER_LANG['provide_address'] = 'You must provide at least one recipient email address.';
$PHPMAILER_LANG['mailer_not_supported'] = ' mailer is not supported.';
$PHPMAILER_LANG['execute'] = 'Could not execute: ';
$PHPMAILER_LANG['instantiate'] = 'Could not instantiate mail function.';
$PHPMAILER_LANG['authenticate'] = 'SMTP Error: Could not authenticate.';
$PHPMAILER_LANG['from_failed'] = 'The following From address failed: ';
$PHPMAILER_LANG['recipients_failed'] = 'SMTP Error: The following recipients failed: ';
$PHPMAILER_LANG['data_not_accepted'] = 'SMTP Error: Data not accepted.';
$PHPMAILER_LANG['connect_host'] = 'SMTP Error: Could not connect to SMTP host.';
$PHPMAILER_LANG['file_access'] = 'Could not access file: ';
$PHPMAILER_LANG['file_open'] = 'File Error: Could not open file: ';
$PHPMAILER_LANG['encoding'] = 'Unknown encoding: ';
/* END class phpmailer lang array */

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_SAVECHANGES','変更を保存');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','言語');
define('_FUNCTIONS','動作');
define('_SHOW','表示');
define('_TO','To');
define('_DAY','日');
define('_LAST','最新');
define('_ACTIVE','アクティブ');
define('_DEACTIVATE','非アクティブに');
define('_INACTIVE','非アクティブ');
define('_ACTIVATE','アクティブに');
define('_ACTIVATE2','アクティブにしますか？');
define('_VIEW','閲覧');
define('_VIEWPRIV','閲覧者の設定');
define('_MVADMIN','管理者のみ');
define('_MVUSERS','登録ユーザーのみ');
define('_MVANON','未登録ユーザーのみ');
define('_MVALL','全ての訪問者');
define('_IMAGE','画像');
define('_GO','移動！');
define('_OPTION','オプション');
define('_CATEGORY','カテゴリー');
define('_SUBCATEGORY','サブカテゴリー');
define('_ID','ID');
define('_EXPIRATION','掲載期限');
define('_DAYS','日');
define('_WARNING','警告！');
define('_POLLTITLE','投票のタイトル');
define('_POLLEACHFIELD','選択肢をそれぞれ一行ずつ記入してください');
define('_ADDCATEGORY','新規カテゴリー追加');
define('_PAGEBREAK','複数にわたるページを作成する場合は <b>&lt;!--pagebreak--&gt;</b> をページの区切りに挿入してください。');
define('_SIGNATURE','署名');
define('_DESCRIPTION','説明');
define('_EDITCATEGORY','カテゴリー編集');
define('_IN','上位カテゴリー');
define('_DESCRIPTION255','説明： (最大文字数は半角で２５５文字)');
define('_MODCATEGORY','カテゴリーの修正');
define('_SUBMITTER','登録者');
define('_VISIT','訪問する');
define('_EXTENDEDTEXT','拡張テキスト');
define('_CHECKCATEGORIES','カテゴリーのチェック');
define('_INCLUDESUBCATEGORIES','(サブカテゴリーを含む)');
define('_CHECKSUBCATEGORIES','サブカテゴリーのチェック');
define('_VALIDATELINKS','リンクの確認');
define('_FAILED','失敗しました！');
define('_BEPATIENT','(しばらくお待ち下さい)');
define('_VALIDATINGCAT','カテゴリー (と全てのサブカテゴリー)の確認中');
define('_VALIDATINGSUBCAT','サブカテゴリーの確認中');
define('_OK','Ok!');
define('_CHECK','チェック');
define('_IGNORE','無視');
define('_HITS','閲覧数');
define('_FILESIZE', 'File Size');
define("_EZTHEREIS","There are");
define("_EZSUBCAT","sub-categories");
define("_EZATTACHEDTOCAT","under this category");
define("_EZBROKENLINKS","Broken Links");
define("_DELEZLINKCATWARNING","WARNING : Are you sure you want to delete this category ?<br /> You will delete all sub-categories and attached links as well !");

// index.php
define('_DEFHOMEMODULE','トップに格納されるモジュール');
define('_MODULEINHOME','トップに表示するモジュール：');
define('_CHANGE','変更');
define('_WHOSONLINE','オンライン中');
define('_NP_ADMIN','Notepad');
define('_NP_LOCKED','The notepad has been locked<br />Only a root administrator (super user) can unlock it');
define('_NP_SAVE','Save Notes');
define('_NP_UNLOCK','Unlock Notepad');
define('_NP_LOCK','Lock Notepad');
// news
define('_STICKY','Sticky Articles');
define('_ARTICLEUP','Article UP');
define('_ARTICLEDOWN','Article DOWN');
define('_UNSTICK','Unstick');
define('_STICK','Sticky');
define('_AUTOMATEDARTICLES','プログラムされた記事');
define('_STORYID','記事 ID');
define('_CURRENTPOLL','現在の投票');

// admin.php
define('_ADMINISTRATION','管理');
define('_NOADMINYET','管理アカウントが設定されていません。スーパーユーザーのアカウントを作成してください：');
define('_CREATEUSERDATA','同じ内容で通常のアカウントも作成しますか？');
define('_ADMINLOGIN','管理システムにログイン');
define('_ADMINID','管理 ID');
define('_EMAIL','メールアドレス');
define('_SUBMIT','送信');
define('_YOUARELOGGEDOUT','ログアウトしました！');
define('_PASSWDNOMATCH','申し訳ありません。新しいパスワードは一致しませんでした。戻ってもう一度やり直してください。');
define('_LOGIN_REMEMBERME','記録しますか？');
define('_ADMINMENU_LOGOUT','管理者メニューからログアウト');
define('_PASSWORD_MALFORMED','Please include at least one number, one capital letter and one lowercase letter in your password');

// admins.php
define('_AUTHORSADMIN','管理者の編集');
define('_NAME','名前');
define('_REQUIRED','(必須)');
define('_MODIFYINFO','情報の編集');
define('_DELAUTHOR','管理者の削除');
define('_ADDAUTHOR','新しい管理者の追加');
define('_PERMISSIONS','パーミッション');
define('_SUPERUSER','スーパーユーザー');
define('_SUPERWARNING','注：スーパーユーザーを選択するとこのユーザーには全ての権限が与えられます！');
define('_ADDAUTHOR2','管理者の追加');
define('_RETYPEPASSWD','もう一度パスワードを入力');
define('_FORCHANGES','(変更する場合のみ)');
define('_COMPLETEFIELDS','全ての必須事項に記入してください');
define('_CREATIONERROR','管理者作成に失敗しました');
define('_AUTHORDEL','管理者の削除');
define('_PUBLISHEDSTORIES','この管理者が投稿した記事：');
define('_SELECTNEWADMIN','転任のため新しい管理者を設定してください');
define('_GODNOTDEL','*(GOD アカウントは削除できません)');
define('_MAINACCOUNT','God Admin*');
define('_USERS','ユーザー');

// banners.php
define('_BANNERSADMIN','バナーの管理');
define('_DELETEBANNER','バナーの削除');
define('_SURETODELBANNER','本当にこのバナーを削除しますか？');
define('_EDITBANNER','バナーの修正');

// blocks.php
define('_BLOCKSADMIN','ブロックの管理');
define('_CENTER','真ん中');
define('_CENTERUP','真ん中の上に');
define('_CENTERDOWN','真ん中の下に');
define('_BLOCKFILE','(ブロックファイル)');
define('_BLOCKFILE2','ファイル');
define('_BLOCKSYSTEM','システム');
define('_ADDNEWBLOCK','新規ブロック追加');
define('_RSSFILE','RSS/RDF ファイルの URL');
define('_ONLYHEADLINES','(ヘッドラインのみ)');
define('_REFRESHTIME','リフレッシュ間隔');
define('_CREATEBLOCK','ブロック作成');
define('_EDITBLOCK','ブロック編集');
define('_BLOCK','ブロック');
define('_SAVEBLOCK','ブロックの保存');
define('_BLOCKACTIVATION','ブロックをアクティブに');
define('_BLOCKPREVIEW','こちらはブロックのプレビューです');
define('_WANT2ACTIVATE','このブロックをアクティブにしますか？');
define('_ARESUREDELBLOCK','本当にこのブロックを削除しますか？');
define('_BLOCKUP','ブロックを上げる');
define('_BLOCKDOWN','ブロックを下げる');
define('_BLOCKTOP','ブロックを一番上に');
define('_BLOCKBOTTOM','ブロックを一番下に');
define('_TITLE','タイトル');
define('_POSITION','位置');
define('_WEIGHT','順位');
define('_STATUS','ステータス');
define('_LEFTBLOCK','左ブロック');
define('_LEFT','左');
define('_RIGHTBLOCK','右ブロック');
define('_RIGHT','右');
define('_TYPE','タイプ');
define('_CUSTOM','カスタム');
define('_FILENAME','ファイル名');
define('_FILEINCLUDE','(表示させるカスタムブロックを選択してください。他のフィールドに記述された内容は無視されます)');

// comments.php
define('_REMOVECOMMENTS','コメントの削除');
define('_SURETODELCOMMENTS','選択したコメントとその返信を全て削除しますか？');

// database.php
define('_SAVEDATABASE','DBのバックアップ');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','現在の状態');
define('_ACTIVATEPAGE','このページをアクティブにしますか？');

// history.php
define('_EPHEMADMIN','一日限定メッセージの管理');
define('_ADDEPHEM','一日限定メッセージの追加');
define('_EPHEMDESC','一日限定メッセージの本文');
define('_EPHEMMAINT','一日限定メッセージの管理 (編集／削除)：');
define('_EPHEMEDIT','一日限定メッセージ編集');
define('_EPHEMDELETE','エントリー削除');

// headlines.php
define('_RSSFAIL','RSS ファイルの URL に問題があります');
define('_RSSTRYAGAIN','URL と RSS のファイル名を確認して、もう一度試してみてください。');
define('_RSSCONTENT','(RSS/RDF コンテンツ)');
define('_IFRSSWARNING','URL 欄に記入すると書き込まれたコンテンツは表示されません！');
define('_SETUPHEADLINES','(カスタムを選択して URL を記入するか、ヘッドラインを表示するサイトをリストから選んでください)');
define('_HEADLINESADMIN','ヘッドラインの管理');
define('_ADDHEADLINE','ヘッドラインの追加');
define('_EDITHEADLINE','ヘッドラインの編集');
define('_SURE2DELHEADLINE','注：本当にこのヘッドラインを消去しますか？');

// messages.php
define('_MESSAGESADMIN','メッセージ管理');
define('_MESSAGETITLE','タイトル');
define('_MESSAGECONTENT','本文');
define('_ALLMESSAGES','メッセージの一覧');
define('_EDITMSG','メッセージの編集');
define('_ADDMSG','メッセージの追加');
define('_REMOVEMSG','本当にこのメッセージを削除しますか？');
define('_CHANGEDATE','開始日を今日に変更しますか？');
define('_IFYOUACTIVE','(今このメッセージをアクティブにした場合、開始日は今日になります)');

// modules.php
define('_MODULESADMIN','モジュール管理');
define('_HOMECONFIG','ホームの設定');
define('_MODULESADDONS','モジュールとアドオン');
define('_INHOME','トップに表示');
define('_MODULEHOMENOTE','<b>-= 注意 =-</b><br />太字で表示されているのはトップページに表示されるモジュールです。<br />デフォルトで設定されているので、非アクティブにしたりアクセス制限することはできません！<br />このモジュールのディレクトリを削除するとトップページにエラーメッセージが表示されます。<br />また、このモジュールはモジュールブロック内の<i>Home</i>のリンク先と置き換えられます。');
define('_PUTINHOME','トップに表示');
define('_SURETOCHANGEMOD','トップにこのモジュールを表示しますか：');
define('_NOTINMENU','[ <big><strong>&middot;</strong></big> ] はモジュールブロック内に名前とリンクが表示されないモジュールです');
define('_SHOWINMENU','モジュールブロック内に表示させますか？');
define('_CUSTOMTITLE','カスタムタイトル');
define('_MODULEEDIT','モジュール編集');
define('_VERSION','バージョン');
define('_UPGRADE','Upgrade to %s');
define('_DBSIZE','DB size');
define('_CVS_EXPLAIN','Thru CVS you can recieve the latest builds of files very easily.<br /><b>BUT</b> the latest version of a file could have bugs since it is not an official release.<br />If you are familiar with PHP you can do an update of the files by clicking the link below.<br />Don\'t forget to make an backup first !!!');
define('_CVS_UPDATE','Update CVS files');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','From');
define('_STAFF','スタッフ');
define('_NL_RECIPS','Recipients');
define('_SUBSCRIBEDUSERS','購読を申し込んだユーザー');
define('_NL_ALLUSERS','All Members');
define('_NL_ADMINS','Administrators');
define('_NL_REGARDS','Best Regards');
define('_DISCARD','Discard');
define('_REVIEWTEXT','プレビューで内容をチェックしてください：');
define('_MANYUSERSNOTE','注意：このメールを受信するユーザーが多いので、処理にしばらく時間がかかります。');
define('_NL_NOUSERS','The group selected to receive this newsletter has zero users<br />Please go back and select a different group');
define('_NUSERWILLRECEIVE','ユーザーにこのニューズレターが送信されます。');
define('_NLUNSUBSCRIBE',"We sent you this message because you have selected to receive newsletters from our site\n\nYou can choose to unsubscribe from our mailings at any time by following <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">this</a> link\n\nIf you would like further assistance, please send an email to <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">our administrator</a>");
define('_NEWSLETTERSENT','ニューズレターが送信されました。');

// referers.php
define('_WHOLINKS','このサイトにリンクしているのは？');
define('_DELETEREFERERS','リファラーの削除');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Footer');
define('_DEBUG', 'Debug');
define('_SITECONFIG','ウェブサイトの設定');
define('_GENSITEINFO','サイトの一般情報');
define('_SITENAME','サイト名');
define('_SITEURL','サイトの URL');
define('_SITELOGO','サイトのロゴ');
define('_SITESLOGAN','サイトのスローガン');
define('_STARTDATE','サイトの開始日');
define('_ADMINEMAIL','管理者のメールアドレス');
define('_ITEMSTOP','トップ１０に表示するアイテム数');
define('_STORIESHOME','ホームに表示する記事数');
define('_OLDSTORIES','過去の記事欄に表示する記事数');
define('_ALLOWANONPOST','匿名の投稿を許可する');
define('_DEFAULTTHEME','サイトのデフォルトテーマ');
define('_SHOWSEC','セキュリティーコードを見る');
define('_TOOLTIPS','Show tooltips on designated fields');
define('_UM_TOGGLE','アップデートモニタを使う');
define('_UM_EXPLAIN','This will retrieve two pieces of information from our website, dragonflycms.org: the current build of Dragonfly, and if there are any important messages that pertain to your version of Dragonfly. The only data sent to our site is your Dragonfly version number. We do <strong>not</strong> log these requests to our server.');
// maintenance
define('_MAINTENANCE','メンテナンス');
define('_MESSAGE','メッセージ');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','多言語オプション');
define('_SELLANGUAGE','サイトの言語を選択してください');
define('_LOCALEFORMAT','時刻の設定');
define('_ACTMULTILINGUAL','多言語対応を有効にしますか？');
define('_ACTUSEFLAGS','ドロップボックスのかわりに国旗を使用しますか？');
// banners
define('_BANNERSOPT','バナーのオプション');
define('_ACTBANNERS','バナーをアクティブにする：');
// footer
define('_FOOTERMSG','フッターに表示するメッセージ');
define('_FOOTERLINE1','フッター１行目');
define('_FOOTERLINE2','フッター２行目');
define('_FOOTERLINE3','フッター３行目');
// backend
define('_BACKENDCONF','バックエンドの設定');
define('_BACKENDTITLE','バックエンドのタイトル');
define('_BACKENDLANG','バックエンドの言語');
// mail stories
define('_MAIL2ADMIN','新しい記事の投稿があれば管理者にメールを送る');
define('_NOTIFYSUBMISSION','新しい投稿があれば管理者にメールを送りますか？');
define('_EMAIL2SENDMSG','メッセージをメールで送信する');
define('_EMAILSUBJECT','メールの標題');
define('_EMAILMSG','メールの本文');
define('_EMAILFROM','メールのアカウント (From 行)');
// comments
define('_COMMENTSOPT','コメントのオプション');
define('_COMMENTSLIMIT','コメントの最大文字数');
define('_COMMENTSMOD','コメントのモデレーション');
define('_MODADMIN','管理者によるモデレーション');
define('_MODUSERS','ユーザーによるモデレーション');
define('_NOMOD','モデレーションなし');
// adminmenu
define('_GRAPHICOPT','画像オプション');
define('_BOTH','Both');
define('_GRAPHICAL','Graphical');
define('_SIDEBLOCK','Sideblock');
// miscellaneous
define('_MISCOPT','その他オプション');
define('_ACTIVATEHTTPREF','HTTP リファラーを有効にしますか？');
define('_MAXREF','リファラーは最大いくつ記録しますか？');
define('_COMMENTSPOLLS','投票にコメントを投稿できるようにしますか？');
define('_COMMENTSARTICLES','記事にコメントを投稿できるようにしますか？');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','検閲オプション');
define('_CENSORMODE','検閲モード');
define('_NOFILTERING','検閲なし');
define('_EXACTMATCH','完全一致');
define('_MATCHBEG','前方一致');
define('_MATCHANY','条件一致');
define('_CENSORREPLACE','検閲された語を置き換えるテキスト：');
// email
define('_EMAILOPTIONS','Mail');
define('_ALLOW_HTML_EMAIL','Allow the use of HTML in email');
define('_USE_SMTP','Use SMTP server as opposed to PHP\'s mailer');
define('_SMTP_HOST','SMTP host address (smtp.example.com)');
define('_USE_SMTP_AUTH','Does server require SMTP authorization');
define('_SMTP_USER_NAME','SMTP username');
define('_SMTP_USER_PASS','SMTP password');

// cpg_adminmenu.php
define('_ADMINMENU','管理メニュー');
define('_ADMINLOGOUT','ログアウト／退出');
define('_AMENU0','System');
define('_AMENU1','General');
define('_AMENU2','Members');
define('_AMENU3','Messages');
define('_AMENU4','Forums');
define('_AMENU5','Informative');
define('_AMENU6','Linking');
define('_AMENU7','Commerce');
define('_AMENU8','Multimedia');
define('_AMENU9','モジュール');
define('_BMENU1','Help');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','初期設定');
define('_DATABASE','データベース');
define('_BLOCKS','ブロック');
define('_MODULES','モジュール');
define('_EDITADMINS','管理者の編集');
define('_MESSAGES','メッセージ');
define('_BANNERS','バナー');
define('_HTTPREFERERS','HTTP リファラー');
define('_EDITUSERS','ユーザーの編集');
define('_USERSCONFIG','Members Config');
define('_NEWSLETTER','ニューズレター');
define('_SUBMISSIONS','承認');
define('_ADDSTORY','新記事の投稿');
define('_TOPICS','トピック');
define('_ADMPOLLS','調査／投票');
define('_EPHEMERIDS','一日限定ニュース');
define('_REVIEWS','レビュー');
define('_ENCYCLOPEDIA','辞典');
define('_SURVEYS','投票');
define('_SECTIONS','セクション');
define('_ARTICLES','記事');
define('_FAQ','FAQ');
define('_DOWNLOAD','ダウンロード');
define('_WEBLINKS','リンク');
define('_CONTENT','コンテンツ');
define('_SYSINFO','System Info');
define('_REPORTABUG','バグ報告');
//coppermine admin
define('_W_INSTALL','Which Installation?');
define('_W_PAGE','Which Page?');
//security admin
define('_SECURITY','Security');
define('_PROTECTION','Protection');
define('_EMAIL_DOMAINS','E-Mail Domains');
define('_FLOODING','Flooding');
define('_UUA','Unknown User-Agents');
define('_FLOODING_TIP','Flooding: Delay<br /><em>timing between each warning</em>');
define('_BAN_TIP','Flooding: Ban Duration<br /><em>how long the ban will last for</em>');
define('_AUTO_UNBAN_TIP','Flooding: Auto Unban<br /><em>clean ban after duration time expires</em>');
define('_FOREVER','forever');
define('_REMOVE_SELECTED','Remove selected');

//errors for cpg_error
define('_ERROR','エラー');
define('_SEC_ERROR','セキュリティーエラー');
define('_ERROR_NOT_SET','%s は設定されていません');
define('_ERROR_NO_POST','他のホストからの投稿は出来ません...');
define('_ERROR_NO_GET','GET requests はこの機能では使えません...');
define('_ERROR_BAD_CHAR','The characters that you tried to include in your %s request are forbidden...');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','間違ったリンクよりこのページアクセスしようとしています...');
define('_ERROR_NONE_TO_DISPLAY','%s は表示できません');
define('_ERROR_DELETE_CONF','本当に %s を削除しますか？');
define('_ERROR_NO_EXIST','%s はありません');
define('_ERROR_ALREADYEXIST','%s は既にあります');
define('_TASK_COMPLETED','操作完了！');
define('_CONFIRM','Confirm');
define('_FOOTER_COPYRIGHTS', 'Interactive software released under <a href="http://dragonflycms.org/GNUGPL.html" target="_blank" title="GNU Public License Agreement">GNU GPL</a>,	<a href="'.getlink('credits').'">Code Credits</a>,	<a href="'.getlink('privacy_policy').'">Privacy Policy</a>');

# time
$LNG = array('_time' => array(
'l' => array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'),
'D' => array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'),
'F' => array(1=>'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
'M' => array(1=>'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
));
$LNG['_time']['l'][7] =& $LNG['_time']['l'][0];
$LNG['_time']['D'][7] =& $LNG['_time']['D'][0];
