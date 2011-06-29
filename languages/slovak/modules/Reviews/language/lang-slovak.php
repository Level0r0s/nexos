<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com
  
  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version.
  This program comes without any warranty.
  $Source: /cvs/languages/slovak/modules/Reviews/language/lang-slovak.php,v $
  $Revision: 1.2 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:41 $
***********************************************************************/
if (!defined('CPG_NUKE')) { die('You do not have permission to access this file'); }
define('_PREVIOUS','Predchádzajúca strana');
define('_NEXT','Nasledujúca strana');
define('_YOURNAME','Vae meno');
define('_SORTASC','Triedené nahor');
define('_SORTDESC','Triedené nadol');
define('_CANCEL','Zrui');
//define("_YES","Yes");
//define("_NO","No");
define('_SCORE','Skóre:');
define('_REPLYMAIN','posla komentár');
define('_ALLOWEDHTML','Povoli HTML:');
define('_POSTANON','Posla anonymne');
define('_WRITEREVIEW','Napísa recenziu');
define('_WRITEREVIEWFOR','Napísa recenziu pre');
define('_ENTERINFO','Prosím zadajte informácie v súlade so skutočnosou.');
define('_PRODUCTTITLE','Názov recenzie');
define('_NAMEPRODUCT','Názov čoho sa recenzia týka.');
define('_REVIEW','Recenzia');
define('_CHECKREVIEW','Tu napíte recenziu. Prosím dbajte na gramatiku! Skúste napísa aspoň 100 slov. Ak ovládate HTML príkazy, môete ich poui.');
define('_FULLNAMEREQ','Meno a priezvisko. Vyaduje sa.');
define('_REMAIL','Va e-mail');
define('_REMAILREQ','Vaa e-mailová adresa. Vyaduje sa.');
define('_SELECTSCORE','Skóre pre tento produkt - 10 je najlepie, 1 najhorie');
define('_RELATEDLINK','Súvisiaci odkaz');
define('_PRODUCTSITE','Oficiálna webstránka produktu. Uistite sa, e URL začína s "http://"');
define('_LINKTITLE','Názov odkazu');
define('_LINKTITLEREQ','Poadované iba ak je zadaný súvisiaci odkaz, inak netreba.');
define('_RIMAGEFILE','Názov obrázkového súboru');
define('_RIMAGEFILEREQ','Názov zodpovedajúceho obrázku, z adresára images/reviews/. Nevyaduje sa.');
define('_CHECKINFO','Prosím preverte si, či sú zadané informácie 100% platné a sú gramaticky správne. Pri tejto príleitosti, prosím nepíte text len vežkými písmenami VETKO VEźKÉ, taký text nebude prijatý.');
define('_INVALIDTITLE','Nevyplnený názov... Nesmie zosta prázdny');
define('_INVALIDSCORE','Neplatné skóre... Musí by od 1 po 10');
define('_INVALIDTEXT','Nevyplnený text recenzie... Nesmie zosta prázdny');
define('_INVALIDHITS','Klik musí by kladné číslo');
define('_CHECKNAME','Treba zada oba údaje, aj meno aj e-mail');
define('_INVALIDEMAIL','Neplatná e-mailová adresa (napr.: janko@mrkvicka.sk)');
define('_INVALIDLINK','Musíte zada oba údaje, názov odkazu a prísluný odkaz alebo obe necha prázdne');
define('_ADDED','Pridané:');
define('_REVIEWER','Recenzent:');
define('_REVIEWID','ID recenzie');
define('_HITS',' krát čítané');
define('_LOOKSRIGHT','Je to v poriadku?');
define('_RMODIFIED','upravené');
define('_RADDED','pridaná');
define('_ADMINLOGGED','Ste prihlásený ako admin... recenzia bude okamite');
define('_RTHANKS','Vďaka za zaslanie recenzie');
define('_MODIFICATION','úpravy');
define('_ISAVAILABLE','Je odteraz k dispozícii v databáze recenzií.');
define('_EDITORWILLLOOK','Správca overí vá príspevok.');
define('_RBACK','Návrat na zoznam recenzií');
define('_RWELCOME','Vitajte v oblasti recenzií');
define('_10MOSTPOP','10 najobžúbenejích recenzií');
define('_10MOSTREC','10 najnovích rezenzií');
define('_THEREARE','V naej databáze sa nachádza');
define('_REVIEWSINDB','recenzií.');
define('_REVIEWS','Recenzie');
define('_REVIEWSLETTER','Recenzie produktov začínajúcich na písmeno');
define('_NOREVIEWS','Neexistuje iadna recenzia produktu začínajúceho na písmeno');
define('_TOTALREVIEWS','Vetky nájdené recenzie.');
define('_RETURN2MAIN','Návrat na zoznam recenzií');
define('_REVIEWCOMMENT','Komentár k recenzii:');
define('_YOURNICK','Váe uivatežské meno:');
define('_RCREATEACCOUNT','<a href="modules.php?name=Your_Account">Vytvor</a> konto');
define('_YOURCOMMENT','Vá komentár:');
define('_MYSCORE','Moje skóre:');
define('_REVIEWMOD','Úprava recenzie');
define('_RDATE','Dátum:');
define('_RTITLE','Názov produktu:');
define('_RTEXT','Text:');
define('_REVEMAIL','e-mail:');
define('_RLINK','Odkaz:');
define('_RLINKTITLE','Názov odkazu:');
define('_COVERIMAGE','Obrázok:');
define('_PREMODS','Pozrie úpravy');
define('_PAGE','Strana');
define('_PAGEBREAK','Ak chcete písa viac strán, môete napísa <b>&lt;!--pagebreak--&gt;</b> tam, kde chcete text zalomi.');
define('_PREVIEW','Prezrie');
define('_LANGUAGE','Jazyk');
define('NO_GET','Please use our form as no GET requests are allowed');

/**************************
  ADMNINISTRATION SECTION
**************************/

define('_REVADMIN','Administrácia recenzií');
define('_REVTITLE','Názov stránky recenzie');
define('_REVDESC','Popis stránky Recenzie');
define('_REVWAITING','Recenzie čakajúce na overenie');
define('_REVIMGINFO','Ulote obrázok formátu 150*150 v images/reviews');
define('_NOREVIEW2ADD','iadna recenzia nebola pridaná');
define('_ADDREVIEW','Prida recenziu');
define('_CLICK2ADDREVIEW','Kliknite sem a napíte recenziu');
define('_DELMODREVIEW','Vymaza alebo upravi recenziu');
define('_MODREVINFO','Ako administrátor môete jednoducho maza/upravova recenzie priamo cez stránku <a href="modules.php?name=Reviews">reviews</a>.');

?>
