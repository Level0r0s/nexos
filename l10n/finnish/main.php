<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/finnish/main.php,v $
  $Revision: 9.30 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:49 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','fi');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %B %d @ %T %Z');
define('_DATESTRING2','%A, %B %d');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Seuraava sivu');
define('_PREVIOUSPAGE','Edellinen sivu');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Hae');
define('_LOGIN','Kirjaudu sisään');
define('_WRITES','kirjoitti:');
define('_POSTEDON','Kirjoitettu');
define('_NICKNAME','Käyttäjätunnus');
define('_PASSWORD','Salasana');
define('_WELCOMETO','Tervetuloa');
define('_EDIT','Muokkaa');
define('_DELETE','Poista');
define('_POSTEDBY','Lisännyt');
define('_READS','luettu');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Palaa takaisin</a>' : '<a href="javascript:history.go(-1)">Palaa takaisin</a>').' ]');
define('_COMMENTS','Kommentteja');
define('_PASTARTICLES','Aikaisemmat artikkelit');
define('_OLDERARTICLES','Vanhemmat artikkelit');
define('_BY','Kuka:');
define('_ON','Milloin:');
define('_LOGOUT','Kirjaudu ulos');
define('_WAITINGCONT','Odottava sisältö');
define('_WREVIEWS','Arvostelut');
define('_WLINKS','Linkkejä');
define('_ONEDAY','Päivä kuin tämä...');
define('_ASREGISTERED','Etkö ole rekisteröitynyt vielä? Voit rekisteröityä <a href="'.getlink('Your_Account&amp;file=register').'"> täällä</a>. Rekisteröityneenä käyttäjänä sinulla on käytettävissäsi mm. teemojen hallintatyökalu, sekä voit kommentoida viestejä omalla nimelläsi.');
define('_MENUFOR','Valikko');
define('_NOBIGSTORY','Tieto puuttuu');
define('_BIGSTORY','Luetuin Artikkeli:');
define('_SURVEY','Äänestys');
define('_POLLS','Kyselyt');
define('_PCOMMENTS','Kommentit:');
define('_RESULTS','Tulokset');
define('_HREADMORE','Aiheesta Lisää...');
define('_CURRENTLY','Sivustolla on parhaillaan,');
define('_GUESTS','vierasta ja');
define('_MEMBERS','jäseniä paikalla.');
define('_YOUARELOGGED','Olet kirjautunut:');
define('_YOUHAVE','Sinulla on');
define('_PRIVATEMSG','yksityisviestiä.');
define('_YOUAREANON','Etkö ole vielä rekisteröitynyt. Voit rekisteröityä ilmaiseksi klikkaamalla <a href="'.getlink('Your_Account&amp;file=register').'">TÄTÄ</a> linkkiä');
define('_NOTE','Huom:');
define('_ADMIN','Ylläpitäjä');
define('_WERECEIVED','Sivua on ladattu');
define('_PAGESVIEWS','kertaa sitten');
define('_TOPIC','Aihe');
define('_UDOWNLOADS','Latauskertoja');
define('_VOTE','Vastaa');
define('_VOTES','Vastauksia');
define('_MVIEWADMIN','Näytä vain ylläpitäjille');
define('_MVIEWUSERS','Näytä vain rekisteröidyille');
define('_MVIEWANON','Näytä vain vieraille');
define('_MVIEWALL','Näytä kaikkille kävijöille');
define('_EXPIRELESSHOUR','Päättyy 1 tunnin kuluessa');
define('_EXPIREIN','Päättyy');
define('_UNLIMITED','Päättymätön');
define('_HOURS','Tuntia');
define('_RSSPROBLEM','RSS lähteessä saattaa olla ongelmia tällä sivulla');
define('_SELECTLANGUAGE','Valitse kieli');
define('_SELECTGUILANG','Valitse käytettävä kieli:');
define('_NONE','Ei valintaa');
define('_BLOCKPROBLEM','<center>Odottamaton virhe. Yritä myöhemmin uudelleen.</center>');
define('_BLOCKPROBLEM2','<center>Sisältöä ei voi juuri nyt näyttää.</center>');
define('_MODULENOTACTIVE','Toiminto suljettu!');
define('_NOACTIVEMODULES','Toiminto suljettu');
define('_MODULENOEXIST','Olemme pahoillamme, mutta %s sivua ei löydy');
define('_FORADMINTESTS','(toimintoa testataan)');
define('_BBFORUMS','Foorumi');
define('_ACCESSDENIED','Pääsy estetty');
define('_RESTRICTEDAREA','Toiminto on estetty.');
define('_MODULEUSERS','Tämä alue on tarkoitettu vain <i>rekisteröityneille käyttäjille</i><br /><br />Rekisteröidy  <a href="'.getlink("Your_Account&amp;file=register").'">täällä</a>saadaksesi<br />käyttöoikeudet tälle alueelle. Kiitos.<br /><br />');
define('_MODULEUSERS2','Voit rekisteröityä <a href="'.getlink('Your_Account&amp;file=register').'">TÄSTÄ</a> linkistä, jolloin saat käyttöoikeuden myös tähän osaan sivustoa.<br /><br />Kiitoksia ymmärryksestäsi');
define('_MODULESADMINS','Tämä alue on tarkoitettu vain <i>sivuston ylläpidolle</i><br /><br />');
define('_MODULESGROUPS','vaaditaan ryhmään kuuluminen');
define('_HOME','Etusivu');
define('_HOMEPROBLEM','Palvelinvirhe: Etusivua ei löydy!!!');
define('_ADDAHOME','Tee tästä aloitussivu');
define('_HOMEPROBLEMUSER','Palvelinvirhe: Sivua editoidaan. Yritä myöhemmin uudelleen.');
define('_MORENEWS','Lisää Artikkeleissa');
define('_ALLCATEGORIES','Kaikki kategoriat');
define('_SPAMGUARDPROTECTED','Spammi valvonta on estänyt tämän sähköpostin lähettämisen');
define('_M_CHARS','Maksimi: %s merkkiä');

