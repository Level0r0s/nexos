<?php

/**************************************************************************/
/* Your_Account Module                                                    */
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG Dev Team
  http://cpgnuke.com

  Under the GNU General Public License version 2*/
/* Last modification notes:                                               */
/* $Id: lang-italian.php,v 1.2 2004/10/04 19:16:41 akamu Exp $        */
/*  UTF-8                                                                      */
/* Please change the second quoted phrase, not the capitalized one        */
/* If you need to use double quotes (") remember to add a backslash (\),  */
/* so your entry will look like: This is \"double quoted\" text.          */
/* Try to stay as close to the meaning of the english phrase.             */
/**************************************************************************/

//lang_translation_info

define("_REQUIREADMIN", "Require Admin Approval");
define("_ACTALLOWREG", "Consenti Registrazione Utenti");
define("_ACTNOTIFYADD", "Notify Admin of User Registration");
define("_ACTALLOWDELETE", "Consenti auto-cancellazione Utenti");
define("_ACTNOTIFYDELETE", "Notify Admin of User Deletion");
define("_ACTALLOWTHEME", "Consenti Selezione Tema agli Utenti");
define("_ACTALLOWMAIL", "Consenti Cambio Email agli Utenti");
define("_SERVERMAIL", "Serve può spedire posta");
define("_USEACTIVATE", "Usa Attivazione Utente Tramite Email");
define("_USEREGISTERMSG", "Usa Accordo di Registrazione");

define("_MA_HIDDEN", "Nascosto");
define("_MA_VISIBLE", "Visibile");
define("_MA_REQUIRED", "Richiesto");

// User Registration Config
define("_MA_PROFILE_INFO", "Informazione Profilo");
define("_MA_ADDITIONAL", "Informazioni Aggiountive");
define("_MA_REALNAME", "Nome Reale");
define("_MA_FAKEMAIL", "Email Falsa");
define("_MA_HOMEPAGE", "Home Page");
define("_MA_ICQ", "Numero ICQ");
define("_MA_AIM", "Indirizzo AIM");
define("_MA_YIM", "Yahoo Messenger");
define("_MA_MSNM", "MSN Messenger");
define("_MA_LOCATION", "Location");
define("_MA_OCCUPATION", "Professione");
define("_MA_INTERESTS", "Interessi");
define("_MA_SIGNATURE", "Firma");
define("_MA_EXTRAINFO", "Informazioni Extra");
define("_MA_PREFERENCES", "Preferenze");
define("_MA_TIMEZONE", "Fuso Orario");
define("_MA_DATEFORMAT", "Formato Data");
define("_MA_RECEIVENEWSLETTER", "Ricevi la Newsletter");
define("_MA_SHOWEMAIL", "Visualizza la mia Email");
define("_MA_SHOWONLINE", "Visualizzami Online");
define("_MA_ALLOWBBCODE", "Permetti Sempre BBCode");
define("_MA_ALLOWHTML", "Permetti Sempre HTML");
define("_MA_ALLOWSMILIES", "Abilita Sempre le Faccine");
define("_MA_NOTIFYREPLY", "Avvisami se ricevo risposte");
define("_MA_NOTIFYPM", "Avvisami via Email per nuovi Messaggi Privati");
define("_MA_POPUPPM", "Pop up window on new Private Message");
define("_MA_ATTACHSIG", "Attacca Sempre la mia Firma");
define("_MA_PRIVATE", "Informazioni Private");
define("_MA_FIRSTNAME", "Nome");
define("_MA_LASTNAME", "Cognome");
define("_MA_GENDER", "Genere");
define("_MALE", "Maschile");
define("_FEMALE", "Femminile");
define("_MA_BIRTHDAY", "Data di Nascita");
define("_MA_BIRTHDAYMSG", "Scrivila come mese/giorno/anno");
define("_MA_TELEPHONE", "Numero Telefonico");
define("_MA_FAX", "Numero Fax");
define("_OSC_NEWSLETTER", "Ricevi Newsletter Commerciali");
define("_OSC_NEWSLETTERMSG", "This is a seperate e-mail about new shop items and discounts");

