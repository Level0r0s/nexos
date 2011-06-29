<?php

/**************************************************************************/
/* Your_Account Module                                                    */
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG Dev Team
  http://cpgnuke.com

  Under the GNU General Public License version 2*/
/* Last modification notes:
  Changed to UTF-8 encoding                                               */
/* $Id: lang-indonesian.php,v 1.1 2004/07/28 23:09:10 akamu Exp $        */
/*                                                                        */
/* Please change the second quoted phrase, not the capitalized one        */
/* If you need to use double quotes (") remember to add a backslash (\),  */
/* so your entry will look like: This is \"double quoted\" text.          */
/* Try to stay as close to the meaning of the english phrase.             */
/**************************************************************************/

//lang_translation_info

define("_REQUIREADMIN", "Perlu Persutujuan Admin");
define("_ACTALLOWREG", "Izinkan pendaftaran user baru:");
define("_ACTNOTIFYADD", "Email Admin mengenai Pendaftaran User Baru:");
define("_ACTALLOWDELETE", "Izinkan User menghapus account:");
define("_ACTNOTIFYDELETE", "Email Admin mengenai penghapusan account oleh User:");
define("_ACTALLOWTHEME", "Izinkan User memilih Theme:");
define("_ACTALLOWMAIL", "Izinkan User mengubah alamat email:");
define("_SERVERMAIL", "Server bisa mengirim email?");
define("_USEACTIVATE", "Gunakan pengaktifan account melalui email?");
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
define("_USERNAME", "Nama User");
define("_EMAILADDRESS", "Email address");
define("_BLANKFORAUTO", "Biarkan kosong untuk password otomatis");
define("_CONFIRMPASSWORD", "Confirm password");
define("_SUBMIT", "Submit");
define("_RESET", "Reset");
define("_MA_FAKEMAILMSG", "(This Email will be public. Just type what you want, Spam proof)");
define("_MA_DATEFORMATMSG", "The syntax used is identical to the PHP <a href=\"http://www.php.net/date\">date()</a> function");
define("_MA_SIGNATUREMSG", "This is a block of text that can be added to posts you make. There is a 255 character limit");
define("_MA_NOTIFYREPLYMSG", "Sends an email when someone replies to a topic you have posted in. This can be changed whenever you post");
define("_MA_POPUPPMMSG", "Will open a new popup window to inform you when new private messages arrive");

// config options
define("_ACTDISABLED", "Fungsi ini telah di-<b>NONAKTIF</b>-kan oleh admin situs.");

// Register steps
define("_USERFINALSTEP", "Registrasi member Baru: Tahap Terakhir");
define("_USERCHECKDATA", "mohon periksa informasi berikut. Jika sudah benar anda bisa melanjutkan pendaftaran dengan mengklik tombol \"Selesai\", atau klik \"Kembali\" dan ubah informasi yang masih anda rasa kurang benar.");
define("_YOURPASSWORD", "Your Password is");
define("_YOUWILLRECEIVE", "Anda akan menerima email konfirmasi yang berisi link ke halaman yang harus anda kunjungi untuk mengaktifkan account anda dalam waktu 24 jam.");
define("_YOUWILLRECEIVE2", "Anda akan menerima email yang berisi informasi login.");
define("_WAITAPPROVAL", "Admin situs akan memeriksa pendaftaran anda dan mengirimkan email pengaktifan account jika pendaftaran anda disetujui.");
define("_FINISH", "Selesai");

