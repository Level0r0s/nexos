<?php
/****************************************************************************/
/* Coppermine Photo Gallery 1.2.3 for CMS                                   */
/****************************************************************************/
/****************************************************************************/
/* Port Copyright (C) 2004 Coppermine for CMS Dev Team  		              */
/* http://coppermine.findhere.org/                                          */
/****************************************************************************/
/* Updated by the Coppermine Dev Team  2003                                 */
/* (http://coppermine.sf.net/team/)                                         */
/* see /docs/credits.html for details                                       */
/****************************************************************************/
/* Copyright (C) 2002,2003  Gregory DEMAR <gdemar@wanadoo.fr>               */
/* http://www.chezgreg.net/coppermine/                                      */
/* This program is free software; you can redistribute it and/or modify     */
/* it under the terms of the GNU General Public License as published by     */
/* the Free Software Foundation; either version 2 of the License, or        */
/* (at your option) any later version.                                      */
/*****************************************************************************/
/*   $Id: lang-turkish.php,v 1.1 2004/08/04 02:23:47 akamu Exp $              */
/*****************************************************************************/
// lang_translation_info
define('LANG_NAME_ENGLISH', 'Turkish');
define('LANG_NAME_NATIVE', 'Türkçe');
define('LANG_COUNTRY_CODE', 'tr');
define('TRANS_NAME', 'Mustafa Tolga YILMAZ');
define('TRANS_EMAIL', 'mtolgay@yahoo.com');
define('TRANS_WEBSITE', 'http://www.fiat.web.tr/');
define('TRANS_DATE', '2003-10-02');
define('CHARSET', 'windows-1254');
define('TEXT_DIR', 'ltr');
define('YES', 'Evet');
define('NO', 'Hayýr');
define('BACK', 'GERÝ');
define('CONTINUE', 'ÝLERÝ');
define('INFO', 'Bilgi');
define('ERROR', 'Hata');
define('ALBUM_DATE_FMT', '%d %B %Y');
define('LASTCOM_DATE_FMT', '%d/%m/%y saat %H:%M');
define('LASTUP_DATE_FMT', '%d %B %Y');
define('REGISTER_DATE_FMT', '%d %B %Y');
define('LASTHIT_DATE_FMT', '%d %B %Y at %H:%M');
define('COMMENT_DATE_FMT', '%d %B %Y at %H:%M');
// lang_meta_album_names
define('RANDOM', 'Rasgele resimler');
define('LASTUP', 'Son eklenenler');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Son güncellenen albümler');
define('LASTCOM', 'Son yorumlar');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'En çok izlenen');
define('TOPRATED', 'En çok oylanan');
define('LASTHITS', 'En son izlenen');
define('SEARCH', 'Arama sonuçlarý');
define('FAVPICS', 'Sýk Kullanýlan Resimler');

// lang_errors
define('ACCESS_DENIED', 'Bu sayfayý g&ouml;r&uuml;nt&uuml;lemeye izniniz yok.');
define('PERM_DENIED', 'Bu iþlemi y&uuml;r&uuml;tmeye izniniz yok.');
define('PARAM_MISSING', 'Programý çalýþtýrmak için yetersiz komut(lar).');
define('NON_EXIST_AP', 'Þeçilmiþ olan Alb&uuml;m/Resim yok !');
define('QUOTA_EXCEEDED', 'Disk kotasý aþýldý<br /><br />Sizin þu an ki alanýnýz [quota]K, resimleriniz [space]K alan kaplýyor, bu resim eklenseydi kotanýzý aþmýþ olacaktýnýz.');
define('GD_FILE_TYPE_ERR', 'GD Resim K&uuml;t&uuml;phanesini kullanýrken geçerli olan resim tipleri JPG ve PNG.');
define('INVALID_IMAGE', 'Y&uuml;klediðiniz resim ya bozuk ya da GD K&uuml;t&uuml;phanesi tarafýndan tanýmlanamýyor.');
define('RESIZE_FAILED', 'K&uuml;ç&uuml;k resim veya d&uuml;þ&uuml;k boyutlu resim oluþturulamýyor.');
define('NO_IMG_TO_DISPLAY', 'G&ouml;sterilecek resim yok');
define('NON_EXIST_CAT', 'Seçilmiþ olan kategori yok');
define('ORPHAN_CAT', 'Bir kategorinin ana dalý yok, bu sorunu haletmek için Kategori Y&ouml;neticisini çalýþtýrýn.');
define('DIRECTORY_RO', 'Dizin \'%s\'  e yazýlabilir deðil, resimler silinemiyor');
define('NON_EXIST_COMMENT', 'Þeçilmiþ olan yorum yok.');
define('PIC_IN_INVALID_ALBUM', 'Resim var olmayan bir albümde (%s)!?');
define('BANNED', 'Bu siteyi þimdlik kullanmanýz yasaklanmýþtýr.');
define('NOT_WITH_UDB', 'Bu fonksiyon Coppermine\'da iptal edilmiþtir çünkü forum yazýlýmý ile birleþtirilmiþtir. Denemek istediðiniz ya bu konfigurasyon ile desteklenmiyor veyahut bu fonksiyon forum yazýlýmý tarafýndan uygulanacak.');

// lang_main_menu
define('ALB_LIST_TITLE', 'Alb&uuml;m listesine git');
define('ALB_LIST_LNK', 'Alb&uuml;m listesi');
define('MY_GAL_TITLE', 'Kiþisel galerime git');
define('MY_GAL_LNK', 'Kiþisel Galerim');
define('MY_PROF_LNK', 'My profile');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Y&ouml;netici konumuna geçiþ yap');
define('ADM_MODE_LNK', 'Y&ouml;netici konumu');
define('USR_MODE_TITLE', 'Kullanýcý konumuna geçiþ yap');
define('USR_MODE_LNK', 'Kullanýcý konumu');
define('UPLOAD_PIC_TITLE', 'Bir resimi bir alb&uuml;me y&uuml;kle');
define('UPLOAD_PIC_LNK', 'Resim y&uuml;kle');
define('REGISTER_TITLE', 'Bir hesap oluþtur');
define('REGISTER_LNK', 'Kayýt ol');
define('LOGIN_LNK', 'Giriþ');
define('LOGOUT_LNK', 'Çýkýþ');
define('LASTUP_LNK', 'Son y&uuml;klenenler');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Son yorumlar');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'En çok izlenenler');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'En çok oy alanlar');
define('SEARCH_LNK', 'Ara');
define('FAV_LNK', 'Sýk Kullanýlanlar');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu

define('UPL_APP_LNK', 'Y&uuml;kleme izini');
define('CONFIG_LNK', 'Seçenekler');
define('ALBUMS_LNK', 'Alb&uuml;mler');
define('CATEGORIES_LNK', 'Kategoriler');
define('USERS_LNK', 'Kullanýcýlar');
define('GROUPS_LNK', 'Gruplar');
define('COMMENTS_LNK', 'Yorumlar');
define('SEARCHNEW_LNK', 'K&uuml;me resimleri ekle');
define('UTIL_LNK', 'Resimleri boyutlandýr');
define('BAN_LNK', 'Kullanýcýlarý yasakla');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Oluþtur veya alb&uuml;mleri iste');
define('MODIFYALB_LNK', 'Alb&uuml;mlerde deðiþiklik yap');
define('MY_PROF_LNK', 'Profilim');

// lang_cat_list
define('CATEGORY', 'Kategori');
define('ALBUMS', 'Alb&uuml;mler');
define('PICTURES', 'Resimler');

// lang_album_list
define('ALBUM_ON_PAGE', '%d alb&uuml;m&uuml;n&uuml;z %d sayfadadýr');

// lang_thumb_view
define('DATE', 'TARÝH');
define('NAME', 'DOSYA ADI');
define('TITLE', 'BAÞLIK');
define('SORT_DA', 'Tarihi k&uuml;ç&uuml;kten b&uuml;y&uuml;y&uuml;ðe sýrala');
define('SORT_DD', 'Tarihi b&uuml;y&uuml;kten k&uuml;ç&uuml;y&uuml;ðe sýrala');
define('SORT_NA', 'Adý k&uuml;ç&uuml;kten b&uuml;y&uuml;y&uuml;ðe sýrala');
define('SORT_ND', 'Adý b&uuml;y&uuml;kten k&uuml;ç&uuml;y&uuml;ðe sýrala');
define('SORT_TA', 'Baþlýða göre küçükten büyüðe diz');
define('SORT_TD', 'Baþlýða göre büyükten küçüðe diz');
define('PIC_ON_PAGE', '%d resim %d sayfadadýr');
define('USER_ON_PAGE', '%d kullanýcý %d sayfadadýr');
define('SORT_RA', 'Sort by rating ascending');
define('SORT_RD', 'Sort by rating descending');
define('RATING', 'RATING');
define('SORT_TITLE', 'Sort pictures by:');

// lang_img_nav_bar
define('THUMB_TITLE', 'K&uuml;ç&uuml;k resim sayfasýna geri d&ouml;n');
define('PIC_INFO_TITLE', 'Resmi bilgilerine g&ouml;ster/sakla');
define('SLIDESHOW_TITLE', 'G&ouml;steri');
define('SLIDESHOW_DISABLED', 'e-cards are disabled');
define('SLIDESHOW_DISABLED_MSG', '');
define('ECARD_TITLE', 'Bu resimi e-Kart olarak yolla');
define('ECARD_DISABLED', 'e-Kart iptal edilmiþtir');
define('ECARD_DISABLED_MSG', 'e-Kart g&ouml;ndermeye izininiz yok');
define('PREV_TITLE', '&Ouml;nceki resime bak');
define('NEXT_TITLE', 'Bir sonraki resime bak');
define('PIC_POS', 'RESÝM %s/%s');
define('NO_MORE_IMAGES', 'There are no more images in this galley');
define('NO_LESS_IMAGES', 'This is the first image in the gallery');

// lang_rate_pic
define('RATE_THIS_PIC', 'Bu resimi oylayýn ');
define('NO_VOTES', '(Oy yok þimdilik)');
define('RATING', '(Þu anki durum : %s / 5 ile %s oy)');
define('RUBBISH', 'Saçma');
define('POOR', 'Yetersiz');
define('FAIR', 'Orta');
define('GOOD', 'Ýyi');
define('EXCELLENT', 'M&uuml;kemmel');
define('GREAT', 'Harikulade');

// lang_cpg_die
define('INFORMATION', 'Bilgi');
define('ERROR', 'Hata');
define('CRITICAL_ERROR', 'Ciddi hata');
define('FILE', 'Dosya: ');
define('LINE', 'Satýr: ');

// lang_display_thumbnails
define('FILENAME', 'Dosya adý : ');
define('FILESIZE', 'Dosya boyutu : ');
define('DIMENSIONS', 'Boyutlarý : ');
define('DATE_ADDED', 'Eklenme tarihi : ');

// lang_get_pic_data
define('N_COMMENTS', '%s yorum');
define('N_VIEWS', '%s g&ouml;r&uuml;nt&uuml;leme');
define('N_VOTES', '(%s oy)');

// lang_smilies_inc_php
define('EXCLAMATION', '&Uuml;nlem');
define('QUESTION', 'Soru');
define('VERY HAPPY', 'Çok mutlu');
define('SMILE', 'G&uuml;l');
define('SAD', 'Mutsuz');
define('SURPRISED', 'Þaþýrmýþ');
define('SHOCKED', 'Sarsýlmýþ');
define('CONFUSED', 'Confused');
define('COOL', 'S&uuml;per');
define('LAUGHING', 'G&uuml;lerek');
define('MAD', 'Deli');
define('RAZZ', 'Razz');
define('EMBARASSED', 'Utanmýþ');
define('CRYING OR VERY SAD', 'Aðlamak veya çok mutsuz');
define('EVIL OR VERY MAD', 'Bela veya çok deli');
define('TWISTED EVIL', 'Cilveli Bela');
define('ROLLING EYES', 'Yuvarlanan G&ouml;zler');
define('WINK', 'G&ouml;z kýrpma');
define('IDEA', 'Fikir');
define('ARROW', 'Ok');
define('NEUTRAL', 'Tarafsýz');
define('MR. GREEN', 'Bay Yeþil');

// lang_admin_php
define('LV_ADMIN', 'Y&ouml;netici konumu kapatýlýyor...');
define('ENT_ADMIN', 'Y&ouml;netici konumu açýlýyor...');

