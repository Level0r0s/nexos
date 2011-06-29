<?php

/**************************************************************************/
/* Your_Account Module                                                    */
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG Dev Team
  http://cpgnuke.com

  Under the GNU General Public License version 2*/
/* Last modification notes:                                               */
/* $Id: lang-japanese.php,v 1.1 2004/07/24 21:27:57 akamu Exp $          */
/*                                                                        */
/* Please change the second quoted phrase, not the capitalized one        */
/* If you need to use double quotes (") remember to add a backslash (\),  */
/* so your entry will look like: This is \"double quoted\" text.          */
/* Try to stay as close to the meaning of the english phrase.             */
/**************************************************************************/
//lang_translation_info

define("_REQUIREADMIN", "Require Admin Approval");
define("_ACTALLOWREG", "Allow User Registration");
define("_ACTNOTIFYADD", "Notify Admin of User Registration");
define("_ACTALLOWDELETE", "Allow User self-deletion");
define("_ACTNOTIFYDELETE", "Notify Admin of User Deletion");
define("_ACTALLOWTHEME", "Allow User Theme Selection");
define("_ACTALLOWMAIL", "Allow User Email Change");
define("_SERVERMAIL", "Server can send mail");
define("_USEACTIVATE", "Use email Activation");
define("_USEREGISTERMSG", "Use Registration Agreement");

define("_MA_HIDDEN", "Hidden");
define("_MA_VISIBLE", "Visible");
define("_MA_REQUIRED", "Required");

// User Registration Config
define("_MA_PROFILE_INFO", "Profile Information");
define("_MA_ADDITIONAL", "Additional Information");
define("_MA_REALNAME", "Real Name");
define("_MA_FAKEMAIL", "Fake Email");
define("_MA_HOMEPAGE", "Home Page");
define("_MA_ICQ", "ICQ Number");
define("_MA_AIM", "AIM Address");
define("_MA_YIM", "Yahoo Messenger");
define("_MA_MSNM", "MSN Messenger");
define("_MA_LOCATION", "Location");
define("_MA_OCCUPATION", "Occupation");
define("_MA_INTERESTS", "Interests");
define("_MA_SIGNATURE", "Signature");
define("_MA_EXTRAINFO", "Extra Info");
define("_MA_PREFERENCES", "Preferences");
define("_MA_TIMEZONE", "Timezone");
define("_MA_DATEFORMAT", "Date format");
define("_MA_RECEIVENEWSLETTER", "Receive Newsletter");
define("_MA_SHOWEMAIL", "Show my Email Address");
define("_MA_SHOWONLINE", "Show my online status");
define("_MA_ALLOWBBCODE", "Always Allow BBCode");
define("_MA_ALLOWHTML", "Always Allow HTML");
define("_MA_ALLOWSMILIES", "Always Enable Smilies");
define("_MA_NOTIFYREPLY", "Notify me of replies");
define("_MA_NOTIFYPM", "Notify on new Private Message by Email");
define("_MA_POPUPPM", "Pop up window on new Private Message");
define("_MA_ATTACHSIG", "Always attach my signature");
define("_MA_PRIVATE", "Private Information");
define("_MA_FIRSTNAME", "Firstname");
define("_MA_LASTNAME", "Lastname");
define("_MA_GENDER", "Gender");
define("_MALE", "Male");
define("_FEMALE", "Female");
define("_MA_BIRTHDAY", "Date of birth");
define("_MA_BIRTHDAYMSG", "Fill in as month/day/year");
define("_MA_TELEPHONE", "Telphone number");
define("_MA_FAX", "Fax number");
define("_OSC_NEWSLETTER", "Recieve Shop newsletter");
define("_OSC_NEWSLETTERMSG", "This is a seperate e-mail about new shop items and discounts");

// License agreement
define("_BOUNDREGISTRATION", "By clicking Register below you agree to be bound by these conditions.");
define("_MA_REGISTRATION", "Registration Agreement Terms");
define("_MA_AGREE_OVER_13", "I Agree to these terms and am <b>over</b> or <b>exactly 13</b> years of age");
define("_MA_AGREE_UNDER_13", "I Agree to these terms and am <b>under</b> 13 years of age");
define("_MA_DO_NOT_AGREE", "I do not agree to these terms");

