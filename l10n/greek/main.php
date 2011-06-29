<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/greek/main.php,v $
  $Revision: 9.30 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:50 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','el');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %B %d @ %T %Z');
define('_DATESTRING2','%A, %B %d');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Next Page');
define('_PREVIOUSPAGE','Previous Page');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Αναζήτηση');
define('_LOGIN','Σύνδεση');
define('_WRITES','Αρθρα');
define('_POSTEDON','Ημερομηνία καταχώρησης');
define('_NICKNAME','Παρωνύμιο');
define('_PASSWORD','Συνθηματικό');
define('_WELCOMETO','Καλωσήλθατε');
define('_EDIT','Επεξεργασία');
define('_DELETE','Διαγραφή');
define('_POSTEDBY','Αποστολέας');
define('_READS','το έχουν διαβάσει');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Προηγούμενο</a>' : '<a href="javascript:history.go(-1)">Προηγούμενο</a>').' ]');
define('_COMMENTS','Παρατηρήσεις');
define('_PASTARTICLES','Προηγούμενα Αρθρα');
define('_OLDERARTICLES','Παλαιότερα Αρθρα');
define('_BY','από');
define('_ON','στις');
define('_LOGOUT','Αποσύνδεση');
define('_WAITINGCONT','Περιεχόμενα σε Αναμονή');
define('_WREVIEWS','Ανασκοπήσεις σε αναμονή');
define('_WLINKS','Σύνδεσμοι σε αναμονή');
define('_ONEDAY','Μια Μέρα σαν Σήμερα...');
define('_ASREGISTERED','Δεν έχετε ακόμα Λογαριασμό; Μπορείτε να ανοίξτε ένα. Ως εγγεγραμμένος έχετε κάποιες επιπλέον δυνατότητες όπως διαχείριση θεμάτων, διαμόρφωση παρατηρήσεων και καταχώρηση  παρατηρήσεων με τ\'όνομα σας.');
define('_MENUFOR','Μενού για');
define('_NOBIGSTORY','Δεν υπάρχει σημαντικότερη είδηση μέχρι στιγμής');
define('_BIGSTORY','Η πιο δημοφιλής είδηση της ημέρας είναι');
define('_SURVEY','Αξιολόγηση');
define('_POLLS','Αποτελέσματα Ψηφοφορίας');
define('_PCOMMENTS','Παρατηρήσεις');
define('_RESULTS','Αποτελέσματα');
define('_HREADMORE','Διαβάστε περισσότερα ...');
define('_CURRENTLY','Υπάρχουν επί του παρόντος');
define('_GUESTS','Επισκέπτης(ες) και ');
define('_MEMBERS','Μέλος(η) που είναι συνδεδεμένος(οι)');
define('_YOUARELOGGED','Συνδεθήκατε ως');
define('_YOUHAVE','Εχετε (λάβει)');
define('_PRIVATEMSG','Προσωπικά Μηνύματα ');
define('_YOUAREANON','Είσαστε ανώνυμος χρήστης. Μπορείτε να εγγραφείτε πατώντας <a href="'.getlink("Your_Account&amp;file=register").'">εδώ</a>');
define('_NOTE','Σημείωση');
define('_ADMIN','Διαχειριστής');
define('_WERECEIVED','Δεχτήκαμε ');
define('_PAGESVIEWS','αιτήσεις από');
define('_TOPIC','Θεματική Ενότητα');
define('_UDOWNLOADS','Μεταφορτώνει');
define('_VOTE','Ψηφίστε');
define('_VOTES','Αριθμός Ψήφων');
define('_MVIEWADMIN','Πρόσβαση: Διαχειριστές αποκλειστικά');
define('_MVIEWUSERS','Πρόσβαση: Χρήστες αποκλειστικά');
define('_MVIEWANON','Πρόσβαση: Ανώνυμοι Χρήστες αποκλειστικά');
define('_MVIEWALL','Πρόσβαση: Ολοι οι Χρήστες');
define('_EXPIRELESSHOUR','Λήξη Προθεσμίας: σε λιγότερα από μία ώρα');
define('_EXPIREIN','Λήξη σε');
define('_UNLIMITED','Απεριόριστο');
define('_HOURS','Ωρες');
define('_RSSPROBLEM','Υπάρχει πρόβλημα επί του παρόντος με τις επικεφαλίδες του κόμβου');
define('_SELECTLANGUAGE','Επιλέξτε Γλώσσα');
define('_SELECTGUILANG','Επιλέξτε γλώσσα');
define('_NONE','Κανένα');
define('_BLOCKPROBLEM','<center>Υπάρχει ένα πρόβλημα αμέσως με αυτόν τον φραγμό.</center>');
define('_BLOCKPROBLEM2','<center>Δεν υπάρχει κανένα περιεχόμενο αμέσως για αυτόν τον φραγμό.</center>');
define('_MODULENOTACTIVE','Λυπόμαστε, αυτή η ενότητα δεν είναι ενεργός!');
define('_NOACTIVEMODULES','Ανενεργές ενότητες');
define('_MODULENOEXIST','Λυπόμαστε, αλλά το ζητούμενο αρχείο, %s, δεν εμφανίζεται να υπάρχει');
define('_FORADMINTESTS','(για τις δοκιμές διοίκησης)');
define('_BBFORUMS','Φόρουμ');
define('_ACCESSDENIED','Πρόσβαση που αμφισβητείται');
define('_RESTRICTEDAREA','Προσπαθείτε να έχετε πρόσβαση σε μια περιορισμένη περιοχή.');
define('_MODULEUSERS','Λυπόμαστε αλλά αυτό το τμήμα της περιοχής μας είναι για τους <i>εγγραμμένους χρήστες μόνο</i><br /><br />Mπορείτε να εγγραφείτε δωρεάν με να χτυπήσετε <a href="'.getlink("Your_Account&amp;file=register").'">εδώ</a>, κατόπιν μπορείτε<br />να έχετε πρόσβαση σε αυτό το τμήμα χωρίς περιορισμούς. Ευχαριστίες.<br /><br />');
define('_MODULEUSERS2','Μπορείτε να καταχωρήσετε δωρεάν με την ακολουθία <a href="'.getlink('Your_Account&amp;file=register').'">αυτής της σύνδεσης</a>, χορηγώντας κατά συνέπεια σας την άδεια να έχετε πρόσβαση σε αυτήν την περιοχή της περιοχής μας.<br /><br />Σας ευχαριστώ για την κατανόησή σας');
define('_MODULESADMINS','Λυπόμαστε ότι αλλά αυτό το τμήμα της περιοχής μας είναι για τους <i>Διοικητές Μόνο</i><br /><br />');
define('_MODULESGROUPS','πρόσβαση ομάδας που απαιτείται');
define('_HOME','Αρχική');
define('_HOMEPROBLEM','Υπάρχει ένα μεγάλο πρόβλημα εδώ: δεν έχουμε μια Αρχική Σελίδα!!!');
define('_ADDAHOME','Προσθέστε μια ενότητα στην αρχική σελίδα σας');
define('_HOMEPROBLEMUSER','Υπάρχει ένα πρόβλημα αμέσως στην αρχική σελίδα. Παρακαλώ τον ελέγξτε πίσω πιό πρόσφατος.');
define('_MORENEWS','Περισσότεροι στο τμήμα ειδήσεων');
define('_ALLCATEGORIES','Όλες οι κατηγορίες');
define('_SPAMGUARDPROTECTED','Το SpamGuard έχει εμποδίσει αυτό το ηλεκτρονικό ταχυδρομείο από την αποστολή');
define('_M_CHARS','Μέγιστο: %s χαρακτήρες');

