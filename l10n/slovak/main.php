<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/slovak/main.php,v $
  $Revision: 9.30 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:55 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','sk');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %d.%m.%Y %H:%M ');
define('_DATESTRING2','%A, %d. %B');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Ďalia strana');
define('_PREVIOUSPAGE','Predchádzajúca strana');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Vyhžadať');
define('_LOGIN','Prihlásenie');
define('_WRITES','napísal:');
define('_POSTEDON','Odoslané dňa:');
define('_NICKNAME','Uívatežské meno');
define('_PASSWORD','Heslo');
define('_WELCOMETO','Vitajte na');
define('_EDIT','Upravi');
define('_DELETE','Vymaza');
define('_POSTEDBY','Poslal:');
define('_READS','krát čítané');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Spä</a>' : '<a href="javascript:history.go(-1)">Spä</a>').' ]');
define('_COMMENTS','Komentáre');
define('_PASTARTICLES','Predchádzajúce články');
define('_OLDERARTICLES','Starie články');
define('_BY','kým:');
define('_ON','v');
define('_LOGOUT','Odhlási sa');
define('_WAITINGCONT','Na overenie čaká');
define('_WREVIEWS','Recenzie');
define('_WLINKS','Odkazy');
define('_ONEDAY','Deň ako kadý iný...');
define('_ASREGISTERED','Ete nemáte konto? Môete si ho <a href="'.getlink('Your_Account').'">vytvori</a>. Registrovaný uívatež má niektoré výhody, napr. manaér tém, nastavenie komentárov a posielanie komentárov s vlastným menom.');
define('_MENUFOR','Menu pre');
define('_NOBIGSTORY','Dnes tu ete nie je iadny vežký článok.');
define('_BIGSTORY','Najčítanejí článok dnes je:');
define('_SURVEY','Anketa');
define('_POLLS','Ankety');
define('_PCOMMENTS','Komentáre:');
define('_RESULTS','Výsledky');
define('_HREADMORE','Číta ďalej...');
define('_CURRENTLY','Momentálne je online');
define('_GUESTS','hostí a');
define('_MEMBERS','členov.');
define('_YOUARELOGGED','Ste prihlásený/á ako');
define('_YOUHAVE','Máte');
define('_PRIVATEMSG','súkromných správ.');
define('_YOUAREANON','Ste anonymný uívatež. Zaregistrova sa môete <a href="'.getlink('Your_Account&amp;file=register').'">tu</a>');
define('_NOTE','Poznámka:');
define('_ADMIN','Admin:');
define('_WERECEIVED','Zaznamenali sme');
define('_PAGESVIEWS','strán zobrazených od');
define('_TOPIC','Téma');
define('_UDOWNLOADS','stiahnutí');
define('_VOTE','hlasova');
define('_VOTES','hlasov');
define('_MVIEWADMIN','Zobrazi: len administrátori');
define('_MVIEWUSERS','Zobrazi: len registrovaní uívatežia');
define('_MVIEWANON','Zobrazi: len anonymní uívatežia');
define('_MVIEWALL','Zobrazi: vetci návtevníci');
define('_EXPIRELESSHOUR','Expirácia: menej ako 1 hodina');
define('_EXPIREIN','Expirácia v');
define('_UNLIMITED','Neobmedzené');
define('_HOURS','hodiny');
define('_RSSPROBLEM','Momentálne je problém s titulkami z tejto stránky');
define('_SELECTLANGUAGE','Vyberte si jazyk:');
define('_SELECTGUILANG','Vyberte jazyk rozhrania:');
define('_NONE','Nič');
define('_BLOCKPROBLEM','<center>Vyskytol sa problém s týmto blokom.</center>');
define('_BLOCKPROBLEM2','<center>Tento blok zatiaž nič neobsahuje.</center>');
define('_MODULENOTACTIVE','Tento modul nie je aktivovaný!');
define('_NOACTIVEMODULES','Neaktivované moduly');
define('_MODULENOEXIST','We\'re sorry, but the requested file, %s, does not appear to exist');
define('_FORADMINTESTS','pre admin. testy');
define('_BBFORUMS','Fóra');
define('_ACCESSDENIED','Access Denied');
define('_RESTRICTEDAREA','You are trying to access to a restricted area.');
define('_MODULEUSERS','We are Sorry but this section of our site is for <i>Registered Users Only</i><br /><br />You can register for free by clicking <a href="'.getlink('Your_Account&amp;file=register').'">here</a>, then you can<br />access to this section without restrictions. Thanks.<br /><br />');
define('_MODULEUSERS2','You can register for free by following <a href="'.getlink('Your_Account&amp;file=register').'">this</a> link, thus granting you permission to access this area of our site<br /><br />Thank you for your understanding');
define('_MODULESADMINS','We are Sorry but this section of our site is for <i>Administrators Only</i><br /><br />');
define('_MODULESGROUPS','group access required');
define('_HOME','Úvodná stránka');
define('_HOMEPROBLEM','Vyskytol obrovský problém: nemáme iadnu domácu stránku!!!');
define('_ADDAHOME','Prida modul na Vau domácu stránku');
define('_HOMEPROBLEMUSER','Vyskytol sa problém s domácou stránkou. Prosím skúste neskôr.');
define('_MORENEWS','Viac v sekcii článkov');
define('_ALLCATEGORIES','Vetky kategórie');
define('_SPAMGUARDPROTECTED','SpamGuard has blocked this email from being sent');
define('_M_CHARS','Maximum: %s characters');

