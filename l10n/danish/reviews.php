<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/danish/reviews.php,v $
  $Revision: 9.4 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:51 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
define('_YOURNAME','Dit navn');
define('_SORTASC','Sorter stigende');
define('_SORTDESC','Sorter faldende');
define('_CANCEL','Fortryd');
define('_SCORE','Points:');
define('_REPLYMAIN','Send kommentar');
define('_ALLOWEDHTML','Tilladte HTML-koder:');
define('_POSTANON','Anonymt indlæg');
define('_WRITEREVIEW','Skriv en anmeldelse');
define('_WRITEREVIEWFOR','Skriv en anmeldelse til');
define('_ENTERINFO','Vær venlig at udfylde felterne i henhold til instruktionerne');
define('_PRODUCTTITLE','Overskrift på anmeldelse');
define('_NAMEPRODUCT','Navn på det anmeldte.');
define('_REVIEW','Tekst');
define('_CHECKREVIEW','Din anmeldelse som den vil se ud. Vær venlig at kontrollere grammatik og tegnsætning. Vær venlig at skrive mindst 100 ord, tak! Du er velkommen til at anvende HTML-koder, hvis du kan bruge dem.');
define('_FULLNAMEREQ','Både for og efternavn. Skal udfyldes');
define('_REMAIL','Din e-mail-adresse');
define('_REMAILREQ','Din e-mail-adresse. Skal udfyldes');
define('_SELECTSCORE','Angiv points:');
define('_RELATEDLINK','Relateret link');
define('_PRODUCTSITE','Det anmeldtes officielle website. (Hvis der er nogen.) Kontroller at internetadressen starter med "http://"');
define('_LINKTITLE','Titel på link');
define('_LINKTITLEREQ','Skal udfyldes hvis du har et relateret link, ellers ikke.');
define('_RIMAGEFILE','Filnavn på billede');
define('_RIMAGEFILEREQ','Filnavn på billede,- placeret i mappen: images/reviews/. Ikke nødvendigt. Tilføjes eventuelt af administrator.');
define('_CHECKINFO','Vær venlig at kontrollere, at alle oplysninger er 100% korrekte, og at du har grammatik og tegnsætning i orden. For eksempel bedes du om ikke at skrive din tekst med kun STORE BOGSTAVER, da de vil bliver afvist af vores systemer.');
define('_INVALIDTITLE','Fejl i overskriften... Skal udfyldes');
define('_INVALIDSCORE','Fejl i points... Skal være mellem 1 og 10');
define('_INVALIDTEXT','Fejl i anmeldelsesteksten... Skal udfyldes');
define('_INVALIDHITS','Hits skal være et positivt tal');
define('_CHECKNAME','Du skal skrive både dit navn og din e-mail-adresse');
define('_INVALIDEMAIL','Fejl i e-mail-adresse. (f.eks.: ditnavn@hotmail.com)');
define('_INVALIDLINK','Du skal skrive BÅDE en titel på linket og et relateret link eller lade begge felter være tomme.');
define('_ADDED','Tilføjet:');
define('_REVIEWER','Anmelder:');
define('_REVIEWID','ID på anmeldelse');
define('_LOOKSRIGHT','Ser dette rigtigt ud?');
define('_RMODIFIED','ændret');
define('_RADDED','tilføjet');
define('_ADMINLOGGED','Logget ind som administrator... anmeldelsen vil kunne ses med det samme.');
define('_RTHANKS','Tak for indsendelsen af denne anmeldelse!');
define('_MODIFICATION','ændring');
define('_ISAVAILABLE','Den er nu klar i vores anmeldelsesdatabase.');
define('_EDITORWILLLOOK','Vores team vil gennemlæse din anmeldelse. Den skulle være klart snarest.!');
define('_RBACK','Tilbage til oversigten over anmeldelser');
define('_RWELCOME','Velkommen til sektionen for anmeldelser');
define('_10MOSTPOP','De 10 mest populære anmeldelser');
define('_10MOSTREC','De 10 nyeste anmeldelser');
define('_THEREARE','Der er');
define('_REVIEWSINDB','anmeldelser i vores database');
define('_REVIEWSLETTER','Anmeldelser efter bogstavet');
define('_NOREVIEWS','Der er ingen anmeldelser efter bogstavet');
define('_TOTALREVIEWS','Antal anmeldelser fundet.');
define('_RETURN2MAIN','Tilbage til hovedsektionen');
define('_REVIEWCOMMENT','Kommentarer til denne anmeldelse:');
define('_YOURNICK','Dit brugernavn:');
define('_RCREATEACCOUNT','<a href="'.getlink("Your_Account").'">Opret</a> dig som bruger');
define('_YOURCOMMENT','Din kommentar:');
define('_MYSCORE','Mine points:');
define('_REVIEWMOD','Ændring af anmeldelse');
define('_RDATE','Dato:');
define('_RTITLE','Overskrift:');
define('_RTEXT','Tekst:');
define('_REVEMAIL','E-mail:');
define('_RLINK','Link:');
define('_RLINKTITLE','Titel på link:');
define('_COVERIMAGE','Forsidebillede:');
define('_PREMODS','Gennemse ændringer');
define('_PAGE','Side');
define('NO_GET','Brug venligst vores formular, da GET funktinen ikke er tilladt');

/**************************
  ADMNINISTRATION SECTION
**************************/

define('_REVADMIN','Anmeldelse Administration');
define('_REVTITLE','Anmeldelse Side Titel');
define('_REVDESC','Anmeldelse Side Beskrivelse');
define('_REVWAITING','Anmeldelse der venter på godkendelse');
define('_REVIMGINFO','Gem dit 150*150 billede i images/reviews');
define('_NOREVIEW2ADD','Ingen Anmeldelse at tilføje');
define('_ADDREVIEW','Tilføj anmeldelse');
define('_CLICK2ADDREVIEW','Klik her for at skrive en anmeldelse');
define('_DELMODREVIEW','Slet / Ændre en anmeldelse');
define('_MODREVINFO','Du kan nemt slette/ændre anmeldelse ved kikke <a href="'.getlink('Reviews').'">Anmeldelser</a> som Admin.');