define('_SYS_MESSAGE','Μήνυμα συστημάτων');
define('_SYS_MESSAGES','Μηνύματα συστημάτων');
define('_SYS_MAINTENANCE','Τρέχετε κάτω από τον τρόπο συντήρησης');
define('_SYS_DEMO','Τρέχετε κάτω από τον τρόπο επίδειξης διοίκησης<br />Δεν μπορείτε να κάνετε οποιεσδήποτε αλλαγές στη βάση δεδομένων<br /><a href="'.adminlink('logout').'">Με αποσυνδεθείτε!</a>');

define('_DATE','Ημερομηνία');
define('_HOUR','Ώρα ');
define('_UMONTH','Μήνας');
define('_YEAR','Χρόνος');
define('_JANUARY','Ιανουάριος');
define('_FEBRUARY','Φεβρουάριος');
define('_MARCH','Μάρτιος');
define('_APRIL','Απρίλιος');
define('_MAY','Μάιος');
define('_JUNE','Ιούνιος');
define('_JULY','Ιούλιος');
define('_AUGUST','Αύγουστος');
define('_SEPTEMBER','Σεπτέμβριος');
define('_OCTOBER','Οκτώβριος');
define('_NOVEMBER','Νοέμβριος');
define('_DECEMBER','Δεκέμβριος');

define('_MONDAY','Δευτέρα');
define('_TUESDAY','Τρίτη');
define('_WEDNESDAY','Τετάρτη');
define('_THURSDAY','Πέμπτη');
define('_FRIDAY','Παρασκευή');
define('_SATURDAY','Σάββατο');
define('_SUNDAY','Κυριακή');
//three letter abbrev.
define('_ABR_MONDAY','Δευτ');
define('_ABR_TUESDAY','Τρίτ');
define('_ABR_WEDNESDAY','Τετά');
define('_ABR_THURSDAY','Πέμπ');
define('_ABR_FRIDAY','Παρα');
define('_ABR_SATURDAY','Σάββ');
define('_ABR_SUNDAY','Κυρι');

define('_BWEL','Υποδοχή');
define('_BPM','Ιδιωτικά μηνύματα');
define('_BUNREAD','Αδιάβαστος');
define('_BREAD','Διαβάστε');
define('_BMEMP','Ιδιότητα μέλους');
define('_BLATEST','Πρόσφατος');
define('_BTD','Νέος σήμερα');
define('_BYD','Νέος χθες');
define('_BOVER','Συνολικά');
define('_BVISIT','Ανθρωποι on-line');
define('_BVIS','Επισκέπτες');
define('_BMEM','Μέλη');
define('_BTT','Σύνολο');
define('_BON','On-line τώρα');
define('_BREG','Εγγραφή');
define('_BROADCAST','Δημόσιο μήνυμα ραδιοφωνικής μετάδοσης');
define('_BROADCASTFROM','Δημόσιο μήνυμα από');
define('_TURNOFFMSG','Κλείστε τα δημόσια μηνύματα');
define('_JOURNAL','Περιοδικό');
define('_READMYJOURNAL','Διαβάστε το περιοδικό μου');
define('_ADD','Προσθήκη ');
define('_YES','Ναι');
define('_NO','Οχι');
define('_INVISIBLEMODULES','Αόρατες ενότητες');
define('_ACTIVEBUTNOTSEE','(Ενεργός αλλά αόρατη σύνδεση)');
define('_BOTS','Μπότς');

