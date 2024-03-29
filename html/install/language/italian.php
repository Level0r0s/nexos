<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | block-Sample.php - Example NexOS block file                       |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      |
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |
  +-------------------------------------------------------------------+
*/
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/install/language/italian.php,v $
  $Revision: 10.1 $
  $Author: djmaze $
  $Date: 2010/11/11 17:31:44 $
**********************************************/
if (!defined('INSTALL')) { exit; }

$instlang['installer'] = 'Installer';
$instlang['langselect'] = 'Scegli la lingua';
$instlang['langselect'] = 'Select language';
$instlang['s_progress'] = 'Progresso d\'installazione';
$instlang['s_license'] = 'Licenza';
$instlang['s_server'] = 'Check server';
$instlang['s_setconfig'] = 'Set config.php';
$instlang['s_builddb'] = 'Creazione database';
$instlang['s_gather'] = 'Raccogli info importanti';
$instlang['s_create'] = 'Crea il super amministratore  ';
$instlang['welcome'] = 'Benvenuti su Dragonfly!';
$instlang['info'] = 'Questa procedura d\'installazione vi guiderà in meno di un minuto nella messa a punto del fighissimo Dragonfly '.CPG_NUKE.' nel tuo sito web.<br />L\'installazione costruirà automaticamente il database necessario ed il primo utente oppure aggiornerà il tuo attuale CPG o PHP-Nuke.';
$instlang['click'] = 'Clicca su "Confermo" se accetti la seguente licenza:';
//$instlang['license'] = 'Le modifiche e le cure fatte da CPG-Nuke Dev Team non dovrebbero essere usate su nessuna versione Nuke, o basata sulla stessa, su nessun sito web che richieda pagamento, registrazione o un compenso per l\'installazione, supporto o download della licenza GPL per il software senza che il compenso sia stato approvato da CPG-Nuke Dev Team i quali hanno preso con responsabilità questa considerevole e distinguibile riscrittura.<br /><b>Questo significa che non puoi vendere il nostro codice come parte di qualsiasi versione commerciale.</b>';
$instlang['license_edited'] = 'La tua licenza è stata modifica. Contatta immediatamente il Team Development a dragonflycms.com. Grazie.';
$instlang['no_zlib'] = 'Il tuo server non supporta la Compressione Zlib. Per questo motivo non è puoi leggere la nostra licenza in questa pagina. Controlla GPL.txt distribuito con CPG-Nuke e dopo clicca "Confermo" quì in basso';
$instlang['agree'] = 'Confermo';
$instlang['next'] = 'Prosegui';

$instlang['s1_good'] = 'Siamo contenti che hai preso la santa decisione di usare Dragonfly '.CPG_NUKE;
$instlang['s1_already'] = 'Hai già precedentemente installato '.((CPG_NUKE < 9) ? 'CPG-Nuke' : 'Dragonfly').' <b>'.CPG_NUKE.'</b>.';
$instlang['s1_splatt'] = '<b>Attenzione</b> Il database del forum Splatt sarà cancellato! Se vuoi provare a riusarlo, allora salva le tabelle.<br />Mantieni il database del Forums Splatt? <select name="splatt" class="formfield"><option value="0">No</option><option value="1">Si</option></select>';
$instlang['s1_new'] = 'Non è stata rilevata nessuna versione precedente, quindi ne verrà installata una di nuova';
$instlang['s1_upgrade'] = 'La tua versione attuale è <b>%s</b>, e sarà aggiornata a Dragonfly '.CPG_NUKE.'<br /><b>Assicurati di avere un backup del tuo database.</b>';
$instlang['s1_unknown'] = 'Non è stato possibile determinare quale versione di CPG-Nuke/PHP-Nuke stai usando.<br />Non è possibile continuare l\'installazione.<br />Cortesemente contatta CPG Dev Team';
$instlang['s1_database'] = 'Questo è il resoconto dei dati che configureremo in config.php per la connessione al database';

