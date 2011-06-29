<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/korean/main.php,v $
  $Revision: 9.30 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:52 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','ko');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %m/%d @ %T %Z');
define('_DATESTRING2','%A, %m/%d');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','´ÙÀ½');
define('_PREVIOUSPAGE','ÀÌÀü');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','검색');
define('_LOGIN','로그인');
define('_WRITES','글쓰기');
define('_POSTEDON','게시 날짜');
define('_NICKNAME','아이디');
define('_PASSWORD','비밀번호');
define('_WELCOMETO','환영합니다.');
define('_EDIT','수정');
define('_DELETE','삭제');
define('_POSTEDBY','게시자 : ');
define('_READS','번 읽음');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">뒤로</a>' : '<a href="javascript:history.go(-1)">뒤로</a>').' ]');
define('_COMMENTS','의견 쓰기');
define('_PASTARTICLES','갓 지난 글');
define('_OLDERARTICLES','해묵은 글');
define('_BY','글쓴이 : ');
define('_ON','-');
define('_LOGOUT','로그아웃');
define('_WAITINGCONT','대기중인 글');
define('_WREVIEWS','대기중인 리뷰');
define('_WLINKS','대기중인 링크');
define('_ONEDAY','오늘같은 어느 날...');
define('_ASREGISTERED','아직 회원이 아니세요?<br /><a href="\'.getlink("Your_Account&amp;file=register").\'">지금 회원이 되세요</a>');
define('_MENUFOR','님의 메뉴');
define('_NOBIGSTORY','아직, 오늘 새로운 글이 없습니다.');
define('_BIGSTORY','가장 많이 읽은 글:');
define('_SURVEY','설문조사');
define('_POLLS','투표');
define('_PCOMMENTS','의견 쓰기 : ');
define('_RESULTS','결과보기');
define('_HREADMORE','전문보기');
define('_CURRENTLY','현재,');
define('_GUESTS','손님 :');
define('_MEMBERS','회원 :');
define('_YOUARELOGGED','로그인 아이디 :');
define('_YOUHAVE','메시지:');
define('_PRIVATEMSG','개의 쪽지가 있습니다.');
define('_YOUAREANON','님은 손님입니다. <br /><a href="'.getlink('Your_Account&amp;file=register').'">여기</a> 를 통해 회원으로 가입할 수 있습니다.');
define('_NOTE','주석: ');
define('_ADMIN','관리자 : ');
define('_WERECEIVED','수신내용:');
define('_PAGESVIEWS','페이지뷰 :: since');
define('_TOPIC','주제');
define('_UDOWNLOADS','대기중인 다운로드');
define('_VOTE','투표');
define('_VOTES','투표 ');
define('_MVIEWADMIN','보기 : 관리자 전용');
define('_MVIEWUSERS','보기 : 회원만 봄');
define('_MVIEWANON','보기 : 비회원만 봄');
define('_MVIEWALL','보기 : 모든 사용자');
define('_EXPIRELESSHOUR','제한시간 : 1시간 이내');
define('_EXPIREIN','끝나는기간-');
define('_UNLIMITED','제한없음');
define('_HOURS','시간');
define('_RSSPROBLEM','현재 큰 표제에 문제가 있습니다.');
define('_SELECTLANGUAGE','언어 선택');
define('_SELECTGUILANG','언어 선택:');
define('_NONE','없음');
define('_BLOCKPROBLEM','<center>블록에 문제가 있습니다.</center>');
define('_BLOCKPROBLEM2','<center>블록에 내용이 없습니다.</center>');
define('_MODULENOTACTIVE','죄송합니다!, 아직 모듈이 활성화되지 않았습니다.');
define('_NOACTIVEMODULES','비활성 모듈');
define('_MODULENOEXIST','We\'re sorry, but that page %s does not exist');
define('_FORADMINTESTS','(관리자 테스트용)');
define('_BBFORUMS','포럼');
define('_ACCESSDENIED','이용할 권리가 없습니다.');
define('_RESTRICTEDAREA','이곳은 회원이 아닌분은 이용할 수 없습니다.');
define('_MODULEUSERS','죄송합니다! 이곳은 회원에게만 이용할 수 있게 되어있습니다.<br />');
define('_MODULEUSERS2','무료로 <a href="'.getlink('Your_Account&amp;file=register').'">여기</a> 에서 가입하시면, 이 메뉴를 이용할 수 있습니다.<br /><br />감사합니다.');
define('_MODULESADMINS','죄송합니다. 이 섹션은 관리자만 접근이 가능합니다.<br /><br />');
define('_MODULESGROUPS','group access required');
define('_HOME','홈');
define('_HOMEPROBLEM','홈페이지가 없습니다!!!');
define('_ADDAHOME','새 디폴트 홈페이지 모듈로 정하기');
define('_HOMEPROBLEMUSER','사이트 작업중입니다. 잠시후에 다시 방문해주세요.');
define('_MORENEWS','뉴스란(欄)');
define('_ALLCATEGORIES','전체 카테고리');
define('_SPAMGUARDPROTECTED','보내신 메일이 스팸가드(SpamGuard)에 의하여 차단되었습니다.');
define('_M_CHARS','최대: %s 자');

