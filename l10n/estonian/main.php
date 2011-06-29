<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2009 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/estonian/main.php,v $
  $Revision: 9.79 $
  $Author: estlane $
  $Date: 2010/02/28 07:24:32 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_CHARSET','utf-8');
define('_BROWSER_LANGCODE','et');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://000.pri.ee');

define('_DATESTRING','%A, %d. %B %Y a. %H:%M');//i.e News. could use %e instead of %d if it works
define('_DATESTRING2','%d. %B, %Y a');//i.e Messages in 9.1.2.1
define('_DATESTRING3','%d. %B, %Y a');//i.e Reg Date in 9.1.2.1
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%2$s, %1$s %3$s');

define('_NEXTPAGE','Järgmine lehekülg');
define('_PREVIOUSPAGE','Eelmine lehekülg');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Otsi');
define('_LOGIN','Logi sisse');
define('_WRITES','kirjutab');
define('_POSTEDON','Postitatud');
define('_NICKNAME','Nimi');
define('_PASSWORD','Salasõna');
define('_WELCOMETO','Teretulemast');
define('_EDIT','Muuda');
define('_DELETE','Kustuta');
define('_POSTEDBY','Postitanud');
define('_READS','korda loetud');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Mine tagasi</a>' : '<a href="javascript:history.go(-1)">Mine tagasi</a>').' ]');
define('_COMMENTS','kommentaari');
define('_PASTARTICLES','Möödunud artiklid');
define('_OLDERARTICLES','Vanemad artiklid');
define('_BY','Postitaja');
define('_ON','');
define('_LOGOUT','Logi välja');
define('_WAITINGCONT','Saadetised');
define('_WREVIEWS','Ootan ülevaateid');
define('_WLINKS','Saadetud lingid');
define('_ONEDAY','ühel päeval nagu täna...');
define('_ASREGISTERED','Kas sul ei ole veel kontot? Sa saad <a href="'.getlink('Your_Account&amp;file=register').'">selle teha</a>. Registreeritud kasutajana on sul mõningad eelised nagu kujunduse valik, kommentaaride seadistus, võimalus postitada oma nimega jpm.');
define('_MENUFOR','Menüü liikmele');
define('_NOBIGSTORY','Hetkel ei ole tänast suurimat uudist');
define('_BIGSTORY','Tänased enim loetud uudised on:');
define('_SURVEY','Küsitlus');
define('_POLLS','Küsitlused');
define('_PCOMMENTS','Kommentaare:');
define('_RESULTS','Tulemused');
define('_HREADMORE','loe lähemalt...');
define('_CURRENTLY','Praegu viibib lehel,');
define('_GUESTS','külastaja(t) ja');
define('_MEMBERS','kasutaja(t).');
define('_YOUARELOGGED','Sa oled sisse loginud nimega');
define('_YOUHAVE','Sulle on');
define('_PRIVATEMSG','privaatsõnumit.');
define('_YOUAREANON','Sa oled anonüümne kasutaja. Sa võid registreerida tasuta klikkides <a href="'.getlink('Your_Account&amp;file=register').'">siia</a>');
define('_NOTE','Märge:');
define('_ADMIN','Admin');
define('_WERECEIVED','Meie andmetel on portaali külastatud');
define('_PAGESVIEWS','korda, alates');
define('_TOPIC','Teema');
define('_UDOWNLOADS','Allalaetuid kordi');
define('_VOTE','Hääleta');
define('_VOTES','Hääli');
define('_MVIEWADMIN','Näita: Ainult administraatoritele');
define('_MVIEWUSERS','Näita: Ainult registreeritud kasutajatele');
define('_MVIEWANON','Näita: Ainult anonüümsetele kasutajatele');
define('_MVIEWALL','Näita: Kõikidele külalistele');
define('_EXPIRELESSHOUR','Lõpetamine: Vähem kui tunni pärast');
define('_EXPIREIN','Aegumiseni aega');
define('_UNLIMITED','Aegumatu');
define('_HOURS','tundi');
define('_RSSPROBLEM','Praegu on probleeme selle saidi RSS väljaga');
define('_SELECTLANGUAGE','Vali keel');
define('_SELECTGUILANG','Vali kasutajaliidese keel');
define('_NONE','Puudub');
define('_BLOCKPROBLEM','<center>Selle plokiga on hetkel probleem</center>');
define('_BLOCKPROBLEM2','<center>See plokk on praegu tühi.</center>');
define('_MODULENOTACTIVE','Vabandust, see moodul ei ole aktiivne!');
define('_NOACTIVEMODULES','Passiivsed moodulid');
define('_MODULENOEXIST','Vabandust, aga see leht %s ei eksisteeri');
define('_FORADMINTESTS','(Adminni testid)');
define('_BBFORUMS','Foorumid');
define('_ACCESSDENIED','Juurdepääs keelatud');
define('_RESTRICTEDAREA','Sa proovid juurde pääseda keelatud alale.');
define('_MODULEUSERS','Vabandust, aga see rubriik on <i>ainult registreeritud</i> kasutajatele<br /><br />');
define('_MODULEUSERS2','Sa võid registreerida tasuta klikkides <a href="'.getlink('Your_Account&amp;file=register').'">siia</a>, siis sa võid siseneda siia rubriiki ilma piiranguteta.<br /><br />Tänan');
define('_MODULESADMINS','Vabandust, aga see rubriik on ainult <i>administraatoritele</i><br /><br />Tänan arusaamise eest.');
define('_MODULESGROUPS','Grupi juurdepääs vajalik');
define('_HOME','Avaleht');
define('_HOMEPROBLEM','Probleem: meil ei ole avalehte!!!');
define('_ADDAHOME','Lisa uus vaikimisi moodul oma lehele');
define('_HOMEPROBLEMUSER','Hetkel on probleeme esilehega.<br />Palun proovi hiljem');
define('_MORENEWS','Rohkem uudiste rubriigis');
define('_ALLCATEGORIES','Kõik kategooriad');
define('_SPAMGUARDPROTECTED','SpamGuard on blokeerinud selle emaili');
define('_M_CHARS','Maksimaalselt: %s märki');

