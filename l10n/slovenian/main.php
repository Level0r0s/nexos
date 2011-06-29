<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/slovenian/main.php,v $
  $Revision: 9.32 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:55 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','sl');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%d.%m.%Y');
define('_DATESTRING2','%A, %d.%m.');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Naslednja stran');
define('_PREVIOUSPAGE','Prejšnja stran');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Iskanje');
define('_LOGIN','Prijava');
define('_WRITES','Napisal');
define('_POSTEDON','Poslano');
define('_NICKNAME','Ime');
define('_PASSWORD','Geslo');
define('_WELCOMETO','Dobrodošli na');
define('_EDIT','Uredi');
define('_DELETE','Izbriši');
define('_POSTEDBY','Napisal je');
define('_READS','prebrano');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Nazaj</a>' : '<a href="javascript:history.go(-1)">Nazaj</a>').' ]');
define('_COMMENTS','komentarji');
define('_PASTARTICLES','Prejšnji članki');
define('_OLDERARTICLES','Starejši članki');
define('_BY','od');
define('_ON','objavljeno');
define('_LOGOUT','Odjava');
define('_WAITINGCONT','Vsebina na čakanju');
define('_WREVIEWS','Recenzije na čakanju');
define('_WLINKS','Povezave na čakanju');
define('_ONEDAY','Dan kot današnji...');
define('_ASREGISTERED','Niste registrirani? <a href="'.getlink('Your_Account&amp;file=register').'">Registrirajte se zdaj!</a>. Registrirani uporabniki imajo več privilegijev, kot npr.: spreminjanje izgleda strani po lastnem okusu, nastavitve komentarjev ter objavljanje člankov.');
define('_MENUFOR','Kazalo za');
define('_NOBIGSTORY','Danes ni bilo novih člankov.');
define('_BIGSTORY','Danes najbolj brani članek:');
define('_SURVEY','Anketa');
define('_POLLS','Ankete');
define('_PCOMMENTS','Komentarji:');
define('_RESULTS','Rezultati');
define('_HREADMORE','preberi več o tem...');
define('_CURRENTLY','Trenutno je(so)');
define('_GUESTS','obiskovalec(ev)');
define('_MEMBERS','član(ov) online.');
define('_YOUARELOGGED','Prijavljeni ste kot');
define('_YOUHAVE','Imate');
define('_PRIVATEMSG','zasebno(ih) sporočil-o.');
define('_YOUAREANON','Ste neregistrirani obiskovalec.<a href="'.getlink('Your_Account').'">Registrirajte se!</a>');
define('_NOTE','Opozorilo:');
define('_ADMIN','Administrator:');
define('_WERECEIVED','Imamo');
define('_PAGESVIEWS','pregledov strani od');
define('_TOPIC','Tema');
define('_UDOWNLOADS','Downloadov');
define('_VOTE','Glas');
define('_VOTES','Glasov');
define('_MVIEWADMIN','Vidijo: samo administratorji');
define('_MVIEWUSERS','Vidijo: samo člani');
define('_MVIEWANON','Vidijo: samo obiskovalci');
define('_MVIEWALL','Vidijo: vsi');
define('_EXPIRELESSHOUR','Preteče: v manj kot 1h');
define('_EXPIREIN','Preteče čez');
define('_UNLIMITED','Neomejeno');
define('_HOURS','Ur');
define('_RSSPROBLEM','Trenutno imamo težave z naslovnico (headline) s te strani');
define('_SELECTLANGUAGE','Izberite jezik');
define('_SELECTGUILANG','Izberite jezik uporabniškega vmesnika:');
define('_NONE','Ni');
define('_BLOCKPROBLEM','<center>Trenutno imamo težave s tem blokom.</center>');
define('_BLOCKPROBLEM2','<center>Ta blok je trenutno brez vsebine.</center>');
define('_MODULENOTACTIVE','Žal, ta modul ni aktiven.');
define('_NOACTIVEMODULES','Neaktivni moduli');
define('_MODULENOEXIST','Žal, ta datoteka, %s, na obstaja');
define('_FORADMINTESTS','(za Administratorjevo testiranje)');
define('_BBFORUMS','Forumi');
define('_ACCESSDENIED','Dostop zavrnjen');
define('_RESTRICTEDAREA','Dostop v to območje ni dovoljen!');
define('_MODULEUSERS','Žal je ta del naših strani namenjen <i>samo registriranim uporabnikom.</i><br /><br />Lahko se registrirate brezplačno, če kliknete <a href="'.getlink('Your_Account&amp;file=register').'">tukaj</a>, nato boste do tega področja <br>lahko dostopali brez omejitev. Hvala.<br><br>');
define('_MODULEUSERS2','<a href="'.getlink('Your_Account&amp;file=register').'"><b>Registrirajte se!</b></a> Kot registriran uporabnik, boste lahko dostopali na to območje naših strani.<br /><br />Hvala za razumevanje.');
define('_MODULESADMINS','Žal je ta del naših strani namenjen <i>samo administratorjem</i><br /><br />');
define('_MODULESGROUPS','potreben dostop skupine');
define('_HOME','Domov');
define('_HOMEPROBLEM','Izgleda, da nam je izginila domača stran!!!');
define('_ADDAHOME','Izberi nov modul za domačo stran');
define('_HOMEPROBLEMUSER','Trenutno nam sistem povzroča težave.<br />Prosimo, oglasite se kasneje spet.<br />Hvala.');
define('_MORENEWS','Več v oddelku Novice');
define('_ALLCATEGORIES','Vse kategorije');
define('_SPAMGUARDPROTECTED','SpamGuard sistem je onemogočil pošiljanje tega e-maila.');
define('_M_CHARS','Največ: %s znakov');

