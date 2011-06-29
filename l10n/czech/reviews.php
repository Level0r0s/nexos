<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/czech/reviews.php,v $
  $Revision: 9.6 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:51 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
define('_YOURNAME','Vae jméno');
define('_SORTASC','Třídit vzestupně');
define('_SORTDESC','Třídit sestupně');
define('_CANCEL','Cancel');
define('_SCORE','Skóre:');
define('_REPLYMAIN','Poslat komentář');
define('_ALLOWEDHTML','Povolit HTML:');
define('_POSTANON','Poslat anonymně');
define('_WRITEREVIEW','Napite recenzi');
define('_WRITEREVIEWFOR','Napite recenzi pro');
define('_ENTERINFO','Napite, prosím, informace v souladu se skutečností.');
define('_PRODUCTTITLE','Název produktu');
define('_NAMEPRODUCT','Název recenzovaného produktu.');
define('_REVIEW','Recenze');
define('_CHECKREVIEW','Vá aktuální názor. Zkuste napsat alespoň 100 slov. Pokud ovládáte HTML, můete pouít i HTML tagy.');
define('_FULLNAMEREQ','Vae celé jméno. Vyadováno.');
define('_REMAIL','Vá e-mail');
define('_REMAILREQ','Vá e-mail. Vyadováno.');
define('_SELECTSCORE','Hodnocení produktu (10 je nejlepí 1 nejhorí');
define('_RELATEDLINK','Související odkaz');
define('_PRODUCTSITE','Oficiální stránka produktu. Ujistěte se, e URL začíná "http://"');
define('_LINKTITLE','Název odkazu');
define('_LINKTITLEREQ','Vyadováno pouze pokud je zadán související odkaz, v opačném případě není třeba vyplňovat.');
define('_RIMAGEFILE','Obrázkový soubor');
define('_RIMAGEFILEREQ','Jméno obrázkového souboru, musí být uloen v adresáři images/reviews/. Není vyadováno.');
define('_CHECKINFO','Ujistěte se prosím, e jsou zadané informace 100% platné a e jste napsali správně adresy, jména a velká písmena. Nepouívejte, prosím, k napsání recenze pouze VELKÁ PÍSMENA, taková recenze bude vyřazena.');
define('_INVALIDTITLE','Není zadán název... Pole nesmí zůstat nevyplněno');
define('_INVALIDSCORE','Neplatné hodnocení... Musí být od 1 do 10');
define('_INVALIDTEXT','Není zadán text recenze... Pole nesmí zůstat nevyplněno');
define('_INVALIDHITS','Hits must be a positive integer');
define('_CHECKNAME','Musíte zadat obojí, jméno i e-mail');
define('_INVALIDEMAIL','Neplatný e-mail (např: you@hotmail.com)');
define('_INVALIDLINK','Musíte zadat obojí, název odkazu i související odkaz, nebo nechat obojí prázdné');
define('_ADDED','Přidáno:');
define('_REVIEWER','Recenzent:');
define('_REVIEWID','ID recenze');
define('_LOOKSRIGHT','Je to tak správně?');
define('_RMODIFIED','upraveno');
define('_RADDED','přidána');
define('_ADMINLOGGED','Jste přihláen jako admin... recenze bude okamitě');
define('_RTHANKS','Díky za odeslání recenze');
define('_MODIFICATION','úpravy');
define('_ISAVAILABLE','Nyní je zařazena do databáze recenzí.');
define('_EDITORWILLLOOK','Administrátor prohlédne vá příspěvek.');
define('_RBACK','Zpět na seznam recenzí');
define('_RWELCOME','Sekce recenzí');
define('_10MOSTPOP','10 nejčtenějích recenzí');
define('_10MOSTREC','10 nejaktuálnějích recenzí');
define('_THEREARE','V současné době je');
define('_REVIEWSINDB','recenzí v databázi');
define('_REVIEWSLETTER','Recenze produktů začínajících na');
define('_NOREVIEWS','Neexistuje ádná recenze produktu začínajícího na');
define('_TOTALREVIEWS','Vechny nalezené recenze.');
define('_RETURN2MAIN','Zpět na seznam recenzí');
define('_REVIEWCOMMENT','Komentář k recenzi:');
define('_YOURNICK','Vae přezdívka:');
define('_RCREATEACCOUNT','<a href="'.getlink("Your_Account").'">Vytvořit</a> účet');
define('_YOURCOMMENT','Vá komentář:');
define('_MYSCORE','Moje hodnocení:');
define('_REVIEWMOD','Úprava recenze');
define('_RDATE','Datum:');
define('_RTITLE','Název produktu:');
define('_RTEXT','Text:');
define('_REVEMAIL','Email:');
define('_RLINK','Odkaz:');
define('_RLINKTITLE','Název odkazu:');
define('_COVERIMAGE','Obrázek:');
define('_PREMODS','Prohlédnout úpravy');
define('_PAGE','Stránka');
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