define('_SYS_MESSAGE','Süsteemiteade');
define('_SYS_MESSAGES','Süsteemiteated');
define('_SYS_MAINTENANCE','Kodulehekülg jookseb hooldusrežiimis');
define('_SYS_DEMO','Süsteem töötab administraatori demo meetodil<br />Sa ei saa teha ühtegi muudatust andmebaasis<br /><a href="'.adminlink('logout').'">Logi mind välja!</a>');

define('_DATE','Kuupäev');
define('_HOUR','tund');
define('_UMONTH','Kuu');
define('_YEAR','Aasta');
define('_JANUARY','Jaanuar');
define('_FEBRUARY','Veebruar');
define('_MARCH','Märts');
define('_APRIL','Aprill');
define('_MAY','Mai');
define('_JUNE','Juuni');
define('_JULY','Juuli');
define('_AUGUST','August');
define('_SEPTEMBER','September');
define('_OCTOBER','Oktoober');
define('_NOVEMBER','November');
define('_DECEMBER','Detsember');

define('_MONDAY','Esmaspäev');
define('_TUESDAY','Teisipäev');
define('_WEDNESDAY','Kolmapäev');
define('_THURSDAY','Neljapäev');
define('_FRIDAY','Reede');
define('_SATURDAY','Laupäev');
define('_SUNDAY','Pühapäev');
//three letter abbrev.
define('_ABR_MONDAY','Esm');
define('_ABR_TUESDAY','Tei');
define('_ABR_WEDNESDAY','Kol');
define('_ABR_THURSDAY','Nel');
define('_ABR_FRIDAY','Ree');
define('_ABR_SATURDAY','Lau');
define('_ABR_SUNDAY','Püh');

define('_BWEL','Tere');
define('_BPM','Privaatsed sõnumid');
define('_BUNREAD','Lugemata');
define('_BREAD','Loetuid');
define('_BMEMP','Liikmed');
define('_BLATEST','Viimane');
define('_BTD','Uusi täna');
define('_BYD','Uusi eile');
define('_BOVER','Kokku');
define('_BVISIT','Hetkel viibib lehel');
define('_BVIS','Külalisi');
define('_BMEM','Liikmeid');
define('_BTT','Kokku');
define('_BON','Hetkel viibivad');
define('_BREG','Registreeri');
define('_BROADCAST','Avalda avalik sõnum');
define('_BROADCASTFROM','Avalik sõnum edastas');
define('_TURNOFFMSG','Lülita välja avalik sõnum');
define('_JOURNAL','Blogi');
define('_READMYJOURNAL','Loe minu blogi');
define('_ADD','Lisa');
define('_YES','Jah');
define('_NO','Ei');
define('_INVISIBLEMODULES','Nähtamatud moodulid');
define('_ACTIVEBUTNOTSEE','(Aktiivsed, aga nähtamatud lingid)');
define('_BOTS','Roboteid');

define('_UM','Dragonfly uuenduse teenus');
define('_UM_F','Uuendusteenusega ühendamine ebaõnnestus. Palun proovi hiljem uuesti.');
define('_UM_G','Kasutad uusimat Dragonfly versiooni');
define('_UM_R','Palun <a href="%2$s" target="_blank">uuenda</a> Dragonfly %1$s');