define('_SYS_MESSAGE','시스템 메시지');
define('_SYS_MESSAGES','시스템 메시지');
define('_SYS_MAINTENANCE','지금은 관리(보수) 모드 상태입니다.');
define('_SYS_DEMO','지금은 관리(보수) 데모 모드 상태입니다.<br />이 데모 모드에서는 어떠한 데이타베이스도 바꿀 수 없습니다.<br /><a href="'.adminlink('logout').'">나가기!</a>');

define('_DATE','날짜');
define('_HOUR','시간');
define('_UMONTH','월');
define('_YEAR','년');
define('_JANUARY','1월');
define('_FEBRUARY','2월');
define('_MARCH','3월');
define('_APRIL','4월');
define('_MAY','5월');
define('_JUNE','6월');
define('_JULY','7월');
define('_AUGUST','8월');
define('_SEPTEMBER','9월');
define('_OCTOBER','10월');
define('_NOVEMBER','11월');
define('_DECEMBER','12월');

define('_MONDAY','월요일');
define('_TUESDAY','화요일');
define('_WEDNESDAY','수요일');
define('_THURSDAY','목요일');
define('_FRIDAY','금요일');
define('_SATURDAY','토요일');
define('_SUNDAY','일요일');
//three letter abbrev.
define('_ABR_MONDAY','월');
define('_ABR_TUESDAY','화');
define('_ABR_WEDNESDAY','수');
define('_ABR_THURSDAY','목');
define('_ABR_FRIDAY','금');
define('_ABR_SATURDAY','토');
define('_ABR_SUNDAY','일');

define('_BWEL','환영합니다!');
define('_BPM','쪽지');
define('_BUNREAD','안 읽은 쪽지');
define('_BREAD','읽은 쪽지');
define('_BMEMP','회원 현황');
define('_BLATEST','최근가입자');
define('_BTD','오늘 가입');
define('_BYD','어제 가입');
define('_BOVER','총 회원');
define('_BVISIT','접속 현황');
define('_BVIS','손님');
define('_BMEM','회원');
define('_BTT','현재 접속자');
define('_BON','접속중');
define('_BREG','회원가입');
define('_BROADCAST','공개 메세지 발송');
define('_BROADCASTFROM','공개 메세지 발송자- ');
define('_TURNOFFMSG','공개 메세지 끄기');
define('_JOURNAL','일지');
define('_READMYJOURNAL','내 일지 읽기');
define('_ADD','추가');
define('_YES','예');
define('_NO','아니오');
define('_INVISIBLEMODULES','보이지 않는 모듈');
define('_ACTIVEBUTNOTSEE','(활성중이나 보이지 않는 모듈)');
define('_BOTS','Bots');

define('_UM','업데이트 모니터');
define('_UM_F','업데이트 서비스와 연결할 수 없습니다. 다음에 다시 시도하세요.');
define('_UM_G','지금은 최신의 버전을 사용하고 있습니다.');
define('_UM_R','지금 %1$s 버전으로 <a href="%2$s" target="_blank">업그레이드</a> 하세요.');

