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
  $Source: /cvs/l10n/indonesian/coppermine.php,v $
  $Revision: 9.5 $
  $Author: djmaze $
  $Date: 2006/02/12 16:02:00 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Views');
define('PIC_VOTES', 'Votes');
define('PIC_COMMENTS', 'Comments');

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Indonesian');
define('LANG_NAME_NATIVE', 'Bahasa Indonesia');
define('LANG_COUNTRY_CODE', 'id');
define('TRANS_NAME', 'sengsara');
define('TRANS_EMAIL', 'sengsara@batamweb.net');
define('TRANS_WEBSITE', 'http://batamweb.net/');
define('TRANS_DATE', '2003-11-04');
define('CHARSET', 'UTF-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Ya');
define('NO', 'Tidak');
// some common strings
define('BACK', 'KEMBALI');
define('CONTINU', 'LANJUT');
define('INFO', 'Informasi');
//define('_ERROR', 'Error');
define('ALBUM_DATE_FMT', '%d %B %Y');
define('LASTCOM_DATE_FMT', '%d/%m/%y %H:%M');
define('LASTUP_DATE_FMT', '%d %B %Y');
define('REGISTER_DATE_FMT', '%d %B %Y');
define('LASTHIT_DATE_FMT', '%d %B %Y %I:%M %p');
define('COMMENT_DATE_FMT', '%d %B %Y %I:%M %p');

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
define('NO_IMG_TO_APPROVE', 'No images to approve');

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
define('SEARCH_TITLE', 'Search Photo Collection');
define('SEARCH_LNK', 'Pencarian');
define('FAV_TITLE', 'My Favorites');
define('FAV_LNK', 'Favoritku');
define('HELP_TITLE', 'HELP');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

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
//define('MY_PROF_LNK', 'Profil');

// lang_cat_list
define('CATEGORY', 'Kategori');
define('ALBUMS', 'Album');
// define('PICTURES', 'Foto');

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
define('THUMB_RATING', 'NILAI');
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
//define('INFORMATION', 'Informasi');
//define('ERROR', 'Error');
define('_CRITICAL_ERROR', 'Critical error');
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
define('CONFIRM_DELETE_CAT', 'Anda yakin mau meng-HAPUS kategori ini ?');
//define('CATEGORY', 'Kategori');
define('OPERATIONS', 'Operasi');
define('MOVE_INTO', 'Pindahkan');
define('UPDATE_CREATE', 'Ubah/Buat kategori');
define('PARENT_CAT', 'Kategori induk');
define('CAT_TITLE', 'Judul kategori');
define('CAT_DESC', 'Keterangan');

// lang_config_php
define('CONFIG_TITLE', 'Konfigurasi');
define('RESTORE_CFG', 'Kembalikan ke default');
define('SAVE_CFG', 'Simpan konfigurasi');
define('NOTES', 'Catatan');
//define('INFO', 'Informasi');
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
//define('INFO', 'Informasi');
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
// define('COMMENT', 'komentar');
define('IM_IN_ALB', 'image dalam album');
define('ALB_DEL_SUCCESS', 'Album \'%s\' dihapus');
define('ALB_MGR', 'Pengaturan Album');
define('ERR_INVALID_DATA', 'Data invalid diterima dalam \'%s\'');
define('CREATE_ALB', 'Sedang membuat album \'%s\'');
define('UPDATE_ALB', 'Mengupdate album \'%s\' dengan judul \'%s\' dan indeks \'%s\'');
define('DEL_PIC', 'Hapus foto');
define('DEL_ALB', 'Hapus album');
define('DEL_USER', 'Hapus user');
// define('ERR_UNKNOWN_USER', 'User yang dimaksud tidak ditemukan !');
define('COMMENT_DELETED', 'Komentar berhasil dihapus');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'Anda yakin mau mengHAPUS foto ini ? \\nKomentar juga akan ikut dihapus.');
define('DEL_THIS_PIC', 'HAPUS FOTO INI');
define('SIZE', '%s x %s piksel');
define('VIEWS', '%s kali dilihat');
define('SLIDESHOW', 'Slideshow');
define('STOP_SLIDESHOW', 'HENTIKAN SLIDESHOW');
define('VIEW_FS', 'Klik untuk melihat image ukuran penuh');
define('EDIT_PIC', 'UBAH INFO FOTO');