define('_TEAM','Meeskond');
define('_LINKAPPROVEDMSG','Õnnitleme! Sinu saadetud veebilink on heaks kiidetud, palun viita meile ka tagasi.');
define('_MODREQLINKS','Mod. Linke');
define('_BROKENLINKS','Vigaseid linke');
define('_MODREQDOWN','Mod. Faile');
define('_BROKENDOWN','Vigaseid faile');
define('_PAGEGENERATION','Leht genereeris:');
define('_SECONDS','sekundit');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Lehe tekitamiseks läks aega %1$s sekundit, kusjuures %3$s neist läksid %2$s päringu tegemiseks andmebaasi');
define('_YOUHAVEONEMSG','Sulle on 1 uus privaatsõnum');
define('_NEWPMSG','Uued privaatsed sõnumid');
define('_CONTRIBUTEDBY','Saatis');
define('_CHAT','Jututuba');
define('_REGISTERED','Registreerituid');
define('_CHATGUESTS','Külastajaid');
define('_USERSTALKINGNOW','Kasutajaid räägib hetkel');
define('_ENTERTOCHAT','Sisene jututuppa');
define('_CHATROOMS','Olemasolevad toad');
define('_ALLTOPICS','Kõik teemad');
define('_ASSOTOPIC','Seonduvad teemad');
define('_HELLO','Tervitus');
define('_ALL','Kõik');
define('_URL','URL');
define('_SUBJECT','Teema');
define('_PREVIEW','Eelvaade');
define('_SEND','Saada');
define('_ANONYMOUS','Külaline');
define('_BREADCRUMB', 'Eraldaja kood, eraldab lehekülje pealkirjas olevad sõnad');
define('_BC_DELIM',''.isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&rsaquo;');//''. is for cpglang
define('_RESET','Tühista');
define('_AT',''); /*nii aja kui koha kohta*/
define('_LASTMSGS','Viimased %s postitust foorumis');
define('_LASTPOSTBY','Viimane postitus %1$s poolt %2$s %3$s');
define('_PRINTER','Printerisõbralik lehekülg');

define('_CREDITS_TITLE','Autorid');
define('_CREDITS_PRODUCT','Toode');
define('_CREDITS_DESC','Kirjeldus');
define('_CREDITS_AUTHORS','Autor(id)');

define('_PP_TITLE','Privaatsuspoliis');
define('_PP_MODIFY','Muuda seda teksti');

define('_SENDERNAME','Saatja nimi');
define('_SENDEREMAIL','Saatja e-mail');
define('_RECIPIENTNAME','Saaja nimi');
define('_RECIPIENTEMAIL','Saaja e-mail');

define('_REASONS_0','Nagu on');
define('_REASONS_1','Teemast mööda');
define('_REASONS_2','Alusetu');
define('_REASONS_3','Vaidluste õhutaja');
define('_REASONS_4','Liigne');
define('_REASONS_5','Läbinägelik');
define('_REASONS_6','Huvitav');
define('_REASONS_7','Sisukas');
define('_REASONS_8','Naljakas');
define('_REASONS_9','Ülehinnatud');
define('_REASONS_10','Teenimatult tunnustamata');

/* My Account Tools Block */
define('_TB_BLOCK','Minu konto');
define('_TB_TASKS','Võimalused');
define('_TB_INFO','Teave');
define('_TB_PROFILE_INFO','Minu avalik profiil');
define('_TB_EDIT_PROFILE','Minu lisainfo');
define('_TB_EDIT_REG','Registratsiooniandmed');
define('_TB_EDIT_PRIVATE','Minu erateave');
define('_TB_EDIT_AVATAR','Minu avatar');
define('_TB_DELETE','Kustuta mu konto');
define('_TB_CONFIG','Seadistus');
define('_TB_EDIT_PREFS','Eelistused');
define('_TB_EDIT_HOME','Kodulehekülje seaded');
define('_TB_EDIT_COMM','Kommenteerimise seaded');
define('_TB_PERSONAL','Isiklik');
define('_TB_PERSONAL_GALLERY','Minu galerii');
define('_TB_PERSONAL_JOURNAL','Minu blogi');
define('_TB_PRIVMSGS','Postkast');
define('_TB_PRIVMSGS_INBOX','Sissetulevad');
define('_TB_PRIVMSGS_OUTBOX','Väljaminevad');
define('_TB_PRIVMSGS_SENTBOX','Saadetud');
define('_TB_PRIVMSGS_SAVEBOX','Salvestatud');
define('_TB_PRIVMSGS_SEND','Saada kiri');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','Kasutajainfo');
define('_SECURITYCODE','Turvakood');
define('_TYPESECCODE','Sisesta kood');
define('_MEMBERSOPTIONS','Liikmete valikud');
define('_READSEND','Loe privaatsõnumeid. Saada sõnumeid teistele.');
define('_INBOX','Postkast');
define('_NEW','Uusi');
define('_ACCOUNTOPTIONS','Minu konto. Uuenda valikuid ja loe sõnumeid.');
define('_LOGOUTACCT','Logi välja sellest kontost.');
define('_LOGOUTADMINACCT','Logi välja adminni kontost.');
define('_BLOGIN','Kasutaja konto');
define('_BFLOGIN','Minu profiil');
define('_BHID','Peidetud');
define('_WHOWHERE','Kes on kus');
define('_STAFFONL','Lehel viibiv personal');
define('_STAFFNONE','Ühtegi personalliiget ei viibi lehel!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Inimkogu');
define('_BlogsLANG','Blogid');
define('_ContentLANG','Sisu');
define('_coppermineLANG','Galerii');
define('_CPGlangLANG','Aita tõlkida');
define('_DownloadsLANG','Failihaldus');
define('_EncyclopediaLANG','Entsüklopeedia');
define('_ForumsLANG','Foorum');
define('_ContactLANG','Võta ühendust');
define('_FAQLANG','KKK - Abi');
define('_Members_ListLANG','Liikmete nimekiri');
define('_NewsLANG','Uudised');
define('_ReviewsLANG','Ülevaated');
define('_SearchLANG','Otsing');
define('_StatisticsLANG','Statistika');
define('_Stories_ArchiveLANG','Uudiste arhiiv');
define('_Submit_NewsLANG','Saada uudis');
define('_SurveysLANG','Küsitlused');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Teemad');
define('_Private_MessagesLANG','Privaatsõnumid');
define('_Tell_a_FriendLANG','Ütle sõbrale');
define('_Web_LinksLANG','Lingid');
define('_Your_AccountLANG','Konto');
define('_CPG_EventsLANG','Kalender');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Keeled!');
define('_SmiliesLANG', 'Smailid');
define('_GroupsLANG','Grupid');
define('_RanksLANG', 'Auastmed');
define('_HeadlinesLANG', 'RSS');

define('_COMMUNICATION','Suhtlus');
define('_FRIENDS','Sõbrad');
define('_STORE','Pood');
define('_PRODUCTS','Tooted');
define('_DONATE','Anneta');
define('_HELP','Abi');
define('_GALLERIES','Galeriid');
define('_DOCS','Dokumentatsioon');
define('_RULES','Reeglid ja eeskirjad');
define('_MENU','Navigatsioon');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','Sa <strong>oled</strong> tellinud<br />meie uudiskirja');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','Sa <strong>ei ole</strong> tellinud<br />meie uudiskirja');
define('_NEWSLETTERBLOCKREGISTER','Sa pead olema<br /><strong>registreeritud kasutaja</strong><br />et saada meie uudiskirja');
define('_NEWSLETTERBLOCKSUBSCRIBE','Telli');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Tühista tellimus');
define('_NEWSLETTERBLOCKREGISTERNOW','Registreeri');
/* END Newsletter Block */