// Registration form
define("_MA_REGISTRATION_INFO", "Registration Information");
define("_MA_ITEMS_REQUIRED", "Items marked with a * are required unless stated otherwise.");
define("_MA_PROFILE_INFO_NOTICE", "This information will be publicly viewable");
define("_USERNAME", "Username");
define("_EMAILADDRESS", "Email address");
define("_BLANKFORAUTO", "パスワードを自動的に生成する場合は空欄にしてください");
define("_CONFIRMPASSWORD", "Confirm password");
define("_SUBMIT", "Submit");
define("_RESET", "Reset");
define("_MA_FAKEMAILMSG", "(This Email will be public. Just type what you want, Spam proof)");
define("_MA_DATEFORMATMSG", "The syntax used is identical to the PHP <a href=\"http://www.php.net/date\">date()</a> function");
define("_MA_SIGNATUREMSG", "This is a block of text that can be added to posts you make. There is a 255 character limit");
define("_MA_NOTIFYREPLYMSG", "Sends an email when someone replies to a topic you have posted in. This can be changed whenever you post");
define("_MA_POPUPPMMSG", "Will open a new popup window to inform you when new private messages arrive");

// config options
define("_ACTDISABLED", "This function has been <b>DISABLED</b> by the site admin.");

// Register steps
define("_USERFINALSTEP", "User Registration: Final Step");
define("_USERCHECKDATA", "please check the following information. If all is correct you can proceed with the registration by clicking on \"Finish\" button, otherwise \"Go Back\" and change whatever information is needed.");
define("_YOURPASSWORD", "Your Password is");
define("_YOUWILLRECEIVE", "You will receive a confirmation email with a link to a page you should visit to activate your account in the next 24 hours.");
define("_YOUWILLRECEIVE2", "You will receive an email with login information.");
define("_WAITAPPROVAL", "The site Administrator will review your application and send you an activation link if you are approved.");
define("_FINISH", "Finish");

// Register finish
define("_YOUUSEDEMAIL", "You or someone else has used your email account");
define("_TOREGISTER", "to register an account at");
define("_USERREGLOGIN", "User Registration/Login");
define("_USERAPPLOGIN", "User Application/Login");
define("_ACCOUNTCREATED", "New User Account Created!");
define("_YOUAREREGISTERED", "Welcome! You are now registered as a member.");
define("_FINISHUSERCONF", "Your request for a new account has been processed. You'll receive an email in the next few seconds with a activation link that should be visited in the next 24 hours to be able to activate your account.");
define("_FINISHUSERCONF2", "Your request for a new account has been processed. You can now ");
define("_FINISHUSERCONF3", "login here");
define("_TOFINISHUSER", "To finish the registration process you should visit the following link in the next 24 hours to activate your user account, otherwise the information will be automaticaly deleted by the system and you should apply again:");
define("_ACTIVATIONSUB", "User Account Activation");
define("_REGISTRATIONSUB", "User Account Registration");
define("_THANKSUSER", "Thank you for registering at");
define("_FOLLOWINGMEM", "Following is the member information:");
define("_TOAPPLY", "to apply for an account at");
define("_APPLICATIONSUB", "User Account Application");
define("_YOUAREPENDING", "Welcome! Your application as a new member is pending. The site administrator will contact you when your application is processed.");
define("_THANKSAPPL", "Thank you for appling at");
define("_MEMADD", "Member Added");
define("_MEMAPL", "Member Applied");

// Register errors
define("_ERRORINVEMAIL", "ERROR: Invalid Email");
define("_NICK2SHORT", "Nickname is too short. It must be more than 3 characters");
define("_SECCODEINCOR", "Security Code is incorrect, Please go back and type it exactly as given...");
define("_ERROREMAILSPACES", "ERROR: Email addresses do not contain spaces");
define("_ERRORINVNICK", "ERROR: Invalid Nickname");
define("_NICK2LONG", "Nickname is too long. It must be less than 26 characters");
define("_NAMERESERVED", "ERROR: This Name is Reserved");
define("_NAMEDENIED","ERROR: This part of your chosen user name may not be used :");
define("_NICKNOSPACES", "ERROR: There cannot be any spaces in the Nickname");
define("_NICKTAKEN", "ERROR: Nickname already taken");
define("_EMAILREGISTERED", "ERROR: Email address already registered");
define("_PASSDIFFERENT", "Both passwords are different. They need to be identical.");
define("_YOUPASSMUSTBE", "Your Password must be");
define("_CHARLONG", "characters long");
define("_ACCOUNTRESERVED", "New User Account Reserved!");
define("_EMAILNOTUSABLE", "ERROR: Email address is not usable");

