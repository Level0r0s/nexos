<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/hungarian/main.php,v $
  $Revision: 9.31 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:51 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','hu');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%B %d, %A, %T');
define('_DATESTRING2','%B %d, %A');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Next Page');
define('_PREVIOUSPAGE','Previous Page');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Keresés');
define('_LOGIN','Belépés');
define('_WRITES','Szerző:');
define('_POSTEDON','Ideje:');
define('_NICKNAME','Felhasználónév');
define('_PASSWORD','Jelszó');
define('_WELCOMETO','Üdvözöl a');
define('_EDIT','Szerkesztés');
define('_DELETE','Törlés');
define('_POSTEDBY','Írta:');
define('_READS','olvasás');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Vissza</a>' : '<a href="javascript:history.go(-1)">Vissza</a>').' ]');
define('_COMMENTS','hozzászólás');
define('_PASTARTICLES','Előző cikkek');
define('_OLDERARTICLES','Régebbi cikkek');
define('_BY','Szerző:');
define('_ON','Ideje:');
define('_LOGOUT','Kilépés');
define('_WAITINGCONT','Jóváhagyásra váró tartalom');
define('_WREVIEWS','Jóváhagyásra váró ismertetők');
define('_WLINKS','Jóváhagyásra váró linkek');
define('_ONEDAY','Évfordulók');
define('_ASREGISTERED','Még nem regisztráltad magad? <a href="\'.getlink("Your_Account").\'">Itt megteheted</a>. A regisztrált felhasználók számos előnnyel rendelkeznek: hozzászólások beállítása, és hozzászólások saját név alatt.');
define('_MENUFOR','Személyes menü:');
define('_NOBIGSTORY','A mai napnak még nincs "nagy sztorija".');
define('_BIGSTORY','A legolvasottabb cikk ma:');
define('_SURVEY','Szavazógép');
define('_POLLS','Szavazások');
define('_PCOMMENTS','Hozzászólások:');
define('_RESULTS','Eredmények');
define('_HREADMORE','tovább...');
define('_CURRENTLY','Jelenleg,');
define('_GUESTS','vendég és');
define('_MEMBERS','regisztrált felhasználó olvas bennünket.');
define('_YOUARELOGGED','Szia,');
define('_YOUHAVE','');
define('_PRIVATEMSG','személyes üzeneted van.');
define('_YOUAREANON','Jelenleg névtelen látogató vagy. Ingyenesen regisztrálhatod magad, <a href="\'.getlink("Your_Account").\'">ide</a> kattintva');
define('_NOTE','Megjegyzés:');
define('_ADMIN','Adminisztráció:');
define('_WERECEIVED','Összesen');
define('_PAGESVIEWS','találatot kaptunk az oldal indítása óta:');
define('_TOPIC','Téma');
define('_UDOWNLOADS','Számláló');
define('_VOTE','szavazat');
define('_VOTES','szavazat');
define('_MVIEWADMIN','Csak adminisztrátoroknak');
define('_MVIEWUSERS','Csak regisztrált tagoknak');
define('_MVIEWANON','Csak névtelen látogatóknak');
define('_MVIEWALL','Minden látogatónak');
define('_EXPIRELESSHOUR','Lejárat: kevesebb, mint egy óra');
define('_EXPIREIN','Lejárat ideje:');
define('_UNLIMITED','Korlátlan');
define('_HOURS','óra');
define('_RSSPROBLEM','Jelenleg nem működik a site tartalomszolgáltatása');
define('_SELECTLANGUAGE','Válassz nyelvet');
define('_SELECTGUILANG','Válassz nyelvet:');
define('_NONE','Semmi');
define('_BLOCKPROBLEM','<center>Ezzel a blokkal most valami hiba van</center>');
define('_BLOCKPROBLEM2','<center>Jelen pillanatban nincs tartalom ebben a blokkban.</center>');
define('_MODULENOTACTIVE','Ez a modul nem aktív!');
define('_NOACTIVEMODULES','kikapcsolt modulok');
define('_MODULENOEXIST','Sajnáljuk, de a kért fájl, %s, nem található');
define('_FORADMINTESTS','(for Admin tests)');
define('_BBFORUMS','Fórumok');
define('_ACCESSDENIED','Hozzáfárás megtagadva');
define('_RESTRICTEDAREA','Tiltott területre akartál belépni.');
define('_MODULEUSERS','Bocs! Ez a terület <i>csak Regisztált tagoknak</i><br /><br />Ingyenesen regisztráltathatod magad <a href="'.getlink('Your_Account&amp;file=register').'">itt</a>, majd utána<br />hozzáférhető lesz. Köszi.<br /><br />');
define('_MODULEUSERS2','Ingyenesen regisztrálhatsz <a href="'.getlink('Your_Account&amp;file=register').'">ezen</a> z oldalon, ezáltal meg tudod tekinteni ezt a részét is az oldalnak.<br /><br />Megértésed köszönjük.');
define('_MODULESADMINS',' Bocs, de ez oldal ezen része: <i>csak Adminoknak</i><br /><br />');
define('_MODULESGROUPS','hozzáférés a csoporthoz megtagadva');
define('_HOME','Kezdőlap');
define('_HOMEPROBLEM','Nagy probléma van: Nincs honlapunk!!!!');
define('_ADDAHOME','Modul a kezdőlapra');
define('_HOMEPROBLEMUSER','Jelen pillanatban a honlap nem üzemel, kérem térjen vissza később.');
define('_MORENEWS','További új témakörök');
define('_ALLCATEGORIES','Összes kategória');
define('_SPAMGUARDPROTECTED','A SpaMGuard megakadályozta az e-mail küldését');
define('_M_CHARS','Maximum: %s karakter ');

