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
  $Source: /cvs/l10n/italian/coppermine.php,v $
  $Revision: 9.12 $
  $Author: nanocaiordo $
  $Date: 2008/03/20 11:59:30 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Viste');//new in 1.2.2nuke
define('PIC_VOTES', 'Voti');//new in 1.2.2nuke
define('PIC_COMMENTS', 'Commenti');//new in 1.2.2nuke
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Italian');
define('LANG_NAME_NATIVE', 'Italiano');
define('LANG_COUNTRY_CODE', 'it');
define('TRANS_NAME', 'ralf57');
define('TRANS_EMAIL', '(CPG 1.1) greatkingrat@katamail.com');
define('TRANS_WEBSITE', 'http://madeinbanzi.it/');
define('TRANS_NAME2', '(CPG 1.2) Sesto Avolio');
define('TRANS_EMAIL2', 'webmaster@eolica.net');
define('TRANS_WEBSITE2', 'http://eolica.net/');
define('TRANS_DATE', '2003-11-05');
define('CHARSET', 'utf-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Si');
define('NO', 'No');
// some common strings
define('BACK', 'INDIETRO');
define('CONTINU', 'CONTINUA');
define('INFO', 'Informazione');
//define('_ERROR', 'Error'); //already in main lang file
define('ALBUM_DATE_FMT', '%d %B %Y');
define('LASTCOM_DATE_FMT', '%d/%m/%y alle %H:%M');
define('LASTUP_DATE_FMT', '%d %B %Y');
define('REGISTER_DATE_FMT', '%d %B %Y');
define('LASTHIT_DATE_FMT', '%d %B %Y alle %I:%M %p');
define('COMMENT_DATE_FMT', '%d %B %Y alle %I:%M %p');

// lang_meta_album_names
define('RANDOM', 'Immagini...a casaccio');
define('LASTUP', 'Ultimi arrivi');
define('LASTUPBY', 'I miei ultimi inserimenti');
define('LASTALB', 'Ultimi albums aggiornati');
define('LASTCOM', 'Ultimi commenti');
define('LASTCOMBY', 'I miei ultimi commenti');
define('TOPN', 'Le più viste');
define('TOPRATED', 'Le più votate');
define('LASTHITS', 'Viste di recente');
define('SEARCH', 'Risultati della ricerca');
define('FAVPICS', 'Immagini Preferite');

// lang_errors
define('ACCESS_DENIED', 'Non puoi accedere a questa pagina.');
define('PERM_DENIED', 'Non puoi effettuare questa operazione.');
define('PARAM_MISSING', 'Script eseguito senza i parametri richiesti.');
define('NON_EXIST_AP', 'Immagine/album selezionato non presente nel database!');
define('QUOTA_EXCEEDED', 'Quota disco superata<br /><br />Hai a disposizione [quota]K, attualmente utilizzi [space]K, una ulteriore immagine farebbe superare la quota.');
define('GD_FILE_TYPE_ERR', 'Le librerie GD supportano solo i formati JPEG and PNG.');
define('INVALID_IMAGE', 'Immagine corrotta o non supportata dalla libreria GD');
define('RESIZE_FAILED', 'Non posso creare le miniature e le immagini intermedie.');
define('NO_IMG_TO_DISPLAY', 'Nessuna immagine disponibile');
define('NON_EXIST_CAT', 'La categoria selezionata non esiste');
define('ORPHAN_CAT', 'Una categoria non è legata, correggi il problema col Manager Categorie.');
define('DIRECTORY_RO', 'Il percorso \'%s\' è protetto in scrittura, le immagini non possono essere cancellate');
define('NON_EXIST_COMMENT', 'Il commento selezionato non esiste.');
define('PIC_IN_INVALID_ALBUM', 'Immagine appartenente ad un album inesistente (%s)!?');
define('BANNED', 'Sei stato bannato e non puoi usare questo sito.');
define('NOT_WITH_UDB', 'Questa funzione è disabilitata in Coppermine perché è integrata con il software del forum. Ciò che stai cercando di fare non è supportato in questa configurazione, oppure questa funzione dovrebbe essere gestita dal software del forum.');
define('MEMBERS_ONLY', 'Questa funzione è solo per utenti registrati, registrati.');
define('MUSTBE_GOD', 'Questa funzione è solo per per l\'Amministratore. Devi entrare come superadmin o come god per accedere a questa funzione');
define('NO_IMG_TO_APPROVE', 'No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE', 'Vai alla lista degli album');
define('ALB_LIST_LNK', 'Lista album');
define('MY_GAL_TITLE', 'Vai alla galleria personale');
define('MY_GAL_LNK', 'Galleria personale');
define('MY_PROF_LNK', 'Il mio profilo');
define('MY_PROF_TITLE','Controlla la quota del disco e dei gruppis');
define('ADM_MODE_TITLE', 'Passa in modalità admin');
define('ADM_MODE_LNK', 'Modalità admin');
define('USR_MODE_TITLE', 'Passa in modalità utente');
define('USR_MODE_LNK', 'Modalità utente');
define('UPLOAD_PIC_TITLE', 'Aggiungi una immagine');
define('UPLOAD_PIC_LNK', 'Aggiungi immagine');
define('REGISTER_TITLE', 'Crea un account');
define('REGISTER_LNK', 'Registrati');
define('LOGIN_LNK', 'Entra');
define('LOGOUT_LNK', 'Esci');
define('LASTUP_LNK', 'Ultimi arrivi');
define('LASTUP_TITLE', 'Immagini inserite di recente');
define('LASTCOM_TITLE',  'Immagini ordinate per i loro ultimi commenti');
define('LASTCOM_LNK',  'Ultimi commenti');
define('TOPN_TITLE', 'Immagine visualizzate più volte');
define('TOPN_LNK', 'Le più viste');
define('TOPRATED_TITLE', 'Immagini maggiormente votate');
define('TOPRATED_LNK',  'Le più votate');
define('SEARCH_TITLE', 'Cerca nella Collezzione Fotografica');
define('SEARCH_LNK', 'Cerca');
define('FAV_TITLE', 'My Favorites');
define('FAV_LNK', 'I miei Preferiti');
define('HELP_TITLE', 'AIUTO');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Approva uploads');
define('CONFIG_LNK', 'Configura');
define('ALBUMS_LNK', 'Albums');
define('CATEGORIES_LNK', 'Categorie');
define('USERS_LNK', 'Utenti');
define('GROUPS_LNK', 'Gruppi');
define('COMMENTS_LNK', 'Commenti');
define('SEARCHNEW_LNK', 'Aggiungi immagini');
define('UTIL_LNK', 'Utilità');
define('BAN_LNK', 'Banna Utenti');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Crea/Ordina albums personali');
define('MODIFYALB_LNK', 'Modifica albums personali');
//define('MY_PROF_LNK', 'Il mio profilo');

