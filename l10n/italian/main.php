<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/italian/main.php,v $
  $Revision: 9.51 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:52 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_CHARSET','utf-8');
define('_BROWSER_LANGCODE','it');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %d %B @ %T %Z');
define('_DATESTRING2','%A, %d %B');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Pagina seguente');
define('_PREVIOUSPAGE','Pagina precedente');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Cerca');
define('_LOGIN','Entra');
define('_WRITES','Scrive');
define('_POSTEDON','Postato il');
define('_NICKNAME','Nickname');
define('_PASSWORD','Password');
define('_WELCOMETO','Benvenuto su');
define('_EDIT','Modifica');
define('_DELETE','Cancella');
define('_POSTEDBY','Inviato da');
define('_READS','letture');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Torna Indietro</a>' : '<a href="javascript:history.go(-1)">Torna Indietro</a>').' ]');
define('_COMMENTS','commenti');
define('_PASTARTICLES','Articoli Precedenti');
define('_OLDERARTICLES','Articoli Vecchi');
define('_BY','di');
define('_ON','il');
define('_LOGOUT','Esci');
define('_WAITINGCONT','In Attesa');
define('_WREVIEWS','Recensioni');
define('_WLINKS','Links');
define('_ONEDAY','In questo giorno...');
define('_ASREGISTERED','Non hai ancora un tuo account? <a href="'.getlink('Your_Account').'">Crealo Qui</a>!. Come utente registrato potrai sfruttare appieno e personalizzare i servizi offerti.');
define('_MENUFOR','Menu per');
define('_NOBIGSTORY','Ancora Nessun Articolo.');
define('_BIGSTORY','L\'Articolo più letto del Giorno è:');
define('_SURVEY','Sondaggio');
define('_POLLS','Sondaggi');
define('_PCOMMENTS','Commenti:');
define('_RESULTS','Risultati');
define('_HREADMORE','Altro...');
define('_CURRENTLY','In questo momento ci sono,');
define('_GUESTS','Visitatori(e) e');
define('_MEMBERS','Utenti nel sito.');
define('_YOUARELOGGED','Ciao');
define('_YOUHAVE','Hai');
define('_PRIVATEMSG','messaggio(i).');
define('_YOUAREANON','Non sei un Utente Registrato. Registrati gratuitamente <a href="'.getlink('Your_Account').'">Qui</a>');
define('_NOTE','Nota:');
define('_ADMIN','Amministratore');
define('_WERECEIVED','');
define('_PAGESVIEWS','pagine viste dal');
define('_TOPIC','Argomento');
define('_UDOWNLOADS','Downloads');
define('_VOTE','Vota!');
define('_VOTES','Voti');
define('_MVIEWADMIN','Visualizzato da: Solo Amministratori');
define('_MVIEWUSERS','Visualizzato da: Solo Registrati');
define('_MVIEWANON','Visualizzato da: Solo Anonimi');
define('_MVIEWALL','Visualizzato da: Tutti');
define('_EXPIRELESSHOUR','Scadenza: Meno di un\'ora');
define('_EXPIREIN','Scadenza tra');
define('_UNLIMITED','Illimitato');
define('_HOURS','Ore');
define('_RSSPROBLEM','Problema momentaneo con i Titoli di questo Sito');
define('_SELECTLANGUAGE','Selezione linguaggio');
define('_SELECTGUILANG','Seleziona la lingua dell\'interfaccia');
define('_NONE','Nessuna');
define('_BLOCKPROBLEM','<center>Al momento c\'è un problema con questo blocco.</center>');
define('_BLOCKPROBLEM2','<center>Al momento non ci sono contenuti in questo blocco.</center>');
define('_MODULENOTACTIVE','Spiacente, modulo non attivo!');
define('_NOACTIVEMODULES','Moduli inattivi');
define('_MODULENOEXIST','Siamo spiacenti ma la pagina %s non esiste');
define('_FORADMINTESTS','(per test amministrativi)');
define('_BBFORUMS','Forums');
define('_ACCESSDENIED','Accesso Negato');
define('_RESTRICTEDAREA','Stai tentando di accedere ad un\'area riservata.');
define('_MODULEUSERS','Spiacenti, ma quest\'area del sito è riservata agli Utenti <i>Registrati</i><br /><br /><a href="'.getlink('Your_Account&amp;file=register').'">Registrati gratuitamente</a><br />per accedere a quest\'area del sito senza restrizioni. Grazie.<br /><br />');
define('_MODULEUSERS2','Puoi <a href="'.getlink('Your_Account&amp;file=register').'">registrarti gratuitamente</a> per assicurarti l\'accesso a questa parte del nostro sito.<br /><br />Grazie per la comprensione');
define('_MODULESADMINS','Spiacenti, ma quest\'area del sito è riservata agli <i>Amministratori</i><br /><br />');
define('_MODULESGROUPS','è il gruppo al quale devi far parte per poter accedere a quest\'area');
define('_HOME','Home');
define('_HOMEPROBLEM','C\'è un grosso problema: non abbiamo ancora l\'Homepage!!!');
define('_ADDAHOME','Aggiungi il Modulo nella tua Homepage');
define('_HOMEPROBLEMUSER','In questo momento c\'è un problema sulla Homepage. Torna in un altro momento. Grazie.');
define('_MORENEWS','Altro nella News Section');
define('_ALLCATEGORIES','Tutte le Categorie');
define('_SPAMGUARDPROTECTED','SpamGuard ha bloccato la spedizione di quest\'email');
define('_M_CHARS','Massimo: %s caratteri');

