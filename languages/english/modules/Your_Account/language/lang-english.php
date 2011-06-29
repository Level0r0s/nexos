<?php
/**************************************************************  
  CPG-NUKE: Advanced Content Management System
********************************************
  A highly modified version of PHP-Nuke 6.5
  which is Copyright (c) 2002 by Francisco Burzi
  http://phpnuke.org
  Under the GNU General Public License version 2
***************************************************************
  Your_Account language file
  Last modification:
  Now UTF-8 encoded                                                    
  $Header: /cvs/languages/english/modules/Your_Account/language/lang-english.php,v 1.2 2004/08/19 04:29:23 akamu Exp $    
***************************************************************/
if (!defined('CPG_NUKE')) { header('Location: ../../'); exit; }
global $MAIN_CFG;
define('_MA_HIDDEN', 'Hidden');
define('_MA_VISIBLE', 'Visible');
define('_MA_REQUIRED', 'Required');
define('_MA_PROFILE_INFO', 'Profile Information');
define('_MA_ADDITIONAL', 'Additional Information');
define('_MA_REALNAME', 'Real Name');
define('_MA_FAKEMAIL', 'Fake Email');
define('_MA_HOMEPAGE', 'Home Page');
define('_MA_ICQ', 'ICQ Number');
define('_MA_AIM', 'AIM Address');
define('_MA_YIM', 'Yahoo Messenger');
define('_MA_MSNM', 'MSN Messenger');
define('_MA_LOCATION', 'My Location');
define('_MA_OCCUPATION', 'My Occupation');
define('_MA_INTERESTS', 'My Interests');
define('_MA_SIGNATURE', 'My Signature');
define('_MA_EXTRAINFO', 'Extra Info');
define('_MA_PREFERENCES', 'Preferences');
define('_MA_TIMEZONE', 'Timezone');
define('_MA_DATEFORMAT', 'Date format');
define('_MA_RECEIVENEWSLETTER', 'Receive Newsletter');
define('_MA_SHOWEMAIL', 'Show my Email Address');
define('_MA_SHOWONLINE', 'Show my online status');
define('_MA_ALLOWBBCODE', 'Always Allow BBCode');
define('_MA_ALLOWHTML', 'Always Allow HTML');
define('_MA_ALLOWSMILIES', 'Always Enable Smilies');
define('_MA_NOTIFYREPLY', 'Notify me of replies');
define('_MA_NOTIFYPM', 'Notify on new Private Message by Email');
define('_MA_POPUPPM', 'Pop up window on new Private Message');
define('_MA_ATTACHSIG', 'Always attach my signature');
define('_MA_PRIVATE', 'Private Information');
define('_MA_FIRSTNAME', 'Firstname');
define('_MA_LASTNAME', 'Lastname');
define('_MA_GENDER', 'Gender');
define('_MALE', 'Male');
define('_FEMALE', 'Female');
define('_MA_BIRTHDAY', 'Date of birth');
define('_MA_BIRTHDAYMSG', 'Fill in as month/day/year');
define('_MA_TELEPHONE', 'Telphone number');
define('_MA_FAX', 'Fax number');
define('_OSC_NEWSLETTER', 'Recieve Shop newsletter');
define('_OSC_NEWSLETTERMSG', 'This is a seperate e-mail about new shop items and discounts');
define('_BOUNDREGISTRATION', 'By clicking Register below you agree to be bound by these conditions.');
define('_MA_REGISTRATION', 'Registration Agreement Terms');
define('_MA_AGREE_OVER_13', 'I Agree to these terms and am <b>over</b> or <b>exactly 13</b> years of age');
define('_MA_AGREE_UNDER_13', 'I Agree to these terms and am <b>under</b> 13 years of age');
define('_MA_DO_NOT_AGREE', 'I do not agree to these terms');
define('_MA_REGISTRATION_INFO', 'Registration Information');
define('_MA_ITEMS_REQUIRED', 'Items marked with a * are required unless stated otherwise.');
define('_MA_PROFILE_INFO_NOTICE', 'This information will be publicly viewable');
define('_USERNAME', 'Username');
define('_EMAILADDRESS', 'Email address');
define('_BLANKFORAUTO', 'Leave blank for auto-generate your password');
define('_CONFIRMPASSWORD', 'Confirm password');
define('_MA_SUBMIT', 'Submit'); // Renamed already in admin language
define('_RESET', 'Reset');
define('_MA_FAKEMAILMSG', '(This Email will be public. Just type what you want, Spam proof)');
define('_MA_DATEFORMATMSG', 'The syntax used is identical to the PHP <a href="http://www.php.net/date">date()</a> function');
define('_MA_SIGNATUREMSG', 'This is a block of text that can be added to posts you make. There is a 255 character limit');
define('_MA_NOTIFYREPLYMSG', 'Sends an email when someone replies to a topic you have posted in. This can be changed whenever you post');
define('_MA_POPUPPMMSG', 'Will open a new popup window to inform you when new private messages arrive');
define('_ACTDISABLED', 'This function has been <b>DISABLED</b> by the site admin.');
define('_USERFINALSTEP', 'User Registration: Final Step');
define('_USERCHECKDATA', 'please check the following information. If all is correct you can proceed with the registration by clicking on "Finish" button, otherwise "Go Back" and change whatever information is needed.');
define('_YOURPASSWORD', 'Your Password is');
define('_YOUWILLRECEIVE', 'You will receive a confirmation email with a link to a page you should visit to activate your account in the next 24 hours.');
define('_YOUWILLRECEIVE2', 'You will receive an email with login information.');
define('_WAITAPPROVAL', 'The site Administrator will review your application and send you an email if you are approved.');
define('_FINISH', 'Finish');
define('_YOUUSEDEMAIL', 'You or someone else has used your email account');
define('_TOREGISTER', 'to register an account at');
define('_USERREGLOGIN', 'User Registration/Login');
define('_USERAPPLOGIN', 'User Application/Login');
define('_ACCOUNTCREATED', 'New User Account Created!');
define('_YOUAREREGISTERED', 'Welcome! You are now registered as a member.');
define('_FINISHUSERCONF', 'Your request for a new account has been processed. You\'ll receive an email in the next few seconds with a activation link that should be visited in the next 24 hours to be able to activate your account.');
define('_FINISHUSERCONF2', 'Your request for a new account has been processed. You can now ');
define('_FINISHUSERCONF3', 'login here');
define('_TOFINISHUSER', 'To finish the registration process you should visit the following link in the next 24 hours to activate your user account, otherwise the information will be automaticaly deleted by the system and you should apply again:');
define('_ACTIVATIONSUB', 'User Account Activation');
define('_REGISTRATIONSUB', 'User Account Registration');
define('_THANKSUSER', 'Thank you for registering at');
define('_FOLLOWINGMEM', 'Following is the member information:');
define('_TOAPPLY', 'to apply for an account at');
define('_APPLICATIONSUB', 'User Account Application');
define('_YOUAREPENDING', 'Welcome! Your application as a new member is pending. The site administrator will contact you when your application is processed.');
define('_THANKSAPPL', 'Thank you for applying at');
define('_MEMADD', 'Member Added');
define('_MEMAPL', 'Member Applied');
define('_ERRORINVEMAIL', 'ERROR: Invalid Email');
define('_NICK2SHORT', 'Username is too short. It must be more than 3 characters');
define('_SECCODEINCOR', 'Security Code is incorrect, Please go back and type it exactly as given...');
define('_ERROREMAILSPACES', 'ERROR: Email addresses do not contain spaces');
define('_ERRORINVNICK', 'ERROR: Invalid Username');
define('_NICK2LONG', 'Username is too long. It must be less than 26 characters');
define('_NAMERESERVED', 'ERROR: This Name is Reserved');
define('_NAMEDENIED', 'ERROR: This part of your chosen user name may not be used :');
define('_NICKNOSPACES', 'ERROR: There cannot be any spaces in the Username');
define('_NICKTAKEN', 'ERROR: Username already taken');
define('_EMAILREGISTERED', 'ERROR: Email address already registered');
define('_PASSDIFFERENT', 'Both passwords are different. They need to be identical.');
define('_YOUPASSMUSTBE', 'Your Password must be');
define('_CHARLONG', 'characters long');
define('_ACCOUNTRESERVED', 'New User Account Reserved!');
define('_EMAILNOTUSABLE', 'ERROR: Email address is not usable');
define('_ACTIVATIONYES', 'User Activation');
define('_ACTMSG', 'Your account has been activated. Please login from <a href="'.getlink().'">this link</a> using your assigned Username and Password.');
define('_ACTIVATIONERROR', 'User Activation Error');
define('_ACTERROR1', 'User verification number is invalid.<br /><br />Please be sure to click on the link you received by email or apply for a new account <a href="'.getlink().'">here</a>.');
define('_ACTERROR2', 'There is no user in the database with this information.<br /><br />You can register a new user from <a href="'.getlink().'">here</a>.');
define('_CURRENTPASSWORD', 'Current password');
define('_CURRENTPASSWORDMSG', 'You must confirm your current password if you wish to change it or alter your e-mail address');
define('_NEWPASSWORD', 'New password');
define('_NEWPASSWORDMSG', 'You only need to supply a password if you want to change it');
define('_CONFIRMPASSWORDMSG', 'You only need to confirm your password if you changed it above');
define('_SUREDELETE', 'Are you sure you want to delete your account?');
define('_CATEGORY_SELECT', 'Select category');
define('_SELECT_AVATAR', 'Select avatar');
define('_CANCEL_AVATAR', 'Cancel avatar');
define('_THISISYOURPAGE', 'This is your personal page');
define('_PERSONALINFO', 'Personal Information');
define('_ABOUT_USER', 'All about ');
define('_CONTACTINFO', 'Contact Information');
define('_PM', 'Private Message');
define('_JOINED', 'Joined');
define('_RANK', 'Rank');
define('_LAST10BBTOPIC', 'Last 10 Forum Topics');
define('_LAST10BBTOPICS', 'Last 10 Forum Topics started by');
define('_LAST10COMMENT', 'Last 10 Comments');
define('_LAST10DOWNLOAD', 'Last 10 Downloads');
define('_LAST10DOWNLOADS', 'Last 10 Downloads by');
define('_LAST10SUBMISSION', 'Last 10 News Submissions');
define('_LAST10WEBLINK', 'Last 10 Web Links');
define('_LAST10WEBLINKS', 'Last 10 Web Links by');
define('_MEMBERGROUPS', 'Group Memberships');
define('_AVATAR', 'Avatar');
define('_WEBSITE', 'Web Site');
define('_RA_LOCATION', 'Location'); // Renamed already in admin language
define('_RA_OCCUPATION', 'Occupation'); // Renamed already in admin language
define('_RA_INTERESTS', 'Interests'); // Renamed already in admin language
define('_RA_SIGNATURE', 'Signature'); // Renamed already in admin language
define('_USERSTATUS', 'Actual User Status');
define('_ONLINE', 'Online');
define('_OFFLINE', 'Offline');
define('_NOTSUBSCRIBED', 'You\'re not subscribed to our Newsletter');
define('_SUBSCRIBED', 'You\'re subscribed to our Newsletter');
define('_MA_BROADCAST', 'Broadcast Public Message'); // Renamed already in main language
define('_BROADCASTTEXT', 'You can send a <i>Public Message</i> from here (255 characters max). This message will be displayed to all online users in the next 10 minutes. Any user online will see you message just once in a red bar under the site\'s logo. Any user can deactivate this feature from <a href="'.getlink("Your_Account&amp;op=edithome").'">here</a>. Please don\'t abuse. HTML code isn\'t allowed here.');
define('_BROADCASTSENT', 'Your Broadcast Message has been sent.');
define('_BROADCASTNOTSENT', '<b>ERROR:</b> Your Broadcast Message is empty or you already sent a message recently. To publish another message you need to wait about 10 minutes.');
define('_RETURNPAGE', 'Return to your personal page');
define('_MA_MYHEADLINES', 'My Headlines'); // Renamed already in admin language
define('_SELECTASITE', 'Select the site from which you want to read the headlines:');
define('_SELECTASITE2', 'Select a Web Site');
define('_ORTYPEURL', 'Or type the headlines RSS/XML url of your prefered site:');
define('_MA_GO', 'Go'); // Renamed already in admin language
define('_HEADLINESFROM', 'Headlines from');
define('_MA_READMYJOURNAL', 'Read My Journal'); // Renamed already in main language
define('_ACCDELETED', 'Account has been Deleted');
define('_SERVERNOMAIL', 'This server does not have mail access. Please contact the site admin for assistance.');
define('_ACCSUSPENDED', 'Account has been Suspended');
define('_BESUREACT', 'Be sure you have activated your account.');
define('_MEMDEL', 'Member Deleted');
define('_YOUBAD', 'ERROR: You have attempted to perform an illegal operation!');
define('_NOINFOFOR', 'There is no available info for');
define('_SORRYNOUSERINFO', 'Sorry, no corresponding user info was found');
define('_LOGININCOR', 'Login Incorrect! Please Try Again...');
define('_UPDATEFAILED', 'Could not update user entry. Please, Contact the Administrator.');
define('_ACCTCHANGE', 'Change Info');
define('_ACCTCOMMENTS', 'Comments Setup');
define('_ACCTEXIT', 'Logout');
define('_ACCTHOME', 'Change Home');
define('_ACCTJOURNAL', 'Your Journals');
define('_ACCTTHEME', 'Select Theme');
define('_CHANGEHOME', 'Your Home');
define('_CHANGEYOURINFO', 'Your Info');
define('_CONFIGCOMMENTS', 'Comments');
define('_DELETEACCT', 'Delete Account');
define('_LOGOUTEXIT', 'Logout/Exit');
define('_MA_MESSAGES', 'Messages'); // Renamed already in admin language
define('_RETURNACCOUNT', 'Return to Your Account Page');
define('_SELECTTHETHEME', 'Themes');
define('_DELETEREASON', 'Reason for Deletion');
define('_SUSPENDREASON', 'Reason for Suspension');
define('_DENYREASON', 'Reason for Denial');
define('_CHECKNUM', 'Activation #');
define('_REGDATE', 'Date Added');
define('_ACCTAPPROVE', 'Account Approved');
define('_ACCTDELETE', 'Account Deleted');
define('_ACCTDENY', 'Account Denied');
define('_ACCTREMOVE', 'Account Removed');
define('_ACCTRESTORE', 'Account Restored');
define('_ACCTSUSPEND', 'Account Suspended');
define('_ACTIVEUSERS', 'Active Users');
define('_MA_ADDUSER', 'Add a New User'); // Renamed already in admin language
define('_MA_ADDUSERBUT', 'Add User'); // Renamed already in admin language
define('_MA_ALLOWUSERS', 'Allow other users to view my email address'); // Renamed already in admin language
define('_APPROVE', 'Approve');
define('_APPROVEUSER', 'Approve User');
define('_MA_DELETEUSER', 'Delete User'); // Renamed already in admin language
define('_DELETEUSERS', 'Deleted Users');
define('_DENY', 'Deny');
define('_DENYUSER', 'Deny User');
define('_DETUSER', 'User Details');
define('_MA_EDITUSER', 'Edit User'); // Renamed already in admin language
define('_MA_FORCHANGES', '(For Changes Only)'); // Renamed already in admin language
define('_MA_FUNCTIONS', 'Functions'); // Renamed already in admin language
define('_HASAPPROVE', 'has been approved.');
define('_HASDELETE', 'has been deleted.');
define('_HASDENY', 'has been denied.');
define('_HASREMOVE', 'has been removed.');
define('_HASRESTORE', 'has been restored.');
define('_HASSUSPEND', 'has been suspended.');
define('_MA_ID', 'ID'); // Renamed already in admin language
define('_MA_MODIFY', 'Modify'); // Renamed already in admin language
define('_MA_NAME', 'Name'); // Renamed already in admin language
define('_MA_NEWSLETTER', 'Newsletter'); // Renamed already in admin language
define('_OK', 'Ok!');
define('_MA_OPTION', 'Option'); // Renamed already in admin language
define('_OR', 'or');
define('_MA_PERMISSIONS', 'Permissions'); // Renamed already in admin language
define('_PROMOTE', 'Promote');
define('_PROMOTEUSER', 'Promote User');
define('_REMOVE', 'Remove');
define('_REMOVEUSER', 'Remove User');
define('_MA_REQUIREDNOCHANGE', '(required, can\'t be changed later)'); // Renamed already in admin language
define('_RESEND', 'Resend');
define('_RESENDMAIL', 'Resend Activation Email');
define('_RESTORE', 'Restore');
define('_RESTOREUSER', 'Restore User');
define('_MA_RETYPEPASSWD', 'Retype Password'); // Renamed already in admin language
define('_MA_SAVECHANGES', 'Save Changes'); // Renamed already in admin language
define('_SHOWMAIL', 'Show Email');
define('_SORRYTO', 'Your account at');
define('_SURE2APPROVE', 'Are you sure you want to approve user');
define('_MA_SURE2DELETE', 'Are you sure you want to delete user'); // Renamed already in admin language
define('_SURE2DENY', 'Are you sure you want to deny user');
define('_SURE2PROMOTE', 'Are you sure you want to promote user');
define('_SURE2REMOVE', 'Are you sure you want to remove user');
define('_SURE2RESEND', 'Are you sure you want to resend activation email');
define('_SURE2RESTORE', 'Are you sure you want to restore user');
define('_SURE2SUSPEND', 'Are you sure you want to suspend user');
define('_SUSPEND', 'Suspend');
define('_SUSPENDUSER', 'Suspend User');
define('_SUSPENDUSERS', 'Suspended Users');
define('_MA_USERADMIN', 'User\'s Administration'); // Renamed already in admin language
define('_MA_USERID', 'User ID'); // Renamed already in admin language
define('_USERPROMOTED', 'User has been promoted to Admin.');
define('_MA_USERUPDATE', 'Update User'); // Renamed already in admin language
define('_WAITINGUSER', 'Waiting User');
define('_WAITINGUSERS', 'Waiting Users');
define('_MA_ARTICLES', 'Articles'); // Renamed already in admin language
define('_MA_BBFORUM', 'Forum'); // Renamed already in admin language
define('_MA_CONTENT', 'Content'); // Renamed already in admin language
define('_MA_DOWNLOAD', 'Downloads'); // Renamed already in admin language
define('_MA_ENCYCLOPEDIA', 'Encyclopedia'); // Renamed already in admin language
define('_MA_FAQ', 'FAQ'); // Renamed already in admin language
define('_MA_REVIEWS', 'Reviews'); // Renamed already in admin language
define('_MA_SECTIONS', 'Sections'); // Renamed already in admin language
define('_MA_SURVEYS', 'Surveys'); // Renamed already in admin language
define('_MA_TOPICS', 'Topics'); // Renamed already in main language
define('_MA_WEBLINKS', 'Web Links'); // Renamed already in admin language
define('_ADDERROR', 'ERROR: There was a problem with the database.');
define('_NAMEERROR', 'ERROR: This Admin name is already in use.');
define('_MA_NEEDTOCOMPLETE', 'You need to complete all required fields'); // Renamed already in admin language
define('_MA_PASSWDNOMATCH', 'Sorry, the new passwords doesn\'t match. Go Back and Try Again'); // Renamed already in admin language
define('_MA_USERNOEXIST', 'User Doesn\'t Exists!'); // Renamed already in admin language
define('_USERLOGIN', 'User Login');
define('_REGNEWUSER', 'New User Registration');
define('_PASSWORDLOST', 'Lost your Password?');
define('_NOPROBLEM', 'No problem. Just type your Username and click on send button. We will send an automatic Email to you with your Confirmation Code, then you need to re-type your Username and type your Confirmation Code and we will send to you a new password.');
define('_CONFIRMATIONCODE', 'Confirmation Code');
define('_SENDPASSWORD', 'Send Password');
define('_MA_YOUARELOGGEDOUT', 'You are now logged out!'); // Renamed already in admin language
define('_USERACCOUNT', 'The user account');
define('_AT', 'at');
define('_HASTHISEMAIL', 'has this email associated with it.');
define('_AWEBUSERFROM', 'A Web user from');
define('_HASREQUESTED', 'has just requested that password be sent.');
define('_YOURNEWPASSWORD', 'Your new Password is:');
define('_YOUCANCHANGE', 'You can change it after you login at');
define('_IFYOUDIDNOTASK', 'If you didn\'t asked for this, don\'t worry. You are seeing this message, not \'them\'. If this was an error just login with your new password.');
define('_PASSWORD4', 'Password for');
define('_MAILED', 'Mailed.');
define('_CODEREQUESTED', 'has just requested a Confirmation Code to change the password.');
define('_YOURCODEIS', 'Your Confirmation Code is:');
define('_WITHTHISCODE', 'With this code you can now assign a new password at');
define('_IFYOUDIDNOTASK2', 'If you didn\'t asked for this, don\'t worry. Just delete this Email.');
define('_CODEFOR', 'Confirmation Code for');
define('_USERPASSWORD4', 'User Password for');
define('_255CHARMAX', '(255 characters max. Type your signature with HTML coding)');
define('_CANKNOWABOUT', '(255 characters max. Type what others can know about yourself)');
define('_SOMETHINGWRONG', 'Something screwed up... don\'t you hate that?');
define('_COMMENTSCONFIG', 'Comments Configuration');
define('_DISPLAYMODE', 'Display Mode');
define('_NOCOMMENTS', 'No Comments');
define('_NESTED', 'Nested');
define('_FLAT', 'Flat');
define('_THREAD', 'Thread');
define('_SORTORDER', 'Sort Order');
define('_OLDEST', 'Oldest First');
define('_NEWEST', 'Newest First');
define('_HIGHEST', 'Highest Scores First');
define('_THRESHOLD', 'Threshold');
define('_COMMENTSWILLIGNORED', 'Comments scored less than this setting will be ignored.');
define('_UNCUT', 'Uncut and Raw');
define('_EVERYTHING', 'Almost Everything');
define('_FILTERMOSTANON', 'Filter Most Anonymous');
define('_USCORE', 'Score');
define('_SCORENOTE', 'Anonymous posts start at 0, logged in posts start at 1. Moderators add and subtract points.');
define('_NOSCORES', 'Do Not Display Scores');
define('_HIDDESCORES', '(Hiddes score: They still apply, you just don\'t see them.)');
define('_MAXCOMMENT', 'Max Comment Length');
define('_TRUNCATES', '(Truncates long comments, and adds a Read More link. Set really big to disable)');
define('_BYTESNOTE', 'bytes (1024 bytes = 1K)');
define('_PRIVATEMESSAGES', 'Your Private Messages');
define('_BROWSEUSERS', 'Browse Users');
define('_SEARCHUSERS', 'Search Users');
define('_SENDPRIVATEMSG', 'Send a Private Message to');
define('_THEMESELECTION', 'Theme Selection');
define('_SELECTTHEME', 'Select One Theme');
define('_THEMETEXT1', 'This option will change the look for the whole site.');
define('_THEMETEXT2', 'The changes will be valid only to you.');
define('_THEMETEXT3', 'Each user can view the site with different theme.');
define('_MA_HOMECONFIG', 'Home Configuration'); // Renamed already in admin language
define('_NEWSINHOME', 'News Number in Home');
define('_MAX127', '(max. 127):');
define('_MESSAGEACTIVATE', 'Activate Broadcast Public Messages?');
define('_ACTIVATEPERSONAL', 'Activate Personal Menu');
define('_CHECKTHISOPTION', '(Check this option and the following text will appear in the Home)');
define('_YOUCANUSEHTML', '(You can use HTML code to put links, for example)');

