<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/czech/main.php,v $
  $Revision: 9.30 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:47 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','cs');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %d. %B %Y @ %T %Z');
define('_DATESTRING2','%A, %d. %B');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Next Page');
define('_PREVIOUSPAGE','Previous Page');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Hledat');
define('_LOGIN','Přihlášení');
define('_WRITES','píše');
define('_POSTEDON','Posted on');
define('_NICKNAME','Přezdívka');
define('_PASSWORD','Heslo');
define('_WELCOMETO','Vítejte na');
define('_EDIT','Upravit');
define('_DELETE','Smazat');
define('_POSTEDBY','Poslal');
define('_READS','čtenářů');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Zpět</a>' : '<a href="javascript:history.go(-1)">Zpět</a>').' ]');
define('_COMMENTS','komentáře');
define('_PASTARTICLES','Minulé články');
define('_OLDERARTICLES','Starší články');
define('_BY','podle');
define('_ON','v');
define('_LOGOUT','Odhlásit');
define('_WAITINGCONT','A tohle čeká');
define('_WREVIEWS','Recenze');
define('_WLINKS','Odkazy');
define('_ONEDAY','Den jako každý jiný ...');
define('_ASREGISTERED','Ještě nemáte svůj účet Zaregistrujte se <a href="\'.getlink("Your_Account").\'">zde</a>.');
define('_MENUFOR','Menu pro');
define('_NOBIGSTORY','Dosud není článek dne.');
define('_BIGSTORY','Nejčtenější článek:');
define('_SURVEY','Anketa');
define('_POLLS','Ankety');
define('_PCOMMENTS','Komentářů');
define('_RESULTS','Výsledky');
define('_HREADMORE','více...');
define('_CURRENTLY','Právě je');
define('_GUESTS','návštěvníků a');
define('_MEMBERS','uživatelů on-line.');
define('_YOUARELOGGED','Jste přihlášen jako');
define('_YOUHAVE','Máte');
define('_PRIVATEMSG','osobních zpráv.');
define('_YOUAREANON','Jste anonymní uživatel. Můžete se zaregistrovat <a href="'.getlink("Your_Account").'">zde</a>');
define('_NOTE','Poznámka:');
define('_ADMIN','Admin:');
define('_WERECEIVED','Zaznamenali jsme');
define('_PAGESVIEWS','přístupů od');
define('_TOPIC','Téma');
define('_UDOWNLOADS','Stažení');
define('_VOTE','Hlasovat');
define('_VOTES','Hlasů');
define('_MVIEWADMIN','Zobrazit: Pouze administrátorům');
define('_MVIEWUSERS','Zobrazit pouze přihlášeným uživatelům');
define('_MVIEWANON','Zobrazit: Pouze anonymům');
define('_MVIEWALL','Zobrazit: Všem návštěvníkům');
define('_EXPIRELESSHOUR','Konec zobrazování: méně než 1 hodina');
define('_EXPIREIN','Expires in');
define('_UNLIMITED','Neomezeno');
define('_HOURS','hodin(a/y)');
define('_RSSPROBLEM','Momentálně je problém se zprávami z tohoto webu');
define('_SELECTLANGUAGE','Vyberte si jazyk');
define('_SELECTGUILANG','Vyberte si jazykové rozhraní:');
define('_NONE','Není');
define('_BLOCKPROBLEM','<center>There is a problem right now with this block.</center>');
define('_BLOCKPROBLEM2','<center>There isn\'t content right now for this block.</center>');
define('_MODULENOTACTIVE','Je mi líto, ale tento modul není aktivní!');
define('_NOACTIVEMODULES','Iniciovaný modul');
define('_MODULENOEXIST','Jw nám líto, ale požadovaný soubor %s není dostupný nebo neexistuje');
define('_FORADMINTESTS','(pro administrační testovaní)');
define('_BBFORUMS','Fórum');
define('_ACCESSDENIED','Přístup zamítnut');
define('_RESTRICTEDAREA','Zkoušíte se dostat do zablokované zóny.');
define('_MODULEUSERS','Je mi líto, ale tato sekce je jen pro <i>Registrované uživatele</i><br /><br />Můžeš se registrovat  <a href="'.getlink("Your_Account&amp;file=register").'">zde</a>, then you can<br />access to this section without restrictions. Thanks.<br /><br />');
define('_MODULEUSERS2','You can register for free by following <a href="'.getlink('Your_Account&amp;file=register').'">this</a> link, thus granting you permission to access this area of our site.<br /><br />Thank you for your understanding');
define('_MODULESADMINS','Sekce jen pro <i>ADMINISTRÁTORY !</i><br /><br />');
define('_MODULESGROUPS','group access required');
define('_HOME','Domů');
define('_HOMEPROBLEM','Není nastavena domovská stránka!!!');
define('_ADDAHOME','Přidat modul na domovskou stránku');
define('_HOMEPROBLEMUSER','Není v pořádku domovská stránka. Zkuste to později.');
define('_MORENEWS','Více v sekci Novinky');
define('_ALLCATEGORIES','Všechny kategorie');
define('_SPAMGUARDPROTECTED','Spamový hlídač zablokoval tento email proti odeslání');
define('_M_CHARS','Maximum: %s znaků');