define('_TEAM','팀');
define('_LINKAPPROVEDMSG','축하합니다! 당신이 제출하신 웹 링크가 승낙되었습니다, 부디 우리에게 다시 연결하세요.');
define('_MODREQLINKS','웹링크 수정');
define('_BROKENLINKS','깨진 링크');
define('_MODREQDOWN','다운로드 수정');
define('_BROKENDOWN','깨진 다운로드');
define('_PAGEGENERATION','페이지 생성:');
define('_SECONDS','초');
// php.net/sprintf#AEN134707
define('_PAGEFOOTER','Page Generation in %1$s seconds and %2$s DB Queries in %3$s seconds');
define('_YOUHAVEONEMSG','새쪽지가 있습니다.');
define('_NEWPMSG','새쪽지');
define('_CONTRIBUTEDBY','공헌자');
define('_CHAT','채팅');
define('_REGISTERED','회원');
define('_CHATGUESTS','손님');
define('_USERSTALKINGNOW','지금 대화중인 사람들');
define('_ENTERTOCHAT','채팅방 입장');
define('_CHATROOMS','사용가능한 방');
define('_ALLTOPICS','모든 주제');
define('_ASSOTOPIC','관련된 주제');
define('_HELLO','안녕하세요');
define('_ALL','모두');
define('_URL','URL');
define('_SUBJECT','주제(主題)');
define('_PREVIEW','미리 보기');
define('_SEND','보내기');
define('_ANONYMOUS','익명');
define('_BREADCRUMB', '페이지 타이틀에 구획문자가 보입니다(Breadcrumb Delimiter)');
define('_BC_DELIM',''.isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&rsaquo;');//''. is for cpglang
define('_RESET','다시 고치기');
define('_AT','at');
define('_LASTMSGS','Last %s Forum Messages');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','Printer Friendly Page');

define('_CREDITS_TITLE','Credits');
define('_CREDITS_PRODUCT','Product');
define('_CREDITS_DESC','Description');
define('_CREDITS_AUTHORS','Author(s)');

define('_PP_TITLE','Privacy Policy');
define('_PP_MODIFY','이 메시지를 편집하세요');

define('_SENDERNAME','보내는 사람 이름');
define('_SENDEREMAIL','보내는 사람 메일');
define('_RECIPIENTNAME','받는 사람 이름');
define('_RECIPIENTEMAIL','받는 사람 메일');

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
define('_TB_BLOCK','내 계정 도구');
define('_TB_TASKS','나가기');
define('_TB_INFO','정보');
define('_TB_PROFILE_INFO','기본정보');
define('_TB_EDIT_PROFILE','기본정보 변경');
define('_TB_EDIT_REG','비밀번호 변경');
define('_TB_EDIT_PRIVATE','내 비밀 정보');
define('_TB_EDIT_AVATAR','내 사진');
define('_TB_DELETE','내 계정 삭제');
define('_TB_CONFIG','추가정보');
define('_TB_EDIT_PREFS','추가정보 변경');
define('_TB_EDIT_HOME','내 홈페이지 편집');
define('_TB_EDIT_COMM','내 코멘트 편집');
define('_TB_PERSONAL','개인 모듈');
define('_TB_PERSONAL_GALLERY','내 갤러리');
define('_TB_PERSONAL_JOURNAL','내 일지');
define('_TB_PRIVMSGS','쪽지');
define('_TB_PRIVMSGS_INBOX','받은 쪽지함');
define('_TB_PRIVMSGS_OUTBOX','보낸 쪽지함');
define('_TB_PRIVMSGS_SENTBOX','보낸함');
define('_TB_PRIVMSGS_SAVEBOX','저장함');
define('_TB_PRIVMSGS_SEND','메시지 보내기');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','로그인 정보');
define('_SECURITYCODE','보안코드');
define('_TYPESECCODE','보안코드 입력');
define('_MEMBERSOPTIONS','회원 메뉴');
define('_READSEND','쪽지 읽기와, 다른 회원에게 쪽지 보내기.');
define('_INBOX','쪽지함');
define('_NEW','새 쪽지');
define('_ACCOUNTOPTIONS','내 정보 변경과 쪽지 읽기.');
define('_LOGOUTACCT','내 계정에서 나가기');
define('_LOGOUTADMINACCT','관리자 계정에서 나가기.');
define('_BLOGIN','당신의 계정');
define('_BFLOGIN','내 정보');
define('_BHID','숨기기');
define('_WHOWHERE','위치 정보');
define('_STAFFONL','운영진');
define('_STAFFNONE','아직 로그인한 운영진이 없습니다!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','교제');
define('_BlogLANG','블로그');
define('_ContentLANG','Content');
define('_coppermineLANG','사진첩');
define('_CPGlangLANG','번역');
define('_DownloadsLANG','다운로드');
define('_EncyclopediaLANG','백과사전');
define('_ForumsLANG','토론장');
define('_ContactLANG','건의사항');
define('_FAQLANG','FAQ - 도움말');
define('_Members_ListLANG','회원 명단');
define('_NewsLANG','새소식');
define('_ReviewsLANG','Reviews');
define('_SearchLANG','찾기');
define('_StatisticsLANG','홈페이지 상황');
define('_Stories_ArchiveLANG','글 묶음');
define('_Submit_NewsLANG','글 제출');
define('_SurveysLANG','설문조사');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','주제');
define('_Private_MessagesLANG','내 쪽지');
define('_Tell_a_FriendLANG','친구에게 추천하기');
define('_Web_LinksLANG','웹 링크');
define('_Your_AccountLANG','회원정보');
define('_CPG_EventsLANG','일정관리');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Languages!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Groups');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Headlines');