define('_UM','Dragonfly όργανο ελέγχου αναπροσαρμογώνr');
define('_UM_F','Απέτυχε να έρθει σε επαφή με την υπηρεσία αναπροσαρμογών. Παρακαλώ προσπαθήστε πάλι αργότερα.');
define('_UM_G','Χρησιμοποιείτε την πιό πρόσφατη έκδοση το Dragonfly');
define('_UM_R','Παρακαλώ <a href="%2$s" target="_blank">αναβαθμίστε</a> το Dragonfly %1$s');

define('_TEAM','Ομάδα.');
define('_LINKAPPROVEDMSG','Συγχαρητήρια! Ο Ιστός συνδέει εσείς υπέβαλε έχει εγκριθεί. Παρακαλώ συνδέστε πίσω σε μας και στείλετε ένα ηλεκτρονικό ταχυδρομείο με το url όπου έχετε κάνει έτσι.');
define('_MODREQLINKS','Τροπο. συνδέσεις');
define('_BROKENLINKS','Σπασμένες συνδέσεις');
define('_MODREQDOWN','Τροπο. μεταφορτώνει');
define('_BROKENDOWN','Σπασμένος μεταφορτώνει');
define('_PAGEGENERATION','Παραγωγή σελίδων:');
define('_SECONDS','Δευτερόλεπτα');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Page Generation in %1$s seconds and %2$s DB Queries in %3$s seconds');
define('_YOUHAVEONEMSG','Έχετε 1 νέο ιδιωτικό μήνυμα');
define('_NEWPMSG','Νέα ιδιωτικά μηνύματα');
define('_CONTRIBUTEDBY','Συμβάλει από');
define('_CHAT','Συνομιλία');
define('_REGISTERED','Καταχωρημένος');
define('_CHATGUESTS','Φιλοξενούμενοι');
define('_USERSTALKINGNOW','Χρήστες που μιλούν τώρα');
define('_ENTERTOCHAT','Εισάγετε για να κουβεντιάσετε');
define('_CHATROOMS','Διαθέσιμα δωμάτια συνομιλίας');
define('_ALLTOPICS','Σύνολο Θεμάτων');
define('_ASSOTOPIC','Σχετικά θέματα');
define('_HELLO','Γειά σας');
define('_ALL','Σύνολο');
define('_URL','URL');
define('_SUBJECT','Θέμα');
define('_PREVIEW','Προεπισκόπηση');
define('_SEND','Αποστολή');
define('_ANONYMOUS','Ανώνυμος');
define('_BREADCRUMB', 'Ο οριοθέτης Breadcrumb, εμφανίζεται στους τίτλους σελίδων μεταξύ των λέξεων');
define('_BC_DELIM',isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&gt;&gt;');
define('_RESET','Αναστοιχειοθέτηση');
define('_AT','at');
define('_LASTMSGS','Last %s Forum Messages');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','Εκτύπωση αρχικής σελίδας');

define('_CREDITS_TITLE','Πιστώσεις');
define('_CREDITS_PRODUCT','Προϊόν');
define('_CREDITS_DESC','Περιγραφή');
define('_CREDITS_AUTHORS','Συντάκτης(ες)');

define('_PP_TITLE','Πολιτική μυστικότητας');
define('_PP_MODIFY','Τροποποιήστε αυτό το μήνυμα');

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
define('_TB_BLOCK','Τα εργαλεία απολογισμού μου');
define('_TB_TASKS','Στόχοι');
define('_TB_INFO','Πληροφορίες');
define('_TB_PROFILE_INFO','Το δημόσιο σχεδιάγραμμά μου');
define('_TB_EDIT_PROFILE','Οι πληροφορίες σχεδιαγράμματός μου');
define('_TB_EDIT_REG','Οι λεπτομέρειες εγγραφής μου');
define('_TB_EDIT_PRIVATE','Οι ιδιωτικές πληροφορίες μου');
define('_TB_EDIT_AVATAR','Το είδωλό μου');
define('_TB_DELETE','Διαγράψτε τον απολογισμό μου');
define('_TB_CONFIG','Διαμόρφωση');
define('_TB_EDIT_PREFS','Οι προτιμήσεις μου');
define('_TB_EDIT_HOME','Οι τοποθετήσεις αρχικών σελίδων μου');
define('_TB_EDIT_COMM','Οι τοποθετήσεις σχολίου μου');
define('_TB_PERSONAL','Προσωπικός');
define('_TB_PERSONAL_GALLERY','Η στοά μου');
define('_TB_PERSONAL_JOURNAL','Το περιοδικό μου');
define('_TB_PRIVMSGS','Ιδιωτικά μηνύματα');
define('_TB_PRIVMSGS_INBOX','Εισερχόμενη θυρίδα');
define('_TB_PRIVMSGS_OUTBOX','ξερχόμενη θυρίδα');
define('_TB_PRIVMSGS_SENTBOX','Σταλμένη θυρίδα');
define('_TB_PRIVMSGS_SAVEBOX','Σωζόμενη θυρίδα');
define('_TB_PRIVMSGS_SEND','Στείλετε το μήνυμα');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','Πληροφορίες χρηστών');
define('_SECURITYCODE','Κώδικας ασφάλειας');
define('_TYPESECCODE','Κώδικας ασφάλειας τύπων');
define('_MEMBERSOPTIONS','Επιλογές μελών');
define('_READSEND','Διαβάστε τα ιδιωτικά μηνύματά σας. Στείλετε τα μηνύματα σε άλλα.');
define('_INBOX','Εισερχόμενη θυρίδα');
define('_NEW','Νέος');
define('_ACCOUNTOPTIONS','Ο απολογισμός σας. Επιλογές αλλαγής και διαβασμένος τα μηνύματά σας');
define('_LOGOUTACCT','Αποσύνδεση αυτού του απολογισμού.');
define('_LOGOUTADMINACCT','Αποσύνδεση του απολογισμού διοικητών.');
define('_BLOGIN','Ο απολογισμός σας');
define('_BFLOGIN','Σχεδιάγραμμα φόρουμ');
define('_BHID','Κρυμμένος');
define('_WHOWHERE','Ποιος είναι πού');
define('_STAFFONL','Προσωπικό on-line');
define('_STAFFNONE','Κανένα μέλος προσωπικού δεν είναι on-line! ');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Κοινότητα');
define('_ContentLANG','Περιεχόμενο');
define('_coppermineLANG','Στοά φωτογραφιών');
define('_CPGlangLANG','Η βοήθεια μεταφράζει');
define('_DownloadsLANG','Μεταφορτώνει');
define('_EncyclopediaLANG','Εγκυκλοπαίδεια');
define('_ForumsLANG','Κοινοτικά φόρουμ');
define('_ContactLANG','Μας ελάτε σε επαφή με');
define('_FAQLANG','Συχνά ερωτήσεις - Βοήθεια');
define('_BlogsLANG','Περιοδικό');
define('_Members_ListLANG','Τα μέλη απαριθμούν');
define('_NewsLANG','Ειδήσεις');
define('_ReviewsLANG','Αναθεωρήσεις');
define('_SearchLANG','Αναζήτηση');
define('_StatisticsLANG','Στατιστικές');
define('_Stories_ArchiveLANG','Αρχείο ιστοριών');
define('_Submit_NewsLANG','Υποβάλτε τις ειδήσεις');
define('_SurveysLANG','Έρευνες');
define('_TopLANG', 'Κορυφή '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Θέματα');
define('_Private_MessagesLANG','Τα ιδιωτικά μηνύματά μου');
define('_Tell_a_FriendLANG','Πέστε σε έναν φίλο');
define('_Web_LinksLANG','Συνδέσεις');
define('_Your_AccountLANG','Ο απολογισμός μου');
define('_CPG_EventsLANG','Ημερολόγιο');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Languages!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Groups');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Headlines');

define('_COMMUNICATION','Επικοινωνία');
define('_FRIENDS','Φίλοι');
define('_STORE','Κατάστημα');
define('_PRODUCTS','Προϊόντα');
define('_DONATE','Δώστε');
define('_HELP','Βοήθεια');
define('_GALLERIES','Στοές');
define('_DOCS','Τεκμηρίωση');
define('_RULES','Κανόνες και κανονισμοί');
define('_MENU','Κύριες επιλογές');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','<strong>Προσυπογράφεστε</strong> στο ενημερωτικό<br />δελτίο μας');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','<strong>Δεν προσυπογράφεστε</strong> στο ενημερωτικό<br />δελτίο μας');
define('_NEWSLETTERBLOCKREGISTER','Πρέπει να είστε<br /><strong>εγγραμμένος χρήστης</strong> για να<br />λάβετε το ενημερωτικό δελτίο μας');
define('_NEWSLETTERBLOCKSUBSCRIBE','Προσυπογράψτε');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Διαγραφείτε από τη συνδρομή');
define('_NEWSLETTERBLOCKREGISTERNOW','Εγγραφή τώρα!');
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
define('_SAVECHANGES','Αποθήκευση Αλλαγών');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Γλώσσα');
define('_FUNCTIONS','Λειτουργίες');
define('_SHOW','Προβολή');
define('_TO','Προς');
define('_DAY','Ημέρα');
define('_LAST','Τελευταία');
define('_ACTIVE','Ενεργό');
define('_DEACTIVATE','Απενεργοποίηση');
define('_INACTIVE','Απενεργοποιημένο');
define('_ACTIVATE','Ενεργοποίηση');
define('_ACTIVATE2','Ενεργοποίηση;');
define('_VIEW','Ορατός');
define('_VIEWPRIV','Ποιος το βλεπει;');
define('_MVADMIN','Μόνο Διαχειτιστές');
define('_MVUSERS','Μόνο Καταχωρημένοι Χρήστες  ');
define('_MVANON','Μόνο Ανώνυμοι Χρήστες ');
define('_MVALL','Όλο¹ οι Επισκέπτες (Για όλους τους )');
define('_IMAGE','Εικόνα');
define('_GO','Ενεργοποίηση!');
define('_OPTION','Επιλογές');
define('_CATEGORY','Κατηγορίες');
define('_SUBCATEGORY','Sub-Category');
define('_ID','Αριθμός αναγνώρισης');
define('_EXPIRATION','(Ημερομηνία) Λήξη');
define('_DAYS','Μέρες');
define('_WARNING','Προσοχή');
define('_POLLTITLE','Τίτλος Ψηφοφορίας');
define('_POLLEACHFIELD','Παρακαλούμε εισάγεται όποια διαθέσιμη επιλογή σ\'ένα μοναδικό πεδίο');
define('_ADDCATEGORY','Προσθήκη Νέας Κατηγορίας');
define('_PAGEBREAK','Αν έχετε πολλαπλές σελίδες μπορείτε να σημειώσετε <b>&lt;!--pagebreak--&gt;</b> στο σημείο που θέλετε να εισαχθεί μια διακοπή σελίδας.');
define('_SIGNATURE','Υπογραφή');
define('_DESCRIPTION','Περιγραφή');
define('_EDITCATEGORY','Επεξεργασία Κατηγορίας');
define('_IN','-----');
define('_DESCRIPTION255','Περιγραφή: (255 χαρακτήρες μέγιστο)');
define('_MODCATEGORY','Τροποποίηση Κατηγορίας');
define('_SUBMITTER','Υποβάλλον');
define('_VISIT','Επισκεφτείτε');
define('_EXTENDEDTEXT','Εκτεταμένο Κείμενο');
define('_CHECKCATEGORIES','Ελέγξτε Κατηγορίες');
define('_INCLUDESUBCATEGORIES','(Συμπεριλαμβανόμενες Υποκατηγορίες)');
define('_CHECKSUBCATEGORIES','Ελέγξτε Υποκατηγορίες');
define('_VALIDATELINKS','Επιβεβαίωση Συνδέσμων');
define('_FAILED','Αποτυχία!');
define('_BEPATIENT','(λίγη υπομονή παρακαλώ)');
define('_VALIDATINGCAT','Προς Έγκριση Κατηγορίας (και όλων των Υποκατηγοριών)');
define('_VALIDATINGSUBCAT','Προς Έγκριση Υποκατηγορίας');
define('_OK','Ok!');
define('_CHECK','Check');
define('_IGNORE','Ignore');
define('_HITS','Αιτήσεις');
define('_FILESIZE', 'File Size');
define("_EZTHEREIS","There are");
define("_EZSUBCAT","sub-categories");
define("_EZATTACHEDTOCAT","under this category");
define("_EZBROKENLINKS","Broken Links");
define("_DELEZLINKCATWARNING","WARNING : Are you sure you want to delete this category ?<br /> You will delete all sub-categories and attached links as well !");

