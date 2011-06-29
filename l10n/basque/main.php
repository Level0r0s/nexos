<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/basque/main.php,v $
  $Revision: 9.29 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:45 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','eu');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%B %d %A, ordua %T');
define('_DATESTRING2','%B %d, %A');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Hurrengo orria');
define('_PREVIOUSPAGE','Aurreko orria');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Bilatu');
define('_LOGIN','Saioa hasi');
define('_WRITES',' sistema-kideak idatzi zuen');
define('_POSTEDON','Bidalia');
define('_NICKNAME','Ezizena');
define('_PASSWORD','Pasahitza');
define('_WELCOMETO','Ongi etorri');
define('_EDIT','Editatu');
define('_DELETE','Ezabatu');
define('_POSTEDBY','Nork bidalia');
define('_READS','Irakurketa');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Bueltatu</a>' : '<a href="javascript:history.go(-1)">Bueltatu</a>').' ]');
define('_COMMENTS','komentario');
define('_PASTARTICLES','Gaurkotasun gabeko Artikuloak');
define('_OLDERARTICLES','Artikulo zaharrak');
define('_BY','nork');
define('_ON','noiz');
define('_LOGOUT','Irten');
define('_WAITINGCONT','Edukiak itxaroten');
define('_WREVIEWS','Berrikuspenak');
define('_WLINKS','Loturak');
define('_ONEDAY','Gaurko egun berdinean...');
define('_ASREGISTERED','Oraindik ez daukazu kontu bat sisteman? Egin klik <a href="'.getlink("Your_Account").'">hemen</a> eta lortu kontu bat doainik. Erabiltzaile erregistratu bezala, Sistemako atal guztietara sartu ahal izango zara.');
define('_MENUFOR','Menua:');
define('_NOBIGSTORY','Gaur ez dago Historia Berezirik.');
define('_BIGSTORY','Gaur gehien irakurri den historia:');
define('_SURVEY','Inkesta');
define('_POLLS','Bozketak');
define('_PCOMMENTS','Komentarioak:');
define('_RESULTS','Emaitzak');
define('_HREADMORE','Gehiago irakurri . . .');
define('_CURRENTLY','Une honetan');
define('_GUESTS','gonbidatu eta');
define('_MEMBERS','kide konektatuta.');
define('_YOUARELOGGED','Honela konektatuta zaude:');
define('_YOUHAVE','Begiratu zure buzoia. Zenbat mezu:');
define('_PRIVATEMSG','guztira.');
define('_YOUAREANON','Erabiltzaile anonimoa zara. Erregistratu <b><a href="'.getlink("Your_Account&amp;op=new_user").'">hemen</a></b>.');
define('_NOTE','Oharra:');
define('_ADMIN','Administratzailea:');
define('_WERECEIVED','Sistemak jaso izan duen bisita zenbakia:');
define('_PAGESVIEWS','fetxa honetatik hasita:');
define('_TOPIC','Gaia');
define('_UDOWNLOADS','Deskargak');
define('_VOTE','bozkatu');
define('_VOTES','botoak');
define('_MVIEWADMIN','Ikusi: Bakarrik administratzaileak');
define('_MVIEWUSERS','Ikusi: Bakarrik Sistema-kideak');
define('_MVIEWANON','Ikusi: Bakarrik Erabiltzaile anonimoak');
define('_MVIEWALL','Ikusi: Erabiltzaile guztiak');
define('_EXPIRELESSHOUR','Kaduzitatea: ordu bete baino gutxiago');
define('_EXPIREIN','Kadukatzen da:');
define('_UNLIMITED','Inoiz');
define('_HOURS','ordu');
define('_RSSPROBLEM','Arazo bat dago Toki honen Titularrekin');
define('_SELECTLANGUAGE','Hizkuntza aukeratu');
define('_SELECTGUILANG','Menuetarako erabili nahi duzun hizkuntza aukeratu');
define('_NONE','Bat ere ez');
define('_BLOCKPROBLEM','<center>Arazo bat dago bloke honekin');
define('_BLOCKPROBLEM2','<center>Bloke honetan ez dago edukirik.</center>');
define('_MODULENOTACTIVE','Sentitzen dut, modulo hau ez dago aktibatuta!');
define('_NOACTIVEMODULES','Aktibo ez dauden moduloak');
define('_MODULENOEXIST','We\'re sorry, but the requested file, %s, does not appear to exist');
define('_FORADMINTESTS','(Administratzaileek testeatzeko)');
define('_BBFORUMS','Foroak');
define('_ACCESSDENIED','Access Denied');
define('_RESTRICTEDAREA','You are trying to access a restricted area.');
define('_MODULEUSERS','We\'re sorry, but we have reserved this area of our site for <i>registered users</i> only<br /><br />');
define('_MODULEUSERS2','You can register for free by following <a href="'.getlink('Your_Account&amp;file=register').'">this</a> link, thus granting you permission to access this area of our site.<br /><br />Thank you for your understanding');
define('_MODULESADMINS','We\'re sorry, but we have reserved this area of our site for <i>administrators</i> only<br /><br />Thank you for your understanding');
define('_MODULESGROUPS','group access required');
define('_HOME','Home');
define('_HOMEPROBLEM','It appears that the homepage has disappeared');
define('_ADDAHOME','Assign a new default homepage module');
define('_HOMEPROBLEMUSER','We\'re experiencing some difficulties with our system<br />Please check back soon');
define('_MORENEWS','More in News Section');
define('_ALLCATEGORIES','All Categories');
define('_SPAMGUARDPROTECTED','SpamGuard has blocked this email from being sent');
define('_M_CHARS','Maximum: %s characters');