define('_SYS_MESSAGE','Sistemsko sporočilo');
define('_SYS_MESSAGES','Sistemska sporočila');
define('_SYS_MAINTENANCE','Sistem deluje v načinu za vzdrževanje');
define('_SYS_DEMO','<b>Demo administrativno upravljanje.</b><br />V tem načinu ne moreš spreminjati podatkov v podatkovni bazi.<br /><a href="'.adminlink('logout').'">Odjavi se!</a>');

define('_DATE','Datum');
define('_HOUR','Ura');
define('_UMONTH','Mesec');
define('_YEAR','Leto');
define('_JANUARY','Januar');
define('_FEBRUARY','Februar');
define('_MARCH','Marec');
define('_APRIL','April');
define('_MAY','Maj');
define('_JUNE','Junij');
define('_JULY','Julij');
define('_AUGUST','Avgust');
define('_SEPTEMBER','September');
define('_OCTOBER','Oktober');
define('_NOVEMBER','November');
define('_DECEMBER','December');

define('_MONDAY','Ponedeljek');
define('_TUESDAY','Torek');
define('_WEDNESDAY','Sreda');
define('_THURSDAY','Četrtek');
define('_FRIDAY','Petek');
define('_SATURDAY','Sobota');
define('_SUNDAY','Nedelja');

define('_ABR_MONDAY','Po');
define('_ABR_TUESDAY','To');
define('_ABR_WEDNESDAY','Sr');
define('_ABR_THURSDAY','Če');
define('_ABR_FRIDAY','Pe');
define('_ABR_SATURDAY','So');
define('_ABR_SUNDAY','Ne');

define('_BWEL','Dobrodošli');
define('_BPM','Zasebna sporočila');
define('_BUNREAD','Neprebrano');
define('_BREAD','Prebrano');
define('_BMEMP','Uporabniki');
define('_BLATEST','Zadnji');
define('_BTD','Novi danes');
define('_BYD','Novi včeraj');
define('_BOVER','Vsi');
define('_BVISIT','Prisotni');
define('_BVIS','Obiskovalci');
define('_BMEM','Člani');
define('_BTT','Vsi');
define('_BON','Trenutno prisotni');
define('_BREG','Registracija');
define('_BROADCAST','Pošiljanje javnega sporočila');
define('_BROADCASTFROM','Javno sporočilo od:');
define('_TURNOFFMSG','Izključi javna sporočila');
define('_JOURNAL','Dnevnik');
define('_READMYJOURNAL','Beri dnevnik ');
define('_ADD','Dodaj');
define('_YES','Da');
define('_NO','Ne');
define('_INVISIBLEMODULES','Nevidni moduli');
define('_ACTIVEBUTNOTSEE','(Aktivne, a nevidne povezave)');
define('_BOTS','Boti');

define('_UM','Dragonfly monitor posodabljanja');
define('_UM_F','Povezava s strežnikom za posodabljanje ni uspela. Prosimo poskusite kasneje.');
define('_UM_G','Uporabljate zadnjo verzijo Dragonfly sistema.');
define('_UM_R','Prosimo <a href="%2$s" target="_blank">nadgradite</a> v Dragonfly %1$s');