define('_SYS_MESSAGE','Rendszer Üzenet');
define('_SYS_MESSAGES','Rendszer Üzenetek');
define('_SYS_MAINTENANCE','A portál karbantartási módban üzemel');
define('_SYS_DEMO','Adminisztrációs üzemmódban fut a rendszer<br />Adatbázisváltozások nem végrehajthatóak<br /><a href="'.adminlink('logout').'">Kijelentkezés!</a> ');

define('_DATE','Dátum');
define('_HOUR','óra');
define('_UMONTH','hónap');
define('_YEAR','év');
define('_JANUARY','Január');
define('_FEBRUARY','Február');
define('_MARCH','Március');
define('_APRIL','Április');
define('_MAY','Május');
define('_JUNE','Június');
define('_JULY','Július');
define('_AUGUST','Augusztus');
define('_SEPTEMBER','Szeptember');
define('_OCTOBER','Október');
define('_NOVEMBER','November');
define('_DECEMBER','December');

define('_MONDAY','Hétfő');
define('_TUESDAY','Kedd');
define('_WEDNESDAY','Szerda');
define('_THURSDAY','Csütörtök');
define('_FRIDAY','Péntek');
define('_SATURDAY','Szombat');
define('_SUNDAY','Vasárnap');

define('_ABR_MONDAY','Hétfő');
define('_ABR_TUESDAY','Kedd');
define('_ABR_WEDNESDAY','Szerda');
define('_ABR_THURSDAY','Csütörtök');
define('_ABR_FRIDAY','Péntek');
define('_ABR_SATURDAY','Szombat');
define('_ABR_SUNDAY','Vasárnap');

define('_BWEL','Üdvözlet');
define('_BPM','Személyes üzenet');
define('_BUNREAD','Olvasatlan');
define('_BREAD','Olvasott');
define('_BMEMP','Csatlakozás');
define('_BLATEST','Legutóbbi');
define('_BTD','Új, ma');
define('_BYD','Új, tegnap');
define('_BOVER','Összes');
define('_BVISIT','Látogató online');
define('_BVIS','Látogató');
define('_BMEM','Tag');
define('_BTT','Összes');
define('_BON','Online új');
define('_BREG','Regisztráció');
define('_BROADCAST','Nyilvános üzenet közlése');
define('_BROADCASTFROM','Nyilvános üzenetet küldött');
define('_TURNOFFMSG','Nyilvános üzenetek kikapcsolása');
define('_JOURNAL','Napló');
define('_READMYJOURNAL','Napló olvasása');
define('_ADD','Hozzáadás');
define('_YES','Igen');
define('_NO','Nem');
define('_INVISIBLEMODULES','Rejtett modul');
define('_ACTIVEBUTNOTSEE','(Aktív, de rejtett link)');
define('_BOTS','Botok');

define('_UM','Dragonfly Frissítő Monitor');
define('_UM_F','Hiba. Próbáld később.');
define('_UM_G','Te a CPG-Nuke legfrissebb változatát használod');
define('_UM_R','Kérlek <a href="%2$s" target="_blank">fríssítsd</a> a Dragonfly %1$s');