// Register finish
define("_YOUUSEDEMAIL", "Anda atau seseorang menggunakan alamat email ini");
define("_TOREGISTER", "untuk mendaftar pada");
define("_USERREGLOGIN", "Registrasi/Login member");
define("_USERAPPLOGIN", "Pendaftaran/Login User");
define("_ACCOUNTCREATED", "<i>akun</i> Member Baru Berhasil Dibuat!");
define("_YOUAREREGISTERED", "Selamat! Sekarang anda sudah terdaftar menjadi member.");
define("_FINISHUSERCONF", "Pendaftaran anda telah diproses. Anda akan menerima email konfirmasi yang berisi link ke halaman yang harus anda kunjungi untuk mengaktifkan account anda dalam waktu 24 jam.");
define("_FINISHUSERCONF2", "Permintaan anda untuk mendapatkan account baru telah diproses. Anda sekarang bisa");
define("_FINISHUSERCONF3", "login di sini");
define("_TOFINISHUSER", "Untuk menyelesaikan proses pendaftaran anda harus mengunjungi link dibawah ini dalam waktu kurang dari 24 jam untuk mengaktifkan account anda, jika tidak informasi pendaftaran anda akan otomatis dihapus oleh sistem dan anda harus mendaftar ulang:");
define("_ACTIVATIONSUB", "Pengaktifan Account User Baru");
define("_REGISTRATIONSUB", "Pendaftaran User Baru");
define("_THANKSUSER", "Terima kasih atas pendaftaran anda di");
define("_FOLLOWINGMEM", "Berikut adalah informasinya:");
define("_TOAPPLY", "untuk mendaftarkan account baru di");
define("_APPLICATIONSUB", "Formulir Pendaftaran User Baru");
define("_YOUAREPENDING", "Selamat datang! Pendaftaran anda sedang dalam daftar tunggu. Admin situs akan menghubungi anda jika pendaftaran anda telah diproses.");
define("_THANKSAPPL", "Terima kasih atas pendaftaran anda di");
define("_MEMADD", "Member Ditambahkan");
define("_MEMAPL", "Member Mendaftar");

// Register errors
define("_ERRORINVEMAIL", "ERROR: Email Salah");
define("_NICK2SHORT", "Nama User terlalu pendek. Harus lebih dari 3 karakter");
define("_SECCODEINCOR", "Kode yang anda masukkan salah, Silahkan kembali dan ketik ulang seperti yang ditampilkan...");
define("_ERROREMAILSPACES", "ERROR: Alamat Email tidak boleh berisi spasi");
define("_ERRORINVNICK", "ERROR: Nama Login Salah");
define("_NICK2LONG", "Nama login yang anda inginkan terlalu panjang (tidak boleh lebih dari 25 karakter)");
define("_NAMERESERVED", "ERROR: Nama Login Sudah Ada");
define("_NAMEDENIED","ERROR: Nama user anda tidak boleh mengandung bagian ini: ");
define("_NICKNOSPACES", "ERROR: Tidak boleh ada spasi pada Nama Login");
define("_NICKTAKEN", "ERROR: Nama Login Sudah Ada");
define("_EMAILREGISTERED", "ERROR: Alamat Email sudah terdaftar");
define("_PASSDIFFERENT", "Kedua password yang anda masukkan tidak sama. Ulangi sekali lagi.");
define("_YOUPASSMUSTBE", "Password anda harus");
define("_CHARLONG", "karakter");
define("_ACCOUNTRESERVED", "Account user baru sudah digunakan!");
define("_EMAILNOTUSABLE", "ERROR: Alamat email tidak bisa digunakan");

// User activation
define("_ACTIVATIONYES", "Pengaktifan User Baru");
define("_ACTMSG", "Account anda telah diaktifkan. Silahkan login <a href=\"modules.php?name=Your_Account\">di sini</a> menggunakan Nama Login dan Password Anda.");
define("_ACTIVATIONERROR", "Error Pengaktifan User Baru");
define("_ACTERROR1", "Kode pengaktifan salah.<br><br>PAstikan anda mengklik link yang anda terima melalui email atau silahkan daftar lagi <a href=\"modules.php?name=Your_Account\">di sini</a>.");
define("_ACTERROR2", "Tidak ada user dengan informasi ini dalam database.<br><br>Anda bisa mendaftar sebagai User Baru <a href=\"modules.php?name=Your_Account\">di sini</a>.");