// lang_picinfo
define('PIC_INF_TITLE', 'Informasi foto');
define('PIC_INF_FILENAME', 'Nama file');
define('ALBUM_NAME', 'Nama Album');
define('PIC_INFO_RATING', 'Nilai (%s suara)');
define('KEYWORDS', 'Kata Kunci');
define('PIC_INF_FILE_SIZ', 'Ukuran File');
define('PIC_INF_DIMENSIONS', 'Dimensi');
define('DISPLAYED', 'Ditampilkan');
define('CAMERA', 'Kamera');
define('DATE_TAKEN', 'Tanggal pengambilan');
define('APERTURE', 'Bukaan');
define('EXPOSURE_TIME', 'Waktu bukaan');
define('FOCAL_LENGTH', 'Panjang fokus');
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
define('REMOVEFAV', 'Removed from Favorites Album');
define('ADDEDTOFAV', 'Added to Favorites Album');

// lang_display_comments
define('OK', 'OK');
define('COM_EDIT_TITLE', 'Ubah komentar ini');
define('CONFIRM_DELETE_COM', 'Anda yakin mau menghapus komentar ini ?');
define('ADD_YOUR_COMMENT', 'Tambah komentar');
define('COM_NAME', 'Nama');
//define('COMMENT', 'Komentar');
define('YOUR_NAME', 'Anon');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Klik image unuk menutup jendela ini');

// lang_ecard_php
define('E_TITLE', 'Kirim e-card');
define('INVALID_EMAIL', '<b>Peringatan</b> : alamat email invalid !');
define('E_ECARD_TITLE', 'Sebuah e-card dari %s untuk anda');
define('VIEW_ECARD', 'Jika e-card tampil dengan benar, klik disini');
define('VIEW_MORE_PICS', 'Klik disini untuk melhat foto-foto lain !');
define('SEND_SUCCESS', 'E-card anda telah dikirimkan');
define('SEND_FAILED', 'Maaf, server tidak bisa mengirim e-card anda...');
define('FROM', 'Dari');
define('_YOUR_NAME', 'Nama anda');
define('YOUR_EMAIL', 'Alamat email anda');
define('TO', 'Ke');
define('RCPT_NAME', 'Nama penerima');
define('RCPT_EMAIL', 'Alamat email penerima');
define('GREETINGS', 'Salam');
define('MESSAGE', 'Pesan');
define('ECARD_LINK_CORRUPT', 'Sorry but the e-card data has been corrupted by your mail client, please try pasting the link in your browser'); //NEW

// lang_editpics_php
define('PIC_INFO', 'Info&nbsp;foto');
define('ALBUM', 'Album');
define('EDIT_TITLE', 'Judul');
define('DESC', 'Keterangan');
//define('KEYWORDS', 'Kata Kunci');
define('PIC_INFO_STR', '%sx%s - %sKB - %s kali dilihat - %s suara');
define('APPROVE', 'Setujui foto');
define('POSTPONE_APP', 'Tunda persetujuan');
//define('DEL_PIC', 'Hapus foto');
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
//define('APPLY', 'Lakukan perubahan');
define('CREATE_NEW_GROUP', 'Buat grup baru');
define('DEL_GROUPS', 'Hapus grup yang dipilih');
define('CONFIRM_DEL', 'Peringatan, jika anda menghapus grup, user yang merupakan anggota grup ini akan dipindahkan ke dalam grup \'Registered\' !\\n\\nAnda ingin melanjutkan ?');
define('GROUP_TITLE', 'Pengaturan grup');
define('APPROVAL_1', 'Setujui Upl. umum (1)');
define('APPROVAL_2', ' Setujui Upl. pribadi (2)');
define('NOTE1', '<b>(1)</b> Upload ke dalam album publik memerlukan persetujuan admin');
define('NOTE2', '<b>(2)</b> Upload ke dalam album pribadi user memerlukan persetujuan admin');
//define('NOTES', 'Catatan');