$instlang['s1_dbconfig'] = 'Configurazione database';
$instlang['s1_server'] = 'Versione Server';
$instlang['s1_server2'] = 'La versione %s attualmente usata nel tuo server';
$instlang['s1_layer'] = 'Database SQL';
$instlang['s1_layer2'] = 'Il database SQL da usare con il tuo sito';
$instlang['s1_host'] = 'Hostname';
$instlang['s1_host2'] = 'Il nome DNS oppure IP del server dove si trova il database SQL';
$instlang['s1_username'] = 'Nome utente';
$instlang['s1_username2'] = 'Il nome utente usato pe la connessione al server SQL';
$instlang['s1_password'] = 'Password';
$instlang['s1_password2'] = 'La password del nome utente per la connessione al server SQL ';
$instlang['s1_dbname'] = 'Nome del database';
$instlang['s1_dbname2'] = 'Il nome del database che contiene le tabelle ed i dati desiderati';
$instlang['s1_prefix'] = 'Prefisso tabelle';
$instlang['s1_prefix2'] = 'Il prefisso da usare per i nomi delle tabelle';
$instlang['s1_userprefix'] = 'Prefisso tabella utenti';
$instlang['s1_userprefix2'] = 'Il prefisso per la tabella che contiene tutti i dati relativi agli utenti';
$instlang['s1_directory_write'] = 'Permesso di Scrittura Cartelle';
$instlang['s1_directory_write2'] = 'Cartelle che hanno bisogno del permesso di scrittura dove salvare informazioni come le immagini che verranno caricate.<br />Se una fallisce allora "CHMOD 777" la cartella';
$instlang['s1_dot_ok'] = 'OK';
$instlang['s1_dot_failed'] = 'Fallito ma non critico';
$instlang['s1_dot_critical'] = 'Critico';

$instlang['s1_server_settings'] = 'Server settings';
$instlang['s1_setting'] = 'setting';
$instlang['s1_preferred'] = 'preferred';
$instlang['s1_yours'] = 'yours';
$instlang['s1_on'] = 'On';
$instlang['s1_off'] = 'Off';
$instlang['s1_leo_available'] = 'LEO available';
$instlang['s1_yes'] = 'Yes';
$instlang['s1_no'] = 'No';

$instlang['s1_cache'] = 'Cache';
$instlang['s1_cache2'] = 'Conserva settaggi e template nella cache per velocizzare la generazione delle pagine';
$instlang['s1_avatars'] = 'Avatars';
$instlang['s1_avatars2'] = 'Quando gli utenti hanno il permesso di caricare il loro avatar personale, saranno depositati in questa cartella';
$instlang['s1_albums'] = 'Albums';
$instlang['s1_albums2'] = 'Conterrà tutte le immagini provenienti dalla Galleria Fotografica caricate tramite FTP o qualsiasi altro metodo';
$instlang['s1_userpics'] = 'Userpics';
$instlang['s1_userpics2'] = 'Dove verranno depositate tutte le sotto-cartelle appartenenti agli utenti e dove poi verranno ospitate le loro immagini';
$instlang['s1_config'] = 'Includes';
$instlang['s1_config2'] = 'Stores core files needed to run the CMS';

$instlang['s1_correct'] = 'Se le informazioni sono corrette possiamo cominciare a costruire il database';
$instlang['s1_fixerrors'] = 'Cortesemente ripara gli errori qui sotto elencati';
$instlang['s1_fatalerror'] = 'Per favore contatta CPG-Nuke Dev Team descrivendo il tuo errore<br />Non puoi continuare l\'installazione';
$instlang['s1_build_db'] = 'Cominciamo a costruire il database';
$instlang['s1_necessary_info'] = 'Informazioni Necessarie';
$instlang['s1_php'] = '<p style="color:#FF0000; font-style:bold">Non possiamo garantirti che Dragonfly funzionerà alla perfezione a causa della vecchia versione di PHP che stai usando<br />Domanda cortesemente all\'amministratore del tuo server di aggiornare PHP alla versione 4.3.10 oppure 5.0.3 o superiori</p>';
$instlang['s1_mysql'] = '<p style="color: #FF0000; font-style: bold;">Siamo spiacenti, supportiamo solo MySQL 4 o successive<br />Domanda cortesemente all\'amministratore del tuo server di aggiornare MySQL alla versione 4 o superiori</p>La versione attualmente usata è: %s';
$instlang['s1_donenew'] = 'Il database è stato installato correttamente, cominciamo con il configurare alcune informazioni necessarie!';
$instlang['s1_optimiz'] = 'Analizzando e ottimizzando il database. In base alla grandezza del tuo database potrebbe richiere lunghi tempi di esecuzione';
$instlang['s1_doneup'] = 'Il database è stato aggiornato con successo, divertiti con l\'incredibile Dragonfly!<br /><h2>Rimuovi install.php e la cartella install in questo preciso momento!</h2>';
$instlang['s1_trying_to_connect'] = 'Trying to connect to SQL server';
$instlang['s1_wrong_database_name'] = 'You need to choose a different database name.<br />Sorry for the inconvenience but you cannot continue with the installation with "<b>public</b>" as database name.';
$instlang['s1_fail_create_database'] = 'Failed to create the database %s';
$instlang['s1_save_conf_succeed'] = 'Saving configuration succeeded';
$instlang['s1_save_conf_failed'] = 'Saving configuration failed';
$instlang['s1_db_connection_succeeded'] = 'Database connection succeeded';

