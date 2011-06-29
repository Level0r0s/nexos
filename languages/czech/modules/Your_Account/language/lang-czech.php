<?php

/**************************************************************************
 Your_Account Module                                                    
*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG Dev Team
  http://cpgnuke.com

   Last modification notes: 
   Honza Uher juher@san.rr.com                                          
   $Id: lang-czech.php,v 1.1 2004/07/31 21:13:45 akamu Exp $       
                                                                         
   Please change the second quoted phrase, not the capitalized one        
   If you need to use double quotes (") remember to add a backslash (\),  
   so your entry will look like: This is \"double quoted\" text.          
   Try to stay as close to the meaning of the english phrase.             
**************************************************************************/

//lang_translation_info

define("_REQUIREADMIN", "Vyžaduje povolení administrátora");
define("_ACTALLOWREG", "Povolit registraci uživatele");
define("_ACTNOTIFYADD", "Upozornit administrátora na registraci uživatele");
define("_ACTALLOWDELETE", "Povolit uživateli smazání vlastního úctu");
define("_ACTNOTIFYDELETE", "Upozornit administrátora na smazání uživatele");
define("_ACTALLOWTHEME", "Povolit uživateli zmenu témy");
define("_ACTALLOWMAIL", "Povolit uživateli zmenu emailu");
define("_SERVERMAIL", "Server muže posílat poštu");
define("_USEACTIVATE", "Použít aktivaci emailu");
define("_USEREGISTERMSG", "Použít registracní podmínky");

define("_MA_HIDDEN", "Skrytý");
define("_MA_VISIBLE", "Viditelný");
define("_MA_REQUIRED", "Vyžadovaný");

// User Registration Config
define("_MA_PROFILE_INFO", "Osobní informace");
define("_MA_ADDITIONAL", "Další informace");
define("_MA_REALNAME", "Skutecné jméno");
define("_MA_FAKEMAIL", "Falešná email adresal");
define("_MA_HOMEPAGE", "Osobní stránky");
define("_MA_ICQ", "ICQ císlo");
define("_MA_AIM", "AIM adresa");
define("_MA_YIM", "Yahoo Messenger");
define("_MA_MSNM", "MSN Messenger");
define("_MA_LOCATION", "Location");
define("_MA_OCCUPATION", "Zaměstnání");
define("_MA_INTERESTS", "Zájmy");
define("_MA_SIGNATURE", "Podpis");
define("_MA_EXTRAINFO", "Dodatečné informace");
define("_MA_PREFERENCES", "Preferences");
define("_MA_TIMEZONE", "Časová zóna");
define("_MA_DATEFORMAT", "Formát datumu");
define("_MA_RECEIVENEWSLETTER", "Receive Newsletter");
define("_MA_SHOWEMAIL", "Zobrazit moji email");
define("_MA_SHOWONLINE", "Zobrazit zda jsem připojen");
define("_MA_ALLOWBBCODE", "Always Allow BBCode");
define("_MA_ALLOWHTML", "Always Allow HTML");
define("_MA_ALLOWSMILIES", "Always Enable Smilies");
define("_MA_NOTIFYREPLY", "Notify me of replies");
define("_MA_NOTIFYPM", "Notify on new Private Message by Email");
define("_MA_POPUPPM", "Pop up window on new Private Message");
define("_MA_ATTACHSIG", "Always attach my signature");
define("_MA_PRIVATE", "Private Information");
define("_MA_FIRSTNAME", "Jméno");
define("_MA_LASTNAME", "Příjmeníe");
define("_MA_GENDER", "Pohlaví");
define("_MALE", "Muž");
define("_FEMALE", "Žena");
define("_MA_BIRTHDAY", "Datum narození");
define("_MA_BIRTHDAYMSG", "Vyplnit jako měsíc/den/rok");
define("_MA_TELEPHONE", "Telefon");
define("_MA_FAX", "Fax");
define("_OSC_NEWSLETTER", "Recieve Shop newsletter");
define("_OSC_NEWSLETTERMSG", "This is a seperate e-mail about new shop items and discounts");

