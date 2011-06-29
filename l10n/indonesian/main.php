<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/indonesian/main.php,v $
  $Revision: 9.29 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:52 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','id');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %d %B %Y');
define('_DATESTRING2','%A, %B %d');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Hal. Selanjutnya');
define('_PREVIOUSPAGE','Hal. Sebelumnya');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Cari');
define('_LOGIN','Login');
define('_WRITES','menulis');
define('_POSTEDON','Dipublikasi pada');
define('_NICKNAME','Nama Login');
define('_PASSWORD','Password');
define('_WELCOMETO','Selamat Datang di');
define('_EDIT','Edit');
define('_DELETE','Hapus');
define('_POSTEDBY','Dikirim oleh');
define('_READS','kali dibaca');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Kembali</a>' : '<a href="javascript:history.go(-1)">Kembali</a>').' ]');
define('_COMMENTS','komentar');
define('_PASTARTICLES','Artikel Sebelumnya');
define('_OLDERARTICLES','Artikel Lama');
define('_BY','oleh');
define('_ON','pada');
define('_LOGOUT','Logout');
define('_WAITINGCONT','Daftar Tunggu');
define('_WREVIEWS','Ulasan');
define('_WLINKS','Links');
define('_ONEDAY','Hari ini tahunan lampau...');
define('_ASREGISTERED','<a href="'.getlink('Your_Account&amp;file=register').'">Daftar</a><br> <a href="'.getlink('Your_Account&amp;op=pass_lost').'">Lupa Password</a>.');
define('_MENUFOR','Menu untuk');
define('_NOBIGSTORY','Belum ada berita besar hari ini.');
define('_BIGSTORY','Berita Populer Hari Ini:');
define('_SURVEY','Survey');
define('_POLLS','Polling');
define('_PCOMMENTS','Komentar:');
define('_RESULTS','Hasil');
define('_HREADMORE','selengkapnya...');
define('_CURRENTLY','Saat ini ada,');
define('_GUESTS','tamu');
define('_MEMBERS','member yang sedang online.');
define('_YOUARELOGGED','Anda login sebagai');
define('_YOUHAVE','Ada');
define('_PRIVATEMSG','pada pesan pribadi anda.');
define('_YOUAREANON','Anda bukan member. Silakan daftar <a href="'.getlink('Your_Account&amp;file=register').'">di sini</a>, gratis!');
define('_NOTE','Catatan:');
define('_ADMIN','Admin:');
define('_WERECEIVED','Kami sudah menampilkan');
define('_PAGESVIEWS','halaman sejak');
define('_TOPIC','Topik');
define('_UDOWNLOADS','Downloand');
define('_VOTE','Vote');
define('_VOTES','Pemilih');
define('_MVIEWADMIN','Untuk: Administrator saja');
define('_MVIEWUSERS','Untuk: member saja');
define('_MVIEWANON','Untuk: Anonim saja');
define('_MVIEWALL','Untuk: Semua');
define('_EXPIRELESSHOUR','Berakhir: Kurang dari 1 jam');
define('_EXPIREIN','Berakhir dalam');
define('_UNLIMITED','Tak Terbatas');
define('_HOURS','Jam');
define('_RSSPROBLEM','Ada masalah dengan headline situs ini');
define('_SELECTLANGUAGE','Pilih Bahasa');
define('_SELECTGUILANG','');
define('_NONE','Tidak ada');
define('_BLOCKPROBLEM','<center>Ada masalah dengan Blok ini.</center>');
define('_BLOCKPROBLEM2','<center>Blok ini kosong.</center>');
define('_MODULENOTACTIVE','Maaf, Masih dalam perbaikan!');
define('_NOACTIVEMODULES','Modul Tidak Aktif');
define('_MODULENOEXIST','We\'re sorry, but the requested file, %s, does not appear to exist');
define('_FORADMINTESTS','(untuk test Admin)');
define('_BBFORUMS','Forum');
define('_ACCESSDENIED','Akses Ditolak');
define('_RESTRICTEDAREA','Anda mencoba mengakses area terbatas.');
define('_MODULEUSERS','Maaf, bagian ini hanya untuk <i>Member</i> yang terdaftar dan sudah login<br><br>Silakan daftar <a href="'.getlink('Your_Account&amp;file=register').'">di sini</a>, gratis, dan anda bisa mengakses bagian ini. Terima kasih.<br><br>');
define('_MODULEUSERS2','You can register for free by following <a href="'.getlink('Your_Account&amp;file=register').'">this</a> link, thus granting you permission to access this area of our site.<br /><br />Thank you for your understanding');
define('_MODULESADMINS','Maaf, bagian ini hanya untuk <i>Administrator</i><br><br>');
define('_MODULESGROUPS','group access required');
define('_HOME','Depan');
define('_HOMEPROBLEM','Ada masalah Besar di sini: Kami tidak punya halaman depan!!!');
define('_ADDAHOME','Tambahkan modul di halaman depan anda');
define('_HOMEPROBLEMUSER','Sedang ada masalah dengan halaman depan. Mohon kembali lagi ke situs ini nanti.');
define('_MORENEWS','Lebih banyak pada Berita');
define('_ALLCATEGORIES','Semua kategori');
define('_SPAMGUARDPROTECTED','SpamGuard has blocked this email from being sent');
define('_M_CHARS','Maximum: %s characters');