define('_SYS_MESSAGE','Messaggio di Sistema');
define('_SYS_MESSAGES','Messaggi di Sistema');
define('_SYS_MAINTENANCE','Sei sotto modalità manutenzione');
define('_SYS_DEMO','Sei sotto modalità dimostrazione amministrativa<br />Non puoi effettuare nessun cambiamento nel database<br /><a href="'.adminlink('logout').'">Esci!</a>');

define('_DATE','Data');
define('_HOUR','Ora');
define('_UMONTH','Mese');
define('_YEAR','Anno');
define('_JANUARY','Gennaio');
define('_FEBRUARY','Febbraio');
define('_MARCH','Marzo');
define('_APRIL','Aprile');
define('_MAY','Maggio');
define('_JUNE','Giugno');
define('_JULY','Luglio');
define('_AUGUST','Agosto');
define('_SEPTEMBER','Settembre');
define('_OCTOBER','Ottobre');
define('_NOVEMBER','Novembre');
define('_DECEMBER','Dicembre');

define('_MONDAY','Lunedì');
define('_TUESDAY','Martedì');
define('_WEDNESDAY','Mercoledì');
define('_THURSDAY','Giovedì');
define('_FRIDAY','Venerdì');
define('_SATURDAY','Sabato');
define('_SUNDAY','Domenica');

define('_ABR_MONDAY','Lun');
define('_ABR_TUESDAY','Mar');
define('_ABR_WEDNESDAY','Mer');
define('_ABR_THURSDAY','Giov');
define('_ABR_FRIDAY','Ven');
define('_ABR_SATURDAY','Sab');
define('_ABR_SUNDAY','Dom');

define('_BWEL','Benvenuto');
define('_BPM','Messaggi Privati');
define('_BUNREAD','Non letto');
define('_BREAD','Letto');
define('_BMEMP','Iscrizioni');
define('_BLATEST','Ultimo');
define('_BTD','Nuovi di oggi');
define('_BYD','Nuovi di ieri');
define('_BOVER','Complessivo');
define('_BVISIT','Persone Online');
define('_BVIS','Visitatori');
define('_BMEM','Iscritti');
define('_BTT','Totale');
define('_BON','Collegati ora');
define('_BREG','Registrati');
define('_BROADCAST','Messaggio Pubblico Trasmesso');
define('_BROADCASTFROM','Messaggio Pubblico da');
define('_TURNOFFMSG','Togli Messaggi Pubblici');
define('_JOURNAL','Blog');
define('_READMYJOURNAL','Leggi il mio Blog');
define('_ADD','Aggiungi');
define('_YES','Sì');
define('_NO','No');
define('_INVISIBLEMODULES','Moduli Invisibili');
define('_ACTIVEBUTNOTSEE','(Link attivo ma invisibile)');
define('_BOTS','Bots');

define('_UM','Servizio Aggiornamento Dragonfly');
define('_UM_F','Impossibile contattare il servizio aggiornamenti. Prova più tardi, grazie.');
define('_UM_G','Stai usando l\'ultima versione di Dragonfly');
define('_UM_R','Cortesemente <a href="%2$s" target="_blank">aggiorna</a> a Dragonfly %1$s');