// License agreement
define("_BOUNDREGISTRATION", "Kliknutím na Register souhlasím se stanovenými podmínkami.");
define("_MA_REGISTRATION", "Registrační podmínky");
define("_MA_AGREE_OVER_13", "Souhlasím s těmito podmínkami a je mi <b>více</b> nebo <b>přesně 13</b> let.");
define("_MA_AGREE_UNDER_13", "Souhlasím s těmito podmínkami a je mi <b>méně</b> než 13 let.");
define("_MA_DO_NOT_AGREE", "Nesouhlasím s těmito podmínkami.");

// Registration form
define("_MA_REGISTRATION_INFO", "Registrační informace");
define("_MA_ITEMS_REQUIRED", "Položky označené * je nutné vyplnit, pokud není řečeno jinak.");
define("_MA_PROFILE_INFO_NOTICE", "Tato informace bude přístupná veřejnosti.");
define("_USERNAME", "Uživatelské jméno");
define("_EMAILADDRESS", "Email");
define("_BLANKFORAUTO", "Zanechte prázdné, vaše heslo bude automaticky vytvořeno");
define("_CONFIRMPASSWORD", "Potvrdit heslo");
define("_SUBMIT", "Odeslat");
define("_RESET", "Začít znovu");
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
define("_THISISYOURPAGE", "VaÂše osobnÃ­ strÃ¡nka");
define("_PERSONALINFO", "OsobnÃ­ informace");
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
define("_AVATAR", "Avatar-ikonka");
define("_WEBSITE", "VÃ¡Âš web");
define("_LOCATION", "BydliÂštÄ›");
define("_OCCUPATION", "ZamÄ›stnÃ¡nÃ­");
define("_INTERESTS", "ZÃ¡jmy");
define("_SIGNATURE", "Podpis");

define("_USERSTATUS", "AktuÃ¡lnÃ­ status");
define("_ONLINE", "Online");
define("_OFFLINE", "Offline");
define("_NOTSUBSCRIBED", "You're not subscribed to our Newsletter");
define("_SUBSCRIBED", "You're subscribed to our Newsletter");

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
define("_NOINFOFOR", "Nejsou dostupnÃ© informace o uÂživateli");
define("_SORRYNOUSERINFO", "Lituji, nebyly nalezeny odpovÃ­dajÃ­cÃ­ informace");
define("_LOGININCOR", "Chyba pÅ™i pÅ™ihlÃ¡ÂšovÃ¡nÃ­! Zkuste to, prosÃ­m, znovu...");
define("_UPDATEFAILED", "Nemohu aktualizovat uÂživatele. Kontaktujte, prosÃ­m administrÃ¡tora.");

// Navbar
define("_ACCTCHANGE", "Change<br>Info");
define("_ACCTCOMMENTS", "Comments<br>Setup");
define("_ACCTEXIT", "Logout<br>Exit");
define("_ACCTHOME", "Change<br>Home");
define("_ACCTJOURNAL", "Your<br>Journals");
define("_ACCTTHEME", "Select<br>Theme");
define("_CHANGEHOME", "Upravit Ãºv.strÃ¡nku");
define("_CHANGEYOURINFO", "OsobnÃ­ informace");
define("_CONFIGCOMMENTS", "NastavenÃ­ komentÃ¡Å™Å¯");
define("_DELETEACCT", "Delete<br>Account");
define("_LOGOUTEXIT", "OdhlÃ¡ÂšenÃ­/Konec");
define("_MESSAGES", "Messages");
define("_RETURNACCOUNT", "Return to Your Account Page");
define("_SELECTTHETHEME", "Vybrat vzhled");

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
define("_EDITUSER", "Upravit uÂživatele");
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
define("_OPTION", "Volby");
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
define("_USERLOGIN", "PÅ™ihlÃ¡ÂšenÃ­");
define("_USERREGLOGIN", "User Registration/Login");
define("_REGNEWUSER", "Registrace novÃ©ho uÂživatele");
define("_PASSWORDLOST", "ZapomÄ›l(a) jste heslo?");