define('_COMMUNICATION','친교');
define('_FRIENDS','친구');
define('_STORE','Store');
define('_PRODUCTS','Products');
define('_DONATE','기부');
define('_HELP','도움말');
define('_GALLERIES','겔러리');
define('_DOCS','문서');
define('_RULES','규칙 & 규정');
define('_MENU','메뉴');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','You <strong>are</strong> subscribed to<br />our newsletter');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','You are <strong>not</strong> subscribed to<br />our newsletter');
define('_NEWSLETTERBLOCKREGISTER','You must be a<br /><strong>registered user</strong><br />to receive our newsletter');
define('_NEWSLETTERBLOCKSUBSCRIBE','Subscribe');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Unsubscribe');
define('_NEWSLETTERBLOCKREGISTERNOW','Register Now!');
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
define('_SAVECHANGES','변경사항 저장');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','언어');
define('_FUNCTIONS','Functions');
define('_SHOW','보기');
define('_TO','To');
define('_DAY','Day');
define('_LAST','최근');
define('_ACTIVE','활성화');
define('_DEACTIVATE','Deactivate');
define('_INACTIVE','Inactive');
define('_ACTIVATE','Activate');
define('_ACTIVATE2','Activate?');
define('_VIEW','Visible to');
define('_VIEWPRIV','Show this to');
define('_MVADMIN','Administrators Only');
define('_MVUSERS','Registered Users Only');
define('_MVANON','Anonymous Users Only');
define('_MVALL','All Visitors');
define('_IMAGE','Image');
define('_GO','Go!');
define('_OPTION','Option');
define('_CATEGORY','Category');
define('_SUBCATEGORY','Sub-Category');
define('_ID','ID');
define('_EXPIRATION','Expiration');
define('_DAYS','days');
define('_WARNING','Warning');
define('_POLLTITLE','Poll Title');
define('_POLLEACHFIELD','Please enter each available option into a single field');
define('_ADDCATEGORY','Add a New Category');
define('_PAGEBREAK','If you want multiple pages you can write <b>&lt;!--pagebreak--&gt;</b> where you want to cut.');
define('_SIGNATURE','Signature');
define('_DESCRIPTION','Description');
define('_EDITCATEGORY','Edit Category');
define('_IN','in');
define('_DESCRIPTION255','Description: (255 characters max)');
define('_MODCATEGORY','Modify a Category');
define('_SUBMITTER','Submitter');
define('_VISIT','Visit');
define('_EXTENDEDTEXT','Extended Text');
define('_CHECKCATEGORIES','Check Categories');
define('_INCLUDESUBCATEGORIES','(include Sub-Categories)');
define('_CHECKSUBCATEGORIES','Check Sub-Categories');
define('_VALIDATELINKS','Validate Links');
define('_FAILED','Failed!');
define('_BEPATIENT','(please be patient)');
define('_VALIDATINGCAT','Validating Category (and all subcategories)');
define('_VALIDATINGSUBCAT','Validating Sub-Category');
define('_OK','Ok!');
define('_CHECK','Check');
define('_IGNORE','Ignore');
define('_HITS','Hits');
define('_FILESIZE', 'File Size');
define("_EZTHEREIS","There are");
define("_EZSUBCAT","sub-categories");
define("_EZATTACHEDTOCAT","under this category");
define("_EZBROKENLINKS","Broken Links");
define("_DELEZLINKCATWARNING","WARNING : Are you sure you want to delete this category ?<br /> You will delete all sub-categories and attached links as well !");

