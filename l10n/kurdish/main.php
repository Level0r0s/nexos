<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/kurdish/main.php,v $
  $Revision: 9.30 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:53 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','ku');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %d.%B. @ %T %Z');
define('_DATESTRING2','%A, %d %B');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Rûpela Pêşî');
define('_PREVIOUSPAGE','Rûpela Ewil');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Bigere');
define('_LOGIN','Têkeve');
define('_WRITES','dinivîse');
define('_POSTEDON','hat nivisîn di');
define('_NICKNAME','<b>Bikarhêner</b>');
define('_PASSWORD','<b>Şîfre</b>');
define('_WELCOMETO','Bi xêr hatin ser');
define('_EDIT','Biguherîne');
define('_DELETE','Jê bibe');
define('_POSTEDBY','Hat nivisîn ji');
define('_READS','xwendin');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Vegere</a>' : '<a href="javascript:history.go(-1)">Vegere</a>').' ]');
define('_COMMENTS','Dîtin');
define('_PASTARTICLES','Nivîsara ewil');
define('_OLDERARTICLES','Nivîsarên kevn');
define('_BY','ji');
define('_ON','di');
define('_LOGOUT','Derkeve');
define('_WAITINGCONT','Teze & Nû');
define('_WREVIEWS','Nirxandin');
define('_WLINKS','Grêdank');
define('_ONEDAY','Rojek wek îro...');
define('_ASREGISTERED','<a href="'.getlink("Your_Account").'">Xwe bêpere REGISTER bike!</a>  Profîla xwe ava bike. Bibe xwedîyê beşek serbixwe û bikaribe bi bikarhênerên din ra baştir ragihîne!');
define('_MENUFOR','Menû bo');
define('_NOBIGSTORY','Heta niha îro nûçe negîhîştî ne');
define('_BIGSTORY','Nûçeya Îro:');
define('_SURVEY','Pirs');
define('_POLLS','Pirsînên me');
define('_PCOMMENTS','Nirxandin:');
define('_RESULTS','Encama Pirsînê');
define('_HREADMORE','zêdetir...');
define('_CURRENTLY','Niha ');
define('_GUESTS','Mîvan û');
define('_MEMBERS','Bikarhêner li vir in.');
define('_YOUARELOGGED','Te xwe REGISTER kirî wek');
define('_YOUHAVE','Bo te');
define('_PRIVATEMSG','mesaj hene');
define('_YOUAREANON','Tu bikarhênerek veşartî yî(neqeydkirî). Tu dikarî xwe <a href="'.getlink("Your_Account").'">li vir REGISTER bike</a>');
define('_NOTE','Têbinî:');
define('_ADMIN','Birêvebir:');
define('_WERECEIVED','Serdanên Me');
define('_PAGESVIEWS','Destavêtinên li ser Malperê ji');
define('_TOPIC','Mijar');
define('_UDOWNLOADS','Dakişandin');
define('_VOTE','Deng bide');
define('_VOTES','Dengdan');
define('_MVIEWADMIN','Dîtin: Tenê Birêvebir');
define('_MVIEWUSERS','Dîtin: Tenê bikarhênerên qeydkirî');
define('_MVIEWANON','Dîtin: Tenê bikarhênerên veşartî');
define('_MVIEWALL','Dîtin: Bikarhêner Giştî');
define('_EXPIRELESSHOUR','ketin: Ji saetek (1) kêmtir');
define('_EXPIREIN','dikeve nav');
define('_UNLIMITED','Bêsînorkirî-Bêwextgirtin');
define('_HOURS','Saet');
define('_RSSPROBLEM','Problem hene bi sernivîsaran li ser rûpela');
define('_SELECTLANGUAGE','Ziman hilbijêre');
define('_SELECTGUILANG','Zimanek bo dîtin û dîmenên malperê hilbijêre');
define('_NONE','Ne');
define('_BLOCKPROBLEM','<center>Problemek heye bi vê cîhê.</center>');
define('_BLOCKPROBLEM2','<center></center>');
define('_MODULENOTACTIVE','Mixabin, ev  modûl ne aktîv e!');
define('_NOACTIVEMODULES','Modûlên Neaktîv');
define('_MODULENOEXIST','Bibûrin bes ew file a we daxaz kirî, %s, na hêt dîtin');
define('_FORADMINTESTS','(Testkirin)');
define('_BBFORUMS','Forum');
define('_ACCESSDENIED','Destavêtin vegerand');
define('_RESTRICTEDAREA','Tu niha hewl didî, ko, bikevî cîhek parastî.');
define('_MODULEUSERS','Mixabin, biborînin, ev cîh tenê bo  <i>Bikarhênerên qeydkirî</i> vekirî ye<br /><br />Lê tu dikarî xwe bê pere qeyd bike. Bo REGISTER-kirin pê <a href="'.getlink('Your_Account&amp;file=register').'"> LI VIR </a> bike, dûra destûrek bêasteng heye.<br />Tu dikarî bêasteng destê xwe bavêje ser modûlên me û bigihîje. Sipas <br /><br />');
define('_MODULEUSERS2','Tû dê şêy xwa register key li <a href="'.getlink('Your_Account&amp;file=register').'">vî</a> linkî, û dê te helît tû vî erdî jî bi bînî. <br /><br />Sipasîya we di kem bû têgeheştina we');
define('_MODULESADMINS','Mixabin, biborînin, ev cîh tenê bo <i>Administratorên me</i> vekirî ye<br /><br />');
define('_MODULESGROUPS','group access required');
define('_HOME','Mal');
define('_HOMEPROBLEM','Problemek pir mezin derketî: Malper nema! Xerab bûye!');
define('_ADDAHOME','Modûl bo Malperê pêve bike');
define('_HOMEPROBLEMUSER','Niha problemek bi ev rûpel heye. Kerem kên, demekî din werin bo serêdankirin.');
define('_MORENEWS','Zêdetir Nûçe');
define('_ALLCATEGORIES','Mijar Giştî');
define('_SPAMGUARDPROTECTED','SpamGuard email a te rawistan ji çûnê');
define('_M_CHARS','Zêdehî: %s herfa');

