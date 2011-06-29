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
/* $Id: lang-french.php,v 1.1 2004/07/27 20:33:52 akamu Exp $        */
/*                                                                        */
/* Please change the second quoted phrase, not the capitalized one        */
/* If you need to use double quotes (") remember to add a backslash (\),  */
/* so your entry will look like: This is \"double quoted\" text.          */
/* Try to stay as close to the meaning of the english phrase.             */
/**************************************************************************/

//lang_translation_info

define("_REQUIREADMIN", "Necessite l'autorisation de l'admin:");
define("_ACTALLOWREG", "Autoriser l'Utilisateur à s'Enregistrer:");
define("_ACTNOTIFYADD", "Notifier l'Administrateur de l'Enregistrement d'un Utilisateur:");
define("_ACTALLOWDELETE", "Autoriser l'Utilisateur à Supprimer son Compte:");
define("_ACTNOTIFYDELETE", "Notifier l'Administrateur de la Suppression d'un Utilisateur:");
define("_ACTALLOWTHEME", "Authoriser l'Utilisateur à Sélectionner les Thèmes:");
define("_ACTALLOWMAIL", "Autoriser l'Utilisateur à Changer son Email:");
define("_SERVERMAIL", "Le serveur peut envoyer un mail?");
define("_USEACTIVATE", "Utiliser l'activation par mail?");
define("_USEREGISTERMSG", "Use Registration Agreement");

define("_MA_HIDDEN", "Hidden");
define("_MA_VISIBLE", "Visible");
define("_MA_REQUIRED", "Required");

// User Registration Config
define("_MA_PROFILE_INFO", "Profile Information");
define("_MA_ADDITIONAL", "Additional Information");
define("_MA_REALNAME", "Real Name");
define("_MA_FAKEMAIL", "Fake Email");
define("_MA_HOMEPAGE", "Home Page");
define("_MA_ICQ", "ICQ Number");
define("_MA_AIM", "AIM Address");
define("_MA_YIM", "Yahoo Messenger");
define("_MA_MSNM", "MSN Messenger");
define("_MA_LOCATION", "My Location");
define("_MA_OCCUPATION", "My Occupation");
define("_MA_INTERESTS", "My Interests");
define("_MA_SIGNATURE", "My Signature");
define("_MA_EXTRAINFO", "Extra Info");
define("_MA_PREFERENCES", "Preferences");
define("_MA_TIMEZONE", "Timezone");
define("_MA_DATEFORMAT", "Date format");
define("_MA_RECEIVENEWSLETTER", "Receive Newsletter");
define("_MA_SHOWEMAIL", "Show my Email Address");
define("_MA_SHOWONLINE", "Show my online status");
define("_MA_ALLOWBBCODE", "Always Allow BBCode");
define("_MA_ALLOWHTML", "Always Allow HTML");
define("_MA_ALLOWSMILIES", "Always Enable Smilies");
define("_MA_NOTIFYREPLY", "Notify me of replies");
define("_MA_NOTIFYPM", "Notify on new Private Message by Email");
define("_MA_POPUPPM", "Pop up window on new Private Message");
define("_MA_ATTACHSIG", "Always attach my signature");
define("_MA_PRIVATE", "Private Information");
define("_MA_FIRSTNAME", "Firstname");
define("_MA_LASTNAME", "Lastname");
define("_MA_GENDER", "Gender");
define("_MALE", "Male");
define("_FEMALE", "Female");
define("_MA_BIRTHDAY", "Date of birth");
define("_MA_BIRTHDAYMSG", "Fill in as month/day/year");
define("_MA_TELEPHONE", "Telphone number");
define("_MA_FAX", "Fax number");
define("_OSC_NEWSLETTER", "Recieve Shop newsletter");
define("_OSC_NEWSLETTERMSG", "This is a seperate e-mail about new shop items and discounts");

// License agreement
define("_BOUNDREGISTRATION", "By clicking Register below you agree to be bound by these conditions.");
define("_MA_REGISTRATION", "Registration Agreement Terms");
define("_MA_AGREE_OVER_13", "I Agree to these terms and am <b>over</b> or <b>exactly 13</b> years of age");
define("_MA_AGREE_UNDER_13", "I Agree to these terms and am <b>under</b> 13 years of age");
define("_MA_DO_NOT_AGREE", "I do not agree to these terms");

