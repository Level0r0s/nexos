<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/turkish/downloads.php,v $
  $Revision: 9.7 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:40:06 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','The download you\'ve requested doesn\'t exists.');
define('_CATEGORIES','Kategori');
define('_LVOTES','oy');
define('_TOTALVOTES','Toplam Oy:');
define('_THEREARE','Veritabanında');
define('_NOMATCHES','Uygun sonuç bulunamadı');
define('_SCOMMENTS','Yorum');
define('_UNKNOWN','Bilinmeyen');
define('_AUTHORNAME','Yazarın İsmi');
define('_AUTHOREMAIL','Yazarın Emaili');
define('_DOWNLOADNAME','Program İsmi');
define('_ADDTHISFILE','Dosya Ekle');
define('_INBYTES','byte');
define('_FILESIZE','Boyutu');
define('_VERSION','Sürüm');
define('_AUTHOR','Yazar');
define('_HOMEPAGE','Ana Sayfa');
define('_DOWNLOADNOW','Bu dosyayı indir!');
define('_RATERESOURCE','Puan Ver');
define('_FILEURL','Dosya Bağlantısı');
define('_ADDDOWNLOAD','Dosya Ekle');
define('_DOWNLOADSMAIN','Dosyalar Anasayfası');
define('_DOWNLOADCOMMENTS','Dosya Yorumları');
define('_DOWNLOADSMAINCAT','Dosya Ana Kategorileri');
define('_ADDADOWNLOAD','Yeni Dosya Ekle');
define('_DSUBMITONCE','Bir dosyayı sadece bir kez ekleyin.');
define('_DPOSTPENDING','Gönderilen tüm dosyalar onay bekler.');
define('_RESSORTED','Şu anki sıralama');
define('_DOWNLOADSNOTUSER1','Kayıtlı değilsiniz veya giriş yapmamışsınız.');
define('_DOWNLOADSNOTUSER2','Kayıtlı olsaydınız dosya ekleyebilirdiniz.');
define('_DOWNLOADSNOTUSER3','Kayıtlı bir kullanıcı olmak kısa ve kolay bir işlemdir.');
define('_DOWNLOADSNOTUSER4','Neden bazı özelliklere erişim için kayıt gerekli?');
define('_DOWNLOADSNOTUSER5','Çünkü size en kaliteli içeriği sunabilmek için,');
define('_DOWNLOADSNOTUSER6','tüm öğelerin takımımız tarafından incelenip onaylanması gerekiyor.');
define('_DOWNLOADSNOTUSER7','Size sadece değerli bilgiler sunmak istiyoruz.');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink("Your_Account").'">Yeni Hesap</a>');
define('_DOWNLOADALREADYEXT','HATA: Bu URL veritabanında mevcut!');
define('_DOWNLOADNOTITLE','HATA: URL için bir BAŞLIK girmelisiniz!');
define('_DOWNLOADNOURL','HATA: URL için bir ADRES girmelisiniz!');
define('_DOWNLOADNODESC','HATA: URL için bir TANIM girmelisiniz!');
define('_DOWNLOADRECEIVED','Dosya öneriniz alındı. Teşekkürler!');
define('_NEWDOWNLOADS','Yeni Dosya');
define('_TOTALNEWDOWNLOADS','Toplam Yeni Dosya');
define('_DTOTALFORLAST','Toplam yeni dosya:');
define('_DBESTRATED','En İyi Dosyalar - Top');
define('_TRATEDDOWNLOADS','toplam puanlı dosya');
define('_SORTDOWNLOADSBY','Dosyaları Sırala:');
define('_DCATNEWTODAY','Bugün Eklenen Yeni Dosya');
define('_DCATLAST3DAYS','Son 3 Gün İçinde Eklenen Yeni Dosya');
define('_DCATTHISWEEK','Bu Hafta Eklenen Yeni Dosya');
define('_DDATE1','Tarih (Eskiler Başa)');
define('_DDATE2','Tarih (Yeniler Başa)');
define('_DOWNLOADS','dosya');
define('_DOWNLOADPROFILE','Dosya Profili');
define('_DOWNLOADRATINGDET','Dosya Puanlama Detayları');
define('_EDITTHISDOWNLOAD','Dosya Düzenle');
define('_DOWNLOADRATING','Dosya Puanları');
define('_DOWNLOADVOTE','Oy Ver!');
define('_DONLYREGUSERSMODIFY','Only registered users can suggest downloads modifications. Please <a href="'.getlink("Your_Account").'">register or login</a>.');
define('_REQUESTDOWNLOADMOD','Dosya Değişiklik İsteği');
define('_DOWNLOADID','Dosya ID');
define('_DLETSDECIDE','Sizin gibi kullanıcılardan gelen girişler diğer kullanıcıların iyi dosyaları seçmesine yardımcı olacaktır.');
define('_DRATENOTE4','<a href="'.getlink("Downloads&amp;d_op=TopRated").'">En İyi Kaynaklar</a> listesini görebilirsiniz.');
define('_POPULAR','Popüler');
define('_TOPRATED','En İyi');
define('_ADDITIONALDET','Ek Detaylar');
define('_EDITORREVIEW','Editör İncelemesi');
define('_REPORTBROKEN','Kırık Bağlantı Bildir');
define('_AND','ve');
define('_INDB','bulunuyor');
define('_INSTRUCTIONS','Açıklamalar');
define('_USERANDIP','Kullanıcı adı ve IP adresi kaydedilir. Bu yüzden sistemi kötüye kullanmayın.');
define('_LDESCRIPTION','Tanım: (En fazla 255 karakter)');
define('_CHECKFORIT','Bir email adresi yazmadınız. Yine de bağlantınız kontrol edilecek.');
define('_LASTWEEK','Geçen Hafta');
define('_LAST30DAYS','Son 30 Gün');
define('_1WEEK','1 Hafta');
define('_2WEEKS','2 Hafta');
define('_30DAYS','30 Gün');
define('_ADDEDON','Eklenme');
define('_RATING','Puan');
define('_DETAILS','Detaylar');
define('_OF','');
define('_TVOTESREQ','minimum oy gerekir');
define('_SHOWTOP','En İyi');
define('_MOSTPOPULAR','En Popüler - Top');
define('_OFALL','of all');
define('_POPULARITY','Popülerlik');
define('_SELECTPAGE','Sayfa Seçin');
define('_MAIN','Anasayfa');
define('_NEWTODAY','Bugün');
define('_NEWLAST3DAYS','Son 3 Gün');
define('_NEWTHISWEEK','Bu Hafta');
define('_POPULARITY1','Popülerlik (En Azdan En Yükseğe)');
define('_POPULARITY2','Popülerlik (En Yüksekten En Aza)');
define('_TITLEAZ','Başlık (A - Z)');
define('_TITLEZA','Başlık (Z - A)');
define('_RATING1','Puan (Düşükten Yükseğe)');
define('_RATING2','Paun (Yüksekten Düşüğe)');
define('_SEARCHRESULTS4','Arama Sonuçları:');
define('_USUBCATEGORIES','Alt-Kategori');
define('_TRY2SEARCH','');
define('_INOTHERSENGINES','için diğer arama motorlarını deneyin');
define('_EDITORIAL','Editörel');
define('_EDITORIALBY','Editörel:');
define('_NOEDITORIAL','Bu site için şu an editörel yok.');
define('_RATETHISSITE','Bu Dosyaya Puan Ver');
define('_ISTHISYOURSITE','Bu sizin dosyanız mı?');
define('_ALLOWTORATE','Diğer kullanıcıların sitenizden oy vermesini sağlayın!');
define('_OVERALLRATING','Puan');
define('_TOTALOF','Toplam');
define('_USER','Kullanıcı');
define('_USERAVGRATING','Ortalama Puan');
define('_NUMRATINGS','Puan Sayısı');
define('_REGISTEREDUSERS','Kayıtlı Kullanıcı');
define('_NUMBEROFRATINGS','Puan Sayısı');
define('_NOREGUSERSVOTES','Kayıtlı Kullanıcı Oyu Yok');
define('_BREAKDOWNBYVAL','Değer Bakımından Oylar');
define('_LTOTALVOTES','toplam oy');
define('_HIGHRATING','Yüksek Puan');
define('_LOWRATING','Alçak Puan');
define('_NUMOFCOMMENTS','Yorum Sayısı');
define('_WEIGHNOTE','* Not: Bu kaynak kayıtlı ve kayıtsız oylar ağırlıklıdır');
define('_NOUNREGUSERSVOTES','Kayıtsız Kullanıcı Oyu Yok');
define('_WEIGHOUTNOTE','* Not: Bu kaynak kayıtlı ve dışarıdan oylar ağırlıklıdır');
define('_NOOUTSIDEVOTES','Dışarıdan Oy Yok');
define('_OUTSIDEVOTERS','Dışarıdan Oylayanlar');
define('_UNREGISTEREDUSERS','Kayıtsız Kullanıcılar');
define('_PROMOTEYOURSITE','Sitenizi Tanıtın');
define('_PROMOTE01','Belki \'Dosyaya Puan Ver\' seçeneklerimizden biriyle ilgilenebilirsiniz. Bunlar kaynağınıza bir grafik (veya bir form) koyarak aldığınız oy sayısını artırmayı amaçlıyor. Lütfen aşağıdaki seçeneklerden birini seçin:');
define('_TEXTLINK','Metin Bağlantı');
define('_PROMOTE02','Puanlama formuna ulaşmanın basit bir yolu metin bağlantıdır:');
define('_HTMLCODE1','Bu durumda kullanmanız gereken HTML kodu aşağıdadır:');
define('_THENUMBER','Sayı');
define('_IDREFER','HTML kaynağı referanslarında $sitename veritabanındaki site ID\'niz bulunur. Bu numaranın doğruluğundan emin olun.');
define('_BUTTONLINK','Buton Bağlantı');
define('_PROMOTE03','Basit bir metin bağlantıdan daha fazlasını arıyorsanız, küçük bir buton bağlantı kullanmak isteyebilirsiniz:');
define('_RATEIT','Bu Dosyaya Puan Verin!');
define('_HTMLCODE2','Yukarıdaki buton için kaynak kodu:');
define('_REMOTEFORM','Uzaktan Puanlama Formu');
define('_PROMOTE04','Bunda hile yapmaya çalışırsanız bağlantınız silinir. Uzaktan puanlama formu buna benzer.');
define('_VOTE4THISSITE','Bu Dosyaya Oy Verin!');
define('_HTMLCODE3','Bu formu kullanarak kullanıcılar kaynağınızı kendi sitenizden oylayabilirler. Yukarıdaki form pasiftir, fakat aşağıdaki kodu sitenize kopyalarsanız çalışacaktır:');
define('_PROMOTE05','Teşekkürler! ve puanlamalarda başarılar!');
define('_THANKSBROKEN','Bu dizin çalışmalarına katkıda bulunduğunuz için teşekkürler.');
define('_SECURITYBROKEN','Güvenlik nedeniyle kullanıcı adı ve IP\'niz geçici olarak kaydedilecek.');
define('_THANKSFORINFO','Bilgi için teşekkürler.');
define('_LOOKTOREQUEST','İsteğiniz kısa süre içinde değerlendirilecek.');
define('_SENDREQUEST','İstek Gönder');
define('_THANKSTOTAKETIME','Burada bir dosya puanladığınız için teşekkürler:');
define('_RETURNTO','Geri Dön:');
define('_RATENOTE1','Lütfen bir kaynağı bir kereden fazla oylamayın.');
define('_RATENOTE2','Ölçü 1 - 10 arasıdır, 1 zayıf ve 10 mükemmel.');
define('_RATENOTE3','Lütfen objektif olun, herkes 1 veya 10 alırsa, puanlar kullanışlı olamaz.');
define('_RATENOTE5','Kendi dosyanızı oylamayın.');
define('_YOUAREREGGED','Kayıtlı kullanıcısınız ve giriş yapmışsınız.');
define('_FEELFREE2ADD','Bu site hakkında yorum ekleyebilirsiniz.');
define('_YOUARENOTREGGED','Kayıtlı değilsiniz veya giriş yapmamışsınız.');
define('_IFYOUWEREREG','Kayıtlı olsaydınız dosya hakkında yorum yazabilecektiniz.');
define('_MODIFY','Değiştir');
define('_COMPLETEVOTE1','Oyunuz değerlendirilmiştir.');
define('_COMPLETEVOTE2','Son $anonwaitdays gün içinde zaten oyunuzu kullanmışsınız.');
define('_COMPLETEVOTE3','Sadece bir kez oy kullanın.<br>Tüm oylar keydedilir ve incelenir.');
define('_COMPLETEVOTE4','Kendi önerdiğiniz link için oy kullanamazsınız.<br>Tüm oylar keydedilir ve incelenir.');
define('_COMPLETEVOTE5','Puan seçilmemiş - oy verilmedi');
define('_COMPLETEVOTE6','Her IP adresi $outsidewaitdays gün içinde sadece bir oy kullanabilir.');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDDURL','Add this URL');
define('_EZTRANSFERDOWNLOAD','Transfer');
define('_EZTRANSFERDOWNLOADS','Bu kategoriden tüm dosyaları taşı:');
define('_DELEZDOWNLOADSCATWARNING','UYARI : Bu kategoriyi silmek istediğinizden emin misiniz? Tüm alt-kategorileri ve ilgili dosyaları da silmiş olacaksınız!');
define('_DELCONTENTCAT','UYARI: Bu kategoriyi silmek istediğinizden emin misiniz? Eğer varsa, bu kategori altındaki sayfalar silinmeyecek, fakat herhangi bir kategoriye de bağlanmayacaklar.');
define('_DELCATEGORY','Kategoriyi Sil');
define('_DOWNLOADTITLE','Dosya Başlığı');
define('_DOWNLOADSINDB','dosya bulunuyor');
define('_DOWNLOADSWAITINGVAL','Onay Bekleyen Dosyalar');
define('_CLEANDOWNLOADSDB','Dosya Oylarını Temizle');
define('_BROKENDOWNLOADSREP','Kırık Dosya Raporları');
define('_DOWNLOADMODREQUEST','Dosya Değişiklik İstekleri');
define('_ADDNEWDOWNLOAD','Yeni Dosya Ekle');
define('_MODDOWNLOAD','Dosya Değiştir');
define('_WEBDOWNLOADSADMIN','Dosyalar Yönetimi');
define('_DNOREPORTEDBROKEN','Kırık dosya raporu yok.');
define('_DUSERREPBROKEN','Kırık Dosya Raporları');
define('_DIGNOREINFO','Önemseme (Verilen dosya için tüm <b><i>istekleri</i></b> siler)');
define('_DDELETEINFO','Sil (Verilen dosya için <b><i>kırık dosya</i></b> ve <b><i>istekleri</i></b> siler)');
define('_DOWNLOADOWNER','Dosya Sahibi');
define('_DUSERMODREQUEST','Dosya Değişiklik İstekleri');
define('_DOWNLOADVALIDATION','Dosya Onayı');
define('_CHECKALLDOWNLOADS','TÜM Dosyları İşaretle');
define('_VALIDATEDOWNLOADS','Dosyaları Onayla');
define('_NEWDOWNLOADADDED','Yeni Dosya Eklendi');
