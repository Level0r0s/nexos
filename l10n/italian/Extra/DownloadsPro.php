<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/l10n/italian/Extra/DownloadsPro.php,v $
  $Revision: 1.2 $
  $Author: profago $
  $Date: 2007/09/10 21:35:16 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','Il file da scaricare che hai richiesto non esiste.');
define('_PREVIOUS','Pagina Precedente');
define('_NEXT','Prossima Pagina');
define('_CATEGORIES','Categorie');
define('_LVOTES','Voti');
define('_TOTALVOTES','Voti Totali:');
define('_THEREARE','Ci sono');
define('_NOMATCHES','Nessun Risultato per la tua ricerca');
define('_SCOMMENTS','Commenti');
define('_UNKNOWN','Sconosciuto');
define('_AUTHORNAME','Nome Autore');
define('_AUTHOREMAIL','Email Autore');
define('_DOWNLOADNAME','Nome Programma');
define('_ADDTHISFILE','Aggiungi questo file');
define('_INBYTES','in bytes');
//define('_FILESIZE','Dimensione File');
//define('_VERSION','Versione');
//define('_AUTHOR','Autore');
define('_HOMEPAGE','Home');
define('_DOWNLOADNOW','Scarica questo file!');
define('_RATERESOURCE','Vota Risorsa');
define('_FILEURL','Collegamento File');
define('_ADDDOWNLOAD','Aggiungi File');
define('_DOWNLOADSMAIN','Indice Downloads');
define('_DOWNLOADCOMMENTS','Commenti');
define('_DOWNLOADSMAINCAT','Indice Categorie Downloads');
define('_ADDADOWNLOAD','Aggiungi un Nuovo File');
define('_DSUBMITONCE','Inserisci un solo download alla volta.');
define('_DPOSTPENDING','Tutti i downloads inseriti passano la nostra verifica.');
define('_RESSORTED','Risorse correntemente ordinate per');
define('_DOWNLOADSNOTUSER1','Non sei registrato o non ti sei fatto riconoscere dal sistema.');
define('_DOWNLOADSNOTUSER2','Dopo la registrazione potrai aggiungere downloads in questo sito.');
define('_DOWNLOADSNOTUSER3','Diventare utente registrato è semplice, veloce e gratuito.');
define('_DOWNLOADSNOTUSER4','Perché vi richiediamo la registrazione per l\'accesso ad alcuni servizi?');
define('_DOWNLOADSNOTUSER5','Solo così possiamo garantire una maggiore qualità dei contenuti,');
define('_DOWNLOADSNOTUSER6','ogni aggiunta viene individualmente verificata e, se corrispondente ai nostri criteri, approvata dal nostro staff.');
define('_DOWNLOADSNOTUSER7','Cerchiamo di offrire solo informazioni veritiere e utili.');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink("Your_Account").'">Registrati</a>');
define('_DOWNLOADALREADYEXT','ERRORE: Questo URL è già presente nel nostro Database!');
define('_DOWNLOADNOTITLE','ERRORE: Devi inserire il TITOLO!');
define('_DOWNLOADNOURL','ERRORE: Devi inserire l\'URL!');
define('_DOWNLOADNODESC','ERRORE: Devi inserire una DESCRIZIONE!');
define('_DOWNLOADRECEIVED','Abbiamo regolarmente ricevuto la tua segnalazione. Grazie!');
define('_NEWDOWNLOADS','Nuovi');
define('_TOTALNEWDOWNLOADS','Totale Nuovi Downloads');
define('_DTOTALFORLAST','Totale nuovi downloads negli ultimi');
define('_DBESTRATED','Top');
define('_TRATEDDOWNLOADS','totale downloads votati');
define('_SORTDOWNLOADSBY','Ordina per');
define('_DCATNEWTODAY','Nuovi Downloads Aggiunti Oggi in questa Categoria');
define('_DCATLAST3DAYS','Nuovi Downloads Aggiunti negli Ultimi 3 Giorni in questa Categoria');
define('_DCATTHISWEEK','Nuovi Downloads Aggiunti nell\'Ultima Settimana in questa Categoria');
define('_DDATE1','Data (Veccchi Prima)');
define('_DDATE2','Date (Nuovi Prima)');
define('_DOWNLOADS','downloads');
define('_DOWNLOADPROFILE','Profilo');
define('_DOWNLOADRATINGDET','Dettagli Voti');
define('_EDITTHISDOWNLOAD','Modifica');
define('_DOWNLOADRATING','Voto');
define('_DOWNLOADVOTE','Vota!');
define('_DONLYREGUSERSMODIFY','Solamente utenti regisrati possono suggerire modifiche per i downloads. Cortesemente <a href="'.getlink("Your_Account").'">registrati o entra</a>.');
define('_REQUESTDOWNLOADMOD','Richieste Modifiche Download');
define('_DOWNLOADID','Download ID');
define('_DLETSDECIDE','L\'Input degli Utenti può aiutare gli altri visitatori a scegliere facilmente il miglior file da scaricare.');
define('_DRATENOTE4','Puoi vedere la lista dei <a href="'.getlink("Downloads&amp;d_op=TopRated").'">Top Downloads</a>.');
define('_POPULAR','Popolare');
define('_TOPRATED','Top');
define('_ADDITIONALDET','Dettagli');
define('_EDITORREVIEW','Recensione Editore');
define('_REPORTBROKEN','Segnala Errore Link');
define('_AND','e');
define('_INDB','nel nostro database');
define('_INSTRUCTIONS','Istruzioni');
define('_USERANDIP','Nome utente ed IP vengono registrati, quindi non abusare del sistema.');
define('_LDESCRIPTION','Descrizione: (255 caratteri max)');
define('_CHECKFORIT','Non hai inserito una Email. Comunque controlleremo presto il tuo link.');
define('_LASTWEEK','Ultima Settimana');
define('_LAST30DAYS','Ultimi 30 Giorni');
define('_1WEEK','1 Settimana');
define('_2WEEKS','2 Settimane');
define('_30DAYS','30 Giorni');
define('_ADDEDON','Aggiunto il');
define('_RATING','Giudizio');
define('_DETAILS','Dettagli');
define('_OF','di');
define('_TVOTESREQ','minimo voti richiesti');
define('_SHOWTOP','Vedi Top');
define('_MOSTPOPULAR','Popolari - Top');
define('_OFALL','di tutti');
define('_POPULARITY','Popolarità');
define('_SELECTPAGE','Seleziona Pagina');
define('_MAIN','Principale');
define('_NEWTODAY','Nuovo Oggi');
define('_NEWLAST3DAYS','Nuovo ultimi 3 giorni');
define('_NEWTHISWEEK','Nuovo Questa Settimana');
define('_POPULARITY1','Popolarità (Da Minori a Maggiori Hits)');
define('_POPULARITY2','Popolarità (Da Maggiori a Minori Hits)');
define('_TITLEAZ','Titolo (A - Z)');
define('_TITLEZA','Titolo (Z - A)');
define('_RATING1','Giudizio (Basso - Alto)');
define('_RATING2','Giudizio (Alto - Basso)');
define('_SEARCHRESULTS4','Risultati della Ricerca di');
define('_USUBCATEGORIES','Sotto-Categorie');
define('_TRY2SEARCH','Prova a cercare');
define('_INOTHERSENGINES','in altri Motori di Ricerca');
define('_EDITORIAL','Editoriale');
define('_EDITORIALBY','Editoriale di');
define('_NOEDITORIAL','Nessun editoriale disponibile attualmente per questo sito.');
define('_RATETHISSITE','Vota questo Sito');
define('_ISTHISYOURSITE','E\' questo la tua Risorsa?');
define('_ALLOWTORATE','Abilita gli altri utenti a votarla direttamente dalle tue Pagine Web!');
define('_OVERALLRATING','Giudizio Globale');
define('_TOTALOF','Totale di');
define('_USER','Utenti');
define('_USERAVGRATING','Giudizio Medio Utenti');
define('_NUMRATINGS','# di Valutazioni');
define('_REGISTEREDUSERS','Utenti Registrati');
define('_NUMBEROFRATINGS','Numero di Valutazioni');
define('_NOREGUSERSVOTES','Numero Voti da Utenti Registrati');
define('_BREAKDOWNBYVAL','Analisi Giudizi per Valore');
define('_LTOTALVOTES','voti totali');
define('_HIGHRATING','Maggiore');
define('_LOWRATING','Inferiore');
define('_NUMOFCOMMENTS','Numero di Commenti');
define('_WEIGHNOTE','* Nota: Questo sito valuta i Voti degli Utenti Registrati con quelli degli Anonimi');
define('_NOUNREGUSERSVOTES','Nessun Voto da Anonimi');
define('_WEIGHOUTNOTE','* Nota: Questo sito valuta i Voti degli Utenti Registrati con quelli dei Votanti Esterni');
define('_NOOUTSIDEVOTES','Nessun Voto Esterno');
define('_OUTSIDEVOTERS','Votanti Esterni');
define('_UNREGISTEREDUSERS','Utenti Non Registrati');
define('_PROMOTEYOURSITE','Promuovi il Tuo Sito');
define('_PROMOTE01','Se desideri promuovere efficacemente il tuo Sito, probabilmente sarai interessato a uno dei nostri svariati metodi di votazione a distanza che ti mettiamo a disposizione. Questi in pratica abilitano, sistemando una immagine (o un form di votazione) sul tuo sito, gli utenti a votarti direttamente da li incrementando il numero di voti ricevuti e quindi la visibilità nella nostra directory con relativo aumento di click ricevuti. Scegli tra uno dei metodi illustrati sotto:');
define('_TEXTLINK','Link di Testo');
define('_PROMOTE02','Un modo per linkare il form di votazione è attraverso un semplice link testuale:');
define('_HTMLCODE1','Il codice HTML da usare in questo caso è il seguente:');
define('_THENUMBER','Il Numero');
define('_IDREFER','nel codice HTML l\'identificativo del tuo sito nel database di '.$sitename.' . Assicurati che questo numero sia presente e corretto.');
define('_BUTTONLINK','Bottone');
define('_PROMOTE03','Se vuoi un pò di più che un semplice e basilare link testuale, puoi scegliere di inserire un piccolo bottone:');
define('_RATEIT','Vota questo Sito!');
define('_HTMLCODE2','Il codice relativo è:');
define('_REMOTEFORM','Form Votazione Remota');
define('_PROMOTE04','Abusi di questo sistema comportano la rimozione del link dal nostro database. Tienilo presente. Ecco come appare il corrente form di votazione a distanza.');
define('_VOTE4THISSITE','Vota per questo Sito!');
define('_HTMLCODE3','Usando questo form si abilitano gli utenti a dare un giudizio direttamente dal proprio sito che viene da noi registrato. Il form sottostante è disabilitato, ma il seguente codice funziona perfettamente tagliando e incollando sulle proprie pagine il seguente codice:');
define('_PROMOTE05','Grazie! e buona fortuna!');
define('_THANKSBROKEN','Grazie per l\'aiuto a mantenere l\'integrità di questa directory.');
define('_SECURITYBROKEN','Per ragioni di sicurezza l\'username e l\'indirizzo IP possono anche essere temporaneamente registrate.');
define('_THANKSFORINFO','Grazie per l\'informazione.');
define('_LOOKTOREQUEST','Esamineremo presto la tua richiesta.');
define('_SENDREQUEST','Invia Richiesta');
define('_THANKSTOTAKETIME','Grazie per aver speso un pò del tuo tempo per votare un sito qui su');
define('_RETURNTO','Ritorna a');
define('_RATENOTE1','Non votare per la stessa risorsa più di una volta, grazie.');
define('_RATENOTE2','La scala è 1 - 10, dove 1 significa pessimo e 10 significa eccellente.');
define('_RATENOTE3','Sii il più obiettivo possibile nel voto.');
define('_RATENOTE5','Non votare da solo per il tuo sito o per quello dei tuoi concorrenti diretti, grazie.');
define('_YOUAREREGGED','Sei un Utente Registrato e correttamente riconosciuto dal sistema.');
define('_FEELFREE2ADD','Aggiungi i commenti che vuoi in questo sito.');
define('_YOUARENOTREGGED','Non sei Registrato oppure non ti sei fatto riconoscere dal sistema.');
define('_IFYOUWEREREG','Quando sarai registrato potrai inviare tutti i commenti che vorrai in questo sito.');
define('_MODIFY','Modifica');
define('_COMPLETEVOTE1','Il tuo voto è gradito.');
define('_COMPLETEVOTE2','Hai già votato per questo argomento nei precedenti '.$anonwaitdays.' giorni.');
define('_COMPLETEVOTE3','Vota per un argomento solo una volta.<br />Tutti i voti sono registrati e valutati.');
define('_COMPLETEVOTE4','Non puoi votare un link inserito da te.<br />Tutti i voti sono registrati e valutati.');
define('_COMPLETEVOTE5','Nessuna valutazione selezionata - Nessun voto espresso');
define('_COMPLETEVOTE6','Solo un voto per indirizzo IP è permesso ogni '.$outsidewaitdays.' giorni.');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_EZTRANSFERDOWNLOAD','Trasferisci');
define('_DELEZDOWNLOADSCATWARNING','AVVERTIMENTO : Sei sicuro di voler cancellare questa categoria? Cancellerai anche tutte le sotto categorie ed appartenenti downloads!');
define('_DELCONTENTCAT','AVVERTIMENTO: Sei sicuro di voler cancellare questa categoria? Le pagine sotto questa cetegoria, se esistenti, non verranno eliminate, ma non faranno parte di nessuna categoria.');
define('_DELCATEGORY','Cancella Categoria');
define('_DOWNLOADTITLE','Titolo Download');
define('_DOWNLOADSINDB','Downloads nel nostro database');
define('_DOWNLOADSWAITINGVAL','Downloads in Attesa di Validazione');
define('_CLEANDOWNLOADSDB','Azzera i Voti dei Downloads');
define('_BROKENDOWNLOADSREP','Segnalazione Errori Downloads');
define('_DOWNLOADMODREQUEST','Richieste Modifiche Downloads');
define('_ADDNEWDOWNLOAD','Aggiungi un Nuovo Download');
define('_MODDOWNLOAD','Modifica un Download');
define('_WEBDOWNLOADSADMIN','Amministrazione Web Downloads');
define('_DNOREPORTEDBROKEN','Nessuna Segnalazione per downloads errati.');
define('_DUSERREPBROKEN','Downloads Errati Segnalati dagli Utenti');
define('_DIGNOREINFO','Ignora (ignora tutte le <b><i>richieste</i></b> per un determinato download)');
define('_DDELETEINFO','Delete (cancella il <b><i>download errato</i></b> e le relative <b><i>richieste</i></b> per un determinato download)');
define('_DOWNLOADOWNER','Proprietario Download');
define('_DUSERMODREQUEST','Richieste da Utenti per Downloads da Modificare');
define('_DOWNLOADVALIDATION','Validazione Download');
define('_CHECKALLDOWNLOADS','Controlla TUTTI i Downloads');
define('_VALIDATEDOWNLOADS','Downloads Validati');
define('_NEWDOWNLOADADDED','Nuovo Download aggiunto nel Database');