define('_TEAM','csoport.');
define('_LINKAPPROVEDMSG','Gratulálunk! Az Ön által javasolt linket jóváhagytuk. Kérjük helyezze el a ránk mutató linket a honlapján, és e-mailben értresítsen a honlap url-jéről. Előre is köszönjük.');
define('_MODREQLINKS','Link módosítás');
define('_BROKENLINKS','Rossz link');
define('_MODREQDOWN','Letöltés módosítás');
define('_BROKENDOWN','Rossz letöltés');
define('_PAGEGENERATION','Oldal generálás:');
define('_SECONDS','Másodperc');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','This page generated in %1$s seconds with %2$s DB Queries in %3$s seconds');
define('_YOUHAVEONEMSG','1 Privát üzeneted van');
define('_NEWPMSG','Új privát üzenet');
define('_CONTRIBUTEDBY','Készítette:');
define('_CHAT','Csevegő');
define('_REGISTERED','Csatlakozott');
define('_CHATGUESTS','Vendég');
define('_USERSTALKINGNOW','Beszélgetők száma');
define('_ENTERTOCHAT','Belépés a csevegőbe');
define('_CHATROOMS','Elérhető szobák');
define('_ALLTOPICS','Minden téma');
define('_ASSOTOPIC','Hozzárendelt téma');
define('_HELLO','Helló,');
define('_ALL','Minden');
define('_URL','URL');
define('_SUBJECT','Cím');
define('_PREVIEW','Előnézet');
define('_SEND','Küldés');
define('_ANONYMOUS','Anonymous');
define('_BREADCRUMB', 'Breadcrumb Delimiter, appears in page titles between the words');
define('_BC_DELIM',isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&gt;&gt;');
define('_RESET','Reset');
define('_AT','at');
define('_LASTMSGS','Last %s Forum Messages');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','Nyomtatható változat');

define('_CREDITS_TITLE','Készítők');
define('_CREDITS_PRODUCT','Termék');
define('_CREDITS_DESC','Leírás');
define('_CREDITS_AUTHORS','Szerző(k)');

define('_PP_TITLE','Adatvédelmi nyilatkozat');
define('_PP_MODIFY','Üzenet módosítása');

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
define('_TB_BLOCK','Saját Eszközök');
define('_TB_TASKS','Feladatok');
define('_TB_INFO','Információk');
define('_TB_PROFILE_INFO','Nyilvános profilom');
define('_TB_EDIT_PROFILE','Profil információim');
define('_TB_EDIT_REG','Regisztrációm részletei');
define('_TB_EDIT_PRIVATE','Magán jellegű információk');
define('_TB_EDIT_AVATAR','Avatárom');
define('_TB_DELETE','Kilépés és törlés a rendszerből');
define('_TB_CONFIG','Konfiguráció');
define('_TB_EDIT_PREFS','Beállításaim');
define('_TB_EDIT_HOME','Honlapom beállításai');
define('_TB_EDIT_COMM','Hozzászólásaim');
define('_TB_PERSONAL','Magán');
define('_TB_PERSONAL_GALLERY','Galériám');
define('_TB_PERSONAL_JOURNAL','Híreim');
define('_TB_PRIVMSGS','Privát Üzenetek');
define('_TB_PRIVMSGS_INBOX','Bejövő');
define('_TB_PRIVMSGS_OUTBOX','Kimenő');
define('_TB_PRIVMSGS_SENTBOX','Küldött');
define('_TB_PRIVMSGS_SAVEBOX','Mentett');
define('_TB_PRIVMSGS_SEND','Üzenet küldése');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','Információ a felhasználóról');
define('_SECURITYCODE','Biztonsági kód');
define('_TYPESECCODE','Írd be a biztonsági kódot');
define('_MEMBERSOPTIONS','Tag beállítások');
define('_READSEND',' Privát üzenetek olvasása és küldése másoknak.');
define('_INBOX','Beérkezett üzenetek');
define('_NEW','Új');
define('_ACCOUNTOPTIONS','Adataid. Személyes beállítások és üzenetek.');
define('_LOGOUTACCT','Kijelentkezés.');
define('_LOGOUTADMINACCT','Kijelentkezés admin módból.');
define('_BLOGIN','Adataid');
define('_BFLOGIN','Fórum Profile');
define('_BHID','Rejtett');
define('_WHOWHERE','Ki hol van?');
define('_STAFFONL','Bejelentkezett admin');
define('_STAFFNONE','Nincs jelenleg adminisztrátor!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Közösség');
define('_ContentLANG','Tartalom');
define('_coppermineLANG','Fényképalbum');
define('_CPGlangLANG','Fordítási segédlet');
define('_DownloadsLANG','Letöltések');
define('_EncyclopediaLANG','Enciklopédia');
define('_ForumsLANG','Közösségi fórumok');
define('_ContactLANG','Lépjen kapcsolatba velünk');
define('_FAQLANG','GYIK - Segítség');
define('_BlogsLANG','Napló');
define('_Members_ListLANG','Taglista');
define('_NewsLANG','Hírek');
define('_ReviewsLANG','Áttekintések');
define('_SearchLANG','Keresés');
define('_StatisticsLANG','Statisztikák');
define('_Stories_ArchiveLANG','Hír arhívum');
define('_Submit_NewsLANG','Hír küldése');
define('_SurveysLANG','Kérdőívek');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Topics');
define('_Private_MessagesLANG','Magán üzeneteim');
define('_Tell_a_FriendLANG','Mondd el barátodnak');
define('_Web_LinksLANG','Linkek');
define('_Your_AccountLANG','Fiókom');
define('_CPG_EventsLANG','Naptár');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Nyelvek!');
define('_SmiliesLANG', 'Mosolyok');
define('_GroupsLANG','Csoportok');
define('_RanksLANG', 'Rangok');
define('_HeadlinesLANG', 'Fejlécek');

define('_COMMUNICATION','Kommunikáció');
define('_FRIENDS','Barátok');
define('_STORE','Bolt');
define('_PRODUCTS','Termékek');
define('_DONATE','Adakozz');
define('_HELP','Segítség');
define('_GALLERIES','Galériák');
define('_DOCS','Dokumentáció');
define('_RULES','Szabályok és feltételek');
define('_MENU','Főmenü');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','<strong>Feliratkoztál</strong><br />a hírlevelünkre');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','<strong>Nem iratkoztál</strong>fel<br />a hírlevelünkre');
define('_NEWSLETTERBLOCKREGISTER','Regisztrált felhasználónak</strong><br />kell lenned, hogy előfizess a hírlevélre');
define('_NEWSLETTERBLOCKSUBSCRIBE','Feliratkozás');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Leiratkozás');
define('_NEWSLETTERBLOCKREGISTERNOW','Regisztrálj most!');
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
define('_SAVECHANGES','Változások mentése');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Nyelv');
define('_FUNCTIONS','Funkciók');
define('_SHOW','Megtekintés');
define('_TO','Címzett');
define('_DAY','nap');
define('_LAST','Utolsó');
define('_ACTIVE','Aktív');
define('_DEACTIVATE','Kikapcsolás');
define('_INACTIVE','Inaktív');
define('_ACTIVATE','Bekapcsolás');
define('_ACTIVATE2','Bekapcsolás?');
define('_VIEW','Által látható');
define('_VIEWPRIV','Ki olvashatja?');
define('_MVADMIN','Csak adminisztrátorok');
define('_MVUSERS','Csak regisztrált tagok');
define('_MVANON','Csak névtelen látogatók');
define('_MVALL','Minden látogató');
define('_IMAGE','Kép');
define('_GO','Indulás!');
define('_OPTION','Beállítások');
define('_CATEGORY','Kategória');
define('_SUBCATEGORY','Alkategória');
define('_ID','Azonosító');
define('_EXPIRATION','Lejárat');
define('_DAYS','napban');
define('_WARNING','Figyelmeztetés');
define('_POLLTITLE','Szavazás címe');
define('_POLLEACHFIELD','Add meg külön mezőben az összes elérhető opciót');
define('_ADDCATEGORY','Új kategória');
define('_PAGEBREAK','Ha több oldalra szeretnéd bontani az írást, írj <b>&lt;!--pagebreak--&gt;</b>-et oda, ahol vágni szeretnél!');
define('_SIGNATURE','Aláírás');
define('_DESCRIPTION','Leírás');
define('_EDITCATEGORY','Kategória szerkesztése');
define('_IN','a');
define('_DESCRIPTION255','Leírás: (max. 255 karakter)');
define('_MODCATEGORY','Kategória szerkesztése');
define('_SUBMITTER','Beküldő');
define('_VISIT','látogató');
define('_EXTENDEDTEXT','Bővített szöveg');
define('_CHECKCATEGORIES','Kategória ellenőrzése');
define('_INCLUDESUBCATEGORIES','(az alkategóriákat beleértve)');
define('_CHECKSUBCATEGORIES','Alkategóriák ellenőrzése');
define('_VALIDATELINKS','Linkek ellenőrzése');
define('_FAILED','Sikertelen!');
define('_BEPATIENT','(kérjük, légy türelmes)');
define('_VALIDATINGCAT','Kategória (és az alkategóriáinak) jóváhagyása');
define('_VALIDATINGSUBCAT','Alkategória jóváhagyása');
define('_OK','Ok!');
define('_CHECK','Ellenőrzés');
define('_IGNORE','Elutasítás');
define('_HITS','találat');
define('_FILESIZE', 'Fájlméret');
define("_EZTHEREIS","There are");
define("_EZSUBCAT","al-kategóriák");
define("_EZATTACHEDTOCAT","under this category");
define("_EZBROKENLINKS","Törött linkek");
define("_DELEZLINKCATWARNING","WARNING : Are you sure you want to delete this category ?<br /> You will delete all sub-categories and attached links as well !");