define('_SYS_MESSAGE','System Message');
define('_SYS_MESSAGES','System Messages');
define('_SYS_MAINTENANCE','You are running under maintenance mode');
define('_SYS_DEMO','You are running under administration demo mode<br />You cannot make any changes to the database<br /><a href="'.adminlink('logout').'">Log me out!</a>');

define('_DATE','Wext');
define('_HOUR','Saet');
define('_UMONTH','Meh');
define('_YEAR','Sal');
define('_JANUARY','Çile');
define('_FEBRUARY','Sebat');
define('_MARCH','Adar');
define('_APRIL','Nîsan');
define('_MAY','Gulan');
define('_JUNE','Hezîran');
define('_JULY','Tîrmeh');
define('_AUGUST','Tebax');
define('_SEPTEMBER','Îlon');
define('_OCTOBER','Cotmeh');
define('_NOVEMBER','Mijdar');
define('_DECEMBER','Kanûn');

define('_MONDAY','Duşemb');
define('_TUESDAY','Sêşemb');
define('_WEDNESDAY','Çarşemb');
define('_THURSDAY','Pênçşemb');
define('_FRIDAY','Înî');
define('_SATURDAY','Şembî');
define('_SUNDAY','Êkşemb');
//three letter abbrev.
define('_ABR_MONDAY','Mon');
define('_ABR_TUESDAY','Tue');
define('_ABR_WEDNESDAY','Wed');
define('_ABR_THURSDAY','Thu');
define('_ABR_FRIDAY','Fri');
define('_ABR_SATURDAY','Sat');
define('_ABR_SUNDAY','Sun');

define('_BWEL','Bixêr hatin');
define('_BPM','Nûçeyên taybet');
define('_BUNREAD','nexwendî');
define('_BREAD','bixwîne');
define('_BMEMP','Bikarhêner');
define('_BLATEST','tezetir');
define('_BTD','îro teze');
define('_BYD','do teze');
define('_BOVER','Giştî');
define('_BVISIT','Bikarhêner online');
define('_BVIS','Serêdan');
define('_BMEM','Bikarhêner');
define('_BTT','Giştî');
define('_BON','Niha online');
define('_BREG','Xwe Register bike');
define('_BROADCAST','Dengûbasên weşandî');
define('_BROADCASTFROM','Dengûbasên weşandî ji');
define('_TURNOFFMSG','Dengûbasên weşandî bikujin');
define('_JOURNAL','Rojname');
define('_READMYJOURNAL','Rojname bixwîne');
define('_ADD','Biservebike');
define('_YES','Erê');
define('_NO','Na');
define('_INVISIBLEMODULES','Modûlên Bêdîtin');
define('_ACTIVEBUTNOTSEE','(aktîv, lê belê,  bi bêdîtina grêdankê)');
define('_BOTS','Bots');

