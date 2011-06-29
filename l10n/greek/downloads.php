<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/greek/downloads.php,v $
  $Revision: 9.6 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:54 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','The download you\'ve requested doesn\'t exists.');
define('_CATEGORIES','Κατηγορίες');
define('_LVOTES','Αριθμός Ψήφων');
define('_TOTALVOTES','Σύνολο ψήφων');
define('_THEREARE','Υπάρχουν');
define('_NOMATCHES','Δεν βρέθηκε αποτέλεσμα στην αίτησή σας');
define('_SCOMMENTS','Παρατηρήσεις');
define('_UNKNOWN','Αγνωστο ');
define('_AUTHORNAME','Author\'s Name');
define('_AUTHOREMAIL','Author\'s Email');
define('_DOWNLOADNAME','Program Name');
define('_ADDTHISFILE','Add this file');
define('_INBYTES','in bytes');
//define('_FILESIZE','Μέγεθος αρχείου');
//define('_VERSION','Έκδοση');
//define('_AUTHOR','Συγγραφέας');
define('_HOMEPAGE','Κεντρική Σελίδα ');
define('_DOWNLOADNOW','Κατεβάστε αυτό το αρχείο Τώρα!');
define('_RATERESOURCE','Rate Resource');
define('_FILEURL','Σύνδεσμος Αρχείου');
define('_ADDDOWNLOAD','Προσθήκη Ανάκτησης Δεδομένων');
define('_DOWNLOADSMAIN','Ανάκτηση Κεντρικής Σελίδας');
define('_DOWNLOADCOMMENTS','Κατεβάστε Παρατηρήσεις');
define('_DOWNLOADSMAINCAT','Ανακτήστε τις Κύριες Κατηγορίες');
define('_ADDADOWNLOAD','Προσθέστε ένα νέο');
define('_DSUBMITONCE','Submit a unique download only once.');
define('_DPOSTPENDING','All downloads are posted pending verification.');
define('_RESSORTED','Resources currently sorted by');
define('_DOWNLOADSNOTUSER1','Δεν είσαστε εγγεγραμμένος χρήστης ή δεν έχετε συνδεθεί.');
define('_DOWNLOADSNOTUSER2','Εάν είστε εγγεγραμμένος έχετε την δυνατότητα να προσθέστε downloads στον κόμβο.');
define('_DOWNLOADSNOTUSER3','Η διαδικασία εγγραφής είναι γρήγορη και εύκολη.');
define('_DOWNLOADSNOTUSER4','Γιατί απαιτείται εγγραφή χρήστη για την πρόσβαση σε κάποιες δυνατότητες;');
define('_DOWNLOADSNOTUSER5','Ετσι ώστε σας προσφέρουμε περιοχόμενα ύψιστης ποιότητας,');
define('_DOWNLOADSNOTUSER6','κάθε αντικείμενο ελέγχεται και εγκρίνεται ξεχωριστά από το προσωπικό μας.');
define('_DOWNLOADSNOTUSER7','Προσδοκούμε να σας προσφέρουμε μόνο χρήσιμες πληροφορίες.');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink("Your_Account").'">Εγγραφείτε για ένα λογαριασμό</a>');
define('_DOWNLOADALREADYEXT','ΣΦΑΛΜΑ: αυτή η URL είναι ήδη καταχωρημένη στην Βάση Δεδομένων !');
define('_DOWNLOADNOTITLE','ΣΦΑΛΜΑ: Χρειάζεται να πληκτρολογήσετε κάποια ονομασία για την URL σας!');
define('_DOWNLOADNOURL','ΣΦΑΛΜΑ: Χρειάζεται να πληκτρολογήσετε κάποιο περιεχόμενο URL για την URL σας!');
define('_DOWNLOADNODESC','ΣΦΑΛΜΑ: Χρειάζεται να πληκτρολογήσετε κάποια περιγραφή της URL!');
define('_DOWNLOADRECEIVED','Λάβαμε ορθά την αίτηση σας για Download. Ευχαριστούμε!');
define('_NEWDOWNLOADS','Νέα Downloads');
define('_TOTALNEWDOWNLOADS','Σύνολο Νέων Downloads');
define('_DTOTALFORLAST','Total new downloads for last');
define('_DBESTRATED','Best Rated Downloads - Top');
define('_TRATEDDOWNLOADS','Σύνολο Αξιολογούμενων Downloads');
define('_SORTDOWNLOADSBY','Ταξινομήστε τα Downloads κατά');
define('_DCATNEWTODAY','New Downloads in this Category Added Today');
define('_DCATLAST3DAYS','New Downloads in this Category Added in the last 3 days');
define('_DCATTHISWEEK','New Downloads in this Category Added this week');
define('_DDATE1','Date (Old Downloads Listed First)');
define('_DDATE2','Date (New Downloads Listed First)');
define('_DOWNLOADS','Downloads');
define('_DOWNLOADPROFILE','Ιδιότητες Ανάκτησης Δεδομένων');
define('_DOWNLOADRATINGDET','Αναλυτική Αξιολόγηση Download');
define('_EDITTHISDOWNLOAD','Επεξεργασία Ανάκτησης Δεδομένων');
define('_DOWNLOADRATING','Αξιολόγηση Downloads');
define('_DOWNLOADVOTE','Ψηφίστε!');
define('_DONLYREGUSERSMODIFY','Only registered users can suggest downloads modifications. Please <a href="'.getlink("Your_Account").'">register or login</a>.');
define('_REQUESTDOWNLOADMOD','Αίτηση για διαμόρφωση Ανάκτησης Δεδομένων');
define('_DOWNLOADID','Ανάκτηση ID αριθμού');
define('_DLETSDECIDE','Input from users such as yourself will help other visitors better decide which downloads to click on.');
define('_DRATENOTE4','You can view a list of the <a href="'.getlink("Downloads&amp;d_op=TopRated").'">Top Rated Resources</a>.');
define('_POPULAR','Δημοφιλή');
define('_TOPRATED','Κορυφαίοι Βαθμολογικά');
define('_ADDITIONALDET','Επιπρόσθετες Πληροφορίες');
define('_EDITORREVIEW','Ανασκόπηση Επεξεργασίας');
define('_REPORTBROKEN','Αναφέρατε Ανενεργό Σύνδεσμο');
define('_AND','Και');
define('_INDB','Στη βάση δεδομένων μας');
define('_INSTRUCTIONS','Οδηγίες');
define('_USERANDIP','Κωδικός Χρήστη και IP διεύθυνση καταγράφονται, συνεπώς παρακαλούμε να μην καταχραστείτε τους πόρους του συστήματος');
define('_LDESCRIPTION','Περιγραφή: (255 χαρακτήρες μέγιστο)');
define('_CHECKFORIT','Δεν δώσατε στοιχεία για το E-mail. Πάρα ταύτα θα ελέγξουμε το σύνδεσμό σας πολύ σύντομα.');
define('_LASTWEEK','Περασμένη Εβδομάδα');
define('_LAST30DAYS','Τελευταίες 30 ημέρες');
define('_1WEEK','1 Εβδομάδα');
define('_2WEEKS','2 Εβδομάδες');
define('_30DAYS','30 Ημέρες');
define('_ADDEDON','Προστέθηκε την');
define('_RATING','Αξιολόγηση');
define('_DETAILS','Λεπτομέρειες');
define('_OF','Από');
define('_TVOTESREQ',': ελάχιστος αριθμός ψήφων');
define('_SHOWTOP','Εμφάνιση των πρώτων ');
define('_MOSTPOPULAR','Τα Δημοφιλέστερα- σε Πρώτο Πλάνο');
define('_OFALL','απ\'όλα');
define('_POPULARITY','Δημοτικότητα');
define('_SELECTPAGE','Επιλογή Σελίδας');
define('_MAIN','Κεντρική Σελίδα Συνδέσμων');
define('_NEWTODAY','Σημερινά');
define('_NEWLAST3DAYS','Τελευταίες 3 μέρες');
define('_NEWTHISWEEK','Εβδομάδας');
define('_POPULARITY1','Δημοτικότητα (λιγότερες προς περισσότερες αιτήσεις');
define('_POPULARITY2','Δημοτικότητα (περισσότερες προς λιγότερες αιτήσεις');
define('_TITLEAZ','Τίτλος (Α στο Ω)');
define('_TITLEZA','Τίτλος (Ω στο Α)');
define('_RATING1','Αξιολόγηση(με σειρά από Χαμηλότερες ως Υψηλότερες Βαθμολογίες)');
define('_RATING2','Αξιολόγηση(με σειρά από Υψηλότερες ως Χαμηλότερες Βαθμολογίες)');
define('_SEARCHRESULTS4','Αναζήτηση Αποτελεσμάτων για');
define('_USUBCATEGORIES','Υπο-Κατηγορίες');
define('_TRY2SEARCH','Δοκιμή Αναζήτησης');
define('_INOTHERSENGINES','σε άλλες Μηχανές Αναζήτησης');
define('_EDITORIAL','Κύριο Αρθρο');
define('_EDITORIALBY','Κύριο Αρθρο από ');
define('_NOEDITORIAL','Κανένα Αρθρο δεν είναι διαθέσιμο αυτή τη στιγμή σ\'αυτό το κόμβο.');
define('_RATETHISSITE','Αξιολογήστε τον Ιστοχώρο ');
define('_ISTHISYOURSITE','Αυτή η Πηγή Πληροφορίας σας ανήκει;');
define('_ALLOWTORATE','Θέλετε να επιτρέψτε σε τρίτους χρήστες να το αξιολογήσουν μέσω του δικού σας δικτυακού κόμβου!');
define('_OVERALLRATING','Συνολική Αξιολόγηση');
define('_TOTALOF','Σύνολο από');
define('_USER','Χρήστης');
define('_USERAVGRATING','Μέσος όρο Βαθμολογίας Χρήστη');
define('_NUMRATINGS','Αριθμός Ψήφων');
define('_REGISTEREDUSERS','Καταχωρημένοι Χρήστες');
define('_NUMBEROFRATINGS','Πλήθος αξιολογήσεων');
define('_NOREGUSERSVOTES','Μη Καταχωρημένοι Ψήφοι Χρηστών');
define('_BREAKDOWNBYVAL','Κατάτμιση Βαθμολογίας κατά τιμή ');
define('_LTOTALVOTES','Σύνολο Ψήφων');
define('_HIGHRATING','Υψηλή Βαθμολογία (Αξιολόγηση)');
define('_LOWRATING','Χαμηλή Βαθμολογία(Αξιολόγηση)');
define('_NUMOFCOMMENTS','Πλήθος Παρατηρήσεων');
define('_WEIGHNOTE','* Σημείωμα: Ο Κόμβος αυτός υπολογίζει το λόγο Καταχωρημένων / Μη Καταχωρημένων αξιολογήσεων χρηστών');
define('_NOUNREGUSERSVOTES','Δεν Υπάρχουν Ψήφοι Μη Καταχωρημένων Χρηστών');
define('_WEIGHOUTNOTE','* Σημείωμα: Ο Κόμβος αυτός υπολογίζει το λόγο Καταχωρημένων / Εξωτερικών αξιολογήσεων χρηστών');
define('_NOOUTSIDEVOTES','Δεν Υπάρχουν ψήφοι Εξωτερικών Χρήστων ');
define('_OUTSIDEVOTERS','Εξωτερικοί Αξιολογητές');
define('_UNREGISTEREDUSERS','Μη Καταχωρημένοι Χρήστες');
define('_PROMOTEYOURSITE','Προωθήστε τον Ιστοχώρο σας');
define('_PROMOTE01','Μπορεί να σας ενδιαφέρουν μερικές από τις  απομακρυσμένες δυνατότητες "Αξιολόγησης Κόμβων" που προσφέρουμε.Σας επιτρέπουμε να εισάγετε ένα εικονίδιο (ακόμα και φόρμα αξιολόγησης) στο δικτυακό σας τόπο προκειμένου να αυξήσετε το πλήθος ψήθων που λαμβάνει ο κόμβος σας. Παρακαλώ διαλέξτε μία από τις παρακάτω επιλογές από τη παρακάτω λίστα ');
define('_TEXTLINK','Σύνδεσμος τύπου Κειμένου');
define('_PROMOTE02','Ενας τρόπος να συνδεθείτε στη φόρμα αξιολόγησης είναι μέσο ενός απλού συνδέσμου τύπου κειμένου');
define('_HTMLCODE1','Ο Κώδικας HTML που θα πρέπει να χρησιμοποιήστε στη προκειμένη είναι ο ακόλουθος');
define('_THENUMBER',' Ο Αριθμός');
define('_IDREFER','στο πρωτογενή HTML κώδικα αναφοράς ο ID αριθμός στο $sitename database. Βεβαιωθείτε για την ύπαρξη αυτού του αριθμού.');
define('_BUTTONLINK','Κουμπί Συνδέσμου');
define('_PROMOTE03','Εάν ψάχνετε κάτι παραπάνω από έναν απλό σύνδεσμο τύπου κειμένου, ίσως να προτιμούσατε ένα διακριτικό κουμπί συνδέσμου');
define('_RATEIT','Αξιολογήστε τον Ιστοχώρο! ');
define('_HTMLCODE2','Ο πρωτογενής κώδικας για το παραπάνω κουμπί είναι ο εξής');
define('_REMOTEFORM','Απομακρυσμένη Φόρμα Αξιολόγησης');
define('_PROMOTE04','Εάν προσπαθήστε να εξαπατήστε το σύστημα στο θέμα αυτό, θα διαγράψουμε το σύνδεσμο σας. Δεδομένου αυτού, σας παρουσιάζουμε παρακάτω μία πιθανή απεικόνιση της τρέχουσας απομακρυσμένης φόρμας αξιολόγησης.');
define('_VOTE4THISSITE','Ψηφίστε για αυτό τον Ιστοχώρο!');
define('_HTMLCODE3','Η χρήση αυτής της φόρμας θα δώσει την δυνατότητα στους χρήστες να αξιολογήσουν τον ιστοχώρο σας και η αξιολόγηση αυτή θα καταγραφεί εδώ. Η παραπάνω φόρμα είναι ανενεργή, αλλά ο παρακάτω πηγαίος κώδικας θα ενεργοποιηθεί εάν απλώς κάνετε αποκοπή/επικόλληση του στην ιστοσελίδα σας. Ο πηγαίος κώδικάς απεικονείζεται παρακάτω');
define('_PROMOTE05','Ευχαριστούμε! ');
define('_THANKSBROKEN','Ευχαριστούμε για την υποστήριξη σας στην διατήρηση της ακεραιότητας του καταλόγου.');
define('_SECURITYBROKEN','Για λόγους ασφαλείας, ο κωδικός χρήστη σας και η IP διεύθυνση σας επίσης θα αποθηκευτούν προσωρινά.');
define('_THANKSFORINFO','Ευχαριστούμε για την Πληροφορία.');
define('_LOOKTOREQUEST','Αναμένουμε την αίτησή σας.');
define('_SENDREQUEST','Αποστολή Αίτησης');
define('_THANKSTOTAKETIME','Ευχαριστούμε που πήρατε το χρόνο να αξιολογήσετε τον ιστοχώρο ...');
define('_RETURNTO','Επιστροφή');
define('_RATENOTE1','Παρακαλούμε να μην ψηφίζετε πάνω από μία φορά τους ίδιους συνδέσμους.');
define('_RATENOTE2','Η κλίμακα είναι 1 ως 10, όπου 1 αντιστοιχεί στο ανεπαρκή και 10 στο άριστο.');
define('_RATENOTE3','Παρακαλούμε να είσαστε αντικειμενικοί.');
define('_RATENOTE5','Μην ψηφίζετε την δική σας πρόταση.');
define('_YOUAREREGGED','Είσαστε εγγεγραμμένος και συνδεδεμένος χρήστης');
define('_FEELFREE2ADD','Μπορείτε να προσθέσετε μία παρατήρηση για τον ιστοχώρο αυτό.');
define('_YOUARENOTREGGED','Δεν είσαστε εγγεγραμμένος χρήστης ή δεν έχετε συνδεθεί.');
define('_IFYOUWEREREG','Εάν είσαστε εγγεγραμμένος έχετε την δυνατότητα να κάνετε προσωπικά σχόλια για το κόμβο αυτό.');
define('_MODIFY','Τροποποίηση');
define('_COMPLETEVOTE1','Your vote is appreciated.');
define('_COMPLETEVOTE2','You have already voted for this resource in the past $anonwaitdays day(s).');
define('_COMPLETEVOTE3','Vote for a resource only once.<br>All votes are logged and reviewed.');
define('_COMPLETEVOTE4','You cannot vote on a link you submitted.<br>All votes are logged and reviewed.');
define('_COMPLETEVOTE5','No rating selected - no vote tallied');
define('_COMPLETEVOTE6','Only one vote per IP address allowed every $outsidewaitdays day(s).');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDDURL','Add this URL');
define('_EZTRANSFERDOWNLOAD','Transfer');
define('_EZTRANSFERDOWNLOADS','Transfer all downloads from category');
define('_DELEZDOWNLOADSCATWARNING','WARNING : Are you sure you want to delete this category? You will delete all sub-categories and attached downloads as well!');
define('_DELCONTENTCAT','WARNING: Are you sure you want to delete this category? Pages under this category, if they exist, will not be removed, but will not be attached to any category.');
define('_DELCATEGORY','Delete Category');
define('_DOWNLOADTITLE','Download Title');
define('_DOWNLOADSINDB','Downloads in our Database');
define('_DOWNLOADSWAITINGVAL','Downloads Waiting for Validation');
define('_CLEANDOWNLOADSDB','Clean Downloads Votes');
define('_BROKENDOWNLOADSREP','Broken Downloads Reports');
define('_DOWNLOADMODREQUEST','Download Modification Requests');
define('_ADDNEWDOWNLOAD','Add a New Download');
define('_MODDOWNLOAD','Modify a Download');
define('_WEBDOWNLOADSADMIN','Web Downloads Administration');
define('_DNOREPORTEDBROKEN','No reported broken downloads.');
define('_DUSERREPBROKEN','User Reported Broken Downloads');
define('_DIGNOREINFO','Ignore (Deletes all <b><i>requests</i></b> for a given download)');
define('_DDELETEINFO','Delete (Deletes <b><i>broken download</i></b> and <b><i>requests</i></b> for a given download)');
define('_DOWNLOADOWNER','Download Owner');
define('_DUSERMODREQUEST','User Download Modification Requests');
define('_DOWNLOADVALIDATION','Download Validation');
define('_CHECKALLDOWNLOADS','Check ALL Downloads');
define('_VALIDATEDOWNLOADS','Validate Downloads');
define('_NEWDOWNLOADADDED','New Download added to the Database');