// User activation
define("_ACTIVATIONYES", "User Activation");
define("_ACTMSG", "Your account has been activated. Please login from <a href=\"getlink()\">this link</a> using your assigned Username and Password.");
define("_ACTIVATIONERROR", "User Activation Error");
define("_ACTERROR1", "User verification number is invalid.<br><br>Please be sure to click on the link you received by email or apply for a new account <a href=\"getlink()\">here</a>.");
define("_ACTERROR2", "There is no user in the database with this information.<br><br>You can register a new user from <a href=\"getlink()\">here</a>.");

// Edit user profile
define("_CURRENTPASSWORD", "Current password");
define("_CURRENTPASSWORDMSG", "You must confirm your current password if you wish to change it or alter your e-mail address");
define("_NEWPASSWORD", "New password");
define("_NEWPASSWORDMSG", "You only need to supply a password if you want to change it");
define("_CONFIRMPASSWORDMSG", "You only need to confirm your password if you changed it above");
define("_SUREDELETE", "Are you sure you want to delete your account?");
define("_CURRENT_IMAGE", "Current Image");
define("_DELETE_IMAGE", "Delete Image");
define("_AVATAR_CONTROL", "Avatar control panel");
define("_AVATAR_INFO", "Displays a small graphic image below your details in posts. Only one image can be displayed at a time, its width can be no greater than 80 pixels, the height no greater than 80 pixels, and the file size no more than 6 KB.");
define("_AVATAR_OFFSITE","Link to off-site Avatar");
define("_AVATAR_OFFSITEMSG","Enter the URL of the location containing the Avatar image you wish to link to.");
define("_AVATAR_SELECT", "Select Avatar from gallery");
define("_SHOW_GALLERY", "Show gallery");
define("_AVATAR_UPLOAD", "Upload Avatar from your machine");

// Avatar section
define("_AVATAR_GALLERY", "Avatar gallery");
define("_CATEGORY_SELECT", "Select category");
define("_SELECT_AVATAR", "Select avatar");
define("_CANCEL_AVATAR", "Cancel avatar");

// Profile page
define("_THISISYOURPAGE", "こちらはあなた用のホームページです。");
define("_PERSONALINFO", "個人情報");
define("_ABOUT_USER", "All about ");
define("_CONTACTINFO", "Contact Information");
define("_PM", "Private Message");
define("_JOINED", "Joined");
define("_RANK", "Rank");
define("_LAST10BBTOPIC", "Last 10 Forum Topics");
define("_LAST10BBTOPICS", "Last 10 Forum Topics started by");
define("_LAST10COMMENT", "Last 10 Comments");
define("_LAST10DOWNLOAD", "Last 10 Downloads");
define("_LAST10DOWNLOADS", "Last 10 Downloads by");
define("_LAST10SUBMISSION", "Last 10 News Submissions");
define("_LAST10WEBLINK", "Last 10 Web Links");
define("_LAST10WEBLINKS", "Last 10 Web Links by");
define("_MEMBERGROUPS", "Group Memberships");
define("_AVATAR", "アバター");
define("_WEBSITE", "ウェブサイト");
define("_LOCATION", "お住まいの場所");
define("_OCCUPATION", "お仕事");
define("_INTERESTS", "趣味");
define("_SIGNATURE", "署名");

define("_USERSTATUS", "現在のステータス");
define("_ONLINE", "オンライン");
define("_OFFLINE", "オフライン");
define("_NOTSUBSCRIBED", "このサイトのニュースレターを購読していません");
define("_SUBSCRIBED", "このサイトのニュースレターを購読しています");