// index.php
define('_DEFHOMEMODULE','Default Homepage Module');
define('_MODULEINHOME','Module loaded in the homepage:');
define('_CHANGE','Change');
define('_WHOSONLINE','현재 온라인 사용자들');
define('_NP_ADMIN','Notepad');
define('_NP_LOCKED','The notepad has been locked<br />Only a root administrator (super user) can unlock it');
define('_NP_SAVE','Save Notes');
define('_NP_UNLOCK','Unlock Notepad');
define('_NP_LOCK','Lock Notepad');
// news
define('_STICKY','Sticky Articles');
define('_ARTICLEUP','Move article up');
define('_ARTICLEDOWN','Move article down');
define('_UNSTICK','Unstick');
define('_STICK','Sticky');
define('_AUTOMATEDARTICLES','Scheduled Articles');
define('_STORYID','Story ID');
define('_CURRENTPOLL','현재진행중인 설문조사');

// admin.php
define('_ADMINISTRATION','관리자');
define('_NOADMINYET','There are no administrator accounts yet, proceed to create the super user...');
define('_CREATEUSERDATA','Would you like to create a regular user with the same data?');
define('_ADMINLOGIN','관리자 메뉴로 로그인');
define('_ADMINID','관리자 아이디');
define('_EMAIL','Email');
define('_SUBMIT','제출');
define('_YOUARELOGGEDOUT','The system has successfully logged you out');
define('_PASSWDNOMATCH','The passwords do not match. Please go back and re-enter them.');
define('_LOGIN_REMEMBERME','자동 로그인');
define('_ADMINMENU_LOGOUT','정상적으로 관리자 메뉴에서 로그아웃 하셨습니다.');
define('_PASSWORD_MALFORMED','Please include at least one number, one capital letter and one lowercase letter in your password');

// admins.php
define('_AUTHORSADMIN','Administrator Control');
define('_NAME','Name');
define('_REQUIRED','(required)');
define('_MODIFYINFO','Modify Info');
define('_DELAUTHOR','Delete Administrator');
define('_ADDAUTHOR','Add a new administrator');
define('_PERMISSIONS','Permissions');
define('_SUPERUSER','Super User');
define('_SUPERWARNING','Warning: If Super User is checked, the administrator will be granted full permissions');
define('_ADDAUTHOR2','Add Administrator');
define('_RETYPEPASSWD','Retype Password');
define('_FORCHANGES','(For Changes Only)');
define('_COMPLETEFIELDS','You must complete all compulsory fields');
define('_CREATIONERROR','Creation of new administrator failed');
define('_AUTHORDEL','Delete Administrator');
define('_PUBLISHEDSTORIES','This administrator has published stories');
define('_SELECTNEWADMIN','Please choose an existing administrator to assign the stories to');
define('_GODNOTDEL','The super user cannot be deleted!');
define('_MAINACCOUNT','Super User *');
define('_USERS','Users');

// banners.php
define('_BANNERSADMIN','Banners Administration');
define('_DELETEBANNER','Delete Banner');
define('_SURETODELBANNER','Are you sure you want to delete this banner?');
define('_EDITBANNER','Edit Banner');