define('_SYS_MESSAGE','System Message');
define('_SYS_MESSAGES','System Messages');
define('_SYS_MAINTENANCE','You are running under maintenance mode');
define('_SYS_DEMO','You are running under administration demo mode<br />You cannot make any changes to the database<br /><a href="'.adminlink('logout').'">Log me out!</a>');

define('_DATE','Tanggal');
define('_HOUR','Jam');
define('_UMONTH','Bulan');
define('_YEAR','Tahun');
define('_JANUARY','Januari');
define('_FEBRUARY','Februari');
define('_MARCH','Maret');
define('_APRIL','April');
define('_MAY','Mei');
define('_JUNE','Juni');
define('_JULY','Juli');
define('_AUGUST','Agustus');
define('_SEPTEMBER','September');
define('_OCTOBER','Oktober');
define('_NOVEMBER','November');
define('_DECEMBER','Desember');

define('_MONDAY','Monday');
define('_TUESDAY','Tuesday');
define('_WEDNESDAY','Wednesday');
define('_THURSDAY','Thursday');
define('_FRIDAY','Friday');
define('_SATURDAY','Saturday');
define('_SUNDAY','Sunday');
//three letter abbrev.
define('_ABR_MONDAY','Mon');
define('_ABR_TUESDAY','Tue');
define('_ABR_WEDNESDAY','Wed');
define('_ABR_THURSDAY','Thu');
define('_ABR_FRIDAY','Fri');
define('_ABR_SATURDAY','Sat');
define('_ABR_SUNDAY','Sun');

define('_BWEL','Selamat Datang');
define('_BPM','Pesan pribadi');
define('_BUNREAD','belum dibaca');
define('_BREAD','Baca');
define('_BMEMP','Keanggotaan');
define('_BLATEST','Terakhir');
define('_BTD','Yang baru hari ini');
define('_BYD','Yang baru kemarin');
define('_BOVER','Semuanya');
define('_BVISIT','Orang yang Online');
define('_BVIS','Pengunjung');
define('_BMEM','Member');
define('_BTT','Total');
define('_BON','Online saat ini');
define('_BREG','Daftar');
define('_BROADCAST','Sampaikan pesan umum');
define('_BROADCASTFROM','Pesan umum dari');
define('_TURNOFFMSG','Nonaktifkan pesan umum');
define('_JOURNAL','Jurnal');
define('_READMYJOURNAL','Baca JournalKu');
define('_ADD','Tambahkan');
define('_YES','Ya');
define('_NO','Tidak');
define('_INVISIBLEMODULES','Modul yang tidak ditampilkan');
define('_ACTIVEBUTNOTSEE','(Aksti tapi tidak linknya tidak tampil)');
define('_BOTS','Bots');

define('_UM','Dragonfly Update Monitor');
define('_UM_F','Failed to contact the update service. Please try again later.');
define('_UM_G','You are using the latest version of Dragonfly');
define('_UM_R','Please <a href="%2$s" target="_blank">upgrade</a> to Dragonfly %1$s');

