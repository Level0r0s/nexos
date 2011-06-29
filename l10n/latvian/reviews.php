<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version
  
  $Source: /cvs/l10n/latvian/reviews.php,v $
  $Revision: 9.6 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:57 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
define('_YOURNAME','Tavs vārds');
define('_SORTASC','Kārtot augošā secībā');
define('_SORTDESC','Kārtot dilstošā secībā');
define('_CANCEL','Atcelt');
define('_SCORE','Punktu skaits:');
define('_REPLYMAIN','Ievietot komentāru');
define('_ALLOWEDHTML','Atļaut HTML:');
define('_POSTANON','Ievietot anonīmi');
define('_WRITEREVIEW','Uzrakstīt apskatu');
define('_WRITEREVIEWFOR','Uzrakstīt apskatu priekš');
define('_ENTERINFO','Lūdzu aizpildi nepieciešamo informāciju');
define('_PRODUCTTITLE','Produkta nosaukums');
define('_NAMEPRODUCT','Apskatāmā produkta nosaukums.');
define('_REVIEW','Apskats');
define('_CHECKREVIEW','Tavs pašreizējais apskats. Lūdzu raksti gramatiski pareizi! Uzraksti vismaz 100 vārdus, sarunāts? Tāpat Tu drīksti izmantot HTML tagus, ja, protams, zini, kā to darīt.');
define('_FULLNAMEREQ','Tavs vārds, uzvārds. Nepiciešams obligāti.');
define('_REMAIL','Tava e-pasta adrese');
define('_REMAILREQ','Tava e-pasta adrese. Nepieciešams obligāti.');
define('_SELECTSCORE','Apskatāmā produkta novērtējums');
define('_RELATEDLINK','Saistošās saites');
define('_PRODUCTSITE','Produkta oficiālā tīmekļa lapa. Pārliecinies, ka Tevis ievadītā URL adrese sākas ar "http://"');
define('_LINKTITLE','Saites nosaukums');
define('_LINKTITLEREQ','Nepieciešams gadījumā, ja ir pieejamas papildus saites.');
define('_RIMAGEFILE','Attēla datnes nosaukums');
define('_RIMAGEFILEREQ','Vāka attēla nosaukums, atrodas images/reviews/. Nav obligāti nepieciešams.');
define('_CHECKINFO','Pārliecinies par ievadītās informācijas pareizību un atbilstību patiesībai. Tāpat pārbaudi valodas gramatiku un sintaksi!');
define('_INVALIDTITLE','Nekorekts nosaukums... Nedrīkst būt tukšs');
define('_INVALIDSCORE','Nekorekts novērtējums... Jābūt no 1 līdz 10');
define('_INVALIDTEXT','Nekorekts apskata teksts... Nedrīkst būt tukšs');
define('_INVALIDHITS','Skaitam jābūt pozitīvam skaitlim');
define('_CHECKNAME','Tev jāievada gan Tavs vārds, gan Tava e-pasta adrese');
define('_INVALIDEMAIL','Nekorekta e-pasta adrese (piemēram: you@gmail.com)');
define('_INVALIDLINK','Tev jāievada vai nu abi - saites nosaukums un saites atrašanās vieta; vai nu abi jāatstāj tukši');
define('_ADDED','Pievienots:');
define('_REVIEWER','Apskatīja:');
define('_REVIEWID','Apskatītāja ID');
define('_LOOKSRIGHT','Vai ir labi?');
define('_RMODIFIED','rediģēts');
define('_RADDED','pievienots');
define('_ADMINLOGGED','Šobrīd autorizējies kā administrators... šis apskats būs tūlīt');
define('_RTHANKS','Paldies par apskata iesūtīšanu');
define('_MODIFICATION','rediģēšana');
define('_ISAVAILABLE','Ir pieejams apskatu datu bāzē.');
define('_EDITORWILLLOOK','Mēs pārbaudām Tavu iesūtīto apskatu. Tuvākajā laikā tas tiks publicēts!');
define('_RBACK','Atpakaļ uz apskatu saturu');
define('_RWELCOME','Esiet sveicināti apskatu sadaļā');
define('_10MOSTPOP','10 populārākie apskati');
define('_10MOSTREC','10 jaunākie apskati');
define('_THEREARE','Ir');
define('_REVIEWSINDB','Apskati datu bāzē');
define('_REVIEWSLETTER','Vēstules apskats');
define('_NOREVIEWS','Par šo vēstuli nav neviena apskata');
define('_TOTALREVIEWS','Kopā atrasti apskati');
define('_RETURN2MAIN','Atgriezties uz galveno lapu');
define('_REVIEWCOMMENT','Apskata komentārs:');
define('_YOURNICK','Tavs lietotāja vārds:');
define('_RCREATEACCOUNT','<a href="'.getlink("Your_Account").'">Izveidot</a> kontu');
define('_YOURCOMMENT','Tavs komentārs:');
define('_MYSCORE','Mans punktu skaits:');
define('_REVIEWMOD','Apskata rediģēšana');
define('_RDATE','Datums:');
define('_RTITLE','Nosaukums:');
define('_RTEXT','Teksts:');
define('_REVEMAIL','E-pasta adrese:');
define('_RLINK','Saite:');
define('_RLINKTITLE','Saites nosaukums:');
define('_COVERIMAGE','Vāka attēls:');
define('_PREMODS','Parādīt rediģēto');
define('_PAGE','Lapa');
define('NO_GET','Lūdzu saziņai izmanto tikai mūsu formu!');

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