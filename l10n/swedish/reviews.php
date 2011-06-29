<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/swedish/reviews.php,v $
  $Revision: 9.5 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:40:04 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
define('_YOURNAME','Ditt Namn');
define('_SORTASC','Sortera Ökande');
define('_SORTDESC','Sortera Fallande');
define('_CANCEL','Avbryt');
define('_SCORE','Poäng:');
define('_REPLYMAIN','Posta kommentar');
define('_ALLOWEDHTML','Tillåten HTML:');
define('_POSTANON','Posta Anonymt');
define('_WRITEREVIEW','Skriv en recension');
define('_WRITEREVIEWFOR','Skriv en recension för');
define('_ENTERINFO','Ange information enligt våra specifikationer');
define('_PRODUCTTITLE','Produktnamn');
define('_NAMEPRODUCT','Namnet på den recenserade produkten.');
define('_REVIEW','Recension');
define('_CHECKREVIEW','Den egentliga recensionen. Försök göra den grammatiskt korrekt! Gör den minst 100 ord lång, OK? Du får även använda dig av HTML kod om du vet hur man gör för att nyttja dem.');
define('_FULLNAMEREQ','Ditt Namn. Krav.');
define('_REMAIL','Din E-postadress');
define('_REMAILREQ','Din E-postadress. Krav.');
define('_SELECTSCORE','Betyg på denna produkt');
define('_RELATEDLINK','Relaterad Länk');
define('_PRODUCTSITE','Produktens Officiella Webbplats. Se till att din adress börja med "http://"');
define('_LINKTITLE','Titel på länken');
define('_LINKTITLEREQ','Krävs om du har en relaterad länk, annars inget krav.');
define('_RIMAGEFILE','Bildens Filnamn');
define('_RIMAGEFILEREQ','Namn på bildfilen på produkten, ska ligga i /images/reviews/. Inget krav.');
define('_CHECKINFO','Se till att informationen du angett är 100% riktig och använder korrekt grammatik och kapitälisering. Till exempel: skriv inte in all text med STORA BOKSTÄVER, för då kommer den inte att publiceras.');
define('_INVALIDTITLE','Felaktig titel... Får inte vara tom');
define('_INVALIDSCORE','Felaktigt betyg... Måste vara mellan 1 och 10');
define('_INVALIDTEXT','Felaktig recensionstext... Får inte vara tomt');
define('_INVALIDHITS','Träffar måste vara en positiv integer');
define('_CHECKNAME','Du måste ange både ditt namn och din e-postadress');
define('_INVALIDEMAIL','Ogiltig e-postadress (typ: du@hotmail.com)');
define('_INVALIDLINK','Du måste ange BÅDE länktitel och relaterad länk eller lämna bägge tomma.');
define('_ADDED','Adderad:');
define('_REVIEWER','Recensent:');
define('_REVIEWID','Recensions ID');
define('_LOOKSRIGHT','Ser detta korrekt ut?');
define('_RMODIFIED','modifierad');
define('_RADDED','adderad');
define('_ADMINLOGGED','Du är för närvarande inloggad som administratör... denna recension kommer att publiceras omedelbart');
define('_RTHANKS','Tack för att du skrev denna recension');
define('_MODIFICATION','modifikation');
define('_ISAVAILABLE','Den är nu tillgänglig i vår recensionsdatabas.');
define('_EDITORWILLLOOK','Våra redaktörer kommer nu att titta till den. Den bör vara tillgänglig inom kort!');
define('_RBACK','Tillbaka till recensionernas huvudsida');
define('_RWELCOME','Välkommen till Recensionsavdelningen');
define('_10MOSTPOP','10 mest lästa recensionerna');
define('_10MOSTREC','10 nyaste recensionerna');
define('_THEREARE','Det finns');
define('_REVIEWSINDB','recensioner i databasen');
define('_REVIEWSLETTER','Recensioner under bokstaven');
define('_NOREVIEWS','Det finns inga recensioner under denna bokstav');
define('_TOTALREVIEWS','Recension(er) hittades.');
define('_RETURN2MAIN','Åter till Huvudmenyn');
define('_REVIEWCOMMENT','Kommentarer på recensionen:');
define('_YOURNICK','Ditt Alias:');
define('_RCREATEACCOUNT','<a href="'.getlink("Your_Account").'">Bli medlem</a>');
define('_YOURCOMMENT','Din kommentar:');
define('_MYSCORE','Ditt betyg:');
define('_REVIEWMOD','Kontrollera Modifikation');
define('_RDATE','Datum:');
define('_RTITLE','Titel:');
define('_RTEXT','Text:');
define('_REVEMAIL','E-postmeddelande:');
define('_RLINK','Länk:');
define('_RLINKTITLE','Länktitel:');
define('_COVERIMAGE','Bild:');
define('_PREMODS','Förhandsvisa modifikationer');
define('_PAGE','Sida');
define('NO_GET','Snälla använd vårat formelär för att GET funktionen är inte tillåten');

/**************************
  ADMNINISTRATION SECTION
**************************/

define('_REVADMIN','Recensions administration');
define('_REVTITLE','Recensionens titel');
define('_REVDESC','Recensionens beskrivning');
define('_REVWAITING','Recensioner som väntar på att bli godkända');
define('_REVIMGINFO','Lägg din 150*150 pixlar bild i images/reviews');
define('_NOREVIEW2ADD','Inegn recension att lägga till');
define('_ADDREVIEW','Lägg till recensioner');
define('_CLICK2ADDREVIEW','Klicka här för att lägga till en recension');
define('_DELMODREVIEW','Ta bort / ändra en recension');
define('_MODREVINFO','Du kan enkelt ta bort/ändra recensioner genom att klicka <a href="'.getlink('Reviews').'">här</a> när du är inloggad som en Administratör.');
