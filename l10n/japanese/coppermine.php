<?php
/*********************************************
   Coppermine 1.3.1 for CPG Dragonfly™
  ********************************************
   Port Copyright © 2004-2006 CPG-Nuke Dev Team
  http://dragonflycms.org
  ********************************************
   v1.1 (c) by Grégory Demar http://coppermine.sf.net/
   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.
  ********************************************
  $Source: /cvs/l10n/japanese/coppermine.php,v $
  $Revision: 9.8 $
  $Author: djmaze $
  $Date: 2006/02/12 16:02:01 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS','閲覧数');
define('PIC_VOTES','投票数');
define('PIC_COMMENTS','コメント');

// lang_translation_info
define('LANG_NAME_ENGLISH','Japanese');
define('LANG_NAME_NATIVE','Japanese');
define('LANG_COUNTRY_CODE','jp');
define('TRANS_NAME','katops');
define('TRANS_EMAIL','ykato@infoseek.to');
define('TRANS_WEBSITE','2-17-2005');
define('TRANS_DATE','');
define('CHARSET', 'UTF-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Yes');
define('NO', 'No');
// some common strings
define('BACK','戻る');
define('CONTINU', 'Finish');
define('INFO','情報');
//define('_ERROR', 'Error'); //already in main lang file
define('ALBUM_DATE_FMT','%Y年%B %d日');
define('LASTCOM_DATE_FMT','%y/%m/%d @ %H:%M');
define('LASTUP_DATE_FMT','%Y年%B %d日');
define('REGISTER_DATE_FMT','%Y年%B %d日');
define('LASTHIT_DATE_FMT','%Y年%B %d日 %I:%M %p');
define('COMMENT_DATE_FMT','%Y年%B %d日 %I:%M %p');

// lang_meta_album_names
define('RANDOM','ランダム写真');
define('LASTUP','新着写真');
define('LASTUPBY','私の新着写真');
define('LASTALB','新着アルバム');
define('LASTCOM','新着コメント');
define('LASTCOMBY','私の新着コメント');
define('TOPN','最多閲覧');
define('TOPRATED','最高評価');
define('LASTHITS','最終閲覧');
define('SEARCH','検索結果');
define('FAVPICS','お気に入り写真');

// lang_errors
define('ACCESS_DENIED','このページ対するアクセス権がありません。');
define('PERM_DENIED','この操作を行う権限がありません。');
define('PARAM_MISSING','必須パラメータ無しでスクリプトが実行されました。');
define('NON_EXIST_AP','選択されたアルバム／写真が存在しません！');
define('QUOTA_EXCEEDED','ディスク使用量オーバー<br /><br />あなたが使用できるディスク容量は [quote]Kbです。現在 [space]Kb使用しています。この写真を追加する余裕はありません。');
define('GD_FILE_TYPE_ERR','GD image library を使用する場合、JPEGかPNG形式のファイルのみ利用可能です。');
define('INVALID_IMAGE','あなたの登録しようとした画像は、破損しているか、GD Library で処理できません。');
define('RESIZE_FAILED','画像サイズが小さいため、サムネイルを作成できません。');
define('NO_IMG_TO_DISPLAY','表示する画像はありません。');
define('NON_EXIST_CAT','選択したカテゴリーは存在しません。');
define('ORPHAN_CAT','存在しない親カテゴリーに属しています。カテゴリーマネージャーを使って問題を解決してください。');
define('DIRECTORY_RO','「%s」 ディレクトリに書き込み権がないため、削除できません。');
define('NON_EXIST_COMMENT','選択したコメントは存在しません。');
define('PIC_IN_INVALID_ALBUM','存在しないアルバム(%s)内に写真があります！？');
define('BANNED','あなたはこのサイトへのアクセスを拒絶されています。');
define('NOT_WITH_UDB','フォーラムソフトに統合された為、この機能は無効にされています。フォーラムソフトで管理される為、この機能に関する設定は、ここでサポートされません。');
define('MEMBERS_ONLY','この操作はメンバー以外できません。メンバー登録してください。');
define('MUSTBE_GOD','この操作はサイト管理者以外できません。サイト管理者のIDでログインして操作してください。');
define('NO_IMG_TO_APPROVE','承認されていない画像');

// lang_main_menu
define('ALB_LIST_TITLE','アルバムリストへ移動');
define('ALB_LIST_LNK','アルバムリスト');
define('MY_GAL_TITLE','パーソナルギャラリーへ移動');
define('MY_GAL_LNK','マイギャラリー');
define('MY_PROF_LNK','マイプロフィール');
define('MY_PROF_TITLE','ディスク容量とグループの確認');
define('ADM_MODE_TITLE','管理者モードに変更');
define('ADM_MODE_LNK','管理者モード');
define('USR_MODE_TITLE','ユーザーも土に変更');
define('USR_MODE_LNK','ユーザーモード');
define('UPLOAD_PIC_TITLE','アルバムに写真をアップロード');
define('UPLOAD_PIC_LNK','写真のアップロード');
define('REGISTER_TITLE','アカウントの作成');
define('REGISTER_LNK','ユーザー登録');
define('LOGIN_LNK','ログイン');
define('LOGOUT_LNK','ログアウト');
define('LASTUP_LNK','最新アップロード');
define('LASTUP_TITLE','最近のアップロード');
define('LASTCOM_TITLE','最近のコメント');
define('LASTCOM_LNK','最新コメント');
define('TOPN_TITLE','よく見られた写真');
define('TOPN_LNK','最多閲覧');
define('TOPRATED_TITLE','高評価の写真');
define('TOPRATED_LNK','高評価');
define('SEARCH_TITLE','写真検索');
define('SEARCH_LNK','検索');
define('FAV_TITLE','お気に入り');
define('FAV_LNK','お気に入り');
define('HELP_TITLE', 'HELP');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK','アップロード承認');
define('CONFIG_LNK','設定');
define('ALBUMS_LNK','アルバム');
define('CATEGORIES_LNK','カテゴリー');
define('USERS_LNK','ユーザー');
define('GROUPS_LNK','グループ');
define('COMMENTS_LNK','コメント');
define('SEARCHNEW_LNK','写真の一括登録');
define('UTIL_LNK','写真のサイズ変更');
define('BAN_LNK','アクセス拒否ユーザー');

// lang_user_admin_menu
define('ALBMGR_LNK','マイアルバムの作成／整理');
define('MODIFYALB_LNK','マイアルバムの修正');
//define('MY_PROF_LNK', 'My profile');

// lang_cat_list
define('CATEGORY','カテゴリー');
define('ALBUMS','アルバム');
//define('PICTURES', 'Pictures');

// lang_album_list
define('ALBUM_ON_PAGE','アルバム数 %d／%dページ中');
// lang_thumb_view
define('DATE','日付');
define('NAME','ファイル名');
define('TITLE','タイトル');
define('SORT_DA','日付の昇順で並び替え');
define('SORT_DD','日付の降順で並び替え');
define('SORT_NA','ファイル名の昇順で並び替え');
define('SORT_ND','ファイル名の降順で並び替え');
define('SORT_TA','タイトルの昇順で並び替え');
define('SORT_TD','タイトルの降順で並び替え');
define('PIC_ON_PAGE','写真枚数 %d／%dページ中');
define('USER_ON_PAGE','ユーザー数%d／%dページ中');
define('SORT_RA','評価の昇順で並び替え');
define('SORT_RD','評価の降順で並び替え');
define('THUMB_RATING','評価');
define('SORT_TITLE','写真の並べ方：');

// lang_img_nav_bar
define('THUMB_TITLE','サムネイルに戻る');
define('PIC_INFO_TITLE','写真情報の表示／非表示');
define('SLIDESHOW_TITLE','スライドショー');
define('SLIDESHOW_DISABLED','スライドショーは使えません');
define('SLIDESHOW_DISABLED_MSG','この操作はメンバーのみです。登録してください。');
define('ECARD_TITLE','e-card を送る');
define('ECARD_DISABLED','e-card は使えません');
define('ECARD_DISABLED_MSG','e-card を送信する権限がありません。');
define('PREV_TITLE','前へ');
define('NEXT_TITLE','次へ');
define('PIC_POS','写真 %s/%s');
define('NO_MORE_IMAGES','これが最後の写真です');
define('NO_LESS_IMAGES','これが最初の写真です');

// lang_rate_pic
define('RATE_THIS_PIC','この写真を評価する');
define('NO_VOTES','(未評価)');
define('RATING','(現在の評価： %s／5 : 投票数 %s件)');
define('RUBBISH','最悪');
define('POOR','悪い');
define('FAIR','普通');
define('GOOD','良い');
define('EXCELLENT','素晴らしい');
define('GREAT','最高');

// lang_cpg_die
//define('INFO', 'Information');
//define('ERROR', 'Error');
define('_CRITICAL_ERROR','致命的なエラー');
define('FILE','ファイル：');
define('LINE','行：');

// lang_display_thumbnails
define('FILENAME','ファイル名：');
define('FILESIZE','ファイルサイズ：');
define('DIMENSIONS','大きさ：');
define('DATE_ADDED','登録日：');

// lang_get_pic_data
define('N_COMMENTS','コメント数 %s');
define('N_VIEWS','閲覧回数 %s');
define('N_VOTES','(投票数 %s)');


// lang_albmgr_php
define('ALB_NEED_NAME','アルバム名が必要です！');
define('CONFIRM_MODIFS','本当に更新しますか？');
define('NO_CHANGE','変更されていません！');
define('NEW_ALBUM','新しいアルバム');
define('CONFIRM_DELETE1','本当にこのアルバムを削除しますか？');
define('CONFIRM_DELETE2','全ての写真とコメントが削除されます！');
define('SELECT_FIRST','最初にアルバムを選んでください');
define('ALB_MRG','アルバム管理');
define('MY_GALLERY','* マイギャラリー *');
define('NO_CATEGORY','* カテゴリー無し *');
define('DELETE','削除');
define('NEW','新規作成');
define('APPLY_MODIFS','更新の適用');
define('SELECT_CATEGORY','カテゴリー選択');

// lang_catmgr_php
define('MISS_PARAM','「%s」の操作に必要なパラメータがありません！');
define('UNKNOWN_CAT','選択したカテゴリーはデータベースに存在しません');
define('USERGAL_CAT_RO','ユーザーギャラリーのカテゴリーは削除できません！');
define('MANAGE_CAT','カテゴリー管理');
define('CONFIRM_DELETE_CAT','本当にこのカテゴリを削除しますか');
//define('CATEGORY', 'Category');
define('OPERATIONS','操作');
define('MOVE_INTO','移動先');
define('UPDATE_CREATE','カテゴリーの作成／更新');
define('PARENT_CAT','親カテゴリー');
define('CAT_TITLE','カテゴリー名');
define('CAT_DESC','カテゴリーの説明');

// lang_config_php
define('CONFIG_TITLE','設定');
define('RESTORE_CFG','初期設定に戻す');
define('SAVE_CFG','新しい設定を保存する');
define('NOTES', 'Notes');
//define('INFO', 'Information');
define('UPD_SUCCESS','Coppermine の設定が更新されました');
define('RESTORE_SUCCESS','Coppermine を初期設定に戻しました');
define('NAME_A','写真名の昇順');
define('NAME_D','写真名の降順');
define('TITLE_A','タイトルの昇順');
define('TITLE_D','タイトルの降順');
define('DATE_A','日付の昇順');
define('DATE_D','日付の降順');
define('RATING_A','評価の昇順');
define('RATING_D','評価の降順');
define('TH_ANY','最大解像度');
define('TH_HT','高');
define('TH_WD','幅');


// lang_db_input_php
define('EMPTY_NAME_OR_COM','名前とコメントを入力してください');
define('COM_ADDED','コメントが追加されました');
define('ALB_NEED_TITLE','アルバム名を入力してください！');
define('NO_UDP_NEEDED','更新は必要ありません。');
define('ALB_UPDATED','アルバムが更新されました');
define('UNKNOWN_ALBUM','選択したアルバムが存在しないか、アップロードする権限がありません。');
define('NO_PIC_UPLOADED','アップロードできませんでした！<br /><br />選択された写真か、サーバーに問題がないか確認してください。');
define('ERR_MKDIR','%s ディレクトリは作れませんでした！');
define('DEST_DIR_RO','%s ディレクトリはスクリプトによる書き込みができません！');
define('ERR_MOVE','%s を %s に移動できません！');
define('ERR_FSIZE_TOO_LARGE','あなたがアップロードした写真は大きすぎます(最大サイズは %s × %s です)！');
define('ERR_IMGSIZE_TOO_LARGE','あなたがアップロードした写真は大きすぎます(最大サイズは %s Kb です)！');
define('ERR_INVALID_IMG','あなたがアップローした写真は有効ではありません！');
define('ALLOWED_IMG_TYPES','%s のみアップロードできます');
define('ERR_INSERT_PIC','「%s」をアルバムに登録できません');
define('UPLOAD_SUCCESS','あなたの写真はアップロードされました。<br /><br />'.(is_admin()) ? '' :'管理者の承認後登録されます');
//define('INFO', 'Information');
define('ERR_COMMENT_EMPTY','コメントが空白です！');
define('ERR_INVALID_FEXT','次の拡張子のファイルのみ登録できます：<br /><br />%s');
define('NO_FLOOD','申し訳ありません。あなたはこの写真のコメントを既に登録しています。<br /><br />登録したコメントを修正してください。');
define('REDIRECT_MSG','戻されました。<br /><br /><br />ページが自動的に更新されない場合「続く」を押してください。');
define('UPL_SUCCESS','あなたの写真は登録されました');

// lang_delete_php
define('CAPTION','脚注');
define('FS_PIC','最大画像');
define('DEL_SUCCESS','削除成功');
define('NS_PIC','標準画像');
define('ERR_DEL','削除不可');
define('THUMB_PIC','サムネイル');
//define('COMMENT', 'comment');
define('IM_IN_ALB','アルバム内の画像');
define('ALB_DEL_SUCCESS','アルバム「%s」が削除されました');
define('ALB_MGR','アルバム管理');
define('ERR_INVALID_DATA','「%s」に不正なデータがあります');
define('CREATE_ALB','アルバム「%s」作成中');
define('UPDATE_ALB','アルバム「%s」のタイトル「%s」とインデックス「%s」更新中');
define('DEL_PIC','写真削除');
define('DEL_ALB','アルバム削除');
define('DEL_USER','ユーザー削除');
//define('ERR_UNKNOWN_USER', 'The selected user does not exist !');
define('COMMENT_DELETED','コメントが削除されました');

// lang_display_image_php
define('PIC_CONFIRM_DEL','警告、グループを削除した場合、グループに属していたユーザーは 「Registered」　グループに移動します！続けますか？');
define('DEL_THIS_PIC','この写真を削除する');
define('SIZE','%s × %s ピクセル');
define('VIEWS','%s 回');
define('SLIDESHOW','スライドショー');
define('STOP_SLIDESHOW','スライドショーの停止');
define('VIEW_FS','クリックで最大画像を表示');
define('EDIT_PIC','写真情報の編集');

// lang_picinfo
define('PIC_INF_TITLE','写真情報');
define('PIC_INF_FILENAME','ファイル名');
define('ALBUM_NAME','アルバム名');
define('PIC_INFO_RATING','評価(投票数 %s件)');
define('KEYWORDS','キーワード');
define('PIC_INF_FILE_SIZE','ファイルサイズ');
define('PIC_INF_DIMENSIONS','解像度');
define('DISPLAYED','表示');
define('CAMERA','カメラ');
define('DATE_TAKEN','撮影日');
define('APERTURE','レンズ');
define('EXPOSURE_TIME','露出時間');
define('FOCAL_LENGTH','焦点距離');
define('COMMENT','コメント');
define('ADDFAV','お気に入りに追加');
define('ADDFAVPHRASE','お気に入り');
define('REMFAV','お気に入りから削除');
define('IPTCTITLE','IPTC タイトル');
define('IPTCCOPYRIGHT','IPTC 著作権');
define('IPTCKEYWORDS','IPTC キーワード');
define('IPTCCATEGORY','IPTC カテゴリ');
define('IPTCSUBCATEGORIES','IPTC サブカテゴリ');
define('BOOKMARK_PAGE','ブックマーク');
define('REMOVEFAV','お気に入りアルバムから削除');
define('ADDEDTOFAV','お気に入りアルバムに追加');

// lang_display_comments
define('OK', 'OK');
define('COM_EDIT_TITLE','コメントの編集');
define('CONFIRM_DELETE_COM','このコメントを削除しますか？');
define('ADD_YOUR_COMMENT','コメントの追加');
define('COM_NAME','名前');
//define('COMMENT', 'Comment');
define('YOUR_NAME','');

// lang_fullsize_popup
define('CLICK_TO_CLOSE','画像のクリックでウインドウを閉じる');

// lang_ecard_php
define('E_TITLE','e-card の送信');
define('INVALID_EMAIL','<b>警告</b>：メールアドレスが間違っています！');
define('E_ECARD_TITLE','この e-card を %s からあなたに');
define('VIEW_ECARD','e-card が正しく表示されない場合、このリンクをクリックしてください');
define('VIEW_MORE_PICS','もっと写真を見る場合は、このリンクをクリックしてください！');
define('SEND_SUCCESS','e-card を送信しました');
define('SEND_FAILED','申し訳ありません、e-card を送信することができませんでした...');
define('FROM','');
define('_YOUR_NAME','送信者名');
define('YOUR_EMAIL','送信者のメールアドレス');
define('TO', 'To');
define('RCPT_NAME','受信者名');
define('RCPT_EMAIL','受信者のメールアドレス');
define('GREETINGS','あいさつ');
define('MESSAGE','メッセージ');
define('ECARD_LINK_CORRUPT','申し訳ありません、この e-card をあなたのメールソフトでは表示できません。このリンクをWWWブラウザに入力して下さい。');

// lang_editpics_php
define('PIC_INFO','写真情報');
define('ALBUM','アルバム');
define('EDIT_TITLE','タイトル');
define('DESC','説明');
//define('KEYWORDS', 'Keywords');
define('PIC_INFO_STR','%s×%s - %sKB - 閲覧回数 %s - 投票数 %s');
define('APPROVE','写真の承認');
define('POSTPONE_APP','承認の延期');
//define('DEL_PIC', 'Delete picture');
define('READ_EXIF','EXIF の再読込');
define('RESET_VIEW_COUNT','閲覧回数の初期化');
define('RESET_VOTES','投票数の初期化');
define('DEL_COMM','コメントの削除');
define('UPL_APPROVAL','アップロードの承認');
define('EDIT_PICS','写真の編集');
define('SEE_NEXT','前へ');
define('SEE_PREV','次へ');
define('N_PIC','写真枚数 %s');
define('N_OF_PIC_TO_DISP','1画面の写真表示数');
define('APPLY','更新の適用');

// lang_groupmgr_php
define('GROUP_NAME','グループ名');
define('DISK_QUOTA','ディスク容量');
define('CAN_RATE','写真の評価を許可');
define('CAN_SEND_ECARDS','e-card の送信を許可');
define('CAN_POST_COM','コメントの投稿を許可');
define('CAN_UPLOAD','写真のアップロードを許可');
define('CAN_HAVE_GALLERY','パーソナルギャラリーの作成を許可');
//define('APPLY', 'Apply modifications');
define('CREATE_NEW_GROUP','新しいグループの作成');
define('DEL_GROUPS','選択したグループの削除');
define('CONFIRM_DEL','警告、グループを削除した場合、グループに属していたユーザーは \'Registered\'　グループに移動します！続けますか？');
define('GROUP_TITLE','ユーザーグループ管理');
define('APPROVAL_1','公開アルバムへのアップロードの承認 (1)');
define('APPROVAL_2','ユーザーアルバムへのアップロードの承認 (1)');
define('NOTE1','<b>(1)</b> 公開されたアルバムへのアップロードは管理者の承認が必要です。');
define('NOTE2','<b>(2)</b> ユーザーアルバムへのアップロードは管理者の承認が必要です。');
//define('NOTES', 'Notes');

// lang_index_php
define('WELCOME','ようこそ！');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB','本当にこのアルバムを削除しますか<br />全ての写真とコメントも削除されます。');
//define('DELETE', 'DELETE');
define('MODIFY','属性');
//define('EDIT_PICS', 'EDIT PICS');

// lang_list_categories
define('HOME','ホーム');
define('STAT1','カテゴリ数:<b>[cat]</b>   アルバム数:<b>[albums]</b>   写真枚数:<b>[pictures]</b>   コメント数:<b>[comments]</b>   閲覧回数:<b>[views]</b>');
define('STAT2','アルバム数:<b>[albums]</b>   写真枚数:<b>[pictures]</b>   閲覧回数:<b>[views]</b>');
define('XX_S_GALLERY','%s のギャラリー');
define('STAT3','アルバム数:<b>[albums]</b>   写真枚数:<b>[pictures]</b>   コメント数:<b>[comments]</b>   閲覧回数:<b>[views]</b>');

// lang_list_users
define('USER_LIST','ユーザー一覧');
define('NO_USER_GAL','ユーザーギャラリーはありません');
define('N_ALBUMS','アルバム数 %s');
define('N_PICS','写真枚数 %s');

// lang_list_albums
define('N_PICTURES','写真枚数 %s');
define('LAST_ADDED','最終追加日：%s');

// lang_modifyalb_php
define('UPD_ALB_N','「%s」アルバムの更新');
define('GENERAL_SETTINGS','一般設定');
define('ALB_TITLE','アルバム名');
define('ALB_CAT','カテゴリー');
define('ALB_DESC','説明');
define('ALB_THUMB','サムネイル');
define('ALB_PERM','アルバムに対する権限');
define('CAN_VIEW','アルバムの閲覧許可者');
define('MOD_CAN_UPLOAD','未登録者が写真をアップロードできる');
define('CAN_POST_COMMENTS','未登録者がコメントできる');
define('MOD_CAN_RATE','未登録者が評価できる');
define('USER_GAL','ユーザーギャラリー');
define('NO_CAT','* カテゴリー無し *');
define('ALB_EMPTY','アルバムは空です');
define('LAST_UPLOADED','最新アップロード');
define('PUBLIC_ALB','全員(公開アルバム)');
define('ME_ONLY','私のみ');
define('OWNER_ONLY','アルバム所有者(%s)のみ');
define('GROUPP_ONLY','「%s」グループ所属者のみ');
define('ERR_NO_ALB_TO_MODIFY','修正できるアルバムが有りません。まずアルバムを作ってください！');
define('UPDATE','アルバムの更新');

// lang_rate_pic_php
define('ALREADY_RATED','申し訳ありません、この写真を既に評価しています');
define('RATE_OK','あなたの投票は承認されました');

// lang_register_php
define('USERNAME','ユーザー名');
define('GROUP','グループ');
define('DISK_USAGE','ディスク使用量');
define('X_S_PROFILE','%sのプロフィール');

// lang_reviewcom_php
define('REVIEW_TITLE','コメントレビュー');
define('NO_COMMENT','レビューするコメントがありません');
define('N_COMM_DEL','%s件のコメントが削除されました');
define('N_COMM_DISP','表示するコメント数');
define('R_SEE_PREV','前へ');
define('R_SEE_NEXT','次へ');
define('R_DEL_COMM','選択したコメントの削除');

// lang_search_php
define('S_SEARCH','写真集の検索');

// lang_search_new_php
define('PAGE_TITLE','新しい写真の検索');
define('SELECT_DIR','ディレクトリの選択');
define('SELECT_DIR_MSG','ここではFTPによりサーバにアップロードした写真をアルバムに一括登録します<br /><br />写真をアップロードしたディレクトリを選択してください。');
define('NO_PIC_TO_ADD','追加する写真はありません');
define('NEED_ONE_ALBUM','一括登録するにはアルバムが必要です');
define('WARNING','警告');
define('CHANGE_PERM','スクリプトがこのディレクトリに書込めませんでした。写真を追加する前にディレクトリのパーミッションモードを755又は777に変更する必要があります！');
define('TARGET_ALBUM','<b>「%s」の写真を</b> %s <b>に追加する</b>');
define('FOLDER','フォルダ');
define('IMAGE','写真');
//define('ALBUM', 'Album');
define('RESULT','結果');
define('DIR_RO','書き込み権がありません');
define('DIR_CANT_READ','読み込み権がありません');
define('INSERT','新しい写真をギャラリーへ追加');
define('LIST_NEW_PIC','新しい写真の一覧');
define('INSERT_SELECTED','選択した写真の追加');
define('NO_PIC_FOUND','新しい写真はありませんでした');
define('BE_PATIENT','しばらくお待ち下さい。写真の追加には時間がかかります。');
define('SN_NOTES','<ul><li><b>OK</b> : 正常に写真が追加されました。<li><b>DP</b> : 写真が重複して既にデータベースに登録されています。<li><b>PB</b> : 写真を追加出来ませんでした、設定及び写真が登録されるディレクトリのパーミッションを確認してください。<li>OK、DP、PBサインのいずれも表示されなかった場合は、PHPエラーを表示するために破損した写真をクリックしてください。<li>タイムアウトが発生した場合、ブラウザの更新ボタンをクリックしてください。</ul>');
define('SELECT_ALBUM','アルバムの選択');
define('NO_ALBUM','アルバムが選択されていません。戻るをクリックして写真を追加するアルバムを選択してください。');

// lang_upload_php
define('UP_TITLE','写真のアップロード');
define('MAX_FSIZE','アップロード可能なファイルサイズは %s Kb です');
//define('ALBUM', 'Album');
define('PICTURE','写真');
define('PIC_TITLE','写真名');
define('DESCRIPTION','写真の説明');
define('UP_KEYWORDS','キーワード(半角スペースで区切る)');
define('ERR_NO_ALB_UPLOADABLES','あなたにアップロードを許可されたアルバムはありません。まずアルバムを作ってください。');

// lang_usermgr_php
define('U_TITLE','ユーザー管理');
//define('NAME_A', 'Name ascending');
//define('NAME_D', 'Name descending');
define('GROUP_A','グループ名の昇順');
define('GROUP_D','グループ名の降順');
define('REG_A','登録日の昇順');
define('REG_D','登録日の降順');
define('PIC_A','写真枚数の昇順');
define('PIC_D','写真枚数の降順');
define('DISKU_A','ディスク使用量の昇順');
define('DISKU_D','ディスク使用量の降順');
define('SORT_BY','ユーザーの並び替え');
define('ERR_NO_USERS','ユーザーテーブルが空です！');
define('ERR_EDIT_SELF','自分自身のプロフィールは編集できません。「マイプロフィール」を使用してください。');
define('EDIT','編集');
//define('DELETE', 'DELETE');
define('U_NAME','ユーザー名');
//define('GROUP', 'Group');
define('INACTIVE','無効化');
//define('OPERATIONS', 'Operations');
define('PICTURES','写真');
define('DISK_SPACE','使用中容量／最大容量');
define('REGISTERED_ON','登録年月日');
define('U_USER_ON_P_PAGES','ユーザー数 %d／%d ページ中');
define('USER_CONFIRM_DEL','本当にこのユーザーを削除しますか？<br />このユーザーのアルバムと写真は全て削除されます。');
define('MAIL','メール');
define('ERR_UNKNOWN_USER','選択したユーザーは存在しません！');
define('MODIFY_USER','ユーザーの変更');
//define('NOTES', 'Notes');
define('NOTE_LIST','<li>現在のパスワードを変更したくない場合は、「パスワード」欄を空白にしてください。');
define('PASSWORD','パスワード');
define('USER_ACTIVE_CP','ユーザーの有効化');
define('USER_GROUP_CP','グループ');
define('USER_EMAIL','メールアドレス');
define('USER_WEB_SITE','ホームページ');
define('CREATE_NEW_USER','新規ユーザーの作成');
define('USER_FROM','住所');
define('USER_INTERESTS','趣味');
define('USER_OCC','職業');

// lang_util_php
define('UTIL_TITLE','写真のサイズ変更');
define('WHAT_IT_DOES','処理内容');
define('WHAT_UPDATE_TITLES','タイトルをファイル名にする');
define('WHAT_DELETE_TITLE','タイトルの削除');
define('WHAT_REBUILD','サムネイルの再構築と写真のサイズ変更');
define('WHAT_DELETE_ORIGINALS','オリジナルの写真を削除して、サイズ変更後の写真と入れ替える');
define('U_FILE','ファイル');
define('TITLE_SET_TO','タイトル設定');
define('SUBMIT_FORM','送信');
define('UPDATED_SUCCESFULLY','更新完了');
define('ERROR_CREATE','作成中にエラー発生');
define('CONTIN','さらに写真を処理する');
define('MAIN_SUCCESS','%s をメインの写真に変更しました');
define('ERROR_RENAME','%s から %s へ更新中にエラー発生');
define('ERROR_NOT_FOUND','%s はみつかりませんでした');
define('U_BACK','メインに戻る');
define('THUMBS_WAIT','サムネイルの再構築または写真のサイズ変更中、お待ち下さい...');
define('THUMBS_CONTINUE_WAIT','サムネイルの再構築または写真のサイズ変更を継続中...');
define('TITLES_WAIT','タイトルの変更中、お待ち下さい...');
define('DELETE_WAIT','タイトルの削除中、お待ち下さい...');
define('REPLACE_WAIT','オリジナルの写真を削除し、サイズ変更後の写真と入れ替えています、お待ち下さい...');
define('INSTRUCTION','簡単設定');
define('INSTRUCTION_ACTION','操作の選択');
define('INSTRUCTION_PARAMETER','パラメータの設定');
define('INSTRUCTION_ALBUM','アルバムの選択');
define('INSTRUCTION_PRESS','$s を押す');
define('U_UPDATE','サムネイルの再構築または写真のサイズ変更');
define('UPDATE_WHAT','更新対象');
define('UPDATE_THUMB','サムネイルの再構築のみ');
define('UPDATE_PIC','写真のサイズ変更のみ');
define('UPDATE_BOTH','サムネイルの再構築と写真のサイズ変更');
define('UPDATE_NUMBER','クリックあたりの写真処理数');
define('UPDATE_OPTION','(タイムアウトする時は、この数値を低めに設定してください)');
define('FILENAME_TITLE','ファイル名＆写真名');
define('FILENAME_HOW','ファイル名の変更方法');
define('FILENAME_REMOVE','.jpgを空白付きの _ (アンダースコア)に変更する');
define('FILENAME_EURO','2003_11_23_13_20_20.jpg を 23/11/2003 13:20 に変更する');
define('FILENAME_US','2003_11_23_13_20_20.jpg を 11/23/2003 13:20 に変更する');
define('FILENAME_TIME','2003_11_23_13_20_20.jpg を 13:20 に変更する');
define('UT_DELETE','写真名かオリジナルサイズの写真を削除する');
define('DELETE_TITLE','写真名を削除する');
define('DELETE_ORIGINAL','オリジナルの写真を削除する');
define('DELETE_REPLACE','オリジナルの写真を削除し、サイズ変更後の画像と入れ替える');
//define('SELECT_ALBUM', 'Select album');

// lang_pagetitle_php
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
$lang_usermgr_php = array(
    'name_a' => 'Name ascending',
    'name_d' => 'Name descending',
    'group_a' => 'Group ascending',
    'group_d' => 'Group descending',
    'reg_a' => 'Reg date ascending',
    'reg_d' => 'Reg date descending',
    'pic_a' => 'Pic count ascending',
    'pic_d' => 'Pic count descending',
    'disku_a' => 'Disk usage ascending',
    'disku_d' => 'Disk usage descending',
    );
$lang_byte_units = array('Bytes', 'KB', 'MB');
// Day of weeks and months
$lang_day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
$lang_meta_album_names = array(
    'random' => 'Random pictures',
    'lastup' => 'Last additions',
    'lastupby' => 'My Last additions', // new 1.2.2
    'lastalb' => 'Last updated albums',
    'lastcom' => 'Last comments',
    'lastcomby' => 'My Last comments', // new 1.2.2
    'topn' => 'Most viewed',
    'toprated' => 'Top rated',
    'lasthits' => 'Last viewed',
    'search' => 'Search results',
    'favpics' => 'Favorite Pictures' // changed in cpg1.2.0nuke
    );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array(
    'title' => 'Configuration',
    'restore_cfg' => 'Restore factory defaults',
    'save_cfg' => 'Save new configuration',
    'notes' => 'Notes',
    'info' => 'Information',
    'upd_success' => 'Coppermine configuration was updated',
    'restore_success' => 'Coppermine default configuration restored',
    'name_a' => 'Name ascending',
    'name_d' => 'Name descending',
    'title_a' => 'Title ascending',
    'title_d' => 'Title descending',
    'date_a' => 'Date ascending',
    'date_d' => 'Date descending',
    'rating_a' => 'Rating ascending', // new in cpg1.2.0nuke
    'rating_d' => 'Rating descending', // new in cpg1.2.0nuke
    'th_any' => 'Max Aspect',
    'th_ht' => 'Height',
    'th_wd' => 'Width',
    );
// start left side interpretation
$lang_config_data = array(
    // 'General settings',
    'General settings',
    array('Gallery name', 'gallery_name', 0),
    array('Gallery description', 'gallery_description', 0),
    array('Gallery administrator email', 'gallery_admin_email', 0),
    array('Address to nuke folder ie http://example.com/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
    array('Theme', 'theme', 6),
    array('Page Specific Titles instead of >Coppermine', 'nice_titles', 1),
//'Album list view',
    'Album list view',
    array('Width of the main table (pixels or %)', 'main_table_width', 0),
    array('Number of levels of sub-categories to display', 'subcat_level', 0),
    array('Number of albums to display', 'albums_per_page', 0),
    array('Number of columns for the album list', 'album_list_cols', 0),
    array('Size of thumbnails in pixels', 'alb_list_thumb_size', 0),
    array('The content of the main page', 'main_page_layout', 0),
    array('Show first level album thumbnails in categories', 'first_level', 1), 
//'Thumbnail view',
    'Thumbnail view',
    array('Number of columns on thumbnail page', 'thumbcols', 0),
    array('Number of rows on thumbnail page', 'thumbrows', 0),
    array('Maximum number of tabs to display', 'max_tabs', 0),
    array('Display picture caption (in addition to title) below the thumbnail', 'caption_in_thumbview', 1),
    array('Display number of comments below the thumbnail', 'display_comment_count', 1),
    array('Default sort order for pictures', 'default_sort_order', 3),
    array('Minimum number of votes for a picture to appear in the \'top-rated\' list', 'min_votes_for_rating', 0),
    array('Alts and title tags of thumbnail show title and keyword instead of picinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
 //'Display Image &amp; Comment settings',
    'Display Image &amp; Comment settings',
    array('Width of the table for picture display (pixels or %)', 'picture_table_width', 0),
    array('Picture information are visible by default', 'display_pic_info', 1),
    array('Filter bad words in comments', 'filter_bad_words', 1),
    array('Allow smiles in comments', 'enable_smilies', 1),
    array('Allow several consecutive comments on one pic from the same user', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
    array('Email site admin upon comment submission' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
    array('Max length for an image description', 'max_img_desc_length', 0),
    array('Max number of characters in a word', 'max_com_wlength', 0),
    array('Max number of lines in a comment', 'max_com_lines', 0),
    array('Maximum length of a comment', 'max_com_size', 0),
    array('Show film strip', 'display_film_strip', 1),
    array('Number of items in film strip', 'max_film_strip_items', 0),
    array('Allow viewing of full size pic by anonymous', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
    array('Number of days between being able to vote on the same image','keep_votes_time',0), // new in cpg1.2.2c nuke
    array('Show fullsize picture in slideshow','fullsize_slideshow',1),
    array('Show blocks on the right of displayimage if right blocks are on at module level?', 'right_blocks', 1), // new 1.2.2
// 'Pictures and thumbnails settings',
    'Pictures and thumbnails settings',
    array('Quality for JPEG files', 'jpeg_qual', 0),
    array('Place watermark on image', 'watermark', 1),
    array('Max dimension of a thumbnail <b>*</b>', 'thumb_width', 0),
    array('Use dimension ( width or height or Max aspect for thumbnail )<b>*</b>', 'thumb_use', 7),
    array('Create intermediate pictures', 'make_intermediate', 1),
    array('Max width or height of an intermediate picture <b>*</b>', 'picture_width', 0),
    array('Max size for uploaded pictures (KB)', 'max_upl_size', 0),
    array('Max width or height for uploaded pictures (pixels)', 'max_upl_width_height', 0), 
    array('Allow multiple Files to be upload with same file name', 'samename', 1), 
//'User settings',
    'User settings',
    array('Allow new user registrations', 'allow_user_registration', 1),
/*
    array('User registration requires email verification', 'reg_requires_valid_email', 1),
    array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),
*/
    array('Users can can have private albums', 'allow_private_albums', 1),
    array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',
    'Custom fields for image description (leave blank if unused)',
    array('Field 1 name', 'user_field1_name', 0),
    array('Field 2 name', 'user_field2_name', 0),
    array('Field 3 name', 'user_field3_name', 0),
    array('Field 4 name', 'user_field4_name', 0), 
	//'Pictures and thumbnails advanced settings',
    'Pictures and thumbnails advanced settings',
    array('Show private album Icon to unlogged user', 'show_private', 1),
    array('Characters forbidden in filenames', 'forbiden_fname_char', 0),
    array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions', 0),
    array('Method for resizing images', 'thumb_method', 2),
    array('Path to ImageMagick / netpbm \'convert\' utility (example /usr/bin/X11/)', 'impath', 0),
    array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types', 0),
    array('Command line options for ImageMagick', 'im_options', 0),
    array('Read EXIF data in JPEG files', 'read_exif_data', 1),
    array('Read IPTC data in JPEG files', 'read_iptc_data', 1), // new in cpg1.2.0nuke
    array('The album directory <b>*</b>', 'fullpath', 0),
    array('The directory for user pictures <b>*</b>', 'userpics', 0),
    array('The prefix for intermediate pictures <b>*</b>', 'normal_pfx', 0),
    array('The prefix for thumbnails <b>*</b>', 'thumb_pfx', 0),
    array('Picinfo display filename', 'picinfo_display_filename', 1), 
    array('Picinfo display album name', 'picinfo_display_album_name', 1), 
    array('Picinfo display_file_size', 'picinfo_display_file_size', 1), 
    array('Picinfo display_dimensions', 'picinfo_display_dimensions', 1), 
    array('Picinfo display_count_displayed', 'picinfo_display_count_displayed', 1), 
    array('Picinfo display_URL', 'picinfo_display_URL', 1), 
    array('Picinfo display URL as bookmark link', 'picinfo_display_URL_bookmark', 1), 
    array('Picinfo display fav album link', 'picinfo_display_favorites', 1), 
//    'Cookies &amp; Charset settings',
    'Cookies &amp; Charset settings',
    array('Name of the cookie used by the script', 'cookie_name', 0),
    array('Path of the cookie used by the script', 'cookie_path', 0),
//    'Miscellaneous settings',
    'Miscellaneous settings',
    array('Enable debug mode', 'debug_mode', 1),
    '<br /><div align="center">(*) Fields marked with * must not be changed if you already have pictures in your gallery</div><br />'
    );
// end left side interpretation