define('_SYS_MESSAGE','Järjestelmän viesti');
define('_SYS_MESSAGES','Järjestelmän viestit');
define('_SYS_MAINTENANCE','Sivustosi on huoltotilassa');
define('_SYS_DEMO','Käytät sivua ylläpitäjän esittely tilassa<br />Et voi tehdä mitään muutoksia tietokantaan<br /><a href="'.adminlink('logout').'">Kirjaudu ulos!</a>');

define('_DATE','Päivä');
define('_HOUR','Tunti');
define('_UMONTH','Kuukausi');
define('_YEAR','Vuosi');
define('_JANUARY','Tammikuu');
define('_FEBRUARY','Helmikuu');
define('_MARCH','Maaliskuu');
define('_APRIL','Huhtikuu');
define('_MAY','Toukokuu');
define('_JUNE','Kesäkuu');
define('_JULY','Heinäkuu');
define('_AUGUST','Elokuu');
define('_SEPTEMBER','Syyskuu');
define('_OCTOBER','Lokakuuu');
define('_NOVEMBER','Marraskuu');
define('_DECEMBER','Joulukuu');

define('_MONDAY','Maanantai');
define('_TUESDAY','Tiistai');
define('_WEDNESDAY','Keskiviikko');
define('_THURSDAY','Torstai');
define('_FRIDAY','Perjantai');
define('_SATURDAY','Lauantai');
define('_SUNDAY','Sunnuntai');
//three letter abbrev.
define('_ABR_MONDAY','Maa');
define('_ABR_TUESDAY','Tii');
define('_ABR_WEDNESDAY','Kes');
define('_ABR_THURSDAY','Tor');
define('_ABR_FRIDAY','Per');
define('_ABR_SATURDAY','Lau');
define('_ABR_SUNDAY','Sun');

define('_BWEL','Tervetuloa');
define('_BPM','Yksityisviestit');
define('_BUNREAD','Lukemattomia');
define('_BREAD','Luettuja');
define('_BMEMP','Jäsenet');
define('_BLATEST','Viimeisin');
define('_BTD','Uusia tänään');
define('_BYD','Uusia eilen');
define('_BOVER','Yhteensä');
define('_BVISIT','Paikalla');
define('_BVIS','Vieraita');
define('_BMEM','Jäsenet');
define('_BTT','Yhteensä');
define('_BON','Paikalla NYT');
define('_BREG','Rekisteröidy');
define('_BROADCAST','Julkinen viesti');
define('_BROADCASTFROM','Julkisen viestin lähetti');
define('_TURNOFFMSG','Poista käytöstä julkiset viestit');
define('_JOURNAL','Julkaisu');
define('_READMYJOURNAL','Lue julkaisuni');
define('_ADD','Lisää');
define('_YES','Kyllä');
define('_NO','Ei');
define('_INVISIBLEMODULES','Näkymättömät moduulit');
define('_ACTIVEBUTNOTSEE','(Aktiiviset mutta näkymättömät linkit)');
define('_BOTS','Botit');

define('_UM','Dragonfly päivitysmonitori');
define('_UM_F','Yhteys päivitys palvelimeen epäonnistui. Yritä myöhemmin uudestaan.');
define('_UM_G','Käytät uusinta versiota Dragonfly:sta');
define('_UM_R','Ole hyvä ja <a href="%2$s" target="_blank">päivitä</a> CPG-Nuke versioon %1$s');

