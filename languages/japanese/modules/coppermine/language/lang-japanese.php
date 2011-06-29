<?
/****************************************************************************/
/* Coppermine Photo Gallery 1.2.3 for CMS                                   */
/****************************************************************************/
/****************************************************************************/
/* Port Copyright (C) 2004 Coppermine for CMS Dev Team  		              */
/* http://coppermine.findhere.org/                                          */
/****************************************************************************/
/* Updated by the Coppermine Dev Team  2003                                 */
/* (http://coppermine.sf.net/team/)                                         */
/* see /docs/credits.html for details                                       */
/****************************************************************************/
/* Copyright (C) 2002,2003  Gregory DEMAR <gdemar@wanadoo.fr>               */
/* http://www.chezgreg.net/coppermine/                                      */
/* This program is free software; you can redistribute it and/or modify     */
/* it under the terms of the GNU General Public License as published by     */
/* the Free Software Foundation; either version 2 of the License, or        */
/* (at your option) any later version.                                      */
/*****************************************************************************/
/*   $Id: lang-japanese.php,v 1.1 2004/07/24 21:27:59 akamu Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Japanese');
define('LANG_NAME_NATIVE', 'Japanese');
define('LANG_COUNTRY_CODE', 'jp');
define('TRANS_NAME', 'Mitsuhiro Yoshida');
define('TRANS_EMAIL', 'mits@mitstek.com');
define('TRANS_WEBSITE', 'http://mitstek.com/');
define('TRANS_DATE', '2003-11-07');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'EUC-JP');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'Yes');
define('NO', 'No');

// some common strings
define('BACK', '戻る');
define('CONTINUE', '続ける');
define('INFO', '情報');
define('ERROR', 'エラー');

//// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
define('ALBUM_DATE_FMT', '%Y年%B月%d日');
define('LASTCOM_DATE_FMT', '%y/%m/%d/ %H:%M');
define('LASTUP_DATE_FMT', '%Y年%B月%d日');
define('REGISTER_DATE_FMT', '%Y年%B月%d日');
define('LASTHIT_DATE_FMT', '%Y年%B月%d日 %I:%M %p');
define('COMMENT_DATE_FMT', '%Y年%B月%d日 %I:%M %p');

// short names for Byte, Kilo, Mega
$lang_byte_units = array('バイト','KB','MB',);

// Day of week
$lang_day_of_week = array('日','月','火','水','木','金','土',);
// Day of the month
$lang_month = array('01','02','03','04','05','06','07','08','09','10','11','12',);
// For the word censor
$lang_bad_words = array('*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*',);
// lang_meta_album_names
define('RANDOM', 'ランダム写真');
define('LASTUP', '新着写真');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', '最新アルバム');
define('LASTCOM', '最新コメント');
define('LASTCOMBY', 'My Last comments');
define('TOPN', '最多閲覧');
define('TOPRATED', 'トップレート');
define('LASTHITS', '最終閲覧');
define('SEARCH', '検索結果');
define('FAVPICS', 'お気に入り');

// lang_errors
define('ACCESS_DENIED', 'このページに対するアクセス権がありません。');
define('PERM_DENIED', 'この操作を行う権限がありません。');
define('PARAM_MISSING', '必要なパラメータ無しでスクリプトが実行されました。');
define('NON_EXIST_AP', '選択されたアルバム/写真が存在しません !');
define('QUOTA_EXCEEDED', 'ディスク使用量オーバー<br /><br />あなたが使用できるディスク容量は [quota]Kです、現在 [space]Kを使用しています、この写真を追加するとディスク容量がオーバーします。');
define('GD_FILE_TYPE_ERR', 'GDイメージライブラリーを使用する場合、JPEGとPNG形式のファイルのみ利用可能です。');
define('INVALID_IMAGE', 'あなたがアップロードした画像は破損したか、GDライブラリーで処理することが出来ません。');
define('RESIZE_FAILED', '画像サイズが小さいため、サムネイルを作成出来ません。');
define('NO_IMG_TO_DISPLAY', '表示する画像はありません。');
define('NON_EXIST_CAT', '選択したカテゴリーは存在しません。');
define('ORPHAN_CAT', '存在しない親カテゴリーを持っています。カテゴリーマネージャーを使って問題を解決してください。');
define('DIRECTORY_RO', 'ディレクトリ \'%s\' に書込み権がありません。写真の削除は出来ません。');
define('NON_EXIST_COMMENT', '選択したコメントは存在しません。');
define('PIC_IN_INVALID_ALBUM', '存在しないアルバム(%s)内に写真があります !?');
define('BANNED', 'あなたは現在このサイトへのアクセスを拒否されています。');
define('NOT_WITH_UDB', 'フォーラムソフトに統合された為、この機能はCoppermineで無効にされています。フォーラムソフトで管理される為、この機能に関する設定は、ここでサポートされません。');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');

// lang_main_menu
define('ALB_LIST_TITLE', 'アルバムリストへ移動');
define('ALB_LIST_LNK', 'アルバムリスト');
define('MY_GAL_TITLE', 'パーソナルギャラリーへ移動');
define('MY_GAL_LNK', 'マイギャラリー');
define('MY_PROF_LNK', 'マイプロフィール');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', '管理者モードに変更');
define('ADM_MODE_LNK', '管理者モード');
define('USR_MODE_TITLE', 'ユーザモードに変更');
define('USR_MODE_LNK', 'ユーザモード');
define('UPLOAD_PIC_TITLE', 'アルバムに写真をアップロード');
define('UPLOAD_PIC_LNK', '写真のアップロード');
define('REGISTER_TITLE', 'アカウントの作成');
define('REGISTER_LNK', 'ユーザ登録');
define('LOGIN_LNK', 'ログイン');
define('LOGOUT_LNK', 'ログアウト');
define('LASTUP_LNK', '最新アップロード');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  '最新コメント');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', '最多閲覧');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'トップレート');
define('SEARCH_LNK', '検索');
define('FAV_LNK', 'お気に入り');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu

define('UPL_APP_LNK', 'アップロード承認');
define('CONFIG_LNK', '設定');
define('ALBUMS_LNK', 'アルバム');
define('CATEGORIES_LNK', 'カテゴリ');
define('USERS_LNK', 'ユーザ');
define('GROUPS_LNK', 'グループ');
define('COMMENTS_LNK', 'コメント');
define('SEARCHNEW_LNK', '写真の一括登録');
define('UTIL_LNK', '写真のリサイズ');
define('BAN_LNK', 'アクセス禁止ユーザ');

// lang_user_admin_menu
define('ALBMGR_LNK', 'マイアルバムの作成 / 整理');
define('MODIFYALB_LNK', 'マイアルバムの修正');
define('MY_PROF_LNK', 'マイプロフィール');

// lang_cat_list
define('CATEGORY', 'カテゴリ');
define('ALBUMS', 'アルバム');
define('PICTURES', '写真');

// lang_album_list
define('ALBUM_ON_PAGE', 'アルバム数 %d / %dページ中');

// lang_thumb_view
define('DATE', '日付');
define('NAME', 'ファイル名');
define('TITLE', 'タイトル');
define('SORT_DA', '日付の昇順で並び替え');
define('SORT_DD', '日付の降順で並び替え');
define('SORT_NA', 'ファイル名の昇順で並び替え');
define('SORT_ND', 'ファイル名の降順で並び替え');
define('SORT_TA', '写真タイトルの昇順で並び替え');
define('SORT_TD', '写真タイトルの降順で並び替え');
define('PIC_ON_PAGE', '写真枚数 %d / %dページ中');
define('USER_ON_PAGE', 'ユーザ数 %d / %dページ中');

// lang_img_nav_bar
define('THUMB_TITLE', 'サムネイルページに戻る');
define('PIC_INFO_TITLE', '写真情報の表示/非表示');
define('SLIDESHOW_TITLE', 'スライドショー');
define('SLIDESHOW_DISABLED', 'e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'この写真をe-カードとして送信する');
define('ECARD_DISABLED', 'e-カードは送信出来ません。');
define('ECARD_DISABLED_MSG', 'e-カードを送信する権限がありません。');
define('PREV_TITLE', '前へ');
define('NEXT_TITLE', '次へ');
define('PIC_POS', '写真 %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', 'この写真を評価する');
define('NO_VOTES', '(未投票)');
define('RATING', '(現在のレーティング: %s/5&nbsp;&nbsp;&nbsp;投票数 %s件)');
define('RUBBISH', '酷い');
define('POOR', '悪い');
define('FAIR', '普通');
define('GOOD', '良い');
define('EXCELLENT', '素晴らしい');
define('GREAT', '凄い');

// lang_cpg_die
define('INFORMATION', '情報');
define('ERROR', 'エラー');
define('CRITICAL_ERROR', '致命的なエラー');
define('FILE', 'ファイル: ');
define('LINE', '行: ');

// lang_display_thumbnails
define('FILENAME', 'ファイル名 : ');
define('FILESIZE', 'ファイルサイズ : ');
define('DIMENSIONS', '大きさ : ');
define('DATE_ADDED', '登録日 : ');

// lang_get_pic_data
define('N_COMMENTS', 'コメント数 %s');
define('N_VIEWS', '閲覧回数 %s');
define('N_VOTES', '(投票数 %s)');

// lang_smilies_inc_php
define('EXCLAMATION', 'ビックリ');
define('QUESTION', '質問');
define('VERY HAPPY', 'とても幸せ');
define('SMILE', 'スマイル');
define('SAD', '悲しい');
define('SURPRISED', '驚き');
define('SHOCKED', 'ショック');
define('CONFUSED', '混乱');
define('COOL', 'クール');
define('LAUGHING', '笑い');
define('MAD', '怒り');
define('RAZZ', '苦笑い');
define('EMBARASSED', '恥ずかしい');
define('CRYING OR VERY SAD', '泣く又はとても悲しい');
define('EVIL OR VERY MAD', '悪い又はとても怒った');
define('TWISTED EVIL', '意地悪い');
define('ROLLING EYES', '転がる目');
define('WINK', 'ウインク');
define('IDEA', 'アイディア');
define('ARROW', '許可');
define('NEUTRAL', '中立');
define('MR. GREEN', 'ミスター・グリーン');

// lang_admin_php
define('LV_ADMIN', '管理者モードを終了中 ...');
define('ENT_ADMIN', '管理者モードに移行中 ...');

// lang_albmgr_php
define('ALB_NEED_NAME', 'アルバムにはアルバム名が必要です !');
define('CONFIRM_MODIFS', '本当に更新しても宜しいですか ?');
define('NO_CHANGE', '何も変更されていません !');
define('NEW_ALBUM', '新しいアルバム');
define('CONFIRM_DELETE1', '本当にこのアルバムを削除しても宜しいですか ?');
define('CONFIRM_DELETE2', '\\nアルバムに含まれる全ての写真とコメントは削除されます !');
define('SELECT_FIRST', '最初にアルバムを選択してください。');
define('ALB_MRG', 'アルバム管理');
define('MY_GALLERY', '* マイギャラリー *');
define('NO_CATEGORY', '* カテゴリ無し *');
define('DELETE', '削除');
define('NEW', '新規作成');
define('APPLY_MODIFS', '更新の適用');
define('SELECT_CATEGORY', 'カテゴリ選択');

// lang_catmgr_php
define('MISS_PARAM', '「%s」の操作に必要なパラメータが渡されていません !');
define('UNKNOWN_CAT', '選択したカテゴリはデータベースに存在しません。');
define('USERGAL_CAT_RO', 'ユーザギャラリーのカテゴリーは削除出来ません !');
define('MANAGE_CAT', 'カテゴリの管理');
define('CONFIRM_DELETE', '本当にこのカテゴリを削除しても宜しいですか ?');
define('CATEGORY', 'カテゴリ');
define('OPERATIONS', '操作');
define('MOVE_INTO', '移動先');
define('UPDATE_CREATE', 'カテゴリの作成/更新');
define('PARENT_CAT', '親カテゴリ');
define('CAT_TITLE', 'カテゴリ名');
define('CAT_DESC', 'カテゴリ説明');

// lang_config_php
define('TITLE', '設定');
define('RESTORE_CFG', 'インストール直後の状態に戻す');
define('SAVE_CFG', '新しい設定を保存する');
define('NOTES', 'Notes');
define('INFO', '情報');
define('UPD_SUCCESS', 'Coppermineの設定が更新されました。');
define('RESTORE_SUCCESS', 'Coppermineデフォルトの設定にリストアされました。');
define('NAME_A', '写真名の昇順');
define('NAME_D', '写真名の降順');
define('TITLE_A', 'タイトルの昇順');
define('TITLE_D', 'タイトルの降順');
define('DATE_A', '日付の昇順');
define('DATE_D', '日付の降順');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Height');
define('TH_WD', 'Width');

// lang_config_data
define('CONFIG_GENSET', '一般設定');
define('GALLERY_NAME', 'ギャラリー名');
define('GALLERY_DESCRIPTION', 'ギャラリーの説明');
define('GALLERY_ADMIN_EMAIL', '管理者のメールアドレス');
define('ECARDS_MORE_PIC_TARGET', 'Address to nuke folder ie http://www.mysite.tld/html');
define('LANG', '言語');
define('CPGTHEME', 'テーマ');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'アルバムリスト表示');
define('MAIN_TABLE_WIDTH', 'メインテーブルの幅 (ピクセル又は%)');
define('SUBCAT_LEVEL', 'カテゴリ階層の表示数');
define('ALBUMS_PER_PAGE', 'アルバムの表示数');
define('ALBUM_LIST_COLS', 'アルバムリストの列数');
define('ALB_LIST_THUMB_SIZE', 'サムネイルのサイズ (ピクセル)');
define('MAIN_PAGE_LAYOUT', 'メインページのコンテンツ');
define('FIRST_LEVEL', 'カテゴリに第一レベルのサムネイルを表示する');
define('THUMB_VIEW_TITLE', 'サムネイル表示');
define('THUMBCOLS', 'サムネイルページの列数');
define('THUMBROWS', 'サムネイルページの行数');
define('MAX_TABS', 'タブの最大表示数');
define('CAPTION_IN_THUMBVIEW', 'サムネイルの下に写真説明を表示する (写真名に追加)');
define('DISPLAY_COMMENT_COUNT', 'サムネイルの下に表示するコメント数');
define('DEFAULT_SORT_ORDER', '写真表示順のデフォルト');
define('MIN_VOTES_FOR_RATING', '「トップレート」リストに表示される写真の最低投票数');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', '画像閲覧とコメント設定');
define('PICTURE_TABLE_WIDTH', '写真表示のテーブル幅 (ピクセル又は%)');
define('DISPLAY_PIC_INFO', '写真情報をデフォルトで表示する');
define('FILTER_BAD_WORDS', 'コメント中の悪い言葉を取除く');
define('ENABLE_SMILIES', 'コメントのスマイリー使用を許可する');
define('DISABLE_FLOOD_PROTECTION', 'Allow several consecutive comments on one pic from the same user');
define('COMMENT_EMAIL_NOTIFICATION', 'Email site admin upon comment submission');
define('MAX_IMG_DESC_LENGTH', '写真説明の最大長');
define('MAX_COM_WLENGTH', '1語あたりの最大文字数 (注意: 日本語の場合、コメントの最大長と同値)');
define('MAX_COM_LINES', 'コメントの最大行数');
define('MAX_COM_SIZE', 'コメントの最大長 (半角換算)');
define('DISPLAY_FILM_STRIP', 'フィルムストリップを表示する');
define('MAX_FILM_STRIP_ITEMS', 'フィルムストリップ内の項目表示数');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', '写真とサムネイル設定');
define('JPEG_QUAL', 'JPEGファイルのクオリティー');
define('THUMB_WIDTH', 'サムネイルの最大幅又は高さ <b>*</b>');
define('THUMB_USE', '寸法を使用する ( 幅 または 高さ または サムネイルの最大サイズ )<b>*</b>');
define('MAKE_INTERMEDIATE', '中間写真を作成する');
define('PICTURE_WIDTH', '中間写真の最大幅又は高さ <b>*</b>');
define('MAX_UPL_SIZE', 'アップロード写真の最大サイズ (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'アップロード写真の最大幅又は高さ (ピクセル)');
define('USER_SETTING_TITLE', 'ユーザ設定');
define('ALLOW_USER_REGISTRATION', 'ユーザ登録を許可する');
define('REG_REQUIRES_VALID_EMAIL', 'ユーザ登録にメール承認を必要とする');
define('ALLOW_DUPLICATE_EMAILS_ADDR', '2人のユーザによる同一メールアドレスの登録を許可する');
define('ALLOW_PRIVATE_ALBUMS', 'ユーザがプライベートアルバムを作成出来る');
define('CUSTOM_FIELDS_TITLE', '画像説明のためのカスタムフィールド (使用しない場合は空白)');
define('USER_FIELD1_NAME', 'フィールド名 1');
define('USER_FIELD2_NAME', 'フィールド名 2');
define('USER_FIELD3_NAME', 'フィールド名 3');
define('USER_FIELD4_NAME', 'フィールド名 4');
define('PIC_ADV_SETTING_TITLE', '写真とサムネイルの高度な設定');
define('SHOW_PRIVATE', 'ゲストにプライベートアルバムのアイコンを表示する');
define('FORBIDEN_FNAME_CHAR', 'ファイル名の使用禁止文字');
define('ALLOWED_FILE_EXTENSIONS', '写真のアップロードで使用出来るファイルの拡張子');
define('THUMB_METHOD', 'イメージリサイズの方法');
define('IMPATH', 'ImageMagick convertユーティリティーのパス (例 /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', '使用できる画像タイプ (ImageMagickのみに有効)');
define('IM_OPTIONS', 'ImageMagickのコマンドラインオプション');
define('READ_EXIF_DATA', 'JPEGファイルのEXIFデータを読み取る');
define('READ_IPTC_DATA', 'Read IPTC data in JPEG files');
define('FULLPATH', 'アルバムディレクトリ <b>*</b>');
define('USERPICS', 'ユーザ写真のディレクトリ <b>*</b>');
define('NORMAL_PFX', '中間写真の接頭辞 <b>*</b>');
define('THUMB_PFX', 'サムネイルの接頭辞 <b>*</b>');
define('DEFAULT_DIR_MODE', 'ディレクトリのデフォルト・パーミッションモードモード');
define('DEFAULT_FILE_MODE', '写真のデフォルト・パーミッションモード');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', 'クッキーとキャラクターセット設定');
define('COOKIE_NAME', 'スクリプトで使用するクッキー名');
define('COOKIE_PATH', 'スクリプトで使用するクッキーの保存先');
define('CHAR_SET', 'エンコード');
define('MISC_SETTING_TITLE', 'その他の設定');
define('DEBUG_MODE', 'デバッグモードを使用する');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) 既にギャラリーに写真が登録されている場合、*マークが付いているフィールドは変更しないでください</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'お名前とコメントを入力してください。');
define('COM_ADDED', 'コメントが追加されました。');
define('ALB_NEED_TITLE', 'アルバム名を入力してください !');
define('NO_UDP_NEEDED', '更新は必要ありません。');
define('ALB_UPDATED', 'アルバムが更新されました。');
define('UNKNOWN_ALBUM', '選択したアルバムが存在しない、又はこのアルバムにアップロードする権限がありません。');
define('NO_PIC_UPLOADED', '写真はアップロードされませんでした !<br /><br />アップロードする写真を正しく選択した場合、サーバが</br>ファイルのアップロードを許可しているか確認してください ...');
define('ERR_MKDIR', 'ディレクトリ %s の作成に失敗しました !');
define('DEST_DIR_RO', '対象ディレクトリ %s はスクリプトによる書込みが出来ません !');
define('ERR_MOVE', '%s を %s に移動できません !');
define('ERR_FSIZE_TOO_LARGE', 'あなたがアップロードした写真のサイズは大き過ぎます (最大サイズは%sx%sです) !');
define('ERR_IMGSIZE_TOO_LARGE', 'あなたがアップロードしたファイルのサイズは大き過ぎます (最大サイズは%sKBです) !');
define('ERR_INVALID_IMG', 'あなたがアップロードしたファイルは有効な画像ではありません !');
define('ALLOWED_IMG_TYPES', '%s の画像のみアップロード出来ます。');
define('ERR_INSERT_PIC', '写真「%s」はアルバムに登録できません。 ');
define('UPLOAD_SUCCESS', 'あなたの写真は正常にアップロードされました<br /><br />管理者の承認後に表示されます。');
define('INFO', '情報');
define('ERR_COMMENT_EMPTY', 'コメントが空白です !');
define('ERR_INVALID_FEXT', '次の拡張子のファイルのみ使用できます: <br /><br />%s.');
define('NO_FLOOD', '申し訳ございません、あなたは既にこの写真に最新コメントを投稿しています<br /><br />修正したい場合は、コメントを編集してください。');
define('REDIRECT_MSG', 'リダイレクトされました。<br /><br /><br />ページが自動的に更新されない場合は、「続く」をクリックしてください。');
define('UPL_SUCCESS', 'あなたの写真は正常に登録されました。');

// lang_delete_php
define('CAPTION', 'Caption');
define('FS_PIC', 'フルサイズ画像');
define('DEL_SUCCESS', '削除成功');
define('NS_PIC', 'ノーマルサイズ画像');
define('ERR_DEL', '削除不可');
define('THUMB_PIC', 'サムネイル');
define('COMMENT', 'コメント');
define('IM_IN_ALB', 'アルバム内の画像');
define('ALB_DEL_SUCCESS', 'アルバム「%s」が削除されました。');
define('ALB_MGR', 'アルバムマネージャー');
define('ERR_INVALID_DATA', '「%s」に不正なデータが発生しました。');
define('CREATE_ALB', 'アルバム「%s」の作成中');
define('UPDATE_ALB', 'アルバム「%s」 アルバム名「%s」 インデックス「%s\\」を更新しています。');
define('DEL_PIC', '写真の削除');
define('DEL_ALB', 'アルバムの削除');
define('DEL_USER', 'ユーザの削除');
define('ERR_UNKNOWN_USER', '選択したユーザは存在しません !');
define('COMMENT_DELETED', 'コメントが削除されました。');

// lang_display_image_php
define('CONFIRM_DEL', '本当にこの写真を削除しても宜しいですか ? \\n同時にコメントも削除されます。');
define('DEL_PIC', 'この写真を削除する');
define('SIZE', '%s x %s ピクセル');
define('VIEWS', '%s 回');
define('SLIDESHOW', 'スライドショー');
define('STOP_SLIDESHOW', 'スライドショーを停止');
define('VIEW_FS', 'クリックでフルサイズの画像を表示');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('TITLE', '写真情報');
define('FILENAME', 'ファイル名');
define('ALBUM NAME', 'アルバム名');
define('RATING', 'レーティング (投票数 %s件)');
define('KEYWORDS', 'キーワード');
define('FILE SIZE', 'ファイルサイズ');
define('DIMENSIONS', '大きさ');
define('DISPLAYED', '表示');
define('CAMERA', 'カメラ');
define('DATE TAKEN', '撮影日');
define('APERTURE', 'レンズ');
define('EXPOSURE TIME', '露出時間');
define('FOCAL LENGTH', '焦点距離');
define('COMMENT', 'コメント');
define('ADDFAV', 'お気に入りに追加');
define('ADDFAVPHRASE', 'お気に入り');
define('REMFAV', 'お気に入りから削除');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'このコメントを編集する');
define('CONFIRM_DELETE', '本当にこのコメントを削除しても宜しいですか ?');
define('ADD_YOUR_COMMENT', 'コメントを追加する');
define('NAME', '名前');
define('COMMENT', 'コメント');
define('YOUR_NAME', 'お名前');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', '画像のクリックでウインドウを閉じる');

// lang_ecard_php
define('TITLE', 'e-カードの送信');
define('INVALID_EMAIL', '<b>警告</b> : メールアドレスが正しくありません !');
define('ECARD_TITLE', 'An e-card from %s for you');
define('VIEW_ECARD', 'e-カードが正常に表示されない場合は、このリンクをクリックしてください。');
define('VIEW_MORE_PICS', 'もっと写真を見る場合は、このリンクをクリックしてください !');
define('SEND_SUCCESS', 'e-カードが送信されました。');
define('SEND_FAILED', '申し訳ございません、e-cardを送信出来ませんでした ...');
define('FROM', 'From');
define('YOUR_NAME', 'お名前');
define('YOUR_EMAIL', 'メールアドレス');
define('TO', 'To');
define('RCPT_NAME', '受取人のお名前');
define('RCPT_EMAIL', '受取人のメールアドレス');
define('GREETINGS', 'あいさつ');
define('MESSAGE', 'メッセージ');

// lang_editpics_php
define('PIC_INFO', '写真情報');
define('ALBUM', 'アルバム');
define('TITLE', '写真名');
define('DESC', '説明');
define('KEYWORDS', 'キーワード');
define('PIC_INFO_STR', '%s&times;%s - %sKB - 閲覧回数 %s - 投票数 %s');
define('APPROVE', '写真の承認');
define('POSTPONE_APP', '承認の延期');
define('DEL_PIC', '写真の削除');
define('RESET_VIEW_COUNT', '閲覧カウンタのリセット');
define('RESET_VOTES', '投票のリセット');
define('DEL_COMM', 'コメントの削除');
define('UPL_APPROVAL', 'アップロード承認');
define('EDIT_PICS', '写真の編集');
define('SEE_NEXT', '前へ');
define('SEE_PREV', '次へ');
define('N_PIC', '写真枚数 %s');
define('N_OF_PIC_TO_DISP', '写真表示数');
define('APPLY', '更新の適用');

// lang_groupmgr_php
define('GROUP_NAME', 'グループ名');
define('DISK_QUOTA', 'ディスク容量');
define('CAN_RATE', '写真を評価可能');
define('CAN_SEND_ECARDS', 'e-カードを送信可能');
define('CAN_POST_COM', 'コメントを投稿可能');
define('CAN_UPLOAD', '写真をアップロード可能');
define('CAN_HAVE_GALLERY', 'パーソナルギャラリーを作成可能');
define('APPLY', '更新の適用');
define('CREATE_NEW_GROUP', '新規グループの作成');
define('DEL_GROUPS', '選択したグループの削除');
define('CONFIRM_DEL', '警告、グループを削除した場合、グループに属していたユーザは\'Registered\'グループに移動されます !\\n\\n処理を続けますか ?');
define('TITLE', 'ユーザグループの管理');
define('APPROVAL_1', 'パブリックアップロード承認 (1)');
define('APPROVAL_2', 'プライベートアップロード承認 (2)');
define('NOTE1', '<b>(1)</b> パブリックアルバムへアップロードされた写真は管理者の承認が必要です。');
define('NOTE2', '<b>(2)</b> ユーザのアルバムへアップロードされた写真は管理者の承認が必要です。');
define('NOTES', '注意');

// lang_index_php
define('WELCOME', 'ようこそ !');

// lang_album_admin_menu
define('CONFIRM_DELETE', '本当にこのアルバムを削除しても宜しいですか ? \\n同時に全ての写真とコメントは削除されます。');
define('DELETE', '削除');
define('MODIFY', 'プロパティ');
define('EDIT_PICS', '写真の編集');

// lang_list_categories
define('HOME', 'Home');
define('STAT1', 'カテゴリ数:<b>[cat]</b>&nbsp;&nbsp;&nbsp;アルバム数:<b>[albums]</b>&nbsp;&nbsp;&nbsp;写真枚数:<b>[pictures]</b>&nbsp;&nbsp;&nbsp;コメント数:<b>[comments]</b>&nbsp;&nbsp;&nbsp;閲覧回数:<b>[views]</b>');
define('STAT2', 'アルバム数:<b>[albums]</b>&nbsp;&nbsp;&nbsp;写真枚数:<b>[pictures]</b>&nbsp;&nbsp;&nbsp;閲覧回数:<b>[views]</b>');
define('XX_S_GALLERY', '%sのギャラリー');
define('STAT3', 'アルバム数:<b>[albums]</b>&nbsp;&nbsp;&nbsp;写真枚数:<b>[pictures]</b>&nbsp;&nbsp;&nbsp;コメント数:<b>[comments]</b>&nbsp;&nbsp;&nbsp;閲覧回数:<b>[views]</b>');

// lang_list_users
define('USER_LIST', 'ユーザリスト');
define('NO_USER_GAL', 'ユーザギャラリーはありません。');
define('N_ALBUMS', 'アルバム数 %s');
define('N_PICS', '写真枚数 %s');

// lang_list_albums
define('N_PICTURES', '写真枚数 %s');
define('LAST_ADDED', '、最終追加日:%s');

// lang_modifyalb_php
define('UPD_ALB_N', 'アルバムの更新 %s');
define('GENERAL_SETTINGS', '一般設定');
define('ALB_TITLE', 'アルバム名');
define('ALB_CAT', 'カテゴリ');
define('ALB_DESC', '説明');
define('ALB_THUMB', 'サムネイル');
define('ALB_PERM', 'このアルバムに対するパーミッション');
define('CAN_VIEW', 'アルバム閲覧可能');
define('CAN_UPLOAD', 'ビジターは写真をアップロード出来る');
define('CAN_POST_COMMENTS', 'ビジターはコメントを投稿できる');
define('CAN_RATE', 'ビジターは写真を評価出来る');
define('USER_GAL', 'ユーザギャラリー');
define('NO_CAT', '* カテゴリー無し *');
define('ALB_EMPTY', 'アルバムには何も入っていません');
define('LAST_UPLOADED', '最新アップロード');
define('PUBLIC_ALB', '全員 (パブリックアルバム)');
define('ME_ONLY', '私のみ');
define('OWNER_ONLY', 'アルバムの所有者 (%s) のみ');
define('GROUPP_ONLY', '%sグループメンバーのみ');
define('ERR_NO_ALB_TO_MODIFY', '修正できるアルバムがデータベースにありません。');
define('UPDATE', 'アルバムの更新');

// lang_rate_pic_php
define('ALREADY_RATED', '申し訳ございません、あなたは既にこの写真を評価しています。');
define('RATE_OK', 'あなたの投票は受理されました。');

// lang_register_disclamer
define('REGISTER_DISCLAMER', '{SITE_NAME}の管理者は、一般的に好ましくない投稿を出来るだけ速やかに削除するよう試みますが、全ての投稿を閲覧することは不可能です。従って、このサイトに対する全投稿の見解が投稿者によるものであり、管理者やウェブマスターのもので無く(これらの人々の投稿は除く)、管理者やウェブマスターに投稿の責任が無いことをあなたは認めます。
<br>
<br>
あなたは、公序良俗に反する投稿や、個人への誹謗中傷の投稿、性的な投稿、その他法に反する投稿をしない事に同意します。
あなたは、{SITE_NAME}の管理者、ウェブマスター、モデレーターが如何なる時も投稿内容を編集・削除する権利を有することに同意します。あなたは、ユーザとしてあなたが投稿した情報がデータベースに保存されることに同意します。この情報は、あなたの同意無しに管理者、ウェブマスターより第三者に開示されることはありませんが、データが流出する恐れのあるハッキング等の行為に対して管理者、ウェブマスターは責任を負うことはありません。
<br>
<br>
このサイトでは、あなたのコンピュータに情報を保存するためにクッキーを使用します。クッキーはあなたの閲覧を快適にする為だけに使用されます。メールアドレスは、あなたの登録に関する詳細及びパスワードの認証の為だけに使用されます。 
<br>
<br>
「同意します」をクリックすることで、あなたは上記の利用規約に同意します。');

// lang_register_php
define('PAGE_TITLE', 'ユーザ登録');
define('TERM_COND', '利用規約');
define('I_AGREE', '同意します');
define('SUBMIT', '登録実行');
define('ERR_USER_EXISTS', '入力されたユーザ名は既に登録されています、別のユーザ名を入力してください。');
define('ERR_PASSWORD_MISMATCH', 'パスワードが一致しません、再度入力してください。');
define('ERR_UNAME_SHORT', 'ユーザ名は2文字以上にしてください。');
define('ERR_PASSWORD_SHORT', 'パスワードは2文字以上にしてください。');
define('ERR_UNAME_PASS_DIFF', 'ユーザ名とパスワードは異なる必要があります。');
define('ERR_INVALID_EMAIL', 'メールアドレスが正しくありません。');
define('ERR_DUPLICATE_EMAIL', '他のユーザが既に同じメールアドレスを登録しています。');
define('ENTER_INFO', '登録情報を入力してください。');
define('REQUIRED_INFO', '必須項目');
define('OPTIONAL_INFO', '任意項目');
define('USERNAME', 'ユーザ名');
define('PASSWORD', 'パスワード');
define('PASSWORD_AGAIN', 'パスワードをもう一度');
define('EMAIL', 'メールアドレス');
define('LOCATION', '居住地');
define('INTERESTS', '興味のあること');
define('WEBSITE', 'ホームページ');
define('OCCUPATION', '職業');
define('ERROR', 'エラー');
define('CONFIRM_EMAIL_SUBJECT', '%s - Registration confirmation');
define('INFORMATION', '情報');
define('FAILED_SENDING_EMAIL', '登録確認メールが送信できません !');
define('THANK_YOU', 'ご登録ありがとうございます。<br /><br />アカウントの活性化に関する情報が登録されたメールアドレス宛に送信されました。');
define('ACCT_CREATED', 'あなたのアカウントが作成されました。ユーザ名とパスワードでログイン出来ます。');
define('ACCT_ACTIVE', 'あなたのアカウントが活性化されました。ユーザ名とパスワードでログイン出来ます。');
define('ACCT_ALREADY_ACT', 'あなたのアカウントは既に活性化されています !');
define('ACCT_ACT_FAILED', 'このアカウントは活性化出来ません !');
define('ERR_UNK_USER', '選択したユーザは存在しません !');
define('X_S_PROFILE', '%s のプロフィール');
define('GROUP', 'グループ');
define('REG_DATE', '登録年月日');
define('DISK_USAGE', 'ディスク使用量');
define('CHANGE_PASS', 'パスワードの変更');
define('CURRENT_PASS', '現在のパスワード');
define('NEW_PASS', '新しいパスワード');
define('NEW_PASS_AGAIN', '新しいパスワードをもう一度');
define('ERR_CURR_PASS', '現在のパスワードが正しくありません。');
define('APPLY_MODIF', '更新の適用');
define('UPDATE_SUCCESS', 'プロフィールが更新されました。');
define('PASS_CHG_SUCCESS', 'パスワードが変更されました。');
define('PASS_CHG_ERROR', 'パスワードが変更されませんでした。');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', '{SITE_NAME} へのご登録ありがとうございます。

あなたのユーザ名は "{USER_NAME}" です。
あなたのパスワードは "{PASSWORD}" です。

アカウントの活性化をするには下記のリンクをクリック又は
ブラウザのアドレス欄にコピーしてください。

{ACT_LINK}管理者

{SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', 'コメントのレビュー');
define('NO_COMMENT', 'レビューするコメントはありません。');
define('N_COMM_DEL', '%s件のコメントが削除されました。');
define('N_COMM_DISP', '表示するコメント数');
define('SEE_PREV', '前へ');
define('SEE_NEXT', '次へ');
define('DEL_COMM', '選択したコメントを削除');

// lang_search_php
define('SEARCH', '写真の検索');

// lang_search_new_php
define('PAGE_TITLE', '新しい写真の検索');
define('SELECT_DIR', 'ディレクトリ選択');
define('SELECT_DIR_MSG', 'ここではFTPによりサーバにアップロードした写真をアルバムに一括登録します<br /><br />写真をアップロードしたディレクトリを選択してください。');
define('NO_PIC_TO_ADD', '追加する写真はありません。');
define('NEED_ONE_ALBUM', 'この機能を使うためには1つ以上のアルバムが必要です。');
define('WARNING', '警告');
define('CHANGE_PERM', 'スクリプトがこのディレクトリに書込めませんでした。写真を追加する前にディレクトリのパーミッションモードを755又は777に変更する必要があります !');
define('TARGET_ALBUM', '<b>「</b>%s<b>」内の写真を</b>%s<b>に追加する</b>');
define('FOLDER', 'フォルダ');
define('IMAGE', '画像');
define('ALBUM', 'アルバム');
define('RESULT', '結果');
define('DIR_RO', '書込み権がありません。');
define('DIR_CANT_READ', '読取り権がありません。');
define('INSERT', '新規写真のギャラリーへの追加');
define('LIST_NEW_PIC', '新規写真一覧');
define('INSERT_SELECTED', '選択した写真の追加');
define('NO_PIC_FOUND', '新しい写真は見つかりませんでした。');
define('BE_PATIENT', '暫くお待ちください、スクリプトが写真を追加するには時間が必要です。');
define('NOTES', '<ul><li><b>OK</b> : 正常に写真が追加されました。<li><b>DP</b> : 写真が重複して既にデータベースに登録されています。<li><b>PB</b> : 写真を追加出来ませんでした、設定及び写真が登録されるディレクトリのパーミッションを確認してください。<li>OK、DP、PBサインのいずれも表示されなかった場合は、PHPエラーを表示するために破損した写真をクリックしてください。<li>タイムアウトが発生した場合、ブラウザの更新ボタンをクリックしてください。</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('TITLE', '写真のアップロード');
define('MAX_FSIZE', 'アップロード可能な最大ファイルサイズは%sKBです。');
define('ALBUM', 'アルバム');
define('PICTURE', '写真');
define('PIC_TITLE', '写真名');
define('DESCRIPTION', '写真の説明');
define('KEYWORDS', 'キーワード (半角スペースで区切る)');
define('ERR_NO_ALB_UPLOADABLES', '写真のアップロードが許可されたアルバムはありません。');

// lang_usermgr_php
define('TITLE', 'ユーザの管理');
define('NAME_A', 'ユーザ名の昇順');
define('NAME_D', 'ユーザ名の降順');
define('GROUP_A', 'グループ名の昇順');
define('GROUP_D', 'グループ名の降順');
define('REG_A', '登録日の昇順');
define('REG_D', '登録日の降順');
define('PIC_A', '写真枚数の昇順');
define('PIC_D', '写真枚数の降順');
define('DISKU_A', 'ディスク使用量の昇順');
define('DISKU_D', 'ディスク使用量の降順');
define('SORT_BY', 'ユーザの並び替え');
define('ERR_NO_USERS', 'ユーザテーブルが空です !');
define('ERR_EDIT_SELF', '自分自身のプロフィールは編集できません。「マイプロフィール」を使用してください。');
define('EDIT', '編集');
define('DELETE', '削除');
define('NAME', 'ユーザ名');
define('GROUP', 'グループ');
define('INACTIVE', '非活性');
define('OPERATIONS', '操作');
define('PICTURES', '写真');
define('DISK_SPACE', '使用済み容量 / 容量');
define('REGISTERED_ON', '登録年月日');
define('U_USER_ON_P_PAGES', 'ユーザ数 %d / %dページ中');
define('CONFIRM_DEL', '本当にこのユーザを削除しても宜しいですか ? \\ユーザに属する全ての写真とアルバムは削除されます。');
define('MAIL', 'メール');
define('ERR_UNKNOWN_USER', '選択したユーザは存在しません !');
define('MODIFY_USER', 'ユーザの変更');
define('NOTES', '注意');
define('NOTE_LIST', '<li>現在のパスワードを変更したくない場合は、「パスワード」フィールドを空白にしてください。');
define('PASSWORD', 'パスワード');
define('USER_ACTIVE', 'ユーザを活性化する');
define('USER_GROUP', 'グループ');
define('USER_EMAIL', 'メールアドレス');
define('USER_WEB_SITE', 'ホームページ');
define('CREATE_NEW_USER', '新規ユーザの作成');
define('USER_FROM', '居住地');
define('USER_INTERESTS', '興味のあること');
define('USER_OCC', '職業');

// lang_util_php
define('TITLE', '写真のリサイズ');
define('WHAT_IT_DOES', '処理内容');
define('WHAT_UPDATE_TITLES', 'タイトルをファイル名で更新する');
define('WHAT_DELETE_TITLE', 'タイトルの削除');
define('WHAT_REBUILD', 'サムネイルの再構築及び写真のリサイズ');
define('WHAT_DELETE_ORIGINALS', 'オリジナルサイズの画像を削除して、サイズ変更後の画像と入れ替える');
define('FILE', 'ファイル');
define('TITLE_SET_TO', 'タイトル設定');
define('SUBMIT_FORM', '送信');
define('UPDATED_SUCCESFULLY', '更新完了');
define('ERROR_CREATE', '作成中にエラーが発生しました');
define('CONTINUE', 'さらに画像を処理する');
define('MAIN_SUCCESS', 'ファイル %s がメイン写真に設定されました');
define('ERROR_RENAME', '%s を %s にリネーム中にエラーが発生しました');
define('ERROR_NOT_FOUND', 'ファイル %s が見つかりませんでした');
define('BACK', 'メインに戻る');
define('THUMBS_WAIT', 'サムネイルの更新 及び/または 写真のリサイズを行っています、お待ちください...');
define('THUMBS_CONTINUE_WAIT', 'サムネイルの更新 及び/または 写真のリサイズを行っています...');
define('TITLES_WAIT', 'タイトルの更新を行っています、お待ちください...');
define('DELETE_WAIT', 'タイトルを削除しています、お待ちください...');
define('REPLACE_WAIT', 'オリジナルサイズの画像を削除して変更後の画像と入れ替えを行っています、お待ちください..');
define('INSTRUCTION', 'クイックインストラクション');
define('INSTRUCTION_ACTION', 'アクションの選択');
define('INSTRUCTION_PARAMETER', 'パラメータの設定');
define('INSTRUCTION_ALBUM', 'アルバムの選択');
define('INSTRUCTION_PRESS', '%s を押す');
define('UPDATE', 'サムネイルの更新 及び/または 写真のリサイズ');
define('UPDATE_WHAT', '更新対象');
define('UPDATE_THUMB', 'サムネイルの作成のみ');
define('UPDATE_PIC', '写真のリサイズのみ');
define('UPDATE_BOTH', 'サムネイルの作成及び写真のリサイズ');
define('UPDATE_NUMBER', 'クリックあたりの画像処理数');
define('UPDATE_OPTION', '(タイムアウトする時は、この数値を低めに設定してください)');
define('FILENAME_TITLE', 'ファイル名 &rArr; 写真タイトル');
define('FILENAME_HOW', 'ファイル名の変更方法');
define('FILENAME_REMOVE', '.jpgを空白付きの _ (アンダースコア)に変更する');
define('FILENAME_EURO', '2003_11_23_13_20_20.jpg を 23/11/2003 13:20 に変更する');
define('FILENAME_US', '2003_11_23_13_20_20.jpg を 11/23/2003 13:20 に変更する');
define('FILENAME_TIME', '2003_11_23_13_20_20.jpg を 13:20 に変更する');
define('DELETE', '写真タイトルまたはオリジナルサイズの写真を削除する');
define('DELETE_TITLE', '写真のタイトルを削除する');
define('DELETE_ORIGINAL', 'オリジナルサイズの写真を削除する');
define('DELETE_REPLACE', 'オリジナルサイズの画像を削除して、サイズ変更後の画像と入れ替える');
define('SELECT_ALBUM', 'アルバムの選択');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>