// lang_cat_list
define('CATEGORY', 'Gallerie');
define('ALBUMS', 'Albums');
//define('PICTURES', 'Immagini');

// lang_album_list
define('ALBUM_ON_PAGE', '%d albums in %d pagine');
// lang_thumb_view
define('DATE', 'DATA');
define('NAME', 'NOME FILE');
define('TITLE', 'TITOLO');
define('SORT_DA', 'Ordina per data ascendente');
define('SORT_DD', 'Ordina per data discendente');
define('SORT_NA', 'Ordina per nome ascendente');
define('SORT_ND', 'Ordina per nome discendente');
define('SORT_TA', 'Ordina per titolo ascendente');
define('SORT_TD', 'Ordina per titolo discendente');
define('PIC_ON_PAGE', '%d immagini in %d pagine');
define('USER_ON_PAGE', '%d utenti in %d pagine');
define('SORT_RA', 'Ordina per punteggio ascendente');
define('SORT_RD', 'Ordina per punteggio discendente');
define('THUMB_RATING', 'PUNTEGGIO');
define('SORT_TITLE', 'Ordina immagini per:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Torna alle miniature');
define('PIC_INFO_TITLE', 'Mostra/Nascondi info immagine');
define('SLIDESHOW_TITLE', 'Slideshow');
define('SLIDESHOW_DISABLED', 'le e-cards sono disabilitate');
define('SLIDESHOW_DISABLED_MSG', 'Questa funzione è solo per utenti registrati, registrati.');
define('ECARD_TITLE', 'Invia questa immagine come e-card');
define('ECARD_DISABLED', 'e-cards disabilitate');
define('ECARD_DISABLED_MSG', 'Non puoi inviare ecards');
define('PREV_TITLE', 'Immagine precedente');
define('NEXT_TITLE', 'Immagine successiva');
define('PIC_POS', 'IMMAGINE %s/%s');
define('NO_MORE_IMAGES', 'Non ci sono altre immagini in questa galleria');
define('NO_LESS_IMAGES', 'Questa è la prima immagine della galleria');

// lang_rate_pic
define('RATE_THIS_PIC', 'Vota questa immagine');
define('NO_VOTES', '(Ancora nessun voto)');
define('RATING', '(media attuale : %s / 5 con %s voti)');
define('RUBBISH', 'Scadente');
define('POOR', 'Mediocre');
define('FAIR', 'Sufficiente');
define('GOOD', 'Buona');
define('EXCELLENT', 'Eccellente');
define('GREAT', 'Eccezionale');

// lang_cpg_die
//define('INFO', 'Information');
//define('ERROR', 'Error');
define('_CRITICAL_ERROR', 'Errore critico');
define('FILE', 'File: ');
define('LINE', 'Linea: ');

// lang_display_thumbnails
define('FILENAME', 'Nome del file : ');
define('FILESIZE', 'Dimensione file : ');
define('DIMENSIONS', 'Dimensioni : ');
define('DATE_ADDED', 'Aggiunta il : ');

// lang_get_pic_data
define('N_COMMENTS', '%s commenti');
define('N_VIEWS', '%s viste');
define('N_VOTES', '(%s voti)');


// lang_albmgr_php
define('ALB_NEED_NAME', 'Ogni album deve avere un nome!');
define('CONFIRM_MODIFS', 'Applico davvero le modifiche?');
define('NO_CHANGE', 'Non hai fatto alcuna modifica!');
define('NEW_ALBUM', 'Nuovo album');
define('CONFIRM_DELETE1', 'Cancello davvero questo album?');
define('CONFIRM_DELETE2', ' Tutte le immagini ed i commenti andranno persi!');
define('SELECT_FIRST', 'Prima scegli un album');
define('ALB_MRG', 'Manager Album');
define('MY_GALLERY', '* Galleria personale *');
define('NO_CATEGORY', '* Nessuna categoria *');
define('DELETE', 'Cancella');
define('NEW', 'Nuova');
define('APPLY_MODIFS', 'Applica le modifiche');
define('SELECT_CATEGORY', 'Seleziona categoria');