// License agreement
define("_BOUNDREGISTRATION", "By clicking Register below you agree to be bound by these conditions.");
define("_MA_REGISTRATION", "Accettazione dei Termini di Registrazione");
define("_MA_AGREE_OVER_13", "I Agree to these terms and am <b>over</b> or <b>exactly 13</b> years of age");
define("_MA_AGREE_UNDER_13", "I Agree to these terms and am <b>under</b> 13 years of age");
define("_MA_DO_NOT_AGREE", "I do not agree to these terms");

// Registration form
define("_MA_REGISTRATION_INFO", "Informazioni di Registrazione");
define("_MA_ITEMS_REQUIRED", "Items marked with a * are required unless stated otherwise.");
define("_MA_PROFILE_INFO_NOTICE", "This information will be publicly viewable");
define("_USERNAME", "Nome Utente");
define("_EMAILADDRESS", "Indirizzo Email");
define("_BLANKFORAUTO", "Lascia in bianco per ricevere una password auto generata");
define("_CONFIRMPASSWORD", "Conferma la Password");
define("_SUBMIT", "Submit");
define("_RESET", "Reset");
define("_MA_FAKEMAILMSG", "(This Email will be public. Just type what you want, Spam proof)");
define("_MA_DATEFORMATMSG", "The syntax used is identical to the PHP <a href=\"http://www.php.net/date\">date()</a> function");
define("_MA_SIGNATUREMSG", "This is a block of text that can be added to posts you make. There is a 255 character limit");
define("_MA_NOTIFYREPLYMSG", "Sends an email when someone replies to a topic you have posted in. This can be changed whenever you post");
define("_MA_POPUPPMMSG", "Will open a new popup window to inform you when new private messages arrive");

// config options
define("_ACTDISABLED", "This function has been <b>DISABLED</b> by the site admin.");

// Register steps
define("_USERFINALSTEP", "User Registration: Final Step");
define("_USERCHECKDATA", "please check the following information. If all is correct you can proceed with the registration by clicking on \"Finish\" button, otherwise \"Go Back\" and change whatever information is needed.");
define("_YOURPASSWORD", "Your Password is");
define("_YOUWILLRECEIVE", "You will receive a confirmation email with a link to a page you should visit to activate your account in the next 24 hours.");
define("_YOUWILLRECEIVE2", "You will receive an email with login information.");
define("_WAITAPPROVAL", "The site Administrator will review your application and send you an activation link if you are approved.");
define("_FINISH", "Finish");

// Register finish
define("_YOUUSEDEMAIL", "You or someone else has used your email account");
define("_TOREGISTER", "to register an account at");
define("_USERREGLOGIN", "User Registration/Login");
define("_USERAPPLOGIN", "User Application/Login");
define("_ACCOUNTCREATED", "New User Account Created!");
define("_YOUAREREGISTERED", "Welcome! You are now registered as a member.");
define("_FINISHUSERCONF", "Your request for a new account has been processed. You'll receive an email in the next few seconds with a activation link that should be visited in the next 24 hours to be able to activate your account.");
define("_FINISHUSERCONF2", "Your request for a new account has been processed. You can now ");
define("_FINISHUSERCONF3", "login here");
define("_TOFINISHUSER", "To finish the registration process you should visit the following link in the next 24 hours to activate your user account, otherwise the information will be automaticaly deleted by the system and you should apply again:");
define("_ACTIVATIONSUB", "User Account Activation");
define("_REGISTRATIONSUB", "User Account Registration");
define("_THANKSUSER", "Thank you for registering at");
define("_FOLLOWINGMEM", "Following is the member information:");
define("_TOAPPLY", "to apply for an account at");
define("_APPLICATIONSUB", "User Account Application");
define("_YOUAREPENDING", "Welcome! Your application as a new member is pending. The site administrator will contact you when your application is processed.");
define("_THANKSAPPL", "Thank you for appling at");
define("_MEMADD", "Member Added");
define("_MEMAPL", "Member Applied");

