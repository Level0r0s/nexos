<?php
/*************************************************
 *                         lang_bbcode.php [Turkish]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Source: /cvs/l10n/turkish/Forums/lang_bbcode.php,v $
 *   $Revision: 9.2 $
 *   $Author: djmaze $
 *   $Date: 2006/02/12 16:02:32 $
 *Encoding test n-array summation ∑ latin ae with acute ǽ
 *********************************************************/

/*************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *********************************************************/

//
// Translation by:
//
// Onur Turgay (postexitus)  :: onurturgay@isnet.net.tr :: http://welcome.to/aaal2000
// Erdem Corapcioglu (erdem) :: erdem@smtg.org         :: http://smtg.org
//
// For questions and comments use: onurturgay@isnet.net.tr
//


$faq[] = array("--","Giriş");
$faq[] = array("BBCode nedir?", "BBCode HTML'in özel bir uygulamasıdır. Forum'a yazdığınız mesajlarda BBCode kullanabilme imkanını pano yöneticisi saptar. Ayrıca mesaj gönderme formundaki seçenekler sayesinde dilediğiniz mesajlarda BBCode'ı iptal etmeniz mümkündür. BBCode, HTML'e benzer tarzdadır fakat tag'ler &lt; ve &gt; yerine köşeli parantez içine alınır. Ayrıca nelerin nasıl görüntülendiği daha iyi kontrol edilebilir. Mesajlarınıza BBCode eklemek için mesaj gövdesi üzerinde bulunan araç çubuğunu kullanmanız işi çok daha kolaylaştırır (araç çubuğu görünümü kullandığınız tema'ya bağlıdır). Ayrıca alttaki rehberi faydalı bulabilirsiniz.");

$faq[] = array("--","Metin Biçimini Değiştirme");
$faq[] = array("Kalın, italik veya altıçizili yazılar nasıl yazılır?", "BBCode, metnin temel biçimlemesini kolayca değiştirmenizi sağlayan tag'lere sahiptir. Bunu gerçekleştirmek için şu yöntemler kullanılır: <ul><li>Metnin belirli bir kısmını kalın harflerle görüntülemek için <b>[b][/b]</b> tag'leri içine alın, örn. <br /><br /><b>[b]</b>Hello<b>[/b]</b><br /><br />yazılınca <b>Hello</b> olarak görüntülenir.</li><li>Altıçizili yazılar için <b>[u][/u]</b> kullanın, örn.: <br /><br /><b>[u]</b>Good Morning<b>[/u]</b><br /><br />yazılınca <u>Good Morning</u> olarak görüntülenir.</li><li>Metni italik yazmak için <b>[i][/i]</b> kullanın, örn. <br /><br />This is <b>[i]</b>Great!<b>[/i]</b><br /><br />yazılınca sonuç This is <i>Great!</i> olur.</li></ul>");
$faq[] = array("Yazıların rengi veya boyutu nasıl değiştirilir?", "Yazıların renk veya boyutunu değiştirmek için alttaki tag'ler kullanılabilir. Elde edilen sonuç, kullanılan browser ve bilgisayar sistemine göre değişebilir, aklınızda bulunsun: <ul><li>Yazıların rengi, metni <b>[color=][/color]</b> tag'leri içine alarak değiştirilir. Belirli ingilizce renk isimlerini (örn. red, blue, yellow vs.) veya alternatif olarak 16 tabanlı sayı sisteminde kodlanmış üç rakamlı renk kodunu yazabilirsiniz (örn. #FFFFFF, #000000). Metni örneğin kırmızı harflerle yazmak için:<br /><br /><b>[color=red]</b>Hello!<b>[/color]</b><br /><br />veya<br /><br /><b>[color=#FF0000]</b>Hello!<b>[/color]</b><br /><br />aynı şekilde görüntülenir: <span style=\"color:red\">Hello!</span></li><li>Karakterlerin boyutunu benzer şekilde <b>[size=][/size]</b> kullanarak değiştirebilirsiniz. Bu tag kullandığınız tema'ya bağlıdır. Karakterlerin pixel olarak boyutunu yazmanız önerilir. Bu rakam 1 ile başlayıp (gözle görülmeyecek kadar küçük), en fazla 29 (çok büyük) olabilir. Örnek:<br /><br /><b>[size=9]</b>KÜÇÜK<b>[/size]</b><br /><br />genelde şu sonucu verir: <span style=\"font-size:9px\">KÜÇÜK</span><br /><br />öte yandan:<br /><br /><b>[size=24]</b>BÜYÜK!<b>[/size]</b><br /><br /><span style=\"font-size:24px\">BÜYÜK!</span> sonucunu verir.</li></ul>");
$faq[] = array("Biçimlendirme tag'lerini karıştırabilir miyim?", "Evet, mesela dikkati çekmek için şöyle yazabilirsiniz:<br /><br /><b>[size=18][color=red][b]</b>DİKKAT!<b>[/b][/color][/size]</b><br /><br />Bu yazı şu şekilde görüntülenir: <span style=\"color:red;font-size:18px\"><b>DİKKAT!</b></span><br /><br />Uzun metinleri bu şekilde yazmamanızı öneririz! Unutmayın ki, tag'lerin düzgün bir şekilde kapatılmasını temin etmek, metni gönderen kişi olarak sizin görevinizdir. Örneğin bu şekilde yazmak yanlıştır: <br /><br /><b>[b][u]</b>Tag'ler hatalı kapatılmış<b>[/b][/u]</b>");

