<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/turkish/main.php,v $
  $Revision: 9.33 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:57 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','tr');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%e.%m.20%y Saat: %H:%M');
define('_DATESTRING2','%e.%m.%y');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Sonraki Sayfa');
define('_PREVIOUSPAGE','Önceki Sayfa');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Ara');
define('_LOGIN','Giriş');
define('_WRITES','bildirdi:');
define('_POSTEDON','Tarih:');
define('_NICKNAME','Kullanıcı Adı');
define('_PASSWORD','Şifre');
define('_WELCOMETO','Hoşgeldiniz:');
define('_EDIT','Düzenle');
define('_DELETE','Sil');
define('_POSTEDBY','Gönderen:');
define('_READS','okuma');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Geri Dön</a>' : '<a href="javascript:history.go(-1)">Geri Dön</a>').' ]');
define('_COMMENTS','yorum');
define('_PASTARTICLES','Geçmiş Haberler');
define('_OLDERARTICLES','Eski Haberler');
define('_BY','Gönderen:');
define('_ON','Tarih:');
define('_LOGOUT','Çıkış');
define('_WAITINGCONT','Bekleyen İçerik');
define('_WREVIEWS','İzlenim');
define('_WLINKS','Bağlantı');
define('_ONEDAY','Tarihte Bu Gün...');
define('_ASREGISTERED','Hala hesabınız yok mu? Hemen <a href="'.getlink('Your_Account&amp;file=register').'">açabilirsiniz</a>. Kayıtlı bir kullanıcı olarak tema yönetici, yorum ayarları ve isminizle yorum gönderme gibi avantajlara sahip olacaksınız.');
define('_MENUFOR','Menü:');
define('_NOBIGSTORY','Bu gün için henüz önemli bir haber yok.');
define('_BIGSTORY','Günün en çok okunan haberi:');
define('_SURVEY','Anket');
define('_POLLS','Anketler');
define('_PCOMMENTS','Yorum:');
define('_RESULTS','Sonuçlar');
define('_HREADMORE','devamı...');
define('_CURRENTLY','Şu an sitede,');
define('_GUESTS','ziyaretçi ve');
define('_MEMBERS','üye bulunuyor.');
define('_YOUARELOGGED','Merhaba');
define('_YOUHAVE','');
define('_PRIVATEMSG','özel mesajınız var.');
define('_YOUAREANON','Kayıtlı değilsiniz. <a href="'.getlink('Your_Account&amp;file=register').'">Buraya</a> tıklayarak ücretsiz kayıt olabilirsiniz.');
define('_NOTE','Not:');
define('_ADMIN','Yönetici:');
define('_WERECEIVED','Şu ana kadar');
define('_PAGESVIEWS','sayfa izlenimi aldık. Başlangıç:');
define('_TOPIC','Konu');
define('_UDOWNLOADS','İndirme');
define('_VOTE','Oy Ver');
define('_VOTES','Toplam Oy');
define('_MVIEWADMIN','İzle: Sadece Editörler');
define('_MVIEWUSERS','İzle: Sadece Kayıtlı Kullanıcılar');
define('_MVIEWANON','İzle: Sadece Anonim Kullanıcılar');
define('_MVIEWALL','İzle: Tüm Ziyaretçiler');
define('_EXPIRELESSHOUR','İmha: 1 saat içinde');
define('_EXPIREIN','İmha:');
define('_UNLIMITED','Limitsiz');
define('_HOURS','Saat');
define('_RSSPROBLEM','Şu an bu sitenin başlıklarında problem var');
define('_SELECTLANGUAGE','Dil Seçin');
define('_SELECTGUILANG','Arabirim Dilini Seçin:');
define('_NONE','Yok');
define('_BLOCKPROBLEM','<center>Şu an bu blokta bir sorun var.</center>');
define('_BLOCKPROBLEM2','<center>Şu an bu bloğun içeriği yok.</center>');
define('_MODULENOTACTIVE','Üzgünüm, bu modül aktif değil!');
define('_NOACTIVEMODULES','Pasif Modüller');
define('_MODULENOEXIST','Üzgünüz ama istediğiniz %s dosyası yok');
define('_FORADMINTESTS','(Yönetici tesleri için)');
define('_BBFORUMS','Forumları');
define('_ACCESSDENIED','Erişim Engellendi');
define('_RESTRICTEDAREA','Kısıtlı bir alana ulaşmaya çalışıyorsunuz.');
define('_MODULEUSERS','Üzgünüz, sitemizin bu bölümü <i>sadece kayıtlı kullanıcılar</i> içindir.<br /><br /><a href="'.getlink('Your_Account&amp;file=register').'">Buraya</a> tıklayarak ücretsiz kayıt olabilir, daha sonra<br />bu bölüme kısıtlamalarla karşılaşmadan erişebilirsiniz. Teşekkürler.<br /><br />');
define('_MODULEUSERS2','You can register for free by following <a href="'.getlink('Your_Account&amp;file=register').'">this</a> link, thus granting you permission to access this area of our site<br /><br />Thank you for your understanding');
define('_MODULESADMINS','Üzgünüz, sitemizin bu bölümü <i>sadece editörler</i> içindir.<br /><br />');
define('_MODULESGROUPS','Grup erişimi gereklidir');
define('_HOME','Ana Sayfa');
define('_HOMEPROBLEM','Önemli bir sorunumuz var: Ana Sayfa yok!!!');
define('_ADDAHOME','Ana Sayfaya bir Modül ekle');
define('_HOMEPROBLEMUSER','Şu an ana sayfada bir sorun var. Lütfen daha sonra tekrar deneyin.');
define('_MORENEWS','Devamı Haberler Bölümünde');
define('_ALLCATEGORIES','Tüm Kategoriler');
define('_SPAMGUARDPROTECTED','Spamguard bu mailin gönderilmesine izin vermiyor');
define('_M_CHARS','Maksimum: %s karakter');

