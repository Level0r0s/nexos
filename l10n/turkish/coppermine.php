<?php
/*********************************************
   Coppermine 1.3.1 for CPG Dragonfly™
  ********************************************
   Port Copyright © 2004-2006 CPG-Nuke Dev Team
  http://dragonflycms.org
  ********************************************
   v1.1 (c) by Grégory Demar http://coppermine.sf.net/
   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.
  ********************************************
  $Source: /cvs/l10n/turkish/coppermine.php,v $
  $Revision: 9.6 $
  $Author: nanocaiordo $
  $Date: 2006/10/07 05:21:21 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Görüntüleme');
define('PIC_VOTES', 'Oylar');
define('PIC_COMMENTS', 'Yorumlar');

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Turkish');
define('LANG_NAME_NATIVE', 'Türkçe');
define('LANG_COUNTRY_CODE', 'tr');
define('TRANS_NAME', 'Mustafa Tolga YILMAZ');
define('TRANS_EMAIL', 'mtolgay@yahoo.com');
define('TRANS_WEBSITE', 'http://fiat.web.tr/');
define('TRANS_DATE', '2003-10-02');
define('CHARSET', 'UTF-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Evet');
define('NO', 'Hayýr');
// some common strings
define('BACK', 'GERÝ');
define('CONTINU', 'ÝLERÝ');
define('INFO', 'Bilgi');
//define('_ERROR', 'Error'); //already in main lang file
define('ALBUM_DATE_FMT', '%d %B %Y');
define('LASTCOM_DATE_FMT', '%d/%m/%y saat %H:%M');
define('LASTUP_DATE_FMT', '%d %B %Y');
define('REGISTER_DATE_FMT', '%d %B %Y');
define('LASTHIT_DATE_FMT', '%d %B %Y at %H:%M');
define('COMMENT_DATE_FMT', '%d %B %Y at %H:%M');

// lang_meta_album_names
define('RANDOM', 'Rasgele resimler');
define('LASTUP', 'Son eklenenler');
define('LASTUPBY', 'Son Eklediklerim');
define('LASTALB', 'Son güncellenen albümler');
define('LASTCOM', 'Son yorumlar');
define('LASTCOMBY', 'Son Yorumlarım');
define('TOPN', 'En çok izlenen');
define('TOPRATED', 'En çok oylanan');
define('LASTHITS', 'En son izlenen');
define('SEARCH', 'Arama sonuçlarý');
define('FAVPICS', 'Sýk Kullanýlan Resimler');

// lang_errors
define('ACCESS_DENIED', 'Bu sayfayý görüntülemeye izniniz yok.');
define('PERM_DENIED', 'Bu iþlemi yürütmeye izniniz yok.');
define('PARAM_MISSING', 'Programý çalýþtýrmak için yetersiz komut(lar).');
define('NON_EXIST_AP', 'Þeçilmiþ olan Albüm/Resim yok !');
define('QUOTA_EXCEEDED', 'Disk kotasý aþýldý<br /><br />Sizin þu an ki alanýnýz [quota]K, resimleriniz [space]K alan kaplýyor, bu resim eklenseydi kotanýzý aþmýþ olacaktýnýz.');
define('GD_FILE_TYPE_ERR', 'GD Resim Kütüphanesini kullanýrken geçerli olan resim tipleri JPG ve PNG.');
define('INVALID_IMAGE', 'Yüklediðiniz resim ya bozuk ya da GD Kütüphanesi tarafýndan tanýmlanamýyor.');
define('RESIZE_FAILED', 'Küçük resim veya düþük boyutlu resim oluþturulamýyor.');
define('NO_IMG_TO_DISPLAY', 'Gösterilecek resim yok');
define('NON_EXIST_CAT', 'Seçilmiþ olan kategori yok');
define('ORPHAN_CAT', 'Bir kategorinin ana dalý yok, bu sorunu haletmek için Kategori Yöneticisini çalýþtýrýn.');
define('DIRECTORY_RO', 'Dizin \'%s\'  e yazýlabilir deðil, resimler silinemiyor');
define('NON_EXIST_COMMENT', 'Þeçilmiþ olan yorum yok.');
define('PIC_IN_INVALID_ALBUM', 'Resim var olmayan bir albümde (%s)!?');
define('BANNED', 'Bu siteyi þimdlik kullanmanýz yasaklanmýþtýr.');
define('NOT_WITH_UDB', 'Bu fonksiyon Coppermine\'da iptal edilmiþtir çünkü forum yazýlýmý ile birleþtirilmiþtir. Denemek istediðiniz ya bu konfigurasyon ile desteklenmiyor veyahut bu fonksiyon forum yazýlýmý tarafýndan uygulanacak.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');
define('NO_IMG_TO_APPROVE', 'No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE', 'Albüm listesine git');
define('ALB_LIST_LNK', 'Albüm listesi');
define('MY_GAL_TITLE', 'Kiþisel galerime git');
define('MY_GAL_LNK', 'Kiþisel Galerim');
define('MY_PROF_LNK', 'My profile');
define('MY_PROF_TITLE', 'Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Yönetici konumuna geçiþ yap');
define('ADM_MODE_LNK', 'Yönetici konumu');
define('USR_MODE_TITLE', 'Kullanýcý konumuna geçiþ yap');
define('USR_MODE_LNK', 'Kullanýcý konumu');
define('UPLOAD_PIC_TITLE', 'Bir resimi bir albüme yükle');
define('UPLOAD_PIC_LNK', 'Resim yükle');
define('REGISTER_TITLE', 'Bir hesap oluþtur');
define('REGISTER_LNK', 'Kayýt ol');
define('LOGIN_LNK', 'Giriþ');
define('LOGOUT_LNK', 'Çýkýþ');
define('LASTUP_LNK', 'Son yüklenenler');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK', 'Son yorumlar');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'En çok izlenenler');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'En çok oy alanlar');
define('SEARCH_TITLE', 'Search Photo Collection');
define('SEARCH_LNK', 'Ara');
define('FAV_TITLE', 'Sýk Kullanýlanlar');
define('FAV_LNK', 'Sýk Kullanýlanlar');
define('HELP_TITLE', 'HELP');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Yükleme izini');
define('CONFIG_LNK', 'Seçenekler');
define('ALBUMS_LNK', 'Albümler');
define('CATEGORIES_LNK', 'Kategoriler');
define('USERS_LNK', 'Kullanýcýlar');
define('GROUPS_LNK', 'Gruplar');
define('COMMENTS_LNK', 'Yorumlar');
define('SEARCHNEW_LNK', 'Küme resimleri ekle');
define('UTIL_LNK', 'Resimleri boyutlandýr');
define('BAN_LNK', 'Kullanýcýlarý yasakla');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Oluþtur veya albümleri iste');
define('MODIFYALB_LNK', 'Albümlerde deðiþiklik yap');
//define('MY_PROF_LNK', 'Profilim');

// lang_cat_list
define('CATEGORY', 'Kategori');
define('ALBUMS', 'Albümler');
//define('PICTURES', 'Resimler');

// lang_album_list
define('ALBUM_ON_PAGE', '%d albümünüz %d sayfadadýr');
// lang_thumb_view
define('DATE', 'TARÝH');
define('NAME', 'DOSYA ADI');
define('TITLE', 'BAÞLIK');
define('SORT_DA', 'Tarihi küçükten büyüyüðe sýrala');
define('SORT_DD', 'Tarihi büyükten küçüyüðe sýrala');
define('SORT_NA', 'Adý küçükten büyüyüðe sýrala');
define('SORT_ND', 'Adý büyükten küçüyüðe sýrala');
define('SORT_TA', 'Baþlýða göre küçükten büyüðe diz');
define('SORT_TD', 'Baþlýða göre büyükten küçüðe diz');
define('PIC_ON_PAGE', '%d resim %d sayfadadýr');
define('USER_ON_PAGE', '%d kullanýcý %d sayfadadýr');
define('SORT_RA', 'Reyting\'e göre artan sırala');
define('SORT_RD', 'Reyting\'e göre azalan sırala');
define('THUMB_RATING', 'Reyting');
define('SORT_TITLE', 'Fotoğrafları Sırala:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Küçük resim sayfasýna geri dön');
define('PIC_INFO_TITLE', 'Resmi bilgilerine göster/sakla');
define('SLIDESHOW_TITLE', 'Gösteri');
define('SLIDESHOW_DISABLED', 'Slayt Gösterisi pasif');
define('SLIDESHOW_DISABLED_MSG', 'Bu fonksiyon sadece üyeler içindir,lütfen üye olunuz.');
define('ECARD_TITLE', 'Bu resimi e-Kart olarak yolla');
define('ECARD_DISABLED', 'e-Kart iptal edilmiþtir');
define('ECARD_DISABLED_MSG', 'e-Kart göndermeye izininiz yok');
define('PREV_TITLE', 'Önceki resime bak');
define('NEXT_TITLE', 'Bir sonraki resime bak');
define('PIC_POS', 'RESÝM %s/%s');
define('NO_MORE_IMAGES', 'Bu galeride başka resim yok');
define('NO_LESS_IMAGES', 'Bu, galerideki son resimdir');

// lang_rate_pic
define('RATE_THIS_PIC', 'Bu resimi oylayýn ');
define('NO_VOTES', '(Oy yok þimdilik)');
define('RATING', '(Þu anki durum : %s / 5 ile %s oy)');
define('RUBBISH', 'Saçma');
define('POOR', 'Yetersiz');
define('FAIR', 'Orta');
define('GOOD', 'Ýyi');
define('EXCELLENT', 'Mükemmel');
define('GREAT', 'Harikulade');

// lang_cpg_die
//define('INFORMATION', 'Bilgi');
//define('ERROR', 'Hata');
define('_CRITICAL_ERROR', 'Ciddi hata');
define('FILE', 'Dosya: ');
define('LINE', 'Satýr: ');

// lang_display_thumbnails
define('FILENAME', 'Dosya adý : ');
define('FILESIZE', 'Dosya boyutu : ');
define('DIMENSIONS', 'Boyutlarý : ');
define('DATE_ADDED', 'Eklenme tarihi : ');

// lang_get_pic_data
define('N_COMMENTS', '%s yorum');
define('N_VIEWS', '%s görüntüleme');
define('N_VOTES', '(%s oy)');


// lang_albmgr_php
define('ALB_NEED_NAME', 'Albümleri isim vermelisiniz !');
define('CONFIRM_MODIFS', 'Bu deðiþiklikleri uygulamak istediðinizden eminmisiniz ?');
define('NO_CHANGE', 'Herhangi bir deðiþklik yapýlmadý !');
define('NEW_ALBUM', 'Yeni Albüm');
define('CONFIRM_DELETE1', 'Bu albümü silmek istediðinizden emin misiniz ?');
define('CONFIRM_DELETE2', '\\nÝçerdiði bütün resim ve yorumlar silinecektir !');
define('SELECT_FIRST', 'Önce bir albüm seçin');
define('ALB_MRG', 'Albüm Yöneticisi');
define('MY_GALLERY', '* Benim Galerim *');
define('NO_CATEGORY', '* Kategori Yok *');
define('DELETE', 'Sil');
define('NEW', 'Yeni');
define('APPLY_MODIFS', 'Deðiþiklikleri uygula');
define('SELECT_CATEGORY', 'Kategori seçin');

// lang_catmgr_php
define('MISS_PARAM', '\'%s\' için komutlar gerekli iþlem yapýlamadý !');
define('UNKNOWN_CAT', 'Seçilmiþ olan kategori veritabanýnda bulunamadý');
define('USERGAL_CAT_RO', 'Kullanýcý galerileri silinemez !');
define('MANAGE_CAT', 'Kategorileri düzenle');
define('CONFIRM_DELETE_CAT', 'Bu kategoriyi SÝLMEK istediðinizden eminmisiniz ?');
//define('CATEGORY', 'Kategori');
define('OPERATIONS', 'Ýþlemler');
define('MOVE_INTO', 'Sürükle');
define('UPDATE_CREATE', 'Kategori oluþtur/güncelle');
define('PARENT_CAT', 'Ana kategori');
define('CAT_TITLE', 'Kategori baþlýðý');
define('CAT_DESC', 'Kategori açýklamasý');

// lang_config_php
define('CONFIG_TITLE', 'Seçenekler');
define('RESTORE_CFG', 'Ayarlarý sýfýrla');
define('SAVE_CFG', 'Yeni seçenekleri kaydet');
define('NOTES', 'Notlar');
//define('INFO', 'Bilgi');
define('UPD_SUCCESS', 'Coppermine seçenekleri güncellendi');
define('RESTORE_SUCCESS', 'Coppermine ayarlarý sýfýrlandý');
define('NAME_A', 'Ad küçükten büyüyüðe');
define('NAME_D', 'Ad büyükten küçüyüðe');
define('TITLE_A', 'Baþlýk küçükten büyüðe');
define('TITLE_D', 'Baþlýk büyükten küçüðe');
define('DATE_A', 'Tarih küçükten büyüyüðe');
define('DATE_D', 'Date büyükten küçüyüðe');
define('RATING_A', 'Reyting artan');
define('RATING_D', 'Rating descending');
define('TH_ANY', 'Maksimum Boyut');
define('TH_HT', 'Yükseklik');
define('TH_WD', 'Genişlik');


// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Adýnýzý ve bir yorum yazmanýz gerek');
define('COM_ADDED', 'Yorum eklendi');
define('ALB_NEED_TITLE', 'Albüm için bir baþlýk vermeniz gerek !');
define('NO_UDP_NEEDED', 'Güncellemeye gerek yok.');
define('ALB_UPDATED', 'Albüm güncellendi');
define('UNKNOWN_ALBUM', 'Albüm yok veya sizin o albümü deðiþtirmeye izniniz yok');
define('NO_PIC_UPLOADED', 'Hiçbir resim yüklenmedi !<br /><br />Eðer bir resim seçtiyseniz, ana makinanin resim yüklemeye izin verdiðinden emin olun...');
define('ERR_MKDIR', '%s dizini yaratýlamadý!');
define('DEST_DIR_RO', '%s dizinine program tarafýndan yazýlamýyor !');
define('ERR_MOVE', '%s ý %s e sürüklemek imkansýz!');
define('ERR_FSIZE_TOO_LARGE', 'Yüklemeye çalýþtýðýnýz resmin boyutu çok büyük (izin verilen %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Yüklemeye çalýþtýðýnýz resmin boyutu çok büyük (izin verilen %s KB) !');
define('ERR_INVALID_IMG', 'Yüklemeye çalýþtýðýnýz resim geçersiz bir resim biçimidir !');
define('ALLOWED_IMG_TYPES', 'Sadece %s resim yükleyebilirsiniz.');
define('ERR_INSERT_PIC', '\'%s\' resmi albüme eklenemiyor ');
define('UPLOAD_SUCCESS', 'Resiminiz baþarý ile yüklenmiþtir<br /><br />Yönetici onayýndan sonra yayýnlanacaktýr.');
//define('INFO', 'Bilgi');
define('ERR_COMMENT_EMPTY', 'Yorumunuz boþ !');
define('ERR_INVALID_FEXT', 'Sadece bu uzantýlara sahip resimler kabul edilir : <br /><br />%s.');
define('NO_FLOOD', 'Bu resim için son yorumu yollayan zaten sizsiniz<br /><br />Eðer baþka birþey eklemek istiyorsanýz kendi yorumunuzu güncelleyin');
define('REDIRECT_MSG', 'Þu anda yönlendiriliyorsunuz.<br /><br /><br />\'CONTINUE\' a basýn eðer sayfa kendiliðinden yenilenmezse');
define('UPL_SUCCESS', 'Resminiz baþarý ile eklenmiþtir');

// lang_delete_php
define('CAPTION', 'Baþlýk');
define('FS_PIC', 'tam boy resim');
define('DEL_SUCCESS', 'baþarý ile silindi');
define('NS_PIC', 'normal boyut resim');
define('ERR_DEL', 'silinemiyor');
define('THUMB_PIC', 'küçük resim');
//define('COMMENT', 'yorum');
define('IM_IN_ALB', 'albümdeki resim');
define('ALB_DEL_SUCCESS', 'Albüm \'%s\' silindi');
define('ALB_MGR', 'Albüm Yöneticisi');
define('ERR_INVALID_DATA', 'Geçersiz veri alýndý \'%s\' da');
define('CREATE_ALB', 'Albüm \'%s\' oluþturuluyor');
define('UPDATE_ALB', 'Albüm \'%s\' güncelleniyor, \'%s\' baþlýðýdýr ve \'%s\' içeriði ile');
define('DEL_PIC', 'Resimi sil');
define('DEL_ALB', 'Albümü sil');
define('DEL_USER', 'Kullanýcý sil');
//define('ERR_UNKNOWN_USER', 'Seçilen kullanýcý yok !');
define('COMMENT_DELETED', 'Yorum baþarý ile silindi');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'Bu resmi sileceðinizden emin misiniz ? \\nYorumlar da silinecektir.');
define('DEL_THIS_PIC', 'BU RESMÝ SÝL');
define('SIZE', '%s x %s piksel');
define('VIEWS', '%s kere');
define('SLIDESHOW', 'Gösteri');
define('STOP_SLIDESHOW', 'GÖSTERÝYÝ DURDUR');
define('VIEW_FS', 'Tam boy resmi görebilmek için týklayýn');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('PIC_INF_TITLE', 'Resim bilgileri');
define('PIC_INF_FILENAME', 'Dosya adý');
define('ALBUM_NAME', 'Albüm adý');
define('PIC_INFO_RATING', 'Beðenilme (%s oy)');
define('KEYWORDS', 'Anahtar kelime');
define('PIC_INF_FILE_SIZE', 'Dosya boyutu');
define('PIC_INF_DIMENSIONS', 'Boyutlar');
define('DISPLAYED', 'Gösterilen');
define('CAMERA', 'Kamera');
define('DATE_TAKEN', 'Alýnan tarih');
define('APERTURE', 'Fotoðraf makinesi açýklýðý');
define('EXPOSURE_TIME', 'Ýfþa zamaný');
define('FOCAL_LENGTH', 'Merkez uzunluðu');
define('COMMENT', 'Yorum');
define('ADDFAV', 'Sýk Kullanýlana ekle');
define('ADDFAVPHRASE', 'Sýk Kullanýlanlar');
define('REMFAV', 'Sýk Kullanýlanlarda çýkar');
define('IPTCTITLE', 'IPTC Başlığı');
define('IPTCCOPYRIGHT', 'IPTC IPTC Başlığı');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Kategorisi');
define('IPTCSUBCATEGORIES', 'IPTC Yan kategorisi');
define('BOOKMARK_PAGE', 'Fotoğrafı Favorine ekle');
define('REMOVEFAV', 'Favori albümünden çıkarıldı');
define('ADDEDTOFAV', 'Favori albümüne eklendi');

// lang_display_comments
define('OK', 'TAMAM');
define('COM_EDIT_TITLE', 'Bu yorumu güncelle');
define('CONFIRM_DELETE_COM', 'Bu yorumu silmek istediðinizden emin misiniz ?');
define('ADD_YOUR_COMMENT', 'Yorumunuzu ekleyin');
define('COM_NAME', 'Ýsim');
//define('COMMENT', 'Yorum');
define('YOUR_NAME', 'Anonim');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Bu pencereyi kapatmak için resime klikleyin');

// lang_ecard_php
define('E_TITLE', 'Bir e-Kart yollayýn');
define('INVALID_EMAIL', '<b>Dikkat</b> : yanlýþ e-Posta adresi !');
define('E_ECARD_TITLE', 'Size %s tarafýndan bir e-Kart gönderilmiþtir');
define('VIEW_ECARD', 'Eðer e-Kartýnýzý doðru görüntüleyemiyorsanýz buraya týklayýn');
define('VIEW_MORE_PICS', 'Daha fazla resim görebilmek için bu baðlantýya týklayýn !');
define('SEND_SUCCESS', 'e-Kartýnýz gönderilmiþtir');
define('SEND_FAILED', 'Ana makina e-Kartýnýzý gönderemiyor');
define('FROM', 'Kimden');
define('_YOUR_NAME', 'Sizin adýnýz');
define('YOUR_EMAIL', 'Sizin e-Posta adresiniz');
define('TO', 'Kime');
define('RCPT_NAME', 'Alýcýnýn Ýsmi');
define('RCPT_EMAIL', 'Alýcýnýn e-Posta adresi');
define('GREETINGS', 'Selamlar');
define('MESSAGE', 'Ýleti');
define('ECARD_LINK_CORRUPT', 'Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser'); //NEW

// lang_editpics_php
define('PIC_INFO', 'Resim bilgileri');
define('ALBUM', 'Albüm');
define('EDIT_TITLE', 'Baþlýk');
define('DESC', 'Açýklama');
//define('KEYWORDS', 'Anahta kelimeler');
define('PIC_INFO_STR', '%sx%s - %sKB - %s görüntüleme - %s oy');
define('APPROVE', 'Resimi onayla');
define('POSTPONE_APP', 'Onaylamayý ertele');
//define('DEL_PIC', 'Resimi sil');
define('READ_EXIF', 'Favori albümüne eklendi');
define('RESET_VIEW_COUNT', 'Görüntüleme sayacýný sýfýrla');
define('RESET_VOTES', 'Oylamalarý sýfýrla');
define('DEL_COMM', 'Yorumlarý sil');
define('UPL_APPROVAL', 'Yüklemeyi onayla');
define('EDIT_PICS', 'Resimlerde deðiþiklik yap');
define('SEE_NEXT', 'Sonraki resimleri gör');
define('SEE_PREV', 'Önceki resimleri gör');
define('N_PIC', '%s resim');
define('N_OF_PIC_TO_DISP', 'Gösterilecek olan resim sayýsý');
define('APPLY', 'Deðiþiklikleri uygula');

// lang_groupmgr_php
define('GROUP_NAME', 'Grup adý');
define('DISK_QUOTA', 'Disk kotasý');
define('CAN_RATE', 'Resimleri oylayabilir');
define('CAN_SEND_ECARDS', 'e-Kart gönderebilir');
define('CAN_POST_COM', 'Yorum yazabilir');
define('CAN_UPLOAD', 'Resim yükleyebilir');
define('CAN_HAVE_GALLERY', 'Kiþisel galeri yapabilir');
//define('APPLY', 'Deðiþiklikleri uygula');
define('CREATE_NEW_GROUP', 'Yeni grup yarat');
define('DEL_GROUPS', 'Seçilmiþ olan grup(larý) sil');
define('CONFIRM_DEL', 'Dikkat ! Eðer bu grubu silerseniz, gruptaki bütün kullanýcýlar \'Registered\' grubuna transfer edilecektir !\\n\\nDevam etmek istiyormusunuz ?');
define('GROUP_TITLE', 'Kullanýcý gruplarýný düzenle');
define('APPROVAL_1', 'Herkese açýk yükleme onayý (1)');
define('APPROVAL_2', 'Kiþisel yükleme onayý (2)');
define('NOTE1', '<b>(1)</b> Kiþisel galeriye yüklenecek olan resimler yönetici tarafýndan onaylanmalý');
define('NOTE2', '<b>(2)</b> Kullanýcýya ait galeriye yükleme yapmak için yönetici onayýna gerek');
//define('NOTES', 'Notlar');

// lang_index_php
define('WELCOME', 'Hoþgeldiniz !');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'Bu albümü silmek istediðinizden emin misiniz ? \\nBütün resimler ve yorumlar da silinecektir.');
//define('DELETE', 'SÝL');
define('MODIFY', 'ÖZELLÝKLER');
//define('EDIT_PICS', 'RESÝMLERDE DEÐÝÞÝÝKLÝLK YAP');

// lang_list_categories
define('HOME', _HOME);
define('STAT1', '<b>[pictures]</b> resimler <b>[albums]</b> albümde ve <b>[cat]</b> kategoride, <b>[comments]</b> yorum <b>[views]</b> kere görüntülenmiþtir');
define('STAT2', '<b>[pictures]</b> resim <b>[albums]</b> albümde <b>[views]</b> kere görüntülenmiþtir');
define('XX_S_GALLERY', '%s\\ in Galerisi');
define('STAT3', '<b>[pictures]</b> resim <b>[albums]</b> albümde <b>[comments]</b> yorum <b>[views]</b> kere görüntülenmiþtir');

// lang_list_users
define('USER_LIST', 'Kullanýcý listesi');
define('NO_USER_GAL', 'Albüm yaratma izni olan hiçbir kullanýcý yok');
define('N_ALBUMS', '%s albüm');
define('N_PICS', '%s resim');

// lang_list_albums
define('N_PICTURES', '%s resim');
define('LAST_ADDED', ', sonuncusu %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Albümü güncelle %s');
define('GENERAL_SETTINGS', 'Genel seçenekler');
define('ALB_TITLE', 'Albüm baþlýðý');
define('ALB_CAT', 'Albüm kategorisi');
define('ALB_DESC', 'Albüm açýklamasý');
define('ALB_THUMB', 'Albüm küçük resimler');
define('ALB_PERM', 'Bu albüm için izinler');
define('CAN_VIEW', 'Albüm kimler tarafýndan görüntülenebilir');
define('MOD_CAN_UPLOAD', 'Ziyaretçiler resim yükleyebilir');
define('CAN_POST_COMMENTS', 'Ziyaretçiler yorum yollayabilir');
define('MOD_CAN_RATE', 'Ziyaretçiler resim oylayabilir');
define('USER_GAL', 'Kullanýcý galerisi');
define('NO_CAT', '* Kategori yok *');
define('ALB_EMPTY', 'Albüm boþ');
define('LAST_UPLOADED', 'Son yüklenen');
define('PUBLIC_ALB', 'Herkes (açýk albüm)');
define('ME_ONLY', 'Sadece ben');
define('OWNER_ONLY', 'Albüm sahibi (%s) sadece');
define('GROUPP_ONLY', '\'%s\' grubunun üyesi');
define('ERR_NO_ALB_TO_MODIFY', 'Güncelleme yapabileceðiniz bir albüm yok veritabanýnda.');
define('UPDATE', 'Albümü güncelle');

// lang_rate_pic_php
define('ALREADY_RATED', 'Bu resimi önceden oyladýnýz');
define('RATE_OK', 'Oyunuz kabul edildi');

// lang_register_php
define('USERNAME', 'Kullanýcý Adý');
define('X_S_PROFILE', '%s\'in profili');
define('GROUP', 'Grup');
define('DISK_USAGE', 'Disk kullanýmý');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Eleþtiri yorumlarý');
define('NO_COMMENT', 'Eleþtirilecek yorum yok');
define('N_COMM_DEL', '%s yorum silindi');
define('N_COMM_DISP', 'Gösterilecek yorum sayýsý');
define('R_SEE_PREV', 'Öncekini gör');
define('R_SEE_NEXT', 'Sonrakini göre');
define('R_DEL_COMM', 'Seçilmiþ yorumlarý sil');

// lang_search_php
define('S_SEARCH', 'Resim arþivinde ara');

// lang_search_new_php
define('PAGE_TITLE', 'Yeni resimler ara');
define('SELECT_DIR', 'Dizin seç');
define('SELECT_DIR_MSG', 'Bu fonksiyon size FTP ile yükledðiniz bir grup resmi eklemenizi saðlar.<br /><br />Yüklediðiniz resimlerin dizinini seçin');
define('NO_PIC_TO_ADD', 'Eklenecek resim yok');
define('NEED_ONE_ALBUM', 'Bu fonksiyonu kullanabilmek için en az bir albüme ihtiyacýnýz var');
define('WARNING', 'Dikkat');
define('CHANGE_PERM', 'Program bu dizine yazamýyor, yazabilmek için CHMOD unu 755 veya 777 yapmanýz gerekiyor resimleri yüklemeden önce !');
define('TARGET_ALBUM', '<b>Resimlerini "</b>%s<b>" e gönder </b>%s');
define('FOLDER', 'Klasör');
define('IMAGE', 'Resim');
//define('ALBUM', 'Albüm');
define('RESULT', 'Sonuç');
define('DIR_RO', 'Yazýlamaz. ');
define('DIR_CANT_READ', 'Okunamaz. ');
define('INSERT', 'Galeriye yeni resim ekle');
define('LIST_NEW_PIC', 'Yeni resimlerin listesi');
define('INSERT_SELECTED', 'Seçilmiþ resimleri ekle');
define('NO_PIC_FOUND', 'Yeni resim bulunamadý');
define('BE_PATIENT', 'Lütfen bekleyiniz, program iþleminiz yapmaktadýr');
define('SN_NOTES', '<ul><li><b>OK</b> : Resminiz baþarý ile eklenmiþtir.<li><b>DP</b> : Resim bir kopya, baþka bir kopyasý veritabanýnda bulunmaktadýr<li><b>PB</b> : Resim yüklenemedi, resimlerin bulunduðu dizinlerin doðru ayarlanmýþ olduðundan emin olun<li>Eðer OK, DP, PB \'signs\' iþaretlerinden biri çýkmýyorsa, kýrýk resmin üzerine týklayýn PHP hata iletisini görebilmek için<li>Eðer sunucu zaman baðlantý hatasý olursa, yenile tuþuna basýn</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('UP_TITLE', 'Resim yükleme');
define('MAX_FSIZE', 'En fazla izin verilen boyut %s KB');
//define('ALBUM', 'Albüm');
define('PICTURE', 'Resim');
define('PIC_TITLE', 'Resim Baþlýðý');
define('DESCRIPTION', 'Resim açýklamasý');
define('UP_KEYWORDS', 'Anahat kelimeler (her anahtar kelimesi arasýnda boþluk býrakýn)');
define('ERR_NO_ALB_UPLOADABLES', 'Yükleyebileceðiniz herhangi bir albümünüz yok');

// lang_usermgr_php
define('U_TITLE', 'Kullanýcýlar düzenle');
//define('NAME_A', 'Ýsimler küçükten büyüðe sýrala ');
//define('NAME_D', 'Ýsimler büyüktan küçüðe sýrala');
define('GROUP_A', 'Gruplarý küçükten büyüðe sýrala');
define('GROUP_D', 'Gruplarý büyüktan küçüðe sýrala');
define('REG_A', 'Kayýt olma tarihi küçükten büyüðe sýrala');
define('REG_D', 'Kayýt olma tarihi büyüktan küçüðe sýrala');
define('PIC_A', 'Resim sayma küçükten büðüðe');
define('PIC_D', 'Resim sayma büyükten küçüðe');
define('DISKU_A', 'Disk kullanýmý küçükten büyüðe');
define('DISKU_D', 'Disk kullanýmý büyükten küçüðe');
define('SORT_BY', 'Kullanýcýlarý göre sýrala');
define('ERR_NO_USERS', 'Kullanýcý tablosu boþ !');
define('ERR_EDIT_SELF', 'Kendi profilinizi düzenleyemezsiniz, bunun için \'My profile\' baðlantýsýný kullanýn');
define('EDIT', 'DÜZENLE');
//define('DELETE', 'SÝL');
define('U_NAME', 'Kullanýcý ad');
//define('GROUP', 'Grup');
define('INACTIVE', 'Pasif');
//define('OPERATIONS', 'Ýþlemler');
define('PICTURES', 'Resimler');
define('DISK_SPACE', 'Kullanýlan alan / kota');
define('REGISTERED_ON', 'Kayýt olma tarihi');
define('U_USER_ON_P_PAGES', '%d kullanýcý %d sayfada');
define('USER_CONFIRM_DEL', 'Bu kullanýcýy SÝLMEK istediðinizden emin misiniz ? \\nBütün resim ve albümleri silinecektir.');
define('MAIL', 'POSTA');
define('ERR_UNKNOWN_USER', 'Seçilen kullanýcý yok !');
define('MODIFY_USER', 'Kullanýcýy Düzenle');
//define('NOTES', 'Notlar');
define('NOTE_LIST', '<li>Þu anki þifreyi deðiþtirmek istemiyorsanýz Þifre alanýný boþ býrakýnýz');
define('PASSWORD', 'Þifre');
define('USER_ACTIVE_CP', 'Kulannýcý etkin');
define('USER_GROUP_CP', 'Kullanýcý grubu');
define('USER_EMAIL', 'Kullanýcý e-Posta');
define('USER_WEB_SITE', 'Kullanýcý að sitesi');
define('CREATE_NEW_USER', 'Yeni kullanýcý oluþtur');
define('USER_FROM', 'Kullanýcý konumu');
define('USER_INTERESTS', 'Kullanýcý Ýlgi alanlarý');
define('USER_OCC', 'Kullanýcý Mesleði');

// lang_util_php
define('UTIL_TITLE', 'Resimleri boyutlandýr');
define('WHAT_IT_DOES', 'Ne yapar');
define('WHAT_UPDATE_TITLES', 'Dosya Adýndan baþlýklarý günceller');
define('WHAT_DELETE_TITLE', 'Baþlýklarý Siler');
define('WHAT_REBUILD', 'Küçük resimleri ve boyutlandýrýlmýþ resimleri yeniden yapýlandýrýr');
define('WHAT_DELETE_ORIGINALS', 'Gerçek boyuttaki resimleri siler ve onlarý boyutlandýrýlmýþla deðiþtirir');
define('U_FILE', 'Dosya');
define('TITLE_SET_TO', 'baþlýk ayarlanmýþ');
define('SUBMIT_FORM', 'ilet');
define('UPDATED_SUCCESFULLY', 'güncelleme baþarýlý');
define('ERROR_CREATE', 'yaratýrken HATA');
define('CONTIN', 'Daha fazla resim iþle');
define('MAIN_SUCCESS', ' %s dosyasý baþarýlý bir þekilde ana resim olarak kullanýldý');
define('ERROR_RENAME', ' %s ye %s yeniden adlandýrýken hata oluþtu');
define('ERROR_NOT_FOUND', ' %s dosyasý bulunamadý');
define('U_BACK', 'anasyafa geri dön');
define('THUMBS_WAIT', 'Küçük resimleri ve/veya boyutlandýrýlmýþ resimler güncelleniyor, lütfen bekleyiniz...');
define('THUMBS_CONTINUE_WAIT', 'Küçük resimlerin ve/veya boyutlandýrýlmýþ resimlerin güncellenmesine devam ediliyor...');
define('TITLES_WAIT', 'Baþlýklar güncelleniyor, lütfen bekleyiniz...');
define('DELETE_WAIT', 'Baþlýklar siliniyor, lütfen bekleyiniz...');
define('REPLACE_WAIT', 'Asýl resimler siliniyor ve/veya boyutlandýrýlmýþ resimleri ile deðiþtiriliyor, lütfen bekleyiniz...');
define('INSTRUCTION', 'Hýzlý Talimat');
define('INSTRUCTION_ACTION', 'Hareket seç');
define('INSTRUCTION_PARAMETER', 'Parametreleri ayarlar');
define('INSTRUCTION_ALBUM', 'Albüm seç');
define('INSTRUCTION_PRESS', ' %s bas');
define('U_UPDATE', 'Küçük resimleri ve/veya boyutlandýrýlmýþ resimleri güncelle');
define('UPDATE_WHAT', 'Neler güncellenmeli');
define('UPDATE_THUMB', 'Sadece küçük resimler');
define('UPDATE_PIC', 'Sadece boyutlandýrýlmýþ resimler');
define('UPDATE_BOTH', 'Her ikiside küçük resimler ve boyutlandýrýlmýþ resimler');
define('UPDATE_NUMBER', 'Klik baþýna iþlenmiþ resimlerin sayýsý');
define('UPDATE_OPTION', '(Eðer timeout sorunlarý yaþýyorsanýz daha düþüðe getirmeyi deneyin)');
define('FILENAME_TITLE', 'Dosya Adý ? Resim baþlýðý');
define('FILENAME_HOW', 'Dosya adý nasýl deðiþtirilsin');
define('FILENAME_REMOVE', '.jpg sonunu kaldýr ve _ (alt çizgi)yi boþlukla deðiþtir');
define('FILENAME_EURO', '2003_11_23_13_20_20.jpg yi 3/11/2003 13:20 ye deðiþtir');
define('FILENAME_US', '2003_11_23_13_20_20.jpg yi 11/23/2003 13:20 ye deðiþtir');
define('FILENAME_TIME', '2003_11_23_13_20_20.jpg yi 13:20 ye deðiþtir');
define('UT_DELETE', 'Resim baþlýklarýný veya gerçek boyut resimlerini sil');
define('DELETE_TITLE', 'Resim baþlýklarýný sil');
define('DELETE_ORIGINAL', 'Gerçek boy resimleri sil');
define('DELETE_REPLACE', 'Asýl resimleri sil ve bunlarý boyutlandýrýlmýþlarla deðiþtir');
//define('SELECT_ALBUM', 'Albüm seç');

// lang_pagetitle_php
define('VIEWING', 'Fotoğraf Gösteriliyor');
define('USR', ' nun Fotoğraf Galerisi');
define('PHOTOGALLERY', 'Fotoğraf Galerisi');
$lang_usermgr_php = array(
    'name_a' => 'Ýsimler küçükten büyüðe sýrala ',
    'name_d' => 'Ýsimler büyüktan küçüðe sýrala',
    'group_a' => 'Gruplarý küçükten büyüðe sýrala',
    'group_d' => 'Gruplarý büyüktan küçüðe sýrala',
    'reg_a' => 'Kayýt olma tarihi küçükten büyüðe sýrala',
    'reg_d' => 'Kayýt olma tarihi büyüktan küçüðe sýrala',
    'pic_a' => 'Resim sayma küçükten büðüðe',
    'pic_d' => 'Resim sayma büyükten küçüðe',
    'disku_a' => 'Disk kullanýmý küçükten büyüðe',
    'disku_d' => 'Disk kullanýmý büyükten küçüðe',
);
$lang_byte_units = array('Bayt', 'KB', 'MB');
// Day of weeks and months
$lang_day_of_week = array('Paz', 'Pzt', 'Sal', 'Çrþ', 'Prþ', 'Cum', 'Cmt');
$lang_month = array('Oca', 'Þub', 'Mar', 'Nis', 'May', 'Haz', 'Tem', 'Auð', 'Eyl', 'Eki', 'Kas', 'Ara');
$lang_meta_album_names = array( 
    'random' => 'Rasgele resimler', 
    'lastup' => 'Son eklenenler', 
    'lastupby' => 'My Last additions', // new 1.2.2
    'lastalb'=> 'Son güncellenen albümler', 
    'lastcom' => 'Son yorumlar', 
    'lastcomby' => 'My Last comments', // new 1.2.2
    'topn' => 'En çok izlenen', 
    'toprated' => 'En çok oylanan', 
    'lasthits' => 'En son izlenen', 
    'search' => 'Arama sonuçlarý', 
    'favpics'=> 'Sýk Kullanýlan Resimler' 
);
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array(
    'title' => 'Configuration',
	'restore_cfg' => 'Ayarlarý sýfýrla',
	'save_cfg' => 'Yeni seçenekleri kaydet',
	'notes' => 'Notlar',
	'info' => 'Bilgi',
	'upd_success' => 'Coppermine seçenekleri güncellendi',
	'restore_success' => 'Coppermine ayarlarý sýfýrlandý',
	'name_a' => 'Ad küçükten büyüyüðe',
	'name_d' => 'Ad büyükten küçüyüðe',
	'title_a' => 'Baþlýk küçükten büyüðe', 
	'title_d' => 'Baþlýk büyükten küçüðe',
	'date_a' => 'Tarih küçükten büyüyüðe',
	'date_d' => 'Date büyükten küçüyüðe',
	'rating_a' => 'Rating ascending', // new in cpg1.2.0nuke
	'rating_d' => 'Rating descending', // new in cpg1.2.0nuke
	'th_any' => 'Max Aspect',
	'th_ht' => 'Height',
	'th_wd' => 'Width',
);
// start left side interpretation
$lang_config_data = array(
//General settings
'Genel Seçenekler',
	array('Galeri Ýsmi', 'gallery_name', 0),
	array('Galeri Açýklamasý', 'gallery_description', 0),
	array('Galeri Yöneticisi e-Posta', 'gallery_admin_email', 0),
	array('\'See more pictures\' hedef adres baðlantýsý e-Kartlar içinde', 'ecards_more_pic_target', 0),
	array('Arayüz', 'theme', 6),
	array('Page Specific Titles instead of >Coppermine', 'nice_titles', 1),
//Album list view
'Albüm liste görüntüsü',
	array('Ana tablonun geniþliði (piksel veya %)', 'main_table_width', 0),
	array('Gösterilecek olan kategori düzeylerinin sayýsý', 'subcat_level', 0),
	array('Gösterilecek albümlerin sayýsý', 'albums_per_page', 0),
	array('Albüm listesi için sütun sayýsý', 'album_list_cols', 0),
	array('Küçük resimlerin boyutu piksel olarak', 'alb_list_thumb_size', 0),
	array('Ana sayfanýn içeriði', 'main_page_layout', 0),
	array('Birinci seviye albümlerin küçük resimlerini kategorilerde göster', 'first_level',1), 
// Thumbnail view
'Küçük resim görüntüsü',
	array('Küçük resim sayfasýndaki sütun sayýsý', 'thumbcols', 0),
	array('Küçük resim sayfasýndaki sýra sayýsý', 'thumbrows', 0),
	array('En çok gösterilecek etiket sayýsý', 'max_tabs', 0),
	array('Resim manþet baþlýðýný küçük resim sayfasýnda göster', 'caption_in_thumbview', 1),
	array('Küçük resimlerin altýnda yorum sayýsýný görüntüle', 'display_comment_count', 1),
	array('Hazýr ayarlarý kullanarak resimleri sýrala', 'default_sort_order', 3),
	array('Bir resmin \'top-rated\' listesine gözükebilmesi için almasý gerekn azami oy sayýsý', 'min_votes_for_rating', 0),
	array('Alts and title tags of thumbnail show title and keyword instead of picinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
// Display Image & Comment settings
'Resim görüntüleme &amp; Yorum seçenekleri',
	array('Resimlerin gösterileceði tablonun geniþliði (piksel veya %)', 'picture_table_width', 0),
	array('Resim bilgilerine göster', 'display_pic_info', 1),
	array('Küfürleri yorumlarda filtrele', 'filter_bad_words', 1),
	array('Yorumlar da smiley kullanýmýna izin ver', 'enable_smilies', 1),
	array('Allow several consecutive comments on one pic from the same user', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
	array('Email site admin upon comment submission' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
	array('Bir resim açýklmasýnýn maksimum uzunluðu', 'max_img_desc_length', 0),
	array('Bir kelime içindeki maksimum harf sayýsý', 'max_com_wlength', 0),
	array('Bir yorum içindeki maksimum satýr sayýsý', 'max_com_lines', 0),
	array('Bir yorumun maksimum uzunluðu', 'max_com_size', 0),
	array('Film þeridi göster', 'display_film_strip', 1), 
	array('Film þeridindeki adet sayýsý', 'max_film_strip_items', 0), 
	array('Allow viewing of full size pic by anonymous', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
	array('Number of days between being able to vote on the same image', 'keep_votes_time',0), // new in cpg1.2.2c nuke
	array('Show fullsize picture in slideshow', 'fullsize_slideshow',1),
	array('Show blocks on the right of displayimage if right blocks are on at module level?', 'right_blocks', 1), // new 1.2.2
//Pictures and thumbnails settings
'Resim ve küçük resim seçenekleri',
	array('JPEG dosyalarý için kalite ayarý', 'jpeg_qual', 0),
	array('Place watermark on image', 'watermark', 1),
	array('Küçük resmin en büyük boyutu <b>*</b>', 'thumb_width', 0), 
	array('Boyut kullan ( geniþlik veya yükseklik veya en büyük görünüþ küçük resimler için ) <b>*</b>', 'thumb_use', 7), 
	array('Ara resimleri yarat', 'make_intermediate',1),
	array('Bir ara resmin maksium geniþliði veya boyu <b>*</b>', 'picture_width', 0),
	array('Yüklenecek olan resimler için maksimum boyut (KB)', 'max_upl_size', 0),
	array('Yüklenecek olan resimler için makisum geniþlik veya boy (piksel)', 'max_upl_width_height', 0),
	array('Allow multiple Files to be upload with same file name', 'samename', 1), 
//'User settings',
'Kullanýcý seçenekleri',
	array('Yeni kullanýcý kaydýna izin ver', 'allow_user_registration', 1),
/* 
array('Yeni kullanýcý kaydý için e-Posta onayýna ihtiyaç var', 'reg_requires_valid_email', 1),
array('Ýki kullanýcý ayný e-Posta adresine sahip olmasýna izin ver', 'allow_duplicate_emails_addr', 1),
*/
array('Kullanýcýlarýn kiþisel galerileri olabilir', 'allow_private_albums', 1),
	array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
	// Custom fields for image description