////////////////////////////////////////////////////////////////////
///////////////// *** NEW TERMS *** ////////////////////////////////
///////////////////////////////////////////////////////////////////

// Misc
define('_DLP_INACTIVE','Non attivo');
define('_DLP_PENDING','In approvazione');
define('_DLP_NEW','Nuovo!');
define('_DLP_UPD','Aggiornato!');
define('_DLP_SHORTDESC','Breve descrizione');
define('_DLP_GO2DL','Vai all\'ultimo download');
define('_DLP_ROOT','Principale');
define('_DLP_PAGE','Pagina');
define('_DLP_BACK2TOP','Torna all\'inizio');
define('_DLP_ASC','Ascendente');
define('_DLP_DESC','Discendente');
define('_DLP_PUBLISHED','Pubblicato');
define('_DLP_UPDATED','Aggiornato');
define('_DLP_SUBCAT','Sottocategoria');
define('_DLP_SUBCATS','Sottocategorie');
define('_DLP_LASTADD','Ultima Aggiunta');
define('_DLP_SUB','Sotto');
define('_DLP_APPROVE','Approva');
define('_DLP_REJECT','Rifiuta');
define('_DLP_CLOSEWINDOW','Chiudi finestra');
define('_DLP_SCREENSHOTS','Anteprime');
define('_DLP_NOSCREENSHOTS','Nesusno screenshot');
define('_DLP_ALLCATS','Tutte le categorie');
define('_DLP_SUBMITTEDTO','Inviato da');
define('_DLP_EDITDL','Modifica download');
define('_DLP_ALLFIELDSRQR','Tutti i campi sono richiesti a meno che non sia dichiarato il contrario.');
define('_DLP_XML','XML syndication');
define('_DLP_SORT','Ordina');

