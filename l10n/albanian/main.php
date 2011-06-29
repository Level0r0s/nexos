<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/albanian/main.php,v $
  $Revision: 9.33 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:44 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','sq');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %d %B %Y (%H:%M:%S)');
define('_DATESTRING2','%A, %B %d');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Faqja në vazhdim');
define('_PREVIOUSPAGE','Faqja e kaluar');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Kërko');
define('_LOGIN','Kyçu');
define('_WRITES','Shkruani');
define('_POSTEDON','Shenuar me');
define('_NICKNAME','Llagapi');
define('_PASSWORD','Fjalë kalimi');
define('_WELCOMETO','Mirese vini ne');
define('_EDIT','Shqyrto');
define('_DELETE','Fshij');
define('_POSTEDBY','Shenuar nga');
define('_READS','lexuar');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Kthehu Prapa</a>' : '<a href="javascript:history.go(-1)">Kthehu Prapa</a>').' ]');
define('_COMMENTS','komente');
define('_PASTARTICLES','Sheno Shenim');
define('_OLDERARTICLES','Shenimet e Vjetra');
define('_BY','nga');
define('_ON','ditën');
define('_LOGOUT','Dalja');
define('_WAITINGCONT','Koment ne pritje');
define('_WREVIEWS','Shqyrtime ne pritje');
define('_WLINKS','Nyje ne pritje');
define('_ONEDAY','Një ditë si Sot...');
define('_ASREGISTERED','Nuk keni akoma ident? Ju mund <a href="'.getlink('Your_Account&amp;file=register').'">te krijoni nje</a>.  Si antar i regjistruar ju keni disa perparesi te mira si zgjedhes i pamjes, shqyrtim i komenteve dhe mundesi per te postuar komentet tuaja.');
define('_MENUFOR','Menyja për');
define('_NOBIGSTORY','Nuk ka tregim me te madh per sot, akoma');
define('_BIGSTORY','Tregimi me i lexuar sot eshte:');
define('_SURVEY','Vezhgim');
define('_POLLS','Sondazhe');
define('_PCOMMENTS','Komente:');
define('_RESULTS','Rezultate');
define('_HREADMORE','lexo me teper');
define('_CURRENTLY','Momentalisht jane');
define('_GUESTS','misafir dhe');
define('_MEMBERS','antare online.');
define('_YOUARELOGGED','Jeni i kycur si');
define('_YOUHAVE','Keni');
define('_PRIVATEMSG','porosi privare.');
define('_YOUAREANON','Jeni vizitore. Mund te regjistroheni falas duke vazhduar <a href="'.getlink('Your_Account&amp;file=register').'">kete</a> nyje');
define('_NOTE','Sqarim:');
define('_ADMIN','Admini:');
define('_WERECEIVED','Cka ka pranuar');
define('_PAGESVIEWS','shikuar faqja qe nga');
define('_TOPIC','Tema');
define('_UDOWNLOADS','Shkarkime');
define('_VOTE','Vota!');
define('_VOTES','Vota');
define('_MVIEWADMIN','Te dukshme vetem per administratorin');
define('_MVIEWUSERS','Te dukshme vetem per antaret');
define('_MVIEWANON','Te dukshme vetem per moderatoret');
define('_MVIEWALL','Te dukshme per tegjith');
define('_EXPIRELESSHOUR','Skadon ne me pak se 1 orë');
define('_EXPIREIN','Skedon me');
define('_UNLIMITED','Pafund');
define('_HOURS','Orë');
define('_RSSPROBLEM','Duket se ka problem me RSS nga dritarja');
define('_SELECTLANGUAGE','Zgjedh Gjuhën');
define('_SELECTGUILANG','Zgjedh gjuhen e ballines');
define('_NONE','Asnjë');
define('_BLOCKPROBLEM','<center>Sic duket ka problem mete Teresi</center>');
define('_BLOCKPROBLEM2','<center>Kjo Teresi s\'ka asgje</center>');
define('_MODULENOTACTIVE','Na vie keq, por kjo Teresi eshte pamundesuar');
define('_NOACTIVEMODULES','Teresi jo aktive');
define('_MODULENOEXIST','Na vie keq, por faqja %s nuk ekziston');
define('_FORADMINTESTS','(per test nga Admini)');
define('_BBFORUMS','Forume');
define('_ACCESSDENIED','Hyrja e ndaluar');
define('_RESTRICTEDAREA','Jeni duke tentuar te hyni ne zonen e ndaluar.');
define('_MODULEUSERS','Më vjen keq, por kjo zonë e sitit është vetëm për Përdoruesit e  <i>Regjistruar</i><br /><br />Mund të regjistrohesh falas duke klikuar <a href="'.getlink('Your_Account&amp;file=register').'">këtu</a>, më pas do të mund<br />të hysh në këtë zonë pa pengesa. Faleminderit.<br /><br />');
define('_MODULEUSERS2','Regjistrohu FALAS duke klikuar <a href="'.getlink('Your_Account&amp;file=register').'">këtë</a> link, për të fituar të pasur lejen për të hyrë në këtë zonë.<br /><br />Faleminderit për mirëkuptimin');
define('_MODULESADMINS','Na vie keq, por kemi aprovuar  kete pjese per vetem per<br /><br /><i>antaret e regjistruar </i>. Falmenderit per mirkuptim');
define('_MODULESGROUPS','kerkuar grupi i lejuar');
define('_HOME','Ballina');
define('_HOMEPROBLEM','Sic duket ballina eshte zhdukur');
define('_ADDAHOME','Zhvillo nje modul bazik te ballines');
define('_HOMEPROBLEMUSER','Jemi duke perjetuar disa veshtersi me sistemin</br> Ju lutemi na vizitoni me vone perseri');
define('_MORENEWS','Me shum ne vendin e lajemve');
define('_ALLCATEGORIES','Tegjitha Katergorite');
define('_SPAMGUARDPROTECTED','SpamGuard ka kapur kete email ne dergim e siper');
define('_M_CHARS','Maksimumi: %s karaktere');

