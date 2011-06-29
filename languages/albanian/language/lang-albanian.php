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
  Interpreted from Albania  Webmaster@planetishqiptar.net                                                   
  $Id: lang-albanian.php,v 1.4 2004/09/24 21:02:40 akamu Exp $    
***************************************************************/
/* For Multilingual Modules Block  */
define("_ContentLANG", "Content");
define("_coppermineLANG", "Photo Gallery");
define("_CPGlangLANG", "Help Translate");
define("_DownloadsLANG", "Downloads");
define("_EncyclopediaLANG", "Encyclopedia");
define("_ForumsLANG", "Community Forums");
define("_ContactLANG", "Contact Us");
define("_FAQLANG", "FAQ - Help");
define("_JournalLANG", "Journal");
define("_Members_ListLANG", "Members List");
define("_NewsLANG", "News");
define("_ReviewsLANG", "Reviews");
define("_SearchLANG", "Search");
//define("_SectionsLANG", "Sections");
define("_StatisticsLANG", "Statistics");
define("_Stories_ArchiveLANG", "Stories Archive");
define("_Submit_NewsLANG", "Submit News");
define("_SurveysLANG", "Surveys");
define("_TopLANG", "Top 10");
define("_TopicsLANG", "Topics");
define("_Private_MessagesLANG", "My Private Messages");
define("_Recommend_UsLANG", "Recommend Us");
define("_Web_LinksLANG", "Links");
define("_Your_AccountLANG", "My Account");
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
define("_BROWSER_LANGCODE", "sq");
define('_TEXT_DIR', 'ltr');
define('_ALIGN_TEXT', 'left');

