<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/japanese/reviews.php,v $
  $Revision: 9.6 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:56 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
define('_YOURNAME','お名前');
define('_SORTASC','昇順でソート');
define('_SORTDESC','降順でソート');
define('_CANCEL','キャンセル');
define('_SCORE','スコア：');
define('_REPLYMAIN','コメント投稿');
define('_ALLOWEDHTML','利用できる HTML');
define('_POSTANON','匿名投稿');
define('_WRITEREVIEW','レビューを投稿');
define('_WRITEREVIEWFOR','レビュー：');
define('_ENTERINFO','各欄の説明に沿ってご記入下さい');
define('_PRODUCTTITLE','プロダクトのタイトル');
define('_NAMEPRODUCT','プロダクト名');
define('_REVIEW','レビュー');
define('_CHECKREVIEW','こちらがあなたのレビューです。最低１００字以上になっていますか？ HTMLのタグも使えます');
define('_FULLNAMEREQ','フルネーム、必須');
define('_REMAIL','メールアドレス');
define('_REMAILREQ','メールアドレス、必須');
define('_SELECTSCORE','このプロダクトのスコア');
define('_RELATEDLINK','関連リンク');
define('_PRODUCTSITE','製品のオフィシャルサイト、ＵＲＬは "http://" から記入して下さい');
define('_LINKTITLE','リンクのタイトル');
define('_LINKTITLEREQ','関連リンクがある場合は必須です');
define('_RIMAGEFILE','画像のファイル名');
define('_RIMAGEFILEREQ','カバー画像名、ディレクトリ： images/reviews/、 オプション');
define('_CHECKINFO','記入された内容を確認して下さい、アルファベットは全て大文字を使わないようにお願いします。システムから拒否されます。');
define('_INVALIDTITLE','タイトルが空白です');
define('_INVALIDSCORE','ポイントの数値は 1から10までになっております');
define('_INVALIDTEXT','レビューの本文が空白です');
define('_INVALIDHITS','ヒット数は整数でなければいけません');
define('_CHECKNAME','お名前とメールアドレスを記入して下さい');
define('_INVALIDEMAIL','メールアドレスに間違いがあります (例： you@hotmail.com)');
define('_INVALIDLINK','関連リンクとタイトルを両方とも記入する必要があります。もしくは両空白にしてください。');
define('_ADDED','追加：');
define('_REVIEWER','レビュー：');
define('_REVIEWID','レビューID');
define('_LOOKSRIGHT','これでよろしいでしょうか？');
define('_RMODIFIED','修正しました');
define('_RADDED','追加しました');
define('_ADMINLOGGED','管理者としてログインしました... ');
define('_RTHANKS','投稿ありがとうございました');
define('_MODIFICATION','修正');
define('_ISAVAILABLE','レビューはデータベースに保存されました');
define('_EDITORWILLLOOK','投稿内容は編集者の承認があり次第に掲載されます');
define('_RBACK','レビュー・インデックスに戻る');
define('_RWELCOME','ようこそレビューセクションへ');
define('_10MOSTPOP','レビュー人気トップ１０');
define('_10MOSTREC','最新のレビュー');
define('_THEREARE','データベースには');
define('_REVIEWSINDB','のレビューがあります');
define('_REVIEWSLETTER','頭文字検索：');
define('_NOREVIEWS','この文字に該当するレビューはありませんでした：');
define('_TOTALREVIEWS','一致したレビュー');
define('_RETURN2MAIN','メインメニューに戻る');
define('_REVIEWCOMMENT','レビューへのコメント：');
define('_YOURNICK','ユーザー名：');
define('_RCREATEACCOUNT','<a href="'.getlink("Your_Account").'">メンバー登録</a> ');
define('_YOURCOMMENT','あなたのコメント：');
define('_MYSCORE','スコア：');
define('_REVIEWMOD','レビュー修正');
define('_RDATE','日付：');
define('_RTITLE','タイトル：');
define('_RTEXT','テキスト：');
define('_REVEMAIL','メールアドレス：');
define('_RLINK','リンク：');
define('_RLINKTITLE','リンクのタイトル：');
define('_COVERIMAGE','カバー画像：');
define('_PREMODS','プレビュー修正');
define('_PAGE','ページ');
define('NO_GET','Please use our form as no GET requests are allowed');

/**************************
  ADMNINISTRATION SECTION
**************************/

define('_REVADMIN','レビュー管理');
define('_REVTITLE','レビューページタイトル');
define('_REVDESC','レビューページの説明');
define('_REVWAITING','確認待ちのレビュー');
define('_REVIMGINFO','Store your 150*150 image in images/reviews');
define('_NOREVIEW2ADD','レビューを追加しない');
define('_ADDREVIEW','レビュー追加');
define('_CLICK2ADDREVIEW','ここをクリックするとレビューを投稿できます');
define('_DELMODREVIEW','レビューの削除／修正');
define('_MODREVINFO','You can simply delete/modify reviews by browsing <a href="'.getlink('Reviews').'">Reviews</a> as Admin.');