define('_TEAM','Team.');
define('_LINKAPPROVEDMSG','Congratulazioni! Il link web da te presentato al nostro database è stato appena approvato. Per usarlo ricambia la cortesia e mandaci una email con l\'URL della pagina dove lo hai inserito.');
define('_MODREQLINKS','Mod. Links');
define('_BROKENLINKS','Links errati');
define('_MODREQDOWN','Mod. Downloads');
define('_BROKENDOWN','Downloads errati');
define('_PAGEGENERATION','Generazione pagina:');
define('_SECONDS','Secondi');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Pagina generata in %1$s secondi e  con %2$s DB Query in %3$s secondi');
define('_YOUHAVEONEMSG','Hai 1 Nuovo Messaggio Privato');
define('_NEWPMSG','Nuovi Messaggi Privati');
define('_CONTRIBUTEDBY','Contributo di');
define('_CHAT','Chat');
define('_REGISTERED','Registrato');
define('_CHATGUESTS','Ospiti');
define('_USERSTALKINGNOW','Utenti in chat');
define('_ENTERTOCHAT','Entra nella Chat');
define('_CHATROOMS','Stanze disponibili');
define('_ALLTOPICS','Tutti gli argomenti');
define('_ASSOTOPIC','Argomenti associati');
define('_HELLO','Ciao');
define('_ALL','Tutto');
define('_URL','URL');
define('_SUBJECT','Soggetto');
define('_PREVIEW','Anteprima');
define('_SEND','Invia');
define('_ANONYMOUS','Anonimo');
define('_BREADCRUMB', 'Delimitatore Breadcrumb, compare tra le parole del titolo nelle pagine');
define('_BC_DELIM',''.isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&rsaquo;');//''. is for cpglang
define('_RESET','Reset');
define('_AT','at');
define('_LASTMSGS','Ultimi %s Messaggi');
define('_LASTPOSTBY','Ultimo messaggio di %1$s in %2$s il %3$s');
define('_PRINTER','Pagina Stampabile');

define('_CREDITS_TITLE','Meriti');
define('_CREDITS_PRODUCT','Prodotto');
define('_CREDITS_DESC','Descrizione');
define('_CREDITS_AUTHORS','Autore/i');

define('_PP_TITLE','Atto Privato');
define('_PP_MODIFY','Modifica questo messaggio');

define('_SENDERNAME','Nome Mittente');
define('_SENDEREMAIL','Email Mittente');
define('_RECIPIENTNAME','Nome Destinatario');
define('_RECIPIENTEMAIL','Email Destinatario');

define('_REASONS_0','Così com\'è');
define('_REASONS_1','Fuori Argomento');
define('_REASONS_2','Provocante');
define('_REASONS_3','Troll');
define('_REASONS_4','Eccessivo');
define('_REASONS_5','Ipocrisia');
define('_REASONS_6','Irrelavante');
define('_REASONS_7','Informativo');
define('_REASONS_8','Divertente');
define('_REASONS_9','Sopravvalutato');
define('_REASONS_10','Sottovalutato');

/* My Account Tools Block */
define('_TB_BLOCK','Strumenti Account');
define('_TB_TASKS','Operazioni');
define('_TB_INFO','Informazioni');
define('_TB_PROFILE_INFO','Profilo Pubblico');
define('_TB_EDIT_PROFILE','Informazioni Profilo');
define('_TB_EDIT_REG','Dettagli di Registrazione');
define('_TB_EDIT_PRIVATE','Informazioni Private');
define('_TB_EDIT_AVATAR','Avatar Personale');
define('_TB_DELETE','Cancella il mio Account');
define('_TB_CONFIG','Configurazione');
define('_TB_EDIT_PREFS','Preferenze');
define('_TB_EDIT_HOME','Configura l\'Homepage');
define('_TB_EDIT_COMM','Configura i Commenti');
define('_TB_PERSONAL','Personale');
define('_TB_PERSONAL_GALLERY','la Mia Galleria');
define('_TB_PERSONAL_JOURNAL','il Mio Blog');
define('_TB_PRIVMSGS','Messaggi Privati');
define('_TB_PRIVMSGS_INBOX','in Arrivo');
define('_TB_PRIVMSGS_OUTBOX','in Uscita');
define('_TB_PRIVMSGS_SENTBOX','Inviata');
define('_TB_PRIVMSGS_SAVEBOX','Salvati');
define('_TB_PRIVMSGS_SEND','Manda un Messaggio');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','Info Utente');
define('_SECURITYCODE','Codice di sicurezza');
define('_TYPESECCODE','Scrivi il codice di sicurezza');
define('_MEMBERSOPTIONS','Opzioni membri');
define('_READSEND','Leggi i tuoi messaggi privati. Spedisci messaggi agli altri.');
define('_INBOX','in Arrivo');
define('_NEW','Nuovo');
define('_ACCOUNTOPTIONS','Area Personale. Configura le tue opzioni e leggi i tuoi messaggi.');
define('_LOGOUTACCT','Esci dal tuo account.');
define('_LOGOUTADMINACCT','Esci dal tuo account amministrativo.');
define('_BLOGIN','Area personale');
define('_BFLOGIN','Profilo del forum');
define('_BHID','Nascosto');
define('_WHOWHERE','Chi è online');
define('_STAFFONL','Staff Online');
define('_STAFFNONE','Nessuno dello Staff è online!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Comunità');
define('_BlogsLANG','Blog');
define('_ContentLANG','Contenuti');
define('_coppermineLANG','Galleria');
define('_CPGlangLANG','Aiuta la traduzione');
define('_DownloadsLANG','Download');
define('_EncyclopediaLANG','Enciclopedia');
define('_ForumsLANG','Forum');
define('_ContactLANG','Contattaci');
define('_FAQLANG','FAQ - Aiuto');
define('_Members_ListLANG','Lista Utenti');
define('_NewsLANG','Novità');
define('_ReviewsLANG','Revisioni');
define('_SearchLANG','Cerca');
define('_StatisticsLANG','Statistiche');
define('_Stories_ArchiveLANG','Archivio Storie');
define('_Submit_NewsLANG','Presenta le tue Novità');
define('_SurveysLANG','Sondaggi');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Argomenti');
define('_Private_MessagesLANG','Messaggi Privati');
define('_Tell_a_FriendLANG','Facci Pubblicità');
define('_Web_LinksLANG','Altri siti');
define('_Your_AccountLANG','Il Mio Account');
define('_CPG_EventsLANG','Calendario');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Lingue');
define('_SmiliesLANG', 'Faccine');
define('_GroupsLANG','Grouppi');
define('_RanksLANG', 'Ranghi');
define('_HeadlinesLANG', 'Headlines');

define('_COMMUNICATION','Comunicazione');
define('_FRIENDS','Amici');
define('_STORE','Negozio');
define('_PRODUCTS','Prodotti');
define('_DONATE','Dona');
define('_HELP','Aiuto');
define('_GALLERIES','Gallerie');
define('_DOCS','Documentazione');
define('_RULES','Regole');
define('_MENU','Menu Principale');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','Tu <strong>sei</strong> iscritto alla<br />nostra newsletter');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','Tu <strong>non sei</strong> iscritto alla<br />nostra newsletter');
define('_NEWSLETTERBLOCKREGISTER','Devi essere un<br /><strong>utente registrato</strong><br />per ricevere la nostra newsletter');
define('_NEWSLETTERBLOCKSUBSCRIBE','Iscriviti');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Cancella l\'iscrizione');
define('_NEWSLETTERBLOCKREGISTERNOW','Registrati Adesso!');
/* END Newsletter Block */