define('_TEAM','Tim');
define('_LINKAPPROVEDMSG','Congratulations! The web link you submitted has been approved. Please link back to us and send an email with the url where you have done so.');
define('_MODREQLINKS','Mod. Link');
define('_BROKENLINKS','Link yang terputus');
define('_MODREQDOWN','Mod. Download');
define('_BROKENDOWN','Download yang terputus');
define('_PAGEGENERATION','Generasi halaman:');
define('_SECONDS','detik');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','This page generated in %1$s seconds with %2$s DB Queries in %3$s seconds');
define('_YOUHAVEONEMSG','You have one new private message');
define('_NEWPMSG','New Private Messages');
define('_CONTRIBUTEDBY','Contributed by');
define('_CHAT','Chat');
define('_REGISTERED','Registered');
define('_CHATGUESTS','Guests');
define('_USERSTALKINGNOW','Users Talking Now');
define('_ENTERTOCHAT','Enter To Chat');
define('_CHATROOMS','Available Rooms');
define('_ALLTOPICS','Semua Topik');
define('_ASSOTOPIC','Associated Topics');
define('_HELLO','Hallo');
define('_ALL','Semua');
define('_URL','URL');
define('_SUBJECT','Subyek');
define('_PREVIEW','Preview');
define('_SEND','Kirim');
define('_ANONYMOUS','Anonymous');
define('_BREADCRUMB', 'Breadcrumb Delimiter, separates words in pagetitles');
define('_BC_DELIM',''.isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&rsaquo;');//''. is for cpglang
define('_RESET','Reset');
define('_AT','at');
define('_LASTMSGS','Last %s Forum Messages');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','Versi Cetak');

define('_CREDITS_TITLE','Credits');
define('_CREDITS_PRODUCT','Product');
define('_CREDITS_DESC','Description');
define('_CREDITS_AUTHORS','Author(s)');

define('_PP_TITLE','Privacy Policy');
define('_PP_MODIFY','Modify this message');

define('_SENDEREMAIL','Alamat Email Pengirim');
define('_SENDERNAME','Nama Pengirim');
define('_RECIPIENTNAME','Recipient Name');
define('_RECIPIENTEMAIL','Recipient Email');

define('_REASONS_0','As Is');
define('_REASONS_1','Off Topic');
define('_REASONS_2','Flamebait');
define('_REASONS_3','Troll');
define('_REASONS_4','Redundant');
define('_REASONS_5','Insightful');
define('_REASONS_6','Interesting');
define('_REASONS_7','Informative');
define('_REASONS_8','Funny');
define('_REASONS_9','Overrated');
define('_REASONS_10','Underrated');

/* My Account Tools Block */
define('_TB_BLOCK','My Account Tools');
define('_TB_TASKS','Tasks');
define('_TB_INFO','Information');
define('_TB_PROFILE_INFO','My public profile');
define('_TB_EDIT_PROFILE','My profile information');
define('_TB_EDIT_REG','My registration details');
define('_TB_EDIT_PRIVATE','My private information');
define('_TB_EDIT_AVATAR','My avatar');
define('_TB_DELETE','Delete my account');
define('_TB_CONFIG','Configuration');
define('_TB_EDIT_PREFS','My preferences');
define('_TB_EDIT_HOME','My homepage settings');
define('_TB_EDIT_COMM','My comment settings');
define('_TB_PERSONAL','Personal');
define('_TB_PERSONAL_GALLERY','My gallery');
define('_TB_PERSONAL_JOURNAL','My blog');
define('_TB_PRIVMSGS','Private Messages');
define('_TB_PRIVMSGS_INBOX','Inbox');
define('_TB_PRIVMSGS_OUTBOX','Outbox');
define('_TB_PRIVMSGS_SENTBOX','Sentbox');
define('_TB_PRIVMSGS_SAVEBOX','Savebox');
define('_TB_PRIVMSGS_SEND','Send message');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','User Info');
define('_SECURITYCODE','Security Code');
define('_TYPESECCODE','Type Code');
define('_MEMBERSOPTIONS','Members options');
define('_READSEND','Read my private messages. Send messages to others.');
define('_INBOX','Inbox');
define('_NEW','New');
define('_ACCOUNTOPTIONS','My Account. Update preferences and read my messages.');
define('_LOGOUTACCT','Log out of this account.');
define('_LOGOUTADMINACCT','Log out of admin account.');
define('_BLOGIN','Your Account');
define('_BFLOGIN','My Profile');
define('_BHID','Hidden');
define('_WHOWHERE','Who Is Where');
define('_STAFFONL','Staff Online');
define('_STAFFNONE','No staff members are online!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Community');
define('_BlogsLANG','Blogs');
define('_ContentLANG','Content');
define('_coppermineLANG','Photo Gallery');
define('_CPGlangLANG','Help Translate');
define('_DownloadsLANG','Downloads');
define('_EncyclopediaLANG','Encyclopedia');
define('_ForumsLANG','Community Forums');
define('_ContactLANG','Contact Us');
define('_FAQLANG','FAQ - Help');
define('_Members_ListLANG','Members List');
define('_NewsLANG','News');
define('_ReviewsLANG','Reviews');
define('_SearchLANG','Search');
define('_StatisticsLANG','Statistics');
define('_Stories_ArchiveLANG','Stories Archive');
define('_Submit_NewsLANG','Submit News');
define('_SurveysLANG','Surveys');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Topics');
define('_Private_MessagesLANG','My Private Messages');
define('_Tell_a_FriendLANG','Tell a Friend');
define('_Web_LinksLANG','Links');
define('_Your_AccountLANG','My Account');
define('_CPG_EventsLANG','Calendar');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Languages!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Groups');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Headlines');