define('_SYS_MESSAGE','System Message');
define('_SYS_MESSAGES','System Messages');
define('_SYS_MAINTENANCE','You are running under maintenance mode');
define('_SYS_DEMO','You are running under administration demo mode<br />You cannot make any changes to the database<br /><a href="'.adminlink('logout').'">Log me out!</a>');

define('_DATE','Data');
define('_HOUR','ordu');
define('_UMONTH','Hilabetea');
define('_YEAR','Urtea');
define('_JANUARY','January');
define('_FEBRUARY','February');
define('_MARCH','March');
define('_APRIL','April');
define('_MAY','May');
define('_JUNE','June');
define('_JULY','July');
define('_AUGUST','August');
define('_SEPTEMBER','September');
define('_OCTOBER','October');
define('_NOVEMBER','November');
define('_DECEMBER','December');

define('_MONDAY','Monday');
define('_TUESDAY','Tuesday');
define('_WEDNESDAY','Wednesday');
define('_THURSDAY','Thursday');
define('_FRIDAY','Friday');
define('_SATURDAY','Saturday');
define('_SUNDAY','Sunday');
//three letter abbrev.
define('_ABR_MONDAY','Mon');
define('_ABR_TUESDAY','Tue');
define('_ABR_WEDNESDAY','Wed');
define('_ABR_THURSDAY','Thu');
define('_ABR_FRIDAY','Fri');
define('_ABR_SATURDAY','Sat');
define('_ABR_SUNDAY','Sun');

define('_BWEL','Welcome');
define('_BPM','Private Messages');
define('_BUNREAD','Unread');
define('_BREAD','Read');
define('_BMEMP','Membership');
define('_BLATEST','Latest');
define('_BTD','New Today');
define('_BYD','New Yesterday');
define('_BOVER','Overall');
define('_BVISIT','People Online');
define('_BVIS','Visitors');
define('_BMEM','Members');
define('_BTT','Total');
define('_BON','Online Now');
define('_BREG','Register');
define('_BROADCAST','Broadcast Public Message');
define('_BROADCASTFROM','Public Message sent by');
define('_TURNOFFMSG','Turn off Public Messages');
define('_JOURNAL','Blog');
define('_READMYJOURNAL','Read My Blog');
define('_ADD','gehitu');
define('_YES','Bai');
define('_NO','Ez');
define('_INVISIBLEMODULES','Invisible Modules');
define('_ACTIVEBUTNOTSEE','(Active but invisible link)');
define('_BOTS','Bots');