define('_SYS_MESSAGE','Sistem Mesajı');
define('_SYS_MESSAGES','Sistem Mesajı');
define('_SYS_MAINTENANCE','Site Bakım Modunda');
define('_SYS_DEMO','Şu an admin demo modundasınız.<br />Veritabanında değişiklik yapamazsınız<br /><a href="'.adminlink('logout').'">Çıkış</a>');

define('_DATE','Tarih');
define('_HOUR','Saat');
define('_UMONTH','Ay');
define('_YEAR','Yıl');
define('_JANUARY','Ocak');
define('_FEBRUARY','Şubat');
define('_MARCH','Mart');
define('_APRIL','Nisan');
define('_MAY','Mayıs');
define('_JUNE','Haziran');
define('_JULY','Temmuz');
define('_AUGUST','Ağustos');
define('_SEPTEMBER','Eylül');
define('_OCTOBER','Ekim');
define('_NOVEMBER','Kasım');
define('_DECEMBER','Aralık');

define('_MONDAY','Pazartesi');
define('_TUESDAY','Salı');
define('_WEDNESDAY','Çarşamba');
define('_THURSDAY','Perşembe');
define('_FRIDAY','Cuma');
define('_SATURDAY','Cumartesi');
define('_SUNDAY','Pazar');
//three letter abbrev.
define('_ABR_MONDAY','Pzt');
define('_ABR_TUESDAY','Salı');
define('_ABR_WEDNESDAY','Çrş');
define('_ABR_THURSDAY','Prş');
define('_ABR_FRIDAY','Cm');
define('_ABR_SATURDAY','Cmt');
define('_ABR_SUNDAY','Pz');

define('_BWEL','Hoşgeldin');
define('_BPM','Özel Mesajlar');
define('_BUNREAD','Okunmamış');
define('_BREAD','Okunmuş');
define('_BMEMP','Üyelik');
define('_BLATEST','Son Üye');
define('_BTD','Bugün');
define('_BYD','Dün');
define('_BOVER','Toplam');
define('_BVISIT','Şu An Bağlı');
define('_BVIS','Ziyaretçi');
define('_BMEM','Üye');
define('_BTT','Toplam');
define('_BON','Şu An Bağlı');
define('_BREG','Kayıt Ol');
define('_BROADCAST','Herkese Açık Mesaj Yayınla');
define('_BROADCASTFROM','Genel Mesaj:');
define('_TURNOFFMSG','Herkese Açık Mesajları Kapat');
define('_JOURNAL','Günlük');
define('_READMYJOURNAL','Günlüğümü Oku');
define('_ADD','Ekle');
define('_YES','Evet');
define('_NO','Hayır');
define('_INVISIBLEMODULES','Görünmez Modüller');
define('_ACTIVEBUTNOTSEE','(Aktif ama görünmez link)');
define('_BOTS','Bots');

define('_UM','Dragonfly güncelleme ekranı');
define('_UM_F','Güncelleme sunucusuna bağlanamıyor. Daha sonra tekrar deneyin.');
define('_UM_G','Kullandığınız Dragonfly son sürüm');
define('_UM_R','Lütfen Dragonfly %1$s <a href="%2$s" target="_blank">Güncelleyin</a>');