define('_TEAM','Teami');
define('_LINKAPPROVEDMSG','Onneksi olkoon! Internetlinkki jonka lisäsit on hyväksytty, ole hyvä ja linkitä sivustollemme.');
define('_MODREQLINKS','Muok. Linkit');
define('_BROKENLINKS','Virh. Linkit');
define('_MODREQDOWN','Muok. Ladattavat');
define('_BROKENDOWN','Virh. Ladattavat');
define('_PAGEGENERATION','Sivun luontiaika:');
define('_SECONDS','sekunttia');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Sivun luonti kesti %1$s sekunttia ja %2$s DB tietokannan hakeminen %3$s sekunttia');
define('_YOUHAVEONEMSG','Sinulla on yksi uusi viesti');
define('_NEWPMSG','Uusi yksityinen viesti');
define('_CONTRIBUTEDBY','Lahjoittanut');
define('_CHAT','Chatti');
define('_REGISTERED','Rekisteröidy');
define('_CHATGUESTS','Vieras');
define('_USERSTALKINGNOW','Käyttäjä aktiivinen');
define('_ENTERTOCHAT','Siirry Chattiin');
define('_CHATROOMS','Vapaat Huoneet');
define('_ALLTOPICS','Kaikki kanavat');
define('_ASSOTOPIC','Katso myös');
define('_HELLO','Hei');
define('_ALL','Kaikki');
define('_URL','URL');
define('_SUBJECT','Otsikko');
define('_PREVIEW','Esikatselu');
define('_SEND','Lähetä');
define('_ANONYMOUS','Vieras');
define('_BREADCRUMB', 'Breadcrumb Delimiter, separates words in pagetitles');
define('_BC_DELIM',''.isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&gt;&gt;');//''. is for cpglang
define('_RESET','Resetoi');
define('_AT','Klo');
define('_LASTMSGS','%s Viimeistä viestiä');
define('_LASTPOSTBY','Kirjoitti %1$s aiheeseen %2$s / %3$s');
define('_PRINTER','Kevyempi versio tulostusta varten');

define('_CREDITS_TITLE','Creditit');
define('_CREDITS_PRODUCT','Tuote');
define('_CREDITS_DESC','Kuvaus');
define('_CREDITS_AUTHORS','Kirjoittaja');

define('_PP_TITLE','Rekisteritiedot');
define('_PP_MODIFY','Muokkaa tätä viestiä');

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
define('_TB_BLOCK','Tietojesi hallinta');
define('_TB_TASKS','Tehtävät');
define('_TB_INFO','Omat tietosi');
define('_TB_PROFILE_INFO','Julkiset tietosi');
define('_TB_EDIT_PROFILE','Käyttäjätietosi');
define('_TB_EDIT_REG','Rekisteröitymistietosi');
define('_TB_EDIT_PRIVATE','Henkilökohtaiset tietosi');
define('_TB_EDIT_AVATAR','Oma avatarini');
define('_TB_DELETE','Poista käyttäjätunnukseni');
define('_TB_CONFIG','Asetukset');
define('_TB_EDIT_PREFS','Omat asetuksesi');
define('_TB_EDIT_HOME','Etusivun asetukset');
define('_TB_EDIT_COMM','Kommenttiesi asetukset');
define('_TB_PERSONAL','Yksilöllinen');
define('_TB_PERSONAL_GALLERY','Oma galleriani');
define('_TB_PERSONAL_JOURNAL','Julkaisuni');
define('_TB_PRIVMSGS','Yksityisviestit');
define('_TB_PRIVMSGS_INBOX','Saapuneet');
define('_TB_PRIVMSGS_OUTBOX','Lähtevät');
define('_TB_PRIVMSGS_SENTBOX','Lähetetyt');
define('_TB_PRIVMSGS_SAVEBOX','Talletetut');
define('_TB_PRIVMSGS_SEND','Lähetä viesti');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','Käyttäjätiedot');
define('_SECURITYCODE','Varmistuskoodi');
define('_TYPESECCODE','Syötä Varmistuskoodi');
define('_MEMBERSOPTIONS','Käyttäjäasetukset');
define('_READSEND','Lue/lähetä yksityisviestejä.');
define('_INBOX','Saapuneet');
define('_NEW','Uusi');
define('_ACCOUNTOPTIONS','Muuta tietojasi ja lue viestejä.');
define('_LOGOUTACCT','Kirjaudu ulos');
define('_LOGOUTADMINACCT','Kirjaudu ulos ylläpidosta.');
define('_BLOGIN','Omat Tiedot');
define('_BFLOGIN','Foorumin Profiili');
define('_BHID','Piilotettu');
define('_WHOWHERE','Sijainnit');
define('_STAFFONL','Toimittajat');
define('_STAFFNONE','Ei toimittajia paikalla!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Yhteisö');
define('_BlogsLANG','Julkaisut');
define('_ContentLANG','Sisältö');
define('_coppermineLANG','Kuvagalleria');
define('_CPGlangLANG','Auta kääntämään');
define('_DownloadsLANG','Ladattavat');
define('_EncyclopediaLANG','Tietosanakirja');
define('_ForumsLANG','Foorumi');
define('_ContactLANG','Ota yhteyttä');
define('_FAQLANG','FAQ - Apua');
define('_Members_ListLANG','Jäsenlista');
define('_NewsLANG','Uutisia');
define('_ReviewsLANG','Arvosteluja');
define('_SearchLANG','Hae');
define('_StatisticsLANG','Tilastoja');
define('_Stories_ArchiveLANG','Artikkelihakemisto');
define('_Submit_NewsLANG','Lisää uutinen');
define('_SurveysLANG','Mielipidekysely');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Aiheet');
define('_Private_MessagesLANG','Yksityisviestit');
define('_Tell_a_FriendLANG','Kerro ystävällesi');
define('_Web_LinksLANG','Linkit');
define('_Your_AccountLANG','Käyttäjätietosi');
define('_CPG_EventsLANG','Kalenteri');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Languages!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Groups');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Headlines');