define('_COMMUNICATION','Communication');
define('_FRIENDS','Friends');
define('_STORE','Store');
define('_PRODUCTS','Products');
define('_DONATE','Donate');
define('_HELP','Help');
define('_GALLERIES','Galleries');
define('_DOCS','Documentation');
define('_RULES','Rules & regulations');
define('_MENU','Main Menu');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','You <strong>are</strong> subscribed to<br />our newsletter');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','You are <strong>not</strong> subscribed to<br />our newsletter');
define('_NEWSLETTERBLOCKREGISTER','You must be a<br /><strong>registered user</strong><br />to receive our newsletter');
define('_NEWSLETTERBLOCKSUBSCRIBE','Subscribe');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Unsubscribe');
define('_NEWSLETTERBLOCKREGISTERNOW','Register Now!');
/* END Newsletter Block */

/* START class phpmailer lang array */
$PHPMAILER_LANG = array();
$PHPMAILER_LANG['provide_address'] = 'You must provide at least one recipient email address.';
$PHPMAILER_LANG['mailer_not_supported'] = ' mailer is not supported.';
$PHPMAILER_LANG['execute'] = 'Could not execute: ';
$PHPMAILER_LANG['instantiate'] = 'Could not instantiate mail function.';
$PHPMAILER_LANG['authenticate'] = 'SMTP Error: Could not authenticate.';
$PHPMAILER_LANG['from_failed'] = 'The following From address failed: ';
$PHPMAILER_LANG['recipients_failed'] = 'SMTP Error: The following recipients failed: ';
$PHPMAILER_LANG['data_not_accepted'] = 'SMTP Error: Data not accepted.';
$PHPMAILER_LANG['connect_host'] = 'SMTP Error: Could not connect to SMTP host.';
$PHPMAILER_LANG['file_access'] = 'Could not access file: ';
$PHPMAILER_LANG['file_open'] = 'File Error: Could not open file: ';
$PHPMAILER_LANG['encoding'] = 'Unknown encoding: ';
/* END class phpmailer lang array */

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_SAVECHANGES','Simpan Perubahan');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Bahasa');
define('_FUNCTIONS','Admin');
define('_SHOW','Tampilkan');
define('_TO','Untuk');
define('_DAY','Tanggal');
define('_LAST','Yang Terakhir');
define('_ACTIVE','Aktif');
define('_DEACTIVATE','Nonaktifkan');
define('_INACTIVE','Nonaktif');
define('_ACTIVATE','Aktifkan');
define('_ACTIVATE2','Aktifkan?');
define('_VIEW','Untuk');
define('_VIEWPRIV','Ditampilkan untuk');
define('_MVADMIN','Administrator saja');
define('_MVUSERS','User saja');
define('_MVANON','Anonim saja');
define('_MVALL','Semua Pengunjung');
define('_IMAGE','Gambar');
define('_GO','Lanjut!');
define('_OPTION','Pilihan');
define('_CATEGORY','Kategori');
define('_SUBCATEGORY','Sub-Category');
define('_ID','ID');
define('_EXPIRATION','Masa Berlaku');
define('_DAYS','hari');
define('_WARNING','PERINGATAN:');
define('_POLLTITLE','Judul Polling');
define('_POLLEACHFIELD','Masukkan pilihan jawaban masing-masing pada satu baris');
define('_ADDCATEGORY','Tambahkan Kategori Baru');
define('_PAGEBREAK','Untuk membuat berhalaman ganda, ketik <b>&lt;!--pagebreak--&gt;</b> pada bagian yang ingin dipenggal.');
define('_SIGNATURE','Tanda tangan');
define('_DESCRIPTION','Deskripsi');
define('_EDITCATEGORY','Edit Kategori');
define('_IN','pada');
define('_DESCRIPTION255','Deskripsi: (maks 255 karakter)');
define('_MODCATEGORY','Edit Kategori');
define('_SUBMITTER','Pengirim');
define('_VISIT','Kunjungan');
define('_EXTENDEDTEXT','Paragraf Tambahan');
define('_CHECKCATEGORIES','Periksa Kategori');
define('_INCLUDESUBCATEGORIES','(termasuk Sub Kategori)');
define('_CHECKSUBCATEGORIES','Periksa Sub Kategori');
define('_VALIDATELINKS','Validasi Link');
define('_FAILED','Gagal!');
define('_BEPATIENT','(harap bersabar)');
define('_VALIDATINGCAT','Sistem sedang memvalidasi kategori (dan semua sub kategori)');
define('_VALIDATINGSUBCAT','Sistem sedang memvalidasi sub kategori');
define('_OK','Ok!');
define('_CHECK','Periksa');
define('_IGNORE','Abaikan');
define('_HITS','Hits');
define('_FILESIZE', 'File Size');
define("_EZTHEREIS","There are");
define("_EZSUBCAT","sub-categories");
define("_EZATTACHEDTOCAT","under this category");
define("_EZBROKENLINKS","Broken Links");
define("_DELEZLINKCATWARNING","WARNING : Are you sure you want to delete this category ?<br /> You will delete all sub-categories and attached links as well !");