// Register errors
define("_ERRORINVEMAIL", "ERROR: Invalid Email");
define("_NICK2SHORT", "Nickname is too short. It must be more than 3 characters");
define("_SECCODEINCOR", "Security Code is incorrect, Please go back and type it exactly as given...");
define("_ERROREMAILSPACES", "ERROR: Email addresses do not contain spaces");
define("_ERRORINVNICK", "ERROR: Invalid Nickname");
define("_NICK2LONG", "Nickname is too long. It must be less than 26 characters");
define("_NAMERESERVED", "ERROR: This Name is Reserved");
define("_NAMEDENIED","ERROR: This part of your chosen user name may not be used :");
define("_NICKNOSPACES", "ERROR: There cannot be any spaces in the Nickname");
define("_NICKTAKEN", "ERROR: Nickname already taken");
define("_EMAILREGISTERED", "ERROR: Email address already registered");
define("_PASSDIFFERENT", "Both passwords are different. They need to be identical.");
define("_YOUPASSMUSTBE", "Your Password must be");
define("_CHARLONG", "characters long");
define("_ACCOUNTRESERVED", "New User Account Reserved!");
define("_EMAILNOTUSABLE", "ERROR: Email address is not usable");

// User activation
define("_ACTIVATIONYES", "User Activation");
define("_ACTMSG", "Your account has been activated. Please login from <a href=\"getlink()\">this link</a> using your assigned Username and Password.");
define("_ACTIVATIONERROR", "User Activation Error");
define("_ACTERROR1", "User verification number is invalid.<br><br>Please be sure to click on the link you received by email or apply for a new account <a href=\"getlink()\">here</a>.");
define("_ACTERROR2", "There is no user in the database with this information.<br><br>You can register a new user from <a href=\"getlink()\">here</a>.");

// Edit user profile
define("_CURRENTPASSWORD", "Current password");
define("_CURRENTPASSWORDMSG", "You must confirm your current password if you wish to change it or alter your e-mail address");
define("_NEWPASSWORD", "New password");
define("_NEWPASSWORDMSG", "You only need to supply a password if you want to change it");
define("_CONFIRMPASSWORDMSG", "You only need to confirm your password if you changed it above");
define("_SUREDELETE", "Are you sure you want to delete your account?");
define("_CURRENT_IMAGE", "Current Image");
define("_DELETE_IMAGE", "Delete Image");
define("_AVATAR_CONTROL", "Avatar control panel");
define("_AVATAR_INFO", "Displays a small graphic image below your details in posts. Only one image can be displayed at a time, its width can be no greater than 80 pixels, the height no greater than 80 pixels, and the file size no more than 6 KB.");
define("_AVATAR_OFFSITE","Link to off-site Avatar");
define("_AVATAR_OFFSITEMSG","Enter the URL of the location containing the Avatar image you wish to link to.");
define("_AVATAR_SELECT", "Select Avatar from gallery");
define("_SHOW_GALLERY", "Show gallery");
define("_AVATAR_UPLOAD", "Upload Avatar from your machine");

// Avatar section
define("_AVATAR_GALLERY", "Avatar gallery");
define("_CATEGORY_SELECT", "Select category");
define("_SELECT_AVATAR", "Select avatar");
define("_CANCEL_AVATAR", "Cancel avatar");

// Profile page
define("_THISISYOURPAGE", "Questa &egrave; la tua pagina personale");
define("_PERSONALINFO", "Informazioni Personali");
define("_ABOUT_USER", "All about ");
define("_CONTACTINFO", "Contact Information");
define("_PM", "Private Message");
define("_JOINED", "Joined");
define("_RANK", "Rank");
define("_LAST10BBTOPIC", "Last 10 Forum Topics");
define("_LAST10BBTOPICS", "Last 10 Forum Topics started by");
define("_LAST10COMMENT", "Last 10 Comments");
define("_LAST10DOWNLOAD", "Last 10 Downloads");
define("_LAST10DOWNLOADS", "Last 10 Downloads by");
define("_LAST10SUBMISSION", "Last 10 News Submissions");
define("_LAST10WEBLINK", "Last 10 Web Links");
define("_LAST10WEBLINKS", "Last 10 Web Links by");
define("_MEMBERGROUPS", "Group Memberships");
define("_AVATAR", "Avatar");
define("_WEBSITE", "Sito Web");
define("_LOCATION", "Residenza");
define("_OCCUPATION", "Occupazione");
define("_INTERESTS", "Interessi");
define("_SIGNATURE", "Firma");