define('_COMMUNICATION','Kommunikointi');
define('_FRIENDS','Ystävät');
define('_STORE','Kauppa');
define('_PRODUCTS','Tuotteet');
define('_DONATE','Lahjoita');
define('_HELP','Apua');
define('_GALLERIES','Galleriat');
define('_DOCS','Dokumentit');
define('_RULES','Säännöt & ohjeet');
define('_MENU','Päävalikko');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','<strong>Olet</strong> tilannut<br />uutiskirjeemme');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','<strong>Et</strong> ole tilannut <br />uutiskirjettämme');
define('_NEWSLETTERBLOCKREGISTER','Sinun täytyy olla<br /><strong>rekisteröitynyt käyttäjä</strong><br />saadaksesi uutiskirjeemme');
define('_NEWSLETTERBLOCKSUBSCRIBE','Tilaa');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Poista tilaus');
define('_NEWSLETTERBLOCKREGISTERNOW','Rekisteröidy nyt!');
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
define('_SAVECHANGES','Tallenna muutokset');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Kieli');
define('_FUNCTIONS','Tehtävät');
define('_SHOW','Näytä');
define('_TO','To');
define('_DAY','Päivä');
define('_LAST','Viimeiset');
define('_ACTIVE','Aktiivinen');
define('_DEACTIVATE','Deaktivoi');
define('_INACTIVE','Ei aktiivinen');
define('_ACTIVATE','Aktivoi');
define('_ACTIVATE2','Aktivoidaanko?');
define('_VIEW','Näytetään');
define('_VIEWPRIV','Kuka voi nähdä tämän?');
define('_MVADMIN','Vain ylläpitäjät');
define('_MVUSERS','Vain rekisteröityneille käyttäjille');
define('_MVANON','Vain anonyymeille käyttäjille');
define('_MVALL','Kaikki vierailijat');
define('_IMAGE','Kuva');
define('_GO','Mene!');
define('_OPTION','Vaihtoehdot');
define('_CATEGORY','Kategoria');
define('_SUBCATEGORY','Alakategoria');
define('_ID','Tunnus');
define('_EXPIRATION','Päättyminen');
define('_DAYS','päivää');
define('_WARNING','Varoitus');
define('_POLLTITLE','Otsikko');
define('_POLLEACHFIELD','Kirjoita jokainen vaihtoehto omalle rivilleen');
define('_ADDCATEGORY','Lisää kategoria');
define('_PAGEBREAK','Jos tahdotte käyttää opetuksessa useita sivuja, voitte erotella sivut käyttäen <b>&lt;!--pagebreak--&gt;</b> tagia.');
define('_SIGNATURE','Allekirjoitus');
define('_DESCRIPTION','Kuvaus');
define('_EDITCATEGORY','Muokkaa kategoriaa');
define('_IN','sisään');
define('_DESCRIPTION255','Kuvaus: (255 merkkiä maksimissaan)');
define('_MODCATEGORY','Muokkaa kategoriaa');
define('_SUBMITTER','Lisännyt');
define('_VISIT','Vieraile');
define('_EXTENDEDTEXT','Loput tekstistä');
define('_CHECKCATEGORIES','Tarkista Kategoriat');
define('_INCLUDESUBCATEGORIES','(sisällytä Alakategoriat)');
define('_CHECKSUBCATEGORIES','Tarkista Alakategoriat');
define('_VALIDATELINKS','Vahvista linkit');
define('_FAILED','Epäonnistui!');
define('_BEPATIENT','(ole kärsivällinen kiitos)');
define('_VALIDATINGCAT','Vahvistaa Kategorian (ja kaikki alakategoriat)');
define('_VALIDATINGSUBCAT','Vahvistaa Alakategorian');
define('_OK','Ok!');
define('_CHECK','Tarkista');
define('_IGNORE','Älä hyväksy');
define('_HITS','Käyntiä');
define('_FILESIZE', 'Tiedostokoko');
define("_EZTHEREIS","Täällä on");
define("_EZSUBCAT","alakategoriaa");
define("_EZATTACHEDTOCAT","tämän kategorian alla");
define("_EZBROKENLINKS","Virheelliset linkit");
define("_DELEZLINKCATWARNING","VAROITUS : Haluatko poistaa tämän kategorian ?<br /> Poistat samalla myös kaikki alakategoriat ja siihen kytketyt linkit !");