// lang_albmgr_php
define('ALB_NEED_NAME', 'Alb&uuml;mleri isim vermelisiniz !');
define('CONFIRM_MODIFS', 'Bu deðiþiklikleri uygulamak istediðinizden eminmisiniz ?');
define('NO_CHANGE', 'Herhangi bir deðiþklik yapýlmadý !');
define('NEW_ALBUM', 'Yeni Alb&uuml;m');
define('CONFIRM_DELETE1', 'Bu alb&uuml;m&uuml; silmek istediðinizden emin misiniz ?');
define('CONFIRM_DELETE2', '\\nÝçerdiði b&uuml;t&uuml;n resim ve yorumlar silinecektir !');
define('SELECT_FIRST', '&Ouml;nce bir alb&uuml;m seçin');
define('ALB_MRG', 'Alb&uuml;m Y&ouml;neticisi');
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
define('MANAGE_CAT', 'Kategorileri d&uuml;zenle');
define('CONFIRM_DELETE', 'Bu kategoriyi SÝLMEK istediðinizden eminmisiniz ?');
define('CATEGORY', 'Kategori');
define('OPERATIONS', 'Ýþlemler');
define('MOVE_INTO', 'S&uuml;r&uuml;kle');
define('UPDATE_CREATE', 'Kategori oluþtur/g&uuml;ncelle');
define('PARENT_CAT', 'Ana kategori');
define('CAT_TITLE', 'Kategori baþlýðý');
define('CAT_DESC', 'Kategori açýklamasý');

// lang_config_php
define('TITLE', 'Seçenekler');
define('RESTORE_CFG', 'Ayarlarý sýfýrla');
define('SAVE_CFG', 'Yeni seçenekleri kaydet');
define('NOTES', 'Notlar');
define('INFO', 'Bilgi');
define('UPD_SUCCESS', 'Coppermine seçenekleri g&uuml;ncellendi');
define('RESTORE_SUCCESS', 'Coppermine ayarlarý sýfýrlandý');
define('NAME_A', 'Ad k&uuml;ç&uuml;kten b&uuml;y&uuml;y&uuml;ðe');
define('NAME_D', 'Ad b&uuml;y&uuml;kten k&uuml;ç&uuml;y&uuml;ðe');
define('TITLE_A', 'Baþlýk küçükten büyüðe');
define('TITLE_D', 'Baþlýk büyükten küçüðe');
define('DATE_A', 'Tarih k&uuml;ç&uuml;kten b&uuml;y&uuml;y&uuml;ðe');
define('DATE_D', 'Date b&uuml;y&uuml;kten k&uuml;ç&uuml;y&uuml;ðe');
define('TH_ANY', 'Max Aspect');
define('RATING_A', 'Rating ascending');
define('RATING_D', 'Rating descending');
define('TH_HT', 'Height');
define('TH_WD', 'Width');