// index.php
define('_DEFHOMEMODULE','Ενότητα αρχικών σελίδων προεπιλογής');
define('_MODULEINHOME','Η ενότητα φόρτωσε στην αρχική σελίδα:');
define('_CHANGE','Αλλαγή');
define('_WHOSONLINE','Ποιος είναι');
define('_NP_ADMIN','Σημειωματάριο');
define('_NP_LOCKED','Το σημειωματάριο έχει κλειδωθεί<br />Μόνο ένας διοικητής (έξοχος χρήστης) μπορεί να τον ξεκλειδώσει');
define('_NP_SAVE','Εκτός από τις σημειώσεις');
define('_NP_UNLOCK','Ξεκλειδώστε το σημειωματάριο');
define('_NP_LOCK','Κλειδώστε το σημειωματάριο');
// news
define('_STICKY','Κολλώδη άρθρα');
define('_ARTICLEUP','Αρθρο ΕΠΑΝΩ');
define('_ARTICLEDOWN','Αρθρο ΚΑΤΩ');
define('_UNSTICK','Μη κολλώδης');
define('_STICK','Κολλώδης');
define('_AUTOMATEDARTICLES','Προγραμματισμένα Αρθρα');
define('_STORYID','Προσδιορισμός ιστορίας');
define('_CURRENTPOLL','Τρέχουσα Ψηφοφορία (Σφυγμομέτρηση)');