// Edit user profile
define("_CURRENTPASSWORD", "Current password");
define("_CURRENTPASSWORDMSG", "You must confirm your current password if you wish to change it or alter your e-mail address");
define("_NEWPASSWORD", "New password");
define("_NEWPASSWORDMSG", "You only need to supply a password if you want to change it");
define("_CONFIRMPASSWORDMSG", "You only need to confirm your password if you changed it above");
define("_SUREDELETE", "Apakah anda yakin mau menghapus account anda?");
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
define("_THISISYOURPAGE", "Halaman pribadi");
define("_PERSONALINFO", "Informasi Pribadi");
define("_ABOUT_USER", "All about ");
define("_CONTACTINFO", "Contact Information");
define("_PM", "Private Message");
define("_JOINED", "Joined");
define("_RANK", "Rank");
define("_LAST10BBTOPIC", "10 Posting Forum terakhir");
define("_LAST10BBTOPICS", "10 Topik Forum terakhir");
define("_LAST10COMMENT", "10 Komentar terakhir");
define("_LAST10DOWNLOAD", "10 Download terakhir");
define("_LAST10DOWNLOADS", "10 Download terakhir oleh");
define("_LAST10SUBMISSION", "10 Kiriman Artikel/Berita terakhir");
define("_LAST10WEBLINK", "10 Link terakhir");
define("_LAST10WEBLINKS", "10 Link terakhir oleh");
define("_MEMBERGROUPS", "Keanggotaan Grup");
define("_AVATAR", "Avatar");
define("_WEBSITE", "Homepage");
define("_LOCATION", "Lokasi");
define("_OCCUPATION", "Pekerjaan");
define("_INTERESTS", "Minat");
define("_SIGNATURE", "Tanda tangan");

define("_USERSTATUS", "Status");
define("_ONLINE", "Online");
define("_OFFLINE", "Offline");
define("_NOTSUBSCRIBED", "Tidak terdaftar sebagai penerima Newsletter");
define("_SUBSCRIBED", "Terdaftar sebagai penerima Newsletter");

define("_BROADCAST", "Tampilkan pesan umum");
define("_BROADCASTTEXT", "Anda bisa mengirimkan <i>Pesan Umum</i> dari sini (maksimal 255 karakter). Pesan ini akan ditampilkan ke semua member yang online dalam waktu 10 menit. Any user online will see you message just once in a red bar under the site's logo. Any user can deactivate this feature from <a href=\"modules.php?name=Your_Account&amp;op=edithome\">here</a>. Tidak diperbolehkan menggunakan k ode HTML.");
define("_SEND", "Kirim");
define("_BROADCASTSENT", "Penyampaian Pesan telah selesai.");
define("_BROADCASTNOTSENT", "<b>ERROR:</b> Penyampaian pesan anda masih kososng atau anda barusan saja menyampaikan pesan. Untuk mempublikasikan pesan lain, silahkan menunggu selama kurang lebih 10 menit.");
define("_RETURNPAGE", "Kembali ke homepage pribadi");

define("_MYHEADLINES", "HeadlineKu");
define("_SELECTASITE", "Pilih situs yang ingin anda baca headlinenya:");
define("_SELECTASITE2", "Pilih Web Site");
define("_ORTYPEURL", "Atau ketikkan URL RSS/XML situs yang ingin anda inginkan:");
define("_GO", "Go");
define("_HEADLINESFROM", "Headline dari");

define("_READMYJOURNAL", "Read My Journal");

// Errors
define("_ACCDELETED", "Account dihapus");
define("_SERVERNOMAIL", "Server ini tidak memiliki layanan email. Silahkan hubungi admin situs untuk mendapatkan bantuan.");
define("_ACCSUSPENDED", "Account ditunda");
define("_BESUREACT", "Pastikan anda telah mengaktifkan account anda.");
define("_MEMDEL", "Member Dihapus");
define("_YOUBAD", "ERROR: Anda telah mencoba melakukan hal yang tidak diizinkan!");
define("_NOINFOFOR", "Tidak ada info untuk");
define("_SORRYNOUSERINFO", "Maaf, tidak ada informasi member dengan spesifikasi tersebut");
define("_LOGININCOR", "Login Salah! Silakan coba lagi...");
define("_UPDATEFAILED", "Gagal meng-update informasi member. Mohon hubungi Administrator Situs.");

