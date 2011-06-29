<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/albanian/reviews.php,v $
  $Revision: 9.5 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:47 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
define('_YOURNAME','Emri Juaj');
define('_SORTASC','Rrjeshtim në Ngjitje');
define('_SORTDESC','Rrjeshtim në Zbritje');
define('_CANCEL','Fshi');
define('_SCORE','Vota:');
define('_REPLYMAIN','Dërgo Komentin');
define('_ALLOWEDHTML','Lejohen Tags HTML:');
define('_POSTANON','Dërgoje në Anonimitet');
define('_WRITEREVIEW','Shkruaj një Recension');
define('_WRITEREVIEWFOR','Shkruaj një Recension për');
define('_ENTERINFO','Shkruaj informacionet sipas specifikave');
define('_PRODUCTTITLE','Titulli i Produktit');
define('_NAMEPRODUCT','Emri i Produktit të Recensuar.');
define('_REVIEW','Recensim');
define('_CHECKREVIEW','Recensimi juaj aktual. Kujdes gramatikën! Shkruaj të paktën njëqind fjalë, OK? Po deshe mund të përdorësh edhe tags HTML.');
define('_FULLNAMEREQ','Emri Juaj Komplet. Duhet.');
define('_REMAIL','Email Juaj');
define('_REMAILREQ','Adresa Juaj E-mail. Duhet.');
define('_SELECTSCORE','Vota për Këtë Produkt');
define('_RELATEDLINK','Link të Ngjashëm');
define('_PRODUCTSITE','Siti Zyrtar i Produktit. Kujdes duhet të fillojë me "http://"');
define('_LINKTITLE','Titulli i Link');
define('_LINKTITLEREQ','Duhet n.q.s. ke dhënë link të ngjashëm, përndryshe nuk ka nevojë.');
define('_RIMAGEFILE','Emri i File të Figurës');
define('_RIMAGEFILEREQ','Emri i figurës së kopertinës, duhet të ndodhet tek images/reviews/. Nuk është e domosdoshëm.');
define('_CHECKINFO','Sigurohu që të gjitha informacionet e shkruara janë korrekte në 100% dhe përdorin gramatikën korrekte. Për shembull, mos e shkruaj të gjithë tekstin me GËRMA TË MËDHA, mund të refuzohet.');
define('_INVALIDTITLE','Titull Jo i Vlefshëm... Nuk mund të jetë bosh');
define('_INVALIDSCORE','Votë e Pa Vlefshme... Duhet të jetë një numur nga 1 tek 10');
define('_INVALIDTEXT','Tekst Recensimi Jo i Vlefshëm... Nuk mund të jetë bosh');
define('_INVALIDHITS','Hits duhet të jetë një numur pozitiv i plotë');
define('_CHECKNAME','Duhet të shkruash si emrin tënd ashtu dhe adresën tënde email');
define('_INVALIDEMAIL','Email Jo i Vlefshëm (p.sh: you@hotmail.com)');
define('_INVALIDLINK','Duhet të shkruash si titullin ashtu dhe link-un e ngjashëm, përndryshe lëri bosh që të dy');
define('_ADDED','Shtuar:');
define('_REVIEWER','Recensori:');
define('_REVIEWID','ID Recansimit');
define('_LOOKSRIGHT','Kështu është në rregull?');
define('_RMODIFIED','modifikuar');
define('_RADDED','shtuar');
define('_ADMINLOGGED','Aktualisht logged si admin... ky recension duhet menjëherë');
define('_RTHANKS','Faleminderit për shkrimin e këtij Recensioni');
define('_MODIFICATION','modifikime');
define('_ISAVAILABLE','Nuk gjendet në database e recensimeve.');
define('_EDITORWILLLOOK','Editori do ti hedhë një sy shkrimit tuaj. Shumë shpejt do të publikohet, po të pranohet!');
define('_RBACK','Kthehu tek Treguesi i Recensimeve');
define('_RWELCOME','Mirësevini tek Seksioni i Recensimeve');
define('_10MOSTPOP','10 më popullorët');
define('_10MOSTREC','10 më të fresktit');
define('_THEREARE','Gjenden');
define('_REVIEWSINDB','Recensime në Database');
define('_REVIEWSLETTER','Recensime sipas gërmave');
define('_NOREVIEWS','Nuk gjendet asnjë Recensim nën gërmën');
define('_TOTALREVIEWS','Gjithsej Recensime të gjetur.');
define('_RETURN2MAIN','Kthehu tek Menu Qëndrore');
define('_REVIEWCOMMENT','Komente mbi Recensimin:');
define('_YOURNICK','Nickname Yt:');
define('_RCREATEACCOUNT','<a href="'.getlink('Your_Account').'">Krijo</a> një account të ri');
define('_YOURCOMMENT','Komenti Yt:');
define('_MYSCORE','Vota Ime:');
define('_REVIEWMOD','Modifiko Recensimet');
define('_RDATE','Data:');
define('_RTITLE','Titulli:');
define('_RTEXT','Teksti:');
define('_REVEMAIL','Email:');
define('_RLINK','Link:');
define('_RLINKTITLE','Titulli i Link:');
define('_COVERIMAGE','Figura:');
define('_PREMODS','Pamja e Parë e Ndryshimeve');
define('_PAGE','Faqja');
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