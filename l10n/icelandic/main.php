<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/icelandic/main.php,v $
  $Revision: 9.29 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:51 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','is');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %d %B %Y (%H:%M:%S)');
define('_DATESTRING2','%A, %B %d');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Næsta síða');
define('_PREVIOUSPAGE','Fyrri síða');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Leita');
define('_LOGIN','Innskráning');
define('_WRITES','skrifar');
define('_POSTEDON','Sent inn');
define('_NICKNAME','Notandanafn');
define('_PASSWORD','Lykilorð');
define('_WELCOMETO','Velkomin(n) á');
define('_EDIT','Breyta');
define('_DELETE','Eyða');
define('_POSTEDBY','Sent inn af');
define('_READS','sinnum lesin');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Til baka</a>' : '<a href="javascript:history.go(-1)">Til baka</a>').' ]');
define('_COMMENTS','athugasemdir');
define('_PASTARTICLES','Fyrri greinar');
define('_OLDERARTICLES','Eldri greinar');
define('_BY','frá');
define('_ON','þann');
define('_LOGOUT','Skrá þig út');
define('_WAITINGCONT','Efni í biðröð');
define('_WREVIEWS','Umsagnir í bið');
define('_WLINKS','Veftenglar í bið');
define('_ONEDAY','Þessi dagur í sögunni...');
define('_ASREGISTERED','Ertu ekki enn með aðgang? Þú getur <a href="'.getlink('Your_Account').'">skráð þig inn</a>. Sem skráður notandi getur þú til dæmis breytt útliti síðunnar og sent inn fréttir og athugasemdir undir þínu nafni.');
define('_MENUFOR','Valmynd fyrir');
define('_NOBIGSTORY','Frétt dagsins er ekki enn búin að sjá dagsins ljós.');
define('_BIGSTORY','Mest lesna fréttin í dag er:');
define('_SURVEY','Könnunin');
define('_POLLS','Kannanir');
define('_PCOMMENTS','Athugasemdir:');
define('_RESULTS','Niðurstöður');
define('_HREADMORE','lesa meira...');
define('_CURRENTLY','Í augnablikinu eru');
define('_GUESTS','gestir og');
define('_MEMBERS','skráðir notendur tengdir.');
define('_YOUARELOGGED','Þú ert skráður inn sem');
define('_YOUHAVE','Þú átt inni');
define('_PRIVATEMSG','skilaboð.');
define('_YOUAREANON','Þú er ekki skráð(ur).  Þú getur skráð þig ókeypis með því að smella <a href="'.getlink('Your_Account').'">hérna</a>');
define('_NOTE','Ath:');
define('_ADMIN','Kerfisstjórn:');
define('_WERECEIVED','Hjá okkur hafa verið skoðaðar');
define('_PAGESVIEWS','síður síðan í');
define('_TOPIC','Efnisflokkur');
define('_UDOWNLOADS','Skráasvæði');
define('_VOTE','Kjósa');
define('_VOTES','Atkvæði');
define('_MVIEWADMIN','Sýn: Aðeins kerfisstjórar');
define('_MVIEWUSERS','Sýn: Aðeins skráðir notendur');
define('_MVIEWANON','Sýn: Aðeins óskráðir notendur');
define('_MVIEWALL','Sýn: Allir gestir');
define('_EXPIRELESSHOUR','Rennur út eftir minna en eina klukkustund');
define('_EXPIREIN','Rennur út eftir');
define('_UNLIMITED','Ótakmarkað');
define('_HOURS','klukkustundir');
define('_RSSPROBLEM','Í augnablikinu virðist vera vandamál við að sækja fyrirsagnir frá þessari síðu');
define('_SELECTLANGUAGE','Veldu tungumál');
define('_SELECTGUILANG','Veldu tungumál síðunnar:');
define('_NONE','Enginn');
define('_BLOCKPROBLEM','<center>Í augnarblikinu virðist vera vandamál með að birta þennan reit.</center>');
define('_BLOCKPROBLEM2','<center>Núna er ekki til efni til þess að sýna í reitnum.</center>');
define('_MODULENOTACTIVE','Þessi kerfishluti er ekki virkur!');
define('_NOACTIVEMODULES','Óvirkir kerfishlutar');
define('_MODULENOEXIST','We\'re sorry, but the requested file, %s, does not appear to exist');
define('_FORADMINTESTS','(til prófunar fyrir kerfisstjóra)');
define('_BBFORUMS','Umræðuhópar');
define('_ACCESSDENIED','Aðgangur er ekki heimill');
define('_RESTRICTEDAREA','Þú ert að reyna að fá aðgang að lokuðu svæði.');
define('_MODULEUSERS','Þessi hluti vefsins er einungis fyrir <i>skráða notendur</i><br /><br />Þú getur skráð þig án endurgjalds með því að smella <a href="'.getlink('Your_Account&amp;file=register').'">hérna</a>, Eftir það getur þú<br />fengið aðgang að þessum hluta vefsins án takmarkana. Takk fyrir.<br /><br />');
define('_MODULEUSERS2','You can register for free by following <a href="'.getlink('Your_Account&amp;file=register').'">this</a> link, thus granting you permission to access this area of our site.<br /><br />Thank you for your understanding');
define('_MODULESADMINS','Þessi hluti vefsins er eingöngu ætlaður <i>kerfisstjórum</i><br /><br />');
define('_MODULESGROUPS','group access required');
define('_HOME','Heim');
define('_HOMEPROBLEM','Stórt vandamál: við höfum enga heimasíðu!!!');
define('_ADDAHOME','Bæta við kerfishluta á heimasíðuna þína');
define('_HOMEPROBLEMUSER','Það eru vandamál með heimasíðuna núna. Vinsamlegast athugið hana síðar.');
define('_MORENEWS','Fleiri fréttir');
define('_ALLCATEGORIES','Allir flokkar');
define('_SPAMGUARDPROTECTED','SpamGuard has blocked this email from being sent');
define('_M_CHARS','Maximum: %s characters');