/* START class phpmailer lang array */
$PHPMAILER_LANG = array();
$PHPMAILER_LANG['provide_address'] = 'Sa pead andma vähemalt ühe saaja e-maili.';
$PHPMAILER_LANG['mailer_not_supported'] = ' mailer ei ole toetatud.';
$PHPMAILER_LANG['execute'] = 'Ei saanud käivitada: ';
$PHPMAILER_LANG['instantiate'] = 'Ei suutnud luua maili funktsiooni.';
$PHPMAILER_LANG['authenticate'] = 'SMTP viga: Ei suutnud kinnitada autentsust.';
$PHPMAILER_LANG['from_failed'] = 'Järgmine Kellelt aadress ebaõnnestus: ';
$PHPMAILER_LANG['recipients_failed'] = 'SMTP viga: Järgmised vastuvõtjad ebaõnnestusid: ';
$PHPMAILER_LANG['data_not_accepted'] = 'SMTP viga: Andmeid ei võetud vastu.';
$PHPMAILER_LANG['connect_host'] = 'SMTP viga: Ei suutnud SMTP hostiga ühenduda.';
$PHPMAILER_LANG['file_access'] = 'Ei saanud failile ligi: ';
$PHPMAILER_LANG['file_open'] = 'Faili viga: Ei suutnud faili avada: ';
$PHPMAILER_LANG['encoding'] = 'Tundmatu kodeering: ';
/* END class phpmailer lang array */

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_SAVECHANGES','Salvesta muudatused');
define('_EDITOR_STYLE','Tekstiredaktor');
define('_LANGUAGE','Keel');
define('_FUNCTIONS','Funktsioonid');
define('_SHOW','Näita');
define('_TO','To');
define('_DAY','Päev');
define('_LAST','Viimane');
define('_ACTIVE','Aktiivne');
define('_DEACTIVATE','Deaktiveeri');
define('_INACTIVE','Passiivne');
define('_ACTIVATE','Aktiveeri');
define('_ACTIVATE2','Aktiveeri?');
define('_VIEW','Nähtav');
define('_VIEWPRIV','Näita seda');
define('_MVADMIN','Ainult administraatoritele');
define('_MVUSERS','Ainult kasutajatele');
define('_MVANON','Ainult külastajatele');
define('_MVALL','Kõikidele');
define('_IMAGE','Pilt');
define('_GO','Mine');
define('_OPTION','Valik');
define('_CATEGORY','Kategooria');
define('_SUBCATEGORY','Alamkategooria');
define('_ID','ID');
define('_EXPIRATION','Aegumine');
define('_DAYS','päeva');
define('_WARNING','Hoiatus');
define('_POLLTITLE','Küsitluse pealkiri');
define('_POLLEACHFIELD','Palun sisesta iga valik eraldi välja sisse');
define('_ADDCATEGORY','Lisa uus kategooria');
define('_PAGEBREAK','Kui sa tahad mitut lehekülge, võid sa kirjutada <b>&lt;!--pagebreak--&gt;</b> kohas, kus tahad lõigata.');
define('_SIGNATURE','Signatuur');
define('_DESCRIPTION','Kirjeldus');
define('_EDITCATEGORY','Muuda kategooriat');
define('_IN','');
define('_DESCRIPTION255','Kirjeldus(kuni 255 märki):');
define('_MODCATEGORY','Muuda kategooriat');
define('_SUBMITTER','Saatja');
define('_VISIT','Külasta');
define('_EXTENDEDTEXT','Laiendatud tekst');
define('_CHECKCATEGORIES','Kontrolli kategooriaid');
define('_INCLUDESUBCATEGORIES','(lisa alakategooriad)');
define('_CHECKSUBCATEGORIES','KOntrolli alakategooriaid');
define('_VALIDATELINKS','Kinnita lingid');
define('_FAILED','Ebaõnnestus!');
define('_BEPATIENT','(palun ole kannatlik)');
define('_VALIDATINGCAT','Kategooria (ja kõikide alakategooriate) kinnitamine');
define('_VALIDATINGSUBCAT','Alakategooriate kinnitamine');
define('_OK','OK!');
define('_CHECK','Kontrolli');
define('_IGNORE','Väldi');
define('_HITS','Tabamusi');
define('_FILESIZE', 'Faili suurus');
define("_EZTHEREIS","");
define("_EZSUBCAT","alakategooriat");
define("_EZATTACHEDTOCAT","selles kategoorias");
define("_EZBROKENLINKS","Vigased lingid");
define("_DELEZLINKCATWARNING","HOIATUS: Oled sa kindel, et tahad selle kategooria kustutada?<br /> Sa kustutad ka kõik alakategooriad ja lisatud lingid!");

// index.php
define('_DEFHOMEMODULE','Avalehel kasutuses olev moodul');
define('_MODULEINHOME','Alljärgnev moodul on vaikimisi avalehel saidil:');
define('_CHANGE','Muuda');
define('_WHOSONLINE','Kes viibivad lehel');
define('_NP_ADMIN','Märkmik');
define('_NP_LOCKED','Märkmik on lukustatud<br />Ainult peakasutaja saab seda avada');
define('_NP_SAVE','Salvesta märkmed');
define('_NP_UNLOCK','Ava märkmik');
define('_NP_LOCK','Lukusta märkmik');
// news
define('_STICKY','Püsivad artiklid');
define('_ARTICLEUP','Liiguta artikkel üles');
define('_ARTICLEDOWN','Liiguta artikkel alla');
define('_UNSTICK','Mitte püsiv');
define('_STICK','Püsiv');
define('_AUTOMATEDARTICLES','Plaanitud artiklid');
define('_STORYID','Artikli ID');
define('_CURRENTPOLL','Praegune küsitlus');