define('_TEAM','Takım.');
define('_LINKAPPROVEDMSG','Tebrikler! Gönderdiğiniz link onaylandı. Lütfen sitemize de link veriniz..');
define('_MODREQLINKS','Bağlantı Yönetimi');
define('_BROKENLINKS','Kırık Bağlantılar');
define('_MODREQDOWN','Dosya Yönetimi');
define('_BROKENDOWN','Kırık Dosyalar');
define('_PAGEGENERATION','Sayfa Üretimi:');
define('_SECONDS','Saniye');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','This page generated in %1$s seconds with %2$s DB Queries in %3$s seconds');
define('_YOUHAVEONEMSG','1 özel mesajınız var');
define('_NEWPMSG','Yeni özel mesajlar');
define('_CONTRIBUTEDBY','Contributed by');
define('_CHAT','Sohbet');
define('_REGISTERED','Kaydoldu');
define('_CHATGUESTS','Ziyaretçi');
define('_USERSTALKINGNOW','Şuan konuşanlar');
define('_ENTERTOCHAT','Sohbete gir');
define('_CHATROOMS','Müsait Odalar');
define('_ALLTOPICS','Tüm Konular');
define('_ASSOTOPIC','İlgili Başlıklar');
define('_HELLO','Merhaba');
define('_ALL','Tümü');
define('_URL','URL');
define('_SUBJECT','Konu');
define('_PREVIEW','Önizleme');
define('_SEND','Gönder');
define('_ANONYMOUS','Ziyaretçi');
define('_BREADCRUMB', 'Breadcrumb Delimiter, appears in page titles between the words');
define('_BC_DELIM',isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&gt;&gt;');
define('_RESET','Temizle');
define('_AT','at');
define('_LASTMSGS','Son %s Forum Mesajları');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','Yazdırılabilir Sayfa');

define('_CREDITS_TITLE','Krediler');
define('_CREDITS_PRODUCT','Ürün');
define('_CREDITS_DESC','Açıklama');
define('_CREDITS_AUTHORS','Yazar(lar)');

define('_PP_TITLE','Gizlilik İlkesi');
define('_PP_MODIFY','Mesajı düzenle');

define('_SENDEREMAIL','Gönderenin Emaili');
define('_SENDERNAME','Gönderenin İsmi');
define('_RECIPIENTNAME','Alıcının ismi');
define('_RECIPIENTEMAIL','Alıcının E-Maili');

define('_REASONS_0','Olduğu Gibi');
define('_REASONS_1','Konu Dışı');
define('_REASONS_2','Flamebait');
define('_REASONS_3','Troll');
define('_REASONS_4','Yedek');
define('_REASONS_5','Görülebilir');
define('_REASONS_6','İlginç');
define('_REASONS_7','Bilgilendirici');
define('_REASONS_8','Eğlenceli');
define('_REASONS_9','Oy aşımı');
define('_REASONS_10','Yetersiz Oy');

/* My Account Tools Block */
define('_TB_BLOCK','Üye Araçlarım');
define('_TB_TASKS','Görevler');
define('_TB_INFO','Bilgi');
define('_TB_PROFILE_INFO','Açık Profilim');
define('_TB_EDIT_PROFILE','Profilim');
define('_TB_EDIT_REG','Kayıt Detaylarım');
define('_TB_EDIT_PRIVATE','Kişisel Bilgilerim');
define('_TB_EDIT_AVATAR','Avatarım');
define('_TB_DELETE','Hesabımı Sil');
define('_TB_CONFIG','Konfigürasyon');
define('_TB_EDIT_PREFS','Özelliklerim');
define('_TB_EDIT_HOME','Anasayfa Ayarlarım');
define('_TB_EDIT_COMM','Yorum Ayarlarım');
define('_TB_PERSONAL','Kişisel');
define('_TB_PERSONAL_GALLERY','Galerim');
define('_TB_PERSONAL_JOURNAL','Blog\'um');
define('_TB_PRIVMSGS','Özel Mesajlar');
define('_TB_PRIVMSGS_INBOX','Gelen Kutusu');
define('_TB_PRIVMSGS_OUTBOX','Giden Kutusu');
define('_TB_PRIVMSGS_SENTBOX','Gönderilmiş Öğeler');
define('_TB_PRIVMSGS_SAVEBOX','Kayıtlı Mesajlar');
define('_TB_PRIVMSGS_SEND','Giden Mesaj');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','Kullanıcı Bilgisi');
define('_SECURITYCODE','Güvenlik Kodu');
define('_TYPESECCODE','Güvenlik Kodu Gir');
define('_MEMBERSOPTIONS','Üye Özellikleri');
define('_READSEND','Özel mesajlarınızı okuyun. Başkalarına Gönderin!');
define('_INBOX','Gelen Kutusu');
define('_NEW','Yeni');
define('_ACCOUNTOPTIONS','Hesabınız. Seçenekleri değiştiri ve mesajlarınızı okuyun.');
define('_LOGOUTACCT','Çıkış.');
define('_LOGOUTADMINACCT','Yönetici Çıkışı.');
define('_BLOGIN','Hesabınız');
define('_BFLOGIN','Forum Profili');
define('_BHID','Gizli');
define('_WHOWHERE','Kim Nerede');
define('_STAFFONL','Editörler');
define('_STAFFNONE','Online Editör yok!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Topluluk');
define('_BlogsLANG','Bloglar');
define('_ContentLANG','İçerik');
define('_coppermineLANG','Resim Galerisi');
define('_CPGlangLANG','Yardım Çeviri');
define('_DownloadsLANG','Dosya İndir');
define('_EncyclopediaLANG','Ansiklopedi');
define('_ForumsLANG','Forum');
define('_ContactLANG','Bize Ulaşın');
define('_FAQLANG','SSS-Yardım');
define('_Members_ListLANG','Üye Listesi');
define('_NewsLANG','Haberler');
define('_ReviewsLANG','Gözden geçirilenler');
define('_SearchLANG','Ara');
define('_StatisticsLANG','İstatistikler');
define('_Stories_ArchiveLANG','Haber Arşivi');
define('_Submit_NewsLANG','Haber Gönder');
define('_SurveysLANG','Anketler');
define('_TopLANG', 'Yukarı '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Konular');
define('_Private_MessagesLANG','Özel Mesajlarım');
define('_Tell_a_FriendLANG','Tavsiye Et');
define('_Web_LinksLANG','Linkler');
define('_Your_AccountLANG','Hesabım');
define('_CPG_EventsLANG','Takvim');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Languages!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Groups');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Headlines');

define('_COMMUNICATION','İletişim');
define('_FRIENDS','Arkadaşlarım');
define('_STORE','Dükkan');
define('_PRODUCTS','Ürünler');
define('_DONATE','Bağış');
define('_HELP','Yardım');
define('_GALLERIES','Galeriler');
define('_DOCS','Belgeler');
define('_RULES','Kurallar/Düzenlemeler');
define('_MENU','Menü');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','Mailliste Kayıtlısınız');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','Mailliste Kayıtlı Değilsiniz');
define('_NEWSLETTERBLOCKREGISTER','Mailliste Kaydolmak için <strong>Kayıt</strong> olmalısınız');
define('_NEWSLETTERBLOCKSUBSCRIBE','Kaydol');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Kayıt iptal');
define('_NEWSLETTERBLOCKREGISTERNOW','Kaydol');
/* END Newsletter Block */