// index.php
define('_DEFHOMEMODULE','Oletus Kotisivu Moduuli');
define('_MODULEINHOME','Moduuli Ladattu kotisivulla:');
define('_CHANGE','Muuta');
define('_WHOSONLINE','Linjoilla');
define('_NP_ADMIN','Muistio');
define('_NP_LOCKED','Muistio on lukittu <br/>Vain järjestelmän');
define('_NP_SAVE','Tallenna muistiinpanot');
define('_NP_UNLOCK','Avaa muistio');
define('_NP_LOCK','Lukitse muistio');
// news
define('_STICKY','Hankalat Artikkelit');
define('_ARTICLEUP','Artikkeli YLÖS');
define('_ARTICLEDOWN','Artikkeli ALAS');
define('_UNSTICK','Ei hankala');
define('_STICK','Hankala');
define('_AUTOMATEDARTICLES','Ajastetut uutiset');
define('_STORYID','Uutisen ID');
define('_CURRENTPOLL','Tämän hetkinen kysely');

// admin.php
define('_ADMINISTRATION','Hallinta');
define('_NOADMINYET','There are no Administrators Accounts yet, proceeed to create the Super User:');
define('_CREATEUSERDATA','Haluatko luoda normaalin käyttäjän samoilla tiedoilla?');
define('_ADMINLOGIN','Kirjaudu Ylläpitäjänä');
define('_ADMINID','Tunnus');
define('_EMAIL','Sähköposti');
define('_SUBMIT','Lähetä');
define('_YOUARELOGGEDOUT','Olet kirjautunut ulos!');
define('_PASSWDNOMATCH','UPS, uudet salasanat eivät täsmää. Ole hyvä ja tarkista ne');
define('_LOGIN_REMEMBERME','Muista minut?');
define('_ADMINMENU_LOGOUT','Kirjaudu ulos ylläpidosta');
define('_PASSWORD_MALFORMED','Sisällytä ainakin yksi numero, yksi iso kirjain ja yksi pieni kirjain salasanaasi.');

// admins.php
define('_AUTHORSADMIN','Ylläpitäjien muokkaaminen');
define('_NAME','Nimi');
define('_REQUIRED','Pakollinen');
define('_MODIFYINFO','Muokkaa tietoja');
define('_DELAUTHOR','Tuhoa ylläpitäjä');
define('_ADDAUTHOR','Lisää uusi ylläpitäjä');
define('_PERMISSIONS','Oikeudet');
define('_SUPERUSER','Pääkäyttäjä');
define('_SUPERWARNING','HUOM: Jos Super User on valittu, hänellä on oikeus kaikkeen!');
define('_ADDAUTHOR2','Lisää ylläpitäjä');
define('_RETYPEPASSWD','salasanan varmistus');
define('_FORCHANGES','(Vain vaihtamista varten)');
define('_COMPLETEFIELDS','Sinun täytyy täyttää kaikki vaadittavat kentät');
define('_CREATIONERROR','Virhe: Ylläpitäjää ei luotu');
define('_AUTHORDEL','Poista ylläpitäjä');
define('_PUBLISHEDSTORIES','Tällä ylläpitäjällä on julkisia uutisia');
define('_SELECTNEWADMIN','Valitse kenelle ylläpitäjälle uutiset siirretään');
define('_GODNOTDEL','Pääkäyttäjää ei voi poistaa!');
define('_MAINACCOUNT','Pääkäyttäjä *');
define('_USERS','Käyttäjät');

// banners.php
define('_BANNERSADMIN','Bannereiden Ylläpito');
define('_DELETEBANNER','Tuhoa banneri');
define('_SURETODELBANNER','Oletko varma, että tahdot poistaa bannerin?');
define('_EDITBANNER','Muokkaa banneria');

// blocks.php
define('_BLOCKSADMIN','Blokkien ylläpito');
define('_CENTER','Keskellä');
define('_CENTERUP','Keskellä ylhäällä');
define('_CENTERDOWN','Keskellä alhaalla');
define('_BLOCKFILE','(Blokkaa Tiedosto)');
define('_BLOCKFILE2','TIEDOSTO');
define('_BLOCKSYSTEM','SYSTEEMI');
define('_ADDNEWBLOCK','Lisää uusi blokki');
define('_RSSFILE','RSS/RDF tiedoston URL');
define('_ONLYHEADLINES','(Vain otsikoille)');
define('_REFRESHTIME','Päivitysaika');
define('_CREATEBLOCK','Luo blokki');
define('_EDITBLOCK','Muokkaa blokkia');
define('_BLOCK','Blokki');
define('_SAVEBLOCK','Tallenna blokki');
define('_BLOCKACTIVATION','Blokin aktivointi');
define('_BLOCKPREVIEW','Tämä on esikatselu ');
define('_WANT2ACTIVATE','Haluatko aktivoida tämän blokin?');
define('_ARESUREDELBLOCK','Haluatko poistaa tämän');
define('_BLOCKUP','Siirrä blokkia ylöspäin');
define('_BLOCKDOWN','Siirrä blokkia alaspäin');
define('_BLOCKTOP','Siirrä blokki ylimmäiseksi');
define('_BLOCKBOTTOM','Siirrä blokki alimmaiseksi');
define('_TITLE','Otsikko');
define('_POSITION','Paikka');
define('_WEIGHT','Paino');
define('_STATUS','Tila');
define('_LEFTBLOCK','Vasen blokki');
define('_LEFT','Vasen');
define('_RIGHTBLOCK','Oikea blokki');
define('_RIGHT','Oikea');
define('_TYPE','Tyyppi');
define('_CUSTOM','Muokattu');
define('_FILENAME','Tiedostonimi');
define('_FILEINCLUDE','(Valitse mukaan mukautettu Blokki. Muita kenttiä ei oteta huomioon)');