// Registration form
define("_MA_REGISTRATION_INFO", "Registration Information");
define("_MA_ITEMS_REQUIRED", "Items marked with a * are required unless stated otherwise.");
define("_MA_PROFILE_INFO_NOTICE", "This information will be publicly viewable");
define("_USERNAME", "Username");
define("_EMAILADDRESS", "Email address");
define("_BLANKFORAUTO", "Leave blank for auto-generate your password");
define("_CONFIRMPASSWORD", "Confirm password");
define("_SUBMIT", "Submit");
define("_RESET", "Reset");
define("_MA_FAKEMAILMSG", "(This Email will be public. Just type what you want, Spam proof)");
define("_MA_DATEFORMATMSG", "The syntax used is identical to the PHP <a href=\"http://www.php.net/date\">date()</a> function");
define("_MA_SIGNATUREMSG", "This is a block of text that can be added to posts you make. There is a 255 character limit");
define("_MA_NOTIFYREPLYMSG", "Sends an email when someone replies to a topic you have posted in. This can be changed whenever you post");
define("_MA_POPUPPMMSG", "Will open a new popup window to inform you when new private messages arrive");

// config options
define("_ACTDISABLED", "Cette fonction a été mise <br>HORS SERVICE</b> par l'administrateur du site.");

// Register steps
define("_USERFINALSTEP", "New User Registration: Final Step");
define("_USERCHECKDATA", "please check the following information. If all is correct you can proceed with the registration by clicking on \"Finish\" button, otherwise \"Go Back\" and change whatever information is needed.");
define("_YOURPASSWORD", "Your Password is");
define("_YOUWILLRECEIVE", "You will receive a confirmation email with a link to a page you should visit to activate your account in the next 24 hours.");
define("_YOUWILLRECEIVE2", "You will receive an email with login information.");
define("_WAITAPPROVAL", "The site Administrator will review your application and send you an activation link if you are approved.");
define("_FINISH", "Valider");

// Register finish
define("_YOUUSEDEMAIL", "Vous (ou quelqu'un d'autre) avez utilis&eacute; votre compte d'e-mail");
define("_TOREGISTER", "pour ouvrir un compte sur");
define("_USERREGLOGIN", "Enregistrement/connexion utilisateur");
define("_USERAPPLOGIN", "User Application/Login");
define("_ACCOUNTCREATED", "New User Account Created!");
define("_YOUAREREGISTERED", "Vous &ecirc;tes maintenant enregistr&eacute;. Vous allez recevoir un code de confirmation dans votre boite aux lettres.");
define("_FINISHUSERCONF", "Your request for a new account has been processed. You'll receive an email in the next few seconds with a activation link that should be visited in the next 24 hours to be able to activate your account.");
define("_FINISHUSERCONF2", "Votre requête pour un nouveau compte a été acceptée. Vous pouvez maintenant");
define("_FINISHUSERCONF3", "vous enregistrer ici");
define("_TOFINISHUSER", "To finish the registration process you should visit the following link in the next 24 hours to activate your user account, otherwise the information will be automaticaly deleted by the system and you should apply again:");
define("_ACTIVATIONSUB", "New User Account Activation");
define("_REGISTRATIONSUB", "New User Account Registration");
define("_THANKSUSER", "Thank you for registering at");
define("_FOLLOWINGMEM", "Voici les informations du membre:");
define("_TOAPPLY", "to apply for an account at");
define("_APPLICATIONSUB", "Application du Compte du Nouvel Utilisateur");
define("_YOUAREPENDING", "Welcome! Your application as a new member is pending. The site administrator will contact you when your application is processed.");
define("_THANKSAPPL", "Thank you for appling at");
define("_MEMADD", "Membre Ajouté");
define("_MEMAPL", "Member Applied");