define("_BROADCAST", "公開メッセージを発信");
define("_BROADCASTTEXT", "こちらから<i>公開メッセージ</i>を送信できます (最長半角 255 文字)。このメッセージは１０分以内にオンライン中の全てのユーザーに表示されます。どのユーザーも一度だけ、サイトのロゴの下の赤いバーの中にそれが見えるようになります。またどのユーザーも<a href=\"modules.php?name=Your_Account&amp;op=edithome\">こちらで</a>その機能をオフにすることができます。悪用はしないでください。HTML は使用できません。");
define("_SEND", "送信");
define("_BROADCASTSENT", "公開メッセージが送信されました");
define("_BROADCASTNOTSENT", "<b>エラー</b>：公開メッセージが空白か、最近メッセージを送信したばかりです。次のメッセージの送信までは１０分ほどお待ち下さい。");
define("_RETURNPAGE", "自分のホームに戻る");

define("_MYHEADLINES", "ヘッドライン");
define("_SELECTASITE", "ヘッドラインを表示したいサイトを選んでください");
define("_SELECTASITE2", "サイトを選択");
define("_ORTYPEURL", "またはお好みのサイトの RSS/XML URL を入力してください");
define("_GO", "Go");
define("_HEADLINESFROM", "ヘッドライン");

define("_READMYJOURNAL", "Read My Journal");

// Errors
define("_ACCDELETED", "Account has been Deleted");
define("_SERVERNOMAIL", "This server does not have mail access. Please contact the site admin for assistance.");
define("_ACCSUSPENDED", "Account has been Suspended");
define("_BESUREACT", "Be sure you have activated your account.");
define("_MEMDEL", "Member Deleted");
define("_YOUBAD", "ERROR: You have attempted to perform an illegal operation!");
define("_NOINFOFOR", "現在情報はありません：");
define("_SORRYNOUSERINFO", "申し訳ありません。該当するユーザー情報は見つかりませんでした。");
define("_LOGININCOR", "ログインに失敗しました。もう一度お試し下さい・・・");
define("_UPDATEFAILED", "ユーザー情報をアップデートできませんでした。管理者にお問い合わせください。");

// Navbar
define("_ACCTCHANGE", "Change<br>Info");
define("_ACCTCOMMENTS", "Comments<br>Setup");
define("_ACCTEXIT", "Logout<br>Exit");
define("_ACCTHOME", "Change<br>Home");
define("_ACCTJOURNAL", "Your<br>Journals");
define("_ACCTTHEME", "Select<br>Theme");
define("_CHANGEHOME", "あなたのホーム");
define("_CHANGEYOURINFO", "あなたの情報");
define("_CONFIGCOMMENTS", "コメント");
define("_DELETEACCT", "Delete<br>Account");
define("_LOGOUTEXIT", "ログアウト");
define("_MESSAGES", "メッセージ");
define("_RETURNACCOUNT", "自分のユーザー情報を見る");
define("_SELECTTHETHEME", "テーマ");