define('_SYS_MESSAGE','Systémové hlášení');
define('_SYS_MESSAGES','Systémová hlášení');
define('_SYS_MAINTENANCE','Jste  v módu údržby');
define('_SYS_DEMO','Jste v demonstračním administračním módu<br /> Nemůžete provádět žádné změny v databázi<br /><a href="'.adminlink('logout').'">Odhlásit!</a>');

define('_DATE','Datum');
define('_HOUR','hodin(a/y)');
define('_UMONTH','Měsíc');
define('_YEAR','Rok');
define('_JANUARY','Leden');
define('_FEBRUARY','Únor');
define('_MARCH','Březen');
define('_APRIL','Duben');
define('_MAY','Květen');
define('_JUNE','Červen');
define('_JULY','Červenec');
define('_AUGUST','Srpen');
define('_SEPTEMBER','Září');
define('_OCTOBER','Říjen');
define('_NOVEMBER','Listopad');
define('_DECEMBER','Prosinec');

define('_MONDAY','Pondělí');
define('_TUESDAY','Úterý');
define('_WEDNESDAY','Středa');
define('_THURSDAY','Čtvrtek');
define('_FRIDAY','Pátek');
define('_SATURDAY','Sobota');
define('_SUNDAY','Neděle');

define('_ABR_MONDAY','Pon');
define('_ABR_TUESDAY','Úte');
define('_ABR_WEDNESDAY','Stř');
define('_ABR_THURSDAY','Čtv');
define('_ABR_FRIDAY','Pát');
define('_ABR_SATURDAY','Sob');
define('_ABR_SUNDAY','Ned');

define('_BWEL','Vítejte');
define('_BPM','Soukomé zprávy');
define('_BUNREAD','nepřečteno');
define('_BREAD','přečteno');
define('_BMEMP','Registrace');
define('_BLATEST','Poslední');
define('_BTD','Nový dnes');
define('_BYD','Nový včera');
define('_BOVER','Celkem');
define('_BVISIT','Registrovaných on-line');
define('_BVIS','Návštěvníků');
define('_BMEM','Registrováno');
define('_BTT','Celkem');
define('_BON','Nyní on-line');
define('_BREG','Registrovaných');
define('_BROADCAST','Vysílaná veřejná zpráva');
define('_BROADCASTFROM','Publikovat zprávu z');
define('_TURNOFFMSG','Vypnout publikované zprávy');
define('_JOURNAL','Blog');
define('_READMYJOURNAL','Čti můj blog');
define('_ADD','Přidat');
define('_YES','Ano');
define('_NO','Ne');
define('_INVISIBLEMODULES','Neviditelné moduly');
define('_ACTIVEBUTNOTSEE','(Aktivní, ale neviditelný odkaz)');
define('_BOTS','Bots');