define('_SYS_MESSAGE','Mesazh i Sistemit');
define('_SYS_MESSAGES','Mesazh i Sistemit');
define('_SYS_MAINTENANCE','Jeni duke punuar nen modelin eksperimental');
define('_SYS_DEMO','Jeni duke punuar nen modelin demostrativ administrativ</br>Mund te e ndryshoni ne bazen e te dhenave<br /> <a href="'.adminlink('logout').'">Dalja!</a>');

define('_DATE','Data');
define('_HOUR','Ora');
define('_UMONTH','Muaji');
define('_YEAR','Viti');
define('_JANUARY','Janar');
define('_FEBRUARY','Shkurt');
define('_MARCH','Mars');
define('_APRIL','Prill');
define('_MAY','Maj');
define('_JUNE','Qershor');
define('_JULY','Korrik');
define('_AUGUST','Gusht');
define('_SEPTEMBER','Shtatore');
define('_OCTOBER','Tetore');
define('_NOVEMBER','Nëntore');
define('_DECEMBER','Dhjetore');

define('_MONDAY','E Hënë');
define('_TUESDAY','E Martë');
define('_WEDNESDAY','E Mërkurrë');
define('_THURSDAY','E Enjte');
define('_FRIDAY','E Premte');
define('_SATURDAY','E Shtunë');
define('_SUNDAY','e Dielë');
//three letter abbrev.
define('_ABR_MONDAY','Han');
define('_ABR_TUESDAY','Mar');
define('_ABR_WEDNESDAY','Mer');
define('_ABR_THURSDAY','Enj');
define('_ABR_FRIDAY','Pre');
define('_ABR_SATURDAY','Sht');
define('_ABR_SUNDAY','Die');

define('_BWEL','Mirësevini');
define('_BPM','Mesazhe Private');
define('_BUNREAD','Palexuar');
define('_BREAD','Lexuar');
define('_BMEMP','Anëtarë');
define('_BLATEST','I fundir');
define('_BTD','I ri(e) Sot');
define('_BYD','I ri(e) Dje');
define('_BOVER','Gjithsej');
define('_BVISIT','Persona Online');
define('_BVIS','Vizitor(ë)');
define('_BMEM','Anëtar(ë)');
define('_BTT','Gjithsej');
define('_BON','Tani Online');
define('_BREG','Regjister');
define('_BROADCAST','Broadcast Publik Mesazh');
define('_BROADCASTFROM','Mesazh Publik nga');
define('_TURNOFFMSG','Ndalo Mesazhet Publikë');
define('_JOURNAL','Ditore');
define('_READMYJOURNAL','Lexo Ditoren Time');
define('_ADD','Shto');
define('_YES','Po');
define('_NO','Jo');
define('_INVISIBLEMODULES','Modulë të Padukshëm');
define('_ACTIVEBUTNOTSEE','(Aktiv por me lidhje të padukshme)');
define('_BOTS','Bota (Bots)');