// lang_config_data
define('CONFIG_GENSET', 'Genel Seçenekler');
define('GALLERY_NAME', 'Galeri Ýsmi');
define('GALLERY_DESCRIPTION', 'Galeri Açýklamasý');
define('GALLERY_ADMIN_EMAIL', 'Galeri Y&ouml;neticisi e-Posta');
define('ECARDS_MORE_PIC_TARGET', 'Address to nuke folder ie http://www.mysite.tld/html');
define('LANG', 'Dil');
define('CPGTHEME', 'Aray&uuml;z');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'Alb&uuml;m liste g&ouml;r&uuml;nt&uuml;s&uuml;');
define('MAIN_TABLE_WIDTH', 'Ana tablonun geniþliði (piksel veya %)');
define('SUBCAT_LEVEL', 'G&ouml;sterilecek olan kategori d&uuml;zeylerinin sayýsý');
define('ALBUMS_PER_PAGE', 'G&ouml;sterilecek alb&uuml;mlerin sayýsý');
define('ALBUM_LIST_COLS', 'Alb&uuml;m listesi için s&uuml;tun sayýsý');
define('ALB_LIST_THUMB_SIZE', 'K&uuml;ç&uuml;k resimlerin boyutu piksel olarak');
define('MAIN_PAGE_LAYOUT', 'Ana sayfanýn içeriði');
define('FIRST_LEVEL', 'Birinci seviye albümlerin küçük resimlerini kategorilerde göster');
define('THUMB_VIEW_TITLE', 'K&uuml;ç&uuml;k resim g&ouml;r&uuml;nt&uuml;s&uuml;');
define('THUMBCOLS', 'K&uuml;ç&uuml;k resim sayfasýndaki s&uuml;tun sayýsý');
define('THUMBROWS', 'K&uuml;ç&uuml;k resim sayfasýndaki sýra sayýsý');
define('MAX_TABS', 'En çok g&ouml;sterilecek etiket sayýsý');
define('CAPTION_IN_THUMBVIEW', 'Resim manþet baþlýðýný k&uuml;ç&uuml;k resim sayfasýnda g&ouml;ster');
define('DISPLAY_COMMENT_COUNT', 'K&uuml;ç&uuml;k resimlerin altýnda yorum sayýsýný g&ouml;r&uuml;nt&uuml;le');
define('DEFAULT_SORT_ORDER', 'Hazýr ayarlarý kullanarak resimleri sýrala');
define('MIN_VOTES_FOR_RATING', 'Bir resmin \'top-rated\' listesine g&ouml;z&uuml;kebilmesi için almasý gerekn azami oy sayýsý');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'Resim g&ouml;r&uuml;nt&uuml;leme &amp; Yorum seçenekleri');
define('PICTURE_TABLE_WIDTH', 'Resimlerin g&ouml;sterileceði tablonun geniþliði (piksel veya %)');
define('DISPLAY_PIC_INFO', 'Resim bilgilerine g&ouml;ster');
define('FILTER_BAD_WORDS', 'K&uuml;f&uuml;rleri yorumlarda filtrele');
define('ENABLE_SMILIES', 'Yorumlar da smiley kullanýmýna izin ver');
define('DISABLE_FLOOD_PROTECTION', 'Allow several consecutive comments on one pic from the same user');
define('COMMENT_EMAIL_NOTIFICATION', 'Email site admin upon comment submission');
define('MAX_IMG_DESC_LENGTH', 'Bir resim açýklmasýnýn maksimum uzunluðu');
define('MAX_COM_WLENGTH', 'Bir kelime içindeki maksimum harf sayýsý');
define('MAX_COM_LINES', 'Bir yorum içindeki maksimum satýr sayýsý');
define('MAX_COM_SIZE', 'Bir yorumun maksimum uzunluðu');
define('DISPLAY_FILM_STRIP', 'Film þeridi göster');
define('MAX_FILM_STRIP_ITEMS', 'Film þeridindeki adet sayýsý');
define('ALLOW_ANON_FULLSIZE', 'Allow viewing of full size pic by anonymous');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', 'Resim ve k&uuml;ç&uuml;k resim seçenekleri');
define('JPEG_QUAL', 'JPEG dosyalarý için kalite ayarý');
define('THUMB_WIDTH', 'Küçük resmin en büyük boyutu <b>*</b>');
define('THUMB_USE', 'Boyut kullan ( geniþlik veya yükseklik veya en büyük görünüþ küçük resimler için ) <b>*</b>');
define('MAKE_INTERMEDIATE', 'Ara resimleri yarat');
define('PICTURE_WIDTH', 'Bir ara resmin maksium geniþliði veya boyu <b>*</b>');
define('MAX_UPL_SIZE', 'Y&uuml;klenecek olan resimler için maksimum boyut (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Y&uuml;klenecek olan resimler için makisum geniþlik veya boy (piksel)');
define('USER_SETTING_TITLE', 'Kullanýcý seçenekleri');
define('ALLOW_USER_REGISTRATION', 'Yeni kullanýcý kaydýna izin ver');
define('REG_REQUIRES_VALID_EMAIL', 'Yeni kullanýcý kaydý için e-Posta onayýna ihtiyaç var');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Ýki kullanýcý ayný e-Posta adresine sahip olmasýna izin ver');
define('ALLOW_PRIVATE_ALBUMS', 'Kullanýcýlarýn kiþisel galerileri olabilir');
define('CUSTOM_FIELDS_TITLE', 'Resim açýklamalarý için &ouml;zel alanlar (eðer kullanýlmayacaksa boþ býrakýn)');
define('USER_FIELD1_NAME', 'Alan 1 adý');
define('USER_FIELD2_NAME', 'Alan 2 adý');
define('USER_FIELD3_NAME', 'Alan 3 adý');
define('USER_FIELD4_NAME', 'Alan 4 adý');
define('PIC_ADV_SETTING_TITLE', 'Resim ve k&uuml;ç&uuml;k resim geliþmiþ seçenekleri');
define('SHOW_PRIVATE', 'Çýkýþ yapmamýþ kullanýcýya özel resim ikonunu göster');
define('FORBIDEN_FNAME_CHAR', 'Dosya isimlerinde karakterlere izin verme');
define('ALLOWED_FILE_EXTENSIONS', 'Y&uuml;klenmiþ olan resimler için kabul edilen uzantýlar');
define('THUMB_METHOD', 'Resimleri boyutlandýrmak için kullanýlan y&ouml;ntem');
define('IMPATH', 'ImageMagick için yol (example /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Kabul edilen resim tipleri (sadece ImageMagick için geçerli)');
define('IM_OPTIONS', 'Komut satýr seçenekleri ImageMagick için');
define('READ_EXIF_DATA', 'EXIF bilgisini oku JPEG dosyalarýnda');
define('READ_ITPC_DATA', 'ITPC bilgisini oku JPEG dosyalarýnda');
define('FULLPATH', 'Alb&uuml;m dizini <b>*</b>');
define('USERPICS', 'Kullanýcý resimleri için dizin <b>*</b>');
define('NORMAL_PFX', 'Ara resimler için &ouml;nek <b>*</b>');
define('THUMB_PFX', 'K&uuml;ç&uuml;k resimler için &ouml;nek <b>*</b>');
define('DEFAULT_DIR_MODE', 'Dizinler için hazýr ayar');
define('DEFAULT_FILE_MODE', 'Resimleri için hazýr ayar');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', 'Cookie &amp; Charset ayarlarý');
define('COOKIE_NAME', 'Program tarafýndan kullanýlan cookielerin adý');
define('COOKIE_PATH', 'Program tarafýndan kullanýlan cookielerin dizin yolu');
define('CHAR_SET', 'Karakter kodlama');
define('MISC_SETTING_TITLE', 'Diðer seçenekler');
define('DEBUG_MODE', 'Hata ç&ouml;z&uuml;mleme seçeneði aç');
define('ADVANCED_DEBUG_MODE', 'Enable advanced debug mode');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) * ile g&ouml;sterilmiþ olan alanlar, resim galerinizde resim bulunuyorsa deðiþtirilmemeli</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Adýnýzý ve bir yorum yazmanýz gerek');
define('COM_ADDED', 'Yorum eklendi');
define('ALB_NEED_TITLE', 'Alb&uuml;m için bir baþlýk vermeniz gerek !');
define('NO_UDP_NEEDED', 'G&uuml;ncellemeye gerek yok.');
define('ALB_UPDATED', 'Alb&uuml;m g&uuml;ncellendi');
define('UNKNOWN_ALBUM', 'Alb&uuml;m yok veya sizin o alb&uuml;m&uuml; deðiþtirmeye izniniz yok');
define('NO_PIC_UPLOADED', 'Hiçbir resim y&uuml;klenmedi !<br /><br />Eðer bir resim seçtiyseniz, ana makinanin resim y&uuml;klemeye izin verdiðinden emin olun...');
define('ERR_MKDIR', '%s dizini yaratýlamadý!');
define('DEST_DIR_RO', '%s dizinine program tarafýndan yazýlamýyor !');
define('ERR_MOVE', '%s ý %s e s&uuml;r&uuml;klemek imkansýz!');
define('ERR_FSIZE_TOO_LARGE', 'Y&uuml;klemeye çalýþtýðýnýz resmin boyutu çok b&uuml;y&uuml;k (izin verilen %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Y&uuml;klemeye çalýþtýðýnýz resmin boyutu çok b&uuml;y&uuml;k (izin verilen %s KB) !');
define('ERR_INVALID_IMG', 'Y&uuml;klemeye çalýþtýðýnýz resim geçersiz bir resim biçimidir !');
define('ALLOWED_IMG_TYPES', 'Sadece %s resim y&uuml;kleyebilirsiniz.');
define('ERR_INSERT_PIC', '\'%s\' resmi alb&uuml;me eklenemiyor ');
define('UPLOAD_SUCCESS', 'Resiminiz baþarý ile y&uuml;klenmiþtir<br /><br />Y&ouml;netici onayýndan sonra yayýnlanacaktýr.');
define('INFO', 'Bilgi');
define('ERR_COMMENT_EMPTY', 'Yorumunuz boþ !');
define('ERR_INVALID_FEXT', 'Sadece bu uzantýlara sahip resimler kabul edilir : <br /><br />%s.');
define('NO_FLOOD', 'Bu resim için son yorumu yollayan zaten sizsiniz<br /><br />Eðer baþka birþey eklemek istiyorsanýz kendi yorumunuzu g&uuml;ncelleyin');
define('REDIRECT_MSG', 'Þu anda y&ouml;nlendiriliyorsunuz.<br /><br /><br />\'CONTINUE\' a basýn eðer sayfa kendiliðinden yenilenmezse');
define('UPL_SUCCESS', 'Resminiz baþarý ile eklenmiþtir');

