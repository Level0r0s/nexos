<?
/****************************************************************************/
/* Coppermine Photo Gallery 1.2.3 for CMS                                   */
/****************************************************************************/
/****************************************************************************/
/* Port Copyright (C) 2004 Coppermine for CMS Dev Team  		              */
/* http://coppermine.findhere.org/                                          */
/****************************************************************************/
/* Updated by the Coppermine Dev Team  2003                                 */
/* (http://coppermine.sf.net/team/)                                         */
/* see /docs/credits.html for details                                       */
/****************************************************************************/
/* Copyright (C) 2002,2003  Gregory DEMAR <gdemar@wanadoo.fr>               */
/* http://www.chezgreg.net/coppermine/                                      */
/* This program is free software; you can redistribute it and/or modify     */
/* it under the terms of the GNU General Public License as published by     */
/* the Free Software Foundation; either version 2 of the License, or        */
/* (at your option) any later version.                                      */
/*****************************************************************************/
/*   $Id: lang-italian.php,v 1.1 2004/07/28 01:36:54 akamu Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Italian');
define('LANG_NAME_NATIVE', 'Italiano');
define('LANG_COUNTRY_CODE', 'it');
define('TRANS_NAME', 'ralf57');
define('TRANS_EMAIL', '(CPG 1.1) greatkingrat@katamail.com');
define('TRANS_WEBSITE', 'http://www.madeinbanzi.it/');
define('TRANS_NAME2', '(CPG 1.2) Sesto Avolio');
define('TRANS_EMAIL2', 'webmaster@eolica.net');
define('TRANS_WEBSITE2', 'http://www.eolica.net/');
define('TRANS_DATE', '2003-11-05');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'iso-8859-1');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'Si');
define('NO', 'No');

// some common strings
define('BACK', 'INDIETRO');
define('CONTINUE', 'CONTINUA');
define('INFO', 'Informazione');
define('ERROR', 'Errore');

//// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
define('ALBUM_DATE_FMT', '%d %B %Y');
define('LASTCOM_DATE_FMT', '%d/%m/%y alle %H:%M');
define('LASTUP_DATE_FMT', '%d %B %Y');
define('REGISTER_DATE_FMT', '%d %B %Y');
define('LASTHIT_DATE_FMT', '%d %B %Y alle %I:%M %p');
define('COMMENT_DATE_FMT', '%d %B %Y alle %I:%M %p');

// short names for Byte, Kilo, Mega
$lang_byte_units = array('Bytes','KB','MB',);

// Day of week
$lang_day_of_week = array('Dom','Lun','Mar','Mer','Gio','Ven','Sab',);
// Day of the month
$lang_month = array('Gen','Feb','Mar','Apr','Mag','Giu','Lug','Ago','Set','Ott','Nov','Dic',);
// For the word censor
$lang_bad_words = array('*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*',);
// lang_meta_album_names
define('RANDOM', 'Immagini...a casaccio');
define('LASTUP', 'Ultimi arrivi');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Ultimi aggiornamenti albums');
define('LASTCOM', 'Ultimi commenti');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Le più viste');
define('TOPRATED', 'Le più votate');
define('LASTHITS', 'Viste di recente');
define('SEARCH', 'Risultati della ricerca');
define('FAVPICS', 'Immagini Preferite');

// lang_errors
define('ACCESS_DENIED', 'Non puoi accedere a questa pagina.');
define('PERM_DENIED', 'Non puoi effettuare questa operazione.');
define('PARAM_MISSING', 'Script eseguito senza i parametri richiesti.');
define('NON_EXIST_AP', 'Immagine/album selezionato non presente nel database !');
define('QUOTA_EXCEEDED', 'Quota disco superata<br /><br />Hai a disposizione [quota]K, attualmente utilizzi [space]K, una ulteriore immagine farebbe superare la quota.');
define('GD_FILE_TYPE_ERR', 'Le librerie GD supportano solo i formati JPEG and PNG.');
define('INVALID_IMAGE', 'Immagine corrotta o non supportata dalla libreria GD');
define('RESIZE_FAILED', 'Non posso creare le miniature e le immagini intermedie.');
define('NO_IMG_TO_DISPLAY', 'Nessuna immagine disponibile');
define('NON_EXIST_CAT', 'La categoria selezionata non esiste');
define('ORPHAN_CAT', 'Una categoria non è legata, correggi il problema col Manager Categorie.');
define('DIRECTORY_RO', 'La directory \'%s\' è protetta in scrittura, le immagini non possono essere cancellate');
define('NON_EXIST_COMMENT', 'Il commento selezionato non esiste.');
define('PIC_IN_INVALID_ALBUM', 'Immagine appartenente ad un album inesistente (%s)!?');
define('BANNED', 'Sei stato bannato e non puoi usare questo sito.');
define('NOT_WITH_UDB', 'Questa funzione è disabilitata in Coppermine perché è integrata con il software del forum. Ciò che stai cercando di fare non è supportato in questa configurazione, oppure questa funzione dovrebbe essere gestita dal software del forum.');
define('MEMBERS_ONLY', 'Questa funzione è solo per utenti registrati, registrati.');
define('MUSTBE_GOD', 'Questa funzione è solo per per l\'Amministratore. Devi entrar come superadmin, account god per accedere a questa funzione');

// lang_main_menu
define('ALB_LIST_TITLE', 'Vai alla lista degli album');
define('ALB_LIST_LNK', 'Lista album');
define('MY_GAL_TITLE', 'Vai alla galleria personale');
define('MY_GAL_LNK', 'Galleria personale');
define('MY_PROF_LNK', 'Il mio profilo');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Passa in modalità admin');
define('ADM_MODE_LNK', 'Modalità admin');
define('USR_MODE_TITLE', 'Passa in modalità utente');
define('USR_MODE_LNK', 'Modalità utente');
define('UPLOAD_PIC_TITLE', 'Aggiungi una immagine');
define('UPLOAD_PIC_LNK', 'Aggiungi immagine');
define('REGISTER_TITLE', 'Crea un account');
define('REGISTER_LNK', 'Registrati');
define('LOGIN_LNK', 'Login');
define('LOGOUT_LNK', 'Logout');
define('LASTUP_LNK', 'Ultimi arrivi');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Ultimi commenti');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Le più viste');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Le più votate');
define('SEARCH_LNK', 'Cerca');
define('FAV_LNK', 'I miei Preferiti');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

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
define('ALBMGR_LNK', 'Crea / ordina albums personali');
define('MODIFYALB_LNK', 'Modifica albums personali');
define('MY_PROF_LNK', 'Il mio profilo');

// lang_cat_list
define('CATEGORY', 'Gallerie');
define('ALBUMS', 'Albums');
define('PICTURES', 'Immagini');

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
define('RATING', 'PUNTEGGIO');
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
define('GREAT', 'Grande');

// lang_cpg_die
define('INFORMATION', 'Informazione');
define('ERROR', 'Errore');
define('CRITICAL_ERROR', 'Errore critico');
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

// lang_smilies_inc_php
define('EXCLAMATION', 'Esclamazione');
define('QUESTION', 'Dubbio');
define('VERY HAPPY', 'Molto felice');
define('SMILE', 'Sorriso');
define('SAD', 'Triste');
define('SURPRISED', 'Sorpresa');
define('SHOCKED', 'Shockato');
define('CONFUSED', 'Confuso');
define('COOL', 'Figo');
define('LAUGHING', 'Sorridente');
define('MAD', 'Matto');
define('RAZZ', 'Razz');
define('EMBARASSED', 'Imbarazzato');
define('CRYING OR VERY SAD', 'Molto triste');
define('EVIL OR VERY MAD', 'Cattivo');
define('TWISTED EVIL', 'Molto cattivo');
define('ROLLING EYES', 'Occhi fuori orbita');
define('WINK', 'Wink');
define('IDEA', 'Idea');
define('ARROW', 'Freccia');
define('NEUTRAL', 'Neutro');
define('MR. GREEN', 'Mr. Green');

// lang_admin_php
define('LV_ADMIN', 'Lascio la modalità admin...');
define('ENT_ADMIN', 'Entro in modalità admin...');

// lang_albmgr_php
define('ALB_NEED_NAME', 'Ogni album deve avere un nome !');
define('CONFIRM_MODIFS', 'Applico davvero le modifiche?');
define('NO_CHANGE', 'Non hai fatto alcuna modifica !');
define('NEW_ALBUM', 'Nuovo album');
define('CONFIRM_DELETE1', 'Cancello davvero questo album ?');
define('CONFIRM_DELETE2', '\\nTutte le immagini ed i commenti andranno persi !');
define('SELECT_FIRST', 'Prima scegli un album');
define('ALB_MRG', 'Album Manager');
define('MY_GALLERY', '* Galleria personale *');
define('NO_CATEGORY', '* Nessuna categoria *');
define('DELETE', 'Cancella');
define('NEW', 'Nuova');
define('APPLY_MODIFS', 'Applica le modifiche');
define('SELECT_CATEGORY', 'Seleziona categoria');

// lang_catmgr_php
define('MISS_PARAM', 'Parametri necessari per \'%s\'operazione non forniti !');
define('UNKNOWN_CAT', 'La categoria scelta non è nel database');
define('USERGAL_CAT_RO', 'La categoria delle gallerie personali non può essere cancellata !');
define('MANAGE_CAT', 'Gestisci categorie');
define('CONFIRM_DELETE', 'Vuoi davvero cancellare questa categoria?');
define('CATEGORY', 'Categoria');
define('OPERATIONS', 'Operazioni');
define('MOVE_INTO', 'Sposta in');
define('UPDATE_CREATE', 'Aggiorna/Crea categoria');
define('PARENT_CAT', 'Categoria superiore');
define('CAT_TITLE', ' Titolo categoria');
define('CAT_DESC', 'Descrizione categoria');

// lang_config_php
define('TITLE', 'Configurazione');
define('RESTORE_CFG', 'Ripristina impostazioni di default');
define('SAVE_CFG', 'Salva la nuova configurazione');
define('NOTES', 'Note');
define('INFO', 'Informazione');
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

// lang_config_data
define('CONFIG_GENSET', 'Impostazioni generali');
define('GALLERY_NAME', 'Nome galleria');
define('GALLERY_DESCRIPTION', 'Descrizione galleria');
define('GALLERY_ADMIN_EMAIL', 'Email amministratore');
define('ECARDS_MORE_PIC_TARGET', 'Indirizzo della directory nuke, cioè http://www.mysite.tld/html');
define('LANG', 'Lingua');
define('CPGTHEME', 'Tema');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'Vista lista album');
define('MAIN_TABLE_WIDTH', 'Larghezza tabella principale (pixels o %)');
define('SUBCAT_LEVEL', 'Numero di livelli delle categorie da mostrare');
define('ALBUMS_PER_PAGE', 'Numero di albums da mostrare');
define('ALBUM_LIST_COLS', 'Numero di colonne della lista album');
define('ALB_LIST_THUMB_SIZE', 'Dimensione miniature in pixels');
define('MAIN_PAGE_LAYOUT', 'Contenuto della pagina principale');
define('FIRST_LEVEL', 'Mostra miniature per primo livello album nelle categorie');
define('THUMB_VIEW_TITLE', 'Vista miniature');
define('THUMBCOLS', 'Numero di colonne nella pagina delle miniature');
define('THUMBROWS', 'Numero di righe nella pagina delle miniature');
define('MAX_TABS', 'Massimo numero di tabs da mostrare');
define('CAPTION_IN_THUMBVIEW', 'Mostra descrizione (in aggiunta al titolo) sotto la miniatura');
define('DISPLAY_COMMENT_COUNT', 'Mostra numero di commenti sotto la miniatura');
define('DEFAULT_SORT_ORDER', 'Criterio di default per ordinare le immagini');
define('MIN_VOTES_FOR_RATING', 'Minimo numero di voti affinchè una immagine entri nella lista delle \'più votate\'');
define('SEO_ALTS', 'Usa titolo e parole chiave anzichè picinfo come tag alt e title');
define('IMAGE_COMMENT_VIEW_TITLE', 'Vista immagine &amp; Impostazioni commenti');
define('PICTURE_TABLE_WIDTH', 'Larghezza della tabella mostra immagine (pixels o %)');
define('DISPLAY_PIC_INFO', 'Info immagini visibili di default');
define('FILTER_BAD_WORDS', 'Filtra parolacce nei commenti');
define('ENABLE_SMILIES', 'Consenti smiles nei commenti');
define('DISABLE_FLOOD_PROTECTION', 'Consenti più commenti consecutivi su un\'immagine dallo stesso utente');
define('COMMENT_EMAIL_NOTIFICATION', 'Invia una Email all\'amministratore quando vengono inseriti dei commenti');
define('MAX_IMG_DESC_LENGTH', 'Lunghezza massima descrizione');
define('MAX_COM_WLENGTH', 'Max numero di caratteri in una parola');
define('MAX_COM_LINES', 'Max numero di linee in un commento');
define('MAX_COM_SIZE', 'Lunghezza massima del commento');
define('DISPLAY_FILM_STRIP', 'Mostra film strip');
define('MAX_FILM_STRIP_ITEMS', 'Numero di miniature nella film strip');
define('ALLOW_ANON_FULLSIZE', 'Consenti agli anonimi di vedere le immagini in dimensione originale');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', 'Impostazioni immagini e miniature');
define('JPEG_QUAL', 'Qualità files JPEG');
define('THUMB_WIDTH', 'Max dimensione delle miniature <b>*</b>');
define('THUMB_USE', 'Usa dimensione ( larghezza o altezza o aspetto Max per miniature e immagini intermedie)<b>*</b>');
define('MAKE_INTERMEDIATE', 'Crea immagini intermedie');
define('PICTURE_WIDTH', 'Max larghezza o altezza delle immagini intermedie <b>*</b>');
define('MAX_UPL_SIZE', 'Peso massimo dei files (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Max larghezza o altezza delle immagini caricate (pixels)');
define('USER_SETTING_TITLE', 'Impostazioni utenti');
define('ALLOW_USER_REGISTRATION', 'Consenti nuove registrazioni');
define('REG_REQUIRES_VALID_EMAIL', 'Verifica tramite e-mail richiesta');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Consenti due utenti con la stessa email');
define('ALLOW_PRIVATE_ALBUMS', 'Utenti possono avere album privati');
define('CUSTOM_FIELDS_TITLE', 'Campi personalizzati per le descrizioni (lascia vuoti se inutilizzati)');
define('USER_FIELD1_NAME', 'Nome campo 1');
define('USER_FIELD2_NAME', 'Nome campo 2');
define('USER_FIELD3_NAME', 'Nome campo 3');
define('USER_FIELD4_NAME', 'Nome campo 4');
define('PIC_ADV_SETTING_TITLE', 'Impostazioni avanzate immagini e miniature');
define('SHOW_PRIVATE', 'Mostra Icona album privati ad utenti non connessi');
define('FORBIDEN_FNAME_CHAR', 'Caratteri proibiti nei nomi dei files');
define('ALLOWED_FILE_EXTENSIONS', 'Estensioni consentite per le immagini ');
define('THUMB_METHOD', 'Metodo ridimensionamento immagini');
define('IMPATH', 'Percorso per ImageMagick (esempio /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Tipi di immagine consentiti (solo per ImageMagick)');
define('IM_OPTIONS', 'Opzioni per ImageMagick');
define('READ_EXIF_DATA', 'Leggi dati EXIF nei files JPEG');
define('READ_IPTC_DATA', 'Leggi dati IPTC nei files JPEG');
define('FULLPATH', 'Directory degli album <b>*</b>');
define('USERPICS', 'Directory immagini utenti <b>*</b>');
define('NORMAL_PFX', 'Prefisso delle immagini intermedie <b>*</b>');
define('THUMB_PFX', 'Prefisso delle miniature <b>*</b>');
define('DEFAULT_DIR_MODE', 'Chmod di default per le directories');
define('DEFAULT_FILE_MODE', 'Chmod di default per le immagini');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo mostra nome file');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo mostra nome album');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo mostra dimensione file');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo mostra dimensioni immagine');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo mostra contatore visualizzazioni');
define('PICINFO_DISPLAY_URL', 'Picinfo mostra URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo mostra URL come memorizza collegamento');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo mostra collegamento a preferiti');
define('COOKIE_SETTING_TITLE', 'Cookies &amp; Impostazioni caratteri');
define('COOKIE_NAME', 'Nome del cookie usato dallo script');
define('COOKIE_PATH', 'Percorso del cookie usato dallo script');
define('CHAR_SET', 'Codifica carattere');
define('MISC_SETTING_TITLE', 'Impostazioni varie');
define('DEBUG_MODE', 'Attiva modalità debug');
define('ADVANCED_DEBUG_MODE', 'Attiva modalità debug avanzato');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) I campi con * non devono essere modificati se già vi sono immagini nella galleria</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Inserisci nome e commento');
define('COM_ADDED', 'Commento aggiunto');
define('ALB_NEED_TITLE', 'Inserisci il titolo dell\'album !');
define('NO_UDP_NEEDED', 'Non necessita di aggiornamenti.');
define('ALB_UPDATED', 'Album aggiornato');
define('UNKNOWN_ALBUM', 'Album inesistente o upload non consentito in questo album');
define('NO_PIC_UPLOADED', 'Nessuna immagine aggiunta !<br /><br />Controlla che il server permetta gli uploads...');
define('ERR_MKDIR', 'Impossibile creare la directory %s !');
define('DEST_DIR_RO', 'La directory di destinazione %s non è scrivibile !');
define('ERR_MOVE', 'Impossible spostare %s in %s !');
define('ERR_FSIZE_TOO_LARGE', 'La dimensione della immagine caricata è eccessiva (il massimo consentito è %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Il peso del file caricato è eccessivo (il massimo consentito è %s KB) !');
define('ERR_INVALID_IMG', 'Il file caricato non è una immagine supportata !');
define('ALLOWED_IMG_TYPES', 'Puoi caricare %s immagini.');
define('ERR_INSERT_PIC', 'La immagine \'%s\' non può essere inserita');
define('UPLOAD_SUCCESS', 'Immagine caricata con successo<br /><br />Sarà visibile dopo il vaglio di un amministratore.');
define('INFO', 'Informazione');
define('ERR_COMMENT_EMPTY', 'Il commento è vuoto !');
define('ERR_INVALID_FEXT', 'Solo i files con le seguenti estensioni sono ammessi : <br /><br />%s.');
define('NO_FLOOD', 'Spiacenti, sei già autore del commento<br /><br />Edita il commento se vuoi');
define('REDIRECT_MSG', 'Sei stato reindirizzato.<br /><br /><br />Clicca \'CONTINUA\' se la pagina non si ricarica automaticamente');
define('UPL_SUCCESS', 'Immagine aggiunta con successo');

// lang_delete_php
define('CAPTION', 'Descrizione');
define('FS_PIC', 'immagine full size');
define('DEL_SUCCESS', 'cancellata con successo');
define('NS_PIC', 'immagine normale');
define('ERR_DEL', 'non può essere cancellata');
define('THUMB_PIC', 'miniatura');
define('COMMENT', 'commento');
define('IM_IN_ALB', 'immagine nell\'album');
define('ALB_DEL_SUCCESS', 'Album \'%s\' cancellato');
define('ALB_MGR', 'Album Manager');
define('ERR_INVALID_DATA', 'Dati non validi ricevuti in \'%s\'');
define('CREATE_ALB', 'Creazione album \'%s\'');
define('UPDATE_ALB', 'Aggiornamento album \'%s\' con titolo \'%s\' ed indice \'%s\'');
define('DEL_PIC', 'Cancella immagine');
define('DEL_ALB', 'Cancella album');
define('DEL_USER', 'Cancella utente');
define('ERR_UNKNOWN_USER', 'Utente inesistente !');
define('COMMENT_DELETED', 'Commento cancellato con successo');

// lang_display_image_php
define('CONFIRM_DEL', 'Vuoi davvero cancellare questa immagine? \\nI commenti andranno persi.');
define('DEL_PIC', 'CANCELLA QUESTA IMMAGINE');
define('SIZE', '%s x %s pixels');
define('VIEWS', '%s volte');
define('SLIDESHOW', 'Slideshow');
define('STOP_SLIDESHOW', 'STOP SLIDESHOW');
define('VIEW_FS', 'Clicca per immagine full size');
define('EDIT_PIC', 'EDITA INFO IMMAGINE');

// lang_picinfo
define('TITLE', 'Info immagine');
define('FILENAME', 'Nome file');
define('ALBUM NAME', 'Nome album');
define('RATING', 'Punteggio (%s voti)');
define('KEYWORDS', 'Keywords');
define('FILE SIZE', 'Peso file');
define('DIMENSIONS', 'Dimensioni');
define('DISPLAYED', 'Mostrato');
define('CAMERA', 'Camera');
define('DATE TAKEN', 'Data di scatto');
define('APERTURE', 'Apertura');
define('EXPOSURE TIME', 'Esposizione');
define('FOCAL LENGTH', 'Focale');
define('COMMENT', 'Commento');
define('ADDFAV', 'Aggiungi a \"I miei Preferiti\"');
define('ADDFAVPHRASE', 'Preferiti');
define('REMFAV', 'Rimuovi da \"I miei Preferiti\"');
define('IPTCTITLE', 'IPTC - Titolo');
define('IPTCCOPYRIGHT', 'IPTC - Copyright');
define('IPTCKEYWORDS', 'IPTC - Parole chiave');
define('IPTCCATEGORY', 'IPTC - Categoria');
define('IPTCSUBCATEGORIES', 'IPTC - Sub Categorie');
define('BOOKMARK_PAGE', 'Memorizza collegamento');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'Edita questo commento');
define('CONFIRM_DELETE', 'Vuoi davvero cancellare questo commento?');
define('ADD_YOUR_COMMENT', 'Aggiungi il tuo commento');
define('NAME', 'Nome');
define('COMMENT', 'Commento');
define('YOUR_NAME', 'Anon');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Clicca l\'immagine per chiudere questa finestra');

// lang_ecard_php
define('TITLE', 'Invia una e-card');
define('INVALID_EMAIL', '<b>Attento</b> : email non valida !');
define('ECARD_TITLE', 'Una e-card da %s per te');
define('VIEW_ECARD', 'Se la e-card non è visualizzata correttamente, clicca su questo link');
define('VIEW_MORE_PICS', 'Clicca su questo link per altre immagini !');
define('SEND_SUCCESS', 'E-card inviata con successo');
define('SEND_FAILED', 'Spiacenti ma il server non può inviare la tua e-card...');
define('FROM', 'Da');
define('YOUR_NAME', 'Il tuo nome');
define('YOUR_EMAIL', 'La tua email');
define('TO', 'Per ');
define('RCPT_NAME', 'Nome destinatario');
define('RCPT_EMAIL', 'Email destinatario');
define('GREETINGS', 'Saluti');
define('MESSAGE', 'Messaggio');

// lang_editpics_php
define('PIC_INFO', 'Info immagine');
define('ALBUM', 'Album');
define('TITLE', 'Titolo');
define('DESC', 'Descrizione');
define('KEYWORDS', 'Keywords');
define('PIC_INFO_STR', '%sx%s - %sKB - %s viste - %s voti');
define('APPROVE', 'Approva immagine');
define('POSTPONE_APP', 'Rinvia approvazione');
define('DEL_PIC', 'Cancella immagine');
define('READ_EXIF', 'Rileggi info EXIF');
define('RESET_VIEW_COUNT', 'Resetta contatore');
define('RESET_VOTES', 'Resetta voti');
define('DEL_COMM', 'Cancella commenti');
define('UPL_APPROVAL', 'Approvazione uploads');
define('EDIT_PICS', 'Edita immagini');
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
define('APPLY', 'Applica modifiche');
define('CREATE_NEW_GROUP', 'Crea nuovo gruppo');
define('DEL_GROUPS', 'Cancella grouppi selezionati');
define('CONFIRM_DEL', 'Attento, gli utenti saranno trasferiti nel gruppo degli Utenti registrati - Vuoi proseguire?');
define('TITLE', 'Gestisci gruppi utenti');
define('APPROVAL_1', 'Approvazione Pub. Upl.  (1)');
define('APPROVAL_2', 'Approvazione Priv. Upl.  (2)');
define('NOTE1', '<b>(1)</b> Gli uploads in un album pubblico necessitano della approvazione');
define('NOTE2', '<b>(2)</b> Gli uploads in un album di un utente necessitano della approvazione');
define('NOTES', 'Note');

// lang_index_php
define('WELCOME', 'Benvenuto !');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Vuoi davvero cancellare quest\'album ? \\nTutte le immagini ed i commenti andranno persi.');
define('DELETE', 'CANCELLA');
define('MODIFY', 'PROPRIETA\'');
define('EDIT_PICS', 'EDITA IMMAGINI');

// lang_list_categories
define('HOME', 'Home');
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
define('CAN_UPLOAD', 'I visitatori possono aggiungere immagini');
define('CAN_POST_COMMENTS', 'I visitatori possono inserire commenti');
define('CAN_RATE', 'I visitatori possono votare le immagini');
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

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'Gli amministratori di <b>{SITE_NAME}</b> rimuoveranno tutto quello che non sarà ritenuto compatibile con le finalità ed il decoro del sito.Ti chiediamo di rispettare il lavoro degli altri utenti e del webmaster.<br /><br />Accetti di non pubblicare materiale osceno ed offensivo.<br /><br />Le informazioni relative al tuo account sono conservate in un cookie sul tuo computer per velocizzare l\'utilizzo della galleria. Il tuo indirizzo email non sarà divulgato a nessuno per nessun motivo.<br /><br />Cliccando su \'Accetto\' confermi queste condizioni.');

// lang_register_php
define('PAGE_TITLE', 'Registrazione utente');
define('TERM_COND', 'Termini e condizioni');
define('I_AGREE', 'Accetto');
define('SUBMIT', 'Invia registrazione');
define('ERR_USER_EXISTS', 'Lo username scelto è già utilizzato, scegline un altro');
define('ERR_PASSWORD_MISMATCH', 'Le password non coincidono, controlla e riprova');
define('ERR_UNAME_SHORT', 'Lo username deve essere almeno di 2 caratteri');
define('ERR_PASSWORD_SHORT', 'La password deve essere almeno di 2 caratteri');
define('ERR_UNAME_PASS_DIFF', 'Username e password devono essere diversi');
define('ERR_INVALID_EMAIL', 'La email non è valida');
define('ERR_DUPLICATE_EMAIL', 'Email già utilizzata da un altro utente');
define('ENTER_INFO', 'Inserisci info per la registrazione');
define('REQUIRED_INFO', 'Informazioni richieste');
define('OPTIONAL_INFO', 'Informazioni opzionali');
define('USERNAME', 'Username');
define('PASSWORD', 'Password');
define('PASSWORD_AGAIN', 'Riscrivi password');
define('EMAIL', 'Email');
define('LOCATION', 'Dove vivi?');
define('INTERESTS', 'Interessi');
define('WEBSITE', 'Sito web');
define('OCCUPATION', 'Occupazione');
define('ERROR', 'ERRORE');
define('CONFIRM_EMAIL_SUBJECT', '%s - Conferma registrazione');
define('INFORMATION', 'Informazione');
define('FAILED_SENDING_EMAIL', 'La email di conferma non può essere inviata !');
define('THANK_YOU', 'Grazie per esserti registrato.<br /><br />Una e-mail di conferma e di attivazione è stata inviata alla casella di posta indicata.');
define('ACCT_CREATED', 'Il tuo account è stato creato e puoi fare il login');
define('ACCT_ACTIVE', 'Il tuo account è stato attivato e puoi fare il login');
define('ACCT_ALREADY_ACT', 'Il tuo account è già attivo !');
define('ACCT_ACT_FAILED', 'Questo account non può essere attivato !');
define('ERR_UNK_USER', 'Utente selezionato inesistente !');
define('X_S_PROFILE', 'Profilo di %s');
define('GROUP', 'Gruppo');
define('REG_DATE', 'Iscritto il ');
define('DISK_USAGE', 'Utilizzo disco');
define('CHANGE_PASS', 'Cambia la mia password');
define('CURRENT_PASS', 'Password corrente');
define('NEW_PASS', 'Nuova password');
define('NEW_PASS_AGAIN', 'Ripeti nuova password');
define('ERR_CURR_PASS', 'La password attuale è errata');
define('APPLY_MODIF', 'Applica modifiche');
define('UPDATE_SUCCESS', 'Profilo aggiornato');
define('PASS_CHG_SUCCESS', 'Password cambiata');
define('PASS_CHG_ERROR', 'La tua password non è stata cambiata');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Grazie per esserti registrato su {SITE_NAME}

La tua username è : "{USER_NAME}"
La tua password è : "{PASSWORD}"

Per completare la attivazione clicca sul link qui sotto
o copia e incolla nel browser

{ACT_LINK}

Cordiali saluti,

Il webmaster di {SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', 'Revisiona commenti');
define('NO_COMMENT', 'Non ci sono commenti da revisionare');
define('N_COMM_DEL', '%s commenti cancellati');
define('N_COMM_DISP', 'Numero di commenti da mostrare');
define('SEE_PREV', 'Vedi precedente');
define('SEE_NEXT', 'Vedi successivo');
define('DEL_COMM', 'Cancella i commenti selezionati');

// lang_search_php
define('SEARCH', 'Cerca nella galleria');

// lang_search_new_php
define('PAGE_TITLE', 'Cerca nuove immagini');
define('SELECT_DIR', 'Seleziona directory');
define('SELECT_DIR_MSG', 'Questa funzione consente di aggiungere immagini caricate via FTP sul tuo server<br /><br />Scegli la directory in cui hai caricato le immagini');
define('NO_PIC_TO_ADD', 'Non ci sono immagini da aggiungere');
define('NEED_ONE_ALBUM', 'Hai bisogno almeno di un album per usare questa funzione');
define('WARNING', 'Attento');
define('CHANGE_PERM', 'lo script non può scrivere in questa directory, fai il chmod a 755 o 777 e riprova!');
define('TARGET_ALBUM', '<b>Metti le immagini di &quot;</b>%s<b>&quot; in </b>%s');
define('FOLDER', 'Cartella');
define('IMAGE', 'Immagine');
define('ALBUM', 'Album');
define('RESULT', 'Risultato');
define('DIR_RO', 'Non scrivibile. ');
define('DIR_CANT_READ', 'Non leggibile. ');
define('INSERT', 'Aggiungo le nuove immagini alla galleria');
define('LIST_NEW_PIC', 'Lista delle nuove immagini');
define('INSERT_SELECTED', 'Inserisci le immagini selezionate');
define('NO_PIC_FOUND', 'Nessuna nuova immagine è stata trovata');
define('BE_PATIENT', 'Sii paziente, lo script necessita di tempo per aggiungere le immagini');
define('NOTES', '<ul><li><b>OK</b> : immagine aggiunta con successo<li><b>DP</b> : immagine già presente nel database<li><b>PB</b> : immagine non aggiunta a causa della errata configurazione del server o del chmod delle cartelle<li>Se OK, DP, PB non appaiono clicca sulla immagine per vedere quale errore è stato causato dal PHP<li>Se il tuo browser va in timeout, premi il tasto Aggiorna</ul>');
define('SELECT_ALBUM', 'Seleziona album');
define('NO_ALBUM', 'Non hai selezionato nessun album, torna indietro e seleziona l\'album in cui inserire le immagini');

// lang_upload_php
define('TITLE', 'Upload immagine');
define('MAX_FSIZE', 'La dimensione massima del file è %s KB');
define('ALBUM', 'Album');
define('PICTURE', 'Immagine');
define('PIC_TITLE', 'Titolo immagine');
define('DESCRIPTION', 'Descrizione immagine');
define('KEYWORDS', 'Keywords (separate da spazi)');
define('ERR_NO_ALB_UPLOADABLES', 'Spiacenti, in nessun album è consentito caricare immagini');

// lang_usermgr_php
define('TITLE', 'Gestione utenti');
define('NAME_A', 'Nome ascendente');
define('NAME_D', 'Nome discendente');
define('GROUP_A', 'Gruppo ascendente');
define('GROUP_D', 'Gruppo discendente');
define('REG_A', 'Data iscrizione ascendente');
define('REG_D', 'Data iscrizione discendente');
define('PIC_A', 'Numero immagini crescente');
define('PIC_D', 'Numero immagini decrescente');
define('DISKU_A', 'Utilizzo disco crescente');
define('DISKU_D', 'Utilizzo disco decrescente');
define('SORT_BY', 'Ordina utenti per');
define('ERR_NO_USERS', 'La tabella utenti è vuota !');
define('ERR_EDIT_SELF', 'Non puoi editare il tuo profilo da qui, usa invece \"Il mio profilo\"');
define('EDIT', 'EDITA');
define('DELETE', 'CANCELLA');
define('NAME', 'Nome utente');
define('GROUP', 'Gruppo');
define('INACTIVE', 'Inattivo');
define('OPERATIONS', 'Operazioni');
define('PICTURES', 'Immagini');
define('DISK_SPACE', 'Spazio usato / Quota');
define('REGISTERED_ON', 'Registrato il');
define('U_USER_ON_P_PAGES', '%d utenti in %d pagine');
define('CONFIRM_DEL', 'Vuoi davvero cancellare questo utente ? \\nTutte le sue immagini ed i suoi album andranno persi.');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'Utente selezionato inesistente !');
define('MODIFY_USER', 'Modifica utente');
define('NOTES', 'Note');
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
define('TITLE', 'Ridimensiona immagini');
define('WHAT_IT_DOES', 'Cosa fa');
define('WHAT_UPDATE_TITLES', 'Aggiorna titoli da nome file');
define('WHAT_DELETE_TITLE', 'Cancella titoli');
define('WHAT_REBUILD', 'Ricostruisce miniature e immagini ridimensionate');
define('WHAT_DELETE_ORIGINALS', 'Cancella immagini originali e sostituisce con versione ridimensionata');
define('FILE', 'File');
define('TITLE_SET_TO', 'titolo impostato a');
define('SUBMIT_FORM', 'esegui');
define('UPDATED_SUCCESFULLY', 'aggiornamento riuscito');
define('ERROR_CREATE', 'ERRORE creando');
define('CONTINUE', 'Processa più immagini');
define('MAIN_SUCCESS', 'Il file %s è stato impostato come immagine principale');
define('ERROR_RENAME', 'Errore rinominando %s in %s');
define('ERROR_NOT_FOUND', 'Il file %s non è stato trovato');
define('BACK', 'torna al menu principale');
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
define('UPDATE', 'Aggiorna miniature e/o immagini ridimensionate');
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
define('DELETE', 'Cancella titoli immagini o immagini con dimensioni originali');
define('DELETE_TITLE', 'Cancella titoli immagini');
define('DELETE_ORIGINAL', 'Cancella le immagini originali');
define('DELETE_REPLACE', 'Cancella le immagini originali sostituendole con la versione ridimensionata');
define('SELECT_ALBUM', 'Scegli album');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Mostro Immagine');
define('USR', '\'s Galleria immagini');
define('PHOTOGALLERY', 'Galleria immagini');
?> 