define("_USERSTATUS", "Attuale Status Utente");
define("_ONLINE", "Online");
define("_OFFLINE", "Offline");
define("_NOTSUBSCRIBED", "non sei iscritto alla nostra Newsletter");
define("_SUBSCRIBED", "Sei iscritto alla nostra Newsletter");

define("_BROADCAST", "Broadcast Public Message");
define("_BROADCASTTEXT", "You can send a <i>Public Message</i> from here (255 characters max). This message will be displayed to all online users in the next 10 minutes. Any user online will see you message just once in a red bar under the site's logo. Any user can deactivate this feature from <a href=\"modules.php?name=Your_Account&amp;op=edithome\">here</a>. Please don't abuse. HTML code isn't allowed here.");
define("_SEND", "Send");
define("_BROADCASTSENT", "Your Broadcast Message has been sent.");
define("_BROADCASTNOTSENT", "<b>ERROR:</b> Your Broadcast Message is empty or you already sent a message recently. To publish another message you need to wait about 10 minutes.");
define("_RETURNPAGE", "Return to your personal page");

define("_MYHEADLINES", "My Headlines");
define("_SELECTASITE", "Select the site from which you want to read the headlines:");
define("_SELECTASITE2", "Select a Web Site");
define("_ORTYPEURL", "Or type the headlines RSS/XML url of your prefered site:");
define("_GO", "Go");
define("_HEADLINESFROM", "Headlines from");

define("_READMYJOURNAL", "Read My Journal");

// Errors
define("_ACCDELETED", "Account has been Deleted");
define("_SERVERNOMAIL", "This server does not have mail access. Please contact the site admin for assistance.");
define("_ACCSUSPENDED", "Account has been Suspended");
define("_BESUREACT", "Be sure you have activated your account.");
define("_MEMDEL", "Member Deleted");
define("_YOUBAD", "ERROR: You have attempted to perform an illegal operation!");
define("_NOINFOFOR", "Non ci sono info disponibili per");
define("_SORRYNOUSERINFO", "Spiacenti, nessun utente corrispondente trovato nel database");
define("_LOGININCOR", "Login Incorretto! Riprova...");
define("_UPDATEFAILED", "Impossibile aggiornare utente. Contatta l'Amministratore.");

// Navbar
define("_ACCTCHANGE", "Change<br>Info");
define("_ACCTCOMMENTS", "Comments<br>Setup");
define("_ACCTEXIT", "Logout<br>Exit");
define("_ACCTHOME", "Change<br>Home");
define("_ACCTJOURNAL", "Your<br>Journals");
define("_ACCTTHEME", "Select<br>Theme");
define("_CHANGEHOME", "Cambia Home");
define("_CHANGEYOURINFO", "Cambia Tue Info");
define("_CONFIGCOMMENTS", "Setup Commenti");
define("_DELETEACCT", "Delete<br>Account");
define("_LOGOUTEXIT", "Logout/Esci");
define("_MESSAGES", "Messages");
define("_RETURNACCOUNT", "Return to Your Account Page");
define("_SELECTTHETHEME", "Seleziona Tema");

