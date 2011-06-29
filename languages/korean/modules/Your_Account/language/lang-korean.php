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
/* $Id: lang-korean.php,v 1.1 2004/07/24 20:31:20 akamu Exp $        */
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
define("_BLANKFORAUTO", "당신의 비밀번호를 자동생성 하시려면 공백으로 놔두세요");
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
define("_THISISYOURPAGE", "개인정보변경 및 페이지설정");
define("_PERSONALINFO", "개인정보 ");
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
define("_AVATAR", "아바타 ");
define("_WEBSITE", "홈페이지 ");
define("_LOCATION", "주소 ");
define("_OCCUPATION", "직업 ");
define("_INTERESTS", "관심분야 ");
define("_SIGNATURE", "서명 ");

define("_USERSTATUS", "현재 접속상태 ");
define("_ONLINE", "온라인");
define("_OFFLINE", "오프라인");
define("_NOTSUBSCRIBED", "뉴스레터 메일로 받지 않음");
define("_SUBSCRIBED", "뉴스레터를 받아보실 수 있습니다.");

define("_BROADCAST", "Broadcast Public Message");
define("_BROADCASTTEXT", "당신은 여기에서 <i>공개 메세지</i>를 보낼 수 있습니다(최대 255자). 이 메세지는 10분동안 모든 온라인회원들에게 보여집니다. 사이크 로고 아래에 있는 적색바에서 온라인 회원들은 당신의 메세지를 보게 됩니다. 회원들은 <a href=\"modules.php?name=Your_Account&op=edithome\">여기</a>에서 공개메세지를 비활성화시킬 수 있습니다. 나쁜 용도로 사용하지 마세요. HTML 코드는 여기에서 허용되지 않습니다.");
define("_SEND", "전송");
define("_BROADCASTSENT", "당신의 방송 메세지가 전송되었습니다.");
define("_BROADCASTNOTSENT", "<b>에러:</b> 당신의 방송 메세지가 없거나 이미 최근에 전송한 적이 있습니다. 다른 메세지를 보내시려면 10분 정도 기다려 주세요.");
define("_RETURNPAGE", "개인 페이지로 돌아가기");

define("_MYHEADLINES", "나의 헤드라인");
define("_SELECTASITE", "헤드라인을 읽기 원하는 사이트 선택:");
define("_SELECTASITE2", "웹사이트 선택");
define("_ORTYPEURL", "또는 당신의 선호하는 사이트의 헤드라인 RSS/XML url을 적어주세요:");
define("_GO", "Go");
define("_HEADLINESFROM", "Headlines from");

define("_READMYJOURNAL", "내 저널 읽기");

// Errors
define("_ACCDELETED", "Account has been Deleted");
define("_SERVERNOMAIL", "This server does not have mail access. Please contact the site admin for assistance.");
define("_ACCSUSPENDED", "Account has been Suspended");
define("_BESUREACT", "Be sure you have activated your account.");
define("_MEMDEL", "Member Deleted");
define("_YOUBAD", "ERROR: You have attempted to perform an illegal operation!");
define("_NOINFOFOR", "님에 대한 정보가 없습니다.");
define("_SORRYNOUSERINFO", "죄송합니다. 사용자 정보를 찾을수 없습니다.");
define("_LOGININCOR", "로그인 실패! 다시 시도하세요...");
define("_UPDATEFAILED", "회원 기입사항이 업데이트 되지 않습니다. 관리자에게 문의하세요.");

// Navbar
define("_ACCTCHANGE", "Change<br>Info");
define("_ACCTCOMMENTS", "Comments<br>Setup");
define("_ACCTEXIT", "Logout<br>Exit");
define("_ACCTHOME", "Change<br>Home");
define("_ACCTJOURNAL", "Your<br>Journals");
define("_ACCTTHEME", "Select<br>Theme");
define("_CHANGEHOME", "페이지설정");
define("_CHANGEYOURINFO", "개인정보변경");
define("_CONFIGCOMMENTS", "리플형식설정");
define("_DELETEACCT", "Delete<br>Account");
define("_LOGOUTEXIT", "로그아웃");
define("_MESSAGES", "쪽지함");
define("_RETURNACCOUNT", "계정 페이지로 돌아가기");
define("_SELECTTHETHEME", "테마 선택");

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
define("_EDITUSER", "사용자 정보변경");
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
define("_OPTION", "옵션 ");
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
define("_USERLOGIN", "사용자 로그인"); 
define("_USERREGLOGIN", "User Registration/Login");
define("_REGNEWUSER", "신규회원가입"); 
define("_PASSWORDLOST", "비밀번호를 잊으셨습니까?"); 

define("_NOPROBLEM", "걱정하지 마세요. 먼저 아래에 로그인 아이디를 입력하시고 '비밀번호 확인' 버튼을 클릭하시면 '비밀번호 확인코드'를 등록하신 전자메일 주소로 보내드립니다. 그런 다음 '로그인 아이디'와 '비밀번호 확인코드'를 모두 입력하시고 '비밀번호 확인'버튼을 클릭하시면 등록하신 전자메일 주소로 비밀번호를 보내드립니다."); 
define("_CONFIRMATIONCODE", "비밀번호 확인코드 "); 
define("_SENDPASSWORD", "비밀번호 확인"); 