// admin.php
define('_ADMINISTRATION','Administratsioon');
define('_NOADMINYET','Pole ühtegi administraatorikontot, jätka et teha peakasutaja...');
define('_CREATEUSERDATA','Soovid sa teha samade andmetega tavakasutajat?');
define('_ADMINLOGIN','Logi administreerimiseks sisse');
define('_ADMINID','Nimi');
define('_EMAIL','E-mail');
define('_SUBMIT','Saada');
define('_YOUARELOGGEDOUT','Sa oled edukalt välja loginud');
define('_PASSWDNOMATCH','Salasõnad ei kattu. Palun mine tagasi ja sisesta need uuesti.');
define('_LOGIN_REMEMBERME','Jäta&nbsp;meelde');
define('_ADMINMENU_LOGOUT','Administraatorimenüüst väljalogimine');
define('_PASSWORD_MALFORMED','Palun lisa oma salasõnasse vähemalt üks number, üks suur täht ja üks väike täht');

// admins.php
define('_AUTHORSADMIN','Administraatorite kontroll');
define('_NAME','Nimi');
define('_REQUIRED','(nõutud)');
define('_MODIFYINFO','Muuda infot');
define('_DELAUTHOR','Kustuta administraator');
define('_ADDAUTHOR','Lisa uus administraator');
define('_PERMISSIONS','Õigused');
define('_SUPERUSER','Peakasutaja');
define('_SUPERWARNING','Hoiatus: Kui Peakasutaja on märgitud eraldatakse administraatorile täisõigused');
define('_ADDAUTHOR2','Lisa administraator');
define('_RETYPEPASSWD','Kirjuta salasõna uuesti');
define('_FORCHANGES','(Ainult muudatuste jaoks)');
define('_COMPLETEFIELDS','Sa pead kõik kohustuslikud väljad täitma');
define('_CREATIONERROR','Uue administraatori loomine ebaõnnestus');
define('_AUTHORDEL','Kustuta administraator');
define('_PUBLISHEDSTORIES','See administraator on avaldanud artiklid');
define('_SELECTNEWADMIN','Palun vali olemasolev administraator kellele määrata artiklid');
define('_GODNOTDEL','Peakasutajat ei saa kustutada!');
define('_MAINACCOUNT','Peakasutaja *');
define('_USERS','Kasutajad');

// banners.php
define('_BANNERSADMIN','Bännerite administratsioon');
define('_DELETEBANNER','Kustuta bänner');
define('_SURETODELBANNER','Oled sa kindel, et tahad seda bännerit kustutada?');
define('_EDITBANNER','Muuda bännerit');

// blocks.php
define('_BLOCKSADMIN','Plokkide administratsioon');
define('_CENTER','Keskel');
define('_CENTERUP','Keskel üleval');
define('_CENTERDOWN','Keskel all');
define('_BLOCKFILE','(Ploki fail)');
define('_BLOCKFILE2','FAIL');
define('_BLOCKSYSTEM','SÜSTEEM');
define('_ADDNEWBLOCK','Lisa uus plokk');
define('_RSSFILE','RSS/RDF faili URL');
define('_ONLYHEADLINES','(Ainult uudisekokkuvõtete jaoks)');
define('_REFRESHTIME','Värskendusaeg');
define('_CREATEBLOCK','Loo plokk');
define('_EDITBLOCK','Muuda plokki');
define('_BLOCK','Plokk');
define('_SAVEBLOCK','Salvesta plokk');
define('_BLOCKACTIVATION','Ploki aktiivsus');
define('_BLOCKPREVIEW','See on eelvaade');
define('_WANT2ACTIVATE','Soovid sa seda plokki aktiveerida?');
define('_ARESUREDELBLOCK','Oled sa kindel, et tahad eemaldada');
define('_BLOCKUP','Liiguta plokk üles');
define('_BLOCKDOWN','Liiguta plokk alla');
define('_BLOCKTOP','Liiguta plokk tippu');
define('_BLOCKBOTTOM','Liiguta plokk põhja');
define('_TITLE','Pealkiri');
define('_POSITION','Asukoht');
define('_WEIGHT','Kaal');
define('_STATUS','Seisund');
define('_LEFTBLOCK','Vasak plokk');
define('_LEFT','Vasakul');
define('_RIGHTBLOCK','Parem plokk');
define('_RIGHT','Paremal');
define('_TYPE','Tüüp');
define('_CUSTOM','Tee ise');
define('_FILENAME','Faili&nbsp;nimi');
define('_FILEINCLUDE','Kui sa kasutad seda valikut, ignoreeri sisu ja värskendusaja välju');
define('_VISIBLEINMODULES', 'Nähtav moodulites');

// comments.php
define('_REMOVECOMMENTS','Kustuta kommentaarid');
define('_SURETODELCOMMENTS','Oled sa kindel, et soovid kustutada valitud kommentaare ja kõiki sellega seonduvaid vastuseid?');

// database.php
define('_SAVEDATABASE','Tagavarakoopia');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Praegune seisund');
define('_ACTIVATEPAGE','Aktiveeri see leht?');