// lang_catmgr_php
define('MISS_PARAM', 'Parametri necessari per l\'operazione \'%s\' non forniti!');
define('UNKNOWN_CAT', 'La categoria scelta non è nel database');
define('USERGAL_CAT_RO', 'La categoria delle gallerie personali non può essere cancellata!');
define('MANAGE_CAT', 'Gestisci categorie');
define('CONFIRM_DELETE_CAT', 'Vuoi davvero cancellare questa categoria?');
//define('CATEGORY', 'Categoria');
define('OPERATIONS', 'Operazioni');
define('MOVE_INTO', 'Sposta in');
define('UPDATE_CREATE', 'Aggiorna/Crea categoria');
define('PARENT_CAT', 'Categoria superiore');
define('CAT_TITLE', ' Titolo categoria');
define('CAT_DESC', 'Descrizione categoria');

// lang_config_php
define('CONFIG_TITLE', 'Configurazione');
define('RESTORE_CFG', 'Ripristina impostazioni di default');
define('SAVE_CFG', 'Salva la nuova configurazione');
define('NOTES', 'Note');
//define('INFO', 'Informazione');
define('UPD_SUCCESS', 'Configurazione aggiornata');
define('RESTORE_SUCCESS', 'Configurazione di default ripristinata');
define('NAME_A', 'Nome ascendente');
define('NAME_D', 'Nome discendente');
define('TITLE_A', 'Titolo ascendente');
define('TITLE_D', 'Titolo discendente');
define('DATE_A', 'Data ascendente');
define('DATE_D', 'Data discendente');
define('RATING_A', 'Punteggio ascendente');
define('RATING_D', 'Punteggio discendente');
define('TH_ANY', 'Dimensione maggiore');
define('TH_HT', 'Altezza');
define('TH_WD', 'Larghezza');


// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Inserisci nome e commento');
define('COM_ADDED', 'Commento aggiunto');
define('ALB_NEED_TITLE', 'Inserisci il titolo dell\'album!');
define('NO_UDP_NEEDED', 'Non necessita di aggiornamenti.');
define('ALB_UPDATED', 'Album aggiornato');
define('UNKNOWN_ALBUM', 'Album inesistente o upload non consentito in questo album');
define('NO_PIC_UPLOADED', 'Nessuna immagine aggiunta!<br /><br />Controlla che il server permetta gli uploads...');
define('ERR_MKDIR', 'Impossibile creare la directory %s!');
define('DEST_DIR_RO', 'La directory di destinazione %s non è scrivibile!');
define('ERR_MOVE', 'Impossible spostare %s in %s!');
define('ERR_FSIZE_TOO_LARGE', 'La dimensione della immagine caricata è eccessiva (il massimo consentito è %s x %s)!');
define('ERR_IMGSIZE_TOO_LARGE', 'Il peso del file caricato è eccessivo (il massimo consentito è %s KB)!');
define('ERR_INVALID_IMG', 'Il file caricato non è una immagine supportata!');
define('ALLOWED_IMG_TYPES', 'Puoi caricare %s immagini.');
define('ERR_INSERT_PIC', 'La immagine \'%s\' non può essere inserita');
define('UPLOAD_SUCCESS', 'Immagine caricata con successo<br /><br />Sarà visibile dopo il vaglio di un amministratore.');
//define('INFO', 'Informazione');
define('ERR_COMMENT_EMPTY', 'Il commento è vuoto!');
define('ERR_INVALID_FEXT', 'Solo i files con le seguenti estensioni sono ammessi : <br /><br />%s.');
define('NO_FLOOD', 'Spiacenti, sei già autore del commento<br /><br />Modifica il commento se vuoi');
define('REDIRECT_MSG', 'Sei stato reindirizzato.<br /><br /><br />Clicca \'CONTINUA\' se la pagina non si ricarica automaticamente');
define('UPL_SUCCESS', 'Immagine aggiunta con successo');

// lang_delete_php
define('CAPTION', 'Descrizione');
define('FS_PIC', 'immagine full size');
define('DEL_SUCCESS', 'cancellata con successo');
define('NS_PIC', 'immagine normale');
define('ERR_DEL', 'non può essere cancellata');
define('THUMB_PIC', 'miniatura');
//define('COMMENT', 'commento');
define('IM_IN_ALB', 'immagine nell\'album');
define('ALB_DEL_SUCCESS', 'Album \'%s\' cancellato');
define('ALB_MGR', 'Album Manager');
define('ERR_INVALID_DATA', 'Dati non validi ricevuti in \'%s\'');
define('CREATE_ALB', 'Creazione album \'%s\'');
define('UPDATE_ALB', 'Aggiornamento album \'%s\' con titolo \'%s\' ed indice \'%s\'');
define('DEL_PIC', 'Cancella immagine');
define('DEL_ALB', 'Cancella album');
define('DEL_USER', 'Cancella utente');
//define('ERR_UNKNOWN_USER', 'Utente inesistente!');
define('COMMENT_DELETED', 'Commento cancellato con successo');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'Vuoi davvero cancellare questa immagine? \\nI commenti andranno persi.');
define('DEL_THIS_PIC', 'CANCELLA QUESTA IMMAGINE');
define('SIZE', '%s x %s pixels');
define('VIEWS', '%s volte');
define('SLIDESHOW', 'Slideshow');
define('STOP_SLIDESHOW', 'STOP SLIDESHOW');
define('VIEW_FS', 'Clicca per immagine full size');
define('EDIT_PIC', 'MODIFICA INFO IMMAGINE');