// comments.php
define('_REMOVECOMMENTS','Tuhoa kommentit');
define('_SURETODELCOMMENTS','Oletteko varma, että tahdotte tuhota valitut kommentit ja kaikki siihen tehdyt vastaukset?');

// database.php
define('_SAVEDATABASE','Varmuuskopio tietokanta');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Nykyinen tilanne');
define('_ACTIVATEPAGE','Aktivoi Tämä Sivu?');

// history.php
define('_EPHEMADMIN','Historiassa ylläpito');
define('_ADDEPHEM','Lisää uusi historiallinen tapahtuma');
define('_EPHEMDESC','Historian kuvaus');
define('_EPHEMMAINT','Historian tehtävät (Muokkaa/Poista):');
define('_EPHEMEDIT','Muokkaa historiaa');
define('_EPHEMDELETE','Poista Merkintä');

// headlines.php
define('_RSSFAIL','On vähän ongelmaa RSS tiedoston URLIn kanssa');
define('_RSSTRYAGAIN','Tarkastappas URL ja RSS -tiedosto.');
define('_RSSCONTENT','(RSS/RDF sisältö)');
define('_IFRSSWARNING','Jos laitat URL kenttään jotain, niin ylläolevaa sisältöä ei näytetä!');
define('_SETUPHEADLINES','(Valitse Custom ja kirjoita URL tai valitse listalta haluttu saitti, jolta tahdot otsikoita näytettäväksi sivuillesi)');
define('_HEADLINESADMIN','Otsikoiden hallinta');
define('_ADDHEADLINE','Lisää otsikko');
define('_EDITHEADLINE','Muokkaa otsikoita');
define('_SURE2DELHEADLINE','HUOM: Oletko varma, että tahdot poistaa tämän otsikon?');

// messages.php
define('_MESSAGESADMIN','Viestien Ylläpito');
define('_MESSAGETITLE','Otsikko');
define('_MESSAGECONTENT','Sisältö');
define('_ALLMESSAGES','Viestien yleiskatsaus');
define('_EDITMSG','Muokkaa viestiä');
define('_ADDMSG','Lisää viesti');
define('_REMOVEMSG','Haluatko varmasti poistaa tämän viestin?');
define('_CHANGEDATE','Change start date to today?');
define('_IFYOUACTIVE','(Jos aktivoit tämän viestin nyt, aloituspäiväksi tulee tämä päivä)');

// modules.php
define('_MODULESADMIN','Moduulien ylläpito');
define('_HOMECONFIG','Etusivun asetukset');
define('_MODULESADDONS','Moduulit ja lisäosat');
define('_INHOME','Aseta etusivuksi');
define('_MODULEHOMENOTE','<strong>.: TÄRKEÄÄ TIETOA :.</strong><br />Uudet moduulit jotka on lisätty /modules/ kansioon, lisätään automaattisesti järjestelmään<br />Poistaessasi moduulin  module\'s kansiosta, poistaa tämä myös sen automaattisesti järjestelmästä<br /><br />Moduuli joka on vahvennetulla tekstillä merkitty on asetettu etusivuksi<br />Tätä moduulia ei voi käyttäjät poistaa käytöstä.');
define('_PUTINHOME','Aseta etusivuksi');
define('_SURETOCHANGEMOD','Haluatko muuttaa etusivuksi seuraavan moduulin');
define('_NOTINMENU','[ <strong>&middot;</strong> ] tarkoittaa että moduuli on piiloitettu näkyvistä moduuuli blokista');
define('_SHOWINMENU','Näytetään valikossa?');
define('_CUSTOMTITLE','Muokattu otsikko');
define('_MODULEEDIT','Moduulin muokkaus');
define('_VERSION','Versio');
define('_UPGRADE','Päivitä %s');
define('_DBSIZE','DB Koko');
define('_CVS_EXPLAIN','It seems this module has a CVS directory. CVS means Concurrent Versioning System.<br />Thru CVS you can recieve the latest builds of files very easily.<br /><b>BUT</b> the latest version of a file could have bugs since it is not an official release.<br />If you are familiar with PHP you can do an update of the files by clicking the link below.<br />Don\'t forget to make an backup first !!!');
define('_CVS_UPDATE','Päivitä CVS tiedostot');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','Keneltä');
define('_STAFF','Ylläpito');
define('_NL_RECIPS','Vastaanottajat');
define('_SUBSCRIBEDUSERS','Hyväksytyt jäsenet');
define('_NL_ALLUSERS','Kaikki jäsenet');
define('_NL_ADMINS','Ylläpitäjät');
define('_NL_REGARDS','Ystävällisesti');
define('_DISCARD','Hylkää');
define('_REVIEWTEXT','Tarkista viestisi sisältö ja oikeinkirjoitus');
define('_MANYUSERSNOTE','Jos uutiskirjeen vastaanottajia on useita, saattaa toiminnon suorittaminen kestää hetken aikaa<br />Odota kärsivällisesti!');
define('_NL_NOUSERS','Valitussa ryhmässä ei ole yhtään jäsentä<br />Palaa takaisin ja valitse toinen ryhmä');
define('_NUSERWILLRECEIVE','käyttäjät jotka vastaanottavat tämän uutiskirjeen');
define('_NLUNSUBSCRIBE',"Vastaanotit tämän uutiskirjeen koska olet hyväksynyt sen vastaanottamisen käyttäjätiedoissasi\n\nVoit myös estää vastaisuudessa uutiskirjeiden vastaanottamisen koska tahansa klikkaamalla <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">TÄSTÄ</a> linkistä\n\nJos sinulla on lisää kysyttävää asiasta, lähetä sähköpostia <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">ylläpidolle</a>");
define('_NEWSLETTERSENT','Uutiskirje on lähetetty');

