<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/greek/reviews.php,v $
  $Revision: 9.6 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:54 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
define('_YOURNAME','Ονομα');
define('_SORTASC','Ταξινόμηση κατά αύξουσα σειρά');
define('_SORTDESC','Ταξινόμηση κατά φθίνουσα σειρά');
define('_CANCEL','Ακύρωση (Ενέργειας)');
define('_SCORE','Βαθμολογία (αποτέλεσμα αξιολόγησης)');
define('_REPLYMAIN','Αποστολή σχολίου');
define('_ALLOWEDHTML','Επιτρεπόμενα διακριτικά της HTML');
define('_POSTANON','Ανώνυμη Καταχώρηση');
define('_WRITEREVIEW','Σύνταξη Κριτικής');
define('_WRITEREVIEWFOR','Σύνταξη Κριτικής με θέμα');
define('_ENTERINFO','Παρακαλώ εισάγετε πληροφορίες  συσχετιζόμενες με τις προδιαγραφές');
define('_PRODUCTTITLE','Τίτλος');
define('_NAMEPRODUCT',' ');
define('_REVIEW','Ανασκόπηση (Περιγραφή)');
define('_CHECKREVIEW','Η περιγραφή σας. Εχετε επίσης την δυνατότητα να χρησιμοποιήσετε διακριτικά της HTML.');
define('_FULLNAMEREQ','Το Πλήρες Ονομα σας. Απαραίτητο');
define('_REMAIL','Το Email σας');
define('_REMAILREQ','Η Email διεύθυνσή σας. Απαραίτητο.');
define('_SELECTSCORE','Αξιολόγηση');
define('_RELATEDLINK','Σχετικοί Συνδέσμοι ');
define('_PRODUCTSITE','Επίσημος δικτυακός τόπος. Σιγουρευτείτε ότι το URL αρχίζει από "http://"');
define('_LINKTITLE','Επικεφαλίδα Συνδέσμου');
define('_LINKTITLEREQ','Απαραίτητο ένα έχετε κάποιο συσχετιζόμενο σύνδεσμο, αλλιώς προαιρετικό.');
define('_RIMAGEFILE','Ονομα εικόνας');
define('_RIMAGEFILEREQ','Ονομα κύριας εικόνας, τοποθετημένο στο φάκελο images/reviews/. Προαιρετικό.');
define('_CHECKINFO','Παρακαλώ να σιγουρευτείτε ότι η εισαγόμενη πληροφορία είναι 100% έγκυρη και χρήζει ορθούς συντακτικούς κανόνες και κεφαλαιοποίηση. Για παράδειγμα, παρακαλώ να μην εισάγετε κείμενο που να περιέχει αποκλειστικά κεφάλαιους χαρακτήρες, διότι θα απορριφθεί. ');
define('_INVALIDTITLE','Ακυρος Τίτλος... Το πεδίο δεν μπορεί να μείνει κενό  ');
define('_INVALIDSCORE','Ακυρη Βαθμολόγηση... Πρέπει να έχει τιμή μεταξύ 1 και 10');
define('_INVALIDTEXT','Ακυρος Σχολιασμός ...  Το πεδίο δεν μπορεί να μείνει κενό');
define('_INVALIDHITS','Η τιμή πρέπει να είναι απαραίτητα θετικός ακέραιος');
define('_CHECKNAME','Πρέπει να πληκτρολογήσετε τόσο το όνομα σας όσο και το email σας');
define('_INVALIDEMAIL','Ακυρο email (πχ: χρήστης@hotmail.com)');
define('_INVALIDLINK','Πρέπει να πληκτρολογήσετε τόσο χαρακτηρισμό συνδέσμου όσο και σχετικούς συνδέσμους ή να αφήσετε και τα δύο πεδία κενά');
define('_ADDED','Προστιθέμενο(α) [προσθήκη?]');
define('_REVIEWER','Σχολιαστές ?');
define('_REVIEWID','Περιφραφή ID');
define('_LOOKSRIGHT','Σας φαίνεται σωστό;');
define('_RMODIFIED','Τροποποιήθηκε');
define('_RADDED','Προσθήκη');
define('_ADMINLOGGED','Συνδεθήκατε με ιδιότητα διαχειριστή... η παρατήρηση αυτή θα ... (άμεσα) ');
define('_RTHANKS','Ευχαριστούμε που υποβάλλατε την παρατήρηςη αυτή');
define('_MODIFICATION','Τροποποίηση ');
define('_ISAVAILABLE','Είναι τώρα διαθέσιμο στην βάση παρατηρήσεων (σχολίων, περιγραφών, άρθρων ?)');
define('_EDITORWILLLOOK','Οι συντάκτες (ελεγκτές) θα ελέγξουν το υποβαλόμενο σχόλιο (την υποβολή) σας. Θα είναι διαθέσιμο λίαν συντόμως!');
define('_RBACK','Επιστροφή στον Κατάλογο Αρθρων');
define('_RWELCOME','Καλωσήλθατε στην Ενότητα Κριτικές');
define('_10MOSTPOP','10 δημοφιλέστερες κριτικές');
define('_10MOSTREC','10 πιο πρόσφατες κριτικές');
define('_THEREARE','Υπάρχουν');
define('_REVIEWSINDB','Υπάρχουσες Κριτικές στη Βάση');
define('_REVIEWSLETTER','-----');
define('_NOREVIEWS','Δεν υπάρχουν ?');
define('_TOTALREVIEWS','Συνολικές Κριτικές που βρέθηκαν ');
define('_RETURN2MAIN','Επιστροφή στο Κύριο Μενού');
define('_REVIEWCOMMENT','Σχολιάστε την Παρατήρηση');
define('_YOURNICK','Το Παρωνύμιο σας');
define('_RCREATEACCOUNT','<a href="'.getlink("Your_Account").'">Δημιουργήστε</a> προσωπικό λογαριασμό');
define('_YOURCOMMENT','Το σχόλιο σας');
define('_MYSCORE','Προσωπική Αξιολόγηση');
define('_REVIEWMOD','Τροποποίηση Κριτικής');
define('_RDATE','Ημερομηνία');
define('_RTITLE','Τίτλος');
define('_RTEXT','Κείμενο');
define('_REVEMAIL','Email');
define('_RLINK','Σύνδεσμος');
define('_RLINKTITLE','Τίτλος Συνδέσμου');
define('_COVERIMAGE','Κύρια Εικόνα');
define('_PREMODS','Τροποποίηση Προεπισκόπησης');
define('_PAGE','Σελίδα');
define('NO_GET','Please use our form as no GET requests are allowed');

/**************************
  ADMNINISTRATION SECTION
**************************/

define('_REVADMIN','Reviews Administration');
define('_REVTITLE','Reviews Page Title');
define('_REVDESC','Reviews Page Description');
define('_REVWAITING','Reviews Waiting for Validation');
define('_REVIMGINFO','Store your 150*150 image in images/reviews');
define('_NOREVIEW2ADD','No reviews to add');
define('_ADDREVIEW','Add Review');
define('_CLICK2ADDREVIEW','Click here to write a review');
define('_DELMODREVIEW','Delete / Modify a review');
define('_MODREVINFO','You can simply delete/modify reviews by browsing <a href="'.getlink('Reviews').'">Reviews</a> as Admin.');
