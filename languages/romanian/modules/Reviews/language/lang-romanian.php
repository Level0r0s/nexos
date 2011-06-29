<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com
  
  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version.
  This program comes without any warranty.
  $Source: /cvs/languages/romanian/modules/Reviews/language/lang-romanian.php,v $
  $Revision: 1.5 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:40 $
***********************************************************************/
if (!defined('CPG_NUKE')) { die('You do not have permission to access this file'); }
define('_PREVIOUS','Pagina anterioară');
define('_NEXT','Pagina următoare');
define('_YOURNAME','Numele Dvs.');
define('_SORTASC','Sortare ascendent');
define('_SORTDESC','Sortare descendent');
define('_CANCEL','Anulaţi');
//define("_YES","Yes");
//define("_NO","No");
define('_SCORE','Punctaj:');
define('_REPLYMAIN','Publicaţi comentariul');
define('_ALLOWEDHTML','Cod HTML permis:');
define('_POSTANON','Publicaţi ca şi anonim');
define('_WRITEREVIEW','Scrieţi un review');
define('_WRITEREVIEWFOR','Scrieţi un review pentru');
define('_ENTERINFO','Vă rugăm introduceti informatiile în comformitate cu specificatiile');
define('_PRODUCTTITLE','Titlul produsului');
define('_NAMEPRODUCT','Numele produsului revizuit.');
define('_REVIEW','Review');
define('_CHECKREVIEW','Review-ul Dvs. actual. Vă rugăm să-l verificati şi din punct de vedere gramatical! Să fie cel puţin din 100 de cuvinte, Ok?');
define('_FULLNAMEREQ','Numele Dvs. întreg. Obligatoriu.');
define('_REMAIL','E-mailul Dvs.');
define('_REMAILREQ','Adresa de e-mail a Dvs. Obligatoriu.');
define('_SELECTSCORE','Punctajul acestui produs');
define('_RELATEDLINK','Link asociat');
define('_PRODUCTSITE','Situl oficial al produsului. Aveţi grijă ca URL-ul să înceapă cu "http://"');
define('_LINKTITLE','Titlul linkului');
define('_LINKTITLEREQ','Necesar dacă aveti un link asociat, în caz contrar nu este necesar.');
define('_RIMAGEFILE','Numele fişierului imaginii');
define('_RIMAGEFILEREQ','Numele imaginii de pe copertă, amplasat în images/reviews/. Nu este obligatoriu.');
define('_CHECKINFO','Asiguraţi-vă că informaţia introdusă este 100% corectă şi din punct de vedere gramatical. De exemplu, nu introduceţi textul Dvs. cu litere mari pentru ca va fi eliminat.');
define('_INVALIDTITLE','Titlu incorect... Nu poate fi gol');
define('_INVALIDSCORE','Punctaj incorect... trebuie sa fie între 1 şi 10');
define('_INVALIDTEXT','Textul review-ului este incorect... Nu poate fi gol');
define('_INVALIDHITS','Nr. de vizite trebuie sa fie un nr. întreg pozitiv');
define('_CHECKNAME','Trebuie să introduceţi numele şi e-mailul Dvs.');
define('_INVALIDEMAIL','E-mail incorect(de exemplu: mail@hotmail.com)');
define('_INVALIDLINK','Trebuie să introduceţi un titlu pentru link SI un link asociat sau să le lasaţi pe ambele necompletate');
define('_ADDED','Adăugat:');
define('_REVIEWER','Expeditorul revie-ului:');
define('_REVIEWID','ID-ul review-ului');
define('_HITS','Accesări');
define('_LOOKSRIGHT','Arată bine?');
define('_RMODIFIED','modificat');
define('_RADDED','adăugat');
define('_ADMINLOGGED','Sunteţi logat ca şi administrator... acest review va fi imediat');
define('_RTHANKS','Vă mulţumim ca aţi trimis acest review');
define('_MODIFICATION','modificare');
define('_ISAVAILABLE','Este disponibil în baza de date a review-urilor.');
define('_EDITORWILLLOOK','Editorii vor analiza trimiterea Dvs. Ea va fi disponibilă în curând!');
define('_RBACK','Înapoi la indexul Review-urilor');
define('_RWELCOME','Bine aţi venit la secţiunea Review-uri');
define('_10MOSTPOP','Cele mai populare 10 review-uri');
define('_10MOSTREC','Cele mai recente 10 review-uri');
define('_THEREARE','Există');
define('_REVIEWSINDB','review-uri în baza de date');
define('_REVIEWS','Review-uri');
define('_REVIEWSLETTER','Review-uri pentru scrisoare');
define('_NOREVIEWS','Nu există nici un review pentru scrisoare');
define('_TOTALREVIEWS','Numărul total de review-uri găsite.');
define('_RETURN2MAIN','Întoarceţi-vă în Meniul principal');
define('_REVIEWCOMMENT','Comentarii despre review:');
define('_YOURNICK','Numele de utilizator al Dvs.:');
define('_RCREATEACCOUNT','<a href="'.getlink("Your_Account").'">Creaţi</a> un cont');
define('_YOURCOMMENT','Comentariul Dvs.:');
define('_MYSCORE','Punctajul meu:');
define('_REVIEWMOD','Modificare review');
define('_RDATE','Data:');
define('_RTITLE','Titlu:');
define('_RTEXT','Text:');
define('_REVEMAIL','E-mail:');
define('_RLINK','Link:');
define('_RLINKTITLE','Titlul linkului:');
define('_COVERIMAGE','Imaginea de pe copertă:');
define('_PREMODS','Modificările anterioare');
define('_PAGE','Pagina');
define('_PAGEBREAK','Dacă doriţi mai multe pagini puteţi scrie <b>&lt;!--pagebreak--&gt;</b> acolo unde doriţi să împarţiţi pagina.');
define('_PREVIEW','Previzualizare');
define('_LANGUAGE','Limba');
define('NO_GET','Please use our form as no GET requests are allowed');

/**************************
  ADMNINISTRATION SECTION
**************************/

define('_REVADMIN','Administrare review-uri');
define('_REVTITLE','Titlul paginii pentru review-uri');
define('_REVDESC','Descrierea paginii pentru review-uri');
define('_REVWAITING','Review-uri în aşteptare pentru validare');
define('_REVIMGINFO','Pastraţi imaginile de 150*150 în images/reviews');
define('_NOREVIEW2ADD','Nu există review pentru adăugare');
define('_ADDREVIEW','Adăugaţi review');
define('_CLICK2ADDREVIEW','Click aici pentru a scrie un review');
define('_DELMODREVIEW','Ştergeţi/Moficaţi un review');
define('_MODREVINFO','Puteţi foarte simplu şterge/modifica review-uri de la <a href="modules.php?name=Reviews">Review-uri</a> ca administrator.');

?>