// admin.php
define('_ADMINISTRATION','Διοίκηση');
define('_NOADMINYET','Δεν υπάρχει κανένας απολογισμός διοικητών ακόμα, για να δημιουργήσει τον έξοχο χρήστη:');
define('_CREATEUSERDATA','Θέλετε να δημιουργήσετε έναν κανονικό χρήστη με τα ίδια στοιχεία;');
define('_ADMINLOGIN','Σύνδεση στη Διαχείριση Συστήματος  ');
define('_ADMINID','Προσδιορισμός διοικητών');
define('_EMAIL','Ηλεκτρονικό ταχυδρομείο');
define('_SUBMIT','Υποβολή');
define('_YOUARELOGGEDOUT','Εχετε αποσυνδεθεί από το σύστημα');
define('_PASSWDNOMATCH','Ζητούμε Συγνώμη, οι νέοι κωδικοί πρόσβασης δεν ταιριάζουν. Επιστρέψτε στο προηγούμενο βήμα και ξαναπροσπαθήστε');
define('_LOGIN_REMEMBERME','Με θυμηθείτε;');
define('_ADMINMENU_LOGOUT','Αποσύνδεση επιλογών διοίκησης');
define('_PASSWORD_MALFORMED','Παρακαλώ περιλάβετε τουλάχιστον έναν αριθμό, ένα κεφαλαίο γράμμα, και μια πεζή επιστολή στον κωδικό πρόσβασής σας');