define('_UM','Dragonfly Update Service');
define('_UM_F','Failed to contact the update service. Please try again later.');
define('_UM_G','You are using the latest version of Dragonfly');
define('_UM_R','Please <a href="%2$s" target="_blank">upgrade</a> to Dragonfly %1$s');

define('_TEAM','Ekipoa');
define('_LINKAPPROVEDMSG','Congratulations! The web link you submitted has been approved, please link back to us.');
define('_MODREQLINKS','Mod. Links');
define('_BROKENLINKS','Broken Links');
define('_MODREQDOWN','Mod. Downloads');
define('_BROKENDOWN','Broken Downloads');
define('_PAGEGENERATION','Page Generation:');
define('_SECONDS','seconds');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','This page generated in %1$s seconds with %2$s DB Queries in %3$s seconds');
define('_YOUHAVEONEMSG','You have one new private message');
define('_NEWPMSG','New Private Messages');
define('_CONTRIBUTEDBY','Contributed by');
define('_CHAT','Chat');
define('_REGISTERED','Registered');
define('_CHATGUESTS','Guests');
define('_USERSTALKINGNOW','Users Talking Now');
define('_ENTERTOCHAT','Enter To Chat');
define('_CHATROOMS','Available Rooms');
define('_ALLTOPICS','Gai guztiak');
define('_ASSOTOPIC','Associated Topics');
define('_HELLO','Kaixo');
define('_ALL','Guztiak');
define('_URL','URL');
define('_SUBJECT','Gaia');
define('_PREVIEW','Aurrebista');
define('_SEND','Bidali');
define('_ANONYMOUS','Anonymous');
define('_BREADCRUMB', 'Breadcrumb Delimiter, separates words in pagetitles');
define('_BC_DELIM',''.isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&rsaquo;');//''. is for cpglang
define('_RESET','Reset');
define('_AT','at');
define('_LASTMSGS','Last %s Forum Messages');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','Inprimatzeko bertsioa');

define('_CREDITS_TITLE','Credits');
define('_CREDITS_PRODUCT','Product');
define('_CREDITS_DESC','Description');
define('_CREDITS_AUTHORS','Author(s)');

define('_PP_TITLE','Privacy Policy');
define('_PP_MODIFY','Modify this message');

define('_SENDERNAME','Sender Name');
define('_SENDEREMAIL','Sender Email');
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
define('_SAVECHANGES','Aldaketak gorde');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Hizkuntza');
define('_FUNCTIONS','Funtzioak');
define('_SHOW','Ikusi');
define('_TO','Norentzat');
define('_DAY','Eguna');
define('_LAST','Azken');
define('_ACTIVE','Aktiboa');
define('_DEACTIVATE','Desaktibatu');
define('_INACTIVE','Aktibatu gabe');
define('_ACTIVATE','Aktibatu');
define('_ACTIVATE2','Aktibatu?');
define('_VIEW','Ikusteko eran honentzat:');
define('_VIEWPRIV','Nork ikusi dezake hau?');
define('_MVADMIN','Bakarrik administratzaileek');
define('_MVUSERS','Bakarrik erregistratutako sistema-kideek');
define('_MVANON','Bakarrik erabiltzaile anonimoak');
define('_MVALL','Mundu guztiak');
define('_IMAGE','Irudia');
define('_GO','Egin!');
define('_OPTION','Aukera');
define('_CATEGORY','Maila');
define('_SUBCATEGORY','Sub-Category');
define('_ID','ID');
define('_EXPIRATION','Kaduzitatea');
define('_DAYS','egunetan');
define('_WARNING','Kontuz');
define('_POLLTITLE','Inkestaren tituloa');
define('_POLLEACHFIELD','Mesedez idatzi inkestaren aukera bakoitza');
define('_ADDCATEGORY','Kategoria bat gehitu');
define('_PAGEBREAK','Orrialde batetan baino gehiagotan zatitzeko, idatzi <b>&lt;!--pagebreak--&gt;</b> orrialde berri baten mozketa sartzeko');
define('_SIGNATURE','Sinadura');
define('_DESCRIPTION','Azalpena');
define('_EDITCATEGORY','Kategoria editatu');
define('_IN','hemen');
define('_DESCRIPTION255','Azalpena (gehien 255 hizki)');
define('_MODCATEGORY','Kategoria bat aldatu');
define('_SUBMITTER','Usuarioa');
define('_VISIT','Bisita');
define('_EXTENDEDTEXT','Testu gehiago');
define('_CHECKCATEGORIES','Kategoriak baieztatu');
define('_INCLUDESUBCATEGORIES','(Azpi-kategoriak kontutan izan)');
define('_CHECKSUBCATEGORIES','Azpi-kategoriak baieztatu');
define('_VALIDATELINKS','Loturak baieztatu');
define('_FAILED','Hutsegin da!');
define('_BEPATIENT','(mesedez itxaron)');
define('_VALIDATINGCAT','Kategoria eta azpi-kategoria guztiak baieztatzen');
define('_VALIDATINGSUBCAT','Azpi kategori hau baieztatzen,');
define('_OK','Bidali');
define('_CHECK','Egiaztatu');
define('_IGNORE','Ezikusi');
define('_HITS','Hits-ak (irakurrienak)');
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
define('_WHOSONLINE','Nor dago konektatuta?');
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
define('_AUTOMATEDARTICLES','Programatutako notiziak');
define('_STORYID','Notiziaren IDa');
define('_CURRENTPOLL','Uneko inkesta');

// admin.php
define('_ADMINISTRATION','Administration');
define('_NOADMINYET','There are no administrator accounts yet, proceed to create the super user...');
define('_CREATEUSERDATA','Would you like to create a regular user with the same data?');
define('_ADMINLOGIN','Administratzaile Sistemaren Sarrera');
define('_ADMINID','Administratzaile IDa');
define('_EMAIL','Emaila');
define('_SUBMIT','Bidali');
define('_YOUARELOGGEDOUT','Deskonektatuta zaude!');
define('_PASSWDNOMATCH','Sentitzen dut, pasahitz berria ez da berdina, saiatu berriz');
define('_LOGIN_REMEMBERME','Remember me?');
define('_ADMINMENU_LOGOUT','Administration Menu Logout');
define('_PASSWORD_MALFORMED','Please include at least one number, one capital letter and one lowercase letter in your password');

// admins.php
define('_AUTHORSADMIN','Autoreen administrazioa');
define('_NAME','Izena');
define('_REQUIRED','(nahitaezkoa)');
define('_MODIFYINFO','Informazioa aldatu');
define('_DELAUTHOR','Autorea ezabatu');
define('_ADDAUTHOR','Autorea gehitu');
define('_PERMISSIONS','Baimenak');
define('_SUPERUSER','Super-usuarioa');
define('_SUPERWARNING','KONTUZ: Super-usuarioa aukeratzen baduzu, toki guztietara sartzeko aukera izango du');
define('_ADDAUTHOR2','Autorea gehitu');
define('_RETYPEPASSWD','Pasahitza berridatzi');
define('_FORCHANGES','(Bakarrik aldatzen bada)');
define('_COMPLETEFIELDS','Derrigorrezko datu guztiak bete behar dituzu');
define('_CREATIONERROR','Errorea Autorea sortzerakoan');
define('_AUTHORDEL','Autorea ezabatu');
define('_PUBLISHEDSTORIES','Administratzaile honek historiak publikatu ditu');
define('_SELECTNEWADMIN','Administratzaile berri bat aukeratu berriz asignatzeko');
define('_GODNOTDEL','*(GOD kontua ezin da ezabatu)');
define('_MAINACCOUNT','God* Administratzailea');
define('_USERS','Usuarioak');

// banners.php
define('_BANNERSADMIN','Iragarkien administratzailea');
define('_DELETEBANNER','Delete Banner');
define('_SURETODELBANNER','Are you sure you want to delete this banner?');
define('_EDITBANNER','Edit Banner');

// blocks.php
define('_BLOCKSADMIN','Blokeen administrazioa');
define('_CENTER','Center');
define('_CENTERUP','Center Up');
define('_CENTERDOWN','Center Down');
define('_BLOCKFILE','(Blokearen artxiboa)');
define('_BLOCKFILE2','Fitxeroak');
define('_BLOCKSYSTEM','Sistema');
define('_ADDNEWBLOCK','Blokea gehitu');
define('_RSSFILE','Tokiaren RSS/RDF artxiboa');
define('_ONLYHEADLINES','(Titularrentzat bakarrik)');
define('_REFRESHTIME','Birkarga denbora');
define('_CREATEBLOCK','Blokea sortu');
define('_EDITBLOCK','Blokea editatu');
define('_BLOCK','Blokea');
define('_SAVEBLOCK','Blokea gorde');
define('_BLOCKACTIVATION','Blokearen aktibazioa');
define('_BLOCKPREVIEW','Hau blokearen aurrebista bat da');
define('_WANT2ACTIVATE','Bloke hau aktibatu nahi duzu?');
define('_ARESUREDELBLOCK','Ziur zaude bloke hau kendu nahi duzula?');
define('_BLOCKUP','Goruntz');
define('_BLOCKDOWN','Beruntz');
define('_BLOCKTOP','Move block to top');
define('_BLOCKBOTTOM','Move block to bottom');
define('_TITLE','Tituloa');
define('_POSITION','Posizioa');
define('_WEIGHT','Pisua');
define('_STATUS','Egoera');
define('_LEFTBLOCK','Ezkerreko blokea');
define('_LEFT','Ezkerrean');
define('_RIGHTBLOCK','Eskuineko blokea');
define('_RIGHT','Eskuinean');
define('_TYPE','Tipoa');
define('_CUSTOM','Definitu gabe');
define('_FILENAME','Fitxeroaren izena');
define('_FILEINCLUDE','(gehitzeko bloke personalizatu bat aukeratu. Beste eremuak ez dira kontutan izango');
define('_VISIBLEINMODULES', 'Visible in modules');

// comments.php
define('_REMOVECOMMENTS','Komentarioak ezabatu');
define('_SURETODELCOMMENTS','Ziur zaude komentario hau eta dituen erantzun guztiak ezabatu nahi dituzula?');

// database.php
define('_SAVEDATABASE','DB backup-a');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Uneko egoera');
define('_ACTIVATEPAGE','Aktibatu orri hau?');

// history.php
define('_EPHEMADMIN','Efemerideen administrazioa');
define('_ADDEPHEM','Efemeride berri bat gehitu');
define('_EPHEMDESC','Efemeridearen azalpena');
define('_EPHEMMAINT','Efemerideen mantenumendua (editatu/ezabatu):');
define('_EPHEMEDIT','Efemerideak editatu');
define('_EPHEMDELETE','Delete Entry');

// headlines.php
define('_RSSFAIL','URLaren RSS artxiboarekin arazo bat dago');
define('_RSSTRYAGAIN','Errebisatu URLa eta RSS artxiboa eta saiatu berriz.');
define('_RSSCONTENT','(RSS/RDF Edukia)');
define('_IFRSSWARNING','URL bat jartzen baduzu, edukia ez da ikusiko!');
define('_SETUPHEADLINES','(Aukeratu "Definitu gabe" eta idatzi URLa, edo aukeratu toki bat desplegablean bere notizi guztiak agertzeko)');
define('_HEADLINESADMIN','Titularren administrazioa');
define('_ADDHEADLINE','Titularra gehitu');
define('_EDITHEADLINE','Titularra editatu');
define('_SURE2DELHEADLINE','Ziur zaude titular hau ezabatu nahi duzula?');

// messages.php
define('_MESSAGESADMIN','Mezuen administrazioa');
define('_MESSAGETITLE','Tituloa');
define('_MESSAGECONTENT','Edukia');
define('_ALLMESSAGES','Mezuak ezikusi');
define('_EDITMSG','Mezua editatu');
define('_ADDMSG','Mezu bat gehitu');
define('_REMOVEMSG','Ziur zaude mezu hau ezabatu nahi duzula?');
define('_CHANGEDATE','hasiera data gaurko egunera aldatu?');
define('_IFYOUACTIVE','(Mezu hau aktibatzen baduzu, hasiera data gaur izango da)');

// modules.php
define('_MODULESADMIN','Moduloen administrazioa');
define('_HOMECONFIG','Hasierako orriaren konfigurazioa');
define('_MODULESADDONS','Moduloak eta Addon-ak(gehigarriak)');
define('_INHOME','In Home');
define('_MODULEHOMENOTE','<b>-= WARNING =-</b><br />Bold module\'s title represents the module you have in the Homepage.<br />You can\'t Deactivate or Restrict this module while it\'s the default one!<br />If you delete the module\'s directory you\'ll see and error in the Homepage.<br />Also, this module has been replaced with <i>Home</i> link in the modules block.');
define('_PUTINHOME','Put in Home');
define('_SURETOCHANGEMOD','Are you sure you want to change your Homepage from');
define('_NOTINMENU','[ <strong>&middot;</strong> ] denotes a module hidden from view in the Modules block');
define('_SHOWINMENU','Show in Modules block?');
define('_CUSTOMTITLE','Titulu pertsonalizatua');
define('_MODULEEDIT','Moduloak editatu');
define('_VERSION','Bertsioa');
define('_UPGRADE','Upgrade to %s');
define('_DBSIZE','DB size');
define('_CVS_EXPLAIN','Thru CVS you can recieve the latest builds of files very easily.<br /><b>BUT</b> the latest version of a file could have bugs since it is not an official release.<br />If you are familiar with PHP you can do an update of the files by clicking the link below.<br />Don\'t forget to make an backup first !!!');
define('_CVS_UPDATE','Update CVS files');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','Nork bidalita');
define('_STAFF','Txantiloia');
define('_NL_RECIPS','Recipients');
define('_SUBSCRIBEDUSERS','Suskribitatutako sistema-kideek');
define('_NL_ALLUSERS','All Members');
define('_NL_ADMINS','Administrators');
define('_NL_REGARDS','Best Regards');
define('_DISCARD','Discard');
define('_REVIEWTEXT','Mesedez, irakurri berriz eta testua konprobatu:');
define('_MANYUSERSNOTE','OHARRA! Testu hau askori bidali behar zaio. Mesedez, itxaron script-ak bere lana bukatu arte. . . Minutu batzuk iraun ditzake.');
define('_NL_NOUSERS','The group selected to receive this newsletter has zero users<br />Please go back and select a different group');
define('_NUSERWILLRECEIVE','sistema-kideek jasoko dute notizi buletin hau.');
define('_NLUNSUBSCRIBE',"We sent you this message because you have selected to receive newsletters from our site\n\nYou can choose to unsubscribe from our mailings at any time by following <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">this</a> link\n\nIf you would like further assistance, please send an email to <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">our administrator</a>");
define('_NEWSLETTERSENT','Notizi buletina bidalita dago.');

// referers.php
define('_WHOLINKS','Nor dauka loturarik gure Sistemara?');
define('_DELETEREFERERS','Datuak borratu');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Footer');
define('_DEBUG', 'Debug');
define('_SITECONFIG','Web Tokiaren konfigurazioa');
define('_GENSITEINFO','Tokiaren informazio orokorra');
define('_SITENAME','Sistemaren izena');
define('_SITEURL','Tokiaren URLa');
define('_SITELOGO','Tokiaren logotipoa');
define('_SITESLOGAN','Tokiaren leloa');
define('_STARTDATE','Tokiaren hasiera data');
define('_ADMINEMAIL','Administratzailearen emaila');
define('_ITEMSTOP','Top orrian agertuko diren artikulo zenbakia');
define('_STORIESHOME','Hasierako orrian agertuko diren notizi zenbakia');
define('_OLDSTORIES','Notizi zaharren kutxan dauden notiziak');
define('_ALLOWANONPOST','Bidalketa anonimoak onartu');
define('_DEFAULTTHEME','Tokiaren estilo lehenetsia');
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
define('_MULTILINGUALOPT','Hizkuntza-anitz aukerak');
define('_SELLANGUAGE','Aukeratu sistemaren hizkuntza');
define('_LOCALEFORMAT','Ordua/data formatoa');
define('_ACTMULTILINGUAL','Hizkuntza-anitz aukerak aktibatu?');
define('_ACTUSEFLAGS','Zerrenda desplegable bat beharrean? banderak erakutsi?');
// banners
define('_BANNERSOPT','Iragarkien aukerak');
define('_ACTBANNERS','Iragarkiak aktibatu?');
// footer
define('_FOOTERMSG','Orrialde oinean agertuko den mezua');
define('_FOOTERLINE1','Orriaren 1go oina');
define('_FOOTERLINE2','Orriaren 2. oina');
define('_FOOTERLINE3','Orriaren 3. oina');
// backend
define('_BACKENDCONF','Backend-aren konfigurazioa');
define('_BACKENDTITLE','Backend-aren tituloa');
define('_BACKENDLANG','Backend-aren hizkuntza');
// mail stories
define('_MAIL2ADMIN','Administratzaileari notizi berriak bidali');
define('_NOTIFYSUBMISSION','Bidalketa berriak daudenean emailez abisatu?');
define('_EMAIL2SENDMSG','Mezua bidaltzeko emaila');
define('_EMAILSUBJECT','Emailaren gaia');
define('_EMAILMSG','Emailaren testua');
define('_EMAILFROM','Nork bidalia (emaila)');
// comments
define('_COMMENTSOPT','Komentarioen aukera');
define('_COMMENTSLIMIT','Komentarioek izango duten gehiengo tamaina byte-etan');
define('_COMMENTSMOD','Komentarioen moderazioa');
define('_MODADMIN','Administratzaileak moderatuta');
define('_MODUSERS','Sistema-kideek moderatuta');
define('_NOMOD','Moderaziorik gabe');
// adminmenu
define('_GRAPHICOPT','Aukera grafikoak');
define('_BOTH','Both');
define('_GRAPHICAL','Graphical');
define('_SIDEBLOCK','Side-block');
// miscellaneous
define('_MISCOPT','Aukera anizkoitzak');
define('_ACTIVATEHTTPREF','Orrialdeen erreferentzia gordetzea aktibatu');
define('_MAXREF','Zenbat erreferentzia nahi dituzu gehienez?');
define('_COMMENTSPOLLS','Inkestetan komentarioak aktibatu?');
define('_COMMENTSARTICLES','Artikuloetan komentarioak aktibatu?');
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
define('_ALLOW_HTML_EMAIL','Allow the use of HTML in email');
define('_USE_SMTP','Use SMTP server as opposed to PHP\'s mailer');
define('_SMTP_HOST','SMTP host address (smtp.example.com)');
define('_USE_SMTP_AUTH','Does server require SMTP authorization');
define('_SMTP_USER_NAME','SMTP username');
define('_SMTP_USER_PASS','SMTP password');

// cpg_adminmenu.php
define('_ADMINMENU','Administratzaile menua');
define('_ADMINLOGOUT','Deskonektatu/Irten');
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
define('_PREFERENCES','Preferentziak');
define('_DATABASE','Database');
define('_BLOCKS','Blokeak');
define('_MODULES','Moduloak');
define('_EDITADMINS','Adminak editatu');
define('_MESSAGES','Mezuak');
define('_BANNERS','Banners');
define('_HTTPREFERERS','HTTP erreferentziak');
define('_EDITUSERS','Usuarioak');
define('_USERSCONFIG','Members Config');
define('_NEWSLETTER','Notizi buletina');
define('_SUBMISSIONS','Notizi bidalketak');
define('_ADDSTORY','Notizi berria');
define('_TOPICS','Gaiak');
define('_ADMPOLLS','Inkestak/Bozketak');
define('_EPHEMERIDS','Efemerideak');
define('_REVIEWS','Berrikuspenak');
define('_ENCYCLOPEDIA','Entziklopedia');
define('_SURVEYS','Inkestak');
define('_SECTIONS','Atal bereziak');
define('_ARTICLES','Artikuloak');
define('_FAQ','FAQ-ak');
define('_DOWNLOAD','Deskargak');
define('_WEBLINKS','Web Loturak');
define('_CONTENT','Edukia');
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
