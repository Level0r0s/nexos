<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/hungarian/reviews.php,v $
  $Revision: 9.6 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:55 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
define('_YOURNAME','Neved');
define('_SORTASC','Növekvő sorrendben');
define('_SORTDESC','Csökkenő sorrendben');
define('_CANCEL','Mégsem');
define('_SCORE','Pontok:');
define('_REPLYMAIN','Új hozzászólás');
define('_ALLOWEDHTML','Megengedett HTML:');
define('_POSTANON','Névtelen hozzászólás');
define('_WRITEREVIEW','Ismertető írása');
define('_WRITEREVIEWFOR','Az ismertető témája:');
define('_ENTERINFO','Kérjük a specifikációknak megfelelően add meg a termék adatait');
define('_PRODUCTTITLE','Termék neve');
define('_NAMEPRODUCT','Az ismertetett termék neve.');
define('_REVIEW','Ismertető');
define('_CHECKREVIEW','Ide jön a termékismertető. Kérjük, figyelj oda a helyesírásra! Ha lehet, legalább száz szó legyen... HTML kódokat is használhatsz, ha biztos vagy bennük...');
define('_FULLNAMEREQ','Teljes neved. Kötelező.');
define('_REMAIL','e-mail címed');
define('_REMAILREQ','e-mail címed. Kötelező.');
define('_SELECTSCORE','A termék osztályozása');
define('_RELATEDLINK','Kapcsolódó link');
define('_PRODUCTSITE','A termék hivatalos weboldala. A link "http://"-vel kezdődjön!');
define('_LINKTITLE','A céloldal neve');
define('_LINKTITLEREQ','Ha van link, kötelező megadni, egyébként nem kell.');
define('_RIMAGEFILE','Kép fájlneve');
define('_RIMAGEFILEREQ','Kapcsolódó kép neve, az images/reviews/ könyvtárból. Nem kötelező.');
define('_CHECKINFO','Kérjük ellenőrizd, hogy minden megadott információ 100% helyes, és ellenőrizd a helyesírást is! Ne írj CSUPA NAGYBETŰVEL, mert törölni fogjuk!');
define('_INVALIDTITLE','Hibás cím! A cím nem lehet üres...');
define('_INVALIDSCORE','Hibás osztályozás! 1 és 10 között osztályozhatsz...');
define('_INVALIDTEXT','Hiba az ismertető szövegében... Nem lehet üres...');
define('_INVALIDHITS','A találatok száma pozitív egész szám.');
define('_CHECKNAME','Meg kell adnod a neved és az e-mail címed is.');
define('_INVALIDEMAIL','Hibás e-mail cím (pl: te@mailbox.hu)');
define('_INVALIDLINK','Meg kell adnod a linket ÉS az oldal nevét IS, vagy egyiket sem!');
define('_ADDED','Hozzáadva:');
define('_REVIEWER','Szerző:');
define('_REVIEWID','Leírás száma');
define('_LOOKSRIGHT','Jó így?');
define('_RMODIFIED','szerkesztve');
define('_RADDED','hozzáadva');
define('_ADMINLOGGED','Adminisztrátorként léptél be... az ismertető azonnal');
define('_RTHANKS','Köszönjük az ismertető beküldését!');
define('_MODIFICATION','változtatás');
define('_ISAVAILABLE','Már elérhető sz ismertetők adatbázisából.');
define('_EDITORWILLLOOK','A szerkesztők átnézik a beküldött írásokat. Hamarosan felkerül a weboldalra!');
define('_RBACK','Vissza az ismertetők listájához');
define('_RWELCOME','Termékismertetők, kritikák');
define('_10MOSTPOP','A 10 legnépszerűbb ismertető');
define('_10MOSTREC','A 10 legfrissebb ismertető');
define('_THEREARE','Jelenleg');
define('_REVIEWSINDB','ismertető található az adatbázisban');
define('_REVIEWSLETTER','ismertető ezzel a betűvel:');
define('_NOREVIEWS','Nincs ismertető ezzel a betűvel:');
define('_TOTALREVIEWS','ismertető összesen.');
define('_RETURN2MAIN','Vissza a főmenübe');
define('_REVIEWCOMMENT','Megjegyzések az ismertetőhöz:');
define('_YOURNICK','Felhasználónév:');
define('_RCREATEACCOUNT','<a href="'.getlink("Your_Account").'">Regisztráció</a>');
define('_YOURCOMMENT','Megjegyzéseid:');
define('_MYSCORE','Osztályozás:');
define('_REVIEWMOD','Ismertető szerkesztése');
define('_RDATE','Dátum:');
define('_RTITLE','Cím:');
define('_RTEXT','Szöveg:');
define('_REVEMAIL','e-mail:');
define('_RLINK','Link:');
define('_RLINKTITLE','Link címe:');
define('_COVERIMAGE','Kapcsolódó kép:');
define('_PREMODS','Változtatások ellenőrzése');
define('_PAGE','oldal');
define('NO_GET','Please use our form as no GET requests are allowed');

/**************************
  ADMNINISTRATION SECTION
**************************/

define('_REVADMIN','Reviews Administration');
define('_REVTITLE','Reviews Page Title');
define('_REVDESC','Reviews Page Description');
define('_REVWAITING','Reviews Waiting for Validation');
define('_REVIMGINFO','Store your 150*150 image in images/reviews');
define('_NOREVIEW2ADD','No reviews to add');
define('_ADDREVIEW','Add Review');
define('_CLICK2ADDREVIEW','Click here to write a review');
define('_DELMODREVIEW','Delete / Modify a review');
define('_MODREVINFO','You can simply delete/modify reviews by browsing <a href="'.getlink('Reviews').'">Reviews</a> as Admin.');