// Register errors
define("_ERRORINVEMAIL", "ERREUR: Email non valide");
define("_NICK2SHORT", "Nickname is too short. It must be more than 3 characters");
define("_SECCODEINCOR", "Security Code is incorrect, Please go back and type it exactly as given...");
define("_ERROREMAILSPACES", "ERREUR: Les adresses Email ne contiennent pas d'espacements");
define("_ERRORINVNICK", "ERREUR: Pseudo invalide");
define("_NICK2LONG", "Le pseudo est trop long. Il doit faire moins de 25 caract&egrave;res");
define("_NAMERESERVED", "ERREUR: Ce nom est reserve");
define("_NAMEDENIED","ERROR: This part of your chosen user name may not be used :");
define("_NICKNOSPACES", "ERREUR: Il ne peut y avoir d'espace dans le nom d'utilisateur");
define("_NICKTAKEN", "ERREUR: Nom d'utilisateur deja utilise");
define("_EMAILREGISTERED", "ERREUR: Adresse email deja enregistree");
define("_PASSDIFFERENT", "Les 2 mots de passe sont differents. Ils doivent etre identiques.");
define("_YOUPASSMUSTBE", "Votre mot de passe doit etre de");
define("_CHARLONG", "caracteres maximum");
define("_ACCOUNTRESERVED", "Nouveau compte utilisateur reserve!");
define("_EMAILNOTUSABLE", "ERREUR: Adresse email non valide");

// User activation
define("_ACTIVATIONYES", "Activation utilisateur");
define("_ACTMSG", "Your account has been activated. Please login from <a href=\"getlink(Your_Account)\">this link</a> using your assigned Nickname and Password.");
define("_ACTIVATIONERROR", "New User Activation Error");
define("_ACTERROR1", "New user verification number is invalid.<br><br>Please be sure to click on the link you received by email or apply for a new account <a href=\"getlink(Your_Account)\">here</a>.");
define("_ACTERROR2", "There is no user in the database with this information.<br><br>You can register a new user from <a href=\"getlink(Your_Account)\">here</a>.");

// Edit user profile
define("_CURRENTPASSWORD", "Mot de passe actuel");
define("_CURRENTPASSWORDMSG", "Vous devez confirmer votre mot de passe actuel si vous voulez changer votre mot de passe ou votre email");
define("_NEWPASSWORD", "Nouveau mot de passe");
define("_NEWPASSWORDMSG", "You only need to supply a password if you want to change it");
define("_CONFIRMPASSWORDMSG", "You only need to confirm your password if you changed it above");
define("_SUREDELETE", "Are you sure you want to delete your account?");
define("_CURRENT_IMAGE", "Image actuelle");
define("_DELETE_IMAGE", "Effacer image");
define("_AVATAR_CONTROL", "Panel de controle Avatars");
define("_AVATAR_INFO", "Displays a small graphic image below your details in posts. Only one image can be displayed at a time, its width can be no greater than 80 pixels, the height no greater than 80 pixels, and the file size no more than 6 KB.");
define("_AVATAR_OFFSITE","Avatar hors-site");
define("_AVATAR_OFFSITEMSG","Entrez l'url d'ou ce trouve l'avatar voulu.");
define("_AVATAR_SELECT", "Selectionnez un avatar depuis la galerie");
define("_SHOW_GALLERY", "Montrer la galerie");
define("_AVATAR_UPLOAD", "Uploader un avatar depuis ma machine");

// Avatar section
define("_AVATAR_GALLERY", "Galerie d'avatar");
define("_CATEGORY_SELECT", "Selectionnez categorie");
define("_SELECT_AVATAR", "Select avatar");
define("_CANCEL_AVATAR", "Cancel avatar");

// Profile page
define("_THISISYOURPAGE", "C'est votre page personnelle. Vous voulez probablement changer quelque chose. Si vous souhaitez perdre un peu de temps, c'est l'endroit indiqu&eacute;. ");
define("_PERSONALINFO", "Informations personnelles");
define("_ABOUT_USER", "All about ");
define("_CONTACTINFO", "Contact Information");
define("_PM", "Private Message");
define("_JOINED", "Joined");
define("_RANK", "Rank");
define("_LAST10BBTOPIC", "Les 10 dernoiers sujets du Forum");
define("_LAST10BBTOPICS", "Les 10 derniers sujets du Forum commences par");
define("_LAST10COMMENT", "Les 10 derniers commentaires");
define("_LAST10DOWNLOAD", "Les 10 derniers telechargements");
define("_LAST10DOWNLOADS", "Les 10 derniers telechargements de");
define("_LAST10SUBMISSION", "Les 10 derniers articles soumis");
define("_LAST10WEBLINK", "Les 10 derniers Liens web");
define("_LAST10WEBLINKS", "Les 10 derniers Liens web par");
define("_MEMBERGROUPS", "Groupe d'utilisateurs");
define("_AVATAR", "Avatar");
define("_WEBSITE", "Site Web");
define("_LOCATION", "Situation");
define("_OCCUPATION", "Occupations");
define("_INTERESTS", "Interets");
define("_SIGNATURE", "Signature");