// lang_picinfo
define('PIC_INF_TITLE', 'Info immagine');
define('PIC_INF_FILENAME', 'Nome file');
define('ALBUM_NAME', 'Nome album');
define('PIC_INFO_RATING', 'Punteggio (%s voti)');
define('KEYWORDS', 'Keywords');
define('PIC_INF_FILE_SIZE', 'Peso file');
define('PIC_INF_DIMENSIONS', 'Dimensioni');
define('DISPLAYED', 'Mostrato');
define('CAMERA', 'Camera');
define('DATE_TAKEN', 'Data di scatto');
define('APERTURE', 'Apertura');
define('EXPOSURE_TIME', 'Esposizione');
define('FOCAL_LENGTH', 'Focale');
define('COMMENT', 'Commento');
define('ADDFAV', 'Aggiungi a "I miei Preferiti"');
define('ADDFAVPHRASE', 'Preferiti');
define('REMFAV', 'Rimuovi da \"I miei Preferiti\"');
define('IPTCTITLE', 'IPTC - Titolo');
define('IPTCCOPYRIGHT', 'IPTC - Copyright');
define('IPTCKEYWORDS', 'IPTC - Parole chiave');
define('IPTCCATEGORY', 'IPTC - Categoria');
define('IPTCSUBCATEGORIES', 'IPTC - Sotto Categorie');
define('BOOKMARK_PAGE', 'Memorizza collegamento');
define('REMOVEFAV', 'Rimosso dagli Album preferiti');
define('ADDEDTOFAV', 'Aggiunto agli Album preferiti');

// lang_display_comments
define('OK', 'OK');
define('COM_EDIT_TITLE', 'Modifica questo commento');
define('CONFIRM_DELETE_COM', 'Vuoi davvero cancellare questo commento?');
define('ADD_YOUR_COMMENT', 'Aggiungi il tuo commento');
define('COM_NAME', 'Nome');
//define('COMMENT', 'Commento');
define('YOUR_NAME', 'Anon');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Clicca l\'immagine per chiudere questa finestra');

// lang_ecard_php
define('E_TITLE', 'Invia una e-card');
define('INVALID_EMAIL', '<b>Attento</b> : email non valida!');
define('E_ECARD_TITLE', 'Una e-card da %s per te');
define('VIEW_ECARD', 'Se la cartolina virtuale non è visualizzata correttamente, clicca su questo link');
define('VIEW_MORE_PICS', 'Clicca su questo link per altre immagini!');
define('SEND_SUCCESS', 'Cartolina virtuale inviata con successo');
define('SEND_FAILED', 'Spiacenti ma il server non può inviare la tua e-card...');
define('FROM', 'Da');
define('_YOUR_NAME', 'Il tuo nome');
define('YOUR_EMAIL', 'La tua email');
define('TO', 'Per ');
define('RCPT_NAME', 'Nome destinatario');
define('RCPT_EMAIL', 'Email destinatario');
define('GREETINGS', 'Saluti');
define('MESSAGE', 'Messaggio');
define('ECARD_LINK_CORRUPT', 'Spiacente, ma le informazioni contenute nella cartolina virtuale sono state corrotte dal tuo programma di posta, per favore prova copiando il link nel tuo browser'); //NEW

// lang_editpics_php
define('PIC_INFO', 'Info immagine');
define('ALBUM', 'Album');
define('EDIT_TITLE', 'Titolo');
define('DESC', 'Descrizione');
//define('KEYWORDS', 'Keywords');
define('PIC_INFO_STR', '%sx%s - %sKB - %s viste - %s voti');
define('APPROVE', 'Approva immagine');
define('POSTPONE_APP', 'Rinvia approvazione');
//define('DEL_PIC', 'Cancella immagine');
define('READ_EXIF', 'Rileggi info EXIF');
define('RESET_VIEW_COUNT', 'Resetta contatore');
define('RESET_VOTES', 'Resetta voti');
define('DEL_COMM', 'Cancella commenti');
define('UPL_APPROVAL', 'Approvazione uploads');
define('EDIT_PICS', 'Modifica immagini');
define('SEE_NEXT', 'Immagini successive');
define('SEE_PREV', 'Immagini precedenti');
define('N_PIC', '%s immagini');
define('N_OF_PIC_TO_DISP', 'Numero di immagini da mostrare');
define('APPLY', 'Applica modifiche');

// lang_groupmgr_php
define('GROUP_NAME', 'Nome gruppo');
define('DISK_QUOTA', 'Quota disco');
define('CAN_RATE', 'Può votare le immagini');
define('CAN_SEND_ECARDS', 'Può inviare e-cards');
define('CAN_POST_COM', 'Può scrivere commenti');
define('CAN_UPLOAD', 'Può inserire immagini');
define('CAN_HAVE_GALLERY', 'Può avere galleria personale');
//define('APPLY', 'Applica modifiche');
define('CREATE_NEW_GROUP', 'Crea nuovo gruppo');
define('DEL_GROUPS', 'Cancella grouppi selezionati');
define('CONFIRM_DEL', 'Attento, gli utenti saranno trasferiti nel gruppo degli Utenti registrati\\n\\nVuoi proseguire?');
define('GROUP_TITLE', 'Gestisci gruppi utenti');
define('APPROVAL_1', 'Approvazione Pub. Upl.  (1)');
define('APPROVAL_2', 'Approvazione Priv. Upl.  (2)');
define('NOTE1', '<b>(1)</b> Gli uploads in un album pubblico necessitano dell\'approvazione');
define('NOTE2', '<b>(2)</b> Gli uploads in un album di un utente necessitano dell\'approvazione');
//define('NOTES', 'Note');

