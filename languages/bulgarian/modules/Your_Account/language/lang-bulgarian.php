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
/* $Id: lang-bulgarian.php,v 1.1 2004/07/16 10:21:22 akamu Exp $        */
/*    ��������� �� :  ����������                                          */
/*        WEB ���� :  http://www.informator.org/                          */
/*           Email :  info@informator.org                                 */
/*                                                                        */
/*            ���� :  06.04.2003                                          */
/* �������� ������ :  CPG-Nuke 8.02 YourAccount                                  */
/*            ���� :  /modules/Your_Account/language/lang-bulgarian.php   */
/*                                                                        */
/* Please change the second quoted phrase, not the capitalized one        */
/* If you need to use double quotes (") remember to add a backslash (\),  */
/* so your entry will look like: This is \"double quoted\" text.          */
/* Try to stay as close to the meaning of the english phrase.             */
/**************************************************************************/


//lang_translation_info

define("_REQUIREADMIN", "Require Admin Approval");
define("_ACTALLOWREG", "Allow User Registration");
define("_ACTNOTIFYADD", "Notify Admin of User Registration");
define("_ACTALLOWDELETE", "Allow User self-deletion");
define("_ACTNOTIFYDELETE", "Notify Admin of User Deletion");
define("_ACTALLOWTHEME", "Allow User Theme Selection");
define("_ACTALLOWMAIL", "Allow User Email Change");
define("_SERVERMAIL", "Server can send mail");
define("_USEACTIVATE", "Use email Activation");
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
define("_MA_LOCATION", "Location");
define("_MA_OCCUPATION", "Occupation");
define("_MA_INTERESTS", "Interests");
define("_MA_SIGNATURE", "Signature");
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
define("_BLANKFORAUTO", "�������� ������, ��� ������� ����������� ���������� �� ������ ������");
define("_CONFIRMPASSWORD", "Confirm password");
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
define("_THISISYOURPAGE", "���� � ������ ���������� ��������");
define("_PERSONALINFO", "����� ����������");
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
define("_AVATAR", "����������");
define("_WEBSITE", "WEB ����");
define("_LOCATION", "M��������������");
define("_OCCUPATION", "�������");
define("_INTERESTS", "��������");
define("_SIGNATURE", "���������");

define("_USERSTATUS", "�������� ������������� ������");
define("_ONLINE", "������");
define("_OFFLINE", "��-����");
define("_NOTSUBSCRIBED", "��� �� ��� ������ �� ������ �������");
define("_SUBSCRIBED", "��� ��� ������ �� ������ �������");

define("_BROADCAST", "Broadcast Public Message");
define("_BROADCASTTEXT", "��� ����� ���������� �� ��������� <i>�������� ���������</i> �� ��� (� ���������� ������� �� 255 �������). ���� ��������� �� ���� �������� �� ������ �����������, ����� �� ������, ���� ���������� 10 ������. ����� ���������� ������ �� ���� ����������� ���� ������ � ������� ���� ��� ������ �� �����. ����� ���������� ���� �� ���������� ���� ����� �� <a href=\"modules.php?name=Your_Account&amp;op=edithome\">���</a>.<br> �� ����������������!<br> HTML ��� �� � ��������.");
define("_SEND", "�������");
define("_BROADCASTSENT", "������ ��������� �� ��������������� ���� ���������.");
define("_BROADCASTNOTSENT", "<b>������:</b> ������ ��������� �� ��������������� � ������ ��� ���� ��� ��������� ��������� ���������. �� �� ����������� ����� ���������, ��� ���� ��� ���������, � ���������� �� �������� �� ������ ������������� �� �������� - ����� 10 ������.");
define("_RETURNPAGE", "������� ��� ������ ����� ��������");

define("_MYHEADLINES", "����� ��������");
define("_SELECTASITE", "�������� ������ �� ����� ������ �� ������ ����������:");
define("_SELECTASITE2", "�������� WEB ����");
define("_ORTYPEURL", "��� �������� URL �� RSS/XML �� ���������� �� ������������� ����:");
define("_GO", "������");
define("_HEADLINESFROM", "�������� ��");

define("_READMYJOURNAL", "Read My Journal");

// Errors
define("_ACCDELETED", "Account has been Deleted");
define("_SERVERNOMAIL", "This server does not have mail access. Please contact the site admin for assistance.");
define("_ACCSUSPENDED", "Account has been Suspended");
define("_BESUREACT", "Be sure you have activated your account.");
define("_MEMDEL", "Member Deleted");
define("_YOUBAD", "ERROR: You have attempted to perform an illegal operation!");
define("_NOINFOFOR", "���� ������� ���������� ��");
define("_SORRYNOUSERINFO", "�� ���������, �� �� �������� ���������� �� ����������");
define("_LOGININCOR", "���������� �������! ����, ��������� ������...");
define("_UPDATEFAILED", "�� ������ �� ���������� ��������������� ����. ����, �������� �� � ��������������.");

// Navbar
define("_ACCTCHANGE", "Change<br>Info");
define("_ACCTCOMMENTS", "Comments<br>Setup");
define("_ACCTEXIT", "Logout<br>Exit");
define("_ACCTHOME", "Change<br>Home");
define("_ACCTJOURNAL", "Your<br>Journals");
define("_ACCTTHEME", "Select<br>Theme");
define("_CHANGEHOME", "������� �� ����� ��������");
define("_CHANGEYOURINFO", "������� �� ������ ����������");
define("_CONFIGCOMMENTS", "����������� �� ���������");
define("_DELETEACCT", "Delete<br>Account");
define("_LOGOUTEXIT", "�����");
define("_MESSAGES", "���������");
define("_RETURNACCOUNT", "������� ��� ���������� �� ������ ������");
define("_SELECTTHETHEME", "����� �� ������");

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
define("_EDITUSER", "����������� �� ����������");
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
define("_OPTION", "�����");
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
define("_USERLOGIN", "��������� �� ���������� ");
define("_USERREGLOGIN", "User Registration/Login");
define("_REGNEWUSER", "������������ �� ��� ����������");
define("_PASSWORDLOST", "�������� ��� �� ��������?");

