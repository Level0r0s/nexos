<?php
/**************************************************************  
  CPG-NUKE: Advanced Content Management System
********************************************
  A highly modified version of PHP-Nuke 6.5
  which is Copyright (c) 2002 by Francisco Burzi
  http://phpnuke.org
  Under the GNU General Public License version 2
***************************************************************
  Main language file
  Last modification: 
  Now UTF-8 encoded                                                    
  $Id: lang-bosanski.php,v 1.3 2004/08/18 04:23:17 akamu Exp $    
***************************************************************/
/* For Multilingual Modules Block  */
define("_CPGlangLANG", "Help Translate");
define("_ContentLANG", 'Content');
define("_coppermineLANG", 'Photo Gallery');
define("_DownloadsLANG", 'Downloads');
define("_EncyclopediaLANG", 'Encyclopedia');
define("_ForumsLANG", 'Community Forums');
define("_ContactLANG", 'Contact Us');
define("_FAQLANG", 'FAQ - Help');
define("_JournalLANG", 'Journal');
define("_Members_ListLANG", 'Members List');
define("_NewsLANG", 'News');
define("_ReviewsLANG", 'Reviews');
define("_SearchLANG", 'Search');
define("_SectionsLANG", 'Sections');
define("_StatisticsLANG", 'Statistics');
define("_Stories_ArchiveLANG", 'Stories Archive');
define("_Submit_NewsLANG", 'Submit News');
define("_SurveysLANG", 'Surveys');
define("_TopLANG", 'Top 10');
define("_TopicsLANG", 'Topics');
define("_Private_MessagesLANG", 'My Private_Messages');
define("_Recommend_UsLANG", 'Recommend Us');
define("_Web_LinksLANG", 'Links');
define("_Your_AccountLANG", 'My Account');
define("_EVENTS4ULANG", "Calendar");
define("_COMMUNITY", "Community");
define("_COMMUNICATION", "Communication");
define("_FRIENDS", "Friends");
define("_STORE", "Store");
define("_PRODUCTS", "Products");
define("_DONATE", "Donate");
define("_HELP", "Help");
define("_GALLERIES", "Galleries");
define("_DOCS", "Documentation");
define("_RULES", "Rules & regulations");

/* END Multilingual Modules Block */
/* START Newsletter Block */
define("_NEWSLETTERBLOCKSUBSCRIBED", "You <strong>are</strong> subscribed to<br />our newsletter");
define("_NEWSLETTERBLOCKNOTSUBSCRIBED", "You are <strong>not</strong> subscribed to<br />our newsletter");
define("_NEWSLETTERBLOCKREGISTER", "You must be a<br /><strong>registered user</strong><br />to receive our newsletter");
define("_NEWSLETTERBLOCKSUBSCRIBE", "Subscribe");
define("_NEWSLETTERBLOCKUNSUBSCRIBE", "Unsubscribe");
define("_NEWSLETTERBLOCKREGISTERNOW", "Register Now!");
define("_NEWSLETTERBLOCKNEWSLETTER", "Newsletter");
/* END Newsletter Block */
/* START class phpmailer lang array */
$PHPMAILER_LANG = array();

$PHPMAILER_LANG["provide_address"] = 'You must provide at least one recipient email address.';
$PHPMAILER_LANG["mailer_not_supported"] = ' mailer is not supported.';
$PHPMAILER_LANG["execute"] = 'Could not execute: ';
$PHPMAILER_LANG["instantiate"] = 'Could not instantiate mail function.';
$PHPMAILER_LANG["authenticate"] = 'SMTP Error: Could not authenticate.';
$PHPMAILER_LANG["from_failed"] = 'The following From address failed: ';
$PHPMAILER_LANG["recipients_failed"] = 'SMTP Error: The following recipients failed: ';
$PHPMAILER_LANG["data_not_accepted"] = 'SMTP Error: Data not accepted.';
$PHPMAILER_LANG["connect_host"] = 'SMTP Error: Could not connect to SMTP host.';
$PHPMAILER_LANG["file_access"] = 'Could not access file: ';
$PHPMAILER_LANG["file_open"] = 'File Error: Could not open file: ';
$PHPMAILER_LANG["encoding"] = 'Unknown encoding: ';
/* END class phpmailer lang array */



/*****************************************************/
/* Function to translate Datestrings                 */
/*****************************************************/
 
define("_CHARSET", "UTF-8");
define("_BROWSER_LANGCODE", "bs");
define('_TEXT_DIR', 'ltr');
define('_ALIGN_TEXT', 'left');