/* START class phpmailer lang array */
$PHPMAILER_LANG = array();
$PHPMAILER_LANG['provide_address'] = 'Devi inserire almeno un destinatario';
$PHPMAILER_LANG['mailer_not_supported'] = 'Mail server non supportato';
$PHPMAILER_LANG['execute'] = "Impossibile eseguire l'operazione: ";
$PHPMAILER_LANG['instantiate'] = 'Impossibile istanziare la funzione mail';
$PHPMAILER_LANG['authenticate'] = 'SMTP Error - Autenticazione fallita.';
$PHPMAILER_LANG['from_failed'] = 'I seguenti indirizzi mittenti hanno generato un errore: ';
$PHPMAILER_LANG['recipients_failed'] = 'SMTP Error - I seguenti indirizzi destinatari hanno generato un errore: ';
$PHPMAILER_LANG['data_not_accepted'] = 'SMTP Error - Data non accettati dal server.';
$PHPMAILER_LANG['connect_host'] = 'SMTP Error - Impossibile connettersi all\'host SMTP.';
$PHPMAILER_LANG['file_access'] = 'Impossibile accedere al file: ';
$PHPMAILER_LANG['file_open'] = 'Impossibile aprire il file: ';
$PHPMAILER_LANG['encoding'] = 'Encoding set dei caratteri sconosciuto: ';
/* END class phpmailer lang array */

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_SAVECHANGES','Salva Modifiche');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Lingua');
define('_FUNCTIONS','Funzioni');
define('_SHOW','Vedi');
define('_TO','A');
define('_DAY','Giorno');
define('_LAST','Ultimi');
define('_ACTIVE','Attivo');
define('_DEACTIVATE','Disattiva');
define('_INACTIVE','Inattivo');
define('_ACTIVATE','Attiva');
define('_ACTIVATE2','Attivare?');
define('_VIEW','Visibile per');
define('_VIEWPRIV','Chi può Vederlo?');
define('_MVADMIN','Solo Amministratori');
define('_MVUSERS','Solo Utenti Registrati');
define('_MVANON','Solo Utenti Anonimi');
define('_MVALL','Tutti');
define('_IMAGE','Immagine');
define('_GO','Vai!');
define('_OPTION','Opzioni');
define('_CATEGORY','Categoria');
define('_SUBCATEGORY','Sotto-Categoria');
define('_ID','ID');
define('_EXPIRATION','Scadenza');
define('_DAYS','giorni');
define('_WARNING','Attenzione');
define('_POLLTITLE','Titolo Sondaggio');
define('_POLLEACHFIELD','Inserisci ogni opzione in ogni singolo campo');
define('_ADDCATEGORY','Aggiungi Nuova Categoria');
define('_PAGEBREAK','Se desideri pagine multiple inserisci <b>&lt;!--pagebreak--&gt;</b> nei punti di taglio.');
define('_SIGNATURE','Firma');
define('_DESCRIPTION','Descrizione');
define('_EDITCATEGORY','Edita Categoria');
define('_IN','nel');
define('_DESCRIPTION255','Descrizione: (255 caratteri max)');
define('_MODCATEGORY','Modifica una Categoria');
define('_SUBMITTER','Referente');
define('_VISIT','Visita');
define('_EXTENDEDTEXT','Testo Esteso');
define('_CHECKCATEGORIES','Controlla Categorie');
define('_INCLUDESUBCATEGORIES','(includi Sotto-Categorie)');
define('_CHECKSUBCATEGORIES','Controlla Sotto-Categorie');
define('_VALIDATELINKS','Convalida Links');
define('_FAILED','Fallita!');
define('_BEPATIENT','(attendi...)');
define('_VALIDATINGCAT','Categoria (e tutte le sottocategorie) in corso di validazione');
define('_VALIDATINGSUBCAT','Sottocategoria in corso di validazione');
define('_OK','Ok!');
define('_CHECK','Testa');
define('_IGNORE','Ignora');
define('_HITS','Click');
define('_FILESIZE', 'Dimensione del file');
define("_EZTHEREIS","Ci sono");
define("_EZSUBCAT","sotto-categorie");
define("_EZATTACHEDTOCAT","in questa categoria");
define("_EZBROKENLINKS","Link non validi");
define("_DELEZLINKCATWARNING","ATTENZIONE : Sei sicuro di voler cancellare questa categoria ?<br /> Cancellerai anche tutte le sotto-categorie e tutti i link !");

