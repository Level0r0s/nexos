<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/hungarian/your_account.php,v $
  $Revision: 9.8 $
  $Author: nanocaiordo $
  $Date: 2006/02/12 14:43:55 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_MA_HIDDEN','Rejtve');
define('_MA_VISIBLE','Látható');
define('_MA_REQUIRED','Szükséges');
define('_MA_PROFILE_INFO','Profil info');
define('_MA_ADDITIONAL','Egyéb info');
define('_MA_REALNAME','Valódi név');
define('_MA_FAKEMAIL','Hamis email');
define('_MA_HOMEPAGE','Honlap');
define('_MA_ICQ','ICQ szám');
define('_MA_AIM','AIM név');
define('_MA_YIM','Yahoo! Messenger ID');
define('_MA_MSNM','MSN Passport cím');
define('_MA_LOCATION','Lakóhely');
define('_MA_OCCUPATION','Foglalkozás');
define('_MA_INTERESTS','Érdeklődés');
define('_MA_SIGNATURE','Aláírás');
define('_MA_EXTRAINFO','Extra információ');
define('_MA_PREFERENCES','Preferenciák');
define('_MA_TIMEZONE','Időzóna');
define('_MA_DATEFORMAT','Dátumformátum');
define('_MA_RECEIVENEWSLETTER','Kérek hírlevelet');
define('_MA_SHOWEMAIL','Email cím nyilvános');
define('_MA_SHOWONLINE','Mutasd az online státuszom');
define('_MA_ALLOWBBCODE','BBCode mindig engedélyezve');
define('_MA_ALLOWHTML','HTML mindig engedélyezve');
define('_MA_ALLOWSMILIES','Fejek mindig engedélyezve');
define('_MA_NOTIFYREPLY','Értesíts a válaszokról');
define('_MA_NOTIFYPM','Értesíts emailben a személyes üzenetekről');
define('_MA_POPUPPM','Felugró ablak személyes üzenet esetén');
define('_MA_ATTACHSIG','Mindig csatold az aláírásomat');
define('_MA_PRIVATE','Személyes információ');
define('_MA_FIRSTNAME','Keresztnév');
define('_MA_LASTNAME','Családnév');
define('_MA_GENDER','Nem');
define('_MALE','férfi');
define('_FEMALE','nő');
define('_MA_BIRTHDAY','Születés dátuma');
define('_MA_BIRTHDAYMSG','Töltsd ki hó/nap/év formátumban');
define('_MA_TELEPHONE','Telefonszám');
define('_MA_FAX','Fax szám');
define('_OSC_NEWSLETTER','Kérek bolti hírlevelet');
define('_OSC_NEWSLETTERMSG','Ez egy elkülönített email új árucikkek és engedméynek számára');
define('_BOUNDREGISTRATION','A regisztrációra kattintva elfogadod, hogy a feltételek számodra is kötelező érvényűek.');
define('_MA_REGISTRATION','Regisztrációs megállapodás kitételei');
define('_MA_AGREE_OVER_13','Elfogadom a feltételeket és kijelentem, hogy 13 évnél nem vagyok fiatalabb.');
define('_MA_AGREE_UNDER_13','Elfogadom a feltételeket és kijelentem, hogy 13 évnél fiatalabb vagyok.');
define('_MA_DO_NOT_AGREE','Nem fogadom el ezeket a feltételeket.');
define('_MA_REGISTRATION_INFO','Regisztrációs info');
define('_MA_ITEMS_REQUIRED','A *-gal jelölt rovatok szükségesek, hacsak másként nem rendelkezik.');
define('_MA_PROFILE_INFO_NOTICE','Ez az információ nyilvánosan látható lesz');
define('_USERNAME','Felhasználónév');
define('_EMAILADDRESS','Email cím');
define('_BLANKFORAUTO','Hagyd üresen az automatikus jelszógeneráláshoz');
define('_CONFIRMPASSWORD','Erősítsd meg a jelszavad');
define('_MA_SUBMIT','Küldés');
define('_MA_FAKEMAILMSG','Ez az emailcím minden felhasználó számára látható lesz');
define('_MA_DATEFORMATMSG','A szöveglánc azonos a PHP <a href="http://php.net/date">date()</a> funkciójával');
define('_MA_SIGNATUREMSG','This is a block of text that can be added to my posts<br />'.sprintf(_M_CHARS, 255));
define('_MA_NOTIFYREPLYMSG','Sends an email when someone replies to a topic you have posted in. This can be changed whenever you post');
define('_MA_POPUPPMMSG','Will open a new popup window to inform you when new private messages arrive');
define('_ACTDISABLED','This function has been <b>DISABLED</b> by the site administrator');
define('_USERFINALSTEP','User Registration: Final Step');
define('_USERCHECKDATA','please check the following information. If it is correct, then you can finalize the registration process by clicking on the "Finish" button, otherwise click "Go Back" and change whatever information is needed.');
define('_YOURPASSWORD','Your Password is');
define('_YOUWILLRECEIVE','You will receive a confirmation email with an activation link you should visit within the next 24 hours');
define('_YOUWILLRECEIVE2','You will receive an email with your login information.');
define('_WAITAPPROVAL','The site Administrator will review your application and send you an email if you are approved.');
define('_FINISH','Finish');
define('_YOUUSEDEMAIL','You or someone else has used your email account');
define('_TOREGISTER','to register an account at');
define('_USERREGLOGIN','User Registration/Login');
define('_USERAPPLOGIN','User Application/Login');
define('_ACCOUNTCREATED','New User Account Created!');
define('_YOUAREREGISTERED','Welcome! You are now registered as a member');
define('_FINISHUSERCONF','Your request for a new account has been processed<br />You will receive an email shortly with an activation link that should be visited within the next 24 hours to activate your account');
define('_FINISHUSERCONF2','Your request for a new account has been processed. You can now ');
define('_FINISHUSERCONF3','login here');
define('_TOFINISHUSER','To finish the registration process you should visit the following link within the next 24 hours to activate your user account, otherwise the information will be purged by our system and you will need to re-apply');
define('_ACTIVATIONSUB','User Account Activation');
define('_REGISTRATIONSUB','User Account Registration');
define('_THANKSUSER','Thank you for registering at');
define('_FOLLOWINGMEM','The following is your member information:');
define('_TOAPPLY','to apply for an account at');
define('_APPLICATIONSUB','User Account Application');
define('_YOUAREPENDING','Welcome! Your application as a new member is pending. The site administrator will contact you when your application has been processed.');
define('_THANKSAPPL','Thank you for applying at');
define('_MEMADD','Member Added');
define('_MEMAPL','Member Applied');
define('_ERRORINVEMAIL','ERROR: Invalid Email');
define('_NICK2SHORT','Username is too short. It must be more than 3 characters');
define('_SECCODEINCOR','Security Code is incorrect, Please go back and type it exactly as given...');
define('_ERROREMAILSPACES','ERROR: Email addresses do not contain spaces');
define('_ERRORINVNICK','ERROR: Invalid Username');
define('_NICK2LONG','Username is too long. It must be less than 26 characters');
define('_NAMERESERVED','ERROR: This Name is Reserved');
define('_NAMEDENIED','ERROR: This part of your chosen user name may not be used :');
define('_NICKNOSPACES','ERROR: There cannot be any spaces in the Username');
define('_NICKTAKEN','ERROR: Username already taken');
define('_EMAILREGISTERED','ERROR: Email address already registered');
define('_PASSDIFFERENT','Both passwords are different. They need to be identical.');
define('_YOUPASSMUSTBE','Your Password must be');
define('_CHARLONG','characters long');
define('_ACCOUNTRESERVED','New User Account Reserved!');
define('_EMAILNOTUSABLE','ERROR: Email address is not usable');
define('_ACTIVATIONYES','User Activation');
define('_ACTMSG','Your account has been activated. Please login from <a href="'.getlink().'">this link</a> using your assigned Username and Password.');
define('_ACTIVATIONERROR','User Activation Error');
define('_ACTERROR1','User verification number is invalid.<br /><br />Please be sure to click on the link you received by email or apply for a new account <a href="'.getlink().'">here</a>.');
define('_ACTERROR2','There is no user in the database with this information.<br /><br />You can register a new user from <a href="'.getlink().'">here</a>.');
define('_CURRENTPASSWORD','Current password');
define('_CURRENTPASSWORDMSG','You must confirm your current password if you wish to change it or alter your e-mail address');
define('_NEWPASSWORD','New password');
define('_NEWPASSWORDMSG','You only need to supply a password if you want to change it');
define('_CONFIRMPASSWORDMSG','You only need to confirm your password if you changed it above');
define('_SUREDELETE','Are you sure that you want to delete your account?');
define('_CATEGORY_SELECT','Select category');
define('_SELECT_AVATAR','Select avatar');
define('_CANCEL_AVATAR','Cancel avatar');
define('_THISISYOURPAGE','Ez a kezdőoldalad');
define('_PERSONALINFO','Személyes adatok');
define('_ABOUT_USER','All about ');
define('_CONTACTINFO','Contact Information');
define('_PM','Private Message');
define('_JOINED','Joined');
define('_RANK','Rank');
define('_LAST10BBTOPIC','Last 10 Forum Topics');
define('_LAST10BBTOPICS','Last 10 Forum Topics started by');
define('_LAST10COMMENT','Last 10 Comments');
define('_LAST10DOWNLOAD','Last 10 Downloads');
define('_LAST10DOWNLOADS','Last 10 Downloads by');
define('_LAST10SUBMISSION','Last 10 News Submissions');
define('_LAST10WEBLINK','Last 10 Web Links');
define('_LAST10WEBLINKS','Last 10 Web Links by');
define('_MEMBERGROUPS','Group Memberships');
define('_AVATAR','Avatar');
define('_WEBSITE','Weboldalad címe');
define('_USERSTATUS','Tag jelenlegi státusa');
define('_ONLINE','Online');
define('_OFFLINE','Offline');
define('_NOTSUBSCRIBED','You are not subscribed to our newsletter');
define('_SUBSCRIBED','You are subscribed to our newsletter');
define('_MA_BROADCAST','Broadcast Public Message');
define('_BROADCASTTEXT','You can send a <i>Public Message</i> from here (255 characters max). This message will be displayed to all online users in the next 10 minutes. Any user online will see you message just once in a red bar under the site\'s logo. Any user can deactivate this feature from <a href="'.getlink("Your_Account&amp;op=edithome").'">here</a>. Please don\'t abuse. HTML code isn\'t allowed here.');
define('_BROADCASTSENT','Your Broadcast Message has been sent.');
define('_BROADCASTNOTSENT','<b>ERROR:</b> Your Broadcast Message is empty or you already sent a message recently. To publish another message you need to wait about 10 minutes.');
define('_RETURNPAGE','Return to your personal page');
define('_MA_MYHEADLINES','My Headlines');
define('_SELECTASITE','Select the site from which you want to read headlines:');
define('_SELECTASITE2','Select a Web Site');
define('_ORTYPEURL','Or type the url of your prefered RSS/XML headlines site:');
define('_MA_GO','Go');
define('_HEADLINESFROM','Headlines from');
define('_MA_READMYJOURNAL','Read My Blog');
define('_ACCDELETED','Account has been Deleted');
define('_SERVERNOMAIL','This server does not have mail access. Please contact the site admin for assistance.');
define('_ACCSUSPENDED','Account has been Suspended');
define('_BESUREACT','Be sure that you have activated your account');
define('_MEMDEL','Member Deleted');
define('_YOUBAD','ERROR: You have attempted to perform an illegal operation!');
define('_NOINFOFOR','Nincs információ erről a felhasználóról:');
define('_SORRYNOUSERINFO','Sajnálom, nem találtam megfelelő felhasználói adatokat');
define('_LOGININCOR','Sikertelen belépés! Próbáld meg újra...');
define('_UPDATEFAILED','Hiba lépett fel a felhasználó adatainak frissítésekor. Kérem, lépjen kapcsolatba az adminisztrátorral.');
define('_ACCTCHANGE','Change<br>Info');
define('_ACCTCOMMENTS','Comments<br>Setup');
define('_ACCTEXIT','Logout Exit');
define('_ACCTHOME','Change Home');
define('_ACCTJOURNAL','Your Blogs');
define('_ACCTTHEME','Select Theme');
define('_CHANGEHOME','Főoldal beállítása');
define('_CHANGEYOURINFO','Adataid megváltoztatása');
define('_CONFIGCOMMENTS','Hozzászólások beállítása');
define('_DELETEACCT','Delete Account');
define('_LOGOUTEXIT','Kilépés');
define('_MA_MESSAGES','Messages');
define('_RETURNACCOUNT','Return to Your Account Page');
define('_SELECTTHETHEME','Téma kiválasztása');
define('_DELETEREASON','Reason for Deletion');
define('_SUSPENDREASON','Reason for Suspension');
define('_DENYREASON','Reason for Denial');
define('_CHECKNUM','Activation #');
define('_REGDATE','Date Added');
define('_ACCTAPPROVE','Account Approved');
define('_ACCTDELETE','Account Deleted');
define('_ACCTDENY','Account Denied');
define('_ACCTREMOVE','Account Removed');
define('_ACCTRESTORE','Account Restored');
define('_ACCTSUSPEND','Account Suspended');
define('_ACTIVEUSERS','Active Users');
define('_MA_ADDUSER','Add a New User');
define('_MA_ADDUSERBUT','Add User');
define('_MA_ALLOWUSERS','Allow other users to view my email address');
define('_APPROVE','Approve');
define('_APPROVEUSER','Approve User');
define('_MA_DELETEUSER','Delete User');
define('_DELETEUSERS','Deleted Users');
define('_DENY','Deny');
define('_DENYUSER','Deny User');
define('_DETUSER','User Details');
define('_MA_EDITUSER','Edit User');
define('_MA_FORCHANGES','(For Changes Only)');
define('_MA_FUNCTIONS','Functions');
define('_HASAPPROVE','has been approved.');
define('_HASDELETE','has been deleted.');
define('_HASDENY','has been denied.');
define('_HASREMOVE','has been removed.');
define('_HASRESTORE','has been restored.');
define('_HASSUSPEND','has been suspended.');
define('_MA_ID','ID');
define('_MA_MODIFY','Modify');
define('_MA_NAME','Name');
define('_MA_NEWSLETTER','Newsletter');
define('_MA_OPTION','Option');
define('_OR','or');
define('_MA_PERMISSIONS','Permissions');
define('_PROMOTE','Promote');
define('_PROMOTEUSER','Promote User');
define('_REMOVE','Remove');
define('_REMOVEUSER','Remove User');
define('_MA_REQUIREDNOCHANGE','(required, can\'t be changed later)');
define('_RESEND','Resend');
define('_RESENDMAIL','Resend Activation Email');
define('_RESTORE','Restore');
define('_RESTOREUSER','Restore User');
define('_MA_RETYPEPASSWD','Retype Password');
define('_MA_SAVECHANGES','Save Changes');
define('_SHOWMAIL','Show Email');
define('_SORRYTO','Your account at');
define('_SURE2APPROVE','Are you sure that you want to approve user');
define('_MA_SURE2DELETE','Are you sure that you want to delete user');
define('_SURE2DENY','Are you sure that you want to deny user');
define('_SURE2PROMOTE','Are you sure that you want to promote user');
define('_SURE2REMOVE','Are you sure that you want to remove user');
define('_SURE2RESEND','Are you sure that you want to resend activation email');
define('_SURE2RESTORE','Are you sure that you want to restore user');
define('_SURE2SUSPEND','Are you sure that you want to suspend user');
define('_SUSPEND','Suspend');
define('_SUSPENDUSER','Suspend User');
define('_SUSPENDUSERS','Suspended Users');
define('_MA_USERADMIN','User\'s Administration');
define('_MA_USERID','User ID');
define('_USERPROMOTED','User has been promoted to Admin.');
define('_MA_USERUPDATE','Update User');
define('_WAITINGUSER','Waiting User');
define('_WAITINGUSERS','Waiting Users');
define('_MA_ARTICLES','Articles');
define('_MA_BBFORUM','Forum');
define('_MA_CONTENT','Content');
define('_MA_DOWNLOAD','Downloads');
define('_MA_ENCYCLOPEDIA','Encyclopedia');
define('_MA_FAQ','FAQ');
define('_MA_REVIEWS','Reviews');
define('_MA_SECTIONS','Sections');
define('_MA_SURVEYS','Surveys');
define('_MA_TOPICS','Topics');
define('_MA_WEBLINKS','Web Links');
define('_ADDERROR','ERROR: There was a problem with the database.');
define('_NAMEERROR','ERROR: This Admin name is already in use.');
define('_MA_NEEDTOCOMPLETE','You need to complete all required fields');
define('_MA_PASSWDNOMATCH','Sorry, the new passwords doesn\'t match. Go Back and Try Again');
define('_MA_USERNOEXIST','User Doesn\'t Exists!');
define('_USERLOGIN','Belépés');
define('_REGNEWUSER','Új tag regisztrálása');
define('_PASSWORDLOST','Elfelejtetted a jelszavad?');
define('_NOPROBLEM','Nem gond. Csak add meg az azonosítód, és kattins a "Jelszó elküldése" gombra. Egy automatikus levelet kapsz egy megerősítő kóddal, ekkor újra meg kell adnod a jelszavad és a kapott megerősítő kódot, és új jelszót küldünk neked.');
define('_CONFIRMATIONCODE','Megerősítő kód');
define('_SENDPASSWORD','Jelszó elküldése');
define('_MA_YOUARELOGGEDOUT','You are now logged out!');
define('_USERACCOUNT','A következő tag:');
define('_HASTHISEMAIL','regisztráláskor ezt az e-mail címet adta meg.');
define('_AWEBUSERFROM','Egy felhasználó a következő IP címről:');
define('_HASREQUESTED','kérte a jelszavad elküldését.');
define('_YOURNEWPASSWORD','Az új jelszavad:');
define('_YOUCANCHANGE','Belépéskor megváltoztathatod itt:');
define('_IFYOUDIDNOTASK','Ha nem te kérted ezt, ne aggódj. Ezt az üzenetet csak te látod, más nem. Ha tévedés történt, csak lépj be az új jelszavaddal.');
define('_PASSWORD4','Jelszó a következő tag részére:');
define('_MAILED','Elküldve.');
define('_CODEREQUESTED','megerősítő kódot kért jelszó megváltoztatásához.');
define('_YOURCODEIS','A megerősítő kódod:');
define('_WITHTHISCODE','Ezzel a kóddal kaphatsz új jelszót oldalunkon:');
define('_IFYOUDIDNOTASK2','Ha nem kérted ezt, ne aggódj, csak töröld ki ezt a levelet.');
define('_CODEFOR','Megerősítő kód a következő tag részére:');
define('_USERPASSWORD4','Jelszó a következő tag részére:');
define('_255CHARMAX','(Max. 255 karakter. HTML kódokat is írhatsz az aláírásodba)');
define('_CANKNOWABOUT','(Max. 255 karakter. Mit akarsz elmondani magadról a többi tagnak)');
define('_SOMETHINGWRONG','Na, valamit elcsesztünk... Te nem utálod az ilyet?');
define('_COMMENTSCONFIG','Hozzászólások beállítása');
define('_DISPLAYMODE','Nézet');
define('_NOCOMMENTS','Nincs hozzászólás!');
define('_NESTED','Beágyazott');
define('_FLAT','Sima');
define('_THREAD','Szál');
define('_SORTORDER','Sorbarendezés');
define('_OLDEST','A legrégebbi felül');
define('_NEWEST','A legrégebbi alul');
define('_HIGHEST','A legolvasottabb felül');
define('_THRESHOLD','Küszöb');
define('_COMMENTSWILLIGNORED','Az ennél kevesebbre osztályozott hozzászólások nem lesznek figyelembe véve.');
define('_UNCUT','Szűretlen');
define('_EVERYTHING','Majdnem minden');
define('_FILTERMOSTANON','A legtöbb névtelen hozzászólás szűrése');
define('_USCORE','Osztályzatok');
define('_SCORENOTE','A névtelen hozzászólások 0, tagok hozzászólásai 1 pontot érnek. A moderátorok hozzáadhatnak és elvehetnek pontokat.');
define('_NOSCORES','Osztályozás rejtése');
define('_HIDDESCORES','(Elrejti az osztályozást: az működik, csak nem látszik.)');
define('_MAXCOMMENT','Hozzászólások maximális hossza');
define('_TRUNCATES','(A hosszú hozzászólások végét levágja, és egy Tovább... linkkel helyettesíti. Kikapcsolásához állíts be valami jó nagy értéket.)');
define('_BYTESNOTE','byte (1024 bytes = 1K)');
define('_BROWSEUSERS','Browse Users');
define('_SEARCHUSERS','Search Users');
define('_SENDPRIVATEMSG','Send a Private Message to');
define('_THEME','Theme');
define('_MA_HOMECONFIG','Homepage Configuration');
define('_MAX127','(max. 127):');
define('_MESSAGEACTIVATE','Activate Broadcast Public Messages?');
define('_ACTIVATEPERSONAL','Személyes menü aktiválása');
define('_PERSONALMENUCONTENT','Personal Menu Content');
define('_CHECKTHISOPTION','(Ha bekapcsolod, a következő szöveg jelenik meg a főoldalon)');