// lang_delete_php
define('CAPTION', 'Baþlýk');
define('FS_PIC', 'tam boy resim');
define('DEL_SUCCESS', 'baþarý ile silindi');
define('NS_PIC', 'normal boyut resim');
define('ERR_DEL', 'silinemiyor');
define('THUMB_PIC', 'k&uuml;ç&uuml;k resim');
define('COMMENT', 'yorum');
define('IM_IN_ALB', 'alb&uuml;mdeki resim');
define('ALB_DEL_SUCCESS', 'Alb&uuml;m \'%s\' silindi');
define('ALB_MGR', 'Alb&uuml;m Y&ouml;neticisi');
define('ERR_INVALID_DATA', 'Geçersiz veri alýndý \'%s\' da');
define('CREATE_ALB', 'Alb&uuml;m \'%s\' oluþturuluyor');
define('UPDATE_ALB', 'Alb&uuml;m \'%s\' g&uuml;ncelleniyor, \'%s\' baþlýðýdýr ve \'%s\' içeriði ile');
define('DEL_PIC', 'Resimi sil');
define('DEL_ALB', 'Alb&uuml;m&uuml; sil');
define('DEL_USER', 'Kullanýcý sil');
define('ERR_UNKNOWN_USER', 'Seçilen kullanýcý yok !');
define('COMMENT_DELETED', 'Yorum baþarý ile silindi');

// lang_display_image_php
define('CONFIRM_DEL', 'Bu resmi sileceðinizden emin misiniz ? \\nYorumlar da silinecektir.');
define('DEL_PIC', 'BU RESMÝ SÝL');
define('SIZE', '%s x %s piksel');
define('VIEWS', '%s kere');
define('SLIDESHOW', 'G&ouml;steri');
define('STOP_SLIDESHOW', 'G&Ouml;STERÝYÝ DURDUR');
define('VIEW_FS', 'Tam boy resmi g&ouml;rebilmek için týklayýn');

// lang_picinfo
define('TITLE', 'Resim bilgileri');
define('FILENAME', 'Dosya adý');
define('ALBUM NAME', 'Alb&uuml;m adý');
define('RATING', 'Beðenilme (%s oy)');
define('KEYWORDS', 'Anahtar kelime');
define('FILE SIZE', 'Dosya boyutu');
define('DIMENSIONS', 'Boyutlar');
define('DISPLAYED', 'G&ouml;sterilen');
define('CAMERA', 'Kamera');
define('DATE TAKEN', 'Alýnan tarih');
define('APERTURE', 'Fotoðraf makinesi açýklýðý');
define('EXPOSURE TIME', 'Ýfþa zamaný');
define('FOCAL LENGTH', 'Merkez uzunluðu');
define('COMMENT', 'Yorum');
define('ADDFAV', 'Sýk Kullanýlana ekle');
define('ADDFAVPHRASE', 'Sýk Kullanýlanlar');
define('REMFAV', 'Sýk Kullanýlanlarda çýkar');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', 'TAMAM');
define('EDIT_TITLE', 'Bu yorumu g&uuml;ncelle');
define('CONFIRM_DELETE', 'Bu yorumu silmek istediðinizden emin misiniz ?');
define('ADD_YOUR_COMMENT', 'Yorumunuzu ekleyin');
define('NAME', 'Ýsim');
define('COMMENT', 'Yorum');
define('YOUR_NAME', 'Anonim');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Bu pencereyi kapatmak için resime klikleyin');

// lang_ecard_php
define('TITLE', 'Bir e-Kart yollayýn');
define('INVALID_EMAIL', '<b>Dikkat</b> : yanlýþ e-Posta adresi !');
define('ECARD_TITLE', 'Size %s tarafýndan bir e-Kart g&ouml;nderilmiþtir');
define('VIEW_ECARD', 'Eðer e-Kartýnýzý doðru g&ouml;r&uuml;nt&uuml;leyemiyorsanýz buraya týklayýn');
define('VIEW_MORE_PICS', 'Daha fazla resim g&ouml;rebilmek için bu baðlantýya týklayýn !');
define('SEND_SUCCESS', 'e-Kartýnýz g&ouml;nderilmiþtir');
define('SEND_FAILED', 'Ana makina e-Kartýnýzý g&ouml;nderemiyor');
define('FROM', 'Kimden');
define('YOUR_NAME', 'Sizin adýnýz');
define('YOUR_EMAIL', 'Sizin e-Posta adresiniz');
define('TO', 'Kime');
define('RCPT_NAME', 'Alýcýnýn Ýsmi');
define('RCPT_EMAIL', 'Alýcýnýn e-Posta adresi');
define('GREETINGS', 'Selamlar');
define('MESSAGE', 'Ýleti');

// lang_editpics_php
define('PIC_INFO', 'Resim bilgileri');
define('ALBUM', 'Alb&uuml;m');
define('TITLE', 'Baþlýk');
define('DESC', 'Açýklama');
define('KEYWORDS', 'Anahta kelimeler');
define('PIC_INFO_STR', '%sx%s - %sKB - %s g&ouml;r&uuml;nt&uuml;leme - %s oy');
define('APPROVE', 'Resimi onayla');
define('POSTPONE_APP', 'Onaylamayý ertele');
define('DEL_PIC', 'Resimi sil');
define('RESET_VIEW_COUNT', 'G&ouml;r&uuml;nt&uuml;leme sayacýný sýfýrla');
define('RESET_VOTES', 'Oylamalarý sýfýrla');
define('DEL_COMM', 'Yorumlarý sil');
define('UPL_APPROVAL', 'Y&uuml;klemeyi onayla');
define('EDIT_PICS', 'Resimlerde deðiþiklik yap');
define('SEE_NEXT', 'Sonraki resimleri g&ouml;r');
define('SEE_PREV', '&Ouml;nceki resimleri g&ouml;r');
define('N_PIC', '%s resim');
define('N_OF_PIC_TO_DISP', 'G&ouml;sterilecek olan resim sayýsý');
define('APPLY', 'Deðiþiklikleri uygula');

