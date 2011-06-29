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
/*   $Id: lang-indonesian.php,v 1.1 2004/07/28 23:09:10 akamu Exp $              */
/*****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'Indonesian');
define('LANG_NAME_NATIVE', 'Bahasa Indonesia');
define('LANG_COUNTRY_CODE', 'id');
define('TRANS_NAME', 'sengsara');
define('TRANS_EMAIL', 'sengsara@batamweb.net');
define('TRANS_WEBSITE', 'http://batamweb.net/');
define('TRANS_DATE', '2003-11-04');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'iso-8859-1');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'Ya');
define('NO', 'Tidak');

// some common strings
define('BACK', 'KEMBALI');
define('CONTINUE', 'LANJUT');
define('INFO', 'Informasi');
define('ERROR', 'Error');

//// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
define('ALBUM_DATE_FMT', '%d %B %Y');
define('LASTCOM_DATE_FMT', '%d/%m/%y %H:%M');
define('LASTUP_DATE_FMT', '%d %B %Y');
define('REGISTER_DATE_FMT', '%d %B %Y');
define('LASTHIT_DATE_FMT', '%d %B %Y %I:%M %p');
define('COMMENT_DATE_FMT', '%d %B %Y %I:%M %p');

// short names for Byte, Kilo, Mega
$lang_byte_units = array('Byte','KB','MB',);

// Day of week
$lang_day_of_week = array('Ming','Sen','Sel','Rab','Kam','Jum','Sab',);
// Day of the month
$lang_month = array('Jan','Peb','Mar','Apr','Mei','Jun','Jul','Agt','Sep','Okt','Nop','Des',);
// For the word censor
$lang_bad_words = array('*fuck*','asshole','assramer','bitch*','c0ck','clits','Cock','cum','cunt*','dago','daygo','dego','dick*','dildo','fanculo','feces','foreskin','Fu\(*','fuk*','honkey','hore','injun','kike','lesbo','masturbat*','motherfucker','nazis','nigger*','nutsack','penis','phuck','poop','pussy','scrotum','shit','slut','titties','titty','twaty','wank*','whore','wop*',);
// lang_meta_album_names
define('RANDOM', 'Foto Acak');
define('LASTUP', 'Kiriman Terakhir');
define('LASTUPBY', 'My Last Additions');
define('LASTALB', 'Album Terakhir Diupdate ');
define('LASTCOM', 'Komentar Terakhir');
define('LASTCOMBY', 'My Last comments');
define('TOPN', 'Terbanyak Dilihat');
define('TOPRATED', 'Nilai Tertingi');
define('LASTHITS', 'Terakhir Dilihat');
define('SEARCH', 'Hasil Pencarian');
define('FAVPICS', 'Foto Favorit');

// lang_errors
define('ACCESS_DENIED', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
define('PERM_DENIED', 'Anda tidak memiliki izin untuk melakukan ini.');
define('PARAM_MISSING', 'Skrip dijalankan dengan parameter yang tidak lengkap.');
define('NON_EXIST_AP', 'Foto/Album yang dimaksud tidak ditemukan !');
define('QUOTA_EXCEEDED', 'Kuota disk terlampaui<br /><br />Anda memiliki kuota ruangan sebesar [quota]K, foto-foto anda telah menggunakan ruangan sebanyak [space]K, menambahkan foto ini akan menyebabkan anda melampaui kuota.');
define('GD_FILE_TYPE_ERR', 'Jika menggunakan GD library tipe image yang dibolehkan hanya JPEG dan PNG.');
define('INVALID_IMAGE', 'Image yang anda upload rusak atau tidak bisa ditangani oleh GD library');
define('RESIZE_FAILED', 'Gagal membuat thumbnail atau memperkecil image.');
define('NO_IMG_TO_DISPLAY', 'Tidak ada image untuk ditampilkan');
define('NON_EXIST_CAT', 'Kategori yang dimaksud tidak ditemukan');
define('ORPHAN_CAT', 'Kategori memiliki induk yang tidak ditemukan, jalankan pengaturan kategori untuk memperbaiki masalah ini.');
define('DIRECTORY_RO', 'Direktori \'%s\' tidak bissa ditulisi, foto tidak bisa dihapus');
define('NON_EXIST_COMMENT', 'Komentar yang dinaksud tidak ditemukan.');
define('PIC_IN_INVALID_ALBUM', 'Foto berada dalam album yang tidak ditemukan (%s)!?');
define('BANNED', 'Anda telah di-banned dari situs ini.');
define('NOT_WITH_UDB', 'Fungsi ini tidak digunakan lagi dalam Coppermine sebab telah terintegrasi kedalam forum. Mungkin hal yang ingin anda lakukan tidak disupport oleh konfigurasi ini, atau fungsi tersebut seharusnya ditangani oleh software forum.');
define('MEMBERS_ONLY', 'Fungsi hanya untuk member, silahkan daftar dahulu.');
define('MUSTBE_GOD', 'Fungsi ini hanya untuk admin situs. Anda harus login sebagai superadmin (god), agar bisa mempergunakan fungsi ini');

// lang_main_menu
define('ALB_LIST_TITLE', 'Lihat daftar album');
define('ALB_LIST_LNK', 'Daftar Album');
define('MY_GAL_TITLE', 'Lihat galeri pribadi saya');
define('MY_GAL_LNK', 'Galeriku');
define('MY_PROF_LNK', 'Profilku');
define('MY_PROF_TITLE','Check your disk quota and groups');
define('ADM_MODE_TITLE', 'Pindah ke mode admin');
define('ADM_MODE_LNK', 'Mode Admin');
define('USR_MODE_TITLE', 'Pindah ke mode user');
define('USR_MODE_LNK', 'Mode user');
define('UPLOAD_PIC_TITLE', 'Upload foto ke dalam album');
define('UPLOAD_PIC_LNK', 'Upload Foto');
define('REGISTER_TITLE', 'Buat acount baru');
define('REGISTER_LNK', 'Register');
define('LOGIN_LNK', 'Login');
define('LOGOUT_LNK', 'Logout');
define('LASTUP_LNK', 'Upload Terakhir');
define('LASTUP_TITLE', 'Recently uploaded pictures');
define('LASTCOM_TITLE',  'Pictures in order of last commented on');
define('LASTCOM_LNK',  'Komentar Terakhir');
define('TOPN_TITLE', 'Pictures that have been seen most');
define('TOPN_LNK', 'Terbanyak Dilihat');
define('TOPRATED_TITLE', 'Top rated pictures');
define('TOPRATED_LNK',  'Nilai Tertinggi');
define('SEARCH_LNK', 'Pencarian');
define('FAV_LNK', 'Favoritku');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu

define('UPL_APP_LNK', 'Persetujuan upload');
define('CONFIG_LNK', 'Konfig.');
define('ALBUMS_LNK', 'Album');
define('CATEGORIES_LNK', 'Kategori');
define('USERS_LNK', 'User');
define('GROUPS_LNK', 'Grup');
define('COMMENTS_LNK', 'Komentar');
define('SEARCHNEW_LNK', 'Tambahkan foto (batch)');
define('UTIL_LNK', 'Ubah ukuran foto');
define('BAN_LNK', 'Ban User');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Buat / urutkan album');
define('MODIFYALB_LNK', 'Modifikasi album');
define('MY_PROF_LNK', 'Profil');

// lang_cat_list
define('CATEGORY', 'Kategori');
define('ALBUMS', 'Album');
define('PICTURES', 'Foto');

// lang_album_list
define('ALBUM_ON_PAGE', '%d album pada %d halaman');

// lang_thumb_view
define('DATE', 'TANGGAL');
define('NAME', 'NAMA FILE');
define('TITLE', 'JUDUL');
define('SORT_DA', 'Urutkan mendaki menurut tanggal');
define('SORT_DD', 'Urutkan menurun menurut tanggal');
define('SORT_NA', 'Urutkan mendaki menurut nama');
define('SORT_ND', 'Urutkan menurun menurut nama');
define('SORT_TA', 'Urutkan mendaki menurut judul');
define('SORT_TD', 'Urutkan menurun menurut judul');
define('PIC_ON_PAGE', '%d foto pada %d halaman');
define('USER_ON_PAGE', '%d user pada %d halaman');
define('SORT_RA', 'Urutkan mendaki menurut nilai');
define('SORT_RD', 'Urutkan menurun menurut nilai');
define('RATING', 'NILAI');
define('SORT_TITLE', 'Urutkan foto menurut:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Kembali ke halaman thumbnail');
define('PIC_INFO_TITLE', 'Tampilkan/sembunyikan informasi foto');
define('SLIDESHOW_TITLE', 'Slideshow');
define('SLIDESHOW_DISABLED', 'e-card non-aktif');
define('SLIDESHOW_DISABLED_MSG', 'Fungsi hanya untuk member, silahkan daftar dahulu.');
define('ECARD_TITLE', 'Kirimkan foto ini sebagai e-card');
define('ECARD_DISABLED', 'e-card nonaktif');
define('ECARD_DISABLED_MSG', 'Anda tidak memiliki izin untuk mengirim e-card');
define('PREV_TITLE', 'Lihat foto sebelumnya');
define('NEXT_TITLE', 'Lihat foto selanjutnya');
define('PIC_POS', 'Foto %s/%s');
define('NO_MORE_IMAGES', 'Tidak ada image selanjutnya dalam galeri ini');
define('NO_LESS_IMAGES', 'Ini adalah image pertama dalam galeri ini');

// lang_rate_pic
define('RATE_THIS_PIC', 'Beri nilai foto ini ');
define('NO_VOTES', '(Belum dinilai)');
define('RATING', '(nilai sekarang : %s / 5 dengan %s suara)');
define('RUBBISH', 'Sampah');
define('POOR', 'Jelek');
define('FAIR', 'Lumayan');
define('GOOD', 'Bagus');
define('EXCELLENT', 'Bagus sekali');
define('GREAT', 'Hebat');

// lang_cpg_die
define('INFORMATION', 'Informasi');
define('ERROR', 'Error');
define('CRITICAL_ERROR', 'Critical error');
define('FILE', 'File: ');
define('LINE', 'Baris: ');

// lang_display_thumbnails
define('FILENAME', 'Nama file : ');
define('FILESIZE', 'Besar file : ');
define('DIMENSIONS', 'Dimensi : ');
define('DATE_ADDED', 'Tanggal upload : ');

// lang_get_pic_data
define('N_COMMENTS', '%s komentar');
define('N_VIEWS', '%s dilihat');
define('N_VOTES', '(%s dinilai)');

// lang_smilies_inc_php
define('EXCLAMATION', 'Exclamation');
define('QUESTION', 'Question');
define('VERY HAPPY', 'Very Happy');
define('SMILE', 'Smile');
define('SAD', 'Sad');
define('SURPRISED', 'Surprised');
define('SHOCKED', 'Shocked');
define('CONFUSED', 'Confused');
define('COOL', 'Cool');
define('LAUGHING', 'Laughing');
define('MAD', 'Mad');
define('RAZZ', 'Razz');
define('EMBARASSED', 'Embarrassed');
define('CRYING OR VERY SAD', 'Crying or Very sad');
define('EVIL OR VERY MAD', 'Evil or Very Mad');
define('TWISTED EVIL', 'Twisted Evil');
define('ROLLING EYES', 'Rolling Eyes');
define('WINK', 'Wink');
define('IDEA', 'Idea');
define('ARROW', 'Arrow');
define('NEUTRAL', 'Neutral');
define('MR. GREEN', 'Mr. Green');

// lang_admin_php
define('LV_ADMIN', 'Meninggalkan mode admin...');
define('ENT_ADMIN', 'Memasuki mode admin...');

// lang_albmgr_php
define('ALB_NEED_NAME', 'Album harus diberi nama !');
define('CONFIRM_MODIFS', 'Apa anda yakin mau membuat perubahan ini ?');
define('NO_CHANGE', 'Anda tidak melakukan perubahan !');
define('NEW_ALBUM', 'Album baru');
define('CONFIRM_DELETE1', 'Anda yakin mau menghapus album ini ?');
define('CONFIRM_DELETE2', '\\nSemua foto dan komentar didalamnya akan ikut terhapus !');
define('SELECT_FIRST', 'Pilih album dulu');
define('ALB_MRG', 'Pengaturan Album');
define('MY_GALLERY', '* Galeriku *');
define('NO_CATEGORY', '* Tanpa kategori *');
define('DELETE', 'Hapus');
define('NEW', 'Baru');
define('APPLY_MODIFS', 'Lakukan perubahan');
define('SELECT_CATEGORY', 'Pilih kategori');

// lang_catmgr_php
define('MISS_PARAM', 'Parameter yang dibutuhkan untuk operasi \'%s\' tidak dimasukkan !');
define('UNKNOWN_CAT', 'Kategori yang dimasud tidak ditemukan !');
define('USERGAL_CAT_RO', 'Kategori Galeri User tidak boleh dihapus !');
define('MANAGE_CAT', 'Pengaturan kategori');
define('CONFIRM_DELETE', 'Anda yakin mau meng-HAPUS kategori ini ?');
define('CATEGORY', 'Kategori');
define('OPERATIONS', 'Operasi');
define('MOVE_INTO', 'Pindahkan');
define('UPDATE_CREATE', 'Ubah/Buat kategori');
define('PARENT_CAT', 'Kategori induk');
define('CAT_TITLE', 'Judul kategori');
define('CAT_DESC', 'Keterangan');

// lang_config_php
define('TITLE', 'Konfigurasi');
define('RESTORE_CFG', 'Kembalikan ke default');
define('SAVE_CFG', 'Simpan konfigurasi');
define('NOTES', 'Catatan');
define('INFO', 'Informasi');
define('UPD_SUCCESS', 'Konfigurasi Coppermine telah diupdate');
define('RESTORE_SUCCESS', 'Konfigurasi Coppermine telah dikembalikan ke default');
define('NAME_A', 'Nama mendaki');
define('NAME_D', 'Nama menurun');
define('TITLE_A', 'Judul mendaki');
define('TITLE_D', 'Judul menurun');
define('DATE_A', 'Tanggal mendaki');
define('DATE_D', 'Tanggal menurun');
define('RATING_A', 'Nilai mendaki');
define('RATING_D', 'Nilai menurun');
define('TH_ANY', 'Max Aspect');
define('TH_HT', 'Tinggi');
define('TH_WD', 'Lebar');

// lang_config_data
define('CONFIG_GENSET', 'Setting Umum');
define('GALLERY_NAME', 'Nama Galeri');
define('GALLERY_DESCRIPTION', 'Keterangan');
define('GALLERY_ADMIN_EMAIL', 'Email admin galeri');
define('ECARDS_MORE_PIC_TARGET', 'Address to nuke folder ie http://www.mysite.tld/html/');
define('LANG', 'Bahasa');
define('CPGTHEME', 'Theme');
define('NICE_TITLES', 'Judul Halaman yang spesifik (bukan hanya >Coppermine)');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'Tampilan daftar album');
define('MAIN_TABLE_WIDTH', 'Lebar tabel utama (piksel atau %)');
define('SUBCAT_LEVEL', 'Jumlah level kategori yang ditampilkan');
define('ALBUMS_PER_PAGE', 'Jumlah album yang ditampilkan');
define('ALBUM_LIST_COLS', 'Jumlah kolom di daftar album');
define('ALB_LIST_THUMB_SIZE', 'Ukuran thumbnail dalam piksel');
define('MAIN_PAGE_LAYOUT', 'Tampilan halaman utama');
define('FIRST_LEVEL', 'Tampilkan thumbnail album level pertama dalam kategori');
define('THUMB_VIEW_TITLE', 'Tampilan thumbnail');
define('THUMBCOLS', 'Jumlah kolom di halaman thumbnail');
define('THUMBROWS', 'Jumlah baris di halaman thumbnail');
define('MAX_TABS', 'Jumlah maksimum tampilan tab');
define('CAPTION_IN_THUMBVIEW', 'Tampilkan keterangan foto (sebagai tambahan judul) di bawah thumbnail');
define('DISPLAY_COMMENT_COUNT', 'Tampilkan jumlah komentar di bawah thumbnail');
define('DEFAULT_SORT_ORDER', 'Urutan foto default');
define('MIN_VOTES_FOR_RATING', 'Jumlah suara minimal bagi foto untuk tampil di daftar \'nilai tertinggi\'');
define('SEO_ALTS', 'Tag Alt dan title thumbnail tampilkan judul dan keyword (bukan picinfo)');
define('IMAGE_COMMENT_VIEW_TITLE', 'Tampilan foto &amp; setting komentar');
define('PICTURE_TABLE_WIDTH', 'Lebar table tampilan foto (piksel atau %)');
define('DISPLAY_PIC_INFO', 'Informasi foto secara default tampak');
define('FILTER_BAD_WORDS', 'Saring kata-kata buruk dalam komentar');
define('ENABLE_SMILIES', 'Izinkan smilies dalam komentar');
define('DISABLE_FLOOD_PROTECTION', 'Izinkan lebih dari satu kali komentar secara berturut-turut oleh user');
define('COMMENT_EMAIL_NOTIFICATION', 'Email ke admin situs saat ada kiriman komentar');
define('MAX_IMG_DESC_LENGTH', 'Panjang maksimum keterangan foto');
define('MAX_COM_WLENGTH', 'Jumlah karakter makimum dalam kata');
define('MAX_COM_LINES', 'Jumlah baris maksimum dalam komentar');
define('MAX_COM_SIZE', 'Panjang maksimum komentar');
define('DISPLAY_FILM_STRIP', 'Tampilkan film strip');
define('MAX_FILM_STRIP_ITEMS', 'Jumlah item dalam film strip');
define('ALLOW_ANON_FULLSIZE', 'Izinkan tampilan foto fullsize untuk anonim');
define('KEEP_VOTES_TIME', 'Number of days between being able to vote on the same image');
define('PIC_THUMB_SETTING_TITLE', 'Setting foto dan thumbnail');
define('JPEG_QUAL', 'Kualitas file JPEG');
define('THUMB_WIDTH', 'Dimensi thumbnail maksimum <b>*</b>');
define('THUMB_USE', 'Gunakan dimensi ( lebar atau tinggi atau perbandingan maksimum untuk thumbnail )<b>*</b>');
define('MAKE_INTERMEDIATE', 'Buat foto antara');
define('PICTURE_WIDTH', 'Lebar atau tinggi maksimum foto antara <b>*</b>');
define('MAX_UPL_SIZE', 'Besar maksimum foto yang diupload (KB)');
define('MAX_UPL_WIDTH_HEIGHT', 'Lebar atau tinggi maksimum foto yang diupload (piksel)');
define('USER_SETTING_TITLE', 'Setting user');
define('ALLOW_USER_REGISTRATION', 'Izinkan pendaftaran user baru');
define('REG_REQUIRES_VALID_EMAIL', 'Pendaftaran menggunakan pengesahan melalui email');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Izinkan dua user untuk memiliki alamat email yang sama');
define('ALLOW_PRIVATE_ALBUMS', 'User bisa memiliki album pribadi');
define('CUSTOM_FIELDS_TITLE', 'Field tambahan untuk keterangan image (kosongkan jika tidak digunakan)');
define('USER_FIELD1_NAME', 'Nama field 1');
define('USER_FIELD2_NAME', 'Nama field 2');
define('USER_FIELD3_NAME', 'Nama field 3');
define('USER_FIELD4_NAME', 'Nama field 4');
define('PIC_ADV_SETTING_TITLE', 'Setting tambahan foto dan thumbnail');
define('SHOW_PRIVATE', 'Tampilkan ikon album pribadi untuk user yang tidak login');
define('FORBIDEN_FNAME_CHAR', 'Karakter yang tidak diizinkan dalam nama file');
define('ALLOWED_FILE_EXTENSIONS', 'Ekstensi file yang diizinkan untuk foto yang diupload');
define('THUMB_METHOD', 'Metode pengubah ukuran image');
define('IMPATH', 'Path utiliti \'konversi\' ImageMagick/netpbm (mis. /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Tipe image yang diizinkan (hanya berlaku untuk ImageMagick)');
define('IM_OPTIONS', 'Opsi Command line untuk ImageMagick');
define('READ_EXIF_DATA', 'Baca data EXIF dalam file JPEG');
define('READ_IPTC_DATA', 'Baca data IPTC dalam file JPEG');
define('FULLPATH', 'Direktori album <b>*</b>');
define('USERPICS', 'Direktori foto user <b>*</b>');
define('NORMAL_PFX', 'Prefiks untuk foto antara <b>*</b>');
define('THUMB_PFX', 'Prefiks untuk thumbnail <b>*</b>');
define('DEFAULT_DIR_MODE', 'Mode default untuk direktori');
define('DEFAULT_FILE_MODE', 'Mode default untuk foto');
define('PICINFO_DISPLAY_FILENAME', 'Tampilkan nama file dalam picinfo');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Tampilkan nama album dalam picinfo');
define('PICINFO_DISPLAY_FILE_SIZE', 'Tampilkan ukuran file dalam picinfo');
define('PICINFO_DISPLAY_DIMENSIONS', 'Tampilkan dimensi dalam picinfo');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Tampilkan count dalam picinfo');
define('PICINFO_DISPLAY_URL', 'Tampilkan URL dalam picinfo');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Tampilkan URL sebagai link bookmark dalam picinfo');
define('PICINFO_DISPLAY_FAVORITES', 'Tampilkan link album favorit dalam picinfo');
define('COOKIE_SETTING_TITLE', 'Setting Cookie &amp; Karakter Set ');
define('COOKIE_NAME', 'Nama cookie yang digunakan oleh skrip');
define('COOKIE_PATH', 'Path cookie yang digunakan oleh skrip');
define('CHAR_SET', 'Encoding Karakter');
define('MISC_SETTING_TITLE', 'Setting lain-lain');
define('DEBUG_MODE', 'Aktifkan mode debug');
define('ADVANCED_DEBUG_MODE', 'Aktifkan mode debug canggih');
define('SHOWUPDATE', 'Show Coppermine Update Alert to Admin');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) Field yang ditandai dengan * tidak boleh diubah jika telah ada foto dalam galeri</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Anda harus mengisi nama dan komentar');
define('COM_ADDED', 'Komentar ditambahkan');
define('ALB_NEED_TITLE', 'Anda harus memberi Judul pada album !');
define('NO_UDP_NEEDED', 'Tidak perlu update.');
define('ALB_UPDATED', 'Album diupdate');
define('UNKNOWN_ALBUM', 'Album yang dimaksud tidak ditemukan atau anda tidak memiliki izin untuk mengupload ke dalam album ini');
define('NO_PIC_UPLOADED', 'Tidak ada foto yang diupload !<br /><br />Jika anda yakin telah memilih foto untuk diupload, periksa lagi apakah server mengizinkan upload...');
define('ERR_MKDIR', 'Gagal membuat direktori %s !');
define('DEST_DIR_RO', 'Direktori tujuan %s tidak bisa ditulisi oleh skrip !');
define('ERR_MOVE', 'Gagal memindahkan %s ke %s !');
define('ERR_FSIZE_TOO_LARGE', 'Dimensi foto yang diupload terlalu besar (maksimum yang diizinkan adalah %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Ukuran file yang diupload terlalu besar (maksimum yang diizinkan adalah %s KB) !');
define('ERR_INVALID_IMG', 'File yang diupload bukan berupa image !');
define('ALLOWED_IMG_TYPES', 'Anda hanya bisa mengupload image %s.');
define('ERR_INSERT_PIC', 'Foto \'%s\' tidak bisa dimasukkan kedalam album ');
define('UPLOAD_SUCCESS', 'Foto anda telah berhasil diupload<br /><br />Foto tersebut akan tampil setelah disetujui oleh admin.');
define('INFO', 'Informasi');
define('ERR_COMMENT_EMPTY', 'Komentar anda kosong !');
define('ERR_INVALID_FEXT', 'Hanya file dengan ekstensi berikut yang diterima : <br /><br />%s.');
define('NO_FLOOD', 'Maaf, anda adalah pengirim komentar yang terkhir untuk foto ini<br /><br />Ubahlah komentar yang anda kirimkan jika anda menginginkannya');
define('REDIRECT_MSG', 'Anda sedang diredireksi.<br /><br /><br />Klik \'LANJUT\' jika halam ini tidak refresh secara otomatis');
define('UPL_SUCCESS', 'Foto anda telah berhasil dimasukkan');

// lang_delete_php
define('CAPTION', 'Keterangan');
define('FS_PIC', 'image ukuran penuh');
define('DEL_SUCCESS', 'berhasil dihapus');
define('NS_PIC', 'image ukuran normal');
define('ERR_DEL', 'tidak bisa dihapus');
define('THUMB_PIC', 'thumbnail');
define('COMMENT', 'komentar');
define('IM_IN_ALB', 'image dalam album');
define('ALB_DEL_SUCCESS', 'Album \'%s\' dihapus');
define('ALB_MGR', 'Pengaturan Album');
define('ERR_INVALID_DATA', 'Data invalid diterima dalam \'%s\'');
define('CREATE_ALB', 'Sedang membuat album \'%s\'');
define('UPDATE_ALB', 'Mengupdate album \'%s\' dengan judul \'%s\' dan indeks \'%s\'');
define('DEL_PIC', 'Hapus foto');
define('DEL_ALB', 'Hapus album');
define('DEL_USER', 'Hapus user');
define('ERR_UNKNOWN_USER', 'User yang dimaksud tidak ditemukan !');
define('COMMENT_DELETED', 'Komentar berhasil dihapus');

// lang_display_image_php
define('CONFIRM_DEL', 'Anda yakin mau mengHAPUS foto ini ? \\nKomentar juga akan ikut dihapus.');
define('DEL_PIC', 'HAPUS FOTO INI');
define('SIZE', '%s x %s piksel');
define('VIEWS', '%s kali dilihat');
define('SLIDESHOW', 'Slideshow');
define('STOP_SLIDESHOW', 'HENTIKAN SLIDESHOW');
define('VIEW_FS', 'Klik untuk melihat image ukuran penuh');
define('EDIT_PIC', 'UBAH INFO FOTO');

// lang_picinfo
define('TITLE', 'Informasi foto');
define('FILENAME', 'Nama file');
define('ALBUM NAME', 'Nama Album');
define('RATING', 'Nilai (%s suara)');
define('KEYWORDS', 'Kata Kunci');
define('FILE SIZE', 'Ukuran File');
define('DIMENSIONS', 'Dimensi');
define('DISPLAYED', 'Ditampilkan');
define('CAMERA', 'Kamera');
define('DATE TAKEN', 'Tanggal pengambilan');
define('APERTURE', 'Bukaan');
define('EXPOSURE TIME', 'Waktu bukaan');
define('FOCAL LENGTH', 'Panjang fokus');
define('COMMENT', 'Komentar');
define('ADDFAV', 'Tambahkan ke Album Favorit');
define('ADDFAVPHRASE', 'Favorit');
define('REMFAV', 'Hapus dari Album Favorit');
define('IPTCTITLE', 'Judul IPTC');
define('IPTCCOPYRIGHT', 'Copyright IPTC');
define('IPTCKEYWORDS', 'Katakunci IPTC');
define('IPTCCATEGORY', 'Kategori IPTC');
define('IPTCSUBCATEGORIES', 'Sub Kategori IPTC');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'Ubah komentar ini');
define('CONFIRM_DELETE', 'Anda yakin mau menghapus komentar ini ?');
define('ADD_YOUR_COMMENT', 'Tambah komentar');
define('NAME', 'Nama');
define('COMMENT', 'Komentar');
define('YOUR_NAME', 'Anon');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Klik image unuk menutup jendela ini');

// lang_ecard_php
define('TITLE', 'Kirim e-card');
define('INVALID_EMAIL', '<b>Peringatan</b> : alamat email invalid !');
define('ECARD_TITLE', 'Sebuah e-card dari %s untuk anda');
define('VIEW_ECARD', 'Jika e-card tampil dengan benar, klik disini');
define('VIEW_MORE_PICS', 'Klik disini untuk melhat foto-foto lain !');
define('SEND_SUCCESS', 'E-card anda telah dikirimkan');
define('SEND_FAILED', 'Maaf, server tidak bisa mengirim e-card anda...');
define('FROM', 'Dari');
define('YOUR_NAME', 'Nama anda');
define('YOUR_EMAIL', 'Alamat email anda');
define('TO', 'Ke');
define('RCPT_NAME', 'Nama penerima');
define('RCPT_EMAIL', 'Alamat email penerima');
define('GREETINGS', 'Salam');
define('MESSAGE', 'Pesan');

// lang_editpics_php
define('PIC_INFO', 'Info&nbsp;foto');
define('ALBUM', 'Album');
define('TITLE', 'Judul');
define('DESC', 'Keterangan');
define('KEYWORDS', 'Kata Kunci');
define('PIC_INFO_STR', '%sx%s - %sKB - %s kali dilihat - %s suara');
define('APPROVE', 'Setujui foto');
define('POSTPONE_APP', 'Tunda persetujuan');
define('DEL_PIC', 'Hapus foto');
define('READ_EXIF', 'Baca lagi info EXIF');
define('RESET_VIEW_COUNT', 'Reset jumlah dilihat');
define('RESET_VOTES', 'Reset suara penilaian');
define('DEL_COMM', 'Hapus komentar');
define('UPL_APPROVAL', 'Persetujuan upload');
define('EDIT_PICS', 'Ubah foto');
define('SEE_NEXT', 'Lihat foto berikutnya');
define('SEE_PREV', 'Lihat foto sebelumnya');
define('N_PIC', '%s foto');
define('N_OF_PIC_TO_DISP', 'Jumlah foto untuk ditampilkan');
define('APPLY', 'Lakukan perubahan');

// lang_groupmgr_php
define('GROUP_NAME', 'Nama grup');
define('DISK_QUOTA', 'Kuota');
define('CAN_RATE', 'Bisa menilai foto');
define('CAN_SEND_ECARDS', 'Bisa mengirim e-card');
define('CAN_POST_COM', 'Bisa memberi komentar');
define('CAN_UPLOAD', 'Bisa mengupload foto');
define('CAN_HAVE_GALLERY', 'Bisa mempunyai galeri pribadi');
define('APPLY', 'Lakukan perubahan');
define('CREATE_NEW_GROUP', 'Buat grup baru');
define('DEL_GROUPS', 'Hapus grup yang dipilih');
define('CONFIRM_DEL', 'Peringatan, jika anda menghapus grup, user yang merupakan anggota grup ini akan dipindahkan ke dalam grup \'Registered\' !\\n\\nAnda ingin melanjutkan ?');
define('TITLE', 'Pengaturan grup');
define('APPROVAL_1', 'Setujui Upl. umum (1)');
define('APPROVAL_2', ' Setujui Upl. pribadi (2)');
define('NOTE1', '<b>(1)</b> Upload ke dalam album publik memerlukan persetujuan admin');
define('NOTE2', '<b>(2)</b> Upload ke dalam album pribadi user memerlukan persetujuan admin');
define('NOTES', 'Catatan');

// lang_index_php
define('WELCOME', 'Selamat datang !');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Anda yakin mau meng-HAPUS album ini ? \\nSeluruh foto dan komentar akan ikut terhapus.');
define('DELETE', 'HAPUS');
define('MODIFY', 'PROPERTI');
define('EDIT_PICS', 'UBAH FOTO');

// lang_list_categories
define('HOME', 'Home');
define('STAT1', '<b>[pictures]</b> foto dalam <b>[albums]</b> album dan <b>[cat]</b> kategori dengan <b>[comments]</b> komentar dilihat <b>[views]</b> kali');
define('STAT2', '<b>[pictures]</b> foto dalam <b>[albums]</b> album dilihat <b>[views]</b> kali');
define('XX_S_GALLERY', 'Galeri %s');
define('STAT3', '<b>[pictures]</b> foto dalam <b>[albums]</b> album dengan <b>[comments]</b> komentar dilihat <b>[views]</b> kali');

// lang_list_users
define('USER_LIST', 'Daftar user');
define('NO_USER_GAL', 'Tidak ada galeri user');
define('N_ALBUMS', '%s album');
define('N_PICS', '%s foto');

// lang_list_albums
define('N_PICTURES', '%s foto');
define('LAST_ADDED', ', yang terakhir ditambahkan pada %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Update album %s');
define('GENERAL_SETTINGS', 'Setting umum');
define('ALB_TITLE', 'Judul album');
define('ALB_CAT', 'Kategori album');
define('ALB_DESC', 'Keterangan album');
define('ALB_THUMB', 'Thumbnail album');
define('ALB_PERM', 'Izin akses untuk album ini');
define('CAN_VIEW', 'Album bisa dilihat oleh');
define('CAN_UPLOAD', 'Pengunjung bisa mengupload foto');
define('CAN_POST_COMMENTS', 'Pengunjung bisa memberi komentar');
define('CAN_RATE', 'Pengunjung bisa memberi penilaian');
define('USER_GAL', 'Galeri User');
define('NO_CAT', '* Tanpa kategori *');
define('ALB_EMPTY', 'Album ini kosong');
define('LAST_UPLOADED', 'Terakhir diupload');
define('PUBLIC_ALB', 'Semua (album publik)');
define('ME_ONLY', 'Hanya saya saja');
define('OWNER_ONLY', 'Pemilik album (%s) saja');
define('GROUPP_ONLY', 'Anggota grup \'%s\'');
define('ERR_NO_ALB_TO_MODIFY', 'Tak ada album yang bisa anda ubah dalam database.');
define('UPDATE', 'Update album');

// lang_rate_pic_php
define('ALREADY_RATED', 'Maaf, anda telah menilai foto ini');
define('RATE_OK', 'Penilaian anda telah diterima');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'Meskipun para administrator dari {SITE_NAME} akan berusaha mengubah atau menghapus materi yang tidak pantas secepat mungkin, adalah mustahil untuk mereview semua kiriman. Karena itu anda paham bahwa seluruh komentar yang dikirim ke situs ini adalah merupakan pandangan dan pendapat pengirimnya dan bukan merupakan pandangan administrator dan webmaster (terkecuali yang dikirimkan oleh orang-orang tersebut) dan karenanya bukan merupakan tanggung jawab mereka.<br />
<br />
Anda setuju untuk tidak mengirimkan materi yang bersifat menghina, tidak patut, jorok, menghasut, mengancam, porno, atau materi apapun yang bisa melanggar hukum. Anda setuju bahwa webmaster, administrator dan moderator dari {SITE_NAME} memiliki hak untuk mangahapus atau merubah isi situs ini kapan saja jika dipandang perlu. Sebagai user anda setuju bahwa semua informasi yang anda masukkan disini akan disimpan dalam database kami. Walaupun informasi ini tidak akan diberikan pada pihak ketiga manapun tanpa persetujuan anda, webmaster dan administrator bertanggung jawab terhadap semua jenis upaya hacking yang bisa membuka data tersebut.<br />
<br />
Situs ini menggunakan cookie untuk menyimpan informasi di komputer anda. Informasi ini hanya berfungsi untuk memudahkan anda mengakses situs ini. Alamat email hanya digunakan untuk mengirimkan dan mengkonfirmasi pendaftaran serta password anda.<br />
<br />
Dengan mengklik link \'Saya setuju\' Dibawah ini anda setuju untuk diikat dengan ketentuan tersebut diatas.');

// lang_register_php
define('PAGE_TITLE', 'Registrasi user');
define('TERM_COND', 'Syarat penggunaan');
define('I_AGREE', 'Saya setuju');
define('SUBMIT', 'Kirim registrasi');
define('ERR_USER_EXISTS', 'Username yang anda masukkan telah digunakan, silahkan pilih yang lain');
define('ERR_PASSWORD_MISMATCH', 'Kedua password tidak cocok, silahkan masukkan lagi');
define('ERR_UNAME_SHORT', 'Username harus terdiri dari 2 karakter minimum');
define('ERR_PASSWORD_SHORT', 'Password harus terdiri dari 2 karakter minimum');
define('ERR_UNAME_PASS_DIFF', 'Username dan password harus berbeda');
define('ERR_INVALID_EMAIL', 'Alamat email tidak valid');
define('ERR_DUPLICATE_EMAIL', 'User lain telah terdaftar dengan alamat email yang anda masukkan');
define('ENTER_INFO', 'Masukkan informasi registrasi');
define('REQUIRED_INFO', 'Informasi yang harus diisi');
define('OPTIONAL_INFO', 'Informasi opsional');
define('USERNAME', 'Username');
define('PASSWORD', 'Password');
define('PASSWORD_AGAIN', 'Ketik ulang Password');
define('EMAIL', 'Email');
define('LOCATION', 'Lokasi');
define('INTERESTS', 'Hobi / Interest');
define('WEBSITE', 'Website');
define('OCCUPATION', 'Pekerjaan');
define('ERROR', 'ERROR');
define('CONFIRM_EMAIL_SUBJECT', 'Konfirmasi registrasi - %s');
define('INFORMATION', 'Informasi');
define('FAILED_SENDING_EMAIL', 'Email konfirmasi registrasi tidak dapat dikirimkan !');
define('THANK_YOU', 'Terima kasih untuk registrasi.<br /><br />Sebuah email yang berisi informasi tentang cara mengaktifkan account anda telah dikirimkan ke alamat email yang anda sediakan.');
define('ACCT_CREATED', 'Account anda telah dibuat dan anda sekarang bisa login dengan username dan password anda');
define('ACCT_ACTIVE', 'Account anda sekarang telah aktif dan anda bisa login dengan username dan password anda');
define('ACCT_ALREADY_ACT', 'Acoount anda sudah aktif !');
define('ACCT_ACT_FAILED', 'Account ini tidak bisa diaktifkan !');
define('ERR_UNK_USER', 'User yang dimaksud tidak ditemukan !');
define('X_S_PROFILE', 'Profil %s');
define('GROUP', 'Grup');
define('REG_DATE', 'Bergabung');
define('DISK_USAGE', 'Ruang digunakan');
define('CHANGE_PASS', 'Ubah password');
define('CURRENT_PASS', 'Password kini');
define('NEW_PASS', 'Password baru');
define('NEW_PASS_AGAIN', 'Ketik lagi password baru');
define('ERR_CURR_PASS', 'Password salah');
define('APPLY_MODIF', 'Lakukan perubahan');
define('UPDATE_SUCCESS', 'Profile anda telah diupdate');
define('PASS_CHG_SUCCESS', 'Password anda telah diubah');
define('PASS_CHG_ERROR', ' Password anda tidak diubah ');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Terima kasih anda telah mendaftar di {SITE_NAME}

Username anda adalah : "{USER_NAME}"
Password anda adalah : "{PASSWORD}"

Untuk mengaktifkan account anda, anda harus mengklik link di bawah ini atau kopi dan paste pada web browser anda.

{ACT_LINK}

Hormat kami,

Manajemen {SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', 'Review komentar');
define('NO_COMMENT', 'Tidak ada komentar untuk direview');
define('N_COMM_DEL', '%s komentar dihapus');
define('N_COMM_DISP', 'Jumlah komentar untuk ditampilkan');
define('SEE_PREV', 'Lihat sebelumnya');
define('SEE_NEXT', 'Lihat berikutnya');
define('DEL_COMM', 'Hapus komentar yang dipilih');

// lang_search_php
define('SEARCH', 'Cari dalam database image');

// lang_search_new_php
define('PAGE_TITLE', 'Cari foto baru');
define('SELECT_DIR', 'Pilih direktori');
define('SELECT_DIR_MSG', 'Fungsi ini membolehkan anda untuk menambahkan sekumpulan foto yang telah anda upload ke server anda melalui FTP.<br /><br />Pilih direktori di mana anda telah mengupload foto-foto anda');
define('NO_PIC_TO_ADD', 'Tak ada foto untuk ditambahkan');
define('NEED_ONE_ALBUM', 'Anda perlu minimum satu buah album untuk menjalankan fungsi ini');
define('WARNING', 'Peringatan');
define('CHANGE_PERM', 'skrip tidak bisa menulis pada direktori ini, anda perlu merubah modenya ke 755 atau 777 sebelum mencoba menambahkan foto !');
define('TARGET_ALBUM', '<b>Masukkan foto &quot;</b>%s<b>&quot; kedalam </b>%s');
define('FOLDER', 'Folder');
define('IMAGE', 'Image');
define('ALBUM', 'Album');
define('RESULT', 'Hasil');
define('DIR_RO', 'Tidak bisa ditulisi. ');
define('DIR_CANT_READ', 'Tidak bisa dibaca. ');
define('INSERT', 'Menambahkan foto baru kedalam galeri');
define('LIST_NEW_PIC', 'Daftar foto baru');
define('INSERT_SELECTED', 'Masukkan foto yang dipilih');
define('NO_PIC_FOUND', 'Tidak ada foto baru yang ditemukan');
define('BE_PATIENT', 'Sabar, skrip memerlukan waktu untuk menambahkan foto');
define('NOTES', '<ul><li><b>OK</b> : berarti foto telah berhasil ditambahkan<li><b>DP</b> : berarti foto merupakan duplikat dan telah berada dalam database<li><b>PB</b> : berarti foto tidak bisa ditambahkan, periksa konfigurasi dan permission direktori dimana foto berada<li>Jika \'tanda\' OK, DP, PB tidak tampil, klik pada tanda yang tidak tampil tersebut untuk melihat pesan error yang dihasilkan oleh PHP<li>Jika browser anda timeout, klik tombol reload/refresh</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('TITLE', 'Upload foto');
define('MAX_FSIZE', 'Ukuran file maksimum yang diizinkan adalah %s KB');
define('ALBUM', 'Album');
define('PICTURE', 'Foto');
define('PIC_TITLE', 'Judul Foto');
define('DESCRIPTION', 'Keterangan foto');
define('KEYWORDS', 'Kata Kunci (pisahkan dengan spasi)');
define('ERR_NO_ALB_UPLOADABLES', 'Maaf, tak ada album yang dizinkan bagi anda untuk mengupload foto');

// lang_usermgr_php
define('TITLE', 'Pengaturan user');
define('NAME_A', 'Nama mendaki');
define('NAME_D', 'Nama menurun');
define('GROUP_A', 'Grup mendaki');
define('GROUP_D', 'Grup menurun');
define('REG_A', 'Tanggal daftar mendaki');
define('REG_D', ' Tanggal daftar menurun');
define('PIC_A', 'Jumlah foto mendaki');
define('PIC_D', ' Jumlah foto menurun');
define('DISKU_A', 'Penggunaan ruang mendaki');
define('DISKU_D', ' Penggunaan ruang menurun');
define('SORT_BY', 'Urutkan user menurut');
define('ERR_NO_USERS', 'Tabel user kosong !');
define('ERR_EDIT_SELF', 'Anda tidak bisa mengubaubah profil anda sendiri, gunakan link \'Profilku\' untuk itu');
define('EDIT', 'UBAH');
define('DELETE', 'HAPUS');
define('NAME', 'User name');
define('GROUP', 'Grup');
define('INACTIVE', 'Nonaktif');
define('OPERATIONS', 'Operasi');
define('PICTURES', 'Foto');
define('DISK_SPACE', 'Ruang digunakan / Kuota');
define('REGISTERED_ON', 'Register pada');
define('U_USER_ON_P_PAGES', '%d user pada %d halaman');
define('CONFIRM_DEL', 'Anda yakin mau mengHAPUS user ini ? \\nSemua foto dan album user ini akan ikut terhapus.');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'User yang dimaksud tidak ditemukan !');
define('MODIFY_USER', 'Ubah user');
define('NOTES', 'Catatan');
define('NOTE_LIST', '<li>Jika anda tidak ingin merubah password sekarang, biarkan field \"password\" kosong');
define('PASSWORD', 'Password');
define('USER_ACTIVE', 'User aktif');
define('USER_GROUP', 'Grup User');
define('USER_EMAIL', 'Email user');
define('USER_WEB_SITE', 'Situs web user');
define('CREATE_NEW_USER', 'Buat user baru');
define('USER_LOCATION', 'Lokasi user');
define('USER_INTERESTS', 'Hobi/interest user');
define('USER_OCCUPATION', 'Pekerjaan user');

// lang_util_php
define('TITLE', 'Ubah dimensi foto');
define('WHAT_IT_DOES', 'Kegunaannya');
define('WHAT_UPDATE_TITLES', 'Update judul dari nama file');
define('WHAT_DELETE_TITLE', 'Hapus judul');
define('WHAT_REBUILD', 'Buat kembali thumbnail dan ubah dimensi foto');
define('WHAT_DELETE_ORIGINALS', 'Menghapus foto lama yang talah diubah dimansinya dan menggantinya dengan foto baru yang telah diubah dimensinya');
define('FILE', 'File');
define('TITLE_SET_TO', 'judul ubah ke');
define('SUBMIT_FORM', 'kirim');
define('UPDATED_SUCCESFULLY', 'berhasil diupdate');
define('ERROR_CREATE', 'ERROR membuat');
define('CONTINUE', 'Proses image lain');
define('MAIN_SUCCESS', 'File %s telah berhasil digunakan sebagai foto utama');
define('ERROR_RENAME', 'Error mengubah nama %s ke %s');
define('ERROR_NOT_FOUND', 'File %s tidak ditemukan');
define('BACK', 'kembali');
define('THUMBS_WAIT', 'Sedang mengupdate thumbnail dan/atau mengubah dimensi image, tunggu sejenak...');
define('THUMBS_CONTINUE_WAIT', 'Lanjutkan mengupdate thumbnail dan/atau mengubah dimensi image...');
define('TITLES_WAIT', 'Sedang mengupdate judul, tunggu sejenak...');
define('DELETE_WAIT', 'Sedang menghapus judul, tunggu sejenak...');
define('REPLACE_WAIT', 'Sedang menghapus yang original dan menggantinya dengan image yang telah diubah dimensinya, tunggu sejenak..');
define('INSTRUCTION', 'Instruksi cepat');
define('INSTRUCTION_ACTION', 'Pilih fungsi');
define('INSTRUCTION_PARAMETER', 'Set parameter');
define('INSTRUCTION_ALBUM', 'Pilih album');
define('INSTRUCTION_PRESS', 'Tekan %s');
define('UPDATE', 'Update thumbnail dan/atau ubah dimensi foto');
define('UPDATE_WHAT', 'Apa yang harus diupdate');
define('UPDATE_THUMB', 'Thumbnail saja');
define('UPDATE_PIC', 'Ubah dimensi fota saja');
define('UPDATE_BOTH', 'Thumbnail dan ubah ukuran foto');
define('UPDATE_NUMBER', 'Jumlah image yang diproses per klik');
define('UPDATE_OPTION', '(Coba set dengan nilai yang lebih kecil jika anda mengalami masalah timeout browser)');
define('FILENAME_TITLE', 'Nama File &rArr; Judul foto');
define('FILENAME_HOW', 'Bagaimana nama file akan diubah');
define('FILENAME_REMOVE', 'Hapus akhiran .jpg dan ganti _ (underscore) dengan spasi');
define('FILENAME_EURO', 'Ubah 2003_11_23_13_20_20.jpg ke 23/11/2003 13:20');
define('FILENAME_US', 'Ubah 2003_11_23_13_20_20.jpg ke 11/23/2003 13:20');
define('FILENAME_TIME', 'Ubah 2003_11_23_13_20_20.jpg ke 13:20');
define('DELETE', 'Hapus judul foto atau image yang tela diubah dimensinya');
define('DELETE_TITLE', 'Hapus judul foto');
define('DELETE_ORIGINAL', 'Hapus foto yang telah diubah dimensinya');
define('DELETE_REPLACE', 'Hapus image original ganti dengan image yang telah diubah dimensinya');
define('SELECT_ALBUM', 'Pilih album');

// lang_pagetitle_php
define('DIVIDER', '&raquo;');
define('VIEWING', 'Lihat Foto');
define('USR', '- Galeri');
define('PHOTOGALLERY', 'Galeri Foto');
?>