// Navbar
define("_ACCTCHANGE", "Ubah<br>Info");
define("_ACCTCOMMENTS", "Setting Komentar"); 
define("_ACCTEXIT", "Logout<br>Keluar");
define("_ACCTHOME", "Ubah<br>Halaman Utama");
define("_ACCTJOURNAL", "Jurnal<br>Anda");
define("_ACCTTHEME", "Pilih<br>Theme");
define("_CHANGEHOME", "Edit Halaman Depan");
define("_CHANGEYOURINFO", "Edit Info Anda");
define("_CONFIGCOMMENTS", "Setup Komentar");
define("_DELETEACCT", "Hapus<br>Account");
define("_LOGOUTEXIT", "Logout/Keluar");
define("_MESSAGES", "Pesan");
define("_RETURNACCOUNT", "Kembali ke halaman anda");
define("_SELECTTHETHEME", "Pilih Theme");

// Admin area
define("_DELETEREASON", "Alasan Penghapusan");
define("_SUSPENDREASON", "Alasan Penundaan");
define("_DENYREASON", "Alasan Penolakan");
define("_CHECKNUM", "Pengaktifan #");
define("_REGDATE", "Tanggal Masuk");
define("_ACCTAPPROVE", "Account disetujui");
define("_ACCTDELETE", "Account dihapus");
define("_ACCTDENY", "Account ditolak");
define("_ACCTREMOVE", "Account dikeluarkan");
define("_ACCTRESTORE", "Account dikembalikan");
define("_ACCTSUSPEND", "Account ditunda");
define("_ACTIVEUSERS", "User Aktif");
define("_ADDUSER", "Tambah User Baru");
define("_ADDUSERBUT", "Tambah User");
define("_ALLOWUSERS", "Izinkan user lain untuk melihat alamat emailku");
define("_APPROVE", "Setujui");
define("_APPROVEUSER", "Setujui User");
define("_DELETEUSER", "Hapus User");
define("_DELETEUSERS", "User dihapus");
define("_DENY", "Tolak");
define("_DENYUSER", "Tolak User");
define("_DETUSER", "Detail User");
define("_EDITUSER", "Edit member");
define("_FORCHANGES", "(Hanya Untuk Perubahan)");
define("_FUNCTIONS", "Fungsi");
define("_HASAPPROVE", "telah disetujui.");
define("_HASDELETE", "telah dihapus.");
define("_HASDENY", "telah ditolak.");
define("_HASREMOVE", "telah dikeluarkan.");
define("_HASRESTORE", "telah dikembalikan.");
define("_HASSUSPEND", "telah ditunda.");
define("_ID", "ID");
define("_MODIFY", "Ubah");
define("_NAME", "Nama");
define("_NEWSLETTER", "Newsletter");
define("_OK", "OK!");
define("_OPTION", "Pilihan");
define("_OR", "atau");
define("_PERMISSIONS", "Permission");
define("_PROMOTE", "Promosikan");
define("_PROMOTEUSER", "Promosikan User");
define("_REMOVE", "Keluarkan");
define("_REMOVEUSER", "Keluarkan User");
define("_REQUIREDNOCHANGE", "(harus diisi, tidak bisa diubah lagi)");
define("_RESEND", "Kirim lagi");
define("_RESENDMAIL", "Kirimkan lagi Email Pengaktifan Account");
define("_RESTORE", "Kembalikan");
define("_RESTOREUSER", "Kembalikan User");
define("_RETYPEPASSWD", "Ketik ulang Password");
define("_SAVECHANGES", "Simpan Perubahan");
define("_SHOWMAIL", "Tampilkan Email");
define("_SORRYTO", "Account anda di");
define("_SURE2APPROVE", "Apakah anda yakin mau menyetujui user");
define("_SURE2DELETE", "Apakah anda yakin mau menghapus user");
define("_SURE2DENY", "Apakah anda yakin mau menolak user");
define("_SURE2PROMOTE", "Apakah anda yakin mau mempromosikan user");
define("_SURE2REMOVE", "Apakah anda yakin mau mengeluarkan user");
define("_SURE2RESEND", "Apakah anda yakin mau mengirimkan lagi email pengaktifan account");
define("_SURE2RESTORE", "Apakah anda yakin mau mengembalikan user");
define("_SURE2SUSPEND", "Apakah anda yakin mau menunda user");
define("_SUSPEND", "Tunda");
define("_SUSPENDUSER", "Tunda User");
define("_SUSPENDUSERS", "User Ditunda");
define("_URL", "URL");
define("_USERADMIN", "Pengaturan User");
define("_USERID", "ID User");
define("_USERPROMOTED", "User telah dipromosikan menjadi Admin");
define("_USERUPDATE", "User Update");
define("_WAITINGUSER", "User dalam daftar tunggu.");
define("_WAITINGUSERS", "User dalam daftar tunggu.");