// index.php
define('_DEFHOMEMODULE','Alapértelmezett honlap modul');
define('_MODULEINHOME','A modul betöltve az honlapra:');
define('_CHANGE','Változtatás');
define('_WHOSONLINE','Ki olvas most minket?');
define('_NP_ADMIN','Jegyzettömb');
define('_NP_LOCKED','A jegyzettömb ki van kapcsolva<br />Csak egy superadmin (root admin) aktiválhatja újra');
define('_NP_SAVE','Jegyzetek mentése');
define('_NP_UNLOCK','Jegyzettömb aktiválása');
define('_NP_LOCK','Jegyzettömb deaktiválása');
// news
define('_STICKY','Kiemelt cikkek');
define('_ARTICLEUP','Cikk FEL');
define('_ARTICLEDOWN','Cikk LE');
define('_UNSTICK','Kiemelés eltávolítása');
define('_STICK','Cikk kiemelése');
define('_AUTOMATEDARTICLES','Programozott cikkek');
define('_STORYID','Cikk száma');
define('_CURRENTPOLL','Jelenlegi szavazás');

// admin.php
define('_ADMINISTRATION','Adminisztráció');
define('_NOADMINYET','Még nincsenek adminok kijelölve, hozz létre egy superadmint (root admint):');
define('_CREATEUSERDATA','Szeretnéd, hogy ez legyen az új felhasználók alapértelmezett adata?');
define('_ADMINLOGIN','Adminisztrációs Rendszer - belépés');
define('_ADMINID','Admin azonosítója');
define('_EMAIL','Email');
define('_SUBMIT','Küldés');
define('_YOUARELOGGEDOUT','Kiléptél!');
define('_PASSWDNOMATCH','Sajnálom, az új jelszavak nem egyformák. Menj vissza és próbáld újra.');
define('_LOGIN_REMEMBERME','Emlékszel?');
define('_ADMINMENU_LOGOUT','Kijelentkezés az admin menüből');
define('_PASSWORD_MALFORMED','Kérlek válassz olyan jelszót, melyben legalább egy kisbetű, egy nagybetű és egy szám is van');