// history.php
define('_EPHEMADMIN','Täna ajaloos');
define('_ADDEPHEM','Lisa uus sissekanne');
define('_EPHEMDESC','Sissekande kirjeldus');
define('_EPHEMMAINT','Sissekande otsing');
define('_EPHEMEDIT','Muuda sissekannet');
define('_EPHEMDELETE','Kustuta sissekanne');

// headlines.php
define('_RSSFAIL','Selle RSS\'i aadressiga on midagi viltu');
define('_RSSTRYAGAIN','Palun kontrolli URL-i ja RSS-i failinime ja proovi uuesti');
define('_RSSCONTENT','(RSS/RDF sisu)');
define('_IFRSSWARNING','Kui sa lisad URL-i ei arvestata sinu poolt lisatud sisu');
define('_SETUPHEADLINES','Vali "Tee ise" ja kirjuta RSS\'i aadress või vali lihtsalt veebileht rippmenüüst et hankida uudiste kokkuvõtteid');
define('_HEADLINESADMIN','RSS administratsioon');
define('_ADDHEADLINE','Lisa RSS');
define('_EDITHEADLINE','Muuda RSS\'e');
define('_SURE2DELHEADLINE','Oled sa kindel, et tahad selle RSS-i kustutada?');

// messages.php
define('_MESSAGESADMIN','Teadete administratsioon');
define('_MESSAGETITLE','Pealkiri');
define('_MESSAGECONTENT','Sisu');
define('_ALLMESSAGES','Kõik teated');
define('_EDITMSG','Muuda teadet');
define('_ADDMSG','Lisa teade');
define('_REMOVEMSG','Oled sa kindel, et tahad seda teadet kustutada?');
define('_CHANGEDATE','Taasta algkuupäev tänasele?');
define('_IFYOUACTIVE','Kui sa aktiveerid selle teate praegu sätitakse algkuupäev tänasele');

// modules.php
define('_MODULESADMIN','Moodulite administratsioon');
define('_HOMECONFIG','Avalehe seadistus');
define('_MODULESADDONS','Moodulid ja lisad');
define('_INHOME','Moodul on avaleht');
define('_MODULEHOMENOTE','Uued moodulid, mis on lisatud /modules/ kataloogi, lisatakse iseeneslikult süsteemi.<br />Mooduli kataloogi kustutamine eemaldab selle samamoodi iseeneslikult süsteemist.<br /><br />Rasvase kirjaga mooduli pealkiri tähendab, et see on määratud avaleheks<br />Seda moodulit ei saa deaktiveerida või kindlate kasutajate jaoks piirata ennem kui mõnda muud moodulit ei ole avaleheks määratud');
define('_PUTINHOME','Tee avaleheks');
define('_SURETOCHANGEMOD','Oled sa kindel, et tahad muuta oma pealehte(vana - uus)');
define('_NOTINMENU','[ <strong>&middot;</strong> ] tähendab moodulit, mis on peidetud moodulite plokis');
define('_SHOWINMENU','Näita menüüs?');
define('_CUSTOMTITLE','Oma pealkiri');
define('_MODULEEDIT','Moodulite muutmine');
define('_VERSION','Versioon');
define('_UPGRADE','Uuenda versioonini %s');
define('_DBSIZE','Andmebaas');
define('_CVS_EXPLAIN','Tundub, et see moodul võimaldab saada uuendusi läbi meie CVS (Concurrent Versioning System - samaaegne versioonisüsteem) süsteemi. CVS-ga saad sa faili viimaseid uuendusi väga hõlpsasti kätte, kuid viimane faili versioon võib sisaldada vigu, kuna see ei ole osa meie stabiilsest väljalaskest.<br /><br />Kui PHP on sulle tuttav, võid sa uuendada seda moodulit uusimate CVS failidega kasutades allolevat linki. <strong>Tee kõikidest failidest ennem varukoopia!</strong>');
define('_CVS_UPDATE','Uuenda CVS faile');
define('_LOADNEWCVS', 'Lae uus moodul CVS kaudu');
define('_SUREALL', 'Oled sa kindel, et tahad %s kõik %s');
define('_UPGRADEFAILED', 'Uuendamine ebaõnnestus');
define('_EXAMPLE', 'Kasutamise näide');

// newsletter.php
define('_FROM','Kellelt');
define('_STAFF','administraatorid');
define('_NL_RECIPS','Saajad');
define('_SUBSCRIBEDUSERS','Tellinud liikmed');
define('_NL_ALLUSERS','Kõik liikmed');
define('_NL_ADMINS','Administraatorid');
define('_NL_REGARDS','Parimate tervitustega');
define('_DISCARD','Viska ära');
define('_REVIEWTEXT','Palun vaata oma kiri üle ja kontrolli ega kirjavigu pole');
define('_MANYUSERSNOTE','Suure arvu pärast kes selle uudiskirja saavad, võib nende saatmine mitu minutit aega võtta<br />Palun ole kannatlik!');
define('_NL_NOUSERS','Valitud grupp kes peaks selle uudiskirja saama, ei oma ühtegi liiget<br />Palun mine tagasi ja vali mõni muu grupp');
define('_NUSERWILLRECEIVE','kasutajat saavad selle uudiskirja');
define('_NLUNSUBSCRIBE',"Me saatsime sulle selle kirja, kuna sa oled tellinud meie uudiskirja.\n\nSa saad tellimuse tühistada igal ajal <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">selle</a> lingi kaudu.\n\nKui sa soovid edasist abi saada e-mail <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">meie administraatorile</a>.");
define('_NEWSLETTERSENT','Uudiskiri on saadetud');

// referers.php
define('_WHOLINKS','Kes viitab meie lehele?');
define('_DELETEREFERERS','Kustuta viited');