define('_UM','Dragonfly Monitor Freskimi');
define('_UM_F','Deshtoi ne kontaktim me sherbimin e freskimit. Tentoni perseri me vone.');
define('_UM_G','Jeni duke pergorur verzionin e fundit te Dragonfly');
define('_UM_R','Ju lutemi <a href="%2$s" target="_blank">Freskojeni</a> ne Dragonfly %1$s');

define('_TEAM','Ekipi');
define('_LINKAPPROVEDMSG','Pergezime! Nyja qe vendoset eshte pranuar, lidhuni prapa ke ne.');
define('_MODREQLINKS','Mod Nyjet');
define('_BROKENLINKS','Nyjet e thyera');
define('_MODREQDOWN','Mod. Shkarkime');
define('_BROKENDOWN','Shkarkimet e thyera');
define('_PAGEGENERATION','Gjenerimi i faqes');
define('_SECONDS','sekonda');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Gjenerimi i faqes ne %1$s sekonda dhe %2$s DB Zhvillimi ne %3$s sekonda');
define('_YOUHAVEONEMSG','Keni nje prosi te re private');
define('_NEWPMSG','Porosi e re private');
define('_CONTRIBUTEDBY','Derguar nga');
define('_CHAT','Chat');
define('_REGISTERED','Regjistruar');
define('_CHATGUESTS','Misafir');
define('_USERSTALKINGNOW','Antaret Flasin Tani');
define('_ENTERTOCHAT','Hyn ne Chat');
define('_CHATROOMS','Dhomat ekzistuese');
define('_ALLTOPICS','Tegjitha Temat');
define('_ASSOTOPIC','Temat e nderlidhura');
define('_HELLO','Tung');
define('_ALL','Tegjitha');
define('_URL','URL');
define('_SUBJECT','Tema');
define('_PREVIEW','Vrojto');
define('_SEND','Dergo');
define('_ANONYMOUS','Anonim');
define('_BREADCRUMB', 'Breadcrumb Delimiter, ndan fjalet ne tituj te faqeve');
define('_BC_DELIM',isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&gt;&gt;');
define('_RESET','Ribeje');
define('_AT','at');
define('_LASTMSGS','Last %s Forum Messages');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','Faqe e Stampueshme');

define('_CREDITS_TITLE','Programere');
define('_CREDITS_PRODUCT','Produkt');
define('_CREDITS_DESC','Pershkrim');
define('_CREDITS_AUTHORS','Autor(s)');

define('_PP_TITLE','Rregullat');
define('_PP_MODIFY','Shqyrto porosine');

define('_SENDEREMAIL','Email i Dërguesit');
define('_SENDERNAME','Emri i Dërguesit');
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
define('_TB_BLOCK','Veglat e llogarise');
define('_TB_TASKS','Detyrat');
define('_TB_INFO','Informata');
define('_TB_PROFILE_INFO','Profili publik');
define('_TB_EDIT_PROFILE','Informatat profile');
define('_TB_EDIT_REG','Detajet e regjistrimit');
define('_TB_EDIT_PRIVATE','Informatat private');
define('_TB_EDIT_AVATAR','Avatari');
define('_TB_DELETE','Fshije Llogarine');
define('_TB_CONFIG','Konfigurimi');
define('_TB_EDIT_PREFS','Deshirat');
define('_TB_EDIT_HOME','Te dhenat e ballines sime');
define('_TB_EDIT_COMM','Te dhenat e llogaris sime');
define('_TB_PERSONAL','Personale');
define('_TB_PERSONAL_GALLERY','Mia Foto Galeria');
define('_TB_PERSONAL_JOURNAL','Mia Blog-u im');
define('_TB_PRIVMSGS','Porosi Private');
define('_TB_PRIVMSGS_INBOX','Permbajtja');
define('_TB_PRIVMSGS_OUTBOX','Dalje');
define('_TB_PRIVMSGS_SENTBOX','Dergesa');
define('_TB_PRIVMSGS_SAVEBOX','Ruajtje');
define('_TB_PRIVMSGS_SEND','Dergo Porosi');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','Info te antarit');
define('_SECURITYCODE','Kodi i sigurimit');
define('_TYPESECCODE','Shkruaje Kodin');
define('_MEMBERSOPTIONS','Zgjedhjet e antareve');
define('_READSEND','Lexo porosit e mia private. Dego porosi tek te tjeret');
define('_INBOX','Ne kuti');
define('_NEW','Te ri');
define('_ACCOUNTOPTIONS','Llogaria Juaj, Ndrro mundesite dhe lexo mesazhet.');
define('_LOGOUTACCT','Largohu nga kjo llogari.');
define('_LOGOUTADMINACCT','Largohu nga Administrimi.');
define('_BLOGIN','Llogaria juaj');
define('_BFLOGIN','Profili forumit');
define('_BHID','Te fshehu');
define('_WHOWHERE','Kush ku eshte');
define('_STAFFONL','Stafi online');
define('_STAFFNONE','S\'ka antar stafi online!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Komuniteti');
define('_BlogsLANG','Blog');
define('_ContentLANG','Permbajtja');
define('_coppermineLANG','Foto Galeria');
define('_CPGlangLANG','Ndihme Perkthimi');
define('_DownloadsLANG','Shkarkime');
define('_EncyclopediaLANG','Enciklopedia');
define('_ForumsLANG','Komuniteti Forumet');
define('_ContactLANG','Na kontaktoni');
define('_FAQLANG','FAQ - Ndihme');
define('_Members_ListLANG','Lista Antareve');
define('_NewsLANG','Lajme');
define('_ReviewsLANG','Vrojtime');
define('_SearchLANG','Kerkime');
define('_StatisticsLANG','Statistika');
define('_Stories_ArchiveLANG','Arkivi i postimeve');
define('_Submit_NewsLANG','Posto Lajm');
define('_SurveysLANG','Vrojtime');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Tema');
define('_Private_MessagesLANG','Porosit e mia private');
define('_Tell_a_FriendLANG','Tregoj mikut');
define('_Web_LinksLANG','Nyje');
define('_Your_AccountLANG','Llogaria ime');
define('_CPG_EventsLANG','Kalendari');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Languages!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Groups');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Headlines');