/* START class phpmailer lang array */
$PHPMAILER_LANG = array();
$PHPMAILER_LANG['provide_address'] = 'En az bir tane mail adresi belirtmek zorundasýnýz alýcýnýn email adresi.';
$PHPMAILER_LANG['mailer_not_supported'] = ' mailler desteklenmemektedir.';
$PHPMAILER_LANG['execute'] = 'Çalýþtýrýlamýyor: ';
$PHPMAILER_LANG['instantiate'] = 'Örnek mail fonksiyonu yaratýlamadý.';
$PHPMAILER_LANG['authenticate'] = 'SMTP Hatasý: Doðrulanamýyor.';
$PHPMAILER_LANG['from_failed'] = 'Baþarýsýz olan gönderici adresi: ';
$PHPMAILER_LANG['recipients_failed'] = 'SMTP Hatasý:  alýcýlara ulaþmadý: ';
$PHPMAILER_LANG['data_not_accepted'] = 'SMTP Hatasý: Veri kabul edilmedi.';
$PHPMAILER_LANG['connect_host'] = 'SMTP Hatasý: SMTP hosta baðlanýlamýyor.';
$PHPMAILER_LANG['file_access'] = 'Dosyaya eriþilemiyor: ';
$PHPMAILER_LANG['file_open'] = 'Dosya Hatasý: Dosya açýlamýyor: ';
$PHPMAILER_LANG['encoding'] = 'Bilinmeyen þifreleme: ';
/* END class phpmailer lang array */

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_SAVECHANGES','Değişiklikleri Kaydet');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Dil');
define('_FUNCTIONS','Fonksiyonlar');
define('_SHOW','Göster');
define('_TO','Kime');
define('_DAY','Gün');
define('_LAST','Son');
define('_ACTIVE','Aktif');
define('_DEACTIVATE','Pasifleştir');
define('_INACTIVE','Pasif');
define('_ACTIVATE','Etkinleştir');
define('_ACTIVATE2','Etkinleştir?');
define('_VIEW','Gören');
define('_VIEWPRIV','Kimler Görebilir?');
define('_MVADMIN','Sadece Editörler');
define('_MVUSERS','Sadece Kayıtlı Kullanıcılar');
define('_MVANON','Sadece Anonim Kullanıcılar');
define('_MVALL','Tüm Ziyaretçiler');
define('_IMAGE','Grafik');
define('_GO','Git!');
define('_OPTION','Seçenek');
define('_CATEGORY','Kategori');
define('_SUBCATEGORY','Alt Kategori');
define('_ID','ID');
define('_EXPIRATION','İmha');
define('_DAYS','gün');
define('_WARNING','Uyarı');
define('_POLLTITLE','Anket Başlığı');
define('_POLLEACHFIELD','Lütfen her seçeneği tek bir satıra girin');
define('_ADDCATEGORY','Yeni Kategori Ekle');
define('_PAGEBREAK','Birden fazla sayfa kullanmak için kesmek istediğiniz yere <b>&lt;!--pagebreak--&gt;</b> yazabilirsiniz.');
define('_SIGNATURE','İmza');
define('_DESCRIPTION','Tanım');
define('_EDITCATEGORY','Kategori Düzenle');
define('_IN','içinde:');
define('_DESCRIPTION255','Tanım: (En çok 255 karakter)');
define('_MODCATEGORY','Kategori Düzenle');
define('_SUBMITTER','Gönderen');
define('_VISIT','Ziyaret Et');
define('_EXTENDEDTEXT','Geniş Metin');
define('_CHECKCATEGORIES','Kategorileri İşaretle');
define('_INCLUDESUBCATEGORIES','(Alt-Kategoriler Dahil)');
define('_CHECKSUBCATEGORIES','Alt-Kategorileri İşaretle');
define('_VALIDATELINKS','Bağlantıları Onayla');
define('_FAILED','Başarısız!');
define('_BEPATIENT','(lütfen bekleyin)');
define('_VALIDATINGCAT','Kategori (ve altkategorileri) onaylanıyor');
define('_VALIDATINGSUBCAT','Alt-Kategori Onaylanıyor');
define('_OK','Tamam!');
define('_CHECK','Kontrol');
define('_IGNORE','Önemseme');
define('_HITS','Tıklama');
define('_FILESIZE', 'Dosya Boyutu');
define("_EZTHEREIS","Burada");
define("_EZSUBCAT","ara kategoriler");
define("_EZATTACHEDTOCAT","bu kategori altında");
define("_EZBROKENLINKS","Kırık Bağlantılar");
define("_DELEZLINKCATWARNING","UYARI: BU kategoriyi silmek istediğinizden eminmisiniz?<br/> Tüm ara kategoriler ve bağlantılar da silinecektir !");