// lang_index_php
define('WELCOME', 'Selamat datang !');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Anda yakin mau meng-HAPUS album ini ? \\nSeluruh foto dan komentar akan ikut terhapus.');
//define('DELETE', 'HAPUS');
define('MODIFY', 'PROPERTI');
//define('EDIT_PICS', 'UBAH FOTO');

// lang_list_categories
define('HOME', _HOME);
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
define('MOD_CAN_UPLOAD', 'Pengunjung bisa mengupload foto');
define('CAN_POST_COMMENTS', 'Pengunjung bisa memberi komentar');
define('MOD_CAN_RATE', 'Pengunjung bisa memberi penilaian');
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

// lang_register_php
define('USERNAME', 'Username');
define('X_S_PROFILE', 'Profil %s');
define('GROUP', 'Grup');
define('DISK_USAGE', 'Ruang digunakan');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Review komentar');
define('NO_COMMENT', 'Tidak ada komentar untuk direview');
define('N_COMM_DEL', '%s komentar dihapus');
define('N_COMM_DISP', 'Jumlah komentar untuk ditampilkan');
define('R_SEE_PREV', 'Lihat sebelumnya');
define('R_SEE_NEXT', 'Lihat berikutnya');
define('R_DEL_COMM', 'Hapus komentar yang dipilih');