// admins.php
define('_AUTHORSADMIN','Διαχείριση Συγγραφέων');
define('_NAME','Όνομα');
define('_REQUIRED','(υποχρεωτικό)');
define('_MODIFYINFO','Τροποποίηση Πληροφορίας');
define('_DELAUTHOR','Διαγραφή Συγγραφέα');
define('_ADDAUTHOR','Προσθήκη Νέου Διαχειριστή');
define('_PERMISSIONS','Αδειες');
define('_SUPERUSER','Υπερχρήστης');
define('_SUPERWARNING','ΠΡΟΣΟΧΗ: Εάν το πεδίο Υπερχρήστης επιλεγεί, ο χρήστης θα έχει πλήρη πρόσβαση!');
define('_ADDAUTHOR2','Προσθήκη Συγγραφέα');
define('_RETYPEPASSWD','Πληκτρολογήστε τον Κωδικό Πρόσβασης');
define('_FORCHANGES','(Μόνο για Τροποποιήσεις)');
define('_COMPLETEFIELDS','Πρέπει να συμπληρώστε όλα τα απαραίτητα πεδία');
define('_CREATIONERROR','Σφάλμα Δημιουργία Συγγραφέα');
define('_AUTHORDEL','Διαγραφή Συγγραφέα');
define('_PUBLISHEDSTORIES','Ο Διαχειριστής δημοσίευσε ιστορίες');
define('_SELECTNEWADMIN','Παρακαλώ επιλέξτε νέο διαχειρ¹στή για εκ νέου ανάθεση των ');
define('_GODNOTDEL','*(ο χρήστης admin δεν μπορεί να διαγραφεί)');
define('_MAINACCOUNT','-----');
define('_USERS','Χρήστες');

// banners.php
define('_BANNERSADMIN','Διαχείριση banners');
define('_DELETEBANNER','Delete Banner');
define('_SURETODELBANNER','Are you sure you want to delete this banner?');
define('_EDITBANNER','Edit Banner');

// blocks.php
define('_BLOCKSADMIN','Διαχείριση Τμημάτων');
define('_CENTER','Center');
define('_CENTERUP','Center Up');
define('_CENTERDOWN','Center Down');
define('_BLOCKFILE','(Block File)');
define('_BLOCKFILE2','FILE');
define('_BLOCKSYSTEM','SYSTEM');
define('_ADDNEWBLOCK','Προσθήκη Νέου Τμήματος');
define('_RSSFILE','URL αρχείου RSS/RDF');
define('_ONLYHEADLINES','(Μόνο Κύριοι Τίτλοι)');
define('_REFRESHTIME','Χρόνος Ανανέωσης');
define('_CREATEBLOCK','Δημιουργήστε Τμήμα');
define('_EDITBLOCK','Εμφάνιση Τμήματος');
define('_BLOCK','Τμήμα');
define('_SAVEBLOCK','Αποθήκευση Τμήματος');
define('_BLOCKACTIVATION','Ενεργοποίηση Τμήματος');
define('_BLOCKPREVIEW','Προβολή Περιγραφής Τμήματος');
define('_WANT2ACTIVATE','Θέλετε να ενεργοποιήστε το συγκεκριμένο Τμήμα;');
define('_ARESUREDELBLOCK','Είστε απόλυτα βέβαιος ότι θέλετε να διαγράψτε το Τμήμα');
define('_BLOCKUP','Πάνω Τμήμα');
define('_BLOCKDOWN','Κάτω Τμήμα');
define('_BLOCKTOP','Move block to top');
define('_BLOCKBOTTOM','Move block to bottom');
define('_TITLE','Τίτλος');
define('_POSITION','Θέση ');
define('_WEIGHT','Βάρος');
define('_STATUS','Κατάσταση');
define('_LEFTBLOCK','Αριστερό Τμήμα');
define('_LEFT','Αριστερό ');
define('_RIGHTBLOCK','Δεξί Τμήμα');
define('_RIGHT','Δεξί ');
define('_TYPE','Τύπος');
define('_CUSTOM','Καθοριζόμενο');
define('_FILENAME','Filename');
define('_FILEINCLUDE','If you use this option, ignore the Content and Refresh time fields');
define('_VISIBLEINMODULES', 'Visible in modules');

// comments.php
define('_REMOVECOMMENTS','Διαγραφή Παρατηρήσεων');
define('_SURETODELCOMMENTS','Είστε απόλυτα βέβαιος ότι θέλετε να διαγράψτε τις επιλεγμένες παρατηρήσεις και όλες τις απαντήσεις τις;');

// database.php
define('_SAVEDATABASE','Backup DB');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Current Status');
define('_ACTIVATEPAGE','Activate This Page?');

// history.php
define('_EPHEMADMIN','Διαχείριση Εφήμερων');
define('_ADDEPHEM','Προσθήκη Νέου Εφήμερου');
define('_EPHEMDESC','Περιγραφή Εφήμερου');
define('_EPHEMMAINT','Ενημέρωση Εφήμερων (Προβολή/Διαγραφή)');
define('_EPHEMEDIT','Προβολή Εφήμερων');
define('_EPHEMDELETE','Delete Entry');