// Admin area
define("_DELETEREASON", "Reason for Deletion");
define("_SUSPENDREASON", "Reason for Suspension");
define("_DENYREASON", "Reason for Denial");
define("_CHECKNUM", "Activation #");
define("_REGDATE", "Date Added");
define("_ACCTAPPROVE", "Account Approved");
define("_ACCTDELETE", "Account Deleted");
define("_ACCTDENY", "Account Denied");
define("_ACCTREMOVE", "Account Removed");
define("_ACCTRESTORE", "Account Restored");
define("_ACCTSUSPEND", "Account Suspended");
define("_ACTIVEUSERS", "Active Users");
define("_ADDUSER", "Add a New User");
define("_ADDUSERBUT", "Add User");
define("_ALLOWUSERS", "Allow other users to view my email address");
define("_APPROVE", "Approve");
define("_APPROVEUSER", "Approve User");
define("_DELETEUSER", "Delete User");
define("_DELETEUSERS", "Deleted Users");
define("_DENY", "Deny");
define("_DENYUSER", "Deny User");
define("_DETUSER", "User Details");
define("_EDITUSER", "ユーザー情報の編集");
define("_FORCHANGES", "(For Changes Only)");
define("_FUNCTIONS", "Functions");
define("_HASAPPROVE", "has been approved.");
define("_HASDELETE", "has been deleted.");
define("_HASDENY", "has been denied.");
define("_HASREMOVE", "has been removed.");
define("_HASRESTORE", "has been restored.");
define("_HASSUSPEND", "has been suspended.");
define("_ID", "ID");
define("_MODIFY", "Modify");
define("_NAME", "Name");
define("_NEWSLETTER", "Newsletter");
define("_OK", "Ok!");
define("_OPTION", "オプション");
define("_OR", "or");
define("_PERMISSIONS", "Permissions");
define("_PROMOTE", "Promote");
define("_PROMOTEUSER", "Promote User");
define("_REMOVE", "Remove");
define("_REMOVEUSER", "Remove User");
define("_REQUIREDNOCHANGE", "(required, can't be changed later)");
define("_RESEND", "Resend");
define("_RESENDMAIL", "Resend Activation Email");
define("_RESTORE", "Restore");
define("_RESTOREUSER", "Restore User");
define("_RETYPEPASSWD", "Retype Password");
define("_SAVECHANGES", "Save Changes");
define("_SHOWMAIL", "Show Email");
define("_SORRYTO", "Your account at");
define("_SURE2APPROVE", "Are you sure you want to approve user");
define("_SURE2DELETE", "Are you sure you want to delete user");
define("_SURE2DENY", "Are you sure you want to deny user");
define("_SURE2PROMOTE", "Are you sure you want to promote user");
define("_SURE2REMOVE", "Are you sure you want to remove user");
define("_SURE2RESEND", "Are you sure you want to resend activation email");
define("_SURE2RESTORE", "Are you sure you want to restore user");
define("_SURE2SUSPEND", "Are you sure you want to suspend user");
define("_SUSPEND", "Suspend");
define("_SUSPENDUSER", "Suspend User");
define("_SUSPENDUSERS", "Suspended Users");
define("_URL", "URL");
define("_USERADMIN", "User's Administration");
define("_USERID", "User ID");
define("_USERPROMOTED", "User has been promoted to Admin.");
define("_USERUPDATE", "Update User");
define("_WAITINGUSER", "Waiting User");
define("_WAITINGUSERS", "Waiting Users");

define("_ARTICLES", "Articles");
define("_BBFORUM", "Forum");
define("_CONTENT", "Content");
define("_DOWNLOAD", "Downloads");
define("_ENCYCLOPEDIA", "Encyclopedia");
define("_FAQ", "FAQ");
define("_REVIEWS", "Reviews");
define("_SECTIONS", "Sections");
define("_SURVEYS", "Surveys");
define("_TOPICS", "Topics");
define("_WEBLINKS", "Web Links");

// Admin errors
define("_ADDERROR", "ERROR: There was a problem with the database.");
define("_NAMEERROR", "ERROR: This Admin name is already in use.");
define("_NEEDTOCOMPLETE", "You need to complete all required fields");
define("_PASSWDNOMATCH", "Sorry, the new passwords doesn't match. Go Back and Try Again");
define("_USERNOEXIST", "User Doesn't Exists!");

/*****************************************************/
/* Originals : modules/Your_Account/*.*              */
/*****************************************************/
define("_USERLOGIN", "ユーザーのログイン");
define("_USERREGLOGIN", "User Registration/Login");
define("_REGNEWUSER", "新規ユーザー登録");
define("_PASSWORDLOST", "パスワードをお忘れですか？");

define("_NOPROBLEM", "大丈夫です。ユーザー名を入力して送信ボタンを押してください。確認コードを電子メールで送信しますので、もう一度ユーザー名と確認コードを入力すれば、新しいパスワードを送信します。");
define("_CONFIRMATIONCODE", "確認コード");
define("_SENDPASSWORD", "パスワードを送信");

define("_YOUARELOGGEDOUT", "ログアウトしました！");

