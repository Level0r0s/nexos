<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/lithuanian/reviews.php,v $
  $Revision: 9.5 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:57 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
define('_YOURNAME','Jūsų vardas');
define('_SORTASC','Rušiuoti didėjančia tvarka');
define('_SORTDESC','Rušiuoti mažėjančia tvarka');
define('_CANCEL','Nutraukti');
define('_SCORE','Rezultatas:');
define('_REPLYMAIN','Komentuoti');
define('_ALLOWEDHTML','HTML leidžiamas:');
define('_POSTANON','Siųsti anonimiškai');
define('_WRITEREVIEW','Rašyti apžvalgą');
define('_WRITEREVIEWFOR','Rašyti apžvalgą');
define('_ENTERINFO','Prašome įrašyti informaciją pagal specifikacijas');
define('_PRODUCTTITLE','Produkto pavadinimas');
define('_NAMEPRODUCT','Apžvelgto produkto pavadinimas.');
define('_REVIEW','Apžvalga');
define('_CHECKREVIEW','Jūsų apžvalga. Nedarykite klaidų! Tegul apžvalga nebūna ilgesnė nei 100 žodžių. Jei mokate HTML, naudokite jį.');
define('_FULLNAMEREQ','Jūsų pilnas vardas. Būtina.');
define('_REMAIL','Jūsų el.paštas');
define('_REMAILREQ','Jūsų el.pašto adresas. Būtina.');
define('_SELECTSCORE','Šio produkto rezultatas');
define('_RELATEDLINK','Susijusi nuoroda');
define('_PRODUCTSITE','Produkto oficiali svetainė. Įsitikinkite, kad adresas prasideda "http://"');
define('_LINKTITLE','Nuorodos pavadinimas');
define('_LINKTITLEREQ','Būtina jei turite susijusią nuorodą, kitu atveju nebūtina.');
define('_RIMAGEFILE','Paveiksliuko nuoroda');
define('_RIMAGEFILEREQ','Viršelio paveiksliuko pavadinimas, kuris randasi images/reviews/. Nebūtina.');
define('_CHECKINFO','Įsitikinkite, kad informacija yra teisinga ir be klaidų. Pavyzdžiui, neveskite teksto tik DIDŽIOSIOMIS RAIDĖMIS, nes tai bus atmesta.');
define('_INVALIDTITLE','Blogas pavadinimas... Negalima palikti tuščio');
define('_INVALIDSCORE','Blogas rezultatas... Turi būti tarp 1 ir 10');
define('_INVALIDTEXT','Blogas apžvalgos tekstas... Negalima palikti tuščio');
define('_INVALIDHITS','Paspaudimai turi būti teigiamas integer');
define('_CHECKNAME','Jūs turite įrašyti ir vardą, ir el.paštą');
define('_INVALIDEMAIL','Blogas el.paštas (pvz.: you@hotmail.com)');
define('_INVALIDLINK','Jūs turite įrašyti ir nuorodos pavadinimą, ir adresą arba palikti abu tuščius');
define('_ADDED','Pridėta:');
define('_REVIEWER','Apžvalgininkas:');
define('_REVIEWID','Apžvalgos Nr');
define('_LOOKSRIGHT','Ar atrodo teisingai?');
define('_RMODIFIED','keista');
define('_RADDED','pridėta');
define('_ADMINLOGGED','Dabar prisijungęs kaip administratorius... ši apžvalgas bus patalpinta akimirksniu');
define('_RTHANKS','Dėkojame už atsiųstą apžvalgą');
define('_MODIFICATION','pakeitimas');
define('_ISAVAILABLE','Dabar jau yra apžvalgų duomenų bazėje.');
define('_EDITORWILLLOOK','Redaktoriai peržiūrės jūsų siuntimą. Tai turėtų įvykti artimiausiu metu!');
define('_RBACK','Atgal į apžvalgų pradžią');
define('_RWELCOME','Sveiki atvykę į apžvalgų skyrių');
define('_10MOSTPOP','10 populiariausių apžvalgų');
define('_10MOSTREC','10 naujausių apžvalgų');
define('_THEREARE','Duomenų bazėje');
define('_REVIEWSINDB','apžvalgos');
define('_REVIEWSLETTER','Apžvalgos iš raidės');
define('_NOREVIEWS','Šiai raidei apžvalgų nėra');
define('_TOTALREVIEWS','Rasta apvalgų iš viso.');
define('_RETURN2MAIN','Grįžti į pagrindinį meniu');
define('_REVIEWCOMMENT','Komentuoti apžvalgą:');
define('_YOURNICK','Jūsų pravardė:');
define('_RCREATEACCOUNT','<a href="'.getlink('Your_Account&amp;file=register').'">Sukurkite</a> sąskaitą');
define('_YOURCOMMENT','Jūsų komentaras:');
define('_MYSCORE','Mano rezultatas:');
define('_REVIEWMOD','Peržiūrėti pakeitimus');
define('_RDATE','Data:');
define('_RTITLE','Pavadinimas:');
define('_RTEXT','Tekstas:');
define('_REVEMAIL','El.paštas:');
define('_RLINK','Nuoroda:');
define('_RLINKTITLE','Nuorodos pavadinimas:');
define('_COVERIMAGE','Viršelio paveiksliukas:');
define('_PREMODS','Peržvelgti pakeitimus');
define('_PAGE','Puslapis');
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