// headlines.php
define('_RSSFAIL','Υπάρχει κάποιο πρόβλημα με το URL του RSS αρχείου');
define('_RSSTRYAGAIN','Παρακαλώ ελέγξτε το URL και το όνομα του RSS αρχείου και ξαναπροσπαθήστε. ');
define('_RSSCONTENT','(RSS/RDF Περιεχόμενο)');
define('_IFRSSWARNING','Εάν συμπληρώσετε το URL το περιεχόμενο που θα πληκτρολογήσετε δεν θα εμφανιστεί!');
define('_SETUPHEADLINES','(Επιλέξτε "Επιλογή" και γράψτε το URL η απλώς επιλέξτε ένα κόμβο από την λίστα για να βρείτε κύριους τίτλους ειδήσεων)');
define('_HEADLINESADMIN','Διαχείριση Επικεφαλίδων');
define('_ADDHEADLINE','Προσθήκη Επικεφαλίδας');
define('_EDITHEADLINE','Επεξεργασία Επικεφαλίδας');
define('_SURE2DELHEADLINE','ΠΡΟΣΟΧΗ: Είσαστε απόλυτα βέβαιος ότι θέλετε να διαγράψετε αυτή την Επικεφαλίδα; ');

// messages.php
define('_MESSAGESADMIN','Μήνυμα Διαχειριστή');
define('_MESSAGETITLE','Τίτλος');
define('_MESSAGECONTENT','Περιεχόμενο ');
define('_ALLMESSAGES','Overview messages');
define('_EDITMSG','Edit message');
define('_ADDMSG','Add message');
define('_REMOVEMSG','Are you sure you want to remove this message ? ');
define('_CHANGEDATE','Μετατρέψτε την Ημερομηνία Έναρξης σε Σημερινή!');
define('_IFYOUACTIVE','Εάν Ενεργοποιήστε τώρα το Μήνυμα αυτό, η ημερομηνία έναρξης θα γίνει η σημερινή)');

// modules.php
define('_MODULESADMIN','Modules Administration');
define('_HOMECONFIG','Αρχικές Ρυθμίσεις');
define('_MODULESADDONS','Modules and Addons');
define('_INHOME','In Home');
define('_MODULEHOMENOTE','<b>-= WARNING =-</b><br />Bold module\'s title represents the module you have in the Homepage.<br />You can\'t Deactivate or Restrict this module while it\'s the default one!<br />If you delete the module\'s directory you\'ll see and error in the Homepage.<br />Also, this module has been replaced with <i>Home</i> link in the modules block.');
define('_PUTINHOME','Put in Home');
define('_SURETOCHANGEMOD','Are you sure you want to change your Homepage from');
define('_NOTINMENU','[ <big><strong>&middot;</strong></big> ] means a module which name and link will not be visible in Modules Block');
define('_SHOWINMENU','Visible in Modules Block?');
define('_CUSTOMTITLE','Custom Title');
define('_MODULEEDIT','Modules Edit');
define('_VERSION','Έκδοση');
define('_UPGRADE','Upgrade to %s');
define('_DBSIZE','DB size');
define('_CVS_EXPLAIN','Thru CVS you can recieve the latest builds of files very easily.<br /><b>BUT</b> the latest version of a file could have bugs since it is not an official release.<br />If you are familiar with PHP you can do an update of the files by clicking the link below.<br />Don\'t forget to make an backup first !!!');
define('_CVS_UPDATE','Update CVS files');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','Από');
define('_STAFF','Στελέχη');
define('_NL_RECIPS','Recipients');
define('_SUBSCRIBEDUSERS','Subscribed Users');
define('_NL_ALLUSERS','All Members');
define('_NL_ADMINS','Administrators');
define('_NL_REGARDS','Best Regards');
define('_DISCARD','Discard');
define('_REVIEWTEXT','Please review and check your text:');
define('_MANYUSERSNOTE','WARNING! There are many users that will receive this text. Please wait until the script finish the operation. This can take some minutes to complete!');
define('_NL_NOUSERS','The group selected to receive this newsletter has zero users<br />Please go back and select a different group');
define('_NUSERWILLRECEIVE','Οι χρήστες θα λάβουν αυτό το μήνυμα.');
define('_NLUNSUBSCRIBE',"We sent you this message because you have selected to receive newsletters from our site\n\nYou can choose to unsubscribe from our mailings at any time by following <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">this</a> link\n\nIf you would like further assistance, please send an email to <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">our administrator</a>");
define('_NEWSLETTERSENT','The newsletter has been sent');