// lang_index_php
define('WELCOME', 'Benvenuto!');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'Vuoi davvero cancellare quest\'album? Tutte le immagini ed i commenti andranno persi.');
//define('DELETE', 'CANCELLA');
define('MODIFY', 'PROPRIETA\'');
//define('EDIT_PICS', 'MODIFICA IMMAGINI');

// lang_list_categories
define('HOME', _HOME);
define('STAT1', '<b>[pictures]</b> immagini :: <b>[albums]</b> albums :: <b>[cat]</b> categorie :: <b>[comments]</b> commenti :: viste <b>[views]</b> volte');
define('STAT2', '<b>[pictures]</b> immagini :: <b>[albums]</b> albums :: viste <b>[views]</b> volte');
define('XX_S_GALLERY', '%s\'s Galleria');
define('STAT3', '<b>[pictures]</b> immagini :: <b>[albums]</b> albums :: <b>[comments]</b> commenti :: viste <b>[views]</b> volte');

// lang_list_users
define('USER_LIST', 'Lista utenti');
define('NO_USER_GAL', 'Non ci sono gallerie utenti');
define('N_ALBUMS', '%s album');
define('N_PICS', '%s immagini');

// lang_list_albums
define('N_PICTURES', '%s immagini');
define('LAST_ADDED', ', ultimo arrivo del %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Aggiorna album %s');
define('GENERAL_SETTINGS', 'Impostazioni generali');
define('ALB_TITLE', 'Titolo album');
define('ALB_CAT', 'Categoria album');
define('ALB_DESC', 'Descrizione album');
define('ALB_THUMB', 'Miniatura album');
define('ALB_PERM', 'Permessi per questo album');
define('CAN_VIEW', 'Album visibile da');
define('MOD_CAN_UPLOAD', 'I visitatori possono aggiungere immagini');
define('CAN_POST_COMMENTS', 'I visitatori possono inserire commenti');
define('MOD_CAN_RATE', 'I visitatori possono votare le immagini');
define('USER_GAL', 'Galleria utente');
define('NO_CAT', '* Nessuna categoria *');
define('ALB_EMPTY', 'Album vuoto');
define('LAST_UPLOADED', 'Ultimo arrivo');
define('PUBLIC_ALB', 'Tutti (album pubblico)');
define('ME_ONLY', 'Solo per me');
define('OWNER_ONLY', 'Solo per il titolare (%s)');
define('GROUPP_ONLY', 'Membri del gruppo \'%s\' ');
define('ERR_NO_ALB_TO_MODIFY', 'Nessun album che tu possa modificare.');
define('UPDATE', 'Aggiorna album');

// lang_rate_pic_php
define('ALREADY_RATED', 'Spiacenti, hai già votato questa immagine');
define('RATE_OK', 'il tuo voto è stato accettato');

// lang_register_php
define('USERNAME', 'Nome Utente');
define('X_S_PROFILE', 'Profilo di %s');
define('GROUP', 'Gruppo');
define('DISK_USAGE', 'Utilizzo disco');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Revisiona commenti');
define('NO_COMMENT', 'Non ci sono commenti da revisionare');
define('N_COMM_DEL', '%s commenti cancellati');
define('N_COMM_DISP', 'Numero di commenti da mostrare');
define('R_SEE_PREV', 'Vedi precedente');
define('R_SEE_NEXT', 'Vedi successivo');
define('R_DEL_COMM', 'Cancella i commenti selezionati');

// lang_search_php
define('S_SEARCH', 'Cerca nella galleria');

// lang_search_new_php
define('PAGE_TITLE', 'Cerca nuove immagini');
define('SELECT_DIR', 'Seleziona percorso');
define('SELECT_DIR_MSG', 'Questa funzione consente di aggiungere immagini caricate sul tuo server via FTP<br /><br />Scegli il percorso dove sono state caricate le immagini');
define('NO_PIC_TO_ADD', 'Non ci sono immagini da aggiungere');
define('NEED_ONE_ALBUM', 'Hai bisogno almeno di un album per usare questa funzione');
define('WARNING', 'Attento');
define('CHANGE_PERM', 'lo script non può scrivere in questa directory, fai il chmod a 755 o 777 e riprova!');
define('TARGET_ALBUM', '<b>Metti le immagini di &quot;</b>%s<b>&quot; in </b>%s');
define('FOLDER', 'Cartella');
define('IMAGE', 'Immagine');
//define('ALBUM', 'Album');
define('RESULT', 'Risultato');
define('DIR_RO', 'Non scrivibile. ');
define('DIR_CANT_READ', 'Non leggibile. ');
define('INSERT', 'Aggiungo le nuove immagini alla galleria');
define('LIST_NEW_PIC', 'Lista delle nuove immagini');
define('INSERT_SELECTED', 'Inserisci le immagini selezionate');
define('NO_PIC_FOUND', 'Nessuna nuova immagine è stata trovata');
define('BE_PATIENT', 'Sii paziente, lo script necessita di tempo per aggiungere le immagini');
define('SN_NOTES', '<ul><li><b>OK</b> : immagine aggiunta con successo<li><b>DP</b> : immagine già presente nel database<li><b>PB</b> : immagine non aggiunta a causa della errata configurazione del server o del chmod delle cartelle<li>Se OK, DP, PB non appaiono clicca sulla immagine per vedere quale errore è stato causato dal PHP<li>Se il tuo browser va in timeout, premi il tasto Aggiorna</ul>');
define('SELECT_ALBUM', 'Seleziona album');
define('NO_ALBUM', 'Non hai selezionato nessun album, torna indietro e seleziona l\'album in cui inserire le immagini');