// lang_groupmgr_php
define('GROUP_NAME', 'Grup adý');
define('DISK_QUOTA', 'Disk kotasý');
define('CAN_RATE', 'Resimleri oylayabilir');
define('CAN_SEND_ECARDS', 'e-Kart g&ouml;nderebilir');
define('CAN_POST_COM', 'Yorum yazabilir');
define('CAN_UPLOAD', 'Resim y&uuml;kleyebilir');
define('CAN_HAVE_GALLERY', 'Kiþisel galeri yapabilir');
define('APPLY', 'Deðiþiklikleri uygula');
define('CREATE_NEW_GROUP', 'Yeni grup yarat');
define('DEL_GROUPS', 'Seçilmiþ olan grup(larý) sil');
define('CONFIRM_DEL', 'Dikkat ! Eðer bu grubu silerseniz, gruptaki b&uuml;t&uuml;n kullanýcýlar \'Registered\' grubuna transfer edilecektir !\\n\\nDevam etmek istiyormusunuz ?');
define('TITLE', 'Kullanýcý gruplarýný d&uuml;zenle');
define('APPROVAL_1', 'Herkese açýk y&uuml;kleme onayý (1)');
define('APPROVAL_2', 'Kiþisel y&uuml;kleme onayý (2)');
define('NOTE1', '<b>(1)</b> Kiþisel galeriye y&uuml;klenecek olan resimler y&ouml;netici tarafýndan onaylanmalý');
define('NOTE2', '<b>(2)</b> Kullanýcýya ait galeriye y&uuml;kleme yapmak için y&ouml;netici onayýna gerek');
define('NOTES', 'Notlar');

// lang_index_php
define('WELCOME', 'Hoþgeldiniz !');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Bu alb&uuml;m&uuml; silmek istediðinizden emin misiniz ? \\nB&uuml;t&uuml;n resimler ve yorumlar da silinecektir.');
define('DELETE', 'SÝL');
define('MODIFY', '&Ouml;ZELLÝKLER');
define('EDIT_PICS', 'RESÝMLERDE DEÐÝÞÝÝKLÝLK YAP');

// lang_list_categories
define('HOME', 'Ana');
define('STAT1', '<b>[pictures]</b> resimler <b>[albums]</b> alb&uuml;mde ve <b>[cat]</b> kategoride, <b>[comments]</b> yorum <b>[views]</b> kere g&ouml;r&uuml;nt&uuml;lenmiþtir');
define('STAT2', '<b>[pictures]</b> resim <b>[albums]</b> alb&uuml;mde <b>[views]</b> kere g&ouml;r&uuml;nt&uuml;lenmiþtir');
define('XX_S_GALLERY', '%s\\ in Galerisi');
define('STAT3', '<b>[pictures]</b> resim <b>[albums]</b> alb&uuml;mde <b>[comments]</b> yorum <b>[views]</b> kere g&ouml;r&uuml;nt&uuml;lenmiþtir');

// lang_list_users
define('USER_LIST', 'Kullanýcý listesi');
define('NO_USER_GAL', 'Alb&uuml;m yaratma izni olan hiçbir kullanýcý yok');
define('N_ALBUMS', '%s alb&uuml;m');
define('N_PICS', '%s resim');

// lang_list_albums
define('N_PICTURES', '%s resim');
define('LAST_ADDED', ', sonuncusu %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Alb&uuml;m&uuml; g&uuml;ncelle %s');
define('GENERAL_SETTINGS', 'Genel seçenekler');
define('ALB_TITLE', 'Alb&uuml;m baþlýðý');
define('ALB_CAT', 'Alb&uuml;m kategorisi');
define('ALB_DESC', 'Alb&uuml;m açýklamasý');
define('ALB_THUMB', 'Alb&uuml;m k&uuml;ç&uuml;k resimler');
define('ALB_PERM', 'Bu alb&uuml;m için izinler');
define('CAN_VIEW', 'Alb&uuml;m kimler tarafýndan g&ouml;r&uuml;nt&uuml;lenebilir');
define('CAN_UPLOAD', 'Ziyaretçiler resim y&uuml;kleyebilir');
define('CAN_POST_COMMENTS', 'Ziyaretçiler yorum yollayabilir');
define('CAN_RATE', 'Ziyaretçiler resim oylayabilir');
define('USER_GAL', 'Kullanýcý galerisi');
define('NO_CAT', '* Kategori yok *');
define('ALB_EMPTY', 'Alb&uuml;m boþ');
define('LAST_UPLOADED', 'Son y&uuml;klenen');
define('PUBLIC_ALB', 'Herkes (açýk alb&uuml;m)');
define('ME_ONLY', 'Sadece ben');
define('OWNER_ONLY', 'Alb&uuml;m sahibi (%s) sadece');
define('GROUPP_ONLY', '\'%s\' grubunun &uuml;yesi');
define('ERR_NO_ALB_TO_MODIFY', 'G&uuml;ncelleme yapabileceðiniz bir alb&uuml;m yok veritabanýnda.');
define('UPDATE', 'Alb&uuml;m&uuml; g&uuml;ncelle');

// lang_rate_pic_php
define('ALREADY_RATED', 'Bu resimi &ouml;nceden oyladýnýz');
define('RATE_OK', 'Oyunuz kabul edildi');

// lang_register_disclamer
define('REGISTER_DISCLAMER', '{SITE_NAME} y&ouml;neticileri herhangi nahoþ malzemeleri en kýsa s&uuml;rede ortadan kaldýracaktýr, her iletiyi okumak imkansýzdýr. B&ouml;ylelikle g&ouml;nderilen b&uuml;t&uuml;n iletilerin y&ouml;neticilerin veya site sahibinin g&ouml;r&uuml;þlerini deðil, yazarýnýn g&ouml;r&uuml;þlerini yansýttýðýný kabul etmiþ oluyorsunuz (y&ouml;neticiler tarafýndan g&ouml;ndeirlenler hariç) bu nedenle y&ouml;neticiler veya site sahibi sorumlu tutulamaz. .<br />
<br />
B&ouml;ylelikle herhangi s&ouml;vg&uuml; dolu, m&uuml;stehcen, kaba, karalayýcý, nefret dolu, tehdit edici, cinsel içerikli ve uygulanabilir yasalarý çiðneyecek içerikli ileti yollamamayý kabul etmiþ oluyorsunuz. {SITE_NAME} in site sahibinin, y&ouml;neticilerinin ve moderat&ouml;rlerin uygun g&ouml;rd&uuml;kleri takdirde, içerikleri silebilme veya bunlarda deðiþiklikler yapabilme haklarýna her içerik için her zaman sahip olduklarýný da kabul etmiþ oluyorsunuz. Bir kullanýcý olarak veritabanýna eklenmiþ olan herhangi bir bilgiyi de kabul etmiþ oluyorsunuz. Bu bilgi sizin izniniz olmadan hiç birþekilde &uuml;ç&uuml;nç&uuml; kiþilere ulaþtýrýlmayacaktýr, fakat site sahibi ve y&ouml;neticileri hacklenme sonucu bu verilen kaybolmasý ve/veya kullanýlmasý sonucu ve/veya çalýnmasý durumunda sorumlu tutulamaz..<br />
<br />
Bu site bilgisayarýnýzda bilgi kaydetmek amacýyla cookie\'ler kullanýyor. Bu cookie\'ler sadece sizin g&ouml;r&uuml;nt&uuml;leme zevkinizi geliþtirmek amacýyla kullanýlýr. E-Posta adresiniz sadece kaydolma bilgilerinizi ve þifrenizi onaylama amacý ile kullanýlýr.<br />
<br />
\'Kabul Ediyorum\' a basarak bu koþullara baðlý kalmayý kabul etmiþ oluyorsunuz.');