define('_TEAM','Osebje.');
define('_LINKAPPROVEDMSG','Čestitamo! Povezava, ki ste nam jo poslali, je bila odobrena. Prosimo, da tudi sami dodate povezavo do naše strani in nas o tem obvestite.');
define('_MODREQLINKS','Mod. povezave');
define('_BROKENLINKS','Mrtve povezave');
define('_MODREQDOWN','Mod. downloadi');
define('_BROKENDOWN','Mrtvi downloadi');
define('_PAGEGENERATION','Prikaz strani:');
define('_SECONDS','sekund');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Stran generirana v %1$s sekundah in %2$s DB povezavah v %3$s sekundah');
define('_YOUHAVEONEMSG','Imate 1 novo zasebno sporočilo');
define('_NEWPMSG','Nova zasebna sporočila');
define('_CONTRIBUTEDBY','Prispeval(a)');
define('_CHAT','Klepet');
define('_REGISTERED','Registrirani');
define('_CHATGUESTS','Gostje');
define('_USERSTALKINGNOW','Uporabniki, ki klepetajo');
define('_ENTERTOCHAT','Pridruži se klepetu');
define('_CHATROOMS','Razpoložljive sobe');
define('_ALLTOPICS','Vse teme');
define('_ASSOTOPIC','Podobne teme');
define('_HELLO','Pozdravljen(a)');
define('_ALL','Vsi');
define('_URL','URL');
define('_SUBJECT','Naslov');
define('_PREVIEW','Preglej');
define('_SEND','Pošlji');
define('_ANONYMOUS','Anonimni');
define('_BREADCRUMB', 'Breadcrumb Delimiter, appears in page titles between the words');
define('_BC_DELIM',isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&gt;&gt;');
define('_RESET','Resetiraj');
define('_AT','ob');
define('_LASTMSGS','Zadnjih %s Forum Sporočil');
define('_LASTPOSTBY','Zadnje sporočilo od %1$s v %2$s na %3$s');
define('_PRINTER','Prilagojeno za izpis');

define('_CREDITS_TITLE','Krediti');
define('_CREDITS_PRODUCT','Izdelek');
define('_CREDITS_DESC','Opis');
define('_CREDITS_AUTHORS','Avtor');

define('_PP_TITLE','Privatno sporočilo');
define('_PP_MODIFY','Spremeni sporočilo');

define('_SENDEREMAIL','E-mail pošiljatelja');
define('_SENDERNAME','Ime pošiljatelja');
define('_RECIPIENTNAME','Ime prejemnika');
define('_RECIPIENTEMAIL','Email prejemnika');

define('_REASONS_0','Kot je');
define('_REASONS_1','Končane teme');
define('_REASONS_2','Flamebait');
define('_REASONS_3','Troll');
define('_REASONS_4','Redundant');
define('_REASONS_5','Insightful');
define('_REASONS_6','Interesantno');
define('_REASONS_7','Informativno');
define('_REASONS_8','Smešno');
define('_REASONS_9','Overrated');
define('_REASONS_10','Underrated');

/* My Account Tools Block */
define('_TB_BLOCK','My Account Tools');
define('_TB_TASKS','Naloge');
define('_TB_INFO','Informacije');
define('_TB_PROFILE_INFO','Moj javni profil');
define('_TB_EDIT_PROFILE','Moje informacije profila');
define('_TB_EDIT_REG','Moje podrobnosti registracije');
define('_TB_EDIT_PRIVATE','Moje privatne informacije');
define('_TB_EDIT_AVATAR','Moja podoba');
define('_TB_DELETE','Izbriši moj račun');
define('_TB_CONFIG','Konfiguracija');
define('_TB_EDIT_PREFS','Moje nastavitve');
define('_TB_EDIT_HOME','Namestitve za mojo domačo stran');
define('_TB_EDIT_COMM','Namestitve za moje komentarje');
define('_TB_PERSONAL','Osebno');
define('_TB_PERSONAL_GALLERY','Moja galerija');
define('_TB_PERSONAL_JOURNAL','Moj blok');
define('_TB_PRIVMSGS','Zasebna sporočila');
define('_TB_PRIVMSGS_INBOX','Prejeto');
define('_TB_PRIVMSGS_OUTBOX','Poslano');
define('_TB_PRIVMSGS_SENTBOX','V pošiljanju');
define('_TB_PRIVMSGS_SAVEBOX','Hranjeno');
define('_TB_PRIVMSGS_SEND','Pošlji sporočilo');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','Informacije o uporabniku');
define('_SECURITYCODE','Varnostna koda');
define('_TYPESECCODE','Vnesi kodo');
define('_MEMBERSOPTIONS','Opcije za člane');
define('_READSEND','Preberite svoja zasebna sporočila. Pošiljanje sporočil drugim.');
define('_INBOX','Prejeto');
define('_NEW','Novo');
define('_ACCOUNTOPTIONS','Vaš račun. Spremenite nastavitve in preberite svoja sporočila.');
define('_LOGOUTACCT','Odjavite se s tega uporabniškega računa.');
define('_LOGOUTADMINACCT','Odjavite se z admin računa.');
define('_BLOGIN','Vaš račun');
define('_BFLOGIN','Profil foruma');
define('_BHID','Skrito');
define('_WHOWHERE','Kdo je kje');
define('_STAFFONL','Prijavljeno osebje');
define('_STAFFNONE','Noben član osebja ni prijavljen!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Skupnost');
define('_BlogsLANG','Blogs');
define('_ContentLANG','Vsebina');
define('_coppermineLANG','Fotogralerija');
define('_CPGlangLANG','Pomoč pri prevajanju');
define('_DownloadsLANG','Downloads');
define('_EncyclopediaLANG','Enciklopedija');
define('_ForumsLANG','Forumi');
define('_ContactLANG','Kontaktiraj nas');
define('_FAQLANG','Pogosto zastavljena vprašanja - pomoč');
define('_Members_ListLANG','Seznam članov');
define('_NewsLANG','Novice');
define('_ReviewsLANG','Ocene');
define('_SearchLANG','Išči');
define('_StatisticsLANG','Statistika');
define('_Stories_ArchiveLANG','Arhiv člankov');
define('_Submit_NewsLANG','Pošlji novice');
define('_SurveysLANG','Ankete');
define('_TopLANG', 'Najboljših '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Teme');
define('_Private_MessagesLANG','Moja zasebna sporočila');
define('_Tell_a_FriendLANG','Povej prijatelju');
define('_Web_LinksLANG','Povezave');
define('_Your_AccountLANG','Moj račun');
define('_CPG_EventsLANG','Calendar');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Languages!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Groups');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Headlines');

define('_COMMUNICATION','Komunikacija');
define('_FRIENDS','Prijatelji');
define('_STORE','Store');
define('_PRODUCTS','Izdelki');
define('_DONATE','Donate');
define('_HELP','Help');
define('_GALLERIES','Galerije');
define('_DOCS','Dokumentacija');
define('_RULES','Dokumentacija');
define('_MENU','Main Menu');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','Vi <strong>ste</strong> vpisani v<br />naše obveščevanje');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','Vi <strong>niste</strong> vpisani v<br />naše obveščevanje');
define('_NEWSLETTERBLOCKREGISTER','Postati morate <br /><strong>registriran uporabnik</strong><br />da boste dobili naše obveščevanje');
define('_NEWSLETTERBLOCKSUBSCRIBE','Vpiši me');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Izpiši me');
define('_NEWSLETTERBLOCKREGISTERNOW','Registriraj sedaj!');
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
define('_SAVECHANGES','Shrani spremembe');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Jezik');
define('_FUNCTIONS','Funkcije');
define('_SHOW','Pokai');
define('_TO','Prejemnik');
define('_DAY','Dan');
define('_LAST','Zadnji');
define('_ACTIVE','Aktiven');
define('_DEACTIVATE','Deaktiviraj');
define('_INACTIVE','Neaktiven');
define('_ACTIVATE','Aktiviraj');
define('_ACTIVATE2','Aktiviraj?');
define('_VIEW','Vidijo');
define('_VIEWPRIV','Kdo to lahko vidi?');
define('_MVADMIN','Samo administratorji');
define('_MVUSERS','Samo člani');
define('_MVANON','Samo obiskovalci');
define('_MVALL','Vsi uporabniki');
define('_IMAGE','Slika');
define('_GO','Pojdi!');
define('_OPTION','Opcija');
define('_CATEGORY','Kategorija');
define('_SUBCATEGORY','Sub-Category');
define('_ID','ifra');
define('_EXPIRATION','Veljavnost');
define('_DAYS','dni');
define('_WARNING','Opozorilo');
define('_POLLTITLE','Naslov ankete');
define('_POLLEACHFIELD','Vsako mono izbiro vnesite v posebno polje');
define('_ADDCATEGORY','Dodaj novo kategorijo');
define('_PAGEBREAK','Če elite članek na več straneh napiite <b>&lt;!--pagebreak--&gt;</b> tam kjer elite prelom strani.');
define('_SIGNATURE','Podpis');
define('_DESCRIPTION','Opis');
define('_EDITCATEGORY','Uredi kategorijo');
define('_IN','v');
define('_DESCRIPTION255','Opis: (255 znakov max)');
define('_MODCATEGORY','Uredi kategorijo');
define('_SUBMITTER','Poiljatelj');
define('_VISIT','Običi');
define('_EXTENDEDTEXT','Razirjeni tekst');
define('_CHECKCATEGORIES','Preveri kategorije');
define('_INCLUDESUBCATEGORIES','(vključi pod-kategorije)');
define('_CHECKSUBCATEGORIES','Preveri pod-kategorije');
define('_VALIDATELINKS','Verificiraj povezave');
define('_FAILED','Neuspelo!');
define('_BEPATIENT','(prosim bodite potrpeljivi)');
define('_VALIDATINGCAT','Preglejujem kategorije (in vse pod-kategorije)');
define('_VALIDATINGSUBCAT','Preglejujem pod-kategorije');
define('_OK','V redu');
define('_CHECK','Preveri');
define('_IGNORE','Ignoriraj');
define('_HITS','Prebrano');
define('_FILESIZE', 'File Size');
define("_EZTHEREIS","There are");
define("_EZSUBCAT","sub-categories");
define("_EZATTACHEDTOCAT","under this category");
define("_EZBROKENLINKS","Broken Links");
define("_DELEZLINKCATWARNING","WARNING : Are you sure you want to delete this category ?<br /> You will delete all sub-categories and attached links as well !");