define('_SYS_MESSAGE','System Message');
define('_SYS_MESSAGES','System Messages');
define('_SYS_MAINTENANCE','You are running under maintenance mode');
define('_SYS_DEMO','You are running under administration demo mode<br />You cannot make any changes to the database<br /><a href="'.adminlink('logout').'">Log me out!</a>');

define('_DATE','Dags');
define('_HOUR','klukkustund');
define('_UMONTH','Mánuður');
define('_YEAR','Ár');
define('_JANUARY','janúar');
define('_FEBRUARY','febrúar');
define('_MARCH','mars');
define('_APRIL','apríl');
define('_MAY','maí');
define('_JUNE','júní');
define('_JULY','júlí');
define('_AUGUST','ágúst');
define('_SEPTEMBER','september');
define('_OCTOBER','október');
define('_NOVEMBER','nóvember');
define('_DECEMBER','desember');

define('_MONDAY','Mánudagur');
define('_TUESDAY','Þriðjudagury');
define('_WEDNESDAY','Miðvikudagur');
define('_THURSDAY','Fimmtudagur');
define('_FRIDAY','Föstudagur');
define('_SATURDAY','Laugardagur');
define('_SUNDAY','Sunnudagur');
//three letter abbrev.
define('_ABR_MONDAY','Mán');
define('_ABR_TUESDAY','Þri');
define('_ABR_WEDNESDAY','Mið');
define('_ABR_THURSDAY','Fim');
define('_ABR_FRIDAY','Fös');
define('_ABR_SATURDAY','Lau');
define('_ABR_SUNDAY','Sun');

define('_BWEL','Velkomin(n)');
define('_BPM','Einkaskilaboð');
define('_BUNREAD','Ólesið');
define('_BREAD','Lesa');
define('_BMEMP','Aðild');
define('_BLATEST','Síðasta');
define('_BTD','Nýtt í dag');
define('_BYD','Nýtt í gær');
define('_BOVER','Heildar');
define('_BVISIT','Tengdir núna');
define('_BVIS','Gestir');
define('_BMEM','Meðlimir');
define('_BTT','Samtals');
define('_BON','Tengdir núna');
define('_BREG','Skrá sig');
define('_BROADCAST','Senda opinber skilaboð');
define('_BROADCASTFROM','Opinber skilaboð frá');
define('_TURNOFFMSG','Slökkva á opinberum skilaboðum');
define('_JOURNAL','Dagbók');
define('_READMYJOURNAL','Lesa dagbókina mína');
define('_ADD','Bæta við');
define('_YES','Já');
define('_NO','Nei');
define('_INVISIBLEMODULES','Ósýnilegir kerfishlutar');
define('_ACTIVEBUTNOTSEE','(Virkir en ósýnilegir tenglar)');
define('_BOTS','Bots');

