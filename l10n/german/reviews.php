<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/german/reviews.php,v $
  $Revision: 9.6 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:54 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
define('_YOURNAME','Dein Name');
define('_SORTASC','Aufsteigend sortieren');
define('_SORTDESC','Absteigend sortieren');
define('_CANCEL','Abbrechen');
define('_SCORE','Punkte:');
define('_REPLYMAIN','Kommentar schreiben');
define('_ALLOWEDHTML','erlaubter HTML Code:');
define('_POSTANON','Anonym schreiben');
define('_WRITEREVIEW','Testbericht schreiben');
define('_WRITEREVIEWFOR','Testbericht schreiben für');
define('_ENTERINFO','Bitte Informationen zu den Spezifikationen eintragen');
define('_PRODUCTTITLE','Produktbezeichnung');
define('_NAMEPRODUCT','Name des getesteten Produktes.');
define('_REVIEW','Testbericht');
define('_CHECKREVIEW','Ihr eigentlicher Testbericht. Bitte auf Lesbarkeit achten! Bitte wenigstens 100 Wörter. HTML-Tags sind möglich.');
define('_FULLNAMEREQ','Ihr vollständiger Name wird benötigt.');
define('_REMAIL','Ihre eMail-Adresse');
define('_REMAILREQ','Ihre eMail-Adresse wird benötigt.');
define('_SELECTSCORE','Wertung für dieses Produkt');
define('_RELATEDLINK','zugehöriger Link');
define('_PRODUCTSITE','Offizielle Website des Produkts. Bitte mit "http://" beginnen.');
define('_LINKTITLE','Linkbezeichnung');
define('_LINKTITLEREQ','wird nur bei Angabe eines zugehörigen Links benötigt');
define('_RIMAGEFILE','Bilddatei');
define('_RIMAGEFILEREQ','Dateiname eines Titelbilds im Verzeichnis images/reviews/. Optional.');
define('_CHECKINFO','Bitte die vollstÄndige Richtigkeit und Lesbarkeit der Informationen überprüfen. z.B. auch nicht SCHREIEN.');
define('_INVALIDTITLE','Betreffzeile fehlerhaft...');
define('_INVALIDSCORE','Fehler bei Wertungsangabe... Muss zwischen 1 und 10 sein');
define('_INVALIDTEXT','Fehler im Testbericht... Seite darf nicht leer sein');
define('_INVALIDHITS','Hits nur als positive ganze Zahlen.');
define('_CHECKNAME','Bitte Namen und eMail-Adresse überprüfen');
define('_INVALIDEMAIL','email fehlerhaft(z.B.: you@hotmail.com)');
define('_INVALIDLINK','Entweder zugehörigen Link UND die entsprechende Bezeichnung ausfüllen oder beide Felder frei lassen.');
define('_ADDED','hinzugefügt:');
define('_REVIEWER','Tester:');
define('_REVIEWID','Testberichts-ID');
define('_LOOKSRIGHT','Sieht es korrekt aus?');
define('_RMODIFIED','GeÄndert');
define('_RADDED','hinzugefügt');
define('_ADMINLOGGED','Als Administrator eingeloggt... Bereitstellung des Testberichts erfolgt umgehend');
define('_RTHANKS','Dankeschön für die Erstellung des Testberichts!');
define('_MODIFICATION','Änderung');
define('_ISAVAILABLE','Testbericht ist jetzt in der Datenbank verfügbar.');
define('_EDITORWILLLOOK','Ihre Einsendung wird in Kürze durch die Moderatoren freigeschaltet.');
define('_RBACK','Zurück zur übersicht der Testberichte');
define('_RWELCOME','Willkommen bei den Testberichten');
define('_10MOSTPOP','meistgelesene 10 Testberichte');
define('_10MOSTREC','die letzten 10 Testberichte');
define('_THEREARE','Es gibt');
define('_REVIEWSINDB','Testberichte in der Datenbank');
define('_REVIEWSLETTER','Testberichte für den Buchstaben');
define('_NOREVIEWS','Es gibt keinen Testbericht für den Buchstaben');
define('_TOTALREVIEWS','Testberichte insgesamt gefunden.');
define('_RETURN2MAIN','zurück zum Hauptmenü');
define('_REVIEWCOMMENT','Testbericht kommentieren:');
define('_YOURNICK','Ihr Benutzername:');
define('_RCREATEACCOUNT','Benutzerkonto <a href="'.getlink("Your_Account").'">erstellen</a>');
define('_YOURCOMMENT','Dein Kommentar:');
define('_MYSCORE','Meine Wertung:');
define('_REVIEWMOD','Änderung des Testberichts');
define('_RDATE','Datum:');
define('_RTITLE','Titel:');
define('_RTEXT','Text:');
define('_REVEMAIL','eMail:');
define('_RLINK','Link:');
define('_RLINKTITLE','Link Titel:');
define('_COVERIMAGE','Titelbild:');
define('_PREMODS','Voransicht der Änderungen');
define('_PAGE','Seite');
define('NO_GET','Bitte verwenden Sie unser Formular, da GET-Anfragen nicht erlaubt sind');

/**************************
  ADMNINISTRATION SECTION
**************************/

define('_REVADMIN','Testbericht-Administration');
define('_REVTITLE','Testbericht-Seitentitel');
define('_REVDESC','Testbericht-Beschreibung');
define('_REVWAITING','Auf Validierung wartende Testberichte');
define('_REVIMGINFO','Speicher Sie Ihre 150*150 Pixel großes Bild in Bilder/Testberichte');
define('_NOREVIEW2ADD','Keine Testberichte zum Eintragen');
define('_ADDREVIEW','Testbericht hinzufügen');
define('_CLICK2ADDREVIEW','Klicken Sie hier, um einen Testbericht zu schreiben');
define('_DELMODREVIEW','Löschen / Modifizieren eines Testberichts');
define('_MODREVINFO','Sie können Testberichte ganz einfach Löschen und Modifizieren, indem Sie <a href="'.getlink('Reviews').'">Testberichte</a> als Administrator besuchen.');