define('_UM','Dragonfly aktualizační service');
define('_UM_F','Spojení s aktualizační službou selhalo. Prosím, zkuste to znovu později.');
define('_UM_G','Používáte nejnovější verzi Dragonfly');
define('_UM_R','Prosím, <a href="%2$s" target="_blank">aktualizujte</a> Dragonfly %1$s');

define('_TEAM','tým.');
define('_LINKAPPROVEDMSG','Congratulations! The web link you submitted has been approved. Please link back to use and send an email with the url where you have done so.');
define('_MODREQLINKS','Mod. Links');
define('_BROKENLINKS','Poškozené Linky');
define('_MODREQDOWN','Mod. Downloads');
define('_BROKENDOWN','Poškozené Downloady');
define('_PAGEGENERATION','Stránka generována za:');
define('_SECONDS','sekund');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Stránka vygenerována za %1$s seconds a provedla %2$s požadavků databázi za in %3$s seconds');
define('_YOUHAVEONEMSG','Máte 1 soukromou zprávu');
define('_NEWPMSG','Nová soukromá zpráva');
define('_CONTRIBUTEDBY','Příspěvek od');
define('_CHAT','Chat');
define('_REGISTERED','Registrován');
define('_CHATGUESTS','Hosté');
define('_USERSTALKINGNOW','Uživatelé Na Chatu');
define('_ENTERTOCHAT','Vstoupit Na Chat');
define('_CHATROOMS','Dostupné Místnosti');
define('_ALLTOPICS','Vechna témata');
define('_ASSOTOPIC','Associated Topics');
define('_HELLO','Ahoj');
define('_ALL','Ve');
define('_URL','URL');
define('_SUBJECT','Předmět');
define('_PREVIEW','Prohlédnout');
define('_SEND','Poslat');
define('_ANONYMOUS','Anonymous');
define('_BREADCRUMB', 'Breadcrumb Delimiter, separates words in pagetitles');
define('_BC_DELIM',''.isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&rsaquo;');//''. is for cpglang
define('_RESET','Reset');
define('_AT','at');
define('_LASTMSGS','Last %s Forum Messages');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','Vytisknout stránku');

define('_CREDITS_TITLE','Credits');
define('_CREDITS_PRODUCT','Product');
define('_CREDITS_DESC','Description');
define('_CREDITS_AUTHORS','Autoři');

define('_PP_TITLE','Privacy Policy');
define('_PP_MODIFY','Změnit tuto zprávu');

define('_SENDEREMAIL','Email odesílatele');
define('_SENDERNAME','Jméno odesílatele');
define('_RECIPIENTNAME','Jméno Příjemce');
define('_RECIPIENTEMAIL','Email Příjemce');

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
define('_TB_DELETE','Smazat Můj Účet');
define('_TB_CONFIG','Konfigurace');
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
define('_SECURITYCODE','bezpečnostní kód');
define('_TYPESECCODE','Typ bezpečnostního kódu');
define('_MEMBERSOPTIONS','Nastavení registrování');
define('_READSEND','Číst soukromou zprávu. Poslat zprávu ostatním.');
define('_INBOX','Příchozí pošta');
define('_NEW','Nové');
define('_ACCOUNTOPTIONS','Tvůj účet. Změnit nastavení a číst zprávy.');
define('_LOGOUTACCT','Odhlásit.');
define('_LOGOUTADMINACCT','Odhlásit z admin účtu.');
define('_BLOGIN','Tvůj účet');
define('_BFLOGIN','Forum Profile');
define('_BHID','Skrytý');
define('_WHOWHERE','Kdo je kde');
define('_STAFFONL','Staff Online');
define('_STAFFNONE','No staff members are online!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Community');
define('_BlogsLANG','Blogs');
define('_ContentLANG','Content');
define('_coppermineLANG','Photo Gallery');
define('_CPGlangLANG','Pomoc s překladem');
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
define('_DOCS','Dokumentace');
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
$PHPMAILER_LANG['provide_address'] = 'Musíte zadat alespoò jednu emailovou adresu pøíjemce.';
$PHPMAILER_LANG['mailer_not_supported'] = ' mailový klient není podporován.';
$PHPMAILER_LANG['execute'] = 'Nelze provést: ';
$PHPMAILER_LANG['instantiate'] = 'Nelze vytvoøit instanci emailové funkce.';
$PHPMAILER_LANG['authenticate'] = 'SMTP Error: Chyba autentikace.';
$PHPMAILER_LANG['from_failed'] = 'Následující adresa From je nesprávná: ';
$PHPMAILER_LANG['recipients_failed'] = 'SMTP Error: Adresy pøíjemcù nejsou správné ';
$PHPMAILER_LANG['data_not_accepted'] = 'SMTP Error: Data nebyla pøijata';
$PHPMAILER_LANG['connect_host'] = 'SMTP Error: Nelze navázat spojení se SMTP serverem.';
$PHPMAILER_LANG['file_access'] = 'Soubor nenalezen: ';
$PHPMAILER_LANG['file_open'] = 'File Error: Nelze otevøít soubor pro ètení: ';
$PHPMAILER_LANG['encoding'] = 'Neznámé kódování: ';
/* END class phpmailer lang array */

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_SAVECHANGES','Uloit změny');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Language');
define('_FUNCTIONS','Funkce');
define('_SHOW','Ukázat');
define('_TO','Komu');
define('_DAY','Den');
define('_LAST','Last');
define('_ACTIVE','Aktivní');
define('_DEACTIVATE','Deaktivovat');
define('_INACTIVE','Neaktivní');
define('_ACTIVATE','Aktivovat');
define('_ACTIVATE2','Aktivovat?');
define('_VIEW','Visible to');
define('_VIEWPRIV','Kdo to můe vidět?');
define('_MVADMIN','Pouze administrátoři');
define('_MVUSERS','Pouze přihláení uivatelé');
define('_MVANON','Pouze anonymní uivatelé');
define('_MVALL','Vichni návtěvníci');
define('_IMAGE','Obrázek');
define('_GO','Jdi!');
define('_OPTION','Volby');
define('_CATEGORY','Kategorie');
define('_SUBCATEGORY','Sub-Category');
define('_ID','ID');
define('_EXPIRATION','Konec zobrazení za');
define('_DAYS','dní');
define('_WARNING','POZOR');
define('_POLLTITLE','Anketní otázka');
define('_POLLEACHFIELD','Zadejte, prosím, kadou monou odpoveď do samostatného pole');
define('_ADDCATEGORY','Přidat novou kategorii');
define('_PAGEBREAK','Pokud chcete napsat vícestupňovou stránku pouijte <b>&lt;!--pagebreak--&gt;</b> v místě, kde ji chcete zalomit.');
define('_SIGNATURE','Podpis');
define('_DESCRIPTION','Popis');
define('_EDITCATEGORY','Upravit kategorii');
define('_IN','v');
define('_DESCRIPTION255','Popis: (max. 255 znaků)');
define('_MODCATEGORY','Upravit kategorii');
define('_SUBMITTER','Poslal');
define('_VISIT','Navtívit');
define('_EXTENDEDTEXT','Rozířený text');
define('_CHECKCATEGORIES','Vybrat kategorie');
define('_INCLUDESUBCATEGORIES','(vloené subkategorie)');
define('_CHECKSUBCATEGORIES','Vybrat subkategorie');
define('_VALIDATELINKS','Ověřené odkazy');
define('_FAILED','Selhalo!');
define('_BEPATIENT','(bute prosím trpělivý(á))');
define('_VALIDATINGCAT','Ověřování kategorie (a vech subkategorií)');
define('_VALIDATINGSUBCAT','Ověřování subkategorií');
define('_OK','Ok!');
define('_CHECK','Vybrat');
define('_IGNORE','Ignorovat');
define('_HITS','Klinkutí');
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
define('_WHOSONLINE','Kdo je online?');
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
define('_STORYID','Článek ID');
define('_CURRENTPOLL','Aktuální anketa');