define('_UM','Dragonfly Update Service');
define('_UM_F','Failed to contact the update service. Please try again later.');
define('_UM_G','You are using the latest version of Dragonfly');
define('_UM_R','Please <a href="%2$s" target="_blank">upgrade</a> to Dragonfly %1$s');

define('_TEAM','liðið.');
define('_LINKAPPROVEDMSG','Til hamingju!  Krækjan sem þú stakkst upp á hefur verið samþykkt.  Gjörðu svo vel og kræktu í okkur og sendu okkur svo tölvupóst með url-inu þar sem krækjan er.');
define('_MODREQLINKS','Breyta tenglum');
define('_BROKENLINKS','Rangir tenglar');
define('_MODREQDOWN','Breyta tilvisunum í skrár');
define('_BROKENDOWN','Rangar tilvísanir í skrár');
define('_PAGEGENERATION','Gerðar síður:');
define('_SECONDS','Sekúndur');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Page Generation in %1$s seconds and %2$s DB Queries in %3$s seconds');
define('_YOUHAVEONEMSG','Þín bíða 1 ný einkaskilaboð');
define('_NEWPMSG','Ný einkaskilaboð');
define('_CONTRIBUTEDBY','Contributed by');
define('_CHAT','Spjall');
define('_REGISTERED','Skráðir');
define('_CHATGUESTS','Gestir');
define('_USERSTALKINGNOW','Users Talking Now');
define('_ENTERTOCHAT','Enter To Chat');
define('_CHATROOMS','Available Rooms');
define('_ALLTOPICS','Allir efnisflokkar');
define('_ASSOTOPIC','Tengd umræðuefni');
define('_HELLO','Sæl(l)');
define('_ALL','Allt');
define('_URL','Slóð');
define('_SUBJECT','Efni');
define('_PREVIEW','Lesa yfir');
define('_SEND','Senda');
define('_ANONYMOUS','Anonymous');
define('_BREADCRUMB', 'Breadcrumb Delimiter, appears in page titles between the words');
define('_BC_DELIM',''.isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&rsaquo;');//''. is for cpglang
define('_RESET','Reset');
define('_AT','at');
define('_LASTMSGS','Last %s Forum Messages');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','Prentvænni síða');

define('_CREDITS_TITLE','Credits');
define('_CREDITS_PRODUCT','Product');
define('_CREDITS_DESC','Description');
define('_CREDITS_AUTHORS','Author(s)');

define('_PP_TITLE','Privacy Policy');
define('_PP_MODIFY','Modify this message');

define('_SENDEREMAIL','Netfang sendanda');
define('_SENDERNAME','Nafn sendanda');
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
define('_ACCOUNTOPTIONS','Stillingar. Breyta uppsetningu og lesa skilaboð.');
define('_LOGOUTACCT','Skrá');
define('_LOGOUTADMINACCT','Log out of admin account.');
define('_BLOGIN','Stillingar');
define('_BFLOGIN','Forum Profile');
define('_BHID','Hidden');
define('_WHOWHERE','Hver er hvar');
define('_STAFFONL','Staff Online');
define('_STAFFNONE','No staff members are online!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Samfélag');
define('_BlogsLANG','Blogs');
define('_ContentLANG','Content');
define('_coppermineLANG','Photo Gallery');
define('_CPGlangLANG','Hjálpaðu við þýðinguna');
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

define('_COMMUNICATION','Samskipti');
define('_FRIENDS','Vinir');
define('_STORE','Verslun');
define('_PRODUCTS','Vörur');
define('_DONATE','Styrkja');
define('_HELP','Hjálp');
define('_GALLERIES','Sýningarsalir');
define('_DOCS','Heimildir');
define('_RULES','Lög & regulr');
define('_MENU','Main Menu');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','Þú <strong>ert</strong> áskrifandi að<br /> fréttabréfinu okkar');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','Þú <strong>ert ekki</strong> áskrifandi að<br /> fréttabréfinu okkar');
define('_NEWSLETTERBLOCKREGISTER','Þú verður að vera<br /><strong>skráður notandi</strong> <br /> til að fá fréttabréfið okkar');
define('_NEWSLETTERBLOCKSUBSCRIBE','Gerast áskrifandi');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Segja upp áskrift');
define('_NEWSLETTERBLOCKREGISTERNOW','Skráðu þig núna!');
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
define('_SAVECHANGES','Vista breytingar');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Tungumál');
define('_FUNCTIONS','Aðgerðir');
define('_SHOW','Sýna');
define('_TO','Til');
define('_DAY','Dagur');
define('_LAST','Síðustu');
define('_ACTIVE','Virkur');
define('_DEACTIVATE','Gera óvirkan');
define('_INACTIVE','Óvirkur');
define('_ACTIVATE','Gera virkan');
define('_ACTIVATE2','Virkja?');
define('_VIEW','Sýnilegt');
define('_VIEWPRIV','Hverjir munu sjá tilkynninguna?');
define('_MVADMIN','Aðeins kerfisstjórar');
define('_MVUSERS','Aðeins skráðir notendur');
define('_MVANON','Aðeins óskráðir notendur');
define('_MVALL','Allir gestir');
define('_IMAGE','Mynd');
define('_GO','Af stað!');
define('_OPTION','Valkostur');
define('_CATEGORY','Flokkur');
define('_SUBCATEGORY','Sub-Category');
define('_ID','Númer');
define('_EXPIRATION','Gildistími');
define('_DAYS','daga');
define('_WARNING','Varúð');
define('_POLLTITLE','Titill skoðanakönnunar');
define('_POLLEACHFIELD','Vinsamlegast setjið hvern svarmöguleika í sér reit');
define('_ADDCATEGORY','Bæta við flokki');
define('_PAGEBREAK','Ef þú vilt hafa margar síður getur skrifað <b>&lt;!--pagebreak--&gt;</b> þar sem þú vilt fá síðuskil.');
define('_SIGNATURE','Undirskrift');
define('_DESCRIPTION','Lýsing');
define('_EDITCATEGORY','Breyta flokki');
define('_IN','í');
define('_DESCRIPTION255','Lýsing: (hámark 255 stafir)');
define('_MODCATEGORY','Breyta flokki');
define('_SUBMITTER','Sendandi');
define('_VISIT','Heimsækja');
define('_EXTENDEDTEXT','Aukatexti');
define('_CHECKCATEGORIES','Fara yfir flokka');
define('_INCLUDESUBCATEGORIES','(líka undirflokka)');
define('_CHECKSUBCATEGORIES','Athugið undirflokka');
define('_VALIDATELINKS','Athuga tengla');
define('_FAILED','Virkar ekki!');
define('_BEPATIENT','(gæti tekið einhvern tíma)');
define('_VALIDATINGCAT','Fer yfir flokkinn (og alla undirflokka)');
define('_VALIDATINGSUBCAT','Fer yfir undirflokk');
define('_OK','Í lagi!');
define('_CHECK','Athuga');
define('_IGNORE','Hunsa');
define('_HITS','Heimsóknir');
define('_FILESIZE', 'File Size');
define("_EZTHEREIS","There are");
define("_EZSUBCAT","sub-categories");
define("_EZATTACHEDTOCAT","under this category");
define("_EZBROKENLINKS","Broken Links");
define("_DELEZLINKCATWARNING","WARNING : Are you sure you want to delete this category ?<br /> You will delete all sub-categories and attached links as well !");