// lang_search_php
define('S_SEARCH', 'Cari dalam database image');

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
//define('ALBUM', 'Album');
define('RESULT', 'Hasil');
define('DIR_RO', 'Tidak bisa ditulisi. ');
define('DIR_CANT_READ', 'Tidak bisa dibaca. ');
define('INSERT', 'Menambahkan foto baru kedalam galeri');
define('LIST_NEW_PIC', 'Daftar foto baru');
define('INSERT_SELECTED', 'Masukkan foto yang dipilih');
define('NO_PIC_FOUND', 'Tidak ada foto baru yang ditemukan');
define('BE_PATIENT', 'Sabar, skrip memerlukan waktu untuk menambahkan foto');
define('SN_NOTES', '<ul><li><b>OK</b> : berarti foto telah berhasil ditambahkan<li><b>DP</b> : berarti foto merupakan duplikat dan telah berada dalam database<li><b>PB</b> : berarti foto tidak bisa ditambahkan, periksa konfigurasi dan permission direktori dimana foto berada<li>Jika \'tanda\' OK, DP, PB tidak tampil, klik pada tanda yang tidak tampil tersebut untuk melihat pesan error yang dihasilkan oleh PHP<li>Jika browser anda timeout, klik tombol reload/refresh</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('UP_TITLE', 'Upload foto');
define('MAX_FSIZE', 'Ukuran file maksimum yang diizinkan adalah %s KB');
//define('ALBUM', 'Album');
define('PICTURE', 'Foto');
define('PIC_TITLE', 'Judul Foto');
define('DESCRIPTION', 'Keterangan foto');
define('UP_KEYWORDS', 'Kata Kunci (pisahkan dengan spasi)');
define('ERR_NO_ALB_UPLOADABLES', 'Maaf, tak ada album yang dizinkan bagi anda untuk mengupload foto');

// lang_usermgr_php
define('U_TITLE', 'Pengaturan user');
//define('NAME_A', 'Nama mendaki');
//define('NAME_D', 'Nama menurun');
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
//define('DELETE', 'HAPUS');
define('U_NAME', 'User name');
//define('GROUP', 'Grup');
define('INACTIVE', 'Nonaktif');
//define('OPERATIONS', 'Operasi');
define('PICTURES', 'Foto');
define('DISK_SPACE', 'Ruang digunakan / Kuota');
define('REGISTERED_ON', 'Register pada');
define('U_USER_ON_P_PAGES', '%d user pada %d halaman');
define('USER_CONFIRM_DEL', 'Anda yakin mau mengHAPUS user ini ? \\nSemua foto dan album user ini akan ikut terhapus.');
define('MAIL', 'MAIL');
define('ERR_UNKNOWN_USER', 'User yang dimaksud tidak ditemukan !');
define('MODIFY_USER', 'Ubah user');
//define('NOTES', 'Catatan');
define('NOTE_LIST', '<li>Jika anda tidak ingin merubah password sekarang, biarkan field \"password\" kosong');
define('PASSWORD', 'Password');
define('USER_ACTIVE_CP', 'User aktif');
define('USER_GROUP_CP', 'Grup User');
define('USER_EMAIL', 'Email user');
define('USER_WEB_SITE', 'Situs web user');
define('CREATE_NEW_USER', 'Buat user baru');
define('USER_FROM', 'Lokasi user');
define('USER_INTERESTS', 'Hobi/interest user');
define('USER_OCC', 'Pekerjaan user');

// lang_util_php
define('UTIL_TITLE', 'Ubah dimensi foto');
define('WHAT_IT_DOES', 'Kegunaannya');
define('WHAT_UPDATE_TITLES', 'Update judul dari nama file');
define('WHAT_DELETE_TITLE', 'Hapus judul');
define('WHAT_REBUILD', 'Buat kembali thumbnail dan ubah dimensi foto');
define('WHAT_DELETE_ORIGINALS', 'Menghapus foto lama yang talah diubah dimansinya dan menggantinya dengan foto baru yang telah diubah dimensinya');
define('U_FILE', 'File');
define('TITLE_SET_TO', 'judul ubah ke');
define('SUBMIT_FORM', 'kirim');
define('UPDATED_SUCCESFULLY', 'berhasil diupdate');
define('ERROR_CREATE', 'ERROR membuat');
define('CONTIN', 'Proses image lain');
define('MAIN_SUCCESS', 'File %s telah berhasil digunakan sebagai foto utama');
define('ERROR_RENAME', 'Error mengubah nama %s ke %s');
define('ERROR_NOT_FOUND', 'File %s tidak ditemukan');
define('U_BACK', 'kembali');
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
define('U_UPDATE', 'Update thumbnail dan/atau ubah dimensi foto');
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
define('UT_DELETE', 'Hapus judul foto atau image yang tela diubah dimensinya');
define('DELETE_TITLE', 'Hapus judul foto');
define('DELETE_ORIGINAL', 'Hapus foto yang telah diubah dimensinya');
define('DELETE_REPLACE', 'Hapus image original ganti dengan image yang telah diubah dimensinya');
//define('SELECT_ALBUM', 'Pilih album');

// lang_pagetitle_php
define('VIEWING', 'Lihat Foto');
define('USR', '- Galeri');
define('PHOTOGALLERY', 'Galeri Foto');
$lang_usermgr_php = array(
    'name_a' => 'Name ascending',
    'name_d' => 'Name descending',
    'group_a' => 'Group ascending',
    'group_d' => 'Group descending',
    'reg_a' => 'Reg date ascending',
    'reg_d' => 'Reg date descending',
    'pic_a' => 'Pic count ascending',
    'pic_d' => 'Pic count descending',
    'disku_a' => 'Disk usage ascending',
    'disku_d' => 'Disk usage descending',
    );
$lang_byte_units = array('Bytes', 'KB', 'MB');
// Day of weeks and months
$lang_day_of_week = array('Ming', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab');
$lang_month = array('Jan', 'Peb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agt', 'Sep', 'Okt', 'Nop', 'Des');
$lang_meta_album_names = array(
	'random' => 'Foto Acak',
    'lastup' => 'Kiriman Terakhir',
    'lastupby' => 'My Last Additions', // new 1.2.2
    'lastalb' => 'Album Terakhir Diupdate ',
    'lastcom' => 'Komentar Terakhir',
    'lastcomby' => 'My Last comments', // new 1.2.2
    'topn' => 'Terbanyak Dilihat',
    'toprated' => 'Nilai Tertingi',
    'lasthits' => 'Terakhir Dilihat',
    'search' => 'Hasil Pencarian',
    'favpics' => 'Foto Favorit' // changed in cpg1.2.0nuke
    );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array(
		'title' => 'Konfigurasi',
        'restore_cfg' => 'Kembalikan ke default',
        'save_cfg' => 'Simpan konfigurasi',
        'notes' => 'Catatan',
        'info' => 'Informasi',
        'upd_success' => 'Konfigurasi Coppermine telah diupdate',
        'restore_success' => 'Konfigurasi Coppermine telah dikembalikan ke default',
        'name_a' => 'Nama mendaki',
        'name_d' => 'Nama menurun',
        'title_a' => 'Judul mendaki',
        'title_d' => 'Judul menurun',
        'date_a' => 'Tanggal mendaki',
        'date_d' => 'Tanggal menurun',
        'rating_a' => 'Nilai mendaki', // new in cpg1.2.0nuke
        'rating_d' => 'Nilai menurun', // new in cpg1.2.0nuke
        'th_any' => 'Max Aspect',
        'th_ht' => 'Tinggi',
        'th_wd' => 'Lebar'
        );
// start left side interpretation
$lang_config_data = array(
    // 'General settings',
    'Setting Umum',
    array('Nama Galeri', 'gallery_name',0),
    array('Keterangan', 'gallery_description',0),
    array('Email admin galeri', 'gallery_admin_email',0),
    array('Address to nuke folder ie http://example.com/html/', 'ecards_more_pic_target',0), 
    array('Theme', 'theme', 6),
    array('Judul Halaman yang spesifik (bukan hanya >Coppermine)', 'nice_titles', 1),
//'Album list view',
    'Tampilan daftar album',
    array('Lebar tabel utama (piksel atau %)','main_table_width', 0),
    array('Jumlah level kategori yang ditampilkan', 'subcat_level', 0),
    array('Jumlah album yang ditampilkan', 'albums_per_page', 0),
    array('Jumlah kolom di daftar album', 'album_list_cols', 0),
    array('Ukuran thumbnail dalam piksel', 'alb_list_thumb_size', 0),
    array('Tampilan halaman utama', 'main_page_layout', 0),
    array('Tampilkan thumbnail album level pertama dalam kategori','first_level', 1),
//'Thumbnail view',
    'Tampilan thumbnail',
    array('Jumlah kolom di halaman thumbnail', 'thumbcols', 0),
    array('Jumlah baris di halaman thumbnail', 'thumbrows', 0),
    array('Jumlah maksimum tampilan tab', 'max_tabs', 0),
    array('Tampilkan keterangan foto (sebagai tambahan judul) di bawah thumbnail', 'caption_in_thumbview', 1),
    array('Tampilkan jumlah komentar di bawah thumbnail', 'display_comment_count', 1),
    array('Urutan foto default', 'default_sort_order', 3),
    array('Jumlah suara minimal bagi foto untuk tampil di daftar \'nilai tertinggi\'', 'min_votes_for_rating', 0),
    array('Tag Alt dan title thumbnail tampilkan judul dan keyword (bukan picinfo)', 'seo_alts', 1),
 //'Display Image &amp; Comment settings',
    'Tampilan foto &amp; setting komentar',
    array('Lebar table tampilan foto (piksel atau %)', 'picture_table_width', 0),
    array('Informasi foto secara default tampak', 'display_pic_info', 1),
    array('Saring kata-kata buruk dalam komentar', 'filter_bad_words', 1),
    array('Izinkan smilies dalam komentar', 'enable_smilies', 1),
    array('Izinkan lebih dari satu kali komentar secara berturut-turut oleh user', 'disable_flood_protection', 1),
    array('Email ke admin situs saat ada kiriman komentar', 'comment_email_notification', 1),
    array('Panjang maksimum keterangan foto', 'max_img_desc_length', 0),
    array('Jumlah karakter makimum dalam kata', 'max_com_wlength', 0),
    array('Jumlah baris maksimum dalam komentar', 'max_com_lines', 0),
    array('Panjang maksimum komentar', 'max_com_size', 0),
    array('Tampilkan film strip', 'display_film_strip', 1),
    array('Jumlah item dalam film strip', 'max_film_strip_items', 0),
    array('Izinkan tampilan foto fullsize untuk anonim', 'allow_anon_fullsize', 1),
    array('Number of days between being able to vote on the same image','keep_votes_time',0), 
    array('Show fullsize picture in slideshow','fullsize_slideshow',1),
    array('Show blocks on the right of displayimage if right blocks are on at module level?', 'right_blocks', 1),
// 'Pictures and thumbnails settings',
    'Setting foto dan thumbnail',
    array('Kualitas file JPEG', 'jpeg_qual', 0),
    array('Place watermark on image', 'watermark', 1),
    array('Dimensi thumbnail maksimum <b>*</b>', 'thumb_width', 0),
    array('Gunakan dimensi ( lebar atau tinggi atau perbandingan maksimum untuk thumbnail )<b>*</b>', 'thumb_use', 7),
    array('Buat foto antara', 'make_intermediate', 1        ),
    array('Lebar atau tinggi maksimum foto antara <b>*</b>', 'picture_width', 0),
    array('Besar maksimum foto yang diupload (KB)', 'max_upl_size', 0),
    array('Lebar atau tinggi maksimum foto yang diupload (piksel)', 'max_upl_width_height', 0),
    array('Allow multiple Files to be upload with same file name', 'samename', 1), 
//'User settings',
    'Setting user',
    array('Izinkan pendaftaran user baru', 'allow_user_registration', 1),
/*
    array('Pendaftaran menggunakan pengesahan melalui email', 'reg_requires_valid_email', 1),
    array('Izinkan dua user untuk memiliki alamat email yang sama', 'allow_duplicate_emails_addr', 1),
*/
    array('User bisa memiliki album pribadi', 'allow_private_albums', 1),
    array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',
    'Field tambahan untuk keterangan image (kosongkan jika tidak digunakan)',
    array('Nama field 1', 'user_field1_name', 0),
    array('Nama field 2', 'user_field2_name', 0),
    array('Nama field 3', 'user_field3_name', 0),
    array('Nama field 4', 'user_field4_name', 0),
	//'Pictures and thumbnails advanced settings',
    'Setting tambahan foto dan thumbnail',
    array('Tampilkan ikon album pribadi untuk user yang tidak login', 'show_private', 1),
    array('Karakter yang tidak diizinkan dalam nama file', 'forbiden_fname_char', 0),
    array('Ekstensi file yang diizinkan untuk foto yang diupload', 'allowed_file_extensions', 0),
    array('Metode pengubah ukuran image', 'thumb_method', 2),
    array('Path utiliti \'konversi\' ImageMagick/netpbm (mis. /usr/bin/X11/)', 'impath', 0),
    array('Tipe image yang diizinkan (hanya berlaku untuk ImageMagick)', 'allowed_img_types', 0),
    array('Opsi Command line untuk ImageMagick', 'im_options', 0),
    array('Baca data EXIF dalam file JPEG', 'read_exif_data', 1),
    array('Baca data IPTC dalam file JPEG', 'read_iptc_data', 1),
    array('Direktori album <b>*</b>', 'fullpath', 0),
    array('Direktori foto user <b>*</b>', 'userpics', 0),
    array('Prefiks untuk foto antara <b>*</b>', 'normal_pfx', 0),
    array('Prefiks untuk thumbnail <b>*</b>', 'thumb_pfx', 0),
    array('Tampilkan nama file dalam picinfo', 'picinfo_display_filename', 1),
    array('Tampilkan nama album dalam picinfo', 'picinfo_display_album_name', 1),
    array('Tampilkan ukuran file dalam picinfo', 'picinfo_display_file_size', 1),
    array('Tampilkan dimensi dalam picinfo', 'picinfo_display_dimensions', 1),
    array('Tampilkan count dalam picinfo', 'picinfo_display_count_displayed', 1),
    array('Tampilkan URL dalam picinfo', 'picinfo_display_URL', 1),
    array('Tampilkan URL sebagai link bookmark dalam picinfo', 'picinfo_display_URL_bookmark', 1),
    array('Tampilkan link album favorit dalam picinfo', 'picinfo_display_favorites', 1),
//    'Cookies &amp; Charset settings',
    'Setting Cookie &amp; Karakter Set ',
    array('Nama cookie yang digunakan oleh skrip', 'cookie_name', 0),
    array('Path cookie yang digunakan oleh skrip', 'cookie_path', 0),
//    'Miscellaneous settings',
    'Setting lain-lain',
    array('Aktifkan mode debug', 'debug_mode', 1),
    '<br /><div align="center">(*) Field yang ditandai dengan * tidak boleh diubah jika telah ada foto dalam galeri</div><br />'
);
// end left side interpretation
