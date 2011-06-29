<?php
/*********************************************
   Coppermine 1.3.1 for CPG Dragonfly™
  ********************************************
   Port Copyright © 2004-2006 CPG-Nuke Dev Team
  http://dragonflycms.org
  ********************************************
   v1.1 (c) by Grégory Demar http://coppermine.sf.net/
   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.
  ********************************************
  $Source: /cvs/l10n/greek/coppermine.php,v $
  $Revision: 9.5 $
  $Author: djmaze $
  $Date: 2006/02/12 16:01:52 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Views');//new in 1.2.2nuke
define('PIC_VOTES', 'Votes');//new in 1.2.2nuke
define('PIC_COMMENTS', 'Comments');//new in 1.2.2nuke

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Greek');
define('LANG_NAME_NATIVE', '&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940;');
define('LANG_COUNTRY_CODE', 'GR');
define('TRANS_NAME', 'lykman');
define('TRANS_EMAIL', 'lykman@freemail.gr');
define('TRANS_WEBSITE', 'http://lykman.com');
define('TRANS_DATE', '03-10-2003');
define('CHARSET', 'UTF-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Ναι');
define('NO', 'Οχι');
// some common strings
define('BACK', 'ΠΙΣΩ');
define('CONTINU', 'ΣΥΝΕΧΕΙΑ');
define('INFO', 'Πληροφορίες');
//define('ERROR', 'Λάθος');
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%m/%d/%y at %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y at %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y at %I:%M %p');

// lang_meta_album_names
define('RANDOM', 'Τυχαίες φωτογραφίες');
define('LASTUP', 'Τελευταίες προσθήκες');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Πρόσφατα ενημερωμένα άλμπουμ');
define('LASTCOM', 'Τελευταία σχόλια');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Περισσότερες εμφανίσεις');
define('TOPRATED', 'Υψηλότερη βαθμολογία');
define('LASTHITS', 'Τελευταίες εμφανίσεις');
define('SEARCH', 'Αποτελέσματα αναζήτησης');
define('FAVPICS', 'Αγαπημένες φωτογραφίες');

// lang_errors
define('ACCESS_DENIED', 'Δεν επιτρέπετε η πρόσβαση σε αυτήν την σελίδα.');
define('PERM_DENIED', 'Δεν επιτρέπετε να εκτελέσετε αυτήν την λειτουργία.');
define('PARAM_MISSING', 'Ελειπείς παράμετροι για την εκτέλεση.');
define('NON_EXIST_AP', 'Το επιλεγμένο άλμπουμ/φωτογραφία δεν υπάρχει!');
define('QUOTA_EXCEEDED', 'Ο χώρος σας γέμισε<br /><br />Σας αναλογεί χώρος [quota]K, οι φωτογραφίες σας αυτή την στιγμή χρησιμοποιούν [space]K, προσθέτοντας αυτήν την φωτογραφία θα υπερβείτε το όριο.');
define('GD_FILE_TYPE_ERR', 'Χρησιμοποιώντας το GD image library, επιτρεπόμενα φορμά είναι μόνο τα JPEG και PNG.');
define('INVALID_IMAGE', 'Η φωτογραφία που ανεβάσατε είναι προβληματική ή ελειπής.');
define('RESIZE_FAILED', 'Δεν ήταν δυνατόν να δημιουργηθεί thumbnail ή εικόνα μειωμένου μεγέθους.');
define('NO_IMG_TO_DISPLAY', 'Καμμία εικόνα προς εμφάνιση');
define('NON_EXIST_CAT', 'Η επιλεγμένη κατηγορία δεν υπάρχει');
define('ORPHAN_CAT', 'Η κατηγορία δεν έχει δημιουργό, εκτελεί τον category manager για να διορθώσει το πρόβλημα.');
define('DIRECTORY_RO', 'Ο κατάλογος \'%s\' δεν είναι διαθέσιμος για τροποποίηση, οι φωτογραφίες δεν μπορούν να διαγραφούν');
define('NON_EXIST_COMMENT', 'Το επιλεγμένο σχόλιο δεν υπάρχει.');
define('PIC_IN_INVALID_ALBUM', 'Η φωτογραφία είναι σε ανύπαρκτο άλμπουμ (%s)!?');
define('BANNED', 'Εχετε αποκλειστεί από αυτό το site.');
define('NOT_WITH_UDB', 'Αυτή η λειτουργία είναι απενεργοποιημένη στο Coppermine γιατί είναι αλληλεπιδραστική με το software του φόρουμ. Η αυτό που προσπαθείτε να κάνετε δεν υποστηρίζεται στην παρούσα διαμόρφωση, ή την λειτουργία θα πρέπει να την χειρίζεται το ίδιο το φόρουμ.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');
define('NO_IMG_TO_APPROVE', 'No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE', 'Μετακίνηση στην λίστα των άλμπουμ');
define('ALB_LIST_LNK', 'Λίστα των άλμπουμ');
define('MY_GAL_TITLE', 'Μετακίνηση στo προσωπικό φώτο άλμπουμ');
define('MY_GAL_LNK', 'Το φώτο άλμπουμ μου');
define('MY_PROF_LNK', 'Το προφίλ μου');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Λειτουργίες διαχείρησης');
define('ADM_MODE_LNK', 'Κατάσταση διαχείρησης');
define('USR_MODE_TITLE', 'Λειτουργίες χρήστη');
define('USR_MODE_LNK', 'Κατάσταση χρήστη');
define('UPLOAD_PIC_TITLE', 'Προσθήκη φωτογραφίας σε άλμπουμ');
define('UPLOAD_PIC_LNK', 'Προσθήκη φωτογραφίας');
define('REGISTER_TITLE', 'Δημιουργία λογαριασμού');
define('REGISTER_LNK', 'Εγγραφή');
define('LOGIN_LNK', 'Είσοδος');
define('LOGOUT_LNK', 'Εξοδος');
define('LASTUP_LNK', 'Τελευταίες προσθήκες');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Τελευταία σχόλια');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Περισσότερες εμφανίσεις');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Υψηλότερη βαθμολογία');
define('SEARCH_TITLE', 'Search Photo Collection');
define('SEARCH_LNK', 'Αναζήτηση');
define('FAV_TITLE', 'My Favorites');
define('FAV_LNK', 'Τα αγαπημένα μου');
define('HELP_TITLE', 'HELP');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");


// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Εγκριση προσθήκης');
define('CONFIG_LNK', 'Ρυθμίσεις');
define('ALBUMS_LNK', 'Αλμπουμ');
define('CATEGORIES_LNK', 'Κατηγορίες');
define('USERS_LNK', 'Χρήστες');
define('GROUPS_LNK', 'Ομάδες');
define('COMMENTS_LNK', 'Σχόλια');
define('SEARCHNEW_LNK', 'Προσθήκη πλήθους φωτογραφιών');
define('UTIL_LNK', 'Αλλαγή μεγέθους φωτογραφιών');
define('BAN_LNK', 'Αποκλεισμός χρηστών');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Δημιουργία / ταξινόμηση άλμπουμ');
define('MODIFYALB_LNK', 'Τροποποίηση των άλμπουμ');
//define('MY_PROF_LNK', 'Το προφίλ μου');

// lang_cat_list
define('CATEGORY', 'Κατηγορία');
define('ALBUMS', 'Aλμπουμ');
//define('PICTURES', 'Φωτογραφίες');

// lang_album_list
define('ALBUM_ON_PAGE', '%d άλμπουμ σε %d σελίδα(ες)');
// lang_thumb_view
define('DATE', 'ΗΜ/ΝΙΑ');
define('NAME', 'ΟΝΟΜΑ ΑΡΧΕΙΟΥ');
define('TITLE', 'ΤΙΤΛΟΣ');
define('SORT_DA', 'Στοίχιση από παλαιότερη προς νεότερη ημερομηνία');
define('SORT_DD', 'Στοίχιση από νεότερη προς παλαιότερη ημερομηνία');
define('SORT_NA', 'Στοίχιση αλφαβητικά αύξουσα');
define('SORT_ND', 'Στοίχιση αλφαβητικά φθίνουσα');
define('SORT_TA', 'Στοίχιση με τίτλο αύξουσα');
define('SORT_TD', 'Στοίχιση με τίτλο φθίνουσα');
define('PIC_ON_PAGE', '%d φωτογραφία(ες) σε %d σελίδα(ες)');
define('USER_ON_PAGE', '%d χρήστης(ες) σε %d σελίδα(ες)');
define('SORT_RA', 'Sort by rating ascending');
define('SORT_RD', 'Sort by rating descending');
define('THUMB_RATING', 'RATING');
define('SORT_TITLE', 'Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Επιστροφή στην σελίδα με τα thumbnail');
define('PIC_INFO_TITLE', 'Εμφάνιση/απόκρυψη πληροφοριών φωτογραφίας');
define('SLIDESHOW_TITLE', 'Slideshow');
define('SLIDESHOW_DISABLED', 'e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG', 'This function is for members only, please join.');
define('ECARD_TITLE', 'Αποστολή αυτής της εικόνας σαν ηλεκτρονική κάρτα');
define('ECARD_DISABLED', 'Οι ηλεκτρονικές κάρτες έχουν απενεργοποιηθεί');
define('ECARD_DISABLED_MSG', 'Δεν σας επιτρέπετε να στείλετε ηλεκτρονικές κάρτες');
define('PREV_TITLE', 'Εμφάνιση προηγούμενης φωτογραφίας');
define('NEXT_TITLE', 'Εμφάνιση επόμενης φωτογραφίας');
define('PIC_POS', 'ΦΩΤΟΓΡΑΦΙΑ %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', 'Βαθμολογήστε αυτήν την φωτογραφία ');
define('NO_VOTES', '(Χωρίς ψήφο ακόμα)');
define('RATING', '(τωρινή βαθμολογία : %s / 5 με %s ψήφους)');
define('RUBBISH', 'Χάλια');
define('POOR', 'Κακή');
define('FAIR', 'Μέτρια');
define('GOOD', 'Καλή');
define('EXCELLENT', 'Αψογη');
define('GREAT', 'Καταπληκτική');

// lang_cpg_die
//define('INFORMATION', 'Πληροφορίες');
//define('ERROR', 'Λάθος');
define('_CRITICAL_ERROR', 'Critical error');
define('FILE', 'Αρχείο: ');
define('LINE', 'Γραμμή: ');

// lang_display_thumbnails
define('FILENAME', 'Ονομα αρχείου : ');
define('FILESIZE', 'Μέγεθος αρχείου : ');
define('DIMENSIONS', 'Διαστάσεις : ');
define('DATE_ADDED', 'Ημερομηνία προσθήκης : ');

// lang_get_pic_data
define('N_COMMENTS', '%s σχόλια');
define('N_VIEWS', '%s εμφανίσεις');
define('N_VOTES', '(%s ψήφοι)');


// lang_albmgr_php
define('ALB_NEED_NAME', 'Τα άλμπουμ πρέπει να έχουν όνομα !');
define('CONFIRM_MODIFS', 'Ειστε σίγουρος πως θέλετε να κάνετε αυτές τις αλλαγές ?');
define('NO_CHANGE', 'Δεν κάνατε καμία αλλαγή !');
define('NEW_ALBUM', 'Nέο άλμπουμ');
define('CONFIRM_DELETE1', 'Ειστε σίγουρος πως θέλετε να διαγράψετε αυτό το άλμπουμ ?');
define('CONFIRM_DELETE2', '\\nΟλες οι φωτογραφίες και τα σχόλια που περιέχονται θα χαθούν !');
define('SELECT_FIRST', 'Επιλέξτε ένα αλμπουμ πρώτα');
define('ALB_MRG', 'Διαχείρηση Aλμπουμ');
define('MY_GALLERY', '* Το φώτο άλμπουμ μου *');
define('NO_CATEGORY', '* Χωρίς κατηγορία *');
define('DELETE', 'Διαγραφή');
define('NEW', 'Nέο');
define('APPLY_MODIFS', 'Εφαρμογή αλλαγών');
define('SELECT_CATEGORY', 'Select category');

// lang_catmgr_php
define('MISS_PARAM', 'Οι παράμετροι που απαιτούνται για \'%s\'λειτουργία δεν δόθηκαν !');
define('UNKNOWN_CAT', 'Η επιλεγμένη κατηγορία δεν υπάρχει στην database');
define('USERGAL_CAT_RO', 'Τα φώτο άλμπουμ των χρηστών δεν μπορούν να διαγραφούν !');
define('MANAGE_CAT', 'Διαχείρηση κατηγοριών');
define('CONFIRM_DELETE_CAT', 'Είστε σίγουρος πως θέλετε να διαγράψετε αυτήν την κατηγορία');
//define('CATEGORY', 'Κατηγορία');
define('OPERATIONS', 'Λειτουργίες');
define('MOVE_INTO', 'Mετακίνηση σε');
define('UPDATE_CREATE', 'Ανανέωση/Δημιουργία κατηγορίας');
define('PARENT_CAT', 'Δημιουργός κατηγορίας');
define('CAT_TITLE', 'Τίτλος κατηγορίας');
define('CAT_DESC', 'Περιγραφή κατηγορίας');

// lang_config_php
define('CONFIG_TITLE', 'Ρυθμίσεις');
define('RESTORE_CFG', 'Επαναφορά αρχικών ρυθμίσεων');
define('SAVE_CFG', 'Αποθήκευση νέων ρυθμίσεων');
define('NOTES', 'Σημειώσεις');
//define('INFO', 'Πληροφορίες');
define('UPD_SUCCESS', 'Οι ρυθμίσεις του Coppermine ανανεώθηκαν');
define('RESTORE_SUCCESS', 'Οι προεγκατεστημένες ρυθμίσεις του Coppermine επαναφέρθηκαν');
define('NAME_A', 'Αυξων όνομα');
define('NAME_D', 'Φθίνων όνομα');
define('TITLE_A', 'Αύξων τίτλος');
define('TITLE_D', 'Φθίνων τίτλος');
define('DATE_A', 'Αυξουσα ημερομηνία');
define('DATE_D', 'Φθίνουσα ημερομηνία');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Height');
define('TH_WD', 'Width');


// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Πρέπει να γράψετε το όνομα σας και κάποιο σχόλιο');
define('COM_ADDED', 'Το σχόλιο προστέθηκε');
define('ALB_NEED_TITLE', 'Πρέπει να δώσετε κάποιο τίτλο για το άλμπουμ !');
define('NO_UDP_NEEDED', 'Δεν χρειάζεται ενημέρωση.');
define('ALB_UPDATED', 'Το άλμπουμ ανανεώθηκε');
define('UNKNOWN_ALBUM', 'Το επιλεγμένο άλμπουμ δεν υπάρχει, ή δεν σας επιτρέπετε να προσθέσετε φωτογραφίες σε αυτό');
define('NO_PIC_UPLOADED', 'Δεν προστέθηκε φωτογραφία !<br /><br />Εαν είχατε επιλέξει κάποια να προσθέσετε, ελένξτε αν ο διακομιστής επιτρέπει προσθήκες...');
define('ERR_MKDIR', 'Αποτυχία να δημιουργήσει τον κατάλογο %s !');
define('DEST_DIR_RO', 'Ο κατάλογος %s στον οποίο προσπαθήτε να γράψετε, δεν μπορεί να αλλαÇτεί από το πρόγραμμα !');
define('ERR_MOVE', 'Δεν στάθηκε δυνατή η μετακίνηση από τον %s στον %s !');
define('ERR_FSIZE_TOO_LARGE', 'Tο μέγεθος της φωτογραφίας που ανεβάζετε είναι πολύ μεγάλο (μέγιστο επιτρεπόμενο είναι %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Tο μέγεθος του αρχείου που ανεβάζετε είναι πολύ μεγάλο (μέγιστο επιτρεπόμενο είναι %s KB) !');
define('ERR_INVALID_IMG', 'Tο αρχείο που ανεβάζετε, δεν είναι εγκυρο σαν φωτογραφία!');
define('ALLOWED_IMG_TYPES', 'Μπορείτε να ανεβάσετε μόνο %s φωτογραφίες.');
define('ERR_INSERT_PIC', 'Η φωτογραφία \'%s\' δεν μπορεί να προστεθεί στο άλμπουμ ');
define('UPLOAD_SUCCESS', 'Η φωτογραφία σας προστέθηκε επιτυχώς<br /><br />Θα είναι διαθέσιμη μετά την έγκριση του διαχειριστή.');
//define('INFO', 'Πληροφορίες');
define('ERR_COMMENT_EMPTY', 'Το σχόλιο σας δεν έχει περιεχόμενο !');
define('ERR_INVALID_FEXT', 'Μόνο τα αρχεία με τις ακόλουθες επεκτάσεις επιτρέπονται : <br /><br />%s.');
define('NO_FLOOD', 'Συγνώμη αλλά είστε αυτός που έγραψε το τελευταίο σχόλιο για αυτήν την φωτογραφία<br /><br />Τροποποιήστε το σχόλιο που δημοσιεύσατε εαν θέλετε να το αλλάξετε');
define('REDIRECT_MSG', 'Μεταφερόσαστε...<br /><br /><br />Πατήστε \'CONTINUE\' εάν η σελίδα δεν ανανεωθεί αυτόματα');
define('UPL_SUCCESS', 'Η φωτογραφία σας προστέθηκε επιτυχώς');

// lang_delete_php
define('CAPTION', 'Λεζάντα');
define('FS_PIC', 'εικόνα πλήρους μεγέθους');
define('DEL_SUCCESS', 'διαγράφη επιτυχώς');
define('NS_PIC', 'φωτογραφία κανονικού μεγέθους');
define('ERR_DEL', 'δεν μπορεί να διαγραφεί');
define('THUMB_PIC', 'thumbnail');
//define('COMMENT', 'σχόλιο');
define('IM_IN_ALB', 'φωτογραφία σε άλμπουμ');
define('ALB_DEL_SUCCESS', 'Aλμπουμ \'%s\' διεγράφει');
define('ALB_MGR', 'Διαχείρηση Aλμπουμ');
define('ERR_INVALID_DATA', 'Μη έγκυρα δεδομένα παρελήφθησαν στο \'%s\'');
define('CREATE_ALB', 'Δημιουργία άλμπουμ \'%s\'');
define('UPDATE_ALB', 'Ανανέωση άλμπουμ \'%s\' με τίτλο \'%s\' και ευρετήριο \'%s\'');
define('DEL_PIC', 'Διαγραφή φωτογραφίας');
define('DEL_ALB', 'Διαγραφή άλμπουμ');
define('DEL_USER', 'Διαγραφή χρήστη');
//define('ERR_UNKNOWN_USER', 'Ο επιλεγμένος χρήστης δεν υπάρχει !');
define('COMMENT_DELETED', 'Το σχόλιο διεγράφει επιτυχώς');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'Είστε σίγουρος πως θέλετε να ΔΙΑΓΡΑΨΕΤΕ αυτή την φωτογραφία ? \\nΤα Σχόλια επίσης θα διαγραφούν.');
define('DEL_THIS_PIC', 'ΔΙΑΓΡΑΦΗ ΦΩΤΟΓΡΑΦΙΑΣ');
define('SIZE', '%s x %s πίξελ');
define('VIEWS', '%s φορές');
define('SLIDESHOW', 'Slideshow');
define('STOP_SLIDESHOW', 'ΤΕΛΟΣ SLIDESHOW');
define('VIEW_FS', 'Click to view full size image');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('PIC_INF_TITLE', 'Πληροφορίες φωτογραφίας');
define('PIC_INF_FILENAME', 'Ονομα αρχείου');
define('ALBUM NAME', 'Ονομα άλμπουμ');
define('PIC_INFO_RATING', 'Βαθμολογία (%s ψήφοι)');
define('KEYWORDS', 'Λέξεις Κλειδιά');
define('PIC_INF_FILE_SIZE', 'Μέγεθος αρχείου');
define('PIC_INF_DIMENSIONS', 'Διαστάσεις');
define('DISPLAYED', 'Εμφανίσεις');
define('CAMERA', 'Φωτογραφική Μηχανή');
define('DATE_TAKEN', 'Ημερομηνία λήψης');
define('APERTURE', 'Διάφραγμα');
define('EXPOSURE_TIME', 'Χρόνος έκθεσης');
define('FOCAL_LENGTH', 'Εστιακή απόσταση');
define('COMMENT', 'Σχόλιο');
define('ADDFAV', 'Προσθήκη στα Αγαπημένα');
define('ADDFAVPHRASE', 'Αγαπημένα');
define('REMFAV', 'Αφαίρεση από τα Αγαπημένα');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');
define('REMOVEFAV', 'Removed from Favorites Album');
define('ADDEDTOFAV', 'Added to Favorites Album');

// lang_display_comments
define('OK', 'OK');
define('COM_EDIT_TITLE', 'Μετατροπή σχόλιου');
define('CONFIRM_DELETE_COM', 'Είστε σίγουρος πως θέλετε να διαγράψετε αυτό το σχόλιο ?');
define('ADD_YOUR_COMMENT', 'Προσθήκη σχόλιου');
define('COM_NAME', 'Ονομα');
//define('COMMENT', 'Σχόλιο');
define('YOUR_NAME', 'Ανώνυμος');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Πατήστε στην εικόνα για να κλείσετε αυτό το παράθυρο');

// lang_ecard_php
define('E_TITLE', 'Στείλτε μια ηλεκτρονική κάρτα');
define('INVALID_EMAIL', '<b>Προειδοποίηση</b> : η διεύθυνση e-mail δεν είναι εγκυρη !');
define('E_ECARD_TITLE', 'Μια ηλεκτρονική κάρτα από τον %s για εσάς');
define('VIEW_ECARD', 'Εαν η ηλεκτρονική κάρτα δεν εμφανιστεί σωστά, πατήσατε αυτήν την διασύνδεση');
define('VIEW_MORE_PICS', 'Πατήσατε αυτή την διασύνδεση για να δείτε περισσότερες φωτογραφίες !');
define('SEND_SUCCESS', 'Η ηλεκτρονική σας κάρτα αποστάλει');
define('SEND_FAILED', 'Συγνώμη, αλλά ο διακομιστής δεν μπορεί να στείλει την ηλεκτρονική σας κάρτα...');
define('FROM', 'Από');
define('_YOUR_NAME', 'ΤΟ όνομα σας');
define('YOUR_EMAIL', 'Η διεύθυνση email σας');
define('TO', 'Προς');
define('RCPT_NAME', 'Ονομα παραλήπτη');
define('RCPT_EMAIL', 'Διεύθυνση email παραλήπτη');
define('GREETINGS', 'Με φιλικούς χαιρετισμούς');
define('MESSAGE', 'Μήνυμα');
define('ECARD_LINK_CORRUPT', 'Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser'); //NEW

// lang_editpics_php
define('PIC_INFO', 'Πληροφορίες&nbsp;φωτογραφίας');
define('ALBUM', 'Aλμπουμ');
define('EDIT_TITLE', 'Tίτλος');
define('DESC', 'Περιγραφή');
//define('KEYWORDS', 'Λέξεις κλειδιά');
define('PIC_INFO_STR', '%sx%s - %sKB - %s εμφανίσεις - %s ψήφοι');
define('APPROVE', 'Εγκριση φωτογραφίας');
define('POSTPONE_APP', 'Αρνηση έγκρισης');
//define('DEL_PIC', 'Διαγραφή φωτογραφίας');
define('READ_EXIF', 'Read EXIF info again');
define('RESET_VIEW_COUNT', 'Μηδενισμός μετρητή εμφανίσεων');
define('RESET_VOTES', 'Μηδενισμός ψήφων');
define('DEL_COMM', 'Διαγραφή σχόλιων');
define('UPL_APPROVAL', 'Εγκριση προσθήκης');
define('EDIT_PICS', 'Μετατροπή φωτογραφίας');
define('SEE_NEXT', 'Εμφάνιση επόμενης φωτογραφίας');
define('SEE_PREV', 'Εμφάνιση προηγούμενης φωτογραφίας');
define('N_PIC', '%s φωτογραφίες');
define('N_OF_PIC_TO_DISP', 'Αριθμός φωτογραφιών προς εμφάνιση');
define('APPLY', 'Εφαρμογή τροποποιήσεων');

// lang_groupmgr_php
define('GROUP_NAME', 'Ονομα ομάδας');
define('DISK_QUOTA', 'Διαθέσιμος χώρος');
define('CAN_RATE', 'Μπορούν να βαθμολογήσουν φωτογραφίες');
define('CAN_SEND_ECARDS', 'Μπορούν να στείλουν ηλεκτρονικές κάρτες');
define('CAN_POST_COM', 'Μπορούν να δημοσιεύσουν σχόλια');
define('CAN_UPLOAD', 'Μπορούν να προσθέσουν φωτογραφίες');
define('CAN_HAVE_GALLERY', 'Μπορούν να έχουν προσωπικό φώτο άλμπουμ');
//define('APPLY', 'Εφαρμογή τροποποιήσεων');
define('CREATE_NEW_GROUP', 'Δημιουργία νέας ομάδας');
define('DEL_GROUPS', 'Διαγραφή επιλεγμένης ομάδας');
define('CONFIRM_DEL', 'Προσοχή, όταν διαγράφετε μια ομάδα, οι χρήστες που ανήκουν σε αυτήν την ομάδα θα μεταφερθουν στην ομάδα των \'Εγγεγραμένων\' !\\n\\nΘέλετε να συνεχίσετε ?');
define('GROUP_TITLE', 'Διαχείρηση ομάδων χρηστών');
define('APPROVAL_1', 'Δημοσ. Προσθ. δεκτή (1)');
define('APPROVAL_2', 'Προσωπ. Προσθ. δεκτή (2)');
define('NOTE1', '<b>(1)</b> Προσθήκες σε ένα δημόσιο άλμπουμ απαιτεί την έγκριση του διαχειριστή');
define('NOTE2', '<b>(2)</b> Προσθήκες σε ένα προσωπικό άλμπουμ απαιτεί την έγκριση του διαχειριστή');
//define('NOTES', 'Σημειώσεις');

// lang_index_php
define('WELCOME', 'Καλωσήρθατε !');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'Ειστε σίγουρος πως θέλετε να διαγράψετε αυτο το άλμπουμ ? \\nΟλες οι φωτογραφίες και τα σχόλια θα χαθούν.');
//define('DELETE', 'ΔΙΑΓΡΑΦΗ');
define('MODIFY', 'ΤΡΟΠΟΠΟΙΗΣΗ');
//define('EDIT_PICS', 'ΕΠΕΞΕΡΓΑΣΙΑ ΦΩΤΟΓΡΑΦΙΩΝ');

// lang_list_categories
define('HOME', _HOME);
define('STAT1', '<b>[pictures]</b> φωτογραφίες σε <b>[albums]</b> άλμπουμ και <b>[cat]</b> κατηγορίες με <b>[comments]</b> σχόλια, οι οποίες έχουν εμφανιστεί <b>[views]</b> φορές');
define('STAT2', '<b>[pictures]</b> φωτογραφίες σε <b>[albums]</b> αλμπουμ, οι οποίες έχουν εμφανιστεί <b>[views]</b> φορές');
define('XX_S_GALLERY', '%s\'s Φώτο άλμπουμ');
define('STAT3', '<b>[pictures]</b> φωτογραφίες σε <b>[albums]</b> άλμπουμ με <b>[comments]</b> σχόλια, οι οποίες έχουν εμφανιστεί <b>[views]</b> φορές');

// lang_list_users
define('USER_LIST', 'Κατάλογος Χρηστών');
define('NO_USER_GAL', 'Δεν υπάρχουν χρήστες που να τους επιτρέπετε να έχουν άλμπουμ');
define('N_ALBUMS', '%s άλμπουμ');
define('N_PICS', '%s φωτογραφία(ες)');

// lang_list_albums
define('N_PICTURES', '%s φωτογραφίες');
define('LAST_ADDED', ', η τελευταία προστέθηκε στις %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Ενημέρωση άλμπουμ %s');
define('GENERAL_SETTINGS', 'Γενικές ρυθμίσεις');
define('ALB_TITLE', 'Τίτλος άλμπουμ');
define('ALB_CAT', 'Κατηγορία άλμπουμ');
define('ALB_DESC', 'Περιγραφή άλμπουμ');
define('ALB_THUMB', 'Aλμπουμ thumbnail');
define('ALB_PERM', 'Διακαιώματα για αυτό το άλμπουμ');
define('CAN_VIEW', 'Το άλμπουμ μπορεί να εμφανιστεί στους');
define('MOD_CAN_UPLOAD', 'Οι επισκέπτες μπορούν να προσθέσουν φωτογραφίες');
define('CAN_POST_COMMENTS', 'Οι επισκέπτες μπορούν να δημοσιεύσουν σχόλια');
define('MOD_CAN_RATE', 'Οι επισκέπτες μπορούν να βαθμολογήσουν τις φωτογραφίες');
define('USER_GAL', 'Φώτο άλμπουμ χρηστών');
define('NO_CAT', '* Μη κατηγοριοποιημένο *');
define('ALB_EMPTY', 'Το άλμπουμ είναι άδειο');
define('LAST_UPLOADED', 'Τελευταία προσθήκη');
define('PUBLIC_ALB', 'Ολοι (δημόσιο άλμπουμ)');
define('ME_ONLY', 'Mόνο εγώ');
define('OWNER_ONLY', 'Ο (%s) , ιδιοκτήτης του άλμπουμ');
define('GROUPP_ONLY', 'Τα μέλη της ομάδας \'%s\' ');
define('ERR_NO_ALB_TO_MODIFY', 'Κανένα άλμπουμ για τροποποίηση στην βάση δεδομένων.');
define('UPDATE', 'Ενημέρωση άλμπουμ');

// lang_rate_pic_php
define('ALREADY_RATED', 'Συγνώμη αλλά έχετε ήδη βαθμολογήσει αυτή την φωτογραφία');
define('RATE_OK', 'Η ψήφος σας έγινε δεκτή');

// lang_register_php
define('USERNAME', 'Ονομα Χρήστη');
define('X_S_PROFILE', 'Το προφίλ του %s');
define('GROUP', 'Ομάδα');
define('DISK_USAGE', 'Χρήση χώρου');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Επισκόπηση σχολιων');
define('NO_COMMENT', 'Δεν υπάρχουν σχόλια για επισκόπηση');
define('N_COMM_DEL', '%s σχόλιο(α) διαγράφηκε(αν)');
define('N_COMM_DISP', 'Αριθμός σχόλιων προς εμφάνιση');
define('R_SEE_PREV', 'Εμφάνιση προηγούμενου');
define('R_SEE_NEXT', 'Εμφάνιση επόμενου');
define('R_DEL_COMM', 'Διαγραφή επιλεγμένων σχολιων');

// lang_search_php
define('S_SEARCH', 'Αναζήτηση στην συλλογή φωτογραφιών');

// lang_search_new_php
define('PAGE_TITLE', 'Αναζήτηση νέων φωτογραφιών');
define('SELECT_DIR', 'Επιλογή καταλόγου');
define('SELECT_DIR_MSG', 'Αυτή η λειτουργία σας επιτρέπει να προσθέσετε πλήθος φωτογραφιών που έχετε ανεβάσει στον διακομιστή σας μέσω FTP.<br /><br />Επιλέξτε τον κατάλογο οπου ανεβάσατε τις φωτογραφίες σας');
define('NO_PIC_TO_ADD', 'Δεν υπάρχει φωτογραφία για προσθήκη');
define('NEED_ONE_ALBUM', 'Χρειάζεστε τουλάχιστο ένα άλμπουμ για να χρησιμοποιήσετε αυτή την λειτουργία');
define('WARNING', 'Προειδοποίηση');
define('CHANGE_PERM', 'το πρόγραμμα δεν μπορεί να γράψει σε αυτό τον κατάλογο, πρέπει να αλλάξετε την κατάσταση του καταλόγου (CHMOD) σε 755 ή 777 πριν προσπαθήσετε να προσθέσετε φωτογραφίες !');
define('TARGET_ALBUM', '<b>Εισαγωγή φωτογραφιών &quot;</b>%s<b>&quot; στο </b>%s');
define('FOLDER', 'Κατάλογος');
define('IMAGE', 'Εικόνα');
//define('ALBUM', 'Aλμπουμ');
define('RESULT', 'Αποτέλεσμα');
define('DIR_RO', 'Δεν μπορεί να εγγραφεί. ');
define('DIR_CANT_READ', 'Δεν μπορεί να διαβαστεί. ');
define('INSERT', 'Προσθέτοντας νέες φωτογραφίες στο φώτο άλμπουμ');
define('LIST_NEW_PIC', 'Λίστα φωτογραφιών');
define('INSERT_SELECTED', 'Εισαγωγή επιλεγμένων φωτογραφιών');
define('NO_PIC_FOUND', 'Δεν βρέθηκαν νέες φωτογραφίες');
define('BE_PATIENT', 'Παρακαλώ να είστε υπομονετικοί, το πρόγραμμα χρειάζετε λίγη ώρα για να προσθέσει τις φωτογραφίες...');
define('SN_NOTES', '<ul><li><b>OK</b> : σημαίνει πως η φωτογραφία εισήχθει επιτυχώς<li><b>DP</b> : σημαίνει πως η φωτογραφία υπάρχει ήδη στην βάση δεδομένων<li><b>PB</b> : σημαίνει πως η φωτογραφία δεν μπορεί να προστεθεί, ελένξτε τις ρυθμίσεις σας και αν έχετε άδεια να χρησιμοποιήσετε τους καταλόγους που βρίσκονται οι φωτογραφίες<li>Εαν τα OK, DP, PB \'signs\' δεν εμφανίζονται, επιλέξτε πάνω στην μη εμφανιθείσα εικόνα τους να δείτε τι πρόβλημα παρουσιάστηκε από την γλώσσα PHP<li>Εαν εμφανίσει ο browser σας timeout, ξαναφορτώστε την σελίδα με reload</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('UP_TITLE', 'Προσθήκη φωτογραφίας');
define('MAX_FSIZE', 'Το μέγιστο επιτρεπόμενο μέγεθος αρχείου είναι %s KB');
//define('ALBUM', 'Aλμπουμ');
define('PICTURE', 'Φωτογραφία');
define('PIC_TITLE', 'Τίτλος φωτογραφίας');
define('DESCRIPTION', 'Περιγραφή φωτογραφίας');
define('UP_KEYWORDS', 'Λέξεις Κλειδιά (διαχωρισμένες με κενά)');
define('ERR_NO_ALB_UPLOADABLES', 'Συγνώμη, δεν υπάρχει άλμπουμ που να σας επιτρέπετε η προσθήκη φωτογραφιών');

// lang_usermgr_php
define('U_TITLE', 'Διαχείρηση χρηστών');
//define('NAME_A', 'όνομα, αύξουσα σειρά');
//define('NAME_D', 'όνομα, φθίνουσα σειρά');
define('GROUP_A', 'ομάδα, αύξουσα σειρά');
define('GROUP_D', 'ομάδα, φθίνουσα σειρά');
define('REG_A', 'ημερομηνία εγγραφής, αύξουσα σειρά');
define('REG_D', 'ημερομηνία εγγραφής, φθίνουσα σειρά');
define('PIC_A', 'αρίθμηση φωτογραφιών, άυξουσα σειρά');
define('PIC_D', 'αρίθμηση φωτογραφιών, φθίνουσα σειρά');
define('DISKU_A', 'χρήση χώρου, αύξουσα σειρά');
define('DISKU_D', 'χρήση χώρου, φθίνουσα σειρά');
define('SORT_BY', 'Στοίχηση χρηστών σύμφωνα με');
define('ERR_NO_USERS', 'Ο πίνακας χρηστών είναι άδειος !');
define('ERR_EDIT_SELF', 'Δεν μπορείτε να τροποποιήσετε το προφίλ σας, χρησιμοποιήστε την διασύνδεση \'My profile\' για αυτό');
define('EDIT', 'ΤΡΟΠΟΠΟΙΗΣΗ');
//define('DELETE', 'ΔΙΑΓΡΑΦΗ');
define('U_NAME', 'Ονομα Χρήστη');
//define('GROUP', 'Ομάδα');
define('INACTIVE', 'Ανενεργός');
//define('OPERATIONS', 'Λειτουργίες');
define('PICTURES', 'Φωτογραφίες');
define('DISK_SPACE', 'Χώρος σε χρήση / Διαθέσιμος');
define('REGISTERED_ON', 'Εγγράφηκε στις');
define('U_USER_ON_P_PAGES', '%d χρήστες σε %d σελίδα(ες)');
define('USER_CONFIRM_DEL', 'Είστε σίγουρος πως θέλετε να ΔΙΑΓΡΑΨΕΤΕ αυτόν τον χρήστη ? \\nΟλες οι φωτογραφίες και τα άλμπουμ του θα διαγραφούν επίσης.');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'Ο επιλεγμένος χρήστης δεν υπάρχει !');
define('MODIFY_USER', 'Τροποποίηση χρήστη');
//define('NOTES', 'Σημειώσεις');
define('NOTE_LIST', '<li>Εαν δεν θέλετε να αλλάξετε το παρών Κωδικό σας, αφήστε το πεδίο \"Κωδικός\" κενό');
define('PASSWORD', 'Κωδικός');
define('USER_ACTIVE_CP', 'Ο χρήστης είναι ενεργός');
define('USER_GROUP_CP', 'Ομάδα χρηστών');
define('USER_EMAIL', 'Εmail χρήστη');
define('USER_WEB_SITE', 'Προσωπική σελίδα χρήστη');
define('CREATE_NEW_USER', 'Δημιουργία νέου χρήστη');
define('USER_FROM', 'Τοποθεσία χρήστη');
define('USER_INTERESTS', 'Ενδιαφέροντα χρήστη');
define('USER_OCC', 'Επάγγελμα χρήστη');

// lang_util_php
define('UTIL_TITLE', 'Αλλαγή μεγέθους φωτογραφιών');
define('WHAT_IT_DOES', 'Τι κάνει...');
define('WHAT_UPDATE_TITLES', 'Ενημερώνει τίτλους από όνομα αρχείου');
define('WHAT_DELETE_TITLE', 'Διαγράφει τίτλους');
define('WHAT_REBUILD', 'Ξαναφτιάχνει τα thumbnails και τις φωτογραφίες αλλαγμένου μεγέθους');
define('WHAT_DELETE_ORIGINALS', 'Διαγράφει τις φωτογραφίες με το αρχικό μέγεθος, αντικαθιστώντας τις με τις άλλες αλλαγμένου μεγέθους');
define('U_FILE', 'Αρχείο');
define('TITLE_SET_TO', 'ο τίτλος να γίνει');
define('SUBMIT_FORM', 'υποβολή');
define('UPDATED_SUCCESFULLY', 'ενημερώθηκε επιτυχώς');
define('ERROR_CREATE', 'ΛΑΘΟʽκατα την δημιουργία');
define('CONTIN', 'Συνέχεια με επόμενες φωτό');
define('MAIN_SUCCESS', 'Το αρχείο %s χρησιμοποιήθηκε επιτυχώς σαν η κυρίως φωτογραφία');
define('ERROR_RENAME', 'Λάθος κατά την μετονομασία από %s σε %s');
define('ERROR_NOT_FOUND', 'Το αρχείο %s δεν βρέθηκε');
define('U_BACK', 'πίσω στην κεντρική');
define('THUMBS_WAIT', 'Ενημέρωση των thumbnails ή/και των φωτογραφιών αλλαγμένου μεγέθους, παρακαλώ περιμένετε...');
define('THUMBS_CONTINUE_WAIT', 'Συνέχεια με την ενημέρωση των thumbnails ή/και των φωτογραφιών αλλαγμένου μεγέθους...');
define('TITLES_WAIT', 'Ενημέρωση τίτλων, παρακαλώ περιμένετε...');
define('DELETE_WAIT', 'Διαγραφή τιτλων, παρακαλώ περιμένετε...');
define('REPLACE_WAIT', 'Διαγραφή προτοτύπων και αντικατάσταση με τις φωτογραφίες αλλαγμένου μεγέθους, παρακαλώ περιμένετε...');
define('INSTRUCTION', 'Γρήγορες οδηγίες');
define('INSTRUCTION_ACTION', 'Επιλογή λειτουργίας');
define('INSTRUCTION_PARAMETER', 'Επιλογή παραμέτρων');
define('INSTRUCTION_ALBUM', 'Επιλογή αλμπουμ');
define('INSTRUCTION_PRESS', 'Πατήστε %s');
define('U_UPDATE', 'Ενημέρωση thumbs ή/και φωτογραφιών αλλαγμένου μεγέθους');
define('UPDATE_WHAT', 'Τι θα πρέπει να ενημερωθεί');
define('UPDATE_THUMB', 'Μόνο τα thumbnails');
define('UPDATE_PIC', 'Μόνο οι φωτογραφίες αλλαγμένου μεγέθους');
define('UPDATE_BOTH', 'Και τα thumbnails και οι φωτογραφίες αλλαγμένου μεγέθους');
define('UPDATE_NUMBER', 'Πλήθος φωτογραφιών που επεξεργάστηκαν ανά κλικ');
define('UPDATE_OPTION', '(Δηλώστε αυτήν την επιλογή με αριθμό χαμηλότερο αν σας εμφανίζει timeout )');
define('FILENAME_TITLE', 'Ονομα αρχείου ? Τίτλος Φωτογραφίας');
define('FILENAME_HOW', 'Πως θα πρεπει να μεταβληθεί ο τίτλος του αρχείου');
define('FILENAME_REMOVE', 'Αφαίρεση της επέκτασης .jpg και αντικατάσταση με _ (κάτω παύλα) και κενά');
define('FILENAME_EURO', 'Αλλαγή 2003_11_23_13_20_20.jpg σε 23/11/2003 13:20');
define('FILENAME_US', 'Αλλαγή 2003_11_23_13_20_20.jpg σε 11/23/2003 13:20');
define('FILENAME_TIME', 'Αλλαγή 2003_11_23_13_20_20.jpg σε 13:20');
define('UT_DELETE', 'Διαγραφή τίτλων φωτογραφιών ή φωτογραφιών αρχικού μεγέθους');
define('DELETE_TITLE', 'Διαγραφή τίτλων φωτογραφιών');
define('DELETE_ORIGINAL', 'Διαγραφή φωτογραφιών αρχικού μεγέθους');
define('DELETE_REPLACE', 'Διαγραφή πρωτότυπων φωτογραφιών με αντικατάσταση τους από τις φωτογραφίες αλλαγμένου μεγέθους');
//define('SELECT_ALBUM', 'Επιλογή άλμπουμ');

// lang_pagetitle_php
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
$lang_usermgr_php = array(
        'name_a' => 'όνομα, αύξουσα σειρά',
        'name_d' => 'όνομα, φθίνουσα σειρά',
        'group_a' => 'ομάδα, αύξουσα σειρά',
        'group_d' => 'ομάδα, φθίνουσα σειρά',
        'reg_a' => 'ημερομηνία εγγραφής, αύξουσα σειρά',
        'reg_d' => 'ημερομηνία εγγραφής, φθίνουσα σειρά',
        'pic_a' => 'αρίθμηση φωτογραφιών, άυξουσα σειρά',
        'pic_d' => 'αρίθμηση φωτογραφιών, φθίνουσα σειρά',
        'disku_a' => 'χρήση χώρου, αύξουσα σειρά',
        'disku_d' => 'χρήση χώρου, φθίνουσα σειρά',
        );
$lang_byte_units = array('Bytes', 'KB', 'MB');
// Day of weeks and months
$lang_day_of_week = array('Κυρ','Δευ','Tρι','Τετ','Πεμ','Παρ','Σαβ',);
$lang_month = array('Ιαν','Φεβ','Mαρ','Aπρ','Mαι','Ιουν','Ιουλ','Aυγ','Σεπ','Οκτ','Noε','Δεκ',);
$lang_meta_album_names = array('random' => 'Τυχαίες φωτογραφίες',
    'random' => 'Random pictures',
    'lastup' => 'Τελευταίες προσθήκες',
    'lastupby' => 'My Last Additions', // new 1.2.2
    'lastalb' => 'Πρόσφατα ενημερωμένα άλμπουμ',
    'lastcom' => 'Τελευταία σχόλια',
    'lastcomby' => 'My Last comments', // new 1.2.2
    'topn' => 'Περισσότερες εμφανίσεις',
    'toprated' => 'Υψηλότερη βαθμολογία',
    'lasthits' => 'Τελευταίες εμφανίσεις',
    'search' => 'Αποτελέσματα αναζήτησης',
    'favpics' => 'Αγαπημένες φωτογραφίες'
    );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array('title' => 'Ρυθμίσεις',
    'title' => 'Configuration',
    'restore_cfg' => 'Επαναφορά αρχικών ρυθμίσεων',
    'save_cfg' => 'Αποθήκευση νέων ρυθμίσεων',
    'notes' => 'Σημειώσεις',
    'info' => 'Πληροφορίες',
    'upd_success' => 'Οι ρυθμίσεις του Coppermine ανανεώθηκαν',
    'restore_success' => 'Οι προεγκατεστημένες ρυθμίσεις του Coppermine επαναφέρθηκαν',
    'name_a' => 'Αυξων όνομα',
    'name_d' => 'Φθίνων όνομα',
    'title_a' => 'Αύξων τίτλος',
    'title_d' => 'Φθίνων τίτλος',
    'date_a' => 'Αυξουσα ημερομηνία',
    'date_d' => 'Φθίνουσα ημερομηνία',
    'rating_a' => 'Rating ascending', // new in cpg1.2.0nuke
    'rating_d' => 'Rating descending', // new in cpg1.2.0nuke
    'th_any' => 'Max Aspect',
    'th_ht' => 'Height',
    'th_wd' => 'Width',
    );
// start left side interpretation
$lang_config_data = array(
    // General settings
        'Γενικές επιλογές',
        array('Ονομα γκάλερι', 'gallery_name', 0),
        array('Περιγραφή φώτο άλμπουμ', 'gallery_description', 0),
        array('Ε-mail διαχειριστή του φώτο άλμπουμ', 'gallery_admin_email', 0),
        array('Διεύθυνση παραλήπτη για \'Δείτε περισσότερες φωτογραφίες\' διασύνδεση στις ηλεκτρονικές κάρτες', 'ecards_more_pic_target', 0),
        array('Θέμα', 'cpgtheme', 6),
        array('Page Specific Titles instead of >Coppermine', 'nice_titles', 1), 
        // Album list view
        'Εμφάνιση Λίστας Αλμπουμ',
        array('Πλάτος κυρίως πίνακα (πίξελ ή %)', 'main_table_width', 0),
        array('Πλήθος υποκατηγοριών προς εμφάνιση', 'subcat_level', 0),
        array('Πλήθος άλμπουμ προς εμφάνιση', 'albums_per_page', 0),
        array('Πλήθος στηλών για την λίστα των άλμπουμ', 'album_list_cols', 0),
        array('Μέγεθος των thumbnails σε πίξελ', 'alb_list_thumb_size', 0),
        array('Περιεχόμενο της κεντρικής σελίδας', 'main_page_layout', 0),
        array('Εμφάνιση πρώτου επιπέδου thumbnails του άλμπουμ στις κατηγορίες', 'first_level', 1), 
        // Thumbnail view
        'Εμφάνιση Thumbnail',
        array('Πλήθος στηλών στην σελίδα των thumbnail', 'thumbcols', 0),
        array('Πλήθος γραμμών στην σελίδα των thumbnail', 'thumbrows', 0),
        array('Μέγιστο πλήθος tabs για εμφάνιση', 'max_tabs', 0),
        array('Εμφάνιση ενσωματωμένου σχόλιου (επιπρόσθετα του τίτλου) κάτω από το thumbnail', 'caption_in_thumbview', 1),
        array('Εμφάνιση πλήθους σχόλιων κάτω από το thumbnail', 'display_comment_count', 1),
        array('Προεπιλογή ρύθμισης στοίχησης για τις φωτογραφίες', 'default_sort_order', 3),
        array('Ελάχιστο πλήθος ψήφων για μια φωτογραφία για να εμφανιστεί αυτή στην λίστα με την \'top-rated\' .', 'min_votes_for_rating', 0),
        array('Alts and title tags of thumbnail show title and keyword instead of picinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
    // Display Image & Comment settings
        'Εμφάνιση εικόνων &amp; Ρυθμίσεις σχόλιων',
        array('Πλάτος πίνακα για εμφάνιση φωτογραφιών (πίξελ ή %)', 'picture_table_width', 0),
        array('Να εμφανίζονται οι πληροφορίες των φωτογραφιών πάντα?', 'display_pic_info', 1),
        array('Φιλτράρισμα απαγορευμένων λέξεων στα σχόλια', 'filter_bad_words', 1),
        array('Να επιτραπούν οι φατσούλες στα σχόλια', 'enable_smilies', 1),
        array('Allow several consecutive comments on one pic from the same user', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
        array('Email site admin upon comment submission' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
        array('Mέγιστο μήκος για την περιγραφή μιας φωτογραφίας', 'max_img_desc_length', 0),
        array('Mέγιστο πλήθος χαρακτήρων ανά λέξη', 'max_com_wlength', 0),
        array('Mέγιστος αριθμός γραμμών ανά σχόλιο', 'max_com_lines', 0),
        array('Mέγιστο μήκος σχολίου', 'max_com_size', 0),
        array('Εμφάνιση film strip', 'display_film_strip', 1),
        array('Αριθμός αντικειμένων μέσα στο film strip', 'max_film_strip_items', 0),
        array('Allow viewing of full size pic by anonymous', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
        array('Number of days between being able to vote on the same image','keep_votes_time',0), // new in cpg1.2.2c nuke
        array('Show fullsize picture in slideshow','fullsize_slideshow',1),
        array('Show blocks on the right of displayimage if right blocks are on at module level?', 'right_blocks', 1), // new 1.2.2
    // Pictures and thumbnails settings
        'Pυθμίσεις φωτογραφιών και thumbnails',
        array('Ποιότητα των JPEG αρχείων', 'jpeg_qual', 0),
    array('Place watermark on image', 'watermark', 1),
        array('Μέγιστη διάσταση του thumbnail <b>*</b>', 'thumb_width', 0),
        array('Χρήση διάστασης ( πλάτος ή ύψος ή Μέγιστη αναλογία για το thumbnail )<b>*</b>', 'thumb_use', 7),
        array('Δημιουργία ενδιάμεσων φωτογραφιών', 'make_intermediate', 1),
        array('Mέγιστο πλάτος ή ύψος ενδιάμεσης φωτογραφίας <b>*</b>', 'picture_width', 0),
        array('Mέγιστο μέγεθος για τις φωτογραφίες για προσθήκη (KB)', 'max_upl_size', 0),
        array('Mέγιστο πλάτος ή ύψος για τις φωτογραφίες για προσθήκη (πίξελ)', 'max_upl_width_height', 0), 
    array('Allow multiple Files to be upload with same file name', 'samename', 1), 
	// User settings
        'Ρυθμίσεις χρηστών',
        array('Επιτρέπετε η εγγραφή νέου χρήστη', 'allow_user_registration', 1),
/*
        array('Η εγγραφή νέου χρήστη να απαιτεί επαλήθευση email', 'reg_requires_valid_email', 1),
        array('Επιτρέπετε δύο χρήστες να έχουν κοινή διεύθυνση email', 'allow_duplicate_emails_addr', 1),
*/
        array('Οι χρήστες μπορούν να έχουν προσωπικά άλμπουμ', 'allow_private_albums', 1), 
        array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
	// Custom fields for image description
        'Custom πεδία για περιγραφή των φωτογραφιών (αφήστε κενό εαν δεν θα το χρησιμοποιήσετε)',
        array('Ονομα 1ου πεδίου', 'user_field1_name', 0),
        array('Ονομα 2ου πεδίου', 'user_field2_name', 0),
        array('Ονομα 3ου πεδίου', 'user_field3_name', 0),
        array('Ονομα 4ου πεδίου', 'user_field4_name', 0), 
    // Pictures and thumbnails advanced settings
        'Εξιδεικευμένες ρυθμίσεις φωτογραφιών και thumbnails',
        array('Εμφάνιση εικονιδίου ιδιωτικού άλμουμ στον επισκέπτη', 'show_private', 1),
        array('Απαγορευμένοι χαρακτήρες σε όνομα αρχείου', 'forbiden_fname_char', 0),
        array('Δεκτές επεκτάσεις αρχείων για τις προστιθέμενες φωτογραφίες', 'allowed_file_extensions', 0),
        array('Mέθοδος για αλλαγή μεγέθους φωτογραφίας', 'thumb_method', 2),
        array('Διαδρομή για την εφαρμογή ImageMagick / netpbm \'convert\' (παράδειγμα /usr/bin/X11/)', 'impath', 0),
        array('Δεκτοί τύποι αρχείων (μόνο για το ImageMagick)', 'allowed_img_types', 0),
        array('Επιλογές εντολών γραμμής για το ImageMagick', 'im_options', 0),
        array('Ανάγνωση πληροφοριών EXIF στα JPEG αρχεία', 'read_exif_data', 1),
        array('Read IPTC data in JPEG files', 'read_iptc_data', 1), // new in cpg1.2.0nuke
        array('Κατάλογος άλμπουμ <b>*</b>', 'fullpath', 0),
        array('Ο κατάλογος για τις φωτογραφίες των χρηστών <b>*</b>', 'userpics', 0),
        array('Πρόθεμα των ενδιάμεσων φωτογραφιών <b>*</b>', 'normal_pfx', 0),
        array('Πρόθεμα των thumbnails <b>*</b>', 'thumb_pfx', 0),
        array('Picinfo display filename', 'picinfo_display_filename', '1'), // new in cpg1.2.0nuke
        array('Picinfo display album name', 'picinfo_display_album_name', '1'), // new in cpg1.2.0nuke
        array('Picinfo display_file_size', 'picinfo_display_file_size', '1'), // new in cpg1.2.0nuke
        array('Picinfo display_dimensions', 'picinfo_display_dimensions', '1'), // new in cpg1.2.0nuke
        array('Picinfo display_count_displayed', 'picinfo_display_count_displayed', '1'), // new in cpg1.2.0nuke
        array('Picinfo display_URL', 'picinfo_display_URL', '1'), // new in cpg1.2.0nuke
        array('Picinfo display URL as bookmark link', 'picinfo_display_URL_bookmark', '1'), // new in cpg1.2.0nuke
        array('Picinfo display fav album link', 'picinfo_display_favorites', '1'), // new in cpg1.2.0nuke
    // Cookies & Charset settings
        'Ρυθμίσεις για τα Cookies &amp; και τις κωδικοποιήσεις χαρακτήρων',
        array('Ονομα του cookie που χρησιμοποιεί το πρόγραμμα', 'cookie_name', 0),
        array('Διαδρομή για το cookie που χρησιμοποιεί το πρόγραμμα', 'cookie_path', 0),
        // 'Miscellaneous settings',
        'Λοιπές ρυθμίσεις',
    array('Eνεργοποίηση λειτουργίας εντοπισμού λαθών', 'debug_mode', 1),
        '<br /><div align="center">(*) Τα πεδία με * δεν πρέπει να αλλαχτούν εαν έχετε ήδη φωτογραφίες στα αλμπουμ σας.</div><br />'
        );
// end left side interpretation