// index.php
define('_DEFHOMEMODULE','Sjálfgefin heimasíðu kerfishluti');
define('_MODULEINHOME','Kerfishluta hlaðið inn á heimasíðuna:');
define('_CHANGE','Breyta');
define('_WHOSONLINE','Hverjir eru tengdir');
define('_NP_ADMIN','Notepad');
define('_NP_LOCKED','The notepad has been locked<br />Only a root administrator (super user) can unlock it');
define('_NP_SAVE','Save Notes');
define('_NP_UNLOCK','Unlock Notepad');
define('_NP_LOCK','Lock Notepad');
// news
define('_STICKY','Sticky Articles');
define('_ARTICLEUP','Grein Upp');
define('_ARTICLEDOWN','Grein Niður');
define('_UNSTICK','Losa');
define('_STICK','Festa');
define('_AUTOMATEDARTICLES','Forritaðar fréttir');
define('_STORYID','Númer fréttar');
define('_CURRENTPOLL','Virk skoðanakönnun');

// admin.php
define('_ADMINISTRATION','Kerfisstjórn');
define('_NOADMINYET','Það hefur engin verið skilgreindur sem kerfisstjóri ennþá, búa til ofurnotanda:');
define('_CREATEUSERDATA','Viltu nota sömu gögn til þess að búa til venjulegan notendaaðgang?');
define('_ADMINLOGIN','Innskráning kerfisstjóra');
define('_ADMINID','Númer kerfisstjóra');
define('_EMAIL','Netfang');
define('_SUBMIT','Senda inn');
define('_YOUARELOGGEDOUT','Þú hefur skráð þig út!');
define('_PASSWDNOMATCH','Því miður, nýju lykilorðin eru ekki eins.  Reyndu aftur');
define('_LOGIN_REMEMBERME','Remember me?');
define('_ADMINMENU_LOGOUT','Administration Menu Logout');
define('_PASSWORD_MALFORMED','Please include at least one number, one capital letter and one lowercase letter in your password');

