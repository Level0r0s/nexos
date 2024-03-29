<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/turkish/your_account.php,v $
  $Revision: 9.8 $
  $Author: nanocaiordo $
  $Date: 2006/08/26 08:54:55 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_MA_HIDDEN','Gizli');
define('_MA_VISIBLE','Görünür');
define('_MA_REQUIRED','Gerekli');
define('_MA_PROFILE_INFO','Profil Bilgileri');
define('_MA_ADDITIONAL','Ek Bilgi');
define('_MA_REALNAME','Gerçek İsim');
define('_MA_FAKEMAIL','Sahte Email');
define('_MA_HOMEPAGE','Ana Sayfa');
define('_MA_ICQ','ICQ Numarası');
define('_MA_AIM','AIM Ekran İsmi');
define('_MA_YIM','Yahoo! Messenger ID');
define('_MA_MSNM','MSN Passport Adresi');
define('_MA_LOCATION','Bölgem');
define('_MA_OCCUPATION','Eğitimim');
define('_MA_INTERESTS','İlgi Alanlarım');
define('_MA_SIGNATURE','İmzam');
define('_MA_EXTRAINFO','Ekstra Bilgi');
define('_MA_PREFERENCES','Tercihlerim');
define('_MA_TIMEZONE','Zaman Bölgem');
define('_MA_DATEFORMAT','Tarih Formatı');
define('_MA_RECEIVENEWSLETTER','Gazete Üyeliği');
define('_MA_SHOWEMAIL','Email adresimi göster');
define('_MA_SHOWONLINE','Bağlı olduğumu göster/gizle');
define('_MA_ALLOWBBCODE','BBCode\'a izin ver');
define('_MA_ALLOWHTML','HTML\'e izin ver');
define('_MA_ALLOWSMILIES','Simili\'leri Aktif tut');
define('_MA_NOTIFYREPLY','Cevap geldiğinde haberdar et');
define('_MA_NOTIFYPM','Özel mesaj geldiğinde Email ile bilgi ver');
define('_MA_POPUPPM','Yeni özel mesaj geldiğinde yeni pencerede göster');
define('_MA_ATTACHSIG','Her zaman imzamı ekle');
define('_MA_PRIVATE','Özel Bilgilerim');
define('_MA_FIRSTNAME','İsminiz');
define('_MA_LASTNAME','Soy İsminiz');
define('_MA_GENDER','Cinsiyet ');
define('_MALE','Erkek');
define('_FEMALE','Kadın');
define('_MA_BIRTHDAY','Doğum Tarihi');
define('_MA_BIRTHDAYMSG','ay/gün/yıl olarak doldurunuz');
define('_MA_TELEPHONE','Telefon Numarası');
define('_MA_FAX','Fax Numarası');
define('_OSC_NEWSLETTER','Recieve Shop newsletter');
define('_OSC_NEWSLETTERMSG','This is a separate e-mail about new shop items and discounts');
define('_BOUNDREGISTRATION','Kayıt Ol/Üye Ol\'a basarak aşağıdaki şartları kabul ediyorsunuz.');
define('_MA_REGISTRATION','Kayıt/Üyelik Şartları');
define('_MA_AGREE_OVER_13','Yukarıdaki şartları kabul ediyorum ve <b>13 yaş üzeri</b> veya <b>tam 13</b> yaşındayım.');
define('_MA_AGREE_UNDER_13','Şartları kabul ediyorum ve 13 yaş <b>altındayım.</b>');
define('_MA_DO_NOT_AGREE','Bu şartları kabul etmiyorum.');
define('_MA_REGISTRATION_INFO','Kayıt/Üyelik Bilgileri');
define('_MA_ITEMS_REQUIRED','Aksi belirtilmediği taktirde * ile işaretli alanlar zorunludur.');
define('_MA_PROFILE_INFO_NOTICE','Bu bilgiler herkese açık olacaktır');
define('_USERNAME','Kullanıcı İsmi');
define('_EMAILADDRESS','Email Adresi');
define('_BLANKFORAUTO','Otomatik şifre yaratmak için boş bırakınız');
define('_CONFIRMPASSWORD','Şifrenizi Tekrarlayın');
define('_MA_SUBMIT','Gönder');
define('_MA_FAKEMAILMSG','Bu Email adresi herkese açık olacaktır');
define('_MA_DATEFORMATMSG','The syntax used is identical to the PHP <a href="http://php.net/date">date()</a> function');
define('_MA_SIGNATUREMSG','This is a block of text that can be added to my posts<br />'.sprintf(_M_CHARS, 255));
define('_MA_NOTIFYREPLYMSG','Sends an email when someone replies to a topic you have posted in. This can be changed whenever you post');
define('_MA_POPUPPMMSG','Will open a new popup window to inform you when new private messages arrive');
define('_ACTDISABLED','This function has been <b>DISABLED</b> by the site administrator');
define('_USERFINALSTEP','Üye Kayıt :Son Adım');
define('_USERCHECKDATA','lütfen aşağıdaki bilgileri kontrol ediniz.Eğer bilgiler doğru ise 'Bitir' düğmesine basınız.Doğru değilse 'Geri' düğmesine basarak gerekli düzetmeyi yapınız.');
define('_YOURPASSWORD','Şifreniz:');
define('_YOUWILLRECEIVE','Üyeliğinizi aktif hale getirebilmek için bir aktivasyon bağlantısı içeren Eposta alacaksınız. Aktivasyon bağlantısını 24 saat içerisinde ziyaret etmelisiniz.');
define('_YOUWILLRECEIVE2','Üyelik bilgilerinizi içeren bir Eposta alacaksınız.');
define('_WAITAPPROVAL','Site yöneticileri başvurunuzu alıp size Eposta ile kabulünüz durumunda ulaşacaktır.');
define('_FINISH','Bitir');
define('_YOUUSEDEMAIL','Siz veya bir başkası Eposta hesabınızı kullandı ve');
define('_TOREGISTER','sitemize kayıt oldu:');
define('_USERREGLOGIN','Üye Kayıt/Giriş');
define('_USERAPPLOGIN','Üye Başvuru/Giriş');
define('_ACCOUNTCREATED','Yeni Üye Hesabı Yaratıldı !');
define('_YOUAREREGISTERED','Hoşgeldiniz! Şu anda kayıtlı bir kullanıcımızsınız.');
define('_FINISHUSERCONF','Yeni Üye hesabı için müracaatınız işleme alınmıştır.<br />Üyeliğinizi aktif hale getirebilmek için bir bağlantı içeren Eposta alacaksınız. Epostadaki Bağlantıyı 24 saat içerisinde ziyaret etmelisiniz.');
define('_FINISHUSERCONF2','Yeni  Üyelik için başvurunuz işleme alınmıştır. Şu anda ');
define('_FINISHUSERCONF3','buradan giriniz');
define('_TOFINISHUSER','To finish the registration process you should visit the following link within the next 24 hours to activate your user account, otherwise the information will be purged by our system and you will need to re-apply');
define('_ACTIVATIONSUB','Üyelik hesabı aktivasyonu');
define('_REGISTRATIONSUB','Üye hesabı kayıd');
define('_THANKSUSER','Kayıt olduğunuz için teşekkürler');
define('_FOLLOWINGMEM','Aşağıdakiler üyelik bilgilerinizdir:');
define('_TOAPPLY','to apply for an account at');
define('_APPLICATIONSUB','Üyelik Hesabu Başvurusu');
define('_YOUAREPENDING','Hoşgeldiniz! Yeni üyelik başvurunuz beklemededir. Site yöneticisi başvurunuz işleme alındığında sizle temasa geçecektir.');
define('_THANKSAPPL','Müracaatınız için teşekkür ederiz:');
define('_MEMADD','Üye Eklendi');
define('_MEMAPL','Üye Müracaatı Akındı');
define('_ERRORINVEMAIL','HATA: Geçersiz Eposta');
define('_NICK2SHORT','Kullanıcı ismi çok kısa. En az 3 karakter olmalıdır.');
define('_SECCODEINCOR','Güvenlik Kodu Yanlış, geri dönerek tekrar giriniz....');
define('_ERROREMAILSPACES','HATA: Eposta adresleri boşluk içeremez.');
define('_ERRORINVNICK','HATA: Geçersiz Kullanıcı ismi');
define('_NICK2LONG','Kullanıcı ismi çok uzun. 26 karakterden kısa olmalıdır.');
define('_NAMERESERVED','HATA:Bu isim daha önceden alınmış.');
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
define('_ACTMSG','Hesabınız aktif hale getirilmiştir <a href="'.getlink().'">buraya tıklayarak</a> Kullanıcı isminizi ve şifrenizi yazıp giriş yapabilirsiniz.');
define('_ACTIVATIONERROR','Kullanıcı Aktivasyon Hatası');
define('_ACTERROR1','User verification number is invalid.<br /><br />Please be sure to click on the link you received by email or apply for a new account <a href="'.getlink().'">here</a>.');
define('_ACTERROR2','There is no user in the database with this information.<br /><br />You can register a new user from <a href="'.getlink().'">here</a>.');
define('_CURRENTPASSWORD','Current password');
define('_CURRENTPASSWORDMSG','You must confirm your current password if you wish to change it or alter your e-mail address');
define('_NEWPASSWORD','New password');
define('_NEWPASSWORDMSG','You only need to supply a password if you want to change it');
define('_CONFIRMPASSWORDMSG','You only need to confirm your password if you changed it above');
define('_SUREDELETE','Hesabınızı silmek istediğinizden eminmisiniz?');
define('_CATEGORY_SELECT','Kategori seçiniz');
define('_SELECT_AVATAR','Avatar seçiniz');
define('_CANCEL_AVATAR','Avatar İptal');
define('_THISISYOURPAGE','Bu sizin kişisel sayfanız');
define('_PERSONALINFO','Kişisel Bilgi');
define('_ABOUT_USER','Hakkında ');
define('_CONTACTINFO','Contact Information');
define('_PM','Özel Mesaj');
define('_JOINED','Katıldı');
define('_RANK','Rank');
define('_LAST10BBTOPIC','Son 10 Forum Başlığı');
define('_LAST10BBTOPICS','Last 10 Forum Topics started by');
define('_LAST10COMMENT','Son 10 Yorum');
define('_LAST10DOWNLOAD','Son 10 Dosya');
define('_LAST10DOWNLOADS','Son 10 dosya');
define('_LAST10SUBMISSION','Son 10 Haber Gönderimi');
define('_LAST10WEBLINK','Son 10 Bağlantı');
define('_LAST10WEBLINKS','Son 10 Bağlantı');
define('_MEMBERGROUPS','Gurup Üyeliğkleri');
define('_AVATAR','Avatar');
define('_WEBSITE','Web Sayfası');
define('_USERSTATUS','Gerçek Üye Statüsü');
define('_ONLINE','Bağlı');
define('_OFFLINE','Bağlı Değil');
define('_NOTSUBSCRIBED','Gazetemize Abone Değilsiniz');
define('_SUBSCRIBED','Gazetemize Abonesiniz');
define('_MA_BROADCAST','Herkese açık mesaj yayınla');
define('_BROADCASTTEXT','You can send a <i>Public Message</i> from here (255 characters max). This message will be displayed to all online users in the next 10 minutes. Any user online will see you message just once in a red bar under the site\'s logo. Any user can deactivate this feature from <a href="'.getlink("Your_Account&amp;op=edithome").'">here</a>. Please don\'t abuse. HTML code isn\'t allowed here.');
define('_BROADCASTSENT','Your Broadcast Message has been sent.');
define('_BROADCASTNOTSENT','<b>ERROR:</b> Your Broadcast Message is empty or you already sent a message recently. To publish another message you need to wait about 10 minutes.');
define('_RETURNPAGE','Return to your personal page');
define('_MA_MYHEADLINES','My Headlines');
define('_SELECTASITE','Select the site from which you want to read headlines:');
define('_SELECTASITE2','Select a Web Site');
define('_ORTYPEURL','Or type the url of your prefered RSS/XML headlines site:');
define('_MA_GO','Git');
define('_HEADLINESFROM','Headlines from');
define('_MA_READMYJOURNAL','Read My Blog');
define('_ACCDELETED','Hesap Silinmiştir');
define('_SERVERNOMAIL','This server does not have mail access. Please contact the site admin for assistance.');
define('_ACCSUSPENDED','Account has been Suspended');
define('_BESUREACT','Hesabınızı aktif hale getirdiğinizden emin olunuz.');
define('_MEMDEL','Üye silindi');
define('_YOUBAD','HATA: Kanunsuz bir işlem yapmaya çalıştınız!!!');
define('_NOINFOFOR','There is no available info for');
define('_SORRYNOUSERINFO','Üzgünüz;böyle bir üye bilgisi bulunamadı');
define('_LOGININCOR','Giriş Başarısız! Lütfen tekrar deneyiniz...');
define('_UPDATEFAILED','Could not update user entry. Please contact the administrator');
define('_ACCTCHANGE','Bilgi Değiştir');
define('_ACCTCOMMENTS','Yorum Ayarları');
define('_ACCTEXIT','Çıkış');
define('_ACCTHOME','Ana Sayfa Değiş');
define('_ACCTJOURNAL','Your Blogs');
define('_ACCTTHEME','Tema seç');
define('_CHANGEHOME','Ana Sayfanız');
define('_CHANGEYOURINFO','Kişisel Bilgileriniz');
define('_CONFIGCOMMENTS','Yorumlar');
define('_DELETEACCT','Delete Account');
define('_LOGOUTEXIT''Çıkış');
define('_MA_MESSAGES','Mesajlar');
define('_RETURNACCOUNT','Hesabınız sayfasına dönünüz');
define('_SELECTTHETHEME','Temalar');
define('_DELETEREASON','Reason for Deletion');
define('_SUSPENDREASON','Reason for Suspension');
define('_DENYREASON','Reason for Denial');
define('_CHECKNUM','Aktivasyon #');
define('_REGDATE','Eklenme Tarihi');
define('_ACCTAPPROVE','Account Approved');
define('_ACCTDELETE','Account Deleted');
define('_ACCTDENY','Account Denied');
define('_ACCTREMOVE','Account Removed');
define('_ACCTRESTORE','Account Restored');
define('_ACCTSUSPEND','Account Suspended');
define('_ACTIVEUSERS','Aktif Üyeler');
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
define('_MA_MODIFY','Düzenle');
define('_MA_NAME','İsim');
define('_MA_NEWSLETTER','Gazete');
define('_MA_OPTION','Opsiyonlar');
define('_OR','ve');
define('_MA_PERMISSIONS','İzinler');
define('_PROMOTE','Promote');
define('_PROMOTEUSER','Promote User');
define('_REMOVE','Remove');
define('_REMOVEUSER','Remove User');
define('_MA_REQUIREDNOCHANGE','(required, can\'t be changed later)');
define('_RESEND','Resend');
define('_RESENDMAIL','Resend Activation Email');
define('_RESTORE','Restore');
define('_RESTOREUSER','Restore User');
define('_MA_RETYPEPASSWD','Şifreyi tekrar giriniz');
define('_MA_SAVECHANGES','Değişiklikleri Kaydet');
define('_SHOWMAIL','Eposta Göster');
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
define('_MA_ARTICLES','Makaleler');
define('_MA_BBFORUM','Forum');
define('_MA_CONTENT','İçerik');
define('_MA_DOWNLOAD','Dosyalaar');
define('_MA_ENCYCLOPEDIA','Ansiklopedi');
define('_MA_FAQ','SSS');
define('_MA_REVIEWS','İzlenimler');
define('_MA_SECTIONS','Bölümler');
define('_MA_SURVEYS','Anketler');
define('_MA_TOPICS','Başlıklar');
define('_MA_WEBLINKS','Web Bağlantıları');
define('_ADDERROR','ERROR: There was a problem with the database.');
define('_NAMEERROR','ERROR: This Admin name is already in use.');
define('_MA_NEEDTOCOMPLETE','You need to complete all required fields');
define('_MA_PASSWDNOMATCH','Sorry, the new passwords doesn\'t match. Go Back and Try Again');
define('_MA_USERNOEXIST','User Doesn\'t Exist!');
define('_USERLOGIN','Üye Giriş');
define('_REGNEWUSER','Yeni Üye Kaydı');
define('_PASSWORDLOST','Lost your Password?');
define('_NOPROBLEM','Simply type your nickname or email address and click on the send button. We will dispatch a confirmation email to the address we have on file, then you need to re-type your nickname or email address and enter the confirmation code we sent you, and we will generate a new password for you');
define('_CONFIRMATIONCODE','Confirmation Code');
define('_SENDPASSWORD','Send Password');
define('_MA_YOUARELOGGEDOUT','You are now logged out!');
define('_USERACCOUNT','The user account');
define('_HASTHISEMAIL','has this email associated with it.');
define('_AWEBUSERFROM','A Web user from');
define('_HASREQUESTED','has just requested a new password for this account');
define('_YOURNEWPASSWORD','Your new Password is:');
define('_YOUCANCHANGE','You can change it after you login at');
define('_IFYOUDIDNOTASK','If you didn\'t ask for this, don\'t worry. You are seeing this message, not \'them\'. If this was an error just login with your new password.');
define('_PASSWORD4','Password for');
define('_MAILED','Mailed.');
define('_CODEREQUESTED','has just requested a Confirmation Code to change the password.');
define('_YOURCODEIS','Your Confirmation Code is:');
define('_WITHTHISCODE','With this code you can now assign a new password at');
define('_IFYOUDIDNOTASK2','If you didn\'t ask for this, don\'t worry. Just delete this email.');
define('_CODEFOR','Confirmation Code for');
define('_USERPASSWORD4','User Password for');
define('_255CHARMAX','(255 characters max. Type your signature with HTML coding)');
define('_CANKNOWABOUT','(255 characters max. Type what others can know about yourself)');
define('_SOMETHINGWRONG','Something screwed up... don\'t you hate that?');
define('_COMMENTSCONFIG','Comments Configuration');
define('_DISPLAYMODE','Display Mode');
define('_NOCOMMENTS','No Comments');
define('_NESTED','Nested');
define('_FLAT','Flat');
define('_THREAD','Thread');
define('_SORTORDER','Sort Order');
define('_OLDEST','Oldest First');
define('_NEWEST','Newest First');
define('_HIGHEST','Highest Scores First');
define('_THRESHOLD','Threshold');
define('_COMMENTSWILLIGNORED','Comments scored less than what you set will be ignored');
define('_UNCUT','Uncut and Raw');
define('_EVERYTHING','Almost Everything');
define('_FILTERMOSTANON','Filter Most Anonymous');
define('_USCORE','Score');
define('_SCORENOTE','Anonymous posts start at 0, registered posts start at 1<br />Moderators can add and subtract points');
define('_NOSCORES','Hide Scores');
define('_HIDDESCORES','(Hides score: They still apply, you just don\'t see them.)');
define('_MAXCOMMENT','Max Comment Length');
define('_TRUNCATES','(Truncates long comments, and adds a Read More link. Set really big to disable)');
define('_BYTESNOTE','bytes (1024 bytes = 1 kilobyte)');
define('_BROWSEUSERS','Browse Users');
define('_SEARCHUSERS','Search Users');
define('_SENDPRIVATEMSG','Send a Private Message to');
define('_THEME','Theme');
define('_MA_HOMECONFIG','Homepage Configuration');
define('_MAX127','(max. 127):');
define('_MESSAGEACTIVATE','Activate Broadcast Public Messages?');
define('_ACTIVATEPERSONAL','Activate Personal Menu');
define('_PERSONALMENUCONTENT','Personal Menu Content');
define('_CHECKTHISOPTION','(Check this option and the following text will appear in the Home)');

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
define('_EDITUSER','Edit User');
define('_SELECTAUSER','Select a User');
define('_MA_PRIVILEGES','Privileges');
define('_ICQ','ICQ Number');
define('_AIM','AIM screen name');
define('_YIM','Yahoo! ID');
define('_MSNM','MSNM Screen Name');
define('_LOCATION','Location');
define('_OCCUPATION','Occupation');
define('_INTERESTS','Interests');
define('_EXTRAINFO','Extra Info');
define('_USERID','User ID');
define('_SURE2DELETE','Are you sure you want to delete user');