// blocks.php
define('_BLOCKSADMIN','Blocks Administration');
define('_CENTER','가운데');
define('_CENTERUP','Center Up');
define('_CENTERDOWN','Center Down');
define('_BLOCKFILE','(Block File)');
define('_BLOCKFILE2','파일');
define('_BLOCKSYSTEM','시스템');
define('_ADDNEWBLOCK','Add a New Block');
define('_RSSFILE','RSS/RDF File URL');
define('_ONLYHEADLINES','(Only for headlines)');
define('_REFRESHTIME','Refresh Time');
define('_CREATEBLOCK','Create Block');
define('_EDITBLOCK','Edit Block');
define('_BLOCK','Block');
define('_SAVEBLOCK','Save Block');
define('_BLOCKACTIVATION','Block Activation');
define('_BLOCKPREVIEW','This is the preview for');
define('_WANT2ACTIVATE','Would you like to activate this block?');
define('_ARESUREDELBLOCK','Are you sure you want to remove');
define('_BLOCKUP','Move block up');
define('_BLOCKDOWN','Move block down');
define('_BLOCKTOP','Move block to top');
define('_BLOCKBOTTOM','Move block to bottom');
define('_TITLE','Title');
define('_POSITION','Position');
define('_WEIGHT','Weight');
define('_STATUS','Status');
define('_LEFTBLOCK','Left Block');
define('_LEFT','Left');
define('_RIGHTBLOCK','Right Block');
define('_RIGHT','Right');
define('_TYPE','Type');
define('_CUSTOM','Custom');
define('_FILENAME','파일 이름');
define('_FILEINCLUDE','If you use this option, ignore the Content and Refresh time fields');
define('_VISIBLEINMODULES', 'Visible in modules');

// comments.php
define('_REMOVECOMMENTS','Delete Comments');
define('_SURETODELCOMMENTS','Are you sure you want to delete the selected comment and all replies associated with it?');

// database.php
define('_SAVEDATABASE','Backup');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Current Status');
define('_ACTIVATEPAGE','Activate This Page?');

// history.php
define('_EPHEMADMIN','Today in History');
define('_ADDEPHEM','Add a new entry');
define('_EPHEMDESC','Entry description');
define('_EPHEMMAINT','Entry Lookup');
define('_EPHEMEDIT','Edit Entry');
define('_EPHEMDELETE','Delete Entry');

// headlines.php
define('_RSSFAIL','There seems to be a problem with the URL for this RSS feed');
define('_RSSTRYAGAIN','Please check the URL and RSS filename and try again');
define('_RSSCONTENT','(RSS/RDF Content)');
define('_IFRSSWARNING','If you supply a URL, the content you supply will be ignored');
define('_SETUPHEADLINES','Select \'Custom\' and supply the URL to the RSS feed, or just select a site from the dropdown to fetch news headlines');
define('_HEADLINESADMIN','Headlines Administration');
define('_ADDHEADLINE','Add Headline');
define('_EDITHEADLINE','Edit Headlines');
define('_SURE2DELHEADLINE','Are you sure you want to delete this headline?');

// messages.php
define('_MESSAGESADMIN','Messages Administration');
define('_MESSAGETITLE','Title');
define('_MESSAGECONTENT','Content');
define('_ALLMESSAGES','Overview messages');
define('_EDITMSG','Edit message');
define('_ADDMSG','Add message');
define('_REMOVEMSG','Are you sure that you want to delete this message?');
define('_CHANGEDATE','Reset start date to today?');
define('_IFYOUACTIVE','If you activate this message now, the start date will be set to today');

