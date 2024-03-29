<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/japanese/your_account.php,v $
  $Revision: 9.10 $
  $Author: nanocaiordo $
  $Date: 2006/02/12 14:43:58 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_MA_HIDDEN','隠す');
define('_MA_VISIBLE','見せる');
define('_MA_REQUIRED','必須');
define('_MA_PROFILE_INFO','プロフィール情報');
define('_MA_ADDITIONAL','追加情報');
define('_MA_REALNAME','本名');
define('_MA_FAKEMAIL','表示用メールアドレス');
define('_MA_HOMEPAGE','ホームページ');
define('_MA_ICQ','ICQ Number');
define('_MA_AIM','AIM Address');
define('_MA_YIM','Yahoo Messenger');
define('_MA_MSNM','MSN Messenger');
define('_MA_LOCATION','住所');
define('_MA_OCCUPATION','職業');
define('_MA_INTERESTS','趣味');
define('_MA_SIGNATURE','署名');
define('_MA_EXTRAINFO','その他');
define('_MA_PREFERENCES','優先設定');
define('_MA_TIMEZONE','タイムゾーン');
define('_MA_DATEFORMAT','日時表示方法');
define('_MA_RECEIVENEWSLETTER','ニュースレターの受信');
define('_MA_SHOWEMAIL','メールアドレスを公開する');
define('_MA_SHOWONLINE','オンライン情報を公開する');
define('_MA_ALLOWBBCODE','BBcode を使用する');
define('_MA_ALLOWHTML','HTML を使用する');
define('_MA_ALLOWSMILIES','スマイルアイコンを使用する');
define('_MA_NOTIFYREPLY','返信を伝える');
define('_MA_NOTIFYPM','プライベートメッセージの受信をメールで伝える');
define('_MA_POPUPPM','新しいプライベートメッセージをポップアップウインドウに表示する');
define('_MA_ATTACHSIG','署名を付ける');
define('_MA_PRIVATE','個人的な情報');
define('_MA_FIRSTNAME','名前');
define('_MA_LASTNAME','名字');
define('_MA_GENDER','性別');
define('_MALE','男');
define('_FEMALE','女');
define('_MA_BIRTHDAY','誕生日');
define('_MA_BIRTHDAYMSG','月／日／年');
define('_MA_TELEPHONE','電話番号');
define('_MA_FAX','ファックス番号');
define('_OSC_NEWSLETTER','Recieve Shop newsletter');
define('_OSC_NEWSLETTERMSG','This is a seperate e-mail about new shop items and discounts');
define('_BOUNDREGISTRATION','登録ボタンをクリックした場合、以下の事項に同意したとみなします。');
define('_MA_REGISTRATION','登録条件');
define('_MA_AGREE_OVER_13','同意します。私は<b>13歳以上</b>です');
define('_MA_AGREE_UNDER_13','同意します。私は<b>13歳未満</b>です。');
define('_MA_DO_NOT_AGREE','同意できません。');
define('_MA_REGISTRATION_INFO','登録情報 ');
define('_MA_ITEMS_REQUIRED','＊印の項目は必ず入力してください。');
define('_MA_PROFILE_INFO_NOTICE','この情報は公開されます。');
define('_USERNAME','ユーザー名');
define('_EMAILADDRESS','メールアドレス');
define('_BLANKFORAUTO','パスワードを自動的に生成する場合は空欄にしてください');
define('_CONFIRMPASSWORD','パスワードの確認');
define('_MA_SUBMIT','送信');
define('_MA_FAKEMAILMSG','このメールアドレスは公開されます');
define('_MA_DATEFORMATMSG','使われる構文は PHP <a href="http://php.net/date">date()</a> と 同じです');
define('_MA_SIGNATUREMSG','この欄は投稿時の末尾に付ける文章です。<br />'.sprintf(_M_CHARS, 255));
define('_MA_NOTIFYREPLYMSG','あなたの投稿したトピックに返信が着いた場合メールを送ります。投稿時に設定を変えることができます。');
define('_MA_POPUPPMMSG','新しいプライベートメッセージをポップアップウインドウに表示します。');
define('_ACTDISABLED','この機能はサイト管理者によって<b>停止</b>しています ');
define('_USERFINALSTEP','ユーザー登録：最終項目');
define('_USERCHECKDATA','以下の内容を確認してください。それが正しければ「Fiinish」をクリックしてください。訂正する場合は「戻る」をクリックしてください。');
define('_YOURPASSWORD','あなたのパスワードは');
define('_YOUWILLRECEIVE','24時間以内に登録確認メールの　アクティベーションリンク　をクリックしてください');
define('_YOUWILLRECEIVE2','ログイン情報のメールを受信してください。');
define('_WAITAPPROVAL','サイト管理者があなたの登録申請を確認した後、承認されます。 ');
define('_FINISH','Finish');
define('_YOUUSEDEMAIL','そのメールアドレスはすでに使われています');
define('_TOREGISTER','to register an account at');
define('_USERREGLOGIN','ユーザー登録/ログイン');
define('_USERAPPLOGIN','ユーザー申請/ログイン');
define('_ACCOUNTCREATED','新ユーザーアカウントが作られた！');
define('_YOUAREREGISTERED','ようこそ！あなたは登録されました');
define('_FINISHUSERCONF','あなたのアカウント登録作業は完了しました。<br />24時間以内に登録確認メールの　アクティベーションリンク　をクリックすればログインできるようになります。');
define('_FINISHUSERCONF2','あなたのアカウントはできました。 ');
define('_FINISHUSERCONF3','login here');
define('_TOFINISHUSER','登録作業を完了するには、24時間以内にアクティベートする必要があります。それがなされない場合、登録情報は削除されます。');
define('_ACTIVATIONSUB','アカウントアクティベーション');
define('_REGISTRATIONSUB','アカウント登録');
define('_THANKSUSER','登録ありがとう');
define('_FOLLOWINGMEM','以下はあなたの会員情報です：');
define('_TOAPPLY','アカウントの申請');
define('_APPLICATIONSUB','アカウントアプリケーション');
define('_YOUAREPENDING','ようこそ！あなたの登録は保留されています。サイト管理者が申請を処理するまでお待ち下さい。');
define('_THANKSAPPL','申請ありがとう');
define('_MEMADD','メンバー追加');
define('_MEMAPL','メンバー承認');
define('_ERRORINVEMAIL','エラー：不正なメールアドレス');
define('_NICK2SHORT','ユーザー名が短すぎます。半角で3文字以上必要です');
define('_SECCODEINCOR','セキュリティーコードが違います。戻って正しいコードを入れ直してください');
define('_ERROREMAILSPACES','エラー：メールアドレスにスペースを含めないで下さい');
define('_ERRORINVNICK','エラー：不正なユーザー名');
define('_NICK2LONG','ユーザー名が長すぎます。半角で26文字以内にして下さい');
define('_NAMERESERVED','エラー：この名前は使えません');
define('_NAMEDENIED','エラー：ユーザー名の次の部分は無効です：');
define('_NICKNOSPACES','エラー：ユーザー名にスペースを含めないで下さい');
define('_NICKTAKEN','エラー：そのユーザー名は使われています');
define('_EMAILREGISTERED','エラー：そのメールアドレスは登録済みです');
define('_PASSDIFFERENT','パスワードが一致しません。両方のパスワードは同一でなければなりません。');
define('_YOUPASSMUSTBE','パスワードが必要です');
define('_CHARLONG','文字数が長い');
define('_ACCOUNTRESERVED','新ユーザーアカウントが有ります！');
define('_EMAILNOTUSABLE','エラー：そのメールアドレスは使えません');
define('_ACTIVATIONYES','ユーザーアクティベーション');
define('_ACTMSG','あなたのアカウントはアクティベーションされました。<a href="'.getlink().'">このリンク</a> からユーザー名とパスワードを使用して下さい。');
define('_ACTIVATIONERROR','ユーザーアクティベーションエラー');
define('_ACTERROR1','ユーザー確認ができません。<br /><br />必ずメールのアクティベーションリンクをクリックするか、<a href="'.getlink().'">登録をやり直して下さい</a>。');
define('_ACTERROR2','ユーザー情報がデータベースにありません。<br /><br />登録する場合は、<a href="'.getlink().'">ここをクリック</a>してください。');
define('_CURRENTPASSWORD','現在のパスワード');
define('_CURRENTPASSWORDMSG','パスワードかメールアドレスを変更する場合、今のパスワードを入力する必要があります。');
define('_NEWPASSWORD','新しいパスワード');
define('_NEWPASSWORDMSG','その変更にはパスワードが必要です');
define('_CONFIRMPASSWORDMSG','その変更にはパスワードを入力する必要があります ');
define('_SUREDELETE','本当にアカウントを削除しますか？');
define('_CATEGORY_SELECT','カテゴリー選択');
define('_SELECT_AVATAR','アバター選択');
define('_CANCEL_AVATAR','アバターの取り消し');
define('_THISISYOURPAGE','こちらはあなた用のホームページです。');
define('_PERSONALINFO','個人情報');
define('_ABOUT_USER','All about ');
define('_CONTACTINFO','連絡先');
define('_PM','プライベートメッセージ');
define('_JOINED','参加');
define('_RANK','ランク');
define('_LAST10BBTOPIC','Last 10 Forum Topics');
define('_LAST10BBTOPICS','Last 10 Forum Topics started by');
define('_LAST10COMMENT','Last 10 Comments');
define('_LAST10DOWNLOAD','Last 10 Downloads');
define('_LAST10DOWNLOADS','Last 10 Downloads by');
define('_LAST10SUBMISSION','Last 10 News Submissions');
define('_LAST10WEBLINK','Last 10 Web Links');
define('_LAST10WEBLINKS','Last 10 Web Links by');
define('_MEMBERGROUPS','参加しているグループ');
define('_AVATAR','アバター');
define('_WEBSITE','ウェブサイト');
define('_USERSTATUS','現在のステータス');
define('_ONLINE','オンライン');
define('_OFFLINE','オフライン');
define('_NOTSUBSCRIBED','このサイトのニュースレターを購読していません');
define('_SUBSCRIBED','このサイトのニュースレターを購読しています');
define('_MA_BROADCAST','公開メッセージ');
define('_BROADCASTTEXT','こちらから<i>公開メッセージ</i>を送信できます (最長半角 255 文字)。このメッセージは１０分以内にオンライン中の全てのユーザーに表示されます。どのユーザーも一度だけ、サイトのロゴの下の赤いバーの中にそれが見えるようになります。またどのユーザーも<a href="'.getlink('Your_Account&amp;edit=prefs').'">こちらで</a>その機能をオフにすることができます。悪用はしないでください。HTML は使用できません。');
define('_BROADCASTSENT','公開メッセージが送信されました');
define('_BROADCASTNOTSENT','<b>エラー</b>：公開メッセージが空白か、最近メッセージを送信したばかりです。次のメッセージの送信までは１０分ほどお待ち下さい。');
define('_RETURNPAGE','自分のホームに戻る');
define('_MA_MYHEADLINES','ヘッドライン');
define('_SELECTASITE','ヘッドラインを表示したいサイトを選んでください');
define('_SELECTASITE2','サイトを選択');
define('_ORTYPEURL','またはお好みのサイトの RSS/XML URL を入力してください');
define('_MA_GO','Go');
define('_HEADLINESFROM','ヘッドライン');
define('_MA_READMYJOURNAL','Read My Blog');
define('_ACCDELETED','アカウントは削除されました');
define('_SERVERNOMAIL','このサーバーはメールが使えません。サイト管理者に連絡して下さい。');
define('_ACCSUSPENDED','アカウントは停止されました');
define('_BESUREACT','アカウントがアクティベートされたことを確認して下さい。');
define('_MEMDEL','メンバー削除');
define('_YOUBAD','エラー：許可されない操作をしました！');
define('_NOINFOFOR','現在情報はありません：');
define('_SORRYNOUSERINFO','申し訳ありません。該当するユーザー情報は見つかりませんでした。');
define('_LOGININCOR','ログインに失敗しました。もう一度お試し下さい・・・');
define('_UPDATEFAILED','ユーザー情報をアップデートできませんでした。管理者にお問い合わせください。');
define('_ACCTCHANGE','情報<br>変更 ');
define('_ACCTCOMMENTS','コメント<br>設定');
define('_ACCTEXIT','ログアウト<br>終了 ');
define('_ACCTHOME','ホーム<br>変更 ');
define('_ACCTJOURNAL','ブログ');
define('_ACCTTHEME','テーマ選択');
define('_CHANGEHOME','あなたのホーム');
define('_CHANGEYOURINFO','あなたの情報');
define('_CONFIGCOMMENTS','コメント');
define('_DELETEACCT','アカウント削除');
define('_LOGOUTEXIT','ログアウト');
define('_MA_MESSAGES','メッセージ');
define('_RETURNACCOUNT','自分のユーザー情報を見る');
define('_SELECTTHETHEME','テーマ');
define('_DELETEREASON','削除の理由');
define('_SUSPENDREASON','保留の理由');
define('_DENYREASON','拒否の理由');
define('_CHECKNUM','アクティベーション #');
define('_REGDATE','追加日付');
define('_ACCTAPPROVE','アカウント承認');
define('_ACCTDELETE','アカウント削除');
define('_ACCTDENY','アカウント拒否');
define('_ACCTREMOVE','アカウント停止');
define('_ACCTRESTORE','アカウント復帰');
define('_ACCTSUSPEND','アカウント保留');
define('_ACTIVEUSERS','アクティブユーザー');
define('_MA_ADDUSER','ユーザー追加');
define('_MA_ADDUSERBUT','追加ユーザー');
define('_MA_ALLOWUSERS','他のユーザーにメールドレスを公開する');
define('_APPROVE','承認');
define('_APPROVEUSER','ユーザー承認');
define('_MA_DELETEUSER','ユーザー削除');
define('_DELETEUSERS','削除されたユーザー');
define('_DENY','拒否');
define('_DENYUSER','ユーザー拒否');
define('_DETUSER','ユーザー詳細');
define('_MA_EDITUSER','ユーザー編集');
define('_MA_FORCHANGES','(変更のみ)');
define('_MA_FUNCTIONS','機能');
define('_HASAPPROVE','承認されました。');
define('_HASDELETE','削除されました。');
define('_HASDENY','拒否されました。');
define('_HASREMOVE','停止されました。');
define('_HASRESTORE','復帰されました。');
define('_HASSUSPEND','保留されました。');
define('_MA_ID','ID');
define('_MA_MODIFY','修正');
define('_MA_NAME','名前');
define('_MA_NEWSLETTER','ニュースレター');
define('_MA_OPTION','オプション');
define('_OR','か');
define('_MA_PERMISSIONS','許可');
define('_PROMOTE','昇進');
define('_PROMOTEUSER','ユーザー昇進');
define('_REMOVE','停止');
define('_REMOVEUSER','ユーザー停止');
define('_MA_REQUIREDNOCHANGE','(後で変更できません)');
define('_RESEND','再送信');
define('_RESENDMAIL','アクティベーションメールの再送信');
define('_RESTORE','復帰');
define('_RESTOREUSER','ユーザー復帰');
define('_MA_RETYPEPASSWD','パスワードの再入力');
define('_MA_SAVECHANGES','変更の保存');
define('_SHOWMAIL','メールを見る');
define('_SORRYTO','アカウントは');
define('_SURE2APPROVE','ユーザーを承認しますか');
define('_MA_SURE2DELETE','ユーザーを削除しますか');
define('_SURE2DENY','ユーザーを拒否しますか');
define('_SURE2PROMOTE','ユーザーを昇進しますか');
define('_SURE2REMOVE','ユーザーを停止しますか ');
define('_SURE2RESEND','アクティベーションメールを再送信しますか');
define('_SURE2RESTORE','ユーザーを復帰しますか');
define('_SURE2SUSPEND','ユーザーを保留しますか ');
define('_SUSPEND','保留');
define('_SUSPENDUSER','ユーザー保留');
define('_SUSPENDUSERS','保留されたーユーザー');
define('_MA_USERADMIN','ユーザー管理');
define('_MA_USERID','ユーザーID ');
define('_USERPROMOTED','ユーザーをサイト管理者にする');
define('_MA_USERUPDATE','更新したユーザー');
define('_WAITINGUSER','待っているユーザー');
define('_WAITINGUSERS','待っているユーザー');
define('_MA_ARTICLES','アーティクル');
define('_MA_BBFORUM','フォーラム');
define('_MA_CONTENT','コンテンツ');
define('_MA_DOWNLOAD','ダウンロード ');
define('_MA_ENCYCLOPEDIA','事典');
define('_MA_FAQ','FAQ');
define('_MA_REVIEWS','レビュー');
define('_MA_SECTIONS','セクション');
define('_MA_SURVEYS','調査');
define('_MA_TOPICS','トピックス');
define('_MA_WEBLINKS','リンク集');
define('_ADDERROR','エラー：データベースにトラブル発生。');
define('_NAMEERROR','エラー：サイト管理者名は使われています。');
define('_MA_NEEDTOCOMPLETE','全ての項目を埋める必要があります');
define('_MA_PASSWDNOMATCH',' 新しいパスワードが一致しません。やり直して下さい。');
define('_MA_USERNOEXIST','User Doesn\'t Exists!');
define('_USERLOGIN','ユーザーのログイン');
define('_REGNEWUSER','新規ユーザー登録');
define('_PASSWORDLOST','パスワードをお忘れですか？');
define('_NOPROBLEM','大丈夫です。ユーザー名を入力して送信ボタンを押してください。確認コードを電子メールで送信しますので、もう一度ユーザー名と確認コードを入力すれば、新しいパスワードを送信します。');
define('_CONFIRMATIONCODE','確認コード');
define('_SENDPASSWORD','パスワードを送信');
define('_MA_YOUARELOGGEDOUT','あなたはログアウトします！');
define('_USERACCOUNT','ユーザーアカウント');
define('_HASTHISEMAIL','」でこのメールの送信手続きをしました。');
define('_AWEBUSERFROM','あなたのパスワードは');
define('_HASREQUESTED','のユーザーが送信するようリクエストしています。');
define('_YOURNEWPASSWORD','あなたのパスワードは：');
define('_YOUCANCHANGE','パスワードは再度ログインした後に変更できます。ログイン先：');
define('_IFYOUDIDNOTASK','このメールに覚えがない場合、心配されることはありません。このメールを見ているのはあなたです。どこかの誰かではありません。エラーによりこのメールが届いている場合は、新しいパスワードでログインしてください。');
define('_PASSWORD4','パスワード：');
define('_MAILED','送信されました。');
define('_CODEREQUESTED','からアクセスしたユーザーにより確認コード申請されています。');
define('_YOURCODEIS','あなたの確認コードは：');
define('_WITHTHISCODE','このコードで次のサイトの新しいパスワードをもらえます：');
define('_IFYOUDIDNOTASK2','このメールに覚えがない場合は、ご心配には及びません。メールを削除してください。');
define('_CODEFOR','確認コード: ');
define('_USERPASSWORD4','このパスワードのユーザーは');
define('_255CHARMAX','(最長で半角 255 文字です。HTML で署名してください。)');
define('_CANKNOWABOUT','(最長で半角 255 文字です。あなたの紹介文を記入してください。)');
define('_SOMETHINGWRONG','何かしくじったみたい・・・怒らないでね');
define('_COMMENTSCONFIG','コメント設定');
define('_DISPLAYMODE','表示モード');
define('_NOCOMMENTS','コメントはありません');
define('_NESTED','ネストする');
define('_FLAT','平坦に');
define('_THREAD','スレッドで');
define('_SORTORDER','ソート順');
define('_OLDEST','日付の古いものを上に');
define('_NEWEST','日付の新しいものを上に');
define('_HIGHEST','スコアの高い順に');
define('_THRESHOLD','閾値');
define('_COMMENTSWILLIGNORED','設定された値以下のスコアのコメントは表示されません');
define('_UNCUT','全てを見る');
define('_EVERYTHING','ほとんど全て');
define('_FILTERMOSTANON','匿名の記事はほぼ全て読まない');
define('_USCORE','スコア');
define('_SCORENOTE','匿名の投稿のスコアは初期値０になります。登録ユーザーは１です。モデレータはスコアを加えたり減らしたりすることができます。');
define('_NOSCORES','スコアを表示しない');
define('_HIDDESCORES','(スコアを隠す：スコアは見えませんが、閾値には適用されたままです)');
define('_MAXCOMMENT','コメントの最大の長さ');
define('_TRUNCATES','(長いコメントは途中で切って「もっと読む」というリンクを作成します。無効にするにはものすごく大きな値にしてください)');
define('_BYTESNOTE','バイト (1024 バイト = 1K)');
define('_BROWSEUSERS','ユーザーを見る');
define('_SEARCHUSERS','ユーザーを検索');
define('_SENDPRIVATEMSG','プライベートメッセージを送信');
define('_THEME','テーマ');
define('_MA_HOMECONFIG','ホームページ設定');
define('_MAX127','(最大 127):');
define('_MESSAGEACTIVATE','公開メッセージを送信しますか？');
define('_ACTIVATEPERSONAL','個人メニューをアクティブにする');
define('_PERSONALMENUCONTENT','Personal Menu Content');
define('_CHECKTHISOPTION','(このオプションにチェックを入れると以下の文がホームに表示されます)');