define('_UM','Dragonfly Update Monitor');
define('_UM_F','Failed to contact the update service. Please try again later.');
define('_UM_G','You are using the latest version of Dragonfly');
define('_UM_R','Please <a href="%2$s" target="_blank">upgrade</a> to Dragonfly %1$s');

define('_TEAM','Taxim.');
define('_LINKAPPROVEDMSG','Congratulations! The web link you submitted has been approved, please link back to us.');
define('_MODREQLINKS','daxwaz bo guhertinên grêdankan');
define('_BROKENLINKS','Grêdankên mirî');
define('_MODREQDOWN','daxwaz bo guhertinên dakişandinê');
define('_BROKENDOWN','Dakişandinên mirî');
define('_PAGEGENERATION','Ravakirina Malperê:');
define('_SECONDS','Sanîye');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','This page generated in %1$s seconds with %2$s DB Queries in %3$s seconds');
define('_YOUHAVEONEMSG','Nûçeyek  taybet heye bo TE');
define('_NEWPMSG','Nûçeyên taybet ên teze');
define('_CONTRIBUTEDBY','Weşandin ji');
define('_CHAT','Chat');
define('_REGISTERED','Registered');
define('_CHATGUESTS','Guests');
define('_USERSTALKINGNOW','Users Talking Now');
define('_ENTERTOCHAT','Enter To Chat');
define('_CHATROOMS','Available Rooms');
define('_ALLTOPICS','Mijar Giştî');
define('_ASSOTOPIC','Associated Topics');
define('_HELLO','Roj baş');
define('_ALL','Giştî');
define('_URL','URL');
define('_SUBJECT','Mijar');
define('_PREVIEW','Pêşdîtin');
define('_SEND','Bişîne');
define('_ANONYMOUS','Anonymous');
define('_BREADCRUMB', 'Breadcrumb Delimiter, separates words in pagetitles');
define('_BC_DELIM',''.isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&rsaquo;');//''. is for cpglang
define('_RESET','Reset');
define('_AT','at');
define('_LASTMSGS','Last %s Forum Messages');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','Binivîse ser kaxizê spî');

define('_CREDITS_TITLE','Credits');
define('_CREDITS_PRODUCT','Product');
define('_CREDITS_DESC','Description');
define('_CREDITS_AUTHORS','Author(s)');

define('_PP_TITLE','Privacy Policy');
define('_PP_MODIFY','Modify this message');

define('_SENDEREMAIL','E-maila şandkarê');
define('_SENDERNAME','Navê şandkarê');
define('_RECIPIENTNAME','Recipient Name');
define('_RECIPIENTEMAIL','Recipient Email');

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
define('_TB_CONFIG','Configuration');
define('_TB_EDIT_PREFS','My preferences');
define('_TB_EDIT_HOME','My homepage settings');
define('_TB_EDIT_COMM','My comment settings');
define('_TB_PERSONAL','Personal');
define('_TB_PERSONAL_GALLERY','My gallery');
define('_TB_PERSONAL_JOURNAL','My blog');
define('_TB_PRIVMSGS','Private Messages');
define('_TB_PRIVMSGS_INBOX','Inbox');
define('_TB_PRIVMSGS_OUTBOX','Outbox');
define('_TB_PRIVMSGS_SENTBOX','Sentbox');
define('_TB_PRIVMSGS_SAVEBOX','Savebox');
define('_TB_PRIVMSGS_SEND','Send message');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','User Info');
define('_SECURITYCODE','Security Code');
define('_TYPESECCODE','Type Code');
define('_MEMBERSOPTIONS','Members options');
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
define('_BlogsLANG','Blogs');
define('_ContentLANG','Content');
define('_coppermineLANG','Photo Gallery');
define('_CPGlangLANG','Help Translate');
define('_DownloadsLANG','Downloads');
define('_EncyclopediaLANG','Encyclopedia');
define('_ForumsLANG','Community Forums');
define('_ContactLANG','Contact Us');
define('_FAQLANG','FAQ - Help');
define('_Members_ListLANG','Members List');
define('_NewsLANG','News');
define('_ReviewsLANG','Reviews');
define('_SearchLANG','Search');
define('_StatisticsLANG','Statistics');
define('_Stories_ArchiveLANG','Stories Archive');
define('_Submit_NewsLANG','Submit News');
define('_SurveysLANG','Surveys');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Topics');
define('_Private_MessagesLANG','My Private Messages');
define('_Tell_a_FriendLANG','Tell a Friend');
define('_Web_LinksLANG','Links');
define('_Your_AccountLANG','My Account');
define('_CPG_EventsLANG','Calendar');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Languages!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Groups');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Headlines');