// admin.php
define('_ADMINISTRATION','Administration');
define('_NOADMINYET','There are no administrator accounts yet, proceed to create the super user...');
define('_CREATEUSERDATA','Would you like to create a regular user with the same data?');
define('_ADMINLOGIN','Přihláení do administračního systému');
define('_ADMINID','Nickname');
define('_EMAIL','Email');
define('_SUBMIT','Odeslat');
define('_YOUARELOGGEDOUT','Vae odhláení proběhlo úspěně!');
define('_PASSWDNOMATCH','Lituji, nové heslo nesouhlasí. Běte zpět a zkuste to znovu');
define('_LOGIN_REMEMBERME','Remember me?');
define('_ADMINMENU_LOGOUT','Administration Menu Logout');
define('_PASSWORD_MALFORMED','Please include at least one number, one capital letter and one lowercase letter in your password');

// admins.php
define('_AUTHORSADMIN','Administrace adminů');
define('_NAME','Jméno');
define('_REQUIRED','(vyadováno)');
define('_MODIFYINFO','Upravit info');
define('_DELAUTHOR','Smazat admina');
define('_ADDAUTHOR','Přidat nového administrátora');
define('_PERMISSIONS','Práva');
define('_SUPERUSER','Super uivatel');
define('_SUPERWARNING','POZOR: Pokud zadáte Super uivatel, bude mít uivatel přístup ke vemu!');
define('_ADDAUTHOR2','Přidat admina');
define('_RETYPEPASSWD','Znovu heslo');
define('_FORCHANGES','(Pouze pro změnu)');
define('_COMPLETEFIELDS','Musíte zadat vechna povinná pole');
define('_CREATIONERROR','Chyba při vytváření admina');
define('_AUTHORDEL','Smazat autora');
define('_PUBLISHEDSTORIES','Tento administrátor má publikované články');
define('_SELECTNEWADMIN','Prosím vyberte nového admina pro jeho náhradu');
define('_GODNOTDEL','*(Účet GOD nemůe být smazán)');
define('_MAINACCOUNT','God Admin*');
define('_USERS','Uivatelé');