$faq[] = array("--","Alıntı ile Cevap ve Eşaralıklı Yazıtipi");
$faq[] = array("Alıntı ile cevap yazma", "Bir metinden alıntı yapmanın iki ayrı yöntemi vardır: kaynak vererek veya vermeyerek.<ul><li>Bir mesaja cevap vermek için Alınıtı ile Cevap komutunu kullanırsanız, orijinal mesajın kendi mesajınıza <b>[quote=\"\"][/quote]</b> tag'leri arasında eklendiğini göreceksiniz. Bu yöntem, bir şahsı veya seçeceğiniz herhangi başka bir yeri kaynak vererek yanıt yazmanızı sağlar. Örneğin Ali isminde bir şahsın yazdıklarını iktibas etmek için şu şekilde yazmanız gerek: <br /><br /><b>[quote=\"Ali\"]</b>Ali'nin yazdığı yazılar...<b>[/quote]</b><br /><br />Sonuçta iktibas edilen kısmın önüne otomatik olarak Ali wrote: yazılır. Alıntı yaptığınız şahsın ismini tırnak işaretleri \"\" içine almayı unutmayın, tırnak işaretleri kullanmanız <b>şart</b>.</li><li>İkinci yöntem, kaynak vermeden alıntı yapmanızı sağlar. İlgili bölümü <b>[quote][/quote]</b> tag'leri içine almanız yeterli. Bu bölümün önünde Quote: yazısını göreceksiniz.</li></ul>");
$faq[] = array("Kaynak yazılım veya eşaralıklı yazıtipiyle görüntüleme", "Bir programlama dilinde yazılmış kaynak yazılım veya eşaralıklı yazıtipi (örn. Courier) gerektiren herhangi bir metni görüntülemek için, ilgili kısmı <b>[code][/code]</b> tag'leri içine almalısınız. Örn.: <br /><br /><b>[code]</b>echo \"This is some code\";<b>[/code]</b><br /><br /><b>[code][/code]</b> tag'leri arasına yazılan tüm biçimleme tag'leri (örn. [i], [b] gibi) iptal edilir.");

$faq[] = array("--","Liste Yaratma");
$faq[] = array("Madde imiyle liste", "BBCode rakamsız (madde imiyle) ve rakamlı olmak üzere iki türlü liste destekler. Bu listeler aslında HTML listelerine eşittir. Rakamsız liste, her maddeyi bir madde imiyle beraber satır başını biraz girintilenmiş olarak görüntüler. Rakamsız bir liste hazırlamak için <b>[list][/list]</b> tag'lerini kullanın ve her satırın başına <b>[*]</b> yazın. Örn. sevdiğiniz renklerin bir listesini şu şekilde hazırlayabilirsiniz:<br /><br /><b>[list]</b><br /><b>[*]</b>Kırmızı<br /><b>[*]</b>Mavi<br /><b>[*]</b>Sarı<br /><b>[/list]</b><br /><br />Sonuç olarak şu listeyi göreceksiniz:<ul><li>Kırmızı</li><li>Mavi</li><li>Sarı</li></ul>");
$faq[] = array("Rakamlı liste", "İkinci liste türü olan rakamlı listeyle, her satır başında görülen rakamı kontrol edebilirsiniz. Rakamlara göre sıralanmış bir liste için <b>[list=1][/list]</b> kullanmanız gerek. Alternatif olarak alfabe'ye göre sıralanmış bir liste için <b>[list=a][/list]</b> tag'lerini kullanabilirsiniz. Rakamsız listelerde olduğu gibi, her maddeyi <b>[*]</b> ile işaretlemeniz gerek. Örneğin:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Mağazaya git<br /><b>[*]</b>Yeni bilgisayar al<br /><b>[*]</b>Eve götür<br /><b>[/list]</b><br /><br />şu şekilde görüntülenir:<ol type=\"1\"><li>Mağazaya git</li><li>Yeni bilgisayar al</li><li>Eve götür</li></ol>Öte yandan alfabeye göre sıralanmış bir listeyi şu şekilde yazmanız gerekir:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Birinci seçenek<br /><b>[*]</b>İkinci seçenek<br /><b>[*]</b>Üçüncü seçenek<br /><b>[/list]</b><br /><br />Sonuç:<ol type=\"a\"><li>Birinci seçenek</li><li>İkinci seçenek</li><li>Üçüncü seçenek</li></ol>");