define('_SYS_MESSAGE','System Message');
define('_SYS_MESSAGES','System Messages');
define('_SYS_MAINTENANCE','You are running under maintenance mode');
define('_SYS_DEMO','You are running under administration demo mode<br />You cannot make any changes to the database<br /><a href="'.adminlink('logout').'">Log me out!</a>');

define('_DATE','Dátum');
define('_HOUR','hodina');
define('_UMONTH','Mesiac');
define('_YEAR','Rok');
define('_JANUARY','Január');
define('_FEBRUARY','Február');
define('_MARCH','Marec');
define('_APRIL','Apríl');
define('_MAY','Máj');
define('_JUNE','Jún');
define('_JULY','Júl');
define('_AUGUST','August');
define('_SEPTEMBER','September');
define('_OCTOBER','Október');
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

define('_BWEL','Vítajte');
define('_BPM','Privátne správy');
define('_BUNREAD','Nečítané');
define('_BREAD','Čítané');
define('_BMEMP','Členstvo');
define('_BLATEST','Najnovie');
define('_BTD','Nové dnes');
define('_BYD','Nové včera');
define('_BOVER','Celkove');
define('_BVISIT','žudí online');
define('_BVIS','Návtevníkov');
define('_BMEM','Členov');
define('_BTT','Spolu');
define('_BON','teraz online');
define('_BREG','Registrova');
define('_BROADCAST','Rozposla hromadnú správu');
define('_BROADCASTFROM','Hromadná správa od uívateža');
define('_TURNOFFMSG','Vypnú hromadné správy');
define('_JOURNAL','Denník');
define('_READMYJOURNAL','Číta vlastný denníček');
define('_ADD','Prida');
define('_YES','Áno');
define('_NO','Nie');
define('_INVISIBLEMODULES','Nezobrazené moduly');
define('_ACTIVEBUTNOTSEE','(aktívne, ale s nezobrazeným linkom');
define('_BOTS','Bots');

define('_UM','Dragonfly Update Service');
define('_UM_F','Failed to contact the update service. Please try again later.');
define('_UM_G','You are using the latest version of Dragonfly');
define('_UM_R','Please <a href="%2$s" target="_blank">upgrade</a> to Dragonfly %1$s');