define('_COMMUNICATION','Communication');
define('_FRIENDS','Friends');
define('_STORE','Store');
define('_PRODUCTS','Products');
define('_DONATE','Donate');
define('_HELP','Help');
define('_GALLERIES','Galleries');
define('_DOCS','Documentation');
define('_RULES','Rules & regulations');
define('_MENU','Main Menu');

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
define('_SAVECHANGES','Guhertinan biparêze');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Ziman');
define('_FUNCTIONS','Guhertinan');
define('_SHOW','Bibîne');
define('_TO','Bo kî');
define('_DAY','Roj');
define('_LAST','Dawî');
define('_ACTIVE','Aktîv');
define('_DEACTIVATE','Deaktîv bike');
define('_INACTIVE','Neaktîv');
define('_ACTIVATE','Aktîv bike');
define('_ACTIVATE2','Biaktîvbike?');
define('_VIEW','Dîtin');
define('_VIEWPRIV','Kî dikare bibîne?');
define('_MVADMIN','Tenê Birêvebir');
define('_MVUSERS','Tenê Bikarhênerên Qeydkirî');
define('_MVANON','Tenê Bikarhênerên Anonîm-Neqeydkirî');
define('_MVALL','Giştî Serdan/Ziyaretkar');
define('_IMAGE','Wêne');
define('_GO','Here!');
define('_OPTION','Opsîyon');
define('_CATEGORY','Kategorî');
define('_SUBCATEGORY','Sub-Category');
define('_ID','ID');
define('_EXPIRATION','Kuştin');
define('_DAYS','roj');
define('_WARNING','Hişyarî');
define('_POLLTITLE','Navê Pirsînê');
define('_POLLEACHFIELD','Tu dikari bo pirsîna xwe çend opsîyonan hilbijêre!');
define('_ADDCATEGORY','Kategorîyek nû biservebike');
define('_PAGEBREAK','Eger tu zêdetir dixwazî binivîsî, divêt, tu dikarî zevîyê dirêj bike.');
define('_SIGNATURE','Destnîşan');
define('_DESCRIPTION','Nasîn');
define('_EDITCATEGORY','Kategorîyê biguherîne');
define('_IN','');
define('_DESCRIPTION255','Nasîn: (Zêdetir 255 Nîşan, Tîp)');
define('_MODCATEGORY','Kategorî Biguherîne');
define('_SUBMITTER','Dîtin');
define('_VISIT','Carek lê binêre');
define('_EXTENDEDTEXT','Nivîsara Frehdîtin');
define('_CHECKCATEGORIES','Kategorîyan Nîşanbike');
define('_INCLUDESUBCATEGORIES','(JÊR-Kategorîyan jî)');
define('_CHECKSUBCATEGORIES','JÊR-Kategorîyan Nîşanbike');
define('_VALIDATELINKS','Grêdankan Serbestbike');
define('_FAILED','biserneket!');
define('_BEPATIENT','(tika ye, raweste)');
define('_VALIDATINGCAT','Kategorî ( û jêr-kategorîyan) têne serrastkirin');
define('_VALIDATINGSUBCAT','JÊR-Kategorî tê serbestkirin');
define('_OK','Erê!');
define('_CHECK','Kontrol');
define('_IGNORE','Girîngî pê nede');
define('_HITS','Hît\'s');
define('_FILESIZE', 'File Size');
define("_EZTHEREIS","There are");
define("_EZSUBCAT","sub-categories");
define("_EZATTACHEDTOCAT","under this category");
define("_EZBROKENLINKS","Broken Links");
define("_DELEZLINKCATWARNING","WARNING : Are you sure you want to delete this category ?<br /> You will delete all sub-categories and attached links as well !");

// index.php
define('_DEFHOMEMODULE','Rûpela Ewil');
define('_MODULEINHOME','Modûla Li Ser Malpera Ewil:');
define('_CHANGE','Biguherîne');
define('_WHOSONLINE','Kî heye');
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
define('_AUTOMATEDARTICLES','Nûçeyên Pêşotomatîkirî');
define('_STORYID','Nûçe');
define('_CURRENTPOLL','Dengdana Aktîv');