// index.php
define('_DEFHOMEMODULE','Privzet modul na glavni strani');
define('_MODULEINHOME','Naložen modul na strani:');
define('_CHANGE','Spremeni');
define('_WHOSONLINE','Kdo je online');
define('_NP_ADMIN','Beležka');
define('_NP_LOCKED','Beležka je zaklenjena<br />Samo glavni administrator (super uporabnik) jo lahko odklene');
define('_NP_SAVE','Shrani zapiske');
define('_NP_UNLOCK','Odkleni beležko');
define('_NP_LOCK','Zakleni beležko');
// news
define('_STICKY','Sticky Articles');
define('_ARTICLEUP','Pomakni članek gor');
define('_ARTICLEDOWN','Pomakni članek dol');
define('_UNSTICK','Unstick');
define('_STICK','Sticky');
define('_AUTOMATEDARTICLES','Programirani članki');
define('_STORYID','ID članka');
define('_CURRENTPOLL','Trenutna anketa');

// admin.php
define('_ADMINISTRATION','Administracija');
define('_NOADMINYET','Ni še nobenega administrativnega računa, nadaljujte da naredite super uporabnika...');
define('_CREATEUSERDATA','Želite da naredim normalnega uporabnika z enakim uporabniškim imenom?');
define('_ADMINLOGIN','Vstop v administracijski sistem');
define('_ADMINID','ID administratorja');
define('_EMAIL','E-mail');
define('_SUBMIT','Pošlji');
define('_YOUARELOGGEDOUT','Odjavljeni ste(logged out)!');
define('_PASSWDNOMATCH','Vaa gesla nista identična, vrnite se in poizkusite ponovno');
define('_LOGIN_REMEMBERME','Zapomni si me?');
define('_ADMINMENU_LOGOUT','Menu odjave administratorja');
define('_PASSWORD_MALFORMED','Prosim vključite najmanj eno številko, eno veliko črko v vaše geslo');