// index.php
define('_DEFHOMEMODULE','Varsayılan Anasayfa Modülü');
define('_MODULEINHOME','Anasayfada Yüklü Modül:');
define('_CHANGE','Değiştir');
define('_WHOSONLINE','Kimler Var');
define('_NP_ADMIN','Not Defteri');
define('_NP_LOCKED',' Not Defteri Kilitli!<br />Only a root administrator (super user) can unlock it');
define('_NP_SAVE','Notları Kaydet');
define('_NP_UNLOCK','Not Defterini Aç');
define('_NP_LOCK','Not Defterini Kilitle');
// news
define('_STICKY','Yapışkan Notlar');
define('_ARTICLEUP','Makaleyi Yukarı Taşı');
define('_ARTICLEDOWN','Makaleyi Aşağı Taşı');
define('_UNSTICK','Sök');
define('_STICK','Yapışkan');
define('_AUTOMATEDARTICLES','Programlanmış Haberler');
define('_STORYID','Haber ID');
define('_CURRENTPOLL','Aktif Anket');

// admin.php
define('_ADMINISTRATION','Yönetim');
define('_NOADMINYET','Henüz bir yönetici hesabı yaratılmamış, Süper Kullanıcı yaratmak için devam edin:');
define('_CREATEUSERDATA','Aynı verilerle bir normal kullanıcı yaratmak istiyor musunuz?');
define('_ADMINLOGIN','Yönetim Sistemi Girişi');
define('_ADMINID','Editör ID');
define('_EMAIL','Email');
define('_SUBMIT','Gönder');
define('_YOUARELOGGEDOUT','Sistemden çıktınız!');
define('_PASSWDNOMATCH','Üzgünüm, yeni şifreler eşleşmiyor. Geri dönüp tekrar deneyin.');
define('_LOGIN_REMEMBERME','Beni Hatırla?');
define('_ADMINMENU_LOGOUT','Admin Menüsü Çıkışı');
define('_PASSWORD_MALFORMED','Şifrenizde en az 1 Rakam, bir Büyük ve bir Küçük harf bulunmalıdır');

// admins.php
define('_AUTHORSADMIN','Editör Yönetimi');
define('_NAME','İsim');
define('_REQUIRED','(gerekli)');
define('_MODIFYINFO','Bilgi Değiştir');
define('_DELAUTHOR','Editör Sil');
define('_ADDAUTHOR','Yeni Yönetici Ekle');
define('_PERMISSIONS','Yetkiler');
define('_SUPERUSER','Süper Kullanıcı');
define('_SUPERWARNING','UYARI: Süper Kullanıcı işaretlenirse kullanıcı tam yetki kazanır!');
define('_ADDAUTHOR2','Editör Ekle');
define('_RETYPEPASSWD','Şifreyi Tekrar Girin');
define('_FORCHANGES','(Sadece Değişiklik İçin)');
define('_COMPLETEFIELDS','Tüm alanları doldurmalısınız');
define('_CREATIONERROR','Editör Yaratma Hatası');
define('_AUTHORDEL','Editör Sil');
define('_PUBLISHEDSTORIES','Bu yöneticinin yayınladığı haber sayısı:');
define('_SELECTNEWADMIN','Tekrar atamak için yeni bir yönetici seçin');
define('_GODNOTDEL','*(TANRI hesabı silinemez)');
define('_MAINACCOUNT','Tanrı Yönetici*');
define('_USERS','Kullanıcılar');

// banners.php
define('_BANNERSADMIN','Banner Yönetimi');
define('_DELETEBANNER','Banner Sil');
define('_SURETODELBANNER','Bannerı silmek istediğinizden emin misiniz?');
define('_EDITBANNER','Banner Düzenle');