// banners.php
define('_BANNERSADMIN','Administrace bannerů');
define('_DELETEBANNER','Delete Banner');
define('_SURETODELBANNER','Are you sure you want to delete this banner?');
define('_EDITBANNER','Edit Banner');

// blocks.php
define('_BLOCKSADMIN','Administrace bloků');
define('_CENTER','Center');
define('_CENTERUP','Center Up');
define('_CENTERDOWN','Center Down');
define('_BLOCKFILE','(Block File)');
define('_BLOCKFILE2','FILE');
define('_BLOCKSYSTEM','SYSTEM');
define('_ADDNEWBLOCK','Přidat nový blok');
define('_RSSFILE','URL adresa RSS/RDF souboru');
define('_ONLYHEADLINES','(Pouze pro zprávy)');
define('_REFRESHTIME','Čas obnovování');
define('_CREATEBLOCK','Vytvořit blok');
define('_EDITBLOCK','Upravit blok');
define('_BLOCK','Blok');
define('_SAVEBLOCK','Uloit blok');
define('_BLOCKACTIVATION','Aktivace bloku');
define('_BLOCKPREVIEW','Náhled bloku');
define('_WANT2ACTIVATE','Chcete tento blok aktivovat?');
define('_ARESUREDELBLOCK','Chcete opravdu blok přesunout');
define('_BLOCKUP','Blok nahoru');
define('_BLOCKDOWN','Blok dolů');
define('_BLOCKTOP','Move block to top');
define('_BLOCKBOTTOM','Move block to bottom');
define('_TITLE','Název');
define('_POSITION','Pozice');
define('_WEIGHT','Pořadí');
define('_STATUS','Status');
define('_LEFTBLOCK','Levý blok');
define('_LEFT','Levý');
define('_RIGHTBLOCK','Pravý blok');
define('_RIGHT','Pravý');
define('_TYPE','Typ');
define('_CUSTOM','Vlastní');
define('_FILENAME','Filename');
define('_FILEINCLUDE','If you use this option, ignore the Content and Refresh time fields');
define('_VISIBLEINMODULES', 'Visible in modules');