// avatar
define('_AVATAR_FILESIZE', 'The avatar image file size must be less than %d KB');
define('_AVATAR_CONTROL', 'Avatar control panel');
define('_AVATAR_INFO', 'Displays a small graphic image below your details in posts. Only one image can be displayed at a time, its width can be no greater than '.$MAIN_CG['avatar']['max_width'].' pixels, the height no greater than '.$MAIN_CG['avatar']['max_height'].' pixels, and the file size no more than '.intval($MAIN_CG['avatar']['filesize']/1024).' KB.');
define('_CURRENT_IMAGE', 'Current Image');
define('_DELETE_IMAGE', 'Delete Image');
define('_AVATAR_OFFSITE', 'Link to off-site Avatar');
define('_AVATAR_OFFSITEMSG', 'Enter the URL of the location containing the Avatar image you wish to link to.');
define('_AVATAR_SELECT', 'Select Avatar from gallery');
define('_SHOW_GALLERY', 'Show gallery');
define('_AVATAR_UPLOAD', 'Upload Avatar from your machine');
define('_AVATAR_UPLOAD_URL', 'Upload Avatar from a URL');
define('_AVATAR_GALLERY', 'Avatar gallery');
define('_AVATAR_ERR_IMTYPE', 'The avatar filetype must be .jpg, .gif or .png currently it is: %s');
define('_AVATAR_ERR_SIZE', 'Image is too large: %d x %d');
define('_AVATAR_ERR_URL', 'A connection could not be made to the URL you gave');
define('_AVATAR_ERR_DATA', 'The file at the URL you gave contains no data');

