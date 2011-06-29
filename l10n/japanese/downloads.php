<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/japanese/downloads.php,v $
  $Revision: 9.9 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:55 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','あなたのリクエストしたダウンロードは存在しません。');
define('_CATEGORIES','カテゴリー');
define('_LVOTES','投票');
define('_TOTALVOTES','総得票数：');
define('_THEREARE','検索結果：');
define('_NOMATCHES','何もみつかりませんでした。');
define('_SCOMMENTS','コメント');
define('_UNKNOWN','不明');
define('_AUTHORNAME','作者名');
define('_AUTHOREMAIL','メールアドレス');
define('_DOWNLOADNAME','プログラム名');
define('_ADDTHISFILE','このファイルを追加');
define('_INBYTES','バイト');
//define('_FILESIZE','ファイルサイズ');
//define('_VERSION','バージョン');
//define('_AUTHOR','作者');
define('_HOMEPAGE','ウェブサイト');
define('_DOWNLOADNOW','今すぐダウンロード！');
define('_RATERESOURCE','評価');
define('_FILEURL','ファイルのリンク');
define('_ADDDOWNLOAD','ダウンロードを追加');
define('_DOWNLOADSMAIN','メインページ');
define('_DOWNLOADCOMMENTS','コメント');
define('_DOWNLOADSMAINCAT','メインカテゴリー');
define('_ADDADOWNLOAD','新規ダウンロード追加');
define('_DSUBMITONCE','一つのファイルにつき一度だけ送信してください。');
define('_DPOSTPENDING','全てのダウンロードは承認を経てから掲載されます。');
define('_RESSORTED','現在のソート順：');
define('_DOWNLOADSNOTUSER1','あなたは登録メンバーではないか、まだログインしていません。');
define('_DOWNLOADSNOTUSER2','メンバー登録するとダウンロードを追加することができます。');
define('_DOWNLOADSNOTUSER3','メンバー登録は簡単ですぐに手続きできます。');
define('_DOWNLOADSNOTUSER4','なぜメンバー登録が必要な機能があるのでしょう？');
define('_DOWNLOADSNOTUSER5','それは、私たちができるだけ高いクオリティのコンテンツをお届けしたいからです。');
define('_DOWNLOADSNOTUSER6','どのアイテムもそれぞれサイトのスタッフによってレビューされ、チェックされています。');
define('_DOWNLOADSNOTUSER7','価値のある情報だけを提供できることが私たちの望みなのです。');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink("Your_Account").'">メンバー登録</a>');
define('_DOWNLOADALREADYEXT','エラー：このURLはデータベースに登録済みです！');
define('_DOWNLOADNOTITLE','エラー：このURLのタイトルを記入してください！');
define('_DOWNLOADNOURL','エラー：URLを記入してください！');
define('_DOWNLOADNODESC','エラー：説明を記入してください！');
define('_DOWNLOADRECEIVED','ダウンロード登録を承りました。ありがとうございました！');
define('_NEWDOWNLOADS','新しいダウンロード');
define('_TOTALNEWDOWNLOADS','新しいダウンロード合計');
define('_DTOTALFORLAST','新しいダウンロード・最新');
define('_DBESTRATED','高評価のダウンロード　トップ');
define('_TRATEDDOWNLOADS','評価されたダウンロード総数');
define('_SORTDOWNLOADSBY','ダウンロードのソート順：');
define('_DCATNEWTODAY','このカテゴリーに本日追加されたダウンロード');
define('_DCATLAST3DAYS','過去三日間にこのカテゴリーに登録されたダウンロード');
define('_DCATTHISWEEK','今週このカテゴリーに追加されたダウンロード');
define('_DDATE1','日付順（古いものを上に）');
define('_DDATE2','日付順（新しいものを上に）');
define('_DOWNLOADS','ダウンロード');
define('_DOWNLOADPROFILE','詳しい内容');
define('_DOWNLOADRATINGDET','評価の詳細');
define('_EDITTHISDOWNLOAD','このダウンロードの編集');
define('_DOWNLOADRATING','ダウンロードの評価');
define('_DOWNLOADVOTE','投票する！');
define('_DONLYREGUSERSMODIFY','メンバー登録された方のみダウンロードの修正を申告することができます。<a href="'.getlink("Your_Account").'">こちらからメンバー登録するかログインしてください</a>。');
define('_REQUESTDOWNLOADMOD','ダウンロードの修正を申告');
define('_DOWNLOADID','ダウンロード ID');
define('_DLETSDECIDE','たとえばあなたのようなユーザーからの情報があれば、他のユーザーがどれをクリックすればいいのかの目安にすることができます。');
define('_DRATENOTE4','<a href="'.getlink("Downloads&amp;d_op=TopRated").'">高い評価を受けたもの</a>のリストを表示できます。');
define('_POPULAR','人気');
define('_TOPRATED','高評価');
define('_ADDITIONALDET','追記事項');
define('_EDITORREVIEW','編集者評');
define('_REPORTBROKEN','リンク切れの報告');
define('_AND','と');
define('_INDB','がデータベースにあります。');
define('_INSTRUCTIONS','解説');
define('_USERANDIP','ユーザー名とIPアドレスが一時的に記録されます。システムの不正使用はご遠慮ください。');
define('_LDESCRIPTION','説明（最大半角255文字）：');
define('_CHECKFORIT','メールアドレスの記入がありませんでしたが、後ほどすぐにファイルをチェックします。');
define('_LASTWEEK','先週');
define('_LAST30DAYS','過去３０日');
define('_1WEEK','一週間');
define('_2WEEKS','二週間');
define('_30DAYS','三十日');
define('_ADDEDON','追加日');
define('_RATING','評価');
define('_DETAILS','説明');
define('_OF','の');
define('_TVOTESREQ','が最低得票');
define('_SHOWTOP','トップを表示');
define('_MOSTPOPULAR','人気順 - トップ');
define('_OFALL','（全体から）');
define('_POPULARITY','人気');
define('_SELECTPAGE','ページ選択');
define('_MAIN','メイン');
define('_NEWTODAY','本日追加分');
define('_NEWLAST3DAYS','過去三日以内の追加分');
define('_NEWTHISWEEK','今週の追加分');
define('_POPULARITY1','人気（低い順から）');
define('_POPULARITY2','人気（高い順から）');
define('_TITLEAZ','名前 (A to Z)');
define('_TITLEZA','名前 (Z to A)');
define('_RATING1','評価（スコアの低い順）');
define('_RATING2','評価（スコアの高い順）');
define('_SEARCHRESULTS4','検索結果：');
define('_USUBCATEGORIES','サブカテゴリー');
define('_TRY2SEARCH','検索：');
define('_INOTHERSENGINES','他のサーチエンジンから実行する');
define('_EDITORIAL','編注');
define('_EDITORIALBY','編注：');
define('_NOEDITORIAL','このウェブサイトでは現在のところ編注は利用できません。');
define('_RATETHISSITE','このファイルを評価する');
define('_ISTHISYOURSITE','これはあなたのファイルですか？');
define('_ALLOWTORATE','他のユーザーにあなたのサイトからこのファイルを評価するのを許可する');
define('_OVERALLRATING','全評価');
define('_TOTALOF','総計');
define('_USER','ユーザー');
define('_USERAVGRATING','ユーザーの評価平均');
define('_NUMRATINGS','評価：#');
define('_REGISTEREDUSERS','登録メンバー');
define('_NUMBEROFRATINGS','評価を受けた数');
define('_NOREGUSERSVOTES','登録ユーザーの投票はありません');
define('_BREAKDOWNBYVAL','評価を数字ごとに分ける');
define('_LTOTALVOTES','総投票数');
define('_HIGHRATING','高評価');
define('_LOWRATING','低評価');
define('_NUMOFCOMMENTS','コメント数');
define('_WEIGHNOTE','* 登録メンバーと未登録ユーザーの評価を比較します。');
define('_NOUNREGUSERSVOTES','未登録ユーザーの投票はありません');
define('_WEIGHOUTNOTE','* 登録メンバーと外部サイトからの投票者を比較します。');
define('_NOOUTSIDEVOTES','外部サイトからの投票はありません');
define('_OUTSIDEVOTERS','外部サイトからの投票者');
define('_UNREGISTEREDUSERS','未登録ユーザー');
define('_PROMOTEYOURSITE','ウェブサイトを宣伝する');
define('_PROMOTE01','私たちの「サイトを評価する」オプションを気に入っていただけたでしょうか。ファイルへの投票を増やすためにあなたのサイトに画像を表示したり、さらには投票用フォームまで設置することができます。下のリストからお好きなオプションを選んでください：');
define('_TEXTLINK','テキストリンク');
define('_PROMOTE02','評価フォームへのリンクの仕方の一つがシンプルなテキストリンクです：');
define('_HTMLCODE1','この場合、使用する HTML コードは次の通りです：');
define('_THENUMBER','HTML ソース内の');
define('_IDREFER','番号はあなたのサイトの $sitename データベース内での ID 番号です。番号が表示されているかどうか確かめてください。');
define('_BUTTONLINK','ボタンリンク');
define('_PROMOTE03','ベーシックなテキストリンクとは少し違うものをお求めの場合は、こちらの小さなボタンリンクをご利用ください：');
define('_RATEIT','このサイトを評価する！');
define('_HTMLCODE2','上のボタンの HTML ソース：');
define('_REMOTEFORM','リモート評価フォーム');
define('_PROMOTE04','不正があった場合はリンクを削除します。現在のリモート評価フォームはこちらのようになっています。');
define('_VOTE4THISSITE','このサイトに投票する！');
define('_HTMLCODE3','このフォームを利用すると、あなたのファイルにご自分のサイトから直接ユーザーに投票してもらうことができます。評価はこちらのサイトで記録されます。上のフォームは実際には動きませんが、下のソースコードをカット＆ペーストしてご自分のウェブサイトで利用されると動作します。以下にソースコードを表示します：');
define('_PROMOTE05','ありがとうございました！たくさん評価されるといいですね！');
define('_THANKSBROKEN','ディレクトリの管理にご協力いただきありがとうございました。');
define('_SECURITYBROKEN','セキュリティ確保のため、あなたの IP アドレスを一時的に記録します。ご了承ください。');
define('_THANKSFORINFO','ご連絡ありがとうございました。');
define('_LOOKTOREQUEST','後ほどすぐに検討いたします。');
define('_SENDREQUEST','リクエスト送信');
define('_THANKSTOTAKETIME','サイトの評価をありがとうございました：');
define('_RETURNTO','戻り先：');
define('_RATENOTE1','同じファイルに一度以上投票しないでください。');
define('_RATENOTE2','評価は１から１０の間です。１が最低、１０が最高です。');
define('_RATENOTE3','実際の評価に基づいて投票してください。そうでないと評価が役に立たなくなってしまいます。');
define('_RATENOTE5','自分自身や競争相手のものには登場しないでください。');
define('_YOUAREREGGED','あなたは登録ユーザーでログインしています。');
define('_FEELFREE2ADD','当サイトについてご自由にコメントしてください。');
define('_YOUARENOTREGGED','あなたは登録ユーザーでないか、ログインしていません。');
define('_IFYOUWEREREG','登録するとこのサイトにコメントすることができます。');
define('_MODIFY','修正');
define('_COMPLETEVOTE1','投票を感謝します。');
define('_COMPLETEVOTE2','過去 $anonwaitdays 日以内にこちらに投票しています。');
define('_COMPLETEVOTE3','投票は各一度ずつにしてください。<br>全ての投票は記録され、レビューされています。');
define('_COMPLETEVOTE4','自分の登録したリンクに投票することはできません。<br>全ての投票は記録され、レビューされています。');
define('_COMPLETEVOTE5','評価が選択されていません。');
define('_COMPLETEVOTE6','$outsidewaitdays 日以内に投票できるのは IP アドレス１つにつき一度です。');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDDURL','Add this URL');
define('_EZTRANSFERDOWNLOAD','Transfer');
define('_EZTRANSFERDOWNLOADS','このカテゴリーのダウンロードを全て移動する');
define('_DELEZDOWNLOADSCATWARNING','警告：本当にこのカテゴリーを削除しますか？全てのサブカテゴリーとダウンロードも削除されます！');
define('_DELCONTENTCAT','警告：本当にこのカテゴリーを削除しますか？このカテゴリーに属するカテゴリーは削除されず、カテゴリーを追加することもできません。');
define('_DELCATEGORY','カテゴリー削除');
define('_DOWNLOADTITLE','ダウンロードタイトル');
define('_DOWNLOADSINDB','登録されているダウンロード');
define('_DOWNLOADSWAITINGVAL','承認待ちのダウンロード');
define('_CLEANDOWNLOADSDB','ダウンロードの評価の初期化');
define('_BROKENDOWNLOADSREP','破損したダウンロードの報告');
define('_DOWNLOADMODREQUEST','ダウンロードの修正要望');
define('_ADDNEWDOWNLOAD','ダウンロード追加');
define('_MODDOWNLOAD','ダウンロード修正');
define('_WEBDOWNLOADSADMIN','ウェブのダウンロード管理');
define('_DNOREPORTEDBROKEN','破損ダウンロードの報告無し。');
define('_DUSERREPBROKEN','破損したダウンロードの報告');
define('_DIGNOREINFO','無視 (全ての <b><i>要望</i></b> を削除します)');
define('_DDELETEINFO','削除 (<b><i>破損ダウンロード</i></b> と <b><i>要望</i></b> を削除します)');
define('_DOWNLOADOWNER','ダウンロード登録者');
define('_DUSERMODREQUEST','ダウンロードの修正要望');
define('_DOWNLOADVALIDATION','ダウンロード承認');
define('_CHECKALLDOWNLOADS','全ダウンロード確認');
define('_VALIDATEDOWNLOADS','承認済みダウンロード');
define('_NEWDOWNLOADADDED','新ダウンロード追加');