// settings.php
define('_SYSTEM','Süsteem');
define('_SITE_DOMAIN','Saidi domeen');
define('_SITE_PATH','Saidi rada');
define('_ACTIVATE_LEO','Aktiveeri lühiviidad (Link Engine Optimization - LEO)');
define('_BLOCK_FRAMES','Blokeeri raamid');
define('_FOOTER','Jalus');
define('_DEBUG', 'Märkused');
define('_SITECONFIG','Veebilehe seaded');
define('_GENSITEINFO','Üldine veebilehe teave');
define('_SITENAME','Lehe nimi');
define('_SITEURL','Lehe URL');
define('_SITELOGO','Logo faili nimi (asub /images kataloogis)');
define('_SITESLOGAN','Lehe hüüdlause');
define('_STARTDATE','Lehe asustamise aeg');
define('_ADMINEMAIL','Administraatori e-mail');
define('_ITEMSTOP','Loendite arv Top lehel');
define('_STORIESHOME','Artiklite arv uudiste lehel');
define('_OLDSTORIES','Arv uudiseid kuvatakse vanemate artiklite plokis');
define('_ALLOWANONPOST','Luba registreerimata kasutajatel uudiseid postitada');
define('_DEFAULTTHEME','Vaikimisi kujundus sinu lehel');
define('_SHOWSEC','Kuva turvakoodi');
define('_TOOLTIPS','Kuva vihjed määratud lahtrites');
define('_UM_TOGGLE','Kasuta uuenduste jälgimist');
define('_UM_EXPLAIN','See otsib välja informatsiooni kaks osa meie veebilehelt dragonflycms.org-st: Dragonfly hetkeversiooni ja kõiki tähtsaid teateid mis vastavad sinu Dragonfly versioonile. Meie veebilehele saadetakse ainult sinu Dragonfly versioon; me <strong>ei</strong> logi neid päringuid oma serverisse.');
// maintenance
define('_MAINTENANCE','Hooldus');
define('_MESSAGE','Kiri');
//cookies
define('_BROWSER_COOKIES','Küpsised');
define('_SNAME_AS_COOKIE','SERVER_NAME küpsiste domeenina');
define('_CURRENT','praegu');
define('_COOKIE_DOMAIN','muidu küpsiste domeen');
define('_COOKIE_PATH','Küpsiste rada');
define('_ADMIN_COOKIE','Administraatori küpsise nimi');
define('_USER_COOKIE','Liikme küpsise nimi');
// multilingual
define('_MULTILINGUALOPT','Mitmekeelsuse valikud');
define('_SELLANGUAGE','Vaikimisi kasutatav keel saidil');
define('_LOCALEFORMAT','Kohalik ajavorming');
define('_ACTMULTILINGUAL','Aktiveeri mitmekeelsuse võimalus');
define('_ACTUSEFLAGS','Näita esilehel lippe');
// banners
define('_BANNERSOPT','Bännerisüsteem');
define('_ACTBANNERS','Aktiveeri bännerite süsteem?');
// footer
define('_FOOTERMSG','Lehe jalus (valikuline)');
define('_FOOTERLINE1','Jalus, esimene rida');
define('_FOOTERLINE2','Jalus, teine rida');
define('_FOOTERLINE3','Jalus, kolmas rida');
// backend
define('_BACKENDCONF','RSS sööt');
define('_BACKENDTITLE','RSS pealkiri');
define('_BACKENDLANG','RSS keel');
// mail stories
define('_MAIL2ADMIN','Ootel uudiste saadetised');
define('_NOTIFYSUBMISSION','Teata uutest lähetustest e-mailile?');
define('_EMAIL2SENDMSG','Email, kuhu saata sõnum');
define('_EMAILSUBJECT','Emaili pealkiri');
define('_EMAILMSG','Emaili sõnum');
define('_EMAILFROM','Saatja emaili aadress');
// comments
define('_COMMENTSOPT','Kommentaarid');
define('_COMMENTSLIMIT','Kärbi kommentaare pärast __ karakterit');
define('_COMMENTSMOD','Luba kommentaaride hindamine?');
define('_MODADMIN','Jah, administraatori poolt');
define('_MODUSERS','Jah, kasutajate poolt');
define('_NOMOD','Ei, ära kasuta hindamist');
// adminmenu
define('_GRAPHICOPT','Administratsiooni menüü kuvamine');
define('_BOTH','Mõlemad');
define('_GRAPHICAL','Graafiliselt');
define('_SIDEBLOCK','Küljeplokk');
// miscellaneous
define('_MISCOPT','Mitmesugust');
define('_ACTIVATEHTTPREF','Aktiveeri HTTP viited?');
define('_MAXREF','Kui mitut viidet soovid kuvada');
define('_COMMENTSPOLLS','Aktiveeri küsitlustel kommentaarid?');
define('_COMMENTSARTICLES','Aktiveeri kommentaarid uudiste artiklites?');
define('_PAGE','Lehekülg');
define('_PAGES','Leheküljed');
define('_TOGGLE','Muuda nähtavust');

// censor
define('_CENSOROPTIONS','Tsenseerimisvalikud');
define('_CENSORMODE','Tsenseerimise viis');
define('_NOFILTERING','Ei filtreeri');
define('_EXACTMATCH','Täpne vaste');
define('_MATCHBEG','Teksti alguses');
define('_MATCHANY','Igalpool tekstis');
define('_CENSORREPLACE','Asenda tsenseeritud sõnad');
// email
define('_EMAILOPTIONS','Maili süsteem');
define('_ALLOW_HTML_EMAIL','Luba kasutada HTML tage e-mailis?');
define('_USE_SMTP','Kasuta SMTP serverit PHP maileri asemel');
define('_SMTP_HOST','SMTP hosti aadress (smtp.aadress.com)');
define('_USE_SMTP_AUTH','Kas server nõuab SMTP autoriseerimist?');
define('_SMTP_USER_NAME','SMTP kasutajanimi');
define('_SMTP_USER_PASS','SMTP parool');