define("_USERACCOUNT", "ユーザーアカウント");
define("_AT", "さんがウェブサイト「");
define("_HASTHISEMAIL", "」でこのメールの送信手続きをしました。");
define("_AWEBUSERFROM", "あなたのパスワードは");
define("_HASREQUESTED", "のユーザーが送信するようリクエストしています。");
define("_YOURNEWPASSWORD", "あなたのパスワードは：");
define("_YOUCANCHANGE", "パスワードは再度ログインした後に変更できます。ログイン先：");
define("_IFYOUDIDNOTASK", "このメールに覚えがない場合、心配されることはありません。このメールを見ているのはあなたです。どこかの誰かではありません。エラーによりこのメールが届いている場合は、新しいパスワードでログインしてください。");

define("_PASSWORD4", "パスワード：");
define("_MAILED", "送信されました。");

define("_CODEREQUESTED", "からアクセスしたユーザーにより確認コード申請されています。");
define("_YOURCODEIS", "あなたの確認コードは：");
define("_WITHTHISCODE", "このコードで次のサイトの新しいパスワードをもらえます：");
define("_IFYOUDIDNOTASK2", "このメールに覚えがない場合は、ご心配には及びません。メールを削除してください。");

define("_CODEFOR", "確認コード: ");
define("_USERPASSWORD4", "このパスワードのユーザーは");

define("_255CHARMAX", "(最長で半角 255 文字です。HTML で署名してください。)");
define("_CANKNOWABOUT", "(最長で半角 255 文字です。あなたの紹介文を記入してください。)");
define("_SOMETHINGWRONG", "何かしくじったみたい・・・怒らないでね");
define("_CHARLONG", "characters long");

// Edit comments view
define("_COMMENTSCONFIG", "コメント設定");
define("_DISPLAYMODE", "表示モード");
define("_NOCOMMENTS", "コメントはありません");
define("_NESTED", "ネストする");
define("_FLAT", "平坦に");
define("_THREAD", "スレッドで");
define("_SORTORDER", "ソート順");
define("_OLDEST", "日付の古いものを上に");
define("_NEWEST", "日付の新しいものを上に");
define("_HIGHEST", "スコアの高い順に");
define("_THRESHOLD", "閾値");
define("_COMMENTSWILLIGNORED", "設定された値以下のスコアのコメントは表示されません");
define("_UNCUT", "全てを見る");
define("_EVERYTHING", "ほとんど全て");
define("_FILTERMOSTANON", "匿名の記事はほぼ全て読まない");
define("_USCORE", "スコア");
define("_SCORENOTE", "匿名の投稿のスコアは初期値０になります。登録ユーザーは１です。モデレータはスコアを加えたり減らしたりすることができます。");
define("_NOSCORES", "スコアを表示しない");
define("_HIDDESCORES", "(スコアを隠す：スコアは見えませんが、閾値には適用されたままです)");
define("_MAXCOMMENT", "コメントの最大の長さ");
define("_TRUNCATES", "(長いコメントは途中で切って「もっと読む」というリンクを作成します。無効にするにはものすごく大きな値にしてください)");
define("_BYTESNOTE", "バイト (1024 バイト = 1K)");

define("_PRIVATEMESSAGES", "あなた宛のプライベートメッセージ");
define("_BROWSEUSERS", "ユーザーを見る");
define("_SEARCHUSERS", "ユーザーを検索");
define("_SENDPRIVATEMSG", "Send a Private Message to");

// Change theme
define("_THEMESELECTION", "テーマ選択");
define("_SELECTTHEME", "テーマを選択してください");
define("_THEMETEXT1", "このオプションではサイトの外観を変更することができます");
define("_THEMETEXT2", "変更はあなただけに適用されます。");
define("_THEMETEXT3", "ユーザーはそれぞれ自分で選んだテーマでサイトを閲覧することができます。");

// Edit home
define("_HOMECONFIG", "ホーム設定");
define("_NEWSINHOME", "ホームに表示する記事の数");
define("_MAX127", "(最大 127):");
define("_MESSAGEACTIVATE", "公開メッセージを送信しますか？");
define("_ACTIVATEPERSONAL", "個人メニューをアクティブにする");
define("_CHECKTHISOPTION", "(このオプションにチェックを入れると以下の文がホームに表示されます)");
define("_YOUCANUSEHTML", "(HTML を使ってリンクを作成することもできます)");
?>