// admins.php
define('_AUTHORSADMIN','Szerzők adminisztrációja');
define('_NAME','Név');
define('_REQUIRED','(Kötelező)');
define('_MODIFYINFO','Adatok szerkesztése');
define('_DELAUTHOR','Szerző törlése');
define('_ADDAUTHOR','Új adminisztrátor hozzáadása');
define('_PERMISSIONS','Jogok');
define('_SUPERUSER','SuperUser');
define('_SUPERWARNING','FIGYELMEZTETÉS: Ha a SuperUser-t bejelölöd, a felhasználó minden jogot megkap!');
define('_ADDAUTHOR2','Szerző hozzáadása');
define('_RETYPEPASSWD','Jelszó mégegyszer');
define('_FORCHANGES','(Csak a változtatásokhoz)');
define('_COMPLETEFIELDS','Tessék kitölteni a kötelező mezőket');
define('_CREATIONERROR','Hiba a szerző hozzáadásában');
define('_AUTHORDEL','Szerző törlése');
define('_PUBLISHEDSTORIES','Ez a szerző a következő cikkeket publikálta');
define('_SELECTNEWADMIN','Válassz ki egy új admint a jogok kiadásához');
define('_GODNOTDEL','*(A GOD admin nem törölhető, csak szerkeszthető)');
define('_MAINACCOUNT','God Admin*');
define('_USERS','Tagok');

// banners.php
define('_BANNERSADMIN','Reklámcsík adminisztráció');
define('_DELETEBANNER','Banner törlése');
define('_SURETODELBANNER','Biztos törölni akarod a bannert?');
define('_EDITBANNER','Banner módosítása');

// blocks.php
define('_BLOCKSADMIN','Blokkok adminisztrálása');
define('_CENTER','Középre');
define('_CENTERUP','Középre fel');
define('_CENTERDOWN','Középre le');
define('_BLOCKFILE','(Blokk fájl)');
define('_BLOCKFILE2','FÁJL');
define('_BLOCKSYSTEM','RENDSZER');
define('_ADDNEWBLOCK','Új blokk hozzáadása');
define('_RSSFILE','RSS/RDF fájl URL-je');
define('_ONLYHEADLINES','(Csak átvett cikkekhez)');
define('_REFRESHTIME','Frissítés ideje');
define('_CREATEBLOCK','Létrehozás');
define('_EDITBLOCK','Szerkesztés');
define('_BLOCK','Blokk');
define('_SAVEBLOCK','Mentés');
define('_BLOCKACTIVATION','Blokk bekapcsolása');
define('_BLOCKPREVIEW','Blokk:');
define('_WANT2ACTIVATE','Be akarod kapcsolni ennek a blokknak a megjelenítését?');
define('_ARESUREDELBLOCK','Biztos, hogy törölni akarod ezt a blokkot:');
define('_BLOCKUP','Blokk FEL');
define('_BLOCKDOWN','Blokk LE');
define('_BLOCKTOP','Move block to top');
define('_BLOCKBOTTOM','Move block to bottom');
define('_TITLE','Cím');
define('_POSITION','Pozíció');
define('_WEIGHT','Sorrend');
define('_STATUS','Állapot');
define('_LEFTBLOCK','Baloldali blokk');
define('_LEFT','Bal');
define('_RIGHTBLOCK','Jobboldali blokk');
define('_RIGHT','Jobb');
define('_TYPE','Típus');
define('_CUSTOM','Egyéb');
define('_FILENAME','Fájlnév');
define('_FILEINCLUDE','(Válassz egy saját blokkot a létrehozáshoz. A többi mező figyelmen kívül marad)');