// index.php
define('_DEFHOMEMODULE','Modul halaman utama');
define('_MODULEINHOME','Modul untuk menjadi Halaman Depan:');
define('_CHANGE','Ubah');
define('_WHOSONLINE','Yang Online');
define('_NP_ADMIN','Notepad');
define('_NP_LOCKED','The notepad has been locked<br />Only a root administrator (super user) can unlock it');
define('_NP_SAVE','Save Notes');
define('_NP_UNLOCK','Unlock Notepad');
define('_NP_LOCK','Lock Notepad');
// news
define('_STICKY','Sticky Articles');
define('_ARTICLEUP','Move article up');
define('_ARTICLEDOWN','Move article down');
define('_UNSTICK','Unstick');
define('_STICK','Sticky');
define('_AUTOMATEDARTICLES','Berita terotomasi');
define('_STORYID','ID Berita');
define('_CURRENTPOLL','Survey Saat Ini');

// admin.php
define('_ADMINISTRATION','Administrasi');
define('_NOADMINYET','Administrator belum dibuat, lanjutkan untuk membuat Admin baru:');
define('_CREATEUSERDATA','Anda ingin membuat user biasa dengan data sama?');
define('_ADMINLOGIN','Login Administrasi Situs');
define('_ADMINID','ID Admin');
define('_EMAIL','Email');
define('_SUBMIT','Kirim');
define('_YOUARELOGGEDOUT','Anda sudah keluar sekarang!');
define('_PASSWDNOMATCH','Maaf, password baru anda tidak sama. Silakan coba sekali lagi');
define('_LOGIN_REMEMBERME','Remember me?');
define('_ADMINMENU_LOGOUT','Administration Menu Logout');
define('_PASSWORD_MALFORMED','Please include at least one number, one capital letter and one lowercase letter in your password');

// admins.php
define('_AUTHORSADMIN','Adminitrasi Administrator');
define('_NAME','Nama');
define('_REQUIRED','(harus diisi)');
define('_MODIFYINFO','Ubah Info');
define('_DELAUTHOR','Hapus Admin');
define('_ADDAUTHOR','Tambah Admin Baru');
define('_PERMISSIONS','Kekuasaan');
define('_SUPERUSER','Super User');
define('_SUPERWARNING','PERINGATAN: Jika anda memberi tanda cek pada Super User, semua kekuasaan akan otomatis didapat!');
define('_ADDAUTHOR2','Tambahkan Admin');
define('_RETYPEPASSWD','Ulangi Password');
define('_FORCHANGES','(hanya untuk perubahan)');
define('_COMPLETEFIELDS','Anda harus mengisi semua yang dibutuhkan');
define('_CREATIONERROR','Ada kesalahan pada pembuatan Admin Baru');
define('_AUTHORDEL','Hapus Admin');
define('_PUBLISHEDSTORIES','Admin ini sudah mempublikasi berita');
define('_SELECTNEWADMIN','Pilih Admin Baru');
define('_GODNOTDEL','*(WEBMASTER tidak bisa dihapus)');
define('_MAINACCOUNT','WEBMASTER*');
define('_USERS','User');

// banners.php
define('_BANNERSADMIN','Administrasi Banner');
define('_DELETEBANNER','Delete Banner');
define('_SURETODELBANNER','Are you sure you want to delete this banner?');
define('_EDITBANNER','Edit Banner');

// blocks.php
define('_BLOCKSADMIN','Administrasi Blok');
define('_CENTER','Tengah');
define('_CENTERUP','Tengah naik');
define('_CENTERDOWN','Tengah turun');
define('_BLOCKFILE','(File Blok)');
define('_BLOCKFILE2','FILE');
define('_BLOCKSYSTEM','SYSTEM');
define('_ADDNEWBLOCK','Tambahkan Blok Baru');
define('_RSSFILE','RSS/RDF file URL');
define('_ONLYHEADLINES','(Hanya unuk headlines)');
define('_REFRESHTIME','Waktu Ulang');
define('_CREATEBLOCK','Buat Blok');
define('_EDITBLOCK','Edit Blok');
define('_BLOCK','Blok');
define('_SAVEBLOCK','Simpan Blok');
define('_BLOCKACTIVATION','Aktivasi Blok');
define('_BLOCKPREVIEW','Dibawah ini adalah preview untuk Blok');
define('_WANT2ACTIVATE','Anda ingin mengaktifkannya?');
define('_ARESUREDELBLOCK','Anda yakin ingin menghapus Blok');
define('_BLOCKUP','Naikkan');
define('_BLOCKDOWN','Turunkan');
define('_BLOCKTOP','Move block to top');
define('_BLOCKBOTTOM','Move block to bottom');
define('_TITLE','Judul');
define('_POSITION','Letak');
define('_WEIGHT','Urutan');
define('_STATUS','Status');
define('_LEFTBLOCK','Blok Kiri');
define('_LEFT','Kiri');
define('_RIGHTBLOCK','Blok Kanan');
define('_RIGHT','Kanan');
define('_TYPE','Jenis');
define('_CUSTOM','Custom');
define('_FILENAME','Nama file');
define('_FILEINCLUDE','(Pilih blok custom yang akan dimasukkan. Kolom lainnya yang terisi akan diabaikan)');