// Admin area
define("_DELETEREASON", "Reason for Deletion");
define("_SUSPENDREASON", "Reason for Suspension");
define("_DENYREASON", "Reason for Denial");
define("_CHECKNUM", "Activation #");
define("_REGDATE", "Date Added");
define("_ACCTAPPROVE", "Account Approved");
define("_ACCTDELETE", "Account Deleted");
define("_ACCTDENY", "Account Denied");
define("_ACCTREMOVE", "Account Removed");
define("_ACCTRESTORE", "Account Restored");
define("_ACCTSUSPEND", "Account Suspended");
define("_ACTIVEUSERS", "Active Users");
define("_ADDUSER", "Add a New User");
define("_ADDUSERBUT", "Add User");
define("_ALLOWUSERS", "Allow other users to view my email address");
define("_APPROVE", "Approve");
define("_APPROVEUSER", "Approve User");
define("_DELETEUSER", "Delete User");
define("_DELETEUSERS", "Deleted Users");
define("_DENY", "Deny");
define("_DENYUSER", "Deny User");
define("_DETUSER", "User Details");
define("_EDITUSER", "Edita Utente");
define("_FORCHANGES", "(For Changes Only)");
define("_FUNCTIONS", "Functions");
define("_HASAPPROVE", "has been approved.");
define("_HASDELETE", "has been deleted.");
define("_HASDENY", "has been denied.");
define("_HASREMOVE", "has been removed.");
define("_HASRESTORE", "has been restored.");
define("_HASSUSPEND", "has been suspended.");
define("_ID", "ID");
define("_MODIFY", "Modify");
define("_NAME", "Name");
define("_NEWSLETTER", "Newsletter");
define("_OK", "Ok!");
define("_OPTION", "Opzioni");
define("_OR", "or");
define("_PERMISSIONS", "Permissions");
define("_PROMOTE", "Promote");
define("_PROMOTEUSER", "Promote User");
define("_REMOVE", "Remove");
define("_REMOVEUSER", "Remove User");
define("_REQUIREDNOCHANGE", "(required, can't be changed later)");
define("_RESEND", "Resend");
define("_RESENDMAIL", "Resend Activation Email");
define("_RESTORE", "Restore");
define("_RESTOREUSER", "Restore User");
define("_RETYPEPASSWD", "Retype Password");
define("_SAVECHANGES", "Save Changes");
define("_SHOWMAIL", "Show Email");
define("_SORRYTO", "Your account at");
define("_SURE2APPROVE", "Are you sure you want to approve user");
define("_SURE2DELETE", "Are you sure you want to delete user");
define("_SURE2DENY", "Are you sure you want to deny user");
define("_SURE2PROMOTE", "Are you sure you want to promote user");
define("_SURE2REMOVE", "Are you sure you want to remove user");
define("_SURE2RESEND", "Are you sure you want to resend activation email");
define("_SURE2RESTORE", "Are you sure you want to restore user");
define("_SURE2SUSPEND", "Are you sure you want to suspend user");
define("_SUSPEND", "Suspend");
define("_SUSPENDUSER", "Suspend User");
define("_SUSPENDUSERS", "Suspended Users");
define("_URL", "URL");
define("_USERADMIN", "User's Administration");
define("_USERID", "User ID");
define("_USERPROMOTED", "User has been promoted to Admin.");
define("_USERUPDATE", "Update User");
define("_WAITINGUSER", "Waiting User");
define("_WAITINGUSERS", "Waiting Users");

define("_ARTICLES", "Articles");
define("_BBFORUM", "Forum");
define("_CONTENT", "Content");
define("_DOWNLOAD", "Downloads");
define("_ENCYCLOPEDIA", "Encyclopedia");
define("_FAQ", "FAQ");
define("_REVIEWS", "Reviews");
define("_SECTIONS", "Sections");
define("_SURVEYS", "Surveys");
define("_TOPICS", "Topics");
define("_WEBLINKS", "Web Links");

// Admin errors
define("_ADDERROR", "ERROR: There was a problem with the database.");
define("_NAMEERROR", "ERROR: This Admin name is already in use.");
define("_NEEDTOCOMPLETE", "You need to complete all required fields");
define("_PASSWDNOMATCH", "Sorry, the new passwords doesn't match. Go Back and Try Again");
define("_USERNOEXIST", "User Doesn't Exists!");

/*****************************************************/
/* Originals : modules/Your_Account/*.*              */
/*****************************************************/
define("_USERLOGIN", "Login Utente");
define("_USERREGLOGIN", "User Registration/Login");
define("_REGNEWUSER", "Registrazione Nuovo Utente");
define("_PASSWORDLOST", "Hai dimenticato la tua Password?");

define("_NOPROBLEM", "Nessun problema. Basta scrivere il tuo Nickname e cliccare sul bottone. Ti sar&agrave; inviata una Email automatica con il tuo Codice di Conferma, quindi riscrivi il tuo Nickname e il tuo Nuovo Codice di Conferma, a questo punto ti sar&agrave; inviata una nuova password.");
define("_CONFIRMATIONCODE", "Codice di Conferma");
define("_SENDPASSWORD", "Invia Password");

define("_YOUARELOGGEDOUT", "Ora sei disconnesso!");