define("_NOPROBLEM", "���� �������. ���� �������� ������ ��������� � �������� �� ������ �� ���������. �� ���� �������� ����������� E-M@IL ��� ��� ��� ������ ������������ ���, ������ ��� �� ������ �� �������� ������ ������ ��������� � ������������ ��� � ��� �� �� �������� ���� ������.");
define("_CONFIRMATIONCODE", "������������ ���");
define("_SENDPASSWORD", "��������� �� ������");

define("_YOUARELOGGEDOUT", "��� ���������!����������� ������!");

define("_USERACCOUNT", "������������� ������");
define("_AT", "��");
define("_HASTHISEMAIL", "��������� ���� E-M@IL ��������� ��� ���.");
define("_AWEBUSERFROM", "WEB ���������� ��");
define("_HASREQUESTED", "���������� � ����� ������ ����� �� ���� ���������.");
define("_YOURNEWPASSWORD", "������ ���� ������ �:");
define("_YOUCANCHANGE", "������ �� � ��������� ���� ���� �������");
define("_IFYOUDIDNOTASK", "��� �� ��� �������� ����, �� �� ����������. ���� ��� ������� ���� ���������. ��� ������� ���� �� ������, ���� ������ � ������ ���� ������.");

define("_PASSWORD4", "������ ��");
define("_MAILED", "��������� �� E-M@IL.");

define("_CODEREQUESTED", "��������� ���� ��������������� ��� �� �� �� ������� ��������.");
define("_YOURCODEIS", "������ ������������ ��� �:");
define("_WITHTHISCODE", "� ���� ��� ��� ������ ���� �� ���������� ���� ������");
define("_IFYOUDIDNOTASK2", "��� �� ��� �������� ����, �� �� ����������. ���� �������� ���� E-M@IL.");

define("_CODEFOR", "������������ ��� ��");
define("_USERPASSWORD4", "������������� ������ ��");

define("_255CHARMAX", "(max. 255 �����. ������ �� �������� HTML ��� ��� ������ ���������)");
define("_CANKNOWABOUT", "(max. 255 �����. �������� ���� ����� ������ ������� �� ������ �� ���)");
define("_SOMETHINGWRONG", "���� �� ��������... �� ������� �� ����?");
define("_CHARLONG", "characters long");

// Edit comments view
define("_COMMENTSCONFIG", "������������ �� ���������");
define("_DISPLAYMODE", "��������� �� �����");
define("_NOCOMMENTS", "��� ���������");
define("_NESTED", "��������");
define("_FLAT", "������");
define("_THREAD", "�����");
define("_SORTORDER", "��� �� ���������");
define("_OLDEST", "���-�������");
define("_NEWEST", "���-������");
define("_HIGHEST", "� ���-����� ��������");
define("_THRESHOLD", "� ��������");
define("_COMMENTSWILLIGNORED", "���������, ���������� � ��-����� �� ���� ��������� �� ����� ����������.");
define("_UNCUT", "������������ � �������������");
define("_EVERYTHING", "����� ������");
define("_FILTERMOSTANON", "������ �� �������� ��������");
define("_USCORE", "��������");
define("_SCORENOTE", "���������� ����������� ������� �� 0, � �� ������ ����������� ���������� - ������� �� 1. ������������ �������� � �������� �����.");
define("_NOSCORES", "������� �� ��������� �� �����������");
define("_HIDDESCORES", "(������ ���������: �� �� ���������, �� ��� �� �� �������.)");
define("_MAXCOMMENT", "���������� ������� �� ���������");
define("_TRUNCATES", "(������� ����� ���������, � ������ ������ \"������� ���...\". ���������� � ���������)");
define("_BYTESNOTE", "bytes (1024 ����� = 1K)");

define("_PRIVATEMESSAGES", "������ ����� ���������");
define("_BROWSEUSERS", "������� �� �����������");
define("_SEARCHUSERS", "������� �� �����������");
define("_SENDPRIVATEMSG", "Send a Private Message to");

// Change theme
define("_THEMESELECTION", "����� �� ������");
define("_SELECTTHEME", "����� �� ������");
define("_THEMETEXT1", "���� ����� �� ������� ������� �� ������ ����.");
define("_THEMETEXT2", "��������� �� ����� ������� ���� �� ���.");
define("_THEMETEXT3", "����� ���������� ���� �� ��������� ����� � �������� ������.");

// Edit home
define("_HOMECONFIG", "������������ �� ����� ��������");
define("_NEWSINHOME", "���������� �� �������� � ������� ��������");
define("_MAX127", "(����. 127):");
define("_MESSAGEACTIVATE", "�� ���������� �� ��������������� �� �������� ���������?");
define("_ACTIVATEPERSONAL", "���������� �� ����� ����");
define("_CHECKTHISOPTION", "(��������� ���� ����� � ���������� ����� ��� �� ��������� �� ������� ��������)");
define("_YOUCANUSEHTML", "(������ �� ���������� HTML ��� �� ������, ��������)");
?>