// lang_register_php
define('PAGE_TITLE', 'Kullanýcý kaydý');
define('TERM_COND', 'Þartlar ve durumlar');
define('I_AGREE', 'Kabul Ediyorum');
define('SUBMIT', 'Kaydý G&ouml;nder');
define('ERR_USER_EXISTS', 'Yazdýðýnýz kullanýcý adý kullanýlmaktadýr, baþka bir kullanýcý adý deneyin');
define('ERR_PASSWORD_MISMATCH', 'Yazdýðýnýz þifreler tutmuyor l&uuml;tfen þifreleriniz tekrar girin');
define('ERR_UNAME_SHORT', 'Kullanýcý adý en az 2 karakterden oluþmalý');
define('ERR_PASSWORD_SHORT', 'Þifre en az 2 karakterden oluþmalý');
define('ERR_UNAME_PASS_DIFF', 'Kullanýcý adý ve þifre farklý olmalý');
define('ERR_INVALID_EMAIL', 'E-Posta adresi geçersizdir');
define('ERR_DUPLICATE_EMAIL', 'Baþka bir kullanýcý bu E-Posta adresini kullanarak kaydolmuþtur');
define('ENTER_INFO', 'Bilgilerinizi girin');
define('REQUIRED_INFO', 'Gerekli bilgiler');
define('OPTIONAL_INFO', 'Seçimlik bilgiler');
define('USERNAME', 'Kullanýcý Adý');
define('PASSWORD', 'Þifre');
define('PASSWORD_AGAIN', 'Þifrenizi yeniden girin');
define('EMAIL', 'E-Posta');
define('LOCATION', 'Konum');
define('INTERESTS', 'Ýlgi alanlarý');
define('WEBSITE', 'Kiþisel Sayfa');
define('OCCUPATION', 'Meslek');
define('ERROR', 'HATA');
define('CONFIRM_EMAIL_SUBJECT', '%s - Kayýt onayý');
define('INFORMATION', 'Bilgi');
define('FAILED_SENDING_EMAIL', 'Kayýt onayý e-Postasý yollanamýyor !');
define('THANK_YOU', 'Kaydolduðunuz için teþekk&uuml;r ederiz.<br /><br />Hesabýnýzý nasýl etkinleþtireceðinizi yazan bir E-Posta adersinize yollanmýþtýr.');
define('ACCT_CREATED', 'Hesabýnýz oluþturulmuþtur, þimdi kullanýcý adýnýzý ve þifrenizi kullanarak giriþ yapabilirsiniz');
define('ACCT_ACTIVE', 'Hesabýnýz etkinleþtirildi, þimdi sisteme giriþ yapabilirsiniz');
define('ACCT_ALREADY_ACT', 'Bu hesap zaten etkin !');
define('ACCT_ACT_FAILED', 'Bu hesab etkinleþtirilemiyor !');
define('ERR_UNK_USER', 'Seçilen kullanýcý yok !');
define('X_S_PROFILE', '%s\'in profili');
define('GROUP', 'Grup');
define('REG_DATE', 'Katýlma tarihi');
define('DISK_USAGE', 'Disk kullanýmý');
define('CHANGE_PASS', 'Þifremi deðiþtir');
define('CURRENT_PASS', 'Þu anki þifre');
define('NEW_PASS', 'Yeni þifre');
define('NEW_PASS_AGAIN', 'Yeni þifre yeniden');
define('ERR_CURR_PASS', 'Þu anki þifre yanlýþ');
define('APPLY_MODIF', 'Deðiþiklikleri uygula');
define('UPDATE_SUCCESS', 'Profiliniz g&uuml;ncelleþtirildi');
define('PASS_CHG_SUCCESS', 'Þifreniz deðiþtirildi');
define('PASS_CHG_ERROR', 'Þifreniz deðiþtirildi');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', '{SITE_NAME} de kaydolduðunuz için teþekk&uuml;r ederiz

Kullanýcý adýnýz : "{USER_NAME}"
Þifreniz : "{PASSWORD}"

Hesabýnýzý etkinleþtirebilmek için aþaðýdaki baðlantýya týklayýn
Veya taraycýnýzýn adres çubuðuna kopyalayýn

{ACT_LINK}

Sayfýlarýmýzla,

{SITE_NAME} y&ouml;neticileri
');

// lang_reviewcom_php
define('TITLE', 'Eleþtiri yorumlarý');
define('NO_COMMENT', 'Eleþtirilecek yorum yok');
define('N_COMM_DEL', '%s yorum silindi');
define('N_COMM_DISP', 'G&ouml;sterilecek yorum sayýsý');
define('SEE_PREV', '&Ouml;ncekini g&ouml;r');
define('SEE_NEXT', 'Sonrakini g&ouml;re');
define('DEL_COMM', 'Seçilmiþ yorumlarý sil');

// lang_search_php
define('SEARCH', 'Resim arþivinde ara');