// comments.php
define('_REMOVECOMMENTS','Hozzászólás törlése');
define('_SURETODELCOMMENTS','Biztso, hogy törölni szeretnéd a kiválasztott hozzászólást, valamint az összes többit, amely erre válaszul érkezett?');

// database.php
define('_SAVEDATABASE','Adatbázis kimentése');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Állapot');
define('_ACTIVATEPAGE','Aktiválod ezt az oldalt?');

// history.php
define('_EPHEMADMIN','Évfordulók adminisztrálás');
define('_ADDEPHEM','Új évforduló');
define('_EPHEMDESC','Évforduló leírása');
define('_EPHEMMAINT','Szervezés (szerkesztés/törlés):');
define('_EPHEMEDIT','Évforduló szerkesztése');
define('_EPHEMDELETE','Bejegyzés törlése');

// headlines.php
define('_RSSFAIL','Gond van a RSS fájl URL-jével');
define('_RSSTRYAGAIN','Kérjük ellenőrizd az URL-t és a RSS fájl nevét, majd próbáld meg újra.');
define('_RSSCONTENT','(RSS/RDF tartalom)');
define('_IFRSSWARNING','Ha kitöltöd az URL-t, csak az átvett tartalom jelenik meg, amit te írsz be, az nem!');
define('_SETUPHEADLINES','(Válaszd az Egyebet és írd be az URL-t, vagy válassz egy oldalt a listából friss hírlista letöltéséhez)');
define('_HEADLINESADMIN','Hírlista szerkesztése');
define('_ADDHEADLINE','Új oldal hozzáadása');
define('_EDITHEADLINE','Oldal szerkesztése');
define('_SURE2DELHEADLINE','FIGYELMEZTETÉS! Biztos, hogy törölni akarod ezt az oldalt?');

// messages.php
define('_MESSAGESADMIN','Üzenetek adminisztrálása');
define('_MESSAGETITLE','Cím');
define('_MESSAGECONTENT','Tartalom');
define('_ALLMESSAGES','Üzenetek átnézése');
define('_EDITMSG','Üzenet módosítása');
define('_ADDMSG','Üzenet hozzáadása');
define('_REMOVEMSG','Biztos törölni akarod ezt az üzenetet?');
define('_CHANGEDATE','Legyen a kezdő dátum a mai?');
define('_IFYOUACTIVE','(Ha most aktiválod ezt az üzenetet, a mai lesz a kezdődátuma)');

