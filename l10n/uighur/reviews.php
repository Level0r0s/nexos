<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/uighur/reviews.php,v $
  $Revision: 9.6 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:40:06 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
define('_YOURNAME','Namingiz');
define('_SORTASC','Artma Sortlash');
define('_SORTDESC','Azaytma Sortlash');
define('_CANCEL','Qaytish');
define('_SCORE','Nomur:');
define('_REPLYMAIN','Pikir Yollash');
define('_ALLOWEDHTML',' Ijazet bérilgen HTML kodi:');
define('_POSTANON','Namsiz halda Yollash');
define('_WRITEREVIEW','Obzor Yézish');
define('_WRITEREVIEWFOR','Obzor Yézish:');
define('_ENTERINFO','Körsetme boyiche uchurlarni kirgüzüng ');
define('_PRODUCTTITLE','Mexsulat Mawzusi');
define('_NAMEPRODUCT','Obzorlinidighan Mexsulat Nami');
define('_REVIEW','Obzor');
define('_CHECKREVIEW','Emiliy Obzoringiz. Gramatikigha diqqet qiling! Eng az bolghandimu 100 söz yézing, HTML taglirini qollansingizmu bolidu.');
define('_FULLNAMEREQ','Toluq isim-familingiz. Zörür.');
define('_REMAIL','E-mailingiz');
define('_REMAILREQ','E-mail adrésingiz. Zörür.');
define('_SELECTSCORE','Bu yazmining nomuri');
define('_RELATEDLINK','Munasiwetlik Ulanma');
define('_PRODUCTSITE','Mexsulat Tor Adrési. URL ning  formati "http://" bolidighanliqigha diqqet qiling');
define('_LINKTITLE','Ulanma Mawzusi');
define('_LINKTITLEREQ','Eger munasiwetlik ulanma bolsa buni toldurushingiz zörürdur.');
define('_RIMAGEFILE','Resim Höjjet Nami');
define('_RIMAGEFILEREQ','Mawzu resim höjjiti namining orni images/reviews/ bolidu. Tallash.');
define('_CHECKINFO','Kirgüzgen uchurliringizning 100% toghra bolushigha, imlagha diqqet qiling. Xetlerning hemmisini CHONG herp bilen yazmang.');
define('_INVALIDTITLE','Inawetsiz Mawzu... bosh bolmasliqi kérek');
define('_INVALIDSCORE','Inawetsiz Nomur... 1 bilen 10 ning arisida bolushi kérek');
define('_INVALIDTEXT','Inawetsiz Obzor téksti... bosh bolmasliqi kérek');
define('_INVALIDHITS','Qétim qimmiti musbet san bolush kérek');
define('_CHECKNAME','Isimingiz we e-mailingizning ikkilisini kirgüzüng');
define('_INVALIDEMAIL','Xata e-mail (mesilen: siz@hotmail.com)');
define('_INVALIDLINK','Munasiwetlik ulanma bilen ulanma mawzisining ikkilisini toldurush jérek, yaki ikkilisi bosh qalsun');
define('_ADDED','Yollanghan Waqit:');
define('_REVIEWER','Obzorchi:');
define('_REVIEWID','Obzor ID');
define('_LOOKSRIGHT','Bu toghra köründimu?');
define('_RMODIFIED','Özgertildi');
define('_RADDED','Yollandi');
define('_ADMINLOGGED','Hazir bashqurghuchi salahitide kirdi... bu baha hazirla élan qilinidu');
define('_RTHANKS','Bu obzorni yollighiningiz üchün teshekkürler ');
define('_MODIFICATION','Özgertish');
define('_ISAVAILABLE','Hazir obzorlar sanliq ambirigha saqlandi.');
define('_EDITORWILLLOOK','Tehrirler yollanmingizni tekshürüp, pat arida élan qilidu!');
define('_RBACK','Obzorlar Indéksige Qaytish');
define('_RWELCOME','Obzor Bölümige Xush Keldingiz');
define('_10MOSTPOP','Eng köp oqulghan 10 obzorlar');
define('_10MOSTREC','Eng axirqi 10 obzorlar');
define('_THEREARE','Bu yerde');
define('_REVIEWSINDB','Sanliqambardiki obzorlar');
define('_REVIEWSLETTER','Obzorlar:');
define('_NOREVIEWS','Héchqandaq obzor yoq');
define('_TOTALREVIEWS','obzor tépildi.');
define('_RETURN2MAIN','Asasiy Sehipige Qaytish');
define('_REVIEWCOMMENT','Obzorgha pikir bérish:');
define('_YOURNICK','Leqimingiz:');
define('_RCREATEACCOUNT','Bir hésab <a href="'.getlink("Your_Account").'">qurush</a>');
define('_YOURCOMMENT','Pikiringiz:');
define('_MYSCORE','Nomurum:');
define('_REVIEWMOD','Körüsh Shekli');
define('_RDATE','Chisla:');
define('_RTITLE','Mawzu:');
define('_RTEXT','Tékst:');
define('_REVEMAIL','E-mail:');
define('_RLINK','Ulunush:');
define('_RLINKTITLE','Ulunush Mawzusi:');
define('_COVERIMAGE','Mawzu Resimi:');
define('_PREMODS','Özgürüshlerni Körüsh');
define('_PAGE','Bet');
define('NO_GET','Please use our form as no GET requests are allowed');

/**************************
  ADMNINISTRATION SECTION
**************************/

define('_REVADMIN','Obzorlarni Bashqurush');
define('_REVTITLE','Obzorlar Béti Mawzusi');
define('_REVDESC','Obzorlar Béti Chüshendürlishi');
define('_REVWAITING','Öchrettiki Obzorlar');
define('_REVIMGINFO','150*150 rezmidiki resimingizni images/reviews ge saqlang');
define('_NOREVIEW2ADD','Qoshudighan obzorlar yoq');
define('_ADDREVIEW','Obzor Qoshush');
define('_CLICK2ADDREVIEW','Obzor yézish üchün bu yerni chéking');
define('_DELMODREVIEW','Obzor Öchürüsh / Özgertish');
define('_MODREVINFO','Obzorlarni tehrirlesh/ öchürüsh üchün <a href="'.getlink('Reviews').'">Obzorlar</a> ni chéking.');