define("_USERSTATUS", "Status actuel de l'utilisateur");
define("_ONLINE", "En ligne");
define("_OFFLINE", "Hors ligne");
define("_NOTSUBSCRIBED", "Vous n'êtes pas inscrit à la Newsletter");
define("_SUBSCRIBED", "Vous êtes inscrit à la Newsletter");

define("_BROADCAST", "Broadcast Public Message");
define("_BROADCASTTEXT", "You can send a <i>Public Message</i> from here (255 characters max). This message will be displayed to all online users in the next 10 minutes. Any user online will see you message just once in a red bar under the site's logo. Any user can deactivate this feature from <a href=\"modules.php?name=Your_Account&amp;op=edithome\">here</a>. Please don't abuse. HTML code isn't allowed here.");
define("_SEND", "Send");
define("_BROADCASTSENT", "Your Broadcast Message has been sent.");
define("_BROADCASTNOTSENT", "<b>ERROR:</b> Your Broadcast Message is empty or you already sent a message recently. To publish another message you need to wait about 10 minutes.");
define("_RETURNPAGE", "Retournez a votre page personnelle");

define("_MYHEADLINES", "My Headlines");
define("_SELECTASITE", "Select the site from which you want to read the headlines:");
define("_SELECTASITE2", "Selectionnez un site web");
define("_ORTYPEURL", "Or type the headlines RSS/XML url of your prefered site:");
define("_GO", "Go");
define("_HEADLINESFROM", "Lire Mon Journal");

define("_READMYJOURNAL", "Read My Journal");

// Errors
define("_ACCDELETED", "Les compte a ete efface");
define("_SERVERNOMAIL", "Ce serveur n'a pas d'accès email. Contacter l'administrateur du site pour de l'assistance svp.");
define("_ACCSUSPENDED", "Le Compte a été suspendu");
define("_BESUREACT", "Etes vous sur d'avoir activer votre compte?");
define("_MEMDEL", "Membre efface");
define("_YOUBAD", "ERREUR: Vous avez essaye une operation illegale!");
define("_NOINFOFOR", "Il n'y a pas d'infos disponibles pour");
define("_SORRYNOUSERINFO", "Desole, aucun utilisateur correspondant trouve");
define("_LOGININCOR", "Login incorrect! Reessayez...");
define("_UPDATEFAILED", "Mise &agrave; jour de l'entr&eacute;e utilisateur impossible.  Veuillez contacter l'administrateur du site.");

// Navbar
define("_ACCTCHANGE", "Changer<br>Info");
define("_ACCTCOMMENTS", "Commentaires<br>Setup");
define("_ACCTEXIT", "Logout<br>Sortie");
define("_ACCTHOME", "Changer<br>Accueil");
define("_ACCTJOURNAL", "Votre<br>Journal");
define("_ACCTTHEME", "Selectionnez<br>Theme");
define("_CHANGEHOME", "Votre Home");
define("_CHANGEYOURINFO", "Vos infos");
define("_CONFIGCOMMENTS", "Commentaires");
define("_DELETEACCT", "Effacer");
define("_LOGOUTEXIT", "D&eacute;connexion/Sortie");
define("_MESSAGES", "Messages");
define("_RETURNACCOUNT", "Return to Your Account Page");
define("_SELECTTHETHEME", "Selectionnez un th&egrave;me");