// Fonti non raggiungibili
define('_DLP_REPORTBROKEN','Segnala fonte corrotta');
define('_DLP_BRKNGIVEINFO','Per favore, dacci qualche informazione sul problema che hai riscontrato con questa fonte. Le informazioni utili includono:');
define('_DLP_BRKNINFODATE','Data e ora in cui hai provato a scaricare il file');
define('_DLP_BRKNRESPCODE','Codice d\'errore (es. 404, 500)');
define('_DLP_BRKNFIRSTTIME','Se è la prima volta che hai problemi con questa fonte');
define('_DLP_BRKNTHANKS','Grazie per le informazioni. Controlleremo il tuo report al più presto.');

// MD5
define('_DLP_MD5UPDATE','Aggiorna MD5 sum per fonti remote');
define('_DLP_MD5UPDATED','MD5 sum aggiornato');
define('_DLP_MD5NOTREM','Questo form è solo per le fonti con hosting remoto. Fonti caricate genereranno automaticamente MD5 sums');

// Fonti
define('_DLP_MIRRORACTIVE','La fonte è già attiva');
define('_DLP_MIRRORAPP','Fonte approvata');
define('_DLP_MIRRORREJ','Fonte rifiutata');

// Errori
define('_DLP_FIXERRORS','Per favore correggi i seguenti errori prima di continuare');
define('_DLP_RQR','%s è richiesto');
define('_DLP_INACTIVEDL','Il download non è attivo');
define('_DLP_UNKNOWNDL','Il download non può essere trovato');
define('_DLP_DLFORBIDDEN','Non sei abilitato a scaricare questo file');
define('_DLP_FILEINLIST','L\' URL/screenshot che hai provato ad aggiungere è già nella tua lista');
define('_DLP_FILEEXISTS','L\' URL/screenshot che hai provato ad aggiungere è già in un altro download');
define('_DLP_FILEASSOC','L\' URL/screenshot che hai provato ad aggiungere esiste già e è associato con <a href="%s">questo</a> download');
define('_DLP_FAIL2GETINFO','La richiesta di informazioni sul file %s è fallita ');
define('_DLP_INVALIDFNAME','%s non è un nome vali per il file');
define('_DLP_ISWEBSITE','%s è un sito e non un file');
define('_DLP_FILETOOBIG','La dimensione del file è più grende del massimo: %s');
define('_DLP_FILETOOSMALL','La dimensione del file è troppo piccola');
define('_DLP_EXTFORBIDDEN','L\'estensione non è permessa');
define('_DLP_FILEERROR','É avvenuto un errore durante la processazione del tuo file/screenshot');
define('_DLP_INVALIDFILE','File/immagine non valido');
define('_DLP_REGISTER2DL','Devi essere un utente <a href="'.getlink('Your_Account').'">registrato</a> per scaricare questo file');
define('_DLP_ADMINDL','Questo download è disponibile solo per gli amministratori');
define('_DLP_GROUPDL','Questo download è disponibile solo per gli utenti del gruppo %s');