/**************************
  ADMNINISTRATION SECTION
**************************/
// users_cfg.php
define('_USER_CONFIG', 'Member Configuration');
define('_BROADCASTMSG','Activate Broadcast Messages?');
define('_MYHEADLINES','Activate Headlines Reader?');
define('_USERSHOMENUM','Let users change News number in Home?');
define('_PASSWDLEN','Minimum users password length');
define('_REQUIREADMIN', 'Require Admin Approval');
define('_ACTALLOWREG', 'Allow User Registration');
define('_ACTNOTIFYADD', 'Notify Admin of User Registration');
define('_ACTALLOWDELETE', 'Allow User self-deletion');
define('_ACTNOTIFYDELETE', 'Notify Admin of User Deletion');
define('_ACTALLOWTHEME', 'Allow User Theme Selection');
define('_ACTALLOWMAIL', 'Allow User Email Change');
define('_USEACTIVATE', 'Use email Activation');
define('_USEREGISTERMSG', 'Use Registration Agreement');
// fields

// avatar
define('_AVATAR_SETTINGS', 'Avatar Configuration');
define('_AV_ALLOW_LOCAL', 'Enable gallery avatars');
define('_AV_ALLOW_REMOTE', 'Enable remote avatars');
define('_AV_ALLOW_REMOTE_INFO', 'Avatars linked to from another website');
define('_AV_ALLOW_UPLOAD', 'Enable avatar uploading');
define('_AV_MAX_FILESIZE', 'Maximum Avatar File Size');
define('_AV_MAX_FILESIZE_INFO', 'For uploaded avatar files');
define('_AV_MAX_AVATAR_SIZE', 'Maximum Avatar Dimensions');
define('_AV_MAX_AVATAR_SIZE_INFO', '(Height x Width in pixels)');
define('_AV_AVATAR_STORAGE_PATH', 'Avatar Storage Path');
define('_AV_AVATAR_STORAGE_PATH_INFO', 'Path under your phpBB root dir, e.g. images/avatars');
define('_AV_AVATAR_GALLERY_PATH', 'Avatar Gallery Path');
define('_AV_AVATAR_GALLERY_PATH_INFO', 'Path under your phpBB root dir for pre-loaded images, e.g. images/avatars/gallery');

// users.php
define('_USERADMIN','Users Administration');
define('_ADDUSER','Add a New User');
define('_EDITUSER','Edit User');
define('_ICQ','ICQ Number');
define('_AIM','AIM Number');
define('_YIM','YIM Number');
define('_MSNM','MSNM Number');
define('_LOCATION','Location');
define('_OCCUPATION','Occupation');
define('_INTERESTS','Interests');
define('_SIGNATURE','Signature');
define('_EXTRAINFO','Extra Info');
define('_USERID','User ID');
define('_ALLOWUSERS','Allow other users to view my email address');
define('_DELETEUSER','Delete User');
define('_SURE2DELETE','Are you sure you want to delete user');
define('_USERNOEXIST','User Doesn\'t Exists!');
define('_NEEDTOCOMPLETE','You need to complete all required fields');
define('_ADDUSERBUT','Add User');

?>