define("_SEARCH", "Traži");
define("_LOGIN", "Login");
define("_WRITES", "piše");
define("_POSTEDON", "Postavljeno");
define("_NICKNAME", "Nickname");
define("_PASSWORD", "Password");
define("_WELCOMETO", "Dobrodošao na");
define("_EDIT", "Edituj");
define("_DELETE", "Obriši");
define("_POSTEDBY", "Postavio");
define("_READS", "puta pročitano");
define("_GOBACK", "[ <a href=\"javascript:history.go(-1)\">Idi nazad</a> ]");
define("_COMMENTS", "komentara");
define("_PASTARTICLES", "Prethodni članci");
define("_OLDERARTICLES", "Stariji članci");
define("_BY", "od");
define("_ON", "u");
define("_LOGOUT", "Logout");
define("_WAITINGCONT", "Sadržaj na čekanju");
define("_SUBMISSIONS", "Poslano");
define("_WREVIEWS", "Reviewi na čekanju");
define("_WLINKS", "Linkovi na čekanju");
define("_EPHEMERIDS", "Ephemerids");
define("_ONEDAY", "Jedan dan kao danas...");
define("_ASREGISTERED", "Još uvijek se niste registrovali? Možete se <a href=\"modules.php?name=Your_Account&amp;op=new_user\">registrovati ovdje</a>. Kao registrovani korisnik dobijate mnoge benificije kao što su promjena izgleda, konfiguracija komentara i postavljanje komentara sa svojim imenom.");
define("_MENUFOR", "Menu za");
define("_NOBIGSTORY", "Nema najčitanijeg članka danas.");
define("_BIGSTORY", "Najčitaniji članak danas:");
define("_SURVEY", "Anketa");
define("_POLLS", "Sve Ankete");
define("_PCOMMENTS", "Komentara:");
define("_RESULTS", "Trenutni rezultati");
define("_HREADMORE", "pročitaj još...");
define("_CURRENTLY", "Trenutno je prisutno,");
define("_GUESTS", "gostiju i");
define("_MEMBERS", "članova koji su on-line.");
define("_YOUARELOGGED", "Ulogovan si pod imenom");
define("_YOUHAVE", "Imaš");
define("_PRIVATEMSG", "privatnih poruka.");
define("_YOUAREANON", "Vi ste anonimni korisnik. Možete se besplatno registrovati ako kliknete <a href=\"modules.php?name=Your_Account&amp;op=new_user\">ovdje</a>");
define("_NOTE", "Napomena:");
define("_ADMIN", "Admin:");
define("_WERECEIVED", "Imali smo");
define("_PAGESVIEWS", "posjeta stranici od");
define("_TOPIC", "Tema");
define("_UDOWNLOADS", "Download");
define("_VOTE", "Glasaj");
define("_VOTES", "Glasova");
define("_MVIEWADMIN", "View: Samo admin");
define("_MVIEWUSERS", "View: Samo registrovani korisnici");
define("_MVIEWANON", "View: Samo gosti");
define("_MVIEWALL", "View: Svi posjetioci");
define("_EXPIRELESSHOUR", "Vrijeme trajanja: manje od jednog sata");
define("_EXPIREIN", "Prestaje važiti");
define("_HTTPREFERERS", "HTTP Refer");
define("_UNLIMITED", "Neograničeno");
define("_HOURS", "Sati");
define("_RSSPROBLEM", "Trenutno imamo problem sa pregledom glavnih vijesti sa ove stranice");
define("_SELECTLANGUAGE", "Odaberi jezik");
define("_SELECTGUILANG", "Odaberi jezik interfacea:");
define("_NONE", "Niko");
define("_BLOCKPROBLEM", "<center>Trenutno imamo problem sa ovim blokom.</center>");
define("_BLOCKPROBLEM2", "<center>Trenutno nema sadržaja za ovaj blok.</center>");
define("_MODULENOTACTIVE", "Nažalost, ovaj modul nije aktivan");
define("_NOACTIVEMODULES", "Neaktivni moduli");
define('_MODULENOEXIST', 'We\'re sorry, but the requested file, %s, does not appear to exist');//NEW akamu
define("_FORADMINTESTS", "(za Admin testiranje)");
define("_BBFORUMS", "Forum");
define("_ACCESSDENIED", "Nemate ovlaštenje pristupa");
define("_RESTRICTEDAREA", "Pokušali ste pristupiti restriktovanoj zoni.");
define("_MODULEUSERS", "Nažalost, ova sekcija stranice je <i>isključivo za registrovane korisnike.</i><br><br>Možete se besplatno registrovati ako kliknete <a href=\"modules.php?name=Your_Account&op=new_user\">ovdje</a>, tada će te moći pristupiti ovoj sekciji<br>bez restrikcija. Hvala.<br><br>");
define("_MODULESADMINS", "Ova sekcija stranice je isključivo za <i>Administratora.</i><br><br>");
define("_HOME", "Start");
define("_HOMEPROBLEM", "Imamo veliki problem: nemamo početne stranice!!!");
define("_ADDAHOME", "Dodaj modul na svoj start");
define("_HOMEPROBLEMUSER", "Trenutno imamo problem na početnoj stranici, molimo vas pokušajte pristupiti kasnije.");
define("_MORENEWS", "Još u sekciji vijesti");
define("_ALLCATEGORIES", "Sve kategorije");
define("_DATESTRING", "%A, %B %d @ %T %Z");
define("_DATESTRING2", "%A, %B %d");
define("_DATE", "Datum");
define("_HOUR", "Sat");
define("_UMONTH", "Mjesec");
define("_YEAR", "Godina");
define("_JANUARY", "Januar");
define("_FEBRUARY", "Februar");
define("_MARCH", "Mart");
define("_APRIL", "April");
define("_MAY", "Maj");
define("_JUNE", "Juni");
define("_JULY", "Juli");
define("_AUGUST", "August");
define("_SEPTEMBER", "Septembar");
define("_OCTOBER", "Oktobar");
define("_NOVEMBER", "Novembar");
define("_DECEMBER", "Decembar");
define("_BWEL", "Vozdra");
define("_BPM", "Privatne Poruke");
define("_BUNREAD", "Nepročitanih");
define("_BREAD", "Ukupno");
define("_BMEMP", "Članovi");
define("_BLATEST", "Najnoviji");
define("_BTD", "Novih danas");
define("_BYD", "Novih jučer");
define("_BOVER", "Ukupno");
define("_BVISIT", "Osoba Online");
define("_BVIS", "Posjetioca");
define("_BMEM", "Članova");
define("_BTT", "Ukupno");
define("_BON", "Online sada");
define("_BREG", "Registruj se");
define("_BROADCAST", "Pošalji Javnu Poruku");
define("_BROADCASTFROM", "Javna Poruka od");
define("_TURNOFFMSG", "Onemogući Javne Poruke");
define("_JOURNAL", "Dnevnik");
define("_READMYJOURNAL", "Pročitaj moj Dnevnik");
define("_ADD", "Dodaj");
define("_YES", "Da");
define("_NO", "Ne");
define("_INVISIBLEMODULES", "Nevidljivi moduli");
define("_ACTIVEBUTNOTSEE", "(Aktivan ali nevidljiv link)");
/* MOVED
*/
define("_TEAM", "Team");
define("_MODREQLINKS", "Mod. linkovi");
define("_BROKENLINKS", "Izgubljeni liknovi");
define("_MODREQDOWN", "Mod. downloadi");
define("_BROKENDOWN", "Izgubljeni downloadi");
define("_PAGEGENERATION", "Stranica generisana:");
define("_SECONDS", "Sekundi");
define("_YOUHAVEONEMSG", "Imaš jednu novu privatnu poruku");
define("_NEWPMSG", "novih privatnih poruka");
define("_CONTRIBUTEDBY", "Postavio");
define("_CHAT", "Chat");
define("_REGISTERED", "Registrovanih");
define("_CHATGUESTS", "Gostiju");
define("_USERSTALKINGNOW", "Korisnici koji trenutno chataju");
define("_ENTERTOCHAT", "Ulazak na Chat");
define("_CHATROOMS", "Dostupne sobe");
define("_TOPICS", "Topics");
define("_ALLTOPICS", "All Topics");
define("_ASSOTOPIC", "Associated Topics");
define("_HELLO", "Hello");