// Menu
define('_DLP_RANDOM','Casuale');
define('_DLP_HISTORY','Storico');
define('_DLP_PROMOTE','Promuovi');
define('_DLP_WRITEREVIEW','Scrivi una recensione');
define('_DLP_MYDL','I miei Downloads');

// Menù Amministratore
define('_DLP_CONFIG','Configurazione');
define('_DLP_CFIELDS','Campi personalizzati');
define('_DLP_PENDDL','Download in approvazione');
define('_DLP_PENDMIR','Fonti in approvazione');
define('_DLP_BRMIR','Fonti non raggiungibili');

// Voti
define('_DLP_NRATED','Non votato');
define('_DLP_RUBBISH','Spazzatura');
define('_DLP_BELOWAVG','Quasi sufficiente');
define('_DLP_AVG','Sufficiente');
define('_DLP_GOOD','Buono');
define('_DLP_VGOOD','Molto buono');
define('_DLP_EXCELLENT','Eccellente');

// Popolarità
define('_DLP_NPOPULAR','Non popolare');
define('_DLP_SBAVG','Un po\'sotto la media ');
define('_DLP_POPULAR','Popolare');
define('_DLP_VPOPULAR','Molto popolare');

// Dettagli
define('_DLP_SUBMITTEDBY','Inviato da');
define('_DLP_ISDLOWNER','Tu amministri questo download; puoi quindi <a href="%s">modificarlo</a> in ogni momento');
define('_DLP_MIRSUB','<a href="%s">Aggiungi la tua fonte</a> a questo download');
define('_DLP_EDNOTE','Note dell\'Editore');
define('_DLP_MEMREVIEWS','Recensioni degli utenti');
define('_DLP_PENDREVIEWS','Recensioni in approvazione');
define('_DLP_VIEWALLSCREENS','Mostra tutte le anteprime');
define('_DLP_PAGEVIEWS','Pagine visualizzate');
define('_DLP_EDPICK','Selezione dell\'Editore');
define('_DLP_DLNOW','Scarica Ora');
define('_DLP_NADL','Non sei abilitato a scaricare file');
define('_DLP_REVIEW','Recensione');