// modules.php
define('_MODULESADMIN','Modulok karbantartása');
define('_HOMECONFIG','Főoldal beállítása');
define('_MODULESADDONS','Modulok és kiegészítések');
define('_INHOME','In Home');
define('_MODULEHOMENOTE',' <b>-= FIGYELEM =-</b><br>A vastaggal jelölt modulok a honlapodnak részei.<br>Nem tudod deaktiválni vagy korlátozni, ha ez az alapértelmezett!<br>Ha törlöd a modul könyvtárát, a honlapod hibásan jelenik majd meg.<br>Továbbá ezt a modult a <i>Home</i> linkkel helyettesítettem a modulblokkban.');
define('_PUTINHOME','Put in Home');
define('_SURETOCHANGEMOD','Biztos hogy meg akarod változtani a kezdőlapod erről:');
define('_NOTINMENU','[ <big><strong>&middot;</strong></big> ] means a module which name and link will not be visible in Modules Block');
define('_SHOWINMENU','Látható a modulok blokkban?');
define('_CUSTOMTITLE','Custom Title');
define('_MODULEEDIT','Modulok szerkesztése');
define('_VERSION','Verzió');
define('_UPGRADE','Upgrade to %s');
define('_DBSIZE','Adatbázis méret');
define('_CVS_EXPLAIN','Thru CVS you can recieve the latest builds of files very easily.<br /><b>BUT</b> the latest version of a file could have bugs since it is not an official release.<br />If you are familiar with PHP you can do an update of the files by clicking the link below.<br />Don\'t forget to make an backup first !!!');
define('_CVS_UPDATE','CVS fájlok frissítése');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','Feladó');
define('_STAFF','Munkatársak');
define('_NL_RECIPS','Címzettek');
define('_SUBSCRIBEDUSERS','Előfizető felhasználók');
define('_NL_ALLUSERS','Összes tag');
define('_NL_ADMINS','Adminisztrátorok');
define('_NL_REGARDS','Tisztelettel');
define('_DISCARD','Visszavonás');
define('_REVIEWTEXT','Kérlek nézd át és ellenőrizd a szövegedet:');
define('_MANYUSERSNOTE','WARNING! There are many users that will receive this text. Please wait until the script finish the operation. This can take some minutes to complete!');
define('_NL_NOUSERS','Ehhez a hirlevélhez kiválasztott csoport tagjainak száma nulla.<br /> Kérlek menj vissza és válassz egy másik csoportot');
define('_NUSERWILLRECEIVE','A felhasználóknak kézbesítésre kerül a hírlevél.');
define('_NLUNSUBSCRIBE',"We sent you this message because you have selected to receive newsletters from our site\n\nYou can choose to unsubscribe from our mailings at any time by following <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">this</a> link\n\nIf you would like further assistance, please send an email to <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">our administrator</a>");
define('_NEWSLETTERSENT','A felhasználóknak kézbesítésre kerül a hírlevél.');

// referers.php
define('_WHOLINKS','Ki linkeli be az oldalainkat?');
define('_DELETEREFERERS','Idelinkelő oldalak törlése');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Lábléc');
define('_DEBUG', 'Hibakeresés');
define('_SITECONFIG','A website beállításai');
define('_GENSITEINFO','Általános beállítások');
define('_SITENAME','Site neve');
define('_SITEURL','Oldal webcíme');
define('_SITELOGO','Oldal logója');
define('_SITESLOGAN','Site szlogen');
define('_STARTDATE','A weboldal indulásának időpontja');
define('_ADMINEMAIL','Adminisztrátor e-mail címe');
define('_ITEMSTOP','Cikkek száma a főoldalon');
define('_STORIESHOME','Cikkek száma a főoldalon');
define('_OLDSTORIES','cikk a Régebbi Cikkek boxban.');
define('_ALLOWANONPOST','Névtelen látogató beküldhet hírt?');
define('_DEFAULTTHEME','A weboldal alapértelmezett témája');
define('_SHOWSEC','Mutast a biztonsági kódot');
define('_TOOLTIPS','Show tooltips on designated fields');
define('_UM_TOGGLE','Engedélyezd a frissitési monitort');
define('_UM_EXPLAIN','This will retrieve two pieces of information from our website, dragonflycms.org: the current build of Dragonfly, and if there are any important messages that pertain to your version of Dragonfly. The only data sent to our site is your Dragonfly version number. We do <strong>not</strong> log these requests to our server.');
// maintenance
define('_MAINTENANCE','Karbantartás');
define('_MESSAGE','Üzenet');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','Többnyelvű opció');
define('_SELLANGUAGE','Válaszd ki a weboldal nyelvét');
define('_LOCALEFORMAT','Helyi időformátum');
define('_ACTMULTILINGUAL','Aktiváld a többnyelvü funkciót? ');
define('_ACTUSEFLAGS','Mutasd a zászlókat a legördülő lista helyett ? ');
// banners
define('_BANNERSOPT','Reklámcsíkok beállításai');
define('_ACTBANNERS','Aktiválod a reklámcsíkokat az oldalon?');
// footer
define('_FOOTERMSG','Lábléc üzenetei');
define('_FOOTERLINE1','Lábléc 1. sora');
define('_FOOTERLINE2','Lábléc 2. sora');
define('_FOOTERLINE3','Lábléc 3. sora');
// backend
define('_BACKENDCONF','Backend beállításai');
define('_BACKENDTITLE','Backend címe');
define('_BACKENDLANG','Backend nyelve');
// mail stories
define('_MAIL2ADMIN','Új cikkek elküldése az adminnak levélben');
define('_NOTIFYSUBMISSION','Elküldjük e-mailben az új cikkeket?');
define('_EMAIL2SENDMSG','Milyen e-mail címre?');
define('_EMAILSUBJECT','e-mail témája');
define('_EMAILMSG','e-mail szövege');
define('_EMAILFROM','Feladó');
// comments
define('_COMMENTSOPT','Hozzászólások beállításai');
define('_COMMENTSLIMIT','Maximális hossz bájtban');
define('_COMMENTSMOD','Hozzászólások moderálása');
define('_MODADMIN','Adminisztrátorok által');
define('_MODUSERS','Tagok által');
define('_NOMOD','Nincs moderálás');
// adminmenu
define('_GRAPHICOPT','Grafikai beállítások');
define('_BOTH','Mindkettő');
define('_GRAPHICAL','Grafikus');
define('_SIDEBLOCK','Sideblock');
// miscellaneous
define('_MISCOPT','Egyéb beállítások');
define('_ACTIVATEHTTPREF','Idelinkelő oldalak nyilvántartása?');
define('_MAXREF','Max. hány, az oldaladat linkelő oldal nyilvántartása?');
define('_COMMENTSPOLLS','Hozzászólások a szavazásoknál?');
define('_COMMENTSARTICLES','Aktiválod a megjegyzéseket a Cikkek-ben?');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','Cenzura opciók');
define('_CENSORMODE','Cenzor üzemmód');
define('_NOFILTERING','Szűrés nélkül');
define('_EXACTMATCH','Pontos eggyezés');
define('_MATCHBEG','Kezdő egyezés');
define('_MATCHANY','Egyezés bárhol a szövegben');
define('_CENSORREPLACE','Cseréld ki a cenzurázott szót a:');
// email
define('_EMAILOPTIONS','Options for email from Contact Module and Newsletter');
define('_ALLOW_HTML_EMAIL','Engedélyezem html email-t');
define('_USE_SMTP','Use SMTP for email instead of php');
define('_SMTP_HOST','Address of smtp host(smtp.example.com)');
define('_USE_SMTP_AUTH','Server requires SMTP authorization');
define('_SMTP_USER_NAME','SMTP felhasználónév');
define('_SMTP_USER_PASS','SMTP jelszó');