$faq[] = array("--", "Link (kısayol) Yaratma");
$faq[] = array("Ayrı bir siteye link verme", "BBCode link (URL) yaratmak için değişik yöntemleri destekler.<ul><li>Birinci yöntem <b>[url=][/url]</b> tag'iyledir. = işaretinin arkasına yazılanlar link olarak çalışır. Örneğin phpBB.com'a link vermek için şu şekilde yazın:<br /><br /><b>[url=http://phpbb.com/]</b>phpBB'yi ziyaret edin!<b>[/url]</b><br /><br />Sonuçta şu linki göreceksiniz: <a href=\"http://phpbb.com/\" target=\"_blank\">phpBB'yi ziyaret edin!</a> Bu linki tıklayınca ayrı bir pencere açılır. Böylece kullanıcı forum'u gezmeye devam edebilir.</li><li>Link adresinin gösterilmesini istiyorsanız, şu şekildede yazabilirsiniz:<br /><br /><b>[url]</b>http://phpbb.com/<b>[/url]</b><br /><br />Sonuçta şu linki göreceksiniz: <a href=\"http://phpbb.com/\" target=\"_blank\">http://phpbb.com/</a></li><li>phpBB ayrıca <i>Sihirli Linkler</i> denen bir işleme sahip. Bunun sayesinde, kurallara uygun bir şekilde yazılan her link adresi otomatik olarak link'e çevrilir, herhangi bir tag, hatta http:// yazmanıza gerek kalmaz. Örn. phpbb.com yazınca, izlenim sayfasında otomatik olarak <a href=\"http://phpbb.com/\" target=\"_blank\">phpbb.com</a> olarak görüntülenir.</li><li>Aynı işlem email adresleri için uygulanır. Dilerseniz özel olarak bir adres belirleyebilirsiniz, örn.:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />yazılınca şu şekilde görüntülenir: <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a> Veya basitçe no.one@domain.adr yazabilirsiniz ve mesajınız görüntülendiğinde bu kısım otomatik olarak link'e çevrilir.</li></ul>Bütün BBCode tag'leri gibi, link adreslerinide diğer tag'lerin içine alabilirsiniz, örn. <b>[img][/img]</b> (bir sonraki madde bakın), <b>[b][/b]</b>, vs. Biçimleme tag'lerinde olduğu gibi, tag'lerin düzgün bir şekilde sırasıyla kapatılmasını kendiniz sağlamalısınız, örn.:<br /><br /><b>[url=http://phpbb.com/][img]</b>http://phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br />doğru <u>değildir</u> ve hatta mesajınızın


 silinmesine yol açabilir, bu konuda dikkatli olmanız gerek.");

$faq[] = array("--", "Mesajlarda Resim Görüntüleme");
$faq[] = array("Bir mesaja resim ekleme", "BBCode mesajlarınıza resim eklemek için bir tag'e sahiptir. Bu tag'i kullanırken iki önemli noktayı dikkate almanız gerek: birçok kullanıcı mesajlarda çok sayıda resmin görüntülenmesini hoş karşılamıyor. Ayrıca kullanmak istediğiniz resme internet üzerinden ulaşılabilmeli (örn. bu resmin kendi bilgisayarınızda bulunması yeterli değildir). Şu anda phpBB üzerinden resim kaydetme imkanı yoktur (bu konular muhtemelen phpBB'nin bir sonraki sürümünde ele alınacak). Bir resmi görüntülemek için, resmin adresini <b>[img][/img]</b> tag'leri içine almalısınız. Örn.:<br /><br /><b>[img]</b>http://phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Bir önceki maddede belirtildiği gibi, resmi dilerseniz <b>[url][/url]</b> tag'leri içine alabilirsiniz. Örn.:<br /><br /><b>[url=http://phpbb.com/][img]</b>http://phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />yazınca şu sonucu verir:<br /><br /><a href=\"http://phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Diğer Konular");
$faq[] = array("Kendi tag'lerimi ekleyebilir miyim?", "Hayır, maalesef phpBB 2.0 sürümünde böyle bir imkan yok. Bir sonraki sürümde özelleştirilmiş BBCode tag'leri sunmayı planlıyoruz.");

//
// This ends the BBCode guide entries
//