// admins.php
define('_AUTHORSADMIN','Administracija avtorjev');
define('_NAME','Ime');
define('_REQUIRED','(obvezno)');
define('_MODIFYINFO','Uredi podatke');
define('_DELAUTHOR','Izbrii avtorja');
define('_ADDAUTHOR','Dodaj novega administratorja');
define('_PERMISSIONS','Dovoljenja');
define('_SUPERUSER','Super uporabnik');
define('_SUPERWARNING','OPOZORILO: Če izberete Super uporabnik, bo le-ta imel polni pristop(100%)!');
define('_ADDAUTHOR2','Dodaj avtorja');
define('_RETYPEPASSWD','Ponovi geslo');
define('_FORCHANGES','(Samo za spremembe)');
define('_COMPLETEFIELDS','Izpolniti morate vsa obvezna polja');
define('_CREATIONERROR','Napaka pri kreiranju avtorja');
define('_AUTHORDEL','Izbrii avtorja');
define('_PUBLISHEDSTORIES','Ta administrator je objavil članke');
define('_SELECTNEWADMIN','Izberite new admin da ga ponovno opredelite');
define('_GODNOTDEL','The super user cannot be deleted!');
define('_MAINACCOUNT','Super uporabnik*');
define('_USERS','Člani');

// banners.php
define('_BANNERSADMIN','Administracija bannerjev');
define('_DELETEBANNER','Izbriši pasico');
define('_SURETODELBANNER','Ste prepričani izbrisati pasico?');
define('_EDITBANNER','Uredi pasico');