// admin.php
define('_ADMINISTRATION','Birêvebirin');
define('_NOADMINYET','Hîn hesabek bo birêvebirinê nehatî avakirin, Bo avakirina bikarhênerê sûper dewam bike:');
define('_CREATEUSERDATA','Tu dixwazî dîsa bi bîngehên eynî hesabek bo bikarhênerek normal avabike?');
define('_ADMINLOGIN','Cîhê Birêveberê - Guhertinên Pêşkeftî');
define('_ADMINID','Birêveber');
define('_EMAIL','e-mail');
define('_SUBMIT','Bişîne');
define('_YOUARELOGGEDOUT','Tu derket! Roj baş');
define('_PASSWDNOMATCH','Mixabin,şifreya teze wek a kev nebû. Vegere û teze dîsa carek binivîse.');
define('_LOGIN_REMEMBERME','Remember me?');
define('_ADMINMENU_LOGOUT','Administration Menu Logout');
define('_PASSWORD_MALFORMED','Please include at least one number, one capital letter and one lowercase letter in your password');

// admins.php
define('_AUTHORSADMIN','Birêvebirin Edîtor');
define('_NAME','Nav');
define('_REQUIRED','(têxwastin)');
define('_MODIFYINFO','Zanyarî biguherîne');
define('_DELAUTHOR','Edîtor bikuje');
define('_ADDAUTHOR','Birêveberek teze avabike');
define('_PERMISSIONS','Destûr');
define('_SUPERUSER','Bikarhênerê Taybet');
define('_SUPERWARNING','Hişyarî: Eger ew bikarhênerê Taybet be nîşankirin, ew heq û destûrên birêvebirin bidestdixe!');
define('_ADDAUTHOR2','Edîtor biservebike');
define('_RETYPEPASSWD','Şifreyê dîsa binivîse');
define('_FORCHANGES','(Tenê bo guhertin)');
define('_COMPLETEFIELDS','Gerek tu tev zevîyan tijî bikî');
define('_CREATIONERROR','Çewtek afrandin ji Edîtor');
define('_AUTHORDEL','Edîtor bikuje');
define('_PUBLISHEDSTORIES','Nûçeyên ev birêveber birêkirî:');
define('_SELECTNEWADMIN','Birêveberê nû hilbijêre');
define('_GODNOTDEL','*(Hesabê birêvebirê naye jêbirin)');
define('_MAINACCOUNT','Birêveberê Ewil-Ser');
define('_USERS','Bikarhêner');

// banners.php
define('_BANNERSADMIN','Banner bo Birêveberê');
define('_DELETEBANNER','Delete Banner');
define('_SURETODELBANNER','Are you sure you want to delete this banner?');
define('_EDITBANNER','Edit Banner');

// blocks.php
define('_BLOCKSADMIN','Bloka Birêveber');
define('_CENTER','Navîn');
define('_CENTERUP','Jor-Navîn');
define('_CENTERDOWN','Jêr-Navîn');
define('_BLOCKFILE','(Pela Blokê)');
define('_BLOCKFILE2','PEL');
define('_BLOCKSYSTEM','SÎSTEM');
define('_ADDNEWBLOCK','Blokek nû biservebike');
define('_RSSFILE','RSS/RDF Navnîşana pel');
define('_ONLYHEADLINES','(Tenê bo sernivîsan)');
define('_REFRESHTIME','Wexta Nûkirinê');
define('_CREATEBLOCK','Blokek avabike');
define('_EDITBLOCK','Blok biguherîne');
define('_BLOCK','Blok');
define('_SAVEBLOCK','Blok biparêze');
define('_BLOCKACTIVATION','Blokê aktîvbike');
define('_BLOCKPREVIEW','Pêşdîtina Blokê');
define('_WANT2ACTIVATE','Tu dixwazî ev blok aktîv bike?');
define('_ARESUREDELBLOCK','Tu bi rastî dixwazî ev blok jêbibî?');
define('_BLOCKUP','Blok JOR');
define('_BLOCKDOWN','Blok JÊR');
define('_BLOCKTOP','Move block to top');
define('_BLOCKBOTTOM','Move block to bottom');
define('_TITLE','Sernav');
define('_POSITION','Pozîsyon');
define('_WEIGHT','Mezinahî');
define('_STATUS','Rewş');
define('_LEFTBLOCK','Bloka Çep');
define('_LEFT','Çep');
define('_RIGHTBLOCK','Bloka Rast');
define('_RIGHT','Rast');
define('_TYPE','Tîp');
define('_CUSTOM','WEkî din');
define('_FILENAME','Navê Pelê');
define('_FILEINCLUDE','(Bo biservekirina blokek, bo beşên din çav tê girtin)');
define('_VISIBLEINMODULES', 'Visible in modules');