define('_COMMUNICATION','Komunikimi');
define('_FRIENDS','Miq');
define('_STORE','Vendosur');
define('_PRODUCTS','Produkte');
define('_DONATE','Dhuro');
define('_HELP','Ndihme');
define('_GALLERIES','Galerite');
define('_DOCS','Dokumentimi');
define('_RULES','Rregullat & Rregullimet');
define('_MENU','Permbajtja');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','Ju <strong>jeni</strong> nenshkruan ne<br />listen ton lajmeruese');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','<strong>Nuk</strong> jeni nenshkruar<br />ne listen tone lajmeruese');
define('_NEWSLETTERBLOCKREGISTER','Duhet te jeni<br /><strong>antar i regjistruar</strong><br />te pranoni lajmerimet tona');
define('_NEWSLETTERBLOCKSUBSCRIBE','Nenshkruaj');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Ç\'nenshkruaj');
define('_NEWSLETTERBLOCKREGISTERNOW','Regjistrohu Tani!');
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
define('_SAVECHANGES','Ruaj Ndryshimet');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Gjuha');
define('_FUNCTIONS','Funksionet');
define('_SHOW','Trego');
define('_TO','Gjer');
define('_DAY','Dite');
define('_LAST','Se Fundi');
define('_ACTIVE','Aktiv');
define('_DEACTIVATE','Ç\'aktivizo');
define('_INACTIVE','Jo aktiv');
define('_ACTIVATE','Aktivizo');
define('_ACTIVATE2','E aktivizon?');
define('_VIEW','I dukshem per');
define('_VIEWPRIV','Tregojau kete');
define('_MVADMIN','Administratore Only');
define('_MVUSERS','Antare Only');
define('_MVANON','Vizitor Only');
define('_MVALL','Tegjitha vizitoret');
define('_IMAGE','Fotografite');
define('_GO','Vazho!');
define('_OPTION','Zgjedhje');
define('_CATEGORY','Kategori');
define('_SUBCATEGORY','Nen-kategori');
define('_ID','ID');
define('_EXPIRATION','Kalimi Afatit');
define('_DAYS','Dite');
define('_WARNING','Kujde');
define('_POLLTITLE','Titulli Sondazhit');
define('_POLLEACHFIELD','Vendo tegjitha zgjedhjet e mundeshme ne nje fushe');
define('_ADDCATEGORY','Vendo Kategori te Re');
define('_PAGEBREAK','Nese do faqe te shumfisht mund te shkruash <b>&lt;!--pagebreak--&gt;</b> ku don te shkurtosh');
define('_SIGNATURE','Nenshkrimi');
define('_DESCRIPTION','Pershkrimi');
define('_EDITCATEGORY','Shqyrto Kategori');
define('_IN','ne');
define('_DESCRIPTION255','Pershkrimi (255 simbole max)');
define('_MODCATEGORY','Modifiko Kategorine');
define('_SUBMITTER','Dergues');
define('_VISIT','Vizito');
define('_EXTENDEDTEXT','Tekst i Zgjeruar');
define('_CHECKCATEGORIES','Kontrollo Kategorite');
define('_INCLUDESUBCATEGORIES','(perfshin Nen-Kategori)');
define('_CHECKSUBCATEGORIES','Kontrollo Nen-Kategorite');
define('_VALIDATELINKS','Vlereso Nyjet');
define('_FAILED','Deshtoi!');
define('_BEPATIENT','(ke durim)');
define('_VALIDATINGCAT','Vleresimin e Kategorise (dhe gjith nenkategorive)');
define('_VALIDATINGSUBCAT','Vleresimi i Nen-Kategorive');
define('_OK','Mire!');
define('_CHECK','Kontrollo');
define('_IGNORE','Refuzo');
define('_HITS','Goditje');
define('_FILESIZE', 'Madhesia e dokumentit');
define("_EZTHEREIS","There are");
define("_EZSUBCAT","sub-categories");
define("_EZATTACHEDTOCAT","under this category");
define("_EZBROKENLINKS","Broken Links");
define("_DELEZLINKCATWARNING","WARNING : Are you sure you want to delete this category ?<br /> You will delete all sub-categories and attached links as well !");