// admins.php
define('_AUTHORSADMIN','Ritstjóraskilgreiningar');
define('_NAME','Nafn');
define('_REQUIRED','(verður að fylla út)');
define('_MODIFYINFO','Breyta upplýsingum');
define('_DELAUTHOR','Eyða ritstjóra');
define('_ADDAUTHOR','Bæta við nýjum ritstjóra');
define('_PERMISSIONS','Réttindi');
define('_SUPERUSER','Yfirnotandi');
define('_SUPERWARNING','VARÚÐ: Ef ritstjórinn er merktur sem Yfirnotandi þá fær hann fullan aðgang að öllu!');
define('_ADDAUTHOR2','Bæta við ritstjóra');
define('_RETYPEPASSWD','Lykilorðið endurtekið');
define('_FORCHANGES','(Þarf aðeins við breytingar)');
define('_COMPLETEFIELDS','Þú verður að fylla út í alla nauðsynlegu reitina');
define('_CREATIONERROR','Villa við að skilgreina ritstjóra');
define('_AUTHORDEL','Eyða ritstjóra');
define('_PUBLISHEDSTORIES','Þessi ritstjóri hefur sent inn greinar');
define('_SELECTNEWADMIN','Veldu nýjan ritstjóra til að taka við þessum greinum');
define('_GODNOTDEL','*(Það er ekki hægt að eyða yfir-yfirnotandanum)');
define('_MAINACCOUNT','Yfir-yfirnotandi*');
define('_USERS','Notendur');

// banners.php
define('_BANNERSADMIN','Stjórn auglýsinga');
define('_DELETEBANNER','Delete Banner');
define('_SURETODELBANNER','Are you sure you want to delete this banner?');
define('_EDITBANNER','Edit Banner');

// blocks.php
define('_BLOCKSADMIN','Stjórnum kassa');
define('_CENTER','Miðja');
define('_CENTERUP','Miðja upp');
define('_CENTERDOWN','Miðja niður');
define('_BLOCKFILE','(Blokkunarskrá)');
define('_BLOCKFILE2','SKRÁ');
define('_BLOCKSYSTEM','KERFI');
define('_ADDNEWBLOCK','Bæta við nýjum kassa');
define('_RSSFILE','Slóð á RSS/RDF skrá');
define('_ONLYHEADLINES','(Aðeins fyrir fyrirsagnir)');
define('_REFRESHTIME','Vistunartími');
define('_CREATEBLOCK','Búa til kassa');
define('_EDITBLOCK','Breyta kassa');
define('_BLOCK','Kassi');
define('_SAVEBLOCK','Vista kassa');
define('_BLOCKACTIVATION','Virkjun kassa');
define('_BLOCKPREVIEW','Svona mun kassinn líta út');
define('_WANT2ACTIVATE','Viltu virkja þennan kassa?');
define('_ARESUREDELBLOCK','Ertu viss um að þú viljir eyða kassa');
define('_BLOCKUP','Kassi UPP');
define('_BLOCKDOWN','Kassi NIÐUR');
define('_BLOCKTOP','Move block to top');
define('_BLOCKBOTTOM','Move block to bottom');
define('_TITLE','Titill');
define('_POSITION','Staðsetning');
define('_WEIGHT','Vægi/þyngd');
define('_STATUS','Staða');
define('_LEFTBLOCK','Vinstri kassi');
define('_LEFT','Vinstri');
define('_RIGHTBLOCK','Hægri kassi');
define('_RIGHT','Hægri');
define('_TYPE','Tegund');
define('_CUSTOM','Sjálfgefið');
define('_FILENAME','Skráarnafn');
define('_FILEINCLUDE','(Veldu blokk sem á að taka með. Önnur svæði verða ekki tekin með)');