// lang_upload_php
define('UP_TITLE', 'Upload immagine');
define('MAX_FSIZE', 'La dimensione massima del file è %s KB');
//define('ALBUM', 'Album');
define('PICTURE', 'Immagine');
define('PIC_TITLE', 'Titolo immagine');
define('DESCRIPTION', 'Descrizione immagine');
define('UP_KEYWORDS', 'Keywords (separate da spazi)');
define('ERR_NO_ALB_UPLOADABLES', 'Spiacenti, in nessun album è consentito caricare immagini');

// lang_usermgr_php
define('U_TITLE', 'Gestione utenti');
//define('NAME_A', 'Nome ascendente');
//define('NAME_D', 'Nome discendente');
define('GROUP_A', 'Gruppo ascendente');
define('GROUP_D', 'Gruppo discendente');
define('REG_A', 'Data iscrizione ascendente');
define('REG_D', 'Data iscrizione discendente');
define('PIC_A', 'Numero immagini crescente');
define('PIC_D', 'Numero immagini decrescente');
define('DISKU_A', 'Utilizzo disco crescente');
define('DISKU_D', 'Utilizzo disco decrescente');
define('SORT_BY', 'Ordina utenti per');
define('ERR_NO_USERS', 'La tabella utenti è vuota!');
define('ERR_EDIT_SELF', 'Non puoi modificare il tuo profilo da qui, usa invece \"Il mio profilo\"');
define('EDIT', 'MODIFICA');
//define('DELETE', 'CANCELLA');
define('U_NAME', 'Nome utente');
//define('GROUP', 'Gruppo');
define('INACTIVE', 'Inattivo');
//define('OPERATIONS', 'Operazioni');
define('PICTURES', 'Immagini');
define('DISK_SPACE', 'Spazio usato / Quota');
define('REGISTERED_ON', 'Registrato il');
define('U_USER_ON_P_PAGES', '%d utenti in %d pagine');
define('USER_CONFIRM_DEL', 'Vuoi davvero cancellare questo utente? Tutte le sue immagini ed i suoi album andranno persi.');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'Utente selezionato inesistente!');
define('MODIFY_USER', 'Modifica utente');
//define('NOTES', 'Note');
define('NOTE_LIST', '<li>Se non vuoi cambiare la password attuale, lascia vuoto il campo \"password\"');
define('PASSWORD', 'Password');
define('USER_ACTIVE_CP', 'Utente attivo');
define('USER_GROUP_CP', 'Gruppo utente');
define('USER_EMAIL', 'Email');
define('USER_WEB_SITE', 'Sito web');
define('CREATE_NEW_USER', 'Crea nuovo utente');
define('USER_FROM', 'Dove vive');
define('USER_INTERESTS', 'Interessi');
define('USER_OCC', 'Occupazione');

// lang_util_php
define('UTIL_TITLE', 'Ridimensiona immagini');
define('WHAT_IT_DOES', 'Cosa fa');
define('WHAT_UPDATE_TITLES', 'Aggiorna titoli da nome file');
define('WHAT_DELETE_TITLE', 'Cancella titoli');
define('WHAT_REBUILD', 'Ricostruisce miniature ed immagini ridimensionate');
define('WHAT_DELETE_ORIGINALS', 'Cancella immagini originali e le sostituisce con versione ridimensionata');
define('U_FILE', 'File');
define('TITLE_SET_TO', 'titolo impostato a');
define('SUBMIT_FORM', 'esegui');
define('UPDATED_SUCCESFULLY', 'aggiornamento riuscito');
define('ERROR_CREATE', 'ERRORE creando');
define('CONTIN', 'Procedi con altre immagini');
define('MAIN_SUCCESS', 'Il file %s è stato impostato come immagine principale');
define('ERROR_RENAME', 'Errore rinominando %s in %s');
define('ERROR_NOT_FOUND', 'Il file %s non è stato trovato');
define('U_BACK', 'torna al menu principale');
define('THUMBS_WAIT', 'Aggiornamento miniature e/o immagini ridimensionate, attendi...');
define('THUMBS_CONTINUE_WAIT', 'Continua aggiornamento miniature e/o immagini ridimensionate...');
define('TITLES_WAIT', 'Aggiornamento titoli, attendi...');
define('DELETE_WAIT', 'Cancellazione titoli, attendi...');
define('REPLACE_WAIT', 'Cancellazione originali e sostituzione con immagini ridimensionate, attendi..');
define('INSTRUCTION', 'Istruzioni rapide');
define('INSTRUCTION_ACTION', 'Scegli azione');
define('INSTRUCTION_PARAMETER', 'Imposta parametri');
define('INSTRUCTION_ALBUM', 'Scegli album');
define('INSTRUCTION_PRESS', 'Premi [submit]%s');
define('U_UPDATE', 'Aggiorna miniature e/o immagini ridimensionate');
define('UPDATE_WHAT', 'Cosa aggiornare');
define('UPDATE_THUMB', 'Solo miniature');
define('UPDATE_PIC', 'Solo immagini ridimensionate');
define('UPDATE_BOTH', 'Sia le miniature che le immagini ridimensionate');
define('UPDATE_NUMBER', 'Numero di immagini elaborate per click');
define('UPDATE_OPTION', '(Prova ad impostare questa opzione ad un valore basso se hai problemi di timeout)');
define('FILENAME_TITLE', 'Nome File &rArr; Titolo Immagine');
define('FILENAME_HOW', 'Come modificare il nome file');
define('FILENAME_REMOVE', 'Rimuovi il .jpg finale e sostituisci _ (underscore) con spazi');
define('FILENAME_EURO', 'Cambia 2003_11_23_13_20_20.jpg in 23/11/2003 13:20');
define('FILENAME_US', 'Cambia 2003_11_23_13_20_20.jpg in 11/23/2003 13:20');
define('FILENAME_TIME', 'Cambia 2003_11_23_13_20_20.jpg in 13:20');
define('UT_DELETE', 'Cancella titoli immagini o immagini con dimensioni originali');
define('DELETE_TITLE', 'Cancella titoli immagini');
define('DELETE_ORIGINAL', 'Cancella le immagini originali');
define('DELETE_REPLACE', 'Cancella le immagini originali sostituendole con la versione ridimensionata');
//define('SELECT_ALBUM', 'Scegli album');