// index.php
define('_DEFHOMEMODULE','Teresia e Ballines');
define('_MODULEINHOME','Teresite e mundeshme ne balline');
define('_CHANGE','Ndrysho');
define('_WHOSONLINE','Kush eshte online');
define('_NP_ADMIN','Notepad');
define('_NP_LOCKED','Notepad-i eshte mbylluar<br/> Vetem administratori i komunitetit mund te e hap.');
define('_NP_SAVE','Ruaj Shenimet');
define('_NP_UNLOCK','Hape Notepad-in');
define('_NP_LOCK','Mbylle Notepad-in');
// news
define('_STICKY','Artikuj Ngjitese');
define('_ARTICLEUP','Leviz artikullin lart');
define('_ARTICLEDOWN','Leviz artikullin poshte');
define('_UNSTICK','Hjeke ngjistin');
define('_STICK','Ngjites');
define('_AUTOMATEDARTICLES','Artikuj te grafikuar');
define('_STORYID','ID e shenimit');
define('_CURRENTPOLL','Vezhgimi Momental');

// admin.php
define('_ADMINISTRATION','Administrimi');
define('_NOADMINYET','Nuk ka llogari administratori akoma, vazhdo te krijosh shfrytezuesin kryesore...');
define('_CREATEUSERDATA','Doni te krijoni antare te rregullt me te dhenat te njejta?');
define('_ADMINLOGIN','Hyr ne menyn e administrimit');
define('_ADMINID','Llagapi');
define('_EMAIL','Emaili');
define('_SUBMIT','Dergo');
define('_YOUARELOGGEDOUT','Sistemi me suskes eshte çkyçur');
define('_PASSWDNOMATCH','Fjalkalimet nuk perputhen. Ju lutemi kthehuni prapa dhe rivendosi ato.');
define('_LOGIN_REMEMBERME','Me mbaj mend?');
define('_ADMINMENU_LOGOUT','Dalja nga menyja e Administrimit');
define('_PASSWORD_MALFORMED','Ju lutemi perfshini sepaku nje numer, nje shkronj te madhe dhe nje shkronj te vogle ne fjalkalimin tuaj');