// comments.php
define('_REMOVECOMMENTS','Smazat komentáře');
define('_SURETODELCOMMENTS','Opravdu chcete smazat tento komentář a související odpovědi?');

// database.php
define('_SAVEDATABASE','Backup');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Current Status');
define('_ACTIVATEPAGE','Activate This Page?');

// history.php
define('_EPHEMADMIN','Administrace událostí');
define('_ADDEPHEM','Přidat novou událost');
define('_EPHEMDESC','Popis události');
define('_EPHEMMAINT','Správa událostí (Upravit/Smazat):');
define('_EPHEMEDIT','Upravit události');
define('_EPHEMDELETE','Delete Entry');

// headlines.php
define('_RSSFAIL','Vyskytl se problém s URL adresou RSS souboru');
define('_RSSTRYAGAIN','Zkontrolujte, prosím, URL adresu a název RSS souboru ne budete pokus opakovat.');
define('_RSSCONTENT','(RSS/RDF obsah)');
define('_IFRSSWARNING','Pokud vyplníte URL adresu obsah, který jste zadal(a) nebude zobrazen!');
define('_SETUPHEADLINES','(Vyberte Vlastní a zadejte URL nebo vyberte z naí nabídky zpráv)');
define('_HEADLINESADMIN','Administrace zpráv');
define('_ADDHEADLINE','Přidat zprávy');
define('_EDITHEADLINE','Upravit zprávy');
define('_SURE2DELHEADLINE','POZOR: Opravdu chcete smazat tyto zprávy?');

// messages.php
define('_MESSAGESADMIN','Administrace oznámení');
define('_MESSAGETITLE','Nadpis');
define('_MESSAGECONTENT','Text');
define('_ALLMESSAGES','Overview messages');
define('_EDITMSG','Edit message');
define('_ADDMSG','Add message');
define('_REMOVEMSG','Are you sure that you want to delete this message?');
define('_CHANGEDATE','Změnit datum začátku na dneek?');
define('_IFYOUACTIVE','(Pokud aktivujete oznámení nyní, počáteční datum bude dnení)');