// index.php
define('_DEFHOMEMODULE','Modulo Homepage Predefinito');
define('_MODULEINHOME','Modulo caricato nella Homepage:');
define('_CHANGE','Cambia');
define('_WHOSONLINE','Chi è Online');
define('_NP_ADMIN','Notepad');
define('_NP_LOCKED','L\'uso di notepad è stato bloccato<br />Solamente l\'amministratore di sistema (super user) può sbloccarlo');
define('_NP_SAVE','Salva Note');
define('_NP_UNLOCK','Sblocca Notepad');
define('_NP_LOCK','Blocca Notepad');
// news
define('_STICKY','Incolla Articoli');
define('_ARTICLEUP','Articolo SÙ');
define('_ARTICLEDOWN','Articolo GIÙ');
define('_UNSTICK','Scolla');
define('_STICK','Incolla');
define('_AUTOMATEDARTICLES','Articoli Programmati');
define('_STORYID','Articolo ID');
define('_CURRENTPOLL','Sondaggio Attuale');

// admin.php
define('_ADMINISTRATION','Amministrazione');
define('_NOADMINYET','Non ci sono ancora Account di Amministratori, procedi alla creazione del Super User:');
define('_CREATEUSERDATA','Vuoi creare anche un user normale con gli stessi dati?');
define('_ADMINLOGIN','Ingresso all\'amministrazione del sistema');
define('_ADMINID','Admin ID');
define('_EMAIL','Email');
define('_SUBMIT','Invia');
define('_YOUARELOGGEDOUT','Ora sei disconnesso!');
define('_PASSWDNOMATCH','Le passwords non corrispondono. Torna indietro e riprova');
define('_LOGIN_REMEMBERME','Ricordati di me?');
define('_ADMINMENU_LOGOUT','Menu Uscita Amministrazione');
define('_PASSWORD_MALFORMED','Cortesemente includi nella tua password almeno un numero, una lettera maiuscola ed una miniscola');

// admins.php
define('_AUTHORSADMIN','Amministrazione Autori');
define('_NAME','Nome');
define('_REQUIRED','(richiesto)');
define('_MODIFYINFO','Modifica Info');
define('_DELAUTHOR','Cancella Autore');
define('_ADDAUTHOR','Aggiungi Nuovo Amministratore');
define('_PERMISSIONS','Permessi');
define('_SUPERUSER','Super User');
define('_SUPERWARNING','ATTENZIONE: Se Super User viene selezionato, l\'Utente acquisisce Pieno Accesso!');
define('_ADDAUTHOR2','Aggiungi Autore');
define('_RETYPEPASSWD','Riscrivi Password');
define('_FORCHANGES','(Solo per Modifiche)');
define('_COMPLETEFIELDS','Devi completare tutti i campi obbligatori');
define('_CREATIONERROR','Errore nella creazione dell\'Autore');
define('_AUTHORDEL','Cancella Autore');
define('_PUBLISHEDSTORIES','Questo amministratore ha pubblicato articoli');
define('_SELECTNEWADMIN','Seleziona un nuovo amministratore a cui re-assegnarlo');
define('_GODNOTDEL','*(Il super admin non può essere cancellato)');
define('_MAINACCOUNT','Super Admin *');
define('_USERS','Utenti');

// banners.php
define('_BANNERSADMIN','Amministrazione Banners');
define('_DELETEBANNER','Cancella Banner');
define('_SURETODELBANNER','Sei sicuro di voler cancellare questo banner?');
define('_EDITBANNER','Modifica Banner');

// blocks.php
define('_BLOCKSADMIN','Blocco Amministrazione');
define('_CENTER','Centrale');
define('_CENTERUP','Centra sù');
define('_CENTERDOWN','Centra giù');
define('_BLOCKFILE','(Blocco File)');
define('_BLOCKFILE2','FILE');
define('_BLOCKSYSTEM','SYSTEM');
define('_ADDNEWBLOCK','Aggiungi Blocco');
define('_RSSFILE','RSS/RDF file URL');
define('_ONLYHEADLINES','(solo per Headlines)');
define('_REFRESHTIME','Tempo Aggiornamento');
define('_CREATEBLOCK','Crea Blocco');
define('_EDITBLOCK','Edita Blocco');
define('_BLOCK','Blocco');
define('_SAVEBLOCK','Salva Blocco');
define('_BLOCKACTIVATION','Attivazione Blocco');
define('_BLOCKPREVIEW','Questa è l\'anteprima del Blocco');
define('_WANT2ACTIVATE','Vuoi attivare questo Blocco?');
define('_ARESUREDELBLOCK','Sei sicuro di voler Rimuovere questo Blocco?');
define('_BLOCKUP','Sposta il blocco un posizione su');
define('_BLOCKDOWN','Sposta il blocco una posizione giù');
define('_BLOCKTOP','Muovi il blocco in alto');
define('_BLOCKBOTTOM','Muovi il blocco in basso');
define('_TITLE','Titolo');
define('_POSITION','Posizione');
define('_WEIGHT','Peso');
define('_STATUS','Stato');
define('_LEFTBLOCK','Blocchi Sinistra');
define('_LEFT','Sinistra');
define('_RIGHTBLOCK','Blocchi Destra');
define('_RIGHT','Destra');
define('_TYPE','Tipo');
define('_CUSTOM','Personalizzato');
define('_FILENAME','Nome del file');
define('_FILEINCLUDE','(Seleziona un blocco utente da includere. Tutti gli altri campi saranno ignorati)');
define('_VISIBLEINMODULES', 'Visible in modules');