// referers.php
define('_WHOLINKS','Ποιος συνδέεται στο κόμβο μας;');
define('_DELETEREFERERS','Διαγραφή Αξιολογητών');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Footer');
define('_DEBUG', 'Debug');
define('_SITECONFIG','Ρυθμίσεις Δικτυακού Κόμβου');
define('_GENSITEINFO','Γενικές Πληροφορίες (για τι κόμβο)');
define('_SITENAME','Ονομασία Κόμβου');
define('_SITEURL','URL Κόμβου');
define('_SITELOGO','Λογότυπο Κόμβου');
define('_SITESLOGAN','Σλόγκαν Κόμβου');
define('_STARTDATE','Ημερομηνία Έναρξης Κόμβου');
define('_ADMINEMAIL','Email Διαχειριστή');
define('_ITEMSTOP','Πλήθος Θεμάτων στη Βασική Σελίδα');
define('_STORIESHOME','Αριθμός Ιστοριών στη Κεντρική Σελίδα');
define('_OLDSTORIES','Ιστορίες από παλιά άρθρα -----');
define('_ALLOWANONPOST','Να επιτραπεί ανώνυμη αποστολή;');
define('_DEFAULTTHEME','Προκαθορισμένες Ρυθμίσεις Απεικόνισης για τις Σελίδες σας');
define('_SHOWSEC','Εμφάνηση κωδικού ασφαλείας');
define('_TOOLTIPS','Show tooltips on designated fields');
define('_UM_TOGGLE','Enable Update Monitor');
define('_UM_EXPLAIN','This will retrieve two pieces of information from our website, dragonflycms.org: the current build of Dragonfly, and if there are any important messages that pertain to your version of Dragonfly. The only data sent to our site is your Dragonfly version number. We do <strong>not</strong> log these requests to our server.');
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
define('_MULTILINGUALOPT','Multilingual Options');
define('_SELLANGUAGE','Επιλέξτε Γλώσσα (προβολής) του κόμβου σας');
define('_LOCALEFORMAT','Σχήμα Τοπικής Ώρας');
define('_ACTMULTILINGUAL','Activate Multilingual features? ');
define('_ACTUSEFLAGS','Display flags instead of a dropdown box? ');
// banners
define('_BANNERSOPT','Ρυθμίσεις -----');
define('_ACTBANNERS','Ενεργοποίηση των Banners του κόμβου (ιστοσελίδας) σας;');
// footer
define('_FOOTERMSG','Page Footer (optional)');
define('_FOOTERLINE1','Footer, line one');
define('_FOOTERLINE2','Footer, line two');
define('_FOOTERLINE3','Footer, line three');
// backend
define('_BACKENDCONF','Υποστήριξη Ρυθμίσεων');
define('_BACKENDTITLE','Feed title');
define('_BACKENDLANG','Υποστήριξη Γλώσσας');
// mail stories
define('_MAIL2ADMIN','Υποβολή Νέων Ιστοριών στο Διαχειριστή');
define('_NOTIFYSUBMISSION','Γνωστοποίηση νέων υποβολών μέσο email;');
define('_EMAIL2SENDMSG','Διεύθυνση email προς αποστολή μηνύματος');
define('_EMAILSUBJECT','Θέμα του Email');
define('_EMAILMSG','Μήνυμα Email');
define('_EMAILFROM','Email λογαριασμός (από)');
// comments
define('_COMMENTSOPT','Ρυθμίσεις Σχολίων');
define('_COMMENTSLIMIT','Μέγιστο όριο παρατήρησης σε Bytes');
define('_COMMENTSMOD','Allow moderations of comments?');
define('_MODADMIN','Yes, by administrators');
define('_MODUSERS','Yes, by users');
define('_NOMOD','No, do not use moderation');
// adminmenu
define('_GRAPHICOPT','Επιλογές (ρυθμίσεις) Γραφικών ');
define('_BOTH','Both');
define('_GRAPHICAL','Graphical');
define('_SIDEBLOCK','Sideblock');
// miscellaneous
define('_MISCOPT','Διάφορες Επιλογές');
define('_ACTIVATEHTTPREF','Ενεργοποίηση HTTP αναφορών;');
define('_MAXREF','Ποιο μέγιστο πλήθος Αξιολογητών επιθημυται ;');
define('_COMMENTSPOLLS','Ενεργοποίηση Σχολίων στις Ψηφοφορίες;');
define('_COMMENTSARTICLES','Activate Comments in Articles?');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','Censure Options');
define('_CENSORMODE','Censor Mode');
define('_NOFILTERING','No filtering');
define('_EXACTMATCH','Exact match');
define('_MATCHBEG','Match word at the beginning');
define('_MATCHANY','Match anywhere in the text');
define('_CENSORREPLACE','Replace Censored Words with:');
// email
define('_EMAILOPTIONS','Options for email from Contact Module and Newsletter');
define('_ALLOW_HTML_EMAIL','Allow html email');
define('_USE_SMTP','Use SMTP for email instead of php');
define('_SMTP_HOST','Address of smtp host(smtp.example.com)');
define('_USE_SMTP_AUTH','Server requires SMTP authorization');
define('_SMTP_USER_NAME','SMTP User Name');
define('_SMTP_USER_PASS','SMTP User Password');

// cpg_adminmenu.php
define('_ADMINMENU','Μενού Διαχειριστή');
define('_ADMINLOGOUT','Διακοπή £ύνδεσης / Εξοδος');
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
define('_PREFERENCES','Προτιμήσεις');
define('_DATABASE','Database');
define('_BLOCKS','Τμήματα');
define('_MODULES','Modules');
define('_EDITADMINS','Εμφάνιση Συγγραφέων');
define('_MESSAGES','Μηνύματα');
define('_BANNERS','Banners');
define('_HTTPREFERERS','Αφετηρία συνδέσμων');
define('_EDITUSERS','Εμφάνιση Χρηστών');
define('_USERSCONFIG','Members Config');
define('_NEWSLETTER','Newsletter');
define('_SUBMISSIONS','Υποβολές');
define('_ADDSTORY','Προσθήκη Ιστορίας');
define('_TOPICS','Θέματα');
define('_ADMPOLLS','Δημοσκοπήσεις');
define('_EPHEMERIDS','Εφήμερα');
define('_REVIEWS','Ανασκοπήσεις');
define('_ENCYCLOPEDIA','Encyclopedia');
define('_SURVEYS','Δημοσκοπήσεις');
define('_SECTIONS','Ενότητες');
define('_ARTICLES','Αρθρα');
define('_FAQ','Συχνές ερωτήσεις');
define('_DOWNLOAD','Ανάκτηση');
define('_WEBLINKS','Σύνδεσμοι Διαδικτύου');
define('_CONTENT','Περιεχόμενα');
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