define("_USERACCOUNT", "L'account utente");
define("_AT", "su");
define("_HASTHISEMAIL", "ha questa email associata con esso.");
define("_AWEBUSERFROM", "Un Utente Web da");
define("_HASREQUESTED", "ha appena richiesto l'invio della password.");
define("_YOURNEWPASSWORD", "La Tua nuova Password &egrave;:");
define("_YOUCANCHANGE", "Puoi cambiarla una volta entrato nel tuo account");
define("_IFYOUDIDNOTASK", "Se non hai mai chiesto nulla del genere, non preoccuparti. Tu stai vedendo questo messaggio, nessun altro. Se questo &egrave; stato un errore accedi con la tua nuova password.");

define("_PASSWORD4", "Password per");
define("_MAILED", "Spedita.");

define("_CODEREQUESTED", "ha appena richiesto il Codice di Conferma per cambiare la password.");
define("_YOURCODEIS", "Il tuo Codice di Conferma &egrave;:");
define("_WITHTHISCODE", "Con questo Codice puoi adesso assegnare una nuova password a");
define("_IFYOUDIDNOTASK2", "Se non hai richiesto questa opzione, non preoccuparti. Cancella questa Email.");

define("_CODEFOR", "Codice di Conferma per");
define("_USERPASSWORD4", "Password Utente per");

define("_255CHARMAX", "(255 caratteri max. Scrivi la tua Firma utilizzando liberamente codice HTML)");
define("_CANKNOWABOUT", "(255 caratteri max. Scrivi quello che vuoi far sapere agli altri di te)");
define("_SOMETHINGWRONG", "Qualcosa &egrave; andato storto... come mi fa innervosire questa cosa... a te no?");
define("_CHARLONG", "characters long");

// Edit comments view
define("_COMMENTSCONFIG", "Configurazione Commenti");
define("_DISPLAYMODE", "Modo Visualizzazione");
define("_NOCOMMENTS", "Nessun Commento");
define("_NESTED", "Nidificati");
define("_FLAT", "Piatto");
define("_THREAD", "Concatenati");
define("_SORTORDER", "Ordinamento");
define("_OLDEST", "Vecchi Prima");
define("_NEWEST", "Nuovi Prima");
define("_HIGHEST", "Voti Alti Prima");
define("_THRESHOLD", "Limite");
define("_COMMENTSWILLIGNORED", "Commenti valutati meno del valore impostato verranno automaticamente ignorati.");
define("_UNCUT", "Uncut and Raw");
define("_EVERYTHING", "Almost Everything");
define("_FILTERMOSTANON", "Filter Most Anonymous");
define("_USCORE", "Voto");
define("_SCORENOTE", "Post Anonimo parte da 0, post di un utente registrato logged in parte da 1. Moderatori aggiungono e tolgono punti.");
define("_NOSCORES", "Non visualizzare il punteggio");
define("_HIDDESCORES", "(Punteggio nascosto: esiste ma tu non lo vedi.)");
define("_MAXCOMMENT", "Lunghezza Max Commenti");
define("_TRUNCATES", "(Tronca i commenti lunghi e aggiungi un link a Leeggi Tutto. Set alto per disabilitare)");
define("_BYTESNOTE", "bytes (1024 bytes = 1K)");

define("_PRIVATEMESSAGES", "I Tuoi Messaggi Privati");
define("_BROWSEUSERS", "Browse Users");
define("_SEARCHUSERS", "Search Users");
define("_SENDPRIVATEMSG", "Send a Private Message to");

// Change theme
define("_THEMESELECTION", "Selezione Tema");
define("_SELECTTHEME", "Seleziona Un Tema");
define("_THEMETEXT1", "Questa opzione cambia il look grafico del sito.");
define("_THEMETEXT2", "Le modifiche saranno valide solo per te.");
define("_THEMETEXT3", "Ogni Utente Registrato pu&ograve; vedere il sito con differenti temi grafici a sua scelta tra quelli disponibili.");

// Edit home
define("_HOMECONFIG", "Configurazione Home Page");
define("_NEWSINHOME", "Numero Articoli in Home Page");
define("_MAX127", "(max. 127):");
define("_MESSAGEACTIVATE", "Activate Broadcast Public Messages?");
define("_ACTIVATEPERSONAL", "Attiva Menu Personale");
define("_CHECKTHISOPTION", "(Seleziona questa opzione e il seguente testo apparir&agrave; nella Home Page)");
define("_YOUCANUSEHTML", "(Puoi usare tags HTML)");
?>