// comments.php
define('_REMOVECOMMENTS','Cancella Commenti');
define('_SURETODELCOMMENTS','Sei sicuro di voler cancellare il commento selezionato e tutte le sue relative repliche?');

// database.php
define('_SAVEDATABASE','Backup DB');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Situazione corrente');
define('_ACTIVATEPAGE','Attivare la pagina?');

// history.php
define('_EPHEMADMIN','Amministrazione Eventi');
define('_ADDEPHEM','Aggiungi Evento');
define('_EPHEMDESC','Descrizione Evento');
define('_EPHEMMAINT','Manutenzione Eventi (Modifica/Cancella):');
define('_EPHEMEDIT','Modifica Evento');
define('_EPHEMDELETE','Cancella Evento');

// headlines.php
define('_RSSFAIL','C\'è un problema con l\'URL del file RSS');
define('_RSSTRYAGAIN','Controlla l\'URL e il Nome del file RSS, riprova!.');
define('_RSSCONTENT','(RSS/RDF Contenuto)');
define('_IFRSSWARNING','Se inserisci l\'URL il contenuto che scrivi potrebbe non essere visibile!');
define('_SETUPHEADLINES','(Seleziona Personalizzato e scrivi l\'URL oppure basta selezionare un Sito dalla lista)');
define('_HEADLINESADMIN','Amministrazione Headlines');
define('_ADDHEADLINE','Aggiungi Headline');
define('_EDITHEADLINE','Modifica Headlines');
define('_SURE2DELHEADLINE','ATTENZIONE: Sei sicuro di voler cancellare questo Headline?');

// messages.php
define('_MESSAGESADMIN','Amministrazione Messaggi');
define('_MESSAGETITLE','Titolo');
define('_MESSAGECONTENT','Contenuto');
define('_ALLMESSAGES','Riassunto messaggi');
define('_EDITMSG','Edita messaggio');
define('_ADDMSG','Aggiungi messaggio');
define('_REMOVEMSG','Sicuro di voler rimuovere il messaggio? ');
define('_CHANGEDATE','Aggiorno data di inizio ad oggi?');
define('_IFYOUACTIVE','(Se Attivi adesso questo Messaggio, la data di inizio sarà oggi)');

// modules.php
define('_MODULESADMIN','Moduli di Amministrazione');
define('_HOMECONFIG','Configurazione Home Page');
define('_MODULESADDONS','Moduli e Addons');
define('_INHOME','In Home');
define('_MODULEHOMENOTE','Nuovi moduli aggiunti in /modules/ verranno inseriti nel sistema automaticamente<br />La rimossione della cartella di un modulo da questo percorso eliminerà automaticamente il modulo dal sistema.<br /><br />Il modulo in grassetto evidenzia il modulo scelto come pagina iniziale.<br />Questo modulo dovrà essere visualizzabile da tutti e non potrà essere disattivato');
define('_PUTINHOME','Metti in Home');
define('_SURETOCHANGEMOD','Sei sicuro di voler cambiare la tua Homepage da');
define('_NOTINMENU','[ <strong>&middot;</strong> ] indica un modulo il cui nome me link non sono visibili nel blocco Moduli');
define('_SHOWINMENU','Mostra nel Menù?');
define('_CUSTOMTITLE','Titolo personalizzato');
define('_MODULEEDIT','Modifica moduli');
define('_VERSION','Versione');
define('_UPGRADE','Aggiorna alla %s');
define('_DBSIZE','DB size');
define('_CVS_EXPLAIN','Questo modulo sembra possa essere capace di ricevere aggiornamenti tramite il nostro CVS (Current Versioning System).<br />CVS ti permette, in modo estremamente facile, di ricevere l\'ultima versione di ogni singolo documento, ma l\'ultima versione di un file potrebbe contenere dei difetti in quanto non fa ancora parte della versione ufficiale.<br />Se sei familiare con PHP, aggiorna i files cliccando il link sottostante.<strong>Fai un backup prima!</strong>');
define('_CVS_UPDATE','Aggiorna CVS files');
define('_LOADNEWCVS', 'Carica un nuovo da CVS');
define('_SUREALL', 'Sei sicuro di voler %s tutti %s');
define('_UPGRADEFAILED', 'Aggiornamento fallito');
define('_EXAMPLE', 'Istruzioni d`uso');