// lang_pagetitle_php
define('VIEWING', 'Mostro Immagine');
define('USR', '\'s Galleria immagini');
define('PHOTOGALLERY', 'Galleria immagini');
$lang_usermgr_php = array(
    'name_a' => 'Nome ascendente',
    'name_d' => 'Name descending',
    'group_a' => 'Gruppo ascendente',
    'group_d' => 'Gruppo descending',
    'reg_a' => 'Data di registrazione ascendente',
    'reg_d' => 'Data di registrazione discendente',
    'pic_a' => 'Contatore ascendente',
    'pic_d' => 'Contatore discendente',
    'disku_a' => 'Utilizzo del disco ascendente',
    'disku_d' => 'Utilizzo del disco discendente',
    );
$lang_byte_units = array('Bytes', 'KB', 'MB');
// Day of weeks and months
$lang_day_of_week = array('Dom','Lun','Mar','Mer','Gio','Ven','Sab',);
$lang_month = array('Gen','Feb','Mar','Apr','Mag','Giu','Lug','Ago','Set','Ott','Nov','Dic',);
$lang_meta_album_names = array(
	'random' => 'Immagini a caso',
    'lastup' => 'Ultime aggiunte',
    'lastupby' => 'Le mie ultime aggiunte', // new 1.2.2
    'lastalb' => 'Ultimi album aggiunti',
    'lastcom' => 'Ultimi commenti',
    'lastcomby' => 'I miei ultimi commenti', // new 1.2.2
    'topn' => 'Le più viste',
    'toprated' => 'Le più votate',
    'lasthits' => 'Le più viste',
    'search' => 'Risultati della ricerca',
    'favpics' => 'Immagini preferite' // changed in cpg1.2.0nuke
    );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array(
	'title' => 'Configurazione',
        'restore_cfg' => 'Ripristina impostazioni predefinite',
        'save_cfg' => 'Salva la nuova configurazione',
        'notes' => 'Note',
        'info' => 'Informazione',
        'upd_success' => 'Configurazione aggiornata',
        'restore_success' => 'Configurazione di default ripristinata',
        'name_a' => 'Nome ascendente',
        'name_d' => 'Nome discendente',
        'title_a' => 'Titolo ascendente',
        'title_d' => 'Titolo discendente',
        'date_a' => 'Data ascendente',
        'date_d' => 'Data discendente',
        'rating_a' => 'Punteggio ascendente', // new in cpg1.2.0nuke
        'rating_d' => 'Punteggio discendente', // new in cpg1.2.0nuke
        'th_any' => 'Dimensione maggiore',
        'th_ht' => 'Altezza',
        'th_wd' => 'Larghezza'
    );