// comments.php
define('_REMOVECOMMENTS','Eyða athugasemdum');
define('_SURETODELCOMMENTS','Ertu viss um að þú viljir eyða þessari athugasemd og öllum svörum við henni?');

// database.php
define('_SAVEDATABASE','Afrita gagnagrunn');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Núverandi staða');
define('_ACTIVATEPAGE','Gera þessa síðu virka?');

// history.php
define('_EPHEMADMIN','Stýring dagbókarbrota');
define('_ADDEPHEM','Bæta við nýju dagbókarbroti');
define('_EPHEMDESC','Texti dagbókarbrots');
define('_EPHEMMAINT','Vinna við dagbókarbrot (Breyta/Eyða):');
define('_EPHEMEDIT','Breyta dagbókarbroti');
define('_EPHEMDELETE','Delete Entry');

// headlines.php
define('_RSSFAIL','Það voru vandræði við RSS slóðina');
define('_RSSTRYAGAIN','Vinsamlegast athugaðu slóðina og RSS skrárnafnið og reyndu svo aftur.');
define('_RSSCONTENT','(RSS/RDF efni)');
define('_IFRSSWARNING','Ef þú fyllir út slóð þá mun efnið sem þú skrifar ekki vera birt!');
define('_SETUPHEADLINES','(Veldu Sjálfgefið og skrifaðu slóðina eða bara veldu svæðið úr listanum til að grípa fréttafyrirsagnirnar.)');
define('_HEADLINESADMIN','Stýring fyrirsagna');
define('_ADDHEADLINE','Bæta við fyrirsögn');
define('_EDITHEADLINE','Breyta fyrirsögnum');
define('_SURE2DELHEADLINE','VARÚÐ: Ertu viss um að þú viljir eyða þessum fyrirsögnum?');

// messages.php
define('_MESSAGESADMIN','Stjórnsíða tilkynninga');
define('_MESSAGETITLE','Titill');
define('_MESSAGECONTENT','Efni');
define('_ALLMESSAGES','Overview messages');
define('_EDITMSG','Breyta skilaboðum');
define('_ADDMSG','Bæta við skilaboðum');
define('_REMOVEMSG','Ertu viss um að þú viljir eyða þessum skilaboðum? ');
define('_CHANGEDATE','Breyta upphafsdegi í daginn í dag?');
define('_IFYOUACTIVE','(Ef þú virkjar þessa tilkynningu núna þá mun upphafsdagurinn vera dagurinn í dag)');