// modules.php
define('_MODULESADMIN','Modules Administration');
define('_HOMECONFIG','Home Configuration');
define('_MODULESADDONS','Modules and Addons');
define('_INHOME','Set as Home Module');
define('_MODULEHOMENOTE','New modules added to the /modules/ folder will automatically be added to the system<br />Removing a module\'s folder from this directory will automatically remove the module from the system<br /><br />The module with a bold title denotes the module set as my homepage<br />This module cannot be deactivated or restricted to certain users');
define('_PUTINHOME','Set as Home');
define('_SURETOCHANGEMOD','Are you sure you want to change your Homepage from');
define('_NOTINMENU','[ <strong>&middot;</strong> ] denotes a module hidden from view in the Modules block');
define('_SHOWINMENU','Show in menu?');
define('_CUSTOMTITLE','Custom Title');
define('_MODULEEDIT','Modules Edit');
define('_VERSION','Version');
define('_UPGRADE','Upgrade to %s');
define('_DBSIZE','DB size');
define('_CVS_EXPLAIN','This module appears to be able to receive updates through our CVS (Concurrent Versioning System). With CVS, you are able to receive the latest updates of a file very easily, but the latest version of a file may contain bugs as it is likely not part of our stable release.<br /><br />If you are familiar with PHP, you can update this module with the latest CVS files by using the link below. <strong>Backup all files first!</strong>');
define('_CVS_UPDATE','Update CVS files');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','From');
define('_STAFF','Staff');
define('_NL_RECIPS','Recipients');
define('_SUBSCRIBEDUSERS','Subscribed Members');
define('_NL_ALLUSERS','All Members');
define('_NL_ADMINS','Administrators');
define('_NL_REGARDS','Best Regards');
define('_DISCARD','Discard');
define('_REVIEWTEXT','Please look over your message and check for typos');
define('_MANYUSERSNOTE','Due to the large number of users that will receive this newsletter, the task may take several minutes to complete<br />Please be patient!');
define('_NL_NOUSERS','The group selected to receive this newsletter has zero users<br />Please go back and select a different group');
define('_NUSERWILLRECEIVE','users will receive this newsletter');
define('_NLUNSUBSCRIBE',"We sent you this message because you have selected to receive newsletters from our site\n\nYou can choose to unsubscribe from our mailings at any time by following <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">this</a> link\n\nIf you would like further assistance, please send an email to <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">our administrator</a>");
define('_NEWSLETTERSENT','The newsletter has been sent');

// referers.php
define('_WHOLINKS','Who\'s linking to our site?');
define('_DELETEREFERERS','Delete Referers');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Footer');
define('_DEBUG', 'Debug');
define('_SITECONFIG','Web Site Configuration');
define('_GENSITEINFO','General Site Information');
define('_SITENAME','Site Name');
define('_SITEURL','Site URL');
define('_SITELOGO','The filename of my site\'s logo (stored in /images)');
define('_SITESLOGAN','My site\'s slogan');
define('_STARTDATE','When my site was founded');
define('_ADMINEMAIL','Administrator Email');
define('_ITEMSTOP','No. of items to rank in Top module');
define('_STORIESHOME','No. of stories to show on main news page');
define('_OLDSTORIES','No. of stories to show in Old Articles block');
define('_ALLOWANONPOST','Allow unregistered users to post news articles');
define('_DEFAULTTHEME','The default theme for my site');
define('_SHOWSEC','Show security code');
define('_TOOLTIPS','Show tooltips on designated fields');
define('_UM_TOGGLE','Enable Update Service');
define('_UM_EXPLAIN','This will retrieve two pieces of information from our website, dragonflycms.org: the current build of Dragonfly, and any important messages that pertain to your version of Dragonfly. The only data sent to our site is your Dragonfly version number; we do <strong>not</strong> log these requests to our server.');
// maintenance
define('_MAINTENANCE','Maintenance');
define('_MESSAGE','Message');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','Language System');
define('_SELLANGUAGE','Default language for my site');
define('_LOCALEFORMAT','Local time format');
define('_ACTMULTILINGUAL','Activate site-wide multi-lingual features');
define('_ACTUSEFLAGS','Use flags instead of a drop-down box');
// banners
define('_BANNERSOPT','Banner System');
define('_ACTBANNERS','Activate the banner system');
// footer
define('_FOOTERMSG','Page Footer (optional)');
define('_FOOTERLINE1','Footer, line one');
define('_FOOTERLINE2','Footer, line two');
define('_FOOTERLINE3','Footer, line three');
// backend
define('_BACKENDCONF','Syndication');
define('_BACKENDTITLE','Feed title');
define('_BACKENDLANG','Feed language');
// mail stories
define('_MAIL2ADMIN','Pending News Submissions');
define('_NOTIFYSUBMISSION','Notify administrator of pending articles');
define('_EMAIL2SENDMSG','Recipient email address');
define('_EMAILSUBJECT','Subject of email');
define('_EMAILMSG','Message body of email');
define('_EMAILFROM','Sender email address');
// comments
define('_COMMENTSOPT','Comments');
define('_COMMENTSLIMIT','Truncate comments after __ characters');
define('_COMMENTSMOD','Allow moderations of comments');
define('_MODADMIN','Yes, by administrators');
define('_MODUSERS','Yes, by users');
define('_NOMOD','No, do not use moderation');
// adminmenu
define('_GRAPHICOPT','Administration Menu Layout');
define('_BOTH','Both');
define('_GRAPHICAL','Graphical');
define('_SIDEBLOCK','Side-block');
// miscellaneous
define('_MISCOPT','Miscellaneous');
define('_ACTIVATEHTTPREF','Activate logging of HTTP referers');
define('_MAXREF','Set limit on number of referers');
define('_COMMENTSPOLLS','Activate the comment system in surveys');
define('_COMMENTSARTICLES','Activate the comment system in news articles');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','Censor');
define('_CENSORMODE','Mode for matching');
define('_NOFILTERING','No filtering');
define('_EXACTMATCH','Exact match');
define('_MATCHBEG','Match at beginning of text');
define('_MATCHANY','Match anywhere in the text');
define('_CENSORREPLACE','Replacement for restricted word');
// email
define('_EMAILOPTIONS','Mail');
define('_ALLOW_HTML_EMAIL','HTML 형식의 email로 받으시겠습니까');
define('_USE_SMTP','Use SMTP server as opposed to PHP\'s mailer');
define('_SMTP_HOST','SMTP 서버 주소 (smtp.example.com)');
define('_USE_SMTP_AUTH','Does server require SMTP authorization');
define('_SMTP_USER_NAME','SMTP 계정');
define('_SMTP_USER_PASS','SMTP 암호');