// avatar
define('_AVATAR_FILESIZE','The avatar image file size must be less than %d KB');
define('_AVATAR_CONTROL','Avatar control panel');
define('_AVATAR_INFO','Displays a small graphic image below your details in posts. Only one image can be displayed at a time, its width can be no greater than '.$MAIN_CFG['avatar']['max_width'].' pixels, the height no greater than '.$MAIN_CFG['avatar']['max_height'].' pixels, and the file size no more than '.intval($MAIN_CFG['avatar']['filesize']/1024).' KB.');
define('_CURRENT_IMAGE','Current Image');
define('_DELETE_IMAGE','Delete Image');
define('_AVATAR_OFFSITE','Link to off-site Avatar');
define('_AVATAR_OFFSITEMSG','Enter the URL of the location containing the Avatar image you wish to link to.');
define('_AVATAR_SELECT','Select Avatar from gallery');
define('_SHOW_GALLERY','Show gallery');
define('_AVATAR_UPLOAD','Upload Avatar from your machine');
define('_AVATAR_UPLOAD_URL','Upload Avatar from a URL');
define('_AVATAR_GALLERY','Avatar gallery');
define('_AVATAR_ERR_IMTYPE','The avatar filetype must be .jpg, .gif or .png currently it is: %s');
define('_AVATAR_ERR_SIZE','Image is too large: %d x %d');
define('_AVATAR_ERR_URL','A connection could not be made to the URL you gave');
define('_AVATAR_ERR_DATA','The file at the URL you gave contains no data');