// cpg_adminmenu.php
define('_ADMINMENU','Adminisztrációs menü');
define('_ADMINLOGOUT','Kilépés');
define('_AMENU0','System');
define('_AMENU1','Általános');
define('_AMENU2','Tagok');
define('_AMENU3','Üzenetek');
define('_AMENU4','Fórumok');
define('_AMENU5','Információk');
define('_AMENU6','Linkek');
define('_AMENU7','Hirdetések');
define('_AMENU8','Multimédia');
define('_AMENU9','Modulok');
define('_BMENU1','Segítség');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','Beállítások');
define('_DATABASE','Adatbázis');
define('_BLOCKS','Blokkok');
define('_MODULES','Modulok');
define('_EDITADMINS','Szerző adatainak szerkesztése');
define('_MESSAGES','Üzenetek');
define('_BANNERS','Plakátok');
define('_HTTPREFERERS','HTTP utalások');
define('_EDITUSERS','Tagok');
define('_USERSCONFIG','Tagok beállításai');
define('_NEWSLETTER','Hírlevél');
define('_SUBMISSIONS','Jóváhagyásra váró tartalom');
define('_ADDSTORY','Új cikk');
define('_TOPICS','Témák');
define('_ADMPOLLS','Szavazások');
define('_EPHEMERIDS','Évfordulók');
define('_REVIEWS','Ismertetők');
define('_ENCYCLOPEDIA','Encyclopedia');
define('_SURVEYS','Szavazások');
define('_SECTIONS','Szekciók');
define('_ARTICLES','cikk');
define('_FAQ','GYIK/FAQ');
define('_DOWNLOAD','Letöltés');
define('_WEBLINKS','Linkek');
define('_CONTENT','Tartalom');
define('_SYSINFO','System Info');
define('_REPORTABUG','Hiba jelentése');
//coppermine admin
define('_W_INSTALL','Melyik telepítés?');
define('_W_PAGE','Melyik Oldal?');
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
define('_ERROR','HIBA');
define('_SEC_ERROR','Biztonsági hiba');
define('_ERROR_NOT_SET','%s nincs beállítva');
define('_ERROR_NO_POST','Posting from another host is disallowed...');
define('_ERROR_NO_GET','A GET kérés ehhez a funkcióhoz nem megengedett...');
define('_ERROR_BAD_CHAR','The characters that you tried to include in your %s request are forbidden...');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','Rossz linken keresztül próbáltál a weboldalhoz hozzáférni...');
define('_ERROR_NONE_TO_DISPLAY','Nincs megjelenitendő %s');
define('_ERROR_DELETE_CONFBiztos hogy törölni akarod: %s?');
define('_ERROR_NO_EXIST','%s nem létezik');
define('_ERROR_ALREADYEXIST','%s már létezik');
define('_TASK_COMPLETED','Művelet végrehajtva!');
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