// blocks.php
define('_BLOCKSADMIN','Blok Yönetimi');
define('_CENTER','Orta');
define('_CENTERUP','Orta Yukarı');
define('_CENTERDOWN','Orta Aşağı');
define('_BLOCKFILE','(Blok Dosyası)');
define('_BLOCKFILE2','DOSYA');
define('_BLOCKSYSTEM','SİSTEM');
define('_ADDNEWBLOCK','Yeni Blok Ekle');
define('_RSSFILE','RSS/RDF Dosya Adresi');
define('_ONLYHEADLINES','(Sadece Başlıklar İçin)');
define('_REFRESHTIME','Yenileme Süresi');
define('_CREATEBLOCK','Blok Yarat');
define('_EDITBLOCK','Blok Düzenle');
define('_BLOCK','Blok');
define('_SAVEBLOCK','Blok Kaydet');
define('_BLOCKACTIVATION','Blok Aktivasyonu');
define('_BLOCKPREVIEW','Bu blok önizlemesidir');
define('_WANT2ACTIVATE','Bu bloğu ektinleştirmek ister misiniz?');
define('_ARESUREDELBLOCK','Blok silmek istediğinizden emin misiniz?');
define('_BLOCKUP','Blok YUKARI');
define('_BLOCKDOWN','Blok AŞAĞI');
define('_BLOCKTOP','Bloğu Yukarı Taşı');
define('_BLOCKBOTTOM','Bloğu Aşağı Taşı');
define('_TITLE','Başlık');
define('_POSITION','Pozisyon');
define('_WEIGHT','Ağırlık');
define('_STATUS','Durum');
define('_LEFTBLOCK','Sol Blok');
define('_LEFT','Sol');
define('_RIGHTBLOCK','Sağ Blok');
define('_RIGHT','Sağ');
define('_TYPE','Tür');
define('_CUSTOM','Diğer');
define('_FILENAME','Dosya Adı');
define('_FILEINCLUDE','(Dahil edilecek bir Blok seçin. Diğer tüm alanlar görmezden gelinecektir)');
define('_VISIBLEINMODULES', 'Visible in modules');

// comments.php
define('_REMOVECOMMENTS','Yorum Sil');
define('_SURETODELCOMMENTS','Seçili yorum ve tüm cevaplarını silmek istediğinizden emin misiniz?');

// database.php
define('_SAVEDATABASE','Veritabanı Yedekle');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Geçerli Durum');
define('_ACTIVATEPAGE','Bu sayfayı etkinleştir?');

// history.php
define('_EPHEMADMIN','Geçiciler Yönetimi');
define('_ADDEPHEM','Yeni Geçici Ekle');
define('_EPHEMDESC','Geçici Tanımı');
define('_EPHEMMAINT','Geçici Bakımı (Düzenle/Sil):');
define('_EPHEMEDIT','Geçici Düzenle');
define('_EPHEMDELETE','Girişi Sil');

// headlines.php
define('_RSSFAIL','RSS adresinde sorun var');
define('_RSSTRYAGAIN','RSS adresi ve dosya adını kontrol edip tekrar deneyin.');
define('_RSSCONTENT','(RSS/RDF İçeriği)');
define('_IFRSSWARNING','URL\'i doldurursanız girdiğiniz içerik görüntülenmeyecek!');
define('_SETUPHEADLINES','(Diğer\'i seçerek başlık adresini girin)');
define('_HEADLINESADMIN','Başlık Yönetimi');
define('_ADDHEADLINE','Başlık Ekle');
define('_EDITHEADLINE','Başlık Düzene');
define('_SURE2DELHEADLINE','UYARI: Bu başlığı silmek istediğinizden emin misiniz?');

// messages.php
define('_MESSAGESADMIN','Mesajlar Yönetimi');
define('_MESSAGETITLE','Başlık');
define('_MESSAGECONTENT','İçerik');
define('_ALLMESSAGES','Mesajları incele');
define('_EDITMSG','Mesaj düzenle');
define('_ADDMSG','Mesaj ekle');
define('_REMOVEMSG','Bu mesajı silmek istediğinizden emin misiniz ? ');
define('_CHANGEDATE','Başlangıç tarihini bugüne al?');
define('_IFYOUACTIVE','(Bu mesajı şimdi etkinleştirirseniz, başlangıç tarihi bugün olacak)');