// Admin area
define("_DELETEREASON", "Raison de la Suppression");
define("_SUSPENDREASON", "Raison de la Suspension");
define("_DENYREASON", "Raison du Refus");
define("_CHECKNUM", "Numéro d'activation");
define("_REGDATE", "Date d'ajout");
define("_ACCTAPPROVE", "Compte approuvé");
define("_ACCTDELETE", "Compte efface");
define("_ACCTDENY", "Compte Refusé");
define("_ACCTREMOVE", "Compte supprime");
define("_ACCTRESTORE", "Compte restaure");
define("_ACCTSUSPEND", "Compte suspendu");
define("_ACTIVEUSERS", "Utilisateurs actifs");
define("_ADDUSER", "Ajouter un nouvel utilisateur");
define("_ADDUSERBUT", "Ajouter utilisateur");
define("_ALLOWUSERS", "Autoriser les autres utilisateurs a voir mon email");
define("_APPROVE", "Approuver");
define("_APPROVEUSER", "Approuver utilisateur");
define("_DELETEUSER", "Effacer utilisateur");
define("_DELETEUSERS", "Utilisateurs effaces");
define("_DENY", "Refus");
define("_DENYUSER", "Refusé l'Utilisateur");
define("_DETUSER", "Details utilisateur");
define("_EDITUSER", "Editer utilisateur");
define("_FORCHANGES", "(uniquement pour changements)");
define("_FUNCTIONS", "Fonctions");
define("_HASAPPROVE", "a été approuvé.");
define("_HASDELETE", "a été supprimé.");
define("_HASDENY", "a été regusé.");
define("_HASREMOVE", "a été déplacé.");
define("_HASRESTORE", "a été restauré.");
define("_HASSUSPEND", "a été suspendu.");
define("_ID", "Identité");
define("_MODIFY", "Modifié");
define("_NAME", "Nom"); 
define("_NEWSLETTER", "Newsletter");
define("_OK", "Ok!");
define("_OPTION", "Option");
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
define("_CONTENT", "Contenu");
define("_DOWNLOAD", "Téléchargements");
define("_ENCYCLOPEDIA", "Encyclopédie");
define("_FAQ", "FAQ");
define("_REVIEWS", "Reviews");
define("_SECTIONS", "Sections");
define("_SURVEYS", "Surveys");
define("_TOPICS", "Topics");
define("_WEBLINKS", "Web Links");

// Admin errors
define("_ADDERROR", "ERREUR: Il y a un problème avec la base de données.");
define("_NAMEERROR", "ERROR: This Admin name is already in use.");
define("_NEEDTOCOMPLETE", "You need to complete all required fields");
define("_PASSWDNOMATCH", "Sorry, the new passwords doesn't match. Go Back and Try Again");
define("_USERNOEXIST", "User Doesn't Exists!");

/*****************************************************/
/* Originals : modules/Your_Account/*.*              */
/*****************************************************/
define("_USERLOGIN", "Identification Utilisateur");
define("_USERREGLOGIN", "Enregistrement/connexion utilisateur");
define("_REGNEWUSER", "Enregistrement d'un nouvel utilisateur");
define("_PASSWORDLOST", "Vous avez perdu votre mot de passe ?");

define("_NOPROBLEM", "Pas de probl&egrave;me. Entrez votre pseudo et cliquez sur le bouton envoyer. Nous vous enverrons un Email automatique avec votre code de confirmation.  R&eacute;-entrez ensuite votre pseudo et votre code de confirmation et nous vous enverrons votre nouveau mot de passe.");
define("_CONFIRMATIONCODE", "Code de confirmation");
define("_SENDPASSWORD", "Envoyer");

define("_YOUARELOGGEDOUT", "Vous &ecirc;tes maintenant d&eacute;connect&eacute; !");

define("_USERACCOUNT", "Le compte Utilisateur");
define("_AT", "de");
define("_HASTHISEMAIL", " est associ&eacute; &agrave; votre e-mail.");
define("_AWEBUSERFROM", "Un utilisateur de");
define("_HASREQUESTED", "a demand&eacute; que le mot de passe lui soit envoy&eacute;.");
define("_YOURNEWPASSWORD", "");
define("_YOUCANCHANGE", "Vous pourrez le modifier apr&egrave;s vous &ecirc;tre connect&eacute;");
define("_IFYOUDIDNOTASK", "Si vous n'avez pas demand&eacute; ceci, ne vous inqui&egrave;tez pas. VOUS voyez ce message, pas 'eux'.  S'il s'agit d'une erreur, il vous suffit de vous connecter avec votre nouveau mot de passe.");