// cpg_adminmenu.php
define('_ADMINMENU','관리자 메뉴');
define('_ADMINLOGOUT','로그 아웃');
define('_AMENU0','System');
define('_AMENU1','일반적인 메뉴');
define('_AMENU2','회원에 관한 메뉴');
define('_AMENU3','글에 관한 메뉴');
define('_AMENU4','포럼에 관한 메뉴');
define('_AMENU5','유익한 모듈에 관한 메뉴');
define('_AMENU6','링크에 관한 메뉴');
define('_AMENU7','교제');
define('_AMENU8','Multimedia');
define('_AMENU9','모듈');
define('_BMENU1','Help');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','전체 설정');
define('_DATABASE','데이타베이스');
define('_BLOCKS','블럭');
define('_MODULES','모듈');
define('_EDITADMINS','관리자');
define('_MESSAGES','메시지');
define('_BANNERS','광고');
define('_HTTPREFERERS','HTTP 조회자');
define('_EDITUSERS','회원 관리');
define('_USERSCONFIG','회원가입 구성');
define('_NEWSLETTER','Newsletter');
define('_SUBMISSIONS','제안');
define('_ADDSTORY','글 추가');
define('_TOPICS','글 주제');
define('_ADMPOLLS','설문 조사');
define('_EPHEMERIDS','역사속의 오늘');
define('_REVIEWS','논평');
define('_ENCYCLOPEDIA','백과 사전');
define('_SURVEYS','설문 조사');
define('_SECTIONS','난(欄)');
define('_ARTICLES','개의글');
define('_FAQ','FAQ');
define('_DOWNLOAD','다운로드');
define('_WEBLINKS','웹 링크');
define('_CONTENT','Content');
define('_SYSINFO','System Info');
define('_REPORTABUG','버그 보고하기');
//coppermine admin
define('_W_INSTALL','Which Installation?');
define('_W_PAGE','설정할 항목을 선택하세요?');
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
define('_ERROR','에러');
define('_SEC_ERROR','보안 에러');
define('_ERROR_NOT_SET','%s was not set');
define('_ERROR_NO_POST','Posting from another host is disallowed...');
define('_ERROR_NO_GET','GET requests are not allowed for this function...');
define('_ERROR_BAD_CHAR','The characters that you tried to include in your %s request are forbidden...');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','You tried to access this page through a bad link...');
define('_ERROR_NONE_TO_DISPLAY','There are no %s to display');
define('_ERROR_DELETE_CONF','Are you sure that you want to delete %s?');
define('_ERROR_NO_EXIST','%s does not exist');
define('_ERROR_ALREADYEXIST','%s already exists');
define('_TASK_COMPLETED','Operation complete!');
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