// modules.php
define('_MODULESADMIN','Modül Yönetimi');
define('_HOMECONFIG','Anasayfa Ayarları');
define('_MODULESADDONS','Modüller ve Eklentiler');
define('_INHOME','Anasayfada');
define('_MODULEHOMENOTE','<b>-= UYARI =-</b><br />Kalın modül başlığı anasayfada bulunan modülü belirtir.<br />Bu modül varsayılan iken pasifleştiremez veya kısıtlayamazsınız!<br />Modülün dizinini silerseniz anasayfada bir hata göreceksiniz.<br />Ayrıca, bu modül modüller bloğundaki <i>Ana Sayfa</i> linkine bağlanmıştır.');
define('_PUTINHOME','Anasayfaya Koy');
define('_SURETOCHANGEMOD','Ana sayfanızı değiştirmek istediğinizden emin misiniz:');
define('_NOTINMENU','[ <big><strong>&middot;</strong></big> ] bir modülün adının ve linkinin Modüller bloğunda gösterilmeyeceği anlamına gelir');
define('_SHOWINMENU','Modüller bloğunda görünsün mü?');
define('_CUSTOMTITLE','Yeni Başlık');
define('_MODULEEDIT','Modül Düzenle');
define('_VERSION','Sürüm');
define('_UPGRADE','%s \'e güncelle');
define('_DBSIZE','Veritabanı boyutu');
define('_CVS_EXPLAIN','Bu modül CVS dizinine sahip. <br />CVS ile son sürümleri kolayca alabilirsiniz. Önce YEDEK alınız.');
define('_CVS_UPDATE','CSVleri Güncelle');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','Kimden');
define('_STAFF','Takımı');
define('_NL_RECIPS','Alıcılar');
define('_SUBSCRIBEDUSERS','Kayıtlı Kullanıcı');
define('_NL_ALLUSERS','Tüm Üyeler');
define('_NL_ADMINS','Editörler');
define('_NL_REGARDS','Teşekkürlerimizle');
define('_DISCARD','DevreDışı Bırak');
define('_REVIEWTEXT','Lütfen metninizi kontrol edin:');
define('_MANYUSERSNOTE','UYARI! Bu mesajı alacak çok fazla kullanıcı bulunuyor. Lütfen yazılım işlemi bitirene kadar bekleyin. İşlemin tamamlanması birkaç dakika sürebilir!');
define('_NL_NOUSERS','Bu grupta hiç kullanıcı yok. Geri gidip başka grup deneyin');
define('_NUSERWILLRECEIVE','Kullanıcılar bu gazeteyi alacak.');
define('_NLUNSUBSCRIBE',"Bu mesajı, maillistemize kaydolduğunuz için alıyorsunuz. <br />Listeden çıkmak için <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">Buraya</a> tıklayınız.\n\nIf you would like further assistance, please send an email to <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">our administrator</a>");
define('_NEWSLETTERSENT','Gazete gönderildi.');

// referers.php
define('_WHOLINKS','Sitemize bağlantı verenler:');
define('_DELETEREFERERS','Öneren Sil');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Footer');
define('_DEBUG', 'Debug');
define('_SITECONFIG','Web Sitesi Ayarları');
define('_GENSITEINFO','Genel Site Bilgisi');
define('_SITENAME','Site İsmi');
define('_SITEURL','Site Adresi');
define('_SITELOGO','Site Logosu');
define('_SITESLOGAN','Site Sloganı');
define('_STARTDATE','Site Başlangıç Tarihi');
define('_ADMINEMAIL','Yönetici Email\'i');
define('_ITEMSTOP','En İyiler Sayfasındaki Öğe Sayısı');
define('_STORIESHOME','Anasayfadaki Haber Sayısı');
define('_OLDSTORIES','Eski Haberler Kutusundaki Haberler');
define('_ALLOWANONPOST','Anonim Gönderimine İzin Ver?');
define('_DEFAULTTHEME','Sitenizin öntanımlı teması');
define('_SHOWSEC','Güvenlik kodunu göster');
define('_TOOLTIPS','İpuçlarını göster');
define('_UM_TOGGLE','Güncelleme Monitörünü etkinleştir');
define('_UM_EXPLAINBu', 'işlem sitemizden iki bilgi alacaktır, dragonflycms.org: Dragonfly\'ın son sürümü ve eğer mevcutsa sizin Dragonfly sürümünüzü.Sitemize gönderilecek bilgi yalnızca sizin Dragonfly sürümünüzdür.Serverimizde bu isteklerinizi <strong>kaydetmemekteyiz.<strong>');
// maintenance
define('_MAINTENANCE','Bakım');
define('_MESSAGE','Mesaj');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','Çoklu-Dil Ayarları');
define('_SELLANGUAGE','Siteniz için dil seçin');
define('_LOCALEFORMAT','Yerel Saat Biçimi');
define('_ACTMULTILINGUAL','Çoklu-Dil özellikleri aktifleşsin mi? ');
define('_ACTUSEFLAGS','Açılır kutu yerine bayrakları göster? ');
// banners
define('_BANNERSOPT','Banner Seçenekleri');
define('_ACTBANNERS','Bannerlar etkinleştirilsin mi?');
// footer
define('_FOOTERMSG','Alt Mesajlar');
define('_FOOTERLINE1','Alt Satır 1');
define('_FOOTERLINE2','Alt Satır 2');
define('_FOOTERLINE3','Alt Satır 3');
// backend
define('_BACKENDCONF','Backend Ayarları');
define('_BACKENDTITLE','Backend Başlığı');
define('_BACKENDLANG','Backend Dili');
// mail stories
define('_MAIL2ADMIN','Yeni Haberleri Yöneticiye Gönder');
define('_NOTIFYSUBMISSION','Yeni önerileri email ile uyar?');
define('_EMAIL2SENDMSG','Mesajın gönderileceği email');
define('_EMAILSUBJECT','Email Konusu');
define('_EMAILMSG','Email Mesajı');
define('_EMAILFROM','Email Hesabı (Kimden)');
// comments
define('_COMMENTSOPT','Yorum Seçenekleri');
define('_COMMENTSLIMIT','Byte Olarak Yorum Limiti');
define('_COMMENTSMOD','Yorum Değişikliği');
define('_MODADMIN','Yönetici Değişikliği');
define('_MODUSERS','Kullanıcı Değişikliği');
define('_NOMOD','Değişiklik Yok');
// adminmenu
define('_GRAPHICOPT','Grafik Seçenekleri');
define('_BOTH','Both');
define('_GRAPHICAL','Grafiksel');
define('_SIDEBLOCK','Yan Blok');
// miscellaneous
define('_MISCOPT','Diğer Seçenekler');
define('_ACTIVATEHTTPREF','HTTP Önerenleri Etkinleştir?');
define('_MAXREF','En fazla kaç öneren istersiniz?');
define('_COMMENTSPOLLS','Anketlerde Yorum Aktif?');
define('_COMMENTSARTICLES','Yazılarda yorumlar aktif?');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','Sansür Seçenekleri');
define('_CENSORMODE','Sansür Modü');
define('_NOFILTERING','Filtreleme yok');
define('_EXACTMATCH','Tamamını eşleştir');
define('_MATCHBEG','Kelime başlangıcını eşleştir');
define('_MATCHANY','Metnin herhangi bir yerini eşleştir');
define('_CENSORREPLACE','Sansürlenen kelimeleri bununla değiştir:');
// email
define('_EMAILOPTIONS','Options for email from Contact Module and Newsletter');
define('_ALLOW_HTML_EMAIL','HTML E-Mail\'e izin ver');
define('_USE_SMTP','Php yerine SMTP Kullan');
define('_SMTP_HOST','SMTP adresi (smtp.siteismi.com)');
define('_USE_SMTP_AUTH','Sunucu SMTP kimlik doğrulaması gerektiriyor');
define('_SMTP_USER_NAME','SMTP Kullanıcıadı');
define('_SMTP_USER_PASS','SMTP Şifre');