define('_TEAM','tím.');
define('_LINKAPPROVEDMSG','Congratulations! The web link you submitted has been approved, please link back to us.');
define('_MODREQLINKS','Mod.Linky');
define('_BROKENLINKS','Nefunkčné linky');
define('_MODREQDOWN','Mod.Downloady');
define('_BROKENDOWN','Nefunkčné downloady');
define('_PAGEGENERATION','Generovanie stránky');
define('_SECONDS','sekund');
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
define('_ALLTOPICS','Vetky témy');
define('_ASSOTOPIC','Associated Topics');
define('_HELLO','Ahoj,');
define('_ALL','Vetko');
define('_URL','URL');
define('_SUBJECT','Predmet');
define('_PREVIEW','Prezrie');
define('_SEND','Posla');
define('_ANONYMOUS','Anonymous');
define('_BREADCRUMB', 'Breadcrumb Delimiter, separates words in pagetitles');
define('_BC_DELIM',''.isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&rsaquo;');//''. is for cpglang
define('_RESET','Reset');
define('_AT','at');
define('_LASTMSGS','Last %s Forum Messages');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','Stránka vhodná na tlač');

define('_CREDITS_TITLE','Credits');
define('_CREDITS_PRODUCT','Product');
define('_CREDITS_DESC','Description');
define('_CREDITS_AUTHORS','Author(s)');

define('_PP_TITLE','Privacy Policy');
define('_PP_MODIFY','Modify this message');

define('_SENDEREMAIL','Email odosielatela');
define('_SENDERNAME','Meno odosielatela');
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
define('_SAVECHANGES','Uloi zmeny');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Jazyk');
define('_FUNCTIONS','Funkcie');
define('_SHOW','Ukáza');
define('_TO','pre');
define('_DAY','Deň');
define('_LAST','Posledných');
define('_ACTIVE','Aktívny');
define('_DEACTIVATE','Deaktivova');
define('_INACTIVE','Neaktívny');
define('_ACTIVATE','Aktivova');
define('_ACTIVATE2','Aktivova?');
define('_VIEW','Viditežné pre');
define('_VIEWPRIV','Kto môe vidie túto správu?');
define('_MVADMIN','Len administrátori');
define('_MVUSERS','Len registrovaní uívatelia');
define('_MVANON','Len anonymní uívatelia');
define('_MVALL','Kadý');
define('_IMAGE','Obrázok');
define('_GO','OK');
define('_OPTION','Nastavenie');
define('_CATEGORY','Kategória');
define('_SUBCATEGORY','Sub-Category');
define('_ID','ID');
define('_EXPIRATION','Expirácia');
define('_DAYS','dní');
define('_WARNING','Pozor');
define('_POLLTITLE','Názov ankety');
define('_POLLEACHFIELD','Do políčok zadajte kadú monú odpoveď.');
define('_ADDCATEGORY','Prida novú kategóriu');
define('_PAGEBREAK','Ak chcete písa viac strán, môete napísa <b>&lt;!--pagebreak--&gt;</b> tam, kde chcete text zalomi.');
define('_SIGNATURE','Podpis');
define('_DESCRIPTION','Popis');
define('_EDITCATEGORY','Upravi kategóriu');
define('_IN','v');
define('_DESCRIPTION255','Popis: (max. 255 znakov)');
define('_MODCATEGORY','Upravi kategóriu');
define('_SUBMITTER','Poslal');
define('_VISIT','Návtívi');
define('_EXTENDEDTEXT','Rozírený text');
define('_CHECKCATEGORIES','Vybra kategórie');
define('_INCLUDESUBCATEGORIES','(vrátane podkategórií)');
define('_CHECKSUBCATEGORIES','Vybra podkategórie');
define('_VALIDATELINKS','Overené odkazy');
define('_FAILED','Zlyhalo!');
define('_BEPATIENT','(prosím buďte trpezlivý)');
define('_VALIDATINGCAT','Overovanie kategórie (a vetkých podkategórií)');
define('_VALIDATINGSUBCAT','Overovanie podkategórie');
define('_OK','Ok!');
define('_CHECK','Skontrolova');
define('_IGNORE','Ignorova');
define('_HITS',' krát čítané');
define('_FILESIZE', 'File Size');
define("_EZTHEREIS","There are");
define("_EZSUBCAT","sub-categories");
define("_EZATTACHEDTOCAT","under this category");
define("_EZBROKENLINKS","Broken Links");
define("_DELEZLINKCATWARNING","WARNING : Are you sure you want to delete this category ?<br /> You will delete all sub-categories and attached links as well !");

// index.php
define('_DEFHOMEMODULE','Predvolený modul na domácej stránke');
define('_MODULEINHOME','Modul zobrazený na domácej stránke:');
define('_CHANGE','Zmeni');
define('_WHOSONLINE','Kto je tu?');
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
define('_AUTOMATEDARTICLES','Naprogramované články');
define('_STORYID','ID článku');
define('_CURRENTPOLL','Aktuálna anketa');

// admin.php
define('_ADMINISTRATION','Administrácia');
define('_NOADMINYET','Ete neboli vytvorené administrátorské kontá, pokračujte vytvorením konta pre Super uívateža:');
define('_CREATEUSERDATA','Chcete vytvori konto pre normálneho uívateža s rovnakými dátami?');
define('_ADMINLOGIN','Prihlásenie do administračného systému');
define('_ADMINID','Admin ID');
define('_EMAIL','E-mail');
define('_SUBMIT','Posla');
define('_YOUARELOGGEDOUT','Teraz ste odhlásený!');
define('_PASSWDNOMATCH','Nové heslo iaž nebolo nájdené. Vráte sa spä a skús to znova');
define('_LOGIN_REMEMBERME','Remember me?');
define('_ADMINMENU_LOGOUT','Administration Menu Logout');
define('_PASSWORD_MALFORMED','Please include at least one number, one capital letter and one lowercase letter in your password');

// admins.php
define('_AUTHORSADMIN','Administrácia adminov');
define('_NAME','Meno');
define('_REQUIRED','(povinné)');
define('_MODIFYINFO','Zmeni informáciu');
define('_DELAUTHOR','Vymaza administrátora');
define('_ADDAUTHOR','Prida nového administrátora');
define('_PERMISSIONS','Práva');
define('_SUPERUSER','Super User');
define('_SUPERWARNING','UPOZORNENIE: Ak je označené Super User, uívatež dostane plný prístup!');
define('_ADDAUTHOR2',' Prida autora');
define('_RETYPEPASSWD','Zopakujte heslo');
define('_FORCHANGES','(iba pre zmeny)');
define('_COMPLETEFIELDS','Vyplňte vetky povinné polia.');
define('_CREATIONERROR','Chyba pri vytváraní admina');
define('_AUTHORDEL','Vymaza autora');
define('_PUBLISHEDSTORIES','Tento administrátor publikoval články');
define('_SELECTNEWADMIN','Prosím zvožte nového administrátora pre jeho nahradenie');
define('_GODNOTDEL','*(Konto GOD nemôe by zruené)');
define('_MAINACCOUNT','God administrátor*');
define('_USERS','uívatelia');

// banners.php
define('_BANNERSADMIN','Administrácia bannerov');
define('_DELETEBANNER','Delete Banner');
define('_SURETODELBANNER','Are you sure you want to delete this banner?');
define('_EDITBANNER','Edit Banner');

// blocks.php
define('_BLOCKSADMIN','Administrácia blokov');
define('_CENTER','Center');
define('_CENTERUP','Centrova nahor');
define('_CENTERDOWN','Centrova nadol');
define('_BLOCKFILE','(Súbor bloku)');
define('_BLOCKFILE2','Zo súboru');
define('_BLOCKSYSTEM','Systémový');
define('_ADDNEWBLOCK','Prida nový blok');
define('_RSSFILE','URL adresa RSS/RDF súboru');
define('_ONLYHEADLINES','(Len pre titulky)');
define('_REFRESHTIME','Obnovovací čas');
define('_CREATEBLOCK','Vytvori blok');
define('_EDITBLOCK','Upravi blok');
define('_BLOCK','Blok');
define('_SAVEBLOCK','Uloi block');
define('_BLOCKACTIVATION','Aktivácia bloku');
define('_BLOCKPREVIEW','Toto je ukáka bloku');
define('_WANT2ACTIVATE','Chcete aktivova tento blok?');
define('_ARESUREDELBLOCK','Ste si istý, e chcete presunú blok?');
define('_BLOCKUP','Blok HORE');
define('_BLOCKDOWN','Blok DOLE');
define('_BLOCKTOP','Move block to top');
define('_BLOCKBOTTOM','Move block to bottom');
define('_TITLE','Názov');
define('_POSITION','Pozícia');
define('_WEIGHT','Poradie');
define('_STATUS','Stav');
define('_LEFTBLOCK','žavý blok');
define('_LEFT','Vžavo');
define('_RIGHTBLOCK','Pravý blok');
define('_RIGHT','Vpravo');
define('_TYPE','Typ');
define('_CUSTOM','Vlastné');
define('_FILENAME','Meno súboru');
define('_FILEINCLUDE','(Vyberte súbor pre vlastný blok. Vetky ostatné poloky budú ignorované)');
define('_VISIBLEINMODULES', 'Visible in modules');

// comments.php
define('_REMOVECOMMENTS','Vymaza komentáre');
define('_SURETODELCOMMENTS','Ste si istý, e chcete vymaza vybrané komentáre a vetky odpovede na ne?');

// database.php
define('_SAVEDATABASE','Zálohova DB');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Aktuálny stav');
define('_ACTIVATEPAGE','Aktivova túto stránku?');

// history.php
define('_EPHEMADMIN','Administrácia udalostí');
define('_ADDEPHEM','Prida novú udalos');
define('_EPHEMDESC','Popis udalosti');
define('_EPHEMMAINT','Správa udalosti (Upravi/Vymaza):');
define('_EPHEMEDIT','Upravi udalos');
define('_EPHEMDELETE','Delete Entry');

// headlines.php
define('_RSSFAIL','Vyskytol sa problém s URL adresou RSS súboru');
define('_RSSTRYAGAIN','Prosím skontrolujte URL adresu a meno RSS súboru, potom skúste znova.');
define('_RSSCONTENT','(RSS/RDF obsah)');
define('_IFRSSWARNING','Ak vyplníte URL adresu, obsah toho, čo napíete sa nezobrazí!');
define('_SETUPHEADLINES','(Zvožte Volitelné a napíte URL alebo len vyberte stránku zo zoznamu na stiahnutie titulkov)');
define('_HEADLINESADMIN','Administrácia titulkov');
define('_ADDHEADLINE','Prida titulok');
define('_EDITHEADLINE','Upravi titulky');
define('_SURE2DELHEADLINE','UPOZORNENIE: Ste si istý, e chcete vymaza tento titulok?');

// messages.php
define('_MESSAGESADMIN','Administrácia odkazov');
define('_MESSAGETITLE','Nadpis');
define('_MESSAGECONTENT','Text');
define('_ALLMESSAGES','Prezrie správy');
define('_EDITMSG','Upravi oznam');
define('_ADDMSG','Prida oznam');
define('_REMOVEMSG','Ste si istý, e chcete vymaza túto správu ? ');
define('_CHANGEDATE','Zmeni tartovací dátum na dnes?');
define('_IFYOUACTIVE','(Ak aktivujete tento odkaz, tartovací dátum bude dnes)');

// modules.php
define('_MODULESADMIN','Administrácia modulov');
define('_HOMECONFIG','Konfigurácia úvodnej stránky');
define('_MODULESADDONS','Moduly a Rozírenia');
define('_INHOME','Na domácej stránke');
define('_MODULEHOMENOTE','<b>-= UPOZORNENIE =-</b><br />Tučným zobrazený názov modulu znamená modul, ktorý máte na domácej stránke.<br />Nemôete deaktivova, alebo zmeni retrikcie pre tento modul, pokiaž je nastavený ako predvolený!<br />Ak vymaete adresár modulu, uvidíte chybové hlásenie na domácej stránke.<br />Taktie, v bloku aktívnych modulov bol link na tento modul nahradený linkom<i>Domov</i>.');
define('_PUTINHOME','Zobrazit na domácej stránke');
define('_SURETOCHANGEMOD','Určite chcete zmeni Vau domácu stránku z');
define('_NOTINMENU','[ <big><strong>&middot;</strong></big> ] znamená modul ktorého názov a link nebude zobrazený v bloku Moduly');
define('_SHOWINMENU','Zobrazi v bloku Moduly?');
define('_CUSTOMTITLE','Vlastný Titulok');
define('_MODULEEDIT','Upravi moduly');
define('_VERSION','Verzia');
define('_UPGRADE','Upgrade to %s');
define('_DBSIZE','DB size');
define('_CVS_EXPLAIN','This module appears to be able to receive updates through our CVS (Concurrent Versioning System). With CVS, you are able to receive the latest updates of a file very easily, but the latest version of a file may contain bugs as it is likely not part of our stable release.<br /><br />If you are familiar with PHP, you can update this module with the latest CVS files by using the link below. <strong>Backup all files first!</strong>');
define('_CVS_UPDATE','Update CVS files');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','Od');
define('_STAFF','tím');
define('_NL_RECIPS','Recipients');
define('_SUBSCRIBEDUSERS','Prihlásení uívatelia');
define('_NL_ALLUSERS','All Members');
define('_NL_ADMINS','Administrators');
define('_NL_REGARDS','Best Regards');
define('_DISCARD','Discard');
define('_REVIEWTEXT','Prosím, skontrolujte text');
define('_MANYUSERSNOTE','UPOZORNENIE: Veža uívatežov obdrí tento text. Prosím, počkajte kým skript nedokončí celú operáciu. Môe to trva aj niekožko minút.');
define('_NL_NOUSERS','The group selected to receive this newsletter has zero users<br />Please go back and select a different group');
define('_NUSERWILLRECEIVE','Uívatelia obdria tento Newsletter');
define('_NLUNSUBSCRIBE',"We sent you this message because you have selected to receive newsletters from our site\n\nYou can choose to unsubscribe from our mailings at any time by following <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">this</a> link\n\nIf you would like further assistance, please send an email to <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">our administrator</a>");
define('_NEWSLETTERSENT','Newsletter bol poslaný.');

// referers.php
define('_WHOLINKS','Odkial prili na nau stránku?');
define('_DELETEREFERERS','Zrui odvolávku');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Footer');
define('_DEBUG', 'Debug');
define('_SITECONFIG','Konfigurácia webu');
define('_GENSITEINFO','Základné informácie');
define('_SITENAME','Názov webstránky');
define('_SITEURL','URL stránky');
define('_SITELOGO','Logo stránky');
define('_SITESLOGAN','Slogan stránky');
define('_STARTDATE','tartovací dátum stránky');
define('_ADMINEMAIL','Administrátorov e-mail');
define('_ITEMSTOP','Počet poloiek na TOP stránke');
define('_STORIESHOME','Počet článkov na úvodnej stránke');
define('_OLDSTORIES','Počet článkov v boxe starie');
define('_ALLOWANONPOST','Povoli posielanie článkov anonymom?');
define('_DEFAULTTHEME','Predvolený vzhžad webu');
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
define('_MULTILINGUALOPT','Viacjazyčné vožby');
define('_SELLANGUAGE','Východzí jazyk svojej stránky');
define('_LOCALEFORMAT','Formát lokálneho času');
define('_ACTMULTILINGUAL','Aktivova podporu viacerých jazykov? ');
define('_ACTUSEFLAGS','Zobrazi vlajky namiesto dropdown menu? ');
// banners
define('_BANNERSOPT','Reklamné bannery');
define('_ACTBANNERS','Aktivova reklamné bannery na web stránkach?');
// footer
define('_FOOTERMSG','Text päte stránky');
define('_FOOTERLINE1','1. Riadok päty');
define('_FOOTERLINE2','2. Riadok päty');
define('_FOOTERLINE3','3. Riadok päty');
// backend
define('_BACKENDCONF','Konfigurácia backend');
define('_BACKENDTITLE','Názov Backend');
define('_BACKENDLANG','Jazyk Backend');
// mail stories
define('_MAIL2ADMIN','Posla nový článok administrátorovi');
define('_NOTIFYSUBMISSION','Oznámi nový článok e-mailom?');
define('_EMAIL2SENDMSG','E-mail pre poslanie odkazu');
define('_EMAILSUBJECT','Predmet e-mailu');
define('_EMAILMSG','Obsah e-mailu');
define('_EMAILFROM','E-mailové konto (From)');
// comments
define('_COMMENTSOPT','Vlastnosti komentárov');
define('_COMMENTSLIMIT','Limit komentárov v bytoch');
define('_COMMENTSMOD','Moderovanie komentárov');
define('_MODADMIN','Moderovanie administrátorom');
define('_MODUSERS','Moderovanie uívatežom');
define('_NOMOD','iadne moderovanie');
// adminmenu
define('_GRAPHICOPT','Vlastnosti grafiky');
define('_BOTH','Both');
define('_GRAPHICAL','Graphical');
define('_SIDEBLOCK','Side-block');
// miscellaneous
define('_MISCOPT','Rôzne vlastnosti');
define('_ACTIVATEHTTPREF','Aktivova Odkiaž prili?');
define('_MAXREF','Kožko záznamov v sekcii odkiaž prili?');
define('_COMMENTSPOLLS','Aktivova komentáre v ankete?');
define('_COMMENTSARTICLES','Aktivova komentáre k článkom?');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','Nastavenia cenzúry');
define('_CENSORMODE','Spôsob cenzúry');
define('_NOFILTERING','Nefiltrova');
define('_EXACTMATCH','Hžada presné znenie');
define('_MATCHBEG','Hžada výraz na začiatku');
define('_MATCHANY','Hžada výraz kdekožvek v texte');
define('_CENSORREPLACE','Nahradi cenzúrované slová textom:');
// email
define('_EMAILOPTIONS','Mail');
define('_ALLOW_HTML_EMAIL','Allow the use of HTML in email');
define('_USE_SMTP','Use SMTP server as opposed to PHP\'s mailer');
define('_SMTP_HOST','SMTP host address (smtp.example.com)');
define('_USE_SMTP_AUTH','Does server require SMTP authorization');
define('_SMTP_USER_NAME','SMTP username');
define('_SMTP_USER_PASS','SMTP password');

// cpg_adminmenu.php
define('_ADMINMENU','Administračné Menu');
define('_ADMINLOGOUT','Odhlásenie');
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
define('_PREFERENCES','Nastavenie');
define('_DATABASE','Database');
define('_BLOCKS','Bloky');
define('_MODULES','Moduly');
define('_EDITADMINS','Upravi administrátorov');
define('_MESSAGES','Odkazy');
define('_BANNERS','Banery');
define('_HTTPREFERERS','Odkiaž prili');
define('_EDITUSERS','Upravi uívateža');
define('_USERSCONFIG','Members Config');
define('_NEWSLETTER','Newsletter');
define('_SUBMISSIONS','Príspevky');
define('_ADDSTORY','Prida článok');
define('_TOPICS','Témy');
define('_ADMPOLLS','Ankety');
define('_EPHEMERIDS','Udalosti');
define('_REVIEWS','Recenzie');
define('_ENCYCLOPEDIA','Encyklopédia');
define('_SURVEYS','Ankety');
define('_SECTIONS','Záujmové oblasti');
define('_ARTICLES','Články');
define('_FAQ','FAQ');
define('_DOWNLOAD','Download');
define('_WEBLINKS','Webové odkazy');
define('_CONTENT','Obsah');
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