// comments.php
define('_REMOVECOMMENTS','Nirxandinê jê bibe');
define('_SURETODELCOMMENTS','Tu bi rastî dixwazî nirxandin û bersîvên hilbijartî jê bibî?');

// database.php
define('_SAVEDATABASE','Backup DB - Parastin');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Rewşa Niha');
define('_ACTIVATEPAGE','Vê rûpelê aktîv bike?');

// history.php
define('_EPHEMADMIN','Gotina Rojê Avabike');
define('_ADDEPHEM','Gotinek teze ya rojê binivîse');
define('_EPHEMDESC','Gotina rojê - Nasîn');
define('_EPHEMMAINT','Gotina Rojê (Biguherîne/Jêbibe):');
define('_EPHEMEDIT','Biguherîne');
define('_EPHEMDELETE','Delete Entry');

// headlines.php
define('_RSSFAIL','Di navnîşana RSS de pirsgrêkek heye');
define('_RSSTRYAGAIN','Navnîşana RSS kontrol bike û dîsa carek hewl bide.');
define('_RSSCONTENT','(RSS/RDF Naverok)');
define('_IFRSSWARNING','Tu URL\'ê tijî bikî, dîtin naye xuyakirin!');
define('_SETUPHEADLINES','(A din hilbijêre û têkeve nav navnîşana serok)');
define('_HEADLINESADMIN','Sernivîsarên Birêvebir');
define('_ADDHEADLINE','Sernivîsar biservebike');
define('_EDITHEADLINE','Sernivîsar biguherîne');
define('_SURE2DELHEADLINE','Hîşyarî: Tu bi rastî dixwazî ev sernivîsar jê bibî?');

// messages.php
define('_MESSAGESADMIN','Beşa Birêvebirina Mesajan');
define('_MESSAGETITLE','Sernav');
define('_MESSAGECONTENT','Naverok');
define('_ALLMESSAGES','Mesaj Giştî');
define('_EDITMSG','Mesaj biguherîne');
define('_ADDMSG','Mesaj pêvebike');
define('_REMOVEMSG','Tu bi xwe ewle yî, tu dixwazi vê mesajê jê bibî? ');
define('_CHANGEDATE','Roja destpêkirinê wek îro bike?');
define('_IFYOUACTIVE','(Eger tu vê mesajê niha biaktîvbike, destpêkirina rojê dibe wek îro)');