// referers.php
define('_WHOLINKS','Kuka linkittää sivuillemme?');
define('_DELETEREFERERS','Tuhoa linkitykset');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Alateksti');
define('_DEBUG', 'Virhetila');
define('_SITECONFIG','Sivuston asetukset');
define('_GENSITEINFO','Sivuston yleiset asetukset');
define('_SITENAME','Sivuston nimi');
define('_SITEURL','Sivuston URL');
define('_SITELOGO','Sivuston logo');
define('_SITESLOGAN','Sivuston kuvaus - metatietoa');
define('_STARTDATE','Milloin sivusto julkaistiin?');
define('_ADMINEMAIL','Ylläpitäjän sähköpostiosoite');
define('_ITEMSTOP','Montako asiaa näytetään TOP -sivulla');
define('_STORIESHOME','Montako artikkelia näytetään etusivulla');
define('_OLDSTORIES','Montako artikkelia näytetään vanhat -blokissa');
define('_ALLOWANONPOST','Salli anonyymin kirjoittaa materiaalia?');
define('_DEFAULTTHEME','Valitse perusteema sivustolle');
define('_SHOWSEC','Näytä vahvistukoodi');
define('_TOOLTIPS','Näytä aputyökalut määrätyissä kentissä');
define('_UM_TOGGLE','Aktivoi päivitysmonitori');
define('_UM_EXPLAIN','Tämä lähettää 2 pientä tietoa sivustostasi, dragonflycms.org:iin käyttämäsi Dragonfly version, ja jos käyttämääsi versioon olisi tullut tärkeitä päivityksiä. Ainoa tieto mitä lähetetään Dragonfly versiosi numero. Me <strong>EMME</strong> tallenna näitä tietoja palvelimellemme.');
// maintenance
define('_MAINTENANCE','Ylläpito');
define('_MESSAGE','Ylläpitotilan viesti');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','Kieli järjestelmä');
define('_SELLANGUAGE','Sivuston oletuskieli');
define('_LOCALEFORMAT','Paikallinen aikamuoto');
define('_ACTMULTILINGUAL','Aktivoi sivuston monikieli ominaisuudet');
define('_ACTUSEFLAGS','Käytä lippuja alasvetolaatikossa');
// banners
define('_BANNERSOPT','Banneri järjestelmä');
define('_ACTBANNERS','Aktivoi banneri järjestelmä');
// footer
define('_FOOTERMSG','Sivun alateksti (lisäasetus)');
define('_FOOTERLINE1','Alateksti, Rivi yksi');
define('_FOOTERLINE2','Alateksti, Rivi kaksi');
define('_FOOTERLINE3','Alateksti, Rivi kolme');
// backend
define('_BACKENDCONF','Yhteenliittymät');
define('_BACKENDTITLE','Syötteen otsikko');
define('_BACKENDLANG','Syötteen kieli');
// mail stories
define('_MAIL2ADMIN','Ylläpitäjälle kertominen');
define('_NOTIFYSUBMISSION','Lähetä sähköpostilla huomio uudesta materiaalista?');
define('_EMAIL2SENDMSG','Mihin sähköpostiosoitteeseen');
define('_EMAILSUBJECT','Otsikko');
define('_EMAILMSG','Viesti');
define('_EMAILFROM','(Keneltä)');
// comments
define('_COMMENTSOPT','Kommenttien asetukset');
define('_COMMENTSLIMIT','kommentin pituus kilotavuina');
define('_COMMENTSMOD','Sivustolla kommentointi');
define('_MODADMIN','Ylläpitäjä moderoi');
define('_MODUSERS','Käyttäjät moderoivat');
define('_NOMOD','Ei moderointia');
// adminmenu
define('_GRAPHICOPT','Ylläpitäjän valikon ulkoasu');
define('_BOTH','Molemmat');
define('_GRAPHICAL','Graafinen');
define('_SIDEBLOCK','Laita-blokki');
// miscellaneous
define('_MISCOPT','Sekalaiset');
define('_ACTIVATEHTTPREF','Aktivoi HTTP linkitysten seuranta');
define('_MAXREF','Montako linkitystä näytetään');
define('_COMMENTSPOLLS','Aktivoi kommentit mielipidekyselyissä');
define('_COMMENTSARTICLES','Aktivoi kommentit uutis artikkeleissa');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','Sensurointi järjestelmä');
define('_CENSORMODE','Sensurointi tyyli');
define('_NOFILTERING','Ei suodatusta');
define('_EXACTMATCH','Tarkka vastaavuus');
define('_MATCHBEG','Vastaavuus tekstin alussa');
define('_MATCHANY','Vastaavuus missä kohtaa tekstiä vaan');
define('_CENSORREPLACE','Korvataan seuraavalla sanalla');
// email
define('_EMAILOPTIONS','Sähköposti järjestelmä');
define('_ALLOW_HTML_EMAIL','Salli käyttää HTML sähköpostissa');
define('_USE_SMTP','Käytä SMTP serveriä käyttäessäsi PHP\'s maileria');
define('_SMTP_HOST','SMTP palvelimen osoite (smtp.example.com)');
define('_USE_SMTP_AUTH','Vaatiiko palvelin SMTP vahvistuksen');
define('_SMTP_USER_NAME','SMTP käyttäjänimi');
define('_SMTP_USER_PASS','SMTP salasana');

