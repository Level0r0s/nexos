<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/indonesian/downloads.php,v $
  $Revision: 9.7 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:55 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','The download you\'ve requested doesn\'t exists.');
define('_CATEGORIES','Kategori');
define('_LVOTES','penilai');
define('_TOTALVOTES','Total Penilai:');
define('_THEREARE','Ada');
define('_NOMATCHES','Tidak ada hasil dari pencarian anda');
define('_SCOMMENTS','Komentar');
define('_UNKNOWN','Tidak Jelas');
define('_AUTHORNAME','Nama Pembuat');
define('_AUTHOREMAIL','Alamat Email Pembuat');
define('_DOWNLOADNAME','Nama Program');
define('_ADDTHISFILE','Tambahkan file ini');
define('_INBYTES','dalam bite');
define('_FILESIZE','Ukuran file');
//define('_VERSION','Versi');
//define('_AUTHOR','Pembuat');
define('_HOMEPAGE','Homepage');
define('_DOWNLOADNOW','Download file ini sekarang!');
define('_RATERESOURCE','Beri Nilai');
define('_FILEURL','File Link');
define('_ADDDOWNLOAD','Tambah File');
define('_DOWNLOADSMAIN','Halaman Utama Download');
define('_DOWNLOADCOMMENTS','Komentar Download');
define('_DOWNLOADSMAINCAT','Halaman Utama Download');
define('_ADDADOWNLOAD','Tambahkan File Download Baru');
define('_DSUBMITONCE','Daftarkan setiap file/program satu kali saja.');
define('_DPOSTPENDING','Semua pendaftaran harus menunggu verifikasi.');
define('_RESSORTED','Saat ini ditampilkan menurut');
define('_DOWNLOADSNOTUSER1','Anda bukan member atau mungkin belum login.');
define('_DOWNLOADSNOTUSER2','Jika anda member situs ini anda bisa menambahkan file untuk didownload.');
define('_DOWNLOADSNOTUSER3','Jika anda ingin menambah file silakan daftar dulu, tidak sulit untuk mendaftar di situs ini.');
define('_DOWNLOADSNOTUSER4','Kami membutuhkan pendaftaran pada beberapa bagian dalam situs kami');
define('_DOWNLOADSNOTUSER5','supaya kami bisa memberikan informasi yang bermutu bagi pengunjung kami,');
define('_DOWNLOADSNOTUSER6','setiap item akan diperiksa dan disetujui oleh staf kami.');
define('_DOWNLOADSNOTUSER7','Kami berharap pengunjung kami untuk mendapatkan yang terbaik dari kami.');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink("Your_Account").'">Daftar di sini</a>');
define('_DOWNLOADALREADYEXT','ERROR: Alamat URL sudah ada dalam database!');
define('_DOWNLOADNOTITLE','ERROR: Anda haruf mengisi JUDUL dari URL anda!');
define('_DOWNLOADNOURL','ERROR: Anda harus mengisi ALAMAT URL dari file download yang anda inginkan!');
define('_DOWNLOADNODESC','ERROR: Anda harus mengisi DESKRIPSI dari file download anda!');
define('_DOWNLOADRECEIVED','Terima kasih, kami sudah menerima masukkan anda.');
define('_NEWDOWNLOADS','Download Baru');
define('_TOTALNEWDOWNLOADS','Total Download Baru');
define('_DTOTALFORLAST','Dalam');
define('_DBESTRATED','Download Terbaik - Top');
define('_TRATEDDOWNLOADS','total file yang dinilai');
define('_SORTDOWNLOADSBY','Urutkan berdasarkan');
define('_DCATNEWTODAY','File baru pada kategori ini yang ditambahkan hari ini');
define('_DCATLAST3DAYS','File baru pada kategori ini yang ditambahkan dalam 3 hari terakhir');
define('_DCATTHISWEEK','File baru pada kategori ini yang ditambahkan dalam pekan ini');
define('_DDATE1','Tanggal (yang lama dulu)');
define('_DDATE2','Tanggal (yang baru dulu)');
define('_DOWNLOADS','Download');
define('_DOWNLOADPROFILE','Profil download');
define('_DOWNLOADRATINGDET','Detil Nilai');
define('_EDITTHISDOWNLOAD','Edit');
define('_DOWNLOADRATING','Nilai');
define('_DOWNLOADVOTE','Beri Nilai!');
define('_DONLYREGUSERSMODIFY','Only registered users can suggest downloads modifications. Please <a href="'.getlink("Your_Account").'">register or login</a>.');
define('_REQUESTDOWNLOADMOD','Permintaan Modifikasi File Download');
define('_DOWNLOADID','ID');
define('_DLETSDECIDE','Masukkan dari member seperti anda sangat membantu pengunjung lainnya untuk memutuskan apa yang harus mereka download.');
define('_DRATENOTE4','Anda bisa melihat daftar <a href="'.getlink("Downloads&amp;d_op=TopRated").'">Download Terbaik</a>.');
define('_POPULAR','Populer');
define('_TOPRATED','Terbaik');
define('_ADDITIONALDET','Detil Tambahan');
define('_EDITORREVIEW','Editorial');
define('_REPORTBROKEN','Laporkan Link Salah');
define('_AND','dan');
define('_INDB','dalam database');
define('_INSTRUCTIONS','Instruksi');
define('_USERANDIP','Nama dan alamat IP anda sudah tercatat, mohon jangan mencoba mengacaukan sistem kami.');
define('_LDESCRIPTION','Deskripsi: (maks 255 karakter)');
define('_CHECKFORIT','Sayang sekali anda tidak memasukkan alamt email anda.');
define('_LASTWEEK','Pekan Lalu');
define('_LAST30DAYS','30 hari terakhir');
define('_1WEEK','1 pekan');
define('_2WEEKS','2 pekan');
define('_30DAYS','30 hari');
define('_ADDEDON','Dimasukkan');
define('_RATING','Nilai');
define('_DETAILS','Detil');
define('_OF','dari');
define('_TVOTESREQ','nilai minimum yang dibutuhkan');
define('_SHOWTOP','Tampilkan Terbaik');
define('_MOSTPOPULAR','Populer - Top');
define('_OFALL','dari semua');
define('_POPULARITY','Popularitas');
define('_SELECTPAGE','Pilih Halaman');
define('_MAIN','Utama');
define('_NEWTODAY','Yang baru hari ini');
define('_NEWLAST3DAYS','Terbaru dalam 3 hari terakhir');
define('_NEWTHISWEEK','Terbaru dalam pekan ini');
define('_POPULARITY1','Popularitas (Rendah - Tinggi)');
define('_POPULARITY2','Popularitas (TInggi - Rendah)');
define('_TITLEAZ','Judul (A - Z)');
define('_TITLEZA','Judul (Z - A)');
define('_RATING1','Nilai (Rendah - Tinggi)');
define('_RATING2','Nilai (TInggi - Rendah)');
define('_SEARCHRESULTS4','Hasil pencarian');
define('_USUBCATEGORIES','Sub kategori');
define('_TRY2SEARCH','Cari');
define('_INOTHERSENGINES','di mesin pencari lainnya');
define('_EDITORIAL','Editorial');
define('_EDITORIALBY','Editorial oleh');
define('_NOEDITORIAL','Belum ada editorial untuk situs ini.');
define('_RATETHISSITE','Beri Nilai File Ini');
define('_ISTHISYOURSITE','Ini milik anda?');
define('_ALLOWTORATE','Sertakan fasilitas penilai pada situs anda ke direktori kami!');
define('_OVERALLRATING','Nilai Seluruhnya');
define('_TOTALOF','Total');
define('_USER','User');
define('_USERAVGRATING','Nilai Rata-rata dari User');
define('_NUMRATINGS','# Nilai');
define('_REGISTEREDUSERS','Users');
define('_NUMBEROFRATINGS','Jumlah Nilai');
define('_NOREGUSERSVOTES','Tidak ada member yang menilai');
define('_BREAKDOWNBYVAL','Penjabaran Nilai');
define('_LTOTALVOTES','total penilai');
define('_HIGHRATING','Nilai Tertinggi');
define('_LOWRATING','Nilai Terendah');
define('_NUMOFCOMMENTS','Jumlah Komentar');
define('_WEIGHNOTE','* Catatan: Direktori ini bisa membedakan penilaian dari member dan bukan member');
define('_NOUNREGUSERSVOTES','Tidak ada pengunjung non-member yang memberi nilai');
define('_WEIGHOUTNOTE','* Catatan: Direktori ini bisa membedakan penilaian dari member dari penilaian dari luar (situs) direktori ini');
define('_NOOUTSIDEVOTES','Tidak ada penilai dari luar');
define('_OUTSIDEVOTERS','Penilai dari luar');
define('_UNREGISTEREDUSERS','Bukan member');
define('_PROMOTEYOURSITE','Promosikan Situs Anda');
define('_PROMOTE01','Anda mungkin tertarik pada beberapa pilihan \'Fasilitas Penilai\' yang ada. Anda bisa memilih gambar atau form penilaian pada situs anda ke direktori kami untuk menambah jumlah kunjungan situs anda:');
define('_TEXTLINK','Text Link');
define('_PROMOTE02','Salah satu cara adalah dengan teks hiperlink sederhana:');
define('_HTMLCODE1','Berikut adalah kode HTML yang harus anda gunakan:');
define('_THENUMBER','Nomor');
define('_IDREFER','pada kode HTML merujuk pada ID situs anda dalam database kami. Pastikan nomor ini sesuai dengan situs anda.');
define('_BUTTONLINK','Link Tombol');
define('_PROMOTE03','Jika anda menginginkan selain teks hiperlink, anda bisa menggunakan link tombol kecil ini:');
define('_RATEIT','Beri Nilai Situs ini!');
define('_HTMLCODE2','Kode HTML untuk tombol di atas adalah:');
define('_REMOTEFORM','Form penilaian dari luar');
define('_PROMOTE04','Jika anda memanipulasi penilaian ini, kami akan menghapus situs anda. Berikut adalah tampilan form.');
define('_VOTE4THISSITE','Voting untuk situs ini!');
define('_HTMLCODE3','Dengan menggunakan form ini, pengunjung situs anda bisa memberi nilai situs anda ke direktori kami. Form diatas hanya contoh, tetapi anda bisa menyalin kode HTML dibawah ini dan menyertakannya pada halaman situs anda:');
define('_PROMOTE05','Terima kasih! dan selamat mencoba!');
define('_THANKSBROKEN','Terima kasih atas bantuan anda menjaga integritas direktori kami.');
define('_SECURITYBROKEN','Demi alasan keamanan, nama dan alamat IP anda dicatat untuk sementara.');
define('_THANKSFORINFO','Terima kasih atas informasi anda.');
define('_LOOKTOREQUEST','Kami akan memeriksa laporan anda.');
define('_SENDREQUEST','Kirim');
define('_THANKSTOTAKETIME','Terima kasih atas waktu anda memberi nilai sebuah situs pada Direktori');
define('_RETURNTO','Kembali ke');
define('_RATENOTE1','Mohon tidak menilai link yang sama lebih dari satu kali.');
define('_RATENOTE2','Skala 1 - 10, di mana 1 terendah dan 10 tertinggi.');
define('_RATENOTE3','Harap mengisi dengan obyektif, jika seseorang mendapat nilai 10 atau 1 penilaian ini tidak banyak berguna.');
define('_RATENOTE5','Harap tidak mengisi situs sendiri atau situs kompetitor anda.');
define('_YOUAREREGGED','Anda adalah member dan sudah login.');
define('_FEELFREE2ADD','Silakan memberi komentar.');
define('_YOUARENOTREGGED','Anda bukan member atau mungkin belum login.');
define('_IFYOUWEREREG','If you were registered you could make comments on this website.');
define('_MODIFY','Ubah');
define('_COMPLETEVOTE1','Masukkan anda sangat kami hargai.');
define('_COMPLETEVOTE2','Anda sudah memberi nilai dalam $anonwaitdays hari terakhir.');
define('_COMPLETEVOTE3','Beri nilai satu kali saja.<br>nSemua masukkan dicatat dan diperiksa.');
define('_COMPLETEVOTE4','Anda tidak bisa memberi nilai dari link milik anda sendiri.<br>nSemua masukkan dicatat dan diperiksa.');
define('_COMPLETEVOTE5','Tidak ada nilai');
define('_COMPLETEVOTE6','Kami hanya mengambil satu penilai dengan satu alamat IP setiap $outsidewaitdays hari.');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDDURL','Add this URL');
define('_EZTRANSFERDOWNLOAD','Transfer');
define('_EZTRANSFERDOWNLOADS','Transfer all downloads from category');
define('_DELEZDOWNLOADSCATWARNING','WARNING : Are you sure you want to delete this category? You will delete all sub-categories and attached downloads as well!');
define('_DELCONTENTCAT','WARNING: Are you sure you want to delete this category? Pages under this category, if they exist, will not be removed, but will not be attached to any category.');
define('_DELCATEGORY','Delete Category');
define('_DOWNLOADTITLE','Download Title');
define('_DOWNLOADSINDB','Downloads in our Database');
define('_DOWNLOADSWAITINGVAL','Downloads Waiting for Validation');
define('_CLEANDOWNLOADSDB','Clean Downloads Votes');
define('_BROKENDOWNLOADSREP','Broken Downloads Reports');
define('_DOWNLOADMODREQUEST','Download Modification Requests');
define('_ADDNEWDOWNLOAD','Add a New Download');
define('_MODDOWNLOAD','Modify a Download');
define('_WEBDOWNLOADSADMIN','Web Downloads Administration');
define('_DNOREPORTEDBROKEN','No reported broken downloads.');
define('_DUSERREPBROKEN','User Reported Broken Downloads');
define('_DIGNOREINFO','Ignore (Deletes all <b><i>requests</i></b> for a given download)');
define('_DDELETEINFO','Delete (Deletes <b><i>broken download</i></b> and <b><i>requests</i></b> for a given download)');
define('_DOWNLOADOWNER','Download Owner');
define('_DUSERMODREQUEST','User Download Modification Requests');
define('_DOWNLOADVALIDATION','Download Validation');
define('_CHECKALLDOWNLOADS','Check ALL Downloads');
define('_VALIDATEDOWNLOADS','Validate Downloads');
define('_NEWDOWNLOADADDED','New Download added to the Database');