// Fonti Irraggiungibili
define('_DLP_DOWNLOAD','Download');
define('_DLP_MIRROR','Fonte');
define('_DLP_OWNEDBY','Posseduta da');
define('_DLP_REPSUBMITTER','Rapporto inviato da');
define('_DLP_REPDISMISS','Dismetti rapporto');
define('_DLP_REPNOTIFY','Notifica a propietario');
define('_DLP_REPREM','Rimuovi Fonte');

// Campi personalizzati
define('_DLP_CHANGESSAVED','Le tue modifiche son state salvate');
define('_DLP_FNAMEFORBIDDEN','Il nome del campo "%s" non è abilitato');
define('_DLP_FSIZEFORBIDDEN','La dimensione del campo dev\' essere nel range');
define('_DLP_FIELDADDED','Il campo "%s" è stato aggiunto');
define('_DLP_FIELDPERMANENT','Questo campo non può essere rimosso');
define('_DLP_FIELDREMOVED','Il campo "%s" è stato rimosso');
define('_DLP_REMFIELD','Rimuovi campo');
define('_DLP_REMFIELDCONF','Sei sicuro di voler rimuovere il campo "%s"?');
define('_DLP_ADDFIELD','Aggiungi campo');
define('_DLP_FIELDNAME','Nome del campo');
define('_DLP_FIELDTYPE','Tipo di campo');
define('_DLP_FTYPETEXT','Testo');
define('_DLP_FTYPETEXTAREA','Area del testo');
define('_DLP_FTYPEIMG','Immagine');
define('_DLP_FIMGPATH','Indirizzo immagine');
define('_DLP_FIMGONLY','Solo per tipo di campo <em>immagine</em>');
define('_DLP_FIMGALT','Testo alternativo immagine');
define('_DLP_FIELDSIZE','Dimensione campo');
define('_DLP_FSIZEONLY','per tipi di campo <em>immagine</em> e <em>si/no</em> , usa 0 per NO e 1 per SI');
define('_DLP_EDITFIELD','Modifica campo');
define('_DLP_FIELD','Campo');
define('_DLP_FORMDISPLAY','Mostra Form');
define('_DLP_VISIBLE','Visibile');
define('_DLP_REQUIRED','Richiesto');
define('_DLP_ADMINONLY','Solo amministratore');