// admins.php
define('_AUTHORSADMIN','Paneli i Administrimit');
define('_NAME','Asnje');
define('_REQUIRED','(kerkuar)');
define('_MODIFYINFO','Ndrysho Informatat');
define('_DELAUTHOR','Fshije Administratorin');
define('_ADDAUTHOR','Vendo Administrator te ri');
define('_PERMISSIONS','Lejet');
define('_SUPERUSER','Super Antare');
define('_SUPERWARNING','Kujdes: Nese Super Antari eshte i zgjedhur, administratori do te jet i ngritur me tegjitha lejet');
define('_ADDAUTHOR2','Vendo Administratore');
define('_RETYPEPASSWD','Rivendos Fjalkalimin');
define('_FORCHANGES','(Per Ndryshime Vetem)');
define('_COMPLETEFIELDS','Duhet te i mbushni tegjitha fushat e nevojshme');
define('_CREATIONERROR','Krijimi i administratorit te ri deshtoi');
define('_AUTHORDEL','Fshije Administratorinr');
define('_PUBLISHEDSTORIES','Ky administrator ka publikuar shenimet');
define('_SELECTNEWADMIN','Zgjidhni nje administrator ekzistues per ti kontrolluar shenimet gjithashtu');
define('_GODNOTDEL','Super Antari nuk mund te fshihet');
define('_MAINACCOUNT','Super Antar *');
define('_USERS','Antare');

// banners.php
define('_BANNERSADMIN','Administrimi i Banerave');
define('_DELETEBANNER','Fshije Banerin');
define('_SURETODELBANNER','A jeni i sigurt se doni te e fshini kete baner?');
define('_EDITBANNER','Shqyrto Banerin');

// blocks.php
define('_BLOCKSADMIN','Administrimi i Kategorive');
define('_CENTER','Mesi');
define('_CENTERUP','Mesi Lart');
define('_CENTERDOWN','Mesi Posht');
define('_BLOCKFILE','(Blloko dokumentin)');
define('_BLOCKFILE2','DOKUMENTI');
define('_BLOCKSYSTEM','SISTEMI');
define('_ADDNEWBLOCK','Vendo kategori te re');
define('_RSSFILE','URL e RSS/RDF dokumentit');
define('_ONLYHEADLINES','(Vetem per tituj)');
define('_REFRESHTIME','Fresko Kohen');
define('_CREATEBLOCK','Krijo Kategori');
define('_EDITBLOCK','Shqyrto Kategori');
define('_BLOCK','Blloko');
define('_SAVEBLOCK','Ruaje Kategorine');
define('_BLOCKACTIVATION','Aktivizimi i Kategorise');
define('_BLOCKPREVIEW','Ky eshte vrojtim per');
define('_WANT2ACTIVATE','Doni te aktivizoni kete kategori?');
define('_ARESUREDELBLOCK','Jeni i sigurt se doni te e levizni');
define('_BLOCKUP','Levize kategorin lart');
define('_BLOCKDOWN','Levize kategorin poasht');
define('_BLOCKTOP','Levize kategorin ne koke');
define('_BLOCKBOTTOM','Levize kategorin ne fund');
define('_TITLE','Titulli');
define('_POSITION','Pozicioni');
define('_WEIGHT','Gjeresia');
define('_STATUS','Staturi');
define('_LEFTBLOCK','Kategorit Majtas');
define('_LEFT','Majtas');
define('_RIGHTBLOCK','Kategoria Djathtas');
define('_RIGHT','Djathtas');
define('_TYPE','Shkruaj');
define('_CUSTOM','Zakont');
define('_FILENAME','Emri i dokumentit');
define('_FILEINCLUDE','Nese perdor kete zgjedhje, injoro Permbajtjen dhe Fresko fushen e kohes');
define('_VISIBLEINMODULES', 'Visible in modules');

// comments.php
define('_REMOVECOMMENTS','Fshij Komentet');
define('_SURETODELCOMMENTS','Jeni i sigurt se doni t\'i fshini komentet e zgjedhura dhe pergjigjet e nderlidhura me to?');

// database.php
define('_SAVEDATABASE','Rikthim');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Gjendja Momentale');
define('_ACTIVATEPAGE','Aktivizon kete faqe?');

// history.php
define('_EPHEMADMIN','Informata Ditore');
define('_ADDEPHEM','Vendo shenim te ri');
define('_EPHEMDESC','Pershkrimi i postimit');
define('_EPHEMMAINT','Hyrja e postimit');
define('_EPHEMEDIT','Shqyrto postimin');
define('_EPHEMDELETE','Fshij postimin');