// lang_search_new_php
define('PAGE_TITLE', 'Yeni resimler ara');
define('SELECT_DIR', 'Dizin seç');
define('SELECT_DIR_MSG', 'Bu fonksiyon size FTP ile y&uuml;kledðiniz bir grup resmi eklemenizi saðlar.<br /><br />Y&uuml;klediðiniz resimlerin dizinini seçin');
define('NO_PIC_TO_ADD', 'Eklenecek resim yok');
define('NEED_ONE_ALBUM', 'Bu fonksiyonu kullanabilmek için en az bir alb&uuml;me ihtiyacýnýz var');
define('WARNING', 'Dikkat');
define('CHANGE_PERM', 'Program bu dizine yazamýyor, yazabilmek için CHMOD unu 755 veya 777 yapmanýz gerekiyor resimleri y&uuml;klemeden &ouml;nce !');
define('TARGET_ALBUM', '<b>Resimlerini &quot;</b>%s<b>&quot; e g&ouml;nder </b>%s');
define('FOLDER', 'Klas&ouml;r');
define('IMAGE', 'Resim');
define('ALBUM', 'Alb&uuml;m');
define('RESULT', 'Sonuç');
define('DIR_RO', 'Yazýlamaz. ');
define('DIR_CANT_READ', 'Okunamaz. ');
define('INSERT', 'Galeriye yeni resim ekle');
define('LIST_NEW_PIC', 'Yeni resimlerin listesi');
define('INSERT_SELECTED', 'Seçilmiþ resimleri ekle');
define('NO_PIC_FOUND', 'Yeni resim bulunamadý');
define('BE_PATIENT', 'L&uuml;tfen bekleyiniz, program iþleminiz yapmaktadýr');
define('NOTES', '<ul><li><b>OK</b> : Resminiz baþarý ile eklenmiþtir.<li><b>DP</b> : Resim bir kopya, baþka bir kopyasý veritabanýnda bulunmaktadýr<li><b>PB</b> : Resim y&uuml;klenemedi, resimlerin bulunduðu dizinlerin doðru ayarlanmýþ olduðundan emin olun<li>Eðer OK, DP, PB \'signs\' iþaretlerinden biri çýkmýyorsa, kýrýk resmin &uuml;zerine týklayýn PHP hata iletisini g&ouml;rebilmek için<li>Eðer sunucu zaman baðlantý hatasý olursa, yenile tuþuna basýn</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('TITLE', 'Resim y&uuml;kleme');
define('MAX_FSIZE', 'En fazla izin verilen boyut %s KB');
define('ALBUM', 'Alb&uuml;m');
define('PICTURE', 'Resim');
define('PIC_TITLE', 'Resim Baþlýðý');
define('DESCRIPTION', 'Resim açýklamasý');
define('KEYWORDS', 'Anahat kelimeler (her anahtar kelimesi arasýnda boþluk býrakýn)');
define('ERR_NO_ALB_UPLOADABLES', 'Y&uuml;kleyebileceðiniz herhangi bir alb&uuml;m&uuml;n&uuml;z yok');

// lang_usermgr_php
define('TITLE', 'Kullanýcýlar d&uuml;zenle');
define('NAME_A', 'Ýsimler k&uuml;ç&uuml;kten b&uuml;y&uuml;ðe sýrala ');
define('NAME_D', 'Ýsimler b&uuml;y&uuml;ktan k&uuml;ç&uuml;ðe sýrala');
define('GROUP_A', 'Gruplarý k&uuml;ç&uuml;kten b&uuml;y&uuml;ðe sýrala');
define('GROUP_D', 'Gruplarý b&uuml;y&uuml;ktan k&uuml;ç&uuml;ðe sýrala');
define('REG_A', 'Kayýt olma tarihi k&uuml;ç&uuml;kten b&uuml;y&uuml;ðe sýrala');
define('REG_D', 'Kayýt olma tarihi b&uuml;y&uuml;ktan k&uuml;ç&uuml;ðe sýrala');
define('PIC_A', 'Resim sayma k&uuml;ç&uuml;kten b&uuml;ð&uuml;ðe');
define('PIC_D', 'Resim sayma b&uuml;y&uuml;kten k&uuml;ç&uuml;ðe');
define('DISKU_A', 'Disk kullanýmý k&uuml;ç&uuml;kten b&uuml;y&uuml;ðe');
define('DISKU_D', 'Disk kullanýmý b&uuml;y&uuml;kten k&uuml;ç&uuml;ðe');
define('SORT_BY', 'Kullanýcýlarý g&ouml;re sýrala');
define('ERR_NO_USERS', 'Kullanýcý tablosu boþ !');
define('ERR_EDIT_SELF', 'Kendi profilinizi d&uuml;zenleyemezsiniz, bunun için \'My profile\' baðlantýsýný kullanýn');
define('EDIT', 'D&Uuml;ZENLE');
define('DELETE', 'SÝL');
define('NAME', 'Kullanýcý ad');
define('GROUP', 'Grup');
define('INACTIVE', 'Pasif');
define('OPERATIONS', 'Ýþlemler');
define('PICTURES', 'Resimler');
define('DISK_SPACE', 'Kullanýlan alan / kota');
define('REGISTERED_ON', 'Kayýt olma tarihi');
define('U_USER_ON_P_PAGES', '%d kullanýcý %d sayfada');
define('CONFIRM_DEL', 'Bu kullanýcýy SÝLMEK istediðinizden emin misiniz ? \\nB&uuml;t&uuml;n resim ve alb&uuml;mleri silinecektir.');
define('MAIL', 'POSTA');
define('ERR_UNKNOWN_USER', 'Seçilen kullanýcý yok !');
define('MODIFY_USER', 'Kullanýcýy D&uuml;zenle');
define('NOTES', 'Notlar');
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
define('TITLE', 'Resimleri boyutlandýr');
define('WHAT_IT_DOES', 'Ne yapar');
define('WHAT_UPDATE_TITLES', 'Dosya Adýndan baþlýklarý günceller');
define('WHAT_DELETE_TITLE', 'Baþlýklarý Siler');
define('WHAT_REBUILD', 'Küçük resimleri ve boyutlandýrýlmýþ resimleri yeniden yapýlandýrýr');
define('WHAT_DELETE_ORIGINALS', 'Gerçek boyuttaki resimleri siler ve onlarý boyutlandýrýlmýþla deðiþtirir');
define('FILE', 'Dosya');
define('TITLE_SET_TO', 'baþlýk ayarlanmýþ');
define('SUBMIT_FORM', 'ilet');
define('UPDATED_SUCCESFULLY', 'güncelleme baþarýlý');
define('ERROR_CREATE', 'yaratýrken HATA');
define('CONTINUE', 'Daha fazla resim iþle');
define('MAIN_SUCCESS', ' %s dosyasý baþarýlý bir þekilde ana resim olarak kullanýldý');
define('ERROR_RENAME', ' %s ye %s yeniden adlandýrýken hata oluþtu');
define('ERROR_NOT_FOUND', ' %s dosyasý bulunamadý');
define('BACK', 'anasyafa geri dön');
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
define('UPDATE', 'Küçük resimleri ve/veya boyutlandýrýlmýþ resimleri güncelle');
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
define('DELETE', 'Resim baþlýklarýný veya gerçek boyut resimlerini sil');
define('DELETE_TITLE', 'Resim baþlýklarýný sil');
define('DELETE_ORIGINAL', 'Gerçek boy resimleri sil');
define('DELETE_REPLACE', 'Asýl resimleri sil ve bunlarý boyutlandýrýlmýþlarla deðiþtir');
define('SELECT_ALBUM', 'Albüm seç');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Photo Gallery');
?>