// modules.php
define('_MODULESADMIN','Modules Administration');
define('_HOMECONFIG','Nastavení úvodní stránky');
define('_MODULESADDONS','Modules and Addons');
define('_INHOME','Set as Home Module');
define('_MODULEHOMENOTE','New modules added to the /modules/ folder will automatically be added to the system<br />Removing a module\'s folder from this directory will automatically remove the module from the system<br /><br />The module with a bold title denotes the module set as my homepage<br />This module cannot be deactivated or restricted to certain users');
define('_PUTINHOME','Set as Home');
define('_SURETOCHANGEMOD','Are you sure you want to change your Homepage from');
define('_NOTINMENU','[ <strong>&middot;</strong> ] denotes a module hidden from view in the Modules block');
define('_SHOWINMENU','Show in menu?');
define('_CUSTOMTITLE','Custom Title');
define('_MODULEEDIT','Modules Edit');
define('_VERSION','Verze');
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
define('_STAFF','tým');
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
define('_WHOLINKS','Odkud přili na nai stránku?');
define('_DELETEREFERERS','Smazat');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Footer');
define('_DEBUG', 'Debug');
define('_SITECONFIG','Nastavení webu');
define('_GENSITEINFO','Základní informace');
define('_SITENAME','Název stránky');
define('_SITEURL','URL adresa');
define('_SITELOGO','Logo');
define('_SITESLOGAN','Slogan');
define('_STARTDATE','Datum zahájení provozu');
define('_ADMINEMAIL','Administrátorův e-mail');
define('_ITEMSTOP','Počet zápisů na TOP stránce');
define('_STORIESHOME','Počet článků na úvodní stránce');
define('_OLDSTORIES','Počet článku v boxu Starí');
define('_ALLOWANONPOST','Povolit anonymům přispívání?');
define('_DEFAULTTHEME','Výchozí vzhled webu');
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
define('_SELLANGUAGE','Výchozí jazyk pro web');
define('_LOCALEFORMAT','Formát lokálního času');
define('_ACTMULTILINGUAL','Activate site-wide multi-lingual features');
define('_ACTUSEFLAGS','Use flags instead of a drop-down box');
// banners
define('_BANNERSOPT','Monosti pro bannery');
define('_ACTBANNERS','Aktivovat systém reklamních bannerů?');
// footer
define('_FOOTERMSG','Text zprávy v patce stránky');
define('_FOOTERLINE1','Řádek č.1');
define('_FOOTERLINE2','Řádek č.2');
define('_FOOTERLINE3','Řádek č.3');
// backend
define('_BACKENDCONF','Nastavení systému backend');
define('_BACKENDTITLE','Nadpis');
define('_BACKENDLANG','Jazyk');
// mail stories
define('_MAIL2ADMIN','Poslat nový článek administrátorovi');
define('_NOTIFYSUBMISSION','Upozornit na nový příspěvek e-mailem?');
define('_EMAIL2SENDMSG','Adresa pro odeslání zprávy');
define('_EMAILSUBJECT','Předmět');
define('_EMAILMSG','Text');
define('_EMAILFROM','E-mail účet (Od)');
// comments
define('_COMMENTSOPT','Monosti komentářů');
define('_COMMENTSLIMIT','Max.velikost komentáře v bytech');
define('_COMMENTSMOD','Moderování komentářů');
define('_MODADMIN','Moderuje Admin');
define('_MODUSERS','Moderují uivatelé');
define('_NOMOD','Nemoderovat');
// adminmenu
define('_GRAPHICOPT','Monosti pro grafiku');
define('_BOTH','Both');
define('_GRAPHICAL','Graphical');
define('_SIDEBLOCK','Side-block');
// miscellaneous
define('_MISCOPT','Dalí monosti nastavení');
define('_ACTIVATEHTTPREF','Aktivovat Odkud přili?');
define('_MAXREF','Kolik zachovat záznamů v sekci odkud přili?');
define('_COMMENTSPOLLS','Aktivovat komentáře k anketě?');
define('_COMMENTSARTICLES','Activate Comments in Articles?');
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
define('_ADMINMENU','Administrační menu');
define('_ADMINLOGOUT','Odhlásit / Konec');
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
define('_PREFERENCES','Nastavení');
define('_DATABASE','Database');
define('_BLOCKS','Bloky');
define('_MODULES','Modules');
define('_EDITADMINS','Upravit administrátory');
define('_MESSAGES','Oznámení');
define('_BANNERS','Banners');
define('_HTTPREFERERS','Odkud přišli');
define('_EDITUSERS','Upravit uivatele');
define('_USERSCONFIG','Members Config');
define('_NEWSLETTER','Newsletter');
define('_SUBMISSIONS','Příspěvky');
define('_ADDSTORY','Přidat článek');
define('_TOPICS','Témata');
define('_ADMPOLLS','Ankety');
define('_EPHEMERIDS','Události');
define('_REVIEWS','Recenze');
define('_ENCYCLOPEDIA','Encyclopedia');
define('_SURVEYS','Ankety');
define('_SECTIONS','Sekce');
define('_ARTICLES','Články');
define('_FAQ','FAQ');
define('_DOWNLOAD','Downloads');
define('_WEBLINKS','Archív odkazů');
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