define("_SEARCH", "Kërko");
define("_LOGIN", "Identifikohu");
define("_WRITES", "Shkruan");
define("_POSTEDON", "Dërguar të");
define("_NICKNAME", "Emri");
define("_PASSWORD", "Fjal kalimi");
define("_WELCOMETO", "Mirësevini tek");
define("_EDIT", "Shkruaj");
define("_DELETE", "Fshi");
define("_POSTEDBY", "Dërguar nga");
define("_READS", "herë lexuar");
define("_GOBACK", "[ <a href=\"javascript:history.go(-1)\">Kthehu mbrapa</a> ]");
define("_COMMENTS", "komente");
define("_PASTARTICLES", "Artikuj të Tjerë");
define("_OLDERARTICLES", "Artikuj të vjetër");
define("_BY", "nga");
define("_ON", "ditën");
define("_LOGOUT", "Largohu");
define("_WAITINGCONT", "Në Pritje");
define("_SUBMISSIONS", "Artikuj");
define("_WREVIEWS", "Recensime");
define("_WLINKS", "Lidhje");
define("_EPHEMERIDS", "Ngjarje Historike");
define("_ONEDAY", "Një ditë si Sot...");
define("_ASREGISTERED", "Nuk keni akoma një account? <a href=\"modules.php?name=Your_Account\">krijoje tani Këtu</a>!. Si përdorues i regjistruar mund të shfrytëzosh dhe të personalizosh të gjitha shërbimet e afruara.");
define("_MENUFOR", "Menu për");
define("_NOBIGSTORY", "Akoma Asnjë Artikull.");
define("_BIGSTORY", "Artikulli më i lexuar për Sot:");
define("_SURVEY", "Sondazh");
define("_POLLS", "Sondazhe");
define("_PCOMMENTS", "Komente:");
define("_RESULTS", "Rezultate");
define("_HREADMORE", "Tjetër...");
define("_CURRENTLY", "Tani kemi,");
define("_GUESTS", "Vizitues(ë) dhe");
define("_MEMBERS", "Anëtar(ë) në sit.");
define("_YOUARELOGGED", "Përshëndetje");
define("_YOUHAVE", "Ke");
define("_PRIVATEMSG", "mesazh(e).");
define("_YOUAREANON", "<font color=\"red\">Nuk njihemi akoma? Regjistrohu falas <a href=\"modules.php?name=Your_Account\">Këtu</a></font>");
define("_NOTE", "Shënim:");
define("_ADMIN", "Administratori:");
define("_WERECEIVED", "");
define("_PAGESVIEWS", "faqe të vizituara që prej");
define("_TOPIC", "Argomenti");
define("_UDOWNLOADS", "Downloads");
define("_VOTE", "Voto!");
define("_VOTES", "Vota");
define("_MVIEWADMIN", "Mund të shihet nga: Vetëm Administratorët");
define("_MVIEWUSERS", "Mund të shihet nga: Vetën të Regjistruarit");
define("_MVIEWANON", "Mund të shihet nga: Vetëm Anonimët");
define("_MVIEWALL", "Mund të shihet nga: Të Gjithë");
define("_EXPIRELESSHOUR", "Skadimi: Më pak se një orë");
define("_EXPIREIN", "Skadimi pas");
define("_HTTPREFERERS", "HTTP Referues");
define("_UNLIMITED", "Pa limit");
define("_HOURS", "Orë");
define("_RSSPROBLEM", "Problem i Përkohshëm me Titujt e këtij Siti");
define("_SELECTLANGUAGE", "Seleksiono Gjuhën");
define("_SELECTGUILANG", "");
define("_NONE", "Asnjë");
define("_BLOCKPROBLEM", "<center>Për momentin është verifikuar një problem me këtë bllok.</center>");
define("_BLOCKPROBLEM2", "<center>Për momentin ky bllok nuk ka përmbajtje.</center>");
define("_MODULENOTACTIVE", "Më vjen keq, moduli nuk është aktiv!");
define("_NOACTIVEMODULES", "Modulët e pa aktivuar");
define('_MODULENOEXIST', 'We\'re sorry, but the requested file, %s, does not appear to exist');//NEW akamu
define("_FORADMINTESTS", "(për prova administrative)");
define("_BBFORUMS", "Forume");
define("_ACCESSDENIED", "Ndalohet Hyrja");
define("_RESTRICTEDAREA", "Je duke u përpjekur të futesh në një zonë private.");
define("_MODULEUSERS", "Më vjen keq, por kjo zonë e sitit është vetëm për Përdoruesit e  <i>Regjistruar</i><br><br>Mund të regjistrohesh falas duke klikuar <a href=\"modules.php?name=Your_Account&amp;op=new_user\">këtu</a>, më pas do të mund<br>të hysh në këtë zonë pa pengesa. Faleminderit.<br><br>");
define("_MODULESADMINS", "Më vjen keq, por kjo zonë e sitit është vetëm për <i>Administratorët</i><br><br>");
define("_HOME", "Treguesi");
define("_HOMEPROBLEM", "Këtu kemi një problem të madh: ne nuk kemi një Homepage!!!");
define("_ADDAHOME", "Shto një Modul në Home");
define("_HOMEPROBLEMUSER", "Eshtë verifikuar një problem në Homepage. Ju lutem rihapeni më vonë.");
define("_MORENEWS", "Më tepër në Seksionin News");
define("_ALLCATEGORIES", "Të Gjitha Kategoritë");
define("_DATESTRING", "%A, %d %B @ %T %Z");
define("_DATESTRING2", "%A, %d %B");
define("_DATE", "Data");
define("_HOUR", "Ora");
define("_UMONTH", "Muaji");
define("_YEAR", "Viti");
define("_JANUARY", "Janar");
define("_FEBRUARY", "Shkurt");
define("_MARCH", "Mars");
define("_APRIL", "Prill");
define("_MAY", "Maj");
define("_JUNE", "Qershor");
define("_JULY", "Korrik");
define("_AUGUST", "Gusht");
define("_SEPTEMBER", "Shtator");
define("_OCTOBER", "Tetor");
define("_NOVEMBER", "Nëntor");
define("_DECEMBER", "Dhjetor");
define("_BWEL", "Mirësevini");
define("_BPM", "Mesazhe Private");
define("_BUNREAD", "Palexuar");
define("_BREAD", "Lexuar");
define("_BMEMP", "Anëtarë");
define("_BLATEST", "I fundir");
define("_BTD", "I ri(e) Sot");
define("_BYD", "I ri(e) Dje");
define("_BOVER", "Gjithsej");
define("_BVISIT", "Persona Online");
define("_BVIS", "Vizitor(ë)");
define("_BMEM", "Anëtar(ë)");
define("_BTT", "Gjithsej");
define("_BON", "Tani Online");
define("_BREG", "Regjister");
define("_BROADCAST", "Broadcast Publik Mesazh");
define("_BROADCASTFROM", "Mesazh Publik nga");
define("_TURNOFFMSG", "Ndalo Mesazhet Publikë");
define("_JOURNAL", "Ditore");
define("_READMYJOURNAL", "Lexo Ditoren Time");
define("_ADD", "Shto");
define("_YES", "Po");
define("_NO", "Jo");
define("_INVISIBLEMODULES", "Modulë të Padukshëm");
define("_ACTIVEBUTNOTSEE", "(Aktiv por me lidhje të padukshme)");
/*
MOVED */
define("_TEAM", "Skuadra");
//_BANNERSFINNISHED MOVED
define("_MODREQLINKS", "Mod. Linke");
define("_BROKENLINKS", "Lidhje të Gabuara");
define("_MODREQDOWN", "Mod. Downloads");
define("_BROKENDOWN", "Downloads jo ekzistues");
define("_PAGEGENERATION", "Faqe e Gjeneruar në:");
define("_SECONDS", "Sekonda");
define("_YOUHAVEONEMSG", "Ti ke 1 mesazh privat");
define("_NEWPMSG", "Mesazhe private te reja");
define("_CONTRIBUTEDBY", "Kontribuar nga");
define("_CHAT", "Chat");
define("_REGISTERED", "Regjistruar");
define("_CHATGUESTS", "Guests");
define("_USERSTALKINGNOW", "Antaret qe po flasin");
define("_ENTERTOCHAT", "Futu te chatosh");
define("_CHATROOMS", "Dhomat e mundshme");
define("_TOPICS", "Temat");
define("_ALLTOPICS", "Te gjith temat");
define("_ASSOTOPIC", "Temat e ngjara");
define("_HELLO", "Pershendetje");

/* ---- Begin modified block-User_Info english ----*/

define("_SECURITYCODE", "Imazhi sigurise");
define("_TYPESECCODE", "Shkruaj numrat");
define("_MEMBERSOPTIONS", "Mundesite e Antareve");
define("_READSEND", "Lexo mesazhet private, Dergo mesazhe te tjerve.");
define("_INBOX", "Ne kuti");
define("_NEW", "Te ri");
define("_ACCOUNTOPTIONS", "Llogaria Juaj, Ndrro mundesite dhe lexo mesazhet.");
define("_LOGOUTACCT", "Largohu nga kjo llogari.");
define("_LOGOUTADMINACCT", "Largohu nga Administrimi.");
define("_BLOGIN", "Llogaria juaj");
define("_BFLOGIN", "Profili forumit");
define("_BHID", "Te fshehu");
define("_WHOWHERE", "Who Is Where");
define("_STAFFONL", "Staff Online");
define("_STAFFNONE", "No staff members are online!");