/* ---- Begin modified block-User_Info english ----*/

define("_SECURITYCODE", "Security Code");
define("_TYPESECCODE", "Type Security Code");
define("_MEMBERSOPTIONS", "Members options");
define("_READSEND", "Read your private messages. Send messages to others.");
define("_INBOX", "Inbox");
define("_NEW", "New");
define("_ACCOUNTOPTIONS", "Your Account. Change options and read your messages.");
define("_LOGOUTACCT", "Log out of this account.");
define("_LOGOUTADMINACCT", "Log out of admin account.");
define("_BLOGIN", "Your Account");
define("_BFLOGIN", "Forum Profile");
define("_BHID", "Hidden");
define("_WHOWHERE", "Who Is Where");
define("_STAFFONL", "Staff Online");
define("_STAFFNONE", "No staff members are online!");

/*****************************************************/
/* Function to translate Datestrings                 */
/*****************************************************/

function translate($phrase) {
    switch($phrase) {
	case "xdatestring":	$tmp = "%A, %B %d @ %T %Z"; break;
	case "linksdatestring":	$tmp = "%d-%b-%Y"; break;
	case "xdatestring2":	$tmp = "%A, %B %d"; break;
	default:		$tmp = "$phrase"; break;
    }
    return $tmp;
}

?>