define("_NOPROBLEM", "To nenÃ­ ÂžÃ¡dnÃ½ problÃ©m. Zadejte vaÂši pÅ™ezdÃ­vku a kliknÄ›te na tlaÄÃ­tko Poslat heslo. Na e-mailovou adresu, kterou jste zadal(a) pÅ™i registraci, vÃ¡m okamÂžitÄ› poÂšleme potvrzovacÃ­ kÃ³d. Znovu zadÃ¡te vaÂši pÅ™ezdÃ­vku a potvrzovacÃ­ kÃ³d a my vÃ¡m ihned poÂšleme novÃ© heslo.");
define("_CONFIRMATIONCODE", "PotvrzovacÃ­ kÃ³d");
define("_SENDPASSWORD", "Poslat heslo");

define("_YOUARELOGGEDOUT", "VaÂše odhlÃ¡ÂšenÃ­ probÄ›hlo ÃºspÄ›ÂšnÄ›!");

define("_USERACCOUNT", "UÂživatelskÃ½ ÃºÄet");
define("_AT", "na");
define("_HASTHISEMAIL", "bylo spojeno s touto e-mailovou adresou.");
define("_AWEBUSERFROM", "UÂživatel");
define("_HASREQUESTED", "poÂžÃ¡dal(a) o poslÃ¡nÃ­ heslat.");
define("_YOURNEWPASSWORD", "VaÂše novÃ© heslo je:");
define("_YOUCANCHANGE", "MÅ¯Âžete jej zmÄ›nit po pÅ™ihlÃ¡ÂšenÃ­ na");
define("_IFYOUDIDNOTASK", "Pokud jste o toto nepoÂžÃ¡dal, nebuÄte smutnÃ½. VidÃ­te tuto zprÃ¡vu, nikoli 'je'. Pokud se jednÃ¡ o chybu, zalogujte se znovu - s novÃ½m heslem.");

define("_PASSWORD4", "Heslo pro");
define("_MAILED", "OdeslÃ¡no.");

define("_CODEREQUESTED", "poÂžÃ¡dal(a) o poslÃ¡nÃ­ potvrzovacÃ­ho kÃ³du ke zmÄ›nÄ› hesla.");
define("_YOURCODEIS", "VÃ¡Âš potvrzovacÃ­ kÃ³d je:");
define("_WITHTHISCODE", "S tÃ­mto kÃ³dem mÅ¯Âžete poÂžÃ¡dat o pÅ™idÄ›lenÃ­ novÃ©ho hesla na");
define("_IFYOUDIDNOTASK2", "Pokud jste o nic neÂžÃ¡dal(a), smaÂžte prosÃ­m tento e-mail.");

define("_CODEFOR", "PotvrzovacÃ­ kÃ³d pro");
define("_USERPASSWORD4", "UÂživatelskÃ© heslo pro");

define("_255CHARMAX", "(max. 255 znakÅ¯. Zadejte vÃ¡Âš podpis, mÃºÂžete i s pouÂžitÃ­m HTML)");
define("_CANKNOWABOUT", "(max. 255 znakÅ¯. Zadejte to, co chcete aby ostatnÃ­ o vÃ¡s vÄ›dÄ›li)");
define("_SOMETHINGWRONG", "NÄ›co vÃ¡s vytÃ¡ÄÃ­... co vÃ¡s rozÄiluje?");
define("_CHARLONG", "characters long");