// cpg_adminmenu.php
define('_ADMINMENU','Yönetim Menüsü');
define('_ADMINLOGOUT','Çıkış');
define('_AMENU0','System');
define('_AMENU1','Genel');
define('_AMENU2','Üyeler');
define('_AMENU3','Mesajlar');
define('_AMENU4','Forum');
define('_AMENU5','Bilgisel');
define('_AMENU6','Bağlantı');
define('_AMENU7','Ticaret');
define('_AMENU8','Multimedya');
define('_AMENU9','Modüller');
define('_BMENU1','Yardım');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','Seçenekler');
define('_DATABASE','Veritabanı');
define('_BLOCKS','Bloklar');
define('_MODULES','Modüller');
define('_EDITADMINS','Yönetici Düzenle');
define('_MESSAGES','Mesajlar');
define('_BANNERS','Bannerlar');
define('_HTTPREFERERS','HTTP Önerenler');
define('_EDITUSERS','Kullanıcı Düzenle');
define('_USERSCONFIG','Üye Konfigürasyonu');
define('_NEWSLETTER','Gazete');
define('_SUBMISSIONS','Haber');
define('_ADDSTORY','Haber Ekle');
define('_TOPICS','Konular');
define('_ADMPOLLS','Araştırma/Anketler');
define('_EPHEMERIDS','Geçiciler');
define('_REVIEWS','İzlenimler');
define('_ENCYCLOPEDIA','Ansiklopedi');
define('_SURVEYS','Anketler');
define('_SECTIONS','Bölümler');
define('_ARTICLES','Haber');
define('_FAQ','SSS');
define('_DOWNLOAD','Dosyalar');
define('_WEBLINKS','Web Bağlantıları');
define('_CONTENT','İçerik');
define('_SYSINFO','System Info');
define('_REPORTABUG','Hara Bildir');
//coppermine admin
define('_W_INSTALL','Hangi Kurulum?');
define('_W_PAGE','Hangi Sayfa?');
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
define('_ERROR','HATA');
define('_SEC_ERROR','Güvenlik Hatası');
define('_ERROR_NOT_SET','%s ayarlı değil');
define('_ERROR_NO_POST','Başka siteden mesaj gönderilemez');
define('_ERROR_NO_GET','Bu fonksiyonda GET talebine izin verilmiyor');
define('_ERROR_BAD_CHAR','%s için kullanmak istediğiniz karakterler yasak.');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','Kırık bir bağlantıdan bu sayfaya geldiniz');
define('_ERROR_NONE_TO_DISPLAY','Görüntülenecek %s yok');
define('_ERROR_DELETE_CONF','%s silmek istediğinizden emin misiniz?');
define('_ERROR_NO_EXIST','%s does not exist');
define('_ERROR_ALREADYEXIST','%s zaten var');
define('_TASK_COMPLETED','İşlem Tamam!');
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