// cpg_adminmenu.php
define('_ADMINMENU','Ylläpitopaneeli');
define('_ADMINLOGOUT','Kirjaudu ulos');
define('_AMENU0','System');
define('_AMENU1','Yleinen');
define('_AMENU2','Jäsenet');
define('_AMENU3','Viestit');
define('_AMENU4','Foorumi');
define('_AMENU5','Tiedotteet');
define('_AMENU6','Linkitykset');
define('_AMENU7','Kauppa');
define('_AMENU8','Multimedia');
define('_AMENU9','Moduulit');
define('_BMENU1','Apua');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','Yleiset asetukset');
define('_DATABASE','Tietokanta');
define('_BLOCKS','Blokit');
define('_MODULES','Moduulit');
define('_EDITADMINS','Muokkaa Ylläpitäjiä');
define('_MESSAGES','Viestit');
define('_BANNERS','Mainokset');
define('_HTTPREFERERS','HTTP Linkitykset');
define('_EDITUSERS','Jäsenet');
define('_USERSCONFIG','Jäsenten asetukset');
define('_NEWSLETTER','Uutiskirje');
define('_SUBMISSIONS','Hyväksyttävät');
define('_ADDSTORY','Lisää uutinen');
define('_TOPICS','Aiheet');
define('_ADMPOLLS','Mielipidekyselyt');
define('_EPHEMERIDS','Tänään historiassa');
define('_REVIEWS','Arvostelut');
define('_ENCYCLOPEDIA','Tietosanakirja');
define('_SURVEYS','Kyselyt');
define('_SECTIONS','Opetukset');
define('_ARTICLES','Artikkelit');
define('_FAQ','UKK');
define('_DOWNLOAD','Tiedostot');
define('_WEBLINKS','Linkit');
define('_CONTENT','Sisältö');
define('_SYSINFO','System Info');
define('_REPORTABUG','Raportoi bugista');
//coppermine admin
define('_W_INSTALL','Mikä asennus?');
define('_W_PAGE','Mikä sivu?');
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
define('_ERROR','VIRHE');
define('_SEC_ERROR','Turvallisuus virhe');
define('_ERROR_NOT_SET','%s ei ole asetettu');
define('_ERROR_NO_POST','Viestien lisääminen toiselta palvelimelta on kielletty...');
define('_ERROR_NO_GET','GET sääntö ei salli tätä toimintoa...');
define('_ERROR_BAD_CHAR','Merkki jota yrität lisätä %s on säännöissä kielletty...');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','Olet tullut tälle sivulle virheellisen linkin takia...');
define('_ERROR_NONE_TO_DISPLAY','Täällä ei ole %s näytettäväksi');
define('_ERROR_DELETE_CONF','Haluatko todella poistaa tämän %s?');
define('_ERROR_NO_EXIST','%s ei löydy');
define('_ERROR_ALREADYEXIST','%s on jo olemassa');
define('_TASK_COMPLETED','Toiminto suoritettu!');
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