// avatar
define('_AVATAR_FILESIZE','アバター画像サイズは %d KB 以下にしてください。');
define('_AVATAR_CONTROL','アバターコントロールパネル');
define('_AVATAR_INFO','投稿時のあなたの詳細に小さな画像を追加します。表示できるのは１つの画像だけです。高さ・幅とも80ピクセル以下で、ファイルサイズは 6KB でなければなりません。');
define('_CURRENT_IMAGE','現在の画像');
define('_DELETE_IMAGE','画像削除');
define('_AVATAR_OFFSITE','他サイトのアバター画像にリンク');
define('_AVATAR_OFFSITEMSG','アバター画像の保存されている URL を入力してください。');
define('_AVATAR_SELECT','一覧からアバターを選ぶ');
define('_SHOW_GALLERY','一覧を見る');
define('_AVATAR_UPLOAD','ローカルからアバターをアップロードする');
define('_AVATAR_UPLOAD_URL','URL からアバターを転送する');
define('_AVATAR_GALLERY','アバター一覧');
define('_AVATAR_ERR_IMTYPE','画像の形式は .jpg, .gif か .png のみ利用できます： %s');
define('_AVATAR_ERR_SIZE','画像が大きすぎます：%d × %d');
define('_AVATAR_ERR_URL','その URL は繋がらないか見つかりません');
define('_AVATAR_ERR_DATA','その URL にファイルがありません');