// modules.php
define('_MODULESADMIN','Stjórnun kerfishluta');
define('_HOMECONFIG','Stillingar aðalsíðu');
define('_MODULESADDONS','Kerfishlutar og viðbætur');
define('_INHOME','Heima');
define('_MODULEHOMENOTE','<b>-= AÐVÖRUN =-</b><br />Feitletrað nafn kerfishluta þýðir að sá kerfishluti er á heimasíðunni þinni.<br />Þú getur ekki aftengt eða takmarkað þennan kerfishluta á meðan hann er sá sjálfgefni!<br />Ef þú eyðir skráarmöppu kerfishlutans muntu fá villu á heimasíðunni.<br />Einnig hefur þessi kerfishluti endurskírður <i>Heim</i> í kerfishlutunum.');
define('_PUTINHOME','Setja í heim');
define('_SURETOCHANGEMOD','Ertu viss um að þú viljir breyta heimasíðunni þinni úr');
define('_NOTINMENU','[ <big><strong>&middot;</strong></big> ] þýðir að kerfishluti með nafni og tengli mun ekki verða sjáanlegur í upptalningunni á kerfisihlutunum');
define('_SHOWINMENU','Sýnilegt í lista yfir kerfishluta?');
define('_CUSTOMTITLE','Aðlagaður titill');
define('_MODULEEDIT','Breyta kerfishlutum');
define('_VERSION','Útgáfa');
define('_UPGRADE','Upgrade to %s');
define('_DBSIZE','DB size');
define('_CVS_EXPLAIN','This module appears to be able to receive updates through our CVS (Concurrent Versioning System). With CVS, you are able to receive the latest updates of a file very easily, but the latest version of a file may contain bugs as it is likely not part of our stable release.<br /><br />If you are familiar with PHP, you can update this module with the latest CVS files by using the link below. <strong>Backup all files first!</strong>');
define('_CVS_UPDATE','Update CVS files');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','Frá');
define('_STAFF','Starfsfólk');
define('_NL_RECIPS','Recipients');
define('_SUBSCRIBEDUSERS','Áskrifendur');
define('_NL_ALLUSERS','All Members');
define('_NL_ADMINS','Administrators');
define('_NL_REGARDS','Best Regards');
define('_DISCARD','Discard');
define('_REVIEWTEXT','Vinsamlegast farðu yfir og skoðaðu textann þinn:');
define('_MANYUSERSNOTE','AÐVÖRUN! Það eru margir notendur sem munu fá þennan texta. Vinsamlegast bíðið þangað til forritið klárar aðgerðina. Þetta getur tekið nokkrar mínútur að klárast!');
define('_NL_NOUSERS','The group selected to receive this newsletter has zero users<br />Please go back and select a different group');
define('_NUSERWILLRECEIVE','Notendur munu fá þetta fréttabréf.');
define('_NLUNSUBSCRIBE',"We sent you this message because you have selected to receive newsletters from our site\n\nYou can choose to unsubscribe from our mailings at any time by following <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">this</a> link\n\nIf you would like further assistance, please send an email to <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">our administrator</a>");
define('_NEWSLETTERSENT','Fréttabréfið hefur verið sent.');

// referers.php
define('_WHOLINKS','Hverjir eru að benda á síðuna okkar?');
define('_DELETEREFERERS','Hreinsa tilvísanaskrá');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Footer');
define('_DEBUG', 'Debug');
define('_SITECONFIG','Stillingar vefsíðu');
define('_GENSITEINFO','Almennar upplýsinga um síðuna');
define('_SITENAME','Nafn vefsíðu');
define('_SITEURL','Vefslóð síðunnar');
define('_SITELOGO','Lógó síðunnar');
define('_SITESLOGAN','Slagorð síðunnar');
define('_STARTDATE','Hvenær síðan fór af stað');
define('_ADMINEMAIL','Netfang kerfisstjóra');
define('_ITEMSTOP','Fjöldi atriða á TOPP síðu');
define('_STORIESHOME','Fjöldi frétta á aðalsíðu');
define('_OLDSTORIES','Fjöldi frétta í kassa fyrir eldri fréttir');
define('_ALLOWANONPOST','Leyfa óskráðum að senda inn?');
define('_DEFAULTTHEME','Sjálfgefin þema fyrir síðuna');
define('_SHOWSEC','Show security code');
define('_TOOLTIPS','Show tooltips on designated fields');
define('_UM_TOGGLE','Enable Update Service');
define('_UM_EXPLAIN','This will retrieve two pieces of information from our website, dragonflycms.org: the current build of Dragonfly, and any important messages that pertain to your version of Dragonfly. The only data sent to our site is your Dragonfly version number; we do <strong>not</strong> log these requests to our server.');
// maintenance
define('_MAINTENANCE','Viðhald');
define('_MESSAGE','Skeyti');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','Tungumála valmöguleikar');
define('_SELLANGUAGE','Veldu tungmál fyrir síðuna þína');
define('_LOCALEFORMAT','Snið á birtingu á tíma');
define('_ACTMULTILINGUAL','Virkja möguleika á að hafa mörg tungumál? ');
define('_ACTUSEFLAGS','Sýna fána í stað vallista? ');
// banners
define('_BANNERSOPT','Stillingar auglýsinga');
define('_ACTBANNERS','Virkja auglýsingar á síðunni?');
// footer
define('_FOOTERMSG','Skilaboð í fæti');
define('_FOOTERLINE1','Lína 1');
define('_FOOTERLINE2','Lína 2');
define('_FOOTERLINE3','Lína 3');
// backend
define('_BACKENDCONF','Stillingar bakenda');
define('_BACKENDTITLE','Titill bakenda');
define('_BACKENDLANG','Tungumál bakenda');
// mail stories
define('_MAIL2ADMIN','Senda kerfisstjóra póst með nýjum fréttum');
define('_NOTIFYSUBMISSION','Láta vita vita með tölvupósti?');
define('_EMAIL2SENDMSG','Netfang til að senda skilaboðin á');
define('_EMAILSUBJECT','Fyrirsögn');
define('_EMAILMSG','Innihald tölvupósts');
define('_EMAILFROM','Netfang (sendanda)');
// comments
define('_COMMENTSOPT','Stillingar athugasemda');
define('_COMMENTSLIMIT','Hámarkslengd athugasemda í bætum');
define('_COMMENTSMOD','Ritskoðun athugasemda');
define('_MODADMIN','Ritskoðað af kerfisstjóra');
define('_MODUSERS','Ritskoðað af notendum');
define('_NOMOD','Engin ritskoðun');
// adminmenu
define('_GRAPHICOPT','Stillingar mynda');
define('_BOTH','Both');
define('_GRAPHICAL','Graphical');
define('_SIDEBLOCK','Side-block');
// miscellaneous
define('_MISCOPT','Ýmsar stillingar');
define('_ACTIVATEHTTPREF','Virkja "HTTP Referers"?');
define('_MAXREF','Hversu marga "Referers" viltu mest hafa?');
define('_COMMENTSPOLLS','Virkja athugasemdir í skoðanakönnunum?');
define('_COMMENTSARTICLES','Gera mögulegt að gera athugasemdir við greinar?');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','Valmöguleikar til ritskoðunar');
define('_CENSORMODE','Ritskoðnarhamur');
define('_NOFILTERING','Engin síun');
define('_EXACTMATCH','Nákvæmlega eins');
define('_MATCHBEG','Finna í byrjun á orði');
define('_MATCHANY','Finna einhverstaðar í textanum');
define('_CENSORREPLACE','Í stað ritskoðaðs orðs kemur:');
// email
define('_EMAILOPTIONS','Valkostir fyrir tölvupóst frá Tengiliða kerfishlutanum og Fréttabréfinu');
define('_ALLOW_HTML_EMAIL','Leyfa html í tölvupósti');
define('_USE_SMTP','Nota SMTP í stað php fyrir tölvupóst');
define('_SMTP_HOST','Slóð SMTP hýsils (smtp.example.com)');
define('_USE_SMTP_AUTH','Póstþjónn notar SMTP leyfisveitingu');
define('_SMTP_USER_NAME','SMTP Notandi');
define('_SMTP_USER_PASS','SMTP Lykilorð');