// Edit comments view
define("_COMMENTSCONFIG", "NastavenÃ­ komentÃ¡Å™Å¯");
define("_DISPLAYMODE", "Zobrazit jako");
define("_NOCOMMENTS", "Bez komentÃ¡Å™e");
define("_NESTED", "VklÃ¡danÃ©");
define("_FLAT", "Patra");
define("_THREAD", "Strom");
define("_SORTORDER", "SeÅ™adit");
define("_OLDEST", "NejdÅ™Ã­ve starÂšÃ­");
define("_NEWEST", "NejdÅ™Ã­ve novÄ›jÂšÃ­");
define("_HIGHEST", "NejdÅ™Ã­ve s nejvyÂšÂšÃ­m skÃ³re");
define("_THRESHOLD", "PrÃ¡hy");
define("_COMMENTSWILLIGNORED", "KomentÃ¡Å™e s niÂžÂšÃ­m hodnocenÃ­m neÂž nastavÃ­te budou ignorovÃ¡ny.");
define("_UNCUT", "Nefiltrovat");
define("_EVERYTHING", "Skoro vÂšechno");
define("_FILTERMOSTANON", "Filtrovat-vÄ›tÂšinou anonymy");
define("_USCORE", "HodnocenÃ­");
define("_SCORENOTE", "AnonymnÃ­ pÅ™Ã­spÄ›vky zaÄÃ­najÃ­ na 0, pÅ™Ã­spÄ›vky pÅ™ihlÃ¡ÂšenÃ½ch uÂživatelÅ¯ na 1. ModerÃ¡toÅ™i mohou pÅ™idÃ¡vat a odebÃ­rat body.");
define("_NOSCORES", "Nezobrazovat hodnocenÃ­");
define("_HIDDESCORES", "(SkrytÃ© hodnocenÃ­: Pokud je zatrhnete, neuvidÃ­te ÂžÃ¡dnÃ© hodnocenÃ­.)");
define("_MAXCOMMENT", "Max dÃ©lka komentÃ¡Å™e");
define("_TRUNCATES", "(ZkrÃ¡tÃ­ dlouhÃ© komentÃ¡Å™e a pÅ™idÃ¡ k nim odkaz: vÃ­ce...)");
define("_BYTESNOTE", "bytÅ¯ (1024 bytÅ¯ = 1K)");

define("_PRIVATEMESSAGES", "VaÂše osobnÃ­ zprÃ¡vy");
define("_BROWSEUSERS", "Browse Users");
define("_SEARCHUSERS", "Search Users");
define("_SENDPRIVATEMSG", "Send a Private Message to");

// Change theme
define("_THEMESELECTION", "NastavenÃ­ vzhledu");
define("_SELECTTHEME", "Vyberte jeden vzhled");
define("_THEMETEXT1", "Tato volba zcela zmÄ›nÃ­ vzhled celÃ©ho webu.");
define("_THEMETEXT2", "ZmÄ›ny budou viditelnÃ© pouze pro vÃ¡s.");
define("_THEMETEXT3", "VÂšichni uÂživatelÃ© mohou mÃ­t nastaven rozdÃ­lnÃ½ vzhled webu.");

// Edit home
define("_HOMECONFIG", "NastavenÃ­ ÃºvodnÃ­ strÃ¡nky");
define("_NEWSINHOME", "PoÄet pÅ™Ã­spÄ›vkÅ¯ na ÃºvodnÃ­ strÃ¡nce");
define("_MAX127", "(max. 127):");
define("_MESSAGEACTIVATE", "Activate Broadcast Public Messages?");
define("_ACTIVATEPERSONAL", "Aktivovat osobnÃ­ menu");
define("_CHECKTHISOPTION", "(ZatrhnÄ›te tuto moÂžnost a na ÃºvodnÃ­ strÃ¡nce budete mÃ­t zobrazen box, ve kterÃ©m mÅ¯Âžete mÃ­t text nebo vlastnÃ­ menu)");
define("_YOUCANUSEHTML", "(MÅ¯Âžete pouÂžÃ­t HTML kÃ³d)");
?>