// headlines.php
define('_RSSFAIL','Ka problem me URL-n per kete RSS hapesire');
define('_RSSTRYAGAIN','Kontrollo dokumentin URL dhe RSS dhe tento perseri');
define('_RSSCONTENT','(RSS/RDF Permbajtja)');
define('_IFRSSWARNING','Nese vendos URL, permbajtja qe vendoni do te refuzohet');
define('_SETUPHEADLINES','Selekto \'Permbajtja\' dhe vendos URL ne fushen RSS, ose vetem selekto faqen nga zgjedhorja per te vendosur tituj te ri');
define('_HEADLINESADMIN','Administrimi i titujve');
define('_ADDHEADLINE','Vendo Titull');
define('_EDITHEADLINE','Shqyrto Titull');
define('_SURE2DELHEADLINE','Jeni i sigurt se doni te fshini kete titull?');

// messages.php
define('_MESSAGESADMIN','Administrimi i porosive');
define('_MESSAGETITLE','Titulli');
define('_MESSAGECONTENT','Permbajtja');
define('_ALLMESSAGES','Vrojto Porosite');
define('_EDITMSG','Shqyrto Porosite');
define('_ADDMSG','Dergo Porosi');
define('_REMOVEMSG','Jeni i sigurt se doni te fshini kete porosi?');
define('_CHANGEDATE','Nderro daten e fillimin ne te sotit?');
define('_IFYOUACTIVE','Nese aktivizon kete porosi tani, data e fillimit do te behet sot');

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
define('_ALLOW_HTML_EMAIL','Allow the use of HTML in email');
define('_USE_SMTP','Use SMTP server as opposed to PHP\'s mailer');
define('_SMTP_HOST','SMTP host address (smtp.example.com)');
define('_USE_SMTP_AUTH','Does server require SMTP authorization');
define('_SMTP_USER_NAME','SMTP username');
define('_SMTP_USER_PASS','SMTP password');

// cpg_adminmenu.php
define('_ADMINMENU','Administration Menu');
define('_ADMINLOGOUT','Log Out');
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
define('_PREFERENCES','Main Settings');
define('_DATABASE','Database');
define('_BLOCKS','Blocks');
define('_MODULES','Modules');
define('_EDITADMINS','Admins');
define('_MESSAGES','Messages');
define('_BANNERS','Banners');
define('_HTTPREFERERS','HTTP Referues');
define('_EDITUSERS','Members');
define('_USERSCONFIG','Members Config');
define('_NEWSLETTER','Newsletter');
define('_SUBMISSIONS','Artikuj');
define('_ADDSTORY','Shto Histori');
define('_TOPICS','Temat');
define('_ADMPOLLS','Sondazhe');
define('_EPHEMERIDS','Ngjarje Historike');
define('_REVIEWS','Rishikime');
define('_ENCYCLOPEDIA','Enciklopedi');
define('_SURVEYS','Sondazhe');
define('_SECTIONS','Seksione');
define('_ARTICLES','Artikuj');
define('_FAQ','Pyetje');
define('_DOWNLOAD','Shkarkime');
define('_WEBLINKS','Lidhje Web');
define('_CONTENT','Përmbajtje');
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
define('_ERROR','GABIM');
define('_SEC_ERROR','Gabim Sigurie');
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
define('_TASK_COMPLETED','U Kompletua!');
define('_CONFIRM','Confirm');
define('_FOOTER_COPYRIGHTS', 'Interactive software released under <a href="http://dragonflycms.org/GNUGPL.html" target="_blank" title="GNU Public License Agreement">GNU GPL</a>,	<a href="'.getlink('credits').'">Code Credits</a>,	<a href="'.getlink('privacy_policy').'">Privacy Policy</a>');

# time
$LNG = array('_time' => array(
'l' => array('e Dielë', 'E Hënë', 'E Martë', 'E Mërkurrë', 'E Enjte', 'E Premte', 'E Shtunë'),
'D' => array('Die', 'Han', 'Mar', 'Mer', 'Enj', 'Pre', 'Sht'),
'F' => array(1=>'Janar', 'Shkurt', 'Mars', 'Prill', 'Maj', 'Qershor', 'Korrik', 'Gusht', 'Shtatore', 'Tetore', 'Nëntore', 'Dhjetore'),
'M' => array(1=>'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
));
$LNG['_time']['l'][7] =& $LNG['_time']['l'][0];
$LNG['_time']['D'][7] =& $LNG['_time']['D'][0];