// blocks.php
define('_BLOCKSADMIN','Administracija blokov');
define('_CENTER','Sredina');
define('_CENTERUP','Sredina zgoraj');
define('_CENTERDOWN','Sredina spodaj');
define('_BLOCKFILE','(Datoteka Bloka)');
define('_BLOCKFILE2','DATOTEKA');
define('_BLOCKSYSTEM','SISTEM');
define('_ADDNEWBLOCK','Dodaj nov blok');
define('_RSSFILE','URL datoteke RSS/RDF');
define('_ONLYHEADLINES','(Samo za Headlines)');
define('_REFRESHTIME','Čas osveevanja');
define('_CREATEBLOCK','Izdelaj blok');
define('_EDITBLOCK','Uredi blok');
define('_BLOCK','Blok');
define('_SAVEBLOCK','Shrani blok');
define('_BLOCKACTIVATION','Aktivacija bloka');
define('_BLOCKPREVIEW','to je pregled bloka');
define('_WANT2ACTIVATE','Ali elite aktivirati ta blok?');
define('_ARESUREDELBLOCK','Ali ste sigurni da elite izbrisati ta blok?');
define('_BLOCKUP','Blok GOR');
define('_BLOCKDOWN','Blok DOL');
define('_BLOCKTOP','Move block to top');
define('_BLOCKBOTTOM','Move block to bottom');
define('_TITLE','Naslov');
define('_POSITION','Pozicija');
define('_WEIGHT','Tea');
define('_STATUS','Status');
define('_LEFTBLOCK','Levi blok');
define('_LEFT','Levo');
define('_RIGHTBLOCK','Desni blok');
define('_RIGHT','Desno');
define('_TYPE','Tip');
define('_CUSTOM','Custom');
define('_FILENAME','Ime datoteke');
define('_FILEINCLUDE','(Izberite blok za priključitev. Vsa ostala polja bodo ignorirana)');

// comments.php
define('_REMOVECOMMENTS','Izbriši komentarje');
define('_SURETODELCOMMENTS','Ali ste sigurni da elite izbrisati izbrani komentar in vse njegove odgovore?');

// database.php
define('_SAVEDATABASE','Varnostna kopija Baze');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Trenutni status');
define('_ACTIVATEPAGE','Aktiviraj to stran?');

// history.php
define('_EPHEMADMIN','Administracija Enkrat na dananji dan');
define('_ADDEPHEM','Dodaj nov');
define('_EPHEMDESC','Opis');
define('_EPHEMMAINT','Urejanje (Uredi/Izbrii):');
define('_EPHEMEDIT','Uredi');
define('_EPHEMDELETE','Izbriši vnos');

// headlines.php
define('_RSSFAIL','Problem z naslovom RSS datoteke');
define('_RSSTRYAGAIN','Preverite naslov in ime RSS datoteke in poizkusite ponovno.');
define('_RSSCONTENT','(RSS/RDF vsebina)');
define('_IFRSSWARNING','Če vpiete URL vsebina ki jo napiete ne bo prikazana!');
define('_SETUPHEADLINES','(Izberite Custom in vpiite URL ali samo selektirajte stran s popisa s katere naj se vzema naslovnica)');
define('_HEADLINESADMIN','Administracija naslovnice');
define('_ADDHEADLINE','Dodaj naslovnico');
define('_EDITHEADLINE','Uredi naslovnico');
define('_SURE2DELHEADLINE','OPOZORilo: Ali ste sigurni da elite izbrisati to naslovnico?');

// messages.php
define('_MESSAGESADMIN','Administracija sporočil');
define('_MESSAGETITLE','Naslov');
define('_MESSAGECONTENT','Vsebina');
define('_ALLMESSAGES','Pregled sporočil');
define('_EDITMSG','Uredi sporočilo');
define('_ADDMSG','Dodaj sporočilo');
define('_REMOVEMSG','Ste prepričani, da želite izbrisati to sporočilo?');
define('_CHANGEDATE','Spremeni datum vključitve na dananji?');
define('_IFYOUACTIVE','(Če sedaj aktivirate to sporočilo, bo datum vključitve dananji datum)');