// comments.php
define('_REMOVECOMMENTS','Hapus Komentar');
define('_SURETODELCOMMENTS','Anda yakin ingin menghapus komentar ini dan seluruh tanggapannya?');

// database.php
define('_SAVEDATABASE','Backup');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Status Sekarang');
define('_ACTIVATEPAGE','Aktifkan Halaman ini?');

// history.php
define('_EPHEMADMIN','Administrasi Ephemerid');
define('_ADDEPHEM','Tambah Ephemerid');
define('_EPHEMDESC','Deskripsi');
define('_EPHEMMAINT','Pengelolaan (Edit/Hapus):');
define('_EPHEMEDIT','Edit Ephemerid');
define('_EPHEMDELETE','Delete Entry');

// headlines.php
define('_RSSFAIL','Ada masalah dengan file RSS dari URL');
define('_RSSTRYAGAIN','Silakan periksa URL dan nama file RSS-nya, kemudian coba lagi.');
define('_RSSCONTENT','(Isi RSS/RDF)');
define('_IFRSSWARNING','Jika anda mengisi URL, yang anda ketikkan tidak akan tampil!');
define('_SETUPHEADLINES','(Pilih Custom dan ketik URL atau pilih dari daftar yang sudah ada)');
define('_HEADLINESADMIN','Administrasi Headline');
define('_ADDHEADLINE','Tambahkan Headline');
define('_EDITHEADLINE','Edit Headline');
define('_SURE2DELHEADLINE','PERINGATAN: Anda yakin ingin menghapus Headline ini?');

// messages.php
define('_MESSAGESADMIN','Administrasi Pesan');
define('_MESSAGETITLE','Judul');
define('_MESSAGECONTENT','Isi');
define('_ALLMESSAGES','Tampilan Pesan');
define('_EDITMSG','Edit pesan');
define('_ADDMSG','Tambah pesan');
define('_REMOVEMSG','Anda yakin ingin menghapus pesan ini? ');
define('_CHANGEDATE','Ubah tanggal mulai menjadi hari ini?');
define('_IFYOUACTIVE','(Jika anda mengaktifkan pesan ini sekarang, tanggal mulainya adalah hari ini)');

// modules.php
define('_MODULESADMIN','Administrasi Modul');
define('_HOMECONFIG','Konfigurasi Halaman Depan');
define('_MODULESADDONS','Modul dan <i>Add-ons</i>');
define('_INHOME','di Halaman Depan');
define('_MODULEHOMENOTE','<b>-= PERINGATAN =-</b><br>Modul dengan cetak tebal menunjukkan modul tersebut aktif di halaman depan.<br>Anda tidak bisa Menonaktifkan atau membatasi hak akses karena merupakan halaman utama!<br>Jika anda menghapus folder modul ini anda akan mendapatkan situs anda error.<br>Juga, modul ini akan digantikan dengan link <i>Home</i> pada Blok Modul.');
define('_PUTINHOME','Jadikan Halaman Depan');
define('_SURETOCHANGEMOD','Anda yakin ingin mengubah halaman depan dari');
define('_NOTINMENU','[ <big><strong>&middot;</strong></big> ] artinya sebuah modul yang nama dan linknya tidak ditampilkan di blok modul');
define('_SHOWINMENU','Tampilkan di blok modul?');
define('_CUSTOMTITLE','Judul Pilihan');
define('_MODULEEDIT','Modules Edit');
define('_VERSION','Versi');
define('_UPGRADE','Upgrade to %s');
define('_DBSIZE','DB size');
define('_CVS_EXPLAIN','This module appears to be able to receive updates through our CVS (Concurrent Versioning System). With CVS, you are able to receive the latest updates of a file very easily, but the latest version of a file may contain bugs as it is likely not part of our stable release.<br /><br />If you are familiar with PHP, you can update this module with the latest CVS files by using the link below. <strong>Backup all files first!</strong>');
define('_CVS_UPDATE','Update CVS files');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','Dari');
define('_STAFF','Staff');
define('_NL_RECIPS','Recipients');
define('_SUBSCRIBEDUSERS','User yang berlangganan');
define('_NL_ALLUSERS','All Members');
define('_NL_ADMINS','Administrators');
define('_NL_REGARDS','Best Regards');
define('_DISCARD','Discard');
define('_REVIEWTEXT','Mohon periksa ulang sebelum mengirimkannya:');
define('_MANYUSERSNOTE','PERINGATAN! Operasi ini akan mengirim email ke banyak penerima. Harap menunggu sampai operasi ini selesai!');
define('_NL_NOUSERS','The group selected to receive this newsletter has zero users<br />Please go back and select a different group');
define('_NUSERWILLRECEIVE','user akan menerima newsletter ini.');
define('_NLUNSUBSCRIBE',"We sent you this message because you have selected to receive newsletters from our site\n\nYou can choose to unsubscribe from our mailings at any time by following <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">this</a> link\n\nIf you would like further assistance, please send an email to <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">our administrator</a>");
define('_NEWSLETTERSENT','Newsletter sudah terkirim.');