// modules.php
define('_MODULESADMIN','Birêvebirina Modûlan');
define('_HOMECONFIG','Vebijarkên Serrûpelê');
define('_MODULESADDONS','Modûl û Biservekirin');
define('_INHOME','Mal');
define('_MODULEHOMENOTE','<b>-= Hişyarî =-</b><br />Modûla hişk modûla li ser rûpela ewil rava dike.<br />Eger ev modûl di nav xebitandinê da be, nikare be guhertin/deaktîvkirin!<br />Eger rêzoka modûlê jê bibe, tu çewtek li ser rûpela dayik dibînî.<br />Wekî din, ev modûl li ser blokên modûlan a <i>Mal</i> hatî grêkirin.');
define('_PUTINHOME','Bike ser Malê');
define('_SURETOCHANGEMOD','Tu bi xwe rast dizanî, tu dixwazî sermalperê biguherînî:');
define('_NOTINMENU','[ <big><strong>&middot;</strong></big> ]tê ew maneyê, ko, navê modûlê û lînka bloka modûlê naxuye di cîhê xwe da');
define('_SHOWINMENU','Di Bloka Modûlan da bixuye?');
define('_CUSTOMTITLE','Sernavê Nû');
define('_MODULEEDIT','Modûl Avabike');
define('_VERSION','Versîyon');
define('_UPGRADE','Upgrade to %s');
define('_DBSIZE','DB size');
define('_CVS_EXPLAIN','This module appears to be able to receive updates through our CVS (Concurrent Versioning System). With CVS, you are able to receive the latest updates of a file very easily, but the latest version of a file may contain bugs as it is likely not part of our stable release.<br /><br />If you are familiar with PHP, you can update this module with the latest CVS files by using the link below. <strong>Backup all files first!</strong>');
define('_CVS_UPDATE','Update CVS files');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','Ji kî');
define('_STAFF','Xebatkar');
define('_NL_RECIPS','Recipients');
define('_SUBSCRIBEDUSERS','Bikarhênerê Qeydkirî');
define('_NL_ALLUSERS','All Members');
define('_NL_ADMINS','Administrators');
define('_NL_REGARDS','Best Regards');
define('_DISCARD','Discard');
define('_REVIEWTEXT','Tika ye, carek nivîsara xwe berçavbike:');
define('_MANYUSERSNOTE','Hişyarî! Pir bikahêner bo ev mesaj heye. Tika ye, bîhna xwe fireh bike, şandin hinek wext dikuje. Bidawîanîna şandina mesajan dikare çend deqe bikişîne');
define('_NL_NOUSERS','The group selected to receive this newsletter has zero users<br />Please go back and select a different group');
define('_NUSERWILLRECEIVE','Bikarhêner dê ev rojname bidestbixin.');
define('_NLUNSUBSCRIBE',"We sent you this message because you have selected to receive newsletters from our site\n\nYou can choose to unsubscribe from our mailings at any time by following <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">this</a> link\n\nIf you would like further assistance, please send an email to <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">our administrator</a>");
define('_NEWSLETTERSENT','Rojname hat şandin.');

// referers.php
define('_WHOLINKS','Hevalên ko, grêdank dana ser malpera me:');
define('_DELETEREFERERS','Serlêdanan Paqij Bike');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Footer');
define('_DEBUG', 'Debug');
define('_SITECONFIG','Guhertinên Malperê');
define('_GENSITEINFO','Zanyarîyên Bîngeh ên Malperê');
define('_SITENAME','Navê malper');
define('_SITEURL','Navnîşana Malperê');
define('_SITELOGO','Logoya Malperê');
define('_SITESLOGAN','Sergotina Malperê');
define('_STARTDATE','Destpêkirina wextê malperê');
define('_ADMINEMAIL','E-maila Birêvebir');
define('_ITEMSTOP','Hêjmara rûpelan li ser Malpera Ewil');
define('_STORIESHOME','Hêjmara nûçeyan li ser Malpera Ewil');
define('_OLDSTORIES','Nûçeyên kevn');
define('_ALLOWANONPOST','Bo şandkarên nenas destûr hebe?');
define('_DEFAULTTHEME','Dîtin/Xemlandina Sermalpera we');
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
define('_MULTILINGUALOPT','PIR-ZIMAN BIRÊVEBIRIN');
define('_SELLANGUAGE','Bo malpera xwe zimanek hilbijêrin');
define('_LOCALEFORMAT','Cîhê saeta herêmê');
define('_ACTMULTILINGUAL','Modûlên Pir-Ziman Aktîv Bibe? ');
define('_ACTUSEFLAGS','şûna qutîyên ber bi jêr vedibe, alayên neteweyan ravabike? ');
// banners
define('_BANNERSOPT','Vebijarkên Bannerê');
define('_ACTBANNERS','Banner aktîv bibe?');
// footer
define('_FOOTERMSG','Mesajên jêr');
define('_FOOTERLINE1','Rêza jêr 1');
define('_FOOTERLINE2','Rêza jêr 2');
define('_FOOTERLINE3','Rêza jêr 3');
// backend
define('_BACKENDCONF','Guhertinên bo Backend-ê');
define('_BACKENDTITLE','Sermijara bo Backend-ê');
define('_BACKENDLANG','Zimanê bo Backend-ê');
// mail stories
define('_MAIL2ADMIN','Nûçeyên teze bo birêveber bişînin');
define('_NOTIFYSUBMISSION','Pêşnîyarên teze bi rêya e-mail agahdar bike?');
define('_EMAIL2SENDMSG','Navnîşana ko mesaj diçe');
define('_EMAILSUBJECT','Mijara e-mailê');
define('_EMAILMSG','Mesaja e-mailê');
define('_EMAILFROM','e-mail ji kî ?');
// comments
define('_COMMENTSOPT','Vebijarkên Nirxandinan');
define('_COMMENTSLIMIT','wek byte mezinahîya nirxandinê');
define('_COMMENTSMOD','Nirxandinan biguherîne');
define('_MODADMIN','Guhertin ji Birêvebir');
define('_MODUSERS','Guhertin ji Bikarhêner');
define('_NOMOD','bê guhertin');
// adminmenu
define('_GRAPHICOPT','Guhertinên Grafîkê');
define('_BOTH','Both');
define('_GRAPHICAL','Graphical');
define('_SIDEBLOCK','Side-block');
// miscellaneous
define('_MISCOPT','Vebijarkên din');
define('_ACTIVATEHTTPREF','Serlêdanên HTTP aktîf bike?');
define('_MAXREF','Zêdetir tu çend pêşniyarxwazan dixwazî?');
define('_COMMENTSPOLLS','Li ser pirsînan de nirxandin serbest be?');
define('_COMMENTSARTICLES','Bo nivîsaran nirxandin serbest be ?');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','Guhertinên Sansûrê');
define('_CENSORMODE','Moda Sansûrê');
define('_NOFILTERING','Fîlterkirin Tune');
define('_EXACTMATCH','Giştî Cotbike');
define('_MATCHBEG','Destpêka Peyvan Cotbike');
define('_MATCHANY','Cîhê Nivîsê Cotbike');
define('_CENSORREPLACE','Peyvên Sansûrkirî bi vê biguherîne:');
// email
define('_EMAILOPTIONS','Mail');
define('_ALLOW_HTML_EMAIL','Allow the use of HTML in email');
define('_USE_SMTP','Use SMTP server as opposed to PHP\'s mailer');
define('_SMTP_HOST','SMTP host address (smtp.example.com)');
define('_USE_SMTP_AUTH','Does server require SMTP authorization');
define('_SMTP_USER_NAME','SMTP username');
define('_SMTP_USER_PASS','SMTP password');