define("_ARTICLES", "Artikel/Berita");
define("_BBFORUM", "Forum");
define("_CONTENT", "Konten/Isi");
define("_DOWNLOAD", "Download");
define("_ENCYCLOPEDIA", "Ensiklopedi");
define("_FAQ", "PSD");
define("_REVIEWS", "Ulasan");
define("_SECTIONS", "Bagian");
define("_SURVEYS", "Survey/Poll");
define("_TOPICS", "Topics");
define("_WEBLINKS", "Link");

// Admin errors
define("_ADDERROR", "R: Ada masalah dengan database.");
define("_NAMEERROR", "ERROR: Nama Admin ini telah digunakan.");
define("_NEEDTOCOMPLETE", "Anda harus melengkapi semua isian yang harus diisi");
define("_PASSWDNOMATCH", "Maaf, kedua password baru tidak sama. Silahkan kembali dan coba lagi");
define("_USERNOEXIST", "User Tidak Ditemukan");

/*****************************************************/
/* Originals : modules/Your_Account/*.*              */
/*****************************************************/
define("_USERLOGIN", "Login member");
define("_USERREGLOGIN", "Registrasi/Login member");
define("_REGNEWUSER", "Registrasi member Baru");
define("_PASSWORDLOST", "Lupa Password?");