// modules.php
define('_MODULESADMIN','Administracija modula');
define('_HOMECONFIG','Konfiguracija začetne strani');
define('_MODULESADDONS','Moduli in dodatki');
define('_INHOME','In Home');
define('_MODULEHOMENOTE','<b>-= OPOZORILO =-</b><br>Krepka pisava modula pomeni kater modul je aktiviran za prikaz na naslovnici.<br>Ne morete ga deaktivirati ali preprečiti ko je pod privzetem stanju!<br>Če izbrišete modulov direktorij boste videli napako v naslovnici.<br>Tako tudi da je tale modul bil nadomeščen z <i>Dom</i> povezavo v modulovem bloku.');
define('_PUTINHOME','Daj v naslovnico');
define('_SURETOCHANGEMOD','Ste prepričani spremeniti naslovnico z');
define('_NOTINMENU','[ <big><strong>&middot;</strong></big> ] pomeni katero ime in povezava modula ne bo prikazana v bloku');
define('_SHOWINMENU','Vidno v modulovem bloku');
define('_CUSTOMTITLE','Poljuben naslov');
define('_MODULEEDIT','Urejanje modulov');
define('_VERSION','Verzija');
define('_UPGRADE','Nadgradi v %s');
define('_DBSIZE','DB velikost');
define('_CVS_EXPLAIN','Zgleda da ima modul CVS direktorij. To pomeni začasna verzija sistema ki se nadgrajuje..<br />Preko CVSa lahko dobite najnovejšo verzijo datoteke in sistema. Tako nadgradite sistem z posodobitvijo na najlažji nači.<br /><b>AMPAK</b> najnovejša verzija lahko vsebuje tudi hrošče ker ni POPOLNA v izidu verzije sistema.<br />Če ste seznanjeni z PHPjem lahko naredite sami kakšno nadgradnjo in datoteko popravite z klikom na naslednjo povezavo<br />Ne pozabite narediti kakšne varnostne kopije sistema in baze !!!');
define('_CVS_UPDATE','Nadgradi CVS datoteke');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','Od');
define('_STAFF','Osebje');
define('_NL_RECIPS','Prejemniki');
define('_SUBSCRIBEDUSERS','Naročniki');
define('_NL_ALLUSERS','Vsi člani');
define('_NL_ADMINS','Administratorji');
define('_NL_REGARDS','Best Regards');
define('_DISCARD','Odvrži');
define('_REVIEWTEXT','Prosim preglejte:');
define('_MANYUSERSNOTE','OPOZORILO! Veliko ljudi bo prejelo tekst. Prosim počakajte dokler skripta ne konča naloge. To bi lahko trajalo tudi nekaj minut!');
define('_NL_NOUSERS','Skupina za dobitev novic nima uporabnikov<br />Prosim pojdite nazaj in izberite drugo skupino');
define('_NUSERWILLRECEIVE','Naročniki bodo prejeli to Pismo z novicami.');
define('_NLUNSUBSCRIBE',"We sent you this message because you have selected to receive newsletters from our site\n\nYou can choose to unsubscribe from our mailings at any time by following <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">this</a> link\n\nIf you would like further assistance, please send an email to <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">our administrator</a>");
define('_NEWSLETTERSENT','Pismo z novicami je poslano.');

// referers.php
define('_WHOLINKS','Od kje nam prihajajo obiski?');
define('_DELETEREFERERS','Izbrii listo');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Noga');
define('_DEBUG', 'Debug');
define('_SITECONFIG','Konfiguracija strani');
define('_GENSITEINFO','Splone informacije o strani');
define('_SITENAME','Ime strani');
define('_SITEURL','URL strani');
define('_SITELOGO','Logotip');
define('_SITESLOGAN','Slogan');
define('_STARTDATE','Datum aktiviranja strani');
define('_ADMINEMAIL','E-mail administratorja');
define('_ITEMSTOP','tevilo informacij v Top strani');
define('_STORIESHOME','tevilo člankov na začetni strani');
define('_OLDSTORIES','Članek v bloku starih člankov');
define('_ALLOWANONPOST','Ali dovolite anonimnim obiskovalcem da poiljajo članke?');
define('_DEFAULTTHEME','Glavna tema');
define('_SHOWSEC','Prikaži zaščitno kodo');
define('_TOOLTIPS','Show tooltips on designated fields');
define('_UM_TOGGLE','Uporabi nadzornika nadgraditev');
define('_UM_EXPLAIN','This will retrieve two pieces of information from our website, dragonflycms.org: the current build of Dragonfly, and if there are any important messages that pertain to your version of Dragonfly. The only data sent to our site is your Dragonfly version number. We do <strong>not</strong> log these requests to our server.');
// maintenance
define('_MAINTENANCE','Vzdrževanje');
define('_MESSAGE','Sporočilo');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','Večjezične opcije');
define('_SELLANGUAGE','Izberite glavni jezik');
define('_LOCALEFORMAT','Lokalni format časa');
define('_ACTMULTILINGUAL','Aktiviraj večjezične monosti? ');
define('_ACTUSEFLAGS','Prikai zastave namesto dropdown menujev? ');
// banners
define('_BANNERSOPT','Opcije za bannerje');
define('_ACTBANNERS','Aktivirajte bannerje?');
// footer
define('_FOOTERMSG','Sporočila v podnoju strani');
define('_FOOTERLINE1','1 vrsta');
define('_FOOTERLINE2','2 vrsta');
define('_FOOTERLINE3','3 vrsta');
// backend
define('_BACKENDCONF','Backend konfiguracija');
define('_BACKENDTITLE','Backend naslov');
define('_BACKENDLANG','Backend jezik');
// mail stories
define('_MAIL2ADMIN','Poljite administratorju vse članke po e-mailu');
define('_NOTIFYSUBMISSION','Obvestilo o prejemu člankov po e-mailu(za admina)?');
define('_EMAIL2SENDMSG','E-mail na katerega gre obvestilo');
define('_EMAILSUBJECT','E-mail zadeva');
define('_EMAILMSG','E-mail sporočilo');
define('_EMAILFROM','E-mail račun (od)');
// comments
define('_COMMENTSOPT','Opcije komentarja');
define('_COMMENTSLIMIT','MAX dolina v byt-ih');
define('_COMMENTSMOD','Spremembe komentarja');
define('_MODADMIN','Administratorjeve spremembe');
define('_MODUSERS','Uporabnikove spremembe');
define('_NOMOD','Ni sprememb');
// adminmenu
define('_GRAPHICOPT','Grafične opcije');
define('_BOTH','Both');
define('_GRAPHICAL','Grafično');
define('_SIDEBLOCK','Stranski blok');
// miscellaneous
define('_MISCOPT','Razne opcije');
define('_ACTIVATEHTTPREF','Aktiviraj HTTP obiske?');
define('_MAXREF','Koliko obiskov želite kot MAX?');
define('_COMMENTSPOLLS','Aktiviraj komentarje v anketah?');
define('_COMMENTSARTICLES','Aktiviraj komentarje v člankih?');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','Nastavitve cenzur');
define('_CENSORMODE','Način cenzur');
define('_NOFILTERING','Brez filtrov');
define('_EXACTMATCH','Natačno tako');
define('_MATCHBEG','Označi besedo na začetku');
define('_MATCHANY','Označi besedo kjerkoli v tekstu');
define('_CENSORREPLACE','Zamenjaj cenzurirano besedo z:');
// email
define('_EMAILOPTIONS','Options for email from Contact Module and Newsletter');
define('_ALLOW_HTML_EMAIL','Dovoli html email');
define('_USE_SMTP','Use SMTP for email instead of php');
define('_SMTP_HOST','Address of smtp host(smtp.example.com)');
define('_USE_SMTP_AUTH','Server requires SMTP authorization');
define('_SMTP_USER_NAME','SMTP uporabniško ime');
define('_SMTP_USER_PASS','SMTP geslo');

