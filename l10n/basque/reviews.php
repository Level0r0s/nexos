<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/basque/reviews.php,v $
  $Revision: 9.6 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:47 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
define('_YOURNAME','Zure izena');
define('_SORTASC','Goruntz ordenatu');
define('_SORTDESC','Beruntz ordenatu');
define('_CANCEL','Kantzelatu');
define('_SCORE','Puntuazioa');
define('_REPLYMAIN','Komentarioa bidali');
define('_ALLOWEDHTML','HTML erabili daiteke:');
define('_POSTANON','Anonimo bidalketa');
define('_WRITEREVIEW','Berrikuspen bat idatzi');
define('_WRITEREVIEWFOR','Berrikuspen bat idatzi honetaz:');
define('_ENTERINFO','Informazioa mesedez, espezifikazioen barruan idatzi');
define('_PRODUCTTITLE','Produktoaren izena');
define('_NAMEPRODUCT','Errebisatutako Produktoaren izena.');
define('_REVIEW','Berrikuspena');
define('_CHECKREVIEW','Idatzi Berrikuspena. Zaindu zure idazkera. Gehienez 100 hitz. HTML etiketak erabil ditzakezu.');
define('_FULLNAMEREQ','Zure izen osoa (beharrezkoa)');
define('_REMAIL','Emaila');
define('_REMAILREQ','Zure Emaila. (beharrezkoa)');
define('_SELECTSCORE','Baloratu produkto hau');
define('_RELATEDLINK','Erlazionaturiko Lotora');
define('_PRODUCTSITE','Produktoaren Orrialde Ofiziala. Ziurtatu idatzitako URLa "http://"-kin hasten dela.');
define('_LINKTITLE','Loturaren Titulua');
define('_LINKTITLEREQ','Beharrezkoa erlazionaturiko Loturaren bat baldin baduzu, bestela ez..');
define('_RIMAGEFILE','Irudi Fitxategia');
define('_RIMAGEFILEREQ','Portadako irudiaren izena. Karpeta honetan dago: images/reviews/. (Ez da beharrezkoa)');
define('_CHECKINFO','Ziurtatu idatzitakoa zuzena dela, bai ortografiaz eta bai edukiz. Kontutan eduki ere, mayuskuletan idazteak garraxika hitzegitearen balio berdina daukala.');
define('_INVALIDTITLE','Titulu ez zuzena... ezin da zuriz egon');
define('_INVALIDSCORE','Puntuazio ez zuzena... 1 eta 10 bitartean izan behar da');
define('_INVALIDTEXT','Berrikuspenaren testua ez da zuzena... ezin da zuriz egon');
define('_INVALIDHITS','Hits-aren (irakurrienak) balio zenbaki oso bat izan behar du.');
define('_CHECKNAME','Idatzi zure Izena eta zure Emaila');
define('_INVALIDEMAIL','Emaila ez da zuzena (ad: zureizena@elgoibar.biz)');
define('_INVALIDLINK','Biak, Lotura eta Loturaren titulua idatzi behar dituzu, edo bestela zuriz utzi');
define('_ADDED','Gehitzekoa:');
define('_REVIEWER','moderatzaile :');
define('_REVIEWID','Berrikuspenaren ID-a (identifikatiboa)');
define('_LOOKSRIGHT','Dena zuzen dago?');
define('_RMODIFIED','aldatua');
define('_RADDED','gehitua');
define('_ADMINLOGGED','Oraintxe bertan administratzaile bat dago sisteman... berrikuspen hau berehala ikusi dezake.');
define('_RTHANKS','Eskerrikasko Berrikuspen hau bidaltzegatik');
define('_MODIFICATION','aldaketa');
define('_ISAVAILABLE','Iadanik erabilgarria dago Berrikuspen datubasean.');
define('_EDITORWILLLOOK','Editoreek egiaztatuko dute zure bidalketa. Laister izango duzu publikaturik!');
define('_RBACK','Bueltatu Berrikuspen aurkibidera');
define('_RWELCOME','Ongi etorri Berrikuspen Atalera');
define('_10MOSTPOP','Gehien irakurri diren 10 berrikuspenak');
define('_10MOSTREC','Bidalitako azken 10 berrikuspenak');
define('_THEREARE','Guztira');
define('_REVIEWSINDB','berrikuspen daude');
define('_REVIEWSLETTER','Letra honetatik hasten diren Berrikuspenak:');
define('_NOREVIEWS','Ez dago Berrikuspenik letra honetatik hasten denik');
define('_TOTALREVIEWS','Guztira aurkitu diren Berrikuspenak:');
define('_RETURN2MAIN','Bueltatu Menu Nagusira');
define('_REVIEWCOMMENT','Berrikuspenari buruzko Komentarioak (iruzkinak):');
define('_YOURNICK','Zure ezizena:');
define('_RCREATEACCOUNT','Sisteman <b><a href="'.getlink("Your_Account").'">erregistratu</a></b>');
define('_YOURCOMMENT','Zure Komentarioa:');
define('_MYSCORE','Balorazioa (zenbakia):');
define('_REVIEWMOD','Berrikuspena aldatzen');
define('_RDATE','Data:');
define('_RTITLE','Titulua:');
define('_RTEXT','Testua:');
define('_REVEMAIL','Emaila:');
define('_RLINK','Lotura:');
define('_RLINKTITLE','Loturaren títulua:');
define('_COVERIMAGE','Hasierako irudia:');
define('_PREMODS','Aldaketen aurrebista');
define('_PAGE','orrialde ');
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