// cpg_adminmenu.php
define('_ADMINMENU','Adminni menüü');
define('_ADMINLOGOUT','Logi välja');
define('_AMENU0','Süsteem');
define('_AMENU1','Üldine');
define('_AMENU2','Liikmed');
define('_AMENU3','Teated');
define('_AMENU4','Foorum');
define('_AMENU5','Informatiivne');
define('_AMENU6','Linkimine');
define('_AMENU7','Kaubandus');
define('_AMENU8','Multimeedia');
define('_AMENU9','Moodulid');
define('_BMENU1','Abi');
// menu items
define('_CACHE','Vahemälu');
define('_PREFERENCES','Põhiseadistus');
define('_DATABASE','Andmebaas');
define('_BLOCKS','Plokid');
define('_MODULES','Moodulid');
define('_EDITADMINS','Administraatorid');
define('_MESSAGES','Teated');
define('_BANNERS','Bännerid');
define('_HTTPREFERERS','Viitajad');
define('_EDITUSERS','Liikmed');
define('_USERSCONFIG','Liikmete seadistus');
define('_NEWSLETTER','Uudiskiri');
define('_SUBMISSIONS','Saadetud uudised');
define('_ADDSTORY','Lisa uudis');
define('_TOPICS','Teemad');
define('_ADMPOLLS','Küsitlused');
define('_EPHEMERIDS','Täna ajaloos');
define('_REVIEWS','ülevaated');
define('_ENCYCLOPEDIA','Entsüklopeedia');
define('_SURVEYS','Küsitlused');
define('_SECTIONS','Rubriigid');
define('_ARTICLES','Artiklid');
define('_FAQ','KKK');
define('_DOWNLOAD','Failihaldus');
define('_WEBLINKS','Veebilingid');
define('_CONTENT','Sisu');
define('_SYSINFO','Süsteemiinfo');
define('_REPORTABUG','Teavita veast');
//coppermine admin
define('_W_INSTALL','Milline installatsioon?');
define('_W_PAGE','Milline lehekülg?');
//security admin
define('_SECURITY','Turvalisus');
define('_PROTECTION','Kaitse');
define('_EMAIL_DOMAINS','E-maili domeenid');
define('_FLOODING','Klõpsimine(eng k. flooding)');
define('_UUA','Tundmatud User-Agentid(lehitsejad jm)');
define('_FLOODING_TIP','Klõpsimine: viivitamine<br /><em>ajastus iga hoiatuse vahel</em>');
define('_BAN_TIP','Klõpsimine: keelamise kestvus<br /><em>kui kaua keeld kestab</em>');
define('_AUTO_UNBAN_TIP','Klõpsimine: automaatne keelu kaotamine<br /><em>eemalda keeld pärast keelu kestvusaega</em>');
define('_FOREVER','igavesti');
define('_REMOVE_SELECTED','Eemalda valitud');

//errors for cpg_error
define('_ERROR','VIGA');
define('_SEC_ERROR','Turvalisuse viga');
define('_ERROR_NOT_SET','%s ei seatud');
define('_ERROR_NO_POST','Teisest hostist postitamine on keelatud...');
define('_ERROR_NO_GET','GET nõudmised ei ole selle funktsiooni jaoks lubatud...');
define('_ERROR_BAD_CHAR','Märgid mida sa oma %s nõudes lisada püüdsid, on keelatud...');
define('_ERROR_BAD_FORMAT','See %s formaat ei ole õige.');
define('_ERROR_BAD_LINK','Sa püüdsid sellele lehele halva lingi kaudu ligi pääseda...');
define('_ERROR_NONE_TO_DISPLAY','Kahjuks %s puuduvad');
define('_ERROR_DELETE_CONF','Kas sa oled kindel, et soovid kustutada %s?');
define('_ERROR_NO_EXIST','%s ei ole olemas');
define('_ERROR_ALREADYEXIST','%s on juba olemas');
define('_TASK_COMPLETED','Toiming lõpetatud!');
define('_CONFIRM','Kinnita');
define('_FOOTER_COPYRIGHTS', 'Interaktiivne tarkvara välja lastud <a href="http://dragonflycms.org/GNUGPL.html" target="_blank" title="GNU üldine avalik litsents">GNU GPL</a> all, <a href="'.getlink('credits').'">koodi autorid</a>, <a href="'.getlink('privacy_policy').'">privaatsuspoliis</a>');

# time
$LNG = array('_time' => array(
'l' => array('Pühapäev', 'Esmaspäev', 'Teisipäev', 'Kolmapäev', 'Neljapäev', 'Reede', 'Laupäev'),
'D' => array('Pühap', 'Esmasp', 'Teisip', 'Kolmap', 'Neljap', 'Reede', 'Laup'),
'F' => array(1=>'Jaanuar', 'Veebruar', 'Märts', 'Aprill', 'Mai', 'Juuni', 'Juuli', 'August', 'September', 'Oktoober', 'November', 'Detsember'),
'M' => array(1=>'Jaan', 'Veeb', 'Mär', 'Apr', 'Mai', 'Juun', 'Juul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dets'),
));
$LNG['_time']['l'][7] =& $LNG['_time']['l'][0];
$LNG['_time']['D'][7] =& $LNG['_time']['D'][0];