/**************************
  ADMNINISTRATION SECTION
**************************/
// users_cfg.php
define('_USER_CONFIG','ユーザー設定');
define('_BROADCASTMSG','Broadcast メッセージを有効にする？');
define('_MYHEADLINES','ヘッドライン');
define('_USERSHOMENUM','ホームに表示されるニュース数は？');
define('_PASSWDLEN','ユーザーパスワードの最小文字数');
define('_REQUIREADMIN','サイト管理者の承認が必要');
define('_ACTALLOWREG','ユーザー登録を許可する');
define('_ACTNOTIFYADD','ユーザー登録時にサイト管理者に通知する');
define('_ACTALLOWDELETE','ユーザー自身の削除を許可する');
define('_ACTNOTIFYDELETE','ユーザー削除時にサイト管理者に通知する');
define('_ACTALLOWTHEME','ユーザーがテーマ選択することを許可する');
define('_ACTALLOWMAIL','ユーザーがメールアドレスを変更することを許可する');
define('_USEACTIVATE','メールによる登録承認を使う');
define('_USEREGISTERMSG','ユーザー登録承諾書を使う');
define('_SENDWELCOMEPM','新規ユーザーに歓迎のプライベートメッセージを送信する');
define('_WELCOMEPMBODY','メッセージ本文');
// fields