// cpg_adminmenu.php
define('_ADMINMENU','Valmynd kerfisstjóra');
define('_ADMINLOGOUT','Skrá sig út / Hætta');
define('_AMENU0','System');
define('_AMENU1','Almennt');
define('_AMENU2','Meðlimir');
define('_AMENU3','Skeyti');
define('_AMENU4','Spjallþræðir');
define('_AMENU5','Upplýsingar');
define('_AMENU6','Krækjur');
define('_AMENU7','Commerce');
define('_AMENU8','Multimedia');
define('_AMENU9','Kerfishluti');
define('_BMENU1','Help');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','Stillingar');
define('_DATABASE','Database');
define('_BLOCKS','Kassar');
define('_MODULES','Kerfishlutar');
define('_EDITADMINS','Breyta kerfisstjórum');
define('_MESSAGES','Tilkynningar');
define('_BANNERS','Auglýsingar');
define('_HTTPREFERERS','HTTP Tilvísanir');
define('_EDITUSERS','Breyta notendum');
define('_USERSCONFIG','Members Config');
define('_NEWSLETTER','Fréttabréf');
define('_SUBMISSIONS','Fréttir');
define('_ADDSTORY','Bæta við frétt');
define('_TOPICS','Efnisflokkar');
define('_ADMPOLLS','Skoðanakannanir');
define('_EPHEMERIDS','Dagbókarbrot');
define('_REVIEWS','umsagnir');
define('_ENCYCLOPEDIA','Uppsláttarrit');
define('_SURVEYS','Skoðanakannanir');
define('_SECTIONS','Greinasafn');
define('_ARTICLES','greinar');
define('_FAQ','SOS');
define('_DOWNLOAD','Skráasvæði');
define('_WEBLINKS','Veftenglar');
define('_CONTENT','Efni');
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