/**************************
  ADMNINISTRATION SECTION
**************************/
// users_cfg.php
define('_USER_CONFIG','Member Configuration');
define('_BROADCASTMSG','Activate Broadcast Messages?');
define('_MYHEADLINES','Activate Headlines Reader?');
define('_USERSHOMENUM','Let users change News number in Home?');
define('_PASSWDLEN','Minimum users password length');
define('_REQUIREADMIN','Require Admin Approval');
define('_ACTALLOWREG','Allow User Registration');
define('_ACTNOTIFYADD','Notify Admin of User Registration');
define('_ACTALLOWDELETE','Allow User self-deletion');
define('_ACTNOTIFYDELETE','Notify Admin of User Deletion');
define('_ACTALLOWTHEME','Allow User Theme Selection');
define('_ACTALLOWMAIL','Allow User Email Change');
define('_USEACTIVATE','Use email Activation');
define('_USEREGISTERMSG','Use Registration Agreement');
define('_SENDWELCOMEPM','Send welcome PM to new users');
define('_WELCOMEPMBODY','Message Body');
// fields

// avatar
define('_AVATAR_SETTINGS','Avatar Configuration');
define('_AV_ALLOW_LOCAL','Enable gallery avatars');
define('_AV_ALLOW_REMOTE','Enable remote avatars');
define('_AV_ALLOW_REMOTE_INFO','Avatars linked to from another website');
define('_AV_ALLOW_UPLOAD','Enable avatar uploading');
define('_AV_MAX_FILESIZE','Maximum Avatar File Size');
define('_AV_MAX_FILESIZE_INFO','For uploaded avatar files');
define('_AV_MAX_AVATAR_SIZE','Maximum Avatar Dimensions');
define('_AV_MAX_AVATAR_SIZE_INFO','(Height x Width in pixels)');
define('_AV_AVATAR_STORAGE_PATH','Avatar Upload Path');
define('_AV_AVATAR_STORAGE_PATH_INFO','Path under your CPG-Nuke root dir, e.g. uploads/avatars');
define('_AV_AVATAR_GALLERY_PATH','Avatar Gallery Path');
define('_AV_AVATAR_GALLERY_PATH_INFO','Path under your CPG-Nuke root dir for pre-loaded images, e.g. images/avatars');
define('_AV_DEFAULT','Default avatar image');
define('_AV_DEFAULT_INFO','Relative to your Avatar Gallery Path');
define('_AV_ALLOW_ANIMATED','Allow animated avatars');

// users.php
define('_USERADMIN','Users Administration');
define('_ADDUSER','Add a New User');
define('_EDITUSER','Tag szerkesztése');
define('_SELECTAUSER','Select a User');
define('_MA_PRIVILEGES','Privileges');
define('_ICQ','ICQ Number');
define('_AIM','AIM screen name');
define('_YIM','Yahoo! ID');
define('_MSNM','MSNM Screen Name');
define('_LOCATION','Lakóhely');
define('_OCCUPATION','Foglalkozás');
define('_INTERESTS','Érdeklődési körök');
define('_EXTRAINFO','Extra Info');
define('_USERID','User ID');
define('_SURE2DELETE','Are you sure you want to delete user');