$instlang['s2_info'] = 'Cominciamo con il configurare le informazioni necessarie:';
$instlang['s2_error'] = 'Tutte le informazioni devono essere inserite.';
$instlang['s2_account'] = 'Informazioni necessarie inserite. Continuiamo con il configurare il primo utente!';
$instlang['s2_create'] = 'Crea Utente';

$instlang['s2_domain'] = 'Nome Dominio';
$instlang['s2_domain2'] = 'Il Nome Dominio è praticamente dove risiede il tuo sito animato da Dragonfly, per esempio <i>www.forzamilan.it</i>';
$instlang['s2_path'] = 'Percorso';
$instlang['s2_path2'] = 'Esatto percorso dove risiede Dragonfly, per esempio <i>/html/</i>';
$instlang['s2_email2'] = 'Email principale usata dal sito web per ricevere informazioni';
$instlang['s2_session_path'] = 'Percorso Salvataggio Sessione';
$instlang['s2_session_path2'] = 'Questo è il percorso dove verranno salvati i dati.<br />Devi cambiare questo valore per usare la funzione di Dragonfly relativa alle sessioni.<br />Il percorso deve essere accessibile da PHP come /home/forzalazio/tmp/sessiondata e sicuramente CHMOD 777.';
$instlang['s2_cookie_domain'] = 'Dominio Cookie';
$instlang['s2_cookie_domain2'] = 'Il dominio intero, o top-level, usato dai cookie, per esempio <i>forzanapoli.it</i> o lascialo vuoto';
$instlang['s2_cookie_path'] = 'Percorso Cookie';
$instlang['s2_cookie_path2'] = 'Indirizzo web dove restringere i cookie, per esempio <i>/html/</i>';
$instlang['s2_cookie_admin'] = 'Nome Cookie Admin';
$instlang['s2_cookie_admin2'] = 'Il nome del cookie dove verranno salvate informazioni relative al login degli amministratori di questo sito';
$instlang['s2_cookie_member'] ='Nome Cookie Utente';
$instlang['s2_cookie_member2'] = 'Il nome del cookie dove verranno salvate informazioni relative al login degli utenti di questo sito';
$instlang['s2_cookie_cpg'] = 'Nome Cookie Galleria Fotografica';
$instlang['s2_cookie_cpg2'] = 'Il nome del cookie dove verranno salvate le specifiche informazioni della galleria fotografica di questo sito';

$instlang['s2_error_email'] = 'Incorretto indirizzo email';
$instlang['s2_error_empty'] = 'Alcuni campi sono stati lasciati in bianco';
$instlang['s2_error_cookiename'] = 'Nome cookie incorretto';
$instlang['s2_error_cookiesettings'] = 'Parametri cookie incorretti';
$instlang['s2_error_sessionsettings'] = 'Parametri sessione errati';

$instlang['s2_cookietest'] = 'Prima di procedere tenteremo ad analizzare i settaggi da te specificati.';
$instlang['s2_test_settings'] = 'Analisi Settaggi';

$instlang['s3_sync_schema'] = 'Synchronizing Database Schema';
$instlang['s3_sync_data']   = 'Synchronizing Database Data';
$instlang['s3_exec_queries'] = 'Executing the queries';
$instlang['s3_nick2'] = 'Il nome che userai per entrare in questo sito come amministratore';
$instlang['s3_email2'] = 'Il tuo indirizzo email';
$instlang['s3_pass2'] = 'La password che userai per entrare in questo sito. Potrai usare qualsiasi carattere';
$instlang['s3_timezone'] = 'Fuso Orario';
$instlang['s3_timezone2'] = 'Il fuso orario con il quale vedrai i messaggi inseriti';

$instlang['s3_warning'] = 'Assicurati che nella tua password siano compresi almeno: 1 lettera maiuscola, 1 lettera minuscola ed 1 numero.';
$instlang['s3_finnish'] = '<h2>Installazione di Dragonfly '.CPG_NUKE.' nel tuo webserver completata.<br />Rimuovi install.php e la cartella install in questo preciso momento!<br />Solo dopo potrai essere sicuro di avere quintali di divertimento!</h2><a href="'.$adminindex.'" style="font-size: 14px;">Entrata al mio sito per le rimanenti configurazioni</a>';