define("_YOUARELOGGEDOUT", "로그아웃 되었습니다."); 

define("_USERACCOUNT", "회원계정이"); 
define("_AT", "의"); 
define("_HASTHISEMAIL", "이것과 연관된 이메일이 있습니다."); 
define("_AWEBUSERFROM", "의 웹유저가"); 
define("_HASREQUESTED", "비밀번호 전송을 요구하였습니다."); 
define("_YOURNEWPASSWORD", "당신의 새로운 비밀번호:"); 
define("_YOUCANCHANGE", "에서 로그인한 후에 바꾸실 수 있습니다."); 
define("_IFYOUDIDNOTASK", "만약 이것에 대해 문의하신 적이 없다면, 걱정하지 마세요. You are seeing this message, not 'them'. 새로운 비밀번호로 로그인할 때의 에러일 뿐입니다."); 

define("_PASSWORD4", "비밀번호가 발송되었습니다."); 
define("_MAILED", " 메일을 확인해 보세요"); 

define("_CODEREQUESTED", "비밀번호를 바꾸기 위해 인증코드를 요청하였습니다."); 
define("_YOURCODEIS", "당신의 인증코드는:"); 
define("_WITHTHISCODE", "에서 이 코드로 새 비밀번호를 지정할 수 있습니다"); 
define("_IFYOUDIDNOTASK2", "만약 이것에 대해 문의하신 적이 없다면, 걱정하지 마세요. 이 이메일을 지우시면 됩니다."); 

define("_CODEFOR", " 님의 비밀번호 확인코드가 등록한 전자메일주소로 발송되었습니다."); 
define("_USERPASSWORD4", "님의 비밀번호"); 

define("_255CHARMAX", "(최대 255자. HTML로도 서명작성이 가능합니다.)"); 
define("_CANKNOWABOUT", "(최대 255자. 기타 하시고 싶으신 말을 적으세요)"); 
define("_SOMETHINGWRONG", "Something screwed up... don't you hate that?"); 
define("_CHARLONG", "characters long");

// Edit comments view
define("_COMMENTSCONFIG", "코멘트형식 설정");
define("_DISPLAYMODE", "출력형태 "); 
define("_NOCOMMENTS", "코멘트 출력안함");
define("_NESTED", "접힌 상태");
define("_FLAT", "평평한 상태");
define("_THREAD", "펼친 상태");
define("_SORTORDER", "정렬방식"); 
define("_OLDEST", "오래된 것부터");
define("_NEWEST", "새로운 것부터");
define("_HIGHEST", "높은 점수를 받은 것부터");
define("_THRESHOLD", "시작지점 ");
define("_COMMENTSWILLIGNORED", "&lt;!--Comments scored less than this setting will be ignored.--&gt;"); 
define("_UNCUT", "Uncut and Raw"); 
define("_EVERYTHING", "Almost Everything"); 
define("_FILTERMOSTANON", "Filter Most Anonymous"); 
define("_USCORE", "점수 "); 
define("_SCORENOTE", "비회원은 0점부터 시작, 로그인 사용자는 1점부터 시작합니다"); 
define("_NOSCORES", "점수를 출력하지 않음"); 
define("_HIDDESCORES", "(점수 숨김 : 출력되지는 않으나 여전히 점수는 적용됩니다)"); 
define("_MAXCOMMENT", "최대 코멘트 길이"); 
define("_TRUNCATES", "(가급적 긴 코멘트를 자제해 주세요)"); 
define("_BYTESNOTE", "bytes (1024 bytes = 1K)"); 

define("_PRIVATEMESSAGES", "내 쪽지함"); 
define("_BROWSEUSERS", "사용자 보기"); 
define("_SEARCHUSERS", "사용자 검색");
define("_SENDPRIVATEMSG", "Send a Private Message to");

// Change theme
define("_THEMESELECTION", "테마 선택");
define("_SELECTTHEME", "테마를 선택하세요");
define("_THEMETEXT1", "이 옵션은 모든 페이지에 적용됩니다");
define("_THEMETEXT2", "선택한 테마는 본인자신에게만 적용됩니다");
define("_THEMETEXT3", "사용자마다 다른 테마를 선택할 수 있습니다");
 
// Edit home
define("_HOMECONFIG", "페이지설정");
define("_NEWSINHOME", "홈페이지에 출력될 뉴스 갯수");
define("_MAX127", "(최대 127개까지 가능) : ");
define("_MESSAGEACTIVATE", "공개 메세지를 활성화하겠습니까?");
define("_ACTIVATEPERSONAL", "개인메뉴 활성화");
define("_CHECKTHISOPTION", "(이 옵션에 체크하면 홈페이지에 아래의 상자에 입력한 내용이 출력됩니다)");
define("_YOUCANUSEHTML", "(HTML 태그를 이용하여 작성할 수 있습니다)");
?>