define("_NOPROBLEM", "<ol>
<li>Masukkan Nama Login anda dan klik \"Kirim Password\".<br>
Kami akan mengirimkan kode konfirmasi ke alamat email yang terdaftar dengan nama login anda.</li>
<li>Masukkan lagi Nama Login dan kode konfirmasi yang kami kirimkan, dan sekali lagi klik \"Kirim Password\".<br>
Password terkirim ke alamat email anda.<br>Anda bisa login dengan password baru yang dikirimkan, jika anda ingin mengubahnya lagi, lakukan setelah login dengan password tersebut.</li>
</ol>");
define("_CONFIRMATIONCODE", "Kode Konfirmasi");
define("_SENDPASSWORD", "Kirim Password");

define("_YOUARELOGGEDOUT", "Anda sudah logout sekarang!");

define("_USERACCOUNT", "Seorang member dengan nama login");
define("_AT", "pada");
define("_HASTHISEMAIL", "menggunakan alamat email ini sebagai registrasi,");
define("_AWEBUSERFROM", "dan pengunjung situs kami dari");
define("_HASREQUESTED", "menginginkan password dikirim ke alamat email ini.");
define("_YOURNEWPASSWORD", "Password baru anda:");
define("_YOUCANCHANGE", "Anda bisa mengubahnya setelah login di");
define("_IFYOUDIDNOTASK", "Jika anda tidak meminta, abaikan saja. Pesan ini hanya terkirim ke anda. Silakan login dengan password baru anda.");

define("_PASSWORD4", "Password untuk");
define("_MAILED", "sudah dikirim.");

define("_CODEREQUESTED", "meminta Kode Konfirmasi untuk mengubah password.");
define("_YOURCODEIS", "Kode Konfirmasi anda adalah:");
define("_WITHTHISCODE", "Dengan kode ini anda bisa meminta password baru di");
define("_IFYOUDIDNOTASK2", "Jika anda tidak menginginkan pesan ini, atau tidak membutuhkan password baru, hapus saja pesan ini.");

define("_CODEFOR", "Kode Konfirmasi untuk");
define("_USERPASSWORD4", "Password untuk");

define("_255CHARMAX", "(maks 255 karakter. Kode HTML dibolehkan)");
define("_CANKNOWABOUT", "(maks 255 karakter. Masukkan informasi anda yang anda ingin orang lain lihat)");
define("_SOMETHINGWRONG", "Ada kesalahan.... kacau kan?");
define("_CHARLONG", "karakter");

// Edit comments view
define("_COMMENTSCONFIG", "Konfigurasi Komentar");
define("_DISPLAYMODE", "Mode Tampilan");
define("_NOCOMMENTS", "Tanpa Komentar");
define("_NESTED", "sekumpulan");
define("_FLAT", "Datar saja");
define("_THREAD", "Menurut Kiriman");
define("_SORTORDER", "Pengurutan");
define("_OLDEST", "Yang lama dulu");
define("_NEWEST", "Yang baru dulu");
define("_HIGHEST", "Tertinggi dulu");
define("_THRESHOLD", "Permulaan");
define("_COMMENTSWILLIGNORED", "Komentar dengan nilai kurang dari yang anda inginkan akan diabaikan.");
define("_UNCUT", "Biarkan seperti aslinya");
define("_EVERYTHING", "Hampir semuanya");
define("_FILTERMOSTANON", "Filter Anonim");
define("_USCORE", "Nilai");
define("_SCORENOTE", "Nilai dari Anonymous dimulai dengan 0, oleh member dengan 1.");
define("_NOSCORES", "Jangan tampilkan Nilai");
define("_HIDDESCORES", "(Sembunyikan nilai: nilai tetap berlaku, hanya tidak ditampilkan.)");
define("_MAXCOMMENT", "Panjang maksimal komentar");
define("_TRUNCATES", "(Menyingkat komentar panjang dan menambah link untuk pembacaan selengkapnya. Masukkan angka yang besar untuk menonaktifkan)");
define("_BYTESNOTE", "bytes (1024 bytes = 1K)");

define("_PRIVATEMESSAGES", "Pesan Pribadi Anda");
define("_BROWSEUSERS", "Lihat member Lainnya");
define("_SEARCHUSERS", "Cari member Lainnya");
define("_SENDPRIVATEMSG", "Send a Private Message to");

// Change theme
define("_THEMESELECTION", "Pemilihan Theme");
define("_SELECTTHEME", "Pilih satu theme");
define("_THEMETEXT1", "Opsi ini akan mengubah tampilan seluruh situs.");
define("_THEMETEXT2", "Perubahan hanya akan terjadi pada anda.");
define("_THEMETEXT3", "Setiap member bisa memilih theme yang berbeda-beda.");

// Edit home
define("_HOMECONFIG", "Konfigurasi Halaman Depan");
define("_NEWSINHOME", "Jumlah berita di halaman depan");
define("_MAX127", "(maks. 127):");
define("_MESSAGEACTIVATE", "Aktifkan penyampaian pesan umum?");
define("_ACTIVATEPERSONAL", "Aktifkan Menu Pribadi");
define("_CHECKTHISOPTION", "(Beri tanda cek pada opsi ini dan teks di bawah akan muncul pada halaman depan anda)");
define("_YOUCANUSEHTML", "(Anda bisa menggunakan kode HTML, untuk membuat link misalnya)");
?>