<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/japanese/news.php,v $
  $Revision: 9.7 $
  $Author: estlane $
  $Date: 2009/02/26 16:57:15 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
#define('_PRINTER','印刷用表示');
define('_FRIEND','この記事を友人に知らせる');
define('_YOURNAME','お名前');
define('_RELATED','関連リンク');
define('_MOREABOUT','トピックの詳細：');
define('_NEWSBY','投稿者：');
define('_MOSTREAD','人気の記事');
define('_READMORE','もっと詳しく...');
define('_BYTESMORE','バイト省略されました');
define('_COMMENTSQ','コメントする');
define('_COMMENT','コメント');
define('_CONFIGURE','設定');
define('_LOGINCREATE','ログイン/新規登録');
define('_THRESHOLD','しきい値');
define('_NOCOMMENTS','なし');
define('_NESTED','ネスト');
define('_FLAT','フラット');
define('_THREAD','スレッド');
define('_OLDEST','古い順');
define('_NEWEST','新しい順');
define('_HIGHEST','高スコア順');
define('_COMMENTSWARNING','投稿文の内容についての責任は投稿者に帰します。当サイトでは投稿内容に関して一切の責任を負いません');
define('_SCORE','スコア：');
define('_USERINFO','ユーザー情報');
define('_READREST','このコメントの続きを読む...');
define('_REPLY','この記事に返信');
define('_REPLYMAIN','コメントを投稿');
define('_NOSUBJECT','サブジェクト無し');
define('_NOANONCOMMENTS','ゲストによる投稿は許可されていません、 <a href="'.getlink("Your_Account").'">メンバー登録</a>をして下さい');
define('_PARENT','親コメント');
define('_ROOT','元コメント');
define('_UCOMMENT','コメント');
define('_ALLOWEDHTML','許可されたHTML：');
define('_POSTANON','匿名で投稿');
define('_EXTRANS','HTML タグをテキストに変換');
define('_HTMLFORMATED','HTML 形式（推奨）');
define('_PLAINTEXT','普通のテキスト形式');
define('_ONN','日付：');
define('_COMMENTREPLY','コメントを投稿する');
define('_COMREPLYPRE','プレビュー');
define('_NOTRIGHT','このfunctionへの変数の受け渡しに何か不正がありました。このメッセージは途中で取り返しがつかないような事態にならないように表示されるものです。');
define('_SENDAMSG','メッセージを送信');
define('_YOUSENDSTORY','記事の標題：');
define('_TOAFRIEND','を友人にメールします');
define('_FYOURNAME','あなたの名前：');
define('_FYOUREMAIL','あなたのメールアドレス：');
define('_FFRIENDNAME','友人の名前：');
define('_FFRIENDEMAIL','友人のメールアドレス');
define('_INTERESTING','面白い記事');
define('_YOURFRIEND','あなたの友人');
define('_CONSIDERED','さんがあなたに当サイトの記事を紹介するためにこのメールを送りました');
define('_FDATE','日付：');
define('_FTOPIC','トピック：');
define('_YOUCANREAD','詳しいトピックの内容についてはこちらのリンクへ：');
define('_FSTORY','記事の標題：');
define('_HASSENT','　送信先：');
define('_THANKS','ありがとうございました');
define('_RECOMMEND','友人にこのサイトを勧める');
define('_PDATE','日付：');
define('_PTOPIC','トピック：');
define('_COMESFROM','この記事の送信元');
define('_THEURL','記事のＵＲＬ');
define('_NEWUSER','新規ユーザー');
define('_OPTIONS','オプション');
define('_REFRESH','表示変更');
define('_NOCOMMENTSACT','申し訳ありません、この記事へのコメントは受け付けていません。');
define('_ARTICLEPOLL','記事の投票');
define('_RATEARTICLE','記事のレート');
define('_RATETHISARTICLE','この記事に投票して下さい：');
define('_CASTMYVOTE','投票する');
define('_AVERAGESCORE','平均スコア');
define('_BAD','悪い');
define('_REGULAR','平均');
define('_GOOD','良い');
define('_VERYGOOD','とても良い');
define('_EXCELLENT','素晴らしい');
define('_ARTICLERATING','記事のレート');
define('_THANKSVOTEARTICLE','投票ありがとうございました');
define('_ALREADYVOTEDARTICLE','あなたはすでにこの記事に投票済みです');
define('_BACKTOARTICLEPAGE','記事のページに戻る');
define('_DIDNTRATE','スコアが選択されていません');
define('_NOINFO4TOPIC','選択したトピックの情報がありません');
define('_GOTONEWSINDEX','新しいインデックスへ移動');
define('_SELECTNEWTOPIC','新しいトピックを選択');
define('_GOTOHOME','トップページへ');
define('_SEARCHONTOPIC','このトピックから検索');
define('_SEARCHDIS','コメント検索');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ARTICLEADMIN','記事／文章');
define('_ADDARTICLE','記事追加');
define('_EDITARTICLE','記事編集');
define('_USERPROFILE','ユーザープロフィール');
define('_EMAILUSER','Email ユーザー');
define('_SENDPM','プライベートメッセージ送信');
define('_SELECTTOPIC','トピック選択');
define('_PUBLISHINHOME','トップで公開しますか？');
define('_ACTIVATECOMMENTS','この文章のコメントは有効ですか？');
define('_DISPLAY_ORDER','Display Order');
define('_NORMAL','Normal');
define('_TOP_MOST','Top Most');
define('_STORYTEXT','本文');
define('_ARESUREURL','テキストにURLを含みますか？確認してますか？');
define('_NOTES','Notes');
define('_PROGRAMSTORY','この文章の発行日時を指定しますか？');
define('_NOWIS','現在の日時');
define('_HAS','has');
define('_DELETESTORY','文章削除');
define('_PREVIEWSTORY','文章プレビュー');
define('_POSTSTORY','文章投稿');
define('_CATEGORIESADMIN','カテゴリー');
define('_CATEGORYADD','カテゴリー追加');
define('_CATEGORYNAME','カテゴリー名');
define('_ASELECTCATEGORY','カテゴリー選択');
define('_NOARTCATEDIT','あなたはその<i>記事</i>カテゴリーを編集できません');
define('_DELETECATEGORY','カテゴリー削除');
define('_SELECTCATDEL','選択したカテゴリーの削除');
define('_CATDELETED','カテゴリー削除完了！');
define('_NOTAUTHORIZED1','あなたにその記事を扱う権利がありません！');
define('_NOTAUTHORIZED2','あなたは公開済みの記事を 編集／削除 できません');
define('_REMOVESTORY','文章 ID # を取り除きます');
define('_AUTOSTORYEDIT','自動発行文書の編集');
define('_CHNGPROGRAMSTORY','その文章の日時指定：:');
define('_GOTOADMIN','管理セクションへ移動');
define('_ALLSTORIES','全文章');
define('_STORIESINSIDE','中の');
define('_DELCATWARNING1','このカテゴリーとその中にある文章・コメントを削除できます');
define('_DELCATWARNING2','または全ての文章を新しいカテゴリーに移動できます');
define('_DELCATWARNING3','あなたは、なにをしたいのですか？');
define('_YESDEL','はい！全て削除します！');
define('_NOMOVE','いいえ！この文章を動かします');
define('_MOVESTORIES','文章を新しいカテゴリーへ移動');
define('_MOVEDONE','おめでとう！文章の移動が完了しました！');
define('_WILLBEMOVED','移動完了。');
define('_SUBMISSIONSADMIN','未承認文章');
define('_NEWSUBMISSIONS','未承認文章があります');
define('_NOSUBMISSIONS','未承認文章はありません');
define('_ATTACHAPOLL','投票を記事に付け加える');
define('_LEAVEBLANKTONOTATTACH','（空白のまま記事を投稿すると投票は外されます）<br/>（NOTE：予定されている記事は、投票を付けるはずではありませんでした）');

define('_CATADDED','カテゴリー追加完了！');
