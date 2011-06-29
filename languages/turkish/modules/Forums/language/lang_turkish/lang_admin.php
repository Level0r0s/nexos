<?php

/***************************************************************************
 *                            lang_admin.php [Turkish]
 *                              -------------------
 *     begin                : Wed Jan 9 2002
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.1 2004/08/04 02:23:47 akamu Exp $
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
// Translation by:
//
// Onur Turgay (postexitus)  :: onurturgay@isnet.net.tr :: http://welcome.to/aaal2000
// Erdem Corapcioglu (erdem) :: erdem@smtg.org         :: http://www.smtg.org
//
// For questions and comments use: onurturgay@isnet.net.tr
//

$lang['General'] = "Genel Yönetim";
$lang['Users'] = "Kullanıcı Yönetimi";
$lang['Groups'] = "Grup Yönetimi";
$lang['Forums'] = "Forum Yönetimi";
$lang['Styles'] = "Stil Yönetimi";

$lang['Configuration'] = "Ayarlar";
$lang['Permissions'] = "İzinler";
$lang['Manage'] = "Yönetim";
$lang['Disallow'] = "Yasaklı İsimler";
$lang['Prune'] = "Eski Mesajları Silme";
$lang['Mass_Email'] = "Kullanıcılara E-Mail";
$lang['Ranks'] = "Kullanıcı Seviyeleri";
$lang['Smilies'] = "Smililer";
$lang['Ban_Management'] = "Ban Kontrolü";
$lang['Word_Censor'] = "Sansürlü Kelimeler";
$lang['Export'] = "Kaydet";
$lang['Create_new'] = "Yarat";
$lang['Add_new'] = "Ekle";
$lang['Backup_DB'] = "Veritabanını Yedekle";
$lang['Restore_DB'] = "Veritabanını Yükle";


//
// Index
//
$lang['Admin'] = "Yönetim";
$lang['Not_admin'] = "Bu sitenin adminliğini yapma yetkiniz yok";
$lang['Welcome_phpBB'] = "phpBB'ye hoşgeldiniz";
$lang['Admin_intro'] = "PhpBB2'yi forumunuz olarak seçtiğiniz için teşekkür ederiz. Bu ekran size sitenizin bilgilerinin kısa bir özetini sunmaktadır. Bu sayfaya soldaki <u>Yönetim - Ana Sayfa</u> linkine basarak geri dönebilirsiniz. Sitenizin ana sayfasına dönmek için soldaki küçük logoyu kullanabilrsiniz. Soldaki diğer linkler forumunuzun her türlü ayarını yapmanızı sağlayacaktır, her ekran kendinin nasıl kullanılacağını anlatacaktır.";
$lang['Main_index'] = "Ana Sayfa";
$lang['Forum_stats'] = "Forum İstatistikleri";
$lang['Admin_Index'] = "Yönetim - Ana Sayfa";
$lang['Preview_forum'] = "Forum Önizlemesi";

$lang['Click_return_admin_index'] = "Yönetim ana sayfasına dönmek için %sburaya%s tıklayın";

$lang['Statistic'] = "İstatistik";
$lang['Value'] = "Değer";
$lang['Number_posts'] = "Mesaj Sayısı";
$lang['Posts_per_day'] = "Günlük ortalama mesaj";
$lang['Number_topics'] = "Başlık sayısı";
$lang['Topics_per_day'] = "Günlük ortalama başlık";
$lang['Number_users'] = "Kullanıcı sayısı";
$lang['Users_per_day'] = "Günlük ortalama kullanıcı";
$lang['Board_started'] = "Forum açılış tarihi";
$lang['Avatar_dir_size'] = "Avatar klasörü büyüklüğü";
$lang['Database_size'] = "Veritabanı büyüklüğü";
$lang['Gzip_compression'] ="Gzip sıkıştırma";
$lang['Not_available'] = "Mevcut değil";

$lang['ON'] = "Açık"; // This is for GZip compression
$lang['OFF'] = "Kapalı";


//
// DB Utils
//
$lang['Database_Utilities'] = "Veritabanı İşlemleri";

$lang['Restore'] = "Geri Yükleme";
$lang['Backup'] = "Yedekleme";
$lang['Restore_explain'] = "Bu işlem bir dosyadan tüm phpBB veritabanı tablolarını <B>geri yükleyecektir</B>. Eğer serverınız izin veriyorsa gzip ile sıkıştırılmış bir text dosyası yükleyebilirsiniz, otomatik olarak açılacaktır. <b>UYARI</b> Bu işlem bütün bulunan verileri silecek yerine yenilerini yazacaktır. Geri yükleme uzun sürebilir, tamamlanana kadar lütfen bu sayfayı kapatmayınız.";
$lang['Backup_explain'] = "Buradan tüm phpBB verilerinizi yedekleyebilirsiniz. Eğer aynı veritabanında saklamak istediğiniz başka tablolarınız da varsa, aşağıdaki Ek Tablolar bölümüne isimlerini virgülle ayırarak giriniz. Eğer serverınız izin veriyorsa backup dosyanızı gzip ile sıkıştırıp da alabilirsiniz.";

$lang['Backup_options'] = "Yedekleme seçenekleri";
$lang['Start_backup'] = "Yedeklemeyi başlat";
$lang['Full_backup'] = "Tam yedekleme";
$lang['Structure_backup'] = "Sadece tablo yapısı";
$lang['Data_backup'] = "Sadece veriler";
$lang['Additional_tables'] = "Ek tablolar";
$lang['Gzip_compress'] = "Gzip sıkıştırma";
$lang['Select_file'] = "Bir dosya seçin";
$lang['Start_Restore'] = "Geri yüklemeyi başlat";

$lang['Restore_success'] = "Veritabanı başarıyla yedeklendi.<br /><br />Siteniz yedeklemenin yapıldığı zamanki haline dönüştürüldü.";
$lang['Backup_download'] = "Download kısa bir süre içinde başlıyacak, lütfen bekleyiniz";
$lang['Backups_not_supported'] = "Üzgünüz, kullandığınz veritabanı sistemin henüz yedekleme desteklenmiyor";

$lang['Restore_Error_uploading'] = "Yedekleme dosyasını gönderirken hata";
$lang['Restore_Error_filename'] = "Dosya isminde problem oluştu, lütfen alternatif bir dosya deneyin";
$lang['Restore_Error_decompress'] = "Gzip sıkıştırması açılamıyor, lütfen düzyazı versiyonunu gönderin";
$lang['Restore_Error_no_file'] = "Dosya gönderilmedi";


//
// Auth pages
//
$lang['Select_a_User'] = "Bir kullanıcı seç";
$lang['Select_a_Group'] = "Bir grup seç";
$lang['Select_a_Forum'] = "Bir forum seç";
$lang['Auth_Control_User'] = "Kullanıcı İzinleri Kontrolü";
$lang['Auth_Control_Group'] = "Grup İzinleri Kontrolü";
$lang['Auth_Control_Forum'] = "Forum İzinleri Kontrolü";
$lang['Look_up_User'] = "Ayrıntılar";
$lang['Look_up_Group'] = "Ayrıntılar";
$lang['Look_up_Forum'] = "Ayrıntılar";

$lang['Group_auth_explain'] = "Burada her gruba verilmiş olan izinleri ve moderatorlük statülerini değiştirebilirsiniz. Grup izinlerini değiştirirken kullanıcı izinlerinin gruptaki bazı kullanıcılara hala bazı özel haklar tanıyabileceğini unutmayın. Eğer böyle bir durum söz konusuysa uyarılacaksınız.";
$lang['User_auth_explain'] = "Burada her kullanıcıya verilmiş olan izinleri ve moderatorlük statülerini değiştirebilirsiniz. Kullanıcı izinlerini değiştirirken grup izinlerinin bazı kullanıcılara hala bazı özel haklar tanıyabileceğini unutmayın. Eğer böyle bir durum söz konusuysa uyarılacaksınız.";
$lang['Forum_auth_explain'] = "Buradan her forumun izin derecesini değiştirebilirsiniz. Gelişmiş ve Basit olaraka ikiye ayrılmış olan izinlerde, gelişmiş seçeneğini kullanarak daha özel izinler verebileceğinizi unutmayınız.";

$lang['Simple_mode'] = "Basit Mod";
$lang['Advanced_mode'] = "Gelişmiş Mod";
$lang['Moderator_status'] = "Moderator durumu";

$lang['Allowed_Access'] = "Erişim izni verilmiş";
$lang['Disallowed_Access'] = "Erişim izni verilmemiş";
$lang['Is_Moderator'] = "Moderator";
$lang['Not_Moderator'] = "Moderator değil";

$lang['Conflict_warning'] = "Yetki Çelişkisi Uyarısı";
$lang['Conflict_access_userauth'] = "Bu kullanıcının üye olduğu grup aracılığı ile bu foruma erişimi var. Grup izinleriyle oynayabilir ya da kullanıcıyı gruptan çıkartabilirsiniz. Bu durumu oluşturan gruplar ve forumlar aşağıda listelenmiştir.";
$lang['Conflict_mod_userauth'] = "Bu kullanıcının üye olduğu grup aracılığı ile bu foruma moderator erişimi var. Grup izinleriyle oynayabilir ya da kullanıcıyı gruptan çıkartabilirsiniz. Bu durumu oluşturan gruplar ve forumlar aşağıda listelenmiştir.";

$lang['Conflict_access_groupauth'] = "Aşağıdaki kullanıcıların hala Kullanıcı izinleriyle bu foruma erişimleri var. Kullanıcı izinlerini değiştirebilirsiniz. Özel hakkı olan kullanıcılar ve forumlar aşağıda listelenmiştir.";
$lang['Conflict_mod_groupauth'] = "Aşağıdaki kullanıcıların hala Kullanıcı izinleriyle bu foruma moderator erişimleri var. Kullanıcı izinlerini değiştirebilirsiniz. Özel hakkı olan kullanıcılar ve forumlar aşağıda listelenmiştir.";

$lang['Public'] = "Herkese Açık";
$lang['Private'] = "Özel";
$lang['Registered'] = "Kayıtlılara Açık";
$lang['Administrators'] = "Adminlere Açık";
$lang['Hidden'] = "Gizli";

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = "Herkes";
$lang['Forum_REG'] = "Kayıtlı";
$lang['Forum_PRIVATE'] = "Özel";
$lang['Forum_MOD'] = "Mod";
$lang['Forum_ADMIN'] = "Admin";

$lang['View'] = "Görüntüleme";
$lang['Read'] = "Okuma";
$lang['Post'] = "Gönderme";
$lang['Reply'] = "Cevap yazma";
$lang['Edit'] = "Değiştirme";
$lang['Delete'] = "Silme";
$lang['Sticky'] = "Sabit";
$lang['Announce'] = "Duyuru";
$lang['Vote'] = "Oy kullanma";
$lang['Pollcreate'] = "Anket yaratma";

$lang['Permissions'] = "İzinler";
$lang['Simple_Permission'] = "Basit Mod";

$lang['User_Level'] = "Kullanıcı seviyesi";
$lang['Auth_User'] = "Kullanıcı";
$lang['Auth_Admin'] = "Admin";
$lang['Group_memberships'] = "Grup üyelikleri";
$lang['Usergroup_members'] = "Bu grubun üyeleri";

$lang['Forum_auth_updated'] = "Forum izinleri güncellendi";
$lang['User_auth_updated'] = "Kullanıcı izinleri güncellendi";
$lang['Group_auth_updated'] = "Grup izinleri güncellendi";

$lang['Auth_updated'] = "İzinler güncellendi";
$lang['Click_return_userauth'] = "Kullanıcı izinlerine dönmek için %sburaya%s tıklayın";
$lang['Click_return_groupauth'] = "Grup izinlerine dönmek için %sburaya%s tıklayın";
$lang['Click_return_forumauth'] = "Forum izinlerine dönmek için %sburaya%s tıklayın";


//
// Banning
//
$lang['Ban_control'] = "Ban Kontrolü";
$lang['Ban_explain'] = "Buradan kullanıcıların ban ayarlarını yapabilirsiniz. Bunu kullanıcı adını, IP adresini ya da hostname'ini banlayarak yapabilirsiniz. Bu o kullanıcının ana sayfaya bile erişimini engelleyecektir. Bir kullanıcının başka bir kullanıcı adıyla kaydolmasını engellemek için o e-mail adresini banlayabilirsiniz. Unutmayın ki bie e-mail adresini banlamak o kullanıcının ana sayfaya girmesini ya da mesaj gondermesini engellemez. Bunun için kullanıcı adı ya da IP-Host Ban yapmalısınız.";
$lang['Ban_explain_warn'] = "Bir IP dizisinin banlanması başlangıç ve bitiş IP'leri arasındaki tüm IP'leri banlayacaktır. Veritabanında yer kaplamaması için uygun olduğu yerlerde wildcard kullanılacaktır. Eğer gerçekten bir IP dizisi girmek istiyorsanız lütfen onu kısa tutun ya da tek tek IP'leri girin.";

$lang['Select_username'] = "Kullanıcı adı seçin";
$lang['Select_ip'] = "IP seçin";
$lang['Select_email'] = "E-mail adresi seçin";

$lang['Ban_username'] = "Kullanıcı banlama";
$lang['Ban_username_explain'] = "Birden fazla kullanıcı banlamak istiyorsanız browserınıza uygun klavye mouse kombinasyonunu kullanın";

$lang['Ban_IP'] = "IP ve Host banlama";
$lang['IP_hostname'] = "IP ve Host adresleri";
$lang['Ban_IP_explain'] = "Birden fazla IP/Host banlamak için araya virgül koyun. Bir IP dizisi belirtmek için başlangıç ve bitiş arasına - koyun. Wildcard olarak * kullanın";

$lang['Ban_email'] = "E-mail banlama";
$lang['Ban_email_explain'] = "Birden fazla e-mail banlamak için virgül kullanın. Wildcard olarak * kullanın, mesela *@hotmail.com";

$lang['Unban_username'] = "Kullanıcı banı kaldırma";
$lang['Unban_username_explain'] = "Birden fazla kullanıcının banını kaldırmak istiyorsanız browserınıza uygun klavye mouse kombinasyonunu kullanın";

$lang['Unban_IP'] = "IP/Host banı kaldırma";
$lang['Unban_IP_explain'] = "Birden fazla IP/Host banı kaldırmak istiyorsanız browserınıza uygun klavye mouse kombinasyonunu kullanın";

$lang['Unban_email'] = "E-mail banı kaldırma";
$lang['Unban_email_explain'] = "Birden fazla e-mail banı kaldırmak istiyorsanız browserınıza uygun klavye mouse kombinasyonunu kullanın";

$lang['No_banned_users'] = "Banlı kullanıcı yok";
$lang['No_banned_ip'] = "Banlı IP yok";
$lang['No_banned_email'] = "Banlı e-mail yok";

$lang['Ban_update_sucessful'] = "Ban listesi başarıyla güncellendi";
$lang['Click_return_banadmin'] = "Ban kontrolüne dönmek için %sburaya%s tıklayın";


//
// Configuration
//
$lang['General_Config'] = "Genel Ayarlar";
$lang['Config_explain'] = "Aşağıdaki form sitenizdeki genel ayarları yapmak için kullanılacaktır. Kullanıcı ve forum bazlı ayarlar için sol taraftaki ilgili linklere tıklayınız.";

$lang['Click_return_config'] = "Genel ayarlara dönmek için %sburaya%s tıklayın";

$lang['General_settings'] = "Genel Site Ayarları";
$lang['Server_name'] = "Domain";
$lang['Server_name_explain'] = "Bu forumun olduğu sitenin domain adresi";
$lang['Script_path'] = "Script pathi";
$lang['Script_path_explain'] = "Domain adresine göre PhpBB2 scriptlerinin bulundugu path";
$lang['Server_port'] = "Server Port";
$lang['Server_port_explain'] = "Serverınızın çalışıtıgı port, genelde 80'dir, sadece farklıysa değiştirin";
$lang['Site_name'] = "Site ismi";
$lang['Site_desc'] = "Site açıklaması";
$lang['Board_disable'] = "Siteyi kapat";
$lang['Board_disable_explain'] = "Bu siteyi kullanıcılara kapayacaktır. Bunu yaptıktan sonra logout olmayın yoksa bir daha login olamazsınız!";
$lang['Acct_activation'] = "Hesap aktivasyonu";
$lang['Acc_None'] = "Kapalı"; // These three entries are the type of activation
$lang['Acc_User'] = "Kullanıcı";
$lang['Acc_Admin'] = "Admin";

$lang['Abilities_settings'] = "Kullanıcı ve Forum Temel Ayarları";
$lang['Max_poll_options'] = "Max. anket seçeneği sayısı";
$lang['Flood_Interval'] = "Flood Aralığı";
$lang['Flood_Interval_explain'] = "Kullanıcının iki mesajı arasında beklemesi gereken süre";
$lang['Board_email_form'] = "Kullanıcılar arası e-mail";
$lang['Board_email_form_explain'] = "Bu site aracılığı ile kullanıcıların birbirlerine e-mail göndermesini sağlar";
$lang['Topics_per_page'] = "Her sayfadaki başlık sayısı";
$lang['Posts_per_page'] = "Her sayfadaki mesaj sayısı";
$lang['Hot_threshold'] = "Popülerlik sınırı";
$lang['Default_style'] = "Varsayılan stil";
$lang['Override_style'] = "Kullanıcı stilini gözardı et";
$lang['Override_style_explain'] = "Kullanıcıların seçtiği stili varsayılan ile değiştirir";
$lang['Default_language'] = "Varsayılan dil";
$lang['Date_format'] = "Saat formatı";
$lang['System_timezone'] = "Sistem Zaman Dilimi";
$lang['Enable_gzip'] = "GZip sıkıştırma";
$lang['Enable_prune'] = "Mesaj temizliği";
$lang['Allow_HTML'] = "HTML'e izin ver";
$lang['Allow_BBCode'] = "BBCode'a izin ver";
$lang['Allowed_tags'] = "İzin verilen HTML tagleri";
$lang['Allowed_tags_explain'] = "Tagleri virgüllerle ayırın";
$lang['Allow_smilies'] = "Smililere izin ver";
$lang['Smilies_path'] = "Smili klasörü";
$lang['Smilies_path_explain'] = "phpBB ana klasörüne göre smiley klasörü, örn: images/smilies";
$lang['Allow_sig'] = "İmzaya izin ver";
$lang['Max_sig_length'] = "Max. imza uzunluğu";
$lang['Max_sig_length_explain'] = "Kullanıcı imzalarındaki maksimum karakter sayısı";
$lang['Allow_name_change'] = "Kullanıcı isim değişikliğine izin ver";

$lang['Avatar_settings'] = "Avatar Ayarları";
$lang['Allow_local'] = "Galeri avatarlarını aç";
$lang['Allow_remote'] = "Uzak avatarları aç";
$lang['Allow_remote_explain'] = "Başka bir siteden link verilen avatarlar";
$lang['Allow_upload'] = "Avatar göndermeyi aç";
$lang['Max_filesize'] = "Max. Avatar dosya büyüklüğü";
$lang['Max_filesize_explain'] = "Gönderilen avatarlar için";
$lang['Max_avatar_size'] = "Max. avatar boyutları";
$lang['Max_avatar_size_explain'] = "(Piksel olarak Yükseklik x Genişlik)";
$lang['Avatar_storage_path'] = "Avatar Klasörü";
$lang['Avatar_storage_path_explain'] = "phpBB ana klasörüne göre, örn: images/avatars";
$lang['Avatar_gallery_path'] = "Avatar Galeri Klasörü";
$lang['Avatar_gallery_path_explain'] = "phpBB ana klasörüne göre önceden yüklenmiş avatarların yeri, örn: images/avatars/gallery";

$lang['COPPA_settings'] = "COPPA ayarları";
$lang['COPPA_fax'] = "COPPA Fax Numarası";
$lang['COPPA_mail'] = "COPPA Mail Adresi";
$lang['COPPA_mail_explain'] = "Ebeveynlerin COPPA anlaşmasını gönderecekleri yer";

$lang['Email_settings'] = "E-mail Ayarları";
$lang['Admin_email'] = "Admin E-mail Adresi";
$lang['Email_sig'] = "E-mail İmzası";
$lang['Email_sig_explain'] = "Sitenin gönderceği tüm e-maillere bu yazı eklenir";
$lang['Use_SMTP'] = "E-mail için SMTP server'ı kullan";
$lang['Use_SMTP_explain'] = "Lokal sendmail fonksiyonu yerine SMTP serverı kullanmak için Evet'i seçin";
$lang['SMTP_server'] = "SMTP Server Adresi";
$lang['SMTP_username'] = "SMTP Kullanıcı Adı";
$lang['SMTP_username_explain'] = "Sadece smtp serverınız kullanıcı ismi istiyorsa giriniz";
$lang['SMTP_password'] = "SMTP Şifresi";
$lang['SMTP_password_explain'] = "Sadece smtp serverınız şifre istiyorsa giriniz";

$lang['Disable_privmsg'] = "Özel Mesajlaşma";
$lang['Inbox_limits'] = "Gelenler'deki max. msj sayısı ";
$lang['Sentbox_limits'] = "Ulaşanlar'daki max. msj sayısı";
$lang['Savebox_limits'] = "Saklananlar'daki max. msj sayısı";

$lang['Cookie_settings'] = "Cookie Ayarları";
$lang['Cookie_settings_explain'] = "Bu cookie'lerin browerserlara nasıl gönderildiğini ayarlamak içindir. Bir çok durumda bu ilk halinde bırakılmalıdır. Bunları değiştirmeniz gerekiyorsa dikkatli olun, yanlış ayarlar kullanıcıların login olmasını engeller.";
$lang['Cookie_domain'] = "Cookie domain'i";
$lang['Cookie_name'] = "Cookie adı";
$lang['Cookie_path'] = "Cookie path'i";
$lang['Cookie_secure'] = "Cookie güvenliği [ https ]";
$lang['Cookie_secure_explain'] = "Serverınız SSL modunda çalışıyorsa açın, aksi halde açmayın";
$lang['Session_length'] = "Oturum uzunluğu [ saniye ]";


//
// Forum Management
//
$lang['Forum_admin'] = "Forum Yönetimi";
$lang['Forum_admin_explain'] = "Buradan forum ve kategorileri ekleyebilir, silebilir, değiştirebilr ve senkronize edebilirsiniz";
$lang['Edit_forum'] = "Forumu değiştir";
$lang['Create_forum'] = "Yeni forum yarat";
$lang['Create_category'] = "Yeni kategori yarat";
$lang['Remove'] = "Çıkar";
$lang['Action'] = "Action";
$lang['Update_order'] = "Sıralamayı güncelle";
$lang['Config_updated'] = "Forum Ayarları Başarıyla Güncellendi";
$lang['Edit'] = "Değiştir";
$lang['Delete'] = "Sil";
$lang['Move_up'] = "Yukarı taşı";
$lang['Move_down'] = "Aşağı taşı";
$lang['Resync'] = "Resync";
$lang['No_mode'] = "Hiç mode seçilmedi";
$lang['Forum_edit_delete_explain'] = "Aşağıdaki form sitenizdeki genel ayarları yapmak için kullanılacaktır. Kullanıcı ve forum bazlı ayarlar için sol taraftaki ilgili linklere tıklayınız.";

$lang['Move_contents'] = "Tüm içeriği taşı";
$lang['Forum_delete'] = "Forumu sil";
$lang['Forum_delete_explain'] = "Aşağıdaki form ile forum ya da kategori silebilir, içeriklerini istediğiniz yere taşıyabilirsiniz";

$lang['Status_locked'] = 'Kilitli';
$lang['Status_unlocked'] = 'Kilitli değil';
$lang['Forum_settings'] = "Genel Forum Ayarları";
$lang['Forum_name'] = "Forum adı";
$lang['Forum_desc'] = "Açıklama";
$lang['Forum_status'] = "Forum statüsü";
$lang['Forum_pruning'] = "Otomatik Mesaj Temizleme";

$lang['prune_freq'] = 'Her X günde bir forumu kontrol et';
$lang['prune_days'] = "X gün içinde cevap gelmeyen başlıkları sil";
$lang['Set_prune_data'] = "Mesaj temizliğini açtığınız halde kaç günde bir mesaj temizliği yapılacagını seçmediniz";

$lang['Move_and_Delete'] = "Taşı ve Sil";

$lang['Delete_all_posts'] = "Tüm mesajları sil";
$lang['Nowhere_to_move'] = "Taşınacak yer yok";

$lang['Edit_Category'] = "Kategoriyi değiştir";
$lang['Edit_Category_explain'] = "Bir kategorinin ismini değiştirmek için bu formu kullanın.";

$lang['Forums_updated'] = "Forum ve Kategori bilgisi başarıyla güncellendi";

$lang['Must_delete_forums'] = "Bu kategoriyi silmeden önce içindeki tüm forumları silmelisiniz";

$lang['Click_return_forumadmin'] = "Forum yönetim paneline dönmek için %sburaya%s tıklayın";


//
// Smiley Management
//
$lang['smiley_title'] = "Smiley Kontrol Paneli";
$lang['smile_desc'] = "Buradan kullanıcılara sunulan smilileri ekleyebilir kaldırabilir ya da değiştirebilirsiniz.";

$lang['smiley_config'] = "Smiley Ayarları";
$lang['smiley_code'] = "Smiley Kodu";
$lang['smiley_url'] = "Smiley Resim Dosyası";
$lang['smiley_emot'] = "Smiley Açıklaması";
$lang['smile_add'] = "Yeni smiley ekle";
$lang['Smile'] = "Smiley";
$lang['Emotion'] = "Açıklama";

$lang['Select_pak'] = "Paket (.pak) dosyası seç";
$lang['replace_existing'] = "Varolan smileyi bununla değiştir";
$lang['keep_existing'] = "Varolan smileyi koru";
$lang['smiley_import_inst'] = "Smiley dosyasını zip ile açmalı ve uygun smiley klasörüne göndermelisiniz. Sonra buradan doğru secenekleri bularak install işlemini gerçekleştiriniz.";
$lang['smiley_import'] = "Smiley Paketi Kurma";
$lang['choose_smile_pak'] = "Smiley Paket Dosyası (.pak) Seçin";
$lang['import'] = "Smiley Paketi Kur";
$lang['smile_conflicts'] = "İkilemlerde ne yapılmalı?";
$lang['del_existing_smileys'] = "Kurumdan önce varolan smileyleri sil";
$lang['import_smile_pack'] = "Smiley Paketi Kur";
$lang['export_smile_pack'] = "Smiley Paketi Yarat";
$lang['export_smiles'] = "Varolan smililerinizden bir paket yaratmak için, smiles.pak soyasını indirmek için %sburaya%s tıklayın. .pak uzantısını korumak suretiyle bu dosyanın ismini değiştirin. Sonra bu .pak dosyasını ve ilgili smiley resimlerini tek bir zip dosyası içinde sıkıştırın.";

$lang['smiley_add_success'] = "Smiley başarıyla eklendi";
$lang['smiley_edit_success'] = "Smiley başarıyla güncellendi";
$lang['smiley_import_success'] = "Smiley Paketi kurulumu başarıldı!";
$lang['smiley_del_success'] = "Smiley başarıyla silindi";
$lang['Click_return_smileadmin'] = "Smiley kontrol paneline dönmek için %sburaya%s tıklayın";


//
// User Management
//
$lang['User_admin'] = "Kullanıcı Yönetimi";
$lang['User_admin_explain'] = "Buradan kullanıcılarınızın ayarlarını değiştirebilirsiniz. İzinleri değiştirmek için soldan İzinler linkini kullanın.";

$lang['Look_up_user'] = "Kullanıcıyı incele";

$lang['Admin_user_fail'] = "Kullanıcının profili güncellenemedi.";
$lang['Admin_user_updated'] = "Kullanıcı profili başarıyla güncellendi.";
$lang['Click_return_useradmin'] = "Kullanıcı Yönetim Paneline dönmek için %sburaya%s tıklayın";

$lang['User_delete'] = "Bu kullanıcıyı sil";
$lang['User_delete_explain'] = "Kullanıcıyı silmek için buraya tıklayın. Bu dönüşü olmayan bir işlemdir.";
$lang['User_deleted'] = "Kullanıcı başarıyla silindi.";

$lang['User_status'] = "Bu kullanıcı şu anda aktif";
$lang['User_allowpm'] = "Özel mesaj atabilir";
$lang['User_allowavatar'] = "Avatar kullanabilir";

$lang['Admin_avatar_explain'] = "Burdan kullanıcının şu andaki avatarını silebilir ya da değiştirebilirsiniz.";

$lang['User_special'] = "Özel admin alanları";
$lang['User_special_explain'] = "Bu alanlar kullanıcılar tarafından değiştirilemez.  Buradan bütün kullanıcılara verilmeyen ayarları yapabilirsiniz.";


//
// Group Management
//
$lang['Group_administration'] = "Grup Yönetimi";
$lang['Group_admin_explain'] = "Burdan gruplarınızı yaratabilir, silebilir ya da değiştirebilirsiniz. Grup moderatorlerini, grup statülerini, grup isimlerini değiştirebilirsiniz";
$lang['Error_updating_groups'] = "Gruplar güncellenirken bir hata oluştu";
$lang['Updated_group'] = "Grup başarıyla güncellendi";
$lang['Added_new_group'] = "Yeni grup başarıyla yaratıldı";
$lang['Deleted_group'] = "Grup başarıyla silindi";
$lang['New_group'] = "Yeni grup yarat";
$lang['Edit_group'] = "Grubu değiştir";
$lang['group_name'] = "Grup adı";
$lang['group_description'] = "Grup açıklaması";
$lang['group_moderator'] = "Grup moderatorü";
$lang['group_status'] = "Grup statusü";
$lang['group_open'] = "Açık grup";
$lang['group_closed'] = "Kapalı group";
$lang['group_hidden'] = "Gizli group";
$lang['group_delete'] = "Grubu sil";
$lang['group_delete_check'] = "Bu grubu sil";
$lang['submit_group_changes'] = "Değişiklikleri gönder";
$lang['reset_group_changes'] = "Değişiklikleri sil";
$lang['No_group_name'] = "Bu grup için bir isim belirtmelisiniz";
$lang['No_group_moderator'] = "Bu grup için bir moderator belirtmelisiniz";
$lang['No_group_mode'] = "Bu grup için bir mod belirmelisiniz, açık ya da kapalı";
$lang['No_group_action'] = 'Bir görev seçilmemiş';
$lang['delete_group_moderator'] = "Eski grup moderatorunu sil";
$lang['delete_moderator_explain'] = "Grup moderatorunu değiştirirken, eski moderatoru gruptan atmak için burayı işaretleyin. Aksi takdirde kullanıcı grubun normal bir üyesi olacaktır.";
$lang['Click_return_groupsadmin'] = "Grup yönetimine dönmek için %sburaya%s tıklayın.";
$lang['Select_group'] = "Grup seç";
$lang['Look_up_group'] = "Grubu incele";


//
// Prune Administration
//
$lang['Forum_Prune'] = "Mesaj Temizliği";
$lang['Forum_Prune_explain'] = "Bu form ile seçtiğiniz gün sayısı içinde cevap gelmeyen başlıkları silebilirsiniz. Eğer bir sayı girmezseniz tüm mesajlar silinir. İçinde anket olan mesajları ya da duyuruları silmeyecektir. Onları tek tek elle silmek zorundasınız.";
$lang['Do_Prune'] = "Temizlik Yap";
$lang['All_Forums'] = "Tüm forumlar";
$lang['Prune_topics_not_posted'] = "Bu kadar gün içinde cevap gelmemiş mesajları sil";
$lang['Topics_pruned'] = "Silinen başlıklar";
$lang['Posts_pruned'] = "Silinen mesajlar";
$lang['Prune_success'] = "Mesaj temizliği başarılı!";


//
// Word censor
//
$lang['Words_title'] = "Kelime Sansürleme";
$lang['Words_explain'] = "Buradan otomatik olaran sansürlenecek kelimeleri ekleyebilir, silebilir, değiştirebilirsiniz. Ayrıca insanlar bu kelimeleri kullanıcı isimlerinde de kullanamazlar. Wildcard olarak * kullanabilirsiniz, Örn: *siklo* ansiklopedi'yi, siklo* siklon'û, *siklo dersiklo'yu sansürleyecektir.";
$lang['Word'] = "Kelime";
$lang['Edit_word_censor'] = "Sansürlü kelimeyi değiştir";
$lang['Replacement'] = "Yerine konacak";
$lang['Add_new_word'] = "Yeni kelime ekle";
$lang['Update_word'] = "Sansürü güncelle";

$lang['Must_enter_word'] = "Bir kelime ve onun yerine girilecek kelimeyi girmelisiniz";
$lang['No_word_selected'] = "Değiştirmek için bir kelime seçmediniz";

$lang['Word_updated'] = "Seçilen sansürlü kelime başarıyla güncellendi";
$lang['Word_added'] = "Sansürlü kelime başarıyla eklendi";
$lang['Word_removed'] = "Seçilen sansürlü kelime başarıyla silindi";

$lang['Click_return_wordadmin'] = "Kelime sansürü yönetim paneline dönmek için %sburaya%s tıklayın";


//
// Mass Email
//
$lang['Mass_email_explain'] = "Buradan tüm kullanıcılarınıza ya da bir gruba dahil tüm kullanıcılara e-mail gönderebilirsiniz. Bu admin e-mailine atılan mesajın gizli karbon kopyalarının kullanıcılara gönderilmesi yoluyla yapılacak. Eğer geniş bir gruba gönderiyorsanız lütfen stop butonuna basmayın ve sayfanın yüklenmesini sabırlı bir şekilde bekleyin. Büyük bir toptan e-mail gönderiminin yavaş olması doğaldır, Script görevini tamamladığında size haber verilecektir";
$lang['Compose'] = "Oluştur";

$lang['Recipients'] = "Alıcılar";
$lang['All_users'] = "Tüm Kullanıcılar";

$lang['Email_successfull'] = "Mesajınız Gönderilmiştir";
$lang['Click_return_massemail'] = "Toptan e-mail formuna dönmek için %sburaya%s tıklayınız";


//
// Ranks admin
//
$lang['Ranks_title'] = "Rütbe Yönetimi";
$lang['Ranks_explain'] = "Buradan kullanıcılarınıza verilecek rütbeler yaratabilir, silebilir ve değiştirebilirsiniz. Hatta kullanıcı yönetiminden kullanıclara verilebilecek özel rütbeler de yaratabilirsiniz.";

$lang['Add_new_rank'] = "Yeni rütbe ekle";

$lang['Rank_title'] = "Rütbe adı";
$lang['Rank_special'] = "Özel rütbe olarak ata";
$lang['Rank_minimum'] = "Minimum Mesaj Sayısı";
$lang['Rank_maximum'] = "Maximum Mesaj Sayısı";
$lang['Rank_image'] = "Rütbe resmi (phpBB2 ana klasörüne göre)";
$lang['Rank_image_explain'] = "Rütbe için ufak bir resim kullanın";

$lang['Must_select_rank'] = "Bir rütbe seçmelisiniz";
$lang['No_assigned_rank'] = "Hiç özel rütbe atanmamış";

$lang['Rank_updated'] = "Rütbe başarıyla güncellendi";
$lang['Rank_added'] = "Rütbe başarıyla eklendi";
$lang['Rank_removed'] = "Rütbe başarıyla silindi";
$lang['No_update_ranks'] = 'Bu rütba başarıyla silindi, ancak bu rütbeye sahip olan kullanıcıların ayarları değişmedi.  Bu kullanıcıların hesaplarını kendiniz güncellemelisiniz';

$lang['Click_return_rankadmin'] = "Rütbe yönetimine dönmek için %sburaya%s tıklayın";


//
// Disallow Username Admin
//
$lang['Disallow_control'] = "Yasaklı Kullanıcı İsmi Kontrolü";
$lang['Disallow_explain'] = "Burada kullanılmaması gereken kullanıcı isimlerini ayarlayabilirsiniz. Wildcard olarak * kullanabilirsiniz. Kaydolmuş bir kullanıcı adaını yasaklayamazsınız, bunu yapmak için ilk önce o kullanıcıyı silmelisiniz";

$lang['Delete_disallow'] = "Sil";
$lang['Delete_disallow_title'] = "Yasaklı bir kullanıcı ismini kaldır";
$lang['Delete_disallow_explain'] = "Buradan yasaklı bir kullanıcı ismini seçip göndere basarak yasağı kaldırabilirsiniz";

$lang['Add_disallow'] = "Ekle";
$lang['Add_disallow_title'] = "Yasaklı bir kullanıcı ismi ekle";
$lang['Add_disallow_explain'] = "Wildcard olarak * kullanabilirsiniz";

$lang['No_disallowed'] = "Yasaklı kullanıcı adı yok";

$lang['Disallowed_deleted'] = "Yasaklı kullanıcı adı başarıyla kaldırıldı";
$lang['Disallow_successful'] = "Yasaklı kullanıcı adı başarıyla eklendi";
$lang['Disallowed_already'] = "Girdiğiniz isim yasaklanamadı. ya listede var, ya sansür listesinde var ya da böyle bir kullanıcı mevcut";

$lang['Click_return_disallowadmin'] = "Yasaklı kullanıcı adı kontrol paneline dönmek için %sburaya%s tıklayın";


//
// Styles Admin
//
$lang['Styles_admin'] = "Stil Yönetimi";
$lang['Styles_explain'] = "Buradan kullanıcılarınıza sunduğunuz theme ve template'lerinizi yönetebilirsiniz";
$lang['Styles_addnew_explain'] = "Burada tüm theme'leriniz listelenmiştir. Bunlar henüz veritabanına kaydedilmemiştir. Kaydetmek için birini seçin ve Install tuşuna basın";

$lang['Select_template'] = "Bir template seçin";

$lang['Style'] = "Stil";
$lang['Template'] = "Template";
$lang['Install'] = "Install";
$lang['Download'] = "İndir";

$lang['Edit_theme'] = "Theme'i değiştir";
$lang['Edit_theme_explain'] = "Aşağıdaki form ile seçtiğiniz theme'i değiştirebilirsiniz";

$lang['Create_theme'] = "Theme yarat";
$lang['Create_theme_explain'] = "Aşağıdaki form ile seçilen template için yeni bir theme yaratın. Renkleri girerken # işaretini kullanmayın. Örn: CCCCCC doğru, #CCCCCC yanlış";

$lang['Export_themes'] = "Theme'i kaydet";
$lang['Export_explain'] = "Bu panel ile seçtiğiniz template için bir theme dosyası yaratıp kaydedebileceksiniz. Aşağıdan template'i seçin ve script onun için gerekli theme dosyasını yaratıp o klasöre kaydetmeyi deneyecektir. Eğer kaydedemezse size indirme opsiyonunu sunacaktır. Scriptin dosyayı kaydedebilmesi için o klasöre yazma izninin verilmiş olması gerekir. Ayrıntılı bilgi için PhpBB2 kullanma kılavuzuna bakın.";

$lang['Theme_installed'] = "Seçilen theme başarıyla install edildi";
$lang['Style_removed'] = "Seçilen theme veritabanından başarıyla silindi. Bu theme'i sisteminizden tamamiyle silmek için dosylarını da silmelisiniz.";
$lang['Theme_info_saved'] = "Seçilen template için theme bilgisi kaydedildi.";
$lang['Theme_updated'] = "Seçilen theme güncellendi. Şimdi yeni theme ayarlarını kaydetmelisiniz";
$lang['Theme_created'] = "Theme yaratıldı. Şİmdi bu theme'i sonradan kullanmak ya da taşımak için kaydetmelisiniz";

$lang['Confirm_delete_style'] = "Bu stili silmek istediğinizden emin misiniz?";

$lang['Download_theme_cfg'] = "Theme bilgi dosyası yazılamadı. Dosyayı indirmek için aşağıdaki butona tıklayınız. Sonra onu ilgili template dosyalarının bulunduğu klasöre göndermelisiniz. Sonra isterseniz dosyaları dağıtım ya da başka bir amaçla paketleyebilirsiniz";
$lang['No_themes'] = "Seçilen template'in atanmış hiç theme'i yok. Sol taraftaki Stil Yönetimi'nden Yarat'a tıklayınız";
$lang['No_template_dir'] = "Tenmplate klasörü açılamadı. Weberver tarafından okunamıyor olabilir ya da böyle bir klasör yok";
$lang['Cannot_remove_style'] = "Bu stil şu anda varsayılan stil olduğu için silinemez. Varsayılan stili değiştirip tekrar deneyin.";
$lang['Style_exists'] = "Seçilen stil adı kullanımda, lütfen başka bir isim seçiniz.";

$lang['Click_return_styleadmin'] = "Stil yönetimine dönmek için %sburaya%s tıklayın";

$lang['Theme_settings'] = "Theme Ayarları";
$lang['Theme_element'] = "Theme Elemanları";
$lang['Simple_name'] = "İsmi";
$lang['Value'] = "Değer";
$lang['Save_Settings'] = "Ayarları Kaydet";

$lang['Stylesheet'] = "CSS Stylesheet";
$lang['Background_image'] = "Arkaplan Resmi";
$lang['Background_color'] = "Arkaplan Rengi";
$lang['Theme_name'] = "Theme Adı";
$lang['Link_color'] = "Link Rengi";
$lang['Text_color'] = "Yazı Rengi";
$lang['VLink_color'] = "Ziyaret Edilmiş Link Rengi";
$lang['ALink_color'] = "Aktif Link Rengi";
$lang['HLink_color'] = "Üstüne Gelinen Link Rengi";
$lang['Tr_color1'] = "Tablo Satır Rengi 1";
$lang['Tr_color2'] = "Tablo Satır Rengi 2";
$lang['Tr_color3'] = "Tablo Satır Rengi 3";
$lang['Tr_class1'] = "Tablo Satır Sınıfı 1";
$lang['Tr_class2'] = "Tablo Satır Sınıfı 2";
$lang['Tr_class3'] = "Tablo Satır Sınıfı 3";
$lang['Th_color1'] = "Tablo Başlık Rengi 1";
$lang['Th_color2'] = "Tablo Başlık Rengi 2";
$lang['Th_color3'] = "Tablo Başlık Rengi 3";
$lang['Th_class1'] = "Tablo Başlık Sınıfı 1";
$lang['Th_class2'] = "Tablo Başlık Sınıfı 2";
$lang['Th_class3'] = "Tablo Başlık Sınıfı 3";
$lang['Td_color1'] = "Tablo Hücre Rengi 1";
$lang['Td_color2'] = "Tablo Hücre Rengi 2";
$lang['Td_color3'] = "Tablo Hücre Rengi 3";
$lang['Td_class1'] = "Tablo Hücre Sınıfı 1";
$lang['Td_class2'] = "Tablo Hücre Sınıfı 2";
$lang['Td_class3'] = "Tablo Hücre Sınıfı 3";
$lang['fontface1'] = "Font Tipi 1";
$lang['fontface2'] = "Font Tipi 2";
$lang['fontface3'] = "Font Tipi 3";
$lang['fontsize1'] = "Font Büyüklüğü 1";
$lang['fontsize2'] = "Font Büyüklüğü 2";
$lang['fontsize3'] = "Font Büyüklüğü 3";
$lang['fontcolor1'] = "Font Rengi 1";
$lang['fontcolor2'] = "Font Rengi 2";
$lang['fontcolor3'] = "Font Rengi 3";
$lang['span_class1'] = "Span Sınıfı 1";
$lang['span_class2'] = "Span Sınıfı 2";
$lang['span_class3'] = "Span Sınıfı 3";
$lang['img_poll_size'] = "Anket resmi büyüklüğü [px]";
$lang['img_pm_size'] = "Özel mesajlar statü resmi büyüklüğü [px]";


//
// Install Process
//
$lang['Welcome_install'] = "PhpBB2 Yüklemesine Hoşgeldiniz";
$lang['Initial_config'] = "Temel Ayarlar";
$lang['DB_config'] = "Veritabanı Ayarları";
$lang['Admin_config'] = "Admin Ayarları";
$lang['continue_upgrade'] = "Config dosyasını bilgisayarınza indirdikten sonra \"Upgrade'e Devam\" düğmesine basarak güncelleme işlemine devam edebilirsiniz.";
$lang['upgrade_submit'] = "Güncellemeye Devam";

$lang['Installer_Error'] = "Yükleme sırasında bir problem oluştu";
$lang['Previous_Install'] = "Önceden yüklenmiş bir PhpBB2 bulundu";
$lang['Install_db_error'] = "Veritabanını güncellerken bir hata oluştu";

$lang['Re_install'] = "Önceden yüklediğiniz PhpBB2 halen aktif. <br /><br />Eğer PhpBB2'yi yeniden yüklemek istiyorsanız aşağıdaki evet düğmesine basın. Bunu yaparken bunun şu andaki tüm verileri sileceğini, yedek yapılmayacağını unutmayın! Admin kullanıcı adı ve şifreniz yeniden yaratılacaktır; başka hiçbir ayarınız korunmayacaktır. <br /><br />Evet'e basmadan önce iyi düşünün!";

$lang['Inst_Step_0'] = "PhpBB2'yi seçtiğiniz için teşekkür ederiz. Yükleme işlemini bitirmek için lütfen aşağıdaki boşlukları doldurunuz. Yükleme işlemini yapacağınız veritabanının yüklemeden önce yaratılmış olması gerektiğini unutmayınız. ODBC kullanan bir veritabanına yükleme yapacaksanız, (Örn: MS Access) devam etmeden önce bir DSN yaratmalısınız.";

$lang['Start_Install'] = "Yüklemeye başla";
$lang['Finish_Install'] = "Yüklemeyi bitir";

$lang['Default_lang'] = "Sitenin varsayılan dili";
$lang['DB_Host'] = "Veritabanı server adresi";
$lang['DB_Name'] = "Veritabanı adı";
$lang['DB_Username'] = "Veritabanı kullanıcı adı";
$lang['DB_Password'] = "Veritabanı şifresi";
$lang['Database'] = "Veritabanınız";
$lang['Install_lang'] = "Yükleme dilini seçin";
$lang['dbms'] = "Veritabanı Türü";
$lang['Table_Prefix'] = "Veritabanındaki tabloların önadları";
$lang['Admin_Username'] = "Admin kullanıcı adı";
$lang['Admin_Password'] = "Admin şifresi";
$lang['Admin_Password_confirm'] = "Admin şifresi [ Onayla ]";

$lang['Inst_Step_2'] = "Admin kulllanıcı yaratıldı.  Bu noktada temel yükleme tamamlandı. Şimdi yeni yüklediğiniz forumu yönetebileceğiniz bir sayfaya yönlendirilceksiniz. Genel ayarları kontrol edin ve kendi ihtiyaçlarınız doğrultusunda ayarları yaptığınıza emin olun. PhpBB2'yi seçtiğiniz için teşekkür ederiz.";

$lang['Unwriteable_config'] = "Şu anda config dosyasına yazılamıyor. Aşağıdaki düğmeye nasınca bu config dosyasının bir kopyası bilgisayarınıza indirilecektir. Bu dosyayı phpBB2 ile aynı klasör içine göndermelisiniz. Bunu yaptıktan sonra bir önceki form'la yaratılan admin adı ve şifresini kullanarak yönetim paneline girmeli ve ayarları yapmalısınız. (Login olduktan sonra ekranın altında bir link gözükecektir). PhpBB2'yi seçtiğiniz için teşekkür ederiz.";
$lang['Download_config'] = "Config dosyasını İndir";

$lang['ftp_choose'] = "Download Metodunu Seçin";
$lang['ftp_option'] = "<br />PHP'nin bu versiyonunda ftp komutlarına izin verildiği için direk config dosyasını yerine ftp ile gönderebilirsiniz.";
$lang['ftp_instructs'] = "Config dosyasını phpBB2'nin bulunduğu yere otomatik olarak ftp ile göndermeyi seçtiniz.  Lütfen aşağıdaki bilgileri doldurunuz";
$lang['ftp_info'] = "FTP bilgilerinizi girin";
$lang['Attempt_ftp'] = "FTP ile gönderme deneniyor";
$lang['Send_file'] = "Bana sadece dosyayı gönder ve ben onu kendim FTP'liyim";
$lang['ftp_path'] = "phpBB2 FTP path'i";
$lang['ftp_username'] = "FTP Kullanıcı Adı";
$lang['ftp_password'] = "FTP Şİfresi";
$lang['Transfer_config'] = "Transfere başla";
$lang['NoFTP_config'] = "FTP işlemi başarısız. Lütfen config doyasını indirip kendiniz gönderiniz";

$lang['Install'] = "Yükle";
$lang['Upgrade'] = "Güncelle";


$lang['Install_Method'] = "Yükleme Metodunu Seçin";

$lang['Install_No_Ext'] = "Server'ınız seçtiğiniz veritabanı türünü desteklemiyor";

$lang['Install_No_PCRE'] = "phpBB2 php için 'Perl-Compatible Regular Expressions' modülüne ihtiyaç duymaktadır. Kullandığınız php ayarları bunu desteklememektedir";

//
// That's all Folks!
// -------------------------------------------------

?>