define("_PASSWORD4", "Mot de Passe");
define("_MAILED", "Envoy&eacute;.");

define("_CODEREQUESTED", " a demand&eacute; un code de confirmation pour changer le mot de passe.");
define("_YOURCODEIS", "Votre code de confirmation est:");
define("_WITHTHISCODE", "Avec ce code vous pouvez maintenant changer le mot de passe de");
define("_IFYOUDIDNOTASK2", "If you didn't asked for this, don't worry. Just delete this Email.");

define("_CODEFOR", "Code de confirmation pour");
define("_USERPASSWORD4", "Mot de Passe l'utilisateur pour");

define("_255CHARMAX", "(Max. 255 caract&egrave;res pour votre signature, HTML compris)");
define("_CANKNOWABOUT", "(255 caracteres max. Entrez votre signature avec des balises HTML.)");
define("_SOMETHINGWRONG", "Quelque chose a foir&eacute;...Ca vous &eacute;nerve ? non?");
define("_CHARLONG", "caract&egrave;res");

// Edit comments view
define("_COMMENTSCONFIG", "Configuration des commentaires");
define("_DISPLAYMODE", "Mode d'affichage");
define("_NOCOMMENTS", "Pas de commentaires");
define("_NESTED", "Emboit&eacute;s");
define("_FLAT", "A plat");
define("_THREAD", "Par discussions");
define("_SORTORDER", "Ordonn&eacute;");
define("_OLDEST", "Les plus anciens devant");
define("_NEWEST", "Les plus recents devant");
define("_HIGHEST", "Les plus cotes d'abord ");
define("_THRESHOLD", "Disposition");
define("_COMMENTSWILLIGNORED", "Les commentaires enregistr&eacute;s dans la configuration seront ignor&eacute;s.");
define("_UNCUT", "Tous les commentaires");
define("_EVERYTHING", "Quasiment Tous");
define("_FILTERMOSTANON", "filtrer plus d'anonymes");
define("_USCORE", "Score");
define("_SCORENOTE", "Les envois anonymes commencent &agrave; 0, le d&eacute;but des envois logu&eacute;s &agrave; 1. Les mod&eacute;rateurs ajoutent et soustraient les points.");
define("_NOSCORES", "Ne pas montrer les scores");
define("_HIDDESCORES", "(Cache les scores: Ils sont toujours appliqu&eacute;s, mais vous ne les voyez plus.)");
define("_MAXCOMMENT", "Taille maximum des commentaires");
define("_TRUNCATES", "(Troncage des commentaires,Et rajout d'un lien 'Lire la Suite'.)");
define("_BYTESNOTE", "octets (1024 octets = 1K)");

define("_PRIVATEMESSAGES", "Vos messages prives");
define("_BROWSEUSERS", "Parcourir les utilisateurs");
define("_SEARCHUSERS", "Chercher des utilisateurs");
define("_SENDPRIVATEMSG", "Envoyer un message privé a");

// Change theme
define("_THEMESELECTION", "Selection du theme");
define("_SELECTTHEME", "Selectionnez un theme");
define("_THEMETEXT1", "Cette option change le look de tout le site.");
define("_THEMETEXT2", "Les changements ne seront effectifs que pour vous.");
define("_THEMETEXT3", "Tous les utilisateurs peuvent voir le site avec un theme different.");

// Edit home
define("_HOMECONFIG", "Configuration");
define("_NEWSINHOME", "Nombre de news sur home");
define("_MAX127", "(max. 127):");
define("_MESSAGEACTIVATE", "Activate Broadcast Public Messages?");
define("_ACTIVATEPERSONAL", "Activer Menu Personnel");
define("_CHECKTHISOPTION", "(Verifiez cette option et le texte suivant apparaitra sur home)");
define("_YOUCANUSEHTML", "(Vous pouvez utiliser des balises HTML, pour ajouter des liens par exemple)");
?>