// cpg_adminmenu.php
define('_ADMINMENU','Administracijsko kazalo');
define('_ADMINLOGOUT','Izhod/odjava');
define('_AMENU0','System');
define('_AMENU1','Splošno');
define('_AMENU2','Člani');
define('_AMENU3','Sporočila');
define('_AMENU4','Forumi');
define('_AMENU5','Informativno');
define('_AMENU6','Linking');
define('_AMENU7','Komercialno');
define('_AMENU8','Multimedija');
define('_AMENU9','Moduli');
define('_BMENU1','Pomoč');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','Nastavitve sistema');
define('_DATABASE','Podatkovna baza');
define('_BLOCKS','Bloki');
define('_MODULES','Moduli');
define('_EDITADMINS','Spremeni administratorje');
define('_MESSAGES','Sporočila');
define('_BANNERS','Pasice');
define('_HTTPREFERERS','Od kod prihajajo obiskovalci');
define('_EDITUSERS','Spremeni članek');
define('_USERSCONFIG','Konfiguracija uporabnikov');
define('_NEWSLETTER','Pismo z novicami');
define('_SUBMISSIONS','Novo poslani članki');
define('_ADDSTORY','Dodaj članek');
define('_TOPICS','Teme');
define('_ADMPOLLS','Ankete');
define('_EPHEMERIDS','Nekoč davno...');
define('_REVIEWS','Recenzije');
define('_ENCYCLOPEDIA','Enciklopedija');
define('_SURVEYS','Ankete');
define('_SECTIONS','Oddelke');
define('_ARTICLES','Člankih');
define('_FAQ','FAQ');
define('_DOWNLOAD','Download');
define('_WEBLINKS','Povezave');
define('_CONTENT','Vsebina');
define('_SYSINFO','System Info');
define('_REPORTABUG','Povej o hrošču');
//coppermine admin
define('_W_INSTALL','Katera instalacija?');
define('_W_PAGE','Katera stran?');
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
define('_ERROR','NAPAKA');
define('_SEC_ERROR','Napaka zaščite');
define('_ERROR_NOT_SET','%s ni bilo poslano');
define('_ERROR_NO_POST','Posting from another host is disallowed...');
define('_ERROR_NO_GET','GET requests are not allowed for this function...');
define('_ERROR_BAD_CHAR','The characters that you tried to include in your %s request are forbidden...');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','You tried to access this page through a bad link...');
define('_ERROR_NONE_TO_DISPLAY','There are no %s to display');
define('_ERROR_DELETE_CONF','Are you sure that you want to delete %s?');
define('_ERROR_NO_EXIST','%s ne obstaja');
define('_ERROR_ALREADYEXIST','%s že obstaja');
define('_TASK_COMPLETED','Operacija končana!');
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