// cpg_adminmenu.php
define('_ADMINMENU','BIRÊVEBER MENÛ');
define('_ADMINLOGOUT','Derkeve');
define('_AMENU0','System');
define('_AMENU1','General');
define('_AMENU2','Members');
define('_AMENU3','Messages');
define('_AMENU4','Forums');
define('_AMENU5','Informative');
define('_AMENU6','Linking');
define('_AMENU7','Commerce');
define('_AMENU8','Multimedia');
define('_AMENU9','Modules');
define('_BMENU1','Help');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','Guhertinên Ewil');
define('_DATABASE','Database');
define('_BLOCKS','Blok');
define('_MODULES','Modûl');
define('_EDITADMINS','Xebatên Birêveberê');
define('_MESSAGES','Mesaj');
define('_BANNERS','Banner');
define('_HTTPREFERERS','HTTP Serîlêdan');
define('_EDITUSERS','Bikarhêner');
define('_USERSCONFIG','Members Config');
define('_NEWSLETTER','Rojname');
define('_SUBMISSIONS','Nûçe');
define('_ADDSTORY','Nûçe Binivîse');
define('_TOPICS','Mijar');
define('_ADMPOLLS','Pirsîn & Anket');
define('_EPHEMERIDS','Gotina Rojê');
define('_REVIEWS','Pêşdîtin');
define('_ENCYCLOPEDIA','Ensîklopedî');
define('_SURVEYS','Pirsîn');
define('_SECTIONS','Beş');
define('_ARTICLES','Nûçe');
define('_FAQ','PPP - FAQ');
define('_DOWNLOAD','Dakişandin');
define('_WEBLINKS','Web Grêdank');
define('_CONTENT','Naverok');
define('_SYSINFO','System Info');
define('_REPORTABUG','Report a Bug');
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
define('_ERROR','ERROR');
define('_SEC_ERROR','Security Error');
define('_ERROR_NOT_SET','%s was not set');
define('_ERROR_NO_POST','Posting from another host is disallowed...');
define('_ERROR_NO_GET','GET requests are not allowed for this function...');
define('_ERROR_BAD_CHAR','Ew herfêt te di vîyan bikey %s na çê bin...');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','Te cerband bêhêy ser vî perî bi addressek xirab...');
define('_ERROR_NONE_TO_DISPLAY','There are no %s to display');
define('_ERROR_DELETE_CONF','Bi rastî te di vêt %s jê bibey ?');
define('_ERROR_NO_EXIST','%s nîne');
define('_ERROR_ALREADYEXIST','%s ya hey jî');
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