// newsletter.php
define('_FROM','Da');
define('_STAFF','Staff');
define('_NL_RECIPS','Destinatari');
define('_SUBSCRIBEDUSERS','Utenti registrati');
define('_NL_ALLUSERS','Tutti gli utenti');
define('_NL_ADMINS','Amministratori');
define('_NL_REGARDS','Migliori Saluti');
define('_DISCARD','Rinuncia');
define('_REVIEWTEXT','Rivedi e controlla il testo:');
define('_MANYUSERSNOTE','AVVISO! Molti utenti riceveranno questo testo. Aspettare fino a che lo script terminerà le operazioni. Ci possono volere alcuni minuti per finire!');
define('_NL_NOUSERS','Il gruppo, da te selezionato, che riceverà questa newsletter ha zero utenti<br />Cortesemente torna indietro per selezionare un gruppo diverso');
define('_NUSERWILLRECEIVE','Gli utenti riceveranno questa Newsletter.');
define('_NLUNSUBSCRIBE','Ti abbiamo mandato questo messaggio perchè tu hai selezionato di ricevere la newsletters dal nostro sito\n\nPuoi <a href="'.getlink('Your_Account&amp;edit=prefs', true, true).'">recedere dall\'iscrizione</a> alla nostra newsletter in qualsiasi momento\n\nSe vuoi ulteriore assistenza, cortesemente invia una email al <a href="mailto:'.$MAIN_CFG['global']['adminmail'].'">nostro amministratore</a>');
define('_NEWSLETTERSENT','La Newsletter è stata inviata.');

// referers.php
define('_WHOLINKS','Chi linka il nostro sito?');
define('_DELETEREFERERS','Cancella Referenti');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Piè di pagina');
define('_DEBUG','Debug');
define('_SITECONFIG','Configurazione Sito');
define('_GENSITEINFO','Info Generali Sito');
define('_SITENAME','Nome Sito');
define('_SITEURL','URL Sito');
define('_SITELOGO','Logo');
define('_SITESLOGAN','Slogan');
define('_STARTDATE','Data Inizio Sito');
define('_ADMINEMAIL','Email Amministratore');
define('_ITEMSTOP','Articoli in Top Page');
define('_STORIESHOME','Articoli in Home');
define('_OLDSTORIES','Articoli nel Box Articoli Vecchi');
define('_ALLOWANONPOST','Abilita Anonimi a Postare?');
define('_DEFAULTTHEME','Tema Predefinito');
define('_SHOWSEC','Visualizza codice di sicurezza');
define('_TOOLTIPS','Mostra consigli nei campi designati');
define('_UM_TOGGLE','Attiva il Servizio Aggiornamenti');
define('_UM_EXPLAIN','Questo preleverà due informazioni dal nostro sito, dragonflycms.org: la corrente versione di Dragonfly e le comunicazioni importanti pertinenti alla versione di Dragonfly che usi. La sola informazione mandata al nostro server è la versione di Dragonfly. Nel nostro server <strong>non</strong> registriamo queste richieste.');
// maintenance
define('_MAINTENANCE','Manutenzione');
define('_MESSAGE','Messaggio');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','Opzioni Multilingua');
define('_SELLANGUAGE','Seleziona la Lingua');
define('_LOCALEFORMAT','Formato Ora Locale');
define('_ACTMULTILINGUAL','Attivare le caratteristiche multilingua? ');
define('_ACTUSEFLAGS','Mostrare le bandierine invece della lista? ');
// banners
define('_BANNERSOPT','Opzioni Banners');
define('_ACTBANNERS','Attivazione Banners');
// footer
define('_FOOTERMSG','Messaggi Piè di Pagina');
define('_FOOTERLINE1','Piè di Pagina Linea 1');
define('_FOOTERLINE2','Piè di Pagina Linea 2');
define('_FOOTERLINE3','Piè di Pagina Linea 3');
// backend
define('_BACKENDCONF','Syndication');
define('_BACKENDTITLE','Titolo Feed');
define('_BACKENDLANG','Linguaggio Feed');
// mail stories
define('_MAIL2ADMIN','Notifica Nuovi Articoli all\'Amministratore');
define('_NOTIFYSUBMISSION','Notifica l\'amministratore via email per ogni articolo inserito ed in attesa di convalida');
define('_EMAIL2SENDMSG','Email a cui inviare il messaggio');
define('_EMAILSUBJECT','Soggetto Email');
define('_EMAILMSG','Messaggio Email');
define('_EMAILFROM','Email Account (Da)');
// comments
define('_COMMENTSOPT','Commenti');
define('_COMMENTSLIMIT','Limite Commenti in Bytes');
define('_COMMENTSMOD','Abilita la moderazione dei commenti');
define('_MODADMIN','Si, da amministratori');
define('_MODUSERS','Si, dagli utenti');
define('_NOMOD','No, nessun tipo di moderazione');
// adminmenu
define('_GRAPHICOPT','Opzioni Grafiche');
define('_BOTH','Entrambi');
define('_GRAPHICAL','Grafico');
define('_SIDEBLOCK','Blocco laterale');
// miscellaneous
define('_MISCOPT','Opzioni Varie');
define('_ACTIVATEHTTPREF','Attiva referenti HTTP');
define('_MAXREF','Numero massimo di referers');
define('_COMMENTSPOLLS','Attiva commenti in sondaggi');
define('_COMMENTSARTICLES','Attiva i commenti negli articoli');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','Censura');
define('_CENSORMODE','Modalità Censura');
define('_NOFILTERING','Nessun filtro');
define('_EXACTMATCH','Corrispondenza esatta');
define('_MATCHBEG','Parola corrispondente all\'inizio');
define('_MATCHANY','Parola corrispondente in qualsiasi parte del testo');
define('_CENSORREPLACE','Sostituisci le parole censurate con:');
// email
define('_EMAILOPTIONS','Sistema Email');
define('_ALLOW_HTML_EMAIL','Consenti l\'uso di html nelle email');
define('_USE_SMTP','Usa SMTP per email invece di php');
define('_SMTP_HOST','Indirizzo host smtp (smtp.example.com)');
define('_USE_SMTP_AUTH','Server richiede autorizzazione SMTP');
define('_SMTP_USER_NAME','SMTP Nome Utente');
define('_SMTP_USER_PASS','SMTP Password Utente');