// avatar
define('_AVATAR_SETTINGS','アバター設定');
define('_AV_ALLOW_LOCAL','アバター一覧を許可する');
define('_AV_ALLOW_REMOTE','リモートアバターを許可する');
define('_AV_ALLOW_REMOTE_INFO','他のサイトに登録されている画像にリンクする');
define('_AV_ALLOW_UPLOAD','アバターアップロードを許可する');
define('_AV_MAX_FILESIZE','アバター画像の最大ファイルサイズ');
define('_AV_MAX_FILESIZE_INFO','アップロード時の設定');
define('_AV_MAX_AVATAR_SIZE','アバター画像の最大サイズ');
define('_AV_MAX_AVATAR_SIZE_INFO','(縦×横 単位:ピクセル)');
define('_AV_AVATAR_STORAGE_PATH','アバターアップロードパス');
define('_AV_AVATAR_STORAGE_PATH_INFO','パスは CPG-Nuke のルートディレクトリから記述。例：uploads/avatars');
define('_AV_AVATAR_GALLERY_PATH','アバター一覧パス');
define('_AV_AVATAR_GALLERY_PATH_INFO','パスは CPG-Nuke のルートディレクトリから記述。例：images/avatars');
define('_AV_DEFAULT','Default avatar image');
define('_AV_DEFAULT_INFO','Relative to your Avatar Gallery Path');
define('_AV_ALLOW_ANIMATED','Allow animated avatars');

// users.php
define('_USERADMIN','ユーザー管理');
define('_ADDUSER','新規ユーザー登録');
define('_EDITUSER','ユーザー情報の編集');
define('_SELECTAUSER','ユーザー選択');
define('_MA_PRIVILEGES','許可情報');
define('_ICQ','ICQ Number');
define('_AIM','AIM screen name');
define('_YIM','Yahoo! ID');
define('_MSNM','MSNM Screen Name');
define('_LOCATION','お住まいの場所');
define('_OCCUPATION','お仕事');
define('_INTERESTS','趣味');
define('_EXTRAINFO','追加情報');
define('_USERID','ユーザーID');
define('_SURE2DELETE','このユーザーを削除しますか？');
