<?php
/*************************************************
 *                         lang_bbcode.php [finnish]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Source: /cvs/l10n/finnish/Forums/lang_bbcode.php,v $
 *   $Revision: 9.2 $
 *   $Author: djmaze $
 *   $Date: 2006/02/12 16:01:50 $
 *
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
//	Translation produced by Jorma Aaltonen (bullitt)
//	http://pitro.com/
//


//
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\";
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//

$faq[] = array("--","Esittely");
$faq[] = array("Mit&auml; on BBCode?", "BBcode on erityinen muoto HTML:st&auml;. Se, voitko k&auml;ytt&auml;&auml; BBCodea viesteiss&auml; riippuu yll&auml;pidosta. Lis&auml;ksi voit poistaa BBCoden viestikohtaisesti viestin yll&auml;pitoruudulla. BBCode itsess&auml;&auml;n muistuttaa HTML:&auml;&auml;, tagit suljetaan hakasuluilla [ ja ] eik&auml; &lt; ja &gt; ja se antaa paremmaan mahdollisuuden m&auml;&auml;ritell&auml; mit&auml; ja miten asiat n&auml;ytet&auml;&auml;n. K&auml;ytett&auml;v&auml;st&auml; mallisivusta riippuen  voit huomata, ett&auml; BBCoden k&auml;ytt&ouml; viesteiss&auml; on helpompaa hiirell&auml; toimivan liittym&auml;n kautta viestialueen yl&auml;puolella viestiruudulla. T&auml;st&auml; huolimatta seuraava opas voi olla hy&ouml;dyllinen.");

$faq[] = array("--","Tekstin muotoilu");
$faq[] = array("Kuinka tehd&auml;&auml;n lihavoitu, kursivoitu ja alleviivattu teksti", "BBCode sis&auml;lt&auml;&auml; tagit, joilla voi nopeasti muuttaa tekstisi perustyylin. T&auml;m&auml; saavutetaan seuraavin keinoin: <ul><li>Lihavoidaksesi tekstin sulje se tagein <b>[b][/b]</b>, esim. <br /><br /><b>[b]</b>Tervehdys<b>[/b]</b><br /><br />n&auml;kyy <b>Tervehdys</b></li><li>Alleviivaukseen k&auml;yt&auml;t <b>[u][/u]</b>, esimerkiksi:<br /><br /><b>[u]</b>Hyv&auml;&auml; huomenta<b>[/u]</b><br /><br />n&auml;kyy <u>Hyv&auml;&auml; huomenta</u></li><li>Kursivoituun tekstiin k&auml;yt&auml;t <b>[i][/i]</b>, esim.<br /><br />T&auml;m&auml; on <b>[i]</b>Hienoa!<b>[/i]</b><br /><br />N&auml;kyy, T&auml;m&auml; on <i>Hienoa!</i></li></ul>");
$faq[] = array("Kuinka muutetaan tekstin v&auml;ri&auml; tai kokoa", "Seuraavilla tageilla voit muuttaa tekstin v&auml;ri&auml; tai kokoa. Muista, ett&auml; lopputulos riippuu lukijan selaimesta ja j&auml;rjestelm&auml;st&auml;: <ul><li>Muutat tekstin v&auml;rin k&auml;ytt&auml;m&auml;ll&auml; ymp&auml;rill&auml; <b>[color=][/color]</b>. Voit k&auml;ytt&auml;&auml; joko tavallista v&auml;rin nime&auml; (esim. red, blue, yellow, jne.) tai vastaavaa heksadesimaaliarvoa, esim. #FFFFFF, #000000. Jos haluat esim. punaista teksti&auml; voit k&auml;ytt&auml;&auml;:<br /><br /><b>[color=red]</b>Tervehdys!<b>[/color]</b><br /><br />tai<br /><br /><b>[color=#FF0000]</b>Tervehdys!<b>[/color]</b><br /><br />n&auml;ytt&auml;v&auml;t molemmat <span style=\"color:red\">Tervehdys!</span></li><li>Tekstin kokoa muutetaan samalla tavalla k&auml;ytt&auml;m&auml;ll&auml; <b>[size=][/size]</b>. T&auml;m&auml;n tagin toiminta riippuu k&auml;yt&ouml;ss&auml; olevasta mallisivusta, suositeltu tapa on kuitenkin k&auml;ytt&auml;&auml; numeerista arvoa esitt&auml;m&auml;&auml;n tekstin koko pikselein&auml;, aloittaen 1:st&auml; (niin pient&auml;, ett&auml; sit&auml; ei voi lukea) p&auml;&auml;ttyen 29:&auml;&auml;n (eritt&auml;in iso). Esimerkiksi:<br /><br /><b>[size=9]</b>PIENI<b>[/size]</b><br /><br />on normaalisti <span style=\"font-size:9px\">PIENI</span><br /><br />kun taas:<br /><br /><b>[size=24]</b>ISO!<b>[/size]</b><br /><br />n&auml;kyy <span style=\"font-size:24px\">ISO!</span></li></ul>");
$faq[] = array("Voinko yhdistell&auml; muotoilutageja?", "Tottakai voit. Esim. jos haluat her&auml;tt&auml;&auml; jonkun huomion voit kirjoittaa:<br /><br /><b>[size=18][color=red][b]</b>LUE MINUT!<b>[/b][/color][/size]</b><br /><br />t&auml;m&auml; n&auml;kyy <span style=\"color:red;font-size:18px\"><b>LUE MINUT!</b></span><br /><br />Emme suosittele, ett&auml; k&auml;yt&auml;t paljoa n&auml;in muotoiltua teksti&auml;! Muista, ett&auml; sin&auml; viestin kirjoittana vastaat siit&auml;, ett&auml; tagit on suljettu kuten pit&auml;&auml;. Esimerkiksi seuraava on v&auml;&auml;rin:<br /><br /><b>[b][u]</b>T&auml;m&auml; on v&auml;&auml;rin<b>[/b][/u]</b>");

$faq[] = array("--","Lainaaminen ja asettelultaan kiinte&auml;n tekstin k&auml;ytt&ouml;");
$faq[] = array("Tekstin lainaaminen vastauksissa", "Teksti&auml; voi lainata kahdella tavalla, viittauksella ja ilman.<ul><li>Kun k&auml;yt&auml;t Lainaa toimintoa vastatessasi viestiin foorumissa huomaa, ett&auml; teksti lis&auml;t&auml;&auml;n viesti-ikkunaan suljettuna tageihin <b>[quote=\"\"][/quote]</b> . T&auml;m&auml; menetelm&auml; antaa sinulle mahdollisuuden lainata viitaten henkil&ouml;&ouml;n tai mihin tahansa haluat! Esim. lainataksesi viesti&auml; Herra Virtaselta kirjoitat:<br /><br /><b>[quote=\"Herra Virtanen\"]</b>Herra Virtasen teksti tulisi t&auml;h&auml;n<b>[/quote]</b><br /><br />Lopputuloksena lis&auml;tt&auml;isiin automaattisesti, Herra Virtanen kirjoitti: ennen varsinaista teksti&auml;. Muista, ett&auml; sinun <b>t&auml;ytyy</b> lis&auml;t&auml; lainausmerkit \"\" lainattavan nimen ymp&auml;rille, ne ovat pakolliset.</li><li>Toinen tapa sallii sinun lainata jotain sokkona. T&auml;t&auml; varten suljet tekstin tageihin <b>[quote][/quote]</b> . Viestiss&auml; n&auml;kyy vain, Lainaus: ennen varsinaista teksti&auml;.</li></ul>");
$faq[] = array("Koodin tai kiinte&auml;mittaisen tekstin n&auml;ytt&ouml;", "Jos haluat n&auml;ytt&auml;&auml; p&auml;tk&auml;n koodia tai jotain, joka vaatii kiinte&auml;n asettelun, esim. Courier tyyppinen fontti, sinun tulee ymp&auml;r&ouml;id&auml; teksti tagein <b>[code][/code]</b> , esim.<br /><br /><b>[code]</b>echo \"T&auml;m&auml; on p&auml;tk&auml; koodia\";<b>[/code]</b><br /><br />Kaikki muotoilu tagien <b>[code][/code]</b> sis&auml;ll&auml; on s&auml;ilytetty kun viesti&auml; katsotaan.");

$faq[] = array("--","Luetteloiden luonti");
$faq[] = array("J&auml;rjest&auml;m&auml;tt&ouml;m&auml;n luettelon luonti", "BBCode tukee kahden tyyppisi&auml; luetteloita, j&auml;rjest&auml;m&auml;tt&ouml;mi&auml; ja j&auml;rjestettyj&auml;. Ne ovat p&auml;&auml;osin samat kuin vastaavat HTML:ss&auml;. J&auml;rjest&auml;m&auml;tt&ouml;m&auml;ss&auml; luettelossa jokainen alkio n&auml;ytet&auml;&auml;n per&auml;kk&auml;in luettelomerkill&auml; sisennettyn&auml;. J&auml;rjest&auml;m&auml;t&ouml;n lista luodaan k&auml;ytt&auml;m&auml;ll&auml; <b>[list][/list]</b> ja m&auml;&auml;rittelem&auml;ll&auml; jokainen luettelon alkio k&auml;ytt&auml;m&auml;ll&auml; <b>[*]</b>. Esimerkiksi luettelon lempiv&auml;reist&auml;si voisit tehd&auml;:<br /><br /><b>[list]</b><br /><b>[*]</b>Punainen<br /><b>[*]</b>Sininen<br /><b>[*]</b>Keltainen<br /><b>[/list]</b><br /><br />T&auml;m&auml; luo seuraavanlaisen luettelon:<ul><li>Punainen</li><li>Sininen</li><li>Keltainen</li></ul>");
$faq[] = array("J&auml;rjestetyn luettelon luonti", "Toinen luettelotyyppi, j&auml;rjestetty luettelo, antaa sinulle mahdollisuuden m&auml;&auml;ritell&auml; jokaisen alkion esitysmuoto. Luot j&auml;rjestetyn luettelon k&auml;ytt&auml;m&auml;ll&auml; <b>[list=1][/list]</b> numeroituun luetteloon ja vastaavasti <b>[list=a][/list]</b> aakkostettuun luetteloon. Kuten j&auml;rjest&auml;m&auml;tt&ouml;m&auml;ss&auml;kin luettelossa kaikki alkiot m&auml;&auml;ritell&auml;&auml;n k&auml;ytt&auml;m&auml;ll&auml; <b>[*]</b>. Esimerkiksi:<br /><br /><b>[list=1]</b><br /><b>[*]</b>K&auml;y kaupassa<br /><b>[*]</b>Osta uusi tietokone<br /><b>[*]</b>Kiroile koneelle kun se kaatuu<br /><b>[/list]</b><br /><br />luo seuraavanlaisen luettelon:<ol type=\"1\"><li>K&auml;y kaupassa</li><li>Osta uusi tietokone</li><li>Kiroile koneelle kun se kaatuu</li></ol>Kun taas aakkoselliseen listaan k&auml;ytt&auml;isit:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Ensimm&auml;inen vastaus<br /><b>[*]</b>Toinen vastaus<br /><b>[*]</b>Kolmas vastaus<br /><b>[/list]</b><br /><br />joka n&auml;ytt&auml;isi<ol type=\"a\"><li>Ensimm&auml;inen vastaus</li><li>Toinen vastaus</li><li>Kolmas vastaus</li></ol>");

$faq[] = array("--", "Linkkien luonti");
$faq[] = array("Linkkaaminen toiseen sivustoon", "phpBB BBCode tukee useaa tapaa luoda URI, Uniform Resource Indicators paremmin tunnettu URL.<ul><li>Ensimm&auml;inen niist&auml; k&auml;ytt&auml;&auml; <b>[url=][/url]</b> tagia, mit&auml; tahansa kirjoitat = merkin j&auml;lkeen tulkitaan URL:ksi. Esimerkiksi linkki phpBB.com sivuille tehd&auml;&auml;n:<br /><br /><b>[url=http://phpbb.com/]</b>Vieraile phpBB sivuilla!<b>[/url]</b><br /><br />T&auml;m&auml; loisi seuraavanlaisen linkin, <a href=\"http://phpbb.com/\" target=\"_blank\">Vieraile phpBB sivuilla!</a> Huomaat, ett&auml; linkki aukeaa uuteen ikkunaa joten k&auml;ytt&auml;j&auml; voi jatkaa foorumien selaamista niin halutessaan.</li><li>Jos haluat ett&auml; URL itse n&auml;kyy linkkin&auml; voit k&auml;ytt&auml;&auml;:<br /><br /><b>[url]</b>http://phpbb.com/<b>[/url]</b><br /><br />T&auml;m&auml; luo seuraavanlaisen linkin, <a href=\"http://phpbb.com/\" target=\"_blank\">http://phpbb.com/</a></li><li>Lis&auml;ksi phpBB:ss&auml; on ominaisuus jota kutsutaan nimell&auml; <i>Magic Links</i>, t&auml;m&auml; muuntaa kaikki muodollisesti oikein kirjoitetut URL:t linkiksi  ilman, ett&auml; sinun t&auml;ytyy m&auml;&auml;ritt&auml;&auml; tageja tai edes alkua http://. Esim. kirjoittamalla phpbb.com viestiisi luodaan automaattisesti <a href=\"http://phpbb.com/\" target=\"_blank\">phpbb.com</a> kun viesti&auml; katsotaan.</li><li>Sama p&auml;tee my&ouml;s s&auml;hk&ouml;postiosoitteisiin. Voit joko m&auml;&auml;ritell&auml; osoitteen esim:<br /><br /><b>[email]</b>ei.kukaan@domain.adr<b>[/email]</b><br /><br />joka n&auml;ytt&auml;&auml; <a href=\"emailto:ei.kukaan@domain.adr\">ei.kukaan@domain.adr</a> tai voit kirjoittaa pelk&auml;st&auml;&auml;n ei.kukaan@domain.adr viestiisi ja se muutetaan automaattisesti viesti&auml; katsottaessa.</li></ul>Kuten kaikissa BBCode tageissa voi ymp&auml;r&ouml;id&auml; URL:n mill&auml; tahansa muilla tageilla, kuten <b>[img][/img]</b> (katso seuraava kohta), <b>[b][/b]</b>, jne. Kuten muotoilutageissa muista, ett&auml; sinun teht&auml;v&auml;si on varmistaa, ett&auml; tagien alku ja sulkuj&auml;rjestys ovat oikein. Esim:<br /><br /><b>[url=http://phpbb.com/][img]</b>http://phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br /> <u>ei</u> ole oikein, mik&auml; voi johtaa viestisi poistamiseen. Joten ole tarkkana.");

$faq[] = array("--", "Kuvien n&auml;ytt&ouml; viesteiss&auml;");
$faq[] = array("Kuvan lis&auml;&auml;minen viestiin", "phpBB BBCode sis&auml;lt&auml;&auml; tagin kuvien lis&auml;&auml;miseen viestiin. T&auml;m&auml;n tagin k&auml;ytt&ouml;&ouml;n liittyy kaksi eritt&auml;in t&auml;rke&auml;&auml; asiaa; useat k&auml;ytt&auml;j&auml;t eiv&auml;t pid&auml; liiallisesta kuvien k&auml;yt&ouml;st&auml; ja toiseksi k&auml;ytett&auml;vien kuvien on jo oltava internetiss&auml; saatavilla (kuvatiedosto ei voi olla omalla koneellasi, ellet pid&auml; webserveri&auml;!). T&auml;ll&auml; hetkell&auml; ei ole mahdollista s&auml;ilytt&auml;&auml; kuvia paikallisesti phpBB:ll&auml; (t&auml;m&auml; pyrit&auml;&auml;n muuttamaan seuraavassa phpBB versiossa). N&auml;ytt&auml;&auml;ksesi kuvan sinun t&auml;ytyy ymp&auml;r&ouml;id&auml; kuvan URL <b>[img][/img]</b> tageilla. Esim:<br /><br /><b>[img]</b>http://phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Kuten yl&auml;puolella URL osiossa selostettiin voit ymp&auml;r&ouml;id&auml; kuvan <b>[url][/url]</b> tageilla halutessasi, esim.<br /><br /><b>[url=http://phpbb.com/][img]</b>http://phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />n&auml;ytt&auml;isi:<br /><br /><a href=\"http://phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Muut aiheet");
$faq[] = array("Voinko lis&auml;t&auml; omia tageja?", "Et, ainakaan suoraan phpBB 2.0:ssa. Harkitsemme muunneltavien BBCode tagien lis&auml;&auml;mist&auml; seuraavassa isommassa versiop&auml;ivityksess&auml;");

//
// This ends the BBCode guide entries
//