// referers.php
define('_WHOLINKS','Siapa yang merujuk ke situs kita?');
define('_DELETEREFERERS','Hapus Perujuk');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Footer');
define('_DEBUG', 'Debug');
define('_SITECONFIG','Konfigurasi Situs');
define('_GENSITEINFO','Info umum');
define('_SITENAME','Nama Situs');
define('_SITEURL','URL');
define('_SITELOGO','Logo');
define('_SITESLOGAN','Slogan');
define('_STARTDATE','Tanggal mulai aktif situs');
define('_ADMINEMAIL','Alamat email administrator');
define('_ITEMSTOP','Jumlah untuk disebut TER');
define('_STORIESHOME','Jumlah berita dihalaman depan');
define('_OLDSTORIES','Jumlah berita pada kotak Berita Lama');
define('_ALLOWANONPOST','Bolehkan Anonim dalam pengiriman?');
define('_DEFAULTTHEME','Theme pertama');
define('_SHOWSEC','Show security code');
define('_TOOLTIPS','Show tooltips on designated fields');
define('_UM_TOGGLE','Enable Update Service');
define('_UM_EXPLAIN','This will retrieve two pieces of information from our website, dragonflycms.org: the current build of Dragonfly, and any important messages that pertain to your version of Dragonfly. The only data sent to our site is your Dragonfly version number; we do <strong>not</strong> log these requests to our server.');
// maintenance
define('_MAINTENANCE','Maintenance');
define('_MESSAGE','Message');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','Opsi Multibahasa');
define('_SELLANGUAGE','Pilih bahasa');
define('_LOCALEFORMAT','Format waktu');
define('_ACTMULTILINGUAL','Aktifkan multibahasa? ');
define('_ACTUSEFLAGS','Tampilkan bendera (bukan menu dropdown) ');
// banners
define('_BANNERSOPT','Banner');
define('_ACTBANNERS','Aktifkan banner?');
// footer
define('_FOOTERMSG','Kaki');
define('_FOOTERLINE1','Baris 1');
define('_FOOTERLINE2','Baris 2');
define('_FOOTERLINE3','Baris 3');
// backend
define('_BACKENDCONF','Konfigurasi Backend');
define('_BACKENDTITLE','Judul');
define('_BACKENDLANG','Bahasa');
// mail stories
define('_MAIL2ADMIN','Notifikasi Berita Baru');
define('_NOTIFYSUBMISSION','Kirim email ke admin jika ada pendaftaran berita baru?');
define('_EMAIL2SENDMSG','Alamat email');
define('_EMAILSUBJECT','Subjek');
define('_EMAILMSG','Pesan');
define('_EMAILFROM','Nama pengirim');
// comments
define('_COMMENTSOPT','Opsi Komentar');
define('_COMMENTSLIMIT','Batas komentar dalam byte');
define('_COMMENTSMOD','Moderasi Komentar');
define('_MODADMIN','Moderasi oleh Admin');
define('_MODUSERS','Moderasi oleh User');
define('_NOMOD','Tanpa Moderasi');
// adminmenu
define('_GRAPHICOPT','Opsi Grafis');
define('_BOTH','Both');
define('_GRAPHICAL','Graphical');
define('_SIDEBLOCK','Sideblock');
// miscellaneous
define('_MISCOPT','Lain-Lain');
define('_ACTIVATEHTTPREF','Aktifkan HTTP perujuk?');
define('_MAXREF','Jumlah maksimal HTTP perujuk');
define('_COMMENTSPOLLS','Aktifkan komentar pada polling?');
define('_COMMENTSARTICLES','Aktifkan komentar pada berita?');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','Opsi sensor');
define('_CENSORMODE','Mode sensor');
define('_NOFILTERING','Tidak pakai filter');
define('_EXACTMATCH','cocok');
define('_MATCHBEG','Kecocokan pada awal');
define('_MATCHANY','Kecocokan pada bagian apapun di teks');
define('_CENSORREPLACE','Ganti kata-kata yang disensor dengan:');
// email
define('_EMAILOPTIONS','Options for email from Contact Module and Newsletter');
define('_ALLOW_HTML_EMAIL','Allow html email');
define('_USE_SMTP','Use SMTP for email instead of php');
define('_SMTP_HOST','Address of smtp host(smtp.example.com)');
define('_USE_SMTP_AUTH','Server requires SMTP authorization');
define('_SMTP_USER_NAME','SMTP User Name');
define('_SMTP_USER_PASS','SMTP User Password');