// start left side interpretation
$lang_config_data = array(
// General settings
    'Impostazioni generali',
        array('Nome galleria', 'gallery_name', 0),
        array('Descrizione galleria', 'gallery_description', 0),
        array('Email amministratore', 'gallery_admin_email', 0),
        array('Indirizzo della directory nuke, cioè http://example.com/html', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
        array('Tema', 'theme', 6),
    array('Titolo Pagina Specifivo invece di >Coppermine', 'nice_titles', 1),
// Album list view
    'Vista lista album',
        array('Larghezza tabella principale (pixels o %)', 'main_table_width', 0),
        array('Numero di livelli delle categorie da mostrare', 'subcat_level', 0),
        array('Numero di albums da mostrare', 'albums_per_page', 0),
        array('Numero di colonne della lista album', 'album_list_cols', 0),
        array('Dimensione miniature in pixels', 'alb_list_thumb_size', 0),
        array('Contenuto della pagina principale', 'main_page_layout', 0),
        array('Mostra miniature per primo livello album nelle categorie', 'first_level', 1),
// Thumbnail view
        'Vista miniature',
        array('Numero di colonne nella pagina delle miniature', 'thumbcols', 0),
        array('Numero di righe nella pagina delle miniature', 'thumbrows', 0),
        array('Massimo numero di tabs da mostrare', 'max_tabs', 0),
        array('Mostra descrizione (in aggiunta al titolo) sotto la miniatura', 'caption_in_thumbview', 1),
        array('Mostra numero di commenti sotto la miniatura', 'display_comment_count', 1),
        array('Criterio di default per ordinare le immagini', 'default_sort_order', 3),
        array('Minimo numero di voti affinchè una immagine entri nella lista delle \'più votate\'', 'min_votes_for_rating', 0),
        array('Usa titolo e parole chiave anzichè picinfo come tag alt e title', 'seo_alts', 1), // new in cpg1.2.0nuke
// Display Image & Comment settings
        'Vista immagine &amp; Impostazioni commenti',
        array('Larghezza della tabella mostra immagine (pixels o %)', 'picture_table_width', 0),
        array('Info immagini visibili di default', 'display_pic_info', 1),
        array('Filtra parolacce nei commenti', 'filter_bad_words', 1),
        array('Consenti smiles nei commenti', 'enable_smilies', 1),
        array('Consenti più commenti consecutivi su un\'immagine dallo stesso utente', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
        array('Invia una Email all\'amministratore quando vengono inseriti dei commenti' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
        array('Lunghezza massima descrizione', 'max_img_desc_length', 0),
        array('Max numero di caratteri in una parola', 'max_com_wlength', 0),
        array('Max numero di linee in un commento', 'max_com_lines', 0),
        array('Lunghezza massima del commento', 'max_com_size', 0),
        array('Mostra film strip', 'display_film_strip', 1),
        array('Numero di miniature nella film strip', 'max_film_strip_items', 0),
        array('Consenti agli anonimi di vedere le immagini in dimensione originale', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke		
    array('Numero di giorni per poter votare la stessa immagine','keep_votes_time',0), // new in cpg1.2.2c nuke
    array('Mostra immagini a schermo intero durante lo slideshow','fullsize_slideshow',1),
    array('Mostra blocchi a destra dell\'immagine mostrata se i blocchi di destra sono attivati nel modulo?', 'right_blocks', 1), // new 1.2.2
// Pictures and thumbnails settings
        'Impostazioni immagini e miniature',
    array('Qualità  files JPEG', 'jpeg_qual', 0),
    array('Metti marchi ad acqua sull\'immagine', 'watermark', 1),
        array('Max dimensione delle miniature <b>*</b>', 'thumb_width', 0),
        array('Usa dimensione (larghezza, altezza o aspetto Max per miniature e immagini intermedie)<b>*</b>', 'thumb_use', 7),
        array('Crea immagini intermedie', 'make_intermediate', 1),
        array('Max larghezza o altezza delle immagini intermedie <b>*</b>', 'picture_width', 0),
        array('Peso massimo dei files (KB)', 'max_upl_size', 0),
        array('Max larghezza o altezza delle immagini caricate (pixels)', 'max_upl_width_height', 0),
    array('Rendi possibile caricare più file con lo stesso nome', 'samename', 1), 
// User settings
        'Impostazioni utenti',
    array('Allow new user registrations', 'allow_user_registration', 1),
/*
    array('User registration requires email verification', 'reg_requires_valid_email', 1),
    array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),
*/
    array('Utenti possono avere album privati', 'allow_private_albums', 1),
    array('Mostra avatar utente invece dell\'immagine album privati', 'avatar_private_album', 1),
// Custom fields for image description
        'Campi personalizzati per le descrizioni (lascia vuoti se inutilizzati)',
        array('Nome campo 1', 'user_field1_name', 0),
        array('Nome campo 2', 'user_field2_name', 0),
        array('Nome campo 3', 'user_field3_name', 0),
        array('Nome campo 4', 'user_field4_name', 0),
// Pictures and thumbnails advanced settings
        'Impostazioni avanzate immagini e miniature',
        array('Mostra Icona album privati ad utenti non connessi', 'show_private', 1),
        array('Caratteri proibiti nei nomi dei files', 'forbiden_fname_char', 0),
        array('Estensioni consentite per le immagini ', 'allowed_file_extensions', 0),
        array('Metodo ridimensionamento immagini', 'thumb_method', 2),
        array('Percorso per ImageMagick / netpbm (esempio /usr/bin/X11/)', 'impath', 0),
        array('Tipi di immagine consentiti (solo per ImageMagick)', 'allowed_img_types', 0),
        array('Opzioni per ImageMagick', 'im_options', 0),
        array('Leggi dati EXIF nei files JPEG', 'read_exif_data', 1),
        array('Leggi dati IPTC nei files JPEG', 'read_iptc_data', 1), // new in cpg1.2.0nuke
        array('Directory degli album <b>*</b>', 'fullpath', 0),
        array('Directory immagini utenti <b>*</b>', 'userpics', 0),
        array('Prefisso delle immagini intermedie <b>*</b>', 'normal_pfx', 0),
        array('Prefisso delle miniature <b>*</b>', 'thumb_pfx', 0),
        array('Picinfo mostra nome file', 'picinfo_display_filename', '1'), // new in cpg1.2.0nuke
        array('Picinfo mostra nome album', 'picinfo_display_album_name', '1'), // new in cpg1.2.0nuke
        array('Picinfo mostra dimensione file', 'picinfo_display_file_size', '1'), // new in cpg1.2.0nuke
        array('Picinfo mostra dimensioni immagine', 'picinfo_display_dimensions', '1'), // new in cpg1.2.0nuke
        array('Picinfo mostra contatore visualizzazioni', 'picinfo_display_count_displayed', '1'), // new in cpg1.2.0nuke
        array('Picinfo mostra URL', 'picinfo_display_URL', '1'), // new in cpg1.2.0nuke
        array('Picinfo mostra URL come memorizza collegamento', 'picinfo_display_URL_bookmark', '1'), // new in cpg1.2.0nuke
        array('Picinfo mostra collegamento a preferiti', 'picinfo_display_favorites', '1'), // new in cpg1.2.0nuke
// Cookies & Charset settings
        'Cookies &amp; Impostazioni caratteri',
        array('Nome del cookie usato dallo script', 'cookie_name', 0),
        array('Percorso del cookie usato dallo script', 'cookie_path', 0),
//'Miscellaneous settings',
         'Impostazioni varie',
        array('Attiva modalità  debug', 'debug_mode', 1),
        '<br /><div align="center">(*) I campi con * non devono essere modificati se già  vi sono immagini nella galleria</div><br />'
        );
// end left side interpretation