// cpg_adminmenu.php
define('_ADMINMENU','Menu Amministrazione');
define('_ADMINLOGOUT','Logout/Esci');
define('_AMENU0','System');
define('_AMENU1','Generale');
define('_AMENU2','Membri');
define('_AMENU3','Messaggi');
define('_AMENU4','Forums');
define('_AMENU5','Informativi');
define('_AMENU6','Linking');
define('_AMENU7','Commerce');
define('_AMENU8','Multimedia');
define('_AMENU9','Moduli');
define('_BMENU1','Aiuto');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','Preferenze');
define('_DATABASE','Database');
define('_BLOCKS','Blocchi');
define('_MODULES','Moduli');
define('_EDITADMINS','Amministratori');
define('_MESSAGES','Messaggi');
define('_BANNERS','Banners');
define('_HTTPREFERERS','Referenti HTTP');
define('_EDITUSERS','Modifica Utenti');
define('_USERSCONFIG','Config Utenti');
define('_NEWSLETTER','Newsletter');
define('_SUBMISSIONS','Articoli Presentati');
define('_ADDSTORY','Aggiungi Articolo');
define('_TOPICS','Argomenti');
define('_ADMPOLLS','Sondaggi');
define('_EPHEMERIDS','Eventi Storici');
define('_REVIEWS','Recensioni');
define('_ENCYCLOPEDIA','Enciclopedia');
define('_SURVEYS','Sondaggi');
define('_SECTIONS','Sezioni');
define('_ARTICLES','Articoli');
define('_FAQ','FAQ');
define('_DOWNLOAD','Download');
define('_WEBLINKS','Links');
define('_CONTENT','Contenuti');
define('_SYSINFO','System Info');
define('_REPORTABUG','Notifica un difetto');
//coppermine admin
define('_W_INSTALL','Quale Installazione?');
define('_W_PAGE','Quale Pagina?');
//security admin
define('_SECURITY','Security');
define('_PROTECTION','Protezione');
define('_EMAIL_DOMAINS','Domini E-Mail');
define('_FLOODING','Flooding');
define('_UUA','User-Agents Sconosciuti');
define('_FLOODING_TIP','Flooding: Intervallo<br /><em>di tempo tra ogni avviso</em>');
define('_BAN_TIP','Flooding: Durata Ban <br /><em>per quanto tempo durerà per</em>');
define('_AUTO_UNBAN_TIP','Flooding: Auto Unban<br /><em>elimina ban dopo il termine della durata</em>');
define('_FOREVER','per sempre');
define('_REMOVE_SELECTED','Rimuovi selezionati');

//errors for cpg_error
define('_ERROR','ERRORE');
define('_SEC_ERROR','Errore di Sicurezza');
define('_ERROR_NOT_SET','%s non è stato inserito');
define('_ERROR_NO_POST','Posting da un altro host non è concesso...');
define('_ERROR_NO_GET','Richieste GET non sono consentite per questa funzione...');
define('_ERROR_BAD_CHAR','I caratteri che stai cercando di includere per la richiesta di %s non sono ammessi...');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','Stati cercando di accedere a questa pagina attraverso un cattivo collegamento...');
define('_ERROR_NONE_TO_DISPLAY','Non ci sono %s da visualizzare');
define('_ERROR_DELETE_CONF','Sei sicuro che vuoi cancellare %s?');
define('_ERROR_NO_EXIST','%s non esiste');
define('_ERROR_ALREADYEXIST','%s esiste già');
define('_TASK_COMPLETED','Operazione completata!');
define('_CONFIRM','Confirm');
define('_FOOTER_COPYRIGHTS', 'Interactive software released under <a href="http://dragonflycms.org/GNUGPL.html" target="_blank" title="GNU Public License Agreement">GNU GPL</a>,	<a href="'.getlink('credits').'">Code Credits</a>,	<a href="'.getlink('privacy_policy').'">Privacy Policy</a>');

# time
$LNG = array('_time' => array(
'l' => array('Domenica', 'Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato'),
'D' => array('Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'),
'F' => array(1=>'Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'),
'M' => array(1=>'Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'),
));
$LNG['_time']['l'][7] =& $LNG['_time']['l'][0];
$LNG['_time']['D'][7] =& $LNG['_time']['D'][0];