// cpg_adminmenu.php
define('_ADMINMENU','Menu Administrasi');
define('_ADMINLOGOUT','Logout / Keluar');
define('_AMENU0','System');
define('_AMENU1','General');
define('_AMENU2','Members');
define('_AMENU3','Messages');
define('_AMENU4','Forums');
define('_AMENU5','Informative');
define('_AMENU6','Linking');
define('_AMENU7','Commerce');
define('_AMENU8','Multimedia');
define('_AMENU9','Modules');
define('_BMENU1','Help');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','Pref.Situs');
define('_DATABASE','Database');
define('_BLOCKS','Blok');
define('_MODULES','Modul');
define('_EDITADMINS','Edit Admin');
define('_MESSAGES','Pesan');
define('_BANNERS','Baner');
define('_HTTPREFERERS','HTTP Perujuk');
define('_EDITUSERS','Edit User');
define('_USERSCONFIG','Members Config');
define('_NEWSLETTER','Newsletter');
define('_SUBMISSIONS','Berita');
define('_ADDSTORY','Tambahkan Berita');
define('_TOPICS','Topik');
define('_ADMPOLLS','Survey');
define('_EPHEMERIDS','Ephemerids');
define('_REVIEWS','Ulasan');
define('_ENCYCLOPEDIA','Ensiklopedia');
define('_SURVEYS','Survey');
define('_SECTIONS','Bagian/Artikel');
define('_ARTICLES','Artikel');
define('_FAQ','FAQ');
define('_DOWNLOAD','Download');
define('_WEBLINKS','Web Links');
define('_CONTENT','Isi');
define('_SYSINFO','System Info');
define('_REPORTABUG','Report a Bug');
//coppermine admin
define('_W_INSTALL','Which Installation?');
define('_W_PAGE','Which Page?');
//security admin
define('_SECURITY','Security');
define('_PROTECTION','Protection');
define('_EMAIL_DOMAINS','E-Mail Domains');
define('_FLOODING','Flooding');
define('_UUA','Unknown User-Agents');
define('_FLOODING_TIP','Flooding: Delay<br /><em>timing between each warning</em>');
define('_BAN_TIP','Flooding: Ban Duration<br /><em>how long the ban will last for</em>');
define('_AUTO_UNBAN_TIP','Flooding: Auto Unban<br /><em>clean ban after duration time expires</em>');
define('_FOREVER','forever');
define('_REMOVE_SELECTED','Remove selected');

//errors for cpg_error
define('_ERROR','ERROR');
define('_SEC_ERROR','Security Error');
define('_ERROR_NOT_SET','%s was not set');
define('_ERROR_NO_POST','Posting from another host is disallowed...');
define('_ERROR_NO_GET','GET requests are not allowed for this function...');
define('_ERROR_BAD_CHAR','The characters that you tried to include in your %s request are forbidden...');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','You tried to access this page through a bad link...');
define('_ERROR_NONE_TO_DISPLAY','There are no %s to display');
define('_ERROR_DELETE_CONF','Are you sure that you want to delete %s?');
define('_ERROR_NO_EXIST','%s does not exist');
define('_ERROR_ALREADYEXIST','%s already exists');
define('_TASK_COMPLETED','Operation complete!');
define('_CONFIRM','Confirm');
define('_FOOTER_COPYRIGHTS', 'Interactive software released under <a href="http://dragonflycms.org/GNUGPL.html" target="_blank" title="GNU Public License Agreement">GNU GPL</a>,	<a href="'.getlink('credits').'">Code Credits</a>,	<a href="'.getlink('privacy_policy').'">Privacy Policy</a>');

# time
$LNG = array('_time' => array(
'l' => array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'),
'D' => array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'),
'F' => array(1=>'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
'M' => array(1=>'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
));
$LNG['_time']['l'][7] =& $LNG['_time']['l'][0];
$LNG['_time']['D'][7] =& $LNG['_time']['D'][0];