'Resim açýklamalarý için özel alanlar (eðer kullanýlmayacaksa boþ býrakýn)',
	array('Alan 1 adý', 'user_field1_name', 0),
	array('Alan 2 adý', 'user_field2_name', 0),
	array('Alan 3 adý', 'user_field3_name', 0),
	array('Alan 4 adý', 'user_field4_name', 0),
	//'Pictures and thumbnails advanced settings',
'Resim ve küçük resim geliþmiþ seçenekleri',
	array('Çýkýþ yapmamýþ kullanýcýya özel resim ikonunu göster', 'show_private',1), 
	array('Dosya isimlerinde karakterlere izin verme', 'forbiden_fname_char',0),
	array('Yüklenmiþ olan resimler için kabul edilen uzantýlar', 'allowed_file_extensions',0),
	array('Resimleri boyutlandýrmak için kullanýlan yöntem', 'thumb_method',2),
	array('ImageMagick için yol (example /usr/bin/X11/)', 'impath', 0),
	array('Kabul edilen resim tipleri (sadece ImageMagick için geçerli)', 'allowed_img_types',0),
	array('Komut satýr seçenekleri ImageMagick için', 'im_options', 0),
	array('EXIF bilgisini oku JPEG dosyalarýnda', 'read_exif_data', 1),
	array('Read IPTC data in JPEG files', 'read_iptc_data', 1), // new in cpg1.2.0nuke
	array('Albüm dizini <b>*</b>', 'fullpath', 0),
	array('Kullanýcý resimleri için dizin <b>*</b>', 'userpics', 0),
	array('Ara resimler için önek <b>*</b>', 'normal_pfx', 0),
	array('Küçük resimler için önek <b>*</b>', 'thumb_pfx', 0),
	array('Picinfo display filename', 'picinfo_display_filename', '1'), // new in cpg1.2.0nuke
	array('Picinfo display album name', 'picinfo_display_album_name', '1'), // new in cpg1.2.0nuke
	array('Picinfo display_file_size', 'picinfo_display_file_size', '1'), // new in cpg1.2.0nuke
	array('Picinfo display_dimensions', 'picinfo_display_dimensions', '1'), // new in cpg1.2.0nuke
	array('Picinfo display_count_displayed', 'picinfo_display_count_displayed', '1'), // new in cpg1.2.0nuke
	array('Picinfo display_URL', 'picinfo_display_URL', '1'), // new in cpg1.2.0nuke
	array('Picinfo display URL as bookmark link', 'picinfo_display_URL_bookmark', '1'), // new in cpg1.2.0nuke
	array('Picinfo display fav album link', 'picinfo_display_favorites', '1'), // new in cpg1.2.0nuke
//'Cookies &amp; Charset settings'
'Cookie &amp; Charset ayarlarý',
	array('Program tarafýndan kullanýlan cookielerin adý', 'cookie_name', 0),
	array('Program tarafýndan kullanýlan cookielerin dizin yolu', 'cookie_path', 0),
//    'Miscellaneous settings',
'Diðer seçenekler',
	array('Hata çözümleme seçeneði aç', 'debug_mode', 1),
'<br /><div align="center">(*) * ile gösterilmiþ olan alanlar, resim galerinizde resim bulunuyorsa deðiþtirilmemeli</div><br />'
);
// end left side interpretation
